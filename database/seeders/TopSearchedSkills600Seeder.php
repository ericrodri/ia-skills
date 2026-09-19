<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills600Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación del cambio organizacional con IA para equipos de marketing',
                'description'      => 'Usa la IA para diseñar y ejecutar las estrategias de comunicación interna y externa que acompañan los procesos de transformación organizacional, reduciendo la resistencia y acelerando la adopción.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación corporativa y gestión del cambio organizacional con experiencia en el diseño de campañas de comunicación que acompañan transformaciones empresariales complejas: fusiones y adquisiciones, transformaciones digitales, reestructuraciones organizativas y cambios culturales profundos. Necesito tu ayuda para diseñar la estrategia de comunicación de un proceso de cambio organizacional usando inteligencia artificial.

Contexto de la transformación:
Una empresa de distribución de alimentación con 800 empleados está implementando un nuevo ERP que reemplaza los sistemas actuales, un modelo de trabajo híbrido para los departamentos de oficina y una reorganización de los equipos comerciales que elimina algunos puestos y crea nuevos roles. El proceso de cambio tiene una duración prevista de 18 meses y el nivel de resistencia inicial detectado es alto, especialmente entre los trabajadores con más años en la empresa.

Diagnóstico de comunicación con IA:
Diseña la auditoría inicial de comunicación. La IA debe ayudar a analizar: los canales de comunicación interna existentes y su nivel de efectividad real (intranet que nadie visita, email que se ignora, reuniones de equipo con baja participación), los segmentos de empleados con diferentes niveles de resistencia al cambio (los early adopters entusiastas, la mayoría escéptica pero adaptable, los resistentes activos), las narrativas negativas que ya están circulando de forma informal sobre el cambio (rumorología, comentarios en los pasillos, conversaciones en grupos de WhatsApp no oficiales), y las fuentes de información que los empleados consideran más creíbles (el director general, su manager directo, los compañeros, los representantes sindicales). Define el mapa de audiencias que orienta el diseño de cada mensaje.

Estrategia de mensajes y narrativa del cambio:
Describe cómo construir la narrativa central del cambio. La IA debe ayudar a: desarrollar el mensaje central del cambio (el por qué, el qué y el cómo) de forma que conecte con los intereses y preocupaciones de cada segmento de empleados, crear las versiones del mensaje adaptadas a cada audiencia (qué le importa a la fuerza de ventas es diferente de lo que le importa al departamento de operaciones), definir los argumentos que responden a las objeciones y temores más frecuentes (voy a perder mi trabajo, esto no va a funcionar, ya hemos pasado por esto antes), y establecer el tono de la comunicación que transmite honestidad, empatía y determinación sin caer en el triunfalismo hueco ni en la ambigüedad que genera incertidumbre. Define el story arc de los 18 meses de comunicación del cambio.

Plan de canales y calendario de comunicación:
Diseña la estrategia multicanal de comunicación interna. La IA debe planificar: los mensajes del director general en los hitos clave del proceso de cambio (vídeo de lanzamiento, actualizaciones trimestrales, celebración de victorias tempranas), las comunicaciones de los managers directos con sus equipos (guiones para las reuniones de equipo, FAQ para responder las preguntas más frecuentes, cómo abordar la resistencia individual), los contenidos de la intranet y el email interno (artículos de progreso, testimonios de empleados que han vivido el cambio positivamente, recursos de formación), y los espacios de diálogo bidireccional (sesiones de preguntas y respuestas con la dirección, encuestas de pulso periódicas, buzón de sugerencias anónimo). Define cómo usar la IA para personalizar los mensajes según el departamento y el nivel jerárquico del receptor.

Medición del impacto de la comunicación con IA:
Establece el sistema de medición de la efectividad de la comunicación. La IA debe analizar: las tasas de apertura y lectura de los correos internos, la participación en las sesiones de diálogo y las preguntas planteadas (que revelan los focos de ansiedad actuales), los resultados de las encuestas de pulso mensual (nivel de comprensión del cambio, confianza en el proceso, percepción de apoyo de la dirección), y el análisis de sentimiento de los comentarios en la intranet y en los canales informales monitorizados. Define cómo la IA ajusta automáticamente el plan de comunicación basándose en los datos de cada medición periódica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de comunicación interna del cambio organizacional con IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Herramientas digitales para gestión del cambio organizacional con IA',
                'description'      => 'Diseña e implementa el stack tecnológico que da soporte a los procesos de gestión del cambio: plataformas de comunicación, sistemas de formación, herramientas de seguimiento y análisis de adopción.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de soluciones tecnológicas especializado en la digitalización de procesos de gestión del cambio organizacional, con experiencia en el diseño e implementación de stacks tecnológicos que dan soporte a transformaciones empresariales complejas en organizaciones medianas y grandes. Necesito tu ayuda para diseñar la infraestructura tecnológica completa que soporte un proceso de cambio organizacional usando inteligencia artificial.

Contexto tecnológico:
Una empresa de servicios profesionales con 600 empleados está acometiendo una transformación digital que incluye la implementación de un CRM (Salesforce), la adopción de Microsoft 365 como plataforma de colaboración, y el desarrollo de nuevas capacidades de análisis de datos para los equipos comerciales. Aproximadamente el 40% de los empleados tienen poca familiaridad con herramientas digitales avanzadas y muestran resistencia a los cambios en sus flujos de trabajo habituales.

Plataforma de comunicación del cambio:
Diseña el ecosistema tecnológico de comunicación interna para el proceso de cambio. Describe las herramientas que usarás para cada necesidad: la comunicación corporativa top-down (SharePoint con el hub de comunicación del cambio, Viva Engage para la comunicación comunitaria, Teams para los canales por equipo y proyecto), los mecanismos de feedback y diálogo bidireccional (encuestas de pulso con Microsoft Forms o Viva Pulse, buzón de preguntas anónimo, sesiones de preguntas y respuestas en vivo por Teams), y el sistema de métricas de adopción (Viva Insights para medir el uso de las herramientas, dashboards en Power BI con el progreso del cambio por departamento). Define cómo integrar la IA en cada uno de estos componentes para personalizar la experiencia de cada empleado.

Plataforma de aprendizaje y desarrollo de capacidades:
Describe el sistema de formación digital que acompañará el cambio. La IA debe permitir: la generación automatizada de contenidos de formación adaptados al nivel de conocimiento actual de cada empleado (los que ya dominan el CRM anterior necesitan una formación diferente de los que empiezan desde cero), el diseño de rutas de aprendizaje personalizadas que combinan microlearning en la plataforma (módulos de 5 a 10 minutos consumibles en el momento de necesidad), simulaciones prácticas de los nuevos flujos de trabajo, y mentoring entre pares donde los early adopters ayudan a los rezagados. Define la integración con las herramientas de trabajo reales para que la formación sea contextual y aplicable inmediatamente.

Sistema de seguimiento de la adopción con IA:
Diseña el dashboard de gestión del cambio en tiempo real. La IA debe procesar los datos de uso de las nuevas herramientas para: calcular el índice de adopción por departamento, equipo y rol (porcentaje de usuarios que han completado la formación, frecuencia de uso de las nuevas herramientas, calidad del uso medida por las funcionalidades activadas), identificar los grupos de empleados con adopción más lenta que necesitan intervención adicional, predecir los riesgos de baja adopción a 30 días basándose en las tendencias actuales, y generar alertas automáticas para los managers cuando un miembro de su equipo no está progresando según lo esperado. Define la arquitectura de datos que alimenta este sistema de analítica de la adopción.

Automatización de soporte durante el cambio:
Propón el sistema de soporte digital a los usuarios durante la transición. La IA debe gestionar: el chatbot de ayuda contextual integrado en las nuevas herramientas que responde preguntas frecuentes en tiempo real (cómo hacer una acción concreta en el CRM, dónde encontrar un documento en el nuevo SharePoint, cómo funcionar el nuevo proceso de aprobación), el sistema de tickets de soporte que clasifica automáticamente los problemas por tipo (fallo técnico, dificultad de comprensión, resistencia al uso) y los escala al equipo de soporte técnico, de formación o al manager según corresponda, y el análisis de las preguntas más frecuentes en el chatbot que alimenta la mejora continua de los materiales de formación y la comunicación del cambio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Stack tecnológico con IA para dar soporte digital a procesos de cambio organizacional',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de transformación organizacional con IA',
                'description'      => 'Usa la IA para diseñar las experiencias, talleres y materiales visuales que hacen tangible el cambio organizacional y movilizan a los equipos hacia los nuevos comportamientos.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencias organizacionales y facilitador de procesos de cambio con especialización en el diseño de talleres, materiales visuales y experiencias de aprendizaje que movilizan a las personas hacia nuevos comportamientos en entornos corporativos. Necesito tu ayuda para diseñar el conjunto de experiencias que acompañan un proceso de transformación cultural usando inteligencia artificial como aliado del diseño.

Contexto de la transformación cultural:
Una empresa de seguros con 1.200 empleados está migrando desde una cultura burocrática y jerárquica hacia una cultura de agilidad, colaboración y orientación al cliente. El cambio implica nuevas formas de trabajo en equipo (metodologías ágiles), nuevas expectativas sobre la comunicación directa y el feedback, y un mayor foco en la innovación y la experimentación frente al cumplimiento de procesos establecidos. La dirección ha comprometido 18 meses y un presupuesto significativo para la transformación.

Diseño del viaje del cambio con IA:
Describe cómo usar la IA para mapear y diseñar el journey del cambio para los empleados. El diseño debe contemplar: el mapa de la experiencia emocional del empleado durante el proceso de cambio (desde el shock inicial ante el anuncio hasta la integración de los nuevos comportamientos), los hitos experienciales que marcan la transición (el lanzamiento oficial del cambio, los primeros éxitos visibles, la primera revisión de resultados, la celebración del año de transformación), los momentos de mayor riesgo de abandono o resistencia activa y las intervenciones diseñadas para cada uno, y el arco narrativo visual del cambio que los empleados pueden ver representado en los espacios físicos y digitales de la empresa. Define cómo la IA analiza los datos de progreso de la transformación para adaptar el diseño del journey en tiempo real.

Diseño de talleres y experiencias de aprendizaje:
Propón el catálogo de experiencias de aprendizaje del proceso de cambio. La IA debe ayudar a diseñar: el taller de arranque del cambio para los equipos directivos (un día de inmersión que alinea al equipo de dirección en la visión, los valores y los comportamientos esperados del liderazgo durante la transformación), los talleres de equipos para explorar los nuevos comportamientos en un entorno seguro (juegos de rol, simulaciones, retrospectivas de equipo con facilitación visual), las sesiones de design thinking con empleados para cocrear soluciones a los problemas que el cambio genera en los procesos reales, y los espacios de reflexión periódicos donde los equipos revisan su progreso y ajustan sus compromisos. Define los materiales de facilitación que la IA genera para cada taller.

Sistema de señalización visual del cambio:
Describe la estrategia de diseño visual que hace el cambio tangible en el entorno de trabajo. La IA debe ayudar a: crear el sistema gráfico del proceso de cambio (logotipo del proyecto de transformación, paleta de colores que lo identifica, iconografía que representa los nuevos valores), diseñar los materiales de señalización en los espacios físicos (posters con los nuevos comportamientos esperados, tablones de progreso de la transformación, espacios de celebración de victorias tempranas), desarrollar los materiales digitales del cambio (fondos de pantalla, plantillas de presentación, recursos visuales para Teams y SharePoint), y crear el kit de comunicación para los managers (plantillas de mensajes, guías de conversación, tarjetas de feedback) que les ayuda a comunicar el cambio de forma coherente con sus equipos.

Medición del cambio cultural con herramientas de diseño:
Define el sistema de medición del progreso cultural que usa herramientas visuales. La IA debe procesar los datos de las encuestas de cultura periódicas para: generar mapas de calor que muestran el avance de la transformación por departamento y por comportamiento específico, identificar los bolsones de resistencia que necesitan intervención de diseño adicional, crear los informes visuales de progreso para la dirección que comunican el estado real de la transformación de forma honesta y motivadora, y diseñar las acciones de refuerzo del cambio (reconocimientos públicos de comportamientos exemplares, storytelling de casos de éxito internos, rituales de equipo que anclan los nuevos comportamientos) que la IA personaliza según el estado de cada equipo en el proceso de transformación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de experiencias y materiales visuales para transformación cultural con IA',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta interna del cambio organizacional con IA: cómo convencer a los escépticos',
                'description'      => 'Usa la IA para diseñar las estrategias de persuasión y negociación que permiten vender el cambio internamente a mandos medios, equipos resistentes y stakeholders clave.',
                'prompt_content'   => <<<'EOT'
Eres un experto en influencia organizacional y venta interna de iniciativas de cambio con experiencia en la construcción de coaliciones de apoyo, la gestión de la resistencia de mandos medios y la persuasión de stakeholders clave en procesos de transformación empresarial. Necesito tu ayuda para diseñar las estrategias de venta interna del cambio usando inteligencia artificial para un proyecto de transformación digital en una empresa industrial.

Contexto de la resistencia al cambio:
Una empresa manufacturera de 500 empleados está implementando un sistema de mantenimiento predictivo basado en sensores IoT y análisis de datos que cambia radicalmente el flujo de trabajo de los técnicos de mantenimiento. Los principales grupos resistentes son: los técnicos de mantenimiento sénior con 15 a 20 años de experiencia que sienten que el sistema cuestiona su expertise, los jefes de turno que ven el cambio como una amenaza a su autoridad, y algunos directivos de planta que no confían en que el sistema funcione en la práctica y temen los costes de implementación.

Mapa de stakeholders y análisis de resistencia con IA:
Diseña el análisis inicial de los actores del cambio. La IA debe ayudar a: identificar a todos los stakeholders relevantes para el éxito del proyecto y clasificarlos en una matriz influencia-posición (alta influencia y favorable al cambio, alta influencia y resistente, baja influencia y favorable, baja influencia y resistente), analizar las razones profundas de la resistencia de cada grupo (miedo a la pérdida de relevancia, desconfianza en la tecnología, preocupaciones sobre la privacidad de los datos de rendimiento, falta de comprensión del funcionamiento del sistema), identificar a los aliados potenciales en cada grupo resistente (los técnicos jóvenes que son early adopters de tecnología, los jefes de turno que han vivido implementaciones tecnológicas exitosas en empleos anteriores), y definir la estrategia de influencia personalizada para cada stakeholder clave.

Argumentarios de venta interna por audiencia:
Describe cómo construir los argumentos adaptados a cada grupo resistente. La IA debe generar: el argumentario para los técnicos sénior (el sistema no reemplaza su experiencia, la amplifica; los técnicos son irremplazables para interpretar las señales del sistema y tomar decisiones en situaciones complejas; los técnicos que dominan el sistema serán los más valorados en el mercado laboral), el argumentario para los jefes de turno (el sistema les da más información y control, no menos; su autoridad se refuerza porque tienen datos para justificar sus decisiones ante la dirección), y el argumentario para los directivos escépticos (datos de ROI de implementaciones similares en el sector, plan de contingencia para los riesgos técnicos que preocupan, propuesta de proyecto piloto de 3 meses antes del despliegue completo). Define los formatos más efectivos para presentar cada argumentario a cada audiencia.

Construcción de la coalición del cambio:
Diseña el programa de agentes del cambio internos. La IA debe ayudar a: identificar a los 20 o 30 empleados con mayor potencial de influencia positiva en sus pares y mayor disposición al cambio en cada área, diseñar el programa de formación de agentes del cambio que los convierte en defensores cualificados del proyecto (formación técnica en el sistema, habilidades de comunicación del cambio, gestión de conversaciones difíciles con compañeros resistentes), definir el sistema de soporte a los agentes del cambio (reuniones regulares con el equipo de proyecto, acceso privilegiado a información sobre el progreso, reconocimiento visible de su contribución), y crear los materiales de conversación que los agentes del cambio usan en sus interacciones cotidianas con compañeros escépticos.

Negociación de compromisos y quick wins:
Define la estrategia de generación de victorias tempranas que construyen confianza en el proceso. La IA debe ayudar a: identificar los quick wins más visibles para cada grupo resistente (mejoras concretas en el flujo de trabajo de los técnicos, reducción de incidencias de mantenimiento que los jefes de turno pueden atribuir al nuevo sistema), diseñar el plan de demostración controlada que convierte a los escépticos en creyentes (el piloto en la línea de producción donde trabaja el jefe de turno más influyente y resistente), y crear los acuerdos de compromisos negociados con cada grupo resistente que establecen los hitos a los que la dirección se compromete a cumplir antes de escalar el despliegue.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategias de venta interna del cambio y gestión de resistencia con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en contextos de transformación organizacional con IA',
                'description'      => 'Usa la IA para gestionar el desarrollo de producto en entornos de cambio organizacional, adaptando el roadmap, la metodología y la comunicación a la realidad de una organización en transformación.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en el desarrollo de producto en entornos de alta incertidumbre y cambio organizacional, con conocimientos en gestión del cambio y en la adaptación de metodologías ágiles a organizaciones en proceso de transformación cultural. Necesito tu ayuda para diseñar la estrategia de gestión de producto durante un proceso de transformación organizacional usando inteligencia artificial.

Contexto del producto y la organización:
Una empresa de medios de comunicación con 300 empleados está migrando de un modelo de negocio basado en publicidad impresa a un modelo digital de suscripciones. Esta transformación del modelo de negocio exige desarrollar simultáneamente la plataforma tecnológica de suscripciones, cambiar los procesos editoriales para priorizar el contenido digital, y desarrollar nuevas capacidades en el equipo (analítica de datos, SEO, experiencia de usuario) mientras se mantiene en funcionamiento la operación de medios impresos.

Roadmap de producto en contexto de transformación:
Diseña el proceso de construcción del roadmap de producto adaptado al entorno de cambio. La IA debe ayudar a: equilibrar en el roadmap las iniciativas de corto plazo que generan valor inmediato y construyen confianza en el proceso de cambio (quick wins digitales visibles para toda la organización) con las apuestas de medio y largo plazo que construyen el nuevo modelo de negocio, gestionar la tensión entre las prioridades del negocio impreso actual (que sigue generando el 70% de los ingresos) y las inversiones en el futuro digital, identificar las dependencias del roadmap de producto con los otros proyectos de transformación organizacional (formación del equipo editorial, nuevos procesos de trabajo, cambios en los sistemas de incentivos), y comunicar el roadmap a diferentes audiencias de la organización (equipipo editorial, dirección, accionistas) con el nivel de detalle y el enfoque adecuado para cada una.

Metodología ágil en una organización en transición:
Describe cómo implementar metodologías ágiles en una organización que está aprendiendo a trabajar de forma diferente. La IA debe ayudar a: diseñar el modelo de trabajo ágil adaptado a la realidad de la organización de medios (los ciclos editoriales tienen sus propias cadencias que no siempre se alinean con los sprints de dos semanas), identificar las fricciones entre la nueva metodología ágil y los procesos existentes y proponer soluciones pragmáticas que permitan avanzar sin bloquear la operación actual, entrenar al equipo en la nueva metodología de forma gradual (empezando con los equipos más receptivos y expandiendo progresivamente), y medir el nivel de madurez ágil del equipo de producto para identificar las áreas de mejora prioritarias en cada revisión trimestral.

Gestión de stakeholders en entornos de cambio:
Define la estrategia de gestión de stakeholders durante la transformación. La IA debe ayudar a: mapear el ecosistema de stakeholders del producto en la nueva organización (editores que son los usuarios principales del CMS, el equipo comercial que vende la publicidad digital, los suscriptores que son el nuevo cliente objetivo, la dirección que espera ver resultados del nuevo modelo), diseñar los mecanismos de recogida de feedback de cada stakeholder adaptados al contexto de cambio (las entrevistas con editores que están aprendiendo nuevas herramientas, las encuestas de satisfacción de los primeros suscriptores, los informes de progreso para la dirección), y gestionar los conflictos de prioridades entre stakeholders con intereses divergentes durante la transición (el negocio impreso actual versus el crecimiento digital futuro).

Métricas de producto durante la transformación:
Establece el sistema de métricas de producto adaptado al período de transición. La IA debe ayudar a: definir las métricas del modelo de negocio antiguo que hay que mantener durante la transición (circulación impresa, ingresos de publicidad) junto con las métricas del nuevo modelo que hay que construir (número de suscriptores digitales, tasa de retención, ARPU digital), identificar los indicadores tempranos de que la transformación está funcionando antes de que aparezcan en las métricas de negocio principales (engagement con el contenido digital, tráfico orgánico, tiempo de permanencia en la plataforma), y generar los dashboards que muestran el progreso de la transformación del negocio en tiempo real para los diferentes niveles de la organización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestión de producto y roadmap en contextos de transformación organizacional con IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH como líder del cambio organizacional con IA',
                'description'      => 'Usa la IA para que el departamento de RRHH lidere los procesos de transformación organizacional, desde el diagnóstico cultural hasta el acompañamiento de equipos y la medición del impacto del cambio.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos con experiencia en el liderazgo de procesos de transformación organizacional, con especialización en el diseño de intervenciones de desarrollo organizacional, gestión del cambio y desarrollo de la capacidad de liderazgo en entornos de alta incertidumbre. Necesito tu ayuda para diseñar el rol de RRHH como líder de un proceso de transformación organizacional usando inteligencia artificial.

Contexto de la transformación:
Una empresa de telecomunicaciones con 1.500 empleados está implementando una transformación hacia un modelo de organización más ágil y orientada al cliente. Esto implica la eliminación de varios niveles de la jerarquía media, la creación de equipos multifuncionales autogestionados, un nuevo modelo de liderazgo basado en el coaching en lugar del control, y un sistema de gestión del rendimiento radical diferente al actual (basado en objetivos de equipo en lugar de objetivos individuales). RRHH debe liderar la transformación de la función mientras también lidera la transformación de toda la organización.

Diagnóstico de la cultura y la preparación para el cambio:
Diseña el proceso de evaluación inicial que da a RRHH el mapa de partida. La IA debe ayudar a: procesar los datos de la última encuesta de clima laboral para identificar las fortalezas culturales sobre las que construir el cambio y las brechas más significativas respecto a la cultura objetivo, analizar los patrones de comportamiento de liderazgo actuales a través de los datos de evaluaciones 360 y del análisis de los mensajes internos, mapear los subgrupos culturales dentro de la organización (los departamentos que ya trabajan de forma ágil y colaborativa, los que tienen culturas de silo muy arraigadas, los equipos con alto liderazgo transformacional y los con liderazgo más controlador), y diseñar los grupos focales con empleados de diferentes niveles para validar el diagnóstico cuantitativo con insights cualitativos.

Transformación de la función de RRHH con IA:
Describe cómo RRHH debe transformarse primero para poder liderar la transformación. La IA debe ayudar a: rediseñar los procesos de RRHH más importantes para alinearlos con la cultura objetivo (el proceso de reclutamiento que ahora evalúa comportamientos ágiles y colaborativos, el sistema de gestión del rendimiento basado en OKRs de equipo, el proceso de desarrollo que prioriza el aprendizaje continuo sobre la formación puntual), automatizar las tareas administrativas de RRHH que consumen tiempo valioso (procesamiento de nóminas, gestión de documentación, respuestas a preguntas frecuentes de empleados a través de un chatbot de RRHH) para liberar capacidad para el trabajo de mayor valor añadido, y definir el nuevo rol de los HR Business Partners como agentes del cambio en las unidades de negocio que acompañan, en lugar de gestores de procesos de RRHH.

Desarrollo del liderazgo para la transformación:
Propón el programa de desarrollo de líderes que transforma la capacidad de gestión de la organización. La IA debe ayudar a: diseñar el programa de desarrollo para los 150 managers de la organización que les prepara para el nuevo modelo de liderazgo (del control al coaching, de la dirección unilateral a la facilitación del equipo, de la toma de decisiones individual a la distribución de la toma de decisiones), identificar los managers con mayor potencial de convertirse en líderes transformacionales y diseñar experiencias de aprendizaje acelerado para ellos (coaching ejecutivo, exposición a proyectos de innovación, intercambios con organizaciones referentes en agilidad), y gestionar el proceso de los managers que no pueden o no quieren hacer la transición al nuevo modelo de liderazgo con honestidad y empatía.

Medición del impacto de la transformación cultural:
Establece el sistema de métricas de la transformación que RRHH lidera. La IA debe analizar y reportar periódicamente: la evolución de las métricas de cultura (encuestas de clima, índices de compromiso, puntuaciones de liderazgo en las evaluaciones 360), las métricas de negocio que deben mejorar como resultado del cambio cultural (productividad, tiempo de lanzamiento de nuevos productos, satisfacción de clientes, rotación de talento clave), los indicadores de resistencia al cambio que deben disminuir (absentismo, conflictos laborales, quejas a los representantes de los trabajadores), y el retorno sobre la inversión del programa de transformación calculado por la IA comparando el coste del programa con las mejoras medibles en las métricas de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'RRHH como líder y facilitador del cambio organizacional con IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'ROI y análisis financiero del cambio organizacional con IA',
                'description'      => 'Usa la IA para cuantificar el retorno de inversión de los proyectos de transformación organizacional, construir el business case financiero del cambio y medir el impacto económico real.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con especialización en el análisis del retorno de inversión de iniciativas de transformación organizacional, con experiencia en la construcción de business cases para proyectos de cambio, la medición del impacto económico de las inversiones en cultura y capacidades organizacionales, y la presentación de la rentabilidad del cambio a consejos de administración. Necesito tu ayuda para diseñar el marco de análisis financiero del cambio organizacional usando inteligencia artificial.

Contexto financiero de la transformación:
Una empresa logística con 2.000 empleados está invirtiendo 2,5 millones de euros en un proyecto de transformación de dos años que incluye nueva tecnología, formación del equipo, consultoría de gestión del cambio y rediseño de procesos. La dirección financiera exige un business case riguroso que justifique la inversión y un sistema de seguimiento del retorno en tiempo real.

Construcción del business case del cambio con IA:
Diseña el proceso de cuantificación de los beneficios esperados del cambio. La IA debe ayudar a: identificar todas las fuentes de valor del proyecto de transformación (reducción de costes operativos por automatización, incremento de ingresos por mayor eficiencia comercial, reducción de la rotación de talento y ahorro en costes de reclutamiento y formación, mejora en la satisfacción del cliente y su impacto en la retención y el upselling), cuantificar cada fuente de valor con datos del negocio (coste medio de rotación de un empleado, tasa de conversión actual versus esperada, coste de un error de proceso versus el coste de la automatización), modelar los escenarios conservador, base y optimista del retorno de la inversión a uno, dos y tres años, y presentar el business case de forma visual y accesible para el consejo de administración con la ayuda de gráficos generados por IA.

Modelo de seguimiento financiero del cambio:
Describe el sistema de medición del retorno en tiempo real durante los dos años del proyecto. La IA debe: integrar datos de los sistemas financieros de la empresa (ERP, CRM, nóminas) para calcular automáticamente el progreso hacia los beneficios comprometidos en el business case, generar el informe mensual de ROI acumulado versus el plan que incluye el avance de cada palanca de valor identificada, detectar las desviaciones entre el ROI esperado y el real en cada punto de control y proponer los ajustes al plan de transformación para recuperar el objetivo, y mantener actualizado el modelo financiero del proyecto con las cifras reales para que la dirección financiera pueda revisar las proyecciones a final de año con datos actualizados.

Análisis del coste de la no transformación:
Define el argumento financiero del coste de no hacer el cambio. La IA debe ayudar a: calcular el coste de oportunidad de mantener el modelo operativo actual (cuántos ingresos está perdiendo la empresa por no poder responder a los cambios del mercado con la agilidad de los competidores que ya se han transformado), proyectar la evolución de los costes de la ineficiencia actual si no se aborda (costes de procesos manuales que la automatización eliminaría, costes de la alta rotación de talento si no mejora el entorno de trabajo, coste de los errores de proceso que el nuevo sistema eliminaría), y modelar el escenario de deterioro financiero a 3 y 5 años si la empresa no acomete la transformación, para contraponerlo con el escenario de transformación exitosa en la presentación al consejo de administración.

Gestión financiera del proyecto de cambio:
Propón el sistema de control presupuestario del proyecto de transformación. La IA debe: gestionar el presupuesto detallado de los 2,5 millones de euros por categoría (tecnología, formación, consultoría, comunicación interna, dedicación interna del equipo de proyecto) con seguimiento en tiempo real, detectar las desviaciones presupuestarias en las primeras fases del proyecto cuando todavía hay margen de ajuste sin comprometer los objetivos de la transformación, generar las proyecciones de gasto a final de año con diferentes escenarios de velocidad de ejecución del proyecto, y preparar los informes financieros del proyecto para el comité de dirección y el consejo de administración con el formato y el nivel de detalle que cada audiencia requiere.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Business case y análisis del ROI de la transformación organizacional con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y compliance en procesos de cambio organizacional con IA',
                'description'      => 'Usa la IA para gestionar los aspectos legales de los procesos de cambio organizacional: negociación con representantes de trabajadores, ERTE, modificaciones sustanciales y compliance laboral.',
                'prompt_content'   => <<<'EOT'
Eres un abogado laboralista especializado en reestructuraciones empresariales, derecho de la negociación colectiva y compliance laboral en procesos de cambio organizacional, con experiencia en la gestión legal de EREs, ERTEs, modificaciones sustanciales de condiciones de trabajo y negociación con sindicatos en España. Necesito tu ayuda para diseñar el marco legal de un proceso de cambio organizacional usando inteligencia artificial como soporte al trabajo jurídico.

Contexto del cambio organizacional:
Una empresa del sector retail con 400 empleados está acometiendo una reestructuración que incluye: la modificación de los sistemas de retribución variable de los equipos de tienda, la reorganización de turnos y jornadas como consecuencia de la implantación de un nuevo sistema de gestión de tiendas, la eliminación de 30 puestos en la estructura central como resultado de la automatización de procesos administrativos, y la implementación del trabajo en remoto para los equipos de oficina central. Todas estas medidas tienen implicaciones laborales que deben gestionarse cumpliendo la legislación española.

Clasificación y análisis legal de las medidas de cambio:
Diseña el proceso de análisis jurídico inicial de todas las medidas del cambio. La IA debe ayudar a: clasificar cada medida del plan de transformación según su naturaleza jurídica en el derecho laboral español (qué medidas constituyen modificación sustancial de condiciones de trabajo según el artículo 41 del ET, cuáles pueden implementarse como variaciones no sustanciales dentro del poder de dirección del empleador, cuáles requieren acuerdo colectivo para ser válidas), identificar las medidas que requieren periodo de consultas con la representación legal de los trabajadores y los plazos legales aplicables, y mapear los riesgos jurídicos de cada medida y las contingencias económicas que se deben provisionar en el balance.

Negociación con la representación legal de los trabajadores:
Describe el proceso de negociación colectiva de las medidas que lo requieren. La IA debe ayudar a: preparar el argumentario para las mesas de negociación con los datos económicos, técnicos y de organización del trabajo que justifican cada medida, analizar los convenios colectivos aplicables para identificar las obligaciones convencionales que afectan a las medidas planificadas, generar las propuestas de texto para los acuerdos que el comité de empresa debe validar en los períodos de consulta, y hacer seguimiento de los plazos legales de cada proceso de consultas para evitar nulidades formales en las medidas implementadas. Define el protocolo de documentación de cada reunión del período de consultas que protege a la empresa ante posibles impugnaciones.

Gestión del proceso de extinción de contratos:
Define el protocolo legal para los 30 despidos derivados de la automatización de procesos. La IA debe ayudar a: verificar si la cifra y el colectivo afectado requieren tramitación de ERE colectivo o permiten despidos objetivos individuales según el umbral del artículo 51 del ET, preparar la documentación técnica y económica que justifica la causa objetiva de los despidos (descripción del proceso automatizado, acreditación de la amortización real del puesto, cálculo del ahorro de costes), calcular las indemnizaciones correspondientes según la antigüedad y el salario de cada trabajador, y gestionar el calendario de comunicaciones a los trabajadores afectados y a la autoridad laboral (SEPE y Inspección de Trabajo) con los plazos legales requeridos.

Compliance laboral durante la transformación:
Propón el sistema de compliance que acompaña todo el proceso de cambio. La IA debe ayudar a: monitorizar el cumplimiento de todas las obligaciones de información y consulta durante el proceso de cambio, detectar las posibles reclamaciones individuales de trabajadores afectados por las medidas y gestionar las respuestas extrajudiciales antes de que lleguen a la vía judicial, garantizar que la implementación del trabajo en remoto cumple todos los requisitos del Real Decreto-ley 28/2020 (acuerdo de teletrabajo por escrito, registro de jornada, dotación de medios por el empleador, cobertura de gastos), y preparar los informes de compliance laboral trimestrales que verifican que la implementación de todas las medidas del cambio se ha realizado conforme a la legalidad vigente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Marco legal y compliance laboral en procesos de reestructuración y cambio organizacional con IA',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al cliente durante transformaciones organizacionales con IA',
                'description'      => 'Usa la IA para mantener la calidad de atención al cliente durante periodos de cambio organizacional interno, gestionando el impacto de las disrupciones en el servicio y comunicando los cambios con transparencia.',
                'prompt_content'   => <<<'EOT'
Eres un director de customer success y atención al cliente con experiencia en el mantenimiento de la excelencia del servicio durante períodos de transformación organizacional interna, con conocimientos en gestión del cambio, diseño de protocolos de comunicación con clientes y sistemas de soporte asistidos por IA. Necesito tu ayuda para diseñar el plan de continuidad del servicio al cliente durante un proceso de transformación organizacional.

Contexto de la transformación y el impacto en el cliente:
Una empresa de software de gestión para el sector sanitario (1.800 clientes en España) está implementando una migración de todos sus clientes desde la versión legacy del software a una nueva plataforma cloud durante los próximos 12 meses. El proceso de migración implica períodos de formación de los usuarios del cliente, posibles interrupciones breves del servicio durante la migración de datos, y un cambio en la interfaz y flujos de trabajo del software que genera fricción inicial en los usuarios. El riesgo de churn durante el proceso es significativo.

Plan de comunicación proactiva con clientes durante el cambio:
Diseña la estrategia de comunicación con los 1.800 clientes durante los 12 meses de migración. La IA debe generar: las comunicaciones previas a la migración de cada cliente (aviso de la fecha de migración con 60, 30 y 7 días de antelación, información sobre el proceso, los recursos de formación disponibles y el soporte adicional que se ofrece durante la transición), las comunicaciones durante la migración (confirmación de inicio del proceso, actualizaciones del progreso, notificación de finalización y pasos inmediatos), y las comunicaciones post-migración (confirmación de que todo está operativo, invitación a la formación en las nuevas funcionalidades, solicitud de feedback sobre la experiencia). La IA debe personalizar cada comunicación según el tamaño del cliente, el módulo que usa y el historial de interacciones con el soporte.

Refuerzo de la capacidad de soporte durante la transición:
Describe cómo usar la IA para gestionar el inevitable pico de demanda de soporte durante la migración. El sistema de IA debe: gestionar el primer nivel de soporte durante la migración respondiendo automáticamente las preguntas más frecuentes sobre el nuevo software (cómo acceder a la nueva plataforma, dónde está ahora una funcionalidad que antes estaba en otro menú, cómo hacer una tarea específica en la nueva interfaz), priorizar los tickets de soporte según la urgencia clínica (una interrupción en el módulo de prescripción de medicación tiene prioridad absoluta sobre una pregunta sobre el módulo de facturación), y detectar los clientes con mayor fricción durante la adopción del nuevo software para activar el protocolo de acompañamiento personalizado por parte de un customer success manager.

Gestión del riesgo de churn durante la transformación:
Define el sistema de retención de clientes durante el período de mayor riesgo. La IA debe: monitorizar los indicadores de riesgo de abandono en tiempo real (número de tickets abiertos por cliente, tasa de uso del nuevo software respecto al esperado en cada fase, ausencia de accesos al sistema durante más de 3 días, feedback negativo en las encuestas de satisfacción post-migración), activar protocolos de intervención personalizados según el nivel de riesgo (llamada del customer success manager para los de alto riesgo, email personalizado con recursos adicionales para los de riesgo medio, seguimiento automatizado para los de bajo riesgo), y preparar las propuestas de compensación (extensión del período de soporte dedicado, descuento en la próxima renovación) para los clientes que han tenido una experiencia de migración muy negativa.

Medición de la experiencia del cliente durante el cambio:
Establece el sistema de medición continua de la satisfacción durante los 12 meses de transformación. La IA debe generar: el informe semanal de métricas del servicio durante la transformación (tiempo medio de resolución de tickets, porcentaje de tickets resueltos en primer contacto, NPS post-migración por cohorte de clientes migrados), la comparativa entre la calidad del servicio antes, durante y después de la migración para identificar las fases críticas y sus causas, el análisis de los comentarios cualitativos de los clientes en las encuestas para detectar los problemas sistémicos de la nueva plataforma que más impactan en la satisfacción, y el plan de mejora continua que el equipo de producto y el de soporte implementan en respuesta al feedback de los clientes durante la transformación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Continuidad del servicio al cliente y gestión del churn durante transformaciones organizacionales con IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor freelance de gestión del cambio con IA: metodología y negocio',
                'description'      => 'Usa la IA para construir y escalar tu práctica de consultoría de gestión del cambio como profesional independiente, desde la metodología hasta la captación de clientes y la entrega de proyectos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de desarrollo organizacional y gestión del cambio con experiencia como profesional independiente, con conocimientos en el diseño de metodologías de consultoría, la captación de clientes corporativos y la entrega de proyectos de transformación de alta calidad sin el respaldo de una gran firma consultora. Necesito tu ayuda para diseñar el negocio de consultoría de gestión del cambio como freelance usando inteligencia artificial para hacerlo competitivo y escalable.

Contexto del consultor freelance:
Profesional con 12 años de experiencia en gestión del cambio en grandes consultoras (habiendo liderado proyectos en empresas del Ibex 35 en los sectores financiero, energético y de telecomunicaciones). Acaba de lanzarse como independiente con el objetivo de trabajar con empresas medianas (100 a 500 empleados) que no pueden pagar a las grandes consultoras pero necesitan acompañamiento profesional en sus procesos de transformación. Tiene ahorros para los primeros 10 meses y una red de contactos en empresas medianas y en RRHH.

Diseño de la metodología de consultoría con IA:
Define el proceso de creación de la metodología propietaria. La IA debe ayudar a: codificar el conocimiento y la experiencia acumulados en 12 años en una metodología estructurada que pueda presentarse a los clientes de forma clara (las fases del proceso de consultoría, los entregables de cada fase, los criterios de éxito y los factores críticos de riesgo), adaptar la metodología al segmento de empresas medianas (menos recursos, mayor informalidad, necesidad de resultados más rápidos que en las grandes corporaciones, directivos que son también propietarios y tienen más implicación emocional en el cambio), crear las herramientas de diagnóstico y de intervención que diferencian la metodología propia de los marcos genéricos disponibles en el mercado (ADKAR, Kotter, McKinsey 7S), y documentar la metodología en un formato que pueda compartirse con los clientes como dossier de propuesta y publicarse parcialmente como contenido de marketing de pensamiento.

Propuesta de valor y posicionamiento en el mercado:
Describe cómo posicionarse como consultor de gestión del cambio en el segmento de empresa mediana. La IA debe ayudar a: definir el nicho de especialización dentro de la gestión del cambio que tiene mayor demanda en el segmento de empresa mediana (transformación digital, cambios de modelo de negocio post-pandemia, implementaciones de ERP y CRM, reorganizaciones tras fusiones de empresas familiares), construir la propuesta de valor diferencial frente a las grandes consultoras (acceso directo al experto senior en cada interacción, flexibilidad y adaptación al contexto específico del cliente, precio ajustado, rapidez de arranque y entrega de resultados), y definir el pricing de los servicios (tarifa diaria, proyectos cerrados por entregables, retainer mensual para acompañamiento continuo) que equilibra la rentabilidad del negocio con la competitividad en el mercado objetivo.

Captación de clientes corporativos con IA:
Diseña la estrategia de desarrollo de negocio del primer año. La IA debe ayudar a: crear el plan de activación del network de 12 años (identificar los 40 o 50 contactos con mayor potencial de convertirse en clientes o en fuentes de referencia, personalizar el mensaje de reactivación del contacto para cada perfil, diseñar la propuesta de reunión exploratoria que presenta el nuevo proyecto profesional de forma atractiva), desarrollar la estrategia de contenidos en LinkedIn que posiciona al consultor como voz experta en gestión del cambio para empresa mediana (artículos sobre los errores más comunes en los procesos de cambio, casos de éxito anonimizados, herramientas prácticas descargables que demuestran el enfoque metodológico), y definir el sistema de seguimiento de oportunidades que el consultor gestiona en solitario sin perderse ninguna oportunidad por falta de seguimiento.

Entrega de proyectos y escalabilidad con IA:
Define el modelo operativo del negocio freelance de gestión del cambio. La IA debe ayudar a: automatizar la producción de los entregables más repetitivos de cada proyecto (diagnósticos de cultura, planes de comunicación del cambio, informes de progreso de la transformación) manteniendo la personalización necesaria para cada cliente, gestionar la documentación de cada proyecto de forma eficiente (actas de reunión generadas automáticamente, registros de decisiones, seguimiento de compromisos), identificar las tareas que pueden subcontratarse a otros profesionales especializados (diseñadores para los materiales visuales, facilitadores para los talleres, coaches para el acompañamiento individual de directivos) para aumentar la capacidad sin perder el control de la calidad, y definir el modelo de escalabilidad a medio plazo que permita pasar de un negocio de una persona a una pequeña boutique de consultoría manteniendo la propuesta de valor de la empresa mediana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir práctica de consultoría freelance de gestión del cambio con IA',
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
