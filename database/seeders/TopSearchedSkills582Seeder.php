<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills582Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing ético para servicios de salud mental con IA',
                'description'      => 'Diseña estrategias de marketing responsable para clínicas de psicología, terapeutas y plataformas de bienestar mental.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing de servicios de salud con profundo conocimiento ético del sector de la salud mental y la psicología. Conoces los códigos deontológicos del Colegio Oficial de Psicólogos, las regulaciones publicitarias del sector sanitario en España y la UE, y has trabajado con clínicas de psicología, plataformas de terapia online como BetterHelp o Ifeel, y psicólogos independientes para desarrollar estrategias de captación que respeten la vulnerabilidad del paciente.

Objetivo: diseñar una estrategia de marketing ético y efectivo para un servicio de salud mental, que atraiga a personas que necesitan ayuda sin explotar su vulnerabilidad ni hacer promesas terapéuticas inadecuadas.

Contexto necesario: antes de desarrollar la estrategia necesito saber:
- Tipo de servicio (clínica presencial, terapeuta independiente, app de bienestar, plataforma de terapia online, servicio de psicología empresarial)
- Especialidades o terapias que se ofrecen (ansiedad, depresión, terapia de pareja, psicología infantil, coaching, mindfulness)
- Público objetivo y sus perfiles (adultos con ansiedad, parejas en crisis, empresas para sus empleados, adolescentes, etc.)
- Canales digitales activos o disponibles
- Presupuesto de marketing aproximado
- Restricciones geográficas o de modelo (solo online, solo presencial, ambos)

Instrucción central: desarrolla la estrategia de marketing ético para el servicio de salud mental:

Bloque 1 — Marco ético del marketing en salud mental. Explica los principios éticos que deben guiar toda la comunicación de marketing en este sector: prohibición de explotar el miedo o la desesperanza del paciente para vender, no hacer promesas de curación o resultados garantizados, respetar la autonomía del paciente en la decisión de buscar ayuda, no estigmatizar la salud mental ni trivializarla, cumplir con el artículo 7 del Código Deontológico del COP y con la Ley 34/2002 de servicios de la sociedad de la información. Para cada principio incluye un ejemplo de qué comunicación es correcta y cuál cruza la línea.

Bloque 2 — Posicionamiento y mensajes clave. Desarrolla el posicionamiento del servicio con mensajes que equilibren la atracción de nuevos pacientes con el respeto a su situación: cómo comunicar la propuesta de valor sin apelar al miedo, cómo transmitir profesionalidad y calidez simultáneamente, cómo hablar de las condiciones que se tratan sin estigmatizar a quien las padece, cómo diferenciarse de competidores de manera ética. Redacta cinco mensajes clave validados éticamente para usar en la comunicación.

Bloque 3 — SEO y contenido educativo. El contenido educativo es la forma más ética de atraer tráfico en salud mental porque ayuda al usuario antes de que se convierta en paciente. Diseña una estrategia de contenido que incluye: temas de blog y artículos informativos sobre salud mental (con criterios editoriales para que sean rigurosos y no alarmistas), estrategia de palabras clave con intención de búsqueda informacional y no solo transaccional, cómo escribir sobre síntomas y condiciones sin hacer diagnósticos ni crear ansiedad adicional, cómo optimizar el perfil de Google My Business para un servicio de psicología.

Bloque 4 — Publicidad digital responsable. Si se usa publicidad de pago (Google Ads, Meta Ads), define las reglas de una campaña ética: segmentaciones permitidas y segmentaciones problemáticas (evitar targeting por condiciones de salud inferidas), tipos de anuncio adecuados (informativo, de concienciación, de acceso a primer contacto) vs. tipos de anuncio cuestionables (urgencia artificial, testimonios sin verificación), política de retargeting para usuarios vulnerables. Diseña un anuncio de Google Ads y un anuncio de Meta que cumplan todos los requisitos éticos.

Bloque 5 — Gestión de la reputación online. En salud mental, la confianza es el activo más importante. Define la estrategia de gestión de reputación online: política de solicitud de reseñas a pacientes dados de alta (cómo hacerlo respetando la confidencialidad), cómo responder a reseñas negativas sin violar la confidencialidad, presencia en directorios especializados (PsicologíayMente, TherapyRoute, Doctoralia), gestión de la presencia en LinkedIn para un profesional o clínica.

Bloque 6 — Métricas y evaluación del marketing en salud mental. Define los KPIs adaptados a este sector: tasa de conversión de visita web a primera consulta (solicitud de cita o contacto), coste por adquisición de nuevo paciente por canal, tasa de retención de pacientes (relevante para evaluar la calidad del servicio), NPS de pacientes dados de alta, posicionamiento SEO para las tres palabras clave prioritarias. Establece un cuadro de mando mensual y los umbrales de alerta que indicarían que una campaña necesita revisión ética.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Atraer nuevos pacientes a un servicio de psicología con estrategias de marketing que respeten su vulnerabilidad y la ética profesional.',
                'vote_score'       => 53,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de aplicaciones de bienestar mental con IA responsable',
                'description'      => 'Diseña la arquitectura y los principios de diseño responsable para aplicaciones de salud mental y bienestar psicológico.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software y product manager especializado en aplicaciones de salud digital (digital therapeutics) con experiencia en el desarrollo de apps de meditación, terapia cognitivo-conductual digital, seguimiento del estado de ánimo y apoyo a personas con ansiedad o depresión. Conoces las regulaciones de producto sanitario digital (MDR, FDA Software as a Medical Device), las consideraciones éticas del diseño de tecnología para usuarios vulnerables y los estándares de privacidad aplicables a datos de salud mental (RGPD, HIPAA).

Tarea: diseñar la arquitectura técnica y los principios de diseño responsable para una aplicación de bienestar mental o salud psicológica.

Contexto necesario: antes de diseñar el sistema necesito saber:
- Tipo de aplicación (app de meditación y mindfulness, app de seguimiento del estado de ánimo, plataforma de terapia online con profesionales, app de TCC digital sin terapeuta, app de soporte para crisis de salud mental, app de bienestar para empresas)
- Plataforma objetivo (iOS, Android, web, todos)
- Nivel de regulación como producto sanitario (bienestar general sin indicación clínica, o con indicación clínica que requiere clasificación como producto sanitario)
- Usuarios objetivo y sus características de vulnerabilidad
- Integraciones necesarias (wearables, EHR, plataformas de terapeutas, seguros de salud)
- Modelo de negocio (suscripción, B2B empresa, reembolso por seguro, freemium)

Instrucción central: desarrolla el diseño completo de la aplicación:

Bloque 1 — Principios de diseño ético para apps de salud mental. Define los principios que deben guiar cada decisión de producto y diseño: no crear dependencia artificial del uso de la app (evitar gamificación agresiva con streaks y notificaciones que generan culpa), respetar el derecho del usuario a desconectarse sin consecuencias negativas, diseñar para que la app complemente y no sustituya la atención profesional cuando es necesaria, transparencia sobre las limitaciones de la app (qué puede y qué no puede hacer), protocolo de seguridad para situaciones de riesgo vital detectadas en el uso de la app.

Bloque 2 — Arquitectura técnica general. Diseña el stack tecnológico recomendado: frontend móvil (React Native o Flutter para una sola base de código), backend (Node.js con Express o Python con FastAPI según el equipo), base de datos (PostgreSQL para datos estructurados de usuarios y sesiones, con cifrado en reposo), capa de ML para personalización de contenido o análisis de patrones de estado de ánimo, infraestructura cloud con conformidad RGPD (región europea). Justifica cada elección en función de los requisitos de seguridad de datos de salud.

Bloque 3 — Privacidad y seguridad de datos de salud mental. Los datos de salud mental son de las categorías más sensibles del RGPD. Define el modelo de privacidad by design de la aplicación: minimización de datos (qué datos son estrictamente necesarios y cuáles son opcionales), cifrado end-to-end para conversaciones con terapeutas o diarios personales, política de retención de datos con plazos justificados, gestión del consentimiento informado en el onboarding (explicación clara de qué datos se recogen y para qué), proceso de ejercicio de derechos de portabilidad y supresión, evaluación de impacto en privacidad (DPIA) cuando se procesan datos de salud a escala.

Bloque 4 — Features principales y consideraciones de diseño UX para usuarios vulnerables. Para cada feature principal de la app define las especificaciones funcionales y las consideraciones de diseño responsable: seguimiento del estado de ánimo (cómo preguntar sin ser intrusivo, cómo visualizar tendencias sin crear ansiedad, qué hacer cuando los datos muestran deterioro sostenido), contenido terapéutico digital (cómo estructurar ejercicios de TCC o mindfulness, cómo medir la adherencia sin crear culpa), comunicación con terapeutas (latencia máxima de respuesta, qué pasa fuera del horario del terapeuta), protocolo de crisis (detección de lenguaje o patrones de riesgo vital, activación del recurso de crisis apropiado).

Bloque 5 — Regulación como producto sanitario digital. Explica el proceso de clasificación y certificación si la app tiene indicación clínica: clasificación según el Reglamento MDR de la UE (clase I, IIa, IIb según el riesgo), evidencia clínica necesaria (estudios de eficacia, ensayos clínicos o estudios observacionales), marcado CE para dispositivos sanitarios de software, proceso de FDA 510(k) o De Novo si el mercado objetivo incluye EEUU, implicaciones para el proceso de desarrollo (Quality Management System ISO 13485, gestión de incidentes adversos).

Bloque 6 — Métricas de éxito responsables para apps de salud mental. Define el cuadro de métricas que refleja el verdadero valor del producto para el usuario, y no solo el engagement: métricas de resultado clínico validadas (PHQ-9 para depresión, GAD-7 para ansiedad, antes y después del uso continuado), adherencia al programa sin indicadores de dependencia negativa, tasa de derivación a profesional cuando el app detecta que el usuario necesita más apoyo del que puede ofrecer, satisfacción del usuario (NPS) y calidad percibida del soporte.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar una app de salud mental o bienestar psicológico con arquitectura sólida, privacidad robusta y principios de diseño ético.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias digitales para el bienestar mental con IA',
                'description'      => 'Crea interfaces y experiencias visuales que apoyen el bienestar psicológico de los usuarios siguiendo principios de diseño calmante y accesible.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de UX especializado en tecnología de bienestar y salud mental, con conocimiento en psicología del color aplicada al diseño digital, diseño calmante (calm technology), accesibilidad universal y los principios del diseño de producto para usuarios vulnerables. Has diseñado interfaces para aplicaciones de meditación, plataformas de terapia online y recursos de salud mental de organismos públicos.

Tarea: diseñar la experiencia de usuario completa para un producto digital de bienestar o salud mental, desde los principios de diseño hasta los patrones de interacción específicos.

Contexto necesario: antes de diseñar la experiencia necesito saber:
- Tipo de producto (app móvil de meditación, plataforma de terapia online, recurso digital de autoayuda, herramienta de seguimiento del estado de ánimo, portal de salud mental para empleados)
- Perfil principal de usuario y su estado emocional típico al usar el producto (crisis aguda, mantenimiento diario de bienestar, recuperación gradual)
- Plataforma (iOS, Android, web responsive)
- Restricciones de diseño conocidas (accesibilidad obligatoria, soporte de modo oscuro, idiomas)

Instrucción central: desarrolla el sistema de diseño y la experiencia de usuario completos:

Bloque 1 — Principios de diseño calmante y ético. Define los diez principios de diseño que deben aplicarse en cada pantalla y decisión de interacción: preferir el color sobre el blanco puro (blanco total aumenta la fatiga visual y la ansiedad en algunos usuarios), usar tipografías redondeadas y con espaciado generoso, evitar el rojo como color principal (connotación de urgencia y peligro), priorizar la animación lenta y suave sobre las transiciones bruscas, eliminar cualquier elemento de gamificación que genere culpa (streaks que castigan la discontinuidad), diseñar el estado vacío de forma acogedora en lugar de vacía y fría, garantizar que el usuario puede pausar o salir de cualquier ejercicio sin consecuencias. Justifica cada principio con la base psicológica que lo sustenta.

Bloque 2 — Sistema de color y tipografía para bienestar. Propón el sistema de diseño visual: paleta de color principal con tres a cinco colores (con sus valores hexadecimales) que transmitan calma, confianza y calidez, explicando la psicología de cada elección, paleta de estado (cómo representar estados emocionales positivos, neutros y difíciles sin estigmatizar los negativos), tipografía primaria para contenido de lectura con tamaño mínimo de 16px y altura de línea de 1.5, tipografía secundaria para etiquetas y navegación, reglas de uso de texto en negrita y qué se prohíbe poner en mayúsculas.

Bloque 3 — Patrones de interacción para momentos vulnerables. Diseña los patrones de UX específicos para los momentos más sensibles del uso del producto: onboarding (cómo recoger información sobre el estado emocional del usuario sin sentirse interrogado, cómo obtener consentimiento de datos de manera comprensible), registro del estado de ánimo (escala emocional con qué iconografía, cuántas opciones, qué pasa después de registrar un estado muy negativo), protocolo de crisis dentro de la app (qué texto y acciones mostrar cuando el usuario indica pensamientos de autolesión o suicidio, cómo dar acceso inmediato al recurso de crisis sin crear pánico adicional).

Bloque 4 — Accesibilidad universal en apps de salud mental. Define los requisitos de accesibilidad que van más allá del WCAG 2.1 AA estándar para este tipo de producto: contraste mínimo de 4.5:1 para todo el texto, soporte completo de VoiceOver y TalkBack para usuarios con discapacidad visual, alternativa de audio para todo el contenido de meditación (para usuarios que no pueden ver la pantalla), diseño para usuarios con ansiedad que incluye la reducción de animaciones mediante prefers-reduced-motion, soporte para dislexia (tipografía OpenDyslexic como opción), cómo manejar las notificaciones push de manera que no aumenten la ansiedad.

Bloque 5 — Diseño de la pantalla de inicio y navegación principal. Describe en detalle la pantalla de inicio (home) ideal para una app de bienestar mental: qué información debe aparecer primero al abrir la app (saludo personalizado, estado de ánimo actual, acción recomendada del día), cómo organizar la navegación principal para que el usuario encuentre siempre lo que busca sin estrés (máximo cuatro opciones en el tab bar), cómo mostrar el progreso sin generar presión, qué no debe aparecer en la pantalla de inicio (métricas que generan comparación social, alertas urgentes sin contexto, contenido denso).

Bloque 6 — Brief de diseño para el equipo. Redacta el brief de diseño completo que usarías para incorporar a un nuevo diseñador o para explicar el sistema a un desarrollador: los tres valores de diseño de este producto en una frase cada uno, las cinco preguntas que debe hacerse el equipo antes de añadir cualquier nueva feature ("¿aumenta la ansiedad del usuario?", "¿crea dependencia negativa?", etc.), las tres referencias de diseño que mejor capturan el espíritu visual del producto y por qué, y el proceso de validación ética de diseño que debe seguirse antes de lanzar cualquier cambio importante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar una app de bienestar mental con patrones de interacción calmantes, accesibles y éticamente responsables.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta consultiva de servicios de psicología y salud mental con IA',
                'description'      => 'Desarrolla técnicas de comunicación y procesos de venta éticos para que psicólogos y plataformas de salud mental conviertan consultas en pacientes comprometidos.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en ventas de servicios de salud con profundo respeto por la ética de la relación terapéutica. Has ayudado a clínicas de psicología, plataformas de terapia online y psicólogos independientes a mejorar sus tasas de conversión desde el primer contacto hasta el inicio del proceso terapéutico, sin recurrir a técnicas de presión que son inapropiadas en este contexto tan sensible. Entiendes la diferencia entre facilitar el acceso de alguien que ya quiere ayuda y manipular a alguien vulnerable para que compre un servicio.

Tarea: desarrollar el proceso completo de "venta" ética de servicios de salud mental, desde el primer contacto hasta la fidelización del paciente, con guiones y protocolos listos para usar.

Nota ética inicial: en el contexto de la salud mental, "venta" significa facilitar el acceso de alguien que necesita ayuda al servicio que mejor se adapta a sus necesidades. Nunca significa presionar, manipular ni explotar la vulnerabilidad. Este proceso siempre respeta la autonomía del paciente potencial y prioriza su bienestar sobre la conversión.

Instrucción central: desarrolla el proceso de conversión ética:

Bloque 1 — El primer contacto: llamada o email de consulta inicial. Cuando alguien contacta por primera vez interesado en iniciar terapia, los primeros minutos son críticos. Redacta el script completo de la primera llamada o el protocolo para el primer email de respuesta: cómo acoger calurosamente sin ser invasivo, qué preguntas hacer para entender la situación sin parecer un interrogatorio, cómo explicar el servicio y el proceso de forma comprensible, cómo manejar las preguntas sobre precio sin que resulte incómodo, cómo proponer el siguiente paso (sesión de evaluación o primera sesión de prueba) de manera natural. Distingue entre el rol del equipo administrativo y el del profesional en este primer contacto.

Bloque 2 — La sesión de evaluación o primera sesión. La primera sesión es donde se decide si se empieza o no el proceso terapéutico. Define el proceso desde la perspectiva del profesional: cómo estructurar la sesión para que sea terapéuticamente útil desde el primer momento (no solo una entrevista de venta), cómo presentar el plan de trabajo propuesto al final de la sesión, cómo hablar de la frecuencia de sesiones y del coste de manera clara y sin evasivas, cómo manejar la duda del paciente (necesito pensarlo, es mucho dinero, no sé si estoy listo).

Bloque 3 — Manejo de objeciones comunes con empatía. Las personas que consideran empezar terapia frecuentemente tienen objeciones que reflejan miedos reales. Redacta las respuestas empáticas a las diez objeciones más frecuentes: "no creo que mi problema sea tan grave para ir al psicólogo", "ya he ido antes y no me funcionó", "es muy caro para mí", "no tengo tiempo", "tengo miedo de lo que pueda descubrir", "prefiero hablar con amigos", "no quiero depender de pastillas", "¿cuánto tiempo voy a necesitar?", "¿cómo sé que esto va a funcionar?", "me da vergüenza". Para cada objeción la respuesta debe ser honesta (sin promesas falsas), empática y orientada a ayudar al paciente a tomar su propia decisión.

Bloque 4 — Comunicación del precio y opciones de acceso. El precio es una de las mayores barreras de acceso a la salud mental. Define cómo comunicarlo de manera honesta y sin crear vergüenza: cómo presentar el precio de la sesión en contexto de valor (sin compararlo con cosas frívolas, que es una táctica que genera rechazo en este sector), opciones de escalado de precio (tarifa completa, tarifa reducida por situación económica, sesiones en grupo, formatos online más asequibles), información sobre cobertura de seguros de salud, recursos públicos o de bajo coste a los que derivar si el servicio no es accesible económicamente para esa persona.

Bloque 5 — Seguimiento y fidelización del paciente. Una vez iniciado el proceso terapéutico, define las prácticas que mejoran la adherencia y la satisfacción: recordatorios de cita con el tono adecuado (no intrusivo, no agresivo), protocolo de gestión de cancelaciones y ausencias (cuándo llamar, cómo hablar de las ausencias sin culpabilizar), revisión periódica de objetivos terapéuticos con el paciente, proceso de alta terapéutica y cómo convertirla en una experiencia positiva que puede generar referidos futuros.

Bloque 6 — Métricas de conversión éticas para el equipo. Define los indicadores de seguimiento del proceso de conversión que son apropiados en este sector: tasa de conversión de consulta inicial a primera sesión, tasa de continuidad tras la primera sesión, promedio de sesiones por proceso terapéutico, NPS de pacientes dados de alta, número de referidos generados por pacientes actuales o anteriores. Aclara qué métricas son problemáticas en este sector (urgencia de cierre, presión por objetivos de ventas semanales) y cómo estructurar los incentivos del equipo de manera que nunca comprometan la ética del proceso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejorar la conversión de consultas interesadas en pacientes comprometidos con procesos de comunicación éticos y empáticos.',
                'vote_score'       => 56,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de productos digitales de salud mental con IA',
                'description'      => 'Aplica frameworks de product management al desarrollo de productos de salud mental digital, equilibrando métricas de negocio con resultados clínicos.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager especializado en digital health con foco en salud mental y bienestar. Has gestionado el ciclo de vida completo de productos como apps de meditación, plataformas de terapia online y herramientas de bienestar corporativo. Conoces la tensión entre optimizar métricas de engagement (que pueden crear dependencia no deseada) y optimizar para resultados clínicos reales (que pueden implicar que el usuario use menos la app porque está mejor).

Tarea: desarrollar el framework completo de gestión de producto para un producto digital de salud mental, desde la estrategia hasta la priorización de features y la medición de impacto.

Contexto necesario: define el producto sobre el que trabajarás:
- Tipo de producto (app de meditación y mindfulness, plataforma de terapia con profesionales, app de autoayuda basada en TCC, herramienta de bienestar corporativo, comunidad de soporte entre pares)
- Fase de desarrollo (idea inicial, MVP lanzado, producto con tracción buscando crecimiento, producto maduro buscando retención)
- Modelo de negocio (B2C suscripción, B2B empresa, B2B2C a través de seguros o EAP, freemium)
- Métricas de negocio actuales si las hay y principales retos de producto

Instrucción central: desarrolla el framework de product management:

Bloque 1 — Estrategia de producto y north star metric. En salud mental digital existe una tensión fundamental entre engagement (el usuario que más usa la app) y outcomes (el usuario que mejora y necesita usar menos la app). Explica cómo resolver esta tensión en la definición de la North Star Metric del producto: propón tres opciones de North Star Metric para distintos tipos de productos de salud mental (por ejemplo: minutos semanales de práctica con bienestar autoreportado positivo, porcentaje de usuarios que reportan mejora sostenida a 8 semanas, tasa de pacientes que completan el programa terapéutico). Explica los pros y contras de cada una y cuál recomendarías para el tipo de producto descrito.

Bloque 2 — Discovery y entendimiento del usuario en salud mental. El research de usuario en este contexto requiere protocolos específicos. Define el proceso de discovery para un producto de salud mental: cómo reclutar usuarios para investigación cuando son personas en situación vulnerable (consideraciones éticas de reclutamiento, consentimiento informado especial), qué métodos de investigación funcionan mejor (entrevistas en profundidad vs. surveys en app vs. análisis de datos de comportamiento), cómo hacer entrevistas de usuario con personas que hablan de experiencias difíciles sin retraumatizar, cómo transformar el feedback de usuarios en insights accionables para el equipo de producto.

Bloque 3 — Priorización de features con criterios de bienestar. Define el framework de priorización de features que integra criterios de bienestar junto con los tradicionales de impacto y esfuerzo: crea una matriz de priorización con cinco dimensiones: impacto en métricas de negocio, impacto en resultados clínicos del usuario, riesgo de crear patrones de uso no saludables, esfuerzo de desarrollo, cumplimiento de requisitos regulatorios. Para cada feature del backlog, aplica la matriz y calcula una puntuación ponderada. Ilustra el proceso con tres ejemplos de features concretas típicas de una app de salud mental.

Bloque 4 — Roadmap de producto con responsabilidad clínica. Diseña la estructura del roadmap de producto para los próximos 12 meses, distribuido en trimestres. El roadmap debe equilibrar: features de retención y engagement que también tengan valor terapéutico, mejoras de resultados clínicos aunque no mejoren las métricas de negocio directamente, trabajo técnico de seguridad y privacidad de datos de salud, cumplimiento regulatorio si se busca clasificación como producto sanitario. Propón qué porcentaje del roadmap debe dedicarse a cada tipo de iniciativa.

Bloque 5 — Métricas de producto dual: negocio y bienestar. Define el cuadro de mando completo del producto con dos capas de métricas: métricas de negocio (DAU/MAU, retención a 30 y 90 días, tasa de conversión a pago, LTV, churn) y métricas de bienestar (puntuaciones en escalas clínicas validadas como PHQ-9 o GAD-7 antes y durante el uso, autoreporte de bienestar subjetivo, tasa de usuarios que reportan mejora a 8 semanas, tasa de derivación a profesional cuando es necesario). Explica cómo reportar ambos conjuntos de métricas al equipo ejecutivo de manera que ambos tengan el mismo peso en las decisiones.

Bloque 6 — Cultura de equipo para productos de alto impacto social. Define las prácticas de equipo que ayudan a un equipo de producto de salud mental a mantenerse conectado con el impacto real de su trabajo: sesiones mensuales de lectura de testimonios de usuarios con mejoras significativas, protocolo de revisión ética de features antes del lanzamiento (qué preguntas hacerse, quién tiene veto por razones éticas), política de pausas si se detecta que una feature está causando daño no intencionado, cómo gestionar la carga emocional del equipo que trabaja con contenido de salud mental día a día.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestionar el desarrollo de un producto de salud mental digital equilibrando métricas de negocio con resultados clínicos reales.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programas de salud mental y bienestar laboral para organizaciones con IA',
                'description'      => 'Diseña e implementa programas corporativos de bienestar psicológico que reduzcan el absentismo, mejoren el clima laboral y prevengan el burnout.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en salud organizacional y bienestar laboral con experiencia en el diseño e implementación de programas de salud mental en empresas de diferentes tamaños y sectores. Conoces el marco legal de riesgos psicosociales en España (NTP 702, NTP 703, evaluación de riesgos psicosociales según el INSST), los Programas de Asistencia al Empleado (EAP), y las mejores prácticas internacionales de bienestar corporativo según la ISO 45003.

Tarea: diseñar un programa corporativo completo de salud mental y bienestar laboral para una organización.

Contexto necesario: para personalizar el programa necesito saber:
- Tamaño de la organización (startup pequeña, pyme, mediana empresa, gran empresa)
- Sector y tipo de trabajo (trabajo remoto, presencial, mixto; trabajo de oficina, trabajo a turnos, trabajo de campo)
- Indicadores actuales de problemas de salud mental en la organización (tasa de absentismo, rotación, resultados de encuesta de clima si hay, número de bajas por ansiedad o depresión)
- Recursos disponibles para el programa (presupuesto por empleado por año, equipo de RRHH disponible, si hay médico o enfermería de empresa)
- Nivel de madurez actual en bienestar (ningún programa, algunos beneficios aislados, programa en marcha que necesita mejora)

Instrucción central: desarrolla el programa corporativo de salud mental:

Bloque 1 — Diagnóstico organizacional de salud mental. Define el proceso de evaluación de la situación actual: herramientas de diagnóstico validadas (encuesta de riesgos psicosociales FPSICO, ISTAS-21 para empresas grandes, encuesta de bienestar subjetivo), cómo implementar el diagnóstico de manera que los empleados confíen en la confidencialidad de sus respuestas, qué indicadores de negocio correlacionar con los datos de salud mental (absentismo, rotación, productividad, NPS interno), cómo presentar los resultados al comité de dirección para conseguir su apoyo y presupuesto.

Bloque 2 — Diseño del programa de bienestar por niveles. Define el programa en tres niveles de intervención siguiendo el modelo de los tres pilares de la OMS: prevención primaria (para toda la organización, objetivo es reducir factores de riesgo), prevención secundaria (para personas con síntomas tempranos, objetivo es intervención precoz), prevención terciaria (para personas en crisis o con diagnóstico, objetivo es soporte y recuperación). Para cada nivel describe las acciones, los responsables, el coste estimado y cómo se integran entre sí.

Bloque 3 — Catálogo de iniciativas de bienestar con ROI. Proporciona un catálogo de 15 iniciativas de bienestar mental organizadas por coste (bajo, medio, alto) y por impacto esperado, con el tiempo de implementación de cada una. Para las cinco iniciativas de mayor impacto, incluye la metodología de cálculo del ROI (reducción de costes de absentismo, mejora de productividad, reducción de rotación). Ejemplos de tipos de iniciativa: formación en gestión del estrés para managers, acceso a plataforma de terapia online, sesiones grupales de mindfulness, protocolo de retorno al trabajo después de baja por salud mental, política de desconexión digital.

Bloque 4 — Formación de managers como primera línea de detección. Los managers son el factor más determinante en la salud mental de sus equipos. Diseña el programa de formación para managers: contenidos (señales de alerta de burnout o crisis mental en un colaborador, cómo iniciar una conversación sobre salud mental sin invadir la privacidad, qué decir y qué no decir, cuándo y cómo derivar al EAP o al servicio médico), formato (taller presencial de medio día más seguimiento online), materiales de apoyo (guía rápida de "qué hacer si un colaborador...", tarjeta de recursos de crisis disponibles en la empresa).

Bloque 5 — Comunicación interna del programa. Define la estrategia de comunicación interna para que el programa sea conocido, utilizado y normalice la conversación sobre salud mental: cómo comunicar el lanzamiento del programa sin estigmatizar (no "programa para quien está mal" sino "programa para que todos estemos mejor"), cadencia de comunicación durante el año, cómo usar testimonios internos de manera voluntaria y respetuosa, cómo comunicar los servicios disponibles para que sean fáciles de encontrar y usar en el momento de necesidad.

Bloque 6 — Evaluación del impacto y continuidad del programa. Define el sistema de evaluación anual del programa: métricas de proceso (participación en iniciativas, uso del EAP, número de managers formados), métricas de resultado (evolución del absentismo por salud mental, evolución de la encuesta de clima en dimensiones de bienestar, tasa de retención de empleados), metodología de cálculo del ROI global del programa. Establece el proceso de revisión anual y los criterios para ajustar, ampliar o reorientar el programa en función de los resultados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar un programa corporativo de bienestar mental que reduzca el absentismo y mejore el clima organizacional.',
                'vote_score'       => 62,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de clínicas y centros de salud mental con IA',
                'description'      => 'Gestiona la viabilidad económica de una clínica de psicología o centro de salud mental con análisis de rentabilidad, pricing y proyecciones financieras.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor financiero especializado en centros sanitarios privados, con experiencia específica en clínicas de salud mental, psicología y bienestar. Conoces las particularidades económicas de este sector: altos costes de personal cualificado, dependencia de la agenda del profesional, estacionalidad de la demanda (picos en septiembre y enero, caída en verano), y el modelo de ingresos por sesión vs. los modelos de suscripción o pago por paquetes.

Tarea: realizar el análisis financiero completo de una clínica de psicología o centro de salud mental y diseñar las palancas de mejora de la rentabilidad.

Contexto necesario: para el análisis necesito información sobre el centro:
- Tipo de centro (consulta individual de un solo profesional, clínica con varios profesionales, centro multidisciplinar con psicología, psiquiatría y trabajo social, plataforma de terapia online)
- Servicios ofrecidos y precio por sesión o programa
- Número de profesionales, régimen laboral (empleados, autónomos colaboradores, alquiler de espacio) y salario o comisión
- Ocupación actual (sesiones realizadas vs. capacidad máxima)
- Canales de captación y coste de adquisición de paciente aproximado
- Gastos fijos principales (alquiler, suministros, seguro, plataforma de gestión, marketing)

Instrucción detallada: con esa información, desarrolla el análisis financiero completo:

Bloque 1 — Análisis de capacidad y ocupación. Calcula la capacidad máxima del centro: número de sesiones posibles por semana por profesional (considerando tiempo de preparación entre sesiones, pausas, sesiones de supervisión y formación), capacidad total del centro, ocupación actual y tasa de ocupación. Identifica si el principal cuello de botella es la demanda (pocos pacientes), la agenda (profesionales ocupados al 100%), o la eficiencia operativa (muchas cancelaciones, pocas sesiones productivas por día).

Bloque 2 — Análisis de rentabilidad por línea de servicio. Calcula el margen de contribución de cada tipo de servicio: terapia individual, terapia de pareja, terapia grupal, evaluaciones psicológicas, talleres y formaciones. Para cada uno calcula: ingreso por hora de profesional, coste directo (parte proporcional del salario o comisión del profesional), margen de contribución por sesión y por hora. Identifica cuál es la combinación de servicios más rentable y si hay servicios que no cubren su coste directo.

Bloque 3 — Estrategia de pricing. Revisa la política de precios del centro: comparativa con precios de mercado en la misma área geográfica o digital, análisis de sensibilidad al precio del público objetivo, opciones de pricing alternativas (precio por sesión fijo, bono de sesiones prepagadas con descuento, suscripción mensual, tarifa deslizante por nivel de ingresos del paciente), impacto en la rentabilidad de una subida de precio del 10-15% si la ocupación es alta. Propón la estrategia de pricing óptima con la justificación financiera.

Bloque 4 — Gestión de la cartera de pacientes y previsión de ingresos. En una clínica de psicología, los ingresos futuros dependen de cuántos pacientes siguen en proceso activo. Define el modelo de previsión de ingresos basado en: número de pacientes activos (los que tienen cita en las próximas cuatro semanas), promedio de sesiones semanales por paciente, duración media del proceso terapéutico por tipología de problema, tasa de nuevos pacientes por semana necesaria para mantener o crecer la cartera. Con estos parámetros calcula el ingreso recurrente previsible a 3 y 6 meses.

Bloque 5 — Plan de optimización de costes y eficiencia operativa. Identifica las principales palancas de reducción de costes y mejora de eficiencia sin comprometer la calidad clínica: reducción de no-shows y cancelaciones tardías (política de cancelación con penalización, recordatorios automáticos, coste de cada sesión no realizada), optimización de la agenda (minimizar huecos entre sesiones, gestión de la lista de espera), gestión eficiente del modelo de contratación de profesionales (empleado vs. autónomo colaborador vs. modelo mixto), digitalización de la gestión administrativa para reducir tiempo no clínico.

Bloque 6 — Proyección financiera a tres años y escenarios de crecimiento. Construye tres escenarios de proyección a tres años: escenario conservador (mantener la ocupación actual con ligera mejora de precios), escenario base (crecimiento orgánico del 20% anual con optimización de márgenes), escenario de crecimiento (apertura de nueva sala o contratación de nuevo profesional en el año 2, o expansión a plataforma online). Para cada escenario calcula: ingresos anuales, EBITDA y margen EBITDA, flujo de caja libre, y punto de equilibrio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Optimizar la rentabilidad y la viabilidad económica de una clínica de psicología o centro de salud mental.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para servicios de salud mental digital con IA',
                'description'      => 'Navega el marco regulatorio aplicable a plataformas y servicios digitales de psicología y salud mental para operar con seguridad jurídica.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho sanitario y tecnología de la salud (healthtech), con experiencia en el marco regulatorio de los servicios de psicología y salud mental, tanto presenciales como digitales. Conoces la regulación del ejercicio profesional de la psicología en España (Ley 44/2003, Estatuto General de la Psicología), el RGPD aplicado a datos de salud, la regulación de telemedicina y telepsicología, y los requisitos de la Ley de Servicios de la Sociedad de la Información.

Advertencia importante: este análisis es de carácter orientativo y formativo. Para cualquier decisión jurídica real, es imprescindible contar con asesoramiento legal específico adaptado al caso concreto, la jurisdicción y la normativa vigente en el momento de la consulta.

Tarea: desarrollar el mapa regulatorio completo para un servicio digital de salud mental, identificando los requisitos legales aplicables y los riesgos jurídicos a gestionar.

Contexto necesario: define el tipo de servicio digital:
- Tipo de servicio (plataforma de conexión con psicólogos, app de terapia digital sin profesional humano, servicio de psicología de empresa, comunidad online de apoyo entre pares, app de bienestar y mindfulness sin indicación clínica)
- Modelo de operación (empresa que emplea a los psicólogos, marketplace que conecta pacientes con autónomos, modelo mixto)
- Mercado objetivo (España, UE, EEUU, LATAM, global)
- Tipo de usuario objetivo (adultos, menores de edad, empresas para sus empleados)

Instrucción principal: desarrolla el mapa regulatorio completo:

Bloque 1 — Requisitos del ejercicio profesional de la psicología online. Explica los requisitos legales para que un psicólogo pueda ejercer la telepsicología en España: colegiación obligatoria en el Colegio Oficial de Psicólogos, requisitos de formación en psicología sanitaria si realiza diagnóstico o tratamiento (PGS, título de especialista en psicología clínica), diferencias entre psicología sanitaria (requiere formación específica) y psicología general (coaching, orientación, formación). Para una plataforma que trabaja con psicólogos autónomos, define qué verificaciones debe realizar la plataforma antes de incorporarlos y cómo documentarlo.

Bloque 2 — Protección de datos de salud mental. Los datos sobre la salud mental de una persona son datos de categoría especial según el RGPD (artículo 9). Define los requisitos específicos: base legal para el tratamiento (consentimiento explícito, o interés legítimo, o cuándo aplica cada uno), requisitos del consentimiento informado en el onboarding digital (lenguaje claro, sin tecnicismos, granular por finalidad), figura del Delegado de Protección de Datos (cuándo es obligatorio), evaluación de impacto en protección de datos (DPIA) obligatoria cuando se tratan datos de salud a escala, transferencias internacionales de datos si el proveedor de cloud o de comunicaciones está fuera de la UE.

Bloque 3 — Regulación de la telepsicología y telemedicina. Explica el marco legal específico de la atención psicológica por medios digitales en España: si existe regulación específica de la telepsicología (a diferencia de la telemedicina médica, la telepsicología tiene menos regulación específica, pero está sujeta al código deontológico del COP), los requisitos de confidencialidad de las comunicaciones (cifrado extremo a extremo recomendado), la obligatoriedad del consentimiento informado específico para la modalidad online, cómo gestionar la historia clínica digital del paciente (acceso, conservación, portabilidad).

Bloque 4 — Regulación como producto sanitario digital. Si la app o plataforma tiene indicación clínica (diagnóstico o tratamiento de condiciones de salud mental), puede clasificarse como Software as a Medical Device (SaMD). Define el proceso de evaluación: criterios de clasificación según el MDR de la UE (Reglamento 2017/745), cuándo una app de salud mental es un producto sanitario y cuándo es un producto de bienestar general, proceso de marcado CE como producto sanitario de software, implicaciones del sistema de calidad ISO 13485, y diferencia entre marcado CE como dispositivo sanitario y la autorización sanitaria de centro o establecimiento sanitario.

Bloque 5 — Responsabilidad civil y seguros necesarios. Define los riesgos de responsabilidad civil a los que está expuesto el servicio y cómo gestionarlos: responsabilidad del psicólogo por mala praxis clínica (quién responde si el psicólogo es empleado vs. autónomo), responsabilidad de la plataforma por fallos tecnológicos que impiden la atención (caída del sistema durante una sesión de crisis), responsabilidad por brecha de datos de salud, seguros recomendados (responsabilidad civil profesional, responsabilidad civil general, ciberseguro). Para cada tipo de responsabilidad indica el alcance y la cobertura mínima recomendada.

Bloque 6 — Menores de edad y consentimiento. Si el servicio atiende o puede atender a menores de edad, define los requisitos específicos: edad mínima para el consentimiento de tratamiento de datos en España (14 años para datos generales, pero para datos de salud siempre se requiere participación parental), quién puede dar el consentimiento terapéutico para un menor (padre, madre, tutor legal, cuándo puede el menor consentir solo), situaciones de confidencialidad frente a los padres (si el menor revela algo que sus padres no deben saber, qué obligaciones tiene el psicólogo), protocolo de actuación obligatoria ante indicios de abuso o situación de riesgo del menor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Identificar los requisitos legales y riesgos jurídicos de un servicio digital de psicología o salud mental para operar con seguridad.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención empática a usuarios de servicios de salud mental con IA',
                'description'      => 'Desarrolla protocolos de atención al usuario para plataformas de salud mental que combinen eficiencia operativa con el cuidado emocional que requiere este sector.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de customer experience especializado en servicios de salud mental y bienestar. Has diseñado y liderado equipos de atención al usuario en plataformas de terapia online, apps de salud mental y servicios de bienestar corporativo. Conoces la diferencia entre atender a un usuario que busca una app de descuentos y atender a una persona que está pasando por un momento de vulnerabilidad emocional. Has formado a equipos para que esta diferencia se refleje en cada interacción.

Tarea: desarrollar el sistema completo de atención al usuario para un servicio de salud mental digital, con protocolos, guiones y formación del equipo.

Contexto necesario: antes de desarrollar el sistema necesito saber:
- Tipo de servicio (plataforma de terapia online, app de bienestar mental, servicio de psicología empresarial, recurso de salud mental público o con financiación pública)
- Canales de atención disponibles (chat en vivo, email, teléfono, chatbot, formulario web)
- Tamaño y formación del equipo de atención (agentes con o sin formación en salud mental)
- Tipo de usuario y sus perfiles más frecuentes
- Principales motivos de contacto actuales si se conocen

Instrucción central: desarrolla el sistema de atención al usuario:

Bloque 1 — Principios de atención empática en salud mental. Define los diez principios que deben guiar cada interacción del equipo de atención con usuarios de un servicio de salud mental: nunca minimizar el problema de quien contacta aunque parezca menor, nunca usar frases que impliquen juicio (especialmente en temas de diagnóstico, medicación o estilos de vida), saber escuchar activamente antes de ofrecer soluciones, distinguir cuándo el usuario necesita apoyo emocional vs. información práctica, saber cuándo una consulta supera el alcance de atención al usuario y debe derivarse a un profesional. Para cada principio incluye un ejemplo de interacción correcta y una de incorrecta.

Bloque 2 — Tipología de contactos y triaje de urgencia. Define las categorías de contacto posibles y el protocolo de triaje: contactos administrativos (facturación, cambio de terapeuta, acceso técnico), contactos de soporte general (cómo usar la plataforma, dudas sobre el proceso terapéutico), contactos de apoyo emocional (usuario en dificultad que necesita contención antes de poder gestionar su consulta), contactos de urgencia o crisis (usuario que expresa pensamientos de autolesión o suicidio, usuario en crisis aguda). Para cada categoría define: tiempo máximo de respuesta, agente responsable, protocolo de actuación, y si se puede resolver con respuesta estándar o requiere respuesta personalizada.

Bloque 3 — Protocolo de actuación ante expresiones de crisis o riesgo vital. Este es el protocolo más crítico del sistema. Cuando un usuario expresa pensamientos de autolesión o suicidio en cualquier canal, define el protocolo completo: cómo identificar el lenguaje de riesgo (directo: "quiero hacerme daño"; indirecto: "ya no tiene sentido nada"), qué hacer en los primeros 60 segundos (no dejar solo al usuario, no juzgar, no minimizar), qué decir (guión de respuesta validado clínicamente que el agente puede usar), cuándo y cómo proporcionar los recursos de crisis (Teléfono de la Esperanza, 024 en España, servicios de emergencias), cuándo escalar internamente a un profesional clínico si la plataforma dispone de uno, cómo documentar el incidente. Redacta el guión completo de respuesta en chat para una situación de este tipo.

Bloque 4 — Guiones de respuesta para las diez situaciones más frecuentes. Redacta los guiones de respuesta para: usuario insatisfecho con su terapeuta y pide cambio, usuario que no ve progreso después de ocho semanas, usuario preocupado por la confidencialidad de sus datos, familiar de un usuario que quiere información sobre el proceso del paciente, usuario que duda en empezar y necesita información para decidir, usuario con dificultades económicas que pregunta por opciones de acceso, usuario que quiere cancelar el servicio, usuario que tuvo una sesión difícil emocionalmente y contacta al equipo de soporte en lugar de al terapeuta, usuario que expresa insatisfacción con el coste, usuario que pregunta si la terapia online "funciona de verdad". Cada guión incluye apertura, cuerpo de respuesta y cierre.

Bloque 5 — Formación del equipo de atención al usuario. Define el programa de formación para agentes de un servicio de salud mental: contenidos esenciales (primeros auxilios psicológicos básicos, cómo comunicar sobre salud mental sin estigma, límites de competencia del agente no clínico), metodología (role-playing de situaciones difíciles, supervisión de casos reales anonimizados, sesiones de debrief para procesar situaciones emocionalmente intensas), frecuencia de formación continua (mínimo mensual) y certificación interna.

Bloque 6 — Bienestar del equipo de atención. Los agentes que trabajan en atención al usuario de servicios de salud mental están expuestos a contenido emocionalmente intenso de forma continuada. Define el plan de cuidado del equipo: rotación de tipos de contacto para evitar la saturación emocional, supervisión periódica con un profesional de salud mental, política de "pausa sin explicación" cuando un agente necesita desconectarse de una interacción difícil, protocolo de debriefing tras incidentes de crisis, métricas de bienestar del equipo que se monitorizan mensualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar los protocolos de atención al usuario de una plataforma de salud mental con especial énfasis en situaciones de crisis.',
                'vote_score'       => 72,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de bienestar organizacional para empresas con IA',
                'description'      => 'Ofrece consultoría especializada en bienestar y salud mental organizacional como freelancer, desde el diagnóstico hasta la implementación de programas.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor freelance especializado en bienestar organizacional y salud mental en el trabajo. Ofreces servicios a empresas de diferentes tamaños que quieren mejorar el bienestar de sus equipos, reducir el absentismo por causas psicológicas y construir culturas más saludables. Has trabajado con startups, pymes y divisiones de grandes empresas, y tienes la capacidad de adaptar tu metodología y tus entregables al presupuesto y al nivel de madurez de cada cliente.

Tarea: desarrollar el sistema completo de oferta de servicios, metodología de trabajo y materiales de consultoría para un freelancer especializado en bienestar organizacional.

Instrucción principal: desarrolla todos los componentes del negocio de consultoría:

Bloque 1 — Propuesta de valor y posicionamiento como consultor freelance. Define el posicionamiento del consultor: qué tipo de empresas son el cliente ideal (tamaño, sector, problema específico que ya sienten), qué le diferencia de un psicólogo clínico (trabaja con la organización, no con individuos), de una consultora grande (trato directo, agilidad, precio), y de un coach de bienestar sin formación clínica (credenciales y rigor metodológico). Redacta el elevator pitch de 60 segundos, el perfil de LinkedIn optimizado, y la bio corta para propuestas.

Bloque 2 — Catálogo de servicios con precios y formatos. Define el catálogo de servicios con tres niveles de entrada para diferentes presupuestos y momentos del cliente: nivel básico (diagnóstico de clima y bienestar con informe de recomendaciones, sin implementación, precio por proyecto), nivel intermedio (diagnóstico más diseño del programa de bienestar, formación a managers, precio por proyecto o retainer trimestral), nivel avanzado (consultoría integral anual incluyendo diagnóstico, diseño, implementación, formación, medición y ajuste, precio por retainer anual). Para cada nivel indica: duración, entregables concretos, precio orientativo por tamaño de empresa, y el perfil de cliente que lo elige.

Bloque 3 — Metodología de trabajo: las fases de un proyecto típico. Define la metodología completa de trabajo con un cliente corporativo. Fase 1 — diagnóstico (encuesta de clima, entrevistas a managers clave, análisis de indicadores de absentismo y rotación), duración 3-4 semanas. Fase 2 — diseño del programa (taller de co-creación con RRHH y dirección, diseño de iniciativas priorizadas por impacto y viabilidad), duración 2-3 semanas. Fase 3 — implementación (acompañamiento en el lanzamiento, formación a managers, comunicación interna), duración 2-4 meses según el alcance. Fase 4 — medición y ajuste (encuesta de seguimiento, análisis de indicadores, informe de resultados y recomendaciones de continuidad), duración 2-4 semanas al finalizar el período acordado. Para cada fase define entregables, reuniones necesarias con el cliente y dedicación estimada de horas.

Bloque 4 — Plantillas y herramientas reutilizables. Define las plantillas y herramientas que el consultor debe tener preparadas para ser eficiente en cada proyecto: plantilla de encuesta de diagnóstico de bienestar laboral (con las 20 preguntas más importantes), plantilla de informe de diagnóstico con su estructura y ejemplos de recomendaciones, plantilla de plan de acción de bienestar con cronograma, materiales de formación para managers (presentación de medio día sobre señales de alerta y conversaciones sobre salud mental), plantilla de encuesta de seguimiento y cuadro de resultados. Para cada plantilla indica su estructura principal y el tiempo de personalización que requiere para cada cliente.

Bloque 5 — Proceso de venta y captación de clientes. Define el proceso comercial del consultor freelance: cómo identificar y acercarse a clientes potenciales (LinkedIn, eventos de RRHH, referencias, contenido de autoridad), cómo estructurar la primera reunión de descubrimiento (preguntas clave para entender el problema y cualificar si hay presupuesto y voluntad), cómo redactar una propuesta ganadora para una empresa (estructura de la propuesta, cómo presentar el precio, cómo manejar la objeción de precio). Redacta una propuesta de consultoría de muestra para una pyme de 80 personas con problemas de absentismo por estrés.

Bloque 6 — Gestión del negocio freelance de consultoría. Define los aspectos prácticos de gestionar este negocio: cuántos clientes simultáneos puede gestionar un consultor en solitario (sin dejar de lado la calidad), cómo fijar precios que reflejen el valor entregado y no solo el tiempo dedicado, cómo gestionar la carga de trabajo para no caer en el burnout mientras asesoras sobre burnout, cuándo y cómo escalar incorporando colaboradores o asociados, cómo proteger el trabajo intelectual propio (metodologías, plantillas, materiales de formación) y cuándo vale la pena registrar marca.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar la oferta de servicios y la metodología de trabajo de un consultor freelance especializado en bienestar organizacional.',
                'vote_score'       => 69,
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
