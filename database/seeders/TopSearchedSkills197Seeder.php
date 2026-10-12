<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills197Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing sostenible y comunicación de impacto',
                'description'      => 'Comunica los compromisos de sostenibilidad de la marca de forma creíble: el balance entre el marketing de impacto y el greenwashing, y el lenguaje que genera confianza en los consumidores que sí se preocupan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing especializado en sostenibilidad y comunicación de impacto, con experiencia ayudando a marcas a comunicar sus compromisos ambientales y sociales de forma auténtica y creíble, evitando las trampas del greenwashing. Voy a explorar contigo cómo hacer marketing sostenible que funciona.

Mi contexto: [describe tu marca: sector, los compromisos de sostenibilidad reales que ya tienes (certificaciones, iniciativas en marcha, objetivos medibles) y la audiencia a la que quieres comunicar]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El nuevo consumidor y la sostenibilidad como factor de decisión**
La sostenibilidad ha pasado de ser un nicho a ser un factor relevante en las decisiones de compra de una parte significativa de los consumidores. Explícame qué ha cambiado en el comportamiento del consumidor respecto a la sostenibilidad: los segmentos que realmente modifican su comportamiento de compra por razones ambientales o sociales (y los que dicen que lo hacen pero no lo hacen), la diferencia entre la disposición a pagar y el comportamiento real de compra, y por qué las marcas que comunican la sostenibilidad de forma auténtica construyen una base de clientes más leal.

**2. La línea entre el marketing sostenible y el greenwashing**
El greenwashing es el mayor riesgo reputacional del marketing de sostenibilidad. Explícame dónde está la línea entre comunicar los logros de sostenibilidad reales y el greenwashing: los tipos de greenwashing más comunes (las afirmaciones vagas sin evidencia, las certificaciones de escaso rigor, el énfasis en un aspecto positivo que oculta el impacto negativo en otros), los ejemplos de marcas que han pagado un precio reputacional y legal por el greenwashing y el test de credibilidad que toda comunicación de sostenibilidad debería pasar antes de publicarse.

**3. El lenguaje de la sostenibilidad que genera confianza**
Las palabras que usamos para comunicar la sostenibilidad determinan si el mensaje genera confianza o escepticismo. Guíame en el uso del lenguaje de sostenibilidad que es honesto y efectivo: la diferencia entre afirmaciones absolutas (que rara vez son ciertas) y afirmaciones específicas y medibles (que construyen credibilidad), el vocabulario de sostenibilidad que ha perdido significado por el abuso (eco-friendly, verde, responsable) y las alternativas que comunican con mayor precisión, y cómo manejar la incertidumbre y los compromisos en curso sin parecer que estás ocultando algo.

**4. Los canales y los formatos del marketing de impacto**
La comunicación de sostenibilidad requiere los canales y los formatos adecuados. Explícame la estrategia de canales para comunicar el impacto de la marca: el informe de sostenibilidad como documento de referencia (que audiencia lo lee y cómo hacerlo accesible), las redes sociales como canal de comunicación de impacto en tiempo real (con las particularidades de cada plataforma y los formatos que funcionan), el punto de venta y el packaging como canal de comunicación de la sostenibilidad del producto y las colaboraciones con medios e influencers especializados en sostenibilidad.

**5. Medir el impacto y comunicar los resultados**
Las marcas más creíbles en sostenibilidad son las que miden y publican resultados, no solo intenciones. Guíame en el proceso de medir y comunicar el impacto de sostenibilidad: los estándares de reporting que dan credibilidad a los datos (GRI, SASB, el CSRD para empresas europeas), los indicadores de impacto que tienen significado para el consumidor (la huella de carbono explicada en términos comprensibles, el agua ahorrada, los residuos evitados) y cómo comunicar el progreso hacia los objetivos de sostenibilidad de forma honesta, incluyendo los años en que no se avanza tanto como se esperaba.

**6. Construir una estrategia de marketing sostenible a largo plazo**
El marketing sostenible que funciona no es una campaña: es una estrategia a largo plazo que integra la sostenibilidad en la identidad de la marca. Propón el proceso para construir una estrategia de marketing sostenible: cómo auditar la situación actual de la marca en sostenibilidad antes de comunicar nada, cómo priorizar las iniciativas de sostenibilidad que tienen mayor impacto real y mayor relevancia para la audiencia, el proceso de integración de la sostenibilidad en el calendario de marketing anual y cómo construir la credibilidad progresivamente con una audiencia cada vez más informada y exigente.

Quiero ejemplos concretos de marcas que comunican la sostenibilidad de forma creíble y efectiva, y las decisiones específicas que hacen que su comunicación funcione.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Comunicar los compromisos de sostenibilidad de la marca de forma auténtica y efectiva evitando el greenwashing',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Green software engineering',
                'description'      => 'Desarrolla software que consume menos energía: principios de eficiencia computacional, métricas de carbon footprint del software y las prácticas que reducen el impacto ambiental sin sacrificar funcionalidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software especializado en sostenibilidad computacional y green software engineering, con conocimiento de los principios, las métricas y las prácticas que reducen el impacto ambiental del software sin sacrificar el rendimiento ni la funcionalidad. Voy a explorar contigo cómo aplicar los principios del green software en el desarrollo.

Mi contexto: [describe tu stack tecnológico, el tipo de aplicación que desarrollas (web, API, procesamiento de datos, ML) y tu nivel actual de conocimiento sobre el impacto ambiental del software]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El impacto ambiental del software: números y contexto**
El sector tecnológico representa entre el 2% y el 4% de las emisiones globales de CO2, con tendencia a crecer a medida que la computación se expande. Explícame las fuentes del impacto ambiental del software: la energía que consume la ejecución del código (el compute), la energía de los data centers donde vive el software (con sus factores de eficiencia energética y la proporción de energía renovable), el impacto del tráfico de red (la transferencia de datos tiene un coste energético real) y el impacto del hardware cliente (el software que requiere dispositivos más nuevos genera impacto a través del ciclo de vida del hardware). Los órdenes de magnitud que ayudan a priorizar dónde actuar.

**2. Los principios del green software engineering**
El Green Software Foundation ha definido un conjunto de principios para el desarrollo de software con menor impacto ambiental. Explícame los principios fundamentales con aplicaciones prácticas: la eficiencia energética (hacer más con menos energía de compute), el carbon awareness (ejecutar el trabajo cuando y donde la energía es más limpia), la eficiencia de hardware (aprovechar al máximo el hardware existente en lugar de requerir actualizaciones frecuentes) y la medición como primer paso (no se puede mejorar lo que no se mide).

**3. Cómo medir el carbon footprint del software**
Sin métricas, el green software engineering es solo teoría. Guíame en el proceso de medir el impacto de carbono del software: las herramientas de medición de consumo energético del software (Scaphandre, CodeCarbon, el Cloud Carbon Footprint de los principales proveedores cloud), las métricas que tiene sentido rastrear según el tipo de aplicación (gCO2eq/request para APIs, gCO2eq/hora de procesamiento para batch jobs), la diferencia entre las emisiones de Scope 1, 2 y 3 en el contexto del software y cómo integrar la medición de carbon en el pipeline de CI/CD.

**4. Prácticas de código eficiente desde el punto de vista energético**
Las decisiones de diseño y código tienen un impacto directo en el consumo energético. Explícame las prácticas de desarrollo que reducen el consumo energético: la elección de algoritmos y estructuras de datos eficientes (la complejidad algorítmica importa tanto para el rendimiento como para el consumo energético), la gestión de la memoria y el caching que evita computaciones repetidas, el diseño de APIs que minimiza las llamadas innecesarias, la optimización de queries de base de datos y las prácticas de frontend que reducen el procesamiento en el cliente.

**5. Arquitectura y decisiones de infraestructura sostenibles**
Las decisiones de arquitectura tienen un impacto mayor en la sostenibilidad que las optimizaciones de código individual. Guíame en el diseño de arquitecturas y la elección de infraestructura con menor impacto ambiental: el rightsizing de la infraestructura cloud (el servidor sobredimensionado consume energía constantemente), las estrategias de auto-scaling que evitan capacidad ociosa, el carbon-aware computing (elegir regiones cloud con mayor proporción de energía renovable o ejecutar batch jobs en momentos de menor intensidad de carbono de la red eléctrica) y las arquitecturas serverless y su impacto ambiental comparado con las arquitecturas tradicionales.

**6. Integrar la sostenibilidad en el proceso de desarrollo**
El green software engineering no es un proyecto de una vez: es una práctica que debe integrarse en la forma habitual de trabajar del equipo. Propón el proceso para integrar la sostenibilidad en el ciclo de desarrollo: cómo añadir el impacto ambiental a los criterios de aceptación de las historias de usuario, las revisiones de arquitectura que incluyen la eficiencia energética como factor de decisión, los dashboards de sostenibilidad del software que hacen visible el impacto del equipo y cómo construir la cultura de green software en un equipo donde la sostenibilidad no es todavía una prioridad establecida.

Quiero ejemplos concretos y métricas reales, no afirmaciones genéricas sobre la importancia de ser sostenible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Aplicar principios de green software engineering para reducir el impacto ambiental del software',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño sostenible y economía circular',
                'description'      => 'Aplica principios de sostenibilidad al proceso de diseño: diseño para la durabilidad, la reparabilidad y el fin de vida que reduce el impacto ambiental de los productos físicos y digitales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador especializado en diseño sostenible y economía circular, con experiencia aplicando los principios del diseño para la sostenibilidad tanto en productos físicos como en productos y servicios digitales. Voy a explorar contigo cómo integrar la sostenibilidad en el proceso de diseño.

Mi contexto: [describe tu especialidad de diseño: producto industrial, diseño digital (UX/UI), diseño gráfico o de comunicación, y el tipo de proyectos en los que quieres aplicar los principios de sostenibilidad]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del diseño para la sostenibilidad**
El diseño sostenible no es solo elegir materiales reciclados: es un enfoque sistémico que considera el impacto ambiental en todas las decisiones de diseño a lo largo del ciclo de vida del producto. Explícame los principios fundamentales del diseño para la sostenibilidad: el análisis del ciclo de vida (LCA) como herramienta para entender el impacto real de las decisiones de diseño, los principios de la economía circular (diseñar para eliminar residuos, mantener los materiales en uso y regenerar los sistemas naturales), la jerarquía de la sostenibilidad en diseño (reducir, reutilizar, reciclar: en ese orden) y la diferencia entre el diseño sostenible real y el greenwashing de producto.

**2. Diseño para la durabilidad y la longevidad**
El producto más sostenible es el que dura más tiempo. Explícame cómo diseñar para la durabilidad y la longevidad: las decisiones de diseño que determinan la vida útil de un producto (la calidad de los materiales, la resistencia a los modos de fallo más comunes, la capacidad de adaptarse a cambios de contexto), el diseño modular que permite actualizar partes sin reemplazar el producto completo y el diseño atemporal que evita la obsolescencia estética. Cómo equilibrar la durabilidad con los costes de producción y los modelos de negocio que dependen de la renovación frecuente.

**3. Diseño para la reparabilidad**
La reparabilidad es uno de los principios del diseño circular más ignorado por la industria porque los modelos de negocio actuales no la incentivan. Guíame en el diseño para la reparabilidad: los principios de diseño que facilitan la reparación (accesibilidad de los componentes críticos, uso de uniones desmontables en lugar de adhesivos, disponibilidad de repuestos y documentación de reparación), el Repairability Index que algunos países están empezando a exigir, los ejemplos de marcas que han hecho de la reparabilidad una ventaja competitiva y las implicaciones para el modelo de negocio de un producto diseñado para durar y repararse.

**4. Diseño para el fin de vida: reciclabilidad y compostabilidad**
El fin de vida del producto debe diseñarse desde el principio, no considerarse después. Explícame los principios del diseño para el fin de vida: la diferencia entre reciclable (que puede reciclarse en teoría) y reciclado (que realmente se recicla en la infraestructura existente), el diseño para el desmontaje que facilita la separación de materiales al final de la vida, la selección de materiales con infraestructura de reciclaje real y las diferencias entre reciclabilidad, compostabilidad y biodegradabilidad (con los contextos en que cada opción tiene sentido).

**5. Sostenibilidad en el diseño digital**
El diseño digital también tiene impacto ambiental: la web y las aplicaciones consumen energía en los servidores, en la red y en los dispositivos de los usuarios. Explícame los principios del diseño digital sostenible: el sustainable web design (optimización del peso de las páginas, uso de energía renovable en el hosting, diseño que alarga la vida de los dispositivos), la accesibilidad como práctica sostenible (el diseño accesible reduce la necesidad de dispositivos especializados), el diseño que reduce el tiempo de pantalla innecesario y las herramientas para medir la huella de carbono de un sitio web o aplicación.

**6. Integrar la sostenibilidad en el proceso de diseño**
La sostenibilidad en el diseño debe integrarse en el proceso desde las primeras fases, no añadirse al final como una restricción. Propón el proceso para integrar la sostenibilidad en el flujo de trabajo de diseño: las preguntas de sostenibilidad que deben hacerse en la fase de briefing (antes de que las decisiones estén tomadas), las herramientas de evaluación de impacto que el diseñador puede usar sin ser un experto en LCA, cómo presentar las opciones de diseño sostenible a clientes que priorizan el coste y la estética y la construcción de un portfolio que demuestra el conocimiento en diseño sostenible.

Quiero ejemplos concretos de proyectos de diseño sostenible y las decisiones específicas que los han hecho más responsables ambientalmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar principios de economía circular y diseño sostenible en el proceso creativo',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones de sostenibilidad',
                'description'      => 'Vende productos y servicios que ayudan a otras empresas a ser más sostenibles: los argumentos de negocio, los compradores (CSO, Director de Sostenibilidad) y el ciclo de ventas en un mercado en rápido crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas especializado en soluciones de sostenibilidad para empresas, con experiencia vendiendo productos y servicios que ayudan a las organizaciones a reducir su impacto ambiental, cumplir con la normativa ESG y comunicar su progreso a los stakeholders. Voy a explorar contigo las particularidades de vender soluciones de sostenibilidad B2B.

Mi contexto: [describe tu solución: qué tipo de producto o servicio de sostenibilidad vendes (software ESG, consultoría de huella de carbono, energías renovables, soluciones de eficiencia, etc.), el tamaño de las empresas a las que vendes y tu experiencia previa en ventas de este tipo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El mercado de soluciones de sostenibilidad: oportunidad y dinámica**
El mercado de soluciones de sostenibilidad B2B está creciendo a un ritmo acelerado impulsado por la regulación, la presión de los inversores y la demanda de clientes y empleados. Explícame la dinámica del mercado: los drivers de demanda que están generando el crecimiento (el CSRD y el reporting obligatorio de sostenibilidad en Europa, los compromisos net-zero de las grandes corporaciones, la presión de la cadena de suministro), los segmentos más activos y los que están empezando a moverse y la diferencia entre la demanda impulsada por la regulación (que tiene plazos y requisitos claros) y la demanda impulsada por la convicción (que tiene mayor disposición a pagar pero es más difícil de identificar).

**2. El comprador de soluciones de sostenibilidad**
El proceso de compra de soluciones de sostenibilidad involucra a un perfil de comprador relativamente nuevo en muchas organizaciones. Explícame quién compra soluciones de sostenibilidad y cómo toma las decisiones: el Chief Sustainability Officer o Director de Sostenibilidad (sus prioridades, su presupuesto y su nivel de influencia en la organización), cómo la compra de soluciones de sostenibilidad involucra a finanzas (que controla el presupuesto), legal y compliance (que gestiona el riesgo regulatorio) y operaciones (que tiene que implementar las soluciones), y cómo identificar al campeón interno que facilita el acceso a los decisores.

**3. Los argumentos de negocio que mueven la compra**
Las soluciones de sostenibilidad se venden cuando se conectan con el negocio, no cuando se venden como el "bien hacer". Guíame en la construcción de los argumentos de negocio para distintos tipos de soluciones de sostenibilidad: el argumento de cumplimiento regulatorio (el coste y el riesgo de no cumplir con el CSRD o con los requisitos de la cadena de suministro), el argumento de eficiencia (el ahorro de costes de la eficiencia energética o la reducción de residuos), el argumento de reputación y marca (el impacto de los compromisos de sostenibilidad en la atracción de clientes y talento) y el argumento de acceso a capital (los inversores y los bancos que priorizan las empresas con buenas métricas ESG).

**4. El ciclo de ventas de soluciones de sostenibilidad**
Las soluciones de sostenibilidad tienen un ciclo de ventas con características particulares. Explícame las fases del ciclo de ventas de este mercado: la fase de educación (muchos compradores no saben exactamente qué necesitan o cómo se mide el impacto de la solución), la fase de evaluación (que a menudo involucra a consultores externos que ayudan a la empresa a definir sus necesidades), la fase de aprobación (que requiere convencer a múltiples stakeholders con argumentos distintos) y la implementación (que suele ser más compleja de lo esperado porque requiere datos y procesos que la empresa no tiene listos). Cómo gestionar un ciclo de ventas largo en un mercado que cambia rápido.

**5. La prospección en el mercado de sostenibilidad**
Identificar las empresas que están activamente buscando soluciones de sostenibilidad requiere señales de compra específicas de este mercado. Guíame en la prospección de clientes de soluciones de sostenibilidad: las señales de compra que indican que una empresa está lista para invertir (el anuncio de compromisos net-zero o de adhesión a iniciativas como SBTi, la publicación del primer informe de sostenibilidad, la contratación de un primer CSO o un equipo de sostenibilidad, la presión pública de activistas o medios), las fuentes de información para identificar estas señales y cómo usar el contexto regulatorio (los plazos del CSRD, por ejemplo) para crear urgencia en el proceso de prospección.

**6. Diferenciarse en un mercado en rápido crecimiento**
El mercado de soluciones de sostenibilidad está atrayendo a muchos nuevos competidores. Explícame cómo diferenciarse en un mercado que se está saturando: las dimensiones de diferenciación que importan al comprador de soluciones de sostenibilidad (la profundidad técnica de la solución, la calidad de los datos y la metodología, la facilidad de implementación, el soporte para el reporting regulatorio), cómo construir credibilidad en un mercado donde las afirmaciones son difíciles de verificar (certificaciones, partnerships con organismos de referencia, casos de éxito auditados) y cómo posicionarse para los cambios regulatorios que están por venir.

Quiero estrategias concretas para acelerar el ciclo de ventas en un mercado donde la demanda existe pero los procesos de compra son inmaduros.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Vender soluciones de sostenibilidad B2B con argumentos de negocio sólidos y un proceso comercial adaptado al mercado ESG',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto con propósito: diseñar para el impacto',
                'description'      => 'Construye productos que resuelven problemas ambientales o sociales y son sostenibles como negocio: el balance entre el impacto y la viabilidad económica en el diseño de productos con propósito.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia construyendo productos en empresas con propósito social o ambiental, con conocimiento de los frameworks, las tensiones y las decisiones que determinan si un producto con misión puede ser también un negocio viable. Voy a explorar contigo cómo construir un producto que genera impacto real y es sostenible económicamente.

Mi contexto: [describe tu producto o la idea que estás desarrollando: qué problema resuelve, para quién, cuál es el impacto social o ambiental que quieres generar y en qué etapa está el proyecto]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Definir el impacto: de intención a métrica**
Los productos con propósito mueren cuando el impacto es una aspiración vaga en lugar de un objetivo medible. Explícame cómo definir el impacto del producto con rigor: la diferencia entre el output (lo que el producto hace), el outcome (el cambio de comportamiento que genera) y el impact (el cambio en el problema que quieres resolver), la teoría del cambio como herramienta para articular el camino lógico desde el producto hasta el impacto y las métricas de impacto que son honestas sobre lo que el producto puede y no puede hacer.

**2. El mercado para productos con propósito**
Los productos con propósito operan en mercados con dinámicas específicas. Explícame las particularidades del mercado de productos de impacto: la diferencia entre el mercado de impacto puro (donde el cliente compra principalmente por el valor ambiental o social) y el mercado de impacto integrado (donde el impacto refuerza una propuesta de valor funcional), la disposición real a pagar por el impacto (que suele ser menor de lo que las encuestas sugieren), los segmentos de clientes más receptivos en distintas categorías de impacto y los modelos de negocio que han logrado escalar el impacto sin depender indefinidamente de subvenciones o donaciones.

**3. Las tensiones entre impacto y negocio**
El mayor reto del producto con propósito es gestionar las tensiones entre maximizar el impacto y construir un negocio viable. Guíame en la gestión de estas tensiones: la decisión de quién es el cliente cuando el que paga no es el mismo que el que se beneficia (el modelo de cross-subsidy), cómo priorizar las features cuando algunas aumentan el impacto pero reducen el margen, el riesgo de la mission drift cuando las presiones del mercado alejan al producto de su propósito original y el dilema del precio cuando cobrar el precio de mercado hace el producto inaccesible para quienes más lo necesitan.

**4. El diseño del modelo de negocio con impacto**
El modelo de negocio de un producto con propósito debe generar suficientes ingresos para ser sostenible mientras mantiene la coherencia con la misión. Explícame los modelos de negocio que funcionan para productos de impacto: el modelo B2B con externalidades sociales (el producto que ayuda a empresas a ser más sostenibles o socialmente responsables), el modelo de plataforma que conecta a quienes pueden pagar con quienes no pueden, el modelo freemium donde la versión básica es accesible y la versión premium financia el impacto y los híbridos que combinan ingresos de mercado con financiación de impacto (inversión de impacto, grants, certificaciones B Corp).

**5. Medir y comunicar el impacto**
Los productos con propósito necesitan medir y comunicar el impacto de forma rigurosa para mantener la credibilidad con clientes, inversores y el equipo. Explícame el sistema de medición y comunicación del impacto: las metodologías de medición de impacto que dan credibilidad (SROI, IRIS+, los estándares de la GIIN), la diferencia entre el impacto atribuible al producto y el que habría ocurrido de todas formas (el contrafactual), cómo comunicar el impacto a distintas audiencias (clientes, inversores de impacto, medios) y los riesgos del impact washing que destruye la credibilidad cuando los datos no sostienen las afirmaciones.

**6. Escalar el impacto sin perder la misión**
El crecimiento de un producto con propósito genera tensiones específicas sobre la misión. Guíame en las decisiones de escalado que preservan el impacto: cómo evaluar si una fuente de financiación (venture capital, inversores corporativos) es compatible con la misión a largo plazo, las estructuras legales que protegen la misión del producto frente a presiones de maximización del beneficio (B Corp, sociedad de beneficio e interés común), el proceso para que el equipo mantenga el norte del impacto cuando la empresa crece y las presiones comerciales aumentan y los casos de productos con propósito que han escalado el impacto sin sacrificarlo.

Quiero ejemplos concretos de productos que han encontrado el equilibrio entre impacto y viabilidad de negocio, y los que han fallado en el intento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir productos con impacto social o ambiental que son también negocios viables y escalables',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Personas y sostenibilidad: el rol de RRHH en la agenda ESG',
                'description'      => 'El departamento de personas como driver de la sostenibilidad corporativa: programas de formación, políticas de diversidad e inclusión y las métricas de capital humano que forman parte del reporting ESG.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de personas especializado en la integración de la agenda de sostenibilidad en la función de recursos humanos, con experiencia diseñando los programas, políticas y métricas de capital humano que forman parte del reporting ESG corporativo. Voy a explorar contigo cómo el departamento de personas puede liderar la agenda de sostenibilidad de la empresa.

Mi contexto: [describe tu empresa: sector, tamaño, nivel de madurez en sostenibilidad corporativa y el estado actual de la función de personas en relación con la agenda ESG]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El rol estratégico de RRHH en la agenda ESG**
El departamento de personas tiene un papel protagonista en la dimensión social del ESG (la S de Environmental, Social and Governance). Explícame por qué RRHH es un actor crítico en la agenda de sostenibilidad corporativa: las áreas de capital humano que forman parte del reporting ESG (diversidad e inclusión, desarrollo de talento, bienestar, salud y seguridad, relaciones laborales), cómo la normativa de reporting de sostenibilidad (CSRD, GRI, SASB) incluye métricas de personas que el departamento de RRHH debe producir y el rol del CHRO como par del CSO en la definición y ejecución de la estrategia ESG.

**2. Diversidad, equidad e inclusión como pilar ESG**
La diversidad e inclusión (DEI) es el área donde RRHH tiene mayor visibilidad en el reporting ESG. Guíame en la construcción de una estrategia de DEI que va más allá de las cuotas y genera resultados medibles: los indicadores de diversidad que las empresas están obligadas a reportar (diversidad de género en todos los niveles, incluyendo el consejo de administración, en España según la Ley de Igualdad), los indicadores de equidad (la brecha salarial de género y su análisis por nivel y función), las métricas de inclusión (que son más difíciles de medir que la diversidad pero más predictivas del impacto real) y los programas de DEI que han demostrado impacto real en la representación y en la equidad salarial.

**3. El desarrollo del talento para la transición sostenible**
La transición hacia una economía sostenible requiere nuevas competencias en toda la organización. Explícame cómo el departamento de personas puede liderar el desarrollo de las competencias de sostenibilidad: el mapeo de las competencias de sostenibilidad que la empresa necesita según su modelo de negocio (la comprensión del impacto ambiental, las habilidades de reporting ESG, la capacidad de innovar con criterios de economía circular), el diseño de los programas de formación que las desarrollan y cómo integrar la sostenibilidad en los programas de desarrollo de liderazgo para que los managers lleven la agenda ESG a sus equipos.

**4. El bienestar del empleado como métrica ESG**
El bienestar de los empleados ha adquirido una relevancia creciente en el reporting de sostenibilidad. Guíame en el diseño de programas de bienestar que son relevantes para la agenda ESG y generan impacto real: las dimensiones del bienestar que el ESG considera (el bienestar físico, mental, financiero y social), las métricas de bienestar que tienen sentido para el reporting (el absentismo, el presentismo, la tasa de burnout, la satisfacción con el equilibrio vida-trabajo) y cómo construir programas de bienestar que van más allá de los beneficios superficiales y abordan las causas estructurales del malestar laboral.

**5. Las métricas de capital humano para el reporting ESG**
El departamento de personas debe producir un conjunto de métricas de capital humano que forman parte del reporting ESG. Propón el sistema de métricas de capital humano para el reporting ESG: los indicadores obligatorios según los estándares de reporting más comunes (GRI 401-416, SASB, el ESRS S1 del CSRD), los indicadores de proceso (rotación, tiempo de contratación, inversión en formación per cápita) y los indicadores de resultado (engagement, productividad, ratio de ascensos internos) y el proceso para asegurar la calidad y la auditabilidad de los datos de personas que se incluyen en el informe de sostenibilidad.

**6. RRHH como motor del cambio cultural hacia la sostenibilidad**
La sostenibilidad corporativa requiere un cambio cultural que RRHH puede y debe liderar. Explícame el rol de RRHH en la construcción de una cultura de sostenibilidad: cómo integrar los compromisos de sostenibilidad en los procesos de gestión del rendimiento (los objetivos de sostenibilidad en los OKRs de toda la organización, incluyendo los del equipo de liderazgo), el employer branding de sostenibilidad que atrae talento que valora el propósito, los mecanismos de reconocimiento que celebran los comportamientos sostenibles y cómo gestionar la incoherencia cuando los valores de sostenibilidad de la empresa chocan con las decisiones de negocio.

Quiero orientación práctica para construir la función de personas como driver real de la sostenibilidad corporativa, con métricas y programas que van más allá del washing.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Posicionar al departamento de personas como actor protagonista de la agenda ESG corporativa',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'ESG investing y finanzas sostenibles',
                'description'      => 'Integra criterios ESG en el análisis financiero y la gestión de inversiones: metodología, ratings de sostenibilidad y la regulación (SFDR, taxonomía europea) que transforma el sector financiero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de inversiones sostenibles con experiencia integrando criterios ESG en el análisis financiero, la gestión de carteras y el cumplimiento de la normativa de finanzas sostenibles en la Unión Europea. Voy a explorar contigo los fundamentos y la práctica del ESG investing.

Mi contexto: [describe tu perfil: analista financiero que quiere integrar ESG en su trabajo, gestor de activos que necesita cumplir con la normativa SFDR, o profesional de finanzas corporativas que quiere entender cómo el ESG afecta a la valoración y el acceso a capital de su empresa]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Qué es el ESG investing y por qué ha crecido**
El ESG investing ha pasado de ser un nicho ético a ser una corriente principal de la gestión de activos en pocos años. Explícame el fundamento del ESG como herramienta de análisis financiero: la diferencia entre la inversión socialmente responsable (que excluye sectores) y la integración ESG (que incorpora factores ambientales, sociales y de gobernanza como variables de análisis del riesgo y la oportunidad), la evidencia sobre la relación entre el rendimiento ESG y el rendimiento financiero (con honestidad sobre la complejidad de esta relación), los drivers del crecimiento del ESG investing (la regulación, la presión de los beneficiarios finales, el convencimiento de que los riesgos ESG son riesgos financieros reales) y los debates actuales sobre la efectividad real del ESG como herramienta de cambio.

**2. Los pilares ESG: qué se analiza en cada dimensión**
El análisis ESG cubre tres dimensiones con métricas y metodologías distintas. Explícame en profundidad cada pilar: el Environmental (las métricas de huella de carbono, consumo de agua, gestión de residuos y biodiversidad, y cómo se traducen en riesgos de transición y riesgos físicos para el negocio), el Social (las métricas de capital humano, cadena de suministro, seguridad del producto y relaciones con la comunidad, y su impacto en el riesgo reputacional y operacional) y el Governance (la estructura del consejo, la remuneración de directivos, los derechos de los accionistas y la transparencia, y su relación con la calidad de la gestión y el riesgo de escándalos corporativos).

**3. Los ratings ESG: qué miden y sus limitaciones**
Los ratings ESG de las agencias especializadas son la herramienta más usada por los inversores pero también la más criticada. Explícame cómo funcionan los ratings ESG: las principales agencias (MSCI, Sustainalytics, ISS ESG, S&P Global) y sus metodologías, por qué el mismo emisor puede tener ratings muy diferentes en distintas agencias (el problema de la divergencia de ratings), las limitaciones estructurales de los ratings (el sesgo hacia las grandes empresas que tienen más recursos para reportar, la dependencia del auto-reporte de las empresas) y cómo usar los ratings de forma crítica en el análisis de inversiones.

**4. La regulación de finanzas sostenibles en Europa**
La Unión Europea ha construido el marco regulatorio de finanzas sostenibles más ambicioso del mundo. Explícame el marco regulatorio europeo que todo inversor en activos europeos debe conocer: el SFDR (Sustainable Finance Disclosure Regulation) y la clasificación de fondos en artículos 6, 8 y 9 con sus implicaciones prácticas, la Taxonomía Europea de Actividades Sostenibles como definición oficial de qué actividades son medioambientalmente sostenibles, el CSRD y cómo el reporting corporativo obligatorio va a mejorar la calidad de los datos ESG disponibles para los inversores, y las implicaciones para los gestores de activos y los asesores financieros de este marco regulatorio.

**5. La integración ESG en el análisis fundamental**
Integrar los factores ESG en el análisis financiero requiere traducirlos a variables que afectan a la valoración. Guíame en el proceso de integración ESG en el análisis fundamental: cómo los riesgos de transición climática afectan a los flujos de caja futuros de los sectores intensivos en carbono, cómo los riesgos físicos del cambio climático impactan en los activos y las operaciones, cómo los factores sociales (la gestión del talento, las relaciones con la cadena de suministro) afectan al riesgo operacional y cómo los factores de gobernanza predicen la calidad de la gestión y el riesgo de destrucción de valor.

**6. El ESG en la renta fija y la financiación corporativa**
El ESG no solo afecta a la renta variable: está transformando también el mercado de renta fija y el acceso a financiación de las empresas. Explícame las tendencias en el ESG de renta fija: los bonos verdes (green bonds), sociales y sostenibles (su estructura, la verificación del uso de los fondos y los riesgos de greenwashing), los préstamos vinculados a la sostenibilidad (SLL) que ajustan el coste de la deuda al rendimiento ESG de la empresa y el impacto del ESG en el coste de capital de las empresas (si las empresas con mejor perfil ESG se financian más barato y por qué).

Quiero profundidad técnica y honestidad sobre las limitaciones y controversias del ESG investing, no solo la narrativa de marketing del sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Integrar criterios ESG en el análisis financiero y cumplir con la normativa de finanzas sostenibles europea',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Regulación ESG y compliance de sostenibilidad',
                'description'      => 'Cumple con la normativa de sostenibilidad en expansión: el CSRD, el reporting de huella de carbono y los riesgos legales del greenwashing para las empresas y sus directivos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de la sostenibilidad y compliance ESG, con experiencia asesorando a empresas en el cumplimiento de la normativa de sostenibilidad, el diseño de sistemas de reporting ESG y la gestión de los riesgos legales del greenwashing. Voy a explorar contigo el marco regulatorio de la sostenibilidad y sus implicaciones para las empresas.

Mi contexto: [describe tu empresa: sector, tamaño, si es empresa cotizada o no, si ya está sujeta al CSRD o si estará sujeta en los próximos años, y los principales aspectos regulatorios de sostenibilidad que te preocupan]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El marco regulatorio de sostenibilidad en Europa: una visión de conjunto**
La UE ha desarrollado en los últimos años el marco regulatorio de sostenibilidad más ambicioso del mundo. Explícame la arquitectura de este marco: el Pacto Verde Europeo como contexto político, las piezas regulatorias principales (el CSRD para el reporting, el SFDR para las finanzas, la Taxonomía para definir qué es sostenible, la Directiva de Due Diligence de Sostenibilidad en la cadena de suministro), cómo estas piezas encajan entre sí y cuál es el ámbito de aplicación de cada una (quién está sujeto a qué y desde cuándo). El calendario de aplicación progresiva que determinará cuándo cada empresa deberá cumplir con cada parte del marco.

**2. El CSRD: el reporting de sostenibilidad obligatorio**
La Corporate Sustainability Reporting Directive es la pieza más transformadora del marco regulatorio de sostenibilidad para la mayoría de las empresas. Explícame el CSRD en profundidad: el ámbito de aplicación (las empresas afectadas, el calendario de entrada en vigor por tramos), los Estándares Europeos de Reporting de Sostenibilidad (ESRS) que definen qué información debe publicarse, el concepto de doble materialidad que es el corazón metodológico del CSRD (la materialidad de impacto y la materialidad financiera), los requisitos de verificación independiente de la información de sostenibilidad y las sanciones previstas para el incumplimiento.

**3. La taxonomía europea: qué actividades son sostenibles**
La Taxonomía Europea es el sistema de clasificación que define oficialmente qué actividades económicas son medioambientalmente sostenibles. Explícame cómo funciona la Taxonomía y sus implicaciones prácticas: los seis objetivos medioambientales de la Taxonomía, el criterio de No Hacer Daño Significativo (DNSH) como condición para la elegibilidad, las actividades incluidas en la Taxonomía y las que todavía no están (y las controversias sobre las inclusiones, particularmente del gas y la nuclear), cómo las empresas sujetas al CSRD deben reportar el alineamiento de su actividad con la Taxonomía y las implicaciones para las empresas que solicitan financiación verde.

**4. La Directiva de Due Diligence de Sostenibilidad en la cadena de suministro**
La Directiva CSDDD obliga a las grandes empresas a identificar, prevenir y mitigar los impactos negativos en derechos humanos y medioambiente en su cadena de suministro. Explícame las obligaciones de due diligence de sostenibilidad: el ámbito de aplicación (las empresas afectadas y el calendario de entrada en vigor), las obligaciones concretas (la identificación de riesgos en la cadena de suministro, las medidas de prevención y remediación, la comunicación con los proveedores), la responsabilidad civil de las empresas por los daños causados en la cadena de suministro y las implicaciones prácticas para el departamento de compras y para los proveedores de las grandes empresas.

**5. El riesgo legal del greenwashing**
El greenwashing ha pasado de ser un riesgo reputacional a ser un riesgo legal significativo para las empresas y sus directivos. Explícame el marco legal del greenwashing: la Directiva de la UE sobre afirmaciones verdes (Green Claims Directive) y los requisitos que establece para las afirmaciones medioambientales en el marketing, los casos relevantes de sanciones por greenwashing en distintos países de la UE y las implicaciones para los directivos (el riesgo de responsabilidad personal de los ejecutivos que aprueban comunicaciones de sostenibilidad falsas o engañosas), el proceso de revisión interna que las empresas deben implementar antes de publicar cualquier afirmación de sostenibilidad.

**6. Construir el sistema de compliance de sostenibilidad**
El compliance de sostenibilidad requiere construir sistemas y procesos que las empresas habitualmente no tienen. Propón el proceso para construir el sistema de compliance de sostenibilidad: la evaluación de materialidad doble como punto de partida, el diseño del sistema de recopilación de datos de sostenibilidad (que involucra a toda la organización, no solo al equipo de sostenibilidad), el proceso de revisión interna de las afirmaciones de sostenibilidad antes de su publicación, la selección del verificador independiente de la información ESG y la construcción de la función de sostenibilidad interna que coordina el compliance en toda la organización.

Quiero orientación práctica para empresas que están construyendo sus primeras capacidades de compliance de sostenibilidad, con los plazos regulatorios concretos que deben tener en cuenta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el sistema de compliance de sostenibilidad para cumplir con el CSRD y la normativa ESG europea',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en empresas B Corp y con propósito',
                'description'      => 'Trabaja en empresas que miden el impacto social y ambiental además del beneficio: las particularidades de hacer CS cuando la misión de la empresa importa tanto a los clientes como el producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con experiencia trabajando en empresas certificadas B Corp o con un propósito social o ambiental explícito, con conocimiento de las particularidades del CS cuando los clientes han elegido el producto también por sus valores y no solo por su funcionalidad. Voy a explorar contigo cómo hacer customer success en una empresa con propósito.

Mi contexto: [describe tu empresa: si es una B Corp certificada o está en proceso de certificación, qué tipo de propósito tiene (ambiental, social, o ambos), quiénes son tus clientes y cómo la misión de la empresa influye en su decisión de compra]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las particularidades del cliente de una empresa con propósito**
Los clientes que eligen un producto de una empresa B Corp o con propósito tienen motivaciones adicionales a las de los clientes convencionales. Explícame qué distingue a este tipo de cliente: la alineación de valores como parte del criterio de compra (el cliente que elige tu producto también porque comparte tu misión, y lo que eso implica en términos de expectativas y nivel de exigencia), la mayor probabilidad de convertirse en evangelizador del producto cuando la experiencia es buena y en detractor público cuando la empresa no vive a la altura de sus valores, y la importancia de demostrar continuamente que el propósito de la empresa es real y no marketing.

**2. La promesa de la misión como parte del contrato con el cliente**
Cuando una empresa vende con una promesa de impacto, esa promesa forma parte del contrato implícito con el cliente. Explícame cómo gestionar la promesa de la misión en el CS: la diferencia entre las expectativas sobre el producto (que se gestionan con el proceso habitual de CS) y las expectativas sobre el impacto (que son más difusas pero igual de importantes para la retención), cómo comunicar el impacto real de la empresa al cliente de forma honesta y sin exagerar, y cómo gestionar la decepción cuando el cliente siente que la empresa no está a la altura de sus valores declarados.

**3. El impacto del cliente como métrica de éxito**
En una empresa con propósito, el éxito del cliente no es solo el uso del producto: es también el impacto que el cliente genera con ese producto. Guíame en la construcción del sistema de éxito del cliente que incluye el impacto: cómo medir el impacto que el cliente genera gracias al uso del producto (las métricas de impacto del cliente que el CS debe rastrear), cómo usar el impacto del cliente como argumento de retención y expansión (el caso de negocio que conecta el uso del producto con el impacto que el cliente quiere generar) y cómo construir casos de éxito que comuniquen tanto el valor funcional como el impacto de la solución.

**4. La certificación B Corp y el CS**
Las empresas B Corp se someten a una evaluación rigurosa de su impacto en empleados, comunidades, clientes y medioambiente. Explícame cómo la certificación B Corp afecta a la función de CS: los estándares B Corp relacionados con el cliente que el equipo de CS debe conocer y aplicar (la transparencia, el trato justo, la protección de datos de los clientes), cómo el proceso de recertificación B Corp incluye evidencias de la calidad del trato al cliente y cómo el equipo de CS puede contribuir a mejorar la puntuación B Corp en la dimensión de clientes.

**5. La retención en empresas con propósito: más allá de la funcionalidad**
Los clientes de empresas con propósito tienen razones adicionales para renovar (la alineación de valores) pero también razones adicionales para irse (la decepción con el propósito). Explícame las estrategias de retención que funcionan en empresas con propósito: cómo construir la relación con el cliente alrededor del impacto compartido (y no solo alrededor de las métricas de uso del producto), cómo gestionar la renovación cuando el cliente cuestiona el impacto real de la empresa o del producto, y los rituales de CS que refuerzan la conexión del cliente con la misión de la empresa a lo largo de la relación.

**6. Construir el equipo de CS en una empresa con propósito**
El equipo de CS de una empresa con propósito debe creer en la misión y saber comunicarla. Explícame las particularidades de construir y liderar este tipo de equipo: los criterios de selección que identifican CSMs que conectan auténticamente con el propósito (y cómo evitar contratar candidatos que dicen lo correcto pero no lo creen), el onboarding que transmite la misión como parte del trabajo, cómo gestionar el burnout de los CSMs cuando la brecha entre los valores declarados de la empresa y sus decisiones reales es demasiado grande y los beneficios de trabajar en una empresa con propósito como herramienta de retención del talento del equipo de CS.

Quiero ejemplos concretos de cómo el propósito cambia la dinámica del CS, con las tensiones reales que los equipos de CS de empresas B Corp afrontan.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Hacer customer success en empresas con propósito donde los valores de la empresa importan tanto como el producto',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El freelance sostenible',
                'description'      => 'Construye un negocio freelance sostenible económica, ambiental y personalmente: minimalismo empresarial, selección de proyectos con impacto positivo y el modelo que permite trabajar menos para vivir mejor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en modelos de negocio freelance sostenibles, con experiencia ayudando a profesionales independientes a construir negocios que son sostenibles económicamente, tienen un impacto ambiental y social positivo y permiten un estilo de vida equilibrado a largo plazo. Voy a explorar contigo cómo construir un negocio freelance que sea sostenible en todas sus dimensiones.

Mi contexto: [describe tu situación como freelance: tu especialidad, tu volumen de trabajo actual, los aspectos de tu negocio que no te parecen sostenibles a largo plazo y tu motivación para incorporar criterios de sostenibilidad en la selección de proyectos]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las tres dimensiones de la sostenibilidad del freelance**
Un negocio freelance sostenible lo es en tres dimensiones que deben estar equilibradas. Explícame cada dimensión y cómo se relacionan: la sostenibilidad económica (ingresos suficientes y predecibles que permiten la seguridad financiera sin depender de un flujo constante de proyectos urgentes), la sostenibilidad ambiental (el impacto ambiental del trabajo del freelance y de los proyectos en los que participa) y la sostenibilidad personal (el modelo de trabajo que puede mantenerse a largo plazo sin burnout, con tiempo para la vida fuera del trabajo y para el desarrollo propio). Cómo el desequilibrio en cualquiera de las tres dimensiones amenaza la sostenibilidad del conjunto.

**2. El minimalismo empresarial: hacer más con menos**
El minimalismo empresarial es la aplicación de los principios del minimalismo al negocio freelance: eliminar lo que no añade valor para concentrarse en lo que sí lo añade. Explícame los principios del minimalismo empresarial aplicados al freelance: la selección de los servicios que ofreces (hacer menos cosas pero hacerlas excepcionalmente bien), la selección de los clientes con los que trabajas (pocos clientes pero relaciones profundas y de largo plazo), la simplificación del stack de herramientas (no adoptar cada nueva herramienta que aparece) y la reducción de la carga administrativa (los sistemas que automatizan las tareas que no aportan valor). Cómo el minimalismo empresarial aumenta tanto los ingresos como la calidad de vida del freelance.

**3. La selección de proyectos con criterios de impacto**
El freelance tiene el privilegio de elegir los proyectos en los que trabaja. Explícame cómo incorporar criterios de impacto en la selección de proyectos: el proceso para evaluar el impacto ambiental y social de un proyecto antes de aceptarlo, los criterios de rechazo (los sectores o tipos de proyecto que el freelance decide no aceptar por razones de valores) y los criterios de preferencia (los tipos de proyecto que el freelance busca activamente porque contribuyen positivamente), cómo comunicar estos criterios a los clientes potenciales de forma que atrae a los que comparten los valores y filtra a los que no, y cómo gestionar el dilema económico cuando un proyecto con buen impacto paga menos que uno problemático.

**4. El modelo de precios que hace sostenible la selección**
Trabajar solo con proyectos de impacto requiere poder permitirse rechazar los que no lo tienen. Guíame en el diseño del modelo de precios que da al freelance la libertad económica para ser selectivo: el precio por valor (no por hora) como condición de la sostenibilidad económica del freelance, la selección del posicionamiento y el nicho que justifica tarifas más altas, el proceso de incremento progresivo de tarifas que reemplaza los clientes de precio bajo por clientes de precio alto y el objetivo de ingresos mínimos que permite decir no sin ansiedad.

**5. La carga de trabajo sostenible: cuánto trabajar y cómo**
La sostenibilidad personal del freelance depende en gran medida de cuánto trabaja y de cómo distribuye ese trabajo. Explícame cómo diseñar una carga de trabajo sostenible: el número de horas semanales de trabajo que es sostenible a largo plazo para el trabajo intelectual de alta calidad (y por qué suele ser menor de lo que la cultura del trabajo nos hace creer), el diseño del calendario que garantiza tiempo para el descanso, el desarrollo propio y la vida fuera del trabajo, la gestión de la estacionalidad de la demanda (los momentos de exceso y los de escasez) y los sistemas que garantizan que el trabajo no invade el tiempo personal cuando el cliente tiene expectativas de disponibilidad permanente.

**6. El negocio freelance como plataforma de impacto**
Un negocio freelance exitoso puede ser más que una fuente de ingresos: puede ser una plataforma de impacto personal. Explícame cómo usar el negocio freelance como vehículo de impacto: la selección de causas o proyectos pro bono que permiten contribuir con habilidades profesionales a organizaciones de impacto, el contenido y el conocimiento compartido que multiplica el impacto más allá de los proyectos directos, la construcción de una comunidad o un network de freelancers que comparten valores similares y el diseño del negocio que genera suficientes ingresos para también donar o invertir en proyectos de impacto.

Quiero honestidad sobre las tensiones reales entre la sostenibilidad de impacto y la sostenibilidad económica del freelance, y las estrategias concretas para resolver esas tensiones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un negocio freelance que sea sostenible económica, ambiental y personalmente a largo plazo',
                'vote_score'       => 39,
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
