<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills553Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing de contenidos para programas universitarios con IA',
                'description'      => 'Diseña una estrategia completa de contenidos para atraer estudiantes prospecto a programas de grado y posgrado utilizando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing especializado en educación superior con amplia experiencia en captación de estudiantes universitarios para programas de grado y posgrado.

Contexto de la institución:
- Tipo de institución: [Universidad pública/privada, tamaño, ubicación]
- Programas a promocionar: [Lista de programas académicos]
- Público objetivo: [Perfil demográfico, intereses, motivaciones]
- Presupuesto de marketing: [Rango disponible]
- Canales actuales utilizados: [Redes sociales, email, eventos, etc.]

Objetivo principal: Crear una estrategia integral de marketing de contenidos que incremente la tasa de solicitudes de admisión y mejore el posicionamiento de la institución frente a la competencia.

Desarrolla el siguiente plan completo:

1. ANÁLISIS DE AUDIENCIA Y BUYER PERSONA
Define tres perfiles detallados de estudiantes prospecto:
- Recién egresado de bachillerato (17-19 años): motivaciones, miedos, canales preferidos, influenciadores de decisión
- Profesional que busca posgrado (25-35 años): necesidades laborales, restricciones de tiempo, expectativas de retorno
- Estudiante internacional: barreras culturales, requisitos específicos, proceso de decisión

2. MAPA DE CONTENIDOS POR ETAPA DEL EMBUDO
Para cada etapa (Awareness, Consideration, Decision, Enrollment):
- Tipos de contenido más efectivos
- Temas específicos por programa académico
- Formato recomendado (video, artículo, infografía, webinar)
- Canal de distribución primario y secundario
- Frecuencia de publicación sugerida

3. CALENDARIO EDITORIAL TRIMESTRAL
Diseña un calendario con:
- Hitos clave del ciclo académico (apertura de admisiones, fechas límite, inicio de clases)
- Contenidos de liderazgo de pensamiento protagonizados por docentes y egresados
- Casos de éxito de exalumnos en el mercado laboral
- Contenidos de vida universitaria (campus, cultura, actividades extracurriculares)
- Campañas especiales para períodos de alta demanda

4. ESTRATEGIA DE SEO PARA EDUCACIÓN SUPERIOR
- Palabras clave primarias y de cola larga para cada programa
- Estructura de contenidos para posicionar en búsquedas de intención de admisión
- Optimización de páginas de programas académicos
- Blog universitario: temas y frecuencia

5. MÉTRICAS Y KPIs
Define indicadores para medir:
- Alcance e impresiones por canal
- Tasa de engagement y tiempo en página
- Leads generados por fuente de contenido
- Tasa de conversión de lead a solicitud de admisión
- Costo por lead y costo por enrollment

6. PLAN DE ACCIÓN PARA LOS PRIMEROS 90 DÍAS
- Semana 1-4: auditoría de contenidos existentes y brechas
- Semana 5-8: producción y lanzamiento de contenidos ancla
- Semana 9-12: análisis de resultados y optimización

Entrega el plan en formato estructurado con tablas donde sea aplicable, ejemplos concretos de títulos de contenido y recomendaciones accionables que el equipo de marketing pueda implementar de inmediato.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Captación de estudiantes universitarios mediante contenido estratégico',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataforma de aprendizaje adaptativo con IA para universidades',
                'description'      => 'Diseña la arquitectura técnica y los módulos principales de una plataforma LMS con inteligencia artificial adaptativa para educación superior.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en EdTech con experiencia en sistemas de gestión del aprendizaje (LMS) y algoritmos de personalización educativa.

Contexto del proyecto:
- Institución: [Universidad con N estudiantes activos]
- Cursos en línea actuales: [Número y modalidades]
- LMS actual (si existe): [Moodle/Canvas/otro o ninguno]
- Stack tecnológico preferido: [PHP/Python/Node, base de datos, infraestructura]
- Presupuesto de desarrollo: [Rango o tipo de proyecto]

Objetivo: Diseñar e implementar una plataforma de aprendizaje adaptativo que personalice la experiencia educativa de cada estudiante basándose en su ritmo, estilo de aprendizaje y desempeño.

Desarrolla la arquitectura completa con los siguientes componentes:

1. ARQUITECTURA DEL SISTEMA
- Diagrama de componentes principales (frontend, backend, servicios de IA, base de datos)
- Descripción de cada microservicio y su responsabilidad
- Patrones de diseño recomendados (event-driven, CQRS, etc.)
- Estrategia de escalabilidad horizontal
- Plan de integración con sistemas universitarios existentes (SIS, ERP académico)

2. MÓDULO DE PERFIL DE APRENDIZAJE
Diseña el sistema que:
- Detecta el estilo de aprendizaje inicial mediante un cuestionario breve
- Recopila señales implícitas (tiempo en cada recurso, patrones de interacción)
- Actualiza el perfil dinámicamente con cada sesión
- Estructura del modelo de datos del perfil estudiantil

3. MOTOR DE RECOMENDACIONES ADAPTATIVAS
Especifica el algoritmo que:
- Selecciona el siguiente contenido óptimo para cada estudiante
- Ajusta la dificultad según el desempeño histórico
- Recomienda recursos complementarios (videos, lecturas, ejercicios)
- Detección temprana de estudiantes en riesgo de abandono

4. API DE CONTENIDOS EDUCATIVOS
- Endpoints necesarios para gestión de cursos, lecciones y evaluaciones
- Estructura de metadatos de contenido (nivel, prerequisitos, objetivos de aprendizaje)
- Sistema de etiquetado y taxonomía de habilidades
- Integración con repositorios de contenido externo (YouTube EDU, SCORM)

5. PANEL DE ANALÍTICA PARA DOCENTES
- Métricas en tiempo real del progreso grupal e individual
- Alertas automáticas de estudiantes en riesgo
- Reportes exportables para evaluación institucional
- Interfaz de configuración de rutas de aprendizaje

6. PLAN DE IMPLEMENTACIÓN POR FASES
- Fase 1 (MVP, 3 meses): funcionalidades core y piloto con un programa
- Fase 2 (6 meses): motor adaptativo y analítica avanzada
- Fase 3 (12 meses): escala institucional e integraciones externas

7. CONSIDERACIONES TÉCNICAS CRÍTICAS
- Privacidad y protección de datos estudiantiles (FERPA, GDPR)
- Accesibilidad (WCAG 2.1)
- Rendimiento bajo carga simultánea de miles de usuarios
- Estrategia de backup y recuperación

Incluye ejemplos de código para los componentes más críticos y una estimación de recursos de desarrollo necesarios para cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Arquitectura de plataforma LMS adaptativa para educación superior',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de identidad visual para facultad universitaria con IA',
                'description'      => 'Crea un sistema completo de identidad visual para una facultad o departamento universitario que refleje sus valores académicos y diferenciales.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte especializado en branding institucional para entidades educativas de nivel superior, con experiencia en equilibrar tradición académica con modernidad visual.

Contexto de la facultad:
- Nombre de la facultad o departamento: [Nombre]
- Áreas de conocimiento: [Disciplinas académicas]
- Valores institucionales: [Lista de valores]
- Público objetivo: [Estudiantes, docentes, sector empresarial, sociedad]
- Identidad visual de la universidad madre: [Colores, tipografía existente]
- Personalidad de marca deseada: [Innovadora, tradicional, accesible, rigurosa]

Objetivo: Desarrollar un sistema de identidad visual cohesivo que diferencie a la facultad dentro del ecosistema universitario y proyecte autoridad académica.

Desarrolla el siguiente sistema completo:

1. ANÁLISIS DE POSICIONAMIENTO VISUAL
- Benchmark de las tres mejores facultades equivalentes a nivel nacional e internacional
- Mapa de posicionamiento visual (ejes: tradicional/moderno, formal/cercano)
- Propuesta de posición única en el ecosistema universitario
- Atributos visuales que deben transmitirse en cada pieza

2. SISTEMA DE COLOR
- Paleta primaria (1-2 colores) con justificación académica y cultural
- Paleta secundaria de apoyo (3-4 colores)
- Paleta para datos y gráficas académicas (accesible, 8 tonos)
- Especificaciones técnicas: HEX, RGB, CMYK, Pantone
- Combinaciones aprobadas y prohibidas
- Comportamiento en fondos claros, oscuros y fotografía

3. SISTEMA TIPOGRÁFICO
- Tipografía principal para titulares (con opciones gratuitas alternativas)
- Tipografía secundaria para cuerpo de texto
- Escala tipográfica completa: H1 a H6, body, caption, label
- Jerarquía para documentos académicos, presentaciones y web
- Especificaciones de interlineado y espaciado

4. SISTEMA DE ICONOGRAFÍA Y PICTOGRAMAS
- Estilo visual de iconos (línea, sólido, duotono)
- Set básico de 20 iconos institucionales imprescindibles
- Guía de uso de ilustraciones y recursos visuales complementarios
- Fotografía: estilo, composición y tratamiento de imágenes

5. APLICACIONES PRIORITARIAS
Para cada formato, especifica layout, proporciones y elementos obligatorios:
- Papelería institucional (membretes, sobres, tarjetas)
- Plantillas de presentación académica (PowerPoint/Google Slides)
- Señalética de campus
- Banner y kit digital para redes sociales
- Portadas de publicaciones académicas y tesis
- Email corporativo y firma digital

6. GUÍA DE VOZ Y TONO
- Personalidad de la voz institucional
- Vocabulario recomendado y términos a evitar
- Ejemplos de textos en tono correcto e incorrecto

7. MANUAL DE MARCA RESUMIDO
Estructura el contenido del manual de identidad con secciones, índice y reglas de uso para que cualquier proveedor externo pueda aplicar la marca correctamente.

Entrega el análisis con referencias visuales descriptivas, justificaciones de cada decisión de diseño y criterios de evaluación para validar que las propuestas cumplen los objetivos institucionales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Creación de identidad visual para facultades y departamentos universitarios',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas B2B para servicios de formación universitaria a empresas',
                'description'      => 'Desarrolla una estrategia completa para comercializar programas de formación continua y corporativa de universidades hacia el sector empresarial.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con experiencia en ventas B2B de servicios educativos y programas de formación corporativa para instituciones de educación superior.

Contexto de la institución:
- Universidad: [Nombre, tamaño, reputación]
- Programas a comercializar: [Diplomados, maestrías corporativas, cursos in-company, certificaciones]
- Target empresarial: [Sectores, tamaño de empresas, regiones geográficas]
- Competencia directa: [Otras universidades, escuelas de negocios, plataformas online]
- Equipo comercial disponible: [Número de personas, experiencia]
- Objetivo de ventas anuales: [Cifra o crecimiento esperado]

Objetivo: Crear una estrategia de ventas B2B que convierta a la universidad en el socio preferido de formación para empresas de la región.

Desarrolla el plan completo con los siguientes elementos:

1. PROPUESTA DE VALOR DIFERENCIADA
- Los tres pilares que distinguen la oferta universitaria de competidores
- Argumentario para cada perfil de interlocutor empresarial (CEO, RRHH, Directores de área)
- Matriz de beneficios tangibles vs. intangibles
- Casos de éxito y ROI de programas anteriores (estructura para documentarlos)

2. SEGMENTACIÓN Y TARGETING
- Criterios para priorizar empresas (facturación, plantilla, sector, madurez de L&D)
- Clasificación ABC de cuentas objetivo
- Perfil del Decision Maker y mapa de stakeholders en la empresa cliente
- Sectores con mayor potencial en el contexto regional actual

3. PROCESO DE VENTA CONSULTIVA
Define cada etapa:
- Prospección y generación de leads B2B (eventos, LinkedIn, referidos, alianzas)
- Primera llamada de descubrimiento: preguntas clave para entender necesidades formativas
- Diagnóstico de necesidades: metodología de needs assessment empresarial
- Diseño de propuesta personalizada: co-creación con el cliente
- Presentación ejecutiva: estructura y elementos de persuasión
- Negociación: manejo de objeciones frecuentes y condiciones comerciales
- Cierre y onboarding del cliente corporativo

4. HERRAMIENTAS COMERCIALES
- Plantilla de propuesta comercial para empresas (secciones y contenido)
- Email de prospección en frío (asunto + cuerpo, 3 variantes por segmento)
- Secuencia de seguimiento post-reunión (5 puntos de contacto)
- Presentación ejecutiva de 10 diapositivas (estructura y mensajes clave)
- One-pager de cada programa para dejar en reuniones

5. ESTRATEGIA DE ALIANZAS Y PARTNERSHIPS
- Tipos de alianzas estratégicas con valor para ambas partes
- Proceso para identificar y abordar socios potenciales
- Modelos de colaboración: co-patrocinio, descuentos por volumen, becas corporativas
- Programa de empresas vinculadas a la institución

6. MÉTRICAS COMERCIALES Y PIPELINE
- KPIs del equipo de ventas B2B
- Estructura del CRM para seguimiento de cuentas corporativas
- Objetivos por etapa del embudo y tasas de conversión esperadas
- Reporting mensual para dirección académica

7. PLAN DE ACCIÓN PARA EL PRIMER TRIMESTRE
- Mes 1: preparación de materiales y capacitación del equipo
- Mes 2: lanzamiento de prospección y primeras reuniones
- Mes 3: presentaciones de propuestas y primeros cierres

Incluye ejemplos concretos de correos, argumentarios y objeciones con sus respuestas para que el equipo comercial pueda implementarlo de forma inmediata.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comercialización de programas de formación corporativa universitaria',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto para plataforma edtech universitaria',
                'description'      => 'Construye un roadmap estratégico de producto para una plataforma tecnológica educativa universitaria, priorizando funcionalidades con impacto en retención y resultados.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager con experiencia en plataformas EdTech para educación superior, con dominio de metodologías ágiles y técnicas de priorización de producto.

Contexto del producto:
- Plataforma actual: [LMS, portal estudiantil, app móvil, etc.]
- Usuarios activos: [Número de estudiantes, docentes, administradores]
- Stage del producto: [MVP lanzado / Crecimiento / Madurez]
- Principales pain points reportados: [Lista de problemas identificados]
- OKRs institucionales para el año: [Objetivos clave]
- Capacidad del equipo de desarrollo: [Número de devs, sprints por trimestre]

Objetivo: Crear un roadmap de producto de 12 meses que maximice el valor para estudiantes y docentes, alineado con los objetivos institucionales.

Desarrolla el siguiente plan:

1. DISCOVERY Y RESEARCH
Diseña el proceso de investigación de usuarios:
- Metodología para entrevistas con estudiantes (guía de preguntas, criterios de selección)
- Encuestas de satisfacción y NPS para docentes
- Análisis de datos de uso (métricas de engagement actuales a revisar)
- Benchmark de las mejores plataformas del mercado: Canvas, Blackboard, Brightspace
- Síntesis de hallazgos en formato Jobs-to-be-Done

2. BACKLOG ESTRATÉGICO
Identifica y documenta 20 funcionalidades potenciales agrupadas por:
- Retención estudiantil (engagement, alertas tempranas, gamificación)
- Eficiencia docente (creación de contenidos, evaluación automatizada, feedback)
- Experiencia administrativa (reportes, integración con sistemas, automatización)
- Innovación IA (personalización, chatbot de soporte académico, analytics predictivo)

3. FRAMEWORK DE PRIORIZACIÓN
Aplica dos metodologías complementarias:
- RICE (Reach, Impact, Confidence, Effort) para las top 20 funcionalidades
- MoSCoW para clasificar por urgencia institucional
- Matriz de impacto vs. esfuerzo
- Criterios de desempate cuando el scoring es similar

4. ROADMAP POR TRIMESTRES
Diseña el plan de 4 trimestres:
- Q1: [Funcionalidades de alto valor y bajo esfuerzo - quick wins]
- Q2: [Funcionalidades estructurales de mediano plazo]
- Q3: [Innovación y diferenciación competitiva]
- Q4: [Escalabilidad, rendimiento y deuda técnica]

Para cada ítem incluye: objetivo de usuario, criterio de éxito, dependencias técnicas y métricas de validación post-lanzamiento.

5. PROCESO DE TRABAJO CON STAKEHOLDERS
- Cadencia de revisión del roadmap con dirección académica
- Proceso para gestionar solicitudes de última hora sin romper el plan
- Comunicación del roadmap a equipos internos y usuarios
- Gestión de expectativas con docentes y estudiantes

6. MÉTRICAS DE PRODUCTO (NORTH STAR Y SECUNDARIAS)
- North Star Metric de la plataforma y por qué
- Árbol de métricas: input metrics y output metrics
- Dashboard de producto: datos a revisar semanalmente
- Criterios para pivotar o cancelar una funcionalidad tras el lanzamiento

7. RETROSPECTIVA Y APRENDIZAJES
Diseña el proceso trimestral de:
- Review de objetivos vs. resultados entregados
- Identificación de funcionalidades que no generaron el impacto esperado
- Incorporación de feedback de usuarios al siguiente ciclo

Entrega el roadmap en formato tabla o timeline visual (en texto estructurado) con justificación de cada decisión de priorización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Planificación estratégica de producto para tecnología educativa universitaria',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento docente universitario con IA',
                'description'      => 'Diseña un sistema integral de gestión del capital humano académico que optimice la selección, desarrollo y retención del profesorado universitario.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en instituciones de educación superior, con experiencia en gestión del talento académico y desarrollo organizacional universitario.

Contexto de la institución:
- Planta docente actual: [Número de profesores por categoría: tiempo completo, medio tiempo, hora-clase]
- Áreas académicas: [Facultades o departamentos]
- Principales desafíos de RRHH: [Rotación, brecha de competencias, motivación, evaluación]
- Normativa laboral aplicable: [Ley del trabajo, contrato colectivo, estatuto académico]
- Presupuesto de formación docente: [Disponible anualmente]

Objetivo: Construir un modelo de gestión del talento docente que mejore la calidad educativa, aumente la satisfacción del profesorado y asegure la continuidad institucional.

Desarrolla el sistema completo con los siguientes módulos:

1. ATRACCIÓN Y SELECCIÓN DE DOCENTES
- Perfil de competencias por área académica y tipo de plaza
- Proceso de reclutamiento para candidatos académicos (diferenciado del corporativo)
- Evaluación de competencias docentes: entrevista, clase demostrativa, evaluación de portafolio académico
- Onboarding académico: plan de inducción para los primeros 90 días
- Criterios de decisión y rúbricas de evaluación de candidatos

2. MODELO DE COMPETENCIAS DOCENTES
Define el framework institucional con:
- Competencias técnicas o disciplinares (por área de conocimiento)
- Competencias pedagógicas (diseño curricular, estrategias de enseñanza, evaluación del aprendizaje)
- Competencias digitales (uso de tecnología educativa, creación de contenidos digitales)
- Competencias de investigación y vinculación
- Niveles de dominio (básico, competente, avanzado, experto) con descriptores conductuales

3. EVALUACIÓN DEL DESEMPEÑO DOCENTE
Diseña un sistema multifuente y formativo:
- Autoevaluación docente: instrumento y periodicidad
- Evaluación estudiantil: encuesta de satisfacción y criterios de interpretación
- Evaluación de pares: observación de clase y retroalimentación colegiada
- Evaluación de coordinadores académicos: métricas de resultados del grupo
- Panel de control integrado por docente con tendencias históricas
- Proceso de retroalimentación y plan de mejora individualizado

4. PLAN DE DESARROLLO PROFESIONAL DOCENTE
- Itinerarios formativos por perfil y área de mejora detectada
- Comunidades de práctica entre docentes: estructura y facilitación
- Mentoring académico: programa de acompañamiento entre pares experimentados y nuevos
- Política de financiamiento de estudios de posgrado y certificaciones
- Gestión del conocimiento institucional: cómo capturar y transferir buenas prácticas

5. RETENCIÓN Y BIENESTAR DOCENTE
- Factores de satisfacción laboral específicos del contexto universitario
- Encuesta de clima organizacional académico: preguntas clave
- Estrategias de reconocimiento no monetario (categorías de excelencia, publicaciones, proyectos)
- Política de flexibilidad y conciliación para docentes
- Plan de sucesión para posiciones académicas clave

6. INDICADORES DE GESTIÓN DE RRHH ACADÉMICO
- KPIs de atracción: tiempo de cobertura, calidad de candidatos
- KPIs de desempeño: distribución de evaluaciones, mejora interanual
- KPIs de desarrollo: horas de formación, avance en competencias
- KPIs de retención: rotación voluntaria, causas de salida, NPS del docente

7. CALENDARIO ANUAL DE PROCESOS DE RRHH
Mapea el ciclo completo del año académico con fechas y responsables para cada proceso del modelo.

Incluye instrumentos de evaluación listos para usar (rúbricas, encuestas con ítems concretos) y protocolos de actuación para situaciones difíciles como bajo desempeño persistente o conflictos entre docentes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión integral del profesorado y talento académico universitario',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelo financiero para sostenibilidad de universidad privada',
                'description'      => 'Construye un modelo financiero completo para evaluar la sostenibilidad económica de una institución universitaria privada y planificar su crecimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director Financiero con experiencia en instituciones de educación superior privadas, con conocimiento de los modelos de ingresos universitarios, gestión de deuda académica estudiantil y planificación financiera a largo plazo.

Contexto de la institución:
- Tamaño actual: [Número de estudiantes matriculados]
- Programas académicos: [Pregrado, posgrado, educación continua]
- Ingresos principales: [Colegiaturas, cuotas, convenios, donaciones]
- Costos operativos principales: [Nómina, infraestructura, tecnología, marketing]
- Situación financiera actual: [Superávit/déficit, nivel de deuda, reservas]
- Objetivos de crecimiento: [Matrícula objetivo en 3 y 5 años]

Objetivo: Construir un modelo financiero que evalúe la viabilidad de crecimiento y oriente las decisiones estratégicas de la dirección universitaria.

Desarrolla el modelo con los siguientes componentes:

1. ANÁLISIS DE INGRESOS
- Modelado de matrícula: proyección de estudiantes por programa, nivel y año
- Estructura de colegiaturas: precios actuales, política de incrementos anuales, becas y descuentos
- Ingresos por educación continua y programas corporativos
- Ingresos no académicos: arrendamientos, publicaciones, servicios
- Análisis de concentración de ingresos y riesgos asociados
- Proyección de ingresos a 5 años con escenarios (conservador, base, optimista)

2. ESTRUCTURA DE COSTOS
- Costos fijos vs. variables: clasificación y comportamiento
- Costo por estudiante y punto de equilibrio por programa
- Ratio de nómina sobre ingresos: benchmark sectorial y situación actual
- Análisis de capacidad instalada: aulas, laboratorios, tecnología
- Planificación de capex: inversiones en infraestructura y equipamiento
- Gestión de la deuda existente y capacidad de endeudamiento adicional

3. INDICADORES FINANCIEROS CLAVE
- Margen operativo por programa académico
- EBITDA institucional y su evolución histórica
- Días de efectivo disponibles (reserva operativa)
- Ratio de deuda sobre activos
- Retorno sobre activos (ROA) académico
- Costo de adquisición de estudiante (CAE) y valor de vida del estudiante (LVE)

4. MODELO DE ESCENARIOS
Para tres escenarios (pesimista, base, optimista):
- Supuestos de crecimiento de matrícula y precios
- Impacto en costos y márgenes
- Necesidades de financiamiento
- Punto de equilibrio en cada escenario
- Análisis de sensibilidad de las variables críticas

5. PLAN DE OPTIMIZACIÓN FINANCIERA
- Oportunidades de reducción de costos sin impacto en calidad
- Nuevas fuentes de ingresos a desarrollar
- Estrategia de becas y apoyo financiero estudiantil
- Política de inversión de excedentes y fondo de reserva
- Acceso a financiamiento: crédito bancario, bonos educativos, fondos públicos

6. PRESUPUESTO Y CONTROL
- Proceso de elaboración del presupuesto anual por áreas
- Estructura del presupuesto maestro (operativo, inversión, financiero)
- Reportes de seguimiento mensual para el Consejo Directivo
- Alertas financieras tempranas y protocolo de acción

7. DASHBOARD FINANCIERO EJECUTIVO
Define los 10 indicadores que deben estar en el tablero mensual del Rector y el Consejo, con umbral de alerta y responsable de cada métrica.

Entrega el modelo con fórmulas conceptuales explicadas, rangos de referencia del sector educativo privado y recomendaciones específicas para mejorar la sostenibilidad financiera institucional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Planificación financiera y sostenibilidad de universidades privadas',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para la implementación de IA en universidades',
                'description'      => 'Analiza el marco normativo aplicable y diseña políticas institucionales para el uso ético y legal de inteligencia artificial en entornos universitarios.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho de las tecnologías de la información y derecho educativo, con conocimiento de la regulación de inteligencia artificial y protección de datos en el ámbito universitario.

Contexto de la institución:
- Universidad: [Nombre, carácter público o privado]
- País y jurisdicción aplicable: [País, normativa local]
- Uso actual de IA: [Herramientas ya implementadas: LMS con IA, chatbots, detección de plagio]
- Usos planificados de IA: [Admisiones automatizadas, calificación asistida, analítica predictiva]
- Comunidad afectada: [Estudiantes, docentes, personal administrativo]

Objetivo: Establecer un marco legal y de gobernanza que permita a la universidad aprovechar la IA de forma responsable, minimizando riesgos legales y protegiendo los derechos de toda la comunidad universitaria.

Desarrolla el análisis y las políticas necesarias:

1. MAPEO NORMATIVO APLICABLE
Identifica y analiza:
- Legislación de protección de datos personales aplicable (ej. GDPR si hay estudiantes europeos, leyes nacionales)
- Normativa de propiedad intelectual: derechos de autor sobre contenidos generados con IA
- Regulaciones emergentes de IA: Ley de IA de la UE y su impacto extraterritorial, regulaciones locales
- Normativa educativa específica: acreditación, evaluación, privacidad estudiantil (FERPA u equivalente)
- Responsabilidad civil y administrativa por decisiones algorítmicas que afecten a estudiantes

2. ANÁLISIS DE RIESGOS LEGALES POR CASO DE USO
Para cada uso de IA propuesto, evalúa:
- Riesgos de discriminación algorítmica en admisiones y evaluaciones
- Tratamiento de datos sensibles de estudiantes (salud, situación económica, rendimiento)
- Derechos de los estudiantes sobre decisiones automatizadas (derecho a explicación, recurso)
- Propiedad intelectual de trabajos académicos elaborados con IA
- Responsabilidad por errores de sistemas de IA en entornos críticos

3. POLÍTICA INSTITUCIONAL DE USO DE IA
Redacta los elementos de una política que incluya:
- Definición y alcance de sistemas de IA sujetos a la política
- Principios rectores: transparencia, equidad, privacidad, supervisión humana
- Usos permitidos, condicionados y prohibidos de IA por tipo de actor (estudiante, docente, administrativo)
- Requisitos de consentimiento informado para el uso de datos en sistemas de IA
- Proceso de evaluación de impacto algorítmico antes de implementar nuevas herramientas
- Mecanismos de rendición de cuentas y auditoría de sistemas de IA

4. POLÍTICA DE INTEGRIDAD ACADÉMICA Y USO DE IA GENERATIVA
- Marco de lo que constituye uso permitido vs. fraude académico con IA generativa
- Diferenciación por tipo de evaluación (examen presencial, trabajo escrito, proyecto)
- Proceso de detección, investigación y sanción de uso indebido
- Obligaciones de transparencia para estudiantes que usen IA en sus trabajos
- Formación en uso ético de IA para la comunidad universitaria

5. CONTRATOS Y PROVEEDORES DE IA
Cláusulas contractuales esenciales al contratar soluciones de IA:
- Propiedad y uso de datos institucionales y estudiantiles
- Subcontratación y transferencia internacional de datos
- Responsabilidad ante fallos del sistema y decisiones erróneas
- Derecho de auditoría sobre algoritmos y datos de entrenamiento
- Condiciones de terminación y portabilidad de datos

6. GOBERNANZA DE IA UNIVERSITARIA
- Composición y funciones del Comité de Ética en IA
- Proceso de evaluación y aprobación de nuevas implementaciones
- Mecanismos de denuncia y resolución de conflictos
- Reportes de transparencia al Consejo Universitario

7. PLAN DE IMPLEMENTACIÓN LEGAL
- Acciones inmediatas para regularizar usos de IA existentes
- Cronograma de aprobación de políticas por órganos de gobierno
- Formación del personal jurídico en regulación de IA

Entrega el análisis con referencias normativas específicas y plantillas de cláusulas contractuales y declaraciones de consentimiento listas para adaptar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Cumplimiento legal y gobernanza de IA en entornos universitarios',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Sistema de soporte estudiantil con IA para universidades',
                'description'      => 'Diseña un sistema integral de atención y soporte al estudiante universitario que combina inteligencia artificial con atención humana para mejorar la experiencia estudiantil.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Experiencia Estudiantil con experiencia en la implementación de sistemas de soporte y servicios al estudiante en universidades, con conocimiento de tecnologías de atención automatizada.

Contexto de la institución:
- Número de estudiantes: [Total de matrícula activa]
- Canales de atención actuales: [Ventanilla presencial, email, teléfono, portal web]
- Principales solicitudes: [Trámites académicos, dudas de inscripción, apoyo psicológico, becas]
- Tiempos de respuesta actuales: [Promedio en horas/días]
- Satisfacción estudiantil actual: [NPS o calificación conocida]
- Equipo de atención: [Número de personas, horario de cobertura]

Objetivo: Crear un sistema omnicanal de soporte estudiantil que resuelva el 70% de las consultas de forma automatizada y mejore los tiempos de atención para los casos complejos.

Desarrolla el sistema completo:

1. CATÁLOGO DE SERVICIOS Y CLASIFICACIÓN DE CONSULTAS
- Inventario de todos los tipos de solicitudes y consultas estudiantiles
- Clasificación por complejidad (L1: autogestionable, L2: soporte básico, L3: especializado)
- Árbol de decisión para routing de consultas al canal correcto
- Identificación de los 20 trámites más frecuentes para automatización prioritaria
- Tiempo de resolución objetivo por tipo de consulta

2. CHATBOT UNIVERSITARIO INTELIGENTE
Diseña la arquitectura del asistente virtual:
- Alcance funcional: qué consultas puede resolver completamente, cuáles debe escalar
- Base de conocimiento: estructura para información académica, administrativa y de campus
- Flujos de conversación para los 10 trámites más frecuentes (diseño de scripts)
- Integración con sistemas académicos (consulta de calificaciones, estado de trámites)
- Mecanismo de escalada a agente humano: cuándo y cómo transferir
- Personalización por perfil: estudiante nuevo, activo, en riesgo de deserción, egresado

3. PORTAL DE AUTOSERVICIO ESTUDIANTIL
- Funcionalidades del portal por módulo: académico, financiero, trámites, bienestar
- UX y flujo de usuario para los trámites más demandados
- Sistema de seguimiento del estado de solicitudes en tiempo real
- Centro de ayuda: base de conocimiento, FAQs y tutoriales en video
- Foro comunitario estudiantil moderado con IA

4. GESTIÓN DE TICKETS Y ESCALADAS
- Estructura del sistema de tickets: categorías, prioridades, SLAs
- Proceso de escalada multinivel y criterios de activación
- Plantillas de respuesta para situaciones frecuentes (cierre de ciclo, becas, reinscripción)
- Gestión de casos sensibles: apoyo psicológico, situaciones de crisis, problemas económicos
- Dashboard del equipo de soporte: carga de trabajo y métricas en tiempo real

5. PROGRAMA DE RETENCIÓN Y ALERTA TEMPRANA
- Indicadores de riesgo de deserción y cómo detectarlos en el sistema de soporte
- Protocolo de intervención proactiva para estudiantes en riesgo
- Integración con bienestar estudiantil y orientación académica
- Campañas de reengagement para estudiantes inactivos o con bajo rendimiento

6. ANALÍTICA DE LA EXPERIENCIA ESTUDIANTIL
- Métricas operativas: FCR (First Contact Resolution), AHT (Average Handle Time), CSAT
- Análisis de tendencias: consultas recurrentes que señalan problemas sistémicos
- Encuestas de satisfacción post-atención: diseño e implementación
- Reporte mensual para rectoría: insights y acciones recomendadas

7. PLAN DE IMPLEMENTACIÓN
- Fase 1 (Mes 1-2): portal de autoservicio y base de conocimiento
- Fase 2 (Mes 3-4): chatbot básico para FAQ y consultas de estado
- Fase 3 (Mes 5-6): chatbot avanzado con integración a sistemas y alertas tempranas
- Capacitación del equipo de soporte para el nuevo modelo de atención

Incluye métricas de éxito para evaluar el impacto del sistema a los 6 y 12 meses de implementación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatización y mejora del soporte al estudiante universitario',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer especializado en eLearning y diseño instruccional con IA',
                'description'      => 'Construye tu oferta de servicios freelance como especialista en diseño instruccional y producción de cursos online para instituciones universitarias usando IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de desarrollo de negocio freelance especializado en educación en línea y diseño instruccional, con experiencia trabajando con universidades y programas de educación continua.

Contexto de tu perfil:
- Experiencia previa: [Años de experiencia, tipos de proyectos, herramientas dominadas]
- Especialización: [Diseño instruccional, producción de cursos, gamificación, microlearning]
- Herramientas que manejas: [Articulate, Adobe Captivate, Camtasia, LMS que conoces]
- Mercado objetivo: [Universidades, escuelas de negocios, programas de certificación]
- Objetivo de facturación mensual: [Cifra meta]

Objetivo: Construir un negocio freelance rentable y escalable ofreciendo servicios de diseño instruccional y producción de cursos online para el mercado universitario.

Desarrolla el plan completo de negocio freelance:

1. POSICIONAMIENTO Y NICHO
- Define tu especialidad única dentro del diseño instruccional (por disciplina, tecnología o metodología)
- Propuesta de valor diferenciada para el mercado universitario vs. corporativo
- Mensaje de posicionamiento para tu perfil de LinkedIn y web
- Servicios que vas a ofrecer y cuáles vas a rechazar (productización del servicio)
- Cómo usar IA como ventaja competitiva en tu propuesta a clientes

2. PORTAFOLIO Y CREDENCIALES
- Proyectos mínimos que necesitas en tu portafolio para ser contratado por universidades
- Cómo construir portafolio sin proyectos previos universitarios (proyectos demo, colaboraciones)
- Certificaciones relevantes: ID y eLearning, herramientas de autoría, pedagogía
- Cómo documentar y presentar cada proyecto: capturas, métricas de impacto, testimonios
- Perfil de LinkedIn optimizado para diseñadores instruccionales en educación superior

3. CATÁLOGO DE SERVICIOS CON PRECIOS
Para cada servicio, define:
- Descripción detallada del entregable
- Proceso de trabajo y entregables intermedios
- Horas estimadas y precio en USD/EUR/MXN
- Qué incluye y qué es adicional (alcance)

Servicios sugeridos:
- Diseño instruccional de curso universitario (por módulo/crédito)
- Producción de curso e-learning (guión, grabación, postproducción)
- Transformación de curso presencial a modalidad híbrida o en línea
- Consultoría para implementación de LMS
- Creación de materiales didácticos interactivos

4. PROCESO DE VENTA A UNIVERSIDADES
- Cómo identificar y contactar a los responsables de decisión en universidades
- Email de presentación de servicios (asunto + cuerpo para primera aproximación)
- Proceso de diagnóstico inicial: preguntas para entender necesidades del cliente
- Propuesta de servicios freelance: estructura y elementos para proyectos universitarios
- Negociación de tarifas y condiciones: cuándo ceder y cuándo mantener el precio

5. GESTIÓN DE PROYECTOS UNIVERSITARIOS
- Contrato de servicios: cláusulas esenciales para protegerte (pagos, propiedad intelectual, revisiones)
- Proceso de gestión de proyecto de diseño instruccional de principio a fin
- Cómo manejar múltiples proyectos simultáneamente sin perder calidad
- Comunicación con stakeholders universitarios: docentes, coordinadores, TI
- Entrega de proyectos: formatos, documentación y handoff

6. ESCALABILIDAD Y CRECIMIENTO
- Cuándo y cómo subcontratar partes del trabajo (narración, animación, desarrollo SCORM)
- Cómo pasar de proyecto por proyecto a retención mensual con universidades
- Creación de tu propio curso o recurso para generar ingresos pasivos
- Alianzas con otras freelancers complementarias (diseñadoras gráficas, videastas)

7. METAS Y PLAN FINANCIERO
- Proyección de ingresos mensual para los primeros 6 meses
- Número de proyectos simultáneos que puedes gestionar con calidad
- Inversión necesaria en herramientas, cursos y marketing
- Indicadores de negocio que debes medir mensualmente

Entrega el plan con ejemplos concretos de propuestas, correos de prospección y descripción de servicios listos para usar en tu negocio freelance.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construcción de negocio freelance en diseño instruccional para universidades',
                'vote_score'       => 37,
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
