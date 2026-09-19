<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills612Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de cursos online y MOOCs con IA',
                'description'      => 'Diseña estrategias de marketing de contenidos y paid media para lanzar y escalar cursos online y plataformas de formación digital con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing especializado en el sector edtech y la formación online, con experiencia en el lanzamiento de cursos digitales, plataformas MOOC y programas de certificación online tanto para el mercado B2C (consumidores individuales) como B2B (empresas que buscan formación para sus equipos).

Objetivo: Crear una estrategia de marketing completa para el lanzamiento o el escalado de un curso online o un catálogo de formación digital.

Contexto del negocio:
- Tipo de producto: [curso individual / bundle de cursos / suscripción a plataforma / bootcamp / certificación]
- Temática del curso: [área de conocimiento]
- Público objetivo: [profesionales en activo / estudiantes / empresas / equipos de RR.HH.]
- Precio del producto: [precio unitario o suscripción mensual/anual]
- Canal de distribución: [plataforma propia / Udemy / Teachable / Hotmart / LinkedIn Learning]
- Presupuesto de marketing para el lanzamiento: [importe]
- Audiencia actual (seguidores, lista de email): [tamaño]

instrucción 1 — Análisis del mercado y posicionamiento:
Describe el mercado de la formación online en el nicho elegido: tamaño, principales plataformas y cursos competidores, precio medio del mercado y brechas no cubiertas. A continuación, define el posicionamiento diferencial del curso: ¿por qué este y no otro? Redacta la propuesta de valor en 3 versiones: para el comprador individual, para el responsable de formación de empresa y para el estudiante universitario.

instrucción 2 — Estrategia de lanzamiento en 3 fases:
Diseña una estrategia de lanzamiento de 8 semanas con 3 fases:
a) Pre-lanzamiento (semanas 1-3): construcción de audiencia, lista de espera, contenido de valor gratuito, webinar de presentación anticipada
b) Lanzamiento (semanas 4-5): oferta de precio especial por tiempo limitado, secuencia de emails de lanzamiento (7 emails), campañas de Meta Ads y Google Ads
c) Post-lanzamiento (semanas 6-8): testimonios y casos de éxito, programa de referidos, upsell a nivel superior o bundle

Para cada fase: acciones concretas, textos de ejemplo y métricas de seguimiento.

instrucción 3 — Embudo de conversión y lead nurturing:
Diseña el embudo completo desde el primer contacto hasta la compra, con: lead magnet (clase gratuita, ebook o mini-curso), página de captura (estructura y copy), secuencia de 5 emails de nurturing (asunto, preheader y cuerpo de cada email), página de ventas (estructura con todos los elementos necesarios) y página de gracias con upsell inmediato.

instrucción 4 — Estrategia de contenido orgánico:
Crea un plan de contenido orgánico de 30 días para YouTube, LinkedIn y TikTok/Instagram Reels, con: 4 ideas de vídeo para YouTube (títulos optimizados para SEO, estructura de guión), 12 publicaciones de LinkedIn (tipo de contenido, copy completo) y 8 vídeos cortos para TikTok/Reels (guión de 60 segundos cada uno). Todos los contenidos deben atraer al público objetivo del curso y posicionar al creador como referente.

instrucción 5 — KPIs y optimización continua:
Define los 10 KPIs más importantes para medir el éxito del lanzamiento y el crecimiento sostenido del curso, con los valores de referencia del sector edtech y las acciones de optimización cuando los indicadores estén por debajo del umbral.

Formato de entrega: Plan de lanzamiento semana a semana, todos los textos de email y anuncios listos para usar, y dashboard de KPIs con umbrales de alerta definidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategias de marketing para el lanzamiento y escalado de cursos online y plataformas de formación digital.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataformas e-learning con IA',
                'description'      => 'Diseña y desarrolla plataformas de formación online escalables integrando inteligencia artificial para personalizar la experiencia de aprendizaje.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas educativas digitales (LMS), con experiencia en el diseño de sistemas de gestión del aprendizaje escalables y en la integración de inteligencia artificial para personalizar la experiencia de los estudiantes.

Objetivo: Diseñar la arquitectura técnica y el plan de desarrollo de una plataforma de e-learning moderna que pueda competir con soluciones como Teachable, Kajabi o Moodle, con funcionalidades de IA integradas.

Contexto técnico del proyecto:
- Tipo de plataforma: [LMS para creador de cursos / plataforma corporativa / marketplace de cursos]
- Número estimado de usuarios activos al lanzar: [cantidad]
- Escala objetivo a 12 meses: [cantidad de usuarios]
- Stack tecnológico preferido: [Laravel + Vue / Next.js / Django / Node.js / otro]
- Presupuesto de desarrollo: [importe o rango]
- Equipo de desarrollo disponible: [número de desarrolladores y perfiles]
- Integraciones requeridas: [Stripe / PayPal / Zoom / YouTube / certificados / otras]

instrucción 1 — Arquitectura del sistema:
Diseña la arquitectura completa de la plataforma, incluyendo: diagrama de módulos principales (gestión de usuarios, catálogo de cursos, reproductor de vídeo, sistema de evaluaciones, certificados, pagos, notificaciones, analítica), base de datos relacional (esquema simplificado de las tablas principales con sus relaciones), estrategia de almacenamiento de vídeo (CDN, streaming adaptativo) y arquitectura de microservicios vs. monolito modular para esta escala.

instrucción 2 — Funcionalidades de IA para personalización del aprendizaje:
Describe cómo implementar 5 funcionalidades de IA que mejoren la experiencia del estudiante:
a) Motor de recomendación de cursos basado en historial de aprendizaje y objetivos profesionales
b) Chatbot tutor que responde preguntas sobre el contenido del curso usando RAG sobre el material del curso
c) Detección automática de abandono (churn prediction) y sistema de re-engagement
d) Generación automática de resúmenes y flashcards de estudio a partir del contenido del curso
e) Evaluación adaptativa que ajusta la dificultad de los ejercicios al nivel del estudiante

Para cada funcionalidad: modelo de IA recomendado, datos de entrenamiento necesarios, API a integrar y estimación de coste por usuario/mes.

instrucción 3 — Sistema de evaluaciones y certificados:
Diseña el módulo de evaluaciones y certificados con: tipos de evaluación soportados (test, vídeo-tarea, proyecto, peer review), algoritmo de certificación verificable con código QR, integración con LinkedIn para publicar el certificado y sistema anti-fraude para los exámenes online (detección de cambio de pestaña, límite de tiempo, preguntas aleatorizadas).

instrucción 4 — Analítica de aprendizaje (Learning Analytics):
Define el sistema de analítica para instructores y administradores, con: métricas de progreso de cada estudiante (completado, tiempo en plataforma, nota media, puntos de abandono), dashboard de rendimiento del curso (tasa de finalización, NPS, ingresos) y alertas automáticas cuando un estudiante lleva más de X días sin actividad.

instrucción 5 — Plan de desarrollo y lanzamiento MVP:
Diseña el roadmap de desarrollo de un MVP en 3 meses, con: sprints de 2 semanas y sus entregables, orden de prioridad de funcionalidades (must-have para el MVP vs. nice-to-have para v2), stack de herramientas de desarrollo y gestión del proyecto, y criterios de éxito técnico para el lanzamiento.

Formato de respuesta: Diagrama de arquitectura descrito en texto, tabla de funcionalidades priorizadas por sprint, y estimación de horas de desarrollo por módulo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar y desarrollar plataformas de e-learning con funcionalidades de IA integradas para personalizar el aprendizaje.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño instruccional de cursos online con IA',
                'description'      => 'Crea cursos online pedagógicamente sólidos y visualmente atractivos usando inteligencia artificial para estructurar contenidos, guiones y evaluaciones.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador instruccional senior especializado en formación online para adultos, con experiencia en la aplicación de modelos pedagógicos modernos (ADDIE, SAM, aprendizaje basado en competencias) al diseño de cursos digitales para plataformas como Coursera, Udemy, Teachable y plataformas corporativas.

Objetivo: Diseñar un curso online completo y pedagógicamente eficaz, desde la estructura de aprendizaje hasta los materiales multimedia y el sistema de evaluación.

Contexto del curso:
- Temática: [tema del curso]
- Duración total: [horas de contenido]
- Formato: [vídeo / texto + ejercicios / mixto / cohort-based]
- Plataforma de publicación: [nombre de la plataforma]
- Perfil del estudiante objetivo: [descripción detallada del learner persona]
- Resultado de aprendizaje principal: [qué sabrá hacer el estudiante al terminar]
- Nivel previo requerido: [ninguno / básico / intermedio]

instrucción 1 — Análisis de necesidades y learner persona:
Define el learner persona completo para este curso, incluyendo: perfil profesional y nivel de experiencia, motivación principal para aprender esto ahora, obstáculos para completar el aprendizaje (tiempo, desmotivación, falta de práctica), estilo de aprendizaje preferido y dispositivos que usará para consumir el contenido. A partir de este análisis, define los 3 resultados de aprendizaje verificables y medibles del curso.

instrucción 2 — Estructura modular del curso:
Diseña la estructura completa del curso con: mapa de contenidos organizado en módulos y lecciones (mínimo 5 módulos con 4-6 lecciones cada uno), descripción de cada lección (objetivo específico, tipo de contenido, duración, recurso principal y actividad de práctica), secuencia pedagógica que garantice la progresión del estudiante desde conocimiento básico hasta aplicación avanzada, y criterios de finalización por módulo.

instrucción 3 — Guión de vídeo lección tipo:
Escribe el guión completo de una lección de vídeo de 8-10 minutos sobre el concepto más importante del módulo 1 del curso. El guión debe incluir: gancho de apertura (30 segundos), explicación del concepto con analogías y ejemplos concretos, demostración o caso práctico, resumen visual y llamada a la acción hacia el ejercicio de práctica. Indica en el guión los momentos de corte, recursos visuales a mostrar y el texto de las diapositivas.

instrucción 4 — Sistema de evaluación y práctica:
Diseña el sistema de evaluación del curso con: quiz de diagnóstico inicial (10 preguntas), un ejercicio práctico por módulo con rúbrica de evaluación detallada, proyecto final integrador con instrucciones completas y criterios de éxito, y evaluación entre pares (peer review) con formulario de feedback estructurado.

instrucción 5 — Recursos complementarios y estrategia de retención:
Define los recursos complementarios del curso (plantillas descargables, lecturas recomendadas, comunidad de estudiantes, sesiones en directo) y diseña la estrategia de retención del estudiante: secuencia de emails de progreso, gamificación (insignias y puntos), sistema de recordatorios y protocolo de re-engagement para estudiantes inactivos más de 7 días.

Formato de respuesta: Mapa de contenidos en tabla, guión de vídeo listo para grabar, rúbricas de evaluación descargables y secuencia de emails de retención completa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar cursos online pedagógicamente sólidos con guiones, evaluaciones y estrategias de retención del estudiante.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de formación corporativa online con IA',
                'description'      => 'Desarrolla estrategias y argumentarios para vender programas de formación online a empresas y responsables de formación con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial especializado en la venta de soluciones de formación B2B (e-learning corporativo, LMS, programas de certificación, bootcamps para empresas) con experiencia en ciclos de venta largos y en la venta consultiva a responsables de RR.HH., directores de formación y directores de operaciones.

Objetivo: Diseñar un sistema completo de venta de formación online corporativa, desde la prospección hasta el cierre y la renovación de contratos.

Contexto comercial:
- Tipo de producto de formación: [plataforma LMS / catálogo de cursos / formación a medida / bootcamp]
- Precio por licencia/usuario o por proyecto: [importe]
- Tamaño de empresa objetivo: [pymes / mediana empresa / gran empresa / multinacional]
- Sectores prioritarios: [tecnología / banca / retail / salud / industria]
- Ciclo de venta estimado: [semanas o meses]
- Competidores principales: [LinkedIn Learning / Udemy for Business / Cornerstone / plataforma propia]

instrucción 1 — Mapa de compradores y usuarios:
Identifica todos los interlocutores en el proceso de compra de formación corporativa: el sponsor económico, el decision maker, el usuario final, el influenciador técnico (IT) y el saboteador potencial. Para cada uno: motivaciones, miedos, métricas por las que le evalúan en su trabajo y el mensaje que mejor conecta con su perfil.

instrucción 2 — Argumentario de ventas consultivo:
Desarrolla el argumentario de ventas completo para el director de formación de una empresa de 500 empleados, con:
a) Las 5 preguntas de diagnóstico que revelan el dolor real de formación de la empresa
b) La propuesta de valor centrada en resultados de negocio (no en características del producto)
c) El business case financiero (ROI de la formación: reducción de rotación, mejora de productividad, ahorro en formación presencial)
d) Las 6 objeciones más comunes con respuesta detallada ("ya tenemos una plataforma", "el presupuesto está comprometido", "los empleados no tienen tiempo de formarse", etc.)
e) Técnicas de cierre para ventas B2B de largo ciclo

instrucción 3 — Secuencia de prospección y demostración:
Diseña la secuencia completa de contacto desde el primer touchpoint hasta la demo, con: plantilla de email de prospección personalizado por sector, guión de la llamada de descubrimiento (30 minutos), estructura de la demo personalizada (45 minutos) y propuesta de proyecto piloto para acelerar la decisión.

instrucción 4 — Propuesta comercial tipo:
Redacta una propuesta comercial de 3 páginas para un programa de formación en habilidades digitales para 200 empleados de una empresa de servicios financieros. Incluye: diagnóstico de necesidades, solución propuesta (plan de formación con módulos y metodología), métricas de impacto comprometidas, inversión desglosada, plazos y condiciones.

instrucción 5 — Renovación y expansión de cuenta:
Diseña la estrategia de Customer Success para la renovación y expansión de contratos: actividades de seguimiento durante los primeros 90 días, revisión trimestral de negocio (QBR) con el cliente, cómo usar los datos de uso de la plataforma para demostrar valor y cómo identificar oportunidades de upsell y cross-sell dentro de la misma empresa.

Formato de respuesta: Argumentario listo para usar, propuesta comercial adaptable y plan de Customer Success con cronograma de actividades y plantillas de QBR.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Vender programas de formación online corporativa a empresas con argumentarios y estrategias de Customer Success.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de productos educativos digitales con IA',
                'description'      => 'Aplica metodologías de product management para desarrollar, lanzar y escalar cursos online, MOOCs y plataformas de formación digital.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager con experiencia en plataformas edtech y productos de formación digital, especializado en el ciclo de vida de productos de aprendizaje online desde el discovery de necesidades hasta el crecimiento y la retención de estudiantes.

Objetivo: Aplicar metodologías modernas de gestión de producto al desarrollo y la mejora continua de un producto de formación online (curso, plataforma o programa de aprendizaje).

Contexto del producto:
- Tipo de producto: [curso individual / plataforma de suscripción / cohort-based course / bootcamp]
- Fase del producto: [idea / MVP / producto con primeros usuarios / escala]
- Métricas actuales clave: [usuarios activos / tasa de finalización / NPS / churn / ingresos]
- Principal problema a resolver: [baja finalización / alto churn / dificultad para adquirir usuarios / monetización]
- Equipo disponible: [solo / con diseñador / con desarrolladores / equipo completo]
- Competencia principal: [plataformas y cursos competidores]

instrucción 1 — Discovery de necesidades del estudiante:
Diseña un proceso de discovery para entender en profundidad las necesidades, frustraciones y motivaciones de los estudiantes del curso. Incluye: guión de entrevista de usuario de 45 minutos con 20 preguntas, encuesta de NPS adaptada a formación online (con preguntas de seguimiento según la puntuación), análisis de los datos de uso de la plataforma (qué métricas indicarían qué lecciones son más y menos efectivas) y cómo sintetizar los hallazgos en un mapa de oportunidades priorizadas.

instrucción 2 — Definición de métricas y North Star:
Define la North Star Metric del producto educativo, justificando por qué esa métrica captura mejor el valor entregado al estudiante. A continuación, construye el árbol de métricas con las métricas de entrada (input) y de resultado (output) en 3 niveles: métricas de adquisición, de activación y retención, y de monetización e impacto de aprendizaje.

instrucción 3 — Priorización del roadmap:
Tienes 10 funcionalidades o mejoras propuestas para el producto. Diseña un framework de priorización adaptado a plataformas edtech que tenga en cuenta: impacto esperado en la tasa de finalización del curso, impacto en la satisfacción del estudiante (NPS), coste de implementación, alineación con la estrategia de crecimiento y riesgo de ejecución. Aplica el framework a estas 10 mejoras ficticias y entrega el roadmap resultante para los próximos 2 trimestres.

instrucción 4 — Estrategia de retención y reducción del churn:
El mayor problema de los cursos online es la tasa de abandono (típicamente superior al 90% en MOOCs gratuitos). Diseña una estrategia integral de retención con: análisis de los puntos de abandono más comunes (por qué los estudiantes dejan el curso), intervenciones automatizadas (emails, notificaciones push, mensajes de la comunidad) en los momentos críticos de riesgo de abandono, sistema de gamificación y progresión visible, y programa de responsabilidad (accountability buddy, grupos de estudio, retos semanales).

instrucción 5 — Experimentos de crecimiento y A/B testing:
Diseña un backlog de 8 experimentos de producto para mejorar las métricas clave, con para cada experimento: hipótesis formulada correctamente, métrica principal a medir, variante de control y variante experimental, tamaño de muestra necesario y criterios de decisión go/no-go.

Formato de respuesta: Guión de entrevista listo para usar, árbol de métricas en formato tabla, roadmap priorizado por trimestre y backlog de experimentos con estructura científica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el ciclo de vida de productos de formación digital aplicando metodologías de product management y experimentación.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Formación y desarrollo de empleados con MOOCs e IA',
                'description'      => 'Diseña programas de upskilling y reskilling para empleados usando plataformas de formación online y MOOCs, con estrategias de engagement y medición del impacto.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de aprendizaje y desarrollo (L&D) con experiencia en el diseño de programas de formación corporativa basados en plataformas de e-learning, MOOCs y microlearning, especializado en la gestión del cambio y el desarrollo de competencias digitales en organizaciones en transformación.

Objetivo: Diseñar una estrategia integral de upskilling y reskilling para los empleados de una organización usando plataformas de formación online como LinkedIn Learning, Coursera for Business, Udemy for Business o una plataforma propia.

Contexto organizacional:
- Sector y tipo de empresa: [sector / tamaño]
- Colectivo a formar: [departamentos o perfiles]
- Competencias prioritarias a desarrollar: [habilidades técnicas / digitales / de liderazgo / transversales]
- Plataformas de formación disponibles: [LinkedIn Learning / Coursera / Udemy / plataforma propia]
- Presupuesto de formación por empleado/año: [importe]
- Reto principal: [baja participación / falta de tiempo / cultura sin hábito de formación / medir el ROI]
- Plazo para ver resultados: [meses]

instrucción 1 — Diagnóstico de brechas de competencias:
Diseña el proceso de análisis de necesidades formativas (skills gap analysis) para la organización, con: cuestionario de autoevaluación de competencias de 20 preguntas para empleados, evaluación 360 para managers, cómo cruzar los resultados con las necesidades estratégicas del negocio y cómo presentar el mapa de brechas al comité de dirección para conseguir su apoyo.

instrucción 2 — Diseño del programa de formación:
Crea el programa de formación anual para el colectivo prioritario, con: itinerario personalizado por nivel y perfil (junior/senior/manager), selección de cursos recomendados en cada plataforma por competencia, formato de aprendizaje mixto (MOOC + sesión en vivo + práctica en el puesto), carga de formación semanal realista (máximo 2-3 horas) y sistema de badging y reconocimiento de logros.

instrucción 3 — Estrategia de engagement y adopción:
El mayor problema de los programas de formación corporativa es la baja participación. Diseña una estrategia de engagement con: comunicación de lanzamiento del programa (email del CEO, vídeo de presentación, FAQ para managers), sistema de incentivos (tiempo de formación en horario laboral, bonus vinculado a completar itinerario, reconocimiento público), gestión del cambio para managers (cómo liderar con el ejemplo y dar tiempo a sus equipos) y comunidad interna de aprendizaje (foro, canal de Slack, grupo de WhatsApp).

instrucción 4 — Medición del impacto de la formación:
Adapta el modelo de Kirkpatrick a la formación online corporativa para medir: reacción (encuesta de satisfacción post-curso), aprendizaje (evaluaciones de conocimiento pre/post), comportamiento (observación en el puesto y evaluación 90 días después) e impacto en negocio (KPIs vinculados a las competencias formadas). Incluye el dashboard de seguimiento para el director de RRHH.

instrucción 5 — Informe de ROI de la formación:
Redacta la estructura de un informe de ROI de la formación para presentar al comité de dirección, con: metodología de cálculo del ROI (inversión total vs. beneficios cuantificables), casos de éxito concretos de empleados que han aplicado lo aprendido, comparativa con el coste alternativo de contratar talento externo y recomendaciones para el presupuesto del próximo ejercicio.

Formato de respuesta: Cuestionario de diagnóstico listo para distribuir, itinerario formativo por perfil en tabla, plan de comunicación de lanzamiento y estructura del informe de ROI.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programas de upskilling y reskilling corporativo usando plataformas de formación online y MOOCs.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Monetización y finanzas de cursos online con IA',
                'description'      => 'Analiza y optimiza los modelos de monetización de cursos online y plataformas edtech para maximizar los ingresos y la rentabilidad con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO especializado en startups y negocios edtech, con experiencia en el análisis financiero de modelos de negocio de formación online, incluyendo modelos de suscripción, pago único, freemium, marketplace y B2B SaaS educativo.

Objetivo: Analizar y optimizar la estructura financiera y el modelo de monetización de un negocio de formación online para maximizar los ingresos recurrentes y la rentabilidad a largo plazo.

Contexto financiero del negocio:
- Tipo de modelo de negocio: [pago único por curso / suscripción mensual/anual / marketplace / B2B SaaS / freemium]
- Ingresos mensuales actuales (MRR o ingresos totales): [importe]
- Número de estudiantes activos: [cantidad]
- Precio actual del producto: [importe]
- Coste de adquisición de cliente (CAC): [importe o desconocido]
- Tasa de churn mensual (si es suscripción): [porcentaje]
- Costes principales: [creación de contenido / plataforma / marketing / soporte / personal]

instrucción 1 — Análisis del modelo de monetización actual:
Evalúa las fortalezas y debilidades del modelo de monetización actual comparándolo con los 5 modelos más utilizados en edtech (pago único, suscripción, freemium, cohort-based con precio premium, B2B). Identifica las oportunidades de diversificación de ingresos que no se están aprovechando actualmente (ej: certificados de pago, mentorías individuales, formación para empresas, licencias de contenido).

instrucción 2 — Métricas unitarias del negocio:
Calcula y analiza las métricas financieras unitarias clave: a) LTV (Lifetime Value) del estudiante por modelo de negocio, b) CAC por canal de adquisición (orgánico, paid, referidos, B2B), c) ratio LTV/CAC y qué significa para la salud del negocio, d) payback period por canal y e) MRR expansion revenue (upsell/cross-sell a la base de clientes existente). Para cada métrica proporciona el valor de referencia del sector edtech y las acciones de mejora si está por debajo.

instrucción 3 — Estrategia de pricing:
Diseña una estrategia de pricing completa que maximice los ingresos, con: análisis de la elasticidad precio-demanda del producto, estructura de precios por niveles (básico, pro, enterprise), política de descuentos y promociones que no erosionen la percepción de valor, precio de lanzamiento vs. precio de catálogo, y estrategia de precio para el mercado latinoamericano si se quiere expandir.

instrucción 4 — Proyección financiera a 24 meses:
Construye la estructura de una proyección financiera a 24 meses para el negocio edtech, con: escenario conservador, base y optimista para cada una de las variables clave (tasa de crecimiento de usuarios, precio medio, churn, CAC), punto de equilibrio y meses hasta la rentabilidad, y necesidades de financiación (si aplica) con los instrumentos más adecuados (bootstrapping, inversión de ángeles, crowdfunding, líneas ICO para startups).

instrucción 5 — Optimización del churn y retención de ingresos:
Para modelos de suscripción, diseña la estrategia de retención de ingresos con: análisis de las causas del churn (voluntario vs. involuntario), acciones de reducción de churn involuntario (gestión de pagos fallidos, dunning process), programa de re-engagement para suscriptores en riesgo, oferta de pausa en lugar de cancelación y análisis de cohortes para identificar los segmentos con mayor retención.

Formato de respuesta: Análisis de métricas unitarias con fórmulas, estructura del modelo financiero con las variables principales y estrategia de pricing con ejemplos de tablas de precios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar y optimizar los modelos de monetización y la rentabilidad de negocios de formación online y plataformas edtech.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad intelectual en contenidos educativos digitales con IA',
                'description'      => 'Navega el marco legal de derechos de autor, licencias y propiedad intelectual en la creación y distribución de cursos online y MOOCs con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual y derecho digital, con experiencia en el asesoramiento a creadores de contenido educativo, plataformas de e-learning y empresas edtech en materia de derechos de autor, licencias, contratos y protección de contenidos en el entorno digital.

Objetivo: Proporcionar una guía jurídica completa para un creador de cursos online o una plataforma de formación digital sobre los aspectos legales de la propiedad intelectual de los contenidos educativos.

Contexto legal del proyecto:
- Tipo de creador: [instructor individual / empresa edtech / institución académica]
- Tipo de contenido: [vídeos / presentaciones / e-books / software / código / música / imágenes]
- Plataforma de distribución: [propia / Udemy / Coursera / YouTube / otras]
- Modelo de negocio: [venta directa / suscripción / gratuito / licencias B2B]
- Jurisdicción principal: [España / Unión Europea / mercado global]
- Situación actual: [creando desde cero / vendiendo ya / recibiendo reclamaciones / licenciando a terceros]

instrucción 1 — Derechos de autor en contenidos educativos:
Explica el régimen de protección de los derechos de autor de los contenidos educativos según el TRLPI (Real Decreto Legislativo 1/1996) y la Directiva 2019/790 (Copyright en el Mercado Único Digital):
a) Qué tipos de contenido educativo están protegidos y desde cuándo (sin necesidad de registro)
b) Qué derechos morales y patrimoniales tiene el creador
c) Cuánto tiempo dura la protección
d) Qué contenidos NO están protegidos (ideas, métodos pedagógicos, datos, hechos)
e) Cuál es la excepción educativa del artículo 32 TRLPI y qué permite realmente usar en cursos online sin pedir permiso

instrucción 2 — Uso de contenido de terceros en cursos:
Detalla las reglas legales para usar en un curso online: a) imágenes de stock (diferencia entre licencias RF, RM, Creative Commons), b) música de fondo en vídeos (licencias SGAE, plataformas de música libre), c) fragmentos de libros, artículos y noticias (cita permitida vs. reproducción ilegal), d) herramientas de software y capturas de pantalla, e) contenido generado con IA (propiedad del output, condiciones de uso comercial). Para cada caso: qué está permitido, qué requiere licencia y qué está prohibido.

instrucción 3 — Contratos esenciales para la plataforma:
Redacta el esquema y las cláusulas esenciales de 3 contratos para una plataforma de e-learning:
a) Términos y condiciones de uso para estudiantes (acceso, restricciones de uso, política de reembolsos, licencia de uso del contenido)
b) Contrato de instructor (cesión de derechos sobre el contenido, exclusividad, revenue share, garantías de originalidad)
c) Acuerdo de licencia B2B para empresas que compran acceso para sus empleados

instrucción 4 — Protección frente a la piratería de cursos:
Describe las medidas técnicas y jurídicas para proteger los cursos online de la piratería y la distribución no autorizada: DRM y restricciones de descarga, marcas de agua en vídeo, monitorización de plataformas de piratería, procedimiento de DMCA Takedown para retirar contenido copiado de YouTube y Udemy, y acciones legales disponibles (reclamación extrajudicial, medidas cautelares, demanda por daños y perjuicios).

instrucción 5 — Contenido generado con IA y derechos de autor:
Analiza el estado actual (2024-2025) de la propiedad intelectual del contenido generado con IA (textos, imágenes, vídeos, música) en el contexto de cursos online: si el instructor puede reclamar derechos sobre el output de IA, cómo afecta el Reglamento de IA de la UE a las plataformas edtech y qué política de disclosure se recomienda adoptar con los estudiantes sobre el uso de IA en la creación del curso.

Nota: Esta guía tiene carácter informativo. Consúltese con un abogado especializado para situaciones concretas.

Formato de respuesta: Guía estructurada por secciones con ejemplos prácticos, esquemas de contratos con cláusulas esenciales y tabla comparativa de tipos de licencias de contenido.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar los derechos de autor, licencias y protección legal de contenidos educativos digitales y cursos online.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a estudiantes online y reducción del abandono con IA',
                'description'      => 'Diseña sistemas de atención al estudiante y estrategias de reducción del abandono en plataformas de formación online usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en experiencia del estudiante (Student Success) para plataformas de formación online, con experiencia en la reducción de la tasa de abandono de cursos digitales y en el diseño de sistemas de soporte que mantienen a los estudiantes motivados y avanzando en su aprendizaje.

Objetivo: Diseñar un sistema completo de atención al estudiante y una estrategia de reducción del abandono para una plataforma de formación online o un creador de cursos con problema de baja tasa de finalización.

Contexto de la plataforma:
- Tipo de formación: [curso individual / plataforma de suscripción / bootcamp / cohort-based]
- Tasa de finalización actual: [porcentaje]
- Tasa de churn mensual (si es suscripción): [porcentaje]
- NPS actual de los estudiantes: [puntuación]
- Canales de soporte disponibles: [email / chat / foro / Slack / WhatsApp / Discord]
- Equipo de Student Success: [número de personas]
- Principal queja de los estudiantes: [qué dicen cuando cancelan o abandonan]

instrucción 1 — Diagnóstico de los puntos de abandono:
Diseña un proceso de análisis de los datos de la plataforma para identificar en qué momentos exactos los estudiantes abandonan. Incluye: qué métricas extraer del LMS (tasa de finalización por lección, tiempo entre accesos, puntos de drop-off en vídeos), cómo segmentar a los estudiantes en riesgo de abandono vs. los que avanzan bien, guión de entrevista de salida (exit interview) de 15 preguntas para estudiantes que abandonaron y cómo sintetizar los hallazgos en un mapa de momentos críticos.

instrucción 2 — Sistema de soporte proactivo:
Diseña un sistema de soporte proactivo (no reactivo) que detecte y actúe antes de que el estudiante abandone. Incluye: reglas de detección de estudiante en riesgo (sin actividad en X días, nota baja en un quiz, solicitud de cancelación), secuencia de intervención automatizada por canal (email, notificación push, mensaje en la comunidad), guión para la llamada o mensaje personalizado del gestor de éxito de estudiantes y criterios para ofrecer un descuento de retención vs. una pausa en la suscripción.

instrucción 3 — Gestión de quejas y devoluciones:
Crea el proceso completo de gestión de quejas y solicitudes de devolución, con: política de reembolsos justa que proteja al negocio y a la reputación, árbol de decisión para las situaciones más frecuentes (no he tenido tiempo de verlo / el contenido no era lo que esperaba / problemas técnicos / quiero parar y retomar más adelante), guión de respuesta para cada situación y cómo convertir una solicitud de devolución en una oportunidad de retención.

instrucción 4 — Comunidad de aprendizaje como herramienta de retención:
Diseña la estrategia de comunidad para reducir el abandono. Incluye: elección de la plataforma de comunidad (Discord, Circle, Slack, foro propio), roles y moderación (community manager, mentores alumnos avanzados, instructor), actividades semanales (retos, sesiones AMA, grupos de estudio), onboarding del nuevo estudiante a la comunidad y métricas de salud de la comunidad.

instrucción 5 — Métricas de Student Success y reporting:
Define el dashboard de métricas de Student Success que se revisará semanalmente, con: tasa de finalización por cohorte de inicio, NPS mensual con análisis de drivers, tiempo de respuesta del soporte, tasa de retención de suscriptores a 30, 60 y 90 días, y número de estudiantes rescatados del abandono. Incluye también la cadencia de reporting al equipo directivo y las acciones que deben tomarse cuando una métrica está por debajo del umbral.

Formato de respuesta: Árbol de decisión para gestión de quejas listo para usar, secuencias de emails de retención completas y dashboard de métricas con umbrales de alerta definidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar sistemas de atención al estudiante y estrategias de reducción del abandono en plataformas de formación online.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Creación de cursos online como freelance con IA',
                'description'      => 'Construye un negocio sostenible como creador de cursos online freelance, desde la validación de la idea hasta la escalada de ingresos, con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios para creadores de contenido educativo digital, con experiencia en ayudar a profesionales a monetizar su conocimiento a través de cursos online, y en construir modelos de negocio de formación digital rentables y escalables de forma independiente.

Objetivo: Diseñar un plan completo para lanzar y escalar un negocio de cursos online como freelance o solopreneur, desde la validación de la idea hasta los primeros 10.000€ de ingresos mensuales.

Perfil del creador:
- Área de expertise: [campo de conocimiento]
- Experiencia profesional: [años y logros principales]
- Audiencia actual (si la tiene): [seguidores en redes / lista de email / comunidad]
- Tiempo disponible por semana para construir el negocio: [horas]
- Objetivo de ingresos mensuales a 12 meses: [importe]
- Nivel de comodidad con la cámara y la creación de contenido: [alto / medio / bajo]
- Modelo de negocio preferido: [curso en solitario / membresía / coaching / combinación]

instrucción 1 — Validación de la idea de curso:
Diseña el proceso de validación de la idea antes de crear ni un minuto de contenido. Incluye: cómo investigar la demanda del mercado (búsquedas en Google, cursos existentes en Udemy/Coursera, comunidades de Reddit y grupos de Facebook), 3 métodos para validar con audiencia real antes de crear el curso (pre-venta, webinar de pago, encuesta con incentivo), criterios de go/no-go para decidir si crear el curso y cómo posicionar el curso de forma diferenciada si ya hay mucha competencia.

instrucción 2 — Plan de creación de contenido eficiente:
Diseña un sistema de producción de cursos optimizado para un freelance con tiempo limitado: flujo de trabajo desde el guión hasta la publicación (batching de grabación, edición con templates, herramientas de bajo coste), configuración del home studio con presupuesto de 500€ (cámara, micrófono, iluminación, fondo), uso de IA para acelerar la creación de contenido (guiones, diapositivas, captions, thumbnails) y cronograma de creación de un curso de 4 horas en 6 semanas compatibles con trabajo a tiempo completo.

instrucción 3 — Lanzamiento con audiencia pequeña:
Diseña una estrategia de lanzamiento para un creador con menos de 1.000 seguidores, con: cómo construir una lista de espera de 200 personas antes del lanzamiento, estrategia de contenido gratuito de valor para atraer a los primeros seguidores (3 plataformas y tipo de contenido para cada una), guión del webinar de lanzamiento de 60 minutos, secuencia de emails de lanzamiento de 5 días y cómo conseguir los primeros 10 testimonios reales para futuras ventas.

instrucción 4 — Diversificación de ingresos a partir del primer curso:
Una vez el primer curso genera ingresos estables, explica cómo diversificar el negocio con: membresía de contenido recurrente como complemento al curso, programa de mentoría grupal o individual a precio premium, licencias del curso a empresas (versión B2B del mismo contenido), libro o e-book derivado del contenido del curso, y afiliación a productos complementarios recomendados en el curso.

instrucción 5 — Automatización y escalabilidad:
Diseña el stack tecnológico y los flujos automatizados que permiten escalar el negocio sin aumentar el tiempo de trabajo proporcional, con: plataforma de cursos y gestión de pagos (comparativa de Teachable, Kajabi, Hotmart, plataforma propia), automatización del marketing (email marketing con ConvertKit/ActiveCampaign, secuencias de bienvenida, re-engagement y upsell), automatización del soporte (base de conocimiento, chatbot para FAQs, plantillas de respuesta) y sistema de afiliados para que otros vendan el curso a comisión.

Formato de respuesta: Plan de validación con criterios de go/no-go, cronograma de producción semana a semana, guión del webinar de lanzamiento y tabla comparativa de plataformas de cursos con recomendación final.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar y escalar un negocio de creación de cursos online como freelance o solopreneur.',
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
