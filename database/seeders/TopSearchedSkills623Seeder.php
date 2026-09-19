<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills623Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campaña de marketing para programas de bienestar corporativo con IA',
                'description'      => 'Diseña estrategias de comunicación interna y externa para posicionar programas de bienestar corporativo usando inteligencia artificial para personalizar los mensajes y maximizar la adopción.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing de bienestar corporativo con experiencia en comunicación interna, marketing de recursos humanos y en el uso de inteligencia artificial para personalizar campañas a escala. Necesito diseñar una campaña integral para lanzar un nuevo programa de bienestar corporativo en una empresa de 600 empleados distribuidos en tres sedes y con trabajo híbrido.

contexto: La empresa ha contratado una plataforma de bienestar corporativo que ofrece: psicología online, clases de mindfulness y yoga, nutrición personalizada, seguimiento de actividad física y recursos de salud financiera. El presupuesto de lanzamiento de la campaña es de 8.000 euros. La empresa tiene una cultura de alto rendimiento y los empleados son escépticos ante iniciativas de RRHH que perciben como "de cara a la galería". El objetivo es conseguir que el 60% de los empleados activen su cuenta en los primeros 60 días.

tarea: Desarrolla la estrategia de campaña completa con los siguientes apartados:

1. DIAGNÓSTICO Y SEGMENTACIÓN
Diseña una encuesta de necesidades de bienestar de cinco preguntas que se enviará antes del lanzamiento para segmentar a los empleados según sus prioridades. Define cuatro perfiles de empleado según sus necesidades de bienestar (el estresado crónico, el deportista activo, el que busca equilibrio mental y el que prioriza la salud financiera) y adapta la comunicación a cada perfil. Explica cómo usar IA para analizar los resultados de la encuesta y generar insights automáticos sobre las necesidades por departamento y sede.

2. NARRATIVA Y MENSAJES CLAVE
Desarrolla la narrativa central de la campaña: por qué la empresa apuesta por el bienestar (autenticidad, no paternalismo), qué beneficio concreto obtiene cada empleado (no solo la empresa) y cómo conecta el bienestar con la cultura y los valores de la organización. Redacta cinco mensajes clave adaptados a los cuatro perfiles de empleado definidos. Describe cómo usar IA para generar variantes de estos mensajes personalizadas por departamento, nivel jerárquico y sede.

3. PLAN DE COMUNICACIÓN EN 60 DÍAS
Diseña la secuencia de comunicaciones semana a semana, incluyendo: semana de teaser (despertar curiosidad sin revelar el programa completo), semana de lanzamiento (revelación y activación), semanas de activación (content que mueve a la acción) y semanas de mantenimiento (testimonios, retos grupales, recordatorios personalizados). Para cada semana, especifica el canal (email, Slack, pantallas en oficina, reuniones de equipo), el formato (vídeo, infografía, newsletter, evento) y el mensaje principal.

4. ACTIVACIÓN POR CANALES
Diseña la estrategia específica para cada canal: email con segmentación por perfil y personalización con IA, Slack con bot de recordatorios y retos semanales, pantallas digitales en oficina con contenido rotativo, reuniones de equipo con kit para managers y redes sociales internas. Para cada canal, proporciona un ejemplo de pieza de contenido lista para usar.

5. PROGRAMA DE EMBAJADORES
Diseña un programa de embajadores de bienestar: cómo seleccionar a diez empleados de diferentes departamentos y sedes, qué formación darles, qué papel juegan en la campaña (testimonios, facilitadores de retos, puntos de contacto para dudas) y cómo reconocer su participación. Incluye un guión para el vídeo-testimonio que grabarán los embajadores y cómo usar IA para adaptar el mensaje de cada embajador a su audiencia específica.

6. MECÁNICA DE GAMIFICACIÓN
Diseña una mecánica de gamificación para los primeros 60 días: sistema de puntos por activaciones (crear cuenta, completar primera sesión, compartir en canal interno), retos grupales por equipo, ranking departamental visible en Slack y recompensas (extra day off para el equipo ganador, reconocimiento público, vouchers de bienestar). Explica cómo usar IA para personalizar los retos según el historial de actividad de cada empleado.

7. MÉTRICAS Y OPTIMIZACIÓN EN TIEMPO REAL
Define ocho métricas de la campaña con objetivos específicos: tasa de activación de cuenta (objetivo: 60% en 60 días), tasa de apertura de emails por segmento, engagement con el contenido de Slack, asistencia a eventos de lanzamiento, uso mensual de la plataforma tras el lanzamiento, NPS del programa (objetivo: superior a 30), correlación entre uso del programa y absentismo y reducción del estrés autopercibido (encuesta pre y post). Describe cómo usar IA para monitorizar estas métricas en tiempo real y ajustar la campaña sobre la marcha.

8. GESTIÓN DE LA RESISTENCIA
Anticipa las tres objeciones más comunes de los empleados ("no tengo tiempo", "no me fío de que los datos sean privados", "esto no es para mí") y diseña respuestas y acciones específicas para cada una. Incluye un protocolo para manejar comentarios negativos en canales públicos y cómo convertir a los escépticos en embajadores si tienen una buena experiencia inicial.

Presenta el plan con un calendario visual en formato tabla, ejemplos de piezas de comunicación listas para usar y una guía de implementación semanal. El tono debe ser auténtico, empático y orientado al beneficio real del empleado, evitando el lenguaje corporativo vacío.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una campaña de lanzamiento de programas de bienestar corporativo que consiga alta adopción superando la resistencia cultural.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataforma de bienestar corporativo con IA personalizada',
                'description'      => 'Diseña la arquitectura técnica de una plataforma de bienestar corporativo que usa inteligencia artificial para personalizar recomendaciones de salud, mindfulness y productividad a cada empleado.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas de salud digital y bienestar corporativo. Voy a desarrollar una plataforma SaaS de bienestar corporativo para empresas de entre 50 y 5.000 empleados que usa inteligencia artificial para personalizar la experiencia de cada usuario según sus necesidades, objetivos y patrones de uso. Necesito diseñar la arquitectura completa del sistema.

contexto: La plataforma ofrecerá cinco módulos: bienestar físico (seguimiento de actividad, clases de yoga y fitness), salud mental (meditación, psicología online, recursos de manejo del estrés), nutrición (seguimiento alimentario, recetas personalizadas, conexión con nutricionistas), sueño (análisis y recomendaciones de higiene del sueño) y bienestar financiero (recursos de educación financiera, planificador de presupuesto). La IA debe actuar como un "coach de bienestar" personal que aprende de cada usuario y mejora sus recomendaciones con el tiempo. Los clientes son empresas que pagan por empleado/mes y quieren datos agregados y anonimizados de bienestar para sus reportes de RRHH.

tarea: Diseña la arquitectura técnica completa con los siguientes componentes:

1. ARQUITECTURA GENERAL DEL SISTEMA
Dibuja en texto la arquitectura de alto nivel: frontend (web y mobile), backend API, motor de IA/ML, base de datos, capa de integraciones y sistema de notificaciones. Especifica para cada capa la tecnología recomendada, el razonamiento técnico de la elección y las alternativas consideradas. Define la estrategia de escalabilidad horizontal para soportar desde 100 hasta 100.000 usuarios concurrentes.

2. MODELO DE DATOS PARA BIENESTAR
Diseña el esquema de datos principal: entidad Usuario (perfil de bienestar, objetivos, historial de actividad), entidad Sesión (tipo de actividad, duración, métricas específicas por módulo), entidad Recomendación (generada por IA, estado de aceptación, feedback del usuario) y entidad ReporteEmpresa (datos agregados y anonimizados, métricas de uso, indicadores de bienestar colectivo). Proporciona el esquema en formato SQL o JSON Schema con los campos clave y sus tipos de datos. Explica la estrategia de anonimización para proteger la privacidad individual mientras se proveen insights de empresa.

3. MOTOR DE PERSONALIZACIÓN CON IA
Diseña el sistema de recomendaciones personalizadas: qué señales capturar (actividad diaria, módulos usados, duración de sesiones, feedback explícito, hora del día, día de la semana, patrones de estrés correlacionados con calendario), qué modelos de ML usar para cada tipo de recomendación (collaborative filtering para contenido, modelos de series temporales para patrones de sueño, NLP para análisis de estado de ánimo en journaling) y cómo implementar el loop de mejora continua. Describe el pipeline de datos desde la captura hasta la generación de la recomendación, con tiempos de respuesta objetivo (menos de 200ms para recomendaciones en tiempo real).

4. MÓDULO DE COACHING IA CONVERSACIONAL
Diseña un chatbot de coaching de bienestar integrado en la plataforma: qué capacidades debe tener (chequeo diario de estado, sugerencia de actividades según el estado actual, motivación en momentos de abandono, recordatorios inteligentes, escucha activa básica), cómo usar modelos de lenguaje para generar respuestas empáticas y personalizadas y cuándo derivar a un profesional humano (señales de crisis de salud mental, petición explícita del usuario, patrones preocupantes detectados por IA). Incluye el diseño del flujo de conversación del chequeo diario y tres ejemplos de intercambios bot-usuario.

5. INTEGRACIONES CON DISPOSITIVOS Y APPS
Describe las integraciones prioritarias: wearables (Apple Health, Google Fit, Garmin, Fitbit) para importar datos de actividad y sueño, calendario (Google Calendar, Outlook) para detectar semanas de alta carga y sugerir actividades de recuperación, HRIS de la empresa para sincronizar datos de onboarding y offboarding y apps de terceros para módulos específicos (Headspace, Calm, MyFitnessPal). Para cada integración, indica: tipo de API, datos que se sincronizan, frecuencia de sincronización y gestión de permisos del usuario.

6. PRIVACIDAD Y CUMPLIMIENTO NORMATIVO
Diseña la arquitectura de privacidad: separación de datos personales de salud de datos de empresa, consentimiento granular por módulo y tipo de dato, derecho de acceso y eliminación de datos, cifrado en reposo y en tránsito, modelo de amenazas específico para datos de salud y bienestar y cumplimiento de RGPD y de normativa específica de datos de salud (Reglamento europeo de datos de salud). Proporciona el modelo de permisos de datos y el flujo de obtención de consentimiento.

7. DASHBOARD DE EMPRESA (HR ANALYTICS)
Diseña el dashboard para el cliente-empresa: qué métricas mostrar (tasa de adopción, módulos más usados, tendencias de bienestar agregadas, índice de estrés colectivo por departamento, correlación entre uso de la plataforma y absentismo), cómo anonimizar los datos para que no sea posible identificar a individuos con grupos pequeños (mínimo de N usuarios para mostrar datos de un subgrupo), qué alertas proactivas generar para RRHH y cómo exportar reportes en PDF o Excel para la dirección.

8. ESTRATEGIA DE LANZAMIENTO TÉCNICO
Define el plan de implementación técnica en cuatro fases: MVP con tres módulos básicos y IA de recomendación simple (tres meses), ampliación a cinco módulos con coaching conversacional (seis meses), integraciones con wearables y HRIS (nueve meses) y modelo de IA avanzado con predicción de riesgo de burnout (doce meses). Para cada fase, indica los recursos de ingeniería necesarios, las dependencias críticas y los criterios de éxito técnico.

Presenta la arquitectura con diagramas en texto, fragmentos de código de referencia donde sean útiles y una evaluación de riesgos técnicos para cada componente. El tono debe ser técnico y preciso, orientado a un equipo de ingeniería senior.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar la arquitectura técnica de una plataforma de bienestar corporativo con motor de personalización basado en IA.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de espacios de trabajo saludables asistido por IA',
                'description'      => 'Aplica principios de diseño biofílico y evidence-based design junto con herramientas de IA para crear entornos de trabajo que promuevan el bienestar físico y mental de los empleados.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de interiores especializado en espacios de trabajo saludables, con experiencia en diseño biofílico, ergonomía, acústica y en el uso de herramientas de inteligencia artificial para optimizar el diseño de oficinas orientadas al bienestar. Necesito rediseñar las oficinas de una empresa de servicios profesionales de 250 empleados que quiere convertir su espacio de trabajo en un activo estratégico para el bienestar y la productividad.

contexto: La empresa ocupa tres plantas de un edificio de oficinas construido en los años noventa: planta baja con recepción y salas de reuniones, primera planta con open space de 150 personas y segunda planta con despachos de dirección y zona de trabajo concentrado. La dirección ha aprobado un presupuesto de reforma de 350.000 euros y quiere que el nuevo diseño refleje el compromiso de la empresa con el bienestar de las personas. Los empleados trabajan en modalidad híbrida (60% presencial) y hay tres generaciones conviviendo: millennials que buscan espacios de colaboración, generación X que prefiere concentración y silencio y seniors que valoran la comodidad y la tradición.

tarea: Desarrolla un proyecto de diseño de espacios saludables con los siguientes componentes:

1. DIAGNÓSTICO DEL ESPACIO ACTUAL
Define una metodología de diagnóstico del espacio actual en tres fases: observación etnográfica (qué observar, durante cuánto tiempo, cómo registrarlo), encuesta a empleados (diez preguntas clave sobre cómo el espacio afecta su bienestar y productividad) y análisis técnico (iluminación, acústica, calidad del aire, ergonomía, temperatura). Explica cómo usar IA para analizar los datos recogidos e identificar los principales problemas y oportunidades del espacio actual.

2. PRINCIPIOS DE DISEÑO SALUDABLE
Explica los ocho principios del evidence-based design aplicados a oficinas: biofilia (elementos naturales), luz natural y circadiana, control acústico, calidad del aire interior, ergonomía activa, espacios de descanso y restauración, estimulación sensorial equilibrada y opciones de movimiento. Para cada principio, describe cómo aplicarlo en el contexto de la reforma presupuestada y proporciona tres ejemplos concretos de intervención con coste estimado.

3. PROGRAMA FUNCIONAL POR PLANTA
Diseña el programa funcional de las tres plantas con las zonas necesarias: zona de concentración profunda (silencio obligatorio, particiones acústicas, iluminación regulable), zona de colaboración activa (mobiliario flexible, tecnología de reunión, conexión visual con el exterior), zona de descanso y restauración (sofás, plantas, luz cálida, prohibido el trabajo), zona de trabajo en movimiento (mesas de pie, zonas de paseo, bicicletas estáticas de escritorio) y zona de conexión social (cafetería, zona informal, espacio para celebraciones). Indica el porcentaje de superficie dedicada a cada zona según las mejores prácticas internacionales.

4. DISEÑO BIOFÍLICO
Desarrolla la estrategia biofílica para el proyecto: selección de plantas (cuáles depuran mejor el aire, cuáles requieren menos mantenimiento, cómo distribuirlas), materiales naturales (madera, piedra, ratán en qué aplicaciones), vistas y conexión visual con el exterior (cómo maximizarla en un edificio existente), agua (fuentes, elementos acuáticos en zonas de descanso) y patrones naturales (fractales, formas orgánicas en carpintería y textiles). Describe cómo usar IA para generar visualizaciones del espacio con distintas opciones biofílicas antes de tomar decisiones de diseño.

5. ILUMINACIÓN CIRCADIANA Y ACÚSTICA
Diseña la estrategia de iluminación y acústica: iluminación dinámica que simula el ritmo circadiano natural (temperatura de color y nivel de iluminación que cambian a lo largo del día), complemento con luz natural mediante espejos, pinturas reflectantes y lucernarios si es posible, zonificación acústica con soluciones técnicas específicas (paneles absorbentes, mascaras acústicas, vegetación como absorbente), protocolos de uso del espacio para convivencia entre perfiles diferentes y señalización clara de zonas de silencio. Proporciona especificaciones técnicas de nivel de decibelios por zona y temperatura de color por franja horaria.

6. USO DE IA EN EL PROCESO DE DISEÑO
Describe cómo integrar herramientas de IA en el proceso: (a) generación de conceptos de diseño con IA generativa de imagen (Midjourney, DALL-E, Adobe Firefly) para presentar opciones visuales al cliente antes de comprometer el presupuesto, (b) simulación de flujos de personas con IA para optimizar la distribución y evitar cuellos de botella, (c) análisis de la planta actual para detectar problemas de circulación, privacidad visual y ruido mediante herramientas de spatial analytics y (d) personalización dinámica del espacio con sensores e IA (ajuste automático de temperatura, luz y música ambiental según ocupación y hora).

7. PRIORIZACIÓN DE INVERSIONES
Proporciona una matriz de priorización de inversiones para el presupuesto de 350.000 euros: qué intervenciones tienen mayor impacto en bienestar con menor coste (quick wins de primeros 50.000 euros), qué intervenciones estructurales son imprescindibles (inversión de 200.000 euros) y qué elementos premium se pueden incluir con el presupuesto restante. Presenta en formato tabla con columnas: intervención, coste estimado, impacto en bienestar (alto/medio/bajo), impacto en productividad y plazo de ejecución.

8. MÉTRICAS DE BIENESTAR DEL ESPACIO
Define cómo medir el impacto del rediseño: encuesta de satisfacción con el espacio antes y después (cinco dimensiones: satisfacción general, nivel de concentración, calidad de colaboración, sensación de bienestar y orgullo de mostrar la oficina), datos objetivos de sensores (temperatura, CO2, nivel de ruido, ocupación por zona) y correlación con métricas de negocio (absentismo, productividad autopercibida, retención de talento). Propón una revisión de diseño a seis meses con ajustes basados en datos.

Presenta el proyecto con renders descriptivos en texto, tablas de especificaciones técnicas y un plan de obra en fases que minimice la interrupción del trabajo diario. El tono debe ser técnico y creativo a la vez, mostrando tanto el rigor del evidence-based design como la visión estética del diseñador.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Rediseñar espacios de trabajo aplicando principios de bienestar y diseño biofílico con IA para optimizar el impacto en empleados.',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta consultiva de programas wellness corporativos con IA',
                'description'      => 'Desarrolla un proceso de venta consultiva para plataformas de bienestar corporativo, usando inteligencia artificial para personalizar propuestas y superar objeciones con datos de impacto.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con experiencia en venta B2B de soluciones de bienestar corporativo, HR Tech y beneficios para empleados. Gestiono un equipo de cinco account executives que venden una plataforma de bienestar corporativo a empresas de entre 100 y 3.000 empleados. Quiero desarrollar un proceso de venta consultiva moderno que use inteligencia artificial para personalizar cada propuesta y aumentar la tasa de cierre del 18% al 30%.

contexto: El ticket medio de la plataforma es de 12 euros por empleado al mes, con contratos de uno a tres años. Los ciclos de venta duran entre 30 y 90 días según el tamaño del cliente. Los decisores principales son el Director de RRHH y el CFO en empresas grandes, y el CEO directamente en empresas de menos de 200 empleados. Las objeciones más frecuentes son: el coste ("es mucho dinero para algo que no es core"), la adopción ("los empleados no lo usarán"), la privacidad ("no queremos datos de salud de nuestros empleados en una plataforma externa") y la medición del ROI ("¿cómo sé que esto funciona?").

tarea: Diseña el proceso de venta consultiva completo con los siguientes componentes:

1. PERFIL DE CLIENTE IDEAL Y SEÑALES DE COMPRA
Define tres perfiles de empresa compradora ideal (ICP) con sus características: empresa en crecimiento rápido que usa el bienestar como palanca de atracción de talento, empresa con problema de rotación elevada que busca soluciones de retención y empresa con cultura establecida de beneficios que quiere modernizar su propuesta de valor. Para cada ICP, identifica cinco señales de compra que indican que la empresa está lista para escuchar la propuesta (publicaciones en LinkedIn sobre cultura, apertura de posiciones de employer branding, reseñas en Glassdoor que mencionan el tema, noticias de crecimiento o inversión reciente).

2. PROCESO DE PROSPECCIÓN CON IA
Diseña el proceso de prospección: cómo usar herramientas de IA para identificar y cualificar leads (LinkedIn Sales Navigator, herramientas de intent data como Bombora, análisis de noticias del sector), cómo generar mensajes de outreach personalizados que conecten con el contexto específico de cada empresa (problema de rotación, apertura de nuevas sedes, campaña de employer branding reciente) y cómo estructurar la secuencia de contacto inicial. Proporciona tres ejemplos de mensajes de primer contacto para cada ICP.

3. METODOLOGÍA DE DISCOVERY
Diseña una reunión de discovery de 45 minutos con un flujo de preguntas consultivas: cinco preguntas de situación (entender el contexto de RRHH y la estrategia de personas), cinco preguntas de problema (identificar los dolores concretos relacionados con bienestar, rotación y absentismo), cinco preguntas de implicación (hacer que el cliente cuantifique el coste del problema) y tres preguntas de necesidad de solución (alinear los criterios de éxito del cliente con lo que la plataforma puede ofrecer). Incluye las respuestas esperadas y las señales de que la oportunidad es real vs. exploratoria.

4. PROPUESTA DE VALOR PERSONALIZADA CON IA
Describe cómo usar IA para generar propuestas comerciales hiperpersonalizadas en menos de dos horas: input necesario (datos del discovery, tamaño de empresa, sector, problema principal), cómo la IA puede calcular un ROI estimado personalizado (coste de rotación actual vs. reducción esperada con la plataforma, comparación con el coste de la solución), cómo generar el resumen ejecutivo adaptado al lenguaje del sector del cliente y cómo seleccionar los casos de éxito más relevantes de la base de datos. Proporciona un ejemplo de propuesta de una página generada con IA para una empresa de 300 empleados del sector tecnológico con problema de rotación.

5. MANEJO DE OBJECIONES CON DATOS
Desarrolla respuestas basadas en datos para las cuatro objeciones más frecuentes: (a) "es caro" — calcula el ROI con datos de reducción de absentismo (estudios muestran reducción del 25-30%) y de rotación evitada, (b) "los empleados no lo usarán" — muestra tasas de adopción de clientes similares y el plan de change management incluido, (c) "privacidad de datos" — explica la arquitectura de privacidad, anonimización de datos de empresa y cumplimiento RGPD con certificaciones, (d) "no veo el ROI" — proporciona la calculadora de ROI personalizada y el modelo de seguimiento trimestral de métricas. Para cada objeción, da tres respuestas alternativas según el perfil del interlocutor (RRHH, CFO, CEO).

6. ESTRUCTURA DE PRECIOS Y NEGOCIACIÓN
Diseña la estrategia de precios y negociación: tres planes de producto (starter, professional, enterprise) con diferenciación clara de valor por nivel, palancas de negociación (descuento por volumen, compromiso de plazo, pago anual adelantado, módulos adicionales como regalo), líneas rojas que no cruzar en la negociación y cómo manejar la presión de comparación con competidores. Proporciona una simulación de negociación de precio para un contrato de 500 empleados a tres años.

7. CIERRE Y ONBOARDING DEL CLIENTE
Diseña el proceso de cierre y los primeros noventa días del cliente: qué documentos preparar para acelerar la firma (propuesta comercial, contrato simplificado, DPA para RGPD, plan de lanzamiento), cómo hacer el handoff de ventas a éxito de cliente, cómo estructurar el kick-off con el cliente (participantes, agenda, entregables) y qué hitos de adopción hay que conseguir en los primeros 30, 60 y 90 días para garantizar la renovación. Describe cómo usar IA para monitorizar el riesgo de churn de clientes nuevos y actuar preventivamente.

8. MÉTRICAS DEL EQUIPO COMERCIAL
Define ocho KPIs del proceso de venta consultiva: tasa de conversión por etapa del funnel, velocidad del ciclo de venta, tamaño medio del contrato, ratio de demos a propuesta, ratio de propuesta a cierre, NPS de clientes en los primeros 90 días, tasa de renovación a 12 meses y net revenue retention. Diseña un dashboard semanal para el director comercial con alertas automáticas cuando un deal lleva más de 15 días sin avanzar.

Presenta el proceso con role-plays de conversaciones de venta, plantillas de email y propuesta listas para usar y un playbook de ventas en formato checklist. El tono debe ser consultivo y orientado al cliente, nunca agresivo ni transaccional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un proceso de venta consultiva de programas wellness con IA para aumentar la tasa de cierre y el ticket medio.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de plataformas de bienestar corporativo con IA',
                'description'      => 'Aplica metodologías de product management modernas para desarrollar funcionalidades de bienestar corporativo que generen engagement real y resultados medibles en la salud de los empleados.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en plataformas de salud digital y bienestar corporativo. Gestiono el producto de una plataforma de bienestar corporativo con 80.000 usuarios activos mensuales en 200 empresas clientes. El mayor reto del producto es el problema de retención a largo plazo: el 70% de los usuarios que activan su cuenta dejan de usar la plataforma antes de los tres meses, lo que pone en riesgo las renovaciones de los clientes empresa.

contexto: Los datos de uso muestran que los usuarios que superan los tres primeros meses de uso se quedan con una probabilidad del 85%. Los módulos con mejor retención son psicología online (usuarios que completan tres sesiones siguen activos) y retos de equipo (la componente social retiene mejor que el uso individual). Los módulos con peor retención son meditación guiada y seguimiento de actividad física, donde los usuarios tienen expectativas muy altas al inicio que no se cumplen. Los usuarios empresariales (RRHH) se quejan de que no ven suficiente impacto medible en los reportes para justificar la renovación.

tarea: Desarrolla una estrategia de producto para resolver el problema de retención con los siguientes componentes:

1. ANÁLISIS DE LA RAÍZ DEL PROBLEMA
Define un proceso de investigación de usuario de seis semanas para entender por qué abandonan: entrevistas en profundidad con diez usuarios que abandonaron antes de los tres meses (guión de entrevista con diez preguntas), análisis cuantitativo de datos de uso (qué eventos predicen el abandono, cuál es el momento crítico de la primera semana), encuesta de salida automática para usuarios que llevan 14 días inactivos y análisis de las transcripciones de soporte al cliente relacionadas con abandono. Describe cómo usar IA para identificar patrones en las transcripciones y priorizar las causas raíz.

2. DEFINICIÓN DE MÉTRICAS NORTH STAR
Redefine las métricas de producto con foco en outcomes de bienestar real, no solo en engagement superficial: propón una métrica North Star que capture el valor real generado para el usuario (por ejemplo: "porcentaje de usuarios que perciben mejora en su bienestar a los 90 días"), define los tres inputs que impulsan esa métrica y diseña un sistema de medición que permita trackearla sin ser invasivo para el usuario. Explica cómo la métrica North Star conecta con los KPIs de negocio (renovación de clientes, expansión de contratos).

3. REDISEÑO DEL ONBOARDING
Diseña un onboarding de 14 días que maximice la probabilidad de que el usuario llegue al "momento aha" (el punto donde entiende el valor real de la plataforma): qué pasos incluir en los primeros siete días, cómo personalizar el onboarding según el perfil del usuario y sus objetivos declarados, qué notificaciones enviar (y cuándo) para mantener el momentum, cómo usar IA para detectar usuarios en riesgo de abandono en la primera semana y activar intervenciones personalizadas y cómo involucrar al manager del usuario para crear accountability. Proporciona el flujo de onboarding en formato diagrama de texto.

4. FUNCIONALIDADES ANTI-ABANDONO CON IA
Diseña cuatro funcionalidades nuevas específicamente para mejorar la retención: (a) coach de IA proactivo que contacta al usuario en el momento correcto con el contenido correcto según su historial y contexto, (b) modo "cinco minutos" para usuarios con poco tiempo que ofrece micro-experiencias de alto impacto, (c) journeys guiados de ocho semanas con objetivos concretos y progresión visible y (d) sistema de compañero de bienestar que conecta a usuarios con objetivos similares para accountability mutuo. Para cada funcionalidad, define: problema que resuelve, hipótesis de impacto en retención, experimento para validarla y criterio de éxito mínimo.

5. MEJORA DEL DASHBOARD PARA CLIENTES EMPRESA
Rediseña el dashboard de reporting para los clientes RRHH para que muestre impacto medible en el negocio: qué métricas incluir (adopción, engagement, bienestar autopercibido, correlación con absentismo, ROI estimado en ahorro de costes de rotación), cómo presentar los datos de forma que cuenten una historia de impacto sin violar la privacidad individual, qué alertas proactivas enviar al cliente cuando el uso baja y cómo usar IA para generar narrativas automáticas del informe mensual que el cliente pueda compartir con la dirección.

6. ESTRATEGIA DE EXPERIMENTACIÓN
Diseña un framework de experimentación para mejorar la retención: cómo priorizar los experimentos (impacto esperado x confianza x facilidad de implementación), qué cadencia de experimentos es sostenible (dos por semana en features pequeñas, uno por mes en features grandes), cómo diseñar experimentos en una plataforma de salud respetando la ética (no exponer a usuarios vulnerables a versiones sin probar, no manipular estados emocionales), cómo medir los resultados con poder estadístico suficiente y cómo institucionalizar el aprendizaje. Proporciona el diseño de tres experimentos específicos para probar las funcionalidades anti-abandono propuestas.

7. ROADMAP TRIMESTRAL
Diseña el roadmap de los próximos seis meses orientado a mejorar la retención de día 30 del 30% al 45% y de día 90 del 30% al 50%: qué funcionalidades construir en cada trimestre, qué infraestructura de datos hay que preparar primero, cómo balancear la mejora de retención con el desarrollo de nuevas funcionalidades para la renovación de clientes y cómo comunicar el roadmap a los clientes de forma que genere confianza y reduzca el churn anticipado.

8. MÉTRICAS DE PRODUCTO
Define diez métricas de producto agrupadas en tres categorías: métricas de adquisición de hábito (días activos en primeras cuatro semanas, porcentaje que completa el onboarding, porcentaje que usa dos o más módulos), métricas de retención (retención en día 7, 30 y 90, reactivación de usuarios inactivos) y métricas de impacto (bienestar autopercibido a los 90 días, NPS de usuarios activos, correlación absentismo). Para cada métrica, proporciona el benchmark actual, el objetivo a seis meses y la acción concreta que moverá la aguja.

Presenta todo con el rigor metodológico de un PM senior: hipótesis claras, métricas de éxito definidas y un plan de ejecución realista que el equipo de ingeniería pueda implementar. El tono debe equilibrar la visión de producto con la ejecución práctica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la estrategia de producto para resolver el problema de retención en plataformas de bienestar corporativo con IA.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión estratégica de programas de bienestar corporativo con IA para RRHH',
                'description'      => 'Diseña, implementa y mide programas de bienestar corporativo integrales usando inteligencia artificial para personalizar intervenciones y demostrar el ROI a la dirección.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en bienestar organizacional y people analytics con experiencia en el diseño e implementación de programas de bienestar corporativo integral en empresas de tamaño medio. Soy directora de RRHH en una empresa de servicios financieros de 400 empleados y necesito diseñar un programa de bienestar de clase mundial que sea sostenible, medible y que la dirección perciba como una inversión estratégica, no como un gasto.

contexto: La empresa tiene un problema creciente de bienestar: el absentismo por causas relacionadas con el estrés ha subido un 35% en dos años, la encuesta de clima de este año muestra que el 42% de los empleados se siente "quemado" o al límite del burnout y en los exit interviews, el agotamiento aparece como segunda razón de salida voluntaria (después de la compensación). La dirección ha aprobado un presupuesto de 150.000 euros anuales para el programa de bienestar, pero exige que se mida el ROI con claridad antes del segundo año.

tarea: Diseña el programa de bienestar corporativo completo con los siguientes componentes:

1. DIAGNÓSTICO DE BIENESTAR ORGANIZACIONAL
Diseña un diagnóstico completo en tres capas: (a) capa individual — encuesta de bienestar de 20 ítems que mida las cinco dimensiones del bienestar de Gallup (bienestar en el trabajo, social, financiero, físico y comunitario), indicadores de burnout según el modelo de Maslach y factores protectores, (b) capa de equipo — análisis de dinámica de equipos, estilos de liderazgo que generan agotamiento vs. los que protegen y distribución de la carga de trabajo y (c) capa organizacional — análisis de políticas, procesos y cultura que contribuyen al malestar. Explica cómo usar IA para analizar los datos del diagnóstico, identificar grupos de riesgo y generar recomendaciones priorizadas.

2. DISEÑO DEL PROGRAMA INTEGRAL
Diseña un programa de bienestar con cuatro pilares: (a) pilar mental — acceso a psicología online, programa de mindfulness de ocho semanas, talleres de manejo del estrés y gestión de la incertidumbre y protocolo de apoyo en crisis, (b) pilar físico — convenios con gimnasios, clases online de fitness y yoga, ergonomía en el puesto de trabajo y seguimiento de actividad con wearables voluntarios, (c) pilar social — programa de mentoring entre pares, actividades de team building de impacto social, espacios de conexión informal potenciados por diseño y programa de voluntariado corporativo y (d) pilar financiero — educación financiera, asesoramiento de pensiones y planificación financiera personal. Para cada pilar, indica el proveedor o solución recomendada, el coste aproximado dentro del presupuesto de 150.000 euros y el indicador de uso y satisfacción.

3. MODELO DE INTERVENCIÓN CON IA
Describe cómo usar IA para personalizar el programa: (a) identificación de empleados en riesgo de burnout a partir de señales de RRHH (absentismo, productividad, historial de bajas, feedback del manager) sin violar la privacidad y con supervisión humana obligatoria, (b) recomendaciones personalizadas de recursos según el perfil de riesgo y las preferencias del empleado, (c) seguimiento de la evolución individual con alertas tempranas para el responsable de bienestar y (d) ajuste dinámico del programa según los datos de uso y efectividad. Define los límites éticos del uso de IA en bienestar: qué datos se pueden usar, quién tiene acceso a qué información y cómo se comunica a los empleados.

4. ROL DE LOS MANAGERS
Diseña un programa de formación para managers como primera línea de bienestar: (a) taller de ocho horas en tres sesiones sobre cómo detectar señales de malestar en el equipo, cómo tener conversaciones difíciles sobre bienestar y cómo ajustar las condiciones de trabajo para proteger el bienestar sin perder productividad, (b) kit de herramientas para el manager — checklist mensual de bienestar del equipo, guía de conversaciones de bienestar y protocolos de derivación a RRHH o psicología y (c) accountability del manager en bienestar: cómo incluir indicadores de bienestar del equipo en la evaluación del manager sin que genere gaming de los datos.

5. COMUNICACIÓN Y ADOPCIÓN
Diseña la estrategia de comunicación del programa para el año uno: lanzamiento con mensaje del CEO que conecte el bienestar con la estrategia de negocio, comunicación mensual de novedades y recursos disponibles, testimonios auténticos de empleados que se han beneficiado del programa y reconocimiento de managers que promueven el bienestar. Describe cómo usar IA para personalizar las comunicaciones por departamento, perfil de riesgo y módulos más relevantes para cada empleado.

6. GOBERNANZA DEL PROGRAMA
Define la estructura de gobernanza: (a) comité de bienestar con representación de RRHH, dirección, empleados y representantes sindicales si los hay, (b) responsable de bienestar interno (descripción del perfil, dedicación, competencias clave), (c) proceso de revisión trimestral del programa con criterios de ajuste y (d) protocolo de actuación en situaciones de crisis de salud mental (intento de suicidio, crisis aguda, acoso) con roles y responsabilidades claros. Proporciona una política de bienestar corporativo de una página lista para aprobar por la dirección.

7. MEDICIÓN DEL ROI
Diseña el modelo de ROI del programa: (a) costes totales del programa (plataforma, formación, horas de RRHH, comunicación), (b) beneficios cuantificables — reducción del absentismo (cada día de reducción equivale a X euros según salario medio), reducción de la rotación (cada empleado retenido ahorra Y euros en costes de reemplazo), reducción de accidentes laborales relacionados con el estrés y mejora de la productividad autopercibida — y (c) cálculo del ROI esperado a uno y tres años con rangos de confianza según los rangos de efectividad reportados en la literatura. Proporciona un one-pager de ROI para presentar a la dirección con el lenguaje del negocio.

8. PLAN DE IMPLEMENTACIÓN EN 12 MESES
Diseña el plan de implementación trimestre a trimestre: T1 diagnóstico y diseño del programa, T2 lanzamiento de los pilares mental y social con los primeros datos de uso, T3 incorporación del pilar físico y financiero y formación de managers y T4 revisión de resultados, ajuste del programa y presentación del informe de ROI a la dirección. Para cada trimestre, indica los hitos clave, los recursos necesarios y los criterios de éxito.

Presenta el programa con presupuesto detallado, ejemplos de comunicaciones internas listas para usar y un modelo de informe de ROI ejecutivo. El tono debe ser estratégico y orientado al impacto de negocio, sin perder la perspectiva humanista del bienestar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar e implementar un programa de bienestar corporativo integral con IA que demuestre ROI medible a la dirección.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelo de ROI financiero para programas de bienestar corporativo con IA',
                'description'      => 'Construye un modelo financiero riguroso para calcular el retorno de la inversión de programas de bienestar corporativo, usando IA para proyectar escenarios y presentar el caso de negocio a la dirección.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero con experiencia en evaluación de inversiones en capital humano y people analytics. La directora de RRHH me pide apoyo para construir el modelo de ROI de un programa de bienestar corporativo con un presupuesto de 150.000 euros anuales para 400 empleados. El CFO quiere un análisis riguroso antes de aprobar la inversión para el segundo año y necesita números, no solo narrativa.

contexto: Empresa de servicios financieros, 400 empleados, salario medio de 52.000 euros brutos anuales. Datos actuales del problema: absentismo promedio de 9,2 días por empleado al año (benchmark del sector: 6,5 días), rotación voluntaria del 18% anual (benchmark: 12%), 42% de empleados en riesgo de burnout según encuesta interna y dos bajas por estrés crónico en el último año que duraron una media de 65 días cada una. El programa de bienestar previsto incluye psicología online, plataforma de mindfulness, formación de managers y programa de actividad física.

tarea: Construye el modelo de ROI completo con los siguientes módulos:

1. CUANTIFICACIÓN DEL COSTE DEL PROBLEMA
Calcula el coste actual del problema de bienestar en cinco categorías: (a) coste del absentismo — (días de absentismo actuales menos benchmark del sector) multiplicado por (salario diario medio más costes de seguridad social más coste de sustitución), (b) coste de la rotación — número de bajas voluntarias al año multiplicado por coste total de reemplazo (reclutamiento, onboarding, curva de productividad, conocimiento perdido), (c) coste de la baja productividad por presentismo — estimación del porcentaje de productividad perdida por empleados presentes pero desenganchados (estudios sugieren entre 20% y 40% en empleados con burnout) multiplicado por la masa salarial correspondiente, (d) coste de bajas de larga duración — días de baja por estrés y salud mental multiplicados por costes directos más indirectos y (e) coste del riesgo legal — provisión para posibles reclamaciones por acoso o condiciones laborales inadecuadas. Proporciona las fórmulas de cada cálculo y los valores numéricos para el caso concreto.

2. ESTIMACIÓN DEL IMPACTO DEL PROGRAMA
Basándote en la evidencia científica disponible sobre programas de bienestar corporativo, estima el impacto esperado en cada área: (a) reducción del absentismo — meta-análisis muestran reducciones del 25% al 30% en programas bien implementados; calcula el rango para este caso, (b) reducción de la rotación — programas de bienestar con fuerte componente de salud mental reducen la rotación entre el 15% y el 25%; calcula el rango, (c) mejora de la productividad — estudios de RAND y Gallup estiman mejoras del 10% al 20% en productividad de empleados que usan programas de bienestar regularmente y (d) reducción de bajas de larga duración — programas de intervención temprana reducen la duración y frecuencia de bajas entre el 30% y el 50%. Para cada estimación, usa el rango conservador, el moderado y el optimista.

3. MODELO DE ROI A 3 AÑOS
Construye la tabla de ROI a tres años con los tres escenarios (conservador, moderado, optimista): inversión anual del programa (150.000 euros año 1, con incremento del 5% anual por expansión), ahorro en absentismo por año, ahorro en rotación por año, mejora de productividad valorada en euros y reducción de costes de bajas de larga duración. Calcula para cada escenario y año: ahorro total, coste del programa, ROI neto y ROI en porcentaje. Añade el cálculo del payback period (cuándo la inversión se recupera). Presenta en formato tabla con totales por año y acumulado.

4. ANÁLISIS DE SENSIBILIDAD
Construye un análisis de sensibilidad para las tres variables más inciertas: tasa de adopción del programa (si solo el 30% usa el programa vs. el 60% vs. el 80%), tasa de reducción del absentismo (escenario pesimista del 15% vs. moderado del 25% vs. optimista del 35%) y coste de reemplazo de empleado (si el coste de rotación es menor o mayor del estimado). Para cada combinación de variables críticas, muestra el ROI resultante. Identifica el punto de break-even (tasa de adopción mínima para que el programa sea rentable).

5. MÉTRICAS FINANCIERAS ADICIONALES
Calcula métricas financieras complementarias para la presentación a la dirección: VAN (Valor Actual Neto) del programa a tres años con tasa de descuento del 8%, TIR (Tasa Interna de Retorno), coste por empleado por día de uso del programa y comparación con el coste de alternativas (contratar un empleado adicional de RRHH, subir los salarios un 5% para retener). Presenta también el benchmark de ROI de programas de bienestar en el sector financiero (estudios de Deloitte, PwC y RAND muestran ROIs de entre 2:1 y 5:1 según el programa y la implementación).

6. USO DE IA PARA EL MODELO
Describe cómo usar IA para: (a) actualizar el modelo automáticamente con datos reales trimestrales (conectar con el HRIS para obtener datos de absentismo y rotación actualizados), (b) generar proyecciones de escenarios adicionales con diferentes supuestos de implementación y (c) identificar qué intervenciones específicas del programa tienen mayor impacto en el ROI según los datos de uso real. Proporciona un ejemplo de instrucción para que la IA actualice la narrativa del informe de ROI con los datos del último trimestre.

7. PRESENTACIÓN EJECUTIVA DEL CASO DE NEGOCIO
Diseña una presentación de cinco diapositivas para el comité de dirección: (1) el problema en números (costes actuales del malestar), (2) la solución propuesta (descripción del programa y presupuesto), (3) el ROI esperado (tabla de tres escenarios), (4) el plan de implementación y métricas de seguimiento y (5) la propuesta de decisión. Para cada diapositiva, proporciona el título, los tres puntos clave y el visual principal recomendado. Proporciona el texto del one-pager ejecutivo que se enviará antes de la reunión.

8. SISTEMA DE SEGUIMIENTO DEL ROI REAL
Diseña el sistema para medir el ROI real del programa una vez implementado: (a) baseline — medir todos los indicadores antes del lanzamiento del programa, (b) seguimiento trimestral — qué datos recoger, de qué fuentes (HRIS, nómina, seguridad social, encuestas) y quién es responsable, (c) análisis de atribución — cómo aislar el impacto del programa de bienestar de otros factores (mejora del mercado laboral, cambios en la estrategia de negocio) y (d) informe anual de ROI — estructura del informe para presentar a la dirección con comparación de resultados reales vs. proyectados.

Presenta el modelo con tablas numéricas completas, fórmulas de cálculo y un nivel de rigor adecuado para la presentación a un CFO exigente. El tono debe ser financieramente preciso, usando el lenguaje y la metodología de evaluación de inversiones corporativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir el modelo financiero de ROI de un programa de bienestar corporativo para presentar el caso de negocio a la dirección con rigor analítico.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal del bienestar corporativo y prevención de riesgos psicosociales con IA',
                'description'      => 'Analiza el marco normativo de la prevención de riesgos psicosociales en España y diseña un programa de compliance que proteja a la empresa y garantice el bienestar de los empleados.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado laboralista especializado en prevención de riesgos laborales y en el marco legal del bienestar corporativo en España. Asesoro a una empresa de servicios de 400 empleados que quiere implementar un programa de bienestar corporativo y necesita entender sus obligaciones legales, los riesgos de no actuar y cómo usar la tecnología (incluida la IA) de forma legal para gestionar el bienestar de sus empleados.

contexto: La empresa ha detectado indicadores de riesgo psicosocial (estrés, burnout, conflictos de equipo) y quiere implementar un programa de bienestar corporativo que incluya psicología online, formación de managers, encuestas de bienestar y uso de IA para detectar riesgos de burnout. El director legal quiere asegurarse de que todos estos elementos cumplan con la normativa y no generen responsabilidades adicionales.

tarea: Desarrolla el análisis legal completo con los siguientes apartados:

1. OBLIGACIONES LEGALES EN PREVENCIÓN DE RIESGOS PSICOSOCIALES
Analiza el marco normativo aplicable en España: (a) Ley de Prevención de Riesgos Laborales (31/1995) y sus obligaciones específicas respecto a los riesgos psicosociales, (b) criterio técnico del INSST sobre evaluación de riesgos psicosociales y las metodologías reconocidas (FPSICO, ISTAS21, COPSOQ), (c) obligaciones del empresario en materia de estrés laboral y burnout tras la inclusión del síndrome de estar quemado en la CIE-11, (d) ley de igualdad y su relación con los riesgos psicosociales diferenciados por género y (e) normativa sobre desconexión digital (artículo 88 de la LOPDGDD) y sus implicaciones prácticas para empresas con teletrabajo. Para cada normativa, explica las obligaciones concretas de la empresa y las sanciones por incumplimiento (tipología de infracciones: leves, graves y muy graves según la LISOS).

2. EVALUACIÓN DE RIESGOS PSICOSOCIALES
Describe el proceso legal de evaluación de riesgos psicosociales: quién puede hacerla (técnicos de prevención con habilitación específica, delegados de prevención, Servicio de Prevención), qué metodologías son aceptadas por la jurisprudencia española, cómo documentar el proceso y los resultados para que sirvan como prueba de diligencia debida, qué plazos hay para adoptar las medidas correctoras y cómo comunicar los resultados a los trabajadores respetando la privacidad. Explica el papel del Comité de Seguridad y Salud en el proceso y cómo involucrar a la representación de los trabajadores.

3. USO LEGAL DE IA EN LA GESTIÓN DEL BIENESTAR
Analiza los límites legales del uso de IA para monitorizar y gestionar el bienestar de los empleados: (a) qué datos de los empleados se pueden usar para alimentar sistemas de IA de bienestar (datos de HRIS, resultados de encuestas voluntarias, historial de absentismo) y cuáles no (datos de salud directos, comunicaciones privadas, datos de actividad en dispositivos personales), (b) bases jurídicas del tratamiento de datos de bienestar según el RGPD (cuándo aplica el consentimiento, cuándo el interés legítimo, por qué nunca la ejecución del contrato para datos de salud), (c) qué obligaciones impone el AI Act para sistemas de IA que evalúan el estado emocional o de bienestar de los trabajadores (clasificados como alto riesgo en el Anexo III del Reglamento) y (d) cómo debe informarse a los trabajadores del uso de IA para valorar su bienestar y qué derechos tienen. Proporciona un modelo de cláusula informativa para incluir en el contrato de trabajo.

4. PROTOCOLO DE PREVENCIÓN DEL ACOSO LABORAL Y SEXUAL
Analiza las obligaciones legales en materia de protocolo de acoso: qué exige la Ley Orgánica de garantía integral de la libertad sexual (LO 10/2022) en materia de protocolo de acoso sexual y por razón de sexo, qué debe incluir el protocolo para que sea legalmente válido, cómo se articula el procedimiento de denuncia y su tramitación (plazos, garantías de confidencialidad, presunción de inocencia) y cuáles son las sanciones para la empresa que no tenga protocolo o que no lo aplique. Proporciona un esquema del protocolo de acoso que cumpla con todos los requisitos legales.

5. TELETRABAJO Y BIENESTAR: OBLIGACIONES ESPECÍFICAS
Analiza las obligaciones específicas de la Ley de Trabajo a Distancia (10/2021) relacionadas con el bienestar: (a) evaluación de riesgos ergonómicos y psicosociales del puesto de trabajo en domicilio, (b) derecho a la desconexión digital y cómo debe implementarse en la práctica, (c) compensación de gastos y su relación con el bienestar (si la empresa no compensa gastos, puede argumentarse que afecta al bienestar), (d) igualdad de derechos de los teletrabajadores respecto a los presenciales en acceso a programas de bienestar y formación y (e) control del tiempo de trabajo en teletrabajo: qué sistemas son legales, cuáles están prohibidos (especialmente los que monitorean la actividad del ordenador o la cámara) y cómo puede la IA usarse legalmente en el registro de jornada.

6. RESPONSABILIDAD EMPRESARIAL EN CASOS DE BURNOUT
Analiza la evolución jurisprudencial española sobre responsabilidad empresarial en casos de burnout y estrés laboral: (a) cuándo el burnout se considera accidente de trabajo vs. enfermedad común y sus implicaciones económicas, (b) criterios jurisprudenciales del Tribunal Supremo y TSJs para atribuir responsabilidad a la empresa, (c) qué medidas preventivas documentadas reducen la responsabilidad empresarial y (d) cómo prepararse para una posible inspección de trabajo relacionada con riesgos psicosociales. Proporciona un checklist de medidas que la empresa debe tener documentadas para demostrar diligencia debida.

7. CONTRATOS CON PROVEEDORES DE SERVICIOS DE BIENESTAR
Analiza las cláusulas esenciales que deben incluirse en los contratos con proveedores de plataformas de bienestar y psicología online: (a) cláusula de encargado del tratamiento de datos de salud (qué debe incluir según el artículo 28 del RGPD), (b) garantías de confidencialidad de las sesiones de psicología (secreto profesional del psicólogo y límites del acceso de la empresa a la información), (c) localización del procesamiento de datos y transferencias internacionales, (d) protocolos de actuación en situaciones de crisis de salud mental (qué debe hacer el proveedor, qué debe saber la empresa sin violar la confidencialidad) y (e) responsabilidades en caso de brecha de seguridad con datos de salud. Proporciona una lista de preguntas que la empresa debe hacer a cualquier proveedor antes de firmar el contrato.

8. PROGRAMA DE COMPLIANCE EN TRES FASES
Diseña un programa de compliance en bienestar y prevención de riesgos psicosociales en tres fases: fase 1 de diagnóstico legal (auditoría de la situación actual, identificación de brechas respecto a la normativa), fase 2 de implementación de medidas (priorización por riesgo, cronograma, responsables) y fase 3 de mantenimiento y actualización (seguimiento de cambios normativos, revisión periódica del programa, formación continua del equipo). Para cada fase, indica los entregables concretos, el tiempo estimado y los recursos necesarios (internos vs. externos).

Presenta el análisis con referencias legales específicas (artículos, sentencias relevantes, criterios técnicos del INSST), ejemplos prácticos y plantillas de documentos (protocolo de acoso, cláusula informativa de IA, checklist de diligencia debida). El tono debe ser riguroso jurídicamente pero comprensible para equipos de RRHH y dirección sin formación legal especializada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar un programa de compliance legal para la gestión del bienestar corporativo y la prevención de riesgos psicosociales en España.',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al empleado con IA en programas de bienestar corporativo',
                'description'      => 'Diseña un modelo de atención y soporte al empleado en programas de bienestar corporativo que combine la eficiencia de la IA con la empatía humana para maximizar el uso y el impacto del programa.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en diseño de experiencias de empleado y en la implementación de modelos de soporte en programas de bienestar corporativo. Soy responsable de la experiencia del empleado (EX) en una empresa de 500 personas y acabo de lanzar una plataforma de bienestar corporativo que no está teniendo la adopción esperada: solo el 25% de los empleados ha activado su cuenta tres meses después del lanzamiento. Necesito un modelo de soporte y acompañamiento que suba la adopción al 60% en los próximos dos meses.

contexto: Los principales motivos de no adopción detectados en entrevistas rápidas son: "no sé muy bien para qué sirve exactamente", "empecé a usarla pero no encontré lo que buscaba", "me da pereza registrarme", "no sé si mis datos están seguros" y "mi manager no nos anima a usarla". La plataforma ofrece psicología online, mindfulness, fitness y nutrición. El equipo de soporte actual son dos personas de RRHH que ya están saturadas con otras responsabilidades.

tarea: Diseña el modelo de soporte al empleado completo con los siguientes componentes:

1. ANÁLISIS DE BARRERAS Y SEGMENTACIÓN
Clasifica los 500 empleados en cuatro grupos según su relación con el programa: (a) adoptadores activos (25% que ya usan la plataforma — son el activo más valioso para la campaña de activación), (b) interesados pero no activados (aproximadamente el 35%, que mostraron interés pero no dieron el paso), (c) escépticos (aproximadamente el 25%, que no ven el valor o desconfían) y (d) resistentes (aproximadamente el 15%, que tienen una razón específica para no participar — falta de tiempo real, privacidad, problemas técnicos). Para cada grupo, define la barrera principal y la intervención de soporte más efectiva.

2. MODELO DE SOPORTE HÍBRIDO IA-HUMANO
Diseña un modelo de atención en tres niveles: (a) nivel 1 IA — chatbot que responde preguntas frecuentes, guía el proceso de activación paso a paso, recomienda el módulo más adecuado según las necesidades del empleado y hace seguimiento automatizado a quienes no han activado la cuenta, (b) nivel 2 humano básico — los dos miembros del equipo de RRHH atienden consultas que la IA no puede resolver, gestionan incidencias y realizan outreach personalizado a empleados de alto potencial de conversión y (c) nivel 3 humano especializado — derivación a psicólogo, coach o especialista del proveedor para consultas de bienestar que requieren atención profesional. Define qué tipos de consulta van a cada nivel y el tiempo de respuesta objetivo para cada uno.

3. FLUJO DE ACTIVACIÓN ASISTIDA
Diseña un flujo de activación asistida por IA para el grupo de "interesados pero no activados": (a) mensaje personalizado con el módulo más relevante según el departamento y el perfil del empleado (deducido de datos de RRHH anonimizados, no de datos personales de salud), (b) guía de onboarding en cuatro pasos con explicación de qué hace cada módulo y para qué puede servirle, (c) primera sesión guiada de demostración de 10 minutos que muestre el valor de forma inmediata y (d) seguimiento a los 3, 7 y 14 días para ver si el empleado ha tenido alguna duda o problema. Proporciona los textos de las comunicaciones de cada paso, con un tono cercano y sin presión.

4. PROGRAMA DE ACTIVACIÓN CON EMBAJADORES
Diseña un programa de embajadores que use a los adoptadores activos (25%) como fuente de activación orgánica: (a) cómo identificar y reclutar a los diez embajadores más entusiastas (criterios: uso frecuente de la plataforma, perfil sociable, credibilidad entre sus pares), (b) qué formación darles en 90 minutos para que puedan responder preguntas básicas y compartir su experiencia de forma auténtica, (c) qué herramientas darles (kit de materiales, canal de embajadores en Slack, acceso a reporte de uso de su departamento) y (d) cómo reconocer su contribución sin que parezca que son pagados para hacer publicidad. Incluye el guión de conversación que un embajador podría usar en la máquina del café para animar a un compañero a probar la plataforma.

5. SOPORTE A MANAGERS COMO PALANCA DE ACTIVACIÓN
Diseña un programa de soporte a managers que convierte el rechazo del manager en apoyo activo: (a) sesión de 45 minutos para managers sobre cómo hablar de bienestar con su equipo sin que parezca paternalista, (b) kit mensual para el manager — tres conversaciones cortas que puede tener con su equipo sobre bienestar (cómo está el equipo esta semana, qué recursos han usado, qué les ha parecido útil), (c) dashboard simplificado de adopción por equipo (sin datos individuales) que el manager puede usar para saber si su equipo está usando la plataforma y (d) cómo reconocer públicamente a los equipos con mayor adopción sin crear presión sobre los que tienen menor adopción.

6. GESTIÓN DE CONSULTAS SENSIBLES
Define el protocolo para situaciones de soporte que implican temas de salud mental delicados: (a) cómo entrena el chatbot de IA para detectar señales de crisis (palabras clave, patrones de conversación) y derivar inmediatamente a un humano, (b) cómo se documenta y gestiona la derivación (qué sabe el especialista humano cuando recibe el caso, sin que el empleado tenga que repetir todo), (c) protocolo de seguimiento post-derivación (saber que el empleado fue atendido sin acceder al contenido de la conversación) y (d) qué hacer cuando un empleado contacta al soporte en un estado de crisis aguda (protocolo de emergencia, teléfono de atención en crisis, coordinación con RRHH y dirección).

7. COMUNICACIÓN CONTINUA DEL VALOR
Diseña el plan de comunicación mensual para mantener el engagement después del lanzamiento: newsletter mensual de bienestar con tips prácticos, recurso del mes y testimonio de un empleado, reto mensual compartido en Slack con seguimiento y celebración pública de los participantes, recordatorio personalizado del módulo más usado por cada empleado y resumen de impacto del programa (cuántas sesiones se han realizado, cuántos empleados activos, sin datos individuales). Describe cómo usar IA para personalizar cada comunicación según el perfil de uso del empleado y los módulos que más le interesan.

8. MÉTRICAS DEL MODELO DE SOPORTE
Define ocho métricas del modelo de soporte con objetivos específicos para los próximos 60 días: tasa de activación semanal (objetivo: subir del 25% al 60%), tasa de resolución del chatbot en nivel 1 (objetivo: 70% sin escalar), tiempo de respuesta en nivel 2 (objetivo: menos de cuatro horas en días laborables), NPS del proceso de activación (objetivo: superior a 40), tasa de reenganche de usuarios que habían abandonado (objetivo: 20% de usuarios inactivos vuelven a usar el programa), satisfacción con el soporte recibido (objetivo: 4,2 sobre 5), número de conversiones atribuidas a embajadores y cobertura de managers activos en el programa (objetivo: 80%). Diseña un dashboard semanal para el responsable de EX con alertas automáticas cuando los indicadores están fuera de objetivo.

Presenta el modelo con flujos de conversación del chatbot, plantillas de comunicación listas para personalizar y un plan de ejecución semanal para los próximos 60 días. El tono debe ser empático y orientado a la experiencia del empleado, nunca coercitivo ni paternalista.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un modelo de soporte híbrido IA-humano para triplicar la adopción de programas de bienestar corporativo en dos meses.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de bienestar corporativo freelance con IA: guía de negocio',
                'description'      => 'Construye un negocio rentable de consultoría de bienestar corporativo como freelancer usando inteligencia artificial para diferenciarte, escalar tus servicios y demostrar impacto medible a tus clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de bienestar corporativo freelancer con diez años de experiencia en el sector y como mentor de profesionales independientes que quieren construir un negocio rentable en el espacio de HR wellness. Quiero dejar mi trabajo corporativo como responsable de bienestar en una gran empresa y montar mi propia consultoría de bienestar corporativo, diferenciándome por el uso intensivo de herramientas de inteligencia artificial para ofrecer servicios más rápidos, personalizados y con impacto medible.

contexto: Tengo siete años de experiencia en RRHH y bienestar corporativo en una empresa de 2.000 empleados, donde he liderado la implementación de un programa de bienestar que redujo el absentismo un 22% y mejoró el NPS de empleados de 28 a 47 puntos en dos años. Tengo red de contactos en el sector, una red LinkedIn de 4.000 seguidores en RRHH y bienestar y ya he recibido tres consultas informales de empresas que querrían contratarme. Mi objetivo es facturar 80.000 euros en el primer año y 150.000 en el segundo.

tarea: Diseña el plan de negocio completo para la consultoría con los siguientes módulos:

1. PROPUESTA DE VALOR Y POSICIONAMIENTO
Define el posicionamiento diferencial de la consultoría: (a) el nicho específico (tipo de empresa, sector, tamaño, problema de bienestar que más sabes resolver), (b) por qué el uso de IA te diferencia de otros consultores independientes (qué puedes hacer tú con IA que ellos no pueden o no hacen), (c) la promesa de resultado (qué resultado concreto y medible puede esperar el cliente en 90 días) y (d) el nombre y la identidad visual de la consultoría (propón tres opciones de nombre con su razón de ser). Redacta el elevator pitch de 60 segundos para cuando alguien te pregunte a qué te dedicas y la bio profesional de LinkedIn de 300 palabras.

2. CATÁLOGO DE SERVICIOS Y PRECIOS
Diseña el catálogo de servicios con cuatro líneas de producto: (a) diagnóstico de bienestar (encuesta, análisis con IA, informe de resultados y plan de acción) — precio sugerido entre 3.000 y 6.000 euros, duración cuatro semanas, (b) diseño e implementación de programa de bienestar (programa completo de 90 días, formación de managers, selección de proveedores y seguimiento) — precio entre 12.000 y 25.000 euros según el tamaño de la empresa, (c) retainer mensual de consultoría de bienestar (acceso mensual de ocho horas, reports mensuales de ROI, ajuste continuo del programa) — precio entre 1.500 y 3.500 euros al mes y (d) formación para managers en bienestar y prevención del burnout (taller de medio día o día completo) — precio entre 1.800 y 3.500 euros por sesión. Para cada servicio, define el entregable exacto, el tiempo de ejecución y las condiciones de pago.

3. FLUJO DE TRABAJO CON IA POR SERVICIO
Para cada servicio del catálogo, describe en detalle cómo usas IA para ejecutarlo más rápido y con mayor calidad: (a) diagnóstico — análisis de encuestas con IA para identificar patrones y grupos de riesgo, generación automática del informe de diagnóstico con narrativa personalizada, benchmarking automatizado con datos del sector, (b) diseño del programa — generación de opciones de programa adaptadas al perfil de la empresa, redacción de comunicaciones internas, creación de materiales de formación personalizados y (c) retainer — generación automática del informe mensual de ROI a partir de los datos del cliente, alertas proactivas de riesgo y preparación de reuniones mensuales. Calcula el tiempo ahorrado por IA en cada servicio y el impacto en tu margen.

4. ADQUISICIÓN DE CLIENTES EN LOS PRIMEROS 90 DÍAS
Diseña el plan de lanzamiento comercial para conseguir los primeros tres clientes: (a) activación de la red de contactos — cómo contactar a las tres personas que ya mostraron interés y a los quince contactos más relevantes de tu red LinkedIn con un mensaje personal y una oferta de lanzamiento, (b) creación de contenido de autoridad en LinkedIn — plan de contenido de 12 semanas con los temas que más generan engagement entre directores de RRHH (casos de éxito propios anonimizados, datos de impacto de programas de bienestar, errores comunes que cometen las empresas, tendencias de HR wellness) y (c) alianzas estratégicas — con qué proveedores de plataformas de bienestar, consultoras de RRHH y gestorías laborales puedes hacer acuerdos de referidos. Proporciona el calendario semanal de actividades comerciales en el primer mes.

5. METODOLOGÍA DE ENTREGA Y HERRAMIENTAS
Define la metodología de trabajo con clientes: (a) proceso de onboarding del cliente (reunión de kick-off, plantilla de briefing, acceso a los sistemas necesarios, acuerdo de confidencialidad), (b) framework de diagnóstico propio (cómo se llama, cuáles son sus fases, qué lo hace diferente de otros diagnósticos del mercado), (c) stack de herramientas digitales para la consultoría (Claude para análisis y redacción, herramienta de encuestas, CRM, facturación, gestión de proyectos, videollamadas) y (d) plantillas propias reutilizables que se pueden personalizar con IA en menos de dos horas (informe de diagnóstico, plan de bienestar, informe de ROI, propuesta comercial). Calcula el coste mensual del stack de herramientas.

6. MODELO FINANCIERO DEL PRIMER AÑO
Construye el modelo financiero mes a mes para el primer año: proyección de ingresos según los servicios vendidos (supón que consigues un cliente de diagnóstico en el mes uno, el primer cliente de programa completo en el mes dos, el primer retainer en el mes cuatro y que añades un taller de formación por mes a partir del mes tres), gastos fijos (herramientas, gestoría, seguros, formación propia), gastos variables (viajes a clientes, materiales) y cash flow mensual. Calcula el mes de break-even y el margen neto estimado al final del año. Proporciona también el plan de contingencia si los ingresos tardan más en llegar (colchón mínimo necesario, clientes de emergencia, servicios de menor precio para cubrir el cash flow).

7. CONSTRUCCIÓN DE AUTORIDAD Y MARCA PERSONAL
Diseña el plan de construcción de marca personal a 12 meses: (a) LinkedIn — frecuencia de publicación (mínimo tres posts semanales), tipos de contenido (casos de éxito, datos, opiniones de tendencia, behind the scenes de tu trabajo), métricas de seguimiento (seguidores, impresiones, engagement, leads generados), (b) newsletter mensual de bienestar corporativo — tema, formato, call to action y cómo usarla para nutrir a potenciales clientes, (c) participación en eventos del sector (tres conferencias de RRHH como ponente o asistente activo), (d) caso de éxito propio publicado en formato one-pager descargable y (e) podcast o videocast sobre bienestar corporativo (opcional, evalúa si compensa en tiempo). Define qué KPIs de marca personal revisarás mensualmente.

8. ESCALABILIDAD Y CRECIMIENTO AÑO 2
Diseña la estrategia de escalabilidad para el segundo año con objetivo de 150.000 euros: (a) productización de servicios (convertir el diagnóstico en un producto estandarizado que se puede vender con mínima personalización a menor precio), (b) creación de un curso online o programa grupal de formación de managers en bienestar (precio de 500 a 1.500 euros por participante, audiencia de hasta 20 managers en cada edición), (c) asociación con otro consultor complementario para ofrecer proyectos más grandes y (d) licenciamiento de tu metodología a otras consultoras o freelancers de RRHH. Para cada palanca de crecimiento, estima el ingreso adicional potencial y el tiempo de inversión necesario para desarrollarla.

Presenta el plan de negocio con proyecciones financieras en tablas, plantillas de mensajes comerciales y un calendario de implementación semanal para los primeros 90 días. El tono debe ser emprendedor, práctico y honesto sobre los retos y los tiempos reales de construir un negocio freelance en este sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar el plan de negocio completo para una consultoría de bienestar corporativo freelance diferenciada por el uso intensivo de IA.',
                'vote_score'       => 56,
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
