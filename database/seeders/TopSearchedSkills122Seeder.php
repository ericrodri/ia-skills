<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills122Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de proyectos de marketing con herramientas colaborativas',
                'description'      => 'Usa Asana, Monday o Notion para coordinar campañas, contenido y lanzamientos sin que nada se pierda ni se retrase.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión de proyectos de marketing y en la implementación de herramientas de colaboración en equipos de marketing de entre 3 y 20 personas. Quiero que me ayudes a diseñar o mejorar el sistema de gestión de proyectos de mi equipo de marketing.

**Contexto que me pedirás:**
- Tamaño del equipo de marketing y roles existentes
- Tipos de proyectos más habituales (campañas, contenido, eventos, lanzamientos de producto)
- Herramienta actual o herramienta que estamos considerando (Asana, Monday.com, Notion, ClickUp, Trello)
- El mayor problema actual: proyectos que se retrasan, tareas que se pierden, falta de visibilidad, demasiadas reuniones

**Lo que quiero construir:**

1. **Estructura de proyectos para equipos de marketing**: Cómo organizar los proyectos en la herramienta según el tipo de trabajo: campañas de performance (con sprints cortos), proyectos de contenido (con calendarios editoriales), lanzamientos de producto (con fases y dependencias claras). La diferencia entre usar un board de kanban y usar un timeline/gantt para cada tipo.

2. **El calendario editorial como proyecto**: El contenido es el mayor cuello de botella en muchos equipos. Ayúdame a diseñar un flujo de trabajo de contenido en la herramienta que incluya: ideación, redacción, revisión, diseño, aprobación y publicación, con responsables y fechas en cada etapa.

3. **Visibilidad para el CMO y los stakeholders**: Cómo configurar vistas y reportes en la herramienta para que los managers puedan ver el estado de los proyectos sin tener que preguntar al equipo. Qué información debe aparecer en un weekly dashboard de marketing.

4. **Gestión de solicitudes de marketing**: El equipo de marketing recibe solicitudes de otros departamentos constantemente. Cómo gestionar esas solicitudes de forma ordenada: formulario de entrada, criterios de priorización, comunicación del plazo estimado y seguimiento.

5. **Plantillas de proyecto**: Qué plantillas de proyecto guardar para no empezar de cero cada vez. Dame las tres plantillas más útiles para un equipo de marketing: lanzamiento de producto, campaña de performance y producción de contenido mensual.

6. **Los errores más comunes al implementar estas herramientas**: Por qué el 60% de los equipos que adoptan Asana o Monday vuelven al Excel en tres meses. Cómo evitar la sobre-ingeniería del sistema, la falta de adopción del equipo y la acumulación de proyectos abandonados.

Quiero terminar con un sistema que el equipo realmente use.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un sistema de gestión de proyectos de marketing que el equipo adopte y que dé visibilidad real sobre campañas y entregas.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión técnica de proyectos de software complejos',
                'description'      => 'Estimación, planning, gestión de dependencias y comunicación de plazos cuando el proyecto es grande y el equipo es múltiple.',
                'prompt_content'   => <<<'PROMPT'
Eres un engineering manager o tech lead con experiencia en gestionar proyectos de software complejos que involucran a múltiples equipos, dependencias externas y plazos con presión comercial. Quiero tu ayuda para gestionar mejor un proyecto técnico grande que tenemos entre manos.

**Contexto que me pedirás:**
- Descripción del proyecto y su complejidad técnica
- Tamaño y composición del equipo (número de developers, seniority, especialidades)
- Plazo comprometido y con quién (cliente, CEO, inversores)
- Herramientas de gestión actuales (Jira, Linear, Shortcut, GitHub Projects)
- El mayor problema actual: estimaciones que fallan, dependencias que bloquean, falta de visibilidad, comunicación con stakeholders

**Lo que quiero trabajar:**

1. **Estimación realista de proyectos complejos**: Por qué las estimaciones de ingeniería siempre fallan y qué técnicas reducen el error. La diferencia entre estimaciones de puntos de historia, estimaciones en tiempo y estimaciones por rangos (mejor caso / caso esperado / peor caso). Cómo calibrar las estimaciones del equipo usando el historial de velocidad real.

2. **Descomposición del trabajo**: Cómo descomponer un proyecto grande en épicas, historias de usuario y tareas de forma que cada unidad sea entregable, testeable y no mayor de lo que un developer puede completar en 1-3 días. El criterio de "done" como herramienta de gestión, no solo de calidad.

3. **Gestión de dependencias**: Las dependencias son el principal asesino de los timelines. Cómo identificar las dependencias técnicas y entre equipos al principio del proyecto, visualizarlas (dependency graph) y gestionarlas antes de que bloqueen el trabajo.

4. **Comunicación de plazos a stakeholders no técnicos**: Cómo comunicar el estado del proyecto a personas que no entienden de software sin mentir, sin generar pánico y sin destruir la confianza. La diferencia entre un informe de estado honesto y uno que crea falsas expectativas.

5. **El plan B cuando el timeline se rompe**: Qué hacer cuando el proyecto va a retrasarse. El proceso de toma de decisiones: qué se puede recortar del scope, qué se puede paralelizar, cuándo es mejor comunicar el retraso con antelación y cómo hacerlo.

6. **Retrospectivas que mejoran las estimaciones futuras**: Cómo usar las retrospectivas del proyecto para mejorar la capacidad de estimación del equipo a largo plazo. Qué preguntas hacer y qué datos analizar.

Dame técnicas concretas y aplicables, no teoría de gestión de proyectos genérica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar proyectos de software complejos con estimaciones más precisas, dependencias controladas y comunicación efectiva con stakeholders.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño colaborativo en Figma: branching, handoff y revisiones',
                'description'      => 'Diseño en equipo con Figma: branching, handoff, revisiones y los flujos que permiten trabajar en el mismo producto sin caos.',
                'prompt_content'   => <<<'PROMPT'
Eres un design lead con experiencia gestionando equipos de diseño de producto que trabajan con Figma en proyectos complejos con múltiples diseñadores y ciclos de revisión continuos. Quiero que me ayudes a organizar mejor el trabajo de diseño colaborativo en nuestro equipo.

**Contexto que me pedirás:**
- Tamaño del equipo de diseño (número de diseñadores, UX researchers, si hay)
- Con quién se colabora fuera del equipo de diseño (PMs, developers, stakeholders)
- Problemas actuales más dolorosos (conflictos de versiones, handoff deficiente, revisiones interminables)
- Nivel de madurez con Figma del equipo

**Lo que quiero mejorar:**

1. **Organización del Figma workspace**: Cómo estructurar los proyectos y archivos en Figma para que todo el equipo encuentre lo que necesita sin preguntar. La diferencia entre el archivo "trabajo en curso", el archivo "design system" y el archivo "entregado a desarrollo". Convenciones de nomenclatura de páginas, frames y layers.

2. **Branching en Figma**: Cuándo usar branches (ramas) de Figma y cuándo no. El flujo de trabajo recomendado cuando dos diseñadores trabajan en partes del mismo producto simultáneamente. Cómo hacer el merge de un branch sin perder trabajo y qué hacer cuando hay conflictos.

3. **Flujo de revisiones de diseño**: El proceso de revisión de diseño que funciona: cuándo pedir feedback de PMs vs. de developers vs. de otros diseñadores. Cómo documentar el feedback recibido, cómo decidir qué incorporar y cómo comunicar por qué no se incorporó algo.

4. **Handoff a desarrollo sin fricciones**: Qué debe contener un entregable de diseño para que el developer no tenga que hacer diez preguntas. Cómo usar la sección de Dev Mode de Figma, cómo documentar los estados de los componentes, las animaciones y los comportamientos que no son obvios mirando el frame.

5. **Design system como proyecto colaborativo**: Cómo gestionar las contribuciones al design system de múltiples diseñadores. Quién tiene autoridad para aprobar cambios en los componentes base, cómo se comunican los cambios al equipo y cómo se documenta la intención detrás de cada decisión de diseño.

6. **Prototipos como herramienta de alineación**: Cuándo un prototipo en Figma vale más que mil reuniones. Qué nivel de fidelidad es suficiente para cada tipo de decisión y cómo usar los prototipos de Figma para recoger feedback de stakeholders que no leen wireframes.

Dame un sistema que reduzca el caos y el tiempo perdido en el trabajo colaborativo de diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Organizar el trabajo de diseño colaborativo en Figma para que varios diseñadores trabajen en el mismo producto con fluidez y sin conflictos.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de proyectos en ventas enterprise complejas',
                'description'      => 'Usa herramientas de gestión de proyectos para coordinar los deals enterprise que involucran a múltiples personas de ambos lados.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas enterprise B2B con experiencia en procesos de venta complejos que duran meses, involucran a múltiples stakeholders internos y del cliente, y requieren coordinación de recursos técnicos, legales y de dirección. Quiero que me ayudes a gestionar mejor mis deals enterprise usando metodologías y herramientas de gestión de proyectos.

**Contexto que me pedirás:**
- Tamaño típico del ticket y duración del ciclo de venta
- Número de stakeholders habitual en el lado del cliente y en el nuestro
- CRM actual y herramientas de gestión disponibles
- El mayor cuello de botella en el proceso actual

**Lo que quiero mejorar:**

1. **El deal como proyecto con fases y milestones**: Cómo estructurar cada deal enterprise como un proyecto con hitos claros, responsables definidos y fechas comprometidas. La diferencia entre las fases del CRM (que miden la probabilidad de cierre) y las fases del proyecto (que miden el avance real de la complejidad de la operación).

2. **Mapa de stakeholders del deal**: La gestión de múltiples contactos en el cliente es uno de los mayores retos del enterprise. Cómo construir y mantener actualizado un mapa de stakeholders que incluye: rol formal, rol informal en la decisión (economic buyer, champion, detractor, influencer), nivel de relación actual y la estrategia de avance con cada uno.

3. **Mutual Action Plan (MAP)**: El Mutual Action Plan es el proyecto compartido entre el vendedor y el cliente que lleva al cierre. Cómo crear un MAP que el cliente quiera firmar, qué incluye, cómo mantenerlo actualizado y cómo usarlo para crear urgencia sin presionar.

4. **Coordinación interna para deals complejos**: Cuándo y cómo involucrar a preventa, legal, finanzas, delivery y dirección sin que el deal se convierta en un proyecto interno de meses. Cómo ser el director de orquesta de un deal enterprise sin perder el control del proceso.

5. **Gestión del pipeline de deals enterprise**: Los deals enterprise tienen ciclos largos y muchos se pierden a mitad del proceso. Cómo gestionar el pipeline para que haya suficientes deals en cada etapa, cómo identificar los que están estancados y qué hacer con ellos.

6. **Post-mortem de deals perdidos**: Qué aprender de los deals que se pierden. El análisis de deal lost que va más allá de "el cliente eligió al competidor": qué señales ignoramos, qué no hicimos a tiempo y qué cambiaría en el próximo deal similar.

Dame un sistema de gestión de deals enterprise que me ayude a cerrar más y más rápido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aplicar metodologías de gestión de proyectos a los deals enterprise para coordinar mejor los stakeholders y acelerar el cierre.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Jira avanzado para product managers',
                'description'      => 'Epics, sprints, workflows personalizados y los reportes que hacen a Jira útil en lugar de una carga burocrática.',
                'prompt_content'   => <<<'PROMPT'
Eres un product manager con experiencia avanzada en Jira que ha visto cómo equipos de producto lo usan bien y cómo muchos lo convierten en una burocracia que ralentiza el desarrollo. Quiero que me ayudes a configurar y usar Jira de forma que realmente aporte valor al equipo de producto.

**Contexto que me pedirás:**
- Tamaño del equipo de producto y desarrollo
- Metodología actual (Scrum, Kanban, Shape Up, híbrida)
- Nivel de uso actual de Jira (básico, intermedio, avanzado)
- El mayor punto de dolor con Jira hoy

**Lo que quiero mejorar:**

1. **Estructura de epics, stories y tasks**: La jerarquía que funciona para equipos de producto modernos. Cuándo usar epics vs. iniciativas. Cómo escribir historias de usuario que los developers entienden y que los stakeholders también comprenden. El criterio de aceptación como contrato entre producto y desarrollo.

2. **Workflows personalizados**: El workflow de Jira por defecto no sirve para casi nadie. Ayúdame a diseñar un workflow de issues personalizado para nuestro proceso: qué estados necesitamos, qué transiciones son automáticas, qué reglas de validación evitan que las issues avancen sin la información necesaria.

3. **Sprint planning efectivo**: Cómo usar Jira para preparar y ejecutar el sprint planning de forma eficiente. La estimación en story points vs. tiempo. Cómo configurar la velocidad del equipo para tener sprints realistas. Cómo gestionar el trabajo que llega a mitad de sprint sin romper el compromiso del equipo.

4. **Roadmap en Jira**: Cómo usar la vista de roadmap de Jira para comunicar el plan de producto a los stakeholders de forma que entiendan el "cuándo" sin que se convierta en una promesa de entrega exacta. Cómo vincular el roadmap con las epics e iniciativas en el board.

5. **Los reportes de Jira que realmente importan**: Velocity chart, burndown chart, cumulative flow diagram: qué dice cada uno sobre la salud del equipo y cuándo usarlos. Cómo configurar dashboards en Jira para diferentes audiencias (equipo, management, stakeholders).

6. **Automaciones en Jira**: Las 5 automaciones que ahorran más tiempo a un equipo de producto: actualización automática de estados padre cuando los hijos se completan, notificaciones en Slack cuando un issue llega a review, creación automática de sub-tasks para tipos de issue recurrentes.

Dame un setup de Jira que el equipo quiera usar, no que tenga que usar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Configurar y usar Jira de forma avanzada para que el equipo de producto trabaje con más claridad y menos fricción burocrática.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de proyectos de transformación organizacional',
                'description'      => 'Lidera proyectos de cambio organizacional que involucran a muchos stakeholders y afectan a toda la empresa.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor especializado en gestión del cambio organizacional y en la implementación de proyectos de transformación en empresas medianas y grandes. Quiero tu ayuda para planificar y ejecutar un proyecto de transformación que afecta a múltiples departamentos y personas de la organización.

**Contexto que me pedirás:**
- Descripción del proyecto de transformación (implementación de sistema nuevo, reestructuración, cambio de modelo de trabajo, cambio cultural)
- Número de personas afectadas y departamentos involucrados
- Nivel de apoyo de la dirección y patrocinador del proyecto
- Experiencia previa de la organización con proyectos de transformación
- Plazo y recursos disponibles

**Lo que quiero trabajar:**

1. **Análisis de impacto del cambio**: Antes de planificar, necesito entender a quién afecta el cambio, cómo y cuánto. Ayúdame a construir una matriz de impacto del cambio: qué grupos de personas se ven afectados, qué cambia para ellos (procesos, herramientas, roles, relaciones) y cuál es el nivel de resistencia esperada.

2. **Plan de gestión de stakeholders**: Los proyectos de transformación fracasan por las personas, no por la tecnología. Cómo identificar y gestionar a los stakeholders clave: patrocinadores, champions internos, detractores con influencia, usuarios finales. Qué estrategia de comunicación y engagement necesita cada grupo.

3. **Comunicación del cambio**: El plan de comunicación que reduce la resistencia y construye confianza. Qué decir, cuándo, a través de qué canales y con qué tono según el momento del proyecto (antes del anuncio, durante la implementación, al cierre). Cómo gestionar los rumores y la incertidumbre.

4. **Formación y capacitación**: Cómo diseñar el plan de formación para que la gente adopte el cambio de verdad y no vuelva a los viejos hábitos. La diferencia entre formación puntual y acompañamiento continuo. Cómo medir la adopción real vs. la adopción aparente.

5. **Gestión de la resistencia**: Las formas más comunes de resistencia al cambio en organizaciones y cómo abordarlas. La diferencia entre resistencia legítima (que contiene información útil) y resistencia disfuncional (que hay que gestionar políticamente). Cuándo involucrar a los resistentes en el proyecto como estrategia de neutralización.

6. **Métricas de éxito de la transformación**: Cómo saber si el proyecto de transformación ha funcionado de verdad. Qué KPIs medir, en qué momentos y cómo separar el éxito de la implementación del éxito del cambio real en el comportamiento de las personas.

Dame un plan que tenga en cuenta la complejidad humana de los proyectos de transformación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Planificar y ejecutar proyectos de transformación organizacional gestionando la resistencia, la comunicación y la adopción real del cambio.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera de proyectos de inversión',
                'description'      => 'Tracking de CAPEX, control de desviaciones y reporting de proyectos de inversión al comité de dirección.',
                'prompt_content'   => <<<'PROMPT'
Eres un director financiero con experiencia en la gestión financiera de proyectos de inversión de capital (CAPEX) en empresas industriales, de infraestructura o de tecnología. Quiero tu ayuda para mejorar el control financiero de los proyectos de inversión que gestionamos.

**Contexto que me pedirás:**
- Tipo y tamaño de los proyectos de inversión (CAPEX de equipamiento, obra civil, desarrollo de sistema, expansión)
- Número de proyectos en cartera actualmente
- Sistema de información actual (ERP, Excel, herramienta específica de gestión de proyectos)
- El mayor problema actual en el control financiero de proyectos

**Lo que quiero mejorar:**

1. **Presupuestación de proyectos de inversión**: Cómo construir el presupuesto de un proyecto de inversión que incluya todos los costes relevantes: inversión directa, costes de ingeniería, contingencias, costes de puesta en marcha y costes de financiación. La diferencia entre el presupuesto aprobado (Authorized for Expenditure) y el presupuesto de control.

2. **Control de desviaciones (Earned Value Management básico)**: Cómo medir si un proyecto va bien o mal financieramente antes de que sea demasiado tarde. El concepto de Earned Value: la diferencia entre lo que hemos gastado, lo que tendríamos que haber gastado y el valor del trabajo realmente completado. El Cost Performance Index y el Schedule Performance Index como alertas tempranas.

3. **Cash flow del proyecto de inversión**: Cómo planificar y controlar el cash flow de un proyecto de inversión. La diferencia entre el presupuesto de inversión y el cash flow real mes a mes. Cómo gestionar las certificaciones y pagos a proveedores para no crear tensión de tesorería.

4. **Reporting al comité de dirección**: Qué información necesita la dirección sobre cada proyecto de inversión: estado de avance (%), coste incurrido vs. presupuesto, proyección final de coste (EAC), desviaciones significativas y plan de acción. Cómo presentar esta información de forma clara en una sola página por proyecto.

5. **Cierre financiero del proyecto**: El proceso de cierre financiero de un proyecto: conciliación del coste final con el presupuesto, activación del activo en el balance, documentación para auditoría y post-mortem financiero que mejora las estimaciones de proyectos futuros.

6. **Cartera de proyectos de inversión**: Cuando hay múltiples proyectos simultáneos, cómo gestionar la cartera: priorización por retorno esperado, asignación de recursos financieros limitados y visión consolidada del CAPEX comprometido vs. disponible.

Dame un sistema de control financiero de proyectos que funcione en la práctica, no solo en teoría.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Controlar financieramente proyectos de inversión en CAPEX con seguimiento de desviaciones, cash flow y reporting ejecutivo.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de proyectos legales complejos',
                'description'      => 'Coordina la due diligence de una adquisición, un litigio o una reestructuración con múltiples partes y plazos críticos.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado senior con experiencia en coordinar proyectos legales complejos que involucran a múltiples bufetes, departamentos de la empresa cliente, consultoras y partes externas, con plazos procesales o contractuales que no se pueden incumplir. Quiero tu ayuda para gestionar mejor los proyectos legales complejos de mi práctica o departamento.

**Contexto que me pedirás:**
- Tipo de proyecto legal (M&A / due diligence, litigio complejo, reestructuración, proyecto regulatorio)
- Número de partes y equipos involucrados
- Herramientas disponibles (data room, gestión de proyectos, DMS)
- El mayor problema en la gestión actual

**Lo que quiero mejorar:**

1. **Plan de proyecto legal**: Cómo estructurar un proyecto legal complejo como un proyecto con fases, hitos, responsables y fechas. La diferencia entre el plan de trabajo interno del equipo legal y el plan de proyecto compartido con el cliente. Qué nivel de detalle necesita cada uno.

2. **Gestión de la data room en due diligence**: La due diligence es el proyecto legal más complejo en terms de gestión de información. Cómo organizar el índice de la data room, qué herramientas usar (Intralinks, Datasite, SharePoint), cómo gestionar el Q&A de solicitudes de información y cómo controlar quién ha visto qué.

3. **Coordinación de equipos multidisciplinares**: En una operación de M&A o una reestructuración hay abogados, auditores, bancos de inversión y consultores estratégicos trabajando en paralelo. Cómo ser el coordinador efectivo de todos ellos: la reunión de steering committee, los informes de avance y la gestión de los cuellos de botella que cruzan disciplinas.

4. **Gestión de los plazos procesales y contractuales**: Los plazos en el trabajo legal son fatales: un plazo procesal incumplido puede costar el caso. Cómo construir un sistema de alerta temprana que garantice que ningún plazo se pase por alto, con redundancias y responsables de backup.

5. **Comunicación con el cliente en proyectos legales complejos**: Cómo mantener al cliente informado sin abrumarlo con detalles técnicos, cómo gestionar sus expectativas sobre plazos y costes cuando el proyecto evoluciona, y cómo comunicar malas noticias de forma constructiva.

6. **Post-proyecto: captura de conocimiento**: Cómo documentar lo aprendido en un proyecto legal complejo para que el conocimiento quede en el despacho o departamento y no en la cabeza de las personas que lo ejecutaron. Plantillas, precedentes y lecciones aprendidas como activos reutilizables.

Dame un sistema de gestión de proyectos legales que combine el rigor del derecho con la eficiencia de la gestión de proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Coordinar proyectos legales complejos como due diligences o litigios con múltiples equipos, plazos críticos y comunicación efectiva con el cliente.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Proyectos de implementación con clientes enterprise',
                'description'      => 'Gestiona los proyectos de onboarding y setup de clientes enterprise como proyectos formales con milestones y responsables.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de Customer Success con experiencia en implementaciones de software B2B enterprise que duran entre 3 y 12 meses y requieren coordinación entre el equipo técnico, el equipo de CS y múltiples stakeholders del cliente. Quiero tu ayuda para profesionalizar la gestión de estos proyectos de implementación.

**Contexto que me pedirás:**
- Tipo de producto o servicio que se implementa
- Duración típica de la implementación y complejidad técnica
- Estructura del equipo de implementación (CS, technical, project)
- Número de clientes enterprise en implementación simultáneamente
- El mayor problema recurrente en las implementaciones actuales

**Lo que quiero mejorar:**

1. **El joint implementation plan**: La implementación enterprise debe gestionarse como un proyecto compartido con el cliente, no como algo que le hacemos al cliente. Cómo crear un Joint Implementation Plan que el cliente co-firme, qué incluye (hitos, dependencias del cliente, criterios de go-live) y cómo mantenerlo actualizado durante todo el proceso.

2. **Kickoff de implementación que alinea a todos**: El kickoff de una implementación enterprise es el momento más crítico. Qué debe incluir, quién debe asistir de cada lado, cómo establecer las expectativas correctas sobre plazos y responsabilidades, y cómo salir del kickoff con compromisos concretos del cliente.

3. **Gestión de las dependencias del cliente**: El 80% de los retrasos en implementaciones enterprise son por el cliente, no por nosotros. Cómo gestionar de forma proactiva las dependencias que recaen en el cliente: accesos, datos, decisiones, recursos de IT. Cómo comunicar los bloqueos sin dañar la relación.

4. **Steering committee del proyecto**: Cómo estructurar y facilitar las reuniones de steering committee con los stakeholders ejecutivos del cliente. Qué información presentar, cómo escalar los problemas al nivel correcto y cómo usar estas reuniones para proteger el timeline.

5. **Criterios de go-live y gestión del cierre de la implementación**: Cómo definir desde el principio qué significa "ir en vivo" (User Acceptance Testing, criterios de aceptación, datos migrados, usuarios formados) para evitar que el cliente amplíe el scope indefinidamente. El proceso de transición de implementación a soporte normal.

6. **Métricas de éxito de la implementación**: Cómo medir si las implementaciones van bien: tiempo hasta go-live vs. plan, satisfacción del cliente en hitos clave (CSAT de implementación), adopción de usuarios en los primeros 30 días post go-live y correlación con la retención a 12 meses.

Dame un sistema de gestión de implementaciones que escale cuando tenemos 10, 20 o 30 implementaciones en paralelo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar implementaciones de software enterprise como proyectos formales con joint plans, steering committees y criterios claros de go-live.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de múltiples proyectos freelance simultáneos',
                'description'      => 'Herramientas, sistemas y rutinas para llevar 3-5 proyectos en paralelo sin confundirse ni fallar a ningún cliente.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor especializado en productividad y sistemas de trabajo para profesionales independientes. Tengo varios proyectos de clientes activos al mismo tiempo y quiero que me ayudes a construir un sistema que me permita gestionarlos todos sin perder el control, sin estresarme y sin que ningún cliente sienta que no le dedico atención.

**Contexto que me pedirás:**
- Número de proyectos activos actualmente y tipo de trabajo (diseño, desarrollo, consultoría, contenido, etc.)
- Herramientas que ya uso o que estoy dispuesto a adoptar
- Mi mayor problema actual: confusión entre proyectos, retrasos, comunicación deficiente, o simplemente estrés
- Horas disponibles por semana y si trabajo en bloque o fragmentado

**El sistema que quiero construir:**

1. **Un solo lugar para todos los proyectos**: El mayor riesgo de gestionar múltiples proyectos es tener la información dispersa. Ayúdame a diseñar un hub central (Notion, ClickUp, Airtable o simplemente un sistema de carpetas) donde pueda ver el estado de todos los proyectos de un vistazo: qué está pendiente, qué vence esta semana, qué está esperando respuesta del cliente.

2. **Bloques de tiempo por cliente**: Cómo organizar la semana para que cada cliente tenga bloques de tiempo dedicados y yo no esté saltando entre contextos constantemente. El tiempo de cambio de contexto entre proyectos es uno de los mayores ladrones de productividad freelance. Estrategias de batching por cliente y tipo de trabajo.

3. **Rituales de inicio y cierre de proyecto**: Qué hacer al empezar a trabajar en un proyecto para recuperar el contexto rápidamente (dónde lo dejé, qué viene después, hay algo urgente del cliente) y qué hacer al terminar el bloque de trabajo (actualizar el estado, dejar notas para mañana, comunicar avance si procede).

4. **Comunicación con múltiples clientes sin caos**: Cómo gestionar la comunicación con varios clientes simultáneamente sin que nada se quede sin responder y sin dedicar horas al día al email. Tiempos de respuesta por tipo de mensaje, templates de actualización de estado y cómo establecer las expectativas de comunicación con el cliente desde el inicio del proyecto.

5. **Control de horas y rentabilidad por proyecto**: Si cobro por proyecto, cómo controlo que no estoy invirtiendo más horas de las presupuestadas. Si cobro por horas, cómo registro el tiempo de forma que no sea una carga. La señal de alerta que me indica que un proyecto se está desviando antes de que afecte al margen.

6. **La semana ideal del freelance con múltiples proyectos**: Diseña conmigo una semana tipo que equilibre el trabajo de cliente, la comunicación, la gestión administrativa y el tiempo para hacer el trabajo de calidad que mis clientes esperan. Incluye los rituales de revisión semanal.

Quiero un sistema que funcione incluso cuando la carga de trabajo es alta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de gestión de múltiples proyectos freelance simultáneos con visibilidad, comunicación y control de tiempo.',
                'vote_score'       => 44,
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
