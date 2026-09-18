<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills291Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de innovación: comunicar el cambio sin perder la confianza del cliente',
                'description'       => 'Diseña estrategias para comunicar innovaciones de producto y cambios de marca que generen adopción en lugar de rechazo, manteniendo la confianza de los clientes actuales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de marketing con amplia experiencia lanzando innovaciones de producto y gestionando cambios de marca en mercados maduros. Necesito diseñar una estrategia de comunicación para innovaciones que genera adopción en lugar de resistencia: cómo contar la historia del cambio de forma que los clientes actuales no sientan que les cambias las reglas y los prospectos entienden por qué esto es mejor que lo que tenían antes.

**Mi contexto de innovación:**
- Tipo de innovación que necesito comunicar: [nuevo producto que rompe con la categoría, mejora significativa del producto existente, cambio de modelo de negocio, rediseño de marca, entrada en nuevo mercado]
- Clientes actuales: [número aproximado, nivel de satisfacción, sensibilidad al cambio]
- Principales retos de comunicación: [los clientes actuales resisten el cambio, los prospectos no entienden por qué es diferente, el mercado no está preparado para la innovación]
- Canales disponibles: [web, email, redes sociales, eventos, relaciones públicas, equipo comercial]

**Estrategia de marketing para innovaciones:**

1. **El dilema del innovador en marketing: satisfacer al cliente actual vs. atraer al futuro**
La innovación crea una tensión fundamental en el marketing: los mensajes que convencen a los early adopters alienan a los clientes actuales satisfechos, y los mensajes que retienen a los actuales no son suficientemente disruptivos para atraer a los nuevos. Explica cómo gestionar esta tensión: segmentación de la comunicación por perfil de adopción (innovadores, early adopters, mayoría temprana, mayoría tardía), mensajes diferenciados por etapa de adopción, y cómo evitar que los mensajes para unos lleguen a los oídos incorrectos.

2. **El storytelling de la innovación: de la tecnología al beneficio humano**
Las innovaciones se comunican mal cuando se habla de características en lugar de transformaciones. Explica cómo construir la narrativa de la innovación: el estado del mundo antes de la innovación (el problema que existe pero que nadie ha resuelto bien), por qué ahora es el momento (qué ha cambiado en el entorno que hace posible esta solución), cómo funciona la innovación (con el nivel de detalle mínimo necesario), y qué cambia en la vida o el trabajo del cliente gracias a ella. Cómo hacer que una innovación compleja sea comprensible para un cliente no técnico.

3. **Gestión del cambio con clientes existentes**
Los clientes existentes son los que más resisten la innovación porque tienen más que perder. Diseña un plan de comunicación y gestión del cambio con clientes actuales: cómo anunciar cambios importantes antes de implementarlos (con qué tiempo de antelación, en qué canal, con qué tono), cómo involucrar a los mejores clientes como beta testers y co-diseñadores, cómo gestionar las quejas y el rechazo sin retractarse de la innovación, y cómo usar la prueba social de clientes satisfechos con el cambio para convencer a los escépticos.

4. **Posicionamiento diferencial: cuando la innovación crea una categoría nueva**
Las innovaciones más importantes no mejoran una categoría existente: crean una nueva. Explica el concepto de category creation en marketing: cuándo tiene sentido intentar crear una nueva categoría vs. competir en la existente, cómo nominar y definir la nueva categoría de forma que sea tuya, cómo educar al mercado en el nuevo problema que resuelves antes de explicar tu solución, y los riesgos del category creation (tarda más, es más caro, puede fallar si el mercado no adopta el nuevo frame).

5. **Lanzamiento de la innovación: estrategia de go-to-market**
El lanzamiento de una innovación requiere una estrategia de go-to-market adaptada. Diseña las fases de un lanzamiento de innovación: fase de pre-lanzamiento (generar anticipación, reclutar a los early adopters, crear expectativa sin revelar todo), fase de lanzamiento (el momento del anuncio, el PR, el contenido de lanzamiento, la activación del equipo comercial), y fase de post-lanzamiento (prueba social, casos de éxito tempranos, iteración del mensaje basada en feedback del mercado).

6. **Relaciones públicas e influencers para innovaciones disruptivas**
Las innovaciones necesitan avalistas externos: periodistas, analistas, influencers y expertos del sector que legitiman la novedad. Explica cómo construir una estrategia de PR para una innovación: cómo identificar a los influencers adecuados (no necesariamente los de más seguidores, sino los más creíbles en el nicho), cómo hacer el brief a periodistas y analistas para que entiendan y cubran bien la innovación, y cómo gestionar la narrativa cuando aparecen artículos críticos o escépticos.

7. **Métricas de adopción de la innovación**
¿Cómo medir si la comunicación de la innovación está funcionando? Propón un conjunto de métricas en tres dimensiones: métricas de awareness y comprensión (¿el mercado conoce y entiende la innovación?), métricas de adopción (¿los clientes actuales están adoptando el cambio, cuántos prospectos están generando el lanzamiento?), y métricas de percepción (¿cómo está evolucionando el posicionamiento de la marca gracias a la innovación?).

8. **Gestión de la innovación fallida: cuando el mercado no adopta**
No todas las innovaciones tienen éxito. Explica cómo reconocer cuándo una innovación no está siendo adoptada (y distinguirlo de la adopción lenta normal), cómo pivotar el mensaje sin destruir la credibilidad de la empresa, cuándo vale la pena persistir con la misma innovación con mejor comunicación y cuándo es el momento de retractarse, y cómo gestionar la comunicación del fracaso de una innovación de forma que preserve la confianza del cliente.

**Entregable:**
Un plan de comunicación completo para la innovación que necesito comunicar, incluyendo mensajes clave por segmento, calendario de actividades de marketing, KPIs de adopción, y plan de contingencia si la adopción es más lenta de lo esperado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Comunicar innovaciones de producto generando adopción sin perder la confianza del cliente',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Engineering innovation: hackathons, 20% time y cómo crear espacio para experimentar',
                'description'       => 'Diseña un sistema de innovación para equipos de ingeniería que genere experimentación real, no teatro de innovación, con resultados que impacten en el producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un engineering manager o CTO con experiencia construyendo culturas de innovación en equipos de ingeniería en empresas tecnológicas de rápido crecimiento. Necesito diseñar un sistema de innovación para mi equipo de ingeniería que genere experimentación real y no se quede en teatro: hackathons que producen proyectos que se lanzan, tiempo para exploración que genera ideas que entran en el roadmap, y una cultura donde experimentar es seguro aunque falle.

**Mi contexto de ingeniería:**
- Tamaño del equipo: [número de ingenieros y estructura del equipo]
- Fase de la empresa: [startup en crecimiento, empresa madura, transformación digital de empresa tradicional]
- Presión actual del roadmap: [muy alta, tenemos tiempo libre, equilibrada]
- Estado actual de la innovación: [no existe, hay hackathons puntuales, hay algo de 20% time pero sin sistema, tenemos un laboratorio de innovación]
- Tipo de innovación que busco: [mejoras de producto existente, nuevos productos, mejoras de infraestructura, exploración de nuevas tecnologías]

**Sistema de innovación para equipos de ingeniería:**

1. **Diagnóstico: por qué falla la innovación en la mayoría de los equipos de ingeniería**
Antes de diseñar un sistema de innovación, hay que entender por qué los existentes fallan. Explica las causas más comunes: el 20% time se convierte en 0% time cuando el roadmap aprieta, los hackathons producen prototipos que nunca ven la luz, las ideas de los ingenieros no tienen camino hacia el roadmap, el equipo tiene miedo de que fallar los perjudique, y la deuda técnica consume todo el tiempo disponible. ¿Cuál de estos patrones es el más frecuente y cómo se rompe?

2. **El 20% time que funciona de verdad: lecciones de Google y otros**
El concepto del 20% time está mitificado: en Google fue real durante años y generó Gmail y Google News, pero también se convirtió en un mito que no se materializaba. Explica qué hace que el 20% time funcione de verdad: estructura mínima necesaria (qué debe reportar el ingeniero, con qué frecuencia), protección activa del tiempo de innovación por parte del management, criterios para decidir en qué proyectos invertir el tiempo de exploración, y cómo conectar los proyectos de innovación con el roadmap del producto.

3. **Hackathons que producen impacto real**
Un hackathon bien diseñado puede ser uno de los momentos más emocionantes del año para un equipo de ingeniería. Explica cómo diseñar un hackathon que produzca proyectos reales: cómo elegir el formato (24h vs. 48h, temas libres vs. temas dirigidos, individual vs. en equipo), cómo estructurar el proceso de pitching y selección de proyectos ganadores, qué pasa después del hackathon (cómo los proyectos ganadores entran en el roadmap), y cómo evitar que el hackathon sea una actividad de team building vacía de resultados.

4. **Laboratorios de innovación internos: cuándo tiene sentido y cuándo no**
Muchas empresas crean un laboratorio de innovación separado del equipo de producto, con la idea de que la separación les da libertad para experimentar. Explica los pros y contras de los laboratorios de innovación: cuándo funcionan (cuando hay una misión clara, recursos suficientes, y un camino de transferencia al negocio core), cuándo fracasan (cuando se convierten en un zoo de ideas sin conexión con el negocio, cuando no hay mecanismo de transferencia), y qué alternativas existen a los laboratorios separados para los equipos que no tienen ese presupuesto.

5. **Gestión de la deuda técnica como requisito para la innovación**
No hay innovación posible cuando el equipo está enterrado en deuda técnica. Explica la relación entre deuda técnica e innovación: cómo la deuda técnica consume el tiempo disponible para explorar, cómo priorizar la deuda técnica en el roadmap sin que siempre pierda frente a nuevas funcionalidades, y cómo crear un presupuesto de deuda técnica que proteja el tiempo de innovación.

6. **Cultura de experimentación: cómo hacer que sea seguro fallar**
La mayor barrera a la innovación en ingeniería es el miedo al fracaso. Explica cómo construir una cultura donde experimentar sea seguro: cómo los líderes modelan la tolerancia al fracaso (compartir sus propios experimentos fallidos), cómo diseñar los procesos de postmortem para que sean aprendizaje y no punición, cómo celebrar los experimentos fallidos que generaron aprendizaje, y cómo distinguir entre fallos de ejecución (inaceptables) y fallos de exploración (aceptables y valiosos).

7. **Conexión entre innovación y roadmap de producto**
La innovación del equipo de ingeniería que no conecta con el roadmap del producto se pierde. Diseña un proceso de transferencia de innovaciones al roadmap: cómo un ingeniero presenta una idea de innovación al equipo de producto, qué criterios usa el PM para evaluar si incluirla en el roadmap, qué forma toma la idea cuando pasa de prototipo de hackathon a feature del producto, y cómo dar crédito al ingeniero que originó la idea.

8. **Métricas de una cultura de innovación en ingeniería**
¿Cómo medir si el sistema de innovación está funcionando? Propón métricas concretas: número de experimentos lanzados por trimestre, porcentaje de experimentos que pasan a producción, número de proyectos de hackathon que se convierten en features del producto, ratio de tiempo de innovación vs. tiempo de roadmap, y encuesta de percepción del equipo sobre el espacio que tienen para innovar.

**Entregable:**
Un plan de noventa días para lanzar o relanzar el sistema de innovación del equipo de ingeniería, con las iniciativas concretas a implementar en cada mes y los criterios de éxito para evaluar si el sistema está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir un sistema de innovación real para equipos de ingeniería que genere impacto',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design futures: anticipar las necesidades del usuario que aún no existen',
                'description'       => 'Aprende a usar metodologías de diseño especulativo y futurismo aplicado para identificar tendencias emergentes y diseñar para necesidades que tus usuarios aún no saben que tendrán.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de futuros y estratega de innovación con experiencia en diseño especulativo, futures thinking y su aplicación al diseño de productos y servicios. Necesito aprender a anticipar tendencias y necesidades emergentes de los usuarios para diseñar productos que sean relevantes no solo hoy, sino en los próximos tres a diez años.

**Mi contexto de diseño:**
- Tipo de producto o servicio que diseño: [producto digital, servicio, espacio físico, sistema de servicio complejo]
- Sector: [salud, educación, movilidad, trabajo, entretenimiento, banca, retail]
- Horizonte de diseño que me interesa: [2-3 años, 5 años, más de 10 años]
- Nivel de experiencia con futures thinking: [ninguno, algo de desk research, algún workshop de tendencias]

**Metodologías de design futures aplicadas:**

1. **Qué es el diseño especulativo y por qué importa**
El diseño especulativo (speculative design, design fiction, futuros preferibles) es un conjunto de metodologías que usan el diseño para explorar posibles futuros, hacer preguntas difíciles sobre tecnología y sociedad, y anticipar problemas antes de que ocurran. Explica en qué se diferencia del diseño de producto convencional, qué preguntas responde (¿qué podría existir? en lugar de ¿qué existe?), y cómo las empresas tecnológicas más avanzadas usan el design futures como herramienta estratégica de innovación.

2. **El cone of plausibility: posibles, probables y preferibles**
Una de las herramientas fundamentales del futures thinking es el cono de posibilidades. Explica los diferentes tipos de futuros: futuros posibles (todo lo que podría ocurrir), futuros plausibles (lo que podría ocurrir siguiendo las tendencias actuales), futuros probables (lo que probablemente ocurrirá si nada cambia), y futuros preferibles (el futuro que queremos construir). Cómo usar este marco para enfocar el trabajo de diseño: ¿diseño para el futuro probable o trabajo para hacer más probable el futuro preferible?

3. **Análisis de tendencias: del dato al insight de diseño**
El análisis de tendencias mal hecho produce listas de palabras de moda sin implicaciones de diseño. Explica cómo hacer un análisis de tendencias que genere insights accionables para el diseño: cómo distinguir entre una moda pasajera (fad), una tendencia (trend) y un macro-cambio estructural (megatrend), las fuentes de señales débiles que el diseñador debería monitorizar (investigación académica, patentes, subcultures, mercados emergentes, early adopters), y cómo traducir una tendencia en una implicación de diseño específica.

4. **Escenarios de futuro: cómo construirlos y usarlos en diseño**
Los escenarios de futuro son narrativas plausibles sobre cómo podría ser el mundo en X años. Explica la metodología de construcción de escenarios para diseñadores: cómo identificar las incertidumbres críticas que dan forma al futuro (las variables de las que no sabemos el valor), cómo construir una matriz de escenarios a partir de dos ejes de incertidumbre, cómo dar vida a cada escenario con narrativas detalladas y personajes ficticios, y cómo usar los escenarios para evaluar la robustez de un diseño (¿funciona mi producto en los cuatro escenarios posibles?).

5. **Personas del futuro: diseñar para usuarios que no existen aún**
Las personas que diseñamos hoy representan a los usuarios de hoy. Explica cómo construir personas del futuro: cómo proyectar cómo cambiarán los comportamientos, valores y necesidades de los usuarios actuales en función de las tendencias identificadas, cómo crear personas que representen a usuarios que aún no existen pero que existirán (generaciones más jóvenes, nuevos perfiles sociales emergentes), y cómo usar estas personas del futuro para generar oportunidades de diseño que los actuales métodos de investigación de usuarios no revelan.

6. **Design fiction: prototipos de futuros posibles**
El diseño fiction usa objetos, servicios y experiencias ficticias para materializar futuros y provocar reflexión. Explica qué es un design fiction artifact (un objeto, interfaz, documento o vídeo de un futuro imaginado), cómo usarlo en el proceso de innovación: para generar debate interno sobre hacia dónde va el producto, para investigar reacciones de usuarios ante futuros posibles antes de invertir en su desarrollo, y para comunicar visiones de futuro a stakeholders de una forma más tangible que un texto de estrategia.

7. **Ética del diseño de futuros: responsabilidad en la anticipación**
El diseñador que trabaja con futuros tiene una responsabilidad especial: los futuros que imagina pueden convertirse en realidad (o influir en quienes tienen el poder de hacerlos realidad). Explica las dimensiones éticas del diseño de futuros: cómo evitar que el trabajo de futures thinking amplifique sesgos existentes sobre quién tiene voz en el futuro, cómo hacer futurismo inclusivo (que los futuros imaginados incluyan a todos los grupos sociales), y la diferencia entre anticipar un futuro (neutral) y promover un futuro particular (que requiere posicionamiento ético explícito).

8. **Integración del design futures en el proceso de innovación**
El futures thinking sin conexión con el proceso de diseño y negocio es un ejercicio académico. Explica cómo integrar el design futures en el proceso de innovación de una empresa: en qué momento del ciclo de innovación tiene más valor (en el descubrimiento, para generar oportunidades; en la validación, para evaluar la relevancia futura de una idea), cómo presentar el trabajo de futures thinking a stakeholders que piensan en trimestres, no en décadas, y cómo construir una práctica de futures thinking que sea útil para el negocio.

**Entregable:**
Un toolkit de design futures básico adaptado a mi sector y horizonte temporal: las tres metodologías más útiles para empezar, las fuentes de señales que debo monitorizar, y un plan para hacer mi primer ejercicio de scenarios en un taller de medio día con el equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Anticipar tendencias y diseñar para necesidades de usuarios que aún no existen',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Innovación en el proceso de ventas: experimentar con nuevos modelos comerciales',
                'description'       => 'Diseña experimentos para innovar en el proceso de ventas: nuevos modelos de outreach, estructuras de comisiones, y enfoques comerciales que mejoren resultados sin romper lo que funciona.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en transformación de procesos comerciales y en la implementación de nuevos modelos de venta en empresas B2B en crecimiento. Necesito entender cómo innovar en el proceso de ventas sin romper lo que ya funciona: cómo diseñar experimentos comerciales rigurosos, qué modelos de venta están emergiendo, y cómo escalar los experimentos exitosos.

**Mi contexto comercial:**
- Tipo de ventas actual: [inside sales, field sales, channel sales, PLG (product-led growth), hybrid]
- Tamaño del equipo comercial: [número de personas y roles]
- Ciclo de venta actual: [duración y principales etapas]
- Mayor ineficiencia del proceso actual: [tiempo en tareas no comerciales, deals que se pierden en una etapa específica, dificultad para abrir nuevas cuentas, ciclos demasiado largos]
- Disposición del equipo al cambio: [alta, media, baja]

**Innovación en el proceso de ventas:**

1. **Diagnóstico: dónde está el mayor potencial de mejora en tu proceso comercial**
Antes de innovar, hay que entender dónde están las mayores ineficiencias. Diseña un diagnóstico del proceso comercial: análisis del funnel de ventas por etapa (cuál tiene la mayor tasa de abandono y por qué), análisis de cómo usa el tiempo el equipo comercial (cuánto tiempo en tareas verdaderamente comerciales vs. administración, research, reuniones internas), y análisis de los deals perdidos más recientes (cuáles son los patrones en los que se pierden oportunidades). ¿Qué dice este diagnóstico sobre dónde debe empezar la innovación?

2. **Modelos de venta emergentes: PLG, community-led, y ecosystem-led**
El modelo de ventas tradicional (SDR genera lead, AE cierra, CSM retiene) no es el único posible. Explica los modelos emergentes: product-led growth (el producto se vende solo, el equipo comercial actúa sobre señales de uso), community-led growth (la comunidad de usuarios genera demanda y referidos), partner-led growth (el ecosistema de partners amplifica el alcance comercial), y el modelo híbrido PLG + sales (los mejores usuarios activos se convierten en oportunidades para el equipo comercial). Para cada modelo, cuándo tiene sentido, qué cambios organizativos requiere, y cuáles son los riesgos.

3. **Diseño de experimentos comerciales rigurosos**
Innovar en ventas sin metodología es peligroso: un cambio mal medido puede destruir valor sin que lo sepas. Explica cómo diseñar un experimento comercial: cómo definir la hipótesis (si hacemos X, esperamos Y porque Z), cómo aislar la variable que estás probando (una cosa a la vez), cómo elegir el grupo de control y el grupo de prueba, cuánto tiempo necesitas para tener datos significativos, y qué métricas medirás para determinar si el experimento fue exitoso. Ejemplos de experimentos comerciales frecuentes: secuencias de outreach, nuevas estructuras de propuesta, cambios en el proceso de demo.

4. **Innovación en la prospección: del cold outreach al inbound y al warm intro**
La prospección en frío tiene tasas de éxito cada vez más bajas. Explica las innovaciones en la captación de nuevas cuentas: outreach hiperpersonalizado con IA (cómo escalar la personalización sin perder autenticidad), social selling y construcción de presencia en LinkedIn, programas de referidos formales (cómo incentivar a clientes satisfechos para que traigan nuevas cuentas), y intent data (cómo usar señales de intención de compra de herramientas como Bombora o G2 para hacer outreach en el momento correcto).

5. **Innovación en la estructura de comisiones e incentivos**
La estructura de comisiones es uno de los palancas de innovación más poderosas y más peligrosas en ventas. Explica los modelos de comisión más innovadores: comisiones basadas en el éxito del cliente (no solo en cerrar el deal, sino en la retención y expansión), estructuras de acelerador agresivo para los mejores performers, comisiones compartidas entre sales y CS para alinear incentivos en todo el ciclo de vida, y cómo diseñar planes de comisiones que incentiven los comportamientos que quieres sin crear efectos secundarios negativos.

6. **Tecnología e IA para innovar en el proceso comercial**
La tecnología puede cambiar fundamentalmente cómo vende un equipo comercial. Explica las innovaciones tecnológicas con mayor impacto en ventas: herramientas de conversation intelligence (Gong, Chorus) para mejorar el coaching del equipo, plataformas de sales engagement (Salesloft, Outreach) para gestionar cadencias de outreach a escala, herramientas de preparación de reuniones con IA (resumen del CRM, noticias recientes del cliente, sugerencias de conversación), y cómo evaluar si una nueva herramienta de ventas realmente mejora la productividad comercial.

7. **Gestión del cambio en el equipo de ventas**
Los equipos de ventas son resistentes al cambio porque el cambio amenaza sus comisiones y sus rutinas establecidas. Explica cómo gestionar la implementación de un nuevo proceso o modelo comercial: cómo involucrar a los mejores comerciales en el diseño del cambio (para que se conviertan en embajadores), cómo pilotar con un subgrupo antes de escalar, cómo comunicar el cambio al equipo explicando el por qué y el beneficio para ellos, y cómo mantener la motivación del equipo durante el período de transición cuando los resultados aún no se ven.

8. **Métricas de innovación comercial: cómo saber si el experimento funcionó**
¿Cómo medir el impacto de una innovación en el proceso de ventas? Propón el sistema de métricas para evaluar experimentos comerciales: métricas de eficiencia del proceso (tiempo en cada etapa del funnel, tasa de conversión por etapa, velocidad del ciclo), métricas de productividad del equipo (ingresos por comercial, actividad generada por el cambio), métricas de calidad del pipeline (porcentaje de deals de alta calidad, tasa de no-shows, deal score), y cómo decidir si escalar o abandonar un experimento basándote en los datos.

**Entregable:**
Un plan de innovación comercial para los próximos seis meses: el experimento más impactante que puedo ejecutar ahora, cómo diseñarlo para que sea medible, y cómo escalar si funciona.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar y ejecutar experimentos de innovación en el proceso comercial',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product innovation framework: de la idea al experimento en tiempo récord',
                'description'       => 'Implementa un framework de innovación de producto que lleve ideas desde el descubrimiento hasta experimentos validados en el menor tiempo posible.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Producto con amplia experiencia construyendo culturas de innovación en equipos de producto en empresas de tecnología de rápido crecimiento. Necesito diseñar un framework de innovación de producto que permita a mi equipo ir desde una idea hasta un experimento validado en el menor tiempo posible, sin sacrificar el rigor ni caer en el teatro de innovación.

**Mi contexto de producto:**
- Tipo de producto: [SaaS B2B, B2C, marketplace, plataforma, app móvil]
- Tamaño del equipo de producto: [PMs, diseñadores, ingenieros]
- Fase de la empresa: [early stage, growth, escala]
- Estado actual de la innovación de producto: [reactivos al mercado, pocas ideas internas, muchas ideas pero pocas validadas, buen proceso de discovery pero lento]
- Mayor ineficiencia actual: [tardamos demasiado en saber si una idea funciona, las ideas se pierden, no tenemos tiempo para explorar fuera del roadmap, falta de alineación sobre qué ideas perseguir]

**Framework completo de innovación de producto:**

1. **El problema de la innovación en equipos de producto: el roadmap como enemigo de la exploración**
La paradoja del equipo de producto en crecimiento: cuando el producto tiene éxito, el roadmap se llena de trabajo de iteración y el equipo no tiene tiempo para explorar. Explica cómo romper este ciclo: la distinción entre horizon 1 (mejorar lo que existe), horizon 2 (extender a adjacencias) y horizon 3 (explorar lo radicalmente nuevo), y cómo asignar recursos de forma deliberada a cada horizonte en lugar de dejar que el roadmap dicte todo.

2. **Sistema de captura y gestión de ideas**
Las buenas ideas vienen de todas partes y a menudo se pierden. Diseña un sistema de gestión de ideas: cómo capturar ideas de múltiples fuentes (el equipo interno, los clientes, el análisis de la competencia, las tendencias del mercado), cómo estructurar la idea en un formato mínimo que facilite la evaluación (problema que resuelve, para quién, hipótesis de valor, tamaño de la oportunidad), y cómo gestionar el backlog de ideas sin que se convierta en un cementerio donde todo entra y nada sale.

3. **Priorización de ideas para experimentar: el framework RICE para innovación**
No todas las ideas merecen el mismo nivel de inversión en exploración. Explica cómo priorizar qué ideas llevar a experimentación: el framework RICE adaptado para innovación (Reach: cuántos usuarios se benefician, Impact: cuánto cambia su situación, Confidence: cuánta evidencia tenemos de que es el problema correcto, Effort: cuánto cuesta validar), cómo diferenciar entre validar el problema (discovery) y validar la solución (deliveryy), y cómo tomar decisiones de priorización con información incompleta.

4. **El sprint de innovación: de la idea al experimento en dos semanas**
El design sprint de Google popularizó la idea de pasar de un problema a un prototipo testado en cinco días. Adapta este concepto a la innovación de producto: cómo estructurar un sprint de innovación de dos semanas (semana de discovery y semana de prototipado y testeo), quién participa (equipo multidisciplinar pequeño), qué artefactos produce cada fase, y cómo decidir al final del sprint si continuar, pivotar o abandonar la idea.

5. **Diseño de experimentos de producto: hipótesis, métricas y criterios de éxito**
Un experimento de producto mal diseñado no enseña nada. Explica cómo diseñar experimentos rigurosos: la estructura de una hipótesis de producto (creemos que [hacer X] resulta en [cambio Y] para [segmento Z] porque [razón]), cómo elegir la métrica más sensible para validar la hipótesis (la métrica que cambiará primero si la hipótesis es correcta), cómo definir los criterios de éxito antes de empezar el experimento (para evitar el sesgo de confirmación), y cuánto tiempo y cuántos usuarios necesitas para confiar en el resultado.

6. **Técnicas de validación rápida: del wizard of oz al smoke test**
Antes de construir, valida. Explica las técnicas de validación rápida que permiten aprender sin invertir en ingeniería: el smoke test o landing page test (anunciar algo antes de construirlo para medir el interés), el wizard of oz (simular la funcionalidad automática con trabajo humano detrás), el concierge (hacer manualmente el servicio que luego automatizarás), y el fake door (un botón en el producto que mide el interés antes de construir la funcionalidad). Para cada técnica, cuándo usarla y cómo interpretar los resultados.

7. **De la validación al roadmap: cómo integrar el aprendizaje de innovación**
El mayor desperdicio en la innovación de producto es validar algo exitosamente y que luego nunca llegue al roadmap. Explica el proceso de transferencia de un experimento exitoso al roadmap: cómo documentar los aprendizajes de forma que el equipo de producto los pueda aprovechar, qué umbrales de evidencia necesita un experimento para justificar inversión en desarrollo, y cómo gestionar la transición entre el equipo de exploración (que hizo el experimento) y el equipo de desarrollo (que lo construirá a escala).

8. **Cultura de innovación de producto: cómo mantenerla cuando escala la empresa**
La cultura de innovación que funciona en una startup de diez personas necesita adaptarse cuando el equipo crece a cien o a mil. Explica cómo escalar la cultura de innovación de producto: cómo institucionalizar las prácticas de innovation sprints y discovery sin que se burocraticen, cómo mantener la velocidad de experimentación cuando los procesos de ingeniería son más rígidos, y cómo medir la salud de la cultura de innovación (velocidad de experimentación, ratio de experimentos vs. features de roadmap, NPS interno del equipo sobre el espacio para innovar).

**Entregable:**
El diseño completo del framework de innovación de producto para mi equipo: las reglas del sistema de ideas, el proceso del sprint de innovación, los criterios de priorización, y las métricas de salud del sistema de innovación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementar un framework de innovación de producto ágil y riguroso',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR innovation: reinventar los procesos de talento para el futuro del trabajo',
                'description'       => 'Transforma los procesos de RRHH con innovación: nuevos modelos de evaluación del desempeño, selección predictiva, y experiencia del empleado diseñada desde cero.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CHRO o director de personas con experiencia en la transformación de departamentos de RRHH en empresas de tecnología y en sectores tradicionales en transformación digital. Necesito reinventar los principales procesos de talento de mi organización para adaptarlos al futuro del trabajo: más ágiles, más basados en datos, más centrados en la experiencia del empleado y menos burocráticos.

**Mi contexto de RRHH:**
- Tipo de empresa y sector: [startup de tecnología, empresa tradicional en transformación, empresa mediana en crecimiento]
- Tamaño del equipo de RRHH: [personas y roles en el departamento]
- Procesos más obsoletos: [evaluación del desempeño anual, selección sin datos, formación no personalizada, ausencia de datos de personas]
- Principales retos de talento: [retención, atracción de perfiles escasos, liderazgo en remoto, gestión de una plantilla multigeneracional]
- Nivel de digitalización actual de RRHH: [procesos en papel, algo de HR tech, stack tecnológico completo]

**Reinvención de los procesos de RRHH:**

1. **Del Annual Review al feedback continuo: reinventando la evaluación del desempeño**
La evaluación anual del desempeño es uno de los procesos más odiados tanto por los empleados como por los managers, y hay evidencia de que no mejora el desempeño. Explica cómo diseñar un sistema de gestión del desempeño más efectivo: feedback en tiempo real (check-ins quincenales en lugar de revisión anual), OKRs o metas dinámicas que se revisan trimestralmente, calibraciones entre managers para garantizar consistencia, y cómo manejar el desempeño insuficiente de forma ágil sin esperar a la revisión anual. ¿Qué dice la investigación sobre qué funciona realmente para mejorar el desempeño?

2. **People analytics: tomar decisiones de talento basadas en datos**
La mayoría de las decisiones de RRHH se toman con intuición. Explica cómo construir una capacidad básica de people analytics: qué datos son los más útiles para tomar decisiones (engagement de los empleados, rotación por departamento y manager, tiempo de cobertura de vacantes, distribución de calibraciones de desempeño), qué herramientas usar para empezar sin ser un equipo de data science (desde Google Sheets avanzado hasta plataformas como Visier o Workday People Analytics), y cuáles son los casos de uso de analytics que mayor valor generan para el negocio.

3. **Experiencia del empleado (EX): diseñar los momentos que importan**
La experiencia del empleado es el equivalente en RRHH a la experiencia del cliente. Explica cómo aplicar el diseño de servicios a la experiencia del empleado: mapear los momentos más importantes del ciclo de vida del empleado (contratación, primer día, primera promoción, cambio de manager, salida), identificar los pain points más frecuentes en cada momento, y diseñar mejoras centradas en el empleado. Incluye la metodología de employee journey mapping y cómo hacer cocreación con los empleados para mejorar sus propios procesos.

4. **Selección de talento 2.0: más predictiva, más justa, más rápida**
El proceso de selección tradicional (CV, entrevista no estructurada, decisión del manager) tiene una validez predictiva del desempeño muy baja. Explica cómo modernizar la selección: structured interviews (preguntas predefinidas, rúbrica de evaluación, misma entrevista para todos los candidatos), work sample tests (demostrar la habilidad en lugar de describirla), panel de entrevistas diverso para reducir sesgo, y timeline agresivo (proceso de selección de menos de dos semanas para no perder candidatos top). Qué dice la investigación sobre qué predice mejor el desempeño.

5. **Aprendizaje y desarrollo en la era del aprendizaje continuo**
El training anual de dos días no funciona para un mundo que cambia cada seis meses. Diseña un sistema de aprendizaje continuo: learning in the flow of work (aprendizaje integrado en el trabajo diario, no separado de él), plataformas de microlearning personalizado, programas de mentoring y peer learning entre empleados, y cómo medir el impacto del aprendizaje en el desempeño (no solo la satisfacción con la formación). Cuánto debería invertir una empresa en desarrollo de sus empleados.

6. **Trabajo híbrido y remoto: los nuevos procesos que necesita RRHH**
El trabajo híbrido ha creado problemas nuevos para RRHH: cómo garantizar equidad entre empleados remotos y presenciales, cómo mantener la cultura en un equipo distribuido, cómo evaluar el desempeño sin visibilidad del trabajo diario, y cómo diseñar el onboarding de nuevos empleados en un entorno híbrido. Diseña las adaptaciones de procesos de RRHH que son necesarias para el trabajo híbrido: políticas claras, rituales de equipo que funcionan en remoto, y herramientas de colaboración asíncrona.

7. **Modelo operativo del departamento de RRHH del futuro**
¿Qué debe hacer el departamento de RRHH cuando muchas de sus tareas operativas se automatizan con IA y tecnología? Explica la evolución del modelo operativo de RRHH: del modelo administrativo (procesar transacciones) al modelo estratégico (partner del negocio en decisiones de talento), qué capacidades necesita el profesional de RRHH del futuro (datos y analytics, diseño de organizaciones, gestión del cambio, marketing interno), y cómo hacer la transición del equipo actual hacia ese modelo.

8. **Métricas de impacto del departamento de RRHH**
RRHH ha sido históricamente malo midiendo su impacto en el negocio. Propón un cuadro de mando de RRHH orientado al impacto: métricas de talento (retención de top performers, tiempo de cobertura de vacantes clave, ratio de promociones internas vs. contrataciones externas), métricas de cultura y engagement (eNPS, participación en encuestas de pulso, absentismo), y métricas de impacto en negocio (productividad por empleado, ingresos por headcount, ROI de los programas de formación).

**Entregable:**
Un plan de transformación de RRHH en dos años: los tres procesos que voy a reinventar primero (los de mayor impacto y viabilidad), el modelo organizativo del departamento de RRHH al que aspiro, y las métricas que usaré para medir el éxito de la transformación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformar los procesos de RRHH con innovación centrada en la experiencia del empleado y los datos',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial innovation: nuevos modelos, instrumentos y la transformación del CFO',
                'description'       => 'Explora la innovación en el sector financiero: open banking, embedded finance, tokenización y cómo el CFO moderno lidera la transformación digital de la función financiera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO innovador o director de transformación financiera con experiencia en la intersección de finanzas y tecnología en empresas de crecimiento rápido y en instituciones financieras tradicionales en transformación. Necesito entender el panorama de la innovación financiera: qué modelos e instrumentos están cambiando el sector, cómo afectan a mi empresa, y cómo el CFO moderno lidera la transformación digital de la función financiera.

**Mi contexto financiero:**
- Tipo de empresa: [empresa no financiera que necesita entender la innovación financiera, fintech, banco o aseguradora en transformación, startup de servicios financieros]
- Rol: [CFO, director financiero, analista de estrategia financiera, emprendedor en el sector fintech]
- Nivel de madurez digital de la función financiera: [procesos muy manuales, algo de automatización, función financiera digital]
- Principal área de innovación que me interesa: [pagos y medios de pago, crédito, gestión de tesorería, mercados de capitales, seguros, regulación]

**Panorama de la innovación financiera:**

1. **Open banking y open finance: cuando los datos bancarios se liberan**
El open banking es uno de los cambios regulatorios y tecnológicos más disruptivos del sector financiero. Explica qué es el open banking (la obligación de los bancos de dar acceso a los datos de los clientes, con su consentimiento, a terceros a través de APIs), qué lo impulsó (PSD2 en Europa, Open Banking Standard en UK), qué casos de uso ha habilitado (verificación de ingresos para crédito, pagos directos entre cuentas, agregación de finanzas personales, PFM), y hacia dónde va el open finance (extensión a más sectores: inversión, pensiones, seguros).

2. **Embedded finance: los servicios financieros dentro de productos no financieros**
El embedded finance es la tendencia a integrar servicios financieros (pagos, crédito, seguros) dentro de productos y plataformas no financieras. Explica por qué es relevante para empresas no financieras: cómo una empresa de e-commerce puede ofrecer financiación en el punto de venta (BNPL, buy now pay later), cómo una plataforma de gestión empresarial puede ofrecer cuentas bancarias y tarjetas a sus clientes (banking-as-a-service), y qué implica para el modelo de negocio (nuevas fuentes de ingresos, mayor engagement, mayor riesgo regulatorio). ¿Debería mi empresa considerar el embedded finance?

3. **Tokenización de activos: el futuro de los mercados de capitales**
La tokenización es la representación de activos reales (inmuebles, bonos, acciones, commodities) como tokens en una blockchain. Explica qué posibilidades abre: fraccionamiento de activos (invertir en fracciones de un inmueble), liquidez para activos ilíquidos (mercados secundarios para activos privados), liquidación casi instantánea de operaciones (versus los dos días actuales en bolsa), y smart contracts que automatizan el pago de cupones o dividendos. Dónde está el mercado hoy (institucional, poc de bancos centrales) y qué barreras regulatorias y tecnológicas quedan.

4. **Inteligencia artificial en la función financiera: más allá del análisis de datos**
La IA está transformando la función financiera más allá de los cuadros de mando bonitos. Explica las aplicaciones más maduras: forecasting financiero con ML (más preciso que los modelos de Excel), automatización del cierre contable (robotic process automation para tareas repetitivas), detección de anomalías en las cuentas (auditoría continua con IA), y generación automática de informes financieros narrativos (de los números a la narrativa en minutos). Qué herramientas están disponibles hoy para CFOs que no quieren esperar a que su ERP lo integre.

5. **Nuevos modelos de financiación: venture debt, revenue-based financing y crowdfunding**
El crédito bancario tradicional no es la única opción de financiación. Explica los modelos alternativos de financiación más relevantes hoy: venture debt (deuda para startups con tracción que complementa el equity), revenue-based financing (financiación que se devuelve como porcentaje de los ingresos mensuales, sin diluir a los founders), crowdfunding de equity (la empresa se financia con muchos pequeños inversores), y los fondos de deuda privada (direct lending) que han crecido enormemente como alternativa al banco. Para cada uno, cuándo es apropiado, coste y condiciones típicas, y riesgos.

6. **La transformación digital de la función financiera: del bean counter al value creator**
El CFO del siglo XXI tiene un rol muy diferente al del director financiero tradicional. Explica cómo está evolucionando la función financiera: del control (garantizar que los números son correctos) al análisis predictivo (qué va a pasar y por qué), del reporting histórico al forecasting continuo (rolling forecast), y del soporte al negocio a la co-creación de estrategia con el CEO y el resto del C-suite. Qué capacidades necesita el equipo financiero del futuro (analytics, comunicación, conocimiento del negocio, tecnología).

7. **Regulación de la innovación financiera: navegar el entorno regulatorio**
La innovación financiera siempre choca con la regulación. Explica el panorama regulatorio de la innovación financiera en Europa: el papel del regulatorio en sandbox (CNMV, BdE, autoridades de otros países) que permite a las fintech experimentar con autorización, las regulaciones clave que todo innovador financiero debe conocer (MiCA para cripto, PSD3 que viene, AI Act en finanzas, DORA para resiliencia operacional digital), y cómo navegar el proceso de obtención de licencias sin morir en el intento.

8. **El CFO como líder de la transformación digital**
El CFO tiene acceso a los datos de toda la empresa y a la confianza del CEO y del consejo. Explica por qué el CFO es a menudo el mejor candidato para liderar la transformación digital: cómo el CFO puede usar su posición para pilotar la transformación (empezando por digitalizar la propia función financiera como caso de éxito), cómo construir el business case de la transformación digital con el rigor financiero que da credibilidad, y qué capacidades necesita el CFO para liderar la transformación sin depender completamente del CTO.

**Entregable:**
Un mapa de la innovación financiera relevante para mi empresa o sector, con las tres oportunidades que más impacto pueden tener en mi modelo de negocio en los próximos dos años y un plan de exploración de cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender y liderar la innovación financiera en la empresa y en la función de CFO',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal innovation: el despacho que innova en un sector resistente al cambio',
                'description'       => 'Diseña una estrategia de innovación para tu práctica jurídica: nuevos modelos de negocio, legaltech, metodologías ágiles y cómo diferenciarse en un mercado conservador.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un managing partner o director de innovación jurídica con experiencia transformando despachos de abogados y departamentos legales en organizaciones más ágiles, tecnológicas y centradas en el cliente. Necesito diseñar una estrategia de innovación para mi práctica jurídica en un sector conocido por su resistencia al cambio, pero que está siendo presionado desde múltiples frentes para transformarse.

**Mi contexto jurídico:**
- Tipo de práctica: [despacho boutique, despacho de tamaño medio, firma internacional, departamento jurídico de empresa]
- Área de especialización: [mercantil, laboral, penal, procesal, regulatorio, multi-área]
- Presiones de cambio que siento: [competencia de precios, clientes que exigen más transparencia y eficiencia, legaltech que automatiza trabajo que hacíamos nosotros, fuga de talento joven]
- Estado actual de la innovación: [ninguna iniciativa, algunas herramientas nuevas pero sin estrategia, hay una persona responsable de innovación pero sin recursos]

**Estrategia de innovación jurídica:**

1. **Por qué el sector jurídico es resistente al cambio y por qué ya no puede serlo**
El derecho tiene razones históricas para ser conservador: la precisión, la estabilidad y la predictibilidad son valores jurídicos fundamentales. Explica por qué estas razones están dejando de ser suficientes para frenar la transformación: la presión de los clientes corporativos que exigen más eficiencia y transparencia en los honorarios, la entrada de competidores tecnológicos en tareas jurídicas de alto volumen y bajo valor, la dificultad de retener a los mejores abogados jóvenes que quieren trabajar en entornos más innovadores, y la creciente brecha entre el coste de los servicios jurídicos y la capacidad de pago de pymes y particulares.

2. **Nuevos modelos de negocio jurídico: más allá de las horas facturables**
El modelo de facturación por horas tiene problemas estructurales: penaliza la eficiencia, crea opacidad para el cliente, y hace imposible escalar sin contratar más abogados. Explica los modelos alternativos de negocio jurídico: honorarios fijos por proyecto o por asunto (fixed fees), subscripción de servicios jurídicos (acceso a un equipo de abogados por una cuota mensual fija), success fees (honorarios condicionados al resultado), y los modelos de legaltech que dan acceso a servicios jurídicos estandarizados a través de plataformas digitales. Para cada modelo, ventajas, riesgos y en qué tipo de práctica tiene más sentido.

3. **Legaltech: el mapa de herramientas que transforman la práctica jurídica**
El ecosistema de legaltech ha crecido enormemente. Explica las categorías de herramientas con mayor impacto: gestión de asuntos y despacho (práctica en la nube, time tracking, facturación), automatización de documentos (document assembly para contratos estándar), gestión y análisis de contratos (contract lifecycle management), plataformas de firma electrónica, herramientas de investigación jurídica con IA, y plataformas de resolución alternativa de disputas online. Cuál es la tecnología de mayor retorno de inversión para un despacho de tamaño medio.

4. **Metodologías ágiles aplicadas al derecho: legal design y design thinking**
El design thinking y las metodologías ágiles llegaron al mundo jurídico bajo el nombre de legal design. Explica qué es el legal design: el principio de poner al usuario en el centro (cliente, juez, contraparte que leerá el contrato), cómo el diseño visual mejora los contratos (plain language, esquemas, tablas en lugar de párrafos interminables), cómo las metodologías ágiles mejoran la gestión de proyectos jurídicos (sprints, reuniones de seguimiento cortas, entrega en hitos en lugar de al final del proceso), y cómo implementar el legal design sin necesidad de ser diseñador.

5. **Gestión del conocimiento jurídico: convertir el trabajo del equipo en capital intelectual**
En la mayoría de los despachos, el conocimiento vive en la cabeza de los socios o en documentos que nadie encuentra. Explica cómo construir un sistema de gestión del conocimiento jurídico: base de datos de precedentes (plantillas y contratos anteriores de alta calidad), base de jurisprudencia interna (los argumentos que funcionaron en el pasado), y base de know-how procedimental (cómo hacemos las cosas aquí). Cómo hacer que el equipo contribuya al sistema de conocimiento y cómo mantenerlo actualizado.

6. **Talento y cultura en el despacho innovador**
Los mejores abogados jóvenes hoy eligen empleadores que les ofrecen trabajo interesante, tecnología moderna y un modelo de carrera transparente. Explica cómo atraer y retener talento en un entorno jurídico innovador: qué cambios en el modelo de carrera atraen a los mejores abogados jóvenes (mentoring real, variedad de asuntos, flexibilidad, formación continua), cómo construir una cultura de innovación en un despacho donde los socios son también los dueños, y cómo gestionar la resistencia de los socios más seniors al cambio.

7. **El acceso a la justicia como oportunidad de innovación**
Millones de personas no pueden permitirse servicios jurídicos profesionales. Explica cómo algunos despachos innovadores han convertido el problema del acceso a la justicia en un modelo de negocio: plataformas de servicios jurídicos a bajo coste para particulares y pymes, herramientas de autoayuda jurídica (document generation para contratos simples), y modelos de pro bono tecnológicamente escalable. ¿Puede la innovación jurídica democratizar el acceso a la justicia?

8. **Hoja de ruta de innovación para un despacho o departamento jurídico**
¿Por dónde empezar? Diseña una hoja de ruta de innovación jurídica en tres horizontes: en los próximos tres meses (quick wins: adoptar una herramienta de firma electrónica, revisar el modelo de facturación de los asuntos más frecuentes, hacer un workshop de legal design con el equipo), en los próximos doce meses (implementar un sistema de gestión del conocimiento, pilotar un nuevo modelo de honorarios en un segmento de clientes), y a tres años (transformación del modelo de negocio o lanzamiento de una línea de servicio tecnológica).

**Entregable:**
Un diagnóstico del estado de innovación de mi despacho o departamento jurídico y un plan de acción para los próximos doce meses, con las tres iniciativas prioritarias y sus criterios de éxito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar una estrategia de innovación jurídica para un despacho o departamento legal',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS innovation: experimentar con nuevos modelos de éxito del cliente',
                'description'       => 'Reinventa tu modelo de customer success con experimentos en nuevos formatos de engagement, estructuras de equipo y métricas que reflejen el valor real entregado al cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia construyendo y transformando equipos de CS en empresas SaaS B2B de rápido crecimiento. Necesito diseñar una estrategia de innovación para mi operación de customer success: experimentar con nuevos modelos de engagement con clientes, nuevas estructuras de equipo, y nuevas métricas que reflejen mejor el valor real que generamos, más allá del NRR y el churn.

**Mi contexto de CS:**
- Tipo de empresa y producto: [SaaS B2B, plataforma, herramienta de productividad]
- Segmentos de clientes: [enterprise, mid-market, SMB, o mix]
- Modelo de CS actual: [high-touch CSM por segmento, pooled CSM, tech-touch, hybrid]
- Principal problema del modelo actual: [el equipo no puede escalar sin contratar, los clientes no se implican con el proceso de QBR, el modelo high-touch no es rentable para los clientes de menor ARR, no tenemos datos de salud del cliente confiables]
- Presupuesto de experimentación: [limitado, disponemos de algo, podemos invertir en innovación]

**Innovación en el modelo de customer success:**

1. **El customer success 2.0: más allá del gestor de cuenta reactivo**
El modelo de CS tradicional (un CSM por segmento de clientes, QBR trimestral, escalación de problemas) está siendo cuestionado. Explica hacia dónde evoluciona el customer success: de reactivo a proactivo (intervenir antes de que el cliente tenga un problema), de generalista a especialista (CSMs con conocimiento profundo del sector del cliente), y de gestor de relación a arquitecto del éxito (diseñar junto al cliente el camino hacia sus objetivos de negocio con el producto). ¿Cuáles son los nuevos modelos de engagement que están emergiendo?

2. **Segmentación de clientes para el CS: más allá del ARR**
La mayoría de los equipos de CS segmentan por ARR para decidir cuánto tiempo dedicar a cada cliente. Explica modelos de segmentación más sofisticados: segmentación por potencial de expansión (¿cuánto puede crecer este cliente?), segmentación por complejidad de uso (¿cuánto esfuerzo de CS necesita para tener éxito?), segmentación por riesgo de churn (datos predictivos, no solo ARR), y segmentación por estrategia de engagement (qué clientes se benefician del high-touch, cuáles del tech-touch, y cuáles del community-led). Cómo construir un modelo de segmentación dinámica que evolucione con el cliente.

3. **El modelo de CS pooled: cuando un equipo comparte una cartera**
El modelo pooled (un pool de CSMs comparte una cartera de clientes en lugar de que cada CSM tenga los suyos asignados) está ganando adeptos como alternativa al modelo 1:1 tradicional. Explica cómo funciona: cómo se distribuye el trabajo en el pool (por especialidad, por urgencia, por disponibilidad), qué herramientas se necesitan para que el pool tenga contexto de cada cliente, cuál es el impacto en la satisfacción del cliente (el riesgo de la falta de relación personal y cómo mitigarlo), y para qué segmentos de clientes funciona mejor.

4. **Digital CS y tech-touch: escalar sin escalar el equipo**
El digital customer success es la respuesta al problema de escalar la atención sin crecer el equipo de forma proporcional. Explica cómo diseñar un programa de digital CS: segmentos donde el tech-touch es apropiado (SMB, clientes con uso predecible), canales del digital CS (email sequences basados en comportamiento del producto, webinars, comunidad, in-app messaging), el rol del CSM en el modelo digital (diseñador de programas, no ejecutor de relaciones 1:1), y cómo medir el éxito del digital CS (retention, NPS, expansión en segmentos tech-touch vs. benchmarks del mercado).

5. **Customer health score: construir uno que realmente prediga el churn**
La mayoría de los health scores están mal construidos: usan métricas de actividad (logins, features usadas) que no predicen bien el churn porque no miden el valor recibido por el cliente. Explica cómo construir un health score predictivo: qué métricas incluir (outcome metrics que reflejan el valor que el cliente obtiene del producto, no solo el uso), cómo validar que el health score predice de verdad el churn (correlación con churns históricos), cómo ponderar las distintas variables, y cómo hacer que el health score sea accionable (¿qué hace el CSM cuando ve un cliente en amarillo?).

6. **El QBR reinventado: de PowerPoint de ochenta páginas a conversación de valor**
El QBR (quarterly business review) es el ritual más criticado del CS: el CSM prepara un deck larguísimo que el cliente apenas lee, y la reunión se convierte en un repaso de métricas sin conversación de valor real. Explica cómo reinventar el QBR: el executive business review (EBR) que se centra en los objetivos de negocio del cliente (no en las métricas de producto), el formato más corto y ágil (45 minutos en lugar de dos horas), cómo involucrar al executive sponsor del cliente, y cuándo un QBR no es necesario (hay segmentos de clientes para los que otra forma de engagement funciona mejor).

7. **Innovación en las métricas de CS: medir el valor entregado, no solo la retención**
El NRR y el churn son métricas importantes pero insuficientes para capturar el valor que genera el equipo de CS. Explica métricas más ricas: Net Promoter Score segmentado por tipo de cliente y por CSM (¿qué CSMs crean más promotores?), time-to-value (¿cuánto tarda el cliente en obtener su primer resultado significativo?), customer effort score (¿cuánto esfuerzo pone el cliente en usar el producto y trabajar con CS?), y customer impact score (¿qué resultados de negocio documentados ha conseguido el cliente gracias al producto?).

8. **CS como fuente de innovación de producto**
El equipo de CS tiene una visión privilegiada de los problemas reales de los clientes. Explica cómo convertir el CS en una fuente de innovación de producto: proceso sistemático para capturar y documentar el feedback de clientes (más allá de los feature requests puntuales), cómo priorizar el feedback de CS en el roadmap de producto, y cómo crear un circuito de comunicación bidireccional entre CS y producto que funcione de verdad (no el canal de Slack que nadie lee).

**Entregable:**
El diseño del nuevo modelo de CS para mi empresa: los experimentos que voy a lanzar en los próximos noventa días, el modelo de segmentación de clientes actualizado, las métricas de éxito que voy a adoptar, y el plan de transición desde el modelo actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Reinventar el modelo de customer success con nuevos formatos de engagement y métricas',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Innovar como freelance: nuevos servicios, modelos y mercados',
                'description'       => 'Reinventa tu práctica como freelance explorando nuevos servicios, modelos de negocio y mercados que te permitan crecer más allá del intercambio de tiempo por dinero.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de estrategia para freelancers y emprendedores independientes con experiencia ayudando a profesionales a escalar sus prácticas más allá del modelo hora-facturada. Necesito una guía completa para innovar en mi práctica como freelance: explorar nuevos servicios que puedo ofrecer, modelos de negocio que no dependan de mi tiempo disponible, y mercados a los que puedo acceder más allá de mis canales habituales.

**Mi situación actual como freelance:**
- Especialidad principal: [diseño, desarrollo, consultoría, redacción, coaching, formación, marketing, otro]
- Años de experiencia y nivel de conocimiento del sector: [junior, intermedio, experto]
- Ingresos actuales y objetivo: [rango actual y dónde quiero estar en dos años]
- Principal limitación de crecimiento: [no puedo tomar más clientes sin más horas, mercado local saturado, competencia de precios, servicios difícilmente diferenciados]
- Activos que ya tengo pero no estoy aprovechando: [contenido publicado, audiencia en redes, metodologías propias, casos de éxito, red de contactos en el sector]

**Estrategias de innovación para freelancers:**

1. **Diagnóstico: por qué el modelo de freelance tradicional tiene techo**
El modelo de freelance de intercambio de tiempo por dinero tiene un límite físico: el número de horas que puedes trabajar. Explica los límites del modelo tradicional: el techo de ingresos (solo puedes ganar más subiendo la tarifa o trabajando más horas), la inestabilidad de ingresos (cuando dejas de trabajar, dejas de ingresar), la dependencia de clientes individuales, y el riesgo de que una enfermedad o una crisis personal destruya el negocio. ¿Cuál es la alternativa y cuánto tiempo realista lleva construirla?

2. **Productizar tu conocimiento: de servicios a productos**
La productización es el proceso de convertir un servicio que se hace a medida en algo más estandarizado y repetible. Explica los distintos niveles de productización: el paquete de servicio (lo que antes hacías a medida, ahora con un alcance, proceso y precio fijos), el servicio de suscripción (el cliente paga una cuota mensual por un servicio continuo y predecible), el producto digital (un curso, una plantilla, una guía descargable que se vende sin tu tiempo), y el software o herramienta (el límite más ambicioso, cuando tu conocimiento se convierte en tecnología). Para cada nivel, explica el esfuerzo de implementación y el potencial de ingresos.

3. **Cursos y formación: convertir tu expertise en un producto escalable**
Crear un curso online es una de las formas más comunes de escalar un negocio de conocimiento. Explica cómo abordar la creación de un curso: cómo elegir el tema (lo que más preguntas te hacen, el problema más frecuente que resuelves), cómo validar que hay demanda antes de crearlo (presell, lista de espera, workshops en vivo previos), las opciones de formato (curso grabado vs. cohort-based vs. taller en vivo), las plataformas disponibles (Teachable, Kajabi, Gumroad, Maven), y cómo comercializarlo sin pagar publicidad (audiencia propia, afiliados, partnerships).

4. **Nuevos mercados: más allá del mercado local y los clientes habituales**
Muchos freelancers están limitados por el mercado en el que empezaron. Explica cómo explorar nuevos mercados: acceder al mercado internacional en inglés (cuándo tiene sentido, cómo preparar tu presencia online, cómo fijar precios para mercados internacionales), nichos de mercado que pagan más (qué sectores pagan más por los mismos servicios: fintech, healthcare, enterprise, etc.), y cómo hacer la transición de un mercado saturado y de precio a un mercado de nicho y de valor.

5. **El modelo de agencia: crecer construyendo un equipo**
Algunos freelancers que quieren crecer más allá de sus propias horas construyen equipos: subcontratan trabajo a otros freelancers bajo su marca. Explica el modelo de agencia o studio: cuándo tiene sentido dar el salto (cuando rechazas proyectos por falta de capacidad, cuando tienes flujo constante de proyectos), cómo gestionar la calidad del trabajo de otros (briefing, revisión, feedback), cómo fijar precios cuando sucontratas (margen sobre el coste del colaborador), y los riesgos del modelo de agencia (dependencia de los colaboradores, gestión de múltiples proyectos, responsabilidad de employer de facto).

6. **Consultoría estratégica: del hacer al asesorar**
Cuando un freelance tiene suficiente experiencia y reputación, puede hacer la transición de ejecutor a consultor estratégico. Explica esta transición: cuándo estás listo para cobrar por tu criterio y no solo por tu trabajo, cómo posicionarte como consultor estratégico (qué comunica autoridad en tu área), cómo definir y vender un engagement de consultoría (cómo es una sesión de estrategia, un retainer de asesoramiento), y cómo fijar precios cuando vendes conocimiento en lugar de tiempo.

7. **Audiencia y contenido como canal de adquisición de clientes**
Los freelancers que construyen una audiencia tienen un canal de adquisición de clientes que trabaja mientras ellos duermen. Explica cómo construir audiencia como freelance: elegir la plataforma donde está tu cliente ideal (LinkedIn para B2B, Instagram para B2C creativo, YouTube para búsqueda), qué tipo de contenido muestra tu expertise y atrae clientes (no contenido para colegas, sino contenido que demuestra que resuelves el problema de tu cliente), y cómo convertir audiencia en clientes (sin hacer spam, con llamadas a la acción suaves que llevan al descubrimiento de tus servicios).

8. **Métricas de un freelance que innova en su modelo de negocio**
Cuando empiezas a diversificar ingresos, necesitas un cuadro de mando diferente. Propón las métricas de un freelance que está en transición hacia un modelo de negocio más diversificado: porcentaje de ingresos de servicios vs. productos vs. enseñanza, ingresos recurrentes vs. ingresos puntuales, clientes activos por tipo de servicio, coste de adquisición de cliente por canal, y margen por tipo de ingreso (cuánto te queda después de tu tiempo y costes). Cómo usar estas métricas para tomar decisiones sobre dónde invertir tiempo y energía.

**Entregable:**
Un plan de innovación de tu práctica freelance en doce meses: el nuevo servicio o modelo que vas a desarrollar, los pasos concretos para los primeros noventa días, y los criterios de éxito para saber si vale la pena seguir invirtiendo en esa dirección.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Innovar en la práctica freelance con nuevos servicios, modelos de negocio y mercados',
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
