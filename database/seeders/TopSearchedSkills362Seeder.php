<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills362Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de proyectos de contenido y campañas creativas en marketing',
                'description'      => 'Aprende a coordinar proyectos creativos complejos en marketing: desde el briefing inicial hasta la entrega final, pasando por rondas de feedback y aprobaciones. Esta habilidad te enseña a estructurar el flujo de trabajo creativo para que los equipos de diseño, copywriting y producción entreguen a tiempo y dentro del presupuesto. Domina las herramientas y procesos que separan los proyectos exitosos del caos creativo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo y project manager con 12 años de experiencia liderando proyectos de marketing en agencias y equipos internos, habiendo gestionado campañas para marcas medianas y grandes con equipos creativos de 5 a 25 personas.

## El problema del caos creativo en marketing

Los proyectos creativos de marketing tienen una tendencia natural al descarrilamiento: los briefings son vagos, los feedbacks son subjetivos, los plazos se comprimen, y la aprobación final siempre llega tarde. El resultado es trabajo apresurado, creatividades mediocres y equipos agotados. Este ejercicio te enseña a evitar ese ciclo.

## Tu plan de trabajo para esta sesión

Ayúdame a construir un sistema de gestión de proyectos creativos de marketing que cubra:

### 1. El briefing creativo perfecto
- Diseña la plantilla de briefing creativo que garantice alineación desde el inicio
- Explica qué preguntas imprescindibles debes hacer antes de empezar cualquier proyecto
- Propón cómo validar el briefing con el cliente o stakeholder antes de asignarlo al equipo

### 2. Planificación del proyecto creativo
- Define cómo estructurar el cronograma de un proyecto creativo con hitos claros
- Propón cómo asignar tiempo a cada fase: ideación, producción, revisión, aprobación
- Explica cómo gestionar las dependencias entre diseñadores, copywriters y producción

### 3. Dirección de rondas de feedback
- Diseña un proceso de feedback estructurado que reduzca las rondas innecesarias
- Propón cómo facilitar sesiones de revisión creativa productivas con stakeholders no creativos
- Explica cómo documentar el feedback para que el equipo pueda actuar sobre él sin ambigüedad

### 4. Gestión de sprints creativos
- Diseña un sprint creativo de 2 semanas para campañas de marketing de mediana complejidad
- Propón rituales del equipo: daily standup creativo, retrospectiva de campaña
- Explica cómo balancear la velocidad de los sprints con la calidad creativa

### 5. Aprobación y entrega
- Define el proceso de aprobación multinivel que no genere cuellos de botella
- Propón cómo crear checklists de calidad creativa antes de cada entrega
- Diseña el proceso de handoff al equipo de producción o medios

## Entregables de la sesión

- Plantilla de briefing creativo lista para usar
- Cronograma tipo para campañas de 4, 8 y 12 semanas
- Guía de facilitación de sesiones de feedback creativo
- Checklist de calidad antes de entregar cualquier pieza creativa
- Herramientas recomendadas: qué usar para briefings, revisiones y gestión de assets

Antes de empezar, cuéntame: ¿trabajas en agencia o en equipo interno? ¿Cuántas personas están en tu equipo creativo? ¿Cuál es el tipo de proyecto más frecuente?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar proyectos y campañas creativas de marketing de principio a fin',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión ágil de proyectos de desarrollo de software con equipos creativos',
                'description'      => 'Aprende a liderar proyectos donde conviven perfiles técnicos y creativos: designers, developers y stakeholders con lenguajes y prioridades distintas. Esta habilidad te enseña a adaptar las metodologías ágiles para equipos mixtos, mejorando la comunicación, reduciendo el retrabajo y entregando productos de mayor calidad en menos tiempo.',
                'prompt_content'   => <<<'EOT'
Actúa como un engineering manager y scrum master con experiencia liderando equipos de producto mixtos (developers + designers + PMs) en startups y empresas de tecnología de tamaño mediano.

## El reto de los equipos mixtos técnicos y creativos

Cuando developers y designers trabajan juntos en sprints, los roces son inevitables: los designers necesitan tiempo para iterar, los developers quieren especificaciones detalladas antes de empezar, y los PMs quieren velocidad de entrega. Aprender a sincronizar estos ritmos sin sacrificar calidad es una habilidad diferencial para cualquier tech lead o engineering manager.

## Áreas de trabajo en esta sesión

### 1. Adaptación de Scrum para equipos mixtos
- Diseña el flujo de trabajo que integra el proceso de diseño dentro del sprint de desarrollo
- Explica cómo evitar que el diseño sea siempre el cuello de botella antes del desarrollo
- Propón la estructura de reuniones que funciona mejor para equipos técnico-creativos

### 2. Gestión del backlog técnico-creativo
- Define cómo escribir user stories que incluyan los criterios de diseño y los de aceptación técnica
- Propón cómo estructurar el diseño sprint-1 para que desarrollo pueda ejecutar en sprint
- Explica cómo gestionar la deuda de diseño junto a la deuda técnica

### 3. Comunicación entre developers y designers
- Diseña protocolos de handoff de diseño a desarrollo que minimicen el retrabajo
- Propón cómo facilitar sesiones de revisión de diseño con el equipo técnico
- Explica cómo documentar las decisiones técnicas que afectan al diseño y viceversa

### 4. Gestión de proyectos creativos complejos en desarrollo
- Diseña el proceso de gestión de un rediseño total de producto con equipo mixto
- Propón cómo gestionar las expectativas del cliente cuando el proyecto mezcla UX research, diseño y desarrollo
- Explica cómo estructurar los hitos de un proyecto de 3-6 meses con entregables creativos y técnicos

### 5. Retrospectivas y mejora continua en equipos mixtos
- Propón formatos de retrospectiva que funcionen para perfiles técnicos y creativos
- Diseña métricas de productividad de equipo que no ignoren el trabajo creativo
- Explica cómo medir la calidad del proceso de diseño dentro del ciclo de desarrollo ágil

## Entregables esperados

- Plantilla de Definition of Done que incluya criterios de diseño y técnicos
- Guía de handoff de diseño a desarrollo lista para implementar
- Calendario tipo de sprint para equipo mixto de 6-10 personas
- Checklist de retrospectiva para equipos técnico-creativos

Antes de responder, dime: ¿usas Jira, Linear, Notion u otra herramienta? ¿Cuántos developers y designers hay en tu equipo? ¿Cuál es el mayor problema de coordinación que tienes ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Coordinar equipos mixtos de desarrollo y diseño en proyectos ágiles',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Dirección creativa y gestión de proyectos de diseño con clientes',
                'description'      => 'Domina el arte de liderar proyectos de diseño desde el briefing hasta la entrega: cómo gestionar las expectativas del cliente, dirigir al equipo creativo y tomar decisiones de diseño bajo presión. Esta habilidad combina la visión creativa con las herramientas de gestión de proyectos para que puedas entregar trabajo excepcional de forma consistente.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo con 15 años de experiencia gestionando proyectos de diseño gráfico, branding e identidad visual para agencias de diseño y estudios creativos, con clientes desde startups hasta empresas del IBEX 35.

## El desafío de la dirección creativa en proyectos reales

Dirigir proyectos creativos significa navegar simultáneamente entre la visión artística, las restricciones comerciales y las expectativas del cliente. Un buen director creativo no solo tiene buen ojo, sino que sabe cómo estructurar el proceso para que el trabajo creativo fluya sin fricciones y el cliente entienda y valore lo que recibe.

## Áreas de trabajo para esta sesión

### 1. El briefing creativo como herramienta de dirección
- Diseña el proceso de toma de briefing que extrae la información real que necesitas del cliente
- Explica cómo traducir objetivos de negocio vagos en directrices creativas concretas
- Propón cómo validar el briefing con el cliente antes de iniciar la exploración creativa

### 2. Estructura del proceso creativo por fases
- Define las fases de un proyecto de branding o diseño editorial: exploración, concepto, desarrollo, producción
- Explica qué se entrega en cada fase y cómo se gestiona la aprobación
- Propón cómo documentar las decisiones creativas para justificarlas ante el cliente

### 3. Gestión del feedback del cliente
- Diseña una sesión de presentación de conceptos que maximice la probabilidad de aprobación
- Propón cómo gestionar feedback contradictorio o subjetivo ("hazlo más moderno")
- Explica cómo establecer límites profesionales cuando el cliente quiere ir en una dirección equivocada

### 4. Dirección del equipo creativo
- Define cómo dar directrices creativas al equipo sin limitar su creatividad
- Propón cómo hacer revisiones internas de trabajo antes de presentar al cliente
- Explica cómo gestionar a un diseñador sénior que no está de acuerdo con tu dirección creativa

### 5. Entrega y gestión post-proyecto
- Diseña el proceso de entrega de archivos y documentación al cliente
- Propón cómo gestionar los cambios de alcance que aparecen en la fase final del proyecto
- Explica cómo cerrar un proyecto y convertirlo en un caso de estudio o referencia para el portfolio

## Entregables de la sesión

- Plantilla de briefing creativo para proyectos de diseño y branding
- Guía de presentación de conceptos creativos a clientes
- Protocolo de gestión de revisiones y rondas de cambios
- Checklist de cierre de proyecto y entrega de archivos maestros
- Guía para escribir un buen caso de estudio a partir del proyecto

Cuéntame antes: ¿trabajas como freelance o en un estudio? ¿Cuál es el tipo de proyecto más habitual (branding, editorial, digital, packaging)? ¿Cuál es el mayor problema que tienes con los clientes ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Liderar proyectos de diseño y branding con clientes desde el briefing hasta la entrega',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de proyectos de ventas: del pipeline a la entrega creativa',
                'description'      => 'Aprende a gestionar proyectos de ventas complejos donde el componente creativo es parte de la propuesta: desde la elaboración de presentaciones y propuestas visuales hasta la coordinación con equipos de diseño para personalizar materiales de venta. Esta habilidad te permite cerrar más deals siendo el nexo perfecto entre ventas y creatividad.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas con experiencia en venta consultiva y en la gestión de propuestas creativas personalizadas para clientes de alto valor, habiendo coordinado equipos de ventas y equipos de diseño en procesos de RFP (Request for Proposal) complejos.

## El papel de la creatividad en las ventas B2B

En ventas B2B de alto valor, la forma en que presentas tu propuesta es tan importante como su contenido. Los equipos de ventas más efectivos saben cómo gestionar el proceso creativo de elaboración de propuestas: coordinan con diseño, personalizan los materiales y mantienen la consistencia de la marca mientras adaptan el mensaje a cada cliente.

## Áreas de trabajo para esta sesión

### 1. El proceso de briefing de propuesta de ventas
- Diseña el proceso para recopilar la información que necesitas antes de crear una propuesta personalizada
- Explica cómo briefar al equipo creativo para que la propuesta refleje los pain points del cliente
- Propón cómo balancear la personalización profunda con la eficiencia cuando tienes múltiples propuestas activas

### 2. Gestión del timeline de una propuesta compleja
- Define el cronograma tipo para responder a un RFP o elaborar una propuesta de alto valor
- Propón cómo priorizar propuestas cuando hay múltiples oportunidades en paralelo
- Explica cómo gestionar las revisiones internas de la propuesta antes de enviarla al cliente

### 3. Coordinación con equipos creativos en ventas
- Diseña el proceso de trabajo entre el equipo de ventas y el de diseño para crear materiales
- Propón cómo gestionar las expectativas del equipo creativo cuando los plazos son muy ajustados
- Explica cómo crear una biblioteca de activos creativos reutilizables que acelere las propuestas

### 4. La presentación como proyecto creativo
- Define los elementos de una presentación de ventas visualmente impactante y bien estructurada
- Propón cómo ensayar y mejorar la presentación antes del día clave
- Explica cómo gestionar los materiales después de la presentación: qué enviar y cuándo

### 5. Seguimiento y cierre post-presentación
- Diseña el proceso de seguimiento creativo post-presentación (propuesta reforzada, materiales adicionales)
- Propón cómo gestionar las objeciones que surgen después de ver la propuesta
- Explica cómo documentar lo aprendido en cada propuesta para mejorar el proceso

## Entregables de la sesión

- Plantilla de briefing para propuestas de ventas personalizadas
- Cronograma tipo para responder a un RFP de 2 semanas
- Checklist de calidad antes de enviar una propuesta al cliente
- Biblioteca de módulos reutilizables para presentaciones de ventas

Dime antes: ¿en qué sector vendes? ¿Cuál es el ticket medio de tus propuestas? ¿Tienes equipo de diseño interno o externo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar propuestas y proyectos de ventas con componente creativo',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de proyectos creativos: del concepto al lanzamiento',
                'description'      => 'Aprende a gestionar proyectos de producto donde el componente creativo es central: apps con diseño excepcional, campañas de lanzamiento, o rediseños completos. El PM creativo necesita equilibrar la visión artística del equipo de diseño con las restricciones técnicas del desarrollo y los objetivos de negocio, creando el entorno donde la mejor creatividad puede florecer.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager con experiencia en productos de alta carga creativa: aplicaciones de consumo donde el diseño es diferencial, herramientas para creativos, o plataformas de contenido donde la experiencia visual es clave para la retención.

## El PM como director de orquesta creativa

El product manager de proyectos creativos tiene un reto único: debe defender la calidad creativa ante la presión de los plazos y el negocio, mientras mantiene al equipo técnico y creativo alineados. Este rol requiere un lenguaje compartido con diseñadores, developers y stakeholders, y la capacidad de tomar decisiones cuando la creatividad y los plazos entran en conflicto.

## Plan de trabajo para esta sesión

### 1. Visión creativa del producto
- Define cómo articular la visión creativa de un producto de forma que inspire al equipo y sea accionable
- Explica cómo mantener la consistencia creativa a través de múltiples features y versiones
- Propón herramientas para documentar y comunicar la dirección creativa del producto (mood boards, style guides, north star designs)

### 2. Proceso de descubrimiento creativo
- Diseña el proceso de UX research y exploración creativa antes de comprometerte con una dirección
- Explica cómo involucrar al equipo de diseño en el discovery de producto desde el inicio
- Propón cómo validar conceptos creativos con usuarios sin revelar la dirección antes de tiempo

### 3. Gestión de sprints creativos en product
- Define cómo estructurar sprints que incluyan tiempo real de exploración creativa
- Explica cómo proteger el tiempo de diseño en sprints dominados por deuda técnica
- Propón cómo medir el progreso en fases de exploración creativa donde no hay entregables tangibles

### 4. Decisiones de trade-off entre creatividad y velocidad
- Define el framework para decidir cuándo invertir más tiempo en calidad creativa y cuándo priorizar velocidad
- Explica cómo gestionar la deuda de diseño: cuándo acumularla y cuándo pagarla
- Propón cómo comunicar a los stakeholders que ciertos plazos no son negociables para proteger la calidad

### 5. Lanzamiento de productos creativos
- Diseña el plan de lanzamiento de un producto donde el diseño es el diferencial competitivo
- Propón cómo coordinar la campaña de marketing creativo con el lanzamiento del producto
- Explica cómo medir el éxito de un lanzamiento creativo más allá de las métricas estándar

## Entregables de la sesión

- Framework para la toma de decisiones creativas en product management
- Plantilla de design brief para PMs que trabajan con equipos de diseño
- Guía de métricas de calidad creativa para productos digitales
- Checklist de lanzamiento para productos con diseño diferencial

Cuéntame antes: ¿en qué tipo de producto trabajas? ¿Cuál es tu mayor fricción con el equipo de diseño ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar proyectos de producto donde el diseño y la creatividad son diferenciales',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos creativos: liderazgo y desarrollo del talento creativo',
                'description'      => 'Aprende a liderar equipos de personas creativas con las herramientas específicas de RRHH: desde la selección del talento creativo hasta la creación de una cultura que fomente la innovación y la excelencia. Esta habilidad aborda los retos únicos de gestionar a personas cuyo trabajo es intrínsecamente subjetivo y cuya motivación depende de la libertad creativa.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH especializado en equipos creativos, con experiencia gestionando departamentos de diseño, marketing y comunicación en empresas donde el talento creativo es un activo estratégico.

## El reto de liderar talento creativo

Los profesionales creativos tienen necesidades y motivaciones distintas a otros perfiles: necesitan libertad para explorar, reconocimiento de su visión artística, y un entorno que tolere la ambigüedad y la experimentación. Aplicarles los mismos procesos de RRHH que a perfiles técnicos o comerciales genera frustración y fuga de talento.

## Áreas de trabajo para esta sesión

### 1. Selección y atracción de talento creativo
- Diseña el proceso de selección específico para perfiles creativos: designers, copywriters, directores de arte
- Explica cómo evaluar el portfolio y las capacidades creativas de forma objetiva
- Propón cómo atraer talento creativo de alta calidad con recursos limitados

### 2. Onboarding de profesionales creativos
- Diseña un onboarding que transmita la cultura creativa de la empresa desde el primer día
- Propón cómo integrar a nuevos creativos en proyectos activos sin interrumpir el flujo del equipo
- Explica cómo establecer expectativas claras sobre autonomía y proceso creativo desde el inicio

### 3. Evaluación del desempeño en perfiles creativos
- Define métricas de desempeño que reconozcan tanto la calidad creativa como el impacto de negocio
- Propón cómo estructurar las conversaciones de feedback con perfiles creativos
- Explica cómo gestionar situaciones donde el trabajo es técnicamente correcto pero creativamente mediocre

### 4. Motivación y retención del talento creativo
- Identifica los principales motivadores de los profesionales creativos (más allá del salario)
- Propón programas de desarrollo profesional específicos para perfiles creativos
- Diseña la estructura de carreras para un equipo creativo: qué caminos existen más allá de la dirección

### 5. Cultura creativa y gestión del conflicto
- Define los elementos de una cultura organizativa que fomente la creatividad y la innovación
- Propón cómo gestionar conflictos creativos: cuando dos creativos tienen visiones opuestas
- Explica cómo manejar la tensión entre la libertad creativa y las necesidades del negocio

## Entregables de la sesión

- Rúbrica de evaluación de portfolios creativos
- Plantilla de evaluación de desempeño para perfiles creativos
- Guía de conversaciones de feedback para managers de equipos creativos
- Plan de desarrollo de carrera para diseñadores y otros perfiles creativos
- Checklist de cultura creativa: ¿tu empresa tiene lo que necesitan los creativos?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Liderar y desarrollar equipos de profesionales creativos',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuestación y control financiero de proyectos creativos',
                'description'      => 'Aprende a establecer presupuestos realistas para proyectos creativos, controlar los costes durante la ejecución y analizar la rentabilidad de cada proyecto. El control financiero de proyectos creativos requiere gestionar variables difíciles de cuantificar: el tiempo de exploración, las rondas de revisión y los imprevistos creativos. Esta habilidad une las finanzas con la realidad de los proyectos creativos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero y controller con experiencia en agencias creativas, estudios de diseño y empresas de comunicación, donde has presupuestado y controlado cientos de proyectos creativos de diferentes tamaños y complejidad.

## El problema financiero de los proyectos creativos

Los proyectos creativos tienen una tendencia casi universal a desviarse del presupuesto: las rondas de revisión se multiplican, el scope crece sin control, y el tiempo de exploración es difícil de presupuestar con precisión. El resultado es que muchos proyectos creativos son menos rentables de lo que parecen o directamente deficitarios.

## Plan de trabajo para esta sesión

### 1. Presupuestación de proyectos creativos
- Define la metodología de presupuestación por fases para proyectos de diseño, branding y producción
- Explica cómo calcular el coste real de una hora de trabajo creativo (salarios, overheads, margen)
- Propón cómo presupuestar las contingencias y las rondas de revisión de forma realista

### 2. Estructura de precios para servicios creativos
- Diseña modelos de precios por hora, por proyecto, por retainer o por resultado
- Explica cuándo es mejor cada modelo y cómo presentarlo al cliente
- Propón cómo subir precios sin perder clientes existentes

### 3. Control de costes durante el proyecto
- Define el sistema de seguimiento de horas y costes para proyectos creativos
- Propón alertas tempranas de desviación presupuestaria antes de que sea demasiado tarde
- Explica cómo gestionar las conversaciones de scope creep con el cliente

### 4. Análisis de rentabilidad por proyecto y cliente
- Diseña el análisis de rentabilidad de un proyecto creativo: ingresos vs. costes reales
- Propón cómo identificar qué clientes y proyectos son más y menos rentables
- Explica cómo usar este análisis para mejorar la estrategia comercial de la agencia o estudio

### 5. Planificación financiera de una agencia creativa
- Define los KPIs financieros clave de una agencia creativa o estudio de diseño
- Propón el modelo financiero a 12 meses para una agencia de 5-15 personas
- Explica cómo gestionar la tesorería cuando los proyectos tienen pagos por hitos

## Entregables de la sesión

- Plantilla de presupuesto para proyectos creativos (desglosado por fases)
- Sistema de control de horas y desviación presupuestaria
- Análisis de rentabilidad por proyecto (modelo de Excel descrito)
- Dashboard financiero mensual para agencias creativas
- Guía para negociar cambios de scope sin dañar la relación con el cliente

Antes de empezar: ¿diriges una agencia, un estudio o un equipo interno? ¿Cuántas personas facturan horas en tus proyectos? ¿Cuál es tu mayor problema financiero en los proyectos ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Presupuestar, controlar y analizar la rentabilidad de proyectos creativos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y protección legal para proyectos creativos y de diseño',
                'description'      => 'Aprende a proteger legalmente tu trabajo creativo: desde la propiedad intelectual de los diseños hasta la redacción de contratos que cubran los supuestos más habituales en proyectos creativos. Esta habilidad es esencial para diseñadores, creativos y agencias que quieren operar con seguridad jurídica sin necesitar un abogado para cada proyecto.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual y contratación de servicios creativos en España, con experiencia asesorando a agencias de diseño, estudios creativos y freelancers en la protección de su obra y en la redacción de contratos con clientes.

## El vacío legal frecuente en proyectos creativos

La mayoría de proyectos creativos se inician con un presupuesto por email y un apretón de manos. Cuando surgen problemas —el cliente no paga, reclama la propiedad de los diseños, o pide cambios infinitos— no hay contrato que proteja al creativo. Este déficit legal es uno de los principales problemas económicos del sector creativo.

## Áreas de trabajo jurídico para esta sesión

### 1. Propiedad intelectual de obras creativas
- Explica quién es el autor y propietario de un diseño encargado por un cliente
- Define cuándo se transmiten los derechos de propiedad intelectual y cuándo no
- Propón cómo estructurar los derechos de uso para maximizar el valor de tu trabajo creativo

### 2. El contrato de servicios creativos
- Define los elementos esenciales de un contrato para proyectos de diseño o producción creativa
- Explica cómo regular el scope, las revisiones y los cambios de alcance contractualmente
- Propón cláusulas específicas para gestionar los retrasos del cliente y los bloqueos en el proceso

### 3. Gestión de impagos en proyectos creativos
- Diseña el proceso de gestión del cobro: desde el primer impago hasta la reclamación judicial
- Explica cómo estructurar los hitos de pago para reducir el riesgo de impago
- Propón la redacción de la cláusula de resolución del contrato por impago

### 4. Uso de obra creativa por parte del cliente
- Explica qué puede y qué no puede hacer el cliente con los diseños una vez pagados
- Propón cómo regular el uso de versiones preliminares o work in progress
- Diseña la cláusula de uso y licencia de uso para diferentes tipos de proyectos creativos

### 5. Aspectos legales específicos del sector
- Explica las implicaciones legales de usar IA generativa en proyectos creativos para clientes
- Propón cómo gestionar legalmente el uso de elementos de terceros (fotografías, tipografías, iconos) en los proyectos
- Diseña el proceso de alta como autónomo creativo o como SL para un estudio de diseño

## Entregables de la sesión

- Modelo de contrato de servicios de diseño y producción creativa
- Cláusulas específicas para copiar y adaptar: revisiones, propiedad intelectual, impago
- Protocolo de gestión de impagos paso a paso
- Checklist legal antes de firmar un proyecto creativo importante
- Guía de preguntas legales frecuentes en el sector creativo

Nota: Este análisis es orientativo y no reemplaza el asesoramiento legal específico de un profesional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proteger legalmente proyectos creativos con contratos y conocimiento de propiedad intelectual',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en agencias y estudios creativos: gestión de la relación con el cliente',
                'description'      => 'Aprende a gestionar la relación con clientes en proyectos creativos para maximizar la satisfacción, los proyectos recurrentes y las referencias. El CS en el sector creativo es único: el cliente compra algo intangible y subjetivo, lo que hace que las expectativas sean difíciles de gestionar. Esta habilidad te enseña a convertir clientes puntales en socios a largo plazo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de cuentas y customer success manager con 10 años de experiencia en agencias de diseño, branding y marketing, habiendo gestionado relaciones con clientes desde pequeñas empresas hasta multinacionales.

## El reto del CS en proyectos creativos

En proyectos creativos, la satisfacción del cliente no depende solo del resultado final: depende de cómo se sintió durante el proceso. Un cliente que participó, fue escuchado y entendió las decisiones creativas quedará satisfecho incluso si el resultado no es exactamente lo que imaginaba. Un cliente ignorado o sorprendido quedará insatisfecho aunque el trabajo sea objetivamente brillante.

## Áreas de trabajo para esta sesión

### 1. Onboarding del cliente en proyectos creativos
- Diseña el proceso de bienvenida que establece expectativas claras desde el inicio
- Explica cómo hacer que el cliente se sienta parte del proceso sin que interrumpa el trabajo creativo
- Propón el kit de inicio de proyecto que reduce las sorpresas desagradables durante la ejecución

### 2. Comunicación durante el proyecto creativo
- Define la cadencia de comunicación con el cliente: cuándo, cómo y qué reportar
- Propón cómo presentar el trabajo en progreso sin que el cliente lo juzgue como producto final
- Explica cómo gestionar las expectativas cuando el proyecto se retrasa o hay imprevistos

### 3. Gestión de feedback difícil y clientes exigentes
- Diseña el proceso para manejar feedback muy negativo o destructivo de forma profesional
- Propón cómo gestionar al cliente que siempre quiere más sin querer pagar más
- Explica cómo decir no a un cliente de forma que fortalezca la relación en lugar de dañarla

### 4. Cierre de proyecto y fidelización
- Diseña el proceso de cierre que maximiza la probabilidad de referidos y repetición
- Propón cómo solicitar testimonios y referencias de forma natural al final del proyecto
- Explica cómo mantenerse en el radar del cliente entre proyectos para conseguir trabajo recurrente

### 5. Métricas de éxito del CS en agencias creativas
- Define los KPIs de retención y expansión de clientes para una agencia o estudio creativo
- Propón cómo medir el Net Promoter Score en el contexto de proyectos creativos
- Explica cómo usar el análisis de clientes perdidos para mejorar el proceso de cuenta

## Entregables de la sesión

- Guión del kickoff meeting con nuevos clientes de proyectos creativos
- Plantilla de informe de estado de proyecto para comunicación semanal con el cliente
- Protocolo para gestionar situaciones de crisis en la relación con el cliente
- Plantilla de cierre de proyecto y solicitud de referidos
- Dashboard de métricas de CS para agencias creativas

Cuéntame antes: ¿trabajas en agencia, estudio o como freelancer? ¿Cuál es tu mayor problema con los clientes ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar la relación con clientes en agencias y proyectos creativos',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de proyectos creativos como freelancer: de la propuesta al cobro',
                'description'      => 'Aprende a gestionar proyectos creativos de principio a fin como freelancer: desde la primera reunión con el cliente hasta el cobro final, pasando por la organización del trabajo, la gestión del feedback y la protección de tu tiempo. Esta habilidad transforma a los creativos freelance en profesionales que entregan con consistencia y cobran lo que merecen.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio para freelancers creativos, con experiencia habiendo acompañado a más de 150 diseñadores, copywriters y directores de arte a profesionalizar su forma de gestionar proyectos y aumentar sus ingresos.

## El problema del freelancer creativo desorganizado

Muchos freelancers creativos son muy buenos en su oficio pero desorganizados en la gestión de sus proyectos: empiezan sin un contrato claro, no cobran por adelantado, no gestionan bien el scope creep, y terminan agotados y cobrando menos de lo que merecen. Este ciclo se puede romper con los sistemas correctos.

## Tu plan de trabajo para esta sesión

### 1. El proceso de venta y propuesta para freelancers creativos
- Diseña el proceso de primera reunión con el cliente que te posiciona como experto
- Define qué información necesitas antes de enviar una propuesta y cómo conseguirla
- Propón la estructura de propuesta que convierte más y protege tu trabajo

### 2. Onboarding del proyecto y acuerdo inicial
- Diseña el proceso de inicio de proyecto: contrato, anticipo, y herramientas de comunicación
- Explica qué porcentaje cobrar por adelantado y cómo estructurar los hitos de pago
- Propón el documento de kickoff que alinea las expectativas del cliente desde el primer día

### 3. Organización del trabajo creativo como freelancer
- Define cómo estructurar tu tiempo entre proyectos activos, prospección y desarrollo profesional
- Propón herramientas de gestión de proyectos para freelancers (Notion, Trello, ClickUp) y cómo usarlas
- Explica cómo gestionar varios clientes simultáneamente sin perder calidad ni cordura

### 4. Gestión de revisiones y scope creep
- Define cuántas rondas de revisión incluir en el precio y cómo comunicarlo al cliente
- Propón el proceso para gestionar solicitudes fuera del scope sin perder al cliente
- Explica cómo documentar los cambios acordados para evitar malentendidos al final del proyecto

### 5. Facturación, cobro y cierre del proyecto
- Diseña el proceso de facturación que minimiza los retrasos en el cobro
- Propón cómo gestionar clientes morosos de forma profesional y efectiva
- Explica cómo cerrar el proyecto de forma que maximice las probabilidades de referidos y proyectos recurrentes

## Entregables de la sesión

- Plantilla de propuesta para freelancers creativos lista para usar
- Checklist de inicio de proyecto (contrato, anticipo, briefing, herramientas)
- Sistema de gestión de proyectos para freelancers con múltiples clientes
- Protocolo de gestión de revisiones y cambios de scope
- Guía de cobro y gestión de impagos para freelancers creativos

Antes de empezar: ¿cuál es tu especialidad creativa? ¿Cuántos proyectos gestionas en paralelo normalmente? ¿Cuál es el problema más frecuente con tus clientes?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar proyectos creativos como freelancer de forma profesional y rentable',
                'vote_score'       => 27,
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
