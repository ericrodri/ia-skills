<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills240Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Reputación online: monitorizar y gestionar la marca en internet',
                'description'       => 'Gestiona la reputación de la marca en el ecosistema digital: las herramientas de monitoreo, el proceso de respuesta a las reseñas negativas y la estrategia de construcción de reputación que hace que la marca tenga más valoraciones positivas que negativas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de reputación digital y gestión de marca online con experiencia ayudando a empresas de todos los tamaños a monitorizar, proteger y construir su reputación en el entorno digital. Has gestionado desde crisis de reputación de marcas globales hasta el trabajo sistemático de construcción de reputación positiva para empresas locales y digitales. Sabes que la reputación online no se gestiona en momentos de crisis: se construye día a día antes de que llegue el problema.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la empresa, su sector y si opera principalmente online, offline o en ambos canales?
2. ¿Cuál es la situación actual de reputación online: hay reseñas negativas activas, hay una crisis reciente, o es un trabajo proactivo de construcción de reputación positiva?
3. ¿Cuáles son las plataformas más relevantes para la reputación de esta empresa (Google Business Profile, Trustpilot, Glassdoor, redes sociales, foros especializados)?
4. ¿Tienes un proceso actual de gestión de reputación online o es algo que empieza desde cero?
5. ¿Cuál es el equipo disponible para gestionar la reputación: hay un community manager, un equipo de atención al cliente, un responsable de marketing?

Con esas respuestas, diseña la estrategia completa de gestión de reputación online:

**1. El sistema de monitorización de la reputación online**
No puedes gestionar lo que no ves. Define el sistema de monitorización que da visibilidad completa de lo que se dice sobre la marca: las herramientas de monitoreo de menciones (Google Alerts como base gratuita, Mention, Brandwatch o similares para una cobertura más amplia), las plataformas de reseñas que hay que monitorizar de forma activa según el sector, la configuración de alertas para las menciones críticas que requieren respuesta en menos de veinticuatro horas, el proceso de reporte semanal que consolida el estado de la reputación y los indicadores de tendencia y cómo priorizar las menciones por su alcance potencial y su impacto en la percepción de la marca.

**2. El protocolo de respuesta a las reseñas negativas**
Una reseña negativa bien gestionada puede convertirse en el mejor argumento de ventas. Define el protocolo de respuesta a reseñas negativas: la clasificación de las reseñas por tipo (queja legítima, error de expectativas, reseña falsa o de competidores), el tiempo de respuesta objetivo para cada tipo, la estructura de la respuesta que reconoce el problema, ofrece solución y demuestra que la empresa aprende (sin trasladar la conversación a la esfera privada de forma que parezca que quieres evitar la transparencia), cómo manejar el escalado cuando el cliente no queda satisfecho con la respuesta y qué hacer ante reseñas que sospechas que son falsas o de la competencia.

**3. La estrategia de construcción de reputación positiva**
La mejor defensa ante las reseñas negativas es tener tantas reseñas positivas que las negativas queden diluidas. Define la estrategia sistemática de generación de reseñas positivas: el momento del ciclo de cliente en que es más probable obtener una reseña positiva (el momento de mayor satisfacción, no el final del proceso), los procesos de solicitud que generan alta tasa de respuesta sin resultar invasivos (el email automatizado, la petición personal del equipo, el QR en el punto de entrega), la secuencia que maximiza las reseñas en las plataformas más relevantes para el SEO local o sectorial y cómo gestionar la solicitud de manera que cumpla con las políticas de las principales plataformas.

**4. La gestión de crisis de reputación online**
Una crisis de reputación online puede escalar en horas si no se gestiona correctamente. Define el protocolo de crisis: las señales que indican que un problema de reputación está escalando y requiere respuesta urgente (velocidad de propagación, alcance de los perfiles que lo comparten, cobertura de medios), el proceso de toma de decisiones rápida (quién autoriza la respuesta, qué nivel de la organización debe implicarse según la gravedad), la estructura de la respuesta pública que combina reconocimiento, acción y seguimiento, la gestión interna durante la crisis (cómo briefar al equipo, cómo evitar que las declaraciones no autorizadas agraven el problema) y el proceso de seguimiento post-crisis para restaurar la reputación.

**5. El SEO de reputación: controlar los resultados de búsqueda**
Lo que aparece en los primeros resultados cuando alguien busca el nombre de la empresa define la primera impresión de miles de clientes potenciales. Define la estrategia de SEO de reputación: el análisis de los primeros diez resultados de búsqueda para los términos de marca más importantes, las estrategias para posicionar contenido positivo que desplace los resultados negativos (perfiles en plataformas de autoridad, contenido propio en el dominio de la empresa, menciones en medios digitales), la gestión de los perfiles en plataformas de reviews para que aparezcan con valoraciones positivas y cómo solicitar la eliminación de contenido dañino cuando existe base legal para ello.

**6. Las métricas de la reputación online**
Define el cuadro de mandos de reputación que permite tomar decisiones informadas: la puntuación media en las principales plataformas de reviews y su evolución mensual, el ratio de reseñas positivas vs. negativas y el objetivo de mejora, el tiempo medio de respuesta a reseñas negativas, el volumen y el sentimiento de las menciones en redes sociales, el impacto del estado de reputación en las conversiones (tasa de conversión de usuarios que ven las reseñas antes de comprar) y el índice de Share of Voice en comparación con los principales competidores. Incluye cómo presentar estos datos al equipo de dirección de forma que se perciba la gestión de reputación como una inversión de negocio.

Termina con el plan de acción para los primeros treinta días: las acciones prioritarias tanto si estás en una situación de reputación neutral como si hay un problema activo que resolver.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema completo de monitorización, respuesta y construcción de reputación online para marcas en entornos digitales competitivos.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Open source reputation: contribuir y construir credibilidad técnica',
                'description'       => 'El developer que construye reputación contribuyendo a proyectos open source: la estrategia de contribución, los proyectos donde contribuir para maximizar la visibilidad y el proceso de convertir las contribuciones en oportunidades profesionales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un developer con una trayectoria consolidada en el ecosistema open source. Has pasado de ser un contribuidor ocasional a ser mantenedor de proyectos con miles de estrellas en GitHub, y has visto de primera mano cómo la reputación en open source abre puertas profesionales que ningún CV convencional puede abrir: ofertas de trabajo inbound, invitaciones a hablar en conferencias, consultoría, y la credibilidad que viene de que miles de personas usen código que tú escribiste.

Antes de proponer nada, necesito entender tu situación:

1. ¿Cuál es tu stack tecnológico principal y en qué área del desarrollo tienes más experiencia (backend, frontend, infraestructura, data, seguridad, mobile)?
2. ¿Cuál es tu nivel actual de actividad en open source: ninguna contribución, contribuidor ocasional con algunos PRs mergeados, o ya tienes proyectos propios o contribuciones regulares?
3. ¿Cuál es tu objetivo profesional: conseguir un trabajo mejor, cambiar de empresa, posicionarte como experto en una tecnología específica, construir una audiencia como developer o lanzar un proyecto propio?
4. ¿Cuánto tiempo puedes dedicar al open source de forma realista y sostenible: dos horas a la semana, cinco horas, más?
5. ¿Hay proyectos open source que ya usas en tu trabajo diario y que conoces bien desde el punto de vista del usuario?

Con esas respuestas, diseña la estrategia completa de construcción de reputación en open source:

**1. La selección de proyectos donde contribuir**
Contribuir al proyecto equivocado es tiempo perdido. Define el proceso de selección de proyectos que maximizan la visibilidad y el aprendizaje: los criterios de selección (nivel de actividad del proyecto, tamaño de la comunidad, calidad del mantenimiento, alineación con tu stack y tus objetivos profesionales), cómo evaluar si un proyecto es receptivo a los contribuidores externos (la rapidez con la que responden a los issues, el número de PRs mergeados de contribuidores externos, la calidad de la documentación para contribuidores), la diferencia entre contribuir a proyectos grandes y famosos vs. proyectos más pequeños donde tu impacto será mayor y tu curva de aprendizaje más rápida y el equilibrio entre proyectos de impacto directo (donde trabajas con los maintainers) y proyectos de amplia audiencia (donde tu nombre aparece ante más personas).

**2. La primera contribución: cómo entrar en un proyecto sin comprometer la reputación**
La primera contribución en un proyecto nuevo define cómo te perciben los maintainers. Define el proceso de incorporación a un proyecto: la semana de research previo (entender la arquitectura, leer los issues abiertos, entender las convenciones de código y el estilo del proyecto), la selección del primer issue (los "good first issue" como punto de entrada, pero con el criterio de elegir uno que sea suficientemente sustancial para demostrar capacidad), el proceso de comunicación antes de empezar a trabajar (cómo manifestar interés en un issue sin que parezca que estás reclamando territorio), el estándar de calidad de la primera PR (documentación, tests, descripción del cambio) y cómo responder al feedback del review sin ponerte a la defensiva.

**3. La escalada de contribuciones: de contribuidor a mantenedor**
El contribuidor que hace PRs puntuales tiene visibilidad limitada. El que se convierte en parte de la comunidad tiene un impacto diferente. Define la estrategia de escalada: cómo pasar de resolver bugs a proponer mejoras, de mejorar el código existente a añadir funcionalidades, de contribuidor a reviewer de PRs de otros, de reviewer a maintainer informal y de maintainer informal a colaborador oficial. Explica las señales que indican que estás listo para cada siguiente nivel y cómo comunicar la disposición a asumir más responsabilidad de forma que sea bienvenida.

**4. Los proyectos propios como amplificador de reputación**
Contribuir a proyectos de otros construye credibilidad. Crear un proyecto propio que otras personas usan construye autoridad. Define la estrategia de lanzamiento de un proyecto open source propio: cómo identificar el problema que resuelve que no está suficientemente cubierto por lo que ya existe, el estándar de calidad mínimo que debe tener antes del primer lanzamiento público (documentación, README, ejemplos de uso, tests), la estrategia de distribución inicial (Hacker News Show HN, Reddit, newsletters del ecosistema, contacto con blogs técnicos relevantes), el proceso de construcción de la comunidad inicial y cómo mantener el proyecto sin que se convierta en una carga cuando hay menos tiempo disponible.

**5. La conversión de la reputación open source en oportunidades profesionales**
La reputación en open source no se convierte sola en oportunidades profesionales: hay que facilitar la conexión. Define el proceso de conversión: el perfil de GitHub que cuenta la historia de las contribuciones de forma que un reclutador o un directivo técnico entienden el nivel, la presencia en Twitter/X como amplificador de la actividad en open source (cómo compartir el trabajo sin parecer que solo te estás promocionando), el blog técnico que desarrolla los aprendizajes de las contribuciones en artículos de referencia, las conferencias donde hablar sobre el trabajo en proyectos open source y cómo gestionar el inbound de oportunidades cuando la reputación empieza a generar interés.

**6. La sostenibilidad de la contribución open source**
El mayor riesgo del open source como estrategia de reputación es el burnout. Define el sistema de contribución sostenible: la cadencia de trabajo que no interfiere con el trabajo principal, los límites que hay que establecer cuando los proyectos propios crecen (tiempo de respuesta a issues, criterios para aceptar o rechazar PRs de otros, cuándo decir que no a una nueva funcionalidad), las estrategias de financiación para proyectos que crecen (GitHub Sponsors, Open Collective, bounties, trabajo comisionado) y cómo gestionar el momento en que un proyecto de open source necesita más tiempo del que tienes disponible.

Termina con el plan de los primeros noventa días: las acciones concretas semana a semana para empezar a construir presencia en open source desde cero o para escalar una contribución ya existente al siguiente nivel.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Estrategia de construcción de reputación técnica a través del open source que genera oportunidades profesionales inbound.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Reputación del diseñador: gestionar las reseñas y los feedbacks públicos',
                'description'       => 'El diseñador que gestiona su reputación online: las reseñas en plataformas de freelancing, los testimonios estructurados y el proceso de solicitar y publicar feedback que construye la reputación sin parecer desesperado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marca personal para diseñadores con experiencia ayudando a freelancers de diseño gráfico, UX, producto y branding a construir una reputación online que atrae proyectos sin depender del boca a boca aleatorio. Sabes que para un diseñador la reputación es el portfolio más potente que existe, y que un ecosistema de testimonios y reseñas bien construido vale más que un Behance lleno de proyectos perfectos.

Antes de proponer nada, necesito entender tu situación:

1. ¿Cuál es tu especialidad de diseño y en qué tipo de plataformas tienes presencia actualmente (Behance, Dribbble, Upwork, Fiverr, LinkedIn, portfolio propio)?
2. ¿Cuáles son las fuentes de proyectos actuales: referencias, plataformas de freelancing, LinkedIn, o una mezcla?
3. ¿Tienes testimonios o reseñas publicadas actualmente? ¿Cuántos y en qué plataformas?
4. ¿Has tenido alguna situación de feedback negativo o crítica pública que hayas tenido que gestionar?
5. ¿Cuál es el tipo de cliente ideal y el tipo de proyecto que más te gustaría atraer en los próximos doce meses?

Con esas respuestas, diseña el sistema completo de gestión de reputación para diseñadores:

**1. El ecosistema de reputación del diseñador**
La reputación de un diseñador no vive en un único lugar: se construye en múltiples puntos de contacto que los potenciales clientes consultan antes de contactar. Define el mapa de tu ecosistema de reputación: las plataformas de portfolio donde el trabajo habla (Behance, Dribbble, portfolio propio), las plataformas de reviews donde los clientes hablan por ti (Google Business Profile si tienes empresa, Upwork o Fiverr si trabajas en plataformas, Clutch para servicios de diseño B2B), las referencias de personas en LinkedIn y las menciones en publicaciones del sector. Explica cómo priorizar la construcción de reputación en cada plataforma según el tipo de cliente que quieres atraer.

**2. El proceso de solicitar testimonios sin parecer desesperado**
El momento en que se pide el testimonio importa casi tanto como el testimonio en sí. Define el proceso de solicitud que genera testimonios de calidad: el momento óptimo para pedirlo (cuando el cliente acaba de ver los resultados finales y está en el punto de mayor satisfacción), la forma de pedirlo que facilita la respuesta (no "¿me puedes hacer una reseña?" sino darle al cliente la estructura que lo hace fácil), las preguntas que orientan el testimonio hacia lo que más importa a los futuros clientes (el proceso de trabajo, la comunicación, el cumplimiento de plazos, el resultado vs. el objetivo), los canales donde solicitar la publicación según la plataforma más relevante para el cliente futuro y cómo gestionar la situación cuando el cliente quiere ayudarte pero no tiene tiempo.

**3. La estructura del testimonio que convierte**
No todos los testimonios son iguales. Un testimonio genérico ("fue un placer trabajar con él") no convence a nadie. Un testimonio específico que describe el problema y el resultado sí lo hace. Define la estructura del testimonio ideal para un diseñador: la descripción del proyecto y el desafío que había que resolver, el proceso de trabajo que el cliente describe desde su perspectiva, el resultado concreto que se consiguió (con métricas si existen: "la nueva web aumentó las conversiones un 23%") y la recomendación específica que indica a qué tipo de cliente o proyecto se recomienda. Explica cómo ayudar al cliente a estructurar el testimonio sin que pierda su autenticidad.

**4. La respuesta al feedback negativo en plataformas de diseño**
El diseñador que recibe un feedback negativo público tiene una oportunidad de demostrar profesionalidad. Define el protocolo de respuesta al feedback negativo: la distinción entre la crítica constructiva (que hay que agradecer y responder con lo que se ha aprendido), la queja de un cliente insatisfecho (que hay que gestionar con empatía y propuesta de solución), la valoración injusta o falsa (que hay que disputar siguiendo el proceso de la plataforma) y el ataque personal o difamación (que puede requerir asesoramiento legal). Para cada tipo, propón la estructura de respuesta que protege la reputación sin escalar el conflicto.

**5. La construcción proactiva de reputación a través del contenido**
Los testimonios son prueba social reactiva. El contenido que publicas es prueba social proactiva. Define la estrategia de contenido que construye reputación de diseñador: el proceso de trabajo documentado en LinkedIn o en el blog que demuestra cómo piensas, los case studies publicados que muestran el antes y el después, los artículos de opinión sobre tendencias o decisiones de diseño que posicionan como experto, las interacciones con otros diseñadores y con publicaciones del sector que construyen la red de referencia y los proyectos personales o pro bono que demuestran el rango de capacidades más allá de los proyectos de cliente.

**6. La gestión de la reputación en plataformas de freelancing**
Si trabajas en plataformas como Upwork, Fiverr o Toptal, la reputación en esas plataformas es tu activo más valioso y también el más vulnerable. Define la estrategia específica para plataformas de freelancing: cómo construir las primeras valoraciones cuando empiezas sin historial, el proceso de gestión del job success score o del rating para mantenerlo en el máximo, cómo manejar los clientes difíciles que pueden dejarte una valoración injusta antes de que el conflicto se resuelva, las estrategias para solicitar la revisión de una valoración injusta dentro de los procesos de la plataforma y cómo usar las valoraciones existentes para subir el perfil a los niveles más altos de la plataforma.

Termina con el calendario de los próximos noventa días para alguien que tiene un portfolio sólido pero pocas reseñas públicas y quiere construir su ecosistema de reputación de forma sistemática.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema de gestión de reputación online para diseñadores freelance que combina testimonios, respuesta a críticas y contenido proactivo.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Reputación comercial: lo que dicen de ti cuando no estás en la sala',
                'description'       => 'El vendedor que cuida su reputación en el sector: las referencias, los testimonios y la gestión de la imagen en LinkedIn que hace que cuando alguien busca a alguien como tú, aparezca tu nombre y no el de la competencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de ventas y marca personal para profesionales comerciales con experiencia ayudando a directores de ventas, account executives y business developers a construir la reputación que hace que los mejores clientes y las mejores oportunidades lleguen antes de que tengan que buscarlas. Sabes que el vendedor con buena reputación cierra deals más rápido porque el cliente ya tiene referencias positivas de él antes de la primera conversación.

Antes de proponer nada, necesito entender la situación:

1. ¿Cuál es el sector en el que vendes, el tipo de producto o servicio y el perfil de cliente con el que trabajas?
2. ¿Cuál es tu situación actual de reputación: recién empezando en el sector, con algunos años de trayectoria, o con una carrera consolidada que quieres visibilizar mejor?
3. ¿Cuál es tu presencia en LinkedIn actualmente: perfil básico, presencia activa con contenido, o perfil desactualizado?
4. ¿Cuáles son las fuentes de oportunidades comerciales actuales: leads inbound, outreach frío, referencias de clientes, o una mezcla?
5. ¿Cuál es el objetivo de construir la reputación comercial: conseguir mejores clientes, ascender dentro de la empresa, cambiar de empresa o sector, o cerrar deals más rápido?

Con esas respuestas, diseña el sistema completo de construcción de reputación comercial:

**1. Los pilares de la reputación comercial**
La reputación de un vendedor se construye sobre tres pilares: lo que dicen de ti los clientes que has servido, lo que dicen de ti los compañeros con los que has trabajado y lo que demuestras tú mismo a través de tu presencia profesional. Define cómo construir cada pilar: el sistema de referencias activas (no esperar a que te recomienden sino facilitar activamente la conversación de referencia), la red de ex-colegas y ex-managers que pueden validar tu perfil y el contenido propio que demuestra tu nivel de expertise en el sector. Explica cómo estos tres pilares se refuerzan mutuamente cuando todos funcionan.

**2. El sistema de referencias activas**
Las referencias son la fuente de oportunidades más valiosa para un vendedor con buena reputación. Define el sistema de referencias activas que va más allá de esperar a que los clientes satisfechos te recomienden: el momento óptimo para pedir una referencia (cuando el cliente acaba de conseguir el resultado que esperaba, no al final del contrato), la forma de pedir una referencia que hace fácil el sí (no "¿conoces a alguien que pueda necesitar esto?" sino "¿hay alguien específico en tu red a quien crees que podría serle útil lo que hemos conseguido juntos?"), el seguimiento de las referencias para que el cliente sepa si la conversación que facilitó llegó a algún sitio y la reciprocidad que mantiene la red de referencias activa a lo largo del tiempo.

**3. LinkedIn como plataforma de reputación comercial**
Para la mayoría de los vendedores B2B, LinkedIn es donde su reputación vive o muere. Define la estrategia de LinkedIn que construye reputación comercial: el perfil optimizado que cuenta la historia de los resultados que has generado para tus clientes (no un CV de cargos y fechas), la estrategia de contenido que demuestra expertise en el sector sin parecer que solo hablas de tu producto, la interacción con el contenido de clientes y prospectos que mantiene la presencia sin publicar en exceso, el uso de las recomendaciones de LinkedIn como prueba social y el proceso de construcción de la red de contactos que maximiza la visibilidad ante los decisores correctos.

**4. Las referencias escritas y los testimonios de clientes**
Un testimonio escrito de un cliente satisfecho es el argumento de ventas más poderoso que existe. Define el proceso de construcción del banco de testimonios: la selección de los clientes a los que pedir un testimonio (los que mejor representan el tipo de cliente que quieres atraer en el futuro), la estructura del testimonio que es más persuasivo para los futuros clientes del mismo perfil (el problema que tenían, el proceso de trabajo, el resultado conseguido), cómo integrar los testimonios en el proceso de ventas (cuándo compartirlos, en qué formato, a través de qué canal) y la gestión de los testimonios cuando el cliente cambia de empresa o de rol.

**5. La gestión de la reputación en momentos de conflicto**
Ninguna carrera comercial está libre de proyectos que no salen como se esperaba. Define cómo gestionar los momentos difíciles sin que dañen la reputación a largo plazo: el protocolo de comunicación cuando un cliente está insatisfecho (cuándo llamar en lugar de enviar un email, cómo asumir la responsabilidad sin comprometer a la empresa, cómo proponer una solución que salve la relación), la gestión de las referencias negativas (el ex-cliente que puede dar una valoración negativa de ti si un futuro empleador o cliente llama a preguntar), el manejo de la presión de la empresa para cerrar deals que no son los correctos para el cliente y cómo construir la reputación de vendedor honesto en un sector donde abundan los que prometen lo que no pueden cumplir.

**6. La reputación como activo profesional a largo plazo**
La reputación comercial tarda años en construirse y se puede perder en días. Define la estrategia de inversión en reputación a largo plazo: las acciones que se acumulan (cada cliente bien servido, cada referencia pedida y gestionada correctamente, cada publicación de calidad en LinkedIn) y las acciones que la erosionan (los compromisos incumplidos, los clientes abandonados cuando el deal está cerrado, el comportamiento diferente cuando hay testigos y cuando no los hay). Incluye cómo medir el estado de tu reputación comercial de forma objetiva una vez al año para identificar áreas de mejora.

Termina con el plan de los próximos noventa días para alguien con cinco años de trayectoria comercial y buena reputación boca a boca pero poca presencia online y sin un sistema de referencias activo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema de construcción de reputación comercial que combina referencias activas, presencia en LinkedIn y testimonios de clientes para generar oportunidades inbound.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product reputation: cómo la percepción del producto impacta en el negocio',
                'description'       => 'Gestiona la reputación del producto en las plataformas de review (G2, Capterra, Trustpilot): el programa de solicitud de reviews, la respuesta a las críticas y la estrategia que convierte las valoraciones en un activo de ventas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de producto con especialización en go-to-market y gestión de la reputación de producto. Has trabajado en empresas SaaS donde la posición en G2, Capterra o Trustpilot ha sido determinante para el resultado del año, y sabes que una diferencia de medio punto en la valoración media puede cambiar el win rate de la empresa en un diez o veinte por ciento en los segmentos donde los compradores investigan en estas plataformas antes de decidir.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto SaaS, en qué categoría compite y cuáles son las plataformas de reviews más relevantes para tus compradores?
2. ¿Cuál es la situación actual en las plataformas de reviews: cuántas valoraciones tienes, cuál es la puntuación media y cómo se compara con los competidores principales?
3. ¿Tienes ya un programa de solicitud de reviews o las valoraciones son completamente orgánicas?
4. ¿Cuál es el proceso actual de respuesta a las reviews, positivas y negativas?
5. ¿Cómo usa el equipo de ventas las reviews en el proceso comercial?

Con esas respuestas, diseña la estrategia completa de gestión de reputación de producto:

**1. El mapa de plataformas de reviews para tu categoría**
No todas las plataformas de reviews tienen el mismo peso para los compradores de tu categoría. Define el mapa de plataformas prioritarias: cuáles son las que los compradores de tu ICP consultan durante el proceso de evaluación (G2 para software empresarial, Capterra y GetApp para pymes, Trustpilot para productos con componente de confianza financiera, Product Hunt para lanzamientos de nuevos productos y audiencias tech), cuáles son las posiciones actuales del producto en esas plataformas vs. la competencia y cuáles son las brechas de presencia que hay que cerrar con más valoraciones o con perfiles más completos.

**2. El programa de solicitud de reviews que cumple con las políticas de las plataformas**
Las plataformas de reviews más serias (G2, Trustpilot) tienen políticas estrictas sobre cómo solicitar reviews. Define el programa de solicitud de reviews que maximiza el volumen sin violar las políticas: los momentos del ciclo de vida del cliente en que es más probable obtener una review positiva (tras el onboarding exitoso, tras la renovación, tras la resolución satisfactoria de un ticket de soporte, tras conseguir un resultado significativo con el producto), los canales de solicitud que generan mayor tasa de respuesta (email personalizado del CSM vs. secuencia automatizada), el proceso de incentivo que está permitido por las plataformas (el regalo por escribir una review honesta vs. el incentivo condicionado a la valoración positiva, que es una violación de políticas) y la cadencia que genera volumen sin saturar a los clientes.

**3. La respuesta a las reviews que convierte críticas en argumentos de venta**
Una buena respuesta a una review negativa es leída por más personas que la propia review. Define el protocolo de respuesta a reviews que maximiza el impacto: la respuesta a reviews positivas que amplifica el mensaje clave del cliente (no solo "gracias por tu valoración"), la respuesta a reviews de mejora o neutrales que muestra que el producto evoluciona basándose en el feedback, la respuesta a reviews negativas que reconoce el problema, explica lo que se ha hecho al respecto y ofrece continuidad de la conversación por un canal privado, y el proceso de escalación interna cuando una review negativa revela un problema de producto que hay que resolver. Incluye plantillas para cada tipo de respuesta.

**4. La integración de las reviews en el proceso de ventas**
Las reviews bien gestionadas son el material de ventas más efectivo porque no vienen del vendedor. Define cómo integrar las reviews en cada etapa del proceso comercial: el widget de reviews en el website que aumenta la confianza de los visitantes, el envío de los perfiles de G2 o Capterra a los prospectos en la etapa de evaluación cuando están comparando con la competencia, el use case de "los clientes similares a ti dicen esto sobre el producto" en las conversaciones de ventas, los battle cards basados en las categorías de reviews donde el producto supera a la competencia y el proceso de compartir las reviews más relevantes para cada tipo de comprador en los materiales de nurturing.

**5. La gestión de las reviews falsas o de la competencia**
Las plataformas de reviews son también un campo de batalla donde a veces la competencia juega sucio. Define el proceso de gestión de reviews sospechosas: cómo identificar los patrones que sugieren reviews manipuladas (picos de valoraciones negativas coordinadas, perfiles sin historial, lenguaje muy similar entre varias reviews), el proceso formal de disputa en cada plataforma para reviews que violan sus políticas, la comunicación pública sobre el problema cuando es lo suficientemente serio como para merecer transparencia y cómo proteger el programa de reviews propio para que no viole las políticas de las plataformas involuntariamente.

**6. Las métricas de reputación de producto y su impacto en el negocio**
Define el cuadro de mandos de reputación de producto: la puntuación media y el número de reviews en cada plataforma prioritaria (con objetivo trimestral), el ranking en las categorías relevantes vs. los competidores principales, la tasa de solicitud de reviews vs. la tasa de respuesta, el impacto de las reviews en el win rate (comparando el cierre de deals donde el prospecto ha consultado las plataformas de reviews vs. los que no), el análisis de sentimiento de las reviews (qué categorías se mencionan más en las valoraciones positivas y en las negativas) y cómo usar este análisis para informar la hoja de ruta del producto.

Termina con el plan de los primeros sesenta días para un producto con pocas reviews y sin un proceso de gestión de reputación formal: las acciones concretas para construir presencia en las plataformas prioritarias.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Estrategia completa de gestión de reputación de producto en plataformas de reviews que convierte las valoraciones en un activo de ventas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Glassdoor y employer reputation: gestionar lo que dicen los empleados',
                'description'       => 'Gestiona la reputación de la empresa como empleadora en Glassdoor, LinkedIn y otras plataformas: la estrategia de solicitud de reseñas, la respuesta a las críticas y el proceso de mejora que convierte el feedback negativo en cambios reales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de people y employer branding con experiencia gestionando la reputación de empresa como empleadora en mercados competitivos de talento. Sabes que el 86% de los candidatos consulta las reseñas de una empresa antes de aplicar, y que una puntuación baja en Glassdoor no es un problema de comunicación: es un síntoma de un problema de cultura o de gestión que hay que resolver antes de que el contenido de employer branding tenga algún impacto.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la empresa, su tamaño, sector y el mercado de talento en el que compite?
2. ¿Cuál es la situación actual en Glassdoor y otras plataformas (LinkedIn, Indeed, Kununu según el mercado): puntuación media, número de reseñas, tendencia reciente?
3. ¿Cuáles son los temas más recurrentes en las reseñas negativas actuales?
4. ¿Hay un proceso de respuesta activa a las reseñas o las reseñas se acumulan sin respuesta?
5. ¿Cuál es el impacto percibido de la reputación en Glassdoor en la calidad y el volumen de candidaturas?

Con esas respuestas, diseña la estrategia completa de gestión de employer reputation:

**1. El diagnóstico honesto de la reputación actual**
Antes de gestionar la reputación hay que entender lo que hay detrás. Define el proceso de diagnóstico que va más allá de leer las reseñas en Glassdoor: el análisis cualitativo de los temas recurrentes en las reseñas negativas (liderazgo, salarios, oportunidades de desarrollo, cultura de trabajo, equilibrio vida-trabajo), la comparación con el eNPS interno para ver si la reputación pública refleja el estado real de la empresa, las entrevistas de salida como fuente de información sin filtros y la correlación entre los temas de las reseñas y los datos de rotación por departamento. Explica cómo presentar este diagnóstico al equipo de dirección de forma que genere acción y no solo defensividad.

**2. La respuesta a las reseñas en Glassdoor que muestra liderazgo**
El CEO o el director de RRHH que responde personalmente a las reseñas en Glassdoor, tanto positivas como negativas, envía una señal poderosa sobre la cultura de la empresa. Define la estrategia de respuesta a reseñas: quién debe firmar las respuestas (y por qué la firma importa tanto como el contenido), la estructura de la respuesta que reconoce lo válido de la crítica sin sonar defensivo, confirma lo que ya se está haciendo para mejorarlo y abre el canal de comunicación directa, cómo manejar las reseñas que contienen afirmaciones falsas o que revelan información confidencial, y la cadencia de respuesta que demuestra que el proceso de escucha es continuo y no solo reactivo a los picos negativos.

**3. El programa de solicitud de reseñas auténticas**
La mejor respuesta a las reseñas negativas es tener suficientes reseñas positivas que reflejen el estado real de la empresa. Define el programa de solicitud de reseñas que cumple con las políticas de Glassdoor: los momentos del ciclo de vida del empleado en que es más probable obtener una reseña genuinamente positiva (tras un ascenso, tras la evaluación anual positiva, tras un proyecto de éxito), el proceso de solicitud que no presiona ni distorsiona (la explicación de por qué la reputación en Glassdoor importa para la empresa, sin indicar qué tipo de reseña se espera), la diferencia entre hacer el proceso de reseña fácil y coaccionar a los empleados para que dejen reseñas positivas (que viola las políticas de Glassdoor y destruye la credibilidad) y cómo expandir el programa de forma que incluya a empleados de diferentes niveles, departamentos y antiguedades.

**4. La conexión entre las reseñas y la mejora real**
Las reseñas de Glassdoor son el feedback más honesto que una empresa puede recibir sobre su cultura. Define el proceso de mejora continua basado en reseñas: el sistema de análisis trimestral de los temas recurrentes, el proceso de priorización de los problemas que tienen mayor impacto en la reputación y en la retención, la comunicación a los empleados de los cambios que se han implementado como resultado del feedback recibido (el cierre del loop que demuestra que las reseñas se leen y generan acción), el impacto en las métricas de reputación de cada cambio implementado y cómo documentar este proceso para comunicarlo de forma creíble a los candidatos durante el proceso de selección.

**5. La gestión de la reputación durante momentos de crisis**
Un ERE, una reestructuración, la salida de un líder popular o un conflicto laboral público pueden generar un pico de reseñas negativas en Glassdoor que afecta al pipeline de talento durante meses. Define el protocolo de gestión de reputación durante momentos de crisis: la comunicación interna que minimiza el impacto en la reputación externa, el proceso de respuesta a las reseñas generadas durante la crisis que reconoce la situación sin comprometer los compromisos legales de la empresa, el plan de recuperación de reputación post-crisis y cómo comunicar los aprendizajes a los candidatos que preguntan por el momento difícil durante el proceso de selección.

**6. Las métricas de employer reputation y su impacto en el talento**
Define el cuadro de mandos de employer reputation: la puntuación media en cada plataforma y su evolución trimestral, el porcentaje de candidaturas de perfiles cualificados que mencionan haber consultado Glassdoor antes de aplicar, el impacto de la puntuación en la tasa de aceptación de ofertas (los candidatos que rechazan mencionar la puntuación de Glassdoor como motivo), el coste por contratación en los perfiles donde la reputación es un factor determinante y el NPS de candidatos que han pasado por el proceso de selección (que puede afectar también a la reputación incluso para los que no han sido contratados).

Termina con el plan de comunicación que presentarías al comité de dirección para conseguir su implicación activa en la mejora de la reputación en Glassdoor, con los argumentos de negocio que justifican la inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Estrategia de gestión de employer reputation en plataformas como Glassdoor que combina respuesta a críticas, mejora real y construcción de reputación positiva.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Reputación financiera y relaciones con analistas',
                'description'       => 'Gestiona la reputación financiera de la empresa ante los analistas, los medios económicos y los inversores: el programa de analyst relations, las comunicaciones de resultados y la estrategia de gestión de la reputación en momentos de volatilidad o resultados negativos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de comunicación financiera y relaciones con inversores con experiencia en empresas cotizadas y en empresas de capital privado en fases de crecimiento. Has gestionado la reputación financiera de empresas en momentos de resultados excepcionales y en momentos de crisis, y sabes que la credibilidad con los mercados no se construye en los buenos momentos sino en cómo se gestiona la comunicación en los malos.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el tipo de empresa (cotizada, capital privado con múltiples inversores, en proceso de preparación para una salida a bolsa) y cuál es el tamaño y el sector?
2. ¿Cuál es la situación actual de reputación financiera: buena cobertura de analistas, cobertura limitada, cobertura negativa o ausencia de cobertura?
3. ¿Cuál es el momento del negocio: crecimiento sólido, resultados mixtos, reestructuración, o preparación para una operación de capital?
4. ¿Hay un equipo de IR dedicado o la función la desempeña el CFO directamente con apoyo externo?
5. ¿Cuáles son los tres mensajes principales que la empresa quiere que el mercado entienda sobre su posición competitiva y sus perspectivas?

Con esas respuestas, diseña la estrategia completa de gestión de reputación financiera:

**1. El programa de analyst relations: construir la cobertura correcta**
Los analistas de sell-side y de buy-side tienen un impacto enorme en cómo perciben la empresa los inversores institucionales. Define el programa de analyst relations: la identificación de los analistas más relevantes para la empresa (por sector, por tipo de inversor al que cubren, por su influencia en el mercado objetivo), el proceso de inicio de cobertura para analistas que no cubren la empresa todavía, la cadencia de contacto con los analistas que ya tienen cobertura (más allá de las comunicaciones obligatorias de resultados trimestrales), los materiales que se comparten proactivamente con los analistas para mantenerlos informados entre trimestres y el proceso de gestión cuando un analista publica un informe negativo o rebaja la recomendación.

**2. La narrativa financiera que los mercados comprenden y recuerdan**
Los inversores y analistas procesan centenares de empresas. La empresa que tiene una narrativa financiera clara y consistente es la que se recuerda y la que atrae a los inversores correctos. Define la narrativa financiera de la empresa: el mercado en el que compite (tamaño, crecimiento, posición competitiva), los drivers de crecimiento que son reales y defendibles (no los que suenan bien en el pitch), los indicadores adelantados que muestran que el negocio está en la dirección correcta antes de que aparezcan en los resultados financieros, los riesgos que el management ha identificado y las palancas que tiene para gestionarlos y la visión a tres o cinco años que da contexto a las decisiones que se están tomando ahora.

**3. La comunicación de resultados: más allá del cumplimiento regulatorio**
Un earnings call que solo cumple con las obligaciones regulatorias es una oportunidad perdida. Define la estructura de comunicación de resultados que refuerza la credibilidad y el posicionamiento: el preparation process (las dos semanas previas al earnings que deciden si el call va bien o mal), la presentación de resultados que sitúa los números en el contexto de la narrativa de largo plazo, la gestión del guidance (cómo dar guidance que el management puede cumplir y que el mercado percibe como ambicioso pero creíble), la preparación para el Q&A con analistas (las veinte preguntas más probables y las respuestas modelo) y el proceso de comunicación post-earnings con los inversores más importantes.

**4. La gestión de la reputación en momentos de resultados negativos**
La credibilidad financiera se gana o se pierde en los momentos difíciles. Define el protocolo de comunicación cuando los resultados están por debajo de las expectativas o el negocio enfrenta un momento complicado: cuándo y cómo comunicar un profit warning antes del earnings (el timing, el canal, el nivel de detalle), la estructura del mensaje que combina reconocimiento del problema, explicación de las causas raíz, acciones correctoras y timeline de recuperación, el manejo de las conversaciones con los inversores más grandes tras un earnings negativo (qué decirles que va más allá del comunicado público), la gestión de los medios económicos y los analistas que publican notas negativas y la estrategia de recuperación de la narrativa a lo largo de los trimestres siguientes.

**5. Las relaciones con los medios económicos y financieros**
Los medios económicos amplifican la narrativa financiera de la empresa o la cuestionan. Define la estrategia de relaciones con medios financieros: la selección de los medios prioritarios para la empresa según el tipo de inversor al que quieres llegar (prensa económica generalista, publicaciones especializadas del sector, plataformas financieras digitales), la cadencia de contacto con los periodistas que cubren el sector, el proceso de gestión de las solicitudes de información de los medios (qué información se puede compartir, qué está restringido por las normas de mercado, quién autoriza las declaraciones y cómo garantizar la consistencia del mensaje entre diferentes portavoces), la estrategia de notas de prensa y comunicados financieros que maximizan la cobertura y el proceso de respuesta a crisis mediáticas financieras.

**6. Las métricas de la reputación financiera**
Define el cuadro de mandos de reputación financiera: el seguimiento del sentimiento de los analistas (número de compras, mantener y vender; evolución del precio objetivo de consenso), el coverage de medios financieros (número de menciones, tono de las menciones, medios cubiertos), el ratio precio/book o EV/EBITDA comparado con los peers (un descuento de valoración persistente puede ser una señal de problema de reputación), el feedback cualitativo de los inversores institucionales sobre la calidad y la transparencia de la comunicación de IR y el índice de satisfacción de los analistas con la calidad del acceso y de la información.

Termina con el calendario de comunicación del próximo trimestre: las actividades de IR, las reuniones con analistas, los eventos de inversores y las comunicaciones de resultados, con los mensajes clave que deben ser consistentes en todos los touchpoints.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de gestión de reputación financiera para empresas cotizadas o en proceso de apertura de capital, incluyendo analyst relations y comunicación de resultados.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de la reputación del despacho y de los abogados individuales',
                'description'       => 'Gestiona la reputación del despacho y de los socios en los rankings jurídicos, en los medios especializados y en las plataformas de valoración: la estrategia de candidaturas a rankings y los procesos que aseguran que la reputación del despacho crece año a año.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing jurídico especializado en gestión de reputación para despachos de abogados. Has ayudado a despachos de distintos tamaños a mejorar su posicionamiento en los rankings jurídicos más relevantes (Chambers, Legal 500, Best Lawyers, IFLR), a gestionar la reputación de sus socios en medios especializados y a construir los activos de reputación que hacen que los mejores clientes llamen antes de hacer un RFP.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es la especialidad del despacho, su tamaño y en qué mercados geográficos opera?
2. ¿Cuál es la situación actual en rankings jurídicos: está en alguno, ha presentado candidaturas sin éxito, o es algo completamente nuevo?
3. ¿Cuál es la presencia en medios especializados (publicaciones jurídicas, diarios económicos) actualmente?
4. ¿Cuál es el perfil de reputación de los socios individualmente: hay socios con reputación consolidada o es algo que hay que construir?
5. ¿Cuál es el objetivo de gestión de reputación: conseguir el primer ranking, mejorar la posición en rankings donde ya está, o reforzar la reputación de socios individuales?

Con esas respuestas, diseña la estrategia completa de gestión de reputación para el despacho:

**1. Los rankings jurídicos: cómo funciona el sistema y cómo entrar en él**
Los rankings jurídicos como Chambers, Legal 500 o IFLR no se consiguen por el nivel técnico del despacho: se consiguen con una estrategia sistemática de candidaturas. Define el proceso de candidatura efectiva: la selección de los rankings prioritarios según la especialidad y el mercado objetivo del despacho, el proceso de investigación de los criterios de evaluación de cada ranking (metodología, tipo de referencias que valoran, casos que quieren ver), la recopilación de los mandatos de referencia que demuestran el nivel de práctica requerido, el proceso de selección y preparación de las referencias de clientes (las más influyentes en el sector, con las instrucciones correctas para la conversación con los investigadores del ranking), la redacción de la submission y el seguimiento del proceso de investigación.

**2. La gestión de las relaciones con los investigadores de rankings**
Los rankings jurídicos se construyen en las conversaciones entre los socios y los investigadores. Define el proceso de gestión de relaciones con los researchers de las principales publicaciones: la identificación de los researchers que cubren la especialidad y el mercado del despacho, la estrategia de contacto proactivo durante el período de investigación, cómo preparar a los socios para las entrevistas con los researchers (qué información compartir, cómo hablar del despacho y de los mandatos más relevantes, cómo gestionar las preguntas sobre la competencia), el proceso de actualización de información entre ciclos de rankings y cómo responder cuando el resultado no es el esperado.

**3. La reputación en medios jurídicos especializados**
La presencia en medios jurídicos especializados construye la reputación que complementa los rankings. Define la estrategia de presencia en medios: la identificación de las publicaciones más leídas por los clientes objetivo del despacho (no solo por otros abogados), la estrategia de contribución de artículos de opinión y análisis que posicionan a los socios como expertos de referencia en su área, el proceso de gestión de las solicitudes de comentarios y entrevistas de los medios (quién responde, en qué plazo, cómo garantizar la consistencia del mensaje), la participación en las encuestas anuales que publican las revistas jurídicas especializadas y el proceso de candidatura a los premios sectoriales del sector jurídico.

**4. La reputación de los socios como individuos**
En muchos sectores del mercado jurídico, los clientes contratan al socio antes que al despacho. Define la estrategia de construcción de reputación individual de los socios: el perfil en LinkedIn que refleja la práctica de forma que los clientes potenciales entienden el área de especialidad y los tipos de mandatos en los que trabajan, la participación en asociaciones profesionales y en comités de las principales bar associations del sector, el programa de ponencias en conferencias jurídicas del área de práctica y la contribución a publicaciones académicas o de referencia del sector cuando la práctica lo justifica.

**5. La gestión de crisis de reputación en el sector jurídico**
Un despacho puede verse afectado por crisis de reputación que no tienen relación directa con la calidad de su trabajo jurídico: un conflicto de intereses que se hace público, la salida repentina de un socio estrella, una conducta inapropiada de un miembro del despacho o una decisión de un cliente que genera controversia pública. Define el protocolo de gestión de crisis de reputación para despachos: el proceso de toma de decisiones rápida (quién decide, con qué información, en qué plazo), la comunicación con clientes actuales que pueden estar preocupados, la comunicación con los medios cuando la crisis tiene visibilidad pública, el proceso de investigación interna que debe preceder a cualquier comunicación externa y la estrategia de recuperación de reputación post-crisis.

**6. El proceso de mejora continua de la reputación**
La reputación de un despacho no mejora sola: requiere un proceso sistemático de inversión y seguimiento. Define el sistema de gestión de reputación a largo plazo: el calendario anual de actividades de reputación (candidaturas a rankings, participación en conferencias, contribuciones a medios, reuniones con clientes para referencias), el proceso de documentación de mandatos relevantes durante el año para que estén disponibles cuando llegue la temporada de rankings, el seguimiento de la posición del despacho en los rankings prioritarios año a año y el presupuesto de gestión de reputación que incluye los costes de las candidaturas, los eventos de visibilidad y el soporte externo de comunicación.

Termina con el calendario de actividades de reputación del próximo año para un despacho de tamaño medio que quiere conseguir su primera posición en Chambers en los próximos veinticuatro meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategia de gestión de reputación para despachos jurídicos que incluye rankings, medios especializados y reputación individual de los socios.',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Review management: el equipo de CS que gestiona las valoraciones de producto',
                'description'       => 'El equipo de customer success que tiene el proceso de solicitar, responder y aprender de las valoraciones de los clientes: la automatización de las solicitudes de review, la respuesta a las valoraciones negativas y el impacto de las valoraciones en el pipeline de ventas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer success con especialización en la gestión de la reputación de producto y en el impacto de las valoraciones de clientes en los resultados de negocio. Has construido programas de review management que han aumentado el rating de producto en varias décimas en cuestión de trimestres, y sabes que la diferencia entre un equipo de CS que ignora las plataformas de reviews y uno que las gestiona activamente puede ser de varios puntos de win rate en los deals donde el comprador investiga antes de decidir.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto SaaS, cuál es el modelo de customer success y cuál es la ratio de cuentas por CSM?
2. ¿Cuál es la situación actual en las plataformas de reviews (G2, Capterra, Trustpilot, o las específicas del sector): cuántas reviews hay y cuál es la puntuación media?
3. ¿Existe actualmente algún proceso de solicitud de reviews coordinado desde el equipo de CS?
4. ¿Hay un proceso de respuesta a las reviews negativas y quién lo gestiona actualmente?
5. ¿Cómo usa el equipo de ventas las reviews en el proceso comercial y cuál es el impacto percibido de la reputación en los deals?

Con esas respuestas, diseña el programa completo de review management para el equipo de CS:

**1. La integración del review management en el flujo de trabajo del CSM**
El review management que no está integrado en los procesos del equipo de CS no se hace de forma consistente. Define cómo integrar la solicitud y gestión de reviews en el flujo de trabajo diario del CSM: los triggers automáticos que indican que un cliente está en el momento óptimo para una solicitud de review (puntuación alta en el último NPS, uso intensivo de una funcionalidad nueva, renovación reciente, milestone de éxito alcanzado), la integración en el CRM o en la plataforma de CS para que el CSM vea cuándo es el momento de actuar, el script de solicitud de review que el CSM usa en la conversación con el cliente (no el email automatizado, sino la petición en persona o en la llamada de QBR) y la cadencia que distribuye las solicitudes a lo largo del año sin crear picos artificiales que las plataformas puedan detectar.

**2. La automatización de las solicitudes que cumple con las políticas de las plataformas**
La automatización de las solicitudes de review permite escalar el programa sin sobrecargar al equipo de CS. Define la arquitectura de automatización: los triggers que activan la secuencia de solicitud de review (evento en el CRM, milestone en la plataforma de producto, score de health alto), el diseño de la secuencia de emails que maximiza la tasa de completación sin parecer spam, la personalización de los emails con datos del cliente que aumenta la tasa de respuesta, el proceso de exclusión de clientes que están en momentos de relación complicada (ticket abierto, renovación en riesgo, en proceso de escalación) y el cumplimiento de las políticas de las plataformas en cada elemento de la secuencia.

**3. El protocolo de respuesta del equipo de CS a las reviews**
Las reviews son conversaciones, no monólogos. Define el protocolo de respuesta del equipo de CS que convierte las reviews en oportunidades de relación: la respuesta a las reviews positivas que amplifica el mensaje clave del cliente y menciona el próximo paso en la relación, la respuesta a las reviews de mejora que muestra que el feedback se ha registrado y explica qué se va a hacer al respecto, la respuesta a las reviews negativas que tiene en cuenta que la conversación es pública y que el objetivo es tanto resolver el problema del cliente como demostrar a los lectores futuros que la empresa se hace cargo de los problemas, y el proceso de escalación interna cuando una review revela un problema de producto o de servicio que merece atención del equipo de producto o del equipo de liderazgo de CS.

**4. El cierre del loop: del review al cambio de producto**
Las reviews son una fuente de feedback de producto infrautilizada. Define el proceso de cierre del loop entre las reviews y el equipo de producto: el análisis mensual de los temas recurrentes en las reviews negativas para identificar patrones de problemas de producto o de usabilidad, el proceso de comunicación de estos hallazgos al equipo de producto con el formato y el contexto que facilitan la priorización, el seguimiento de si los problemas identificados en las reviews han sido resueltos en las releases posteriores y la comunicación a los clientes que dejaron reviews negativas cuando el problema que mencionaron ha sido resuelto (el re-engagement que puede convertir una review negativa en una actualización positiva).

**5. La integración de las reviews en el proceso de ventas**
Las reviews bien gestionadas por CS son un activo de ventas que el equipo comercial puede usar en cada etapa del ciclo de compra. Define la colaboración entre CS y ventas en torno a las reviews: el proceso de curación de las reviews más relevantes para cada tipo de comprador (por sector, por tamaño de empresa, por caso de uso), la creación de la colección de reviews para cada etapa del proceso de venta (reviews de onboarding para los prospectos que preguntan por la facilidad de implementación, reviews de impacto para los que preguntan por el ROI, reviews de soporte para los que preguntan por la experiencia post-venta), la integración en la sala de ventas y en los materiales de enablement y el proceso de actualización regular del banco de reviews que usa ventas.

**6. Las métricas del programa de review management**
Define el cuadro de mandos del programa de review management: el volumen de reviews nuevas por período (con objetivo) y la evolución de la puntuación media, la tasa de solicitud de reviews vs. la tasa de completación, la distribución de las puntuaciones (el porcentaje de reviews de cinco estrellas, cuatro estrellas y las negativas), el tiempo medio de respuesta a las reviews negativas, la tasa de actualización de reviews negativas después de una respuesta y una resolución del problema, el impacto de la puntuación en el win rate de los deals donde el comprador ha consultado las plataformas de reviews y la correlación entre el health score del cliente y la probabilidad de dejar una review positiva.

Termina con el playbook de los primeros noventa días para un equipo de CS que quiere lanzar un programa formal de review management desde cero: las acciones en orden, los responsables y las métricas de éxito de cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Programa de review management para equipos de customer success que genera valoraciones de calidad, gestiona las negativas y convierte las reviews en activo de ventas.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Reputación del freelance: lo que dicen de ti cuando consigues el proyecto',
                'description'       => 'El freelance que gestiona activamente su reputación: los testimonios estructurados, las reseñas en plataformas y el proceso de construcción de reputación que hace que cada proyecto bien entregado genere el siguiente sin esfuerzo adicional de venta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marca personal y negocio para freelancers con experiencia ayudando a profesionales independientes a construir el sistema de reputación que convierte cada proyecto bien entregado en la siguiente oportunidad sin esfuerzo adicional de venta. Sabes que el freelance con buena reputación no busca proyectos: los proyectos le buscan a él, y que la diferencia entre tener clientes y tener una lista de espera está en haber construido un activo de reputación de forma sistemática.

Antes de proponer nada, necesito entender la situación:

1. ¿Cuál es la especialidad del freelance y en qué canales obtiene proyectos actualmente?
2. ¿Cuántos proyectos completos tiene en el historial y cuál es la calidad media de la relación con los clientes pasados?
3. ¿Cuáles son los activos de reputación actuales: testimonios publicados, reseñas en plataformas, referencias activas, presencia en redes?
4. ¿Cuál es la mayor dificultad actual: falta de clientes, clientes de baja calidad, ciclo de ventas largo, o dificultad para subir tarifas?
5. ¿Hay proyectos recientes de los que el freelance esté especialmente orgulloso y que podrían servir como referencia de reputación?

Con esas respuestas, diseña el sistema completo de gestión de reputación para el freelance:

**1. El inventario de reputación: lo que ya tienes y lo que falta**
Antes de construir la reputación hay que saber dónde estás. Define el proceso de inventario de reputación: la auditoría de los testimonios existentes (cuántos hay, dónde están publicados, qué dicen y qué nivel de especificidad tienen), el mapa de clientes pasados que podrían ser referencias activas si se les pide (los que más satisfechos quedaron, los que trabajan en empresas con más proyectos potenciales, los que tienen más contactos en el tipo de empresa que quieres atraer), la presencia en plataformas de ratings y reviews del sector, la visibilidad en búsquedas del nombre y de los términos de especialidad y el análisis de lo que dice el boca a boca cuando alguien pregunta sobre ti a un cliente pasado.

**2. El sistema de solicitud de testimonios estructurados**
Un testimonio que dice "fue un placer trabajar con él" no convence a nadie. Un testimonio que describe el problema que tenía el cliente, el proceso de trabajo y el resultado que consiguió, sí. Define el sistema de solicitud de testimonios estructurados: el momento de la entrega del proyecto en que es más probable recibir un sí y un testimonio entusiasta, la forma de pedir el testimonio que facilita la respuesta (la pregunta de un párrafo vs. el formulario de tres preguntas que el cliente puede responder en cinco minutos), las tres preguntas que producen los testimonios más persuasivos para el tipo de cliente que quieres atraer, el proceso de revisión del testimonio antes de la publicación (para corregir erratas sin perder la voz del cliente) y los canales donde publicar el testimonio de forma que lo encuentre quien tiene que encontrarlo.

**3. Las referencias activas: el sistema que genera proyectos desde la red**
Las referencias pasivas esperan a que alguien pregunte. Las referencias activas trabajan para ti aunque no estés en la conversación. Define el sistema de referencias activas: la identificación de los diez clientes o contactos que más probablemente generan referencias de calidad (los que conocen a muchos clientes potenciales, los que han quedado muy satisfechos con el trabajo y los que trabajan en sectores o empresas donde hay muchos proyectos del tipo que buscas), el proceso de activación de estas referencias (cómo pedirlas de forma que sea fácil decir sí, cómo dar al cliente la información que necesita para hablar bien de ti y a quién dirigirse), la reciprocidad que mantiene la red activa (cómo ayudar a estas personas en sus propios proyectos o redes) y el seguimiento de cada referencia para saber si llegó a algún sitio y cerrar el loop con la persona que la facilitó.

**4. La presencia en plataformas de freelancing: gestionar el historial**
Si trabajas en plataformas como Upwork, Fiverr o Toptal, tu historial en la plataforma es tu activo de reputación más visible. Define la estrategia de gestión de la reputación en plataformas: el proceso de selección de los proyectos que maximizan la probabilidad de obtener una valoración de cinco estrellas (los proyectos bien definidos, con clientes que entienden el proceso, sin señales de alarma de microgestión o de expectativas desalineadas), el proceso de gestión de la expectativa durante el proyecto que minimiza las sorpresas en la entrega final, el momento y la forma de solicitar la valoración cuando el proyecto termina y el proceso de gestión de una valoración negativa (cómo responder públicamente, si existe la opción de disputar y cuándo hacerlo).

**5. La reputación online del freelance fuera de las plataformas**
La reputación en plataformas de freelancing es valiosa pero limitada. La reputación en el ecosistema más amplio es la que permite subir tarifas y elegir proyectos. Define la estrategia de reputación online más allá de las plataformas: el perfil de LinkedIn que cuenta la historia de los resultados generados para los clientes (no solo el listado de proyectos), el portfolio web con los case studies que el cliente potencial puede leer antes de contactar, la presencia en comunidades del sector donde están los clientes que quieres atraer (grupos de LinkedIn, comunidades de Slack, Reddit) y la reputación construida a través del contenido que demuestra expertise sin necesidad de publicar constantemente.

**6. El sistema de mantenimiento de la reputación a lo largo del tiempo**
La reputación es un activo que requiere mantenimiento activo. Define el sistema de gestión de reputación que funciona aunque estés en medio de un proyecto intensivo: el proceso de revisión trimestral del estado de la reputación (cuántos testimonios nuevos, qué dice el boca a boca, cómo están las referencias), la cadencia de contacto con clientes pasados para mantener la relación viva (sin que parezca que solo llamas cuando necesitas algo), el proceso de actualización del portfolio y los testimonios cuando hay proyectos nuevos relevantes y el sistema de alerta cuando aparece algo sobre tu nombre en internet que merece atención.

Termina con el plan de los próximos treinta días para un freelance con tres años de trayectoria y buenos clientes pero sin testimonios publicados y sin un sistema de referencias activo: las acciones concretas que puede hacer esta semana para empezar a construir su activo de reputación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema completo de gestión de reputación para freelancers que convierte cada proyecto bien entregado en la siguiente oportunidad sin esfuerzo de venta.',
                'vote_score'        => 44,
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
