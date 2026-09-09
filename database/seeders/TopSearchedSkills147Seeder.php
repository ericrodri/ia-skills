<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills147Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para consultoras',
                'description'      => 'El marketing B2B de servicios de consultoría: thought leadership, referencias y los canales que generan los mandatos de mayor valor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing especializado en firmas de consultoría y servicios profesionales con experiencia en el posicionamiento y la generación de negocio para firmas de estrategia, management consulting, consultoría tecnológica y servicios especializados. Voy a describirte mi firma y necesito una estrategia de marketing completa.

Mi firma: [DESCRIBE: el tipo de consultoría que ofreces (estrategia, tecnología, operaciones, RRHH, finanzas, sostenibilidad…), el tamaño de la firma (solo, boutique, mediana), los sectores en los que trabajas, el perfil del cliente objetivo y tu ticket medio por proyecto]

**Por qué el marketing de consultoría es diferente**

Las firmas de consultoría no venden un producto tangible. Venden juicio, experiencia y confianza. El comprador no puede evaluar la calidad del servicio antes de recibirlo. Esto hace que el marketing de consultoría opere con reglas propias:

La confianza como producto: antes de que un ejecutivo contrate una consultora que no conoce, necesita evidencia de que puedes resolver su problema específico y de que tus consultores son personas con las que merece la pena trabajar. Todo el marketing de consultoría construye esa confianza antes de que haya una oportunidad.

El ciclo de compra: las firmas de consultoría raramente se eligen en respuesta a un anuncio. Se eligen porque el cliente ha seguido el trabajo de la firma durante meses, porque alguien de confianza los recomendó, o porque han demostrado entender el problema del cliente antes de que nadie les pidiera que lo resolvieran.

El marketing de consultoría como señal de capacidad: un paper bien escrito, un evento donde el socio da una conferencia magistral, o un estudio de caso que captura exactamente el problema del cliente son más eficaces que cualquier campaña de publicidad pagada.

**El thought leadership: la estrategia central**

El thought leadership es el motor de marketing de toda consultora que trabaja con clientes de alto valor. Ayúdame a construir mi estrategia de liderazgo de pensamiento:

Los temas en los que debo ser referente: cómo identifico los 3 a 5 temas en que mi firma tiene un punto de vista genuinamente diferencial. La diferencia entre ser el primero en hablar de un tema y ser el más citado sobre ese tema.

Los formatos de thought leadership que funcionan en B2B de consultoría: los papers y estudios originales (con datos propios), los artículos de opinión en medios especializados, las conferencias y paneles, los webinars y los podcasts de industria. Para cada formato, cómo maximizo el alcance y la credibilidad.

El punto de vista propio: los mejores papers de consultoría no resumen lo que todos saben, tienen una tesis. Ayúdame a desarrollar una tesis sobre mi área de especialidad que sea suficientemente contraria para ser interesante y suficientemente fundada para ser creíble.

La distribución del contenido: producir un paper excelente que nadie lee es un desperdicio. El sistema de distribución que lleva mi contenido al escritorio de los 200 ejecutivos que son mis clientes potenciales.

**Las referencias como canal de adquisición principal**

El 70-80% del nuevo negocio de las consultoras de éxito viene de referencias. Diseña para mí un programa formal de referencias que incluya: cómo identifico a mis mejores fuentes de referencia (clientes satisfechos, socios no competidores, asesores sectoriales), cómo mantengo una relación activa con ellos más allá de los proyectos, cómo facilito que te recomienden (qué materiales les doy, cómo les pido la referencia), y cómo mido y agradezco las referencias que recibo.

**Los canales digitales en consultoría: qué funciona y qué no**

LinkedIn como canal primario: la estrategia de perfil personal del socio vs la página de empresa, el contenido que genera conversaciones con decisores (no el que genera likes de colegas de profesión), y cómo uso LinkedIn para calentar relaciones con cuentas objetivo antes de un primer contacto directo.

El SEO para consultoría: los búsquedas que hacen los decisores antes de contratar, cómo me posiciono para búsquedas del tipo "consultoría de [especialidad] en [sector]", y el contenido que captura esa demanda.

Los eventos: propios (webinar, desayuno con clientes, conferencia) y de terceros (ponencias en eventos del sector). La diferencia entre visibilidad y relevancia.

Dame un plan de marketing para los próximos 6 meses con acciones mensuales, responsable de cada acción y métricas de seguimiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir la estrategia de marketing de una firma de consultoría basada en thought leadership y generación de referencias',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Consultoría técnica',
                'description'      => 'El rol del consultor de tecnología: discovery, diagnóstico, recomendaciones y entrega de valor cuando no controlas el código ni el equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor tecnológico senior con más de 10 años de experiencia ayudando a empresas a tomar decisiones tecnológicas complejas: elección de arquitecturas, migración de sistemas, evaluación de proveedores, transformación digital y auditorías técnicas. Voy a describirte un encargo de consultoría y necesito que me guíes por el proceso completo.

Mi encargo: [DESCRIBE: qué tipo de consultoría técnica te están pidiendo (auditoría de arquitectura, selección de tecnología, diagnóstico de un problema técnico, diseño de roadmap tecnológico, due diligence técnica de una adquisición), el cliente (tipo de empresa, tamaño, madurez tecnológica), y el resultado esperado]

**El rol del consultor técnico: qué es y qué no es**

El consultor técnico no es un desarrollador externo. No escribe el código, no toma las decisiones finales y no implementa lo que recomienda. Su valor es el diagnóstico riguroso, las recomendaciones bien fundamentadas y la transferencia de conocimiento. Explícame cómo debo posicionarme con el cliente desde el principio para que no espere un ejecutor sino un asesor.

El peligro del solucionismo prematuro: el error más común del consultor técnico es proponer una solución antes de entender el problema real. Cómo mantengo la curiosidad y el escepticismo durante la fase de discovery.

**La fase de discovery: cómo diagnostico sin código**

La mayoría de los problemas técnicos no son técnicos. Son organizacionales, de proceso o de alineación. Diseña para mí el proceso de discovery que incluye:

Las entrevistas con stakeholders: las preguntas que hago al CTO (qué le quita el sueño), al equipo de desarrollo (qué les impide moverse más rápido), al equipo de negocio (qué problema de negocio está bloqueado por la tecnología) y a los usuarios del sistema (dónde encuentran las mayores fricciones). Las preguntas que revelan el problema real bajo el síntoma presentado.

La revisión de documentación técnica: qué busco en la arquitectura existente, en los diagramas de sistema, en los ADR (Architecture Decision Records) y en los informes de incidentes. Qué me dice la ausencia de documentación.

La revisión de métricas: qué datos pido al cliente (tiempos de deployment, frecuencia de incidentes, DORA metrics, test coverage, deuda técnica cuantificada) y cómo los interpreto para extraer el diagnóstico correcto.

El análisis de código sin profundidad excesiva: cómo hago una revisión de alto nivel del código que me da señales suficientes sin invertir semanas en leer línea a línea.

**El informe de diagnóstico: cómo comunico hallazgos técnicos a audiencias mixtas**

El cliente que encarga la consultoría suele ser un CTO o CDO pero el informe lo leen también el CEO, el CFO y el board. Diseña para mí la estructura del informe de diagnóstico que:
- Resume el estado actual en términos de negocio (no de tecnología)
- Cuantifica el impacto de los problemas técnicos en términos económicos
- Prioriza los hallazgos por impacto y urgencia
- Hace recomendaciones accionables con alternativas y sus trade-offs
- Propone un roadmap realista con hitos y dependencias

**Las recomendaciones: cómo persuado sin imponer**

El consultor que llega con "la solución correcta" y la defiende a capa y espada no transfiere conocimiento: genera dependencia o rechazo. Cómo presento mis recomendaciones de forma que el cliente las entienda, las cuestione y las haga propias:
- Las opciones y sus trade-offs: siempre presento al menos dos alternativas con sus ventajas y desventajas honestas
- La recomendación con su fundamento: por qué esta opción es mejor para este cliente específico en este momento
- Los riesgos y cómo mitigarlos: no escondo lo que puede salir mal
- El plan de implementación que no depende de mí: cómo el equipo del cliente puede ejecutar la recomendación sin mi presencia continua

**La gestión del cliente difícil**

Los clientes que cuestionan tus hallazgos, que ya tienen una solución favorita antes de que empieces, o que esperan que validates decisiones ya tomadas. Cómo manejo cada situación manteniendo mi criterio sin destruir la relación.

Dame la estructura de un engagement de consultoría técnica de 6 semanas con entregables por semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Ejecutar un engagement de consultoría técnica desde el discovery hasta las recomendaciones y el informe final',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Consultoría de diseño',
                'description'      => 'Ofrece servicios de consultoría de diseño a empresas: el proceso, los entregables y cómo cobrar por el pensamiento estratégico más que por las horas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de diseño que ha construido una práctica de consultoría de diseño exitosa, asesorando a empresas sobre estrategia de diseño, identidad de marca, experiencia de usuario y diseño de producto. Quiero escalar mi trabajo de diseño freelance a una consultoría de diseño más estratégica y rentable, y necesito tu guía completa.

Mi situación: [DESCRIBE: qué tipo de diseño practicas (UX/UI, identidad, diseño de producto, diseño de servicio, diseño estratégico), cuántos años de experiencia tienes, si trabajas solo o con equipo, cuál es tu tarifa actual y por qué quieres hacer este cambio]

**El salto de ejecutor a consultor: la diferencia que lo cambia todo**

El diseñador freelance cobra por horas o por entregables. El consultor de diseño cobra por el valor de sus recomendaciones. Esta diferencia parece semántica pero implica un cambio completo en cómo te vendes, cómo trabajas y cuánto cobras. Explícame qué implica cada una de las dimensiones de este cambio:

El scope del trabajo: de "diseña estos 5 pantallas" a "diagnostica por qué nuestra plataforma tiene un problema de conversión y recomienda cómo resolverlo". El consultor define el problema, no solo lo resuelve.

El interlocutor: de hablar con el jefe de diseño a hablar con el CEO, el CMO o el CPO. Cómo adapto mi comunicación para hablar con líderes de negocio que toman decisiones basadas en impacto, no en criterios estéticos.

El entregable: de archivos de diseño a decisiones y estrategias documentadas. El strategy deck, el brand audit, el UX audit, el roadmap de diseño, el design system governance plan. Entregables que viven más allá del proyecto y que el cliente puede ejecutar sin ti.

**El proceso de consultoría de diseño**

Diseña para mí el proceso estándar de un engagement de consultoría de diseño:

La fase de diagnóstico: las preguntas que hacen al cliente antes de empezar a diseñar (¿cuál es el problema de negocio que el diseño tiene que resolver? ¿Cómo mediremos el éxito? ¿Qué han intentado ya?), la auditoría de diseño existente, las entrevistas con usuarios y stakeholders.

La fase de estrategia: la síntesis de hallazgos, la definición del problema real (que puede ser diferente al problema presentado), las opciones estratégicas con sus trade-offs, y la recomendación fundamentada.

La fase de diseño: cómo integro el trabajo de diseño ejecutivo dentro de un engagement de consultoría, cuándo delego la ejecución a un equipo interno o a otro estudio.

La fase de transferencia: cómo dejo al cliente con la capacidad de mantener y evolucionar el trabajo sin depender indefinidamente de mí, y cómo convierto eso en un retainer de oversight.

**Cómo cobro por valor, no por tiempo**

Los modelos de precio en consultoría de diseño:
- Precio por proyecto basado en el valor del resultado: cómo estimo el valor que mi trabajo genera (una identidad que permite levantar una ronda de financiación, un rediseño que mejora la conversión un 30%) y cómo precio en relación a ese valor.
- Retainer estratégico mensual: el modelo que da previsibilidad y que el cliente percibe como un asesor de diseño permanente a un coste razonable.
- Intensive de diagnóstico: el engagement de entrada de una semana que diagnostica el estado del diseño y produce el roadmap. Precio fijo, entregable claro, sin riesgo para el cliente.

**El portfolio de consultoría**

El portfolio de un consultor de diseño no muestra los mockups bonitos. Muestra el problema que existía, el proceso de diagnóstico, la estrategia propuesta y el resultado medible. Cómo reestructuro mi portfolio existente para contar estas historias.

Dame una propuesta tipo para un primer engagement de diagnóstico de diseño de tres semanas con estructura, entregables y precio orientativo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Transicionar de diseñador freelance a consultor de diseño estratégico: proceso, entregables y modelo de precios',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de servicios de consultoría',
                'description'      => 'Vender consultoría es diferente a vender productos: el proceso consultivo, la construcción de confianza y los contratos que protegen ambas partes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de desarrollo de negocio especializado en la venta de servicios de consultoría de alto valor. Tengo una firma de consultoría o soy consultor independiente y necesito mejorar mi proceso de ventas para cerrar más mandatos con mejores clientes a mejores precios.

Mi situación: [DESCRIBE: qué tipo de consultoría vendes, cuál es tu ticket medio, cómo consigues nuevas oportunidades ahora mismo, cuál es tu tasa de conversión aproximada y cuál es el mayor obstáculo que tienes en el proceso de ventas]

**Por qué la venta consultiva es diferente**

El error más caro en la venta de consultoría es tratar el proceso de ventas como la venta de un producto. Los servicios de consultoría se venden de forma diferente porque el comprador no puede evaluar lo que compra hasta que lo ha recibido, la confianza en la persona importa tanto como la metodología, y el precio se justifica por el valor esperado del resultado, no por el coste de las horas.

La venta consultiva es diagnóstica: el mejor vendedor de consultoría no presenta su servicio, hace preguntas que revelan el problema. El comprador que articula su problema con precisión está más cerca de comprar que el que recibe una presentación impresionante.

**El proceso de ventas para consultoría de alto valor**

Dame un proceso de ventas completo de principio a fin:

La generación de oportunidades: las fuentes más eficaces en consultoría son las referencias, el thought leadership y las relaciones de largo plazo. Cómo construyo un pipeline de oportunidades sin depender del cold outreach masivo que destruye la posición de marca de una consultora.

La cualificación: las preguntas que me dicen si merece la pena invertir tiempo en esta oportunidad. El presupuesto disponible (¿hay dinero real para un proyecto de esta magnitud?), la urgencia (¿tienen un problema que les duele ahora o es aspiracional?), el acceso al decisor real, y si soy el consultor correcto para este problema.

La reunión de discovery: no es una reunión de presentación de mi firma. Es una conversación donde el cliente me explica su situación y yo hago preguntas que demuestran que entiendo su industria y sus problemas. El objetivo no es convencer, es diagnosticar. Las preguntas que uso para hacer diagnóstico sin dar el trabajo gratis.

La propuesta: el documento que no describe lo que hago sino el problema que resuelvo, el resultado que conseguimos juntos y cómo lo medimos. La estructura que convierte el coste en una inversión con retorno esperado explícito.

La negociación: cómo negocio el scope sin negociar el precio, cómo gestiono la presión del "es demasiado caro" sin bajar tarifas y cuándo tiene sentido hacer una concesión táctica.

El cierre: por qué los cierres suaves funcionan mejor en consultoría que las técnicas de presión, y cómo gestiono el "tenemos que consultarlo internamente" sin perder el momentum.

**Los contratos que protegen a ambas partes**

Las cláusulas que no pueden faltar en un contrato de consultoría:
- El scope bien definido: qué incluye y qué NO incluye el proyecto. La fuente del 80% de los conflictos en consultoría es el scope creep.
- El proceso de aceptación de entregables: quién aprueba, en qué plazo y qué pasa si no hay respuesta.
- Las condiciones de pago: el pago adelantado o hito que protege al consultor, las penalizaciones por pago tardío.
- La cláusula de confidencialidad: qué puede contar el consultor sobre el proyecto y qué no.
- La limitación de responsabilidad: cuánto puede reclamar el cliente si el proyecto no va bien.
- La terminación anticipada: las condiciones en que cualquiera de las partes puede terminar el contrato y qué pasa con el trabajo realizado.

**La gestión del cliente durante el proyecto**

La venta no termina cuando firman el contrato. La percepción de valor durante el proyecto determina si hay proyectos siguientes y referencias. El ritmo de comunicación correcto, la gestión de las expectativas cuando algo cambia, y cómo manejo la conversación cuando el cliente quiere expandir el scope sin pagar más.

Dame un template de propuesta de consultoría de 4 páginas con la estructura que maximiza la tasa de conversión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Mejorar el proceso de ventas y propuestas para una firma de consultoría o consultor independiente de alto valor',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product consulting',
                'description'      => 'Asesora empresas en su estrategia y operación de producto: diagnóstico rápido, recomendaciones accionables y transferencia de conocimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de producto senior con experiencia asesorando a startups y empresas en crecimiento en estrategia de producto, operaciones de producto y construcción de equipos de producto. Una empresa me ha contratado para un engagement de consultoría de producto y necesito tu guía para ejecutarlo con excelencia.

El encargo: [DESCRIBE: qué tipo de empresa es el cliente (startup pre-Series A, scale-up, empresa tradicional que digitaliza), cuál es el problema o pregunta que motivó la consultoría (el producto no crece, no tienen claro el roadmap, quieren construir el equipo de producto, no saben si han encontrado el PMF), cuántas semanas tiene el engagement y qué entregables esperan]

**El diagnóstico de producto: el trabajo de las primeras dos semanas**

El consultor de producto que llega con recomendaciones en el día uno no ha hecho su trabajo. Las primeras semanas son de escucha, observación y diagnóstico antes de emitir ningún juicio. Diseña para mí el proceso de diagnóstico completo:

Las entrevistas con el equipo: qué pregunto al CEO (visión del producto, preocupaciones sobre la dirección), al CPO o Head of Product (los mayores bloqueos en la operación del día a día), a los PMs (dónde se pierden tiempo, qué decisiones son más difíciles, cuál es la relación con ingeniería y diseño), y a los ingenieros y diseñadores (la percepción del equipo técnico sobre las prioridades y el proceso).

El análisis de métricas: qué datos pido al cliente, cómo analizo el funnel de conversión, la retención por cohorte, el engagement por feature y los NPS scores, y qué señales busco que indiquen si el problema es de producto, de mercado o de ejecución.

La revisión del roadmap existente: cómo evalúo si el roadmap actual refleja la estrategia de negocio, si está suficientemente priorizado o es una lista de deseos, y si el proceso de construcción del roadmap es sano.

La observación de las reuniones de producto: qué aprendo asistiendo como observador a una revisión de roadmap, una sesión de grooming y una retrospectiva.

**El diagnóstico de PMF (Product-Market Fit)**

Una de las preguntas más frecuentes en product consulting es "¿hemos encontrado el PMF?". Dame el framework de diagnóstico de PMF que incluye: los indicadores cualitativos (la pregunta de Sean Ellis, las entrevistas de retención, el lenguaje que usan los clientes para describir el producto), los indicadores cuantitativos (retention curves, DAU/MAU ratio, NPS, churn por cohorte) y la lectura integrada que me dice si hay PMF o no.

**Las recomendaciones: cómo las presento para que se ejecuten**

El consultor que produce un informe de 80 páginas que nadie lee ha fallado. Las recomendaciones de product consulting tienen que ser:
- Específicas y accionables: no "mejorad la retención" sino "eliminad el paso 3 del onboarding que tiene una tasa de abandono del 60%"
- Priorizadas: las 3-5 cosas que importan ahora vs las que pueden esperar
- Justificadas con datos: cada recomendación tiene el dato o la entrevista que la sustenta
- Con un plan de ejecución: quién hace qué, cuándo, y cómo medimos el éxito

**La transferencia de conocimiento: el trabajo final del consultor**

El consultor de producto deja al equipo mejor de lo que lo encontró. Diseña la fase de transferencia que incluye: los workshops donde el equipo aprende el framework de priorización que usaré durante el engagement, los templates de documentación de producto que dejaré instalados, y el plan de seguimiento de los primeros 30 días post-engagement para verificar que las recomendaciones se están ejecutando.

**Las situaciones difíciles en product consulting**

Cómo manejo: el CEO que quiere que valide una decisión que ya ha tomado, el equipo de producto que me percibe como una amenaza a su trabajo, las recomendaciones que implican cambios organizacionales que el cliente no estaba esperando, y el cliente que quiere que me quede más allá del engagement inicial.

Dame el plan semana a semana para un engagement de product consulting de 6 semanas con los entregables de cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Ejecutar un engagement de consultoría de producto: diagnóstico, recomendaciones y transferencia de conocimiento al equipo cliente',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Consultoría de RRHH',
                'description'      => 'Presta servicios de consultoría en organización, cultura, compensación o desarrollo de liderazgo: modelos de negocio y proyectos más demandados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor senior de recursos humanos y organización con experiencia en proyectos de diseño organizacional, cultura corporativa, compensación y beneficios, desarrollo de liderazgo y transformación de RRHH. Quiero construir o desarrollar mi práctica de consultoría de RRHH y necesito entender el mercado, los proyectos más demandados y cómo posicionarme.

Mi situación: [DESCRIBE: desde dónde vienes (RRHH interno, consultoría generalista, psicología organizacional, coaching ejecutivo), en qué área de RRHH tienes más experiencia, si ya tienes clientes o estás empezando, y qué tipo de empresa te gustaría como cliente (startup, empresa mediana, multinacional, administración pública)]

**El mercado de consultoría de RRHH: los proyectos que se compran**

A diferencia de otras consultoría donde el cliente sabe lo que necesita, en RRHH muchas veces el cliente siente el síntoma pero no sabe qué proyecto de consultoría necesita. Explícame los proyectos más demandados con su descripción, el tipo de cliente que los contrata y el precio orientativo en España:

Diseño organizacional: reestructuraciones, rediseño de áreas, fusiones y adquisiciones, creación de nuevas unidades de negocio. El cliente: empresas en cambio estratégico. El entregable: el nuevo organigrama, las descripciones de puesto y el plan de transición.

Assessment de cultura y diagnóstico organizacional: el cliente quiere saber por qué tiene rotación, por qué el engagement está bajo o por qué el rendimiento no mejora a pesar de los programas de formación. El entregable: un diagnóstico basado en datos (encuestas, entrevistas, focus groups) y un plan de acción.

Diseño de sistemas de compensación y beneficios: bandas salariales, política de variable, revisión de la equidad retributiva, diseño de beneficios competitivos. El cliente: empresas en crecimiento que quieren estructurar la compensación, o empresas que tienen problemas de retención por competitividad salarial.

Desarrollo de liderazgo y programas de talento: los programas de identificación de alto potencial (HIPO), el diseño de programas de desarrollo de liderazgo, los assessment centers. El cliente: empresas medianas y grandes con departamento de L&D.

Transformación de la función de RRHH: el cliente tiene un departamento de RRHH muy administrativo y quiere convertirlo en un socio estratégico del negocio. El entregable: el modelo operativo del nuevo RRHH, los roles rediseñados y el plan de capacitación del equipo.

**Cómo me diferencio en un mercado con mucha competencia**

La consultoría de RRHH tiene competidores en todos los rangos de precio: desde los grandes (Hay Group/Korn Ferry, Mercer, McKinsey OrgDesign) hasta el coach freelance. Ayúdame a posicionarme con una especialización que me permita cobrar más y competir con menos:
- La especialización vertical: consultoría de RRHH para el sector tecnológico, para empresas familiares en proceso de profesionalización, para startups en fase de scale-up.
- La especialización horizontal: sólo compensación, sólo diseño organizacional, sólo cultura.
- La especialización metodológica: el consultor que usa People Analytics, el que aplica diseño de sistemas, el que integra coaching ejecutivo en todos sus proyectos.

**Los modelos de precio en consultoría de RRHH**

Las opciones: fee por día de consultoría (el modelo más común pero el menos escalable), fee por proyecto (más predecible para el cliente), retainer mensual como asesor de RRHH (el que más fideliza) y los modelos de pago por resultado (arriesgados pero diferenciadores en algunos proyectos).

**La propuesta de valor para la C-Suite**

El RRHH ha luchado históricamente por ser percibido como función estratégica. Cómo presento mis proyectos de consultoría de RRHH en términos de impacto de negocio que convencen a un CEO o CFO: la reducción de rotación en términos de coste de reemplazo, el impacto del engagement en productividad, el riesgo de no tener una estructura organizacional correcta durante una fase de crecimiento.

Dame los tres proyectos de consultoría de RRHH que tienen más demanda en empresas entre 50 y 500 empleados y el approach de ventas para cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir y posicionar una práctica de consultoría de RRHH: proyectos más demandados, diferenciación y modelo de negocio',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Consultoría financiera',
                'description'      => 'Los servicios de consultoría financiera más demandados: due diligence, reestructuración, levantamiento de capital y el perfil del consultor que consigue los mejores mandatos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un managing director de consultoría financiera independiente con experiencia en transacciones corporativas, reestructuraciones, levantamiento de capital y asesoramiento estratégico financiero a empresas medianas y fondos de inversión. Quiero desarrollar mi práctica de consultoría financiera y necesito entender los servicios más demandados, el perfil de cliente correcto y cómo posicionarme.

Mi perfil: [DESCRIBE: tu experiencia previa (banca de inversión, Big 4, CFO interno, private equity, banca corporativa), las áreas financieras donde tienes más profundidad, el tipo de empresa o transacción con el que más has trabajado, y si quieres operar solo o construir un equipo]

**Los servicios de consultoría financiera con mayor demanda**

Explícame en detalle cada tipo de servicio con el cliente que lo contrata, el proceso típico, los entregables y el rango de honorarios en el mercado español:

Due diligence financiera en M&A: el análisis financiero profundo previo a una adquisición. Qué analizo (calidad del earnings, normalización del EBITDA, evolución del capital circulante, deuda ajustada), cómo estructuro el equipo para una due diligence de 4-6 semanas, el informe final y las cláusulas de SPA que se derivan de mis hallazgos. El cliente: fondos de private equity y empresas en proceso de adquisición.

Asesoramiento en levantamiento de capital: el proceso de preparación de una empresa para levantar deuda o equity. Los documentos que preparo (information memorandum, modelo financiero, teaser), el proceso de mandato de banca de inversión vs la búsqueda directa de inversor, y cómo maximizo la valoración y las condiciones del deal. El cliente: empresas en fase de crecimiento, fundadores que buscan Series A o B, empresas familiares que buscan un socio financiero.

Reestructuración financiera y operativa: el trabajo con empresas en situación de estrés financiero. El diagnóstico de viabilidad, la negociación con la banca y los bonistas, el diseño del plan de reestructuración y el acompañamiento durante la ejecución. El cliente: empresas con covenant breaches, CFOs que necesitan un asesor externo para negociar con los bancos, o fondos de deuda distressed que necesitan un plan de viabilidad independiente.

CFO fraccional y asesor financiero estratégico: el modelo de asesoría permanente de bajo coste para empresas que no necesitan (o no pueden pagar) un CFO a tiempo completo. Las funciones que cubro: el reporting financiero de calidad, la gestión de la relación bancaria, la planificación y el presupuesto, y el acompañamiento en decisiones estratégicas con impacto financiero.

Valoración de empresas: el informe de valoración por múltiplos, DCF y transacciones comparables que se usa en transmisiones de participaciones, disputas de socios, compraventa de empresas familiares, o como benchmark de una negociación.

**El perfil del consultor financiero que gana los mejores mandatos**

Los clientes de consultoría financiera contratan a personas, no a firmas. Qué atributos son decisivos: la credibilidad técnica demostrable (qué transacciones has cerrado, de qué tamaño, con qué resultado), la red de relaciones (bancos, fondos, asesores legales, otros consultores que refieren), la especialización sectorial que te hace más relevante para un cliente concreto, y la reputación de alinear tus intereses con los del cliente.

**El modelo de honorarios en consultoría financiera**

Los modelos de precio específicos de este sector: el retainer mensual como CFO fraccional, la fee fija por proyecto de asesoramiento, el success fee como porcentaje del deal en M&A y levantamiento de capital (y por qué el éxito fee solo nunca es suficiente), y la combinación retainer + success fee que alinea intereses.

Dame los criterios de cualificación que uso para decidir si acepto un mandato de consultoría financiera y los tres elementos que hacen que un Information Memorandum sea excelente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Desarrollar una práctica de consultoría financiera: servicios más demandados, posicionamiento y modelo de honorarios',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Firma de abogados moderna',
                'description'      => 'La firma de abogados que opera como empresa de servicios: marketing, pricing, tecnología y las decisiones de gestión que diferencian las firmas que crecen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de gestión especializado en firmas de abogados y servicios legales con experiencia ayudando a despachos de todos los tamaños a modernizar su modelo de negocio, mejorar su rentabilidad y posicionarse para crecer. Dirijo o soy socio de un despacho de abogados y quiero transformarlo en una firma más competitiva y rentable.

Mi firma: [DESCRIBE: el tamaño de la firma (solo, boutique, mediana), las áreas de práctica principales, el tipo de cliente que atendéis (particulares, pymes, grandes empresas, fondos), la antigüedad de la firma y cuáles son los principales problemas de crecimiento o rentabilidad que enfrentáis]

**Por qué muchas firmas de abogados no crecen todo lo que deberían**

Las firmas de abogados son habitualmente excelentes en derecho y mediocres en gestión. El socio que factura 8 horas al día no tiene tiempo de pensar en la firma como empresa. Los problemas de gestión más comunes: la dependencia excesiva del socio fundador que concentra las relaciones con los clientes, la ausencia de una estrategia de negocio más allá de "conseguir más clientes", la resistencia a la tecnología que aumenta la eficiencia, y el pricing basado en horas que no captura el valor real del asesoramiento.

**Marketing legal: de las referencias pasivas a la generación activa de negocio**

El marketing en las firmas de abogados sigue siendo el área más subdesarrollada. Diseña para mi firma una estrategia de marketing que incluya:

El posicionamiento: la firma que intenta cubrir todo el derecho mercantil para cualquier empresa no es reconocida como especialista en nada. Cómo identifico la especialización en que soy genuinamente mejor que mis competidores y la comunico con claridad.

El thought leadership legal: los artículos en revistas jurídicas, los comentarios de jurisprudencia relevante, las alertas de actualidad legal dirigidas a los clientes, y las conferencias en asociaciones empresariales del sector en que me especializo. Cómo producir este contenido de forma sistemática sin que consuma el tiempo de los socios.

El marketing digital para despachos: el SEO local para búsquedas del tipo "abogado mercantil Madrid startup", la presencia en LinkedIn como plataforma de B2B legal, y el website que comunica la especialización y convierte visitas en consultas.

Las referencias estructuradas: la mayor fuente de negocio de cualquier despacho. Cómo convierto las referencias pasivas (el cliente que me recomienda espontáneamente) en un programa activo con otros profesionales complementarios (notarios, asesores fiscales, auditores, bancos).

**El pricing moderno en servicios legales**

El billing por horas destruye la percepción de valor y alinea los incentivos incorrectamente (el abogado cobra más cuanto más tarda). Las alternativas que los clientes prefieren y que las mejores firmas están adoptando:

Precio fijo por proyecto: el cliente sabe lo que paga antes de empezar. Cómo calculo el precio fijo que es rentable para la firma y atractivo para el cliente. Los tipos de asunto donde el precio fijo funciona (constitución de sociedad, contratos estándar, reclamaciones de deuda) y donde el precio fijo es un error (litigios complejos, operaciones M&A).

Retainer mensual: el modelo de abogado de empresa externo. Cómo lo estructuro (qué servicios incluye, qué queda fuera, cómo gestiono el exceso de uso), cómo lo precio y cómo lo vendo a empresas que nunca han tenido un abogado de referencia.

**La tecnología que moderniza la firma sin destruir el margen**

Las herramientas que tienen mayor impacto en la eficiencia de un despacho: el software de gestión de despacho (Legisway, Clio, Rocket Matter), la automatización de documentos para los contratos más repetitivos, los portales de cliente para compartir documentos y seguimiento del asunto, y la IA legal para investigación jurisprudencial y revisión de contratos.

**La estructura de gobierno de la firma**

El despacho que depende de una sola persona es frágil. Cómo distribuyo el liderazgo, la relación con clientes y la generación de negocio entre varios socios, y qué modelo de partnership (lockstep, merit-based, híbrido) incentiva la colaboración sin destruir la meritocracia.

Dame un plan de transformación de la firma para los próximos 18 meses con prioridades claras en marketing, pricing, tecnología y estructura.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Modernizar la gestión, el marketing y el modelo de negocio de una firma de abogados para aumentar la rentabilidad y el crecimiento',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Managed services y retainers',
                'description'      => 'El modelo de servicio gestionado que combina software y servicio: cómo venderlo, cómo entregarlo y cómo escalar sin destruir el margen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de operaciones especializado en empresas de managed services y servicios gestionados con experiencia en IT managed services, marketing as a service, HR outsourcing y otros modelos donde se combina tecnología y servicio humano en un contrato de retainer mensual. Quiero lanzar o mejorar mi modelo de managed services y necesito una guía completa.

Mi servicio: [DESCRIBE: qué tipo de servicio gestionado ofreces o quieres ofrecer (IT, marketing, RRHH, contabilidad, soporte al cliente, ciberseguridad, otra función de negocio), a qué tipo de empresa te diriges, cuál es el modelo de precio actual y cuántos clientes tienes si ya has empezado]

**Por qué el modelo de managed services es atractivo y difícil a la vez**

El modelo de retainer mensual genera ingresos recurrentes y predecibles, construye relaciones de largo plazo con los clientes y crea valor de catálogo para la empresa. Pero tiene un riesgo estructural que destruye a muchas empresas de managed services: la erosión del margen por el crecimiento del trabajo a cliente fijo. Explícame los dos problemas centrales que debo resolver desde el principio:

El scope creep crónico: el cliente de retainer mensual siempre pide más de lo que está en el contrato, y decirle que no daña la relación. Cómo diseño el contrato y los procesos para delimitar el scope sin parecer un proveedor rígido.

La escalabilidad del servicio humano: puedo escalar el software con código, pero escalar el servicio humano requiere contratar, y contratar reduce el margen. Cómo diseño el servicio para que sea entregable con el mínimo de tiempo humano posible sin perder la calidad que justifica el precio.

**El diseño del servicio: la clave de la rentabilidad**

Antes de vender el servicio, debo diseñarlo para que sea entregable de forma eficiente. Ayúdame a:

Definir los niveles de servicio: los tiers (básico, profesional, enterprise) con sus diferencias claras de precio, scope y tiempo de respuesta. La lógica que determina qué cliente necesita qué tier.

Estandarizar los procesos de entrega: los playbooks, templates y checklist que permiten que cualquier miembro del equipo entregue el servicio con calidad consistente. Las partes del servicio que se pueden automatizar con tecnología y las que requieren juicio humano.

Medir la utilización por cliente: el sistema que me dice cuánto tiempo dedico a cada cliente para identificar los que son más rentables y los que están destruyendo margen.

**El contrato de managed services**

Las cláusulas críticas que diferencian un contrato de managed services de un contrato de servicios puntuales:

El Service Level Agreement (SLA): tiempos de respuesta comprometidos según la criticidad del asunto, las métricas de calidad que monitorizo y reporto, y las penalizaciones o créditos si no cumplo los SLA.

El scope detallado: qué tareas están incluidas, con qué frecuencia, hasta qué límite de tiempo mensual. Qué queda explícitamente fuera y cuál es el precio por las solicitudes fuera de scope.

El proceso de revisión y renovación: cómo evalúo el contrato anualmente, cómo subo precio sin perder al cliente, y las condiciones de terminación que protegen a ambas partes.

**Cómo lo vendo**

El comprador de managed services no compra horas ni entregables, compra tranquilidad y resultados garantizados. La propuesta de valor correcta para cada tipo de cliente:
- Para la empresa pequeña: "tienes acceso a un equipo experto por el coste de un empleado a tiempo parcial"
- Para la empresa mediana: "externalizas una función no core con calidad garantizada y sin los costes laborales y de gestión de un equipo interno"

El proceso de onboarding del nuevo cliente: las primeras cuatro semanas que determinan si la relación va a funcionar o va a ser un conflicto permanente.

**La escalabilidad del negocio**

Cómo escalo de 10 a 50 clientes sin destruir el margen: el modelo de pod (un equipo pequeño que atiende a un número definido de clientes), la tecnología que multiplica la capacidad del equipo, y el punto en que tiene sentido contratar vs externalizar parte de la entrega.

Dame un modelo de rentabilidad por cliente con los parámetros que determinan si un cliente de managed services es rentable o no.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar, vender y escalar un modelo de managed services o retainer mensual con márgenes sanos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'De freelance a consultor',
                'description'      => 'El salto que multiplica la tarifa: cómo posicionarse como consultor estratégico en lugar de ejecutor táctico y las diferencias en la venta y la relación con el cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio especializado en ayudar a profesionales independientes a hacer la transición de freelance ejecutor a consultor estratégico. Tengo experiencia como freelance en mi área y quiero cobrar más, trabajar con mejores clientes y pasar de ejecutar lo que me piden a asesorar sobre qué deberían hacer. Necesito tu guía completa para hacer esta transición.

Mi situación: [DESCRIBE: en qué área eres freelance (marketing, diseño, desarrollo, RRHH, finanzas, legal, otra), cuántos años de experiencia tienes, cuál es tu tarifa actual por hora o proyecto, cómo consigues tus clientes y cuál es el mayor problema que tienes ahora mismo]

**La diferencia real entre freelance y consultor**

No es solo una cuestión de título. Es una diferencia fundamental en cómo te percibe el mercado, qué tipo de trabajo haces y cuánto cobras. Explícame en detalle las diferencias:

El freelance resuelve el problema que el cliente le define. El consultor diagnostica si ese es el problema correcto antes de resolverlo. El cliente llama al freelance con "necesito X". El cliente llama al consultor con "tenemos un problema" y espera que el consultor defina qué es X y si X es la solución correcta.

El freelance compite por precio porque su trabajo es comparable al de otros freelances. El consultor compite por criterio y reputación, no por precio, porque su punto de vista específico no es intercambiable.

El freelance cobra por tiempo invertido. El consultor cobra por el valor del resultado: el contrato que salvó, la estrategia que funcionó, la decisión que evitó un error costoso.

El freelance espera que el cliente le diga qué hacer. El consultor lidera la conversación, hace preguntas incómodas y dice cosas que el cliente no quiere escuchar pero necesita saber.

**El reposicionamiento: de ejecutor a asesor**

El cambio de posicionamiento es el trabajo más difícil porque implica cambiar cómo te presentas, qué trabajo aceptas y cómo hablas de lo que haces. Ayúdame con:

El nuevo pitch: de "soy diseñador freelance de marca" a "ayudo a startups en fase de lanzamiento a construir la identidad visual que les permite levantar su primera ronda". La fórmula es: verbo de impacto + cliente específico + resultado concreto + momento relevante.

El portfolio reencuadrado: de "estos son los proyectos que he hecho" a "estos son los problemas que he resuelto y los resultados que han conseguido mis clientes". Cómo reescribo cada caso de éxito para que cuente el problema, el diagnóstico, la recomendación y el resultado medible.

Las señales de posicionamiento consultor: la forma en que escribo en LinkedIn, el tipo de contenido que publico, las organizaciones en que participo, y los proyectos que acepto y los que rechazo. Cada sí y cada no señaliza mi posición en el mercado.

**La primera venta como consultor**

El cambio más difícil es la primera venta a un precio de consultor. Cómo abordo las conversaciones de venta de forma diferente:

La conversación diagnóstica: en lugar de presentar mis servicios, hago preguntas que revelan el problema del cliente. Las preguntas que demuestran que entiendo su industria y que tengo criterio sobre los problemas que enfrenta.

La propuesta de consultor: no es una lista de entregables y horas. Es un diagnóstico de la situación, una hipótesis sobre el problema real, una propuesta de cómo lo resolveríamos juntos y el resultado esperado.

La primera resistencia al precio: "es mucho más de lo que pagamos normalmente". Cómo respondo desde la posición de valor sin bajar el precio ni defender las horas que voy a dedicar.

**Los clientes que me ayudan a hacer la transición**

No todos mis clientes actuales van a ser clientes de consultor. Los perfiles de cliente que compran consultoría estratégica y que vale la pena cultivar ahora: el CEO o fundador que toma decisiones basadas en criterio externo, el directivo que tiene un problema importante sin resolver y presupuesto para atacarlo, y la empresa en un momento de cambio (crecimiento, pivot, reestructuración) donde la orientación estratégica vale más que la ejecución.

Dame un plan de transición de 6 meses con las acciones concretas para pasar de freelance a consultor: los cambios en el posicionamiento, los primeros clientes objetivos y cómo establezco mi nueva tarifa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Hacer la transición de freelance ejecutor a consultor estratégico: reposicionamiento, nueva propuesta de valor y primeros clientes',
                'vote_score'       => 48,
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
