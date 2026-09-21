<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills632Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id' => 1,
                'title' => 'Marketing de fragancias de lujo con IA',
                'description' => 'Crea campañas de marketing olfativo y digital para posicionar perfumes de lujo, usando IA para personalizar mensajes y optimizar el alcance en audiencias premium.',
                'prompt_content' => <<<'EOT'
Actúa como un director creativo de marketing especializado en marcas de lujo y perfumería de alta gama. Necesito tu ayuda para diseñar una estrategia de marketing integral para el lanzamiento de una nueva fragancia de lujo en el mercado europeo y latinoamericano.

Contexto del producto: Se trata de una fragancia nicho orientada al segmento ultra-premium (precio de venta superior a 300 euros por 100 ml), elaborada con materias primas raras como oud de Laos, iris florentino y ambergris natural. La marca es una maison francesa con ochenta años de historia pero que nunca ha tenido presencia digital significativa. El público objetivo son mujeres y hombres de entre 35 y 60 años con alto poder adquisitivo, interesados en el lujo discreto, el coleccionismo y la narrativa artesanal.

Estrategia que debes desarrollar:

1. Posicionamiento de marca: Ayúdame a definir el territorio de comunicación de la fragancia. ¿Cuál es la historia que la hace única e irrepetible? ¿Cómo conectamos la narrativa de los ingredientes raros, el oficio del maestro perfumista y la herencia de la maison en un relato de marca cohesivo que justifique el precio y genere deseo en el comprador?

2. Identidad visual y sensorial: Describe el universo visual que debe acompañar a la fragancia en todos los puntos de contacto: paleta cromática, tipografía, materiales del packaging, imágenes de campaña, música asociada. Explica cómo la IA puede ayudar a generar moodboards, testar variantes visuales con audiencias objetivo y analizar qué combinaciones generan mayor respuesta emocional.

3. Estrategia de canales: Define el mix de canales para una marca de lujo que hasta ahora solo ha vendido en perfumerías físicas selectas. ¿Cómo integrar una tienda online de experiencia premium sin dañar la exclusividad percibida? ¿Qué papel deben jugar las redes sociales (Instagram, Pinterest, YouTube) y en qué formato?

4. Relaciones públicas e influencers: El lujo requiere validación de referentes culturales más que publicidad masiva. Propón una estrategia de relaciones públicas con medios especializados (Vogue, Wallpaper, Robb Report) y una estrategia de embajadores y micro-influencers del mundo de la perfumería nicho (bloggers olfativos, youtubers de fragrancias, críticos de perfume).

5. Eventos y experiencias: Diseña el concepto de un evento de lanzamiento en Madrid o Ciudad de México que traslade físicamente la experiencia de la fragancia a los asistentes, genere contenido digital viral y refuerce la percepción de exclusividad.

6. Personalización con IA: Describe cómo usar IA para ofrecer recomendaciones personalizadas de fragancia en la web de la marca, adaptar los mensajes del email marketing al perfil olfativo declarado por cada cliente y anticipar qué productos del catálogo le gustarán a un comprador basándose en su historial de compras.

7. Métricas de éxito: Define los KPI de la campaña de lanzamiento a doce meses, distinguiendo entre métricas de notoriedad de marca, métricas de engagement digital y métricas de negocio (ventas en unidades, valor medio del pedido, tasa de recompra).

Incluye al final un ejemplo de copy para el anuncio de lanzamiento en revista impresa y una propuesta de descripción de producto para la web de la maison.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 45,
                'use_case' => 'Estrategia de marketing para fragancias de lujo',
                'vote_score' => 37,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 2,
                'title' => 'Sistema de recomendación de fragancias con IA',
                'description' => 'Desarrolla un motor de recomendación de perfumes basado en preferencias olfativas declaradas, historial de compras y análisis de similitud molecular de ingredientes.',
                'prompt_content' => <<<'EOT'
Actúa como un ingeniero de machine learning especializado en sistemas de recomendación y experiencia de usuario para el comercio electrónico de lujo. Necesito que me ayudes a diseñar y construir un sistema de recomendación de fragancias para una maison de perfumería con un catálogo de 200 fragancias y una base de datos de 50.000 clientes registrados.

El reto específico de la perfumería: A diferencia de libros o películas, los perfumes no se pueden probar digitalmente. El sistema de recomendación debe inferir las preferencias olfativas del usuario a partir de señales indirectas (su historial de compras, las notas olfativas de los perfumes que ha valorado, sus respuestas a un cuestionario inicial) y traducir esas preferencias a ingredientes y familias olfativas que guíen las recomendaciones.

Arquitectura del sistema que debes diseñar:

1. Representación de las fragancias: Describe cómo vectorizar cada fragancia del catálogo usando sus notas olfativas (pirámide de notas de salida, corazón y fondo), familia olfativa (floral, oriental, aromático, cítrico, etc.), ocasión de uso, estación del año recomendada e ingredientes principales. ¿Qué espacio de embedding permite capturar la similitud semántica entre fragancias?

2. Perfil olfativo del usuario: Diseña un cuestionario de onboarding de no más de ocho preguntas que permita construir el perfil olfativo inicial de un usuario nuevo. Explica cómo traducir las respuestas a vectores de preferencia en el mismo espacio que las fragancias. ¿Qué preguntas tienen mayor poder discriminante?

3. Algoritmos de recomendación: Propón una arquitectura híbrida que combine filtrado colaborativo (basado en la similitud de comportamiento entre usuarios) y filtrado basado en contenido (basado en la similitud química y olfativa de las fragancias). Explica cuándo debe prevalecer cada componente y cómo combinar sus scores.

4. Cold start: Describe la estrategia para recomendar a usuarios nuevos que no tienen historial de compras, basándose únicamente en el cuestionario inicial y en señales contextuales (dispositivo, idioma, hora del día, país de acceso).

5. Explicabilidad de las recomendaciones: En el lujo, la justificación de una recomendación forma parte de la experiencia. Diseña cómo el sistema presentará al usuario la razón de cada recomendación en lenguaje natural y sensorial: no "te recomendamos esto porque otros usuarios similares lo compraron" sino "esta fragancia comparte con tu favorita las notas de iris y el fondo amaderado, pero añade un corazón de rosa búlgara que podría sorprenderte".

6. Evaluación offline y online: Define las métricas para evaluar la calidad del sistema: precisión y recall@10, NDCG, tasa de clics sobre recomendaciones, tasa de conversión diferencial entre usuarios que reciben recomendaciones personalizadas y grupo de control. Propón un protocolo de A/B testing para validar mejoras del modelo en producción.

7. Stack tecnológico: Recomienda las librerías y servicios más adecuados para construir este sistema (Surprise, LightFM, Faiss para búsqueda de similitud vectorial, Pinecone como alternativa gestionada, FastAPI para la API de recomendación). Describe el flujo de datos desde la base de datos de clientes y productos hasta la respuesta de la API en menos de 100 ms.

Proporciona también un ejemplo de código Python esquemático (pseudocódigo orientativo) para la función de cálculo de similitud entre dos fragancias usando sus embeddings de notas olfativas.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Motor de recomendación de perfumes basado en IA',
                'vote_score' => 40,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 3,
                'title' => 'Diseño de packaging para perfumería de lujo con IA',
                'description' => 'Genera conceptos creativos y especificaciones técnicas para el packaging de fragancias de alta gama, combinando artesanía tradicional con herramientas de diseño asistido por IA.',
                'prompt_content' => <<<'EOT'
Actúa como un diseñador industrial especializado en packaging de lujo y bienes de consumo premium. Necesito tu ayuda para desarrollar el concepto de packaging completo para una nueva fragancia de lujo orientada al mercado de coleccionistas de perfumería nicho.

Contexto del proyecto: La fragancia se llama "Nuit d'Ambre" y está inspirada en los bosques nocturnos del norte de España. La botella debe evocar pureza, artesanía y permanencia. El presupuesto de producción del packaging es de 45 euros por unidad para un tiraje inicial de 3.000 unidades. La fragancia se venderá en edición limitada numerada.

Aspectos del diseño que debes desarrollar:

1. Concepto creativo: Define la narrativa visual del packaging completo (botella, tapón, caja exterior, sobre de seda interior, tarjeta de autenticidad). ¿Qué materiales, formas y acabados transmiten los valores de artesanía, bosque nocturno y exclusividad limitada? Describe tres conceptos alternativos con sus respectivos referentes visuales y argumentos de diferenciación.

2. Diseño de la botella: Para el concepto seleccionado, describe en detalle la forma de la botella (geometría, proporción, peso, grosor del vidrio), el tratamiento de la superficie (grabado, serigrafía, frosted, transparente), el tipo de tapón (magnético, de corcho forrado, de zamak lacado) y la etiqueta (material, tipografía, posición, acabado). ¿Cómo puede la IA generar variaciones 3D de estos elementos para evaluar opciones antes de hacer un prototipo físico?

3. Caja exterior y unboxing: Describe el diseño de la caja de cartón rígido: estructura (tapa deslizante, caja de libro, estuche con imán), material exterior (papel texturizado, tela, cuero regenerado), impresión interior y experiencia de apertura. El unboxing debe ser un momento de emoción que el comprador comparta en redes sociales.

4. Sostenibilidad: El comprador de lujo contemporáneo valora cada vez más la responsabilidad medioambiental. Propón cómo hacer el packaging sostenible sin sacrificar la percepción premium: vidrio reciclado, tintas vegetales, caja reutilizable como joyero, eliminación de plásticos de un solo uso. Indica los sellos de certificación más reconocidos en el sector.

5. Uso de IA en el proceso de diseño: Explica paso a paso cómo usar herramientas de IA generativa (Midjourney, Adobe Firefly, Stable Diffusion) para generar moodboards conceptuales, renders fotorrealistas de la botella y simulaciones de la experiencia de unboxing antes de invertir en prototipos físicos. ¿Qué prompts describen mejor los resultados deseados para este tipo de fragancia?

6. Especificaciones técnicas para producción: Describe qué información técnica debe incluir el pliego de especificaciones que se entrega al fabricante de vidrio y al impresor de packaging: tolerancias dimensionales, Pantone de colores, gramaje del cartón, especificaciones del acabado UV selectivo, instrucciones para el numerado de la edición limitada.

7. Evaluación con usuarios: Propón cómo testar los conceptos de packaging con el público objetivo antes de la producción final, usando técnicas de investigación de mercado cualitativa (focus group, entrevistas en profundidad) y herramientas de eye-tracking para medir qué elementos del diseño captan la atención en el punto de venta.

Entrega el brief creativo completo del packaging en un documento estructurado con todos los apartados anteriores, listo para ser presentado al comité de diseño de la marca.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 45,
                'use_case' => 'Brief creativo de packaging para perfumería de lujo',
                'vote_score' => 33,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 4,
                'title' => 'Venta personalizada de perfumes de lujo con IA',
                'description' => 'Diseña el proceso de venta consultiva para perfumería de lujo, usando IA para guiar al cliente hacia la fragancia perfecta tanto en tienda física como en el canal digital.',
                'prompt_content' => <<<'EOT'
Actúa como un director de ventas con experiencia en retail de lujo y perfumería de alta gama. Necesito que me ayudes a diseñar el proceso completo de venta consultiva para una boutique de perfumería nicho con presencia física y digital, incorporando inteligencia artificial para personalizar la experiencia del cliente y aumentar las tasas de conversión y el valor medio del ticket.

Contexto del negocio: La boutique tiene tres tiendas físicas en ciudades de habla hispana (Madrid, Buenos Aires, Ciudad de México) y una tienda online que representa el 30% de las ventas. El equipo de ventas tiene doce personas, algunas con formación en perfumería y otras con perfiles más comerciales. El cliente medio gasta 180 euros por visita pero hay un segmento de clientes VIP que puede llegar a los 2.000 euros en una sola compra.

Proceso de venta que debes diseñar:

1. Acogida y diagnóstico olfativo: Describe el protocolo de bienvenida en tienda que maximize la primera impresión y el flujo de descubrimiento del perfil olfativo del cliente. ¿Qué preguntas abrir la conversación? ¿Cómo presentar el catálogo de forma que el cliente sienta que está siendo escuchado y guiado, no vendido? ¿Qué herramientas digitales (tablet con cuestionario de IA, herramienta de matching olfativo) puede usar el vendedor para objetivar las preferencias del cliente?

2. Presentación y narración de productos: El lujo se vende con historias, no con fichas técnicas. Diseña el guion de presentación de una fragancia que incluya la historia del ingrediente principal, la biografía del maestro perfumista, el origen geográfico de las materias primas y la sugerencia del momento ideal de uso. Propón cómo la IA puede ayudar al vendedor a adaptar el guion en tiempo real según las reacciones del cliente.

3. Gestión de la prueba del perfume: Explica el protocolo correcto de presentación de muestras en tienda (número máximo de fragancias a presentar, tiempo de reposo entre pruebas, uso de granos de café para limpiar el olfato, prueba en piel vs. en tira) y cómo el vendedor puede interpretar las reacciones no verbales del cliente para ajustar la selección.

4. Cierre de la venta y upselling: Describe las técnicas de cierre apropiadas para el lujo que no resulten presionadoras y que potencien la decisión autónoma del cliente. ¿Cuándo y cómo ofrecer el set de muestras para llevar a casa? ¿Cómo presentar los productos complementarios (cremas corporales, velas, jabones) sin que parezca una venta agresiva?

5. Venta digital asistida por IA: Para la tienda online, describe el flujo de experiencia de usuario que reemplaza al vendedor físico: cuestionario de perfil olfativo interactivo, recomendaciones personalizadas en tiempo real, chat con asistente de IA que puede responder preguntas técnicas sobre ingredientes y proyección del perfume, y kit de muestras gratuito que el cliente puede solicitar antes de comprar la botella.

6. Gestión de clientes VIP: Diseña el programa de atención personalizada para los mejores clientes: notificaciones anticipadas de nuevos lanzamientos, invitaciones a eventos privados con el maestro perfumista, servicio de personalización de la botella y de la caja, y acceso a fragancias de edición limitada no disponibles en tienda. ¿Qué datos recoge el CRM con ayuda de IA para anticipar las necesidades de cada VIP?

7. Formación del equipo de ventas: Propón un programa de formación continua para el equipo que combine conocimientos olfativos (familias de fragancias, ingredientes naturales vs. sintéticos, vocabulario del perfume) con habilidades de venta consultiva y manejo de las herramientas de IA de apoyo. Define métricas de rendimiento individuales y cómo el manager puede usarlas para el coaching.

Entrega el resultado como un manual de ventas práctico estructurado para la boutique, con scripts de conversación reales para las situaciones más habituales.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 40,
                'use_case' => 'Proceso de venta consultiva en perfumería de lujo',
                'vote_score' => 31,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 5,
                'title' => 'Gestión de colecciones de fragancias con IA',
                'description' => 'Administra el ciclo de vida de un catálogo de perfumes de lujo usando IA para tomar decisiones sobre discontinuaciones, nuevos lanzamientos, reformulaciones y gestión de inventario.',
                'prompt_content' => <<<'EOT'
Actúa como un product manager especializado en gestión de catálogos de productos de lujo. Necesito que me ayudes a diseñar el sistema de gestión del ciclo de vida del catálogo de una maison de perfumería nicho que actualmente tiene 85 referencias activas, lanza entre cuatro y seis fragancias nuevas al año y se enfrenta a decisiones complejas sobre qué referencias discontinuar, cuáles reformular y cómo posicionar las nuevas colecciones sin canibalizar las existentes.

Desafíos específicos de la perfumería de lujo: Las fragancias tienen una vida comercial larga (algunas referencias llevan décadas en catálogo) y los clientes fieles se oponen emotivamente a las discontinuaciones. Las reformulaciones por cambio de regulación IFRA o por escasez de ingredientes deben gestionarse con delicadeza para no generar una crisis de marca. El inventario de materias primas exóticas tiene plazos de aprovisionamiento de hasta dos años.

Sistema de gestión que debes diseñar:

1. Dashboard de salud del catálogo: Define las métricas que deben monitorearse por referencia y por colección: ventas unitarias, ingresos, margen bruto, tasa de crecimiento interanual, porcentaje de contribución al mix, índice de rotación de inventario y satisfacción de cliente (valoraciones, reviews, tasa de recompra). ¿Cómo puede la IA detectar automáticamente referencias en riesgo de declive?

2. Proceso de discontinuación: Describe el protocolo para tomar la decisión de descontinuar una fragancia: criterios objetivos de rendimiento, consulta con el equipo creativo, gestión de la comunicación con los clientes fieles (preventa de última edición, notificación personalizada), liquidación del stock existente y gestión del inventario de materias primas sobrantes.

3. Gestión de reformulaciones: Explica cómo abordar una reformulación forzada por cambio normativo (por ejemplo, la restricción de un ingrediente alérgeno por la IFRA) de forma que el cliente perciba el mínimo impacto en la fragancia que ama. ¿Cómo usar análisis sensorial asistido por IA para validar que la nueva fórmula es suficientemente similar a la original?

4. Planificación de nuevos lanzamientos: Describe el proceso de análisis previo al desarrollo de una nueva fragancia: identificación de tendencias olfativas globales (con IA que analiza búsquedas, reviews y conversaciones en foros de perfumería), análisis de huecos en el catálogo existente, briefing al maestro perfumista y definición del precio objetivo en función del posicionamiento y los costos de la fórmula.

5. Gestión del inventario de materias primas raras: Las materias primas de alta perfumería (oud, iris absoluto, rosa de mayo) tienen precios volátiles y disponibilidad limitada. Describe cómo construir un sistema de gestión de aprovisionamiento con alertas de IA que anticipe escasez, monitoree precios de mercado y recomiende cuándo hacer compras estratégicas de stock.

6. Análisis de canibalización: Cuando se lanza una nueva fragancia dentro de una familia olfativa ya existente en el catálogo, hay riesgo de que canibalice las ventas de referencias establecidas. Explica cómo usar análisis de similitud y modelado de sustitución para estimar este efecto y decidir si el lanzamiento está justificado.

7. Comunicación del ciclo de vida a los clientes: Diseña la estrategia de comunicación que acompaña las decisiones de catálogo (discontinuaciones, reformulaciones, lanzamientos) hacia los distintos segmentos de clientes: coleccionistas que compran por exclusividad, clientes habituales con fragancia favorita y nuevos clientes que todavía están descubriendo la maison. ¿Cómo personalizar estas comunicaciones con IA?

Entrega un framework de gestión de catálogo documentado con los criterios de decisión para cada tipo de movimiento del portafolio, junto con una plantilla de informe trimestral de salud del catálogo.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Gestión del ciclo de vida del catálogo de fragancias',
                'vote_score' => 29,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 6,
                'title' => 'Formación del equipo de una boutique de perfumería de lujo con IA',
                'description' => 'Diseña programas de formación para vendedores, embajadores de marca y personal de atención al cliente de una maison de perfumería de alta gama.',
                'prompt_content' => <<<'EOT'
Actúa como un responsable de formación y desarrollo especializado en marcas de lujo y retail premium. Necesito que me ayudes a diseñar un programa de formación completo para el equipo de una boutique de perfumería de alta gama, que combine conocimientos técnicos sobre perfumería, habilidades de venta consultiva de lujo, cultura de marca e integración de herramientas digitales de IA en el proceso de atención al cliente.

Perfil del equipo a formar: El equipo tiene veinticuatro personas distribuidas en tres tiendas físicas y el equipo de atención al cliente digital. Los perfiles varían desde vendedores con años de experiencia en retail de lujo pero sin formación específica en perfumería, hasta recién incorporados con formación en estética y belleza pero sin experiencia en el segmento luxury. La rotación del equipo es baja (menos del 10% anual) y la mayoría tiene vocación de hacer carrera en la marca.

Programa de formación que debes diseñar:

1. Onboarding de nuevas incorporaciones: Diseña el plan de incorporación para los primeros noventa días de un nuevo miembro del equipo, semana a semana. ¿Qué debe saber antes de atender a su primer cliente? Incluye inmersión en la historia y los valores de la maison, formación olfativa básica, protocolo de atención al cliente, acompañamiento con un mentor senior y evaluación de competencias al finalizar el período.

2. Formación olfativa continua: Describe un programa de catas olfativas mensuales de doce meses que lleve al equipo desde el reconocimiento de las familias olfativas básicas hasta la identificación de ingredientes individuales y la capacidad de describir una fragancia con un lenguaje sensorial rico y evocador. ¿Qué metodologías pedagógicas son más eficaces para desarrollar la memoria olfativa?

3. Cultura de marca y storytelling: La venta de lujo requiere que cada miembro del equipo sea un embajador apasionado de la marca. Diseña talleres trimestrales que profundicen en la historia de la maison, en las historias de los maestros perfumistas, en los viajes a los orígenes de los ingredientes (oud en Laos, rosa en Grasse, iris en Florencia) y en la capacidad de contar estas historias de forma natural y emocionante durante la venta.

4. Habilidades de venta consultiva de lujo: El equipo debe dominar técnicas de escucha activa, diagnóstico de necesidades, presentación sensorial y cierre no intrusivo. Propón un módulo de role-playing mensual con escenarios de venta reales, grabación de las sesiones para análisis posterior y feedback estructurado del manager. ¿Cómo puede la IA analizar las grabaciones y proporcionar feedback objetivo sobre el tono, el ritmo y la estructura del discurso de venta?

5. Manejo de herramientas digitales: El equipo debe ser competente en el uso de la tablet de diagnóstico olfativo con IA, el CRM de clientes VIP, el sistema de gestión de inventario y el chat de atención al cliente online. Diseña una formación práctica de dos días para la adopción de estas herramientas, con ejercicios de simulación y una evaluación de competencias al final.

6. Gestión de situaciones difíciles: Forma al equipo para manejar con elegancia las situaciones que más frecuentemente generan tensión en una boutique de lujo: el cliente que se niega a pagar el precio, la queja sobre una reformulación de fragancia favorita, la devolución de un producto personalizado, el cliente que monopoliza la atención sin intención de comprar. Proporciona guiones de respuesta para cada situación.

7. Evaluación y desarrollo de carrera: Define la matriz de competencias del equipo de ventas de la boutique con sus niveles (junior, senior, especialista, embajador de marca) y los criterios objetivos para la progresión entre niveles. ¿Cómo puede el manager usar los datos del CRM y el análisis de IA de interacciones para identificar las áreas de mejora de cada persona y personalizar su plan de desarrollo?

Entrega el programa de formación completo como un documento estructurado con calendario anual, responsables de cada módulo y presupuesto orientativo por empleado.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 45,
                'use_case' => 'Programa de formación para equipos de perfumería de lujo',
                'vote_score' => 26,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 7,
                'title' => 'Análisis de márgenes y rentabilidad en perfumería de lujo con IA',
                'description' => 'Modela la estructura de costos y la rentabilidad de una maison de perfumería de lujo, optimizando el precio de venta y el mix de producto con apoyo de inteligencia artificial.',
                'prompt_content' => <<<'EOT'
Actúa como un director financiero con experiencia en industrias de bienes de lujo y cosmética de alta gama. Necesito tu ayuda para construir el modelo de análisis de rentabilidad de una maison de perfumería nicho que factura 8 millones de euros anuales y quiere mejorar su margen EBITDA del 12% actual al 22% en tres años sin sacrificar la percepción de calidad ni la inversión en creatividad.

Estructura financiera de una maison de perfumería de lujo que debes modelar:

1. Desglose de la estructura de costos: Ayúdame a desagregar el coste total de producción de una fragancia por litro y por botella, considerando: materias primas (concentrado aromático, alcohol, agua, conservantes), packaging (botella, tapón, etiqueta, caja interior, caja exterior, papel de seda), costos de envasado y maquila, certificaciones y análisis de calidad, y costos de almacenamiento y logística. ¿Qué porcentaje representa cada partida en una fragancia de precio de venta al público de 250 euros?

2. Análisis de margen por canal: La maison vende a través de cuatro canales con estructuras de margen muy diferentes: venta directa en boutiques propias, venta en perfumerías multimarca independientes, venta en grandes almacenes de lujo (El Corte Inglés, Harrods) y venta online directa. Explica cómo calcular el margen de contribución neto por canal teniendo en cuenta los descuentos comerciales, las comisiones de venta, los retornos y la asignación de costos de marketing por canal.

3. Optimización del precio de venta: Describe cómo usar análisis de elasticidad de precio y modelos de disposición a pagar (willingness to pay) para determinar el precio óptimo de una nueva fragancia dentro de tres rangos posibles (180, 240 o 320 euros por 100 ml). ¿Qué metodologías de investigación de mercado (Van Westendorp, Gabor-Granger, conjoint analysis) son las más apropiadas para el segmento de lujo?

4. Gestión del mix de producto: No todas las referencias del catálogo tienen el mismo margen. Explica cómo usar el análisis ABC/XYZ para clasificar las fragancias por contribución al margen y frecuencia de venta, e identificar qué referencias subvencionan otras con menor rentabilidad. ¿Cómo puede la IA optimizar el mix de producto recomendado en cada canal para maximizar el margen medio ponderado?

5. Control del gasto en marketing: Las marcas de lujo invierten entre el 15% y el 25% de su facturación en marketing, lo que puede erosionar significativamente el margen. Propón un modelo de atribución de inversión en marketing por canal y tipo de actividad (publicidad, eventos, relaciones públicas, influencers, muestras) que permita identificar el ROI de cada partida y redirigir el presupuesto hacia las actividades más eficientes.

6. Proyección financiera a tres años: Construye (con supuestos coherentes que tú definas) una proyección de cuenta de resultados a tres años que muestre el camino desde el EBITDA actual del 12% al objetivo del 22%, especificando en qué líneas de la cuenta de resultados se producen las mejoras: aumento de precio medio, reducción de costos de producción por economías de escala, optimización del mix de canal o reducción de gastos de estructura.

7. Cuadro de mando financiero: Define el conjunto de indicadores financieros que el director financiero debe revisar mensualmente para monitorear la salud del negocio: margen bruto, margen de contribución por canal, EBITDA, fondo de maniobra, días de cobro, días de stock y retorno sobre activos. ¿Cómo puede la IA automatizar la generación de este cuadro de mando a partir de los datos del ERP?

Entrega el modelo financiero completo con fórmulas explicadas, supuestos clave documentados y una tabla de análisis de sensibilidad del EBITDA ante variaciones del precio de las materias primas y del tipo de cambio.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Modelo de rentabilidad y pricing para maison de perfumería',
                'vote_score' => 34,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 8,
                'title' => 'Protección legal de fórmulas y marcas en perfumería de lujo con IA',
                'description' => 'Diseña una estrategia de propiedad intelectual para proteger las fórmulas olfativas, marcas registradas, trade dress y secretos comerciales de una maison de perfumería de alta gama.',
                'prompt_content' => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual para industrias creativas y de lujo. Necesito que me ayudes a construir una estrategia integral de protección de la propiedad intelectual para una maison de perfumería nicho que opera en España y exporta a Europa, Latinoamérica y Estados Unidos.

Activos de propiedad intelectual a proteger: Las fórmulas de las fragancias (que son secretos comerciales de altísimo valor), el nombre de la marca y los nombres de cada fragancia, el packaging distintivo (forma de botella, diseño de caja), los textos descriptivos y narrativos de cada fragancia, las ilustraciones y fotografías de las campañas, y el software de recomendación desarrollado internamente.

Estrategia de protección que debes diseñar:

1. Protección de fórmulas como secreto comercial: En la mayoría de jurisdicciones las fórmulas de perfume no son patentables como tales (el perfume no cumple el requisito de actividad técnica). Explica cómo protegerlas como secreto comercial bajo la Directiva (UE) 2016/943 y su trasposición en la Ley de Competencia Desleal española. ¿Qué medidas técnicas y organizativas debe adoptar la empresa (control de acceso al laboratorio, acuerdos de confidencialidad con los maestros perfumistas y con los proveedores de materias primas, cifrado de las bases de datos de fórmulas) para que el secreto comercial tenga valor legal protegible?

2. Registro de marcas: Describe la estrategia de registro de la marca principal y los nombres de las fragancias en las clases del Nomenclátor de Niza más relevantes (clase 3 para perfumería, clase 35 para servicios de retail, clase 44 para servicios cosméticos). ¿En qué territorios debe registrarse prioritariamente? ¿Cuándo conviene usar la marca de la UE (EUIPO) frente al registro nacional y cuándo el sistema de Madrid para registros internacionales?

3. Protección del packaging: El trade dress (la apariencia comercial distintiva del producto, incluyendo la forma de la botella y el diseño de la caja) puede protegerse como marca tridimensional, diseño industrial registrado o incluso como obra de arte aplicado. Explica las diferencias entre estos mecanismos, sus requisitos, duración y ámbito de protección, y propón cuál aplicar para el packaging de la maison.

4. Derechos de autor sobre contenido creativo: Los textos, fotografías, ilustraciones y vídeos de campaña generados por o para la marca están protegidos por derechos de autor. Describe cómo gestionar la titularidad de estos derechos cuando el contenido es creado por agencias externas, fotógrafos freelance o herramientas de IA generativa. ¿Qué cláusulas deben incluir los contratos con colaboradores creativos?

5. Monitoreo de infracciones con IA: Describe cómo implementar un sistema de vigilancia continua de posibles infracciones de marca en internet: registros de dominio similares, cuentas de redes sociales que usen la marca sin autorización, productos falsificados en marketplaces online (Amazon, Alibaba, eBay) y uso no autorizado de fotografías de campaña. ¿Qué herramientas de IA especializadas en brand protection (TrademarkNow, Corsearch, etc.) son más adecuadas?

6. Litigación por falsificación: El mercado de perfumes falsificados mueve miles de millones de euros al año y daña gravemente la imagen de las marcas de lujo. Describe el protocolo de acción ante el descubrimiento de un falsificador: notificación de cese y desistimiento, denuncia a la Agencia Tributaria y a la Guardia Civil (Sección de Delitos contra la Propiedad Industrial), medidas cautelares para confiscación de productos y ejercicio de acciones civiles por daños y perjuicios.

7. Gestión de la propiedad intelectual con IA: Explica cómo puede un sistema de IA ayudar al equipo legal a gestionar el portfolio de marcas registradas (alertas de renovación, seguimiento de oposiciones, análisis de riesgo de registros similares solicitados por terceros), a redactar acuerdos de confidencialidad estandarizados y a monitorear cambios normativos en materia de propiedad intelectual en los mercados donde opera la empresa.

Entrega un plan de acción de protección de propiedad intelectual con prioridades, plazos, responsables y presupuesto estimado para el primer año.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Estrategia de propiedad intelectual para maison de perfumería',
                'vote_score' => 32,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 9,
                'title' => 'Atención al cliente en perfumería de lujo con IA',
                'description' => 'Diseña los procesos y herramientas de customer service para una maison de perfumería de alta gama, garantizando una experiencia de atención coherente con los valores del lujo.',
                'prompt_content' => <<<'EOT'
Actúa como un director de experiencia de cliente especializado en marcas de lujo y bienes de consumo premium. Necesito que me ayudes a diseñar el modelo completo de atención al cliente para una maison de perfumería nicho que quiere trasladar su excelencia artesanal también a la experiencia post-venta, usando inteligencia artificial para personalizar la atención sin perder el calor humano que diferencia al lujo.

Principios que deben guiar el diseño: En el lujo, la atención al cliente no es un centro de coste sino una extensión de la marca. Cada interacción, por mínima que sea, es una oportunidad de reforzar la relación emocional con el cliente. La velocidad importa, pero la calidad de la respuesta y el sentido de ser atendido como una persona única importan más.

Sistema de atención al cliente que debes diseñar:

1. Canales de contacto y filosofía omnicanal: Define qué canales debe ofrecer la maison para la atención al cliente (email, teléfono, chat en web, WhatsApp Business, redes sociales, atención en boutique) y cuál debe ser la filosofía de respuesta en cada uno. ¿Cómo garantizar que el historial de cada cliente es accesible para cualquier agente en cualquier canal, de modo que el cliente nunca tenga que repetir su historia?

2. Casos de uso más frecuentes: Identifica y clasifica los tipos de contacto más habituales en perfumería de lujo: solicitud de información sobre ingredientes o disponibilidad, ayuda para elegir un regalo, pregunta sobre pedidos y envíos, gestión de devoluciones, queja por una reformulación, solicitud de muestras, y solicitud de personalización de packaging. Para cada tipo, define el protocolo de respuesta y el tono adecuado.

3. Asistente de IA para primera línea: Describe cómo implementar un chatbot de IA entrenado con el catálogo completo de la maison, las preguntas frecuentes y el tono de voz de la marca, que pueda resolver autónomamente entre el 40% y el 60% de las consultas sin intervención humana. ¿Cuándo debe escalar al agente humano? ¿Cómo debe presentarse al cliente (¿debe identificarse como IA o actuar como si fuera un miembro del equipo con nombre propio)?

4. Gestión de quejas y clientes insatisfechos: El cliente de lujo tiene expectativas muy altas y cuando algo falla su decepción puede ser proporcional a la inversión emocional en la marca. Diseña el protocolo de gestión de una queja sobre una fragancia que el cliente siente que "ya no huele igual" (posiblemente por una reformulación no comunicada), incluyendo la respuesta inicial, la investigación interna, la propuesta de resolución (sustitución, descuento, muestra de la nueva versión, etc.) y el seguimiento posterior.

5. Programa de fidelización y experiencias exclusivas: La atención post-venta debe ser también un canal de fidelización. Propón cómo el equipo de customer service puede contribuir activamente a la retención de los mejores clientes: felicitaciones personalizadas en fechas especiales, invitaciones a eventos privados, acceso anticipado a nuevos lanzamientos, actualización personalizada cuando hay novedades de sus fragancias favoritas.

6. Métricas de calidad del servicio: Define el cuadro de mando de customer service de la maison, con métricas específicas para el entorno del lujo: NPS (Net Promoter Score), CSAT por canal, tiempo medio de primera respuesta, tiempo medio de resolución, tasa de resolución en el primer contacto, y análisis de sentimiento de las valoraciones de los clientes. ¿Cómo usa la IA para monitorear estas métricas en tiempo real y alertar ante desviaciones?

7. Formación del equipo de atención al cliente: El equipo de customer service debe conocer el catálogo con la misma profundidad que los vendedores de boutique. Describe el programa de formación continua de cuatro semanas para un nuevo agente, que incluya inmersión en la historia de la marca, formación olfativa básica, protocolo de escritura y tono de voz en comunicaciones escritas, y manejo del CRM y las herramientas de IA de soporte.

Entrega el modelo de servicio al cliente documentado como un manual operativo, con los protocolos de respuesta para las cinco situaciones más críticas incluidos como anexo.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 40,
                'use_case' => 'Modelo de customer service para maison de perfumería de lujo',
                'vote_score' => 27,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 10,
                'title' => 'Consultoría freelance en marketing digital para perfumería de lujo con IA',
                'description' => 'Establécete como consultor independiente especializado en estrategia digital y IA para marcas de perfumería de nicho y alta gama, captando tus primeros clientes.',
                'prompt_content' => <<<'EOT'
Actúa como un mentor de negocios especializado en consultoría de marketing digital para marcas de lujo y lifestyle. Necesito que me ayudes a diseñar la estrategia completa para establecerme como consultor freelance independiente especializado en marketing digital e inteligencia artificial para marcas de perfumería de nicho y lujo, con el objetivo de alcanzar una facturación de 80.000 euros anuales en los primeros dos años.

Mi perfil actual: Tengo seis años de experiencia en marketing digital en agencias generalistas, con proyectos en moda, cosmética y lifestyle. Domino Google Ads, Meta Ads, email marketing, SEO y analítica web. Tengo un interés personal por la perfumería (colecciono fragancias nicho) y he trabajado durante dieciocho meses con una marca de perfumería pequeña en un proyecto freelance no remunerado que me permitió aprender el sector en profundidad.

Estrategia que debes ayudarme a construir:

1. Definición del posicionamiento: Ayúdame a articular mi propuesta de valor diferenciada. ¿Cómo me posiciono ante las marcas de perfumería de lujo frente a las agencias generalistas? ¿Qué combinación de conocimiento profundo del sector olfativo, dominio de las herramientas de IA aplicadas al marketing y experiencia en el comportamiento del consumidor de lujo me hace único y por qué eso justifica honorarios premium?

2. Definición del cliente ideal: Describe el perfil de los clientes más adecuados para mi servicio en la fase inicial: tamaño de empresa (maisons con facturación entre 500.000 y 5 millones de euros), estadio de desarrollo digital (presencia básica pero sin estrategia coherente), geografía (España, Francia, Italia, Latinoamérica), y dolores más frecuentes (no saben cómo trasladar la exclusividad de sus boutiques al canal digital sin parecer una marca de gran consumo).

3. Catálogo de servicios y estructura de precios: Diseña mi oferta de servicios inicial con tres líneas principales: diagnóstico de presencia digital (proyecto de dos semanas, precio fijo de 2.500 euros), estrategia de marketing digital y contenido para doce meses (precio fijo de 8.000 euros), y gestión mensual recurrente de canales (retainer mensual de 2.000 a 3.500 euros según alcance). Para cada servicio, define claramente los entregables, el tiempo dedicado y el argumento de valor que justifica el precio.

4. Captación de los primeros clientes: Describe las tres vías más efectivas para conseguir los primeros proyectos pagados en el sector: LinkedIn dirigido a directores de marketing de maisons, presencia activa en foros y comunidades de perfumería nicho online (Fragrantica, Basenotes, grupos de Instagram), y ponencias en eventos del sector (Esxence, The Scent Lab). Para cada vía, detalla las acciones concretas del primer mes.

5. Portafolio y autoridad de marca: Sin poder mostrar resultados de clientes reales al principio, ¿cómo construyo credibilidad? Propón cómo usar el proyecto no remunerado de dieciocho meses como caso de estudio anonimizado, cómo crear contenido de valor en LinkedIn y YouTube que demuestre mi conocimiento del marketing digital para perfumería, y cómo obtener testimonios de los contactos profesionales del sector que ya me conocen.

6. Uso de IA en mi propio negocio de consultoría: Describe cómo usar IA para ser más eficiente y ofrecer más valor a mis clientes: generación de análisis de tendencias olfativas globales a partir de datos de búsqueda y redes sociales, personalización de campañas de email a escala, análisis de sentimiento de reviews de fragancias para identificar las emociones que activan la compra, y automatización de informes de rendimiento de campañas con narrativa en lenguaje natural.

7. Gestión del negocio y crecimiento a largo plazo: Describe la estructura operativa de mi consultoría como autónomo: herramientas de gestión de proyectos y facturación, política de pagos (anticipo del 50% al inicio del proyecto), gestión de la carga de trabajo para no bloquearme con un solo cliente grande, y la estrategia para escalar a partir del segundo año (asociarme con un especialista en tecnología, crear un curso online sobre marketing digital para perfumería, o publicar una guía de referencia del sector).

Entrega un plan de negocio simplificado de dos páginas que pueda compartir con posibles socios o mentores, más un calendario de acciones para los primeros tres meses de actividad.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 45,
                'use_case' => 'Plan de negocio para consultor freelance en perfumería de lujo',
                'vote_score' => 38,
                'resource_type' => 'prompt',
            ],
        ];
        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");

                continue;
            }
            Skill::create(array_merge($data, [
                'user_id' => $admin->id,
                'slug' => $slug,
                'status' => 'published',
                'version' => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
