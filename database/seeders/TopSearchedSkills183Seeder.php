<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills183Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Alto rendimiento en equipos de marketing',
                'description'       => 'Construye el equipo de marketing que supera constantemente sus objetivos con la selección, la cultura de datos y los rituales que diferencian a los equipos ganadores.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Marketing Officer con experiencia construyendo y dirigiendo equipos de marketing de alto rendimiento en empresas de tecnología, consumo y servicios B2B. Quiero construir o transformar mi equipo de marketing para que opere consistentemente por encima de sus objetivos y quiero que me ayudes a diseñar la estrategia para lograrlo.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño actual del equipo y su estructura?
2. ¿Cuál es el mayor problema de rendimiento que experimentas: falta de velocidad, calidad inconsistente, desalineación con ventas u objetivos poco claros?
3. ¿El equipo opera en un entorno de crecimiento rápido, madurez o transformación?
4. ¿Tienes capacidad para contratar, o estás trabajando con el equipo actual?

**LOS PILARES DEL EQUIPO DE MARKETING DE ALTO RENDIMIENTO:**

SELECCIÓN: CONTRATAR PARA EL RENDIMIENTO
El rendimiento del equipo de marketing empieza en la selección. Ayúdame a definir los perfiles de contratación para las funciones clave del equipo de marketing: el generalist de growth que puede moverse entre canales, el especialista de contenido que entiende el SEO y la narrativa, el performance marketer que piensa en datos y el brand marketer que piensa en posicionamiento a largo plazo. Para cada perfil, dame los indicadores de alto potencial que no aparecen en el CV y las preguntas de entrevista que los revelan.

CULTURA DE DATOS Y ACCOUNTABILITY
Los equipos de marketing de alto rendimiento operan en una cultura donde los datos no son solo para los reportes; son la base de cada decisión. Ayúdame a establecer los rituales de datos que hacen que el equipo tome decisiones más rápidas y mejores: el weekly metrics review sin ego (donde los resultados buenos y malos se analizan con la misma objetividad), el experiment log que captura los aprendizajes y el attribution framework que da a cada canal el crédito correcto.

LOS RITUALES DE ALTO RENDIMIENTO
Los mejores equipos de marketing tienen rituales que mantienen la energía, la alineación y la velocidad. Dame el diseño de los rituales semanales y mensuales que construyen una cultura de alto rendimiento: la kickoff semanal que revisa el avance y prioriza, el brainstorming mensual que mantiene la creatividad activa y la revisión de campaña post-mortem que convierte cada campaña en aprendizaje para la siguiente.

RELACIÓN CON VENTAS
El mayor multiplicador del rendimiento del equipo de marketing es la calidad de la relación con ventas. Ayúdame a construir el sistema de colaboración entre marketing y ventas que alinea los objetivos, define el SLA de handoff de leads, establece los criterios de MQL y SQL de manera conjunta y crea los rituales de feedback que mejoran continuamente la calidad del pipeline que marketing genera.

GESTIÓN DEL TALENTO Y DESARROLLO
Los mejores marketers tienen opciones. Ayúdame a diseñar el sistema de retención y desarrollo del talento de marketing: los planes de carrera que combinan profundidad técnica con amplitud estratégica, el acceso a formación y experimentación que mantiene al equipo actualizado y el reconocimiento que va más allá del bonus.

VELOCIDAD DE EJECUCIÓN
Los equipos de marketing de alto rendimiento son más rápidos que la competencia. Ayúdame a identificar los principales cuellos de botella de velocidad en el equipo de marketing (aprobaciones, producción de contenido, diseño, revisiones legales) y a diseñar los sistemas que los eliminan o los aceleran.

Dame el plan para construir un equipo de marketing que no solo cumpla sus objetivos, sino que se convierta en una ventaja competitiva real para el negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción y transformación de equipos de marketing de alto rendimiento',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Engineering teams de élite',
                'description'       => 'Construye y mantiene un equipo de ingeniería que entrega consistentemente con la cultura de calidad, el hiring bar y el ambiente que atrae y retiene a los mejores engineers.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Engineering o CTO con experiencia construyendo equipos de ingeniería de alto rendimiento en startups en crecimiento acelerado y grandes empresas tecnológicas. Quiero construir o transformar mi equipo de ingeniería para que opere a un nivel de excelencia sostenido y necesito un plan completo para lograrlo.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño y la estructura actual del equipo de ingeniería?
2. ¿Cuál es el mayor problema de rendimiento: velocidad de entrega, calidad del código, deuda técnica, rotación de talento o alineación con producto?
3. ¿El equipo está en modo startup (velocidad > proceso), scale-up (construyendo estructura) o enterprise (manteniendo y evolucionando)?
4. ¿Tienes capacidad de contratación o necesitas mejorar el rendimiento con el equipo actual?

**EL HIRING BAR:**

El mayor multiplicador del rendimiento de un equipo de ingeniería es la calidad de las personas que contrata. Un equipo de diez ingenieros extraordinarios supera a uno de veinte ingenieros mediocres. Ayúdame a definir y mantener un hiring bar alto:

PROCESO DE ENTREVISTAS QUE PREDICE EL RENDIMIENTO
Dame el diseño de un proceso de entrevistas para ingenieros que evalúe no solo las habilidades técnicas sino también las que predicen el rendimiento en el contexto concreto del equipo: la capacidad de descomponer problemas complejos, el ownership sobre los resultados (no solo sobre el código), la capacidad de aprender rápido y la compatibilidad con la cultura de feedback del equipo.

LAS PREGUNTAS QUE REVELAN A LOS MEJORES INGENIEROS
Los mejores ingenieros no son solo los que resuelven el algoritmo más rápido; son los que hacen las preguntas correctas antes de empezar, que identifican los trade-offs y que piensan en el sistema completo. Dame las preguntas de entrevista y los casos de diseño que diferencian a los ingenieros de élite de los ingenieros competentes.

**CULTURA DE CALIDAD:**

DEFINICIÓN DE CALIDAD EN EL CONTEXTO DEL EQUIPO
La calidad en ingeniería tiene múltiples dimensiones: la calidad del código (legible, testeable, mantenible), la calidad de la arquitectura (escalable, resiliente, evolutiva), la calidad del proceso (previsible, eficiente, aprendiente) y la calidad del output (funciona como se espera, sin regresiones). Ayúdame a establecer los estándares de calidad concretos para mi equipo y los mecanismos que hacen que esos estándares se mantengan sin convertirse en un cuello de botella.

CODE REVIEW COMO HERRAMIENTA DE CULTURA
El code review es la práctica que más impacto tiene en la calidad técnica y en el desarrollo del equipo. Ayúdame a diseñar la cultura de code review del equipo: las normas de qué se revisa y qué no, el tono de los comentarios que construye en lugar de desmotivar, el tiempo máximo para revisar un PR y cómo usar el code review como oportunidad de mentoring.

GESTIÓN DE LA DEUDA TÉCNICA
La deuda técnica no gestionada es el principal inhibidor de la velocidad a largo plazo. Dame el sistema para gestionar la deuda técnica de manera que sea visible, priorizable y que se aborde de forma sistemática sin que consuma el 100% de la capacidad del equipo.

**EL AMBIENTE QUE ATRAE Y RETIENE A LOS MEJORES:**

Los ingenieros de élite tienen opciones. Lo que los retiene no es solo el salario; es la calidad del trabajo, la calidad de los colegas, el impacto que sienten que tienen y el crecimiento que experimentan. Ayúdame a diseñar el ambiente de trabajo que hace que los mejores ingenieros quieran quedarse y que atrae a otros de su nivel.

AUTONOMÍA Y OWNERSHIP
Los mejores ingenieros necesitan autonomía real sobre las decisiones técnicas dentro de un framework de alineación estratégica. Dame el modelo de governance técnica que da al equipo la autonomía que necesita para tomar decisiones rápidas sin crear fragmentación tecnológica.

APRENDIZAJE Y CRECIMIENTO
Los equipos de ingeniería de alto rendimiento están en constante aprendizaje. Dame el diseño del sistema de aprendizaje continuo del equipo: los guilds técnicos, los tech talks internos, el tiempo dedicado a la exploración y la inversión en formación y conferencias que mantiene al equipo en la frontera técnica.

Construye conmigo el plan para un equipo de ingeniería que sea reconocido dentro y fuera de la organización por su excelencia técnica y su capacidad de entrega.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Construcción de equipos de ingeniería de alto rendimiento y excelencia técnica',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Equipos de diseño de alto impacto',
                'description'       => 'Construye un equipo de diseño que transforma productos con la selección, la cultura de critique, el proceso de design review y las métricas que demuestran el impacto del diseño.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Design o Head of Design con experiencia construyendo equipos de diseño de alto impacto en empresas de tecnología de consumo y B2B. Quiero construir o elevar mi equipo de diseño para que sea reconocido como un motor de transformación del producto y necesito tu ayuda para diseñar la estrategia completa.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño y la estructura actual del equipo de diseño?
2. ¿El equipo está centralizado o distribuido por squads de producto?
3. ¿Cuál es el mayor reto del equipo: credibilidad con los stakeholders, calidad del output, velocidad, retención del talento o impacto medible?
4. ¿Cuál es la madurez del diseño en la organización: diseño como decoración, diseño como proceso o diseño como estrategia?

**ELEVAR LA MADUREZ DEL DISEÑO EN LA ORGANIZACIÓN:**

Antes de construir el equipo, hay que entender la madurez del diseño en la organización. La mayoría de las empresas tratan el diseño como un servicio estético en lugar de como un proceso de resolución de problemas. Ayúdame a evaluar la madurez del diseño en mi organización y a diseñar la estrategia para elevarla:

ETAPAS DE MADUREZ DEL DISEÑO
- Diseño como decoración: se llama al diseñador cuando ya está decidido qué construir para que lo haga bonito
- Diseño como usabilidad: el diseñador forma parte del equipo de producto pero en un rol de ejecución
- Diseño como proceso: el equipo de diseño lidera el proceso de discovery y tiene voz en las decisiones de producto
- Diseño como estrategia: el diseño informa las decisiones de negocio y el Chief Design Officer tiene voz en el board

**SELECCIÓN Y DESARROLLO DEL EQUIPO DE DISEÑO:**

PERFILES PARA UN EQUIPO DE DISEÑO COMPLETO
Dame la definición de los perfiles que necesita un equipo de diseño completo: el UX researcher que trae la voz del usuario, el interaction designer que diseña flujos y comportamientos, el visual/UI designer que construye el sistema visual, el design system lead que mantiene la consistencia a escala y el content designer que trabaja la voz del producto.

LO QUE BUSCAR EN UN DESIGNER DE ALTO RENDIMIENTO
El portfolio es solo el principio. Ayúdame a identificar los indicadores de alto rendimiento en un diseñador durante el proceso de selección: cómo articula sus decisiones de diseño, cómo reacciona al feedback crítico de su trabajo, cómo colabora con disciplinas no-diseño y cómo mide el impacto de su trabajo.

**CULTURA DE CRITIQUE:**

Las critique sessions son el ritual más importante de un equipo de diseño. Una cultura de critique sana genera diseñadores mejores, trabajo de más calidad y un equipo más cohesionado. Ayúdame a establecer la cultura de critique del equipo:

LAS NORMAS DEL CRITIQUE EFECTIVO
El feedback de critique debe ser específico, accionable y orientado a mejorar el trabajo, no a demostrar quién sabe más de diseño. Dame las normas concretas que establezco para las critique sessions: el formato de presentación del trabajo, las preguntas que guían el feedback, las normas sobre el tono y el nivel de especificidad del feedback y cómo documentar el feedback para que sea procesable.

**MÉTRICAS DE IMPACTO DEL DISEÑO:**

El mayor reto del equipo de diseño es demostrar su impacto en términos que la organización entienda y valore. Ayúdame a construir el cuadro de mando del equipo de diseño con métricas en tres niveles:
- Métricas de output del equipo: velocidad de entrega, cobertura del diseño system, ratio de handoff sin retrabajo
- Métricas de calidad del producto: SUS score, task completion rate, error rate, tiempo en tarea
- Métricas de impacto de negocio: conversión, retención, NPS, revenue atribuible a iniciativas de diseño

CÓMO COMUNICAR EL IMPACTO
Dame estrategias para comunicar el impacto del diseño a los stakeholders que no hablan el lenguaje del diseño: cómo conectar las decisiones de diseño con los resultados de negocio, cómo presentar los hallazgos de investigación de usuarios de manera que generen urgencia para actuar y cómo hacer visible el trabajo de diseño que evita problemas antes de que ocurran.

Construye conmigo la estrategia para un equipo de diseño que sea indiscutiblemente valioso para la organización porque el impacto de su trabajo está demostrado en las métricas que importan.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de equipos de diseño de alto impacto y madurez organizacional',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales team de alto rendimiento',
                'description'       => 'Construye el equipo que supera quota trimestre tras trimestre con las prácticas de contratación, coaching e incentivos que diferencian a los equipos de ventas que ganan siempre.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Sales o Chief Revenue Officer con experiencia construyendo equipos de ventas de alto rendimiento en empresas B2B de tecnología y servicios profesionales. Quiero construir o transformar mi equipo de ventas para que supere quota de manera consistente y necesito un plan completo para lograrlo.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño actual del equipo y su estructura (SDRs, AEs, AMs, SEs)?
2. ¿Cuál es la tasa de attainment actual: qué porcentaje del equipo alcanza o supera quota?
3. ¿Cuál es el mayor problema: pipeline insuficiente, tasa de cierre baja, ciclo de venta largo o pérdida de cuentas existentes?
4. ¿Es un modelo de ventas inbound, outbound o mixto?

**CONTRATACIÓN PARA EL ALTO RENDIMIENTO EN VENTAS:**

Los vendedores de alto rendimiento son escasos y su identificación es difícil porque la mayoría tiene un buen pitch de ventas de sí mismos. Ayúdame a diseñar el proceso de selección que identifica a los vendedores que realmente rendirán en mi contexto específico:

LOS INDICADORES PREDICTIVOS DEL ÉXITO EN VENTAS
Los indicadores más predictivos del éxito en ventas no son los años de experiencia ni el sector anterior; son la curiosidad intelectual (el vendedor que estudia el negocio del cliente), la resiliencia ante el rechazo (cómo han manejado los malos trimestres), la orientación al aprendizaje (qué han hecho para mejorar activamente) y el coeficiente de ownership (hasta qué punto atribuyen sus resultados a sus propias acciones versus a factores externos).

EL ROLE PLAY COMO HERRAMIENTA DE SELECCIÓN
Dame el diseño de un role play de ventas para el proceso de selección que sea representativo del ciclo de venta real: cómo evaluar la capacidad de escucha activa, la habilidad para hacer preguntas de descubrimiento, el manejo de objeciones y el cierre. Incluye la rúbrica de evaluación que hace objetiva la decisión.

**EL SISTEMA DE COACHING PARA EL ALTO RENDIMIENTO:**

La diferencia entre un equipo de ventas mediocre y uno de élite no es solo la calidad de las personas; es la calidad del coaching. Ayúdame a construir el sistema de coaching que eleva el rendimiento de cada miembro del equipo:

COACHING BASADO EN DATOS
El coaching efectivo empieza con los datos correctos: no solo el resultado (la cuota) sino los indicadores de proceso (tasa de conversión por etapa, velocidad del ciclo, tamaño medio del deal, número de actividades por semana). Dame el cuadro de mando de ventas que permite identificar exactamente dónde está el problema de rendimiento de cada vendedor.

CALL REVIEW Y COACHING DE HABILIDADES
El ritual más potente del coaching de ventas es la revisión de llamadas y reuniones reales. Ayúdame a estructurar las sesiones de call review: el formato de la sesión (autodescubrimiento antes de que el coach dé su feedback), los criterios de evaluación de una llamada de ventas excelente y cómo convertir los patrones que emergen de múltiples reviews en programas de desarrollo de habilidades.

**DISEÑO DE INCENTIVOS:**

El plan de incentivos del equipo de ventas debe alinear los comportamientos del equipo con los objetivos del negocio. Ayúdame a diseñar un plan de incentivos que motive sin crear efectos secundarios no deseados: cómo estructurar la base y el variable, cómo usar los aceleradores para los que superan quota, cómo gestionar los clawbacks y cómo diseñar los SPIFFs para iniciativas específicas.

LA CULTURA DE ALTO RENDIMIENTO EN VENTAS
Los equipos de ventas de alto rendimiento tienen una cultura específica: alta energía, orientación al aprendizaje, celebración de los logros y gestión directa del bajo rendimiento. Ayúdame a construir la cultura que hace que el equipo quiera competir consigo mismo además de con la competencia.

Dame el plan completo para construir un equipo de ventas donde el alto rendimiento sea la norma y no la excepción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Construcción y transformación de equipos de ventas B2B de alto rendimiento',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product teams que envían',
                'description'       => 'Construye equipos de producto que entregan consistentemente con la autonomía, la alineación, la cultura de decisión y los rituales que hacen que los equipos operen a su máximo nivel.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia construyendo organizaciones de producto en empresas de tecnología que escalan desde el early stage hasta la madurez. Quiero construir o transformar mi equipo de producto para que entregue de manera consistente y rápida y necesito un plan completo para lograrlo.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de la organización de producto (PMs, diseñadores, engineers)?
2. ¿Cuál es el mayor problema de entrega: velocidad, calidad, alineación con el negocio o desalineación interna del equipo?
3. ¿El equipo opera con squads autónomos, estructura funcional o un modelo híbrido?
4. ¿Cuál es el mayor bloqueante del rendimiento del equipo en este momento?

**EL MODELO DE EQUIPO DE PRODUCTO QUE ENTREGA:**

Los equipos de producto de alto rendimiento comparten un conjunto de características que van más allá del proceso o la metodología. Ayúdame a construir el modelo de equipo que entrega consistentemente en mi contexto:

AUTONOMÍA DENTRO DE UN FRAMEWORK DE ALINEACIÓN
El mayor bloqueante de la velocidad de entrega en los equipos de producto es la falta de claridad sobre qué decisiones puede tomar el equipo de manera autónoma y cuáles requieren aprobación. Ayúdame a diseñar el framework de autonomía que da a los equipos la claridad que necesitan para tomar decisiones rápidas sin crear desalineación estratégica: la jerarquía de decisiones, el RACI de las decisiones de producto y los criterios que activan la escalación.

LA CULTURA DE DECISIÓN
Los equipos de producto de alto rendimiento toman más decisiones y las toman más rápido que sus competidores, incluso con incertidumbre. Ayúdame a construir la cultura de decisión del equipo: cómo entrenar al equipo para tomar decisiones con datos imperfectos, cómo usar el framework de "desacuerdo y compromiso" para evitar el consensus by committee y cómo crear el ambiente donde los errores son aprendizaje y no consecuencias.

**LOS RITUALES DEL EQUIPO DE PRODUCTO QUE ENTREGA:**

PRODUCT REVIEW SEMANAL
El ritual central de los equipos de producto de alto rendimiento es la product review semanal: una sesión de 60-90 minutos donde el equipo presenta el trabajo de la semana, recibe feedback directo del liderazgo y alinea las prioridades de la semana siguiente. Ayúdame a diseñar el formato de la product review que mantiene el ritmo de entrega y la calidad simultáneamente.

ESTRATEGIA DE DISCOVERY Y DELIVERY
Los mejores equipos de producto tienen dos tracks paralelos que se alimentan mutuamente: el discovery track (entendiendo el problema futuro) y el delivery track (construyendo la solución actual). Ayúdame a diseñar cómo el equipo balancea el tiempo entre discovery y delivery de manera que nunca esté construyendo sin evidencia ni descubriendo sin entregar.

**MÉTRICAS DE SALUD DEL EQUIPO DE PRODUCTO:**

Los equipos de producto necesitan medir no solo el output (features entregadas) sino el outcome (impacto en los usuarios y el negocio) y la salud del sistema (velocidad, calidad, deuda técnica). Ayúdame a construir el cuadro de mando que mide la salud real del equipo de producto y que anticipa los problemas antes de que se conviertan en crisis.

GESTIÓN DEL TALENTO DE PRODUCTO
Los product managers y diseñadores de alto rendimiento son escasos y tienen opciones. Ayúdame a diseñar el sistema de desarrollo del talento de producto: los planes de carrera que ofrecen crecimiento dentro de la organización, el mentoring y el coaching que acelera el desarrollo de los PMs más jóvenes y el sistema de feedback que hace que cada miembro del equipo sepa exactamente dónde está y qué necesita mejorar.

Dame el plan para una organización de producto que sea reconocida dentro de la empresa por su capacidad de entrega y fuera por la calidad del producto que construye.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de organizaciones de producto que entregan de manera consistente y rápida',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HIPO programs para RRHH',
                'description'       => 'Identifica y desarrolla a los empleados de alto potencial con los criterios, los programas de aceleración y los planes de carrera que retienen a los mejores y los preparan para el siguiente nivel.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en gestión del talento y desarrollo del liderazgo con experiencia diseñando e implementando programas HIPO (High Potential) en empresas medianas y grandes. Quiero diseñar o mejorar el programa de alto potencial de mi organización y necesito una guía completa desde la identificación hasta el desarrollo y la retención.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de la organización y el sector?
2. ¿Existe ya algún programa de identificación y desarrollo del talento o lo estamos construyendo desde cero?
3. ¿Cuál es el horizonte de tiempo del programa: a 1 año, 3 años o 5 años?
4. ¿Cuál es el objetivo principal: llenar las posiciones de liderazgo futuras, retener al talento más valioso o acelerar el rendimiento de los mejores?
5. ¿Hay una cultura de transparencia sobre quién es HIPO o es un proceso confidencial?

**IDENTIFICACIÓN DEL ALTO POTENCIAL:**

La confusión más común en los programas HIPO es identificar a los mejores performers actuales en lugar de a los que tienen el mayor potencial de crecimiento. Un empleado de alto rendimiento en su rol actual no necesariamente tiene el potencial para crecer dos o tres niveles. Ayúdame a separar el rendimiento del potencial con criterios objetivos:

EL MODELO DE LOS TRES INDICADORES DE POTENCIAL
Los tres indicadores más predictivos del alto potencial son: la capacidad de aprendizaje (aprende de la experiencia, del feedback y de los nuevos contextos más rápido que sus pares), la aspiración (quiere genuinamente crecer y asumir mayor responsabilidad, no solo el estatus que conlleva) y el compromiso (está comprometido con la organización y con su propio desarrollo, no solo con la siguiente promoción). Ayúdame a operacionalizar estos tres indicadores con preguntas de calibración y comportamientos observables.

EL PROCESO DE CALIBRACIÓN
El proceso de identificación de HIPOs debe ser riguroso, estructurado y libre de sesgos para ser creíble. Ayúdame a diseñar el proceso de calibración: la matrix de rendimiento-potencial (9-box), el proceso de nominación y validación por los managers, el comité de calibración y los criterios que hacen que las decisiones sean consistentes entre departamentos.

**DISEÑO DEL PROGRAMA HIPO:**

ACELERACIÓN DEL DESARROLLO
Los HIPOs aprenden principalmente de las experiencias, no de los cursos. El modelo 70-20-10 aplicado al desarrollo del alto potencial: el 70% del desarrollo viene de las experiencias desafiantes (proyectos stretch, rotaciones, exposición a nuevos contextos), el 20% de las relaciones (mentoring, coaching, networking ejecutivo) y el 10% de la formación formal. Ayúdame a diseñar el portfolio de experiencias de desarrollo para los HIPOs de mi organización.

EXPOSICIÓN AL LIDERAZGO SENIOR
Uno de los elementos más valorados y más efectivos de un programa HIPO es el acceso al liderazgo senior. Dame el diseño de las actividades que conectan a los HIPOs con el liderazgo de la organización: el programa de mentoring con executives, la participación en proyectos estratégicos donde interactúan con el C-suite y los foros de presentación donde los HIPOs presentan sus análisis y recomendaciones directamente al liderazgo.

**RETENCIÓN DEL ALTO POTENCIAL:**

Los HIPOs son los más fáciles de perder porque también son los más buscados por la competencia. Ayúdame a diseñar la estrategia de retención específica para el alto potencial que va más allá de la compensación: el plan de carrera transparente que muestra el camino de crecimiento, el acceso a proyectos de alto impacto que mantiene el engagement y las conversaciones de carrera regulares que anticipan los momentos de riesgo de fuga.

COMUNICACIÓN DEL PROGRAMA
Decide conmigo si el programa HIPO debe ser público o confidencial y diseña la estrategia de comunicación correspondiente: cómo comunicar la existencia del programa sin desmotivar a los que no están en él, cómo dar feedback a los nominados que no pasaron la calibración y cómo gestionar las expectativas de los HIPOs sobre la velocidad de su progresión.

Dame el diseño completo de un programa HIPO que identifique al talento correcto, lo desarrolle efectivamente y lo retenga en la organización el tiempo suficiente para que tenga el impacto que justifica la inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño e implementación de programas de alto potencial (HIPO) para organizaciones',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Equipos financieros de alto rendimiento',
                'description'       => 'Construye un equipo de finanzas que es socio estratégico del negocio con la selección, el desarrollo y la cultura que convierte un departamento de contabilidad en un equipo de business partners.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia transformando departamentos financieros de centros de coste a socios estratégicos del negocio en empresas de crecimiento rápido y organizaciones en proceso de transformación. Quiero construir un equipo de finanzas de alto rendimiento y necesito un plan para elevar la función financiera al nivel de impacto estratégico que la empresa necesita.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño actual del equipo de finanzas y su estructura (accounting, FP&A, treasury, controlling)?
2. ¿Cómo ve el negocio al equipo de finanzas actualmente: como soporte administrativo, como control o como socio estratégico?
3. ¿Cuál es el mayor reto del equipo: velocidad de cierre, calidad del reporting, capacidad analítica o influencia en las decisiones?
4. ¿Hay inversión en tecnología financiera o el equipo opera con sistemas legacy?

**LA TRANSFORMACIÓN DEL ROL DE FINANZAS:**

El equipo de finanzas de alto rendimiento no es el que cierra más rápido; es el que ayuda al negocio a tomar mejores decisiones. Esta transformación requiere cambios en las personas, los procesos y la tecnología. Ayúdame a planificar la transformación de la función financiera:

DE LA CONTABILIDAD AL BUSINESS PARTNERING
El Finance Business Partner es el perfil que conecta la función financiera con el negocio. No es un contador que hace análisis adicionales; es un profesional que entiende profundamente el negocio, que tiene credibilidad con los líderes de las áreas y que contribuye a las decisiones estratégicas con análisis financieros que las informan. Ayúdame a definir el perfil del Finance Business Partner para mi organización y a diseñar el proceso de transición de los roles actuales hacia este modelo.

AUTOMATIZACIÓN PARA LIBERAR CAPACIDAD ESTRATÉGICA
La mayoría del tiempo del equipo de finanzas se consume en tareas de recopilación, procesamiento y presentación de datos que pueden automatizarse. Ayúdame a identificar los procesos del equipo que tienen mayor potencial de automatización (cierre mensual, conciliaciones, reporting estándar, previsiones) y a diseñar el plan de automatización que libera tiempo del equipo para el análisis estratégico.

**SELECCIÓN Y DESARROLLO DEL EQUIPO:**

LOS PERFILES DEL EQUIPO FINANCIERO DE ALTO RENDIMIENTO
Dame la definición de los perfiles que necesita un equipo de finanzas completo en una empresa de mediano tamaño: el controller que garantiza la integridad de los datos, el FP&A analyst que construye los modelos y las previsiones, el Finance Business Partner que trabaja con las áreas de negocio y el Data Analyst de finanzas que construye los dashboards y los modelos de datos.

DESARROLLO DE HABILIDADES ANALÍTICAS
El mayor gap de los equipos de finanzas tradicionales es la capacidad de análisis avanzado. Ayúdame a diseñar el programa de desarrollo de habilidades analíticas del equipo: el dominio de Excel avanzado y modelización financiera, la introducción a herramientas de BI (Power BI, Tableau, Looker), las bases de SQL para consultar datos directamente y las habilidades de storytelling con datos para presentar los análisis de manera persuasiva.

**CULTURA DE PARTNERSHIP CON EL NEGOCIO:**

Un equipo de finanzas de alto rendimiento tiene una cultura orientada al cliente interno. Ayúdame a construir los rituales que refuerzan esta cultura: las visitas regulares de los Finance BPs a las reuniones de las áreas, el modelo de "office hours" donde el negocio puede consultar a finanzas en tiempo real, el NPS interno de satisfacción de los clientes internos del equipo de finanzas y cómo celebrar los impactos estratégicos que el equipo genera.

Dame el plan para transformar la función financiera de mi empresa en un equipo de alto rendimiento que sea reconocido como un socio estratégico indispensable para el crecimiento del negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Transformación del equipo financiero en socio estratégico del negocio',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Equipos legales de alto rendimiento',
                'description'       => 'Construye un departamento legal que entrega a la velocidad del negocio con la priorización, la gestión del tiempo y la cultura que hace que el área legal sea vista como un habilitador.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel con experiencia transformando departamentos legales internos de cuellos de botella a habilitadores del negocio en empresas de tecnología y servicios en crecimiento rápido. Quiero construir o transformar mi equipo legal para que opere a la velocidad del negocio y sea percibido como un socio estratégico. Necesito un plan completo.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño del equipo legal y su estructura (contratos, laboral, compliance, litigios, IP)?
2. ¿Cuál es la percepción del departamento legal en la organización actualmente: un cuello de botella, un control necesario o un socio de negocio?
3. ¿Cuál es el mayor problema de rendimiento: velocidad de revisión de contratos, gestión de riesgos, compliance o falta de recursos para el volumen de trabajo?
4. ¿Hay herramientas de legal tech o el equipo opera principalmente con Word y email?

**LA TRANSFORMACIÓN DEL ROL LEGAL:**

El departamento legal de alto rendimiento no es el que dice "no" más rápido; es el que ayuda al negocio a hacer las cosas de manera correcta más rápidamente. Esta transformación requiere un cambio de mentalidad del equipo y un cambio de percepción en la organización.

DE "EL DEPARTAMENTO DEL NO" A "EL HABILITADOR ESTRATÉGICO"
El primer paso de la transformación es entender por qué el negocio percibe al equipo legal como un obstáculo. Ayúdame a hacer el diagnóstico: dónde están los mayores puntos de fricción, qué procesos generan más quejas del negocio, cuánto tiempo tarda el ciclo de revisión de contratos y qué podría eliminarse del proceso legal sin aumentar el riesgo material.

PRIORIZACIÓN DEL TRABAJO LEGAL
El equipo legal recibe más trabajo del que puede procesar y todo parece urgente. Ayúdame a diseñar el sistema de priorización del trabajo legal: la matrix de riesgo-urgencia que clasifica las solicitudes, el SLA por tipo de trabajo (qué comprometemos para contratos estándar, qué para contratos complejos, qué para consultas ad hoc) y cómo comunicar el sistema de priorización al negocio de manera que reduzca la presión de los "esto es urgentísimo".

**TECNOLOGÍA LEGAL:**

AUTOMATIZACIÓN DE CONTRATOS
La revisión y redacción de contratos consume la mayor parte del tiempo del equipo legal. Ayúdame a identificar qué contratos son candidatos a la automatización: los contratos estándar de alto volumen (NDAs, contratos de servicio, términos y condiciones), el diseño de un repositorio de plantillas actualizadas y auto-explicativas y las herramientas de CLM (Contract Lifecycle Management) que aceleran el ciclo.

**GESTIÓN DEL TALENTO LEGAL:**

PERFILES PARA UN EQUIPO LEGAL DE ALTO RENDIMIENTO
Dame la definición de los perfiles que necesita un equipo legal interno completo: el abogado de contratos corporativos que gestiona el día a día del negocio, el especialista en propiedad intelectual para empresas de tecnología, el abogado laboral que gestiona la relación con los empleados y el compliance officer que garantiza el cumplimiento normativo.

EL ABOGADO CON MENTALIDAD DE NEGOCIO
El mayor reto de los departamentos legales internos es encontrar y desarrollar abogados que entiendan el negocio tan bien como entienden el derecho. Ayúdame a definir las habilidades de "business acumen" que debo desarrollar en el equipo: la comprensión del modelo de negocio, la lectura de los estados financieros, la participación en reuniones de producto y ventas y la capacidad de evaluar el riesgo legal en términos de impacto en el negocio.

CULTURA DE SERVICIO AL CLIENTE INTERNO
Un equipo legal de alto rendimiento trata al negocio como su cliente más importante. Ayúdame a construir los rituales de orientación al cliente interno: la reunión mensual con los principales clientes internos para revisar las prioridades, el sistema de feedback post-proyecto que mejora el servicio y la métrica de satisfacción del cliente interno que el equipo usa para mejorar continuamente.

Dame el plan para transformar el departamento legal en un equipo que el negocio quiere incluir en las conversaciones desde el principio, no en el último momento antes de firmar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformación del departamento legal interno en habilitador estratégico del negocio',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS teams excepcionales',
                'description'       => 'Construye el equipo de customer success que bate récords de retención y expansión con la selección, el onboarding, el coaching y los sistemas que hacen que el equipo entregue consistentemente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia construyendo equipos de CS de alto rendimiento en empresas SaaS B2B con modelos de suscripción. Quiero construir o transformar mi equipo de customer success para que sea el principal motor de retención y crecimiento de la empresa y necesito un plan completo.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño actual del equipo de CS y la ratio CS Manager por cliente?
2. ¿Cuál es el modelo de CS: high touch (pocas cuentas grandes), tech touch (muchas cuentas pequeñas) o mixto?
3. ¿Cuáles son las métricas actuales de retención (NRR, GRR, churn) y cómo se comparan con el benchmark del sector?
4. ¿Cuál es el mayor problema del equipo: identificación de riesgo de churn, expansión de cuentas, onboarding o calidad de las QBRs?
5. ¿El equipo tiene objetivos de revenue (expansión y upsell) además de los de retención?

**SELECCIÓN DEL CS MANAGER DE ALTO RENDIMIENTO:**

El Customer Success Manager de alto rendimiento es un perfil muy específico que combina habilidades de gestión de relaciones, análisis de datos y orientación al negocio del cliente. Ayúdame a definir el perfil y el proceso de selección:

LOS INDICADORES DEL CS MANAGER EXCEPCIONAL
Los mejores CS Managers comparten unas características que los distinguen: la curiosidad genuina por el negocio del cliente (preguntan más de lo que cuentan), la proactividad en la identificación de riesgos (no esperan a que el cliente se queje), la capacidad de influir sin autoridad (generan alineación dentro del equipo del cliente) y la orientación al resultado del cliente en términos de negocio (piensan en el ROI del cliente, no en las features del producto).

EL PROCESO DE SELECCIÓN PARA CS
Dame el diseño del proceso de selección para CS Managers que evalúa los indicadores anteriores: las preguntas de entrevista que revelan la orientación al cliente, el role play de QBR o reunión de riesgo que evalúa la capacidad de gestión de relaciones y la prueba analítica que evalúa la capacidad de interpretar los datos de uso del producto.

**EL SISTEMA DE GESTIÓN DE CUENTAS:**

SEGMENTACIÓN Y PRIORIZACIÓN
No todas las cuentas merecen el mismo nivel de atención. Ayúdame a diseñar el modelo de segmentación que asigna el nivel correcto de servicio a cada cuenta: los criterios de segmentación (ACV, potencial de expansión, complejidad, engagement), la definición del modelo de servicio por segmento y la ratio CS Manager por cuenta para cada segmento.

HEALTH SCORING
El health score es la herramienta central de un equipo de CS predictivo. Ayúdame a diseñar el health score de mi producto: los indicadores de engagement con el producto que predicen la renovación, los indicadores de riesgo que activan una intervención proactiva y el proceso de actualización y calibración del health score para que mantenga su poder predictivo.

**COACHING Y DESARROLLO DEL EQUIPO DE CS:**

QBR REVIEW COMO HERRAMIENTA DE COACHING
Revisar las QBRs de los CS Managers antes de que se realicen y después de realizadas es el ritual de coaching más potente del equipo de CS. Ayúdame a estructurar el proceso de QBR review: qué revisar antes (la agenda, los datos, el plan del siguiente período), qué observar durante (la dinámica con el cliente, la respuesta a las preguntas difíciles) y qué trabajar después (los puntos de mejora específicos).

MÉTRICAS DEL EQUIPO DE CS
El equipo de CS debe tener métricas de rendimiento claras que van más allá del NRR a nivel de empresa: el NRR por CS Manager, la tasa de QBRs completadas, el tiempo promedio de respuesta al cliente, el porcentaje de cuentas con health score actualizado y el pipeline de expansión generado por el equipo. Ayúdame a construir el cuadro de mando del equipo de CS que hace visible el rendimiento individual y colectivo.

Dame el plan para un equipo de customer success que convierta la retención y la expansión en una ventaja competitiva sostenida para el negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Construcción de equipos de customer success de alto rendimiento en SaaS B2B',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Alto rendimiento personal como freelance',
                'description'       => 'Opera en tu máximo nivel de forma sostenida con los sistemas de trabajo, la gestión de la energía y las rutinas que los freelancers más productivos practican a diario.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de productividad y rendimiento personal especializado en freelancers y profesionales independientes con experiencia trabajando con consultores, diseñadores, writers, developers y otros profesionales que trabajan por cuenta propia. Quiero operar en mi máximo nivel de forma sostenida y necesito construir los sistemas, rutinas y hábitos que lo hacen posible.

**Preguntas iniciales:**
1. ¿Cuál es tu tipo de trabajo freelance y cómo estructuras actualmente tu jornada?
2. ¿Cuál es el mayor reto de rendimiento: falta de foco, procrastinación, gestión del tiempo, energía inconsistente o dificultad para desconectar?
3. ¿Trabajas desde casa, coworking u otro entorno?
4. ¿Tienes períodos de mucho trabajo y períodos de poco, o tienes un volumen relativamente constante?
5. ¿Cuántas horas reales de trabajo de alta calidad produces al día actualmente?

**EL SISTEMA DE TRABAJO DEL FREELANCE DE ALTO RENDIMIENTO:**

DISEÑO DE LA JORNADA PARA EL MÁXIMO RENDIMIENTO
El freelance promedio trabaja 8-10 horas pero produce solo 3-4 horas de trabajo de alta calidad. El freelance de alto rendimiento invierte sus mejores horas en el trabajo más valioso y gestiona el resto de la jornada de manera que proteja esa productividad máxima. Ayúdame a diseñar mi jornada ideal:

IDENTIFICACIÓN DE LAS HORAS DE MÁXIMO RENDIMIENTO
La primera parte del diseño de la jornada es identificar cuándo produces tu mejor trabajo: las horas del día en que tu concentración, creatividad y energía están en su punto más alto. Para la mayoría de las personas son las primeras horas de la mañana, pero puede variar. Ayúdame a identificar mis horas de máximo rendimiento y a protegerlas para el trabajo más importante y cognitivamente demandante.

BLOQUES DE TRABAJO PROFUNDO
El trabajo de alta calidad requiere bloques de tiempo sin interrupciones. Diseña con mis horas de máximo rendimiento una estructura de bloques de trabajo profundo: la duración óptima de los bloques (90-120 minutos), los rituales de entrada y salida del bloque, cómo gestionar las interrupciones externas e internas y el número de bloques de trabajo profundo que es sostenible en una jornada.

GESTIÓN DE LAS TAREAS ADMINISTRATIVAS
El freelance tiene una carga administrativa significativa: emails, facturación, propuestas, contabilidad, redes sociales. Ayúdame a diseñar el sistema para gestionar las tareas administrativas de manera que no contaminen los bloques de trabajo profundo: el batching de emails, la automatización de las tareas repetitivas y la delegación cuando sea posible.

**GESTIÓN DE LA ENERGÍA:**

EL CICLO DE ENERGÍA DEL FREELANCE
El rendimiento sostenido no depende solo de la gestión del tiempo; depende de la gestión de la energía. Ayúdame a construir los hábitos que mantienen mi energía en niveles altos de manera consistente: el sueño como fundamento (cuánto necesito y cómo protegerlo), el movimiento como herramienta de energía (cuándo y cómo incorporarlo en la jornada de trabajo) y la nutrición como combustible (cómo evitar los bajones de energía de media mañana y media tarde).

LA RECUPERACIÓN COMO PARTE DEL RENDIMIENTO
Los freelancers de alto rendimiento saben que la recuperación no es una pérdida de tiempo; es parte del sistema de rendimiento. Ayúdame a diseñar los rituales de recuperación que mantengo diariamente, semanalmente y mensualmente: la desconexión al final de la jornada, el fin de semana sin trabajo, las vacaciones reales y las microrecuperaciones durante la jornada.

**SISTEMAS DE TRABAJO:**

GESTIÓN DE PROYECTOS Y TAREAS
El freelance que gestiona múltiples proyectos simultáneamente necesita un sistema que le dé visibilidad sobre todo lo que tiene en marcha sin que la gestión del sistema consuma energía productiva. Ayúdame a diseñar el sistema de gestión de proyectos y tareas mínimo efectivo: las herramientas, la frecuencia de revisión y el proceso de captura de nuevas tareas que no requiere esfuerzo.

SISTEMA DE CAPTURA DE IDEAS Y CONOCIMIENTO
Los freelancers creativos y de conocimiento generan ideas constantemente. Ayúdame a diseñar el sistema de captura y procesamiento de ideas que hace que ninguna idea valiosa se pierda y que el conocimiento acumulado sea accesible cuando lo necesito.

EL RITMO SEMANAL
El diseño de la semana es tan importante como el diseño de la jornada. Ayúdame a construir un ritmo semanal que equilibre el trabajo cliente, el desarrollo de negocio, el aprendizaje y la recuperación de manera que sea sostenible indefinidamente.

Dame el sistema completo de alto rendimiento personal adaptado a las especificidades del trabajo freelance para que pueda producir mi mejor trabajo de manera consistente sin sacrificar mi salud ni mi vida personal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construcción de sistemas de alto rendimiento personal sostenible para freelancers',
                'vote_score'        => 50,
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
