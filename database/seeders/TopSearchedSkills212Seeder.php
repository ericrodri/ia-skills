<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills212Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Brand storytelling: la marca que cuenta una historia',
                'description'       => 'Construye el narrative de marca que conecta emocionalmente: el origen, los valores y los personajes de la historia de marca que diferencian a las empresas que se recuerdan de las que solo se conocen.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en branding estratégico y narrativa de marca. Necesito que me ayudes a construir el brand storytelling de mi empresa o producto: la historia que conecta emocionalmente con los clientes y diferencia la marca en un mercado donde los argumentos racionales ya no son suficientes.

Mi contexto:
- Nombre de la empresa o marca: [nombre]
- Tipo de producto o servicio: [describe brevemente qué ofreces]
- Público objetivo principal: [perfil del cliente ideal]
- Historia real de origen de la empresa: [cómo nació, por qué existe, quién la fundó y qué problema quería resolver]
- Valores que guían la empresa: [lista los dos o tres valores más auténticos, no los que suenan bien sino los que de verdad guían las decisiones]
- Mayor reto de diferenciación actual: [en qué se parece la marca a los competidores y qué hace que sea difícil distinguirla]

Con ese contexto, dame:

1. ANATOMÍA DEL BRAND STORY
Explícame la estructura de un brand story que funciona: el héroe de la historia (que no es la marca sino el cliente), el problema o desafío que enfrenta, la transformación que la marca habilita y el mundo mejor al que el cliente llega gracias a la marca. Aplica esta estructura a mi caso y dame un primer borrador de los cuatro elementos de mi brand story.

2. LA HISTORIA DE ORIGEN AUTÉNTICA
¿Cómo convierto la historia real de origen de mi empresa en un relato que conecte emocionalmente con los clientes? Dame el proceso para identificar el momento fundacional genuino, el conflicto o frustración que motivó la creación de la empresa y la visión de futuro que animó a los fundadores. Incluye cuáles son los elementos de una historia de origen que generan credibilidad y cuáles suelen ser artificiales y contraproducentes.

3. LOS ARQUETIPOS DE MARCA
Explícame el framework de los arquetipos de marca de Carl Jung aplicado al branding: los doce arquetipos principales (el Héroe, el Sabio, el Rebelde, el Explorador, el Cuidador, el Mago, etc.) y cómo cada uno define un tono narrativo distinto. ¿Qué arquetipo o combinación de arquetipos encaja mejor con los valores y el posicionamiento que me has descrito? Justifica la elección y dame ejemplos de marcas que usan ese arquetipo con éxito.

4. PERSONAJES Y VOZ DE MARCA
¿Cómo traduzco el arquetipo de marca en una voz narrativa consistente? Dame el perfil de la voz de marca: el tono (formal/informal, serio/desenfadado, experto/accesible), el vocabulario que usa y el que evita, cómo habla la marca en las redes sociales frente a cómo habla en la web corporativa y un ejemplo de cómo la misma idea se expresaría con la voz de mi marca y con la voz de una marca genérica del sector.

5. LOS PILARES NARRATIVOS DE LA MARCA
¿Cuáles son los tres o cuatro mensajes narrativos centrales que deben aparecer de forma consistente en toda la comunicación de la marca? Dame el proceso para identificar los pilares narrativos: cómo conectar los valores de la empresa con los deseos y miedos del cliente ideal y cómo formular cada pilar de forma que sea memorable, diferenciador y verdadero. Para cada pilar dame el mensaje central, el territorio emocional que ocupa y un ejemplo de contenido que lo expresa.

6. APLICACIÓN DEL STORYTELLING EN LOS CANALES
¿Cómo aplico el brand storytelling en los distintos canales y formatos de comunicación? Dame la guía de adaptación del narrative de marca para: la página de inicio de la web (sobre nosotros y la propuesta de valor), las redes sociales (el tipo de contenido que refuerza el story), las campañas de email marketing, las presentaciones comerciales y las entrevistas en medios. Incluye qué elementos del story deben aparecer en todos los canales y cuáles son específicos de cada formato.

7. ERRORES DE BRAND STORYTELLING MÁS COMUNES
Lista los seis errores más frecuentes en el brand storytelling de empresas pequeñas y medianas: la historia centrada en la marca en lugar de en el cliente, los valores vacíos que no se traducen en comportamientos reales, la historia de origen fabricada que cualquier cliente puede detectar, la inconsistencia de tono entre canales, el storytelling que no se diferencia en nada del de los competidores y la historia que cambia con cada campaña en lugar de construirse de forma acumulativa. Para cada error dame la solución concreta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir el narrative de marca que conecta emocionalmente con los clientes y diferencia la empresa en su mercado.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technical blogging y content marketing para developers',
                'description'       => 'Escribe contenido técnico que construye autoridad y atrae usuarios: los formatos que funcionan, el proceso de escritura que combina rigor técnico con accesibilidad y el impacto en el growth del producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en developer marketing y content strategy para productos técnicos. Necesito que me ayudes a construir una estrategia de contenido técnico que posicione a mi empresa o a mí como referente en el sector y atraiga a desarrolladores como usuarios o clientes.

Mi contexto:
- Tipo de producto o empresa: [API, SaaS técnico, herramienta open source, consultoría técnica, etc.]
- Público objetivo: [el perfil de developer al que quieres llegar: frontend, backend, DevOps, data engineer, etc.]
- Nivel técnico del equipo capaz de crear contenido: [senior engineers, PMs técnicos, developer advocates, etc.]
- Canales actuales de contenido: [blog propio, Medium, Dev.to, newsletter, YouTube, etc.]
- Objetivo principal del contenido: [awareness de producto, captación de usuarios, posicionamiento de autoridad, SEO técnico, etc.]
- Mayor dificultad con el contenido técnico actual: [falta de tiempo, contenido demasiado árido, sin distribución, bajo tráfico, etc.]

Con ese contexto, dame:

1. ESTRATEGIA DE CONTENIDO TÉCNICO: LOS FORMATOS QUE FUNCIONAN
¿Qué formatos de contenido técnico funcionan mejor para construir autoridad y atraer developers? Dame el análisis de los formatos más efectivos: los tutoriales paso a paso que resuelven un problema específico, los posts de arquitectura y decisiones técnicas, los comparativos de herramientas, las postmortems de incidentes, los deep dives de performance y los posts de opinión con posición clara. Para cada formato indica el objetivo que cumple, el esfuerzo de producción y los canales de distribución más adecuados.

2. EL PROCESO DE ESCRITURA DEL CONTENIDO TÉCNICO
¿Cómo escribo contenido técnico que sea riguroso pero accesible para el público objetivo? Dame el proceso de escritura paso a paso: cómo elegir el ángulo del tema que tiene más posibilidades de resonar, cómo estructurar el post (el gancho inicial, la promesa, el desarrollo, el código de ejemplo funcional y el cierre accionable), cómo equilibrar la profundidad técnica con la legibilidad y cómo revisar el borrador para eliminar los errores más comunes del contenido técnico.

3. SEO TÉCNICO PARA DESARROLLADORES
¿Cómo optimizo el contenido técnico para que aparezca cuando los developers buscan soluciones a los problemas que mi contenido resuelve? Dame la estrategia de keyword research para contenido técnico: las herramientas, los tipos de intención de búsqueda de los developers (cómo hacer X, error Y, comparativa entre A y B), la estructura del post optimizada para los fragmentos destacados de Google y cómo hacer que el código en los posts sea indexable y bien presentado.

4. DISTRIBUCIÓN Y AMPLIFICACIÓN DEL CONTENIDO TÉCNICO
Una vez publicado el post, ¿cómo lo distribuyo para que llegue al mayor número de developers posible? Dame la estrategia de distribución multicanal para contenido técnico: los subreddits relevantes (con las reglas de cada uno), Hacker News (cuándo y cómo postear), las comunidades de Discord y Slack del sector, Dev.to y Hashnode como canales de sindicación, la newsletter como canal de distribución propio y cómo hacer que los propios developers del equipo amplifiquen el contenido de forma orgánica.

5. CONTENIDO TÉCNICO QUE IMPACTA EN EL PRODUCT GROWTH
¿Cómo diseño una estrategia de contenido técnico que no solo construya autoridad sino que contribuya directamente al crecimiento del producto? Dame el framework de content-led growth para productos técnicos: cómo identificar los términos de búsqueda que tienen alta intención de adopción del producto, cómo crear contenido que introduce naturalmente la solución del producto en el momento en que el developer tiene el problema, cómo medir el impacto del contenido en el funnel de activación y cómo construir una biblioteca de contenido que actúe como canal de adquisición escalable.

6. CALENDARIO EDITORIAL Y SISTEMA DE PRODUCCIÓN
¿Cómo construyo un sistema de producción de contenido técnico sostenible con un equipo pequeño? Dame el diseño del calendario editorial: la frecuencia de publicación recomendada para construir audiencia sin quemar al equipo, el proceso de ideación de temas (cómo capturar ideas de los tickets de soporte, las preguntas de la comunidad y los debates internos), el flujo de revisión técnica antes de publicar y cómo reutilizar un post largo en múltiples formatos más pequeños para maximizar el retorno del tiempo invertido.

7. MÉTRICAS DEL CONTENIDO TÉCNICO
¿Qué métricas debo monitorizar para saber si la estrategia de contenido técnico está funcionando? Dame el dashboard de métricas del technical content: las métricas de tráfico orgánico por post, la tasa de conversión del lector al sign-up del producto, el tiempo en página como indicador de profundidad de lectura, el número de backlinks generados espontáneamente como indicador de autoridad y el impacto en el pipeline de ventas cuando el contenido forma parte del journey del comprador B2B.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar una estrategia de contenido técnico que construya autoridad de marca y contribuya al crecimiento del producto.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Narrative del proyecto de diseño',
                'description'       => 'Cuenta la historia del proceso de diseño: el case study que muestra el reto, el proceso y el impacto de forma que convence a los clientes potenciales y refuerza el portfolio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en comunicación del diseño y en la presentación de proyectos creativos. Necesito que me ayudes a construir el case study y la narrativa de un proyecto de diseño de forma que sea convincente para clientes potenciales, reclutadores o la comunidad de diseño.

Mi contexto:
- Tipo de proyecto de diseño a documentar: [UX/UI, identidad visual, diseño web, motion, ilustración, etc.]
- Descripción breve del proyecto: [para quién fue, cuál era el reto principal, qué se entregó]
- Resultado o impacto medible si lo tienes: [métricas de conversión, datos de usabilidad, feedback del cliente, premios, etc.]
- Audiencia principal del case study: [clientes potenciales, reclutadores de empresas, comunidad de diseño en Behance o Dribbble]
- Mayor dificultad para documentar proyectos: [no sé qué contar, el proceso no fue lineal, el cliente no permite mostrar datos, no tengo tiempo, etc.]

Con ese contexto, dame:

1. LA ESTRUCTURA DEL CASE STUDY QUE CONVENCE
¿Cuál es la estructura óptima de un case study de diseño que funciona para atraer clientes o conseguir trabajo? Dame la estructura completa: la portada y el titular que captura la atención, el resumen ejecutivo del proyecto, la sección de reto y contexto, la sección de proceso (research, ideación, prototipado, testing), la sección de solución final con las decisiones de diseño explicadas y la sección de impacto y resultados. Para cada sección indica qué debe incluir y qué errores evitar.

2. CÓMO CONTAR EL PROCESO SIN QUE SEA ABURRIDO
El proceso de diseño puede ser largo y técnico. ¿Cómo lo cuento de forma que sea interesante y demuestre mi valor como diseñador sin aburrir al lector? Dame las técnicas narrativas para hacer el proceso interesante: cómo seleccionar los momentos del proceso que merece la pena mostrar, cómo explicar las decisiones de diseño en términos de razonamiento y no solo de estética, cómo mostrar los fracasos y los pivotes como parte del proceso que demuestra madurez y cómo usar las citas del cliente o los usuarios de research para dar credibilidad al relato.

3. EL TITULAR Y EL GANCHO DEL CASE STUDY
¿Cómo escribo el titular y el primer párrafo del case study para que el visitante del portfolio quiera seguir leyendo? Dame el framework para construir el titular: la fórmula que incluye el reto, la solución y el impacto en una frase, los ejemplos de titulares efectivos para distintos tipos de proyectos de diseño y cómo escribir el párrafo de apertura que hace que el lector se sienta identificado con el problema del proyecto y quiera saber cómo lo resolviste.

4. CÓMO MOSTRAR EL IMPACTO CUANDO NO HAY DATOS
¿Qué hago cuando el cliente no permite compartir datos o cuando el proyecto no tiene métricas de impacto cuantificables? Dame las estrategias para demostrar el impacto sin datos numéricos: las citas del cliente que describen el cambio, la comparación visual del antes y el después, el feedback de usuarios reales del proceso de testing, los indicadores cualitativos de éxito (el producto se lanzó, el cliente renovó, el equipo adoptó el sistema de diseño) y cómo presentar la ausencia de datos de forma honesta y profesional.

5. ADAPTACIÓN DEL CASE STUDY A DISTINTAS AUDIENCIAS
¿Cómo adapto el mismo proyecto a distintas audiencias sin duplicar todo el trabajo? Dame la guía de adaptación: qué versión del case study creo para Behance o Dribbble (orientada a la comunidad de diseño, énfasis en el proceso y la estética), qué versión creo para LinkedIn (más breve, orientada al negocio y el impacto), qué versión incluyo en el portfolio web (completa, orientada a clientes), y qué presentación PPT o PDF preparo para enviar directamente a un cliente potencial o a un reclutador.

6. EL PORTFOLIO COMO NARRATIVE ACUMULATIVA
¿Cómo hago que el conjunto de mis case studies cuente una historia coherente sobre quién soy como diseñador y qué tipo de trabajo quiero seguir haciendo? Dame el framework para curar el portfolio: cómo seleccionar qué proyectos incluir y cuáles dejar fuera, cómo ordenarlos para que el recorrido por el portfolio refuerce mi posicionamiento, cómo escribir el texto de presentación del portfolio que conecta los proyectos en una narrative sobre mi evolución y especialización y cómo actualizar el portfolio de forma estratégica cuando tengo nuevos proyectos.

7. ERRORES FRECUENTES EN LOS CASE STUDIES DE DISEÑO
Lista los seis errores más comunes en los case studies de diseñadores: el case study que solo muestra el resultado final sin explicar el proceso de decisión, la narrativa que no conecta el diseño con los objetivos del negocio del cliente, el case study demasiado largo que pierde al lector antes de llegar al resultado, el uso excesivo de jerga de diseño que no comunica nada al cliente que toma la decisión de contratarte, la falta de una llamada a la acción clara al final del case study y el portfolio que muestra todo el trabajo sin curaduría.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir case studies de diseño que muestran el proceso, las decisiones y el impacto de forma convincente para clientes y reclutadores.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Storytelling en ventas',
                'description'       => 'Usa las historias para vender: la estructura del customer success story, las analogías que hacen que el cliente entienda el valor y las narrativas que hacen que la propuesta sea memorable.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en comunicación comercial y en el uso del storytelling como herramienta de ventas. Necesito que me ayudes a incorporar el storytelling en mi proceso de ventas de forma que mis presentaciones sean más memorables, mis argumentos más convincentes y mis tasas de cierre mejores.

Mi contexto:
- Tipo de producto o servicio que vendo: [describe brevemente qué vendes y a quién]
- Ciclo de venta y formato de la presentación comercial: [demo online, reunión presencial, propuesta escrita, etc.]
- El argumento de venta principal que uso actualmente: [en qué te basas hoy para convencer al cliente]
- Mayor dificultad en el proceso de venta: [el cliente no entiende el valor, las reuniones no avanzan, el precio es la barrera principal, etc.]
- ¿Tienes casos de éxito de clientes actuales que puedas usar? [sí / no / algunos pero sin datos]

Con ese contexto, dame:

1. POR QUÉ EL STORYTELLING FUNCIONA EN VENTAS
Explícame la neurociencia y la psicología detrás del storytelling en ventas: por qué el cerebro del comprador procesa las historias de forma distinta a los argumentos racionales, qué ocurre en el cerebro cuando escucha una historia (sincronización neuronal, activación de la empatía, memoria a largo plazo) y por qué una historia bien contada supera a las hojas de especificaciones y a las comparativas de características.

2. LA ESTRUCTURA DEL CUSTOMER SUCCESS STORY
¿Cómo construyo un caso de éxito de cliente que funcione como herramienta de venta? Dame la estructura completa del customer success story: la situación del cliente antes de la solución (el problema, el contexto, el coste del problema), la intervención (por qué eligió mi solución, cómo fue el proceso de implementación), el resultado (los datos cuantitativos y cualitativos) y la vida después (el cliente como protagonista de su propia historia de éxito). Incluye cómo obtener estas historias de los clientes actuales aunque no quieran compartir datos.

3. ANALOGÍAS Y METÁFORAS QUE HACEN ENTENDER EL VALOR
¿Cómo uso las analogías y las metáforas para que el cliente entienda el valor de mi solución en segundos? Dame el proceso para crear analogías efectivas: cómo identificar el concepto abstracto que el cliente no entiende, cómo encontrar el dominio familiar con el que compararlo y cómo formular la analogía de forma que active la comprensión inmediata. Dame tres ejemplos de analogías poderosas para explicar conceptos difíciles de mi tipo de producto o servicio.

4. LA HISTORIA DEL ORIGEN DEL PRODUCTO EN LA VENTA
¿Cómo uso la historia de origen de mi empresa o producto como argumento de venta? Dame el framework para incorporar el origin story en la presentación comercial: el momento en que el fundador tuvo el problema que el producto resuelve, el proceso de creación y las decisiones difíciles tomadas en el camino y cómo este origen auténtico genera confianza y diferenciación en la reunión comercial. Incluye cuándo y cómo introducir esta historia en la conversación de ventas.

5. EL ANTES Y EL DESPUÉS: LA ESTRUCTURA MÁS PODEROSA
¿Cómo construyo la narrativa del antes y el después para que el cliente visualice su propia transformación? Dame el proceso para aplicar esta estructura a mi caso: cómo describir el estado actual del cliente (el problema, la frustración, el coste) de forma que se sienta identificado, cómo pintar el estado futuro (después de usar mi solución) de forma que sea deseable y creíble y cómo conectar los dos estados con la solución como el puente que hace posible la transformación.

6. STORYTELLING EN LAS OBJECIONES
¿Cómo uso las historias para responder a las objeciones más frecuentes en mi proceso de venta? Dame el framework de objección-historia: para cada objeción típica (el precio es demasiado alto, ya lo intentamos antes y no funcionó, necesitamos pensarlo), dame la historia de un cliente que tenía la misma objeción, cómo la superó y cuál fue el resultado. Incluye cómo introducir la historia de forma natural en la conversación sin que parezca una respuesta ensayada.

7. PRÁCTICA Y MEJORA DEL STORYTELLING COMERCIAL
¿Cómo mejoro mi capacidad de storytelling en ventas de forma sistemática? Dame el plan de práctica: cómo documentar las historias que funcionan y las que no, cómo adaptar el mismo story a distintos perfiles de comprador (el CEO frente al director técnico frente al usuario final), cómo usar el feedback de las reuniones para refinar las historias y cómo construir un repositorio de historias de ventas que todo el equipo comercial pueda usar de forma consistente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Incorporar el storytelling en el proceso de ventas para hacer las presentaciones más memorables y mejorar las tasas de cierre.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product narrative: la historia del producto',
                'description'       => 'Construye el narrative del producto que alinea al equipo y convence a los usuarios: la visión, el origen y el futuro del producto contado de forma que inspira tanto al ingeniero como al cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product strategy y comunicación de producto. Necesito que me ayudes a construir el narrative del producto: la historia que explica por qué existe el producto, a quién sirve, qué problema resuelve y a dónde va, de forma que alinee al equipo interno y convenza a los usuarios y clientes externos.

Mi contexto:
- Nombre y descripción del producto: [qué hace, para quién, en qué categoría compite]
- Etapa del producto: [idea / MVP / crecimiento / madurez]
- Principal tensión interna en el equipo: [falta de alineación sobre la visión, roadmap que cambia con cada petición de cliente, dificultad para decir no, etc.]
- Mayor dificultad para comunicar el producto al exterior: [los usuarios no entienden el valor, el mensaje se pierde, difícil diferenciarse, etc.]
- Competidores principales y cómo se posicionan: [menciona dos o tres y su narrative actual]

Con ese contexto, dame:

1. LA VISIÓN DEL PRODUCTO COMO NARRATIVE
¿Cómo construyo la visión del producto de forma que sea inspiradora, creíble y orientadora para el equipo? Dame el framework de visión de producto: la diferencia entre misión (qué haces hoy), visión (qué mundo quieres construir a largo plazo) y estrategia (cómo vas a llegar ahí), la longitud y el tono ideal de la declaración de visión, y el proceso para construirla con el equipo de forma participativa. Dame un ejemplo de cómo aplicar el framework a mi caso.

2. EL PRESS RELEASE IMAGINARIO: LA TÉCNICA DE AMAZON
Explícame la técnica del Press Release and FAQ que usa Amazon para definir nuevos productos: cómo escribir el comunicado de prensa del futuro que describe el producto cuando ya es un éxito, las preguntas frecuentes que responden las dudas del cliente y del equipo y cómo este documento se convierte en el norte que guía todas las decisiones del equipo de producto. Dame la plantilla completa y guíame para aplicarla a mi producto.

3. LA PROPUESTA DE VALOR NARRATIVA
¿Cómo convierto la propuesta de valor del producto en un mensaje que el cliente entiende y recuerda en treinta segundos? Dame el proceso para construir el mensaje de valor narrativo: la estructura before-after-bridge (antes tenías este problema, ahora con el producto tienes este resultado, el puente es lo que el producto hace posible), el test del ascensor para verificar que el mensaje es claro y los errores más frecuentes en la comunicación del valor de producto que hacen que el mensaje no aterrice.

4. EL NARRATIVE HACIA EL EQUIPO INTERNO
¿Cómo uso el narrative del producto para alinear al equipo de ingeniería, diseño, marketing y ventas con la visión y las prioridades? Dame las herramientas narrativas para la comunicación interna de producto: el product brief que enmarca cada iniciativa en el contexto de la visión, el formato de kickoff de feature que cuenta la historia del usuario que se va a beneficiar de la mejora, la comunicación de las decisiones difíciles (qué no se va a construir y por qué) y el narrative del roadmap que explica la lógica de la secuencia de prioridades.

5. STORYTELLING EN EL LANZAMIENTO DE FEATURES
¿Cómo cuento el lanzamiento de una nueva feature de forma que los usuarios la entiendan y la adopten? Dame la estructura narrativa del lanzamiento: el problema que la feature resuelve (contado desde la perspectiva del usuario, no desde la perspectiva técnica), la solución con lenguaje accesible, la historia del usuario antes y después de la feature y el call to action que invita a probarla. Incluye cómo adaptar este mensaje para el email de lanzamiento, el changelog, la notificación in-app y la nota de prensa.

6. EL NARRATIVE ANTE LOS INVERSORES
¿Cómo construyo el narrative del producto para una presentación a inversores que va más allá de las métricas y las proyecciones? Dame la estructura de la historia del producto para inversores: el problema de mercado y por qué ahora es el momento, el insight que descubrió el equipo fundador que nadie más había visto, la solución y por qué es defendible, el cliente y por qué lo elige sobre las alternativas y la visión del futuro que justifica la apuesta. Incluye cómo conectar cada elemento del narrative con los datos y métricas que lo respaldan.

7. ERRORES EN EL NARRATIVE DE PRODUCTO
Lista los seis errores más comunes en el narrative de producto: la visión demasiado genérica que podría aplicarse a cualquier empresa del sector, la propuesta de valor centrada en features y no en resultados del usuario, el narrative que cambia con cada interlocutor porque el equipo no está alineado, la historia del producto que ignora a los competidores y da una imagen de ingenuidad, la visión demasiado ambiciosa que el equipo no se cree y la falta de actualización del narrative cuando el producto pivota o evoluciona significativamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir el narrative del producto que alinea al equipo interno y convence a usuarios e inversores.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer brand storytelling',
                'description'       => 'Cuenta la historia de la empresa como empleadora: las historias de empleados reales, los valores en acción y la narrativa que hace que los candidatos ideales quieran trabajar contigo antes de conocer el sueldo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en employer branding y comunicación de la propuesta de valor al empleado. Necesito que me ayudes a construir el storytelling del employer brand de mi empresa: la historia que hace que los candidatos ideales quieran trabajar con nosotros y que los empleados actuales se sientan orgullosos de contarlo.

Mi contexto:
- Tipo de empresa y sector: [describe brevemente el negocio]
- Tamaño de la empresa: [número de empleados aproximado]
- Perfiles más difíciles de atraer o retener: [los roles donde más te cuesta encontrar candidatos]
- Lo que hace genuinamente diferente a la empresa como lugar de trabajo: [sé honesto, incluyendo lo que no es perfecto]
- Canales de employer branding actuales: [LinkedIn, web de empleo, Glassdoor, eventos, etc.]
- Mayor reto: [atraer talento, retener a los mejores, competir con empresas más grandes, etc.]

Con ese contexto, dame:

1. LA EVP: PROPUESTA DE VALOR AL EMPLEADO
¿Cómo defino la Employee Value Proposition (EVP) de mi empresa de forma auténtica y diferenciada? Dame el proceso para construir la EVP: la metodología de escucha a empleados actuales (encuestas, entrevistas, focus groups) para identificar qué es genuinamente valorado, cómo formularla en una declaración que sea creíble, específica y diferenciada de los competidores y cómo validarla con empleados antes de publicarla. Incluye qué preguntas hacer en las entrevistas de EVP y cómo analizar las respuestas.

2. LAS HISTORIAS DE EMPLEADOS QUE CONSTRUYEN EMPLOYER BRAND
¿Cómo identifico y cuento las historias de empleados reales que hacen que el employer brand sea creíble? Dame el proceso completo: cómo identificar las historias más representativas de la cultura real de la empresa, cómo entrevistar a los empleados para extraer el relato (las preguntas que abren conversaciones genuinas y las que generan respuestas de marketing vacías), cómo dar formato a las historias para distintos canales (video corto, post de LinkedIn, artículo de blog) y cómo involucrar a los empleados en la producción del contenido sin que se sienta forzado.

3. VALORES EN ACCIÓN: HISTORIAS QUE DEMUESTRAN LA CULTURA
¿Cómo paso de declarar los valores de la empresa a demostrarlos con historias concretas? Dame el framework para conectar los valores con historias reales: para cada valor de la empresa, dame el proceso para identificar tres situaciones reales en las que ese valor se manifestó en una decisión o en el comportamiento de alguien del equipo, cómo narrar esas situaciones de forma que el candidato pueda evaluar si la cultura encaja con él y cómo publicarlas sin que suenen a propaganda corporativa.

4. EL CANDIDATE JOURNEY Y EL STORYTELLING EN CADA ETAPA
¿Cómo uso el storytelling a lo largo de todo el proceso de candidatura para crear una experiencia coherente y memorable? Dame el mapa del candidate journey con el contenido narrativo recomendado para cada etapa: el primer contacto (anuncio de empleo que cuenta una historia en lugar de listar requisitos), la fase de investigación (contenido en LinkedIn y web de empleo que responde las preguntas que el candidato se hace), el proceso de selección (la entrevista como conversación de doble descubrimiento) y la oferta y onboarding (la bienvenida que confirma que el candidato tomó la decisión correcta).

5. EMPLOYER BRAND EN LINKEDIN: LA ESTRATEGIA DE CONTENIDO
¿Cómo construyo una presencia de employer brand en LinkedIn que atraiga candidatos pasivos (los que no están buscando activamente pero estarían abiertos a la oferta adecuada)? Dame la estrategia de contenido para LinkedIn: los formatos que funcionan para employer branding (stories de empleados, behind the scenes, decisiones difíciles del equipo, logros del equipo), la frecuencia de publicación recomendada, cómo involucrar a los líderes de la empresa como amplificadores del mensaje y cómo medir el impacto del contenido en la calidad y cantidad de candidatos recibidos.

6. GESTIÓN DE LA REPUTACIÓN EN GLASSDOOR Y OTROS CANALES
¿Cómo gestiono la reputación de la empresa como empleadora en plataformas de reseñas como Glassdoor o LinkedIn? Dame la estrategia: cómo responder a las reseñas negativas de forma constructiva y sin ponerse a la defensiva, cómo animar a los empleados satisfechos a dejar reseñas de forma ética (sin presión), cómo interpretar las críticas como feedback genuino que puede mejorar la propuesta al empleado y cómo comunicar internamente los cambios que se hacen en respuesta a ese feedback.

7. ERRORES DE EMPLOYER BRANDING
Lista los seis errores más costosos en el employer branding: el employer brand que no refleja la realidad y genera frustración en los nuevos empleados que se van en los primeros meses, la comunicación de employer brand que habla de los beneficios y no de la cultura real, las historias de empleados que parecen escritas por el departamento de comunicación en lugar de por personas reales, el employer brand que solo existe en LinkedIn pero no en la experiencia diaria del empleado, la falta de coherencia entre el mensaje externo y el trato interno y el employer brand que no está alineado con los perfiles de candidatos que realmente necesitas atraer.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir el employer brand storytelling que atrae a los candidatos ideales y retiene a los mejores empleados.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial storytelling: los números que cuentan una historia',
                'description'       => 'Presenta los datos financieros como una narrativa: la historia del negocio que cuentan el P&L, el balance y el cash flow cuando los interpretas juntos y los conectas con la estrategia.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en comunicación financiera y en la presentación de resultados económicos para audiencias directivas, inversores y equipos no financieros. Necesito que me ayudes a transformar los datos financieros en una narrativa coherente y persuasiva que cuente la historia real del negocio.

Mi contexto:
- Tipo de organización: [startup, pyme, filial de multinacional, empresa cotizada, etc.]
- Audiencia principal para la comunicación financiera: [consejo de administración, inversores, equipo directivo, empleados, banco, etc.]
- Estado financiero actual: [crecimiento, rentabilización, reestructuración, expansión, etc.]
- Mayor dificultad en la comunicación financiera actual: [los datos no se entienden, la presentación no conecta con la estrategia, el equipo no financiero no comprende el impacto de sus decisiones, etc.]
- Frecuencia de la comunicación financiera: [mensual, trimestral, anual]

Con ese contexto, dame:

1. POR QUÉ LOS NÚMEROS SOLOS NO CUENTAN NADA
Explícame la diferencia entre presentar datos financieros y contar la historia financiera del negocio: por qué el P&L sin contexto es una lista de números, cómo la narrativa convierte esos números en información que la audiencia puede interpretar y actuar sobre ella y qué elementos hacen que una presentación financiera sea memorable y persuasiva frente a una que simplemente informa.

2. LA ESTRUCTURA NARRATIVA DEL INFORME FINANCIERO
¿Cómo estructura un informe financiero que cuente la historia del período de forma clara y lógica? Dame la estructura narrativa recomendada: el resumen ejecutivo como portada de la historia (los tres o cuatro mensajes clave del período), la sección de contexto y mercado que explica el entorno en que se obtuvieron los resultados, el análisis de los resultados con la causa de cada variación relevante, la sección de outlook que conecta el pasado con el futuro y el mensaje de cierre que deja a la audiencia con la interpretación correcta de los datos.

3. CÓMO EXPLICAR LAS VARIACIONES: EL PUENTE DE WATERFALL
¿Cómo explico las diferencias entre el plan y el resultado, o entre este período y el anterior, de forma que la audiencia entienda qué pasó y qué se va a hacer al respecto? Dame la técnica del waterfall chart narrativo: cómo identificar los tres o cuatro drivers principales de la variación, cómo cuantificar el impacto de cada driver, cómo presentarlo visualmente y cómo redactar el comentario narrativo que explica cada columna del waterfall en términos de decisiones de negocio y no de partidas contables.

4. TRADUCIR LOS FINANCIEROS AL LENGUAJE DEL NEGOCIO
¿Cómo presento los resultados financieros a una audiencia no financiera (el equipo de producto, de ventas o de operaciones) de forma que entiendan el impacto de sus decisiones en los números? Dame las técnicas de traducción financiera: cómo conectar cada línea del P&L con una decisión operativa concreta, cómo usar analogías del día a día para explicar conceptos como el margen bruto, el EBITDA o el capital circulante, y cómo diseñar el dashboard financiero simplificado que el equipo no financiero puede interpretar sin formación contable.

5. EL FORECAST Y EL PLAN COMO NARRATIVE DEL FUTURO
¿Cómo presento el forecast y el plan estratégico de forma que sea creíble y persuasivo para la audiencia? Dame la estructura narrativa del forecast: cómo anclar las proyecciones en los drivers de negocio que las sustentan (no en extrapolaciones de tendencias), cómo presentar los escenarios (base, optimista, pesimista) de forma que sean una herramienta de decisión y no una cobertura defensiva, y cómo comunicar la incertidumbre de forma honesta sin que haga perder credibilidad al equipo directivo.

6. COMUNICACIÓN FINANCIERA EN MOMENTOS DIFÍCILES
¿Cómo comunico resultados negativos, una crisis de liquidez o una reestructuración de forma que mantenga la confianza de los stakeholders? Dame el framework de comunicación en momentos difíciles: los principios de la comunicación de malas noticias (rapidez, honestidad, contexto y plan de acción), cómo estructurar el mensaje para que el problema quede claro sin generar pánico, cómo presentar el plan de remediación de forma creíble y cómo gestionar las preguntas difíciles de la audiencia.

7. LAS DIAPOSITIVAS FINANCIERAS QUE FUNCIONAN
¿Cómo diseño las diapositivas de la presentación financiera para que sean claras, impactantes y memorables? Dame las reglas del diseño de slides financieras: cuántos gráficos por slide, cómo titular cada slide con el mensaje clave (no con la descripción del contenido), qué tipo de gráfico usar para cada tipo de dato, cómo eliminar el ruido visual que distrae del mensaje y cómo usar el color de forma intencional para guiar la atención de la audiencia hacia los datos más importantes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Transformar los datos financieros en una narrativa clara y persuasiva que la audiencia directiva pueda interpretar y actuar sobre ella.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal storytelling: los hechos como narrativa persuasiva',
                'description'       => 'El abogado que construye la historia del caso: cómo estructurar los hechos para que la narrativa sea convincente, coherente y memorable para el juez o árbitro que debe decidir.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en comunicación jurídica y en la construcción de narrativas persuasivas para el ámbito legal. Necesito que me ayudes a desarrollar la habilidad de construir la historia del caso: cómo estructurar los hechos, los argumentos y la narrativa de forma que sea convincente, coherente y memorable para el juez, el árbitro o el cliente al que le presentas la estrategia.

Mi contexto:
- Tipo de práctica jurídica: [litigación civil, arbitraje, penal, administrativo, derecho de familia, corporate, etc.]
- Caso concreto a trabajar (si lo tienes): [describe brevemente el asunto, las partes y el conflicto principal sin datos confidenciales]
- Mayor dificultad en la comunicación jurídica actual: [los escritos son muy técnicos y difíciles de leer, la historia del caso no está clara, el juez no conecta con los argumentos, el cliente no entiende la estrategia, etc.]
- Foro en el que se presenta la argumentación: [juzgado de primera instancia, tribunal de apelación, arbitraje internacional, negociación, etc.]

Con ese contexto, dame:

1. POR QUÉ EL RELATO GANA LOS CASOS
Explícame la investigación sobre psicología de la persuasión aplicada al ámbito judicial: por qué los jueces y árbitros, como cualquier ser humano, procesan la información como una narrativa y no como una lista de argumentos, cómo el sesgo de confirmación afecta a la valoración de la prueba una vez que el decisor tiene una historia en la mente y por qué la parte que construye el relato más coherente y convincente desde el inicio del proceso tiene una ventaja estructural sobre la que solo presenta argumentos.

2. LA ESTRUCTURA NARRATIVA DEL CASO
¿Cómo construyo la narrativa central del caso antes de redactar el primer escrito? Dame el proceso de construcción del relato: la identificación del conflicto central (el que da sentido a todos los hechos), la selección de los hechos que apoyan la narrativa y la exclusión o reencuadre de los que la contradicen, la identificación del protagonista de la historia (tu cliente como personaje principal) y la línea de tiempo que hace que la secuencia de hechos sea lógica y comprensible para alguien que no conoce el caso.

3. LOS HECHOS COMO NARRATIVE: TÉCNICAS DE REENCUADRE
¿Cómo presento los hechos de forma que apoyen la narrativa de mi cliente sin distorsionar la realidad? Dame las técnicas de framing jurídico: cómo elegir el nivel de detalle adecuado para cada hecho según su peso en la narrativa, cómo secuenciar los hechos para que la lógica causal sea evidente, cómo usar el lenguaje activo o pasivo de forma intencional para asignar agencia y responsabilidad y cómo anticipar y neutralizar los hechos que la parte contraria va a destacar en su narrativa.

4. EL PRIMER PÁRRAFO QUE DEFINE EL CASO
¿Cómo escribo el párrafo inicial del escrito principal de forma que el juez o árbitro tenga la narrativa de mi cliente en la mente antes de leer un solo argumento jurídico? Dame el framework del opening statement escrito: la estructura del primer párrafo (el conflicto en una frase, la identidad de las partes, el resultado que se pide y por qué es justo), los ejemplos de primeros párrafos efectivos en distintos tipos de procedimiento y los errores más comunes en la apertura de los escritos judiciales.

5. ARGUMENTACIÓN JURÍDICA COMO CONTINUACIÓN DEL RELATO
¿Cómo integro los argumentos jurídicos en la narrativa del caso de forma que fluyan naturalmente del relato de los hechos? Dame la estructura del escrito jurídico que integra narrativa y argumentación: cómo presentar cada argumento jurídico como la solución lógica que el derecho ofrece al conflicto que la narrativa ha establecido, cómo citar la jurisprudencia de forma que refuerce el relato en lugar de interrumpirlo y cómo estructurar las conclusiones como el cierre narrativo del caso.

6. COMUNICACIÓN DE LA ESTRATEGIA AL CLIENTE
¿Cómo le explico al cliente la estrategia del caso de forma que la entienda, la comparta y confíe en el proceso? Dame las técnicas de comunicación jurídica al cliente no jurista: cómo resumir la narrativa del caso en términos que el cliente entiende, cómo explicar los riesgos y la incertidumbre de forma honesta sin generar ansiedad paralizante, cómo presentar las opciones estratégicas con sus consecuencias y cómo mantener al cliente informado durante el proceso sin abrumarlo con tecnicismos.

7. ERRORES DE COMUNICACIÓN JURÍDICA QUE PIERDEN CASOS
Lista los seis errores de comunicación jurídica que debilitan la posición de la parte aunque el derecho esté de su lado: el escrito que empieza con los fundamentos jurídicos antes de establecer los hechos, la narrativa inconsistente entre distintos escritos del mismo procedimiento, el exceso de jerga jurídica que hace el escrito inaccesible para el juez que no es especialista en la materia, la argumentación que ignora los hechos incómodos en lugar de neutralizarlos, la falta de un hilo conductor que dé coherencia a todos los argumentos y la conclusión que no pide nada de forma clara y específica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Desarrollar la habilidad de construir narrativas jurídicas persuasivas que conecten emocionalmente con el decisor y refuercen los argumentos de derecho.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success stories: casos de éxito que venden',
                'description'       => 'Construye los casos de éxito que el equipo de ventas usa para cerrar deals: la estructura, las métricas y el lenguaje que convierte la historia de un cliente satisfecho en el argumento más poderoso del proceso comercial.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success y en la producción de casos de éxito de clientes que sirven como herramienta de ventas. Necesito que me ayudes a diseñar el sistema para identificar, extraer, producir y distribuir los customer success stories que convierten la satisfacción de los clientes actuales en el argumento más poderoso para cerrar nuevos clientes.

Mi contexto:
- Tipo de producto o servicio: [SaaS, plataforma, servicio profesional, etc.]
- Tipo de clientes: [sector, tamaño de empresa, perfil del comprador]
- Proceso actual de casos de éxito: [sin proceso / algún testimonial suelto / proceso básico]
- Mayor dificultad con los casos de éxito actuales: [los clientes no quieren participar, no tenemos datos de impacto, el proceso de producción es lento, el equipo de ventas no los usa, etc.]
- Canales donde se usan los casos de éxito: [web, deck de ventas, email, eventos, etc.]

Con ese contexto, dame:

1. EL SISTEMA DE IDENTIFICACIÓN DE HISTORIAS DE ÉXITO
¿Cómo identifico de forma sistemática los clientes con el mayor potencial para convertirse en un caso de éxito antes de pedirles que participen? Dame los criterios de selección: los indicadores de satisfacción y éxito que debe cumplir el cliente (NPS alto, uso intenso del producto, resultado medible, relación larga, disposición a participar públicamente), el proceso para identificarlos en el CRM o en la herramienta de CS y el momento óptimo del ciclo de vida del cliente para hacer la petición.

2. CÓMO PEDIR AL CLIENTE QUE PARTICIPE EN UN CASO DE ÉXITO
¿Cuál es la forma más efectiva de pedir a un cliente satisfecho que participe en un caso de éxito sin que lo viva como una carga? Dame el guión de la conversación de solicitud: el timing ideal (justo después de un hito de éxito o de un NPS alto), el canal (email, llamada, en persona), el mensaje que explica el beneficio para el cliente (visibilidad, reconocimiento, co-marketing), las objeciones más frecuentes (no tenemos tiempo, no podemos compartir datos, necesitamos aprobación de comunicación) y cómo superarlas.

3. LA ENTREVISTA PARA EXTRAER LA HISTORIA
¿Cómo hago la entrevista al cliente para extraer el relato de éxito con todos los elementos que necesito? Dame el guión de entrevista completo: las preguntas para entender el antes (el problema, el contexto, por qué buscaban una solución), las preguntas para entender el proceso de selección (por qué eligieron mi solución, qué dudas tenían), las preguntas para extraer los resultados concretos (las métricas de impacto, los cambios cualitativos en el trabajo del equipo) y las preguntas para la cita de cierre (la frase del cliente que resume el valor).

4. LA ESTRUCTURA DEL CASO DE ÉXITO QUE VENDE
¿Cómo escribo el caso de éxito para que funcione como herramienta de ventas y no solo como contenido de marketing? Dame la estructura completa: el titular que incluye el resultado principal (no el nombre del cliente), el resumen ejecutivo de tres líneas, la sección de contexto y reto, la sección de solución con las features o servicios usados, la sección de resultados con datos cuantitativos y cualitativos y la cita del cliente que cierra el relato. Incluye qué extensión es óptima para cada canal.

5. ADAPTACIÓN A DISTINTOS FORMATOS Y CANALES
¿Cómo adapto el mismo caso de éxito a los distintos formatos y canales que necesita el equipo de ventas y marketing? Dame el plan de reutilización del contenido: la versión completa en PDF para el deck de ventas y la web, la versión corta de una página para el email de prospecting, el extracto de tres líneas para la signature del email del equipo de CS, la versión en video de dos minutos para la web y las redes sociales, el post de LinkedIn que convierte al cliente en portavoz de la historia y las diapositivas del caso para usar en presentaciones.

6. DISTRIBUCIÓN Y ACTIVACIÓN EN EL PROCESO DE VENTAS
¿Cómo hago que el equipo de ventas realmente use los casos de éxito en el proceso comercial en el momento correcto? Dame la estrategia de activación: cómo organizar la biblioteca de casos de éxito para que el comercial encuentre el caso correcto por sector, tamaño de empresa y caso de uso, el playbook de cuándo y cómo introducir el caso en la conversación comercial, cómo medir el impacto de los casos de éxito en las tasas de conversión del pipeline y cómo crear la urgencia interna para producir casos de éxito regularmente.

7. ERRORES EN LA PRODUCCIÓN DE CASOS DE ÉXITO
Lista los seis errores más comunes en los programas de customer success stories: el caso de éxito que no tiene métricas concretas porque el cliente no quiso compartirlas (y qué hacer en ese caso), la historia que habla del producto en lugar de hablar del cliente como protagonista, el proceso de aprobación del cliente que tarda meses y hace que el caso de éxito esté desactualizado cuando se publica, la biblioteca de casos de éxito que solo tiene clientes grandes y no tiene ejemplos para los segmentos de clientes más pequeños, el caso de éxito demasiado largo que el comercial no lee y el cliente potencial tampoco, y los casos que nunca se actualizan aunque el cliente haya obtenido resultados nuevos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el sistema para producir y activar casos de éxito de clientes que el equipo de ventas usa para cerrar nuevos deals.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'El portfolio narrativo del freelance',
                'description'       => 'El portfolio que no solo muestra trabajo sino que cuenta una historia: el proceso, el reto y el impacto de cada proyecto narrado de forma que el cliente potencial entiende por qué contratarte a ti.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio y comunicación especializado en freelancers y profesionales independientes. Necesito que me ayudes a transformar mi portfolio de una colección de trabajos en un narrative coherente que cuente mi historia profesional, demuestre mi valor y convenza al cliente potencial de que soy la opción correcta para su proyecto.

Mi contexto:
- Tipo de servicio freelance: [copywriting, desarrollo, diseño, consultoría, marketing, fotografía, etc.]
- Años de experiencia y etapa profesional: [junior / mid / senior / especialista reconocido en el sector]
- Clientes típicos: [startups, pymes, agencias, corporates, particulares]
- Portfolio actual: [sin portfolio / portfolio desactualizado / portfolio que existe pero no convierte / buena muestra de trabajo pero sin contexto narrativo]
- Mayor dificultad para comunicar tu valor: [no sé qué contar de cada proyecto, el cliente compara por precio porque no entiende mi diferencial, me cuesta mostrar proyectos donde hay restricciones de confidencialidad, etc.]

Con ese contexto, dame:

1. LA ESTRATEGIA DEL PORTFOLIO: QUÉ MOSTRAR Y QUÉ DEJAR FUERA
¿Cómo selecciono qué proyectos incluir en el portfolio para que cuenten la historia correcta sobre quién soy y qué tipo de trabajo quiero hacer? Dame el framework de curaduría del portfolio: los criterios para incluir o excluir un proyecto (calidad del resultado, representatividad del tipo de trabajo que quiero seguir haciendo, variedad de sectores o especialización, proyectos de los que me siento orgulloso vs proyectos que no reflejan mi nivel actual), el número óptimo de proyectos según mi nivel y el proceso para revisar el portfolio cada año.

2. LA NARRATIVA DE CADA PROYECTO: EL CASE STUDY DEL FREELANCE
¿Cómo convierto cada proyecto en un case study que cuente el reto, el proceso y el impacto de forma que el cliente potencial entienda el valor que puedo crear para él? Dame la estructura del case study para freelance: el titular con el resultado o el reto (no el nombre del cliente o del proyecto), la descripción breve del cliente y el contexto, el problema o el desafío que traía el proyecto, mi proceso de trabajo y las decisiones clave que tomé, el resultado entregado con métricas de impacto si las hay y el aprendizaje o el valor añadido que diferenció mi trabajo.

3. CÓMO MOSTRAR EL PROCESO SIN REVELAR SECRETOS
¿Cómo cuento el proceso de trabajo de un proyecto cuando el cliente no quiere que se compartan los detalles del negocio o los datos de impacto? Dame las estrategias para mostrar el proceso sin revelar información confidencial: cómo anonimizar el cliente manteniendo el contexto suficiente para que el relato sea creíble, cómo usar el trabajo visual o los entregables sin el contexto del negocio del cliente, cómo describir los retos y las soluciones en términos genéricos que sigan siendo informativos y cómo obtener la aprobación del cliente para compartir el trabajo de forma que sea más fácil decir que sí.

4. LA PÁGINA DE PRESENTACIÓN DEL PORTFOLIO
¿Cómo diseño la página de inicio o de presentación del portfolio para que el cliente potencial entienda en diez segundos quién soy, a quién sirvo y qué tipo de resultado puedo crearle? Dame el contenido de la página de presentación: el headline que define mi especialización en términos del resultado que creo (no del servicio que ofrezco), el subheadline que describe para quién trabajo, la prueba social (el tipo de clientes con los que he trabajado, los resultados que he conseguido), el call to action claro y cómo hacer que la navegación lleve de forma natural a los case studies más relevantes para el visitante.

5. EL PORTFOLIO COMO HERRAMIENTA DE VENTAS ACTIVA
¿Cómo uso el portfolio no solo como escaparate pasivo sino como herramienta activa en el proceso de venta? Dame el proceso de activación del portfolio en la prospección: cómo enviar el link del case study más relevante en el primer email de outreach en lugar de un portfolio genérico, cómo usar el portfolio en la reunión de discovery para anclar la conversación en resultados concretos, cómo actualizar el portfolio con nuevos proyectos justo antes de una campaña de captación y cómo hacer que el portfolio genere referencias y recomendaciones de los clientes actuales.

6. PORTFOLIO SIN PROYECTOS PUBLICABLES: EL CASO DEL FREELANCE NUEVO O ESPECIALIZADO
¿Qué hago cuando no tengo proyectos publicables porque acabo de empezar, porque todo mi trabajo es confidencial o porque cambio de especialización? Dame las estrategias para construir un portfolio de cero o para un nicho donde la confidencialidad es la norma: los proyectos de práctica que se diseñan para el portfolio, la reconstrucción de proyectos pasados en formato de case study sin datos del cliente, los proyectos pro bono que generan portfolio en un nicho nuevo y cómo comunicar la falta de portfolio público de forma que no sea una barrera sino un argumento de especialización.

7. ERRORES DEL PORTFOLIO QUE NO CONVIERTE
Lista los seis errores más comunes en los portfolios de freelancers que tienen buen trabajo pero no convierten visitas en clientes: el portfolio que muestra el trabajo sin contexto y obliga al cliente a imaginarse el valor, la falta de call to action claro que hace que el visitante se vaya sin contactar, el portfolio demasiado amplio que no deja claro en qué te especializas, la ausencia de prueba social (testimoniales, logos de clientes, resultados) que genera desconfianza, los case studies tan técnicos que solo los entiende otro profesional del sector y no el cliente que decide la contratación, y el portfolio desactualizado que muestra trabajo de hace cinco años como si fuera lo mejor que puedes hacer hoy.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Transformar el portfolio freelance en una narrative coherente que demuestra el valor y convierte visitas en clientes potenciales.',
                'vote_score'        => 49,
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
