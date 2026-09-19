<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills520Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing deportivo con IA para marcas fitness',
                'description'      => 'Crea campañas de marketing para marcas deportivas y plataformas fitness usando IA para segmentar audiencias, personalizar mensajes y maximizar el retorno en patrocinios.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing deportivo especializado en el uso de inteligencia artificial para marcas fitness y del sector deporte.

contexto: Las marcas deportivas y las plataformas fitness enfrentan un mercado hipersegmentado donde los consumidores esperan contenido personalizado basado en sus datos de actividad física, objetivos de entrenamiento y preferencias de estilo de vida. La IA permite procesar grandes volúmenes de datos de wearables, apps de fitness y redes sociales para crear campañas ultra-relevantes.

tarea principal: Diseña una estrategia de marketing completa para [NOMBRE DE MARCA O PLATAFORMA FITNESS] orientada a [SEGMENTO DE AUDIENCIA: corredores urbanos / ciclistas / practicantes de yoga / deportistas de alto rendimiento / usuarios de gimnasio].

Para desarrollar la estrategia, sigue estos pasos:

PASO 1 — Análisis de audiencia con datos de wearables
- Describe cómo usar datos anonimizados de wearables (frecuencia cardíaca, pasos, calorías, sueño) para crear segmentos de audiencia accionables.
- Propón 4 arquetipos de usuario fitness con sus motivaciones, puntos de dolor y canales de comunicación preferidos.
- Indica qué señales de datos predicen la intención de compra de productos deportivos o suscripción a plataformas.

PASO 2 — Personalización de mensajes a escala
- Diseña un sistema de mensajería dinámica donde el copy cambia según el nivel de actividad física del usuario (principiante, intermedio, avanzado).
- Crea 3 variantes de mensaje para cada arquetipo, adaptando el tono, la propuesta de valor y la llamada a la acción.
- Propón plantillas de email y notificación push personalizadas según el progreso del usuario en la semana anterior.

PASO 3 — Estrategia de contenido para redes sociales
- Define un calendario de contenido mensual que alterne: contenido motivacional basado en datos de rendimiento de la comunidad, casos de éxito reales de usuarios, tutoriales técnicos, y contenido de patrocinio deportivo.
- Describe cómo usar IA generativa para producir variantes visuales de anuncios adaptadas a distintos formatos (Stories, Reels, YouTube pre-roll).
- Propón una estrategia de UGC (contenido generado por usuarios) impulsada por IA para identificar y amplificar los mejores testimonios orgánicos.

PASO 4 — Análisis de patrocinios deportivos con IA
- Crea un framework para evaluar el ROI de patrocinios a atletas o eventos deportivos usando: alcance de audiencia, alineación de valores de marca, engagement histórico y proyección de ventas.
- Describe cómo usar computer vision para medir la visibilidad de marca en transmisiones deportivas en tiempo real.
- Propón un sistema de alertas automáticas cuando un atleta patrocinado genera picos de mención en redes sociales para aprovechar el momento.

PASO 5 — Métricas e iteración continua
- Define los KPIs principales: coste de adquisición por deporte, LTV por segmento fitness, tasa de conversión por canal y nivel de actividad, y Net Promoter Score de la comunidad.
- Diseña un dashboard de marketing deportivo con IA que cruce datos de rendimiento físico de usuarios con métricas de engagement de campaña.
- Propón ciclos de optimización semanales basados en los patrones de entrenamiento de la audiencia (lunes de motivación, viernes de resultados).

resultado esperado: Un plan de marketing de 90 días ejecutable, con presupuesto estimado por canal, responsables y métricas de éxito para cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear estrategias de marketing personalizadas para marcas y plataformas del sector deportivo y fitness',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de app fitness con IA para entrenamiento personalizado',
                'description'      => 'Diseña la arquitectura y las funcionalidades de una aplicación fitness que usa IA para personalizar rutinas, analizar datos de wearables y adaptar planes de entrenamiento en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en aplicaciones fitness y en la integración de inteligencia artificial para personalización de entrenamiento deportivo.

contexto: El mercado de apps fitness supera los 15.000 millones de dólares anuales y la diferenciación clave está en la capacidad de personalizar la experiencia usando datos de wearables, historial de entrenamiento y objetivos individuales. Las apps que integran IA correctamente logran tasas de retención hasta 3 veces superiores a las que ofrecen planes estáticos.

tarea: Diseña la arquitectura técnica y las especificaciones funcionales de una app fitness llamada [NOMBRE] orientada a [TIPO DE USUARIO: corredores, CrossFitters, deportistas de fuerza, usuarios de yoga y mindfulness, deportistas amateur multiactividad].

Desarrolla los siguientes módulos:

MÓDULO 1 — Motor de personalización de rutinas
- Describe el modelo de datos necesario para representar: perfil físico del usuario (edad, peso, nivel de forma, historial de lesiones), historial de entrenamientos, objetivos a corto y largo plazo, y disponibilidad semanal.
- Especifica el algoritmo de recomendación de rutinas: ¿modelo de machine learning supervisado, reglas expertas, o enfoque híbrido? Justifica la elección para el MVP.
- Diseña la lógica de progresión automática: cómo la app aumenta o reduce la intensidad según el rendimiento reciente, la variabilidad de frecuencia cardíaca y las horas de sueño registradas.

MÓDULO 2 — Integración con wearables y sensores
- Define los endpoints de API necesarios para conectar con: Apple HealthKit, Google Fit, Garmin Connect y Fitbit.
- Especifica qué datos se sincronizan en tiempo real versus en background, y cómo manejar la sincronización offline.
- Diseña el pipeline de procesamiento de datos de wearables para extraer señales relevantes: carga de entrenamiento semanal, recuperación estimada, zona de frecuencia cardíaca media.

MÓDULO 3 — Análisis de rendimiento atlético
- Crea las métricas de rendimiento clave que la app debe calcular: Training Stress Score, Chronic Training Load, Acute Training Load y ratio agudo-crónico para prevenir sobreentrenamiento.
- Diseña visualizaciones de progreso que muestren tendencias de 4, 8 y 16 semanas de forma comprensible para usuarios no expertos.
- Propón un sistema de alertas inteligentes: cuándo notificar al usuario sobre riesgo de lesión, fatiga acumulada o mesetas de rendimiento.

MÓDULO 4 — Coach de IA conversacional
- Diseña el flujo de conversación del asistente de entrenamiento: preguntas de check-in diario, interpretación de cómo se siente el usuario, y ajuste de la sesión del día.
- Especifica el prompt de sistema para el LLM que actuará como coach, con restricciones de seguridad (no sustituir consejo médico) y personalidad consistente.
- Propón cómo el coach recuerda el contexto histórico del usuario para hacer referencias a entrenamientos pasados y progresos alcanzados.

MÓDULO 5 — Stack tecnológico y arquitectura
- Recomienda el stack para: backend (API, procesamiento de datos, ML), frontend (iOS/Android/web), almacenamiento de datos de series temporales, y pipeline de MLOps para reentrenar modelos con nuevos datos.
- Diseña la estrategia de privacidad de datos de salud: anonimización, cifrado en reposo y en tránsito, y cumplimiento GDPR/HIPAA.
- Estima los recursos de infraestructura necesarios para los primeros 10.000 usuarios activos mensuales.

entregable: Un documento de especificaciones técnicas completo con diagramas de arquitectura descriptos en texto, endpoints de API principales, esquema de base de datos simplificado y roadmap de desarrollo en fases.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Especificar y diseñar aplicaciones fitness con capacidades de IA para personalización de entrenamiento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias UX para plataformas fitness digitales con IA',
                'description'      => 'Diseña interfaces y flujos de experiencia de usuario para apps y plataformas fitness que integran IA, asegurando que los datos de rendimiento sean comprensibles y motivadores para el usuario.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX especializado en aplicaciones de salud, deporte y bienestar digital, con expertise en la visualización de datos de rendimiento atlético y en la creación de experiencias motivacionales.

contexto: Las plataformas fitness con IA generan enormes cantidades de datos de rendimiento (pasos, calorías, zonas de frecuencia cardíaca, calidad de sueño, carga de entrenamiento) que pueden abrumar o confundir al usuario si no se presentan con un diseño cuidadoso. El reto del UX designer es transformar datos complejos en narrativas motivadoras que impulsen el cambio de comportamiento.

objetivo: Diseña la experiencia de usuario completa para [NOMBRE DE PLATAFORMA FITNESS] enfocada en [TIPO DE USUARIO: atletas amateur, personas que se inician en el deporte, deportistas de alto rendimiento, comunidades de fitness social].

Desarrolla los siguientes entregables de diseño:

ENTREGABLE 1 — Investigación y arquetipos de usuario
- Define 3 arquetipos de usuario fitness con sus: nivel de experiencia técnica, relación emocional con los datos de entrenamiento, motivaciones (salud, rendimiento, comunidad, estética), y puntos de abandono más frecuentes en apps fitness.
- Describe el mapa de empatía para el arquetipo principal: qué piensa, siente, dice y hace durante una sesión de entrenamiento y al revisar sus resultados.
- Identifica los 5 momentos de verdad en el journey del usuario fitness (primer entrenamiento, primera semana, primer meseta, primer logro, riesgo de abandono al mes 3).

ENTREGABLE 2 — Arquitectura de información y flujos clave
- Diseña la estructura de navegación principal de la app: cuántas pestañas, qué contenido va en cada una y por qué.
- Mapea el flujo de onboarding con IA: cómo recoger los datos iniciales del usuario (objetivos, nivel de forma, disponibilidad) de forma conversacional y no como un formulario aburrido.
- Diseña el flujo de la sesión de entrenamiento: pre-entrenamiento (revisión del plan del día), durante (guía de ejercicios, métricas en tiempo real), y post-entrenamiento (resumen, logros, siguiente paso recomendado por IA).

ENTREGABLE 3 — Sistema de visualización de datos deportivos
- Propón los tipos de gráficos y visualizaciones para: progreso semanal de rendimiento, distribución de zonas de frecuencia cardíaca por sesión, carga de entrenamiento acumulada, y comparativa con objetivos.
- Define los principios de diseño para hacer los datos comprensibles: cuándo usar números, cuándo usar iconos, cuándo usar color como señal semántica (verde=bien, naranja=atención, rojo=descanso necesario).
- Diseña micro-animaciones que celebren logros: primera semana completada, récord personal, racha de consistencia.

ENTREGABLE 4 — Componentes de IA y personalización visible
- Diseña cómo mostrar al usuario que la IA está trabajando para él: mensajes de ajuste de plan, explicaciones de por qué se modificó la sesión, y transparencia sobre los datos usados.
- Crea el patrón de diseño para el coach de IA: cómo diferenciarlo visualmente de un chatbot genérico y darle personalidad coherente con la marca.
- Propón cómo gestionar los estados de error o baja confianza del sistema de IA sin generar frustración en el usuario.

ENTREGABLE 5 — Accesibilidad y diseño inclusivo
- Lista las consideraciones de accesibilidad específicas para apps fitness: contraste suficiente bajo luz solar directa, tamaño de elementos táctiles para uso con guantes o manos sudadas, alertas de seguridad para usuarios con condiciones de salud específicas.
- Propón cómo adaptar la interfaz para usuarios mayores de 55 años que se inician en el deporte con ayuda de tecnología.

formato de respuesta: Entrega cada sección como si fuera el brief de diseño que entregarías al equipo de desarrollo, con suficiente detalle para implementar sin ambigüedades.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar interfaces y flujos UX para plataformas y apps del sector fitness y deporte digital',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2B de soluciones IA para gimnasios y clubes deportivos con IA',
                'description'      => 'Diseña argumentarios de venta, propuestas comerciales y estrategias de prospección para vender tecnología IA a gimnasios, clubes deportivos y cadenas fitness.',
                'prompt_content'   => <<<'EOT'
Actúa como un comercial B2B especializado en la venta de soluciones tecnológicas e inteligencia artificial para el sector fitness y deportivo institucional.

contexto: Los gimnasios, clubs deportivos y cadenas fitness están bajo una presión creciente para digitalizar sus servicios, retener socios y competir con las plataformas digitales de entrenamiento en casa. Las soluciones de IA (personalización de entrenamiento, análisis de churn de socios, optimización de horarios de clases) representan una oportunidad de venta de alto valor, pero requieren un enfoque de venta consultivo porque los tomadores de decisión (propietarios, directores de operaciones) no siempre tienen formación tecnológica.

tarea: Diseña una estrategia de ventas B2B completa para vender [NOMBRE DE SOLUCIÓN IA] a [TIPO DE CLIENTE: cadena de gimnasios de 10+ centros / club deportivo de alto rendimiento / estudio boutique fitness / federación deportiva regional].

BLOQUE 1 — Perfil del cliente ideal y mapa de stakeholders
- Describe el perfil del cliente ideal (ICP): tamaño de instalación, número de socios, nivel de digitalización actual, presupuesto estimado en tecnología y principales dolores de negocio.
- Mapea los stakeholders del proceso de compra: quién tiene el dolor (director técnico, entrenadores), quién tiene el presupuesto (gerente general, propietario), quién influye (socios avanzados, atletas de referencia) y quién bloquea (responsable de IT conservador).
- Diseña el mensaje de apertura para cada perfil de stakeholder, adaptando el lenguaje (técnico vs. financiero vs. operativo).

BLOQUE 2 — Argumentario de venta y manejo de objeciones
- Crea los 5 argumentos de valor principales de la solución, con datos y casos de uso concretos del sector deportivo.
- Diseña respuestas a las 7 objeciones más frecuentes: "es muy caro", "nuestros entrenadores ya personalizan", "los socios no usarán la app", "tenemos miedo de la privacidad de datos de salud", "no tenemos equipo IT", "ya tenemos una app", "necesitamos verlo funcionar primero".
- Propón técnicas de demostración en vivo: qué mostrar primero, cómo involucrar al interlocutor en la demo, y cómo cerrar la reunión con un siguiente paso concreto.

BLOQUE 3 — Propuesta comercial y estructura de precios
- Diseña la estructura de una propuesta comercial para una cadena de gimnasios: resumen ejecutivo, diagnóstico del problema actual, solución propuesta, ROI estimado (aumento de retención de socios, reducción de churn, nuevos ingresos por servicios premium), plan de implementación y precio.
- Propón 3 modelos de pricing: licencia por centro, por número de socios activos o por resultados (revenue share).
- Crea la sección de ROI de la propuesta con fórmulas concretas: si la retención de socios mejora un X%, ¿cuánto ingreso adicional genera en 12 meses?

BLOQUE 4 — Estrategia de prospección y pipeline
- Define los canales de prospección prioritarios: ferias del sector (FIBO, IHRSA), asociaciones de gimnasios, LinkedIn de directivos de cadenas deportivas, y referidos de clientes existentes.
- Diseña una secuencia de outreach de 5 pasos para contactar a un director de una cadena de gimnasios que no te conoce: primer email, seguimiento con contenido de valor, llamada de descubrimiento, demo, y propuesta.
- Propón cómo usar IA para identificar el momento óptimo de contacto (expansión de la cadena, apertura de nuevo centro, temporada de renovación de socios).

resultado esperado: Un playbook de ventas completo y listo para usar con el equipo comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar estrategias y argumentarios de venta B2B de tecnología IA para el sector deportivo y fitness',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product Manager de plataforma fitness: roadmap con IA y datos de rendimiento',
                'description'      => 'Define la visión de producto, el roadmap y las métricas de éxito de una plataforma fitness digital que usa IA para personalizar la experiencia de entrenamiento de sus usuarios.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en plataformas fitness digitales, wearables y en la integración de inteligencia artificial para personalización de experiencias deportivas.

contexto: Las plataformas fitness digitales compiten en un mercado saturado donde la retención a largo plazo depende de la capacidad de demostrar valor continuamente al usuario: que está progresando, que el plan está adaptado a él, y que la comunidad le aporta motivación. La IA es el diferenciador clave, pero solo si se integra de forma que el usuario la perciba como un aliado, no como un algoritmo opaco.

tarea: Actúa como PM de [NOMBRE DE PLATAFORMA FITNESS] y desarrolla los siguientes entregables estratégicos de producto:

ENTREGABLE 1 — Visión y estrategia de producto
- Define la visión de producto a 3 años: qué problema resuelve la plataforma que ningún competidor resuelve hoy, para quién y con qué propuesta de valor única.
- Analiza el panorama competitivo: Whoop, Strava, Nike Training Club, Peloton, y plataformas locales. ¿Cuál es el espacio en blanco que justifica una nueva plataforma?
- Define los principios de diseño de producto que guiarán todas las decisiones: por ejemplo, "los datos al servicio del usuario, no al revés" o "personalización sin complejidad".

ENTREGABLE 2 — Descubrimiento de usuario y priorización
- Diseña un plan de investigación de usuario para validar las hipótesis de producto: qué entrevistas hacer, qué preguntar sobre la relación del usuario con sus datos de entrenamiento, y cómo identificar las funcionalidades que generan más valor percibido.
- Aplica el framework RICE (Reach, Impact, Confidence, Effort) para priorizar las siguientes funcionalidades potenciales: plan de entrenamiento adaptativo con IA, análisis de sueño y recuperación, comunidad social con retos, integración con wearables adicionales, coach de nutrición IA, y certificaciones de logros.
- Describe cómo usar los datos de comportamiento en la app (sesiones completadas, funcionalidades más usadas, puntos de abandono) para tomar decisiones de producto basadas en evidencia.

ENTREGABLE 3 — Roadmap de producto trimestral
- Diseña el roadmap de los próximos 4 trimestres dividido en: Q1 (fundamentos y retención temprana), Q2 (personalización con IA), Q3 (comunidad y social), Q4 (monetización avanzada y B2B).
- Para cada trimestre, define: 2-3 funcionalidades principales, métrica de éxito asociada, y hipótesis que se valida.
- Describe cómo comunicar el roadmap a stakeholders (inversores, equipo de desarrollo, comunidad de usuarios) de forma que genere alineación sin comprometer la flexibilidad.

ENTREGABLE 4 — Métricas de producto y North Star Metric
- Define la North Star Metric de la plataforma: ¿sesiones de entrenamiento completadas por semana, usuarios activos mensuales, porcentaje de usuarios que alcanzan su primer objetivo, o tiempo hasta primer logro significativo?
- Diseña el árbol de métricas que conecta la North Star con métricas de adquisición, activación, retención, referido e ingresos.
- Propón un sistema de alertas de producto: cuándo el PM debe actuar urgentemente ante caídas en métricas de retención, engagement o satisfacción del usuario.

ENTREGABLE 5 — Modelo de monetización y crecimiento
- Diseña las opciones de monetización: freemium con límites inteligentes, suscripción premium, B2B para gimnasios y empleadores, y marketplace de entrenadores certificados.
- Propón experimentos de growth para los primeros 12 meses: viral loops a través de retos en comunidad, partnerships con fabricantes de wearables, y programas de referidos basados en logros compartidos.

formato: Entrega cada sección como si fuera una presentación de producto lista para presentar al equipo directivo y a los inversores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir la visión, roadmap y métricas de producto para plataformas fitness digitales con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH en organizaciones deportivas: captación y gestión de talento con IA',
                'description'      => 'Usa IA para optimizar los procesos de captación, evaluación y desarrollo de talento en organizaciones deportivas, desde atletas hasta personal técnico y de gestión.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en organizaciones deportivas: clubes profesionales, federaciones, academias deportivas y empresas del sector fitness.

contexto: Las organizaciones deportivas tienen necesidades de talento únicas: buscan atletas con perfiles psicofísicos muy específicos, entrenadores con metodología probada, y personal de gestión que entienda la cultura del deporte de alto rendimiento. La IA puede transformar la captación de talento, la evaluación del rendimiento y el desarrollo profesional en este sector.

tarea: Diseña un sistema completo de gestión de talento con IA para [NOMBRE DE ORGANIZACIÓN: club de fútbol profesional / federación deportiva / cadena de centros deportivos / academia de formación de atletas].

ÁREA 1 — Captación y selección de talento deportivo
- Diseña el proceso de captación de talento asistido por IA para [TIPO DE ROL: atleta profesional / entrenador / fisioterapeuta deportivo / director técnico / personal de marketing deportivo].
- Describe cómo usar IA para analizar el perfil de candidatos en múltiples fuentes: vídeos de rendimiento, estadísticas públicas, redes profesionales y referencias del sector.
- Crea una rúbrica de evaluación que combine métricas cuantitativas (rendimiento atlético, datos físicos) y cualitativas (mentalidad competitiva, adaptabilidad, trabajo en equipo) con pesos ponderados según el rol.
- Propón cómo detectar con IA candidatos con alto potencial de desarrollo que aún no tienen el rendimiento actual del candidato con más experiencia.

ÁREA 2 — Evaluación del rendimiento y desarrollo
- Diseña un sistema de evaluación de desempeño continuo para personal no atleta (entrenadores, fisioterapeutas, staff técnico) en organizaciones deportivas, con indicadores adaptados al sector.
- Crea un plan de desarrollo individual (PDI) tipo para un entrenador junior: objetivos de formación, certificaciones clave, mentoring interno y métricas de progreso a 12 meses.
- Propón cómo usar datos de rendimiento de los atletas que entrena para evaluar indirectamente la efectividad de un entrenador.

ÁREA 3 — Cultura organizacional y bienestar del atleta
- Diseña una encuesta de clima laboral adaptada a la cultura del deporte de alto rendimiento: cómo preguntar sobre presión competitiva, relación con el cuerpo técnico, equilibrio entre rendimiento y bienestar, y riesgo de burnout.
- Crea un protocolo de detección temprana de burnout en atletas y entrenadores usando señales combinadas: variación en métricas de rendimiento, absentismo, cambios en comunicación con el equipo.
- Propón un programa de bienestar mental para atletas que integre: seguimiento con IA de indicadores de estrés psicológico, acceso a recursos de apoyo, y destigmatización de la salud mental en el deporte.

ÁREA 4 — Gestión del ciclo de vida del atleta
- Diseña el proceso de onboarding de un nuevo atleta fichado: primeras semanas en el club, integración con el equipo, evaluación física y psicológica inicial, y establecimiento de objetivos.
- Crea un protocolo de transición para atletas al final de su carrera deportiva: identificación de habilidades transferibles, orientación hacia roles de entrenamiento o gestión deportiva, y apoyo psicológico durante la reconversión.
- Propón cómo documentar el conocimiento tácito de atletas veteranos antes de su retirada para que permanezca en la organización.

ÁREA 5 — Cumplimiento legal y ética en RRHH deportivo
- Lista los aspectos legales específicos del sector deportivo en España: contratos de atletas, derechos de imagen, cláusulas de rescisión, y normativa sobre menores en academias deportivas.
- Describe cómo garantizar el uso ético de datos biométricos y de rendimiento de atletas, con consentimiento informado y límites claros sobre qué datos puede usar la organización.

entregable: Un manual de RRHH deportivo con IA, organizado en procedimientos accionables para cada área.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar captación, evaluación y desarrollo de talento en organizaciones deportivas con IA',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de inversiones en el sector deportivo con IA',
                'description'      => 'Usa IA para analizar la viabilidad financiera de proyectos deportivos, valorar clubes y plataformas fitness, y modelar el retorno de inversiones en patrocinios y derechos deportivos.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en el sector deportivo y en la industria del fitness digital, con conocimiento en valoración de activos deportivos, derechos de retransmisión, patrocinios y plataformas tecnológicas de salud.

contexto: El sector deportivo global mueve más de 600.000 millones de dólares anuales y combina activos tradicionales (clubes, instalaciones, derechos de retransmisión) con activos digitales emergentes (plataformas fitness, apps de rendimiento, NFTs deportivos, tokens de fans). El análisis financiero en este sector requiere combinar métricas deportivas con métricas financieras para tomar decisiones de inversión fundamentadas.

tarea: Realiza un análisis financiero completo para [TIPO DE PROYECTO: inversión en plataforma fitness digital / valoración de club deportivo / análisis de ROI de patrocinio deportivo / viabilidad de academia deportiva].

BLOQUE 1 — Modelo de ingresos y proyección financiera
- Diseña el modelo de ingresos completo para [PROYECTO ESPECÍFICO], detallando: fuentes de ingreso primarias y secundarias, estacionalidad, dependencia de resultados deportivos (si aplica), y diversificación de ingresos.
- Para una plataforma fitness digital, proyecta los ingresos a 3 años bajo 3 escenarios (conservador, base, optimista) con supuestos claros sobre: tasa de adquisición de usuarios, conversión freemium a premium, precio medio mensual, churn rate y LTV por cohorte.
- Calcula el punto de equilibrio (break-even) en número de usuarios activos o en ingresos mensuales recurrentes (MRR).

BLOQUE 2 — Valoración de activos deportivos
- Describe los métodos de valoración aplicables al sector deportivo: múltiplos de EBITDA ajustado para clubes, valoración por descuento de flujos de caja (DCF) para plataformas tech, y valoración por audiencia para propiedades mediáticas deportivas.
- Aplica el método de múltiplos al caso concreto: ¿qué múltiplos de EBITDA paga el mercado por clubs de fútbol de Segunda División, cadenas de gimnasios, o startups de fitness tech en Series A?
- Diseña una tabla comparativa con transacciones recientes del sector (adquisiciones de clubes, rondas de financiación de plataformas fitness) y extrae los múltiplos implícitos.

BLOQUE 3 — Análisis de ROI de patrocinios deportivos
- Crea un modelo de ROI para un patrocinio deportivo de [MARCA] a [EVENTO O ATLETA]: cuantifica el valor mediático obtenido (impresiones, equivalencia publicitaria), el impacto en brand equity, y la correlación con ventas.
- Diseña el sistema de métricas para medir el retorno: share of voice durante el evento, incremento de búsquedas de marca, engagement en redes sociales, y conversión en ventas en las semanas post-evento.
- Propón cómo usar IA y computer vision para medir automáticamente el tiempo de exposición de marca en retransmisiones deportivas y calcular su valor de mercado equivalente.

BLOQUE 4 — Gestión de riesgos financieros en el deporte
- Identifica los principales riesgos financieros del sector deportivo: dependencia de resultados, lesiones de atletas clave, cambios en derechos de retransmisión, volatilidad de audiencias y riesgo reputacional.
- Diseña una matriz de riesgo con probabilidad e impacto para cada riesgo, y propón estrategias de mitigación: seguros específicos del sector, diversificación de ingresos, claúsulas contractuales de protección.
- Propón cómo usar IA para monitorizar en tiempo real los riesgos reputacionales de atletas patrocinados y tomar decisiones proactivas.

entregable: Un informe financiero ejecutivo de 2 páginas con el análisis cuantitativo, los supuestos clave y la recomendación de inversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar inversiones, valorar activos y modelar ROI en el sector deportivo y fitness digital',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos deportivos e imagen con IA: guía para el abogado del deporte',
                'description'      => 'Usa IA para revisar, redactar y negociar contratos deportivos, acuerdos de patrocinio, derechos de imagen y contratos de retransmisión en el sector del deporte profesional y amateur.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especialista en derecho deportivo con experiencia en la redacción y negociación de contratos de atletas, acuerdos de patrocinio, derechos de imagen, contratos de retransmisión y normativa federativa.

advertencia importante: Este prompt genera orientación jurídica de carácter informativo. Para cualquier contrato real, consulta siempre con un abogado colegiado especializado en derecho deportivo en tu jurisdicción.

contexto: El derecho deportivo es una rama especializada que combina derecho laboral, derecho mercantil, derecho de la propiedad intelectual y normativa federativa específica. Los contratos en el sector deportivo tienen peculiaridades únicas: cláusulas de rescisión, derechos de imagen separados del contrato laboral, bonus por rendimiento, y protecciones especiales para atletas menores de edad.

tarea: Actúa como asesor jurídico deportivo y ayúdame con [TIPO DE NECESIDAD LEGAL: revisión de contrato de atleta / redacción de acuerdo de patrocinio / negociación de derechos de imagen / análisis de contrato de retransmisión / resolución de conflicto federativo].

ÁREA 1 — Revisión y redacción de contratos de atletas
- Analiza las cláusulas esenciales de un contrato de atleta profesional en España: duración, remuneración fija y variable, derechos de imagen, exclusividad, cláusula de rescisión, y condiciones de rescisión por lesión.
- Identifica las cláusulas más problemáticas o desequilibradas que suelen beneficiar desproporcionadamente a los clubes: cláusulas de reducción salarial por lesión, restricciones de actividad extralaboral, y cláusulas de cesión unilateral.
- Propón un modelo de cláusula de derechos de imagen que proteja los intereses del atleta: porcentaje mínimo de explotación, veto sobre usos que dañen la imagen, y liquidación transparente de ingresos.
- Diseña las cláusulas de protección ante lesiones: mantenimiento del salario durante baja, acceso a segunda opinión médica pagada por el club, y garantías de rehabilitación con el médico del propio atleta.

ÁREA 2 — Acuerdos de patrocinio deportivo
- Redacta la estructura de un contrato de patrocinio deportivo entre [MARCA] y [ATLETA/CLUB/EVENTO]: obligaciones del patrocinado (apariciones, uso de producto, contenido en redes sociales), contraprestación económica, y derechos del patrocinador.
- Diseña las cláusulas de moralidad y reputación (morality clauses): qué conductas del atleta habilitan al patrocinador a terminar el contrato, con criterios objetivos y plazos de notificación.
- Propón cómo estructurar los bonus de rendimiento en contratos de patrocinio: vinculados a clasificación, medallas, audiencia de redes sociales, o cuotas de mercado del patrocinador en temporada.

ÁREA 3 — Derechos de imagen y propiedad intelectual en el deporte
- Explica la diferencia legal entre los derechos de imagen cedidos al club (uso en merchandising, publicidad institucional) y los derechos que el atleta retiene (patrocinios personales, actividad en redes propias).
- Analiza los límites del uso de imagen de atletas en videojuegos, NFTs deportivos, y contenido generado por IA: ¿qué requiere consentimiento expreso y cómo monetizarlo?
- Propón un contrato de agencia entre atleta y representante deportivo: porcentaje de comisión por tipo de ingreso, duración, exclusividad geográfica, y condiciones de terminación.

ÁREA 4 — Normativa federativa y resolución de conflictos
- Describe el sistema de resolución de disputas deportivas en España: Tribunal Administrativo del Deporte, Comité Olímpico Español, y Tribunal Arbitral del Deporte (TAS/CAS) para conflictos internacionales.
- Explica cuándo es preferible el arbitraje deportivo frente a la vía judicial ordinaria, y cómo redactar la cláusula compromisoria en contratos deportivos.
- Propón cómo usar IA para revisar contratos deportivos en busca de cláusulas abusivas o inconsistencias antes de la firma.

entregable: Un checklist de revisión de contratos deportivos con los 20 puntos críticos que todo abogado deportivo debe verificar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Revisar, redactar y negociar contratos deportivos, patrocinios y derechos de imagen con asistencia de IA',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer Success en plataformas fitness: retención de usuarios con IA',
                'description'      => 'Diseña estrategias de customer success para plataformas fitness y apps de entrenamiento, usando IA para predecir el abandono, personalizar la intervención y aumentar el LTV de cada usuario.',
                'prompt_content'   => <<<'EOT'
Actúa como un Customer Success Manager especializado en plataformas fitness digitales, apps de entrenamiento con IA y servicios de suscripción en el sector del bienestar y el deporte.

contexto: Las plataformas fitness enfrentan uno de los problemas de retención más agudos de la industria SaaS: el 80% de los usuarios que se suscriben en enero han abandonado antes de marzo. El ciclo de abandono es predecible y evitable con la intervención correcta en el momento adecuado. La IA permite identificar a los usuarios en riesgo antes de que cancelen y personalizar la intervención para reconectar con su motivación original.

objetivo: Diseña el sistema completo de Customer Success para [NOMBRE DE PLATAFORMA FITNESS] orientado a reducir el churn y maximizar el valor de vida del usuario (LTV).

MÓDULO 1 — Modelo de predicción de churn para usuarios fitness
- Define las señales de comportamiento que predicen el abandono en los primeros 30, 60 y 90 días: frecuencia de sesiones completadas, tiempo en app, función más usada, respuesta a notificaciones push, y variación respecto a la semana anterior.
- Diseña un modelo de puntuación de riesgo (churn score) de 0 a 100 para cada usuario, con los umbrales que disparan intervenciones automáticas versus intervenciones manuales del equipo CS.
- Identifica los segmentos de usuario con mayor riesgo de abandono: usuarios que no completaron el onboarding, usuarios que fallaron su primer objetivo, usuarios que tuvieron una lesión o pausa larga, y usuarios que nunca se conectaron a la comunidad.

MÓDULO 2 — Playbooks de intervención personalizada
- Diseña 5 playbooks de intervención según el perfil de riesgo del usuario: re-enganche por motivación, simplificación del plan para usuarios abrumados, celebración de progreso para usuarios que no se dan cuenta de cuánto han avanzado, recuperación tras una pausa larga, y escalada a entrenador humano para usuarios con alta disposición a pagar.
- Para cada playbook, define: trigger de activación (qué señal lo activa), canal de comunicación (push, email, in-app, llamada), mensaje personalizado según el contexto del usuario, y métrica de éxito (¿el usuario completó una sesión en los 7 días siguientes?).
- Diseña las plantillas de mensajes de re-enganche que usen los datos de rendimiento del usuario para personalizar el contenido: "María, hace 3 semanas completaste tu mejor carrera de 5km. ¿Cómo va la preparación de tu siguiente reto?"

MÓDULO 3 — Onboarding de nuevos usuarios y activación temprana
- Diseña el onboarding de los primeros 7 días: secuencia de comunicaciones, primer logro diseñado para ser alcanzable en 48 horas, y checkpoint de éxito al día 7 que predice la retención a 90 días.
- Define el "momento aha" de la plataforma (el instante en que el usuario comprende el valor real de la IA de personalización) y diseña el flujo de producto que lo lleva allí en el menor tiempo posible.
- Propón cómo segmentar el onboarding según el objetivo declarado del usuario (perder peso, ganar músculo, correr 10km, reducir estrés) para que desde el primer día sienta que la plataforma fue diseñada para él.

MÓDULO 4 — Comunidad y referidos como motor de retención
- Diseña el programa de comunidad de la plataforma: retos grupales, tablas de clasificación, sistema de logros compartibles, y buddy system donde usuarios con objetivos similares se emparejan.
- Propón un programa de referidos que aproveche los momentos de mayor satisfacción del usuario para solicitar recomendaciones: tras alcanzar un objetivo, tras una racha de consistencia, o tras recibir un elogio del coach de IA.
- Describe cómo usar la IA para identificar a los usuarios más influyentes de la comunidad (no necesariamente los de mejor rendimiento, sino los más conectados y positivos) y convertirlos en embajadores.

MÓDULO 5 — Métricas de CS y reporting
- Define el dashboard de Customer Success de la plataforma fitness con: churn rate mensual por cohorte, NPS segmentado por nivel de actividad, tiempo hasta primera sesión completada, sesiones por semana por segmento, y revenue retention neta.
- Propón la cadencia de revisión de métricas: qué revisar diariamente (alertas de churn), semanalmente (cohortes de activación), y mensualmente (tendencias de LTV).

entregable: Un manual de Customer Success de 30 páginas, listo para que lo use un equipo de 3 personas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reducir el churn y aumentar el LTV de usuarios en plataformas fitness digitales con estrategias de CS potenciadas por IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer en el sector deportivo: servicios de IA para entrenadores y clubs',
                'description'      => 'Define tu propuesta de valor como freelancer especializado en IA aplicada al deporte y el fitness: qué servicios ofrecer, cómo posicionarte y cómo conseguir tus primeros clientes en el sector deportivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor especializado en el desarrollo de negocios freelance en el cruce entre inteligencia artificial y el sector deportivo y fitness.

contexto: El sector deportivo y fitness está adoptando la IA más rápido de lo que los clubes, academias y entrenadores pueden absorber internamente. Esto crea una oportunidad enorme para freelancers especializados que pueden implementar soluciones de IA sin que el cliente necesite contratar un equipo tech permanente. Los clientes van desde entrenadores personales que quieren automatizar su negocio hasta federaciones deportivas que necesitan análisis de rendimiento.

objetivo: Diseña el negocio freelance de IA para el sector deportivo de [TU NOMBRE O MARCA], orientado a [TIPO DE CLIENTE OBJETIVO: entrenadores personales / academias deportivas / clubs amateur / influencers fitness / plataformas digitales de deporte].

BLOQUE 1 — Definición de servicios y propuesta de valor
- Define 3-5 servicios concretos que puedes ofrecer como freelancer de IA en el sector deportivo, con formato de entregable claro, tiempo de ejecución estimado y precio orientativo:
  1. Análisis de rendimiento atlético con IA (informe de datos de wearables y recomendaciones)
  2. Automatización de planes de entrenamiento personalizados con prompts de IA
  3. Creación de contenido de marketing deportivo con IA (guiones de vídeo, copys, calendarios)
  4. Diseño de chatbot de coaching para entrenadores y academias
  5. Formación en IA para equipos técnicos deportivos (talleres y workshops)
- Para cada servicio, describe: quién es el cliente ideal, qué problema concreto resuelve, qué entregas al finalizar, y cuál es el resultado medible para el cliente.
- Propón cómo posicionarte como especialista en IA deportiva y no como "consultor de IA genérico": qué experiencia propia puedes mostrar, qué casos de uso del sector puedes documentar, y qué lenguaje específico del mundo del deporte debes usar en tu comunicación.

BLOQUE 2 — Estrategia de captación de primeros clientes
- Diseña un plan de 90 días para conseguir tus primeros 3 clientes de pago en el sector deportivo sin presupuesto de publicidad: qué comunidades online frecuentar (grupos de entrenadores en Facebook, Discord de atletismo, foros de CrossFit), qué contenido gratuito publicar para demostrar expertise, y cómo pasar de seguidor a cliente.
- Crea una oferta de lanzamiento irresistible para tus primeros clientes: diagnóstico gratuito de oportunidades de IA en su negocio deportivo, con un informe de 3 páginas que demuestre tu valor antes de que paguen nada.
- Propón cómo usar LinkedIn para posicionarte: qué tipo de contenido publicar, con qué frecuencia, y cómo construir una red en el sector deportivo desde cero.

BLOQUE 3 — Fijación de precios y modelos de trabajo
- Diseña tu estructura de tarifas: precio por proyecto (para análisis y entregables puntuales), precio mensual de retención (para clientes que quieren apoyo continuo), y precio por resultado (para proyectos de alto impacto medible).
- Propón cómo valorizar tu trabajo frente a la objeción "pero si la IA hace el trabajo, ¿por qué pagas tanto?": el valor no está en el tiempo que tardas, sino en el conocimiento que aplicas, el resultado que consigues y el riesgo que eliminas al cliente.
- Crea un contrato tipo para servicios de IA en el sector deportivo: scope of work, entregables, plazos, forma de pago, propiedad intelectual de los prompts y sistemas creados, y cláusula de confidencialidad de datos de rendimiento atlético.

BLOQUE 4 — Herramientas y stack de trabajo
- Define el stack de herramientas que necesitas para ofrecer servicios de IA al sector deportivo: modelos de lenguaje para generación de contenido y planes, herramientas de análisis de datos de wearables, plataformas de automatización de flujos, y herramientas de presentación de informes.
- Propón cómo sistematizar tus servicios para que no tengas que empezar desde cero en cada proyecto: templates de análisis de rendimiento, biblioteca de prompts deportivos, y procesos de onboarding de clientes.
- Describe cómo mantenerte actualizado en un sector que evoluciona rápido: qué newsletters del sector leer, qué comunidades de IA y deporte seguir, y cómo documentar tus aprendizajes para convertirlos en contenido de marketing.

entregable final: Tu propuesta de valor en 3 frases, tu oferta de lanzamiento lista para publicar en LinkedIn, y tu plan de acción de los próximos 30 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar y lanzar servicios freelance de IA orientados al sector deportivo y fitness',
                'vote_score'       => 25,
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
