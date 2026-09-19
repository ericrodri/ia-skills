<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills519Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación institucional y marketing público con IA: ciudadanos como audiencia',
                'description'      => 'Usa IA para diseñar campañas de comunicación pública más efectivas: mensajes claros para ciudadanos, difusión multicanal de servicios públicos y medición del impacto de la comunicación institucional.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de comunicación institucional con experiencia en marketing público, campañas de concienciación ciudadana y comunicación de administraciones públicas en entornos digitales, incluyendo el uso responsable de inteligencia artificial para la creación y distribución de mensajes de interés público.

objetivo: Diseñar una estrategia de comunicación pública con IA que mejore la comprensión de los servicios disponibles para los ciudadanos, incremente la participación ciudadana en trámites digitales y refuerce la confianza en las instituciones.

Contexto institucional:
- Tipo de organización pública: [ayuntamiento, ministerio, agencia regulatoria, empresa pública, etc.]
- Audiencia ciudadana principal: [describe los segmentos de ciudadanos a los que te diriges]
- Canales de comunicación disponibles: [web institucional, redes sociales, app móvil, boletines, medios locales]
- Campaña o servicio que necesitas comunicar: [describe el servicio, trámite o iniciativa]
- Principal barrera de comunicación identificada: [lenguaje burocrático, baja conciencia del servicio, desconfianza, brecha digital]

Desarrolla la estrategia en los siguientes bloques:

BLOQUE 1 — Simplificación del lenguaje administrativo con IA
Diseña un proceso para transformar textos administrativos complejos en comunicaciones ciudadanas claras y accesibles. Genera una versión simplificada de un texto de ejemplo usando principios de lectura fácil: frases cortas, voz activa, palabras cotidianas, estructura lógica de información (qué, quién, cómo, cuándo, dónde). Incluye una guía de estilo de comunicación pública para el equipo que trabaje con IA.

BLOQUE 2 — Segmentación de audiencias ciudadanas y mensajes adaptados
Identifica los segmentos de ciudadanos más relevantes para la campaña (por edad, nivel digital, situación económica, idioma, localización) y diseña mensajes específicos para cada segmento. Explica cómo adaptar el mismo contenido para distintos niveles de alfabetización digital y cómo garantizar la accesibilidad de las comunicaciones para personas con discapacidad.

BLOQUE 3 — Estrategia multicanal de difusión de servicios públicos
Diseña el plan de difusión multicanal de la campaña: qué canales usar para cada segmento de ciudadanos (redes sociales para jóvenes, SMS para mayores, colaboración con asociaciones vecinales para colectivos vulnerables), qué tipo de contenido funciona mejor en cada canal y cómo coordinar los mensajes para que sean coherentes en todos los puntos de contacto.

BLOQUE 4 — Contenido digital para redes sociales institucionales
Crea un calendario editorial de 4 semanas para las redes sociales de la institución que explique el servicio o campaña de forma atractiva y accesible: tipos de publicación (infografías explicativas, vídeos cortos de 30 segundos, preguntas frecuentes en formato carrusel, testimonios de ciudadanos que ya usan el servicio), tono adecuado para cada red y cómo manejar los comentarios críticos o desinformación en los comentarios.

BLOQUE 5 — Medición del impacto de la comunicación pública
Diseña el sistema de métricas para evaluar el éxito de la campaña de comunicación: indicadores de alcance (impresiones, visualizaciones, audiencia única), indicadores de comprensión (tiempo en página, tasa de rebote en web informativa, preguntas resueltas por el chatbot), indicadores de acción (número de trámites iniciados, descargas de la app, citas solicitadas) y indicadores de confianza (sentimiento en redes, encuesta de percepción ciudadana).

BLOQUE 6 — Transparencia y ética en el uso de IA en comunicación pública
Define los principios éticos que deben guiar el uso de IA en la comunicación institucional: transparencia sobre el uso de IA en la creación de contenidos, revisión humana obligatoria de todos los mensajes generados con IA, salvaguardas contra sesgos en la segmentación de audiencias, protección de datos personales en la personalización de comunicaciones y mecanismos de rendición de cuentas ante la ciudadanía.

Entrega un manual de comunicación pública con IA de dos páginas que cualquier técnico de comunicación de la administración pueda usar como referencia en su trabajo diario.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar campañas de comunicación pública más claras y efectivas con IA',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de servicios públicos digitales con IA: arquitectura, accesibilidad y seguridad',
                'description'      => 'Guía técnica para desarrolladores del sector público: diseña e implementa servicios digitales accesibles, seguros y eficientes con IA, cumpliendo la normativa de administración digital europea.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en la digitalización de servicios públicos, con experiencia en el desarrollo de plataformas de e-government, el cumplimiento de la normativa europea de administración digital (eIDAS, Directiva de Servicios, RGPD) y la implementación de soluciones de inteligencia artificial en entornos de alta seguridad y accesibilidad obligatoria.

tarea: Diseñar la arquitectura técnica y el plan de implementación de un servicio público digital con IA que sea accesible, seguro, interoperable con otros sistemas administrativos y conforme con la normativa vigente.

Contexto técnico del proyecto:
- Servicio público que se va a digitalizar: [describe el trámite o servicio]
- Administración responsable: [administración local, autonómica, estatal, organismo europeo]
- Usuarios del servicio: [ciudadanos, empresas, funcionarios, otras administraciones]
- Sistemas existentes con los que debe integrarse: [cl@ve, FACE, SIR, SARA, AEAT, Seguridad Social, etc.]
- Restricciones tecnológicas conocidas: [infraestructura actual, lenguajes permitidos, política de cloud, etc.]

Desarrolla la guía técnica en los siguientes módulos:

MÓDULO 1 — Arquitectura de referencia para servicios públicos digitales
Diseña la arquitectura de referencia del servicio digital siguiendo los principios del Marco Nacional de Interoperabilidad y el European Interoperability Framework: arquitectura de microservicios o monolito modular según la escala, separación de capas (presentación, lógica de negocio, persistencia), integración con el bus de interoperabilidad administrativo, gestión de identidad digital (cl@ve, eIDAS) y orquestación de servicios compartidos de la administración.

MÓDULO 2 — Implementación de IA en la tramitación administrativa
Explica cómo incorporar IA en las fases del trámite administrativo: clasificación automática de solicitudes entrantes por tipo y urgencia, extracción de información de documentos adjuntos (OCR + NLP para formularios en PDF o papel escaneado), verificación automática de la completitud y coherencia de los datos aportados, y asistente conversacional para guiar al ciudadano durante el proceso de solicitud. Define qué decisiones puede tomar la IA de forma autónoma y cuáles requieren supervisión humana.

MÓDULO 3 — Accesibilidad obligatoria y diseño inclusivo
Diseña el servicio cumpliendo el Estándar UNE-EN 301 549 y las WCAG 2.1 nivel AA: estructura de navegación predecible, contraste de color adecuado, textos alternativos para imágenes e iconos, compatibilidad con lectores de pantalla, formularios correctamente etiquetados, mensajes de error claros y sin tecnicismos, y modo de alto contraste. Define el proceso de pruebas de accesibilidad con usuarios reales, incluyendo personas con discapacidad.

MÓDULO 4 — Seguridad, protección de datos y cumplimiento normativo
Diseña el modelo de seguridad del servicio conforme al Esquema Nacional de Seguridad (ENS) y el RGPD: autenticación multifactor obligatoria para acceso a datos sensibles, cifrado en tránsito y en reposo, gestión de logs de auditoría, política de retención de datos, evaluación de impacto en protección de datos (EIPD) y procedimiento de notificación de brechas de seguridad. Detalla cómo gestionar la base jurídica para el tratamiento de datos personales en cada fase del trámite.

MÓDULO 5 — Interoperabilidad con otros sistemas administrativos
Explica cómo implementar la interoperabilidad del servicio con los sistemas clave de la administración: consulta de datos del ciudadano al Registro Civil y Padrón Municipal para evitar aportación de documentos ya en poder de la administración (principio de una sola vez), integración con la plataforma de pagos administrativos (TPV virtual del Ministerio de Hacienda), notificación electrónica obligatoria y firma electrónica de resoluciones.

MÓDULO 6 — Monitorización, mantenimiento y mejora continua
Diseña el sistema de monitorización del servicio en producción: métricas de disponibilidad (SLA mínimo del 99,5%), tiempos de respuesta, errores de tramitación, tasa de abandono del proceso por etapa y satisfacción del ciudadano tras la tramitación. Define la cadencia de actualizaciones, el proceso de gestión de incidencias y cómo usar los datos de uso para priorizar las mejoras del servicio de forma transparente.

Entrega una lista de verificación técnica y legal de 30 puntos que el equipo debe revisar antes del lanzamiento a producción del servicio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar servicios públicos digitales seguros, accesibles e interoperables con IA',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces ciudadanas con IA: UX para servicios de administración pública',
                'description'      => 'Crea interfaces de administración digital que los ciudadanos realmente entiendan y usen: principios de UX para servicios públicos, patrones de diseño accesibles y uso de IA para simplificar trámites complejos.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de experiencia de usuario especializado en servicios digitales públicos, con experiencia en el diseño de interfaces para administración electrónica, la investigación con usuarios de perfiles muy diversos (incluyendo adultos mayores, personas con baja alfabetización digital y personas con discapacidad) y la aplicación de sistemas de diseño institucionales como el Gov.uk Design System o el sistema de diseño de la administración española.

objetivo: Diseñar la experiencia de usuario de un servicio público digital que sea intuitivo para todos los ciudadanos, reduzca las incidencias de soporte y aumente la tasa de finalización de los trámites en línea.

Contexto del proyecto:
- Servicio público a diseñar: [describe el trámite o servicio que se quiere digitalizar]
- Perfil de los usuarios ciudadanos: [rango de edad, nivel de competencia digital, idiomas, diversidad funcional]
- Dispositivos de acceso principales: [móvil, ordenador de escritorio, tablets, quioscos presenciales]
- Plataforma tecnológica: [web responsive, app nativa, webapp progresiva]
- Sistema de diseño o branding institucional existente: [si existe, descríbelo]

Desarrolla el proyecto de diseño UX en los siguientes bloques:

BLOQUE 1 — Investigación de usuario y mapeo de necesidades
Diseña el plan de investigación con usuarios para este servicio: qué preguntas hacer en las entrevistas para entender el contexto real del ciudadano cuando realiza el trámite (situación emocional, urgencia, dónde está físicamente, qué información tiene a mano), cómo realizar pruebas de usabilidad con personas mayores y con baja competencia digital, y cómo sintetizar los hallazgos en mapas de empatía y personas de diseño representativas de los usuarios reales.

BLOQUE 2 — Arquitectura de información y flujo del trámite
Diseña la arquitectura de información del servicio: cómo organizar el proceso en pasos claros y numerados, cuántos pasos es el máximo antes de que el usuario abandone, cómo gestionar los requisitos previos (documentación necesaria, condiciones de elegibilidad) sin que el ciudadano llegue al final del proceso y descubra que no puede completarlo, y cómo diseñar los estados intermedios para trámites que requieren revisión administrativa.

BLOQUE 3 — Patrones de diseño para formularios y trámites complejos
Diseña los patrones de interacción para los elementos más críticos del formulario administrativo: campos de datos de identidad (validación en tiempo real contra bases de datos), carga de documentos (formatos aceptados, tamaño máximo, retroalimentación del proceso de subida), selección de opciones complejas (con ayuda contextual para términos técnicos), mensajes de error (específicos, sin culpar al usuario, con instrucción de cómo solucionarlo) y confirmación final del trámite con resumen comprensible.

BLOQUE 4 — Asistente de IA conversacional integrado en el trámite
Diseña la integración de un asistente de IA conversacional que guíe al ciudadano durante el trámite: cuándo mostrar el asistente (proactivamente o solo cuando el usuario pide ayuda), qué tipo de ayuda puede ofrecer (explicar términos, verificar si el usuario cumple los requisitos, anticipar los documentos necesarios, estimar el tiempo de resolución), cuándo derivar a atención humana y cómo hacerlo sin que el ciudadano sienta que está abandonado.

BLOQUE 5 — Diseño para la diversidad y la inclusión digital
Define las decisiones de diseño específicas para garantizar la accesibilidad e inclusión: tamaño mínimo de texto y elementos interactivos para usuarios mayores, modo de lectura simplificada con explicaciones en lenguaje llano, soporte multiidioma (castellano, lenguas cooficiales, inglés), alternativas de acceso para usuarios sin correo electrónico y flujo alternativo para ciudadanos que inician el trámite online pero necesitan completarlo presencialmente.

BLOQUE 6 — Evaluación de usabilidad y mejora continua del servicio
Diseña el proceso de evaluación continua de la experiencia de usuario: cómo instrumentar el flujo para identificar en qué pasos hay más abandono, cómo realizar encuestas de satisfacción de un solo clic al finalizar el trámite (tipo GDS), cómo usar el análisis de tickets de soporte para detectar confusiones de diseño recurrentes y cómo incorporar las mejoras de forma iterativa sin interrumpir el servicio en producción.

Entrega un prototipo textual del flujo completo del trámite con el contenido exacto de cada pantalla, los mensajes de error más probables y las ayudas contextuales en cada paso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar interfaces de administración digital accesibles e intuitivas para ciudadanos con IA',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para la captación de inversión y promoción económica territorial',
                'description'      => 'Diseña estrategias de atracción de inversión y promoción económica de territorios con IA: identifica inversores potenciales, personaliza la oferta y gestiona el pipeline de proyectos de inversión.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en promoción económica territorial y atracción de inversión extranjera directa (IED), con experiencia en el trabajo con agencias de desarrollo regional, oficinas de inversión y organismos de promoción económica que usan análisis de datos e inteligencia artificial para identificar, atraer y retener inversores en sus territorios.

tarea: Diseñar una estrategia de atracción de inversión para un territorio usando IA para identificar inversores potenciales, personalizar la propuesta de valor del territorio y gestionar el pipeline de proyectos de inversión de forma eficiente.

Contexto del territorio:
- Tipo de territorio: [ciudad, región, parque tecnológico, zona franca, cluster industrial]
- Sectores económicos prioritarios para atraer inversión: [tecnología, industria, agroalimentario, turismo, energías renovables, etc.]
- Ventajas competitivas del territorio: [talento disponible, costes, infraestructuras, incentivos fiscales, calidad de vida]
- Presupuesto de promoción disponible: [indica el orden de magnitud]
- Objetivo de inversión: [número de proyectos, volumen de inversión, empleos a crear]

Desarrolla la estrategia en los siguientes bloques:

BLOQUE 1 — Inteligencia de mercado e identificación de inversores objetivo
Explica cómo usar IA para identificar empresas con perfil de inversor potencial para mi territorio: análisis de anuncios de expansión internacional, seguimiento de convocatorias de subvenciones europeas en sectores prioritarios, monitorización de noticias sobre planes de deslocalización o nearshoring, y rastreo de startups en fase de crecimiento que buscan nueva base de operaciones. Define los criterios de cualificación de un prospecto inversor (tamaño, sector, mercados de origen, historial inversor).

BLOQUE 2 — Propuesta de valor del territorio personalizada con IA
Diseña el sistema de personalización de la propuesta de valor del territorio para cada tipo de inversor: para empresas tecnológicas, enfatiza el ecosistema de talento y las universidades; para industria manufacturera, el coste logístico y los suelos industriales; para startups, los programas de aceleración y el acceso a fondos públicos. Genera plantillas de documento de propuesta de valor adaptable para cada sector y origen del inversor.

BLOQUE 3 — Estrategia de marketing internacional para la atracción de inversión
Define la estrategia de marketing de la oferta territorial: presencia en ferias y eventos internacionales de inversión (MIPIM, Selected, Expo Real), estrategia de contenidos en LinkedIn orientada a decisores de inversión (C-Suite de empresas multinacionales, directores de expansión, venture capitalists), programa de embajadores del territorio entre empresas ya instaladas y relaciones con cámaras de comercio bilaterales y oficinas económicas de embajadas.

BLOQUE 4 — Gestión del pipeline de proyectos de inversión con IA
Diseña el sistema de gestión del pipeline de proyectos de inversión: cómo clasificar los proyectos por fase (prospección, contacto inicial, análisis de viabilidad, negociación, decisión de inversión, implantación), qué información registrar de cada proyecto, cómo usar IA para priorizar los proyectos con mayor probabilidad de materialización y cómo coordinar la respuesta de distintos departamentos (urbanismo, hacienda, empleo, formación) en un proceso de atención al inversor ágil.

BLOQUE 5 — Diseño del servicio de acompañamiento al inversor
Diseña el servicio de aftercare para inversores que ya están en el territorio: visita de seguimiento al año de la implantación, detección temprana de señales de posible desinversión, facilitación de conexiones con el ecosistema local (proveedores, socios, talento) y programa de reinversión para ampliar las operaciones existentes. Define los indicadores de satisfacción del inversor instalado.

BLOQUE 6 — Medición del impacto de la estrategia de atracción de inversión
Establece los KPIs de la estrategia: número de proyectos de inversión atraídos, volumen de inversión materializada, empleos directos creados, tasa de conversión de prospecto a proyecto confirmado, tiempo medio desde primer contacto hasta decisión de inversión y retorno económico para el territorio por euro invertido en promoción. Define cómo presentar estos resultados a responsables políticos y a la ciudadanía.

Entrega un plan de acción anual de atracción de inversión con los hitos trimestrales y los recursos necesarios para cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategias de atracción de inversión territorial con inteligencia de mercado e IA',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de productos digitales en administración pública con IA: del ciudadano al roadmap',
                'description'      => 'Framework de product management para el sector público: cómo definir el roadmap de un servicio digital gubernamental, medir el éxito desde la perspectiva ciudadana y aplicar metodologías ágiles en administraciones.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager especializado en servicios digitales del sector público, con experiencia en la aplicación de metodologías de gestión de producto en administraciones públicas europeas, incluyendo el diseño centrado en el usuario, la definición de OKRs para servicios de gobierno digital y la navegación de las restricciones propias del entorno administrativo (gobernanza, ciclos presupuestarios, contratos públicos, cumplimiento normativo).

objetivo: Aplicar una metodología de gestión de producto moderna al desarrollo y mejora de un servicio digital público, adaptando las mejores prácticas del sector privado a las particularidades del entorno administrativo.

Contexto del servicio:
- Servicio digital público que gestiono: [describe el servicio o trámite digital]
- Administración responsable: [nivel de administración, departamento]
- Usuarios del servicio: [ciudadanos, empresas, funcionarios de otras administraciones]
- Estado actual del servicio: [en desarrollo, en producción con mejoras pendientes, a rediseñar]
- Principal problema del servicio: [baja tasa de uso, muchas incidencias, proceso demasiado largo, no cumple expectativas ciudadanas]

Desarrolla el framework en los siguientes módulos:

MÓDULO 1 — Definición de la visión y los objetivos del servicio público
Ayúdame a definir la visión del servicio: cuál es el resultado que debe lograr en la vida de los ciudadanos (no solo el proceso que automatiza), cuál es la ambición a 3 años, y cómo expresarlo en un formato de visión de producto que inspire al equipo y comunique claramente el valor público del servicio. Define los OKRs del servicio para los próximos 6 meses alineados con los objetivos estratégicos de la administración.

MÓDULO 2 — Investigación de usuario en el sector público
Diseña un proceso de investigación de usuario adaptado al contexto público: cómo reclutar ciudadanos representativos para pruebas de usuario respetando el RGPD, qué técnicas son más efectivas para entender el contexto real en que los ciudadanos realizan los trámites (entrevistas contextuales, shadowing en oficinas de atención presencial, análisis de tickets de soporte), y cómo sintetizar los hallazgos en insights accionables para el roadmap.

MÓDULO 3 — Priorización del roadmap en entornos con restricciones administrativas
Explica cómo priorizar el backlog de mejoras de un servicio público cuando existen restricciones adicionales al sector privado: dependencias de contratación pública (los cambios deben encajar en el contrato vigente o requerir licitación nueva), ciclos presupuestarios anuales que limitan la financiación de mejoras, requisitos normativos que fuerzan determinadas funcionalidades independientemente de su valor para el usuario, y decisiones políticas que pueden redireccionar el roadmap. Define un framework de priorización que navegue estas restricciones manteniendo el foco en el valor ciudadano.

MÓDULO 4 — Metodologías ágiles en el sector público
Diseña una adaptación del marco ágil (Scrum o Kanban) para un equipo de desarrollo de servicios públicos: qué ceremonias son esenciales y cuáles pueden simplificarse, cómo gestionar la relación con el proveedor tecnológico cuando el desarrollo es externalizado, cómo involucrar a los funcionarios usuarios del servicio en el proceso de diseño y validación, y cómo documentar las decisiones de diseño para cumplir con los requerimientos de auditoría del sector público.

MÓDULO 5 — Métricas de éxito de servicios públicos digitales
Define las métricas que debe monitorizar un product manager de servicio público: métricas de uso (tasa de digitalización del trámite respecto al canal presencial o telefónico), métricas de calidad (tasa de finalización, tiempo medio de tramitación, tasa de errores), métricas de satisfacción ciudadana (encuesta post-trámite, NPS), métricas de impacto (ahorro de tiempo al ciudadano, reducción de coste por trámite para la administración) y métricas de accesibilidad (porcentaje de usuarios con asistencia tecnológica que completan el proceso).

MÓDULO 6 — Comunicación del producto y gestión de stakeholders en la administración
Define cómo comunicar el estado y evolución del servicio a los distintos stakeholders del entorno administrativo: al equipo directivo (resultados de impacto y eficiencia), al área jurídica y de cumplimiento (conformidad normativa de las funcionalidades), a los funcionarios que atienden a ciudadanos presencialmente (cambios que afectan a su trabajo), y a la ciudadanía en general (transparencia sobre las mejoras del servicio y los datos de uso).

Entrega una plantilla de revisión trimestral del servicio digital que pueda usar para presentar el estado del producto a la dirección de la administración.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar metodologías de product management modernas a servicios digitales del sector público',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para la gestión de recursos humanos en el sector público: selección, formación y bienestar',
                'description'      => 'Aplica IA a la gestión de personas en administraciones públicas: convocatorias de empleo público, planes de formación para funcionarios, gestión del cambio digital y programas de bienestar laboral.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de recursos humanos especializado en la gestión de personas en el sector público, con experiencia en la modernización de los procesos de selección de empleo público, el diseño de planes de formación para funcionarios en transformación digital y la implementación de programas de bienestar y cultura organizativa en administraciones públicas.

tarea: Diseñar un plan integral de modernización de la gestión de recursos humanos en una administración pública usando inteligencia artificial para mejorar la eficiencia de los procesos de selección, personalizar la formación y aumentar el bienestar de los empleados públicos.

Contexto de la organización:
- Tipo de administración y número de empleados: [ayuntamiento, diputación, ministerio, agencia]
- Principal reto de RRHH: [selección lenta, brecha de competencias digitales, alta tasa de absentismo, dificultad para gestionar el cambio hacia la digitalización]
- Estado actual de la digitalización de RRHH: [procesos manuales, parcialmente digitalizados, sistema integrado de RRHH]
- Marco normativo aplicable: [Estatuto Básico del Empleado Público, convenio colectivo aplicable]

Desarrolla el plan en los siguientes bloques:

BLOQUE 1 — Modernización del proceso de selección de empleo público con IA
Explica cómo usar IA para mejorar el proceso de selección de empleo público sin vulnerar los principios de igualdad, mérito y capacidad: generación automática de bases de convocatorias a partir de plantillas validadas jurídicamente, diseño de pruebas de competencias digitales para los perfiles técnicos, análisis de la consistencia y calidad de los temarios de oposición, y herramientas de corrección asistida para pruebas escritas manteniendo la revisión humana final. Define los límites del uso de IA en procesos selectivos para garantizar la imparcialidad.

BLOQUE 2 — Plan de formación en competencias digitales para funcionarios
Diseña un plan de formación en transformación digital para funcionarios de distintos niveles: formación básica en herramientas de ofimática colaborativa y gestión documental para todo el personal, formación intermedia en análisis de datos y uso de IA para perfiles con función analítica, y formación avanzada en gestión de proyectos digitales para directivos públicos. Incluye cómo personalizar el itinerario formativo de cada empleado según su punto de partida y sus necesidades específicas.

BLOQUE 3 — Gestión del cambio cultural hacia la administración digital
Diseña un programa de gestión del cambio para acompañar la digitalización de los procesos administrativos: cómo identificar a los agentes de cambio entre los funcionarios, cómo gestionar la resistencia al cambio en perfiles con larga trayectoria, cómo comunicar los beneficios de la digitalización para el propio funcionario (no solo para el ciudadano), y cómo celebrar los hitos de transformación para mantener la motivación del equipo.

BLOQUE 4 — Evaluación del desempeño y desarrollo profesional en la función pública
Diseña un sistema de evaluación del desempeño adaptado al marco normativo del empleo público: indicadores de rendimiento que sean objetivos y medibles, proceso de evaluación que garantice la imparcialidad y prevenga el favoritismo, vinculación de los resultados de evaluación con el plan de formación individual y, donde la normativa lo permita, con la carrera profesional horizontal del funcionario.

BLOQUE 5 — Programas de bienestar y prevención del burnout en administraciones
Define un programa de bienestar laboral para empleados públicos: detección temprana de señales de agotamiento profesional (análisis de patrones de absentismo, resultados de encuestas de clima laboral, indicadores de baja en productividad), programa de apoyo psicológico confidencial, iniciativas de conciliación adaptadas al convenio colectivo y programa de reconocimiento de empleados que destaquen en la transformación digital.

BLOQUE 6 — Métricas de gestión de personas en el sector público
Establece los indicadores de RRHH que debe monitorizar trimestralmente la dirección de recursos humanos: tiempo medio de cobertura de vacantes por oposición y por interinidad, inversión media en formación por empleado, porcentaje de empleados que han completado el itinerario de competencias digitales, tasa de absentismo, índice de clima laboral y número de solicitudes de jubilación anticipada como indicador de riesgo de pérdida de conocimiento crítico.

Entrega un plan de acción de 12 meses para la modernización de la gestión de personas en la administración, con los hitos más importantes de cada trimestre y los recursos necesarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Modernizar la gestión de recursos humanos en administraciones públicas con IA',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para la auditoría y control del gasto público: detección de anomalías y transparencia',
                'description'      => 'Aplica IA al control del gasto público: detecta anomalías en contratación, audita la eficiencia del presupuesto, identifica riesgos de fraude y genera informes de transparencia para la ciudadanía.',
                'prompt_content'   => <<<'EOT'
Actúa como un auditor público y especialista en control financiero del sector público, con experiencia en la aplicación de técnicas de análisis de datos e inteligencia artificial para la detección de anomalías en el gasto público, la auditoría de contratos públicos y la generación de informes de transparencia presupuestaria para distintas audiencias.

objetivo: Diseñar un sistema de control y auditoría del gasto público con IA que detecte anomalías, identifique riesgos de fraude y corrupción, y genere información de transparencia accesible para la ciudadanía y los órganos de control.

Contexto de la organización:
- Tipo de administración y volumen presupuestario: [ayuntamiento, diputación, ministerio, organismo autónomo]
- Sistemas de gestión presupuestaria y contratación disponibles: [SAP, SICALWIN, INVESICRE, plataforma de contratación del estado, etc.]
- Principales áreas de gasto: [personal, contratos de servicios, inversión, transferencias, subvenciones]
- Órganos de control aplicables: [Tribunal de Cuentas, IGAE, Intervención General, órganos autonómicos]
- Principal preocupación de control: [fraccionamiento de contratos, conflictos de interés, ineficiencia en subvenciones, desfases presupuestarios]

Desarrolla el sistema en los siguientes módulos:

MÓDULO 1 — Arquitectura de datos para el control del gasto público
Diseña la arquitectura de datos necesaria para un sistema de auditoría con IA: qué fuentes de datos deben integrarse (base de datos de contratos del PLACE, registro de proveedores, datos de RRHH, base de datos de subvenciones, sistemas contables internos), cómo garantizar la calidad e integridad de los datos, y qué modelo de datos permite el análisis transversal de todas las áreas de gasto.

MÓDULO 2 — Detección de anomalías en contratación pública con IA
Desarrolla los modelos de detección de anomalías para contratación pública: identificación de fraccionamiento de contratos (adjudicaciones repetidas al mismo proveedor por debajo del umbral de licitación), detección de concentración de adjudicaciones (proveedor único que acumula contratos de distintas áreas), análisis de patrones temporales sospechosos (adjudicaciones aceleradas antes del fin del ejercicio presupuestario), y análisis de coherencia de precios (comparación con precios de referencia de mercado).

MÓDULO 3 — Auditoría de subvenciones y transferencias con IA
Diseña el sistema de control de subvenciones: verificación automática del cumplimiento de los requisitos de elegibilidad de los beneficiarios, detección de doble financiación (misma actividad financiada por distintas administraciones), análisis de la justificación de los gastos subvencionados (coherencia entre el objeto subvencionado y los gastos declarados) y seguimiento del cumplimiento de los objetivos comprometidos en la solicitud.

MÓDULO 4 — Análisis de eficiencia presupuestaria con IA
Explica cómo usar IA para analizar la eficiencia del gasto público: comparación de costes de servicios similares entre distintas unidades de la misma administración, benchmarking con administraciones comparables (benchmarking intermunicipal, indicadores de eficiencia del Ministerio de Hacienda), detección de servicios con coste creciente sin incremento de calidad o cobertura y análisis de la ejecución presupuestaria para detectar créditos recurrentemente no ejecutados que señalan una mala planificación.

MÓDULO 5 — Transparencia y rendición de cuentas con visualización de datos
Diseña el portal de transparencia presupuestaria: cómo presentar el presupuesto y su ejecución de forma comprensible para ciudadanos sin formación financiera, qué visualizaciones son más efectivas para cada tipo de dato (sankey para flujos presupuestarios, treemaps para estructura del gasto, series temporales para evolución), cómo publicar los datos en formato reutilizable conforme a la Ley de Transparencia y qué nivel de detalle publicar sin comprometer la seguridad operativa.

MÓDULO 6 — Gestión de riesgos y seguimiento de recomendaciones de auditoría
Diseña el sistema de gestión de riesgos y seguimiento: mapa de riesgos de control interno actualizado automáticamente con los resultados del análisis de datos, sistema de registro y seguimiento de las recomendaciones emitidas por el Tribunal de Cuentas y la Intervención General, indicadores de madurez del control interno por área y proceso de aprendizaje organizativo a partir de las deficiencias detectadas.

Entrega un informe de diagnóstico de control del gasto en formato ejecutivo de dos páginas con los 5 riesgos más relevantes identificados y las recomendaciones de mejora priorizadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar IA a la auditoría del gasto público, detección de anomalías y transparencia presupuestaria',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para la tramitación jurídica y compliance en administración pública',
                'description'      => 'Optimiza los procesos jurídicos de la administración con IA: análisis de normativa, redacción de resoluciones, gestión de plazos y compliance de procedimientos administrativos.',
                'prompt_content'   => <<<'EOT'
Actúa como un jurista especializado en derecho administrativo con experiencia en la modernización de los servicios jurídicos de administraciones públicas, incluyendo el uso de inteligencia artificial para la gestión de expedientes, el análisis normativo, la redacción de resoluciones administrativas y el cumplimiento de los plazos procedimentales establecidos en la Ley 39/2015 del Procedimiento Administrativo Común.

tarea: Diseñar un sistema de apoyo jurídico con IA para la tramitación de expedientes administrativos que reduzca los tiempos de resolución, garantice la coherencia de los criterios jurídicos y minimice los riesgos de anulación de actos administrativos en vía de recurso o judicial.

Contexto del servicio jurídico:
- Tipo de procedimientos que tramita: [sanciones, subvenciones, autorizaciones, contratación, recursos, etc.]
- Volumen de expedientes anuales: [indica el orden de magnitud]
- Principales problemas actuales: [plazos incumplidos, recursos estimados frecuentes, falta de criterio uniforme, carga excesiva de trabajo]
- Sistema de gestión de expedientes: [Documentum, EXPEDITO, sistema propio, papel digitalizado]
- Recursos jurídicos disponibles: [número de letrados, técnicos jurídicos, gestor administrativo]

Desarrolla el sistema en los siguientes módulos:

MÓDULO 1 — Análisis normativo automatizado con IA
Diseña un sistema de análisis normativo que apoye a los juristas en la identificación de la normativa aplicable a cada tipo de expediente: cómo estructurar una base de conocimiento jurídico-administrativo que se actualice automáticamente con las modificaciones normativas, cómo usar IA para analizar la jurisprudencia del Tribunal Supremo y la Audiencia Nacional relevante para los procedimientos más frecuentes, y cómo presentar los resultados del análisis de forma que el jurista pueda validarlos eficientemente.

MÓDULO 2 — Asistente de redacción de resoluciones y actos administrativos
Explica cómo usar IA para apoyar la redacción de resoluciones administrativas: generación del borrador de motivación jurídica a partir de los hechos del expediente y la normativa aplicable, verificación de la coherencia de la resolución con resoluciones anteriores del mismo órgano (consistencia de criterio), detección de los defectos formales más frecuentes que generan anulabilidad (falta de audiencia, motivación insuficiente, incongruencia con la propuesta de resolución) y adaptación del lenguaje para que la resolución sea comprensible para el ciudadano destinatario.

MÓDULO 3 — Gestión de plazos y alerta de silencio administrativo
Diseña un sistema de gestión de plazos procedimentales: calendario automático de cada expediente con los hitos procesales establecidos por la Ley 39/2015 (plazo de tramitación máximo, trámite de audiencia, período de información pública, plazos para subsanación), alertas a los responsables con antelación suficiente para evitar el silencio administrativo y sistema de priorización de expedientes en función del riesgo de incumplimiento de plazo y del impacto reputacional o económico del silencio.

MÓDULO 4 — Control de calidad jurídica y coherencia de criterio
Diseña el sistema de control de calidad de los actos administrativos: checklist automático de requisitos formales y de fondo para cada tipo de procedimiento, detección de desviaciones del criterio jurídico establecido en resoluciones previas o en informes del servicio jurídico, sistema de revisión por pares para expedientes de alta complejidad o alto impacto, y registro de las decisiones jurídicas relevantes para construir la doctrina interna del órgano.

MÓDULO 5 — Gestión de recursos administrativos y contencioso-administrativo
Explica cómo usar IA para la gestión de los recursos presentados contra los actos del órgano: clasificación automática de los recursos por motivo de impugnación, análisis de la solidez jurídica del recurso para priorizar los que tienen mayor probabilidad de estimación, apoyo en la redacción de los informes de contestación al recurso y análisis de la jurisprudencia reciente que pueda afectar a la posición de la administración en contencioso.

MÓDULO 6 — Transparencia del procedimiento y comunicación con el ciudadano
Diseña el sistema de comunicación con el ciudadano durante el procedimiento: notificaciones automáticas de cada hito procedimental en lenguaje comprensible (no jerga administrativa), sistema de consulta del estado del expediente en tiempo real a través de la sede electrónica, explicación de los derechos del ciudadano en cada fase del procedimiento y gestión de las comunicaciones previas a la resolución (trámite de audiencia, subsanación de deficiencias).

Entrega un protocolo de tramitación jurídica con IA para el procedimiento más frecuente de la unidad, con el flujo de trabajo, las verificaciones de IA en cada fase y los criterios de revisión humana obligatoria.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimizar la tramitación jurídica y el compliance en administraciones públicas con IA',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Chatbots ciudadanos con IA para la atención en servicios públicos',
                'description'      => 'Diseña e implementa chatbots de atención ciudadana con IA: arquitectura conversacional, integración con sistemas administrativos, gestión de idiomas y medición de la satisfacción ciudadana.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en experiencia de cliente del sector público con experiencia en el diseño e implementación de chatbots de atención ciudadana, incluyendo la definición de la arquitectura conversacional, la integración con los sistemas de gestión de la administración, el cumplimiento del RGPD y la garantía de accesibilidad para todos los ciudadanos.

objetivo: Diseñar e implementar un chatbot de atención ciudadana con IA que resuelva autónomamente las consultas más frecuentes, reduzca la carga de trabajo de los funcionarios de atención al público y mejore la satisfacción de los ciudadanos con los servicios de la administración.

Contexto del servicio:
- Tipo de administración y servicios a automatizar: [describe los trámites y consultas más frecuentes]
- Canales de despliegue del chatbot: [web institucional, app móvil, WhatsApp, Telegram, quiosco presencial]
- Idiomas a soportar: [castellano, lenguas cooficiales, inglés para turistas o residentes extranjeros]
- Volumen actual de consultas: [número de llamadas o visitas presenciales mensuales]
- Sistemas administrativos con los que debe integrarse: [sede electrónica, sistema de citas previas, gestión de expedientes, padrón municipal, etc.]

Desarrolla el proyecto en los siguientes bloques:

BLOQUE 1 — Análisis de conversaciones y definición del scope del chatbot
Diseña el proceso de análisis de las consultas actuales para definir qué puede resolver el chatbot y qué debe derivar a un funcionario: cómo categorizar las consultas por tipo (información, gestión de cita, consulta de estado de expediente, presentación de documentos, reclamación), cómo calcular el potencial de automatización de cada categoría (volumen, complejidad, variabilidad) y cómo definir el alcance inicial del chatbot para garantizar una buena experiencia desde el primer día.

BLOQUE 2 — Arquitectura conversacional y diseño de flujos de diálogo
Diseña la arquitectura conversacional del chatbot: cómo estructurar el menú inicial para que el ciudadano encuentre rápidamente lo que busca, cómo diseñar los flujos de diálogo para las 10 consultas más frecuentes (con los nodos de decisión, las respuestas tipo y los puntos de salida), cómo manejar las consultas fuera del scope con una derivación amable al canal adecuado, y cómo diseñar el tono de voz del chatbot de forma que sea accesible, cercano y coherente con la identidad institucional.

BLOQUE 3 — Integración con sistemas de la administración y acceso a datos en tiempo real
Explica cómo integrar el chatbot con los sistemas de la administración para ofrecer información personalizada en tiempo real: consulta del estado de un expediente con verificación de identidad simplificada (NIF + fecha de nacimiento), gestión de cita previa integrada con el sistema de agenda, consulta del padrón para verificar datos del ciudadano, y acceso a la base de conocimiento de respuestas FAQ actualizada automáticamente cuando cambia la normativa o los procedimientos.

BLOQUE 4 — Accesibilidad, inclusión digital y gestión de la diversidad lingüística
Diseña el chatbot para que sea accesible para todos los ciudadanos: compatibilidad con lectores de pantalla para personas con discapacidad visual, interfaz de voz como alternativa al texto escrito para personas con dificultades de escritura, lenguaje claro y sin tecnicismos administrativos, soporte de idiomas con detección automática del idioma del ciudadano, y protocolo especial para ciudadanos que manifiesten dificultades para entender las respuestas del chatbot.

BLOQUE 5 — Gestión del traspaso a agente humano y casos de escalado
Define el protocolo de escalado a funcionario humano: qué condiciones activan el traspaso automático (consulta fuera del scope, ciudadano que expresa frustración, caso de urgencia social), cómo traspasar el contexto de la conversación al funcionario para que no tenga que pedir al ciudadano que repita lo ya explicado, cómo gestionar el chatbot cuando los funcionarios no están disponibles (fuera de horario, alta demanda), y cómo usar el análisis de los casos escalados para ampliar el scope del chatbot en futuras versiones.

BLOQUE 6 — Cumplimiento del RGPD y transparencia algorítmica
Define las medidas de cumplimiento normativo del chatbot: información clara al ciudadano de que está interactuando con un sistema automatizado, base jurídica para el tratamiento de los datos personales intercambiados durante la conversación, período de retención de los logs de conversación, derecho del ciudadano a solicitar atención humana en cualquier momento, y política de transparencia sobre las capacidades y limitaciones del sistema de IA.

Entrega una guía de implementación del chatbot con las 5 primeras conversaciones piloto diseñadas en detalle, incluyendo el texto exacto de cada mensaje del sistema y las posibles respuestas del ciudadano en cada nodo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar e implementar chatbots de atención ciudadana con IA para servicios públicos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de transformación digital e IA para entidades públicas: servicios freelance',
                'description'      => 'Guía para consultores freelance que quieren trabajar con administraciones públicas: cómo estructurar servicios de transformación digital, navegar la contratación pública y posicionarse como experto en IA para el sector público.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor independiente especializado en transformación digital del sector público con experiencia en la prestación de servicios de consultoría a administraciones locales, regionales y nacionales, incluyendo el conocimiento de los mecanismos de contratación pública para acceder a proyectos de administración digital como proveedor freelance o empresa pequeña.

tarea: Ayudarme a estructurar y lanzar una práctica de consultoría freelance de transformación digital e IA para el sector público, incluyendo la definición de servicios, la estrategia de acceso al mercado público y el posicionamiento como experto de referencia en mi área de especialización.

Mi perfil profesional:
- Experiencia previa en administración pública o transformación digital: [describe tu trayectoria]
- Competencias técnicas en IA y digitalización: [describe tus habilidades principales]
- Tipo de administración con la que quieres trabajar: [ayuntamientos, diputaciones, comunidades autónomas, organismos europeos]
- Servicios que quieres ofrecer: [descripción general de lo que quieres vender]
- Situación actual como freelance: [sin clientes públicos, con alguna experiencia, consolidado en sector privado]

Desarrolla el plan en los siguientes bloques:

BLOQUE 1 — Definición de servicios de consultoría para el sector público
Diseña un catálogo de servicios de consultoría de transformación digital e IA para administraciones públicas con tres niveles: servicios de diagnóstico (auditoría de madurez digital, análisis de procesos candidatos a automatización, diagnóstico de datos), servicios de diseño (estrategia de gobierno digital, hoja de ruta de digitalización, diseño de servicios ciudadanos), y servicios de implementación y acompañamiento (dirección de proyectos tecnológicos, formación de equipos, auditoría de proyectos en curso). Para cada servicio, define entregables, duración estimada y precio orientativo.

BLOQUE 2 — Acceso al mercado público: contratación menor, licitaciones y marcos de contratación
Explica los mecanismos de contratación pública más accesibles para un consultor freelance: el contrato menor (hasta 15.000 euros en servicios sin IVA, adjudicación directa), los procedimientos abiertos simplificados, los acuerdos marco existentes en materias de transformación digital y consultoría (Acuerdo Marco de Servicios de Consultoría de la AEAT, acuerdos autonómicos), y cómo acceder a proyectos europeos de digitalización (programas DIGITAL Europe, Mecanismo de Recuperación y Resiliencia) como socio o subcontratista.

BLOQUE 3 — Posicionamiento como experto de referencia en IA para el sector público
Diseña la estrategia de posicionamiento: cómo construir una reputación específica en el nicho de IA para administraciones públicas (publicaciones en revistas de administración digital, participación en jornadas de la FEMP o del INAP, colaboración con think tanks de gobierno digital como Governance Lab o OpenGov Foundation), cómo usar LinkedIn para conectar con responsables de transformación digital de administraciones y cómo aprovechar los proyectos europeos como palanca de visibilidad y red de contactos.

BLOQUE 4 — Propuesta técnica y oferta económica para licitaciones públicas
Diseña una propuesta técnica tipo para una licitación de consultoría de transformación digital: estructura del documento (comprensión del encargo, metodología, equipo propuesto, plan de trabajo, entregables, gestión de riesgos), cómo destacar la oferta frente a grandes consultoras con criterios de valoración como la especialización sectorial, la proximidad y el conocimiento del entorno normativo específico, y cómo presentar la oferta económica de forma competitiva respetando los márgenes mínimos de rentabilidad.

BLOQUE 5 — Gestión de proyectos públicos: cumplimiento, documentación y plazos
Explica las particularidades de la gestión de proyectos para la administración pública que el consultor freelance debe dominar: gestión del contrato conforme al pliego de condiciones, documentación de entregables con el nivel de formalidad requerido, gestión de cambios de alcance en entornos de contratación pública (modificaciones contractuales), facturación y certificación de trabajos con los requisitos formales de la administración, y gestión de las relaciones con el equipo técnico y directivo de la administración cliente.

BLOQUE 6 — Red de socios y modelo de colaboración para proyectos grandes
Define cómo construir una red de socios complementarios para acceder a proyectos de mayor envergadura que requieran capacidades que el consultor individual no puede cubrir solo: cómo identificar y seleccionar socios tecnológicos (empresas de desarrollo, integradores de sistemas, plataformas de IA), cómo estructurar acuerdos de colaboración (UTE temporal, subcontratación, consorcio para proyectos europeos), y cómo gestionar la relación con el cliente cuando trabajas en equipo con otros proveedores.

Entrega un plan de negocio de 12 meses para la práctica de consultoría freelance de IA en el sector público, con los objetivos de facturación trimestrales, las acciones de desarrollo de negocio y los hitos de posicionamiento más importantes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar una práctica de consultoría freelance de transformación digital e IA para el sector público',
                'vote_score'       => 31,
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
