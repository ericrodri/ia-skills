<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills642Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de programas de mentoría y tutorización educativa con IA',
                'description'       => 'Diseña campañas de marketing para promover servicios de tutoría personalizada, mentoría académica y coaching educativo, atrayendo a familias y alumnos que buscan acompañamiento individualizado.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en marketing educativo especializado en la promoción de servicios de tutorización personalizada, mentoría académica y coaching educativo. Tienes experiencia en llegar a familias que buscan apoyo individualizado para sus hijos, a estudiantes universitarios que necesitan orientación de carrera y a empresas que invierten en la formación de sus equipos mediante programas de mentoring.

Objetivo principal: Necesito diseñar una estrategia de marketing completa para dar visibilidad y captar clientes para un servicio de tutorización, mentoría o coaching educativo, diferenciándome de la oferta masiva de academias y plataformas de clases particulares.

Contexto del servicio de mentoría o tutorización:
- Tipo de servicio: [TUTORÍA ACADÉMICA / MENTORÍA DE CARRERA / COACHING EDUCATIVO / SEGUIMIENTO PERSONALIZADO]
- Nivel educativo al que va dirigido: [PRIMARIA / SECUNDARIA / UNIVERSIDAD / PROFESIONAL]
- Modalidad: [PRESENCIAL / ONLINE / HÍBRIDA]
- Precio por sesión o suscripción mensual: [PRECIO]
- Principal diferenciador: [QUÉ LO HACE ÚNICO]
- Zona geográfica o alcance: [LOCAL / NACIONAL / INTERNACIONAL]

Tareas que necesito que desarrolles:

1. Análisis del público objetivo para servicios de mentoría educativa
Describe tres perfiles de cliente ideal para un servicio de mentoría o tutorización: familias con hijos en etapa crítica (selectividad, paso a la universidad, año difícil académicamente), jóvenes adultos en transición (recién graduados, cambio de carrera, preparación de oposiciones o máster) y profesionales que buscan mentoring para avanzar en su carrera. Para cada perfil, indica sus motivaciones de compra, sus miedos y sus objeciones más frecuentes, los canales digitales donde les encontramos y las palabras clave que usan en sus búsquedas.

2. Propuesta de valor y mensajes clave para servicios de acompañamiento
Define el posicionamiento de marca del servicio de mentoría: cómo diferenciarse de las clases particulares convencionales y de las plataformas masivas de tutoría online. Proporciona cinco mensajes clave que comuniquen el valor del acompañamiento personalizado, el seguimiento continuo y el impacto transformador en la vida del alumno. Incluye también cómo usar testimonios y casos de éxito de forma ética y persuasiva.

3. Plan de contenidos para redes sociales centrado en la mentoría
Diseña un calendario editorial de cuatro semanas para Instagram, LinkedIn y TikTok. Para cada publicación indica: plataforma, tipo de contenido (vídeo corto, carrusel, historia, caso de éxito, consejo práctico), tema (cómo elegir un mentor, beneficios del acompañamiento personalizado, señales de que tu hijo necesita apoyo académico, cómo preparar la selectividad con un tutor, qué es el coaching educativo), copy sugerido con llamada a la acción y frecuencia de publicación recomendada.

4. Email de captación para padres y madres de alumnos con dificultades
Redacta una secuencia de tres emails para captar a familias cuyos hijos están atravesando dificultades académicas: email 1 de concienciación (identificar el problema y su impacto a largo plazo), email 2 de consideración (cómo el acompañamiento personalizado es diferente a las soluciones convencionales) y email 3 de conversión (oferta de sesión de diagnóstico gratuita con llamada a la acción clara). Cada email no debe superar las 300 palabras y debe tener un asunto que genere apertura.

5. Estrategia de posicionamiento local y SEO para tutores y mentores
Define la estrategia de visibilidad online para un servicio de mentoría o tutoría de ámbito local o nacional: cómo optimizar el perfil de Google Business para servicios de tutoría, las 15 palabras clave más relevantes para posicionar en búsqueda orgánica (con su intención de búsqueda), cómo aparecer en portales de clases particulares y mentoría online y cómo usar los testimonios y las valoraciones de clientes anteriores para mejorar el posicionamiento y la tasa de conversión.

6. Métricas de éxito para el marketing de servicios de mentoría
Define seis indicadores de éxito de la estrategia de marketing: tasa de conversión de consulta gratuita a cliente de pago, coste de adquisición de un nuevo alumno, tasa de retención mensual de alumnos (fundamental en servicios de suscripción), número de referidos generados por clientes actuales, NPS de familias y alumnos y lifetime value (LTV) medio por alumno según el nivel educativo.

Formato de respuesta: Usa encabezados claros para cada sección. Para los emails, incluye el asunto, el preheader y el cuerpo del email completo. Al final, añade recomendaciones sobre cómo documentar y comunicar el progreso del alumno a la familia como herramienta de fidelización y de marketing de boca a oreja.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar campañas de marketing para servicios de tutoría personalizada, mentoría y coaching educativo',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Sistema de seguimiento personalizado del alumno con IA para tutores',
                'description'       => 'Diseña la arquitectura técnica de una plataforma de seguimiento individualizado del progreso del alumno, con alertas de detección temprana de abandono y herramientas de comunicación para tutores y mentores educativos.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de análisis del aprendizaje (Learning Analytics) y plataformas de gestión de la relación con el alumno (Student Relationship Management), con experiencia en el diseño de herramientas de seguimiento personalizado del progreso académico, detección temprana del riesgo de abandono escolar y apoyo a tutores y mentores educativos.

Objetivo principal: Necesito definir la arquitectura técnica y los requisitos funcionales de una plataforma que permita a tutores, orientadores y mentores educativos hacer un seguimiento individualizado de cada alumno, detectar señales de alerta tempranas de abandono o desenganche académico y coordinar acciones de intervención de forma eficiente.

Contexto del proyecto:
- Usuarios principales: [TUTORES, ORIENTADORES, MENTORES, COORDINADORES ACADÉMICOS]
- Nivel educativo: [SECUNDARIA / UNIVERSIDAD / FORMACIÓN PROFESIONAL]
- Número de alumnos y tutores esperados: [NÚMERO]
- Integraciones con sistemas existentes: [LMS, PLATAFORMA ACADÉMICA, ERP DE CENTRO]
- Presupuesto de desarrollo: [PRESUPUESTO]
- Plazo para el primer prototipo: [MESES]

Tareas que necesito que desarrolles:

1. Requisitos funcionales para el sistema de seguimiento del alumno
Lista y prioriza los requisitos funcionales de la plataforma por perfil de usuario: tutor o mentor (registro de sesiones de tutoría, seguimiento de objetivos del alumno, alertas de rendimiento, comunicación con el alumno y la familia), coordinador académico (visión agregada de todos los alumnos, identificación de grupos de riesgo, asignación de recursos de apoyo), orientador (informes psicopedagógicos vinculados al perfil del alumno, coordinación con servicios externos) y alumno (acceso a su propio plan de mejora, registro de compromisos, visualización de su progreso). Indica qué funciones pueden automatizarse parcialmente con IA.

2. Modelo de datos para el perfil longitudinal del alumno
Define el modelo de datos para representar el perfil de seguimiento de un alumno a lo largo del tiempo: datos académicos (calificaciones por asignatura y evaluación, asistencia, comportamiento), datos de participación e implicación (uso de la plataforma, entregas a tiempo, participación en actividades), datos de bienestar y contexto (situación socioeconómica de la familia, cambios vitales relevantes, indicadores de salud mental si los hay y el alumno consiente), historial de intervenciones de tutoría y sus resultados y factores protectores y de riesgo identificados. Incluye consideraciones sobre privacidad y protección de datos de menores según el RGPD.

3. Motor de detección temprana de abandono con aprendizaje automático
Describe el diseño técnico del módulo de detección de riesgo de abandono: qué variables de entrada usar para el modelo predictivo (señales de desenganche académico: caída de calificaciones, aumento de ausencias, reducción de participación, cambios en el comportamiento online), qué tipo de modelo de aprendizaje automático sería más adecuado para este problema (clasificador de riesgo, modelo de supervivencia, sistema de puntuación de riesgo), cómo presentar las alertas al tutor de forma que sean accionables y no generen alarmas falsas, y cómo medir la precisión y el recall del sistema en el contexto educativo para calibrarlo correctamente.

4. Módulo de gestión de sesiones de tutoría y mentoría
Define el flujo de trabajo del módulo de gestión de sesiones de tutoría: cómo registrar una sesión (fecha, duración, alumno, objetivos trabajados, compromisos del alumno y del tutor, próxima cita), cómo generar automáticamente un resumen de la sesión con ayuda de IA a partir de notas del tutor, cómo vincular los compromisos de la sesión al seguimiento posterior del progreso del alumno, cómo notificar al alumno y a la familia del resumen de la sesión si hay consentimiento y cómo calcular métricas de eficacia del tutor (número de sesiones, tasa de cumplimiento de compromisos, evolución del alumno antes y después de las sesiones).

5. Panel de control para la detección de abandono a nivel de centro o cohorte
Diseña el panel de control para coordinadores y orientadores que necesitan una visión agregada del riesgo de abandono: distribución de alumnos por nivel de riesgo (bajo, medio, alto, crítico), evolución temporal del riesgo medio de la cohorte, identificación de los alumnos con mayor deterioro reciente, filtros por curso, grupo, tutor asignado y tipo de riesgo predominante y flujo de trabajo para asignar recursos de intervención (horas adicionales de tutoría, derivación al orientador, contacto con la familia). Incluye qué visualizaciones de datos son más efectivas para comunicar el riesgo de abandono a perfiles no técnicos.

6. Integración con sistemas externos y plan de implementación
Define la estrategia de integración de la plataforma con los sistemas existentes en el centro: cómo ingerir datos académicos del sistema de gestión del centro (SGA) de forma automática y segura, cómo conectar con plataformas LMS (Moodle, Google Classroom, Canvas) para obtener datos de participación digital, cómo exportar informes de seguimiento en formatos estándar (PDF, Excel) para la administración del centro y cómo planificar el piloto con un grupo de tutores antes de la implantación completa, incluyendo los criterios de éxito del piloto.

Formato de respuesta: Usa secciones bien delimitadas. Para el modelo de datos, usa un esquema de entidades con sus atributos clave. Para el motor de detección de riesgo, describe el pipeline técnico paso a paso. Incluye referencias a frameworks de Learning Analytics y al modelo de Tinto de abandono escolar como marco teórico de referencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar plataformas técnicas de seguimiento personalizado del alumno con detección temprana de abandono escolar',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de materiales visuales para programas de mentoría educativa',
                'description'       => 'Crea materiales visuales, guías y herramientas de seguimiento para programas de mentoría y tutorización: plantillas de seguimiento del alumno, infografías de progreso y recursos de coaching académico.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador instruccional y diseñador gráfico especializado en la creación de materiales visuales para programas de mentoría educativa, coaching académico y tutorización personalizada. Tienes experiencia en el diseño de herramientas de seguimiento del alumno, kits de recursos para mentores y materiales de comunicación del progreso académico a familias y coordinadores.

Objetivo principal: Necesito crear un sistema completo de materiales visuales para un programa de mentoría o tutorización educativa que facilite el trabajo del mentor o tutor, ayude al alumno a visualizar su propio progreso y comunique de forma clara los resultados a las familias y a la institución.

Contexto del programa de mentoría:
- Nivel educativo: [SECUNDARIA / BACHILLERATO / UNIVERSIDAD / FORMACIÓN PROFESIONAL]
- Modalidad del programa: [PRESENCIAL / ONLINE / HÍBRIDA]
- Duración del programa: [TRIMESTRAL / ANUAL]
- Número de alumnos por mentor: [NÚMERO]
- Herramientas de diseño disponibles: [CANVA / FIGMA / ADOBE / GOOGLE SLIDES]

Tareas que necesito que desarrolles:

1. Sistema de identidad visual para el programa de mentoría
Diseña las directrices de identidad visual del programa de mentoría: paleta de colores que transmita confianza, crecimiento y cercanía (proporciona los valores hexadecimales recomendados), tipografía principal y secundaria (fuentes libres de licencia para uso educativo), iconografía coherente para representar conceptos clave del programa (sesión de tutoría, objetivo, logro, esfuerzo, progreso, reto) y sistema de señalización visual para los distintos momentos del programa (diagnóstico inicial, sesión de seguimiento, evaluación de avance, celebración de logros).

2. Plantilla de ficha de seguimiento individual del alumno
Describe en detalle la estructura y el diseño de una ficha de seguimiento individual del alumno para uso del mentor o tutor. La ficha debe incluir: datos de identificación del alumno y del mentor, objetivos académicos y personales acordados al inicio del programa (con espacio para actualizarlos), registro de sesiones (fecha, duración, temas trabajados, compromisos del alumno), gráfico visual de evolución de calificaciones o de indicadores de progreso y sección de notas del mentor con observaciones cualitativas. La ficha debe ser funcional en papel y en formato digital editable.

3. Infografía de progreso para compartir con el alumno y la familia
Diseña la estructura de una infografía de progreso mensual o trimestral que el mentor pueda personalizar para cada alumno y compartir con la familia. La infografía debe comunicar visualmente: los objetivos iniciales del alumno, los logros alcanzados en el período, los indicadores de esfuerzo y actitud (más allá de las calificaciones), los retos que siguen pendientes y los próximos pasos acordados con el alumno. Usa un lenguaje motivador y orientado al crecimiento, no solo a las notas. Describe las secciones, los colores recomendados y los tipos de gráficos (barras de progreso, iconos de logro, citas del propio alumno).

4. Kit visual de recursos para las sesiones de mentoría
Diseña un kit de cuatro herramientas visuales que el mentor pueda usar durante las sesiones de tutoría: rueda del rendimiento académico (adaptación de la rueda de la vida al contexto educativo: calificaciones, organización, motivación, bienestar, relaciones en el aula, relación con la familia), plantilla de establecimiento de objetivos SMART para el alumno (formato visual atractivo para jóvenes), tarjetas de estrategias de estudio que el alumno puede elegir según su estilo de aprendizaje y mapa de fortalezas y áreas de mejora para hacer al inicio del programa. Para cada herramienta, describe el formato, las instrucciones de uso y cómo guardar los resultados para el seguimiento.

5. Dashboard visual de seguimiento para coordinadores del programa
Diseña la estructura de un panel de control visual para el coordinador del programa de mentoría, que resuma el estado de todos los alumnos de un vistazo: indicadores de actividad del programa (número de sesiones realizadas, porcentaje de compromisos cumplidos, tasa de asistencia a sesiones), semáforo de estado de cada alumno (en verde si va bien, en ámbar si hay señales de alerta, en rojo si necesita intervención urgente), distribución de alumnos por nivel de progreso y visualización de los logros del programa en el período (número de alumnos que han mejorado sus calificaciones, número de abandonos prevenidos). Especifica qué tipo de gráfico usar para cada dato y por qué.

6. Materiales de cierre y celebración de logros del programa
Diseña los materiales visuales para el cierre del programa de mentoría: diploma o certificado de participación (con los elementos visuales que lo hacen especial y memorable), infografía de impacto del programa (datos agregados de resultados de todos los alumnos para la memoria del programa o para captación de nuevos participantes), tarjeta de agradecimiento del mentor al alumno (con espacio para un mensaje personalizado) y presentación de resultados para la dirección del centro o para las familias (estructura de cinco diapositivas: contexto del programa, metodología, resultados cuantitativos, testimonios cualitativos y próximos pasos).

Formato de respuesta: Detalla cada herramienta con su estructura visual, dimensiones recomendadas, colores específicos y tipografías. Cuando describas gráficos, especifica el tipo de gráfico y la razón de esa elección. Añade al final una lista de recursos gratuitos para crear cada tipo de material (plantillas de Canva, iconos de Flaticon, fuentes de Google Fonts).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear materiales visuales y herramientas de seguimiento para programas de mentoría y tutorización educativa',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta de programas de mentoría educativa a instituciones y familias',
                'description'       => 'Desarrolla estrategias de venta para programas de mentoría académica, coaching educativo y tutorización personalizada, tanto en el canal B2B (centros, universidades, empresas) como en el canal B2C (familias y estudiantes).',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de ventas especializado en servicios educativos de alto valor, con experiencia en la venta de programas de mentoría académica, coaching educativo y tutorización personalizada a dos tipos de cliente: institucional (centros educativos, universidades, empresas que forman a sus empleados) y directo (familias de alumnos con dificultades o con altas expectativas académicas y estudiantes universitarios o de posgrado).

Objetivo principal: Necesito desarrollar una estrategia de ventas completa para un programa de mentoría o coaching educativo, que cubra tanto el canal B2B institucional como el canal B2C directo a familias y estudiantes, con un proceso claro desde la prospección hasta la renovación.

Contexto del programa de mentoría o coaching:
- Nombre y descripción del programa: [NOMBRE Y QUÉ INCLUYE]
- Precio del programa (por sesión, mensual o por programa completo): [PRECIO]
- Duración: [NÚMERO DE SESIONES O MESES]
- Canales de venta actuales: [ONLINE, PRESENCIAL, REFERIDOS]
- Principal diferenciador del programa: [QUÉ LO HACE ÚNICO]

Tareas que necesito que desarrolles:

1. Perfil del comprador en el canal B2B institucional
Describe los decisores clave en una institución educativa que compra un programa de mentoría para su alumnado: director o rectora académica (impacto en resultados y en reputación institucional), coordinador o coordinadora de orientación (metodología y evidencia de eficacia), responsable de admisiones o de retención del alumnado (reducción del abandono como argumento de valor) y responsable de administración (presupuesto y proceso de compra). Para cada decisor, indica sus motivaciones, sus objeciones más frecuentes y el argumento de valor que más resuena.

2. Perfil del comprador en el canal B2C directo a familias y estudiantes
Describe los perfiles de familias y estudiantes que compran servicios de mentoría o coaching educativo directamente: familia con hijo en año crítico (selectividad, paso a la universidad, curso de recuperación), estudiante universitario con dificultades de adaptación o con ambición de alto rendimiento, y adulto en reconversión profesional que busca orientación para formarse de nuevo. Para cada perfil, indica el momento de compra más probable, los desencadenantes emocionales de la decisión, las objeciones más frecuentes y el canal de captación más eficaz.

3. Guion de llamada de prospección y reunión de diagnóstico
Redacta un guion de llamada de prospección de tres minutos para contactar con el coordinador de orientación de un centro educativo o universidad. Incluye apertura, pregunta de diagnóstico, propuesta de valor en una frase y cierre para concertar reunión. A continuación, redacta el guion de la reunión de diagnóstico de 45 minutos con el mismo perfil: apertura que establezca credibilidad, ocho preguntas de diagnóstico sobre la situación actual de tutorización y apoyo al alumno en el centro, presentación del programa adaptada a lo escuchado y siguiente paso concreto.

4. Gestión de las objeciones más frecuentes en la venta de mentoría educativa
Para cada objeción, proporciona la técnica de respuesta y un ejemplo de diálogo: "Ya tenemos tutores internos en el centro" (diferenciación del programa externo especializado), "El precio es demasiado alto para las familias de nuestros alumnos" (opciones de financiación, becas, coste por sesión comparado con academias convencionales), "No tenemos evidencia de que la mentoría funcione" (datos de impacto de programas similares, período de prueba de bajo riesgo), "Los alumnos no querrán asistir a sesiones adicionales fuera del horario escolar" (cómo diseñar el programa para maximizar la asistencia voluntaria) y "Necesitamos aprobación del claustro o del consejo escolar antes de comprometerse" (cómo acelerar el proceso de decisión interna).

5. Propuesta de valor del programa de mentoría y cálculo del ROI institucional
Explica cómo construir la propuesta de valor del programa de mentoría para una institución educativa: cómo cuantificar el impacto de la mentoría en la reducción del abandono escolar (coste de un alumno que abandona vs. coste del programa de retención), cómo mostrar el impacto en los resultados académicos de los alumnos participantes con datos de programas similares, cómo presentar el beneficio reputacional para el centro (mejora en las tasas de titulación, en los rankings y en la satisfacción de las familias) y cómo construir una propuesta económica escalable (precio por cohorte, por alumno, por nivel de intensidad del acompañamiento).

6. Estrategia de fidelización y renovación de programas de mentoría
Define el proceso de customer success para programas de mentoría educativa: cómo demostrar el valor durante el programa (informes de progreso periódicos, reuniones de seguimiento con el coordinador institucional), cómo gestionar el momento de la renovación (cuándo iniciar la conversación, qué datos presentar, cómo proponer una ampliación del programa), cómo convertir a los alumnos beneficiados en embajadores del programa para captar nuevos participantes y cómo construir una relación a largo plazo con la institución que va más allá del programa anual.

Formato de respuesta: Usa tablas para los perfiles de compradores y la gestión de objeciones. Usa formato de guion con turnos de diálogo para las llamadas y reuniones. Incluye ejemplos concretos de datos de impacto que puedas usar en la propuesta de valor.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Desarrollar estrategias de venta para programas de mentoría académica y coaching educativo en canales B2B y B2C',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto EdTech de mentoría y detección del abandono escolar',
                'description'       => 'Define la estrategia de producto y el roadmap de una plataforma EdTech para la tutorización personalizada, el seguimiento del alumno y la detección temprana del abandono escolar.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager senior especializado en tecnología educativa orientada a la retención y el éxito del alumno, con experiencia en plataformas de seguimiento del aprendizaje, sistemas de alerta temprana de abandono escolar y herramientas de gestión de la mentoría y la tutorización académica.

Objetivo principal: Necesito desarrollar la estrategia de producto y el roadmap de una plataforma EdTech que ayude a tutores, mentores y orientadores a hacer un seguimiento personalizado de cada alumno, detectar señales de abandono antes de que se produzca y coordinar intervenciones de apoyo de forma eficiente.

Contexto del producto:
- Estado actual: [IDEA / MVP / PRODUCTO EN PRODUCCIÓN CON X USUARIOS]
- Usuarios principales: [TUTORES / ORIENTADORES / COORDINADORES / ALUMNOS / FAMILIAS]
- Nivel educativo objetivo: [SECUNDARIA / BACHILLERATO / FP / UNIVERSIDAD]
- Métricas actuales si las hay: [USUARIOS, NPS, RETENCIÓN DE CENTROS]
- Restricciones del equipo: [TAMAÑO, PERFILES, PRESUPUESTO]

Tareas que necesito que desarrolles:

1. Propuesta de valor y diferenciación para un producto de mentoría y retención
Define la propuesta de valor del producto diferenciando tres niveles: propuesta funcional (qué hace el producto de forma concreta, qué datos recoge y qué alertas genera), propuesta de resultado (qué cambia en la vida del alumno en riesgo y en el trabajo del tutor gracias al producto) y propuesta de misión (por qué existe este producto en el mundo y qué problema social resuelve). Identifica los tres diferenciadores competitivos más poderosos frente a los sistemas de gestión académica genéricos y frente a las soluciones manuales que usan hoy los orientadores.

2. Investigación de usuarios: tutores, orientadores y alumnos en riesgo
Diseña un protocolo de investigación de usuarios para los tres perfiles principales: tutor o mentor (qué información necesita para tomar decisiones de intervención, cómo gestiona hoy el seguimiento de sus alumnos, qué le impide actuar antes cuando ve señales de alarma), orientador o coordinador de inclusión (cómo priorizan su tiempo entre tantos alumnos, cómo colaboran con los tutores, qué métricas necesitan para reportar a la dirección) y alumno en riesgo de abandono (qué factores precipitan el abandono desde su perspectiva, qué tipo de apoyo le resulta más útil, cómo quiere recibir el seguimiento sin sentirse vigilado). Incluye los métodos de investigación recomendados para cada perfil.

3. Roadmap de producto para la plataforma de mentoría y retención
Propón un roadmap de cuatro trimestres con tres horizontes de certeza: comprometido (Q1), probable (Q2) y exploratorio (Q3-Q4). Para cada trimestre, define las tres o cuatro iniciativas principales con su objetivo de retención o de eficacia del tutor, las métricas de éxito, las dependencias técnicas y el equipo implicado. Incluye al menos una iniciativa por trimestre orientada a la mejora del motor de detección de riesgo y una orientada a la mejora de la experiencia del tutor en el registro y seguimiento de sesiones.

4. Definición de funcionalidades clave con criterios de aceptación
Para las tres funcionalidades más prioritarias del roadmap, escribe la ficha completa: título, descripción en lenguaje del usuario, problema del tutor u orientador que resuelve, criterios de aceptación funcionales y no funcionales, métricas de adopción y de eficacia (no solo de uso), riesgos y mitigaciones y boceto en texto del flujo de usuario de cinco pasos. Asegúrate de que los criterios de aceptación incluyen consideraciones de privacidad de los datos del alumno (especialmente si es menor de edad).

5. Métricas de éxito del producto orientadas a la retención del alumno
Define el cuadro de mando del producto con indicadores que midan el impacto real en la retención del alumno: tasa de detección temprana (porcentaje de alumnos que abandonaron sin que el sistema los hubiera identificado como de riesgo), tiempo medio entre la primera alerta y la primera intervención del tutor, tasa de éxito de las intervenciones (alumnos que el sistema marcó como de riesgo y que finalmente no abandonaron), satisfacción del tutor con las alertas generadas (precisión percibida), tasa de adopción activa de tutores (usan el sistema al menos una vez por semana) y NPS de coordinadores académicos como compradores del producto.

6. Estrategia de go-to-market para instituciones educativas con riesgo de abandono
Define la estrategia de lanzamiento para los primeros centros o universidades piloto: cómo identificar instituciones con alta tasa de abandono y voluntad de innovar en retención, cómo diseñar el proceso de onboarding para tutores y orientadores (formación inicial, primeras semanas de uso acompañado, recursos de autoservicio), cómo construir evidencia de impacto durante el piloto que acelere la adopción por otras instituciones, cómo posicionar el producto en los eventos y comunidades de práctica de orientación escolar y universitaria y cómo estructurar el modelo de precios para que sea accesible a centros públicos con presupuesto limitado.

Formato de respuesta: Usa tablas para el roadmap y las fichas de funcionalidad. Emplea listas estructuradas para el protocolo de investigación. Usa lenguaje que pueda compartirse directamente con equipos de diseño, ingeniería y con los centros educativos socios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar la estrategia de producto de una plataforma EdTech de mentoría, seguimiento del alumno y detección del abandono',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Selección y formación de mentores y tutores educativos con IA',
                'description'       => 'Diseña el proceso de selección, formación y supervisión de mentores y tutores para programas de acompañamiento educativo personalizado en centros o plataformas EdTech.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora de recursos humanos y de talento especializado en la selección, formación y supervisión de mentores y tutores para programas de acompañamiento educativo personalizado. Tienes experiencia en el reclutamiento de perfiles de mentor académico, tutor de apoyo, orientador de carrera y coach educativo, tanto para centros educativos presenciales como para plataformas EdTech de tutorización online.

Objetivo principal: Necesito diseñar un sistema integral de gestión del talento de mentores y tutores para mi programa o plataforma de acompañamiento educativo, que garantice la calidad del servicio, la motivación y la retención de los mejores perfiles.

Contexto del programa o plataforma:
- Tipo de programa: [PRESENCIAL EN CENTRO / ONLINE / HÍBRIDO]
- Perfil de alumno atendido: [NIVEL EDUCATIVO Y TIPO DE NECESIDAD]
- Número de mentores o tutores necesarios: [NÚMERO]
- Modalidad de relación con el mentor: [EMPLEADO / AUTÓNOMO / VOLUNTARIO FORMADO]
- Principales retos actuales: [DIFICULTAD PARA ENCONTRAR PERFILES, CALIDAD INCONSISTENTE, ROTACIÓN, ETC.]

Tareas que necesito que desarrolles:

1. Perfil competencial del mentor o tutor educativo ideal
Define el mapa de competencias del mentor o tutor educativo del siglo XXI. Organiza las competencias en cuatro bloques: competencias pedagógicas y de acompañamiento (escucha activa, establecimiento de rapport con el alumno, técnicas de coaching educativo, capacidad de adaptar el acompañamiento al estilo y ritmo de cada alumno), competencias de seguimiento y análisis (capacidad de detectar señales de alerta en el alumno, registro sistemático del progreso, uso de herramientas digitales de seguimiento), competencias de comunicación con familias e instituciones (informes de progreso claros, reuniones de seguimiento con la familia, coordinación con el tutor del centro) y competencias de desarrollo personal (autogestión, resiliencia, formación continua, supervisión entre pares).

2. Proceso de selección de mentores y tutores educativos
Diseña un proceso de selección de cuatro fases para contratar o incorporar a un mentor o tutor educativo. Incluye: descripción del rol que atraiga a perfiles vocacionales y diferenciados (no solo las funciones, sino la misión del programa y el impacto esperado en el alumno), cuestionario de preselección con seis preguntas eliminatorias, entrevista de diagnóstico con diez preguntas conductuales específicas para el perfil mentor o tutor (cómo ha manejado un alumno que se resistía al acompañamiento, cómo ha detectado y comunicado una señal de alerta a una familia, cómo ha adaptado su estilo cuando el alumno no respondía como esperaba) y prueba práctica de role play de 20 minutos con un caso real anonimizado de alumno.

3. Plan de formación inicial para nuevos mentores y tutores
Diseña un plan de onboarding formativo de cuatro semanas para un nuevo mentor o tutor. El plan debe cubrir: semana 1 (metodología del programa de acompañamiento, herramientas de seguimiento y registro, ética y confidencialidad del acompañamiento educativo, primera sesión supervisada con un mentor senior), semana 2 (formación en técnicas de coaching educativo y establecimiento de objetivos con el alumno, práctica con casos simulados), semana 3 (primeras sesiones reales con supervisión cercana del coordinador, feedback inmediato después de cada sesión) y semana 4 (evaluación de la fase de onboarding, definición del plan de desarrollo individual del mentor para los primeros tres meses).

4. Sistema de supervisión y desarrollo profesional del mentor
Propón un sistema de supervisión y desarrollo profesional continuo para los mentores y tutores del programa: supervisión individual mensual con el coordinador del programa (estructura de la sesión de supervisión: revisión de casos, detección de dificultades del mentor, plan de mejora), grupos de supervisión entre pares quincenales para compartir casos y estrategias, formación continua trimestral en habilidades de acompañamiento y en las necesidades específicas de los alumnos atendidos, y un sistema de reconocimiento y progresión de carrera dentro del programa (de mentor junior a mentor senior a coordinador de mentores).

5. Gestión del bienestar y la motivación del mentor o tutor
Define un protocolo de bienestar específico para mentores y tutores educativos, que son perfiles con alta inversión emocional en su trabajo. El protocolo debe incluir: indicadores de alerta temprana de fatiga compasiva o de desgaste en el perfil del mentor (señales conductuales, descenso en la calidad del registro, aumento de cancelaciones de sesiones), programa de supervisión emocional con un profesional externo al que los mentores pueden acudir, iniciativas de reconocimiento del impacto del trabajo del mentor en la vida de los alumnos (historias de éxito compartidas en el equipo, reconocimiento público en la memoria del programa) y encuesta de bienestar del mentor cada dos meses con plan de acción derivado de los resultados.

6. Indicadores de gestión del talento para programas de mentoría
Establece el cuadro de mando de recursos humanos específico para un equipo de mentores y tutores con seis métricas clave: tasa de retención de mentores al cabo de un año, tiempo medio de cobertura de las vacantes de mentor cuando se producen, satisfacción de los mentores con el programa y con el soporte recibido (eNPS específico del equipo de mentores), tasa de alumnos por mentor que cumplen sus objetivos académicos (indicador de eficacia del mentor), calidad del registro de sesiones (porcentaje de sesiones con registro completo y dentro del plazo) y tasa de completación del plan de formación continua.

Formato de respuesta: Usa tablas para el mapa de competencias y el cuadro de mando. Usa formato de cronograma para el plan de onboarding. Incluye ejemplos de preguntas conductuales con las respuestas modelo esperadas según el método STAR. Añade al final recomendaciones sobre cómo construir una cultura de equipo motivadora para mentores y tutores que en muchos casos trabajan en remoto o de forma descentralizada.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Seleccionar, formar y supervisar mentores y tutores en programas de acompañamiento educativo personalizado',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas y ROI de programas de mentoría y retención del alumno',
                'description'       => 'Calcula el retorno de la inversión de programas de mentoría educativa y diseña modelos financieros para gestionar la sostenibilidad económica de servicios de tutorización y acompañamiento académico.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora financiero especializado en la gestión económica de programas educativos de acompañamiento, mentoría y tutorización, con experiencia en el análisis del retorno de la inversión en retención del alumno, en la presupuestación de servicios de tutorización a escala y en la evaluación financiera de plataformas EdTech de seguimiento personalizado.

Objetivo principal: Necesito construir un modelo financiero sólido para un programa de mentoría educativa o una plataforma de tutorización personalizada, que demuestre su viabilidad económica, calcule el retorno de la inversión para las instituciones que lo contratan y garantice la sostenibilidad del servicio a largo plazo.

Contexto financiero del programa o plataforma:
- Tipo de entidad: [EMPRESA EDTECH / PROGRAMA DE UN CENTRO EDUCATIVO / ORGANIZACIÓN SIN ÁNIMO DE LUCRO]
- Modelo de negocio: [B2B INSTITUCIONAL / B2C FAMILIAS / MIXTO]
- Precio actual del servicio: [POR SESIÓN / MENSUAL / ANUAL POR ALUMNO]
- Número de alumnos o clientes actuales: [NÚMERO]
- Principales partidas de coste: [MENTORES, TECNOLOGÍA, ADMINISTRACIÓN, MARKETING]

Tareas que necesito que desarrolles:

1. Estructura del modelo financiero para un servicio de mentoría educativa
Diseña la estructura completa del modelo financiero con las siguientes secciones: ingresos (por tipo de cliente: institucional y directo; por modalidad de programa: sesiones sueltas, paquetes y suscripciones; por nivel educativo), costes directos del servicio (retribución de mentores o tutores, costes tecnológicos de la plataforma, materiales de seguimiento), costes de estructura (dirección del programa, coordinación, soporte técnico, administración), costes de captación de clientes (marketing, ventas, onboarding) y margen de contribución y margen neto por tipo de cliente y por modalidad de servicio.

2. Cálculo del coste total por alumno acompañado
Explica cómo calcular el coste real por alumno acompañado, diferenciando por intensidad del programa: programa intensivo (una sesión semanal durante todo el curso), programa estándar (una sesión quincenal durante todo el curso) y programa puntual (sesiones de refuerzo en momentos críticos del año académico). Para cada modalidad, desglosa el coste directo de las horas del mentor, el coste de la tecnología de seguimiento, el coste de coordinación y supervisión y el coste de captación del alumno. Incluye el umbral de rentabilidad por modalidad.

3. Modelo de ROI para instituciones educativas que contratan el servicio
Construye un modelo de cálculo del retorno de la inversión para una institución educativa (universidad o centro de secundaria) que contrata un programa de mentoría o una plataforma de seguimiento del alumno para reducir el abandono. El modelo debe cuantificar: el coste del abandono de un alumno para la institución (ingresos perdidos de matrícula, coste reputacional estimado, coste de reposición del alumno), el coste del programa de mentoría por alumno en riesgo atendido, la tasa de retención esperada gracias al programa (basada en evidencia de programas similares), el ROI neto en el primer año y a tres años y el período de recuperación de la inversión.

4. Estrategia de precios para el mercado de mentoría y tutorización
Define una estrategia de precios completa para el servicio de mentoría educativa, diferenciando el canal B2B institucional del canal B2C directo: para el canal B2B, cómo estructurar el precio por alumno, por cohorte o por institución (con descuentos por volumen), cómo ajustar el precio según el nivel educativo (universitario vs. secundaria) y según la intensidad del programa; para el canal B2C, cómo posicionar el precio en el mercado de clases particulares y coaching educativo, cómo construir paquetes que reduzcan la fricción de la compra y cómo gestionar los descuentos sin erosionar el posicionamiento premium del servicio.

5. Control presupuestario y gestión de la variabilidad de costes
Define el proceso de control presupuestario específico para un servicio de mentoría, donde el principal coste variable es el tiempo del mentor o tutor. Incluye: cómo presupuestar las horas de mentoría en función del número de alumnos y de la tasa de cancelación histórica, cómo gestionar los picos de demanda en los períodos de exámenes, cómo controlar el coste de los mentores freelance vs. los empleados fijos, qué indicadores de alerta activar cuando el coste por sesión supera el umbral y cómo ajustar la capacidad del equipo de mentores de forma ágil sin comprometer la calidad del servicio.

6. Reporting financiero para inversores o para la dirección del centro
Diseña la estructura de un informe financiero trimestral adaptado a dos audiencias: inversores de una empresa EdTech de mentoría (resumen ejecutivo con métricas de crecimiento, margen bruto, CAC, LTV, churn mensual y runway) y dirección de un centro educativo que tiene un programa interno de tutorización (resumen del presupuesto ejecutado, coste por alumno acompañado, impacto en la tasa de abandono, ROI del programa y recomendaciones para el siguiente trimestre).

Formato de respuesta: Usa tablas para los modelos de costes y el cálculo del ROI. Incluye ejemplos numéricos ilustrativos con datos ficticios pero realistas. Añade referencias a estudios o benchmarks sobre el coste del abandono escolar y el impacto económico de los programas de mentoría cuando los haya disponibles.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Calcular el ROI de programas de mentoría educativa y gestionar la sostenibilidad financiera de servicios de tutorización',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal del mentoring educativo y protección del alumno menor',
                'description'       => 'Comprende las obligaciones legales, los riesgos de responsabilidad y los requisitos de protección de datos en programas de mentoría y tutorización educativa con alumnos menores de edad.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado o asesora jurídica especializado en derecho educativo, protección de menores y responsabilidad civil en servicios de acompañamiento y mentoría educativa. Tienes experiencia en el asesoramiento a programas de mentoría académica, plataformas de tutorización online y centros educativos que ofrecen servicios de coaching educativo a alumnos menores de edad y a sus familias.

Objetivo principal: Necesito elaborar una guía jurídica completa que cubra el marco legal aplicable a los programas de mentoría y tutorización educativa, especialmente cuando trabajan con menores de edad, incluyendo los contratos con las familias, la protección de datos, la responsabilidad del mentor y los requisitos de seguridad.

Contexto del programa o servicio:
- Tipo de entidad: [EMPRESA PRIVADA / ORGANIZACIÓN SIN ÁNIMO DE LUCRO / PROGRAMA DE UN CENTRO EDUCATIVO]
- Edad del alumnado atendido: [MENORES DE 18 AÑOS / MAYORES / MIXTO]
- Modalidad del servicio: [PRESENCIAL / ONLINE / HÍBRIDA]
- Relación con el centro educativo: [SERVICIO EXTERNO / PROGRAMA INTERNO DEL CENTRO]
- País o comunidad autónoma de operación: [ESPAÑA / COMUNIDAD AUTÓNOMA]

Tareas que necesito que desarrolles:

1. Marco normativo aplicable a la mentoría educativa con menores
Elabora el mapa normativo completo que regula los programas de mentoría y tutorización con menores en España: Ley Orgánica de Protección Integral a la Infancia y la Adolescencia frente a la Violencia (LOPIVI), Ley de Protección Jurídica del Menor, RGPD y LOPD-GDD (aplicación a datos de menores), Ley de Ordenación General del Sistema Educativo (legislación autonómica aplicable si es un programa vinculado a un centro) y normativa de responsabilidad civil en servicios educativos. Para cada norma, indica los artículos más relevantes para el diseño de un programa de mentoría seguro y su implicación práctica.

2. Requisitos legales del mentor que trabaja con menores
Explica los requisitos legales que debe cumplir cualquier mentor o tutor que trabaje con menores de edad en España: certificado negativo del Registro Central de Delincuentes Sexuales (obligatorio por la LOPIVI para cualquier persona que trabaje habitualmente con menores), verificación de antecedentes penales generales, formación mínima en protección de menores y en prevención del abuso recomendada o exigida por la normativa, y obligaciones de confidencialidad y de comunicación ante situaciones de sospecha de abuso o maltrato del menor (protocolo de comunicación a las autoridades competentes).

3. Contratos con familias y consentimiento informado para menores
Define los elementos esenciales que debe incluir el contrato entre el programa de mentoría y la familia del alumno menor: identificación de las partes (tutor legal del menor), objeto del contrato y descripción del servicio, condiciones de prestación del servicio (horario, formato, comunicación de incidencias), política de cancelación y devolución, cláusulas de responsabilidad del programa y limitaciones de responsabilidad, consentimiento informado para el tratamiento de datos personales del menor (incluidos datos de rendimiento académico y de bienestar), consentimiento para la grabación de sesiones online si aplica y procedimiento de resolución de conflictos. Incluye un modelo de cláusula de consentimiento parental para el tratamiento de datos del menor.

4. Protección de datos en programas de mentoría con menores
Explica cómo cumplir el RGPD y la LOPD-GDD en un programa de mentoría que maneja datos de menores: qué datos personales se recogen habitualmente (rendimiento académico, datos de salud mental si se recogen, datos de contexto familiar), qué base jurídica aplica a cada tipo de dato (consentimiento parental, interés legítimo, ejecución del contrato), cómo garantizar la seguridad de los datos de sesiones de mentoría (especialmente si se graban o si hay notas del mentor sobre el estado emocional del alumno), cuánto tiempo conservar los datos y cómo gestionarlos al finalizar el servicio y qué hacer si una familia solicita la supresión de los datos de su hijo.

5. Responsabilidad civil del mentor y del programa de mentoría
Define el régimen de responsabilidad civil aplicable a un programa de mentoría educativa: cuándo responde el mentor personalmente por daños al alumno, cuándo responde la empresa o el programa como organizador del servicio, qué coberturas de seguro de responsabilidad civil son necesarias para un servicio de mentoría con menores (presencial y online), cómo documentar las sesiones para reducir el riesgo de reclamaciones posteriores y qué protocolo seguir si se produce un incidente durante una sesión de mentoría que afecta al alumno.

6. Protocolo de actuación ante situaciones de riesgo detectadas por el mentor
Define el protocolo legal que debe seguir un mentor o tutor cuando durante el acompañamiento detecta una situación de posible maltrato, abuso o negligencia hacia el alumno menor: la obligación legal de comunicar la sospecha a las autoridades competentes (Servicios de Protección de Menores, Fuerzas y Cuerpos de Seguridad), cómo documentar los indicios observados de forma objetiva, a quién notificar dentro del programa de mentoría antes de contactar con las autoridades, qué decirle al alumno y qué no decirle durante el proceso, y cómo proteger al mentor de posibles represalias de la familia.

Formato de respuesta: Usa listas numeradas para los pasos de los protocolos. Usa tablas para el mapa normativo. Incluye citas textuales de los artículos más relevantes cuando sean breves. Distingue claramente entre obligaciones legales imperativas y recomendaciones de buenas prácticas. Añade una nota de descargo indicando que esta guía tiene carácter orientativo y no sustituye al asesoramiento jurídico individualizado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Comprender el marco legal de la mentoría educativa con menores y cumplir con las obligaciones de protección y responsabilidad',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte y experiencia del alumno en plataformas de mentoría online',
                'description'       => 'Diseña el sistema de atención al alumno y a las familias en plataformas de tutorización y mentoría online: onboarding, soporte durante el programa y gestión de la satisfacción.',
                'prompt_content'    => <<<'EOT'
Actúa como un responsable de customer success y experiencia del usuario especializado en plataformas de educación online, mentoría académica y tutorización personalizada. Tienes experiencia en el diseño de procesos de onboarding para nuevos alumnos y familias, en la gestión de incidencias durante el programa y en el desarrollo de estrategias para mejorar la retención y la satisfacción en servicios de acompañamiento educativo.

Objetivo principal: Necesito diseñar un sistema completo de atención y soporte al alumno y a las familias para una plataforma o programa de mentoría y tutorización educativa, que maximice la satisfacción, reduzca el abandono del programa y convierta a los alumnos satisfechos en promotores del servicio.

Contexto de la plataforma o programa:
- Tipo de servicio: [PLATAFORMA ONLINE / PROGRAMA PRESENCIAL / HÍBRIDO]
- Nivel educativo del alumnado: [SECUNDARIA / BACHILLERATO / UNIVERSIDAD / ADULTOS]
- Número de alumnos activos: [NÚMERO]
- Canales de soporte actuales: [EMAIL, CHAT, TELÉFONO, APP]
- Principales motivos de abandono o insatisfacción: [DESCRIBIR]

Tareas que necesito que desarrolles:

1. Proceso de onboarding del alumno y la familia en el programa de mentoría
Define el flujo de incorporación de un nuevo alumno y su familia desde el momento en que confirman la inscripción hasta la primera sesión de mentoría. El proceso debe incluir: comunicación de bienvenida inmediata con los próximos pasos, cuestionario de diagnóstico inicial para el alumno y para la familia (objetivos, expectativas, situación académica actual, disponibilidad horaria), proceso de asignación del mentor más adecuado al perfil del alumno, sesión de presentación alumno-mentor-familia y acceso guiado a la plataforma o a los materiales del programa. Incluye los tiempos recomendados para cada paso y las comunicaciones automatizadas que puedes preparar.

2. Gestión de las consultas y las incidencias más frecuentes
Clasifica las consultas de alumnos y familias en un programa de mentoría por tipo y urgencia: consultas sobre el mentor asignado (compatibilidad, cambio de mentor, valoración de las sesiones), consultas sobre el progreso del alumno (cuándo se verán mejoras, cómo interpretar los informes de seguimiento), incidencias técnicas en la plataforma (acceso a sesiones, grabaciones, materiales), solicitudes de cambio de horario o de modalidad y quejas sobre la calidad del servicio o del mentor. Para cada tipo de consulta, define el canal de atención adecuado, el tiempo de respuesta objetivo y el responsable de resolución.

3. Plantillas de comunicación para los momentos clave del programa
Redacta plantillas de comunicación para los momentos más críticos en la relación con el alumno y la familia: mensaje de bienvenida al inicio del programa (cálido y claro sobre los próximos pasos), informe de progreso mensual para la familia (con las secciones fijas que debe incluir), comunicación de una señal de alerta detectada por el mentor (cómo comunicar una preocupación a la familia sin alarmar innecesariamente), mensaje de renovación del programa al final del período contratado (argumentando el valor conseguido y los objetivos pendientes) y mensaje de cierre del programa con resumen de logros y recomendaciones de continuidad.

4. Protocolo para gestionar el abandono del programa por parte del alumno
Define un protocolo de cinco pasos para intervenir cuando un alumno muestra señales de querer abandonar el programa: detección temprana (qué señales indican que un alumno está en riesgo de abandonar: reducción de la asistencia, respuestas evasivas, baja participación en la plataforma), primera conversación de rescate con el alumno o la familia (guion recomendado, sin presionar, explorando las causas del desenganche), ajuste del programa si la causa es la incompatibilidad con el formato o el mentor, oferta de pausa en lugar de baja cuando la causa es temporal y, si finalmente el alumno abandona, encuesta de salida y proceso de cierre digno que deje la puerta abierta a la reincorporación.

5. Sistema de feedback y mejora continua del programa
Diseña un sistema de recogida de feedback en cuatro momentos del programa: encuesta después de la primera sesión de mentoría (experiencia de onboarding, expectativas vs. realidad), encuesta mensual breve al alumno y a la familia (tres preguntas sobre la calidad del mentor, el progreso percibido y la satisfacción general), encuesta de profundidad trimestral con la familia (experiencia completa, sugerencias de mejora, NPS del programa) y encuesta de cierre cuando el alumno termina o abandona el programa (motivos, logros percibidos, probabilidad de recomendación). Incluye cómo analizar los resultados y convertirlos en mejoras concretas del servicio y del equipo de mentores.

6. Indicadores de calidad del servicio de atención en programas de mentoría
Define los seis indicadores de calidad más importantes para medir la experiencia del alumno y de la familia en un programa de mentoría educativa: tiempo medio de primera respuesta del soporte, tasa de resolución en el primer contacto, NPS mensual del programa (diferenciando la valoración del mentor y la valoración del soporte), tasa de retención mensual del alumno en el programa, porcentaje de alumnos que renuevan al final del período y número de referidos generados por alumnos y familias satisfechos. Indica cómo recoger estos indicadores de forma sistemática y cómo usarlos en la mejora continua del servicio.

Formato de respuesta: Usa formato de protocolo con pasos numerados y responsables asignados para los flujos de onboarding y de gestión del abandono. Usa formato de email completo para las plantillas de comunicación. Usa tablas para la clasificación de consultas y los indicadores de calidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar la experiencia del alumno y el soporte en plataformas y programas de mentoría educativa online',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance como mentor educativo o tutor académico: modelo de negocio',
                'description'       => 'Construye tu negocio freelance como mentor educativo, tutor académico o coach de aprendizaje: define tus servicios, fija tus tarifas, capta alumnos y escala el negocio con IA.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocios especializado en ayudar a educadores, orientadores y psicopedagogos a construir una carrera freelance exitosa y sostenible como tutores académicos, mentores educativos o coaches de aprendizaje. Tienes experiencia en el asesoramiento a docentes que dejan o complementan la enseñanza en centros para trabajar de forma independiente, ofreciendo acompañamiento personalizado a alumnos de distintas etapas educativas y a sus familias.

Objetivo principal: Necesito diseñar la estrategia completa de mi negocio freelance como mentor educativo o tutor académico, desde la definición de mi nicho y propuesta de valor hasta la captación de mis primeros alumnos, la gestión del negocio y la escalabilidad a medio plazo.

Contexto personal y profesional:
- Perfil de partida: [DOCENTE / ORIENTADOR / PSICOPEDAGOGO / COACH / LOGOPEDA / OTRO]
- Nivel educativo en el que me especializo: [PRIMARIA / SECUNDARIA / BACHILLERATO / UNIVERSIDAD / ADULTOS]
- Materias o áreas de especialización: [MATERIAS, TÉCNICAS DE ESTUDIO, ORIENTACIÓN DE CARRERA, ETC.]
- Modalidad que quiero ofrecer: [PRESENCIAL / ONLINE / HÍBRIDA]
- Objetivo de ingresos mensuales como freelance: [CIFRA]
- Tiempo disponible para el negocio: [HORAS SEMANALES]

Tareas que necesito que desarrolles:

1. Definición del nicho y la propuesta de valor como mentor o tutor
Ayúdame a identificar el nicho más rentable y diferenciado para mi negocio de mentoría o tutorización. Basándote en mi perfil, propón tres combinaciones de especialidad más audiencia objetivo (por ejemplo: "mentoría académica de bachillerato para la preparación de la selectividad y la elección de carrera universitaria", "tutoría de técnicas de estudio y hábitos de aprendizaje para estudiantes universitarios de primer año" o "coaching educativo para adultos en reconversión profesional que vuelven a estudiar"). Para cada opción, analiza el tamaño del mercado, la disposición a pagar, la competencia actual y la alineación con mis fortalezas. Recomienda la opción más prometedora y redacta mi propuesta de valor en dos oraciones.

2. Catálogo de servicios y estructura de tarifas
Diseña un catálogo de servicios de tres niveles (entrada, estándar y premium) adaptado a mi especialidad como mentor o tutor. Para cada servicio, define: nombre del servicio y descripción para el cliente sin jerga pedagógica, qué incluye concretamente (número de sesiones, duración, materiales de seguimiento, informes a la familia), tarifa recomendada con justificación basada en el valor aportado y no en el coste-hora y formato de entrega. Incluye también cómo presentar mis tarifas para que no se comparen con las de una academia de barrio o con las clases particulares sin metodología, y cómo gestionar los descuentos sin depreciar el posicionamiento del servicio.

3. Captación de los primeros diez alumnos como freelance educativo
Define un plan de acción de 90 días para conseguir mis primeros diez alumnos o clientes. El plan debe incluir: cómo aprovechar la red de contactos del sector educativo (ex-alumnos, compañeros docentes, directores de centro, orientadores que pueden derivar casos), cómo usar LinkedIn y las redes sociales para construir autoridad como experto en mi nicho de mentoría, cómo aparecer en portales de clases particulares y tutorización online con un perfil diferenciado, cómo conseguir mis primeras valoraciones y testimonios para construir reputación digital y cómo lanzar una sesión de diagnóstico gratuita o de bajo coste como primer paso de la relación con el alumno potencial.

4. Gestión del negocio freelance de mentoría
Define las mejores prácticas para gestionar el negocio de mentoría educativa como freelance: cómo estructurar el contrato de servicio con la familia (qué cláusulas son imprescindibles para protegerme y al alumno), cómo gestionar la agenda y los horarios para maximizar el número de alumnos sin agotarme, cómo cobrar y gestionar los pagos (sistemas de pago recomendados, frecuencia de facturación, política ante impagos o cancelaciones de última hora), cómo documentar el progreso de cada alumno de forma sistemática y cómo proteger la confidencialidad de los datos del alumno conforme al RGPD cuando trabajo como autónomo.

5. Uso de la IA para mejorar la calidad y la eficiencia del servicio de mentoría
Explica cómo puedo usar herramientas de inteligencia artificial para mejorar mi negocio de mentoría educativa sin perder el toque humano que es la esencia del acompañamiento personalizado: cómo usar la IA para preparar las sesiones de mentoría (análisis del perfil del alumno, generación de recursos adaptados, propuesta de actividades), cómo usarla para generar informes de progreso para las familias de forma más rápida, cómo usar herramientas de seguimiento y recordatorio para no perder de vista a ningún alumno y cómo usar la IA para mejorar mi visibilidad online (generación de contenido de valor para redes sociales, optimización SEO de mi perfil y web, respuesta a consultas frecuentes).

6. Escalabilidad del negocio freelance de mentoría educativa
Propón tres estrategias para escalar el negocio de mentoría una vez que tengo una base estable de alumnos: creación de un programa de mentoría grupal de pequeño formato (cuatro a ocho alumnos) que me permita multiplicar mis ingresos sin multiplicar mis horas, desarrollo de recursos digitales de acompañamiento (guías de técnicas de estudio, plantillas de planificación, cursos online cortos) que generen ingresos pasivos, y transición hacia la formación de mentores y tutores que quieran replicar mi metodología (curso de certificación de mentores educativos o licencia de mi método). Para cada estrategia, indica el esfuerzo inicial, el potencial de ingresos adicionales y los primeros pasos concretos.

Formato de respuesta: Usa tablas para el catálogo de servicios y la comparación de opciones de nicho. Usa listas numeradas para el plan de 90 días y las estrategias de escalabilidad. El tono debe ser práctico y orientado a la acción, con ejemplos concretos del sector de la mentoría y la tutorización educativa.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir un negocio freelance sostenible como mentor educativo, tutor académico o coach de aprendizaje',
                'vote_score'        => 40,
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
