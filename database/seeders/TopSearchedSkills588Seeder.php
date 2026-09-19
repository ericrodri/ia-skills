<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills588Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de programas de FP y FP dual con IA',
                'description'       => 'Diseña campañas de captación de alumnos para centros de formación profesional usando IA para segmentar audiencias, crear contenido atractivo y optimizar el funnel de matriculación.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en marketing educativo con experiencia en la captación de alumnos para centros de formación profesional. Tu objetivo es diseñar una campaña de marketing completa para un centro de FP que quiere aumentar sus matriculaciones en los ciclos de grado superior con mayor demanda del mercado laboral.

Contexto del centro:
El centro de FP ofrece 8 ciclos formativos de grado superior en las familias profesionales de informática, administración y comercio. Tiene una tasa de inserción laboral del 87% en los últimos tres años y acuerdos de FP dual con 45 empresas del sector. Su principal reto es competir con la percepción de que la universidad es la única salida después del bachillerato.

Instrucción de campaña — trabaja estos bloques:

1. Análisis de audiencias y segmentación con IA
Define los tres segmentos de audiencia principales para la captación de alumnos: estudiantes de 4º de ESO y bachillerato que están eligiendo su camino formativo, personas de 25-35 años que trabajan y buscan reconvertirse profesionalmente, y adultos desempleados que buscan una salida laboral rápida. Para cada segmento, usa IA para construir el perfil detallado: motivaciones para estudiar FP, barreras (estigma social, compatibilidad con el trabajo, coste percibido), y canales donde consumen información sobre su futuro formativo.

2. Narrativa de marca y mensajes clave
Desarrolla la propuesta de valor del centro que combate el estigma de la FP: cifras de empleabilidad presentadas de forma atractiva, historias de exalumnos que tienen éxito en empresas reconocidas, presentación de la FP dual como la formación más cercana al mercado laboral real, y el argumento del tiempo de formación (2 años vs. 4 de universidad) como ventaja para quienes quieren incorporarse pronto al mercado. Usa IA para generar variaciones del mensaje principal adaptadas a cada segmento de audiencia.

3. Estrategia de contenidos y redes sociales
Crea un plan de contenidos de 12 semanas para las fases de descubrimiento, consideración y decisión de los candidatos: vídeos cortos de "un día en clase" para TikTok e Instagram Reels, testimonios en vídeo de exalumnos trabajando en empresas de referencia, infografías comparativas entre FP y universidad (salida laboral, tiempo, coste, deuda), y sesiones de preguntas y respuestas en directo con tutores y empresas colaboradoras. Para cada tipo de contenido, usa IA para generar los guiones, textos y calendarios de publicación.

4. Funnel de captación digital
Diseña el funnel de captación online de principio a fin: anuncios de búsqueda en Google para términos de alta intención ("estudiar informática sin universidad", "grado superior administración trabajo"), landing pages optimizadas por ciclo formativo con buscador de FP dual integrado, secuencia de email nurturing para leads que no se matriculan en la primera visita, y chatbot de respuesta inmediata a dudas sobre requisitos de acceso y proceso de matriculación. Usa IA para generar las variaciones de anuncio, el copy de las landing pages y la secuencia de emails de nurturing.

5. Relaciones con institutos y orientadores
Los orientadores educativos de los institutos son el canal más efectivo de derivación de alumnos de bachillerato. Diseña la estrategia de relaciones con orientadores: kit de orientador con materiales actualizados (guía de itinerarios profesionales, comparativa de salidas laborales por ciclo, invitación a jornadas de puertas abiertas), visitas al instituto de exalumnos y de empresas colaboradoras en FP dual, y presencia en las ferias de orientación educativa del territorio. Usa IA para personalizar los materiales según el perfil del instituto y el contexto del mercado laboral local.

6. Medición y optimización de la campaña con IA
Define el sistema de medición de la campaña: embudo de conversión desde primera visita a la web hasta matriculación definitiva, coste de captación por alumno por canal, tasa de conversión por ciclo formativo y por segmento de audiencia, y Net Promoter Score de alumnos matriculados en las primeras semanas. Usa IA para analizar los datos de rendimiento y generar recomendaciones de optimización mensual del presupuesto y del mix de canales.

Entrega la campaña como plan de marketing ejecutable con presupuesto estimado por canal y calendario de acciones mes a mes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar campañas de captación de alumnos para centros de FP con segmentación y contenido generado con IA',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plataforma e-learning para FP con IA generativa',
                'description'       => 'Diseña la arquitectura de una plataforma de aprendizaje online para formación profesional que use IA para personalizar el itinerario formativo, generar ejercicios y evaluar competencias prácticas.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software especializado en plataformas de aprendizaje online (LMS) y tecnología educativa. Tu objetivo es diseñar una plataforma de e-learning para formación profesional que integre inteligencia artificial generativa para personalizar la experiencia de aprendizaje de cada alumno.

Contexto del producto:
La plataforma se usará en ciclos formativos de grado medio y superior en las familias de informática y administración. Los alumnos combinan la formación online con prácticas en empresas en el modelo de FP dual. El sistema debe permitir al tutor del centro y al tutor de empresa seguir el progreso del alumno en tiempo real.

Instrucción de arquitectura — trabaja estos módulos:

1. Arquitectura general de la plataforma LMS
Define los módulos principales del sistema: catálogo de ciclos y módulos formativos con su estructura curricular, sistema de matrícula y gestión de grupos (presencial, online, dual), motor de entrega de contenidos (texto, vídeo, simulaciones interactivas), sistema de evaluación (cuestionarios, proyectos, rúbricas de competencias), y cuadro de mando para el tutor. Describe la arquitectura técnica general: frontend (React/Next.js), backend (Laravel o Django), base de datos (PostgreSQL), almacenamiento de vídeo (S3-compatible), y servicios de IA (llamadas a API de LLM para las funciones de IA generativa).

2. Motor de personalización del itinerario con IA
Diseña el sistema de aprendizaje adaptativo: diagnóstico inicial de conocimientos del alumno al entrar en cada módulo, ajuste dinámico del itinerario según el rendimiento en actividades (si supera el 85% en el test del bloque, accede al siguiente directamente; si cae por debajo del 60%, se le asignan actividades de refuerzo), y recomendación de recursos complementarios basada en el perfil de aprendizaje. Define el modelo de datos del perfil del alumno y los endpoints de la API de personalización.

3. Generador de ejercicios y casos prácticos con IA
Uno de los valores diferenciales de la plataforma es que la IA genera ejercicios prácticos personalizados. Define el sistema de generación: el tutor define el tema, el nivel de dificultad y el tipo de ejercicio (caso práctico, problema de aplicación, simulación de situación laboral real), y la IA genera el enunciado, la guía de corrección y los criterios de evaluación. Especifica el prompt de sistema para el generador de ejercicios, el proceso de revisión por el tutor antes de publicar, y el sistema de versionado de ejercicios generados.

4. Evaluación de competencias prácticas con IA
La FP evalúa competencias prácticas, no solo conocimientos teóricos. Diseña el sistema de evaluación: rúbricas de competencias editables por el tutor, evaluación entre pares asistida por IA (el alumno evalúa el trabajo de otro con una guía generada por IA), corrección automática de proyectos de programación (ejecución de tests unitarios y análisis de calidad de código), y análisis de portafolio de prácticas en empresa con IA que extrae evidencias de competencias a partir de los informes del alumno. Define el proceso de calibración del sistema para asegurar consistencia entre evaluadores.

5. Seguimiento de FP dual con tutor de empresa
En la FP dual, el tutor de empresa es un actor crítico que normalmente no tiene experiencia con plataformas educativas. Diseña la experiencia del tutor de empresa: panel simplificado con el plan formativo del alumno en la empresa, registro de actividades realizadas y competencias trabajadas, comunicación con el tutor del centro para coordinación, y notificaciones automáticas de los hitos del alumno en la plataforma. Describe cómo la IA genera automáticamente el informe de seguimiento de prácticas combinando los datos del tutor de empresa y los resultados en la plataforma.

6. Analítica de aprendizaje y mejora continua
Define el sistema de learning analytics: indicadores de engagement por módulo (tiempo de visualización de vídeos, tasa de completado de actividades, frecuencia de acceso a la plataforma), correlación entre comportamiento en la plataforma y resultados de evaluación, detección temprana de alumnos en riesgo de abandono, y comparativa de rendimiento entre grupos y entre centros que usan la plataforma. Usa IA para generar alertas automáticas al tutor cuando un alumno muestra señales de riesgo y para producir el informe mensual de calidad del aprendizaje por ciclo formativo.

Entrega el diseño de la plataforma en un documento de arquitectura técnica con estimación de tiempo de desarrollo por módulo y tecnologías recomendadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar plataformas LMS para FP con personalización del aprendizaje e IA generativa integrada',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño instruccional para FP dual con IA',
                'description'       => 'Crea materiales y unidades didácticas para formación profesional dual usando IA para garantizar la alineación entre los resultados de aprendizaje del currículo y las competencias demandadas por las empresas.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador instruccional especializado en formación profesional y aprendizaje basado en competencias. Tu objetivo es crear unidades didácticas para la FP dual que combinen la formación en el centro con el aprendizaje en la empresa, usando IA para garantizar la alineación curricular y la relevancia laboral de los contenidos.

Contexto del diseño:
Estás desarrollando el módulo de "Sistemas de Gestión Empresarial" para el ciclo formativo de grado superior en Administración y Finanzas. El módulo tiene 96 horas lectivas, de las cuales 40 se realizan en empresa y 56 en el centro. El currículo oficial define los resultados de aprendizaje, y tu reto es diseñar actividades que los desarrollen de forma integrada entre ambos contextos.

Instrucción de diseño instruccional — trabaja estas fases:

1. Análisis curricular con IA
Parte de los resultados de aprendizaje oficiales del módulo y, con ayuda de la IA, tradúcelos a competencias concretas que el alumno debe demostrar al finalizar: qué sabe hacer (procedimental), qué sabe (conceptual), y qué actitud demuestra (actitudinal). Para cada competencia, identifica el nivel de taxonomía de Bloom correspondiente y el tipo de evidencia de aprendizaje que la demuestra. Genera con IA la matriz de alineación entre resultados de aprendizaje oficiales y competencias profesionales demandadas por las empresas del sector.

2. Secuenciación de contenidos centro-empresa
Diseña la secuencia didáctica del módulo de 96 horas distribuyendo las actividades entre el centro y la empresa: en el centro, la introducción conceptual y la práctica simulada; en la empresa, la aplicación real y la reflexión sobre la práctica. Para cada bloque temático, define: contenido teórico del centro (con recurso digital y actividad práctica), tarea en empresa alineada con ese contenido (describiendo qué hace el alumno, con qué herramientas y bajo qué supervisión), y actividad de síntesis que conecte lo aprendido en ambos contextos. Usa IA para generar la secuencia completa de las 96 horas.

3. Diseño de actividades de aprendizaje activo
Para los bloques de mayor complejidad, diseña actividades de aprendizaje activo que no sean simples lecturas o cuestionarios: estudio de casos reales de empresas del sector (con IA generando casos adaptados al nivel y al contexto local), proyectos en equipo que simulan situaciones reales de trabajo, gamificación de procedimientos administrativos complejos, y debates sobre dilemas éticos del ejercicio profesional (confidencialidad, gestión de errores, relaciones con proveedores). Para cada actividad, define el objetivo de aprendizaje, el desarrollo paso a paso, los materiales necesarios y la rúbrica de evaluación.

4. Recursos didácticos con IA generativa
Diseña el catálogo de recursos didácticos del módulo y describe cómo la IA colabora en su producción: explicaciones conceptuales en distintos formatos (texto, infografía, vídeo tutorizado), glosario de términos técnicos con ejemplos contextualizados, banco de preguntas de autoevaluación generado por IA con retroalimentación personalizada, y simulador de situaciones de trabajo (el alumno toma decisiones ante un caso y la IA simula las consecuencias). Para cada tipo de recurso, especifica el prompt de IA para su generación y el proceso de revisión por el docente.

5. Evaluación de competencias en el contexto dual
La evaluación en FP dual debe capturar el aprendizaje tanto del centro como de la empresa. Diseña el sistema de evaluación del módulo: portafolio del alumno con evidencias de su trabajo en la empresa (informes de actividades, capturas de pantalla de herramientas usadas, evaluación del tutor de empresa), rúbricas de evaluación de competencias con descriptores diferenciados por nivel (excelente, suficiente, insuficiente), prueba práctica final que simula una tarea real del perfil profesional, y coevaluación entre compañeros con guía estructurada de observación. Usa IA para generar las rúbricas a partir de los descriptores del currículo oficial.

6. Plan de coordinación tutor centro - tutor empresa
El éxito de la FP dual depende de la coordinación entre ambos tutores. Diseña el protocolo de coordinación: reunión de inicio de curso (plan formativo, distribución de contenidos, criterios de evaluación compartidos), reuniones de seguimiento mensuales (revisión del portafolio del alumno, ajuste del plan si es necesario), y evaluación final conjunta (informe del tutor de empresa, nota del tutor del centro y calificación final consensuada). Define los documentos de coordinación y cómo la IA puede generar automáticamente el borrador del informe de seguimiento del alumno a partir de los datos registrados en la plataforma.

Entrega el diseño instruccional completo en formato de programación didáctica que cumpla con los requisitos de la normativa de FP y sea directamente usable por el docente del centro.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar unidades didácticas para FP dual que alineen el aprendizaje del centro con las competencias reales de la empresa',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Captación de empresas para FP dual con IA',
                'description'       => 'Diseña la estrategia comercial para que un centro de FP capte y fidelice empresas colaboradoras en el modelo de formación dual, usando IA para personalizar la propuesta de valor y gestionar la relación.',
                'prompt_content'    => <<<'EOT'
Eres un responsable de relaciones empresariales de un centro de formación profesional. Tu objetivo es diseñar el proceso completo de captación y fidelización de empresas para los programas de FP dual, usando IA para personalizar la propuesta de valor según el perfil de cada empresa y gestionar eficientemente la relación con las empresas colaboradoras.

Contexto del reto:
El centro necesita incorporar 20 nuevas empresas colaboradoras de FP dual en los próximos 12 meses para cubrir las plazas de los ciclos en expansión. El centro ya tiene 45 empresas colaboradoras activas, pero la demanda de plazas supera la oferta. Los sectores prioritarios son tecnología, logística y gestión empresarial.

Instrucción comercial — trabaja estos bloques:

1. Propuesta de valor para la empresa colaboradora
Desarrolla el argumentario de captación para cada perfil de empresa: PYME local que necesita talento cualificado y no puede permitirse procesos de selección costosos, empresa tecnológica en crecimiento que quiere influir en la formación de futuros empleados, y multinacional con programa de responsabilidad social que quiere vincularse con el territorio. Para cada perfil, usa IA para personalizar la propuesta de valor: qué obtiene la empresa a cambio de su participación (talento formado a medida, reducción de costes de selección, bonificaciones en cuotas de la seguridad social, imagen de empleador comprometido con la formación).

2. Proceso de captación de empresas nuevas
Define el proceso comercial de incorporación de nuevas empresas: prospección (identificación de empresas del sector en el territorio con LinkedIn Sales Navigator y análisis de ofertas de empleo para detectar necesidades de talento), primer contacto (email personalizado o llamada con argumentario adaptado al sector de la empresa), reunión de presentación (presentación del modelo de FP dual, perfil de los alumnos, condiciones del acuerdo de colaboración), y proceso de firma del convenio y asignación del primer alumno. Usa IA para generar el email de primer contacto personalizado para cada empresa y para preparar la presentación adaptada al sector.

3. Gestión de la relación con empresas activas
Las empresas activas necesitan atención continua para renovar su compromiso año a año. Diseña el programa de fidelización: reuniones de seguimiento semestrales con el responsable de RR. HH. de la empresa, informe anual de rendimiento de los alumnos en la empresa (generado con IA a partir de las evaluaciones del tutor de empresa), invitación a la jornada de fin de curso donde los alumnos presentan sus proyectos, y acceso preferente a los mejores alumnos para ofertas de empleo antes de que finalicen el ciclo. Usa IA para personalizar cada comunicación con la empresa basándose en su historial de colaboración.

4. Coordinación de la formación en empresa
El tutor de empresa es la figura clave del éxito de la FP dual. Diseña el programa de apoyo al tutor de empresa: formación inicial de 4 horas en el modelo de FP dual y en el uso de la plataforma de seguimiento, guía didáctica para el tutor con el plan formativo del alumno en la empresa y las competencias a desarrollar, reuniones de coordinación mensuales con el tutor del centro, y reconocimiento formal del tutor de empresa (certificado de reconocimiento, acceso a eventos del centro). Usa IA para generar el plan formativo personalizado del alumno en cada empresa según sus actividades y herramientas reales.

5. Resolución de conflictos y situaciones difíciles
En la FP dual surgen situaciones que requieren gestión delicada: el alumno no rinde según las expectativas de la empresa, el tutor de empresa cambia y el nuevo no conoce el modelo, la empresa entra en proceso de reducción de plantilla y quiere cancelar el convenio, o el alumno denuncia un trato inadecuado. Para cada situación, define el protocolo de actuación: quién activa el protocolo, quién interviene, cuál es el proceso de mediación y cuál es el desenlace posible. Usa IA para documentar el protocolo y generar materiales de formación para los coordinadores del centro.

6. Métricas del programa de FP dual
Define el cuadro de mando del programa con indicadores clave: número de empresas colaboradoras activas y nuevas incorporaciones por año, tasa de renovación de empresas (porcentaje que continúa al año siguiente), tasa de contratación de alumnos por parte de la empresa de prácticas, satisfacción de las empresas colaboradoras medida con encuesta anual, y tasa de inserción laboral de los alumnos del programa dual vs. el programa presencial estándar. Usa IA para analizar los datos anuales y generar el informe de evaluación del programa con recomendaciones de mejora para el siguiente curso.

Entrega la estrategia como plan comercial y de gestión de relaciones empresariales con plantillas reutilizables para cada tipo de comunicación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Captar y fidelizar empresas colaboradoras para programas de FP dual con propuesta de valor personalizada por IA',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de programas de FP dual como producto educativo',
                'description'       => 'Aplica metodologías de product management al diseño y mejora continua de programas de formación profesional dual, usando IA para analizar datos de aprendizaje y priorizar mejoras del programa.',
                'prompt_content'    => <<<'EOT'
Eres un responsable de programas formativos con experiencia en la gestión de ciclos de FP como si fueran productos educativos. Tu objetivo es aplicar las metodologías del product management moderno a la mejora continua de los programas de formación profesional dual, usando datos e inteligencia artificial para tomar mejores decisiones.

Contexto del rol:
Coordinas 4 ciclos formativos de grado superior en un centro de FP con 280 alumnos matriculados y 65 empresas colaboradoras activas. Cada año debes evaluar el rendimiento de los programas, identificar mejoras y planificar el siguiente curso académico con la información más actualizada del mercado laboral.

Instrucción de gestión de programas — trabaja estos bloques:

1. Auditoría anual del programa con datos
Define el proceso de evaluación anual de cada ciclo formativo: indicadores de resultado (tasa de inserción laboral a 6 meses, porcentaje de alumnos contratados por la empresa de prácticas, nota media de las evaluaciones de empresa), indicadores de proceso (tasa de abandono por módulo, módulos con mayor porcentaje de suspensos, satisfacción de alumnos y tutores de empresa), y benchmarking externo (comparación con la tasa de inserción media del ciclo en España publicada por el Ministerio). Usa IA para sintetizar todos los datos en un informe de evaluación del programa con diagnóstico y áreas de mejora prioritarias.

2. Actualización curricular con inteligencia del mercado laboral
El currículo de la FP se actualiza cada varios años, pero el mercado laboral cambia más rápido. Define el proceso de actualización continua del programa dentro del margen de autonomía del centro: análisis de las ofertas de empleo del sector en el último año para detectar competencias y herramientas emergentes no cubiertas por el currículo, entrevistas con empresas colaboradoras sobre las brechas de competencias de los alumnos, y propuestas de contenidos complementarios en forma de proyectos, talleres o módulos optativos. Usa IA para analizar cientos de ofertas de empleo y extraer las competencias más demandadas que no están en el programa actual.

3. Roadmap de mejoras del programa
Con los hallazgos del análisis, construye el roadmap de mejoras del programa para los próximos dos cursos académicos: mejoras de contenido (qué añadir, qué actualizar, qué retirar), mejoras metodológicas (nuevas actividades de aprendizaje activo, herramientas digitales a incorporar), mejoras en la coordinación con empresas (nuevo protocolo de seguimiento, herramienta de comunicación tutor-empresa), y mejoras en la evaluación (nuevas rúbricas de competencias, proyecto final más conectado con la realidad laboral). Para cada mejora, estima el esfuerzo de implementación y el impacto esperado en los indicadores de resultado.

4. Experiencia del alumno como usuario del programa
Aplica el pensamiento de diseño centrado en el usuario al alumno de FP: mapa de la experiencia del alumno desde la matriculación hasta la inserción laboral, con los momentos de mayor frustración y de mayor satisfacción. Para los pain points más frecuentes (proceso burocrático de matrícula, transición al primer día en la empresa, gestión del estrés en el período de evaluaciones), genera con IA propuestas de mejora de experiencia que el equipo del centro puede implementar sin cambios normativos. Define el proceso de co-diseño con alumnos actuales y exalumnos.

5. Gestión de stakeholders del programa
El programa de FP dual tiene múltiples stakeholders con intereses parcialmente distintos: alumnos, familias, docentes del centro, tutores de empresa, administración educativa y mercado laboral. Define la estrategia de gestión de stakeholders: qué información necesita cada grupo y con qué frecuencia, cómo se recoge el feedback de cada uno, y cómo se integran perspectivas diversas en las decisiones de mejora del programa. Usa IA para personalizar los informes de resultados del programa para cada tipo de stakeholder, adaptando el nivel de detalle y el foco de cada comunicación.

6. Innovación del modelo formativo
Más allá de las mejoras incrementales, define el horizonte de innovación del programa a 3 años: incorporación de formación en competencias de IA aplicada al sector (para que los alumnos lleguen a la empresa ya con estas herramientas), modelo de microcredenciales que certifica competencias específicas antes de finalizar el ciclo, alianza con empresas tecnológicas para ofrecer certificaciones de sector (AWS, Google, Microsoft) integradas en el currículo, y modelo de FP dual intensiva de un año para adultos con experiencia laboral previa que quieren reconvertirse. Usa IA para evaluar la viabilidad y el impacto potencial de cada línea de innovación.

Entrega el plan de gestión del programa como documento estratégico del centro, con secciones diferenciadas por horizonte temporal (curso actual, próximo curso, visión a 3 años).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Gestionar y mejorar programas de FP dual como productos educativos con datos e IA como soporte de decisión',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de prácticas y FP dual para RRHH con IA',
                'description'       => 'Diseña el proceso de gestión de alumnos en prácticas y FP dual desde la perspectiva de RRHH: selección, onboarding, seguimiento y conversión a empleo, con apoyo de IA en cada fase.',
                'prompt_content'    => <<<'EOT'
Eres un business partner de RRHH con responsabilidad sobre el programa de talento joven de tu empresa, incluyendo la gestión de alumnos en prácticas y en programas de FP dual. Tu objetivo es diseñar un proceso de gestión de talento en formación que use IA para mejorar la calidad de la selección, el desarrollo durante la formación y la tasa de conversión a empleo.

Contexto del programa:
La empresa tiene acuerdos de FP dual con 3 centros formativos y acoge cada año a 18 alumnos de FP dual y 12 alumnos en prácticas. El 40% de los alumnos de FP dual se convierten en empleados. El objetivo es elevar esa tasa al 60% mejorando la selección inicial y el desarrollo durante el período de formación.

Instrucción de gestión de talento joven — trabaja estos bloques:

1. Proceso de selección de alumnos de FP dual
Define el proceso de selección de los alumnos que se incorporan al programa: revisión de expediente académico y carta de motivación, entrevista de competencias adaptada a jóvenes sin experiencia laboral (enfocada en actitudes, aprendizaje y motivación), prueba práctica adaptada al perfil del ciclo formativo (ejercicio de comunicación para ciclos de administración, test básico de lógica de programación para ciclos de informática), y entrevista con el tutor de empresa de la unidad donde el alumno se integrará. Usa IA para analizar las cartas de motivación, generar guiones de entrevista por perfil y ayudar al tutor de empresa a preparar la prueba práctica.

2. Onboarding del alumno en la empresa
El primer mes en la empresa es determinante para el éxito del alumno. Diseña el plan de onboarding: semana 0 de bienvenida con visita a todas las áreas y presentación del equipo, asignación de un buddy (empleado joven que acompaña al alumno durante el primer mes), plan de tareas de las primeras 4 semanas con nivel de supervisión decreciente, y check-in de ajuste a las 4 semanas donde alumno y tutor de empresa evalúan el encaje y ajustan el plan. Usa IA para generar el plan de onboarding personalizado según el perfil del alumno y el área de la empresa donde se integra.

3. Plan formativo en empresa alineado con el currículo
El tutor de empresa debe garantizar que las actividades en la empresa desarrollan las competencias del currículo oficial del ciclo. Diseña el proceso de planificación: reunión inicial con el tutor del centro para alinear el plan formativo de la empresa con las unidades de trabajo del módulo, diseño del plan de rotación por las distintas funciones del área para cubrir el máximo de competencias, y registro mensual de las actividades realizadas y las competencias trabajadas. Usa IA para generar el borrador del plan formativo en empresa a partir del currículo oficial del ciclo y del organigrama de funciones del área.

4. Evaluación continua y desarrollo del alumno
Define el proceso de evaluación y feedback durante el período de formación: evaluación mensual del tutor de empresa con rúbrica de competencias profesionales y actitudinales, autoevaluación del alumno sobre su propio aprendizaje y desarrollo, y conversación de feedback tutor-alumno mensual con objetivos concretos para el siguiente mes. Usa IA para generar el informe de seguimiento del alumno combinando la evaluación del tutor y la autoevaluación, y para identificar señales tempranas de desajuste que requieren intervención.

5. Proceso de decisión de conversión a empleo
Al final del período de formación, la empresa debe decidir si convierte al alumno en empleado. Define el proceso de decisión: evaluación final de desempeño con rúbrica de competencias profesionales completa, valoración del ajuste cultural y de actitudes por parte del equipo con el que ha trabajado, revisión del informe de evaluación del tutor del centro, y propuesta de oferta de empleo con el rol y las condiciones adecuadas al nivel formativo. Usa IA para generar el informe de evaluación final y para comparar el perfil del alumno con los criterios de selección del puesto al que optaría como empleado.

6. Impacto del programa en la marca empleadora
Un programa de FP dual bien gestionado es un potente imán de talento joven. Define cómo medir y comunicar el impacto del programa: porcentaje de alumnos convertidos a empleados, valoración del programa en Glassdoor y otras plataformas de empleabilidad juvenil, presencia del programa en ferias de empleo y jornadas de orientación laboral de los centros de FP colaboradores, y contenido de marca empleadora generado a partir de las historias de los alumnos del programa. Usa IA para generar el report anual del programa con los datos de impacto y para producir los testimonios en formato de caso de éxito para la web de empleo.

Entrega el programa de gestión de talento joven como proceso documentado que RRHH pueda implementar y evaluar anualmente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestionar el programa de FP dual desde RRHH para maximizar la tasa de conversión a empleo con apoyo de IA',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis del ROI de la formación profesional con IA',
                'description'       => 'Calcula y comunica el retorno de la inversión de los programas de formación profesional para empresas, centros educativos y administración pública usando modelos de análisis financiero asistidos por IA.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero especializado en la evaluación económica de programas formativos y en el retorno de la inversión en formación. Tu objetivo es diseñar un modelo de análisis del ROI de la formación profesional que sea útil para tres tipos de stakeholders: la empresa que acoge alumnos de FP dual, el centro educativo que gestiona el programa, y la administración pública que financia el sistema.

Contexto del análisis:
La FP dual tiene costes concretos (tiempo del tutor de empresa, adaptación del puesto de trabajo, coordinación con el centro) y beneficios concretos (reducción de costes de selección, productividad incremental del alumno, fidelización del talento formado). El reto es cuantificar ambos con rigor para justificar la inversión ante la dirección de la empresa y ante los responsables de política educativa.

Instrucción de análisis financiero — trabaja estos bloques:

1. Modelo de costes de la FP dual para la empresa
Define todos los costes que asume la empresa al participar en la FP dual: coste del tiempo del tutor de empresa (horas de supervisión x coste por hora, incluida la Seguridad Social), coste de adaptación del puesto de trabajo (equipamiento, accesos, herramientas), coste de coordinación con el centro (reuniones, elaboración de informes), y coste de la bolsa o retribución del alumno si el programa la contempla. Construye una plantilla de cálculo de costes totales del programa para una empresa tipo, con variables ajustables (número de alumnos, duración, perfil del tutor). Usa IA para generar automáticamente el desglose de costes a partir de los datos de la empresa.

2. Modelo de beneficios cuantificables para la empresa
Cuantifica los beneficios que la empresa obtiene de la FP dual: ahorro en costes de selección (coste medio de un proceso de selección para el perfil del ciclo multiplicado por el porcentaje de alumnos contratados), bonificaciones en cuotas de la Seguridad Social por contratar a alumnos de FP dual (según la normativa vigente), productividad incremental del alumno durante el período de formación (estimada como porcentaje de la productividad de un empleado de nuevo ingreso), y reducción del coste y tiempo de onboarding de los alumnos contratados (ya conocen la empresa, sus procesos y su cultura). Genera el modelo de beneficios con fórmulas y valores de referencia del mercado.

3. Cálculo del ROI y período de retorno
Con los modelos de costes y beneficios, calcula el ROI del programa de FP dual para la empresa en tres escenarios: conservador (solo se contrata al 30% de los alumnos), base (se contrata al 50%) y optimista (se contrata al 70%). Para cada escenario, calcula: ROI total del programa, período de retorno de la inversión (payback), y valor actual neto del programa a 3 años (incluyendo el ahorro de selección de los años 2 y 3 con alumnos de nuevas promociones). Usa IA para generar los tres escenarios automáticamente y presentar el análisis en formato ejecutivo para la dirección de la empresa.

4. Análisis del ROI para el centro educativo
El centro también realiza una inversión en el programa de FP dual y obtiene retornos. Analiza la economía del centro: costes adicionales del modelo dual (coordinación con empresas, formación de tutores, visitas de seguimiento, plataforma digital), ingresos adicionales o diferencial de financiación pública para plazas en FP dual vs. FP presencial, valor de reputación del programa (impacto en la captación de nuevos alumnos y en la percepción de calidad del centro), y tasa de inserción laboral como indicador de eficiencia educativa financiado por la administración. Usa IA para generar el análisis coste-beneficio del centro a partir de sus datos de gestión.

5. Evaluación del impacto social y económico para la administración
La administración invierte en la FP dual y necesita justificar el gasto público. Diseña el modelo de evaluación del impacto social: comparativa de tasa de desempleo juvenil entre egresados de FP dual vs. FP presencial vs. bachillerato, ahorro en prestaciones de desempleo por la mayor y más rápida inserción laboral de los egresados de FP dual, impacto en la productividad de las empresas del territorio (cálculo del valor añadido generado por los trabajadores formados en FP dual), y retorno fiscal de la inversión pública (cotizaciones e IRPF de los egresados empleados vs. coste de la subvención al programa). Usa IA para modelizar el impacto con datos del INE y del SEPE.

6. Presentación del ROI a distintas audiencias
El mismo análisis debe comunicarse de forma diferente según el interlocutor. Diseña tres versiones de la presentación del ROI: para el director financiero de la empresa (foco en números, payback y comparativa con coste de selección alternativo), para el equipo directivo del centro educativo (foco en posicionamiento del centro, captación de alumnos y relación con empresas del territorio), y para el responsable de política educativa de la administración (foco en impacto en el mercado laboral juvenil, reducción de desempleo y retorno de la inversión pública). Usa IA para adaptar el lenguaje, el nivel de detalle y los argumentos de cada versión al perfil de su audiencia.

Entrega el modelo de análisis de ROI como hoja de cálculo conceptual (con las fórmulas descritas) y el esquema de presentación ejecutiva para cada tipo de stakeholder.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Calcular y comunicar el ROI de la FP dual para empresas, centros educativos y administración pública con modelos de IA',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco normativo de la FP dual en España con IA',
                'description'       => 'Navega la compleja normativa de la formación profesional dual en España: Ley Orgánica de FP, convenios de empresa, certificados de profesionalidad y adaptaciones autonómicas, con apoyo de IA.',
                'prompt_content'    => <<<'EOT'
Eres un asesor legal especializado en el marco normativo de la formación profesional y el derecho educativo y laboral en España. Tu objetivo es elaborar una guía de cumplimiento normativo completa para los centros de FP y las empresas que participan en programas de formación profesional dual.

Contexto regulatorio:
La Ley Orgánica 3/2022 de Ordenación e Integración de la Formación Profesional reformó en profundidad el sistema de FP en España. La nueva norma refuerza el modelo dual y establece nuevas obligaciones para centros y empresas. Muchas comunidades autónomas están adaptando su normativa y existe cierta confusión sobre qué prevalece en cada caso.

Instrucción normativa — trabaja estos bloques:

1. Marco legal de la FP dual en España
Explica la jerarquía normativa del sistema de FP: Ley Orgánica 3/2022 como norma marco, Real Decreto de desarrollo del modelo dual, normativa autonómica de desarrollo (con ejemplos de Cataluña, Madrid y País Vasco), y convenios colectivos sectoriales que pueden afectar a las condiciones del alumno en empresa. Define claramente qué puede regular cada nivel normativo y qué prevalece en caso de conflicto. Usa IA para mantener actualizado un mapa de la normativa autonómica vigente y alertar cuando una comunidad modifica su regulación.

2. Requisitos del convenio de colaboración centro-empresa
El convenio entre el centro y la empresa es el documento legal central del programa dual. Define los elementos que debe incluir: identificación de las partes, ciclo formativo y módulos objeto de la formación en empresa, número de plazas y criterios de selección de alumnos, derechos y deberes del alumno, del tutor de empresa y del tutor del centro, retribución o bolsa del alumno (si procede), sistema de evaluación y condiciones de rescisión del convenio. Usa IA para generar un modelo de convenio adaptable a distintos ciclos formativos y sectores, con las cláusulas mínimas exigidas por la normativa vigente.

3. Estatus laboral del alumno de FP dual
Una de las dudas más frecuentes es si el alumno de FP dual tiene relación laboral con la empresa. Explica las distintas modalidades reconocidas por la Ley Orgánica 3/2022: régimen académico (sin contrato laboral, con convenio de colaboración y posible beca), régimen intensificado (con contrato de formación en alternancia), y las condiciones de cada modalidad en cuanto a retribución, cotización a la Seguridad Social, derechos laborales aplicables y protección ante accidente. Define en qué casos la empresa tiene la obligación de formalizar contrato y qué sucede si el alumno sufre un accidente durante la formación en empresa.

4. Certificados de profesionalidad y reconocimiento de competencias
Los certificados de profesionalidad son el sistema de acreditación de competencias fuera del sistema reglado. Explica: qué son los certificados de profesionalidad y cómo se relacionan con los ciclos formativos de FP, proceso de reconocimiento y acreditación de competencias adquiridas en el trabajo (procedimiento ACREDITA), posibilidades de modularización que permiten al alumno certificar parte de un ciclo sin completarlo, y situación de los certificados de profesionalidad tras la Ley Orgánica 3/2022 (nueva arquitectura de la FP y su relación con los estándares de competencia). Usa IA para generar la tabla de equivalencias entre certificados de profesionalidad y módulos de ciclos formativos para los sectores más demandados.

5. Obligaciones de protección de datos en la FP dual
El programa de FP dual implica el tratamiento de datos de menores de edad y de adultos en formación. Define las obligaciones RGPD: base legal para el tratamiento de datos del alumno (contrato o convenio de colaboración, obligación legal), datos que puede tratar el centro y datos que puede tratar la empresa, proceso de obtención del consentimiento para menores de edad, obligaciones de seguridad en el acceso del alumno a sistemas de información de la empresa (que puede contener datos de clientes o información confidencial), y cláusulas de confidencialidad que el alumno debe firmar. Usa IA para generar el clausulado de protección de datos adaptado a la normativa vigente.

6. Gestión de conflictos y responsabilidad legal
Define el protocolo de gestión de las situaciones conflictivas más frecuentes en la FP dual: el alumno causa un daño a un cliente o a los sistemas de la empresa (responsabilidad del centro vs. responsabilidad de la empresa), el alumno denuncia acoso o trato inadecuado por parte del tutor de empresa (obligaciones del centro y de la empresa), la empresa incumple las obligaciones del convenio (formación inadecuada, uso del alumno para tareas no formativas), y el alumno incumple sus obligaciones (absentismo, conducta inapropiada). Para cada situación, define el protocolo de actuación, las responsabilidades de cada parte y las consecuencias legales posibles.

Presenta la guía en formato de manual de cumplimiento normativo con referencias legales específicas (artículos de la Ley Orgánica 3/2022 y sus desarrollos reglamentarios) y con un checklist de obligaciones para centros y empresas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Navegar el marco normativo de la FP dual española para garantizar el cumplimiento legal de centros y empresas con apoyo de IA',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte y orientación a alumnos de FP con IA',
                'description'       => 'Diseña un sistema de atención y orientación a alumnos de formación profesional usando IA para responder dudas frecuentes, personalizar el acompañamiento y detectar alumnos en riesgo de abandono.',
                'prompt_content'    => <<<'EOT'
Eres un coordinador de orientación y apoyo al alumno en un centro de formación profesional. Tu objetivo es diseñar un sistema de atención integral al alumno que use inteligencia artificial para mejorar la respuesta a las dudas frecuentes, personalizar el acompañamiento durante el ciclo formativo y detectar situaciones de riesgo a tiempo.

Contexto del servicio:
El centro tiene 420 alumnos matriculados en 8 ciclos formativos. El equipo de orientación está formado por 2 orientadoras que deben atender consultas académicas, orientación profesional y acompañamiento en situaciones personales difíciles. La demanda de atención supera la capacidad del equipo, especialmente en los momentos de evaluación y al inicio de las prácticas en empresa.

Instrucción del sistema de orientación — trabaja estos módulos:

1. Asistente de orientación académica con IA
Diseña el chatbot de orientación académica que descarga al equipo de orientación de las consultas más frecuentes: proceso de matrícula y documentación necesaria, requisitos de acceso a cada ciclo formativo, convalidaciones entre ciclos y con estudios universitarios, proceso de acceso a la universidad desde la FP de grado superior, y opciones de continuación de estudios o especialización. El chatbot responde en lenguaje cercano y adaptado al alumno, y escala al orientador humano cuando la consulta requiere atención personalizada. Define el árbol de conversación y los límites de actuación del chatbot.

2. Orientación profesional personalizada con IA
La orientación hacia el mercado laboral es una de las funciones más valoradas por los alumnos. Diseña el proceso de orientación profesional asistida por IA: análisis del perfil del alumno (notas, habilidades destacadas, motivaciones declaradas, intereses personales), exploración de salidas profesionales del ciclo (con datos actualizados de oferta de empleo y tendencias del mercado laboral), y generación de un plan de desarrollo personal y profesional para los últimos seis meses del ciclo. Usa IA para personalizar el informe de orientación de cada alumno y para actualizar las salidas profesionales con datos del mercado laboral en tiempo real.

3. Sistema de detección de alumnos en riesgo de abandono
El abandono escolar en FP es un problema significativo, especialmente en el primer trimestre. Diseña el sistema de alerta temprana: señales de riesgo académico (más del 20% de faltas sin justificar, más de 3 módulos con nota insuficiente en el primer trimestre, no presentación a exámenes), señales de riesgo socioeconómico (solicitudes de ayuda de material o transporte, referencias a dificultades económicas en las tutorías), y señales de riesgo emocional (cambios bruscos de comportamiento, aislamiento del grupo, referencias a situaciones familiares difíciles). Usa IA para combinar estas señales en un score de riesgo semanal y generar automáticamente un aviso al tutor del grupo cuando el umbral se supera.

4. Gestión del período de prácticas y FP dual
La transición a la empresa es el momento de mayor ansiedad para muchos alumnos. Diseña el acompañamiento durante las prácticas: reunión de preparación antes de empezar (gestión de expectativas, protocolo de actuación ante problemas), check-in semanal por mensaje de texto o plataforma durante las primeras cuatro semanas, canal de comunicación directa con el orientador para situaciones urgentes (mal trato, acoso, tareas inapropiadas), y reunión de cierre al terminar las prácticas para reflexionar sobre el aprendizaje y orientar hacia el empleo. Usa IA para generar el guion personalizado de la reunión de preparación según el sector y la empresa de cada alumno.

5. Gestión de situaciones de vulnerabilidad
El equipo de orientación atiende situaciones de vulnerabilidad que requieren protocolos claros: alumno que comunica una situación de violencia de género o acoso escolar, alumno con necesidades educativas especiales que requiere adaptación curricular, alumno en situación de desamparo o con dificultades económicas graves, y alumno que comunica problemas de salud mental que afectan a su rendimiento. Para cada situación, define el protocolo de actuación: escucha activa, derivación a servicios externos, comunicación con la familia (si procede), y seguimiento. Usa IA para preparar al orientador con recursos y protocolos actualizados antes de cada tipo de atención especializada.

6. Medición de la satisfacción y el impacto del servicio de orientación
Define el sistema de evaluación del servicio de orientación: encuesta de satisfacción de alumnos al final de cada trimestre (con análisis de sentimiento de las respuestas abiertas con IA), tasa de abandono antes y después de implementar el sistema de alerta temprana, porcentaje de alumnos que reciben orientación profesional personalizada y su valoración del impacto en su inserción laboral, y tiempo medio de resolución de consultas con el chatbot vs. con atención humana. Usa IA para generar el informe anual del servicio de orientación con los datos de impacto y las áreas de mejora para el siguiente curso.

Entrega el diseño del servicio de orientación como protocolo operativo que el equipo de orientación pueda implementar y adaptar a las características de cada centro.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar un servicio de orientación y soporte al alumno de FP con IA para prevenir el abandono y mejorar la inserción laboral',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Formador freelance de FP y formación continua con IA',
                'description'       => 'Construye tu práctica como formador independiente para centros de FP, empresas y plataformas de e-learning, usando IA para diseñar materiales de calidad, escalar tu oferta y diferenciarte en el mercado.',
                'prompt_content'    => <<<'EOT'
Eres un formador profesional independiente con experiencia en formación para el empleo, formación continua en empresas y docencia en ciclos de formación profesional. Tu objetivo es diseñar un modelo de negocio como formador freelance que use la inteligencia artificial como herramienta de diferenciación y escalado.

Contexto profesional:
Tienes más de 10 años de experiencia en tu ámbito de especialización (administración de empresas, tecnología o una rama técnica concreta) y llevas 3 años impartiendo formación. Hasta ahora trabajas principalmente por horas en centros de FP y en acciones formativas de empresas, pero quieres construir un modelo más sostenible con mayor control sobre tu agenda y mayor margen por proyecto.

Instrucción de modelo de negocio — trabaja estos bloques:

1. Posicionamiento del formador freelance con IA
Define tu propuesta de valor diferencial como formador independiente: tu especialización de nicho dentro de la formación profesional (por ejemplo, formación en transformación digital para PYMES, o formación en gestión financiera para equipos no financieros), tu metodología propia de formación (basada en aprendizaje activo, proyectos reales, casos del sector), y cómo la IA amplía tu capacidad sin que el alumno note que es IA lo que está detrás (materiales más elaborados, ejercicios más variados, seguimiento más personalizado). Usa IA para generar tres propuestas de posicionamiento y selecciona la más auténtica y sostenible para tu perfil.

2. Diseño de un curso propio como producto escalable
El mayor limitante del formador freelance es que vende horas. Diseña un curso propio que puedas vender como producto: selecciona el tema donde tu combinación de conocimiento y experiencia es única, define el formato (online asíncrono, cohort live, híbrido), el público objetivo (empresa, profesionales individuales, centros de FP que lo compran como recurso), y el precio (acceso individual, licencia de empresa, integración en plataforma de e-learning). Usa IA para generar el índice completo del curso, los objetivos de aprendizaje por módulo y el plan de producción de contenidos.

3. Producción de materiales con IA
La producción de materiales de alta calidad es lo que diferencia a un formador de un conferenciante. Diseña tu flujo de producción de materiales con IA: presentaciones con estructura narrativa generada por IA y diseño visual consistente, casos prácticos y ejercicios generados por IA a partir de situaciones reales del sector, guiones de vídeo tutorial escritos con IA y revisados por ti, y evaluaciones y cuestionarios con banco de preguntas generado por IA con diferentes niveles de dificultad. Para cada tipo de material, especifica el workflow de producción con IA (qué hace la IA, qué haces tú, qué revisa el cliente).

4. Captación de clientes corporativos y centros de FP
Define tu estrategia de captación de nuevos clientes: centrales de formación de grandes empresas (solicitud de inclusión en el panel de proveedores), responsables de formación en PYMES del sector donde te especializas (LinkedIn outreach con propuesta de valor específica), coordinadores de ciclos de FP en centros educativos (propuesta de colaboración para módulos de tu especialización), y plataformas de e-learning que necesitan contenido de calidad (Udemy Business, LinkedIn Learning, plataformas corporativas). Usa IA para personalizar el mensaje de presentación para cada tipo de cliente y para generar el dossier de formador con tus credenciales y casos de éxito.

5. Gestión de proyectos de formación como freelance
Define tu proceso de trabajo para cada proyecto de formación: propuesta comercial con definición clara del alcance (número de horas, formato, materiales incluidos, precio), contrato con cláusulas de propiedad intelectual de los materiales (¿el cliente puede reutilizarlos sin ti?), gestión de la logística del proyecto (sala, tecnología, catering en presencial; plataforma y accesos en online), proceso de evaluación de la formación (encuesta de satisfacción, medición del aprendizaje, seguimiento de la transferencia al puesto de trabajo), y facturación y condiciones de pago adaptadas a la realidad de centros educativos y empresas. Usa IA para generar las plantillas de propuesta, contrato y encuesta de satisfacción.

6. Escalado de ingresos sin trabajar más horas
Define el modelo de crecimiento de tu práctica que no depende de vender más horas: venta de acceso a tu curso online a múltiples clientes simultáneamente, creación de contenido complementario (guías descargables, recursos de consulta) que generan ingresos pasivos, programa de mentoría para formadores que quieren aprender tu metodología, y acuerdos de distribución con plataformas de e-learning que venden tu curso en su catálogo. Modela con IA los distintos escenarios de ingresos y elige el mix que te permite superar los 80.000 € anuales sin sacrificar la calidad de tu formación ni tu vida personal.

Entrega el modelo de negocio como plan de práctica freelance con hoja de ruta de 12 meses hacia el objetivo de ingresos y posicionamiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir y escalar una práctica de formador freelance en FP y formación continua usando IA como ventaja competitiva',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
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
