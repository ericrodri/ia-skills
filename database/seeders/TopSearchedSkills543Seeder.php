<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills543Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Shopper marketing y estrategia B2C de gran consumo con IA',
                'description'       => 'Domina el shopper marketing para productos de gran consumo usando IA: entiende el comportamiento del comprador en el punto de venta, diseña activaciones en tienda, optimiza el material PLV y mide el impacto de cada acción con datos.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en shopper marketing y marketing de gran consumo con más de 12 años de experiencia en marcas de alimentación, bebidas y cuidado del hogar, especializado en el uso de inteligencia artificial para entender el comportamiento del comprador en el punto de venta físico y digital.

instrucción: Ayúdame a diseñar una estrategia de shopper marketing integral para el lanzamiento de una nueva gama de productos de alimentación saludable en grandes superficies y supermercados, usando IA para entender los momentos de decisión del comprador y maximizar la conversión en el punto de venta.

Desarrolla los siguientes elementos de la estrategia:

**1. Análisis del shopper journey con IA**
Define el proceso de investigación del comportamiento del comprador en el lineal: cómo usar IA para analizar datos de escáner del retailer y tickets de compra para entender los patrones de compra de la categoría, cómo segmentar a los compradores según su misión de compra (compra de reposición, compra de exploración, compra por impulso), y cómo identificar los momentos de verdad en los que la decisión de compra es más influenciable. Incluye el análisis de los compradores digitales en plataformas de e-commerce de alimentación.

**2. Estrategia de visibilidad en el lineal**
Define las claves de la presencia en el lineal: criterios de ubicación óptima por categoría y segmento (altura del ojo, posición respecto a la marca líder, bloque de color), diseño del facing y del planograma para maximizar la visibilidad, y uso de IA para analizar imágenes del lineal y detectar problemas de stock, facing o posicionamiento en tiempo real. Incluye la estrategia de presencia en lineales de productos orgánicos, dietéticos y de tendencias saludables.

**3. Material PLV y activaciones en tienda**
Diseña el plan de materiales en el punto de venta: displays de suelo para temporadas de alta demanda, stoppers y wobblers para destacar el producto en el lineal, cabeceras de góndola para los meses de lanzamiento, samplings y degustaciones para generar prueba de producto, y pantallas digitales de señalización con contenido personalizado por hora del día o perfil del comprador. Define el presupuesto y el ROI esperado de cada tipo de material.

**4. Integración del canal digital con el punto de venta físico**
Define la estrategia omnicanal: cómo activar a los compradores que buscan el producto online para que lo encuentren también en su supermercado habitual, cómo usar las apps de los retailers (Carrefour, Mercadona, Lidl) para hacer visibles las promociones antes de la visita a la tienda, cómo diseñar acciones de retail media en las plataformas digitales de los grandes retailers, y cómo medir la conversión online-offline.

**5. Programa de promociones y gestión del precio en el lineal**
Diseña la estrategia promocional: mix óptimo de promociones en precio (descuento directo, segunda unidad al 50%, lotes), promociones en valor añadido (más cantidad por el mismo precio, gift with purchase), y mecánicas de fidelización (programa de puntos del retailer, código QR para acceder a recetas o contenido digital). Define la frecuencia y la profundidad de las promociones para no erosionar el precio de referencia.

**6. Medición del impacto de las acciones de shopper marketing**
Define el sistema de medición: KPIs de sell-in (ventas al distribuidor) y sell-out (ventas al consumidor final), análisis de la cuota de lineal y su correlación con las ventas, medición del impacto de cada activación en la velocidad de rotación del producto, y uso de IA para atribuir el incremento de ventas a cada acción de marketing. Incluye los modelos de medición que usan los retailers para evaluar el retorno de las inversiones en materiales y acciones conjuntas.

Proporciona un calendario de activaciones de 12 meses con los hitos clave (lanzamiento, Navidad, verano, regreso al cole) y las inversiones recomendadas por canal y tipo de acción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de shopper marketing para lanzamiento en gran superficie',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo de plataformas de retail media con IA',
                'description'       => 'Construye plataformas de retail media que permitan a las marcas anunciarse en los canales digitales de los retailers usando datos de compra de primera mano, con targeting preciso, medición de ventas incrementales y optimización automática con IA.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas de publicidad digital y retail media, con experiencia en el diseño de sistemas que permiten a los retailers monetizar sus audiencias de compradores y ofrecen a las marcas acceso a publicidad con datos de primera mano.

instrucción: Ayúdame a diseñar la arquitectura técnica de una plataforma de retail media para una cadena de supermercados que quiere monetizar sus audiencias digitales y ofrecer a las marcas de gran consumo acceso a publicidad basada en datos de compra reales de sus clientes.

Desarrolla los siguientes componentes de la plataforma:

**1. Arquitectura de datos de audiencias de compradores**
Define la arquitectura del data layer: ingesta y procesamiento de los datos de transacciones de los compradores (ticket de compra, frecuencia de visita, categorías y marcas compradas), construcción de perfiles de audiencia a partir de los patrones de compra, sistema de segmentación con IA que crea audiencias accionables para las marcas (compradores habituales de la categoría, compradores de la competencia, heavy buyers, lapsed buyers), y plataforma de gestión de datos (CDP) que garantiza el anonimato del comprador y el cumplimiento del GDPR.

**2. Motor de targeting y planificación de campañas**
Diseña el sistema de targeting: algoritmos de matching que conectan los segmentos de compradores con los inventarios publicitarios disponibles (web del retailer, app, emails a clientes, pantallas digitales en tienda), herramienta de planificación de campañas que estima el alcance, la frecuencia y el coste de impactar a cada segmento, y sistema de frequency capping para evitar la saturación del comprador. Incluye el diseño de la interfaz de self-serve para que las marcas configuren sus campañas de forma autónoma.

**3. Formatos publicitarios y gestión del inventario**
Define los formatos disponibles: sponsored products en los resultados de búsqueda de la tienda online, display banners en la web y la app del retailer segmentados por comportamiento de compra, emails patrocinados a segmentos de clientes definidos por las marcas, y pantallas digitales en tienda (DOOH) con contenido dinámico según el día, la hora y el perfil de compradores de cada establecimiento. Diseña el sistema de gestión del inventario publicitario con subasta en tiempo real (RTB).

**4. Motor de medición de ventas incrementales**
Define la metodología de medición del impacto de las campañas: test de incrementalidad que compara un grupo de compradores expuestos a la campaña con un grupo de control equivalente, atribución de las ventas adicionales a la campaña usando los datos de transacción del retailer, y cálculo del ROAS (Return on Ad Spend) basado en ventas reales (no en clicks o impresiones). Diseña el sistema de reporting en tiempo real para las marcas.

**5. Optimización automática de campañas con IA**
Diseña los algoritmos de optimización: optimización automática del presupuesto entre los distintos formatos y segmentos según el ROAS en tiempo real, ajuste dinámico de las pujas en las subastas RTB para maximizar el ROI de la marca, personalización del creativo publicitario según el segmento del comprador, y recomendaciones automáticas de nuevos segmentos de audiencia con mayor potencial para cada marca. Incluye los controles para que las marcas puedan supervisar y ajustar la optimización automática.

**6. Portal de acceso para marcas y reporting**
Define la interfaz que ven las marcas: dashboard con las métricas clave de cada campaña en tiempo real (impresiones, clics, ventas incrementales, ROAS), análisis de los segmentos de compradores que mejor han respondido a la campaña, comparativa de resultados vs. benchmarks del sector y vs. campañas anteriores de la marca, y exportación de datos para integrar con los sistemas de reporting de la marca. Define los permisos de acceso según el rol del usuario de la marca (planificador de medios, responsable de categoría, director de marketing).

Proporciona el modelo de datos de las entidades principales, los componentes técnicos del stack recomendado (CDP, DSP, ad server, reporting) y las consideraciones de privacidad y cumplimiento normativo que deben guiar el diseño de la plataforma.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Plataforma de retail media con targeting por datos de compra y medición de incrementalidad',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de packaging y materiales POS para gran consumo con IA',
                'description'       => 'Crea packaging que destaque en el lineal y materiales de punto de venta efectivos para productos de gran consumo usando IA para optimizar la legibilidad, el impacto visual y la comunicación del beneficio principal del producto.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador gráfico especializado en packaging y materiales de punto de venta para el sector de gran consumo, con experiencia en el diseño de envases para productos de alimentación, bebidas, cuidado personal y cuidado del hogar en mercados hispanohablantes.

instrucción: Ayúdame a diseñar un sistema de packaging para una nueva línea de productos de alimentación saludable que destaque en el lineal de los supermercados, comunique claramente los beneficios del producto y sea coherente con las tendencias de diseño que conectan con el consumidor moderno preocupado por la salud y la sostenibilidad.

Desarrolla los siguientes aspectos del diseño:

**1. Análisis del lineal y definición de la estrategia visual**
Define el proceso de análisis previo al diseño: cómo analizar visualmente los packagings de los competidores directos e indirectos en el lineal para identificar el espacio de diferenciación disponible, cómo usar IA para evaluar el impacto visual del packaging actual de la categoría (colores dominantes, tipografías más usadas, jerarquía visual), y cómo definir los principios de diseño que harán que nuestra gama sea reconocible e impactante en el contexto del lineal de saludable.

**2. Jerarquía visual y comunicación del beneficio**
Diseña la arquitectura visual del packaging: qué elementos deben verse en primer golpe de vista a 1,5 metros de distancia (nombre de marca, nombre del producto, beneficio principal), qué información se lee en segundo plano cuando el comprador coge el envase (ingredientes clave, claims nutricionales, certificaciones), y qué información aparece en letra pequeña para el lector interesado (tabla nutricional, ingredientes, código QR). Define la jerarquía tipográfica y el uso de color para guiar la lectura.

**3. Claims de salud y comunicación nutricional**
Define cómo comunicar los atributos de salud del producto de forma visual y efectiva: uso de iconos reconocibles para los principales claims (sin gluten, sin lactosa, fuente de proteínas, bajo en azúcar, bio/ecológico), diseño del semáforo nutricional o el Nutri-Score de forma que sea legible sin desviar la atención del beneficio principal, y comunicación de los ingredientes clave de forma apetecible y visual. Incluye las restricciones regulatorias de los claims de salud en la UE (Reglamento CE 1924/2006).

**4. Sostenibilidad en el packaging y comunicación al consumidor**
Define los elementos de diseño que comunican el compromiso ambiental: elección de materiales reciclados o compostables y cómo hacerlo visible en el envase, diseño de los iconos de reciclabilidad y de los mensajes de instrucciones de separación de residuos para que sean claros y accionables, y comunicación del porcentaje de material reciclado o reciclable de forma que sea creíble y no percibida como greenwashing.

**5. Diseño de la familia de productos y escalabilidad**
Define el sistema de diseño que permita extender la gama: cómo mantener la coherencia de marca en todos los formatos del envase (diferentes tamaños, diferentes variantes de sabor o formato), cómo diferenciar visualmente las variantes de la gama (por ejemplo, por color de fondo) sin perder el reconocimiento de la familia, y cómo diseñar el sistema gráfico para que sea fácilmente escalable cuando se lancen nuevos productos.

**6. Materiales de punto de venta coherentes con el packaging**
Diseña el sistema de materiales PLV que extienden la identidad del packaging al punto de venta: display de suelo que presenta la gama completa con el mismo lenguaje visual, stoppers y wobblers para el lineal que comunican el beneficio clave de forma ultrarrápida, material de tasting y sampling coherente con la imagen premium del producto, y adaptación de la identidad visual al entorno digital (imágenes para la web del retailer, creatividades para retail media y redes sociales).

Proporciona una guía de estilo del sistema de packaging con los elementos definidos (paleta de colores, tipografías, iconografía, espaciado y márgenes de seguridad) y recomendaciones sobre las herramientas de IA para acelerar la generación de prototipos y la evaluación del impacto visual antes de la producción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de packaging para gama de productos de gran consumo saludables',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Trade marketing y estrategia de canal en gran consumo con IA',
                'description'       => 'Diseña planes de trade marketing que maximicen la distribución, la visibilidad y las ventas de tus productos en los distintos canales de gran consumo: hipermercados, supermercados, tiendas de conveniencia y canal online usando IA para optimizar cada canal.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en trade marketing y gestión de canal para el sector de gran consumo, con experiencia en el desarrollo de planes de canal para marcas de alimentación, bebidas y cuidado personal en retailers como Mercadona, Carrefour, Lidl, El Corte Inglés y el canal horeca en mercados hispanohablantes.

instrucción: Ayúdame a diseñar un plan de trade marketing integral para una marca de alimentación que quiere crecer su distribución y su sell-out en los principales canales de gran consumo en España, usando IA para optimizar las inversiones por canal y maximizar el retorno de cada acción.

Desarrolla los siguientes componentes del plan:

**1. Análisis y estrategia por canal**
Define la estrategia diferenciada para cada canal de distribución: hipermercados (Carrefour, El Corte Inglés): enfoque en visibilidad premium, referencias ancla de la gama y acciones de fidelización con el comprador de cesta grande; supermercados líderes (Mercadona, DIA): foco en la rotación eficiente, precio competitivo y la negociación del planograma; discounters (Lidl, Aldi): estrategia de producto específico para el canal, precio muy competitivo; canal online (Mercadona online, Amazon Fresh, Getir): optimización del listing, imágenes de producto, search patrocinado y gestión de reseñas. Para cada canal, define los KPIs prioritarios y el peso de la inversión.

**2. Negociación con el retailer y construcción de la propuesta de valor**
Diseña el enfoque de negociación con los compradores de los grandes retailers: cómo construir el business case para que el retailer amplíe el espacio de lineal de nuestra marca, cómo presentar el dato de cuota de mercado y velocidad de rotación para justificar la posición en el lineal, cómo diseñar el plan conjunto de crecimiento de la categoría que alinea los objetivos de la marca con los del retailer, y cómo negociar las condiciones de los espacios especiales (cabeceras, islas, displays).

**3. Plan de inversión en condiciones comerciales y acuerdos**
Define la estructura de las condiciones comerciales: rappel de volumen anual por canal, descuentos por pronto pago, acuerdos de exclusividad temporal de lanzamientos, inversiones en secciones especiales y material PLV, y condiciones para la participación en catálogos y folletos del retailer. Explica cómo usar IA para modelizar el impacto de cada condición en el margen bruto y en el sell-out esperado, y cómo optimizar el mix de condiciones para maximizar el retorno.

**4. Gestión del surtido y del planograma**
Define el proceso de gestión del surtido por canal: qué referencias de la gama van a cada canal según el perfil del comprador, el precio medio del ticket y las estrategias de surtido del retailer, cómo defender el surtido mínimo que garantiza la visibilidad de la marca, y cómo usar los datos de escáner para argumentar la inclusión de nuevas referencias o la defensa de las existentes. Incluye el proceso de diseño y negociación del planograma óptimo.

**5. Ejecución en el punto de venta y supervisión con IA**
Diseña el sistema de ejecución y control de la presencia en tienda: plan de visitas del equipo de field sales con rutas optimizadas por IA según el potencial de la tienda, aplicación móvil para el equipo en campo que registra el facing, el stock y las incidencias de manera automática, sistema de análisis de imágenes con IA para verificar el cumplimiento del planograma y detectar problemas de presencia sin visitar físicamente cada tienda, y alertas automáticas sobre las tiendas con peor ejecución para priorizar la intervención del equipo.

**6. Medición del ROI de las inversiones de trade marketing**
Define el sistema de medición: análisis de la contribución de cada acción de trade al sell-out (usando datos de escáner del retailer), modelo de atribución que separa el efecto de la distribución, el precio, la presencia en el lineal y las acciones de marketing del consumidor, y cálculo del ROI de cada tipo de inversión (condiciones comerciales, material PLV, acciones especiales). Incluye el proceso de revisión mensual de los resultados y el proceso de toma de decisiones de reasignación del presupuesto.

Proporciona un template del plan anual de trade marketing por canal con los indicadores clave y las inversiones recomendadas, y ejemplos de cómo presentar los resultados en la revisión con la dirección de ventas y con los compradores de los retailers.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Plan de trade marketing por canal para marca de gran consumo en España',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management en categorías de gran consumo con IA',
                'description'       => 'Gestiona el portfolio de productos de gran consumo usando IA: define el mix óptimo de referencias, identifica oportunidades de innovación basadas en consumer insights, gestiona el ciclo de vida de cada SKU y toma decisiones de precio con datos.',
                'prompt_content'    => <<<'EOT'
Actúa como un Category Manager o Brand Manager especializado en el sector de gran consumo, con experiencia en la gestión de portfolios de productos de alimentación, bebidas o cuidado del hogar en mercados maduros altamente competitivos, y en el uso de inteligencia artificial para tomar decisiones de producto basadas en datos.

instrucción: Ayúdame a diseñar el sistema de gestión del portfolio de una marca de gran consumo que quiere optimizar su mix de SKUs, identificar oportunidades de innovación y tomar decisiones de precio basadas en datos, usando IA para acelerar el análisis y mejorar la calidad de las decisiones.

Desarrolla los siguientes aspectos del sistema de gestión:

**1. Análisis del portfolio y optimización del mix de SKUs**
Define el proceso de auditoría del portfolio: análisis de la contribución de cada SKU al volumen, al margen bruto y a la cuota de mercado de la categoría, identificación de los SKUs que canibalizan entre sí sin añadir valor al consumidor, análisis de la complejidad operativa que genera el portfolio (número de SKUs activos, referencias en rotación lenta, gestión de fechas de caducidad), y uso de IA para simular el impacto en las ventas totales de la marca de eliminar las referencias de menor rendimiento. Define los criterios de decisión para racionalizar el portfolio.

**2. Identificación de oportunidades de innovación con consumer insights**
Define el proceso de identificación de gaps de mercado: análisis de las tendencias de consumo con datos de mercado (Nielsen, Kantar), análisis de reseñas y comentarios de consumidores en plataformas de e-commerce y redes sociales con IA para identificar insatisfacciones no cubiertas, análisis de los conceptos de producto más buscados en Google y en las tiendas online de alimentación, y benchmarking de los lanzamientos de innovación de los competidores en los últimos 2 años. Define cómo priorizar las oportunidades identificadas usando un scoring de atractivo de mercado y viabilidad.

**3. Proceso de desarrollo y lanzamiento de nuevos productos**
Define el proceso stage-gate para el desarrollo de innovación: etapa de ideación y concepto (generación de ideas con IA, test de concepto cuantitativo), etapa de desarrollo de producto (iteraciones con el equipo de I+D y el panel de consumidores), etapa de desarrollo comercial (negociación con el retailer, plan de lanzamiento y sell-in), y etapa de lanzamiento y escalado (plan de marketing de lanzamiento, medición de sell-out en las primeras semanas y decisión de escalado). Define los criterios go/no-go en cada etapa.

**4. Estrategia de precio y gestión del revenue**
Diseña la estrategia de pricing: análisis de la elasticidad-precio por SKU y canal usando datos históricos de ventas, fijación del precio de venta al público recomendado (PVP) en función del posicionamiento de la marca y el precio de la competencia, gestión de las promociones en precio (profundidad y frecuencia óptimas para maximizar el sell-out sin dañar el precio de referencia percibido), y estrategia de price pack architecture (diferentes formatos y tamaños para distintos momentos de consumo y canales).

**5. Gestión del ciclo de vida de los productos**
Define el proceso de gestión de SKUs en declive: cómo identificar con datos (tendencia de ventas, distribución, cuota de mercado) cuándo un producto está entrando en la fase de declive, qué opciones existen para rejuvenecer un producto en declive (reformulación, nuevo packaging, nuevo posicionamiento, extensión a nuevos canales), y cuándo la decisión correcta es descatalogar el SKU y cómo gestionarlo con los retailers para minimizar el impacto en la relación comercial.

**6. Dashboard de gestión del portfolio con IA**
Define el sistema de reporting del portfolio: cuadro de mando mensual con los indicadores clave por SKU y por marca (ventas valor, volumen, cuota de mercado, distribución ponderada, precio medio, margen bruto), alertas automáticas sobre SKUs que están cayendo por debajo de los umbrales definidos, y sistema de proyección de ventas con IA para el resto del año ajustado a los planes de activación previstos. Define cómo usar estos datos en el proceso de revisión mensual del portfolio con la dirección.

Proporciona una plantilla de portfolio review con los análisis recomendados y las preguntas que el equipo de gestión de producto debe responder en cada revisión trimestral.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestión y optimización del portfolio de SKUs en marcas de gran consumo',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Captación y gestión de equipos comerciales en gran consumo con IA',
                'description'       => 'Atrae, forma y retiene a los mejores perfiles comerciales para empresas de gran consumo: KAMs, gestores de canal, promotores y field sales, usando IA para acelerar la selección, personalizar la formación y medir el rendimiento por zona y canal.',
                'prompt_content'    => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en el sector de gran consumo, con experiencia en la captación, formación y gestión del rendimiento de equipos comerciales de marcas de alimentación, bebidas y productos de cuidado en el mercado español.

instrucción: Ayúdame a diseñar un sistema integral de gestión del talento comercial para una empresa de gran consumo que quiere mejorar la calidad de sus equipos de ventas y trade marketing, reducir la rotación del equipo de field sales y acelerar la curva de aprendizaje de los nuevos incorporados.

Desarrolla los siguientes componentes del sistema:

**1. Definición del perfil ideal de cada rol comercial**
Define los perfiles de competencias para los roles clave del área comercial de gran consumo: Key Account Manager (negociación con grandes cuentas, análisis de datos de sell-out, gestión del planograma), Trade Marketing Manager (creatividad, análisis de datos de punto de venta, gestión de proyectos), Gestor de Zona / Field Sales (planificación de rutas, ejecución en el punto de venta, gestión de relaciones con el responsable de tienda), y Promotor de Ventas (conocimiento del producto, habilidades de comunicación, resistencia al rechazo). Para cada perfil, define las competencias técnicas y blandas más predictivas del éxito.

**2. Proceso de selección con apoyo de IA**
Diseña el proceso de selección eficiente: uso de IA para el cribado de CVs con foco en experiencia en gran consumo, en el tipo de canal gestionado y en los resultados cuantificados, prueba de juicio situacional online para evaluar la toma de decisiones en situaciones comerciales del sector, role-play de simulación de una negociación con un comprador de supermercado para los roles de KAM, y evaluación del fit cultural mediante entrevista estructurada. Define los tiempos objetivo de cada fase y el ratio candidato/contratado esperado.

**3. Plan de onboarding acelerado para el equipo comercial**
Define el programa de incorporación: semana 1 (inmersión en el portfolio de productos, la estrategia de canal y la cultura de la empresa), semanas 2-4 (acompañamiento en ruta o en negociaciones reales con el mánager o un buddy experto), mes 2 (gestión autónoma de una zona o cuenta pequeña con supervisión cercana), y meses 3-6 (incorporación progresiva de la cartera completa con revisiones semanales de resultados). Define cómo usar IA para personalizar el plan de aprendizaje según las brechas de cada persona.

**4. Sistema de formación continua para el equipo comercial**
Diseña el programa de formación: formación técnica en gestión de categorías y análisis de datos de sell-out (uso de herramientas como Nielsen o Dunnhumby), formación en habilidades de negociación y técnicas de venta consultiva, formación en ejecución perfecta en el punto de venta (planogramas, materiales PLV, gestión del frescos y de la fecha de caducidad), y formación en uso de las herramientas digitales del equipo (app de field sales, CRM). Define la modalidad (presencial, e-learning, microlearning) y la frecuencia de cada tipo de formación.

**5. Sistema de gestión del rendimiento y compensación variable**
Define el modelo de evaluación del rendimiento del equipo comercial: KPIs cuantitativos por rol (sell-out por zona, distribución numérica y ponderada, calidad de la ejecución en tienda medida por auditorías de imagen), KPIs cualitativos (calidad de la relación con el responsable de la cuenta o de la tienda, capacidad de análisis y presentación de datos), y proceso de evaluación semestral con feedback estructurado. Define la estructura del variable y el peso de cada KPI en el cálculo de la remuneración.

**6. Retención del talento comercial y gestión de la rotación**
Define la estrategia de retención específica para el sector: análisis de las causas más frecuentes de rotación en el equipo de ventas de gran consumo (gestión del mánager, falta de perspectivas de carrera, desequilibrio trabajo-vida personal en el rol de field sales), plan de carrera para cada perfil comercial, mecanismos de reconocimiento no económico del rendimiento excepcional, y proceso de entrevista de salida con IA para identificar patrones en las causas de abandono. Define el objetivo de tasa de rotación voluntaria por rol y las acciones de mejora.

Proporciona una plantilla de evaluación de rendimiento por rol comercial y recomendaciones sobre las herramientas de HR tech más adecuadas para gestionar equipos de field sales distribuidos geográficamente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Atracción, formación y retención de equipos comerciales en gran consumo',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Pricing y revenue management en gran consumo con IA',
                'description'       => 'Diseña estrategias de precio y gestión de ingresos para marcas de gran consumo usando IA: optimización del precio base, gestión de la arquitectura de precios, modelización del impacto de las promociones y maximización del margen por canal y SKU.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en pricing y revenue management para el sector de gran consumo, con experiencia en el desarrollo de estrategias de precio para marcas de alimentación, bebidas y cuidado personal, y en el uso de inteligencia artificial para modelizar el comportamiento del consumidor ante los cambios de precio.

instrucción: Ayúdame a diseñar una estrategia de pricing y revenue management para una marca de gran consumo que opera en un entorno de alta inflación y presión competitiva creciente, que me permita proteger el margen, mantener la competitividad en el lineal y gestionar el impacto de las promociones de precio de forma inteligente.

Desarrolla los siguientes componentes de la estrategia:

**1. Análisis de la elasticidad-precio y la sensibilidad del consumidor**
Define el proceso de modelización de la elasticidad: cómo usar los datos históricos de ventas y precio (datos de escáner del retailer) para calcular la elasticidad-precio propia y cruzada de cada SKU, cómo segmentar la elasticidad por canal (hipermercado vs. supermercado vs. discounter vs. online), cómo usar IA para detectar cambios en la elasticidad cuando cambian las condiciones de mercado (inflación, entrada de competidores, cambio en el precio de la competencia), y cómo incorporar el análisis de los datos de paneles de consumidores para complementar el análisis de escáner.

**2. Arquitectura de precios y price pack architecture**
Define la estrategia de arquitectura de precios del portfolio: diseño de diferentes formatos y tamaños que permiten estar presentes en distintos puntos de precio para capturar distintos segmentos de comprador, gestión del precio de entrada de la gama para competir con las marcas de distribuidor sin canibalizar las referencias premium, y definición de la relación de precios entre los distintos SKUs de la gama para guiar al comprador hacia los formatos de mayor margen.

**3. Estrategia de gestión de las subidas de precio**
Define el proceso de gestión de las subidas de precio al retailer: preparación del business case con el análisis de costes que justifica la subida, estrategia de comunicación y negociación con el comprador del retailer, secuencia de implementación por canal y por zona geográfica para minimizar el impacto en la distribución, y monitorización del impacto en el sell-out durante las semanas posteriores a la subida. Incluye las alternativas a la subida directa de precio (reducción de gramaje, cambio de packaging, reducción de mecánicas promocionales).

**4. Gestión y optimización de las promociones en precio**
Diseña el sistema de gestión de promociones: modelo de evaluación pre-promocional que predice el sell-out incremental, el coste de la mecánica y el impacto en el margen neto de cada promoción propuesta, análisis post-promocional que mide el sell-out real vs. el objetivo, el nivel de canibalización y el pantry loading (compra de stock por parte del consumidor que reduce las ventas de las semanas siguientes), y sistema de recomendación automática del mix óptimo de promociones por canal basado en el histórico de resultados.

**5. Gestión del precio en el canal online**
Define la estrategia de pricing para el canal e-commerce: monitorización automática del precio de la competencia en las principales plataformas de alimentación online con alertas cuando se detectan diferencias relevantes, estrategia de precio en Amazon y en las plataformas de los retailers (ventana de precio mínimo garantizado), y gestión de las promociones en el canal online (descuentos de introducción, promociones de suscripción tipo Subscribe & Save) de forma que no erosionen el precio de referencia en el canal físico.

**6. Sistema de reporting y toma de decisiones de precio**
Define el dashboard de gestión del revenue: evolución semanal del precio medio de venta por SKU y canal, margen bruto real vs. objetivo por SKU, análisis de la contribución de precio vs. volumen al crecimiento de ventas, y alertas sobre SKUs cuyo precio medio se está alejando del posicionamiento objetivo. Define la cadencia de revisión del pricing y el proceso de toma de decisiones con los distintos actores (ventas, marketing, finanzas).

Proporciona ejemplos de cómo construir el modelo de predicción del impacto de una subida de precio en el sell-out y el margen, con las variables de entrada y los supuestos recomendados, y casos de aplicación práctica en el contexto del mercado español de gran consumo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Modelización de elasticidad-precio y optimización del revenue en gran consumo',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Compliance en publicidad y etiquetado de productos de consumo con IA',
                'description'       => 'Asegura que tus campañas publicitarias y el etiquetado de tus productos de gran consumo cumplen con la normativa vigente: reglamentos de etiquetado alimentario, claims de salud, publicidad dirigida a menores y normativa de publicidad comparativa.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especializado en derecho de la publicidad y derecho alimentario, con experiencia en el asesoramiento a marcas de gran consumo sobre el cumplimiento de la normativa de etiquetado de productos, claims publicitarios y publicidad comercial en España y la Unión Europea.

instrucción: Ayúdame a diseñar un sistema de revisión y compliance para todas las comunicaciones comerciales y el etiquetado de una empresa de gran consumo del sector alimentación, que use IA para automatizar la revisión inicial y minimizar el riesgo de reclamaciones de la competencia, sanciones de los organismos de autoregulación publicitaria (Autocontrol) o expedientes de las autoridades de seguridad alimentaria (AECOSAN).

Desarrolla los siguientes componentes del sistema:

**1. Marco normativo aplicable al etiquetado alimentario**
Define las obligaciones de etiquetado según el Reglamento UE 1169/2011: menciones obligatorias (denominación del alimento, lista de ingredientes, declaración de alérgenos, cantidad neta, fecha de duración mínima o de caducidad, condiciones de conservación, nombre del operador, país de origen, instrucciones de uso), requisitos de formato y legibilidad (tamaño mínimo de fuente, contraste, lengua), y menciones adicionales específicas para determinadas categorías de alimento (alimentos para lactantes, suplementos dietéticos, alimentos ecológicos). Incluye las modificaciones introducidas por el sistema de etiquetado frontal (Nutri-Score) y su estatus legal actual en España.

**2. Régimen de los claims nutricionales y de salud**
Explica el Reglamento CE 1924/2006 sobre declaraciones nutricionales y de salud: qué claims están autorizados explícitamente en el Registro de la UE y bajo qué condiciones, qué afirmaciones están implícitamente prohibidas por inducir a error, cuáles son los requisitos científicos para hacer un claim de salud (evidencia científica generalmente aceptada), y cuáles son los riesgos de usar claims no autorizados o mal sustentados. Incluye los claims más frecuentes en el sector de la alimentación saludable y su estatus legal actualizado.

**3. Publicidad de alimentos dirigida a menores**
Define las restricciones aplicables a la publicidad de alimentos con alto contenido en grasas, azúcar o sal dirigida a menores: el Código PAOS (Código de Publicidad, Actividad de Promoción y Patrocinio de Alimentos y Bebidas dirigido a Menores) y sus criterios de aplicación, las restricciones adicionales en medios digitales y redes sociales, y el proceso de revisión previa en Autocontrol para minimizar el riesgo de reclamación por incumplimiento del código. Incluye los límites de edad y los criterios para considerar que un anuncio está dirigido a menores.

**4. Sistema de revisión de materiales publicitarios con IA**
Diseña el proceso de revisión legal de materiales: uso de IA para hacer una primera revisión automática de textos publicitarios que identifique claims no autorizados, afirmaciones superlativas sin base, comparaciones con competidores que pueden ser consideradas publicidad desleal, y referencias a efectos del producto que requieren base científica. Define el proceso de revisión humana posterior para los materiales que presentan riesgos, y el proceso de consulta previa a Autocontrol para las campañas de mayor envergadura o mayor riesgo.

**5. Gestión de reclamaciones y defensa ante Autocontrol y reguladores**
Define el protocolo de respuesta a reclamaciones: cómo responder a una reclamación de un competidor ante el Jurado de Autocontrol (plazos, documentación de la evidencia que sustenta el claim, argumentación jurídica), cómo gestionar un requerimiento de información de una autoridad alimentaria sobre el etiquetado de un producto, y cómo preparar la defensa ante un posible expediente sancionador de la AECOSAN por infracción de la normativa de etiquetado. Define las estrategias de defensa más efectivas en cada tipo de procedimiento.

**6. Auditoría periódica del etiquetado y los materiales publicitarios**
Diseña el proceso de auditoría anual: revisión sistemática del etiquetado de todos los productos activos de la gama para identificar incumplimientos con las últimas actualizaciones normativas, revisión de los materiales publicitarios reutilizables (fichas de producto para el retailer, webs de marca) para detectar claims que han quedado obsoletos o cuya base científica ha sido cuestionada, y plan de actualización priorizado según el riesgo de cada incumplimiento detectado.

Proporciona una checklist de revisión de etiquetado y materiales publicitarios para los equipos de marketing, y recomendaciones sobre cómo documentar la base científica de los claims de salud para poder defenderlos en caso de reclamación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de revisión de compliance en publicidad y etiquetado alimentario',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al consumidor final en marcas de gran consumo con IA',
                'description'       => 'Diseña un servicio de atención al consumidor para marcas de gran consumo que resuelva eficientemente las consultas y reclamaciones sobre productos, gestione los alertas de seguridad alimentaria y convierta cada interacción en una oportunidad de fidelización.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en Consumer Affairs y atención al consumidor para el sector de gran consumo, con experiencia en el diseño y gestión de servicios de atención al consumidor para marcas de alimentación, cuidado personal y cuidado del hogar que reciben miles de contactos mensuales a través de múltiples canales.

instrucción: Ayúdame a diseñar un servicio de atención al consumidor de alta calidad para una marca de gran consumo que quiere diferenciarse a través de la experiencia post-compra, usando IA para gestionar el volumen de contactos de forma eficiente y convertir cada interacción en una oportunidad de fidelización y de aprendizaje sobre el producto.

Desarrolla los siguientes componentes del servicio:

**1. Estrategia de canales y experiencia omnicanal**
Define los canales de contacto y la experiencia en cada uno: teléfono de atención al consumidor (horario, tiempo de espera máximo, script de bienvenida), formulario web (estructura de la consulta, tiempo de respuesta comprometido), email (plantillas por tipo de consulta, proceso de gestión de la bandeja), redes sociales (monitorización, tiempo de primera respuesta, gestión pública vs. derivación a canal privado), chatbot en la web de la marca (flujos para las consultas más frecuentes, escalada al agente humano), y código QR en el packaging que lleva al consumidor al canal más adecuado según el tipo de duda. Define el tono de comunicación por canal y por tipo de consulta.

**2. Clasificación y gestión de los tipos de contacto**
Define la taxonomía de contactos por tipo y urgencia: consultas sobre el producto (ingredientes, modo de uso, consejos de conservación), reclamaciones de calidad (producto en mal estado, contaminación, cuerpo extraño), quejas por experiencia de compra (producto no encontrado en tienda, precio incorrecto), consultas sobre alérgenos y restricciones dietéticas, solicitudes de información nutricional adicional, y alertas de seguridad alimentaria (sintomatología tras el consumo del producto). Para cada tipo, define el protocolo de respuesta, el tiempo máximo de gestión y la escalada interna.

**3. Gestión de crisis y alertas de seguridad alimentaria**
Define el protocolo de gestión de incidentes de seguridad: cómo identificar una serie de contactos aislados que pueden indicar un problema de seguridad en un lote del producto, cuándo activar el protocolo de crisis y notificar a las autoridades alimentarias y a los retailers, cómo gestionar la comunicación con los consumidores afectados durante una retirada de producto (recall), y cómo documentar el proceso para el expediente regulatorio. Incluye el modelo de comunicación de crisis que equilibra la transparencia con la protección de la imagen de marca.

**4. Personalización de las respuestas con IA**
Define cómo usar IA para mejorar la calidad y la eficiencia de las respuestas: generación de borradores de respuesta personalizados según el tipo de consulta, el historial de interacciones del consumidor y el tono adecuado para cada situación, traducción automática para responder en la lengua del consumidor, análisis del sentimiento del contacto para priorizar los casos de mayor frustración, y detección de patrones en los contactos que indican problemas de calidad o comunicación del producto.

**5. Conversión de cada interacción en feedback de producto**
Define el sistema de captura de insights del consumidor: cómo etiquetar y categorizar sistemáticamente todos los contactos para identificar patrones (recurrencia de quejas sobre un atributo del producto, confusión frecuente sobre el modo de uso, peticiones recurrentes de nuevas variantes), cómo generar informes periódicos para los equipos de producto, marketing e I+D con los principales hallazgos del consumidor, y cómo priorizar las mejoras del producto o de la comunicación basándose en la frecuencia e impacto de los contactos recibidos.

**6. Medición de la calidad del servicio y su impacto en la fidelización**
Define las métricas del servicio de atención al consumidor: FCR (First Contact Resolution), tiempo de respuesta por canal, satisfacción post-contacto (CSAT), NPS del servicio de atención, y tasa de conversión de reclamantes insatisfechos en consumidores fidelizados (gracias a la resolución satisfactoria). Define la relación entre la calidad del servicio de atención y los indicadores de salud de la marca (NPS de marca, repetición de compra, tasa de recomendación) para demostrar el ROI de la inversión en el servicio.

Proporciona ejemplos de respuestas tipo para las situaciones más frecuentes y un protocolo de formación para el equipo de atención al consumidor que garantice la consistencia del tono y la calidad de las respuestas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Servicio de atención al consumidor de gran consumo con IA y protocolo de crisis',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultoría de consumer insights y shopper analytics freelance con IA',
                'description'       => 'Construye una práctica de consultoría freelance especializada en consumer insights y shopper analytics para marcas de gran consumo: metodología, herramientas de IA para analizar datos y formatos de entregables que justifican honorarios premium.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocio para consultores freelance especializados en investigación de mercado y análisis de datos de consumo, con experiencia en ayudar a profesionales independientes a construir una práctica de consultoría de consumer insights para marcas de gran consumo.

instrucción: Ayúdame a construir una práctica de consultoría freelance especializada en consumer insights y shopper analytics para marcas de gran consumo. Quiero posicionarme como el consultor de referencia para marcas medianas y startups de alimentación, bebidas y cuidado personal que necesitan entender al consumidor y al comprador para tomar mejores decisiones de producto, marketing y distribución.

Desarrolla los siguientes aspectos de mi negocio:

**1. Definición del nicho y la propuesta de valor**
Ayúdame a definir mi especialización específica dentro del ecosistema de consumer insights: ¿debería enfocarme en el análisis de datos de escáner y paneles de consumidor para marcas con presencia en grandes superficies, en la investigación cualitativa de tendencias de consumo para marcas en fase de lanzamiento, en el análisis de datos digitales (búsquedas, redes sociales, reseñas) para entender al consumidor online, o en la consultoría de category management para retailers? Para cada nicho, analiza el tamaño del mercado, el perfil del cliente ideal, el ticket medio y la competencia. Incluye el proceso de validación de cuál encaja mejor con mi experiencia.

**2. Portfolio de servicios y metodología diferencial**
Define los servicios que puedo ofrecer con una metodología propia y diferenciada: análisis del comprador en el punto de venta (shopper journey, barreras a la compra, drivers de elección de marca), consumer segmentation basada en actitudes y comportamientos de consumo, análisis de tendencias de consumo con datos digitales y cualitativos, evaluación de nuevos conceptos de producto y packaging, y auditoría de la comunicación de la marca desde la perspectiva del consumidor. Para cada servicio, define la metodología, el proceso de entrega y el precio de referencia.

**3. Uso de IA para acelerar el análisis y mejorar la calidad**
Define cómo usar IA en cada fase de un proyecto de consumer insights: análisis automático de miles de reseñas de productos en Amazon, El Corte Inglés y Mercadona para identificar los atributos más valorados y las principales insatisfacciones del consumidor, análisis de las búsquedas en Google y en los buscadores de los retailers para entender las necesidades no satisfechas del consumidor, generación de síntesis y hallazgos a partir de transcripciones de grupos de discusión y entrevistas en profundidad, y creación de informes y presentaciones ejecutivas a partir del análisis estructurado. Incluye los prompts más efectivos para cada tarea.

**4. Formatos de entregables y presentación de resultados**
Define los formatos de entregables que generan mayor impacto y justifican los honorarios: informe ejecutivo de máximo 20 páginas con los 5 hallazgos más relevantes y las implicaciones para las decisiones de negocio, infographic o one-pager del perfil del consumidor objetivo con los datos más accionables, workshop de insights con el equipo del cliente para traducir los hallazgos en decisiones concretas de producto, marketing y distribución, y dashboard interactivo de monitorización de los indicadores de salud de la marca con el consumidor. Explica cómo presentar los resultados para la dirección de marketing y para el equipo técnico de producto de forma diferenciada.

**5. Captación de clientes en el sector de gran consumo**
Define la estrategia de desarrollo de negocio: cómo identificar y contactar a los directores de marketing de marcas medianas de gran consumo que no tienen equipo interno de insights, cómo llegar a startups de alimentación y bebidas en fase de crecimiento que necesitan entender al consumidor antes de escalar, cómo construir alianzas con agencias de branding y packaging que necesitan un socio de insights para completar su oferta, y cómo generar visibilidad como experto publicando análisis de tendencias de consumo en LinkedIn y en medios especializados del sector (Alimarket, Informe Semanal de El Economista).

**6. Modelo de negocio y crecimiento**
Define el modelo financiero de la consultoría: estructura de honorarios por proyecto (investigación cualitativa, análisis de datos, workshop de estrategia), modelo de retainer para clientes que necesitan seguimiento mensual de indicadores del consumidor, estrategia para crear activos de conocimiento vendibles (informes de tendencias de consumo por categoría, bases de datos de benchmarks), y plan de crecimiento para pasar de consultor individual a pequeña consultora especializada con socios o colaboradores. Define los hitos financieros de los primeros 18 meses.

Incluye una propuesta comercial tipo para el primer contacto con una marca de alimentación mediana y un plan detallado de las primeras 4 semanas de un proyecto de shopper insights.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Práctica de consultoría freelance de consumer insights para gran consumo',
                'vote_score'        => 28,
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
