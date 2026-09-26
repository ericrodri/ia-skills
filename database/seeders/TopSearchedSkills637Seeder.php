<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills637Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Plan de formación en marketing digital para equipos corporativos con IA',
                'description'      => 'Diseña un programa de upskilling en marketing digital para equipos de empresa, desde el diagnóstico de brechas hasta la medición del impacto en resultados de negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de aprendizaje y desarrollo (L&D) especializado en formación corporativa en marketing digital, con experiencia diseñando programas de upskilling para equipos de marketing en empresas medianas y grandes de distintos sectores. Tu enfoque combina el rigor del diseño instruccional con la orientación a resultados de negocio.

tarea: Diseña un programa completo de formación en marketing digital para un equipo corporativo de entre 10 y 50 personas. El programa debe ser práctico, medible y adaptado a las necesidades reales de la empresa, no un catálogo genérico de cursos.

Fase 1 — Diagnóstico de brechas de competencias en marketing digital
Diseña el proceso de identificación de necesidades formativas:
- Cuestionario de autoevaluación de competencias digitales para profesionales de marketing (20 ítems que cubran SEO, SEM, redes sociales, analítica, email marketing, marketing de contenidos, CRM y automatización)
- Entrevistas estructuradas con los managers de marketing para identificar las brechas que impactan más en los resultados actuales
- Análisis de los KPIs de marketing actuales para identificar las áreas de menor rendimiento que la formación puede mejorar
- Priorización de las brechas por impacto en negocio y por viabilidad de cierre mediante formación

Fase 2 — Diseño del programa de formación
Diseña la estructura del programa de upskilling:
- Mapa de competencias digitales para los distintos roles del equipo (especialistas, generalistas, managers)
- Itinerarios formativos diferenciados por nivel (básico, avanzado, estratégico)
- Combinación de modalidades: formación presencial en taller, elearning autoguiado, mentoring entre pares, proyectos prácticos aplicados al negocio real
- Duración recomendada y distribución temporal para minimizar el impacto en la productividad del equipo
- Recursos internos (conocimiento del propio equipo) versus recursos externos (formadores, plataformas, certificaciones)

Fase 3 — Diseño de los módulos prioritarios
Desarrolla en detalle los tres módulos formativos más críticos que hayas identificado. Para cada módulo incluye:
- Objetivos de aprendizaje específicos y medibles
- Contenidos clave y estructura de la sesión
- Actividad práctica aplicada al negocio real de la empresa
- Método de evaluación del aprendizaje
- Recursos de consulta y profundización post-formación

Fase 4 — Gestión del cambio y adopción
Diseña la estrategia de gestión del cambio para asegurar que la formación se traduzca en nuevos comportamientos en el trabajo:
- Cómo involucrar a los managers en el proceso de aprendizaje de sus equipos
- Plan de seguimiento post-formación con checkpoints a 30, 60 y 90 días
- Comunidad de práctica interna de marketing digital: cómo crear y mantener viva la cultura de aprendizaje continuo

Fase 5 — Medición del ROI de la formación
Define el modelo de medición del impacto del programa de formación en los resultados de negocio:
- Indicadores de aprendizaje (qué se ha aprendido)
- Indicadores de aplicación (qué se está usando en el trabajo)
- Indicadores de impacto en negocio (cómo han cambiado los KPIs de marketing)
- Plantilla de informe de ROI de formación para presentar a la dirección
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Programa de upskilling en marketing digital para equipos corporativos',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plan de reskilling técnico para equipos de desarrollo con IA',
                'description'      => 'Diseña programas de actualización tecnológica para equipos de desarrollo: nuevos lenguajes, frameworks, arquitecturas cloud y prácticas de ingeniería modernas.',
                'prompt_content'   => <<<'EOT'
Actúa como un Engineering Manager y especialista en desarrollo profesional técnico, con experiencia gestionando programas de reskilling para equipos de ingeniería en empresas que atraviesan transformaciones tecnológicas: migraciones de stack, adopción de cloud, introducción de prácticas DevOps o incorporación de inteligencia artificial en los productos.

contexto: El reskilling técnico es uno de los mayores retos de los equipos de ingeniería. Las tecnologías evolucionan más rápido que la capacidad de los equipos para absorberlas, y los programas de formación genéricos suelen fracasar porque no están conectados con la realidad concreta del equipo y del producto. Esta sesión diseña un programa de reskilling conectado con el trabajo real.

Bloque 1 — Auditoría técnica del equipo
Diseña un proceso de evaluación del nivel técnico actual del equipo:
- Skills matrix: plantilla para mapear las competencias técnicas de cada miembro del equipo en las tecnologías actuales y las tecnologías objetivo
- Evaluación de habilidades de ingeniería transversales: testing, code review, documentación, arquitectura de sistemas, seguridad básica
- Identificación de los "nodes críticos de conocimiento": personas cuya salida del equipo generaría un riesgo elevado por concentración de conocimiento
- Análisis de la deuda técnica como reflejo de las brechas de conocimiento actuales

Bloque 2 — Definición del stack tecnológico objetivo y la brecha
Una vez completada la auditoría, diseña el proceso de definición de la hoja de ruta tecnológica:
- Cómo involucrar al equipo en la decisión sobre las tecnologías a adoptar
- Criterios para evaluar tecnologías candidatas: madurez, comunidad, curva de aprendizaje, coste de cambio, fit con el producto actual
- Priorización de qué aprender primero según el impacto en el producto y la urgencia del negocio
- Cómo gestionar la tensión entre aprender cosas nuevas y mantener la velocidad de entrega del equipo

Bloque 3 — Diseño del programa de reskilling técnico
Diseña la estructura del programa de actualización tecnológica:
- Aprendizaje en producción: cómo incorporar el aprendizaje en el trabajo real en lugar de separarlo de él
- Proyectos de aprendizaje: pequeños proyectos reales donde se practiquen las nuevas tecnologías de forma segura
- Buddy system técnico: emparejamiento de desarrolladores senior con junior para acelerar la transferencia de conocimiento
- Tiempo dedicado al aprendizaje: cómo negociar con el negocio el espacio para que el equipo pueda aprender
- Recursos de aprendizaje técnico recomendados: documentación oficial, plataformas (Pluralsight, Frontend Masters, O'Reilly), cursos específicos, libros canónicos

Bloque 4 — Gestión del conocimiento técnico del equipo
Diseña un sistema de gestión del conocimiento que evite la pérdida de conocimiento técnico y acelere el onboarding de nuevos miembros:
- Estructura de documentación técnica: ADRs (Architecture Decision Records), runbooks, guías de contribución
- Proceso de code review como herramienta de aprendizaje, no solo de control de calidad
- Sesiones de conocimiento compartido: tech talks, demos de nuevas tecnologías, post-mortems formativos

Bloque 5 — Métricas del reskilling técnico
Define cómo medir el progreso y el impacto del programa de reskilling:
- Indicadores de adopción de las nuevas tecnologías en el código base
- Indicadores de calidad técnica (cobertura de tests, tiempo de ciclo, tasa de incidentes en producción)
- Indicadores de bienestar del equipo (satisfacción, sentimiento de crecimiento profesional)
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Reskilling técnico para equipos de desarrollo software',
                'vote_score'       => 53,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Programa de formación en diseño y creatividad para equipos corporativos con IA',
                'description'      => 'Desarrolla las capacidades creativas y de diseño de equipos multidisciplinares: pensamiento de diseño, herramientas digitales, diseño de comunicación y cultura visual.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo y formador especializado en el desarrollo de habilidades de diseño y pensamiento creativo en entornos corporativos. Tu experiencia incluye programas de formación para equipos de marketing, comunicación, producto y liderazgo en empresas que quieren elevar su cultura visual y su capacidad de resolución creativa de problemas.

tarea: Diseña un programa de formación en diseño y creatividad corporativa que desarrolle las capacidades tanto del equipo de diseño como de los colaboradores de otros departamentos que necesitan habilidades de comunicación visual básicas.

Módulo de arranque — Por qué el diseño importa en las empresas
Desarrolla el argumento de negocio para invertir en formación de diseño corporativo:
- El coste real del diseño deficiente: presentaciones que no comunican, materiales de ventas que no convierten, interfaces internas que frustran al usuario
- El ROI del diseño bien aplicado en distintos contextos empresariales
- La diferencia entre formación de diseño para diseñadores y formación de diseño para no diseñadores
- Cómo crear una cultura de diseño en la empresa sin necesidad de un equipo de diseño enorme

Módulo 1 — Design Thinking aplicado a problemas de negocio
Diseña un taller práctico de Design Thinking de un día para equipos multidisciplinares:
- Empatía: técnicas de investigación de usuario adaptadas al entorno corporativo
- Definición: cómo formular el problema correcto antes de buscar soluciones
- Ideación: facilitación de sesiones de generación de ideas con técnicas probadas (brainstorming estructurado, SCAMPER, analogías)
- Prototipado: cómo crear prototipos de baja fidelidad en menos de una hora
- Testeo: cómo validar una idea con usuarios reales en el mismo día

Incluye el plan de facilitación hora a hora del taller.

Módulo 2 — Fundamentos de comunicación visual para no diseñadores
Diseña un curso de 6 horas para profesionales sin formación en diseño que necesitan crear presentaciones, materiales de marketing o comunicaciones visuales de calidad:
- Los cuatro principios del diseño gráfico: contraste, repetición, alineación y proximidad (CRAP)
- Tipografía básica: cómo elegir y combinar fuentes sin conocimientos de diseño
- Color corporativo: cómo usar la paleta de la empresa de forma coherente y efectiva
- Composición: cómo organizar elementos en una página para guiar la atención del lector
- Práctica: rediseño de una presentación real del equipo aplicando los principios aprendidos

Módulo 3 — Herramientas de diseño para equipos de marketing y comunicación
Diseña un itinerario de formación en herramientas de diseño adaptado a distintos perfiles:
- Para equipos de marketing: Canva avanzado, Adobe Express, creación de contenido visual para redes sociales
- Para equipos de producto: Figma para no diseñadores, cómo colaborar con el equipo de diseño de forma efectiva
- Para liderazgo: cómo dar feedback de diseño constructivo y cómo evaluar propuestas creativas

Módulo 4 — Medición del impacto de la formación en diseño
Define cómo medir si el programa de formación está mejorando la calidad del output creativo de la empresa:
- Indicadores cualitativos: encuestas de satisfacción interna con los materiales de comunicación
- Indicadores cuantitativos: tasas de conversión de materiales de ventas, engagement de contenido social, NPS interno del diseño
- Proceso de revisión trimestral de la calidad visual de los materiales de la empresa
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Programa de formación en diseño y creatividad para empresas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Programa de entrenamiento de equipos de ventas con IA: metodología y medición',
                'description'      => 'Diseña un sistema de formación y entrenamiento continuo para equipos comerciales, con role-plays, coaching de llamadas y seguimiento de KPIs de desarrollo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de enablement de ventas (Sales Enablement Manager) con experiencia diseñando e implementando programas de formación para equipos comerciales en empresas B2B de tecnología, servicios profesionales y sector industrial. Tu especialidad es convertir el conocimiento sobre el proceso de ventas en comportamientos concretos y medibles en el campo.

tarea central: Diseña un programa anual de formación y entrenamiento continuo para un equipo de ventas de entre 10 y 30 personas, que mejore las tasas de conversión, reduzca el ciclo de venta y aumente el ticket medio.

Parte 1 — Diagnóstico del equipo comercial
Diseña el proceso de diagnóstico inicial del equipo:
- Scorecards de competencias comerciales para evaluar a cada miembro del equipo en las dimensiones clave: cualificación de leads, manejo de objeciones, negociación, cierre, gestión del CRM, habilidades de presentación
- Análisis de las grabaciones de llamadas y reuniones de ventas más recientes para identificar patrones de comportamiento (qué hacen los top performers de forma diferente a los de rendimiento medio)
- Análisis del funnel de ventas para identificar en qué etapa se pierde más oportunidad y por qué
- Encuesta anónima al equipo sobre qué necesitan aprender para ser más efectivos

Parte 2 — Estructura del programa de enablement
Diseña el sistema de formación y entrenamiento a tres niveles:

Nivel 1 — Onboarding de nuevos vendedores (primeros 90 días):
- Semana 1-2: conocimiento del producto, mercado y competencia
- Semana 3-4: metodología de ventas de la empresa y herramientas (CRM, secuencias de prospección)
- Mes 2: primeras llamadas acompañadas con manager
- Mes 3: autonomía supervisada con objetivos de rampa gradual

Nivel 2 — Formación continua del equipo consolidado (trimestral):
- Workshops de 3 horas en temas específicos basados en las brechas identificadas en el diagnóstico
- Biblioteca de recursos: playbooks de ventas, guías de manejo de objeciones, casos de éxito documentados
- Sesiones semanales de sharing de mejores prácticas entre pares

Nivel 3 — Coaching individual del manager (semanal):
- Estructura del 1:1 semanal orientado al desarrollo, no solo al pipeline
- Escucha de grabaciones de llamadas con feedback estructurado
- Plan de desarrollo individual para cada miembro del equipo

Parte 3 — Metodología de role-play y práctica deliberada
Diseña un sistema de role-play estructurado para practicar las situaciones de venta más críticas:
- Las 5 situaciones de venta más difíciles que debe dominar el equipo (primera llamada en frío, presentación a múltiples stakeholders, manejo del "ya tenemos un proveedor", negociación de precio, cierre ante la indecisión)
- Para cada situación: escenario detallado, rol del cliente (con perfil y objeciones específicas), criterios de evaluación del role-play

Parte 4 — Métricas del programa de enablement
Define los indicadores que demuestran que el programa está mejorando el rendimiento comercial:
- Métricas de actividad formativa (horas de formación, participación, puntuaciones en evaluaciones)
- Métricas de comportamiento (adopción de la metodología, calidad de los registros en CRM)
- Métricas de resultado (conversión por etapa, ciclo de venta, ticket medio, cuota alcanzada)
- Cómo correlacionar formación con resultados de ventas de forma estadísticamente válida
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sales enablement y formación continua de equipos comerciales',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Programa de desarrollo de capacidades de producto para organizaciones con IA',
                'description'      => 'Diseña un plan de formación en product thinking y metodologías ágiles para equipos que quieren adoptar una mentalidad de producto en su organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief Product Officer y formador en product management con experiencia liderando la transformación hacia organizaciones orientadas al producto en empresas que vienen de modelos más tradicionales de desarrollo por proyectos. Tu especialidad es construir la mentalidad y las capacidades de producto en todos los niveles de la organización, no solo en el equipo de PM.

instrucción de trabajo: Muchas organizaciones quieren "ser más como una empresa de producto" pero no saben por dónde empezar. La transformación hacia un modelo orientado al producto requiere cambios en habilidades, procesos, estructuras y cultura. Esta sesión diseña un programa de capacitación integral para acelerar esa transformación.

Parte 1 — Diagnóstico de madurez de producto
Diseña una evaluación de madurez del equipo y la organización en capacidades de producto:
- Assessment de habilidades de product management para PMs actuales y aspirantes
- Evaluación del nivel de orientación al usuario en distintos departamentos
- Análisis de los procesos actuales de toma de decisiones de producto (¿basadas en datos, en opiniones, en la HIPPO?)
- Evaluación de la estructura del equipo: ¿equipos orientados a features o a outcomes?
- Mapa del nivel de adopción de prácticas ágiles en el equipo de desarrollo

Parte 2 — Curriculum de product thinking para la organización
Diseña un curriculum formativo diferenciado por audiencia:

Para el equipo de product management:
- Descubrimiento de producto y validación de hipótesis (customer interviews, experimentos)
- Priorización estratégica (frameworks: RICE, ICE, Opportunity Scoring)
- Escritura de product specs y user stories de calidad
- Gestión de stakeholders difíciles y comunicación del roadmap
- Uso de datos para la toma de decisiones de producto

Para el equipo de desarrollo (ingenieros y diseñadores):
- Mentalidad de producto: ownership versus entrega de tareas
- Cómo contribuir al discovery, no solo a la delivery
- Estimación y gestión de la incertidumbre técnica

Para el liderazgo y stakeholders:
- Cómo funciona una organización orientada al producto
- Cómo dar dirección estratégica sin microgestionar el roadmap
- Cómo leer e interpretar las métricas de producto

Parte 3 — Programa de certificación interna en product management
Diseña un programa de certificación interna de 6 meses para formar a nuevos PMs desde dentro de la organización:
- Criterios de selección de candidatos internos
- Estructura del programa: teoría, práctica supervisada y proyecto final
- Proyecto capstone: descubrimiento y definición de una oportunidad de producto real
- Criterios de evaluación y certificación interna

Parte 4 — Cultura de aprendizaje continuo en producto
Define las prácticas que mantienen viva la cultura de aprendizaje en el equipo de producto:
- Retrospectivas de producto: qué aprendimos del último ciclo de descubrimiento y entrega
- Product critique: revisión crítica de productos internos y de la competencia
- Biblioteca de aprendizajes del equipo: decisiones tomadas, hipótesis validadas e invalidadas, lessons learned

Parte 5 — Métricas de la transformación hacia una organización de producto
Define los indicadores que demuestran que la organización está evolucionando hacia un modelo más orientado al producto y al usuario, diferenciando entre indicadores de proceso y de resultado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Transformación hacia una organización orientada al producto',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Sistema de planes de desarrollo individual y reskilling de equipos con IA',
                'description'      => 'Diseña el proceso completo de planes de desarrollo individual (PDI) y programas de reskilling corporativo, conectando el desarrollo de personas con los objetivos estratégicos de la empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Learning & Development (L&D) con experiencia liderando la función de desarrollo de personas en empresas de entre 500 y 5.000 empleados en sectores de transformación acelerada: tecnología, servicios financieros, manufactura avanzada y retail. Tu especialidad es conectar el desarrollo individual con la estrategia de negocio y demostrar el retorno de la inversión en formación.

tarea principal: Diseña un sistema integral de gestión del desarrollo de personas que incluya el proceso de planes de desarrollo individual (PDI), la identificación de necesidades de reskilling colectivo y el programa de formación corporativa anual.

Capítulo 1 — El proceso de planes de desarrollo individual (PDI)
Diseña el proceso completo de creación y seguimiento de PDIs:

Etapa de evaluación inicial:
- Conversación de desarrollo 1:1 manager-colaborador: guía de preguntas para explorar aspiraciones, fortalezas y áreas de desarrollo
- Herramienta de autoevaluación de competencias: plantilla para que el colaborador valore su nivel actual en las competencias clave de su rol y las que aspira a desarrollar
- Feedback 360: proceso simplificado para recoger perspectivas del manager, pares y colaboradores directos (si aplica)

Diseño del PDI:
- Estructura del PDI: objetivos de desarrollo, acciones concretas, recursos necesarios, plazos y métricas de progreso
- Tipos de acciones de desarrollo: formación formal, proyectos de exposición, mentoring, coaching, asignaciones especiales
- Cómo conectar el PDI con los objetivos de negocio del área y de la empresa
- Cómo gestionar las expectativas de promoción durante la conversación de desarrollo

Seguimiento y revisión:
- Frecuencia y estructura de las revisiones del PDI a lo largo del año
- Cómo mantener vivo el PDI sin convertirlo en burocracia
- Cómo el manager puede apoyar el desarrollo de su equipo en el día a día

Capítulo 2 — Identificación y priorización de necesidades de reskilling
Diseña el proceso de análisis de necesidades formativas a nivel organizacional:
- Skills gap analysis: metodología para identificar las brechas entre las competencias actuales de la organización y las que necesitará en los próximos 2-3 años
- Cómo involucrar a los líderes de negocio en la identificación de necesidades formativas futuras
- Priorización de necesidades de formación: matriz de impacto en negocio versus urgencia
- Decisión de build, buy o borrow: cuándo formar internamente, cuándo contratar formadores externos y cuándo buscar talento externo

Capítulo 3 — Programa de formación corporativa anual
Diseña la estructura del programa de formación corporativa:
- Portfolio de programas: formación obligatoria (cumplimiento, onboarding), formación de liderazgo y gestión, formación técnica por función, formación transversal (habilidades digitales, bienestar)
- Presupuesto de formación: cómo calcular el presupuesto necesario y cómo justificarlo ante la dirección
- Plataforma de aprendizaje: criterios para elegir un LMS corporativo y cómo maximizar su adopción
- Reconocimiento del aprendizaje: cómo crear una cultura donde el aprendizaje sea valorado y reconocido

Capítulo 4 — Medición del impacto de L&D
Define el modelo de evaluación del impacto de la inversión en formación:
- Modelo de Kirkpatrick adaptado al entorno corporativo (reacción, aprendizaje, comportamiento, resultados)
- KPIs de L&D para el cuadro de mando de RRHH
- Cómo presentar el ROI de la formación a la dirección financiera
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema integral de desarrollo de personas y reskilling corporativo',
                'vote_score'       => 56,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Formación financiera corporativa y cultura de datos para equipos con IA',
                'description'      => 'Diseña programas de alfabetización financiera para equipos no financieros y formación en análisis de datos para el departamento de finanzas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero con experiencia en formación corporativa y en el desarrollo de cultura financiera y de datos dentro de organizaciones complejas. Tu especialidad es traducir conceptos financieros complejos en conocimiento accionable para equipos de negocio no financieros, y en actualizar al equipo de finanzas en las herramientas y metodologías de análisis de datos más modernas.

instrucción de trabajo: Diseña un programa de formación financiera corporativa en dos dimensiones: la alfabetización financiera para líderes y equipos de negocio no financieros, y la actualización del equipo de finanzas en analítica de datos, automatización y nuevas herramientas.

Dimensión 1 — Alfabetización financiera para líderes no financieros
Diseña un programa de formación financiera para managers y directores que no tienen formación en finanzas pero necesitan tomar decisiones con implicaciones económicas:

Módulo A — Fundamentos de finanzas para no financieros (6 horas):
- Cómo leer e interpretar una cuenta de resultados: qué le dice al manager sobre su área
- El balance: activos, pasivos y patrimonio explicados con ejemplos del negocio real
- El estado de flujos de caja: por qué una empresa rentable puede quedarse sin dinero
- Los ratios financieros más importantes para el manager: margen, rentabilidad, liquidez

Módulo B — Gestión del presupuesto del área (4 horas):
- Cómo construir un presupuesto de área desde cero
- Cómo hacer el seguimiento del presupuesto mensualmente
- Cómo defender una petición de presupuesto ante la dirección financiera
- Cómo interpretar las desviaciones y explicarlas correctamente

Módulo C — Finanzas para la toma de decisiones (4 horas):
- Análisis coste-beneficio simplificado para decisiones de inversión del área
- Cálculo básico de ROI de proyectos e iniciativas
- Cómo evaluar el impacto financiero de decisiones de personal, tecnología o proveedores
- El valor temporal del dinero explicado de forma práctica

Dimensión 2 — Actualización del equipo de finanzas en analítica y automatización
Diseña un programa de upskilling para el equipo de finanzas corporativas:

Módulo D — Excel y herramientas de análisis avanzado (8 horas):
- Excel avanzado para finanzas: tablas dinámicas, Power Query, modelización financiera
- Introducción a Power BI para la creación de dashboards financieros
- Python básico para finanzas: automatización de informes y análisis de datos

Módulo E — Automatización de procesos financieros (6 horas):
- Identificación de procesos repetitivos susceptibles de automatización (cierre mensual, conciliaciones, informes regulatorios)
- Herramientas de automatización accesibles para equipos de finanzas (Power Automate, scripts de Excel, RPA básico)
- Caso práctico: automatización del proceso de cierre mensual paso a paso

Módulo F — Financial storytelling con datos (4 horas):
- Cómo presentar análisis financiero de forma visual y persuasiva
- Principios de visualización de datos aplicados a finanzas
- Cómo diseñar el dashboard financiero mensual para la dirección

Medición del impacto del programa:
Define los indicadores que demuestran que el programa de formación financiera está mejorando la calidad de las decisiones de negocio y la eficiencia del equipo de finanzas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Formación financiera y analítica para equipos corporativos',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Programa de formación en compliance y ética empresarial para equipos con IA',
                'description'      => 'Diseña formaciones en cumplimiento normativo, ética corporativa y gestión de riesgos legales adaptadas a distintos roles y niveles de la organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de compliance y ética corporativa con experiencia diseñando e implementando programas de formación en cumplimiento normativo para empresas de distintos sectores regulados: banca, salud, industria farmacéutica, tecnología y sector público. Tu especialidad es convertir las obligaciones legales en cultura organizacional, no en burocracia que nadie cumple.

tarea: Diseña un programa completo de formación en compliance y ética empresarial para una empresa mediana (200-1.000 empleados) que cumpla con las obligaciones legales y, más importante, que cambie comportamientos reales.

Pilar 1 — Diagnóstico de cultura de compliance
Antes de diseñar la formación, diseña el proceso de diagnóstico:
- Encuesta anónima de cultura ética: 15 preguntas para evaluar la percepción del comportamiento ético en la organización, la presión a incumplir normas y la confianza en los canales de denuncia
- Análisis de los incidentes de compliance del último año: qué tipos de infracciones han ocurrido, en qué áreas y por qué razones
- Evaluación del nivel de conocimiento de las normas clave: ¿sabe el empleado medio lo que está permitido y lo que no?
- Mapa de riesgos de compliance por función: qué departamentos tienen mayor exposición a qué tipos de riesgo legal

Pilar 2 — Arquitectura del programa de formación en compliance
Diseña la estructura del programa diferenciada por nivel:

Para toda la organización (formación obligatoria anual):
- Código de conducta y ética empresarial: qué valores guían las decisiones en la empresa y qué comportamientos son inaceptables
- Prevención de la corrupción y el soborno: FCPA, UK Bribery Act, legislación española
- Protección de datos y privacidad: RGPD para todos los empleados que manejan datos personales
- Prevención del acoso y la discriminación: protocolo de la empresa y canales de denuncia
- Canal de denuncias (whistleblowing): cómo funciona, qué protecciones tiene el denunciante

Para roles de mayor riesgo (formación específica):
- Área comercial: regalos, invitaciones, conflictos de interés, negociación con funcionarios públicos
- Área financiera: prevención del blanqueo de capitales, control interno, normas contables
- Área de compras: conflictos de interés en la selección de proveedores, due diligence de integridad
- Área de tecnología: seguridad de la información, cumplimiento de la normativa de privacidad, gestión de incidentes

Para el equipo directivo y el consejo:
- Responsabilidad del administrador y del directivo en materia de compliance
- Deber de vigilancia y modelos de organización y gestión (artículo 31 bis CP)
- Gestión de conflictos de interés en la alta dirección

Pilar 3 — Metodologías de formación en compliance que funcionan
Describe las metodologías que realmente cambian comportamientos (y las que no):
- Por qué el elearning de cumplimiento obligatorio tiene tasas de aprendizaje real cercanas a cero y cómo mejorarlo
- El poder del caso real: cómo usar incidentes reales (anonimizados) de la propia empresa o del sector
- Role-plays de dilemas éticos: cómo facilitar conversaciones sobre situaciones grises donde la norma no da una respuesta clara
- Campañas de comunicación interna de compliance como complemento a la formación formal

Pilar 4 — Medición de la efectividad del programa de compliance
Define el sistema de medición que demuestra que el programa está reduciendo el riesgo legal de la empresa:
- Indicadores de proceso: tasas de completitud de la formación, puntuaciones en evaluaciones de conocimiento
- Indicadores de comportamiento: uso del canal de denuncias, número de consultas al equipo de compliance, declaraciones de conflicto de interés
- Indicadores de resultado: incidentes de compliance detectados (y no detectados), sanciones regulatorias, evaluaciones de organismos supervisores
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Programa de formación en compliance y ética corporativa',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Formación y desarrollo de equipos de atención al cliente con IA',
                'description'      => 'Diseña un programa de formación continua para agentes de soporte y customer success, con medición del impacto en satisfacción del cliente y KPIs operativos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de operaciones de customer support con experiencia liderando equipos de atención al cliente en empresas de tecnología, ecommerce y servicios financieros. Tu especialidad es el desarrollo de las habilidades de los agentes de soporte y customer success, conectando la formación con mejoras medibles en satisfacción del cliente y eficiencia operativa.

tarea: Diseña un programa completo de formación y desarrollo profesional para un equipo de atención al cliente de entre 15 y 80 agentes, incluyendo el onboarding de nuevos agentes, la formación continua del equipo consolidado y el desarrollo de los agentes con potencial de crecimiento.

Módulo 1 — Onboarding acelerado de nuevos agentes
Diseña un programa de onboarding de 30 días para agentes de soporte:

Semana 1 — Conocimiento del producto y la empresa:
- Inmersión en el producto o servicio que se soporta (demo, prueba del producto como cliente, documento de preguntas frecuentes exhaustivo)
- Cultura del equipo, valores de atención al cliente y expectativas de comportamiento
- Herramientas del equipo: CRM, helpdesk, base de conocimiento, canales de comunicación

Semana 2 — Habilidades de atención:
- Comunicación escrita para soporte: tono, claridad, empatía, formateo de respuestas
- Manejo de situaciones difíciles: clientes enfadados, peticiones imposibles, escaladas
- Role-play de las 10 tipologías de conversación más frecuentes

Semanas 3-4 — Práctica supervisada:
- Resolución de tickets reales con revisión del supervisor
- Métricas de rampa: qué KPIs se esperan al final del mes 1, 2 y 3
- Buddy system: emparejamiento con un agente senior durante el primer mes

Módulo 2 — Formación continua del equipo consolidado
Diseña el sistema de aprendizaje continuo para agentes con experiencia:
- Revisión quincenal de calidad: escucha de conversaciones con feedback estructurado
- Sesiones mensuales de conocimiento del producto: actualizaciones de features, cambios en procedimientos
- Formación en habilidades avanzadas: negociación de retención, upselling consultivo en customer success, manejo de escaladas complejas
- Biblioteca de casos difíciles: archivo de conversaciones ejemplares para que el equipo aprenda de los mejores

Módulo 3 — Desarrollo de agentes con potencial de liderazgo
Diseña un programa de desarrollo para los mejores agentes que quieren crecer hacia roles de QA, team lead o supervisor:
- Proyecto de mejora de proceso: cada candidato lidera un proyecto de mejora real del equipo durante 3 meses
- Mentoring con el manager: sesiones de desarrollo focalizadas en las competencias de liderazgo
- Exposición a responsabilidades de mayor nivel: gestión de escaladas, onboarding de nuevos compañeros, participación en el diseño de la base de conocimiento

Módulo 4 — Sistemas de calidad y coaching
Diseña el sistema de gestión de la calidad que alimenta la formación continua:
- Scorecards de evaluación de calidad: dimensiones, pesos y criterios de puntuación
- Proceso de calibración: cómo asegurar que todos los evaluadores aplican los mismos criterios
- Conversación de coaching post-evaluación: estructura y preguntas para que el agente se desarrolle
- Gestión del rendimiento bajo: plan de mejora y acompañamiento hasta superar la brecha

Módulo 5 — Métricas de desarrollo del equipo de soporte
Define el cuadro de mando de L&D para el equipo de atención al cliente, conectando las métricas de formación con las métricas de negocio (CSAT, FCR, AHT, churn evitado).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Formación y desarrollo de equipos de soporte y customer success',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Plan de desarrollo profesional continuo para freelancers con IA',
                'description'      => 'Diseña tu propio sistema de upskilling como trabajador independiente: identificación de brechas, selección de formación y medición del impacto en ingresos y posicionamiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de desarrollo profesional especializado en trabajadores independientes y freelancers. Tu experiencia incluye el asesoramiento a cientos de profesionales que trabajan por cuenta propia en distintos sectores digitales: diseño, desarrollo, consultoría, marketing, redacción, formación y más. Tu especialidad es ayudar al freelance a crecer profesionalmente de forma autónoma y con recursos limitados, sin el apoyo de un departamento de formación corporativa.

instrucción de arranque: El freelance tiene una ventaja y una desventaja en formación. La ventaja es que puede elegir exactamente en qué especializarse sin depender de la decisión de una empresa. La desventaja es que nadie le dice qué aprender, nadie paga su formación y nadie le da tiempo para aprender: todo el tiempo que dedica a formarse es tiempo que no factura. Esta sesión diseña un sistema inteligente de desarrollo profesional adaptado a esa realidad.

Bloque 1 — Diagnóstico de posición profesional y brechas
Diseña el proceso de autodiagnóstico del freelance:
- Inventario de competencias: ¿en qué soy realmente bueno ahora mismo? (técnicas, relacionales, de negocio)
- Análisis de mercado: ¿qué habilidades piden los clientes que no tengo? ¿qué competencias tienen los freelancers que cobran más que yo?
- Brecha de posicionamiento: ¿por qué me contratan ahora? ¿por qué quiero que me contraten en 2 años? ¿qué falta para llegar ahí?
- Análisis de proyectos pasados: ¿en qué proyectos he generado más valor? ¿qué tengo que aprender para hacer más de eso?

Bloque 2 — Diseño del plan de desarrollo personal (PDP) del freelance
Diseña la estructura del plan de desarrollo adaptada al freelance:
- Horizonte de 12 meses: una competencia principal a desarrollar en profundidad y dos competencias complementarias de mantenimiento
- Criterio de selección de la competencia principal: ¿qué aprendo que me permita cobrar más, a mejores clientes o con más satisfacción personal?
- Recursos de formación seleccionados: cursos, libros, comunidades, mentores, proyectos de práctica
- Integración del aprendizaje con el trabajo real: cómo aprender mientras haces proyectos de clientes
- Presupuesto de formación: cuánto debería invertir en formarse y cómo amortizarlo

Bloque 3 — Gestión del tiempo para el aprendizaje como freelance
Diseña un sistema de gestión del tiempo que incluya el aprendizaje sin que devore la facturación:
- La regla del 10%: dedicar el 10% del tiempo facturable al aprendizaje y cómo calcularlo
- Proyectos de aprendizaje pagados: cómo conseguir proyectos que te fuercen a aprender algo nuevo y que te paguen por aprenderlo
- La trampa de la formación pasiva: por qué ver cursos sin aplicar no cambia nada y cómo evitarla
- Aprendizaje en red: cómo aprender de otros freelancers y expertos sin tener que hacer cursos costosos

Bloque 4 — Construcción pública del aprendizaje (building in public)
Diseña una estrategia de aprendizaje visible que convierta el proceso de formación en posicionamiento de marca personal:
- Cómo documentar el proceso de aprendizaje de una nueva habilidad en LinkedIn o en un blog
- Cómo convertir un proyecto de práctica en un caso de estudio que atraiga clientes
- Cómo compartir lo aprendido en comunidades relevantes para ganar reputación como experto emergente
- La barrera del síndrome del impostor: cómo compartir lo que sabes aunque sientas que no eres suficiente experto

Bloque 5 — Medición del retorno del aprendizaje como freelance
Define cómo saber si la inversión en formación está dando sus frutos:
- Indicadores directos: ¿he conseguido proyectos que no conseguía antes? ¿he podido subir tarifas? ¿he atraído mejores clientes?
- Indicadores indirectos: ¿me siento más seguro en las propuestas? ¿los clientes me valoran más? ¿recibo más referidos?
- Revisión trimestral del plan de desarrollo: cómo ajustar el rumbo según lo que está y no está funcionando
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de desarrollo profesional y upskilling para freelancers',
                'vote_score'       => 50,
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
