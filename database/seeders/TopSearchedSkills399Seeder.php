<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills399Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Personal branding en LinkedIn para marketers: crear contenido con IA que posiciona tu expertise',
                'description'      => 'Diseña tu estrategia de personal branding en LinkedIn con IA para posicionarte como referente en marketing. Los profesionales de marketing con presencia activa en LinkedIn generan oportunidades de empleo, consultoría y colaboración que no aparecen en ningún portal de trabajo.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de personal branding en LinkedIn con experiencia ayudando a profesionales de marketing a construir su presencia en la plataforma, crecer su audiencia de forma orgánica y convertir esa audiencia en oportunidades profesionales reales.

Contexto de mi perfil profesional:
Soy un profesional de marketing especializado en [ÁREA: performance marketing, branding, content marketing, growth, SEO, email marketing, social media, etc.]. Tengo [AÑOS] de experiencia y he trabajado en [TIPO DE EMPRESAS]. Los temas en los que tengo más conocimiento y experiencia son [LISTA DE 3-5 TEMAS ESPECÍFICOS]. Mi objetivo en LinkedIn es [DESCRIBE: encontrar mejores oportunidades de trabajo, captar clientes para mis servicios de consultoría, construir autoridad para lanzar un producto o comunidad, aumentar mi visibilidad en el sector].

Bloque 1 — Definir tu posicionamiento de marca personal en marketing:
Explica el concepto de nicho de contenido para un marketer en LinkedIn y por qué la especificidad es la clave del crecimiento. Un perfil que habla de "marketing digital" en general no crece; un perfil que habla de "growth para startups B2B en etapa temprana" o de "email marketing para e-commerce de moda" crea una audiencia fiel y comprometida. Diseña el proceso para definir el nicho de contenido: cuál es la intersección entre lo que sabes mejor que el 95% de los marketers, lo que tu audiencia objetivo necesita aprender y lo que tú disfrutas enseñando. Explica cómo posicionarte como el referente de ese nicho en LinkedIn y cuál es el claim de posicionamiento de una sola frase que debe aparecer en tu titular y en tu "about".

Bloque 2 — Los tres formatos de contenido que más crecen en LinkedIn para marketers:
Explica cuáles son los formatos de contenido que generan más alcance y más engagement para perfiles de marketing en LinkedIn en 2025 y cómo usarlos con IA para producirlos eficientemente. Para cada formato, describe la estructura que funciona mejor y el prompt de Claude para generarlo: el carrusel de "X cosas que aprendí sobre [tema] en [empresa o proyecto]" (que combina aprendizaje personal con insight práctico), el post de texto largo con la historia del fracaso o el error que cometiste en una campaña y la lección que extraíste (los posts de vulnerabilidad con lección tienen el mayor engagement en perfiles de marketing), y el análisis de una campaña o estrategia de otra marca con tu opinión experta (que demuestra tu capacidad analítica y tu punto de vista). Para cada formato, incluye el prompt para Claude y la estructura del post con el gancho, el desarrollo y el cierre.

Bloque 3 — Sistema de producción de contenido semanal con IA:
Diseña el sistema de producción de contenido de LinkedIn para publicar tres veces por semana sin que te lleve más de dos horas. El sistema incluye: la sesión de ideación mensual (cómo generar con Claude 12 ideas de posts por semana de forma que tengas el banco de contenido del mes completo en una hora), el flujo de creación de cada post (el briefing para Claude, la generación del borrador, la humanización del texto para que suene a tu voz y no a IA, y la revisión final de 10 minutos), y el calendario de publicación con el tipo de contenido para cada día de la semana (lunes: insight práctico; miércoles: historia personal; viernes: análisis de tendencia o caso). Explica cómo usar Claude para generar las ideas de contenido a partir de tu historial de proyectos, las noticias del sector y las preguntas frecuentes de tu audiencia.

Bloque 4 — Optimizar el perfil de LinkedIn con IA para que trabaje mientras duermes:
Diseña el proceso para optimizar cada sección del perfil de LinkedIn usando Claude para maximizar la visibilidad en las búsquedas y la tasa de conversión de visita a conexión. Cubre: el titular (cómo construir un titular que incluye el cargo, el nicho específico y la propuesta de valor en menos de 220 caracteres), el "about" (estructura de cinco párrafos que cuenta quién eres, para quién trabajas, qué resultados has conseguido, cuál es tu punto de vista único sobre tu área y cuál es el paso siguiente para quien quiera conectar contigo), la sección de experiencia (cómo describir cada puesto en términos de resultados medibles en lugar de responsabilidades genéricas), y la sección de skills y las recomendaciones (cómo pedir recomendaciones específicas que refuercen tu posicionamiento). Para cada sección, incluye el prompt de Claude y un ejemplo del resultado.

Bloque 5 — Convertir la audiencia de LinkedIn en oportunidades profesionales:
Explica el sistema para convertir tu presencia en LinkedIn en resultados profesionales concretos: nuevas oportunidades de trabajo, clientes de consultoría o colaboraciones. El sistema incluye: la estrategia de networking activo en LinkedIn (cómo usar los comentarios en posts de personas relevantes para ganar visibilidad antes de conectar, cuándo y cómo enviar un mensaje de conexión que no parezca spam), el script de mensaje de seguimiento cuando alguien interactúa con tu contenido de forma recurrente (cómo convertir un lector fiel en una conversación real), y el funnel de LinkedIn a servicio (cómo llevar a un seguidor interesado desde el post hasta una llamada de descubrimiento o una propuesta de consultoría). Para cada elemento, incluye el prompt de Claude para generar las plantillas de mensaje personalizables.

Entregables:
- Marco de posicionamiento de nicho con proceso de definición y claim de una frase
- Tres formatos de contenido con estructura, prompt de Claude y ejemplos para perfiles de marketing
- Sistema de producción semanal con ideación mensual, flujo de creación y calendario de publicación
- Optimización de perfil sección a sección con prompts y ejemplos del resultado
- Sistema de conversión de audiencia a oportunidades con estrategia de networking, mensajes y funnel
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una presencia de autoridad en LinkedIn con IA para marketers que quieren más oportunidades profesionales',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'LinkedIn para developers: estrategia de contenido con IA para posicionarte como referente técnico',
                'description'      => 'Construye tu presencia en LinkedIn como desarrollador de software y conviértete en una referencia técnica en tu especialidad. Los developers con perfil activo en LinkedIn acceden a oportunidades que nunca llegan a LinkedIn Jobs y negocian mejores condiciones porque quien les contacta ya conoce su trabajo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding para profesionales técnicos con experiencia ayudando a developers, engineers y arquitectos de software a construir su presencia en LinkedIn de forma que refleje su nivel técnico real y les abra puertas a oportunidades que no requieren pasar por un proceso de selección estándar.

Contexto de mi perfil técnico:
Soy un developer especializado en [STACK: frontend/backend/full-stack/mobile/cloud/data engineering/DevOps/seguridad]. Tengo [AÑOS] de experiencia y he trabajado principalmente en [TIPO DE EMPRESAS Y PROYECTOS]. Las tecnologías en las que tengo más profundidad son [LISTA]. El objetivo que quiero conseguir con LinkedIn es [DESCRIBE: que los mejores equipos técnicos me contacten directamente, posicionarme para un cambio de carrera hacia engineering management o arquitectura, captar clientes para consultoría técnica, construir reputación para hablar en conferencias].

Sección 1 — Por qué LinkedIn funciona diferente para developers:
Explica las particularidades del personal branding en LinkedIn para desarrolladores de software, que difieren significativamente del contenido de marketing o de negocio. Un developer en LinkedIn no necesita publicar todos los días ni tener miles de seguidores para conseguir resultados: un developer con 500 conexiones relevantes y cinco posts técnicos de calidad al mes tiene más impacto profesional que un marketer con 10.000 seguidores y contenido genérico. Describe los tres tipos de contenido técnico que más reputación generan para un developer en LinkedIn: el post de aprendizaje profundo (cuando llevas una semana investigando un problema técnico y compartes el hallazgo con ejemplos de código), el análisis de arquitectura (cuando analizas el diseño técnico de un sistema conocido y explicas sus trade-offs), y la opinión técnica argumentada (cuando das tu punto de vista sobre una decisión de diseño, una librería o una tendencia tecnológica con argumentos técnicos).

Sección 2 — Usar Claude para generar contenido técnico que suena a tu voz:
Explica el problema más frecuente cuando un developer usa IA para generar contenido de LinkedIn: el resultado suena a contenido de negocio genérico, con frases como "en el mundo actual" o "es importante destacar que", y no refleja el nivel técnico ni la forma de pensar de un engineer. Diseña el proceso para usar Claude para generar borradores técnicos que se adaptan a tu estilo de comunicación. El proceso incluye: el prompt de contexto técnico que describes una vez y que Claude usa para calibrar el nivel de profundidad y el tipo de ejemplos (tu stack preferido, el nivel técnico de tu audiencia, si prefieres código o diagramas), el flujo de creación de un post técnico (tú le das a Claude el tema, la tesis y el ejemplo de código o el caso que quieres ilustrar; Claude genera la estructura; tú revisas y añades tu perspectiva personal), y el checklist de humanización del post antes de publicarlo.

Sección 3 — Los cinco tipos de post técnico que generan más engagement entre developers:
Diseña la estructura de los cinco tipos de post técnico que más interacción generan entre una audiencia de developers y el prompt de Claude para generarlos. Los tipos son: el hilo de "cómo resolví un bug imposible" con el proceso de debugging paso a paso y la lección de arquitectura o de herramienta que extraíste, el post de "lo que nadie te dice sobre [tecnología popular]" con los gotchas, los trade-offs ocultos y los casos de uso donde esa tecnología no es la respuesta correcta, el análisis de código refactorizado (before/after con la explicación de por qué el código nuevo es mejor), el post de "qué aprendí migrando de [X] a [Y]" con los desafíos reales del proceso de migración y las decisiones de diseño tomadas, y el análisis de la arquitectura de un sistema que admiras con sus fortalezas y sus debilidades. Para cada tipo, incluye la estructura del post con gancho inicial y el prompt para Claude.

Sección 4 — Optimizar el perfil técnico para que los recruiters y los hiring managers te encuentren:
Diseña el proceso de optimización del perfil de LinkedIn para un developer con el objetivo de aparecer en las búsquedas de los mejores equipos técnicos. Cubre: el titular técnico (cómo construir un titular que incluye tu especialidad, las tecnologías clave y el tipo de problema que resuelves, que es diferente al cargo que pone tu contrato), la sección "about" para un developer (cómo escribirla en primera persona, mencionando los proyectos técnicos de los que estás más orgulloso, tu filosofía de ingeniería y qué tipo de equipo y proyecto te hace dar lo mejor de ti), y la sección de experiencia (cómo describir cada puesto en términos de problemas técnicos resueltos, escala del sistema construido y decisiones de arquitectura tomadas, no en términos de responsabilidades genéricas). Para cada sección, incluye el prompt de Claude y un ejemplo del resultado.

Sección 5 — Construir tu red técnica de forma estratégica:
Explica la estrategia de networking en LinkedIn para un developer que valora su tiempo y no quiere convertirse en un creador de contenido a tiempo completo. El sistema incluye: los 10 perfiles técnicos que merece la pena seguir y con los que merece la pena interactuar activamente según tu especialidad (cómo identificarlos y qué tipo de comentarios técnicos en sus posts te dan visibilidad entre su audiencia), la estrategia de comentarios técnicos (cómo añadir valor real en los posts de otros developers con comentarios que demuestran tu nivel sin sonar agresivo), el proceso para conectar con engineering managers y CTOs de empresas donde querrías trabajar (qué mensaje de conexión funciona para un developer y qué mensaje genera rechazo), y cómo usar las notificaciones de empleo de LinkedIn de forma estratégica para estar en el radar de los mejores equipos antes de que abran una posición.

Entregables:
- Marco de personal branding para developers con los tres tipos de contenido de mayor impacto
- Proceso de uso de Claude para contenido técnico con calibración de nivel y flujo de creación
- Cinco tipos de post técnico con estructura, gancho y prompt de Claude para cada uno
- Optimización del perfil técnico sección a sección con prompts y ejemplos del resultado
- Estrategia de networking técnico con perfiles clave, comentarios de valor y mensajes de conexión
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionarse como referente técnico en LinkedIn con contenido de calidad generado con IA sin convertirse en creador de contenido a tiempo completo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Posicionamiento en LinkedIn para diseñadores: mostrar el proceso creativo con IA y atraer clientes',
                'description'      => 'Construye tu presencia en LinkedIn como diseñador usando IA para producir contenido que muestra tu proceso creativo, tu forma de pensar y tus resultados. Los diseñadores con presencia activa en LinkedIn atraen clientes, colaboraciones y oportunidades que no aparecen en las plataformas de portfolio tradicionales.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding para creativos con experiencia ayudando a diseñadores de UX/UI, branding, motion y product design a construir su presencia en LinkedIn de forma que diferencia su trabajo de los miles de diseñadores con un buen portfolio pero sin voz propia.

Contexto de mi trabajo de diseño:
Soy diseñador especializado en [ÁREA: UX/UI, branding, product design, motion, ilustración, etc.]. Tengo [AÑOS] de experiencia y he trabajado en [TIPO DE PROYECTOS Y EMPRESAS]. Los proyectos de los que me siento más orgulloso son [DESCRIBE BREVEMENTE]. Mi objetivo con LinkedIn es [DESCRIBE: atraer clientes para proyectos freelance, ser contactado por los mejores equipos de producto, construir mi reputación como speaker o mentor, lanzar mi propio producto o servicio].

Parte 1 — Por qué LinkedIn y no solo Behance o Dribbble para un diseñador:
Explica por qué LinkedIn se ha convertido en la plataforma de personal branding más importante para un diseñador que quiere atraer oportunidades de negocio, no solo showcasear su portfolio. Las tres razones fundamentales: en Behance y Dribbble los decisores (directores de arte, CPOs, fundadores de startup) están de paso; en LinkedIn viven y trabajan todos los días, el contenido que muestra el proceso de diseño y el razonamiento detrás de las decisiones es más valorado por los decisores que el resultado final del portfolio, y el algoritmo de LinkedIn favorece el contenido que genera conversación, y los posts sobre proceso de diseño generan más comentarios de calidad que una imagen de un mockup en Behance.

Parte 2 — Los formatos de contenido que mejor funcionan para diseñadores en LinkedIn:
Diseña la estructura y el prompt de Claude para los cuatro formatos de contenido que más engagement generan para un diseñador en LinkedIn. Los formatos son: el post de "proceso y razonamiento" (el before/after de un proyecto con la explicación de por qué tomaste cada decisión de diseño y cuál era el problema que resolvía, no solo cómo quedó), el carrusel de "lo que aprendí en este proyecto" (con capturas del proceso de ideación, los bocetos iniciales y los cambios que surgieron en la iteración), el post de opinión sobre diseño (tu punto de vista sobre una tendencia de diseño, una herramienta o un principio, argumentado con un ejemplo real de tu trabajo), y el post de "critiqué el diseño de [marca conocida]" (análisis constructivo del diseño de un producto que conoce tu audiencia, con alternativas de mejora). Para cada formato, incluye la estructura detallada y el prompt de Claude.

Parte 3 — Sistema de producción de contenido visual con IA para diseñadores:
Explica el flujo de trabajo específico para que un diseñador produzca contenido de LinkedIn de forma eficiente sin que el proceso de creación de contenido le quite tiempo del trabajo de diseño real. El sistema incluye: cómo usar Claude para generar el texto de un post a partir de las notas de reflexión que tomas durante un proyecto (no necesitas escribir el post desde cero; le das a Claude los fragmentos de tu proceso de pensamiento y él los convierte en un post estructurado), cómo usar las herramientas de diseño que ya usas (Figma, Canva, Adobe) para crear los recursos visuales del post de forma eficiente, y el calendario de publicación realista para un diseñador que tiene proyectos de cliente que atender (dos veces por semana es suficiente si el contenido es de calidad). Para cada elemento del sistema, incluye el prompt de Claude y el tiempo estimado de producción.

Parte 4 — El perfil de LinkedIn de un diseñador que atrae clientes y oportunidades:
Diseña el proceso de optimización del perfil de LinkedIn para un diseñador con el objetivo de que quien llega al perfil entienda en 30 segundos qué haces, para quién lo haces y qué te diferencia de los miles de diseñadores con el mismo cargo. Cubre: la foto de perfil y el banner (qué comunican sobre tu estilo y tu especialidad, cómo usar Claude para generar el copy del banner si tiene texto), el titular (cómo ir más allá de "UX Designer" e incluir la especialidad, el tipo de empresa con la que más te gusta trabajar y tu enfoque diferencial), la sección "about" (estructurada como una propuesta de valor para el tipo de cliente o empresa que quieres atraer, con un ejemplo del tipo de problema que resuelves y cómo contactarte), y cómo vincular el portfolio externo (Behance, Dribbble, sitio web) de forma que quien visite el perfil sienta curiosidad por hacer clic. Para cada sección, incluye el prompt de Claude.

Parte 5 — De la audiencia de LinkedIn a los clientes y colaboraciones:
Diseña el sistema para convertir la visibilidad en LinkedIn en resultados profesionales concretos para un diseñador. El sistema incluye: cuándo y cómo mencionar tus servicios en el contenido orgánico sin que parezca publicidad (la regla del 10%: uno de cada diez posts puede ser explícitamente sobre tus servicios; el resto aportan valor sin vender), el mensaje de respuesta cuando alguien te escribe por LinkedIn interesado en tus servicios (cómo cualificar al cliente potencial y proponer una llamada de descubrimiento de forma natural), y el proceso de seguimiento con alguien que comentó en un post tuyo de forma recurrente pero no ha dado el paso de contactarte (cómo iniciar la conversación de forma no invasiva). Para cada elemento, incluye las plantillas de mensaje con el prompt de Claude para personalizarlas.

Entregables:
- Argumento de por qué LinkedIn supera a Behance y Dribbble para un diseñador con objetivos de negocio
- Cuatro formatos de contenido con estructura detallada y prompt de Claude para cada uno
- Sistema de producción de contenido eficiente con flujo de trabajo semanal y tiempo de producción
- Optimización del perfil sección a sección con prompts y criterios de aceptación del resultado
- Sistema de conversión de visibilidad a clientes con regla del 10%, mensajes y proceso de seguimiento
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir presencia en LinkedIn como diseñador usando IA para mostrar el proceso creativo y atraer clientes y oportunidades',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Social selling en LinkedIn con IA: construir autoridad y generar leads con contenido que vende sin vender',
                'description'      => 'Implementa una estrategia de social selling en LinkedIn con IA que genera leads de alta calidad a través del contenido de autoridad y el networking estratégico. Los comerciales con presencia activa en LinkedIn cierran más deals y con ciclos más cortos porque los prospectos ya confían en ellos antes de la primera llamada.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en social selling y personal branding para equipos comerciales con experiencia ayudando a vendedores B2B a construir su presencia en LinkedIn de forma que genera un flujo constante de inbound leads sin reemplazar su actividad de outreach.

Contexto de mi actividad comercial:
Trabajo como [CARGO COMERCIAL: AE, BDR, director comercial, etc.] en [TIPO DE EMPRESA] vendiendo [PRODUCTO O SERVICIO] a [PERFIL DE CLIENTE: tipo de empresa, tamaño, cargo del decisor]. El ciclo de venta medio es de [DURACIÓN] y el ticket medio es de [VALOR]. El mayor problema en mi proceso de ventas es [DESCRIBE: los prospectos no responden al cold outreach, el ciclo de venta se alarga porque el cliente no conoce la empresa, perder deals contra competidores con más reputación de marca].

Módulo 1 — Por qué el social selling complementa el outreach en ventas B2B:
Explica el concepto de social selling y en qué se diferencia del uso de LinkedIn para hacer outreach a escala. El social selling no consiste en enviar mensajes en masa desde LinkedIn sino en construir una presencia que hace que los prospectos lleguen a ti con una predisposición positiva antes de que comience el proceso de venta. Describe el efecto del social selling en el ciclo de venta: cuando un prospecto ya te conoce por el contenido que publicas, la llamada de discovery empieza en un punto de confianza diferente, el tiempo de construcción de credibilidad ya ha pasado antes de que la primera reunión tenga lugar, y las objeciones de credibilidad ("no conozco a esta empresa") desaparecen. Muestra con datos reales o con ejemplos de equipos comerciales B2B que han implementado social selling el impacto en las tasas de respuesta al outreach y en los ciclos de venta.

Módulo 2 — El tipo de contenido que un comercial debe publicar en LinkedIn:
Explica qué tipo de contenido funciona mejor para un profesional de ventas en LinkedIn y por qué el contenido explícitamente comercial no funciona. Las tres categorías de contenido que generan autoridad y generan leads para un comercial: el contenido de insight de sector (tendencias, cambios regulatorios, evolución del mercado que afectan al negocio de tus clientes; demuestra que entiendes su negocio antes de hablar de tu producto), el contenido de casos de éxito en formato historia (cómo un cliente resolvió un problema específico gracias a tu solución, sin nombrar al cliente pero con suficiente detalle para que los prospectos se vean reflejados), y el contenido de punto de vista sobre ventas (qué funciona y qué no funciona en el proceso de compra de tu tipo de producto, desde la perspectiva del vendedor que ha tenido cientos de conversaciones). Diseña el prompt de Claude para generar cada tipo de contenido con el input que tú proporcionas.

Módulo 3 — Sistema de producción de contenido para un comercial con poco tiempo:
Diseña el sistema de producción de contenido de LinkedIn para un comercial que tiene una cuota que alcanzar y no puede dedicar horas al día a crear contenido. El sistema incluye: la sesión de ideación mensual de 45 minutos (cómo extraer las ideas de contenido del mes de las conversaciones de ventas de los últimos 30 días: qué preguntas te han hecho los prospectos, qué objeciones has resuelto, qué insight de mercado has compartido en una reunión y que el cliente encontró valioso), el flujo de creación de cada post con Claude (tú escribes el concepto en dos o tres frases, Claude genera el borrador, tú lo revisas y añades tu perspectiva personal en 15 minutos), y el calendario de publicación realista para un comercial (dos veces por semana es suficiente; más publicación sin calidad no ayuda).

Módulo 4 — Usar LinkedIn para la inteligencia de cuenta previa a la venta:
Explica cómo usar LinkedIn como herramienta de inteligencia de cuenta antes de cada contacto con un prospecto o cada reunión de ventas. El proceso incluye: cómo investigar el perfil del interlocutor antes de la primera reunión (qué ha publicado recientemente, en qué grupos participa, qué comparte, cuáles son sus intereses profesionales fuera de su cargo oficial) para personalizar el discurso de apertura y encontrar puntos de conexión genuinos, cómo monitorizar las señales de compra de los prospectos en LinkedIn (cambio de cargo, nuevo proyecto anunciado, contrataciones en un área específica, interacción con contenido de tu competencia), y cómo usar estas señales para el timing correcto del contacto (cuándo el prospecto tiene más probabilidad de estar en modo compra). Diseña el prompt de Claude para generar el resumen de inteligencia de cuenta a partir de la información del perfil de LinkedIn.

Módulo 5 — El mensaje de LinkedIn que genera respuesta en frío:
Diseña el marco para construir mensajes de LinkedIn que generan respuesta cuando contactas en frío con un prospecto, sin que el mensaje parezca spam o un template copiado. El marco incluye: la estructura del mensaje de conexión (la personalización genuina basada en algo específico del perfil o del contenido del prospecto, el punto de conexión común, el motivo de la conexión sin vender nada, en menos de 300 caracteres), el mensaje de seguimiento cuando el prospecto acepta la conexión (cómo añadir valor inmediatamente con un insight o un recurso relevante para su negocio antes de mencionar tu producto), y el mensaje de apertura comercial (cómo llegar al tema de tu producto de forma natural después de haber construido mínimo rapport). Para cada mensaje, incluye el prompt de Claude para personalizarlo a partir del perfil del prospecto.

Entregables:
- Explicación del social selling con datos de impacto en ciclo de venta y tasas de respuesta
- Tres tipos de contenido para comerciales con estructura y prompt de Claude para cada uno
- Sistema de producción de contenido con ideación mensual, flujo de creación y calendario realista
- Proceso de inteligencia de cuenta con LinkedIn con señales de compra y prompt de resumen
- Marco de mensajes de LinkedIn en frío con mensaje de conexión, seguimiento y apertura comercial
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar social selling en LinkedIn con IA para generar inbound leads y acortar el ciclo de venta B2B',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'LinkedIn para product managers: crear contenido con IA para posicionarte como PM de referencia en tu industria',
                'description'      => 'Construye tu marca personal en LinkedIn como product manager usando IA para producir contenido que muestra tu forma de pensar sobre producto, estrategia y usuarios. Los PMs con presencia en LinkedIn acceden a las mejores oportunidades de carrera y son los primeros en ser contactados por los mejores equipos.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding para product managers con experiencia ayudando a PMs en todos los niveles de seniority a construir su presencia en LinkedIn de forma que refleje su forma de pensar sobre producto y les posicione como referentes en su área de especialización.

Contexto de mi perfil como PM:
Soy Product Manager con [AÑOS] de experiencia en [TIPO DE PRODUCTO: B2B SaaS/consumer app/marketplace/plataforma técnica/e-commerce]. He trabajado en [TIPO DE EMPRESAS] y las áreas de producto en las que tengo más profundidad son [DESCRIBE: growth, monetización, experiencia de usuario, producto para developers, análisis de datos, etc.]. Mi objetivo con LinkedIn es [DESCRIBE: ser contactado por los mejores equipos de producto, posicionarme para avanzar a Group PM o CPO, construir reputación para hablar en conferencias de producto, captar proyectos de consultoría de producto].

Bloque 1 — El posicionamiento de un PM en LinkedIn: de generalista a referente:
Explica por qué el posicionamiento de un PM en LinkedIn es más difícil que el de un developer o un marketer (el rol de PM no tiene una especialización técnica clara que lo diferencie) y cómo resolverlo. Diseña el proceso para encontrar el posicionamiento diferencial de un PM en LinkedIn: la intersección entre el tipo de producto en el que tienes más experiencia, el problema de negocio en el que más impacto has tenido y la forma de pensar sobre producto que te diferencia de los PMs genéricos. Explica cómo expresar este posicionamiento en el titular, en el "about" y en el tipo de contenido que publicas de forma coherente.

Bloque 2 — Los cinco tipos de post que más reputación generan para un PM en LinkedIn:
Diseña la estructura y el prompt de Claude para los cinco tipos de contenido que más engagement y reputación generan entre la audiencia de producto en LinkedIn. Los tipos son: el post de decisión de producto (cómo tomaste una decisión de producto difícil, cuáles eran las opciones, qué criterios usaste y qué aprendiste del resultado), el análisis de un producto que admiras (por qué el onboarding de X está bien diseñado, por qué la estrategia de monetización de Y es más inteligente de lo que parece), el post de framework o modelo mental que usas para resolver un tipo de problema de producto, el post de fracaso y lección (qué feature lanzaste que no funcionó como esperabas, qué señales ignoraste y qué harías diferente), y el post de tendencia de industria con perspectiva de producto (cómo un cambio en el mercado o en la tecnología cambia las decisiones de producto en tu área). Para cada tipo, incluye la estructura detallada y el prompt de Claude.

Bloque 3 — Usar las métricas de producto como fuente de contenido auténtico:
Explica cómo un PM puede generar contenido de LinkedIn auténtico y diferenciado a partir de las métricas y los insights reales de su trabajo diario sin revelar información confidencial. El proceso incluye: cómo anonimizar los datos reales del producto para usarlos en posts públicos (qué nivel de detalle puedes compartir sin comprometer a la empresa), cómo convertir un análisis de funnel real en un post de "lo que los datos me enseñaron sobre el comportamiento de los usuarios", y cómo usar los fracasos y los cambios de dirección del roadmap (con el tiempo suficiente de distancia) como material de contenido que muestra tu madurez como PM. Diseña el flujo de trabajo semanal para identificar los insights del trabajo del día a día que pueden convertirse en posts de LinkedIn, con el prompt de Claude para transformarlos en contenido publicable.

Bloque 4 — Networking estratégico en LinkedIn para PMs:
Diseña la estrategia de networking en LinkedIn específica para product managers que quieren avanzar en su carrera o entrar en los mejores equipos de producto. El sistema incluye: los perfiles que merece la pena seguir e interactuar activamente según la especialización del PM (CPOs de empresas que admiras, PMs seniors que escriben sobre producto, inversores que invierten en el tipo de producto con el que trabajas), la estrategia de comentarios de valor en posts de referentes de producto (cómo añadir una perspectiva nueva, un dato contradictorio o un ejemplo de tu experiencia que enriquezca la conversación sin que parezca un "gran post, totalmente de acuerdo"), y el proceso para conectar con hiring managers y CPOs de empresas donde querrías trabajar antes de que abran una posición (qué mensaje de conexión funciona y cuándo enviarlo).

Bloque 5 — LinkedIn como canal de entrada al mercado de conferencias y formación:
Explica cómo un PM puede usar LinkedIn como trampolín para acceder al mercado de conferencias y formación de producto: ser invitado a hablar en Product School, Mind the Product, conferencias locales de producto y webinars del sector. El proceso incluye: cómo construir reputación de speaker antes de haber dado ninguna charla (publicando hilos de LinkedIn sobre el tema en el que quieres hablar hasta que seas conocido como la persona que sabe sobre eso), cómo identificar a los organizadores de los eventos de producto más relevantes y cómo aparecer en su radar de forma natural, y el mensaje de propuesta de charla que funciona para un PM que quiere hablar por primera vez en una conferencia (con el prompt de Claude para generarlo a partir de tu área de expertise y el tipo de audiencia del evento).

Entregables:
- Marco de posicionamiento diferencial para PMs con proceso de definición y expresión en el perfil
- Cinco tipos de post de producto con estructura detallada y prompt de Claude para cada uno
- Flujo de trabajo semanal para generar contenido auténtico desde métricas e insights de trabajo diario
- Estrategia de networking para PMs con perfiles clave, comentarios de valor y mensajes de conexión
- Proceso para entrar al mercado de conferencias de producto con estrategia de reputación de speaker
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionarse como PM de referencia en LinkedIn con contenido de producto generado con IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Personal branding para RRHH en LinkedIn: posicionarse como líder en people management con IA',
                'description'      => 'Construye tu presencia en LinkedIn como profesional de RRHH y people management usando IA para generar contenido que refleja tu expertise en talento, cultura y liderazgo. Los profesionales de RRHH con voz propia en LinkedIn atraen a las mejores empresas, construyen comunidades y acceden a oportunidades de consultoría.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding para profesionales de recursos humanos con experiencia ayudando a HR managers, directores de personas y talent acquisition specialists a construir su presencia en LinkedIn de forma que refleja su expertise real y les diferencia de la mayoría de los perfiles de RRHH que solo publican ofertas de trabajo.

Contexto de mi perfil en RRHH:
Soy un profesional de [RRHH/Talent Acquisition/People/Cultura organizativa] con [AÑOS] de experiencia en [TIPO DE EMPRESAS]. Las áreas en las que tengo más profundidad son [LISTA: selección técnica, diseño organizativo, culture design, employee experience, learning & development, compensación, diversidad e inclusión, etc.]. Mi objetivo con LinkedIn es [DESCRIBE: ser reconocido como referente en mi especialidad, atraer oportunidades de consultoría, ser contactado por empresas donde querría trabajar, crear una comunidad de profesionales de RRHH].

Sección 1 — El posicionamiento de un profesional de RRHH en LinkedIn más allá de las ofertas de trabajo:
Explica por qué la mayoría de los perfiles de RRHH en LinkedIn publican solo ofertas de trabajo y por qué eso no construye personal branding. Diseña el proceso para definir el posicionamiento diferencial de un profesional de RRHH: qué problema específico de las personas y las organizaciones resuelves especialmente bien, qué perspectiva única tienes sobre un tema de people management, y para qué tipo de empresa o líder eres el partner de RRHH más valioso. Explica cómo expresar este posicionamiento en el titular, en el "about" y en el tipo de contenido que publicas de forma coherente y cómo diferenciarte de los perfiles que hablan genéricamente de "cultura" y "talento".

Sección 2 — El contenido de RRHH que genera engagement real en LinkedIn:
Diseña los cuatro tipos de contenido que más engagement generan para un profesional de RRHH en LinkedIn y el prompt de Claude para producirlos. Los tipos son: el post de "lo que nadie te dice sobre contratar en [TIPO DE ROL O SECTOR]" (con las señales reales que usas para evaluar candidatos y que no aparecen en ningún manual), el post de reflexión sobre una iniciativa de cultura o de liderazgo que implementaste y qué funcionó y qué no funcionó (con datos anónimos de impacto), el post de opinión sobre una tendencia de RRHH (sobre el debate del trabajo remoto, de la semana de cuatro días, de las entrevistas técnicas, del salary transparency) con tu punto de vista argumentado desde tu experiencia, y el post de caso de éxito de proceso de selección o de desarrollo de talento (cómo identificaste a un candidato excelente que no hubiera pasado el proceso estándar o cómo ayudaste a un empleado a descubrir una carrera que no sabía que quería). Para cada tipo, incluye la estructura y el prompt de Claude.

Sección 3 — Sistema de producción de contenido para un profesional de RRHH:
Diseña el sistema de producción de contenido semanal para un profesional de RRHH que tiene el ritmo de trabajo de un departamento de personas en crecimiento. El sistema incluye: cómo usar Claude para convertir los aprendizajes de las conversaciones de la semana (una entrevista de salida con un insight inesperado, una conversación de coaching con un manager que reveló un patrón, un proceso de selección que no fue como esperabas) en ideas de post de LinkedIn en menos de 10 minutos, el flujo de creación de un post con Claude (tú proporcionas el insight bruto, Claude genera la estructura del post, tú añades el contexto emocional y los detalles que hacen que el post sea auténtico), y el proceso para asegurarte de que el contenido publicado no revela información confidencial de empleados o candidatos.

Sección 4 — Optimizar el perfil de LinkedIn para atraer empresas y candidatos de calidad:
Diseña el proceso de optimización del perfil de LinkedIn para un profesional de RRHH con el objetivo de que los candidatos y las empresas donde quieres trabajar entiendan en 30 segundos qué te hace diferente. Cubre: el titular (cómo ir más allá de "HR Manager en [Empresa]" e incluir tu área de especialización y el tipo de problema que resuelves mejor), la sección "about" (estructurada como un manifesto de tu filosofía de gestión de personas con ejemplos concretos de impacto y una llamada a la acción clara), la sección de experiencia (cómo describir cada puesto en términos de iniciativas implementadas y su impacto en las personas y el negocio, no en términos de funciones genéricas), y cómo usar las recomendaciones estratégicamente (pedir recomendaciones específicas que hablen de los resultados y la forma de trabajar que te diferencian). Para cada sección, incluye el prompt de Claude.

Sección 5 — Construir comunidad de RRHH en LinkedIn:
Explica cómo un profesional de RRHH puede usar LinkedIn para construir una comunidad de pares, candidatos de calidad y empresas interesadas en su expertise. El proceso incluye: la estrategia de comentarios en posts de referentes de RRHH para ganar visibilidad entre su audiencia antes de que te conozcan directamente, cómo iniciar conversaciones sobre temas de people management con tu red que generan debate genuino y te posicionan como facilitador de la conversación, y el proceso para crear tu propio newsletter de LinkedIn sobre un tema específico de RRHH que consolida tu posicionamiento de nicho y te da un canal directo con tu audiencia. Para cada elemento, incluye el prompt de Claude para acelerar la producción.

Entregables:
- Marco de posicionamiento diferencial para RRHH más allá de las ofertas de trabajo
- Cuatro tipos de contenido de RRHH con estructura, autenticidad sin confidencialidad y prompt de Claude
- Sistema de producción semanal con captura de insights y flujo de creación con guardianes de confidencialidad
- Optimización del perfil sección a sección con prompts y criterios de diferenciación
- Proceso de construcción de comunidad con estrategia de comentarios, debates y newsletter de nicho
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una voz propia en LinkedIn como profesional de RRHH usando IA para posicionarse como referente en people management',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'LinkedIn para finanzas: construir autoridad con contenido financiero con IA sin comprometer la confidencialidad',
                'description'      => 'Diseña tu estrategia de personal branding en LinkedIn como profesional de finanzas usando IA para generar contenido que muestra tu expertise analítico y tu visión de negocio sin revelar información confidencial. Los profesionales de finanzas con presencia en LinkedIn acceden a oportunidades de consultoría, advisory y directivos que no aparecen en las bolsas de trabajo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding para profesionales de finanzas con experiencia ayudando a CFOs, directores financieros, analistas y asesores a construir su presencia en LinkedIn de forma que refleje su expertise real respetando las obligaciones de confidencialidad propias del sector financiero.

Contexto de mi perfil en finanzas:
Soy un profesional de [ÁREA: FP&A/finanzas corporativas/controlling/tesorería/inversiones/auditoría/banca/fintech] con [AÑOS] de experiencia en [TIPO DE EMPRESAS O INSTITUCIONES]. Las áreas en las que tengo más expertise son [LISTA: modelización financiera, valoración de empresas, gestión de tesorería, análisis de inversiones, gestión de riesgos, etc.]. Mi objetivo con LinkedIn es [DESCRIBE: acceder a oportunidades de consejero o advisory, captar proyectos de consultoría, ser contactado por fondos o empresas de crecimiento rápido, construir reputación para hablar en foros del sector].

Bloque 1 — Cómo construir autoridad financiera en LinkedIn respetando la confidencialidad:
Explica el marco para un profesional de finanzas que quiere construir su presencia en LinkedIn con la restricción fundamental de no poder revelar datos financieros de las empresas con las que ha trabajado. Las tres estrategias que permiten construir autoridad sin violar la confidencialidad: el contenido de marcos y metodologías (enseñar cómo piensas sobre un problema financiero, qué modelo usas para analizar la viabilidad de una inversión, cómo construyes un forecast robusto, sin necesidad de datos reales de ninguna empresa), el contenido de opinión sobre macroeconomía y tendencias financieras (tu perspectiva sobre los tipos de interés, la valoración de sectores, las tendencias de M&A o la evolución de los mercados de capital), y el contenido de lecciones de carrera (qué aprendiste de tu experiencia en finanzas que no enseñan en el MBA, qué habilidades no técnicas diferencian a un CFO excelente de uno mediocre).

Bloque 2 — Los formatos de contenido financiero que mejor funcionan en LinkedIn:
Diseña la estructura y el prompt de Claude para los cuatro formatos de contenido financiero que más engagement generan para un profesional del sector en LinkedIn. Los formatos son: el post de framework financiero (cómo analizas un tipo de decisión financiera específica: cómo evalúas una oportunidad de M&A, cómo construyes un modelo de pricing, cómo diseñas la estructura de capital de una empresa en crecimiento), el análisis de los resultados trimestrales de una empresa cotizada (tu lectura de los números, qué te parece bien, qué te parece preocupante, qué mirarías si fueras el CFO), el post de desmitificación de conceptos financieros complejos para una audiencia no financiera (cómo explicar el WACC, el working capital o la diferencia entre EBITDA y cash flow de forma que lo entienda un CEO sin formación financiera), y el post de tendencia financiera con perspectiva práctica (cómo afecta a las decisiones financieras de las empresas un cambio en los tipos de interés, una nueva regulación contable o la adopción de la IA en finanzas). Para cada formato, incluye la estructura y el prompt de Claude.

Bloque 3 — Sistema de producción de contenido financiero con IA:
Diseña el sistema de producción de contenido de LinkedIn para un profesional de finanzas que tiene poco tiempo libre y altas restricciones de confidencialidad. El sistema incluye: cómo usar Claude para generar ideas de contenido a partir de los temas financieros que más debatas en el trabajo sin revelar contexto confidencial (le das a Claude el tema genérico y Claude genera el post basado en su conocimiento general del tema financiero), el flujo de validación del contenido antes de publicarlo (checklist para asegurarse de que no hay datos de empresas identificables, referencias a transacciones en curso o información de mercado que no sea pública), y el calendario de publicación realista para un directivo financiero con agenda apretada (una vez a la semana es suficiente para un perfil de alto nivel; la consistencia importa más que la frecuencia).

Bloque 4 — Posicionar el perfil de LinkedIn para oportunidades de consejero y advisory:
Diseña el proceso de optimización del perfil de LinkedIn para un profesional de finanzas con el objetivo de ser contactado para roles de consejero, advisory o CFO fraccionado. Cubre: el titular (cómo ir más allá del cargo actual e incluir el tipo de empresa con la que más valor añades y el área de finanzas en la que eres más fuerte), la sección "about" (estructurada como una propuesta de valor para el tipo de empresa que quieres apoyar: startups en camino a Series B, empresas familiares en proceso de profesionalización, scale-ups pre-IPO), la sección de experiencia (cómo describir cada etapa de tu carrera en términos de situaciones financieras complejas que navegaste y qué resultados conseguiste, con métricas anonimizadas cuando es posible), y cómo usar el perfil para mostrar tu perspectiva financiera antes de que el interlocutor haya leído tu CV. Para cada sección, incluye el prompt de Claude.

Bloque 5 — Red financiera estratégica en LinkedIn:
Diseña la estrategia de networking en LinkedIn para un profesional de finanzas que quiere construir su red de forma cualitativa sin invertir horas al día. El sistema incluye: los tipos de perfil que merece la pena seguir y con los que merece la pena interactuar según el objetivo de carrera (si buscas oportunidades de advisory: VCs, fondos de PE, CEOs de scale-ups; si buscas posiciones de CFO: headhunters de C-suite, presidentes de consejos de administración), la estrategia de comentarios de calidad en el contenido financiero de referentes del sector (cómo añadir perspectiva técnica real en una discusión financiera sin sonar condescendiente), y el proceso para establecer relaciones con perfiles de inversión o de dirección que pueden abrir puertas sin que parezca networking transaccional.

Entregables:
- Marco de construcción de autoridad financiera en LinkedIn con tres estrategias sin violar confidencialidad
- Cuatro formatos de contenido financiero con estructura, prompt de Claude y checklist de publicación segura
- Sistema de producción con generación de ideas, validación de confidencialidad y calendario realista
- Optimización del perfil para oportunidades de advisory y consejero con prompts y criterios
- Estrategia de networking financiero cualitativo con perfiles clave y comentarios de valor
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir autoridad financiera en LinkedIn con IA respetando las restricciones de confidencialidad del sector',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Personal branding para abogados en LinkedIn: contenido con IA respetando la deontología profesional',
                'description'      => 'Diseña tu estrategia de personal branding en LinkedIn como abogado usando IA para generar contenido jurídico de calidad que construye tu reputación sin violar las normas deontológicas. Los abogados con presencia activa en LinkedIn reciben más contactos directos de clientes potenciales y consolidan su posicionamiento como expertos de referencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding para profesionales del derecho con experiencia ayudando a abogados, socios de despacho y juristas de empresa a construir su presencia en LinkedIn de forma que respeta las normas deontológicas que regulan la publicidad de los abogados en España y la Unión Europea, mientras genera visibilidad y oportunidades de negocio reales.

Contexto de mi práctica jurídica:
Soy abogado especializado en [ÁREA DEL DERECHO: mercantil, laboral, fiscal, tecnología, propiedad intelectual, litigación, etc.] y trabajo en [DESPACHO DE ABOGADOS/EMPRESA/EJERCICIO INDIVIDUAL]. Tengo [AÑOS] de experiencia y los tipos de cliente con los que más trabajo son [DESCRIBE: startups, PYMES, multinacionales, particulares con alto patrimonio, instituciones públicas]. Mi objetivo con LinkedIn es [DESCRIBE: ser reconocido como referente en mi especialidad, recibir consultas directas de clientes potenciales, construir mi marca antes de fundar mi propio despacho, posicionarme para ser socio].

Parte 1 — El marco deontológico del personal branding para abogados en LinkedIn:
Explica las reglas deontológicas que regulan la publicidad y la captación de clientes de los abogados en España (Estatuto General de la Abogacía, normativa del CGAE) y cómo se aplican a LinkedIn. Lo que está permitido: publicar análisis jurídicos de actualidad, comentar jurisprudencia, compartir opiniones sobre cambios legislativos, dar visibilidad a los proyectos en los que has participado de forma genérica, compartir el historial profesional y las áreas de práctica. Lo que está prohibido: el reclamo directo de clientela, la publicidad comparativa con otros abogados, garantizar resultados, revelar casos de clientes sin su consentimiento. Diseña el marco de contenido que permite construir reputación y atraer clientes dentro de este marco deontológico.

Parte 2 — Los formatos de contenido jurídico que mejor funcionan en LinkedIn:
Diseña la estructura y el prompt de Claude para los cuatro formatos de contenido jurídico que más engagement generan para un abogado en LinkedIn. Los formatos son: el análisis de una sentencia o resolución reciente con las implicaciones prácticas para las empresas o personas afectadas (el contenido más valorado por los clientes potenciales porque muestra que estás al día y que entiendes el impacto práctico del derecho), el post de explicación de un concepto jurídico complejo en lenguaje accesible para no abogados (qué significa realmente la responsabilidad del administrador, cómo funciona el proceso monitorio, cuándo se puede rescindir un contrato sin penalización), el post de opinión sobre un cambio legislativo o una tendencia jurídica con tu análisis crítico (qué te parece bien y qué te parece mal de la nueva ley, y qué consecuencias prácticas tendrá para las empresas), y el caso de éxito ficticio o anonimizado (describe la situación legal de un tipo de cliente sin identificarle y cómo se resolvió, con la lección jurídica que extrae). Para cada formato, incluye la estructura y el prompt de Claude.

Parte 3 — Usar Claude para generar contenido jurídico de calidad:
Explica el flujo de trabajo específico para que un abogado use Claude para generar borradores de contenido jurídico de calidad que después revisa y enriquece con su expertise real. El flujo incluye: el prompt de contexto jurídico que defines para calibrar el nivel técnico y el tono del contenido (tu especialidad, el nivel de sofisticación de tu audiencia objetivo, si el contenido va dirigido a abogados o a clientes no juristas), el proceso de briefing para Claude cuando quieres un post sobre un tema jurídico específico (cómo darle el contexto de la sentencia o la ley, tu perspectiva sobre el tema y el formato que quieres), y el checklist de revisión del contenido generado antes de publicarlo (verificación de la precisión jurídica, eliminación de cualquier elemento que pueda interpretarse como captación directa de clientela, y ajuste del tono a tu voz).

Parte 4 — El perfil de LinkedIn de un abogado que atrae mandatos de calidad:
Diseña el proceso de optimización del perfil de LinkedIn para un abogado con el objetivo de que cuando un cliente potencial lo visita entienda inmediatamente en qué te especializas, qué tipo de clientes atiendes y por qué eres la elección correcta para su problema. Cubre: el titular (cómo ir más allá de "Abogado en [Despacho]" e incluir la especialidad jurídica y el tipo de cliente al que sirves mejor), la sección "about" (estructurada como un resumen de tu trayectoria, tu especialización y el tipo de asuntos en los que más valor añades, sin reclamo directo de clientela), la sección de experiencia (cómo describir cada etapa de tu carrera en términos de áreas de práctica y tipos de operaciones o asuntos en los que has participado, sin revelar información confidencial de clientes), y las publicaciones destacadas (cómo seleccionar y ordenar los artículos o posts que mejor demuestran tu expertise en tu área de especialización). Para cada sección, incluye el prompt de Claude.

Parte 5 — Construir red jurídica estratégica en LinkedIn:
Diseña la estrategia de networking en LinkedIn para un abogado que quiere construir su reputación en el sector jurídico y generar referencias de calidad. El sistema incluye: los perfiles jurídicos con los que merece la pena conectar e interactuar activamente según tu especialidad (colegas de otras especialidades complementarias para intercambio de referencias, académicos y profesores universitarios de tu área para visibilidad en el entorno doctrinal, jueces y árbitros cuya jurisprudencia comentas en tu contenido), la estrategia de comentarios técnicos en posts de referentes jurídicos (cómo añadir valor real con un matiz jurídico, un ejemplo de jurisprudencia relacionada o una perspectiva práctica que enriquezca la discusión), y el proceso para gestionar las consultas que llegarán de potenciales clientes a través de LinkedIn (cómo responder de forma que es útil pero que establece el marco de la relación profesional desde el principio).

Entregables:
- Marco deontológico completo para el personal branding de abogados en LinkedIn con ejemplos de lo permitido y lo prohibido
- Cuatro formatos de contenido jurídico con estructura, checklist deontológico y prompt de Claude
- Flujo de trabajo con Claude para generar borradores jurídicos con revisión de precisión y deontología
- Optimización del perfil sección a sección para atraer mandatos de calidad con prompts y criterios
- Estrategia de networking jurídico con perfiles clave, comentarios técnicos y gestión de consultas entrantes
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir reputación jurídica en LinkedIn con IA respetando las normas deontológicas y generando mandatos de calidad',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'LinkedIn para Customer Success: posicionarse como experto en retención y éxito del cliente con IA',
                'description'      => 'Construye tu marca personal en LinkedIn como profesional de Customer Success usando IA para generar contenido que muestra tu expertise en retención, onboarding y expansión. Los CSMs y directores de CS con presencia activa en LinkedIn son los primeros en ser contactados cuando una empresa scale-up busca construir su equipo de CS.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding para profesionales de Customer Success con experiencia ayudando a CSMs, directores de CS y VPs de Customer Success a construir su presencia en LinkedIn de forma que refleja su expertise real en retención, onboarding y éxito del cliente.

Contexto de mi rol en CS:
Soy [CSM/Director de CS/VP of Customer Success] con [AÑOS] de experiencia en [TIPO DE EMPRESA: SaaS B2B/plataforma/producto digital]. He gestionado [TIPO DE CARTERA: SMB/mid-market/enterprise] y las áreas en las que tengo más profundidad son [LISTA: onboarding, churn prediction, health scores, QBRs, expansión, implementación de CS a escala]. Mi objetivo con LinkedIn es [DESCRIBE: ser contactado por los mejores equipos de CS en scale-ups, construir reputación para hablar en conferencias de CS, captar proyectos de consultoría de implantación de CS, avanzar de CSM a Director de CS].

Bloque 1 — El posicionamiento de un profesional de CS en LinkedIn:
Explica por qué la mayoría de los profesionales de Customer Success son invisibles en LinkedIn (publican ofertas de trabajo o contenido genérico de "cultura") y cómo diferenciarse. Diseña el proceso para definir el posicionamiento de un profesional de CS: qué tipo de producto, qué segmento de cliente y qué problema de retención o expansión resuelves especialmente bien. Explica cómo expresar este posicionamiento en el titular (más allá de "Customer Success Manager en [Empresa]"), en el "about" (como propuesta de valor para el tipo de empresa donde quieres trabajar o para los clientes de consultoría que quieres atraer) y en el tipo de contenido que publicas de forma coherente.

Bloque 2 — Los tipos de contenido de CS que más engagement generan en LinkedIn:
Diseña la estructura y el prompt de Claude para los cinco tipos de contenido que más interacción generan entre la audiencia de CS y de SaaS en LinkedIn. Los tipos son: el post de "qué aprendí de [NÚMERO] renovaciones en [PERÍODO]" (con los patrones reales que detectaste en los clientes que renuevan vs. los que churnan, con datos anonimizados), el post de framework de CS (tu modelo mental para detectar el riesgo de churn antes de que sea visible, cómo diseñas un QBR que genera expansión, cómo construyes un programa de onboarding que acorta el time-to-value), el post de opinión sobre una tendencia de CS (el debate sobre si CS debe tener cuota comercial, cómo cambia el CS con la IA, qué hace que un health score sea realmente predictivo), el caso de onboarding o rescate de cuenta (anonimizado, describiendo la situación, tu intervención y el resultado), y el post de recurso práctico (una plantilla de QBR, un framework de health score, una estructura de plan de éxito del cliente). Para cada tipo, incluye la estructura y el prompt de Claude.

Bloque 3 — Sistema de producción de contenido para CSMs con mucha carga de cuentas:
Diseña el sistema de producción de contenido semanal para un CSM que gestiona decenas de cuentas y tiene poco tiempo para crear contenido. El sistema incluye: cómo identificar las ideas de contenido en el trabajo diario (cada QBR que te da un insight, cada conversación de rescate que revela un patrón, cada onboarding que te enseña algo sobre cómo los clientes realmente aprenden un producto), el flujo de captura de ideas en el momento (un mensaje de voz en el teléfono, una nota en Notion mientras esperas en una reunión) y de transformación en post con Claude (el prompt que convierte tus notas brutas en un post estructurado), y el calendario de publicación realista para un CSM (una vez a la semana es suficiente si el contenido es de calidad; dos veces es mejor pero no a costa del tiempo de las cuentas).

Bloque 4 — Usar el contenido de LinkedIn para generar oportunidades de carrera en CS:
Explica la estrategia específica para que un CSM use su presencia en LinkedIn para acceder a las mejores oportunidades de trabajo en equipos de CS sin depender de las plataformas de empleo. El proceso incluye: cómo identificar las empresas donde querrías trabajar en CS (las que tienen un equipo de CS en crecimiento, las que tienen un VP de CS que publica contenido interesante en LinkedIn, las que están en la fase donde el CS tiene impacto estratégico real), la estrategia de visibilidad ante esas empresas sin aplicar directamente (comentar el contenido del VP de CS, conectar con el equipo de CS de esa empresa, publicar contenido sobre problemas de CS que esa empresa probablemente tiene), y el momento y el mensaje correcto para expresar interés directo en una oportunidad con una empresa que ya te conoce por tu contenido.

Bloque 5 — Posicionarse como consultor de implantación de CS:
Diseña la estrategia de LinkedIn para un profesional de CS que quiere captar proyectos de consultoría de implantación de procesos y equipos de Customer Success para empresas que están construyendo su área de CS por primera vez. El sistema incluye: el tipo de contenido que posiciona como consultor (no solo qué sabes hacer sino cómo lo haces, cuál es tu metodología, qué resultados has conseguido en implantaciones anteriores), cómo construir el funnel de LinkedIn a consultoría (desde el post que muestra el problema hasta la propuesta de llamada de descubrimiento), y la plantilla del perfil de LinkedIn de un consultor de CS con el titular, el "about" y la sección de servicios orientados a captar empresas que necesitan construir su equipo de CS desde cero. Para cada elemento, incluye el prompt de Claude.

Entregables:
- Marco de posicionamiento diferencial para CS con proceso de definición y expresión en el perfil
- Cinco tipos de contenido de CS con estructura, datos anonimizados y prompt de Claude para cada uno
- Sistema de producción con captura de ideas, transformación con Claude y calendario realista para CSMs
- Estrategia de visibilidad ante empresas objetivo para oportunidades de carrera sin depender de portales
- Posicionamiento de consultor de CS con funnel de LinkedIn a consultoría y plantilla de perfil
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionarse como experto en Customer Success en LinkedIn con IA para acceder a las mejores oportunidades de carrera y consultoría',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'LinkedIn como canal de captación de clientes para freelancers: personal branding con IA que genera proyectos',
                'description'      => 'Diseña tu estrategia de personal branding en LinkedIn con IA para que tu perfil y tu contenido generen un flujo constante de consultas de clientes potenciales. Los freelancers con presencia activa en LinkedIn dejan de perseguir clientes y empiezan a ser perseguidos por ellos.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio para freelancers con experiencia ayudando a profesionales independientes a construir su presencia en LinkedIn de forma que su perfil y su contenido trabajan como canal de captación de clientes activo mientras ellos se dedican a su trabajo.

Contexto de mi negocio freelance:
Me dedico a [DESCRIBE TU ESPECIALIDAD] y trabajo principalmente con [TIPO DE CLIENTE: startups/empresas medianas/agencias/directivos como particulares]. El tipo de proyecto que más disfruto y en el que más valor aporto es [DESCRIBE]. El problema con mi captación de clientes actual es [DESCRIBE: dependo de las recomendaciones de clientes anteriores y cuando no llegan me quedo sin proyectos, tengo que bajar precios para competir con otros freelancers, pierdo tiempo en propuestas que no se convierten en proyecto, los clientes que me llegan no tienen el presupuesto que necesito].

Sección 1 — LinkedIn como sistema de captación de clientes para freelancers, no como portfolio:
Explica la diferencia entre usar LinkedIn como portfolio pasivo (donde subes el CV y esperas que alguien te encuentre) y usarlo como sistema de captación activa de clientes. Un freelancer con una estrategia de LinkedIn activa genera un flujo de contactos entrantes que le permite elegir los proyectos que quiere hacer en lugar de aceptar todo lo que llega. Describe el mecanismo por el que LinkedIn convierte el contenido en consultas de clientes: el contenido de expertise atrae a los clientes que tienen el problema que tú resuelves, el perfil optimizado les convence de que eres la persona correcta, y la llamada a la acción convierte la visita al perfil en un primer contacto. Explica por qué esto es más sostenible que la búsqueda activa de proyectos en plataformas de freelancing como Upwork o Fiverr.

Sección 2 — Definir el posicionamiento de nicho para maximizar los ingresos:
Diseña el proceso para encontrar el nicho de posicionamiento en LinkedIn que genera los mejores proyectos con los mejores clientes. El proceso incluye: el análisis de tu historial de proyectos (cuáles fueron más rentables, cuáles disfrutaste más, cuáles generaron las mejores referencias), la identificación del tipo de cliente con el que mejor funciona la relación de trabajo y que más valora lo que haces, y la definición del claim de posicionamiento que convierte el perfil en un imán para ese tipo de cliente (en lugar de "diseñador freelance" o "copywriter", algo como "ayudo a startups de software B2B a explicar su producto complejo en lenguaje que convierte"). Explica cómo este posicionamiento específico reduce la competencia y te permite cobrar más.

Sección 3 — El contenido de LinkedIn que genera consultas de clientes potenciales:
Diseña la estrategia de contenido de LinkedIn para un freelancer con el objetivo específico de generar consultas de clientes, no de acumular seguidores. Explica la diferencia entre el contenido que genera engagement (muchos likes de otros profesionales del mismo sector) y el contenido que genera clientes (posts que hacen pensar al cliente potencial "esto es exactamente lo que necesito"). Diseña los cuatro tipos de post que mejor convierten en consultas de clientes para un freelancer: el post de caso de éxito anonimizado (el problema del cliente, tu intervención y el resultado medible), el post de perspectiva de experto sobre un problema que tu cliente ideal tiene (que demuestra que entiendes su negocio antes de que te contrate), el post de proceso de trabajo (cómo te enfrentas a un tipo de proyecto, qué hace único tu enfoque), y el post de antes y después (transformación del trabajo del cliente gracias a tu servicio). Para cada tipo, incluye la estructura y el prompt de Claude.

Sección 4 — Sistema de producción de contenido con Claude para freelancers con poco tiempo:
Diseña el sistema de producción de contenido de LinkedIn que un freelancer puede mantener mientras tiene proyectos de cliente activos. El sistema incluye: la sesión de ideación trimestral (cómo generar con Claude 12 ideas de post por mes usando los proyectos recientes, las preguntas frecuentes de los clientes y las tendencias del sector en el que te especializas), el flujo de creación de cada post con Claude (el briefing en 5 minutos, la generación del borrador en 2 minutos, la revisión y personalización en 10 minutos), y la estrategia de reciclaje de contenido (cómo un caso de éxito se convierte en tres posts diferentes: el proceso, el resultado y la lección aprendida). Explica cuánto tiempo realista requiere este sistema a la semana y cuándo empiezan a llegar las primeras consultas de clientes.

Sección 5 — El perfil de LinkedIn del freelancer que convierte visitas en consultas:
Diseña el proceso de optimización del perfil de LinkedIn para un freelancer con el objetivo específico de convertir la visita al perfil en un primer contacto. Cubre: el titular (cómo construir un titular que identifica al cliente potencial y habla directamente al problema que resuelves: "ayudo a [tipo de empresa] a [resultado que consiguen trabajando contigo] sin [el dolor que tienen actualmente]"), la sección "about" (estructurada como una página de ventas: el problema que resuelves, tu enfoque diferencial, los resultados que has conseguido para clientes similares y la llamada a la acción clara para dar el paso siguiente), la sección de servicios (cómo usar la sección de servicios de LinkedIn para mostrar los tres servicios principales con descripción clara del resultado que el cliente obtiene), y la sección de recomendaciones (cómo pedir recomendaciones estratégicas que hablan de los resultados y la experiencia de trabajar contigo, no solo del trabajo bien hecho). Para cada sección, incluye el prompt de Claude.

Entregables:
- Explicación del mecanismo de LinkedIn como sistema de captación de clientes para freelancers
- Proceso de definición del nicho de posicionamiento con análisis de historial y claim diferencial
- Cuatro tipos de post que generan consultas de clientes con estructura y prompt de Claude
- Sistema de producción trimestral con sesión de ideación, flujo semanal y reciclaje de contenido
- Optimización del perfil freelancer como página de ventas con titular, about, servicios y recomendaciones
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Generar un flujo constante de consultas de clientes potenciales para freelancers a través de LinkedIn con contenido creado con IA',
                'vote_score'       => 47,
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
