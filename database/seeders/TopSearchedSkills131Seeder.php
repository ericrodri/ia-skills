<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills131Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing agile: sprints, Kanban y OKRs para equipos de marketing',
                'description'       => 'Aplica Scrum, Kanban y OKRs a la gestión del equipo de marketing con sprints de campaña, backlog de contenido y retrospectivas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Marketing con experiencia aplicando metodologías ágiles a equipos de marketing en empresas de tecnología y consumo. Quiero transformar la forma en que gestiono mi equipo de marketing, pasando de una planificación por campañas trimestrales a un modelo más iterativo y adaptable.

**Por qué el marketing necesita agilidad:**

Empieza explicando por qué las metodologías de gestión de proyectos tradicionales (el plan anual, la campaña monolítica de tres meses) fallan en el marketing digital actual: los algoritmos cambian, las oportunidades virales son efímeras, los presupuestos se reasignan según el rendimiento y el equipo necesita experimentar continuamente. ¿Qué gana un equipo de marketing que adopta un enfoque iterativo?

**Adaptar Scrum al marketing:**

El Scrum de desarrollo de software no encaja directamente en marketing. Explícame cómo adaptarlo: ¿qué es un sprint de dos semanas en marketing? ¿Qué entra en el sprint backlog (contenido por publicar, campañas por lanzar, experimentos A/B, landing pages por crear)? ¿Cómo hago la sprint planning en marketing sin que sea una reunión de tres horas? ¿Qué formato tiene el daily standup para un equipo que no escribe código?

**El backlog de contenido y campañas:**

Diseña la estructura del backlog de marketing: cómo escribo las «historias de usuario» para iniciativas de marketing (ejemplo: «como potencial cliente en fase de consideración, quiero leer un caso de éxito de mi sector para confiar en el producto»). ¿Cómo priorizo el backlog combinando impacto esperado en métricas, esfuerzo de producción y alineación estratégica? ¿Quién es el Product Owner del equipo de marketing?

**Kanban para flujos de producción de contenido:**

Explica cuándo es mejor Kanban que Scrum para el equipo de marketing: la producción continua de contenido (blog, redes sociales, email) encaja mejor con un flujo Kanban. Dame la estructura del tablero Kanban para un equipo de contenido: las columnas (idea, brief aprobado, en producción, en revisión, programado, publicado, análisis de resultados), el WIP limit por columna y cómo gestiono los cuellos de botella.

**OKRs para el equipo de marketing:**

Diseña OKRs trimestrales para un equipo de marketing: el Objective estratégico y los tres o cuatro Key Results medibles que demuestran su consecución. Dame ejemplos concretos para distintos objetivos: aumentar la generación de leads cualificados, mejorar el brand awareness, reducir el CAC o aumentar el NPS de la experiencia de marketing. ¿Cómo conecto los OKRs del equipo con los OKRs de empresa?

**Retrospectivas que mejoran el proceso:**

Explica cómo facilitar retrospectivas de marketing que no sean una queja colectiva sino una sesión de mejora real: el formato Start-Stop-Continue adaptado a marketing, cómo analizo el rendimiento de los experimentos del sprint y cómo decido qué metodología o táctica escalar y cuál abandonar.

**Herramientas:**

¿Qué herramientas me recomiendas para un equipo de marketing ágil? Compara Notion, Asana, ClickUp, Monday y Linear para la gestión del backlog y sprints. ¿Cuál integra mejor con las herramientas de marketing (Google Analytics, HubSpot, Hootsuite)?

Dame una guía de implementación por fases para un equipo de cinco personas que actualmente no usa ninguna metodología ágil.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Implementación de metodologías ágiles en equipos de marketing',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Engineering management: liderazgo técnico sin micromanagement',
                'description'       => 'El rol del engineering manager: 1:1s, performance reviews, contratación, roadmap técnico y cómo mantener la velocidad del equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Engineering Manager senior con experiencia en empresas de tecnología de entre veinte y doscientas personas, habiendo liderado equipos distribuidos y gestionado la transición de individual contributor a manager. Acabo de asumir o voy a asumir el rol de Engineering Manager y necesito una guía práctica completa.

**La transición de IC a Manager:**

Explica el cambio de mentalidad más difícil: pasar de ser el que resuelve problemas técnicos directamente a ser el que multiplica la capacidad del equipo. ¿Cuáles son los errores más comunes de los nuevos EMs (seguir haciendo demasiado código, micromanagement técnico, evitar las conversaciones difíciles)? ¿Cómo sé que estoy haciendo bien mi trabajo si ya no mido mi productividad en pull requests cerrados?

**1:1s que generan impacto:**

Dame la estructura de un 1:1 semanal de treinta minutos que no sea un status update disfrazado. ¿Qué preguntas abro para entender la situación real de cada miembro del equipo, sus bloqueadores y su crecimiento profesional? Dame diez preguntas de 1:1 que revelan lo que el ingeniero nunca diría en una reunión de equipo. ¿Cómo tomo notas de los 1:1s y hago seguimiento de los compromisos?

**Performance management:**

Explica cómo establezco expectativas claras de desempeño para cada nivel de la carrera de ingeniería (Junior, Mid, Senior, Staff). ¿Cómo doy feedback continuo sin esperar a la revisión semestral? Diseña el proceso de performance review: la self-assessment, el feedback de peers, mi evaluación y la conversación de calibración con la persona. ¿Cómo gestiono el caso de bajo rendimiento sin que se convierta en un PIP sorpresa?

**Contratación técnica:**

Dame el proceso de contratación que he visto funcionar: la definición del perfil (qué nivel real necesito, no el aspiracional), el sourcing de candidatos más allá de LinkedIn, el panel de entrevistas (quién entrevista qué), el coding challenge que no mata el tiempo del candidato y los criterios de decisión que evitan el bias de «me recuerda a mí».

**Roadmap técnico y deuda técnica:**

¿Cómo gestiono la tensión entre velocidad de entrega de features y mantenimiento de la calidad técnica? Dame el proceso para crear un roadmap técnico que sea legible para negocio: cómo cuantifico el impacto de la deuda técnica en la velocidad, cómo negocio el tiempo de refactoring con el Product Manager y cómo comunico las decisiones técnicas hacia arriba.

**Mantener la velocidad del equipo:**

Explica las palancas que tiene un EM para mejorar la velocidad: reducir el tamaño de las pull requests, mejorar los procesos de code review (SLA de revisión, criterios claros), eliminar reuniones innecesarias con un formato de meeting-as-a-last-resort, y los rituales de equipo (planning, demo, retro) que aportan valor sin consumir tiempo productivo.

**Gestión distribuida y remota:**

¿Cómo adapto estos procesos para un equipo en múltiples zonas horarias? Dame las prácticas específicas de documentación asíncrona (RFCs, ADRs), la cadencia de sincronización mínima viable y cómo mantengo la cohesión del equipo sin las conversaciones informales de oficina.

Dame un plan de los primeros noventa días como nuevo Engineering Manager con las acciones concretas semana a semana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Guía práctica para nuevos Engineering Managers',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design sprints y workshops de diseño',
                'description'       => 'Facilita sprints de 5 días o workshops de diseño que resuelven problemas concretos y alinean a stakeholders en tiempo récord.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un facilitador de design sprints y workshops de diseño con experiencia en decenas de sesiones con equipos de producto, startup y grandes corporaciones. Necesito aprender a facilitar design sprints y workshops de diseño de forma que resuelvan problemas reales y generen alineación entre stakeholders.

**¿Cuándo usar un design sprint vs un workshop?**

Empieza ayudándome a decidir qué formato usar según el problema: el design sprint de cinco días (o la versión comprimida de uno o dos días) es ideal para validar una solución nueva con usuarios reales antes de construirla. Un workshop de diseño es mejor para generar ideas, alinear visión de producto o desbloquear una decisión estratégica. ¿Cuándo no tiene sentido ninguno de los dos?

**Preparación del sprint de cinco días:**

Detalla todo lo que ocurre antes del lunes: la definición del reto («How Might We»), la selección del equipo ideal (quién debe estar en la sala y quién NO, con el Decider como rol clave), la preparación del espacio y materiales, y cómo alinear a los stakeholders ejecutivos para que apoyen el proceso sin interferir durante la semana.

**Estructura día a día del design sprint:**

Dame el guión detallado de cada día: Lunes (mapear el problema, definir el objetivo a largo plazo y el sprint question, crear el mapa del usuario, entrevistas a expertos internos, elegir el target). Martes (lightning demos, generar ideas individualmente con el método de cuatro pasos, crazy 8s). Miércoles (votación silenciosa, heatmap de ideas, rumble o superflash, storyboard de la solución). Jueves (construir el prototipo de alta fidelidad en Figma o con herramientas sin código). Viernes (cinco entrevistas de usuario con protocolo de Think Aloud y síntesis de patrones en tiempo real).

**Versión comprimida (sprint de un día):**

Cuando no tenemos cinco días, ¿cómo adapto el sprint? Dame el formato de un día que mantiene los elementos esenciales: definición del problema en la mañana, ideación y prototipado rápido en papel en la tarde, y al menos dos o tres sesiones de feedback con usuarios o proxies internos.

**Facilitación de workshops de diseño:**

Detalla las dinámicas de workshop más útiles para equipos de producto: el Crazy 8s para ideación, el Affinity mapping para síntesis de investigación, el User Journey mapping colaborativo, el Rose-Thorn-Bud para retrospectivas de producto, y el Impact-Effort matrix para priorización grupal. Para cada dinámica, dame el tiempo recomendado, las instrucciones exactas que doy al grupo y los errores de facilitación más comunes.

**Manejo de stakeholders difíciles:**

¿Cómo gestiono al HiPPO (Highest Paid Person's Opinion) que domina la conversación, al participante silencioso que luego cuestiona las decisiones, o al escéptico que cree que todo esto es «tiempo perdido»? Dame técnicas concretas de facilitación para cada tipo.

**Documentación y seguimiento:**

¿Cómo documento los resultados de un design sprint para que tengan impacto más allá de la semana? Dame el formato del informe de sprint (hallazgos de usuarios, decisiones tomadas, próximos pasos) y cómo lo conecto con el backlog de producto.

Incluye plantillas de facilitación, timings exactos y los materiales que preparo con antelación para cada sesión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Facilitación de design sprints y workshops de producto',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'CRM como sistema de gestión del proceso comercial',
                'description'       => 'Usa el CRM no solo para guardar contactos sino para gestionar el proceso comercial completo: reporting, coaching de ventas y forecasting.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director Comercial con experiencia implementando y optimizando CRMs en equipos de ventas B2B. Muchos equipos de ventas tienen un CRM lleno de datos incompletos y lo usan solo como directorio de contactos. Quiero transformar el CRM en el sistema nervioso central de toda la operación comercial.

**El CRM como sistema de gestión, no directorio:**

Empieza explicando la diferencia conceptual entre un CRM que se usa reactivamente (guardar contactos, registrar llamadas) versus uno que gestiona activamente el proceso (predice el cierre, identifica riegos, guía el coaching). ¿Qué tiene que pasar para que el CRM sea adoptado realmente por el equipo de ventas y no se convierta en un sistema de control que nadie quiere usar?

**Diseño del proceso de ventas en el CRM:**

Ayúdame a mapear mi proceso comercial en el CRM: ¿cuántas etapas debe tener el pipeline? Dame los criterios de avance de etapa (no «el vendedor cree que está listo» sino «el prospecto ha hecho X acción concreta»). ¿Cómo defino los campos obligatorios por etapa para que el dato de salida del CRM sea fiable para el forecasting?

**Higiene del CRM:**

Diseña el proceso de mantenimiento del CRM: ¿con qué frecuencia actualiza el vendedor cada oportunidad? ¿Qué alertas automáticas configuro para detectar oportunidades sin actividad, deals que llevan más de X días en la misma etapa o contactos sin next action? ¿Cómo hago la revisión semanal del pipeline sin que sea un interrogatorio sino una sesión de desbloqueadores?

**Forecasting basado en CRM:**

Explica los modelos de forecasting que puedo construir sobre los datos del CRM: el forecast ponderado por probabilidad de cierre (con el riesgo de que las probabilidades sean subjetivas), el forecast basado en etapas históricas de conversión (más fiable si los datos son limpios), y el forecast de actividad (proyección basada en la cantidad de demos programadas en las próximas dos semanas). ¿Cuál recomiendas para un equipo de diez vendedores con ciclo de venta de tres meses?

**Reporting para el Director Comercial:**

Dame el dashboard que necesita el Director Comercial en el CRM: pipeline por etapa y por vendedor (con variación semana a semana), forecast del mes y del trimestre, velocidad de pipeline (tiempo promedio por etapa), tasa de conversión por etapa y por fuente de lead, y el leaderboard de actividad (llamadas, emails, demos, propuestas).

**Coaching de ventas basado en datos:**

Explica cómo uso el CRM para hacer coaching específico a cada vendedor: si veo que un vendedor tiene muchos deals en propuesta pero baja conversión a cierre, el problema es el pricing o el manejo de objeciones; si tiene pocas actividades al inicio del funnel, el problema es la prospección. Dame el marco de coaching conversation basado en datos del CRM.

**Automatizaciones clave:**

¿Qué automatizaciones implemento en el CRM para reducir el tiempo administrativo del vendedor? Secuencias de email de follow-up, registro automático de actividad desde el email y el calendario, scoring de leads, alertas de renovación y la sincronización con herramientas de propuestas y firma electrónica.

Dame una guía de implementación por fases para un equipo que actualmente usa el CRM de forma mínima, con el plan de los primeros noventa días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Optimización del CRM como herramienta de gestión comercial y forecasting',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Roadmap y priorización de producto',
                'description'       => 'RICE, ICE, opportunity scoring y cómo comunicar las decisiones de prioridad a los stakeholders de forma que entiendan y apoyen.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager senior con experiencia en empresas de software B2B y B2C que han gestionado roadmaps con más de cien items en el backlog y stakeholders con prioridades contrapuestas. Necesito un sistema de priorización robusto y un proceso para comunicar el roadmap que genere confianza y alineación.

**El problema de la priorización:**

Empieza describiendo los errores más comunes de priorización en product management: el HiPPO que impone sus prioridades, el equipo de ventas que siempre tiene el «deal único» que bloquea su cuota si no construimos una feature concreta, el backlog que crece sin fin y nunca se limpia, y el roadmap de compromisos que convierte el equipo de producto en una fábrica de features sin estrategia.

**Framework RICE:**

Explica el framework RICE (Reach, Impact, Confidence, Effort) con detalle: cómo estimo el Reach (usuarios afectados en el período), cómo defino las categorías de Impact (desde «mínimo» a «masivo»), por qué la Confidence es la variable más honesta y difícil, y cómo estimo el Effort en semanas-persona. Dame ejemplos concretos de cómo aplicar RICE a tres tipos de items: una feature de producto, una mejora técnica y una iniciativa de experiencia de usuario.

**ICE Score y cuándo usarlo:**

¿Cuándo es mejor ICE (Impact, Confidence, Ease) que RICE? Explica las situaciones donde la simplicidad de ICE es una ventaja: equipos pequeños, priorización rápida de experimentos de growth, y cuando no tenemos datos de reach fiables. Dame el proceso de calibración del equipo para que todos usemos ICE con la misma escala.

**Opportunity Scoring:**

Detalla el método de Opportunity Scoring de Tony Ulwick: pregunto a los usuarios qué tan importante es una tarea y qué tan satisfechos están con las soluciones actuales, y busco las tareas importantes y mal resueltas. ¿Cómo diseño la encuesta, cuántos usuarios necesito y cómo ploteo los resultados en la matriz de oportunidades?

**Jobs-to-be-Done como base de priorización:**

Explica cómo el framework JTBD mejora la priorización: en lugar de priorizar features, priorizo los trabajos del usuario que más impacto tienen en la retención y el crecimiento. ¿Cómo mapeo los jobs actuales de mi producto y cómo identifico cuáles están infra-servidos?

**El roadmap como comunicación estratégica:**

Diseña el roadmap que comunico a distintas audiencias: el roadmap ejecutivo (ahora-siguiente-después, sin fechas, orientado a outcomes), el roadmap de equipo (con más detalle de features y dependencias técnicas), y el roadmap de ventas (qué pueden prometer a prospects y cuándo). ¿Cómo gestiono las peticiones de fechas concretas cuando trabajo con horizonte de incertidumbre?

**Gestión de stakeholders:**

Dame las técnicas para manejar las presiones de priorización: el proceso de discovery conjunto con ventas para entender el contexto del «deal único», la comunicación de los trade-offs (si priorizamos esto, no podemos hacer aquello), y el proceso de revisión periódica del roadmap que mantiene a todos informados sin requerir aprobación para cada decisión.

Dame plantillas de los documentos clave: el PRD de una página, el scoring de priorización en spreadsheet y el roadmap ejecutivo en formato visual de texto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Sistema de priorización de producto y comunicación del roadmap',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de proyectos de RRHH: HRIS, cambio cultural y formación',
                'description'       => 'Aplica metodologías de gestión de proyectos a las iniciativas de RRHH: implantación de un HRIS, cambio cultural o programa de formación global.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Personas con experiencia liderando proyectos de transformación de RRHH en empresas de entre doscientas y dos mil empleados. Las iniciativas de RRHH a menudo fracasan porque se gestionan sin rigor de proyecto. Necesito aplicar metodologías de gestión de proyectos a las principales iniciativas del departamento.

**Por qué los proyectos de RRHH fallan:**

Empieza analizando las razones principales por las que los proyectos de RRHH tienen tasas de fracaso elevadas: la falta de un sponsor ejecutivo real, los plazos irreales (el HRIS «en tres meses»), la resistencia al cambio sin un plan de gestión del mismo, la falta de recursos dedicados (el equipo de RRHH que gestiona el proyecto mientras hace su trabajo habitual) y la ausencia de métricas de éxito claras.

**Implantación de un HRIS:**

Diseña el plan de proyecto para implementar un HRIS (Workday, BambooHR, SuccessFactors, Factorial): las fases (discovery y definición de requisitos, selección de proveedor, configuración y migración de datos, formación y change management, go-live y soporte post-implementación). ¿Qué hitos defino, quién está en el equipo de proyecto (con nombres de roles reales: HR Business Partner, IT, Finanzas, representantes de cada departamento) y qué riesgos gestiono?

**Gestión de proyectos de cambio cultural:**

Un proyecto de cambio cultural es diferente a un proyecto de software: el entregable no es un sistema sino una forma diferente de trabajar. Explica la metodología Kotter de ocho pasos adaptada a la realidad de una empresa mediana. ¿Cómo mido el avance de un proyecto de cambio cultural? ¿Qué hitos son objetivables cuando el objetivo es «mejorar la cultura de feedback»?

**Programa de formación global:**

Diseña la gestión del proyecto de lanzamiento de un programa de formación para toda la empresa: el análisis de necesidades formativas (learning needs assessment), el diseño del curriculum, el modelo de delivery (presencial, e-learning, blended), la selección de LMS o plataforma de contenido, el plan de comunicación para los managers y la medición del impacto de la formación (Kirkpatrick: reacción, aprendizaje, comportamiento, resultados).

**KPIs del departamento de RRHH:**

¿Cómo mido el rendimiento del departamento de RRHH de forma objetiva? Dame los indicadores clave: tiempo de cobertura de vacantes, coste por contratación, tasa de retención a 12 meses, eNPS, tasa de cobertura del plan de formación, ROI de la formación y el ratio de HR sobre headcount total. ¿Cómo presento estos KPIs al Comité de Dirección?

**Gestión de stakeholders en proyectos de RRHH:**

¿Cómo gestiono la resistencia del middle management, que ve los proyectos de RRHH como carga administrativa? Dame las estrategias para involucrar a los managers como champions del cambio, no como destinatarios pasivos. ¿Cómo construyo el business case para el CEO de un proyecto de RRHH que no tiene ROI inmediato obvio?

**Herramientas de gestión de proyectos para RRHH:**

¿Qué herramientas uso para gestionar proyectos de RRHH? Dame la configuración de un proyecto en Asana o Monday para el lanzamiento de un HRIS, con las tareas tipo, las dependencias y los milestones. ¿Cómo gestiono la documentación del proyecto (acta de constitución, RACI, registro de riesgos, actas de reunión)?

Dame una plantilla de acta de constitución de proyecto para una iniciativa de RRHH y un RACI de ejemplo para la implantación de un HRIS.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Gestión de proyectos de transformación en el departamento de RRHH',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de proyectos financieros complejos',
                'description'       => 'Cierre anual, auditorías, implantación de ERP y los controles de calidad en proyectos complejos del departamento de finanzas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director Financiero con experiencia gestionando los proyectos más complejos del departamento: el cierre anual de cuentas consolidadas, auditorías externas bajo presión de tiempo, la implantación de un ERP y los procesos de due diligence en operaciones corporativas. Necesito elevar el nivel de gestión de proyectos en el área de finanzas.

**Por qué la gestión de proyectos es crítica en finanzas:**

Empieza explicando por qué el departamento de finanzas es uno de los que más se beneficia de la gestión formal de proyectos: los plazos regulatorios son fijos (el cierre anual, la presentación de cuentas, la declaración fiscal), el coste del error es muy alto (sanciones, retraso de auditoría, impacto reputacional) y los recursos son escasos y compartidos entre operaciones y proyectos.

**El proyecto de cierre anual:**

Diseña el plan de proyecto del cierre anual de cuentas: la matriz de actividades con propietario y fecha (ajustes de inventario, conciliaciones bancarias, periodificaciones, provisiones, eliminaciones de consolidación, elaboración del balance y la cuenta de resultados, preparación de la memoria). ¿Cómo gestiono las dependencias entre departamentos (operaciones que entrega el dato de inventario, ventas que cierra las facturas pendientes)? ¿Qué controles de calidad ejecuto antes de cerrar?

**Gestión de la auditoría externa:**

Explica cómo gestionar la relación con la auditora como un proyecto: la preparación del PBC (Provided by Client list) con los documentos que necesitarán, la designación de interlocutores por área, el proceso de respuesta a queries de auditoría con plazo de respuesta de 48 horas, y cómo gestiono los Puntos de Auditoría (hallazgos) con un plan de acción formal.

**Implantación de un ERP:**

El proyecto de ERP es el más complejo y el que más falla en finanzas. Diseña el plan de proyecto: las fases (blueprint, configuración, migración de datos maestros y saldos, testing en paralelo, formación, cut-over y go-live, soporte post-go-live), los riesgos principales (migración de datos incorrecta, resistencia del usuario, bugs en módulos fiscales) y los controles de calidad que evitan un go-live catastrófico. ¿Qué no debes comprometer cuando el proyecto se retrasa?

**Due diligence financiero:**

¿Cómo gestiono un proceso de due diligence (como comprador o como target) como proyecto? Detalla la estructura de un data room, el plan de trabajo del equipo de due diligence financiero (análisis de calidad del earnings, ajustes normalizados, análisis de working capital y deuda), los plazos típicos y cómo gestiono la confidencialidad dentro del equipo.

**Controles de calidad financieros:**

Diseña el sistema de controles de calidad del departamento de finanzas: los controles preventivos (doble aprobación de pagos, segregación de funciones en el sistema ERP), los controles detectivos (conciliaciones automáticas, varianzas presupuestarias que requieren explicación), y el proceso de auditoría interna trimestral de los procesos clave.

**Reporting de proyecto al Consejo:**

¿Cómo presento el avance de proyectos financieros complejos al Consejo de Administración? Dame el formato del dashboard ejecutivo de proyecto (semáforo por área, milestones completados vs planificados, riesgos abiertos con plan de mitigación, recursos consumidos vs presupuesto) en formato de texto que pueda adaptar a una presentación de PowerPoint.

Dame una checklist de cierre anual tipo y un plan de proyecto de ERP con hitos y responsables en formato tabla.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Gestión de proyectos complejos en el departamento de finanzas',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de proyectos en el departamento legal',
                'description'       => 'Matter management, priorización de demandas, deadlines regulatorios y los KPIs del departamento legal moderno.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o Director Legal con experiencia modernizando departamentos legales internos de empresas medianas y grandes, aplicando metodologías de gestión de proyectos al trabajo jurídico. El departamento legal es uno de los últimos en adoptar herramientas de gestión, pero la presión de hacer más con menos lo está cambiando.

**El departamento legal como proveedor de servicios internos:**

Empieza explicando el cambio de paradigma: el departamento legal no es solo el guardián del riesgo sino un proveedor de servicios a las unidades de negocio, con plazos, presupuestos y KPIs como cualquier otro departamento. ¿Qué resistencia cultural hay dentro del equipo legal a esta visión y cómo la gestiono?

**Matter management:**

Diseña el sistema de gestión de matters (asuntos legales): qué información registro en cada matter (cliente interno, tipo de asunto, fase, coste externo acumulado, fecha de apertura y cierre, riesgo económico estimado), cómo categorizo los matters por tipo (contratos, litigios, regulatorio, M&A, laboral, propiedad intelectual) y qué herramientas uso (desde una hoja de Excel avanzada hasta un software de matter management como Clio, Legal Tracker o TeamConnect).

**Priorización de la carga de trabajo legal:**

¿Cómo priorizo cuando todo es urgente? Dame un framework de priorización para el departamento legal: el impacto económico potencial del asunto, el plazo procesal o regulatorio no negociable, la probabilidad de que el asunto escale si no actúo ahora, y el coste de externalizar versus resolver internamente. ¿Cómo gestiono la priorización cuando hay conflicto entre las demandas de distintas unidades de negocio?

**Deadlines regulatorios:**

Diseña el calendario regulatorio del departamento legal: los plazos anuales fijos (cuentas anuales, renovación de licencias, declaraciones a autoridades de competencia, auditorías de compliance), los plazos procesales que se gestionan por expediente y el sistema de alerta temprana para los plazos que se acercan. ¿Cómo integro este calendario con el sistema de gestión de matters?

**Gestión de abogados externos:**

Explica la gestión de los despachos externos como proveedores: el proceso de selección (RFP para servicios recurrentes), la negociación de condiciones (tarifas horarias, fee caps, success fees), el presupuesto por matter, el proceso de aprobación de facturas y el reporting trimestral de gasto externo por despacho y por tipo de asunto.

**KPIs del departamento legal:**

Dame los indicadores que mido en el informe mensual del General Counsel: coste interno por tipo de asunto (horas de abogados internos), coste externo total y por despacho, número de matters activos por área, tiempo de respuesta a solicitudes internas, tasa de éxito en litigios, número de contratos revisados y tiempo medio de revisión, y la ratio de matters gestionados internamente versus externalizados.

**Digitalización y automatización legal:**

¿Por dónde empiezo a digitalizar el departamento legal? Dame el roadmap de transformación digital del equipo legal: primero el matter management y el calendario de plazos, luego la automatización de contratos estándar (NDA, acuerdos de confidencialidad, contratos laborales tipo), después el repositorio digital de contratos con búsqueda y alertas de vencimiento, y finalmente el legal spend management integrado.

Dame un dashboard de KPIs legales en formato de tabla y una plantilla de informe mensual del General Counsel al CEO.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Modernización y gestión de proyectos en departamentos legales',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Project management en implementaciones de clientes (CS)',
                'description'       => 'Gestiona el onboarding de clientes como un proyecto: plan de implementación, hitos, escalados y la transición al equipo de CS.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Implementation Manager o Customer Success Manager senior con experiencia en empresas de software B2B donde el onboarding es complejo y determinante para la retención del cliente. Necesito estructurar el proceso de implementación de nuevos clientes como un proyecto formal que garantice el tiempo to value y reduzca el churn temprano.

**Por qué el onboarding es el momento más crítico:**

Empieza explicando la correlación entre la calidad del onboarding y la retención a doce meses: los clientes que no completan la implementación o no alcanzan el «aha moment» en las primeras semanas tienen una tasa de churn desproporcionadamente alta. ¿Qué porcentaje del churn en SaaS B2B es atribuible a un mal onboarding y cómo lo mido?

**El plan de implementación como documento de proyecto:**

Diseña el plan de implementación que comparto con el cliente en el kickoff: las fases del proyecto (discovery, configuración, migración de datos, formación, go-live, estabilización), los hitos con fecha y criterios de completitud objetivos, las responsabilidades de cada parte (qué hace mi equipo, qué hace el cliente, qué hacemos juntos), y las dependencias críticas (si el cliente no entrega los datos en la fecha X, el go-live se retrasa Y días).

**El kickoff meeting:**

Dame el guión del kickoff meeting de implementación: cómo presento el equipo de implementación, cómo reviso el plan de proyecto, cómo aclaro expectativas y criterios de éxito, y cómo establezco la cadencia de comunicación. ¿Qué preguntas de discovery hago en el kickoff para personalizar la implementación a las necesidades específicas de este cliente?

**Gestión de hitos y riesgos:**

Explica cómo gestiono el avance de la implementación: la reunión de status semanal con el sponsor del cliente (qué cubro, cómo comunico el semáforo de estado), cómo gestiono los retrasos causados por el cliente sin deteriorar la relación, y el proceso de escalado cuando la implementación está en riesgo (primero al manager del cliente, luego al sponsor ejecutivo si no avanza).

**Migración de datos:**

La migración de datos es el momento de más riesgo en cualquier implementación. Diseña el proceso: el análisis del estado de los datos del cliente (mapping, calidad, transformaciones necesarias), el plan de migración por fases (primero los datos maestros, luego las transacciones históricas), la validación conjunta cliente-implementador antes del go-live y el plan de rollback si algo sale mal.

**Formación y adopción:**

¿Cómo diseño el plan de formación que garantiza la adopción real del producto? No basta con enseñar cómo funciona el software; necesito que los usuarios cambien sus flujos de trabajo. Dame el modelo de formación en capas: formación de administradores (configuración y personalización), formación de usuarios power (funcionalidades avanzadas), y formación de usuarios finales (lo esencial para el día a día con ejemplos de su rol específico).

**Transición al equipo de CS:**

Diseña el proceso de handoff de implementación a Customer Success: el documento de entrega (configuración del cliente, casos de uso implementados, integraciones activas, tickets abiertos, relaciones clave en el cliente), la reunión de transición interna y la reunión de presentación al cliente del nuevo CSM. ¿Cuándo hago el handoff y qué criterios debe cumplir la implementación para considerarla completada?

Dame un template de plan de implementación en formato de tabla con hitos, responsables y criterios de éxito, y el template de kickoff meeting.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Gestión de implementaciones de clientes B2B como proyectos formales',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión de proyectos freelance: scope, plazos y pagos',
                'description'       => 'Entrega proyectos complejos en solitario gestionando el scope creep, las expectativas del cliente, los hitos de pago y las herramientas adecuadas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior con más de cinco años de experiencia entregando proyectos complejos en solitario para clientes de distintos sectores. El mayor reto del freelance no es el trabajo técnico sino gestionar el proyecto: las expectativas, el scope, los plazos y los pagos. Necesito un sistema de gestión de proyectos adaptado a la realidad del trabajo en solitario.

**La propuesta como documento de gestión:**

Empieza explicando por qué una propuesta bien escrita es la mejor herramienta de gestión de proyectos: define el scope (lo que incluye y, igual de importante, lo que no incluye), establece los hitos de pago, fija las responsabilidades del cliente y crea las bases para gestionar las desviaciones. Dame los elementos que no pueden faltar en una propuesta freelance: descripción del alcance, entregables específicos, lo que está fuera de scope, plazos por fase, condiciones de pago, proceso de revisiones y cláusula de cambios de scope.

**Control del scope creep:**

El scope creep es el mayor destructor del margen del freelance. Explica el sistema para gestionarlo: cómo identifico un cambio de scope en el momento en que el cliente lo pide (la señal de que algo es un cambio: «¿está esto incluido en lo que acordamos?»), el proceso de Change Request (documentar el cambio, estimar el coste adicional, obtener aprobación escrita), y el tono de la conversación que mantiene la relación sin ceder el margen.

**Gestión de las revisiones:**

¿Cuántas rondas de revisiones incluyo en el precio y cómo lo comunico? Diseña el proceso de revisión: el formato del feedback que pido al cliente (consolidado, escrito, con referencias específicas), el plazo que me doy para implementar revisiones y el límite a partir del cual aplico el Change Request. ¿Cómo gestiono al cliente que pide «solo un pequeño cambio más» de forma indefinida?

**Hitos de pago que protegen el flujo de caja:**

Dame la estructura de pagos que uso en distintos tipos de proyecto: proyectos cortos (uno o dos meses): 50% al inicio, 50% a la entrega. Proyectos medianos (tres a seis meses): 40% al inicio, 30% al primer hito, 30% a la entrega. Proyectos largos: pagos mensuales vinculados a hitos de avance. ¿Cómo gestiono al cliente que se retrasa en el pago sin deteriorar la relación? ¿Qué cláusula de intereses o penalización incluyo en el contrato?

**Gestión del tiempo en solitario:**

Explica cómo gestiono varios proyectos simultáneos sin que ninguno se quede desatendido: el sistema de timeboxing semanal (asigno horas específicas a cada proyecto), la regla de la tarea más importante del día para cada proyecto, y el sistema de alerta temprana cuando un proyecto va a retrasar su entrega (comunicación proactiva al cliente antes de que el plazo se incumpla).

**Herramientas para el freelance:**

¿Qué stack de herramientas uso para gestionar proyectos freelance sin gastar en suites enterprise? Dame las opciones por categoría: gestión de tareas y proyectos (Notion, Trello, Asana), facturación y contratos (Holded, Bonsai, AND.CO), comunicación con clientes (email + loom para actualizaciones de vídeo cortas), y time tracking (Toggl, Harvest) para proyectos por horas o para saber cuánto tiempo me cuesta cada proyecto de precio cerrado.

**Gestión de expectativas y comunicación:**

Dame el protocolo de comunicación que uso con mis clientes: la actualización semanal de estado (qué completé esta semana, qué hago la próxima semana, si hay algo que necesito del cliente), el informe de cierre de fase antes de pasar al siguiente hito, y la reunión de retrospectiva al final del proyecto que genera el testimonial y siembra la próxima contratación.

Dame plantillas de Change Request, hoja de seguimiento de revisiones y el email de comunicación de retraso que mantiene la confianza del cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de gestión de proyectos para freelances que trabajan en solitario',
                'vote_score'        => 31,
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
