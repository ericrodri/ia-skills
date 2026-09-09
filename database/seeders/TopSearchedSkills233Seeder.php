<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills233Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Consultoría de marketing: estructurar y entregar recomendaciones',
                'description'      => 'El consultor de marketing que entrega valor desde el primer día: el proceso de diagnóstico, la estructura del informe de recomendaciones y la presentación ejecutiva que convence al cliente de que las recomendaciones van a funcionar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing senior con experiencia trabajando con empresas de distintos sectores y tamaños, desde startups hasta corporaciones, con capacidad para diagnosticar problemas de marketing, estructurar recomendaciones accionables y presentarlas de forma que el cliente las adopte. Voy a explorar contigo cómo estructurar y entregar una consultoría de marketing de alta calidad.

Mi contexto: [describe el proyecto: tipo de cliente, problema que te han contratado para resolver (estrategia de marketing, lanzamiento de producto, optimización de canales, rediseño de marca), y en qué fase estás del proyecto]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El proceso de diagnóstico: entender el problema real antes de dar soluciones**
El error más común en consultoría de marketing es empezar a dar recomendaciones antes de entender completamente la situación del cliente. Explícame el proceso de diagnóstico riguroso: las fuentes de información que hay que revisar en los primeros días (datos de campañas, analytics, investigación de mercado existente, conversaciones con el equipo de marketing y con clientes), las preguntas que hay que hacer en las entrevistas de diagnóstico para descubrir el problema real detrás del problema declarado, y cómo sintetizar la información recopilada para identificar los problemas raíz en lugar de los síntomas.

**2. La estructura del análisis de marketing**
Un análisis de consultoría de marketing tiene capas que van de lo externo a lo interno. Guíame por la estructura de análisis: el análisis del mercado y la competencia (cómo el cliente se posiciona frente a sus competidores, qué hace bien y qué no), el análisis de la posición de la marca (percepción actual vs. percepción deseada), el análisis del funnel de marketing (dónde se pierden los clientes potenciales y por qué), el análisis del portfolio de canales (eficiencia y ROI de cada canal) y el análisis de las capacidades del equipo de marketing (qué puede ejecutar el equipo con sus recursos actuales).

**3. El informe de recomendaciones: estructura y contenido**
Un informe de consultoría de marketing que no se lee es un trabajo perdido. Explícame cómo estructurar el informe de recomendaciones para que sea convincente y accionable: la estructura narrativa que lleva al cliente desde el diagnóstico hasta las recomendaciones de forma lógica, cómo cuantificar el impacto esperado de cada recomendación para que el cliente pueda priorizarlas, el nivel de detalle de cada recomendación (suficiente para entender qué hacer, no tanto que confunda), y cómo presentar las recomendaciones que van a generar resistencia (cambios de estrategia significativos, cuestionar decisiones pasadas) de forma que el cliente las escuche con la mente abierta.

**4. La presentación ejecutiva: convencer sin abrumar**
Los mejores diagnósticos fracasan si la presentación ejecutiva no convence. Propón la estructura de la presentación final al cliente: el resumen ejecutivo de una página que captura el diagnóstico y las tres recomendaciones principales, la presentación de situación actual (cómo mostrar los datos de forma que el cliente reconozca el problema), la lógica de las recomendaciones (por qué estas recomendaciones y no otras), el plan de implementación con hitos y responsables y cómo gestionar las preguntas difíciles y la resistencia del cliente durante la presentación sin perder la credibilidad.

**5. Del informe a la implementación: asegurar el impacto**
Una consultoría cuyo informe queda en un cajón no ha tenido impacto. Explícame las prácticas que maximizan la probabilidad de que las recomendaciones se implementen: cómo involucrar al equipo del cliente durante el proceso de consultoría para que las recomendaciones no les parezcan ajenas (la diferencia entre hacer con el cliente y hacer para el cliente), cómo diseñar el plan de implementación para que sea realista con los recursos del cliente, cómo estructurar el seguimiento post-entrega para que el cliente no quede solo frente a la implementación y cómo medir el impacto de la consultoría con métricas acordadas de antemano.

**6. Construir la reputación de consultor de marketing**
La consultoría de marketing es un negocio de reputación y referidos. Dame el enfoque para construir credibilidad como consultor de marketing: cómo posicionarse en un nicho específico en lugar de ser generalista (y por qué el nicho genera más ingresos), cómo los casos de éxito con clientes anteriores se convierten en herramienta de venta para clientes futuros, cómo generar contenido que demuestra la forma de pensar antes de que el cliente potencial contrate y cómo estructurar la propuesta de consultoría para que el cliente perciba el valor antes de comprometerse.

Quiero frameworks de diagnóstico y estructuras de presentación que pueda adaptar a mis proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estructurar y entregar proyectos de consultoría de marketing con impacto real',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Consultoría técnica: auditar y recomendar',
                'description'      => 'El consultor técnico que entra en una empresa, entiende el sistema en días y produce recomendaciones con credibilidad: el proceso de auditoría de código, arquitectura e infraestructura y el informe técnico que el CTO puede usar para tomar decisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor técnico senior con experiencia auditando sistemas de software y arquitecturas en empresas de distintos sectores, con capacidad para entender un sistema en poco tiempo, identificar los problemas reales (no solo los síntomas) y producir recomendaciones que el equipo técnico y el liderazgo pueden implementar. Voy a explorar contigo cómo estructurar y ejecutar una consultoría técnica de alta calidad.

Mi contexto: [describe el proyecto: tipo de empresa, sistema que hay que auditar (arquitectura monolítica, microservicios, sistema legacy, infraestructura cloud), el problema declarado por el cliente y los recursos disponibles para la auditoría]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico inicial: entender el sistema en días, no en semanas**
El consultor técnico tiene una ventana estrecha para ganarse la credibilidad del equipo de ingeniería. Explícame el proceso de diagnosis rápida: las fuentes de información que hay que revisar en los primeros días (la documentación arquitectónica existente, el historial de incidencias, las métricas de sistema, el backlog de deuda técnica), las conversaciones que hay que tener con el equipo de ingeniería para entender tanto la situación técnica como la política interna, y cómo sintetizar la información rápidamente para identificar las áreas de mayor riesgo donde profundizar.

**2. La auditoría de código y arquitectura**
Una auditoría técnica rigurosa no es solo leer código: es entender las decisiones de diseño y sus consecuencias. Guíame por el proceso de auditoría: cómo revisar la arquitectura de alto nivel (los patrones arquitectónicos usados, las dependencias entre componentes, los puntos únicos de fallo), cómo hacer el code review de las partes más críticas del sistema (qué buscar: complejidad ciclomática, cobertura de tests, gestión de errores, seguridad básica), cómo evaluar la infraestructura y el proceso de despliegue (el pipeline de CI/CD, la estrategia de escalado, la gestión de secretos) y cómo priorizar qué revisar cuando el tiempo es limitado.

**3. La identificación y priorización de problemas**
Una auditoría técnica puede encontrar docenas de problemas. El valor del consultor está en priorizarlos correctamente. Explícame el framework de priorización de problemas técnicos: cómo categorizar los hallazgos por criticidad (riesgo de seguridad, riesgo de disponibilidad, deuda técnica que ralentiza el desarrollo, oportunidades de optimización), cómo estimar el impacto de cada problema en términos de negocio (pérdida de ingresos, riesgo reputacional, coste de ingeniería a largo plazo) y cómo presentar la priorización al CTO de forma que entienda por qué se recomienda abordar los problemas en ese orden.

**4. El informe técnico: escribir para el CTO y el board**
El informe técnico que solo puede leer un ingeniero senior no es un buen informe de consultoría. Propón la estructura del informe técnico que funciona para múltiples audiencias: el resumen ejecutivo para el board (el estado del sistema, los tres riesgos principales y el plan de acción en lenguaje de negocio), la sección de hallazgos detallados para el CTO y el equipo de arquitectura (evidencia técnica, impacto estimado, recomendación concreta), el plan de implementación con fases y estimaciones y el apéndice técnico para el equipo de ingeniería (los hallazgos específicos de código con ejemplos concretos).

**5. La gestión de la dinámica política de la auditoría**
Las auditorías técnicas generan resistencia porque implican criticar el trabajo del equipo. Explícame cómo gestionar la dinámica política: cómo ganarse la confianza del equipo de ingeniería desde el primer día (el equipo que confía en el consultor comparte más información, el que desconfía oculta los problemas reales), cómo presentar los hallazgos de forma que no sea una lista de reproches al equipo sino un mapa para el siguiente nivel, cómo gestionar al CTO que se pone a la defensiva cuando los problemas encontrados son el resultado de sus decisiones pasadas y cómo manejar el conflicto entre lo que el cliente necesita escuchar y lo que quiere escuchar.

**6. Del informe a la implementación: asegurar el impacto de la consultoría técnica**
Una auditoría técnica que no cambia nada es un ejercicio intelectual caro. Dame las prácticas que maximizan la probabilidad de implementación: cómo diseñar las recomendaciones para que sean implementables con el equipo y los recursos del cliente (sin depender de condiciones ideales), cómo hacer el handoff del informe al equipo de ingeniería para que la implementación arranque con momentum, cómo estructurar el seguimiento post-entrega y cómo el consultor puede ofrecer soporte de implementación sin crear dependencia.

Quiero un proceso de auditoría concreto que pueda usar como guía en mis próximos proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Ejecutar auditorías técnicas y entregar recomendaciones que el equipo implementa',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Consultoría de diseño: de la auditoría al rediseño',
                'description'      => 'El consultor de diseño que evalúa la experiencia de usuario de un producto y entrega un plan de mejora: el proceso de heuristic evaluation, el informe de hallazgos y la priorización de mejoras que el cliente puede implementar en sprints.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de experiencia de usuario con experiencia ejecutando auditorías de diseño y UX para productos digitales en empresas de distintos sectores, con capacidad para identificar problemas de usabilidad con rigor metodológico y producir recomendaciones que los equipos de producto e ingeniería pueden implementar. Voy a explorar contigo cómo estructurar y ejecutar una consultoría de diseño UX de alta calidad.

Mi contexto: [describe el proyecto: tipo de producto digital (app móvil, web app, plataforma B2B, e-commerce), el problema declarado por el cliente (conversión baja, abandono, feedback negativo de usuarios, rediseño completo) y los recursos disponibles]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico: entender el producto y sus usuarios antes de evaluar**
Una consultoría de diseño que empieza con soluciones antes de entender el contexto produce recomendaciones genéricas que el cliente no puede implementar. Explícame el proceso de diagnóstico inicial: las fuentes de información que hay que revisar (analytics de comportamiento, grabaciones de sesiones, feedback de usuarios, tickets de soporte sobre problemas de UX, entrevistas con el equipo de producto y diseño), las preguntas que revelan el problema real detrás del problema declarado y cómo desarrollar la hipótesis inicial sobre dónde están los problemas más graves antes de empezar la evaluación formal.

**2. La heuristic evaluation: auditoría estructurada de la experiencia**
La evaluación heurística es el método más eficiente para identificar problemas de usabilidad sin necesidad de usuarios. Explícame cómo ejecutar una heuristic evaluation rigurosa: las heurísticas de Nielsen como framework de partida y cómo adaptarlas al tipo de producto que se evalúa, el proceso de recorrer el producto sistemáticamente (los flujos críticos que hay que auditar, cómo documentar los hallazgos de forma que sean reproducibles), cómo calibrar la severidad de cada hallazgo (de problema cosmético a bloqueante crítico) y cómo combinar la evaluación heurística con los datos de analytics para priorizar los problemas que más impacto tienen en el comportamiento real del usuario.

**3. El user testing como parte de la consultoría**
La evaluación heurística identifica los problemas que el experto puede detectar. El user testing revela los problemas que solo emergen con usuarios reales. Guíame por la integración del user testing en la consultoría de diseño: cuándo es necesario hacer user testing (y cuándo la evaluación heurística es suficiente), cómo diseñar una sesión de user testing de 5 participantes que revela los problemas más importantes, cómo ejecutar las sesiones de forma que el cliente esté presente y vea con sus propios ojos los problemas (ningún informe es tan convincente como ver a un usuario perdido en su propio producto) y cómo sintetizar los hallazgos del testing de forma eficiente.

**4. El informe de hallazgos: de los problemas a las oportunidades**
Un informe de consultoría UX que solo lista problemas genera resistencia defensiva en el equipo. Explícame cómo estructurar el informe de hallazgos para que sea un mapa de mejora, no una acusación: la estructura que va de los problemas más graves a los más leves con evidencia específica de cada uno, cómo presentar cada hallazgo con el impacto estimado en el negocio (conversión, retención, satisfacción del usuario), cómo incluir mockups o wireframes de soluciones potenciales para que el equipo vea el camino hacia la mejora y cómo calibrar el nivel de detalle para que el informe sea útil sin ser abrumador.

**5. La priorización del plan de mejora**
Los clientes de consultoría UX tienen recursos limitados y necesitan saber por dónde empezar. Propón el framework de priorización de las mejoras: la matriz impacto/esfuerzo que organiza los hallazgos en quick wins (alto impacto, bajo esfuerzo), proyectos estratégicos (alto impacto, alto esfuerzo), relleno (bajo impacto, bajo esfuerzo) y agujeros negros (bajo impacto, alto esfuerzo), cómo estimar el esfuerzo de implementación de forma que sea útil para el equipo de ingeniería del cliente, y cómo agrupar los hallazgos relacionados en proyectos de rediseño coherentes que el equipo puede abordar en sprints.

**6. El handoff y el seguimiento post-consultoría**
Una consultoría de diseño que termina con la entrega del informe raramente genera impacto duradero. Dame las prácticas de handoff y seguimiento: cómo presentar el informe en una sesión de trabajo con el equipo de producto e ingeniería (en lugar de solo con el management) para que los que van a implementar entiendan el razonamiento detrás de cada recomendación, cómo transferir los assets de diseño al equipo (los wireframes, los prototipos, las especificaciones de interacción), cómo estructurar el seguimiento a los 3 y 6 meses para medir el impacto de las mejoras implementadas y cómo usar esos datos para construir el caso de negocio de una segunda fase de la consultoría.

Quiero metodologías y plantillas concretas que pueda adaptar a mis proyectos de consultoría.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Ejecutar auditorías de diseño UX y entregar planes de mejora accionables',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Consultoría de ventas: diagnosticar y mejorar el proceso comercial',
                'description'      => 'El consultor comercial que entra en una empresa, analiza el proceso de ventas y produce el plan de mejora: el diagnóstico de win rates, la identificación de cuellos de botella y las recomendaciones que el equipo puede implementar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas y revenue operations con experiencia diagnosticando y transformando procesos comerciales en empresas SaaS B2B y de servicios profesionales con equipos de ventas de entre 5 y 50 personas. Voy a explorar contigo cómo estructurar y ejecutar una consultoría de ventas de alta calidad.

Mi contexto: [describe el proyecto: tipo de empresa, modelo de ventas (inside sales, field sales, channel), el síntoma declarado por el cliente (win rate bajo, ciclo de ventas demasiado largo, pipeline inflado, cuotas no alcanzadas) y los recursos disponibles para la consultoría]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico del proceso comercial: datos primero**
El consultor de ventas que llega con soluciones antes de ver los datos pierde credibilidad desde el primer día. Explícame el proceso de diagnóstico basado en datos: las métricas que hay que extraer del CRM para entender la salud del proceso comercial (win rate por stage, cycle time por segmento, distribución del pipeline por vendedor, ratio de conversión entre stages), las entrevistas de diagnóstico con el equipo de ventas y los managers que revelan los problemas que los datos no capturan (la cultura de forecasting, las barreras no declaradas del proceso, la relación entre el equipo de ventas y marketing), y cómo sintetizar datos cuantitativos y cualitativos para formular la hipótesis de dónde están los problemas reales.

**2. El análisis de win/loss: aprender de lo que pasa en las oportunidades**
El análisis de win/loss es la fuente de información más valiosa para el diagnóstico de ventas y la más infrautilizada. Guíame por el proceso de análisis de win/loss: cómo estructurar las conversaciones con clientes ganados (para entender qué fue determinante en la decisión de compra) y con clientes perdidos (para entender por qué eligieron a la competencia), los patrones que emergen de analizar 20-30 deals con suficiente profundidad, cómo presentar los hallazgos del win/loss al equipo de ventas de forma que generen cambio de comportamiento en lugar de debate sobre casos específicos, y cómo implementar el proceso de win/loss como práctica continua del equipo.

**3. La identificación de cuellos de botella en el funnel de ventas**
Cada proceso de ventas tiene uno o dos cuellos de botella que explican la mayor parte de la pérdida de oportunidades. Explícame cómo identificarlos: el análisis de la distribución de oportunidades por stage (el acumulo de oportunidades estancadas en un stage específico es la señal más clara de un cuello de botella), el análisis de las razones de cierre perdido por stage (qué etapa del proceso genera más pérdidas y por qué), cómo distinguir entre un problema de proceso (el equipo no tiene las herramientas o el proceso para avanzar oportunidades) y un problema de personas (el equipo no tiene las habilidades para hacerlo) y cómo cuantificar el impacto económico de cada cuello de botella.

**4. Las recomendaciones: del diagnóstico al plan de mejora**
Las recomendaciones de consultoría de ventas que no tienen en cuenta la capacidad de implementación del cliente no se implementan. Propón el proceso de construcción del plan de mejora: cómo priorizar las recomendaciones por impacto en los ingresos vs. facilidad de implementación con el equipo actual, la estructura del plan de mejora (qué cambiar en el proceso, qué cambiar en el CRM, qué desarrollar en el equipo), cómo diseñar el roadmap de implementación en fases para que el equipo vea resultados en las primeras semanas sin sobrecargar al management y cómo presentar las recomendaciones al CEO y al director de ventas de forma que tengan el buy-in necesario para implementar.

**5. El sales playbook como entregable de la consultoría**
El mejor entregable de una consultoría de ventas no es solo un informe: es el sales playbook que documenta el proceso comercial ideal y cómo ejecutarlo. Explícame cómo construir un sales playbook como entregable de la consultoría: los componentes del playbook (el ICP y los buyer personas, el proceso de ventas step by step con criterios de avance entre stages, los talk tracks por tipo de objeción, las herramientas de sales enablement para cada fase del proceso) y cómo transferir el playbook al equipo para que lo adopten en lugar de archivarlo.

**6. Medir el impacto de la consultoría de ventas**
El consultor de ventas que no puede demostrar el impacto de su trabajo en los ingresos del cliente no puede justificar sus honorarios. Dame el framework de medición del impacto: las métricas de proceso que mejoran primero (win rate por stage, cycle time, ratio de conversión), las métricas de resultado que tardan más en reflejarse (ARR, cuota cumplida, churn de clientes nuevos que se adquieren bien vs. los que se adquieren mal), el proceso de revisión mensual durante los primeros seis meses post-consultoría para medir el avance y ajustar el plan si los resultados no son los esperados.

Quiero un framework de diagnóstico concreto y la estructura del sales playbook que pueda adaptar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diagnosticar y transformar el proceso comercial de una empresa',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Consultoría de producto: la auditoría de product/market fit',
                'description'      => 'El consultor de producto que evalúa si el producto tiene lo que necesita para crecer: el análisis de retención, el mapa de jobs-to-be-done y las recomendaciones de roadmap que el equipo puede ejecutar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de producto con experiencia auditando el product/market fit de productos digitales en empresas SaaS B2B y B2C, con capacidad para combinar el análisis de datos de producto con la investigación cualitativa de usuarios y producir recomendaciones de roadmap que el equipo puede ejecutar. Voy a explorar contigo cómo estructurar y ejecutar una auditoría de product/market fit.

Mi contexto: [describe el producto y la empresa: etapa del producto (pre-PMF, crecimiento temprano, escalado), el síntoma que ha generado la necesidad de la auditoría (retención baja, crecimiento estancado, señales contradictorias de los usuarios) y los datos disponibles]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Qué es el PMF y cómo reconocer cuándo no lo tienes**
El product/market fit es el concepto más citado y menos entendido del mundo del producto. Explícame cómo evaluar si un producto tiene PMF real: las señales cuantitativas (la curva de retención que se aplana, el NPS que supera un umbral específico, el ratio de usuarios que responderían "muy decepcionado" si el producto desapareciera), las señales cualitativas (los usuarios que hablan del producto sin que nadie se los pida, la aceleración orgánica del crecimiento), las señales falsas de PMF que confunden a los equipos (el crecimiento impulsado por publicidad, la retención de usuarios que no son el ICP real) y cómo distinguir entre un problema de PMF y un problema de go-to-market.

**2. El análisis de retención: la métrica que más importa**
La retención es la prueba empírica del PMF. Guíame por el análisis de retención profundo: cómo segmentar la retención por cohortes para ver la evolución en el tiempo, cómo analizar la retención por segmento de usuario para identificar qué perfil de cliente retiene bien (el ICP real) y cuál retiene mal (el cliente que parece ideal pero no lo es), cómo analizar los patrones de comportamiento de los usuarios que retienen vs. los que se dan de baja para identificar las acciones que predicen el éxito del cliente y cómo comunicar los hallazgos del análisis de retención al equipo de producto e inversores de forma que sean accionables.

**3. El mapa de jobs-to-be-done: entender por qué los usuarios usan el producto**
Los datos de retención dicen qué está pasando pero no por qué. El framework de jobs-to-be-done es la herramienta para entenderlo. Explícame cómo construir el mapa de jobs-to-be-done como parte de la auditoría: el proceso de entrevistas con usuarios que han retenido (para entender qué job están contratando el producto para hacer), las entrevistas con usuarios que se han dado de baja (para entender por qué dejaron de contratar el producto), cómo sintetizar las entrevistas en un mapa de jobs que el equipo de producto puede usar para tomar decisiones de roadmap y cómo identificar los jobs mal atendidos que representan la mayor oportunidad de mejora del producto.

**4. La auditoría del producto: usabilidad, funcionalidad y diferenciación**
Una auditoría de PMF no es solo investigación de usuarios: también incluye una evaluación crítica del producto en sí. Propón el proceso de auditoría del producto: cómo evaluar la usabilidad del onboarding (el momento más crítico para la retención temprana), cómo comparar la funcionalidad del producto con la competencia para identificar gaps y ventajas, cómo evaluar la diferenciación real del producto (qué hace el producto que los competidores no hacen igual de bien) y cómo identificar las funcionalidades que el equipo ha construido y que los usuarios no usan, que son una señal de desalineación con los jobs-to-be-done.

**5. Las recomendaciones de roadmap: de la auditoría a la acción**
Una auditoría de PMF que no produce un roadmap accionable no tiene valor práctico. Explícame cómo traducir los hallazgos de la auditoría en recomendaciones de roadmap: cómo priorizar las mejoras según su impacto esperado en la retención (el criterio más importante en la fase de búsqueda del PMF), cómo distinguir las mejoras que refuerzan el core del producto (las que hay que hacer primero) de las mejoras que expanden las funcionalidades (las que tienen sentido después del PMF), cómo presentar el roadmap recomendado al CEO y al equipo de producto de forma que tenga el buy-in necesario para ejecutarlo y cómo estructurar los experimentos para validar las hipótesis de mejora antes de comprometer recursos completos.

**6. El seguimiento post-auditoría: medir el impacto en el PMF**
Una consultoría de producto que no tiene un mecanismo de seguimiento no puede aprender si sus recomendaciones funcionan. Dame el framework de seguimiento post-auditoría: las métricas que hay que monitorizar en los meses siguientes (la curva de retención, el tiempo hasta la activación, el NPS), la cadencia de revisión con el equipo del cliente (revisión mensual de las métricas de PMF), cómo distinguir entre una mejora que está funcionando y ruido estadístico y cómo el consultor puede añadir valor en el seguimiento sin convertirse en un empleado a tiempo parcial del cliente.

Quiero metodologías de análisis y frameworks de priorización que pueda aplicar en proyectos reales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Auditar el product/market fit y entregar recomendaciones de roadmap accionables',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Consultoría de RRHH: diagnóstico organizacional',
                'description'      => 'El consultor de recursos humanos que hace el diagnóstico de la función de personas: la auditoría de procesos, la evaluación de la cultura y el plan de mejora que convierte un departamento de RRHH reactivo en uno estratégico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de recursos humanos y desarrollo organizacional con experiencia realizando diagnósticos de la función de personas en empresas en crecimiento y en transición, con capacidad para identificar los problemas reales en los procesos, la cultura y las capacidades del equipo de personas y producir planes de mejora que el departamento puede implementar. Voy a explorar contigo cómo estructurar y ejecutar una consultoría de RRHH y diagnóstico organizacional.

Mi contexto: [describe el cliente: tamaño de la empresa, etapa (startup en crecimiento, empresa consolidada en transformación, empresa con problemas de retención o cultura), el síntoma que ha generado la necesidad del diagnóstico y el acceso que tendrás al equipo y los datos]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico de la función de personas: estructura y fuentes**
Un diagnóstico organizacional riguroso requiere múltiples fuentes de información que se complementan. Explícame la estructura del diagnóstico: las fuentes de datos cuantitativos (métricas de RRHH como turnover, time-to-hire, distribución de performance, costes de personal), las entrevistas con stakeholders clave (CEO, managers, HRBP, empleados de distintos niveles y departamentos), las encuestas de clima y engagement (cuándo hacer una encuesta específica vs. usar datos existentes) y cómo triangular estas fuentes para distinguir los problemas reales de las percepciones subjetivas de algunos empleados.

**2. La auditoría de los procesos de RRHH**
Los procesos de RRHH que no funcionan consumen tiempo y generan frustración sin producir los resultados esperados. Guíame por la auditoría de los procesos críticos de RRHH: el proceso de selección y contratación (desde el job description hasta la oferta, pasando por la eficiencia del proceso y la calidad de la contratación), el proceso de onboarding (la velocidad con que los nuevos empleados alcanzan productividad plena), el proceso de performance management (la calidad de los objetivos, la frecuencia y calidad del feedback, la conexión entre performance y compensación) y el proceso de desarrollo y promoción (si los empleados con más potencial sienten que la empresa invierte en su desarrollo).

**3. El diagnóstico de la cultura organizacional**
La cultura es el factor más difícil de diagnosticar porque no aparece en los documentos ni en las políticas: aparece en los comportamientos reales. Explícame las herramientas para diagnosticar la cultura: los modelos de cultura que sirven como framework de análisis (como el Competing Values Framework de Quinn), las preguntas de entrevista que revelan la cultura real (qué se premia y qué se castiga realmente, quién avanza en la empresa y por qué), cómo identificar la brecha entre la cultura declarada (los valores en la web y los posters de la oficina) y la cultura vivida (cómo se toman las decisiones, cómo se trata el fracaso) y cómo presentar el diagnóstico de cultura de forma que no sea defensivo sino constructivo.

**4. El informe de diagnóstico y el plan de mejora**
El diagnóstico organizacional solo vale si produce un plan que la empresa puede implementar. Propón la estructura del informe y el plan de mejora: el resumen ejecutivo para el CEO y el board (los dos o tres problemas más críticos y su impacto en el negocio), la sección de diagnóstico detallado para el director de RRHH (evidencia de cada problema con datos y observaciones cualitativas), el plan de mejora priorizado (qué cambiar en los procesos, qué cambiar en la estructura, qué desarrollar en las capacidades del equipo de personas) y el roadmap de implementación por fases.

**5. La gestión del cambio en la consultoría de RRHH**
Las recomendaciones de un diagnóstico organizacional invariablemente implican cambios que generan resistencia. Explícame cómo gestionar el cambio en el contexto de la consultoría de RRHH: cómo conseguir el buy-in del CEO antes de presentar el diagnóstico (para que las recomendaciones críticas tengan el respaldo del liderazgo), cómo presentar los problemas de cultura o liderazgo de forma que los managers afectados los reciban como una oportunidad de mejora y no como una amenaza, cómo involucrar a los managers y empleados clave en el diseño del plan de mejora (el plan que el equipo co-diseña tiene más probabilidades de implementarse) y cómo gestionar las expectativas sobre la velocidad del cambio organizacional.

**6. Posicionarse como consultor de RRHH y desarrollo organizacional**
La consultoría de RRHH es un mercado donde la credibilidad y la confianza son los activos más importantes. Dame el enfoque para construir una práctica de consultoría de RRHH: cómo posicionarse en un nicho específico (selección, cultura, compensación, desarrollo del liderazgo) para diferenciarse de los generalistas, cómo construir la credibilidad con potenciales clientes que necesitan confiar antes de dar acceso a la información más sensible de la empresa, cómo estructurar los proyectos y los honorarios de forma que el cliente perciba el valor desde el primer entregable y cómo convertir un proyecto de diagnóstico en una relación de asesoramiento continuo.

Quiero metodologías de diagnóstico concretas y la estructura del informe que pueda adaptar a mis proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Ejecutar diagnósticos organizacionales y entregar planes de mejora de la función de personas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Consultoría financiera: el diagnóstico de la salud financiera',
                'description'      => 'El consultor financiero que evalúa la situación de una empresa y entrega las recomendaciones: el análisis de los estados financieros, la identificación de los problemas y el plan de acción que el equipo directivo puede implementar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor financiero independiente con experiencia realizando diagnósticos de salud financiera para empresas de tamaño medio en sectores variados, con capacidad para analizar estados financieros con profundidad, identificar los problemas reales y producir recomendaciones que el equipo directivo puede implementar. Voy a explorar contigo cómo estructurar y ejecutar un diagnóstico financiero de alta calidad.

Mi contexto: [describe el cliente: sector, tamaño (facturación, número de empleados), el síntoma que ha generado la necesidad del diagnóstico (pérdidas crecientes, problemas de tesorería, márgenes en deterioro, preparación para una transacción) y los estados financieros disponibles]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El proceso de diagnóstico financiero: qué analizar y en qué orden**
Un diagnóstico financiero riguroso no empieza por los detalles sino por la imagen global. Explícame el proceso de diagnóstico en orden: la primera lectura de los estados financieros (qué buscar en el P&L, el balance y el cash flow statement en la primera hora de análisis), las preguntas que hay que hacer al equipo directivo y al CFO para entender el contexto detrás de los números (las decisiones estratégicas que explican las cifras, los factores externos que han afectado los resultados), y cómo combinar el análisis cuantitativo con el contexto cualitativo para formular la hipótesis inicial sobre dónde están los problemas más importantes.

**2. El análisis de los estados financieros: más allá de las cifras**
Un buen diagnóstico financiero va más allá de calcular ratios: interpreta lo que los números dicen sobre el negocio. Guíame por el análisis profundo de cada estado financiero: el análisis del P&L (la evolución de los márgenes bruto y operativo, la estructura de costes y los drivers de variación, los gastos que crecen más rápido que los ingresos), el análisis del balance (la estructura del capital, el endeudamiento y la capacidad de deuda adicional, la eficiencia del capital empleado), el análisis del cash flow (la diferencia entre el beneficio contable y la generación real de caja, los drenajes de caja que no aparecen en el P&L) y el análisis de los ratios financieros clave en el contexto del sector.

**3. La identificación de los problemas raíz**
El diagnóstico financiero que solo describe síntomas no produce recomendaciones útiles. Explícame cómo identificar los problemas raíz detrás de los síntomas financieros: la diferencia entre un problema de rentabilidad (los márgenes son insuficientes) y un problema de eficiencia (la empresa tiene costes más altos que sus competidores por las mismas actividades), entre un problema de liquidez (no tiene suficiente caja para operar) y un problema de solvencia (la estructura financiera no es viable a medio plazo), entre un problema operativo (el negocio en sí no funciona bien) y un problema financiero (el negocio funciona pero está mal financiado), y cómo presentar esta distinción al equipo directivo de forma que entiendan la gravedad real de la situación.

**4. El informe de diagnóstico financiero: estructura y contenido**
Un informe financiero que solo presenta números sin interpretación no ayuda al directivo que tiene que tomar decisiones. Propón la estructura del informe de diagnóstico financiero: el resumen ejecutivo de dos páginas con el diagnóstico y las tres o cuatro recomendaciones principales (en lenguaje que entiende el CEO aunque no sea financiero), la sección de diagnóstico detallado con el análisis de cada estado financiero y las conclusiones, las recomendaciones con el impacto financiero cuantificado de cada una, el plan de acción con prioridades y responsables y el modelo financiero con los escenarios de mejora (qué pasa si se implementan las recomendaciones).

**5. El plan de mejora financiera: de las recomendaciones a la acción**
Las recomendaciones financieras que no tienen en cuenta la capacidad de implementación del equipo directivo no se implementan. Explícame cómo construir el plan de mejora: cómo priorizar las recomendaciones entre las que mejoran la tesorería a corto plazo (urgentes), las que mejoran la rentabilidad a medio plazo (importantes) y las que optimizan la estructura financiera a largo plazo (estratégicas), cómo diseñar el plan de implementación para que tenga quick wins en las primeras semanas que generen el momentum para los cambios más difíciles y cómo hacer el seguimiento de la implementación del plan con el equipo directivo.

**6. La gestión de las conversaciones difíciles en la consultoría financiera**
El diagnóstico financiero a menudo revela problemas que los directivos no quieren escuchar. Dame estrategias para las conversaciones difíciles: cómo comunicar que la empresa está en una situación más grave de lo que el cliente cree (sin generar pánico ni perder la credibilidad), cómo gestionar al directivo que ha tomado las decisiones que han generado los problemas y que se pone defensivo, cómo presentar recomendaciones que implican decisiones dolorosas (reducción de costes, cambios de estructura, renegociación de deuda) de forma que el cliente las escuche y las acepte como necesarias y cómo manejar la tensión entre la independencia del consultor y el deseo del cliente de que le digan lo que quiere escuchar.

Quiero un proceso de diagnóstico y una estructura de informe concretos que pueda usar en mis proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Ejecutar diagnósticos financieros y entregar planes de mejora que el equipo directivo implementa',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Consultoría jurídica externa: el modelo del despacho asesor',
                'description'      => 'El despacho de abogados que asesora a empresas de forma estratégica: el modelo de relación, los protocolos de comunicación y el proceso que hace que el asesor externo sea visto como un socio estratégico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un socio de un despacho de abogados especializado en asesoramiento corporativo con experiencia estructurando relaciones de asesoramiento externo que van más allá de la prestación de servicios jurídicos puntuales, con conocimiento de cómo los mejores despachos se posicionan como asesores estratégicos en lugar de proveedores de servicios jurídicos. Voy a explorar contigo cómo construir y gestionar el modelo del despacho asesor externo.

Mi contexto: [describe tu situación: eres el despacho externo que quiere transformar su modelo de relación con clientes, o eres el departamento jurídico interno que quiere mejorar la relación con sus despachos externos, o estás en una empresa sin departamento jurídico interno que quiere externalizar el asesoramiento legal]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El modelo de asesoramiento externo: de proveedor a socio**
La diferencia entre un despacho que recibe encargos puntuales y uno que actúa como asesor estratégico no está en el conocimiento técnico: está en el modelo de relación. Explícame qué diferencia al asesor estratégico del proveedor de servicios jurídicos: el conocimiento profundo del negocio del cliente (más allá de los asuntos en los que trabaja), la proactividad en identificar riesgos jurídicos antes de que sean problemas, la capacidad de dar opiniones directas en lugar de análisis exhaustivos que no ayudan a decidir y la relación de confianza que hace que el cliente llame antes de tomar una decisión importante, no después.

**2. Los protocolos de comunicación con el cliente**
La gestión de la comunicación es donde más se gana o se pierde en la relación con el cliente. Guíame por los protocolos de comunicación que construyen la relación de asesoramiento: la cadencia de comunicación proactiva (cuándo contactar al cliente aunque no haya ningún encargo activo), el formato de las actualizaciones de asuntos en curso (qué información necesita el cliente y en qué formato la necesita para tomar decisiones), la gestión de las expectativas de plazo y coste al inicio de cada asunto y el protocolo de comunicación de malas noticias (cómo comunicar un resultado negativo o un riesgo no anticipado de forma que no destruya la confianza).

**3. El modelo de honorarios que refleja el valor del asesoramiento**
El modelo de facturación por horas tiene un defecto estructural: desincentiva la eficiencia y no refleja el valor del asesoramiento estratégico. Explícame los modelos alternativos de honorarios para el despacho asesor: las retainers mensuales (acceso al asesoramiento a cambio de una cuota fija), los honorarios de éxito ligados a los resultados del cliente, el pricing por proyecto (honorarios fijos para asuntos predecibles), los paquetes de servicios para empresas en etapa temprana y cómo diseñar la propuesta de honorarios que el cliente percibe como justa y que el despacho puede ejecutar con margen.

**4. El onboarding de nuevos clientes: construir la relación desde el primer día**
Los primeros meses de la relación con un nuevo cliente determinan si se convierte en una relación de largo plazo. Propón el proceso de onboarding de un nuevo cliente: la sesión de conocimiento del negocio del cliente (el proceso de due diligence inverso: entender el negocio, la estrategia, los riesgos existentes y los objetivos del cliente), la auditoría jurídica inicial (revisar los contratos clave, la estructura societaria y los riesgos jurídicos más evidentes), el establecimiento de los protocolos de comunicación y los procedimientos de trabajo y la entrega del primer informe de situación que demuestra el valor del asesoramiento desde las primeras semanas.

**5. La gestión de conflictos de interés y la independencia del asesor**
El asesor externo que siempre dice lo que el cliente quiere escuchar no tiene valor. El que crea conflictos innecesarios pierde al cliente. Explícame cómo gestionar la tensión entre la independencia y la relación con el cliente: cómo dar opiniones contrarias a la posición del cliente de forma constructiva, cómo gestionar la presión del cliente que quiere una opinión jurídica que respalde una decisión ya tomada (y la opinión del asesor no la respalda), cómo gestionar los conflictos de interés cuando el despacho trabaja con empresas del mismo sector, y cómo mantener la independencia de criterio que es el principal activo del asesor sin crear fricciones innecesarias en la relación.

**6. Construir y fidelizar la cartera de clientes del despacho asesor**
Un despacho de asesoramiento vive de la calidad y la profundidad de su cartera de clientes. Dame el enfoque para construir y fidelizar la cartera: cómo identificar a los clientes con los que vale la pena construir una relación de largo plazo (el cliente que crece, el cliente que valora el asesoramiento estratégico, el cliente cuyo negocio el despacho entiende bien), cómo expandir la relación con un cliente existente hacia nuevas áreas de práctica, cómo gestionar la transición cuando el contacto principal del cliente cambia de empresa o de rol y cómo convertir a los clientes satisfechos en la fuente principal de referidos que genera nueva clientela.

Quiero protocolos y modelos de comunicación concretos que pueda implementar en mi despacho.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el modelo de relación del despacho asesor externo como socio estratégico',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Consultoría de customer success: auditar y transformar la función',
                'description'      => 'El consultor de CS que evalúa el modelo de customer success de una empresa y entrega el plan de transformación: la auditoría de métricas, los playbooks y el modelo operativo con el plan que lleva al equipo de CS al siguiente nivel.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en customer success operations con experiencia auditando y transformando funciones de CS en empresas SaaS B2B de distintas etapas, desde el primer equipo de CS hasta la reorganización de funciones de CS maduras que han perdido eficiencia. Voy a explorar contigo cómo estructurar y ejecutar una consultoría de customer success.

Mi contexto: [describe el cliente: tamaño del equipo de CS, modelo de negocio (high-touch, low-touch, digital-led), métricas de referencia (NRR, churn, health score promedio si existe), el síntoma que ha generado la necesidad de la consultoría y los datos disponibles]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico de la función de CS: qué medir y cómo interpretarlo**
Una auditoría de CS sin datos es una opinión. Explícame el proceso de diagnóstico basado en datos: las métricas que hay que analizar para entender la salud de la función (GRR y NRR por cohorte, churn rate por segmento, distribución del health score de la cartera, ratio de cuentas por CSM, tiempo promedio de respuesta a problemas del cliente), las conversaciones que hay que tener con el equipo de CS y los clientes para entender lo que los datos no capturan (la calidad de las relaciones, la percepción del valor que el cliente recibe del equipo de CS, los problemas que el equipo conoce pero no tienen canal para escalar), y cómo sintetizar la información para construir un diagnóstico honesto de la situación.

**2. La auditoría del modelo operativo de CS**
El modelo operativo determina si el equipo de CS puede escalar sin perder calidad. Guíame por la auditoría del modelo operativo: la revisión del modelo de cobertura de cuentas (cómo se asignan los clientes a los CSMs, si la ratio de cuentas es sostenible, si la segmentación de clientes refleja la realidad del negocio), la revisión de los playbooks existentes (si existen, si el equipo los sigue, si producen los resultados esperados), la revisión del proceso de onboarding de nuevos clientes (tiempo hasta la primera entrega de valor), la revisión del proceso de renovación (si hay suficiente anticipación para gestionar el proceso correctamente) y la revisión de las herramientas de CS (si dan la visibilidad necesaria sobre la cartera de clientes).

**3. La identificación de los cuellos de botella de la función de CS**
Cada función de CS tiene uno o dos problemas que explican la mayor parte del churn y la insatisfacción del cliente. Explícame cómo identificarlos: el análisis de los clientes que han dado baja en los últimos 12 meses (qué patrones comparten, en qué momento del ciclo de vida se dieron de baja, qué señales de riesgo habían emitido que no se procesaron correctamente), el análisis del customer journey para identificar los momentos de mayor fricción (el onboarding, la primera renovación, la expansión), cómo distinguir entre un problema del producto (el cliente se va porque el producto no cumple sus expectativas) y un problema del equipo de CS (el cliente se va porque no recibe suficiente valor del equipo) y cómo cuantificar el impacto económico de cada cuello de botella en términos de ARR en riesgo.

**4. El plan de transformación: del diagnóstico al modelo objetivo**
El plan de transformación de una función de CS debe ser ambicioso pero realista. Propón la estructura del plan de transformación: la definición del modelo objetivo de CS (cómo debe funcionar la función en 12-18 meses, qué métricas debe alcanzar), las iniciativas de transformación agrupadas por área (modelo de cobertura, playbooks, herramientas, capacidades del equipo), el roadmap de implementación por fases (los cambios que se pueden implementar en las primeras semanas, los que requieren más preparación) y las dependencias críticas (los cambios que no se pueden hacer hasta que otros estén en marcha).

**5. Los playbooks que transforman el comportamiento del equipo**
Los playbooks son el mecanismo por el que la transformación se convierte en comportamientos sistemáticos del equipo. Explícame cómo diseñar los playbooks de transformación: el playbook de riesgo de churn (qué hace el CSM cuando detecta una señal de riesgo, cómo escala, cuándo involucar al management), el playbook de onboarding (los hitos de los primeros 90 días, los check-ins estructurados, los criterios de éxito del onboarding), el playbook de expansión (cómo el CSM identifica oportunidades de upsell y las trabaja sin que el cliente sienta que le están vendiendo) y el playbook de renovación (cuándo empezar el proceso, qué información preparar, cómo gestionar las objeciones de precio).

**6. Medir el éxito de la transformación**
Una consultoría de CS sin un framework de medición no puede demostrar su impacto. Dame el sistema de métricas para medir el éxito de la transformación: las métricas de proceso que mejoran primero (health score promedio de la cartera, cobertura de cuentas, porcentaje de cuentas con playbook activo), las métricas de resultado que tardan más en reflejarse (GRR, NRR, churn rate), el proceso de revisión mensual con el director de CS y el VP de CS durante los primeros seis meses, y cómo gestionar el caso en que las métricas no mejoran al ritmo esperado (ajuste del plan vs. reconocer que el problema era más profundo de lo diagnosticado).

Quiero frameworks de auditoría y estructuras de playbooks que pueda adaptar a mis proyectos de consultoría.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Auditar y transformar la función de customer success para mejorar la retención y el crecimiento',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El freelance consultor: de ejecutor a asesor estratégico',
                'description'      => 'La transición del freelance que ejecuta al que asesora: el posicionamiento como consultor, las conversaciones de strategy vs. delivery y el modelo de honorarios que refleja el valor estratégico del consejo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior que ha hecho la transición de ejecutor a consultor estratégico, con experiencia ayudando a otros freelancers a reposicionarse para ofrecer un servicio de mayor valor y cobrar en consecuencia, con conocimiento profundo de los obstáculos psicológicos y prácticos de esta transición. Voy a explorar contigo cómo hacer la transición de freelance que ejecuta a freelance que asesora.

Mi contexto: [describe tu situación: tipo de servicio que ofreces actualmente, perfil de tus clientes, los honorarios que cobras, y qué te ha llevado a considerar la transición hacia el asesoramiento estratégico]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La diferencia entre ejecutar y asesorar: más que una cuestión de precio**
La transición de ejecutor a consultor no es simplemente cobrar más por lo mismo. Es ofrecer algo fundamentalmente diferente. Explícame qué diferencia al ejecutor del asesor: el ejecutor entrega un entregable específico (un diseño, un código, un texto), el asesor entrega juicio sobre qué hacer y por qué. El valor del entregable está limitado por el tiempo que tarda en producirlo; el valor del consejo está limitado por el impacto que tiene en el negocio del cliente. Explícame la diferencia en la conversación con el cliente (el ejecutor responde a briefings, el asesor formula las preguntas que el cliente no se ha hecho), en los entregables (documentos de recomendaciones vs. trabajo terminado) y en los honorarios (por valor vs. por tiempo).

**2. El posicionamiento como consultor: credibilidad antes de la transición**
Un freelance no puede despertarse consultor de un día para otro: la credibilidad como asesor se construye antes de cobrar por el asesoramiento. Guíame por el proceso de construcción del posicionamiento: cómo identificar el área de especialización donde tienes credibilidad real para dar consejos (la intersección de experiencia, resultados demostrables y conocimiento del sector), cómo empezar a demostrar la forma de pensar estratégica en el contenido y las conversaciones (la diferencia entre contenido de ejecución y contenido de estrategia), cómo usar los proyectos de ejecución actuales para identificar el patrón que se convierte en el nicho de consultoría y cómo comunicar la transición a los clientes actuales sin perder los ingresos mientras se construye el nuevo posicionamiento.

**3. La conversación de strategy vs. delivery con el cliente**
La conversación más difícil de la transición es cuando el cliente quiere contratar al ejecutor y el freelance quiere que lo contraten como consultor. Explícame cómo navegar esta conversación: las preguntas que redirigen la conversación del "necesito que me hagas X" al "cuéntame por qué necesitas X" (que es donde empieza la conversación de asesoramiento), cómo detectar cuándo un cliente tiene un problema estratégico que está describiendo como un problema de ejecución (la mayoría de los clientes presentan sus problemas como solicitudes de ejecución), cómo proponer el componente estratégico en la conversación de venta sin asustar al cliente y cómo distinguir a los clientes que quieren asesoramiento de los que quieren ejecución a buen precio.

**4. El modelo de honorarios del consultor freelance**
Los honorarios por hora son el principal obstáculo para la transición al asesoramiento: ponen el foco en el tiempo, no en el valor. Explícame los modelos de honorarios alternativos para el freelance consultor: los honorarios por proyecto (precio fijo por un diagnóstico y recomendaciones), la retainer de asesoramiento (acceso al criterio del consultor a cambio de una cuota mensual), los honorarios de éxito (vinculados al impacto que el asesoramiento genera en el negocio del cliente), el modelo blended (asesoramiento estratégico + una parte de ejecución para los clientes que necesitan las dos cosas) y cómo fijar el precio del asesoramiento basado en el valor que el cliente obtiene, no en el tiempo que el consultor dedica.

**5. Los entregables del consultor freelance**
El consultor produce entregables diferentes al ejecutor, y estos entregables son los que justifican sus honorarios. Explícame qué producen los consultores freelance que les permite cobrar más: el informe de diagnóstico (la descripción del problema, sus causas y sus consecuencias en términos de negocio), el documento de recomendaciones (qué hacer, por qué y en qué orden), el roadmap estratégico (el plan de los próximos 6-12 meses con prioridades y recursos), los workshops de estrategia (sesiones de trabajo con el equipo del cliente para resolver un problema específico) y cómo diseñar estos entregables para que el cliente perciba el valor aunque sean más cortos que un entregable de ejecución.

**6. Los obstáculos psicológicos de la transición**
La transición de ejecutor a consultor tiene obstáculos que no son técnicos sino psicológicos. Dame herramientas para superarlos: el síndrome del impostor que hace sentir que el consultor no tiene suficiente credibilidad para dar consejos (cuándo es real y cuándo es solo miedo), la incomodidad de cobrar honorarios altos por trabajo que parece menos tangible que la ejecución, el miedo a perder los clientes actuales durante la transición y la tendencia a volver al modo de ejecución cuando el pipeline se vacía. Cómo los freelancers que han hecho esta transición con éxito han gestionado estos obstáculos.

Quiero ejemplos concretos de cómo presentar la propuesta de consultoría y estructurar los honorarios estratégicos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Hacer la transición de freelance ejecutor a consultor estratégico que cobra por el valor del consejo',
                'vote_score'       => 46,
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
