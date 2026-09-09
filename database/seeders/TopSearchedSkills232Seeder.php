<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills232Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Notion para equipos de marketing',
                'description'      => 'Usa Notion como el sistema operativo del equipo de marketing: la estructura del workspace, las bases de datos de campañas y el proceso de documentación que convierte Notion en el lugar donde vive todo el conocimiento de marketing.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de operaciones de marketing con experiencia implementando Notion como sistema de gestión del conocimiento y las operaciones de equipos de marketing de entre 5 y 30 personas. Voy a explorar contigo cómo convertir Notion en el sistema operativo del equipo de marketing.

Mi contexto: [describe tu equipo: tamaño, canales de marketing activos, cómo gestionas actualmente los proyectos y el conocimiento, y qué problema concreto quieres resolver con Notion]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La arquitectura del workspace de marketing en Notion**
Un workspace de Notion mal diseñado se convierte en un cajón de sastre donde nadie encuentra nada. Explícame cómo diseñar la estructura del workspace para que sea intuitiva y se mantenga organizada a medida que el equipo crece: la jerarquía de páginas y secciones, la diferencia entre páginas de referencia (que no cambian) y páginas operativas (que se actualizan constantemente) y los principios de organización que hacen que cualquier miembro del equipo encuentre lo que busca en menos de 30 segundos.

**2. Las bases de datos de campañas y proyectos**
El núcleo de Notion para marketing son las bases de datos relacionales. Guíame por el diseño de las bases de datos clave: la base de datos de campañas (con las propiedades que capturan el estado, los objetivos, el presupuesto y los resultados), la base de datos de contenido (que gestiona el calendario editorial y el flujo de aprobación), y la base de datos de proyectos de marketing. Explícame cómo relacionar estas bases de datos para que una campaña tenga vinculados sus contenidos, sus assets y sus resultados sin duplicar información.

**3. El calendario de contenidos como base de datos viva**
El calendario de contenidos es la pieza más crítica de la operativa de marketing. Explícame cómo construir en Notion un calendario que sea más que una lista de fechas: las vistas (calendario, kanban por estado, tabla por canal) que dan perspectivas distintas sobre el mismo dato, las propiedades que capturan el brief, el estado de producción y el enlace al contenido final, y el flujo de trabajo de aprobación que hace que el contenido pase de borrador a publicado sin perder el rastro de quién aprobó qué.

**4. La documentación del equipo de marketing**
El conocimiento del equipo de marketing se pierde cuando los procesos solo viven en la cabeza de las personas. Propón un sistema de documentación para marketing: cómo documentar los playbooks de cada canal (el proceso step by step de cómo se lanza una campaña de email, cómo se gestiona el paid, cómo funciona el proceso de producción de contenido), cómo mantener la documentación actualizada sin que se convierta en una carga y cómo asegurarse de que los nuevos miembros del equipo encuentran y usan la documentación existente.

**5. Las reuniones y la gestión del equipo en Notion**
Notion puede ser también el lugar donde viven las reuniones del equipo. Explícame cómo estructurar las páginas de reunión: el template de reunión semanal del equipo de marketing (agenda, notas, tareas que salen de la reunión), el template de revisión de campaña (resultados vs. objetivos, aprendizajes, próximos pasos) y cómo integrar los elementos de acción de las reuniones con la base de datos de tareas para que no se pierdan.

**6. La adopción: hacer que el equipo use Notion de verdad**
El mayor riesgo de Notion es que solo lo use quien lo implantó. Dame estrategias para conseguir la adopción real del equipo: cómo diseñar el onboarding de nuevos miembros en el workspace, cómo establecer las normas de uso que evitan que el workspace se degrade con el tiempo, cómo gestionar la resistencia de los miembros del equipo que prefieren sus propias herramientas y cómo medir si Notion está siendo usado o es una inversión de tiempo sin retorno.

Quiero plantillas concretas de bases de datos y páginas, no solo principios abstractos de organización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Implementar Notion como sistema operativo del equipo de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'GitHub avanzado: más allá del control de versiones',
                'description'      => 'Usa GitHub como plataforma de colaboración: las GitHub Actions para automatización, los Projects para gestión del trabajo y los flujos de trabajo que hacen que el equipo de ingeniería sea más productivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager con experiencia usando GitHub como plataforma de colaboración en equipos de ingeniería de entre 5 y 50 personas, más allá del simple control de versiones. Voy a explorar contigo cómo sacar el máximo partido a GitHub como plataforma de trabajo del equipo de desarrollo.

Mi contexto: [describe tu equipo: tamaño, stack tecnológico, cómo usas GitHub actualmente y qué quieres mejorar en el flujo de trabajo del equipo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. GitHub como plataforma de colaboración, no solo de código**
La mayoría de los equipos usan GitHub solo para el control de versiones. Explícame cómo expandir el uso de GitHub para que se convierta en la plataforma central del equipo de ingeniería: el rol de las Issues como sistema de tracking de trabajo, los Discussions para las decisiones de arquitectura y los debates técnicos, las Wikis para la documentación técnica y cómo integrar estas herramientas para que el flujo de trabajo del equipo viva en un solo lugar.

**2. GitHub Actions: automatizar el ciclo de vida del software**
GitHub Actions es una de las herramientas más potentes de la plataforma y la más infrautilizada. Explícame cómo construir pipelines de CI/CD con Actions: los workflows de test automático (cómo ejecutar tests en cada PR), los workflows de build y deploy (cómo desplegar automáticamente a staging cuando se fusiona a main), los workflows de calidad de código (linting, análisis estático, cobertura de tests) y los workflows de seguridad (escaneo de dependencias vulnerables). Dame ejemplos de workflows concretos para los casos de uso más comunes.

**3. GitHub Projects: gestionar el trabajo del equipo de ingeniería**
GitHub Projects es la herramienta de gestión de trabajo integrada en la plataforma. Guíame por su uso avanzado: cómo diseñar el tablero del equipo de ingeniería (las columnas que reflejan el flujo de trabajo real), cómo usar las vistas personalizadas (por sprint, por asignado, por milestone), cómo configurar la automatización que mueve las tarjetas automáticamente según el estado de los PRs y cómo usar los campos personalizados para capturar el contexto que el equipo necesita (prioridad, estimación, tipo de trabajo).

**4. El flujo de trabajo de pull requests que escala**
El proceso de PR es donde más tiempo pierde un equipo de ingeniería si no está bien diseñado. Explícame cómo diseñar el flujo de PRs del equipo: los templates de PR que capturan la información necesaria para revisar con eficiencia, las reglas de protección de ramas (branch protection rules) que garantizan la calidad sin crear burocracia, las políticas de review (quién revisa qué, cómo evitar que los PRs se queden bloqueados esperando revisión) y el tamaño de PR que maximiza la velocidad de revisión sin sacrificar la seguridad.

**5. GitHub para la gestión del código y la arquitectura**
GitHub ofrece herramientas que van más allá de los commits. Explícame cómo usar las herramientas de gestión del código a nivel de repositorio: la organización de repos (monorepo vs. polyrepo y cuándo usar cada uno), los CODEOWNERS para asignar responsabilidades de revisión automáticas, los Environments para gestionar los distintos entornos de despliegue con sus secretos y protecciones, y GitHub Packages para gestionar los artefactos y librerías internas del equipo.

**6. Métricas de ingeniería desde GitHub**
GitHub es la fuente de datos más rica sobre la productividad del equipo de ingeniería. Explícame qué métricas se pueden extraer de GitHub y cómo interpretarlas: el cycle time (tiempo desde el primer commit hasta el merge), el PR throughput (número de PRs mergeados por semana), el tiempo de revisión de PRs, el número de revisiones por PR y cómo usar estas métricas para identificar cuellos de botella en el flujo de trabajo del equipo sin convertirlas en métricas de vigilancia individual.

Quiero ejemplos de configuraciones y workflows concretos que pueda usar como punto de partida.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Usar GitHub como plataforma de colaboración del equipo de ingeniería',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Figma para equipos de diseño: flujos de trabajo avanzados',
                'description'      => 'Domina Figma como plataforma de colaboración de diseño: los componentes y variables avanzadas, el handoff con ingeniería y los flujos de revisión que hacen que el equipo de diseño trabaje de forma más eficiente y coordinada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con experiencia estableciendo flujos de trabajo avanzados en Figma para equipos de diseño de entre 3 y 20 personas que trabajan en productos digitales. Voy a explorar contigo cómo maximizar la productividad y coordinación del equipo de diseño usando Figma como plataforma de colaboración.

Mi contexto: [describe tu equipo: tamaño, tipo de producto en el que trabajas, cómo usas Figma actualmente y cuáles son los puntos de fricción más habituales]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La organización del workspace de Figma para el equipo**
Un workspace de Figma desorganizado convierte la colaboración en caos. Explícame cómo estructurar el workspace de equipo: la jerarquía de proyectos y archivos (cómo organizar los archivos de diseño, los de exploración y los de documentación), los naming conventions que hacen que cualquier diseñador encuentre cualquier archivo y frame en segundos, y la política de archivos (cuándo crear un archivo nuevo vs. añadir páginas a uno existente) que evita la proliferación de archivos huérfanos.

**2. Componentes y variables avanzadas: el design system en Figma**
Las variables y los componentes avanzados son las características más potentes de Figma moderno. Guíame por su uso avanzado: cómo estructurar las variables para manejar temas (claro y oscuro), breakpoints y tokens de diseño de forma que los cambios globales sean instantáneos, cómo construir componentes con variantes que cubren todos los estados sin crear una librería inmanejable y cómo usar el auto-layout para que los componentes sean verdaderamente responsivos desde el diseño.

**3. El flujo de trabajo de diseño colaborativo**
El diseño en equipo rompe cuando no hay normas claras. Explícame cómo establecer el flujo de trabajo colaborativo en Figma: las convenciones de trabajo en el mismo archivo (cómo evitar que los diseñadores se pisen entre sí), el proceso de entrega de exploración a diseño final (cuándo un diseño está listo para pasar a refinamiento), el uso de los comentarios de Figma para las rondas de feedback y las normas de nomenclatura de layers y frames que hacen que cualquier diseñador pueda trabajar en el archivo de otro sin perderse.

**4. El handoff con ingeniería**
El handoff es el momento más crítico del flujo de trabajo de diseño. Explícame cómo preparar los archivos de Figma para que el handoff con los engineers sea eficiente: los frames de especificación que van más allá de lo que Figma exporta automáticamente, las anotaciones de comportamiento (lo que no se ve en el diseño estático pero el engineer necesita saber), el uso del modo Dev de Figma para que el engineer pueda inspeccionarlo con suficiente contexto y el proceso de revisión con ingeniería antes del inicio de desarrollo para detectar problemas de implementación a tiempo.

**5. El proceso de revisión y aprobación de diseños**
Los diseños sin un proceso de revisión claro quedan atrapados en ciclos de feedback interminables. Propón el proceso de revisión para el equipo: los checkpoints de revisión a lo largo del proceso de diseño (revisión de concepto, revisión de flujos, revisión de componentes, revisión final), quién participa en cada revisión, cómo estructurar las sesiones de design critique para que el feedback sea útil y accionable y cómo documentar las decisiones de diseño para que el contexto no se pierda.

**6. Plugins y automatización para el equipo de diseño**
Los plugins de Figma pueden automatizar trabajo repetitivo y ahorrar horas al equipo. Explícame los plugins más útiles para los flujos de trabajo avanzados de equipos de diseño: los plugins de contenido (generación de datos realistas), los de documentación (creación de specs y anotaciones automáticas), los de consistencia (detección de estilos no vinculados a la librería), los de accesibilidad (verificación de contraste y orden de lectura) y los de exportación que aceleran el handoff. Dame el razonamiento de cuándo cada plugin vale el tiempo de aprendizaje.

Quiero recomendaciones concretas y ejemplos de estructura de archivos que pueda adaptar a mi equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Establecer flujos de trabajo avanzados en Figma para equipos de diseño',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Salesforce avanzado: el CRM que trabaja para ti',
                'description'      => 'Usa Salesforce de forma que realmente ahorre tiempo al equipo comercial: los flows de automatización, los dashboards de pipeline y las integraciones que convierten el CRM en el centro de las operaciones de ventas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Salesforce administrator y revenue operations manager con experiencia configurando y optimizando Salesforce para equipos comerciales de entre 10 y 100 personas en empresas SaaS B2B. Voy a explorar contigo cómo usar Salesforce de forma que realmente aumente la productividad del equipo de ventas.

Mi contexto: [describe tu situación: tamaño del equipo de ventas, edición de Salesforce que usas (Essentials, Professional, Enterprise), los mayores problemas de adopción o eficiencia que tienes y las integraciones más importantes para tu proceso]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La configuración del pipeline que refleja la realidad del proceso de ventas**
El error más común en Salesforce es configurar el pipeline para los reports del manager en lugar de para el trabajo del vendedor. Explícame cómo diseñar los stages del pipeline que sean útiles para los dos: los criterios de entrada y salida de cada stage (qué debe ser verdad para que una oportunidad esté en ese stage), la diferencia entre stages de actividad y stages de avance del cliente, y cómo configurar los campos obligatorios en cada transición para que el CRM capture la información necesaria sin convertirse en una carga administrativa.

**2. Los Flows de Salesforce: automatizar el trabajo repetitivo**
Los Flows son la herramienta más potente de Salesforce y la más subutilizada por los equipos que no tienen Apex developers. Guíame por los casos de uso más impactantes de los Flows para ventas: la automatización del proceso de creación de tareas (que el comercial nunca tenga que crear una tarea de seguimiento manualmente), la asignación automática de leads según las reglas de negocio, las alertas al manager cuando una oportunidad entra en riesgo (sin actividad en X días) y la actualización automática de campos derivados. Dame ejemplos concretos de cada Flow.

**3. Los dashboards y reports que el equipo realmente usa**
Un buen dashboard de Salesforce puede transformar las reuniones de pipeline. Explícame cómo construir los reports y dashboards que usan de verdad los equipos de ventas: el dashboard de pipeline del manager (con el forecast por stage, los deals en riesgo y el trending de las métricas clave), el dashboard del vendedor individual (su pipeline personal, sus actividades de la semana y su avance hacia cuota) y los reports de análisis de ventas (win rate por segmento, ciclo de ventas medio, ratio de conversión entre stages).

**4. La higiene del CRM: datos limpios sin trabajo extra**
Los datos de Salesforce se degradan rápidamente si no hay procesos que los mantengan limpios. Propón el sistema de mantenimiento de datos: las reglas de validación que impiden introducir datos incorrectos, los Flows de deduplicación y enriquecimiento de datos, el proceso de revisión periódica del pipeline (la reunión de pipeline review apoyada en Salesforce), las reglas de archivado de oportunidades perdidas y cómo establecer la cadencia de limpieza de datos que el equipo puede mantener sin que se convierta en una carga.

**5. Las integraciones que multiplican el valor de Salesforce**
Salesforce sin integraciones es un sistema de registro que los vendedores actualizan a regañadientes. Explícame las integraciones más impactantes para los equipos de ventas: la integración con el sistema de email (para que los emails queden registrados automáticamente sin trabajo manual del vendedor), la integración con las herramientas de sales engagement (Outreach, Salesloft) para la prospección outbound, la integración con la plataforma de conversaciones (Gong o Chorus) y la integración con el producto (para que el CSM y el comercial vean el uso del cliente desde el CRM).

**6. La adopción: el reto real de Salesforce**
El mejor Salesforce del mundo no sirve si los vendedores no lo usan. Dame estrategias para la adopción real: cómo involucrar al equipo de ventas en las decisiones de configuración para que el CRM refleje cómo trabajan (en lugar de cómo el manager cree que trabajan), cómo medir la adopción más allá del login (calidad de los datos, completitud de campos, frecuencia de actualización), cómo gestionar la resistencia de los vendedores experimentados que tienen sus propios sistemas y cómo demostrar al equipo que Salesforce les da información útil para cerrar más.

Quiero configuraciones concretas y ejemplos de Flows que pueda implementar, no solo principios de buenas prácticas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Configurar y optimizar Salesforce para que el equipo comercial lo use de forma productiva',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Linear y Jira para equipos de producto avanzados',
                'description'      => 'Gestiona el trabajo del equipo de producto con las herramientas que usan los mejores equipos: los flujos de trabajo, la integración con GitHub y el proceso de planificación de sprints que mantiene el equipo alineado y productivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de producto con experiencia implementando y optimizando flujos de trabajo en Linear y Jira para equipos de producto e ingeniería de distintas etapas de crecimiento. Voy a explorar contigo cómo sacar el máximo partido a las herramientas de gestión del trabajo del equipo de producto.

Mi contexto: [describe tu situación: herramienta que usas o evalúas (Linear, Jira, o ambas), tamaño del equipo, metodología de trabajo (scrum, kanban, shape up) y los principales problemas de flujo de trabajo que quieres resolver]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Linear vs. Jira: cuándo usar cada herramienta**
La elección entre Linear y Jira es una decisión con implicaciones en la velocidad y la cultura del equipo. Explícame las diferencias reales entre las dos herramientas más allá del marketing: Linear (velocidad, opinionated, diseñado para equipos de producto ágiles que quieren mínima fricción) vs. Jira (flexibilidad, enterprise-ready, potente pero complejo). Las señales de que Linear es la herramienta correcta para tu equipo y cuándo Jira tiene sentido a pesar de su complejidad. La migración de Jira a Linear y sus consideraciones.

**2. La configuración del flujo de trabajo en Linear**
Linear tiene opiniones fuertes sobre cómo debe funcionar el flujo de trabajo, y seguirlas produce resultados. Guíame por la configuración avanzada de Linear: la estructura de teams y projects (cómo organizar el trabajo de varios equipos en Linear sin que se convierta en un laberinto), los estados del ciclo de trabajo que reflejan el proceso real del equipo, el uso de cycles (el equivalente de los sprints en Linear), la priorización con el sistema de urgencia/impacto y las vistas que el PM usa para tener visibilidad sobre el trabajo del equipo.

**3. La configuración avanzada de Jira**
Jira puede ser tan simple o tan complejo como quieras, y generalmente los equipos lo configuran demasiado complejo. Explícame la configuración avanzada de Jira que maximiza la productividad sin crear burocracia: el diseño del board que refleja el flujo de trabajo real, las automations de Jira que reducen el trabajo manual (mover tarjetas según el estado de los PRs, asignar automáticamente según criterios, crear subtareas en el momento adecuado), los dashboards de proyecto y los gadgets que dan visibilidad real sobre el avance y el workload del equipo.

**4. La integración con GitHub: cerrar el ciclo entre producto e ingeniería**
La integración entre la herramienta de gestión del trabajo y GitHub es donde se gana o se pierde la mayor parte del trabajo manual de actualización. Explícame cómo configurar la integración de Linear con GitHub y de Jira con GitHub: cómo los PRs se vinculan automáticamente a los issues, cómo el estado del issue se actualiza automáticamente según el estado del PR (draft, en revisión, mergeado), cómo los deploys se registran en los issues correspondientes y cómo se usa esta integración para mantener el tablero actualizado sin que nadie tenga que hacerlo manualmente.

**5. El proceso de planificación de sprints**
La planificación de sprints es donde la herramienta de gestión del trabajo tiene que facilitar la conversación del equipo, no entorpecerla. Propón el proceso de planificación apoyado en la herramienta: la preparación del backlog antes de la planificación (el proceso de grooming con el equipo de ingeniería), la sesión de planificación del sprint (cómo usar Linear o Jira para construir el sprint de forma colaborativa con el equipo), la estimación (puntos de historia vs. t-shirt sizing vs. no-estimación) y el seguimiento del sprint en curso (las métricas que indican si el equipo va a cumplir el sprint o si hay que ajustar).

**6. Las métricas de flujo de trabajo del equipo de producto**
Las herramientas de gestión del trabajo generan datos que permiten entender la productividad real del equipo. Explícame las métricas de flujo que vale la pena medir: el cycle time (tiempo desde que una issue se inicia hasta que se completa), el throughput (número de issues completadas por semana), el work in progress (cuántas issues tiene el equipo en marcha simultáneamente), las métricas de predictibilidad del sprint (porcentaje de sprint completado) y cómo usar estas métricas para tener conversaciones productivas con el equipo sin convertirlas en herramientas de microgestión.

Quiero configuraciones y automatizaciones concretas que pueda implementar en mi herramienta de trabajo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar el flujo de trabajo del equipo de producto con Linear o Jira',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Slack como plataforma de comunicación de empresa',
                'description'      => 'Gestiona la comunicación de la empresa en Slack: la estructura de canales, las normas de uso y los rituales que hacen que Slack sea una herramienta de productividad en lugar de una fuente de interrupciones constantes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de people operations con experiencia diseñando e implementando la arquitectura de comunicación de Slack en empresas de entre 30 y 300 personas, con especial atención a hacer que Slack sea una herramienta de productividad y no una fuente de ansiedad e interrupciones. Voy a explorar contigo cómo gestionar la comunicación de la empresa en Slack de forma efectiva.

Mi contexto: [describe tu empresa: tamaño, cultura de comunicación actual, si ya usas Slack y cuáles son los principales problemas (demasiado ruido, canales desorganizados, notificaciones constantes) o si estás empezando a implementarlo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La arquitectura de canales: diseño desde cero**
La estructura de canales de Slack determina si la herramienta genera claridad o caos. Explícame cómo diseñar la arquitectura de canales desde cero: los tipos de canales que toda empresa necesita (canales de empresa, canales de equipo, canales de proyecto, canales sociales) y los que hay que evitar, los naming conventions que hacen evidente el propósito de cada canal, los criterios para crear un canal nuevo (qué justifica la existencia de un canal) y el proceso de depuración de canales obsoletos que ninguna empresa hace pero todos necesitan.

**2. Las normas de comunicación que reducen el ruido**
Slack sin normas de uso se convierte en un flujo de interrupciones constantes. Propón el conjunto de normas de comunicación para el equipo: la expectativa de tiempo de respuesta por tipo de canal y por horario, el uso correcto de los mentions (@here, @channel, @persona) para que las menciones conserven su urgencia y no pierdan significado, las convenciones de formato de mensajes (cuándo usar hilos, cuándo crear un canal específico, cuándo mandar un correo en su lugar) y el protocolo de mensajes urgentes que diferencia lo realmente urgente de lo que puede esperar.

**3. Los rituales de comunicación en Slack**
Los rituales son los usos recurrentes de Slack que crean cultura y mantienen al equipo conectado. Explícame los rituales de Slack que funcionan en equipos de alto rendimiento: los stand-ups asíncronos (cómo estructurarlos para que den información útil sin ser una burocracia), los canales de wins y reconocimiento que alimentan la cultura de equipo, los canales de aprendizaje y compartición de conocimiento y los rituales de onboarding de nuevos miembros que les dan contexto sobre cómo funciona la comunicación de la empresa.

**4. Gestión de notificaciones: recuperar el foco**
Las notificaciones de Slack son el mayor enemigo del trabajo profundo. Dame el sistema de gestión de notificaciones que permite a los miembros del equipo hacer trabajo de foco sin perder información importante: la configuración recomendada de notificaciones (qué notificar, cuándo, cómo), el uso de los estados de Slack para comunicar la disponibilidad, cómo establecer las expectativas de respuesta que hacen que nadie se sienta presionado a responder en tiempo real y cómo los managers pueden dar ejemplo de una relación sana con las notificaciones.

**5. Slack para equipos remotos e híbridos**
Slack es especialmente crítico para los equipos que no están en el mismo espacio físico. Explícame las prácticas específicas de Slack para equipos remotos e híbridos: cómo compensar en Slack la pérdida de comunicación informal que ocurre de forma natural en la oficina, cómo gestionar los equipos distribuidos en múltiples zonas horarias (las normas de comunicación asíncrona que evitan los bloqueos), cómo mantener la cohesión del equipo cuando parte del equipo está en remoto y parte en la oficina y las prácticas de inclusión que evitan que los trabajadores remotos se sientan ciudadanos de segunda.

**6. Las integraciones de Slack que multiplican su valor**
Slack tiene un ecosistema de integraciones que puede convertirlo en el hub de información del equipo. Explícame las integraciones más valiosas para los distintos equipos: las integraciones de alertas y monitorización para el equipo de ingeniería (que las alertas de producción lleguen al canal correcto), las integraciones de ventas (notificaciones de nuevos clientes, alertas de churn), las de RRHH (automatización de onboarding, recordatorios de procesos) y cómo diseñar el flujo de notificaciones para que la información importante llegue al canal correcto sin crear más ruido del que elimina.

Quiero ejemplos concretos de canales, normas y configuraciones, no solo principios abstractos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar la arquitectura de comunicación de Slack para que el equipo trabaje mejor',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Excel y Google Sheets avanzados para finanzas',
                'description'      => 'Domina las hojas de cálculo como herramienta financiera: las funciones avanzadas, el modelado financiero y las macros que automatizan el trabajo repetitivo y reducen el tiempo del cierre mensual.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia usando Excel y Google Sheets como herramientas de modelado financiero y automatización en empresas de tamaño medio, con conocimiento profundo de las capacidades avanzadas de ambas plataformas y sus diferencias prácticas para el trabajo financiero. Voy a explorar contigo cómo dominar las hojas de cálculo como herramienta financiera avanzada.

Mi contexto: [describe tu situación: nivel actual de Excel/Sheets, los procesos financieros que gestionas con hojas de cálculo, los modelos que construyes con más frecuencia y las tareas repetitivas que más tiempo te consumen]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las funciones avanzadas que todo financiero debe dominar**
La mayoría de los financieros usan el 20% de las funciones disponibles. Explícame las funciones avanzadas que marcan la diferencia en el trabajo financiero: las funciones de lookup avanzadas (INDEX/MATCH vs. XLOOKUP, los casos de uso donde VLOOKUP simplemente no funciona), las funciones de fecha y tiempo para los cálculos financieros (días hábiles, años fiscales, períodos de devengo), las funciones de texto para la limpieza y transformación de datos financieros, las funciones estadísticas para análisis de varianzas y proyecciones y las funciones de array dinámico (FILTER, SORT, UNIQUE) que reemplazan flujos de trabajo complejos con una sola fórmula.

**2. Modelado financiero en Excel y Google Sheets**
Un modelo financiero bien construido es la diferencia entre una herramienta de toma de decisiones y una hoja de cálculo que nadie puede mantener. Explícame los principios del modelado financiero profesional: la separación de inputs, cálculos y outputs en secciones distintas, el uso de named ranges para que las fórmulas sean legibles y auditables, la construcción de modelos flexibles que se adaptan a distintos escenarios sin romper las fórmulas, la gestión de las referencias circulares que aparecen en los modelos de estados financieros integrados y las convenciones de formato que hacen que el modelo sea comprensible para alguien que no lo ha construido.

**3. Automatización del cierre mensual**
El cierre mensual consume una cantidad desproporcionada de tiempo en la mayoría de los departamentos financieros. Propón un sistema de automatización del proceso de cierre usando hojas de cálculo: la estructura del libro de cierre (cómo organizar las hojas para el proceso mensual), las macros de Excel (VBA) o los scripts de Google Sheets (Apps Script) que automatizan las tareas repetitivas del cierre (importación de datos, consolidación de información de múltiples fuentes, generación de los reports estándar), y el flujo de trabajo de validación de datos que detecta errores antes de que lleguen al P&L.

**4. Dashboards financieros dinámicos**
Un dashboard financiero bien construido transforma los datos en decisiones. Guíame por la construcción de dashboards financieros avanzados: el uso de las tablas dinámicas (Pivot Tables) para el análisis multidimensional de los datos financieros, los gráficos dinámicos que se actualizan automáticamente con los datos del período, los slicers y filtros que permiten al usuario explorar los datos sin tocar las fórmulas del modelo, y los formatos condicionales que hacen que las varianzas y las alertas sean inmediatamente visibles sin necesidad de análisis manual.

**5. Power Query y conectores de datos**
La transformación y limpieza de datos financieros consume horas que se pueden automatizar. Explícame el uso de Power Query en Excel para automatizar el proceso ETL financiero: cómo conectar Excel directamente a las fuentes de datos (ERP, bases de datos, APIs financieras), cómo transformar y limpiar los datos sin tocar la fuente original (el principio de never touch the raw data), cómo construir queries reutilizables que el equipo puede actualizar con un clic y la diferencia entre lo que puedes hacer con Power Query en Excel vs. lo que Google Sheets puede hacer con sus conectores de datos.

**6. Excel vs. Google Sheets: la decisión correcta para cada caso**
No todas las tareas financieras son iguales, y la elección de herramienta importa. Dame el framework para decidir cuándo usar Excel y cuándo usar Google Sheets: los casos donde Excel es claramente superior (modelos complejos con VBA, datasets grandes, Power Query, Power Pivot), los casos donde Google Sheets gana (colaboración en tiempo real, integración con otras herramientas de Google Workspace, acceso desde cualquier dispositivo sin licencia) y los escenarios híbridos donde usas ambas herramientas para sacar lo mejor de cada una.

Quiero funciones y código concretos, no solo descripciones de lo que es posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Automatizar y profesionalizar el trabajo financiero con Excel y Google Sheets',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Herramientas de gestión de asuntos legales (Matter Management)',
                'description'      => 'Usa la tecnología para gestionar la cartera de asuntos jurídicos: las plataformas de matter management, la gestión de plazos y el control del trabajo de los abogados que hace que el departamento jurídico opere de forma más eficiente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director jurídico (General Counsel) con experiencia implementando sistemas de gestión de asuntos legales en departamentos jurídicos corporativos de entre 5 y 30 abogados internos, con conocimiento de las plataformas disponibles en el mercado y de los factores que determinan el éxito o el fracaso de estas implementaciones. Voy a explorar contigo cómo usar la tecnología para gestionar de forma eficiente la cartera de asuntos del departamento jurídico.

Mi contexto: [describe tu departamento: número de abogados internos, tipos de asuntos más frecuentes (contratos, litigios, compliance, M&A), cómo gestionas actualmente los asuntos (email, Excel, algún sistema específico) y los principales problemas operativos que quieres resolver]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué el matter management importa y cuándo implementarlo**
Muchos departamentos jurídicos gestionan sus asuntos en carpetas de email y hojas de Excel hasta que la complejidad supera lo que estos sistemas pueden manejar. Explícame los síntomas de que un departamento necesita un sistema de matter management: la falta de visibilidad sobre la carga de trabajo del equipo, los plazos que se pierden porque nadie los tiene centralizados, la incapacidad de responder preguntas básicas (¿cuántos asuntos activos tenemos? ¿cuánto estamos gastando en externos este trimestre?), y el momento correcto para dar el paso a una plataforma dedicada.

**2. Las plataformas de matter management: panorama del mercado**
El mercado de software jurídico tiene opciones para todos los tamaños y presupuestos. Explícame las principales plataformas y su posicionamiento: los sistemas enterprise para departamentos jurídicos grandes (TeamConnect, Mitratech, BrightFlag), las soluciones mid-market (Clio for in-house, SimpleLegal, Brightflag), las herramientas más ligeras que parten de plataformas generales (Monday.com configurado para legal, Notion con estructura jurídica) y cómo decidir qué nivel de plataforma necesita tu departamento según el volumen de asuntos, el presupuesto y las integraciones requeridas.

**3. La gestión de plazos y calendario jurídico**
Los plazos son el activo más crítico de un departamento jurídico y el que mayor riesgo de responsabilidad genera si se incumple. Explícame cómo construir el sistema de gestión de plazos: los tipos de plazos que el sistema debe rastrear (plazos procesales, plazos contractuales, plazos regulatorios, fechas de vencimiento de contratos), el sistema de alertas y recordatorios (cuánto antes alertar según el tipo y la criticidad del plazo), el proceso de validación de plazos con los abogados externos cuando el asunto involucra un despacho externo y cómo integrar el calendario de plazos jurídicos con el calendario corporativo.

**4. El control del gasto en despachos externos (Outside Counsel Management)**
El gasto en abogados externos es para la mayoría de los departamentos jurídicos la partida de gasto más grande y la menos controlada. Propón el sistema de control del gasto externo: la gestión de las tarifas y los rate cards de cada despacho, el proceso de pre-aprobación para la asignación de nuevos asuntos a externos, los e-billing y la revisión de facturas (cómo detectar el billing abusivo sin revisar cada línea manualmente), los dashboards de gasto por despacho, por tipo de asunto y por período, y el proceso de evaluación periódica de los despachos externos basado en datos.

**5. El reporting jurídico para el consejo y la dirección**
El General Counsel necesita demostrar el valor del departamento jurídico en términos que el negocio entienda. Explícame cómo construir el reporting del departamento jurídico: las métricas que demuestran el valor del departamento (asuntos resueltos, ahorro vs. coste de externalizar, tiempo de respuesta a los clientes internos), los dashboards de gestión que el CEO y el CFO usan para entender la actividad jurídica de la empresa, el informe trimestral al consejo de administración sobre el estado de los litigios relevantes y el proceso de documentación de las decisiones jurídicas significativas para el corporate memory.

**6. La implementación: de la hoja de Excel al sistema de matter management**
La migración a un sistema de matter management es una de las implementaciones tecnológicas más complejas para un departamento jurídico. Propón el plan de implementación: el proceso de limpieza y migración de datos existentes (cómo inventariar los asuntos actuales), la configuración del sistema que refleja el proceso de trabajo del departamento (los estados de los asuntos, los tipos de materia, la estructura de roles), el plan de formación del equipo jurídico que tiene poca tolerancia a las herramientas que interrumpen su flujo de trabajo y los criterios para medir el éxito de la implementación a los seis meses.

Quiero honestidad sobre las implementaciones que fracasan y por qué, no solo el escenario optimista del vendor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar un sistema de matter management para gestionar la cartera de asuntos jurídicos',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gainsight, Planhat o ChurnZero: dominar la plataforma de CS',
                'description'      => 'Implementa y optimiza la plataforma de customer success: la configuración del health score, los playbooks automatizados y el reporting que da visibilidad sobre la cartera de clientes y el rendimiento del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success Operations con experiencia profunda implementando y optimizando plataformas de CS en empresas SaaS B2B, con conocimiento práctico de Gainsight, Planhat y ChurnZero y de los factores que determinan si una implementación genera ROI o se convierte en una herramienta cara que nadie usa bien. Voy a explorar contigo cómo sacar el máximo partido a la plataforma de customer success.

Mi contexto: [describe tu situación: plataforma que usas o evalúas, fase de implementación (nueva implementación, optimización de una existente), tamaño del equipo de CS, número de cuentas gestionadas y los principales problemas operativos que quieres resolver]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los fundamentos de la arquitectura de la plataforma de CS**
Una plataforma de CS mal configurada desde la base genera más trabajo del que ahorra. Explícame las decisiones arquitectónicas que hay que tomar antes de configurar nada: el modelo de datos (cómo mapear las entidades de negocio —empresa, contrato, usuario— al modelo de datos de la plataforma), la estrategia de integración (qué datos deben fluir desde el CRM, el producto y el sistema de facturación, y con qué frecuencia), la segmentación de la cartera (cómo dividir los clientes en segmentos que determinan el modelo de cobertura del equipo) y el modelo de ownership de cuentas que determina cómo se asignan los clientes a los CSMs.

**2. El health score: diseño y calibración**
El health score es la feature más visible de la plataforma y la que más fácil es hacer mal. Guíame por el proceso de diseño de un health score que predice el churn con suficiente anticipación para intervenir: las dimensiones que lo componen (adopción del producto, engagement con el equipo, indicadores comerciales, NPS o CSAT), cómo definir las métricas concretas de cada dimensión (la diferencia entre una métrica de uso que importa y una que no predice nada), cómo asignar los pesos iniciales y el proceso de calibración iterativa que ajusta el modelo cuando los datos muestran que no predice bien el churn real.

**3. Los playbooks: automatizar la cobertura de cuentas**
Los playbooks son la forma en que la plataforma convierte la estrategia de CS en acciones sistemáticas del equipo. Explícame cómo diseñar e implementar los playbooks más impactantes: el playbook de onboarding (las tareas automatizadas que guían al CSM en los primeros 90 días del cliente), el playbook de riesgo (las acciones que se disparan cuando el health score cae por debajo del umbral), el playbook de renovación (el proceso de revisión del contrato con suficiente antelación para gestionar expansiones y evitar sorpresas) y el playbook de QBR (las tareas de preparación de la reunión trimestral de negocio). Dame la estructura concreta de cada playbook.

**4. El reporting y los dashboards de CS**
La plataforma de CS debe dar visibilidad sobre la cartera de clientes y el rendimiento del equipo. Propón la arquitectura de reporting: el dashboard de portfolio health (la vista del director de CS sobre el estado de toda la cartera), el dashboard del CSM individual (su cartera personal, los clientes en riesgo y las tareas pendientes), el forecast de renovaciones (cómo la plataforma predice los ingresos de renovación del próximo trimestre) y los reports de análisis de churn (el análisis de por qué se van los clientes que abandona la empresa y qué podría haberse hecho de forma diferente).

**5. La adopción de la plataforma por el equipo de CS**
La plataforma más sofisticada falla si los CSMs no la usan. Dame estrategias para la adopción real: cómo diseñar el flujo de trabajo del CSM dentro de la plataforma para que sea la forma más eficiente de gestionar su trabajo (en lugar de una tarea adicional que completa a regañadientes), cómo construir el onboarding de nuevos CSMs en la plataforma para que la adopten desde el primer día, cómo gestionar la resistencia de los CSMs experimentados que tienen sus propias formas de gestionar su cartera y cómo medir si la adopción es real (calidad de los datos de la plataforma como proxy de uso).

**6. La evolución de la plataforma: madurez progresiva**
Una implementación de plataforma de CS no termina en el go-live: evoluciona a medida que el equipo madura. Explícame el modelo de madurez de la implementación: la fase de estabilización (los primeros 6 meses, donde el objetivo es que el equipo use la plataforma y los datos sean fiables), la fase de optimización (6-18 meses, donde se refina el health score, se añaden playbooks más sofisticados y se mejora el reporting), la fase de avanzada (más de 18 meses, donde se usan las capacidades predictivas de la plataforma y se integra con el proceso de ventas para identificar oportunidades de expansión) y las señales de que la implementación se ha estancado y necesita una revisión.

Quiero configuraciones y estructuras de playbooks concretos, no solo descripciones de lo que es posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar y optimizar la plataforma de customer success para gestionar la cartera de clientes',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El stack de herramientas del freelance organizado',
                'description'      => 'Las herramientas que el freelance usa para gestionar su negocio: el gestor de proyectos, el tracker de tiempo, la facturación y el CRM ligero que mantiene el pipeline bajo control sin dedicar más tiempo a la gestión que al trabajo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance experimentado con más de 8 años gestionando un negocio independiente próspero, con conocimiento profundo de las herramientas disponibles para freelancers y del error de convertir la gestión del negocio en un trabajo a tiempo completo en lugar de un sistema que funciona con mínima fricción. Voy a explorar contigo cómo construir el stack de herramientas del freelance organizado.

Mi contexto: [describe tu situación: tipo de servicio que ofreces, volumen de clientes activos simultáneamente, si trabajas solo o con colaboradores, y cuáles son tus principales problemas de gestión (seguimiento de proyectos, facturación tardía, pipeline olvidado, horas no registradas)]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del stack de herramientas del freelance**
El freelance puede caer en la trampa de dedicar más tiempo a gestionar herramientas que a trabajar. Explícame los principios que guían la elección del stack correcto: la mínima fricción como criterio principal (una herramienta que no usas cuando estás ocupado no cuenta), la integración entre herramientas para evitar el trabajo de actualización manual, el presupuesto realista para las herramientas (el porcentaje de facturación que tiene sentido invertir en operaciones), y la señal de que el stack actual no funciona y necesita simplificarse, no complejizarse.

**2. La gestión de proyectos: del brief a la entrega**
El freelance necesita un sistema para gestionar el trabajo activo de sus clientes sin que nada se pierda. Explícame las opciones para la gestión de proyectos del freelance: las herramientas específicas para freelancers (Notion, Trello, Asana en su versión gratuita) vs. las que tienen features específicas de gestión de clientes (HoneyBook, Dubsado, 17hats), cómo estructurar el tablero de proyectos para que el freelance tenga visibilidad sobre todo el trabajo activo de un vistazo, y el proceso de onboarding de nuevos proyectos que pone en marcha el trabajo de forma sistemática sin requerir invención cada vez.

**3. El tracking de tiempo: registrar sin que sea una carga**
El tiempo no registrado es dinero perdido. El tracking tedioso es un sistema que se abandona. Explícame las herramientas de tracking de tiempo que funcionan para freelancers (Toggl Track, Clockify, Harvest, RescueTime) y cómo configurarlas para que registrar el tiempo sea tan fácil que se convierta en un hábito: los shortcuts de teclado, la integración con el gestor de proyectos, el timer que se arranca al abrir un archivo del proyecto y las revisiones semanales que sirven tanto para la facturación como para entender cómo se distribuye el tiempo entre clientes y tipos de trabajo.

**4. La facturación que cobra a tiempo**
El freelance que no cobra a tiempo tiene un problema de flujo de caja que no es técnico, es de proceso. Guíame por el sistema de facturación: las herramientas de facturación para freelancers (Invoice Ninja, Wave, Holded, FreshBooks) con sus pros y contras reales, el proceso de generación de facturas desde el tracking de tiempo, los recordatorios automáticos de pago que eliminan las conversaciones incómodas sobre facturas vencidas, las condiciones de pago en los contratos que reducen los retrasos y cómo gestionar los clientes que cronicamente pagan tarde sin romper la relación.

**5. El CRM ligero para el pipeline del freelance**
El freelance sin gestión del pipeline vive en una montaña rusa de ingresos: meses sobrecargados seguidos de meses sin trabajo. Explícame el CRM mínimo viable para el freelance: las herramientas que ofrecen CRM sin complejidad enterprise (Notion como CRM con plantilla, Pipedrive en su versión básica, HoneyBook), cómo estructurar el pipeline para capturar los leads, las conversaciones activas y las propuestas enviadas, el ritual semanal de revisión del pipeline que tarda 15 minutos y evita que ningún lead se enfríe por olvido y el sistema de seguimiento de clientes anteriores para las oportunidades de repetición y referidos.

**6. La automatización: el stack que trabaja mientras tú trabajas**
El freelance organizado automatiza las tareas repetitivas de gestión de negocio. Propón las automatizaciones más impactantes para el stack del freelance: el recordatorio automático cuando se acerca el vencimiento de una factura, la plantilla de propuesta que se genera con los datos del proyecto en segundos, el contrato digital que el cliente firma online sin que el freelance tenga que imprimir nada (DocuSign, HelloSign, las herramientas de contrato integradas en HoneyBook o Dubsado), el email de seguimiento de proyecto que informa al cliente del progreso sin que el freelance tenga que escribirlo cada vez, y las integraciones de Zapier o Make que conectan las herramientas que no se integran de forma nativa.

Quiero recomendaciones concretas de herramientas con sus precios reales y el razonamiento de cuándo vale la pena pagar por una versión premium.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir el stack de herramientas que gestiona el negocio freelance con mínima fricción',
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
