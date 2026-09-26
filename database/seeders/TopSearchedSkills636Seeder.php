<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills636Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de atracción para universidades y centros educativos con IA',
                'description'      => 'Crea estrategias de marketing de contenidos y campañas de captación de estudiantes para instituciones de educación superior usando Claude.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marketing especializado en educación superior con experiencia trabajando con universidades privadas, escuelas de negocio y centros de formación profesional en España y Latinoamérica. Tu especialidad es el marketing de atracción orientado a captar estudiantes y mejorar la reputación de las instituciones educativas.

tarea principal: Diseña una estrategia de marketing de contenidos y captación de estudiantes completa para una institución de educación superior. La estrategia debe ser realista, adaptada al presupuesto típico de una institución educativa mediana y orientada a resultados medibles.

Bloque 1 — Diagnóstico de posicionamiento
Diseña un marco de análisis de posicionamiento para la institución que incluya:
- Cómo identificar la propuesta de valor diferencial frente a competidores
- Los tres arquetipos de estudiante más frecuentes (personas de comprador) y cómo hablarle a cada uno
- El mapa del viaje del estudiante desde el primer contacto hasta la matrícula
- Los touchpoints críticos donde la institución puede ganar o perder un prospecto

Bloque 2 — Estrategia de contenidos para captación
Desarrolla un plan de contenidos para los 12 meses del ciclo de captación que incluya:
- Tipos de contenido más efectivos para cada etapa del funnel (conciencia, consideración, decisión)
- Calendario editorial adaptado a los momentos clave del año académico
- Estrategia para LinkedIn, Instagram y TikTok según el tipo de programa (grado, máster, FP)
- Cómo usar testimonios de exalumnos y casos de éxito de forma auténtica y persuasiva
- Métricas de contenido que realmente importan en el sector educativo (no solo likes y alcance)

Bloque 3 — Captación y nurturing de leads
Diseña el sistema de captación y seguimiento de prospectos:
- Tipos de lead magnets más efectivos para educación superior (guías, webinars, calculadoras de ROI)
- Secuencia de email nurturing de 6 correos para guiar al prospecto desde la descarga hasta la entrevista
- Cómo personalizar la comunicación según la etapa de vida del prospecto (recién graduado, profesional con experiencia, cambio de carrera)
- Métricas clave del pipeline de captación y cómo optimizarlo

Bloque 4 — Campañas de pago y optimización
Describe las mejores prácticas para publicidad de pago en el sector educativo:
- Segmentaciones más efectivas en Meta y Google para educación
- Cómo estructurar campañas para programas de alto ticket (másteres y MBA)
- Presupuesto orientativo y expectativas realistas de CPL (coste por lead) y CPA (coste por matriculación)
- Errores más comunes que cometen las instituciones educativas en publicidad de pago

Bloque 5 — KPIs y reporting para el equipo directivo
Define un cuadro de mando de marketing educativo con los indicadores más relevantes para presentar a la dirección académica, explicando qué significa cada métrica y cómo interpretar las variaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing para captación de estudiantes universitarios',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistemas de gestión académica universitaria con IA: arquitectura y automatización',
                'description'      => 'Diseña y optimiza sistemas de información académica para universidades, automatizando procesos de matrícula, calificaciones y seguimiento del estudiante.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de información para el sector educativo, con experiencia diseñando e integrando plataformas para universidades, escuelas de negocio y centros de formación. Tu conocimiento abarca desde los LMS (Learning Management Systems) hasta los ERP académicos y los sistemas de analítica de datos del estudiante.

instrucción de contexto: Las instituciones de educación superior gestionan datos complejos y procesos administrativos críticos: matrícula, calificaciones, asistencia, expedientes académicos, becas, comunicaciones con el estudiante y más. El objetivo de esta sesión es diseñar una arquitectura de sistemas que automatice estos procesos y mejore la experiencia de todos los actores involucrados.

Módulo 1 — Auditoría del ecosistema tecnológico actual
Diseña un cuestionario de diagnóstico para evaluar el estado tecnológico de una institución educativa. El cuestionario debe cubrir:
- Sistemas actuales en uso y sus integraciones (o falta de ellas)
- Procesos manuales que consumen más tiempo al personal administrativo
- Puntos de fricción para el estudiante en su experiencia digital
- Nivel de madurez en el uso de datos para la toma de decisiones
- Presupuesto tecnológico disponible y restricciones de infraestructura

Módulo 2 — Arquitectura de referencia para gestión académica
Propón una arquitectura de sistemas modular para una universidad mediana (5.000-20.000 estudiantes) que incluya:
- SIS (Student Information System): funcionalidades esenciales y criterios de selección
- LMS (Learning Management System): comparativa de las principales opciones del mercado con pros y contras para educación presencial, semipresencial y online
- CRM académico: gestión del ciclo de vida del estudiante desde prospecto hasta alumni
- Integración entre sistemas: APIs, middleware y estrategia de datos compartidos
- Módulo de analítica académica: indicadores de seguimiento del rendimiento del estudiante

Módulo 3 — Automatización de procesos críticos
Define los flujos de automatización prioritarios para reducir carga administrativa:
- Proceso de matrícula online: desde la solicitud hasta la confirmación
- Generación automática de horarios y asignación de aulas
- Notificaciones académicas automatizadas (avisos de asistencia, calificaciones, vencimientos de plazos)
- Gestión de expedientes académicos y certificados digitales
- Proceso de solicitud y concesión de becas internas

Para cada proceso describe los pasos, los actores involucrados, los puntos de decisión y cómo la automatización reduce tiempos y errores.

Módulo 4 — Analítica de éxito del estudiante (Student Success Analytics)
Diseña un sistema de alerta temprana para identificar estudiantes en riesgo de abandono:
- Variables predictoras del abandono más significativas en educación superior
- Modelo de puntuación de riesgo y umbrales de intervención
- Flujo de actuación cuando se identifica un estudiante en riesgo
- Dashboard de seguimiento para tutores y coordinadores académicos

Módulo 5 — Plan de implementación y gestión del cambio
Proporciona una hoja de ruta de implementación por fases para la modernización tecnológica de la institución, incluyendo estrategias de gestión del cambio para el personal administrativo y docente resistente a la tecnología.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Arquitectura tecnológica para gestión académica universitaria',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de aprendizaje universitarias con IA',
                'description'      => 'Usa Claude para rediseñar la experiencia del estudiante universitario, desde el diseño instruccional hasta los entornos digitales de aprendizaje.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador instruccional y experto en experiencia de aprendizaje (Learning Experience Designer) con especialización en educación superior. Tu enfoque combina pedagogía activa, diseño centrado en el usuario y tecnología educativa para crear experiencias que aumenten el compromiso, la retención y los resultados académicos del estudiante.

tarea: Diseña un marco completo para rediseñar la experiencia de aprendizaje de un programa universitario, desde el análisis de necesidades hasta el prototipo de los principales elementos del diseño.

Fase 1 — Diagnóstico de la experiencia actual del estudiante
Diseña un proceso de investigación centrado en el usuario para mapear la experiencia real del estudiante universitario:
- Guía de entrevista en profundidad (12 preguntas) para estudiantes activos
- Encuesta cuantitativa de satisfacción con la experiencia académica (20 ítems)
- Plantilla de mapa de viaje del estudiante (student journey map) desde la matrícula hasta la graduación
- Método para identificar los momentos de mayor frustración (pain points) y los momentos de mayor satisfacción (delight moments)

Fase 2 — Principios de diseño de experiencias de aprendizaje
Explica los principios pedagógicos modernos más relevantes para la educación superior presencial y online:
- Aprendizaje activo y aprendizaje basado en proyectos (PBL)
- Diseño universal para el aprendizaje (UDL)
- Microaprendizaje y chunking del contenido
- Gamificación educativa aplicada (no superficial)
- Andamiaje (scaffolding) y liberación gradual de la responsabilidad
- Evaluación formativa continua versus evaluación sumativa

Fase 3 — Diseño del entorno de aprendizaje digital
Propón una arquitectura de experiencia digital para el estudiante universitario que incluya:
- Estructura del LMS: organización de materiales, navegación intuitiva, accesibilidad
- Tipos de actividades interactivas por tipo de contenido y objetivo de aprendizaje
- Estrategia de comunicación asíncrona y síncrona entre estudiantes y docentes
- Diseño de evaluaciones alternativas (portafolios, rúbricas, autoevaluación)
- Retroalimentación automatizada e inteligente para las actividades de práctica

Fase 4 — Prototipo de un módulo de aprendizaje
Diseña un módulo de aprendizaje de ejemplo de 4 semanas para una asignatura universitaria de tu elección. El módulo debe incluir:
- Objetivos de aprendizaje en formato SMART
- Secuencia de actividades semana a semana
- Materiales necesarios para cada actividad
- Criterios de evaluación detallados
- Momentos de retroalimentación formativa

Fase 5 — Métricas de éxito del diseño de aprendizaje
Define los KPIs que miden si el rediseño de la experiencia está funcionando, diferenciando entre métricas de corto plazo (engagement, completitud) y métricas de largo plazo (aprendizaje real, aplicación profesional).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Rediseño de experiencias de aprendizaje en educación superior',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de captación y conversión de estudiantes universitarios con IA',
                'description'      => 'Diseña un proceso de ventas consultivas para la captación de estudiantes de máster y posgrado, con scripts de entrevista y gestión del pipeline.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de admisiones y captación con experiencia en escuelas de negocio y universidades privadas de élite. Tu especialidad es el proceso de venta consultiva aplicado a la educación superior, donde el objetivo no es vender un producto sino ayudar a un prospecto a tomar la mejor decisión para su desarrollo profesional.

contexto clave: La captación de estudiantes para programas de alto ticket (másteres de 10.000-50.000 euros) requiere un proceso de ventas consultivas sofisticado, con tiempos de decisión de semanas o meses, múltiples partes interesadas (el propio candidato, su empresa, su familia) y una alta carga emocional en la decisión.

Parte 1 — Fundamentos del proceso de admisiones como venta consultiva
Explica en qué se diferencia la captación educativa de la venta tradicional:
- El rol del asesor de admisiones como orientador, no como vendedor
- Cómo gestionar la tensión entre los objetivos de matrícula de la institución y el interés genuino del candidato
- La ética en el proceso de admisiones: cuándo recomendar que el candidato no se matricule
- Los factores que el candidato evalúa realmente al elegir un programa (más allá del ranking)

Parte 2 — Proceso de cualificación y entrevista de admisiones
Diseña un proceso de cualificación de prospectos en tres etapas:
Etapa A — Cualificación inicial (primera llamada de 20 minutos):
- Preguntas de cualificación BANT adaptadas a educación (Budget, Authority, Need, Timeline)
- Señales de un candidato apto versus señales de alerta
- Cómo gestionar la llamada si el candidato no es apto para el programa

Etapa B — Entrevista de admisiones en profundidad (60-90 minutos):
- Estructura completa de la entrevista con preguntas abiertas de exploración vocacional
- Cómo identificar la motivación real detrás de la decisión de formarse
- Cómo presentar el programa de forma personalizada según el perfil del candidato
- Cómo gestionar las objeciones más frecuentes (precio, tiempo, incertidumbre del ROI)

Etapa C — Seguimiento hasta la decisión:
- Secuencia de seguimiento post-entrevista de 8 semanas
- Cómo involucrar a la empresa pagadora si procede
- Cómo usar los testimonios y casos de éxito de exalumnos en el cierre

Parte 3 — Gestión del pipeline de admisiones
Diseña un sistema de gestión del pipeline adaptado a los ciclos largos de decisión en educación superior:
- Etapas del pipeline con criterios de avance entre etapas
- Métricas de conversión por etapa y benchmarks del sector
- Dashboard de seguimiento del pipeline para el director de admisiones

Parte 4 — Formación del equipo de admisiones
Diseña un programa de onboarding y formación continua para asesores de admisiones junior, incluyendo role-plays de las situaciones más comunes y difíciles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimización del proceso de captación y admisiones universitarias',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Diseño de productos educativos digitales con IA: de la idea al lanzamiento',
                'description'      => 'Aplica metodologías de product management al desarrollo de plataformas, cursos online y herramientas EdTech con un enfoque centrado en el aprendizaje.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager especializado en EdTech (tecnología educativa) con experiencia lanzando plataformas de aprendizaje online, aplicaciones de tutoría y herramientas de gestión académica. Tu enfoque combina las metodologías estándar de gestión de producto con el conocimiento profundo de cómo aprenden las personas y qué hace que un producto educativo tenga un impacto real.

instrucción de arranque: El desarrollo de productos educativos digitales tiene particularidades importantes: el usuario (estudiante) y el comprador (institución o empleador) suelen ser personas diferentes, el éxito no se mide solo en retención sino en resultados de aprendizaje reales, y la resistencia al cambio por parte de docentes e instituciones puede hacer fracasar un producto técnicamente excelente.

Etapa 1 — Discovery: entender el problema educativo
Diseña un proceso de discovery adaptado al sector educativo:
- Cómo realizar entrevistas de usuario con tres tipos de actores: estudiantes, docentes e instituciones
- Plantilla de mapa de empatía para cada tipo de usuario
- Método para distinguir entre el problema real que tiene el usuario y el síntoma que describe
- Cómo validar si el problema es suficientemente grande y frecuente para justificar un producto

Etapa 2 — Definición del producto educativo
Una vez entendido el problema, diseña el marco de definición del producto:
- Propuesta de valor única del producto educativo
- Principios de diseño del producto (qué priorizamos y qué sacrificamos deliberadamente)
- Métricas de éxito duales: métricas de negocio (retención, revenue, NPS) y métricas de aprendizaje (tasa de completitud, aplicación del aprendizaje, cambio de comportamiento)
- Definición del MVP educativo: qué es lo mínimo que tiene que funcionar para validar que el aprendizaje ocurre

Etapa 3 — Roadmap del producto educativo
Construye un roadmap de 12 meses para un producto EdTech hipotético de tu elección. El roadmap debe:
- Organizar las iniciativas por trimestre con hipótesis de valor para cada una
- Distinguir entre funcionalidades de aprendizaje central, funcionalidades de engagement y funcionalidades administrativas
- Incluir hitos de validación de aprendizaje en cada trimestre
- Gestionar las expectativas de los stakeholders institucionales (que suelen pedir funcionalidades de reporting) versus las necesidades de los estudiantes (que piden simplicidad y contenido relevante)

Etapa 4 — Métricas de producto educativo
Define el sistema de métricas completo para un producto EdTech:
- Métricas de adquisición y activación
- Métricas de retención y engagement del aprendizaje
- Métricas de resultado educativo (lo más difícil de medir)
- Métricas de expansión y boca a boca institucional

Etapa 5 — Go-to-market para EdTech
Diseña la estrategia de lanzamiento del producto, considerando los ciclos de venta largos de las instituciones, la importancia de los pilotos validados y cómo conseguir los primeros clientes institucionales sin referencias previas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Product management aplicado al desarrollo de productos EdTech',
                'vote_score'       => 51,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento docente y personal universitario con IA',
                'description'      => 'Diseña sistemas de gestión de personas adaptados a las particularidades de las instituciones de educación superior: evaluación del desempeño docente, desarrollo y retención.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de recursos humanos especializado en el sector educativo universitario, con experiencia gestionando tanto el personal docente (profesores e investigadores) como el personal de administración y servicios (PAS). Tu conocimiento abarca las particularidades legales, culturales y motivacionales que hacen del entorno universitario un ecosistema de gestión de personas único y complejo.

tarea: Diseña un sistema integral de gestión de personas para una institución universitaria que atienda las necesidades específicas de sus distintos colectivos de empleados.

Sección 1 — Las particularidades del RRHH universitario
Explica en qué se diferencia gestionar personas en una universidad de hacerlo en una empresa:
- La cultura académica y la autonomía del docente como valor fundamental
- La dificultad de evaluar el rendimiento en actividades de investigación y docencia
- La coexistencia de personal funcionario, laboral, asociado y externo con regímenes distintos
- Los ciclos de renovación y promoción del personal docente investigador (acreditación, cátedra)
- La motivación intrínseca del académico versus los incentivos extrínsecos disponibles

Sección 2 — Evaluación del desempeño docente
Diseña un sistema de evaluación del desempeño para el personal docente que sea:
- Pedagógicamente válido (mide lo que realmente importa en la docencia)
- Culturalmente aceptable (no genera resistencia por parte del claustro)
- Accionable (genera información útil para el desarrollo profesional)

El sistema debe incluir: dimensiones a evaluar, fuentes de información (encuestas de estudiantes, observación de clase, portafolio docente, métricas de resultados académicos), proceso de retroalimentación y vinculación con la compensación y la promoción.

Sección 3 — Atracción y retención del talento académico
Define las estrategias para atraer y retener a los mejores docentes e investigadores:
- Propuesta de valor para el empleado (EVP) de una institución universitaria
- Cómo diferenciarse de otras universidades en la guerra por el talento académico
- Programas de bienestar y flexibilidad adaptados a la vida académica
- Gestión de la carrera académica: desde el doctorando hasta el catedrático

Sección 4 — Desarrollo profesional del personal de administración y servicios
Diseña un programa de desarrollo para el PAS que incluya:
- Evaluación de competencias digitales y plan de upskilling
- Programa de movilidad interna entre departamentos
- Vías de promoción dentro del organigrama universitario
- Gestión de la resistencia al cambio en procesos de digitalización administrativa

Sección 5 — Cultura organizacional universitaria
Propón iniciativas para fortalecer la cultura organizacional en una universidad, teniendo en cuenta que la identidad institucional es fundamental para la retención y para la experiencia del estudiante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de gestión de personas para instituciones universitarias',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión presupuestaria y financiera de instituciones universitarias con IA',
                'description'      => 'Modela y optimiza la estructura financiera de una universidad: ingresos por matrícula, financiación pública, gestión de costes y planificación de inversiones.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero especializado en el sector de la educación superior, con experiencia gestionando las finanzas de universidades tanto públicas como privadas en España. Tu conocimiento abarca desde la planificación presupuestaria hasta la búsqueda de financiación alternativa y la optimización de la estructura de costes.

instrucción de trabajo: Las instituciones universitarias tienen una estructura financiera muy particular: alta dependencia de los ingresos por matrícula o financiación pública, costes fijos elevados (personal y espacios), y presión creciente por diversificar fuentes de ingresos. Esta sesión debe ayudar al director financiero a tener una visión completa y accionable de las finanzas universitarias.

Capítulo 1 — Estructura de ingresos universitarios
Mapea las fuentes de ingresos de una universidad mediana y explica cómo optimizar cada una:
- Ingresos por matrícula (grado, máster, doctorado, formación continua)
- Financiación pública (subvenciones, convenios, contratos programa)
- Ingresos por investigación (proyectos europeos, contratos con empresa, spin-offs)
- Servicios universitarios (residencias, cafeterías, parkings, instalaciones deportivas)
- Alumni y fundraising (donaciones, naming rights, mecenazgo empresarial)
- Educación online y programas internacionales

Para cada fuente de ingresos describe los factores de riesgo y las oportunidades de crecimiento.

Capítulo 2 — Estructura de costes y optimización
Analiza la estructura de costes típica de una universidad:
- Costes de personal docente e investigador (60-70% del presupuesto)
- Costes de personal administrativo y de servicios
- Costes de espacios (mantenimiento, energía, alquiler si aplica)
- Costes tecnológicos (licencias, infraestructura digital, ciberseguridad)
- Costes de marketing y captación de estudiantes

Para cada categoría propón estrategias de optimización de costes que no comprometan la calidad académica.

Capítulo 3 — Planificación presupuestaria estratégica
Diseña un proceso de planificación presupuestaria anual y plurianual para una universidad:
- Calendario del proceso presupuestario y actores involucrados
- Metodología de presupuesto por actividades adaptada al sector educativo
- Cómo gestionar las peticiones de los decanos y directores de departamento
- Reservas estratégicas y fondos de contingencia en el entorno universitario

Capítulo 4 — Indicadores financieros clave para universidades
Define el cuadro de mando financiero universitario con los KPIs más relevantes:
- Indicadores de sostenibilidad (ratio de cobertura, fondo de maniobra)
- Indicadores de eficiencia (coste por estudiante, ingresos por investigador)
- Indicadores de diversificación de ingresos
- Comparativa con benchmarks del sector universitario español

Capítulo 5 — Financiación de proyectos de inversión
Guía para identificar y acceder a las principales fuentes de financiación de inversiones universitarias: fondos europeos (Horizon Europe, fondos estructurales), préstamos del BEI, financiación privada mediante PPP y emisión de bonos sociales vinculados a impacto educativo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificación y optimización financiera en educación superior',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo y gobernanza universitaria con IA',
                'description'      => 'Marco legal y de compliance para instituciones de educación superior: LOPD, acreditación académica, contratos de investigación y propiedad intelectual universitaria.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor jurídico especializado en derecho universitario y de la educación superior, con experiencia asesorando a instituciones públicas y privadas en España en materia de cumplimiento normativo, gobierno institucional y contratos de investigación.

contexto jurídico: Las universidades operan en un entorno normativo muy complejo que combina la legislación orgánica universitaria (LOSU), la normativa de protección de datos (RGPD y LOPDGDD), la regulación de la investigación y la transferencia de conocimiento, las normas de acceso y admisión, y la normativa laboral específica del personal docente e investigador.

Área 1 — Marco de gobernanza universitaria
Explica el marco de gobernanza de las universidades españolas bajo la LOSU:
- Órganos de gobierno unipersonales (rector, decanos, directores) y sus competencias
- Órganos de gobierno colegiados (Consejo de Gobierno, Claustro, Consejo Social)
- El papel del Consejo Social como órgano de rendición de cuentas ante la sociedad
- Responsabilidades del Consejo de Gobierno en materia de compliance
- Cómo gestionar los conflictos de intereses en el ámbito universitario

Área 2 — Protección de datos en el entorno universitario
Diseña un programa de compliance en protección de datos adaptado a la universidad:
- Inventario de tratamientos de datos personales específicos de la universidad (expedientes académicos, datos de investigación, videovigilancia en campus, datos de selección de personal)
- Bases jurídicas aplicables a cada tipo de tratamiento
- Política de retención y eliminación de datos académicos (cuánto tiempo conservar los expedientes)
- Privacidad en la investigación científica: datos sensibles, consentimiento informado, gestión de datos de ensayos clínicos
- Plan de respuesta ante brechas de seguridad de datos en el entorno universitario

Área 3 — Propiedad intelectual e industrial en la universidad
Explica el marco jurídico de la propiedad intelectual generada en el ámbito universitario:
- Titularidad de los resultados de investigación generados por PDI
- Contratos de transferencia de tecnología y licencias
- Creación de spin-offs y empresas de base tecnológica
- Protección de software y bases de datos generados en proyectos de investigación
- Conflictos más frecuentes entre universidades y empresas colaboradoras en I+D

Área 4 — Contratos de investigación y proyectos europeos
Guía para la revisión y negociación de los contratos más habituales en el ámbito universitario:
- Contratos de investigación bajo el artículo 60 de la LOSU
- Acuerdos de consorcio en proyectos Horizon Europe
- Grant Agreements de la Comisión Europea: obligaciones de compliance y justificación de gastos

Área 5 — Accesibilidad, igualdad y no discriminación
Describe las obligaciones legales de las universidades en materia de igualdad, diversidad, accesibilidad y lucha contra el acoso, incluyendo los protocolos obligatorios y los planes de igualdad requeridos por la normativa vigente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Compliance y gobernanza jurídica en instituciones universitarias',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Diseño del servicio de atención al estudiante universitario con IA',
                'description'      => 'Optimiza la experiencia de soporte al estudiante universitario: secretaría virtual, resolución de incidencias, orientación académica y gestión de reclamaciones.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en experiencia del cliente aplicada al sector de la educación superior, con experiencia transformando los servicios de atención al estudiante de universidades hacia modelos más ágiles, digitales y centrados en el usuario. Tu enfoque combina metodologías de customer success con las particularidades del entorno académico.

tarea de trabajo: Diseña un sistema de atención al estudiante universitario moderno que reduzca los tiempos de espera, mejore la satisfacción y permita al personal administrativo centrarse en las tareas de mayor valor añadido.

Componente 1 — Diagnóstico del servicio actual
Diseña un proceso de auditoría del servicio de atención al estudiante que incluya:
- Mapa de todos los canales de contacto actuales y su volumen de consultas
- Categorización de los tipos de consulta más frecuentes y su complejidad
- Tiempo medio de resolución por tipo de consulta
- Indicadores actuales de satisfacción del estudiante con el servicio administrativo
- Identificación de los cuellos de botella más comunes (picos en inicio de curso, períodos de matrícula, publicación de notas)

Componente 2 — Diseño del modelo omnicanal de atención
Propón un modelo de atención al estudiante omnicanal que integre:
- Portal de autoservicio: qué gestiones pueden automatizarse completamente (certificados, consulta de notas, cambio de datos, solicitud de becas internas)
- Chatbot académico: árbol de conversación para las 30 preguntas más frecuentes
- Atención humana cualificada: para gestiones complejas (reclamaciones de calificaciones, situaciones personales excepcionales, orientación académica profunda)
- Criterios para escalar entre niveles de atención

Componente 3 — Sistema de gestión de incidencias y reclamaciones
Diseña el proceso de gestión de reclamaciones académicas:
- Tipos de reclamación más frecuentes en el entorno universitario y su tratamiento
- Flujo de reclamación con plazos máximos de resolución
- Roles y responsabilidades en el proceso de reclamación
- Cómo documentar y aprender de las reclamaciones para mejorar el servicio
- Comunicación con el estudiante durante el proceso de reclamación

Componente 4 — Métricas y mejora continua
Define el sistema de medición del servicio de atención al estudiante:
- KPIs operativos (tiempo de primera respuesta, tasa de resolución en primer contacto, tiempo medio de resolución)
- KPIs de satisfacción (NPS del servicio administrativo, CSAT por tipo de gestión)
- Proceso de mejora continua basado en el análisis de datos de servicio
- Encuesta de satisfacción de 8 preguntas adaptada al contexto universitario

Componente 5 — Formación del personal de atención al estudiante
Diseña un programa de formación para el personal de secretaría y administración académica que mejore sus habilidades de comunicación, gestión de situaciones difíciles y uso de herramientas digitales de atención.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transformación del servicio de atención al estudiante universitario',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría educativa freelance para instituciones universitarias con IA',
                'description'      => 'Guía para freelancers que ofrecen servicios de consultoría a universidades y centros de formación: posicionamiento, captación de clientes institucionales y propuestas de valor.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor independiente con más de 10 años de experiencia trabajando con instituciones educativas de todos los tamaños: universidades públicas y privadas, escuelas de negocio, centros de FP y plataformas de educación online. Tu especialidad es ayudar a otros freelancers a construir una práctica consultora sostenible en el sector educativo.

instrucción de contexto: Las instituciones educativas son clientes institucionales complejos con ciclos de decisión largos, múltiples stakeholders, restricciones presupuestarias específicas y culturas organizacionales muy particulares. Los freelancers que quieren trabajar con este sector necesitan entender sus dinámicas antes de intentar captar su primer cliente.

Parte 1 — Entender el cliente universitario
Explica en detalle cómo funcionan las instituciones universitarias como clientes:
- Los ciclos presupuestarios y cuándo tienen dinero disponible para contratar consultores externos
- Los procesos de contratación (licitaciones, contratos menores, conciertos directos) y sus umbrales económicos
- Los decisores reales (quién firma, quién influye, quién bloquea) en distintas áreas de consultoría
- Las áreas donde las universidades contratan más consultores externos: transformación digital, acreditaciones, calidad, marketing, RRHH, igualdad, internacionalización
- Las razones por las que una universidad puede preferir un freelance frente a una gran consultora

Parte 2 — Definición de la propuesta de valor del consultor educativo
Ayuda al freelance a definir su especialización y propuesta de valor:
- Cómo elegir una especialidad dentro del sector educativo (no intentar ser generalista)
- Cómo articular el valor específico que aporta frente a consultoras más grandes
- Cómo usar la experiencia previa (aunque sea en otro sector) como puente hacia la consultoría educativa
- Desarrollo del pitch de 2 minutos para una primera reunión con un rector o decano

Parte 3 — Captación del primer cliente universitario sin referencias
Diseña una estrategia de captación B2B adaptada al sector educativo:
- Mapa de eventos y espacios donde se relacionan los decisores universitarios (congresos de rectores, jornadas de calidad, CRUE)
- Estrategia de contenidos en LinkedIn orientada a posicionarse como experto en educación superior
- Cómo usar las licitaciones públicas como canal de captación (incluso si se pierde la primera)
- Cómo estructurar un proyecto piloto de bajo riesgo que permita demostrar valor antes de un contrato mayor

Parte 4 — Propuesta comercial y negociación con instituciones educativas
Diseña una plantilla de propuesta comercial para consultoría educativa que incluya:
- Estructura de la propuesta (diagnóstico, metodología, entregables, equipo, calendario, precio)
- Cómo presentar los honorarios en un entorno donde el presupuesto suele ser limitado
- Estrategias de precio: precio fijo, precio por día, precio por resultados
- Cómo gestionar la negociación cuando el cliente pide descuento por ser institución pública

Parte 5 — Gestión de la relación a largo plazo con clientes universitarios
Explica cómo convertir un primer proyecto en una relación de largo plazo con una institución educativa, generando recurrencia, referencias internas y expansión hacia otros departamentos o centros del mismo grupo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una práctica consultora freelance en el sector educativo',
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
