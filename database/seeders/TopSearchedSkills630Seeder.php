<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills630Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Campaña de marketing educativo para centros K-12 con IA',
                'description'       => 'Diseña campañas de marketing dirigidas a familias y comunidades escolares para colegios de primaria y secundaria, usando IA para personalizar mensajes y segmentar audiencias.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en marketing educativo con amplia experiencia en comunicación con familias y comunidades escolares de educación primaria y secundaria (K-12).

Objetivo principal: Ayudarme a diseñar una campaña de marketing completa para un centro educativo K-12 que quiere aumentar su matrícula y fortalecer su reputación en la comunidad local.

Contexto del centro educativo:
- Nombre del centro: [NOMBRE DEL CENTRO]
- Nivel educativo: [Primaria / Secundaria / Ambos]
- Número de alumnos actual: [NÚMERO]
- Ubicación: [CIUDAD Y BARRIO]
- Propuesta de valor diferenciadora: [QUÉ LOS HACE ÚNICOS]
- Presupuesto aproximado de marketing: [PRESUPUESTO]
- Objetivo de nuevas matrículas: [NÚMERO OBJETIVO]

Tareas que necesito que realices:

1. Análisis de audiencia objetivo
Describe en detalle los tres perfiles de familias más relevantes para este centro (progenitores con hijos en edad de escolarización). Para cada perfil indica: preocupaciones principales respecto a la educación de sus hijos, canales de comunicación preferidos (redes sociales, WhatsApp, email, eventos presenciales), motivadores de decisión de elección de centro y objeciones más frecuentes.

2. Mensajes clave por etapa del embudo
Para cada fase del embudo de conversión (conciencia, consideración, decisión e inscripción), redacta 3 mensajes de marketing diferenciados que destaquen los valores pedagógicos del centro, el desarrollo integral del alumno y el apoyo docente individualizado. Los mensajes deben ser cálidos, cercanos y evitar el lenguaje corporativo frío.

3. Plan de contenidos para redes sociales
Propón un calendario editorial de 4 semanas para Instagram y Facebook del centro. Incluye: tipo de publicación (vídeo, carrusel, historia, reel), tema, copy sugerido, llamada a la acción y mejor día y hora de publicación. Asegúrate de alternar contenido educativo, testimonios de familias, logros del alumnado y noticias del centro.

4. Email de captación para jornadas de puertas abiertas
Redacta un email persuasivo de máximo 300 palabras para invitar a familias interesadas a una jornada de puertas abiertas. El email debe incluir: asunto llamativo, personalización con el nombre del destinatario, descripción de la experiencia que vivirán durante la visita, tres beneficios concretos de elegir el centro y un botón de llamada a la acción claro.

5. Estrategia de reputación online
Indica cómo gestionar las reseñas en Google Maps y portales educativos. Proporciona una plantilla de respuesta para reseñas positivas y otra para reseñas negativas o críticas. Añade también una guía rápida para animar a las familias satisfechas a dejar su valoración de forma natural y ética.

6. Métricas de éxito
Define los KPI clave que debo monitorizar durante los tres meses de campaña: alcance, tasa de conversión de leads a visitas, coste por matrícula conseguida, índice de satisfacción de familias nuevas y tasa de retención de alumnado. Incluye valores de referencia realistas para un centro de tamaño medio.

Formato de respuesta: Utiliza encabezados claros para cada sección, listas con viñetas donde sea apropiado y un tono profesional pero accesible. Al final, añade un resumen ejecutivo de una página con los puntos más importantes de la campaña.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar campañas de marketing para centros educativos K-12 orientadas a la captación de nuevas familias',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plataforma educativa K-12: especificaciones técnicas con IA',
                'description'       => 'Genera especificaciones técnicas y arquitectura para una plataforma de gestión del aprendizaje (LMS) orientada a centros de educación primaria y secundaria.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas educativas y sistemas de gestión del aprendizaje (LMS) para centros de educación primaria y secundaria (K-12).

Objetivo principal: Necesito que me ayudes a definir los requisitos técnicos y la arquitectura de una plataforma educativa digital diseñada específicamente para alumnos de entre 6 y 16 años, con especial atención a la seguridad, la accesibilidad y la facilidad de uso tanto para docentes como para familias.

Contexto del proyecto:
- Número de usuarios esperados: [NÚMERO DE ALUMNOS, DOCENTES Y FAMILIAS]
- Presupuesto inicial de desarrollo: [PRESUPUESTO]
- Plazo de entrega del MVP: [MESES]
- Infraestructura preferida: [Cloud / On-premise / Híbrido]
- Stack tecnológico actual del centro: [TECNOLOGÍAS EXISTENTES]
- Requisitos de integración: [SISTEMAS EXTERNOS: Google Workspace, Microsoft 365, etc.]

Tareas que necesito que desarrolles:

1. Análisis de requisitos funcionales
Lista y prioriza (MoSCoW: Must have, Should have, Could have, Won't have) todos los requisitos funcionales de la plataforma. Divide por módulos: gestión de usuarios y roles, aula virtual, seguimiento del progreso académico, comunicación entre docentes y familias, gestión de tareas y entregas, evaluación y calificaciones, y panel de administración del centro.

2. Arquitectura técnica recomendada
Propón una arquitectura de microservicios o monolítica modular (justifica cuál recomiendas para este tamaño de proyecto). Incluye diagrama de componentes en texto (usando bloques ASCII o Mermaid), descripción de cada servicio principal, patrones de comunicación entre servicios y estrategia de escalabilidad horizontal.

3. Modelo de datos
Define las entidades principales del sistema (Usuario, Alumno, Docente, Familia, Curso, Tarea, Evaluación, Notificación) con sus atributos más relevantes y las relaciones entre ellas. Incluye consideraciones sobre la gestión de datos sensibles de menores conforme al RGPD y la LOPD.

4. Seguridad y privacidad
Describe las medidas de seguridad obligatorias para una plataforma que maneja datos de menores: autenticación robusta (MFA para docentes y administradores), control de acceso basado en roles (RBAC), cifrado en tránsito y en reposo, política de retención y eliminación de datos, y auditoría de accesos. Incluye la lista de controles recomendados por COPPA y la normativa europea aplicable.

5. Plan de pruebas y calidad
Define la estrategia de testing para garantizar la calidad: pruebas unitarias (cobertura mínima recomendada), pruebas de integración, pruebas de carga (usuarios concurrentes esperados en los picos de uso escolar) y pruebas de accesibilidad conforme a WCAG 2.1 nivel AA.

6. Hoja de ruta de desarrollo
Propón un plan de desarrollo por sprints de dos semanas para los primeros seis meses. Indica qué funcionalidades entregar en cada sprint, las dependencias técnicas críticas y los hitos de entrega al cliente. Incluye una estimación del equipo mínimo necesario (perfiles y dedicación).

Formato de respuesta: Usa secciones bien delimitadas con encabezados, tablas cuando sea útil para comparar opciones y bloques de código o pseudocódigo cuando ilustres decisiones técnicas concretas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Definir la arquitectura técnica de una plataforma LMS para centros K-12',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de materiales visuales educativos K-12 con IA',
                'description'       => 'Crea guías de estilo, infografías y materiales didácticos visuales adaptados a distintas edades del alumnado de primaria y secundaria.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador gráfico educativo especializado en la creación de materiales visuales para centros de educación primaria y secundaria (K-12), con experiencia en pedagogía visual y teoría del aprendizaje multimodal.

Objetivo principal: Necesito desarrollar un sistema de identidad visual pedagógica y un conjunto de plantillas de materiales didácticos que sean atractivos, accesibles y eficaces para distintos grupos de edad (6-9 años, 10-12 años y 13-16 años).

Contexto del proyecto de diseño:
- Centro o editorial educativa: [NOMBRE]
- Materias principales: [MATERIAS]
- Nivel educativo: [PRIMARIA / SECUNDARIA / AMBOS]
- Paleta de colores existente (si la hay): [COLORES]
- Formatos de entrega: [Digital / Impreso / Ambos]
- Herramientas de diseño disponibles: [Canva / Figma / Adobe / Otro]

Tareas que necesito que desarrolles:

1. Principios de diseño por franja de edad
Para cada grupo de edad (6-9, 10-12 y 13-16 años) define las recomendaciones de diseño pedagógico: tamaño y tipo de tipografía recomendado, densidad de información por página, uso del color (contrastes, saturación, asociaciones emocionales por edad), proporción imagen-texto, estilo de ilustraciones (realistas vs. esquemáticas vs. cartoon) y consideraciones de accesibilidad visual.

2. Guía de identidad visual pedagógica
Diseña las directrices de identidad visual para el sistema de materiales educativos: paleta de colores principal y secundaria con sus aplicaciones por materia (por ejemplo, verde para ciencias, azul para matemáticas, naranja para lengua), sistema tipográfico (fuentes recomendadas libres de licencia para uso educativo, jerarquía visual H1/H2/cuerpo), iconografía coherente y sistema de señalización de secciones (actividades, ejemplos, glosario, para saber más).

3. Plantillas de materiales didácticos
Describe en detalle la estructura y el diseño de las siguientes plantillas:
- Ficha de trabajo para alumnos de primaria (una cara A4): con espacio para nombre y fecha, zona de instrucciones destacada, área de trabajo principal con cuadrícula o líneas según materia, y sección de autoevaluación visual con emoticonos.
- Infografía resumen de unidad para secundaria (vertical A3): con mapa conceptual central, recuadros de conceptos clave, línea de tiempo si aplica, glosario lateral y código QR para recursos ampliados.
- Presentación de clase (16:9, 20 diapositivas): portada atractiva, diapositiva de índice, plantilla de contenido con imagen + texto, plantilla de actividad, diapositiva de pregunta interactiva y cierre con resumen y evaluación.

4. Recomendaciones para materiales inclusivos
Lista las adaptaciones de diseño necesarias para garantizar la accesibilidad e inclusividad de los materiales: contraste suficiente (ratio mínimo WCAG AA), alternativas textuales para imágenes, opciones tipográficas para dislexia (OpenDyslexic, uso de interlineado amplio), consideraciones para daltonismo (no depender solo del color para transmitir información) y cómo adaptar el mismo material para distintos niveles competenciales dentro del aula.

5. Checklist de calidad antes de publicar
Proporciona una lista de verificación de 20 puntos que cualquier diseñador del equipo pueda usar antes de aprobar un material educativo para su impresión o distribución digital. Incluye aspectos de diseño, legibilidad, coherencia de marca, corrección ortográfica y gramática, y adecuación al nivel del alumnado.

Formato de respuesta: Detalla cada sección con ejemplos concretos. Cuando describas elementos visuales, usa lenguaje preciso (valores hexadecimales para colores, nombres de fuentes exactos, proporciones en porcentajes o píxeles). Añade al final una lista de recursos gratuitos recomendados (bancos de imágenes, fuentes, iconos) para educadores con licencia Creative Commons.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Crear sistemas de identidad visual y plantillas de materiales didácticos para centros K-12',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta consultiva de soluciones EdTech a centros K-12',
                'description'       => 'Domina el proceso de venta consultiva de tecnología educativa a directores y equipos directivos de colegios de primaria y secundaria.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de ventas especializado en tecnología educativa (EdTech) con amplia experiencia en la venta de soluciones a centros de educación primaria y secundaria (K-12), incluyendo plataformas LMS, herramientas de IA educativa, dispositivos y contenidos digitales.

Objetivo principal: Necesito preparar una estrategia de venta consultiva completa para presentar nuestra solución EdTech a un centro educativo K-12, desde la prospección inicial hasta el cierre del contrato y la fidelización.

Contexto de la oportunidad de venta:
- Solución a vender: [NOMBRE Y DESCRIPCIÓN DEL PRODUCTO/SERVICIO]
- Precio aproximado: [PRECIO O RANGO]
- Centro objetivo: [TIPO DE CENTRO: público, concertado, privado]
- Número de alumnos del centro: [NÚMERO]
- Interlocutor principal: [DIRECTOR, JEFE DE ESTUDIOS, RESPONSABLE TIC, ETC.]
- Problema principal que resuelve nuestra solución: [PROBLEMA]

Tareas que necesito que desarrolles:

1. Perfil del comprador en centros K-12
Describe en detalle los distintos perfiles de decisores en un centro educativo: director o directora (prioridades estratégicas y personales), jefe o jefa de estudios (preocupaciones pedagógicas), coordinador o coordinadora TIC (criterios técnicos y de implementación), responsable de administración (restricciones presupuestarias y de compra pública) y AMPA o consejo escolar (perspectiva de familias). Para cada perfil indica sus principales motivaciones de compra, sus miedos y objeciones más frecuentes y el lenguaje que mejor conecta con ellos.

2. Guion de llamada de prospección
Redacta un guion de llamada telefónica de 3 minutos para conseguir una reunión de diagnóstico con el director o directora del centro. El guion debe incluir: apertura que genere curiosidad, pregunta de diagnóstico sobre su situación actual, propuesta de valor en una frase, gestión de la objeción "ya tenemos suficiente tecnología" y cierre para concretar la reunión.

3. Presentación de diagnóstico (reunión de descubrimiento)
Lista las 10 preguntas más importantes para hacer durante la primera reunión de diagnóstico con el equipo directivo. Las preguntas deben explorar: situación tecnológica actual, principales retos pedagógicos, resultados académicos y su evolución reciente, presupuesto disponible y ciclo de compra, experiencias previas con proveedores EdTech (positivas y negativas) y visión del centro a tres años.

4. Propuesta de valor personalizada
Basándote en los datos del contexto, redacta una propuesta de valor de dos párrafos que conecte directamente los beneficios de nuestra solución con los retos específicos del centro. Evita el lenguaje genérico de folleto de ventas y usa datos, casos de éxito de centros similares y un lenguaje orientado al impacto en el aprendizaje del alumnado.

5. Gestión de las 5 objeciones más comunes en EdTech K-12
Para cada objeción, proporciona la respuesta recomendada con técnica de venta incluida (redirigir, reformular, aislar, etc.): "Es demasiado caro para nuestro presupuesto", "Los profesores no van a adoptar otra herramienta más", "Ya tenemos una solución que funciona bien", "Necesitamos aprobación del consejo escolar o de la administración educativa" y "No tenemos tiempo para formación e implementación".

6. Plan de seguimiento post-reunión
Define un plan de seguimiento de 6 semanas después de la reunión de presentación: qué enviar, cuándo contactar, cómo mantener el interés sin resultar invasivo y cómo involucrar a otros decisores del centro en el proceso de evaluación.

Formato de respuesta: Estructura cada sección con claridad. Para los guiones de llamada y reunión, usa formato de diálogo. Para las objeciones, usa formato de tabla con la objeción en una columna, la técnica en otra y la respuesta sugerida en una tercera.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparar estrategias de venta consultiva de tecnología educativa para centros K-12',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Roadmap de producto EdTech para educación K-12',
                'description'       => 'Diseña hojas de ruta de producto centradas en las necesidades reales de docentes, alumnado y familias de educación primaria y secundaria.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager senior especializado en tecnología educativa (EdTech) con experiencia en el diseño de productos digitales para centros de educación primaria y secundaria (K-12), con foco en la experiencia del docente, del alumno y de la familia.

Objetivo principal: Necesito desarrollar una hoja de ruta de producto (roadmap) realista y basada en evidencia para los próximos 12 meses de una plataforma educativa K-12, priorizando las funcionalidades que mayor impacto tengan en el aprendizaje y en la satisfacción de todos los usuarios.

Contexto del producto:
- Nombre del producto: [NOMBRE]
- Estado actual: [MVP / Beta / Producto en producción con X usuarios]
- Usuarios principales: [DOCENTES / ALUMNOS / FAMILIAS / ADMINISTRACIÓN]
- Principal problema que resuelve: [PROBLEMA CENTRAL]
- Métricas de éxito actuales: [NPS, DAU, RETENCIÓN, ETC.]
- Restricciones de equipo y presupuesto: [TAMAÑO DEL EQUIPO, PRESUPUESTO TRIMESTRAL]

Tareas que necesito que desarrolles:

1. Marco de priorización de funcionalidades educativas
Diseña un marco de priorización adaptado al sector educativo que vaya más allá del RICE o el MoSCoW estándar. El marco debe ponderar: impacto en el aprendizaje del alumno (evidencia pedagógica), facilidad de adopción por parte del docente (resistencia al cambio), viabilidad técnica, potencial de diferenciación competitiva y alineación con los currículos educativos oficiales.

2. Investigación de usuarios: guion de entrevistas
Proporciona guiones de entrevista de 30 minutos para los cuatro perfiles de usuario: docente de primaria, docente de secundaria, alumno de entre 12 y 16 años y progenitor o tutor del alumno. Cada guion debe explorar: rutinas actuales sin la herramienta, principales frustraciones con las soluciones existentes, momentos de mayor valor percibido en la plataforma actual, funcionalidades deseadas y barreras de adopción.

3. Definición del roadmap por trimestres
Propón un roadmap de cuatro trimestres con tres horizontes de certeza: comprometido (Q1), probable (Q2) y exploratorio (Q3-Q4). Para cada trimestre, define las 3-4 iniciativas principales con su objetivo pedagógico, las métricas de éxito, las dependencias y el equipo implicado. Justifica el orden de priorización basándote en el marco definido en el punto 1.

4. Fichas de funcionalidad (Feature Briefs)
Para las tres funcionalidades más prioritarias del roadmap, escribe una ficha completa que incluya: título y descripción en lenguaje pedagógico (no técnico), problema del usuario que resuelve, criterios de aceptación desde la perspectiva del docente y del alumno, métricas de adopción y éxito, riesgos y mitigaciones, y boceto en texto de la experiencia de usuario (user journey de 5 pasos).

5. Estrategia de lanzamiento y adopción
Para cada lanzamiento trimestral, define una estrategia de adopción que considere: programa de docentes embajadores, formación in situ vs. autoservicio, comunicación a familias, seguimiento de adopción en las primeras cuatro semanas y plan de iteración basado en feedback real.

6. Métricas del éxito del producto
Define el cuadro de mando de producto con los 8 indicadores clave que monitorizar mensualmente: indicadores de uso activo (DAU/MAU por perfil), indicadores de aprendizaje (mejora en resultados si se puede medir), indicadores de satisfacción (NPS por perfil, tickets de soporte), indicadores de negocio (retención de centros, expansión dentro del centro) y señales de alerta temprana de abandono.

Formato de respuesta: Usa tablas para el roadmap y las fichas de funcionalidad. Emplea listas numeradas para los guiones de entrevista y usa lenguaje que pueda compartirse directamente con el equipo de diseño, ingeniería y los stakeholders del centro educativo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir roadmaps de producto EdTech priorizados y orientados al aprendizaje K-12',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del talento docente en centros K-12 con IA',
                'description'       => 'Aplica técnicas de RRHH modernas adaptadas a la realidad de centros educativos de primaria y secundaria: selección, onboarding y desarrollo profesional docente.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora de recursos humanos especializado en gestión del talento docente en centros de educación primaria y secundaria (K-12), con experiencia en selección de profesorado, desarrollo profesional, gestión del clima de aula y retención del talento educativo.

Objetivo principal: Necesito diseñar un sistema integral de gestión del talento docente para un centro educativo K-12 que mejore la calidad del proceso de selección, acelere la integración de nuevos docentes y promueva el desarrollo profesional continuo del claustro.

Contexto del centro:
- Tipo de centro: [Público / Concertado / Privado]
- Número de docentes: [NÚMERO]
- Niveles educativos: [Primaria / Secundaria / Bachillerato]
- Principales retos actuales: [ROTACIÓN ALTA / DIFICULTAD PARA ENCONTRAR PERFILES / CLIMA DE CLAUSTRO / OTRO]
- Propuesta pedagógica diferenciadora: [METODOLOGÍA: Montessori, ABP, bilingüe, etc.]

Tareas que necesito que desarrolles:

1. Perfil competencial del docente ideal
Define el mapa de competencias del docente del siglo XXI adaptado a la realidad K-12: competencias pedagógicas (dominio de metodologías activas, gestión del aula diversa, evaluación formativa), competencias digitales (uso de herramientas EdTech, seguridad digital con menores, creación de contenidos digitales), competencias interpersonales (comunicación con familias, trabajo en equipo con el claustro, gestión emocional) y competencias de desarrollo profesional (reflexión sobre la práctica, formación continua, mentoring de compañeros).

2. Proceso de selección de docentes
Diseña un proceso de selección de cinco fases para contratar a un docente de secundaria de [MATERIA]. Incluye: descripción del puesto de trabajo que atraiga a perfiles excelentes, preguntas de entrevista conductual (método STAR) para evaluar cada competencia clave, prueba práctica de clase de 20 minutos con rúbrica de evaluación, dinámica de evaluación del encaje cultural con el proyecto del centro y criterios de decisión final para el comité de selección.

3. Plan de onboarding para nuevos docentes
Diseña un plan de acogida e integración de 90 días para un nuevo docente. El plan debe cubrir: semana previa al inicio (acceso a recursos, presentación al equipo, visita al centro), primer mes (acompañamiento de un mentor, observación de clases de referencia, reuniones de seguimiento semanales), segundo mes (autonomía progresiva, primera evaluación formativa, ajuste de objetivos) y tercer mes (evaluación de periodo de prueba, plan de desarrollo individualizado para el curso).

4. Sistema de desarrollo profesional
Propón un sistema de formación y desarrollo profesional para el claustro que contemple: diagnóstico de necesidades formativas individuales y colectivas, catálogo de formación interna y externa (con criterios de selección), comunidades de práctica por departamento o ciclo, sistema de observación entre pares (peer coaching), y vinculación del desarrollo con el plan de carrera docente dentro del centro.

5. Gestión del clima de claustro y bienestar docente
Define un protocolo de gestión del bienestar docente que incluya: encuesta de clima laboral trimestral (con las 10 preguntas más relevantes para detectar señales de alerta temprana), protocolo de actuación ante situaciones de estrés o conflicto en el claustro, iniciativas de reconocimiento del trabajo docente (más allá del salario) y plan de conciliación adaptado a los ritmos del calendario escolar.

6. Indicadores de gestión del talento
Establece el cuadro de mando de RRHH para un centro K-12 con 8 métricas clave: tasa de rotación voluntaria del profesorado, tiempo medio de cobertura de vacantes, índice de satisfacción docente (eNPS), tasa de completación del plan de formación, índice de absentismo, porcentaje de docentes con plan de desarrollo activo, tasa de promoción interna y coste por contratación.

Formato de respuesta: Usa listas estructuradas, tablas para las competencias y métricas, y formato de checklist para los planes de onboarding. Incluye ejemplos concretos de preguntas de entrevista, ítems de encuesta y actividades de desarrollo profesional.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar sistemas de gestión del talento docente adaptados a centros K-12',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Presupuestación y control financiero en centros K-12 con IA',
                'description'       => 'Gestiona las finanzas de centros de educación primaria y secundaria: presupuesto anual, control de gastos, análisis de viabilidad y reporting para el consejo escolar.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora financiero especializado en la gestión económica de centros de educación primaria y secundaria (K-12), tanto públicos como concertados y privados, con experiencia en presupuestación educativa, control de costes y reporting a equipos directivos y consejos escolares.

Objetivo principal: Necesito desarrollar un modelo financiero completo para un centro educativo K-12 que permita presupuestar con precisión el próximo curso escolar, controlar la ejecución mensual y tomar decisiones basadas en datos para garantizar la sostenibilidad económica del proyecto educativo.

Contexto financiero del centro:
- Tipo de centro y fuentes de ingresos: [Cuotas de matrícula / Concierto educativo / Subvenciones / Actividades extraescolares]
- Número de alumnos y cuota media: [NÚMERO DE ALUMNOS Y CUOTA ANUAL]
- Número de empleados: [DOCENTES Y PERSONAL NO DOCENTE]
- Principales partidas de gasto: [PERSONAL, INSTALACIONES, MATERIAL, TECNOLOGÍA]
- Software de contabilidad utilizado: [SAGE, A3, CONTASOL, ETC.]

Tareas que necesito que desarrolles:

1. Estructura del presupuesto anual educativo
Diseña la estructura completa del presupuesto anual de un centro K-12 con las siguientes categorías: ingresos (desglosados por cuotas de matrícula, actividades extraescolares, comedor, concierto o subvención pública y otros ingresos), gastos de personal (profesorado, personal de administración y servicios, y servicios externalizados), gastos de operación (suministros, mantenimiento, seguros, limpieza), gastos de tecnología e innovación educativa y gastos extraordinarios o de inversión. Para cada categoría, indica los drivers de coste más habituales y cómo proyectarlos.

2. Modelo de análisis de rentabilidad por servicio
Explica cómo calcular el margen de contribución de cada servicio del centro: aula ordinaria por nivel educativo, comedor escolar, transporte, actividades extraescolares y servicios de apoyo (logopedia, psicología, refuerzo escolar). Incluye la metodología de asignación de costes directos e indirectos y el umbral de rentabilidad mínimo para cada servicio.

3. Control presupuestario mensual
Define el proceso de cierre mensual y control de desviaciones para un centro K-12: plantilla de informe de seguimiento presupuestario (real vs. presupuesto vs. año anterior), criterios de alerta temprana para desviaciones significativas (umbrales del 5% y 15%), protocolo de revisión con el equipo directivo y mecanismos de ajuste presupuestario a lo largo del curso escolar.

4. Análisis de viabilidad de nuevas iniciativas
Proporciona una metodología para evaluar la viabilidad económica de nuevas iniciativas educativas: apertura de una nueva línea o nivel, implantación de un programa bilingüe, compra de equipamiento tecnológico de gran valor o contratación de nuevos perfiles especializados. Incluye el modelo de cálculo del periodo de recuperación de la inversión (payback) y el análisis coste-beneficio adaptado al contexto educativo sin ánimo de lucro.

5. Gestión de la tesorería escolar
Describe las mejores prácticas para la gestión de la liquidez en un centro educativo, considerando la estacionalidad de los cobros (concentración de ingresos al inicio del curso y en periodos de matrícula) y los compromisos de pago fijos mensuales. Incluye un modelo de previsión de tesorería a 13 semanas y los indicadores de alerta de tensión de liquidez.

6. Reporting financiero para el consejo escolar
Diseña la estructura de un informe financiero trimestral para presentar al consejo escolar o patronato de un centro educativo. El informe debe ser comprensible para perfiles no financieros: resumen ejecutivo de una página, gráficos de evolución de ingresos y gastos, estado de la tesorería, análisis de las desviaciones más relevantes y propuestas de decisión concretas para el consejo.

Formato de respuesta: Usa tablas para las estructuras presupuestarias y los modelos de control. Incluye ejemplos numéricos ilustrativos con datos ficticios pero realistas para un centro de tamaño medio (300-500 alumnos). Añade fórmulas o ratios financieros clave en el contexto educativo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Gestionar las finanzas de centros K-12 con modelos de presupuestación y control',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento legal RGPD y LOPD en centros K-12 con IA',
                'description'       => 'Asegura el cumplimiento normativo de la protección de datos de menores en centros de educación primaria y secundaria: RGPD, LOPD-GDD y normativa educativa autonómica.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado o asesora jurídica especializado en protección de datos y derecho educativo, con experiencia en el asesoramiento a centros de educación primaria y secundaria (K-12) en materia de cumplimiento del Reglamento General de Protección de Datos (RGPD) y la Ley Orgánica de Protección de Datos y Garantía de los Derechos Digitales (LOPD-GDD).

Objetivo principal: Necesito elaborar un plan de cumplimiento normativo completo en materia de protección de datos para un centro K-12, que cubra todos los tratamientos de datos personales de alumnos menores de edad, docentes, familias y proveedores externos.

Contexto del centro:
- Tipo de centro: [Público / Concertado / Privado]
- Número de alumnos menores de edad: [NÚMERO]
- Herramientas digitales en uso: [GOOGLE WORKSPACE, MICROSOFT 365, PLATAFORMA LMS, APPS DE COMUNICACIÓN, ETC.]
- Existencia de cámaras de videovigilancia: [SÍ / NO]
- Delegado de Protección de Datos (DPD) designado: [SÍ / NO]

Tareas que necesito que desarrolles:

1. Inventario de tratamientos de datos personales
Elabora el Registro de Actividades de Tratamiento (RAT) obligatorio bajo el artículo 30 del RGPD para un centro K-12. Identifica los tratamientos más habituales: gestión académica y administrativa de alumnos, comunicación con familias, gestión de personal docente y no docente, videovigilancia de instalaciones, uso de plataformas digitales educativas, publicación de imágenes y vídeos de actividades escolares en webs y redes sociales, y gestión de servicios complementarios (comedor, transporte, actividades). Para cada tratamiento, indica: finalidad, base jurídica, categorías de datos, destinatarios, plazos de conservación y transferencias internacionales si las hubiera.

2. Gestión del consentimiento de menores
Explica el régimen jurídico del consentimiento de menores de edad en el contexto educativo: a partir de qué edad puede un menor consentir por sí mismo (diferencias entre RGPD y LOPD-GDD), cuándo se requiere el consentimiento de los progenitores o tutores legales, cómo documentar el consentimiento de forma válida y cómo gestionar la retirada del consentimiento. Incluye un modelo de formulario de consentimiento parental para el tratamiento de imágenes del alumno.

3. Contratos con proveedores de tecnología educativa
Describe los requisitos legales para formalizar contratos de encargo de tratamiento (artículo 28 RGPD) con los principales proveedores tecnológicos de un centro K-12: plataformas LMS, herramientas de Google o Microsoft, aplicaciones de comunicación con familias y proveedores de cámaras de videovigilancia. Incluye las cláusulas mínimas que debe contener cada contrato y cómo evaluar si un proveedor ofrece garantías suficientes (especialmente si está establecido fuera de la UE).

4. Protocolo ante una brecha de seguridad
Define el protocolo de actuación que debe seguir el centro en caso de brecha de seguridad que afecte a datos personales de menores: detección y contención inmediata (primeras 24 horas), evaluación del riesgo para los derechos y libertades de los afectados, notificación a la Agencia Española de Protección de Datos (plazo de 72 horas), comunicación a las familias afectadas cuando sea necesario y medidas correctoras y preventivas posteriores.

5. Derechos digitales del alumnado
Explica los derechos digitales específicos del alumnado menor de edad reconocidos por la LOPD-GDD y la Ley Orgánica de Educación (LOE): derecho a la protección ante contenidos dañinos online, derecho a la desconexión digital fuera del horario escolar, derecho a la intimidad frente al uso de dispositivos en el aula, y el papel del centro en la educación en el uso seguro, responsable y ético de Internet y las tecnologías. Incluye recomendaciones prácticas para el reglamento interno del centro.

6. Checklist de cumplimiento anual
Proporciona una lista de verificación anual de 25 puntos que el Delegado de Protección de Datos o el responsable del centro debe revisar cada inicio de curso: actualización del RAT, revisión de contratos con proveedores, renovación de consentimientos cuando sea necesario, formación al claustro en protección de datos, revisión de la política de privacidad publicada en la web, auditoría de accesos a sistemas con datos personales, y revisión de los protocolos de respuesta ante incidentes.

Formato de respuesta: Usa listas numeradas y tablas donde sea apropiado. Distingue claramente entre obligaciones legales imperativas y recomendaciones de buenas prácticas. Incluye referencias a los artículos normativos aplicables. Añade una nota de descargo indicando que esta información tiene carácter orientativo y no sustituye al asesoramiento jurídico individualizado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Garantizar el cumplimiento RGPD y LOPD en centros de educación K-12',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención a familias y soporte educativo K-12 con IA',
                'description'       => 'Mejora la comunicación y atención a las familias de centros de primaria y secundaria: gestión de consultas, resolución de conflictos y protocolos de soporte multicanal.',
                'prompt_content'    => <<<'EOT'
Actúa como un responsable de atención a la comunidad educativa especializado en la gestión de las relaciones con familias en centros de educación primaria y secundaria (K-12), con experiencia en comunicación multicanal, gestión de conflictos y mejora de la experiencia de las familias como usuarios del servicio educativo.

Objetivo principal: Necesito diseñar un sistema completo de atención a familias para un centro K-12 que mejore la satisfacción, reduzca los tiempos de respuesta y prevenga la escalada de conflictos, usando tanto canales digitales como presenciales de forma coordinada.

Contexto del centro:
- Número de familias atendidas: [NÚMERO]
- Canales actuales de comunicación: [EMAIL, APP, TELEFONO, PRESENCIAL]
- Principales motivos de consulta: [ACADÉMICO, CONVIVENCIA, ADMINISTRATIVO, EXTRAESCOLAR]
- Volumen de consultas mensuales estimado: [NÚMERO]
- Personal dedicado a atención a familias: [NÚMERO Y PERFILES]

Tareas que necesito que desarrolles:

1. Mapa de consultas y tipología de peticiones
Clasifica las consultas de familias en un centro K-12 por categoría (académica, de convivencia, administrativa, de salud y necesidades especiales, de extraescolares y comedor) y por urgencia (inmediata, en 24 horas, en 5 días laborables). Para cada categoría, define el canal de recepción adecuado, el responsable de primera respuesta, el tiempo de resolución objetivo y el criterio de escalada a dirección.

2. Guion de atención telefónica para el personal de secretaría
Redacta un guion completo de atención telefónica para las llamadas más frecuentes al centro: consulta sobre el proceso de matrícula, comunicación de ausencia de un alumno, solicitud de cita con el tutor, comunicación de incidente de convivencia y pregunta sobre el estado de una solicitud administrativa. Cada guion debe incluir: saludo estándar, preguntas de cualificación, protocolo de derivación al responsable correcto y cierre de la llamada.

3. Plantillas de comunicación escrita con familias
Redacta plantillas profesionales y empáticas para las comunicaciones escritas más habituales del centro a las familias: convocatoria de reunión de tutoría, comunicación de incidente de convivencia que involucra a su hijo o hija (sin revelar datos de otros menores), comunicación de preocupación académica, respuesta a una queja formal recibida por escrito y comunicación de medida disciplinaria. Cada plantilla debe tener un tono cálido pero profesional y seguir la estructura: contexto, información principal, próximos pasos y datos de contacto.

4. Protocolo de gestión de conflictos con familias
Define un protocolo de cinco pasos para gestionar situaciones de conflicto o queja formal de una familia, desde la recepción de la queja hasta su resolución: recepción y acuse de recibo (en menos de 24 horas), investigación interna y recogida de información, reunión de mediación con la familia, propuesta de solución y acuerdo documentado, y seguimiento posterior a los 15 días. Incluye técnicas de comunicación no violenta y de desescalada emocional para situaciones de alta tensión.

5. Sistema de feedback y mejora continua
Diseña una encuesta de satisfacción de familias para aplicar dos veces al año (inicio y final del curso). La encuesta debe medir: satisfacción general con el centro, valoración de la comunicación con el tutor y el equipo docente, valoración de la atención administrativa, percepción de la seguridad y el bienestar del alumno en el centro y Net Promoter Score (NPS) del centro. Incluye cómo analizar los resultados y convertirlos en acciones de mejora concretas.

6. Indicadores de calidad del servicio de atención a familias
Define los 6 KPI fundamentales para medir la calidad del sistema de atención a familias: tiempo medio de primera respuesta por canal, tasa de resolución en el primer contacto, índice de satisfacción de familias con la atención recibida, tasa de escalada a dirección, número de quejas formales recibidas por trimestre y NPS del centro. Indica cómo recoger estos datos de forma sistemática y cómo usarlos en la mejora del servicio.

Formato de respuesta: Usa guiones con formato de diálogo cuando lo pida, tablas para los mapas de consultas y KPI, y formato de email o carta para las plantillas de comunicación. Todos los textos deben estar listos para usar o adaptar con mínimos cambios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar sistemas de atención y comunicación con familias en centros K-12',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance en educación K-12: servicios y captación de clientes',
                'description'       => 'Construye tu negocio freelance como profesional educativo independiente: definición de servicios, propuesta de valor y estrategias de captación de centros K-12 como clientes.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocios especializado en ayudar a profesionales de la educación a construir una carrera freelance exitosa, ofreciendo servicios a centros de educación primaria y secundaria (K-12), editoriales educativas, empresas EdTech y familias.

Objetivo principal: Necesito diseñar la estrategia completa de mi negocio freelance como profesional educativo independiente, desde la definición de mi propuesta de valor única hasta la captación de mis primeros clientes y la escalabilidad del negocio.

Contexto personal y profesional:
- Especialidad o perfil: [DOCENTE / PSICOPEDAGOGO / DISEÑADOR INSTRUCCIONAL / FORMADOR / ORIENTADOR]
- Años de experiencia en educación: [AÑOS]
- Nivel educativo de especialización: [PRIMARIA / SECUNDARIA / AMBOS]
- Materias o áreas de especialización: [MATERIAS O COMPETENCIAS CLAVE]
- Objetivo de ingresos mensuales: [CIFRA]
- Tiempo disponible para el freelance (horas semanales): [HORAS]

Tareas que necesito que desarrolles:

1. Definición del nicho y la propuesta de valor única
Ayúdame a identificar mi nicho de mercado más rentable dentro del sector educativo K-12 freelance. Basándote en mi perfil, propón tres combinaciones posibles de especialidad + audiencia objetivo (por ejemplo: "formación en metodologías activas para claustros de secundaria de centros concertados" o "apoyo pedagógico individualizado para alumnos con dislexia en primaria"). Para cada combinación, analiza: tamaño del mercado, competencia actual, disposición a pagar del cliente y alineación con mis fortalezas. Recomienda la opción más prometedora y redacta mi propuesta de valor en dos oraciones.

2. Catálogo de servicios y fijación de precios
Diseña un catálogo de tres niveles de servicio (entrada, medio y premium) adaptado a mi especialidad. Para cada servicio, define: nombre del servicio, descripción para el cliente (sin jerga pedagógica innecesaria), entregables concretos, tiempo de ejecución, precio recomendado con justificación y formato de entrega (presencial, online o híbrido). Incluye también cómo presentar mis tarifas de forma que justifiquen el valor y no generen comparaciones directas con el coste de un empleado fijo.

3. Estrategia de captación de los primeros 5 clientes
Define un plan de acción de 90 días para conseguir mis primeros cinco clientes como freelance educativo. El plan debe incluir: cómo aprovechar mi red de contactos actuales del sector (ex-compañeros, directores, AMPA), cómo presentarme a centros educativos de forma proactiva (email de presentación, llamada de prospección), cómo usar LinkedIn y otras plataformas para generar visibilidad como experto educativo, cómo conseguir mi primer cliente aunque sea con una tarifa introductoria o un proyecto piloto gratuito o de bajo coste, y cómo pedir referidos y testimonios desde el primer proyecto.

4. Modelo de propuesta comercial para centros K-12
Redacta una estructura de propuesta comercial de 5 páginas para presentar a un director de centro educativo. Incluye: portada con propuesta de valor, diagnóstico del problema del centro (personalizable), solución propuesta con descripción de metodología, cronograma de trabajo, inversión y condiciones (con tabla de precios), y sección de credenciales y testimonios. Añade también los errores más frecuentes en propuestas de freelancers educativos que hacen que los centros las rechacen.

5. Gestión de proyectos y relación con el cliente
Define las mejores prácticas para gestionar proyectos educativos como freelance: cómo estructurar el contrato o acuerdo de servicio (qué cláusulas son imprescindibles para protegerme), cómo establecer los hitos y las entregas de forma que el cliente entienda el avance, cómo gestionar los cambios de alcance (scope creep) que son muy frecuentes en el sector educativo, cómo mantener la comunicación activa sin convertirme en esclavo del cliente y cómo cerrar el proyecto correctamente para maximizar la probabilidad de que me vuelvan a contratar.

6. Escalabilidad del negocio freelance educativo
Propón tres estrategias para escalar el negocio una vez que tengo una base estable de clientes: creación de cursos o recursos digitales que generen ingresos pasivos (ebooks, guías, plantillas), formación de otros docentes en mi especialidad (talleres o certificaciones), y transición hacia un modelo de consultoría o asesoría de mayor ticket con centros o editoriales. Para cada estrategia, indica el esfuerzo inicial requerido, el potencial de ingresos y los primeros pasos concretos.

Formato de respuesta: Usa listas estructuradas, tablas para los catálogos de servicios y precios, y formato de texto directo para los correos y propuestas comerciales. El tono debe ser práctico y orientado a la acción, como el de un mentor que ha recorrido este camino.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir un negocio freelance sostenible en el sector educativo K-12',
                'vote_score'        => 41,
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
