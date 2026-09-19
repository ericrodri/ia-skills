<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills622Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de employer branding con IA para atraer talento digital',
                'description'      => 'Crea campañas de marca empleadora potenciadas con inteligencia artificial para posicionar tu empresa como destino de talento en el mercado HR Tech.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega senior de employer branding con experiencia en HR Tech y marketing de talento digital. Tu misión es ayudarme a construir una estrategia completa de marca empleadora para una empresa del sector tecnológico que quiere atraer perfiles altamente cualificados en un mercado competitivo.

contexto: La empresa tiene entre 200 y 500 empleados, opera en el sector tecnológico-financiero (fintech), ofrece trabajo híbrido y busca diferenciarse de grandes corporaciones y startups unicornio que compiten por el mismo talento. El presupuesto de employer branding es moderado, lo que exige creatividad y eficiencia en cada acción.

objetivo: Desarrollar un plan de employer branding de 90 días que combine contenido orgánico, presencia en plataformas de empleo y activaciones en comunidades digitales, con métricas claras de seguimiento.

tarea principal: Dame un plan estructurado con las siguientes secciones:

1. DIAGNÓSTICO DE MARCA EMPLEADORA
Analiza los tres pilares de la propuesta de valor al empleado (EVP): cultura organizacional, oportunidades de crecimiento y compensación total. Proporciona un framework para auditar internamente cómo perciben los empleados actuales la marca, con tres preguntas clave para encuestas internas y tres señales de alerta en reseñas de Glassdoor o LinkedIn.

2. CONSTRUCCIÓN DE LA EVP DIFERENCIAL
Redacta una propuesta de valor al empleado de entre 150 y 200 palabras que pueda usarse en todas las comunicaciones. La EVP debe destacar la cultura de innovación con IA, la autonomía en el trabajo y el impacto real del rol en el negocio. Incluye una versión corta de no más de 30 palabras para usar en anuncios de empleo.

3. PLAN DE CONTENIDOS (90 DÍAS)
Mes 1 — Conciencia: Define cinco tipos de contenido para LinkedIn y tres para Instagram/TikTok centrados en el "día a día" de los equipos, historias de crecimiento interno y cultura de trabajo. Incluye frecuencia de publicación y responsable sugerido (RRHH, comunicación interna o marketing).
Mes 2 — Consideración: Propón tres piezas de contenido largo (artículo de blog, video, podcast interno) que profundicen en los beneficios del equipo, el uso de IA en el trabajo cotidiano y las oportunidades de desarrollo profesional.
Mes 3 — Conversión: Diseña una campaña de "embajadores internos" donde cinco empleados compartan su experiencia de forma auténtica. Incluye guión orientativo, formatos de contenido y métricas de alcance esperadas.

4. CANALES Y DISTRIBUCIÓN
Enumera los cinco canales prioritarios para difundir el employer branding (LinkedIn, Glassdoor, comunidades de Slack/Discord, GitHub si aplica, eventos sectoriales) y la estrategia específica para cada uno. Indica qué herramientas de IA pueden automatizar la distribución o el análisis de rendimiento.

5. KPIs Y MEDICIÓN
Define ocho indicadores clave de rendimiento divididos en métricas de alcance (impresiones, seguidores), de engagement (comentarios, solicitudes de empleo espontáneas) y de calidad (ratio de oferta aceptada, Net Promoter Score de candidatos). Proporciona un dashboard simplificado en formato tabla con frecuencia de revisión.

6. USO DE IA EN EL PROCESO
Explica cómo usar Claude u otras herramientas de IA generativa para: (a) redactar variantes de anuncios de empleo personalizados por perfil buscado, (b) analizar el tono de las reseñas en plataformas de empleo y detectar patrones negativos, y (c) generar ideas de contenido semanales para el equipo de employer branding.

Presenta el plan en formato estructurado con encabezados claros. Usa un tono profesional pero cercano, orientado a resultados medibles. Al final, añade tres errores comunes que cometen las empresas medianas en employer branding y cómo evitarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategias de employer branding potenciadas con IA para atraer talento cualificado en mercados competitivos.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de flujos de reclutamiento con IA para desarrolladores',
                'description'      => 'Diseña pipelines automatizados de selección de talento técnico usando herramientas de IA, desde el screening inicial hasta la evaluación de competencias técnicas.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software senior con experiencia en sistemas HR Tech y automatización de procesos de reclutamiento. Voy a implementar un sistema de selección de talento técnico semi-automatizado para una empresa de software de tamaño mediano. Necesito tu ayuda para diseñar la arquitectura del flujo y las integraciones necesarias.

contexto: La empresa recibe entre 50 y 150 candidaturas por mes para posiciones técnicas (backend, frontend, DevOps, data engineering). El equipo de reclutamiento tiene dos personas y el proceso actual es mayoritariamente manual: revisión de CVs en un ATS básico, entrevistas telefónicas de screening y pruebas técnicas enviadas por email. El objetivo es reducir el tiempo de contratación de 45 días a menos de 25 días sin reducir la calidad de los candidatos seleccionados.

tarea: Diseña un sistema de reclutamiento automatizado con IA que aborde las siguientes fases:

1. SCREENING AUTOMATIZADO DE CVs
Describe cómo implementar un sistema de scoring de CVs usando APIs de modelos de lenguaje. Define los criterios de evaluación para roles técnicos: habilidades técnicas requeridas (lenguajes, frameworks, herramientas), experiencia relevante en años, proyectos open source o portfolio, formación académica (ponderación sugerida). Proporciona un ejemplo de esquema de datos JSON para almacenar los resultados del scoring y un fragmento de pseudocódigo o código Python que ilustre cómo llamar a una API de IA para evaluar un CV en texto plano.

2. CHATBOT DE PRE-SCREENING
Diseña un flujo conversacional de cinco a ocho preguntas para un chatbot que realice el screening inicial de forma asíncrona. Las preguntas deben adaptarse según el rol (backend vs. frontend) y capturar: disponibilidad de inicio, expectativa salarial, modalidad de trabajo preferida, motivación para el cambio y una pregunta técnica eliminatoria de nivel básico. Describe cómo integrar este chatbot con herramientas como Typeform, Slack o un widget propio.

3. EVALUACIÓN TÉCNICA AUTOMATIZADA
Explica cómo usar IA para: (a) generar pruebas técnicas personalizadas según el nivel del candidato y el stack tecnológico de la empresa, (b) evaluar automáticamente respuestas de código con criterios de corrección, legibilidad y eficiencia, (c) detectar si una prueba ha sido completada con asistencia de IA de forma inapropiada (indicadores a vigilar). Proporciona un ejemplo de rubrica de evaluación automatizada en formato tabla.

4. ORQUESTACIÓN DEL PIPELINE
Dibuja en texto (diagrama ASCII o descripción paso a paso) el flujo completo desde la recepción de la candidatura hasta la propuesta de oferta, indicando en qué pasos interviene la IA, en cuáles interviene un humano y cuáles son completamente automáticos. Incluye los tiempos estimados por etapa.

5. INTEGRACIONES TÉCNICAS
Lista las cinco integraciones prioritarias (ATS como Lever o Greenhouse, LinkedIn Recruiter API, Slack para notificaciones, calendario para agendar entrevistas, sistema de firma electrónica) y describe cómo implementar cada una con webhooks o APIs REST. Menciona herramientas de automatización low-code como Zapier o Make para las integraciones más sencillas.

6. MÉTRICAS DE RENDIMIENTO DEL SISTEMA
Define seis KPIs técnicos para monitorizar el sistema: precisión del scoring (correlación entre score automático y decisión humana final), tasa de falsos negativos, tiempo promedio por etapa, tasa de abandono del chatbot, coste por contratación y satisfacción del candidato (NPS). Describe cómo construir un dashboard sencillo con estos datos.

7. CONSIDERACIONES ÉTICAS Y DE SESGOS
Identifica cinco riesgos de sesgo algorítmico en sistemas de reclutamiento automatizado y propón medidas técnicas y de proceso para mitigarlos. Incluye cómo documentar las decisiones automatizadas para cumplir con normativas de transparencia algorítmica.

Presenta la respuesta con código de ejemplo donde sea útil, diagramas en texto y tablas comparativas. El tono debe ser técnico pero comprensible para un equipo mixto de ingeniería y RRHH.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir pipelines automatizados de selección técnica que reduzcan el tiempo de contratación sin sacrificar calidad.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia del candidato (CX) con IA en procesos de selección',
                'description'      => 'Aplica principios de diseño de experiencia de usuario al journey del candidato, utilizando IA para personalizar y mejorar cada punto de contacto del proceso de selección.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX especializado en experiencia del candidato (Candidate Experience o CX) y en la aplicación de inteligencia artificial para mejorar los puntos de contacto en procesos de selección. Quiero rediseñar el journey completo del candidato en una empresa de servicios tecnológicos que está creciendo rápidamente y tiene problemas de abandono en su funnel de reclutamiento.

contexto: Actualmente el 60% de los candidatos que inician el proceso de solicitud no lo completan. Las principales quejas recogidas en encuestas son: formularios de candidatura demasiado largos, falta de comunicación sobre el estado del proceso, entrevistas poco estructuradas donde el candidato no sabe qué esperar y ausencia de feedback tras ser descartado. La empresa quiere diferenciarse como un empleador que trata a cada candidato como si fuera un cliente.

objetivo: Diseñar un journey del candidato de clase mundial, aplicando principios de diseño centrado en el usuario y herramientas de IA para personalizar y automatizar los momentos clave.

tarea: Desarrolla un rediseño completo con los siguientes apartados:

1. MAPA DEL JOURNEY ACTUAL (AS-IS)
Dibuja en formato texto un mapa de los ocho a diez puntos de contacto del journey actual (desde que el candidato ve el anuncio hasta que recibe una decisión final), indicando para cada punto: qué hace el candidato, qué hace la empresa, el nivel de satisfacción estimado (bajo/medio/alto) y los pain points principales.

2. PRINCIPIOS DE DISEÑO PARA CX EN RECLUTAMIENTO
Define cinco principios de diseño que guiarán el rediseño: transparencia radical, comunicación proactiva, personalización sin intrusión, respeto por el tiempo del candidato y feedback siempre (también a los descartados). Para cada principio, da un ejemplo concreto de cómo se traduce en una decisión de diseño.

3. JOURNEY REDISEÑADO (TO-BE)
Rediseña el journey en diez pasos, especificando para cada uno: la experiencia que vive el candidato, el rol de la IA (si aplica), el rol del humano y el criterio de éxito medible. Presta especial atención a: formulario de candidatura simplificado (máximo cinco campos obligatorios), confirmación inmediata personalizada, actualizaciones proactivas de estado, preparación para entrevistas (envío de guía con formato, equipo entrevistador y qué esperar) y mensaje de cierre con feedback individualizado.

4. MICROCOPYS Y COMUNICACIONES CLAVE
Redacta cinco comunicaciones clave del proceso (email de confirmación de candidatura, notificación de avance a siguiente fase, invitación a entrevista, email de rechazo empático con feedback y email de oferta) con un tono humano, directo y respetuoso. Indica cómo la IA puede personalizar estas comunicaciones según el perfil y el rol al que aplica el candidato.

5. PROTOTIPO DE FORMULARIO DE CANDIDATURA
Diseña la estructura de un formulario de candidatura optimizado para conversión: campos mínimos necesarios, orden lógico, indicadores de progreso, mensajes de ayuda contextual y un estimado del tiempo que tardará en completarse. Explica qué datos adicionales se pueden enriquecer automáticamente (LinkedIn scraping, análisis de CV) para no pedírselos al candidato.

6. SISTEMA DE FEEDBACK AUTOMATIZADO
Diseña un flujo para dar feedback personalizado a candidatos descartados usando IA: cómo generar un feedback específico basado en las notas del proceso, cómo presentarlo de forma constructiva y cómo invitar al candidato a mantenerse en el talent pool para futuras oportunidades. Incluye un ejemplo de mensaje de feedback bien redactado.

7. MÉTRICAS DE EXPERIENCIA DEL CANDIDATO
Define seis métricas para medir la experiencia: tasa de completación del formulario, NPS de candidatos (en todas las etapas), tiempo de respuesta promedio, tasa de abandono por etapa, porcentaje de candidatos que recomiendan la empresa aunque no sean contratados y ratio de candidatos del talent pool que aplican en futuras aperturas.

Presenta todo con un formato visual y estructurado. Usa tablas para el mapa del journey y los KPIs. El tono debe ser empático, orientado al usuario y con ejemplos prácticos aplicables desde el primer día.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Rediseñar el journey del candidato aplicando UX y IA para reducir el abandono y mejorar la percepción de marca empleadora.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de headhunting digital con IA para captar talento pasivo',
                'description'      => 'Usa inteligencia artificial para identificar, segmentar y contactar a candidatos pasivos de alta calidad, optimizando los mensajes de outreach para maximizar la tasa de respuesta.',
                'prompt_content'   => <<<'EOT'
Actúa como un headhunter digital senior con experiencia en reclutamiento de perfiles altamente especializados y en el uso de herramientas de inteligencia artificial para la captación de talento pasivo. Trabajo en una empresa de búsqueda de ejecutivos y necesito modernizar mis métodos para competir con las grandes firmas de headhunting que ya usan IA de forma intensiva.

contexto: Me especializo en perfiles tech-finance (directores de tecnología, CDOs, heads of data, arquitectos de software) con salarios superiores a 90.000 euros anuales. Mis candidatos objetivo no están buscando activamente empleo, tienen perfiles en LinkedIn pero raramente responden a mensajes genéricos y son muy selectivos con las oportunidades que consideran. Necesito un sistema de outreach personalizado y eficiente que me permita gestionar 50 búsquedas activas simultáneamente.

tarea: Diseña un sistema completo de headhunting digital potenciado con IA con los siguientes componentes:

1. IDENTIFICACIÓN Y SEGMENTACIÓN DE CANDIDATOS
Explica cómo usar booleanos de búsqueda avanzada en LinkedIn Recruiter para construir listas de candidatos pasivos. Proporciona tres ejemplos de búsquedas booleanas para: director de ingeniería en fintech, head of data analytics en banca digital y CTO en startup de 50 a 200 empleados. Describe cómo enriquecer estos perfiles con datos de otras fuentes (GitHub, conferencias del sector, publicaciones) para obtener señales de apertura al cambio.

2. SEÑALES DE DISPONIBILIDAD
Define diez señales que indican que un candidato pasivo podría estar receptivo a una oportunidad (cambio reciente en el cargo de LinkedIn, publicaciones sobre búsqueda de nuevos retos, comentarios en posts sobre cultura empresarial, participación en eventos de networking, etc.). Explica cómo monitorizar estas señales de forma semi-automatizada.

3. SISTEMA DE SCORING DE CANDIDATOS
Diseña un modelo de scoring de 0 a 100 puntos para priorizar candidatos según: ajuste al perfil técnico (40 puntos), señales de disponibilidad (30 puntos), conexiones en común con el cliente (15 puntos) y potencial de interés en la empresa cliente (15 puntos). Explica cómo la IA puede ayudar a calcular este score a partir de información pública.

4. ESTRATEGIA DE OUTREACH PERSONALIZADO
Redacta tres plantillas de mensaje de primer contacto (para LinkedIn InMail, email y WhatsApp si aplica) adaptadas a estos perfiles. Cada plantilla debe tener entre 80 y 120 palabras, mencionar algo específico del perfil del candidato (logro, proyecto o publicación reciente), presentar la oportunidad como un reto de alto impacto sin revelar el cliente y terminar con una pregunta abierta de baja fricción. Incluye consejos sobre el mejor momento del día y día de la semana para enviar cada mensaje.

5. FLUJO DE NURTURING PARA CANDIDATOS NO RESPONSIVOS
Diseña una secuencia de cinco touchpoints para candidatos que no responden al primer contacto: cuándo enviar cada uno, por qué canal, qué aportar de valor en cada mensaje (artículo relevante, dato del mercado, insight sobre el sector) y cuándo dejar de intentarlo. Explica cómo usar IA para personalizar cada touchpoint con información actualizada del candidato.

6. USO DE IA PARA PERSONALIZACIÓN A ESCALA
Describe cómo usar Claude o modelos similares para: (a) generar variantes personalizadas de mensajes de outreach a partir de datos del perfil del candidato, (b) redactar resúmenes ejecutivos de cada posición adaptados al perfil del receptor y (c) preparar briefings de candidatos para presentar al cliente con formato profesional. Proporciona un ejemplo de instrucción que daría a la IA para generar un mensaje personalizado.

7. GESTIÓN DE PIPELINE Y CRM
Recomienda una estructura de CRM para gestionar 50 búsquedas simultáneas: etapas del pipeline, campos de datos esenciales por candidato, recordatorios automáticos y reportes semanales para clientes. Menciona herramientas específicas (Airtable, HubSpot, Notion) y cómo integrarlas con automatizaciones.

8. MÉTRICAS DE RENDIMIENTO
Define ocho KPIs de headhunting: tasa de respuesta a primer contacto (benchmark: 15-25% para mensajes personalizados), tasa de conversión a entrevista, tiempo promedio de búsqueda, ratio de candidatos presentados vs. contratados y satisfacción del cliente. Compara el rendimiento esperado del sistema con IA frente al método tradicional.

Presenta todo con ejemplos concretos, plantillas de mensaje listas para usar y una guía de implementación en 30 días. El tono debe ser práctico y orientado a resultados comerciales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modernizar el proceso de headhunting de perfiles ejecutivos y técnicos usando IA para personalización a escala.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product roadmap para plataformas HR Tech con integración de IA',
                'description'      => 'Construye un roadmap de producto para una plataforma de gestión de talento que integra capacidades de inteligencia artificial en sus módulos core.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en plataformas HR Tech B2B y en la integración de capacidades de inteligencia artificial en productos de software empresarial. Estoy liderando el producto de una plataforma de gestión de talento que sirve a empresas de entre 100 y 2.000 empleados y necesito construir el roadmap de los próximos 12 meses con foco en IA.

contexto: La plataforma actual tiene cuatro módulos: ATS (sistema de seguimiento de candidatos), onboarding digital, gestión del desempeño y encuestas de clima laboral. Compite con soluciones como Personio, Factorial y BambooHR. Los clientes piden repetidamente funcionalidades de IA para automatizar tareas administrativas, predecir la rotación de empleados y personalizar el desarrollo profesional. El equipo de ingeniería tiene capacidad para tres entregables mayores por trimestre.

tarea: Desarrolla un framework completo de product management para este roadmap de IA con los siguientes apartados:

1. DISCOVERY DE OPORTUNIDADES DE IA
Describe un proceso de discovery de seis semanas para validar qué funcionalidades de IA tienen mayor impacto y viabilidad. Incluye: entrevistas con clientes (cinco preguntas clave), análisis de tickets de soporte para detectar tareas repetitivas, benchmarking de competidores en IA y un taller interno con el equipo de ingeniería para evaluar factibilidad técnica. Define un scoring de priorización con cuatro criterios: impacto en el usuario, diferenciación competitiva, viabilidad técnica y potencial de monetización.

2. FUNCIONALIDADES DE IA POR MÓDULO
Para cada uno de los cuatro módulos, propón tres funcionalidades de IA ordenadas por prioridad:
ATS: screening automático de CVs, generación de descripciones de puesto y predicción de probabilidad de aceptación de oferta.
Onboarding: plan de onboarding personalizado, chatbot de preguntas frecuentes para nuevos empleados y análisis de sentimiento de las primeras semanas.
Desempeño: sugerencias de objetivos basadas en el rol y contexto del mercado, detección temprana de bajo rendimiento y resúmenes automáticos de evaluaciones.
Clima: análisis de sentimiento de respuestas abiertas, predicción de rotación y recomendaciones de acciones para managers.
Para cada funcionalidad, indica: problema que resuelve, descripción técnica en alto nivel, esfuerzo estimado (S/M/L) y métrica de éxito.

3. ROADMAP TRIMESTRAL (12 MESES)
Diseña el roadmap en cuatro trimestres con tres entregables mayores cada uno, equilibrando: quick wins de IA en los primeros dos trimestres, funcionalidades diferenciadoras en los trimestres tres y cuatro y mejoras de infraestructura de datos necesarias para habilitar la IA. Presenta en formato tabla con columna de trimestre, funcionalidad, módulo, impacto esperado y dependencias.

4. ESTRATEGIA DE DATOS PARA IA
Describe la arquitectura de datos necesaria para entrenar y mejorar los modelos de IA: qué datos recoger desde el inicio, cómo garantizar la privacidad y el cumplimiento del RGPD, cómo manejar el consentimiento de empleados para usar sus datos y qué métricas de calidad de datos monitorizar. Menciona si conviene usar modelos propios, modelos open source fine-tuned o APIs de proveedores como Anthropic.

5. MODELO DE NEGOCIO DE LAS FUNCIONALIDADES IA
Propón tres opciones de monetización para las funcionalidades de IA: incluidas en el plan base, en un tier premium y en módulos de pago por uso. Analiza el impacto en el ARPU (ingreso promedio por usuario) y en la tasa de retención. Define qué funcionalidades deben ser "hygiene" (incluidas para no perder clientes) y cuáles pueden ser "delight" (premium).

6. GESTIÓN DE STAKEHOLDERS
Describe cómo comunicar el roadmap de IA a tres audiencias distintas: al equipo de ingeniería (profundidad técnica y prioridades), a los clientes enterprise (valor de negocio y cronograma) y al equipo de ventas (argumentario competitivo). Proporciona una plantilla de presentación de roadmap de una página para cada audiencia.

7. MÉTRICAS DE PRODUCTO
Define ocho métricas de producto para medir el éxito del roadmap de IA: adopción de funcionalidades (porcentaje de usuarios que las usan), impacto en tiempo ahorrado por cliente, NPS de funcionalidades de IA, impacto en retención de clientes, ingresos atribuibles a funcionalidades premium de IA y precisión de los modelos predictivos. Propón una cadencia de revisión mensual y trimestral.

Presenta el roadmap con tablas, priorización clara y una narrativa que conecte cada decisión con el problema del usuario y el objetivo de negocio. El tono debe ser estratégico pero con suficiente detalle táctico para que el equipo pueda ejecutar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Definir el roadmap de producto de una plataforma HR Tech que incorpora IA en sus módulos core con criterios claros de priorización.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Evaluación de competencias con IA: guía para responsables de RRHH',
                'description'      => 'Implementa un sistema de evaluación de competencias conductuales y técnicas asistido por IA que objetivice las decisiones de selección y promoción interna.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en psicología organizacional y evaluación de talento con experiencia en la implementación de sistemas de assessment asistidos por inteligencia artificial. Soy responsable de RRHH en una empresa de 300 empleados y quiero modernizar nuestro sistema de evaluación de competencias tanto para selección externa como para decisiones de promoción interna.

contexto: Actualmente las evaluaciones de competencias son inconsistentes: cada manager usa su propio criterio para evaluar candidatos y empleados, lo que genera sesgos visibles (favorecemos a perfiles similares a los evaluadores) y decisiones difíciles de justificar objetivamente. Queremos implementar un sistema estructurado que use IA para estandarizar el proceso sin eliminar el juicio humano de las decisiones finales.

objetivo: Diseñar un sistema de evaluación de competencias moderno, objetivable y asistido por IA para procesos de selección y promoción.

tarea: Desarrolla el sistema completo con los siguientes componentes:

1. MODELO DE COMPETENCIAS
Define un modelo de competencias universal con ocho competencias agrupadas en tres categorías:
Competencias de pensamiento: pensamiento analítico, orientación a resultados y adaptabilidad.
Competencias de relación: comunicación efectiva, trabajo en equipo y liderazgo situacional.
Competencias de negocio: orientación al cliente y gestión de la complejidad.
Para cada competencia, proporciona: definición de 50 palabras, tres niveles de desarrollo (básico, avanzado, experto) con descriptores conductuales observables y tres indicadores negativos (señales de que la competencia no está presente).

2. ENTREVISTA ESTRUCTURADA POR COMPETENCIAS
Diseña tres preguntas de entrevista conductual (técnica STAR: Situación, Tarea, Acción, Resultado) para cada una de las ocho competencias, adaptadas para dos niveles: posiciones de contribuidor individual y posiciones de gestión. Total: 48 preguntas. Incluye las señales positivas y negativas a detectar en cada respuesta y un criterio de puntuación de 1 a 5 con anclas conductuales.

3. USO DE IA EN LA EVALUACIÓN
Explica cómo usar IA para: (a) analizar transcripciones de entrevistas y detectar menciones de competencias, asignando un score preliminar que el evaluador puede revisar, (b) comparar respuestas de un candidato con un banco de respuestas de referencia de alto y bajo rendimiento, (c) generar un informe de evaluación borrador en cinco minutos a partir de las notas del entrevistador y (d) detectar inconsistencias o sesgos en las evaluaciones comparando los scores de distintos evaluadores. Describe el flujo de trabajo paso a paso y las salvaguardas para que la IA apoye pero no sustituya al evaluador humano.

4. CALIBRACIÓN DE EVALUADORES
Diseña un programa de calibración de evaluadores en tres sesiones: (a) sesión de alineamiento conceptual (definición compartida de competencias), (b) práctica con casos reales anonimizados y (c) análisis de discrepancias con datos históricos. Incluye un ejercicio práctico de calibración donde cinco evaluadores puntúan la misma transcripción de entrevista y luego comparan resultados. Describe cómo usar IA para detectar evaluadores con patrones de sesgo sistemático.

5. EVALUACIÓN PARA PROMOCIÓN INTERNA
Adapta el sistema para decisiones de promoción: qué información adicional considerar (historial de desempeño, feedback 360, proyectos liderados), cómo estructurar los comités de calibración de talento y cómo documentar las decisiones para garantizar transparencia y cumplimiento legal. Proporciona una plantilla de informe de promoción que pueda generarse semi-automáticamente con IA.

6. GESTIÓN DE SESGOS INCONSCIENTES
Identifica los cinco sesgos más comunes en evaluaciones de competencias (afinidad, efecto halo, sesgo de confirmación, contraste y recencia) y propón intervenciones específicas para cada uno, tanto en el diseño del proceso como en el análisis de datos con IA. Incluye un protocolo de revisión de sesgos que el equipo de RRHH puede ejecutar trimestralmente.

7. IMPLEMENTACIÓN EN 90 DÍAS
Define un plan de implementación en tres fases: fase 1 de diseño y piloto con dos equipos (semanas uno a cuatro), fase 2 de formación de evaluadores y ajuste del sistema (semanas cinco a ocho) y fase 3 de despliegue completo y medición (semanas nueve a doce). Incluye los entregables de cada fase, los responsables y los criterios de éxito.

8. MÉTRICAS DEL SISTEMA
Define seis métricas para medir la efectividad del sistema: fiabilidad entre evaluadores (correlación de scores), predictividad de los scores de evaluación con el desempeño a seis meses, reducción de sesgos medida por disparidad de scores entre grupos demográficos, satisfacción de candidatos con el proceso, tiempo total de evaluación y coste por evaluación. Propón un dashboard mensual para el comité de RRHH.

Presenta todo con ejemplos concretos, plantillas descargables en formato texto y una guía de implementación paso a paso. El tono debe ser riguroso técnicamente pero accesible para managers sin formación en psicología organizacional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar un sistema de evaluación de competencias objetivado con IA para selección y promoción interna en empresas medianas.',
                'vote_score'       => 51,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del coste total de la fuerza laboral con IA',
                'description'      => 'Modela y analiza el coste total de la plantilla (Total Workforce Cost) usando inteligencia artificial para identificar ineficiencias, proyectar escenarios y optimizar la inversión en talento.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero con experiencia en people analytics y en el análisis del coste total de la fuerza laboral. Necesito construir un modelo completo de Total Workforce Cost (TWC) para una empresa de servicios profesionales con 400 empleados, donde el coste de personal representa el 65% de los gastos totales. El objetivo es entender la estructura real de costes y encontrar oportunidades de optimización sin reducir la calidad del talento.

contexto: La empresa tiene una plantilla mixta: 250 empleados en nómina, 80 contratistas externos y 70 freelancers. Los departamentos más grandes son consultoría (150 personas), tecnología (100 personas) y operaciones (70 personas). La rotación voluntaria en los últimos 12 meses fue del 22%, significativamente superior al benchmark del sector (14%). El CFO quiere entender cuánto cuesta realmente esta rotación y qué inversiones en retención tendrían mejor ROI.

tarea: Desarrolla un análisis completo de Total Workforce Cost con los siguientes módulos:

1. ESTRUCTURA DEL MODELO TWC
Define los componentes del modelo de coste total de la fuerza laboral, agrupados en cuatro categorías: (a) costes directos de compensación (salario bruto, bonus, equity, beneficios en especie), (b) costes de seguridad social y fiscalidad (cotizaciones empresariales, seguros obligatorios), (c) costes de adquisición de talento (reclutamiento, onboarding, formación inicial) y (d) costes de mantenimiento del talento (formación continua, herramientas, espacio de trabajo). Para cada categoría, proporciona las partidas específicas a incluir y la fuente de datos donde obtenerlas (nómina, RRHH, contabilidad, facilities).

2. CÁLCULO DEL COSTE DE ROTACIÓN
Modela el coste completo de perder un empleado y sustituirlo, incluyendo: coste de la vacante (productividad perdida durante el tiempo hasta cubrir el puesto), coste de reclutamiento (tiempo de RRHH, fees de agencias, costes de evaluación), coste de onboarding (tiempo del manager, formación, materiales) y curva de productividad del nuevo empleado (tiempo hasta alcanzar el 100% de productividad). Proporciona fórmulas de cálculo y un ejemplo numérico para un perfil de consultor sénior con salario de 70.000 euros anuales. Calcula el impacto anual de una rotación del 22% frente a una del 14% en términos de euros.

3. ANÁLISIS DE COSTE POR SEGMENTO
Describe cómo segmentar el análisis por departamento, nivel jerárquico, modalidad de contratación (empleado vs. contratista vs. freelancer) y antigüedad. Para la comparativa empleado vs. contratista, proporciona un modelo que calcule el coste real por hora de trabajo productiva en cada modalidad, incluyendo los costes ocultos (coordinación, retrasos, calidad). Indica cuándo es más rentable cada modalidad.

4. PROYECCIONES Y ESCENARIOS
Diseña un modelo de proyección de costes de personal a tres años bajo tres escenarios: crecimiento orgánico (añadir 50 empleados), automatización moderada (sustituir el 20% de tareas administrativas con IA reduciendo la plantilla administrativa en 15 personas) y combinación de ambos. Para cada escenario, muestra el impacto en: coste total de personal, coste por unidad de producción, ratio de ingresos por empleado y margen operativo.

5. ROI DE INVERSIONES EN RETENCIÓN
Modela el ROI de cinco posibles inversiones en retención: aumento salarial del 8% para el tercio superior de performers, programa de formación y desarrollo con presupuesto de 2.000 euros por empleado al año, implantación de trabajo flexible, programa de equity para perfiles clave y mejora del plan de beneficios (seguro médico ampliado, tickets restaurante). Para cada inversión, calcula: coste total anual, reducción esperada de rotación (en puntos porcentuales), ahorro en costes de rotación y ROI a 12 y 24 meses.

6. PEOPLE ANALYTICS E IA
Describe cómo usar IA para: (a) predecir qué empleados tienen mayor riesgo de abandono en los próximos seis meses usando datos de RRHH (absentismo, progresión salarial, tiempo sin ascenso, resultados de encuestas de clima), (b) segmentar automáticamente la plantilla por nivel de impacto y riesgo de fuga para priorizar inversiones en retención y (c) generar alertas tempranas para managers cuando un empleado muestra señales de desenganche. Proporciona las variables predictoras más relevantes y un modelo de scoring simplificado.

7. DASHBOARD EJECUTIVO
Diseña la estructura de un dashboard mensual de costes de personal para el CFO y el CHRO: qué métricas incluir en la vista ejecutiva (ocho KPIs máximo), qué métricas en la vista operativa de RRHH y qué drill-downs permitir (por departamento, nivel, modalidad). Indica las fuentes de datos para cada métrica y la frecuencia de actualización.

Presenta el análisis con fórmulas de cálculo, ejemplos numéricos basados en los datos del contexto y recomendaciones priorizadas. El tono debe ser riguroso financieramente pero comprensible para directivos sin formación técnica en people analytics.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir un modelo de Total Workforce Cost con IA para identificar ineficiencias en la inversión en talento y calcular el ROI de iniciativas de retención.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance laboral en HR Tech: navegando la regulación de IA en RRHH',
                'description'      => 'Analiza el marco regulatorio aplicable al uso de inteligencia artificial en procesos de recursos humanos y diseña un programa de compliance para empresas que usan HR Tech con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado laboralista especializado en derecho digital y en la regulación de sistemas de inteligencia artificial en el ámbito laboral. Represento a una empresa de HR Tech que desarrolla software de reclutamiento y evaluación de desempeño con IA, vendido a clientes en España y la Unión Europea. Necesito entender el marco regulatorio completo y diseñar un programa de compliance robusto.

contexto: El producto usa IA para: screening automatizado de CVs con scoring, análisis de competencias a partir de respuestas de entrevistas, predicción de rendimiento futuro de candidatos y predicción de riesgo de rotación de empleados. Los clientes son empresas de entre 100 y 5.000 empleados. El Reglamento de IA de la UE (AI Act) ya está en vigor y establece que los sistemas de IA para reclutamiento y evaluación de personas son de alto riesgo.

tarea: Desarrolla un análisis completo de compliance con los siguientes apartados:

1. MARCO REGULATORIO APLICABLE
Analiza las cinco normativas principales que afectan al uso de IA en RRHH en la UE: (a) Reglamento de IA de la UE (AI Act) y las obligaciones específicas para sistemas de alto riesgo en reclutamiento, (b) Reglamento General de Protección de Datos (RGPD) y sus implicaciones en el tratamiento de datos de candidatos y empleados, (c) directiva sobre transparencia salarial y su relación con los sistemas de IA de compensación, (d) normativa laboral española (Estatuto de los Trabajadores, artículo 20 bis sobre control digital) y (e) directrices de la Agencia Española de Protección de Datos sobre IA en el ámbito laboral. Para cada normativa, indica las obligaciones concretas del proveedor de HR Tech y del cliente-empleador.

2. CLASIFICACIÓN DE RIESGO SEGÚN EL AI ACT
Analiza si los cuatro usos de IA descritos en el contexto son de alto riesgo según el Anexo III del AI Act. Para los que sí lo sean, detalla las obligaciones de conformidad: evaluación de conformidad, sistema de gestión de riesgos, gobernanza de datos de entrenamiento, transparencia y registro de actividades, supervisión humana y declaración de conformidad. Indica el calendario de entrada en vigor de estas obligaciones para empresas de diferente tamaño.

3. RGPD EN EL CONTEXTO HR TECH
Desarrolla las implicaciones específicas del RGPD para sistemas de IA en RRHH: (a) base jurídica del tratamiento (consentimiento, interés legítimo, ejecución del contrato): cuál aplica a cada caso de uso y sus riesgos, (b) derechos del candidato y empleado (acceso, rectificación, oposición a decisiones automatizadas según artículo 22) y cómo implementarlos técnicamente, (c) evaluación de impacto en la protección de datos (EIPD) para sistemas de IA de alto riesgo: cuándo es obligatoria y qué debe incluir, (d) transferencias internacionales de datos si los modelos de IA se procesan fuera de la UE y (e) obligaciones del encargado del tratamiento para el proveedor de HR Tech y cláusulas contractuales tipo.

4. GESTIÓN DE SESGOS ALGORÍTMICOS COMO RIESGO LEGAL
Analiza el riesgo legal de discriminación indirecta por sesgos en sistemas de IA de selección. Explica cómo la jurisprudencia del TJUE sobre discriminación indirecta aplica a sistemas algorítmicos, qué obligaciones impone el AI Act sobre la gestión de sesgos en datos de entrenamiento, cómo documentar las medidas de mitigación de sesgos para demostrar diligencia debida y qué auditorías de sesgo algorítmico son recomendables (frecuencia, metodología, documentación).

5. PROGRAMA DE COMPLIANCE HR TECH
Diseña un programa de compliance en cinco pilares: (a) gobernanza y responsabilidad (designación de responsable de IA, comité de ética, políticas internas), (b) evaluación continua de riesgos (mapa de riesgos regulatorios, proceso de actualización ante cambios normativos), (c) documentación técnica y registros (qué documentar, durante cuánto tiempo y en qué formato), (d) transparencia con candidatos y empleados (avisos de uso de IA, mecanismos de impugnación de decisiones) y (e) formación del equipo (qué necesitan saber los equipos de producto, ingeniería, ventas y RRHH del cliente). Para cada pilar, proporciona las acciones concretas prioritarias en los primeros 90 días.

6. CLÁUSULAS CONTRACTUALES ESENCIALES
Redacta el esquema de las cinco cláusulas contractuales que deben incluirse en los contratos con clientes para distribuir correctamente la responsabilidad: cláusula de uso responsable de IA, cláusula sobre supervisión humana obligatoria, cláusula de encargado del tratamiento, cláusula de gestión de derechos del interesado y cláusula de notificación de incidentes. Para cada cláusula, indica el riesgo que mitiga y los puntos negociables vs. no negociables.

7. PREPARACIÓN PARA AUDITORÍAS REGULATORIAS
Describe cómo prepararse para una auditoría de la Agencia Española de Protección de Datos o de la autoridad de control del AI Act: qué documentación tener lista, cómo organizar un data room regulatorio, qué responder a los requerimientos más frecuentes y cuáles son las sanciones máximas por incumplimiento (hasta 35 millones de euros o el 7% de la facturación global según el AI Act).

Presenta el análisis con referencias normativas específicas (artículos, considerandos), ejemplos de aplicación práctica y una lista de verificación de compliance lista para usar. El tono debe ser riguroso jurídicamente pero comprensible para equipos de producto y negocio no especializados en derecho.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar un programa de compliance para empresas que desarrollan o usan IA en RRHH bajo el AI Act europeo y el RGPD.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Chatbot de atención a empleados con IA para equipos de RRHH',
                'description'      => 'Diseña e implementa un chatbot conversacional con IA que responda las consultas más frecuentes de empleados sobre RRHH, liberando al equipo de tareas repetitivas de bajo valor.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en diseño conversacional y en implementación de chatbots de IA para el ámbito de recursos humanos. Quiero implementar un chatbot interno de atención a empleados para una empresa de 500 personas, donde el equipo de RRHH de cuatro personas dedica el 40% de su tiempo a responder preguntas repetitivas sobre vacaciones, nóminas, beneficios, políticas internas y procesos administrativos.

contexto: Los empleados usan principalmente Slack para comunicarse. Las preguntas más frecuentes son: cuántos días de vacaciones les quedan, cómo solicitar una baja o permiso, cuándo se paga la nómina, cómo acceder a los beneficios (seguro médico, tickets restaurante), cuáles son las políticas de trabajo remoto y cómo contactar con el responsable de RRHH para temas sensibles. El equipo de RRHH quiere mantener el contacto humano para temas delicados y usar el chatbot solo para consultas informativas y administrativas.

tarea: Diseña un sistema completo de chatbot de RRHH con los siguientes componentes:

1. ALCANCE Y LÍMITES DEL CHATBOT
Define con precisión qué temas debe resolver el chatbot de forma autónoma, cuáles debe escalar inmediatamente a un humano y cuáles requieren confirmación antes de actuar. Proporciona una matriz de decisión en formato tabla con tres columnas: tipo de consulta, respuesta del chatbot y criterio de escalada. Incluye al menos 20 tipos de consulta clasificados. Explica cómo comunicar al empleado de forma clara y sin frustración cuándo y por qué el chatbot no puede ayudarle.

2. ARQUITECTURA CONVERSACIONAL
Diseña el flujo de conversación principal del chatbot: bienvenida y captura de intención, identificación del empleado (vinculación con el sistema de RRHH), resolución de la consulta o escalada y cierre con confirmación. Para las cinco consultas más frecuentes, dibuja un árbol de conversación detallado que muestre las preguntas del bot, las posibles respuestas del empleado y las bifurcaciones lógicas. Incluye manejo de respuestas ambiguas ("no entiendo tu pregunta, ¿te refieres a X o a Y?") y de frustración del usuario.

3. BASE DE CONOCIMIENTO DE RRHH
Describe cómo estructurar la base de conocimiento que alimenta al chatbot: formato de documentos (FAQ estructuradas, políticas en texto plano, tablas de datos como calendario de nóminas y cuadro de beneficios), proceso de actualización cuando cambian las políticas y control de versiones. Propón una plantilla de FAQ de RRHH con los 30 pares de pregunta y respuesta más frecuentes, redactados en tono cercano y claro, listos para cargar en el sistema.

4. INTEGRACIÓN CON SISTEMAS HR
Explica cómo integrar el chatbot con los sistemas existentes para dar respuestas personalizadas: conexión con el ATS o HRIS para consultar datos de vacaciones y permisos, acceso al calendario de nóminas, verificación de datos del empleado (departamento, manager, antigüedad) y registro de todas las interacciones para análisis posterior. Describe las APIs necesarias, los datos que se consultarán en tiempo real vs. los que se actualizarán periódicamente y las medidas de seguridad para proteger datos sensibles.

5. GESTIÓN DE TEMAS SENSIBLES
Diseña el protocolo de manejo de temas sensibles: acoso laboral, problemas de salud mental, conflictos con el manager, denuncia de irregularidades. Para estos casos, el chatbot debe reconocer la sensibilidad del tema, validar emocionalmente al empleado, garantizar confidencialidad y conectar con un humano de forma discreta. Proporciona tres ejemplos de diálogos para situaciones sensibles, mostrando el tono empático que debe usar el bot y el momento exacto de la escalada.

6. IMPLEMENTACIÓN EN SLACK
Describe los pasos técnicos para implementar el chatbot en Slack: configuración de la Slack App, permisos necesarios, cómo manejar menciones directas vs. canal dedicado de RRHH, notificaciones para el equipo de RRHH cuando hay escaladas y gestión de horarios (el bot responde 24/7 pero las escaladas se resuelven en horario laboral). Incluye las consideraciones de privacidad para conversaciones en Slack sobre temas de RRHH.

7. MÉTRICAS Y MEJORA CONTINUA
Define ocho métricas para medir el rendimiento del chatbot: tasa de resolución autónoma (objetivo: 70% de consultas resueltas sin escalar), tiempo de respuesta (objetivo: menos de 30 segundos), CSAT del chatbot (encuesta breve tras cada interacción), tasa de abandono de conversación, consultas más frecuentes (para detectar lagunas en la base de conocimiento), tasa de escaladas (seguimiento de cuántas y por qué razón), tiempo ahorrado al equipo de RRHH y adopción por departamento. Diseña un proceso de revisión mensual para mejorar las respuestas basándose en datos.

8. PLAN DE LANZAMIENTO
Diseña un plan de lanzamiento en tres fases: fase piloto con un departamento de 50 personas durante cuatro semanas, fase de expansión con ajustes basados en feedback y fase de despliegue completo. Incluye la comunicación interna para presentar el chatbot (cómo explicarlo sin que genere inseguridad sobre el rol del equipo de RRHH), la formación del equipo de RRHH para gestionar las escaladas y el plan de mejora continua en los primeros seis meses.

Presenta el diseño con ejemplos concretos de diálogos, plantillas de FAQ listas para usar y una guía de implementación paso a paso. El tono debe ser práctico y orientado a la resolución de problemas reales del equipo de RRHH.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar un chatbot de IA en Slack para liberar al equipo de RRHH de consultas repetitivas sin perder el toque humano en temas sensibles.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Kit de herramientas IA para consultores HR Tech independientes',
                'description'      => 'Domina el stack de herramientas de inteligencia artificial que te permitirá ofrecer servicios de consultoría de recursos humanos digitales competitivos como freelancer.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor HR Tech freelancer senior con experiencia en la implementación de soluciones de inteligencia artificial para departamentos de recursos humanos de empresas medianas. Quiero desarrollar un kit de herramientas de IA que me permita ofrecer servicios de mayor valor añadido como consultor independiente, diferenciándome de las grandes consultoras que cobran precios prohibitivos para mis clientes objetivo (empresas de 50 a 500 empleados).

contexto: Tengo cinco años de experiencia en RRHH corporativo y llevo dos años como freelancer. Mis servicios actuales son: diseño de procesos de selección, implementación de sistemas de evaluación del desempeño y formación de managers en habilidades de liderazgo. Quiero añadir capacidades de HR Tech e IA a mi propuesta de valor para poder cobrar entre 800 y 1.500 euros por proyecto donde antes cobraba 400 euros, y para abrir nuevas líneas de servicio como people analytics y automatización de procesos HR.

tarea: Diseña un kit completo de herramientas y metodologías de IA para consultores HR independientes con los siguientes módulos:

1. STACK DE HERRAMIENTAS DE IA POR SERVICIO
Para cada una de las seis categorías de servicio HR (reclutamiento, onboarding, desempeño, compensación, clima y people analytics), proporciona: la herramienta de IA principal recomendada (con nombre específico, precio aproximado y qué hace), una herramienta alternativa de menor coste y cómo combinar ambas con el trabajo del consultor para crear un entregable de mayor valor. Incluye también herramientas transversales: Claude para redacción y análisis, herramientas de visualización de datos (Tableau Public, Google Looker Studio), plataformas de encuestas con IA y herramientas de automatización como Zapier o Make.

2. SERVICIO DE PEOPLE ANALYTICS PARA PYMES
Diseña un servicio de people analytics de entrada para empresas sin departamento de datos: qué datos recoger (absentismo, rotación, resultados de evaluación, encuestas de clima, datos de nómina), cómo limpiarlos y estructurarlos en Google Sheets o Airtable, qué análisis básicos hacer con IA (tendencias, correlaciones, predicciones simples) y cómo presentarlos en un dashboard ejecutivo accesible. Define el entregable, el tiempo de ejecución estimado (máximo dos semanas) y el precio de mercado recomendado (entre 1.500 y 3.000 euros por proyecto).

3. AUTOMATIZACIÓN DE ENTREGABLES CON IA
Describe cómo usar IA para producir los entregables más comunes de la consultoría HR en la mitad del tiempo: descripción de puestos de trabajo optimizadas para cada canal (LinkedIn, web, bolsas de empleo), informes de evaluación del desempeño personalizados, planes de desarrollo individual, comunicaciones internas de RRHH, políticas de empresa actualizadas y presentaciones ejecutivas. Para cada entregable, proporciona una instrucción de IA tipo que el consultor puede adaptar a cada cliente, con el tiempo estimado de producción antes y después de usar IA.

4. PROPUESTA DE VALOR Y POSICIONAMIENTO
Ayúdame a redefinir mi propuesta de valor como consultor HR Tech con IA: (a) tres arquetipos de cliente ideal que más se benefician de la consultoría HR con IA, (b) los cinco problemas de negocio que puedo resolver ahora con IA que antes no podía resolver de forma rentable, (c) cómo comunicar el uso de IA a clientes que pueden ser escépticos o preocupados por la sustitución de personas y (d) cómo diferenciarme de: consultoras grandes (más asequible, más ágil), otros freelancers sin IA (mayor valor añadido) y plataformas de software HR (combinación de tecnología y experiencia humana). Proporciona tres mensajes de posicionamiento listos para usar en LinkedIn.

5. MODELO DE NEGOCIO Y PRECIOS
Diseña tres modelos de precio para servicios HR con IA: modelo de proyecto (precio fijo por entregable), modelo de retención (tarifa mensual por acceso al consultor y herramientas de IA) y modelo de éxito (fee variable ligado a métricas conseguidas como reducción de rotación o tiempo de contratación). Para cada modelo, proporciona: servicios incluidos, precio recomendado, tipo de cliente ideal y cómo protegerme del scope creep. Incluye una plantilla de propuesta comercial de una página que pueda personalizar con IA en menos de 30 minutos.

6. DESARROLLO CONTINUO DE COMPETENCIAS
Define un plan de aprendizaje de 12 meses para mantenerse al día en HR Tech con IA: qué comunidades seguir (podcasts, newsletters, Slack communities), qué certificaciones tienen más valor de mercado (SHRM, CIPD, certificaciones de herramientas específicas), cómo practicar con nuevas herramientas antes de ofrecerlas a clientes y cómo construir casos de éxito propios que sirvan como portfolio. Incluye una rutina semanal de dos horas dedicada a la actualización profesional.

7. GESTIÓN DEL NEGOCIO FREELANCE CON IA
Explica cómo usar IA para gestionar el propio negocio de consultoría: generación de propuestas comerciales personalizadas, redacción de contratos (plantillas base), gestión de clientes potenciales con un CRM simple, seguimiento de proyectos y tiempo, facturación y contabilidad básica. Recomienda un stack de herramientas específico para freelancers HR Tech con un presupuesto mensual de herramientas de entre 100 y 200 euros.

8. CASOS DE USO LISTOS PARA PRESENTAR A CLIENTES
Proporciona tres mini-casos de uso (dos páginas cada uno en formato texto) que puedo usar como material de ventas: reducción del tiempo de contratación del 40% en una empresa de retail con 200 empleados, mejora del engagement del 25% en una empresa de servicios profesionales usando IA para personalizar planes de desarrollo y reducción de la rotación del 30% en una startup de 80 personas usando predicción de riesgo de abandono. Para cada caso, incluye: problema inicial, solución implementada, herramientas de IA usadas, resultados medibles y cita ficticia pero verosímil del cliente.

Presenta todo de forma práctica, con herramientas específicas por nombre, precios reales y plantillas listas para usar. El tono debe ser emprendedor y orientado al negocio del consultor freelance.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un kit de herramientas de IA para consultores HR independientes que quieren escalar su negocio y aumentar el valor de sus servicios.',
                'vote_score'       => 53,
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
