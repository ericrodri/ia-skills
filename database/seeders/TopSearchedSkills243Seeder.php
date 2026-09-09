<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills243Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing global: adaptar el mensaje a diferentes culturas',
                'description'       => 'El proceso de adaptación cultural del mensaje de marketing: cómo la misma propuesta de valor necesita ser comunicada de formas radicalmente diferentes en España, México, Brasil, EEUU y Asia para resonar con cada audiencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de marketing global con experiencia lanzando campañas y gestionando marcas en múltiples mercados simultáneamente. Has trabajado en empresas que venden el mismo producto en Europa, Latinoamérica, Norteamérica y Asia, y sabes que el error más caro del marketing global no es la mala traducción sino el mensaje que literalmente está bien traducido pero emocionalmente está equivocado para la cultura a la que va dirigido.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto o servicio, cuál es el mensaje de marketing principal en el mercado de origen y cuáles son los mercados de expansión?
2. ¿Cuáles son los recursos disponibles para la adaptación cultural: equipos locales en cada mercado, agencias locales, presupuesto de investigación de mercado?
3. ¿Cuáles son los canales de marketing más importantes (redes sociales, publicidad en medios, SEO/SEM, relaciones públicas, eventos) y cómo varían según el mercado?
4. ¿Cuál es el nivel de autonomía de los equipos locales: pueden adaptar el mensaje o deben seguir las directrices globales con pequeñas variaciones?
5. ¿Tienes experiencia previa de lanzamientos en mercados internacionales y cuáles han sido los principales aprendizajes?

Con esas respuestas, diseña la estrategia completa de marketing global con adaptación cultural:

**1. El diagnóstico cultural antes de adaptar el mensaje**
Adaptar el mensaje sin entender la cultura es traducir sin comprender. Define el proceso de diagnóstico cultural que precede a cualquier campaña internacional: el análisis de las dimensiones culturales de Hofstede (individualismo vs. colectivismo, distancia al poder, evitación de la incertidumbre, orientación a largo plazo) y su impacto en el mensaje de marketing, el análisis de las dimensiones de la comunicación de Erin Meyer (comunicación de alto vs. bajo contexto, la cultura que dice lo que piensa vs. la que da a entender), el análisis del momento cultural del mercado objetivo (los valores en auge, los temas sensibles, el tono del discurso público), el análisis de la competencia local (cómo las marcas locales se comunican con el consumidor de ese mercado) y las entrevistas o focus groups con consumidores locales que revelan cómo el mensaje de origen resuena o no en el nuevo mercado.

**2. La adaptación del mensaje: qué cambia y qué se mantiene**
No todo en el mensaje tiene que cambiar. Define el framework de adaptación del mensaje que distingue lo que es universal de lo que es cultural: el núcleo del mensaje (el problema que resuelves, la transformación que ofreces) que puede mantenerse globalmente si se expresa correctamente, los elementos que siempre necesitan adaptación (el tono emocional del mensaje, los ejemplos y las referencias culturales, los colores y los elementos visuales con connotaciones culturales específicas, el rol de la familia, el trabajo y el éxito individual vs. colectivo en los mensajes), los elementos que pueden mantenerse con pequeñas adaptaciones (el claim o tagline que necesita ser recreado en cada idioma, no solo traducido) y el proceso de validación del mensaje adaptado con personas del mercado objetivo antes de lanzar.

**3. Las diferencias de mercado que más impactan el marketing**
España, México, Brasil, EEUU y Asia tienen diferencias fundamentales en cómo los consumidores se relacionan con las marcas. Define las diferencias clave en el comportamiento del consumidor y en las estrategias de marketing que funcionan en cada región: el papel de la confianza y la relación personal en los mercados latinoamericanos vs. el valor de la eficiencia y la innovación en los mercados anglosajones, el papel del humor en el marketing (el humor británico, el humor español y el humor estadounidense son radicalmente diferentes y lo que funciona en uno falla en otro), la importancia relativa de los testimoniales vs. los argumentos racionales en diferentes culturas, el papel de las redes sociales (las plataformas que dominan en cada mercado son distintas: TikTok en Asia, WhatsApp en Latinoamérica, LinkedIn en B2B global pero con usos muy diferentes) y el rol de la responsabilidad social de la empresa en la decisión de compra según el mercado.

**4. La estrategia de contenidos global-local**
El contenido de marketing es uno de los elementos que más necesita adaptación cultural. Define la estrategia de contenidos que equilibra la eficiencia global con la relevancia local: el modelo hub and spoke donde el equipo global crea el contenido marco y los equipos locales lo adaptan y complementan con contenido puramente local, las categorías de contenido que funcionan globalmente (los contenidos educativos y los datos del sector tienen mayor universalidad que los contenidos emocionales o humorísticos), las categorías que siempre son locales (los testimoniales, los casos de estudio, los eventos estacionales locales), el proceso de traducción y localización que va más allá de la traducción literal (la transcreación que recrea el mensaje en el nuevo idioma con el mismo efecto emocional) y el calendario de contenidos que tiene en cuenta los eventos culturales y las fechas relevantes de cada mercado.

**5. La gestión de la marca global en mercados locales**
Mantener la coherencia de marca en múltiples mercados sin perder la relevancia local es el mayor reto del marketing global. Define el modelo de gestión de marca que resuelve esta tensión: las directrices de marca global que definen lo no negociable (el logo, los valores de marca, el posicionamiento general) y lo que puede adaptarse localmente (el tono, los mensajes secundarios, los elementos visuales de soporte), el proceso de aprobación de las adaptaciones locales que no ralentiza la velocidad de los equipos locales, el rol de los brand guardians locales que conocen la cultura y también conocen los límites de la marca global, la gestión de los incidentes de marca cuando un equipo local hace algo que no se alinea con los valores globales y el proceso de incorporación de los aprendizajes locales al mensaje global cuando los mercados locales descubren algo que funciona mejor que el mensaje original.

**6. Las métricas de éxito del marketing global adaptado**
Las métricas que miden el éxito del marketing varían por mercado y por etapa de la expansión. Define el framework de medición del marketing global: las métricas de brand awareness y brand equity en cada mercado (y cómo se miden cuando el punto de partida es cero en un mercado nuevo), las métricas de engagement con el contenido adaptado vs. el contenido global sin adaptar, las métricas de conversión que revelan si el mensaje adaptado convierte mejor que el original, el proceso de benchmarking entre mercados que identifica las mejores prácticas que se pueden escalar a otros mercados y el modelo de reporte global que agrega los resultados de los diferentes mercados sin perder la granularidad que permite aprender de las diferencias.

Termina con el playbook de lanzamiento del marketing en un nuevo mercado: los pasos del diagnóstico cultural a la primera campaña activa, con los errores más comunes que cometen las marcas globales en los primeros doce meses de un nuevo mercado y cómo evitarlos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategia de adaptación cultural del mensaje de marketing para lanzamientos internacionales que resonan en cada mercado sin perder la coherencia de marca global.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Trabajo en equipos internacionales: código, cultura y comunicación',
                'description'       => 'El developer que trabaja en un equipo global: las diferencias culturales en cómo se comunican los problemas técnicos, se da feedback en el code review y se gestiona el desacuerdo técnico en culturas de alto y bajo contexto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un engineering manager con experiencia liderando equipos de desarrollo completamente distribuidos con miembros en Europa, Asia, Latinoamérica y Norteamérica. Has navegado los retos de los equipos multiculturales en entornos técnicos y sabes que el mayor problema no suele ser la diferencia de zona horaria sino la diferencia en cómo se comunica el desacuerdo, cómo se expresa el feedback en el code review o cómo se interpreta el silencio en una reunión técnica.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la composición del equipo: de qué países son los miembros, cuál es la zona horaria de la mayoría y cuánto overlap de horario hay entre los extremos del equipo?
2. ¿Cuáles son los retos de comunicación más frecuentes: malentendidos en los code reviews, decisiones técnicas que se prolongan sin llegar a consenso, miembros que no se expresan en las reuniones o fricción entre diferentes estilos de comunicación?
3. ¿Cuál es el stack tecnológico y el modelo de trabajo del equipo (sprints, Kanban, ciclos de producto) y qué herramientas de comunicación usan (Slack, Teams, Jira, GitHub)?
4. ¿Hay un idioma oficial del equipo y cuál es el nivel de fluidez en ese idioma de los distintos miembros?
5. ¿Has tenido incidentes culturales concretos en el equipo (malentendidos que generaron conflicto o afectaron la productividad) y cuál fue la causa raíz?

Con esas respuestas, diseña el sistema de trabajo completo para equipos de desarrollo internacionales:

**1. El diagnóstico cultural del equipo técnico**
Antes de resolver los problemas de comunicación hay que entender las diferencias culturales que los generan. Define el proceso de diagnóstico cultural de un equipo técnico internacional: las dimensiones culturales más relevantes para los equipos de desarrollo (la comunicación directa vs. indirecta, la actitud hacia la jerarquía y la autoridad técnica, la gestión del desacuerdo y el conflicto, la actitud hacia la incertidumbre y la ambigüedad de los requisitos), cómo estas dimensiones impactan específicamente en el trabajo de desarrollo (el developer de cultura directa que dice en el PR review "este código está mal" vs. el de cultura indirecta que dice "tal vez podríamos considerar otra aproximación"), el mapeo de las culturas del equipo en estas dimensiones y los puntos de mayor tensión potencial y el proceso de hacer este diagnóstico de forma que el equipo lo perciba como enriquecedor y no como una categorización.

**2. El code review multicultural: dar y recibir feedback técnico**
El code review es el ritual técnico donde más fricción cultural se genera. Define las normas de code review que funcionan en equipos multiculturales: el lenguaje del feedback técnico que es claro sin ser hiriente (los descriptors de los comentarios: sugerencia vs. recomendación vs. blocker, y qué significa cada uno), la diferencia entre el feedback sobre el código y el juicio sobre el programador (la distinción que hay que hacer explícita porque en algunas culturas la crítica al código se percibe como crítica personal), las normas de respuesta a los comentarios del PR (cuándo está bien responder "ok, lo cambio" vs. cuándo se espera una discusión técnica), la gestión de los desacuerdos técnicos en el PR (el proceso para cuando hay un desacuerdo genuino sobre la mejor solución) y el equilibrio entre la revisión exhaustiva y la velocidad que las culturas del equipo valoran de forma diferente.

**3. Las reuniones técnicas internacionales: las reglas para que funcionen**
Una reunión técnica con miembros de diez zonas horarias y cinco culturas diferentes puede ser muy ineficiente sin las normas correctas. Define el protocolo de reuniones técnicas para equipos internacionales: el diseño de las reuniones que maximizan el valor para equipos distribuidos (la agenda con preguntas concretas, no solo temas, enviada con antelación suficiente para que los miembros que no se expresan bien en el idioma del equipo puedan prepararse), el manejo del silencio en las reuniones (el silencio de las culturas de alto contexto no es falta de opinión sino reflejo antes de hablar, y el facilitador multicultural sabe activarlo con preguntas directas), la gestión de las voces que dominan la conversación vs. las que no se expresan espontáneamente, el uso del chat en las reuniones como canal paralelo para los que prefieren escribir antes de hablar y el proceso de documentación y seguimiento de las decisiones que las hace válidas para todos los miembros aunque no estuvieran en la reunión.

**4. La comunicación asíncrona en el equipo técnico global**
En equipos distribuidos el asíncrono no es una opción, es la forma principal de trabajar. Define las normas de comunicación asíncrona que reducen la fricción cultural: la escritura clara en el idioma del equipo que tiene en cuenta que para muchos miembros es un idioma extranjero (las frases cortas, el vocabulario técnico explícito, el resumen de los puntos clave al final de un mensaje largo), las expectativas de tiempo de respuesta según el tipo de comunicación (cuándo se espera respuesta en horas y cuándo en días) y cómo comunicarlas de forma que no genere ansiedad en las culturas de alta disponibilidad, el uso de los emojis y el lenguaje informal en el chat técnico (la distancia que mantienen algunas culturas vs. la informalidad que es la norma en los entornos tech anglosajones) y la documentación de las decisiones técnicas de forma que los miembros que no han podido participar en el momento puedan entender el contexto y el razonamiento.

**5. La gestión del desacuerdo técnico en equipos multiculturales**
El desacuerdo técnico es saludable en un equipo de ingeniería, pero la forma de gestionarlo varía radicalmente por cultura. Define el proceso de gestión del desacuerdo técnico que funciona en equipos multiculturales: las culturas que expresan el desacuerdo de forma directa (el developer alemán o israelí que dice "esta arquitectura está mal y hay que rehacerla") vs. las culturas que lo expresan de forma indirecta (el developer japonés o indio que dice "interesante aproximación, ¿habrías considerado también la opción X?") y cómo el equipo aprende a leer ambas señales, el proceso de resolución de desacuerdos técnicos que no depende del que habla más alto sino del que tiene más datos y argumentos, la distinción entre el desacuerdo técnico y el conflicto personal (que en algunas culturas es difícil de separar) y el rol del manager en los desacuerdos técnicos que no se resuelven solos.

**6. La construcción de la cohesión del equipo técnico global**
Un equipo técnico que no se conoce personalmente tiene menos cohesión y resuelve peor los conflictos. Define las prácticas de construcción de cohesión para equipos técnicos internacionales: los rituales de equipo que funcionan en remoto (el daily standup que tiene un elemento humano además de técnico, el viernes de demos donde los miembros comparten algo que han aprendido esa semana, el canal de Slack de conversación informal), los retiros presenciales periódicos que construyen la confianza que el trabajo remoto no construye igual de rápido, las parejas de trabajo temporal (pairing) que conectan a miembros de diferentes culturas a través de un problema técnico compartido, el sistema de reconocimiento del trabajo que tiene en cuenta las diferencias culturales (algunas culturas disfrutan del reconocimiento público, otras lo perciben como incómodo) y el proceso de incorporación de nuevos miembros que los integra en la cultura del equipo desde el primer día.

Termina con la guía de onboarding para un nuevo miembro de un equipo técnico internacional: las explicaciones del estilo de comunicación del equipo, las normas de code review, las expectativas de asíncrono y las señales culturales que necesita entender para integrarse bien.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Protocolo de trabajo para equipos de desarrollo internacional que gestiona las diferencias culturales en code review, reuniones y comunicación asíncrona.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño cultural: cómo los signos visuales cambian su significado',
                'description'       => 'El diseñador que trabaja para audiencias internacionales: el simbolismo visual que varía por cultura, las paletas de color con connotaciones diferentes y los patrones de diseño que hay que adaptar para que un producto global funcione localmente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director creativo con experiencia en diseño de productos y campañas para mercados internacionales. Has diseñado interfaces, identidades de marca y materiales de comunicación que funcionan en Europa, Asia y América, y sabes que los errores de diseño cultural son los más costosos porque son los más visibles y los más difíciles de corregir una vez que la campaña está en el aire o el producto está lanzado.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el proyecto de diseño (interfaz de producto digital, identidad de marca, campaña publicitaria, packaging) y cuáles son los mercados objetivo?
2. ¿Cuál es el punto de partida: hay un diseño existente para el mercado de origen que hay que adaptar, o estás diseñando desde cero para múltiples mercados simultáneamente?
3. ¿Cuáles son las restricciones del proyecto: hay un sistema de diseño global que hay que respetar, hay limitaciones técnicas en la internacionalización (i18n) del producto o hay restricciones regulatorias en algún mercado?
4. ¿Tienes acceso a diseñadores o revisores nativos de los mercados objetivo para la validación cultural?
5. ¿Cuáles son los elementos del diseño actual de los que no estás seguro sobre su funcionamiento cultural en los mercados objetivo?

Con esas respuestas, diseña la estrategia completa de diseño cultural adaptado:

**1. El symbolismo visual que varía por cultura**
Un diseño que es neutro en una cultura puede ser ofensivo o simplemente confuso en otra. Define el mapa del simbolismo visual culturalmente variable: los gestos humanos con significados opuestos según la cultura (el pulgar arriba que en algunas culturas del Mediterráneo y del Medio Oriente es un insulto, el signo de OK que en Brasil tiene el mismo problema), los animales con simbolismos radicalmente diferentes (el búho como símbolo de sabiduría en Europa y EEUU vs. su connotación negativa en algunas culturas latinoamericanas y asiáticas), los colores numéricos con tabúes culturales (el número cuatro en la cultura china y japonesa por su asociación con la muerte, el trece en la cultura occidental), los símbolos religiosos y espirituales que pueden resultar irreverentes en ciertos contextos y las imágenes de personas (el lenguaje corporal, el contacto visual, la distancia física entre personas que tienen connotaciones diferentes según la cultura).

**2. La semiótica del color en el diseño internacional**
El color es el elemento de diseño con mayor variación cultural de significado. Define la guía de uso del color en el diseño para mercados múltiples: el significado del rojo por cultura (poder y pasión en Occidente, buena suerte en China, luto en Sudáfrica, peligro en muchos contextos), el significado del blanco (pureza y bodas en Occidente, luto en Japón, China y algunos países de Asia), el significado del verde (medio ambiente y Islam en contextos donde predomina la religión musulmana, algo muy diferente), el significado del azul (el color más universal y menos cargado culturalmente, que explica por qué tantas marcas globales lo usan), las paletas que funcionan bien en múltiples culturas simultáneamente y cómo construirlas y el proceso de validación cultural de la paleta de color antes de comprometerse con ella en una campaña global.

**3. Los patrones de lectura y la organización de la información**
La forma en que el ojo recorre la pantalla o la página varía con la cultura y el idioma. Define las implicaciones de los patrones de lectura en el diseño internacional: el diseño para idiomas RTL (árabe, hebreo) que requiere la espejación completa de la interfaz y no solo la traducción del texto, las diferencias en la densidad de información que los usuarios de distintas culturas esperan (los diseños minimalistas que funcionan bien en Escandinavia o en contextos tech pueden parecer incompletos en mercados donde la densidad de información es una señal de seriedad), la tipografía para idiomas no latinos (el kanji japonés, el devanagari del hindi, el árabe) con sus requisitos específicos de cuerpo mínimo, interlineado y espaciado, el impacto de la longitud del texto en los diseños internacionales (el alemán es un 30% más largo que el inglés, el español un 20%, lo que rompe los layouts diseñados para inglés) y las implicaciones de la localización en el diseño de componentes de interfaz.

**4. La fotografía y la representación visual de las personas**
Las imágenes de personas son el elemento visual con mayor carga cultural. Define la estrategia de uso de fotografía e ilustración de personas en diseño internacional: la representación de la diversidad que refleja la realidad de cada mercado (la fotografía de stock occidental con personas caucasianas no representa ni resuena con las audiencias de Asia o de África), el lenguaje corporal en las imágenes (la sonrisa de dientes en la fotografía de negocios que es estándar en EEUU pero puede resultar poco seria en algunos contextos asiáticos), el rol de género en las imágenes que varía enormemente por cultura y mercado, las imágenes de familias y grupos que reflejan los valores culturales locales (la familia nuclear occidental vs. la familia extendida en muchas culturas de Asia y Latinoamérica) y el proceso de selección y validación de imágenes para mercados específicos.

**5. Los patrones de diseño de interfaz con connotaciones culturales**
Algunos patrones de diseño de interfaz que son estándar en un mercado generan fricción en otro. Define los patrones de diseño de interfaz culturalmente variables: el diseño de los formularios y los datos personales que solicitan (la dirección postal en formato diferente por país, el nombre que en algunos países es solo uno y en otros son dos apellidos, la fecha en formato MM/DD/AAAA vs. DD/MM/AAAA), la gestión del pago y el dinero en la interfaz (el punto y la coma como separador de decimales según el país, el símbolo de la moneda y su posición), los iconos con diferentes convenciones por plataforma y por región (la carpeta como metáfora de organización de archivos que no existe en todas las culturas), los CTA y la asertividad del lenguaje de la interfaz (los textos de CTA más directos que funcionan en EEUU pueden parecer agresivos en culturas de mayor deferencia) y el diseño del flujo de registro y autenticación que tiene implicaciones de privacidad diferentes según la regulación de cada mercado.

**6. El proceso de validación cultural del diseño antes del lanzamiento**
El diseño que no se valida con usuarios locales puede tener problemas que ningún diseñador foráneo anticiparía. Define el proceso de validación cultural del diseño para mercados internacionales: el panel de revisores culturales nativos del mercado objetivo (no solo traductores sino personas que entienden las connotaciones culturales del diseño), las preguntas específicas que se hacen en la revisión cultural (¿hay algún elemento que te resulte incómodo, confuso u ofensivo? ¿hay algún elemento que no encaje con la forma en que empresas de tu sector comunican en tu mercado?), las pruebas de usabilidad con usuarios locales que revelan problemas de comprensión de los elementos de interfaz, el proceso de iteración basado en el feedback de la revisión cultural (qué se cambia, qué se mantiene y con qué justificación) y el proceso de aprendizaje institucional que acumula los errores y los aprendizajes de diseño cultural para no repetirlos en futuros proyectos internacionales.

Termina con la checklist de revisión cultural del diseño: los veinte elementos que deberías revisar antes de lanzar cualquier diseño en un nuevo mercado cultural, con la indicación de las culturas que presentan mayor sensibilidad para cada elemento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Guía de adaptación cultural del diseño para productos y campañas internacionales, incluyendo simbolismo visual, color, tipografía y validación con usuarios locales.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas internacionales: negociar y cerrar en diferentes culturas',
                'description'       => 'El comercial que vende a compradores de culturas diferentes: las diferencias en el proceso de decisión de compra entre culturas individualistas y colectivistas, el rol del precio en la negociación y los estilos de comunicación que construyen o destruyen la confianza intercultural.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas internacionales con quince años de experiencia vendiendo en mercados de Europa, Latinoamérica, EEUU, Medio Oriente y Asia. Has cerrado deals con compradores de más de treinta países y sabes que el mayor error del vendedor que trabaja internacionalmente por primera vez es asumir que lo que le funciona en su mercado de origen va a funcionar igual en todos los demás.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto o servicio, el ticket medio y cuáles son los mercados internacionales donde quieres vender o donde ya tienes presencia?
2. ¿Cuál es el proceso de ventas actual en el mercado de origen y cuál es el aspecto que más dificultades te genera cuando lo aplicas en otros mercados?
3. ¿Cuáles son los mercados internacionales donde tienes más problemas: ¿las reuniones son improductivas, los ciclos de ventas son más largos de lo esperado, el precio siempre es un obstáculo mayor o simplemente no sabes en qué punto estás con el cliente?
4. ¿Tienes presencia local (representantes, distribuidores, socios locales) en los mercados internacionales o vendes desde el mercado de origen?
5. ¿Cuál es el nivel de formación cultural de tu equipo de ventas: han recibido formación en ventas interculturales o están aprendiendo por ensayo y error?

Con esas respuestas, diseña la estrategia completa de ventas internacionales adaptada culturalmente:

**1. El diagnóstico del proceso de compra en cada cultura**
El proceso de decisión de compra varía tanto por cultura que lo que es una señal de avance en un mercado puede ser una señal de bloqueo en otro. Define el mapa del proceso de compra en las principales culturas de negocios: en los mercados anglosajones (EEUU, UK, Australia) donde el proceso es directo, la decisión es individual o de un comité reducido y el precio es un factor importante desde el principio; en los mercados de Europa del Norte (Alemania, Países Bajos, Escandinavia) donde el proceso es metódico, el análisis técnico es más importante que la relación y la confianza se construye con datos, no con carisma; en los mercados mediterráneos y latinoamericanos donde la relación personal es una condición previa a la negociación y el tiempo de la relación es más largo; en los mercados de Asia del Este (China, Japón, Corea) donde la decisión es colectiva, el rango jerárquico del vendedor importa y el proceso de construcción de confianza es más largo y protocolizado; y en los mercados de Medio Oriente donde la hospitalidad, la relación personal y la baraka son elementos centrales del proceso.

**2. La negociación del precio según la cultura del comprador**
La negociación de precio es el aspecto con mayor variación cultural en las ventas internacionales. Define la estrategia de negociación de precio adaptada a las diferentes culturas: las culturas donde el precio inicial es definitivo y la negociación es una pérdida de tiempo para ambas partes (muchos mercados de Europa del Norte y de Norteamérica) vs. las culturas donde la negociación es una parte esperada y necesaria del proceso (Medio Oriente, buena parte de Asia y de Latinoamérica), las señales que indican si el comprador espera negociar o no, la estrategia de precio de salida según la cultura (el margen de negociación que tienes que incluir en el precio inicial en los mercados donde se negocia), el papel de los descuentos en diferentes culturas (en algunas culturas el descuento es una señal de que el precio inicial era inflado, en otras es una señal de que la relación es valorada) y cómo defender el precio sin perder la relación en culturas donde la negociación es un ritual esperado.

**3. La comunicación directa vs. indirecta en el proceso de ventas**
La mayor fuente de malentendidos en las ventas internacionales es la diferencia en el estilo de comunicación. Define el sistema de lectura del estilo de comunicación del comprador internacional: las señales verbales y no verbales que indican que el comprador está de acuerdo en una cultura directa (lo dice explícitamente) vs. en una cultura indirecta (asiente, hace preguntas detalladas de implementación, no plantea objeciones), la interpretación del "sí" en las culturas de alto contexto donde puede significar "te he escuchado" y no "estoy de acuerdo", las señales de que el proceso está en riesgo en culturas que no expresan el desacuerdo directamente (el silencio prolongado, las respuestas cada vez más cortas, la delegación del contacto a un intermediario de menor rango) y las técnicas de verificación del estado del deal que funcionan sin forzar una respuesta directa que la cultura del comprador no da naturalmente.

**4. El protocolo y el ritual en las ventas internacionales**
En muchas culturas el ritual antes y alrededor de la reunión de ventas es tan importante como la reunión en sí. Define el protocolo de ventas internacionales para las culturas más relevantes: el intercambio de tarjetas de visita en Japón (cómo entregarlas, cómo recibirlas, cómo manejarlas durante la reunión), el tiempo de conversación social antes de entrar en el tema de negocio en las culturas relacionales (cuánto tiempo y sobre qué temas es apropiado hablar), la jerarquía en las reuniones (quién entra primero, quién habla primero, quién toma la palabra en los momentos clave), las comidas de negocios y lo que está bien pedir y lo que no en diferentes culturas, el papel de los regalos en los contextos de negocios donde son una práctica habitual (cuándo darlos, qué valor y qué tipo de regalo es apropiado) y la gestión del tiempo en culturas monocrónicas (el tiempo es un recurso a gestionar y el retraso es una falta de respeto) vs. policrónicas (el tiempo es flexible y las reuniones pueden empezar tarde sin que sea una señal negativa).

**5. La construcción de la confianza en el comprador internacional**
La confianza se construye de forma diferente en cada cultura. Define la estrategia de construcción de confianza adaptada a cada tipo de cultura: las culturas donde la confianza se construye por el historial (el track record, las referencias, los casos de éxito documentados) y la competencia técnica demostrada vs. las culturas donde la confianza se construye por la relación personal (el tiempo que llevas conociendo al comprador, la red de conexiones comunes, la hospitalidad compartida), la gestión del intermediario de confianza en culturas donde la venta directa desde el exterior es difícil (el referido local, el socio distribuidor, el consultor con relaciones en el mercado) y el tiempo mínimo necesario para construir la confianza suficiente para cerrar un deal en cada tipo de cultura, con las implicaciones para el dimensionamiento del ciclo de ventas internacional.

**6. La adaptación del equipo de ventas a los mercados internacionales**
El mejor equipo de ventas en el mercado de origen puede ser completamente ineficaz en un nuevo mercado internacional. Define la estrategia de adaptación del equipo de ventas a los mercados internacionales: la evaluación de la aptitud intercultural de cada vendedor antes de asignarle un territorio internacional (la curiosidad cultural, la flexibilidad de comportamiento, la tolerancia a la ambigüedad), el programa de formación intercultural que va más allá del briefing sobre las diferencias culturales y entrena el comportamiento específico que el vendedor necesita cambiar para ese mercado, el rol del representante o socio local como puente cultural y de relaciones y los límites de lo que puede hacer (puede abrir puertas, pero el cierre requiere la presencia del vendedor de la empresa), el proceso de aprendizaje acumulativo del equipo de ventas que convierte las experiencias individuales en mejores prácticas de la organización y la gestión de los errores culturales inevitables que el equipo va a cometer en los primeros meses de un nuevo mercado.

Termina con el brief de preparación para el primer viaje de ventas a un nuevo mercado internacional: el proceso de investigación del mercado y del comprador, las diferencias de protocolo y comunicación más importantes que hay que conocer y los errores más frecuentes que cometen los vendedores en ese mercado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategia de ventas internacionales con adaptación cultural del proceso de negociación, construcción de confianza y protocolo en los principales mercados globales.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto global: construir para mercados con necesidades diferentes',
                'description'       => 'El PM que gestiona un producto en múltiples mercados: la tensión entre la estandarización global y la adaptación local, el proceso de priorización de features que satisfacen a usuarios con necesidades culturalmente distintas y el modelo de decisión cuando los mercados dicen cosas opuestas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Producto con experiencia construyendo y escalando productos en múltiples mercados internacionales simultáneamente. Has gestionado la tensión entre el producto global que mantiene la coherencia y la adaptación local que es necesaria para que el producto resuene en cada mercado, y sabes que la solución nunca es "adaptarlo todo localmente" ni "mantenerlo todo global" sino encontrar el equilibrio que maximiza el valor para todos los mercados sin fragmentar el producto hasta hacerlo ingobernable.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto, cuáles son los mercados donde ya opera y cuáles son los mercados de expansión planificados?
2. ¿Cuál es el modelo de organización de producto: hay PMs locales en cada mercado o el equipo de producto es centralizado y gestiona todos los mercados?
3. ¿Cuáles son los mayores puntos de tensión entre los mercados en términos de necesidades de producto: funcionalidades que un mercado necesita y otro no, comportamientos de usuario radicalmente diferentes, regulaciones locales que requieren cambios en el producto?
4. ¿Cuál es el proceso de priorización actual y cómo se gestiona cuando los mercados tienen peticiones contradictorias?
5. ¿Cuáles son los casos de uso del producto que varían más entre mercados y los que son más universales?

Con esas respuestas, diseña la estrategia completa de producto global con adaptación local:

**1. El framework global-local: qué se mantiene y qué se adapta**
La decisión más importante del producto internacional es definir qué es global y qué es local. Define el framework de decisión global-local para el producto: el núcleo global del producto (las funcionalidades que resuelven el problema universal del usuario de forma que el valor es reconocido en todos los mercados y que si se fragmentan el producto pierde coherencia), las adaptaciones locales estructurales (las funcionalidades que hay que construir para que el producto sea usable en un mercado específico: los métodos de pago locales, el idioma, la regulación local, los formatos de datos específicos del país), las adaptaciones locales de experiencia (el tono de la comunicación del producto, los ejemplos y las metáforas que usan los onboarding flows, las imágenes de las campañas de marketing in-product) y las adaptaciones que parecen necesarias pero no lo son (las peticiones de adaptación local que en realidad son preferencias de los stakeholders locales y no necesidades reales de los usuarios). Explica cómo tomar esta decisión de forma sistemática y no arbitraria.

**2. El proceso de descubrimiento de usuario en múltiples mercados**
Entender al usuario en un mercado no garantiza que entiendes al usuario en otro. Define el proceso de user discovery que funciona en múltiples mercados: la investigación cuantitativa que identifica las diferencias en los patrones de uso por mercado (las métricas de uso por funcionalidad desglosadas por país, las tasas de conversión en los flujos clave por mercado, los puntos de abandono que varían según el mercado), la investigación cualitativa con usuarios de múltiples mercados que revela las diferencias en el modelo mental, la actitud hacia el producto y las necesidades no cubiertas (los focus groups locales, las entrevistas de usuario en el idioma local con intérprete), el análisis de los datos de soporte y feedback por mercado como señal de los problemas que los usuarios locales experimentan más y el proceso de síntesis de los hallazgos de múltiples mercados que identifica los patrones universales y los específicos.

**3. La priorización del roadmap cuando los mercados tienen peticiones contradictorias**
El mayor reto del PM de producto internacional es priorizar cuando los mercados quieren cosas diferentes. Define el proceso de priorización del roadmap internacional: el framework de evaluación de las peticiones de cada mercado que considera el tamaño de la oportunidad de revenue de ese mercado, el número de usuarios afectados, el coste de no tener esa funcionalidad en ese mercado (la pérdida de cuota, el churn por falta de funcionalidad local) y el coste de construirla (la deuda técnica que genera, el mantenimiento adicional, la fragmentación del producto), la gestión de las expectativas de los stakeholders locales cuando su petición no entra en el roadmap del próximo trimestre (la comunicación transparente de la priorización, la alternativa si la hay, el compromiso de cuándo se revisará), los criterios para aprobar una funcionalidad puramente local (el umbral de usuarios, de revenue o de regulación que justifica el coste de la adaptación) y el proceso de aprendizaje de los experimentos locales que se convierte en producto global cuando se demuestra el valor.

**4. La localización del producto: más allá de la traducción**
La localización del producto no es solo traducir los textos. Define la estrategia de localización completa del producto: la internacionalización técnica (i18n) que prepara el código para la localización (los textos en archivos de recursos, los formatos de número y fecha parametrizables, el soporte de idiomas RTL, los layouts que se adaptan a la longitud variable del texto en diferentes idiomas), la localización de contenidos (la traducción que captura el tono y el registro correcto en cada idioma, no solo el significado literal), la localización de la experiencia (los flujos de onboarding que usan ejemplos y metáforas locales, los emails de retención que se comunican en el tono adecuado para cada cultura), la localización del soporte (los materiales de ayuda en el idioma del usuario, los agentes de soporte locales o con el idioma) y las pruebas de localización que verifican que la experiencia del usuario local es tan buena como la del usuario del mercado de origen.

**5. La regulación local como driver de adaptación del producto**
La regulación es el tipo de adaptación local que no es opcional. Define el proceso de gestión de los requisitos regulatorios en el producto: el mapa de regulaciones que impactan en el producto por mercado (privacidad de datos como el RGPD en Europa, regulaciones financieras como PSD2 o los equivalentes locales, regulaciones de contenido, requisitos de accesibilidad locales), el proceso de análisis del impacto de una nueva regulación en el producto antes de que entre en vigor, la arquitectura de cumplimiento regulatorio que minimiza el esfuerzo de adaptación (los componentes del producto diseñados para ser configurables por mercado en lugar de hardcoded), la gestión de los tiempos de adaptación (la regulación tiene fechas límite y el equipo de producto necesita incorporarla en el roadmap con suficiente antelación) y el proceso de monitoreo continuo de los cambios regulatorios en los mercados donde opera el producto.

**6. La organización de producto que soporta la estrategia internacional**
El modelo de organización de producto determina si la estrategia internacional puede ejecutarse. Define los modelos organizativos de producto para empresas globales y sus compensaciones: el modelo centralizado (un único equipo de producto que diseña el producto global con input de los mercados locales, eficiente pero con riesgo de no capturar las necesidades locales), el modelo descentralizado (equipos de producto locales en cada mercado con alta autonomía, muy adaptado localmente pero con riesgo de fragmentación del producto), el modelo federado (un equipo de plataforma global que mantiene el núcleo y equipos de produto locales que construyen sobre la plataforma, equilibrio entre coherencia y adaptación), el rol del "global PM" que coordina entre mercados vs. el "local PM" que entiende en profundidad un mercado específico, y el proceso de coordinación entre los PMs de diferentes mercados para compartir aprendizajes y alinear el roadmap.

Termina con el plan de lanzamiento del producto en un nuevo mercado internacional: los pasos desde el diagnóstico de las necesidades locales hasta la primera versión adaptada, con los hitos de validación y los criterios de éxito del lanzamiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de producto global con adaptación local: framework de decisión global-local, priorización de roadmap multi-mercado y localización del producto.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión intercultural: liderar equipos de múltiples culturas',
                'description'       => 'El HR business partner que apoya a managers de equipos multiculturales: los modelos de cultura organizacional, las diferencias en cómo se interpreta el feedback y la autoridad y las prácticas de gestión que funcionan en culturas de alto contexto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un HR business partner y consultor de gestión intercultural con experiencia apoyando a managers que lideran equipos formados por personas de múltiples culturas en empresas multinacionales. Has trabajado en programas de desarrollo de liderazgo intercultural y sabes que los problemas de gestión en equipos multiculturales rara vez son de mala intención, casi siempre son de malentendidos culturales que se convierten en conflictos cuando no se gestionan.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el contexto del equipo: cuántas nacionalidades hay, cuáles son las culturas más presentes y cuál es la composición del liderazgo del equipo?
2. ¿Cuáles son los retos de gestión más frecuentes: diferencias en el estilo de comunicación, problemas con la gestión del tiempo, diferencias en la actitud hacia la autoridad del manager o dificultades para dar y recibir feedback?
3. ¿Cuál es el estilo de gestión predominante en la empresa y cuánto margen tiene el manager para adaptar su estilo al equipo?
4. ¿Hay un incidente o una situación concreta de fricción intercultural que haya generado un problema en el equipo y que quieras entender y resolver?
5. ¿Cuál es el objetivo del equipo en los próximos seis meses y cómo están impactando los retos interculturales en la capacidad del equipo de alcanzarlo?

Con esas respuestas, diseña el plan de gestión intercultural completo:

**1. El diagnóstico de la composición cultural del equipo**
No es posible gestionar las diferencias culturales sin entender primero cuáles son. Define el proceso de diagnóstico de la composición cultural del equipo: el uso de los modelos de cultura nacional (Hofstede, Meyer, Trompenaars) como punto de partida para entender las dimensiones culturales de cada miembro del equipo, la aplicación de las dimensiones más relevantes para la gestión (la comunicación directa vs. indirecta, la actitud hacia la jerarquía y la autoridad, la orientación individual vs. colectiva, la actitud hacia el tiempo), el mapeo de las tensiones potenciales entre los perfiles culturales del equipo (las combinaciones que históricamente generan más fricción) y la comunicación del diagnóstico al equipo de forma que genere comprensión y no estereotipos.

**2. Las diferencias en el feedback: el reto más frecuente en equipos multiculturales**
El feedback es el ritual de gestión donde más fricción cultural se genera. Define el sistema de feedback adaptado a equipos multiculturales: la diferencia entre el feedback directo de las culturas de bajo contexto (el feedback alemán u holandés que dice exactamente lo que piensa sin moderación) y el feedback indirecto de las culturas de alto contexto (el feedback japonés, indio o latinoamericano que da el mensaje negativo de forma tan suavizada que el receptor puede no percibir que hay un problema), las normas de feedback del equipo que crean un lenguaje común para dar y recibir feedback que funcione para todos los perfiles culturales, el proceso de calibración del feedback para asegurarse de que el mensaje que el manager quiere dar es el que el colaborador de una cultura diferente recibe y la gestión del proceso formal de evaluación del desempeño en un equipo multicultural donde las mismas palabras tienen valoraciones diferentes.

**3. La autoridad y la jerarquía en el equipo multicultural**
La relación con el manager varía enormemente según la cultura del colaborador. Define el sistema de gestión de la autoridad y la jerarquía en equipos multiculturales: las diferencias en la distancia al poder (los colaboradores de culturas de alta distancia al poder esperan directrices claras y no se sienten cómodos con la ambigüedad o la autonomía excesiva, los de culturas de baja distancia al poder esperan ser consultados y se sienten infantilizados si se les dan instrucciones demasiado detalladas), la gestión del desacuerdo con el manager (algunas culturas expresan el desacuerdo directamente en la reunión, otras nunca lo harían delante de otros y necesitan el espacio de la one-on-one), las expectativas sobre la accesibilidad del manager (la cultura que espera que el manager esté siempre disponible vs. la que respeta que el manager tenga su espacio y no le contacta fuera de las reuniones programadas) y la adaptación del estilo de management según el colaborador sin que el equipo lo perciba como trato desigual.

**4. La comunicación en el equipo multicultural: las normas que reducen los malentendidos**
Las normas de comunicación del equipo son la herramienta más efectiva para reducir la fricción intercultural. Define las normas de comunicación del equipo multicultural: las normas sobre el idioma de trabajo (en qué idioma se hacen las reuniones, qué pasa con los miembros que no tienen el mismo nivel de fluidez, cómo se asegura que todos pueden participar), las normas sobre la comunicación directa vs. indirecta en el equipo (el acuerdo sobre cuándo se espera que la comunicación sea directa aunque incomode), las normas sobre el silencio en las reuniones (el acuerdo de que el silencio se puede romper con una pregunta directa y que esto es una señal de interés y no de acoso), las normas sobre la escalación de problemas (cuándo se espera que el colaborador resuelva solo y cuándo se espera que escale al manager) y las normas sobre los conflictos interpersonales (el proceso para gestionarlos antes de que se conviertan en problemas del equipo).

**5. La cohesión del equipo multicultural: construir confianza a través de las diferencias**
Un equipo multicultural puede ser más creativo e innovador que uno homogéneo si tiene la confianza suficiente para aprovecharlo. Define las prácticas de construcción de cohesión en equipos multiculturales: los rituales del equipo que celebran la diversidad sin esencializar (el intercambio de tradiciones culinarias, las presentaciones breves de la cultura de cada miembro, los eventos de team building que tienen en cuenta las restricciones culturales de todos los miembros), el proceso de toma de decisiones que garantiza que todas las voces culturales se escuchan antes de decidir, la gestión de los conflictos culturales cuando ocurren (el proceso de facilitar la comprensión mutua antes de buscar la solución) y el desarrollo de la inteligencia cultural del equipo como competencia colectiva que se construye con el tiempo y la experiencia compartida.

**6. El rol del HR business partner en la gestión intercultural**
El HRBP puede ser el recurso más valioso del manager que lidera un equipo multicultural. Define el rol del HRBP en la gestión intercultural: el soporte al manager en el diagnóstico de los problemas de comunicación que tienen raíz cultural (la diferencia entre un problema de actitud y un malentendido cultural), la mediación en los conflictos interculturales antes de que lleguen a RRHH como problema formal, el diseño de los programas de formación intercultural que el manager necesita para gestionar mejor su equipo, el apoyo en el proceso de feedback y evaluación del desempeño en un contexto multicultural y la construcción de la cultura de equipo que saca el máximo valor de la diversidad cultural en lugar de solo gestionarla como un riesgo.

Termina con la guía de la primera conversación que tendría un manager que acaba de incorporarse a un equipo multicultural con cada uno de sus colaboradores: las preguntas que le ayudan a entender el estilo de comunicación, las expectativas de la relación con el manager y las necesidades específicas de cada persona.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Guía de gestión intercultural para managers y HR que lideran equipos de múltiples culturas, con foco en el feedback, la autoridad y la construcción de cohesión.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas en mercados emergentes: invertir y operar en LATAM, Africa y Asia',
                'description'       => 'Las particularidades financieras de los mercados emergentes: el riesgo político, la volatilidad de divisas y las oportunidades de mercado que los modelos financieros occidentales no capturan bien.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de finanzas con experiencia en mercados emergentes que ha gestionado inversiones y operaciones financieras en Latinoamérica, África y Asia. Has vivido de primera mano las crisis de divisas, los cambios regulatorios repentinos y las oportunidades de mercado que los analistas que nunca han salido del mercado desarrollado sistemáticamente infravaloran o sobrevaloran. Tienes una visión realista y sin romantizar de lo que implica hacer finanzas en estos mercados.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el objetivo: inversión financiera en activos de mercados emergentes, expansión operativa de una empresa a un mercado emergente, análisis de riesgo de exposición existente o comprensión general de las finanzas en mercados emergentes?
2. ¿Cuáles son los mercados específicos de interés (Brasil, México, India, Nigeria, Vietnam, etc.) o es un análisis más general?
3. ¿Cuál es el horizonte temporal y el apetito de riesgo del análisis o de la inversión?
4. ¿Cuál es el nivel de conocimiento actual sobre mercados emergentes y cuáles son las mayores incertidumbres?
5. ¿Hay alguna exposición actual a mercados emergentes y si es así cuáles son los problemas financieros concretos que está generando?

Con esas respuestas, diseña el análisis financiero completo de los mercados emergentes:

**1. El riesgo político como factor financiero en mercados emergentes**
El riesgo político en los mercados emergentes no es ruido de fondo, es una variable financiera que hay que modelar. Define el framework de análisis del riesgo político para la toma de decisiones financieras: los indicadores de riesgo político que impactan en el retorno financiero (la estabilidad del gobierno, el rule of law, la independencia del banco central, la relación del gobierno con el sector privado, la historia de expropiaciones o de cambios de reglas a mitad del partido), la modelización del riesgo político en el coste de capital (el risk premium adicional sobre la tasa libre de riesgo que compensa el riesgo político de cada mercado), las estructuras de inversión que mitigan el riesgo político (los seguros de riesgo político del MIGA del Banco Mundial, los tratados bilaterales de inversión, las estructuras offshore que separan el activo de la jurisdicción política), la gestión del riesgo político en las operaciones (la diversificación de proveedores y mercados, la limitación de la exposición a las políticas cambiarias, la relación con el gobierno local) y las señales de alerta temprana de deterioro del riesgo político.

**2. La gestión del riesgo de tipo de cambio en mercados emergentes**
La volatilidad de las divisas de los mercados emergentes puede destruir el retorno financiero que los activos locales generan. Define la estrategia de gestión del riesgo cambiario en mercados emergentes: el análisis de la estructura de la economía de la divisa que se analiza (si es una divisa vinculada al dólar, si es libremente flotante, si hay controles de capital), los instrumentos de cobertura disponibles para las divisas de mercados emergentes (los forwards, los futuros, las opciones sobre divisas en los mercados donde están disponibles, y las alternativas cuando el mercado de derivados es poco líquido o directamente no existe), la gestión natural del riesgo cambiario en las operaciones (facturar en dólares cuando el cliente lo acepta, financiarse localmente para tener un activo y un pasivo en la misma divisa, invertir en activos con cashflows en divisas duras), la modelización del impacto cambiario en el P&L y en el balance y el proceso de reporting de la exposición cambiaria al management.

**3. Las oportunidades de mercado que los modelos occidentales no capturan**
Los mercados emergentes tienen dinámicas de crecimiento que no se modelan bien con los marcos analíticos diseñados para mercados maduros. Define el análisis de las oportunidades de mercado en economías emergentes: la demografía como motor de crecimiento (la clase media emergente en Asia y en África que en los próximos veinte años va a superar en tamaño a la clase media de los mercados desarrollados), los sectores con mayor potencial en cada región (la infraestructura digital en África donde el mobile-first no es una tendencia sino la única experiencia digital de cientos de millones de usuarios, los servicios financieros en los mercados de baja bancarización donde el fintech está saltando directamente a la fase móvil, la agricultura de precisión en Latinoamérica con las mayores reservas de tierra cultivable del mundo), las empresas locales de los mercados emergentes que están construyendo posiciones competitivas globales y las trampas del análisis de mercados emergentes (el PIB per cápita que no captura la distribución del ingreso, el crecimiento del PIB que no se traduce en retorno para el inversor extranjero si la volatilidad cambiaria lo erosiona).

**4. La estructura financiera para operar en mercados emergentes**
La estructura financiera correcta puede ser la diferencia entre sobrevivir y prosperar en un mercado emergente. Define la estrategia de estructura financiera para la operación en mercados emergentes: la estructura societaria que optimiza la fiscalidad y la protección del patrimonio (las holding offshore, las joint ventures con socios locales que aportan conocimiento y relaciones políticas), la estrategia de financiación local cuando existe (la deuda en divisa local que elimina el riesgo cambiario de la financiación, el acceso a los programas de desarrollo del banco central o del gobierno), la gestión del flujo de caja en mercados con restricciones a la repatriación de capital (los controles de capital que aparecen en crisis y atrapan la liquidez en el mercado local), la estrategia de pricing en mercados con alta inflación (la indexación de los precios, la frecuencia de las revisiones de tarifas, la gestión de los contratos a largo plazo en entornos inflacionarios) y la estructura de remuneración del equipo local que es competitiva en el mercado local sin erosionar los retornos financieros.

**5. La due diligence financiera en mercados emergentes**
La due diligence en mercados emergentes tiene capas adicionales que en los mercados desarrollados no son necesarias. Define el proceso de due diligence financiera adaptado a mercados emergentes: la verificación de la información financiera en mercados donde los estándares contables y la calidad de la auditoría son menores que en los mercados desarrollados (la reconciliación con las declaraciones fiscales, la verificación independiente de los ingresos, la auditoría de las cuentas bancarias), la due diligence legal de los derechos de propiedad y de los contratos en jurisdicciones donde el rule of law es débil, la due diligence política (los vínculos del target con personas políticamente expuestas que pueden generar riesgo de sanciones o de AML), la due diligence de los proveedores y clientes locales (la verificación de su existencia, su solvencia y su historial de cumplimiento) y las cláusulas de los contratos de inversión que protegen al inversor ante los riesgos específicos de los mercados emergentes.

**6. El reporting financiero de la exposición a mercados emergentes**
La comunicación del riesgo y la oportunidad de los mercados emergentes a los stakeholders de la empresa es un reto específico. Define el framework de reporting de la exposición a mercados emergentes: la presentación del riesgo de tipo de cambio (la exposición bruta en cada divisa, la cobertura existente y la exposición neta), el impacto de la inflación local en los márgenes reales del negocio (la diferencia entre el crecimiento en divisa local y el crecimiento en divisa de reporte), el análisis de sensibilidad de los resultados ante escenarios de shock cambiario o político (qué pasa con el P&L si la divisa local se deprecia un 20%, si el gobierno impone controles de capital, si sube la inflación al 40%), el balance de las métricas de riesgo y de las métricas de oportunidad (el retorno ajustado por riesgo que justifica la inversión en mercados emergentes vs. el retorno de los mercados desarrollados) y la comparación con los benchmarks del sector y con los fondos de mercados emergentes que validan la asignación estratégica.

Termina con el checklist de análisis antes de cualquier decisión de inversión o expansión en un mercado emergente: los diez factores críticos que no pueden faltar en el análisis y la pregunta clave que cada factor debe responder.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Análisis financiero de mercados emergentes: gestión del riesgo político y cambiario, identificación de oportunidades y due diligence adaptada a estas jurisdicciones.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos internacionales y resolución de disputas transfronterizas',
                'description'       => 'Los aspectos jurídicos de las relaciones comerciales internacionales: la elección de la ley aplicable, la jurisdicción competente, el arbitraje internacional como alternativa a los tribunales y los tratados que protegen las inversiones cross-border.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho internacional de los negocios con experiencia en contratos internacionales, arbitraje comercial internacional y protección de inversiones extranjeras. Has asesorado a empresas en la estructuración de contratos transfronterizos y en la resolución de disputas internacionales ante las principales instituciones de arbitraje del mundo, y sabes que los contratos internacionales mal redactados generan disputas que ningún tribunal puede resolver de forma eficiente.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el tipo de relación comercial internacional (contrato de distribución, acuerdo de joint venture, contrato de licencia, acuerdo de suministro, contrato de servicios, M&A transfronterizo)?
2. ¿Cuáles son las partes del contrato y sus respectivas jurisdicciones?
3. ¿Cuál es la consulta o el problema concreto: ¿estás redactando un contrato nuevo, revisando un contrato existente, o estás ante una disputa en curso?
4. ¿Cuáles son los valores económicos en juego y cuál es el horizonte temporal de la relación contractual?
5. ¿Ha habido experiencias previas de contratos internacionales con problemas y si es así cuáles fueron las causas principales?

Con esas respuestas, diseña el análisis jurídico completo de contratos y disputas internacionales:

**1. La elección de la ley aplicable: la cláusula más importante del contrato internacional**
La cláusula de ley aplicable determina el régimen jurídico que gobierna el contrato. Define el análisis de la elección de la ley aplicable en los contratos internacionales: el principio de autonomía de la voluntad que permite a las partes elegir la ley que gobierna su contrato (con sus límites: las normas imperativas de la jurisdicción de ejecución, las normas de orden público), los criterios para elegir la ley aplicable más favorable (la seguridad jurídica del sistema legal elegido, la familiaridad de las partes con esa ley, la facilidad de ejecución de las sentencias o laudos bajo esa ley, el nivel de desarrollo de la jurisprudencia en materia comercial), las opciones más utilizadas en contratos internacionales (el derecho inglés para los contratos de financiación y M&A, el derecho de Nueva York para los contratos financieros anglosajones, el derecho español para contratos con empresas latinoamericanas), los límites de la elección de la ley aplicable en los contratos con consumidores (la Directiva 93/13/CEE y sus equivalentes que protegen al consumidor con independencia de la ley elegida) y la Convención de Viena sobre compraventa internacional de mercaderías (CISG) y cuándo tiene sentido excluirla expresamente.

**2. La cláusula de jurisdicción y el arbitraje internacional**
La cláusula de resolución de disputas es tan importante como la ley aplicable. Define el análisis de la elección entre jurisdicción de tribunales estatales y arbitraje internacional: las ventajas del arbitraje internacional sobre los tribunales estatales para las disputas comerciales transfronterizas (la confidencialidad, la neutralidad de la sede, la ejecutabilidad del laudo en 160 países a través de la Convención de Nueva York de 1958, la posibilidad de elegir árbitros con expertise técnico específico), los tipos de arbitraje institucional y sus diferencias (la CCI con sede en París, el LCIA de Londres, el ICC, el Centro de Arbitraje de la CAM de Madrid, el ICSID para disputas entre estados e inversores), el arbitraje ad hoc bajo las Reglas UNCITRAL para las partes que prefieren no someterse a ninguna institución arbitral, los elementos de la cláusula de arbitraje que hay que definir correctamente (la sede del arbitraje, el idioma del procedimiento, el número de árbitros, la ley aplicable al procedimiento arbitral) y los casos en que la jurisdicción estatal puede ser preferible al arbitraje.

**3. Las cláusulas de representaciones y garantías en los contratos internacionales**
Las declaraciones y garantías son el corazón del contrato de M&A y de los contratos de inversión internacional. Define el análisis de las representations and warranties en los contratos internacionales: la función de las representaciones y garantías (la asignación del riesgo entre las partes, la base para las reclamaciones de indemnización si la realidad no coincide con lo declarado), las representaciones y garantías estándar en los contratos M&A internacionales (sobre el título de propiedad, la condición financiera, el cumplimiento regulatorio, los litigios pendientes, la propiedad intelectual, los contratos materiales), el enfoque anglosajón de las extensive representations vs. el enfoque continental europeo de la garantía de conformidad, las disclosure letters como mecanismo para limitar el alcance de las representaciones, los regímenes de responsabilidad por incumplimiento de las representaciones (los umbrales de materialidad, los tipping baskets, los caps de responsabilidad) y el W&I insurance como herramienta para cubrir el riesgo de incumplimiento de representaciones.

**4. La protección del inversor extranjero: los tratados bilaterales de inversión**
Los tratados bilaterales de inversión (BITs) son el último recurso del inversor extranjero ante un estado que no cumple sus compromisos. Define el marco de protección de las inversiones internacionales: los estándares de protección que los BITs garantizan al inversor extranjero (el trato justo y equitativo, la protección contra la expropiación sin compensación adecuada, la cláusula de nación más favorecida, la libre transferencia de fondos), el mecanismo de resolución de disputas inversor-estado (el ISDS que permite al inversor demandar directamente al estado ante el ICSID o bajo las Reglas UNCITRAL sin necesidad de pasar por los tribunales locales), la verificación de los BITs disponibles entre el país de origen del inversor y el país de la inversión (algunos países han firmado decenas de BITs y otros muy pocos), la estructuración de la inversión para aprovechar la protección de los BITs disponibles (la interposición de una holding en un país con BIT favorable con el país de la inversión) y las limitaciones y excepciones de los BITs (las excepciones de seguridad nacional, las medidas de emergencia económica que los estados invocan para justificar el incumplimiento).

**5. La ejecución de laudos y sentencias extranjeras**
Un laudo arbitral o una sentencia favorable que no se puede ejecutar es papel mojado. Define el análisis de la ejecutabilidad de los laudos y sentencias extranjeras: la Convención de Nueva York de 1958 como el pilar de la ejecutabilidad de los laudos arbitrales internacionales (el reconocimiento y ejecución de laudos extranjeros en 160 países, con las causas limitadas de denegación del reconocimiento), la ejecutabilidad de las sentencias judiciales extranjeras (que en contraste con los laudos arbitrales no cuenta con un tratado multilateral universal, sino con convenios bilaterales o con el exequátur según las normas de derecho internacional privado de cada país), las estrategias de ejecución cuando el deudor tiene activos en múltiples jurisdicciones (la ejecución simultánea en varias jurisdicciones para maximizar la recuperación), los obstáculos a la ejecución más frecuentes (la inmunidad soberana de los estados, la alegación de orden público del país de ejecución, la extinción de los activos antes de que se complete la ejecución) y las herramientas para descubrir y rastrear los activos del deudor en múltiples jurisdicciones.

**6. La prevención de disputas internacionales: cómo el contrato puede evitar el conflicto**
El mejor arbitraje es el que no se llega a necesitar. Define las cláusulas del contrato internacional que previenen las disputas: las cláusulas de escalación de disputas (la negociación directa, la mediación y el arbitraje como etapas sucesivas que permiten resolver el conflicto en la etapa más temprana y menos costosa), las cláusulas de precio que reducen la ambigüedad en los contratos de suministro a largo plazo (los mecanismos de ajuste automático de precio vinculados a índices objetivos), las cláusulas de fuerza mayor que definen con precisión qué eventos liberan a las partes de sus obligaciones (especialmente importante después de la pandemia, que demostró cuántos contratos no contemplaban las pandemias como fuerza mayor), las cláusulas de terminación que definen con claridad los derechos de cada parte si la relación no funciona (evitando la negociación bajo presión cuando ya hay un conflicto) y el proceso de due diligence del contraparte antes de firmar el contrato (la verificación de solvencia, de reputación y de capacidad de cumplimiento).

Termina con la checklist del contrato internacional: los quince elementos que deberías revisar en cualquier contrato transfronterizo antes de firmarlo, con la indicación del riesgo que cada elemento gestiona.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Análisis jurídico de contratos internacionales: elección de ley aplicable, arbitraje internacional, protección de inversiones y ejecución de laudos extranjeros.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success global: adaptar el modelo a diferentes mercados',
                'description'       => 'El equipo de CS que sirve a clientes de múltiples culturas: las diferencias en cómo los clientes expresan la satisfacción o el problema, los modelos de soporte que funcionan en Asia-Pacific vs. EMEA y el equipo multicultural que necesitas para cubrir globalmente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success global con experiencia construyendo equipos de CS que sirven a clientes en múltiples regiones y culturas. Has gestionado equipos en EMEA, Americas y Asia-Pacific y sabes que el modelo de CS que funciona en San Francisco o en Madrid no funciona de la misma manera en Tokio o en São Paulo sin las adaptaciones correctas.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto SaaS, cuáles son los mercados donde ya hay base de clientes y cuáles son los mercados de expansión?
2. ¿Cuál es el modelo de CS actual (high-touch, mid-touch, low-touch) y está segmentado por región o es el mismo para todos los mercados?
3. ¿Cuáles son los retos de CS más frecuentes en los mercados internacionales: los clientes que no expresan sus problemas hasta que ya están en proceso de churn, los que tienen expectativas de disponibilidad del CSM muy diferentes a las que el equipo puede dar, o los que requieren adaptaciones del producto que van más allá del soporte?
4. ¿Cuál es la composición del equipo de CS: está centralizado en una sede o hay CSMs locales en cada región? ¿En qué idiomas trabaja el equipo?
5. ¿Cuáles son las métricas de CS por región y si hay diferencias significativas entre mercados en NPS, churn o tiempo de onboarding?

Con esas respuestas, diseña el modelo completo de customer success global:

**1. Las diferencias culturales en cómo los clientes expresan satisfacción y problemas**
El cliente que dice "todo está bien" puede estar en riesgo de churn en una cultura de alto contexto. Define el mapa de las diferencias culturales en la comunicación del cliente con el CS: las culturas que expresan el problema directamente cuando ocurre (las culturas de bajo contexto de Europa del Norte, EEUU, Australia) vs. las culturas que esperan que el CSM detecte el problema a través de señales indirectas (las culturas de alto contexto de Asia del Este, de algunos mercados latinoamericanos, del Medio Oriente), las señales de riesgo que varían por cultura (el cliente japonés que deja de responder a los emails de seguimiento del CSM no es que esté ocupado, es una señal de que el problema es más grave que lo que ha comunicado), las diferencias en el NPS y el CSAT como métricas según la cultura (los clientes asiáticos tienden a dar puntuaciones más medias que los americanos para los mismos niveles de satisfacción, lo que hace que las comparaciones de NPS entre regiones sean tramposas si no se calibran culturalmente) y el proceso de detección de riesgo de churn que tiene en cuenta las diferencias culturales en la expresión del problema.

**2. Los modelos de CS que funcionan en diferentes regiones**
El mismo modelo de CS no funciona igual en todas las culturas. Define los modelos de CS adaptados a las principales regiones: el modelo de CS para América del Norte y Europa del Norte (el modelo más orientado al self-service, al product-led growth y al CS escalable, con QBRs estructurados y métricas claras de éxito que el cliente también monitorea), el modelo de CS para Europa del Sur y Latinoamérica (la relación personal con el CSM tiene más peso, el onboarding necesita más contacto humano, la frecuencia de contacto es mayor y los QBRs son más conversacionales), el modelo de CS para Asia del Este especialmente Japón y Corea (el nivel de formalidad es mayor, la accesibilidad del CSM es una expectativa básica, la comunicación es más indirecta y el CSM local es casi siempre necesario), el modelo de CS para la India (el alto volumen de tickets de soporte técnico que caracterizan al cliente indio, la preferencia por la comunicación escrita antes que la oral, la importancia del precio como driver de retención) y las adaptaciones necesarias para los mercados de Medio Oriente y África donde el CS como función todavía está madurando.

**3. La organización del equipo de CS global: centralizado vs. local**
La decisión sobre cómo organizar el equipo de CS global tiene implicaciones enormes en los costes y en la calidad del servicio. Define los modelos organizativos del CS global y sus compensaciones: el modelo de CS centralizado (todos los CSMs en una sede, con cobertura de zonas horarias parcial, más barato pero con limitaciones en la comprensión cultural y en la disponibilidad), el modelo de CS completamente local (CSMs en cada región y en el idioma local, máxima adaptación cultural pero costoso y difícil de escalar), el modelo de CS híbrido (un equipo centralizado que gestiona las cuentas de menor ticket con herramientas escalables + CSMs regionales para las cuentas enterprise y de mayor complejidad), la decisión sobre en qué idiomas dar servicio (los umbrales de volumen de clientes por idioma que justifican contratar un CSM nativo) y el proceso de escalación cuando el CSM local no puede resolver un problema y necesita el soporte del equipo central.

**4. Las herramientas y los procesos de CS adaptados a múltiples mercados**
Las herramientas de CS no siempre están diseñadas pensando en la operación global. Define la estrategia de herramientas y procesos para el CS global: la configuración de la plataforma de CS (Gainsight, ChurnZero, Totango) para gestionar múltiples segmentos regionales con playbooks diferentes, la localización de los materiales de CS (los QBR templates, los materiales de onboarding, los emails de comunicación) en los idiomas y con los estilos culturales de cada mercado, la gestión del knowledge base del producto en múltiples idiomas (la priorización de los idiomas según el volumen de clientes y la complejidad de las consultas), el proceso de documentación de las particularidades de CS por región que los CSMs necesitan para gestionar sus carteras sin cometer errores culturales y el sistema de escalación regional que permite a un CSM de una región obtener soporte de alguien con conocimiento del mercado.

**5. La construcción del equipo de CS multicultural**
Un equipo de CS que sirve a clientes globales necesita la diversidad cultural para entender a esos clientes. Define la estrategia de construcción del equipo de CS global: el perfil del CSM global (las habilidades de comunicación intercultural, la flexibilidad de estilo, el idioma, el conocimiento del sector del cliente) vs. el perfil del CSM local (el conocimiento profundo de la cultura y del mercado, las relaciones en el ecosistema local), el proceso de contratación de CSMs regionales (los canales de sourcing locales, las señales de inteligencia cultural en el proceso de selección, el balance entre la experiencia de CS y el conocimiento del mercado local), el proceso de onboarding del CSM que cubre las particularidades del modelo de CS de la empresa y las expectativas de los clientes de su región y el desarrollo de la inteligencia cultural del equipo global como competencia colectiva.

**6. Las métricas de CS ajustadas al contexto cultural**
Las métricas de CS no son culturalmente neutrales. Define el framework de métricas de CS global que tiene en cuenta las diferencias culturales: la calibración del NPS y el CSAT por región (la conversión de las puntuaciones locales a una escala comparable que permita hacer benchmarks entre regiones sin sesgos culturales), las métricas de uso del producto que varían por región (las funcionalidades que los clientes de diferentes regiones utilizan más, que reflejan tanto las diferencias culturales como las diferencias en el proceso de venta y onboarding), el análisis del churn por región con las causas raíz culturalmente informadas (el churn en el mercado japonés que con frecuencia tiene causas diferentes al churn en el mercado español), el análisis de la expansión por región (las oportunidades de upsell que son más naturales en culturas individualistas que valoran la personalización vs. las culturas colectivistas donde la expansión requiere un proceso de aprobación más largo) y el reporting global que agrega los resultados de todas las regiones con las notas de contexto cultural que ayudan al liderazgo a interpretar las diferencias.

Termina con el playbook de onboarding de un cliente enterprise en cada una de las tres regiones más importantes para tu negocio: las diferencias en el proceso, la cadencia de contacto, los materiales y los criterios de éxito del onboarding que tendrías en cuenta en cada región.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Modelo de customer success global con adaptación cultural del proceso, el equipo y las métricas para operar eficazmente en múltiples regiones.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Trabajar con clientes de otras culturas: adaptación y protocolo',
                'description'       => 'El freelance que acepta proyectos internacionales: las diferencias culturales en cómo se gestiona la relación, los plazos y los pagos con clientes de diferentes países y el protocolo de comunicación que construye confianza cross-cultural.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor especializado en el negocio internacional del freelance con experiencia asesorando a profesionales independientes que trabajan con clientes de diferentes culturas. Has ayudado a freelancers de España y Latinoamérica a trabajar con clientes de EEUU, Reino Unido, Alemania, Japón y de otros países, y sabes que los malentendidos culturales son la causa de muchos proyectos que terminan mal aunque el trabajo fuera excelente.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu especialidad como freelance, dónde estás basado y cuáles son los mercados internacionales con los que trabajas o quieres trabajar?
2. ¿Cuáles son las culturas de los clientes con los que tienes más dificultades o sobre las que tienes más dudas?
3. ¿Cuáles son los problemas más frecuentes en tus proyectos internacionales: los malentendidos de comunicación, las expectativas diferentes sobre los plazos, los problemas con los pagos internacionales o la dificultad para entender qué quiere realmente el cliente?
4. ¿En qué idioma trabajas con los clientes internacionales y cuál es tu nivel de fluidez en el idioma principal de tus clientes?
5. ¿Hay alguna situación concreta de fricción cultural que hayas experimentado y que quieras entender mejor?

Con esas respuestas, diseña la guía completa de trabajo con clientes internacionales:

**1. El diagnóstico cultural del cliente antes de aceptar el proyecto**
Entender la cultura del cliente antes de empezar el proyecto ahorra muchos problemas durante el proyecto. Define el proceso de diagnóstico cultural del cliente al inicio de la relación: las preguntas que revelan el estilo de comunicación del cliente (¿prefiere comunicarse por email, por videollamada o por chat?, ¿espera respuesta en horas o en días?, ¿prefiere mensajes concisos o detallados?), las preguntas que revelan las expectativas sobre los plazos y el proceso (¿cuándo espera ver el primer borrador?, ¿cómo gestiona las revisiones?, ¿qué pasa si hay un imprevisto que afecta al plazo?), las preguntas que revelan el proceso de decisión del cliente (¿decide el cliente directamente o hay otras personas que deben aprobar el trabajo?), las señales en la forma de comunicarse del cliente que revelan si viene de una cultura de alto o bajo contexto y el proceso de validación de las expectativas al inicio del proyecto que reduce la posibilidad de malentendidos durante la ejecución.

**2. Las diferencias culturales en la gestión de plazos**
La actitud hacia los plazos varía enormemente por cultura y puede ser fuente de conflicto. Define el mapa cultural de la gestión de plazos que el freelance necesita conocer: las culturas monocrónicas donde el plazo es un compromiso sagrado y el retraso es una señal de falta de profesionalidad (Alemania, Países Bajos, Suiza, EEUU, Japón), las culturas policrónicas donde el plazo es orientativo y la calidad es más importante que la puntualidad estricta (algunos mercados del Mediterráneo, de Latinoamérica y de Oriente Medio), la gestión de tu propio plazo cuando trabajas con un cliente de cultura monocrónica (la comunicación proactiva del riesgo de retraso, el buffer de tiempo que añades al plazo interno para garantizar el externo, la confirmación del plazo por escrito al inicio del proyecto), la gestión del cliente de cultura policrónica que entrega la información que necesitas con retraso (las cláusulas contractuales que protegen tu plazo cuando el retraso es del cliente) y la comunicación del retraso inevitable que no destruye la confianza en ninguna cultura.

**3. Los pagos internacionales: métodos, plazos y gestión del impago**
Cobrar de clientes de otros países añade capas de complejidad al proceso de cobro. Define la estrategia de cobro internacional: los métodos de pago más adecuados según el origen del cliente (la transferencia SEPA para clientes de la zona euro, Wise o Revolut para clientes fuera de la zona euro con comisiones bajas, Stripe o PayPal para clientes que prefieren pagar con tarjeta, las plataformas de freelance como Upwork o Fiverr que gestionan el cobro para clientes que prefieren la seguridad de una plataforma intermediaria), los plazos de pago según la cultura del cliente (los clientes americanos y del norte de Europa pagan en los plazos acordados con más frecuencia que los clientes de otras culturas, lo que implica que con estos últimos puede ser más importante el anticipo), la gestión del impago cross-border (las dificultades adicionales de reclamar a un cliente en otro país y las formas de reducir el riesgo desde el inicio del proyecto: el anticipo, el escrow, el pago por fases) y la fiscalidad del cobro de clientes extranjeros (el IVA en las prestaciones de servicios a clientes de la UE vs. fuera de la UE, la retención en la fuente que algunos países aplican a los pagos a freelancers extranjeros).

**4. La comunicación escrita con clientes de diferentes culturas**
El email al cliente alemán y el email al cliente brasileño no pueden tener el mismo tono. Define las normas de comunicación escrita adaptadas a las principales culturas de clientes internacionales: el cliente del norte de Europa y Norteamérica (la comunicación directa, concisa y sin excesivas fórmulas de cortesía que se perciben como relleno, el asunto del email descriptivo y específico, el desglose en puntos de las preguntas o los elementos de acción), el cliente del sur de Europa y Latinoamérica (la comunicación más cálida y personal, el inicio del email con una referencia a la relación antes de ir al tema de negocio, el tono menos transaccional y más conversacional), el cliente asiático, especialmente japonés (el máximo respeto en el trato formal, el uso del apellido con el título de cortesía hasta que el cliente invite a usar el nombre, la evitación de los mensajes que ponen al cliente en una posición de tener que decir no explícitamente), y el cliente del Medio Oriente (la hospitalidad incluso en la comunicación escrita, la referencia a la relación personal antes del negocio y el tiempo que lleva construir la confianza suficiente para que los proyectos fluyan).

**5. Las reuniones de proyecto con clientes internacionales**
Las videoconferencias con clientes de otras culturas tienen sus propias normas. Define el protocolo de las reuniones de proyecto con clientes internacionales: la puntualidad y la gestión del tiempo (el cliente alemán que espera que la reunión empiece y termine exactamente a la hora acordada vs. el cliente latinoamericano que puede llegar tarde sin que sea una señal de falta de respeto), la apertura de la reunión (el tiempo de small talk que es apropiado antes de entrar al tema de negocio y los temas de small talk culturalmente seguros), la presentación del trabajo (la cultura que quiere ver el resultado final directamente vs. la que prefiere entender el proceso antes de ver el resultado), el manejo de las dudas y las objeciones durante la reunión (las culturas que expresan su desacuerdo en la reunión vs. las que esperan a que la reunión termine para comunicarlo por escrito), el cierre de la reunión y los siguientes pasos (las diferencias en cómo se confirman los acuerdos y los plazos y la importancia de documentarlos por escrito independientemente de la cultura del cliente).

**6. La construcción de relaciones a largo plazo con clientes de otras culturas**
El freelance internacional que solo tiene proyectos de un único encargo tiene un modelo de negocio frágil. Define la estrategia de construcción de relaciones de largo plazo con clientes de otras culturas: las diferencias en el ritmo de construcción de la confianza (el cliente americano que puede convertirse en un cliente recurrente rápidamente si el primer proyecto va bien vs. el cliente asiático que necesita varios proyectos y mucho tiempo antes de confiar en un freelance externo para sus proyectos más importantes), las formas de mantener la relación entre proyectos que son culturalmente apropiadas (el email de seguimiento con contenido útil, el felicitar al cliente en las fechas relevantes de su país, el compartir algo relacionado con su sector que puede ser valioso para él), la gestión de las zonas horarias en la comunicación de seguimiento (los mensajes que respetan el horario de trabajo del cliente incluso cuando en tu zona horaria es tarde) y el proceso de solicitar referidos a clientes de otras culturas (muy natural y esperado en los EEUU, más reservado en culturas de mayor discreción sobre las relaciones de negocio).

Termina con la guía de onboarding del cliente internacional para los primeros tres días del proyecto: qué comunicar, qué preguntar, qué confirmar por escrito y qué señales de alerta estarías buscando para detectar posibles malentendidos antes de que se conviertan en problemas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Guía de trabajo con clientes internacionales para freelancers: adaptación cultural en la comunicación, los plazos, los pagos y la construcción de relaciones de largo plazo.',
                'vote_score'        => 45,
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
