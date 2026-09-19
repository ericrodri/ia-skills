<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills482Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing educativo y captación de estudiantes con IA',
                'description'      => 'Usa IA para diseñar estrategias de marketing para instituciones educativas y plataformas EdTech que aumenten la captación y el engagement de estudiantes.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing educativo con experiencia en instituciones de educación superior, academias online y plataformas EdTech. Conoces los ciclos de decisión de compra de estudiantes, las particularidades de marketing a audiencias B2C y B2B2C en el sector educativo, y las regulaciones de publicidad educativa.

**objetivo:** Diseñar una estrategia de marketing completa para captar estudiantes y mejorar el engagement en mi institución o plataforma educativa, aprovechando las capacidades de la IA.

**Contexto educativo:**
- Tipo de institución: [universidad / bootcamp / academia online / plataforma EdTech / escuela de idiomas]
- Programas que ofrezco: [nombre y tipo de cursos o titulaciones]
- Audiencia objetivo: [edad, perfil, geografía]
- Inversión mensual en marketing: [rango]
- Principal reto de captación actual: [visibilidad / coste de adquisición / tasas de conversión / retención]

**Bloque 1 — Estrategia de contenido educativo para captación**

Diseña para mí una estrategia de content marketing educativo que incluya:

1. Calendario editorial de 3 meses con temas orientados a las preguntas de búsqueda de mis estudiantes potenciales
2. Formatos de contenido recomendados por etapa del funnel: awareness (blogs, videos cortos), consideración (webinars, casos de éxito), decisión (demos, testimonios, comparativas)
3. Estrategia de SEO educativo: cómo posicionarme para búsquedas de intención de estudio ("mejor máster en [campo]", "cómo aprender [habilidad]")
4. Uso de IA para generar variaciones de contenido adaptadas a diferentes audiencias (perfiles profesionales, recién graduados, reconversión profesional)
5. Estrategia de distribución multicanal: cuáles son los canales más eficientes para mi tipo de estudiante

Para cada elemento, dame ejemplos concretos de contenido que pueda crear esta semana.

**Bloque 2 — Automatización del funnel de captación**

Crea para mí un funnel de captación automatizado que use IA en cada etapa:

- **Atracción**: campañas de paid media segmentadas por perfil de estudiante con mensajes personalizados por etapa de carrera
- **Captura**: diseño de lead magnets educativos (guías, mini-cursos, tests de orientación vocacional) de alta conversión
- **Nurturing**: secuencia de emails de 8 semanas para llevar al prospecto desde el primer contacto hasta la inscripción
- **Conversión**: cómo usar chatbots de IA para responder dudas frecuentes y guiar al estudiante al proceso de matrícula
- **Retención**: estrategias de engagement post-inscripción para reducir el abandono antes del inicio del programa

**Bloque 3 — Personalización del mensaje por perfil de estudiante**

Genera para mí mensajes de marketing personalizados para los siguientes perfiles:

1. Joven de 22 años recién graduado que busca diferenciarse en el mercado laboral
2. Profesional de 35 años que quiere reconvertirse a una nueva industria
3. Directivo de 45 años que busca actualizar sus competencias de liderazgo
4. Empresa que busca formación para su equipo (B2B)

Para cada perfil, dame: headline, propuesta de valor, principales objeciones y cómo rebatirlas, y el canal de comunicación más efectivo.

**Bloque 4 — Medición del ROI de marketing educativo**

Define el sistema de métricas que debo implementar para medir el rendimiento de mis acciones de marketing:

- Métricas de captación: CPL (coste por lead), CPA (coste por inscripción), tasa de conversión lead-a-matrícula por canal
- Métricas de calidad del lead: tasa de inicio del programa, tasa de abandono en los primeros 30 días, NPS del estudiante
- Métricas de LTV educativo: valor de un estudiante a lo largo de múltiples programas
- Dashboard de atribución multicanal para entender el recorrido real del estudiante hasta la matrícula

**Bloque 5 — Estrategia de reputación y prueba social**

Dame un plan para construir y amplificar la prueba social de mi institución:
- Cómo recoger y usar testimonios de estudiantes y empleadores de forma sistemática
- Estrategia de casos de éxito (historias de transformación de estudiantes) para cada programa
- Gestión de reseñas en Google, Trustpilot y plataformas educativas especializadas
- Programa de embajadores de estudiantes actuales y alumni para amplificar el alcance orgánico
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategias de marketing educativo y captación de estudiantes con personalización por IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataformas EdTech con IA y aprendizaje adaptativo',
                'description'      => 'Guía técnica para desarrolladores que construyen plataformas de e-learning con funcionalidades de IA: tutores virtuales, contenido adaptativo y analíticas de aprendizaje.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas educativas y sistemas de aprendizaje adaptativo. Has diseñado e implementado sistemas LMS (Learning Management Systems) con componentes de IA para personalización, evaluación automatizada y analítica de aprendizaje.

**objetivo:** Diseñar e implementar una plataforma EdTech con funcionalidades de IA que personalicen la experiencia de aprendizaje y mejoren los resultados de los estudiantes.

**Contexto técnico:**
- Stack tecnológico preferido: [React / Vue / Next.js / Laravel / Django / etc.]
- Tipo de plataforma: [LMS / MOOC / microlearning / plataforma de práctica / evaluación]
- Usuarios esperados: [número y tipo: estudiantes / profesores / empresas]
- Infraestructura: [cloud provider, base de datos, CDN]
- Integraciones requeridas: [video / ejercicios interactivos / certificaciones / pagos]

**Módulo 1 — Arquitectura de un sistema de aprendizaje adaptativo**

Diseña la arquitectura técnica de un sistema adaptativo que:

1. Modele el conocimiento del estudiante (knowledge modeling) usando respuestas a ejercicios y tiempo de resolución
2. Seleccione dinámicamente el siguiente contenido o ejercicio según el nivel inferido del estudiante (recommender system)
3. Detecte zonas de dificultad (struggle detection) para intervenir con explicaciones adicionales o cambios de ritmo
4. Personalice el orden de los módulos del curso según el perfil y objetivos del estudiante
5. Genere rutas de aprendizaje (learning paths) individualizadas basadas en diagnóstico inicial

Para cada componente, describe la arquitectura de datos, los algoritmos recomendados (Bayesian Knowledge Tracing, IRT, collaborative filtering) y el stack técnico sugerido.

**Módulo 2 — Implementación de tutor virtual con IA**

Guíame para implementar un tutor virtual inteligente que pueda:

- Responder preguntas de los estudiantes sobre el contenido del curso en lenguaje natural (RAG sobre el material del curso)
- Detectar cuando el estudiante está bloqueado y ofrecer pistas progresivas (Socratic tutoring)
- Evaluar respuestas abiertas de los estudiantes y dar feedback formativo automatizado
- Mantener contexto de la sesión de aprendizaje para dar respuestas coherentes y personalizadas
- Escalar a un tutor humano cuando la consulta supera sus capacidades

Para cada funcionalidad, dame el diseño de la API, el prompt engineering necesario y los mecanismos de evaluación de calidad del tutor.

**Módulo 3 — Sistema de evaluación automatizada**

Diseña el sistema de evaluación para mi plataforma que incluya:

- Generación automática de preguntas de evaluación a partir del contenido del curso (usando LLMs)
- Tipos de pregunta: multiple choice, verdadero/falso, completar código, respuesta abierta evaluada por IA
- Banco de preguntas versionado con métricas de dificultad y discriminación (psicometría básica)
- Anti-trampa: detección de respuestas copiadas, tiempo de respuesta anómalo, inconsistencias entre sesiones
- Generación de certificados automáticos con verificación on-chain o con código único

**Módulo 4 — Analítica de aprendizaje (Learning Analytics)**

Implementa un sistema de learning analytics que proporcione:

- Dashboard para el estudiante: progreso en tiempo real, áreas de fortaleza y debilidad, estimación de tiempo para completar
- Dashboard para el profesor/instructor: actividad de la clase, estudiantes en riesgo de abandono, efectividad de cada contenido
- Dashboard para la institución: tasas de finalización, NPS de cursos, ROI de contenidos
- Alertas automáticas de riesgo de abandono basadas en modelos predictivos de comportamiento
- Exportación de datos en formato xAPI (Tin Can) y SCORM para interoperabilidad

**Módulo 5 — Gamificación inteligente con IA**

Diseña el sistema de gamificación adaptativa que:
- Ajusta la dificultad de los retos según el nivel actual del estudiante (flow state optimization)
- Genera insignias y logros personalizados según el estilo de aprendizaje detectado
- Implementa tablas de clasificación con grupos de nivel similar para mantener la motivación sin desalentar
- Gestiona rachas de aprendizaje (streaks), puntos y recompensas con lógica de refuerzo variable
- Adapta las mecánicas de juego según si el estudiante responde mejor a la competición, la colaboración o el logro personal
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollar plataformas EdTech con IA, aprendizaje adaptativo y tutores virtuales',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de aprendizaje e interfaces EdTech con IA',
                'description'      => 'Usa IA para diseñar interfaces educativas que maximicen el engagement, la retención de conocimiento y la accesibilidad en plataformas de e-learning.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de aprendizaje (Instructional Designer) y UX Designer especializado en plataformas educativas digitales. Combinas principios de diseño instruccional (carga cognitiva, espaciado, recuperación) con las mejores prácticas de UX para crear experiencias de aprendizaje que realmente funcionen.

**objetivo:** Diseñar interfaces y experiencias de aprendizaje para una plataforma educativa que maximicen la retención de conocimiento, el engagement del estudiante y la accesibilidad.

**Contexto del proyecto:**
- Tipo de contenido: [cursos de programación / idiomas / habilidades profesionales / formación corporativa]
- Audiencia: [edades, nivel tecnológico, necesidades especiales de accesibilidad]
- Dispositivos principales: [desktop / móvil / tablet / ambos]
- Duración de los módulos: [micro (5-10 min) / estándar (20-45 min) / largo (1h+)]
- Herramientas de diseño: [Figma / Adobe XD / otro]

**Sección 1 — Principios de diseño instruccional aplicados a la UI**

Explícame cómo aplicar los siguientes principios cognitivos al diseño visual de mi plataforma:

1. **Teoría de la carga cognitiva**: cómo estructurar la información en pantalla para no sobrecargar la memoria de trabajo del estudiante
2. **Efecto de modalidad**: cuándo usar texto vs. audio vs. imagen vs. animación según el tipo de contenido
3. **Principio de coherencia**: cómo eliminar elementos decorativos que distraen del aprendizaje sin hacer la interfaz aburrida
4. **Efecto de segmentación**: cómo dividir el contenido en unidades digestibles con puntos de control de comprensión
5. **Principio de señalización**: cómo usar color, tipografía y layout para guiar la atención del estudiante a lo más importante

Para cada principio, dame ejemplos visuales (descritos en texto) y errores comunes que debo evitar.

**Sección 2 — Diseño del reproductor de cursos y la interfaz de lección**

Diseña para mí la anatomía de la interfaz de lección ideal, especificando:

- Layout del reproductor de video con los controles y funcionalidades de aprendizaje (notas, velocidad, subtítulos, transcripción buscable)
- Posición y diseño del progress bar y navegación entre lecciones que motive a continuar
- Integración de preguntas de comprensión dentro del video (video quizzes) sin interrumpir el flujo
- Panel de notas y marcadores del estudiante: cómo diseñarlo para que realmente se use
- Diseño del estado de "lección completada" con refuerzo positivo apropiado

Dame las especificaciones de layout (proporciones, espaciado, tipografía) y las interacciones clave.

**Sección 3 — Diseño de ejercicios y evaluaciones interactivas**

Crea las especificaciones de diseño para los siguientes tipos de ejercicio:

- Preguntas de opción múltiple: diseño del feedback correcto/incorrecto que explique el razonamiento
- Ejercicios de arrastrar y soltar: cómo hacerlos intuitivos y accesibles en móvil y desktop
- Ejercicios de completar código (para cursos de programación): diseño del editor integrado
- Preguntas de respuesta abierta con evaluación por IA: cómo mostrar el feedback de IA de forma que parezca constructivo, no mecánico
- Simulaciones y casos prácticos: cómo diseñar escenarios de decisión ramificada (branching scenarios)

**Sección 4 — Gamificación visual y motivación del estudiante**

Diseña el sistema visual de gamificación que incluya:
- Iconografía y diseño de insignias (badges) que sean aspiracionales pero no infantiles
- Progress bars y visualizaciones de progreso que motiven sin crear ansiedad
- Diseño del perfil del estudiante y su portfolio de logros
- Notificaciones de progreso que celebren pequeños avances sin resultar intrusivas
- Diseño del leaderboard (si aplica) que sea motivador para todos los niveles

**Sección 5 — Accesibilidad en plataformas educativas**

Dame un checklist de accesibilidad específico para plataformas educativas:
- Cumplimiento de WCAG 2.1 AA en interfaces de aprendizaje
- Accesibilidad de los videos: subtítulos, transcripciones, audio descripción
- Accesibilidad de los ejercicios interactivos: navegación por teclado, lectores de pantalla
- Diseño para dislexia y otras necesidades de aprendizaje: tipografía, espaciado, contraste
- Testing de accesibilidad: herramientas y protocolo de revisión antes del lanzamiento
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar interfaces y experiencias de aprendizaje para plataformas EdTech accesibles y efectivas',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de soluciones EdTech a instituciones educativas con IA',
                'description'      => 'Estrategias y guiones de venta para comerciales que venden tecnología educativa a universidades, colegios, empresas y administraciones públicas.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de ventas especializado en EdTech y soluciones de formación corporativa. Has cerrado contratos con universidades, departamentos de RRHH de grandes empresas y administraciones públicas. Entiendes los largos ciclos de venta del sector educativo, los comités de compra y las particularidades de vender a instituciones.

**objetivo:** Desarrollar una estrategia de ventas y un playbook completo para vender mi solución EdTech a instituciones educativas y empresas con necesidades de formación.

**Contexto de ventas:**
- Tipo de solución EdTech: [LMS / plataforma de contenidos / herramienta de evaluación / tutor IA / formación corporativa]
- Mercado objetivo principal: [universidades / colegios / empresas / administración pública]
- Ticket medio del contrato: [rango anual]
- Ciclo de venta típico: [meses]
- Principal competidor: [si lo conoces]

**Parte 1 — Mapeo del proceso de compra en instituciones educativas**

Explícame cómo funciona el proceso de compra en los siguientes tipos de organización:

1. **Universidad pública**: quién decide, quién influye, los procesos de licitación pública, los tiempos del año académico
2. **Empresa privada (L&D / RRHH)**: el comité de aprobación, la relación con IT, el presupuesto de formación y sus ciclos
3. **Red de colegios privados**: la dinámica entre el director pedagógico, el equipo de dirección y los padres como influenciadores
4. **Administración pública**: licitaciones, pliegos de condiciones, criterios de adjudicación

Para cada tipo, dame el mapa de stakeholders con su rol, sus prioridades y el argumento de venta específico para cada uno.

**Parte 2 — Propuesta de valor y diferenciación**

Ayúdame a construir una propuesta de valor clara para mi solución EdTech:

- Cómo cuantificar el impacto de mi solución en métricas que importan a cada tipo de comprador (tasas de finalización, coste por hora formativa, reducción de tiempos de onboarding, mejora de resultados académicos)
- Cómo diferenciarme de los LMS tradicionales (Moodle, Canvas, Blackboard) argumentando las ventajas de la IA
- Cómo construir el business case para el CFO o responsable financiero: ROI proyectado y payback period
- Cómo manejar el escepticismo sobre la IA en educación: argumentos para educadores y pedagogos que desconfían de la tecnología
- Qué casos de éxito o referencias son más persuasivos según el tipo de institución

**Parte 3 — Prospección y generación de pipeline**

Dame estrategias específicas para generar pipeline en el sector EdTech:

- Los eventos y conferencias del sector educativo donde debo tener presencia
- Estrategia de LinkedIn para conectar con directores académicos, responsables de L&D y decanos
- Cómo usar contenido de thought leadership para generar leads inbound de calidad
- Estrategia de outbound en frío para instituciones educativas: qué canales, qué mensajes, qué cadencia
- Programa de partners (integradores, consultoras pedagógicas) para ampliar el alcance

**Parte 4 — Demostración del producto y prueba piloto**

Diseña el proceso de demo y piloto ideal para mi solución EdTech:

- Cómo estructurar una demo de 45 minutos que sea 70% escucha activa y 30% demostración
- Qué configurar antes de la demo para personalizarla con el contexto de la institución
- Cómo diseñar un piloto de 30-60 días que genere resultados demostrables y cierre el deal
- Métricas de éxito del piloto que le importan a cada tipo de comprador
- Cómo gestionar el piloto para que el equipo interno del cliente se convierta en campeón interno de la solución

**Parte 5 — Cierre y negociación en EdTech**

Dame tácticas específicas para el cierre de contratos educativos:
- Cómo manejar los largos tiempos de decisión sin perder el momentum
- Negociación con el departamento de compras de una universidad o gran empresa
- Condiciones contractuales típicas del sector: SLAs, protección de datos de menores (COPPA, GDPR), requisitos de accesibilidad
- Cómo estructurar el contrato para maximizar la expansión futura (precios por institución, usuarios adicionales, módulos extra)
- Protocolo de onboarding post-venta que garantice el éxito del cliente y la renovación
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Vender soluciones EdTech a instituciones educativas y empresas con estrategias de ventas especializadas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de plataformas educativas con IA',
                'description'      => 'Framework para product managers en EdTech: cómo priorizar features educativas, medir el aprendizaje como outcome y diseñar roadmaps centrados en el éxito del estudiante.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior especializado en EdTech con experiencia en plataformas de aprendizaje online, sistemas de evaluación y herramientas de formación corporativa. Tu enfoque es medir el éxito del producto no solo por métricas de engagement, sino por outcomes de aprendizaje reales.

**objetivo:** Desarrollar un framework de product management para plataformas educativas que equilibre los objetivos de negocio con el impacto real en el aprendizaje de los estudiantes.

**Contexto del producto:**
- Tipo de plataforma EdTech: [descripción]
- Usuarios principales: [estudiantes / instructores / administradores / empresas]
- Etapa del producto: [MVP / growth / scale]
- Métricas actuales: [DAU, MAU, tasa de finalización, NPS si los tienes]
- Principal reto de producto: [engagement / retención / resultados de aprendizaje / monetización]

**Pilar 1 — Métricas de producto para EdTech**

Define el North Star Metric de mi plataforma y el árbol de métricas derivadas:

1. Por qué "horas de contenido consumido" es una métrica vanity en EdTech y qué medir en su lugar
2. Cómo medir el aprendizaje real (learning outcomes) como métrica de producto: pre/post assessments, performance en ejercicios, transferencia a la práctica
3. El framework de métricas de engagement educativo: tasas de finalización por módulo, tasa de retorno diaria, tiempo hasta el primer logro
4. Métricas de calidad del instructor y del contenido: NPS por curso, tasa de abandono por módulo, engagement en ejercicios vs. videos
5. Cómo construir el leading indicator que predice si un estudiante completará el curso con 4 semanas de antelación

Para cada métrica, dame la fórmula, la fuente de datos y el umbral que define "saludable" vs. "problemático".

**Pilar 2 — Discovery de producto en EdTech**

Diseña para mí el proceso de discovery de producto adaptado al sector educativo:

- Cómo hacer entrevistas de usuario con estudiantes, instructores y patrocinadores (empresa que paga la formación) para descubrir necesidades reales vs. declaradas
- Cómo analizar los datos de comportamiento de la plataforma para identificar dónde el aprendizaje se rompe
- Cómo involucrar a expertos pedagógicos (instructional designers, psicólogos educativos) en el proceso de ideación de features
- Cómo validar hipótesis de producto en EdTech sin comprometer la calidad del aprendizaje durante el experimento
- Cómo priorizar features en la intersección de impacto en el aprendizaje e impacto en el negocio

**Pilar 3 — Roadmap y priorización en EdTech**

Ayúdame a construir un roadmap de producto para los próximos 12 meses que incluya:

- Features de aprendizaje adaptativo priorizadas por impacto en los outcomes de los estudiantes
- Mejoras de engagement y retención para reducir el abandono (el principal reto del sector)
- Features de monetización que no comprometan la experiencia de aprendizaje
- Integraciones con herramientas educativas externas (Zoom, Google Classroom, sistemas de certificación)
- Infraestructura de datos y analítica de aprendizaje para habilitar la personalización

Para cada iniciativa, usa el framework ICE (Impacto, Confianza, Esfuerzo) adaptado a EdTech.

**Pilar 4 — Diseño de experimentos en EdTech**

Diseña el programa de experimentación de mi plataforma considerando las particularidades educativas:

- Cómo hacer A/B testing en EdTech sin perjudicar al grupo de control en su aprendizaje
- Cómo medir el impacto de un experimento de engagement en los outcomes de aprendizaje a largo plazo
- Cómo diseñar experimentos de IA educativa (tutor virtual, feedback automatizado) con grupos de control y métricas de seguridad
- El papel de los instructores en los experimentos: cómo involucrarlos sin crear sesgo
- Cómo comunicar los resultados de los experimentos a los stakeholders educativos (que a menudo son escépticos del enfoque cuantitativo)

**Pilar 5 — Estrategia de IA en el roadmap EdTech**

Define la estrategia de incorporación de IA en mi plataforma educativa para los próximos 18 meses:
- Qué casos de uso de IA tienen mayor impacto demostrado en el aprendizaje (prioridad 1)
- Qué casos de uso de IA son hype pero tienen impacto pedagógico cuestionable (evitar o investigar más)
- Cómo construir el data flywheel: más usuarios → mejores datos → mejor IA → mejores outcomes → más usuarios
- Consideraciones éticas de la IA en educación: sesgos en la evaluación, privacidad de datos de menores, dependencia del estudiante
- Cómo comunicar las features de IA a instructores escépticos y administradores conservadores
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Framework de product management para plataformas EdTech centrado en outcomes de aprendizaje',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programas de formación y upskilling con IA para RRHH',
                'description'      => 'Diseña programas de aprendizaje corporativo efectivos usando IA: identificación de brechas de habilidades, rutas de aprendizaje personalizadas y medición del impacto de la formación.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Learning & Development (L&D) con experiencia en diseño de programas de formación corporativa, gestión de plataformas de e-learning y medición del impacto del aprendizaje en el desempeño organizacional. Conoces las metodologías modernas de L&D (70-20-10, microlearning, learning in the flow of work) y cómo integrar la IA para personalizarlas.

**objetivo:** Diseñar un programa de formación corporativa moderno y efectivo usando IA, que identifique brechas de habilidades, personalice las rutas de aprendizaje y demuestre impacto real en el negocio.

**Contexto organizacional:**
- Tamaño de la empresa: [número de empleados]
- Industria: [sector]
- Principal reto de talento: [upskilling técnico / habilidades blandas / liderazgo / onboarding / compliance]
- Plataforma de formación actual: [LMS que usas o si no tienes ninguno]
- Presupuesto de L&D por empleado/año: [rango]

**Módulo 1 — Diagnóstico de brechas de habilidades**

Diseña para mí un proceso de Skills Gap Analysis que use IA para:

1. Definir el perfil de competencias futuras requeridas para cada rol en los próximos 3 años (basado en tendencias de la industria y estrategia de negocio)
2. Evaluar el nivel actual de habilidades de cada empleado mediante assessments multimodales (tests, proyectos, evaluación 360°)
3. Calcular la brecha individual y colectiva por departamento y rol
4. Priorizar qué brechas tienen mayor impacto en los objetivos de negocio
5. Automatizar el proceso de actualización del mapa de habilidades cuando cambia la estrategia o el mercado

Para cada paso, dame las herramientas concretas a usar y cómo integrar la IA para acelerar el análisis.

**Módulo 2 — Diseño de rutas de aprendizaje personalizadas**

Crea el framework para generar rutas de aprendizaje individualizadas que:

- Combinen diferentes modalidades de aprendizaje (cursos online, mentoring, proyectos en el trabajo, comunidades de práctica)
- Se adapten al estilo de aprendizaje, la disponibilidad de tiempo y el nivel actual de cada empleado
- Incluyan hitos de progreso claros y checkpoints de evaluación
- Se actualicen automáticamente según el desempeño en las evaluaciones intermedias
- Integren el aprendizaje en el flujo de trabajo (learning in the flow of work) para maximizar la transferencia

Dame la arquitectura de datos necesaria para personalizar las rutas y ejemplos de rutas para roles específicos de mi industria.

**Módulo 3 — Curación de contenido de aprendizaje con IA**

Enséñame a usar IA para:

- Evaluar y seleccionar contenido externo (cursos de LinkedIn Learning, Coursera, Udemy) relevante para cada brecha de habilidades
- Crear contenido interno de formación: guías de procesos, FAQs, casos prácticos, microlearning de 5 minutos
- Mantener el contenido actualizado automáticamente cuando cambian los procesos o la normativa
- Personalizar el nivel y el enfoque del contenido según el perfil del empleado
- Crear evaluaciones y ejercicios prácticos a partir del contenido existente

**Módulo 4 — Medición del impacto de la formación**

Diseña el sistema de medición usando el modelo Kirkpatrick actualizado con analítica de IA:

- **Nivel 1 (Reacción)**: encuestas de satisfacción post-formación con análisis de sentimiento de respuestas abiertas
- **Nivel 2 (Aprendizaje)**: evaluaciones pre/post formación con análisis de ganancia de conocimiento
- **Nivel 3 (Conducta)**: medición de cambios de comportamiento en el trabajo 30-90 días post-formación
- **Nivel 4 (Resultados)**: correlación entre formación completada y KPIs de negocio (productividad, retención, errores, ventas)

Para cada nivel, dame las métricas específicas, cómo recogerlas y cómo presentarlas al Comité de Dirección.

**Módulo 5 — Gestión del cambio y adopción de la formación**

Dame estrategias para aumentar la participación y la finalización de los programas de formación:
- Cómo crear una cultura de aprendizaje continuo en la organización
- Estrategias de comunicación y gamificación para aumentar la motivación de los empleados
- Cómo involucrar a los managers como promotores del aprendizaje de sus equipos
- Cómo manejar la resistencia de empleados que perciben la formación como obligación y no como oportunidad
- Cómo demostrar el ROI de L&D al CFO para conseguir más presupuesto
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programas de formación corporativa con IA, identificar brechas de habilidades y medir impacto',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de inversiones en EdTech y formación con IA',
                'description'      => 'Framework financiero para evaluar el ROI de plataformas educativas, inversiones en formación corporativa y modelos de negocio EdTech.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en el sector EdTech y en la economía del aprendizaje. Tienes experiencia evaluando el ROI de inversiones en tecnología educativa, modelizando la economía de plataformas de e-learning y analizando la rentabilidad de diferentes modelos de negocio EdTech.

**objetivo:** Construir un framework de análisis financiero para evaluar el ROI de mi inversión en EdTech, ya sea como empresa que invierte en formación de empleados o como negocio EdTech que necesita demostrar su valor financiero.

**Contexto:**
- Perfil: [empresa que invierte en formación de empleados / startup EdTech / inversora en EdTech]
- Tamaño de la inversión o plataforma: [rango]
- Horizonte de análisis: [1 año / 3 años / 5 años]
- Métricas financieras que más importan a mi organización: [ROI / EBITDA / payback period / LTV/CAC]

**Análisis 1 — ROI de la formación corporativa**

Para empresas que invierten en formación de empleados, construye el modelo de ROI que incluya:

1. **Costes directos de la formación**: licencias de LMS, costes de contenido, horas de instructor, tiempo de los empleados en formación (coste de oportunidad)
2. **Beneficios cuantificables**: reducción del tiempo de onboarding, reducción de errores y retrabajo, aumento de productividad tras la formación, reducción del churn de empleados vinculada a desarrollo profesional
3. **Beneficios difíciles de cuantificar**: cómo asignarles valor monetario aproximado (mejora de cultura, capacidad de innovación, satisfacción del empleado)
4. **Modelo de cálculo del ROI**: fórmula, supuestos y rangos de sensibilidad
5. **Benchmarks de la industria**: qué ROI de formación se considera bueno en mi sector

Para cada elemento, dame la fórmula de cálculo y las fuentes de datos internas que necesito para completarla.

**Análisis 2 — Modelo de negocio y unit economics para EdTech**

Para startups o plataformas EdTech, analiza los siguientes modelos y su sostenibilidad financiera:

- **Freemium a premium**: cómo calcular el CAC, el LTV y la tasa de conversión que hacen sostenible el modelo
- **B2B de formación corporativa**: el impacto del ciclo de venta largo en el cash flow y cómo financiarlo
- **MOOC con certificaciones de pago**: la economía de escala necesaria para ser rentable con precios bajos
- **Bootcamp intensivo**: análisis de margen por cohorte, tasa de empleo como garantía y su impacto financiero
- **Marketplace de cursos**: la economía de la comisión, los incentivos del instructor y la retención del estudiante

Para cada modelo, dame los KPIs financieros más importantes y los umbrales de sostenibilidad.

**Análisis 3 — Valoración de startups EdTech**

Dame un framework de valoración para startups EdTech que contemple:

- Múltiplos de valoración típicos del sector: ARR múltiple para SaaS educativo, GMV múltiple para marketplaces
- Cómo valorar el contenido propietario y la comunidad de estudiantes como activos intangibles
- El impacto de la tasa de completación y el NPS en la valoración (diferenciación de calidad)
- Comparativa de valoraciones recientes en el mercado EdTech por etapa y modelo de negocio
- Factores que priman los inversores en EdTech en el mercado actual (post-pandemia, era de IA)

**Análisis 4 — Métricas de due diligence para inversión en EdTech**

Si estoy considerando invertir en una plataforma EdTech (como VC, PE o strategic buyer), dame el checklist de due diligence financiero y operativo:

- Métricas de revenue: MRR/ARR, NRR, tasa de crecimiento ajustada por estacionalidad académica
- Métricas de calidad educativa con impacto financiero: tasa de finalización, tasa de empleo post-bootcamp, NPS y su correlación con retención
- Concentración de riesgo: dependencia de pocos clientes corporativos, concentración de revenue en un curso
- Escalabilidad del modelo pedagógico: ¿el contenido escala sin degradar la calidad a medida que crece?
- Riesgos regulatorios: acreditaciones, reconocimiento de titulaciones, regulación de datos de menores

**Análisis 5 — Impacto de la IA en la economía EdTech**

Analiza cómo la IA está transformando la economía del sector educativo:
- Cómo la IA reduce el coste marginal de la personalización y qué significa para los márgenes
- El riesgo de comoditización del contenido educativo ante la IA generativa y cómo diferenciarse
- Oportunidades de nuevo revenue habilitadas por la IA: tutores virtuales premium, evaluación automatizada a escala
- Cómo modelizar el impacto de la IA en el P&L de una plataforma EdTech en los próximos 3 años
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar el ROI de inversiones en EdTech y construir modelos financieros para plataformas educativas',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal de plataformas EdTech y protección de datos educativos con IA',
                'description'      => 'Guía legal para startups EdTech y departamentos de formación: RGPD en educación, protección de datos de menores, contratos con instituciones y acreditación.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho de la educación, protección de datos y contratos tecnológicos con experiencia asesorando a startups EdTech y departamentos de L&D corporativo. Conoces la regulación aplicable en España y la UE al sector educativo digital.

**objetivo:** Entender y cumplir con el marco legal aplicable a mi plataforma educativa digital o a mi programa de formación corporativa, minimizando los riesgos legales y construyendo confianza con mis usuarios e instituciones clientes.

**Contexto legal:**
- Tipo de entidad: [startup EdTech / departamento de formación de empresa / institución educativa / academia online]
- Usuarios de la plataforma: [adultos / menores de 14 años / menores entre 14 y 18 / mixto]
- Geografía de operación: [España / UE / internacional]
- Tipo de datos que tratas: [datos académicos / evaluaciones / comportamiento de aprendizaje / datos de empleo]
- Titulaciones o certificaciones que emites: [si aplica]

**Área 1 — Protección de datos en plataformas educativas (RGPD)**

Ayúdame a estructurar el cumplimiento RGPD específico para una plataforma educativa:

1. ¿Qué base jurídica uso para tratar los datos de aprendizaje de mis usuarios? (contrato, interés legítimo, consentimiento)
2. Cómo redactar una política de privacidad clara y comprensible para estudiantes y sus familias
3. Qué datos de aprendizaje puedo usar para personalización con IA y cuáles requieren consentimiento explícito
4. Los derechos de los estudiantes sobre sus datos: cómo implementar el derecho de acceso, rectificación, supresión y portabilidad de datos educativos
5. Cuánto tiempo puedo conservar los datos de aprendizaje y cómo gestionar su eliminación

Para cada punto, dame la interpretación legal aplicada a mi caso concreto y las medidas técnicas necesarias.

**Área 2 — Protección de datos de menores en EdTech**

Si mi plataforma accede a menores, explícame:

- Los requisitos específicos del RGPD para menores: consentimiento parental hasta qué edad, qué datos no puedo tratar aunque el menor consienta
- Cómo verificar la edad de los usuarios de forma técnicamente viable sin crear fricción excesiva
- Los requisitos adicionales de COPPA (si opero en mercado norteamericano) y cómo compatibilizarlos con el RGPD
- El diseño de interfaces adecuado para menores según las directrices del ICO (age-appropriate design)
- Qué funcionalidades de IA debo restringir o eliminar cuando los usuarios son menores (perfilado, contenido generado, análisis de comportamiento)

**Área 3 — Contratos con instituciones educativas**

Diseña para mí las cláusulas esenciales del contrato de servicio EdTech con una institución:

- Cláusula de tratamiento de datos: quién es responsable y quién es encargado del tratamiento, y sus obligaciones
- Cláusula de propiedad intelectual: quién es dueño del contenido generado en la plataforma (estudiantes, institución, mi empresa)
- SLA educativo: disponibilidad durante períodos de exámenes, soporte durante el calendario académico
- Cláusula de acreditación: qué ocurre si mi plataforma pierde la acreditación necesaria durante la vigencia del contrato
- Limitación de responsabilidad: cómo limitar mi responsabilidad ante fallos técnicos que afecten a exámenes o evaluaciones críticas

**Área 4 — Propiedad intelectual del contenido educativo**

Ayúdame a proteger y usar contenido educativo de forma legal:

- Cómo proteger el contenido de mis cursos ante el plagio y la redistribución no autorizada
- Qué uso puedo hacer de materiales con copyright en un contexto educativo (excepción de cita, licencias Creative Commons)
- Cómo estructurar los contratos con instructores freelance para asegurar que mi empresa retiene los derechos de los cursos
- Qué licencia otorgo a los estudiantes sobre los materiales del curso y cómo limitarla
- Uso de IA para generar contenido educativo: consideraciones de derechos de autor del output generado

**Área 5 — Acreditación y reconocimiento de titulaciones**

Oriéntame sobre el marco legal de las certificaciones educativas:
- Diferencia legal entre certificado de asistencia, certificado de aprovechamiento y titulación oficial en España
- Qué requisitos debe cumplir mi plataforma para emitir certificados con validez oficial
- Cómo gestionar el fraude en las evaluaciones para proteger la integridad de mis certificaciones
- Qué ocurre legalmente si un empleador o institución cuestiona la validez de un certificado que emití
- Cómo homologar mi formación para que sea reconocida como formación bonificable por la Fundación SEPE
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Cumplir con el marco legal de plataformas EdTech: RGPD educativo, datos de menores y contratos institucionales',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte y éxito del estudiante en plataformas EdTech con IA',
                'description'      => 'Estrategias para equipos de Customer Success en EdTech: reducir el abandono, aumentar la finalización de cursos y gestionar la experiencia del estudiante con apoyo de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Student Success especializado en plataformas educativas online. Tienes amplia experiencia en la reducción del abandono de cursos, la gestión de la experiencia del estudiante y la implementación de sistemas de soporte escalables con IA para plataformas EdTech.

**objetivo:** Diseñar una estrategia de éxito del estudiante que reduzca el abandono, aumente las tasas de finalización y convierta a los estudiantes en promotores activos de mi plataforma.

**Contexto EdTech:**
- Tipo de plataforma: [cursos online / bootcamp / LMS corporativo / academia de idiomas]
- Tasa de finalización actual: [%]
- Principal causa de abandono: [falta de tiempo / dificultad del contenido / pérdida de motivación / problemas técnicos]
- Tamaño del equipo de soporte: [número de personas]
- Ratio estudiantes por agente de soporte: [número]

**Pilar 1 — Sistema de detección temprana de abandono**

Diseña para mí un sistema de alerta temprana de abandono estudiantil que use IA para:

1. Identificar las señales de comportamiento que predicen el abandono con 2-3 semanas de antelación (inactividad, caída en el engagement, tiempo en plataforma, resultados en evaluaciones)
2. Calcular un score de riesgo de abandono por estudiante actualizado diariamente
3. Segmentar los estudiantes en riesgo por causa probable: desmotivación vs. dificultad vs. problema de tiempo vs. problema técnico
4. Disparar intervenciones automatizadas apropiadas para cada segmento
5. Medir la efectividad de las intervenciones y ajustar el modelo con el tiempo

Para cada componente, dame los datos necesarios, el algoritmo recomendado y el umbral de activación de alertas.

**Pilar 2 — Estrategias de intervención para reducir el abandono**

Dame un playbook de intervenciones ordenadas por coste e intensidad:

- **Intervención automatizada nivel 1**: emails y notificaciones personalizadas para estudiantes con 7 días de inactividad
- **Intervención automatizada nivel 2**: mensaje del tutor virtual con oferta de ayuda personalizada tras 14 días de inactividad
- **Intervención humana nivel 3**: llamada de check-in de un Student Success Manager para estudiantes de alto riesgo
- **Intervención de contenido**: módulo de recuperación o módulo simplificado para estudiantes que se atascan en un punto específico
- **Intervención comunitaria**: conectar al estudiante en riesgo con un compañero o mentor activo del mismo nivel

Para cada intervención, dame el guión exacto (email, mensaje, guión de llamada) y las métricas de éxito.

**Pilar 3 — Sistema de soporte escalable con IA**

Diseña el sistema de soporte para mi plataforma que combine IA y agentes humanos:

- Qué preguntas puede resolver un chatbot de IA sin intervención humana (técnicas, sobre contenido, de progreso)
- Cómo diseñar el sistema de escalado de tickets: cuándo el chatbot debe pasar a un humano
- Cómo usar IA para redactar respuestas de soporte que el agente humano revise y envíe (AI-assisted response)
- Gestión del conocimiento: cómo construir y mantener la base de conocimiento del soporte con actualización semiautomática
- Métricas de calidad del soporte en EdTech: tiempo de primera respuesta, tasa de resolución en primer contacto, impacto en la continuación del curso

**Pilar 4 — Comunidad y peer learning como motor de retención**

Crea una estrategia de comunidad de aprendizaje que:

- Diseñe los canales y espacios de interacción apropiados para cada tipo de estudiante
- Implemente el peer learning como herramienta de retención: cómo los estudiantes que ayudan a otros tienen mayor tasa de finalización
- Gestione la comunidad con moderación asistida por IA: detección de preguntas sin respuesta, toxicidad, contenido fuera de tema
- Cree programas de mentoring entre estudiantes avanzados y nuevos
- Mida el impacto de la participación en la comunidad en la tasa de finalización y el NPS

**Pilar 5 — Celebración de logros y programa de alumni**

Dame estrategias para el momento de la finalización del curso y la gestión del alumni:
- Diseño del momento de celebración al completar el curso: cómo hacerlo memorable y compartible en redes sociales
- Ceremonia virtual de graduación y entrega de certificados con IA para personalizar el reconocimiento
- Programa de alumni: cómo mantener conectados a los exestudiantes y convertirlos en promotores y fuente de referidos
- Cómo usar la red de alumni para la inserción laboral de nuevos estudiantes
- Seguimiento del impacto post-curso: cómo medir si los estudiantes aplicaron lo aprendido y cómo usar esos datos para mejorar el curso
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reducir el abandono de cursos y aumentar la finalización con estrategias de Student Success apoyadas en IA',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Crear y vender cursos online como freelancer con IA',
                'description'      => 'Guía completa para que los freelancers creen, lancen y moneticen cursos online usando IA en cada etapa: desde la idea hasta la venta recurrente.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de creadores de contenido educativo con experiencia ayudando a freelancers y profesionales independientes a lanzar cursos online exitosos. Conoces las principales plataformas (Udemy, Teachable, Hotmart, Kajabi), las estrategias de lanzamiento y cómo usar la IA para acelerar el proceso de creación sin perder la autenticidad.

**objetivo:** Ayudarme a crear, lanzar y monetizar un curso online usando IA en cada etapa del proceso, desde validar la idea hasta conseguir ventas recurrentes.

**Mi perfil de creador:**
- Área de expertise: [tu especialidad: diseño / programación / marketing / idiomas / finanzas / otro]
- Audiencia objetivo: [perfil del estudiante que quiero ayudar]
- Plataforma en la que quiero publicar: [Udemy / Teachable / Hotmart / Kajabi / mi propio web / aún no lo sé]
- Precio objetivo del curso: [rango]
- Tiempo disponible para crear el curso: [horas por semana]

**Fase 1 — Validación de la idea del curso**

Antes de crear nada, ayúdame a validar que mi idea de curso tiene demanda real:

1. Cómo investigar con IA si hay suficiente audiencia buscando aprender lo que quiero enseñar (análisis de keywords, búsquedas en YouTube, preguntas en Reddit y foros)
2. Cómo analizar los cursos de la competencia en mi nicho: qué funciona, qué falta, dónde está la oportunidad de diferenciación
3. Cómo crear una encuesta de validación y a quién enviársela para obtener feedback real antes de invertir tiempo
4. El mínimo producto viable de un curso: cómo hacer un mini-taller de validación antes de crear el curso completo
5. Señales que me dicen que debo pivotar la idea vs. señales que me dicen que debo seguir adelante

**Fase 2 — Estructura y diseño del curriculum**

Guíame para diseñar el curriculum de mi curso con IA:

- Cómo definir la transformación del estudiante (del punto A al punto B) como norte del diseño instruccional
- Framework para organizar los módulos y lecciones de forma que el estudiante mantenga la motivación y el progreso
- Cómo decidir la duración óptima de cada lección según el formato y la plataforma
- Uso de IA para generar el esquema completo del curriculum a partir de mis notas y expertise
- Cómo incluir ejercicios prácticos, proyectos y evaluaciones que aumenten la retención y los testimonios

Dame el esquema de curriculum para un curso de [X horas] sobre mi tema, con títulos de módulos y lecciones de ejemplo.

**Fase 3 — Creación del contenido con IA**

Enséñame a usar IA para acelerar la producción del contenido sin que suene robótico:

- Cómo usar IA para generar guiones de lecciones que luego personalizo con mis experiencias y ejemplos reales
- Creación de slides, workbooks y materiales de apoyo del curso con IA
- Cómo generar preguntas de evaluación y ejercicios prácticos para cada módulo
- Uso de IA para crear descripciones, títulos de lecciones y textos de la landing page del curso
- Mis grabaciones: cómo usar IA para transcribir, editar y mejorar las lecciones ya grabadas

**Fase 4 — Lanzamiento y estrategia de ventas**

Diseña para mí una estrategia de lanzamiento del curso que incluya:

- Pre-lanzamiento: cómo construir una lista de espera y generar expectativa en las 4 semanas previas
- Secuencia de emails de lanzamiento: 7 emails en 7 días que cuenten la historia, den valor y conviertan
- Estrategia de precio de lanzamiento: precio de early adopter, oferta limitada, cómo comunicar el precio completo posterior
- Testimonios rápidos: cómo conseguir los primeros testimonios en la semana del lanzamiento
- Uso de IA para crear variantes del copy del lanzamiento para diferentes canales (email, redes sociales, LinkedIn)

**Fase 5 — Ventas recurrentes y escalado**

Dame un plan para pasar del lanzamiento puntual a las ventas recurrentes:
- Estrategia de ventas evergreen: cómo configurar un funnel automático que venda el curso sin lanzamientos
- Cómo crear un mini-curso o lead magnet con IA que alimente el funnel continuamente
- Estrategia de afiliados: cómo reclutar y gestionar socios que vendan mi curso a cambio de comisión
- Actualización del curso: con qué frecuencia actualizar el contenido y cómo comunicarlo para reactivar estudiantes anteriores
- Escalado: cuándo y cómo crear el segundo curso, la membresía o el programa de mentoring para aumentar el ticket medio
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear, lanzar y monetizar cursos online como freelancer usando IA en cada etapa del proceso',
                'vote_score'       => 58,
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
