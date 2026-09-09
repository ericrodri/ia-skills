<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills146Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para creativos y artistas',
                'description'      => 'Promueve músicos, artistas, escritores o creadores de contenido: las estrategias que construyen audiencia antes de que haya producto que vender.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing especializado en la industria creativa con experiencia trabajando con músicos, artistas visuales, escritores, fotógrafos y creadores de contenido digital. Voy a describirte mi proyecto creativo y necesito una estrategia de marketing personalizada.

Mi proyecto: [DESCRIBE: qué tipo de creador eres, qué produces, dónde estás ahora mismo (sin audiencia / audiencia pequeña / en crecimiento), tus objetivos en los próximos 12 meses y si buscas monetización directa, contratos con marcas, lanzamiento de producto o reconocimiento de industria]

**El problema central del marketing creativo: audiencia antes que producto**

La mayoría de los creadores invierten meses o años en perfeccionar su obra antes de pensar en cómo llegarla a su público. El resultado: un lanzamiento magnífico al vacío. Explícame por qué la construcción de audiencia debe ser paralela (y no posterior) a la creación, y cómo puedo empezar a construir una base de seguidores que espere con anticipación lo que voy a lanzar.

**El contenido detrás del contenido**

El mayor activo de marketing de un creador no es el producto terminado sino el proceso de creación. Diseña para mí una estrategia de contenido "making of" que incluya: el diario de creación (lo que no se puede copiar, lo que humaniza y lo que genera expectativa), los errores y los fracasos como contenido honesto, las decisiones creativas y sus razones (que revelan criterio y punto de vista), y las colaboraciones y referencias que amplían mi alcance.

**Las plataformas correctas para mi tipo de obra**

Para mi perfil específico, analiza en qué plataformas debo estar (y en cuáles no) y con qué estrategia en cada una:
- Instagram y TikTok: los formatos que funcionan para arte visual vs música vs escritura. La diferencia entre el contenido de proceso y el contenido de resultado.
- YouTube: el canal de largo plazo que construye autoridad. Las series que funcionan para creadores independientes.
- Substack, newsletter o Patreon: el canal de relación directa con la audiencia más comprometida que no depende de algoritmos.
- Spotify for Artists, Bandcamp, Behance, Goodreads: las plataformas verticales específicas de mi disciplina.
- LinkedIn: cuándo tiene sentido para un creativo y cuándo es un error de posicionamiento.

**La comunidad como estrategia**

Los creadores que más crecen no acumulan seguidores, construyen comunidades. Diseña para mí la estrategia de comunidad: el espacio donde mi audiencia se reúne (Discord, grupo de Telegram, foro privado, eventos presenciales), las dinámicas que mantienen la comunidad activa, cómo involucro a los fans en el proceso creativo sin perder el control artístico, y cómo convierto a los fans más comprometidos en embajadores.

**El lanzamiento creativo**

La diferencia entre un artista que lanza en silencio y uno que genera expectativa antes del lanzamiento. Diseña un playbook de lanzamiento para mi próxima obra que incluya: la fase de anticipación (cuántas semanas antes, qué revelar y qué guardar), el día del lanzamiento (la estrategia de presencia simultánea en múltiples canales), la semana post-lanzamiento (el momentum y cómo aprovecharlo), y el largo plazo (cómo sigo generando descubrimiento meses después del lanzamiento).

**Colaboraciones estratégicas**

Las colaboraciones con otros creadores aceleran el crecimiento de forma que la publicidad pagada no puede replicar. Cómo identifico a los colaboradores correctos (ni demasiado grandes ni demasiado pequeños), qué tipos de colaboración tienen más sentido para mi disciplina, y cómo propongo una colaboración que sea atractiva para alguien que no me conoce.

Dame un plan de 90 días con acciones semanales específicas para construir mi audiencia desde donde estoy ahora.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar una estrategia de marketing y construcción de audiencia para un creativo o artista independiente',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas de contenido digital',
                'description'      => 'Construye plataformas de streaming, distribución de música o publicación digital: los retos técnicos del contenido digital a escala.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en plataformas de contenido digital con experiencia en streaming de vídeo, distribución de música, publicación digital y plataformas para creadores. Voy a describerte el producto que quiero construir y necesito tu análisis técnico completo.

Mi proyecto: [DESCRIBE: qué tipo de plataforma de contenido quieres construir, el tipo de contenido (vídeo, audio, texto, imágenes, mixto), el modelo de negocio (suscripción, pago por contenido, publicidad, freemium), el tamaño de audiencia esperado en los primeros 12 meses y el stack tecnológico que ya manejas o prefieres]

**La arquitectura de distribución de contenido**

El primer problema técnico en una plataforma de contenido es llevar el archivo correcto al usuario correcto en el menor tiempo posible. Explícame en detalle:

CDN (Content Delivery Network): cómo funciona la distribución geográfica, cuándo necesito multi-CDN vs un solo proveedor, las diferencias entre Cloudflare, AWS CloudFront, Fastly y Bunny.net para contenido de entretenimiento. Los trade-offs entre coste, latencia y disponibilidad según mi escala.

Streaming adaptativo: los protocolos HLS y MPEG-DASH, cómo funciona el bitrate adaptativo que sube o baja la calidad según el ancho de banda del usuario, y cuándo usar streaming progresivo vs streaming real. Para audio: los formatos y bitrates que balancean calidad y consumo de datos.

El pipeline de procesamiento de contenido: cuando un creador sube un archivo de 4K, qué pasa hasta que está disponible para reproducirse. La transcoding pipeline (FFmpeg, AWS MediaConvert, Mux, Cloudflare Stream), la generación de thumbnails y previews, la extracción de metadatos y el almacenamiento en múltiples formatos y resoluciones.

**Gestión de derechos digitales (DRM)**

Si necesito proteger contenido de pago: los sistemas DRM disponibles (Widevine de Google, FairPlay de Apple, PlayReady de Microsoft), la necesidad de implementar múltiples DRM para cubrir todos los dispositivos, los servicios que simplifican la implementación (Bitmovin, EZDRM, Axinom) y el equilibrio entre protección y experiencia de usuario.

**La base de datos de contenido**

El modelo de datos de una plataforma de contenido es más complejo de lo que parece: la jerarquía de contenido (artista → álbum → canción; canal → serie → episodio; autor → libro → capítulo), la gestión de versiones y actualizaciones de contenido, los metadatos estructurados y no estructurados, el soporte multilingüe y de subtítulos, y las relaciones entre contenido (canciones similares, episodios relacionados, playlists) que alimentan las recomendaciones.

**Recomendaciones y descubrimiento**

El algoritmo de recomendación es el producto en una plataforma de contenido. Dame una guía de implementación progresiva: desde el filtrado colaborativo simple hasta los modelos de deep learning, cuándo construir vs cuándo usar un servicio de terceros (Amazon Personalize, Google Recommendations AI), y las métricas que indican que mi sistema de recomendación funciona.

**Monetización técnica**

La implementación técnica de los modelos de monetización: la arquitectura de paywall que protege el contenido de pago, la integración con pasarelas de pago para suscripciones recurrentes, el sistema de reporting de streams para el pago de royalties a creadores, y la integración con redes publicitarias (VAST/VPAID para pre-rolls de vídeo, DAI para inserción dinámica de anuncios).

**Escalabilidad y costes**

Diseña la arquitectura que escala con mi crecimiento: qué servicios managed uso desde el principio para no reinventar la rueda, en qué momento tiene sentido construir infraestructura propia, y cómo estimo el coste de distribución de contenido por usuario activo mensual a 10K, 100K y 1M de usuarios.

Dame un diagrama de arquitectura descrito en texto y el stack tecnológico recomendado para mi caso específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la arquitectura técnica de una plataforma de distribución de contenido digital (streaming, música, publicaciones)',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para el entretenimiento',
                'description'      => 'Diseña identidad visual, interfaces y experiencias para marcas de entretenimiento: los principios que diferencian el diseño de entretenimiento del corporativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de arte con especialización en identidad visual y diseño de experiencias para la industria del entretenimiento: música, cine, videojuegos, deportes, eventos y cultura popular. Tengo un proyecto de entretenimiento y necesito orientación completa sobre la dirección de diseño.

Mi proyecto: [DESCRIBE: qué tipo de marca o producto de entretenimiento es (artista musical, productora, plataforma, evento, videojuego, serie, festival), el público objetivo, el posicionamiento que buscas (mainstream vs underground, familiar vs adulto, premium vs accesible) y cualquier referencia visual que ya tengas]

**Por qué el diseño de entretenimiento es fundamentalmente diferente**

El diseño corporativo comunica confianza, credibilidad y profesionalidad. El diseño de entretenimiento comunica emoción, pertenencia, identidad y un mundo propio. Explícame las diferencias de enfoque en:

La jerarquía de valores: en entretenimiento, la coherencia emocional supera a la funcionalidad. Una identidad visual de entretenimiento que "funciona" pero no emociona ha fallado.

El concepto de mundo: las mejores marcas de entretenimiento no tienen una identidad visual, tienen un universo. Cómo se construye ese universo: la paleta de colores que evoca un estado emocional, la tipografía que tiene personalidad propia, los elementos gráficos que son reconocibles incluso sin el logo, y el lenguaje visual que los fans aprenden a amar.

La adaptabilidad extrema: la identidad de entretenimiento tiene que funcionar en un póster de 3x6 metros, en un avatar de 32x32 píxeles, en una camiseta, en la portada de Spotify, en el stage design de un concierto y en un story de Instagram. Esta exigencia de adaptabilidad es mayor que en cualquier otra industria.

**Los sistemas de identidad visual para entretenimiento**

Diseña para mi proyecto el sistema de identidad completo:

El logo y sus variantes: el logo principal, la versión simplificada para contextos pequeños, el símbolo o monograma que funciona solo, y las reglas de uso del color (versión oscura, versión clara, versión para fondos de color).

La paleta de colores emocional: cómo elijo los colores primarios y secundarios para evocar las emociones correctas en mi audiencia específica. La diferencia entre los colores que dominan el entretenimiento mainstream (energía roja, tech azul, naturaleza verde) y cómo diferenciarte con colores que se adueñan de un espacio emocional propio.

La tipografía con carácter: las fuentes que tienen personalidad vs las que son funcionales. Cuándo diseñar una tipografía exclusiva y cuándo adaptar una existente. Los trucos de tratamiento tipográfico que dan carácter a una fuente estándar.

Los elementos gráficos propios: los patrones, texturas, ilustraciones o elementos decorativos que hacen que tu marca sea reconocible incluso sin el logo.

**Diseño de interfaces para entretenimiento**

Las interfaces digitales de entretenimiento tienen un diseño diferente al software corporativo: el dark mode como default (la sala oscura del cine, la experiencia inmersiva), el contenido como protagonista (el arte manda, la UI sirve), la animación y el movimiento como parte integral de la experiencia, y las microinteracciones que hacen que cada clic se sienta especial.

**Aplicaciones del diseño de entretenimiento**

Guíame en la aplicación de mi identidad a: material promocional y pósters de evento, portadas de álbum o carátulas de producto, diseño de escenario y experiencia física, merchandising y ropa, y redes sociales con templates que pueden producir personas no diseñadoras sin perder la coherencia.

Dame un brief creativo completo para mi proyecto con moodboard descrito en texto, paleta de colores con sus valores hex aproximados, referencias de estilo y los tres principios de diseño que deben guiar todas las decisiones visuales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Desarrollar la identidad visual y el sistema de diseño para una marca o producto de la industria del entretenimiento',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de derechos y licencias',
                'description'      => 'Licencia contenido, propiedades intelectuales o tecnología: los contratos de licencia, la negociación de royalties y la distribución de derechos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en ventas de derechos de propiedad intelectual con experiencia en la industria del entretenimiento, la tecnología y el contenido digital. Tengo una propiedad intelectual, contenido o tecnología que quiero licenciar y necesito entender el proceso completo de ventas y negociación.

Mi propiedad: [DESCRIBE: qué tienes para licenciar (música, personajes, software, marca, tecnología, contenido editorial, formato televisivo, etc.), a quién quieres licenciarlo, en qué territorios y si ya tienes experiencia previa con acuerdos de licencia]

**Los tipos de licencia y sus estructuras**

Explícame en detalle los diferentes tipos de acuerdos de licencia que puedo usar:

Licencia exclusiva vs no exclusiva: las implicaciones económicas y estratégicas de cada una. La exclusiva cierra el mercado a la competencia pero vale más. La no exclusiva permite más ingresos paralelos pero cada licencia vale menos. Cuándo negocio exclusividad y cuándo la evito.

Territorial: licencia global, por regiones (UE, LATAM, APAC) o por país. Cómo el territorio afecta al precio y cuándo tiene sentido dividir territorios entre múltiples licenciatarios.

Temporal: licencias perpetuas vs licencias a plazo (3 años, 5 años, con opción de renovación). El valor del tiempo en la negociación.

Por canal de uso: una misma canción puede tener licencias diferentes para sincronización en cine, para uso en publicidad, para streaming y para actuación en vivo. Cómo se estructura este ecosistema de licencias por uso.

**El precio de la licencia: cómo lo calculo**

Los modelos de precio en la venta de derechos:
- Royalty porcentual: el porcentaje sobre las ventas del licenciatario. La base de cálculo importa tanto como el porcentaje. El riesgo del royalty variable cuando el licenciatario no ejecuta.
- Advance contra royalties: el pago inicial que se descuenta de los royalties futuros. Cómo negocio un advance que sea justo para ambas partes y las condiciones de reversion si no se alcanzan los mínimos.
- Flat fee: pago único por el uso. Cuándo tiene sentido y cuándo es un error.
- Minimum guarantee: el mínimo garantizado anual independientemente de las ventas. La herramienta que protege al licenciante en acuerdos largos.

Cómo valoro mi propiedad intelectual: los comparables del mercado, el valor de la marca si existe, el historial de ingresos, y el valor estratégico para el licenciatario específico (que puede ser muy superior al valor de mercado).

**El proceso de venta de derechos**

Dame el proceso completo de principio a fin:
- Identificación de licenciatarios potenciales: quién necesita lo que tengo y cómo los encuentro
- El pitch de derechos: cómo presento mi propiedad, qué materiales necesito (lookbook, deck, demo, term sheet inicial)
- El letter of intent (LOI) o term sheet: el documento que captura los términos principales antes del contrato definitivo
- La due diligence del licenciatario: qué verifico antes de firmar (solidez financiera, capacidad de distribución, historial de cumplimiento)
- La negociación: los puntos más importantes a negociar y los que puedo ceder
- El contrato definitivo: las cláusulas que no pueden faltar

**Protección y enforcement**

Qué hago si el licenciatario incumple: los sistemas de auditoría de royalties, las cláusulas de terminación, cómo recupero mis derechos cuando hay incumplimiento, y el proceso de enforcement en jurisdicciones internacionales.

Dame un checklist de due diligence para evaluar a un licenciatario potencial y las cinco cláusulas que nunca debo omitir en un contrato de licencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Estructurar y negociar acuerdos de licencia para música, contenido, marcas o tecnología propia',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto para plataformas creativas',
                'description'      => 'Las decisiones de producto que crean plataformas donde los creadores quieren crear y los consumidores quieren consumir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager experto en plataformas de doble cara (two-sided marketplaces) para la industria creativa, con experiencia en productos como herramientas de creación, plataformas de distribución y comunidades de creativos. Estoy construyendo o mejorando una plataforma para creadores y necesito una guía estratégica completa.

Mi plataforma: [DESCRIBE: qué hace tu plataforma (herramienta de creación, marketplace de contenido, plataforma de distribución, comunidad), quiénes son tus dos o más grupos de usuarios, en qué estadio estás y los principales problemas que tienes ahora mismo]

**El problema del huevo y la gallina en plataformas creativas**

Las plataformas de doble cara tienen el problema clásico: los creadores no vienen sin consumidores y los consumidores no vienen sin creadores. En las plataformas creativas esto se agudiza porque los creadores necesitan tiempo para producir contenido de calidad. Explícame las estrategias para resolver el cold start problem en mi caso:

El lado al que atacar primero: por qué en la mayoría de plataformas creativas tiene más sentido arrancar con los creadores antes que con los consumidores, y cómo identifico a los "creadores semilla" que van a generar el contenido que atrae a los primeros consumidores.

La estrategia de lanzamiento focalizado: Airbnb empezó solo en NYC, Uber solo en San Francisco. ¿En qué dimensión debo enfocarme yo al principio (vertical de contenido, geografía, tipo de creador)?

El subsidio a los creadores en la fase inicial: qué incentivos (económicos, de visibilidad, de herramientas exclusivas) justifico para atraer a los creadores correctos antes de que la plataforma pueda ofrecerles una audiencia real.

**Las dos experiencias de producto que debo optimizar**

Una plataforma creativa es en realidad dos productos:

Para el creador: las herramientas de creación, publicación y monetización. La experiencia del creador debe minimizar la fricción de publicar, maximizar el control sobre su obra y ofrecer datos claros sobre el rendimiento. Las funcionalidades que más retienen a los creadores: analytics detallados, múltiples opciones de monetización, herramientas de comunidad con su audiencia, y la sensación de que la plataforma les da poder en lugar de quitárselo.

Para el consumidor: el descubrimiento, la calidad del contenido y la experiencia de consumo. Las funcionalidades que más retienen a los consumidores: un algoritmo de recomendación que mejora con el uso, la sensación de descubrir cosas antes que los demás, la posibilidad de seguir y relacionarse con los creadores.

El conflicto entre ambas experiencias: cuándo las necesidades del creador y del consumidor entran en tensión (por ejemplo: el creador quiere paywall, el consumidor quiere acceso libre) y cómo resuelvo ese conflicto sin perder a ninguno de los dos.

**Las métricas de una plataforma creativa**

Las métricas estándar de SaaS no capturan la salud de una plataforma creativa. Define para mí los KPIs correctos:
- Del lado del creador: publicaciones por creador activo mensual, retención de creadores a 6 meses, ingresos medios por creador (y distribución), tasa de creadores que consiguen superar el umbral de ingresos mínimo viable
- Del lado del consumidor: consumo por sesión y por mes, retención a 30/90 días, ratio de consumidores que siguen a al menos un creador
- De la plataforma: el ratio supply/demand, el match rate entre contenido y consumidores, el volumen de transacciones entre creadores y consumidores

**Las decisiones de monetización que definen la plataforma**

La estructura de comisiones, el modelo de pago a creadores (por stream, por suscriptor, por transacción) y las herramientas de monetización que ofrezco a los creadores (suscripciones de fans, tips, cursos, merchandise, NFTs) tienen un impacto enorme en qué tipo de creadores atrae la plataforma y qué tipo de contenido producen. Analiza las opciones para mi caso y sus implicaciones estratégicas a largo plazo.

Dame el roadmap de producto para los próximos dos trimestres con las iniciativas priorizadas para ambos lados de la plataforma.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar la estrategia de producto para una plataforma de doble cara orientada a creadores y consumidores de contenido',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento creativo',
                'description'      => 'Los creativos tienen necesidades diferentes: autonomía, reconocimiento y un entorno que protege su trabajo de la burocracia que los destruye.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de personas con experiencia gestionando equipos creativos en agencias, estudios, empresas de entretenimiento y departamentos de marketing de grandes empresas. Tengo a mi cargo un equipo creativo y necesito orientación para gestionarlo de manera que produzca su mejor trabajo sin destruirse en el proceso.

Mi equipo: [DESCRIBE: cuántas personas, qué disciplinas (diseñadores, copywriters, desarrolladores creativos, productores, directores de arte), qué tipo de proyectos hacen, cuál es el principal problema que tienes ahora mismo con el equipo]

**Por qué la gestión de creativos requiere un enfoque diferente**

Los mejores gestores de creativos entienden que la motivación intrínseca es el motor del trabajo creativo y que la gestión excesiva la destruye. Explícame los principios que deben guiar mi enfoque:

La autonomía como condición de excelencia: los creativos producen su mejor trabajo cuando sienten que las decisiones son suyas. Cómo diseño proyectos y procesos que les dan control real sobre las decisiones creativas, cuándo intervengo y cuándo me aparto.

El reconocimiento específico: el "buen trabajo" genérico no significa nada para un creativo. Qué tipo de reconocimiento funciona: el feedback que demuestra que entiendes el trabajo, la visibilidad interna y externa del trabajo del equipo, y el crédito explícito como parte del contrato emocional.

La protección de la burocracia: los creativos se matan cuando tienen que dedicar el 40% de su tiempo a reuniones innecesarias, aprobaciones kafkianas y procesos que no añaden valor. Mi trabajo como gestor es ser el escudo que absorbe esa burocracia para que el equipo pueda crear. Cómo identifico y elimino los procesos que matan la productividad creativa.

**El feedback creativo: la habilidad más crítica del gestor**

El feedback creativo mal dado destruye la confianza, paraliza al creativo y produce mediocridad. Dame un sistema de feedback creativo que incluya:
- La diferencia entre feedback de dirección (hacia dónde ir) y feedback de opinión personal (que casi nunca ayuda)
- El formato de brief creativo que elimina la mayoría de los problemas de alineación antes de que empiece el trabajo
- Cómo doy feedback negativo sin destruir la motivación ni el vínculo
- Cómo gestiono el feedback del cliente o stakeholder interno cuando es vago, contradictorio o destructivo
- Las reuniones de revisión de trabajo: cómo las estructuro para que sean constructivas

**Los procesos que funcionan en equipos creativos**

No todo proceso es malo. Hay procesos que protegen la calidad y la salud del equipo. Diseña para mí:
- El proceso de briefing que garantiza que el equipo entiende el problema antes de empezar a producir soluciones
- La revisión de trabajo intermedia que evita sorpresas en la entrega final
- La retrospectiva de proyecto que extrae aprendizajes sin señalar culpables
- La gestión de la carga de trabajo para evitar los ciclos de crunch que destruyen equipos enteros

**El reto del burnout creativo**

Los creativos son especialmente vulnerables al burnout porque trabajan con su identidad: un proyecto rechazado no es solo trabajo desperdiciado, es un golpe personal. Cómo identifico las señales de burnout en mi equipo, cómo prevengo los ciclos de sobrecarga, y cómo manejo la conversación con un creativo que ha perdido la chispa.

**Retención del talento creativo**

Los mejores creativos tienen opciones. Qué les retiene más allá del salario: los proyectos ambiciosos, el crecimiento en la disciplina, el entorno de pares que les reta y les inspira, y la sensación de que su trabajo importa. Diseña un plan de desarrollo individual para mi equipo creativo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Gestionar un equipo creativo maximizando la calidad del trabajo y la retención del talento',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas en la industria creativa',
                'description'      => 'Royalties, advances, splits y los modelos de negocio del entretenimiento que generan ingresos mucho después de que el trabajo está terminado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en la industria creativa y del entretenimiento con experiencia en música, cine, edición literaria, videojuegos y contenido digital. Soy un creativo o gestor en esta industria y necesito entender las finanzas específicas del sector para tomar mejores decisiones.

Mi situación: [DESCRIBE: en qué parte de la industria creativa estás (músico, escritor, productor, sello, estudio, agencia), si eres creador independiente o trabajas dentro de una empresa, y cuál es tu principal pregunta o problema financiero]

**La estructura de ingresos en la industria creativa**

A diferencia de otros sectores donde los ingresos son predecibles, la industria creativa tiene una estructura de ingresos única: un trabajo creado hoy puede generar ingresos durante décadas. Explícame en detalle cada fuente de ingreso:

Royalties de derechos de autor: la diferencia entre derechos de autor (copyright) y derechos conexos o vecinos, cómo se calculan y distribuyen los royalties en música (mecánicos, de ejecución, de sincronización, de streaming digital), en literatura (porcentaje sobre precio de venta, sobre precio de catálogo), y en audiovisual (participación en beneficios, residuals). Las sociedades de gestión colectiva y cómo funcionan (SGAE, CEDRO, AGEDI en España).

Advances y recoupment: el anticipo que el editor, sello o estudio adelanta al creador que se descuenta de los royalties futuros. El problema del recoupment: puedo haber vendido bien y no haber cobrado nada en royalties. Cómo funciona la contabilidad de royalties en la práctica y cómo verifico que los estados de cuenta que recibo son correctos.

Splits y co-autoría: cómo se dividen los derechos y los ingresos cuando hay múltiples creadores, y la importancia de documentar los splits desde el principio antes de que el dinero llegue y aparezcan los desacuerdos.

Ingresos de sincronización: la licencia de música para cine, series, publicidad y videojuegos. Cómo se calcula el sync fee, quién lo negocia y cómo busco estas oportunidades.

**Los modelos de negocio del entretenimiento que perduran**

El catálogo como activo financiero: las obras de catálogo (content que lleva años publicado) generan ingresos pasivos y predecibles. Por qué los fondos de inversión están comprando catálogos de música y cómo eso ha cambiado la valoración de los derechos de autor. Cómo valoro mi propio catálogo si tuviera que venderlo o usarlo como garantía.

La venta de derechos vs el licenciamiento: vender los derechos genera capital hoy pero renuncia a los ingresos futuros. Cuándo tiene sentido cada opción y cómo calculo el precio justo de una cesión de derechos.

Los ingresos diversificados del creador moderno: la tesis de las "1.000 fans verdaderos" y cómo construyo múltiples fuentes de ingreso (streaming, directo, merchandise, formación, licencias, content deals) para no depender de una sola.

**La planificación financiera del creativo independiente**

Los ingresos irregulares del creativo independiente requieren una planificación diferente: cómo gestiono la tesorería cuando los ingresos no son mensuales, qué porcentaje de los royalties aparto para impuestos antes de que lleguen, cómo constituyo un fondo de sequía para los meses sin proyectos, y cuándo tiene sentido crear una sociedad mercantil vs facturar como autónomo.

**Las trampas financieras de la industria creativa**

Los errores más comunes: firmar contratos sin auditar la contabilidad de royalties, no registrar las obras en las sociedades de gestión colectiva, ceder derechos sin entender el alcance de la cesión, y mezclar las finanzas personales con las del proyecto creativo.

Dame un modelo de flujo de caja para los próximos 12 meses adaptado a la naturaleza irregular de los ingresos creativos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Entender y gestionar las finanzas específicas de la industria creativa: royalties, advances, splits y planificación del flujo de caja',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad intelectual para creativos',
                'description'      => 'Copyright, marcas, derechos de imagen, contratos de producción y los acuerdos que protegen al creador cuando trabaja con sellos, estudios o marcas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en propiedad intelectual para la industria creativa con experiencia en derecho de autor, marcas, contratos de producción y derechos de imagen en España y la Unión Europea. Soy un creativo o empresa creativa y necesito entender cómo proteger mi trabajo y mis derechos.

Mi situación: [DESCRIBE: eres músico, escritor, diseñador, fotógrafo, productor, filmmaker, artista visual o empresa de producción; qué tipo de obra produces; si ya has firmado contratos con sellos, editoriales, agencias o marcas; y cuál es tu principal duda o problema legal]

**El copyright: la protección automática que pocos entienden bien**

El derecho de autor en España (Ley de Propiedad Intelectual) surge automáticamente con la creación de la obra sin necesidad de registro. Pero hay matices cruciales:

Qué protege el copyright y qué no: la expresión concreta de una idea está protegida, la idea en sí misma no. El estilo no se puede registrar. El título de una obra rara vez está protegido por copyright (pero puede estar por marca). Las notas musicales, los géneros, los conceptos creativos comunes no son protegibles.

La duración del copyright: 70 años tras la muerte del autor en la UE. Las implicaciones para el trabajo con obras del pasado y cuándo una obra pasa al dominio público.

Los derechos morales del autor: irrenunciables e inalienables en España. El derecho de divulgación, el de paternidad (que se reconozca tu autoría) y el de integridad (que no modifiquen tu obra en contra de tu reputación). Por qué esto importa aunque hayas cedido todos los derechos económicos.

La cesión de derechos económicos: puedes ceder tus derechos patrimoniales pero los morales siempre te pertenecen. Qué tipo de cesión firmas (exclusiva/no exclusiva, por plazo, por territorio, por modalidad de explotación) y qué implica cada variante.

**Los contratos con sellos, editoriales y estudios**

Los contratos de la industria creativa favorecen sistemáticamente al comprador. Las cláusulas que debo revisar antes de firmar cualquier cosa:

El alcance de la cesión: ¿cedo todos los usos presentes y futuros (incluyendo formatos aún no inventados) o solo los usos específicamente listados? La diferencia puede valer millones.

Las opciones sobre obras futuras: los contratos de 360 grados que reclaman comisión sobre todos los ingresos del artista, no solo los del contrato. Los contratos de "first look" y "right of first refusal" que limitan mi libertad de negociar con otros.

Las cláusulas de recoupment: cómo el sello o editorial puede haberse "gastado" dinero en mi proyecto de formas que no pasan por mi cuenta pero sí se descuentan de mis royalties.

Las cláusulas de reversión: el mecanismo por el que recupero mis derechos si el sello o editorial no cumple sus obligaciones (publicación, distribución, mínimos de venta).

**Derechos de imagen y contratos con marcas**

Los contratos de endorsement, embajador de marca y colaboraciones publicitarias. Qué derechos concedo cuando aparezco en una campaña, el control sobre el contexto en que se usa mi imagen, las cláusulas de exclusividad sectorial y cómo negocio la duración y el territorio de uso de mi imagen.

**Propiedad intelectual en la era del contenido generado por IA**

El estado actual en España y la UE: las obras generadas por IA no tienen autor humano reconocible y por tanto no tienen protección de copyright tradicional. Qué implica esto si uso IA como herramienta en mi proceso creativo, y cómo documento la aportación creativa humana para proteger mi obra.

Dame un checklist de los 10 puntos que debo revisar antes de firmar cualquier contrato creativo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 20,
                'use_case'         => 'Entender y proteger los derechos de propiedad intelectual como creativo: copyright, contratos con sellos, derechos de imagen y cesiones',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a creadores en plataformas digitales',
                'description'      => 'Las plataformas para creadores tienen necesidades de soporte únicas: monetización bloqueada, demonetización, disputas de copyright y el impacto emocional del bloqueo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en operaciones de customer success especializado en plataformas para creadores de contenido. Gestiono el soporte o el éxito de los creadores en una plataforma digital y necesito construir procesos, scripts y protocolos que atiendan las necesidades muy particulares de este tipo de usuario.

Mi plataforma: [DESCRIBE: qué tipo de plataforma para creadores operas (vídeo, música, newsletters, cursos, marketplace de arte), cuántos creadores activos tienes, si el soporte es reactivo o proactivo, y cuál es el problema más frecuente que recibes]

**Por qué el soporte a creadores es fundamentalmente diferente al soporte estándar**

Los creadores tienen una relación emocional con su trabajo y con la plataforma que no tienen los usuarios de una herramienta SaaS. Cuando algo sale mal, el impacto no es solo funcional (no puedo publicar) sino económico (estoy perdiendo ingresos) y emocional (mi audiencia me ve como poco profesional). Explícame cómo esta naturaleza del usuario-creador debe cambiar cada aspecto del soporte:

El tono y la empatía real vs la empatía de script: los creadores detectan cuando el soporte no entiende su trabajo. La diferencia entre "lamentamos los inconvenientes" y un agente que demuestra con sus palabras que entiende el impacto real de lo que ha pasado.

La urgencia variable: un creador que no puede publicar antes de que empiece su stream tiene una urgencia muy diferente a uno que reporta un problema en un vídeo publicado hace una semana. Cómo categorizo y priorizo la urgencia real.

**Los tipos de problema más comunes y cómo resolverlos**

Dame protocolos detallados para cada tipo de problema:

Monetización bloqueada o suspendida: el proceso de diagnóstico (¿es un bloqueo automático, una suspensión manual, un problema de elegibilidad?), la comunicación con el creador mientras investigamos, los plazos realistas y cómo manejo la situación cuando el bloqueo no lo puedo resolver yo sino que depende de una revisión interna.

Demonetización de contenido específico: la explicación de por qué ocurrió (en términos que el creador pueda entender sin conocer los detalles de los algoritmos), el proceso de apelación y qué probabilidad tiene de éxito, y las alternativas de monetización mientras se resuelve.

Disputas de copyright (Content ID en YouTube, claims de music en otras plataformas): cómo explico el sistema de disputas, qué puede hacer el creador para disputar un claim que cree injusto, cuándo tiene sentido disputar y cuándo no, y cómo manejo el caso donde el claim es legítimo pero el creador cree que no.

Suspensión de cuenta: el caso más delicado. El creador siente que pierde años de trabajo y su fuente de ingresos en un momento. El protocolo de comunicación, la revisión urgente del caso y el proceso de apelación con expectativas claras.

Problemas técnicos que afectan la publicación: el proceso de diagnóstico rápido, la solución temporal mientras se resuelve el problema permanente, y cómo mantengo al creador informado del progreso.

**El impacto emocional: el agente como contención**

Algunos creadores llegan al soporte en un estado de estrés elevado, a veces con lenguaje agresivo. Dame protocolos para:
- Desescalar la conversación sin hacer promesas que no puedo cumplir
- Reconocer el impacto emocional sin validar las afirmaciones incorrectas sobre la plataforma
- Transferir al equipo de soporte especializado cuando el caso supera mis capacidades
- Registrar el feedback del creador como señal de producto

**Soporte proactivo: detectar el problema antes de que el creador lo reporte**

Las plataformas más avanzadas no esperan a que el creador abra un ticket. Diseña un sistema de alertas proactivas para: caída anormal de visualizaciones o ingresos, cambios de elegibilidad inminentes, expiración de documentos de verificación de cuenta, y oportunidades para mejorar el rendimiento del canal.

Dame plantillas de respuesta para los cinco tipos de problema más frecuentes en mi plataforma.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir protocolos y scripts de soporte para los problemas más frecuentes de los creadores en plataformas digitales',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Vivir de la creatividad como freelance',
                'description'      => 'El modelo de negocio del freelance creativo: cómo diversificar ingresos entre clientes, productos propios y licencias para no depender de un solo cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio especializado en ayudar a creativos independientes (diseñadores, fotógrafos, músicos, ilustradores, escritores, videomakers) a construir un modelo de negocio sostenible y rentable. Quiero dejar de depender de un solo cliente o ingreso y construir un negocio creativo diversificado.

Mi situación: [DESCRIBE: qué disciplina creativa practicas, cómo generas ingresos ahora mismo, cuánto llevas en esto, cuál es tu mayor problema económico actual (ingresos irregulares, dependencia de pocos clientes, precio bajo, poca demanda) y qué te gustaría cambiar]

**El problema estructural del freelance creativo**

La mayoría de los creativos freelance tienen un negocio de una sola pierna: cuando llega un cliente cobran, cuando no llega no cobran. Explícame la arquitectura de un negocio creativo con múltiples patas que generan ingresos en paralelo, y por qué la diversificación de ingresos no es un lujo sino una condición de supervivencia.

**Los tres tipos de ingreso que todo creativo debe construir**

Ingresos de tiempo (intercambias horas por dinero): los proyectos de cliente, los servicios por encargo, las consultorías y las clases particulares. Son el ingreso más predecible pero el menos escalable porque están limitados por tus horas disponibles. Cómo lo optimizo: la especialización que permite cobrar más por hora, el proceso de ventas que reduce el tiempo entre proyecto y proyecto, y los contratos de retainer que dan previsibilidad mensual.

Ingresos de producto (vendes algo que creaste una vez): los presets, templates, brushes, fotografías en stock, ilustraciones licenciadas, fuentes tipográficas, cursos online, ebooks, filtros de Lightroom o packs de samples de música. Se crean una vez y se venden muchas veces. Cómo identifico qué producto tiene demanda, dónde lo vendo y cómo lo promociono sin presupuesto.

Ingresos de catálogo y licencias (tu obra genera dinero sola): las licencias de música, los royalties de ilustraciones en productos físicos, las licencias de fotografías para uso editorial. El ingreso más pasivo pero el que más tiempo tarda en construirse.

**La estrategia de especialización que permite cobrar más**

El generalista compite por precio. El especialista fija su precio. Ayúdame a encontrar mi especialización: no es solo la disciplina (diseño gráfico) sino el problema que resuelvo para quién (identidad visual para startups de tecnología en fase de lanzamiento). Cómo identifico mi especialización más rentable analizando: los proyectos donde he cobrado más, los que me han generado más referencias, los que más disfruté y los que el mercado valora más.

**El retainer: la herramienta que da previsibilidad**

El contrato de retainer mensual es el instrumento más poderoso del freelance creativo para transformar ingresos irregulares en predecibles. Cómo lo estructuro (qué incluyo y qué no), cómo lo precio (el descuento justo por la previsibilidad que me da), cómo lo vendo a clientes que están acostumbrados a proyectos y cómo gestiono los meses donde el cliente consume menos de lo pactado.

**El posicionamiento que atrae clientes que pagan bien**

Los creativos que cobran poco suelen tener el mismo problema: son invisibles para los clientes que pagan bien o comunican su valor en términos de horas y entregables en lugar de en términos de resultados. Dame una estrategia de posicionamiento que incluya: cómo comunico el valor de mi trabajo, dónde me hago visible para mis clientes ideales, cómo uso el portfolio no para mostrar "lo que hago" sino para demostrar el impacto que genero, y cómo construyo autoridad en mi especialidad.

**La hoja de ruta a 24 meses**

Con mi situación actual, diseña un plan realista a 24 meses para diversificar mis ingresos: qué construyo primero (el cliente ancora, el primer producto, la primera licencia), cuándo y cómo escalo cada pata, y cuál es el objetivo de ingresos alcanzable al final del período y su composición por tipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir un modelo de negocio creativo diversificado con múltiples fuentes de ingreso como freelance creativo independiente',
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
