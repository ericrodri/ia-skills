<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills453Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Crea cursos de marketing online con IA: de la idea al lanzamiento',
                'description'      => 'Usa IA para diseñar, estructurar y lanzar cursos de marketing digital que eduquen a tu audiencia, generen ingresos pasivos y posicionen tu marca como referente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño instruccional y marketing de contenidos educativos con experiencia en la creación y lanzamiento de cursos online rentables. Tu tarea es ayudarme a convertir mi conocimiento de marketing en un curso digital completo y vendible.

objetivo: diseñar, estructurar y preparar el lanzamiento de un curso online de marketing que genere valor real para los estudiantes, se posicione bien en el mercado y construya un flujo de ingresos sostenible.

tarea 1 — VALIDACIÓN DE LA IDEA DEL CURSO
Confirma que el curso tiene demanda antes de crearlo:
- Identifica el problema específico de marketing que resuelve el curso (no genérico, sino concreto)
- Perfil del estudiante ideal: nivel de experiencia, rol, empresa, pain point principal
- Investigación de demanda: búsquedas en Google, preguntas en Reddit y LinkedIn, cursos existentes en Udemy/Coursera
- Análisis de competencia: ¿qué cursos similares existen? ¿Cuál es su precio, duración y puntuación?
- Propuesta de valor diferenciada: por qué mi curso es mejor, diferente o más específico que los existentes
- Validación mínima: idea de presale, beta con 5-10 alumnos, encuesta a tu audiencia

tarea 2 — DISEÑO INSTRUCCIONAL DEL CURSO
Estructura el contenido de aprendizaje:
- Objetivo de transformación: qué sabe y puede hacer el alumno al terminar que no podía antes
- Módulos y lecciones: esquema completo del curso (módulos grandes + 5-10 lecciones por módulo)
- Secuencia pedagógica: progresión lógica de lo simple a lo complejo, de la teoría a la práctica
- Tipos de contenido: vídeo explicativo, ejercicio práctico, plantilla descargable, quiz, caso de estudio
- Duración total y por lección: equilibrio entre profundidad y retención de atención (lecciones de 5-15 min)
- Resultados por módulo: qué logra el alumno al completar cada sección

tarea 3 — CREACIÓN DE CONTENIDO CON IA
Genera el material del curso de forma eficiente:
- Script de vídeo para cada lección: estructura (gancho + contexto + contenido + acción)
- Diapositivas y visuales: estructura de presentación para cada lección
- Ejercicios y actividades prácticas: tareas que apliquen cada concepto inmediatamente
- Plantillas y recursos descargables: herramientas que el alumno puede usar en su trabajo
- Quizzes de evaluación: 3-5 preguntas por módulo para reforzar el aprendizaje
- Workbook del curso: guía del alumno con todos los ejercicios y espacios de reflexión

tarea 4 — ESTRATEGIA DE LANZAMIENTO
Planifica cómo vender el curso:
- Plataforma de distribución: Teachable, Thinkific, Kajabi, Hotmart, Udemy (pros y contras de cada una)
- Precio y modelo de negocio: pago único, suscripción, cohort con precio premium, bundling
- Página de ventas: estructura persuasiva con headline, promesa, módulos, testimonios, garantía, CTA
- Secuencia de email de lanzamiento: 7-10 emails en 2 semanas (problema → solución → objeciones → urgencia → cierre)
- Estrategia de tráfico: orgánico (contenido, SEO), afiliados, paid (Meta Ads, LinkedIn), webinar de lanzamiento
- Bonos de lanzamiento: qué incluir para incentivar la compra anticipada

tarea 5 — RETENCIÓN Y ESCALADO
Mantén a los alumnos activos y escala el negocio:
- Onboarding del alumno: email de bienvenida, primer paso claro, comunidad de acceso
- Gamificación: certificados, insignias, tablas de clasificación, retos semanales
- Comunidad: foro, grupo de Slack/Discord, calls de preguntas y respuestas en directo
- Upsells y continuación: curso avanzado, programa de mentoría, masterclass adicionales
- Métricas de curso: tasa de compleción, NPS del alumno, conversión a upsell, reseñas

instrucción final: ayúdame a diseñar el curso de marketing digital sobre la especialidad que especifique. Si no la indico, trabaja con un curso de email marketing para emprendedores con un negocio online. Dame el esquema completo, el script de la primera lección y la estructura de la página de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño y lanzamiento de cursos online de marketing digital con IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Aprende programación con IA: plan de estudio personalizado para developers',
                'description'      => 'Diseña con IA un plan de aprendizaje de programación adaptado a tu nivel, tus objetivos y tu tiempo disponible, con recursos curados, proyectos prácticos y evaluaciones de progreso.',
                'prompt_content'   => <<<'EOT'
Eres un mentor de programación con experiencia en diseño de planes de aprendizaje personalizados para developers de todos los niveles. Conoces los recursos más eficientes para aprender a programar, las mejores prácticas pedagógicas en tecnología y cómo mantener la motivación durante el proceso de aprendizaje.

objetivo: crear un plan de estudio de programación completamente personalizado que sea realista, eficiente y práctico, y que lleve al estudiante desde su nivel actual hasta su objetivo profesional o técnico en el menor tiempo posible.

tarea 1 — DIAGNÓSTICO DE NIVEL Y OBJETIVOS
Evalúa el punto de partida y la meta:
- Nivel actual: ¿completamente principiante, bases de un lenguaje, developer junior, o quieres aprender un nuevo stack?
- Lenguajes y tecnologías ya conocidos: qué sé hoy y hasta qué nivel
- Objetivo específico: conseguir primer empleo como developer, hacer transición de stack, construir un proyecto concreto, subir de junior a senior, contribuir a open source
- Tiempo disponible: horas semanales de estudio, fechas límite (entrevistas, lanzamiento de proyecto)
- Estilo de aprendizaje: prefiero vídeo, texto, práctica directa, proyectos guiados, comunidad
- Restricciones: idioma, presupuesto para recursos de pago, acceso a mentors

tarea 2 — DISEÑO DEL PLAN DE ESTUDIO
Estructura la ruta de aprendizaje por fases:
- Fase 1 - Fundamentos (semanas 1-4): conceptos esenciales del lenguaje o tecnología, sintaxis, estructura, primeros programas
- Fase 2 - Construcción (semanas 5-10): proyectos guiados que consoliden los fundamentos, patterns básicos, debugging
- Fase 3 - Profundización (semanas 11-16): temas avanzados, arquitectura, optimización, ecosistema de librerías
- Fase 4 - Proyecto real (semanas 17-20): construcción de un proyecto completo de portfolio, despliegue, documentación
- Hitos de evaluación: qué debo poder hacer al finalizar cada fase para confirmar el progreso
- Flexibilidad: cómo ajustar el plan si voy más rápido o más lento de lo esperado

tarea 3 — RECURSOS DE APRENDIZAJE CURADOS
Selecciona los mejores materiales para cada fase:
- Documentación oficial: siempre la primera referencia para el lenguaje o framework
- Cursos gratuitos: freeCodeCamp, The Odin Project, CS50, MDN, roadmap.sh
- Cursos de pago (si hay presupuesto): Udemy (autores recomendados), Frontend Masters, Egghead, Pluralsight
- Libros esenciales: uno o dos libros de referencia por tecnología, no más
- YouTube: canales específicos para el stack elegido
- Práctica: Exercism, LeetCode (cuándo y cómo), Codewars, proyectos open source para contribuir
- Comunidad: subreddits, Discord servers, grupos de Slack, meetups locales

tarea 4 — PROYECTOS PRÁCTICOS POR NIVEL
Define los proyectos que construir en cada fase:
- Proyecto de validación de fundamentos: algo sencillo pero completo que demuestre que entendí los basics
- Proyecto de portfolio (fase media): un proyecto más ambicioso que pueda mostrar en entrevistas
- Proyecto de portfolio principal (final): el proyecto diferenciador que me haga destacar
Para cada proyecto: descripción, tecnologías a usar, características mínimas y extensiones opcionales para ir más lejos
- Consejos de presentación: cómo documentar el proyecto en GitHub y explicarlo en entrevistas

tarea 5 — HÁBITOS Y GESTIÓN DEL APRENDIZAJE
Construye la rutina de estudio:
- Técnica Pomodoro adaptada a programación: bloques de concentración y descanso activo (leer docs, refactorizar)
- Gestión de la frustración: qué hacer cuando te bloqueas (tiempo límite de bloqueo, cómo pedir ayuda bien)
- Notas y sistema de referencia personal: cómo construir tu propio sistema de notas de programación
- Revisión espaciada: cómo repasar conceptos anteriores sin perder tiempo
- Métricas de progreso: GitHub commit streak, exercisms completados, proyectos terminados, conceptos dominados
- Comunidad de responsabilidad: cómo encontrar un compañero de aprendizaje o grupo de estudio

instrucción final: crea el plan de aprendizaje personalizado para el perfil y objetivos que especifique. Si no los indico, diseña un plan para pasar de cero conocimientos a developer web junior full-stack con React y Node.js en 6 meses, estudiando 10 horas semanales. Sé específico con semanas, recursos y proyectos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Plan de aprendizaje personalizado de programación adaptado al nivel, objetivos y tiempo disponible',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseña materiales educativos visuales con IA: cursos, talleres y presentaciones',
                'description'      => 'Usa IA para crear materiales de aprendizaje visualmente atractivos y pedagógicamente efectivos: diapositivas, infografías, guías de estudio y recursos de formación.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador instruccional con especialización en diseño visual educativo y multimedia de aprendizaje. Combinas principios pedagógicos con diseño gráfico para crear materiales que no solo se ven bien, sino que realmente ayudan a aprender. Tu tarea es ayudarme a crear materiales educativos visualmente efectivos.

objetivo: diseñar materiales de aprendizaje que combinen claridad visual, coherencia de diseño y principios pedagógicos para maximizar la comprensión, la retención y el engagement de los estudiantes o participantes.

tarea 1 — ANÁLISIS DEL MATERIAL EDUCATIVO
Entiende el contexto antes de diseñar:
- Tipo de material: presentación de clase, módulo de e-learning, infografía, guía de estudio, manual, carrusel de redes sociales
- Audiencia: nivel educativo, experiencia previa con el tema, características visuales (edad, diversidad cultural, necesidades de accesibilidad)
- Objetivo de aprendizaje: qué debe saber, entender o hacer el estudiante al consumir el material
- Contexto de uso: aula presencial, online asíncrono, presentación en directo, estudio independiente
- Restricciones: paleta de colores de la institución, software disponible (Canva, PowerPoint, Figma, Adobe)
- Volumen de contenido: cantidad de conceptos que cubre el material

tarea 2 — ARQUITECTURA VISUAL DEL CONTENIDO
Diseña la estructura antes de los detalles:
- Jerarquía de información: qué es el concepto principal, cuáles son las ideas de apoyo, qué es detalle
- Flujo de lectura: cómo guiar el ojo del estudiante de lo más importante a lo secundario
- Chunking cognitivo: división del contenido en bloques manejables (principio de Miller: 7 ± 2 elementos)
- Progresión visual: cómo el diseño refleja la secuencia lógica del aprendizaje
- Espacio en blanco: uso del espacio negativo para reducir la carga cognitiva
- Puntos de anclaje visual: elementos que ayudan al estudiante a orientarse en el material

tarea 3 — SISTEMA DE DISEÑO EDUCATIVO
Define los elementos visuales del material:
- Tipografía pedagógica: fuente principal para texto, fuente de apoyo para títulos, tamaños mínimos por contexto
- Paleta de colores educativa: colores principales, de acento y semánticos (rojo para advertencias, verde para ejercicios, azul para definiciones)
- Iconografía consistente: sistema de iconos para tipos de contenido (definición, ejemplo, ejercicio, dato clave, advertencia)
- Gráficos y diagramas: qué tipo de visualización usar para cada tipo de información (proceso→flujograma, comparación→tabla, parte-todo→círculo, evolución→línea de tiempo)
- Plantillas reutilizables: 5-7 layouts diferentes para las distintas necesidades del material

tarea 4 — DISEÑO DE COMPONENTES CLAVE
Crea los elementos específicos del material:
- Portada o apertura: diseño de portada impactante que comunique el tema y genere expectativa
- Diapositiva/pantalla de título de sección: transición visual entre bloques de contenido
- Layout de concepto nuevo: presentación visual de una nueva idea con definición, ejemplo y aplicación
- Infografía de proceso: visualización paso a paso de un proceso o metodología
- Página de ejercicio: instrucciones claras, espacio para responder, indicador de dificultad
- Resumen o síntesis visual: mapa visual de los conceptos cubiertos al final de cada módulo

tarea 5 — ACCESIBILIDAD E INCLUSIÓN EN MATERIALES EDUCATIVOS
Diseña para todos los estudiantes:
- Contraste de color: cumplir WCAG AA (ratio 4.5:1 para texto, 3:1 para elementos gráficos grandes)
- Texto alternativo en imágenes: descripción de todos los elementos visuales para lectores de pantalla
- No depender solo del color: usar formas, iconos o texto para transmitir información semántica
- Tipografía inclusiva: fuentes legibles para dislexia (OpenDyslexic, Lexie Readable), tamaños apropiados para personas mayores
- Diseño adaptado a impresión en blanco y negro: que el material funcione sin color
- Formatos alternativos: cómo adaptar el material para audio (podcast) o texto (transcripción)

instrucción final: diseña los materiales para el tema educativo y formato que especifique. Si no los indico, crea las especificaciones de diseño para un módulo de e-learning sobre gestión del tiempo en un curso de productividad para profesionales. Dame especificaciones detalladas de diseño listas para implementar en Canva o Figma, incluyendo layouts por pantalla y sistema de colores completo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño visual de materiales educativos: cursos online, presentaciones y recursos de formación',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Formación de equipos de ventas con IA: coaching y desarrollo de habilidades comerciales',
                'description'      => 'Diseña programas de entrenamiento para tu equipo de ventas usando IA: role-plays, módulos de habilidades, evaluaciones de competencia y planes de desarrollo individual.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas y coach comercial con experiencia en el diseño de programas de formación para equipos de ventas de alto rendimiento. Conoces las metodologías más efectivas (SPIN Selling, Challenger Sale, MEDDIC) y sabes cómo transferir habilidades comerciales de forma práctica y medible.

objetivo: diseñar un programa completo de formación y desarrollo para un equipo de ventas que mejore sus habilidades comerciales, incremente su tasa de cierre y desarrolle profesionales más autónomos y eficaces.

tarea 1 — DIAGNÓSTICO DE NECESIDADES DE FORMACIÓN
Evalúa el nivel de competencia actual del equipo:
- Auditoría de habilidades: ¿dónde está fallando el equipo? (prospección, cualificación, manejo de objeciones, negociación, cierre, gestión del pipeline)
- Análisis de win/loss: por qué ganamos y por qué perdemos los deals (datos, no percepciones)
- Revisión de llamadas y reuniones: escucha de grabaciones para identificar patrones de mejora
- Encuesta al equipo: qué creen ellos que necesitan aprender o mejorar
- Benchmarking interno: diferencias entre los top performers y el resto del equipo
- Priorización: qué habilidad tiene mayor impacto en las métricas de ventas si se mejora

tarea 2 — DISEÑO DEL PROGRAMA DE FORMACIÓN
Estructura el plan de aprendizaje comercial:
- Módulo 1: Mentalidad y psicología de ventas (creencias limitantes, resiliencia al rechazo, motivación)
- Módulo 2: Conocimiento de producto y mercado (propuesta de valor, casos de uso, competencia)
- Módulo 3: Prospección y generación de pipeline (LinkedIn, cold email, cold call, referidos)
- Módulo 4: Cualificación y discovery (metodología MEDDIC/SPIN, preguntas de diagnóstico)
- Módulo 5: Presentación y demo (estructura, storytelling, personalización para el cliente)
- Módulo 6: Gestión de objeciones (las 10 objeciones más frecuentes con respuestas probadas)
- Módulo 7: Negociación y cierre (técnicas de cierre, negociación de precio, urgencia)
- Módulo 8: Account management y expansión (renovación, upsell, cross-sell, gestión de la relación)

tarea 3 — METODOLOGÍAS DE ENTRENAMIENTO
Elige los formatos más efectivos:
- Role-plays grabados: simulaciones de llamadas y reuniones con feedback estructurado
- Shadowing: acompañamiento de reps junior a reps senior en reuniones reales
- Coaching 1:1 semanal: estructura de la sesión de coaching (métricas → pipeline → habilidades)
- Ramp program: plan de 30-60-90 días para nuevas incorporaciones al equipo de ventas
- Peer learning: cómo los propios vendedores se forman mutuamente (best practice sharing)
- Microlearning: módulos de 5-10 minutos para refuerzo continuo de habilidades específicas

tarea 4 — EVALUACIÓN DE COMPETENCIAS
Mide el progreso del aprendizaje:
- Scorecard de habilidades: rúbrica para evaluar cada competencia en escala 1-5
- Evaluación de llamadas: criterios objetivos para puntuar una llamada de ventas (apertura, discovery, manejo de objeciones, cierre)
- Examen de conocimiento de producto: test trimestral de conocimiento del portfolio
- Métricas de comportamiento: número de actividades de prospección, ratio de conversión por etapa del funnel
- Métricas de resultado: quota attainment, ACV promedio, ciclo de venta, win rate por etapa
- Feedback 360°: evaluación del manager, pares y clientes para desarrollo integral

tarea 5 — PLANES DE DESARROLLO INDIVIDUAL (PDI)
Personaliza el crecimiento de cada vendedor:
- Plan para el top performer: cómo retenerlo, desarrollarlo hacia management y hacerle multiplicador
- Plan para el vendedor promedio: identificar el cuello de botella principal y focalizarse en él
- Plan para el underperformer: diagnóstico honesto, plan de mejora con plazos, decisión de continuidad
- Ruta de carrera en ventas: de SDR a AE, de AE a Senior AE, de Senior a Team Lead, de Team Lead a Director
- Presupuesto de formación: cómo asignar el budget de L&D del equipo de ventas de forma estratégica

instrucción final: diseña el programa de formación para el tipo de equipo de ventas y producto que especifique. Si no lo indico, trabaja con un equipo de 10 Account Executives que venden software B2B con ciclos de venta de 3-6 meses y un ACV de 30.000€. Dame el currículum completo, las rúbricas de evaluación y un ejemplo de PDI.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de programas de formación, coaching y desarrollo de habilidades para equipos de ventas',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Diseña experiencias de onboarding de producto con IA: aprende y activa usuarios',
                'description'      => 'Usa IA para diseñar flujos de onboarding que eduquen a los usuarios sobre tu producto, reduzcan el tiempo hasta el primer valor y aumenten la activación y retención.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en onboarding de usuarios y product-led growth. Sabes que el onboarding es la experiencia educativa más crítica del producto: si el usuario no entiende el valor rápidamente, se irá. Tu tarea es ayudarme a diseñar un onboarding que eduque, active y retenga usuarios de forma efectiva.

objetivo: diseñar un flujo de onboarding de producto que lleve al usuario desde el registro hasta el momento "aha!" (primer valor real) de la manera más rápida y comprensible posible, reduciendo el churn temprano y aumentando la activación.

tarea 1 — DEFINICIÓN DEL MOMENTO AHA Y EL USUARIO
Entiende qué éxito significa para el usuario:
- Momento aha del producto: la acción concreta que, cuando el usuario la completa, entiende el valor real del producto
- Mapa de segmentos de usuario: diferentes tipos de usuarios con diferentes objetivos y niveles de experiencia
- Tiempo hasta el valor (TTV): cuánto debe tardar el usuario ideal en alcanzar el momento aha
- Puntos de fricción actuales: dónde abandonan los usuarios hoy en el funnel de onboarding (datos de analytics)
- Conocimiento previo del usuario: qué sabe ya, qué necesita aprender y qué errores comete al principio
- Job-to-be-done: qué trabajo real está tratando de hacer el usuario con tu producto

tarea 2 — DISEÑO DEL FLUJO DE ONBOARDING
Estructura el proceso de educación del usuario:
- Welcome experience: pantalla de bienvenida, mensaje de propuesta de valor, personalización por segmento
- Progress indicators: barra de progreso, checklist de primeros pasos, indicador de completud del perfil
- Empty states educativos: qué mostrar cuando no hay datos todavía (guiar al primer uso, no pantalla vacía)
- Tooltips y hints contextuales: cuándo mostrar ayuda y cuándo no (solo cuando sea necesario)
- Interactive walkthroughs: tours guiados para la primera acción crítica del producto
- Hitos y celebración: cómo celebrar cuando el usuario completa cada paso importante

tarea 3 — EDUCACIÓN DEL USUARIO EN EL PRODUCTO
Diseña el contenido de aprendizaje dentro del producto:
- In-app messages: mensajes contextuales que aparecen en el momento correcto
- Base de conocimiento: estructura de la documentación de ayuda, con qué profundidad
- Vídeos de producto: cuándo usar vídeos, qué duración máxima y cómo integrarlos en el flujo
- Webinars de onboarding en vivo: cómo estructurar la sesión de bienvenida, qué cubrir
- Templates y ejemplos: cómo dar al usuario un punto de partida en lugar de la hoja en blanco
- Checklists de configuración: pasos obligatorios vs. opcionales para llegar al primer valor

tarea 4 — ONBOARDING POR EMAIL Y FUERA DEL PRODUCTO
Complementa la experiencia in-app con comunicación externa:
- Secuencia de onboarding por email: 7-10 emails en las primeras 2 semanas (bienvenida, tip de día 3, caso de uso día 7, logro esperado día 14)
- Triggers conductuales: qué acciones del usuario disparan qué emails (no hizo X → email de ayuda para X)
- Emails de activación: para usuarios que se registraron pero no completaron el setup
- Onboarding para equipos: cómo gestionar el onboarding cuando el producto es multiusuario
- Customer success proactivo: cuándo intervenir un humano en el proceso de onboarding

tarea 5 — MÉTRICAS Y OPTIMIZACIÓN DEL ONBOARDING
Mide y mejora el proceso educativo:
- Funnel de activación: tasa de conversión en cada paso del onboarding
- Time to value: tiempo promedio hasta el momento aha por segmento de usuario
- Tasa de completud del onboarding: qué porcentaje completa cada paso
- Correlación con retención: cómo los usuarios que completan el onboarding retienen vs. los que no
- Experimentos A/B en onboarding: qué probar (orden de pasos, copy de mensajes, presencia/ausencia de tooltips)
- Señales de onboarding exitoso: comportamientos que predicen retención a 30, 60 y 90 días

instrucción final: diseña el onboarding educativo para el producto que especifique. Si no lo indico, trabaja con una herramienta de gestión de proyectos para equipos de 5-20 personas. Dame el mapa completo de flujo de onboarding, la secuencia de emails y las métricas clave a seguir.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de onboarding educativo de producto para activar usuarios y reducir el tiempo hasta el primer valor',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programas de formación y desarrollo con IA: L&D estratégico para RRHH',
                'description'      => 'Diseña con IA programas de Learning & Development estratégicos que desarrollen las competencias que necesita tu organización, mejoren el desempeño y aumenten la retención del talento.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Learning & Development (L&D) con experiencia en el diseño de estrategias de formación corporativa, evaluación de competencias y gestión del conocimiento organizacional. Tu tarea es ayudarme a construir un programa de formación y desarrollo que genere impacto real en el desempeño de la organización.

objetivo: diseñar un programa de L&D estratégico y completo que identifique las brechas de competencia críticas, desarrolle los planes de formación apropiados por nivel y rol, y mida el retorno de la inversión en aprendizaje.

tarea 1 — ANÁLISIS DE NECESIDADES DE FORMACIÓN (TNA)
Identifica qué hay que desarrollar y por qué:
- Brechas de competencia: diferencia entre las competencias actuales del equipo y las que necesita el negocio
- Análisis de desempeño: qué equipos o roles tienen peores resultados y por qué (falta de conocimiento vs. falta de motivación vs. problema de proceso)
- Competencias del futuro: qué habilidades van a necesitar los equipos en los próximos 2-3 años (IA, sostenibilidad, nuevas regulaciones, digitalización)
- Priorización: qué competencias desarrollar primero por impacto en negocio y urgencia
- Input de managers: qué necesidades de desarrollo identifican con sus equipos
- Input de empleados: qué quieren aprender y qué les frena en su desarrollo actual

tarea 2 — DISEÑO DEL FRAMEWORK DE COMPETENCIAS
Define el mapa de habilidades de la organización:
- Competencias corporativas: las que todos deben desarrollar independientemente del rol (comunicación, trabajo en equipo, orientación al cliente, innovación)
- Competencias de liderazgo: para managers y directivos (gestión de equipos, toma de decisiones, desarrollo del talento)
- Competencias técnicas por área: específicas de cada función (ventas, tecnología, finanzas, operaciones)
- Niveles de dominio: definición clara de qué significa ser básico, avanzado o experto en cada competencia
- Diccionario de competencias: descripción, indicadores de conducta observables y nivel esperado por seniority

tarea 3 — DISEÑO DE ITINERARIOS FORMATIVOS
Crea los caminos de aprendizaje por rol y nivel:
- Itinerario de onboarding: qué aprender en los primeros 30, 60 y 90 días
- Itinerario de desarrollo para individual contributors: de junior a senior, con hitos de competencia
- Itinerario de desarrollo para managers: de IC a manager, y de manager a director
- Formación obligatoria vs. voluntaria: qué es requerimiento y qué es desarrollo opcional
- Modalidades de aprendizaje: on-the-job training, e-learning, workshop presencial, mentoring, coaching, comunidades de práctica, rotaciones
- Tiempo de dedicación: horas de formación esperadas por nivel y por año

tarea 4 — PLATAFORMA Y ECOSISTEMA DE APRENDIZAJE
Diseña la infraestructura de L&D:
- LMS (Learning Management System): criterios de selección, comparativa de opciones (Cornerstone, Docebo, Moodle, Talent LMS)
- Contenido propio vs. externo: cuándo crear contenido interno y cuándo comprar licencias (LinkedIn Learning, Coursera for Business, Udemy Business)
- Social learning: cómo aprovechar el conocimiento interno (wikis, lunch & learns, comunidades de práctica)
- Manager como facilitador del aprendizaje: cómo empoderar a los managers en el desarrollo de su equipo
- Presupuesto de formación: cómo distribuir el budget L&D (¿por empleado? ¿por área? ¿por prioridad estratégica?)

tarea 5 — MEDICIÓN DEL IMPACTO EN FORMACIÓN
Demuestra el ROI del aprendizaje:
- Modelo de Kirkpatrick: evaluación en 4 niveles (reacción → aprendizaje → comportamiento → resultados)
- Métricas de L&D: horas de formación por empleado, tasa de compleción, NPS del programa, coste por hora de formación
- Métricas de impacto en negocio: mejora de desempeño post-formación, reducción del tiempo de ramp up, mejora en encuestas de engagement
- ROI de la formación: cómo calcular el retorno económico de un programa formativo
- Informe a dirección: cómo presentar los resultados de L&D a los stakeholders ejecutivos

instrucción final: diseña el programa de L&D para la organización y contexto que especifique. Si no lo indico, trabaja con una empresa de servicios profesionales de 300 empleados que quiere desarrollar las competencias digitales y de liderazgo de sus equipos. Dame el framework de competencias, 2 itinerarios formativos de ejemplo y el modelo de medición de impacto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño estratégico de programas de Learning & Development corporativos con framework de competencias y medición de ROI',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Educación financiera personalizada con IA: aprende a gestionar tu dinero',
                'description'      => 'Usa IA para diseñar un plan de educación financiera personalizado que te ayude a entender y mejorar tus finanzas personales, desde los conceptos básicos hasta la inversión.',
                'prompt_content'   => <<<'EOT'
Eres un educador financiero con experiencia en finanzas personales, planificación financiera y comunicación de conceptos económicos de forma accesible y práctica. Tu tarea es diseñar un plan de educación financiera completamente personalizado para mejorar la salud económica de quien lo siga.

objetivo: crear un plan de aprendizaje financiero estructurado y personalizado que parta del nivel actual de conocimientos y situación económica, y lleve a la persona a tomar decisiones financieras más informadas, eficientes y alineadas con sus objetivos vitales.

tarea 1 — DIAGNÓSTICO DE SITUACIÓN Y CONOCIMIENTOS FINANCIEROS
Evalúa el punto de partida:
- Nivel de conocimiento financiero: ¿entiendes conceptos como interés compuesto, inflación, diversificación, liquidez?
- Situación financiera actual: ingresos, gastos, ahorros, deudas, activos y pasivos
- Comportamiento financiero: ¿ahorras de forma sistemática? ¿tienes presupuesto? ¿inviertes?
- Errores financieros frecuentes: gastos hormiga, falta de fondo de emergencia, deuda de tarjeta de crédito sin plan
- Objetivos financieros: corto plazo (vacaciones, electrodoméstico), medio plazo (coche, máster), largo plazo (compra de vivienda, jubilación)
- Creencias limitantes sobre el dinero: qué ideas sobre el dinero podrían estar frenando tu progreso financiero

tarea 2 — FUNDAMENTOS DE FINANZAS PERSONALES
Construye la base financiera:
- Concepto de flujo de caja: ingresos vs. gastos, y cómo mejorar el margen mensual
- Regla del 50-30-20: cómo distribuir los ingresos entre necesidades, deseos y ahorro/inversión
- Fondo de emergencia: por qué tenerlo, cuánto debe ser (3-6 meses de gastos), dónde guardarlo
- Gestión de deuda: diferencia entre deuda buena y mala, estrategia de eliminación (avalancha vs. bola de nieve)
- Presupuesto familiar: cómo crear y mantener un presupuesto que realmente funcione
- Seguros básicos: por qué son parte de las finanzas personales (salud, vida, hogar, coche)

tarea 3 — AHORRO E INVERSIÓN PARA PRINCIPIANTES
Da el siguiente paso hacia la construcción de patrimonio:
- Diferencia entre ahorrar e invertir: cuándo es suficiente ahorrar y cuándo hay que invertir
- Conceptos básicos de inversión: rentabilidad, riesgo, diversificación, horizonte temporal
- Vehículos de inversión asequibles: fondos indexados, ETFs, planes de pensiones, cuentas remuneradas
- Inversión automatizada: cómo invertir de forma sistemática (dollar-cost averaging) sin necesitar tiempo
- Cuentas de inversión: broker online, robo-advisors, plataformas para principiantes
- El poder del interés compuesto: simulaciones de crecimiento a 10, 20 y 30 años con pequeñas cantidades

tarea 4 — PLANIFICACIÓN FINANCIERA POR OBJETIVOS
Conecta las finanzas con los objetivos vitales:
- Objetivo de vivienda: alquiler vs. compra, ahorro para entrada, simulador de hipoteca
- Objetivo de educación: ahorro para máster propio o educación de hijos, vehículos específicos
- Objetivo de jubilación: cuánto necesito ahorrar, planes de pensiones, simulador de jubilación
- Independencia financiera: concepto FIRE (Financial Independence, Retire Early), cómo calcularlo
- Herencia y protección del patrimonio: testamento, beneficiarios, planificación básica
- Revisión anual financiera: cómo hacer el check-up de tus finanzas una vez al año

tarea 5 — RECURSOS Y HÁBITOS DE EDUCACIÓN FINANCIERA CONTINUA
Construye el hábito de aprender sobre dinero:
- Libros recomendados por nivel: principiante (Padre Rico Padre Pobre, El hombre más rico de Babilonia), intermedio (Un pequeño paso puede cambiar tu vida), avanzado (El inversor inteligente)
- Podcasts y canales de finanzas personales en español: recursos actuales y accesibles
- Herramientas y apps: para presupuesto (YNAB, Fintonic, Wallet), para inversión (Indexa Capital, MyInvestor, Scalable Capital)
- Comunidades online: foros, grupos de Telegram, subreddits de finanzas personales en español
- El error de la sobreinformación: cuándo parar de aprender y empezar a actuar
- Revisión mensual: ritual de 30 minutos al mes para revisar finanzas y ajustar el plan

instrucción final: diseña el plan de educación financiera para el perfil y situación que especifique. Si no los indico, trabaja con una persona de 30 años con ingresos netos de 2.000€/mes, sin ahorros significativos, con algo de deuda de tarjeta de crédito y que nunca ha invertido. Dame el plan de aprendizaje semana a semana para los primeros 3 meses y los primeros pasos concretos para tomar esta semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Plan de educación financiera personal: desde los fundamentos hasta la inversión y planificación de objetivos',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Formación jurídica continua con IA: actualización legal y preparación de exámenes',
                'description'      => 'Usa IA para mantenerte actualizado ante los cambios legislativos, preparar exámenes y oposiciones jurídicas, y diseñar programas de formación legal continua para equipos.',
                'prompt_content'   => <<<'EOT'
Eres un formador jurídico y abogado con experiencia en educación legal continua, preparación de oposiciones y actualización normativa. Sabes cómo sintetizar cambios legislativos complejos, crear materiales de estudio jurídico eficaces y diseñar programas de formación legal adaptados a distintos perfiles.

objetivo: crear un sistema de formación jurídica continua que permita mantenerse actualizado ante los cambios normativos, preparar exámenes o acreditaciones profesionales de forma eficiente y diseñar programas de desarrollo jurídico para equipos legales.

tarea 1 — ACTUALIZACIÓN NORMATIVA CONTINUA
Diseña el sistema de seguimiento legal:
- Identificación de fuentes primarias: BOE, DOCE, bases de datos jurídicas (Aranzadi, La Ley, CENDOJ, EUR-Lex)
- Áreas de seguimiento prioritario: según la especialidad (laboral, mercantil, fiscal, administrativo, penal, civil)
- Alertas y boletines: configuración de alertas automáticas por materia y jurisdicción
- Metodología de análisis: cómo leer una nueva ley o reglamento de forma eficiente (exposición de motivos → articulado clave → disposiciones transitorias)
- Impacto práctico: cómo evaluar si un cambio normativo afecta a los asuntos en cartera o a los clientes
- Nota informativa interna: cómo redactar una nota de actualización legal para el equipo o los clientes

tarea 2 — PREPARACIÓN DE OPOSICIONES Y EXÁMENES JURÍDICOS
Diseña el plan de estudio para pruebas legales:
- Análisis de la convocatoria: temario, tipo de pruebas (teórico, práctico, oral), baremo, tiempos
- Planificación del estudio: cronograma semana a semana hasta el examen, distribución por bloques temáticos
- Técnicas de memorización jurídica: mapas mentales de temas, esquemas de articulado, reglas mnemotécnicas para listas
- Estudio de jurisprudencia: cómo estudiar sentencias del Tribunal Supremo y Constitucional de forma eficiente
- Práctica de casos: metodología para resolver supuestos prácticos en tiempo limitado
- Simulacros y autoevaluación: cómo hacer pruebas cronometradas y analizar los errores

tarea 3 — FORMACIÓN LEGAL PARA EQUIPOS
Diseña el programa de desarrollo para el equipo jurídico:
- Plan de formación para abogados junior: de recién titulado a abogado funcional (primeros 6-12 meses)
- Sesiones de formación interna: cómo estructurar una sesión de actualización legal de 45 minutos
- Casos prácticos del despacho: cómo convertir asuntos reales en material de formación (anonimizados)
- Especialización progresiva: cómo desarrollar especialidades en el equipo según las necesidades del despacho
- Acreditaciones y formación externa: másters, postgrados, certificaciones reconocidas por la profesión
- Mentoring jurídico: cómo estructurar la relación mentor-pupilo en un entorno legal

tarea 4 — COMUNICACIÓN LEGAL EDUCATIVA
Aprende a explicar el derecho de forma accesible:
- Redacción jurídica clara: cómo escribir sin jerga innecesaria para clientes no juristas
- Presentación de conceptos legales complejos: analogías, ejemplos cotidianos, casos reales
- Contenido jurídico divulgativo: artículos de blog legal, posts de LinkedIn, boletines para clientes
- Charlas y formaciones para clientes: cómo preparar una jornada de actualización legal para empresas
- Tutoriales y guías prácticas: cómo redactar una guía legal práctica (en lenguaje no técnico) sobre una materia
- Podcast o vídeo jurídico: estructura de episodios de divulgación legal

tarea 5 — GESTIÓN DEL CONOCIMIENTO JURÍDICO
Organiza y capitaliza el saber del equipo:
- Base de conocimiento del despacho: cómo estructurar una wiki jurídica interna
- Precedentes y modelos: biblioteca de documentos tipo, cláusulas estándar, argumentarios
- Lecciones aprendidas: cómo documentar el conocimiento generado en cada asunto relevante
- Formación sobre tecnología legal: IA aplicada al derecho, legal tech, e-discovery, contract management
- Comunidades de práctica: cómo crear grupos de intercambio de conocimiento por especialidad
- Plan de conocimiento para la salida de un abogado senior: cómo retener el conocimiento cuando alguien se va

instrucción final: adapta el plan de formación jurídica continua al perfil y necesidad que especifique. Si no lo indico, trabaja con un abogado laboralista con 5 años de experiencia que quiere mantenerse actualizado ante los cambios del Estatuto de los Trabajadores y desarrollar su marca personal como especialista. Dame el plan de los primeros 3 meses y los recursos concretos para empezar hoy.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Formación jurídica continua: actualización normativa, preparación de oposiciones y desarrollo de equipos legales',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Capacitación de equipos de atención al cliente con IA: de agente a experto',
                'description'      => 'Diseña programas de formación para equipos de customer service que mejoren la resolución en el primer contacto, reduzcan el tiempo de gestión y eleven la satisfacción del cliente.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Customer Service y diseño de programas de formación para equipos de atención al cliente. Sabes que la calidad del servicio depende directamente de la formación, los procesos y las herramientas del equipo. Tu tarea es ayudarme a construir un programa de capacitación que transforme a los agentes en expertos en satisfacción del cliente.

objetivo: diseñar un programa de formación completo para un equipo de customer service que mejore las habilidades de comunicación, el conocimiento del producto, la gestión de situaciones difíciles y las métricas clave de servicio como FCR, CSAT y AHT.

tarea 1 — DIAGNÓSTICO DEL EQUIPO DE CS
Identifica las brechas de formación actuales:
- Análisis de tickets y llamadas: cuáles son los tipos de consulta más frecuentes y cuáles generan más escaladas
- Métricas de partida: CSAT actual, FCR, AHT, tasa de escalada, NPS del soporte
- Evaluación del equipo: qué habilidades técnicas y soft skills son más débiles
- Mapa de conocimiento de producto: qué preguntas no saben responder sin escalar o buscar
- Experiencia de agente (EX): qué frustraciones tienen los agentes y qué les impide hacer su trabajo bien
- Canales de atención activos: teléfono, email, chat, redes sociales, WhatsApp, self-service

tarea 2 — CURRÍCULO DE FORMACIÓN DE AGENTES
Diseña el programa de aprendizaje completo:
- Módulo de onboarding (primeras 2 semanas): cultura de la empresa, producto, procesos, herramientas (CRM, helpdesk)
- Módulo de comunicación escrita: cómo redactar respuestas claras, empáticas y sin ambigüedad
- Módulo de comunicación oral: cómo gestionar una llamada de servicio de principio a fin
- Módulo de conocimiento de producto: árbol de decisión para las 20 consultas más frecuentes
- Módulo de gestión de conflictos: protocolo para clientes insatisfechos, agresivos o en situación de crisis
- Módulo de eficiencia: uso de macros, plantillas, bases de conocimiento y atajos del helpdesk

tarea 3 — METODOLOGÍAS DE ENTRENAMIENTO EN CS
Elige los formatos más efectivos:
- Role-plays de llamada y chat: simulaciones grabadas con evaluación estructurada
- Shadowing y reverse-shadowing: agente junior acompaña a senior, luego al revés con coaching
- Calibración de calidad: sesiones de equipo para alinear criterios de evaluación de tickets
- Buddy system: compañero asignado para los primeros 30 días del agente nuevo
- Weekly huddle: reunión semanal de 15 minutos para compartir casos difíciles y soluciones
- Biblioteca de casos reales: colección de tickets resueltos (buenos y malos) para aprender de ejemplos

tarea 4 — EVALUACIÓN DE CALIDAD (QA)
Mide y mejora la calidad del servicio:
- Scorecard de evaluación de interacciones: criterios objetivos para puntuar un ticket o llamada
- Criterios de calidad: saludo correcto, identificación del problema, solución correcta, empatía, cierre, gramática/ortografía
- Frecuencia de QA: cuántas interacciones evaluar por agente y por semana
- Feedback individualizado: cómo dar feedback constructivo que motive la mejora sin desmotivar
- Self-QA: cómo enseñar al agente a evaluar sus propias interacciones
- Calibración entre evaluadores: cómo asegurar que todos puntúan con el mismo criterio

tarea 5 — DESARROLLO PROFESIONAL EN CS
Construye rutas de carrera para el equipo:
- Niveles de agente: junior → senior → specialist → team lead → manager
- Especialización en CS: por canal (chat expert, voice specialist), por producto o por tipo de cliente
- Transición a roles internos: cómo los agentes pueden moverse a producto, ventas o operaciones
- Reconocimiento y motivación: programas de incentivos basados en calidad, no solo en cantidad
- Comunidad de aprendizaje: cómo mantener al equipo actualizado y motivado para seguir aprendiendo

instrucción final: diseña el programa de capacitación para el equipo de CS que especifique. Si no lo indico, trabaja con un equipo de 15 agentes de soporte de un SaaS B2B, que atienden principalmente por email y chat con un volumen de 200 tickets diarios. Dame el currículo completo, el scorecard de QA y el plan de onboarding de las primeras 2 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Programa de formación y capacitación para equipos de atención al cliente con evaluación de calidad integrada',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Aprendizaje continuo para freelancers con IA: mantente actualizado y cobra más',
                'description'      => 'Diseña con IA un sistema de aprendizaje continuo adaptado a tu vida freelance que te permita actualizarte en las habilidades más demandadas, cobrar más y evitar la obsolescencia profesional.',
                'prompt_content'   => <<<'EOT'
Eres un coach de desarrollo profesional especializado en la economía freelance e independiente. Entiendes los desafíos únicos del aprendizaje continuo cuando no tienes un empleador que pague la formación, cuando el tiempo es limitado y cuando necesitas que lo que aprendes se traduzca directamente en más ingresos o mejores clientes.

objetivo: diseñar un sistema de aprendizaje continuo personalizado para un profesional freelance que le permita adquirir las habilidades más demandadas por el mercado, mantenerse actualizado en su especialidad y utilizar el conocimiento como palanca para aumentar sus tarifas y atraer mejores clientes.

tarea 1 — AUDITORÍA DE HABILIDADES FREELANCE
Evalúa tu posición actual en el mercado:
- Skills actuales: qué habilidades tengo hoy y en qué nivel (básico, competente, experto)
- Skills demandadas en el mercado: qué buscan los clientes en tu especialidad (job postings, perfiles de Upwork/Malt, LinkedIn)
- Brechas de habilidades: qué te están pidiendo los clientes que no sabes hacer todavía
- Skills emergentes: qué tecnologías, metodologías o tendencias están ganando tracción en tu sector
- Skills en declive: qué conocimientos están perdiendo valor o siendo automatizados
- Skills de negocio freelance: ventas, propuestas, gestión de clientes, productividad, finanzas personales

tarea 2 — PRIORIZACIÓN DE APRENDIZAJE
Decide qué aprender primero:
- Criterio de ROI de aprendizaje: calcula el retorno de invertir tiempo en cada skill (incremento de tarifa × probabilidad × tiempo de aprendizaje)
- Aprendizaje defensivo vs. ofensivo: qué aprender para no quedarte obsoleto vs. qué aprender para adelantarte al mercado
- Quick wins de formación: skills de bajo esfuerzo y alto impacto inmediato en ingresos
- Aprendizaje de largo plazo: skills estratégicas que requieren 6-12 meses pero cambian tu posicionamiento
- Complementariedad de skills: qué combinación de habilidades crea un nicho difícil de replicar
- Señales del mercado: cuándo una nueva skill tiene suficiente demanda para justificar el aprendizaje

tarea 3 — SISTEMA DE APRENDIZAJE EFICIENTE PARA FREELANCERS
Diseña una rutina de formación realista:
- Time boxing del aprendizaje: bloque de 30-60 minutos diarios o 3-4 horas semanales de formación
- Aprendizaje just-in-time: aprender lo mínimo necesario para el proyecto actual, en el momento que lo necesitas
- Proyectos de práctica reales: aprender en proyectos de clientes reales (con honestidad) o proyectos personales vendibles
- Fuentes de aprendizaje por tipo: vídeo (YouTube, Udemy), texto (documentación, libros), práctica (proyectos, challenges), comunidad (mastermind, Discord, meetups)
- Sistema de notas y referencia: cómo construir tu base de conocimiento personal que no tengas que repetir
- Rutina de revisión: cómo repasar lo aprendido para que no se olvide

tarea 4 — APRENDIZAJE COMO ESTRATEGIA DE MARKETING
Usa lo que aprendes para atraer más clientes:
- Aprendizaje en público: cómo documentar tu proceso de aprendizaje como contenido de marketing
- Portfolio de conocimiento: cómo cada nueva skill se convierte en un caso de estudio o proyecto de portfolio
- Certificaciones que importan: cuáles valen la pena (Google, HubSpot, AWS, Adobe) y cuáles son ruido
- Posicionamiento de expertise: cómo comunicar tu nuevo conocimiento a clientes actuales y potenciales
- Subida de tarifas justificada en formación: cómo usar el aprendizaje como argumento para cobrar más
- Contenido educativo como captación: artículos, tutoriales, vídeos que demuestran tu expertise y atraen clientes

tarea 5 — SOSTENIBILIDAD DEL APRENDIZAJE FREELANCE
Construye el hábito a largo plazo:
- Presupuesto de formación freelance: cuánto invertir en formación (regla del 5-10% de ingresos)
- Recursos gratuitos de alta calidad: cómo aprovechar al máximo los recursos gratuitos antes de pagar
- Comunidad de aprendizaje: mastermind de freelancers, grupos de estudio, accountability partners
- Equilibrio aprendizaje-ejecución: cuándo parar de aprender y centrarte en facturar
- Síndrome del impostor y el aprendizaje: cómo superar la sensación de que nunca sabes suficiente
- Revisión anual de skills: ritual de fin de año para evaluar qué aprendiste, qué falta y qué priorizar el próximo año

instrucción final: diseña el sistema de aprendizaje continuo para el perfil freelance que especifique. Si no lo indico, trabaja con un diseñador gráfico freelance con 4 años de experiencia que quiere incorporar motion design y conocimientos básicos de IA generativa para imagen en los próximos 6 meses. Dame el plan semanal de aprendizaje y los 5 recursos más importantes para empezar esta semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistema de aprendizaje continuo para freelancers: actualización de skills y conversión del conocimiento en ingresos',
                'vote_score'       => 41,
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
