<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills148Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing inmobiliario digital',
                'description'       => 'Genera leads de compradores y vendedores con SEO local, portales inmobiliarios y campañas de social media que dominan el mercado de la vivienda.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing inmobiliario digital con más de diez años de experiencia ayudando a agencias y agentes independientes a generar leads cualificados en mercados locales competitivos. Tu especialidad es combinar SEO local, presencia en portales inmobiliarios y estrategias de social media para construir un flujo constante de contactos de compradores y vendedores.

Necesito que me ayudes a diseñar una estrategia de marketing digital completa para [TIPO DE AGENCIA: independiente / franquicia / boutique de lujo] ubicada en [CIUDAD O ZONA] que trabaja principalmente con [SEGMENTO: primera vivienda / inversión / lujo / alquiler].

**Parte 1: SEO local para el sector inmobiliario**

Explícame cómo posicionar la web de la agencia para búsquedas locales de alta intención como "pisos en venta en [barrio]" o "agencia inmobiliaria [ciudad]". Quiero entender:

- Cómo estructurar las páginas de zona o barrio (neighborhood pages) para que Google las indexe y posicione correctamente.
- Qué elementos de SEO on-page son imprescindibles: schema de RealEstateListing, NAP consistente, velocidad de carga en móvil, URLs semánticas.
- Cómo construir autoridad local con backlinks de medios locales, asociaciones del sector y directorios especializados.
- La estrategia de Google Business Profile: qué publicar, con qué frecuencia y cómo gestionar las reseñas para maximizar la visibilidad en el pack local.
- Cómo crear contenido que responde las preguntas reales de compradores de la zona: guías de barrio, comparativas de precio por metro cuadrado, análisis del mercado local.

**Parte 2: Presencia en portales inmobiliarios**

Los portales como Idealista, Fotocasa o Habitaclia siguen siendo el punto de entrada de la mayoría de compradores. Ayúdame a maximizar el rendimiento dentro de estos portales:

- Cómo redactar descripciones de propiedades que destacan frente a la competencia y generan más contactos, no solo visitas.
- Estrategia de fotografía y video: qué convierte más, qué errores cometen la mayoría de agentes y cómo optimizar el orden de las fotos.
- Cuándo vale la pena invertir en destacados o posiciones premium y cómo medir el ROI.
- Cómo analizar las métricas de los portales para identificar qué propiedades rinden mal y por qué.
- Cómo usar los tours virtuales y los planos 3D para aumentar la tasa de conversión de visita a contacto.

**Parte 3: Social media para captación de leads**

Las redes sociales se han convertido en el canal de descubrimiento y de construcción de confianza más importante para los agentes modernos. Dame una estrategia concreta para:

- Instagram y Facebook: qué tipo de contenido funciona mejor para el sector (antes/después de reformas, guías de barrio, testimonios, tendencias del mercado), con qué frecuencia publicar y cómo usar Reels para alcance orgánico.
- Meta Ads para el sector inmobiliario: cómo segmentar por zona geográfica, intención de compra e ingresos estimados. Qué formatos (carrusel, video, lead ads) generan el coste por lead más bajo para propiedades residenciales.
- LinkedIn para captación de propiedades de inversión y clientes corporativos (reubicaciones de empresa, compra de oficinas).
- TikTok como canal emergente: para qué tipo de agente y qué tipo de propiedades funciona bien.
- Cómo construir una comunidad local en redes que genera referencias orgánicas y posiciona al agente como la voz de autoridad del mercado local.

**Parte 4: Sistema de nurturing y conversión**

Generar leads no sirve de nada si no se convierten. Diseña para mí:

- El flujo de email marketing desde el primer contacto hasta la firma: qué enviar en cada etapa del funnel (interés → visita → oferta → cierre).
- Cómo usar WhatsApp Business para el seguimiento rápido sin resultar invasivo.
- Métricas clave del embudo inmobiliario: ratio de contacto a visita, visita a oferta, oferta a cierre. Qué benchmarks son razonables y cómo mejorarlos.
- Cómo integrar un CRM inmobiliario (Witei, Inmovilla, Salesforce) con los canales de captación para no perder ningún lead.

Sé específico, usa ejemplos concretos y adapta las recomendaciones al contexto que te he dado. El objetivo es que, al terminar, tenga un plan de acción de 90 días que pueda ejecutar con un presupuesto de marketing de [PRESUPUESTO MENSUAL EN EUROS].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar una estrategia de marketing digital inmobiliario completa con SEO local, portales y social media.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plataformas proptech',
                'description'       => 'Construye soluciones para el sector inmobiliario: gestión de propiedades, tours virtuales, valuación automática (AVM) e integraciones con portales del sector.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software especializado en proptech con experiencia construyendo plataformas para el sector inmobiliario: desde marketplaces de compraventa hasta sistemas de gestión de propiedades en alquiler, pasando por herramientas de valuación automática y experiencias de visita virtual.

Necesito tu ayuda para diseñar o mejorar [DESCRIBIR EL PRODUCTO PROPTECH: marketplace de alquiler / sistema de gestión de propiedades / plataforma de inversión inmobiliaria / herramienta de valuación AVM / solución para agencias].

**Parte 1: Arquitectura para el sector inmobiliario**

El sector inmobiliario tiene unas particularidades técnicas que lo diferencian de otros verticales. Explícame:

- Cómo modelar el dato de propiedad (property data model) para que sea lo suficientemente flexible como para representar pisos, casas, locales, oficinas, solares y garajes, con sus atributos específicos, sin convertirse en un monstruo de campos opcionales.
- La estrategia de geolocalización: cómo almacenar y consultar propiedades por zona, radio o polígono. Cuándo usar PostGIS, cuándo ElasticSearch con geo_point y cuándo es suficiente con una simple columna de coordenadas.
- Cómo gestionar las fotos de propiedades a escala: procesamiento, thumbnails, CDN, optimización para web y móvil, y el almacenamiento cuando tienes millones de imágenes.
- El reto de los datos duplicados: las mismas propiedades aparecen en varios portales con datos inconsistentes. Cómo implementar deduplicación y reconciliación de datos.
- Cómo manejar el ciclo de vida de una propiedad: disponible → reservada → vendida/alquilada → fuera de mercado. Los estados intermedios y los cambios de estado que no deberían perderse.

**Parte 2: Integraciones con el ecosistema inmobiliario**

El proptech vive de sus integraciones. Dame una guía para:

- Integración con portales inmobiliarios (Idealista, Fotocasa, Rightmove, Zillow): sus APIs, el formato REAXML / RETS / TRESTLE para sincronización de listings, y cómo gestionar los cambios de precio y disponibilidad en tiempo real.
- Integración con sistemas de firma digital (DocuSign, Signaturit) para digitalizar contratos de compraventa y arrendamiento.
- Conexión con registros de la propiedad y catastro para enriquecer automáticamente los datos de los inmuebles.
- APIs de servicios de barrio (Idealista Analytics, CBRE data, datos del INE) para añadir contexto de mercado.
- Integración con plataformas de financiación hipotecaria: cómo conectar un marketplace de propiedades con simuladores y brokers hipotecarios.

**Parte 3: Valuación automática (AVM)**

Los modelos de valuación automática son cada vez más importantes en proptech. Explícame:

- Qué datos necesitas para construir un AVM básico: transacciones históricas, comparables, datos del edificio, calidad del barrio, proximidad a servicios.
- Los modelos estadísticos clásicos (regresión hedónica) vs. los modelos de machine learning (gradient boosting, redes neuronales) y cuándo usar cada uno.
- Cómo validar la precisión de un AVM: las métricas (MAPE, error mediano), los benchmarks del sector y cómo mejorar el modelo iterativamente.
- Los límites de los AVM y cómo comunicarlos al usuario sin perder su confianza.
- Cómo actualizar el modelo en tiempo real cuando llegan nuevas transacciones al mercado.

**Parte 4: Tours virtuales y experiencia digital de la propiedad**

- Las tecnologías de tour virtual: Matterport, fotos 360 en Kuula, video recorrido vs. tour interactivo. Costes, calidad y casos de uso de cada uno.
- Cómo integrar tours virtuales en tu plataforma sin depender de un único proveedor.
- El impacto medible de los tours virtuales en las métricas de conversión: más contactos, menos visitas presenciales infructuosas.
- Las siguientes tendencias: realidad aumentada para visualizar reformas, planos interactivos y gemelos digitales de edificios.

Adapta las recomendaciones al stack técnico que uso: [STACK: Laravel/PHP, Node.js, Python, Ruby, etc.] y al tamaño del equipo: [TAMAÑO: solo/startup de 3-5/empresa de 10+].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la arquitectura de una plataforma proptech con integraciones, AVM y tours virtuales.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX para real estate',
                'description'       => 'Diseña la experiencia de búsqueda de propiedades: mapas interactivos, filtros, comparativas y el diseño del listado que convierte visitantes en contactos cualificados.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de UX especializado en plataformas inmobiliarias con experiencia en portales de compraventa, alquiler y gestión de propiedades. Conoces en profundidad los patrones de búsqueda de los usuarios inmobiliarios, los puntos de fricción más comunes y las soluciones de diseño que maximizan la conversión de visitante a lead cualificado.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar desde cero la experiencia de búsqueda / rediseñar la página de listado / mejorar los filtros / optimizar la conversión al formulario de contacto] de [PLATAFORMA: marketplace de compraventa / portal de alquiler / web de agencia / app de inversión].

**Parte 1: La experiencia de búsqueda y el mapa**

La búsqueda de propiedades es una experiencia espacial y multidimensional. Guíame en el diseño de:

- La interfaz de búsqueda principal: cuándo priorizar el mapa, cuándo la lista y cómo diseñar la vista dividida (split view) que usan los portales líderes. Cuándo ofrecer cada vista por defecto según el dispositivo y el estado de la búsqueda del usuario.
- El mapa interactivo: cómo representar los clusters de propiedades a diferentes niveles de zoom sin sobrecargar visualmente el mapa. Qué datos mostrar en el pin (precio, fotos en hover) y qué guardar para el detalle.
- El polígono de búsqueda: cómo permitir al usuario dibujar una zona personalizada de búsqueda de forma intuitiva, especialmente en móvil.
- La barra de búsqueda: autocompletado de zonas, barrios, referencias catastrales y nombres de edificios. Cómo gestionar las búsquedas ambiguas.
- Cómo diseñar la actualización dinámica de resultados cuando el usuario mueve el mapa o cambia un filtro, sin que la experiencia se sienta rota o lenta.

**Parte 2: Sistema de filtros para propiedades**

Los filtros inmobiliarios son notoriamente complejos. Ayúdame a diseñar:

- La jerarquía de filtros: cuáles son esenciales (tipo, precio, habitaciones, metros), cuáles secundarios (planta, ascensor, garaje, obra nueva) y cómo organizar los avanzados sin abrumar al usuario con opciones.
- El filtro de precio: slider vs. inputs de texto, rango vs. precio máximo, y cómo gestionar los extremos del mercado (propiedades de lujo, pisos de precio bajo).
- Cómo visualizar cuántos resultados tiene cada opción de filtro (faceted search) sin sobrecargar la interfaz.
- Los filtros de superficie: la confusión entre metros construidos, metros útiles y metros de parcela, y cómo educar al usuario mientras filtra.
- Cómo guardar y recuperar búsquedas: alertas de nuevas propiedades que cumplen los criterios, historial de búsqueda y búsquedas favoritas.
- El diseño de los chips de filtro activo: cómo el usuario sabe qué filtros están aplicados y puede eliminarlos individualmente.

**Parte 3: El listado de propiedad que convierte**

La página de detalle de una propiedad es donde se gana o se pierde el lead. Diseña conmigo:

- La jerarquía visual de la galería de fotos: el orden de las fotos importa (exterior primero, salón, cocina, habitaciones, baños, extras). Cómo diseñar la galería para desktop y el swipe en móvil.
- El bloque de información clave: qué datos poner above the fold (precio, habitaciones, metros, planta, zona) y qué va en el scroll.
- La llamada a la acción de contacto: sticky en móvil, flotante en desktop, cuántos campos pedir en el primer formulario y por qué menos es más.
- Cómo presentar el precio: precio por metro cuadrado, comparativa con el mercado, historial de cambios de precio.
- El mapa de la propiedad con puntos de interés: transporte, colegios, supermercados. Cómo equilibrar la información útil con la privacidad (no mostrar la dirección exacta hasta que hay contacto).
- Los elementos de confianza: certificado energético, referencia catastral, ficha del agente con reseñas.

**Parte 4: Comparativas y herramientas de decisión**

El proceso de compra de una vivienda es largo y requiere comparar. Diseña:

- La herramienta de comparar propiedades: cuántas a la vez, qué atributos comparar, cómo visualizar las diferencias.
- La calculadora hipotecaria integrada en la ficha: qué inputs pedir, qué outputs mostrar y cómo conectar con un broker o banco.
- Los favoritos y las listas: cómo permite el usuario organizar las propiedades que le interesan y compartirlas con su pareja o familia.

Basa tus recomendaciones en las mejores prácticas de portales como Idealista, Zillow, Rightmove o Airbnb (para alquiler), e incluye consideraciones de accesibilidad y responsive design. Adapta el nivel de detalle al estado del proyecto: [ESTADO: exploración inicial / wireframes / diseño visual / mejora de conversión].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar la UX de búsqueda, filtros y listado de propiedad que maximiza la conversión a leads.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas inmobiliarias consultivas',
                'description'       => 'El proceso de venta inmobiliaria moderno: el agente como consultor, la gestión del proceso de compra y las técnicas que cierran en un mercado competitivo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de ventas inmobiliarias con más de quince años de experiencia formando a agentes en el modelo de venta consultiva. Has trabajado con redes de franquicias, agencias boutique y agentes independientes. Tu enfoque se basa en que el agente inmobiliario moderno no vende propiedades: ayuda a las personas a tomar la decisión de vida más importante de su existencia.

Necesito que me ayudes a mejorar mi proceso de ventas como [ROL: agente independiente / agente de franquicia / promotor inmobiliario / agente de inversión] en el mercado de [ZONA Y TIPO DE PROPIEDAD].

**Parte 1: El modelo consultivo aplicado al sector inmobiliario**

La mayoría de los agentes inmobiliarios siguen vendiendo de forma transaccional: enseñan pisos y esperan que el cliente decida. El modelo consultivo cambia esto. Explícame:

- Cómo hacer la primera reunión de cualificación: las preguntas que revelan el verdadero motivador de compra (más allá del número de habitaciones), el presupuesto real (diferente del declarado) y el horizonte temporal.
- Cómo descubrir las necesidades latentes que el cliente ni sabe que tiene: el colegio de los hijos, la oficina del cónyuge, la suegra que viene a vivir.
- El mapa del proceso de compra del cliente: las etapas emocionales por las que pasa (entusiasmo inicial → parálisis por exceso de opciones → duda post-oferta → miedo pre-firma) y cómo el agente guía cada una.
- Cómo posicionarte como el experto del mercado local desde el primer contacto: los datos, las tendencias y las historias que demuestran tu conocimiento sin parecer pedante.
- La diferencia entre acompañar y presionar: cómo crear urgencia real (mercado competitivo, otras ofertas, subidas de tipo) sin perder la confianza del cliente.

**Parte 2: La gestión del proceso de captación**

Captar una exclusiva es la mitad del trabajo. Dame un proceso para:

- La presentación de captación: cómo estructurar los 60 minutos con un propietario que quiere vender, qué materiales llevar y cómo justificar el precio de salida sin crear expectativas irreales.
- El análisis comparativo de mercado (ACM) que convence: cómo presentar los comparables, cómo gestionar el propietario que cree que su piso vale más que el mercado y las técnicas para anclar en precio realista.
- La negociación de la exclusiva: por qué la exclusiva es mejor para el vendedor, cómo manejar las objeciones y cuánto tiempo pedir.
- El sistema de actualización al propietario: qué comunicar cada semana, cómo presentar el feedback de las visitas y cuándo hablar de una reducción de precio.
- Las señales de que una propiedad está mal posicionada y el protocolo para reducir precio antes de que se queme en el mercado.

**Parte 3: Gestión de las visitas y el cierre**

- Cómo preparar una visita: el briefing del inmueble, la historia del barrio, los puntos fuertes y los defectos que hay que mencionar proactivamente.
- La técnica de la visita consultiva: escuchar más que hablar, hacer las preguntas correctas durante la visita y leer las señales de interés del comprador.
- El manejo de las objeciones más comunes: "está caro", "necesita reforma", "la zona no me convence", "hay humedad". Cómo distinguir una objeción real de una cortina de humo.
- Cómo gestionar la situación de múltiples ofertas: qué decir a cada parte, cómo gestionar el proceso con transparencia y cómo evitar conflictos éticos.
- El seguimiento post-visita: cuándo llamar, qué decir y cómo mantener el interés caliente sin ser pesado.
- El cierre: las señales de compra, cómo proponer la oferta y cómo acompañar al cliente en los momentos de duda entre la oferta y la firma.

**Parte 4: El pipeline y los indicadores de un agente de alto rendimiento**

- Las métricas que definen a un agente top: contactos a visitas, visitas a ofertas, días en mercado, precio de venta vs. precio de salida.
- Cómo construir un pipeline de propiedades que garantice un ingreso estable sin la montaña rusa de las comisiones irregulares.
- El sistema de referencias: cómo convertir a clientes pasados en una fuente continua de negocio nuevo.
- La mentalidad del agente de alto rendimiento: gestión del rechazo, la constancia en los periodos de sequía y la inversión continua en formación.

Dame recomendaciones específicas, con ejemplos de conversaciones reales y scripts adaptables a mi contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Mejorar el proceso de ventas inmobiliarias con el modelo consultivo desde la captación hasta el cierre.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product en proptech',
                'description'       => 'Las particularidades de hacer producto para el sector inmobiliario: múltiples actores, ciclos largos y los datos que definen las decisiones de producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior especializado en proptech con experiencia en marketplaces inmobiliarios, plataformas de gestión de propiedades y herramientas para agentes. Conoces en profundidad los retos únicos de hacer producto en un sector con ciclos de compra extremadamente largos, múltiples actores con incentivos distintos y una dependencia enorme de la confianza.

Necesito tu ayuda para [DESCRIBIR EL RETO DE PRODUCTO: definir la estrategia de producto / priorizar el roadmap / diseñar una nueva funcionalidad / mejorar la retención / aumentar la conversión] de [PRODUCTO: marketplace de compraventa / plataforma de alquiler / CRM para agentes / herramienta de gestión de propiedades / plataforma de inversión].

**Parte 1: Los múltiples actores del ecosistema inmobiliario**

El sector inmobiliario es un mercado de múltiples lados con actores que tienen incentivos a veces opuestos. Ayúdame a entender:

- Cómo mapear a todos los stakeholders de mi plataforma: comprador, vendedor, arrendador, arrendatario, agente inmobiliario, promotor, banco, notario, abogado. Cuáles son sus jobs to be done, sus frustraciones y su disposición a pagar.
- Cómo gestionar la tensión inherente entre actores: el vendedor quiere el precio más alto, el comprador el más bajo; el agente quiere cerrar rápido, el cliente necesita tiempo.
- El "chicken and egg problem" de los marketplaces inmobiliarios: cómo construir suficiente oferta para atraer demanda y suficiente demanda para que los vendedores pongan sus propiedades.
- Cuándo y cómo monetizar a cada actor: quién paga, cuánto y en qué momento del proceso. Los modelos de éxito del sector (suscripción de agentes vs. comisión de transacción vs. publicidad vs. servicios adicionales).
- Cómo diseñar la plataforma para que cada actor tenga los incentivos correctos para comportarse de forma que crea valor para los demás.

**Parte 2: Los ciclos largos como reto de producto**

Una compra de vivienda puede durar entre seis meses y dos años. Esto crea retos únicos de producto. Explícame:

- Cómo mantener al usuario comprometido con tu plataforma durante un proceso tan largo sin que te abandone a mitad del funnel.
- Las estrategias de notificaciones y alertas que añaden valor real (nueva propiedad que cumple los criterios, bajada de precio) sin convertirse en spam.
- Cómo medir el progreso del usuario en el funnel cuando el ciclo es tan largo que la mayoría de conversiones ocurren en visitas posteriores o en otros dispositivos.
- Los indicadores adelantados que predicen que un usuario está a punto de convertir (frecuencia de visitas al mismo listado, guardado de propiedades, uso de la calculadora hipotecaria).
- Cómo diseñar el onboarding de un usuario que volverá a la plataforma dentro de tres meses: qué recordar, qué personalizar y cómo retomar el hilo donde lo dejó.

**Parte 3: Los datos como ventaja competitiva en proptech**

Los datos del mercado inmobiliario son el activo diferencial de cualquier plataforma proptech. Ayúdame a diseñar:

- Qué datos propios (first-party) debo recopilar desde el primer día para construir ventaja competitiva a largo plazo: búsquedas, clics, favoritos, tiempo en ficha, visitas concertadas.
- Cómo construir un modelo de valoración automática (AVM) básico con los datos que ya tengo, antes de tener suficiente volumen para un modelo sofisticado.
- Las funcionalidades de insights de mercado que convierten datos en valor para el usuario: precio por metro cuadrado de la zona, tendencia de precios, tiempo medio en mercado.
- Cómo equilibrar la privacidad de los datos (los usuarios no quieren que sus búsquedas sean públicas) con el valor de la transparencia de mercado.
- Los datos que debo comprar o licenciar externamente (transacciones del catastro, datos de hipotecas, datos socioeconómicos del INE) para complementar los datos propios.

**Parte 4: Priorización y roadmap en proptech**

- Cómo priorizar entre funcionalidades para compradores, para vendedores y para agentes cuando los recursos son limitados.
- Los experimentos de producto más impactantes en plataformas inmobiliarias: los que mueven la conversión, la retención y el NPS.
- Cómo medir el éxito de una funcionalidad en un sector donde la conversión final (la firma) puede ocurrir meses después de que el usuario descubrió la propiedad en tu plataforma.
- La estrategia de lanzamiento de nuevas funcionalidades en un sector donde los agentes inmobiliarios son resistentes al cambio y necesitan formación.

Dame un análisis con recomendaciones concretas y accionables para el contexto específico de mi producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Tomar decisiones de producto en una plataforma proptech con múltiples actores y ciclos largos.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Talento en inmobiliarias',
                'description'       => 'Las empresas inmobiliarias modernas necesitan perfiles técnicos y digitales: cómo atraerlos a un sector que sigue siendo percibido como tradicional.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de RRHH especializado en empresas del sector inmobiliario y proptech con experiencia tanto en agencias tradicionales como en startups tecnológicas que están transformando el sector. Conoces el reto de atraer talento digital a un sector que sigue teniendo una imagen conservadora y de construir equipos híbridos donde conviven agentes de la vieja escuela con perfiles tech.

Necesito tu ayuda para [DESCRIBIR EL RETO: atraer perfiles técnicos / retener a agentes de alto rendimiento / construir el equipo de una startup proptech / transformar el equipo de una agencia tradicional].

**Parte 1: Atracción de talento digital al sector inmobiliario**

El sector inmobiliario compite por talento digital con startups, consultoras y empresas tecnológicas que tienen marcas empleadoras mucho más atractivas. Ayúdame a:

- Diseñar la propuesta de valor del empleado (EVP) de una empresa inmobiliaria o proptech que resulte atractiva para perfiles de software, datos, producto y marketing digital.
- Los argumentos genuinos que hacen interesante trabajar en proptech: el impacto social de la vivienda, la complejidad técnica de los datos inmobiliarios, el tamaño del mercado y la oportunidad de transformar un sector grande y lento.
- Cómo redactar ofertas de trabajo para perfiles técnicos que no asusten con jerga inmobiliaria y que destaquen los retos tecnológicos reales.
- Los canales de atracción de talento tech: LinkedIn técnico, GitHub Sponsors, comunidades de programadores, meetups de producto y datos.
- Cómo posicionar la empresa en foros de empleo tech (Manfred, InfoJobs Tech, Glassdoor) con una narrativa de startup tecnológica aunque la empresa sea grande y establecida.

**Parte 2: El perfil del agente inmobiliario del siglo XXI**

El modelo de agente está cambiando radicalmente. Define conmigo:

- Las competencias del agente inmobiliario moderno: digital nativo, manejo de CRM, capacidad de análisis de datos de mercado, presencia en redes sociales y habilidades de venta consultiva.
- El perfil que rinde más: el ex-vendedor reconvertido al sector vs. el agente que viene de dentro. Qué aporta cada uno y cómo integrarlos.
- Cómo estructurar el plan de comisiones para atraer y retener a los mejores agentes sin arruinar la economía de la agencia. Los modelos más comunes (fixe + comisión, solo comisión, comisión creciente) y sus trade-offs.
- El proceso de onboarding de un nuevo agente: cuánto tiempo de acompañamiento, qué formación, cuándo debería hacer su primera venta.
- Las señales de que un agente no va a funcionar en los primeros noventa días y el protocolo para gestionarlo.

**Parte 3: Retención en un sector con alta rotación**

La rotación en el sector inmobiliario es estructuralmente alta. Diseña conmigo:

- Los planes de desarrollo profesional que retienen a los mejores agentes: especialización por zona o tipo de propiedad, certificaciones (API, CCIM), la carrera hacia director de zona.
- Cómo crear una cultura de oficina que compense las fluctuaciones de ingresos que genera el modelo de comisiones.
- Los programas de reconocimiento que funcionan en ventas: ranking de agentes, celebraciones de hitos, visibilidad interna.
- Cómo gestionar los periodos de sequía de un agente: apoyo emocional, análisis de pipeline, ajuste de métricas y cuándo tomar la decisión de que no funciona.
- Los beneficios no salariales que valoran especialmente los agentes inmobiliarios: flexibilidad horaria, herramientas de marketing personal, acceso a datos de mercado premium, coche de empresa.

**Parte 4: Construir el equipo de una startup proptech**

Si el contexto es una startup proptech que necesita construir equipo desde cero:

- El orden de contratación óptimo: quién contratar primero (tech, producto, operaciones, ventas) y en qué momento del crecimiento.
- Cómo convencer a un ingeniero senior de unirse a una proptech pre-Series A cuando las opciones compiten con los paquetes de Google o Meta.
- La cultura de una empresa proptech exitosa: velocidad, datos, orientación al cliente y la particular combinación de rigor tech con conocimiento del sector inmobiliario.
- Cómo integrar en el mismo equipo a personas con cultura inmobiliaria (orientadas a la relación, al largo plazo) con personas con cultura tech (orientadas al producto, al dato, al experimento).

Adapta las recomendaciones al tamaño y madurez de mi organización: [TAMAÑO: agencia de 5 personas / red inmobiliaria de 50 agentes / startup proptech de 20 empleados / empresa establecida de 200 personas].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Atraer talento digital al sector inmobiliario y retener a los mejores agentes.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de inversión inmobiliaria',
                'description'       => 'Los modelos financieros del real estate: cap rate, IRR, cash-on-cash return y el análisis de un deal de inversión de principio a fin.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista de inversión inmobiliaria con experiencia en la evaluación de activos residenciales, comerciales y de uso mixto en el mercado europeo y español. Tu enfoque combina el rigor de los modelos financieros con el conocimiento práctico del mercado local: sabes que los números deben reflejar la realidad del activo, no el optimismo del vendedor.

Necesito que me ayudes a analizar un potencial deal de inversión inmobiliaria. La propiedad es: [DESCRIBIR EL ACTIVO: piso para alquiler / edificio plurifamiliar / local comercial / nave industrial / cartera de propiedades]. Los datos preliminares son: [PRECIO DE COMPRA, METROS CUADRADOS, UBICACIÓN, RENTA ACTUAL O ESTIMADA].

**Parte 1: Los indicadores clave del deal**

Calcula y explícame en detalle los siguientes indicadores para esta inversión:

- **Cap Rate (Tasa de Capitalización)**: cómo se calcula correctamente (NOI / valor de mercado), qué es el NOI y qué gastos hay que incluir que muchos inversores novatos se olvidan (vacancia, mantenimiento, seguros, impuestos, gestión).
- **Cash-on-Cash Return**: el retorno sobre el dinero efectivamente invertido (incluyendo financiación), por qué difiere del cap rate y cuándo es el indicador más relevante.
- **IRR (Internal Rate of Return)**: cómo calcular la TIR de la inversión incluyendo la plusvalía en la venta, qué supuestos hay que hacer sobre precio de salida y horizonte temporal, y cómo interpretar el resultado.
- **GRM (Gross Rent Multiplier)**: la métrica rápida de valoración y sus limitaciones.
- **LTV y servicio de la deuda**: cómo afecta el apalancamiento al retorno y cuándo el apalancamiento destruye valor en lugar de crearlo.

Para cada indicador, dame el valor calculado con los datos que te he proporcionado y explícame si el resultado es bueno, malo o mediocre para el mercado en el que está el activo.

**Parte 2: El modelo financiero completo**

Construye conmigo un modelo de análisis a [HORIZONTE: 5 / 10 / 15 años] con los siguientes componentes:

- **Año 0**: precio de compra, costes de transacción (ITP o IVA según corresponda, notaría, registro, honorarios), reforma inicial si la hay, y equity inicial aportado.
- **Ingresos anuales**: renta bruta potencial, vacancia estimada (porcentaje histórico de la zona), ingresos netos efectivos.
- **Gastos operativos**: IBI, comunidad, seguro, mantenimiento, gestión de la propiedad (si se externaliza), gastos de vacantes (búsqueda de inquilino, pequeñas reparaciones entre contratos).
- **Servicio de la deuda**: cuota hipotecaria anual (capital + intereses), tipo fijo vs. variable, amortización del capital y saldo vivo por año.
- **Flujo de caja neto**: el dinero que entra en el bolsillo del inversor cada año después de todos los gastos y de pagar la hipoteca.
- **Salida**: precio de venta estimado aplicando la apreciación anual del mercado ([PORCENTAJE]), plusvalía municipal, IRPF sobre la ganancia patrimonial, y cash out neto.

**Parte 3: Análisis de sensibilidad y escenarios**

Los modelos son tan buenos como sus supuestos. Ayúdame a entender el rango de resultados posibles:

- **Escenario pesimista**: vacancia del [X]%, sin apreciación de precios, tipo hipotecario que sube [Y] puntos básicos, gastos imprevistos del [Z]% del valor del activo al año.
- **Escenario base**: los supuestos más probables.
- **Escenario optimista**: vacancia baja, apreciación del mercado, posibilidad de incrementar renta con reforma o cambio de uso.
- Los puntos de inflexión: ¿con qué nivel de vacancia el deal deja de ser positivo en flujo de caja? ¿Con qué precio de compra el cap rate cae por debajo del tipo de interés hipotecario (efecto tijera)?

**Parte 4: Due diligence y riesgos específicos del activo**

- Los aspectos de due diligence que no deben saltarse: nota simple en el Registro de la Propiedad, certificado de deudas de la comunidad, ITE (Inspección Técnica de Edificios), certificado energético, situación arrendataria si hay inquilinos.
- Los riesgos específicos de este tipo de activo y zona que afectan a los supuestos del modelo.
- Las preguntas que hay que hacerle al vendedor antes de hacer una oferta.
- Cuándo tiene sentido pagar un precio por encima del cap rate de mercado (valor añadido, gestión activa, reposicionamiento).

Al final, dame una recomendación clara: ¿es este deal atractivo a [PRECIO DE COMPRA]? ¿Cuál sería el precio máximo que pagaría para que el deal sea interesante? ¿Qué información adicional cambiaría tu análisis?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Analizar un deal de inversión inmobiliaria con los modelos financieros del sector.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal inmobiliario',
                'description'       => 'Contratos de compraventa, due diligence de propiedades, aspectos urbanísticos y los riesgos legales de las operaciones inmobiliarias que el comprador no suele conocer.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho inmobiliario con amplia experiencia en operaciones de compraventa residencial y comercial en España. Conoces en profundidad los riesgos legales que los compradores raramente identifican antes de firmar y que pueden convertir la compra del piso de sus sueños en una pesadilla.

Necesito tu ayuda para [DESCRIBIR LA SITUACIÓN: revisar los documentos de una propiedad antes de comprar / redactar o revisar un contrato de arras / entender los riesgos de una operación concreta / hacer la due diligence legal de una inversión].

La operación en cuestión es: [DESCRIBIR LA OPERACIÓN: tipo de propiedad, uso previsto, si hay hipoteca vendedor, si hay inquilinos, obra nueva vs. segunda mano, precio aproximado].

**Parte 1: La due diligence legal inmobiliaria paso a paso**

Una compraventa inmobiliaria sin due diligence es una apuesta ciega. Guíame a través del proceso completo:

- **Nota simple registral**: cómo leerla, qué cargas pueden ser problemáticas (hipotecas, embargos, servidumbres, anotaciones preventivas, afecciones urbanísticas) y cuáles son asumibles o cancelables en el proceso de compra. Qué significa que una propiedad tenga una "carga hipotecaria" que supera el precio de venta.
- **Certificado de la comunidad de propietarios**: qué deudas por derramas pueden trasladarse al comprador aunque no sean suyas, qué obras están aprobadas y pendientes de ejecutar y cómo pueden afectar al precio justo.
- **Certificado catastral**: cómo detectar diferencias entre la superficie catastral y la registral (y lo que esto implica para el precio por metro cuadrado real).
- **ITE (Inspección Técnica de Edificios)**: qué es, cuándo es obligatoria, qué significa que el edificio tenga deficiencias calificadas como urgentes o muy urgentes.
- **Certificado energético**: las implicaciones de una calificación F o G en la negociación del precio y en las futuras obligaciones de rehabilitación energética.
- **Situación urbanística**: cómo verificar que la propiedad no está en suelo no urbanizable, que no tiene sanciones por obras ilegales pendientes de regularizar y que el uso que tú le quieres dar está permitido.

**Parte 2: Los contratos de la operación**

- **El contrato de arras**: diferencia entre arras confirmatorias, penales y penitenciales. Por qué las arras penitenciales son las más comunes pero no siempre las más convenientes para el comprador. Las cláusulas que deben estar sí o sí: plazo de elevación a escritura pública, condición resolutoria por no obtener hipoteca, estado de cargas en el momento de la firma.
- **La escritura de compraventa**: cómo leer una escritura, los epígrafes más importantes, qué declaraciones estás firmando sin saber (estado de ocupación, libertad de cargas, inexistencia de arrendamientos) y las consecuencias si no son ciertas.
- **La distribución de gastos de la compraventa**: quién paga qué en España (ITP o IVA, AJD, notaría, registro), cómo se negocia y qué dice la ley desde la reforma de 2018 sobre quién paga los gastos hipotecarios.
- **Los plazos**: desde el contrato de arras hasta la firma de la hipoteca y la escritura. Los cuellos de botella más comunes y cómo evitar perder las arras por un retraso del banco.

**Parte 3: Los riesgos que el comprador no conoce**

Dame una lista comentada de los riesgos más frecuentes que los compradores descubren demasiado tarde:

- Propiedades con ocupantes (distintos del vendedor) que no aparecen en ningún documento.
- Herencias no liquidadas: la propiedad del causante que se vende antes de inscribir la escritura de herencia, con riesgo de impugación por herederos disconformes.
- Propiedades con obras ilegales no amnistiadas: el riesgo de comprar un piso con un cerramiento de terraza o una ampliación que el Ayuntamiento puede obligar a demoler.
- La plusvalía municipal (IIVTNU): quién la paga, cómo se calcula ahora tras la reforma de 2021, y qué ocurre si el vendedor "desaparece" después de la firma sin pagarla.
- Los vicios ocultos en segunda mano: qué cubre la ley, cuánto tiempo tienes para reclamar y cómo documentar los defectos antes de firmar para tener pruebas.
- La responsabilidad del comprador si el vendedor tenía deudas con Hacienda: la figura del tercero de buena fe y sus límites.

**Parte 4: El momento de la negociación y la firma**

- Cómo usar los hallazgos de la due diligence para renegociar el precio o las condiciones.
- El papel del notario: qué puede y qué no puede hacer por ti, por qué es importante leer la escritura antes del día de la firma y qué preguntas hacerle.
- Cuándo compensa contratar a un abogado propio y cuándo basta con el notario.
- Los seguros que debe contratar el comprador: seguro del hogar, seguro de impago de hipoteca y el seguro de título (title insurance) que cada vez se usa más en España.

Sé específico y práctico, con referencias a la legislación española actual. Incluye las preguntas concretas que debería hacerle al vendedor y al agente inmobiliario antes de comprometer nada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Hacer la due diligence legal de una compraventa inmobiliaria e identificar riesgos ocultos.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte en proptech',
                'description'       => 'Los clientes de plataformas inmobiliarias tienen urgencias reales: el soporte que está a la altura de las apuestas cuando una operación puede perderse por un bug.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer support especializado en plataformas proptech con experiencia gestionando equipos que atienden tanto a compradores y vendedores de propiedades como a agentes inmobiliarios profesionales. Conoces bien la diferencia entre el soporte de una app de entretenimiento y el soporte de una plataforma donde un fallo puede costar a alguien cientos de miles de euros o hacerle perder la casa de sus sueños.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar el equipo de soporte desde cero / mejorar los tiempos de resolución / gestionar una crisis de soporte / diseñar los flujos de escalación / formar al equipo para situaciones de alto estrés].

**Parte 1: Las particularidades del soporte inmobiliario**

El soporte en proptech no es soporte ordinario. Explícame cómo diseñarlo considerando:

- El nivel de estrés emocional del cliente: una persona que compra o vende una propiedad está tomando la decisión más importante de su vida financiera. Cómo entrenar al equipo para gestionar el componente emocional sin perder la eficiencia operativa.
- Los stakes financieros: un bug en la plataforma puede hacer que alguien pierda unas arras de 20.000 euros o que un agente pierda una exclusiva. Cómo definir los niveles de urgencia en función del impacto económico real.
- La complejidad del proceso: los clientes de una plataforma inmobiliaria están en distintas etapas de un proceso complejo (búsqueda, contacto, visita, oferta, firma) y el agente de soporte necesita entender en qué etapa está el cliente para entender la urgencia del problema.
- Los múltiples tipos de usuario con necesidades distintas: el comprador particular (poco sofisticado, alta carga emocional) vs. el agente inmobiliario profesional (alta sofisticación, poco tiempo) vs. el promotor inmobiliario (B2B, requiere SLA garantizados).
- La regulación: algunos problemas de soporte tienen implicaciones legales (datos de propiedades incorrectos, información sobre cargas que no se mostró bien). Cuándo escalar al equipo legal.

**Parte 2: Los flujos de escalación y los SLA**

- Cómo definir los niveles de severidad para una plataforma inmobiliaria: S1 (la plataforma está caída, nadie puede contactar con propiedades), S2 (bug que impide completar una acción crítica como enviar un mensaje al agente), S3 (problema que tiene workaround), S4 (mejora o pregunta).
- Los SLA realistas por nivel de severidad y por tipo de cliente, considerando que algunos problemas tienen consecuencias económicas inmediatas.
- El flujo de escalación desde el primer nivel de soporte hasta el equipo técnico: qué información recopilar antes de escalar, cómo comunicarse con engineering durante una incidencia y cómo mantener al cliente informado durante la resolución.
- El proceso de gestión de incidencias mayores: el war room, las actualizaciones cada X minutos a los clientes afectados, el post-mortem interno y la comunicación externa posterior.
- Cómo diseñar los procedimientos para situaciones sin precedente: el bug que no hemos visto nunca, la incidencia que afecta a una sola operación de alto valor.

**Parte 3: Los casos de uso más complejos del soporte proptech**

Dame protocolos de actuación para los siguientes escenarios:

- Un comprador dice que envió un mensaje a un agente a través de la plataforma pero el agente no lo recibió, y la visita que esperaba concertar ya no está disponible.
- Un agente inmobiliario afirma que la plataforma publicó mal el precio de su propiedad y que un comprador ha tomado decisiones basándose en ese precio incorrecto.
- Un usuario que ya firmó arras (fuera de la plataforma, pero gracias a un lead generado en ella) contacta porque hay un problema con la operación y quiere que la plataforma "haga algo".
- Un promotor inmobiliario descubre que la información técnica de su promoción (planos, calidades) que subió a la plataforma está siendo usada por un competidor.
- Un usuario amenaza con una demanda porque dice que la información de la propiedad en la plataforma era incorrecta y le llevó a tomar una decisión equivocada.

**Parte 4: Métricas y mejora continua**

- Las métricas de soporte que importan en proptech: CSAT por tipo de usuario, FRT (First Response Time) y FCR (First Contact Resolution) segmentados por urgencia y tipo de problema.
- Cómo detectar los problemas sistémicos que generan volumen de tickets: la funcionalidad confusa, el bug recurrente, la comunicación que genera expectativas falsas.
- El proceso de feedback loop con producto: cómo convertir los tickets de soporte en insights de producto que mejoran la plataforma.
- La base de conocimiento: qué artículos escribir primero (los que resuelven el 80% de los tickets), cómo mantenerla actualizada y cómo medir si los usuarios la encuentran útil.
- Cómo escalar el equipo de soporte cuando la plataforma crece: cuándo automatizar con chatbots, cuándo añadir especialistas por tipo de usuario y cuándo crear un tier de customer success para las cuentas más valiosas.

Adapta las recomendaciones al contexto de mi plataforma: [TIPO DE PLATAFORMA, TAMAÑO DEL EQUIPO, VOLUMEN DE TICKETS MENSUAL].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el soporte de una plataforma proptech que gestiona situaciones de alta urgencia y alto impacto económico.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Servicios freelance para el sector inmobiliario',
                'description'       => 'Fotografía, renders 3D, tours virtuales, copy para listados y los servicios que los agentes inmobiliarios contratan externamente como freelance.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de negocio especializado en freelancers que trabajan con el sector inmobiliario. Tienes experiencia asesorando a fotógrafos inmobiliarios, diseñadores de renders 3D, creadores de tours virtuales, redactores especializados y otros profesionales independientes que han encontrado en el sector inmobiliario un cliente recurrente y rentable.

Necesito tu ayuda para construir o mejorar mi negocio freelance de [TIPO DE SERVICIO: fotografía inmobiliaria / renders y visualización 3D / tours virtuales / redacción de listados y copys inmobiliarios / home staging virtual / diseño de planos] orientado al sector inmobiliario en [ZONA GEOGRÁFICA].

**Parte 1: El mercado de servicios freelance para inmobiliarias**

El sector inmobiliario es uno de los mejores clientes para ciertos tipos de freelancers porque tiene necesidades recurrentes, paga razonablemente bien y valora la consistencia. Ayúdame a entender:

- Los diferentes segmentos de cliente dentro del sector: agente independiente (presupuesto ajustado, necesita rapidez), agencia mediana (necesita consistencia y precio pactado), promotora inmobiliaria (proyectos grandes, procesos de aprobación complejos, pero tickets muy altos), portal inmobiliario (volumen masivo, precio bajo, estabilidad).
- Qué valora cada segmento: el agente independiente valora la rapidez y el precio; la promotora valora la calidad y el cumplimiento de plazos; la plataforma valora el precio y la escalabilidad.
- Los periodos de mayor demanda en el sector: la primavera (más actividad del mercado), la obra nueva en fase de preventa (necesita renders antes de que exista el edificio) y los lanzamientos de nuevas urbanizaciones.
- Los servicios complementarios que se pueden combinar para aumentar el ticket medio: fotografía + tour virtual + plano 2D + redacción del listado = un paquete completo que ningún agente va a rechazar.
- Cómo se estructura la competencia: qué hacen las empresas de fotografía inmobiliaria a escala, en qué pueden competir los freelancers (precio, relación personal, rapidez local) y en qué no pueden (cobertura nacional, equipos de múltiples fotógrafos).

**Parte 2: Estructura del negocio y precios**

- Cómo definir los paquetes de servicio para el sector inmobiliario: el paquete básico (foto + exterior), el estándar (foto completa + tour virtual), el premium (foto + tour + video + redacción) y cómo justificar el precio de cada uno.
- Las tarifas que se cobran en el mercado español para cada tipo de servicio, y cómo posicionarte en el tramo de precio adecuado a tu calidad y mercado local.
- El modelo de precios por proyecto vs. por abono mensual: las ventajas del abono para la agencia (precio cerrado, sin sorpresas) y para el freelance (ingresos predecibles). Cómo estructurar un abono inmobiliario con un número de propiedades al mes.
- Los contratos y condiciones de pago: cómo gestionar el pago anticipado o la facturación a 30 días con agentes que a veces pagan tarde, y las cláusulas que protegen tu trabajo (derechos de imagen, usos permitidos, revisiones incluidas).
- La herramienta de presupuestación rápida: cómo generar un presupuesto en cinco minutos que el agente pueda aprobar en el mismo email.

**Parte 3: Captación de clientes en el sector inmobiliario**

El sector inmobiliario tiene su propio ecosistema y hay que saber dónde estar para que te encuentren. Diseña conmigo:

- Cómo construir un portfolio orientado al sector: qué propiedades mostrar (variedad de tipologías y rangos de precio), cómo presentarlo (web, PDF, Instagram) y qué métricas de resultado incluir si puedes (la propiedad se vendió en X días con estas fotos).
- Los canales de captación en el sector inmobiliario: asociaciones de agentes inmobiliarios (APIs), ferias del sector (SIMA, Barcelona Meeting Point), grupos de Facebook y WhatsApp de agentes, LinkedIn con contenido de valor para el sector.
- La estrategia de primera venta con una agencia nueva: cómo hacer una propiedad de prueba a precio especial que demuestra el valor y abre la puerta a una relación estable.
- El sistema de referencias entre agentes: cómo conseguir que un agente satisfecho te recomiende a sus colegas, que es el canal de crecimiento más eficiente en este sector.
- Cómo crear contenido que atraiga a agentes inmobiliarios: comparaciones antes/después de listados, análisis de por qué las malas fotos destruyen el precio de venta, tutoriales de preparación de la propiedad antes del reportaje.

**Parte 4: Operaciones y calidad del servicio**

- El flujo de trabajo de un encargo inmobiliario de principio a fin: confirmación, briefing de la propiedad, visita de reconocimiento (¿necesaria?), el día del reportaje (cuánto tiempo, qué equipamiento) y la entrega.
- Los estándares de calidad del sector: qué esperan los agentes en términos de número de fotos, resolución, retoque, formato de entrega y plazo.
- La gestión de las revisiones: cuántas revisiones incluir, cómo gestionar al agente o propietario que pide algo que no es posible ("quita ese edificio del fondo") y cómo educar al cliente sobre lo que el retoque puede y no puede hacer.
- Los equipos y software específicos del sector: las cámaras y objetivos para fotografía inmobiliaria, los softwares de renders 3D más usados (3ds Max, Lumion, Enscape), las plataformas de tour virtual (Matterport, Kuula, My360).
- Cómo crecer de freelance individual a pequeña empresa: cuándo tiene sentido contratar a un segundo fotógrafo o crear una red de colaboradores locales.

Dame recomendaciones concretas y accionables para mi situación actual: [EXPERIENCIA EN EL SECTOR: empezando / con algunos clientes / queriendo escalar].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir y hacer crecer un negocio freelance de servicios para el sector inmobiliario.',
                'vote_score'        => 29,
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
