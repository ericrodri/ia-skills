<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills244Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Liderazgo en el equipo de marketing: motivar creativos y analistas',
                'description'       => 'Domina el arte de liderar equipos de marketing mixtos donde conviven perfiles creativos y analíticos, con estilos de motivación, comunicación y feedback radicalmente distintos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Marketing con más de diez años de experiencia liderando equipos que combinan perfiles creativos (copywriters, diseñadores, brand managers) y perfiles analíticos (performance marketers, data analysts, growth hackers). Quiero mejorar mi liderazgo de este equipo mixto y necesito estrategias concretas y adaptadas a cada perfil.

**Preguntas iniciales:**
1. ¿Cuántas personas tiene el equipo y en qué proporción se distribuyen entre perfiles creativos y analíticos?
2. ¿Cuál es el principal punto de fricción: la comunicación entre ambos perfiles, la priorización de proyectos, el ritmo de trabajo o la visión del éxito?
3. ¿Tienes más experiencia personal en el lado creativo o en el analítico?
4. ¿El equipo trabaja de forma presencial, remota o híbrida?

**ENTENDER A LOS CREATIVOS:**

Los perfiles creativos necesitan espacio para explorar, tiempo para incubar ideas y reconocimiento por la calidad de su trabajo, no solo por los resultados de negocio. Su mayor desmotivador es sentir que producen a la cadena de montaje sin que su criterio artístico cuente. Ayúdame a entender qué necesitan realmente:

CÓMO MOTIVAR AL PERFIL CREATIVO
El creativo se motiva cuando siente que su trabajo importa más allá de las métricas. Necesita claridad en el brief (el problema que resuelve, no la solución), libertad dentro de restricciones claras (la audiencia, el tono, el formato) y un proceso de feedback que critique el trabajo, no a la persona. Dame el sistema de briefing creativo y el protocolo de feedback que produce los mejores resultados con perfiles creativos.

GESTIONAR LA INCERTIDUMBRE CREATIVA
Los creativos trabajan con ambigüedad y necesitan un líder que no colapse esa ambigüedad prematuramente. Ayúdame a calibrar cuándo dar dirección y cuándo dejar espacio, cómo hacer preguntas que desbloquean al creativo atascado y cómo gestionar los plazos sin matar el proceso creativo.

**ENTENDER A LOS ANALÍTICOS:**

Los perfiles analíticos necesitan datos, claridad en los objetivos y autonomía para elegir el método. Su mayor desmotivador es que les pidan resultados sin darles acceso a los datos correctos o que sus recomendaciones basadas en datos sean ignoradas por razones subjetivas. Ayúdame a liderar mejor a este perfil:

CÓMO MOTIVAR AL PERFIL ANALÍTICO
El analítico se motiva cuando tiene un problema claro, acceso a datos de calidad y visibilidad sobre el impacto de su trabajo en las decisiones de negocio. Dame el sistema de objetivos y reporting que mantiene al perfil analítico motivado y productivo, y cómo darle contexto de negocio suficiente para que sus análisis sean relevantes.

HACER QUE LOS ANÁLISIS SE USEN
El mayor frustrante del analítico es hacer un análisis que nadie implementa. Ayúdame a crear el puente entre el insight y la acción: cómo involucrar al analítico en las reuniones de toma de decisión, cómo enseñarle a comunicar sus hallazgos a audiencias no técnicas y cómo cerrar el bucle mostrándole el impacto de sus recomendaciones.

**CREAR COLABORACIÓN ENTRE CREATIVOS Y ANALÍTICOS:**

El mayor potencial del equipo mixto es la colaboración entre ambos perfiles: el analítico que identifica la oportunidad y el creativo que la convierte en una campaña. Pero por defecto, los dos perfiles se evitan mutuamente. Ayúdame a construir los rituales y los proyectos que generan colaboración genuina:

LOS PROYECTOS PUENTE
Diseña el tipo de proyectos que obligan a creativos y analíticos a trabajar juntos de manera que ambos perfilen su aportación: el analítico trae los datos del cliente y la oportunidad, el creativo trae las ideas y la ejecución. Dame ejemplos concretos de este tipo de proyectos y cómo estructurar la colaboración.

EL LENGUAJE COMÚN
Creativos y analíticos tienen vocabularios distintos. Ayúdame a construir el glosario del equipo y los rituales de comunicación que hacen que ambos perfiles se entiendan: cómo el analítico presenta datos de manera que el creativo los pueda usar, y cómo el creativo presenta ideas de manera que el analítico pueda evaluarlas.

**GESTIÓN DE PERSONAS DIFÍCILES EN MARKETING:**

En todo equipo de marketing hay personas que presentan retos específicos: el creativo brillante con ego desproporcionado, el analítico que se niega a comunicar sus hallazgos con claridad, el senior que bloquea las ideas de los juniors y el junior que promete más de lo que entrega. Dame un protocolo específico para cada uno de estos arquetipos: cómo tener la conversación difícil, qué palancas usar y cómo fijar las expectativas con claridad.

Dame el manual de liderazgo adaptativo para equipos de marketing mixtos que me permita sacar lo mejor de cada perfil y convertir la diversidad del equipo en una ventaja competitiva.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Liderazgo adaptativo de equipos de marketing con perfiles creativos y analíticos',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Tech lead: liderar a ingenieros senior sin autoridad formal',
                'description'       => 'Desarrolla las habilidades de influencia, alineación técnica y gestión de conflictos que necesita un tech lead para guiar a un equipo de ingenieros senior sin tener autoridad jerárquica sobre ellos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Staff Engineer o Tech Lead con experiencia liderando equipos de ingeniería senior en empresas de tecnología donde el liderazgo técnico se ejerce por influencia, no por autoridad jerárquica. Acabo de asumir el rol de tech lead de un equipo de ingenieros senior y necesito desarrollar las habilidades para liderar efectivamente sin que nadie me reporte formalmente.

**Preguntas iniciales:**
1. ¿Cuántos ingenieros tiene el equipo y cuál es la distribución de seniority (mid, senior, staff)?
2. ¿Cuál es la mayor resistencia que enfrentas: que no siguen tus decisiones técnicas, que toman decisiones unilaterales sin coordinación, o que hay desacuerdos sobre la dirección técnica?
3. ¿Hay algún ingeniero senior cuya resistencia sea especialmente problemática?
4. ¿El equipo tiene historial de trabajar con tech leads anteriores? ¿Fue una experiencia positiva o negativa?

**LA AUTORIDAD TÉCNICA QUE SE GANA:**

La autoridad de un tech lead no viene del título; viene de la credibilidad técnica, de la calidad de las decisiones y de la confianza del equipo. Ayúdame a construir esa autoridad desde el primer día:

CÓMO ESTABLECER CREDIBILIDAD TÉCNICA
Los ingenieros senior evalúan al tech lead en cada interacción técnica: cómo razona sobre los trade-offs, qué preguntas hace en el code review, cómo responde cuando no sabe algo y cómo maneja el desacuerdo. Dame el protocolo de los primeros noventa días del tech lead para establecer credibilidad sin parecer que estás compitiendo con el equipo.

DECISIONES TÉCNICAS CON CONSENSO
Las mejores decisiones técnicas de un equipo senior emergen del debate, no del dictado. Pero el consenso mal gestionado genera parálisis o decisiones mediocres por compromiso. Ayúdame a diseñar el proceso de toma de decisiones técnicas que involucra al equipo, aprovecha su experiencia y llega a una decisión clara en un tiempo razonable.

**LIDERAR A INGENIEROS QUE SABEN MÁS QUE TÚ:**

Una de las situaciones más incómodas del tech lead es tener en el equipo a ingenieros con más experiencia técnica en áreas específicas. Ayúdame a navegar esta situación sin inseguridad:

DELEGAR LA AUTORIDAD TÉCNICA
Aprende a distinguir las áreas donde tu rol es liderar la dirección (la arquitectura del sistema, la deuda técnica estratégica, la alineación con producto) de las áreas donde tu rol es facilitar que los expertos del equipo toman las mejores decisiones. Dame el modelo mental para esta distinción y cómo comunicarlo al equipo.

HACER LAS PREGUNTAS CORRECTAS
El tech lead que hace las mejores preguntas genera más valor que el que da las mejores respuestas. Ayúdame a desarrollar el repertorio de preguntas que un tech lead hace en el diseño técnico, el code review y las reuniones de arquitectura para elevar la calidad del pensamiento del equipo sin tener que saber la respuesta.

**GESTIÓN DE CONFLICTOS TÉCNICOS:**

Los equipos de ingenieros senior tienen opiniones fuertes y los desacuerdos técnicos son frecuentes. La gestión de estos conflictos es una de las habilidades más importantes del tech lead. Dame el protocolo para los tres escenarios más comunes:

DESACUERDO TÉCNICO ENTRE DOS INGENIEROS SENIOR
Cuando dos ingenieros senior tienen posiciones técnicas irreconciliables, el tech lead tiene que facilitar una resolución sin tomar partido de manera que deteriore la relación con el que "pierde". Dame el proceso de resolución de desacuerdos técnicos que mantiene el respeto mutuo y llega a una decisión que el equipo implementa con compromiso.

EL INGENIERO SENIOR QUE IGNORA TUS DIRECTRICES
El escenario más difícil para un tech lead sin autoridad formal es el ingeniero senior que considera que tus directrices técnicas no son válidas y las ignora abierta o silenciosamente. Dame el protocolo para manejar esta situación: cómo tener la conversación, qué decir y cómo escalar si es necesario sin destruir la relación.

PERSONAS DIFÍCILES EN INGENIERÍA: EL BRILLIANT JERK
El arquetipo más común de persona difícil en equipos de ingeniería es el "brilliant jerk": el ingeniero técnicamente excepcional que tiene comportamientos que dañan la dinámica del equipo (interrumpe, descarta ideas de los demás, no documenta, no hace code review). Ayúdame a manejar este perfil: cómo tener la conversación sobre el impacto de su comportamiento, qué palancas usar y cómo proteger al resto del equipo mientras lo haces.

**RITUALES DEL TECH LEAD:**

Dame el diseño de los rituales semanales del tech lead que mantienen la dirección técnica del equipo alineada, la comunicación fluida y los problemas visibles antes de que se conviertan en crisis: el tech sync semanal, el architecture review mensual y las one-on-ones de dirección técnica.

Dame el manual completo del tech lead que lidera por influencia en equipos de ingenieros senior.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Desarrollo de habilidades de liderazgo técnico sin autoridad jerárquica formal',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Liderazgo en diseño: defender decisiones creativas ante stakeholders',
                'description'       => 'Aprende a liderar con confianza las decisiones de diseño ante stakeholders no-diseñadores, con frameworks para justificar las elecciones creativas en términos de negocio y usuario.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Design o Design Director con experiencia liderando la función de diseño en empresas de tecnología donde el diseño compite constantemente con las prioridades de negocio, ingeniería y producto. Quiero desarrollar las habilidades para defender las decisiones de diseño ante stakeholders que no tienen formación en diseño y que cuestionan las elecciones creativas desde una perspectiva puramente comercial o técnica.

**Preguntas iniciales:**
1. ¿Cuáles son los stakeholders que más cuestionan tus decisiones de diseño (CEO, CPO, Head of Sales, etc.)?
2. ¿Cuál es el tipo de cuestionamiento más frecuente: que el diseño es "demasiado simple", "demasiado diferente", "no lo que el cliente pide" o "tarda demasiado en producirse"?
3. ¿El equipo de diseño tiene métricas que conecten el diseño con el negocio, o el impacto del diseño es difícil de cuantificar?
4. ¿Has tenido situaciones donde una decisión de diseño fue revertida por los stakeholders y el resultado fue peor?

**EL PROBLEMA DE FONDO: LA CREDIBILIDAD DEL DISEÑO:**

Antes de aprender a defender decisiones específicas, hay que entender por qué los stakeholders cuestionan el diseño más que otras disciplinas. La ingeniería rara vez recibe el mismo nivel de cuestionamiento, y la razón es que el código no es visible para los no-técnicos mientras que el diseño lo es para todos. Ayúdame a construir la credibilidad del diseño como disciplina en mi organización:

POSICIONAR EL DISEÑO COMO PROCESO, NO COMO ESTÉTICA
El primer paso es cambiar la narrativa sobre qué es el diseño en la organización. Cuando los stakeholders ven el diseño como "hacer que las cosas sean bonitas", cuestionarán las elecciones estéticas desde su gusto personal. Cuando lo ven como un proceso de resolución de problemas basado en evidencia del usuario, el cuestionamiento cambia de naturaleza. Ayúdame a hacer este cambio de narrativa: qué decir, cómo mostrarlo con ejemplos y qué rituales establecer para que el proceso de diseño sea visible.

**FRAMEWORKS PARA DEFENDER DECISIONES DE DISEÑO:**

EL FRAMEWORK DEL PROBLEMA-EVIDENCIA-SOLUCIÓN
Toda decisión de diseño puede articularse en tres partes: el problema del usuario que resuelve, la evidencia que tenemos de que ese es el problema real (investigación, datos de uso, feedback) y por qué esta solución es la más efectiva entre las alternativas consideradas. Ayúdame a aplicar este framework a las decisiones de diseño más frecuentemente cuestionadas en mi contexto.

TRADUCIR EL DISEÑO AL LENGUAJE DEL NEGOCIO
Los stakeholders de negocio piensan en conversión, retención, coste de adquisición y tiempo de desarrollo. Aprendo a hablar ese idioma para defender decisiones de diseño: cómo conectar una decisión de navegación con la tasa de conversión, cómo conectar la consistencia del design system con la velocidad de desarrollo y cómo conectar la simplificación de un flujo con la reducción del churn.

**GESTIONAR LAS SITUACIONES DIFÍCILES:**

EL STAKEHOLDER QUE REDISEÑA EN LA REUNIÓN
La situación más frustrante del diseñador es el stakeholder que abre Figma en la reunión y empieza a mover elementos "para hacerlo mejor". Ayúdame a manejar esta situación con profesionalidad: cómo redirigir la conversación hacia el problema que la solución resuelve, cómo involucrar al stakeholder de manera productiva y cómo fijar los límites del rol del stakeholder en el proceso de diseño.

EL "HAZLO COMO LA COMPETENCIA"
El CEO que quiere que la aplicación sea exactamente como la de un competidor que acaba de ver es una situación común. Ayúdame a responder a este tipo de feedback sin invalidar la opinión del CEO pero sin abandonar la dirección de diseño correcta: qué preguntas hacer para entender el problema real detrás del pedido, cómo presentar las alternativas y cómo llegar a una solución que satisfaga la necesidad sin copiar.

EL FEEDBACK DE "NO ME GUSTA"
El feedback más difícil de trabajar es el puramente subjetivo: "no me gusta la fuente", "ese azul no me convence", "el layout se ve vacío". Ayúdame a convertir este tipo de feedback en algo accionable: las preguntas que transforman el "no me gusta" en un problema concreto que el diseño puede resolver.

**PERSONAS DIFÍCILES EN EL CONTEXTO DEL DISEÑO:**

EL HIPPO (HIGHEST PAID PERSON'S OPINION)
El mayor reto del liderazgo de diseño es cuando la persona de mayor jerarquía en la sala tiene una opinión de diseño fuerte que va en contra de la evidencia. Ayúdame a navegar el HIPPO con respeto y sin perder la dirección de diseño: cuándo ceder, cuándo defender y cómo hacer que la decisión final, sea cual sea, esté documentada con el razonamiento.

EL STAKEHOLDER CAMBIA DE OPINIÓN EN CADA REUNIÓN
Algunos stakeholders aprueban el diseño en una reunión y lo cuestionan completamente en la siguiente. Ayúdame a gestionar esta persona difícil: cómo documentar los acuerdos, cómo usar los artefactos del proceso (principios de diseño, criterios de éxito, investigación de usuarios) para anclar las decisiones y cómo tener la conversación sobre el impacto del cambio de dirección constante.

Dame el sistema completo para liderar la función de diseño con autoridad y defender las decisiones creativas de manera que construya credibilidad duradera con los stakeholders.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Defensa de decisiones de diseño ante stakeholders y construcción de credibilidad del diseño',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Liderazgo de equipo comercial: gestionar bajo presión de cuota',
                'description'       => 'Desarrolla las habilidades para liderar a tu equipo de ventas en los momentos de mayor presión: el cierre de trimestre, el mes malo y las conversaciones difíciles con vendedores que no alcanzan su objetivo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director Comercial o VP of Sales con experiencia liderando equipos de ventas en entornos B2B de alta presión donde los resultados trimestrales determinan el futuro del equipo. Quiero desarrollar las habilidades para liderar con más efectividad en los momentos de máxima presión: el cierre de trimestre, los períodos de bajo rendimiento y las conversaciones difíciles que la mayoría de los managers de ventas evitan.

**Preguntas iniciales:**
1. ¿Cuántas personas tiene el equipo y cuál es su mix de seniority?
2. ¿Cuál es la tasa de attainment actual y qué porcentaje del equipo alcanza cuota regularmente?
3. ¿Cuál es el mayor reto de liderazgo que enfrentas: motivar al equipo en los malos momentos, tener conversaciones difíciles con los bajo rendimiento o mantener la cohesión cuando hay presión?
4. ¿Cómo de transparente eres con el equipo sobre el estado del pipeline y los objetivos de la empresa?

**LIDERAZGO EN EL CIERRE DE TRIMESTRE:**

Los últimos días del trimestre son el mayor test del liderazgo comercial. El equipo está bajo presión máxima, los deals que parecían cerrados se retrasan y la energía oscila entre la urgencia y el desánimo. Ayúdame a liderar estos momentos con efectividad:

EL TRIAGE DE OPORTUNIDADES
En el cierre de trimestre, el recurso más escaso es el tiempo y la energía del equipo. Ayúdame a diseñar el proceso de triage de los deals del pipeline: cómo identificar cuáles tienen probabilidad real de cerrar en el trimestre, cómo reasignar el esfuerzo del equipo hacia las oportunidades de mayor probabilidad y cómo tener la conversación honesta con el vendedor sobre cuáles van al siguiente trimestre.

MOTIVAR SIN CREAR PÁNICO
La presión del cierre puede motivar o paralizar dependiendo de cómo la lidere el manager. Ayúdame a encontrar el tono correcto para los últimos días del trimestre: cómo transmitir urgencia sin crear pánico, cómo celebrar los cierres de manera que energicen al equipo y cómo gestionar el momento cuando está claro que el trimestre no se va a alcanzar.

**LIDERAZGO EN LOS PERÍODOS DE BAJO RENDIMIENTO:**

El mayor test del liderazgo comercial no es liderar cuando todo va bien sino cuando el equipo lleva dos trimestres sin alcanzar la cuota. Ayúdame a liderar estos períodos sin perder al equipo:

DIAGNÓSTICO HONESTO DEL PROBLEMA
Antes de cambiar el approach, hay que entender exactamente dónde está el problema: ¿es el pipeline (actividad insuficiente), la tasa de conversión (habilidad de venta), el ciclo (proceso de compra del cliente), el producto (no competitivo en el mercado) o el target (estamos yendo a los clientes equivocados)? Dame el proceso de diagnóstico que separa los problemas que puede resolver el equipo de los que requieren cambios estructurales.

MANTENER LA MORAL SIN MENTIR
En los períodos de bajo rendimiento, los vendedores necesitan esperanza y dirección, pero la esperanza falsa destruye la credibilidad del líder. Ayúdame a comunicar con honestidad la situación mientras mantengo la moral del equipo: qué decir, qué no decir y cómo transmitir que hay un camino para salir de la situación.

**CONVERSACIONES DIFÍCILES QUE LOS MANAGERS EVITAN:**

LA CONVERSACIÓN DE BAJO RENDIMIENTO SOSTENIDO
La conversación más difícil en el liderazgo comercial es la del vendedor que lleva tres trimestres sin alcanzar cuota. Ayúdame a tener esta conversación de manera directa, compasiva y con un plan de acción claro: cómo preparar la conversación, qué decir exactamente, cómo establecer las expectativas del período de mejora y cuándo tomar la decisión de que la persona no es la correcta para el rol.

EL VENDEDOR QUE ALCANZA CUOTA PERO DESTRUYE EL EQUIPO
El caso más complicado del liderazgo comercial es el vendedor de alto rendimiento individual que tiene comportamientos que dañan al equipo: no comparte información, compite con sus colegas en lugar de colaborar, no respeta los procesos. Ayúdame a gestionar este perfil: cuándo los resultados justifican tolerar los comportamientos y cuándo no, y cómo tener la conversación sobre el impacto de su comportamiento.

EL VETERANO QUE SE HA ACOMODADO
El vendedor senior que lleva años en la empresa, conoce a todos los clientes, pero ya no tiene el hambre de los primeros años y está operando por debajo de su potencial. Ayúdame a tener la conversación que reactiva al veterano sin que se sienta amenazado: cómo apelar a su orgullo profesional, qué nuevos retos ofrecerle y cómo fijar expectativas de rendimiento con alguien que tiene mucho más poder informal que el manager.

Dame el manual completo del liderazgo comercial bajo presión que me prepare para los momentos más difíciles del rol.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Liderazgo de equipos de ventas bajo presión de cuota y conversaciones difíciles',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Liderazgo de producto sin autoridad: influir sin línea directa',
                'description'       => 'Desarrolla las habilidades de influencia, alineación y gestión de stakeholders que necesita un Product Manager para liderar sin autoridad jerárquica sobre ingeniería, diseño y negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Senior Product Manager o Director de Producto con experiencia ejerciendo liderazgo en organizaciones donde el PM tiene responsabilidad total sobre los resultados pero autoridad formal sobre nadie. Quiero desarrollar las habilidades para liderar efectivamente un equipo multidisciplinar (ingeniería, diseño, datos, marketing, ventas) sin tener autoridad jerárquica sobre ninguno de ellos.

**Preguntas iniciales:**
1. ¿Con qué disciplinas trabajas más estrechamente y dónde encuentras mayor resistencia?
2. ¿Cuál es el mayor reto de influencia: que el equipo de ingeniería rechaza las prioridades, que diseño no se alinea con la visión, o que el negocio interfiere constantemente con el roadmap?
3. ¿El equipo tiene una cultura de respeto al rol de producto o el PM es visto como "el que pone post-its"?
4. ¿Hay alguna persona específica cuya resistencia está limitando el impacto del equipo?

**LA BASE DE LA INFLUENCIA SIN AUTORIDAD:**

La influencia sin autoridad no se improvisa; se construye sistemáticamente a lo largo del tiempo a través de la credibilidad, la consistencia y las relaciones. Ayúdame a construir esta base:

CREDIBILIDAD TÉCNICA CON INGENIERÍA
Los ingenieros respetan al PM que entiende las implicaciones técnicas de sus decisiones. No necesito saber programar, pero sí necesito entender los trade-offs técnicos, los costes de la deuda técnica y el impacto de los plazos poco realistas en la calidad del código. Dame el programa de desarrollo de "technical literacy" para PMs que construye credibilidad con el equipo de ingeniería.

CREDIBILIDAD DE USUARIO CON DISEÑO
Los diseñadores respetan al PM que trae evidencia del usuario, no preferencias personales. Ayúdame a construir el sistema de investigación de usuarios que me permite llegar a las reuniones de diseño con datos, no con opiniones, y que hace que el diseñador vea al PM como un aliado en la defensa del usuario.

CREDIBILIDAD DE NEGOCIO CON LOS STAKEHOLDERS
Los stakeholders de negocio (ventas, marketing, el CEO) respetan al PM que entiende cómo las decisiones de producto impactan en los objetivos de negocio. Dame el framework para conectar cada decisión de roadmap con los objetivos de negocio de manera que los stakeholders vean al PM como alguien que piensa en el negocio, no solo en las features.

**TÉCNICAS DE INFLUENCIA:**

CONSTRUIR COALICIONES ANTES DE LAS REUNIONES
Las reuniones son para validar las decisiones, no para tomarlas. El PM que llega a la reunión de priorización habiendo alineado individualmente a los stakeholders clave tiene una tasa de éxito mucho mayor que el que intenta construir el consenso en la sala. Ayúdame a diseñar el proceso de alineación previa: con quién hablar primero, qué preguntarles y cómo construir la coalición que hace que la decisión en la reunión sea previsible.

EL USO ESTRATÉGICO DE LOS DATOS
Los datos son el arma más poderosa del PM sin autoridad. Aprende a usar los datos de manera estratégica: cómo seleccionar las métricas que apoyan la decisión correcta, cómo presentar la evidencia de manera que sea difícil de ignorar y cómo manejar la situación cuando los datos apuntan en una dirección que los stakeholders no quieren seguir.

**PERSONAS DIFÍCILES EN EL CONTEXTO DE PRODUCTO:**

EL INGENIERO SENIOR QUE REESCRIBE EL ALCANCE
El PM más frustrado es el que acuerda un alcance con el equipo en la planificación del sprint y lo ve modificado unilateralmente durante la ejecución porque el ingeniero senior ha encontrado "una manera mejor de hacerlo". Ayúdame a gestionar esta situación: cómo tener la conversación sobre el impacto del scope creep, cómo establecer el proceso de cambio de alcance y cómo mantener la relación con el ingeniero mientras fijas los límites.

EL STAKEHOLDER QUE BYPASEA AL PM
El directivo que va directamente al equipo de ingeniería con peticiones de features sin pasar por el PM destruye la autoridad del rol de producto. Ayúdame a gestionar este escenario: cómo hablar con el stakeholder sobre el impacto de este comportamiento, cómo involucrar a mi manager si es necesario y cómo crear el sistema de gestión de peticiones que hace que bypasear al PM sea más difícil.

EL DISEÑADOR QUE DISEÑA LO QUE QUIERE
El diseñador que trata el brief del PM como una sugerencia y que diseña soluciones que no responden al problema definido. Ayúdame a manejar esta situación con respeto por la creatividad del diseñador pero con claridad sobre el problema que hay que resolver: cómo dar feedback sobre el trabajo de diseño desde el problema del usuario, no desde la preferencia personal.

Dame el sistema completo de liderazgo e influencia sin autoridad para Product Managers que trabajan en organizaciones matriciales o de squads.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Liderazgo e influencia sin autoridad jerárquica para Product Managers',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de personas difíciles: conversaciones que otros evitan',
                'description'       => 'Desarrolla el marco y las habilidades para tener las conversaciones difíciles que más temen los profesionales de RRHH: el empleado que destruye la cultura, el manager tóxico y el talento que se niega a cambiar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un HR Business Partner o Director de RRHH con más de quince años de experiencia gestionando situaciones de personas complejas: conversaciones de bajo rendimiento, gestión de conflictos, procesos de salida y reestructuraciones. Quiero desarrollar la habilidad y la confianza para tener las conversaciones difíciles que la mayoría de los profesionales de RRHH y managers evitan hasta que el problema se vuelve irreversible.

**Preguntas iniciales:**
1. ¿Cuál es la conversación difícil específica que necesitas tener o que tienes que preparar a un manager para tener?
2. ¿Cuál es el principal bloqueante para tener estas conversaciones: el miedo al conflicto, la falta de habilidad para articular el problema, la incertidumbre legal o la relación personal con la persona?
3. ¿Hay consecuencias claras definidas si el comportamiento o el rendimiento no cambia, o la conversación es más un "aviso sin dientes"?
4. ¿La organización tiene una cultura que apoya las conversaciones directas o una cultura donde el conflicto se evita sistémicamente?

**LOS PRINCIPIOS DE LAS CONVERSACIONES DIFÍCILES EFECTIVAS:**

Las conversaciones difíciles que funcionan comparten características comunes: están preparadas, son específicas, son bidireccionales y tienen consecuencias claras. Las que no funcionan son genéricas, son monólogos, se basan en percepciones en lugar de comportamientos observables y no tienen seguimiento. Ayúdame a construir el framework:

PREPARACIÓN: EL 80% DEL ÉXITO
La mayor diferencia entre una conversación difícil que resuelve el problema y una que lo empeora está en la preparación. Dame el checklist de preparación para cualquier conversación difícil: cómo documentar los comportamientos específicos (qué pasó, cuándo, con qué impacto), cómo distinguir el comportamiento observable de la interpretación, cómo anticipar las reacciones defensivas y cómo definir el resultado que busco de la conversación.

**LOS ARQUETIPOS MÁS DIFÍCILES:**

EL EMPLEADO QUE DESTRUYE LA CULTURA
El empleado de alto rendimiento que tiene comportamientos que dañan sistemáticamente al equipo: habla mal de sus colegas, sabotea el trabajo de otros, crea un ambiente de miedo. La dificultad de esta conversación es que el comportamiento es difuso y la persona lo negarás todo. Ayúdame a preparar y tener esta conversación: cómo documentar el impacto cultural con evidencia concreta, cómo articular el problema sin que parezca una opinión personal y cómo establecer las expectativas de cambio con métricas observables.

EL MANAGER TÓXICO
El manager que tiene un equipo de alto rendimiento en números pero un equipo desmotivado, con alta rotación y quejas de ambiente. La dificultad aquí es que los resultados protegen a la persona y la organización no quiere perder los números. Ayúdame a tener la conversación con este manager: cómo presentar el coste real de la toxicidad (rotación, reclutamiento, productividad perdida), cómo establecer la expectativa de cambio en el estilo de liderazgo y cómo hacer seguimiento de comportamientos que son difíciles de medir.

EL TALENTO QUE SE NIEGA A CAMBIAR
El profesional muy valorado que lleva años haciendo las cosas de la misma manera y que resiste activamente los cambios que la organización necesita: la transformación digital, el trabajo en equipo en lugar del héroe individual, la transparencia en lugar del silo. Ayúdame a gestionar esta situación: cómo tener la conversación sobre la adaptabilidad como competencia crítica, cómo hacer que la persona entienda el riesgo para su futuro en la organización y cómo darle un camino de adaptación que no le haga sentir que sus años de experiencia no valen nada.

**CONVERSACIONES DE CONSECUENCIAS:**

EL PLAN DE MEJORA DE RENDIMIENTO (PIP)
El PIP bien gestionado es una herramienta de desarrollo genuino; el PIP mal gestionado es un proceso de salida disfrazado que daña la confianza en RRHH. Ayúdame a diseñar un PIP que sea justo, específico, medible y que dé a la persona una oportunidad real de mejorar: cómo establecer los objetivos del período, cómo hacer el seguimiento semanal y cómo gestionar el final del período (mejora o salida).

LA CONVERSACIÓN DE SALIDA INVOLUNTARIA
La conversación más difícil de RRHH es comunicar a una persona que su relación laboral termina. Ayúdame a prepararla: qué decir en los primeros dos minutos, cómo gestionar las reacciones emocionales (llanto, ira, negación), qué información dar y qué no dar en esa reunión y cómo cerrar la conversación con dignidad para la persona.

Dame el sistema completo para gestionar personas difíciles y tener las conversaciones que transforman los problemas de personas en oportunidades de desarrollo organizacional.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Framework para conversaciones difíciles de RRHH: bajo rendimiento, toxicidad y salidas',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Liderazgo financiero: comunicar malas noticias a la dirección',
                'description'       => 'Desarrolla las habilidades para presentar resultados negativos, desviaciones de presupuesto y proyecciones adversas a la dirección de manera que genere confianza y oriente hacia soluciones.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO o Director Financiero con experiencia comunicando resultados adversos, desviaciones presupuestarias y proyecciones negativas a CEOs, Consejos de Administración e inversores. Quiero desarrollar las habilidades para comunicar las malas noticias financieras de manera que mantenga la credibilidad, genere confianza y oriente la conversación hacia las soluciones.

**Preguntas iniciales:**
1. ¿Cuál es la mala noticia financiera específica que necesitas comunicar: desviación de presupuesto, miss de forecast, deterioro de márgenes, necesidad de financiación adicional o revisión a la baja de las proyecciones?
2. ¿A quién se la comunicarás: al CEO, al Consejo, a los inversores o a los directores de las áreas?
3. ¿Tenéis ya un plan de acción para corregir la situación o todavía estáis en diagnóstico?
4. ¿La organización tiene una cultura de transparencia financiera o las malas noticias se han ocultado o minimizado en el pasado?

**LOS PRINCIPIOS DE LA COMUNICACIÓN FINANCIERA ADVERSA:**

La peor manera de comunicar una mala noticia financiera es tarde, incompleta y sin soluciones. La mejor manera es temprana, completa y orientada a la acción. Ayúdame a construir el framework:

LA VELOCIDAD DE LA COMUNICACIÓN
Las malas noticias financieras se deben comunicar en cuanto se tienen con suficiente certeza para ser accionables. El retraso destruye la confianza más que la propia mala noticia. Ayúdame a calibrar el umbral de certeza para comunicar: cuándo es demasiado pronto (incertidumbre que genera alarma innecesaria), cuándo es tarde (el receptor podría haber tomado decisiones con la información) y cuál es el formato correcto para el nivel de certeza.

**EL FRAMEWORK SOS: SITUACIÓN, ORIGEN, SOLUCIÓN:**

SITUACIÓN: LA MALA NOTICIA CON CLARIDAD Y PRECISIÓN
El primer error al comunicar malas noticias es enterrarlas en datos. El primero o segundo slide debe comunicar claramente la mala noticia: qué ha pasado, en qué magnitud y cuál es el impacto en los objetivos de la organización. Ayúdame a redactar el mensaje de apertura de una comunicación de mala noticia financiera que sea claro, honesto y que no genere más alarma de la necesaria.

ORIGEN: EL DIAGNÓSTICO HONESTO
Después de la mala noticia, el receptor quiere entender por qué ha pasado. El diagnóstico tiene que ser honesto sobre qué era previsible (y por qué no se anticipó) y qué fue genuinamente imprevisible. El error más común es atribuir todo a factores externos para evitar la responsabilidad. Ayúdame a construir el diagnóstico honesto que asume la responsabilidad apropiada sin generar una narrativa de culpa paralizante.

SOLUCIÓN: EL PLAN DE ACCIÓN CON OPCIONES
La tercera parte de la comunicación es la más importante: qué hacemos ahora. Presenta siempre dos o tres opciones con sus trade-offs, no una sola solución. Ayúdame a estructurar las opciones de respuesta a la mala noticia financiera: cómo presentar cada opción con sus ventajas, desventajas e implicaciones en el medio plazo.

**GESTIONAR LAS REACCIONES:**

EL CEO QUE SE PONE EN MODO ATAQUE
Algunos CEOs reaccionan a las malas noticias con ira, buscando culpables y exigiendo respuestas inmediatas. Ayúdame a mantener la calma y la dirección en esta situación: cómo responder a las preguntas bajo presión sin comprometer información que todavía no tengo, cómo redirigir la conversación hacia las soluciones y cómo gestionar el momento sin que la reunión termine con reproches improductivos.

EL CONSEJO QUE PIERDE LA CONFIANZA
Si la mala noticia es la segunda o la tercera consecutiva, el Consejo puede empezar a cuestionar la capacidad del equipo directivo. Ayúdame a manejar esta situación: cómo recuperar la credibilidad, qué cambios en el sistema de reporting y forecasting muestran que hemos aprendido y cómo gestionar la conversación sobre la gobernanza del equipo financiero.

**PERSONAS DIFÍCILES EN EL CONTEXTO FINANCIERO:**

EL DIRECTOR DE ÁREA QUE OCULTA LAS DESVIACIONES
El manager de un área de negocio que sabe que está desviado del presupuesto pero que retrasa la comunicación al área financiera. Ayúdame a gestionar esta persona difícil: cómo tener la conversación sobre el impacto de la falta de transparencia, cómo establecer los sistemas de reporting que hacen imposible ocultar las desviaciones y cómo crear la cultura de transparencia financiera que hace que comunicar las malas noticias sea la norma.

Dame el sistema completo para comunicar malas noticias financieras con credibilidad, confianza y orientación a la acción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Comunicación de resultados financieros adversos a dirección e inversores',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Liderazgo en el despacho: gestionar equipos de abogados junior',
                'description'       => 'Desarrolla las habilidades para liderar, motivar y retener a los abogados junior y associates del despacho, con sistemas de feedback, desarrollo y gestión de la carga de trabajo que reducen la rotación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un socio de un despacho de abogados o Director Legal con experiencia liderando equipos de abogados junior, associates y paralegales en entornos de alta exigencia y alto volumen de trabajo. Quiero desarrollar las habilidades para liderar a mi equipo de manera que mantenga el rendimiento, reduzca la rotación y construya el pipeline de talento que el despacho necesita para crecer.

**Preguntas iniciales:**
1. ¿Cuántos abogados junior o associates gestiona y en qué áreas de práctica?
2. ¿Cuál es el mayor reto de liderazgo: la alta rotación del talento junior, la dificultad para dar feedback constructivo, la gestión de la carga de trabajo o el desarrollo de las habilidades client-facing?
3. ¿Cuál es la cultura del despacho respecto al feedback: se da regularmente o solo en la evaluación anual?
4. ¿Los associates tienen visibilidad sobre su progresión hacia la asociación o la carrera es opaca?

**EL LIDERAZGO EN EL DESPACHO: UN CONTEXTO ÚNICO:**

Los despachos de abogados tienen una cultura de liderazgo muy específica donde el socio es simultáneamente el referente técnico, el generador de negocio y el manager del equipo. Esta multiplicidad de roles hace que el liderazgo de personas sea frecuentemente la competencia menos desarrollada. Ayúdame a desarrollarla:

EL FEEDBACK TÉCNICO EN EL DERECHO
El feedback legal tiene características únicas: es muy técnico, puede tener implicaciones para el cliente y para el despacho, y debe ser dado con rapidez porque el trabajo no se puede retrasar. Ayúdame a diseñar el sistema de feedback técnico que eleva las habilidades del equipo junior: el feedback en el documento (cómo hacer los comentarios que enseñan, no solo que corrigen), el debriefing post-tarea y la revisión anual de competencias técnicas.

**GESTIÓN DE LA CARGA DE TRABAJO:**

El mayor destructor de talento en los despachos es la gestión caótica de la carga de trabajo: proyectos que llegan sin previo aviso, horas inhumanas sin reconocimiento y senior que distribuyen el trabajo sin visibilidad sobre la capacidad del equipo. Ayúdame a construir el sistema de gestión de la carga:

VISIBILIDAD DE LA CAPACIDAD
Dame el diseño del sistema que da visibilidad sobre la carga de trabajo de cada miembro del equipo: cómo hacer el tracking del tiempo sin que sea burocrático, cómo tener la conversación sobre la capacidad antes de asignar trabajo nuevo y cómo gestionar los picos de trabajo inevitable sin destruir el bienestar del equipo.

LA CONVERSACIÓN SOBRE EL BIENESTAR
El abogado junior que está al límite de su capacidad raramente lo comunica por miedo a parecer incompetente o poco comprometido. Ayúdame a crear el ambiente donde los associates pueden decir "estoy al límite" sin consecuencias: cómo preguntar activamente en lugar de esperar que lo comuniquen y cómo gestionar la situación cuando alguien está sobrecargado.

**DESARROLLO Y RETENCIÓN DEL TALENTO LEGAL:**

EL PLAN DE DESARROLLO DEL ASSOCIATE
Los mejores associates se van a los dos o tres años si no ven un camino claro hacia la asociación o hacia el siguiente nivel de su carrera. Ayúdame a diseñar el plan de desarrollo del associate que retiene al talento: las competencias que necesita desarrollar para cada nivel, los proyectos que le dan la exposición correcta, el mentoring del socio y la transparencia sobre los criterios de promoción.

EL DEVELOPMENT HACIA CLIENT-FACING
La transición de abogado técnico a abogado client-facing es el mayor salto de la carrera legal y el que más associates fracasan. Ayúdame a diseñar el programa de desarrollo de habilidades client-facing: cómo involucrar al associate en las reuniones de cliente de manera progresiva, cómo darle feedback sobre su comunicación con clientes y cómo transferir gradualmente la relación con el cliente.

**PERSONAS DIFÍCILES EN EL DESPACHO:**

EL ASSOCIATE BRILLANTE CON ACTITUD DE ESTRELLA
El abogado junior de talento excepcional que sabe que es bueno y que tiene comportamientos que dañan al equipo: no comparte el trabajo de investigación, compite con los otros associates en lugar de colaborar y tiene actitudes que hacen difícil trabajar con él. Ayúdame a gestionar este perfil: cómo tener la conversación sobre el impacto de su comportamiento sin perder a un talento que el despacho necesita.

EL SOCIO QUE NO DA FEEDBACK
En muchos despachos, el mayor obstáculo para el desarrollo de los associates no es la falta de talento sino la falta de feedback de los socios. Si soy un socio que históricamente no ha dado feedback regular, ayúdame a cambiar este hábito: cómo empezar a dar feedback de manera que no sea incómodo para mí y que sea útil para el associate.

Dame el sistema completo de liderazgo para despachos de abogados que retiene al talento junior y construye el pipeline de futuros socios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Liderazgo y retención de talento junior en despachos de abogados',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Liderazgo en customer success: motivar al equipo en cuentas difíciles',
                'description'       => 'Desarrolla las habilidades para liderar a tu equipo de CS cuando las cuentas se ponen difíciles: el cliente que amenaza con no renovar, el CSM quemado y las conversaciones de escalación que definen la relación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Customer Success o VP de CS con experiencia liderando equipos de customer success en empresas SaaS B2B donde el churn es una amenaza constante y las cuentas difíciles ponen a prueba tanto las habilidades de los CSMs como las del liderazgo. Quiero desarrollar las habilidades para liderar a mi equipo en los momentos más difíciles: cuando una cuenta estratégica está en riesgo, cuando el CSM está quemado y cuando la escalación es inevitable.

**Preguntas iniciales:**
1. ¿Cuántos CSMs gestiona y cuál es el modelo de atención (high touch, tech touch o mixto)?
2. ¿Cuál es el mayor reto de liderazgo: la motivación del equipo ante el churn, la gestión de las escalaciones o el desarrollo de las habilidades de los CSMs?
3. ¿Cuál es la tasa de rotación del equipo de CS y cuál es la causa principal de salida?
4. ¿El equipo tiene claridad sobre lo que pueden y no pueden prometer al cliente, o hay ambigüedad que genera conflictos con el producto y la ingeniería?

**LIDERAZGO CUANDO UNA CUENTA ESTRATÉGICA ESTÁ EN RIESGO:**

La prueba de fuego del liderazgo en CS es el momento en que una cuenta grande y estratégica amenaza con no renovar. En este momento, el líder tiene que simultáneamente gestionar al cliente, al CSM, a los stakeholders internos y la tensión emocional del equipo. Ayúdame a navegar esta situación:

EL TRIAGE DE LA CUENTA EN RIESGO
Cuando llega la señal de riesgo (el cliente cancela la QBR, el sponsor cambia, los tickets de soporte aumentan o el uso del producto cae), el primer paso es el diagnóstico: ¿qué probabilidad real de churn hay y cuál es la causa raíz? Ayúdame a diseñar el proceso de triage de cuenta en riesgo: las preguntas que el CSM tiene que responder, los datos que hay que revisar y la decisión sobre qué nivel de intervención es necesaria.

LA INTERVENCIÓN DEL LIDERAZGO
¿Cuándo debe el manager de CS involucrarse directamente con el cliente y cuándo debe dejar que el CSM maneje la situación? Ayúdame a definir los criterios de escalación hacia el liderazgo y el protocolo de intervención: cómo el manager entra en la cuenta sin hacer que el CSM sienta que le están quitando la responsabilidad, cómo coordinar el plan de recuperación y cómo gestionar las expectativas internas del CEO y de ventas.

**LIDERAZGO DEL CSM QUEMADO:**

El churn emocional del equipo de CS es una de las causas más frecuentes de rotación en el sector. Los CSMs que llevan meses gestionando cuentas difíciles, soportando el estrés del churn y sintiendo que el producto no da lo que prometió se queman. Ayúdame a identificar y gestionar el burnout del equipo:

LAS SEÑALES DE ALERTA DEL BURNOUT EN CS
Los CSMs quemados muestran señales tempranas que un líder atento puede identificar: respuestas más cortas en los meetings del equipo, mayor reactividad y menor proactividad en sus cuentas, queja sistemática sobre el producto o el equipo de soporte y disminución en la calidad de las QBRs. Ayúdame a diseñar el sistema de detección temprana del burnout en el equipo de CS.

LA CONVERSACIÓN DE RECUPERACIÓN
Cuando un CSM está quemado, la conversación correcta no es sobre el rendimiento; es sobre la causa del desgaste y sobre lo que puede cambiar. Ayúdame a tener esta conversación: cómo crear el espacio para que el CSM sea honesto sobre cómo se siente, cómo distinguir el burnout reversible del que requiere un cambio de rol y qué palancas tiene el manager para aliviar la situación.

**PERSONAS DIFÍCILES EN CUSTOMER SUCCESS:**

EL CLIENTE QUE AMENAZA CONSTANTEMENTE CON IRSE
El cliente que en cada conversación difícil saca la carta del churn para conseguir descuentos, funcionalidades o tratamiento especial. Ayúdame a gestionar este arquetipo de cliente difícil y a entrenar al CSM para que no entre en pánico ante esta táctica: cómo distinguir la amenaza real del churn de la táctica de negociación, cómo mantener la firmeza sin deteriorar la relación y cómo gestionar la situación internamente cuando hay presión para ceder.

EL CSM QUE PROMETE LO QUE NO PUEDE CUMPLIR
El CSM que en su afán de salvar una cuenta o de cerrar una expansión promete al cliente funcionalidades en desarrollo, plazos que ingeniería no ha comprometido o niveles de servicio que soporte no puede mantener. Ayúdame a gestionar este patrón de comportamiento: cómo tener la conversación sobre el impacto de las promesas no cumplidas en la confianza del cliente y en la relación del equipo de CS con los otros equipos, y cómo establecer el sistema que previene estas situaciones.

Dame el manual completo de liderazgo en customer success para los momentos más difíciles del rol, desde la cuenta en riesgo hasta el equipo quemado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Liderazgo de equipos de CS en situaciones de alto estrés: cuentas en riesgo y burnout',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Liderazgo sin equipo: influir en clientes y colaboradores como freelance',
                'description'       => 'Desarrolla las habilidades de influencia, gestión de expectativas y liderazgo de proyectos que necesita el freelance para dirigir a clientes, subcontratistas y colaboradores sin autoridad formal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor independiente o freelance senior con más de diez años de experiencia liderando proyectos complejos sin un equipo propio: gestionando clientes exigentes, coordinando colaboradores y subcontratistas, y ejerciendo influencia sin ninguna autoridad formal. Quiero desarrollar las habilidades de liderazgo que me permitan ejecutar proyectos de mayor complejidad, gestionar a los clientes difíciles y construir el tipo de relaciones profesionales que generan referencias y trabajo recurrente.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad como freelance y el tipo de proyectos que habitualmente gestionas?
2. ¿Cuál es el mayor reto de liderazgo: gestionar las expectativas del cliente, coordinar a los colaboradores y subcontratistas, o gestionar el scope creep?
3. ¿Has tenido proyectos que se salieron de control: plazos incumplidos, clientes insatisfechos, colaboradores que no entregaron? ¿Qué pasó?
4. ¿Tienes una red de colaboradores de confianza o dependes de encontrar nuevos colaboradores en cada proyecto?

**LIDERAZGO DEL CLIENTE:**

El cliente es simultáneamente tu jefe, tu patrocinador y tu mayor riesgo. Liderarlo significa gestionar activamente sus expectativas, sus miedos y sus comportamientos para que el proyecto tenga éxito. La mayoría de los freelances gestionan reactivamente al cliente; los mejores lo lideran proactivamente.

ESTABLECER LA RELACIÓN CORRECTA DESDE EL PRINCIPIO
La dinámica de la relación con el cliente se establece en las primeras conversaciones. Si te posicionas como proveedor de servicios, el cliente te tratará como proveedor. Si te posicionas como asesor o socio, el cliente te tratará con el respeto que merece tu experiencia. Ayúdame a diseñar el onboarding del cliente que establece la relación correcta: el kick-off meeting, el documento de alineación de expectativas y el proceso de decisión que clarifica quién decide qué.

GESTIÓN PROACTIVA DE LAS EXPECTATIVAS
El mayor destructor de relaciones con clientes no es la mala calidad del trabajo; es la diferencia entre lo que el cliente esperaba y lo que recibió. Ayúdame a construir el sistema de gestión de expectativas que previene estas situaciones: la cadencia de comunicación, el formato de los updates de progreso, cómo comunicar los problemas antes de que el cliente los descubra y cómo gestionar el cambio de alcance sin que destruya la rentabilidad del proyecto.

**LIDERAZGO DE COLABORADORES Y SUBCONTRATISTAS:**

EL BRIEF QUE GARANTIZA EL RESULTADO
El mayor error del freelance que coordina a otros profesionales es dar briefs vagos y esperar resultados precisos. Aprende a escribir briefs que garantizan que el colaborador entiende exactamente qué necesitas: el problema que resuelve el trabajo, el resultado esperado con criterios de calidad específicos, el formato de entrega, los plazos intermedios y el contexto del cliente que le permite tomar las decisiones correctas sin consultarte a cada paso.

GESTIONAR LA CALIDAD SIN MICROGESTIONAR
Cómo revisar el trabajo de los colaboradores de manera que mantengas la calidad sin crear dependencia ni desmotivar: el checkpoint intermedio, el feedback que corrige sin destruir y el sistema de calibración de calidad que hace que cada colaborador entienda exactamente tu estándar.

**PERSONAS DIFÍCILES EN EL MUNDO FREELANCE:**

EL CLIENTE QUE CAMBIA DE OPINIÓN CONSTANTEMENTE
El cliente que aprueba el trabajo en una reunión y lo cuestiona completamente en la siguiente después de hablar con su equipo. Ayúdame a gestionar este cliente difícil: cómo documentar los acuerdos, cómo tener la conversación sobre el impacto del cambio constante de dirección en los plazos y la calidad, y cómo gestionar económicamente el trabajo adicional que genera.

EL COLABORADOR QUE NO ENTREGA A TIEMPO
El diseñador, el programador o el copywriter que sistemáticamente entrega tarde, poniendo en riesgo tus plazos con el cliente. Ayúdame a gestionar esta situación: cómo tener la conversación directa sobre el impacto de los retrasos en tu negocio y en la relación con el cliente, cuándo dejar de trabajar con alguien de tu red y cómo construir el sistema de buffers y checkpoints que hace que un retraso de un colaborador no llegue al cliente.

EL CLIENTE QUE NO PAGA A TIEMPO
El cliente con quien tienes una excelente relación de trabajo pero que sistemáticamente paga tarde las facturas. Ayúdame a gestionar esta situación manteniendo la relación: cómo tener la conversación sobre el pago sin que sea incómoda, qué sistemas establecer desde el principio (anticipo, hitos de pago) y cuándo la falta de pago es una señal de alerta sobre la salud del proyecto.

**LA RED DE INFLUENCIA DEL FREELANCE:**

El freelance de alto nivel construye una red de influencia que va más allá de sus clientes actuales: referenciadores, colaboradores de alto nivel, mentores y comunidades de práctica. Ayúdame a diseñar la estrategia de construcción de red de influencia que genera negocio sin que se sienta como networking forzado: las relaciones que cultivo activamente, la aportación de valor que las mantiene vivas y cómo convierto los proyectos exitosos en referencias activas.

Dame el sistema completo de liderazgo sin equipo para el freelance que quiere gestionar proyectos de mayor complejidad y construir relaciones profesionales de largo plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Liderazgo e influencia sin autoridad formal para freelancers y consultores independientes',
                'vote_score'        => 41,
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
