<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills202Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing a 3 años',
                'description'      => 'Diseña la estrategia de marketing a largo plazo: análisis del mercado, posición competitiva y el plan que conecta las acciones del equipo con los objetivos de negocio a tres años vista.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Marketing Officer con experiencia liderando equipos de marketing en empresas B2B SaaS en distintas etapas de crecimiento, desde Series A hasta empresas cotizadas. Voy a explorar contigo cómo construir una estrategia de marketing sólida a tres años vista.

Mi contexto: [describe tu empresa: sector, etapa de financiación, tamaño del equipo de marketing, principales canales activos y el mayor reto estratégico que enfrentas hoy]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El análisis de partida: dónde estamos de verdad**
Antes de trazar el rumbo a tres años, necesitamos entender con honestidad la posición actual. Guíame por el análisis estratégico de marketing que debemos hacer: el análisis de la cuota de voz y la percepción de marca en el mercado, la evaluación del rendimiento de los canales actuales (cuáles generan pipeline real, cuáles consumen recursos sin retorno), el análisis de la competencia (cómo se posicionan, qué mensajes usan, en qué canales invierten) y la auditoría interna del equipo (capacidades existentes, brechas y deuda técnica en el stack de marketing).

Dame el framework de diagnóstico que usarías y las preguntas que no deben quedar sin responder antes de escribir una sola línea de estrategia.

**2. El análisis del mercado y la oportunidad**
Una estrategia a tres años necesita una visión clara del mercado en el que va a competir. Explícame cómo analizar el mercado con rigor: la definición del TAM, SAM y SOM con metodologías bottom-up y top-down, la identificación de los segmentos con mayor potencial de crecimiento, el análisis de las tendencias macro que van a redefinir el mercado en los próximos tres años (tecnológicas, regulatorias, de comportamiento del comprador) y el mapa de las dinámicas competitivas que determinarán quién gana cuota en este período.

**3. El posicionamiento competitivo a largo plazo**
El posicionamiento es la decisión estratégica más importante del marketing. Explícame cómo elegir y comprometer la empresa con un posicionamiento que sea relevante, diferenciado y defendible a tres años: los frameworks de posicionamiento (la propuesta de valor única, el concepto de categoría, el enemy framing), cómo validar el posicionamiento con el mercado antes de apostar todo por él y cómo evitar el posicionamiento genérico que no diferencia de nadie.

Incluye los errores más comunes en la definición del posicionamiento y cómo detectarlos antes de que sea demasiado tarde.

**4. Las apuestas estratégicas del plan de marketing**
Una estrategia a tres años no puede ser un listado de tácticas: debe ser un conjunto de apuestas estratégicas que, si funcionan, transforman la posición de la empresa en el mercado. Ayúdame a definir las tres o cuatro apuestas estratégicas de marketing que estructurarán el plan: la expansión a nuevos segmentos o geografías, la construcción de una categoría propia, el dominio de un canal que la competencia ignora o la transformación del modelo de go-to-market.

Para cada tipo de apuesta, dame los criterios que determinan cuándo vale la pena hacerla y cuándo es demasiado arriesgada para el momento de la empresa.

**5. El plan de ejecución: de la estrategia a las acciones**
La estrategia más brillante vale cero si no se convierte en un plan de ejecución concreto. Explícame cómo traducir las apuestas estratégicas en un roadmap de marketing a tres años: la estructura del plan por horizontes temporales (qué se hace en los primeros 12 meses, qué se construye en el segundo año, qué se cosecha en el tercero), la asignación de recursos entre las iniciativas de crecimiento y las de mantenimiento de la base actual y los hitos que permiten evaluar si el plan sigue siendo válido o hay que ajustarlo.

**6. El sistema de medición: saber si la estrategia está funcionando**
Una estrategia a tres años necesita un sistema de medición que detecte a tiempo si las apuestas están funcionando. Propón el framework de métricas de la estrategia: los OKRs anuales de marketing que traducen la visión a largo plazo en objetivos medibles en el corto, los indicadores adelantados que predicen si vamos en la dirección correcta (cuota de voz, share of search, pipeline generado por canal), los indicadores de lagging que confirman que el modelo funciona (CAC, LTV, porcentaje de ingresos generados por marketing) y el ritmo de revisión estratégica que permite ajustar sin abandonar prematuramente las apuestas.

Quiero una estrategia realista, no una visión inalcanzable. Franqueza sobre los trade-offs y sobre qué hay que sacrificar para tener foco estratégico real.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de marketing a largo plazo que conecta las acciones del equipo con los objetivos de negocio',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Decisiones técnicas con impacto a largo plazo',
                'description'      => 'Toma decisiones de arquitectura que no lamentarás en 3 años: evaluación de alternativas técnicas, tradeoffs documentados y el ADR que preserva el contexto para el equipo futuro.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un staff engineer o arquitecto de software con experiencia tomando y documentando decisiones técnicas de alto impacto en sistemas que han escalado durante años. Voy a explorar contigo cómo tomar y documentar decisiones de arquitectura que resistan el paso del tiempo.

Mi contexto: [describe la decisión técnica que tienes delante: qué problema estás resolviendo, cuáles son las alternativas que estás evaluando y cuáles son las principales incertidumbres que te preocupan]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema de las decisiones técnicas irreversibles**
No todas las decisiones técnicas son iguales. Algunas son reversibles sin demasiado coste; otras te acompañan durante años. Explícame cómo clasificar las decisiones técnicas por su reversibilidad y su impacto: el concepto de decisiones de tipo 1 (difíciles de deshacer) vs. tipo 2 (fácilmente reversibles) aplicado a la arquitectura de software, las señales que indican que una decisión técnica merece un proceso riguroso de evaluación y las consecuencias de tomar decisiones irreversibles sin el análisis adecuado.

Dame ejemplos concretos de decisiones técnicas que parecían reversibles y resultaron no serlo.

**2. El proceso de evaluación de alternativas técnicas**
Una buena decisión técnica requiere un proceso estructurado de evaluación de alternativas. Guíame por el proceso: cómo asegurarse de que el espacio de alternativas está suficientemente explorado antes de elegir (el error de enamorarse de la primera solución que se te ocurre), cómo definir los criterios de evaluación relevantes para el contexto de la decisión (rendimiento, mantenibilidad, coste operativo, curva de aprendizaje del equipo, ecosistema y comunidad), cómo puntuar las alternativas contra los criterios sin que el proceso se convierta en una validación de la opción que ya querías elegir.

**3. Los tradeoffs que nadie te dice**
Cada decisión de arquitectura tiene tradeoffs que la documentación oficial no menciona y que solo descubres cuando ya has tomado la decisión. Explícame cómo sacar a la luz los tradeoffs reales de una decisión técnica: el valor de hablar con equipos que ya tomaron esa decisión (qué lamentaron, qué les sorprendió positivamente), cómo identificar los sesgos que nublan la evaluación (el sesgo de lo nuevo, el sesgo de lo familiar, el hype de la tecnología de moda) y cómo ponderar los tradeoffs según el contexto específico de tu equipo y tu empresa.

**4. El Architecture Decision Record (ADR): documentar para el futuro**
El ADR es el artefacto que preserva el contexto de una decisión técnica para el equipo que tendrá que vivir con ella años después. Explícame cómo escribir un ADR que realmente sirva: la estructura que incluye el contexto (por qué esta decisión fue necesaria en este momento), las alternativas consideradas (con sus pros y contras reales), la decisión tomada (y el razonamiento detrás, no solo el qué sino el por qué), las consecuencias esperadas (positivas y negativas) y los criterios que indicarían que la decisión debe ser revisada en el futuro.

Dame una plantilla de ADR con comentarios sobre cómo rellenar cada sección de forma útil.

**5. La dimensión humana de las decisiones técnicas**
Las decisiones de arquitectura no son puramente técnicas: tienen una dimensión política y humana que determina si se ejecutan con éxito. Explícame cómo gestionar esa dimensión: cómo involucrar al equipo en el proceso de decisión para aumentar el buy-in sin convertirlo en decisión por comité, cómo comunicar una decisión técnica difícil a un equipo que prefería otra opción, cómo gestionar el desacuerdo con miembros senior del equipo que defienden alternativas distintas y cómo documentar el contexto de una decisión que va a ser impopular para que el equipo futuro entienda por qué se tomó.

**6. El sistema de revisión de decisiones técnicas**
Las decisiones de arquitectura no deben ser eternas: deben revisarse cuando el contexto cambia. Propón un sistema de revisión de decisiones técnicas: la cadencia de revisión de las ADRs existentes (¿cuándo tiene sentido revisitar una decisión?), las señales que indican que una decisión técnica ha quedado obsoleta y debería reemplazarse y el proceso de migración cuando la decisión correcta es cambiar una decisión anterior sin romper el sistema.

Quiero concreción: ejemplos de ADRs bien escritos, los errores más comunes en la toma de decisiones técnicas y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Tomar y documentar decisiones de arquitectura que el equipo futuro entenderá y agradecerá',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Visión de diseño y estrategia de producto',
                'description'      => 'El diseñador que piensa en años, no en sprints: construye la visión de diseño que inspira al equipo, guía las decisiones de corto plazo y conecta con la estrategia del negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Design o Chief Design Officer con experiencia construyendo visiones de diseño en empresas de producto tech que han pasado por distintas etapas de crecimiento. Voy a explorar contigo cómo construir y comunicar una visión de diseño que conecte con la estrategia del negocio.

Mi contexto: [describe tu situación: diseñador que quiere elevar su impacto estratégico, design lead que necesita construir la visión de su área, o empresa que quiere definir hacia dónde debe evolucionar el diseño del producto]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Qué es una visión de diseño y para qué sirve**
Una visión de diseño no es un moodboard ni un conjunto de principios genéricos. Es una imagen concreta del futuro que el equipo de diseño va a construir. Explícame qué es realmente una visión de diseño: la diferencia entre visión (adónde vamos), estrategia (cómo llegamos) y principios (cómo tomamos decisiones en el camino), el valor de tener una visión compartida en un equipo de diseño (alineación, velocidad de decisión, coherencia), y los síntomas de un equipo de diseño que opera sin visión (decisiones contradictorias, diseño reactivo, falta de narrativa hacia el negocio).

**2. El proceso de construcción de la visión**
La visión de diseño no se escribe en un sprint: se construye a través de un proceso de exploración y convergencia. Guíame por el proceso: la investigación de las necesidades de los usuarios que todavía no están cubiertas (los jobs to be done que el producto actual resuelve mal o no resuelve en absoluto), el análisis de las tendencias de diseño e interacción que van a definir las expectativas del usuario en los próximos años, la exploración de los referentes del sector y de fuera del sector (los productos que están redefiniendo lo que los usuarios consideran posible), y el proceso de convergencia desde la exploración hasta una visión concreta y comunicable.

**3. Los artefactos de la visión: cómo hacerla tangible**
Una visión de diseño que solo existe como texto en una presentación no es una visión: es una declaración de intenciones. Explícame cómo hacer la visión tangible: los prototipos de concepto (north star prototypes) que muestran cómo se vería el producto si la visión se hace realidad, los storyboards de usuario que narran cómo cambiaría la experiencia del usuario, los principios de diseño que operacionalizan la visión en decisiones concretas del día a día y las métricas de experiencia que permiten medir si nos acercamos a la visión.

**4. Comunicar la visión al negocio**
El mayor reto de la visión de diseño no es construirla: es conseguir que el negocio la entienda y la compre. Explícame cómo comunicar la visión de diseño a stakeholders no diseñadores: cómo conectar la visión de experiencia con los objetivos de negocio (retención, conversión, NPS), cómo traducir el lenguaje del diseño al lenguaje del negocio, cómo presentar la visión en el C-level y conseguir recursos para ejecutarla y cómo construir alianzas con product y engineering para que la visión sea un compromiso compartido, no una aspiración unilateral del equipo de diseño.

**5. De la visión al roadmap: conectar el largo plazo con el día a día**
La visión sin ejecución es irrelevante. Explícame cómo conectar la visión de diseño con el trabajo del equipo en el corto plazo: el concepto de horizonte de diseño (el trabajo de hoy, el trabajo del próximo trimestre y el trabajo del próximo año), cómo priorizar el backlog de diseño usando la visión como criterio de desempate, cómo gestionar la tensión entre el diseño explorador (que construye la visión a largo plazo) y el diseño de ejecución (que da soporte a los sprints del equipo de producto) y cómo comunicar al equipo que el trabajo de hoy contribuye a la visión a largo plazo.

**6. Mantener y evolucionar la visión**
Una visión de diseño que no evoluciona se convierte en un documento obsoleto que nadie consulta. Explícame cómo mantener la visión viva: la cadencia de revisión (cuándo revisar la visión y qué señales indican que necesita actualizarse), cómo incorporar el aprendizaje del equipo y de los usuarios sin perder el hilo conductor de la visión y cómo gestionar los cambios estratégicos de la empresa (nuevos mercados, nuevos modelos de negocio, nuevos competidores) que pueden obligar a redefinir la visión de diseño.

Quiero ejemplos concretos de visiones de diseño que han funcionado y las que han quedado en el cajón, y el análisis de por qué.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y comunicar la visión de diseño que conecta la experiencia del usuario con la estrategia del negocio',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Go-to-market strategy',
                'description'      => 'Diseña la estrategia de entrada al mercado para un nuevo producto o segmento: ICP, canales, propuesta de valor diferenciada y el plan de lanzamiento que maximiza la tracción inicial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Ventas o Chief Revenue Officer con experiencia liderando lanzamientos de nuevos productos y expansiones a nuevos segmentos en empresas B2B SaaS. Voy a explorar contigo cómo diseñar una go-to-market strategy que maximice las posibilidades de tracción real.

Mi contexto: [describe el lanzamiento que tienes por delante: nuevo producto, nuevo segmento, nueva geografía o nueva línea de negocio. Incluye qué sabes del mercado objetivo y qué incertidumbres principales tienes]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El diagnóstico previo: lo que debes saber antes de diseñar el GTM**
Una go-to-market mal diseñada no es un problema de ejecución: es un problema de información. Antes de diseñar el plan, explícame qué necesito saber: la validación del problema (¿el problema que resuelvo es real, urgente y prevalente en el segmento objetivo?), la validación de la solución (¿mi solución es suficientemente mejor que las alternativas para que el cliente cambie su comportamiento?), el análisis de la competencia en el segmento (¿quién ya está ahí y cómo se puede ganar contra ellos?) y el análisis del proceso de compra del segmento (¿quién decide, quién influye, cuánto tarda el proceso, qué bloquea la decisión?).

Dame las preguntas que no deben quedar sin respuesta antes de comprometer recursos en el lanzamiento.

**2. El ICP: definir al cliente ideal con precisión quirúrgica**
El error más caro en un GTM es intentar vender a demasiados segmentos a la vez. Explícame cómo definir el ICP (Ideal Customer Profile) con la precisión suficiente para que el equipo de ventas y marketing sepan exactamente a quién perseguir: los criterios firmográficos (industria, tamaño de empresa, geografía, modelo de negocio), los criterios de comportamiento (señales de que el cliente está preparado para comprar), los criterios de fit (características que predicen que el cliente tendrá éxito con el producto) y el proceso de validación del ICP con datos reales de los primeros clientes.

**3. La propuesta de valor diferenciada por segmento**
La propuesta de valor no es lo que hace tu producto: es por qué el cliente debería elegirte a ti en lugar de a la competencia. Explícame cómo construir una propuesta de valor que resuene en el segmento objetivo: la diferencia entre features (lo que tienes), beneficios (lo que aportan) y valor de negocio (el impacto medible en el cliente), cómo formular el mensaje que conecta con los dolores específicos del comprador del segmento y cómo validar que el mensaje resuena antes de usarlo en escala.

Incluye cómo adaptar el mensaje a los distintos perfiles que intervienen en el proceso de compra (el usuario, el decision maker, el economic buyer, el blocker).

**4. Los canales de distribución: dónde y cómo llegar al ICP**
El canal correcto depende del segmento objetivo y del modelo de negocio. Explícame el framework para elegir los canales del GTM: la diferencia entre inbound (el cliente llega a nosotros) y outbound (nosotros vamos al cliente) y cuándo priorizar cada uno, los canales específicos más efectivos para el segmento objetivo (outbound directo, partnerships, PLG, comunidad, contenido), la lógica del channel-market fit (por qué el canal que funciona en un segmento puede no funcionar en otro) y cómo concentrar los recursos en los dos o tres canales con mayor probabilidad de funcionar en lugar de dispersarse.

**5. El plan de lanzamiento: la secuencia que maximiza la tracción inicial**
El lanzamiento no es un evento: es un proceso de meses que debe estar diseñado para aprender y ajustar rápido. Propón la secuencia de lanzamiento: la fase de early access (primeros clientes referenciales que validan el producto y el mensaje), la fase de expansión controlada (escalar lo que ha funcionado con los primeros clientes) y la fase de escala (acelerar los canales validados con más recursos). Para cada fase, dame los criterios de éxito que permiten avanzar a la siguiente y los indicadores de que hay que pivotar antes de seguir.

**6. Las métricas del GTM: saber si el plan está funcionando**
Un GTM sin métricas es un plan de fe. Propón el sistema de métricas del go-to-market: los indicadores del funnel de ventas que miden la efectividad del GTM en cada etapa (cobertura del ICP, tasa de respuesta en prospecting, win rate, ciclo de venta), las métricas de eficiencia del canal (CAC por canal, payback period), los indicadores de éxito del cliente que validan que el product-market fit es real y el proceso de revisión semanal y mensual que permite tomar decisiones de ajuste basadas en datos.

Quiero un plan accionable, no un framework teórico. Ejemplos concretos y honestidad sobre lo que más falla en los GTMs en la práctica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de entrada al mercado que maximiza las posibilidades de tracción inicial',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product strategy: de la visión a la ejecución',
                'description'      => 'Construye la estrategia de producto que conecta la misión de la empresa con las decisiones diarias del equipo: el framework, las apuestas estratégicas y el proceso de comunicación que alinea a todos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Product o Chief Product Officer con experiencia construyendo estrategias de producto en empresas tech que han pasado de 0 a escala. Voy a explorar contigo cómo construir una product strategy que conecte la visión a largo plazo con las decisiones del equipo en el día a día.

Mi contexto: [describe tu situación: etapa de la empresa, madurez del producto, tamaño del equipo de producto y el mayor desafío estratégico que enfrentas ahora mismo]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Qué es la product strategy y qué no es**
La strategy de producto es uno de los términos más utilizados y peor entendidos en el mundo del producto. Explícame con precisión qué es y qué no es: la diferencia entre estrategia (las apuestas que hacemos sobre cómo ganar), roadmap (la secuencia de trabajo que ejecuta la estrategia), visión (el futuro al que aspiramos) y misión (el propósito que nos hace existir). Los síntomas de un equipo de producto que opera sin estrategia real (el roadmap como lista de peticiones, la priorización por volumen de ruido, la incapacidad de decir que no con fundamento) y el valor concreto de tener una estrategia clara para el equipo.

**2. Los inputs de la product strategy**
Una buena estrategia de producto no se construye de adentro hacia afuera: se construye desde el entendimiento profundo del mercado y del usuario. Explícame cuáles son los inputs que debe incorporar la strategy: el análisis del mercado (tamaño, dinámicas, tendencias que van a redefinir el sector), el análisis de la competencia (dónde son fuertes, dónde son débiles, qué están construyendo), el análisis de los usuarios (los jobs to be done que el producto resuelve bien, los que resuelve mal y los que todavía no resuelve) y el análisis interno (las capacidades del equipo, los activos diferenciadores de la empresa y las limitaciones que condicionan la estrategia).

**3. Las apuestas estratégicas: el corazón de la strategy**
La product strategy no es un plan que cubre todo: es un conjunto de apuestas deliberadas sobre dónde concentrar el esfuerzo. Explícame cómo definir las apuestas estratégicas del producto: el concepto de las tres o cuatro apuestas que, si funcionan, transforman la posición del producto en el mercado, cómo distinguir las apuestas estratégicas (que construyen ventaja competitiva) de las mejoras tácticas (necesarias pero no estratégicas), cómo priorizar las apuestas según el potencial de impacto y la capacidad del equipo de ejecutarlas y cómo documentarlas de forma que el equipo entienda no solo el qué sino el por qué.

**4. De la strategy al roadmap: la traducción que más falla**
La brecha más común en los equipos de producto es la que existe entre la estrategia declarada y el roadmap que se ejecuta. Explícame cómo hacer que el roadmap sea realmente una traducción de la estrategia: el proceso de priorización que usa la estrategia como criterio principal (en lugar de los OKRs de cada equipo o las peticiones del cliente más ruidoso), cómo diseñar el roadmap por horizontes temporales que balanceen el trabajo de corto plazo (que mantiene el negocio) con el trabajo de largo plazo (que construye la ventaja futura) y cómo comunicar el roadmap de forma que el equipo entienda cómo cada iniciativa contribuye a la estrategia.

**5. La comunicación de la strategy: alinear sin abrumar**
Una estrategia que solo el VP de Producto entiende no es una estrategia: es un secreto bien guardado. Explícame cómo comunicar la product strategy de forma efectiva: el proceso de comunicación hacia arriba (cómo presentar la estrategia al C-level y al board), hacia afuera (cómo compartir la dirección del producto con los clientes sin comprometerse más de lo que se puede cumplir) y hacia adentro (cómo conseguir que todos los equipos —ingeniería, diseño, marketing, ventas, CS— entiendan la estrategia y tomen decisiones coherentes con ella).

**6. El sistema de revisión: cuando la strategy necesita cambiar**
La estrategia de producto debe ser estable, pero no rígida. Explícame cómo construir el sistema de revisión de la strategy: la cadencia de revisión estratégica (cuándo y con qué frecuencia revisar las apuestas), las señales que indican que la estrategia debe ser revisada (cambios en el mercado, apuestas que no funcionan, nueva información sobre el usuario) y el proceso de pivote estratégico que permite cambiar de dirección sin destruir la confianza del equipo ni la coherencia del negocio.

Quiero concreción: ejemplos de estrategias de producto que han funcionado, los errores más comunes y cómo construir la disciplina de estrategia en un equipo que todavía opera en modo reactivo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir la estrategia de producto que conecta la visión a largo plazo con las decisiones del equipo',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Workforce planning estratégico',
                'description'      => 'Planifica las necesidades de talento a 2-3 años: análisis de gaps de capacidades, perfiles que la empresa necesitará y el plan que combina desarrollo interno, contratación externa y automatización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia liderando procesos de workforce planning estratégico en empresas tech en crecimiento, desde startups en expansión hasta empresas de 2.000 personas. Voy a explorar contigo cómo construir un plan de talento a largo plazo que anticipe las necesidades de la empresa.

Mi contexto: [describe la situación de tu empresa: etapa, número de empleados, los principales proyectos estratégicos de los próximos dos años y los mayores retos de talento que ya estás experimentando]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Qué es el workforce planning estratégico y por qué la mayoría no lo hace bien**
El workforce planning no es hacer el headcount del año siguiente: es el proceso de anticipar las capacidades que la empresa va a necesitar para ejecutar su estrategia y planificar cómo obtenerlas. Explícame la diferencia entre el workforce planning operativo (reactivo, anual, centrado en cubrir vacantes) y el workforce planning estratégico (proactivo, plurianual, centrado en construir capacidades), los beneficios concretos de hacerlo bien (menor tiempo de contratación, menor dependencia de mercados de talento tensionados, mayor retención) y los síntomas de una empresa que no lo hace (siempre va a remolque de las necesidades de talento, contrata con urgencia y paga un premium, las iniciativas estratégicas se bloquean por falta del perfil correcto).

**2. El análisis de capacidades actuales: el inventario de talento**
Antes de planificar el futuro, necesitamos entender con honestidad el punto de partida. Guíame por el proceso de análisis del talento actual: la construcción del mapa de capacidades de la organización (qué sabe hacer cada equipo, con qué nivel de profundidad), la identificación de las capacidades críticas para la estrategia vs. las capacidades de soporte, el análisis de la distribución de talento (concentración de conocimiento en pocas personas, single points of failure), y la evaluación del potencial de desarrollo (qué capacidades pueden crecer con el equipo actual y cuáles requieren talento externo).

**3. El análisis de demanda futura: qué necesitará la empresa**
El workforce planning estratégico requiere traducir la estrategia de negocio en requerimientos de talento. Explícame el proceso de análisis de demanda: cómo leer los planes estratégicos de cada área de negocio y extraer las implicaciones de talento (nuevas capacidades necesarias, volumen de crecimiento, cambios en el mix de perfiles), cómo identificar las capacidades emergentes que serán críticas en dos o tres años (tecnologías, metodologías, mercados) y cómo cuantificar la demanda de talento con la suficiente precisión para planificar sin la certeza completa que nunca existe.

**4. El análisis de gaps: la brecha entre hoy y el futuro**
El gap de capacidades es la diferencia entre lo que la empresa tiene y lo que va a necesitar. Explícame cómo hacer el análisis de gaps de forma rigurosa: la metodología de comparación entre el inventario actual y la demanda futura por capacidad y por área de la organización, la priorización de los gaps (cuáles bloquean la estrategia, cuáles son urgentes, cuáles tienen tiempo de ser abordados) y la cuantificación del riesgo de cada gap no cubierto.

**5. Las palancas del workforce plan: build, buy, borrow, automate**
Una vez identificados los gaps, hay que definir cómo cubrirlos. Explícame el framework de palancas del workforce planning: el desarrollo interno (build: qué capacidades se pueden construir con el equipo actual a través de formación, mentoring y proyectos de desarrollo), la contratación externa (buy: qué perfiles es necesario traer del mercado y cuándo), el talento flexible (borrow: freelancers, consultores externos, contratos temporales para capacidades que no justifican una contratación) y la automatización (automate: qué tareas repetitivas pueden cubrirse con tecnología, liberando capacidad humana para trabajo de mayor valor).

Para cada palanca, dame los criterios que determinan cuándo usarla y cuándo no.

**6. El plan de implementación y el seguimiento**
El workforce plan más sofisticado vale cero si no se convierte en acciones concretas. Propón la hoja de ruta de implementación: cómo secuenciar las acciones del plan en el tiempo (qué se inicia en los próximos noventa días, qué se construye en el primer año y qué se cosecha en el segundo y tercer año), el sistema de seguimiento del plan (las métricas que indican si el plan está avanzando según lo previsto), y el proceso de revisión trimestral que permite ajustar el plan cuando la estrategia de negocio cambia.

Quiero concreción y realismo: los modelos de workforce planning que funcionan en empresas que no tienen un equipo de people analytics de diez personas, sino dos personas de RRHH que tienen que hacer esto mientras gestionan todo lo demás.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Planificar las necesidades de talento a 2-3 años para anticiparse a los gaps de capacidades',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Estrategia financiera y asignación de capital',
                'description'      => 'Las decisiones de mayor impacto en una empresa: cómo asignar el capital entre crecimiento, inversión y retorno a accionistas, y el proceso de análisis que las respalda.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en la toma de decisiones de asignación de capital en empresas tech de distintas etapas, desde startups con runway limitado hasta empresas cotizadas con flujo de caja positivo. Voy a explorar contigo cómo pensar y ejecutar la estrategia financiera y la asignación de capital.

Mi contexto: [describe la situación financiera de tu empresa: etapa, modelo de negocio, situación de caja, fuentes de ingresos y las decisiones de asignación de capital que tienes delante]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. La asignación de capital como decisión estratégica**
La asignación de capital es la decisión más importante que toma la dirección de una empresa. Explícame el framework conceptual: la jerarquía de opciones de uso del capital (inversión en el negocio, adquisiciones, reducción de deuda, recompra de acciones, dividendos) y los criterios para elegir entre ellas, el concepto de coste de capital y cómo determina el umbral mínimo de retorno para cualquier inversión, y los errores más comunes en la asignación de capital (la trampa de la diversificación, el sesgo de continuidad con inversiones que ya no generan retorno suficiente, la subestimación del coste de oportunidad).

**2. El análisis de las oportunidades de inversión en el negocio**
La primera pregunta de la asignación de capital es si existen oportunidades de reinversión en el negocio que generen retornos superiores al coste de capital. Explícame el proceso de evaluación de oportunidades de inversión orgánica: el marco del análisis de retorno incremental (qué ingresos adicionales genera cada euro invertido en el negocio), cómo evaluar las oportunidades de crecimiento (nuevos productos, nuevos mercados, nueva capacidad) vs. las de eficiencia (automatización, mejora de procesos, reducción de costes), y cómo priorizar entre oportunidades que compiten por el mismo capital limitado.

**3. La decisión de crecer vs. retornar capital**
En cierta etapa, las empresas se enfrentan a la pregunta de si deben seguir invirtiendo en crecimiento o comenzar a retornar capital a los accionistas. Explícame el framework de esta decisión: las señales que indican que el retorno del capital invertido en el negocio está disminuyendo por debajo del umbral que justifica la reinversión, las opciones de retorno de capital (recompra de acciones vs. dividendos) y los criterios para elegir entre ellas, y cómo comunicar esta transición estratégica a los inversores y al equipo directivo.

**4. Las adquisiciones como palanca de asignación de capital**
Las M&A son una de las palancas más potentes y más peligrosas de la asignación de capital. Explícame el proceso de evaluación de adquisiciones: el análisis estratégico (qué capacidades, qué mercados o qué activos aporta la adquisición que no se pueden construir orgánicamente), el análisis financiero (la valoración, el precio que se puede pagar manteniendo la disciplina de retorno), el análisis de integración (qué tan difícil será integrar y qué valor se destruirá en el proceso) y los errores más frecuentes en las adquisiciones (pagar por sinergias que nunca se materializan, subestimar la complejidad de la integración).

**5. La estructura de capital y la gestión del riesgo financiero**
La estrategia financiera incluye no solo dónde invertir el capital sino cómo financiarlo. Explícame la decisión de estructura de capital: la diferencia entre el capital propio y la deuda como fuentes de financiación y los criterios para determinar el mix óptimo para cada tipo de empresa y etapa, la gestión del riesgo financiero (el riesgo de liquidez, el riesgo de tipo de interés, el riesgo de concentración de clientes) y cómo construir la resiliencia financiera que permite a la empresa aprovechar las oportunidades que surgen en momentos de incertidumbre del mercado.

**6. El proceso de decisión: cómo tomar y comunicar decisiones de capital**
Las mejores decisiones de asignación de capital requieren un proceso riguroso y una comunicación efectiva. Propón el proceso de decisión: el comité de inversiones (quién participa, qué información se requiere para llevar una propuesta, cómo se toma la decisión), el documento de caso de inversión que estructura el análisis de cada oportunidad, el sistema de seguimiento del retorno real de las inversiones aprobadas (comparando el retorno esperado con el real) y cómo comunicar la lógica de asignación de capital al board, a los inversores y al equipo directivo.

Quiero ejemplos concretos de decisiones de asignación de capital, los errores más comunes y los principios que diferencian a los CFOs que crean valor de los que simplemente reportan números.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Tomar decisiones de asignación de capital con rigor analítico y visión estratégica',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Estrategia legal corporativa',
                'description'      => 'El general counsel que diseña la hoja de ruta legal de la empresa: los riesgos que priorizar, los proyectos legales que habilitan el crecimiento y la asignación de recursos en un departamento con presupuesto limitado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un General Counsel con experiencia liderando departamentos jurídicos en empresas tech en crecimiento, con la responsabilidad de diseñar la estrategia legal que apoya la expansión del negocio mientras gestiona los riesgos legales con recursos limitados. Voy a explorar contigo cómo construir la hoja de ruta legal de una empresa.

Mi contexto: [describe la situación de tu empresa: etapa, mercados donde opera, principales áreas de actividad (producto, M&A, mercados internacionales) y los principales retos legales que enfrentas]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. La función legal como socio estratégico del negocio**
El departamento jurídico puede ser un freno burocrático o un habilitador del crecimiento: la diferencia está en cómo entiende su rol. Explícame qué significa ser un departamento legal orientado al negocio: la diferencia entre el abogado que dice "no" por defecto y el que diseña la estructura que hace posible el "sí", cómo el departamento legal puede crear valor (acelerando transacciones, reduciendo el coste de los riesgos, habilitando nuevos mercados) y los síntomas de un departamento legal que opera en modo reactivo y subóptimo.

**2. El mapa de riesgos legales: qué priorizar y qué aceptar**
La gestión legal no consiste en eliminar todos los riesgos: consiste en priorizar los que merece la pena gestionar y aceptar conscientemente los que no. Guíame por el proceso de construcción del mapa de riesgos legales: la metodología de identificación de los riesgos legales de la empresa (por área de negocio, por mercado, por tipo de riesgo), la matriz de priorización que cruza probabilidad de materialización con impacto potencial, las categorías de riesgo que nunca se pueden aceptar (riesgo de cumplimiento regulatorio, riesgo de responsabilidad penal para los directivos) y las que se pueden gestionar con controles proporcionales.

**3. Los proyectos legales que habilitan el crecimiento**
La estrategia legal no es solo gestión de riesgos: es la hoja de ruta de los proyectos jurídicos que desbloquean la ejecución de la estrategia de negocio. Explícame cómo identificar y priorizar los proyectos legales estratégicos: la habilitación de nuevos mercados (análisis regulatorio de nuevas geografías, obtención de licencias o autorizaciones necesarias), la protección de activos intelectuales (estrategia de PI, registro de marcas y patentes, protección del know-how), la habilitación de nuevas líneas de negocio (estructuración de nuevos modelos comerciales que requieren análisis legal previo) y la preparación del departamento para los hitos de negocio (rondas de inversión, fusiones y adquisiciones, posible salida a bolsa).

**4. La asignación de recursos: interno vs. externo**
El departamento legal siempre tiene más trabajo que recursos. Explícame el framework de decisión sobre qué hacer internamente y qué externalizar: los criterios para definir qué capacidades legales deben estar in-house (las que son recurrentes, estratégicas y requieren conocimiento profundo del negocio), las que conviene externalizar a despachos externos (las que son especializadas, puntuales o requieren escala), y cómo gestionar la relación con los despachos externos para maximizar el valor y controlar el gasto (fee arrangements alternativos, paneles de despachos, gestión de conflictos de intereses).

**5. El compliance como ventaja competitiva**
En un entorno regulatorio cada vez más exigente, el compliance puede ser una ventaja competitiva o un pasivo. Explícame cómo construir el programa de compliance que protege la empresa y genera confianza: el modelo de las tres líneas de defensa adaptado a empresas tech, los programas de compliance que son obligatorios (GDPR, prevención de blanqueo de capitales si aplica) y los que generan ventaja competitiva (certificaciones de seguridad, marcos de gobierno corporativo), y cómo construir la cultura de compliance sin crear una burocracia que ralentice el negocio.

**6. La hoja de ruta legal a 12-24 meses**
La estrategia legal necesita materializarse en un plan concreto. Ayúdame a construir la hoja de ruta legal de los próximos dos años: la priorización de los proyectos legales según su impacto en el negocio y su urgencia, los hitos del roadmap que deben estar terminados antes de determinados eventos de negocio, los recursos (personas, presupuesto, despachos externos) necesarios para ejecutar el plan y el sistema de seguimiento que permite informar al board sobre el avance de la agenda legal estratégica.

Quiero ejemplos concretos de decisiones estratégicas en departamentos jurídicos de empresas tech y los trade-offs reales que implican.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la hoja de ruta legal estratégica que apoya el crecimiento del negocio',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success strategy: el plan a 12 meses',
                'description'      => 'Diseña la estrategia de CS que conecta retención y expansión con los objetivos de negocio: segmentos, modelos de cobertura y las palancas que moverán el NRR en los próximos 12 meses.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo estrategias de retención y expansión en empresas SaaS B2B con distintos modelos de cobertura y segmentos de cliente. Voy a explorar contigo cómo diseñar la estrategia de customer success para los próximos doce meses.

Mi contexto: [describe tu situación: número de clientes, ACV promedio, NRR actual, tamaño del equipo de CS y el mayor desafío que enfrentas en retención o expansión]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El diagnóstico: dónde estamos y por qué**
Antes de diseñar la estrategia, necesitamos entender con honestidad la posición actual. Guíame por el análisis de la situación de partida: el análisis del NRR actual y sus componentes (GRR, expansión, contracción, churn), la identificación de los principales drivers del churn (¿por qué se van los clientes que se van?), el análisis del comportamiento de los clientes que renuevan y expanden (¿qué hacen diferente?), y el análisis de la capacidad del equipo (cobertura actual de cuentas, distribución del tiempo del CSM, herramientas disponibles).

Dame el framework de diagnóstico que usaría y las preguntas que no deben quedar sin respuesta antes de escribir la estrategia.

**2. La segmentación: no todos los clientes merecen el mismo tratamiento**
La segmentación es la decisión más importante de la estrategia de CS. Explícame cómo segmentar la base de clientes de forma que la cobertura y el modelo de relación sean proporcionales al valor y al potencial de cada segmento: los criterios de segmentación (ACV, industria, complejidad, potencial de expansión, strategic fit), los modelos de cobertura para cada segmento (high touch, tech touch, digital, pooled), y cómo diseñar la transición entre segmentos cuando un cliente crece o disminuye.

Incluye cómo comunicar al equipo los criterios de segmentación de forma que los apliquen de manera consistente.

**3. El modelo de cobertura: quién hace qué con cada cliente**
El modelo de cobertura determina cómo el equipo de CS asigna su tiempo y sus recursos. Explícame cómo diseñar el modelo de cobertura que maximiza el NRR con los recursos disponibles: el ratio cuentas-por-CSM para cada segmento (y cómo calcularlo en función del ACV y la complejidad), la definición del modelo de interacción para cada segmento (QBR, EBR, check-ins automatizados, comunidad), y el sistema de triage que asegura que los CSMs dedican su tiempo a las acciones de mayor impacto en la retención y la expansión.

**4. Las palancas de retención: reducir el churn evitable**
El churn no es inevitable: una parte significativa es prevenible si se interviene a tiempo y de la forma correcta. Explícame las principales palancas de retención: el health scoring que identifica a los clientes en riesgo con suficiente antelación para intervenir, el playbook de intervención por tipo de riesgo (bajo uso, cambio de sponsor, problemas de implementación, competencia activa), el proceso de gestión de cuentas en riesgo y el análisis de los churns ya ocurridos para extraer aprendizajes que mejoren la prevención futura.

**5. Las palancas de expansión: crecer dentro de la base existente**
La expansión en la base de clientes es el crecimiento de mayor eficiencia. Explícame las palancas de expansión: la identificación de las señales que indican que un cliente está listo para expandir (uso intensivo de determinadas features, incorporación de nuevos equipos, crecimiento del negocio del cliente), el proceso de expansión que involucra al CSM y al equipo de ventas de forma coordinada, los modelos de expansión (upsell a tier superior, cross-sell de nuevos módulos, expansión de licencias) y cómo construir la cultura de expansión en el equipo de CS sin que parezca que el CS se convierte en ventas.

**6. El sistema de métricas y el proceso de revisión estratégica**
La estrategia de CS necesita un sistema de métricas que permita tomar decisiones en tiempo real. Propón el dashboard estratégico de CS: las métricas primarias (NRR, GRR, expansión rate, time to value), las métricas de actividad que predicen los resultados futuros (cobertura de QBRs, porcentaje de cuentas con health score verde, pipeline de expansión), y el proceso de revisión mensual y trimestral que permite ajustar la estrategia cuando los datos lo requieren.

Quiero concreción: ejemplos de estrategias de CS que han movido el NRR significativamente, los errores más comunes en la planificación de CS y cómo construir la estrategia con un equipo pequeño que no puede hacer todo a la vez.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de customer success que conecta retención y expansión con los objetivos del negocio',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de negocio del freelance',
                'description'      => 'El plan de negocio del freelance que crece de forma intencional: el nicho, el posicionamiento, el modelo de pricing y las apuestas estratégicas que van a definir el negocio en los próximos años.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en estrategia de negocio para profesionales independientes, con experiencia ayudando a freelancers a pasar de una práctica reactiva a un negocio que crece de forma intencional. Voy a explorar contigo cómo construir la estrategia de negocio de mi práctica freelance.

Mi contexto: [describe tu situación actual: tipo de servicio, años de experiencia, tipos de clientes con los que trabajas, ingresos aproximados y el mayor reto estratégico que enfrentas en este momento]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El diagnóstico honesto: dónde estás y por qué**
Antes de diseñar la estrategia, necesitamos entender con honestidad la posición actual del negocio. Guíame por el análisis de la situación de partida: el análisis de la cartera de clientes actual (cuáles son los más rentables, cuáles consumen más energía de la que aportan, cuáles tienen potencial de crecimiento), el análisis de los canales de captación (cómo llegan hoy los clientes, cuánto esfuerzo requiere cada canal, cuánto dura el ciclo de ventas), el análisis de la rentabilidad del negocio (ingresos por hora trabajada, comparación entre proyectos y clientes distintos) y la evaluación honesta de las fortalezas y debilidades de la práctica actual.

Dame el análisis que me ayude a entender con claridad qué está funcionando y qué no.

**2. El nicho: la decisión más importante del freelance**
El nicho es la decisión que más impacto tiene en el crecimiento del negocio freelance. La mayoría de los freelancers lo evitan por miedo a perder oportunidades; los que lo abrazan descubren que les llegan mejores oportunidades. Explícame cómo elegir el nicho con rigor: la diferencia entre el nicho de servicio (qué haces), el nicho de industria (para quién lo haces) y el nicho de problema (qué problema específico resuelves), los criterios que determinan si un nicho es viable (¿hay suficiente mercado?, ¿los clientes pagan bien?, ¿tengo ventaja real en ese nicho?), y el proceso de validación del nicho antes de comprometerse plenamente con él.

Incluye los errores más comunes al elegir el nicho y cómo corregirlos.

**3. El posicionamiento: por qué elegirte a ti**
El posicionamiento es la respuesta a la pregunta que se hace cualquier cliente potencial: ¿por qué este freelance y no otro? Explícame cómo construir un posicionamiento que sea auténtico, diferenciado y relevante para el nicho objetivo: la diferencia entre posicionamiento por categoría (el experto en X), por resultado (el que consigue Y) y por proceso (el que hace las cosas de una manera diferente), cómo articular la propuesta de valor en términos que el cliente entienda y valore, y cómo comunicar el posicionamiento de forma consistente en todos los puntos de contacto (web, LinkedIn, propuestas, conversaciones de venta).

**4. El modelo de pricing: cobrar lo que mereces**
El pricing es el lever estratégico más subutilizado del negocio freelance. La mayoría cobra por hora o por proyecto sin pensar en los modelos alternativos. Explícame los modelos de pricing que un freelance puede usar: el precio por hora (sus ventajas y sus limitaciones estructurales), el precio por proyecto (cómo fijarlo para no perder dinero), el precio por valor (cómo cobrar en función del resultado generado para el cliente y no del tiempo empleado) y los modelos de retainer (ingresos recurrentes que aportan estabilidad al negocio). Para cada modelo, dame los criterios que determinan cuándo usarlo y la estrategia de transición para freelancers que quieren cambiar de modelo.

**5. Las apuestas estratégicas del plan de negocio**
Una estrategia de negocio para el freelance no es solo una lista de tácticas de marketing: es un conjunto de apuestas deliberadas que van a definir cómo va a ser el negocio en los próximos tres años. Explícame cómo definir las dos o tres apuestas estratégicas del negocio: la elección de profundizar en el nicho actual vs. expandir a nichos adyacentes, la apuesta por un canal de captación dominante (referidos, contenido, outreach directo, partnerships), la decisión de productizar el servicio o mantenerse en el modelo custom y la elección del perfil de cliente objetivo (pequeñas empresas, mid-market, enterprise, startups en etapa inicial).

**6. El sistema de ejecución: pasar de la estrategia a la acción**
La mejor estrategia vale poco si no se convierte en hábitos y sistemas de ejecución. Explícame cómo construir el sistema de ejecución del negocio freelance: el ritual de planificación semanal que asegura que las acciones estratégicas no se pierden entre los proyectos de los clientes, el sistema de seguimiento de métricas del negocio (pipeline de nuevos clientes, ingresos por cliente, utilización, ingresos proyectados), el proceso de revisión trimestral de la estrategia y el sistema de toma de decisiones que permite evaluar las oportunidades que llegan (¿aceptar este proyecto me acerca o me aleja de mi nicho y mi posicionamiento?).

Quiero concreción y realismo: los errores más comunes en la estrategia del negocio freelance, los sesgos que impiden crecer con intención y los pasos concretos para construir un negocio que funciona aunque me tome vacaciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la estrategia de negocio del freelance que crece de forma intencional y sostenida',
                'vote_score'       => 45,
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
