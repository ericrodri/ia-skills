<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills191Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'MarTech stack: construir y gestionar el stack de marketing',
                'description'      => 'Diseña el stack tecnológico de marketing: selección de herramientas, integración y principios que evitan el vendor lock-in y mantienen la agilidad del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing operations con experiencia diseñando y gestionando stacks tecnológicos de marketing en empresas B2B SaaS en distintas etapas de crecimiento. Voy a explorar contigo cómo construir y gestionar el MarTech stack de una empresa.

Mi contexto: [describe la situación de tu empresa: etapa, volumen de leads, canales de marketing activos y stack tecnológico actual si lo hay]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del MarTech stack bien diseñado**
Un stack de marketing puede convertirse en un laberinto de herramientas desconectadas que consumen presupuesto y tiempo sin entregar valor. Explícame los principios que guían el diseño de un buen stack: la integración como prioridad desde el primer día, la diferencia entre herramientas de sistema (core, indispensables) y herramientas de experimento (que se prueban y se abandonan), y cómo evitar el vendor lock-in que te obliga a quedarte con una herramienta aunque haya opciones mejores.

**2. Las capas del stack de marketing**
El stack de marketing moderno tiene capas distintas con funciones diferentes. Explícame cada capa y las opciones más relevantes en cada una: la capa de datos (CDP, DMP, first-party data), la capa de engagement (email, marketing automation, CRM de marketing), la capa de publicidad (gestión de paid media, attribution), la capa de contenido (CMS, DAM, SEO tools) y la capa de análisis (web analytics, BI, reporting).

Para cada capa, dame los criterios de selección y las señales de que has elegido mal.

**3. La hoja de ruta de implementación**
Implementar todo a la vez es la receta del caos. Propón una hoja de ruta de construcción del stack en fases: qué herramientas poner en pie primero (las que desbloquean al resto), cuál es el orden lógico de implementación y cómo evitar los cuellos de botella que ocurren cuando un equipo espera meses para tener las herramientas que necesita.

Incluye cuánto tiempo realista lleva implementar un stack de marketing desde cero en una empresa de 50-200 personas.

**4. La integración como ventaja competitiva**
Un stack de herramientas desconectadas produce datos inconsistentes, trabajo duplicado y una vista fragmentada del cliente. Explícame cómo diseñar la arquitectura de integración del stack: el rol del CRM como fuente de verdad, cómo conectar las herramientas de forma que los datos fluyan sin fricciones y las señales de alarma de que la integración está fallando.

**5. Gestionar el stack y controlar los costes**
El stack de marketing tiende a crecer sin control. Propón un proceso de governance del stack: la revisión trimestral de herramientas (qué se usa, qué no, qué duplica funcionalidad), cómo negociar con los vendors para optimizar costes y el proceso de descomisionado de herramientas cuando llega el momento de reemplazarlas.

**6. Construir capacidades internas vs. depender de vendors**
Hay capacidades de marketing que vale la pena desarrollar internamente y otras que es mejor comprar. Dame el framework para tomar esta decisión: qué criterios distinguen las capacidades core (que deben estar in-house) de las que conviene externalizar, y cómo evitar la trampa de volverse demasiado dependiente de un vendor para algo crítico.

Quiero recomendaciones concretas de herramientas para distintas etapas y presupuestos, no solo teoría de arquitectura.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar y gestionar el stack tecnológico de marketing de forma estratégica',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Developer tools: producto para developers',
                'description'      => 'Construye productos cuyo usuario es un developer: las particularidades del developer journey, lo que diferencia una buena DX de una mala y cómo medir la adopción en este segmento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en developer tools con experiencia en empresas que construyen APIs, SDKs, plataformas de infraestructura y herramientas de productividad para ingenieros. Voy a explorar contigo las particularidades de construir producto para developers.

Mi contexto: [describe tu producto: qué construyes, quién es tu usuario developer (frontend, backend, devops, data engineer) y en qué etapa estás]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El developer como usuario: lo que lo hace diferente**
Los developers son usuarios exigentes, escépticos y con mucho poder de decisión. Explícame qué hace al developer un usuario distinto del usuario de negocio: la importancia de la credibilidad técnica, la baja tolerancia a la fricción en el onboarding, la tendencia a evaluar el producto antes de comprometerse y el rol de la comunidad en la adopción.

Incluye los errores más comunes que cometen los PMs que no tienen background técnico al construir developer tools.

**2. El developer journey: de descubrimiento a producción**
El journey del developer tiene etapas muy específicas: descubrir la herramienta, evaluarla (el famoso "time to hello world"), integrarla en un proyecto real, llevarlo a producción y defenderla ante su equipo. Explícame qué necesita el developer en cada etapa, dónde se rompe el journey con más frecuencia y cómo diseñar la experiencia para que cada etapa fluya sin fricción.

**3. Developer Experience (DX) como ventaja competitiva**
La DX no es solo buena documentación. Es el conjunto de decisiones de diseño que hacen que trabajar con tu producto sea productivo y agradable. Explícame los componentes de una DX de primera clase: la consistencia y predictibilidad de la API, los mensajes de error que ayudan en lugar de confundir, los SDKs que se sienten idiomáticos en cada lenguaje y los ejemplos de código que funcionan desde la primera ejecución.

**4. La documentación como producto**
Para un developer tool, la documentación es tan importante como el producto mismo. Guíame para construir la documentación que los developers realmente usan: la diferencia entre tutoriales (cómo hacer X), how-to guides (cómo hacer X en mi contexto), reference (qué hace cada método) y explanations (por qué está diseñado así). El proceso de mantener la documentación actualizada sin que se convierta en una carga insoportable.

**5. Métricas de adopción en developer tools**
Medir la adopción de un developer tool es diferente a medir la de un SaaS B2B convencional. Propón el sistema de métricas que usaría para un developer tool: el funnel de activación (sign-up, first API call, first successful integration, production deployment), las métricas de health del ecosistema (número de proyectos activos, diversidad de use cases) y los indicadores tempranos de churn técnico.

**6. Construir comunidad alrededor del producto**
Los mejores developer tools tienen una comunidad activa que contribuye, evangeliza y genera el contenido que atrae a nuevos usuarios. Explícame cómo construir comunidad alrededor de un developer tool: el rol de GitHub (estrellitas, issues, PRs como señal de adopción), el Discord o Slack de comunidad, los developer advocates y los programas de early access que convierten a los usuarios más comprometidos en aliados.

Quiero ejemplos concretos de developer tools que lo hacen bien y mal, y el razonamiento detrás de cada decisión de diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir productos y experiencias para usuarios que son developers',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design systems como producto',
                'description'      => 'El design system es un producto interno con sus propios usuarios: roadmap, governance, proceso de contribución y métricas que demuestran el impacto de la inversión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design systems lead con experiencia construyendo y manteniendo sistemas de diseño en empresas tech con múltiples productos y equipos de diseño e ingeniería distribuidos. Voy a explorar contigo cómo gestionar el design system como un producto interno.

Mi contexto: [describe tu situación: design system inexistente que quieres crear, sistema existente que quieres mejorar o escalar, o diseñador que quiere convencer a su empresa de invertir en un sistema]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El design system como producto, no como proyecto**
La mayoría de los design systems fracasan porque se tratan como un proyecto (se construyen y se abandonan) en lugar de como un producto (evolucionan continuamente con las necesidades de sus usuarios). Explícame qué significa aplicar el pensamiento de producto a un sistema de diseño: quiénes son los usuarios internos, qué necesidades tienen, cómo se recopila feedback y cómo se prioriza el backlog del sistema.

**2. La estructura del design system**
Un design system bien construido tiene capas distintas. Explícame la arquitectura de un sistema maduro: los tokens de diseño (colores, tipografía, espaciado, sombras), los componentes primitivos (botones, inputs, iconos), los componentes compuestos (formularios, modales, tablas) y los patrones de página (layouts, navegación, formularios complejos). Cómo decidir qué vive en cada capa y cuándo un componente está listo para entrar al sistema.

**3. Governance y proceso de contribución**
Un design system sin governance se convierte en un cementerio de componentes contradictorios. Propón un modelo de governance: quién puede proponer nuevos componentes, cuál es el proceso de revisión, cómo se toman las decisiones cuando hay desacuerdo sobre el diseño de un componente y cómo se deprecan los componentes que han quedado obsoletos.

Incluye el proceso de contribución que hace que los equipos de producto quieran aportar al sistema en lugar de crear soluciones paralelas.

**4. La roadmap del design system**
El design system tiene su propia roadmap, pero esta debe estar alineada con las necesidades de los productos que lo usan. Explícame cómo priorizar la roadmap del sistema: los criterios para decidir qué componente construir a continuación, cómo balancear las peticiones urgentes de los equipos con la deuda técnica acumulada y cómo comunicar la roadmap a los stakeholders de diseño e ingeniería.

**5. Métricas de impacto del design system**
El design system es una inversión que debe demostrar su valor. Propón un sistema de métricas que demuestre el impacto: las métricas de adopción (porcentaje de componentes del sistema vs. componentes custom en producción), las métricas de eficiencia (tiempo de desarrollo de nuevas features, velocidad del diseño), las métricas de consistencia (variaciones visuales no intencionadas) y las métricas de deuda técnica (número de componentes obsoletos).

**6. Herramientas y stack tecnológico del design system**
El design system moderno existe tanto en Figma como en código. Explícame el stack tecnológico de un design system maduro: las herramientas de diseño (Figma tokens, variables), las herramientas de código (Storybook, los distintos frameworks de componentes), las herramientas de documentación y el flujo de trabajo que mantiene Figma y el código sincronizados sin trabajo duplicado.

Quiero ejemplos concretos de decisiones difíciles en la gestión de design systems y cómo las resolverías.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar el design system como producto interno con impacto medible',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales tools: el stack tecnológico de ventas',
                'description'      => 'Diseña el stack de la organización comercial: CRM, engagement, enablement e inteligencia conversacional con criterios que maximizan la adopción y el ROI.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un revenue operations manager con experiencia diseñando e implementando stacks tecnológicos de ventas en empresas SaaS B2B con equipos comerciales de 10 a 100 personas. Voy a explorar contigo cómo construir el stack tecnológico de una organización de ventas.

Mi contexto: [describe la situación: etapa de la empresa, tamaño del equipo de ventas, tipo de venta (inside sales, field sales, PLG), y stack actual si lo hay]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del stack de ventas bien diseñado**
Un stack de ventas puede convertirse en un obstáculo para los vendedores en lugar de una ventaja. Explícame los principios que guían el diseño de un buen stack: la adopción como métrica principal (un stack que los vendedores no usan no existe), la integración como imperativo (datos que fluyen entre herramientas sin trabajo manual) y la simplicidad como virtud (cada herramienta añadida es fricción para el vendedor).

**2. Las capas del stack de ventas**
El stack comercial moderno tiene capas distintas con funciones complementarias. Explícame cada capa en detalle: el CRM como sistema de registro (Salesforce, HubSpot, Pipedrive y cuándo usar cada uno), las herramientas de sales engagement para la prospección outbound (Outreach, Salesloft), las herramientas de inteligencia de mercado y enriquecimiento de datos (Apollo, ZoomInfo, Clearbit), las de sales enablement (Highspot, Seismic) y las de inteligencia conversacional (Gong, Chorus).

Para cada capa, dame los criterios de selección y cuándo tiene sentido añadirla según la etapa de la empresa.

**3. El CRM como fuente de verdad**
El CRM es el centro del stack de ventas y la fuente de verdad del pipeline. Explícame cómo diseñar el CRM para que sea útil para los vendedores y no solo para los managers: el diseño de los stages del pipeline que refleja la realidad de tu proceso de ventas, los campos obligatorios vs. opcionales y cómo evitar que el CRM se convierta en un repositorio de datos obsoletos que nadie confía.

**4. La hoja de ruta de implementación**
Implementar todas las herramientas a la vez es la receta del caos y el fracaso de adopción. Propón la hoja de ruta de construcción del stack en fases: qué poner en pie primero, cuándo añadir cada capa y cómo gestionar la transición cuando se reemplaza una herramienta existente sin romper el flujo de trabajo del equipo.

**5. Adopción: el problema que destruye más stacks de ventas**
El mejor stack del mundo no sirve de nada si los vendedores no lo usan. Dame estrategias para maximizar la adopción: cómo involucrar al equipo de ventas en la selección de herramientas, cómo diseñar el proceso de onboarding de nuevas herramientas, cómo gestionar la resistencia al cambio y cómo medir si la adopción es real (no solo si están logados).

**6. ROI y governance del stack de ventas**
El stack de ventas es una inversión significativa que debe justificarse. Propón un framework para calcular el ROI del stack y para tomar decisiones de renovación o reemplazo: las métricas que demuestran el valor de cada herramienta, el proceso de revisión periódica del stack y cómo negociar con vendors para optimizar el gasto.

Quiero recomendaciones específicas de herramientas para distintas etapas y tamaños de equipo, con el razonamiento detrás de cada recomendación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el stack tecnológico de la organización comercial para maximizar la adopción y el ROI',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Plataformas B2B: producto para empresas',
                'description'      => 'Las particularidades de construir un producto que usan grandes empresas: permisos, integraciones enterprise, compliance y el balance entre personalización y estandarización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia construyendo plataformas B2B enterprise, con conocimiento profundo de los requerimientos de grandes organizaciones y de los trade-offs que distinguen el producto enterprise del producto SMB o PLG. Voy a explorar contigo las particularidades de construir producto para empresas.

Mi contexto: [describe tu producto: en qué etapa está, qué tipo de empresa cliente tienes (mid-market, enterprise, ambos) y cuáles son tus principales retos actuales]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Lo que hace diferente al producto enterprise**
El producto enterprise no es un producto SMB con más features: es un producto diseñado desde sus fundamentos para las necesidades de las grandes organizaciones. Explícame las dimensiones que hacen diferente al producto enterprise: la complejidad de los permisos y roles (RBAC), la necesidad de auditoría y trazabilidad, los requerimientos de SLA y disponibilidad y la forma en que las decisiones de compra se toman por comités y no por individuos.

**2. La arquitectura de permisos enterprise**
Los permisos son la feature más subestimada del producto enterprise. Explícame cómo diseñar un sistema de permisos que satisfaga las necesidades de las grandes organizaciones: el role-based access control (RBAC) como mínimo, el attribute-based access control (ABAC) para los casos más complejos, la delegación de administración a admins del cliente y los casos de uso de multi-tenant que aparecen inevitablemente en productos B2B.

**3. Las integraciones enterprise**
El producto enterprise vive en un ecosistema de herramientas existentes con las que debe integrarse. Guíame por las integraciones que los clientes enterprise siempre piden: SSO y SCIM para la gestión de identidades, las integraciones con el stack de datos (Salesforce, SAP, workday), las APIs que permiten integraciones custom y la estrategia de marketplace de integraciones.

Incluye cómo priorizar el roadmap de integraciones cuando cada cliente enterprise pide algo diferente.

**4. Compliance y seguridad como features de producto**
Para un cliente enterprise, el compliance no es negociable. Explícame qué certificaciones y estándares de seguridad son esperados (SOC 2, ISO 27001, GDPR, HIPAA si aplica), cómo construir el producto para que cumplir estos estándares sea posible desde la arquitectura y cómo el compliance se convierte en un argumento comercial en el ciclo de venta enterprise.

**5. El balance entre personalización y estandarización**
Cada cliente enterprise quiere que el producto se adapte perfectamente a su forma de trabajar. Pero demasiada personalización convierte el producto en un proyecto de consultoría. Dame el framework para decidir qué personalizar (configuration) y qué estandarizar (el core del producto), cómo diseñar la flexibilidad que satisface a los clientes enterprise sin crear deuda técnica y cómo gestionar los feature requests de clientes grandes que solo benefician a ese cliente.

**6. El ciclo de ventas enterprise y su impacto en el producto**
El ciclo de ventas enterprise dura meses e involucra security reviews, RFPs y pruebas de concepto. Explícame cómo el PM de un producto enterprise colabora con el equipo de ventas durante el ciclo: el rol del PM en las demos enterprise, cómo gestionar los requests de customización durante el proceso de venta y cómo el feedback de las ventas perdidas mejora el producto.

Quiero ejemplos concretos de decisiones de producto enterprise y los trade-offs que implican. Franqueza sobre lo difícil que es servir al cliente enterprise sin sacrificar el resto del mercado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir plataformas B2B que satisfacen los requerimientos de clientes enterprise',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR tech: el stack de personas',
                'description'      => 'Diseña el ecosistema tecnológico de recursos humanos: HRIS, ATS, LMS y herramientas de employee experience que forman la columna vertebral de la función de personas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de people operations con experiencia diseñando e implementando ecosistemas tecnológicos de RRHH en empresas tech en crecimiento, desde las primeras herramientas de una startup hasta los sistemas consolidados de una empresa de 500+ personas. Voy a explorar contigo cómo construir el stack tecnológico de la función de personas.

Mi contexto: [describe la situación de tu empresa: etapa, número de empleados, stack actual de RRHH si lo hay, y principales dolores en la gestión de personas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del stack de RRHH bien diseñado**
El stack de personas puede convertirse en un conjunto de herramientas desconectadas que generan más trabajo administrativo del que ahorran. Explícame los principios que guían el diseño de un buen ecosistema de RRHH: la experiencia del empleado como prioridad (el stack que los managers y empleados usan con gusto), la integración entre sistemas (datos de empleados que fluyen sin trabajo manual) y la escalabilidad (herramientas que siguen funcionando cuando la empresa triplica su tamaño).

**2. Las capas del stack de personas**
El ecosistema tecnológico de RRHH tiene capas distintas con funciones complementarias. Explícame cada capa en detalle y las opciones más relevantes: el HRIS como sistema de registro (Workday, BambooHR, HiBob, Personio y cuándo usar cada uno), el ATS para la atracción y selección de talento (Greenhouse, Lever, Workable), el LMS para el desarrollo y la formación, las herramientas de performance management y feedback continuo, y las plataformas de employee engagement y encuestas de clima.

**3. El HRIS como fuente de verdad del empleado**
El HRIS es el centro de todo el ecosistema de personas. Explícame cómo diseñar y configurar el HRIS para que sea útil: la estructura organizativa que refleja la realidad de la empresa, los datos que deben vivir en el HRIS vs. los que viven en otras herramientas y cómo mantener el HRIS actualizado sin convertirlo en una carga administrativa.

**4. La hoja de ruta de implementación**
Implementar todas las herramientas a la vez es imposible y contraproducente. Propón la hoja de ruta de construcción del stack de personas en fases: qué herramientas son críticas desde los primeros empleados, cuándo añadir cada capa según el tamaño de la empresa y cómo gestionar la transición cuando se migra de una herramienta a otra sin perder datos ni interrumpir los procesos.

**5. Adopción y employee experience digital**
El stack de RRHH que los empleados no usan no existe. Dame estrategias para maximizar la adopción: cómo involucrar a managers y empleados en la selección de herramientas, cómo diseñar el proceso de rollout para que la curva de aprendizaje sea mínima y cómo crear los flujos de trabajo que hacen que usar las herramientas de RRHH sea más fácil que no usarlas.

**6. Datos de personas y toma de decisiones**
El stack de personas genera datos que pueden transformar la forma en que la empresa toma decisiones sobre talento. Explícame cómo construir la capacidad de people analytics sobre el stack existente: las métricas que un director de personas debe poder responder en tiempo real (headcount, time-to-hire, retención por cohorte, distribución de performance), las herramientas de BI que conectan los datos de personas con los de negocio y cómo usar los datos para anticipar problemas de talento antes de que se conviertan en crisis.

Quiero recomendaciones de herramientas concretas para distintas etapas, con el razonamiento detrás de cada elección.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el ecosistema tecnológico de recursos humanos para empresas en crecimiento',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'FinOps: gestión de costes en la nube',
                'description'      => 'La disciplina que une finanzas, tecnología y negocio para optimizar el gasto en cloud: principios, herramientas y proceso de FinOps que puede ahorrar millones a una empresa tech.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un FinOps practitioner certificado con experiencia implementando prácticas de FinOps en empresas tech que gastan entre 100k y 10M anuales en cloud. Voy a explorar contigo cómo implementar FinOps para optimizar el gasto en infraestructura cloud.

Mi contexto: [describe la situación: proveedor cloud principal (AWS, GCP, Azure), gasto mensual aproximado, equipo de ingeniería (tamaño, nivel de consciencia sobre costes) y principales drivers del gasto cloud]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Qué es FinOps y por qué importa**
FinOps no es solo reducir la factura de AWS: es la disciplina que permite a las empresas tomar mejores decisiones sobre el gasto en cloud. Explícame los principios del FinOps Framework: la visibilidad del gasto como punto de partida, la responsabilidad distribuida (engineering es responsable del coste de lo que construye) y el ciclo de madurez FinOps (Inform, Optimize, Operate).

Incluye las señales de que una empresa necesita urgentemente implementar FinOps.

**2. Visibilidad: saber en qué se gasta el dinero**
No puedes optimizar lo que no mides. Guíame por el proceso de obtener visibilidad completa del gasto cloud: la estrategia de etiquetado (tagging) que permite atribuir costes a equipos, productos y entornos, las herramientas de cost explorer del propio proveedor vs. las plataformas de FinOps de terceros (Apptio Cloudability, CloudHealth, CAST AI, Spot.io) y cómo construir el dashboard de costes cloud que el CTO y el CFO usan para tomar decisiones.

**3. Las principales palancas de optimización**
Una vez que tienes visibilidad, puedes optimizar. Explícame las principales palancas de ahorro en cloud: los Reserved Instances y Savings Plans (el balance entre compromiso y flexibilidad), el rightsizing (ajustar el tamaño de las instancias al uso real), el spot instances para cargas de trabajo tolerantes a interrupciones, la eliminación de recursos huérfanos y los ahorros en almacenamiento y transferencia de datos.

Para cada palanca, dame el orden de magnitud de ahorro que se puede esperar y el nivel de riesgo de implementación.

**4. Cultura FinOps: hacer a engineering responsable del coste**
El mayor obstáculo del FinOps no es técnico: es cultural. Los engineers tienden a optimizar por velocidad de desarrollo, no por coste. Dame estrategias para construir la cultura de FinOps: cómo hacer que los equipos de ingeniería se sientan responsables del gasto que generan, cómo gamificar la reducción de costes y cómo crear los incentivos correctos sin crear fricciones en el desarrollo.

**5. El proceso FinOps: rituales y cadencia**
FinOps no es un proyecto de un mes: es un proceso continuo. Propón el sistema de rituales FinOps: la revisión mensual de costes (quién participa, qué se analiza, qué decisiones se toman), las alertas automáticas de gasto anómalo, el proceso de aprobación para nuevos servicios cloud costosos y la planificación del presupuesto cloud para el año siguiente.

**6. FinOps en acción: casos de uso reales**
Dame tres escenarios concretos de optimización FinOps con los pasos detallados de implementación: cómo identificar y eliminar instancias infrautilizadas, cómo convertir el gasto variable en compromisos de Reserved Instances con el nivel de riesgo correcto y cómo implementar una política de auto-scaling que reduzca el gasto en entornos de no-producción fuera del horario laboral.

Quiero números y porcentajes de ahorro realistas, no promesas de marketing. Y quiero ser honesto sobre qué es fácil de implementar y qué requiere un esfuerzo de ingeniería significativo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar FinOps para optimizar el gasto en infraestructura cloud',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'LegalTech: el producto jurídico',
                'description'      => 'Construye o evalúa productos de legal tech: segmentos del mercado legal, necesidades de despachos y departamentos jurídicos y los errores más comunes en el diseño de productos para abogados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en legal tech con experiencia trabajando con despachos de abogados, departamentos jurídicos corporativos y startups de legal tech. Voy a explorar contigo las particularidades de construir o evaluar un producto jurídico.

Mi contexto: [describe tu situación: startup de legal tech que quiere entender mejor a su usuario, despacho que evalúa herramientas de tech, o departamento jurídico que quiere modernizar su operativa]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El mercado de legal tech: segmentos y oportunidades**
El mercado de legal tech está fragmentado en segmentos con necesidades muy distintas. Explícame los principales segmentos: los grandes despachos de abogados (BigLaw) con sus procesos industrializados, los despachos medianos que buscan competir sin los recursos de los grandes, los departamentos jurídicos corporativos con sus necesidades de gestión y los consumidores individuales que necesitan acceso a servicios legales accesibles. Las necesidades, los presupuestos y los procesos de compra de cada segmento.

**2. El usuario legal: lo que hace al abogado un usuario difícil**
El abogado es un usuario con características particulares que hacen el diseño de productos legales especialmente exigente. Explícame qué hace al abogado diferente de otros usuarios profesionales: la aversión al riesgo que genera resistencia a las herramientas nuevas, la importancia de la confidencialidad y la seguridad de los datos, los hábitos de trabajo profundamente arraigados (los abogados senior llevan décadas haciendo las cosas de la misma manera) y el escepticismo hacia la tecnología que no entienden.

**3. Las categorías de productos de legal tech**
El ecosistema de legal tech cubre áreas muy distintas. Explícame las principales categorías: la gestión del despacho (practice management, billing, CRM legal), la automatización de documentos (contract lifecycle management, document assembly), la investigación legal (bases de datos jurídicas, IA para la investigación), el e-discovery y la litigación, y la accesibilidad legal (plataformas de acceso a servicios legales). Para cada categoría, dame los incumbentes establecidos y las startups que están intentando disrumpir.

**4. Los errores más comunes en el diseño de productos para abogados**
Muchas startups de legal tech fracasan porque no entienden realmente a su usuario. Dame los errores más comunes: el over-engineering de features que el abogado no usa, la subestimación de los requerimientos de seguridad y confidencialidad, la falta de integración con las herramientas que el abogado ya usa (Word, Outlook, el dossier físico en algunos casos) y el error de vender al IT en lugar de al abogado que tiene el problema.

**5. IA en el producto legal: oportunidad y límites**
La IA está transformando el sector legal más rápido de lo que el sector esperaba. Explícame los casos de uso de IA en legal tech que ya están funcionando (revisión de contratos, investigación legal, extracción de información de documentos, due diligence) y los que todavía no están listos (el asesoramiento legal autónomo, la representación procesal automatizada). Los límites éticos y regulatorios de la IA en el sector legal y cómo comunicarlos a los clientes.

**6. El proceso de venta y adopción en el sector legal**
Vender a despachos y departamentos jurídicos es notoriamente difícil. Explícame el ciclo de venta típico en legal tech: quién es el decision maker (managing partner, CIO, el abogado que tiene el problema), cómo se evalúan los productos (el rol de los comités de tecnología en los grandes despachos), los criterios que hacen que una herramienta supere la revisión de seguridad y la estrategia de implementación que maximiza la adopción en un entorno donde el cambio genera resistencia.

Quiero ejemplos concretos de productos de legal tech que han tenido éxito y los que han fracasado, con el análisis de por qué.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir o evaluar productos de legal tech con conocimiento profundo del usuario legal',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success platforms',
                'description'      => 'Evalúa, implementa y optimiza las plataformas de CS: Gainsight, ChurnZero, Totango y los criterios de selección que determinan qué plataforma se adapta a cada modelo de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success Operations con experiencia evaluando, implementando y optimizando plataformas de CS en empresas SaaS B2B con distintos modelos de negocio y escala. Voy a explorar contigo cómo elegir e implementar la plataforma de customer success correcta.

Mi contexto: [describe tu situación: evaluando plataformas por primera vez, migrando de una plataforma a otra, o queriendo optimizar la implementación existente. Incluye tamaño del equipo de CS, número de cuentas gestionadas y ACV promedio]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué una plataforma de CS y cuándo es el momento**
Muchos equipos de CS empiezan gestionando las cuentas en Salesforce, hojas de Excel y Slack. Explícame cuándo tiene sentido invertir en una plataforma dedicada de CS: los síntomas de que el equipo necesita una plataforma (información de salud del cliente dispersa, cobertura inconsistente de cuentas, falta de visibilidad del pipeline de renovaciones) y cuándo es demasiado pronto para el gasto.

**2. Las principales plataformas de CS: diferencias y posicionamiento**
El mercado de plataformas de CS tiene varios actores establecidos con posicionamientos distintos. Explícame en detalle las características y el posicionamiento de las principales opciones: Gainsight (el líder del enterprise, potente pero complejo), ChurnZero (el equilibrio entre potencia y facilidad de uso para mid-market), Totango (la flexibilidad del modelo de segmentos), Planhat (el moderno con foco en UX) y Vitally (el nacido para equipos más pequeños).

Para cada plataforma, dame los pros reales, los contras que los vendors nunca mencionan en sus demos y el perfil de cliente para el que es la mejor opción.

**3. Los criterios de selección que importan**
Más allá de las features del marketing, hay criterios que determinan el éxito real de la implementación. Guíame por los criterios de evaluación que uso: la calidad de la integración con el CRM y el producto (¿los datos de uso del producto llegan en tiempo real?), la capacidad de health scoring configurable (¿puedo adaptar el modelo a mi negocio?), la facilidad de adopción por los CSMs (¿lo usarán sin que se los obliguemos?), el soporte durante la implementación y el coste total (licencia + implementation + mantenimiento).

Dame un scorecard de evaluación con pesos relativos para cada criterio.

**4. El proceso de implementación que maximiza el ROI**
La implementación de una plataforma de CS puede durar entre 3 y 9 meses según la complejidad. Explícame cómo diseñar la implementación para que el equipo obtenga valor rápidamente: las decisiones de arquitectura que hay que tomar antes de empezar (el modelo de datos, la estrategia de integración, el health scoring inicial), los quick wins que demuestran el valor de la plataforma en las primeras semanas y los errores de implementación que retrasan el ROI meses.

**5. El health score como corazón de la plataforma**
El health score es la feature más importante de cualquier plataforma de CS. Explícame cómo diseñar un health score que predice el churn con suficiente anticipación para intervenir: las dimensiones que componen el score (adopción del producto, engagement con el equipo de CS, indicadores comerciales, sentiment), los pesos que se asignan a cada dimensión según el modelo de negocio y cómo validar que el score está funcionando (calibración con outcomes reales).

**6. Métricas de éxito de la plataforma de CS**
Cómo saber si la inversión en la plataforma está dando resultados. Propón el framework de medición del ROI de la plataforma: las mejoras en la cobertura de cuentas (porcentaje de cuentas con health score actualizado), la mejora en la retención (GRR y NRR antes y después), la eficiencia del equipo de CS (número de cuentas por CSM) y la calidad del forecast de renovaciones.

Quiero honestidad sobre las frustraciones reales de implementar estas plataformas, no solo la visión optimista del vendor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Seleccionar e implementar la plataforma de customer success correcta para tu modelo de negocio',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Productizar el servicio freelance',
                'description'      => 'Convierte tu servicio en un producto: modelos de productización, beneficios para el cliente y el freelance, y el proceso de transición de proyectos custom a paquetes estándar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en modelos de negocio para freelancers y agencias pequeñas, con experiencia ayudando a profesionales independientes a productizar sus servicios para generar ingresos más predecibles y escalables. Voy a explorar contigo cómo convertir mi servicio freelance en un producto.

Mi contexto: [describe tu servicio actual: qué haces, para quién, cómo estructuras los proyectos actualmente y qué te ha llevado a considerar la productización]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Qué es la productización y por qué funciona**
La productización es el proceso de convertir un servicio custom (donde cada proyecto es diferente) en una oferta estándar (donde el proceso, el entregable y el precio son predecibles). Explícame por qué funciona: los beneficios para el cliente (sabe exactamente qué va a recibir y cuánto va a pagar), los beneficios para el freelance (puede ejecutar más rápido, cobrar más y crear sistemas que escalan) y las limitaciones reales (no todos los servicios se productizanfácilmente, no todos los clientes quieren un paquete estándar).

**2. Los modelos de productización**
Hay varias formas de productizar un servicio. Explícame los modelos principales con sus pros y contras: el servicio empaquetado (un entregable fijo a un precio fijo en un plazo fijo), el sprint o intensive (un bloque de trabajo intensivo de 1-5 días), la retainer productizada (un conjunto de entregables mensuales predefinidos), la suscripción de servicio (acceso mensual a una capacidad o cantidad de horas predefinida) y el curso o infoproducto (la versión escalable sin límite de personas).

Dame ejemplos concretos de cada modelo aplicados a distintos tipos de servicio freelance (diseño, desarrollo, marketing, consultoría).

**3. Cómo diseñar tu oferta productizada**
Diseñar bien el paquete es la diferencia entre una oferta irresistible y una mediocre. Guíame por el proceso de diseño: cómo identificar el subset de tu servicio que se puede estandarizar sin perder valor, cómo definir los entregables con la precisión suficiente para que el cliente sepa qué espera y tú puedas ejecutar sin sorpresas, y cómo establecer los límites del servicio (qué está incluido y qué no) de forma que el cliente lo entienda y lo acepte.

Incluye cómo fijar el precio de la oferta productizada y por qué suele ser posible cobrar más que por el mismo trabajo como proyecto custom.

**4. El proceso de transición: de custom a productizado**
Pasar de proyectos custom a ofertas productizadas no ocurre de un día para otro. Propón la hoja de ruta de transición: cómo hacer el piloto con los primeros clientes del paquete, cómo comunicar el cambio a los clientes existentes que están acostumbrados al modelo custom, cuándo dejar de aceptar proyectos fuera de paquete y cómo gestionar el período de transición en el que tienes ambos modelos activos.

**5. Los sistemas que hacen que la productización funcione**
Una oferta productizada sin sistemas detrás sigue siendo un servicio custom disfrazado. Explícame los sistemas que necesito construir para que la productización sea real: el proceso documentado de entrega que cualquiera podría seguir, las plantillas y herramientas que aceleran la ejecución, el proceso de onboarding del cliente que arranca el proyecto sin llamadas innecesarias y el proceso de entrega y cierre que genera testimonios y referencias.

**6. Escalar la oferta productizada**
La productización te da la base para escalar. Explícame los caminos de escalado desde una oferta productizada: añadir capacidad propia (trabajar más eficientemente en el mismo paquete), subcontratar la entrega (tienes el proceso documentado, otra persona puede ejecutarlo), crear un curso basado en el paquete (la versión DIY para quien no puede pagar el servicio) y crear un SaaS basado en el servicio (la versión totalmente automatizada del proceso).

Quiero honestidad sobre los casos en que la productización no funciona, y los errores más comunes que cometen los freelancers al intentar productizar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Convertir el servicio freelance en una oferta productizada escalable',
                'vote_score'       => 43,
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
