<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills234Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing multicultural: campañas para audiencias diversas',
                'description'      => 'Crea campañas que resuenan en audiencias culturalmente diversas: la investigación cultural, la selección de mensajes y los elementos visuales que incluyen en lugar de excluir y que generan conexión con comunidades que la mayoría de las marcas ignora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo especializado en marketing multicultural con experiencia creando campañas para audiencias de distintas culturas, etnias y procedencias en mercados como Estados Unidos, España y Latinoamérica, con conocimiento profundo de cómo los mensajes y los elementos visuales resuenan de forma diferente según la audiencia. Voy a explorar contigo cómo crear campañas de marketing que realmente conecten con audiencias culturalmente diversas.

Mi contexto: [describe la campaña: el producto o servicio que estás promocionando, las comunidades culturales a las que quieres llegar, el mercado geográfico y los canales de comunicación que usas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué el marketing multicultural es una oportunidad, no una obligación**
Las empresas que hacen marketing multicultural por obligación producen campañas que la audiencia detecta como inauténticas inmediatamente. Explícame el argumento de negocio del marketing multicultural: el tamaño y el poder adquisitivo de las comunidades culturalmente diversas (los datos del mercado hispano en EEUU, la diversidad cultural en las ciudades españolas, el mercado latinoamericano), la lealtad de marca más alta de los consumidores que se sienten representados, el riesgo reputacional de las campañas que ignoran o malrepresentan a comunidades y cómo las marcas que lo hacen bien convierten el marketing multicultural en una ventaja competitiva.

**2. La investigación cultural: entender antes de comunicar**
El marketing multicultural que no se basa en investigación real produce estereotipos disfrazados de inclusión. Guíame por el proceso de investigación cultural: cómo identificar los valores, las referencias culturales y los tabúes de la audiencia objetivo (lo que genera conexión genuina y lo que genera rechazo), las fuentes de investigación que van más allá de los estudios de mercado genéricos (los medios de comunicación que consume la comunidad, los influencers en los que confía, las conversaciones en redes sociales), cómo involucrar a personas de la comunidad en el proceso de investigación (no solo como sujetos de estudio sino como co-creadores) y las preguntas que revelan las diferencias reales entre comunidades culturales que parecen homogéneas desde fuera.

**3. El mensaje: qué decir y cómo decirlo en cada cultura**
El mismo mensaje puede generar admiración en una cultura y rechazo en otra. Explícame los principios de la adaptación del mensaje al contexto cultural: las dimensiones culturales que afectan la comunicación (individualismo vs. colectivismo, comunicación directa vs. indirecta, el rol de la familia y la comunidad), cómo adaptar el tono, el humor y el nivel de formalidad a cada audiencia, la diferencia entre traducir un mensaje y localizarlo (y por qué la traducción sin localización es el error más común), los valores culturales que conectan con cada comunidad y las referencias culturales que generan reconocimiento en lugar de confusión.

**4. Los elementos visuales: representación que incluye sin reducir a estereotipos**
La representación visual en el marketing multicultural es la señal más inmediata de si una marca entiende o no a la comunidad. Explícame cómo tomar decisiones de representación visual que sean auténticas: la diferencia entre representación (mostrar personas de distintas culturas) y autenticidad (mostrar a esas personas en contextos que son reales para ellas, no en contextos que las hacen encajar en la narrativa dominante), cómo evitar los estereotipos visuales más comunes, cómo hacer el casting y la producción de forma que el equipo creativo incluya personas de las comunidades que se están representando y cómo revisar los materiales visuales con personas de la comunidad antes de publicarlos.

**5. Los canales y los medios de comunicación multicultural**
Las audiencias culturalmente diversas no consumen los mismos medios que la audiencia mayoritaria. Propón la estrategia de canales para el marketing multicultural: los medios de comunicación específicos de cada comunidad (televisión en español, medios digitales dirigidos a comunidades específicas), el rol de los influencers y creadores de contenido de la comunidad como amplificadores más efectivos que los medios masivos, cómo adaptar la estrategia de redes sociales (las plataformas que usa cada comunidad, los formatos de contenido que funcionan mejor) y cómo diseñar el plan de medios que alcanza a las audiencias culturalmente diversas sin ignorar a la audiencia más amplia.

**6. Medir el éxito del marketing multicultural**
El marketing multicultural que no se mide no mejora. Dame el framework de medición: las métricas de alcance y relevancia en las comunidades objetivo (el porcentaje de la audiencia de la comunidad que el mensaje alcanza, la tasa de engagement comparada con la campaña general), las métricas de percepción (cómo cambia la percepción de la marca entre la comunidad objetivo antes y después de la campaña), las métricas de negocio (la conversión y el ROI de la inversión en marketing multicultural) y cómo construir el caso de negocio para aumentar la inversión en marketing multicultural basado en los resultados.

Quiero ejemplos concretos de campañas que lo han hecho bien y mal, y el razonamiento detrás de cada decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear campañas de marketing que conectan auténticamente con audiencias culturalmente diversas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión de equipos técnicos con diversidad cultural',
                'description'      => 'Lidera equipos de ingeniería con miembros de diferentes culturas: las diferencias en comunicación, el feedback en culturas de alto y bajo contexto y las prácticas de liderazgo inclusivo que hacen que todos los miembros del equipo puedan contribuir al máximo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager con experiencia liderando equipos de ingeniería multiculturales y distribuidos globalmente, con conocimiento profundo de cómo las diferencias culturales afectan la comunicación, la colaboración y el rendimiento en equipos técnicos y de las prácticas de liderazgo que hacen que la diversidad cultural sea una ventaja en lugar de una fuente de fricción. Voy a explorar contigo cómo liderar equipos técnicos con diversidad cultural de forma efectiva.

Mi contexto: [describe tu equipo: tamaño, culturas presentes en el equipo, si el equipo es distribuido o colocado, y los desafíos específicos que has encontrado o anticipas con la diversidad cultural]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las dimensiones culturales que más afectan a los equipos de ingeniería**
No todas las diferencias culturales tienen el mismo impacto en un equipo técnico. Explícame las dimensiones culturales que más afectan a los equipos de ingeniería: la actitud hacia la incertidumbre y el cambio (culturas con alta tolerancia a la ambigüedad vs. culturas que necesitan especificaciones detalladas antes de empezar), la comunicación directa vs. indirecta (cómo un engineer japonés expresa desacuerdo comparado con cómo lo hace uno holandés), el individualismo vs. el colectivismo (cómo afecta a la asignación de crédito, a la toma de responsabilidad y a la dinámica de los code reviews), y la actitud hacia la jerarquía (cómo un engineer de una cultura de alta distancia al poder interactúa con su manager comparado con uno de una cultura más igualitaria).

**2. El feedback en contextos culturales diferentes**
El feedback es la herramienta más importante del engineering manager y la que más varía por cultura. Guíame por la gestión del feedback en equipos multiculturales: la diferencia entre culturas de alto contexto (donde el feedback negativo se da de forma indirecta y el receptor lo interpreta basándose en el contexto) y culturas de bajo contexto (donde el feedback es directo y explícito), cómo adaptar el estilo de feedback a cada miembro del equipo sin crear dobles estándares, cómo diseñar el proceso de code review para que funcione bien independientemente del origen cultural del reviewer y del reviewee, y cómo gestionar la situación donde un engineer de una cultura más directa da feedback hiriente a un compañero de una cultura más indirecta.

**3. La comunicación en equipos técnicos multiculturales**
La comunicación técnica parece objetiva pero está profundamente influida por la cultura. Explícame las prácticas de comunicación que funcionan en equipos técnicos multiculturales: cómo estructurar las reuniones para que todos los miembros del equipo puedan contribuir (no solo los más vocales, que suelen ser los de culturas de comunicación directa), cómo gestionar el inglés como lingua franca del equipo cuando para algunos es la segunda o tercera lengua, cómo interpretar el silencio en las reuniones (que en algunas culturas significa acuerdo y en otras desacuerdo), y cómo diseñar los canales de comunicación escrita (los documentos técnicos, los PRs, los comentarios de código) para que sean inclusivos y comprensibles para todos.

**4. La inclusión en los procesos técnicos del equipo**
Los procesos técnicos pueden ser más o menos inclusivos sin que el equipo lo perciba. Propón las prácticas de inclusión en los procesos técnicos: cómo diseñar el proceso de code review para que los engineers de culturas más jerárquicas no se inhiban de corregir a los seniors, cómo gestionar la planificación de sprint para que todos los miembros del equipo tengan voz en las estimaciones y prioridades (no solo los que se sienten cómodos hablando en reuniones), cómo asegurar que la distribución de los asuntos más interesantes y visibles del backlog es equitativa y no favorece inconscientemente a los miembros del equipo con los que el manager tiene más afinidad cultural.

**5. El liderazgo inclusivo en el contexto técnico**
El engineering manager inclusivo no trata a todos de la misma manera: adapta su liderazgo a las necesidades individuales de cada miembro del equipo. Explícame las prácticas de liderazgo inclusivo específicas para equipos de ingeniería: cómo hacer las 1:1 con miembros del equipo de culturas diferentes (las preguntas que funcionan mejor, el nivel de directividad apropiado), cómo construir la confianza psicológica en el equipo para que los engineers de culturas más jerárquicas se sientan seguros señalando problemas y cuestionando decisiones, cómo gestionar el conflicto entre miembros del equipo de culturas con estilos de comunicación muy distintos y cómo reconocer el trabajo bien hecho de formas que sean significativas para culturas con actitudes distintas hacia el reconocimiento público.

**6. Construir la cultura de equipo que capitaliza la diversidad**
La diversidad cultural bien gestionada es una ventaja competitiva para los equipos de ingeniería. Explícame cómo construir la cultura de equipo que convierte la diversidad en fortaleza: las prácticas que hacen que las distintas perspectivas culturales enriquezcan las decisiones técnicas (cómo sacar partido a que un engineer de una cultura más colectivista piense de forma diferente sobre la arquitectura que uno de una cultura más individualista), cómo crear los rituales del equipo que celebran la diversidad sin hacerla incómoda, cómo construir el sentido de pertenencia común que coexiste con el respeto a las identidades culturales individuales y cómo el manager puede seguir aprendiendo sobre las culturas de su equipo a lo largo del tiempo.

Quiero ejemplos concretos de situaciones multiculturales en equipos técnicos y cómo las gestionarías.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Liderar equipos de ingeniería con diversidad cultural de forma que la diversidad sea una ventaja',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para la diversidad de capacidades e identidades',
                'description'      => 'Diseña productos que funcionan para personas con diferentes capacidades, culturas e identidades: más allá del WCAG, el diseño que anticipa la diversidad de usuarios y crea experiencias que no presuponen que todos los usuarios son iguales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de diseño con especialización en diseño inclusivo y accesibilidad, con experiencia aplicando estos principios en productos digitales de uso masivo, con conocimiento profundo de cómo diseñar para la diversidad de capacidades, culturas e identidades de una forma que mejora la experiencia para todos los usuarios y no solo para los grupos que explícitamente se tienen en cuenta. Voy a explorar contigo cómo aplicar el diseño inclusivo en productos digitales reales.

Mi contexto: [describe el producto: tipo de aplicación, audiencia objetivo actual, el nivel de madurez de las prácticas de accesibilidad e inclusión del equipo, y los principales retos que has identificado]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diseño inclusivo: más allá de la accesibilidad**
La accesibilidad (WCAG) es el piso mínimo del diseño inclusivo, no el techo. Explícame qué es el diseño inclusivo y por qué va más allá de las pautas de accesibilidad: el principio de que los productos diseñados para las personas en los márgenes (con discapacidades, de culturas no dominantes, con identidades no normativas) funcionan mejor para todos (el ejemplo del bordillo rebajado que sirve a personas en silla de ruedas, con cochecito de bebé y con bicicleta), la diferencia entre diseñar para la media y diseñar para la diversidad real de usuarios, y cómo el diseño inclusivo reduce el riesgo de producto (los usuarios excluidos son los primeros en irse cuando aparece una alternativa más inclusiva).

**2. Diseño para la diversidad de capacidades**
La discapacidad es más frecuente de lo que los diseñadores asumen: incluye condiciones permanentes, temporales y situacionales. Guíame por el diseño para la diversidad de capacidades: las discapacidades visuales (baja visión, daltonismo, ceguera total) y cómo el contraste, el tamaño del texto y la navegación por teclado las sirven, las discapacidades motoras (parkinsonismo, parálisis parcial, uso con una sola mano) y cómo el tamaño de los elementos interactivos y la reducción de gestos complejos las sirven, las discapacidades auditivas y el rol de los subtítulos y las alternativas al audio, las discapacidades cognitivas (dislexia, TDAH, discapacidad intelectual) y cómo la simplicidad, la consistencia y la carga cognitiva reducida las sirven, y cómo testar el diseño con personas con distintas capacidades de forma que sea parte del proceso de design y no un check-box al final.

**3. Diseño para la diversidad cultural**
Los patrones de diseño que parecen universales a menudo reflejan las convenciones de una sola cultura. Explícame cómo diseñar para la diversidad cultural: los patrones de lectura y dirección del texto (izquierda-derecha vs. derecha-izquierda y cómo afectan al layout y la navegación), el significado de los colores que varía por cultura (el blanco como color de luto en algunas culturas asiáticas, el rojo como color de peligro en occidente pero de prosperidad en China), los iconos y metáforas visuales que no son universales (la carpeta de archivos que no todos reconocen, los iconos de celebración que varían por cultura), las convenciones de formularios que asumen una realidad cultural específica (el campo de nombre y apellido que no funciona para muchas culturas) y cómo realizar investigación de usuario con participantes de distintas culturas.

**4. Diseño para la diversidad de identidades**
Los productos digitales a menudo excluyen a personas cuyas identidades no encajan en las asunciones del diseño. Propón prácticas de diseño para la diversidad de identidades: los formularios que permiten la expresión de identidad de género sin forzar una elección binaria, los sistemas de pronombres que respetan la identidad de las personas, los campos de nombre que funcionan para nombres de culturas diversas (nombres compuestos, apellidos que van primero, nombres únicos), los avatares y representaciones visuales que no asumen la apariencia física del usuario y cómo gestionar la tensión entre incluir opciones para todas las identidades y mantener la simplicidad del diseño.

**5. El proceso de diseño inclusivo: integrarlo en el flujo de trabajo**
El diseño inclusivo que se hace al final del proceso como revisión de accesibilidad llega demasiado tarde y cuesta demasiado. Explícame cómo integrar el diseño inclusivo en el flujo de trabajo de diseño: las preguntas de inclusión que hay que hacerse en la fase de discovery (quiénes son los usuarios en los márgenes de este producto), las personas de diseño que incluyen la diversidad de capacidades, culturas e identidades en lugar de diseñar para el usuario promedio imaginario, el testing con usuarios diversos como práctica estándar (no solo con los usuarios más fáciles de reclutar), y cómo convencer al equipo de producto y al management de que la inversión en diseño inclusivo es una inversión en calidad y en tamaño de mercado.

**6. Medir la inclusividad del diseño**
Un producto inclusivo se puede medir. Dame el framework de medición: cómo auditar un producto existente para identificar las barreras de acceso (la combinación de evaluación experta con WCAG y testing con usuarios de distintas capacidades), las métricas que indican problemas de inclusión (la distribución demográfica de los usuarios del producto comparada con la demografía del mercado), cómo usar los datos de soporte para identificar los problemas que afectan a grupos específicos de usuarios y cómo reportar el progreso en inclusividad al equipo de producto y al liderazgo de forma que genere acción y no solo consciencia.

Quiero un proceso y un set de preguntas de diseño concreto que pueda integrar en mi flujo de trabajo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Aplicar diseño inclusivo que sirve a usuarios con diversidad de capacidades, culturas e identidades',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta a compradores de culturas diversas',
                'description'      => 'Adapta tu estilo de venta a compradores de diferentes culturas: las diferencias en el proceso de decisión, el rol de la relación personal y los estilos de negociación que varían significativamente entre culturas y que el comercial internacional necesita dominar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial internacional con experiencia vendiendo en mercados de distintas culturas (Europa del norte y del sur, Latinoamérica, Asia, Oriente Medio) y con conocimiento profundo de cómo adaptar el proceso de ventas, el estilo de comunicación y las tácticas de negociación al contexto cultural del comprador. Voy a explorar contigo cómo adaptar el enfoque de ventas para ser efectivo con compradores de distintas culturas.

Mi contexto: [describe tu situación: el tipo de producto o servicio que vendes, los mercados o culturas con los que trabajas o quieres trabajar, y los desafíos específicos que has encontrado con la diversidad cultural en el proceso de ventas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las dimensiones culturales que más afectan al proceso de ventas**
No todas las diferencias culturales tienen el mismo impacto en el proceso de ventas. Explícame las dimensiones culturales que determinan cómo hay que vender: la orientación al tiempo (culturas monócronas donde la puntualidad y los plazos son sagrados vs. culturas polícronas donde las relaciones tienen prioridad sobre los horarios), la distancia al poder (culturas donde las decisiones las toma el nivel más alto de la jerarquía vs. culturas donde el equipo tiene más influencia), la aversión a la incertidumbre (culturas que necesitan mucha información y garantías antes de decidir vs. culturas más cómodas con la ambigüedad), y la orientación al individuo vs. al grupo (culturas donde el negociador individual tiene autoridad para decidir vs. culturas donde la decisión es consensual).

**2. La construcción de la relación: cuándo hablar de negocio**
En algunas culturas se puede ir directo al negocio desde la primera conversación. En otras, hablar de negocio sin haber construido una relación personal es señal de desconfianza. Guíame por las diferencias en la construcción de la relación: las culturas donde la relación personal es un prerequisito del negocio (el contexto latino, árabe y asiático donde las personas hacen negocios con personas en las que confían, no con empresas), las culturas donde la eficiencia es la señal de respeto (el contexto anglosajón y nórdico donde ir al punto es una muestra de profesionalidad), cómo detectar el ritmo de construcción de relación que espera tu interlocutor y cómo construir la confianza de formas culturalmente apropiadas (el regalo de empresa, la cena de negocios, la visita a las instalaciones del cliente).

**3. El proceso de decisión en distintas culturas**
La mayor fuente de frustración en ventas internacionales es no entender quién decide y cómo. Explícame el proceso de decisión en distintas contextos culturales: cómo identificar al decision maker real en culturas jerárquicas (donde el título no siempre corresponde a la autoridad real), cómo navegar el proceso de consenso en culturas más colectivistas (Japón, los países nórdicos), cómo gestionar el proceso de compra en culturas donde hay múltiples influencers (familia, comunidad, red profesional) que tienen influencia en la decisión, y cómo acelerar o desacelerar el proceso de ventas según el ritmo que la cultura del comprador espera.

**4. La negociación: de la propuesta al cierre en distintas culturas**
La negociación es el momento de mayor divergencia cultural en el proceso de ventas. Propón las estrategias de negociación adaptadas al contexto cultural: las culturas donde regatear es esperado y una propuesta sin margen de negociación es una señal de falta de respeto (vs. culturas donde el precio de la propuesta es el precio final), las culturas donde el silencio en la negociación es una táctica (y cómo no llenarlo precipitadamente), cómo hacer las concesiones de forma culturalmente apropiada (cuándo hacer la primera concesión, de qué tamaño, a cambio de qué), las diferencias en la formalidad de los contratos y los acuerdos (culturas donde la palabra tiene el mismo peso que el contrato vs. culturas donde cada cláusula del contrato es un terreno de negociación).

**5. La comunicación verbal y no verbal en ventas internacionales**
La comunicación que funciona con un comprador puede alienar a otro de una cultura diferente. Explícame las diferencias de comunicación que el vendedor internacional debe dominar: el nivel de formalidad en el trato (de usted vs. de tú, el uso del nombre de pila, el protocolo de presentación), los estilos de argumentación que persuaden en distintas culturas (la argumentación basada en datos y lógica que funciona en algunos contextos vs. la argumentación basada en la relación y la confianza que funciona en otros), el rol del humor en la conversación de ventas (el humor que conecta vs. el que ofende) y el lenguaje corporal y la proxemia (la distancia física apropiada, el contacto visual, el apretón de manos y sus alternativas).

**6. Prepararse para vender en una nueva cultura**
El vendedor que llega a una nueva cultura sin preparación comete errores que cuestan negocios. Dame el proceso de preparación cultural para vender en un nuevo mercado: las fuentes de información sobre la cultura de negocios local (libros como Cultures and Organizations de Hofstede, las guías específicas de cada cultura, los profesionales locales que pueden hacer de puente cultural), cómo encontrar un mentor o contacto local que te ayude a evitar los errores más evidentes, cómo preparar la primera reunión con compradores de una cultura nueva y cómo aprender de cada interacción para ir adaptando el estilo con el tiempo.

Quiero ejemplos concretos de situaciones de venta en distintas culturas y cómo gestionarlas de forma diferente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Adaptar el proceso de ventas al contexto cultural del comprador para cerrar más en mercados internacionales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Liderazgo de producto en equipos multiculturales',
                'description'      => 'Gestiona el equipo de producto cuando la diversidad cultural es un factor: la inclusión de perspectivas diversas en el proceso de discovery, la toma de decisiones en culturas con diferentes actitudes hacia el conflicto y el liderazgo que saca lo mejor de la diversidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de producto con experiencia liderando equipos multiculturales y construyendo productos para mercados globalmente diversos, con conocimiento de cómo las diferencias culturales afectan tanto a la dinámica interna del equipo de producto como al proceso de discovery y validación con usuarios de distintas culturas. Voy a explorar contigo cómo liderar equipos de producto con diversidad cultural.

Mi contexto: [describe tu situación: las culturas presentes en tu equipo de producto (diseño, ingeniería, PM), los mercados para los que construyes el producto, y los desafíos específicos que has encontrado con la diversidad cultural en el proceso de producto]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La diversidad cultural como ventaja competitiva en el equipo de producto**
La diversidad cultural en el equipo de producto no es solo una cuestión de valores: es una ventaja competitiva para los productos que sirven a mercados globalmente diversos. Explícame cómo un equipo multicultural produce mejores productos que uno homogéneo: la capacidad de anticipar las necesidades de usuarios de distintas culturas, la resistencia a los sesgos culturales que hacen que los productos homogéneos fallen en mercados no occidentales, la mayor creatividad en el proceso de diseño cuando conviven perspectivas radicalmente distintas sobre cómo debe funcionar un producto y los ejemplos de productos que han fallado en mercados no occidentales por haber sido diseñados sin perspectivas culturales diversas.

**2. La inclusión en el proceso de product discovery**
El discovery de producto en un equipo multicultural puede incluir perspectivas que ningún PM individual tendría. Guíame por las prácticas de discovery que aprovechan la diversidad cultural: cómo estructurar las sesiones de discovery para que las personas de culturas con comunicación más indirecta contribuyan sus perspectivas (no solo las más vocales), cómo usar la diversidad del equipo para diseñar investigaciones de usuario que sean culturalmente relevantes para distintos mercados, cómo interpretar los datos de uso del producto con las perspectivas culturales del equipo para entender por qué los usuarios de distintas culturas se comportan de forma diferente y cómo tomar decisiones de producto que sirven a múltiples contextos culturales sin ser genéricas para todos.

**3. La toma de decisiones en equipos multiculturales**
Los equipos multiculturales tienen actitudes distintas hacia el conflicto, el consenso y la jerarquía, y esto afecta profundamente a la toma de decisiones. Explícame cómo gestionar la toma de decisiones en un equipo culturalmente diverso: las diferencias en cómo se expresa el desacuerdo (el miembro del equipo que dice "sí" pero significa "no lo creo, pero me parece descortés contradecirte" vs. el que dice "eso es completamente equivocado" como forma de compromiso intelectual genuino), cómo diseñar el proceso de decisión para que todos los puntos de vista se escuchen antes de decidir, cómo gestionar el desacuerdo entre perspectivas culturales distintas sobre la dirección del producto y cómo el PM puede tomar decisiones finales de forma que sea percibida como legítima en todas las culturas del equipo.

**4. El roadmap para mercados multiculturales**
Construir el roadmap de un producto que sirve a múltiples culturas requiere un proceso diferente al de un producto diseñado para un único mercado. Propón el proceso de priorización del roadmap para mercados multiculturales: cómo gestionar las peticiones de funcionalidades específicas de cada mercado (y cuándo construirlas vs. cuándo diseñar la solución que sirve a todos los mercados), cómo priorizar la adaptación cultural del producto (localización, adaptación de UX, ajuste de funcionalidades) en el roadmap junto con el desarrollo de nuevas funcionalidades, cómo involucrar a los equipos locales de cada mercado en el proceso de priorización y cómo comunicar el roadmap a los stakeholders de distintos mercados que tienen expectativas distintas sobre lo que el producto debe hacer.

**5. Las retrospectivas y el feedback del equipo multicultural**
Las retrospectivas son el mecanismo de mejora del equipo de producto, pero en equipos multiculturales pueden generar dinámicas que inhiben el feedback honesto. Explícame cómo facilitar retrospectivas en equipos multiculturales: los formatos de retrospectiva que generan participación equitativa independientemente del origen cultural (los formatos anónimos, los formatos escritos que dan tiempo para pensar antes de compartir, los formatos con breakouts en grupos más pequeños), cómo crear el espacio de seguridad psicológica para el feedback crítico en culturas donde la crítica directa se percibe como ataque personal, y cómo usar la perspectiva cultural para distinguir entre un problema de proceso del equipo y una diferencia de expectativas culturales sobre cómo debe funcionar el equipo.

**6. Desarrollar al equipo de producto multicultural**
El desarrollo profesional en un equipo multicultural requiere sensibilidad cultural. Explícame las prácticas de desarrollo del equipo que funcionan en contextos multiculturales: cómo hacer el feedback de desarrollo de forma culturalmente apropiada (las diferencias en cómo dar y recibir feedback de desarrollo entre culturas), cómo identificar las ambiciones profesionales de los miembros del equipo de culturas donde hablar de las propias ambiciones se percibe como arrogancia, cómo gestionar las promociones de forma equitativa en un equipo donde la visibilidad y la autopromotion son culturalmente más naturales para algunos miembros que para otros, y cómo construir la cultura de desarrollo continuo que todos los miembros del equipo pueden adoptar independientemente de su origen cultural.

Quiero ejemplos concretos de situaciones de liderazgo en equipos de producto multiculturales y cómo navegarlas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Liderar equipos de producto multiculturales y construir productos que sirven a mercados diversos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Liderazgo inclusivo: el manager que potencia la diversidad',
                'description'      => 'El manager que no solo tolera la diversidad sino que la convierte en ventaja: las prácticas de liderazgo inclusivo, el feedback que funciona para todos y el entorno psicológicamente seguro que hace que los perfiles más diversos puedan ser su mejor versión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de desarrollo del liderazgo con especialización en liderazgo inclusivo, con experiencia formando y asesorando a managers en organizaciones diversas para que desarrollen las prácticas de liderazgo que hacen que todos los miembros de su equipo puedan contribuir plenamente independientemente de su género, origen cultural, etnia, orientación sexual, discapacidad o cualquier otra dimensión de la diversidad. Voy a explorar contigo cómo desarrollar un liderazgo genuinamente inclusivo.

Mi contexto: [describe tu situación: el contexto en el que lideras (sector, tamaño de equipo, las dimensiones de diversidad más presentes en tu equipo) y los desafíos de inclusión más concretos que enfrentas o que quieres anticipar]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Qué es el liderazgo inclusivo y por qué el manager individual importa**
La inclusión no es responsabilidad exclusiva de RRHH: el manager directo es el factor que más determina si un empleado siente que puede ser su mejor versión en el trabajo. Explícame qué significa el liderazgo inclusivo en la práctica: las diferencias entre el manager que tolera la diversidad (permite que exista), el que la acepta (no la cuestiona) y el que la potencia (la convierte en ventaja del equipo), los seis comportamientos del líder inclusivo según la investigación de Deloitte (compromiso, valentía, consciencia del sesgo, curiosidad, inteligencia cultural y colaboración) y por qué el 70% de la varianza en el sentido de inclusión de un empleado se explica por el comportamiento de su manager directo.

**2. La consciencia del sesgo: lo que el manager no sabe que hace**
Los sesgos inconscientes son el mayor obstáculo para el liderazgo inclusivo porque son invisibles para quien los tiene. Guíame por los sesgos más comunes que afectan a las decisiones del manager: el sesgo de afinidad (tendencia a favorecer a los que son similares a nosotros), el sesgo de confirmación (tendencia a buscar información que confirma lo que ya creemos sobre una persona), el sesgo de atribución (atribuir los éxitos de los empleados similares a nosotros a capacidad y los de los diferentes a suerte), el sesgo de altura/apariencia y el de nombre y origen en la selección, y el halo y horn effect en la evaluación del performance. Para cada sesgo, dame una práctica concreta que lo mitiga.

**3. La seguridad psicológica: crear el entorno donde todos pueden contribuir**
Sin seguridad psicológica, la diversidad del equipo es decorativa: las personas que sienten más riesgo al hablar simplemente no hablan. Explícame cómo el manager inclusivo construye la seguridad psicológica: la diferencia entre la seguridad psicológica real (los miembros del equipo pueden discrepar con el manager sin consecuencias) y la seguridad superficial (el manager dice que quiere feedback pero las respuestas a los que lo dan muestran lo contrario), las prácticas de reunión que distribuyen la participación de forma más equitativa, cómo el manager responde cuando alguien señala un problema para que el equipo vea que es seguro hacerlo y cómo medir la seguridad psicológica del equipo para saber si las prácticas están funcionando.

**4. El feedback inclusivo: que funciona para todos**
El feedback es el mecanismo de desarrollo más importante del manager, pero los enfoques estándar de feedback funcionan mejor para algunos perfiles que para otros. Explícame cómo dar feedback de forma inclusiva: las diferencias en cómo reciben el feedback las personas según su género (la investigación sobre cómo el feedback a mujeres tiende a ser más vago y menos accionable que el feedback a hombres), su origen cultural (las culturas donde el feedback directo negativo en público es ofensivo vs. las culturas donde se espera esa directividad), su neurodiversidad (las personas con TDAH o autismo que necesitan un formato de feedback más estructurado y específico) y cómo diseñar un sistema de feedback del equipo que garantiza que todos reciben el mismo nivel de especificidad y accionabilidad.

**5. La equidad en las decisiones del manager**
Las decisiones cotidianas del manager determinan quién avanza y quién se queda atrás en la organización. Propón un sistema de decisiones más equitativas: cómo estructurar las decisiones de asignación de proyectos para que los proyectos más visibles y estratégicos no recaigan siempre en los mismos perfiles, cómo hacer las evaluaciones de performance de forma que reducen el impacto de los sesgos (el uso de criterios explícitos y conductuales vs. impresiones generales), cómo gestionar las promociones de forma que las personas que no se autopostulan con la misma facilidad (por género, por cultura, por personalidad) tengan las mismas oportunidades que los que sí lo hacen y cómo el manager puede identificar los talentos ocultos del equipo que sus propios sesgos le hacen invisibles.

**6. El manager inclusivo como modelo y multiplicador**
El manager inclusivo no solo incluye a su propio equipo: influye en la cultura más amplia de la organización. Explícame cómo el manager puede ser un multiplicador de la inclusión más allá de su equipo: cómo intervenir cuando observa comportamientos excluyentes en otros equipos o en reuniones (el ally activo que habla cuando alguien es interrumpido, cuando una idea es ignorada y repetida por otro, cuando el chiste no es tan gracioso), cómo dar feedback a sus pares sobre comportamientos excluyentes de forma que lo reciban constructivamente, cómo desarrollar las prácticas de liderazgo inclusivo en los managers que le reportan y cómo usar su posición para llevar las perspectivas de los grupos menos representados de su equipo a las conversaciones de nivel superior donde se toman las decisiones que les afectan.

Quiero prácticas concretas y ejemplos de situaciones de liderazgo inclusivo que pueda aplicar desde mañana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar prácticas de liderazgo inclusivo que convierten la diversidad del equipo en ventaja',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Inversión en diversidad: el caso de negocio del DEI',
                'description'      => 'Presenta el caso financiero de la diversidad: la evidencia de impacto en el rendimiento financiero, los indicadores de diversidad que los inversores institucionales monitorizan y el proceso de construir el argumento cuantitativo que convence al board.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con especialización en ESG y reporting de diversidad, con experiencia construyendo casos de negocio para iniciativas DEI ante consejos de administración e inversores institucionales, con conocimiento de la evidencia empírica sobre la relación entre diversidad e indicadores financieros y de los marcos de reporting que los inversores cada vez más demandan. Voy a explorar contigo cómo construir el caso financiero de la inversión en diversidad.

Mi contexto: [describe tu situación: eres el CFO o el director de DEI que quiere construir el caso financiero, el tamaño de la empresa, los inversores o stakeholders que necesitas convencer y las iniciativas de diversidad que ya tienes en marcha o que quieres impulsar]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La evidencia: qué dice realmente la investigación sobre diversidad y rendimiento financiero**
El debate sobre diversidad y rendimiento financiero está lleno de afirmaciones que simplifican la evidencia. Explícame qué dice realmente la investigación: los estudios de McKinsey, Boston Consulting Group y Peterson Institute sobre la relación entre diversidad en el liderazgo y rentabilidad (con los matices importantes sobre causalidad vs. correlación), la evidencia sobre diversidad de género y rendimiento financiero (los estudios de consejos de administración con mayor representación femenina y su relación con el ROE y el ROA), la evidencia sobre diversidad étnica y rendimiento, los mecanismos causales propuestos (mayor creatividad, mejor toma de decisiones, menor pensamiento de grupo) y las críticas legítimas a esta literatura que un CFO rigoroso debe conocer para no hacer afirmaciones que no puede defender.

**2. Los indicadores de DEI que los inversores institucionales monitorizan**
Los inversores institucionales han incorporado los indicadores de diversidad en sus criterios de evaluación de empresas. Explícame qué datos de diversidad monitorizan los principales inversores: los indicadores que los grandes fondos (BlackRock, Vanguard, State Street) incluyen en sus stewardship priorities (composición del consejo por género y etnia, diversidad en el equipo directivo, políticas de remuneración equitativa), los marcos de reporting de diversidad que están emergiendo como estándares (el Human Capital Management de la SEC, el GRI 405 sobre diversidad e igualdad de oportunidades, el SASB según el sector), cómo las agencias de ratings ESG (MSCI, Sustainalytics, ISS) puntúan la diversidad de las empresas y qué impacto tiene esta puntuación en el acceso al capital.

**3. El modelo de coste del déficit de diversidad**
Construir el caso financiero del DEI requiere cuantificar tanto los beneficios de la diversidad como los costes de su ausencia. Guíame por la cuantificación del coste del déficit de diversidad: el coste del turnover diferencial (si los empleados de grupos subrepresentados abandonan la empresa a mayor tasa que la media, cuánto cuesta en recruiting, onboarding y pérdida de productividad), el coste de las demandas y los escándalos de discriminación (el promedio de coste de litigio, la prima de riesgo reputacional), el coste de las oportunidades perdidas (los clientes que prefieren proveedores con valores alineados, el talento que elige competidores más inclusivos) y cómo modelar estos costes con los datos disponibles en la empresa.

**4. El ROI de las iniciativas de DEI**
El board quiere saber el retorno de la inversión en diversidad, no solo la evidencia académica. Propón un framework para calcular el ROI de las iniciativas de DEI: cómo medir el impacto de los programas de mentoring para grupos subrepresentados (cambio en las tasas de promoción y retención), cómo medir el impacto de la formación en sesgos inconscientes (cambio en las métricas de selección y evaluación), cómo medir el impacto de los objetivos de diversidad en el recruiting (cambio en la composición del pipeline de candidatos y en los ratios de conversión) y cómo construir el modelo financiero que traduce estas mejoras en impacto en el P&L.

**5. La presentación del caso al board y a los inversores**
La presentación del caso de negocio de la diversidad al board tiene sus propios desafíos. Explícame cómo estructurar la presentación: el argumento de apertura que sitúa la diversidad como factor de riesgo y de oportunidad (no como una obligación moral), los datos de diversidad de la empresa comparados con los benchmarks del sector y con los competidores directos, la evidencia del impacto financiero adaptada al contexto específico de la empresa, el plan de inversión con los objetivos de diversidad para los próximos tres años, los indicadores de progreso que el board revisará trimestralmente y cómo responder las preguntas difíciles (la pregunta sobre la meritocracia, la pregunta sobre los costes a corto plazo) de forma honesta y rigurosa.

**6. El reporting de diversidad hacia los stakeholders externos**
Las empresas cotizadas y las que tienen inversores institucionales están bajo presión creciente para reportar sus métricas de diversidad. Explícame cómo construir el sistema de reporting de diversidad: las métricas que hay que medir y reportar (composición de la plantilla por género y etnia en cada nivel jerárquico, brecha salarial de género, tasa de promoción por grupo, tasa de retención por grupo), cómo asegurar la calidad y la consistencia de los datos de diversidad (el principal problema de credibilidad del reporting de DEI), cómo situar el reporting en el marco de los estándares emergentes y cómo comunicar el progreso honestamente cuando los resultados son mixtos (sin caer en el greenwashing de la diversidad).

Quiero un framework de cuantificación y una estructura de presentación que pueda adaptar a mi empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir el caso financiero de la inversión en diversidad para el board y los inversores',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Liderazgo jurídico inclusivo: el despacho que refleja la sociedad',
                'description'      => 'Construye un despacho o departamento jurídico que refleja la diversidad de la sociedad a la que sirve: las políticas de promoción equitativa, la gestión de sesgos en el proceso de evaluación y el modelo de liderazgo que retiene a los profesionales diversos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un socio director de un despacho de abogados con compromiso real con la diversidad y la inclusión, con experiencia diseñando e implementando políticas y prácticas de liderazgo inclusivo en el sector jurídico, con conocimiento de los desafíos específicos del sector legal para retener y promover a profesionales de grupos subrepresentados. Voy a explorar contigo cómo construir un despacho o departamento jurídico genuinamente inclusivo.

Mi contexto: [describe tu situación: despacho de abogados o departamento jurídico corporativo, tamaño, el estado actual de la diversidad en la organización y los principales retos de inclusión que identificas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El problema de la diversidad en el sector jurídico**
El sector jurídico tiene un problema bien documentado de diversidad: alta representación de grupos subrepresentados en los niveles de entrada que se diluye dramáticamente en los niveles de liderazgo. Explícame las causas estructurales de este problema en los despachos y departamentos jurídicos: el modelo de partnership tradicional y sus sesgos estructurales (quién tiene acceso a los clientes y asuntos más lucrativos, que determinan quién llega a socio), el sesgo de afinidad en la asignación de asuntos (los socios tienden a asignar los mejores asuntos a los abogados con los que se sienten más cómodos), el problema del "pipeline" falso (la creencia de que la diversidad llegará sola cuando las generaciones más jóvenes más diversas asciendan, ignorando que el sistema filtra a los más diversos antes de que lleguen al liderazgo) y el impacto del "doble turno" en los abogados con responsabilidades familiares.

**2. El proceso de evaluación y promoción sin sesgos**
El proceso de evaluación de los abogados es la palanca más importante para la equidad en el acceso al liderazgo. Guíame por el diseño de un proceso de evaluación más equitativo: cómo estructurar los criterios de evaluación de forma que sean conductuales y específicos (en lugar de basados en atributos subjetivos como "presencia ejecutiva" que se puntúan de forma diferente según el género y la etnia del evaluado), cómo diseñar el proceso de calibración de evaluaciones para que los revisores conscientes del sesgo lo mitiguen, cómo asegurar que los créditos de negocio se registran de forma que refleja la contribución real de todos los abogados (y no solo la del socio que firmó al cliente), y cómo gestionar el proceso de selección de socios para que la red de relaciones informales no sea el criterio determinante.

**3. La asignación equitativa de asuntos y clientes**
En un despacho, la carrera de un abogado la construyen los asuntos en los que trabaja. La asignación inequitativa de asuntos es el mecanismo más directo de exclusión. Propón el sistema de asignación equitativa de asuntos: cómo rastrear la asignación de asuntos para identificar patrones de inequidad (qué abogados reciben los asuntos más estratégicos, cuáles quedan asignados sistemáticamente a trabajo de bajo valor), cómo diseñar el proceso de coordinación de asuntos que reduce el impacto del sesgo de afinidad, cómo gestionar la resistencia de los socios que prefieren asignar a sus abogados "de confianza" y cómo dar a los abogados de grupos subrepresentados acceso a los clientes y asuntos que construyen la carrera hacia el liderazgo.

**4. La retención: por qué se van los abogados más diversos**
Las encuestas de salida en despachos muestran sistemáticamente que los abogados de grupos subrepresentados que se van no lo hacen por las razones que los líderes asumen. Explícame las causas reales del abandono diferencial: la sensación de exclusión de las redes informales de poder (los almuerzos de cliente a los que no todos son invitados, las conversaciones de pasillo donde se toman las decisiones), el agotamiento del "tax de diversidad" (la carga adicional de ser el representante de todo un grupo en cada reunión), la falta de sponsors que promuevan activamente al abogado diverso ante los decision makers, el impacto del entorno de trabajo (los comentarios que se hacen en la sala de reuniones que nadie cuestiona) y cómo diseñar las intervenciones de retención que atacan las causas reales y no los síntomas.

**5. El sponsoring como herramienta de avance**
El mentoring dice "te doy consejo", el sponsoring dice "te pongo mi reputación". En el sector jurídico, el sponsoring es la herramienta más efectiva para el avance de los abogados de grupos subrepresentados. Explícame cómo implementar un programa de sponsoring en un despacho: la diferencia entre el mentor (que da consejo y soporte) y el sponsor (que usa su capital político para abrir puertas al abogado al que patrocina), cómo estructurar el programa de sponsoring para que sea sistemático y no dependa de las afinidades personales, cómo formar a los socios para que sean sponsors efectivos (lo que implica tomar riesgos reputacionales en favor de otro) y cómo medir el impacto del programa de sponsoring en las tasas de promoción y retención de los abogados patrocinados.

**6. El rol del liderazgo en la transformación cultural**
La diversidad en el sector jurídico no cambia sin compromiso real del liderazgo. Explícame qué tiene que hacer el liderazgo del despacho para que la transformación hacia una organización más inclusiva sea real: la diferencia entre el compromiso declarativo (el email del managing partner el día del Pride) y el compromiso estructural (los cambios en los procesos de evaluación, asignación y promoción), cómo vincular los objetivos de diversidad a la compensación de los socios (el único incentivo que mueve el comportamiento en los despachos de forma sistemática), cómo gestionar la resistencia de los socios que ven las iniciativas de DEI como amenaza a la meritocracia y cómo medir el progreso en diversidad de forma que sea honesta sobre la velocidad real del cambio.

Quiero políticas y prácticas concretas que pueda implementar, no solo principios de buenas intenciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un despacho o departamento jurídico inclusivo que retiene y promueve a profesionales diversos',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte para clientes de culturas y capacidades diversas',
                'description'      => 'El equipo de customer success que da el mismo nivel de servicio a todos los clientes: las prácticas de comunicación intercultural, los canales de soporte accesibles y la formación del equipo en competencia cultural.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con experiencia construyendo y formando equipos de CS que trabajan con carteras de clientes culturalmente diversas y con diferentes capacidades de acceso a los canales de soporte estándar, con conocimiento de las prácticas de comunicación intercultural y de accesibilidad que hacen que todos los clientes reciban el mismo nivel de servicio. Voy a explorar contigo cómo construir un equipo de CS capaz de servir a clientes de culturas y capacidades diversas.

Mi contexto: [describe tu equipo y tu cartera de clientes: los mercados geográficos o las comunidades culturales que sirves, las dimensiones de diversidad más relevantes en tu cartera (cultural, lingüística, capacidades de acceso) y los problemas de servicio que has identificado con clientes específicos]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la diversidad de la cartera de clientes importa en CS**
Un equipo de CS diseñado para el cliente promedio da un servicio por debajo del estándar a todos los que no son el cliente promedio. Explícame el impacto de la diversidad de clientes en la función de CS: la evidencia de que los clientes de grupos subrepresentados tienen tasas de churn más altas cuando el equipo de CS no está preparado para servirlos (y por qué esto es un problema de proceso, no de valor del producto), el riesgo reputacional de los malos tratos a clientes de culturas específicas que se viralizan en las comunidades a las que pertenecen, la oportunidad de construir lealtad de marca más alta entre comunidades que reciben un servicio genuinamente inclusivo y cómo la diversidad de la cartera es una señal de la madurez del modelo de negocio.

**2. La competencia cultural en el equipo de CS**
La competencia cultural no es saber todo sobre todas las culturas: es la capacidad de reconocer las diferencias culturales y adaptarse. Guíame por el desarrollo de la competencia cultural en el equipo de CS: las dimensiones culturales que más afectan a la interacción de CS (las diferencias en el estilo de comunicación del cliente cuando tiene un problema, la actitud hacia la queja directa vs. la queja indirecta, el rol de la jerarquía en la relación con el proveedor), las señales de malentendido cultural en una interacción de soporte (cuándo la fricción en la conversación se debe a diferencias culturales y no a insatisfacción con el producto), los ejercicios de formación que desarrollan la competencia cultural del equipo y cómo el equipo de CS puede compartir el conocimiento sobre clientes de culturas específicas para que la institución aprenda.

**3. La comunicación con clientes de distintas culturas**
Las mismas palabras significan cosas distintas en distintas culturas, y el soporte que ignora esto genera frustración. Explícame las prácticas de comunicación en CS adaptadas al contexto cultural: cómo adaptar el tono de las comunicaciones escritas (el nivel de formalidad, la calidez, la directividad) al contexto cultural del cliente, cómo interpretar la comunicación del cliente cuando proviene de una cultura de alto contexto (donde el cliente no siempre expresa el problema directamente sino que lo da por entendido del contexto), cómo gestionar las expectativas de tiempo de respuesta en culturas con distintas actitudes hacia la urgencia, y cómo gestionar las conversaciones difíciles (quejas, escaladas, malos resultados) de forma que respetan las convenciones culturales del cliente.

**4. Los canales de soporte accesibles**
El canal de soporte estándar excluye a clientes con distintas capacidades de acceso. Propón la estrategia de canales de soporte accesibles: los canales que sirven a clientes con discapacidades visuales (soporte por voz que funciona con lectores de pantalla, alternativas de texto al contenido visual), los canales para clientes con discapacidades auditivas (chat en lugar de soporte telefónico, subtítulos en los videos de soporte), los canales para clientes con discapacidades cognitivas (la simplificación del lenguaje en las comunicaciones de soporte, los procesos paso a paso que reducen la carga cognitiva), los canales para clientes con barreras de idioma (el soporte multilingüe, las guías traducidas) y cómo priorizar la inversión en accesibilidad de canales según el perfil de la cartera de clientes.

**5. El playbook de CS para clientes de contextos culturales específicos**
El conocimiento cultural que el equipo acumula sobre cómo servir a clientes de culturas específicas debe documentarse para que no se pierda cuando un CSM cambia. Explícame cómo construir los playbooks de CS culturales: la documentación de las particularidades de comunicación y servicio para los segmentos de clientes más relevantes de la cartera (no estereotipos sino patrones reales identificados en la interacción), las prácticas de escalada cuando el CSM detecta que hay una barrera cultural que está afectando al servicio, el proceso de feedback de los CSMs que trabajan con clientes de culturas específicas para mejorar los playbooks con el tiempo y cómo formar a los nuevos CSMs en los playbooks culturales como parte del onboarding.

**6. Medir la equidad en el servicio al cliente**
Un equipo de CS comprometido con la diversidad mide si está entregando el mismo nivel de servicio a todos los clientes independientemente de su cultura o capacidad. Dame el framework de medición de la equidad en el servicio: cómo segmentar las métricas de CS (NPS, CSAT, churn, tiempo de resolución) por segmento cultural o demográfico para identificar disparidades de servicio, qué hacer cuando los datos revelan que un segmento específico de clientes tiene peores resultados de CS que la media, cómo rastrear las interacciones de CS que involucran barreras culturales o de accesibilidad para identificar patrones y mejorar los procesos, y cómo reportar el progreso en equidad del servicio al liderazgo de la empresa.

Quiero prácticas de formación y playbooks concretos que pueda implementar en mi equipo de CS.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un equipo de CS que entrega el mismo nivel de servicio a todos los clientes con equidad',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El freelance que atrae y trabaja con clientes diversos',
                'description'      => 'El freelance cuya base de clientes refleja la diversidad del mercado: las prácticas de comunicación inclusiva, el portfolio que atrae a clientes diversos y el modelo de trabajo que elimina las barreras que impiden que ciertos perfiles de cliente te contraten.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con experiencia construyendo una base de clientes diversa e inclusiva, con conocimiento de las barreras que llevan a los freelancers a trabajar siempre con el mismo perfil de cliente y de las prácticas que eliminan esas barreras para atraer y servir a clientes de orígenes, culturas e identidades más variados. Voy a explorar contigo cómo construir una práctica freelance que refleja la diversidad del mercado.

Mi contexto: [describe tu situación: tipo de servicio que ofreces, el perfil actual de tus clientes (sector, tamaño, geografía, demografía del decisor de compra) y si has identificado segmentos de clientes potenciales a los que no estás llegando]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la base de clientes del freelance tiende a ser homogénea**
La mayoría de los freelancers trabajan con clientes que se parecen mucho entre sí: del mismo sector, del mismo país, del mismo perfil demográfico. Explícame los mecanismos que producen esta homogeneidad: el sesgo de afinidad en el networking (tendemos a conectar con personas similares a nosotros), el portfolio y el posicionamiento que atraen implícitamente a ciertos perfiles y repelen a otros, los canales de adquisición de clientes que alcanzan solo a ciertos segmentos del mercado, las barreras de precio que excluyen a ciertos clientes aunque tengan el presupuesto y los procesos de trabajo que asumen condiciones que no todos los clientes tienen (comunicación solo en inglés, herramientas de pago que no están disponibles en todos los países, horarios de reunión que asumen una zona horaria específica).

**2. El portfolio y el posicionamiento que atraen a clientes diversos**
El portfolio del freelance es la primera señal de para quién trabaja y para quién no. Guíame por el diseño de un portfolio que atrae a clientes más diversos: cómo seleccionar los casos de estudio del portfolio para que representen la diversidad de clientes a los que quieres atraer (sin falsear la realidad de tu experiencia), cómo adaptar el copy del portfolio para que no use referencias culturales que implícitamente señalan a un perfil específico de cliente, cómo diseñar la presentación visual del portfolio para que sea culturalmente neutral y estéticamente accesible a una audiencia diversa, y cómo usar el contenido del portfolio (estudios de caso, testimonios, proceso de trabajo) para demostrar que puedes servir a clientes de distintos contextos.

**3. La comunicación inclusiva con clientes potenciales**
La forma en que el freelance se comunica con clientes potenciales puede atraer o repeler a perfiles de clientes que de otra forma serían perfectos. Explícame las prácticas de comunicación inclusiva en el proceso de ventas del freelance: cómo adaptar el lenguaje de las propuestas y las comunicaciones para que no asuman el contexto cultural del cliente (referencias locales, humor culturalmente específico, asunciones sobre el nivel de educación formal), cómo hacer las primeras conversaciones con clientes potenciales de culturas distintas a la propia (la actitud de curiosidad genuina vs. la de exportar la propia cultura de trabajo), y cómo manejar las diferencias de idioma cuando el cliente no habla el idioma del freelance con la misma fluidez.

**4. El modelo de trabajo que no excluye por defecto**
Los procesos de trabajo del freelance que parecen neutrales a menudo asumen condiciones que no todos los clientes tienen. Propón un modelo de trabajo que elimina las barreras de acceso: los métodos de pago que funcionan para clientes de distintos países (las alternativas a las transferencias SWIFT y al uso de tarjeta de crédito que no funciona en todos los mercados), los horarios de reunión que funcionan para clientes de distintas zonas horarias (y la comunicación asíncrona que reduce la dependencia de las reuniones síncronas), las herramientas de colaboración accesibles para clientes con distintos niveles de sofisticación tecnológica (la alternativa al stack de herramientas que asume que el cliente tiene acceso a Figma, Notion y Loom) y los contratos y presupuestos que son comprensibles para clientes que no están familiarizados con las convenciones de la industria.

**5. El networking que construye una red diversa**
La base de clientes del freelance refleja la diversidad de su red. Si la red es homogénea, la base de clientes también lo será. Explícame cómo construir una red profesional más diversa: los espacios de networking donde se concentran los clientes de perfiles distintos a los habituales (comunidades de fundadores de color, organizaciones de empresas lideradas por mujeres, cámaras de comercio internacionales, redes profesionales de distintas culturas), cómo el freelance puede hacer networking auténtico con personas de perfiles muy diferentes sin que parezca instrumental, cómo el contenido que el freelance produce puede atraer a audiencias más diversas que las que sigue actualmente y cómo los clientes satisfechos de distintos perfiles son la mejor fuente de referidos dentro de sus propias comunidades.

**6. Adaptar el servicio a clientes de contextos muy diferentes**
Servir bien a clientes muy distintos requiere flexibilidad sin perder la identidad del servicio. Explícame cómo adaptar el servicio del freelance a clientes de distintos contextos: las partes del servicio que son universales (la calidad del trabajo, la comunicación proactiva, el cumplimiento de plazos) y las partes que se adaptan al contexto cultural y las preferencias del cliente (el estilo de comunicación, la formalidad de los entregables, la cadencia de revisiones), cómo gestionar los proyectos con clientes de culturas donde el proceso de feedback es diferente al que el freelance está acostumbrado, y cómo aprender de cada cliente nuevo de un contexto diferente para mejorar el servicio a ese segmento en el futuro.

Quiero ejemplos concretos y cambios prácticos que pueda implementar en mi comunicación, mi portfolio y mi proceso de trabajo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una práctica freelance que atrae y sirve a clientes de orígenes y contextos diversos',
                'vote_score'       => 42,
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
