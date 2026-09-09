<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills116Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing Ops: los procesos que hacen escalar al equipo',
                'description'      => 'Los procesos, herramientas y datos que hacen al equipo de marketing más eficiente, predecible y escalable.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en Marketing Operations con experiencia en construir la infraestructura operativa que permite a los equipos de marketing crecer sin perder el control. Conoces las herramientas del ecosistema (HubSpot, Marketo, Salesforce, Segment, etc.), los procesos que escalan y los errores que cometen los equipos cuando crecen sin una base operativa sólida.

Necesito mejorar las operaciones de mi equipo de marketing. Aquí está el contexto:

**El equipo de marketing:** [tamaño, perfiles, qué funciones cubre]
**El stack tecnológico actual:** [CRM, herramienta de automatización, analítica, etc.]
**Los problemas operativos más dolorosos:** [datos inconsistentes, falta de atribución, procesos manuales, silos entre marketing y ventas, etc.]
**Los objetivos de negocio de marketing:** [pipeline, MQLs, ingresos, retención, etc.]
**El nivel de madurez de los datos:** [tenemos datos pero no los usamos / los datos son un caos / no sabemos qué funciona]
**Los recursos disponibles para mejorar:** [tiempo, presupuesto, capacidad técnica interna]

Con este contexto, ayúdame a construir una función de Marketing Ops efectiva:

**1. El diagnóstico de la madurez operativa**
Evalúa el estado actual de las operaciones de marketing en cinco dimensiones:
- Datos y atribución: ¿sabemos qué genera pipeline y qué no?
- Procesos y automatización: ¿cuánto trabajo manual hay que no debería existir?
- Stack tecnológico: ¿las herramientas se hablan entre sí o son islas?
- Alineación con ventas: ¿hay SLAs, definiciones compartidas y procesos claros de handoff?
- Reporting y visibilidad: ¿el equipo toma decisiones con datos o con intuición?

**2. La arquitectura de datos de marketing**
El fundamento de todo lo demás son los datos bien estructurados:
- Cómo definir y mantener limpios los campos clave en el CRM
- El modelo de atribución que más se adapta a mi negocio y cómo implementarlo
- Cómo conectar las herramientas para tener una visión unificada del cliente
- Los errores de data hygiene más comunes y cómo prevenirlos

**3. Los procesos que hay que automatizar primero**
Con los recursos disponibles, ¿qué automatizo primero para el mayor impacto?
- Lead scoring y routing hacia ventas
- Nurturing según comportamiento y etapa del funnel
- Alertas y SLAs entre marketing y ventas
- Reporting automático para no depender de extracciones manuales

**4. El modelo de alineación con ventas**
La fricción entre marketing y ventas destruye eficiencia. Diseña el modelo de colaboración:
- Las definiciones compartidas: MQL, SQL, oportunidad, cliente
- Los SLAs mutuos: en cuánto tiempo ventas trabaja un MQL, qué feedback da
- El proceso de revisión conjunta del pipeline mensual
- Cómo gestionar el desacuerdo sobre la calidad de los leads

**5. El dashboard de marketing ops**
Define el cuadro de mando que el equipo de marketing necesita:
- Las métricas de volumen: leads, MQLs, pipeline generado
- Las métricas de eficiencia: coste por MQL, velocidad del funnel, conversión por etapa
- Las métricas de calidad: win rate, ACV por origen, churn por canal de adquisición
- La cadencia de revisión: qué se revisa diariamente, semanalmente, mensualmente

**6. El roadmap de Marketing Ops para 12 meses**
Dame un plan por fases con hitos concretos y medibles:
- Trimestre 1: los cimientos (datos limpios, procesos básicos, stack conectado)
- Trimestre 2: la automatización (nurturing, scoring, reporting automático)
- Trimestre 3: la optimización (atribución, experimentación, ABM si aplica)
- Trimestre 4: la escala (internacionalización, nuevos segmentos, nuevos canales)

Quiero un plan que pueda empezar esta semana, no un modelo teórico. Sé específico con las herramientas y los procesos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la infraestructura operativa que hace al equipo de marketing más eficiente y escalable.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Platform engineering: la plataforma interna que multiplica a tu equipo',
                'description'      => 'Construye la plataforma interna que hace a los equipos de producto más productivos: developer portal, golden paths y self-service.',
                'prompt_content'   => <<<'PROMPT'
Eres un platform engineer senior con experiencia construyendo Internal Developer Platforms (IDP) en organizaciones de diferentes tamaños. Conoces los principios de Team Topologies, las herramientas del ecosistema (Backstage, Crossplane, ArgoCD, Terraform, etc.) y los errores que cometen los equipos cuando construyen plataformas que nadie usa.

Quiero construir o mejorar la plataforma interna de mi organización. Dame el contexto:

**La organización de ingeniería:** [número de ingenieros, número de equipos, madurez técnica]
**El stack tecnológico actual:** [cloud provider, lenguajes, infraestructura, CI/CD]
**Los dolores que experimenta el equipo de producto:** [tiempo hasta producción, fricción en el onboarding, deuda de infraestructura, falta de self-service]
**El equipo de plataforma disponible o que quiero crear:** [tamaño, perfiles, dedicación]
**La madurez del DevOps actual:** [cómo se despliega hoy, qué está automatizado, qué es manual]
**Los objetivos:** [reducir time to production, mejorar developer experience, reducir incidentes, escalar la organización]

Con este contexto, ayúdame a diseñar el roadmap de la plataforma:

**1. El diagnóstico: qué duele y cuánto**
Antes de construir nada, necesito entender el problema:
- Cómo hacer el Developer Experience Survey para medir el dolor actual
- Las métricas de DORA que necesito medir como baseline
- El cognitive load map: cuánto tiempo pierde un equipo de producto en tareas que no son su core

**2. La visión de la plataforma**
Define qué es y qué no es la plataforma para tu organización:
- El catálogo de servicios que la plataforma ofrecerá a los equipos de producto
- Los golden paths: la forma recomendada de hacer las cosas más comunes
- Lo que la plataforma no hará (límites claros para no convertirse en un bloqueador)
- La promesa de developer experience: qué puede hacer un equipo de producto sin pedir ayuda

**3. La arquitectura de la plataforma**
Diseña la arquitectura técnica de la plataforma:
- La capa de abstracción sobre la infraestructura: por qué y cómo
- El developer portal: qué información centraliza y por qué Backstage es o no la opción
- La plataforma de CI/CD: cómo estandarizar sin perder flexibilidad
- La gestión de secretos, configuración y entornos
- El observability stack compartido: logs, métricas, trazas

**4. El modelo de producto para la plataforma**
Una plataforma interna es un producto con sus usuarios internos. Aplica product thinking:
- Cómo recoger feedback de los equipos de producto de forma continua
- La cadencia de releases y comunicación de cambios
- Cómo priorizar el roadmap de la plataforma cuando compite con todo lo demás
- Las métricas de adopción y satisfacción que indican que la plataforma está funcionando

**5. El onboarding de nuevos equipos y proyectos**
Define el proceso que un equipo de producto sigue para empezar un nuevo servicio:
- De cero a primer despliegue en producción: pasos, tiempo objetivo, herramientas
- La documentación que necesito tener y el formato que funciona
- Las plantillas y scaffolding que acelera el arranque

**6. El roadmap por fases**
Dame un plan de construcción por fases que entregue valor incremental:
- Fase 1 (semanas 1-8): los cimientos que desbloquean el dolor más grande
- Fase 2 (meses 3-6): la automatización y los golden paths
- Fase 3 (meses 7-12): la plataforma completa y el self-service maduro

**7. El modelo de equipo y gobernanza**
Define cómo se organiza y se financia el equipo de plataforma:
- El tamaño óptimo relativo al número de ingenieros de producto
- El modelo de financiación: coste compartido, chargeback, o inversión centralizada
- La relación con los equipos de producto: enablement, no gatekeeping

Quiero construir algo que los equipos de producto adopten con entusiasmo, no otra herramienta más que nadie usa. Ayúdame a diseñarlo bien desde el principio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y construir una Internal Developer Platform que mejore la productividad de los equipos de producto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'DesignOps: escala el impacto del equipo de diseño',
                'description'      => 'Los procesos, herramientas y sistemas que escalan el impacto del equipo de diseño sin que todo pase por el mismo diseñador.',
                'prompt_content'   => <<<'PROMPT'
Eres una DesignOps lead con experiencia en construir los sistemas, procesos y herramientas que permiten a los equipos de diseño trabajar a mayor escala sin sacrificar calidad ni coherencia. Conoces los design systems, los flujos de trabajo colaborativos y los modelos organizativos que hacen al diseño más eficiente e influyente.

Quiero mejorar las operaciones de mi equipo de diseño. Dame el contexto:

**El equipo de diseño:** [tamaño, perfiles, cómo está organizado, qué áreas cubre]
**Las herramientas actuales:** [Figma, FigJam, herramienta de prototipado, design system si existe]
**Los problemas más dolorosos:** [inconsistencia visual entre productos, cuellos de botella, falta de documentación, onboarding lento de nuevos diseñadores, handoff problemático con desarrollo, etc.]
**La relación con producto y desarrollo:** [cómo colaboramos, cuándo entran los diseñadores, qué tan bien funciona el handoff]
**Los objetivos:** [más velocidad, más consistencia, más impacto estratégico, escalar el equipo]
**El estado del design system:** [no existe / está desactualizado / está vivo pero no se adopta / funciona bien]

Con este contexto, ayúdame a construir una función de DesignOps:

**1. El diagnóstico del equipo de diseño**
Evalúa la madurez operativa en cinco dimensiones:
- Procesos: ¿cómo entra el trabajo, cómo se prioriza, cómo sale?
- Herramientas: ¿el equipo tiene el stack correcto y lo usa bien?
- Design system: ¿es la fuente de verdad o es otro documento que nadie mantiene?
- Colaboración: ¿cómo funciona el trabajo con producto, desarrollo y stakeholders?
- Conocimiento: ¿hay documentación, hay onboarding, hay rituales de aprendizaje?

**2. El design system como infraestructura**
El design system es el mayor multiplicador del equipo de diseño. Diseña la estrategia:
- La estructura del design system: tokens, componentes, patrones, documentación
- El modelo de gobierno: quién puede contribuir, quién aprueba, cómo se versiona
- La estrategia de adopción: cómo consigo que los diseñadores y los developers lo usen
- Cómo mantenerlo vivo: quién es responsable, con qué cadencia se actualiza
- Las métricas que demuestran que el design system está generando valor

**3. Los flujos de trabajo que necesito rediseñar**
Identifica los procesos que más desperdicio generan y redíseñalos:
- Cómo estructurar el brief de diseño para que el trabajo llegue bien especificado
- El proceso de revisión: quién puede dar feedback, en qué fase, con qué criterio
- El handoff a desarrollo: qué debe contener un archivo de Figma bien entregado
- El proceso de QA de diseño antes y después de implementación

**4. La estructura de archivos y la organización del equipo en Figma**
El caos en Figma destruye productividad:
- La estructura de proyectos y páginas que escala
- Las convenciones de nomenclatura que todo el equipo sigue
- Cómo gestionar la colaboración entre diseñadores en el mismo archivo
- La política de archivos: qué es trabajo en curso, qué está entregado, qué está archivado

**5. El onboarding de nuevos diseñadores**
Define el proceso para que un diseñador nuevo sea productivo en dos semanas:
- La documentación que necesito escribir para que el onboarding no dependa de mí
- Los rituales de integración al equipo: feedback, critique, pair designing
- El primer proyecto asignado: por qué es importante elegirlo bien

**6. La medición del impacto del diseño**
Define cómo demuestras el valor del equipo de diseño al negocio:
- Las métricas de proceso: velocidad de entrega, tasa de retrabajo, feedback loops
- Las métricas de impacto: conversión, NPS, tiempo en tarea, adopción de features
- El formato de presentación a liderazgo que convierte el diseño en inversión estratégica

**7. El roadmap de DesignOps para un año**
Dame un plan concreto con hitos trimestrales que pueda presentar a mi manager.

Quiero que el equipo de diseño sea un multiplicador del negocio, no un cuello de botella. Ayúdame a construir los sistemas que lo hacen posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir los sistemas y procesos que escalan el impacto del equipo de diseño.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales Ops: datos y procesos que hacen al equipo de ventas más eficiente',
                'description'      => 'Datos, procesos y herramientas que hacen al equipo de ventas más eficiente: CRM hygiene, reporting y automatización.',
                'prompt_content'   => <<<'PROMPT'
Eres un Sales Operations manager con experiencia en transformar equipos de ventas caóticos en máquinas predecibles. Conoces los CRMs principales (Salesforce, HubSpot, Pipedrive), los procesos de ventas más eficientes y los errores que cometen los equipos cuando crecen sin una base operativa sólida.

Quiero mejorar las operaciones de mi equipo de ventas. Dame el contexto:

**El equipo de ventas:** [tamaño, modelo de ventas, inbound/outbound, ciclo de venta promedio, ACV]
**El CRM actual:** [qué usamos, cómo lo usamos, qué datos tenemos y cuáles faltan]
**Los problemas más dolorosos:** [datos sucios, falta de visibilidad del pipeline, procesos inconsistentes entre vendedores, reporting manual, falta de forecast confiable]
**Los objetivos de ventas:** [quota, pipeline target, win rate objetivo]
**La relación entre ventas y marketing:** [hay SLAs, hay fricción, los leads son buenos o malos]
**Los recursos disponibles:** [equipo de Sales Ops, herramientas adicionales que podría usar]

Con este contexto, ayúdame a construir una función de Sales Ops efectiva:

**1. El diagnóstico del estado actual**
Evalúa la madurez operativa en cuatro dimensiones:
- Datos: ¿el CRM refleja la realidad? ¿los datos son suficientes para tomar decisiones?
- Proceso: ¿hay un proceso de ventas definido y seguido? ¿hay consistencia entre vendedores?
- Herramientas: ¿el stack tecnológico ayuda o entorpece?
- Reporting: ¿el forecast es creíble? ¿sabemos qué funciona y qué no?

**2. La limpieza y estructura del CRM**
El CRM es la base de todo. Diseña la estrategia de CRM hygiene:
- Los campos obligatorios que necesito en cada etapa del pipeline y por qué
- La definición de cada etapa del pipeline: qué debe ser verdad para que una oportunidad esté en cada stage
- El proceso de limpieza de datos existentes: por dónde empezar, cómo priorizar
- Las reglas de validación y automatización que previenen la suciedad futura
- El proceso de revisión semanal del pipeline con los vendedores

**3. El proceso de ventas estandarizado**
Sin proceso consistente no hay datos consistentes. Diseña el proceso:
- Las etapas del proceso de ventas con criterios de entrada y salida claros
- Los MEDDIC, BANT o el framework de calificación más adecuado para mi contexto
- Los touchpoints mínimos necesarios en cada etapa: qué debe pasar y cuándo
- Las señales de riesgo en una oportunidad y cómo gestionarlas

**4. El sistema de forecast**
La capacidad de predecir los ingresos es el mayor valor que da Sales Ops:
- Los modelos de forecast que funcionan mejor según el tipo de negocio
- Cómo construir el forecast a partir de datos del CRM, no de intuición de los vendedores
- La cadencia de revisión del forecast: qué se revisa cuándo y quién participa
- Los indicadores de alerta temprana que señalan que el quarter está en riesgo

**5. Las automatizaciones de mayor impacto**
Con los recursos disponibles, ¿qué automatizo primero?
- La automatización del seguimiento y los recordatorios para los vendedores
- La secuencia de outreach para los leads sin actividad
- La creación automática de tareas según cambios en el pipeline
- El reporting automático que elimina las horas de Excel del viernes

**6. El onboarding y la habilitación del vendedor**
Sales Ops también es responsable de que los nuevos vendedores sean productivos rápido:
- El plan de 30-60-90 días para un nuevo vendedor
- Los recursos y herramientas que necesita desde el día uno
- Las métricas de rampa: cómo saber si un nuevo vendedor está en el camino correcto

**7. El dashboard de Sales Ops**
Define el cuadro de mando para el liderazgo de ventas:
- Pipeline coverage y calidad por etapa
- Velocidad del ciclo de venta y conversión por etapa
- Win rate por segmento, canal, producto y vendedor
- Forecast vs. actuals: la precisión del forecast como métrica de madurez

Dame un plan de 90 días concreto para las mejoras más urgentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la infraestructura operativa que hace al equipo de ventas más eficiente y predecible.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product Ops: sistemas para que producto tome mejores decisiones',
                'description'      => 'Los sistemas, datos y procesos que permiten al equipo de producto tomar mejores decisiones más rápido.',
                'prompt_content'   => <<<'PROMPT'
Eres una Product Operations manager con experiencia en construir los sistemas que permiten a los equipos de producto operar con más información, más velocidad y más coherencia. Tu trabajo es eliminar la fricción que impide que los PMs se centren en lo que importa: entender el problema del cliente y tomar las mejores decisiones de producto.

Quiero construir o mejorar la función de Product Ops en mi equipo. Dame el contexto:

**El equipo de producto:** [número de PMs, squads, etapa del producto, modelo de trabajo]
**Los sistemas y herramientas actuales:** [roadmap tool, analytics, feedback, documentación]
**Los dolores operativos que más tiempo consumen:** [reuniones sin estructura, falta de datos para tomar decisiones, roadmap que no refleja la realidad, feedback de clientes disperso, etc.]
**La relación con diseño y desarrollo:** [cómo colaboramos, qué funciona y qué no]
**Los objetivos de la función de producto:** [velocidad de entrega, calidad de las decisiones, alineación con negocio]
**El nivel de madurez del equipo:** [PMs junior/senior, experiencia con datos, cultura de experimentación]

Con este contexto, diseña la función de Product Ops:

**1. El diagnóstico de la madurez operativa del equipo de producto**
Evalúa el estado actual en cinco áreas:
- Estrategia y roadmap: ¿hay claridad en las prioridades y por qué?
- Datos y discovery: ¿las decisiones se basan en evidencia o en hipótesis no validadas?
- Ejecución: ¿los procesos de delivery son consistentes y predecibles?
- Colaboración: ¿cómo funciona el trabajo con diseño, ingeniería y negocio?
- Conocimiento: ¿hay documentación de decisiones, aprendizajes y contexto?

**2. El sistema de gestión del feedback de clientes**
El input del cliente tiene que llegar de forma organizada al equipo de producto:
- Las fuentes de feedback que necesito centralizar: support, ventas, CS, NPS, entrevistas
- La taxonomía para categorizar y priorizar el feedback
- El proceso de síntesis mensual que convierte el volumen en insights accionables
- Las herramientas más adecuadas para el tamaño de mi equipo (desde Notion hasta Productboard)

**3. El sistema de roadmap y priorización**
Un roadmap es una herramienta de comunicación y toma de decisiones, no una lista de Jira:
- El framework de priorización más adecuado para mi contexto (RICE, ICE, MoSCoW, jobs-to-be-done)
- Cómo construir el roadmap para que sea creíble para el negocio sin comprometer la agilidad
- La cadencia de revisión del roadmap: cuándo se actualiza, quién participa, cómo se comunica
- Cómo gestionar las peticiones entrantes de stakeholders sin que el roadmap sea un cajón desastre

**4. Los rituales operativos del equipo de producto**
Define los rituales que hacen al equipo más alineado y más rápido:
- La revisión de métricas semanal: qué se mira, quién participa, qué decisiones genera
- La revisión del roadmap mensual: formato, participantes, output
- El quarterly business review de producto: cómo se presenta el impacto del equipo
- Las retrospectivas de proceso: por qué los PMs necesitan retrospectivas tanto como los ingenieros

**5. El sistema de documentación de decisiones**
El mayor coste oculto de los equipos de producto es repetir conversaciones y perder contexto:
- El formato de Product Decision Document (o equivalente) que funciona
- Qué decisiones merecen documentación formal y cuáles no
- Cómo hacer que la documentación se mantenga actualizada sin convertirse en una carga
- Dónde vive el conocimiento del equipo y cómo se busca

**6. Las métricas de producto y el sistema de measurement**
Define el sistema de métricas end-to-end del equipo de producto:
- La jerarquía de métricas: North Star, input metrics, output metrics
- Cómo construir el dashboard de producto que el equipo usa de verdad
- El proceso de experimentación: de la hipótesis al test, del test a la decisión
- Cómo democratizar el acceso a datos para que los PMs sean más autónomos

**7. El plan de implementación por fases**
Dame un roadmap de Product Ops para los primeros seis meses con hitos concretos y medibles.

Quiero que los PMs de mi equipo pasen más tiempo pensando en el problema del cliente y menos tiempo en reuniones, buscando información o rehaciendo trabajo. Ayúdame a construir los sistemas que lo hacen posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la infraestructura operativa que permite al equipo de producto tomar mejores decisiones.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR Ops: automatiza y escala las operaciones de RRHH',
                'description'      => 'Los procesos, herramientas y automatizaciones que hacen al equipo de RRHH más eficiente y le permiten escalar sin crecer en headcount.',
                'prompt_content'   => <<<'PROMPT'
Eres una HR Operations manager con experiencia en transformar departamentos de RRHH reactivos y manuales en funciones proactivas, eficientes y basadas en datos. Conoces el ecosistema de HRIS (Workday, BambooHR, HiBob, Factorial), los procesos de People Ops que escalan y los errores que cometen los equipos cuando crecen sin automatizar.

Quiero mejorar las operaciones de RRHH en mi organización. Dame el contexto:

**El equipo de RRHH:** [tamaño, perfiles, qué funciones cubre: selección, onboarding, nómina, learning, etc.]
**El HRIS o sistemas actuales:** [qué herramientas usamos, cómo están integradas, qué datos tenemos]
**El tamaño de la organización:** [número de empleados, países, tipo de contratación]
**Los procesos más manuales y dolorosos:** [onboarding en Excel, documentos enviados por email, procesos de aprobación en papel, etc.]
**Los objetivos del equipo de People:** [escalar sin crecer el equipo de RRHH, mejorar la experiencia del empleado, tener datos para tomar decisiones]
**El presupuesto disponible:** [tenemos algo / tenemos que justificar cada euro]

Con este contexto, ayúdame a construir una función de HR Ops efectiva:

**1. El diagnóstico del estado actual**
Evalúa la madurez operativa en cinco dimensiones:
- Datos y HRIS: ¿tenemos una fuente de verdad de los datos de personas?
- Procesos: ¿cuáles son manuales y repetitivos? ¿cuáles son inconsistentes?
- Compliance: ¿estamos al día con las obligaciones legales o vivimos apagando fuegos?
- Experiencia del empleado: ¿los procesos de RRHH son fáciles o frustrantes para el empleado?
- Reporting: ¿tenemos los datos de personas que necesita el negocio para tomar decisiones?

**2. El HRIS como fuente de verdad**
El HRIS es la base de las operaciones de RRHH. Diseña la estrategia:
- Los datos de empleado que necesito tener estructurados y actualizados
- Cómo integrar el HRIS con las demás herramientas de la empresa (nómina, IRPF, beneficios)
- El proceso de alta y baja de empleados: de manual a automatizado
- La estrategia de migración si necesito cambiar de herramienta

**3. El onboarding como proceso automatizado**
El onboarding es el proceso con mayor impacto en la experiencia del empleado y el mayor generador de trabajo manual:
- El proceso de pre-onboarding: qué pasa antes del primer día
- El checklist de onboarding por rol: qué accesos, qué formación, qué reuniones
- Las automatizaciones que eliminan el trabajo manual: alta en sistemas, envío de documentos, recordatorios
- Cómo medir la calidad del onboarding: encuesta a los 30, 60 y 90 días

**4. Las automatizaciones de mayor impacto**
Prioriza las automatizaciones que liberan más tiempo del equipo de RRHH:
- Gestión de vacaciones y ausencias en self-service
- Aprobaciones de expenses, cambios de datos y solicitudes en workflow automático
- Recordatorios de revisiones de desempeño y feedback
- Reporting automático de headcount, rotación y ausencias para el comité de dirección

**5. El people analytics básico**
Los datos de personas son estratégicos. Define el sistema de métricas:
- Las métricas de headcount: evolución, distribución, coste
- Las métricas de atracción: time to hire, coste por contratación, fuentes de candidatos
- Las métricas de retención: rotación por departamento, antigüedad, riesgo de fuga
- Las métricas de engagement: eNPS, resultados de pulse surveys, absentismo
- El formato de reporting al comité de dirección

**6. El compliance operativo**
El riesgo legal es el mayor generador de trabajo urgente en RRHH:
- El calendario de obligaciones laborales: qué hay que hacer y cuándo
- La gestión documental: qué documentos necesito firmar, custodiar y destruir
- El proceso de revisión anual del convenio colectivo y la actualización de condiciones
- Cómo gestionar la PRL, el teletrabajo y otros requerimientos legales de forma sistemática

**7. El plan de mejora para los próximos 6 meses**
Dame un plan concreto con hitos mensuales que pueda presentar a la dirección.

Quiero que mi equipo de RRHH pase el tiempo en lo que importa: las personas, no los papeles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatizar y escalar las operaciones de RRHH para mejorar la eficiencia y la experiencia del empleado.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'FP&A: el proceso de planificación y análisis financiero',
                'description'      => 'El proceso de planificación y análisis financiero que conecta la estrategia con los recursos y el seguimiento mensual.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de FP&A (Financial Planning & Analysis) con experiencia en empresas de tecnología y crecimiento. Tu especialidad es conectar la estrategia de negocio con la asignación de recursos y construir los modelos y procesos que permiten al management tomar mejores decisiones con más rapidez.

Necesito mejorar el proceso de FP&A en mi organización. Dame el contexto:

**La empresa:** [sector, tamaño, stage: startup / scale-up / empresa establecida, modelo de negocio]
**El equipo de finanzas:** [quién hace FP&A hoy, con qué herramientas, qué nivel de madurez]
**El proceso actual:** [cómo hacemos el presupuesto, con qué frecuencia revisamos, cómo reportamos]
**Los dolores más grandes:** [presupuesto anual que queda obsoleto en febrero, reporting que tarda dos semanas en cerrarse, falta de visibilidad para los heads of department, etc.]
**Los stakeholders clave:** [CEO, CFO, board, inversores, heads of department]
**Las herramientas disponibles:** [Excel, ERP, herramienta de FP&A específica, BI]

Con este contexto, ayúdame a construir o mejorar el proceso de FP&A:

**1. El modelo financiero de la empresa**
El modelo es la base de todo el proceso de FP&A:
- La estructura del modelo: P&L, balance, flujo de caja y sus interrelaciones
- Los drivers de negocio que impulsan cada línea del P&L
- Cómo construir un modelo que el management entienda sin ser financiero
- El nivel de granularidad adecuado: suficiente para decidir, no tanto que sea inmanejable
- Cómo mantener el modelo actualizado sin que sea un proceso de días

**2. El proceso de presupuestación anual**
El presupuesto anual es el proceso de FP&A más importante y el más odiado:
- El calendario del proceso: cuándo empezar, qué pasos seguir, cuándo cerrar
- El enfoque top-down vs. bottom-up: cuándo usar cada uno y cómo combinarlos
- Cómo involucrar a los heads of department sin perder el control del proceso
- Cómo gestionar las negociaciones internas de recursos de forma eficiente
- Qué nivel de detalle necesita el presupuesto vs. el plan estratégico

**3. El rolling forecast y la planificación dinámica**
El presupuesto anual fijo es insuficiente en entornos de cambio rápido:
- Qué es un rolling forecast y por qué es más útil que el presupuesto estático
- Cómo implementar un proceso de re-forecast mensual o trimestral
- La diferencia entre el forecast operativo y el forecast financiero
- Cómo gestionar las expectativas del board y los inversores con un enfoque dinámico

**4. El cierre mensual y el reporting**
El reporting financiero mensual tiene que ser rápido, claro y accionable:
- El calendario de cierre mensual: day 1, day 3, day 5
- Las reconciliaciones críticas que no pueden saltarse
- El formato del management reporting: qué incluye, qué no, cómo se presenta
- El análisis de varianzas: cómo explicar las diferencias entre budget y actual de forma que genere acción

**5. El business partnering con los departamentos**
FP&A crea más valor cuando trabaja con el negocio, no solo con los números:
- Cómo construir la relación de confianza con los heads of department
- Las revisiones de negocio mensuales: formato, frecuencia, quién participa
- Cómo traducir la información financiera en decisiones operativas para personas no financieras
- Los KPIs no financieros que necesito incluir en el análisis

**6. Las herramientas de FP&A**
Define el stack tecnológico más adecuado:
- Cuándo es suficiente Excel y cuándo necesito una herramienta específica de FP&A
- Las herramientas del mercado: Anaplan, Pigment, Mosaic, Cube y cuándo usar cada una
- Cómo conectar el ERP con el modelo de FP&A para automatizar la carga de datos
- El BI que complementa el reporting financiero con datos operativos

**7. El plan de transformación de FP&A para 12 meses**
Dame un roadmap concreto con hitos trimestrales que me permita pasar de donde estoy a un proceso de FP&A que el management considere estratégico.

Quiero que FP&A sea el copiloto del CEO, no el departamento que hace las hojas de cálculo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el proceso de FP&A que conecta la estrategia con los recursos y el seguimiento mensual.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal Ops: el departamento legal como socio estratégico',
                'description'      => 'Los procesos, métricas y tecnología que hacen al departamento legal más eficiente, predecible y alineado con el negocio.',
                'prompt_content'   => <<<'PROMPT'
Eres un Legal Operations manager con experiencia en transformar departamentos legales internos de centros de coste reactivos en funciones estratégicas, eficientes y orientadas al negocio. Conoces el ecosistema de herramientas de Legal Tech (CLM, e-billing, matter management) y los procesos que permiten a los equipos legales hacer más con los mismos recursos.

Quiero implementar o mejorar la función de Legal Ops en mi departamento. Dame el contexto:

**El departamento legal:** [tamaño, perfiles, áreas que cubre: contratos, litigación, compliance, corporativo, laboral]
**Las herramientas actuales:** [cómo gestionamos contratos, cómo controlamos el gasto externo, cómo hacemos el seguimiento de asuntos]
**La relación con el negocio:** [nos piden opinión antes o solo cuando hay un problema, somos un cuello de botella, el negocio nos pasa por encima]
**Los problemas más dolorosos:** [contratos que tardan semanas, falta de visibilidad del gasto externo, solicitudes por email sin seguimiento, falta de datos para justificar el presupuesto]
**Los objetivos:** [reducir el tiempo de respuesta, controlar el gasto externo, ser más proactivos, automatizar lo repetitivo]
**El contexto de la empresa:** [startup, scale-up, multinacional, sector regulado]

Con este contexto, ayúdame a construir la función de Legal Ops:

**1. El diagnóstico de madurez del departamento legal**
Evalúa el estado actual en cinco dimensiones:
- Gestión del trabajo: ¿sabemos qué asuntos tenemos abiertos y en qué estado?
- Contratos: ¿cuánto tarda un contrato típico? ¿hay templates? ¿hay playbook de negociación?
- Gasto externo: ¿controlamos el gasto en despachos? ¿sabemos qué obtenemos a cambio?
- Datos y métricas: ¿podemos justificar el valor del departamento con datos?
- Alineación con negocio: ¿el negocio nos ve como aliados o como un obstáculo?

**2. La gestión del contrato de extremo a extremo**
Los contratos son el corazón de Legal Ops. Diseña el proceso completo:
- El ciclo de vida del contrato: solicitud, borrador, negociación, firma, gestión post-firma
- Los templates por tipo de contrato: NDA, MSA, SOW, acuerdos de distribución
- El playbook de negociación: qué podemos ceder, qué nunca cedemos y por qué
- El sistema de aprobaciones: quién aprueba qué, a qué nivel de riesgo y valor
- El CLM (Contract Lifecycle Management) que más se adapta a mi contexto y presupuesto

**3. La gestión del gasto en despachos externos**
El gasto externo es el mayor coste del departamento y el peor controlado:
- El proceso de selección y panel de despachos: cuándo usar cada uno
- Los estándares de facturación que exijo a los despachos externos
- El proceso de revisión de facturas: ¿cuánto tiempo perdemos en esto?
- Las métricas de seguimiento: coste por asunto, desviación sobre presupuesto, calidad del servicio
- Las herramientas de e-billing que automatizan el control del gasto

**4. El self-service legal para el negocio**
La mayor fuente de eficiencia de Legal Ops es capacitar al negocio para resolver sus propias necesidades básicas:
- Los contratos y documentos que el negocio puede generar sin pasar por legal
- La formación mínima que necesitan las personas del negocio que más interactúan con legal
- El portal de recursos legales: templates, FAQs, guías de proceso
- Los límites del self-service: qué no puede hacerse sin pasar por el equipo legal

**5. Las métricas del departamento legal**
Define el cuadro de mando que justifica el valor del departamento:
- Métricas de volumen: número de asuntos, contratos revisados, tiempo de respuesta
- Métricas de eficiencia: tiempo de ciclo por tipo de asunto, coste por asunto
- Métricas de riesgo: issues identificados en contratos, litigios evitados, compliance rate
- El formato de reporting trimestral al CFO o CEO

**6. La tecnología de Legal Ops**
Define el roadmap de herramientas para mi contexto:
- El stack mínimo viable de Legal Tech para un departamento pequeño
- Cuándo justifica la inversión en un CLM y cuándo es suficiente con un gestor de documentos
- La IA aplicada a la revisión de contratos: qué puede hacer hoy, qué no puede hacer

**7. El plan de transformación de 12 meses**
Dame un roadmap concreto que pueda presentar al CFO como plan de inversión con retorno esperado.

Quiero que el departamento legal sea un acelerador del negocio, no su freno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la función de Legal Ops que transforma el departamento legal en socio estratégico del negocio.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS Ops: escala el impacto del equipo de customer success',
                'description'      => 'Operaciones de customer success: datos, procesos, herramientas y automatizaciones que escalan el impacto del equipo sin crecer en proporción.',
                'prompt_content'   => <<<'PROMPT'
Eres un CS Operations manager con experiencia en construir la infraestructura que permite a los equipos de customer success escalar su impacto sin crecer linealmente en headcount. Conoces el ecosistema de herramientas de CS (Gainsight, ChurnZero, HubSpot CS, Totango) y los procesos que hacen la diferencia entre un equipo de CS reactivo y uno proactivo.

Quiero construir o mejorar la función de CS Ops en mi organización. Dame el contexto:

**El equipo de CS:** [tamaño, perfiles, modelo: high-touch / tech-touch / low-touch, segmentos que cubre]
**Las herramientas actuales:** [CRM, herramienta de CS si hay, fuentes de datos de producto]
**Los problemas más dolorosos:** [churn sorpresa, sin visibilidad del riesgo, procesos manuales, no saber qué clientes necesitan atención, poco tiempo para trabajo proactivo]
**Los KPIs de CS actuales:** [GRR, NRR, NPS, churn rate, tiempo de onboarding, adopción de producto]
**La relación con ventas, producto y soporte:** [cómo colaboramos, dónde hay fricción]
**El modelo de negocio:** [SaaS, contratos anuales / mensuales, ACV promedio, número de cuentas por CSM]

Con este contexto, ayúdame a construir la función de CS Ops:

**1. El diagnóstico del estado actual**
Evalúa la madurez operativa del equipo de CS en cinco dimensiones:
- Datos: ¿sabemos qué hacen nuestros clientes en el producto?
- Salud del cliente: ¿tenemos un modelo de customer health score que funciona?
- Proceso: ¿hay playbooks definidos para onboarding, QBR, renovación y riesgo?
- Herramientas: ¿el stack tecnológico permite ser proactivo o solo reactivo?
- Capacidad: ¿la ratio de cuentas por CSM permite hacer trabajo de calidad?

**2. El customer health score**
El health score es el corazón de CS Ops. Diseña el modelo para mi contexto:
- Las señales de salud más predictivas del churn y la expansión en mi negocio
- El peso de cada señal: uso del producto, engagement, NPS, soporte, relación
- Cómo recoger y centralizar los datos necesarios para calcularlo
- La escala y los umbrales: qué es un cliente en riesgo, en rojo, en verde
- La cadencia de actualización y quién actúa sobre cada nivel de riesgo

**3. Los playbooks de CS**
Un playbook es el proceso que un CSM sigue en cada situación clave:
- El playbook de onboarding: de la firma al primer valor en el menor tiempo posible
- El playbook de riesgo: cómo detectar y gestionar un cliente que se va a ir
- El playbook de renovación: cuándo empezar, qué hacer, cómo cerrar
- El playbook de expansión: cómo identificar oportunidades y cuándo involucrar a ventas
- El playbook de QBR: estructura, frecuencia, quién participa, cómo medir el éxito

**4. La automatización en CS**
Define las automatizaciones que liberan tiempo del CSM para el trabajo de alto valor:
- Los triggers automáticos basados en health score y comportamiento
- Las comunicaciones automatizadas en el onboarding y en momentos clave
- Los recordatorios y tareas automáticas para el CSM basados en eventos
- El reporting automático de portfolio para cada CSM

**5. La segmentación de clientes y el modelo de cobertura**
No todos los clientes merecen el mismo tiempo de un CSM:
- Los criterios de segmentación: ARR, potencial de expansión, complejidad, riesgo
- El modelo de cobertura por segmento: high-touch, tech-touch, digital-only
- La ratio de cuentas por CSM para cada segmento y cómo justificarla
- Cómo moverse entre segmentos: un cliente crece y merece más atención, otro decrece

**6. Las métricas de CS Ops**
Define el sistema de métricas completo:
- Las métricas de resultado: GRR, NRR, churn rate, expansion rate
- Las métricas de actividad: QBRs completados, onboardings en tiempo, touchpoints
- Las métricas de eficiencia: tiempo por cuenta, coste de retención, NPS operativo
- El dashboard para el VP of CS y para el board

**7. El roadmap de CS Ops para 12 meses**
Dame un plan concreto con hitos trimestrales que me permita pasar de CS reactivo a CS proactivo y escalable.

Quiero que el equipo de CS sea el mayor generador de ingresos recurrentes de la empresa, no solo el equipo que evita que los clientes se vayan.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la infraestructura operativa que escala el impacto del equipo de customer success.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Operaciones del negocio freelance: sistemas para escalar',
                'description'      => 'Los sistemas y procesos que transforman el caos del trabajo independiente en un negocio predecible y escalable.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor especializado en ayudar a freelancers y profesionales independientes a construir sistemas de negocio que les permiten ganar más, trabajar mejor y no depender de su presencia constante para que todo funcione. Tu especialidad es simplificar: los mejores sistemas para un freelance son los que más se usan, no los más sofisticados.

Quiero construir los sistemas operativos de mi negocio freelance. Dame el contexto:

**Mi actividad:** [qué tipo de trabajo freelance hago: diseño, desarrollo, consultoría, redacción, etc.]
**Mi volumen actual:** [cuántos clientes simultáneos, cuántos proyectos al mes, facturación aproximada]
**Los problemas operativos que más me afectan:** [no sé cuánto tiempo he dedicado a qué, el proceso de cobro es un caos, pierdo tiempo buscando archivos, no tengo visibilidad de mis ingresos futuros]
**Las herramientas que ya uso:** [Notion, Trello, Google Drive, Harvest, FreshBooks, etc.]
**Mis objetivos:** [facturar más, trabajar menos horas, tener más previsibilidad, delegar parte del trabajo]
**Lo que más me cuesta:** [vender, hacer facturas, gestionar clientes difíciles, separar lo urgente de lo importante]

Con este contexto, ayúdame a construir el sistema operativo de mi negocio:

**1. El sistema de gestión de proyectos**
Cada proyecto necesita un proceso claro desde el primer contacto hasta el cobro final:
- Las fases estándar de cada proyecto y sus hitos
- Cómo documentar el alcance para que no haya confusión ni scope creep
- El sistema de seguimiento que me dice en qué estado está cada proyecto sin revisar el email
- Las plantillas de proyecto que me permiten arrancar nuevo sin empezar de cero

**2. El sistema financiero simple pero completo**
Las finanzas del freelance tienen que darte visibilidad sin consumirte:
- El forecast de ingresos: cómo saber cuánto voy a facturar el próximo trimestre
- El sistema de facturación: cuándo, cómo y cómo hacer el seguimiento de cobros
- La separación entre IVA, IRPF e ingresos reales desde el primer día
- El colchón de seguridad y cómo calcularlo para mi nivel de ingresos
- Las métricas que necesito revisar una vez al mes: cuáles son y qué decisiones generan

**3. El proceso de captación y cierre de clientes**
El pipeline de nuevos clientes es el activo más importante del freelance:
- El sistema para mantener el contacto con clientes pasados y fuentes de referidos
- El proceso de calificación de nuevos proyectos: qué preguntas hacer antes de hacer una propuesta
- La propuesta tipo que funciona: estructura, longitud, qué incluir y qué no
- El proceso de cierre: cuándo y cómo hablar de precio, cómo manejar la negociación

**4. El sistema de gestión de clientes**
Cada cliente tiene que sentir que eres su única prioridad aunque tengas varios:
- El proceso de onboarding de cliente: qué pasa desde que firma hasta que empezamos
- La comunicación proactiva: cómo y cuándo actualizas al cliente sin esperar a que te pregunte
- El manejo de cambios de alcance: cómo decir que algo tiene un coste extra sin romper la relación
- El proceso de cierre de proyecto: entrega, feedback, factura final y la pregunta del referido

**5. El sistema de gestión del tiempo**
El tiempo es el recurso escaso del freelance. Protégelo:
- Cómo estructurar la semana para tener tiempo de trabajo profundo, administrativo y de venta
- El time tracking: por qué hacerlo aunque cobres por proyecto, cómo hacerlo sin obsesionarte
- Los límites con los clientes: horarios, canales de comunicación, tiempos de respuesta
- Cómo detectar los proyectos que consumen más tiempo del que generan

**6. El sistema de archivos y documentación**
El conocimiento de tu negocio no puede vivir solo en tu cabeza:
- La estructura de carpetas que nunca falla para proyectos de cliente
- Las plantillas que necesito tener disponibles: propuesta, contrato, brief, factura
- El sistema de contraseñas y accesos que no es un riesgo de seguridad
- Cómo documentar procesos para que tú mismo puedas delegarlos o ejecutarlos sin pensar

**7. El plan de los próximos 30 días**
Dame un plan concreto y secuenciado para implementar los sistemas más urgentes sin paralizarme. Qué hago esta semana, qué hago el mes que viene, qué puedo dejar para más adelante.

Quiero un negocio que funcione bien sin que yo tenga que estar pendiente de todo a todas horas. Ayúdame a construirlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir los sistemas operativos que hacen al negocio freelance predecible y escalable.',
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
