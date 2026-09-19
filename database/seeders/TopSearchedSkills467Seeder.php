<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills467Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Crear contenido viral en redes sociales con IA y hooks psicológicos',
                'description'      => 'Diseña una estrategia de contenido viral usando IA para identificar hooks psicológicos y formatos trending que maximicen el alcance orgánico.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de contenidos virales y psicología del comportamiento digital. Quiero que me ayudes a construir un sistema completo para crear contenido que se vuelva viral en redes sociales, usando inteligencia artificial para identificar los patrones psicológicos que hacen que la gente comparta, comente y guarde publicaciones.

**El reto del contenido viral:**
La viralidad no es aleatoria. Existe una ciencia detrás de por qué ciertos contenidos se propagan de forma exponencial mientras otros con la misma calidad de producción pasan desapercibidos. Los algoritmos de plataformas como TikTok, Instagram Reels y YouTube Shorts están diseñados para amplificar señales de engagement, y la IA puede ayudarnos a crear contenido que active esas señales de forma consistente.

**Lo que necesito que construyas conmigo:**

Primero, explícame la psicología detrás del contenido viral en el contexto de las redes sociales actuales:
- Los seis disparadores emocionales que más impulsan el sharing: sorpresa, indignación, aspiración, pertenencia, utilidad y entretenimiento. Para cada uno dame tres ejemplos concretos de formatos de contenido que los activen
- Cómo funciona el efecto de la identidad social en la viralidad: por qué la gente comparte contenido que dice algo sobre quiénes son ellos
- La psicología del FOMO y la escasez en contenido de redes sociales: cómo usarlos sin manipular
- Por qué el contenido que genera desacuerdo o debate tiene mayor alcance y cómo aprovecharlo sin caer en el clickbait

Segundo, diseña para mí una biblioteca de 20 hooks de apertura para Reels, TikToks y YouTube Shorts que detengan el scroll en los primeros dos segundos. Para cada hook:
- El texto exacto de la primera pantalla o los primeros segundos de audio
- La emoción o curiosidad que activa
- El tipo de contenido al que mejor se adapta
- Una variación para diferentes nichos (marketing, tecnología, salud, finanzas personales, lifestyle)

Tercero, crea un proceso de trabajo con IA para producir 30 piezas de contenido viral al mes:
- Cómo usar IA para hacer research de tendencias: qué señales buscar en TikTok Creative Center, Google Trends, Reddit y Twitter/X para identificar temas en fase de crecimiento antes de que se saturen
- Cómo usar IA para adaptar tendencias de otros mercados o idiomas a tu audiencia local
- El flujo de producción: desde la idea hasta el contenido publicado en menos de 90 minutos por pieza
- Cómo crear variantes de cada pieza para hacer A/B testing de hooks, formatos y CTAs

Cuarto, diseña un sistema de análisis de rendimiento para aprender qué funciona:
- Las métricas que realmente predicen viralidad (ratio de retención a 3 segundos, 30 segundos y completo, tasa de guardados, ratio compartidos/visualizaciones) vs las métricas vanidad
- Cómo construir un registro de aprendizaje de contenidos: qué datos guardar de cada pieza publicada para entrenar tu propio criterio creativo con el tiempo
- Cómo interpretar los patrones en tus datos para ajustar la estrategia cada semana

Dame también una plantilla de briefing de contenido que puedas darle a IA para que genere el guion completo de un Reel de 60 segundos sobre cualquier tema de tu nicho, con instrucciones de producción incluidas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear sistema de producción de contenido viral en redes usando IA y disparadores psicológicos',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de publicación de contenido en redes con IA',
                'description'      => 'Construye un pipeline técnico para generar, programar y publicar contenido en múltiples redes sociales de forma automatizada con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software especializado en automatización de redes sociales y sistemas de contenido. Necesito diseñar e implementar un pipeline técnico completo que use inteligencia artificial para generar, adaptar, programar y publicar contenido de forma automatizada en múltiples plataformas, manteniendo la calidad y la coherencia de la marca.

**El sistema que quiero construir:**
Un pipeline de automatización que tome un tema o una idea central y genere automáticamente versiones adaptadas para cada plataforma (LinkedIn, Twitter/X, Instagram, TikTok, YouTube Shorts), las programe en los horarios óptimos y publique sin intervención manual, con un loop de aprendizaje basado en métricas de rendimiento.

**Diseño técnico completo:**

Explícame la arquitectura del sistema:
- Los componentes principales: ingesta de ideas, motor de generación de contenido con IA, adaptador por plataforma, validador de calidad, scheduler, publisher y analytics collector
- Las APIs que necesito integrar: cuáles de las APIs de redes sociales tienen capacidades de publicación real (Twitter API v2, Instagram Graph API, LinkedIn API, TikTok API) y cuáles requieren herramientas intermedias como Buffer o Make
- La base de datos que necesito: cómo estructurar las tablas para gestionar ideas, borradores, publicaciones programadas, métricas y el registro de aprendizaje
- El sistema de colas para gestionar la publicación asíncrona sin race conditions

Dame código Python funcional para los componentes principales:
- Una clase ContentGenerator que use la API de Claude para generar contenido adaptado a cada plataforma dado un tema, tono de marca y constraints de formato (longitud, hashtags, emojis)
- Una clase PlatformAdapter que transforme el contenido base en el formato específico de cada red: thread para X, carrusel descripción para Instagram, post largo para LinkedIn, guion para TikTok
- Una función schedule_optimal_time que use datos históricos de engagement para determinar el mejor horario de publicación por plataforma y audiencia
- Un webhook handler que reciba métricas de rendimiento de las plataformas y las almacene para el análisis

Profundiza en el sistema de control de calidad automatizado:
- Cómo usar IA para evaluar si el contenido generado cumple con las guidelines de la marca antes de publicar
- Cómo detectar automáticamente contenido potencialmente problemático: temas sensibles, errores factuales obvios, violaciones de las políticas de las plataformas
- Cómo diseñar el proceso de aprobación human-in-the-loop para contenido de alto riesgo

Finalmente, diseña el dashboard de analytics: qué métricas consolidar de todas las plataformas, cómo usar IA para identificar patrones de éxito en el contenido publicado y generar insights accionables para mejorar la estrategia de contenido semana a semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir pipeline técnico de generación y publicación automatizada de contenido en redes sociales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño visual de contenido trending para Reels y TikTok con IA',
                'description'      => 'Crea sistemas de identidad visual adaptados a los formatos trending de vídeo corto usando IA para mantener coherencia de marca y máximo engagement.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte y diseñador especializado en contenido visual para redes sociales, con profundo conocimiento de los formatos de vídeo corto y las tendencias visuales que generan más engagement en TikTok, Instagram Reels y YouTube Shorts. Quiero que me ayudes a crear un sistema de identidad visual para contenido viral que sea reconocible, escalable y adaptable a las tendencias en constante cambio.

**El reto del diseño para contenido viral:**
El contenido que se vuelve viral en las plataformas de vídeo corto en 2024 tiene características visuales muy específicas: debe capturar la atención en menos de medio segundo, comunicar el mensaje aunque el sonido esté silenciado, y verse bien tanto en pantalla completa de móvil como en la miniatura del feed. Al mismo tiempo, debe ser reconocible como parte de tu marca para construir audiencia fiel.

**Lo que necesito que diseñes conmigo:**

Primero, analiza los elementos visuales que hacen que un vídeo corto se detenga en el scroll:
- Composición en los primeros fotogramas: reglas de encuadre, uso del espacio negativo, posición del sujeto principal según los datos de eye-tracking de las plataformas
- Paletas de color que funcionan en móvil: contraste óptimo, colores que funcionan en modo oscuro y claro, cómo usar el color como señal de urgencia o categoría temática
- Tipografía en vídeo: familias que se leen en 0,5 segundos, tamaños mínimos según el tamaño de pantalla más pequeño, animaciones de texto que aumentan la retención
- El papel del movimiento en los primeros dos segundos: qué tipos de movimiento de cámara, transición o animación generan más curiosidad

Segundo, diseña un sistema de plantillas visuales para mi contenido:
- Tres estilos visuales diferenciados para tres tipos de contenido: educativo/tutorial, entretenimiento/humor, y testimonial/caso de éxito. Para cada estilo describe paleta de color, tipografía, elementos gráficos recurrentes y estructura de pantalla
- Cómo crear una biblioteca de elementos visuales reutilizables que mantenga coherencia sin que el contenido parezca repetitivo
- Reglas de composición para los cinco formatos más frecuentes: talking head, screencast, B-roll con texto superpuesto, carrusel animado y transición trend

Tercero, explícame cómo usar IA generativa en el flujo de diseño de contenido:
- Qué herramientas de IA generativa de imagen usar para qué tipo de asset: fondos, ilustraciones, thumbnails, elementos decorativos
- Cómo usar IA para adaptar rápidamente el mismo diseño a los distintos formatos y ratios de cada plataforma (9:16, 1:1, 16:9)
- Cómo mantener la coherencia de marca cuando usas IA generativa: qué prompts y parámetros usar para que los assets generados sean consistentes con tu estilo visual

Cuarto, dame una guía de accesibilidad visual para contenido en redes: subtítulos correctamente formateados, contraste mínimo para texto, alternativas para content que depende del color, y cómo el diseño accesible también mejora la retención en audencias con sonido desactivado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear sistema de identidad visual escalable para contenido de vídeo corto viral en redes sociales',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Convertir seguidores en clientes usando contenido viral con IA',
                'description'      => 'Diseña una estrategia de social selling que use contenido viral como entrada del funnel para convertir audiencia en ventas reales.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en social selling y estrategia de ventas a través de contenido en redes sociales. Quiero construir un sistema completo que transforme la audiencia que genera el contenido viral en clientes reales, usando IA para personalizar la comunicación y optimizar el proceso de conversión en cada etapa del funnel.

**El problema que quiero resolver:**
Muchos creadores de contenido tienen miles de seguidores pero muy poca conversión a ventas. El contenido viral atrae audiencia, pero sin una estrategia de conversión bien diseñada, esa audiencia se queda en espectadores pasivos. Quiero usar la IA para crear puentes entre el contenido que consume mi audiencia y la decisión de compra.

**Lo que necesito que construyas:**

Primero, diseña el funnel de conversión desde seguidor hasta cliente:
- Cómo convertir visualizaciones de contenido viral en seguidores (el primer paso: qué CTA poner en vídeos virales para capturar a la gente interesada)
- Cómo convertir seguidores en suscriptores de email o comunidad cerrada (el segundo paso: qué lead magnet usar para cada tipo de audiencia y cómo anunciarlo en el contenido)
- Cómo nutrir a los suscriptores con contenido de mayor valor hasta que estén listos para comprar (el tercer paso: la secuencia de emails y contenido privado)
- Cómo convertir leads nutridos en compradores (el cuarto paso: qué tipo de oferta, cómo presentarla, qué objeciones anticipar)

Segundo, crea scripts de venta para los momentos de conversión específicos de redes sociales:
- El guion para los últimos 15 segundos de un Reel educativo que presenta naturalmente un producto o servicio sin que parezca publicidad
- El mensaje directo (DM) de bienvenida automatizado para nuevos seguidores que inicia una conversación y califica el interés
- El script de la historia de Instagram o video de TikTok que presenta una oferta de forma auténtica usando la estructura problema-agitación-solución
- El email de bienvenida para nuevos suscriptores que llegaron desde contenido viral: cómo conectar el tema del contenido que los trajo con la oferta de negocio

Tercero, diseña el sistema de seguimiento y personalización con IA:
- Cómo usar IA para segmentar la audiencia según el contenido que consumen y las preguntas que hacen en comentarios y DMs
- Cómo personalizar el mensaje de venta según el segmento: qué ángulo de la oferta presentar a cada tipo de persona
- Cómo usar las señales de comportamiento en redes (likes, comentarios, compartidos, guardados, clics en bio) para priorizar a quién contactar primero

Cuarto, dame un sistema de seguimiento de resultados: cómo rastrear qué piezas de contenido viral generan más leads y ventas (no solo visualizaciones), cómo calcular el ROAS del tiempo invertido en creación de contenido, y cómo usar IA para identificar qué temas de contenido tienen mayor potencial de conversión para tu oferta específica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir audiencia de contenido viral en redes sociales en clientes mediante social selling con IA',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Growth loops de contenido viral para producto digital con IA',
                'description'      => 'Diseña loops de crecimiento viral para un producto digital usando contenido en redes sociales como motor de adquisición orgánica.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en growth hacking y product-led growth con especialización en estrategias de contenido viral para productos digitales. Quiero diseñar un sistema de growth loops donde el contenido en redes sociales genere nuevos usuarios que a su vez creen más contenido, creando un ciclo virtuoso de crecimiento orgánico y exponencial.

**El concepto de growth loops virales:**
Un growth loop viral es un sistema donde cada nuevo usuario adquirido tiene la posibilidad de traer más usuarios, ya sea compartiendo contenido generado en el producto, invitando a otros, o simplemente haciendo visible el producto en sus redes. La IA puede potenciar estos loops haciendo que el contenido generado sea más atractivo y reduciendo la fricción para compartirlo.

**Lo que necesito que diseñes:**

Primero, analiza los tipos de growth loops de contenido viral que funcionan mejor para productos digitales:
- El loop de contenido generado por el usuario (UGC): cómo diseñar el producto para que genere momentos compartibles de forma natural (resultados llamativos, comparaciones antes/después, logros alcanzados, estadísticas sorprendentes del uso)
- El loop de referidos con incentivo de contenido: cómo integrar el sistema de referidos con la creación de contenido (ej: "Invita a un amigo y ambos consiguen acceso a la plantilla premium, que además está diseñada para compartirse en redes")
- El loop de comunidad y reto viral: cómo crear challenges o retos alrededor del producto que incentiven la participación masiva

Segundo, diseña para mi producto los momentos de product virality:
- Qué momentos dentro del flujo del producto son los más naturales para compartir en redes (el momento "wow", el momento de logro, el momento de resultado)
- Cómo diseñar la experiencia de compartir para que sea tan sencilla que la fricción no mate la intención (un toque para generar la imagen compartible, template pre-diseñado con los datos del usuario, deep link que lleva de vuelta al producto)
- Cómo usar IA para personalizar el contenido compartible: que cada usuario tenga una imagen o texto único con sus datos reales, no una plantilla genérica

Tercero, dame la estrategia de contenido de marca que amplifica los loops:
- Qué tipo de contenido debe crear el equipo de marketing para cebar cada loop: cómo generar los primeros ejemplos que inspiren a los usuarios a participar
- Cómo usar IA para identificar y amplificar el mejor UGC: sistemas de detección de contenido de usuarios sobre el producto, proceso de reutilización y cómo agradecer y crear comunidad alrededor de los creadores
- Cómo coordinar la estrategia de contenido del equipo con los momentos de mayor actividad viral del producto

Cuarto, diseña el sistema de medición de virality:
- Cómo calcular el coeficiente viral (K factor) de tu producto y qué métricas intermedias medir para entender dónde se rompe el loop
- Cómo usar IA para predecir qué usuarios tienen más probabilidad de convertirse en amplificadores y cómo activarlos
- Qué experimentos diseñar para mejorar progresivamente el coeficiente viral: qué probar primero, cómo medir el impacto y cómo iterar en el diseño de los momentos compartibles

Incluye ejemplos de productos digitales que han ejecutado estos loops con éxito (Spotify Wrapped, Canva, Notion) y qué podemos aprender de cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar growth loops virales basados en contenido para acelerar la adquisición orgánica de un producto digital',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding viral en redes sociales con IA',
                'description'      => 'Construye una estrategia de employer branding con contenido viral que atraiga talento y posicione la empresa como empleador deseable.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en employer branding y comunicación de RRHH con especialización en estrategia de contenido en redes sociales. Quiero construir una estrategia de employer branding que use contenido viral para posicionar a nuestra empresa como un empleador de referencia, atraer talento de forma orgánica y reducir el coste de adquisición de candidatos.

**El contexto de la empresa:**
Somos una empresa tech de tamaño medio (200-500 empleados) que compite por talento con grandes corporaciones y startups con más recursos de marketing. Necesitamos diferenciarnos a través de la autenticidad de nuestra cultura y las historias reales de nuestros empleados, usando la IA para escalar la producción de contenido sin perder el toque humano.

**Lo que necesito que diseñes:**

Primero, define la estrategia de contenido de employer branding para cada plataforma:
- LinkedIn: tipo de contenido que mejor funciona para employer branding (historias de carrera, behind the scenes, datos de cultura, logros de equipo), frecuencia óptima, estructura de los posts que generan más engagement en el contexto de captación de talento
- TikTok e Instagram Reels: cómo adaptar el employer branding a formatos de vídeo corto sin perder autenticidad, qué temas resuenan con talento millennial y Gen Z (work-life balance, desarrollo profesional, impacto social, ambiente de equipo)
- Twitter/X: cómo usar el formato para conversaciones sobre cultura de empresa, tecnología y pensamiento del liderazgo que atraigan a perfiles técnicos senior

Segundo, diseña el programa de employee advocacy con IA:
- Cómo identificar y activar a los embajadores naturales dentro de la empresa: empleados con audiencia relevante o con historias particularmente atractivas para el talento objetivo
- Cómo usar IA para ayudar a empleados no-comunicadores a crear contenido auténtico sobre su trabajo y experiencia en la empresa sin que suene corporativo
- Qué incentivos y reconocimiento crear para mantener la participación del programa a largo plazo
- Cómo gestionar los riesgos: qué guidelines dar a los empleados embajadores para que el contenido sea auténtico pero no perjudique a la empresa

Tercero, crea una biblioteca de formatos de contenido de employer branding que puedas producir consistentemente:
- El "día en la vida de" para diferentes roles: cómo estructurarlo para que sea auténtico y atractivo para candidatos de ese perfil
- El antes/después de carrera: cómo presentar el crecimiento profesional de empleados de forma que sea inspiradora para candidatos
- Los datos de cultura: cómo presentar información sobre beneficios, política de trabajo remoto, diversidad e inclusión de forma que sea creíble y no parezca propaganda corporativa
- Los retos del trabajo: cómo mostrar honestamente los aspectos difíciles del trabajo en la empresa de forma que atraiga a candidatos que valoran esos retos específicos

Cuarto, dame un plan de medición del impacto: cómo rastrear que el contenido de employer branding está trayendo candidatos de mayor calidad, cómo medir el cambio en el número de candidatos inbound, el coste de adquisición de candidato y la calidad de los candidatos atraídos por canal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear estrategia de employer branding con contenido viral para atraer talento de forma orgánica',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Contenido financiero viral y educativo en redes con IA',
                'description'      => 'Crea una estrategia de finanzas personales e inversión en redes sociales usando IA para explicar conceptos complejos de forma viral y cumplir con la regulación.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación financiera y creación de contenido educativo sobre finanzas personales e inversión en redes sociales. Quiero crear una estrategia de contenido financiero viral que sea riguroso, útil para la audiencia y compatible con la regulación financiera, usando IA para escalar la producción sin perder calidad ni precisión.

**El reto del contenido financiero viral:**
Las finanzas son uno de los temas con mayor audiencia potencial en redes sociales (todo el mundo quiere aprender a gestionar mejor su dinero) pero también uno de los más difíciles de comunicar: los conceptos son complejos, la regulación es estricta sobre qué se puede y no se puede decir, y el umbral de confianza que necesita el espectador es alto antes de actuar sobre el consejo.

**Lo que necesito que construyas:**

Primero, diseña la estrategia de contenido financiero para cada plataforma:
- Para TikTok e Instagram Reels: cómo simplificar conceptos financieros complejos en vídeos de 30-60 segundos que sean precisos pero accesibles. Dame diez temas de alta demanda y el ángulo de presentación que los haría virales sin sacrificar rigor
- Para YouTube: cómo crear contenido de mayor profundidad (10-20 minutos) sobre finanzas personales e inversión que posicione como autoridad y construya audiencia fiel
- Para LinkedIn: cómo crear contenido financiero B2B que llegue a profesionales y empresarios con contenido sobre planificación fiscal, gestión de tesorería y finanzas corporativas

Segundo, crea una biblioteca de 15 hooks de apertura específicos para contenido financiero:
- Hooks basados en datos sorprendentes sobre dinero e inversión
- Hooks basados en errores financieros comunes que la audiencia puede estar cometiendo
- Hooks basados en oportunidades que la mayoría desconoce
- Hooks basados en desmitificar creencias populares sobre finanzas

Para cada hook incluye el texto exacto, la emoción que activa y cómo continuarlo de forma que mantenga la retención.

Tercero, diseña el marco de cumplimiento regulatorio para contenido financiero:
- Qué disclaimers son obligatorios y cómo integrarlos de forma que no destruyan el engagement del contenido
- Qué tipos de afirmaciones están prohibidas para quien no tiene licencia de asesor financiero y cómo reformularlas para ser útiles sin ser asesoramiento
- Cómo presentar información sobre productos de inversión concretos (ETFs, criptomonedas, inmobiliario) de forma educativa sin cruzar la línea del asesoramiento

Cuarto, dame una guía de monetización del contenido financiero para creadores: cómo generar ingresos a través del contenido financiero de forma ética (afiliación, cursos, comunidad premium, colaboraciones con fintechs) sin comprometer la confianza de la audiencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear contenido financiero educativo y viral en redes sociales cumpliendo la regulación',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicación legal accesible en redes sociales con IA',
                'description'      => 'Crea contenido jurídico educativo que sea viral, comprensible para el ciudadano y legalmente responsable usando IA como asistente de redacción.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación jurídica y marketing legal con experiencia en creación de contenido educativo sobre derecho en redes sociales. Quiero construir una estrategia de contenido legal que sea viral, útil para el ciudadano común, y que posicione a un bufete o abogado individual como referente de confianza en su área de especialización.

**El reto del contenido legal viral:**
El derecho es uno de los campos donde el ciudadano tiene más necesidad de información pero menos acceso comprensible a ella. El lenguaje jurídico es opaco, los procedimientos son complejos y el miedo a cometer errores legales es universal. Esto crea una oportunidad enorme para el abogado que sea capaz de comunicar de forma clara, útil y accesible, pero exige un cuidado extremo para no cruzar la línea entre educación y asesoramiento jurídico.

**Lo que necesito que diseñes:**

Primero, define la estrategia de contenido legal por plataforma y tipo de derecho:
- Para derecho laboral: los temas que más busca el trabajador y el empresario (despidos, contratos, derechos del trabajador, conflictos laborales) y cómo presentarlos de forma que sean útiles sin constituir asesoramiento
- Para derecho de familia: cómo tratar temas sensibles (divorcios, custodia, herencias, violencia doméstica) con la delicadeza que requieren mientras se genera engagement
- Para derecho mercantil y startups: cómo llegar a emprendedores con contenido sobre contratos, sociedad limitada, protección de la propiedad intelectual y financiación

Segundo, crea el framework de contenido legal educativo que sea viral y responsable:
- La estructura de vídeo corto para explicar un concepto legal: cómo empezar con el problema cotidiano del ciudadano antes de explicar el concepto jurídico
- Cómo usar casos reales o ficticiorizados para ilustrar principios legales de forma que sean memorables y compartibles
- Los formatos que funcionan mejor para contenido legal: el "mito vs realidad legal", el "qué dice la ley sobre...", el "tus derechos cuando...", el "error legal que cometen la mayoría"
- Cómo mantener el disclaimer de que el contenido es educativo y no asesoramiento sin que parezca una coletilla que nadie lee

Tercero, diseña con IA el proceso de producción de contenido legal:
- Cómo usar IA para hacer research legal actualizado y verificar la legislación vigente antes de publicar
- Cómo usar IA para adaptar textos jurídicos complejos a lenguaje comprensible para el ciudadano sin perder precisión
- Cómo crear un banco de contenido legal evergreen que no se quede obsoleto con los cambios legislativos y cómo usar IA para actualizarlo cuando hay cambios relevantes

Cuarto, dame una estrategia para convertir audiencia en consultas: cómo usar el contenido educativo como entrada del funnel, cómo cualificar los leads que llegan desde redes (no todos los que preguntan son clientes potenciales), y cómo diseñar la primera consulta gratuita para convertir al máximo de leads calificados en clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear contenido legal educativo y viral en redes sociales para posicionar bufetes y abogados como referentes',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Contenido viral de soporte al cliente que genera confianza con IA',
                'description'      => 'Transforma las interacciones de atención al cliente en contenido educativo viral que reduce tickets y construye confianza de marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer success y estrategia de contenido que ha trabajado convirtiendo las operaciones de soporte al cliente en activos de marketing. Quiero usar la IA para transformar las interacciones más frecuentes con clientes en contenido educativo que se vuelva viral, reduzca el volumen de tickets y construya una comunidad de usuarios más autosuficientes y más fieles a la marca.

**El concepto de "support content flywheel":**
Cada ticket de soporte que recibes es una señal de que hay información que tus clientes necesitan y no encuentran fácilmente. Si conviertes esas preguntas en contenido público accesible y compartible, reduces tickets futuros, demuestras expertise y atraes nuevos clientes que ven que tratas bien a tu comunidad.

**Lo que necesito que diseñes:**

Primero, el sistema de identificación y priorización de contenido:
- Cómo analizar el histórico de tickets con IA para identificar las preguntas más frecuentes, los temas que generan más frustración y los momentos del ciclo de vida del cliente donde aparecen
- Cómo priorizar qué preguntas convertir en contenido primero: el cruce entre volumen de tickets, impacto en la satisfacción del cliente y potencial viral del tema
- Cómo clasificar automáticamente los tickets por tema y urgencia usando IA para alimentar continuamente el pipeline de contenido

Segundo, diseña los formatos de contenido de soporte que funcionan mejor en cada canal:
- Tutoriales en vídeo para funcionalidades complejas: cómo estructurarlos para que sean fáciles de encontrar, fáciles de seguir y propensos a ser compartidos por usuarios satisfechos
- FAQs conversacionales en formato de vídeo corto: cómo responder las preguntas más frecuentes en 30-60 segundos de forma que sea útil para el cliente actual y atractivo para el cliente potencial que los ve en redes
- Documentación interactiva con IA: cómo crear una base de conocimiento que use IA para dar respuestas personalizadas según el contexto del usuario en lugar de artículos genéricos

Tercero, diseña la estrategia de distribución del contenido de soporte:
- Cómo integrar el contenido de soporte en el flujo de atención al cliente: que el agente o el chatbot sugiera el contenido relevante antes de escalar a respuesta manual
- Cómo publicar el contenido en redes sociales de forma que sea útil para clientes actuales y atractivo para nuevos clientes (el "mira cómo resolvemos esto" como señal de calidad de servicio)
- Cómo construir una comunidad de usuarios donde el contenido de soporte sea el punto de partida de conversaciones y donde los propios usuarios se ayuden entre sí

Cuarto, dame el sistema de medición del impacto: cómo medir la reducción de tickets gracias al contenido, el impacto en el CSAT de los clientes que consumen el contenido antes de contactar con soporte, y el impacto en la adquisición de nuevos clientes que descubren la marca a través del contenido de soporte en redes sociales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir operaciones de soporte al cliente en contenido educativo viral que reduce tickets y fideliza',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Personal branding viral en redes para freelancers con IA',
                'description'      => 'Construye una marca personal poderosa en redes sociales usando IA para crear contenido consistente que atraiga clientes de alta calidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en personal branding y estrategia de contenido para profesionales independientes y freelancers. Quiero que me ayudes a construir una marca personal potente en redes sociales usando inteligencia artificial para crear contenido consistente y auténtico que me posicione como referente en mi nicho y atraiga clientes de calidad de forma orgánica.

**El reto del freelancer en redes sociales:**
Como freelancer, compites con agencias, empresas y miles de otros independientes. La única forma de diferenciarte de forma sostenible es construir una marca personal reconocible, con un punto de vista claro y un contenido que demuestre tu expertise mejor que cualquier portfolio estático. El problema es que crear contenido consistente requiere tiempo que muchos freelancers no tienen. La IA es la solución para escalar la creación de contenido sin perder autenticidad.

**Lo que necesito que diseñes:**

Primero, ayúdame a definir mi propuesta de valor como marca personal:
- Cómo usar IA para hacer un análisis de posicionamiento: qué espacio existe en mi nicho que no está bien cubierto, cuál es mi perspectiva única que me diferencia de otros expertos, y cuál es la audiencia específica que más se beneficia de mi contenido
- Cómo articular mi punto de vista diferenciador en una frase que explique qué creo yo sobre mi campo que no todo el mundo acepta (mi "content hill to die on")
- Cómo definir mi voz y tono de marca: el balance entre expertise y accesibilidad, entre personal y profesional, entre enseñar y entreter

Segundo, diseña el sistema de producción de contenido con IA:
- El método de batching: cómo dedicar cuatro horas a la semana para producir todo el contenido de la semana usando IA como co-creador, con un proceso paso a paso desde la lluvia de ideas hasta el contenido listo para publicar
- Cómo usar IA para repurposing: convertir un artículo largo en cinco tweets, tres historias, un Reel y un post de LinkedIn con un solo flujo de trabajo
- Cómo crear un banco de ideas siempre lleno: qué señales monitorizar (comentarios de clientes, preguntas frecuentes, conversaciones del sector, debates en LinkedIn) y cómo usar IA para convertirlas en ideas de contenido

Tercero, diseña la estrategia de crecimiento de audiencia como freelancer:
- Cómo crear contenido que atraiga específicamente al tipo de cliente con el que quieres trabajar (no a cualquier audiencia, sino a tu cliente ideal)
- Qué tipos de contenido construyen autoridad y cuáles construyen comunidad, y cuál es el ratio óptimo entre ambos para un freelancer que quiere atraer clientes
- Cómo usar las colaboraciones con otros creadores o profesionales para crecer más rápido sin perder tiempo excesivo en networking

Cuarto, dame el sistema para convertir audiencia en clientes de forma elegante:
- Cómo hablar de tu trabajo y tus servicios en redes sin que parezca venta agresiva, usando el contenido de valor como contexto
- Cómo diseñar el perfil y la bio de cada plataforma para que el cliente potencial que llega sepa en 10 segundos qué haces, para quién y cómo puede trabajar contigo
- Los tres o cuatro tipos de contenido que tienen el mayor ratio de conversión a consultas para un freelancer y cómo crearlos con IA
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir marca personal viral en redes con IA para atraer clientes de calidad como freelancer',
                'vote_score'       => 48,
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
