<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills238Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Content strategy para SaaS: el flywheel de contenido',
                'description'       => 'Construye el motor de contenido que genera leads de forma compuesta: la estrategia de topics clusters, la distribución y la reutilización del contenido que convierte cada pieza en múltiples formatos para múltiples canales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un content strategist especializado en SaaS con más de diez años de experiencia construyendo motores de contenido que generan leads de forma compuesta y sostenible. Has trabajado con empresas en fases desde Series A hasta cotización, y sabes exactamente cómo pasar de publicar artículos sin estrategia a construir un flywheel que se retroalimenta solo.

Antes de proponer nada, pregúntame lo siguiente para entender bien el contexto:

1. ¿Cuál es el producto SaaS, a qué segmento de cliente te diriges y cuál es el ACV aproximado?
2. ¿Tienes ya contenido publicado o partes desde cero? ¿Cuánto tráfico orgánico recibes actualmente?
3. ¿Cuál es el equipo de contenido disponible (escritores, diseñadores, SEO, distribución)?
4. ¿Cuáles son los tres principales canales de adquisición actuales y qué papel juega el contenido en cada uno?
5. ¿Cuál es el objetivo de negocio al que debe contribuir la estrategia de contenido: más MQLs, reducción del CAC, expansión a nuevo segmento o aceleración del ciclo de ventas?

Con esas respuestas, elabora la estrategia completa:

**1. El modelo de flywheel de contenido para SaaS**
Explica por qué el contenido SaaS bien ejecutado es compuesto y no lineal: cada pieza que rankea atrae tráfico, el tráfico genera leads, los leads se convierten en clientes que aportan casos de uso y testimonios, que se convierten en más contenido. Diseña el flywheel específico para este producto, identificando los puntos de entrada del ciclo (SEO, social, email, comunidad) y los puntos de aceleración donde el sistema se retroalimenta.

**2. La arquitectura de topics clusters**
Define la estrategia de pillar pages y clusters temáticos que construye autoridad topical en los temas más relevantes para el ICP. Para cada cluster propón: el pillar page principal (la guía definitiva sobre el tema), los artículos de soporte (casos de uso específicos, comparativas, guías de herramientas), el contenido de fondo de funnel (plantillas, calculadoras, estudios de caso) y la interconexión que transfiere autoridad entre piezas. Incluye cómo priorizar los clusters según el volumen de búsqueda, la dificultad de posicionamiento y la relevancia para el ICP.

**3. La estrategia de distribución multicanal**
El mejor contenido sin distribución no existe. Define el plan de distribución para cada pieza publicada: el proceso de promoción en LinkedIn (diferente para fundador, para equipo de ventas y para cuentas de empresa), la newsletter que convierte suscriptores en usuarios, la sindicación en publicaciones del sector, la distribución en comunidades relevantes (Slack, Reddit, Discord) y el proceso de outreach a creadores de contenido del sector para amplificación.

**4. La reutilización sistemática del contenido**
Define el sistema que convierte cada pieza de contenido largo en múltiples formatos: el artículo de blog que se convierte en hilo de LinkedIn, en episodio de podcast, en vídeo corto para redes, en newsletter y en deck para el equipo de ventas. Describe el proceso de producción que hace esto escalable sin duplicar el trabajo del equipo y los formatos que funcionan mejor para audiencias SaaS B2B.

**5. El contenido de fondo de funnel que convierte**
El contenido de awareness trae tráfico; el de fondo de funnel genera pipeline. Define los formatos que funcionan mejor para convertir lectores en leads cualificados: las plantillas y frameworks descargables, las calculadoras de ROI, los estudios de caso con métricas concretas, los webinars de demostración de caso de uso y las comparativas de herramientas. Para cada formato explica cómo integrarlo en el ciclo de ventas para que el equipo comercial lo use en cada etapa.

**6. Métricas del flywheel de contenido**
Define los KPIs que miden el contenido como motor de negocio y no como canal de vanidad: tráfico orgánico cualificado (sesiones de ICP, no sesiones totales), MQLs generados por contenido, tasa de cierre de leads de contenido vs. otros canales, tiempo medio hasta conversión y coste por lead orgánico. Incluye el cuadro de mandos mensual y las revisiones trimestrales de la estrategia.

Termina con el plan de los primeros 90 días: las acciones prioritarias para construir el flywheel desde cero o para acelerar uno que ya existe pero no está generando resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construcción de un motor de contenido compuesto para SaaS que genera MQLs de forma orgánica y escalable.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Developer content: tutoriales, documentación y blog técnico',
                'description'       => 'Crea el contenido técnico que la comunidad de developers encuentra, comparte y referencia: los tutoriales paso a paso, los artículos de análisis técnico y la documentación que convierte usuarios en fans antes de que toquen el código.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un developer relations engineer y technical writer con experiencia creando contenido técnico que la comunidad de desarrolladores encuentra, comparte y referencia durante años. Sabes que el mejor contenido técnico no es el más exhaustivo, sino el que resuelve el problema exacto en el momento exacto con la mínima fricción.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto o tecnología sobre la que vas a crear contenido (API, framework, librería, plataforma, lenguaje)?
2. ¿A qué nivel de experiencia está dirigido el contenido: beginners, desarrolladores mid-level, seniors o arquitectos?
3. ¿Cuál es el objetivo del contenido: adopción del producto, posicionamiento como experto, construcción de comunidad o captación de candidatos?
4. ¿Tienes ya contenido publicado? ¿Cuáles son los formatos que mejor han funcionado?
5. ¿Cuánto tiempo dedica el equipo técnico a crear contenido y quién lo hace (ingenieros, DevRel dedicado, escritores técnicos)?

Con esas respuestas, diseña la estrategia completa de developer content:

**1. Los tutoriales que la comunidad comparte**
Un tutorial técnico que se comparte no es el que explica todos los casos posibles, es el que lleva al developer del punto A al punto B de la forma más directa y con los errores más comunes ya anticipados. Define la estructura del tutorial perfecto para tu audiencia: el problema concreto que resuelve desde la primera línea, la configuración inicial que no asume nada, los bloques de código que se pueden copiar y pegar directamente, los puntos de comprobación intermedios y el resultado final demostrable. Incluye cómo gestionar los errores más comunes como parte del tutorial, no como un apéndice que nadie lee.

**2. La documentación como producto**
La documentación no es un manual de usuario, es el primer producto que prueba un developer antes de usar el real. Define la arquitectura de documentación que convierte el primer contacto en adopción: la guía de inicio rápido que funciona en menos de cinco minutos, la referencia de API que los desarrolladores bookmarkean, las guías de casos de uso que muestran cómo resolver problemas reales y los ejemplos de código que se pueden ejecutar directamente desde la documentación. Explica cómo mantener la documentación actualizada cuando el producto evoluciona sin que se convierta en una carga para el equipo de ingeniería.

**3. El blog técnico que posiciona**
Un artículo técnico que posiciona no es un tutorial, es una demostración de pensamiento. Define los formatos de artículo que construyen reputación técnica: el análisis comparativo de dos aproximaciones con sus trade-offs reales, el post mortem de un incidente que muestra cómo el equipo aprende de los errores, el deep dive en una decisión de arquitectura y el artículo de opinión sobre el estado del arte en un área técnica. Para cada formato explica cómo estructurarlo para que sea encontrable por búsqueda, compartible en redes y referenciable en conversaciones técnicas.

**4. El contenido de código: repositorios, snippets y ejemplos**
El código es contenido. Define la estrategia de contenido basada en código: los repositorios de ejemplos que demuestran casos de uso reales, los proyectos de inicio que los developers usan como punto de partida, los snippets en plataformas como GitHub Gist o CodeSandbox y los proyectos open source que construyen comunidad alrededor del producto. Explica cómo hacer que este contenido sea descubrible y cómo mantenerlo actualizado con las versiones del producto.

**5. La distribución del contenido técnico**
El contenido técnico tiene sus propios canales de distribución. Define el proceso de amplificación: la publicación en Hacker News (cuándo publicar, cómo titular, cómo responder comentarios), el proceso en Reddit en los subreddits técnicos relevantes, la presencia en newsletters técnicas del sector, la publicación en Medium o Dev.to como canal de distribución secundario y el uso de Twitter/X para llegar a developers influyentes. Incluye cómo usar el contenido técnico para el recruiting y el employer branding.

**6. Métricas del developer content**
Define los KPIs que miden si el contenido técnico funciona más allá de las visitas: el número de proyectos de GitHub que usan el producto después de leer el tutorial, las menciones en conversaciones técnicas de Stack Overflow y Reddit, los registros en la plataforma atribuidos al contenido, la tasa de activación de los developers que llegan por contenido vs. otros canales y el Net Promoter Score de la documentación. Incluye cómo recoger feedback de la comunidad para mejorar el contenido de forma continua.

Termina con el calendario de los primeros tres meses de contenido técnico con los títulos concretos de las piezas prioritarias y la justificación de por qué cada una en ese orden.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategia de contenido técnico para developers que combina tutoriales, documentación y blog para construir comunidad y generar adopción.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Case studies de diseño que consiguen trabajo',
                'description'       => 'Escribe los case studies que los clientes potenciales leen antes de contactarte: la estructura, el nivel de detalle sobre el proceso y el balance entre mostrar el resultado y mostrar el pensamiento que diferencia un case study mediocre de uno que convence.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director creativo y consultor de portfolios de diseño con experiencia evaluando cientos de case studies de diseñadores UX, de producto, de marca e ilustradores. Sabes exactamente qué hace que un cliente potencial lea un case study completo y qué hace que lo cierre en diez segundos. Y sabes que el error más común es mostrar el resultado antes de mostrar el pensamiento.

Antes de ayudarte, necesito entender tu situación:

1. ¿Qué tipo de diseñador eres: UX/UI, producto, marca e identidad, gráfico, motion, ilustración u otro?
2. ¿A qué tipo de cliente te diriges: startups, empresas medianas, agencias, clientes corporativos o una mezcla?
3. ¿Cuántos case studies tienes actualmente y cuál es el mayor problema que encuentras en ellos?
4. ¿Qué proyecto concreto quieres documentar ahora mismo y cuál fue el desafío central de ese proyecto?
5. ¿Cuál es el formato de tu portfolio: web propia, Behance, Dribbble, PDF o una combinación?

Con esas respuestas, construye el framework completo para tus case studies:

**1. La estructura del case study que los clientes terminan de leer**
Un case study efectivo no es una presentación de resultados, es la narrativa de un problema resuelto. Define la estructura que mantiene al lector enganchado de principio a fin: el contexto que sitúa el reto (no más de tres párrafos), la definición del problema que demuestra que entiendes a fondo lo que necesitaba resolverse, el proceso que muestra cómo piensas (no todo lo que hiciste, sino las decisiones clave), las iteraciones que demuestran que el proceso es real (incluyendo lo que no funcionó y por qué), el resultado final con métricas cuando existen y el aprendizaje que te llevas de este proyecto. Explica qué elementos son imprescindibles y cuáles son opcionales según el tipo de proyecto.

**2. El balance entre proceso y resultado**
El error más común en portfolios de diseño es mostrar solo el resultado final, como si hubiera salido perfecto a la primera. Los clientes que contratan bien saben que el proceso importa más que el resultado. Define cuánto espacio dedicar al proceso vs. al resultado según el tipo de trabajo (discovery, exploración, iteración, pruebas con usuarios, entrega final) y cómo documentar el proceso durante el proyecto para no tener que reconstruirlo de memoria al escribir el case study.

**3. Cómo escribir sobre el proceso sin aburrir**
El proceso bien narrado es la parte más valiosa del case study y la más difícil de escribir sin que parezca un informe de proyecto. Define la técnica para hacer el proceso interesante: las decisiones difíciles que tomaste y por qué, las alternativas que descartaste y la razón, las conversaciones con el cliente que cambiaron la dirección del proyecto, los momentos de insight que desbloquearon la solución. El objetivo es que el lector entienda cómo piensas bajo presión, no que vea cada pantalla que entregaste.

**4. Las métricas y el impacto: cómo hablar de resultados cuando no tienes datos**
Los mejores case studies incluyen métricas de impacto, pero muchos proyectos de diseño no tienen datos disponibles. Define cómo hablar de impacto sin inventarse métricas: los indicadores cualitativos que sí puedes documentar (feedback del cliente, cambios de comportamiento de usuarios, decisiones de negocio que se tomaron basadas en el diseño), cómo solicitar datos al cliente cuando el proyecto está terminado y cómo contextualizar el impacto incluso sin cifras exactas.

**5. El tono y la voz del case study**
Un case study de diseño bien escrito no suena como un informe ni como una campaña de marketing. Suena como un diseñador reflexivo que piensa en voz alta. Define el tono adecuado para tu audiencia objetivo: cuánta jerga técnica incluir, cómo hablar de las limitaciones del proyecto sin parecer que te estás excusando, cómo mostrar humildad sin restar autoridad y cómo escribir en primera persona sin que el case study parezca un ejercicio de ego.

**6. La presentación visual del case study**
El contenido importa, pero la presentación visual de un case study de diseño también dice mucho sobre ti. Define los principios de diseño del propio case study: la jerarquía tipográfica que hace el texto fácil de escanear, el uso de imágenes que ilustran el proceso (no solo el resultado), los zoom-ins que muestran el detalle y los before/after que demuestran la evolución. Incluye también cómo adaptar el mismo case study a distintos formatos: la versión completa para el portfolio web, el resumen de una página para enviar a un cliente y la versión visual para Behance o Instagram.

Termina con la plantilla de briefing que usarías al inicio de un proyecto para capturar toda la información que vas a necesitar para escribir el case study cuando el proyecto termine.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Framework para crear case studies de diseño que demuestran el proceso de pensamiento y consiguen nuevos proyectos.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales content: materiales que aceleran el ciclo de ventas',
                'description'       => 'Crea el contenido que el equipo de ventas usa para avanzar oportunidades: los one-pagers, las comparativas de competidores y los testimonios estructurados que responden las objeciones más frecuentes antes de que el cliente las plantee.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de sales enablement con experiencia creando y optimizando materiales de ventas para equipos de entre cinco y cincuenta comerciales en empresas B2B. Has visto de primera mano qué materiales realmente usan los vendedores en sus conversaciones y qué materiales se crean, se suben a un repositorio y no los lee nadie. Sabes que el mejor sales content no es el más bonito, es el que responde la objeción exacta en el momento exacto del ciclo de ventas.

Antes de proponer nada, pregúntame:

1. ¿Cuál es el producto o servicio que vende el equipo y a qué perfil de cliente (tamaño de empresa, sector, rol del decisor)?
2. ¿Cuál es la duración media del ciclo de ventas y cuántas etapas tiene el proceso comercial?
3. ¿Cuáles son las tres objeciones más frecuentes que el equipo encuentra durante el proceso de venta?
4. ¿Qué materiales de ventas existen actualmente y cuál es el feedback del equipo sobre su utilidad real?
5. ¿Quién crea los materiales actualmente: marketing, el propio equipo de ventas o una combinación?

Con esas respuestas, diseña el sistema completo de sales content:

**1. El mapa de contenidos por etapa del ciclo de ventas**
Cada etapa del ciclo de ventas necesita un contenido diferente. Define el mapa de materiales que cubre todo el proceso: el contenido de awareness que el prospecto encuentra antes del primer contacto, el material de calificación que el vendedor envía tras la primera conversación, el contenido de consideración que el comprador comparte internamente con su equipo, el material de decisión que justifica la inversión ante el comité de compra y el contenido de cierre que elimina los últimos obstáculos. Para cada etapa explica el objetivo del material, el formato ideal y quién debe crearlo.

**2. El one-pager que el cliente comparte internamente**
En ventas B2B complejas, el vendedor no llega a todas las conversaciones internas del cliente. El one-pager es el representante del vendedor en esas conversaciones. Define la estructura del one-pager perfecto: el problema que resuelve en el lenguaje del cliente (no del vendedor), la solución en tres puntos máximo, la prueba de que funciona (métrica concreta de un cliente similar), la diferencia competitiva que importa a este tipo de comprador y el siguiente paso concreto. Incluye las diferencias entre el one-pager para el usuario final, para el responsable técnico y para el directivo financiero.

**3. La battle card de competidores que el equipo usa de verdad**
Las comparativas de competidores son los materiales más pedidos y los peor ejecutados. Define la estructura de la battle card que el equipo usa en conversaciones reales: cuándo aparece cada competidor en el proceso de venta, cuáles son los argumentos reales del competidor (no los que tú les atribuyes), cuáles son las fortalezas honestas del competidor (ignorarlas te hace perder credibilidad), cuáles son tus ventajas diferenciales en el contexto de cada objeción y cuál es el reencuadre que hace que la comparación cambie de terreno. Explica también cómo mantener las battle cards actualizadas cuando el competidor lanza nuevas funcionalidades.

**4. El testimonio y el caso de éxito que aceleran el cierre**
Un testimonio genérico no vale nada. Un caso de éxito que describe exactamente el problema del prospecto actual es el cierre más poderoso que existe. Define el proceso para recopilar, estructurar y activar casos de éxito: las preguntas que hacer al cliente satisfecho para capturar el antes/durante/después, la estructura del caso que el prospecto puede leer en dos minutos, cómo indexar los casos por industria, tamaño de empresa y tipo de problema para que el vendedor encuentre el caso correcto en treinta segundos y cómo solicitar la aprobación del cliente para usar su nombre.

**5. El email y los mensajes de seguimiento que no parecen plantillas**
Los equipos de ventas usan plantillas de email porque ahorran tiempo, pero los prospectos las detectan inmediatamente. Define la biblioteca de mensajes de seguimiento que parecen personales pero son escalables: la estructura que deja espacio para la personalización real (una referencia a algo concreto de la última conversación), el asunto que tiene una tasa de apertura alta en tu audiencia objetivo, el cuerpo del mensaje que aporta valor antes de pedir algo y el call to action que genera una respuesta sin presionar. Incluye variantes para los distintos momentos del ciclo: el follow-up tras la demo, el reactivador de un deal dormido y el mensaje de cierre de trimestre que no parece desesperado.

**6. El sistema de gestión y actualización de sales content**
El sales content que nadie encuentra es peor que no tenerlo. Define el sistema de organización, distribución y mantenimiento de los materiales: la estructura de repositorio que el equipo usa realmente (no la que diseñaste tú), el proceso de incorporación de nuevos vendedores que incluye los materiales desde el primer día, la cadencia de revisión y actualización y el mecanismo de feedback para saber qué materiales funcionan y cuáles hay que retirar o mejorar.

Termina con la lista priorizada de los cinco materiales que crearías primero si empezaras desde cero, y la justificación de por qué en ese orden.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema de sales content que equipa al equipo comercial con los materiales correctos para cada etapa del ciclo de ventas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product content: changelog, release notes y comunicación de features',
                'description'       => 'Comunica el producto de forma que los usuarios entienden el valor de cada nueva funcionalidad: el changelog que la gente lee, las release notes que generan adopción y los anuncios de producto que crean expectación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product marketer especializado en comunicación de producto con experiencia en empresas SaaS que han pasado de lanzar features en silencio a convertir cada release en una oportunidad de activar usuarios, reducir churn y generar expansión. Sabes que la mayoría de changelogs no los lee nadie no porque los usuarios no les interese el producto, sino porque están escritos para los ingenieros que construyeron la feature, no para los usuarios que tienen que adoptarla.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto, a qué tipo de usuario está dirigido y cuál es el plan de precios más común?
2. ¿Con qué frecuencia lanzáis features o actualizaciones: varias veces al día, semanal, quincenal, mensual?
3. ¿Cuál es el canal principal de comunicación de producto con los usuarios actualmente: email, in-app, changelog público, redes sociales o una combinación?
4. ¿Cuál es la tasa de adopción de nuevas features y cuánto tiempo pasa desde que se lanza una feature hasta que la mayoría de usuarios activos la usan?
5. ¿Tienes un equipo de product marketing o la comunicación de producto la hace el equipo de producto directamente?

Con esas respuestas, diseña el sistema completo de comunicación de producto:

**1. El changelog que los usuarios leen por voluntad propia**
Un changelog bien escrito no es una lista de lo que se ha construido, es una lista de problemas que ya no tienes. Define la estructura del changelog que genera engagement: el título que describe el beneficio (no la feature), la descripción de dos a tres frases que explica el antes y el después sin jerga técnica, el visual que muestra la feature en el contexto de uso real, el link a la documentación para quien quiere profundizar y la nota de contexto que explica por qué se ha priorizado esto ahora. Incluye cómo estructurar el changelog por categorías (mejoras, correcciones, nuevas funcionalidades) sin que parezca una lista de bugs.

**2. Las release notes que generan adopción**
Hay una diferencia entre informar de que algo existe y conseguir que la gente lo use. Define el proceso de comunicación de una feature nueva que maximiza la adopción: el anuncio in-app en el momento en que el usuario está en el contexto correcto para usar la feature, el email de anuncio que llega al usuario que más se beneficia de ella, el tutorial corto que elimina la fricción de los primeros cinco minutos, el webinar de adopción para features complejas y el caso de uso que muestra cómo un usuario concreto resuelve un problema concreto con la nueva funcionalidad. Explica cómo segmentar la comunicación para que cada usuario reciba solo lo que es relevante para su caso de uso.

**3. Los anuncios de producto que crean expectación**
Los mejores anuncios de producto no informan de que algo está disponible, crean un momento. Define cómo construir expectación antes de un lanzamiento de feature importante: la comunicación de que algo viene (sin spoilear todo), el acceso anticipado para los usuarios más activos que convierte en embajadores, el anuncio principal que cuenta la historia detrás de la feature (el problema que nos llevó a construirla, cuánto tiempo llevamos trabajando en ello, qué retroalimentación de usuarios la hizo posible) y la ola de contenido de adopción en los días siguientes.

**4. La comunicación de producto para el equipo de ventas y CS**
Las nuevas features son también una herramienta de ventas y de retención. Define cómo comunicar internamente cada release para que el equipo comercial y de customer success pueda usar la nueva funcionalidad en sus conversaciones: el briefing interno que explica qué problema resuelve, a qué segmento de cliente beneficia más, qué objeciones resuelve y qué oportunidades de upsell abre. Incluye las talking points para las conversaciones con clientes y los materiales de habilitación que el equipo necesita.

**5. El contenido de producto en redes sociales y comunidad**
Las features bien comunicadas en redes generan no solo awareness sino señales de que el producto está vivo y evoluciona. Define la estrategia de contenido de producto en LinkedIn, Twitter/X y en la comunidad de usuarios: los formatos que funcionan (demos en vídeo corto, before/after, hilos de contexto), la frecuencia que mantiene la presencia sin saturar y cómo involucrar a los usuarios más activos en la comunicación de las features que ellos mismos pidieron.

**6. La medición del impacto de la comunicación de producto**
Define cómo medir si la comunicación de producto funciona: la tasa de adopción de cada feature a los siete, treinta y noventa días del lanzamiento, la correlación entre recibir el anuncio de una feature y el uso de esa feature, el impacto en el churn de los usuarios que adoptan las features nuevas vs. los que no y el NPS de los usuarios que declaran estar al día de las novedades del producto vs. los que dicen que se enteran tarde o nunca. Incluye cómo usar estos datos para mejorar la estrategia de comunicación.

Termina con la plantilla de briefing de lanzamiento de feature que el equipo de producto debe completar antes de cada release para que el equipo de comunicación pueda hacer su trabajo sin perseguir información.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema de comunicación de producto que convierte cada release en una oportunidad de adopción, retención y expansión.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR content: atraer talento con contenido',
                'description'       => 'El contenido de RRHH que los candidatos encuentran antes de aplicar: los artículos sobre cultura, los vídeos del equipo y el contenido que muestra la realidad de trabajar en la empresa y filtra a los candidatos que van a encajar de los que no.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de employer branding y talent marketing con experiencia construyendo estrategias de contenido para empresas que compiten por el mismo talento que las grandes tecnológicas sin poder igualar sus salarios. Sabes que el candidato decide si quiere trabajar en una empresa mucho antes de enviar su CV, y que el contenido es la única forma de influir en esa decisión antes de que el proceso de selección empiece.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la empresa, su tamaño, sector y etapa (startup, scale-up, empresa establecida)?
2. ¿Cuáles son los perfiles que más cuesta contratar actualmente y por qué?
3. ¿Qué canales de comunicación tiene la empresa actualmente (LinkedIn corporativo, blog, Instagram, Glassdoor, página de careers)?
4. ¿Qué hace única la propuesta de valor al empleado (EVP) de esta empresa? ¿En qué se diferencia de trabajar en otra empresa del sector?
5. ¿Tienes recursos internos para producción de contenido (personas, presupuesto para vídeo, herramientas) o necesitas una estrategia de bajo coste?

Con esas respuestas, diseña la estrategia completa de HR content:

**1. La propuesta de valor al empleado como base del contenido**
Todo el contenido de employer branding debe comunicar una EVP clara y diferencial. Define la EVP de la empresa en términos concretos: no "somos una familia" sino qué significa exactamente trabajar aquí en el día a día, qué oportunidades de aprendizaje y crecimiento existen, cuál es el nivel de autonomía real, cómo se toman las decisiones, qué tipo de retos intelectuales tiene el trabajo y cuáles son las condiciones que no se ven en la oferta de empleo pero que importan. La EVP debe resonar con el candidato ideal y filtrar activamente a los que no encajarían en la cultura.

**2. El contenido que muestra la cultura sin parecer propaganda**
El contenido de cultura que parece un anuncio de recursos humanos no funciona. Los candidatos tienen un detector de autenticidad muy fino. Define los formatos de contenido que muestran la cultura real: el día en la vida de un empleado (escrito por el propio empleado, no por RRHH), el proceso de onboarding documentado honestamente, las decisiones difíciles que ha tomado la empresa y cómo las comunicó al equipo, los fracasos que se han celebrado como aprendizajes y los rituales de equipo que reflejan los valores reales de la empresa. Incluye cómo conseguir que los propios empleados produzcan contenido auténtico sin que se sienta obligatorio.

**3. El contenido técnico y de rol que filtra candidatos**
El mejor contenido de employer branding no solo atrae candidatos, también los filtra antes de que lleguen al proceso de selección. Define el contenido técnico que comunica el nivel de exigencia y el tipo de trabajo: los artículos de ingeniería que muestran cómo se resuelven los problemas técnicos, los vídeos donde el equipo de diseño explica su proceso, los posts del equipo de producto que muestran cómo se toman las decisiones de hoja de ruta. Este contenido no solo atrae a los mejores candidatos de ese perfil, sino que los candidatos que no encajan se autodescartan antes de aplicar.

**4. La estrategia de distribución del HR content**
El mejor contenido de employer branding no se encuentra si no se distribuye. Define el plan de distribución específico para el talento objetivo: la estrategia en LinkedIn (perfil de empresa vs. perfiles personales de empleados y founders), la presencia en Glassdoor (cómo gestionar las reseñas, cómo responder a las críticas, cómo solicitar nuevas valoraciones), el uso de comunidades técnicas o profesionales del sector y el employee advocacy program que convierte a los empleados en amplificadores del contenido de la empresa.

**5. El contenido del proceso de selección**
El proceso de selección es también una oportunidad de contenido. Define cómo comunicar el proceso de selección de forma que los candidatos se preparen mejor y la empresa proyecte una imagen de organización seria: la descripción del proceso en la página de careers (número de entrevistas, formatos, tiempos de respuesta esperados), los recursos de preparación para los candidatos que muestran que la empresa se preocupa por su éxito en el proceso y el contenido post-oferta que reduce el porcentaje de ofertas rechazadas comunicando lo que el candidato puede esperar en sus primeros noventa días.

**6. Métricas del HR content y el employer brand**
Define cómo medir el impacto del contenido en los resultados de contratación: el número de candidaturas espontáneas antes y después de la estrategia de contenido, el porcentaje de candidatos que mencionan haber leído el blog o seguido el LinkedIn de la empresa antes de aplicar, el tiempo hasta la cobertura de vacantes y el coste por contratación en perfiles donde el contenido es el canal principal. Incluye también las métricas de employer brand como el eNPS, la tasa de retención a doce meses y el Glassdoor rating.

Termina con el plan de los primeros sesenta días de HR content: las piezas concretas que crearías primero, quién las crearía y en qué canales las distribuirías.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Estrategia de employer branding basada en contenido que atrae y filtra candidatos antes de que empiece el proceso de selección.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial content marketing: generar confianza con contenido educativo',
                'description'       => 'El contenido financiero que genera confianza antes de la conversación de ventas: los informes de mercado, el análisis sectorial y el contenido educativo que posiciona al profesional de finanzas como el experto al que el cliente quiere contratar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de marketing de una firma de servicios financieros con experiencia construyendo programas de content marketing que han transformado la forma en que los clientes encuentran, evalúan y eligen a sus asesores financieros. Sabes que en el sector financiero la confianza es el activo más escaso y el contenido educativo es la única forma de construirla antes de la primera conversación.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el tipo de servicio financiero (gestión de patrimonios, banca corporativa, M&A advisory, contabilidad, auditoría, seguros o fintech) y a qué tipo de cliente te diriges?
2. ¿Cuál es el ciclo de ventas típico y cuántas interacciones hay antes de que un cliente firme?
3. ¿Tienes ya una estrategia de contenido en marcha o partes desde cero? ¿Cuáles son los canales actuales?
4. ¿Hay restricciones regulatorias sobre el contenido que publicas (MiFID II, CNMV, SEC, CFA Institute guidelines)?
5. ¿Quién produce el contenido actualmente: los propios asesores o analistas, un equipo de marketing, redactores externos?

Con esas respuestas, diseña la estrategia completa de financial content marketing:

**1. El contenido que construye autoridad financiera**
En servicios financieros, la autoridad se demuestra con análisis, no con afirmaciones. Define los formatos de contenido que proyectan expertise genuino: los informes de mercado con perspectiva propia (no una compilación de lo que dicen otros), el análisis sectorial que llega a conclusiones que el cliente no podría sacar por sí mismo, el comentario de coyuntura económica que traduce la macroeconomía a implicaciones concretas para el tipo de cliente al que te diriges y el artículo de opinión que toma una posición clara sobre un tema controvertido del mercado. Explica cómo cada formato contribuye a la percepción de autoridad y cómo evitar el contenido genérico que no diferencia.

**2. El contenido educativo que filtra clientes por sofisticación**
El mejor cliente financiero es el que entiende lo suficiente para apreciar la complejidad del servicio y delegar en el experto. Define el programa de contenido educativo que educa al cliente ideal sin simplificar en exceso: la serie de artículos que explica los conceptos fundamentales para entender la propuesta de valor del servicio, la guía de preguntas que un inversor o directivo financiero debería hacer antes de contratar, el contenido que desmonta los mitos más comunes del sector y el glosario que da al cliente el vocabulario para tener conversaciones de calidad.

**3. La estrategia de distribución en el sector financiero**
El contenido financiero tiene sus propios canales de distribución. Define dónde publicar y cómo: la newsletter propia como canal de relación directa con clientes y prospectos, la presencia en LinkedIn como plataforma principal para el sector financiero B2B, la publicación en medios financieros especializados como canal de credibilidad, la presencia en eventos y asociaciones del sector que amplifican el contenido y el uso del contenido en el proceso de ventas como herramienta de educación del cliente potencial.

**4. El content marketing para gestión de momentos de mercado**
Los mercados financieros generan momentos de atención que son oportunidades de contenido. Define el protocolo de comunicación en momentos de volatilidad de mercado, cambios regulatorios importantes o eventos macroeconómicos relevantes: cómo reaccionar con rapidez sin comprometer la calidad del análisis, qué tipo de contenido publicar en cada tipo de momento (comentario inmediato, análisis en profundidad, implicaciones para el cliente), cómo usar estos momentos para reforzar la relación con clientes actuales y captar la atención de prospectos que buscan orientación.

**5. El cumplimiento regulatorio en el content marketing financiero**
El contenido financiero está sujeto a restricciones regulatorias que limitan lo que se puede decir y cómo. Define el proceso de revisión y aprobación del contenido que garantiza el cumplimiento sin paralizar la producción: los disclaimers necesarios y cómo integrarlos sin que destruyan la legibilidad, los temas que requieren aprobación legal antes de publicar, las diferencias entre contenido informativo y contenido que podría interpretarse como recomendación de inversión y cómo documentar el proceso para las auditorías regulatorias.

**6. Métricas del financial content marketing**
Define cómo medir el retorno del content marketing en servicios financieros, donde el ciclo de ventas es largo y la atribución es difícil: las métricas de alcance (suscriptores de newsletter, seguidores cualificados en LinkedIn, lectores de informes), las métricas de engagement (tasa de apertura, tiempo de lectura, descarga de informes), las métricas de pipeline (prospectos que mencionan haber leído el contenido antes de contactar, reuniones generadas por contenido, AUM o fees generados por canal de contenido) y las métricas de reputación (menciones en medios, invitaciones a hablar en eventos, referencias de clientes que atribuyen al contenido).

Termina con el plan editorial del primer trimestre: los temas concretos, los formatos, los canales de distribución y las fechas de publicación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategia de content marketing para servicios financieros que genera confianza y posiciona al profesional como el experto de referencia.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal content marketing: el blog jurídico que genera mandatos',
                'description'       => 'El contenido jurídico que los clientes potenciales encuentran cuando tienen un problema: los artículos que responden las preguntas que los clientes buscan en Google y que posicionan al despacho como la primera opción cuando necesitan asesoramiento legal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing jurídico especializado en estrategias de content marketing para despachos de abogados. Has ayudado a despachos desde boutiques especializadas hasta firmas de tamaño medio a pasar de depender exclusivamente del boca a boca a generar mandatos de forma sistemática a través del contenido. Sabes que el cliente jurídico busca en Google cuando tiene un problema y que el despacho que responde esa pregunta de forma clara y útil es el que recibe la llamada.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la especialidad del despacho y qué tipo de cliente objetivo: particular, pyme, empresa mediana o gran empresa?
2. ¿Cuál es la situación actual del marketing del despacho: solo boca a boca, algo de presencia digital o ya hay una estrategia en marcha?
3. ¿Qué recursos tiene el despacho para crear contenido: los propios abogados, un marketing manager, un redactor externo?
4. ¿Cuáles son las tres preguntas más frecuentes que los clientes hacen antes de contratar y durante el proceso?
5. ¿Cuál es el área geográfica de actuación del despacho y en qué idioma o idiomas opera?

Con esas respuestas, diseña la estrategia completa de legal content marketing:

**1. La estrategia SEO para el sector jurídico**
El cliente jurídico busca cuando tiene un problema concreto. Define la estrategia de contenido orientada a las búsquedas de los clientes potenciales: las keywords de intención de contratación (no solo las de información general), la diferencia entre las búsquedas de particulares y de empresas para la misma área legal, cómo identificar los temas que tienen búsqueda suficiente y competencia manejable para un despacho sin departamento de SEO dedicado y cómo estructurar la arquitectura de contenidos del blog para construir autoridad topical en la especialidad del despacho.

**2. El artículo jurídico que genera confianza y llamadas**
Un artículo jurídico que genera mandatos no es un tratado doctrinal ni un artículo de opinión para otros abogados. Es una respuesta clara al problema concreto que el cliente está buscando resolver. Define la estructura del artículo jurídico que convierte lectores en clientes: el título que refleja exactamente la búsqueda del cliente (no el término técnico jurídico), la introducción que demuestra que entiendes el problema antes de empezar a explicar la solución, el contenido que responde la pregunta de forma completa pero sin convertirse en sustituto del asesoramiento (cómo dar valor sin regalar el mandato), las señales de autoridad (referencias a jurisprudencia, legislación vigente, casos análogos) y el llamamiento a la acción que facilita el siguiente paso.

**3. El contenido que educa sin reemplazar al abogado**
El mayor miedo del abogado ante el content marketing es que el cliente lo lea y no necesite contratarle. Define la estrategia de contenido que educa al cliente lo suficiente para que entienda la complejidad del problema y la necesidad del asesoramiento profesional: los artículos que explican los riesgos de actuar sin abogado, los que describen el proceso legal para que el cliente sepa qué esperar, los que explican cómo funciona el sistema jurídico en términos que el no especialista entiende y los que demuestran que el problema del cliente tiene más aristas de las que él ve desde fuera.

**4. Los formatos de contenido jurídico que funcionan**
Más allá del artículo de blog, el sector jurídico tiene formatos de contenido específicos que funcionan especialmente bien. Define cuándo y cómo usar: las guías prácticas descargables (el paso a paso para el proceso de divorcio, la checklist para la compraventa de una empresa, el glosario de términos del contrato), los vídeos de respuesta a preguntas frecuentes que generan confianza por la presencia directa del abogado, los boletines de novedades legislativas para clientes existentes que generan retención y las alertas de cambios normativos que posicionan al despacho como servicio de inteligencia jurídica.

**5. La distribución del contenido jurídico**
El contenido jurídico tiene sus propios canales de distribución con sus propias reglas. Define la estrategia multicanal para el sector legal: el SEO como canal principal de adquisición de nuevos clientes, LinkedIn como canal de posicionamiento para servicios a empresas, el email marketing para la comunicación con clientes existentes y prospectos ya identificados, las redes de referencias entre profesionales (notarios, asesores fiscales, bancos) que amplifican el contenido entre sus propios clientes y la presencia en medios jurídicos especializados para el posicionamiento entre pares.

**6. Las restricciones deontológicas del marketing jurídico**
El marketing jurídico está sujeto a las normas deontológicas del Colegio de Abogados que limitan lo que se puede decir y cómo. Define el marco de cumplimiento deontológico para el contenido: la prohibición de publicidad engañosa o comparativa, las limitaciones en la garantía de resultados, las restricciones sobre el uso de testimonios de clientes en algunos colegios, la obligación de identificar correctamente al abogado autor del contenido y cómo navegar estas restricciones sin que paralicen la estrategia de contenido.

Termina con el calendario editorial del primer trimestre: los temas concretos ordenados por prioridad de búsqueda, el formato de cada pieza y la estimación del tiempo de redacción por artículo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Estrategia de content marketing para despachos jurídicos que genera mandatos a través del posicionamiento en búsquedas de clientes con problemas legales.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer education content: el contenido que enseña a usar el producto',
                'description'       => 'El programa de customer education que reduce el tiempo hasta el valor y el churn: los tutoriales en vídeo, los webinars de adopción y la base de conocimiento que convierte a los usuarios más activos en expertos del producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer education con experiencia construyendo programas de formación de usuarios que han reducido el tiempo hasta el primer valor, aumentado la activación y disminuido el churn en productos SaaS y plataformas digitales. Sabes que la mayoría de los usuarios abandona un producto no porque no les guste sino porque no saben usarlo lo suficientemente bien como para obtener el valor que justifica la renovación.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto, a qué tipo de usuario está dirigido y cuál es la complejidad de la curva de aprendizaje?
2. ¿Cuál es el mayor punto de abandono en el onboarding y cuánto tiempo tarda el usuario medio en alcanzar el primer momento de valor?
3. ¿Qué recursos de formación existen actualmente (base de conocimiento, tutoriales, webinars, soporte)?
4. ¿Cuál es el churn actual y en qué momento del ciclo de vida se produce con más frecuencia?
5. ¿Tienes un equipo de customer education dedicado o la formación de usuarios la hace el equipo de CS?

Con esas respuestas, diseña el programa completo de customer education:

**1. La arquitectura del programa de customer education**
Un programa de customer education no es una colección de tutoriales. Es un sistema de aprendizaje que lleva al usuario desde el primer login hasta la maestría del producto siguiendo el camino de menor resistencia. Define la arquitectura del programa: el learning path del usuario nuevo (los primeros siete días), la formación para el usuario que quiere profundizar en funcionalidades avanzadas, los recursos para el administrador o power user que gestiona el producto para toda la organización y el programa de certificación para los usuarios que quieren acreditar su nivel de expertise.

**2. Los tutoriales en vídeo que la gente termina de ver**
La mayoría de los tutoriales de producto son demasiado largos, demasiado genéricos o demasiado aburridos. Define la estructura del tutorial en vídeo que mantiene la atención hasta el final: la duración máxima para cada tipo de tutorial (guía rápida vs. walkthrough completo), la estructura narrativa que empieza por el resultado que el usuario va a lograr, el ritmo que alterna explicación con demostración en pantalla, los momentos de comprobación que confirman que el usuario va siguiendo el hilo y el final que propone el siguiente paso concreto. Incluye el proceso de producción que permite crear tutoriales de calidad sin estudios de grabación caros.

**3. La base de conocimiento que los usuarios encuentran solos**
Una buena base de conocimiento reduce el volumen de tickets de soporte y acelera la resolución de problemas. Define la arquitectura y la escritura de la base de conocimiento que funciona: la estructura de navegación que refleja cómo el usuario piensa (no cómo está organizado el producto internamente), los artículos que responden la pregunta exacta que el usuario tiene en el momento exacto en que la tiene, el proceso de identificación de los artículos que generan más tickets de soporte porque no existen o no son claros y el sistema de mantenimiento que mantiene el contenido actualizado cuando el producto cambia.

**4. Los webinars de adopción que generan engagement**
Los webinars de producto son una oportunidad de hablar directamente con los usuarios en el contexto de su uso del producto. Define el programa de webinars de adopción: la frecuencia y el formato (onboarding grupal semanal, sesiones de funcionalidades avanzadas mensuales, office hours de preguntas y respuestas), cómo diseñar la agenda que equilibra demostración y práctica en vivo, la estrategia de captación de asistentes entre los usuarios que más se beneficiarían, el proceso de conversión del webinar en contenido grabado y los indicadores que miden el impacto del webinar en la adopción y el churn.

**5. El programa de certificación y los power users**
Los usuarios que alcanzan un alto nivel de dominio del producto son el activo más valioso de la comunidad. Define el programa de certificación que incentiva la profundización: los niveles de certificación (usuario, avanzado, experto, administrador), el curriculum de cada nivel con los objetivos de aprendizaje concretos, el formato de evaluación (proyecto práctico, examen teórico, combinación), los beneficios de la certificación (badge, reconocimiento en la comunidad, acceso anticipado a features, descuentos) y cómo usar a los usuarios certificados como embajadores en el proceso de incorporación de nuevos clientes.

**6. Métricas del customer education**
Define cómo medir el impacto del programa de customer education en los resultados de negocio: el tiempo hasta el primer momento de valor antes y después del programa, la tasa de activación de los usuarios que completan el onboarding estructurado vs. los que lo omiten, la correlación entre el uso de los recursos de formación y el churn a noventa días, el porcentaje de tickets de soporte que se resuelven con un link a la base de conocimiento y el NPS de los usuarios certificados vs. los no certificados.

Termina con el plan de implementación en fases: qué construir primero, con qué recursos y con qué métricas de éxito para cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseño de un programa de customer education que reduce el tiempo hasta el valor, mejora la activación y disminuye el churn.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Content marketing del freelance: el contenido que atrae proyectos',
                'description'       => 'El freelance que genera proyectos con contenido: la estrategia de contenido que demuestra expertise, atrae a los clientes correctos y hace que el portfolio hable antes de que el cliente haga la primera pregunta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing para profesionales independientes con experiencia ayudando a freelancers a pasar de buscar proyectos activamente a recibirlos de forma pasiva gracias al contenido que publican. Sabes que el freelance que publica contenido de calidad consistentemente durante doce meses rara vez necesita hacer outreach frío, y que el mayor obstáculo no es saber qué publicar sino construir el sistema que hace que publicar sea sostenible a largo plazo.

Antes de proponer nada, necesito entender tu situación:

1. ¿Cuál es tu especialidad como freelance y a qué tipo de cliente te diriges (sector, tamaño de empresa, rol del decisor)?
2. ¿Cuál es tu situación actual de clientes: sin clientes fijos, clientes recurrentes pero quieres más, o cartera llena pero quieres subir tarifas?
3. ¿Tienes ya alguna presencia de contenido (LinkedIn, blog, newsletter, redes) o empiezas desde cero?
4. ¿Cuánto tiempo puedes dedicar al contenido a la semana de forma realista y sostenible?
5. ¿Cuál es el proyecto del que estás más orgulloso y que mejor representa el tipo de trabajo que quieres atraer?

Con esas respuestas, diseña la estrategia completa de content marketing para freelance:

**1. El posicionamiento de contenido que diferencia**
El freelance genérico compite por precio. El freelance con un punto de vista diferencial compite por valor. Define el posicionamiento de contenido que te diferencia en tu área de especialidad: el ángulo único desde el que ves tu disciplina, la intersección de expertise que pocas personas tienen, el tipo de cliente o de problema que otros especialistas evitan y tú resuelves especialmente bien, o la metodología propia que has desarrollado trabajando en proyectos reales. El posicionamiento de contenido no es quién eres, es qué piensas sobre lo que haces.

**2. Los formatos de contenido que funcionan para atraer proyectos**
No todo el contenido genera proyectos. Define los formatos que demuestran expertise de forma que los clientes potenciales entienden que necesitan trabajar contigo: el caso de estudio que describe un problema parecido al del cliente potencial y cómo lo resolviste, el framework o metodología que publicas gratuitamente y que muestra cómo piensas, el análisis crítico de algo que se hace mal en la industria y la forma correcta de hacerlo, el proceso de trabajo detrás del resultado final que muestra el valor del expertise más allá del entregable. Para cada formato explica por qué atrae a clientes y no solo a seguidores.

**3. La cadencia de publicación que es sostenible**
El mayor enemigo del content marketing freelance es el burnout de contenido: publicar mucho las primeras semanas y desaparecer cuando llega un proyecto grande. Define la cadencia de publicación que puedes mantener durante doce meses aunque estés en un proyecto intensivo: la frecuencia mínima que mantiene la presencia sin convertir el contenido en otra fuente de estrés, el sistema de batching que te permite producir varias semanas de contenido en una sola sesión, el proceso de reutilización que convierte un buen artículo en cinco piezas de contenido más cortas y la estrategia de evergreen que hace que el contenido antiguo siga atrayendo clientes.

**4. El canal principal y la estrategia de expansión**
El freelance que está en todos los canales a medias no está en ninguno. Define el canal principal donde construir la presencia de contenido (LinkedIn para B2B, newsletter para relación directa, blog para SEO, Twitter/X para comunidades técnicas) y cómo elegirlo en función de dónde están los clientes que quieres atraer. Una vez establecido el canal principal, define la estrategia de expansión a un segundo canal que distribuye el contenido del primero sin duplicar el trabajo de producción.

**5. El contenido que justifica subir tarifas**
El contenido bien posicionado no solo atrae más proyectos, también permite cobrar más por el mismo trabajo. Define cómo usar el contenido para reposicionarte en el mercado como un especialista de referencia y no como un proveedor más: los indicadores de reputación que construyes con el contenido (menciones, invitaciones a hablar, solicitudes de colaboración de otros profesionales del sector), cómo comunicar la subida de tarifas a clientes existentes referenciando el crecimiento de tu perfil público y cómo el contenido filtra activamente a los clientes que quieren el precio más bajo y atrae a los que valoran la especialización.

**6. El sistema de conversión de contenido a proyectos**
El contenido que no genera contactos es entretenimiento. Define el sistema de conversión que convierte lectores en clientes potenciales: el llamamiento a la acción integrado en el contenido que no parece una venta, el mecanismo de captura de email que convierte seguidores en contactos directos, el proceso de seguimiento cuando alguien interactúa con el contenido de una forma que sugiere interés en contratar y la propuesta de valor de la primera conversación que cierra la brecha entre el contenido gratuito y el proyecto de pago.

Termina con el plan de contenido de las primeras doce semanas: los temas concretos, los formatos, el canal de publicación y la estimación del tiempo de producción por pieza.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Estrategia de content marketing para freelancers que genera proyectos de forma pasiva demostrando expertise y posicionando la especialidad.',
                'vote_score'        => 43,
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
