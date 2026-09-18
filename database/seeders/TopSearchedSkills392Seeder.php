<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills392Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de proyectos de campaña con marcos híbridos ágiles y waterfall',
                'description'      => 'Aplica metodologías híbridas para gestionar campañas de marketing que requieren tanto planificación estructurada como capacidad de adaptación rápida. El marketing moderno combina la previsibilidad del waterfall con la flexibilidad del agile. Este prompt te ayuda a diseñar el marco adecuado para tu equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de gestión de proyectos con certificación PMP y certificación Scrum Master que ha trabajado específicamente con equipos de marketing y agencias creativas. Necesito diseñar un marco de gestión de proyectos híbrido que combine la planificación estructurada del waterfall con la flexibilidad del agile para gestionar campañas de marketing complejas.

Contexto del equipo:
Nuestro equipo de marketing tiene [NÚMERO] personas y gestiona simultáneamente [NÚMERO] proyectos activos. Los proyectos incluyen: [LISTA DE TIPOS: campañas digitales, eventos, lanzamientos de producto, contenido editorial, etc.]. Actualmente usamos [HERRAMIENTA ACTUAL: Asana, Trello, Monday, Notion, etc.] y la principal queja del equipo es [DESCRIBE EL PROBLEMA PRINCIPAL: falta de visibilidad, retrasos, cambios constantes de prioridad, etc.].

Bloque 1 — Diagnóstico de qué metodología aplica a cada tipo de proyecto:
Explica cuándo usar waterfall puro, cuándo usar agile puro y cuándo aplicar un enfoque híbrido para proyectos de marketing. Define los criterios de decisión: nivel de certeza en los requisitos al inicio, frecuencia esperada de cambios, duración del proyecto, número de partes interesadas externas, dependencias con otros equipos. Proporciona una matriz de decisión con ejemplos concretos de proyectos de marketing en cada cuadrante.

Bloque 2 — Diseño del marco híbrido para marketing:
Diseña un marco híbrido específico para equipos de marketing que tenga: una fase de planificación estructurada tipo waterfall (definición del brief, aprobación de presupuesto, cronograma maestro, hitos inamovibles) y una fase de ejecución ágil con sprints de dos semanas donde se producen y ajustan los activos creativos. Define las ceremonias necesarias: qué reuniones eliminar, cuáles mantener y cuáles añadir. Especifica la cadencia de sprints, las reuniones diarias, las revisiones de sprint y la retrospectiva. Indica cómo gestionar los cambios de cliente o dirección dentro de este marco sin destruir la planificación.

Bloque 3 — Roles y responsabilidades en el equipo híbrido:
Define los roles necesarios para este marco: quién actúa como Product Owner (dueño del backlog de campaña), quién como Scrum Master (facilitador del proceso), y cómo encajan los roles tradicionales de marketing (Director Creativo, Responsable de Contenido, Paid Media Manager, Account Manager). Explica cómo gestionar la tensión entre la autonomía del equipo ágil y la rendición de cuentas del cliente o dirección.

Bloque 4 — Gestión del backlog de campaña:
Describe cómo construir y mantener un backlog de campaña. Explica la diferencia entre el backlog de producto del agile clásico y el backlog de campaña para marketing: cómo escribir historias de usuario para activos de marketing (en formato "Como [público objetivo], quiero [resultado], para [beneficio]"), cómo estimar el esfuerzo con puntos de historia adaptados a trabajo creativo, cómo priorizar con criterios de impacto esperado y urgencia, y cómo gestionar las dependencias entre activos (el anuncio depende del copy, el copy depende del brief aprobado).

Bloque 5 — Herramientas y plantillas:
Recomienda las herramientas más adecuadas para implementar este marco híbrido en un equipo de marketing de entre 5 y 20 personas. Para cada herramienta (Notion, Asana, Monday, ClickUp, Jira) evalúa su adecuación para: backlog visual, calendario de sprints, vista gantt para la fase waterfall, integración con herramientas creativas y acceso de clientes externos. Proporciona la estructura de tablero recomendada y una plantilla de brief de campaña en formato híbrido.

Entregables:
- Matriz de decisión metodológica para proyectos de marketing
- Diseño completo del marco híbrido con fases y ceremonias
- Mapa de roles y responsabilidades
- Guía para construir y gestionar el backlog de campaña
- Comparativa de herramientas con recomendación final y estructura de tablero
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un marco de gestión de proyectos híbrido para equipos de marketing',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión de proyectos de desarrollo de software con marcos híbridos: cuando el agile puro no es suficiente',
                'description'      => 'Implementa un marco híbrido que combine la flexibilidad del desarrollo ágil con la previsibilidad que demandan los clientes corporativos y los proyectos de infraestructura. No todos los proyectos de software encajan en un sprint de dos semanas. Este prompt diseña el equilibrio adecuado para tu contexto.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software y consultor de procesos de desarrollo con experiencia en proyectos de entre 3 y 50 personas para clientes corporativos, startups en crecimiento y organismos públicos. Necesito diseñar un marco de gestión de proyectos de desarrollo de software que sea más estructurado que el agile puro pero más adaptable que el waterfall clásico.

Contexto del proyecto:
Estamos desarrollando [DESCRIBE EL PROYECTO: tipo de aplicación, tecnologías principales, tamaño del equipo, duración estimada, tipo de cliente]. Los principales desafíos son: [DESCRIBE: requisitos cambiantes, cliente que exige fechas fijas, equipo distribuido en zonas horarias, dependencias con sistemas legacy, auditorías regulatorias, etc.].

Sección 1 — Cuándo el agile puro falla en proyectos de software:
Describe los cinco escenarios más comunes en los que el scrum o kanban puro generan problemas en proyectos de software reales: contratos de precio fijo con alcance definido, proyectos con fuertes dependencias de infraestructura o terceros, equipos que trabajan con sistemas legacy que requieren análisis exhaustivo previo, proyectos en sectores regulados que exigen documentación formal, y proyectos con múltiples equipos que necesitan coordinación de arquitectura global antes de ejecutar. Para cada escenario, explica qué falla específicamente en el agile puro y qué aportaría el waterfall.

Sección 2 — El modelo híbrido de fase y sprint:
Diseña un marco de cuatro fases que combina waterfall y agile: Fase de Discovery y Arquitectura (waterfall, duración fija), Fase de Desarrollo por Sprints (agile, sprints de dos semanas), Fase de Estabilización (waterfall ligero, testing sistemático y corrección de bugs), y Fase de Cierre y Transferencia (waterfall, documentación y handover). Para cada fase, define: duración típica como porcentaje del proyecto total, entregables obligatorios, criterios de entrada y salida, roles activos, y cómo comunicar el progreso al cliente.

Sección 3 — Gestión de requisitos en el modelo híbrido:
Explica cómo gestionar el cambio de requisitos en un proyecto híbrido sin perder la previsibilidad prometida al cliente. Define el proceso de gestión de cambios: cómo distinguir entre un cambio de alcance (que requiere renegociación de tiempo y coste) y un refinamiento de requisitos (que se absorbe en el sprint), cómo documentar los requisitos iniciales con suficiente detalle para que sean estables pero sin sobrespecificar, y cómo usar el backlog para gestionar las peticiones de cambio durante la fase de sprints.

Sección 4 — Governance y reporting en proyectos híbridos:
Define la estructura de governance adecuada para un proyecto de software híbrido: comité de dirección con cadencia mensual, reunión de seguimiento técnico semanal, demo de sprint cada dos semanas y reporte ejecutivo de estado del proyecto. Para cada instancia de governance, indica: asistentes, agenda tipo, formato del reporte, semáforos de estado (verde/amarillo/rojo) y criterios de escalación. Proporciona una plantilla de reporte semanal de estado del proyecto que incluya: porcentaje de avance, riesgos activos, impedimentos y decisiones pendientes del cliente.

Sección 5 — Gestión de riesgos técnicos en proyectos híbridos:
Describe una metodología de gestión de riesgos adaptada a proyectos de software híbridos. Lista los diez riesgos técnicos más frecuentes en proyectos de desarrollo: deuda técnica acumulada, dependencias de API externas no documentadas, cambios de equipo a mitad del proyecto, scope creep no controlado, problemas de rendimiento detectados tarde, vulnerabilidades de seguridad, incompatibilidades con entornos del cliente, etc. Para cada riesgo, define: probabilidad típica, impacto, estrategia de mitigación y plan de contingencia.

Entregables:
- Diagnóstico de cuándo el agile puro falla con 5 escenarios detallados
- Diseño completo del modelo de 4 fases con criterios de entrada y salida
- Proceso de gestión de cambios de requisitos
- Estructura de governance con plantilla de reporte semanal
- Registro de riesgos con 10 riesgos técnicos y planes de mitigación
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar un marco híbrido para proyectos de software que combina agile y waterfall',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Gestión de proyectos de diseño con metodología híbrida: creatividad con entrega predecible',
                'description'      => 'Aplica un marco de gestión que proteja el proceso creativo mientras garantiza entregas predecibles y feedback estructurado. Los proyectos de diseño sufren especialmente por la falta de proceso formal. Este prompt diseña un sistema que los clientes entiendan y el equipo creativo pueda adoptar.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Operaciones de Diseño con experiencia en agencias creativas y equipos de diseño internos de empresas de producto. Necesito un marco de gestión de proyectos de diseño que estructure el proceso creativo sin asfixiarlo, que genere entregas predecibles y que eduque a los clientes y stakeholders sobre cómo colaborar eficientemente con un equipo de diseño.

Contexto del equipo:
Nuestro equipo de diseño tiene [NÚMERO] diseñadores y trabaja en proyectos de [TIPOS: branding, UX/UI, diseño editorial, motion, packaging, etc.]. El cliente típico es [PERFIL]. El principal problema actual es [DESCRIBE: feedback sin estructura, revisiones infinitas, plazos imposibles, cambios de dirección tardíos, etc.].

Parte 1 — El proceso de diseño como marco de proyecto:
Transforma el proceso de diseño estándar (Discovery, Concepto, Desarrollo, Producción, Entrega) en un marco de proyecto con hitos claros, entregables definidos y criterios de aprobación para cada fase. Para cada fase, especifica: duración típica según el tipo y tamaño del proyecto, entregables concretos que se entregan al cliente, formato de presentación recomendado (moodboard, wireframe, prototipo, arte final), y criterio de aprobación para avanzar a la siguiente fase. Explica cómo usar este marco para educar al cliente desde el inicio sobre cómo funciona el proceso.

Parte 2 — Gestión estructurada del feedback creativo:
Diseña un protocolo de feedback que reduzca las revisiones de "no me gusta" a feedback accionable y específico. Incluye: una guía de brief creativo con las preguntas que el cliente debe responder antes de empezar (objetivo del proyecto, audiencia, referentes visuales, restricciones, criterios de éxito), una plantilla de formulario de feedback por ronda con preguntas estructuradas para que el cliente no diga "hazlo más moderno" sino que especifique qué elemento, por qué razón y hacia qué dirección, y la política de número máximo de rondas de revisión incluidas en el presupuesto.

Parte 3 — Gestión de proyectos ágiles para diseño de producto:
Para equipos que trabajan en diseño de producto digital (UX/UI para apps o plataformas web), explica cómo adaptar el scrum para diseño: qué significa un sprint de diseño, cómo se relaciona el diseño con el sprint de desarrollo (normalmente un sprint por delante), cómo gestionar el backlog de diseño, cómo hacer design reviews efectivas al final de cada sprint y cómo medir la velocidad de un equipo de diseño (en puntos de historia de diseño, no solo en pantallas entregadas). Aborda el debate entre "diseño como servicio" vs. "diseño como parte del equipo de producto".

Parte 4 — Contratos y acuerdos de proyecto que protegen al equipo de diseño:
Describe los elementos contractuales que deben estar presentes en cualquier acuerdo de proyecto de diseño para evitar los problemas más comunes: definición clara del alcance y qué no está incluido, política de cambios de scope y cómo se facturan, número de rondas de revisión incluidas, propiedad intelectual y cesión de derechos, tiempos de respuesta esperados del cliente y consecuencias si el cliente retrasa el feedback, y cláusula de aprobación tácita si el cliente no responde en X días. Proporciona el lenguaje sugerido para cada cláusula.

Parte 5 — Herramientas y flujo de trabajo para gestión de proyectos de diseño:
Recomienda el stack de herramientas para gestionar proyectos de diseño en 2025: herramienta de diseño (Figma, Adobe XD), herramienta de gestión de proyectos (ClickUp, Linear, Notion), herramienta de presentación de entregables al cliente (Figma Prototype, Loom, Zeroheight), herramienta de aprobación y anotaciones (Frame.io, Pastel, Figma Comments). Para cada categoría, explica qué criterios usar para elegir la herramienta según el tipo de proyecto y el perfil del cliente.

Entregables:
- Marco de 5 fases de proyecto de diseño con hitos y criterios de aprobación
- Plantilla de brief creativo y formulario de feedback estructurado
- Guía de scrum adaptado para diseño de producto digital
- Cláusulas contractuales recomendadas con lenguaje sugerido
- Stack de herramientas recomendado con criterios de selección
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un marco de gestión de proyectos creativos que combine proceso y predictibilidad',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión del pipeline de ventas con metodología de proyectos: convertir oportunidades en cierres predecibles',
                'description'      => 'Aplica principios de gestión de proyectos a la gestión del pipeline de ventas para hacer predecible el proceso de cierre y reducir las oportunidades perdidas por falta de seguimiento. Tratar cada oportunidad de venta como un proyecto estructurado mejora la tasa de conversión.',
                'prompt_content'   => <<<'EOT'
Eres un Director Comercial con experiencia en ventas B2B de ticket medio y alto que ha implementado metodologías de gestión de proyectos en el proceso de ventas para hacerlo más predecible y escalable. Necesito diseñar un sistema que trate cada oportunidad de venta como un proyecto gestionado con hitos, entregables, plazos y responsabilidades claras.

Contexto comercial:
Nuestro equipo de ventas tiene [NÚMERO] comerciales y gestiona un pipeline de [NÚMERO] oportunidades activas con un valor medio de [RANGO]. El ciclo de venta típico dura [DURACIÓN]. Los principales problemas son: [DESCRIBE: oportunidades que se enfrían sin razón aparente, seguimiento inconsistente, forecast inexacto, pérdida de oportunidades por falta de urgencia interna].

Módulo 1 — El pipeline como secuencia de proyectos:
Redefine las etapas del pipeline de ventas como un proyecto con fases, hitos y criterios de avance. Para cada etapa del pipeline (prospección, calificación, descubrimiento, propuesta, negociación, cierre, onboarding), define: el criterio de entrada (qué debe ser verdad para que la oportunidad entre en esta etapa), el entregable que el comercial debe producir en esta etapa (email de resumen de reunión, propuesta formal, contrato), el criterio de avance a la siguiente etapa (qué señal del cliente valida el avance), y el tiempo máximo en esta etapa antes de considerar que la oportunidad está estancada.

Módulo 2 — El plan de acción mutuo (MAP):
Explica qué es un Plan de Acción Mutuo (Mutual Action Plan) en ventas B2B y por qué es la herramienta más efectiva para acelerar el cierre en ventas complejas. Diseña una plantilla de MAP que incluya: objetivo compartido del proyecto de compra, hitos con fechas de ambas partes (cliente y proveedor), personas responsables de cada acción en el lado del cliente y del vendedor, criterios de éxito del proyecto para el cliente, y mecanismo de revisión semanal del MAP. Explica cómo introducir el MAP en la conversación de ventas sin que parezca una herramienta del vendedor sino una herramienta de colaboración.

Módulo 3 — Forecasting con enfoque de gestión de proyectos:
Describe cómo usar los datos de gestión de proyecto de cada oportunidad para hacer un forecast de ventas más preciso. Explica la diferencia entre el forecast basado en intuición del comercial ("creo que cerramos") y el forecast basado en señales de proyecto (el cliente ha completado el 80% de los hitos del MAP, el decisor ha aprobado el presupuesto internamente, la fecha de decisión es en 14 días). Diseña un modelo de scoring de oportunidades basado en señales de avance de proyecto que genere un porcentaje de probabilidad de cierre más objetivo.

Módulo 4 — Gestión de stalls y oportunidades estancadas:
Define un protocolo para gestionar oportunidades que llevan más de X días en la misma etapa del pipeline sin avanzar. Diseña un flujo de rescate de oportunidades estancadas: cómo diagnosticar si el stall es por falta de interés real del cliente, por obstáculo interno del cliente (presupuesto bloqueado, decisor inaccesible), por falta de urgencia, o por una objeción no resuelta. Para cada causa, diseña la táctica de reactivación específica: email de ruptura de stall, propuesta alternativa, oferta de cierre de período, o decisión de cerrar la oportunidad y marcarla como perdida con razón documentada.

Módulo 5 — Herramientas de CRM para gestión de proyectos de venta:
Evalúa cómo los CRMs más populares (Salesforce, HubSpot, Pipedrive, Monday CRM) soportan la gestión de oportunidades como proyectos con hitos y tareas. Para cada CRM, indica cómo configurar: etapas de pipeline con criterios de avance, tareas y recordatorios automáticos por etapa, campos personalizados para tracking del MAP, y reportes de forecast basados en señales de proyecto. Recomienda extensiones o integraciones que potencien la gestión de proyectos dentro del CRM.

Entregables:
- Definición de cada etapa del pipeline con criterios de entrada, entregable y avance
- Plantilla completa de Plan de Acción Mutuo (MAP)
- Modelo de scoring de oportunidades basado en señales de proyecto
- Protocolo de gestión de oportunidades estancadas con tácticas por causa
- Guía de configuración de CRM para gestión de proyectos de venta
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Aplicar gestión de proyectos al pipeline de ventas para hacer predecibles los cierres',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Marcos híbridos de gestión de producto: cuándo el agile puro no encaja',
                'description'      => 'Diseña el marco de gestión de producto adecuado para proyectos que no encajan en el scrum estándar: plataformas con múltiples equipos, productos en sectores regulados, o roadmaps de largo plazo con hitos estratégicos. La gestión de producto híbrida combina visión estratégica con ejecución ágil.',
                'prompt_content'   => <<<'EOT'
Eres un VP de Product Management con experiencia liderando organizaciones de producto de entre 20 y 200 personas en empresas de tecnología en crecimiento. Necesito diseñar un marco de gestión de producto que sea más sofisticado que el scrum de un solo equipo pero que mantenga la agilidad necesaria para competir en mercados dinámicos.

Contexto de la organización de producto:
Nuestra empresa tiene [NÚMERO] equipos de producto y desarrollo trabajando en [NÚMERO] líneas de producto o módulos. El producto es [DESCRIBE BREVEMENTE]. Los principales desafíos de gestión son: [DESCRIBE: falta de alineación entre equipos, roadmap que cambia cada mes, dependencias entre equipos que bloquean los sprints, stakeholders que no entienden por qué no se entrega más rápido, dificultad para planificar a más de dos semanas].

Parte 1 — Marcos de escalado del agile para organizaciones de producto:
Explica los principales marcos de escalado del agile y en qué contexto cada uno encaja: SAFe (Scaled Agile Framework) para organizaciones grandes con necesidad de predictibilidad y gobernanza, LeSS (Large-Scale Scrum) para organizaciones que quieren maximizar la agilidad con múltiples equipos en un solo producto, Spotify Model para organizaciones que priorizan la autonomía de tribu y squad, y Shape Up para equipos de producto que quieren ciclos de seis semanas con apuestas claras. Para cada marco, indica: tamaño de organización adecuado, nivel de ceremony, facilidad de adopción y principales críticas.

Parte 2 — El modelo de planificación en tres horizontes:
Explica cómo aplicar el modelo de planificación en tres horizontes de McKinsey a la gestión de producto: Horizonte 1 (ejecución trimestral, sprints y OKRs), Horizonte 2 (innovación semestral, nuevas funcionalidades que abren nuevos mercados), y Horizonte 3 (exploración anual y a dos años, apuestas estratégicas disruptivas). Diseña un proceso de planificación que genere coherencia entre los tres horizontes: cómo alinear el roadmap de producto con la estrategia de la empresa, cómo comunicar cada horizonte a los diferentes stakeholders y cómo asignar recursos entre horizontes (regla del 70/20/10).

Parte 3 — Gestión de dependencias entre equipos:
Describe las causas más comunes de bloqueo por dependencias en organizaciones con múltiples equipos de producto y las estrategias para reducirlas. Incluye: cómo detectar dependencias en la fase de planificación de PI (Program Increment), cómo usar el tablero de dependencias entre equipos, cuándo es preferible tener un equipo de plataforma compartida vs. duplicar capacidad en cada equipo, y cómo gestionar la priorización cuando dos equipos necesitan el mismo recurso compartido. Proporciona un formato de reunión de sincronización de equipos que resuelva dependencias en menos de 30 minutos.

Parte 4 — OKRs como puente entre estrategia y sprints:
Explica cómo usar los OKRs (Objetivos y Resultados Clave) para conectar la visión estratégica del producto con la ejecución diaria de los equipos de desarrollo. Diseña el proceso de definición de OKRs de producto: cómo traducir los objetivos de empresa en objetivos de producto, cómo definir KRs medibles que el equipo controle directamente, cómo hacer el check-in semanal o quincenal de OKRs en el contexto del sprint, y cómo gestionar el conflicto cuando los OKRs y las demandas operativas del sprint compiten por el tiempo del equipo.

Parte 5 — Governance de producto para organizaciones en crecimiento:
Define la estructura de governance de producto para una organización que ha superado el estadio de startup y necesita más proceso sin convertirse en una burocracia lenta. Incluye: el Product Council o comité de producto como instancia de priorización estratégica, el proceso de aprobación de nuevas iniciativas (discovery, business case, go/no-go), la cadencia de revisión de roadmap (mensual, trimestral, anual), y el proceso de medición de outcomes vs. outputs para evaluar el éxito de cada iniciativa de producto.

Entregables:
- Comparativa de marcos de escalado del agile con criterios de selección
- Proceso de planificación en tres horizontes con asignación de recursos
- Metodología de gestión de dependencias entre equipos con formato de reunión
- Sistema de OKRs de producto con proceso de check-in semanal
- Estructura de governance de producto para organizaciones en crecimiento
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar marcos de gestión de producto híbridos para organizaciones con múltiples equipos',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de proyectos de RRHH con metodología híbrida: implementar cambios organizacionales con éxito',
                'description'      => 'Aplica marcos híbridos de gestión de proyectos a las iniciativas más complejas de RRHH: implementación de un nuevo sistema de evaluación, cambio de política de compensación, proyecto de cultura organizacional. Los proyectos de RRHH requieren rigor metodológico y gestión del cambio humano.',
                'prompt_content'   => <<<'EOT'
Eres un Director de RRHH con formación en gestión de proyectos y experiencia liderando transformaciones organizacionales complejas en empresas de más de 200 empleados. Necesito un marco para gestionar proyectos de RRHH de alto impacto combinando la rigidez estructural necesaria para la gestión del cambio con la flexibilidad para adaptar el enfoque según la respuesta de la organización.

Contexto de la organización:
Nuestra empresa tiene [NÚMERO] empleados en [NÚMERO] oficinas o en modalidad remota. El departamento de RRHH tiene [NÚMERO] personas. Los proyectos de RRHH que más nos cuestan gestionar son: [DESCRIBE: implementación de nuevo HRIS, proyecto de employer branding, rediseño del modelo de compensación, programa de desarrollo de liderazgo, gestión de una reestructuración].

Bloque 1 — La gestión del cambio como proyecto:
Explica cómo integrar el modelo de gestión del cambio ADKAR (Conciencia, Deseo, Conocimiento, Habilidad, Refuerzo) con un marco de gestión de proyectos estándar. Para cada fase del proyecto de RRHH (análisis, diseño, piloto, despliegue, consolidación), indica qué palanca de ADKAR es prioritaria y qué actividades de gestión del cambio deben realizarse. Muestra cómo medir el avance en cada palanca de ADKAR para identificar dónde la organización está resistiendo el cambio y qué acciones correctoras tomar.

Bloque 2 — Caso de uso: implementación de un nuevo sistema de evaluación del desempeño:
Diseña el plan de proyecto completo para implementar un nuevo proceso de evaluación del desempeño en una empresa de 500 empleados en un período de seis meses. El plan debe incluir: análisis y diseño del nuevo modelo (mes 1-2), comunicación y formación de managers (mes 3), piloto con un departamento (mes 4), ajustes y despliegue general (mes 5-6). Para cada fase, define: entregables, responsables, riesgos y plan de comunicación interna. Incluye los hitos de decisión críticos y el criterio de go/no-go para avanzar.

Bloque 3 — Gestión de stakeholders en proyectos de RRHH:
Define un mapa de stakeholders para un proyecto de RRHH de alto impacto. Identifica los grupos de stakeholders típicos: dirección ejecutiva (patrocina y valida), managers intermedios (implementan y comunican al equipo), empleados (destinatarios del cambio), sindicatos o representantes de trabajadores si aplica, y el equipo de RRHH (diseña y gestiona). Para cada grupo, define su nivel de influencia, su posición inicial típica ante el cambio (resistencia, neutral, apoyo), y el plan de engagement específico para moverles hacia una posición de apoyo activo.

Bloque 4 — Métricas de proyecto para iniciativas de RRHH:
Define las métricas que permiten saber si un proyecto de RRHH está avanzando según lo previsto. Para proyectos de transformación cultural o de procesos de personas, las métricas de output tradicionales (tareas completadas, hitos alcanzados) no son suficientes. Diseña un sistema de métricas de tres niveles: métricas de actividad (número de sesiones de formación impartidas, porcentaje de empleados que completaron el módulo), métricas de adopción (porcentaje de managers usando el nuevo proceso, número de evaluaciones completadas en plazo), y métricas de impacto (cambio en puntuación de engagement, reducción del tiempo dedicado al proceso de evaluación, mejora en la percepción del proceso).

Bloque 5 — Lecciones aprendidas y gestión del conocimiento en proyectos de RRHH:
Diseña un proceso de captura de lecciones aprendidas al finalizar cada proyecto de RRHH. Incluye: el formato de la retrospectiva post-proyecto, cómo documentar qué funcionó, qué falló y qué haríamos diferente, cómo construir un repositorio de plantillas y mejores prácticas que acelere los próximos proyectos, y cómo compartir el conocimiento con equipos de RRHH de otras divisiones o filiales. Proporciona una plantilla de informe de cierre de proyecto de RRHH.

Entregables:
- Integración del modelo ADKAR con el ciclo de vida del proyecto de RRHH
- Plan de proyecto completo de 6 meses para nueva evaluación del desempeño
- Mapa de stakeholders con plan de engagement por grupo
- Sistema de métricas de tres niveles para proyectos de RRHH
- Proceso de captura de lecciones aprendidas y plantilla de cierre
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar proyectos de transformación de RRHH combinando metodología de proyectos y gestión del cambio',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de proyectos financieros y de transformación contable con marcos híbridos',
                'description'      => 'Implementa marcos de gestión de proyectos para iniciativas financieras complejas: cierre contable acelerado, implementación de ERP financiero, proyectos de consolidación y reporting. Los proyectos financieros tienen requisitos únicos de control, auditoría y precisión que exigen enfoques específicos.',
                'prompt_content'   => <<<'EOT'
Eres un Controller o Director Financiero con experiencia en gestión de proyectos de transformación financiera en empresas medianas y grandes. Necesito un marco para gestionar proyectos que afectan al área financiera: implementación de sistemas ERP, proyectos de cierre acelerado, automatización de procesos contables, y proyectos de consolidación de grupos empresariales.

Contexto financiero:
Nuestra empresa tiene [DESCRIBE: facturación, número de entidades jurídicas si aplica, sistema contable actual, sector]. Los proyectos financieros más urgentes son [LISTA: ej. implementación de SAP S/4HANA, aceleración del cierre mensual de 15 a 5 días, automatización de la conciliación bancaria, preparación para auditoría de cuentas anuales].

Sección 1 — Por qué los proyectos financieros necesitan marcos híbridos:
Explica las características únicas de los proyectos financieros que hacen que el agile puro sea inadecuado: la necesidad de documentación exhaustiva para auditorías y reguladores, los plazos inamovibles impuestos por el calendario fiscal o regulatorio, la baja tolerancia al error en datos financieros (un error en un proceso contable puede propagarse a estados financieros consolidados), y la necesidad de mantener la operación contable corriente mientras se transforma el proceso. Describe cómo el marco híbrido equilibra estas restricciones.

Sección 2 — Gestión de proyectos de implementación de ERP financiero:
Diseña el plan de proyecto para implementar un módulo financiero de ERP (SAP, Oracle, Microsoft Dynamics, Sage) en una empresa mediana. El plan debe cubrir: fase de análisis (mapeo de procesos as-is y to-be, definición de requisitos), fase de diseño y configuración (parametrización del sistema), fase de migración de datos (auditoría de datos maestros, ETL, validación), fase de formación y UAT (User Acceptance Testing), y fase de go-live y estabilización. Para cada fase, define la duración típica, los roles necesarios (CFO, Controller, Responsable de IT, consultores del ERP), los riesgos más frecuentes y los criterios de aceptación.

Sección 3 — Proyecto de aceleración del cierre contable:
Diseña la metodología para reducir el número de días de cierre contable mensual. Incluye: análisis de los cuellos de botella actuales en el proceso de cierre (qué tarea es siempre el camino crítico), técnicas de cierre paralelo y soft close, automatización de conciliaciones y provisiones rutinarias, definición del calendario de cierre con responsables y horarios, y KPIs de seguimiento del proceso de cierre (número de asientos manuales, porcentaje de cierres completados en plazo). Proporciona un plan de proyecto de 90 días para implementar estas mejoras.

Sección 4 — Control y auditoría en proyectos financieros:
Define los controles internos que deben estar presentes en cualquier proyecto que modifique procesos o sistemas financieros. Incluye: control de acceso a sistemas de prueba y producción durante el proyecto, proceso de validación cruzada de datos migrados (suma de verificación, comparativa de saldos), trazabilidad de cambios en la configuración del sistema (quién cambió qué y cuándo), y documentación de procedimientos actualizada como entregable obligatorio del proyecto. Explica cómo presentar estos controles a los auditores externos y cómo incluirlos en el scope de trabajo de la auditoría.

Sección 5 — Gestión del cambio en proyectos financieros:
Describe la resistencia típica del equipo financiero ante proyectos de transformación: miedo a que el nuevo sistema no funcione en el cierre de fin de año, preocupación por la pérdida de información histórica, desconfianza hacia los nuevos procesos automatizados. Diseña una estrategia de gestión del cambio específica para equipos contables y financieros: cómo involucrar al equipo desde el diseño del nuevo proceso, cómo demostrar la fiabilidad del nuevo sistema antes del go-live, y cómo gestionar el período de marcha paralela (funcionamiento simultáneo del sistema antiguo y nuevo).

Entregables:
- Análisis de por qué los proyectos financieros necesitan marcos híbridos
- Plan de proyecto de implementación de ERP financiero con todas las fases
- Metodología de aceleración de cierre contable con plan de 90 días
- Checklist de controles de auditoría para proyectos de transformación financiera
- Estrategia de gestión del cambio para equipos financieros
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar proyectos de transformación financiera con marcos híbridos y controles de auditoría',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de asuntos legales complejos como proyectos: planificación, seguimiento y control',
                'description'      => 'Aplica principios de gestión de proyectos a la gestión de asuntos legales complejos: litigios de larga duración, procesos de M&A, reestructuraciones societarias, o proyectos regulatorios. Gestionar un asunto legal como un proyecto mejora la predictibilidad de costes y la satisfacción del cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un socio de un despacho de abogados especializado en litigación compleja y operaciones corporativas que ha adoptado técnicas de gestión de proyectos para mejorar la eficiencia y la previsibilidad de los asuntos de su despacho. Necesito diseñar un marco para gestionar asuntos legales complejos con los mismos estándares de planificación, seguimiento y control que se aplican a proyectos de ingeniería o tecnología.

Contexto del despacho:
Nuestro despacho se especializa en [ÁREAS: M&A, litigación mercantil, regulatorio, inmobiliario, etc.]. Los asuntos típicos duran entre [DURACIÓN] y generan honorarios de entre [RANGO]. El principal problema de gestión es: [DESCRIBE: desviación de presupuesto, dificultad para dar al cliente una visión de estado, múltiples abogados trabajando en el mismo asunto sin coordinación, pérdida de conocimiento cuando un abogado sale del equipo].

Parte 1 — El asunto legal como proyecto:
Transforma la gestión de un asunto legal en un proyecto formal con fases, hitos, responsables y presupuesto. Define las fases genéricas aplicables a diferentes tipos de asuntos: análisis inicial y estrategia, investigación y recopilación de pruebas o documentación, elaboración de posición o argumentación, negociación o procedimiento formal, resolución y cierre. Para cada fase, define los entregables, los roles del equipo del despacho y el criterio de avance a la siguiente fase. Adapta este modelo para un litigio mercantil y para una operación de M&A.

Parte 2 — Presupuesto y control de costes del asunto:
Diseña una metodología para presupuestar asuntos legales complejos y controlar el desvío de costes durante su ejecución. Incluye: cómo elaborar un presupuesto inicial desagregado por fase y tipo de tarea (investigación, redacción, negociación, comparecencias), cómo hacer el seguimiento semanal de horas imputadas vs. presupuestadas, cómo comunicar al cliente una desviación de presupuesto antes de que sea un problema, y cómo gestionar los eventos imprevistos (una vista oral adicional, un perito experto no previsto) dentro del presupuesto global. Proporciona un modelo de informe mensual de estado económico del asunto.

Parte 3 — Coordinación de equipos legales multidisciplinares:
Para asuntos que involucran a varios abogados del despacho (socio, asociado senior, asociado junior, paralegal), define el sistema de coordinación que evite la duplicación de trabajo, garantice la coherencia de la estrategia y facilite la incorporación rápida de un nuevo miembro al equipo. Incluye: la estructura del expediente digital (nomenclatura de documentos, árbol de carpetas, ubicación de versiones), la reunión de equipo semanal y su agenda, el sistema de registro de decisiones estratégicas y su rationale, y cómo documentar el estado del asunto para que cualquier miembro del despacho pueda dar una actualización al cliente sin haber participado directamente.

Parte 4 — Comunicación de proyecto al cliente:
Diseña un protocolo de comunicación con el cliente que trate el asunto legal como un proyecto conjunto. Incluye: el informe de estado mensual del asunto (hitos completados, próximos pasos, riesgos identificados, estado económico vs. presupuesto), la reunión de revisión trimestral de estrategia, y la comunicación de hitos críticos (presentación de demanda, celebración de vista, recepción de sentencia) con el contexto necesario para que el cliente entienda el impacto sin necesitar conocimiento jurídico técnico.

Parte 5 — Legaltech y herramientas para gestión de asuntos como proyectos:
Evalúa las herramientas de software más adecuadas para implementar la gestión de asuntos como proyectos en un despacho: software de gestión de asuntos (Clio, MyCase, Filevine, Legalíta), herramientas de gestión de proyectos adaptadas (Notion con plantilla legal, ClickUp con vistas de proyecto), sistemas de control de tiempo y facturación (Toggl + facturación, Harvest), y herramientas de colaboración documental (iManage, NetDocuments). Para cada categoría, indica el criterio de selección y la integración necesaria entre herramientas.

Entregables:
- Marco de proyecto para asuntos legales con fases y criterios de avance adaptado para litigio y M&A
- Metodología de presupuesto y control de costes con modelo de informe mensual
- Sistema de coordinación de equipos legales con estructura de expediente y reunión semanal
- Protocolo de comunicación con el cliente con plantilla de informe de estado
- Evaluación de herramientas legaltech para gestión de asuntos como proyectos
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Aplicar gestión de proyectos a asuntos legales complejos para mejorar la previsibilidad y el control',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de implementaciones de clientes como proyectos: acelerar el time-to-value con metodología híbrida',
                'description'      => 'Diseña un marco de implementación de clientes que combine rigor metodológico y adaptación a cada cliente para reducir el tiempo hasta el primer valor. Una implementación bien gestionada como proyecto reduce el churn temprano y sienta las bases de una relación de largo plazo.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Customer Success especializado en el diseño de metodologías de implementación de clientes para empresas SaaS B2B. Necesito diseñar un marco de implementación que trate cada nuevo cliente como un proyecto formal con fases, hitos, responsables y criterios de éxito, reduciendo el tiempo de activación y aumentando la tasa de clientes que llegan al primer valor en el tiempo previsto.

Contexto del producto:
Nuestro producto es [DESCRIBE TU PRODUCTO: categoría, complejidad técnica, nivel de configuración requerido]. El tiempo de implementación actual es de [DURACIÓN]. El porcentaje de clientes que completan la implementación en el tiempo previsto es de [X%]. El churn en los primeros 90 días es de [X%].

Módulo 1 — Fases del proyecto de implementación:
Diseña las fases estándar de un proyecto de implementación de cliente para un producto SaaS B2B. Define al menos cinco fases: Kickoff (alineación de expectativas, presentación del plan, confirmación de stakeholders), Configuración técnica (integración de datos, personalización del entorno), Formación (administradores, usuarios finales), Piloto (primera prueba en producción con un subconjunto del equipo del cliente), y Go-live (despliegue completo y cierre del proyecto de implementación). Para cada fase, indica la duración típica, los entregables, los responsables de ambas partes (Implementation Manager del proveedor y Champion del cliente), y el criterio de aceptación.

Módulo 2 — El plan de implementación mutuo:
Diseña una plantilla de plan de implementación mutuo que el Implementation Manager entrega al cliente en la reunión de kickoff. El plan debe incluir: el objetivo de business value que el cliente quiere lograr con el producto, el timeline de fases con fechas específicas, las tareas de ambas partes para cada semana (el cliente debe proveer datos, accesos, tiempo de su equipo; el proveedor debe configurar, formar, resolver dudas), los hitos de decisión clave y quién debe estar presente, y el criterio de éxito medible de la implementación (primer usuario activo, primer caso de uso completado en producción, primer informe generado). Explica cómo vender este plan al cliente como un compromiso bilateral, no como una lista de tareas del proveedor.

Módulo 3 — Gestión de implementaciones que se retrasan:
Define el protocolo para gestionar implementaciones que no avanzan según el plan. Identifica las causas más frecuentes de retraso: el Champion del cliente no tiene tiempo suficiente, los datos del cliente están más sucios de lo previsto, el equipo de IT del cliente tarda en proporcionar accesos, el proyecto pierde prioridad interna tras un cambio de dirección. Para cada causa, diseña la táctica de reactivación: escalación al ejecutivo patrocinador, propuesta de plan de recuperación simplificado, oferta de sesión intensiva para desbloquear. Define también el criterio para pausar formalmente un proyecto de implementación y qué comunicación enviar al cliente.

Módulo 4 — Métricas del programa de implementación:
Define el conjunto de KPIs para medir la salud y eficiencia del programa de implementaciones: tiempo medio de implementación (desde kickoff hasta go-live), porcentaje de implementaciones completadas en el tiempo estimado, tiempo hasta el primer hito de valor (primer usuario activo, primer workflow completado), Net Promoter Score específico del proceso de implementación, y tasa de churn en los 90 días siguientes al go-live (un churn post-implementación alto indica que algo falló en el proceso). Explica cómo usar estas métricas para identificar qué fase de la implementación es el mayor cuello de botella.

Módulo 5 — Escalado del programa de implementación:
Describe cómo escalar un programa de implementaciones cuando el volumen de nuevos clientes crece más rápido que el equipo de Implementation Managers. Evalúa tres modelos de escalado: implementación guiada por tecnología (onboarding in-app, videos de formación, checklists automáticas que reducen la necesidad de contacto humano), modelo de implementación por partners certificados, y modelo de implementación por niveles (implementación premium con IM dedicado para clientes enterprise, implementación self-guided para clientes de menor tamaño con soporte asíncrono). Para cada modelo, indica cuándo aplicarlo y cómo mantener la calidad de la experiencia del cliente.

Entregables:
- Marco de 5 fases de implementación con criterios de aceptación por fase
- Plantilla completa de plan de implementación mutuo
- Protocolo de gestión de implementaciones retrasadas con tácticas por causa
- Dashboard de KPIs del programa de implementaciones
- Estrategia de escalado del programa con tres modelos y criterios de aplicación
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un marco de implementación de clientes que reduzca el time-to-value y el churn temprano',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de proyectos de clientes para freelancers: controla el caos y protege tu tiempo',
                'description'      => 'Implementa un sistema de gestión de proyectos adaptado a la realidad del freelancer que trabaja con múltiples clientes simultáneamente. Sin un sistema, el trabajo de cliente siempre se expande para ocupar todo el tiempo disponible. Este prompt diseña el marco y las herramientas para recuperar el control.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de productividad y gestión de negocios para profesionales independientes que han escalado su práctica freelance a más de tres clientes simultáneos. Necesito diseñar un sistema de gestión de proyectos que me permita gestionar entre cuatro y ocho proyectos de clientes simultáneos sin perder la calidad ni el equilibrio personal.

Contexto de mi práctica freelance:
Me dedico a [DESCRIBE TU SERVICIO]. Actualmente tengo [NÚMERO] clientes activos y cada proyecto dura aproximadamente [DURACIÓN]. El principal problema que tengo es: [DESCRIBE: scope creep sin control, dificultad para priorizar entre clientes, feedback que llega de golpe y rompe mi flujo de trabajo, tiempo de proyecto que se extiende más allá del presupuesto acordado, dificultad para saber en qué estado está cada proyecto sin abrir el email].

Parte 1 — El sistema de gestión de un solo vistazo:
Diseña un sistema de panel de control personal que permita ver el estado de todos los proyectos activos en menos de un minuto. Define las variables clave a trackear por proyecto: nombre del cliente, tipo de proyecto, fase actual, siguiente acción y fecha límite, último contacto con el cliente, fecha de próxima entrega, horas consumidas vs. estimadas, y estado de la facturación. Recomienda la herramienta más simple para mantener este panel (Notion, Airtable, Trello, hoja de cálculo) según el número de proyectos y el tipo de trabajo freelance.

Parte 2 — El brief y la propuesta como base del proyecto:
Explica por qué el brief del proyecto es el documento más importante de cualquier trabajo freelance y cómo un brief mal redactado genera el 80% de los problemas de scope creep. Diseña una plantilla de brief detallado que el cliente debe completar antes de firmar el contrato. El brief debe cubrir: objetivo del proyecto en una sola frase, resultado esperado y criterios de éxito medibles, restricciones (presupuesto, fechas, estilos o tecnologías obligatorias), personas que pueden dar feedback y su rol en la aprobación, y lo que explícitamente no está incluido en el proyecto. Explica cómo presentar el brief al cliente como un servicio de valor, no como burocracia.

Parte 3 — Gestión del scope creep:
Define el scope creep en el contexto freelance, explica por qué ocurre (el cliente no entiende el valor del trabajo, el freelancer no quiere decepcionar al cliente, el contrato inicial fue vago) y diseña un protocolo para manejarlo sin dañar la relación con el cliente. El protocolo debe incluir: cómo identificar en tiempo real si una petición del cliente está dentro o fuera del scope acordado, el guión exacto de conversación o email para comunicar que algo es un cambio de scope y tiene un coste adicional, cómo presupuestar y aprobar rápidamente los trabajos adicionales, y cómo documentar todos los cambios de scope aprobados para protegerte si el cliente cuestiona la factura final.

Parte 4 — Gestión del tiempo en proyectos de múltiples clientes:
Diseña un sistema de gestión del tiempo para un freelancer con cuatro a ocho proyectos activos que trabaja solo y no puede permitirse tener un día completamente bloqueado por las urgencias de un cliente. Incluye: cómo agrupar el trabajo por tipo de tarea en lugar de por cliente (bloques de deep work, bloques de feedback y comunicación, bloques de administración), cómo establecer ventanas de comunicación con los clientes para evitar interrupciones constantes, cómo gestionar las "urgencias" del cliente con un protocolo que distingue entre urgencia real y urgencia percibida, y cómo asignar un número máximo de horas por semana a cada cliente para no desatender proyectos en paralelo.

Parte 5 — Cierre de proyecto y solicitud de referencia:
Diseña un proceso de cierre de proyecto que maximice la satisfacción del cliente, facilite la facturación final y genere referencias. El proceso de cierre debe incluir: entrega final con checklist de calidad, reunión de revisión de resultados vs. objetivos definidos en el brief, encuesta de satisfacción del cliente (qué funcionó, qué mejorar, puntuación del 1 al 10), solicitud natural de testimonial o caso de éxito, y plantación de la semilla para futuros proyectos (oferta de mantenimiento, propuesta de siguiente proyecto, invitación a la lista de email). Proporciona los emails y mensajes exactos para cada paso del proceso de cierre.

Entregables:
- Diseño del panel de control de proyectos con variables clave y herramienta recomendada
- Plantilla de brief de proyecto con instrucciones para presentarlo al cliente
- Protocolo anti-scope creep con guión de conversación y email
- Sistema de gestión del tiempo con bloques de trabajo y política de comunicación
- Proceso de cierre de proyecto con emails y mensajes para cada paso
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar un sistema de gestión de proyectos para freelancers con múltiples clientes activos',
                'vote_score'       => 35,
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
