<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills393Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de comunidad de marca: construir y activar una audiencia propia en lugar de alquilarla',
                'description'      => 'Diseña la estrategia para crear una comunidad de marca que genere engagement orgánico, defensores de la marca y crecimiento sostenible. Las marcas con comunidades propias reducen su dependencia de la publicidad de pago. Este prompt cubre el diseño completo de una comunidad de marketing.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de comunidades y marketing de contenidos con experiencia construyendo audiencias propias para marcas B2C y B2B. Tu objetivo es ayudarme a diseñar una estrategia completa para crear y activar una comunidad de marca que genere crecimiento orgánico sostenible y reduzca la dependencia de la publicidad de pago.

Contexto de la marca:
Nuestra marca es [DESCRIBE: sector, productos o servicios, audiencia objetivo, valores de marca, canales actuales de marketing]. Actualmente nuestra audiencia se concentra en [PLATAFORMAS: Instagram, LinkedIn, email, etc.] y el problema es que [DESCRIBE EL PROBLEMA: alcance pagado vs. orgánico, engagement bajo, dependencia de algoritmos, coste de adquisición alto].

Bloque 1 — Por qué una comunidad de marca:
Explica la diferencia entre una audiencia y una comunidad. Una audiencia recibe mensajes pasivamente; una comunidad genera conversación, contenido y nuevos miembros de forma activa. Describe las tres características que convierten a un grupo de seguidores en una comunidad: identidad compartida (sus miembros se identifican entre sí, no solo con la marca), rituals y momentos recurrentes (eventos, publicaciones periódicas, tradiciones), y capacidad de autoorganización (los miembros interactúan sin que la marca lo inicie). Incluye tres ejemplos de marcas con comunidades poderosas y qué las hace funcionar: una B2C, una B2B y una de creador de contenido.

Bloque 2 — Diseño de la comunidad de marca:
Define los elementos constitutivos de la comunidad de marketing de nuestra marca. Para cada elemento, proporciona la decisión estratégica y la justificación: propósito de la comunidad (por qué existe más allá de vender el producto), valor exclusivo para los miembros (qué pueden conseguir en la comunidad que no pueden obtener en ningún otro sitio), identidad del miembro ideal (no del cliente ideal, sino del tipo de persona que construirá la comunidad), plataforma de la comunidad (Slack, Discord, Circle, LinkedIn Group, comunidad propia en la web, newsletter de pago), y modelo de gobernanza (cómo se moderan las conversaciones, qué tipo de contenido se permite, quiénes son los moderadores).

Bloque 3 — Programa de lanzamiento en 90 días:
Diseña un plan de lanzamiento de la comunidad en tres fases de 30 días. Fase 1 (día 1-30): captación de los primeros 100 miembros fundadores. Describe las tácticas para invitar a estas personas de tu base actual de clientes o seguidores, el email de invitación, los beneficios exclusivos de ser miembro fundador y el contenido inicial que activa la primera conversación. Fase 2 (día 31-60): establecimiento de la cadencia y los rituales. Define las publicaciones fijas semanales, el primer evento de la comunidad (AMA, webinar, reto colectivo) y cómo empezar a delegar la moderación en miembros activos. Fase 3 (día 61-90): primeras métricas y optimización. Define cómo medir si la comunidad está viva (tasa de participación activa, número de conversaciones iniciadas por miembros, tasa de retención mensual) y cómo ajustar el modelo.

Bloque 4 — Conversión de miembros en defensores de marca:
Diseña un programa de embajadores de la comunidad que identifique a los miembros más activos y los convierta en defensores activos de la marca. Incluye: los criterios para identificar a un potencial embajador (frecuencia de participación, calidad de las contribuciones, capacidad de influir en otros miembros), el programa de reconocimiento y beneficios para embajadores (acceso anticipado a productos, menciones públicas, sesiones privadas con el equipo de la marca), y cómo activar a los embajadores para que generen contenido externo sobre la comunidad y atraigan nuevos miembros.

Bloque 5 — Monetización de la comunidad:
Explica los modelos de monetización que una marca puede aplicar a su comunidad sin destruir la confianza de los miembros. Describe cinco modelos con sus pros, contras y requisitos: membresía de pago con acceso a contenido premium, eventos exclusivos de pago, marketplace dentro de la comunidad, patrocinios y colaboraciones con marcas complementarias, y cursos o formaciones creados con el conocimiento de la propia comunidad. Indica para cada modelo el tamaño mínimo de comunidad necesario para que sea viable y las métricas clave de rentabilidad.

Entregables:
- Definición estratégica de los 5 elementos constitutivos de la comunidad
- Plan de lanzamiento de 90 días por fases con tácticas específicas
- Programa de embajadores con criterios, beneficios y activación
- Modelos de monetización con requisitos y KPIs de rentabilidad
- Dashboard de salud de comunidad con métricas semanales y mensuales
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar una estrategia de comunidad de marca que genere crecimiento orgánico sostenible',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Construir y gestionar una comunidad de desarrolladores: estrategia de developer relations',
                'description'      => 'Diseña una estrategia de Developer Relations (DevRel) para atraer, activar y retener a desarrolladores que usen tu API, SDK o plataforma. Las comunidades de desarrolladores son el activo más valioso para productos técnicos. Este prompt cubre la estrategia completa de DevRel.',
                'prompt_content'   => <<<'EOT'
Eres un Head of Developer Relations con experiencia construyendo comunidades de desarrolladores para startups de infraestructura y plataformas API que han pasado de cero a decenas de miles de desarrolladores activos. Necesito diseñar una estrategia completa de Developer Relations para nuestra plataforma.

Contexto del producto:
Nuestra plataforma es [DESCRIBE: tipo de API o herramienta, casos de uso principales, tecnologías que utiliza, precio y modelo de negocio]. Actualmente tenemos [NÚMERO] desarrolladores registrados y [NÚMERO] activos mensualmente. Nuestros competidores principales son [LISTA]. El perfil de nuestro desarrollador ideal es [DESCRIBE: stack tecnológico, nivel de experiencia, tipo de empresa donde trabaja].

Sección 1 — Los tres pilares de DevRel:
Explica el framework de Developer Relations basado en los tres pilares: Educación (documentación, tutoriales, ejemplos de código, contenido técnico), Evangelización (presencia en conferencias, partnerships con comunidades, contenido de awareness) y Comunidad (foros, Discord, GitHub Discussions, meetups). Para cada pilar, describe las actividades concretas, los recursos necesarios, los KPIs que mide y cómo contribuye al funnel de adopción del desarrollador (de desconocer el producto a ser un contributor activo).

Sección 2 — Documentación técnica como estrategia de comunidad:
Explica por qué la documentación es la herramienta de DevRel más importante y cómo diseñar una experiencia de documentación que retenga a los desarrolladores y los lleve al primer éxito en menos de 15 minutos. Define los componentes de una documentación de clase mundial: quickstart de cero a primera llamada API en menos de 5 pasos, guías por caso de uso (no por feature), reference completa de la API con ejemplos en múltiples lenguajes, sección de errores comunes y cómo resolverlos, y changelog versionado con notas de migración. Explica cómo medir la calidad de la documentación con datos de comportamiento del usuario (tiempo en página, tasa de completitud del quickstart, queries de búsqueda sin resultado).

Sección 3 — Plataforma y formato de la comunidad de desarrolladores:
Define la arquitectura de la comunidad de desarrolladores. Compara Discord, Slack, GitHub Discussions, Stack Overflow for Teams y foros propios para una comunidad técnica. Para cada plataforma, evalúa: fricción de entrada, capacidad de búsqueda y persistencia de las respuestas, integración con GitHub y herramientas de desarrollo, coste, y qué tipo de conversación genera mejor. Diseña la estructura de canales y categorías de la plataforma elegida, y el proceso de moderación para mantener la calidad técnica de las respuestas.

Sección 4 — Programa de champions y MVPs de la comunidad:
Diseña un programa de reconocimiento para los desarrolladores más activos y valiosos de la comunidad. El programa debe incluir: criterios de selección objetivos (número de respuestas útiles, proyectos publicados con la plataforma, contribuciones a la documentación o ejemplos de código), beneficios exclusivos (acceso anticipado a nuevas funcionalidades, reuniones directas con el equipo de producto, swag exclusivo, mención en el blog oficial), y las responsabilidades esperadas del champion (sin ser empleados de la empresa). Explica cómo mantener la autenticidad del programa para que los champions sean percibidos como pares por la comunidad, no como portavoces de la empresa.

Sección 5 — Métricas de DevRel y conexión con el negocio:
Define las métricas del programa de DevRel que conectan la salud de la comunidad con el impacto en el negocio. Separa en tres niveles: métricas de actividad (número de posts en la comunidad, número de asistentes a eventos, descargas de SDK), métricas de adopción (número de desarrolladores que completaron el quickstart, DAU de la API, número de proyectos en producción usando la plataforma), y métricas de negocio (porcentaje de clientes de pago que vienen de la comunidad, LTV de clientes adquiridos por canal de comunidad vs. otros canales, tasa de retención de desarrolladores activos). Explica cómo presentar estas métricas a la dirección para justificar la inversión en DevRel.

Entregables:
- Framework de tres pilares de DevRel con actividades y KPIs por pilar
- Diseño de la experiencia de documentación técnica con criterios de calidad
- Evaluación de plataformas de comunidad con recomendación y estructura de canales
- Programa de champions con criterios, beneficios y responsabilidades
- Sistema de métricas de DevRel con conexión al impacto en el negocio
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar una estrategia de Developer Relations para construir una comunidad técnica activa',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Comunidades de diseño: crear y liderar espacios donde los creativos aprenden y colaboran',
                'description'      => 'Diseña una estrategia para construir y gestionar una comunidad de diseñadores que genere aprendizaje colectivo, colaboración entre pares y visibilidad profesional para sus miembros. Las comunidades de diseño son el nuevo portfolio colectivo y la fuente de oportunidades más poderosa.',
                'prompt_content'   => <<<'EOT'
Actúa como un líder de comunidad con experiencia creando y gestionando comunidades de diseño y creativos con más de cinco años y miles de miembros activos. Necesito diseñar una estrategia para lanzar y hacer crecer una comunidad de diseñadores que sea genuinamente valiosa para sus miembros y sostenible para quien la gestiona.

Contexto de la comunidad:
La comunidad que quiero crear se dirige a diseñadores de [ESPECIALIDAD: UX/UI, diseño gráfico, motion, product design, branding, etc.] en [GEOGRAFÍA O IDIOMA]. El nivel de los miembros objetivo es [PERFIL: juniors que quieren crecer, seniors que quieren conectar con pares, freelancers que buscan clientes]. El problema que resuelve la comunidad es [DESCRIBE: aislamiento del trabajo en remoto, falta de feedback de calidad, dificultad para encontrar colaboradores, escasez de referentes del sector].

Parte 1 — El nicho y el propósito de la comunidad:
Explica por qué las comunidades de diseño exitosas tienen un nicho muy específico en lugar de ser "para todos los diseñadores". Define el propósito de la comunidad en una sola frase que incluya: a quién sirve, qué transformación ofrece y qué la diferencia de las comunidades de diseño existentes (Dribbble, Behance, comunidades de Figma, etc.). Describe los dos o tres problemas que la comunidad resuelve de forma única y por qué los diseñadores estarían dispuestos a invertir tiempo activo en participar.

Parte 2 — Formato y rituales de la comunidad:
Diseña la arquitectura de la comunidad con sus rituales recurrentes. Los rituales son las actividades periódicas que generan hábito y razón de volver. Define al menos seis rituales adaptados a una comunidad de diseño: reto semanal de diseño con brief específico y revisión colectiva, sesión mensual de critique en grupo con metodología estructurada, canal de "trabajo en progreso" donde los miembros comparten drafts y reciben feedback en tiempo real, sesión quincenal de portafolios donde un miembro presenta su trabajo y los demás lo analizan, directorio de miembros con especialidades para facilitar colaboraciones, y hilo de oportunidades laborales y proyectos freelance. Para cada ritual, especifica la frecuencia, el formato, quién lo facilita y cómo se integra en la plataforma elegida.

Parte 3 — Feedback y aprendizaje colectivo de calidad:
El valor principal de una comunidad de diseño es el feedback entre pares. Diseña un protocolo de critique colectiva que garantice que el feedback sea específico, accionable y constructivo. El protocolo debe incluir: la estructura del brief que el diseñador comparte al pedir feedback (objetivo del diseño, audiencia, restricciones, preguntas específicas sobre las que quiere feedback), las reglas del feedback para los revisores (describir lo que ves antes de opinar, separar el gusto personal de la efectividad para el objetivo, proponer alternativas en lugar de solo señalar problemas), y el proceso de moderación cuando un feedback no cumple los estándares de calidad.

Parte 4 — Crecer la comunidad de forma orgánica:
Describe las estrategias de crecimiento orgánico más efectivas para comunidades de diseño. Incluye: publicar el trabajo generado en la comunidad en redes sociales con el proceso de critique visible (el contenido más interesante no es el resultado sino el proceso de mejora), organizar eventos abiertos al público que muestren el valor de la comunidad cerrada, invitar a diseñadores reconocidos del sector a sesiones de Q&A exclusivas para miembros, y diseñar un programa de referidos donde los miembros actuales inviten a pares de calidad similar. Explica cómo mantener la calidad del perfil de los nuevos miembros a medida que la comunidad crece.

Parte 5 — Monetización y sostenibilidad:
Define el modelo de negocio para hacer sostenible la gestión de la comunidad a largo plazo. Analiza cuatro modelos para comunidades de diseño: membresía de pago mensual o anual (y cómo fijar el precio para que sea accesible pero también seleccione a miembros comprometidos), job board de pago para las empresas que buscan talento (los miembros acceden gratis, las empresas pagan por publicar), formaciones y workshops dentro de la comunidad, y patrocinios de herramientas y plataformas de diseño que quieren acceder a una audiencia cualificada. Para cada modelo, indica el tamaño mínimo de comunidad necesario, la forma de implementarlo sin generar rechazo y los ingresos esperados.

Entregables:
- Definición del nicho y propósito en una frase con diferenciador claro
- Arquitectura de 6 rituales recurrentes con formato y frecuencia
- Protocolo de critique colectiva con estructura de brief y reglas de feedback
- Estrategias de crecimiento orgánico con métricas de seguimiento
- Análisis de 4 modelos de monetización con requisitos e ingresos esperados
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzar y gestionar una comunidad de diseñadores que genere valor real para sus miembros',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Community-led growth en ventas: cómo la comunidad se convierte en tu canal de ventas más eficiente',
                'description'      => 'Implementa una estrategia de Community-Led Growth (CLG) donde los miembros de la comunidad se convierten en la fuente más poderosa de nuevos clientes. La comunidad bien activada reduce el coste de adquisición y aumenta la calidad de los leads. Este prompt diseña el sistema completo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Community-Led Growth con experiencia implementando este modelo de negocio en empresas SaaS B2B que han reducido su coste de adquisición de clientes en más del 40% gracias a sus comunidades. Necesito diseñar un sistema de CLG donde la comunidad de clientes y usuarios sea el principal canal de generación de nuevos clientes.

Contexto del negocio:
Nuestro producto es [DESCRIBE: tipo de producto, precio, mercado objetivo]. Actualmente adquirimos el [X%] de los clientes mediante [CANALES: paid, outbound, inbound]. El coste de adquisición actual es de [VALOR]. Tenemos [NÚMERO] clientes activos y [NÚMERO] usuarios totales. La comunidad actual es [DESCRIBE: inexistente, incipiente, newsletter, canal de Slack, etc.].

Módulo 1 — El modelo de Community-Led Growth:
Explica cómo funciona el modelo CLG y en qué se diferencia del Product-Led Growth y del Sales-Led Growth. Describe el flywheel del CLG: los clientes exitosos comparten su éxito en la comunidad → el contenido generado por usuarios atrae a nuevos prospectos → los prospectos ven evidencia social en la comunidad y reducen la fricción de compra → se convierten en clientes → se convierten en miembros activos → generan nuevo contenido y referencias. Muestra con datos reales o ejemplos de empresas como Notion, Figma, HubSpot o Salesforce cómo el CLG genera un efecto de red que reduce el CAC progresivamente.

Módulo 2 — Diseño de la comunidad como embudo de ventas:
Define cómo diseñar la arquitectura de la comunidad para que naturalmente acompañe al prospecto desde el descubrimiento hasta la compra. Diseña un modelo de comunidad con tres niveles de acceso: comunidad abierta (cualquiera puede ver y participar, genera awareness y captación de prospectos), comunidad de clientes (solo clientes de pago, genera retención y upsell), y programa de expertos o champions (clientes de alto valor, generan referencias y contenido de calidad). Explica qué tipo de contenido y conversaciones ocurren en cada nivel y cómo el progreso entre niveles actúa como señal de intención de compra para el equipo de ventas.

Módulo 3 — Identificar y activar las señales de compra en la comunidad:
Describe cómo el equipo de ventas puede usar la actividad en la comunidad como señal de intención de compra. Lista diez señales de comportamiento en la comunidad que indican que un miembro está listo para comprar o para hacer un upsell: preguntar por funcionalidades avanzadas, compartir un caso de uso de alto valor que requiere el plan premium, pedir consejo sobre cómo escalar el uso del producto, comparar el producto con alternativas en un hilo público, preguntar sobre el proceso de compra para su empresa, o conectar con otros miembros que ya están en planes avanzados. Para cada señal, define el protocolo de seguimiento del equipo de ventas: quién actúa, en qué plazo, con qué mensaje.

Módulo 4 — Programa de referidos basado en comunidad:
Diseña un programa de referidos que incentive a los miembros más activos de la comunidad a traer nuevos clientes. El programa debe incluir: el mecanismo de referido (enlace único, código, email de introducción), el incentivo para el referidor (crédito en el producto, efectivo, acceso a funcionalidades premium, reconocimiento en la comunidad), el incentivo para el referido (descuento en el primer mes, onboarding personalizado, acceso al programa de champions), y el criterio para calificar un referido como válido. Explica cómo hacer que el programa sea fácil de usar para los referidores y cómo medir su contribución al pipeline de ventas.

Módulo 5 — Métricas de CLG y atribución:
Define el sistema de métricas para medir el impacto de la comunidad en las ventas. El desafío del CLG es la atribución: ¿cuándo un cliente llegó por la comunidad? Diseña un modelo de atribución que capture tanto los clientes que se convirtieron directamente desde la comunidad como el efecto de la comunidad en el ciclo de venta de clientes captados por otros canales. Define los KPIs del CLG: porcentaje de nuevos clientes que participan en la comunidad antes de comprar, tiempo medio de conversión de miembro de comunidad a cliente de pago, NPS de clientes que participan en la comunidad vs. los que no, y revenue generado por el programa de referidos de la comunidad.

Entregables:
- Explicación del flywheel de CLG con ejemplos de empresas referentes
- Arquitectura de comunidad de tres niveles con contenido y señales de compra por nivel
- Listado de 10 señales de intención de compra con protocolo de seguimiento comercial
- Diseño del programa de referidos con incentivos, mecanismo y criterios
- Sistema de métricas de CLG con modelo de atribución
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar Community-Led Growth para convertir la comunidad en el principal canal de adquisición de clientes',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Comunidades de usuarios como fuente de insights de producto: community research en acción',
                'description'      => 'Convierte tu comunidad de usuarios en una fuente continua de insights para el roadmap de producto. Las comunidades activas revelan necesidades reales que las encuestas no capturan. Este prompt diseña el sistema de community research que alimenta directamente las decisiones de producto.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en comunidades de usuarios y research de producto que ha construido sistemas de feedback continuo basados en comunidades activas para productos con más de cincuenta mil usuarios. Necesito diseñar un sistema que convierta la comunidad de usuarios en la fuente de insights más valiosa para el roadmap de producto.

Contexto del producto y la comunidad:
Nuestro producto es [DESCRIBE: categoría, funcionalidades principales, mercado]. Tenemos [NÚMERO] usuarios activos y una comunidad en [PLATAFORMA: Discord, Slack, forum propio, etc.] con [NÚMERO] miembros. El roadmap se define actualmente basándose en [DESCRIBE: intuición del equipo, datos de analítica, peticiones del equipo de ventas, etc.] y el problema es que [DESCRIBE: no sabemos qué features priorizar, los usuarios piden cosas que no encajan en la visión, hay mucho ruido y pocas señales claras].

Bloque 1 — La comunidad como laboratorio de producto:
Explica por qué la comunidad de usuarios es la fuente de research más rica y más subutilizada en la mayoría de las organizaciones de producto. La comunidad genera tres tipos de insights que no aparecen en los datos de analítica: el contexto emocional del problema (por qué algo frustra al usuario, no solo que lo abandona), las workarounds que los usuarios inventan cuando el producto no cubre sus necesidades (que revelan el job to be done real), y las conversaciones entre usuarios que revelan usos del producto que el equipo de producto no anticipó. Proporciona ejemplos concretos de insights de comunidad que cambiaron el roadmap de productos conocidos.

Bloque 2 — Sistema de escucha estructurada de la comunidad:
Diseña un sistema de escucha de la comunidad que convierta el ruido de las conversaciones en señales accionables para el equipo de producto. El sistema debe incluir: proceso de monitoreo diario de la comunidad (qué buscar, cómo documentar un insight, cuánto tiempo dedicar), plantilla de registro de insight de comunidad (problema observado, usuario que lo reporta, frecuencia con que aparece, hipótesis de causa raíz, acción sugerida para el equipo de producto), y sistema de etiquetado y categorización de insights para detectar patrones (qué temas aparecen más frecuentemente, en qué segmento de usuario, con qué nivel de urgencia).

Bloque 3 — Research cualitativo a través de la comunidad:
Explica cómo usar la comunidad para reclutar participantes de research cualitativo y cómo integrar la investigación de usuarios con la vida de la comunidad de forma que beneficie a ambas partes. Diseña un protocolo de entrevistas de usuario donde los participantes sean miembros activos de la comunidad: cómo identificar a los mejores candidatos según su perfil de uso y nivel de engagement en la comunidad, cómo invitarles sin que parezca un email de ventas, el guión base de la entrevista de research de comunidad (qué preguntas son las más reveladoras), y cómo devolver el valor a los miembros que participan (resumen de hallazgos, acceso anticipado a nuevas funcionalidades, mención en el changelog).

Bloque 4 — Feature requests: del caos a la priorización:
La gestión de los feature requests en la comunidad es uno de los mayores desafíos del PM. Diseña un sistema para gestionar las peticiones de funcionalidades de la comunidad. Incluye: el proceso de captura y deduplicación de requests (cómo consolidar veinte posts sobre el mismo tema en un único insight), el sistema de voting o señal de demanda que permita medir la intensidad del deseo sin que degenere en popularidad de la feature más fácil de comunicar, cómo comunicar las decisiones de roadmap a la comunidad de forma transparente (tanto las features que se desarrollarán como las que no y por qué), y cómo manejar la frustración de los usuarios cuyas peticiones no se implementan.

Bloque 5 — Community betas y validación de hipótesis:
Diseña un programa de betas con la comunidad para validar hipótesis de producto antes del lanzamiento. El programa debe incluir: criterios para seleccionar a los beta testers de la comunidad (diversidad de casos de uso, nivel de engagement, disposición a dar feedback estructurado), el proceso de onboarding de los beta testers (cómo presentar la feature en beta, qué tareas pedirles que realicen, cómo recoger feedback), la cadencia de check-ins durante el período de beta (encuestas cortas, sesiones de feedback grupales en la comunidad), y el proceso de análisis de resultados de beta para tomar la decisión de lanzar, iterar o descartar la funcionalidad.

Entregables:
- Explicación del valor único de la comunidad como fuente de research con ejemplos
- Sistema de escucha estructurada con plantilla de registro de insight
- Protocolo de entrevistas de usuario con miembros de la comunidad
- Sistema de gestión de feature requests desde captura hasta comunicación de decisión
- Programa de betas con comunidad con criterios, proceso y análisis de resultados
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Convertir la comunidad de usuarios en una fuente continua de insights para el roadmap de producto',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunidades profesionales internas: construir redes de conocimiento dentro de la empresa',
                'description'      => 'Diseña comunidades de práctica internas que conecten a empleados con conocimientos similares, aceleren el aprendizaje organizacional y reduzcan la pérdida de conocimiento cuando alguien abandona la empresa. Las comunidades internas son el sistema nervioso del aprendizaje corporativo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en aprendizaje organizacional y gestión del conocimiento con experiencia diseñando comunidades de práctica internas en empresas de más de 500 empleados. Necesito diseñar un programa de comunidades profesionales internas que conecte a los empleados con conocimientos similares distribuidos en diferentes departamentos y ubicaciones.

Contexto de la organización:
Nuestra empresa tiene [NÚMERO] empleados en [NÚMERO DE PAÍSES/OFICINAS] y trabaja en modalidad [PRESENCIAL/HÍBRIDA/REMOTA]. Los departamentos principales son [LISTA]. El problema que queremos resolver es: [DESCRIBE: silos de conocimiento entre departamentos, reinvención continua de la rueda, pérdida de conocimiento cuando alguien sale, dificultad de los empleados para encontrar a quién preguntar dentro de la empresa, onboarding lento porque no hay a quién preguntar].

Sección 1 — Comunidades de práctica vs. comunidades de interés:
Explica la diferencia entre una comunidad de práctica (CoP) y una comunidad de interés en el contexto empresarial. Una CoP reúne a personas que comparten una práctica profesional y aprenden juntas a mejorarla; una comunidad de interés reúne a personas que comparten un tema de interés sin necesidad de practicarlo. Define qué tipo de comunidades tiene sentido crear en función de las necesidades de la organización. Proporciona ejemplos de comunidades de práctica típicas en empresas medianas y grandes: comunidad de ingenieros de software, comunidad de gestores de proyectos, comunidad de diseñadores, comunidad de analistas de datos, comunidad de gestores de personas.

Sección 2 — Diseño del programa de comunidades internas:
Diseña la estructura del programa de comunidades profesionales internas. Define: el proceso de creación de una nueva comunidad (quién puede proponer una, qué criterio mínimo de miembros interesados debe cumplir, cómo la empresa la reconoce formalmente), los roles dentro de cada comunidad (facilitador o líder de comunidad, co-facilitadores, miembros core activos, miembros periféricos), la infraestructura tecnológica necesaria (plataforma de comunicación, repositorio de conocimiento, calendario de eventos internos), y el soporte que la empresa ofrece a cada comunidad (tiempo dedicado reconocido en la carga de trabajo, presupuesto para eventos, visibilidad interna).

Sección 3 — Activación y dinámica de las comunidades internas:
Describe las actividades que mantienen activa y útil una comunidad interna. Diseña un programa de actividades recurrentes: sesión mensual de aprendizaje (un miembro comparte un proyecto o técnica nueva y se discute en grupo), repositorio de conocimiento compartido (documentos, plantillas, casos de uso que todos los miembros pueden consultar y enriquecer), canal de preguntas y respuestas entre pares (donde cualquier miembro puede pedir ayuda y los más expertos responden), y sesión trimestral de conexión con la dirección (donde el liderazgo escucha los desafíos y necesidades de la comunidad y responde sobre dirección estratégica relevante para esa práctica).

Sección 4 — Gestión del conocimiento y reducción de la dependencia de personas:
Explica cómo las comunidades internas contribuyen a institucionalizar el conocimiento tácito que actualmente solo existe en la cabeza de ciertos empleados. Diseña un proceso de documentación del conocimiento impulsado por la comunidad: cómo identificar el conocimiento crítico en riesgo de perderse (mapeando qué sabe cada miembro que nadie más sabe), cómo motivar a los expertos a documentar su conocimiento (integrándolo en las actividades de la comunidad en lugar de pedirlo como tarea adicional), y cómo mantener el repositorio de conocimiento actualizado y evitar que se convierta en un cementerio de documentos obsoletos.

Sección 5 — Métricas e impacto de las comunidades internas:
Define cómo medir el valor de las comunidades de práctica internas para justificar la inversión de tiempo y recursos. Diseña métricas en tres niveles: métricas de actividad (número de miembros, tasa de participación activa mensual, número de sesiones realizadas, documentos creados), métricas de aprendizaje (encuesta trimestral de percepción de mejora de habilidades de los miembros, número de problemas resueltos a través de la comunidad en lugar de resolver solos), y métricas de impacto organizacional (reducción del tiempo de onboarding de nuevos miembros en la práctica, ahorro de tiempo por reutilización de soluciones existentes, mejora en la puntuación de engagement relacionada con el aprendizaje). Explica cómo hacer visible el impacto de las comunidades a la dirección.

Entregables:
- Marco de tipos de comunidades internas con ejemplos por tipo de empresa
- Diseño del programa con proceso de creación, roles y soporte de la empresa
- Calendario de actividades recurrentes con formato y responsables
- Proceso de documentación del conocimiento tácito integrado en la comunidad
- Sistema de métricas en tres niveles con herramientas de medición
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar comunidades de práctica internas que aceleren el aprendizaje y reduzcan los silos de conocimiento',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Comunidades de inversores y ahorradores: estrategia para fintech y gestoras',
                'description'      => 'Construye una comunidad de usuarios financieros que genere confianza, reduzca el coste de adquisición y mejore la retención en productos de inversión y ahorro. Las fintech que crean comunidades de usuarios tienen tasas de retención significativamente más altas. Este prompt diseña la estrategia completa.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en estrategia de comunidades para empresas del sector financiero con experiencia en fintech, plataformas de inversión y gestoras de patrimonio. Necesito diseñar una estrategia de comunidad que genere confianza en un sector donde la confianza es el activo más crítico y que cumpla con las regulaciones de comunicación financiera aplicables en España y la Unión Europea.

Contexto del negocio:
Nuestra empresa es [TIPO: fintech de inversión, gestora, broker, plataforma de ahorro]. Nuestros usuarios tienen un perfil de [DESCRIBE: nivel de experiencia inversora, patrimonio aproximado, motivación principal]. El principal problema de retención es [DESCRIBE: los usuarios invierten una vez y no vuelven, la volatilidad del mercado genera salidas masivas, los usuarios no entienden lo que están haciendo y se van cuando ven pérdidas temporales].

Parte 1 — El rol de la comunidad en el sector financiero:
Explica cómo la comunidad puede resolver los tres problemas únicos del sector financiero que dificultan la retención: la ansiedad ante la volatilidad (una comunidad educa y calma a los usuarios en momentos de caída del mercado), la falta de educación financiera (una comunidad entre pares genera más confianza que el contenido oficial de la empresa), y la desconfianza institucional (ver a otros usuarios reales compartiendo sus experiencias reduce la percepción de riesgo). Describe los requisitos específicos que tiene una comunidad financiera en términos de moderación y cumplimiento regulatorio: qué tipos de contenido están prohibidos, cómo gestionar el consejo de inversión entre usuarios, y cómo distinguir entre compartir experiencias y dar recomendaciones de inversión.

Parte 2 — Diseño de la comunidad financiera:
Define la arquitectura de la comunidad. Separa claramente lo que la empresa puede facilitar de lo que debe mantener como conversación entre usuarios. Diseña tres espacios diferenciados: espacio de educación financiera (contenido producido por la empresa o por expertos externos, sin consejo de inversión), espacio de comunidad de usuarios (conversaciones entre usuarios sobre estrategias, experiencias y preguntas, con moderación activa para prevenir el consejo de inversión ilegal), y espacio de feedback de producto (donde los usuarios pueden pedir mejoras y reportar problemas, gestionado por el equipo de producto). Para cada espacio, define las reglas explícitas de qué se puede y no se puede decir y cómo se modera.

Parte 3 — Educación financiera como contenido de comunidad:
Diseña un programa de contenido educativo de doce meses para la comunidad. El contenido debe: aumentar la alfabetización financiera de los usuarios para que entiendan mejor los productos que usan, reducir la ansiedad en momentos de volatilidad del mercado dando contexto histórico, y empoderar a los usuarios para que tomen mejores decisiones sin que la empresa les esté dando consejo personalizado. Define el calendario con temas mensuales, formatos (artículo largo, infografía, webinar, hilo en la comunidad), y cómo medir si el contenido está mejorando la comprensión y la retención de los usuarios.

Parte 4 — Gestión de crisis de comunidad en momentos de caída del mercado:
Diseña el protocolo de gestión de la comunidad durante caídas significativas del mercado, que es el momento de mayor riesgo de churn y de comunicaciones problemáticas en la comunidad. El protocolo debe incluir: comunicado proactivo de la empresa ante una caída significativa (qué decir, qué no decir, quién lo firma), plantillas de respuesta para las consultas más frecuentes de usuarios angustiados, proceso de moderación intensificada durante los días siguientes a la caída (qué tipos de mensajes retirar, cómo responder a usuarios que expresan querer salir), y cómo convertir una crisis de mercado en una oportunidad de demostrar el valor de la comunidad y aumentar la fidelidad.

Parte 5 — Métricas de comunidad financiera y su conexión con el negocio:
Define los KPIs del programa de comunidad adaptados al sector financiero. Incluye: métricas de comunidad (tasa de participación activa, número de usuarios que acceden a la comunidad en los 30 días siguientes a un evento de mercado negativo), métricas de retención (tasa de retención comparada entre usuarios activos en la comunidad vs. usuarios que no participan, comparativa de AUM promedio por usuario según nivel de engagement en la comunidad), y métricas de cumplimiento (número de posts eliminados por consejo de inversión, incidencias regulatorias relacionadas con la comunidad). Explica cómo presentar el ROI de la comunidad al board en términos de reducción del churn y aumento del LTV.

Entregables:
- Análisis del rol de la comunidad en el sector financiero con requisitos de cumplimiento
- Arquitectura de comunidad financiera en tres espacios con reglas de moderación
- Programa de educación financiera de 12 meses con temas, formatos y métricas
- Protocolo de gestión de crisis de comunidad ante caídas del mercado
- KPIs de comunidad financiera con conexión al ROI del negocio
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar una comunidad de usuarios para fintech que mejore la retención y cumpla la regulación financiera',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunidades legales profesionales: construir y gestionar redes de conocimiento para abogados',
                'description'      => 'Diseña una comunidad para profesionales del derecho que genere intercambio de conocimiento, networking de calidad y visibilidad profesional dentro del sector legal. Las comunidades jurídicas tienen normas éticas específicas que este prompt aborda en detalle.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunidades profesionales y marketing para el sector legal con experiencia en asociaciones de abogados, colectivos de juristas y plataformas legaltech. Necesito diseñar una comunidad profesional para abogados y juristas que sea genuinamente valiosa, éticamente correcta y que genere visibilidad y oportunidades de negocio para sus miembros.

Contexto de la comunidad:
La comunidad que quiero crear se dirige a [PERFIL: abogados de empresa de un sector específico, abogados especialistas en una rama del derecho, juristas en transición profesional, abogados independientes de una región]. El problema que resuelve es [DESCRIBE: aislamiento profesional, dificultad para actualizarse en jurisprudencia y legislación, falta de referidos de calidad entre pares, ausencia de espacio de debate técnico]. El promotor de la comunidad es [DESCRIBE: un despacho, una legaltech, una asociación profesional, un abogado independiente con perfil de influencer].

Bloque 1 — El mercado de comunidades legales:
Analiza el ecosistema actual de comunidades para profesionales del derecho: asociaciones de abogados (colegios profesionales), comunidades temáticas de práctica (grupos de LinkedIn de derecho mercantil, laboralistas, etc.), plataformas de formación continua con componente de comunidad, y comunidades de abogados emprendedores. Identifica las necesidades que estas comunidades no cubren adecuadamente y que representan la oportunidad para la nueva comunidad. Explica qué hace que una comunidad legal sea diferente de otras comunidades profesionales: el peso de la ética profesional, la confidencialidad, la resistencia del sector a compartir conocimiento que perciben como ventaja competitiva, y el peso de los colegios profesionales.

Bloque 2 — Contenido y conversaciones que generan valor en comunidades legales:
Define qué tipos de contenido y conversaciones generan más valor en una comunidad de abogados y cuáles deben evitarse por razones éticas o de reputación. Contenido de alto valor: análisis de jurisprudencia reciente con implicaciones prácticas, debates sobre interpretación de normativa nueva, casos de estudio anonimizados con lecciones aprendidas, recursos prácticos (plantillas de contratos, modelos de escritos, checklists de due diligence), y entrevistas con jueces, árbitros o reguladores. Contenido a evitar: consejo jurídico específico sobre casos reales, publicidad encubierta de servicios del moderador, debate de honorarios que pueda constituir práctica colusoria. Explica cómo moderar la comunidad para garantizar que estas líneas no se crucen.

Bloque 3 — Modelo de comunidad para abogados con foco en desarrollo profesional:
Diseña el formato de la comunidad con foco en el desarrollo profesional de sus miembros. Incluye: programa de mentoría entre pares (cómo estructurar el matching entre abogados seniors y juniors dentro de la comunidad), grupos de trabajo temáticos (cómo organizar subgrupos por especialidad dentro de la comunidad general), programa de conferenciantes invitados de alto perfil (jueces, catedráticos, abogados de referencia que aporten perspectiva única), y sistema de reputación y visibilidad dentro de la comunidad (cómo destacar las contribuciones de mayor calidad sin generar dinámicas de competición improductiva).

Bloque 4 — Generación de negocio en la comunidad legal de forma ética:
Explica cómo una comunidad de abogados puede facilitar oportunidades de negocio entre sus miembros sin violar las normas deontológicas que prohíben la publicidad directa y el captación activa de clientes. Diseña mecanismos éticos de generación de referidos: directorio de miembros con especialidades sin formato de "anuncio de servicios", hilo de colaboraciones y asuntos que requieren especialista externo donde los miembros puedan presentarse, sistema de recomendaciones de colegas basado en trabajo compartido en la comunidad, y eventos de networking con protocolo para que el intercambio de oportunidades sea natural y no comercial. Incluye el texto del código ético de la comunidad que regula estas interacciones.

Bloque 5 — Crecimiento y visibilidad de la comunidad legal:
Describe cómo hacer crecer una comunidad de abogados de forma orgánica en un sector donde la privacidad y la discreción son valores centrales. Estrategias de crecimiento compatible con la cultura del sector: publicar análisis jurídicos de calidad en LinkedIn con firma de la comunidad, organizar webinars o coloquios de acceso libre que demuestren el nivel de debate interno, colaborar con universidades y escuelas de negocio para dar visibilidad a los miembros que imparten formación, y desarrollar un anuario o estudio del sector elaborado colaborativamente por los miembros. Explica cómo medir la reputación de la comunidad en el sector legal y cómo traducirla en crecimiento de miembros.

Entregables:
- Análisis del mercado de comunidades legales con oportunidad diferencial
- Guía de contenidos permitidos y a evitar con ejemplos y justificación deontológica
- Diseño de la comunidad con programa de mentoría, grupos temáticos y sistema de reputación
- Mecanismos éticos de generación de negocio con código ético de la comunidad
- Estrategia de crecimiento compatible con la cultura de discreción del sector legal
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una comunidad profesional para abogados que genere valor y cumpla las normas deontológicas',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Comunidades de clientes en Customer Success: convertir usuarios en defensores que retienen y expanden',
                'description'      => 'Diseña una comunidad de clientes que refuerce la relación con el producto, acelere la adopción de nuevas funcionalidades y convierta a los usuarios exitosos en defensores que retienen y traen nuevos clientes. La comunidad de CS es la herramienta de retención más escalable.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Customer Success con experiencia construyendo comunidades de clientes para empresas SaaS B2B que han logrado reducir el churn en más del 25% gracias a sus programas de comunidad. Necesito diseñar una comunidad de clientes que complemente el trabajo del equipo de CS humano, escale el éxito del cliente y convierta a los mejores usuarios en defensores activos.

Contexto del producto y los clientes:
Nuestro producto es [DESCRIBE]. Tenemos [NÚMERO] cuentas de clientes. El CSM medio gestiona [NÚMERO] cuentas. El churn anual es de [X%] y el NPS es de [PUNTUACIÓN]. Los clientes que se churnan dicen principalmente que [RAZONES MÁS FRECUENTES DE CHURN]. Los clientes que renuevan dicen que el mayor valor que obtienen del producto es [DESCRIBE].

Módulo 1 — El rol de la comunidad en la estrategia de CS:
Explica cómo una comunidad de clientes complementa el trabajo del equipo de CS humano en lugar de reemplazarlo. La comunidad permite escalar el éxito del cliente más allá de lo que el equipo puede hacer uno a uno: los clientes que no tienen CSM dedicado pueden obtener soporte entre pares, los clientes más avanzados pueden compartir prácticas que el equipo de CS no podría diseminar tan rápido, y la comunidad genera un sentido de pertenencia que aumenta el coste emocional de cambiar de proveedor. Describe el modelo de CS híbrido humano-comunidad: qué tipos de interacciones deben ser siempre humanas (renovaciones, problemas graves, escalaciones) y cuáles la comunidad gestiona mejor (preguntas técnicas frecuentes, casos de uso creativos, onboarding de funcionalidades nuevas).

Módulo 2 — Diseño de la comunidad de clientes:
Define la arquitectura de la comunidad de clientes. Diseña los espacios principales: foro de preguntas y respuestas técnicas (donde los power users responden a los usuarios con dudas), espacio de ideas y feedback de producto (canal directo con el equipo de producto, con sistema de votación transparente), showcase de casos de uso (donde los clientes comparten cómo usan el producto con resultados reales), y espacio exclusivo para clientes enterprise o VIP (donde el acceso al equipo de CS y de producto es más directo). Explica cómo moderar cada espacio y cuál debe ser la presencia del equipo de la empresa en cada uno.

Módulo 3 — Programa de usuarios expertos o champions:
Diseña un programa formal de usuarios expertos que convierta a los clientes más avanzados en líderes de la comunidad. El programa debe incluir: criterios de selección (nivel de uso del producto, calidad de sus contribuciones en la comunidad, disposición a compartir tiempo), proceso de incorporación al programa (reunión de onboarding con el equipo de CS y producto), beneficios exclusivos del champion (acceso anticipado a nuevas funcionalidades, reuniones directas con el equipo de producto, reconocimiento público, descuentos o créditos), y responsabilidades del champion (responder a preguntas de la comunidad, participar en sesiones de advisory, crear contenido sobre sus casos de uso). Define cómo medir el valor que cada champion genera para la comunidad y para el negocio.

Módulo 4 — La comunidad como canal de upsell y expansión:
Explica cómo la comunidad puede generar oportunidades de expansión de revenue de forma natural y no intrusiva. Define los momentos en la comunidad que son señales de expansión: un usuario pregunta sobre funcionalidades de un plan superior, un cliente comparte un caso de uso que requiere licencias adicionales, un usuario menciona que su equipo ha crecido y la actual configuración ya no cubre sus necesidades, o un champion recomienda el plan enterprise a otro cliente que está creciendo. Para cada señal, describe el protocolo de intervención del equipo de CS: cómo actuar sobre esta señal, en qué plazo y con qué mensaje, sin que la comunidad perciba que el equipo de CS está "escuchando para vender".

Módulo 5 — Métricas de la comunidad de clientes desde la perspectiva de CS:
Define el sistema de métricas que conecta la salud de la comunidad con los KPIs de CS. Incluye: correlación entre engagement en la comunidad y tasa de retención (los clientes activos en la comunidad retienen a qué tasa vs. los que no participan), correlación entre participación en la comunidad y NPS, porcentaje de tickets de soporte desviados a la comunidad (clientes que obtienen respuesta entre pares antes de abrir un ticket), y contribución de la comunidad al pipeline de expansión (revenue de upsell identificado gracias a señales de la comunidad). Diseña un dashboard de salud de comunidad integrado con el sistema de CS que muestre estos datos en tiempo real.

Entregables:
- Modelo de CS híbrido humano-comunidad con definición de lo que gestiona cada canal
- Arquitectura de comunidad de clientes con espacios, moderación y presencia del equipo
- Programa de champions con criterios, beneficios, responsabilidades y métricas de valor
- Protocolo de detección y activación de señales de expansión en la comunidad
- Dashboard de métricas de comunidad integrado con KPIs de CS
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar una comunidad de clientes que refuerce la retención y escale el trabajo del equipo de Customer Success',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Construir una comunidad como freelancer: de creador de contenido a líder de comunidad con ingresos propios',
                'description'      => 'Diseña una estrategia para que un freelancer experto construya su propia comunidad de pago que genere ingresos recurrentes, posicionamiento de autoridad y un flujo constante de clientes. Una comunidad propia es el activo más valioso que un profesional independiente puede construir.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocios para creadores y freelancers que han construido comunidades de pago con cientos o miles de miembros y que generan ingresos recurrentes significativos. Necesito diseñar una estrategia para construir y monetizar una comunidad propia que complemente mis ingresos de cliente y a largo plazo se convierta en mi principal fuente de ingresos.

Contexto de mi negocio freelance:
Me dedico a [DESCRIBE TU ESPECIALIDAD]. Tengo [NÚMERO] seguidores en [PLATAFORMAS]. Los temas en los que soy más reconocido como experto son [LISTA]. Mi audiencia habitual es [DESCRIBE: perfil profesional, nivel de experiencia, problema que tienen y que yo resuelvo]. El tiempo que puedo dedicar a construir la comunidad es de [HORAS POR SEMANA].

Parte 1 — Por qué construir una comunidad y no solo más servicios freelance:
Explica las ventajas estructurales de una comunidad de pago frente a los servicios freelance en términos de escalabilidad, ingresos y libertad de tiempo. Los ingresos freelance son lineales (más tiempo trabajado = más ingresos, pero con un techo determinado por las horas disponibles); los ingresos de comunidad son sublineales en esfuerzo y crecen con el número de miembros. Describe el journey de transformación de freelancer a líder de comunidad: qué cambia en la propuesta de valor, en el posicionamiento y en la relación con los clientes-miembros. Incluye ejemplos de profesionales independientes que han construido comunidades exitosas en español en los últimos cinco años.

Parte 2 — Definición del nicho y la propuesta de valor de la comunidad:
Ayúdame a definir el nicho más específico posible para mi comunidad. Explica el concepto de "nicho de nicho" en comunidades: una comunidad de "marketing digital" fracasa porque es demasiado amplia y hay demasiada competencia, pero una comunidad de "estrategia de contenido para consultores de RRHH" tiene suficiente especificidad para diferenciarse. Diseña un proceso de cuatro preguntas para encontrar el nicho correcto: quién se va a beneficiar más (perfil muy específico), de qué transformación exactamente (resultado medible), usando qué conocimiento único mío (que otros no pueden replicar fácilmente), y con qué frecuencia necesitan este conocimiento (si es un problema puntual, la comunidad no funciona; si es un problema continuo, sí). Aplica este proceso a mi contexto.

Parte 3 — Modelo de membresía: precio, acceso y beneficios:
Diseña el modelo de membresía de la comunidad. Para una comunidad de pago mensual lanzada por un freelancer con audiencia propia de entre cien y cinco mil seguidores, define: el precio mensual y anual recomendados (con argumentación basada en el valor entregado, no en el coste), los beneficios incluidos en la membresía (qué acceso, contenido, sesiones o recursos reciben los miembros cada mes), el nivel mínimo de contenido y actividad que el creador debe mantener para justificar el precio, y cómo diseñar el onboarding del nuevo miembro para que en sus primeras 48 horas ya vea suficiente valor como para no cancelar inmediatamente. Describe también los errores de precio más comunes en comunidades de freelancers (cobrar demasiado poco por miedo, sobreprometer y no poder mantener el ritmo).

Parte 4 — Lanzamiento de la comunidad con la audiencia existente:
Diseña un plan de lanzamiento de 30 días para un freelancer que ya tiene una audiencia pequeña pero comprometida. Fase 1 (semana 1): comunicación del "por qué" de la comunidad a la audiencia actual sin vender todavía, para generar expectativa y feedback sobre el interés. Fase 2 (semana 2): apertura de lista de espera o fase de "fundadores" con precio reducido disponible solo por 7 días para los primeros X miembros. Fase 3 (semana 3-4): lanzamiento oficial con apertura de puertas para los que estaban en la lista de espera y comunicación a toda la audiencia. Para cada fase, proporciona los emails o posts de redes sociales principales con su estructura y el CTA.

Parte 5 — Gestión del tiempo como freelancer-creador de comunidad:
Explica cómo gestionar el tiempo de la semana para mantener a la vez la carga de proyectos de cliente y las obligaciones con la comunidad sin quemarse. Diseña un horario semanal tipo para un freelancer que dedica 15-20 horas semanales a proyectos de cliente y quiere lanzar y mantener una comunidad. Define la cadencia mínima de contenido y actividad de la comunidad para que los miembros perciban valor continuo, el proceso de reutilización de contenido (cómo un post de LinkedIn se convierte en un recurso de la comunidad, cómo una sesión en directo de la comunidad se convierte en contenido de captación), y el criterio para empezar a reducir carga de clientes a medida que los ingresos de la comunidad crecen.

Entregables:
- Análisis de las ventajas del modelo de comunidad vs. servicios freelance con ejemplos
- Proceso de cuatro preguntas para encontrar el nicho correcto aplicado a mi contexto
- Diseño del modelo de membresía con precio, beneficios y onboarding del nuevo miembro
- Plan de lanzamiento de 30 días con emails y posts principales
- Horario semanal tipo con cadencia mínima de comunidad y plan de transición del modelo de negocio
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una comunidad de pago como freelancer que genere ingresos recurrentes y posicionamiento de autoridad',
                'vote_score'       => 38,
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
