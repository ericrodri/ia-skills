<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills448Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gamificación de programas de fidelización con IA',
                'description'       => 'Usa IA para diseñar e implementar mecánicas de gamificación en programas de fidelización que aumenten el engagement, la frecuencia de compra y el valor de vida del cliente.',
                'prompt_content'    => <<<'EOT'
Eres un experto en marketing de fidelización y gamificación con amplia experiencia en el diseño de programas que combinan psicología del comportamiento, diseño de recompensas y análisis de datos para maximizar el engagement y el valor de vida del cliente (LTV). Tu objetivo es ayudarme a diseñar o mejorar un programa de fidelización gamificado que incremente la frecuencia de interacción, el gasto promedio y la retención de clientes en el largo plazo.

**Contexto del negocio:**
[Describe tu empresa: sector, modelo de negocio (ecommerce, retail físico, SaaS, app móvil), ticket promedio, frecuencia de compra actual y perfil demográfico del cliente principal]

**Estado del programa de fidelización actual:**
[Describe si ya tienes un programa (puntos, cashback, niveles) o partes desde cero, qué herramientas usas (CRM, plataforma de loyalty, app móvil) y cuáles son las métricas actuales de participación]

**Objetivos prioritarios:**
[Indica los 2 o 3 objetivos principales: aumentar la frecuencia de visita, subir el ticket promedio, mejorar la retención a 12 meses, activar clientes dormidos, generar referencias, etc.]

---

Con este contexto, necesito que:

**1. Diseñes la arquitectura de mecánicas de gamificación:**
Define las mecánicas de gamificación más adecuadas para mi perfil de cliente y modelo de negocio: sistema de puntos y su lógica de acumulación y canje, niveles o rangos con beneficios diferenciales, misiones y retos temporales, insignias y logros coleccionables, tablas de clasificación y competencia social, rachas de comportamiento (streaks) y bonificaciones por constancia. Para cada mecánica describe el comportamiento que incentiva, el riesgo de abuso y cómo calibrar las recompensas para que sean percibidas como valiosas sin erosionar el margen.

**2. Estructures el sistema de recompensas y economía de puntos:**
Diseña la economía del programa: cómo definir el ratio de conversión de compras a puntos que equilibre el coste del programa con el incremento de LTV, qué tipos de recompensas generan mayor motivación intrínseca versus extrínseca en mi segmento de clientes, cómo evitar la inflación de puntos que devalúa el programa con el tiempo, y cómo estructurar los niveles de membresía para que el progreso sea percibido como alcanzable pero suficientemente desafiante para ser motivador.

**3. Personalices los retos y recompensas con IA:**
Describe cómo usar datos de comportamiento y segmentación para personalizar la experiencia gamificada a escala: qué señales de comportamiento usar para determinar qué tipo de reto motiva a cada segmento de clientes, cómo adaptar la dificultad de los retos al historial de cada usuario para mantener el flow óptimo (ni demasiado fácil ni imposible), cómo usar IA generativa para crear mensajes de activación personalizados para cada hito del programa, y cómo medir qué mecánicas funcionan mejor para qué segmentos.

**4. Diseñes la estrategia de activación y comunicación del programa:**
Define el plan de comunicación del programa gamificado: cómo comunicar las reglas de forma sencilla y motivadora en el lanzamiento, qué triggers automatizados usar para recordar a los usuarios sus puntos, misiones pendientes o niveles próximos, cómo diseñar los momentos de celebración (milestone emails, notificaciones push, pantallas de logro) para maximizar el impacto emocional, y cómo reactivar a usuarios que han dejado de participar con retos de rescate personalizados.

**5. Integres mecánicas sociales y virales:**
Explica cómo incorporar mecánicas de gamificación social que amplifiquen el alcance del programa: desafíos entre amigos, retos de equipo, referidos gamificados (el referidor avanza en el juego cuando el referido alcanza ciertos hitos), contenido generado por usuarios como parte del programa, y cómo equilibrar la competencia con la colaboración para maximizar la participación sin alienar a clientes que no son competitivos.

**6. Midas el ROI y optimices el programa:**
Define el framework de medición y optimización del programa de fidelización gamificado: qué KPIs usar más allá de los puntos emitidos y canjeados (incremento de frecuencia de compra, uplift en ticket promedio, reducción de churn, NPS de miembros versus no miembros), cómo estructurar los tests A/B para optimizar las mecánicas de forma continua, cómo calcular el coste total del programa versus el incremento de LTV para medir su rentabilidad, y qué señales anticipadas indican que el programa está perdiendo efectividad y necesita renovarse.

Responde con un blueprint de programa gamificado adaptado a mi sector, plantillas de comunicación de activación y framework de medición de ROI.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar e implementar un programa de fidelización gamificado que aumente el engagement, la frecuencia de compra y el valor de vida del cliente usando mecánicas de juego y personalización con IA.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Implementación técnica de mecánicas de gamificación en productos digitales con IA',
                'description'       => 'Usa IA para diseñar la arquitectura técnica, los modelos de datos y los sistemas de eventos que soportan mecánicas de gamificación escalables en productos digitales.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de software senior con especialización en el desarrollo de sistemas de gamificación, plataformas de engagement y arquitecturas orientadas a eventos para productos digitales de alto tráfico. Tu objetivo es ayudarme a diseñar e implementar la capa técnica que soporta las mecánicas de gamificación de nuestro producto de forma escalable, mantenible y extensible.

**Contexto técnico del producto:**
[Describe la plataforma: tipo de aplicación (web app, app móvil, SaaS B2B, ecommerce), stack tecnológico principal (lenguajes, frameworks, bases de datos), volumen de usuarios activos y frecuencia de eventos por usuario al día]

**Mecánicas de gamificación a implementar:**
[Describe qué mecánicas necesitas: sistema de puntos, niveles, logros/badges, misiones, tablas de clasificación, rachas, recompensas, notificaciones de milestone, etc.]

**Restricciones técnicas:**
[Indica limitaciones importantes: latencia máxima aceptable para actualizar puntos, necesidad de tiempo real versus eventual consistency, integración con sistemas existentes (CRM, analytics, notificaciones), presupuesto de infraestructura]

---

Con este contexto, necesito que:

**1. Diseñes la arquitectura del sistema de gamificación:**
Define la arquitectura técnica del sistema: si usar un servicio propio versus una plataforma de gamificación de terceros (Gameball, Bunchball, Badgeville, Loyalty Lion), cuándo tiene sentido construir versus comprar, qué patrón arquitectónico usar (event sourcing, CQRS, microservicio independiente versus monolito modular), y cómo garantizar que el sistema de gamificación no se convierte en un cuello de botella de rendimiento para el flujo principal del producto.

**2. Modeles el esquema de datos para gamificación:**
Diseña el modelo de datos del sistema de gamificación: entidades principales (usuario, evento, punto, logro, nivel, misión, recompensa), relaciones entre ellas, qué datos deben ser en tiempo real versus calculados de forma asíncrona, cómo versionar las reglas del sistema para poder cambiar la lógica sin perder el historial de progreso de los usuarios, y cómo diseñar el esquema para soportar múltiples tipos de mecánicas sin un modelo rígido que dificulte añadir nuevas en el futuro.

**3. Implementes el sistema de eventos y triggers:**
Describe el sistema de captura y procesamiento de eventos de usuario que alimenta la gamificación: qué eventos capturar (compra, login, contenido generado, referido, completar perfil, etc.), cómo estructurar el payload de cada evento para que contenga la información necesaria para evaluar reglas, qué patrón usar para evaluar reglas de gamificación de forma asíncrona sin bloquear el flujo principal, y cómo garantizar que los eventos se procesan exactamente una vez (idempotencia) para evitar duplicación de puntos.

**4. Construyas el motor de reglas de gamificación:**
Explica cómo implementar el motor de reglas que determina cuándo y cuántos puntos otorgar, cuándo desbloquear un logro, cuándo avanzar de nivel o completar una misión: si usar un motor de reglas genérico versus lógica hardcodeada, cómo hacer las reglas configurables por el equipo de producto sin necesitar un despliegue de código, cómo gestionar las reglas con condiciones complejas (combinación de múltiples eventos en ventanas de tiempo), y cómo testear el motor de reglas de forma unitaria y de integración.

**5. Diseñes el sistema de notificaciones y celebración de hitos:**
Define la implementación del sistema de notificaciones de gamificación: cómo orquestar el envío de notificaciones push, in-app y por email en el momento correcto tras un hito, cómo evitar la fatiga de notificaciones con límites de frecuencia y priorización, cómo implementar las pantallas de celebración de logro en el frontend de forma que el timing sea correcto (mostrarla cuando el usuario está en la app, no después), y cómo diseñar el sistema de cola de notificaciones pendientes para usuarios que no estaban activos en el momento del evento.

**6. Monitorizas el sistema y optimizas el rendimiento:**
Describe el sistema de observabilidad y optimización del módulo de gamificación: qué métricas técnicas monitorizar (latencia de procesamiento de eventos, tasa de eventos duplicados, tiempo de respuesta de consultas de leaderboard), cómo implementar el caché de rankings y puntos para evitar consultas costosas a la base de datos, cómo escalar el sistema a medida que crece el volumen de usuarios y eventos, y cómo implementar las pruebas de carga específicas para los picos de uso que suelen generar las mecánicas de gamificación (fin de misión, apertura de temporada, etc.).

Incluye ejemplos de esquema de base de datos, estructura de evento de gamificación y pseudocódigo del motor de reglas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar la arquitectura técnica, el modelo de datos y el motor de reglas que soportan mecánicas de gamificación escalables en productos digitales de alto tráfico.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencias gamificadas centradas en el usuario con IA',
                'description'       => 'Usa IA para diseñar interfaces, flujos y sistemas visuales de gamificación que sean intuitivos, motivadores y accesibles para maximizar la participación de los usuarios.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador UX/UI especializado en diseño de juegos y gamificación de productos digitales con experiencia en la aplicación de principios de psicología del comportamiento y diseño de feedback loops para crear experiencias que enganchen a los usuarios de forma ética y sostenida. Tu objetivo es ayudarme a diseñar la experiencia visual y de interacción de las mecánicas de gamificación de nuestro producto de forma que sean intuitivas, motivadoras y accesibles para todos los segmentos de usuarios.

**Contexto del producto y usuarios:**
[Describe el producto, el perfil de usuarios objetivo (edad, familiaridad con juegos, nivel digital), el tono de marca (serio/profesional, informal/lúdico, premium/aspiracional) y las mecánicas de gamificación que se van a implementar]

**Plataformas objetivo:**
[Web desktop, web móvil, app iOS, app Android, o combinación. Indica si la experiencia principal es en una plataforma específica]

**Restricciones de diseño:**
[Sistema de diseño existente, limitaciones de accesibilidad (WCAG AA/AAA), restricciones de marca o legales en la representación de recompensas]

---

Con este contexto, necesito que:

**1. Diseñes el sistema visual de gamificación:**
Define el lenguaje visual del sistema de gamificación: cómo integrar los elementos de juego (barras de progreso, contadores de puntos, insignias, avatares, niveles) en el diseño del producto sin romper la coherencia de la marca ni abrumar a usuarios que no quieren jugar, qué jerarquía visual usar para mostrar el estado del juego sin distraer de la tarea principal del producto, y cómo diseñar los estados vacíos del inicio del programa para que sean motivadores en lugar de intimidantes.

**2. Diseñes los momentos de celebración y feedback positivo:**
Explica cómo diseñar los micro-momentos de recompensa que son el corazón de la experiencia gamificada: animaciones de puntos ganados, pantallas de logro desbloqueado, transiciones de nivel, notificaciones de hito. Describe qué principios de diseño de sonido y movimiento maximizan el impacto emocional positivo, cómo calibrar la intensidad de la celebración al tamaño del logro (micro-animación para puntos, pantalla completa para subida de nivel), y cómo hacer estas experiencias accesibles para usuarios con preferencia de movimiento reducido o daltonismo.

**3. Diseñes las pantallas de estado y progreso del programa:**
Define el diseño de las pantallas principales del programa gamificado: dashboard de estado del usuario (puntos, nivel, logros recientes, misiones activas), perfil público (si hay componente social), catálogo de recompensas y cómo mostrar el gap entre puntos actuales y la siguiente recompensa para motivar la acción, y página de historial de actividad. Para cada pantalla describe la jerarquía de información, los patrones de interacción y cómo gestionar el estado con muchos datos versus el estado en los primeros días de uso.

**4. Diseñes los flujos de onboarding gamificado:**
Describe cómo diseñar el onboarding del programa gamificado: cómo explicar las mecánicas de forma progresiva sin abrumar al nuevo usuario, cómo usar las primeras acciones como oportunidad para enseñar el sistema de recompensas de forma experiencial (mostrar los puntos ganados por completar el perfil, por ejemplo), cómo diseñar los retos de bienvenida que llevan al usuario a su primera recompensa rápida (quick win) y crean el hábito de participación, y cómo medir si el onboarding está siendo efectivo.

**5. Diseñes los componentes de gamificación social:**
Si el programa incluye mecánicas sociales, describe el diseño de los componentes de ranking, desafíos entre usuarios y compartición de logros: cómo diseñar tablas de clasificación que sean motivadoras para usuarios en distintas posiciones (top 10, mitad de tabla, recién llegados), cómo diseñar los flujos de desafío entre amigos de forma que sean fáciles de enviar y aceptar, y cómo diseñar las tarjetas de logro para redes sociales de forma que los usuarios quieran compartirlas orgánicamente.

**6. Evalúes y iteres el diseño de gamificación:**
Define el proceso de evaluación y mejora continua del diseño de gamificación: qué métricas de UX usar para detectar problemas de usabilidad en el flujo gamificado (tasa de completado de tutorial, clics en elementos de gamificación, tasa de canje de recompensas), cómo estructurar las sesiones de test de usuario específicas para evaluar la comprensión de las mecánicas, y cómo usar los datos de comportamiento para identificar dónde los usuarios pierden el interés y qué cambios de diseño pueden recuperarlo.

Incluye ejemplos de patrones de diseño de gamificación exitosos y recomendaciones de accesibilidad para cada componente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar la experiencia visual y de interacción de mecánicas de gamificación que sean intuitivas, motivadoras y accesibles para maximizar la participación de los usuarios en productos digitales.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gamificación del proceso de ventas para aumentar el rendimiento del equipo con IA',
                'description'       => 'Usa IA para diseñar un sistema de gamificación del equipo comercial que aumente la motivación, la competencia sana y el rendimiento individual y colectivo en ventas.',
                'prompt_content'    => <<<'EOT'
Eres un director de ventas y experto en motivación de equipos comerciales con experiencia en el diseño de sistemas de incentivos gamificados que aumentan el rendimiento del equipo sin crear cultura tóxica de hipercompetencia. Tu objetivo es ayudarme a diseñar un sistema de gamificación para el equipo de ventas que incremente la motivación, la adopción del CRM, la consistencia en la ejecución del proceso de ventas y los resultados individuales y colectivos.

**Contexto del equipo comercial:**
[Describe el equipo: número de vendedores, roles (SDR, AE, KAM, etc.), ciclo de ventas promedio, ticket medio, modelo de compensación actual (fijo, variable, comisiones) y CRM que usan]

**Problemas actuales de motivación o rendimiento:**
[Indica los principales problemas: baja adopción del CRM, falta de prospección activa, rendimiento muy desigual entre vendedores, baja moral en épocas de cuota difícil, etc.]

**Cultura del equipo:**
[Describe la cultura: competitiva o colaborativa, equipo joven o experimentado, remoto o presencial, y cómo reacciona el equipo a los rankings públicos y la competencia]

---

Con este contexto, necesito que:

**1. Diseñes la arquitectura de gamificación del equipo de ventas:**
Define el sistema de gamificación adaptado al contexto de mi equipo: qué métricas gamificar (actividad: llamadas, emails, demos; pipeline: oportunidades creadas, avances de etapa; resultados: deals cerrados, ingresos), cómo equilibrar la gamificación de actividades versus resultados para no crear comportamientos que optimicen las métricas equivocadas, cómo incluir mecánicas colaborativas (desafíos de equipo, rachas colectivas) que complementen la competencia individual, y cómo adaptar el sistema para que sea justo entre vendedores con distintas cuotas, territorios o antigüedad.

**2. Estructures los torneos y competiciones temporales:**
Explica cómo diseñar las competiciones temporales que generan picos de energía y motivación: estructura de los sprints de ventas (duración óptima, KPIs del torneo, sistema de puntuación), cómo diseñar las recompensas del torneo para que sean percibidas como valiosas más allá del dinero (experiencias, reconocimiento, flexibilidad), cómo comunicar el torneo de forma que todos sientan que tienen posibilidades reales de ganar, y cómo evitar el efecto de rendición prematura de los vendedores que quedan rezagados a mitad del torneo.

**3. Diseñes el sistema de reconocimiento y logros permanentes:**
Define el sistema de logros y reconocimiento de largo plazo que complementa las competiciones temporales: qué hitos de carrera gamificar (primer deal, primer gran cliente, primer año de cuota cumplida, ranking de trimestre, etc.), cómo hacer el reconocimiento visible para el equipo sin ser condescendiente, cómo crear insignias o estatus que tengan valor simbólico real dentro de la cultura del equipo, y cómo usar los logros como parte del desarrollo profesional y no solo como entretenimiento.

**4. Integres la gamificación con el CRM y las herramientas del equipo:**
Describe cómo implementar la gamificación de ventas usando las herramientas que ya tiene el equipo: si usar funcionalidades nativas del CRM (Salesforce Trailhead, HubSpot Gamification), plataformas específicas (Spinify, Ambition, LevelEleven) o construir un dashboard personalizado, cómo automatizar el seguimiento de las métricas gamificadas para que no cree trabajo administrativo adicional al equipo o al manager, y cómo mostrar el estado del juego en tiempo real en la pantalla del equipo o en el canal de Slack.

**5. Gestionas los efectos negativos de la gamificación:**
Identifica los riesgos de la gamificación en entornos de ventas y cómo mitigarlos: comportamientos que optimizan las métricas pero dañan la calidad (deals pequeños para contar más cierres, datos del CRM incorrectos para ganar puntos de actividad), desmotivación de los vendedores que perciben el sistema como injusto, gamificación que aumenta la presión en vez de la motivación, y cómo gestionar a los vendedores que reaccionan negativamente a la competencia pública y prefieren reconocimiento privado.

**6. Midas el impacto y evolucionas el sistema:**
Define cómo medir si el sistema de gamificación está funcionando: qué métricas de rendimiento comparar antes y después del lanzamiento, cómo distinguir el efecto de la gamificación del efecto de otros factores (mercado, cambios de producto, nuevas contrataciones), qué señales indican que el sistema se ha vuelto rutinario y necesita renovarse, y cómo involucrar al equipo en el diseño de las siguientes temporadas de gamificación para mantener la motivación y la percepción de justicia.

Responde con un blueprint del sistema de gamificación de ventas, ejemplos de torneos y estructura de comunicación del lanzamiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar un sistema de gamificación del equipo comercial que aumente la motivación, la adopción del CRM y el rendimiento individual y colectivo en ventas.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de gamificación de producto para aumentar la retención y el engagement con IA',
                'description'       => 'Usa IA para diseñar la estrategia de gamificación de un producto digital que incremente la retención, el engagement y la monetización a través de mecánicas de juego integradas en el flujo de valor del producto.',
                'prompt_content'    => <<<'EOT'
Eres un director de producto con especialización en diseño de engagement loops y estrategias de retención basadas en gamificación para productos digitales. Tienes experiencia en el diseño de sistemas de hábitos, recompensas variables y progresión de usuario que aumentan el DAU/MAU ratio y el LTV sin comprometer la ética del producto ni crear mecánicas adictivas dañinas. Tu objetivo es ayudarme a diseñar o mejorar la estrategia de gamificación de nuestro producto de forma que sea coherente con la propuesta de valor central y que aumente los indicadores de retención y monetización de forma sostenible.

**Contexto del producto:**
[Describe el producto: tipo (app móvil, SaaS, plataforma, marketplace), propuesta de valor principal, métricas actuales de retención (D1, D7, D30), frecuencia de uso esperada versus actual y modelo de monetización]

**Perfil del usuario objetivo:**
[Describe el usuario: motivaciones principales para usar el producto, nivel de sofisticación digital, sensibilidad a mecánicas de juego explícitas versus implícitas, y si hay riesgo de que mecánicas agresivas dañen la percepción de marca]

**Contexto competitivo:**
[Indica si los competidores principales usan gamificación y cómo, qué referentes de gamificación fuera del sector admiras (Duolingo, LinkedIn, Strava, etc.) y por qué]

---

Con este contexto, necesito que:

**1. Diagnostiques los loops de engagement actuales del producto:**
Analiza la estructura de engagement loop del producto: identifica el habit loop principal (trigger, acción, recompensa variable, inversión), dónde se rompe el loop y los usuarios abandonan (momento de fricción mayor), qué momentos del flujo del producto tienen potencial para insertar mecánicas de gamificación sin interrumpir el valor, y qué comportamientos clave quiero reforzar que actualmente no tienen ningún sistema de recompensa.

**2. Diseñes el mapa de mecánicas de gamificación por etapa del ciclo de vida:**
Define qué mecánicas de gamificación son más adecuadas en cada etapa del ciclo de vida del usuario: onboarding (retos de bienvenida, quick wins, barra de completado del perfil), uso regular (rachas de uso, desafíos semanales, sistema de puntos), momento de churn (misiones de rescate, recompensas de regreso), y usuarios avanzados (estatus premium, acceso a funcionalidades exclusivas, roles de embajador o mentor). Para cada etapa justifica por qué esa mecánica es la más efectiva.

**3. Diseñes el sistema de progresión y recompensas del producto:**
Explica cómo diseñar el sistema de progresión que mantiene el engagement a largo plazo: estructura de niveles con beneficios reales o simbólicos, cómo escalar la dificultad de forma que siempre haya un siguiente reto alcanzable, cómo diseñar las recompensas variables que generan anticipación (el principio de la ranura), y cómo evitar que el sistema se sienta como trabajo adicional en lugar de como diversión o valor añadido.

**4. Integres la gamificación en la estrategia de monetización:**
Describe cómo usar la gamificación para apoyar los objetivos de monetización sin que se sienta manipulador: cómo usar el progreso y los logros para crear momentos naturales de upsell a planes premium, cómo diseñar elementos de gamificación que sean parte del plan de pago (estatus exclusivo, insignias premium, acceso a contenido exclusivo), y cómo evitar el pay-to-win que destruye la percepción de justicia y ahuyenta a los usuarios gratuitos, que son los embajadores del producto.

**5. Midas el impacto de la gamificación en los indicadores del producto:**
Define el framework de medición del impacto de las mecánicas de gamificación: qué experimentos A/B diseñar para aislar el efecto de cada mecánica, qué métricas de producto monitorizar (retención por cohorte, frecuencia de sesión, profundidad de uso, tasa de conversión a pago), cómo detectar si una mecánica está generando engagement superficial (inflando métricas sin crear valor real) versus engagement de calidad, y cuándo tomar la decisión de eliminar una mecánica que no está funcionando.

**6. Evalúes la ética y los límites de la gamificación en el producto:**
Describe cómo establecer los principios éticos que guían el diseño de la gamificación: cómo distinguir entre diseño persuasivo ético (facilitar comportamientos que el usuario quiere tener) versus patrones oscuros (crear necesidad artificial o explotar sesgos cognitivos), cómo asegurarte de que el sistema de gamificación respeta la autonomía del usuario y no crea dependencia no deseada, y cómo gestionar las críticas de usuarios o medios que perciben las mecánicas de gamificación como manipuladoras.

Proporciona el mapa de engagement loops, la hoja de ruta de implementación por sprints y el framework de medición de impacto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la estrategia de gamificación de un producto digital que incremente la retención, el engagement y la monetización de forma sostenible y ética.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gamificación del onboarding y la formación corporativa con IA',
                'description'       => 'Usa IA para diseñar programas de onboarding y formación corporativa gamificados que aceleren el tiempo de productividad, aumenten el engagement con los contenidos y mejoren la retención del conocimiento.',
                'prompt_content'    => <<<'EOT'
Eres un experto en learning & development (L&D) y diseño instruccional con especialización en gamificación de entornos corporativos de aprendizaje. Tienes experiencia en el diseño de programas de onboarding y formación que combinan mecánicas de juego con pedagogía efectiva para aumentar el engagement, la retención del conocimiento y la velocidad de adopción de habilidades en nuevos empleados y equipos en proceso de upskilling. Tu objetivo es ayudarme a diseñar o mejorar los programas de formación gamificados de nuestra organización.

**Contexto de la organización:**
[Describe la empresa: sector, tamaño, distribución geográfica del equipo (presencial, remoto, híbrido), perfil demográfico de los empleados y plataforma de formación actual (LMS, si la hay)]

**Tipo de programa a gamificar:**
[Indica si se trata de onboarding de nuevos empleados, formación técnica, soft skills, cumplimiento normativo (compliance), desarrollo de liderazgo, o una combinación]

**Problemas actuales con la formación:**
[Describe los problemas: baja tasa de completado de cursos, falta de aplicación del conocimiento al trabajo real, tiempo excesivo hasta la primera productividad en nuevos empleados, etc.]

---

Con este contexto, necesito que:

**1. Diseñes la arquitectura del programa de formación gamificado:**
Define la estructura del programa gamificado: cómo organizar el contenido en misiones o niveles progresivos que guíen al empleado desde el conocimiento básico hasta la aplicación avanzada, qué mecánicas de gamificación son más adecuadas para el perfil de mis empleados (puntos y badges para reconocimiento, leaderboards para equipos competitivos, narrativa y personajes para inmersión, retos prácticos para adultos orientados a resultados), y cómo equilibrar la gamificación con el respeto a la autonomía de los adultos que pueden percibir los juegos como infantilizantes.

**2. Diseñes los módulos de onboarding gamificado:**
Explica cómo estructurar el onboarding gamificado de nuevos empleados: cómo usar la primera semana para crear el hábito de participación en el programa (quick wins diarios, bienvenida personalizada, primer logro en las primeras horas), cómo gamificar las interacciones con el equipo y los procesos de la empresa (misión de conocer a 5 compañeros, reto de completar la primera tarea real, logro por primera reunión con el manager), y cómo conectar el progreso del programa con hitos reales de productividad que el empleado puede celebrar.

**3. Diseñes mecánicas de evaluación y refuerzo del conocimiento:**
Define cómo usar mecánicas de gamificación para evaluar y reforzar el conocimiento de forma que no se sienta como un examen: quizzes rápidos con puntos, simulaciones de situaciones reales con retroalimentación inmediata, retos de aplicación práctica con revisión por pares, y spaced repetition gamificada que envía al empleado mini-desafíos en los días posteriores a la formación para afianzar lo aprendido. Describe cómo usar el error como oportunidad de aprendizaje sin crear ansiedad.

**4. Diseñes el sistema de reconocimiento y progresión de carrera gamificado:**
Explica cómo conectar la gamificación de la formación con el desarrollo profesional real: qué logros del programa de formación tienen visibilidad en el perfil del empleado o en la evaluación de desempeño, cómo diseñar los certificados y badges digitales que el empleado puede compartir en LinkedIn o en su perfil interno, cómo crear rutas de aprendizaje gamificadas que conduzcan a promociones o nuevas responsabilidades, y cómo hacer que el jefe vea el progreso del empleado para que pueda reforzarlo con reconocimiento real.

**5. Implementes el programa con las herramientas disponibles:**
Describe cómo implementar la gamificación en las herramientas de formación más comunes: LMS con funcionalidades de gamificación (360Learning, Docebo, TalentLMS), gamificación sobre Slack o Teams (bots de trivia, challenges en canales), plataformas específicas de gamificación de aprendizaje (Kahoot! for Work, Mentimeter, Articulate), y cómo implementar una versión sencilla con herramientas básicas (formularios, hojas de cálculo compartidas, canales de Slack) si el presupuesto es limitado.

**6. Midas el impacto de la formación gamificada:**
Define el framework de evaluación del programa gamificado usando el modelo de Kirkpatrick adaptado: reacción (¿el empleado disfrutó y encontró valor en el programa?), aprendizaje (¿retuvo el conocimiento?), comportamiento (¿aplica lo aprendido en el trabajo?), resultados (¿mejoró la productividad, la retención, los KPIs de negocio?). Para cada nivel define las métricas específicas y cómo recopilarlas de forma sencilla sin crear una burocracia de evaluación.

Incluye ejemplos de misiones de onboarding, plantillas de badges y estructura de un módulo de formación gamificado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar programas de onboarding y formación corporativa gamificados que aceleren la productividad de los empleados, aumenten el engagement con los contenidos y mejoren la retención del conocimiento.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelización del ROI de iniciativas de gamificación con IA',
                'description'       => 'Usa IA para construir modelos financieros que cuantifiquen el retorno de la inversión de programas de gamificación de usuarios, empleados o clientes, y justifiquen el presupuesto ante la dirección.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero con experiencia en la modelización del ROI de inversiones en tecnología y experiencia de usuario, incluyendo programas de gamificación de clientes, empleados y productos digitales. Tu objetivo es ayudarme a construir el modelo financiero que cuantifica el retorno esperado de una iniciativa de gamificación, identifica los drivers de valor más críticos y justifica la inversión ante el comité de dirección o la junta de inversión.

**Contexto de la iniciativa de gamificación:**
[Describe el programa: gamificación de clientes (fidelización), gamificación de empleados (formación, ventas), gamificación de producto (retención de usuarios), o una combinación. Indica el alcance estimado (número de usuarios o empleados impactados) y el presupuesto de implementación previsto]

**Datos de referencia disponibles:**
[Indica qué datos tienes: métricas actuales de retención, frecuencia de compra, LTV, tasa de churn, coste de adquisición de cliente (CAC), productividad actual del equipo, coste de rotación de empleados, etc.]

**Horizonte de evaluación:**
[Período para el análisis: 12 meses, 24 meses, 3 años. Indica si es necesario calcular el payback period para justificar la inversión inicial]

---

Con este contexto, necesito que:

**1. Diseñes la estructura del modelo de ROI de gamificación:**
Define los componentes del modelo financiero de ROI de la iniciativa de gamificación: qué beneficios cuantificar (incremento de retención, aumento de frecuencia de compra o uso, incremento de ticket promedio, reducción de churn, mejora de productividad de empleados, reducción de coste de rotación, reducción de costes de soporte por mayor autonomía del usuario), qué costes incluir (desarrollo o licencia de la plataforma, diseño de contenidos, gestión del programa, costes de recompensas, costes de marketing del programa), y cómo estructurar el modelo en escenarios conservador, base y optimista.

**2. Cuantifiques el impacto en el LTV del cliente:**
Para programas de gamificación de clientes, define la metodología para cuantificar el impacto en el valor de vida del cliente: cómo medir el incremento de frecuencia de compra atribuible al programa, cómo estimar el aumento del ticket promedio por el efecto de los retos y recompensas, cómo calcular la reducción del churn y su impacto acumulado en el LTV, y cómo construir el modelo de cohortes que muestra la diferencia en LTV entre clientes participantes y no participantes en el programa.

**3. Cuantifiques el impacto en la productividad del empleado:**
Para programas de gamificación de empleados, define cómo cuantificar el impacto económico: incremento del rendimiento del equipo de ventas (más deals, mayor ticket, ciclo más corto), reducción del tiempo hasta la primera productividad de nuevos empleados (time-to-productivity), mejora de la retención de empleados y reducción del coste de rotación (coste de sustitución de un empleado equivale a 6-9 meses de salario), y mejora de los indicadores de engagement del empleado correlacionados con productividad.

**4. Modelices los costes totales del programa:**
Describe cómo estructurar el modelo de costes completo de la iniciativa de gamificación: costes de tecnología (build versus buy, licencias anuales de plataforma, integración con sistemas existentes), costes de diseño y contenido (diseño del sistema visual, creación de misiones y retos, traducción si aplica), costes de gestión operativa (persona responsable del programa, actualización de contenidos, gestión de recompensas), costes de recompensas (estimación del presupuesto de premios basada en las tasas de participación y canje esperadas), y costes de marketing del programa (comunicación interna o externa del lanzamiento y activaciones).

**5. Construyas el modelo de payback y sensibilidad:**
Define el análisis de payback period y sensibilidad del modelo: cuántos meses tarda la inversión en recuperarse bajo cada escenario, qué variables tienen mayor impacto en el ROI (tasa de participación, incremento de retención, coste de las recompensas, tasa de canje), cómo presentar el análisis de sensibilidad para que la dirección entienda cuáles son los supuestos críticos que deben validarse antes de la inversión, y qué nivel mínimo de participación se necesita para que el programa sea rentable (punto de equilibrio).

**6. Presentes el caso de negocio ante la dirección:**
Explica cómo estructurar el executive summary del caso de negocio de la gamificación para el comité de dirección: qué métricas de ROI presentar primero (las más conservadoras y creíbles), cómo responder a las objeciones más frecuentes (los programas de fidelización cuestan mucho y no funcionan, los empleados no van a participar, no tenemos datos para medir el impacto), y cómo proponer un piloto limitado como primer paso para validar los supuestos del modelo antes de comprometer el presupuesto total.

Incluye plantillas de modelo financiero en formato tabla, ejemplos de benchmarks de ROI de programas de gamificación de referencia y estructura del executive summary.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir modelos financieros que cuantifiquen el ROI de programas de gamificación y justifiquen la inversión ante la dirección con escenarios, análisis de sensibilidad y caso de negocio.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal de programas de gamificación y fidelización de clientes con IA',
                'description'       => 'Usa IA para identificar y gestionar los riesgos legales de programas de gamificación de usuarios y clientes, incluyendo privacidad de datos, regulación de loterías y protección del consumidor.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho digital, protección de datos y regulación del comercio electrónico con experiencia en el asesoramiento legal de programas de fidelización, promociones gamificadas y plataformas digitales en España y la Unión Europea. Tu objetivo es ayudarme a identificar y gestionar los riesgos legales de un programa de gamificación de usuarios o clientes, asegurando el cumplimiento normativo sin paralizar la innovación del producto.

**Descripción del programa de gamificación:**
[Describe el programa: tipo de mecánicas (puntos, sorteos, retos, clasificaciones), tipo de recompensas (descuentos, productos, dinero en efectivo, acceso premium), si hay elementos aleatorios en las recompensas, y si el programa va dirigido a consumidores generales o a un segmento específico (menores, empleados, profesionales)]

**Jurisdicciones relevantes:**
[Indica los países o regiones donde opera el programa: España, Unión Europea, EEUU, Latinoamérica, o alcance global]

**Datos de usuarios que procesa el programa:**
[Describe qué datos recopila y procesa el programa: comportamiento de compra, datos de uso del producto, datos de perfil, datos de menores si aplica, y si se comparten con terceros para la gestión de recompensas]

---

Con este contexto, necesito que:

**1. Identifiques los riesgos legales del programa de gamificación:**
Define el mapa de riesgos legales del programa por categorías: regulación de juegos de azar y loterías (cuándo un programa de gamificación cruza la línea hacia la categoría legal de lotería o juego de azar según la Ley 13/2011 en España y sus equivalentes en la UE), protección del consumidor y publicidad engañosa (requisitos de transparencia en las condiciones del programa, prohibición de términos abusivos), protección de datos (base legal para el tratamiento de datos del programa bajo el RGPD, retención de datos, derechos del interesado), y regulación específica de sectores si aplica (finanzas, salud, juegos para menores).

**2. Evalúes si el programa se clasifica como juego de azar:**
Explica los criterios legales para determinar si las mecánicas del programa de gamificación están sujetas a la regulación de juegos de azar: la combinación de azar, destreza y precio como elementos definitorios, cuándo un sorteo o premio aleatorio requiere licencia de juego, cuáles son las diferencias legales entre promociones comerciales, concursos de destreza y loterías, y cómo diseñar las mecánicas del programa para que queden claramente fuera de la regulación de juego de azar sin perder el atractivo de la recompensa variable.

**3. Redactes los términos y condiciones del programa:**
Define qué debe incluir el documento de términos y condiciones del programa de gamificación: descripción completa de las mecánicas y reglas de participación, condiciones de acumulación y canje de puntos o recompensas, derechos de la empresa a modificar o cancelar el programa, limitaciones de responsabilidad, proceso de reclamaciones, y si hay elementos de azar, los requisitos legales adicionales de transparencia sobre las probabilidades. Indica también cómo presentar estos términos de forma que sean legalmente válidos pero comprensibles para el usuario.

**4. Diseñes el framework de privacidad del programa:**
Define los requisitos de privacidad del programa bajo el RGPD: qué base legal usar para el tratamiento de datos de participación (ejecución de contrato, interés legítimo o consentimiento, según el caso), qué información incluir en la política de privacidad específica del programa, cómo gestionar los derechos del interesado (acceso, portabilidad, supresión) en el contexto del historial de puntos y logros, y cómo gestionar la transferencia de datos a terceros proveedores de tecnología o recompensas.

**5. Gestionas los riesgos específicos de programas dirigidos a menores:**
Si el programa puede incluir menores de edad, describe los requisitos legales adicionales: verificación de edad y consentimiento parental, restricciones específicas sobre recompensas monetarias para menores, cumplimiento del RGPD para menores (artículo 8, Digital Services Act), y diseño de las mecánicas para que no sean clasificadas como manipuladoras de menores. Define las salvaguardias técnicas y legales que deben implementarse.

**6. Diseñes el proceso de gestión de reclamaciones y disputas:**
Explica cómo diseñar un proceso de resolución de reclamaciones legalmente sólido para el programa: qué canal de reclamación ofrecer (email, formulario, teléfono), en qué plazo responder para cumplir con la normativa de protección al consumidor, cómo gestionar las disputas sobre puntos no acreditados o recompensas no recibidas, cómo documentar las decisiones de forma que sean defendibles ante una reclamación formal o una investigación de la autoridad de consumo, y cuándo es recomendable incluir un sistema de mediación o arbitraje en los términos del programa.

Incluye checklist legal de lanzamiento del programa, estructura de los términos y condiciones y guía de bases legales RGPD aplicables.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Identificar y gestionar los riesgos legales de programas de gamificación de usuarios y clientes, garantizando el cumplimiento de la regulación de juegos, privacidad y protección al consumidor.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gamificación de la experiencia de cliente y el soporte con IA',
                'description'       => 'Usa IA para diseñar mecánicas de gamificación en la experiencia de onboarding, soporte y éxito del cliente que aceleren la adopción del producto y reduzcan la carga del equipo de CS.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success con experiencia en el diseño de experiencias de onboarding gamificadas y programas de engagement de cliente que aceleran el time-to-value, reducen el churn temprano y crean hábitos de uso sostenidos. Tu objetivo es ayudarme a diseñar mecánicas de gamificación en el journey del cliente que aceleren la adopción del producto, aumenten el engagement a largo plazo y reduzcan la carga de trabajo del equipo de CS al mismo tiempo.

**Contexto del producto y los clientes:**
[Describe el producto: tipo (SaaS B2B, app B2C, plataforma), complejidad del onboarding, perfil del cliente (individual o empresa, familiaridad técnica), métricas actuales de adopción (time-to-value, tasa de completado del onboarding, churn a 90 días) y tamaño del equipo de CS]

**Principales retos de adopción:**
[Describe dónde pierden los clientes la motivación: en qué paso del onboarding abandonan, qué funcionalidades clave no descubren, cuánto tardan en obtener el primer resultado de valor real con el producto]

**Recursos del equipo de CS:**
[Número de CSMs, ratio de cuentas por CSM, si es modelo high-touch, mid-touch o low-touch, y qué herramientas de CS usan]

---

Con este contexto, necesito que:

**1. Diseñes el onboarding gamificado del cliente:**
Define la estructura del onboarding gamificado: cómo organizar el proceso de activación en misiones o etapas con hitos claros y recompensas visibles, qué quick wins diseñar para que el cliente obtenga valor real en las primeras horas o días (no solo completar formularios, sino ver un resultado tangible del producto), cómo usar barras de progreso y checklist gamificados para guiar al cliente sin abrumarlo, y cómo personalizar el onboarding gamificado según el segmento o el caso de uso del cliente.

**2. Diseñes el sistema de logros y certificaciones de adopción:**
Explica cómo crear un sistema de logros y certificaciones que celebre los hitos de adopción del cliente: qué hitos de uso merecen reconocimiento formal (primera integración completada, primer workflow automatizado, primer equipo invitado, primera semana de uso diario), cómo diseñar los badges o certificados de adopción que el cliente pueda compartir (power user, certified admin, etc.), y cómo conectar estos logros con beneficios reales (acceso anticipado a nuevas funcionalidades, sesión de revisión estratégica con el CSM, descuento en renovación).

**3. Gamifiques el proceso de soporte y auto-resolución:**
Define cómo usar mecánicas de gamificación en el soporte para reducir los tickets al tiempo que aumentas la satisfacción del cliente: sistema de puntos por resolver dudas en la base de conocimiento antes de abrir un ticket, logros por completar certificaciones de formación del producto, reconocimiento en la comunidad de usuarios por ayudar a otros clientes, y cómo diseñar los flujos de soporte guiado (troubleshooting wizards) de forma que se sientan como una misión con recompensa en lugar de un proceso burocrático.

**4. Diseñes el programa de engagement de largo plazo:**
Explica cómo mantener el engagement del cliente más allá de los primeros 90 días: misiones mensuales o trimestrales ligadas a los objetivos de negocio del cliente, retos de optimización que impulsan el uso de funcionalidades avanzadas, programa de embajadores o campeones con reconocimiento especial y acceso privilegiado, y cómo usar los datos de salud del cliente (health score) para activar automáticamente mecánicas de rescate antes de que el churn sea inminente.

**5. Escales la gamificación sin escalar el equipo de CS:**
Describe cómo implementar la gamificación de CS de forma que reduzca la carga del equipo: qué parte del onboarding gamificado puede ser completamente automatizada (emails de activación con trigger de logros, notificaciones in-app de progreso), qué parte requiere intervención del CSM y en qué momento, cómo usar los datos de participación en el programa gamificado como señales de salud del cliente para que el CSM priorice sus intervenciones, y cómo medir el ahorro de tiempo del equipo de CS atribuible al programa gamificado.

**6. Midas el impacto del programa de CS gamificado:**
Define el framework de medición del impacto: qué métricas de CS monitorizar antes y después del programa (time-to-value, tasa de completado del onboarding, NRR a 12 meses, churn a 90 días, tickets de soporte por cuenta, NPS), cómo diseñar los experimentos para aislar el efecto de la gamificación de otros factores, y qué umbral de mejora en las métricas justifica el coste de mantenimiento del programa de CS gamificado.

Responde con un blueprint de onboarding gamificado, ejemplos de misiones de adopción y framework de medición de impacto en CS.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar mecánicas de gamificación en el onboarding y el soporte del cliente que aceleren la adopción del producto, aumenten el engagement a largo plazo y reduzcan la carga del equipo de CS.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gamificación de comunidades y audiencias para freelancers y creadores con IA',
                'description'       => 'Usa IA para diseñar estrategias de gamificación de comunidades online y audiencias que aumenten el engagement, la fidelidad y los ingresos de freelancers, creadores y consultores independientes.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de comunidades y creador de contenido con experiencia en el diseño de programas de gamificación para comunidades online, newsletters de pago, membresías y programas de formación de creadores independientes y freelancers. Tu objetivo es ayudarme a diseñar un sistema de gamificación para mi comunidad o audiencia que aumente el engagement, la retención de miembros de pago, el boca a boca y los ingresos sin que la gamificación se sienta forzada o manipuladora.

**Contexto de tu negocio como freelancer o creador:**
[Describe tu negocio: tipo de creador (newsletter, podcast, curso, comunidad de membresía, agencia, consultoría), tamaño de la audiencia, modelo de ingresos (membresía, curso, sponsorship, servicio), plataforma principal (Substack, Circle, Discord, Kajabi, comunidad propia, etc.) y el nivel de engagement actual]

**Tipo de comunidad o audiencia:**
[Describe a tu audiencia: profesión o interés principal, nivel de sofisticación, motivación para estar en tu comunidad (aprendizaje, networking, acceso a ti, apoyo entre pares), y si ya hay una cultura de participación activa o es mayoritariamente de lectura pasiva]

**Objetivos prioritarios:**
[Indica 2 o 3 objetivos: aumentar la tasa de retención de miembros de pago, aumentar el contenido generado por los miembros, reducir el churn, conseguir más referencias orgánicas, monetizar mejor la audiencia existente]

---

Con este contexto, necesito que:

**1. Diseñes el sistema de gamificación adaptado a comunidades de creadores:**
Define las mecánicas de gamificación más adecuadas para una comunidad de nicho: sistemas de estatus y reputación dentro de la comunidad (miembro destacado, colaborador del mes, experto reconocido), retos y desafíos colectivos que aumentan la participación y el contenido generado, rachas de participación que recompensan la consistencia, y mecánicas de progresión que hacen que los miembros más activos sientan que su dedicación es reconocida y tiene valor real dentro de la comunidad.

**2. Diseñes los programas de retos y desafíos para tu audiencia:**
Explica cómo crear retos y desafíos que activen a tu audiencia de forma regular: estructura de un challenge de 7, 14 o 30 días que genere contenido compartible y nuevos suscriptores, cómo diseñar los retos para que tengan distintos niveles de dificultad (beginner, avanzado) y sean accesibles para toda la audiencia, cómo incentivar la documentación pública del progreso en el reto para crear evidencia social y viralidad orgánica, y cómo convertir los retos temporales en un activo de contenido reutilizable.

**3. Diseñes el sistema de reconocimiento y estatus de la comunidad:**
Define el sistema de reconocimiento público dentro de la comunidad: qué comportamientos merece reconocimiento (respuestas de calidad, ayuda entre miembros, proyectos terminados, racha de participación), cómo crear los niveles o rangos de la comunidad con nombres que resuenen con la identidad de tu audiencia, qué beneficios concretos dan los distintos niveles (acceso a sesiones privadas, preguntas directas al creador, badge en el perfil, mención en el newsletter), y cómo hacer que los miembros de nivel alto se conviertan en embajadores activos de la comunidad.

**4. Gamifiques el programa de referidos y el crecimiento orgánico:**
Describe cómo usar mecánicas de gamificación para incentivar el boca a boca: programa de referidos gamificado donde el miembro avanza en nivel o desbloquea recompensas cuando sus referidos se convierten en miembros de pago, retos de difusión donde compartir contenido o invitar a alguien tiene recompensas visibles, y cómo hacer que la participación en la comunidad cree naturalmente contenido y conversaciones que atraen a nuevos miembros orgánicamente.

**5. Integres la gamificación con tu modelo de negocio:**
Explica cómo conectar la gamificación de la comunidad con tus fuentes de ingresos: cómo usar el progreso y los logros de la comunidad como argumento para la conversión de gratuito a pago, qué elementos de gamificación son exclusivos de la membresía de pago y justifican el precio, cómo usar los datos de participación gamificada para identificar a los miembros más comprometidos que son los mejores candidatos para tus servicios de mayor valor (consultoría, formación avanzada, mastermind), y cómo diseñar la renovación anual como un hito del juego que se celebra.

**6. Implementes la gamificación con las herramientas disponibles:**
Describe cómo implementar la gamificación de la comunidad de forma práctica con herramientas asequibles: gamificación nativa de plataformas de comunidad (Circle, Discord, Mighty Networks, Kajabi Communities), automatizaciones con herramientas como Zapier para conectar comportamientos con recompensas, tableros públicos de progreso con herramientas simples (Notion, Airtable), y cómo gestionar manualmente un sistema sencillo de badges y reconocimiento si la comunidad es pequeña y no justifica una plataforma especializada. Incluye una estimación del tiempo de gestión semanal para cada opción.

Responde con un blueprint de gamificación adaptado a mi tipo de comunidad, ejemplos de retos y estructura de programa de reconocimiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar estrategias de gamificación para comunidades online y audiencias de freelancers y creadores que aumenten el engagement, la fidelidad y los ingresos.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
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
