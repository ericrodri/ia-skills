<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills641Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing inclusivo para programas de educación especial con IA',
                'description'       => 'Crea campañas de marketing que comuniquen con claridad los servicios de atención a la diversidad y necesidades educativas especiales que ofrece tu centro o empresa EdTech.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en marketing educativo especializado en la comunicación de programas de atención a la diversidad, inclusión educativa y necesidades educativas especiales (NEE). Tienes amplia experiencia en llegar a familias de alumnos con discapacidad, con trastornos del aprendizaje (dislexia, TDAH, TEA) y con altas capacidades.

Objetivo principal: Necesito diseñar una estrategia de marketing completa para dar visibilidad a los servicios de inclusión y diversidad de mi organización educativa, conectando de forma auténtica con las familias que buscan apoyo especializado para sus hijos.

Contexto de la organización:
- Tipo de organización: [Centro educativo / Empresa EdTech / Plataforma de apoyo escolar]
- Servicios de inclusión que ofrece: [ADAPTACIONES CURRICULARES, APOYO PSICOPEDAGÓGICO, TECNOLOGÍA ASISTIVA, ETC.]
- Alumnado objetivo: [ALUMNOS CON NEE / ALTAS CAPACIDADES / AMBOS]
- Zona geográfica: [CIUDAD O REGIÓN]
- Presupuesto de marketing disponible: [PRESUPUESTO]

Tareas que necesito que desarrolles:

1. Análisis del público objetivo y sus necesidades de información
Describe en detalle los tres perfiles de familias que buscan servicios de educación inclusiva: familias de alumnos con diagnóstico reciente (desorientadas y con urgencia informativa), familias con diagnóstico consolidado (en búsqueda del mejor recurso disponible) y familias que sospechan dificultades pero aún no tienen diagnóstico (inseguras y con miedo al estigma). Para cada perfil indica: qué palabras clave buscan en Google, qué canales digitales usan, qué emociones predominan en su búsqueda y qué tipo de contenido les genera confianza.

2. Mensajes clave y tono de comunicación para la inclusión educativa
Define el tono de comunicación adecuado para hablar de necesidades educativas especiales sin caer en el paternalismo, la lástima ni el lenguaje técnico inaccesible. Proporciona cinco mensajes clave que transmitan propuesta de valor de forma empática, centrada en el alumno como persona y en el desarrollo de sus capacidades. Incluye ejemplos de formulaciones que deben evitarse y sus alternativas inclusivas.

3. Plan de contenidos en redes sociales centrado en la inclusión
Diseña un calendario editorial de cuatro semanas para Instagram, Facebook y LinkedIn. Para cada publicación indica: plataforma, tipo de contenido (vídeo corto, carrusel, historia, texto), tema (testimonio de familia, explicación de metodología, recurso gratuito, dato de impacto, historia de éxito de un alumno), copy sugerido con llamada a la acción y consideraciones de accesibilidad del propio contenido (subtítulos en vídeos, descripciones alternativas de imágenes, contraste suficiente).

4. Email de bienvenida para familias que solicitan información
Redacta un email de bienvenida de máximo 350 palabras para familias que han pedido información sobre los servicios de inclusión. El email debe: transmitir calidez y comprensión desde el primer párrafo, explicar en lenguaje sencillo qué hace la organización y cómo ayuda, describir el proceso de incorporación paso a paso para reducir la ansiedad de la familia y incluir una llamada a la acción clara para concertar una primera entrevista de valoración sin compromiso.

5. Estrategia de posicionamiento SEO para búsquedas de educación especial
Lista las 20 palabras clave más relevantes para posicionar un servicio de educación inclusiva en búsqueda orgánica. Clasifícalas por intención de búsqueda (informacional, de consideración y transaccional), nivel de competencia estimado y posibilidad de contenido que las responda. Propón una estructura de secciones para la página de inicio de los servicios de inclusión que incorpore estas palabras clave de forma natural.

6. Métricas para medir el impacto de la comunicación inclusiva
Define seis indicadores de éxito de la estrategia de marketing: alcance de publicaciones sobre inclusión, tasa de conversión de visita a solicitud de información, coste por familia captada, satisfacción de familias con la información recibida (encuesta post-contacto), número de testimonios y casos de éxito generados y tiempo medio desde el primer contacto hasta la matriculación.

Formato de respuesta: Usa encabezados claros para cada sección. Cuando redactes copies, asegúrate de que usan lenguaje de primera persona plural (nosotros) o de segunda persona directa (tú, tu hijo). Al final, añade una nota sobre ética en la comunicación de servicios para personas con discapacidad y las recomendaciones del Real Patronato sobre Discapacidad sobre el lenguaje correcto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar campañas de marketing que comuniquen servicios de educación inclusiva a familias de alumnos con NEE',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plataforma de adaptaciones curriculares accesibles con IA',
                'description'       => 'Diseña la arquitectura técnica de una herramienta digital que genere adaptaciones curriculares personalizadas para alumnos con necesidades educativas especiales, siguiendo los principios del Diseño Universal para el Aprendizaje.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en tecnología educativa accesible e inclusiva, con experiencia en el diseño de sistemas que aplican los principios del Diseño Universal para el Aprendizaje (UDL) y que cumplen los estándares de accesibilidad WCAG 2.1 AA y la normativa ATAG 2.0 para herramientas de autoría accesibles.

Objetivo principal: Necesito definir la arquitectura técnica y los requisitos funcionales de una plataforma web que permita a los docentes generar, gestionar y compartir adaptaciones curriculares significativas y no significativas para alumnos con necesidades educativas especiales, con apoyo de inteligencia artificial para personalizar los materiales.

Contexto del proyecto:
- Usuarios principales: [DOCENTES, ORIENTADORES, EQUIPOS DE ATENCIÓN A LA DIVERSIDAD]
- Número de centros y alumnos estimados: [NÚMERO]
- Integraciones necesarias: [LMS EXISTENTE, PLATAFORMA DE GESTIÓN ACADÉMICA]
- Presupuesto de desarrollo: [PRESUPUESTO]
- Plazo de entrega del primer prototipo funcional: [MESES]

Tareas que necesito que desarrolles:

1. Requisitos funcionales priorizados por perfiles de usuario
Lista y prioriza los requisitos funcionales de la plataforma usando el método MoSCoW. Organiza los requisitos por perfil: docente tutor (creación y edición de adaptaciones, seguimiento del alumno), orientador o psicopedagogo (diagnóstico inicial, supervisión de adaptaciones, informes), equipo directivo (visión global del centro, reporting de inclusión) y familia (acceso a las adaptaciones aplicadas a su hijo, comunicación con el tutor). Indica para cada requisito si la IA puede automatizarlo parcial o totalmente.

2. Arquitectura técnica y módulos principales
Propón la arquitectura de la plataforma detallando los módulos principales: gestión de perfiles de alumno con necesidades educativas, banco de recursos adaptados por materia y nivel, motor de generación de adaptaciones con IA (describir qué modelo y qué técnica de prompting sería más adecuada), módulo de seguimiento del progreso del alumno y panel de reporting para el equipo de atención a la diversidad. Para cada módulo indica las tecnologías recomendadas y las dependencias entre módulos.

3. Modelo de datos para perfiles de diversidad
Define el modelo de datos para representar el perfil educativo de un alumno con necesidades especiales: datos de identificación y diagnóstico (con consideraciones RGPD para datos de salud), tipo de necesidad educativa (motriz, sensorial, cognitiva, conductual, emocional, altas capacidades), adaptaciones vigentes por materia y curso, historial de evaluaciones y ajustes, y recursos de apoyo asignados (logopeda, PT, AL, monitor de apoyo). Incluye las relaciones entre entidades y los campos obligatorios versus opcionales.

4. Motor de generación de adaptaciones con IA
Describe el flujo técnico para generar automáticamente una propuesta de adaptación curricular: entrada del docente (objetivos de la unidad, nivel curricular del alumno, tipo de necesidad), procesamiento con IA (qué instrucciones daría al modelo, qué estructura tendría la salida), validación y edición por parte del docente y almacenamiento versionado de la adaptación. Incluye cómo garantizar que las sugerencias de la IA siguen los principios UDL de múltiples medios de representación, acción y expresión, y motivación.

5. Accesibilidad técnica de la propia plataforma
Define la lista de requisitos de accesibilidad que debe cumplir la plataforma para que docentes con discapacidad también puedan usarla: compatibilidad con lectores de pantalla (NVDA, JAWS, VoiceOver), navegación completa por teclado, contraste de color mínimo 4.5:1 para texto normal y 3:1 para texto grande, compatibilidad con ampliación hasta 200% sin pérdida de contenido y formularios con etiquetas y mensajes de error accesibles. Proporciona una checklist de verificación de accesibilidad para cada sprint de desarrollo.

6. Plan de pruebas con usuarios con diversidad funcional
Define una estrategia de pruebas de usabilidad que incluya a usuarios con diversidad funcional: cómo reclutar docentes con discapacidad visual, motriz o cognitiva para los tests, qué tareas incluir en las sesiones de prueba, cómo documentar las barreras encontradas y cómo priorizarlas en el backlog. Incluye también cómo involucrar a familias de alumnos con NEE en las fases de validación del producto.

Formato de respuesta: Usa secciones bien delimitadas. Para el modelo de datos, usa un esquema de entidades y atributos. Para la arquitectura, describe cada capa con sus responsabilidades. Incluye referencias a los estándares y marcos normativos aplicables (WCAG, ATAG, UDL, LOE, LOMLOE).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar plataformas técnicas accesibles para la gestión de adaptaciones curriculares con IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de materiales didácticos accesibles con principios UDL',
                'description'       => 'Crea materiales educativos que sigan el Diseño Universal para el Aprendizaje (UDL) para llegar a todos los alumnos, incluidos aquellos con necesidades educativas especiales o diversidad funcional.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador instruccional especializado en accesibilidad educativa y Diseño Universal para el Aprendizaje (UDL por sus siglas en inglés). Tienes experiencia en la creación de materiales didácticos que sean accesibles y útiles para alumnos con una amplia variedad de perfiles: dislexia, TDAH, trastorno del espectro autista (TEA), discapacidad visual, discapacidad auditiva, parálisis cerebral y altas capacidades.

Objetivo principal: Necesito diseñar un conjunto de materiales didácticos para una unidad didáctica concreta aplicando los tres principios del UDL: múltiples medios de representación, múltiples medios de acción y expresión, y múltiples medios de implicación y motivación.

Contexto de la unidad didáctica:
- Materia y nivel educativo: [MATERIA Y CURSO]
- Contenido específico de la unidad: [TEMA CONCRETO]
- Número de alumnos en el aula: [NÚMERO]
- Perfiles de diversidad presentes en el aula: [ALUMNOS CON NEE IDENTIFICADOS]
- Recursos tecnológicos disponibles: [TABLETS, ORDENADORES, PIZARRA DIGITAL, ETC.]
- Duración de la unidad: [NÚMERO DE SESIONES]

Tareas que necesito que desarrolles:

1. Análisis de barreras de aprendizaje en la unidad
Antes de diseñar los materiales, identifica las posibles barreras de aprendizaje que pueden encontrar distintos perfiles de alumnos en esta unidad. Para cada barrera (barrera perceptiva, de lenguaje y símbolos, de comprensión, de acción física, de expresión, de función ejecutiva, de interés y de autorregulación) describe qué tipo de alumno la experimenta y qué solución de diseño la elimina.

2. Versiones múltiples del mismo contenido según el principio de representación
Para el contenido central de la unidad, diseña tres versiones del mismo material: versión visual (infografía, mapa conceptual o esquema), versión auditiva o verbal (guion de explicación oral o pódcast de 5 minutos) y versión manipulativa o kinestésica (actividad práctica o simulación). Para cada versión, indica los recursos de diseño necesarios, las herramientas digitales recomendadas (gratuitas o de bajo coste) y cómo combinarlas en el aula ordinaria.

3. Actividades con múltiples opciones de expresión
Diseña cinco actividades de evaluación formativa para la unidad que permitan al alumno demostrar su comprensión de diferentes formas: respuesta escrita tradicional, presentación oral o grabación de vídeo, creación de un producto visual (mapa, póster, cómic), actividad práctica o proyecto aplicado y respuesta mediante herramientas de comunicación aumentativa y alternativa (CAA) para alumnos que la necesiten. Para cada actividad, indica el tiempo estimado, los materiales necesarios y los criterios de evaluación comunes a todas las modalidades.

4. Estrategias de motivación e implicación para alumnos con NEE
Define diez estrategias concretas para mantener la motivación e implicación de los alumnos con necesidades educativas especiales durante la unidad. Las estrategias deben cubrir: cómo hacer relevante el contenido para distintos intereses, cómo usar la tecnología como puente de motivación, cómo gestionar el nivel de desafío para evitar la frustración y el aburrimiento, cómo fomentar la autonomía y la autoevaluación y cómo crear un entorno de aula psicológicamente seguro para la diversidad.

5. Guía de adaptación de materiales para necesidades específicas
Para los tres perfiles de NEE más frecuentes en el aula (dislexia, TDAH y TEA), proporciona una guía de adaptación del material base de la unidad: cambios tipográficos y de formato para dislexia (fuente, interlineado, columnas, uso del color), adaptaciones de estructura y brevedad para TDAH (instrucciones cortas, recordatorios visuales, fragmentación de tareas) y adaptaciones de predictibilidad y literalidad para TEA (anticipación de cambios, eliminación de ironía y metáforas, rutinas visuales). Incluye ejemplos concretos aplicados al contenido de esta unidad.

6. Checklist de verificación UDL antes de usar el material en el aula
Proporciona una lista de 20 preguntas que el docente debe hacerse antes de usar cualquier material en un aula inclusiva: ¿puede un alumno con baja visión acceder al contenido?, ¿tienen todos los vídeos subtítulos?, ¿están las instrucciones escritas en lectura fácil?, ¿hay una alternativa para alumnos que no pueden escribir?, y otras 16 preguntas igual de concretas. Para cada pregunta, añade la acción correctora si la respuesta es negativa.

Formato de respuesta: Usa encabezados para cada sección. Cuando des ejemplos de materiales adaptados, usa fragmentos concretos del contenido de la unidad para ilustrar el antes y el después de la adaptación. Al final, añade un listado de herramientas digitales gratuitas recomendadas para crear materiales accesibles (procesadores de texto, editores de infografías, generadores de lectura fácil, etc.).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear materiales didácticos accesibles aplicando el Diseño Universal para el Aprendizaje en aulas inclusivas',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta de soluciones de tecnología asistiva a centros inclusivos',
                'description'       => 'Desarrolla estrategias de venta consultiva para tecnología asistiva y herramientas de accesibilidad educativa dirigidas a coordinadores de inclusión y equipos directivos de centros con alumnado con NEE.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de ventas especializado en tecnología asistiva y soluciones de accesibilidad educativa, con experiencia en la venta a centros de educación inclusiva, equipos de orientación y coordinadores de atención a la diversidad. Conoces en profundidad productos como software de lectura de pantalla, sistemas de comunicación aumentativa y alternativa (CAA), aplicaciones de texto a voz, herramientas de escritura predictiva, plataformas de adaptación de materiales con IA y dispositivos de apoyo para alumnos con discapacidad motriz.

Objetivo principal: Necesito preparar una estrategia de venta consultiva completa para llevar mi solución de tecnología asistiva o accesibilidad educativa a centros con programas de educación inclusiva, desde la identificación del cliente ideal hasta el cierre y la renovación.

Contexto de la solución que vendo:
- Nombre y descripción del producto o servicio: [PRODUCTO]
- Precio o modelo de licencia: [PRECIO]
- Tipo de necesidades educativas a las que da respuesta: [NEE ESPECÍFICAS]
- Evidencia de impacto disponible: [ESTUDIOS, CASOS DE ÉXITO, REFERENCIAS]
- Zona geográfica objetivo: [REGIÓN O PAÍS]

Tareas que necesito que desarrolles:

1. Perfil del comprador en centros de educación inclusiva
Describe los decisores clave en un centro con programa de atención a la diversidad: coordinador o coordinadora de inclusión (criterios pedagógicos y de eficacia), orientador o orientadora escolar (necesidades del alumnado con diagnóstico clínico), director o directora (presupuesto y visión estratégica del centro inclusivo), responsable de tecnología o TIC (criterios técnicos de integración y soporte) y responsable de administración o secretaría (proceso de compra y justificación del gasto). Para cada perfil indica sus prioridades, sus objeciones más frecuentes y el argumento de valor más efectivo.

2. Proceso de prospección de centros con programa de inclusión
Define un proceso de prospección de tres fases para identificar y contactar centros con alta probabilidad de necesitar tu solución: cómo identificar centros con programas de atención a la diversidad consolidados (fuentes de datos, señales en la web del centro, convocatorias de subvenciones públicas para inclusión), cómo hacer una investigación previa antes de contactar (ratio de alumnos con NEE, recursos actuales, proyectos europeos de inclusión), y cómo personalizar el primer contacto para demostrar que conoces su realidad.

3. Guion de primera reunión con el coordinador de inclusión
Redacta un guion de reunión de 45 minutos con el coordinador o coordinadora de inclusión del centro. El guion debe incluir: apertura que establezca credibilidad (referencia a centros similares que ya usan la solución), bloque de diagnóstico con ocho preguntas sobre la situación actual de atención a la diversidad en el centro, presentación de la solución centrada en el impacto sobre el alumno con NEE, demostración rápida de la herramienta adaptada a un perfil de alumno real del centro y siguiente paso concreto para avanzar en el proceso.

4. Gestión de objeciones específicas del sector de inclusión educativa
Para cada objeción, proporciona la técnica de respuesta y un ejemplo de diálogo concreto: "No tenemos presupuesto específico para tecnología asistiva" (solución: vincular a subvenciones disponibles), "Los docentes no van a saber cómo usar esta herramienta con los alumnos" (solución: plan de formación incluido), "Ya usamos soluciones gratuitas que funcionan bien" (solución: análisis comparativo de funcionalidades y tiempo de docente liberado), "Necesitamos justificar la compra ante la administración educativa" (solución: informe de evidencia de impacto y normativa de referencia) y "El alumno con NEE ya tiene su propio dispositivo de apoyo" (solución: complementariedad e integración con el entorno escolar).

5. Propuesta económica y justificación del ROI en inclusión
Explica cómo construir una propuesta económica que justifique la inversión en tecnología asistiva ante un equipo directivo con restricciones presupuestarias: cómo calcular el coste por alumno con NEE beneficiado, cómo comparar con el coste de horas de apoyo docente o de PT que la herramienta puede optimizar, cómo incorporar datos de mejora de resultados académicos y de autonomía del alumno y cómo presentar las fuentes de financiación disponibles (subvenciones del Ministerio, fondos europeos, programas de responsabilidad social de empresas).

6. Plan de fidelización y renovación de licencias en centros inclusivos
Define una estrategia de customer success para centros de educación inclusiva: onboarding de docentes y orientadores en las primeras cuatro semanas, revisión trimestral del uso y del impacto en los alumnos con NEE, co-creación de casos de éxito con el coordinador de inclusión para usar como referencia comercial, proceso de ampliación de licencias a medida que el centro crece o aumenta el número de alumnos atendidos y estrategia de renovación anual con demostración de valor medible.

Formato de respuesta: Usa tablas para los perfiles de compradores y la gestión de objeciones. Usa formato de guion con turnos de palabra para la reunión con el coordinador. Incluye ejemplos de datos reales o estimados para ilustrar el cálculo del ROI.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparar estrategias de venta consultiva de tecnología asistiva a centros de educación inclusiva',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto EdTech para diversidad e inclusión: diseño con UDL',
                'description'       => 'Define la estrategia de producto y el roadmap de una herramienta EdTech orientada a la inclusión educativa y la atención a la diversidad, aplicando los principios del Diseño Universal para el Aprendizaje desde la fase de diseño.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager especializado en tecnología educativa accesible e inclusiva, con experiencia en el diseño de productos digitales para alumnos con necesidades educativas especiales, docentes de educación inclusiva y equipos de orientación escolar. Conoces los principios del Diseño Universal para el Aprendizaje (UDL), los estándares de accesibilidad WCAG 2.1 y la normativa educativa española sobre atención a la diversidad (LOMLOE, Real Decreto de Ordenación de la Atención a la Diversidad).

Objetivo principal: Necesito desarrollar la estrategia de producto y el roadmap para una herramienta EdTech centrada en la inclusión educativa, asegurando que los principios de accesibilidad y UDL son pilares de la propuesta de valor desde el primer día, no añadidos posteriores.

Contexto del producto:
- Estado actual del producto: [IDEA / MVP / PRODUCTO EN PRODUCCIÓN]
- Usuarios principales: [ALUMNOS CON NEE / DOCENTES / ORIENTADORES / FAMILIAS]
- Problema central que resuelve: [DESCRIBIR EL PROBLEMA]
- Métricas actuales si las hay: [USUARIOS ACTIVOS, NPS, RETENCIÓN]
- Restricciones del equipo: [TAMAÑO DEL EQUIPO, PERFILES, PRESUPUESTO]

Tareas que necesito que desarrolles:

1. Marco de propuesta de valor para un producto de inclusión educativa
Define la propuesta de valor única del producto diferenciando tres niveles: propuesta funcional (qué hace el producto de forma concreta), propuesta de resultado (qué cambia en la vida del alumno con NEE o del docente gracias al producto) y propuesta de misión (por qué existe este producto en el mundo y cómo contribuye a una educación más justa). Identifica los tres diferenciadores competitivos más poderosos frente a soluciones genéricas de accesibilidad o EdTech general.

2. Investigación de usuarios con diversidad funcional y NEE
Diseña un protocolo de investigación de usuarios que sea él mismo inclusivo y accesible: cómo reclutar alumnos con distintos perfiles de NEE para participar en tests de usabilidad (consideraciones éticas, consentimiento de familias, accesibilidad del proceso de investigación), qué métodos de investigación usar con usuarios con comunicación no verbal o limitaciones cognitivas (observación directa, shadowing, herramientas de CAA durante la sesión), y cómo documentar y sintetizar los hallazgos para que guíen las decisiones de diseño de producto.

3. Roadmap de producto con perspectiva de accesibilidad e inclusión
Propón un roadmap de cuatro trimestres que integre la accesibilidad y la inclusión como requisito en todas las iniciativas, no como iniciativas separadas. Para cada trimestre, define las tres o cuatro iniciativas principales con su impacto esperado en alumnos con NEE, el criterio de accesibilidad asociado (qué barrera elimina) y las métricas de éxito inclusivas (no solo métricas de uso general). Incluye al menos una iniciativa por trimestre específicamente orientada a ampliar la cobertura de necesidades educativas atendidas.

4. Definición de criterios de aceptación con perspectiva UDL
Para las tres funcionalidades más prioritarias del roadmap, escribe los criterios de aceptación aplicando el marco UDL. Para cada funcionalidad, define criterios de aceptación desde los tres principios: criterios de representación (¿puede el alumno acceder al contenido de múltiples formas?), criterios de acción y expresión (¿puede el alumno interactuar y demostrar su aprendizaje de múltiples formas?) y criterios de implicación (¿tiene el alumno opciones de motivación y autorregulación?). Incluye también los criterios técnicos de accesibilidad obligatorios (WCAG 2.1 AA).

5. Métricas de éxito inclusivas para un producto EdTech
Define el cuadro de mando del producto con indicadores que vayan más allá del uso general: tasa de adopción diferenciada por perfil de NEE, mejora en indicadores de autonomía del alumno medida antes y después, tiempo de docente liberado de tareas de adaptación manual, satisfacción de orientadores con la profundidad del soporte al diagnóstico, NPS diferenciado por perfil de usuario y tasa de retención de centros con alta concentración de alumnado con NEE.

6. Estrategia de go-to-market centrada en centros y equipos de inclusión
Define la estrategia de lanzamiento del producto enfocada en los primeros centros de referencia en inclusión educativa: cómo identificar centros pioneros en inclusión para el programa piloto, cómo diseñar el proceso de onboarding para equipos de orientación, cómo construir evidencia de impacto que acelere la adopción por otros centros y cómo posicionar el producto en los eventos y comunidades de práctica de educación especial e inclusiva.

Formato de respuesta: Usa tablas para el roadmap y los criterios de aceptación. Emplea listas estructuradas para los protocolos de investigación. Usa lenguaje que pueda compartirse con equipos de diseño, ingeniería y con los centros educativos socios del desarrollo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar estrategias de producto EdTech inclusivo con principios UDL y accesibilidad desde el origen',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Selección y formación de docentes especializados en NEE con IA',
                'description'       => 'Diseña procesos de selección, onboarding y desarrollo profesional para docentes de educación especial, maestros de apoyo (PT, AL) y orientadores en centros inclusivos.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora de recursos humanos especializado en la gestión del talento en centros de educación inclusiva, con amplia experiencia en la selección y desarrollo de docentes de educación especial, maestros de pedagogía terapéutica (PT), maestros de audición y lenguaje (AL), orientadores escolares y monitores de apoyo a la integración.

Objetivo principal: Necesito diseñar un sistema integral de gestión del talento especializado en perfiles de atención a la diversidad para un centro o red de centros con un fuerte compromiso con la inclusión educativa.

Contexto del centro o red de centros:
- Tipo y número de centros: [NÚMERO Y TIPO: público, concertado, privado]
- Alumnado con NEE atendido: [NÚMERO Y TIPOS DE NECESIDADES]
- Perfiles docentes especializados que necesitan contratar: [PT, AL, ORIENTADORES, OTROS]
- Principales retos actuales: [ESCASEZ DE PERFILES, ROTACIÓN, FORMACIÓN CONTINUA, ETC.]
- Modelo de inclusión del centro: [AULA ORDINARIA CON APOYO / AULA ESPECÍFICA / MODELO HÍBRIDO]

Tareas que necesito que desarrolles:

1. Perfil competencial del docente especialista en inclusión y NEE
Define el mapa de competencias del docente especializado en atención a la diversidad del siglo XXI. Organiza las competencias en cuatro bloques: competencias técnico-pedagógicas (dominio de metodologías de enseñanza para distintas NEE, conocimiento de la normativa, capacidad de elaborar adaptaciones curriculares), competencias digitales y tecnológicas (uso de tecnología asistiva, herramientas de CAA, plataformas de seguimiento inclusivo), competencias de trabajo en equipo y coordinación (co-docencia, trabajo con el equipo de orientación, coordinación con servicios externos) y competencias emocionales y de resiliencia (manejo de la frustración, autocuidado, gestión de situaciones de alta complejidad conductual).

2. Proceso de selección para perfiles de educación especial
Diseña un proceso de selección de cuatro fases para contratar a un maestro de pedagogía terapéutica (PT). Incluye: descripción del puesto que atraiga a profesionales vocacionales (no solo funciones, sino misión y ambiente del aula), entrevista de diagnóstico con ocho preguntas conductuales específicas para el perfil PT (cómo ha manejado situaciones de crisis conductual, cómo colabora con el tutor ordinario, cómo adapta materiales para distintos perfiles de NEE), prueba práctica de 30 minutos con un caso real anonimizado de alumno con NEE y valoración del encaje con el modelo de inclusión del centro.

3. Plan de onboarding para docentes especializados en atención a la diversidad
Diseña un plan de acogida de 90 días para un nuevo maestro PT o AL. El plan debe incluir: semana previa al inicio (revisión de los expedientes de los alumnos asignados, reunión con el orientador y con los tutores ordinarios, conocer los recursos materiales disponibles), primer mes (acompañamiento del coordinador de inclusión, observación de las dinámicas de aula ordinaria con los alumnos con NEE, primeras reuniones con las familias), segundo mes (autonomía progresiva, revisión de las programaciones individualizadas en marcha) y tercer mes (evaluación del período de prueba, definición del plan de desarrollo individual del docente para el curso).

4. Plan de formación continua en inclusión educativa y nuevas metodologías
Propón un plan de formación continua anual para el equipo de atención a la diversidad que contemple: formación en nuevas investigaciones sobre NEE específicas (TEA nivel 1, dislexia severa, discapacidad intelectual leve), formación en metodologías inclusivas innovadoras (co-docencia, diseño de entornos de aprendizaje accesibles), formación en tecnología asistiva actualizada y formación en bienestar docente y prevención del síndrome de burnout en perfiles de alta demanda emocional. Indica para cada área el formato recomendado, los proveedores de referencia y las horas de formación sugeridas.

5. Gestión del bienestar del docente especialista en NEE
Define un protocolo de bienestar específico para los perfiles de atención a la diversidad, que son especialmente vulnerables al agotamiento emocional por la alta complejidad del trabajo con alumnado con necesidades graves. El protocolo debe incluir: indicadores de alerta temprana de burnout en este perfil (señales conductuales y emocionales específicas), programa de supervisión pedagógica con un profesional externo, iniciativas de reconocimiento y visibilidad del trabajo de inclusión dentro del claustro y mecanismos de apoyo entre iguales (grupos de reflexión, comunidades de práctica de docentes especialistas).

6. Indicadores de gestión del talento en atención a la diversidad
Establece el cuadro de mando de RRHH específico para perfiles de inclusión y educación especial con seis métricas clave: tasa de rotación voluntaria de docentes PT y AL, tiempo medio de cobertura de vacantes especializadas, satisfacción laboral de los docentes de atención a la diversidad (eNPS específico), tasa de completación del plan de formación especializada, índice de incidencias emocionales o conductuales reportadas y porcentaje de docentes especialistas con plan de desarrollo activo.

Formato de respuesta: Usa tablas para el mapa de competencias y el cuadro de mando. Usa formato de checklist para los planes de onboarding y las rúbricas de evaluación de la prueba práctica. Incluye ejemplos de preguntas conductuales con la respuesta modelo esperada (método STAR).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestionar el talento de docentes especializados en atención a la diversidad y educación especial',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financiación y presupuesto para programas de inclusión educativa',
                'description'       => 'Gestiona la financiación, el presupuesto y la justificación económica de programas de atención a la diversidad y necesidades educativas especiales en centros educativos.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora financiero especializado en la gestión económica de programas de educación inclusiva y atención a la diversidad en centros educativos, con experiencia en la identificación de fuentes de financiación pública y privada, la presupuestación de servicios especializados y la justificación económica de inversiones en accesibilidad y tecnología asistiva.

Objetivo principal: Necesito construir un modelo financiero completo para el programa de atención a la diversidad de mi centro o red de centros, que permita garantizar su sostenibilidad económica, optimizar el uso de los recursos disponibles e identificar nuevas fuentes de financiación.

Contexto financiero del programa de inclusión:
- Tipo de centro y modelo de financiación: [PÚBLICO / CONCERTADO / PRIVADO]
- Número de alumnos con NEE atendidos: [NÚMERO Y TIPOS]
- Equipo actual de atención a la diversidad: [PERFILES Y DEDICACIÓN]
- Gasto actual en recursos de inclusión: [APROXIMADO ANUAL]
- Fuentes de financiación actuales: [ADMINISTRACIÓN EDUCATIVA, CUOTAS, SUBVENCIONES]

Tareas que necesito que desarrolles:

1. Estructura del presupuesto del programa de atención a la diversidad
Diseña la estructura presupuestaria completa del programa de inclusión educativa con las siguientes partidas: personal especializado (PT, AL, orientadores, monitores de apoyo), materiales y recursos educativos adaptados, tecnología asistiva y licencias de software accesible, formación del claustro en inclusión, servicios externos especializados (logopedia externalizada, equipos de valoración, servicios de transporte adaptado) y gastos de infraestructura accesible (adaptaciones del entorno físico, señalética inclusiva). Para cada partida, indica los drivers de coste principales y cómo proyectarlos en función del número de alumnos con NEE.

2. Fuentes de financiación pública para programas de inclusión
Elabora un mapa completo de las fuentes de financiación pública disponibles para programas de atención a la diversidad en España: subvenciones del Ministerio de Educación para programas de inclusión, ayudas de las consejerías de educación de las comunidades autónomas (menciona las más relevantes por comunidad), convocatorias de fondos europeos aplicables a la inclusión educativa (FSE+, Erasmus+, programas del European Disability Forum), subvenciones del IMSERSO y de fundaciones de discapacidad (ONCE, Fundación Vodafone, Fundación Orange). Para cada fuente, indica el tipo de gasto financiable, el plazo de convocatoria habitual y los requisitos de justificación.

3. Modelo de coste por alumno con NEE
Explica cómo calcular el coste total anual de atención a un alumno con necesidades educativas especiales, diferenciando por tipo de necesidad: alumno con discapacidad intelectual leve en aula ordinaria con apoyo de PT, alumno con TEA en programa de integración, alumno con discapacidad auditiva con intérprete de lengua de signos y alumno con discapacidad motriz con monitor de apoyo. Para cada perfil, desglosa el coste directo de personal, el coste de materiales y tecnología asistiva y el coste indirecto de coordinación y gestión.

4. Justificación económica de inversiones en tecnología asistiva e inclusión
Proporciona una metodología para justificar ante el consejo escolar o la administración educativa la inversión en tecnología asistiva, software de accesibilidad o programas de formación en inclusión. La metodología debe incluir: análisis coste-beneficio adaptado al contexto no lucrativo educativo (beneficios cuantificables como reducción de horas de apoyo docente y beneficios no cuantificables como mejora de la autonomía del alumno), análisis del riesgo de no invertir (coste reputacional, riesgo legal de incumplimiento normativo de accesibilidad) y criterios de priorización de inversiones cuando el presupuesto es limitado.

5. Control presupuestario y seguimiento de las subvenciones de inclusión
Define el proceso de control presupuestario específico para programas de atención a la diversidad financiados con subvenciones: cómo organizar la documentación justificativa de los gastos, los plazos de justificación ante la administración, los errores más frecuentes en la justificación de subvenciones de inclusión y cómo gestionarlos, y cómo asegurar la trazabilidad del gasto cuando hay múltiples fuentes de financiación para el mismo programa.

6. Reporting financiero de inclusión para el consejo escolar y las familias
Diseña la estructura de un informe económico anual del programa de inclusión educativa, pensado tanto para el consejo escolar como para las familias de alumnos con NEE. El informe debe mostrar de forma transparente: cuánto invierte el centro en atención a la diversidad, cuánto se recibe en subvenciones y ayudas externas, qué impacto tiene la inversión en los alumnos con NEE y cuál es el plan de sostenibilidad del programa para los próximos tres cursos.

Formato de respuesta: Usa tablas para la estructura presupuestaria, el mapa de subvenciones y el modelo de coste por alumno. Incluye ejemplos numéricos ilustrativos con datos ficticios pero realistas. Añade referencias a la normativa de accesibilidad y atención a la diversidad que refuerza la obligación legal de estas inversiones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Gestionar la financiación y el presupuesto de programas de inclusión educativa y atención a la diversidad',
                'vote_score'        => 25,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal de la educación inclusiva y derechos del alumno con NEE',
                'description'       => 'Comprende y aplica el marco normativo de la inclusión educativa en España: derechos del alumnado con necesidades educativas especiales, obligaciones del centro y garantías legales para las familias.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado o asesora jurídica especializado en derecho educativo y en los derechos de las personas con discapacidad aplicados al ámbito escolar, con experiencia en el asesoramiento a centros educativos, equipos directivos, familias de alumnos con necesidades educativas especiales y organizaciones de defensa de los derechos de las personas con discapacidad.

Objetivo principal: Necesito elaborar una guía jurídica completa sobre el marco legal de la educación inclusiva en España, que cubra los derechos del alumnado con necesidades educativas especiales, las obligaciones legales de los centros educativos y los recursos jurídicos disponibles para las familias cuando esos derechos no se respetan.

Contexto del centro o la familia:
- Tipo de consulta: [CENTRO EDUCATIVO QUE QUIERE CUMPLIR / FAMILIA QUE DEFIENDE DERECHOS / AMBOS]
- Comunidad autónoma: [COMUNIDAD AUTÓNOMA]
- Tipo de necesidad educativa del alumno: [NEE ESPECÍFICA]
- Situación concreta: [DESCRIBIR EL CASO O LA DUDA]

Tareas que necesito que desarrolles:

1. Marco normativo de referencia en España
Elabora un mapa normativo completo de la educación inclusiva en España, ordenado de mayor a menor jerarquía: Convención de la ONU sobre los Derechos de las Personas con Discapacidad (CDPD), artículo 27 de la Constitución Española, Ley General de derechos de las personas con discapacidad y de su inclusión social (LGDPD), Ley Orgánica de Modificación de la LOE (LOMLOE), Real Decreto de ordenación de la atención a la diversidad, normativa autonómica aplicable y circulares e instrucciones de las consejerías de educación. Para cada norma, indica el artículo o artículos más relevantes para la educación inclusiva y el derecho concreto que reconoce.

2. Derechos específicos del alumnado con necesidades educativas especiales
Explica en lenguaje comprensible para las familias los derechos concretos que tiene su hijo o hija con NEE en el sistema educativo español: derecho a la escolarización en el centro más próximo al domicilio, derecho a recibir los apoyos necesarios en el aula ordinaria antes de ser escolarizado en un aula específica, derecho a una evaluación psicopedagógica actualizada, derecho a un plan de atención individualizado o programa de adaptación curricular significativa, derecho a los ajustes razonables en las pruebas de evaluación y en los exámenes externos (EBAU), derecho a la participación de la familia en el proceso de toma de decisiones sobre la escolarización y los apoyos, y derecho a recurrir las decisiones con las que la familia no esté de acuerdo.

3. Obligaciones legales del centro educativo en materia de inclusión
Lista las obligaciones legales que tiene un centro educativo ante un alumno con necesidades educativas especiales: obligación de realizar la evaluación psicopedagógica o solicitarla al servicio de orientación externo, obligación de elaborar el Plan de Atención Individualizado o la Adaptación Curricular, obligación de proveer los recursos personales (PT, AL, monitor de apoyo) que dictamine el equipo de orientación, obligación de adaptar los espacios físicos para garantizar la accesibilidad, obligación de informar a la familia del seguimiento del alumno y de consultar antes de tomar decisiones de escolarización y obligación de no discriminar en ninguna actividad del centro (excursiones, actividades complementarias, eventos).

4. Protocolo de actuación cuando el centro no cumple sus obligaciones de inclusión
Define el itinerario jurídico que debe seguir una familia cuando considera que el centro no está cumpliendo sus obligaciones de inclusión: paso 1 (comunicación formal por escrito al director del centro con plazo de respuesta), paso 2 (reclamación ante la inspección educativa de la comunidad autónoma), paso 3 (reclamación ante el Defensor del Pueblo o el Síndic de Greuges autonómico), paso 4 (denuncia ante el Comité Español de Representantes de Personas con Discapacidad o el CERMI), paso 5 (recurso contencioso-administrativo) y, en casos de vulneración grave, paso 6 (denuncia ante el Comité de la ONU sobre los Derechos de las Personas con Discapacidad). Para cada paso, indica el plazo, el organismo, los documentos necesarios y las probabilidades de éxito.

5. Ajustes razonables y accesibilidad en centros educativos
Explica el concepto de ajuste razonable aplicado a la educación: qué es, qué no es, quién decide si un ajuste es razonable o desproporcionado, cuáles son los ajustes más habituales en el aula (tiempo adicional en exámenes, uso de calculadora, acceso a materiales en formato accesible, presencia de un lector o escribiente), qué ocurre cuando el centro niega un ajuste razonable y cómo diferenciarlo de una adaptación curricular significativa. Incluye también las obligaciones de accesibilidad física del centro derivadas de la normativa de discapacidad.

6. Modelo de escrito de reclamación para familias de alumnos con NEE
Redacta un modelo de escrito formal de reclamación que una familia puede presentar ante la dirección del centro educativo cuando considera que no se están proporcionando los apoyos necesarios a su hijo o hija con NEE. El escrito debe incluir: identificación de las partes, descripción de los hechos, derechos vulnerados con cita de la normativa aplicable, solicitud concreta de medidas y plazo de respuesta esperado. Añade una nota indicando que el modelo debe adaptarse al caso concreto y que no sustituye al asesoramiento jurídico individualizado.

Formato de respuesta: Usa listas numeradas para los pasos del protocolo de actuación. Usa tablas para el mapa normativo. Incluye citas textuales de los artículos más relevantes cuando sean breves. Distingue claramente entre obligaciones legales imperativas y recomendaciones de buenas prácticas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Comprender y aplicar el marco legal de la educación inclusiva y los derechos del alumnado con NEE en España',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención y soporte a familias de alumnos con NEE con IA',
                'description'       => 'Diseña protocolos de atención, comunicación y soporte emocional para familias de alumnos con necesidades educativas especiales, desde el primer contacto hasta el seguimiento continuo.',
                'prompt_content'    => <<<'EOT'
Actúa como un coordinador o coordinadora de atención a las familias de alumnos con necesidades educativas especiales (NEE), con experiencia en la comunicación con familias en situación de alta vulnerabilidad emocional, la gestión de expectativas en el proceso de escolarización inclusiva y la coordinación entre el centro educativo, los servicios de salud externos y los servicios sociales.

Objetivo principal: Necesito diseñar un sistema completo de atención y soporte a las familias de alumnos con NEE que mejore su experiencia desde el primer contacto con el centro, reduzca su ansiedad, facilite su participación en el proceso educativo de su hijo o hija y prevenga conflictos derivados de la falta de comunicación.

Contexto del centro:
- Número de familias de alumnos con NEE: [NÚMERO]
- Tipos de necesidades educativas más frecuentes: [TEA, DISLEXIA, TDAH, DISCAPACIDAD INTELECTUAL, ETC.]
- Canales de comunicación actuales: [EMAIL, APP, REUNIONES, TELÉFONO]
- Personal disponible para atención a familias NEE: [ORIENTADOR, TUTORES, COORDINADOR DE INCLUSIÓN]
- Principales tensiones o conflictos actuales con familias: [DESCRIBIR]

Tareas que necesito que desarrolles:

1. Protocolo de primera acogida para familias de alumnos con NEE
Define el protocolo de atención desde que una familia contacta por primera vez con el centro comunicando que su hijo o hija tiene necesidades educativas especiales. El protocolo debe cubrir: cómo recibir la información inicial con empatía y sin juicios, qué información recopilar en el primer contacto (diagnóstico, servicios externos actuales, expectativas de la familia, historial en otros centros), cómo explicar el proceso de escolarización inclusiva del centro de forma clara y tranquilizadora, y cuál es el siguiente paso concreto para la familia (reunión con el orientador, evaluación psicopedagógica, visita al aula).

2. Comunicación con familias durante la evaluación psicopedagógica
Diseña el flujo de comunicación con la familia durante el proceso de evaluación psicopedagógica: cómo explicar el objetivo y el proceso de la evaluación en lenguaje no técnico, cómo involucrar a la familia como informante clave del proceso, cómo comunicar los resultados de la evaluación (tanto si confirman el diagnóstico como si no), cómo responder a reacciones emocionales intensas (negación, culpa, ira, alivio) y cómo acordar conjuntamente las medidas de atención a poner en marcha. Incluye guiones de diálogo para situaciones de alta tensión emocional.

3. Plantillas de comunicación con familias de alumnos con NEE
Redacta plantillas de comunicación escrita para los momentos más habituales en la relación con estas familias: convocatoria de reunión de seguimiento del plan de atención individualizado (con orden del día incluido), comunicación del inicio de un servicio de apoyo especializado (PT, AL, monitor de apoyo), comunicación de los resultados de la evaluación trimestral del alumno con NEE, respuesta a una queja de la familia sobre la falta de apoyos y comunicación de un incidente conductual que ha afectado al alumno con NEE. Cada plantilla debe tener un tono empático, claro y libre de jerga técnica.

4. Protocolo de gestión de conflictos con familias de alumnos con NEE
Define un protocolo específico para gestionar las situaciones de conflicto más frecuentes con familias de alumnos con NEE: familia que considera insuficientes los apoyos recibidos, familia que solicita un cambio de modalidad de escolarización que el centro no recomienda, familia que acusa a un docente de falta de sensibilidad hacia las necesidades de su hijo o hija y familia que amenaza con acciones legales. Para cada situación, describe el proceso de escalada, los roles de cada persona del centro en la resolución y las técnicas de comunicación no violenta recomendadas.

5. Programa de apoyo y formación para familias de alumnos con NEE
Diseña un programa de apoyo a lo largo del curso escolar para las familias de alumnos con NEE: talleres formativos sobre las necesidades educativas de sus hijos (cómo ayudarles en casa, cómo gestionar la frustración, cómo comunicarse con el centro), grupo de apoyo entre familias facilitado por el orientador o un psicólogo externo, recursos de información curados y accesibles en formato digital (guías, vídeos, podcasts) y sistema de tutorías individuales a demanda con el coordinador de inclusión.

6. Indicadores de calidad del servicio de atención a familias con NEE
Define seis indicadores específicos para medir la calidad de la atención a familias de alumnos con NEE: tiempo medio de respuesta a las consultas de estas familias, índice de satisfacción específico de familias con NEE (encuesta semestral), tasa de conflictos que escalan más allá del nivel de tutor, porcentaje de familias que participan activamente en las reuniones de seguimiento del plan de atención individualizado, número de reclamaciones formales recibidas y NPS de las familias de alumnos con NEE como indicador global de la experiencia.

Formato de respuesta: Usa formato de protocolo con pasos numerados y responsables asignados. Usa formato de diálogo para los guiones de comunicación. Incluye las plantillas escritas completas y listas para adaptar con mínimos cambios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar sistemas de atención y soporte a familias de alumnos con necesidades educativas especiales',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance en educación inclusiva: especialización y captación de clientes',
                'description'       => 'Construye tu negocio freelance como especialista en inclusión educativa, adaptaciones curriculares y Diseño Universal para el Aprendizaje, atendiendo a centros, editoriales y familias.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocios especializado en ayudar a profesionales de la educación especial y la inclusión a construir una carrera freelance rentable y con propósito. Tienes experiencia en el trabajo con logopedas, psicopedagogos, maestros PT y AL, orientadores escolares y diseñadores instruccionales especializados en accesibilidad que quieren trabajar de forma independiente atendiendo a centros educativos, editoriales, empresas EdTech y familias.

Objetivo principal: Necesito diseñar la estrategia completa de mi negocio freelance como especialista en inclusión educativa, desde la definición de mi nicho y propuesta de valor hasta la captación de mis primeros clientes y la escalabilidad del negocio.

Contexto personal y profesional:
- Especialidad dentro de la inclusión educativa: [LOGOPEDA / PSICOPEDAGOGO / PT / AL / ORIENTADOR / DISEÑADOR INSTRUCCIONAL ACCESIBLE / OTRO]
- Años de experiencia en el sector: [AÑOS]
- Tipos de NEE en los que me especializo: [TEA, DISLEXIA, DISCAPACIDAD INTELECTUAL, ETC.]
- Objetivo de ingresos mensuales como freelance: [CIFRA]
- Tiempo disponible para el negocio freelance: [HORAS SEMANALES]

Tareas que necesito que desarrolles:

1. Definición del nicho y la propuesta de valor en inclusión educativa
Ayúdame a identificar mi nicho más rentable y diferenciado dentro del sector de la inclusión educativa freelance. Basándote en mi perfil, propón tres combinaciones de especialidad más audiencia objetivo (por ejemplo: "formación en UDL para claustros de secundaria pública", "diseño de materiales adaptados para editoriales de texto escolar" o "apoyo psicopedagógico individualizado a familias de alumnos con TEA"). Para cada combinación, analiza el tamaño del mercado, el nivel de competencia, la disposición a pagar del cliente, la escalabilidad y la alineación con mis fortalezas. Recomienda la opción más prometedora y redacta mi propuesta de valor en dos oraciones.

2. Catálogo de servicios y tarifas para el especialista en inclusión
Diseña un catálogo de tres niveles de servicio (entrada, medio y premium) adaptado a mi especialidad en inclusión educativa. Para cada servicio, define: nombre y descripción para el cliente sin jerga técnica, entregables concretos, duración del servicio, tarifa recomendada con justificación basada en el valor aportado y formato de entrega (presencial, online, híbrido, materiales entregables). Incluye servicios específicos de alta demanda en el mercado actual: formación de claustros en UDL y NEE, diseño de materiales en lectura fácil, auditorías de accesibilidad de materiales educativos y evaluaciones psicopedagógicas para familias.

3. Estrategia de captación de los primeros clientes como especialista en inclusión
Define un plan de acción de 90 días para conseguir mis primeros cinco clientes como freelance de inclusión educativa. El plan debe incluir: cómo aprovechar mis contactos actuales en el sector (compañeros de centro, orientadores, asociaciones de familias de alumnos con NEE), cómo posicionarme como referente de inclusión en LinkedIn y en grupos de docentes especializados, cómo contactar con editoriales educativas que buscan revisores de accesibilidad de materiales, cómo colaborar con clínicas o gabinetes psicopedagógicos que puedan derivarme clientes y cómo dar mi primera formación de claustro aunque sea a bajo precio para conseguir una referencia y un testimonio.

4. Modelo de propuesta para centros educativos y editoriales
Redacta una estructura de propuesta de cuatro páginas para presentar mis servicios de inclusión a un centro educativo o a una editorial. Incluye: página de portada con propuesta de valor específica para la necesidad detectada, diagnóstico del reto de inclusión del cliente, solución propuesta con descripción de metodología y entregables, y página de credenciales con formación, experiencia y testimonios. Añade los errores más frecuentes en las propuestas de freelancers de educación especial que hacen que los centros y las editoriales las rechacen.

5. Gestión de proyectos de inclusión educativa como freelance
Define las mejores prácticas para gestionar proyectos de inclusión educativa como freelance: cómo estructurar el contrato (cláusulas imprescindibles para servicios de consultoría educativa y para el diseño de materiales adaptados), cómo gestionar los cambios de alcance (muy frecuentes cuando el cliente no tenía claro qué necesitaba exactamente), cómo cobrar a tiempo en el sector educativo (que suele tener procesos administrativos lentos), cómo documentar el impacto del trabajo para usarlo en la siguiente propuesta y cómo mantener la confidencialidad de los datos de los alumnos con NEE conforme al RGPD.

6. Escalabilidad del negocio freelance de inclusión educativa
Propón tres estrategias para escalar el negocio una vez que tengo una base estable de clientes: creación de cursos online sobre UDL, adaptaciones curriculares o NEE específicas que generen ingresos pasivos, desarrollo de materiales educativos adaptados (guías, fichas, plantillas) que pueda vender a docentes y centros, y transición hacia formación a grandes organizaciones (administraciones educativas, editoriales de ámbito nacional, empresas EdTech). Para cada estrategia, indica el esfuerzo inicial, el potencial de ingresos y los primeros pasos concretos.

Formato de respuesta: Usa tablas para el catálogo de servicios y la comparación de opciones de nicho. Usa listas numeradas para el plan de 90 días y la estrategia de escalabilidad. El tono debe ser práctico y orientado a la acción, con ejemplos concretos del sector de la inclusión educativa.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir un negocio freelance rentable como especialista en inclusión educativa y atención a la diversidad',
                'vote_score'        => 38,
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
