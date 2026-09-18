<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills338Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Eliminación de desperdicios en procesos de marketing con metodología Lean',
                'description'      => 'Aplica los principios Lean al departamento de marketing para eliminar actividades que no generan valor, reducir tiempos de producción de contenido y campañas, y mejorar la eficiencia del equipo. Aprende a identificar los ocho tipos de desperdicio en contextos de marketing digital.',
                'prompt_content'   => <<<EOT
Actúa como un consultor de excelencia operacional con especialización en la aplicación de metodologías Lean y Agile a equipos de marketing. Has trabajado con departamentos de marketing en empresas medianas y grandes, ayudándoles a reducir tiempos de ciclo de producción de contenido en un 40% y a eliminar reuniones y procesos que no agregan valor.

Necesito aplicar los principios Lean a mi departamento de marketing para mejorar nuestra eficiencia y eliminar actividades que consumen tiempo sin generar resultados.

**Mi contexto:**
[Describe tu equipo de marketing: tamaño, estructura, principales actividades (contenido, campañas, eventos, SEO, redes sociales, etc.), los problemas de eficiencia más evidentes y los objetivos que no estás alcanzando por falta de capacidad]

**Parte 1: Diagnóstico Lean del departamento de marketing**

Guíame en el diagnóstico inicial de desperdicios usando los 8 tipos de desperdicio de Lean adaptados a marketing:

1. Sobreproducción: contenido que se crea pero no se publica o no genera tráfico, campañas que se preparan pero no se lanzan, reportes que nadie lee
2. Esperas: tiempo perdido esperando aprobaciones, briefings incompletos, accesos a herramientas, datos de otras áreas
3. Transporte innecesario: transferencias de archivos entre plataformas, comunicación excesiva para tareas simples, escalaciones innecesarias
4. Procesamiento excesivo: reuniones de revisión con demasiados participantes, múltiples rondas de aprobación para contenido de bajo riesgo, diseño manual de lo que podría automatizarse
5. Inventario acumulado: contenido sin publicar, briefs sin ejecutar, ideas en backlog que nunca se priorizan
6. Movimiento innecesario: cambio constante de contexto entre herramientas, interrupciones frecuentes al trabajo profundo
7. Defectos: errores en copy que requieren corrección post-publicación, campañas con configuración incorrecta, datos de reporting erróneos
8. Talento desaprovechado: creativos haciendo trabajo administrativo, estrategas en ejecución manual

Para cada tipo de desperdicio: preguntas de diagnóstico, señales de alerta y ejemplos concretos en marketing.

**Parte 2: Value Stream Mapping para un proceso de marketing**

Construye un mapa de flujo de valor para el proceso de producción de contenido o campañas de mi equipo:

1. Cómo documentar el proceso actual paso a paso (current state map)
2. Cómo identificar dónde se acumula tiempo de espera vs. tiempo de valor añadido
3. Cómo calcular el tiempo de ciclo total y el porcentaje de valor añadido real
4. Cómo diseñar el proceso ideal (future state map) eliminando los cuellos de botella
5. Cómo priorizar qué mejorar primero según el impacto en el flujo

**Parte 3: Eventos Kaizen para marketing**

Diseña un programa de mejora continua para el equipo de marketing:
- Formato de retrospectiva semanal de 30 minutos enfocada en mejoras de proceso
- Cómo identificar y priorizar mejoras pequeñas (quick wins) vs. mejoras estructurales
- Sistema de seguimiento de mejoras implementadas y su impacto
- Cómo involucrar a todo el equipo en la cultura de mejora continua
- Métricas de eficiencia que debería monitorear el equipo semanalmente

**Parte 4: Estandarización y documentación de procesos**

Cómo crear estándares de proceso que reduzcan el desperdicio de manera sostenible:
- Qué procesos de marketing deben estandarizarse primero (mayor impacto o frecuencia)
- Formato de Standard Operating Procedure (SOP) para equipos de marketing
- Cómo crear plantillas y checklists que aceleren la producción sin sacrificar calidad
- Sistema de gestión de knowledge base accesible para todo el equipo

**Parte 5: Automatización de actividades de bajo valor**

Identifica oportunidades de automatización para liberar tiempo creativo:
- Qué tareas repetitivas de marketing pueden automatizarse con herramientas actuales
- Cómo priorizar qué automatizar según tiempo ahorrado vs. costo de implementación
- Automatizaciones de reporting, distribución de contenido y gestión de redes sociales
- Integración de herramientas para eliminar trabajo de copia y transferencia de datos

**Parte 6: Sistema de gestión visual del equipo**

Implementa un tablero Kanban para el equipo de marketing:
- Columnas recomendadas para un equipo de marketing (diferente al desarrollo de software)
- Límites de trabajo en progreso (WIP limits) para evitar la multitarea destructiva
- Reuniones de standup diario de 15 minutos que realmente sean útiles
- Métricas del tablero que revelan cuellos de botella en tiempo real

**Entregables:**
1. Diagnóstico de los 5 principales desperdicios en mi departamento de marketing
2. Mapa de flujo de valor del proceso más crítico (descrito con pasos, tiempos y actores)
3. Plan de mejora de 90 días con iniciativas concretas, responsables y métricas
4. 3 SOPs prioritarios para los procesos más repetitivos y con mayor variabilidad
5. Propuesta de tablero Kanban adaptado a las actividades de mi equipo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Eficiencia de equipo de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Value stream mapping para equipos de desarrollo de software',
                'description'      => 'Aprende a aplicar el mapeo de flujo de valor al proceso de desarrollo de software para identificar cuellos de botella, reducir el tiempo de entrega y mejorar el flujo de trabajo del equipo. Combina principios Lean con prácticas ágiles para crear equipos más eficientes y predecibles.',
                'prompt_content'   => <<<EOT
Actúa como un coach de ingeniería con especialización en DevOps, Lean Software Development y métricas de flujo. Tienes experiencia ayudando a equipos de desarrollo a reducir su tiempo de ciclo (cycle time) hasta en un 60% y a mejorar su tasa de despliegue mediante la eliminación de desperdicios en el proceso de entrega de software.

Quiero aplicar value stream mapping a mi equipo de desarrollo para identificar y eliminar los principales desperdicios en nuestro proceso de entrega.

**Contexto del equipo:**
[Describe el equipo: tamaño, stack tecnológico, metodología actual (Scrum, Kanban, etc.), proceso de entrega, frecuencia de despliegues, los principales problemas de flujo que observas y las métricas actuales si las tienes]

**Sección 1: Fundamentos de Lean para desarrollo de software**

Explícame los principios Lean adaptados al contexto de desarrollo:
- Los 7 desperdicios de Lean Software Development (Poppendieck) y ejemplos concretos en equipos modernos
- La diferencia entre actividad y valor: qué cuenta como valor añadido en software
- Métricas de flujo clave: cycle time, lead time, throughput, work in progress
- Por qué el tiempo de espera suele representar el 80% del lead time en software

**Sección 2: Cómo hacer un Value Stream Map de software**

Guíame paso a paso en la construcción del mapa:

1. Definición del alcance: desde la idea de feature hasta el valor entregado al usuario
2. Identificación de todas las etapas del proceso (discovery, refinement, desarrollo, QA, review, deploy, monitoreo)
3. Para cada etapa: tiempo de proceso (process time) vs. tiempo de espera (wait time)
4. Identificación de cuellos de botella: dónde se acumula el trabajo
5. Cálculo del índice de eficiencia del flujo: tiempo de valor / tiempo total
6. Documentación de problemas de calidad y re-trabajo en cada etapa

**Sección 3: Análisis de desperdicios específicos de software**

Identifica los desperdicios más comunes y cómo detectarlos en mi equipo:
- Trabajo en progreso excesivo: múltiples branches abiertos, sprints sobrecargados
- Re-trabajo por bugs: tiempo dedicado a corregir defectos que pasaron a producción
- Handoffs lentos: esperas entre desarrollo, QA, seguridad y operaciones
- Documentación excesiva o insuficiente que genera aclaraciones posteriores
- Reuniones que no generan decisiones ni avance en el trabajo
- Dependencias externas no gestionadas que bloquean al equipo

**Sección 4: Diseño del future state**

Cómo construir el proceso ideal eliminando los desperdicios identificados:
- Principio de flujo continuo: cómo mover features de principio a fin sin acumulación
- Técnicas para reducir el tamaño de los lotes de trabajo (smaller batches)
- Automatización del pipeline de CI/CD para eliminar desperdicios de integración
- Implementación de límites de WIP (Work In Progress) por etapa
- Definition of Done revisada para evitar re-trabajo en etapas tardías
- Gestión de dependencias externas para reducir tiempos de espera

**Sección 5: Métricas DORA y flujo continuo**

Implementa un sistema de métricas que visibilice el flujo y la mejora:
- Las cuatro métricas DORA: deployment frequency, lead time for changes, change failure rate, MTTR
- Cómo medir el cycle time a nivel de tarea, feature y épica
- Dashboard de flujo: cómo visualizar el work in progress y los cuellos de botella en tiempo real
- Revisión semanal de métricas con el equipo: qué mirar y qué no

**Sección 6: Plan de mejora iterativa**

Diseña el plan de implementación de mejoras:
- Cómo priorizar las mejoras de proceso según impacto vs. esfuerzo
- El evento Kaizen de equipo: cómo hacer una retrospectiva orientada a mejora de proceso
- Cómo implementar cambios de proceso sin interrumpir la entrega de valor
- Indicadores de que el equipo está mejorando y cómo comunicarlo a la dirección

**Entregables:**
1. Guía paso a paso para hacer el value stream map con mi equipo en un taller de 4 horas
2. Plantilla de current state map con todas las etapas y variables a medir
3. Lista de los 5 desperdicios más probables en mi contexto con preguntas de diagnóstico
4. Plan de acción de 60 días con las tres mejoras de mayor impacto
5. Template de dashboard de métricas de flujo para seguimiento semanal
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Mejora del proceso de entrega de software',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Kaizen y mejora continua en procesos de diseño UX/UI',
                'description'      => 'Aplica la filosofía Kaizen y los principios de mejora continua al proceso de diseño para reducir ciclos de revisión, mejorar la calidad de los entregables y crear una cultura de aprendizaje en el equipo. Aprende a documentar procesos de diseño y eliminar ineficiencias sin sacrificar la creatividad.',
                'prompt_content'   => <<<EOT
Actúa como un Design Operations Manager con experiencia en optimización de procesos de diseño en equipos de producto de distintos tamaños. Has implementado sistemas de mejora continua en estudios de diseño y en equipos internos de producto, reduciendo los tiempos de ciclo de diseño hasta en un 50% mientras mejoras la consistencia y calidad de los entregables.

Quiero mejorar la eficiencia y la calidad de los procesos de mi equipo o de mi práctica de diseño aplicando principios de Lean y Kaizen.

**Mi situación:**
[Describe si eres freelancer o parte de un equipo, el tipo de diseño que haces (UX, UI, producto, gráfico), los principales problemas de eficiencia que tienes (demasiadas revisiones, procesos poco claros, herramientas desorganizadas, comunicación ineficiente, etc.) y el tiempo que desperdicias en actividades de bajo valor]

**Capítulo 1: Diagnóstico de ineficiencias en el proceso de diseño**

Identifica los desperdicios más comunes en el trabajo de diseño:

1. Re-trabajo por feedback mal gestionado: demasiadas rondas de revisión, feedback vago o contradictorio, cambios que deshacen trabajo anterior
2. Búsqueda de assets y componentes: tiempo perdido buscando el archivo correcto, versiones desactualizadas, sistemas de archivos caóticos
3. Handoffs ineficientes: desarrolladores que no entienden las especificaciones, falta de documentación de decisiones de diseño
4. Alineamiento tardío: descubrir en fase de diseño que los requisitos no estaban claros, feedback de stakeholders que llega demasiado tarde
5. Trabajo sin contexto: iniciar proyectos sin briefing completo, diseñar sin datos de usuario o sin entender el objetivo de negocio

Para cada tipo de ineficiencia: cómo detectarla, cómo medir su impacto y cómo comenzar a abordarla.

**Capítulo 2: Mapeo del proceso de diseño actual**

Guíame en la documentación y análisis del proceso:
- Cómo mapear el proceso de un proyecto de diseño típico de principio a fin
- Identificación de etapas que añaden valor vs. etapas que son principalmente espera o burocracia
- Cómo calcular cuánto tiempo se dedica a diseño creativo vs. trabajo administrativo
- Métricas básicas de proceso de diseño: tiempo de ciclo por etapa, número de revisiones promedio, porcentaje de re-trabajo

**Capítulo 3: Estandarización de procesos de diseño**

Qué procesos deberías estandarizar y cómo hacerlo:
- El proceso de briefing: qué información necesitas antes de empezar a diseñar
- El proceso de revisión: cómo estructurar las sesiones de feedback para que sean productivas
- El proceso de handoff a desarrollo: documentación mínima viable para evitar preguntas
- El proceso de QA de diseño: checklist antes de entregar cualquier trabajo
- Plantillas de proyecto para los tipos de trabajo más frecuentes

**Capítulo 4: Sistema de componentes y assets como mejora de proceso**

Cómo los sistemas de diseño reducen el desperdicio:
- Qué elementos del sistema de diseño tienen mayor impacto en la velocidad del equipo
- Cómo mantener el sistema de diseño sin que se convierta en una carga en sí mismo
- Criterios para decidir cuándo crear un componente nuevo vs. reusar uno existente
- Naming conventions y organización de archivos que reducen el tiempo de búsqueda

**Capítulo 5: Cultura Kaizen en el equipo de diseño**

Implementa la mejora continua como hábito del equipo:
- Retrospectiva de proyecto de diseño: las preguntas correctas para extraer aprendizajes
- Revisión mensual de proceso: cómo identificar las tres mejoras más impactantes del mes
- Cómo compartir aprendizajes entre proyectos para que el equipo mejore colectivamente
- El role de los experimentos de proceso: cómo probar cambios sin comprometer la entrega

**Capítulo 6: Automatización y herramientas para reducir trabajo manual**

Identifica oportunidades de automatización en el trabajo de diseño:
- Tareas de diseño que pueden automatizarse o semi-automatizarse con plugins o scripts
- Automatización del proceso de exportación y preparación de assets
- Herramientas de gestión de proyectos de diseño que reducen la fricción administrativa
- Integración de feedback en herramientas de diseño para reducir el trabajo de documentación

**Entregables:**
1. Diagnóstico de los 5 principales ineficiencias en mi proceso de diseño actual
2. Mapa del proceso ideal con etapas, responsables y tiempos estimados
3. Checklist de briefing de proyecto que me ahorrará rondas de revisión innecesarias
4. Template de retrospectiva de proyecto de diseño para mi uso o el del equipo
5. Plan de implementación de mejoras para los próximos 45 días con métricas de seguimiento
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejora de procesos en equipos de diseño',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Optimización del proceso de ventas con metodología Lean',
                'description'      => 'Aplica los principios Lean al proceso de ventas para eliminar actividades que no aceleran el cierre, reducir el tiempo de ciclo de ventas y mejorar la tasa de conversión en cada etapa del pipeline. Identifica y elimina los desperdicios más comunes en ciclos de venta B2B.',
                'prompt_content'   => <<<EOT
Actúa como un director de operaciones de ventas (Sales Operations) con experiencia en la aplicación de Lean y mejora de procesos a organizaciones comerciales. Has trabajado con equipos de ventas B2B de distintos tamaños, reduciendo el tiempo de ciclo de ventas y aumentando las tasas de conversión mediante la eliminación de actividades que no aceleran las oportunidades hacia el cierre.

Quiero analizar y optimizar el proceso de ventas de mi equipo o el mío propio aplicando principios Lean para vender más en menos tiempo y con menos esfuerzo.

**Mi contexto:**
[Describe el tipo de ventas (B2B, B2C, inbound, outbound, ciclo corto, ciclo largo), el tamaño del equipo, las etapas actuales del pipeline, el tiempo de ciclo promedio, las principales métricas de conversión y los cuellos de botella más evidentes]

**Módulo 1: Diagnóstico de desperdicios en el proceso de ventas**

Los 8 tipos de desperdicio Lean adaptados al contexto de ventas:

1. Sobreproducción: propuestas enviadas antes de que el prospecto esté listo, personalización excesiva de materiales genéricos, demos a prospectos no calificados
2. Esperas: tiempo perdido esperando respuesta de prospectos, aprobaciones internas de descuentos, materiales del equipo de marketing
3. Transporte innecesario: reasignación de leads entre representantes, escalaciones por falta de autoridad, información que debe pedirse varias veces
4. Procesamiento excesivo: decks de presentación de 50 slides para una primera reunión, propuestas ultra-detalladas para oportunidades pequeñas, administración de CRM manual y redundante
5. Inventario acumulado: leads sin trabajar en la base de datos, oportunidades en el pipeline que llevan meses sin avance real
6. Movimiento: cambio de herramientas para completar una tarea de ventas, ingreso manual de datos en múltiples sistemas
7. Defectos: propuestas con errores, leads con información incorrecta, demos que no responden las preguntas del prospecto
8. Talento desaprovechado: vendedores haciendo reporting manual, tiempo de ejecutivos senior en oportunidades pequeñas

Para cada tipo: señales de alerta y preguntas de diagnóstico para mi contexto.

**Módulo 2: Value stream mapping del proceso de ventas**

Construye el mapa de flujo de valor del ciclo de ventas:
1. Etapas del proceso de ventas de principio a fin (desde la generación del lead hasta el cobro)
2. Para cada etapa: actividades principales, tiempo promedio, responsables y criterios de avance
3. Dónde se pierde más tiempo: etapas con mayor tiempo de espera vs. actividad real
4. Cálculo de la tasa de conversión entre etapas y dónde hay mayor caída
5. Identificación de las tres etapas que más impactan en el tiempo de ciclo total

**Módulo 3: Diseño del proceso de ventas optimizado**

Cómo rediseñar el proceso para aumentar el flujo:
- Criterios de calificación más rigurosos para evitar invertir en oportunidades sin futuro
- Reducción del tiempo entre etapas: técnicas para acelerar la toma de decisión del prospecto
- Estandarización de los mejores procesos del equipo: qué hacen diferente los top performers
- Automatización de tareas administrativas de ventas para que los representantes vendan más
- Definición clara de criterios de avance entre etapas (exit criteria) para evitar pipeline inflado

**Módulo 4: Estandarización de herramientas y recursos de ventas**

Qué estandarizar para eliminar desperdicios de búsqueda y re-trabajo:
- Biblioteca de contenido de ventas organizada y accesible en el momento del necesidad
- Plantillas de email y seguimiento para cada etapa del ciclo de ventas
- Playbooks de objeciones: respuestas estándar a las objeciones más frecuentes
- Templates de propuesta que se personalizan en minutos, no en horas
- Sistema de CRM configurado para reflejar el proceso real de ventas

**Módulo 5: Métricas Lean para el equipo de ventas**

Diseña el sistema de métricas que revele el flujo real:
- Cycle time por etapa: tiempo promedio que una oportunidad pasa en cada fase
- Tasa de conversión entre etapas: dónde se pierde más oportunidades y por qué
- Velocidad del pipeline: cómo calcular la velocidad de las oportunidades hacia el cierre
- Análisis de win/loss: qué aprender de las oportunidades ganadas y perdidas para mejorar el proceso
- Dashboard de operaciones de ventas para el seguimiento semanal del equipo

**Módulo 6: Cultura de mejora continua en ventas**

Cómo implementar Kaizen en un equipo de ventas:
- La retrospectiva de ventas mensual: qué analizar para mejorar el proceso, no solo los resultados
- Cómo documentar y escalar las mejores prácticas del equipo
- Sistema de experimentación en ventas: cómo probar nuevas aproximaciones y medir su impacto
- Cómo involucrar a los representantes de ventas en la mejora del proceso

**Entregables:**
1. Diagnóstico de los 5 principales desperdicios en mi proceso de ventas actual
2. Mapa de flujo de valor del proceso de ventas con tiempos y tasas de conversión estimadas
3. Proceso optimizado con los cambios más impactantes implementados
4. 5 templates de ventas prioritarios para las situaciones más frecuentes
5. Dashboard de métricas de proceso de ventas para seguimiento semanal
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimización del proceso comercial',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Kaizen aplicado al ciclo de descubrimiento y entrega de producto',
                'description'      => 'Aplica la mejora continua al proceso de producto para reducir el tiempo desde la idea hasta la entrega de valor al usuario. Aprende a identificar y eliminar desperdicios en las fases de descubrimiento, priorización, definición y entrega de features.',
                'prompt_content'   => <<<EOT
Actúa como un coach de agilidad de producto con experiencia en Lean Product Development, Continuous Discovery y métricas de flujo en equipos de producto. Has trabajado con product managers y equipos de producto para reducir el tiempo de ciclo desde el insight de usuario hasta el valor en producción, y para crear culturas de experimentación y aprendizaje continuo.

Quiero aplicar principios Lean y Kaizen al proceso de mi equipo de producto para entregar más valor con el mismo o menor esfuerzo y mejorar la predictibilidad de nuestras entregas.

**Mi contexto:**
[Describe tu producto, el tamaño del equipo, la metodología actual, el proceso de discovery y delivery, el tiempo típico desde una idea hasta que está en producción, los principales cuellos de botella y frustraciones actuales]

**Área 1: Lean en el proceso de descubrimiento de producto**

Aplica los principios Lean a la fase de discovery:
- Cómo aplicar el minimum viable research: suficiente evidencia para decidir, no más
- Desperdicios más comunes en el discovery: investigación sin decisiones, insights sin acción, entrevistas que no informan el roadmap
- Técnicas para acelerar el aprendizaje: experimentos pequeños antes de comprometer el desarrollo
- Cómo evitar el "análisis infinito": cuándo hay suficiente evidencia para avanzar
- Continuous Discovery: sistema de entrevistas de usuario semanales que alimenta las decisiones de priorización

**Área 2: Lean en la priorización y gestión del backlog**

Mejora el proceso de priorización para reducir el desperdicio de decisión:
- Desperdicios en el backlog: items que llevan meses sin priorizarse, requisitos que nadie recuerda por qué existen, reuniones de grooming que no terminan en decisiones
- Sistema de priorización ágil y transparente que reduzca el tiempo de decisión
- Límites de WIP aplicados al backlog: cómo mantener un backlog de tamaño manejable
- Cómo manejar la presión de stakeholders sin que el backlog se convierta en un repositorio de peticiones sin priorizar
- Criterios de entrada al sprint: cómo asegurar que los items estén realmente listos antes de comprometerse

**Área 3: Value stream mapping del ciclo completo de producto**

Construye el mapa de flujo de valor de la entrega de producto:
1. Etapas desde la idea hasta el valor en producción (discovery → definición → desarrollo → QA → deploy → validación)
2. Tiempo de proceso y tiempo de espera en cada etapa
3. Handoffs entre equipos: dónde se pierde más tiempo en transferencias
4. Cálculo del lead time total y del porcentaje de tiempo que se añade valor real
5. Los tres mayores cuellos de botella del proceso y su impacto en el tiempo de entrega

**Área 4: Mejora continua en el proceso de definición de features**

Estandariza y mejora la calidad de los inputs del desarrollo:
- Qué información debe tener una user story o spec antes de entrar al sprint
- Cómo reducir las preguntas de los desarrolladores durante el sprint mediante mejor definición previa
- Templates de spec que balancean la información necesaria con la velocidad de escritura
- El proceso de refinamiento de backlog: frecuencia, participantes y duración óptimos
- Cómo documentar decisiones de producto para reducir el re-trabajo por olvido de contexto

**Área 5: Métricas de flujo para equipos de producto**

Implementa el seguimiento de métricas de flujo que revele el rendimiento real:
- Lead time: desde que una idea se acepta hasta que llega al usuario
- Cycle time: desde que el equipo empieza a trabajar hasta que se entrega
- Throughput: cuántas features o items se completan por período
- WIP: cuánto trabajo está en curso en cada momento
- Cómo usar estas métricas para predecir entregas y tomar decisiones de priorización

**Área 6: Retrospectivas de proceso orientadas a mejora Lean**

Transforma las retrospectivas de tu equipo en eventos Kaizen reales:
- La diferencia entre una retrospectiva de mejora de ambiente y una de mejora de proceso
- Formato de retrospectiva orientada a métricas de flujo: qué datos mirar antes de la retro
- Cómo identificar experimentos de proceso que el equipo puede probar en el siguiente sprint
- Sistema de seguimiento de experimentos de proceso para aprender de ellos
- Cómo comunicar las mejoras de proceso a la organización y a los stakeholders

**Entregables:**
1. Mapa de flujo de valor del proceso de producto de mi equipo con análisis de desperdicios
2. Sistema de priorización simplificado con criterios claros para reducir el tiempo de decisión
3. Template de spec de feature optimizado para reducir preguntas durante el desarrollo
4. Plan de mejora de proceso de 90 días con experimentos concretos y métricas de éxito
5. Dashboard de métricas de flujo para el seguimiento semanal del equipo de producto
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mejora del proceso de discovery y entrega',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Lean en recursos humanos: optimización de procesos de selección y onboarding',
                'description'      => 'Aplica los principios Lean a los procesos de selección, contratación e incorporación de empleados para reducir tiempos, mejorar la experiencia del candidato y aumentar la tasa de retención en los primeros 90 días. Elimina burocracia innecesaria sin sacrificar la calidad de las contrataciones.',
                'prompt_content'   => <<<EOT
Actúa como un director de People Operations con experiencia en la transformación Lean de procesos de recursos humanos en empresas en crecimiento. Has reducido los tiempos de cobertura de vacantes en un 40% y mejorado la experiencia del candidato y del nuevo empleado mediante la eliminación de burocracia y la estandarización de procesos clave de RRHH.

Quiero aplicar Lean y mejora de procesos al área de Recursos Humanos, empezando por los procesos de selección y onboarding para hacerlos más eficientes y efectivos.

**Mi contexto:**
[Describe el tamaño de la empresa, la estructura del equipo de RRHH, el volumen de contrataciones, el tiempo promedio actual de cobertura de vacantes, los principales problemas en el proceso de selección y onboarding, y cualquier queja recurrente de candidatos o nuevos empleados]

**Bloque 1: Diagnóstico Lean del proceso de selección**

Identifica los desperdicios más comunes en el proceso de selección:
- Sobreproducción: solicitudes de vacante que tardan semanas en aprobarse, job descriptions que se escriben de cero cada vez, screening de candidatos que no cumplen requisitos básicos
- Esperas: candidatos esperando semanas entre etapas sin comunicación, hiring managers que tardan en dar feedback, aprobaciones de oferta que se demoran internamente
- Procesamiento excesivo: demasiadas rondas de entrevistas, pruebas técnicas desproporcionadas al rol, documentación redundante del proceso
- Defectos: contrataciones de candidatos que no encajan, primeras entrevistas con candidatos que no cumplen los requisitos mínimos, descalificaciones tardías

Para cada desperdicio: impacto en el tiempo de cobertura, impacto en la experiencia del candidato y señales que debería monitorear.

**Bloque 2: Value stream mapping del proceso de selección**

Construye el mapa completo del proceso de reclutamiento:
1. Desde la identificación de la necesidad hasta el primer día del empleado
2. Todas las etapas: aprobación de vacante, publicación, screening, entrevistas (cuántas rondas), evaluaciones, oferta, aceptación, onboarding previo al primer día
3. Tiempo de proceso y tiempo de espera en cada etapa
4. Quién participa en cada etapa y dónde se generan los cuellos de botella
5. Cálculo del time-to-hire actual y el objetivo realista tras la optimización

**Bloque 3: Rediseño del proceso de selección**

Proceso optimizado con las mejoras de mayor impacto:
- Estandarización del job description: template que reduce el tiempo de creación al 30%
- Scorecard de evaluación de candidatos: criterios claros para reducir la subjetividad y acelerar las decisiones
- Guías de entrevista por rol: preguntas estándar para que cualquier entrevistador pueda hacer una buena entrevista
- Proceso de entrevistas reducido al número mínimo necesario: cómo justificar la simplificación internamente
- Comunicación automatizada con candidatos para eliminar el tiempo dedicado a actualizaciones manuales

**Bloque 4: Lean en el proceso de onboarding**

Optimiza la incorporación del nuevo empleado:
- Los desperdicios más comunes en onboarding: documentación en papel, accesos que no están listos, información contradictoria de distintas personas
- Programa de onboarding de 90 días estructurado pero no rígido: hitos claros y experiencia personalizada
- Checklist de pre-boarding: todo lo que debe prepararse antes del primer día
- Sistema de buddy o mentor: cómo estructurar el apoyo del nuevo empleado para que sea efectivo
- Métricas de onboarding: cómo medir si el nuevo empleado está alcanzando la productividad esperada

**Bloque 5: Documentación y estandarización de procesos de RRHH**

Qué procesos de RRHH deben estandarizarse y cómo:
- Los cinco procesos de RRHH con mayor variabilidad y mayor impacto en la experiencia del empleado
- Formato de SOP para procesos de RRHH: conciso, visual y fácil de actualizar
- Sistema de gestión del conocimiento de RRHH: cómo hacer que la información esté siempre actualizada y accesible
- Automatización de procesos administrativos: qué puede automatizarse sin perder el toque humano

**Bloque 6: Métricas de proceso de RRHH**

Define los KPIs que revelan la eficiencia del proceso:
- Time-to-hire: desde la aprobación de la vacante hasta la firma de la oferta
- Time-to-productivity: desde el primer día hasta que el empleado alcanza la productividad esperada
- Candidate experience score: cómo medirlo y usarlo para mejorar el proceso
- Tasa de retención a 90 días y a 12 meses como indicador de calidad de la selección y el onboarding
- Cómo presentar estas métricas a la dirección para demostrar el valor de la optimización

**Entregables:**
1. Mapa de flujo de valor del proceso de selección actual con identificación de los 5 mayores desperdicios
2. Proceso de selección optimizado con todas las etapas, tiempos objetivo y responsables
3. Template de scorecard de evaluación de candidatos para los roles más frecuentes
4. Checklist de onboarding de 90 días con hitos clave para los primeros días, semanas y meses
5. Dashboard de métricas de proceso de RRHH para el seguimiento mensual
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimización de procesos de RRHH',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Eficiencia operacional en el área financiera con principios Lean',
                'description'      => 'Aplica los principios Lean al cierre contable, la elaboración de presupuestos y los procesos de reporting financiero para reducir tiempos, eliminar errores y liberar capacidad del equipo para el análisis de valor añadido. Transforma el departamento de finanzas de centro de costos a socio estratégico del negocio.',
                'prompt_content'   => <<<EOT
Actúa como un CFO con experiencia en la transformación de procesos financieros mediante metodologías Lean y automatización. Has liderado proyectos que redujeron el tiempo de cierre mensual de 10 días a 3 días, han eliminado la mayoría del trabajo manual del reporting y han permitido que el equipo de finanzas dedique más tiempo al análisis y menos a la producción de datos.

Quiero aplicar Lean y mejora de procesos al área de finanzas de mi organización para hacer el equipo más eficiente y centrar el talento en el análisis de alto valor.

**Mi contexto:**
[Describe el tamaño del equipo financiero, el tipo de empresa, los procesos más críticos (cierre mensual, presupuesto, reporting, auditoría, tesorería, etc.), los principales problemas de eficiencia actuales y el tiempo que los procesos críticos consumen actualmente]

**Sección 1: Diagnóstico de desperdicios en el área financiera**

Los 8 desperdicios Lean aplicados al entorno financiero:

1. Sobreproducción: reportes que nadie lee, conciliaciones innecesarias, exceso de granularidad en el presupuesto
2. Esperas: cierre bloqueado por áreas que no entregan datos a tiempo, aprobaciones que se demoran, respuestas de auditores
3. Transporte innecesario: datos que pasan por múltiples manos antes de llegar al reporte final, reconciliaciones manuales entre sistemas
4. Procesamiento excesivo: cierres mensuales con más detalle del necesario para la toma de decisiones, presupuestación bottom-up cuando top-down sería suficiente
5. Inventario: documentos en proceso de aprobación que se acumulan, facturas sin procesar, análisis a medias
6. Movimiento: redigitar datos de un sistema a otro, buscar versiones de archivos Excel, mover datos entre hojas
7. Defectos: errores en el cierre que requieren retratatamiento, datos incorrectos en reportes distribuidos, reconciliaciones fallidas
8. Talento desaprovechado: analistas financieros haciendo extracción manual de datos en lugar de análisis

Para cada tipo: impacto en el tiempo de ciclo del proceso y en la moral del equipo financiero.

**Sección 2: Value stream mapping del cierre mensual**

Construye el mapa del proceso de cierre contable:
1. Todas las etapas desde el último día del mes hasta la distribución del reporting
2. Actividades en cada etapa: qué se hace, quién lo hace y cuánto tiempo lleva
3. Dependencias: qué debe estar listo antes de que cada etapa pueda comenzar
4. Cuellos de botella: dónde se concentra el tiempo y el esfuerzo
5. Cálculo del tiempo de valor añadido vs. tiempo de espera y re-trabajo

**Sección 3: Diseño del cierre mensual optimizado**

Cómo rediseñar el proceso para acelerar el cierre:
- Cierre continuo (continuous close): qué actividades pueden hacerse durante el mes en lugar de al final
- Materialidad y simplificación: qué nivel de detalle es suficiente para la toma de decisiones
- Automatización de conciliaciones y extracción de datos para eliminar trabajo manual
- Calendario de cierre: cronograma de actividades con responsables y tiempos objetivo
- Gestión de dependencias con otras áreas: cómo asegurar que los datos lleguen a tiempo

**Sección 4: Lean en el proceso presupuestario**

Mejora el ciclo de planificación financiera:
- Los principales desperdicios del proceso de presupuesto tradicional: tiempo, iteraciones y precisión falsa
- Metodologías alternativas: rolling forecast vs. presupuesto anual, zero-based budgeting solo donde tiene sentido
- Cómo simplificar el proceso sin perder rigor: qué nivel de detalle es útil para el negocio
- Calendario presupuestario optimizado con hitos claros y responsabilidades definidas
- Cómo usar la tecnología para reducir el tiempo de consolidación y análisis de escenarios

**Sección 5: Estandarización del reporting financiero**

Crea un sistema de reporting que sea eficiente de producir y útil para los receptores:
- Principios de diseño del reporte financiero ideal: qué información, en qué formato y para quién
- Automatización de la producción de reportes: del dato al reporte sin intervención manual
- Estandarización de métricas y definiciones para que todos hablen el mismo idioma
- Reducción del número de reportes: cómo pasar de 20 reportes a 5 que realmente se usen

**Sección 6: Roadmap de transformación del área financiera**

Plan de implementación de mejoras:
- Cómo priorizar qué mejorar primero: impacto vs. esfuerzo vs. riesgo de implementación
- Cómo involucrar al equipo financiero en la mejora de sus propios procesos
- Gestión del cambio: cómo superar la resistencia al cambio en equipos financieros con procesos muy establecidos
- KPIs de eficiencia del área financiera para medir el progreso de la transformación

**Entregables:**
1. Diagnóstico de los 5 principales desperdicios del área financiera con impacto estimado en tiempo
2. Mapa del proceso de cierre mensual actual y propuesta de proceso optimizado
3. Calendario de cierre mensual con todas las actividades, responsables y fechas límite
4. Roadmap de automatización de reporting con prioridades y beneficios esperados
5. Plan de mejora de 6 meses con hitos, métricas de éxito y recursos necesarios
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Optimización del área financiera',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Lean aplicado a la gestión documental y procesos legales internos',
                'description'      => 'Aplica los principios Lean a la gestión de contratos, documentos legales y procesos internos del departamento jurídico para reducir tiempos de respuesta, eliminar burocracia y mejorar el servicio interno a los clientes del negocio. Transforma el departamento legal en un socio ágil del negocio.',
                'prompt_content'   => <<<EOT
Actúa como un General Counsel con experiencia en la transformación de departamentos jurídicos corporativos mediante metodologías Lean y Legal Operations. Has liderado iniciativas que redujeron el tiempo de respuesta del departamento legal en un 50%, disminuyeron el gasto externo en asesoría jurídica y mejoraron la satisfacción de los clientes internos del negocio con el servicio del departamento legal.

Quiero aplicar Lean y mejora de procesos al departamento legal de mi organización para hacerlo más eficiente, ágil y orientado al servicio del negocio.

**Mi contexto:**
[Describe el tamaño del departamento legal, el tipo de empresa, los principales tipos de trabajo (contratos, compliance, litigios, propiedad intelectual, laboral, etc.), el volumen de solicitudes que recibes del negocio y los principales problemas de eficiencia o satisfacción de clientes internos]

**Parte 1: Diagnóstico Lean del departamento legal**

Identifica los principales desperdicios en el trabajo jurídico:

1. Sobreproducción: contratos con cláusulas innecesarias para el nivel de riesgo, due diligence excesivamente detallada para operaciones de bajo valor, memos legales de 20 páginas cuando una página es suficiente
2. Esperas: el negocio esperando días para un contrato estándar, aprobaciones de firmas que se demoran, respuestas de abogados externos lentas
3. Re-trabajo: contratos que vuelven con cambios fundamentales porque el briefing fue incompleto, revisiones de documentos sin registro de cambios claros
4. Procesamiento excesivo: revisión de abogado senior en contratos que podrían aprobar los junior, escalaciones innecesarias para cuestiones estándar
5. Falta de estandarización: redactar cada contrato desde cero cuando podría usarse un template, preguntas repetitivas sobre el mismo tema

**Parte 2: Value stream mapping de los procesos legales más frecuentes**

Mapea el flujo de los procesos de mayor volumen:
- Proceso de revisión y aprobación de contratos comerciales estándar
- Proceso de asesoría legal en contratos de clientes (ventas)
- Proceso de revisión de contratos de proveedores
- Para cada proceso: etapas, tiempos, actores y cuellos de botella

**Parte 3: Estandarización de contratos y documentos legales**

Reduce el trabajo de bajo valor mediante la estandarización:
- Identificación de los 10 tipos de contrato que representan el 80% del volumen
- Desarrollo de templates de contrato para cada tipo: alcance, proceso de revisión abreviada y límites de desviación aceptables
- Playbooks de negociación: qué cláusulas son inamovibles, cuáles son negociables y cuáles se pueden aceptar directamente
- FAQs legales internas para que el negocio resuelva dudas comunes sin necesidad de consultar al equipo legal
- Self-service legal: qué pueden hacer las áreas del negocio por sí mismas con guías adecuadas

**Parte 4: Proceso de intake de solicitudes legales**

Diseña un sistema de solicitudes que mejore el flujo:
- Formulario de solicitud de asesoría legal: información mínima necesaria para comenzar a trabajar
- Triaje de solicitudes: cómo clasificar por urgencia, complejidad y riesgo para asignar los recursos correctos
- SLAs internos: compromisos de tiempo de respuesta diferenciados por tipo y urgencia de solicitud
- Sistema de comunicación proactiva con el cliente interno: cómo mantener informado al negocio durante la tramitación

**Parte 5: Gestión de abogados externos con enfoque Lean**

Cómo mejorar la eficiencia en el uso de despachos externos:
- Instrucciones de trabajo (matter instructions) que reducen el tiempo de briefing y las consultas durante el encargo
- Revisión de facturas: cómo identificar y rechazar cargos por actividades de bajo valor o trabajo redundante
- Paneles de abogados externos: cómo estructurarlo para maximizar eficiencia y minimizar coste
- Acuerdos de honorarios alternativos: cuándo y cómo negociar honorarios fijos o de éxito

**Parte 6: Métricas de Legal Operations**

Define los KPIs que revelan la eficiencia del departamento:
- Tiempo de ciclo por tipo de asunto: desde la solicitud hasta la resolución
- Volumen y distribución de solicitudes por tipo, urgencia y área del negocio
- Satisfacción del cliente interno: cómo medirla y usarla para mejorar el servicio
- Coste por asunto: interno y externo, para identificar oportunidades de optimización
- Tasa de uso de templates y autoservicio: indicador de madurez de la estandarización

**Entregables:**
1. Diagnóstico de los 5 principales ineficiencias del departamento legal con impacto estimado
2. Mapa del proceso de revisión de contratos optimizado con tiempos y criterios de decisión
3. Template de solicitud de asesoría legal con los campos de información mínimos necesarios
4. Propuesta de SLAs internos por tipo de solicitud con criterios de triaje
5. Roadmap de estandarización de contratos: qué hacer en los próximos 90 días
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Eficiencia del departamento jurídico',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Lean en Customer Success: optimización del proceso de onboarding de clientes',
                'description'      => 'Aplica los principios Lean al proceso de onboarding de clientes para reducir el tiempo hasta el primer valor (time-to-value), mejorar la tasa de activación y reducir la carga operacional del equipo de Customer Success. Crea un proceso de onboarding escalable que mejore la experiencia del cliente.',
                'prompt_content'   => <<<EOT
Actúa como un VP of Customer Success con experiencia en la transformación Lean de procesos de onboarding en empresas SaaS de crecimiento acelerado. Has rediseñado procesos de incorporación de clientes que redujeron el time-to-value en un 60%, aumentaron la tasa de activación y permitieron que el equipo gestionara carteras más grandes sin sacrificar la calidad del servicio.

Quiero aplicar Lean y mejora de procesos al onboarding de clientes de mi empresa para hacerlo más eficiente, escalable y efectivo en generar valor para el cliente rápidamente.

**Mi contexto:**
[Describe el producto o servicio, el tipo de clientes (tamaño, sector, perfil técnico), el proceso de onboarding actual, la duración promedio, los principales problemas (clientes que se pierden en el proceso, tiempo excesivo del equipo, clientes que no llegan al primer valor, etc.) y las métricas actuales si las tienes]

**Módulo 1: Diagnóstico de desperdicios en el proceso de onboarding**

Identifica los desperdicios más comunes en el onboarding de clientes:
- Sobreproducción: configuraciones complejas que el cliente nunca usará, formación en funcionalidades que no son las prioritarias para el cliente
- Esperas: cliente esperando que el equipo de CS le asigne tareas, tareas que dependen de información del cliente que no llega a tiempo, configuraciones técnicas que bloquean el progreso
- Re-trabajo: onboarding que tiene que rehacerse porque los requisitos no estaban claros, integraciones que fallan porque el briefing técnico fue incompleto
- Procesamiento excesivo: reuniones de kick-off de 2 horas cuando 30 minutos son suficientes, documentación de implementación que nadie lee
- Variabilidad: cada CS hace el onboarding de manera diferente, sin estándares claros ni mejores prácticas documentadas

**Módulo 2: Value stream mapping del proceso de onboarding**

Construye el mapa completo del proceso:
1. Todas las etapas desde la firma del contrato hasta que el cliente alcanza el primer valor
2. Tiempo de proceso y tiempo de espera en cada etapa
3. Quién hace qué: CS, cliente, equipo técnico, soporte
4. Los tres mayores cuellos de botella: dónde se pierde más tiempo y por qué
5. Cálculo del time-to-value actual y el objetivo tras la optimización

**Módulo 3: Rediseño del proceso de onboarding**

Diseña el proceso optimizado orientado al time-to-value:
- El "first value milestone": cuál es el primer resultado concreto que el cliente debe alcanzar y cómo llegar ahí en el menor tiempo posible
- Priorización del onboarding: qué configurar primero según el mayor impacto para el cliente
- Onboarding en fases: cómo dividir el proceso para que el cliente vea valor antes de que termine la implementación completa
- Autoservicio en el onboarding: qué partes del proceso puede hacer el cliente solo con buenos recursos
- Sesiones de onboarding más cortas y focalizadas vs. sesiones largas y comprensivas

**Módulo 4: Estandarización del proceso de onboarding**

Crea los estándares que permiten escalar el onboarding:
- Playbook de onboarding por segmento de cliente: el proceso no debería ser igual para un cliente enterprise que para uno SMB
- Checklist de kick-off: información que el equipo debe recabar antes de empezar
- Templates de comunicación para cada hito del onboarding
- Guía de recursos de autoservicio: qué debe estar disponible en el portal del cliente
- Proceso de handoff entre ventas y CS: qué información debe transferirse para un onboarding sin fricción

**Módulo 5: Escalabilidad y automatización del onboarding**

Cómo hacer que el proceso crezca sin crecer el equipo en la misma proporción:
- Qué parte del onboarding puede automatizarse (emails, recordatorios, checks de progreso)
- In-app onboarding: cómo el producto puede guiar al usuario sin intervención del CS
- Onboarding en grupo o en cohortes: cuándo tiene sentido agrupar clientes en sesiones compartidas
- Videos y recursos self-service que sustituyen reuniones de bajo valor
- Métricas de salud del onboarding automatizadas que alertan cuándo un cliente necesita ayuda

**Módulo 6: Métricas del proceso de onboarding**

Define los KPIs que revelan el rendimiento del onboarding:
- Time-to-value (TTV): desde la firma hasta el primer valor alcanzado
- Tasa de activación: porcentaje de clientes que completan el onboarding con éxito en el tiempo previsto
- Esfuerzo del equipo de CS por cliente: horas dedicadas al onboarding por segmento
- NPS de onboarding: satisfacción del cliente con el proceso de incorporación
- Correlación onboarding → retención: cómo la calidad del onboarding predice el churn a 6 meses

**Entregables:**
1. Diagnóstico de los 5 principales desperdicios del proceso de onboarding actual
2. Mapa del proceso de onboarding optimizado con tiempos objetivo y responsables
3. Playbook de onboarding para el segmento de cliente más importante
4. Checklist de kick-off y template de primer email al cliente post-firma
5. Sistema de métricas de onboarding con alertas tempranas de clientes en riesgo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimización del onboarding de clientes',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Eficiencia operacional para freelancers: elimina el trabajo que no paga',
                'description'      => 'Aplica los principios Lean a tu práctica como freelancer para identificar y eliminar las actividades que consumen tiempo sin generar ingresos o valor para el cliente. Diseña sistemas y procesos que te permitan trabajar menos horas en tareas administrativas y más en el trabajo creativo o técnico que define tu propuesta de valor.',
                'prompt_content'   => <<<EOT
Actúa como un coach de productividad y operaciones para profesionales independientes con experiencia asesorando a freelancers, consultores y profesionales independientes en la optimización de sus prácticas de negocio. Has ayudado a docenas de freelancers a reducir su carga administrativa en un 50% y a aumentar sus ingresos sin incrementar sus horas de trabajo, mediante la aplicación de principios Lean y la implementación de sistemas simples pero efectivos.

Quiero analizar y optimizar mi práctica como freelancer para reducir el tiempo que dedico a tareas de bajo valor y liberar capacidad para el trabajo que realmente importa y que genera ingresos.

**Mi situación:**
[Describe tu especialidad como freelancer, cuántas horas trabajas por semana, cómo distribuyes aproximadamente tu tiempo (trabajo facturable, ventas, administración, comunicaciones, gestión de proyectos), cuáles son tus principales frustraciones de eficiencia y cuánto tiempo crees que pierdes en actividades de bajo valor]

**Capítulo 1: Auditoría de tiempo y diagnóstico de desperdicios**

Guíame en el análisis honesto de dónde va mi tiempo:
- Metodología de time tracking: cómo registrar el tiempo durante una semana para tener datos reales
- Las ocho categorías de actividad de un freelancer: trabajo facturable, ventas activa, marketing, administración, gestión de proyectos, comunicación con clientes, formación, tiempo improductivo
- Análisis de valor: qué actividades generan ingresos o aceleran el negocio vs. cuáles son desperdicio
- Señales de que tienes demasiado overhead administrativo para el tamaño de tu negocio
- Cómo calcular tu tarifa efectiva real (ingresos / horas totales trabajadas, no solo horas facturadas)

**Capítulo 2: Los principales desperdicios del freelancer**

Identifica los desperdicios más comunes en la práctica independiente:
1. Onboarding de proyectos sin sistema: cada proyecto nuevo empieza de cero, con los mismos intercambios de emails y preguntas
2. Gestión de clientes sin proceso: responder mensajes de clientes sin estructura, disponibilidad perpetua que interrumpe el trabajo profundo
3. Propuestas personalizadas para cada prospecto: invertir horas en propuestas que podrían generarse en 30 minutos con un sistema
4. Facturación y cobro manual: crear facturas desde cero, perseguir pagos sin automatización
5. Archivos y versiones sin sistema: buscar el archivo correcto, enviar versiones desactualizadas, duplicar trabajo de un proyecto a otro
6. Re-trabajo por briefings incompletos: hacer el trabajo, recibir feedback que revela que el objetivo era otro, volver a empezar

Para cada desperdicio: cómo detectarlo, cómo cuantificar el tiempo perdido y cómo eliminarlo.

**Capítulo 3: Sistema operativo mínimo viable para el freelancer**

Diseña el conjunto mínimo de sistemas que necesito implementar:
1. Sistema de intake de proyectos: formulario o proceso de briefing que captura toda la información necesaria antes de empezar
2. Sistema de gestión de proyectos ligero: cómo organizar el trabajo en curso sin sobreingeniería
3. Sistema de comunicación con clientes: canales definidos, tiempos de respuesta establecidos y batching de comunicaciones
4. Sistema de propuestas y contratos: templates que se personalizan en 30 minutos, no en horas
5. Sistema de facturación y cobro: proceso automatizado que reduce el tiempo administrativo al mínimo

**Capítulo 4: Estandarización de los entregables más frecuentes**

Crea un sistema de templates y activos reutilizables:
- Inventario de los tipos de trabajo que repites con más frecuencia
- Para cada tipo: qué partes pueden estandarizarse sin sacrificar la calidad percibida por el cliente
- Sistema de archivos que permite reutilizar trabajo de proyectos anteriores de manera eficiente
- Checklists de calidad para los entregables más frecuentes: garantiza calidad sin re-trabajo

**Capítulo 5: Batching y protección del trabajo profundo**

Cómo organizar el tiempo de trabajo para maximizar la productividad:
- El principio de batching: agrupar tareas similares para reducir el costo del cambio de contexto
- Estructura de la semana de un freelancer eficiente: cuándo hacer trabajo profundo, cuándo atender comunicaciones, cuándo hacer trabajo administrativo
- Técnicas para crear bloques de trabajo profundo ininterrumpido
- Cómo gestionar las expectativas de los clientes sobre disponibilidad sin perder cuentas

**Capítulo 6: Automatización de tareas repetitivas de bajo valor**

Identifica qué automatizar primero para liberar tiempo inmediatamente:
- Automatizaciones de comunicación: recordatorios, seguimientos, confirmaciones de recepción
- Automatización del proceso de onboarding de nuevos clientes
- Herramientas de scheduling que eliminan el ping-pong de coordinación de reuniones
- Automatización de facturación y seguimiento de pagos
- Priorización: qué automatizar primero según tiempo ahorrado vs. tiempo de configuración

**Entregables:**
1. Auditoría de tiempo: template de registro de actividades para una semana con análisis de valor
2. Los 5 principales desperdicios de mi práctica con el tiempo estimado que consume cada uno
3. Plan de implementación de sistemas: qué implementar en los próximos 30 días y en qué orden
4. Template de briefing de proyecto que elimina las rondas de aclaraciones
5. Estructura semanal ideal con bloques de tiempo definidos por tipo de actividad
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Productividad y eficiencia del negocio independiente',
                'vote_score'       => 36,
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
