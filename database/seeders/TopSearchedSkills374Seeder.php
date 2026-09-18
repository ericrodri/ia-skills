<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills374Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Presentaciones de campaña a stakeholders con impacto ejecutivo',
                'description'      => 'Aprende a estructurar y entregar presentaciones de marketing que persuadan a directivos, consigan aprobación de presupuesto y comuniquen resultados con claridad. Cubre narrative, datos, diseño de slides y manejo de preguntas difíciles.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de comunicación ejecutiva especializado en presentaciones de marketing para audiencias directivas. Has entrenado a decenas de responsables de marketing a comunicar con impacto ante CMOs, CEOs y juntas directivas, y entiendes profundamente qué hace que una presentación de marketing convenza y consiga presupuesto.

Necesito tu ayuda para preparar y estructurar una presentación de marketing de alto impacto para una audiencia ejecutiva. Las presentaciones de marketing tienen el reto adicional de que los números de marketing (alcance, engagement, CTR) no siempre resonan con directivos que piensan en términos de revenue y ROI.

**Entender a la audiencia ejecutiva:**
Explica qué piensan y qué quieren los ejecutivos cuando asisten a una presentación de marketing:
- Qué preguntas tiene en mente un CEO cuando escucha un informe de marketing
- Por qué los ejecutivos se aburren con métricas de vanidad y qué métricas les importan de verdad
- Cómo adaptar el nivel de detalle y el vocabulario según el perfil del ejecutivo (CFO vs. CEO vs. board)
- El error más común de los marketers al presentar a directivos: empezar por las tácticas en lugar del negocio

**Estructura narrativa para presentaciones de marketing:**
Diseña una estructura persuasiva siguiendo los principios de la comunicación ejecutiva:
- La pirámide invertida: conclusión primero, evidencia después
- Cómo construir una narrativa de "situación - complicación - resolución" (framework SCR de Barbara Minto)
- La regla del "so what": cómo asegurarte de que cada slide responde a la pregunta implícita del ejecutivo
- Cómo conectar los resultados de marketing con los objetivos estratégicos del negocio
- Apertura de impacto: cómo capturar la atención en los primeros 60 segundos

**Diseño de slides para audiencias ejecutivas:**
Describe las mejores prácticas de diseño para una presentación ejecutiva:
- La regla de un mensaje por slide: cómo formular el título de cada slide como una afirmación, no un tema
- Cuántos slides usar para una presentación de 20-30 minutos con ejecutivos
- Visualización de datos para ejecutivos: qué gráficos funcionan y cuáles confunden
- El uso del color y el espacio en blanco para guiar la atención
- Cómo preparar el "appendix" con el detalle técnico para las preguntas de Q&A

**Presentación de resultados de campaña:**
Guíame en cómo presentar los resultados de una campaña de marketing:
- Cómo conectar los resultados de campaña (leads, conversiones) con el impacto en revenue
- Comparativas vs. benchmark y vs. período anterior para contextualizar los datos
- Cómo presentar resultados mixtos (algo funcionó, algo no) sin perder credibilidad
- El desglose de ROI de marketing: cómo calcularlo y cómo presentarlo para que convenza
- Lecciones aprendidas y próximos pasos: cómo cerrar con decisiones claras

**Solicitud de presupuesto en una presentación:**
Explica la estructura para pedir aprobación de inversión:
- Cómo encuadrar la solicitud de presupuesto en términos de retorno esperado
- La importancia de presentar escenarios (conservador, base, optimista) con distintos niveles de inversión
- Anticipar las objeciones del CFO y prepararlas con datos
- Cómo hacer que la decisión sea fácil: opciones claras con recomendación explícita

**Manejo del Q&A con ejecutivos:**
Prepárame para las preguntas difíciles:
- Las 10 preguntas más frecuentes que hacen los ejecutivos en presentaciones de marketing
- Técnicas para manejar preguntas que no sabes responder con honestidad y credibilidad
- Cómo manejar el ejecutivo que interrumpe o va a la conclusión antes de tiempo
- La respuesta correcta cuando un ejecutivo cuestiona la metodología de medición

**Formato de respuesta:**
1. Estructura de presentación de marketing ejecutiva en 10 slides (título de cada slide y su objetivo)
2. Plantilla de slide de resultados de campaña con los datos clave a incluir
3. Lista de las 10 preguntas frecuentes de ejecutivos con respuestas tipo
4. Checklist de preparación 48h antes de una presentación ejecutiva
5. Dos versiones del mismo dato de marketing: lenguaje de marketer vs. lenguaje ejecutivo

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Presentar campañas de marketing con impacto ante directivos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Comunicación técnica efectiva ante audiencias no técnicas',
                'description'      => 'Desarrolla la habilidad de explicar decisiones técnicas, arquitecturas y deuda técnica a stakeholders no técnicos como product managers, directivos y clientes. Aprende a simplificar sin perder precisión y a conseguir alineación en decisiones técnicas.',
                'prompt_content'   => <<<'EOT'
Actúa como un senior engineer o engineering manager con gran reputación por su capacidad de comunicar conceptos técnicos complejos de forma clara y persuasiva a audiencias no técnicas. Has presentado decisiones de arquitectura a CEOs, justificado inversión en deuda técnica ante el board y explicado outages a clientes enfadados, siempre manteniendo la confianza de la audiencia.

La brecha de comunicación entre ingeniería y el resto de la organización es uno de los mayores obstáculos en el desarrollo de producto. Los equipos técnicos con mala comunicación ven rechazadas sus propuestas, acumulan deuda técnica porque no consiguen presupuesto para refactorizar, y pierden influencia en las decisiones de producto. Necesito mejorar mi comunicación técnica de forma significativa.

**Los principios de la comunicación técnica efectiva:**
Explica los fundamentos que diferencian a un engineer comunicador de uno que solo habla para otros engineers:
- La regla de la analogía: cómo encontrar la analogía perfecta para cada concepto técnico
- El error de empezar por la solución: por qué primero hay que establecer el problema y su impacto de negocio
- Cuánto nivel de detalle dar según la audiencia: el CEO vs. el PM vs. el cliente
- Cómo hablar de incertidumbre técnica sin perder credibilidad (estimaciones, riesgos)
- La importancia de hablar el idioma del negocio: traducir latencia en pérdida de revenue, bugs en coste de soporte

**Cómo presentar decisiones de arquitectura:**
Guíame en la comunicación de propuestas técnicas a stakeholders:
- Cómo estructurar un Architecture Decision Record (ADR) comprensible para no técnicos
- El framework de "problema, opciones consideradas, recomendación, tradeoffs" para presentar decisiones
- Cómo justificar una decisión técnica en términos de velocidad de entrega, fiabilidad y coste
- Cómo comunicar la incertidumbre sin dar la imagen de que "no sabes lo que haces"
- Cómo manejar al directivo que propone la solución técnica incorrecta con seguridad y respeto

**Comunicar deuda técnica y necesidad de refactorización:**
Explica cómo convencer a la dirección de invertir en mejoras técnicas:
- Cómo cuantificar el impacto de la deuda técnica en términos de velocidad de entrega
- La metáfora del "interés compuesto" de la deuda técnica y cómo presentarla visualmente
- Cómo crear un roadmap técnico que la dirección pueda aprobar con confianza
- Técnicas para incluir deuda técnica en el planning de sprint sin conflicto con el product manager
- El argumento de la fiabilidad: cómo conectar la deuda técnica con outages y su coste de negocio

**Comunicación durante y después de incidentes:**
Describe cómo comunicar un outage o incidente técnico a distintas audiencias:
- Comunicación de incidente en tiempo real: qué decir, cuándo y con qué frecuencia
- Postmortem ejecutivo: cómo presentar la causa raíz sin que suene a excusa
- Comunicación a clientes afectados: honestidad, empatía y soluciones concretas
- Cómo recuperar la confianza después de un incidente grave con acciones concretas

**Presentaciones técnicas en reuniones de producto:**
Ayúdame a ser más efectivo en reuniones con el equipo de producto y negocio:
- Cómo dar estimaciones técnicas que el PM entienda y respete sin comprometerse a imposibles
- Técnicas para decir "no" a una feature por razones técnicas de forma constructiva
- Cómo participar activamente en la priorización del roadmap aportando perspectiva técnica
- La reunión de refinamiento: cómo hacer preguntas técnicas que el equipo no técnico entienda

**Formato de respuesta:**
1. Plantilla de presentación de decisión técnica a directivos (6-8 slides sin código)
2. Glosario de traducciones: 15 términos técnicos y cómo explicarlos a un CEO
3. Plantilla de postmortem ejecutivo después de un incidente
4. Guión de conversación para negociar tiempo de deuda técnica con un PM
5. Checklist de preparación antes de presentar algo técnico a una audiencia no técnica

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicar decisiones técnicas a stakeholders no técnicos',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Presentación y defensa de propuestas de diseño ante clientes y dirección',
                'description'      => 'Aprende a presentar tu trabajo de diseño de forma que consiga aprobación, genere conversación productiva y proteja las decisiones de diseño fundamentadas. Cubre cómo contextualizar el diseño, manejar el feedback y evitar el diseño por comité.',
                'prompt_content'   => <<<'EOT'
Actúa como un design director con amplia experiencia en presentación de trabajo de diseño a stakeholders de negocio, clientes y equipos directivos. Eres conocido por tu capacidad de conseguir aprobación de diseños sin comprometer la calidad y por guiar el feedback de forma que mejora el diseño en lugar de destruirlo.

Presentar diseño es una habilidad tan crítica como el propio diseño. Un diseño brillante que no se sabe defender puede perderse entre comentarios superficiales sobre colores y preferencias personales. Un diseñador que sabe presentar su trabajo consigue más impacto, más autonomía y más respeto profesional.

**Principios de la presentación de diseño:**
Explica la filosofía correcta para presentar trabajo de diseño:
- Por qué el diseño se debe "vender", no solo "mostrar": la diferencia entre presentar y exponer
- El error de presentar el diseño sin contexto: la importancia de establecer el problema antes de mostrar la solución
- Cómo posicionarte como el experto que guía la decisión, no como el ejecutor que busca validación
- Por qué las presentaciones de diseño deben ser narrativas, no galerías de pantallas
- La regla del "propósito antes de estética": siempre explicar por qué antes de mostrar qué

**Estructura de una presentación de diseño efectiva:**
Diseña la estructura óptima para presentar trabajo de diseño:
- Apertura: recordar el brief, el problema que se resuelve y los criterios de éxito
- Proceso: mostrar brevemente el recorrido (research, exploración, iteraciones) para generar confianza
- Propuesta: presentar la solución con contexto, no como pantallazos aislados
- Decisiones de diseño: explicar explícitamente por qué se tomaron las decisiones clave
- Siguiente paso: qué necesitas del equipo (aprobación, feedback específico, decisión)

**Contextualización del diseño:**
Describe cómo presentar cada elemento del diseño con propósito:
- Cómo usar prototipos en lugar de imágenes estáticas para que la audiencia entienda el flujo
- Técnica del "narrador de usuario": presentar el diseño contando la historia del usuario que lo usa
- Cómo justificar cada decisión de tipografía, color y espaciado en términos de usabilidad y marca
- Cuándo y cómo mostrar alternativas rechazadas para demostrar el rigor del proceso
- Cómo conectar las decisiones de diseño con los datos de UX research que las fundamentan

**Gestión del feedback en presentaciones de diseño:**
Explica cómo manejar el feedback para que sea productivo:
- La técnica del "feedback encuadrado": cómo pedir feedback específico sobre lo que quieres mejorar
- Cómo responder a comentarios de preferencia personal ("a mí me gustaría más en azul")
- Cómo manejar al stakeholder que propone soluciones en lugar de describir el problema
- Técnicas para redirigir la conversación cuando se desvía hacia detalles sin importancia
- Cómo distinguir feedback válido de ruido y comunicar esa distinción sin conflicto

**Presentaciones de diseño en diferentes contextos:**
Adapta la presentación según el escenario:
- Presentación de identidad de marca a cliente de agencia: estructura y énfasis específico
- Design review interno con el equipo de producto y engineering: qué mostrar y qué no
- Presentación de UX research con insights y recomendaciones a directivos
- Revisión de usabilidad: cómo presentar hallazgos de testing sin que parezca que el diseño falló
- Pitch de redesign a un cliente escéptico: cómo construir el caso para cambiar lo existente

**Protección de las decisiones de diseño fundamentadas:**
Ayúdame a defender el trabajo de diseño sin sonar defensivo:
- Cómo diferenciar entre una objeción válida y una preferencia personal con argumentos de diseño
- Técnicas para mantener la posición cuando el cliente insiste en algo que daña la UX
- Cuándo ceder y cuándo mantener la posición: criterios para tomar esa decisión
- Cómo documentar las decisiones de diseño y los acuerdos para evitar revisiones futuras

**Formato de respuesta:**
1. Estructura de presentación de diseño en 8 actos (con qué decir en cada momento)
2. Plantilla de "design decision log": cómo documentar cada decisión importante
3. Respuestas tipo para los 8 comentarios de feedback más difíciles de manejar
4. Guión de apertura para los primeros 2 minutos de una presentación de diseño
5. Checklist de preparación de presentación de diseño para cliente o dirección

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Defender y vender propuestas de diseño a stakeholders',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Presentaciones de ventas de alto impacto que cierran deals',
                'description'      => 'Diseña y entrega presentaciones de ventas que conectan con el dolor del cliente, demuestran valor de forma irresistible y aceleran el cierre. Aprende a estructurar el pitch, manejar objeciones en vivo y crear urgencia sin presión.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas y coach de presentaciones comerciales con experiencia formando a equipos de ventas en empresas B2B de alto valor. Eres conocido por tu metodología de presentación de ventas que combina storytelling, datos y técnicas de cierre consultivo para aumentar la tasa de conversión de demos y pitches.

La presentación de ventas es el momento de mayor impacto en el ciclo comercial. Una demo o pitch bien ejecutado puede comprimir semanas de negociación en una sola reunión. Una mal ejecutada puede destruir el interés de un prospecto que había llegado bien cualificado. Necesito dominar el arte de la presentación comercial.

**Los errores más comunes en presentaciones de ventas:**
Describe los fallos típicos que arruinan un pitch y cómo evitarlos:
- El pitch de características: por qué hablar de tu producto en lugar del dolor del cliente es el error número uno
- La demo sin contexto: empezar a mostrar pantallas sin haber establecido el escenario del cliente
- La presentación genérica: cómo el cliente percibe que no te has preparado y qué hace esa percepción
- Demasiados slides, demasiado texto: el efecto narcolepsia de las presentaciones de PowerPoint
- No pedir el siguiente paso: terminar la reunión sin compromisos claros

**Estructura del pitch de ventas de alto impacto:**
Diseña la arquitectura de una presentación comercial ganadora:
- Apertura de relevancia: cómo demostrar en 2 minutos que conoces el negocio del cliente
- El pain statement: articular el problema del cliente mejor de lo que él mismo lo articularía
- La solución en contexto: mostrar tu producto/servicio como la respuesta al pain específico
- La prueba social específica: caso de éxito de un cliente similar, con números reales
- La visión del futuro: cómo se ve la vida del cliente después de adoptar tu solución
- El siguiente paso claro: cómo cerrar la reunión con un compromiso concreto

**Personalización de la presentación:**
Explica cómo adaptar el pitch a cada prospecto:
- Research pre-reunión: qué buscar sobre el cliente (Linkedin, news, jobs, earnings calls)
- Cómo usar la información del discovery para personalizar cada sección del pitch
- Técnica del "espejo": cómo usar el lenguaje y las prioridades del cliente en tu presentación
- Adaptación del caso de éxito: cómo elegir el caso más relevante para cada tipo de cliente
- Cómo modificar el pitch en tiempo real según las señales de la audiencia

**La demo de producto de alto impacto:**
Describe cómo hacer una demo que vende:
- El error de la "grand tour": por qué mostrar todo el producto destruye el interés
- La demo orientada a escenario: mostrar solo el flujo que resuelve el pain del cliente
- Técnica del "antes y después": contrastar el dolor actual con la experiencia con tu producto
- Cómo manejar preguntas técnicas durante la demo sin perder el hilo de la narrativa
- Preparación de la demo: personalización, datos reales del cliente, entorno limpio

**Manejo de objeciones durante la presentación:**
Proporciona técnicas para manejar objeciones en tiempo real:
- La objeción del precio: cómo reencuadrarla en términos de ROI sin defenderlo directamente
- "Necesitamos consultarlo internamente": cómo identificar si es real o una forma de evitar el no
- "Ya tenemos una solución": cómo manejar al prospecto con herramienta existente
- "No es el momento": cómo crear urgencia sin presión agresiva
- La objeción durante la demo: cómo manejarla sin perder el control de la reunión

**Cierre al final de la presentación:**
Explica técnicas de cierre al final del pitch:
- El cierre de siguiente paso: cómo proponer el paso siguiente de forma natural
- Cómo leer las señales de compra durante y al final de la presentación
- El resumen de acuerdos: cómo recapitular el valor para reforzar la decisión
- Qué hacer si la reunión termina sin compromiso claro: opciones y tonos

**Formato de respuesta:**
1. Estructura de presentación de ventas de 45 minutos (agenda detallada con tiempos)
2. Script de apertura de los primeros 5 minutos (texto verbatim)
3. Tabla de las 8 objeciones más frecuentes con respuesta paso a paso
4. Checklist de preparación pre-reunión con el prospecto
5. Plantilla de email de seguimiento post-presentación que mantiene el momentum

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Cerrar más deals con presentaciones de ventas efectivas',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Presentaciones de roadmap de producto a dirección y stakeholders',
                'description'      => 'Aprende a comunicar el roadmap de producto de forma que consiga alineación, soporte ejecutivo y presupuesto. Cubre cómo estructurar la narrativa del roadmap, manejar las preguntas difíciles y actualizar a stakeholders en cada etapa del desarrollo.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product o CPO con experiencia comunicando roadmaps a directivos, boards y equipos interfuncionales en empresas de producto digital. Eres reconocido por tu capacidad de generar alineación y entusiasmo alrededor del roadmap, incluso cuando hay prioridades en conflicto y recursos limitados.

El roadmap es el artefacto más político del Product Management. Todos en la empresa tienen una opinión sobre qué debería estar en él, y el PM debe navegar expectativas, prioridades en conflicto e incertidumbre inherente del producto mientras mantiene la confianza de todos los stakeholders. Necesito dominar la comunicación del roadmap.

**El propósito del roadmap como herramienta de comunicación:**
Explica qué es y qué no es un roadmap cuando se usa para comunicar:
- La diferencia entre un roadmap de planificación interna y un roadmap de comunicación a stakeholders
- Por qué el roadmap no es una lista de features con fechas: el riesgo del "roadmap comprometido"
- El roadmap como narrativa de la estrategia de producto: cómo conectar cada iniciativa con un objetivo de negocio
- Roadmaps basados en outcomes vs. outputs: por qué hablar de resultados en lugar de features
- Cómo adaptar el nivel de detalle del roadmap según la audiencia (CEO vs. PM vs. engineering)

**Estructura de la presentación del roadmap:**
Diseña la estructura óptima para presentar el roadmap:
- El contexto estratégico: por qué empezar con la visión de producto y los objetivos anuales
- El estado actual: qué hemos entregado recientemente y qué aprendimos
- Las apuestas del próximo trimestre/semestre: qué hacemos, por qué y qué esperamos conseguir
- Las iniciativas de largo plazo: qué está en el horizonte sin comprometerse a fechas
- Lo que NO está en el roadmap: la decisión explícita de no hacer ciertas cosas y el razonamiento

**Manejo de la pregunta sobre fechas:**
Explica cómo responder a la presión por fechas comprometidas:
- Cómo comunicar timelines con rangos de incertidumbre sin perder credibilidad
- Técnicas de estimación y comunicación: Now/Next/Later, horizontes trimestrales, quarters tentativas
- Qué hacer cuando el CEO pide fecha exacta para una feature que aún no está en el roadmap
- Cómo comunicar un retraso de una entrega del roadmap sin destruir la confianza
- La diferencia entre un roadmap aspiracional y un plan de proyecto: cómo aclarar las expectativas

**Gestión de stakeholders con diferentes prioridades:**
Ayúdame a manejar los conflictos de prioridades alrededor del roadmap:
- El stakeholder de ventas que siempre quiere más features para cerrar su deal
- El stakeholder de CS que pide que el roadmap se llene de requests de clientes
- El CTO que quiere más tiempo de deuda técnica vs. el CEO que quiere nuevas features
- Cómo crear un proceso de priorización transparente que reduzca los conflictos políticos
- La reunión de priorización: cómo estructurarla para llegar a decisiones con las que todos se sienten escuchados

**Comunicación continua del roadmap:**
Describe cómo mantener a los stakeholders informados entre presentaciones:
- Cadencia de comunicación del roadmap: cuándo y cómo actualizar a cada audiencia
- El roadmap en el all-hands: cómo presentarlo a toda la empresa de forma inspiradora
- Comunicación de cambios en el roadmap: cómo gestionar el cambio de prioridades sin perder credibilidad
- Herramientas de roadmap: ProductBoard, Linear, Notion, slides, su impacto en la comunicación

**Formato de respuesta:**
1. Estructura de presentación de roadmap trimestral a dirección (10-12 slides)
2. Plantilla de roadmap visual Now/Next/Later con explicación de formato
3. Guión de respuesta para las 5 preguntas más difíciles sobre el roadmap
4. Proceso de priorización de 5 pasos para alinear stakeholders con prioridades en conflicto
5. Plantilla de email de actualización mensual del roadmap para stakeholders clave

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Alinear stakeholders y dirección con el roadmap de producto',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Presentaciones ejecutivas de iniciativas de RRHH y gestión del talento',
                'description'      => 'Aprende a comunicar iniciativas de RRHH, cambios organizativos y programas de talento a la dirección y al board de forma que genere apoyo, presupuesto y alineación estratégica. Cubre cómo hablar el idioma del negocio desde RRHH.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief People Officer (CPO) o CHRO con experiencia comunicando iniciativas de RRHH a CEOs, boards y comités de dirección en empresas de tamaño mediano y grande. Eres reconocido por tu capacidad de conectar las iniciativas de personas con los objetivos estratégicos del negocio y de conseguir el apoyo y el presupuesto necesarios para implementarlas.

El RRHH estratégico tiene un problema de credibilidad en muchas organizaciones: se le percibe como una función de soporte administrativo, no como un partner estratégico. Para cambiar esa percepción y conseguir el apoyo de la dirección, el líder de RRHH debe aprender a comunicar en el idioma del negocio, con datos y con narrativas que conecten con las prioridades de los ejecutivos.

**El idioma del negocio en las presentaciones de RRHH:**
Explica cómo hacer que las iniciativas de RRHH hablen el idioma de la dirección:
- Cómo traducir iniciativas de RRHH a impacto de negocio: retención → coste de rotación ahorrado, engagement → productividad, L&D → aceleración de time-to-performance
- Los errores más comunes de RRHH al presentar a directivos: métricas de actividad (cursos impartidos) vs. métricas de resultado (desempeño mejorado)
- Cómo calcular y presentar el ROI de las iniciativas de RRHH con datos creíbles
- La importancia de hablar de "riesgo de talento" como riesgo de negocio
- Cómo estructurar el argumento cuando hay que pedir presupuesto para iniciativas blandas (cultura, engagement)

**Estructura de presentaciones de RRHH a dirección:**
Diseña la arquitectura de una presentación estratégica de RRHH:
- Situación actual: qué dicen los datos del estado del talento (rotación, engagement, tiempo de cobertura)
- Diagnóstico: por qué están esos datos y cuál es el riesgo si no se actúa
- Propuesta: qué iniciativa(s) se propone implementar y con qué horizonte temporal
- Business case: inversión requerida, ROI esperado y cómo se medirá el éxito
- Siguiente paso: qué necesitas de la dirección (aprobación, recursos, visibilidad)

**Comunicación de cambios organizativos:**
Describe cómo presentar reorganizaciones y cambios estructurales a la dirección:
- Cómo justificar una reorganización con datos de eficiencia y objetivos estratégicos
- Cómo anticipar y manejar las preguntas difíciles sobre el impacto en personas específicas
- La comunicación en cascada: cómo asegurar que el mensaje de la dirección llega consistente a todos los managers
- Cómo presentar la estructura nueva de forma que inspire y no genere angustia

**Presentaciones de encuesta de clima y engagement:**
Explica cómo presentar los resultados de encuestas de clima a la dirección:
- Cómo ir más allá de los números: qué historia cuentan los datos cualitativos
- Cómo priorizar los áreas de acción cuando hay múltiples problemas identificados
- Cómo conseguir que la dirección se comprometa a actuar sobre los resultados
- El plan de comunicación de los resultados a los empleados: transparencia vs. gestión de expectativas

**Presencia ejecutiva del líder de RRHH:**
Ayúdame a fortalecer mi presencia y credibilidad como líder de RRHH ante la dirección:
- Cómo posicionarse como partner estratégico y no como proveedor de servicios
- Técnicas de comunicación para generar autoridad en la sala de dirección
- Cómo manejar al directivo que minimiza o ningunea las iniciativas de RRHH
- La importancia del storytelling: cómo usar historias de personas para ilustrar datos de talento

**Formato de respuesta:**
1. Estructura de presentación de iniciativa de RRHH a board en 8 slides
2. Plantilla de business case de RRHH con fórmulas de ROI y coste de rotación
3. Traductor RRHH-negocio: 10 métricas de RRHH con su traducción al lenguaje de dirección
4. Guión de respuesta para las preguntas más desafiantes que hacen los CEO a RRHH
5. Checklist de preparación de presentación a comité de dirección desde RRHH

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Conseguir apoyo directivo para iniciativas de RRHH',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Presentaciones financieras de alto impacto ante board y dirección',
                'description'      => 'Desarrolla la habilidad de presentar análisis financieros, presupuestos y resultados ante el board y la alta dirección de forma clara, persuasiva y creíble. Aprende a simplificar sin perder rigor, a anticipar preguntas difíciles y a estructurar narrativas financieras que inspiren confianza.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO o director financiero con amplia experiencia presentando información financiera ante boards, comités de auditoría, inversores y comités de dirección. Eres conocido por tu capacidad de transformar datos financieros complejos en narrativas claras que generan decisiones y confianza, y por tu habilidad para manejar las preguntas más difíciles de los miembros del board.

La comunicación financiera de alto nivel es una de las habilidades más valoradas y menos desarrolladas en los equipos de finanzas. Muchos analistas y controllers producen análisis excelentes que no consiguen impacto porque no saben presentarlos. Dominar la presentación financiera ejecutiva es un diferenciador de carrera decisivo.

**Principios de la comunicación financiera ejecutiva:**
Explica los fundamentos que diferencian una buena presentación financiera:
- La regla de la narrativa: los números son evidencia de una historia, no la historia en sí misma
- Primero el mensaje, luego los datos: cómo estructurar con la pirámide de Minto las comunicaciones financieras
- La selección de métricas: qué datos mostrar y qué dejar en el apéndice (el problema de la sobreinformación)
- El nivel de precisión adecuado: cuántos decimales y por qué demasiada precisión destruye la credibilidad
- Cómo hablar de varianzas y desviaciones sin sonar defensivo

**Estructura del informe financiero a board:**
Diseña la arquitectura del board deck financiero:
- Executive summary: el estado financiero del negocio en una página
- P&L review: ingresos, margen bruto, EBITDA con varianza vs. presupuesto y período anterior
- Balance sheet highlights: los ratios más relevantes para el board
- Cash flow: generación de caja, runway, working capital
- Forecast y guidance: proyecciones con rango de incertidumbre y supuestos clave
- Riesgos financieros identificados y planes de mitigación

**Visualización de datos financieros:**
Describe las mejores prácticas de visualización para información financiera:
- Cuándo usar waterfall charts, cuando barras comparativas, cuándo tablas
- El uso del color en finanzas: rojo/verde, positivo/negativo y sus convenciones por audiencia
- Cómo presentar tendencias de largo plazo vs. comparativas de período
- La importancia de los títulos de gráfico que comunican la conclusión, no el tema
- Cómo hacer que una tabla financiera sea legible en una presentación (no es un Excel)

**Narrative de resultados financieros:**
Explica cómo construir la narrativa alrededor de los números:
- Cómo presentar buenos resultados con el contexto correcto (no presumir, demostrar)
- Cómo presentar resultados negativos con credibilidad y plan de acción
- La estructura de la varianza: por qué la desviación fue interna o externa, controlable o no
- Cómo hablar de riesgos financieros sin alarmar innecesariamente al board

**Manejo de preguntas difíciles del board:**
Prepárame para los momentos más exigentes:
- El miembro del board que hace la pregunta con datos que tú no tienes: cómo responder
- La pregunta sobre una proyección optimista: cómo defender los supuestos con rigor
- El cuestionamiento de las políticas contables: cómo responder con autoridad y transparencia
- Cuando el board no llega a acuerdo sobre una decisión financiera: cuál es tu rol como CFO
- Cómo manejar la presión para cambiar números o proyecciones que no te parecen correctas

**Presentación de presupuesto anual:**
Describe cómo estructurar y presentar el presupuesto anual:
- Cómo conectar el presupuesto con la estrategia del negocio de forma explícita
- Cómo presentar el presupuesto base junto con escenarios alternativos
- Los supuestos clave del presupuesto: cuáles mostrar y cómo justificarlos
- Cómo manejar el proceso de negociación del presupuesto con los departamentos

**Formato de respuesta:**
1. Estructura de board deck financiero mensual (secciones, orden y contenido de cada una)
2. Plantilla de executive summary financiero en una página con los KPIs clave
3. Guía de visualización: qué tipo de gráfico usar para cada tipo de dato financiero
4. Respuestas tipo para las 8 preguntas más difíciles del board en una presentación financiera
5. Checklist de preparación de board deck: lo que no puede faltar y lo que sobre

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Presentar información financiera con impacto ante board y dirección',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Comunicación legal efectiva con dirección y clientes no juristas',
                'description'      => 'Desarrolla la habilidad de comunicar riesgos legales, contratos y recomendaciones jurídicas a directivos y clientes sin formación legal. Aprende a simplificar el lenguaje jurídico, estructurar informes de asesoramiento y presentar opciones con claridad ejecutiva.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado senior o general counsel con experiencia comunicando asesoramiento legal a audiencias no juristas: CEOs, boards, equipos de ventas, startups y empresarios. Eres conocido por tu capacidad de hacer el derecho accesible sin perder rigor técnico, y por conseguir que los directivos tomen decisiones informadas sobre riesgos legales sin necesitar un máster en derecho.

La comunicación legal es un arte poco explorado en la profesión jurídica. Demasiados abogados escriben para otros abogados aunque su cliente sea un empresario. El resultado es que los clientes no entienden el riesgo, no toman las decisiones correctas y no perciben el valor real del asesoramiento jurídico. Mejorar la comunicación es mejorar el impacto del trabajo legal.

**El problema del lenguaje jurídico:**
Explica por qué el lenguaje legal tradicional falla en la comunicación con no juristas:
- Por qué los abogados escriben y hablan en jerga jurídica: causas históricas y profesionales
- El coste del lenguaje incomprensible: clientes que no entienden el riesgo, firmas sin contexto, malas decisiones
- La diferencia entre precisión jurídica y claridad comunicativa: no son mutuamente excluyentes
- Cómo usar el lenguaje llano sin sacrificar la exactitud legal
- El error de dar la respuesta completa cuando el cliente necesita la respuesta relevante

**Estructura del informe de asesoramiento ejecutivo:**
Diseña cómo debe estructurarse una comunicación legal para directivos:
- Executive summary al principio: la conclusión y la recomendación antes del análisis
- Presentación del problema: en lenguaje de negocio, no en términos jurídicos
- Opciones disponibles: presentar 2-3 alternativas con sus ventajas e inconvenientes
- Recomendación clara: qué recomiendas y por qué, sin ambigüedades defensivas
- Riesgos residuales: qué queda expuesto incluso con la opción recomendada
- Próximo paso: qué debe decidir o firmar el cliente para avanzar

**Comunicación de riesgos legales:**
Explica cómo presentar el riesgo legal de forma que el directivo pueda tomar decisiones:
- Cómo cuantificar o dimensionar el riesgo legal sin falsas precisiones (probabilidad × impacto)
- La escala de riesgo que entiende un CEO: desde multa leve hasta riesgo de continuidad del negocio
- Cómo comunicar que algo es ilegal o que no recomiendas algo sin perder al cliente
- Cómo manejar la presión del cliente que quiere hacer algo que tú no puedes recomendar
- La diferencia entre riesgo legal y riesgo de negocio: cómo separarlos en la comunicación

**Explicación de contratos a no juristas:**
Describe cómo guiar a un cliente en la revisión de un contrato:
- Cómo hacer el resumen ejecutivo de un contrato: las 5-7 cláusulas que el cliente debe entender
- Cómo explicar cláusulas técnicas (indemnización, limitación de responsabilidad, fuerza mayor) en términos de negocio
- La semáforo contractual: cómo señalizar cláusulas favorables, negociables y inaceptables
- Cómo facilitar la negociación de un contrato cuando el cliente no es jurista

**Presentaciones legales en el board:**
Explica cómo el General Counsel o asesor legal presenta ante el board:
- El informe legal al board: qué incluir (litigios en curso, regulación nueva, riesgos M&A)
- Cómo hablar de compliance sin aburrir al board ni minimizar la importancia
- Cómo gestionar la comunicación de una crisis legal al board (investigación regulatoria, demanda importante)
- El rol del abogado como consejero estratégico vs. proveedor de servicio en el board

**Comunicación virtual y escrita en contexto legal:**
Adapta la comunicación a los formatos modernos:
- Cómo escribir un email legal claro que el cliente entienda y guarde para referencia
- Cómo hacer una videoconferencia de asesoramiento que el cliente recuerde
- El formato de "one-pager" legal: cuándo y cómo resumir un análisis complejo en una página
- Cómo usar viñetas y listas en comunicaciones legales sin perder la estructura argumentativa

**Formato de respuesta:**
1. Plantilla de informe de asesoramiento ejecutivo (estructura en 6 secciones)
2. Glosario: 15 términos jurídicos frecuentes con su traducción al lenguaje de negocio
3. Plantilla de resumen ejecutivo de contrato (una página, semáforo de cláusulas)
4. Guión de comunicación de riesgo legal a un CEO (tono, estructura, nivel de detalle)
5. Checklist de claridad: 10 preguntas para revisar cualquier comunicación legal antes de enviarla

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicar asesoramiento legal con claridad a directivos y clientes',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Presentaciones QBR de alto impacto para clientes ejecutivos',
                'description'      => 'Diseña y entrega Quarterly Business Reviews (QBR) que refuerzan el valor, consolidan la relación con el cliente ejecutivo y aceleran la renovación y expansión. Cubre estructura, datos, storytelling y manejo de conversaciones difíciles en los QBR.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success o Senior Customer Success Manager con experiencia conduciendo Quarterly Business Reviews (QBR) con clientes ejecutivos de cuentas enterprise. Eres reconocido por tu capacidad de convertir los QBR en momentos de alto valor que consolidan la relación, demuestran ROI y generan conversaciones de expansión natural.

El QBR es la oportunidad más importante del ciclo de customer success para demostrar valor, fortalecer la relación ejecutiva y crear las condiciones para la renovación y el upsell. Un QBR mal ejecutado puede erosionar la confianza de un cliente que estaba satisfecho. Uno bien ejecutado puede transformar un cliente en promotor activo.

**El propósito real del QBR:**
Explica qué debe y qué no debe ser un QBR:
- El error del "QBR de métricas": por qué un informe de uso no es un QBR estratégico
- El QBR como conversación ejecutiva: pasar de reportar el pasado a construir el futuro juntos
- Quién debe estar en el QBR del lado del cliente: la importancia del ejecutivo sponsor vs. solo el día a día
- La frecuencia correcta: cuándo hacer QBR, EBR (Executive Business Review) y check-ins regulares
- Cómo preparar el QBR en función de la salud de la cuenta (cliente satisfecho vs. cliente en riesgo)

**Estructura del QBR de alto impacto:**
Diseña la arquitectura de un QBR que genera valor:
- Apertura: recordar los objetivos que el cliente tenía cuando empezó la relación
- Revisión de resultados: qué logró el cliente gracias a la solución (outcomes, no outputs)
- ROI demostrado: impacto cuantificado en las métricas de negocio del cliente
- Lecciones y aprendizajes: qué funcionó, qué no y qué ajustes se implementaron
- Agenda del próximo período: objetivos del cliente, plan de éxito y recursos comprometidos
- Visión de expansión: cómo el cliente puede conseguir más valor con mayor adopción o nuevas capacidades

**Demostración de ROI en el QBR:**
Explica cómo calcular y presentar el ROI de forma convincente:
- Cómo recoger los datos de impacto del cliente a lo largo del trimestre (no solo en el QBR)
- Frameworks de ROI para distintos tipos de productos: ahorro de tiempo, aumento de revenue, reducción de coste
- Cómo presentar el ROI cuando los datos no son perfectos o el cliente no los ha compartido
- La importancia del ROI anecdótico: historias de éxito del equipo del cliente que complementan los números
- Cómo conectar el ROI del producto con los objetivos estratégicos del cliente para este año

**Manejo de conversaciones difíciles en el QBR:**
Prepárame para los momentos más exigentes del QBR:
- El cliente que está descontento con el producto o el servicio: cómo abordarlo en el QBR
- Baja adopción o resultados por debajo de lo esperado: cómo presentarlo sin perder credibilidad
- El ejecutivo que interrumpe para poner quejas en la mesa: cómo reconducir la reunión
- La pregunta sobre la hoja de ruta del producto que no tienes autorización para responder
- El QBR de renovación: cómo gestionar la conversación cuando el presupuesto está en riesgo

**Conversación de expansión natural:**
Explica cómo incorporar el upsell y cross-sell en el QBR de forma no comercial:
- Cómo identificar oportunidades de expansión a partir de los objetivos del cliente para el próximo período
- Técnica del "gap analysis": cómo mostrar la brecha entre donde está el cliente y donde podría estar
- Cómo introducir nuevas capacidades o módulos como respuesta a los objetivos del cliente
- El tono correcto: partner estratégico que sugiere vs. vendedor que empuja

**Formato de respuesta:**
1. Agenda de QBR de 60-90 minutos con tiempo asignado y objetivo de cada sección
2. Plantilla de slide de ROI del QBR (qué datos incluir y cómo presentarlos)
3. Guión de apertura del QBR: los primeros 5 minutos que marcan el tono
4. Playbook de conversación para QBR con cliente en riesgo de churn
5. Checklist de preparación del QBR 2 semanas antes de la reunión

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Conducir QBRs que refuerzan relaciones y aceleran renovaciones',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Pitch y presentación de propuestas de servicios freelance con impacto',
                'description'      => 'Aprende a presentar tus servicios freelance de forma que convenza, diferencie y justifique tu tarifa. Cubre cómo estructurar una propuesta de proyecto, presentarla en persona o por videollamada y cerrar con seguridad sin depender del precio más bajo.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocios y ventas especializado en profesionales independientes y freelancers de servicios premium. Has ayudado a centenares de freelancers a pasar de conseguir clientes por precio a ganar proyectos por valor, y a construir un pitch que les posiciona como expertos en lugar de como proveedores intercambiables.

El pitch del freelance es el momento donde se decide si consigues el cliente o no. La diferencia entre un freelancer que siempre negocia a la baja y uno que cobra lo que pide no suele estar en la calidad del trabajo, sino en la forma de presentarlo. Necesito construir un pitch y una propuesta que transmitan valor premium y cierren con confianza.

**El problema del pitch basado en tarifas:**
Explica por qué el pitch centrado en precio es un error estratégico:
- Por qué empezar por "cuánto cuestas" te posiciona como commodity desde el inicio
- La espiral de la guerra de precios: cómo el freelance que compite por precio siempre pierde
- El cliente que solo mira el precio: cómo identificarlo y si merece la pena trabajar con él
- La alternativa: el pitch centrado en el problema del cliente y el valor de la solución
- Cómo posicionarte como experto antes de mencionar una sola cifra

**Estructura del pitch de servicios freelance:**
Diseña la arquitectura de un pitch ganador para profesionales independientes:
- La apertura de investigación: demostrar que conoces el negocio del cliente antes de hablar de ti
- El problema articulado: decirle al cliente cuál es su dolor mejor de lo que él mismo lo diría
- Tu solución específica: cómo tu servicio particular resuelve ese problema concreto
- La prueba: casos de clientes similares con resultados concretos
- El proceso: cómo trabajas, qué puede esperar el cliente y cuándo
- El precio como consecuencia: presentar el precio después de haber demostrado el valor
- El cierre: qué paso concreto propones para avanzar

**Preparación de la propuesta escrita:**
Describe cómo estructurar una propuesta de proyecto que convenza:
- La longitud correcta de una propuesta freelance: ni demasiado corta ni demasiado larga
- Qué debe contener: entendimiento del problema, alcance, entregables, proceso, precio, condiciones
- El error de proponer demasiadas opciones: por qué 1-3 opciones es suficiente
- Cómo presentar el precio de forma que no sea el centro de atención visual de la propuesta
- El diseño de la propuesta: por qué el aspecto visual también comunica calidad

**Presentación de la propuesta en videollamada:**
Explica cómo presentar la propuesta de forma efectiva:
- Por qué no debes enviar la propuesta sin presentarla: la importancia del contexto verbal
- Cómo estructurar los 20-30 minutos de la llamada de propuesta
- Técnicas para leer las reacciones del cliente durante la presentación y ajustar en tiempo real
- Cómo manejar el silencio después de revelar el precio
- La pregunta clave al final: "¿Cómo te parece que encaja esto con lo que buscáis?"

**Manejo de objeciones frecuentes del cliente freelance:**
Proporciona respuestas para las objeciones más comunes:
- "Es más caro de lo que esperábamos": cómo reencuadrar en términos de valor
- "Tenemos propuestas más baratas": cómo diferenciarte sin atacar a la competencia
- "Necesito consultarlo con mi socio/equipo": cómo mantener el momentum sin presionar
- "¿Puedes hacer un descuento?": cuándo y cómo negociar sin devaluar tu trabajo
- "No tenemos presupuesto ahora": cómo explorar si es real o si es una objeción de valor

**Diferenciación y posicionamiento como experto:**
Ayúdame a construir un posicionamiento que justifique tarifas premium:
- Cómo elegir un nicho específico que te permita cobrar más y conseguir mejores clientes
- La propuesta de valor única del freelance: qué te hace diferente de cualquier otro
- El portfolio como herramienta de posicionamiento: qué mostrar y cómo presentarlo
- Testimonios y casos de éxito: cómo conseguirlos y dónde usarlos en el pitch

**Formato de respuesta:**
1. Script de pitch de 10 minutos para una primera llamada con un prospecto (texto verbatim)
2. Estructura de propuesta de proyecto freelance en 7 secciones con qué incluir en cada una
3. Tabla de las 6 objeciones más comunes con respuesta específica y tono recomendado
4. Plantilla de email de seguimiento post-propuesta que mantiene el interés
5. Lista de preguntas de discovery que te permiten construir un pitch totalmente personalizado

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Ganar proyectos freelance con un pitch de alto valor',
                'vote_score'       => 40,
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
