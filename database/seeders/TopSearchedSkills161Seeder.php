<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills161Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing agroalimentario: branding de origen y autenticidad',
                'description'       => 'Branding para productos del campo, denominaciones de origen y estrategias que conectan al consumidor urbano con el origen y la autenticidad del producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing especializado en el sector agroalimentario con experiencia en branding de productos de origen, denominaciones de origen protegidas (DOP/IGP), agricultura ecológica y la comunicación que conecta al consumidor urbano moderno con la autenticidad del producto del campo.

Necesito desarrollar una estrategia de marketing para mi producto o empresa agroalimentaria. Dime lo que necesitas y luego dame el plan completo.

**CONTEXTO DE MI PRODUCTO O EMPRESA**
Producto o gama de productos: [describe el producto: tipo, origen geográfico, método de producción, certificaciones]
¿Tienes DOP, IGP, ecológico u otras certificaciones? [especifica]
Mercado objetivo actual: [mercado local, nacional, exportación, canal online, tiendas gourmet, supermercados, HORECA]
Cliente tipo: [describe al consumidor que quieres atraer o que ya te compra]
Principal reto de marketing: [diferenciación, visibilidad, precio premium, acceso a nuevos canales, etc.]
Presupuesto de marketing disponible: [estimado anual]

**LO QUE NECESITO**

1. **Estrategia de branding y storytelling de origen**
El producto agroalimentario de calidad se vende con historia. Ayúdame a construir el relato de marca: el origen geográfico y su importancia, el método de producción y las personas detrás, los valores que conectan con el consumidor actual (sostenibilidad, tradición, autenticidad, trazabilidad). Dame una arquitectura de marca y los mensajes clave para cada canal.

2. **Posicionamiento premium y justificación del precio**
¿Cómo justifico que mi producto cuesta el doble que la alternativa de supermercado? Dame los argumentos de valor que funcionan con el consumidor urbano: la historia detrás del precio, cómo comunicar la diferencia de calidad sin resultar elitista, y los formatos de contenido que demuestran el valor en lugar de reclamarlo.

3. **Estrategia digital para productos agroalimentarios**
¿Qué funciona en digital para vender productos del campo? Dame una estrategia para: Instagram y TikTok (qué tipo de contenido conecta con el consumidor urbano), SEO para producto gourmet y productos de origen, y cómo construir una tienda online que convierta para productos premium con alto valor unitario.

4. **Distribución y acceso a canales**
Tiendas gourmet, mercados artesanales, clubs de producto, suscripciones, HORECA, exportación a mercados con alta valoración de los productos españoles (Alemania, Países Bajos, Francia, mercados asiáticos). Para cada canal, dame la estrategia de acceso, los márgenes típicos y cómo gestionar la relación con el distribuidor sin perder el control de la marca.

5. **Certificaciones como herramienta de marketing**
DOP, IGP, agricultura ecológica, comercio justo, huella de carbono: ¿cuáles valen la pena para mi producto y mercado? Explica el valor de marketing de cada certificación, el coste y el tiempo de obtenerlas, y cómo comunicarlas de forma que el consumidor las entienda.

6. **Contenido y community building alrededor del producto**
¿Cómo construyo una comunidad de clientes fieles que compren repetidamente y me recomienden? Dame ideas para: newsletter, visitas a la finca o bodega, colaboraciones con chefs y foodies, programa de embajadores y experiencias que vinculan al consumidor urbano con el origen del producto.

7. **Plan de marketing para los próximos seis meses**
Cierra con un plan de acción priorizado: qué hacer primero, con qué presupuesto, y cómo medir el éxito de cada acción.

Adapta las recomendaciones al sector agroalimentario español y europeo. Quiero una estrategia realista para el tamaño y recursos que te he descrito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de marketing y branding para productos agroalimentarios con denominación de origen, ecológicos o gourmet.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'AgriTech: software de gestión agrícola y datos de campo',
                'description'       => 'Plataformas de gestión agrícola, drones, sensores y sistemas que procesan datos de satélite para optimizar el rendimiento del cultivo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un ingeniero de software especializado en AgriTech con experiencia en plataformas de agricultura de precisión, procesamiento de imágenes multiespectrales de drones y satélites, sistemas de gestión de explotaciones agrícolas y la integración de sensores de campo con plataformas cloud.

Ayúdame a diseñar o mejorar una solución tecnológica para el sector agrícola.

**CONTEXTO DEL PROYECTO**
Tipo de solución que quiero construir: [app de gestión de parcelas, plataforma de agricultura de precisión, sistema de alerta de plagas, análisis de imágenes de drones, marketplace agrícola, etc.]
Usuario objetivo: [agricultor individual, cooperativa, empresa agroindustrial, técnico agrónomo, etc.]
Cultivos o producción objetivo: [cereal, horticultura, frutales, viñedo, olivar, ganadería, etc.]
Fuentes de datos disponibles o deseadas: [satélite Sentinel/Landsat, drones propios del cliente, sensores de campo, estaciones meteorológicas, APIs externas]
Estado actual del proyecto: [idea / prototipo / MVP en uso / producto creciendo]
Stack tecnológico preferido o existente: [si tienes preferencias o restricciones]

**LO QUE NECESITO**

1. **Arquitectura de la plataforma AgriTech**
Diseña la arquitectura técnica completa: frontend para el agricultor (web y app móvil adaptada a uso en campo, con soporte offline cuando no hay cobertura), backend de procesamiento de datos agrícolas, pipeline de datos de sensores y satélite, almacenamiento de series temporales geoespaciales, y capa de analítica e inteligencia. Justifica las elecciones tecnológicas.

2. **Procesamiento de imágenes y datos geoespaciales**
¿Cómo proceso imágenes multiespectrales de drones y satélites para calcular índices como NDVI, NDRE, SAVI? Explica el pipeline de procesamiento: corrección radiométrica, ortomosaico, cálculo de índices, generación de mapas de prescripción. Qué librerías y herramientas usar (GDAL, Rasterio, Google Earth Engine, Sentinel Hub).

3. **Integración con maquinaria agrícola (ISOBUS/AEF)**
¿Cómo conecto la plataforma con los tractores y maquinaria para la aplicación variable de insumos (VRA)? Explica el estándar ISOBUS, el ecosistema AEF, y cómo generar los archivos de prescripción (shapefile, ISO-XML) que lee la consola del tractor.

4. **APIs y fuentes de datos agrícolas**
¿Qué APIs y fuentes de datos son útiles para una plataforma AgriTech? Dame el catálogo: datos de satélite gratuitos (Copernicus, USGS), datos meteorológicos (AEMET, OpenWeatherMap, APIs de meteored), datos de suelo (bases de datos ESDAC, SoilGrids), precios de mercado agrícola, y cómo integrarlos en la plataforma.

5. **Experiencia de usuario para el agricultor**
El agricultor no es un usuario tecnológico típico. Dame las pautas de diseño para una app agrícola que el agricultor use de verdad: simplicidad extrema, flujos adaptados al ciclo del cultivo (siembra, tratamientos, cosecha), alertas que lleguen cuando importan (helada, lluvia, plagas), y visualización de mapas que el agricultor entienda sin formación técnica.

6. **Modelo de datos agrícolas**
¿Cómo modelo los datos de una explotación agrícola? Dame el esquema de la base de datos para: fincas y parcelas (geometrías GIS), cultivos y campañas, operaciones de campo (fecha, tipo, producto, dosis, maquinaria), análisis de suelo, observaciones de campo, y el historial de producción.

7. **Privacidad y soberanía del dato agrícola**
El agricultor europeo es muy sensible a quién tiene acceso a los datos de sus parcelas. ¿Cómo diseño la plataforma para que el agricultor mantenga el control de sus datos? Incluye el cumplimiento del RGPD en el contexto agrícola y el marco europeo de datos agrícolas.

Sé técnico y específico. Si necesitas más contexto sobre mi caso antes de responder, pregúntame.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de arquitecturas y plataformas de software para agricultura de precisión, procesamiento de imágenes de drones y gestión de explotaciones agrícolas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de packaging alimentario: etiquetado y sostenibilidad',
                'description'       => 'Requisitos de etiquetado obligatorio, diseño que comunica en el lineal y tendencias de packaging sostenible en el sector de la alimentación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador gráfico especializado en packaging alimentario con experiencia en proyectos para marcas de gran consumo, marcas blancas y productos gourmet, con profundo conocimiento del Reglamento UE 1169/2011 de información alimentaria y las normativas de packaging sostenible.

Necesito diseñar o rediseñar el packaging de un producto alimentario. Dame orientación completa.

**CONTEXTO DEL PROYECTO**
Producto alimentario: [describe el producto: categoría, ingredientes principales, público objetivo]
Tipo de envase: [caja de cartón, bolsa flexible, tarro de vidrio, lata, tetrabrik, bandeja con film, etc.]
Mercado de distribución: [supermercados, tiendas gourmet, e-commerce, HORECA, exportación]
Posicionamiento de la marca: [premium / masivo / ecológico / tradicional / innovador]
Normativas que debo cumplir: [Reglamento 1169/2011, etiquetado ecológico, etc.]
Brief de diseño o referentes: [describe el estilo visual que buscas o marcas de referencia]
Presupuesto de producción del packaging: [estimado para orientar las decisiones de material]

**LO QUE NECESITO**

1. **Análisis de los requisitos legales de etiquetado**
El etiquetado alimentario tiene requisitos muy estrictos en la UE. Dame una checklist completa de la información obligatoria según el Reglamento 1169/2011: denominación del producto, lista de ingredientes, alérgenos en negrita, cantidad neta, fecha de duración, condiciones de conservación, país de origen, datos del operador, modo de empleo, declaración nutricional (formato tabla, por 100g/ml y por porción), y los requisitos de tamaño mínimo de la letra. Señala las particularidades para mi tipo de producto.

2. **Estructura del packaging (cara a cara)**
Diseña la distribución de información en las diferentes caras del envase: cara frontal (nombre, imagen de producto, claim principal, sellos), cara trasera (ingredientes, tabla nutricional, alérgenos, descripción, instrucciones), cara lateral (información adicional, promotions, redes sociales, QR). Para cada cara indica la jerarquía visual y la función de comunicación.

3. **Diseño que vende en el lineal**
En un supermercado, tienes menos de tres segundos para captar la atención. Dame las estrategias de diseño para el lineal: color y contraste para destacar frente a la competencia, el uso de la fotografía de producto, los claims que funcionan (natural, sin azúcar, origen, artesanal), la legibilidad a distancia, y cómo diseñar el facing principal para que sea coherente en varios SKUs de la misma gama.

4. **Packaging sostenible: materiales y comunicación**
El consumidor valora el packaging sostenible pero también lo compara con el precio. Dame las opciones de materiales sostenibles para mi tipo de envase: tipos de cartón reciclado y reciclable, plásticos de origen biológico, film compostable, etiquetas sin PVC. Explica cómo comunicar la sostenibilidad del packaging sin greenwashing y cumpliendo la Directiva de Declaraciones Medioambientales.

5. **Claims y sellos que comunican valor**
¿Qué sellos y claims puedo usar en el packaging y qué condiciones debo cumplir para cada uno? Cubre: sellos de certificación ecológica (eurhoja, sello CAAE), DOP/IGP, sin gluten, vegano, Fairtrade, Nutriscore, Keyhole, y las declaraciones nutricionales y de propiedades saludables reguladas por el Reglamento 1924/2006.

6. **E-commerce packaging: el packaging secundario y la experiencia de apertura**
Si el producto se vende online, el packaging tiene una función adicional: sobrevivir al transporte y crear una experiencia de apertura que el cliente quiera compartir. Dame recomendaciones para el packaging secundario (caja de envío), los insertos y la experiencia de unboxing de un producto alimentario premium.

7. **Briefing para la imprenta y producción**
¿Qué documentación técnica debo entregar a la imprenta? Dame el checklist de archivos y especificaciones técnicas: formato de archivo (PDF/X-4, CMYK), perfiles de color, marcas de corte, sangrado, resolución mínima de imágenes, y las pruebas de color que debo pedir antes de la impresión definitiva.

Sé muy específico con los requisitos legales. Los errores de etiquetado en alimentación tienen consecuencias graves.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de packaging alimentario conforme al Reglamento 1169/2011, estrategia de comunicación en el lineal y opciones de packaging sostenible.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en el canal HORECA: hoteles, restaurantes y catering',
                'description'       => 'Vende a hoteles, restaurantes y catering: particularidades del canal, distribuidores y gestión de la lista de precios con márgenes estrechos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director comercial con quince años de experiencia vendiendo productos alimentarios, bebidas y suministros al canal HORECA (hoteles, restaurantes, cafeterías, catering y colectividades), con conocimiento profundo de la estructura de la distribución hostelera española y los márgenes de cada eslabón de la cadena.

Ayúdame con el siguiente reto de ventas en HORECA.

**CONTEXTO DE MI EMPRESA Y PRODUCTO**
Producto o gama que vendo: [describe el producto alimentario, bebida o suministro de hostelería]
Tipo de cliente HORECA objetivo: [restaurante independiente, cadena, hotel, catering, colectividades, cafeterías de paso]
Distribución actual: [venta directa / distribuidores / ambos]
Zona geográfica de actuación: [nacional / regional / por provincias]
Ticket medio por pedido y frecuencia: [euros por pedido y cada cuánto días repite]
Principal reto comercial: [captación de nuevos clientes / retención / precio / distribución / márgenes]

**LO QUE NECESITO**

1. **Estructura del canal HORECA y márgenes por eslabón**
Explícame la cadena de distribución completa del canal HORECA en España: del fabricante al distribuidor mayorista (Makro, Transgourmet, distribuidores regionales), del distribuidor al operador (el restaurante o el hotel), y del operador al consumidor final. Para cada eslabón, dame los márgenes típicos y las condiciones de pago habituales.

2. **Estrategia de distribución: directa vs. a través de mayoristas**
¿Cuándo tiene sentido vender directamente al restaurante y cuándo trabajar con distribuidores? Dame los criterios de decisión, cómo gestionar la relación con el distribuidor para que mi producto tenga prioridad en su catálogo, y cómo manejar el conflicto de canal cuando vendo directamente y a través de distribuidor al mismo tiempo.

3. **Prospección y captación de nuevos clientes HORECA**
¿Cómo accedo a los cocineros, jefes de compras y propietarios de restaurantes y hoteles? Dame estrategias de prospección: visita en frío a la hora de preparación (no durante el servicio), el rol de las ferias del sector (Hostelco, HIP, Alimentaria), el uso de LinkedIn y las redes de cocineros, y cómo conseguir una prueba de producto en cocina que lleve al primer pedido.

4. **Gestión de la lista de precios y los descuentos**
El HORECA negocia siempre. ¿Cómo estructuro una tarifa de precios que me deje margen para negociar sin destruir el precio de mercado? Dame estrategias de gestión de precios: tarifa de catálogo vs. precio neto, descuentos por volumen y por frecuencia, rappels anuales, y cómo comunicar subidas de precio sin perder al cliente.

5. **Presentación del producto en cocina (food demo)**
La prueba en cocina es el momento decisivo. Dame un protocolo para la demostración culinaria: cómo preparar la degustación, qué decir al cocinero sobre el producto (origen, producción, ficha técnica), cómo capturar el feedback y cómo hacer el seguimiento para convertir la prueba en un primer pedido.

6. **Retención y desarrollo de la cuenta**
El cliente HORECA es infiel: si el distribuidor le ofrece algo equivalente más barato, se va. ¿Cómo construyo una relación de fidelidad? Dame estrategias: programa de apoyo al restaurante (formación, fichas de receta, marketing co-op), visitas de seguimiento con valor añadido, y cómo gestionar una queja de calidad sin perder al cliente.

7. **KPIs del comercial HORECA**
¿Qué indicadores debo medir para gestionar bien la cartera de clientes HORECA? Lista los KPIs clave: número de clientes activos, frecuencia media de pedido, ticket medio, cobertura de la zona (% de clientes potenciales trabajados), tasa de conversión de demos y tasa de reactivación de clientes dormidos.

Dame respuestas concretas y prácticas, adaptadas al mercado español.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia comercial para venta de productos alimentarios y bebidas al canal HORECA en España.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Apps de agricultura de precisión: producto para el agricultor moderno',
                'description'       => 'Plataformas que llevan la inteligencia al campo: prescription maps, variable rate application y las funcionalidades que el agricultor realmente usa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager especializado en AgriTech con experiencia en plataformas de agricultura de precisión, gestión de explotaciones agrícolas y herramientas digitales para el agricultor profesional. Entiendes tanto el ciclo agrícola y las necesidades reales del agricultor como las métricas y metodologías de un producto digital.

Ayúdame con el siguiente reto de producto en el sector agrícola.

**CONTEXTO DE MI PRODUCTO**
Tipo de aplicación: [plataforma de gestión de parcelas, app de cuaderno de campo, sistema de alerta de plagas, herramienta de prescripción, marketplace de insumos, etc.]
Usuario objetivo: [agricultor individual, técnico agrónomo, cooperativa, empresa agroindustrial]
Tipo de explotación: [cereal, horticultura, frutales, viñedo, olivar, ganadería extensiva/intensiva]
Estado del producto: [idea / prototipo / MVP con primeros usuarios / crecimiento]
Principal reto de producto: [describe el problema concreto que necesitas resolver]
Mercado geográfico: [España / Europa / otros]

**LO QUE NECESITO**

1. **Discovery con el agricultor: entender las necesidades reales**
El agricultor no usa el lenguaje de las startups. ¿Cómo hago investigación de usuario con agricultores? Dame técnicas adaptadas: cómo acceder a ellos (cooperativas, asociaciones, ferias agrícolas), qué preguntar en una entrevista de descubrimiento, cómo distinguir lo que dicen que necesitan (más funcionalidades) de lo que realmente usan, y cómo observar el trabajo real en campo.

2. **Las funcionalidades que el agricultor realmente usa**
Muchas apps AgriTech tienen docenas de funcionalidades que nadie usa. Según tu experiencia, ¿qué funcionalidades usan realmente los agricultores de forma habitual? Prioriza: cuaderno de campo digital, alertas de lluvia y helada, cálculo de dosis de tratamiento, mapas de producción histórica, gestión de maquinaria, y comunicación con el técnico agrónomo. ¿Cuáles son el core y cuáles son el nice-to-have?

3. **Prescription maps y variable rate application**
La prescripción variable (VRA) es la funcionalidad estrella de la agricultura de precisión pero la más difícil de implementar. ¿Cómo diseño el flujo de creación de mapas de prescripción para que un agricultor sin formación técnica pueda generarlos? Incluye: la integración de datos de entrada (análisis de suelo, NDVI, histórico de cosecha), el interfaz de creación del mapa, la exportación en formatos compatibles con la maquinaria (ISOBUS) y el seguimiento del resultado.

4. **Modelo de negocio y pricing para AgriTech**
¿Cómo monetizo una app agrícola? El agricultor es muy sensible al precio. Compara los modelos: suscripción mensual/anual por explotación o por hectáreas gestionadas, freemium con funcionalidades premium, modelo cooperativo (la cooperativa paga por sus socios), y venta de datos agregados anonimizados. ¿Cuál funciona mejor para mi tipo de producto y usuario?

5. **Adopción y retención en el ciclo agrícola**
El ciclo agrícola tiene estacionalidad fuerte: el agricultor de cereal usa la app intensivamente durante la siembra y la cosecha y la ignora el resto del año. ¿Cómo diseño la estrategia de engagement para mantener al usuario activo durante todo el año y reducir la fuga entre campañas?

6. **Distribución a través de cooperativas y distribuidores de insumos**
El canal de distribución natural de una app agrícola no es el App Store: es la cooperativa, el distribuidor de fitosanitarios y el técnico agrónomo. ¿Cómo diseño un programa de canal para que la cooperativa sea el comercial que vende mi app a sus socios? Dame la estructura del acuerdo de canal, el kit de ventas para el técnico de la cooperativa y el programa de formación.

7. **Métricas de un producto AgriTech**
¿Qué métricas son relevantes para una app agrícola? No son las métricas SaaS estándar (DAU no aplica en cereal). Dame los KPIs adaptados al ciclo agrícola: activaciones por campaña, retención de campaña en campaña (equivalente al churn anual), cobertura de parcelas gestionadas sobre el total de la explotación, y la correlación entre el uso de la plataforma y los resultados agronómicos del cliente.

Sé específico para el contexto del agro europeo y español.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Product management para aplicaciones de agricultura de precisión: discovery, funcionalidades clave, modelo de negocio y distribución a través de cooperativas.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de trabajadores temporales en el campo y campaña agrícola',
                'description'       => 'Contratos por campaña, gestión de trabajadores de distintas nacionalidades y programas de integración que funcionan en el sector agrícola.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un responsable de RRHH especializado en el sector agroalimentario con experiencia en la gestión de personal temporal de campaña, contratación de trabajadores extranjeros para la recolección y los programas de integración y retención en explotaciones agrícolas intensivas.

Ayúdame con la siguiente situación de gestión de personas en el sector agrícola.

**CONTEXTO DE LA EXPLOTACIÓN**
Tipo de explotación y cultivo: [fruta, horticultura, viñedo, olivar, etc.]
Número de trabajadores de campaña necesarios: [aproximado]
Origen habitual de los trabajadores: [nacionales, GEINE (contratación en origen), UE, otras nacionalidades]
Duración de la campaña: [meses del año y picos de demanda]
Principal reto de RRHH: [falta de mano de obra, alta rotación durante la campaña, gestión de trabajadores de distintos países, cumplimiento normativo, integración, etc.]
Zona geográfica: [región o provincia]

**LO QUE NECESITO**

1. **Marco legal de la contratación temporal agrícola**
Dame un resumen del marco legal aplicable: el Estatuto de los Trabajadores para el contrato eventual por circunstancias de la producción, el contrato fijo discontinuo (la reforma laboral de 2022 cambió mucho en este punto), el Régimen Especial Agrario de la Seguridad Social (SETA), y las particularidades del subsidio agrario para trabajadores del campo.

2. **Contratación en origen (GEINE)**
¿Cómo funciona el programa de Gestión Integrada de Empleo (GEINE) para contratar trabajadores en origen, especialmente en Marruecos? Explica el proceso: acuerdo con los países de origen, selección de candidatos con el SEPE, permisos de trabajo, transporte, alojamiento y condiciones del retorno. ¿Cuáles son los retos más comunes y cómo gestionarlos?

3. **Alojamiento de trabajadores: obligaciones y buenas prácticas**
En muchas explotaciones, el empleador proporciona alojamiento. ¿Cuáles son las obligaciones legales en cuanto a condiciones de habitabilidad, precio máximo que se puede descontar del salario, y las inspecciones de trabajo? Dame también las buenas prácticas de alojamiento que mejoran la satisfacción y reducen la rotación durante la campaña.

4. **Gestión multicultural de equipos**
Cuando en el mismo equipo de recolección conviven trabajadores de cinco países distintos, ¿cómo gestiono la comunicación (idiomas), los conflictos culturales, el respeto de las diferencias religiosas (Ramadán durante la campaña, por ejemplo) y la cohesión del grupo?

5. **Prevención de riesgos laborales en el campo**
Los trabajadores agrícolas tienen una tasa de accidentalidad alta. Dame un plan de PRL adaptado al trabajo agrícola de temporada: los riesgos más frecuentes (golpe de calor, accidentes con maquinaria, uso de productos fitosanitarios, postura forzada en recolección), la formación inicial obligatoria que debo dar a cada trabajador nuevo antes de que empiece a trabajar, y las medidas preventivas clave.

6. **Retención durante la campaña**
El trabajador temporal del campo tiene muchas opciones en pico de campaña: otras explotaciones pagan igual o más. ¿Cómo retengo a los mejores trabajadores durante toda la campaña sin subir el salario por encima del convenio? Dame estrategias no salariales: trato digno, comunicación clara, incentivos de productividad o asistencia, y el papel del encargado de campo como figura clave de retención.

7. **Digitalización de la gestión del personal de campaña**
¿Qué herramientas digitales pueden ayudar a gestionar el alta masiva de trabajadores al inicio de la campaña, el control de asistencia en campo (sin cobertura), el pago de nóminas y la gestión documental? Dame recomendaciones de software específico para RRHH en el sector agroalimentario.

Sé muy concreto con la normativa española vigente y las realidades del sector.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestión de personal de campaña agrícola: contratación en origen, alojamiento, equipos multiculturales y cumplimiento normativo.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas agrícolas: PAC, seguros agrarios y estacionalidad del cash flow',
                'description'       => 'La estacionalidad del cash flow agrícola, los seguros agrarios, las subvenciones de la PAC y los instrumentos financieros del sector primario.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor financiero especializado en el sector agroalimentario y el sector primario, con experiencia en la gestión financiera de explotaciones agrícolas, cooperativas y empresas agroindustriales, y en los instrumentos de ayuda de la Política Agrícola Común (PAC).

Ayúdame a gestionar y optimizar las finanzas de mi explotación o empresa agrícola.

**CONTEXTO DE LA EXPLOTACIÓN O EMPRESA**
Tipo de actividad: [explotación agrícola / cooperativa agrícola / empresa de transformación agroalimentaria]
Cultivos o actividad principal: [cereal, horticultura, viñedo, olivar, ganadería, etc.]
Superficie o tamaño: [hectáreas, cabezas de ganado, o facturación aproximada]
Régimen de tenencia de la tierra: [propiedad / arrendamiento / aparcería]
Principal reto financiero: [falta de liquidez en determinadas épocas / acceso a financiación / optimización de subvenciones / rentabilidad / deuda]

**LO QUE NECESITO**

1. **Gestión de la estacionalidad del cash flow agrícola**
El agricultor cobra una o dos veces al año (en la cosecha) pero tiene gastos durante todo el año (semillas, fertilizantes, fitosanitarios, mano de obra, maquinaria). Dame estrategias para gestionar el cash flow en este contexto: líneas de crédito para campaña, anticipo de subvenciones, acuerdos de pago aplazado con proveedores, y cómo construir un presupuesto de tesorería adaptado al ciclo agrícola.

2. **La PAC 2023-2027: pagos directos y eco-regímenes**
Explícame los principales pagos que puede recibir una explotación en el período 2023-2027 de la PAC: pago básico por hectárea, pagos complementarios redistribuivos, eco-regímenes (qué prácticas se requieren para cobrarlos), pagos acoplados para determinados cultivos o producciones ganaderas, y las ayudas del desarrollo rural (Pilar II). ¿Cómo maximizo la percepción de ayudas sin incumplir las condiciones de condicionalidad?

3. **Seguros agrarios: qué asegurar y cómo**
El clima es el mayor riesgo de la explotación. Dame una guía de los seguros agrarios en España: los módulos disponibles según el cultivo (seguro de helada, seguro integral, seguro de ingresos), cómo funciona Agroseguro, las subvenciones al coste del seguro y cuándo compensa contratar el seguro frente a autoasegurar el riesgo. ¿Qué cultivos están más expuestos y tienen menos cobertura disponible?

4. **Financiación específica para el sector agrario**
¿Qué instrumentos de financiación están disponibles específicamente para el sector primario? Cubre: líneas del ICO agro, préstamos del FIDA, financiación de cooperativas de crédito agrario (Cajas Rurales), financiación del SAECA (Sociedad Anónima Estatal de Caución Agraria), y fondos europeos del FEAGA y FEADER para inversiones en modernización.

5. **Fiscalidad agraria: módulos y régimen objetivo**
La fiscalidad agraria tiene sus propias particularidades. Explícame: el régimen de estimación objetiva (módulos) para agricultores, el régimen de IVA agrario (recargo de equivalencia vs. régimen general), cuándo conviene pasar a estimación directa, y las deducciones fiscales aplicables a inversiones en maquinaria, instalaciones y eficiencia energética.

6. **Rentabilidad por cultivo y decisiones de reconversión**
¿Cómo calculo la rentabilidad real de cada cultivo o actividad de mi explotación? Dame el método de cálculo del margen bruto por hectárea (ingresos - costes variables) y el margen neto (descontando costes fijos y mano de obra familiar), y cómo usar este análisis para tomar decisiones de reconversión o diversificación de cultivos.

7. **Planificación financiera a largo plazo en la explotación**
Dame las herramientas para la planificación financiera a largo plazo: amortización de inversiones en maquinaria y plantaciones (viñedo, olivar, frutales tienen un período de amortización de décadas), gestión del endeudamiento, y planificación de la sucesión de la explotación (relevo generacional desde el punto de vista financiero y fiscal).

Adapta las respuestas a la realidad del sector agrario español y europeo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión financiera de explotaciones agrícolas: PAC, seguros agrarios, financiación especializada y fiscalidad del sector primario.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Regulación agroalimentaria: OCM, etiquetado y autorizaciones sanitarias',
                'description'       => 'OCM agrícola, normativa de etiquetado, denominaciones de origen y autorizaciones sanitarias para lanzar un producto alimentario al mercado europeo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho agroalimentario europeo con experiencia en la regulación de los mercados agrícolas, el derecho alimentario y los procedimientos de autorización de alimentos en la Unión Europea.

Necesito orientación legal para la siguiente situación en el sector agroalimentario.

**CONTEXTO DE LA CONSULTA**
Tipo de empresa o actividad: [productor agrícola / empresa de transformación / importador / exportador / startup alimentaria]
Producto o actividad implicada: [describe el producto alimentario o la actividad regulada]
Mercado de comercialización: [España / UE / exportación a terceros países]
Situación o consulta concreta: [lanzamiento de nuevo producto / etiquetado / solicitud de DOP-IGP / autorización sanitaria / exportación / comercio de productos ecológicos / OCM]
Plazo o urgencia: [si hay una fecha relevante]

**LO QUE NECESITO**

1. **Regulación del mercado agroalimentario (OCM única)**
El Reglamento (UE) 1308/2013 sobre la Organización Común de Mercados (OCM) regula la mayor parte del sector agrícola europeo. Explícame las normas de comercialización, las intervenciones de mercado, las normas de calidad específicas para los sectores más importantes (frutas y hortalizas, vinos, aceite de oliva, leche y productos lácteos, carne) y las implicaciones prácticas para mi actividad.

2. **Denominaciones de Origen Protegidas e Indicaciones Geográficas Protegidas**
¿Cómo funciona el sistema de DOP/IGP en la UE? Explica el procedimiento de registro ante la Comisión Europea: quién puede solicitar la DOP/IGP (agrupaciones de productores), cómo se elabora el pliego de condiciones, el procedimiento nacional previo, el registro europeo y la protección que confiere. ¿Qué implica producir bajo una DOP/IGP existente y cómo se gestiona el control?

3. **Autorización de nuevos alimentos (Novel Food)**
Si quiero comercializar en la UE un ingrediente o alimento que no se consumía significativamente antes de 1997, necesito autorización de Novel Food. Explícame el procedimiento: quién evalúa (EFSA), qué documentación se necesita, cuánto tarda y cuánto cuesta, y las alternativas (uso como complemento alimenticio, uso tradicional de terceros países).

4. **Normativa de productos ecológicos**
El Reglamento (UE) 2018/848 regula la producción y el etiquetado ecológicos desde 2022. Dame una guía práctica: qué requisitos debe cumplir una explotación para obtener la certificación ecológica, qué organismo de control lo gestiona en España, cómo se usa el logotipo europeo de producción ecológica, y las normas específicas para la importación de productos ecológicos de terceros países.

5. **Etiquetado de vinos y bebidas alcohólicas**
El sector del vino tiene normativa específica muy detallada. Si mi producto es un vino u otra bebida alcohólica, dame los requisitos de etiquetado: mención obligatorias, el nuevo requisito de lista de ingredientes y declaración nutricional en vinos desde diciembre 2023, el etiquetado de vinos DOP/IGP, y las normas de publicidad de alcohol.

6. **Exportación agroalimentaria a terceros países**
¿Qué requisitos debo cumplir para exportar productos agroalimentarios a mercados clave? Cubre: los requisitos de los EE.UU. (FDA, USDA), Japón (certificados de exportación, límites de pesticidas más estrictos que en la UE), China (registro de instalaciones en GACC) y los países del Golfo (certificación halal). ¿Qué organismos españoles gestionan los certificados de exportación?

7. **Sanciones e inspecciones agroalimentarias**
¿Qué pasa si incumplo la normativa agroalimentaria? Dame el régimen sancionador: tipos de infracciones y sus sanciones, qué organismos realizan las inspecciones (AECOSAN, CCAA, SEPRONA, autoridades aduaneras), y cómo gestionar una inspección o una alerta en el sistema RASFF (rapid alert system for food and feed).

Cita los reglamentos concretos y las fechas de aplicación cuando sea relevante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Navegación de la regulación agroalimentaria europea: DOP/IGP, Novel Food, etiquetado, producción ecológica y exportación.',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte a clientes del sector agro en campaña crítica',
                'description'       => 'Los clientes del agro tienen estacionalidad crítica: el soporte durante la campaña no puede fallar porque los plazos son inamovibles.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un responsable de Customer Success especializado en empresas de tecnología agrícola (AgriTech), insumos agrícolas y maquinaria, donde la estacionalidad del cliente es extrema: durante la siembra o la recolección, cada hora de inactividad tiene un coste directo para el agricultor que no puede recuperar ese tiempo.

Ayúdame a diseñar o mejorar el soporte al cliente en el sector agrícola.

**CONTEXTO DE MI EMPRESA Y CLIENTE**
Tipo de producto o servicio: [software de gestión agrícola / maquinaria / drones agrícolas / insumos con app / plataforma de sensores, etc.]
Tipo de cliente: [agricultor individual / cooperativa / empresa agroindustrial / técnico agrónomo]
Principal campaña crítica de mis clientes: [siembra de cereal en otoño / campaña de fresa en primavera / vendimia en septiembre, etc.]
Tamaño del equipo de soporte: [número de personas]
Canales de soporte actuales: [teléfono, email, WhatsApp, chat en app, visitas, etc.]
Principal reto de soporte: [describe el problema concreto]

**LO QUE NECESITO**

1. **Diseño del servicio de soporte para la temporada alta**
El agricultor llama al soporte a las 6 de la mañana antes de salir al campo o a las 9 de la noche cuando vuelve. La campaña dura semanas o pocos meses. ¿Cómo dimensiono el soporte para la temporada alta sin mantener ese coste durante todo el año? Dame estrategias: refuerzo estacional del equipo, extensión del horario de atención durante la campaña, sistema de guardia y los SLAs diferenciados por período del año.

2. **Canal de soporte para el agricultor: qué funciona y qué no**
El agricultor no abre tickets de soporte ni usa portales de autoservicio. ¿Qué canales funcionan realmente? Dame la jerarquía de canales para el sector agro: el teléfono y el WhatsApp como canales principales, cuándo el soporte presencial en campo es necesario (y cómo gestionarlo), y cómo crear contenido de autoservicio (vídeos cortos, guías paso a paso) que el agricultor realmente consulte.

3. **Gestión de incidencias críticas en campaña**
Cuando el agricultor llama porque el dron no arranca, la app no carga los mapas de sus parcelas o la cosechadora con el sistema de trazabilidad falla en plena recolección, cada minuto cuenta. Dame el protocolo de gestión de incidencias críticas durante la campaña: priorización, escalado, comunicación con el cliente y cómo documentar el caso para que no vuelva a ocurrir.

4. **Onboarding antes de la campaña**
La mejor forma de evitar incidencias en campaña es preparar bien al cliente antes. Dame un programa de onboarding pre-campaña: el contacto proactivo con los clientes un mes antes de que empiece la campaña, la revisión del estado de la cuenta, la formación en las nuevas funcionalidades, y la verificación de que el hardware o el software funciona correctamente antes de que el cliente lo necesite.

5. **Comunicación en situaciones de crisis: plataforma caída durante la cosecha**
Si la plataforma tiene una caída durante la vendimia o la recolección de cereal, la crisis de reputación puede ser definitiva. Dame un protocolo de gestión de crisis: comunicación inmediata a los clientes afectados, página de estado del servicio, actualizaciones durante la incidencia y la comunicación post-incidente (post-mortem con el cliente).

6. **Feedback de campaña y mejora continua del producto**
La campaña es la mejor oportunidad para recoger feedback real sobre el producto. ¿Cómo capturo sistemáticamente el feedback de los clientes durante y después de la campaña? Dame un proceso: encuesta post-campaña, llamadas de revisión de campaña con los clientes más importantes, y cómo trasladar este feedback al equipo de producto de forma accionable.

7. **Métricas de éxito del soporte en AgriTech**
¿Qué KPIs son relevantes para un equipo de CS en una empresa agrícola? Adapta las métricas estándar al ciclo agrícola: CSAT post-campaña, NPS anual, tiempo de resolución durante la campaña vs. fuera de campaña, tasa de incidencias por cliente activo y correlación entre satisfacción con el soporte y renovación de la suscripción o del contrato.

Dame respuestas muy prácticas y adaptadas a la realidad del agricultor y del técnico agrónomo como usuarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseño del servicio de soporte al cliente para empresas AgriTech con gestión de la estacionalidad crítica de la campaña agrícola.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultor agtech freelance: proyectos y propuesta de valor',
                'description'       => 'El nicho del consultor independiente en agricultura de precisión y tecnología agrícola: proyectos de cooperativas y grandes explotaciones que pagan bien.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un mentor de negocio con experiencia ayudando a agrónomos y técnicos del sector agrícola a construir una práctica consultora independiente en el nicho de la tecnología agrícola y la agricultura de precisión, con clientes que son cooperativas, grandes explotaciones y empresas agroindustriales.

Quiero construir o hacer crecer mi negocio como consultor freelance en agtech y agricultura de precisión. Dime lo que necesitas saber sobre mi situación.

**MI SITUACIÓN ACTUAL**
Formación y experiencia: [ingeniero agrónomo, técnico agrícola, experiencia en cooperativa, empresa de insumos, etc.]
Especialidad técnica: [agricultura de precisión, teledetección, gestión de datos agrícolas, eficiencia hídrica, sostenibilidad, etc.]
Situación actual: [empleado pensando en el salto / ya independiente pero con pocos proyectos / consolidado que quiere crecer]
Clientes o proyectos actuales: [si ya tienes alguno]
Red de contactos en el sector: [cooperativas, distribuidores, proveedores de maquinaria, administraciones, etc.]
Principal freno: [¿qué te impide avanzar?]

**LO QUE NECESITO**

1. **Definición del nicho y posicionamiento del consultor agtech**
El sector agrícola valora la especialización. Dame ayuda para definir mi nicho: la tecnología que domino + el tipo de explotación o cliente que mejor conozco + el problema concreto que resuelvo. Luego ayúdame a construir una propuesta de valor en dos frases que el gerente de una cooperativa o el responsable de una gran explotación entienda y valore.

2. **Identificación de los clientes que pagan bien**
No todos los clientes agrícolas tienen presupuesto para un consultor externo. ¿Cuáles son los clientes que mejor pagan en el sector agtech? Dame un perfil del cliente ideal: cooperativas de cierto tamaño, grupos de empresas agroalimentarias, fondos de inversión con tierras (SOCUS), empresas de la cadena de distribución que quieren digitalizar sus proveedores, y la administración pública (proyectos de digitalización del agro con fondos europeos FEADER/PERTE Agroalimentario).

3. **Los proyectos más demandados por las cooperativas**
¿Qué proyectos contratan las cooperativas a consultores externos? Dame un catálogo de servicios con el rango de precio y duración típico: diagnóstico de digitalización de la cooperativa, implantación de plataforma de gestión de socios y parcelas, proyectos de agricultura de precisión para los socios, formación en el uso de herramientas digitales, y asesoramiento para la captación de fondos europeos de digitalización.

4. **Acceso al mercado: cómo conseguir los primeros proyectos**
La cooperativa y la gran explotación contratan al consultor agrícola por recomendación, no buscando en Google. ¿Cómo construyo mi red de referencias? Dame estrategias: cómo activar los contactos de años en el sector, el papel de las ferias y jornadas técnicas (Agrilevante, FIMA, Agroexpo), la presencia en LinkedIn y en las publicaciones del sector, y cómo usar los primeros proyectos para generar casos de éxito que traigan el siguiente.

5. **Estructura de precios y modelo de trabajo**
¿Cómo cobro mis servicios como consultor agtech? Dame un marco de precios realista para el mercado español: tarifa día para consultoría técnica, precio de proyecto para diagnósticos e implantaciones, y modelos de retainer mensual para la cooperativa que quiere un agrónomo de confianza sin contratarlo. ¿Cómo paso de cotizar días a cotizar por valor entregado?

6. **Acreditación y credibilidad en el sector**
El sector agrícola es conservador: ¿qué acreditaciones y certificaciones tienen valor para un consultor agtech? Cubre: colegiación como ingeniero agrónomo, certificaciones de plataformas de agricultura de precisión (John Deere Operations Center, Trimble, Bayer Climate FieldView), participación en proyectos europeos de investigación (Horizonte Europa) y publicaciones técnicas en revistas del sector.

7. **Gestión de proyectos agrícolas con estacionalidad**
Los proyectos en el sector agrícola tienen la complicación de la estacionalidad: en plena vendimia o cosecha, el cliente no tiene tiempo para reuniones ni para revisar entregables. ¿Cómo estructuro los proyectos para adaptarme al ciclo del cliente y para que los meses de menor actividad del agricultor sean los de mayor avance del proyecto?

Sé realista sobre el mercado y el tiempo que tarda en construirse una cartera de clientes en el sector agrícola español.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de una práctica consultora independiente especializada en tecnología agrícola y agricultura de precisión con clientes cooperativas y grandes explotaciones.',
                'vote_score'        => 36,
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
