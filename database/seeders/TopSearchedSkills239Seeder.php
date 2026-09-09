<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills239Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing basado en soluciones, no en productos',
                'description'       => 'El marketing que vende resultados, no características: el messaging centrado en el cliente, los casos de uso y los outcomes que resuenan con el comprador antes de hablar del producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de go-to-market y messaging con experiencia ayudando a empresas B2B a pasar de comunicar lo que hace su producto a comunicar el valor que entrega al cliente. Sabes que la diferencia entre marketing centrado en el producto y marketing centrado en la solución no es semántica: es la diferencia entre ser ignorado y ser buscado.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto o servicio y cuál es el perfil del cliente al que te diriges (sector, tamaño de empresa, rol del decisor)?
2. ¿Cuál es el mensaje principal que comunicas actualmente sobre tu producto en la web y en los materiales de ventas?
3. ¿Cuáles son los tres resultados de negocio más importantes que tu producto ayuda a conseguir?
4. ¿Cuáles son las tres objeciones más frecuentes que escuchas en el proceso de ventas?
5. ¿Cuál es el canal principal de marketing y cuál es el principal problema de conversión actual?

Con esas respuestas, diseña la estrategia completa de messaging basado en soluciones:

**1. El diagnóstico del messaging actual**
Antes de construir el nuevo messaging hay que entender qué está fallando en el actual. Define el proceso de auditoría del messaging: cómo identificar si el lenguaje está centrado en el producto o en el cliente, los test de la "silla vacía" (¿tiene sentido este mensaje para alguien que no conoce el producto?) y del "¿y qué?" (¿responde el mensaje a por qué le importa esto al cliente?), y las señales en las métricas de marketing que indican un problema de messaging (tasa de rebote alta en landing pages, bajo tiempo de sesión, conversaciones de ventas que siempre empiezan explicando qué hace el producto).

**2. El framework de messaging centrado en el cliente**
Define la arquitectura de messaging que pone al cliente en el centro: el problema que resuelves (en el lenguaje que el cliente usa para describir ese problema, no en el tuyo), los síntomas que el cliente reconocería como señales de que tiene ese problema, la transformación que tu solución entrega (el antes y el después), las pruebas de que la transformación es real (casos de éxito con métricas) y la razón por la que eres la mejor opción para entregar esa transformación. Explica cómo adaptar este framework al rol específico del decisor (el usuario final, el directivo técnico y el comprador financiero tienen problemas diferentes y necesitan mensajes diferentes).

**3. Los casos de uso como unidad de messaging**
Un caso de uso bien descrito es más persuasivo que cualquier lista de funcionalidades. Define la estrategia de messaging basado en casos de uso: cómo identificar los tres o cuatro casos de uso principales para los que los mejores clientes usan tu producto, cómo narrar cada caso de uso en formato de problema-solución-resultado con un cliente real o compuesto, cómo organizar los casos de uso en el website para que el visitante encuentre rápidamente el que refleja su situación y cómo usar los casos de uso en las conversaciones de ventas para acelerar el discovery.

**4. El website como máquina de soluciones, no de features**
El website es el primer punto de contacto entre el cliente y el mensaje. Define cómo reescribir el website con un enfoque de soluciones: el headline de la home que describe la transformación en diez palabras o menos, la estructura de la página de producto que empieza por el problema y termina por la solución (nunca al revés), las páginas de casos de uso que el visitante con ese problema específico encuentra directamente desde la búsqueda y la arquitectura de información que facilita que el visitante llegue al contenido más relevante para su situación en el menor número de clics.

**5. El messaging en los canales de distribución**
El messaging basado en soluciones tiene que ser consistente en todos los touchpoints del proceso de compra. Define cómo adaptar el mensaje de solución a cada canal: el LinkedIn post que describe el problema antes de mencionar la solución, el email de outreach que no empieza con "somos una empresa que...", el anuncio de paid que habla del resultado no de la feature, el pitch de ventas que hace discovery antes de hacer demo y el one-pager que el comercial envía al prospecto que está comparando opciones.

**6. Métricas del impacto del cambio de messaging**
Cambiar el messaging es un experimento que hay que medir. Define los KPIs que indican si el nuevo messaging funciona: la tasa de conversión de visitas a leads en landing pages, el tiempo medio del ciclo de ventas (un buen messaging lo acorta porque el cliente ya entiende el valor antes de hablar con ventas), la calidad de los leads (si el messaging atrae al cliente ideal, el ratio de SQLs sobre MQLs mejora), el porcentaje de conversaciones de ventas donde el vendedor tiene que explicar qué hace el producto (debería bajar) y el feedback cualitativo del equipo de ventas sobre si las conversaciones son más fluidas.

Termina con los cinco cambios de messaging más impactantes que implementarías en los próximos treinta días si pudieras hacer solo cinco cosas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Transformación del messaging de marketing de orientado al producto a orientado a la solución y los outcomes del cliente.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Pre-sales engineering: el developer que apoya al equipo de ventas',
                'description'       => 'El sales engineer que hace que el deal enterprise sea posible: el discovery técnico, el proof of concept personalizado y la demostración que elimina el riesgo técnico percibido por el comprador.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un sales engineer senior con experiencia en ventas enterprise de soluciones tecnológicas complejas. Has participado en cientos de deals donde la capacidad técnica de demostrar la solución, entender los requisitos de integración del cliente y construir el proof of concept correcto ha sido la diferencia entre ganar y perder. Sabes que el sales engineer no es un demo-monkey: es el traductor técnico que hace que el acuerdo sea posible.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto o plataforma técnica que vendes y cuál es el perfil del comprador (CTO, IT director, arquitecto de soluciones, developer lead)?
2. ¿Cuál es el tamaño típico del deal enterprise y cuántas personas del lado técnico del cliente suelen estar involucradas?
3. ¿Cuál es el mayor obstáculo técnico que suele aparecer en el proceso de evaluación?
4. ¿Cuánto tiempo suele dedicar el equipo de pre-sales a cada deal y en qué etapas del ciclo de ventas?
5. ¿Tienes un proceso formal de pre-sales o cada SE trabaja de forma independiente?

Con esas respuestas, diseña el proceso completo de pre-sales engineering:

**1. El technical discovery: entender antes de demostrar**
El error más común en pre-sales es hacer una demo genérica antes de entender el problema técnico específico del cliente. Define el proceso de technical discovery que precede a cualquier demostración: las preguntas que revelan la arquitectura actual del cliente (stack tecnológico, integraciones existentes, restricciones de seguridad), los requisitos técnicos no negociables que el producto debe cumplir, los casos de uso específicos que el equipo técnico del cliente quiere ver resueltos y los riesgos técnicos percibidos que hay que eliminar en la evaluación. Explica cómo documentar el technical discovery de forma que el equipo de ventas lo entienda y pueda usarlo en sus conversaciones con el lado de negocio del cliente.

**2. La demostración técnica que convence a los ingenieros**
Los ingenieros del cliente tienen el detector de bullshit más fino del ecosistema de compras. Define la estructura de la demo técnica que supera ese filtro: la demo que empieza por el problema técnico real del cliente (no por la funcionalidad más bonita del producto), el nivel de profundidad adecuado para la audiencia (diferente para el arquitecto, para el developer y para el IT manager), los momentos de la demo donde invitas al equipo técnico del cliente a hacer preguntas difíciles o a proponer escenarios alternativos y cómo manejar las preguntas para las que no tienes respuesta inmediata sin perder credibilidad.

**3. El proof of concept que elimina el riesgo técnico**
Un PoC bien diseñado cierra deals que ninguna demo puede cerrar. Define el proceso de diseño y ejecución del PoC: los criterios de éxito que el cliente y el SE acuerdan antes de empezar (sin criterios de éxito definidos el PoC nunca termina), el alcance del PoC que demuestra lo suficiente sin convertirse en un proyecto de implementación gratuito, el timeline realista que no satura al equipo de pre-sales con múltiples PoCs en paralelo y el proceso de presentación de resultados que maximiza el impacto de los hallazgos positivos.

**4. La gestión de los requisitos de seguridad y compliance**
En deals enterprise, la seguridad y el compliance son con frecuencia los mayores obstáculos para el cierre. Define el proceso de gestión de los requisitos de seguridad: cómo anticipar las preguntas del equipo de seguridad del cliente antes de que lleguen el cuestionario de ciberseguridad o la evaluación de GDPR, los materiales que prepara el SE para acelerar el proceso de aprobación (security whitepaper, penetration test results, SOC 2 certification), cómo manejar los requisitos de seguridad que el producto no cumple actualmente y el proceso de escalación al equipo de producto para los requisitos que podrían ser un bloqueador de mercado.

**5. La colaboración entre el SE y el equipo de ventas**
Un SE que trabaja de forma aislada del equipo de ventas es un recurso desperdiciado. Define la dinámica de colaboración que maximiza el impacto del pre-sales: el briefing antes de cada sesión técnica (qué sabe ya el SE sobre el cliente, qué ha prometido el vendedor, cuál es el objetivo de la sesión), el debriefing después de cada sesión técnica (qué nuevos requisitos han surgido, cuáles son los próximos pasos técnicos, qué riesgos se han identificado), la comunicación proactiva del SE cuando detecta señales de peligro en el deal y el proceso de transición al equipo de implementación cuando el deal se cierra.

**6. Las métricas de eficiencia del pre-sales**
El tiempo del SE es un recurso escaso y caro. Define las métricas que miden la eficiencia del equipo de pre-sales: el win rate de los deals donde el SE ha participado vs. los que no, el tiempo medio de SE por deal cerrado vs. por deal perdido (para identificar en qué deals no debería haberse invertido tiempo de SE), el ratio de PoCs que se convierten en deals cerrados y las métricas de calidad del technical discovery (correlación entre la calidad del discovery y el win rate).

Termina con la plantilla de technical qualification que usarías para decidir si un deal merece la inversión de tiempo del equipo de pre-sales o si todavía no está suficientemente avanzado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Proceso completo de pre-sales engineering para deals enterprise, desde el technical discovery hasta el proof of concept.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design thinking en el proceso de ventas',
                'description'       => 'El consultor de diseño que usa el design thinking para entender el problema del cliente antes de proponer la solución: las herramientas de discovery visual, el co-diseño de la solución con el cliente y la propuesta que el cliente siente que ha construido él mismo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de diseño estratégico con experiencia aplicando metodologías de design thinking no solo para resolver problemas de diseño sino para estructurar el proceso de ventas de servicios de diseño complejos. Has descubierto que el mismo proceso que usas para entender a los usuarios es el que te permite entender al cliente y construir propuestas que ganan porque el cliente siente que ha participado en su construcción.

Antes de proponer nada, necesito entender tu situación:

1. ¿Qué tipo de servicios de diseño ofreces y a qué tipo de cliente (startup, empresa mediana, corporación)?
2. ¿Cuál es el proyecto o tipo de proyecto para el que quieres aplicar design thinking en el proceso de ventas?
3. ¿Cuánto tiempo tienes típicamente entre el primer contacto con el cliente y la presentación de la propuesta?
4. ¿Cuál es el mayor obstáculo en tu proceso de ventas actual: el precio, la falta de comprensión del valor, la competencia o la dificultad para articular el problema?
5. ¿Tienes acceso al cliente final o solo al decisor de compra durante el proceso de ventas?

Con esas respuestas, diseña el proceso completo de ventas basado en design thinking:

**1. La sesión de discovery como herramienta de ventas**
Una sesión de discovery bien diseñada no es una reunión de briefing, es una experiencia que el cliente recuerda y que diferencia al consultor de diseño del resto de proveedores que han mandado un formulario. Define la estructura de la sesión de discovery visual: las herramientas que usas para externalizar el pensamiento del cliente (mapas de empatía, customer journey maps, matrices de problemas), cómo facilitar la sesión para que el cliente llegue a articular el problema de una forma que él mismo no había conseguido antes de la reunión contigo y cómo documentar los hallazgos de forma que la propuesta que envíes después sea el eco de lo que el cliente mismo dijo.

**2. El co-diseño de la solución con el cliente**
El cliente que ha participado en el diseño de la solución es diez veces más fácil de convencer que el que recibe una propuesta acabada. Define el proceso de co-diseño durante el proceso de ventas: los ejercicios de sketching o wireframing que haces en la primera sesión para externalizar las ideas del cliente, las preguntas que le llevan a imaginar cómo sería el mundo con el problema resuelto, cómo usar prototipos de baja fidelidad durante el proceso de ventas para alinear expectativas antes de empezar y cómo documentar las decisiones co-creadas de forma que la propuesta sea un resumen de lo acordado, no una sorpresa.

**3. La propuesta que el cliente siente que ha construido él mismo**
La propuesta de diseño que gana no es la más bonita ni la más barata, es la que el cliente lee y piensa "esto es exactamente lo que necesito". Define la estructura de la propuesta basada en design thinking: la sección de diagnóstico que demuestra que has entendido el problema mejor de lo que el cliente lo articularía por sí mismo, la definición del reto de diseño en los términos del cliente (no en los tuyos), la propuesta de proceso que refleja la metodología que el cliente co-diseñó contigo en la sesión de discovery y los criterios de éxito que el propio cliente definió durante el proceso y que ahora aparecen como los indicadores de éxito del proyecto.

**4. La gestión de los stakeholders múltiples con design thinking**
En proyectos de diseño complejos hay múltiples stakeholders con visiones diferentes del problema. Define cómo usar las herramientas de design thinking para alinear a stakeholders con perspectivas distintas durante el proceso de ventas: el mapa de stakeholders que identifica a los diferentes actores y sus necesidades, la sesión de alineamiento donde diferentes perspectivas se sintetizan en una visión compartida del problema y cómo usar este proceso de alineamiento como diferencial en la propuesta (no solo vas a diseñar la solución, vas a facilitar el proceso de definición del problema).

**5. El prototipo como cierre de la propuesta**
Un prototipo rápido en el proceso de ventas puede ser el diferencial definitivo. Define cuándo y cómo usar prototipos de baja fidelidad durante el proceso de ventas: el prototipo de concepto que muestra la dirección de la solución sin comprometerse con el diseño final, el prototipo de proceso que visualiza cómo sería trabajar contigo antes de contratarte y los límites del prototipo en ventas (cuánto trabajas antes de cobrar y cómo defines ese límite de forma que el cliente lo entienda y lo respete).

**6. El seguimiento con mentalidad de design thinking**
El proceso de ventas no termina en la propuesta. Define el seguimiento que usa los principios del design thinking: el feedback loop después de enviar la propuesta que te permite iterar antes de que el cliente tome una decisión final, cómo manejar el "lo estamos pensando" con una pregunta de diseño que desbloquea el obstáculo real y el proceso de retrospectiva después de ganar o perder un proyecto para incorporar los aprendizajes al siguiente proceso de ventas.

Termina con la plantilla de la sesión de discovery que usarías con un cliente nuevo que acaba de contactarte para un proyecto de rediseño de su plataforma digital.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Aplicación del design thinking al proceso de ventas de servicios de diseño para crear propuestas que el cliente siente como propias.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Solution selling: descubrir el problema real antes de vender',
                'description'       => 'La metodología de ventas que empieza por el diagnóstico: el marco de discovery que va más allá de las necesidades declaradas, las preguntas que revelan el problema raíz y la propuesta que conecta la solución con los impactos de negocio identificados en la conversación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con especialización en metodologías de venta consultiva y solution selling para soluciones B2B complejas con ciclos de venta largos. Has entrenado a centenares de vendedores en el arte de hacer las preguntas correctas antes de hablar del producto, y sabes que el vendedor que escucha más de lo que habla en la primera conversación cierra más que el que hace la demo en los primeros diez minutos.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto o servicio y cuál es el perfil del decisor de compra (rol, sector, tamaño de empresa)?
2. ¿Cuál es la duración media del ciclo de ventas y en cuántas etapas está dividido el proceso comercial?
3. ¿Cuál es el mayor problema en el proceso de discovery actual: los vendedores van demasiado rápido a la demo, no hacen las preguntas correctas, o no conectan los hallazgos del discovery con la propuesta?
4. ¿Cuáles son los tres resultados de negocio más frecuentes que los clientes consiguen con tu solución?
5. ¿Tienes ya una metodología de ventas implantada (MEDDIC, Challenger, SPIN, Sandler) o cada vendedor trabaja a su manera?

Con esas respuestas, diseña el sistema completo de solution selling:

**1. El marco de discovery que va más allá de las necesidades declaradas**
Los clientes saben lo que quieren pero no siempre saben lo que necesitan. Define el marco de discovery en tres niveles: las necesidades declaradas (lo que el cliente dice que busca), las necesidades subyacentes (el problema de negocio que hay detrás de la solicitud) y el impacto estratégico (lo que significa para la empresa resolver o no resolver ese problema). Explica cómo construir la conversación que lleva al cliente del nivel superficial al estratégico y por qué el vendedor que llega al nivel estratégico tiene una ventaja competitiva que ninguna lista de funcionalidades puede replicar.

**2. Las preguntas de discovery que revelan el problema raíz**
Hay preguntas que obtienen información y preguntas que crean insight. Define la batería de preguntas de discovery organizadas en cuatro categorías: las preguntas de situación (para entender el contexto actual), las preguntas de problema (para identificar los puntos de dolor), las preguntas de implicación (para que el cliente articule las consecuencias de no resolver el problema) y las preguntas de valor (para que el cliente describa cómo sería el mundo con el problema resuelto). Para cada categoría propón ejemplos de preguntas concretas adaptadas al tipo de cliente y al tipo de problema.

**3. La propuesta que conecta la solución con los impactos identificados**
El vendedor que hace un buen discovery tiene el material para construir una propuesta que el cliente siente que ha co-creado. Define la estructura de la propuesta de solution selling: la sección de diagnóstico que demuestra que has entendido el problema (usando las palabras exactas del cliente, no las tuyas), la sección de solución que conecta cada funcionalidad con un impacto de negocio concreto que el cliente identificó en el discovery, la cuantificación del valor (cuánto vale para el cliente resolver este problema) y el plan de implementación que minimiza el riesgo percibido. Explica la diferencia entre una propuesta transaccional (precio/feature) y una propuesta de valor (inversión/impacto).

**4. La gestión del comité de compra**
En ventas enterprise, rara vez hay un único decisor. Define la estrategia para mapear y gestionar el comité de compra: cómo identificar a todos los stakeholders que influyen en la decisión (el usuario final, el responsable técnico, el comprador financiero y el bloqueador interno), cómo adaptar el mensaje a cada rol, cómo gestionar la dinámica política interna del cliente y cómo asegurarte de que tu champion interno tiene el material y la confianza para defender tu propuesta en las conversaciones donde no estás.

**5. El manejo de objeciones con mentalidad consultiva**
El vendedor consultivo no combate las objeciones, las explora. Define el proceso de manejo de objeciones con mentalidad de solution selling: la técnica de clarificación (antes de responder la objeción, entender qué hay detrás), la búsqueda del acuerdo parcial (qué parte de la objeción es válida y merece reconocimiento), la reorientación hacia el impacto (conectar la respuesta con los objetivos de negocio identificados en el discovery) y el cierre de la objeción (verificar que la respuesta ha resuelto la preocupación sin presionar). Incluye los scripts para las cinco objeciones más frecuentes en tu proceso de ventas.

**6. Las métricas del solution selling**
Define los KPIs que miden si la metodología de solution selling está funcionando: el win rate en deals donde el vendedor ha completado el discovery de tres niveles vs. los que no, la duración del ciclo de ventas (un buen discovery lo acorta porque elimina la incertidumbre), el ACV de los deals cerrados con una propuesta de valor completa vs. los que se han cerrado con una propuesta de precio, el ratio de propuestas enviadas sobre reuniones de discovery realizadas y el Net Promoter Score del proceso de compra por parte de los clientes.

Termina con el script de la primera llamada de discovery: las primeras tres preguntas que harías y cómo responderías si el cliente intenta saltar directamente a ver el producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Metodología de solution selling para equipos comerciales B2B que necesitan hacer un discovery profundo antes de proponer la solución.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product demo que convence: de la feature al outcome',
                'description'       => 'Diseña el demo del producto que mueve al cliente a la siguiente etapa: la narrativa del demo, la personalización para cada comprador y el proceso de mostrar el outcome antes de mostrar el cómo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product marketing manager y sales enablement expert con especialización en la arquitectura de demostraciones de producto que cierran deals. Has diseñado y entrenado la ejecución de demos para equipos de ventas de productos SaaS complejos y sabes que la diferencia entre una demo que genera interés y una demo que avanza el deal está en si empiezas por el producto o por el problema del cliente.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto, qué problema principal resuelve y a qué tipo de comprador va dirigida la demo (usuario final, manager, directivo C-level)?
2. ¿Cuánto tiempo dura una demo típica y en qué etapa del ciclo de ventas se produce?
3. ¿Cuál es el mayor problema con las demos actuales: duran demasiado, son demasiado técnicas, no están personalizadas, no generan la siguiente acción concreta?
4. ¿Hay un equipo de pre-sales dedicado o los demos los hacen los account executives directamente?
5. ¿Cuáles son los tres casos de uso principales para los que los mejores clientes usan el producto?

Con esas respuestas, diseña el sistema completo de demos de producto:

**1. La arquitectura de la demo centrada en el outcome**
Una demo centrada en el producto muestra cómo funciona. Una demo centrada en el outcome muestra cómo cambia la vida del cliente. Define la arquitectura de la demo que empieza por el problema y termina por la transformación: la apertura que establece el problema del cliente (en sus propias palabras, usando el lenguaje del discovery), el puente hacia la solución que presenta el producto como la respuesta a ese problema específico, la demostración de las dos o tres funcionalidades que más directamente resuelven el problema identificado (no una tour completa del producto) y el cierre que muestra el estado final: cómo es el trabajo del cliente después de implementar la solución.

**2. La personalización de la demo por segmento y por rol**
Una demo genérica es una demo mediocre. Define el sistema de personalización que hace que cada demo parezca construida específicamente para ese cliente: la demo personalizada por industria (el mismo producto resuelve problemas ligeramente diferentes en retail, en manufactura y en servicios financieros), la demo personalizada por rol (el usuario final quiere ver la usabilidad, el directivo quiere ver los dashboards de impacto, el técnico quiere ver las integraciones) y el proceso de personalización rápida que permite al SE o al AE adaptar la demo estándar en menos de una hora antes de cada sesión.

**3. El storytelling en la demo: el cliente como protagonista**
Las mejores demos tienen estructura de historia. Define la narrativa de la demo: el personaje protagonista (un usuario compuesto que refleja al cliente que está viendo la demo), el problema que ese personaje enfrenta (el mismo problema que el cliente tiene), el momento de antes (cómo trabaja sin la solución, con todas las frustraciones y pérdidas de tiempo), el momento de descubrimiento (la primera vez que usa la solución y entiende que cambia algo importante) y el estado después (el nuevo mundo en el que ese problema ya no existe). Explica cómo integrar el storytelling con la navegación real del producto sin que parezca una obra de teatro.

**4. El manejo de las preguntas durante la demo**
Las preguntas durante la demo son señales de compra, no interrupciones. Define el protocolo de gestión de preguntas que mantiene el control del tiempo sin cortar el interés del cliente: cómo responder las preguntas de funcionalidad sin desviar el hilo narrativo (el aparcadero para las preguntas que se responden después), cómo convertir una pregunta técnica en un punto de profundización de valor, cómo manejar las preguntas para las que no tienes respuesta inmediata sin perder credibilidad y cómo identificar en las preguntas las señales de que el cliente ya está pensando en la implementación.

**5. El cierre de la demo con una siguiente acción concreta**
Una demo sin siguiente acción concreta es tiempo perdido. Define el cierre de demo que genera momentum: la pregunta de validación que confirma si la demo ha cumplido el objetivo ("¿hemos cubierto los casos de uso más importantes para ti?"), la pregunta de evaluación que revela el nivel de interés real del cliente ("¿dónde ves más valor en lo que hemos visto?"), la propuesta de siguiente paso específica (no "te mando información" sino "la semana que viene podemos tener una sesión técnica con tu equipo de IT para revisar los requisitos de integración") y el manejo del "nos lo pensamos" que busca el obstáculo real detrás de la respuesta genérica.

**6. El entorno de demo: ambientes y sandbox**
Una demo que se rompe en vivo destruye la confianza que tardaste cuarenta minutos en construir. Define las mejores prácticas para el entorno de demo: el ambiente de demostración separado del entorno de producción, con datos realistas que reflejan el sector del cliente, la estrategia de backup para cuando algo falla (y algo siempre falla), las herramientas de demo interactiva (Walnut, Reprise, Navattic) cuando el producto real tiene demasiadas dependencias y el proceso de mantenimiento del ambiente de demo cuando el producto está en evolución continua.

Termina con el guión de los primeros diez minutos de la demo ideal para tu producto: exactamente qué dices, qué navegas y qué preguntas haces al cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseño de demos de producto que conectan las funcionalidades con los outcomes del cliente y generan una siguiente acción concreta.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR consulting interno: cuando RRHH se convierte en asesor del negocio',
                'description'       => 'El HR business partner que hace consulting interno: el diagnóstico de los problemas organizacionales, la propuesta de solución y el proceso de implementación que hace que el director de línea vea a RRHH como un socio y no como un departamento de trámites.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un HR business partner senior y consultor organizacional con experiencia transformando la función de recursos humanos de administrativa a estratégica en empresas de entre cien y dos mil empleados. Sabes que la diferencia entre el RRHH que hace trámites y el RRHH que impacta el negocio no está en los procesos sino en la capacidad para diagnosticar problemas organizacionales y proponer soluciones que los managers de línea adoptan porque perciben el valor.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la empresa, su tamaño, sector y el momento de negocio (crecimiento, estabilidad, reestructuración)?
2. ¿Cuál es el rol actual de RRHH en la empresa: administrativo, de soporte o ya hay algo de consultoría interna?
3. ¿Cuáles son los tres principales problemas organizacionales que los directores de línea tienen actualmente y que RRHH podría ayudar a resolver?
4. ¿Cuál es la percepción actual de RRHH entre los managers: socio estratégico, proveedor de servicios, obstáculo burocrático?
5. ¿Tienes un mandato explícito del CEO para transformar la función de RRHH o necesitas construir el caso de negocio internamente?

Con esas respuestas, diseña el proceso completo de HR consulting interno:

**1. El diagnóstico organizacional como punto de partida**
Un consultor interno que propone soluciones sin diagnóstico previo pierde credibilidad. Define el proceso de diagnóstico organizacional que el HRBP realiza antes de proponer nada: las entrevistas con los directores de línea (qué preguntas hacer, cómo escuchar lo que no se dice), el análisis de datos de personas (rotación por equipo, tiempo para cubrir vacantes, resultados de la evaluación de desempeño, eNPS por departamento), las señales estructurales que indican problemas organizacionales (equipos que crecen pero no entregan, alta conflictividad, dependencia de pocas personas clave) y cómo sintetizar estos hallazgos en un diagnóstico que el director de línea reconocería como verdadero.

**2. La propuesta de solución que el manager adopta**
El manager de línea no adopta soluciones de RRHH que le parecen ajenas a su problema real. Define la estructura de la propuesta de solución interna que genera adopción: el diagnóstico que conecta el problema de negocio con la causa raíz organizacional (no "necesitamos un plan de formación" sino "el equipo de ventas tiene una tasa de abandono del 40% porque los managers de primera línea no tienen las habilidades para retener talento en sus primeros seis meses"), la solución propuesta con criterios de éxito medibles, el plan de implementación que requiere el mínimo esfuerzo del manager de línea y el proceso de seguimiento que muestra el impacto antes de que el manager lo pida.

**3. El modelo de HR business partnering por segmento**
Distintos líderes de línea necesitan distintos niveles y tipos de apoyo de RRHH. Define el modelo de HR business partnering diferenciado: el executive partnering para el C-level (foco en estrategia de talento, planificación de la organización y gestión de los líderes clave), el manager partnering para los directores de área (foco en desarrollo de sus equipos, gestión del desempeño y resolución de conflictos) y el employee partnering para los empleados de alta potencial (foco en desarrollo de carrera, proyectos de exposición y transiciones de rol). Explica cómo asignar el tiempo del HRBP entre estos tres niveles según el momento de la empresa.

**4. La venta interna de las iniciativas de RRHH**
Una iniciativa de RRHH que no consigue el buy-in del negocio no se implementa o se implementa a medias. Define el proceso de venta interna de las iniciativas de personas: cómo construir el caso de negocio de una iniciativa de RRHH en el lenguaje del negocio (retorno sobre la inversión, reducción de costes, impacto en los indicadores de negocio que el directivo ya sigue), cómo presentarlo al comité de dirección, cómo manejar las objeciones del CFO ("esto es un coste") y cómo construir los quick wins que demuestran el valor antes de que llegue el impacto a largo plazo.

**5. La gestión de los momentos difíciles**
Los momentos donde RRHH demuestra su valor como consultor interno son los momentos difíciles: la reestructuración, el conflicto entre directivos, el empleado de alto rendimiento que está a punto de irse, la investigación interna por conducta inapropiada. Define cómo gestionar cada tipo de situación difícil con mentalidad consultiva: el diagnóstico antes de la intervención, la propuesta de proceso que el directivo entiende y en la que confía, los límites entre el rol de asesor y el de ejecutor y la documentación que protege a la empresa y a los empleados.

**6. Las métricas del HR consulting interno**
El HRBP que mide su impacto en métricas de negocio tiene mucho más poder que el que mide actividades de RRHH. Define el cuadro de mandos del HR business partner: las métricas de salud organizacional (rotación voluntaria por equipo, tiempo hasta productividad de los nuevos, ratio de promociones internas vs. externas, engagement de los equipos de alto rendimiento), las métricas de impacto del consulting interno (número de iniciativas de negocio donde RRHH ha sido parte del equipo de diseño, impacto en los KPIs de negocio de las iniciativas de personas implementadas) y cómo presentar estas métricas en el informe trimestral al CEO.

Termina con el plan de los primeros noventa días de un HRBP que acaba de incorporarse a una empresa donde RRHH tiene reputación principalmente administrativa y necesita construir credibilidad como consultor interno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Transformación del rol de RRHH de administrativo a consultor interno de negocio con impacto medible en los resultados de la empresa.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Venta de servicios financieros complejos: planificación patrimonial y M&A',
                'description'       => 'Vende los servicios financieros de mayor complejidad y mayor valor: la conversación de discovery que revela los objetivos patrimoniales del cliente, la propuesta que conecta el servicio con esos objetivos y el proceso de cierre en relaciones de altísima confianza.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un banquero privado y asesor de M&A con más de quince años de experiencia en la venta de servicios financieros de alta complejidad. Has cerrado mandatos de gestión de patrimonio multimillonarios y procesos de fusiones y adquisiciones donde el ciclo de ventas duraba años y donde la confianza era el único activo que importaba. Sabes que en estos servicios no se vende, se construye la relación hasta que el cliente elige.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el servicio financiero concreto: gestión de grandes patrimonios, planificación patrimonial familiar, M&A advisory, private equity, deuda corporativa o una combinación?
2. ¿Cuál es el perfil del cliente objetivo: family office, empresario con liquidez, corporación en proceso de desinversión, empresa que busca capital?
3. ¿Cuál es el ciclo de ventas típico y en qué etapa está la relación con el cliente objetivo?
4. ¿Cuál es el diferencial de la firma en este tipo de servicio: especialización sectorial, red de relaciones, track record, estructura de fees?
5. ¿Cuál es el mayor obstáculo en el proceso de ventas actual: el acceso a los decisores, la diferenciación de la competencia o la gestión del tiempo hasta la decisión?

Con esas respuestas, diseña el proceso completo de ventas de servicios financieros complejos:

**1. El acceso a los clientes de alto patrimonio o a los decisores corporativos**
Los mejores clientes no responden a cold outreach. Define las estrategias de acceso que funcionan para este tipo de clientes: la red de intermediarios de confianza (notarios, asesores fiscales, abogados, otros banqueros de los que eres complementario), los eventos de alto valor donde la relación se construye de forma natural, la reputación construida a través de artículos de opinión en medios financieros especializados y ponencias en eventos del sector, y el proceso de warm introduction que convierte un contacto de tercer grado en una primera reunión.

**2. La primera conversación que no parece una venta**
En servicios de altísimo valor, la primera conversación donde pareces un vendedor es la última. Define la estructura de la primera conversación con un potencial cliente de alto patrimonio o con un directivo de una empresa en proceso de M&A: la agenda que invierte el ratio habitual (el cliente habla el 70% del tiempo, tú el 30%), las preguntas de escucha activa que revelan los objetivos, las preocupaciones y el contexto de la decisión sin que parezca un interrogatorio, los momentos donde compartes perspectiva o análisis propio que demuestra el nivel de expertise y cómo cerrar la primera conversación sin proponer nada todavía.

**3. El discovery de los objetivos patrimoniales o estratégicos**
Un cliente de alto patrimonio que necesita un asesor financiero o una empresa que considera una operación de M&A raramente articula sus objetivos de forma clara en la primera conversación. Define el proceso de discovery en profundidad: las conversaciones sobre la historia del patrimonio o de la empresa (cómo se construyó, qué significa para el fundador, qué quiere que pase con ello), las preguntas sobre el horizonte temporal y las restricciones (¿cuándo necesitas liquidez? ¿qué estructura fiscal tienes que respetar? ¿quién más debe estar de acuerdo?), los objetivos no financieros que con frecuencia son los más importantes (el legado, la protección de la familia, el proyecto empresarial que queda pendiente) y cómo documentar estos hallazgos de forma que la propuesta los refleje completamente.

**4. La propuesta que conecta el servicio con los objetivos del cliente**
En servicios financieros de alta complejidad, la propuesta no es un documento estándar, es un diagnóstico personalizado. Define la estructura de la propuesta de alto valor: la sección de comprensión del cliente que demuestra que has escuchado y entendido lo que importa (usando sus propias palabras), la arquitectura de solución que conecta cada elemento del servicio con un objetivo específico del cliente, la cuantificación del impacto (qué diferencia hace este servicio en los próximos diez años), las referencias de track record que son relevantes para este cliente específico y las condiciones del mandato que reflejan un equilibrio justo entre el valor entregado y la remuneración.

**5. La gestión del tiempo en relaciones de largo plazo**
En estos servicios, la decisión puede tardar meses o años. Define la estrategia de mantenimiento de la relación durante el período de maduración: la cadencia de contacto que mantiene la presencia sin presionar (qué enviar, cuándo y a través de qué canal), los momentos de valor que generas para el cliente antes de que decida contratarte (un análisis de mercado, una introducción útil, una perspectiva sobre un evento relevante para su sector), el proceso de actualización de la propuesta cuando cambian las circunstancias del cliente y cómo manejar la situación cuando el cliente está evaluando a la competencia.

**6. El cierre en relaciones de altísima confianza**
En servicios de alto valor, el cierre no es una técnica, es el resultado natural de un proceso de construcción de confianza. Define cómo reconocer las señales de que el cliente está listo para decidir, cómo facilitar la decisión final sin presionar (las preguntas que revelan si hay algún obstáculo pendiente de resolver), cómo manejar la negociación de las condiciones del mandato desde una posición de valor y cómo gestionar el proceso de formalización de la relación de una forma que refuerce la confianza en lugar de erosionarla.

Termina con el protocolo de las primeras cuatro semanas de un mandato recién firmado: las acciones concretas que demuestran al cliente que tomó la decisión correcta antes de ver los primeros resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Proceso completo de ventas para servicios financieros de alta complejidad, desde el acceso al cliente hasta el cierre del mandato.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Venta de servicios jurídicos complejos: el pitch del despacho',
                'description'       => 'Presenta los servicios del despacho de forma que el cliente entiende el valor y confía en la capacidad para resolver su problema: la propuesta personalizada, la presentación del equipo y el diferencial que hace que el cliente elija tu despacho sobre el de la competencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un socio de un despacho de abogados con experiencia en desarrollo de negocio jurídico en mercados competitivos. Has ganado mandatos complejos contra despachos más grandes y más conocidos porque sabes que el cliente legal no compra horas de abogado, compra confianza en la capacidad para resolver un problema específico con el máximo valor y el mínimo riesgo. Y sabes que el pitch que gana no es el más completo, es el más relevante.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la especialidad del despacho, el tipo de mandatos que busca y el perfil del cliente objetivo?
2. ¿Cuál es el proceso de pitch típico: RFP formal, presentación competitiva, propuesta directa o una combinación según el tipo de cliente?
3. ¿Cuáles son los diferenciadores reales del despacho que los clientes reconocerían como ventajas sobre la competencia?
4. ¿Cuál es el mayor obstáculo en el proceso de pitch actual: la diferenciación, el precio, la presentación del equipo o el seguimiento?
5. ¿Tienes alguna referencia de un pitch que hayas ganado recientemente y qué crees que fue determinante para el resultado?

Con esas respuestas, diseña el proceso completo de pitch de servicios jurídicos:

**1. La preparación del pitch: investigar antes de presentar**
El despacho que llega a un pitch sin haber investigado a fondo al cliente pierde antes de empezar. Define el proceso de investigación pre-pitch: el análisis del cliente (su negocio, su situación legal y regulatoria, sus competidores, sus transacciones recientes, los litigios públicos en los que ha estado involucrado), el análisis del problema o mandato (qué está en juego, cuál es la presión temporal, qué resultado necesita el cliente y cuál necesita evitar), los decisores del pitch (quién evalúa, qué criterios de selección aplican, qué despachos compiten y cuáles son sus puntos fuertes y débiles) y cómo usar toda esta información para personalizar cada elemento del pitch.

**2. La propuesta escrita que el cliente lee completa**
La mayoría de las propuestas de servicios jurídicos tienen el mismo problema: están escritas desde la perspectiva del despacho, no del cliente. Define la estructura de la propuesta que invierte esta lógica: la sección de comprensión del problema (que demuestra que has escuchado y que entiendes el caso mejor que ningún otro despacho), el análisis de los riesgos jurídicos y las opciones estratégicas disponibles (que aporta valor antes del mandato), el plan de trabajo propuesto con el equipo asignado y los hitos clave, la propuesta de honorarios con la justificación del valor y las alternativas de estructura de fees. Explica cómo encontrar el equilibrio entre la profundidad técnica que demuestra expertise y la legibilidad para el cliente no especialista.

**3. La presentación del equipo: más allá del CV**
El cliente no contrata al despacho, contrata al equipo. Define la presentación del equipo que transmite confianza: la selección de los socios y asociados que van a trabajar realmente en el mandato (no los más seniors que luego no aparecen), la narrativa de cada persona que conecta su experiencia con el problema específico del cliente, la dinámica del equipo que demuestras en la propia sala de presentación (cómo os complementáis, quién lidera cada parte del trabajo) y la propuesta de accesibilidad (cómo puede el cliente contactar a quién del equipo en cada tipo de situación).

**4. La presentación oral que genera confianza**
Una hora de presentación oral ante el cliente es la oportunidad de demostrar lo que no puede demostrar ningún documento. Define la estructura de la presentación oral: la apertura que demuestra que has estudiado el problema del cliente (no el que empiezas presentando el despacho), los tres o cuatro mensajes clave que quieres que el cliente se lleve cuando salga de la sala, el equilibrio entre la presentación y el diálogo (los mejores pitches de servicios profesionales son conversaciones estructuradas, no monólogos), el manejo de las preguntas difíciles del cliente (sobre el precio, sobre la experiencia específica, sobre el conflicto de intereses) y el cierre que propone el siguiente paso.

**5. El precio y la estructura de honorarios en el contexto competitivo**
El precio es siempre una conversación, nunca una tabla. Define la estrategia de pricing y presentación de honorarios que maximiza el win rate sin sacrificar rentabilidad: cuándo es mejor proponer tarifa por hora vs. tarifa fija vs. success fee (y cuándo la combinación es la respuesta), cómo presentar el precio como inversión y no como coste, cómo manejar la petición de descuento sin hacer concesiones que erosionen el margen o la percepción de valor, y cómo usar la comparación con el coste del problema no resuelto para contextualizar la propuesta de honorarios.

**6. El seguimiento del pitch**
El pitch no termina con la presentación. Define el proceso de seguimiento que mantiene la ventaja competitiva hasta la decisión: el email de agradecimiento que aporta algo concreto (no solo "gracias por la reunión"), el envío del material adicional que se prometió en el pitch antes del plazo comprometido, la gestión de la sala de espera durante el período de evaluación (cómo mantenerse presente sin resultar invasivo), el manejo de la solicitud de reducción de precio y el proceso de feedback cuando el pitch no resulta ganador para incorporarlo al siguiente.

Termina con el checklist de las cuarenta y ocho horas antes de un pitch importante: las acciones de preparación que no puedes saltarte aunque el tiempo sea ajustado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Proceso completo de pitch y desarrollo de negocio para despachos de abogados, desde la preparación hasta el seguimiento post-presentación.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Consultative success: el CSM que actúa como consultor de negocio',
                'description'       => 'El customer success manager que hace consulting para sus clientes: el diagnóstico de los retos del cliente, la recomendación personalizada del uso del producto y la relación de confianza que hace que el cliente comparta sus problemas antes de que se conviertan en crisis.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer success con experiencia transformando equipos de CSMs de gestores de cuentas reactivos a consultores de negocio que sus clientes buscan de forma proactiva. Sabes que la diferencia entre el CSM que gestiona tickets y el CSM que retiene y expande clientes está en si el cliente percibe que el CSM entiende su negocio o solo su uso del producto.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto SaaS, a qué tipo de cliente está dirigido y cuál es el modelo de customer success (high-touch, mid-touch, low-touch)?
2. ¿Cuál es el churn actual y en qué momento del ciclo de vida se produce con más frecuencia?
3. ¿Cuál es la ratio de cuentas por CSM y cuánto tiempo dedica el CSM a cada cuenta al mes?
4. ¿Cuál es el perfil de los CSMs del equipo: provienen de ventas, de soporte, de consultoría o una mezcla?
5. ¿Cuál es el objetivo de negocio más urgente para el equipo de CS: reducir el churn, aumentar el NRR o mejorar el NPS?

Con esas respuestas, diseña el modelo completo de consultive customer success:

**1. El diagnóstico del negocio del cliente como base de la relación**
El CSM que no entiende el negocio del cliente no puede hacer recomendaciones con impacto. Define el proceso de diagnóstico del negocio del cliente que el CSM realiza en los primeros noventa días de la relación: el research previo a cada QBR (los resultados financieros del cliente, sus noticias recientes, sus iniciativas estratégicas declaradas), las preguntas de discovery que revelan los KPIs más importantes del cliente y cómo el producto contribuye a ellos, el mapa de stakeholders internos del cliente y sus diferentes objetivos y el proceso de actualización periódica del diagnóstico cuando el negocio del cliente evoluciona.

**2. La recomendación proactiva como diferencial del CSM consultivo**
El CSM reactivo responde preguntas. El CSM consultivo llega a la reunión con una recomendación. Define el proceso de generación de recomendaciones proactivas: el análisis de los datos de uso del producto para identificar oportunidades de adopción no aprovechadas, el benchmarking del uso del cliente vs. los clientes más exitosos con un perfil similar, la detección de señales de riesgo en los patrones de uso que permiten una intervención antes de que el cliente lo perciba como un problema y la comunicación de la recomendación de forma que el cliente la recibe como asesoramiento, no como cross-sell.

**3. El QBR (Quarterly Business Review) que el cliente espera con interés**
Un QBR genérico que repasa métricas que el cliente ya tiene es una reunión que nadie espera. Define la estructura del QBR consultivo que el cliente pone en la agenda con anterioridad: la sección de revisión del progreso hacia los objetivos de negocio del cliente (no solo el uso del producto), la sección de diagnóstico conjunto de los obstáculos que están impidiendo un mayor impacto, la recomendación de las tres acciones prioritarias para el siguiente trimestre, la discusión del roadmap del producto y cómo se alinea con los objetivos del cliente y la conversación sobre la evolución de la relación (nuevos casos de uso, expansión, cambios en el equipo del cliente).

**4. La detección temprana del churn con mentalidad consultiva**
El CSM consultivo detecta el riesgo de churn meses antes de que el cliente plantee la cancelación. Define el sistema de detección temprana de riesgo que combina datos cuantitativos y cualitativos: los indicadores de uso que predicen el churn (frecuencia de login, número de usuarios activos, volumen de transacciones, uso de funcionalidades clave), las señales relacionales que el CSM detecta en las conversaciones (el cliente menciona que va a haber un cambio de liderazgo, que están revisando su stack tecnológico, que han reducido el presupuesto) y el proceso de intervención temprana que aborda el riesgo antes de que se convierta en una conversación de cancelación.

**5. La expansión de cuenta desde una posición consultiva**
La expansión que surge de una conversación consultiva es más fácil de cerrar que la que surge de una conversación de ventas. Define el proceso de identificación y desarrollo de oportunidades de expansión desde el rol de CSM: cuándo el discovery del negocio del cliente revela un caso de uso adicional que el producto puede resolver, cómo presentar la oportunidad de expansión como una recomendación de asesor y no como una propuesta de ventas, la colaboración con el equipo de account management o ventas para cerrar la expansión sin que el cliente sienta que lo han pasado de un departamento a otro y las métricas de expansión que el CSM es responsable de generar (NRR, número de oportunidades de expansión identificadas, ratio de conversión).

**6. El desarrollo del equipo de CSMs como consultores**
Transformar un equipo de gestores de cuentas en consultores de negocio requiere un programa de desarrollo específico. Define el plan de capacitación del equipo de CS: el curriculum de negocio que los CSMs necesitan (entender los P&Ls de los clientes, leer indicadores financieros básicos, entender las dinámicas del sector de cada cliente), las habilidades de facilitation y consulting (cómo hacer discovery, cómo presentar recomendaciones, cómo manejar conversaciones difíciles), el sistema de mentoring y revisión de QBRs que acelera el desarrollo y las métricas que miden si la transformación está ocurriendo (NRR, CSAT de los QBRs, churn en las cuentas de cada CSM).

Termina con el plan de la primera semana de un nuevo CSM con una cartera heredada de un colega que se fue: qué leer, qué mirar en los datos, qué conversaciones tener y cuál es el objetivo al final de esa semana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Transformación del rol de CSM de gestor de cuentas reactivo a consultor de negocio que retiene y expande la base de clientes.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Venta consultiva para freelancers: entender antes de proponer',
                'description'       => 'El freelance que no cotiza hasta entender el problema real: el proceso de discovery, la propuesta que refleja lo que el cliente ha dicho y el cierre de proyectos bien definidos que son rentables para ambas partes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de ventas especializado en profesionales independientes. Has acompañado a centenares de freelancers a pasar de mandar presupuestos sin entender el problema a cerrar proyectos bien definidos a tarifas más altas con clientes que los recomiendan porque la experiencia de trabajar con ellos empieza desde la primera conversación. Sabes que el freelance que hace las preguntas correctas antes de mandar el presupuesto proyecta más expertise que el que manda el presupuesto en veinticuatro horas.

Antes de proponer nada, necesito entender tu situación:

1. ¿Cuál es tu especialidad como freelance y qué tipo de proyectos cierras habitualmente?
2. ¿Cuál es tu proceso de ventas actual: cómo recibes los contactos, qué haces en la primera conversación y cuánto tiempo pasa hasta que mandas el presupuesto?
3. ¿Cuáles son los problemas más frecuentes en los proyectos que acabas cerrando: scope creep, clientes que cambian de opinión, falta de información al inicio?
4. ¿Cuál es tu mayor dificultad en el proceso de ventas: calificar a los clientes correctos, definir el alcance, defender el precio o cerrar cuando el cliente dice "lo pienso"?
5. ¿Cuál es el tipo de cliente ideal con el que más disfrutas trabajar y qué tienen en común los proyectos que más te han gustado?

Con esas respuestas, diseña el proceso completo de venta consultiva para freelance:

**1. La calificación del cliente antes de invertir tiempo**
No todos los contactos merecen una reunión de discovery. Define el proceso de calificación en dos etapas: la calificación inicial por email o formulario (las tres preguntas que antes de hablar con alguien te dicen si merece una reunión: el presupuesto aproximado, el plazo y si tienen claro qué necesitan o están buscando orientación) y la calificación en la primera conversación (las señales que indican si el cliente tiene el problema que tú resuelves, si está en el momento correcto para empezar y si la relación de trabajo va a ser productiva). Explica qué hacer cuando el cliente no califica: cómo declinarlo de forma que deja la puerta abierta para el futuro y a veces genera una referencia.

**2. El proceso de discovery que define el proyecto antes de presupuestarlo**
Un proyecto mal definido es el origen del 80% de los problemas de los freelancers. Define la sesión de discovery que te da toda la información que necesitas para hacer una propuesta precisa: las preguntas que revelan el problema real detrás de la solicitud (el cliente que pide "una web nueva" a veces necesita que alguien le diga que el problema no es la web sino la falta de tráfico), las preguntas que definen el alcance (qué está incluido, qué no está incluido, quién entrega qué y cuándo), las preguntas que revelan los criterios de éxito del cliente (cómo va a saber que el proyecto ha funcionado), las restricciones que hay que conocer antes de proponer (presupuesto, plazo, personas involucradas, decisiones ya tomadas) y las señales que indican que el cliente no está listo para empezar un proyecto todavía.

**3. La propuesta que refleja lo que el cliente ha dicho**
La propuesta que gana no es la más detallada ni la más barata, es la que el cliente lee y dice "esto es exactamente lo que necesito". Define la estructura de la propuesta de freelance basada en el discovery: la sección de comprensión del problema que usa las palabras del cliente (no las tuyas), la propuesta de solución que conecta cada entregable con un objetivo del cliente identificado en el discovery, el plan de trabajo con los hitos que dan al cliente visibilidad sin microgestionar, la propuesta de precio con la justificación del valor y la cláusula de alcance que protege a ambas partes si el proyecto evoluciona. Explica por qué mandar la propuesta por escrito siempre es mejor que hablar del precio por teléfono.

**4. La defensa del precio desde una posición de valor**
El freelance que baja el precio ante la primera objeción entrena al cliente a pedir descuento en todos los proyectos futuros. Define el proceso de defensa del precio que no erosiona la relación: la pregunta que revela qué hay detrás del "es caro" (el presupuesto real es menor, están comparando con alternativas más baratas, no entienden el valor), las respuestas que reencuadran el precio como inversión en función de los objetivos del cliente identificados en el discovery, las concesiones que puedes hacer sin bajar el precio (cambiar el alcance, cambiar el plazo, cambiar las condiciones de pago) y cuándo es mejor dejar ir a un cliente que no puede o no quiere pagar lo que el trabajo vale.

**5. El cierre del proyecto bien definido**
El freelance que cierra proyectos bien definidos trabaja con más tranquilidad y entrega mejores resultados. Define el proceso de cierre que establece las bases de una relación de trabajo productiva: el contrato o los términos de servicio que protegen a ambas partes (los elementos mínimos que deben estar por escrito aunque sea en un email), el proceso de onboarding del cliente (qué información necesitas antes de empezar, cómo vais a comunicaros, quién toma qué decisiones), la gestión de las expectativas sobre el proceso (cuánto tiempo tardas en responder emails, cómo gestionas las revisiones, qué pasa si el cliente necesita cambios fuera del alcance) y el primer entregable que demuestra que la elección del cliente fue correcta.

**6. El seguimiento post-proyecto que genera referidos**
El proyecto que termina bien es el comienzo de la siguiente oportunidad. Define el proceso de cierre del proyecto que maximiza las posibilidades de que el cliente vuelva y recomiende: la sesión de cierre donde revisáis juntos si se han alcanzado los objetivos del proyecto (usando los criterios de éxito definidos en el discovery), el proceso de solicitud del testimonio o la reseña cuando el cliente está en el momento de mayor satisfacción, la estrategia de seguimiento a los seis meses (un email con algo útil que demuestra que sigues pensando en su negocio) y el sistema de referidos que hace que los buenos clientes te recomienden de forma proactiva.

Termina con el guión de la primera llamada de discovery con un cliente que ha llegado a través de una referencia y quiere "algo de diseño" o "algo de marketing" sin tener claro qué exactamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Proceso de venta consultiva para freelancers que define el proyecto correctamente antes de presupuestar y cierra proyectos rentables para ambas partes.',
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
