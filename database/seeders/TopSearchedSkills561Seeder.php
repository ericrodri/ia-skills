<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills561Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de moda y tendencias con inteligencia artificial',
                'description'      => 'Crea estrategias de marketing digital para marcas de moda usando IA para identificar tendencias, crear contenido visual y conectar con tu audiencia.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de moda con amplia experiencia trabajando con marcas de distintos segmentos: fast fashion, marcas de lujo accesible, moda sostenible y marcas de nicho. Conoces en profundidad el ecosistema digital de la moda: Instagram, TikTok, Pinterest, influencers, editoriales digitales y el calendario de temporadas.

Contexto de la marca:
- Marca de moda española fundada hace 3 años, precio medio-alto
- Especialización: ropa de mujer para ocasiones especiales (bodas, eventos, cenas de empresa)
- Facturación actual: 800.000 euros, objetivo de llegar a 2 millones en 2 años
- Canal principal: tienda propia en una capital española + ecommerce incipiente
- Problema: la marca es muy local, no tiene presencia nacional ni proyección internacional
- Redes sociales: Instagram con 12.000 seguidores, sin estrategia clara

Desarrolla la estrategia de marketing de moda completa:

1. Posicionamiento de marca: Antes de cualquier táctica, define el posicionamiento estratégico de la marca. Incluye: el territorio de marca que debería ocupar (la intersección entre lo que la marca hace mejor y lo que el cliente más desea), la propuesta de valor diferencial frente a Zara, Mango, Massimo Dutti y marcas de diseñador, el perfil detallado de la cliente ideal (no solo demográfico, también psicográfico: valores, aspiraciones, relación con la moda y con las ocasiones especiales) y el tono de voz de la marca en todas las comunicaciones.

2. Estrategia de contenidos para Instagram: Instagram es el canal principal de una marca de moda de precio medio-alto. Diseña la estrategia completa. Incluye: mix de contenido óptimo (editorial, producto, behind the scenes, styling tips, testimonios, UGC), frecuencia de publicación por formato (feed, stories, reels, colaboraciones), calendario de contenidos para las próximas 8 semanas con tema de cada post, copy tipo para cada formato, estrategia de hashtags para crecer de 12.000 a 30.000 seguidores en 6 meses y cómo convertir los seguidores en clientes de la tienda online.

3. Estrategia en TikTok para moda: TikTok se ha convertido en el principal canal de descubrimiento de moda para mujeres de 25 a 45 años. Diseña la estrategia de TikTok para la marca. Incluye: los 10 formatos de vídeo que mejor funcionan en moda en TikTok (con ejemplos de contenido concreto para esta marca), cómo adaptar el estilo visual de la marca a un formato más espontáneo sin perder la identidad, frecuencia de publicación recomendada para crecer, cómo usar TikTok Shop para ventas directas desde el vídeo y cómo manejar los virales inesperados para convertirlos en ventas.

4. Estrategia de influencer marketing: Los influencers son fundamentales en moda de ocasiones especiales. Diseña la estrategia de colaboraciones. Incluye: perfil de influencer ideal para esta marca (no solo número de seguidores, sino valores, audiencia, tipo de contenido), cómo encontrar e identificar microinfluencers auténticos en el segmento de moda nupcial y eventos, modelo de acuerdo de colaboración (gifting, pago, comisión de afiliación), briefing tipo para la colaboración que garantice contenido alineado con la marca y cómo medir el retorno de cada colaboración.

5. Campaña de colección: Diseña la campaña completa para el lanzamiento de la colección de otoño-invierno. Incluye: concepto creativo de la campaña con título e idea central, plan de producción del contenido (sesión de fotos: locación, modelos, moodboard, referencias), calendario de publicaciones desde 2 semanas antes del lanzamiento hasta 4 semanas después, acciones para generar expectativa antes del lanzamiento, eventos de presentación de la colección (privado para clientas VIP + open day) y métricas de éxito de la campaña.

6. Ecommerce y conversión: La tienda online tiene mucho potencial sin explotar. Diseña la estrategia de optimización del ecommerce. Incluye: experiencia de usuario en la web para el proceso de compra de moda de ocasión (cómo reducir la incertidumbre del talle y el tejido), estrategia de contenido SEO para captar tráfico orgánico en búsquedas como "vestidos de boda invitada", plan de email marketing con segmentación por tipo de compra y frecuencia y estrategia de remarketing para recuperar a las personas que abandonaron el carrito.

7. Proyección internacional: El objetivo a 2 años es llegar a clientas de otras ciudades españolas y empezar a explorar Portugal y el mercado latinoamericano online. Diseña el plan de expansión. Incluye: qué mercados priorizar y por qué, adaptaciones necesarias en la comunicación para cada mercado, uso de TikTok y Pinterest para el mercado latinoamericano y cómo gestionar los envíos internacionales desde la perspectiva de la experiencia del cliente.

Incluye ejemplos de copies reales, ideas de contenido específicas para la marca y referencias a marcas de moda española que están haciendo bien el marketing digital. Todo debe ser aplicable con un equipo pequeño (1-2 personas de marketing).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crecimiento de marca de moda española en canales digitales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de software para gestión de inventario textil con IA',
                'description'      => 'Implementa sistemas de gestión de inventario y producción para empresas textiles usando inteligencia artificial para optimizar stocks y reducir desperdicios.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de gestión para la industria textil y la moda. Tu experiencia abarca desde sistemas de gestión de producción (PLM), control de inventario multi-almacén, integración con plataformas de ecommerce hasta la aplicación de IA para la previsión de demanda en un sector con alta estacionalidad y obsolescencia rápida de los productos.

Contexto del proyecto:
- Empresa textil española con fabricación propia y distribución a tiendas multimarca
- Productos: 300 referencias activas, 2 temporadas al año (primavera-verano y otoño-invierno), colecciones de 150 referencias nuevas por temporada
- Canales: 80 tiendas multimarca en España, ecommerce propio, 3 tiendas propias
- Problema principal: exceso de stock al final de temporada (30% de las referencias acaban en outlet a precio de coste o por debajo), y roturas de stock en referencias de éxito durante la temporada
- Sistema actual: Excel y ERP básico sin IA ni previsión de demanda
- Objetivo: reducir el exceso de stock en un 40% y las roturas de stock en un 60%

Desarrolla el sistema de gestión inteligente de inventario:

1. Arquitectura del sistema de previsión de demanda: Diseña la arquitectura técnica del sistema de previsión de demanda para la industria textil. Incluye: fuentes de datos a integrar (histórico de ventas por referencia y canal, datos de tendencias de moda, clima, calendario de eventos, comportamiento de búsqueda online), modelo de ML recomendado para la previsión de demanda textil con alta estacionalidad (LSTM, Prophet, XGBoost con features temporales), proceso de entrenamiento y validación específico para datos textiles y cómo incorporar el juicio experto del equipo de producto al modelo.

2. Modelo de planificación de producción: Diseña el sistema de planificación de producción que integra la previsión de demanda. Incluye: algoritmo de cálculo de la cantidad óptima de producción por referencia y talla, modelo de decisión de repro (segunda producción) durante la temporada basado en velocidad de venta real, sistema de alertas de ruptura de stock anticipada y protocolo de decisión de liquidación anticipada de referencias con baja rotación.

3. Sistema de gestión de tallas y variantes: La gestión de tallas es el mayor problema técnico del textil (el 60% de las roturas son de tallas específicas). Diseña el sistema de gestión de ratio de tallas. Incluye: modelo de distribución de tallas por tipo de producto y canal de venta, algoritmo de reposición de tallas desde el almacén central a las tiendas, sistema de transferencia entre tiendas de tallas con exceso vs. rotura y cómo ajustar el ratio de producción de tallas basado en el histórico de ventas real.

4. Integración multi-canal del inventario: La empresa vende por 3 canales con gestión de inventario separada. Diseña el sistema de inventario unificado. Incluye: arquitectura de inventario centralizado con visibilidad en tiempo real por canal, algoritmo de asignación de stock entre canales cuando hay escasez (priorización por margen, tipo de cliente y velocidad de venta), sistema de ship from store (enviar desde tienda cuando el almacén no tiene stock) y sincronización del inventario con las plataformas de ecommerce (Shopify, Amazon) en tiempo real.

5. Código Python para análisis de inventario: Proporciona código funcional en Python para: (a) análisis de la curva de ventas por temporada y detección de referencias con patrones anómalos, (b) modelo de previsión de ventas semanales usando Prophet para una referencia textil con alta estacionalidad, (c) algoritmo de cálculo del punto de reorden y la cantidad óptima de repro, (d) visualización del mapa de calor de ventas por talla y referencia para identificar desequilibrios.

6. Dashboard de gestión para el equipo comercial y de producto: Diseña el cuadro de mando operativo que usará el equipo de product y comercial cada semana. Incluye: visualizaciones clave (semáforo de roturas de stock inminentes, curva de ventas vs. previsión, mapa de calor de referencias por velocidad de venta y stock disponible, ranking de referencias en liquidación acelerada) y las alertas automáticas que debe recibir cada perfil del equipo.

7. Implementación por fases y ROI: Diseña el roadmap de implementación en 3 fases durante 12 meses. Para cada fase: funcionalidades incluidas, esfuerzo de desarrollo estimado, datos necesarios para el modelo de IA, criterios de éxito medibles y ROI esperado (reducción de mermas, reducción de liquidaciones, mejora del margen). Incluye también el proceso de change management para que el equipo de producto y comercial adopte el sistema basado en datos en lugar de la intuición.

Proporciona código comentado, diagramas de arquitectura en texto y ejemplos de outputs del sistema para que el equipo no técnico entienda qué obtendrá. Todo debe ser aplicable a la realidad del textil español, con referencia a estándares como GS1 para la gestión de EAN de prendas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Reducción de exceso de stock y roturas en empresas textiles con IA predictiva',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de moda asistido por IA para creación de colecciones',
                'description'      => 'Usa inteligencia artificial como asistente creativo para diseñar colecciones de moda, explorar tendencias y crear moodboards y fichas técnicas de producto.',
                'prompt_content'   => <<<'EOT'
Eres un director creativo de moda con más de 15 años de experiencia diseñando colecciones para marcas de todos los segmentos, desde fast fashion hasta alta costura. Has adoptado la IA como herramienta de asistencia creativa sin que esto signifique perder el punto de vista artístico ni la identidad de la marca. Tu filosofía: la IA amplifica la creatividad del diseñador, no la reemplaza.

Contexto del proyecto de diseño:
- Diseñadora independiente con marca propia de ropa de mujer contemporánea
- Estilo: minimalismo sofisticado con referencias a la arquitectura y al arte contemporáneo
- Segmento de precio: medio-alto (prendas entre 150 y 600 euros)
- Necesidad: diseñar la colección primavera-verano de la próxima temporada con 35 looks
- Punto de partida: la colección debe girar en torno al concepto "agua y piedra" — contraste entre fluidez y solidez
- Reto: mantener coherencia de colección mientras se explora suficiente variedad para atraer a distintos perfiles de cliente

Desarrolla el proceso completo de diseño de la colección:

1. Investigación del concepto creativo: Desarrolla el concepto "agua y piedra" como directriz creativa de la colección. Incluye: investigación de referencias visuales y culturales (arte, arquitectura, naturaleza, cine, fotografía) que inspiran la colección, el mood y la emoción que debe transmitir la colección cuando una mujer la lleva puesta, cómo se traduce el concepto en decisiones concretas de diseño (siluetas, volúmenes, texturas, movimiento), el hilo conductor narrativo que da coherencia a los 35 looks y cómo comunicar el concepto al equipo de producción, al equipo de ventas y a la prensa.

2. Paleta de colores y selección de materiales: Define la paleta de color completa de la colección. Incluye: los 8-10 colores de la paleta con nombre evocador (no solo el nombre técnico) y su referencia Pantone, la lógica narrativa de la paleta (cómo los colores se relacionan con el concepto agua-piedra), materiales y tejidos propuestos para la colección (con nombre técnico, composición, proveedor tipo y por qué conectan con el concepto), cómo combinar los tejidos entre sí para crear looks coherentes y el manejo del color y los tejidos en las prendas de inversión vs. las prendas de entrada de precio.

3. Arquitectura de la colección: Diseña la estructura de los 35 looks. Incluye: distribución por categorías de producto (tops, faldas, pantalones, vestidos, chaquetas, abrigos, piezas clave) y cuántas unidades de cada categoría justifican la colección, los 5 looks de impacto que liderarán la presentación y la comunicación, los looks comerciales que serán la base de las ventas a tiendas, los looks de precio de entrada que permiten acceder a la marca por primera vez, cómo los looks se relacionan entre sí para crear outfits y cómo se estructura el desfile o la presentación para contar la historia de la colección.

4. Ficha técnica de producto: Diseña la estructura de la ficha técnica completa para una prenda de la colección. Toma como ejemplo un vestido midi de tejido fluido (categoría: look de impacto). La ficha debe incluir: croquis técnico con vistas frontal, trasera y lateral (descríbelo en detalle para que un ilustrador pueda dibujarlo), descripción técnica de cada detalle constructivo (entalle, escote, manga, bajo, cierre, forro), tabla de medidas por talla, especificaciones de tejido y composición, instrucciones de lavado y conservación, coste estimado de producción y precio de venta recomendado.

5. Proceso de desarrollo con IA: Describe cómo usas herramientas de IA en cada fase del proceso creativo. Incluye: cómo usar Midjourney o Adobe Firefly para explorar variaciones de silhuetas y estampados antes de comprometerte con un diseño, cómo usar Claude para desarrollar los textos narrativos de la colección (dossier de prensa, textos de ecommerce, guión del desfile), cómo usar herramientas de análisis de tendencias con IA (Heuritech, Trendalytics) para validar que el concepto conecta con las tendencias de temporada y cómo integrar estos tools en tu proceso sin que sustituyan tu visión artística.

6. Moodboard y comunicación visual: Diseña el proceso de creación del moodboard maestro de la colección y los materiales de comunicación. Incluye: estructura del moodboard (imágenes de referencia, paleta de color, texturas de tejido, tipografía de la colección, mujer inspiracional), cómo crear el dossier de colección para presentar a compradores de tiendas multimarca, briefing para la sesión de fotos del lookbook (concepto visual, locación, modelos, estilismo, referencias fotográficas) y materiales digitales para redes sociales derivados del lookbook.

7. Temporalidad y entrega al mercado: El calendario de la moda tiene plazos inamovibles. Diseña el cronograma de desarrollo de la colección desde el concepto hasta la entrega. Incluye: semanas de diseño y conceptualización, desarrollo de prototipos y toiles, selección de tejidos en ferias (Première Vision, Texworld), correcciones y fit, producción, presentación a compradores (semanas de la moda o showroom), pedidos y entrega a tiendas. Identifica los cuellos de botella más frecuentes y cómo anticiparlos.

Todo debe ser aplicable al trabajo de una diseñadora independiente con un equipo pequeño. Incluye referencias a proveedores de tejidos en España, ferias del sector y cómo usar las herramientas digitales de forma práctica y asequible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Desarrollo de colección de moda con IA como asistente creativo',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas para retail de moda con IA como asesor comercial',
                'description'      => 'Optimiza el rendimiento comercial de tu tienda de moda o red de puntos de venta usando IA para analizar datos, mejorar la conversión y fidelizar clientes.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial especializado en retail de moda con experiencia en la gestión de redes de tiendas propias y franquicias. Tu especialidad es el análisis de KPIs de tienda, la formación de equipos de venta y la implementación de estrategias que convierten más visitantes en compradores y aumentan el ticket medio.

Contexto de la empresa:
- Cadena de 12 tiendas de moda femenina de precio medio en ciudades españolas
- Superficie media de tienda: 120 m²
- Ticket medio actual: 85 euros, objetivo: llegar a 110 euros en 6 meses
- Tasa de conversión actual: 22% (de cada 100 personas que entran, 22 compran), objetivo: 28%
- Problema detectado: gran variabilidad de rendimiento entre tiendas (la mejor convierte al 35%, la peor al 14%)
- Equipo: cada tienda tiene 3-4 personas, con alta rotación del personal de venta

Desarrolla la estrategia completa de mejora comercial:

1. Diagnóstico de la variabilidad entre tiendas: Diseña el proceso de diagnóstico para entender por qué hay tanta diferencia de rendimiento entre tiendas. Incluye: los indicadores que debes analizar para cada tienda (ventas por m², conversión, ticket medio, unidades por ticket, ratio de devoluciones, venta de colección nueva vs. outlet), cómo hacer mystery shopping estructurado para evaluar la experiencia de cliente en cada tienda, qué observar en las tiendas de mejor rendimiento para identificar las prácticas que las hacen mejores y cómo construir el mapa de mejores prácticas a transferir al resto de la red.

2. Estrategia de aumento del ticket medio: El ticket medio de 85 euros está por debajo del potencial. Diseña las estrategias para llegar a 110 euros. Incluye: técnicas de venta complementaria (cross-selling) específicas para tienda de moda, cómo entrenar al equipo para completar el look del cliente sin que suene a presión de venta, visual merchandising que facilita el cross-selling (exponer los accesorios junto a las prendas que complementan), política de precios y packs que incrementan el ticket y cómo usar el CRM de la tienda para identificar el potencial de ticket de cada cliente conocido.

3. Formación del equipo de venta en moda: La alta rotación hace que la formación sea un reto permanente. Diseña el programa de onboarding y formación continua para el personal de tienda. Incluye: contenido del programa de incorporación para los primeros 5 días (conocimiento de producto, técnicas de atención, procesos de tienda), formación en técnicas de venta específicas de moda (escucha activa, identificación de la ocasión de uso, propuesta de looks), sistema de mentoría por parte de las vendedoras más experimentadas y plan de formación continua mensual para mantener la motivación y las habilidades.

4. Gestión del cliente VIP: El 20% de los clientes genera el 60% de las ventas en moda. Diseña el programa de fidelización del cliente VIP. Incluye: criterios para identificar a los clientes VIP en el CRM, protocolo de atención personalizada (llamada de aviso de nueva colección, reserva de prendas antes del lanzamiento, descuento exclusivo en primera compra de temporada), eventos privados para clientas VIP en las tiendas, cómo gestionar el cumpleaños de la clienta como momento de contacto de alto valor y métricas para medir el rendimiento del programa VIP.

5. Visual merchandising orientado a la conversión: La forma en que se presenta el producto impacta directamente en la conversión. Diseña las directrices de visual merchandising para la red. Incluye: principios de exposición en escaparate para atraer tráfico (cuántos looks mostrar, cómo manejar la rotación, efecto de temporada), distribución interior de la tienda por zonas (entrada, zona caliente, probadores, zona de impacto), reglas de exposición en barra y en percha para facilitar la decisión de compra, gestión de la zona de rebajas para que no canibalice las ventas de colección y guía de cambio visual semanal para mantener la tienda fresca.

6. Gestión de la temporada de rebajas y outlet: Las rebajas son el momento de mayor tráfico pero menor margen. Diseña la estrategia de gestión de rebajas. Incluye: protocolo de decisión de qué prendas entran en rebajas y en qué porcentaje de descuento (análisis de velocidad de venta vs. cobertura de stock), estrategia de comunicación de las rebajas para generar tráfico sin devaluar la marca, cómo gestionar la transición entre rebajas y nueva colección en el mismo espacio físico, política de devoluciones en rebajas y cómo aprovechar el tráfico de rebajas para captar clientes de la nueva colección.

7. KPIs y control de la red de tiendas: Define el sistema de control de la red de 12 tiendas. Incluye: dashboard semanal del director comercial con los KPIs más importantes (ventas diarias vs. objetivo, conversión, ticket medio, horas de apertura vs. ventas por hora), reunión mensual de red con estructura y agenda tipo, sistema de ranking de tiendas que genera competencia sana, proceso de intervención cuando una tienda tiene desviaciones persistentes y criterios de apertura de nuevas tiendas basados en datos de las tiendas existentes.

Proporciona scripts de venta, plantillas de seguimiento de KPIs y ejemplos reales del sector moda retail en España. Todo debe ser aplicable sin grandes inversiones tecnológicas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Mejora de conversión y ticket medio en cadenas de tiendas de moda',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Desarrollo de colecciones con análisis de tendencias de moda e IA',
                'description'      => 'Usa inteligencia artificial para analizar tendencias del sector moda, identificar oportunidades de producto y tomar mejores decisiones de colección.',
                'prompt_content'   => <<<'EOT'
Eres un director de producto y tendencias para una marca de moda con profundo conocimiento del análisis de tendencias, los ciclos de la industria textil y el uso de datos para fundamentar las decisiones creativas y comerciales de una colección.

Contexto del proyecto:
- Marca de moda española de precio medio que diseña y produce sus propias colecciones
- Equipo de producto: directora creativa + 2 diseñadoras + product manager
- Proceso actual: las decisiones de colección se basan principalmente en la intuición de la directora creativa, la observación de competidores y la asistencia a ferias de tendencias
- Problema: las colecciones tienen una siniestralidad alta (30% de referencias con ventas muy por debajo de lo esperado) y se pierden tendencias que hubieran funcionado bien
- Objetivo: integrar análisis de datos y tendencias en el proceso de decisión de colección sin frenar la creatividad

Desarrolla el sistema de análisis de tendencias y desarrollo de producto:

1. Mapa del ecosistema de tendencias: Explica cómo se originan y propagan las tendencias en la industria de la moda. Describe: el modelo de difusión de tendencias desde la alta costura al fast fashion, los principales focos de innovación de tendencias (pasarelas, calles, redes sociales, subculturales), el calendario de tendencias y cuánto tiempo tarda una tendencia en llegar a cada segmento del mercado, cómo identificar si una tendencia está en fase emergente, en crecimiento o en declive y por qué el análisis de tendencias pasadas predice las futuras.

2. Proceso de investigación de tendencias con IA: Diseña el proceso sistemático de investigación de tendencias que la marca debe hacer cada temporada. Incluye: fuentes de datos primarias y secundarias a monitorizar (Instagram, Pinterest, TikTok, pasarelas, ferias, editoriales de moda, plataformas de análisis como Heuritech o Tagwalk), metodología de análisis cuantitativo de tendencias (qué datos recoger, cómo medirlos, cómo identificar las señales débiles tempranas), cómo usar herramientas de análisis de tendencias con IA para automatizar el seguimiento y cómo sintetizar la información en un informe de tendencias accionable para el equipo de diseño.

3. Análisis de la colección anterior: El mejor predictor del éxito futuro es el análisis honesto del pasado. Diseña el proceso de análisis post-temporada. Incluye: metodología de análisis de sellout por referencia (velocidad de venta, semanas de cobertura, margen final, talla más vendida), identificación de los patrones de éxito y fracaso (qué tipo de prenda, qué color, qué precio, qué canal vendió mejor), análisis de las devoluciones para entender qué expectativas no se cumplieron y cómo convertir estos aprendizajes en principios de diseño para la siguiente colección.

4. Framework de decisión de colección: Diseña el framework de toma de decisiones para la colección que integre creatividad y datos. Incluye: proceso de briefing de colección que incluya tanto la visión creativa como los datos de temporada anterior y tendencias, criterios cuantitativos y cualitativos para decidir qué categorías de producto ampliar, reducir o eliminar, modelo de selección de referencias (cuántas referencias de cada categoría, a qué precio, en qué colores), proceso de revisión del pre-assortment con el equipo comercial y criterios de go/no-go para referencias con riesgo alto de fracaso.

5. Planificación de la colección con datos: Desarrolla el proceso de planificación cuantitativa de la colección. Incluye: modelo de previsión de ventas por referencia basado en el histórico y las tendencias, metodología de pricing basada en el análisis del competidor y el valor percibido, planificación del presupuesto de producción por categoría y análisis de sensibilidad (¿qué pasa si una referencia clave no funciona?), proceso de planificación de tallas y colores por referencia basado en el histórico y sistema de seguimiento de la colección durante la temporada para detectar early las referencias que necesitan apoyo o liquidación anticipada.

6. Colaboración con el equipo creativo: El mayor reto es integrar el análisis de datos en un proceso altamente creativo sin matar la intuición y el riesgo artístico que hacen a una marca interesante. Diseña el proceso de colaboración entre el equipo de análisis y el equipo creativo. Incluye: cómo presentar los datos de tendencias al equipo de diseño de forma que inspiren en lugar de limitar, el proceso de revisión del assortment donde datos y creatividad dialogan, cómo defender ante la dirección una decisión creativa que los datos no avalan pero la intuición dice que funcionará y cómo gestionar el fracaso de una apuesta creativa de forma constructiva.

7. Herramientas digitales para el equipo de producto: Define el stack de herramientas digitales que necesita el equipo de producto de una marca de moda mediana. Incluye: herramienta de PLM (Product Lifecycle Management) para la gestión de las fichas técnicas, herramienta de análisis de tendencias (comparativa de las opciones del mercado por precio y funcionalidad), sistema de BI para el análisis de ventas post-temporada, herramienta de gestión del calendario de colección y cómo integrar estas herramientas para que el equipo trabaje en un flujo conectado.

Incluye plantillas de informes de tendencias, frameworks de decisión en tabla y ejemplos del proceso de marcas de moda española que están integrando datos en su proceso creativo. Todo debe ser aplicable a un equipo de producto pequeño sin grandes recursos tecnológicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Reducción del riesgo de colección mediante análisis de tendencias basado en datos',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos creativos en la industria de la moda con IA',
                'description'      => 'Lidera, desarrolla y retiene a equipos creativos de diseño y producción textil en un sector con alta presión de temporadas y competencia por el talento.',
                'prompt_content'   => <<<'EOT'
Eres un director de Recursos Humanos y gestión de talento con especialización en industrias creativas, concretamente en el sector de la moda y el textil. Conoces las particularidades de gestionar equipos donde conviven perfiles muy creativos (diseñadores, patronistas, estilistas) con perfiles técnicos (patronistas, cortadores, costureras) y perfiles de negocio (comerciales, product managers, buyers).

Contexto de la empresa:
- Marca de moda española en crecimiento con 45 empleados
- Equipos: diseño (8 personas), producción (15 personas incluyendo taller propio), comercial (10 personas), ecommerce y marketing (6 personas), administración y finanzas (6 personas)
- Problema principal: alta rotación en el equipo de diseño (3 diseñadoras han abandonado en 18 meses) y dificultad para encontrar patronistas con experiencia
- Cultura: dinámica y creativa pero con mucha presión de temporadas que genera burnout
- Proceso de trabajo: ciclo de 6 meses por colección con picos de trabajo intenso 2 veces al año
- CEO/fundadora: perfile muy creativo, con dificultades para delegar y dar autonomía al equipo

Desarrolla la estrategia completa de gestión de talento para la industria de la moda:

1. Diagnóstico de la rotación en el equipo de diseño: Diseña el proceso de diagnóstico para entender las causas de la alta rotación. Incluye: proceso de entrevistas de salida estructuradas específicas para perfiles creativos (qué preguntar y cómo para obtener respuestas honestas), análisis de las condiciones laborales vs. el mercado (salarios, horarios, flexibilidad, ambiente), evaluación de la cultura de trabajo creativo (autonomía, reconocimiento, oportunidades de desarrollo), y cómo los picos de trabajo de temporada afectan al bienestar del equipo. Proporciona el cuestionario de salida completo adaptado al perfil creativo.

2. Estrategia de atracción del talento creativo: Los diseñadores de moda con experiencia son escasos y muy buscados. Diseña la propuesta de valor al empleado creativo. Incluye: los factores que más valoran los diseñadores de moda al elegir dónde trabajar (más allá del salario), cómo comunicar la cultura y los proyectos de la marca en LinkedIn e Instagram para atraer talento, proceso de selección que evalúa tanto la capacidad técnica (portfolio review) como el fit cultural, cómo encontrar y atraer patronistas con experiencia (formación específica en España: patronaje industrial, alta costura) y estrategia de prácticas universitarias para identificar talento joven.

3. Gestión de la creatividad y la autonomía: La principal tensión en empresas de moda es entre la visión de la fundadora y la autonomía que necesitan los diseñadores para desarrollarse. Diseña el sistema de gestión creativa. Incluye: proceso de briefing de colección que da contexto y directrices sin limitar la creatividad, sistema de revisión creativa que construye en lugar de destruir (feedback constructivo específico para el entorno creativo), cómo delegar la dirección creativa de algunas piezas o categorías a diseñadoras senior, gestión de los desacuerdos creativos entre fundadora y equipo y cómo documentar el ADN creativo de la marca para que no dependa solo de la fundadora.

4. Gestión de los picos de trabajo de temporada: El sector de la moda tiene ciclos de trabajo muy intensos antes de las entregas. Diseña el sistema de gestión del bienestar en temporada alta. Incluye: planificación anticipada del calendario para identificar los cuellos de botella, sistema de distribución del trabajo en los 6 meses del ciclo (concentración en las fases críticas, recuperación en las fases de menor intensidad), política de horas extra y compensación específica para el sector moda, protocolo de detección temprana de burnout en el equipo creativo y medidas de apoyo al equipo en los momentos de mayor presión.

5. Desarrollo profesional para perfiles de moda: El sector de la moda tiene pocos caminos de carrera claros dentro de las marcas medianas. Diseña el plan de desarrollo para los perfiles clave. Incluye: mapa de carrera para diseñadoras (junior → senior → directora de diseño), plan de formación específico (asistencia a ferias de tendencias, cursos de patronaje 3D, visitas a fabricantes de tejidos), mentoría de la fundadora hacia las diseñadoras más prometedoras, oportunidades de visibilidad externa (nombre en los créditos de la colección, representación en eventos del sector) y criterios de promoción transparentes y objetivos.

6. Gestión del equipo de producción: El equipo de producción (15 personas incluyendo taller propio) tiene dinámicas muy diferentes al equipo creativo. Diseña la gestión específica para este equipo. Incluye: planificación de la capacidad del taller por temporada, sistema de seguimiento del avance de producción, gestión de la calidad en el proceso de confección, formación técnica continua para las oficialas de costura, gestión de las relaciones con los proveedores externos cuando el taller no tiene capacidad suficiente y cómo mantener la motivación de un equipo con trabajo repetitivo de alta precisión.

7. Comunicación interna y cultura: Con 45 personas en diferentes equipos con dinámicas muy distintas, la comunicación es un reto. Diseña el sistema de comunicación interna. Incluye: reunión de lanzamiento de temporada donde todos los equipos entienden la visión de la colección, sistema de actualización del estado de la colección para que producción, comercial y marketing estén alineados, proceso de retrospectiva post-temporada para aprender y mejorar y cómo celebrar los logros de la temporada (ventas conseguidas, prensa, momentos destacados) para mantener la motivación del equipo entre temporadas.

Adapta todo al sector de la moda español, con referencias al convenio colectivo de industrias textiles y confección y a las particularidades de la gestión de equipos creativos. Incluye plantillas de evaluación del desempeño adaptadas al entorno creativo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Retención de talento creativo y gestión del bienestar en marcas de moda',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera y control de costes en la industria de la moda con IA',
                'description'      => 'Optimiza la gestión financiera de una empresa de moda, controla los costes de producción y mejora la rentabilidad de las colecciones usando IA como asistente financiero.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con especialización en empresas de moda y retail textil. Tu experiencia abarca el control de costes de producción de colecciones, la gestión de la tesorería en un negocio con alta estacionalidad, el análisis de la rentabilidad por colección y canal, y la financiación del circulante en el sector moda.

Contexto financiero de la empresa:
- Marca de moda española con fabricación propia y distribución a multimarca + ecommerce
- Facturación: 3,5 millones de euros (1,5M mayorista, 1,5M ecommerce, 0,5M tienda propia)
- Margen bruto actual: 52%, objetivo: llegar al 58% en 2 años
- Problema principal: las colecciones de temporada requieren una inversión de producción alta (800.000 euros) que se recupera con meses de retraso por el modelo de cobro a multimarca
- Segundo problema: el 25% de la producción acaba liquidada a precios de coste o por debajo, destruyendo el margen
- Sistema de control: Excel básico, sin análisis de rentabilidad por referencia ni por canal

Desarrolla el sistema de control financiero completo:

1. Estructura de costes de la colección: Diseña el modelo de análisis de costes de producción de una colección de moda. Incluye: estructura de costes por prenda (materiales, mano de obra directa, costes de producción externos, patrones y muestras, transporte, aranceles), metodología de cálculo del coste estándar por referencia antes de la producción y comparación con el coste real al cierre, análisis de las desviaciones de coste más frecuentes (materiales más caros, defectos de producción, cambios de última hora) y cómo incorporar todos los costes ocultos de la colección (ferias, muestras, agentes) en el análisis de rentabilidad real.

2. Análisis de rentabilidad por referencia y canal: La rentabilidad varía enormemente entre referencias y entre canales. Diseña el sistema de análisis. Incluye: modelo de cuenta de resultados por referencia (precio de venta → margen bruto → margen neto tras costes variables de canal), comparativa de rentabilidad entre el canal mayorista, el ecommerce y la tienda propia (considerando descuentos comerciales, comisiones de plataforma, costes de envío y devoluciones), identificación de las referencias que destruyen margen y cómo decidir si eliminarlas de la siguiente colección y KPIs de rentabilidad que deberías revisar semanalmente durante la temporada.

3. Gestión de la tesorería en el sector moda: La moda tiene un ciclo de tesorería muy particular: inviertes en producción 6 meses antes de cobrar. Diseña el modelo de gestión de tesorería. Incluye: modelo de cash flow proyectado para un año completo con los dos ciclos de colección, identificación de los puntos críticos de tensión de liquidez (pago a proveedores de producción antes de cobrar a los clientes), estrategias de financiación del circulante específicas para el sector moda (confirming, factoring de las facturas a multimarca, anticipo de ventas ecommerce), negociación de condiciones de pago con proveedores de tejidos y confección y gestión del fondo de maniobra óptimo para una empresa de moda de este tamaño.

4. Control del exceso de stock y liquidaciones: El 25% de producción liquidada a precio de coste destruye el margen del negocio. Diseña el sistema de control. Incluye: proceso de seguimiento de la velocidad de venta semanal por referencia durante la temporada, criterios y timing para tomar decisiones de liquidación anticipada (descuento en tienda, venta a outlet, venta a plataformas de stock), modelo de impacto financiero de cada decisión de liquidación (comparar coste de almacenamiento vs. precio de liquidación), cómo las decisiones de compra de la siguiente colección deben incorporar el aprendizaje de las liquidaciones de la temporada anterior.

5. Pricing estratégico para maximizar el margen: El pricing en moda es complejo: debe cubrir costes, ser competitivo y reflejar el posicionamiento de la marca. Diseña la estrategia de pricing. Incluye: metodología de fijación de precios que parte del coste de producción real (no estimado) y añade el margen objetivo por canal, análisis del precio frente a competidores directos con elasticidad de demanda estimada, estrategia de precios para las diferentes categorías de producto dentro de la colección (prendas de entrada, prendas de inversión, accesorios), gestión de los precios de rebajas y liquidación de forma que no destruyan la percepción de valor de la marca y cómo revisar la estrategia de pricing entre temporadas.

6. Financiación del crecimiento: La marca quiere crecer de 3,5 a 6 millones de euros en 3 años. Diseña el plan de financiación del crecimiento. Incluye: análisis de las necesidades de financiación del crecimiento (cuánto capital adicional se necesita y para qué), opciones de financiación disponibles para una empresa de moda española en crecimiento (línea de crédito bancaria, financiación de la producción con anticipo de pedidos, capital privado, fondos de moda sostenible si hay certificaciones), preparación del business plan financiero para presentar a financiadores y criterios para decidir qué tipo de financiación es más adecuada según el perfil de la empresa.

7. KPIs financieros del sector moda: Define los 15 indicadores financieros más relevantes para una empresa de moda de este tamaño. Para cada indicador: fórmula, benchmark del sector moda española, frecuencia de seguimiento y acción a tomar si está fuera de rango. Incluye indicadores específicos del sector: sell-through rate, margen de primera precio, ratio de liquidaciones sobre ventas y días de inventario.

Proporciona modelos de análisis en formato tabla, fórmulas de cálculo y referencias a las particularidades contables del sector moda (reconocimiento de ingresos por colección, valoración de stocks de moda con obsolescencia). Todo debe ser implementable en Excel o Google Sheets para una empresa de este tamaño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Mejora del margen y control financiero en empresas de moda con alta estacionalidad',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad intelectual y contratos en la industria de la moda con IA',
                'description'      => 'Protege tu marca y tus diseños, gestiona contratos con fabricantes y distribuidores, y navega el marco legal del sector moda con IA como asistente jurídico.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho de la moda y la propiedad intelectual con experiencia en la protección de marcas, diseños industriales, contratos de licencia y distribución en el sector textil. Conoces el marco legal europeo (reglamentos comunitarios de marca y diseño), la legislación española (Ley de Marcas, Ley de Propiedad Intelectual) y los acuerdos internacionales relevantes (ADPIC, Arreglo de Niza).

Contexto de la consulta legal:
- Diseñadora española que ha lanzado su marca de moda hace 3 años
- Ha construido una identidad de marca reconocible: nombre, logo, estética visual y patrones propios
- Situación actual: está empezando a detectar copias de sus diseños en plataformas chinas (Shein, AliExpress), quiere expandirse a Portugal y Francia, y está negociando un acuerdo de licencia con una empresa de complementos que quiere usar su marca
- Necesidad legal: proteger su propiedad intelectual, estructurar el acuerdo de licencia y prepararse legalmente para la expansión internacional

Desarrolla el asesoramiento legal completo:

1. Diagnóstico de la propiedad intelectual actual: Diseña el proceso de auditoría de propiedad intelectual para la marca. Incluye: inventario de todos los activos intelectuales a proteger (nombre comercial, marca denominativa, marca figurativa, diseños de prendas, estampados originales, fotografías del lookbook, colecciones de catálogo), evaluación del estado de protección actual de cada activo (registrado vs. no registrado, ámbito geográfico, vencimiento), identificación de las vulnerabilidades actuales (activos no registrados que están en riesgo) y priorización de las acciones de protección según el valor estratégico del activo.

2. Estrategia de registro de marca: Diseña la estrategia óptima de registro de marca para la expansión nacional e internacional. Incluye: diferencia entre marca nacional española (OEPM), marca de la Unión Europea (EUIPO) y marca internacional vía sistema de Madrid (OMPI), recomendación de clases de Niza a registrar para una marca de moda (qué clases cubren prendas, accesorios, tiendas, servicios online, redes sociales), proceso de búsqueda de anterioridades antes de solicitar el registro, plazos y costes aproximados de cada tipo de registro y qué hacer si hay una marca anterior similar en algún mercado objetivo.

3. Protección de los diseños de moda: La protección de los diseños de moda es compleja porque la imitación rápida es parte del modelo del fast fashion. Explica: qué se puede proteger legalmente en moda (diseño comunitario registrado, diseño comunitario no registrado, derecho de autor sobre estampados originales, protección de la configuración de producto), qué no se puede proteger (tendencias generales, técnicas de confección, colores aislados), el sistema de diseño comunitario no registrado y los 3 años de protección automática, cómo documentar los diseños para poder probar la originalidad y la fecha de creación en caso de litigio y cuándo vale la pena registrar un diseño y cuándo no compensa económicamente.

4. Acciones contra la copia en plataformas digitales: Shein y AliExpress están copiando sus diseños. Diseña el plan de acción. Incluye: cómo documentar la infracción correctamente (capturas, referencias, precios, fechas), proceso de notificación y retirada en cada plataforma (DMCA en plataformas americanas, proceso de denuncia en AliExpress y Shein), cuándo y cómo enviar un requerimiento extrajudicial a los fabricantes chinos, colaboración con la OEPM y la Agencia Tributaria para interceptar mercancía falsificada en aduanas y cuándo tiene sentido iniciar acciones judiciales en España y en qué jurisdicción.

5. Contrato de licencia de marca: La diseñadora va a licenciar su marca a una empresa de accesorios. Diseña las cláusulas esenciales del contrato de licencia. Incluye: definición del objeto de la licencia (categorías de producto, territorio, exclusividad o no exclusividad), control de calidad del licenciatario (proceso de aprobación de productos, auditorías de producción, estándares de calidad mínimos), estructura de royalties (base de cálculo, tipo porcentual, mínimos garantizados, reporting y pago), protección de la imagen de marca (cómo y dónde puede usar el licenciatario la marca, aprobación de materiales publicitarios), duración y condiciones de renovación y terminación y cómo protegerse si el licenciatario incumple los estándares de calidad.

6. Contratos con fabricantes y proveedores: La relación con los fabricantes (patronistas, talleres, proveedores de tejidos) requiere contratos específicos. Diseña las cláusulas esenciales para: (a) contrato con taller de confección externo (confidencialidad de los diseños, propiedad de los patronajes, condiciones de calidad y entrega, penalizaciones por incumplimiento), (b) acuerdo de confidencialidad con patronistas freelance (qué cubre, duración, compensación si se incumple), (c) contrato con agente comercial en mercados internacionales (comisión, exclusividad territorial, duración, qué ocurre si el agente no alcanza objetivos).

7. Compliance legal en la expansión internacional: Exportar a Francia y Portugal requiere cumplir con normativa adicional. Describe: requisitos de etiquetado de prendas en cada mercado (composición, tallas, instrucciones de lavado en el idioma local), normativa de responsabilidad del productor en residuos textiles (ley francesa anti-derroche, SDDR en España), restricciones en el uso de materiales (REACH en la UE para sustancias químicas en textiles), normativa de comercio electrónico transfronterizo dentro de la UE y derechos de los consumidores en devoluciones y garantías.

Incluye modelos de cláusulas contractuales, referencias a la normativa española y europea aplicable y guía práctica de los costes y plazos de cada acción de protección. Todo debe ser comprensible para una diseñadora sin formación legal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Protección legal de marca y diseños de moda en mercados nacionales e internacionales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en ecommerce de moda con IA conversacional',
                'description'      => 'Diseña y gestiona la experiencia de atención al cliente en tiendas online de moda, reduce las devoluciones y aumenta la satisfacción usando IA.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia del cliente (CX) para ecommerce de moda con profundo conocimiento de los puntos de dolor únicos de comprar ropa y complementos online: la incertidumbre del talle, el color en pantalla vs. realidad, la política de devoluciones y la ansiedad de la entrega.

Contexto de la tienda online:
- Ecommerce de moda femenina de precio medio con 15.000 pedidos anuales
- Tasa de devolución actual: 32% (el promedio del sector es 25%, objetivo: bajar al 20%)
- Principales causas de devolución: talla no coincide con la esperada (45%), color diferente en pantalla (20%), calidad diferente a la esperada (20%), cambio de opinión (15%)
- Tiempo de respuesta actual en atención al cliente: 48 horas por email, sin chat en tiempo real
- NPS de la tienda: 28 (objetivo: superar 50)
- Herramientas actuales: Shopify, email básico, sin chatbot ni herramientas de IA

Desarrolla el sistema completo de atención al cliente para ecommerce de moda:

1. Reducción de devoluciones por talla: La principal causa de devolución es el problema de talla. Diseña el sistema para reducirlo antes de que ocurra la devolución. Incluye: guía de tallas detallada (cómo medirse en casa, tabla de conversión entre tallas europeas, españolas, UK e internacionales, qué medida usar según el tipo de prenda), sistema de recomendación de talla personalizada (preguntarle al cliente su talla habitual en otras marcas y recomendar la más adecuada), descripciones de producto que comunican claramente el corte (oversize, ajustado, regular) y cómo usa la prenda la modelo fotografiada (talla y medidas de la modelo) y sistema de valoraciones de talla verificadas de compradores anteriores.

2. Chatbot de atención al cliente para moda: Diseña el chatbot que resuelve las consultas más frecuentes de forma autónoma. Incluye: árbol de conversación para las 10 consultas más frecuentes (estado del pedido, política de devoluciones, guía de tallas, disponibilidad de colores, tiempo de entrega, formas de pago, cambios antes del envío, reclamo por artículo defectuoso, seguimiento de la devolución y consulta de crédito de tienda), cómo personalizar las respuestas usando el historial de compras del cliente, escalado natural al agente humano para situaciones complejas y métricas de éxito del chatbot.

3. Protocolo de gestión de devoluciones como oportunidad: Las devoluciones son un momento clave para fidelizar o perder al cliente. Diseña el proceso de gestión de devoluciones que convierte un problema en una oportunidad. Incluye: proceso de solicitud de devolución simplificado al máximo (online, sin preguntas innecesarias), opciones que ofreces al cliente (devolución del dinero, cambio de talla o modelo, crédito de tienda con beneficio extra), cómo usar el motivo de devolución para recomendar una alternativa mejor antes de que devuelva, seguimiento post-devolución para entender si el cliente quedó satisfecho y cómo usar los datos de devoluciones para mejorar las fichas de producto.

4. Gestión de reclamaciones por calidad: Las reclamaciones de calidad son las más delicadas porque afectan a la percepción de la marca. Diseña el protocolo de gestión. Incluye: criterios para clasificar la reclamación (defecto de fabricación vs. desgaste por uso vs. error en el cuidado), proceso de solicitud de fotos y documentación de la incidencia, escala de soluciones según la gravedad del defecto (reemplazo inmediato, reparación, descuento en próxima compra, devolución del importe), comunicación con el cliente en cada paso y proceso de reporte interno al equipo de producto cuando hay defectos recurrentes en una referencia.

5. Experiencia post-compra: La relación con el cliente no termina con el pago. Diseña el journey post-compra. Incluye: secuencia de emails transaccionales desde la confirmación del pedido hasta la entrega (confirmación, preparación del pedido, envío con tracking, entrega, valoración del producto), cómo hacer seguimiento si el cliente no ha recibido su pedido en el plazo prometido sin que tenga que reclamar, solicitud de valoración del producto en el momento óptimo (días después de la entrega, no inmediatamente) y cómo usar las valoraciones para mejorar las fichas de producto y reducir futuras devoluciones.

6. Programa de fidelización para ecommerce de moda: Diseña el programa de fidelización que hace que una clienta compre más de una vez al año. Incluye: sistema de puntos o cashback adaptado a la frecuencia de compra en moda (2-4 veces al año), beneficios exclusivos para clientas recurrentes (acceso anticipado a nuevas colecciones, talla reservada en sus referencias favoritas, descuento en su cumpleaños), programa de embajadoras (clientas que comparten sus looks en redes sociales a cambio de descuento o crédito) y cómo usar el historial de compras para personalizar las comunicaciones y recomendaciones.

7. Métricas de experiencia del cliente en ecommerce de moda: Define el sistema de medición completo. Incluye: tasa de devolución por categoría de producto y por causa de devolución, NPS transaccional (tras la compra) y relacional (a los 3 meses), tasa de repetición de compra por cohorte de cliente, customer lifetime value para el segmento de moda de precio medio, CSAT del servicio de atención al cliente por canal y tiempo de primera respuesta y resolución. Para cada métrica incluye el benchmark del sector ecommerce de moda en España y la acción a tomar si está por debajo del objetivo.

Proporciona scripts de respuesta por email y chat, plantillas de emails transaccionales y ejemplos de cómo tiendas de moda online están resolviendo estos problemas de forma creativa. Todo debe ser implementable en Shopify con herramientas de bajo coste.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Reducción de devoluciones y mejora del NPS en tiendas online de moda',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de moda sostenible e imagen personal con IA',
                'description'      => 'Desarrolla tu práctica freelance como consultor de moda, personal shopper o asesor de imagen usando IA para personalizar servicios y escalar tu negocio.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de moda y asesor de imagen freelance con experiencia en personal shopping, consultoría de imagen corporativa, styling para eventos y asesoramiento de marca personal para directivos y emprendedores. Has adoptado la IA como herramienta para personalizar tus servicios, crear contenido y gestionar más clientes sin perder calidad.

Situación de tu práctica freelance:
- Asesora de imagen independiente con 5 años de experiencia
- Servicios actuales: asesoramiento de imagen personal, personal shopping, styling para sesiones de fotos y consultoría de guardarropa para directivas
- Clientes tipo: mujeres de 35 a 55 años, directivas y emprendedoras con alto poder adquisitivo
- Ingresos actuales: 42.000 euros anuales, objetivo: llegar a 70.000 en 18 meses
- Formato de trabajo: mayoritariamente presencial en Madrid, quieres añadir servicios online escalables
- Mayor oportunidad no explotada: las empresas que quieren mejorar la imagen corporativa de sus equipos directivos

Desarrolla el sistema completo para hacer crecer tu práctica de consultoría:

1. Estrategia de posicionamiento y especialización: Para crecer de 42.000 a 70.000 euros necesitas especializarte y subir tu precio medio. Diseña la estrategia de posicionamiento. Incluye: análisis de los segmentos de servicio más rentables y escalables (imagen corporativa para empresas vs. asesoramiento individual, servicios online vs. presenciales, moda sostenible como diferencial), propuesta de valor diferencial para el mercado de directivas y empresas en Madrid, precio recomendado para cada servicio con justificación basada en el valor que aportas (no en tu coste), cómo comunicar el posicionamiento en tu web, LinkedIn y materiales de venta.

2. Diseño de servicios escalables online: El trabajo presencial tiene un techo de ingresos por horas. Diseña los servicios online que te permiten escalar sin multiplicar tu tiempo. Incluye: auditoría de guardarropa virtual (proceso online, herramientas para que la clienta comparta fotos de su armario, plantilla de informe que puedes generar con IA), guía de estilo personalizada entregada en PDF (estructura, qué incluir, cómo personalizarla con IA en menos tiempo), comunidad online de suscripción mensual para directivas que quieren mejorar su imagen de forma continua (qué contenido incluir, precio mensual, plataforma recomendada) y curso online de imagen para directivas (temario, formato, plataforma, precio).

3. Servicio de imagen corporativa para empresas: El segmento B2B tiene tickets mucho más altos que el B2C individual. Diseña el servicio de imagen corporativa para empresas. Incluye: propuesta de valor para el director de RRHH o el CEO (por qué la imagen del equipo directivo impacta en los resultados de negocio), estructura del servicio de imagen corporativa (taller grupal + sesiones individuales + guía de estilo corporativa), proceso de venta B2B (cómo identificar y contactar a las empresas objetivo, quién es el decisor, argumentario de venta), precio y modelo de propuesta económica para una empresa de 10 directivos y cómo hacer el seguimiento posterior para generar compras recurrentes.

4. Metodología de asesoramiento con IA: Describe cómo integras la IA en tu proceso de asesoramiento para entregar más valor en menos tiempo. Incluye: cómo usas IA para analizar el perfil de la clienta y generar recomendaciones de estilo personalizadas antes de la sesión, cómo generas el informe de imagen personalizado en menos tiempo con IA (estructura del informe, qué partes puedes automatizar y cuáles requieren tu juicio experto), cómo usas IA para crear moodboards de estilo personalizados, cómo preparas las sesiones de personal shopping con IA (research de tiendas, selección de prendas candidatas, planificación de la ruta) y qué herramientas concretas usas (Claude, Midjourney, Canva, Pinterest).

5. Estrategia de contenido y autoridad: Para atraer clientes de alto nivel necesitas ser percibida como la experta en imagen para directivas. Diseña la estrategia de contenido. Incluye: pilares de contenido en LinkedIn (qué temas posicionan a una asesora de imagen ante directivas y empresas), tipos de post que generan más engagement en tu nicho (análisis de looks de directivas conocidas, tips de imagen para reuniones importantes, errores de imagen más frecuentes en entornos corporativos), estrategia de newsletter semanal para mantener el contacto con tu audiencia y posibles colaboraciones con medios (revistas de empresa, podcasts para directivas) para aumentar tu visibilidad.

6. Gestión de clientes y administración de la práctica: Con más clientes y servicios más complejos necesitas un sistema de gestión eficiente. Diseña el sistema de gestión de tu práctica freelance. Incluye: proceso de onboarding de nuevas clientas (cuestionario previo, sesión de descubrimiento, propuesta de servicios), sistema de seguimiento de proyectos activos (qué herramientas usar, cómo hacer seguimiento de las sesiones y los entregables), gestión de la facturación y los pagos (política de anticipos, formas de pago, gestión de impagados) y sistema de referidos para que tus clientas satisfechas te recomienden.

7. Plan de crecimiento a 12 meses: Diseña el plan de acción concreto para llegar de 42.000 a 70.000 euros en 18 meses. Incluye: distribución objetivo de ingresos entre servicios presenciales (límite de capacidad), servicios online escalables y contratos corporativos, número de clientes y proyectos necesarios en cada categoría, acciones comerciales prioritarias para los primeros 3 meses (las que generan ingresos más rápido), inversiones necesarias (web nueva, herramientas digitales, presencia en LinkedIn) y hitos mensuales para saber si estás en el camino correcto.

Proporciona plantillas de propuesta de servicios, estructura del informe de imagen y guión para la sesión de descubrimiento con el cliente. Todo debe ser aplicable con los recursos de una consultora freelance individual en España, con referencias al mercado de asesoría de imagen y moda en Madrid y Barcelona.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Escalar la práctica freelance de asesoría de imagen y moda añadiendo servicios digitales',
                'vote_score'       => 35,
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
