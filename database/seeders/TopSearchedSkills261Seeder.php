<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills261Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing para startups en fundraising: cómo posicionarse antes de la ronda',
                'description'       => 'Aprende a usar el marketing y la narrativa de marca como herramienta estratégica antes y durante un proceso de fundraising: cómo construir visibilidad, credibilidad y tracción de mercado que refuercen el pitch ante los inversores.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CMO con experiencia en startups que han pasado por varios procesos de fundraising (Pre-seed, Seed, Series A y B), con conocimiento de cómo la narrativa de marketing y la visibilidad de marca influyen en la percepción de los inversores y cómo el equipo de marketing puede contribuir activamente al proceso de captación de fondos. Quiero aprender a posicionar la empresa desde el marketing de manera que el proceso de fundraising sea más fluido, los inversores lleguen más warm y la narrativa de la empresa sea irresistible.

**Preguntas iniciales:**
1. ¿En qué ronda estás o te estás preparando (Pre-seed, Seed, Series A, B)?
2. ¿Cuál es la narrativa actual de tu empresa: el problema que resuelves, tu diferenciación y el mercado al que vas?
3. ¿Qué nivel de visibilidad tiene actualmente la empresa y los fundadores fuera de tu ecosistema inmediato?
4. ¿Con cuánta antelación tienes antes del inicio del proceso de fundraising activo?

**MARKETING Y FUNDRAISING: LA CONEXIÓN QUE SE IGNORA:**

POR QUÉ EL MARKETING IMPORTA EN EL FUNDRAISING
Los inversores no solo evalúan los números del negocio y el equipo; evalúan la narrativa. Una empresa que ha construido visibilidad en su mercado, que tiene thought leadership reconocido en su categoría y que puede demostrar tracción de mercado más allá de las métricas internas tiene una ventaja significativa en el proceso de fundraising. El marketing bien ejecutado convierte el proceso de fundraising de un proceso de venta (salir a convencer a inversores) en un proceso de inbound (los inversores llegan a ti porque han seguido tu historia). Ayúdame a entender cómo el marketing puede influir en la calidad y la velocidad del proceso de fundraising.

LA NARRATIVA DE LA EMPRESA: EL NÚCLEO DE TODO
La narrativa de la empresa es la historia que cuenta de manera coherente quién eres, qué problema resuelves, por qué ahora es el momento y por qué eres el equipo correcto para hacerlo. Esta narrativa debe estar alineada entre el pitch deck, el website, los materiales de comunicación y la presencia pública de los fundadores. Las inconsistencias entre lo que dice el pitch deck y lo que transmite la comunicación pública generan ruido que complica el proceso de due diligence. Ayúdame a construir o refinar la narrativa de mi empresa para que sea coherente, memorable y convincente en todos los puntos de contacto.

**VISIBILIDAD Y THOUGHT LEADERSHIP ANTES DE LA RONDA:**

EL FOUNDER COMO CARA PÚBLICA DEL NEGOCIO
En las etapas tempranas de una startup, el founder es la cara de la empresa. La presencia pública del founder en LinkedIn, en eventos del sector, en medios especializados y en las comunidades relevantes construye credibilidad e influye directamente en cómo perciben los inversores la empresa. Un fundador con thought leadership reconocido llega a las conversaciones con inversores con una ventaja: el inversor ya ha consumido su visión, ya ha visto las pruebas de su conocimiento del mercado y ya tiene una opinión formada. Ayúdame a construir la estrategia de presencia pública del fundador en los seis meses previos al proceso de fundraising: los canales, el tipo de contenido, la cadencia y los objetivos de visibilidad.

PR Y MEDIOS ESPECIALIZADOS
Los medios especializados (TechCrunch, Sifted, El Referente, Expansión en el caso de España) siguen siendo un canal de validación importante para los inversores. Un artículo sobre la empresa en un medio relevante no es solo awareness; es una señal de que la empresa existe y es noticiable para los periodistas que cubren el sector. Ayúdame a diseñar la estrategia de PR previa al fundraising: qué historia tiene la empresa que merece ser cubierta, qué periodistas son los más relevantes para mi sector, cómo construir la relación con ellos antes de necesitar la cobertura y cuándo es el momento correcto para hacer un anuncio que genere cobertura.

**TRACCIÓN DE MERCADO COMO ARGUMENTO DE INVERSIÓN:**

LOS SEÑALES DE TRACCIÓN QUE HABLAN ANTES QUE LOS FUNDADORES
Los inversores más sofisticados hacen su propia investigación antes de la primera reunión: buscan la empresa en Google, revisan el engagement en LinkedIn, miran si el producto tiene reseñas en G2 o Capterra, buscan menciones en Twitter. La tracción que encuentran en esa investigación previa influye significativamente en cómo llegan a la reunión. Ayúdame a diseñar la estrategia de marketing que construye las señales de tracción correctas en los canales donde los inversores buscan: las reseñas de clientes, la presencia en comunidades relevantes, el contenido que muestra el crecimiento y los testimonios de clientes reales.

CASE STUDIES Y TESTIMONIOS COMO PRUEBA SOCIAL
Los case studies de clientes y los testimonios son una de las herramientas de marketing más directamente útiles en el proceso de fundraising: demuestran que el producto resuelve el problema real de clientes reales, cuantifican el valor entregado y dan credibilidad a las métricas que presenta el pitch deck. Ayúdame a diseñar el programa de case studies y testimonios previo al fundraising: qué clientes seleccionar, cómo estructurar el case study para que comunique el ROI de manera convincente y cómo usar estos materiales tanto en el proceso de marketing externo como en el contexto del fundraising.

**LA COORDINACIÓN MARKETING-FUNDRAISING:**

EL TIMING DE LAS ACCIONES DE MARKETING EN EL PROCESO DE FUNDRAISING
Las acciones de marketing tienen un timing específico en relación al proceso de fundraising. Tres a seis meses antes de la ronda: construir la narrativa, aumentar la visibilidad del founder y conseguir cobertura de medios. Durante el proceso activo: maximizar las señales de tracción, publicar case studies y mantener el ritmo de contenido que demuestra la salud del negocio. Después del cierre: el anuncio de la ronda como herramienta de marketing para atraer talento, clientes y partners. Ayúdame a diseñar el calendar de marketing alineado con el proceso de fundraising.

Dame el plan completo de marketing pre-fundraising para mi empresa, con la narrativa, la estrategia de visibilidad del founder, las acciones de PR y las señales de tracción que hacen el proceso de captación más efectivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de marketing y visibilidad de marca para reforzar el proceso de fundraising de una startup',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'CTO en el fundraising: qué preguntan los inversores sobre la arquitectura técnica',
                'description'       => 'Prepárate para las preguntas técnicas del due diligence de inversores: cómo comunicar las decisiones de arquitectura, la deuda técnica, la escalabilidad y el equipo de ingeniería de manera que refuerce la tesis de inversión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CTO que ha pasado por varios procesos de fundraising (Seed, Series A y B) y como asesor técnico de fondos de venture capital durante el due diligence de sus portfolio companies, con conocimiento profundo de las preguntas técnicas que hacen los inversores y cómo los CTOs más eficaces las responden para reforzar la tesis de inversión. Quiero prepararme para el proceso de due diligence técnico de mi próxima ronda de financiación.

**Preguntas iniciales:**
1. ¿En qué ronda estás (Seed, Series A, B)?
2. ¿Cuál es la arquitectura actual del sistema (monolítico, microservicios, serverless) y cuántos años lleva en producción?
3. ¿Cuáles son las áreas de mayor deuda técnica o fragilidad de la arquitectura actual que anticipas que van a ser señaladas en el due diligence?
4. ¿Cuántos ingenieros hay en el equipo actualmente y cómo está distribuido (frontend, backend, infra, data)?

**LO QUE LOS INVERSORES EVALÚAN EN EL DUE DILIGENCE TÉCNICO:**

QUÉ BUSCAN LOS INVERSORES EN EL ÁREA TÉCNICA
Los inversores hacen el due diligence técnico para responder a tres preguntas fundamentales: ¿puede la tecnología escalar con el negocio sin requerir una reescritura completa en los próximos dos o tres años?, ¿el equipo de ingeniería es suficientemente bueno para ejecutar la hoja de ruta?, y ¿los riesgos técnicos son manejables o son una amenaza existencial para el negocio? Las respuestas a estas preguntas determinan tanto si invierten como las condiciones de la inversión (algunos fondos condicionan el cierre de la ronda a cambios técnicos específicos). Ayúdame a evaluar mi empresa desde esta perspectiva: cuáles son los puntos fuertes que debo destacar y cuáles son las áreas de riesgo que debo saber explicar y contextualizar.

EL DUE DILIGENCE TÉCNICO: CÓMO SE HACE EN LA PRÁCTICA
El proceso de due diligence técnico varía según el fondo y la ronda, pero típicamente incluye: una entrevista técnica con el CTO sobre las decisiones de arquitectura y la estrategia técnica, un code review de partes del codebase por un asesor técnico externo del fondo, la revisión de las métricas de calidad del software (cobertura de tests, time to deploy, incident rate, MTTR), y conversaciones con miembros del equipo de ingeniería para evaluar la profundidad del equipo. Ayúdame a prepararme para cada uno de estos momentos del proceso de due diligence técnico.

**COMUNICAR LAS DECISIONES DE ARQUITECTURA:**

CÓMO EXPLICAR LA ARQUITECTURA SIN PERDERSE EN LOS DETALLES
El CTO que explica la arquitectura técnica a un inversor no técnico (o semi-técnico) comete frecuentemente uno de dos errores: va a un nivel de detalle excesivo que aburre y confunde al interlocutor, o es tan superficial que no transmite la sofisticación de las decisiones tomadas. La explicación ideal de la arquitectura a un inversor comunica: las decisiones fundamentales de diseño y por qué se tomaron (qué tradeoffs), cómo la arquitectura soporta los requerimientos actuales del negocio y cómo escala para la siguiente etapa, y cuáles son los riesgos técnicos conocidos y el plan para mitigarlos. Ayúdame a construir la narrativa de arquitectura para mi empresa que sea convincente para inversores técnicos y no técnicos.

DEFENDER LAS DECISIONES TÉCNICAS CON CONTEXTO
Los inversores van a cuestionar algunas de las decisiones técnicas: por qué un monolito en lugar de microservicios, por qué esta base de datos en lugar de otra, por qué este lenguaje de programación. La respuesta correcta no es defensiva; es contextual: las decisiones técnicas siempre se toman con la información disponible en ese momento, con los recursos disponibles y con los tradeoffs que tenían sentido en esa etapa. Ayúdame a construir los argumentos para las decisiones técnicas que anticipas que van a ser cuestionadas en el due diligence.

**GESTIONAR LA CONVERSACIÓN SOBRE DEUDA TÉCNICA:**

LA DEUDA TÉCNICA NO ES EL PROBLEMA; LA FALTA DE PLAN SÍ LO ES
Toda empresa tecnológica tiene deuda técnica. Lo que diferencia a los CTOs que generan confianza en el fundraising de los que generan dudas no es la ausencia de deuda técnica (los inversores no esperan eso) sino la claridad con la que el CTO entiende y gestiona la deuda técnica: qué deuda existe, cuál es su impacto en la velocidad del equipo y en la estabilidad del sistema, y cuál es el plan para reducirla de manera progresiva sin paralizar el desarrollo de nuevas features. Ayúdame a construir el mapa de deuda técnica de mi empresa y la narrativa para presentarlo a los inversores.

CÓMO HABLAR DE LOS INCIDENTES Y LA CONFIABILIDAD DEL SISTEMA
Los inversores van a preguntar sobre los incidentes del sistema: cuántos downtime has tenido, cómo los gestionas y cómo has mejorado la confiabilidad después de cada uno. La respuesta honesta sobre los incidentes (incluyendo los que fueron graves) y el aprendizaje que generaron transmite más madurez técnica que la afirmación de que nunca ha habido problemas. Ayúdame a preparar la respuesta sobre la confiabilidad del sistema y los incidentes históricos que refuerce la confianza en lugar de generarla.

**EL EQUIPO DE INGENIERÍA COMO ACTIVO:**

PRESENTAR EL EQUIPO TÉCNICO
Los inversores evalúan el equipo de ingeniería como parte del due diligence: la seniority media, la diversidad de perspectivas, la velocidad de entrega que demuestra el historial de commits y deploys, y la capacidad de escalar el equipo. Ayúdame a construir la presentación del equipo de ingeniería que destaca los elementos que más valoran los inversores: los backgrounds de las personas clave, la velocidad de delivery (métricas de DORA) y el plan de contratación para la siguiente etapa financiada por la ronda.

Dame el playbook completo de preparación del CTO para el fundraising: la narrativa de arquitectura, el plan de gestión de la deuda técnica y la presentación del equipo que refuerza la tesis de inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Preparación del CTO para el due diligence técnico en el fundraising: arquitectura, deuda técnica, equipo y métricas de ingeniería',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Pitch deck design: el diseño que hace que los inversores digan sí',
                'description'       => 'Aprende los principios de diseño visual y narrativa visual que hacen que un pitch deck sea memorable, convincente y profesional: la estructura, la jerarquía visual, el uso del color y la tipografía, y los errores de diseño que destruyen la credibilidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador especializado en pitch decks y materiales de fundraising con experiencia diseñando las presentaciones de startups que han levantado desde rondas Seed hasta Series C, con conocimiento de lo que hace que un pitch deck sea visualmente efectivo para los inversores y de los errores más comunes que cometen los equipos de startups al diseñar sus propias presentaciones. Quiero aprender a diseñar o refinar el pitch deck de mi empresa para que la presentación visual refuerce la narrativa y haga que los inversores recuerden nuestra historia.

**Preguntas iniciales:**
1. ¿Cuál es el estado actual del pitch deck: es un documento que has hecho tú o con PowerPoint básico, o tienes un diseño pero quieres mejorarlo?
2. ¿Cuál es la ronda y el tipo de inversor al que va dirigido (VCs generalistas, family offices, corporate VCs, business angels)?
3. ¿Cuáles son los slides que sientes que no están funcionando visualmente o que no comunican bien el mensaje?
4. ¿Tienes una identidad visual de la empresa (colores, tipografías, estilo visual) o el pitch deck debe construir también esa identidad?

**LOS PRINCIPIOS DEL DISEÑO DE PITCH DECKS:**

EL PITCH DECK NO ES UN DOCUMENTO: ES UNA PRESENTACIÓN
El error de diseño más común en los pitch decks es tratarlos como documentos: llenar cada slide con texto, explicaciones detalladas y tablas de datos. Un pitch deck es una presentación, y cada slide debe funcionar como un soporte visual para lo que el fundador está diciendo en ese momento, no como un documento autónomo que el inversor lee en silencio. La regla general: si tu slide puede entenderse completamente sin que nadie lo explique, tiene demasiado texto. Ayúdame a rediseñar los slides más densos de texto de mi deck para que funcionen como soporte visual de la presentación oral.

LA JERARQUÍA VISUAL: QUE EL OJO SEPA A DÓNDE IR
La jerarquía visual es la organización del contenido de un slide de manera que el ojo del inversor sepa exactamente qué mirar primero, qué mirar después y cuál es el mensaje principal de la slide. En un pitch deck, la jerarquía visual se construye con el tamaño tipográfico (el headline principal debe ser el más grande y el más visible), el peso de la fuente (negrita para lo más importante), el contraste de color (los elementos clave deben tener mayor contraste) y el espacio en blanco (que guía el ojo hacia los elementos importantes). Ayúdame a aplicar estos principios a los slides específicos de mi deck que tienen problemas de jerarquía.

EL USO DEL COLOR EN EL PITCH DECK
El color en un pitch deck tiene tres funciones: construir la identidad de marca de la empresa, guiar la atención del inversor hacia los elementos más importantes y crear coherencia visual a lo largo de toda la presentación. Los errores más comunes son el uso de demasiados colores (más de tres en la paleta principal), los colores que no tienen suficiente contraste con el fondo (que hacen el texto difícil de leer) y los colores que no están alineados con el posicionamiento de la empresa (un banco neodigital con colores de PowerPoint predeterminados). Ayúdame a definir la paleta de color correcta para mi pitch deck y a aplicarla de manera consistente.

**LA ESTRUCTURA VISUAL DEL PITCH DECK:**

LOS SLIDES QUE SIEMPRE IMPORTAN Y CÓMO DISEÑARLOS
Hay slides en un pitch deck que los inversores siempre evalúan con especial atención: el slide de tracción (donde las métricas deben ser visualmente impactantes y fáciles de procesar), el slide de mercado (donde el TAM, SAM y SOM deben comunicarse de manera visual y no solo numérica), el slide de producto (donde las capturas de pantalla o el diagrama de la propuesta de valor deben ser claros y atractivos) y el slide de equipo (donde las fotos y los logos de employers anteriores construyen credibilidad). Ayúdame a diseñar cada uno de estos slides críticos de manera que maximicen su impacto.

EL SLIDE DE TRACCIÓN: HACER QUE LOS NÚMEROS BRILLEN
El slide de tracción es frecuentemente el más importante del pitch deck para los inversores en etapas de growth. Los números de tracción deben presentarse de manera que sean inmediatamente comprensibles, que comuniquen la tendencia (no solo el nivel actual) y que impresionen visualmente. Un gráfico de crecimiento bien diseñado, con los hitos clave marcados y la proyección futura, comunica mucho más que una tabla de números. Ayúdame a diseñar el slide de tracción de mi empresa de manera que maximice el impacto visual de nuestros números de crecimiento.

**ERRORES DE DISEÑO QUE DESTRUYEN LA CREDIBILIDAD:**

LOS SLIDES QUE HACEN QUE LOS INVERSORES DESCONFÍEN
Hay errores de diseño en los pitch decks que generan una señal de alarma inmediata en los inversores: los templates gratuitos de Canva sin personalización (señal de que el equipo no ha invertido en la presentación), las imágenes de stock genéricas (señal de que no tienen activos propios), las fuentes inconsistentes entre slides (señal de descuido), los colores que no funcionan en modo oscuro o en proyectores (el deck no ha sido probado), y los gráficos con escalas manipuladas que hacen que el crecimiento parezca más impresionante de lo que es (señal de falta de honestidad). Ayúdame a auditar mi deck en busca de estos errores.

LAS DIFERENCIAS ENTRE EL DECK PARA ENVIAR Y EL DECK PARA PRESENTAR
El pitch deck tiene dos formatos con necesidades de diseño diferentes: el deck que se envía por email antes de la reunión (debe ser autoexplicativo, tener más texto de soporte y funcionar sin que nadie lo presente) y el deck que se usa en la presentación en directo (menos texto, más impacto visual, diseñado para complementar la voz del fundador). Ayúdame a diseñar ambas versiones de mi deck de manera eficiente, evitando tener que crear dos presentaciones desde cero.

Dame la auditoría visual completa de mi pitch deck con los cambios prioritarios de diseño y los principios que debo aplicar para que la presentación visual refuerce la narrativa de inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Principios de diseño visual para pitch decks que refuerzan la narrativa de fundraising y transmiten profesionalidad y credibilidad',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Fundraising como proceso de ventas: pipeline de inversores y cierre de ronda',
                'description'       => 'Aplica las disciplinas del proceso de ventas B2B al fundraising: cómo construir y gestionar el pipeline de inversores, cómo crear urgencia en el proceso, cómo manejar las objeciones y cómo cerrar la ronda con la máxima velocidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un founder que ha cerrado múltiples rondas de financiación (Seed, Series A y B) aplicando sistemáticamente las disciplinas del proceso de ventas al fundraising, y como asesor de otras startups en sus procesos de captación de fondos. Quiero aprender a gestionar el proceso de fundraising con la misma rigurosidad y sistemática con la que un equipo de ventas gestiona su pipeline de clientes, maximizando la velocidad del proceso y las condiciones de cierre.

**Preguntas iniciales:**
1. ¿En qué ronda estás (Pre-seed, Seed, Series A, B) y cuánto quieres levantar?
2. ¿Has pasado por algún proceso de fundraising anterior? Si es así, ¿cuáles fueron los mayores aprendizajes?
3. ¿Tienes ya una lista de inversores target identificados o estás en la fase de construcción del pipeline?
4. ¿Tienes un lead investor o un term sheet sobre la mesa, o estás en la fase inicial del proceso?

**EL FUNDRAISING COMO PROCESO DE VENTAS:**

LA MENTALIDAD CORRECTA: SELECCIONAR, NO ROGAR
El mayor error mental del fundador en el fundraising es tratar a los inversores como jueces que tienen que aprobar su proyecto. La mentalidad correcta es la del comercial de alto rendimiento que sabe el valor de lo que tiene, conoce a su cliente ideal y selecciona con quién quiere trabajar. Los fundadores que transmiten esta mentalidad en el proceso de fundraising negocian desde una posición de mayor fuerza y consiguen mejores condiciones. Ayúdame a calibrar mi mentalidad para el proceso de fundraising y a construir los argumentos que justifican por qué debería ser selectivo con los inversores.

EL ICP DEL INVERSOR: QUIÉN ES TU INVERSOR IDEAL
Igual que en ventas B2B se define el Ideal Customer Profile, en fundraising debes definir el perfil del inversor ideal para tu empresa en este momento: el estadio que cubre (Seed, Series A), el tamaño del cheque típico, el sector de especialización, el valor añadido más allá del capital (network, expertise operativo, acceso a clientes), la geografía de foco y el estilo de inversión (hands-on vs hands-off). Con este perfil claro, la construcción del pipeline de inversores target es mucho más eficiente. Ayúdame a definir el ICP del inversor para mi ronda actual y a construir la lista inicial de fondos y business angels que encajan con él.

**CONSTRUIR Y GESTIONAR EL PIPELINE DE INVERSORES:**

LA CONSTRUCCIÓN DEL PIPELINE
Un proceso de fundraising eficiente requiere un pipeline amplio en las primeras etapas (muchos más contactos de los que acabarán siendo conversaciones relevantes) y la disciplina de gestionar ese pipeline con la rigurosidad de un CRM de ventas. La construcción del pipeline de inversores se hace en varias capas: los inversores tier 1 (los que más quieres), tier 2 (muy buenos pero no los primeros) y tier 3 (sirven para practicar el pitch y generar los primeros term sheets que crean urgencia en los tier 1). Ayúdame a diseñar la estrategia de construcción de mi pipeline: el tamaño objetivo en cada tier, los canales de acceso (warm intros, LinkedIn, conferencias, AngelList) y la priorización.

EL CRM DEL FUNDRAISING
El pipeline de inversores debe gestionarse con la misma disciplina que un pipeline de ventas: un CRM simple (una hoja de cálculo o una herramienta como Notion, Airtable o incluso Pipedrive) que registra el estado de cada conversación, la próxima acción y la fecha, los términos discutidos hasta el momento y los next steps acordados. Sin este sistema, el fundador pierde el control del proceso y deja que sean los inversores los que marcan el ritmo. Ayúdame a diseñar el CRM del fundraising con las etapas correctas del pipeline y las métricas que me dicen si el proceso está avanzando a la velocidad adecuada.

**CREAR MOMENTUM Y URGENCIA:**

EL MOMENTUM EN EL FUNDRAISING
El fundraising tiene una dinámica de manada: los inversores prefieren invertir en rondas donde hay otros inversores interesados. La percepción de que hay competencia por conseguir una posición en la ronda es el mayor acelerador del proceso. El fundador debe gestionar activamente el timing del pipeline para que las conversaciones más avanzadas converjan en el mismo momento, creando la presión temporal que convierte el interés en compromisos. Ayúdame a diseñar la estrategia de timing del pipeline: cuándo hacer los primeros contactos con los tier 1, cómo gestionar el tempo de las conversaciones paralelas y cómo comunicar el momentum del proceso sin mentir sobre el estado real.

GESTIONAR LAS OBJECIONES DE LOS INVERSORES
Los inversores tienen objeciones recurrentes que el fundador debe saber anticipar y manejar: el mercado es demasiado pequeño, hay demasiada competencia, el team carece de experiencia, la tracción no es suficiente, la valoración es demasiado alta. La respuesta efectiva a estas objeciones no es defensiva; es preparada: el fundador que ha analizado cada objeción posible con anticipación y tiene el dato, la historia o el argumento que la neutraliza transmite confianza y preparación. Ayúdame a preparar las respuestas a las objeciones más frecuentes que anticipas en tu ronda.

**CERRAR LA RONDA:**

DEL TERM SHEET AL CIERRE
El primer term sheet es el evento más importante del proceso de fundraising: marca el inicio del proceso de cierre y activa la urgencia en todos los demás inversores del pipeline. Pero el camino del term sheet al cierre está lleno de riesgos: el inversor puede retirarse durante el due diligence, los términos pueden ser peores de lo esperado o el proceso puede alargarse indefinidamente. Ayúdame a entender cómo gestionar el proceso post-term sheet: la negociación de los términos del term sheet, la gestión del due diligence para que sea lo más rápido posible y cómo mantener la presión temporal en los otros inversores del pipeline mientras el lead completa su proceso.

Dame el playbook completo de fundraising como proceso de ventas: el pipeline de inversores, la gestión del CRM, la creación de momentum y la estrategia de cierre de la ronda.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Playbook de fundraising como proceso de ventas: pipeline de inversores, CRM, creación de momentum y cierre de ronda',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product story para inversores: del problema al market size con credibilidad',
                'description'       => 'Aprende a construir la narrativa de producto para inversores que conecta el problema del usuario con la oportunidad de mercado, demuestra la comprensión profunda del cliente y justifica el tamaño de mercado con credibilidad y rigor analítico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager con experiencia construyendo las narrativas de producto para procesos de fundraising en startups de diferentes sectores, con conocimiento de lo que los inversores buscan en la historia de producto y cómo el PM puede construir y refinar esa narrativa con la profundidad y la credibilidad que convence a los inversores más exigentes. Quiero aprender a construir la product story que transmite que entendemos el problema mejor que nadie, que nuestra solución es la correcta y que el mercado es suficientemente grande para justificar la inversión.

**Preguntas iniciales:**
1. ¿Cuál es el problema que resuelve tu producto y quién es el usuario que lo sufre?
2. ¿Cómo está posicionado el producto actualmente en el pitch deck: el problema, la solución, el diferencial?
3. ¿Cuál es la parte de la narrativa de producto que sientes que es más débil o que genera más preguntas de los inversores?
4. ¿En qué ronda estás y qué evidencias de comprensión del problema y del mercado tienes (entrevistas de usuarios, datos de uso, NPS, testimonios)?

**LOS ELEMENTOS DE UNA PRODUCT STORY CONVINCENTE:**

EL PROBLEMA: LA BASE DE TODO
El problema es el inicio de la product story y el elemento que más trabajo requiere para comunicar bien. Los inversores son escépticos sobre los problemas: ¿el problema es real o es el fundador que busca una solución para un problema que no existe?, ¿el problema es suficientemente doloroso como para que la gente pague para resolverlo?, ¿el problema es suficientemente frecuente como para que el mercado sea significativo? La descripción del problema en el pitch deck debe ser tan específica y vívida que el inversor lo entienda de manera visceral, no abstracta. Ayúdame a construir la descripción del problema de mi empresa de manera que sea concreta, memorable y urgente: la anécdota del usuario real que sufre el problema, los datos que cuantifican su impacto y la razón por la que este problema no ha sido resuelto hasta ahora.

EL INSIGHT: POR QUÉ NOSOTROS Y POR QUÉ AHORA
El insight es la comprensión del problema que solo tiene el equipo fundador y que justifica que vosotros sois los correctos para construir esta solución. El insight puede ser un cambio en el comportamiento del usuario que nadie más ha observado, una tecnología nueva que hace posible lo que antes era imposible, o una comprensión del mercado que viene de la experiencia propia del fundador. Ayúdame a identificar y articular el insight fundamental de mi empresa: qué vemos que otros no ven, por qué este es el momento correcto para esta solución y por qué nosotros somos el equipo que puede ejecutarla.

**LA OPORTUNIDAD DE MERCADO: MÁS ALLÁ DEL ESTUDIO DE MERCADO:**

EL ERROR DEL TAM RIDÍCULO
El slide de market size es uno de los más incomprendidos del pitch deck. El error más común es citar un TAM (Total Addressable Market) enorme de un estudio de mercado que no guarda ninguna relación con el negocio real que la empresa puede construir. Los inversores sofisticados ignoran los estudios de mercado genéricos y buscan la lógica bottom-up que demuestra que el fundador entiende su mercado de verdad. Ayúdame a construir el análisis de mercado bottom-up para mi empresa: cuántos usuarios potenciales hay que tengan el problema, cuánto están dispuestos a pagar y cuál es el mercado real al que puedo acceder en los próximos cinco años.

EL SAM Y EL SOM: LA PARTE DONDE SE GANA CREDIBILIDAD
Mientras el TAM (Total Addressable Market) solo requiere una estimación aproximada del universo total, el SAM (Serviceable Addressable Market, el mercado al que puedes acceder con tu modelo de distribución actual) y el SOM (Serviceable Obtainable Market, la cuota de mercado realista en el horizonte de la inversión) son donde el fundador demuestra su comprensión real del negocio. Ayúdame a construir los números de SAM y SOM con la lógica que los hace creíbles: las hipótesis de penetración, los canales de distribución y el timeline de crecimiento de mercado.

**LA NARRATIVA DE PRODUCTO: CONECTAR EL PROBLEMA CON LA SOLUCIÓN:**

EL DEMO O LA DESCRIPCIÓN DEL PRODUCTO
La descripción del producto en el pitch deck debe mostrar que la solución resuelve el problema de manera elegante, que está a un nivel de desarrollo que demuestra la capacidad de ejecución del equipo, y que la experiencia del usuario es lo suficientemente buena como para que los clientes quieran pagarlo. Ayúdame a diseñar el slide de producto de mi pitch deck: la captura de pantalla o el diagrama que mejor comunica la propuesta de valor, la explicación de los tres o cuatro features más importantes y cómo se conectan con el problema descrito anteriormente.

EL DIFERENCIAL: POR QUÉ NO PUEDE SER COPIADO
Los inversores siempre preguntan: ¿por qué no puede un competidor grande simplemente copiar esto? La respuesta debe ir más allá de "somos más rápidos"; debe articular los elementos de defensibilidad del negocio: el efecto de red, el switching cost, la propiedad intelectual, los datos que acumulas con cada usuario o la ventaja de distribución que es difícil de replicar. Ayúdame a articular los elementos de defensibilidad de mi negocio de manera específica y convincente.

**EVIDENCIA DE COMPRENSIÓN DEL MERCADO:**

LAS ENTREVISTAS DE USUARIOS COMO ARGUMENTO DE INVERSIÓN
Los PMs más convincentes en el fundraising son los que pueden demostrar que han hecho el trabajo de discovery riguroso: cuántas entrevistas de usuarios han hecho, qué han descubierto que no sabían antes y cómo esos insights han cambiado la dirección del producto. Las citas de usuarios reales, los patrones de comportamiento descubiertos en el research y los datos de uso del producto hablan de una comprensión del problema que ningún estudio de mercado puede sustituir. Ayúdame a construir la narrativa de discovery que demuestra que el equipo de producto entiende al usuario mejor que nadie.

Dame la product story completa para mi empresa, lista para incluir en el pitch deck, con el problema, el insight, el mercado y la solución con la credibilidad y el rigor que los inversores exigentes valoran.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Narrativa de producto para inversores: del problema al market size con rigor bottom-up, insight diferencial y evidencia de comprensión del usuario',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People story en el fundraising: por qué el equipo es el moat más difícil de copiar',
                'description'       => 'Aprende a construir y presentar la narrativa del equipo en el proceso de fundraising: cómo comunicar la complementariedad de los fundadores, la profundidad del equipo y los elementos de cultura que convencen a los inversores de que este equipo puede ejecutar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of People con experiencia en startups que han pasado por varios procesos de fundraising y como advisor de fundadores en la construcción de la narrativa del equipo para los inversores, con conocimiento profundo de lo que los inversores evalúan cuando miran al equipo y cómo presentar las fortalezas humanas y organizativas de la empresa de manera convincente. Quiero construir la narrativa del equipo para mi proceso de fundraising que transmita por qué este equipo es el mejor posible para ejecutar esta oportunidad.

**Preguntas iniciales:**
1. ¿Cuántas personas hay en el equipo fundador y qué perfiles tienen (técnico, negocio, producto, dominio)?
2. ¿Cuántos empleados hay en total y cuáles son los roles más relevantes además de los fundadores?
3. ¿Cuál es el mayor activo del equipo actual que sientes que no se está comunicando bien en el pitch deck?
4. ¿Hay gaps evidentes en el equipo (por ejemplo, no tienen CTO si es una empresa tech, o no tienen nadie con experiencia de escala) que los inversores van a señalar?

**LO QUE LOS INVERSORES BUSCAN EN EL EQUIPO:**

POR QUÉ EL EQUIPO ES EL FACTOR MÁS IMPORTANTE EN LAS ETAPAS TEMPRANAS
En las etapas pre-product market fit, los inversores invierten en el equipo más que en el producto o en el mercado. La razón es que el producto cambiará (pivots, iteraciones, cambios de dirección) y el mercado puede ser más o menos grande de lo estimado, pero el equipo que puede aprender rápido, adaptarse y ejecutar con excelencia en condiciones de incertidumbre es el activo más valioso y el más difícil de construir. Los fondos más selectivos aplican el test de "¿es este el mejor equipo posible para esta oportunidad?", y la respuesta debe ser claramente sí. Ayúdame a entender cómo los inversores de mi target evalúan a los equipos y qué elementos son más determinantes en su decisión.

LA COMPLEMENTARIEDAD DEL EQUIPO FUNDADOR
Los inversores buscan equipos fundadores donde las habilidades y las perspectivas se complementan de manera que cubren todas las dimensiones críticas del negocio: la capacidad técnica (quien construye el producto), la capacidad de mercado (quien entiende el cliente y vende) y la capacidad de operación (quien organiza y escala). Ayúdame a analizar la complementariedad de mi equipo fundador: dónde hay fortalezas evidentes, dónde hay solapamientos y dónde hay gaps reales que necesitan respuesta.

**CONSTRUIR LA NARRATIVA DEL EQUIPO:**

EL SLIDE DE EQUIPO: MÁS ALLÁ DE LAS FOTOS Y LOS LOGOS
El slide de equipo en la mayoría de los pitch decks es una colección de fotos con logos de employers anteriores. Esto no dice nada sobre por qué este equipo es el correcto para esta oportunidad específica. La narrativa del equipo que convence a los inversores responde a tres preguntas: ¿por qué estos fundadores son los más aptos para entender este problema (la experiencia vivida, el insight de insider)?, ¿por qué pueden ejecutar (el track record de ejecución, las habilidades específicas)?, y ¿por qué van a seguir juntos cuando lleguen las dificultades (la historia del equipo, los valores compartidos)? Ayúdame a construir la narrativa del equipo que responde a estas tres preguntas con evidencias concretas.

EL FOUNDER-MARKET FIT: LA HISTORIA QUE CONECTA EL EQUIPO CON EL PROBLEMA
El founder-market fit es la razón personal o profesional por la que los fundadores son los más indicados para resolver este problema específico. Es la historia que conecta la experiencia vivida del fundador con el problema que resuelve la empresa: la frustración personal que llevó a crear la empresa, los años de experiencia en la industria que le dieron el insight que nadie más tiene, o la combinación única de habilidades que hace que este equipo pueda construir algo que otros no pueden. Ayúdame a construir la narrativa de founder-market fit para mi empresa.

**CONSTRUIR CONFIANZA SOBRE LA CULTURA Y LA ORGANIZACIÓN:**

LA CULTURA COMO VENTAJA COMPETITIVA
Los inversores que entienden el negocio saben que la cultura de la empresa determina su capacidad de escalar: una cultura de alto rendimiento atrae y retiene al mejor talento, resuelve los problemas más rápido y se adapta a los cambios del mercado con más agilidad. Ayúdame a comunicar la cultura de mi empresa en el contexto del fundraising de manera que sea específica y creíble: cuáles son los valores que guían las decisiones cotidianas, cómo se manifiestan en el proceso de contratación y en las decisiones difíciles, y cuáles son los ejemplos que demuestran que la cultura es real y no solo aspiracional.

EL PLAN DE EQUIPO: CÓMO USAREMOS EL CAPITAL EN PERSONAS
Una parte crítica de cualquier pitch es el uso de los fondos, y la partida de personas (los perfiles que se van a contratar con la inversión) es la que más justificación requiere. Ayúdame a diseñar el plan de contratación post-inversión que sea convincente para los inversores: los roles prioritarios, la lógica que determina el orden de contratación, los perfiles que buscamos en cada posición y cómo cada contratación acelera la capacidad de ejecución del equipo.

LOS GAPS DEL EQUIPO: CÓMO HABLAR DE ELLOS SIN QUE SEAN UN PROBLEMA
Ningún equipo es perfecto y los inversores lo saben. El error no es tener gaps en el equipo; el error es no reconocerlos o no tener un plan para cerrarlos. Los inversores valoran positivamente los fundadores que pueden ver claramente las limitaciones de su equipo actual y tienen un plan concreto para abordarlas: la contratación que cierra el gap más importante, el advisor que aporta la experiencia que falta, o la razón por la que el gap no es crítico en la etapa actual. Ayúdame a identificar los gaps del equipo que los inversores van a señalar y a preparar las respuestas que los convierten en planes, no en problemas.

Dame la narrativa completa del equipo para mi proceso de fundraising: el slide de equipo, la historia de founder-market fit, la comunicación de la cultura y el plan de personas post-inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Narrativa del equipo para el fundraising: founder-market fit, complementariedad, cultura y plan de contratación post-inversión',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial modeling para inversores: el modelo que no te hace quedar mal',
                'description'       => 'Construye el modelo financiero para el fundraising que convence a los inversores sofisticados: las hipótesis defensibles, los unit economics claros, el plan de uso de fondos riguroso y las sensibilidades que demuestran que entiendes los drivers del negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia construyendo modelos financieros para procesos de fundraising en startups en diferentes sectores y etapas, con conocimiento de lo que los inversores buscan en el modelo financiero, las señales de alarma más comunes y cómo construir un modelo que sea a la vez ambicioso y creíble. Quiero construir o revisar el modelo financiero de mi empresa para que sea el argumento financiero más sólido posible en el proceso de fundraising.

**Preguntas iniciales:**
1. ¿En qué ronda estás y cuánto quieres levantar?
2. ¿Tienes ya un modelo financiero o estás empezando desde cero?
3. ¿Cuál es el modelo de negocio (SaaS subscription, marketplace, transaccional, otro) y cuáles son los principales drivers de ingresos?
4. ¿Cuáles son las métricas actuales que tienes datos reales (MRR, CAC, LTV, churn, ACV) y cuáles son proyecciones sin datos históricos de respaldo?

**LO QUE LOS INVERSORES BUSCAN EN EL MODELO FINANCIERO:**

EL MODELO COMO HERRAMIENTA DE CONVERSACIÓN, NO COMO CRISTAL MÁGICO
El modelo financiero de una startup en etapa temprana no tiene el objetivo de predecir el futuro con precisión; tiene el objetivo de demostrar que el fundador entiende los drivers del negocio, que las hipótesis son razonables y defensibles, y que el capital solicitado es suficiente para conseguir los hitos que justifican la siguiente ronda. Los inversores sofisticados no esperan que el modelo sea correcto; esperan que sea coherente, que las hipótesis estén bien fundamentadas y que el fundador sepa defender cada número. Ayúdame a construir o revisar mi modelo con esta perspectiva.

LAS SEÑALES DE ALARMA EN LOS MODELOS FINANCIEROS
Los inversores identifican rápidamente los modelos de "wishful thinking": los que crecen en forma de palo de hockey sin explicación de qué cambia, los que tienen un CAC irrealmente bajo sin explicar el canal de adquisición, los que muestran unit economics positivos desde el primer mes cuando la industria tarda años en alcanzarlos, o los que piden una cantidad de capital que no es suficiente para alcanzar los hitos prometidos. Ayúdame a identificar y corregir los posibles "red flags" en mi modelo financiero.

**LA ESTRUCTURA DEL MODELO FINANCIERO PARA FUNDRAISING:**

LAS HIPÓTESIS: LA PARTE MÁS IMPORTANTE
Las hipótesis son el corazón del modelo financiero y las que más escrutinio reciben. Para cada hipótesis importante (crecimiento de clientes, ACV, churn, CAC, LTV, margen bruto), el fundador debe poder responder: ¿de dónde viene este número? Las mejores hipótesis vienen de los datos históricos de la empresa (aunque sean pocos), de los benchmarks de la industria con fuente verificable o de la lógica del modelo de negocio que cualquier inversor puede verificar. Ayúdame a documentar las hipótesis de mi modelo con la justificación que las hace defensibles.

LOS UNIT ECONOMICS: LO MÁS IMPORTANTE DEL MODELO SaaS
Si eres una empresa SaaS, los unit economics son la parte del modelo que los inversores van a analizar con más detalle: el CAC (coste de adquisición de cliente) por canal, el LTV (valor de vida del cliente) basado en el ACV y el churn, el ratio LTV:CAC (los mejores negocios SaaS tienen ratios de 3:1 o más) y el payback period (cuántos meses tardas en recuperar el CAC, siendo menos de 18 meses el objetivo para la mayoría de los VCs). Ayúdame a construir o revisar los unit economics de mi empresa con la metodología correcta y a presentarlos de manera que sean inmediatamente comprensibles.

EL PLAN DE USO DE FONDOS
El plan de uso de fondos es una de las partes del modelo que más descuida el equipo fundador y más escrutinio recibe de los inversores. Los inversores quieren saber: ¿cómo vas a gastar el dinero?, ¿los gastos están alineados con los hitos que quieres conseguir con esta ronda?, y ¿es este capital suficiente para llegar a los próximos hitos con un margen de seguridad razonable? Ayúdame a construir el plan de uso de fondos con el nivel de detalle correcto: los porcentajes para personas, tecnología, marketing y operaciones, la lógica que justifica cada asignación y el runway que genera.

**LAS PROYECCIONES Y LAS SENSIBILIDADES:**

EL HORIZONTE TEMPORAL CORRECTO
El modelo financiero para el fundraising debe cubrir el período necesario para demostrar el potencial del negocio: típicamente tres a cinco años para una ronda Seed o Series A. El nivel de detalle debe ser mayor en los primeros doce a veinticuatro meses (meses individuales) y menor en los años posteriores (trimestres o años). Los años tres a cinco son inevitablemente poco precisos para cualquier startup, pero deben mostrar la escala posible del negocio si las hipótesis se cumplen. Ayúdame a estructurar el horizonte temporal de mi modelo.

EL ANÁLISIS DE SENSIBILIDAD: MOSTRAR QUE ENTIENDES LOS RIESGOS
Los inversores más sofisticados van a preguntar: ¿qué pasa si el crecimiento es un 30% menor del esperado?, ¿cuánto runway tienes si el CAC sube un 50%? El análisis de sensibilidad sobre las hipótesis más críticas del modelo demuestra que el fundador entiende los riesgos del negocio y ha pensado en los escenarios adversos. Ayúdame a construir el análisis de sensibilidad de los dos o tres drivers más críticos de mi modelo y a comunicarlo de manera que genere confianza en lugar de miedo.

Dame el modelo financiero completo para mi proceso de fundraising, con las hipótesis documentadas, los unit economics, el plan de uso de fondos y el análisis de sensibilidad que convence a los inversores más exigentes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Modelo financiero para fundraising: hipótesis defensibles, unit economics, plan de uso de fondos y análisis de sensibilidad',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Term sheet y documentación legal de la ronda: lo que hay que entender antes de firmar',
                'description'       => 'Guía jurídica práctica para fundadores sobre los principales términos del term sheet de una ronda de inversión: valoración, derechos de los inversores, cláusulas de liquidación preferente y los puntos de negociación más importantes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho de startups y venture capital con experiencia asesorando a fundadores en la negociación y el cierre de rondas de financiación en España y en el contexto europeo, con conocimiento profundo de la documentación legal habitual (term sheet, pacto de socios, acuerdos de inversión) y de los términos que más impacto tienen en los fundadores a largo plazo. Quiero entender los documentos legales del fundraising con suficiente profundidad como para negociar desde una posición informada y proteger los intereses de los fundadores.

**Preguntas iniciales:**
1. ¿Cuál es la ronda que estás cerrando o para la que te estás preparando (Seed, Series A, B)?
2. ¿Es la primera vez que levantas capital institucional o ya tienes experiencia con rondas anteriores?
3. ¿Tienes ya un term sheet sobre la mesa o estás en la fase de preparación para entender qué te puedes encontrar?
4. ¿Tu empresa está constituida como SA o como SL en España, o tienes una estructura holding con una entidad en otra jurisdicción (Delaware, Luxemburgo, otros)?

**LA ESTRUCTURA DEL DEAL: CÓMO SE ORGANIZA LA INVERSIÓN:**

TIPOS DE INSTRUMENTOS: EQUITY, CONVERTIBLES Y SAFEs
La inversión en una startup puede estructurarse de maneras diferentes: la inversión directa en equity (el inversor entra en el capital de la empresa con su participación diluida desde el primer día), los instrumentos convertibles (préstamos que se convierten en equity en la siguiente ronda cualificada, como los convertible notes) y los SAFEs o ASCRIs (Simple Agreement for Future Equity, o su equivalente español) que son instrumentos de inversión diferida que se convierten en la ronda de valoración. En el ecosistema español, la ASCRI y el préstamo participativo son los instrumentos más comunes en las etapas pre-seed y seed. Ayúdame a entender cuándo cada instrumento es más ventajoso para el fundador y cuáles son los términos clave que definen el impacto económico de cada uno.

LA VALORACIÓN: PRE-MONEY Y POST-MONEY
La valoración es la variable más visible del term sheet pero no siempre la más importante. La valoración pre-money es la valoración de la empresa antes de la inversión; la valoración post-money incluye el capital que entra. La participación del inversor se calcula como la inversión dividida entre la valoración post-money. Ayúdame a entender los conceptos de valoración, cómo se negocia, qué factores determinan el rango razonable para mi ronda y cómo la valoración de esta ronda afecta a la dilución en las rondas futuras.

**LOS TÉRMINOS DEL TERM SHEET QUE MÁS IMPORTAN:**

LIQUIDACIÓN PREFERENTE: EL TÉRMINO MÁS IMPORTANTE QUE NADIE EXPLICA
La liquidación preferente (liquidation preference) determina cómo se distribuyen los fondos entre los accionistas cuando la empresa se vende. En su forma más sencilla (1x non-participating), el inversor tiene derecho a recuperar su inversión antes que los accionistas comunes en caso de venta; si la venta es suficientemente alta, los inversores pueden optar por convertir a equity y recibir su parte proporcional. En su forma más agresiva (participating preferred), el inversor primero recupera su inversión y luego también participa en el reparto como si fuera equity. La diferencia puede ser de millones de euros para los fundadores en el momento de la salida. Ayúdame a entender las distintas variantes de liquidación preferente, sus implicaciones económicas y cómo negociar términos razonables.

ANTI-DILUCIÓN: PROTECCIÓN PARA LOS INVERSORES
Las cláusulas anti-dilución protegen a los inversores en caso de que la empresa levante una ronda posterior a una valoración inferior (down round). Existen dos modelos principales: el ratchet de amplia base ponderada (weighted average, el más común y más razonable para los fundadores) y el full ratchet (el más agresivo, que ajusta el precio de conversión del inversor al precio de la nueva ronda, independientemente del volumen). Ayúdame a entender cómo funcionan estas cláusulas, cuándo se activan y cómo negociar términos que protejan a los fundadores en un escenario de down round.

DERECHOS DE INFORMACIÓN Y CONTROL
Los inversores habitualmente negocian derechos específicos en el pacto de socios: el derecho de información (acceso a los estados financieros y a los informes de gestión periódicos), el derecho a un asiento en el consejo de administración (o derechos de observador sin voto), los derechos de veto sobre decisiones importantes (emisión de nuevas acciones, venta de la empresa, cambios en los estatutos, contratos por encima de cierto importe). Ayúdame a entender qué derechos son estándar y razonables en mi ronda, cuáles son los que más limitan la autonomía operativa de los fundadores y cómo negociar un gobierno corporativo que sea profesional sin ser paralizante.

**LOS TÉRMINOS DE PROTECCIÓN DE LOS FUNDADORES:**

VESTING DE FUNDADORES: POR QUÉ ES BUENO PARA TODOS
El vesting de fundadores (el proceso por el que los fundadores "ganan" sus participaciones a lo largo del tiempo) es uno de los términos que más sorprende a los fundadores por primera vez. Si un fundador se va a los seis meses, no parece justo que se lleve el 50% de la empresa. El vesting protege tanto a los inversores como a los cofundadores que se quedan: si un cofundador sale pronto, la empresa puede recuperar sus participaciones no vested para el pool de equity de los empleados o para nuevos cofundadores. El estándar de mercado es cuatro años con un cliff de un año. Ayúdame a entender los términos de vesting habituales y cómo negociar las aceleraciones (single o double trigger) en caso de venta o despido.

DRAG ALONG Y TAG ALONG
El drag along (derecho de arrastre) obliga a los accionistas minoritarios a vender sus participaciones cuando una mayoría cualificada decide vender la empresa. El tag along (derecho de acompañamiento) protege a los socios minoritarios y les da el derecho de vender en las mismas condiciones que el mayoritario. Ayúdame a entender cómo funcionan estos derechos, los umbrales habituales de activación y cómo negociar los términos que protegen los intereses de los fundadores en un escenario de salida.

Dame el análisis completo de los términos del term sheet que debo entender y negociar antes de firmar, con los rangos de mercado, las cláusulas que más impactan a los fundadores a largo plazo y las estrategias de negociación para cada punto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Guía jurídica del term sheet para fundadores: valoración, liquidación preferente, anti-dilución, derechos de inversores y vesting',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer evidence en el fundraising: los testimonios y métricas que convencen',
                'description'       => 'Aprende a construir y presentar la evidencia de clientes que refuerza la tesis de inversión: cómo seleccionar los casos de éxito, cuantificar el valor entregado, estructurar los testimonios y usar las referencias de clientes en el proceso de due diligence.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Customer Success con experiencia en startups B2B que han pasado por procesos de fundraising, con conocimiento de cómo los inversores usan la evidencia de clientes en su proceso de evaluación y cómo el equipo de CS puede contribuir activamente a reforzar la tesis de inversión con los testimonios, las métricas y las referencias de clientes correctas. Quiero aprender a construir la customer evidence que hace que los inversores confíen en que el producto genera valor real y que los clientes están dispuestos a recomendarlo y renovar.

**Preguntas iniciales:**
1. ¿Cuántos clientes activos tienes actualmente y cuál es la distribución de tu base (tamaño de empresa, sector, geografía)?
2. ¿Cuáles son las métricas de éxito de cliente que tienes documentadas (NPS, CSAT, ROI del producto, reducción de costes, aumento de ingresos)?
3. ¿Tienes ya case studies publicados o testimonios formales de clientes, o están en formato informal (emails, conversaciones)?
4. ¿Cuál es la ronda y el tipo de inversor (VC generalista, VC especializado en tu sector, corporate VC)?

**POR QUÉ LA CUSTOMER EVIDENCE ES CRÍTICA EN EL FUNDRAISING:**

LOS INVERSORES HABLAN CON TUS CLIENTES
El due diligence de los fondos de venture capital serios incluye siempre referencias de clientes: el fondo pide una lista de clientes y habla directamente con ellos para verificar el valor que el producto aporta, la satisfacción con el servicio y la probabilidad de renovar y recomendar. Este proceso de referencias es uno de los momentos más reveladores del due diligence: los clientes que hablan mal del producto (aunque solo sea con matices) generan señales de alarma que pueden bloquear el proceso. Ayúdame a preparar la base de clientes para el proceso de referencias: qué clientes incluir en la lista, cómo preparar a los clientes para la conversación con el fondo y cómo gestionar los clientes que podrían dar una referencia mixta.

LA CUSTOMER EVIDENCE COMO ARGUMENTO DE INVERSIÓN
Más allá del proceso de referencias, la evidencia de clientes es uno de los argumentos más convincentes del pitch deck: un cliente real que dice en sus propias palabras que el producto le ha cambiado la vida profesional, con números concretos que cuantifican el impacto, es más persuasivo que cualquier proyección financiera. Ayúdame a entender cómo construir la customer evidence que refuerza cada elemento de la tesis de inversión: la evidencia de que el problema es real (los testimonios sobre el pain), la evidencia de que la solución funciona (los casos de éxito con ROI cuantificado) y la evidencia de que los clientes van a quedarse (las métricas de retención y NPS).

**CONSTRUIR EL PROGRAMA DE CUSTOMER EVIDENCE:**

SELECCIONAR LOS CASOS DE ÉXITO CORRECTOS
No todos los clientes son igualmente útiles como evidencia de inversión. Los mejores casos de éxito para el fundraising combinan: el nombre reconocible (una empresa grande o bien conocida en el sector da más credibilidad), el ROI cuantificado y verificable (no "estamos muy contentos" sino "hemos reducido el tiempo de X en un 40%"), el uso intensivo del producto (un cliente que usa todas las features clave demuestra el valor completo de la propuesta) y la disposición del responsable a hablar con el fondo. Ayúdame a seleccionar los tres a cinco casos de éxito que son más persuasivos para mi tesis de inversión y a construir la narrativa de cada uno.

LA ESTRUCTURA DEL CASE STUDY PARA INVERSORES
El case study para inversores tiene una estructura específica que maximiza su impacto: el contexto (quién es el cliente, cuál era su situación antes de adoptar el producto), el problema (qué dolía, con qué métricas se medía ese dolor), la solución (cómo se implementó el producto y qué cambió), el resultado (los números concretos del impacto: reducción de costes, aumento de ingresos, ahorro de tiempo, mejora de la calidad) y la cita del cliente (en sus propias palabras, que resume el valor de manera memorable). Ayúdame a construir el case study de mis mejores clientes con esta estructura.

**LAS MÉTRICAS DE CLIENTE PARA EL FUNDRAISING:**

NPS, CHURN Y RETENCIÓN: LAS MÉTRICAS QUE HABLAN POR SI SOLAS
Los inversores en negocios SaaS B2B miran de manera especial las métricas de satisfacción y retención de clientes: el NPS (Net Promoter Score) que mide la disposición a recomendar, el churn rate (la tasa de abandono mensual o anual) y el Net Revenue Retention (la retención de ingresos incluyendo expansión). Un NPS alto, un churn bajo y un NRR superior al 110% son señales poderosas de que el producto crea valor real y que los clientes están satisfechos. Ayúdame a calcular, presentar y contextualizar estas métricas de manera que sean comprensibles e impresionantes para los inversores.

LOS LOGOS Y EL EFECTO DE PRUEBA SOCIAL
En el pitch deck, el slide de "clientes" o "logos" es una herramienta de prueba social poderosa. Los logos reconocibles de empresas de referencia en el sector transmiten que el producto es serio, que ha pasado el proceso de compra de empresas con criterios exigentes y que es suficientemente bueno para ser usado por los mejores. Ayúdame a diseñar el slide de clientes de mi pitch deck: cómo seleccionar y presentar los logos para maximizar el impacto, qué información adicional incluir sobre el uso del producto y cómo contextualizar el tamaño y la calidad de la base de clientes cuando los logos no son todavía muy conocidos.

PREPARAR LAS REFERENCIAS PARA EL DUE DILIGENCE
La lista de referencias de clientes que el fondo va a contactar debe ser preparada cuidadosamente: seleccionar a los clientes que van a dar la mejor referencia (no solo los más satisfechos, sino los que pueden articular el valor de manera clara y convincente), hacer una llamada previa de preparación con el cliente para informarle de que puede recibir una llamada del fondo y recordarle los puntos de éxito más relevantes, y gestionar las referencias que podrían dar mensajes mixtos de manera que el fundador pueda dar contexto al fondo sobre esas situaciones.

Dame el programa completo de customer evidence para el fundraising: la selección de casos de éxito, la estructura de los case studies, las métricas de cliente y el proceso de preparación de las referencias para el due diligence.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Programa de customer evidence para fundraising: case studies, métricas de cliente, logos y preparación de referencias para due diligence',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Financiación alternativa para el freelance: subvenciones, grants y aceleradoras',
                'description'       => 'Descubre las opciones de financiación alternativa al venture capital para el freelance y el microempresario: subvenciones públicas en España y la UE, grants de aceleradoras y programas de apoyo al emprendimiento independiente que no requieren ceder equity.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor de financiación para autónomos y pequeñas empresas con experiencia ayudando a freelancers y microempresarios a identificar, solicitar y obtener financiación alternativa al venture capital: subvenciones públicas, grants de fundaciones y programas de apoyo, aceleradoras para proyectos sin alto potencial de escala masiva y opciones de financiación sin dilución del capital. Quiero aprender a acceder a la financiación que está disponible para mi tipo de negocio sin tener que ceder equity ni asumir deuda bancaria tradicional.

**Preguntas iniciales:**
1. ¿Cuál es tu actividad específica como freelance o microempresario y el estadio del negocio (acaba de empezar, lleva uno a tres años, está en proceso de expansión)?
2. ¿Cuál es tu objetivo con la financiación: capital para invertir en herramientas o formación, fondos para contratar los primeros colaboradores, financiar un proyecto específico, o cubrir la brecha de liquidez mientras creces?
3. ¿Estás dado de alta como autónomo en España, tienes una SL, o trabajas como freelance internacional?
4. ¿Has solicitado alguna ayuda o subvención anteriormente? ¿Cuál fue el resultado?

**EL ECOSISTEMA DE FINANCIACIÓN PARA EL FREELANCE EN ESPAÑA:**

POR QUÉ EL FREELANCE ESTÁ EXCLUIDO DEL VENTURE CAPITAL
El venture capital es financiación diseñada para negocios con potencial de escala masiva y que buscan retornos de diez a cien veces la inversión en un plazo de cinco a siete años. El negocio freelance, incluso el más exitoso, raramente cumple este perfil: no tiene el potencial de escala exponencial sin el propietario, no tiene barreras de entrada que impidan la competencia y no tiene el modelo de salida (IPO o M&A) que los fondos de VC necesitan. Esto no es un problema; es simplemente la realidad de que el negocio freelance necesita un tipo de financiación diferente, más alineada con su modelo de crecimiento orgánico. Ayúdame a entender las opciones de financiación que sí están diseñadas para mi tipo de negocio.

LAS SUBVENCIONES PÚBLICAS PARA AUTÓNOMOS EN ESPAÑA
España y las comunidades autónomas tienen varios programas de apoyo económico a los autónomos: la capitalización de la prestación por desempleo (la "tarifa plana" para emprendedores que se dan de alta como autónomos y pueden capitalizar el paro en un pago único para invertir en el negocio), las subvenciones del Plan ACELERA PYME del Ministerio de Asuntos Económicos para la digitalización de las pymes y autónomos (con importes de hasta seis mil euros), los programas de apoyo autonómicos y municipales para el emprendimiento y la creación de empleo autónomo, y las subvenciones específicas por sector (cultura, tecnología, turismo, agricultura). Ayúdame a identificar las subvenciones que son más relevantes para mi actividad y comunidad autónoma y a entender el proceso de solicitud.

**LOS FONDOS EUROPEOS Y LOS PROGRAMAS DE FINANCIACIÓN DE LA UE:**

HORIZON EUROPE Y LOS PROGRAMAS DE INNOVACIÓN
Si tu actividad tiene una componente de innovación o investigación (desarrollo de nuevas metodologías, herramientas digitales propias, o proyectos con impacto social), los programas de financiación de la UE pueden ser relevantes. Horizon Europe es el mayor programa de financiación de investigación e innovación de la UE, con un presupuesto de noventa y cinco mil millones de euros para el período 2021-2027. Los proyectos colaborativos que involucran a múltiples entidades de diferentes países de la UE tienen acceso a esta financiación. Ayúdame a entender si algún programa de Horizon Europe es relevante para mi actividad y cómo acceder a él de manera práctica (los consorcios, los intermediarios y los centros de apoyo al emprendimiento europeo).

EL PROGRAMA ERASMUS PARA EMPRENDEDORES
El programa Erasmus para Jóvenes Emprendedores es un programa de intercambio europeo que permite a los nuevos emprendedores pasar de uno a seis meses trabajando con un emprendedor experimentado en otro país de la UE. A cambio de la formación y la experiencia, el nuevo emprendedor recibe una beca de la Comisión Europea que cubre los gastos de manutención. Ayúdame a entender si este programa es relevante para mi perfil y cómo solicitarlo a través de los Intermediary Organisations en España.

**LOS GRANTS Y PROGRAMAS DE ACELERADORAS:**

ACELERADORAS PARA PROYECTOS SIN MODELO VC
Existen aceleradoras e incubadoras diseñadas específicamente para proyectos que no tienen el perfil de VC: las aceleradoras de impacto social, las incubadoras de economía creativa, los programas de apoyo a la artesanía y el comercio tradicional, y los programas específicos para mujeres emprendedoras o emprendedores de zonas rurales. Algunos de estos programas ofrecen financiación no dilutiva (sin ceder equity), mentoring especializado y acceso a redes de clientes y proveedores. Ayúdame a identificar los programas de aceleración más relevantes para mi tipo de actividad.

LOS GRANTS DE FUNDACIONES Y PROGRAMAS PRIVADOS
Además de las ayudas públicas, existen grants y programas de apoyo de fundaciones privadas y empresas con programas de responsabilidad social: la Fundación Repsol para proyectos de energía y sostenibilidad, la Fundación La Caixa para proyectos de impacto social, los programas de Santander para emprendedores, y los premios y concursos de emprendimiento que ofrecen premios en metálico y visibilidad. Ayúdame a construir el mapa de grants privados relevantes para mi actividad y a entender cómo funciona el proceso de solicitud.

**LA FINANCIACIÓN CON DEUDA PARA EL FREELANCE:**

EL ICO Y LAS LÍNEAS DE FINANCIACIÓN BLANDA
El Instituto de Crédito Oficial (ICO) tiene líneas de financiación específicas para autónomos y pymes con condiciones más favorables que la financiación bancaria comercial: tipos de interés más bajos, períodos de carencia y plazos de amortización más largos. Las líneas ICO se tramitan a través de las entidades financieras colaboradoras. Ayúdame a entender qué líneas ICO son más adecuadas para mi situación y cómo acceder a ellas.

EL CROWDFUNDING Y EL CROWDLENDING
Para proyectos con una narrativa pública atractiva, el crowdfunding de recompensas (Kickstarter, Verkami) puede ser una fuente de financiación sin dilución ni deuda. El crowdlending (Mintos, October, Funding Circle) ofrece préstamos empresariales financiados por la comunidad con tipos de interés más competitivos que los bancarios para algunos perfiles. Ayúdame a evaluar si alguna de estas opciones tiene sentido para mi proyecto.

Dame el mapa completo de opciones de financiación alternativa disponibles para mi tipo de actividad freelance en España y la UE, con los programas prioritarios, los importes típicos, los criterios de elegibilidad y el proceso de solicitud para cada uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Mapa de financiación alternativa para freelancers en España: subvenciones públicas, grants europeos, aceleradoras y líneas ICO',
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
