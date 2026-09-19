<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills459Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión y crecimiento de comunidades de marca con IA',
                'description'      => 'Diseña la estrategia de comunidad online de una marca, crea un plan de contenidos y gestiona las interacciones usando IA para escalar el engagement sin perder autenticidad.',
                'prompt_content'   => <<<'EOT'
Eres un experto en community marketing y gestión de comunidades digitales con experiencia en marcas de consumo, tecnología y estilo de vida. Tu misión es ayudarme a construir y escalar una comunidad online auténtica alrededor de una marca, que genere lealtad, contenido generado por el usuario y ventas recurrentes.

Contexto de la marca:
- Puede ser una marca de producto (alimentación saludable, moda sostenible, tecnología) o de servicio (software, formación, bienestar)
- Situación actual: la marca tiene presencia en redes sociales pero poca interacción real, los comentarios son superficiales y no hay una comunidad cohesionada
- Objetivo: crear una comunidad activa de entre 5.000 y 50.000 miembros que genere contenido propio, apoye los lanzamientos y actúe como canal de ventas recurrente

Estrategia de comunidad:

1. DISEÑO DE LA COMUNIDAD
Define los fundamentos de la comunidad antes de lanzarla:
- El propósito compartido: qué une a los miembros más allá del producto, cuál es la transformación o el estilo de vida que la comunidad celebra y promueve
- Los rituales de la comunidad: las actividades, eventos o dinámicas recurrentes que crean sentido de pertenencia (reto semanal, pregunta del lunes, showcase de proyectos del viernes)
- Las reglas y la cultura: cómo definir los principios de convivencia que protegen el tono de la comunidad sin hacerla rígida o exclusiva
- Plataforma de la comunidad: comparativa entre Discord, Slack, Circle, Telegram, grupos de Facebook y LinkedIn; criterios para elegir según el perfil del miembro objetivo

2. PLAN DE CONTENIDOS PARA LA COMUNIDAD
Diseña el sistema de contenidos que mantiene viva la comunidad:
- Los cinco tipos de publicación que toda comunidad necesita: educativo (aporta valor), inspirador (eleva la aspiración), interactivo (genera conversación), exclusivo (premia la pertenencia), generado por el usuario (celebra a los miembros)
- Calendario de contenidos mensual: frecuencia de publicación por tipo de contenido, momentos de mayor actividad de la comunidad, contenidos ancla mensuales (AMA, sesión en vivo, desafío)
- Uso de IA para generar ideas de contenido: cómo dar a Claude el contexto de la comunidad y la audiencia para que proponga 20 ideas de publicaciones para el mes siguiente
- Adaptar el contenido de la marca al tono de la comunidad: la diferencia entre hablar como marca y hablar como miembro de la comunidad

3. MODERACIÓN Y GESTIÓN DE INTERACCIONES
Diseña el sistema de gestión de la comunidad a escala:
- El rol del community manager: qué debe hacer a diario (moderar, responder, estimular la conversación), a la semana (análisis de engagement, reportar a la marca, preparar contenidos) y al mes (informe de crecimiento, revisión de la estrategia)
- Moderación con IA: cómo configurar herramientas de moderación automática para detectar spam, contenido inapropiado o violaciones de las normas sin eliminar la autenticidad
- Respuestas a interacciones frecuentes: cómo usar IA para generar borradores de respuesta a los comentarios más habituales que el community manager personaliza antes de publicar
- Gestión de conflictos: protocolo para responder a un miembro insatisfecho, una crítica pública a la marca o un debate que se calienta dentro de la comunidad

4. PROGRAMA DE EMBAJADORES Y LÍDERES
Diseña el sistema de identificación y desarrollo de líderes de la comunidad:
- Criterios de selección de embajadores: combinación de actividad (frecuencia de participación), calidad de las contribuciones y alineación con los valores de la marca
- El programa de embajadores: qué ofrece la marca a los embajadores (acceso anticipado a productos, descuentos, reconocimiento público, acceso al equipo), qué pide a cambio (publicaciones, presencia en eventos, feedback)
- Cómo usar IA para identificar a los miembros con mayor potencial de embajador: análisis de las interacciones, tono de los mensajes, alcance de sus contribuciones
- Onboarding del embajador: qué información darle, cómo integrarle en el equipo de la marca, cómo mantener su motivación a lo largo del tiempo

5. EVENTOS Y ACTIVACIONES DE COMUNIDAD
Diseña el calendario de activaciones que elevan el sentido de pertenencia:
- Eventos online: AMA con el fundador o equipo, workshop exclusivo para miembros, sesión de feedback de producto, hackathon o reto creativo
- Eventos presenciales o híbridos: meetup local de miembros de la comunidad, evento anual de la comunidad (Community Day), pop-up store exclusiva para miembros
- Lanzamientos en comunidad primero: cómo usar la comunidad como primer canal de lanzamiento de nuevos productos, creando exclusividad y generando contenido orgánico
- Uso de IA para la producción de eventos: generación del plan del evento, materiales de comunicación interna, guion del moderador, encuesta post-evento

6. MÉTRICAS Y KPIs DE COMUNIDAD
Define el sistema de medición del éxito de la comunidad:
- Métricas de crecimiento: nuevos miembros por mes, fuente de captación (orgánico, campañas, referidos), tasa de retención a 30, 60 y 90 días
- Métricas de engagement: DAU y MAU (usuarios activos diarios y mensuales), tasa de participación (miembros que publican o comentan vs. solo leen), tiempo medio de respuesta a preguntas en la comunidad
- Métricas de negocio: tasa de conversión de miembro de comunidad a cliente, valor de vida (LTV) de los clientes que son miembros de comunidad vs. los que no, impacto en NPS
- Cómo usar IA para generar el informe mensual de comunidad: análisis de las conversaciones más activas, tendencias de sentimiento, recomendaciones para el mes siguiente
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar y gestionar comunidad online de marca con IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas de comunidad developer y sistemas de engagement con IA',
                'description'      => 'Diseña y construye la infraestructura técnica de una comunidad de desarrolladores, con sistemas de gamificación, notificaciones inteligentes y análisis de engagement.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software con especialización en plataformas de comunidad, sistemas de tiempo real y developer experience. Necesito tu ayuda para diseñar e implementar la infraestructura técnica de una plataforma de comunidad para desarrolladores que combine foros de discusión, sistema de reputación, notificaciones inteligentes y análisis de engagement.

Contexto del proyecto:
- Empresa de software o herramienta de desarrollo que quiere construir una comunidad propia para sus usuarios
- Alternativas consideradas y descartadas: Discord (sin control de datos), Slack (caro a escala), foros legacy (mala UX)
- Objetivo: plataforma propia con entre 5.000 y 100.000 usuarios activos, con experiencia de usuario superior a las alternativas y datos propios de comportamiento

Arquitectura técnica:

1. ARQUITECTURA DE LA PLATAFORMA
Define la arquitectura general del sistema:
- Stack tecnológico recomendado: backend en Node.js o Go para baja latencia, base de datos PostgreSQL para datos relacionales y Redis para datos de sesión y caché, Elasticsearch para búsqueda full-text en los posts
- Componentes principales: servicio de autenticación (OAuth con GitHub, Google, SSO empresarial), servicio de posts y comentarios, servicio de notificaciones, servicio de búsqueda, servicio de análisis
- Modelo de datos: estructura de tablas para usuarios, posts, comentarios, etiquetas, votos, menciones, reputación, eventos de engagement
- Escalabilidad: cómo diseñar el sistema para pasar de 1.000 a 100.000 usuarios activos sin cambios de arquitectura, uso de colas de mensajes (RabbitMQ o Kafka) para desacoplar los servicios

2. SISTEMA DE POSTS Y DISCUSIONES EN TIEMPO REAL
Diseña el corazón funcional de la plataforma:
- Tipos de contenido: posts de pregunta-respuesta, posts de showcase (mostrar proyectos), posts de debate, anuncios del equipo
- Edición colaborativa: soporte para Markdown con preview en tiempo real, embedding de código con syntax highlighting, soporte para imágenes y archivos adjuntos
- Tiempo real con WebSockets: notificaciones de nuevas respuestas mientras el usuario está en el hilo, indicador de "alguien está escribiendo", recuento de lecturas en tiempo real
- Moderación técnica: sistema de flags de usuario, cola de moderación para el equipo, integración con API de moderación de contenido para detectar automáticamente spam y contenido inapropiado

3. SISTEMA DE REPUTACIÓN Y GAMIFICACIÓN
Diseña el motor de engagement basado en comportamiento:
- Puntos y niveles: eventos que generan puntos (publicar, recibir votos positivos, respuesta marcada como solución, mencionar a otros, primer login del día), tabla de multiplicadores por actividad
- Insignias y logros: diseña 20 insignias con sus criterios de desbloqueo (primera publicación, primera solución, 100 votos recibidos, respuesta en menos de una hora, mentor de 10 nuevos usuarios)
- Leaderboard: semanal, mensual y all-time, filtrable por área temática o lenguaje de programación
- Privilegios por reputación: qué acciones desbloquea cada nivel (editar posts de otros, moderar, acceder a canales beta, votar en la hoja de ruta del producto)

4. SISTEMA DE NOTIFICACIONES INTELIGENTES
Diseña el sistema de notificaciones personalizadas:
- Eventos que generan notificación: respuesta a tu post, mención directa, nuevo post en etiqueta suscrita, badge desbloqueado, post trending en tu área
- Canal de entrega: in-app (tiempo real con WebSocket), email (digest diario o semanal configurable), push web (service worker)
- Personalización con IA: modelo que aprende los patrones de interacción del usuario para ajustar la frecuencia y el tipo de notificaciones y reducir la fatiga
- Anti-spam de notificaciones: reglas de agrupación (no enviar tres emails separados si hay tres respuestas en diez minutos), respeto del horario de silencio configurado por el usuario

5. ANÁLISIS DE ENGAGEMENT CON IA
Diseña el sistema de análisis del comportamiento de la comunidad:
- Eventos de tracking: cada acción del usuario (lectura, scroll, click, publicación, respuesta, voto, búsqueda) se registra con timestamp y contexto
- Dashboard de métricas para el community manager: usuarios activos diarios y mensuales, posts publicados por categoría, tiempo medio de primera respuesta, tasa de preguntas resueltas, mapa de calor de actividad por hora y día de la semana
- Detección de contenido de alto valor: algoritmo para identificar los posts que merecen ser destacados o promovidos en la home, basado en calidad de las respuestas, votos y engagement temprano
- Análisis de salud de la comunidad con IA: detección de usuarios en riesgo de abandono (inactividad creciente), identificación de lagunas de conocimiento (preguntas sin respuesta en más de 48 horas), alertas de tendencias emergentes en las conversaciones

6. INTEGRACIÓN CON EL ECOSISTEMA DEL PRODUCTO
Conecta la comunidad con el producto principal:
- Single Sign-On: integración con el sistema de autenticación del producto para que los usuarios existentes entren automáticamente con sus credenciales
- Contexto del producto en la comunidad: vincular las preguntas de la comunidad con la documentación oficial, los changelogs y los issues de GitHub
- Feedback loop: cómo capturar las peticiones de funcionalidad mencionadas en la comunidad y llevarlas al sistema de gestión de producto (Jira, Linear, GitHub Issues) de forma automática
- API pública de la comunidad: qué endpoints exponer para que usuarios avanzados puedan construir integraciones propias, y cómo diseñar la documentación de esa API con IA
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar plataforma técnica de comunidad de developers con gamificación e IA',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de comunidad y espacios digitales de pertenencia con IA',
                'description'      => 'Diseña la experiencia visual y de interacción de plataformas de comunidad online que generen sentido de pertenencia, faciliten la participación y refuercen la identidad de grupo.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de producto y experiencia especializado en plataformas de comunidad, espacios digitales colaborativos y diseño para el compromiso. Necesito tu ayuda para diseñar la experiencia visual y de interacción de una plataforma de comunidad online que genere un sentido genuino de pertenencia y facilite la participación activa de sus miembros.

Contexto del proyecto:
- Plataforma de comunidad para una audiencia específica: puede ser una comunidad de profesionales, de usuarios de un producto, de apasionados de una temática o de una marca
- Problema de diseño: muchas plataformas de comunidad se sienten como tablones de anuncios sin alma; el objetivo es diseñar un espacio que se sienta vivo, cercano y que refleje la identidad del grupo
- Entregables: guía de experiencia de la plataforma, wireframes de las pantallas principales, sistema de microinteracciones

Proceso de diseño:

1. DISEÑO PARA EL SENTIDO DE PERTENENCIA
Define los principios de diseño específicos para comunidades:
- El principio de reconocimiento: cómo hacer que cada miembro sienta que la plataforma lo conoce y que su presencia importa (avatar prominente, historial de contribuciones visible, perfil enriquecido)
- El principio de visibilidad de la comunidad: cómo mostrar que hay vida activa en la plataforma (indicadores de miembros online, actividad reciente en tiempo real, número de conversaciones activas hoy)
- El principio de contexto compartido: cómo diseñar espacios donde los miembros tengan referencias comunes (página de inicio de la comunidad, eventos compartidos, hitos del grupo)
- Cómo usar IA para analizar el comportamiento de los usuarios en plataformas existentes y identificar los patrones de diseño que predicen mayor retención

2. ARQUITECTURA DE INFORMACIÓN
Diseña la estructura de espacios dentro de la comunidad:
- Jerarquía de espacios: canales o categorías temáticas, subcomunidades por interés o nivel, espacios abiertos a todos vs. espacios exclusivos para miembros con mayor antigüedad
- Página de inicio de la comunidad: qué información mostrar en el feed principal (actividad reciente, posts destacados, eventos próximos, nuevos miembros), cómo personalizarla sin perder la sensación de comunidad compartida
- Perfil del miembro: qué datos mostrar del usuario (nivel de participación, insignias, áreas de expertise, proyectos compartidos), cómo diseñar el perfil como carta de presentación dentro de la comunidad
- Búsqueda y descubrimiento: cómo diseñar el sistema de búsqueda y de recomendación para que los miembros encuentren personas, conversaciones y recursos relevantes fácilmente

3. MICROINTERACCIONES Y SEÑALES DE ENGAGEMENT
Diseña las interacciones pequeñas que crean engagement:
- Sistema de reacciones: más allá del "me gusta", diseña un sistema de reacciones que refleje la cultura de la comunidad y permita expresar matices (apoyo, inspiración, aprendizaje, humor, sorpresa)
- Animaciones de recompensa: diseña las microanimaciones que aparecen cuando un usuario recibe su primer voto positivo, cuando desbloquea una insignia o cuando su post llega a la portada
- Indicadores de presencia: cómo mostrar quién está online sin crear presión social, cómo representar el estado activo vs. inactivo de forma no intrusiva
- Feedback visual de la publicación: la animación y el mensaje de confirmación cuando alguien publica por primera vez, diseñado para reducir la ansiedad y celebrar la participación

4. ONBOARDING Y PRIMERA EXPERIENCIA
Diseña la experiencia de incorporación del nuevo miembro:
- Los primeros cinco minutos: qué mostrar al usuario justo después de crear su cuenta para que entienda el valor de la comunidad y se anime a hacer su primera contribución
- Tour interactivo: cómo guiar al nuevo miembro a través de los espacios principales sin abrumarlo, usando hotspots y tooltips contextuales
- La primera publicación como rito de paso: cómo reducir la barrera de la primera contribución con plantillas de introducción, preguntas sugeridas o retos de bienvenida
- El momento "aha": identifica cuál es la acción que hace que el nuevo miembro comprenda el valor real de la comunidad y diseña el flujo de onboarding para llegar a ese momento en menos de 10 minutos

5. DISEÑO PARA LA DIVERSIDAD DE COMPORTAMIENTOS
Diseña para los diferentes tipos de participante:
- Los creadores de contenido: diseño que facilita la publicación frecuente, con herramientas de edición avanzadas, programación de publicaciones y analítica personal de sus posts
- Los comentadores: diseño que hace fácil y gratificante responder y contribuir a conversaciones de otros, con respuestas rápidas, citas y menciones fluidas
- Los lectores silenciosos (lurkers): cómo diseñar para que los miembros que no publican sientan que forman parte de la comunidad aunque no publiquen, y cómo reducir gradualmente la barrera para que empiecen a participar
- Los moderadores y líderes: diseño de las herramientas de moderación que se integran de forma natural en la experiencia sin romper el flujo de la comunidad

6. DARK PATTERNS A EVITAR
Define los principios éticos del diseño de comunidad:
- Notificaciones manipuladoras: cómo distinguir entre notificaciones útiles y notificaciones diseñadas para crear ansiedad o dependencia, y cómo diseñar el sistema de notificaciones de forma ética
- FOMO artificial: cómo evitar los mecanismos de urgencia falsa (contadores que no significan nada, streaks que castigan en lugar de recompensar) que crean engagement a corto plazo pero destruyen la confianza
- Privacidad y control del usuario: cómo diseñar los controles de privacidad para que sean accesibles y comprensibles, siguiendo el principio de privacidad por defecto
- Cómo usar IA para auditar el diseño de la plataforma en busca de patrones de diseño que puedan ser perjudiciales para el bienestar del usuario
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar experiencia de plataforma de comunidad online que genere pertenencia',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Social selling y ventas a través de comunidades con IA',
                'description'      => 'Aprende a generar oportunidades de venta participando en comunidades online de forma auténtica, usando IA para identificar señales de compra y personalizar el alcance.',
                'prompt_content'   => <<<'EOT'
Eres un experto en social selling y ventas B2B con experiencia en desarrollo de negocio a través de LinkedIn, Slack, Discord y comunidades de nicho. Necesito tu ayuda para construir un sistema de social selling basado en la participación genuina en comunidades online que genere oportunidades de venta de forma sostenible sin resultar intrusivo ni spammy.

Contexto del vendedor:
- Vendedor o Business Development Manager en empresa B2B
- Producto o servicio con ticket medio superior a 5.000 euros anuales
- Problema: los métodos de prospección tradicionales (cold email, llamadas en frío) tienen tasas de respuesta cada vez más bajas

Sistema de social selling en comunidades:

1. MAPA DE COMUNIDADES RELEVANTES
Identifica los espacios donde están los clientes potenciales:
- Cómo hacer el mapa de comunidades: qué tipos de grupos, foros y espacios online frecuentan los decisores de compra de tu sector (grupos de LinkedIn, Slack communities de tu nicho, foros de Reddit, Discord de comunidades profesionales, grupos de WhatsApp de asociaciones sectoriales)
- Criterios de selección: tamaño de la comunidad, nivel de actividad, calidad de los miembros (cargo, empresa, seniority), posibilidad de participar sin ser un miembro pago
- Presencia en cinco comunidades vs. profundidad en dos: por qué es mejor ser un miembro valioso en pocas comunidades que un presencia superficial en muchas
- Cómo usar IA para encontrar comunidades relevantes: búsqueda sistemática en LinkedIn, Slack directory, Reddit, GitHub y Discord sobre las palabras clave de tu sector

2. ESTRATEGIA DE PARTICIPACIÓN AUTÉNTICA
Define cómo participar en las comunidades de forma que genere reputación:
- La regla del valor primero: cómo calibrar la proporción entre contenido de valor aportado (responder preguntas, compartir recursos, hacer conexiones) y contenido comercial (mencionar tu empresa o producto)
- Tipos de contribución de alto valor: responder preguntas con profundidad y criterio, compartir casos de éxito del sector anonimizados, conectar a dos miembros con problemas complementarios, compartir recursos relevantes que no seas tú
- Frecuencia de participación: cuántas veces por semana, cuándo en el día, qué tipo de contenido priorizar según el tipo de comunidad
- Cómo usar IA para preparar respuestas de alta calidad a preguntas de la comunidad: investigar el tema, estructurar la respuesta, agregar perspectivas únicas de tu experiencia

3. DETECCIÓN DE SEÑALES DE COMPRA
Identifica cuándo un miembro de la comunidad está listo para comprar:
- Señales directas: preguntas sobre herramientas o soluciones para un problema que tu producto resuelve, solicitudes de recomendaciones de proveedor, menciones de insatisfacción con la solución actual
- Señales indirectas: publicaciones sobre el problema que tu producto resuelve, cambio de cargo a rol de decisor de compra, lanzamiento de nuevas iniciativas que requieren tu tipo de solución
- Monitorización con IA: cómo configurar alertas en LinkedIn y herramientas de social listening para detectar estas señales en las comunidades relevantes sin tener que revisarlas manualmente todas las horas
- Cómo priorizar las señales: no todas las señales son iguales, cómo puntuar la urgencia y la probabilidad de compra antes de invertir tiempo en el alcance

4. ALCANCE PERSONALIZADO DESDE LA COMUNIDAD
Diseña la transición de la participación en la comunidad al alcance individual:
- El primer mensaje de conexión: cómo referenciar una interacción específica en la comunidad para hacer el mensaje personal y relevante (nunca un mensaje genérico de conexión)
- La propuesta de valor en el mensaje: cómo mencionar tu empresa y producto de forma natural, solo cuando es relevante para el problema concreto que el prospecto ha mencionado
- El paso del mensaje a la conversación: cómo proponer una llamada o reunión de exploración que sea una oferta de valor para el prospecto, no una presentación de ventas
- Uso de IA para personalizar el alcance: cómo analizar el perfil y las publicaciones del prospecto para generar un mensaje de primer contacto que demuestre que has prestado atención

5. CONSTRUCCIÓN DE RELACIONES A LARGO PLAZO
Diseña el sistema de gestión de relaciones en comunidades:
- Seguimiento de las relaciones: cómo registrar en el CRM las interacciones de la comunidad y el estado de cada relación (conocido, conversación iniciada, oportunidad identificada, activo en proceso de venta)
- Mantenimiento de la relación sin vender: cómo mantenerse en el radar de un prospecto que no está listo para comprar ahora, a través de interacciones de valor periódicas en la comunidad
- La conversación de nutrición: cómo enviar recursos relevantes, artículos del sector o invitaciones a eventos a prospectos que están en fases tempranas sin ser intrusivo
- Cómo usar IA para el seguimiento: recordatorios de cuándo fue la última interacción con cada prospecto clave, sugerencias de qué compartir con cada uno según su perfil e intereses

6. MÉTRICAS DE SOCIAL SELLING
Define cómo medir la efectividad del sistema:
- Métricas de actividad: publicaciones y respuestas por comunidad, conexiones nuevas generadas, conversaciones de DM iniciadas desde la comunidad
- Métricas de pipeline: oportunidades identificadas desde comunidades por mes, tasa de conversión de señal de compra detectada a reunión de exploración, porcentaje del pipeline atribuible a social selling
- Social Selling Index (SSI) de LinkedIn: cómo interpretarlo y cómo mejorarlo de forma sistemática
- Comparativa de ciclo de venta: cómo el ciclo de venta de los prospectos provenientes de comunidades se compara con el de los prospectos de cold outreach en términos de tiempo de cierre y tasa de éxito
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Generar ventas B2B participando en comunidades online con IA',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Comunidad de usuarios como canal de discovery de producto con IA',
                'description'      => 'Convierte tu comunidad de usuarios en el mejor canal de research de producto: extrae insights, detecta necesidades y valida ideas usando IA para analizar las conversaciones.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en product-led growth y en el uso de comunidades de usuarios como motor de desarrollo de producto. Necesito tu ayuda para construir el sistema por el que la comunidad de usuarios se convierte en el canal más valioso de investigación de producto, retroalimentación continua y validación de ideas.

Contexto del producto:
- Producto SaaS con una comunidad de usuarios activa en Discord, Slack o un foro propio
- Problema: las conversaciones de la comunidad contienen información de producto invaluable (problemas, ideas, comparaciones con la competencia) pero no hay un sistema para capturarla y procesarla de forma estructurada
- Objetivo: convertir la comunidad en el canal primario de discovery de producto, complementando las entrevistas formales y los datos de uso

Sistema de research en comunidad:

1. ARQUITECTURA DEL SISTEMA DE ESCUCHA
Diseña la infraestructura para capturar insights de la comunidad:
- Qué canales monitorizar: no solo los canales de soporte y feedback sino también los de conversación general, los de showcase y los de consejos entre usuarios
- Etiquetado y clasificación: cómo etiquetar cada conversación relevante (petición de feature, reporte de bug, punto de dolor, pregunta de uso, comparación con competidor, caso de uso nuevo)
- Herramientas de monitorización: cómo conectar la comunidad con herramientas de análisis como Dovetail, Notion o Airtable para almacenar los insights de forma estructurada
- Uso de IA para el procesamiento automático: cómo configurar un pipeline que lea las conversaciones nuevas de la comunidad, las clasifique según el tipo de insight y las almacene con la información clave extraída

2. DETECCIÓN DE SEÑALES DE PRODUCTO
Identifica los patrones que revelan oportunidades de mejora:
- Peticiones de feature implícitas vs. explícitas: los usuarios raramente piden exactamente lo que necesitan; cómo interpretar los workarounds que describen, las quejas indirectas y las preguntas de "¿es posible hacer X?" como señales de una necesidad no cubierta
- Análisis de frecuencia y urgencia: cómo distinguir entre un problema que mencionan diez usuarios de pasada y un problema que mencionan tres usuarios de forma urgente y recurrente
- Identificación de usuarios power user: los miembros que más usan el producto y más contribuyen a la comunidad suelen ser los mejores informantes para el diseño de features avanzadas
- Cómo usar IA para el análisis semántico: detectar clusters de conversaciones relacionadas aunque usen palabras diferentes para describir el mismo problema

3. ENTREVISTAS Y CONVERSACIONES DIRECTAS EN LA COMUNIDAD
Diseña el proceso de investigación directa con usuarios en la comunidad:
- El AMA de producto (Ask Me Anything): cómo organizar sesiones mensuales donde el Product Manager responde preguntas de la comunidad y escucha feedback sin un guion cerrado
- La sesión de co-diseño abierta: cómo invitar a miembros de la comunidad a participar en la definición de una feature antes de construirla, con un brief claro de lo que se busca
- Las entrevistas de seguimiento: cómo identificar a los usuarios que han dejado un comentario especialmente valioso en la comunidad y contactarlos para una entrevista en profundidad de 30 minutos
- Uso de IA para la preparación de entrevistas: generar un guion de entrevista personalizado basado en el historial de contribuciones y comportamiento en el producto de cada usuario entrevistado

4. VALIDACIÓN DE IDEAS EN LA COMUNIDAD
Diseña el proceso de validación ligera de hipótesis de producto:
- El post de exploración: cómo publicar en la comunidad una descripción del problema (sin mencionar la solución propuesta) para validar que es un dolor real y amplio
- El concept test: cómo compartir un mock-up o un wireframe de una feature propuesta en la comunidad y recoger feedback estructurado sin sesgar las respuestas
- La votación de roadmap: cómo usar la comunidad para que los usuarios prioricen entre alternativas de producto, con el contexto estratégico correcto para que las respuestas sean útiles
- Cómo usar IA para analizar el feedback de validación: sintetizar cientos de comentarios en patrones, identificar los argumentos más frecuentes a favor y en contra, y generar un resumen ejecutivo para el equipo de producto

5. CIERRE DEL LOOP CON LA COMUNIDAD
Diseña el sistema para informar a la comunidad del impacto de su feedback:
- El changelog narrativo: cómo comunicar cada nuevo lanzamiento citando el feedback de la comunidad que lo inspiró ("Esta mejora nació de las conversaciones del canal #feedback en noviembre")
- El seguimiento a peticiones rechazadas: cómo comunicar a los usuarios que pidieron algo que no se va a construir (al menos no ahora), con el razonamiento estratégico detrás de la decisión
- El programa de beta testers de la comunidad: cómo seleccionar a los usuarios más comprometidos para que sean los primeros en probar nuevas features, con un proceso estructurado de recogida de feedback en beta
- Uso de IA para personalizar las comunicaciones de cierre de loop: generar mensajes de respuesta a peticiones específicas de usuarios que hayan esperado mucho tiempo

6. MÉTRICAS DEL SISTEMA DE RESEARCH EN COMUNIDAD
Define cómo medir la calidad del research extraído de la comunidad:
- Volumen de insights: número de insights clasificados por mes, distribución por categoría (petición, bug, punto de dolor, caso de uso), porcentaje proveniente de la comunidad vs. otras fuentes de research
- Impacto en el producto: número de features en el roadmap con al menos un insight de comunidad como input, porcentaje del roadmap inspirado total o parcialmente en la comunidad
- Cierre del loop: porcentaje de peticiones a las que se ha respondido en la comunidad, tiempo medio de respuesta, satisfacción de los miembros con la comunicación de decisiones de producto
- ROI del canal de comunidad como research: coste de una entrevista de usuario formal vs. coste de extraer un insight equivalente de la comunidad con el sistema de IA configurado
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir la comunidad de usuarios en canal de research de producto con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunidades internas de empleados y cultura organizacional con IA',
                'description'      => 'Diseña y gestiona comunidades internas de empleados que refuercen la cultura, mejoren la comunicación horizontal y faciliten el aprendizaje entre pares usando IA.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia del empleado, comunicación interna y diseño organizacional. Necesito tu ayuda para construir un sistema de comunidades internas de empleados que mejore la cohesión cultural, facilite el aprendizaje entre pares y reduzca los silos organizacionales, usando herramientas digitales y IA para hacerlo escalable.

Contexto de la organización:
- Empresa con entre 200 y 2.000 empleados, con presencia en múltiples oficinas o en modo remoto o híbrido
- Problema: la comunicación fluye verticalmente (de arriba abajo) pero horizontalmente los equipos no se conocen ni comparten conocimiento, la cultura se diluye con el crecimiento y la rotación
- Objetivo: construir un ecosistema de comunidades internas que sustituya a los corrillos de pasillo y la cafetera que el trabajo remoto ha eliminado

Diseño del ecosistema de comunidades:

1. ARQUITECTURA DEL ECOSISTEMA DE COMUNIDADES
Define la estructura de comunidades internas:
- Tipos de comunidades internas: comunidades de práctica (mismo rol o disciplina: todos los diseñadores, todos los data analysts), comunidades de interés (fuera del trabajo: running club, lectura, fotografía), comunidades de proyecto (cross-funcionales, temporales), comunidades de liderazgo (managers de todos los niveles)
- Gobernanza del ecosistema: quién crea una comunidad nueva (cualquier empleado o solo RRHH), qué requisitos debe cumplir (mínimo de miembros, líder voluntario, objetivo claro), cómo se cierra una comunidad inactiva
- Plataforma: comparativa entre Microsoft Teams, Slack, Workplace by Meta y plataformas especializadas como Yammer; criterios de selección según el tamaño y la cultura de la empresa
- Integración con el flujo de trabajo: cómo hacer que las comunidades no sean un elemento adicional sino parte natural de la jornada laboral

2. COMUNIDADES DE PRÁCTICA
Diseña el funcionamiento de las comunidades por rol o disciplina:
- Propósito y valor concreto: las comunidades de práctica deben resolver problemas reales de los miembros, no ser un grupo de noticias; qué valor aportan (aprendizaje compartido, resolución de dudas, estándares comunes, recursos compartidos)
- Cadencia de actividad: qué ocurre en la comunidad cada semana (pregunta de la semana, recurso compartido), cada mes (sesión de conocimiento compartido, showcase de proyecto) y cada trimestre (retrospectiva de la comunidad, definición de iniciativas)
- El líder de la comunidad: cómo seleccionar al líder voluntario, qué tiempo se le reconoce formalmente para dedicar a la comunidad, cómo se le apoya desde RRHH
- Uso de IA para dinamizar la comunidad: generación automática de la pregunta de la semana basada en los proyectos actuales del equipo, resumen semanal de los recursos compartidos para los miembros que no pudieron seguirlo todo

3. COMUNICACIÓN INTERNA Y TRANSPARENCIA
Diseña el sistema de comunicación que complementa las comunidades:
- Niveles de comunicación: all-hands mensual (toda la empresa), comunicaciones de departamento (quincenal), actualización de equipo (semanal), comunidades (continua)
- El muro de noticias interno: qué tipo de contenido publicar para que los empleados lean voluntariamente las noticias internas (historias de empleados, hitos de clientes, celebraciones de equipo, decisiones estratégicas con contexto)
- Comunicación de liderazgo: cómo diseñar los mensajes del CEO y del equipo directivo para que sean conversaciones, no monólogos; comentarios abiertos, AMAs trimestrales
- Uso de IA para la comunicación interna: generar el resumen semanal de lo más importante que ha ocurrido en la empresa a partir de las actualizaciones de los equipos, adaptado al tono de la cultura de la empresa

4. APRENDIZAJE ENTRE PARES Y GESTIÓN DEL CONOCIMIENTO
Diseña el sistema de aprendizaje horizontal:
- Show and tell mensual: sesiones de 30 minutos donde un empleado comparte algo que ha aprendido o un proyecto en el que está trabajando, abiertas a toda la empresa
- Biblioteca de conocimiento interno: cómo construir y mantener una base de conocimiento generada por los empleados (guías, plantillas, lecciones aprendidas, postmortems), con IA para organizarla y hacer que sea buscable
- Mentoría y reverse mentoría: cómo diseñar un programa de mentoría entre pares que use la comunidad como espacio de encuentro y seguimiento
- Uso de IA para personalizar el aprendizaje: recomendar a cada empleado el contenido de la biblioteca de conocimiento o las personas de la empresa que más pueden aportarle según su rol y sus proyectos actuales

5. MEDICIÓN DE LA SALUD CULTURAL
Define las métricas de las comunidades internas y la cultura:
- Métricas de adopción de comunidades: porcentaje de empleados que pertenecen a al menos una comunidad, actividad media por comunidad (posts y comentarios por mes), retención de miembros a 90 días
- eNPS y encuesta de pulso: frecuencia, formato, preguntas clave para medir la percepción de la cultura, la comunicación y el sentido de pertenencia
- Correlación con negocio: cómo los empleados que participan en comunidades internas tienen mayor retención, mayor productividad y mayores puntuaciones en las evaluaciones de desempeño
- Uso de IA para el análisis de sentimiento: análisis periódico de las conversaciones en las comunidades internas para detectar tendencias positivas y negativas en el sentimiento del equipo antes de que se manifiesten en la rotación

6. COMUNIDADES EN LA INCORPORACIÓN DE NUEVOS EMPLEADOS
Diseña el uso de las comunidades en el onboarding:
- Bienvenida en la comunidad: cómo hacer que el nuevo empleado sea recibido visiblemente en las comunidades relevantes desde el primer día, con mensajes de bienvenida personalizados
- Comunidad de nuevos empleados: grupo temporal para los que se incorporan en el mismo mes o trimestre, donde comparten dudas, se apoyan mutuamente y comparten las primeras impresiones
- Integración en la comunidad de práctica: cómo guiar al nuevo empleado para que haga su primera contribución a la comunidad de su disciplina en las primeras dos semanas
- Uso de IA para el onboarding en comunidades: generación automática del kit de bienvenida personalizado al rol y a las comunidades relevantes para ese perfil
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar ecosistema de comunidades internas y cultura organizacional con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Monetización de comunidades y modelos de negocio basados en membresía con IA',
                'description'      => 'Analiza y diseña modelos de monetización para comunidades online, desde membresías de pago hasta eventos y patrocinios, con proyecciones financieras y IA para optimizar el revenue.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero y experto en modelos de negocio de economía de creadores y comunidades digitales. Necesito tu ayuda para diseñar un modelo de monetización sostenible para una comunidad online, con proyecciones financieras detalladas y estrategias para maximizar el valor de vida del miembro.

Contexto de la comunidad:
- Comunidad online en una plataforma propia o de terceros (Discord, Circle, Slack) con entre 500 y 50.000 miembros
- Situación actual: la comunidad es gratuita, tiene buen engagement, pero no genera ingresos
- Objetivo: diseñar un modelo de negocio que monetice la comunidad sin destruir el sentido de pertenencia y la participación que la hace valiosa

Diseño del modelo financiero:

1. ESTRATEGIAS DE MONETIZACIÓN
Analiza los modelos de monetización disponibles para comunidades:
- Membresía de pago: tiers de acceso (gratuito con acceso limitado, básico, pro, VIP), qué incluye cada tier para justificar el precio, cómo estructurar el precio anual vs. mensual
- Eventos y formación: talleres, cursos, mastermind groups, acceso a ponentes exclusivos; cómo fijar el precio de cada formato
- Marketplace de servicios: conectar proveedores y compradores dentro de la comunidad, modelo de comisión o suscripción para los proveedores
- Patrocinios y branded content: cómo vender presencia de marca en la comunidad sin alienar a los miembros, qué formatos son aceptables y cuáles destruyen el engagement
- Afiliación y productos propios: recomendación de herramientas relevantes con comisión de afiliado, productos digitales propios (templates, guías, herramientas)
- Datos y research: venta de informes de mercado generados a partir del conocimiento colectivo de la comunidad (siempre con consentimiento explícito)

2. MODELO FINANCIERO DE MEMBRESÍA
Construye el modelo de proyección financiera:
- Estructura de ingresos: proyección mensual de miembros por tier durante 24 meses, con tasa de conversión de gratuito a pago, tasa de upgrade entre tiers y tasa de churn por tier
- Estructura de costes: plataforma de comunidad, herramientas de comunicación y marketing, equipo de community management (tiempo proporcional), producción de contenido exclusivo, costes de eventos
- Unit economics: coste de adquisición de un miembro de pago (CAC), valor de vida del miembro (LTV) por tier, payback period, margen por tier
- Análisis de sensibilidad: impacto en el beneficio anual si el churn mensual sube dos puntos, si el precio baja un 20%, si el coste de adquisición se duplica

3. PRICING Y POSICIONAMIENTO
Diseña la estrategia de precio de la membresía:
- Investigación de disposición a pagar: cómo encuestar a los miembros actuales para entender cuánto pagarían por diferentes beneficios, qué preguntar para no sesgar las respuestas
- Comparativa de mercado: cómo mapear el precio de comunidades similares en el mismo nicho para definir el rango de precio competitivo
- Arquitectura de tiers: cómo diseñar los tres tiers de forma que el tier medio sea el más atractivo (efecto señuelo), qué incluir en cada uno para maximizar las conversiones al tier de mayor valor
- Experimentación de precios con IA: cómo diseñar un test A/B de precios con diferentes páginas de registro para validar el precio óptimo antes de un lanzamiento masivo

4. ESTRATEGIA DE CONVERSIÓN
Diseña el embudo de conversión de gratuito a pago:
- El período de acceso gratuito: cuánto tiempo dejar que los nuevos miembros experimenten la comunidad antes de presentarles la propuesta de membresía de pago, y qué hitos usar como triggers de conversión (primer valor obtenido, primera conexión de valor, primera participación activa)
- La oferta de lanzamiento: cómo usar la urgencia y la exclusividad para convertir a los primeros pagadores, sin crear expectativas insostenibles de descuento permanente
- La secuencia de emails de conversión: qué comunicar, cuándo y con qué argumento en cada email para llevar al miembro gratuito a la decisión de pago
- Uso de IA para personalizar la conversión: cómo identificar los miembros gratuitos con mayor probabilidad de convertir (basado en su comportamiento en la comunidad) y personalizar la oferta y el momento del alcance

5. RETENCIÓN Y REDUCCIÓN DEL CHURN
Diseña el sistema de retención de miembros de pago:
- Análisis de las razones de cancelación: encuesta de salida, clasificación de razones (precio, valor percibido insuficiente, falta de tiempo, situación económica), acciones correctivas por razón
- Programa de pausa: cómo ofrecer una pausa de la membresía como alternativa a la cancelación, con condiciones que no sean un desincentivo a volver
- Programa de reactivación: cómo contactar a miembros que han cancelado con una oferta o un mensaje personalizado a los 30, 60 y 90 días después de la baja
- Uso de IA para predecir el churn: modelo de detección temprana de miembros en riesgo basado en descenso de actividad, número de logins, engagement con el contenido exclusivo

6. REPORTING FINANCIERO DE LA COMUNIDAD
Diseña el cuadro de mando financiero mensual:
- MRR y ARR: seguimiento del ingreso recurrente mensual por tier, movimientos de expansión (upgrades) y contracción (downgrades y churns), nuevas altas
- Métricas de negocio: LTV por tier actualizado trimestralmente, CAC por canal de adquisición, ratio LTV/CAC, meses hasta recuperar el CAC
- Proyección a 12 meses: modelo rolling de proyección actualizado mensualmente con los datos reales del mes anterior
- Cómo usar IA para la narrativa financiera: generar el comentario ejecutivo mensual que acompaña al cuadro de mando, destacando las variaciones más significativas y las acciones recomendadas
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar modelo de monetización y proyección financiera para comunidades online con IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Aspectos legales de la gestión de comunidades online con IA',
                'description'      => 'Navega los aspectos legales de crear y gestionar una comunidad online: moderación de contenido, protección de datos, términos de servicio y responsabilidad del operador.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho digital, protección de datos y regulación de plataformas online. Necesito tu ayuda para diseñar el marco legal completo de una comunidad online, desde los términos de uso y la política de privacidad hasta los protocolos de moderación de contenido y la gestión de responsabilidades del operador.

Contexto de la comunidad:
- Plataforma de comunidad online con miembros de España y la Unión Europea
- Tipos de contenido que los usuarios publican: textos, imágenes, archivos, opiniones, consejos profesionales
- Modelos de acceso: gratuito y de pago (membresía)

Marco legal:

1. TÉRMINOS DE USO Y CONDICIONES GENERALES
Diseña los términos de uso que protejan a la plataforma y sean comprensibles para el usuario:
- Elementos imprescindibles: partes del contrato, objeto del servicio, condiciones de acceso y registro, derechos y obligaciones del usuario, derechos y obligaciones del operador, propiedad intelectual del contenido generado por los usuarios
- Licencia sobre el contenido del usuario: qué licencia necesita la plataforma sobre el contenido que publican los usuarios (solo para mostrar, para adaptar, para redistribuir) y cómo redactarla de forma equilibrada
- Cláusulas de responsabilidad del operador: qué responsabilidades puede limitar el operador y cuáles no puede excluir bajo la legislación española y europea
- Claridad y accesibilidad: cómo redactar los términos en lenguaje comprensible sin perder validez jurídica, cumpliendo el requisito de información previa a la contratación electrónica
- Uso de IA para revisar y comparar términos de uso de plataformas similares e identificar las cláusulas que podrías estar omitiendo

2. POLÍTICA DE PRIVACIDAD Y RGPD
Diseña el framework de protección de datos de la comunidad:
- Base jurídica del tratamiento: qué base legitima el tratamiento de los datos de cada finalidad (consentimiento, ejecución del contrato, interés legítimo), cómo documentarlo en el registro de actividades de tratamiento
- Datos que se recogen: datos de registro (nombre, email, fecha de nacimiento), datos de comportamiento (actividad en la plataforma, contenido publicado), datos de pago (si hay membresía de pago)
- Derechos de los interesados: cómo gestionar las solicitudes de acceso, rectificación, supresión, portabilidad y oposición en el contexto de una comunidad (qué ocurre con el contenido publicado cuando el usuario solicita la supresión)
- Transferencias internacionales: si se usan herramientas de terceros (Stripe, AWS, Mailchimp) con servidores fuera del EEE, cómo documentar las garantías adecuadas
- Nombrar al DPO: cuándo es obligatorio designar un delegado de protección de datos en una comunidad online

3. MODERACIÓN DE CONTENIDO Y RESPONSABILIDAD
Diseña el sistema legal de moderación de la comunidad:
- Responsabilidad del operador por el contenido de los usuarios: el régimen de la Directiva de Servicios Digitales (DSA) y la LSSI-CE, cuándo el operador es responsable del contenido que alojan los usuarios
- Política de moderación: qué contenido está prohibido (taxonomía detallada: discurso de odio, desinformación, spam, contenido para adultos no señalizado, violación de derechos de autor), cómo redactar la política para que sea aplicable y ejecutable
- Proceso de notificación y retirada (notice and takedown): cómo diseñar el formulario de denuncia de contenido, en qué plazo hay que responder, cómo documentar la decisión
- Recurso del usuario afectado por la moderación: cómo garantizar el derecho a un proceso justo cuando se modera o expulsa a un miembro, especialmente si tiene una membresía de pago

4. CONTRATOS CON PONENTES, COLABORADORES Y PATROCINADORES
Diseña los marcos contractuales para las relaciones comerciales de la comunidad:
- Contrato con ponente de evento: cesión de derechos sobre la presentación, autorización de grabación y distribución, honorarios o contraprestación no económica, obligaciones de calidad del contenido
- Contrato con patrocinador: objeto de la colaboración, compromisos de visibilidad y métricas, prohibición de contenido patrocinado no señalizado (cumplimiento de la legislación publicitaria), duración y terminación
- Contrato con community manager o moderador externo: si es empleado o autónomo, acuerdo de confidencialidad sobre las conversaciones internas de la comunidad, proceso de offboarding con revocación de accesos
- Uso de IA para revisar borradores de contratos enviados por terceros e identificar cláusulas que puedan ser desfavorables para la comunidad

5. DERECHOS DE PROPIEDAD INTELECTUAL EN LA COMUNIDAD
Gestiona la PI del contenido generado por los usuarios y del contenido propio:
- Propiedad intelectual de los usuarios: el contenido que publican los miembros les pertenece a ellos; cómo gestionar los conflictos cuando alguien publica contenido que en realidad pertenece a su empleador
- Infracciones de derechos de autor: qué hacer cuando un miembro publica contenido protegido sin autorización (imágenes, extractos de libros, software), proceso de retirada y prevención de la responsabilidad del operador
- Protección del contenido propio de la plataforma: cómo proteger el sistema de gestión de la comunidad, los materiales exclusivos para miembros de pago y la marca de la comunidad
- El contenido generado con IA: qué ocurre desde el punto de vista de la propiedad intelectual con el contenido que los miembros generan usando IA y publican en la comunidad

6. GESTIÓN DE CONFLICTOS Y LITIGIOS
Diseña el protocolo de gestión de disputas:
- Resolución extrajudicial: cómo incluir en los términos de uso un mecanismo de mediación o arbitraje antes del litigio, cumpliendo con los requisitos de la normativa de resolución de disputas online (ODR)
- Jurisdicción y ley aplicable: cómo elegir la cláusula de jurisdicción y ley aplicable en función del perfil de los usuarios (consumidores europeos vs. usuarios internacionales)
- Gestión de la reclamación de un miembro de pago: protocolo para gestionar la solicitud de reembolso, la denuncia ante la OMIC o ante la autoridad de consumo, y la resolución sin escalado a litigio
- Documentación preventiva: qué registros mantener (logs de moderación, comunicaciones con usuarios, decisiones de baja de miembros) para poder defenderse en caso de litigio
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar marco legal completo para gestión de comunidad online con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte comunitario y autoservicio en comunidades de usuarios con IA',
                'description'      => 'Diseña un sistema de soporte basado en la comunidad donde los usuarios se ayudan entre sí, potenciado con IA para calidad de respuestas y detección de problemas recurrentes.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Support y community-led support con experiencia en empresas de software que han construido comunidades de usuarios como canal de soporte escalable. Necesito tu ayuda para diseñar un sistema donde la comunidad de usuarios sea el primer nivel de soporte, liberando al equipo de CS para los casos complejos y reduciendo el coste por ticket.

Contexto:
- Empresa de software con 20.000 usuarios activos y un equipo de soporte de 10 personas gestionando 500 tickets diarios
- Comunidad de usuarios existente con 8.000 miembros activos en Discord
- Problema: el 60% de los tickets son preguntas repetidas que ya tienen respuesta en la documentación o en conversaciones previas de la comunidad

Sistema de soporte comunitario:

1. ARQUITECTURA DEL SOPORTE COMUNITARIO
Diseña la estructura del sistema de soporte en dos niveles:
- Nivel uno (comunidad): el usuario publica su pregunta en el foro o canal de la comunidad, otros usuarios responden, la IA asiste con sugerencias de respuesta y documentación relevante
- Nivel dos (equipo de soporte): las preguntas sin respuesta en más de cuatro horas, las incidencias críticas y las quejas de clientes de pago escalan automáticamente al equipo de soporte humano
- Integración entre la comunidad y el sistema de tickets: cómo conectar el canal de soporte de la comunidad con el helpdesk (Zendesk, Intercom, Freshdesk) para que los agentes puedan ver el contexto de la conversación al recibir el escalado
- Incentivos para los usuarios que responden: cómo reconocer y recompensar a los miembros que contribuyen con respuestas de calidad (puntos de reputación, insignia de experto, acceso anticipado a features)

2. BÚSQUEDA Y ACCESO AL CONOCIMIENTO
Diseña el sistema de acceso al conocimiento para reducir preguntas repetidas:
- Centro de ayuda integrado en la comunidad: cómo hacer que la documentación oficial sea la primera respuesta que aparece cuando un usuario publica una pregunta frecuente
- Búsqueda semántica en el archivo de la comunidad: cómo implementar una búsqueda que entienda el significado de la pregunta y no solo las palabras clave, para que el usuario encuentre respuestas a preguntas ya resueltas antes de publicar
- Bot de onboarding de preguntas: cuando un usuario publica en el canal de soporte, el bot sugiere automáticamente tres respuestas del archivo y la documentación antes de que otros usuarios o el equipo respondan
- Uso de IA para mantener la base de conocimiento actualizada: detección automática de respuestas del equipo de soporte que deberían convertirse en artículos de documentación

3. CALIDAD DE LAS RESPUESTAS COMUNITARIAS
Diseña el sistema de control de calidad:
- Verificación de respuestas: cómo distinguir las respuestas correctas de las incorrectas en una comunidad de usuarios de distintos niveles, sistema de votación más validación por el equipo
- IA como co-piloto de los usuarios que responden: cuando un usuario empieza a escribir una respuesta, la IA sugiere información adicional relevante de la documentación o advierte de imprecisiones
- Sistema de respuestas verificadas: las respuestas validadas por el equipo se marcan con un badge de "verificado", dando al lector confianza en la calidad del contenido
- Proceso de corrección: cómo gestionar el caso en que un usuario ha dado una respuesta incorrecta que otro usuario ha seguido y ha generado un problema

4. DETECCIÓN Y ESCALADO DE PROBLEMAS CRÍTICOS
Diseña el sistema de alerta temprana de incidencias:
- Detección automática de problemas emergentes: si en menos de dos horas cinco usuarios diferentes mencionan el mismo problema o término en la comunidad, el sistema alerta automáticamente al equipo de ingeniería y de soporte
- Clasificación de urgencia: cómo distinguir entre una pregunta de uso, un bug menor y una incidencia crítica (sistema caído, pérdida de datos) usando el análisis del lenguaje y el contexto del mensaje
- Comunicación proactiva en la comunidad durante incidencias: cómo usar el canal de estado y la comunidad para comunicar el estado de la incidencia en tiempo real, reduciendo el volumen de tickets entrantes
- Postmortem comunitario: cómo compartir con la comunidad el análisis de una incidencia importante una vez resuelta, incluyendo qué pasó, qué se ha hecho y cómo se va a prevenir

5. MÉTRICAS DEL SOPORTE COMUNITARIO
Define el cuadro de mando del sistema de soporte basado en comunidad:
- Tasa de deflexión: porcentaje de preguntas en la comunidad que son resueltas por usuarios o por la IA sin necesidad de intervención del equipo de soporte, y su evolución mensual
- Tiempo de primera respuesta comunitaria: tiempo medio entre que un usuario publica una pregunta y recibe la primera respuesta de otro miembro, segmentado por tipo de pregunta y franja horaria
- Calidad de las respuestas: tasa de preguntas marcadas como resueltas sobre el total, CSAT de las resoluciones comunitarias vs. las del equipo de soporte
- Coste por resolución: comparativa del coste de resolver un ticket por el equipo de soporte vs. el coste de mantener el sistema de soporte comunitario (plataforma, moderación, programa de expertos)

6. PROGRAMA DE EXPERTOS DE LA COMUNIDAD
Diseña el programa formal de reconocimiento de los mejores colaboradores de soporte:
- Criterios de selección: número de respuestas en los últimos 90 días, tasa de respuestas marcadas como correctas o verificadas, valoración de la comunidad
- Beneficios del programa: acceso anticipado a features, canal privado con el equipo de producto, reconocimiento público en la plataforma, acceso a swag o compensación económica simbólica
- Responsabilidades del experto: expectativa de responder un mínimo de preguntas semanales, participar en la revisión de la documentación, asistir a llamadas trimestrales con el equipo de producto
- Onboarding y formación del experto: cómo asegurarse de que los expertos de la comunidad tienen información técnica actualizada y acceso rápido al equipo cuando encuentran un caso que no saben resolver
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar sistema de soporte comunitario escalable con IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Construir y monetizar una comunidad de nicho como freelancer con IA',
                'description'      => 'Aprende a crear, crecer y monetizar una comunidad de nicho como activo de negocio independiente, usando IA para gestionar el contenido, el engagement y los ingresos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en economía de creadores, comunidades de pago y negocios de membresía. Necesito tu ayuda para construir una comunidad de nicho como principal activo de negocio de un freelancer o creador de contenido, usando IA para gestionar el contenido y el engagement de forma eficiente con recursos limitados.

Contexto del freelancer:
- Profesional con experiencia en un nicho específico (diseño, programación, marketing, finanzas, salud, educación) que quiere crear ingresos recurrentes más allá de los proyectos por encargo
- Situación actual: audiencia pequeña pero fiel en redes sociales o newsletter, sin modelo de monetización de comunidad todavía
- Objetivo: construir una comunidad de entre 200 y 2.000 miembros de pago en los próximos 12 meses que genere entre 5.000 y 20.000 euros mensuales en ingresos recurrentes

Construcción del negocio de comunidad:

1. DEFINICIÓN DEL NICHO Y LA AUDIENCIA
Encuentra el espacio donde tu comunidad puede ser la mejor del mundo:
- La intersección ganadora: dónde se cruzan tu expertise, la disposición a pagar del mercado y el tamaño de la audiencia potencial, y cómo encontrar ese punto óptimo antes de comprometerte
- Test de validación rápida: cómo validar la idea de comunidad con menos de 500 euros y en menos de cuatro semanas (lista de espera, encuesta de disposición a pagar, sesión de grupo de exploración)
- El perfil del miembro ideal: más allá del buyer persona demográfico, quién es la persona concreta que más se va a beneficiar de tu comunidad y que estará dispuesta a pagar por ello
- Cómo usar IA para investigar comunidades similares existentes: análisis de reseñas en Trustpilot, comentarios en Reddit, preguntas en Quora sobre el nicho para entender qué frustra a la audiencia y qué no encuentran en ningún sitio

2. MODELO DE MEMBRESÍA Y PRECIO
Diseña la estructura de acceso y precio de tu comunidad:
- Plataforma de lanzamiento: Circle, Discord, Skool, Kajabi o plataforma propia; criterios de selección para un freelancer que comienza (coste, facilidad de uso, funcionalidades de monetización, curva de aprendizaje)
- Tiers de acceso: cómo diseñar dos o tres niveles de membresía donde cada tier tenga una propuesta de valor claramente diferenciada (acceso al archivo, sesiones en vivo, acceso directo a ti, grupo pequeño de mastermind)
- Precio de lanzamiento vs. precio regular: estrategia de precio de fundador para los primeros 100 miembros, cómo comunicar la subida de precio sin perder confianza
- Período de facturación: mensual vs. anual, cómo incentivar la facturación anual con un descuento que mejore tu flujo de caja

3. CONTENIDO DE LA COMUNIDAD CON IA
Diseña el sistema de contenido escalable para un freelancer con recursos limitados:
- El ritmo de contenido sostenible: qué tipo de contenido producir cada semana sin agotarse (sesión en vivo mensual, recurso nuevo quincenal, pregunta de debate semanal, hilo de presentación de miembros mensual)
- Producción de contenido con IA: cómo usar Claude para generar el primer borrador de guías, newsletters, resúmenes de sesiones y preguntas de debate a partir de notas básicas tuyas
- Reutilización de contenido: cómo transformar una sesión en vivo de 60 minutos en diez recursos de la biblioteca de la comunidad (resumen escrito, cinco ideas clave, tres plantillas descargables, dos clips de vídeo)
- El contenido que genera comunidad vs. el contenido que consume la comunidad: cómo equilibrar el contenido que tú produces con el que surge de las conversaciones entre miembros

4. CRECIMIENTO DE LA COMUNIDAD
Diseña la estrategia de captación de miembros:
- El embudo de captación: contenido gratuito en LinkedIn o newsletter que atrae a la audiencia, lead magnet que captura el email, secuencia de nurturing que lleva a la oferta de membresía
- La referencia de miembro a miembro: el mejor canal de captación para una comunidad es un miembro satisfecho que invita a un colega; cómo diseñar el programa de referidos y cuándo activarlo
- Lanzamientos periódicos: aunque la membresía esté siempre abierta, los lanzamientos de temporada (enero, septiembre, con nuevos beneficios o precio especial) generan urgencia y picos de conversión
- Uso de IA para la generación de contenido de captación: cómo generar de forma sistemática posts de LinkedIn y emails que atraigan a nuevos miembros potenciales sin sonar repetitivo

5. RETENCIÓN Y EXPERIENCIA DEL MIEMBRO
Diseña el sistema que hace que los miembros se queden año tras año:
- El mapa de valor del miembro: los hitos que un miembro debe alcanzar en los primeros 30, 60 y 90 días para que sienta que la membresía vale lo que paga
- La comunidad como red: cómo facilitar las conexiones entre miembros para que la razón de quedarse no seas solo tú sino la red que han construido dentro
- Gestión del churn: cómo detectar el abandono antes de que ocurra (miembros que dejan de participar), qué hacer para reactivarlos, cómo gestionar la conversación de cancelación sin bajar el precio
- Evolución de la comunidad: cómo reinventar los beneficios y el contenido cada seis meses para que los miembros veteranos sientan que la comunidad sigue aportando valor nuevo

6. GESTIÓN Y PRODUCTIVIDAD CON IA
Diseña las operaciones del negocio de comunidad para un freelancer:
- Herramientas del stack: plataforma de comunidad, herramienta de email marketing, sistema de pagos, analítica, calendario de contenidos; presupuesto mensual razonable para una comunidad en crecimiento
- Automatizaciones críticas: bienvenida automática al nuevo miembro personalizada, recordatorio de renovación de membresía, encuesta de NPS trimestral, seguimiento de impago
- Cuadro de mando del negocio: MRR, churn mensual, nuevos miembros, LTV, ratio de engagement (miembros activos vs. totales); cómo revisarlo cada semana en menos de 15 minutos
- Cuándo contratar ayuda: en qué momento del crecimiento de la comunidad tiene sentido contratar un community manager part-time, qué delegar primero y cómo encontrar a la persona adecuada
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y monetizar comunidad de nicho como freelancer con IA',
                'vote_score'       => 42,
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
