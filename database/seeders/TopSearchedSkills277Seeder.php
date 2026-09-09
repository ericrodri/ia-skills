<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills277Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Martech stack: elegir, implementar y rentabilizar las herramientas de marketing',
                'description'      => 'Guía para construir un ecosistema de herramientas de marketing que funcione de verdad: desde la selección hasta la medición del ROI.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor senior de marketing tecnológico con más de diez años de experiencia ayudando a empresas a construir y optimizar sus stacks de martech. Has trabajado con startups en fase de crecimiento y grandes corporaciones, y sabes perfectamente qué herramientas funcionan, cuáles son un desperdicio de dinero y cómo lograr que el equipo las adopte de verdad.

Voy a darte contexto sobre mi situación actual de marketing y necesito que me ayudes a diseñar o auditar mi stack de martech.

Mi contexto:
- Empresa/sector: [describe tu empresa, sector y modelo de negocio]
- Tamaño del equipo de marketing: [número de personas y roles]
- Presupuesto mensual disponible para herramientas: [rango aproximado]
- Herramientas que ya uso: [lista las que tienes activas]
- Principales canales de adquisición: [SEO, paid, email, social, etc.]
- Mayor frustración con el stack actual: [qué no funciona o qué te falta]
- Objetivo principal en los próximos 6 meses: [leads, retención, awareness, etc.]

Con esta información, necesito que me ayudes en las siguientes áreas:

**1. Auditoría del stack actual**
Analiza las herramientas que ya uso e identifica: duplicidades (dos herramientas que hacen lo mismo), brechas (procesos importantes sin soporte tecnológico), herramientas que probablemente estoy infrautilizando y herramientas que debería eliminar porque no justifican su coste.

**2. Arquitectura recomendada**
Propón una arquitectura de martech organizada por capas:
- Capa de datos: CRM, CDP, fuentes de verdad
- Capa de activación: email, automatización, paid, social
- Capa de análisis: analytics, atribución, reporting
- Capa de contenido: CMS, DAM, herramientas de creación

Para cada capa, recomienda opciones según mi presupuesto con una opción económica, una opción media y una opción avanzada, explicando cuándo tiene sentido cada una.

**3. Plan de implementación por fases**
Diseña un plan de implementación en tres fases de dos meses cada una, priorizando lo que genera más impacto con menos fricción. Para cada fase indica: qué implementar, en qué orden, qué métricas usar para validar que está funcionando y qué errores comunes evitar.

**4. Estrategia de adopción**
El mayor problema del martech no es elegir las herramientas sino que el equipo las use. Propón una estrategia concreta de adopción que incluya: formación inicial, documentación mínima necesaria, métricas de uso para detectar infrautilización y cómo crear hábitos de uso en el equipo.

**5. Medición del ROI del stack**
Diseña un framework para medir si el stack está generando valor real: qué métricas de uso seguir, cómo calcular el coste por funcionalidad usada, cuándo tiene sentido renovar versus cancelar una herramienta y cómo presentar el ROI a dirección para justificar la inversión.

**6. Tendencias y decisiones futuras**
Con el contexto de mi empresa, advísame sobre: qué categorías de herramientas están cambiando rápidamente por la IA y dónde conviene esperar antes de comprometerse, qué integraciones son críticas para el futuro de mi stack y qué señales debo vigilar para saber cuándo es momento de cambiar de plataforma.

Sé directo y específico. Evita recomendaciones genéricas: si me dices que use HubSpot, explícame por qué para mi caso concreto versus la alternativa. Si alguna herramienta popular no tiene sentido para mi situación, dímelo claramente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar o auditar el ecosistema de herramientas de marketing para maximizar ROI y adopción del equipo.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Tech adoption en la empresa: cómo conseguir que la organización adopte nueva tecnología',
                'description'      => 'Framework para liderar la adopción de nuevas tecnologías en equipos y organizaciones, superando la resistencia al cambio con estrategias probadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión del cambio tecnológico y transformación digital con experiencia en empresas de todos los tamaños. Has liderado o asesorado la adopción de tecnologías críticas —desde nuevos IDEs y frameworks hasta cambios de plataforma completos— y sabes que el problema rara vez es técnico: es humano y organizacional.

Necesito tu ayuda para planificar y ejecutar la adopción de una nueva tecnología en mi organización.

Mi situación:
- Tecnología que quiero adoptar: [describe qué es y para qué sirve]
- Contexto organizacional: [tamaño del equipo, cultura, sector]
- Situación actual: [qué están usando ahora y por qué se quiere cambiar]
- Stakeholders clave: [quién tiene poder de decisión, quién más se verá afectado]
- Plazos o restricciones: [si hay alguna fecha límite o condicionante]
- Principal resistencia anticipada: [qué crees que va a frenar la adopción]

Con este contexto, ayúdame a diseñar una estrategia completa de adopción:

**1. Diagnóstico de disposición organizacional**
Antes de lanzar la adopción, necesito entender el terreno. Proporciona un conjunto de preguntas para diagnosticar: el nivel de madurez tecnológica del equipo, los perfiles de adopción presentes (early adopters, escépticos, resistentes), las razones reales detrás de la resistencia anticipada y el capital político disponible para impulsar el cambio.

**2. Diseño del caso de negocio**
Ayúdame a construir un caso de negocio que funcione para diferentes audiencias: para el equipo técnico (beneficios en productividad y calidad), para la dirección (ROI y reducción de riesgos), para los usuarios finales (qué ganan ellos específicamente). El objetivo es que cada grupo vea el cambio como beneficioso para sus propios intereses.

**3. Estrategia de rollout por fases**
Diseña un plan de adopción gradual que minimice el riesgo: cómo seleccionar el grupo piloto ideal, qué métricas usar para declarar el piloto exitoso, cómo escalar de manera controlada y cómo gestionar la coexistencia de la tecnología nueva y la antigua durante la transición.

**4. Gestión de resistencias**
Para cada tipo de resistencia común (miedo a perder el trabajo, curva de aprendizaje, escepticismo sobre la utilidad real, pérdida de control), dame estrategias específicas para abordarlas. Incluye qué decir, qué no decir y cómo convertir a los resistentes en aliados.

**5. Plan de formación y soporte**
Diseña un programa de formación que se adapte a diferentes niveles de habilidad: qué formato funciona mejor para cada perfil, cómo medir si la formación está siendo efectiva, cómo crear una red interna de soporte entre pares y cómo gestionar el período de baja productividad inevitable durante la transición.

**6. Métricas de adopción y éxito**
Define un dashboard de adopción con indicadores en tres niveles: adopción (está la gente usando la tecnología), profundidad (la están usando bien) e impacto (está generando el valor esperado). Incluye cómo recoger feedback continuo y cómo saber cuándo la adopción es suficientemente sólida para dar el siguiente paso.

**7. Plan de consolidación**
La adopción no termina cuando la mayoría usa la herramienta. Explica cómo consolidar el cambio: cuándo y cómo retirar la tecnología anterior, cómo documentar las lecciones aprendidas y cómo usar esta experiencia para mejorar futuras adopciones tecnológicas en la organización.

Quiero respuestas accionables y concretas, no teoría de gestión del cambio genérica. Si hay algo específico de mi situación que cambiaría radicalmente tu recomendación, pregúntamelo antes de responder.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Planificar y ejecutar la adopción de nueva tecnología en equipos y organizaciones superando la resistencia al cambio.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design tools ecosystem: configurar el stack de diseño que escala con el equipo',
                'description'      => 'Cómo construir un ecosistema de herramientas de diseño coherente que mejore la colaboración, la velocidad y la calidad a medida que el equipo crece.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design operations manager con experiencia construyendo ecosistemas de herramientas para equipos de diseño de distintos tamaños y madurez. Conoces en profundidad las herramientas del mercado —Figma, Sketch, Adobe, Framer, Zeplin, Storybook y decenas más— y sabes cuándo cada una tiene sentido y cuándo es un lujo innecesario.

Necesito tu ayuda para diseñar o mejorar el stack de herramientas de mi equipo de diseño.

Mi contexto:
- Tamaño del equipo de diseño: [número de diseñadores y sus especialidades]
- Tipo de proyectos: [producto digital, branding, web, apps, print, etc.]
- Stack actual: [lista las herramientas que ya usan]
- Colaboración con otros equipos: [cómo trabajáis con producto, desarrollo, marketing]
- Mayor fricción actual: [qué ralentiza el trabajo o genera conflictos]
- Presupuesto mensual por persona: [rango aproximado]
- Horizonte de crecimiento del equipo: [planes de contratación en los próximos 12 meses]

Con esta información, ayúdame a diseñar el ecosistema de herramientas ideal:

**1. Auditoría del stack actual**
Analiza las herramientas que ya estoy usando e identifica: solapamientos y duplicidades, brechas en el flujo de trabajo, herramientas que están creando silos en lugar de facilitar la colaboración y oportunidades para simplificar sin perder capacidad.

**2. Arquitectura del ecosistema**
Propón una arquitectura organizada por función: herramientas de exploración y concepto, diseño de interfaz y prototipado, sistema de diseño y componentes, handoff con desarrollo, gestión de assets y archivos, colaboración y feedback, y presentación a stakeholders. Para cada categoría, recomienda la opción principal y una alternativa, con criterios claros para elegir entre ellas.

**3. Sistema de diseño como infraestructura**
El sistema de diseño es el corazón del stack. Diseña una estrategia para: dónde viven los componentes y cómo se versionan, cómo se mantiene sincronizado con el código, quién es responsable de su mantenimiento y cómo se documenta para que cualquier diseñador nuevo pueda usarlo desde el primer día.

**4. Flujos de trabajo y convenciones**
Las herramientas no sirven si no hay convenciones de uso. Define: estructura de archivos y nomenclatura, flujo desde exploración hasta entrega, cómo gestionar versiones y revisiones, y cómo archivar proyectos terminados sin perder el conocimiento.

**5. Colaboración con desarrollo**
El handoff entre diseño y desarrollo es uno de los puntos de mayor fricción. Propón un sistema de colaboración que incluya: qué información necesita desarrollo en cada entrega, cómo sincronizar el sistema de diseño con el sistema de componentes del frontend, cómo gestionar las especificaciones de diseño y cómo resolver discrepancias entre diseño e implementación.

**6. Incorporación de IA al stack**
Las herramientas de IA están cambiando el trabajo de diseño. Evalúa qué herramientas de IA tienen sentido incorporar ahora mismo (generación de imágenes, copilots de diseño, automatización de tareas repetitivas), con qué criterios medirías si están aportando valor real y qué precauciones tomar para no introducir inconsistencias en el sistema de diseño.

**7. Plan de transición**
Si necesito cambiar herramientas o reorganizar el ecosistema, diseña un plan de transición que minimice la interrupción del trabajo del equipo, incluyendo cómo migrar los archivos existentes, cómo formar al equipo en las nuevas herramientas y cómo gestionar el período de coexistencia.

Quiero recomendaciones concretas, no catálogos de herramientas. Si para mi tamaño de equipo no tiene sentido cierta herramienta, dímelo directamente aunque sea popular.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar un ecosistema de herramientas de diseño coherente que escale con el equipo y mejore la colaboración con desarrollo.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales tech stack: CRM, automatización y las herramientas que no se usan',
                'description'      => 'Cómo construir y hacer que el equipo de ventas adopte un stack tecnológico que multiplique la capacidad comercial sin crear burocracia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en revenue operations y sales enablement. Has implementado y optimizado stacks de ventas en empresas B2B de diferentes tamaños, y conoces el problema principal de la tecnología de ventas: los comerciales no la usan. Tu enfoque siempre parte de las necesidades reales del vendedor, no de las funcionalidades del software.

Necesito tu ayuda para diseñar o mejorar el stack tecnológico de mi equipo de ventas.

Mi contexto:
- Tipo de venta: [B2B/B2C, ciclo largo/corto, ticket alto/bajo]
- Tamaño del equipo comercial: [número de vendedores y roles]
- CRM actual y herramientas en uso: [lista lo que ya tenéis]
- Principal problema de adopción: [por qué el equipo no usa las herramientas correctamente]
- Etapas del proceso de ventas: [desde prospección hasta cierre y expansión]
- Presupuesto por comercial al mes: [rango aproximado]
- Mayor cuello de botella en el proceso: [dónde se pierden más oportunidades]

Con este contexto, ayúdame a diseñar el stack y la estrategia de adopción:

**1. Diagnóstico del stack actual**
Analiza lo que ya tenemos e identifica: por qué los comerciales no usan ciertas herramientas (problema de diseño, de formación o de relevancia), qué datos críticos no estamos capturando, qué tareas manuales se podrían automatizar sin quitar autonomía al vendedor y dónde está la mayor pérdida de tiempo en el proceso actual.

**2. Arquitectura del stack por etapa del proceso**
Para cada etapa del embudo de ventas, recomienda las herramientas óptimas: prospección e identificación de leads, contacto inicial y secuencias, gestión de oportunidades y pipeline, preparación y conducción de demos, gestión de propuestas y contratos, cierre y onboarding, y expansión y renovaciones. Justifica cada recomendación con el problema específico que resuelve.

**3. CRM como columna vertebral**
El CRM es el centro del stack, pero también la herramienta más abandonada. Diseña una configuración de CRM que los vendedores quieran usar: qué campos son realmente necesarios (sin exceso de burocracia), qué automatizaciones reducen la carga administrativa, cómo estructurar el pipeline para que refleje la realidad del proceso y cómo hacer que actualizar el CRM sea el camino de mínima resistencia para el vendedor.

**4. Automatización inteligente**
La automatización debe liberar tiempo para vender, no crear dependencias. Define qué automatizar en cada etapa: seguimientos automáticos con personalización, actualización de campos basada en comportamiento, alertas y notificaciones accionables y reporting sin intervención manual. Incluye dónde la automatización puede perjudicar la relación con el cliente y debe evitarse.

**5. Sales intelligence y datos**
Los vendedores toman mejores decisiones con mejores datos. Diseña un sistema de inteligencia de ventas: fuentes de datos sobre prospectos y competidores, señales de compra que vale la pena monitorizar, cómo enriquecer datos de forma eficiente y cómo presentar los datos al vendedor en el momento adecuado sin sobrecargarlo.

**6. Estrategia de adopción para comerciales**
Los comerciales son el colectivo más resistente a los cambios en las herramientas porque su tiempo tiene un coste directo en ventas. Diseña una estrategia de adopción específica para perfiles comerciales: cómo hacer el onboarding, cómo medir el uso sin crear vigilancia contraproducente, cómo convertir a los top performers en champions del stack y cómo gestionar a los resistentes sin generar conflicto.

**7. Métricas de ROI del stack**
Define cómo medir si el stack está generando valor: reducción de tiempo administrativo por vendedor, mejora en tasas de conversión por etapa, velocidad del ciclo de ventas y coste de oportunidad de las herramientas no usadas. Incluye cómo presentar estos datos a dirección para justificar la inversión o para cancelar herramientas que no funcionan.

Sé directo. Si mi stack actual tiene herramientas que son un lujo innecesario para mi tamaño de equipo, dímelo. Si hay algo que muchas empresas compran y casi nadie usa bien, avísame.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un stack de ventas que el equipo comercial adopte de verdad y que multiplique la capacidad de venta sin burocracia.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product tech stack: las herramientas del PM que multiplican la capacidad de análisis',
                'description'      => 'Cómo construir el ecosistema de herramientas de un product manager que permita tomar decisiones más rápidas y mejor fundamentadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en empresas de producto digital que han escalado de startup a empresa mediana. Conoces en profundidad el ecosistema de herramientas de producto —analytics, research, gestión de roadmap, experimentación, gestión de feedback— y sabes cuáles realmente cambian la calidad de las decisiones y cuáles son ruido.

Necesito tu ayuda para diseñar o mejorar mi stack de herramientas como product manager.

Mi contexto:
- Tipo de producto: [B2B/B2C, web/móvil/ambos, descripción breve del producto]
- Tamaño del equipo de producto: [PMs, diseñadores, developers]
- Herramientas que ya uso: [lista completa]
- Mayor limitación actual: [qué decisiones tomas a ciegas o con datos insuficientes]
- Madurez del equipo en datos: [cómo de cómodo es el equipo con SQL, herramientas de analytics, etc.]
- Presupuesto disponible para herramientas de producto: [rango mensual]
- Principal reto en los próximos 6 meses: [discovery, retención, crecimiento, etc.]

Con este contexto, ayúdame a diseñar el stack ideal de product:

**1. Auditoría del stack actual**
Analiza las herramientas que ya uso e identifica: cuáles están infrautilizadas y por qué, cuáles generan duplicación de esfuerzo, qué decisiones importantes estoy tomando sin soporte de datos y qué gaps hay en el flujo de work de discovery a delivery.

**2. Stack por área de trabajo del PM**
Organiza las recomendaciones por las áreas principales de trabajo: discovery y research de usuario, análisis cuantitativo y métricas de producto, gestión del roadmap y priorización, experimentación y A/B testing, gestión de feedback y voz del cliente, comunicación con stakeholders y documentación de decisiones. Para cada área, recomienda la herramienta principal, cuándo tiene sentido añadir una alternativa y qué señales indican que necesitas algo más sofisticado.

**3. Sistema de métricas y analytics**
Las métricas son el corazón del trabajo de producto. Diseña una arquitectura de datos para producto que incluya: qué eventos instrumentar y cómo nombrarlos para que sean sostenibles, cómo construir dashboards que el equipo mire de verdad (no el que nadie abre), cómo conectar métricas de producto con métricas de negocio y cómo compartir datos con stakeholders sin crear dependencias del PM.

**4. Infrastructure de research**
El discovery sin research es intuición disfrazada de estrategia. Diseña una infraestructura de research que incluya: cómo gestionar el panel de usuarios para entrevistas, cómo almacenar y hacer searchable los insights de research, cómo combinar research cualitativo y cuantitativo para tomar decisiones y cómo compartir los aprendizajes con el equipo de forma que impacten en las decisiones.

**5. Experimentación sistemática**
La experimentación es una capacidad organizacional, no solo una herramienta. Explica cómo construir un programa de experimentación: qué herramientas necesitas para A/B testing en tu contexto, cómo diseñar experimentos que aporten aprendizaje real, cómo comunicar resultados al equipo y cómo decidir cuándo un experimento es suficientemente concluyente.

**6. Gestión del roadmap y comunicación**
El roadmap es un artefacto de comunicación tanto como de planificación. Diseña un sistema para: qué herramienta usar para el roadmap y cómo estructurarlo, cómo mantenerlo actualizado sin que sea un segundo trabajo a tiempo completo, cómo adaptarlo a diferentes audiencias y cómo usarlo para alinear al equipo sin crear falsas expectativas.

**7. IA en el stack de producto**
La IA está cambiando el trabajo del PM. Evalúa qué aplicaciones de IA tienen sentido ahora mismo: síntesis de entrevistas, análisis de feedback a escala, generación de hipótesis, análisis de datos sin SQL. Para cada aplicación, indica qué ganas, qué pierdes y qué nivel de verificación humana sigue siendo necesario.

Dame recomendaciones concretas adaptadas a mi etapa y tamaño. No necesito la herramienta más sofisticada del mercado si no tengo la madurez de datos para aprovecharla.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir el ecosistema de herramientas del PM que mejora la calidad de las decisiones de producto con datos y research.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR tech: el stack de RRHH que digitaliza sin deshumanizar',
                'description'      => 'Cómo elegir e implementar tecnología de recursos humanos que mejore la experiencia del empleado y la eficiencia operativa sin perder el toque humano.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de people operations con experiencia transformando departamentos de RRHH tradicionales en equipos centrados en la experiencia del empleado con el apoyo de la tecnología. Has implementado stacks de HR tech en empresas de distintos tamaños y conoces la tensión constante entre eficiencia operativa y conexión humana.

Necesito tu ayuda para diseñar o mejorar el stack tecnológico de mi departamento de RRHH.

Mi contexto:
- Tamaño de la empresa: [número de empleados y si tenéis múltiples sedes]
- Equipo de RRHH: [número de personas y sus roles]
- Herramientas que ya usamos: [lista completa]
- Mayor ineficiencia operativa actual: [qué procesos consumen demasiado tiempo manual]
- Experiencia del empleado: [cuáles son los puntos de fricción que más afectan a la satisfacción]
- Presupuesto por empleado al mes para HR tech: [rango aproximado]
- Reto prioritario en los próximos 12 meses: [crecimiento de plantilla, retención, cultura, cumplimiento, etc.]

Con este contexto, ayúdame a diseñar el stack de HR tech óptimo:

**1. Auditoría del stack actual**
Analiza las herramientas que ya uso e identifica: procesos que siguen siendo manuales a pesar de tener herramienta, herramientas que el empleado no usa o que generan fricción, datos de personas que no estamos capturando y que nos harían falta, y duplicidades entre sistemas que crean inconsistencias.

**2. Core HR como base del stack**
El sistema de gestión de personas es la columna vertebral. Evalúa qué debe hacer el HRIS central: gestión de datos del empleado y su ciclo de vida, nómina e integración con finanzas, cumplimiento legal y documentación, reporting básico de workforce y autoservicio del empleado. Recomienda opciones según el tamaño de mi empresa con criterios claros para elegir entre ellas.

**3. Stack por proceso de HR**
Para cada proceso principal, recomienda las herramientas más adecuadas: atracción de talento y ATS, onboarding y offboarding, gestión del desempeño y feedback, aprendizaje y desarrollo, engagement y clima laboral, compensación total y beneficios, y comunicación interna. Para cada categoría, indica cuándo una funcionalidad dentro del HRIS es suficiente y cuándo merece la pena una herramienta especializada.

**4. People analytics que impactan en el negocio**
La mayoría de los datos de RRHH no se usan para tomar mejores decisiones. Diseña una estrategia de people analytics: qué métricas tienen impacto real en el negocio (más allá de la rotación), cómo construir dashboards que dirección mire de verdad, cómo predecir riesgos de rotación o de bajo rendimiento antes de que sea tarde y cómo presentar datos de personas a dirección sin vulnerar la privacidad.

**5. Experiencia del empleado digital**
La tecnología debe mejorar, no empeorar, la experiencia del empleado. Diseña la experiencia digital del empleado: cómo debe ser el portal del empleado, qué self-services reducen la carga al departamento sin frustrar al empleado, cómo usar la tecnología para momentos importantes del ciclo de vida (bienvenida, ascenso, cambio de rol, salida) y qué procesos nunca deben digitalizarse completamente porque requieren conversación humana.

**6. Automatización de procesos administrativos**
Identifica qué procesos administrativos de RRHH se pueden automatizar sin perder calidad: onboarding paperwork, recordatorios de revisiones de desempeño, gestión de ausencias y vacaciones, informes periódicos para dirección y comunicaciones de ciclo de vida. Para cada automatización, indica el riesgo de hacerla mal y cómo mitigarlo.

**7. Roadmap de implementación y gestión del cambio**
La implementación de HR tech afecta a toda la empresa. Diseña un roadmap que incluya: cómo priorizar qué implementar primero, cómo involucrar a los empleados en el diseño de las nuevas herramientas, cómo comunicar los cambios para que sean bien recibidos y cómo medir si las herramientas están mejorando la experiencia del empleado y la eficiencia del equipo.

Quiero un stack que haga la vida más fácil a los empleados y al equipo de RRHH. Si algo va a crear burocracia adicional o distanciar al equipo de personas de los empleados, dímelo claramente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un ecosistema de HR tech que mejore la experiencia del empleado y la eficiencia operativa de forma equilibrada.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Fintech for corporates: digitalizar el departamento financiero con las herramientas correctas',
                'description'      => 'Guía para modernizar el stack tecnológico de un departamento financiero, desde la contabilidad hasta el forecasting, sin perder control ni cumplimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO experimentado con fondo en transformación digital financiera. Has liderado la modernización de departamentos financieros en empresas medianas y grandes, y conoces los obstáculos reales: la resistencia del equipo, los riesgos de cumplimiento, la integración con sistemas legacy y la presión de dirección por ver resultados rápidos.

Necesito tu ayuda para diseñar o mejorar el stack tecnológico de mi departamento financiero.

Mi contexto:
- Tamaño de la empresa: [facturación aproximada, número de empleados]
- Equipo financiero: [número de personas y roles: contabilidad, controlling, tesorería, etc.]
- Herramientas actuales: [ERP, Excel, software de contabilidad, etc.]
- Mayor ineficiencia: [cómo es el cierre mensual, qué procesos son completamente manuales]
- Necesidades de reporting: [a quién reportáis, con qué frecuencia y qué nivel de detalle]
- Retos de cumplimiento: [auditorías, normativa específica de vuestro sector]
- Presupuesto para digitalización: [rango anual aproximado]

Con este contexto, ayúdame a diseñar la estrategia de digitalización financiera:

**1. Diagnóstico del estado actual**
Analiza el stack actual e identifica: procesos que se hacen en Excel que podrían automatizarse, riesgos de control interno derivados de la situación actual, silos de datos que impiden tener una visión financiera unificada y cuánto tiempo del equipo se va en tareas de consolidación y reconciliación que no aportan valor.

**2. Arquitectura del stack financiero**
Diseña la arquitectura de herramientas por capa: ERP y contabilidad como core, gestión de tesorería y liquidez, gestión de gastos y viajes, cuentas a pagar y a cobrar automatizadas, planificación financiera y forecasting, reporting y business intelligence financiero y cumplimiento y auditoría. Para cada capa, recomienda opciones según mi tamaño de empresa y nivel de complejidad.

**3. Automatización del cierre contable**
El cierre mensual es el gran consumidor de tiempo en los departamentos financieros. Diseña un plan para reducirlo: qué tareas del cierre se pueden automatizar completamente, qué reconciliaciones se pueden hacer en tiempo real en lugar de al final del mes, cómo gestionar las provisiones y ajustes de forma más eficiente y qué nivel de cierre en días es realista para mi situación.

**4. FP&A y forecasting moderno**
La planificación financiera basada en Excel tiene limitaciones críticas de colaboración, control de versiones y velocidad. Diseña la evolución hacia un proceso de FP&A más moderno: qué herramientas tienen sentido para mi tamaño, cómo conectar el modelo financiero con los datos operativos en tiempo real, cómo hacer rolling forecasts en lugar de presupuestos anuales rígidos y cómo presentar escenarios a dirección de forma clara.

**5. Gestión de tesorería y riesgo**
La visibilidad de caja es crítica para cualquier empresa. Diseña un sistema de tesorería que incluya: visibilidad de posición de caja en tiempo real, previsión de tesorería a 13 semanas, gestión de pagos y cobros automatizada, control de riesgo de tipo de cambio si aplica y relación bancaria digital con acceso consolidado a múltiples entidades.

**6. Reporting y business intelligence financiero**
El departamento financiero debe pasar de producir informes a generar insights. Diseña un sistema de reporting que incluya: qué KPIs financieros y operativos combinar para tomar mejores decisiones, cómo hacer que el management pack sea un documento que realmente se lea, cómo democratizar el acceso a datos financieros (con los controles de acceso adecuados) y cómo usar la IA para detectar anomalías y tendencias antes de que se conviertan en problemas.

**7. Gestión del cambio y cumplimiento**
La digitalización financiera tiene riesgos específicos. Diseña un plan que aborde: cómo mantener el control interno durante la transición, cómo documentar los nuevos procesos para auditorías, cómo gestionar la resistencia del equipo (especialmente del equipo con más antigüedad) y cómo demostrar el ROI de la inversión en tecnología a los accionistas o al consejo.

Necesito recomendaciones prácticas para mi tamaño de empresa. No me propongas un ERP de 500.000 euros si mi facturación no lo justifica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la estrategia de digitalización del departamento financiero para reducir cierres, mejorar el forecasting y ganar visibilidad.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legaltech: las herramientas que están transformando la práctica jurídica',
                'description'      => 'Guía para adoptar tecnología legal de forma estratégica, desde la gestión de contratos hasta la IA jurídica, manteniendo el rigor y la confidencialidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado senior con experiencia en transformación digital de despachos y departamentos jurídicos corporativos. Conoces el ecosistema de legaltech desde dentro —no solo las herramientas sino los procesos reales de trabajo jurídico— y sabes cuándo la tecnología aporta valor real y cuándo es marketing disfrazado de innovación.

Necesito tu ayuda para diseñar o mejorar el stack tecnológico de mi práctica jurídica.

Mi contexto:
- Tipo de práctica: [despacho independiente, despacho grande, departamento legal corporativo]
- Especialidad jurídica principal: [mercantil, laboral, fiscal, procesal, etc.]
- Tamaño del equipo: [número de abogados y personal de apoyo]
- Herramientas actuales: [lista lo que ya usan]
- Mayor ineficiencia: [qué procesos consumen más tiempo sin añadir valor intelectual]
- Volumen de contratos/asuntos: [aproximado mensual]
- Preocupaciones sobre tecnología: [confidencialidad, riesgo regulatorio, calidad del output]

Con este contexto, ayúdame a diseñar la estrategia de adopción de legaltech:

**1. Mapa del ecosistema legaltech**
Explica el panorama actual de herramientas legales por categoría: gestión de práctica y asuntos (matter management), gestión documental y contratos, investigación jurídica y due diligence, redacción y revisión automatizada, gestión del conocimiento interno, billing y gestión económica del despacho, y IA jurídica generativa. Para cada categoría, indica el nivel de madurez actual de las herramientas y cuáles tienen el mayor impacto real.

**2. Automatización de contratos**
La gestión de contratos es el área con mayor potencial de automatización en el mundo jurídico. Diseña un sistema que incluya: cómo crear plantillas y playbooks de contratos que el equipo use de verdad, cómo gestionar el proceso de negociación y redmarks de forma eficiente, cómo mantener un repositorio de contratos firmados con búsqueda inteligente y cómo usar herramientas de revisión automática para los contratos de menor complejidad.

**3. Investigación jurídica y IA**
La IA está cambiando cómo se hace la investigación jurídica. Evalúa honestamente: qué tareas de investigación se pueden delegar a herramientas de IA ahora mismo (con supervisión), dónde la IA sigue siendo poco fiable y requiere verificación exhaustiva, cómo integrar la IA en el flujo de trabajo sin crear dependencias peligrosas y cómo documentar el uso de IA para cumplir con las obligaciones deontológicas emergentes.

**4. Gestión del conocimiento jurídico**
El conocimiento de un despacho vive en la cabeza de los socios y en documentos que nadie encuentra. Diseña un sistema de gestión del conocimiento que incluya: cómo estructurar la base de conocimiento para que sea útil y no un cementerio de documentos, cómo capturar el conocimiento de asuntos cerrados, cómo hacer que los abogados junior accedan al expertise de los socios a escala y cómo mantener el sistema actualizado sin que sea una carga adicional.

**5. Confidencialidad y seguridad en legaltech**
Los datos jurídicos son especialmente sensibles. Para cualquier herramienta que adoptes, necesitas evaluar: qué datos se procesan fuera de vuestros sistemas, qué garantías ofrece el proveedor sobre no usar los datos para entrenar modelos, cómo cumplir con las obligaciones de secreto profesional al usar herramientas en la nube, qué clausulado exigir a los proveedores de legaltech y cómo documentar el uso de tecnología para posibles auditorías del colegio profesional.

**6. Eficiencia operativa y billing**
El tiempo es la materia prima del despacho. Diseña sistemas para: time tracking que el equipo realmente use, generación de facturas eficiente con justificación del trabajo, gestión de presupuestos por asunto y alertas de desviación, reporting de rentabilidad por área, cliente y abogado y cobro eficiente con gestión de impagados.

**7. Roadmap de adopción gradual**
La transformación digital de un despacho no puede hacerse de golpe sin arriesgar la calidad del servicio. Diseña un roadmap por prioridad: qué implementar primero para ganar confianza del equipo, cómo evaluar el éxito de cada herramienta antes de extenderla, cómo gestionar la resistencia de los socios más tradiciones y qué métricas usar para demostrar el ROI de la inversión en legaltech.

Quiero una perspectiva honesta sobre qué funciona y qué es hype en el mundo legaltech. La promesa de automatización total del trabajo jurídico es exagerada en muchos casos, y necesito saber dónde están los límites reales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Adoptar tecnología jurídica de forma estratégica para mejorar la eficiencia sin comprometer la calidad ni la confidencialidad.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS tech stack: de Zendesk a Gainsight, las herramientas que escalan el éxito',
                'description'      => 'Cómo construir el ecosistema de herramientas de customer success que permite escalar la atención sin perder la calidad de la relación con el cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia escalando equipos de CS en empresas SaaS B2B. Conoces en profundidad el ecosistema de herramientas —desde helpdesks hasta plataformas de CS y herramientas de health scoring— y sabes que el mayor reto no es la tecnología sino hacer que el equipo la use para tomar mejores decisiones sobre los clientes.

Necesito tu ayuda para diseñar o mejorar el stack tecnológico de mi equipo de customer success.

Mi contexto:
- Tipo de producto: [SaaS, plataforma, servicio, descripción breve]
- Modelo de negocio: [MRR aproximado, número de clientes, segmentación de clientes]
- Tamaño del equipo de CS: [número de CSMs, ratio cliente/CSM actual]
- Herramientas actuales: [lista completa]
- Mayor brecha actual: [qué no ves sobre tus clientes que te gustaría ver]
- Principal problema de churn: [qué señales detectas tarde o no detectas]
- Presupuesto mensual por cliente para herramientas: [rango aproximado]

Con este contexto, ayúdame a diseñar el stack de CS óptimo:

**1. Diagnóstico del stack actual**
Analiza las herramientas que ya uso e identifica: datos de cliente que no estás capturando o que estás capturando pero no usando, señales de churn o expansión que llegas tarde a detectar, procesos manuales que escalan mal cuando crece la cartera de clientes y silos de información entre CS, ventas y producto que dificultan el trabajo.

**2. Plataforma de CS como centro neurálgico**
La plataforma de CS (Gainsight, ChurnZero, Totango, Planhat, etc.) es el corazón del stack. Evalúa qué plataforma tiene sentido para tu etapa y tamaño: qué funcionalidades son realmente imprescindibles versus cuáles parecen necesarias pero no se usan, cuándo tiene sentido una plataforma especializada versus funcionalidades de CS en el CRM, cómo configurar el health score para que prediga churn real y no solo actividad superficial y qué nivel de madurez de datos necesitas para que la plataforma aporte valor.

**3. Stack de soporte y atención**
El soporte al cliente es la cara visible del equipo. Diseña el stack de soporte: helpdesk y gestión de tickets, base de conocimiento y autoservicio, chat en tiempo real y bot de primer nivel, gestión de acuerdos de nivel de servicio y escalado, y cómo conectar el soporte con el health score del cliente para que un spike de tickets se refleje automáticamente en la salud.

**4. Product analytics para CS**
Los CSMs necesitan saber qué hacen sus clientes en el producto para tener conversaciones relevantes. Diseña el acceso de CS a los datos de producto: qué métricas de uso son más predictivas de renovación o churn, cómo configurar alertas automáticas de comportamiento (caída de uso, funcionalidades no adoptadas, usuarios inactivos), cómo hacer que el CSM reciba el contexto relevante antes de cada reunión de negocio y cómo usar datos de producto para identificar oportunidades de expansión.

**5. Automatización del ciclo de vida del cliente**
La escala en CS no viene de trabajar más horas sino de automatizar lo que no requiere toque humano. Diseña las automatizaciones clave: onboarding automático con milestones y contenido adaptado al uso real, QBR preparación automatizada, renovaciones con señales tempranas, campañas de adopción para funcionalidades no usadas y alertas de churn con playbooks automáticos de intervención.

**6. Voz del cliente y feedback estructurado**
CS es la función que más sabe sobre el cliente. Diseña un sistema para capturar y usar ese conocimiento: cómo recoger feedback de forma sistemática (NPS, CSAT, entrevistas), cómo estructurar los insights del cliente para que lleguen a producto y ventas y cómo usar los datos de CS para influir en el roadmap del producto y en la estrategia comercial.

**7. Métricas del equipo de CS y ROI del stack**
Define cómo medir la efectividad del equipo y de las herramientas: ratio de retención neta y bruta, tiempo por cliente y eficiencia del CSM, tasa de adopción de funcionalidades clave y cobertura del riesgo de churn. Incluye cómo presentar el ROI de las inversiones en CS tech al CFO, conectando el coste de las herramientas con la reducción de churn y el incremento de expansión.

Quiero un stack que haga al CSM más efectivo, no más ocupado. Si alguna herramienta genera más overhead del que ahorra, dímelo directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir el stack tecnológico de customer success que escala la capacidad del equipo sin perder la calidad de la relación con el cliente.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Tech stack del freelance: las herramientas que profesionalizan el negocio',
                'description'      => 'Cómo elegir las herramientas esenciales para gestionar un negocio freelance de forma profesional: clientes, proyectos, facturación y productividad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de diez años de experiencia construyendo y refinando el stack de herramientas para gestionar un negocio independiente. Has probado decenas de herramientas, has cometido los errores típicos (pagar por herramientas que no usas, usar demasiadas herramientas, cambiar de sistema constantemente) y ahora tienes un sistema que funciona sin consumir demasiado tiempo de gestión.

Necesito tu ayuda para diseñar o mejorar el stack de herramientas de mi negocio freelance.

Mi contexto:
- Tipo de servicio: [diseño, desarrollo, consultoría, redacción, etc.]
- Clientes actuales: [número, tipo —empresas o particulares—, tamaño de los proyectos]
- Herramientas que ya uso: [lista completa, incluyendo las gratuitas]
- Mayor ineficiencia en la gestión del negocio: [qué te consume tiempo que no es trabajo facturable]
- Problemas con clientes: [pagos tardíos, scope creep, comunicación desorganizada]
- Presupuesto mensual para herramientas: [lo que estás dispuesto a pagar]
- Fase del negocio: [empezando, estabilizado, escalando]

Con este contexto, ayúdame a diseñar el stack ideal para mi negocio freelance:

**1. Los errores más comunes en el stack del freelance**
Antes de recomendar herramientas, explícame los errores típicos que cometen los freelances: usar demasiadas herramientas que no se integran entre sí, pagar por funcionalidades que nunca se usan, cambiar de sistema cuando el problema real es de proceso y no de herramienta y usar herramientas de empresa en un negocio unipersonal donde son excesivas.

**2. Stack mínimo viable para empezar**
Define qué herramientas son absolutamente esenciales para cualquier freelance: gestión de contactos y clientes, gestión de proyectos y tareas, propuestas y contratos, facturación y cobros, comunicación con clientes y almacenamiento y gestión de archivos. Para cada categoría, recomienda la opción gratuita o económica que cubre el 80% de las necesidades y la opción de pago que tiene sentido cuando el negocio crece.

**3. Gestión de clientes y proyectos**
El mayor dolor del freelance es la gestión del cliente. Diseña un sistema que cubra: cómo capturar y gestionar leads de forma eficiente sin un CRM complejo, cómo estructurar la comunicación con el cliente para evitar emails perdidos y contexto difícil de recuperar, cómo gestionar el scope del proyecto y documentar los cambios para evitar el scope creep y cómo gestionar proyectos con múltiples clientes simultáneos sin perder el hilo.

**4. Facturación y gestión financiera**
La parte financiera del freelance es donde más tiempo se pierde innecesariamente. Diseña un sistema financiero que incluya: generación de propuestas que aceleren el cierre, facturación automática con recordatorios de pago integrados, gestión de impuestos y obligaciones fiscales (IVA trimestral, IRPF, gastos deducibles), seguimiento de cashflow y previsión de ingresos y separación entre cuentas personales y del negocio.

**5. Productividad y gestión del tiempo**
El tiempo facturable es el recurso más valioso del freelance. Diseña un sistema de productividad que incluya: time tracking que realmente uses (y cómo usarlo para mejorar tus estimaciones futuras), gestión de tareas que funcione cuando tienes varios clientes y proyectos activos, bloques de tiempo protegidos para trabajo profundo y gestión del email y las comunicaciones para que no interrumpan constantemente el trabajo.

**6. Automatización del negocio**
Un freelance no puede permitirse gestionar su negocio a tiempo completo. Identifica qué se puede automatizar: seguimiento automático de propuestas, recordatorios de pago, onboarding de nuevos clientes, facturación recurrente y reporting básico de ingresos. Para cada automatización, indica qué herramienta la facilita y cuánto tiempo real te ahorra al mes.

**7. Stack para escalar: de freelance a estudio**
Si el objetivo es crecer más allá del trabajo individual, el stack debe evolucionar. Explica qué cambios hacer cuando empiezas a subcontratar o a construir un equipo pequeño: cómo gestionar colaboradores externos, cómo compartir información de clientes de forma segura, cómo gestionar la rentabilidad por proyecto cuando tienes costes de personal y qué herramientas añadir en cada etapa de crecimiento.

Quiero un stack que me haga sentir como un negocio profesional, no como alguien que improvisa con hojas de cálculo. Pero también quiero que sea realista: no voy a usar una herramienta que me lleve más de diez minutos de mantenimiento semanal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseñar el stack de herramientas que profesionaliza la gestión del negocio freelance sin consumir tiempo facturable.',
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
