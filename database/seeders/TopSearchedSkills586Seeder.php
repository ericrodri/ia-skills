<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills586Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Campaña de marketing para joyería de lujo con IA',
                'description'       => 'Crea campañas de marketing sofisticadas para marcas de joyería y lujo utilizando IA para identificar arquetipos de cliente, construir narrativas de marca y seleccionar canales premium.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de marketing especializado en el sector de la joyería fina y el lujo. Tu misión es crear una campaña de marketing completa y sofisticada para una marca de joyería utilizando inteligencia artificial como palanca estratégica.

Contexto de la tarea:
La marca para la que trabajas tiene una colección nueva que combina tradición artesanal con materiales contemporáneos. El precio medio de sus piezas oscila entre 800 € y 15.000 €. Su público objetivo son profesionales de alto poder adquisitivo de entre 35 y 60 años, con especial atención al segmento femenino que compra para sí misma y al segmento masculino que compra como regalo.

Instrucción principal — desarrolla los siguientes bloques:

1. Análisis del arquetipo de cliente de lujo
Define con precisión tres perfiles de cliente ideal (buyer personas de lujo) para esta colección. Para cada perfil incluye: demografía, psicografía, motivaciones emocionales de compra, barreras de compra, plataformas donde consume contenido de lujo y mensaje clave que resuena con su identidad. Utiliza IA generativa para enriquecer cada perfil con insight cultural y de tendencias.

2. Narrativa de marca y storytelling de la colección
Desarrolla una narrativa de campaña que conecte emocionalmente el proceso artesanal de creación de la joya con el significado simbólico que adquiere quien la lleva. Incluye: tagline principal de campaña, tres variaciones de copy para anuncio en prensa de lujo, guion de 60 segundos para vídeo de campaña y texto de descripción de producto que active el deseo de posesión.

3. Estrategia de canales premium
Selecciona y justifica los canales más adecuados para alcanzar al público objetivo: eventos de arte y cultura, medios impresos de lujo, Instagram y Pinterest con creatividades de alto impacto visual, colaboraciones con influencers de nicho de lifestyle de lujo, y marketing de relaciones con clientela VIP. Para cada canal, especifica la inversión relativa recomendada y el tipo de contenido más efectivo.

4. Plan de contenido con IA
Diseña un calendario editorial de 8 semanas que aproveche la IA para: generar variaciones de copy A/B para anuncios digitales, personalizar mensajes según el historial de interacción del cliente, producir descripciones de producto en múltiples idiomas manteniendo el tono de lujo, y crear contenido educativo sobre gemología y artesanía que posicione a la marca como referente de conocimiento.

5. Métricas de éxito para campañas de lujo
Define los KPI relevantes para una campaña de lujo donde el volumen no es la única métrica: brand awareness en el segmento premium, tasa de engagement de calidad, coste por lead cualificado, tasa de conversión en tienda física y valor medio de ticket. Explica cómo usar IA para optimizar en tiempo real sin perder la exclusividad de la comunicación.

6. Gestión de la exclusividad digital
En el lujo, la sobreexposición destruye valor. Desarrolla un protocolo para usar IA sin masificar la comunicación: segmentación hiper-personalizada, supresión de audiencias que no corresponden al perfil de lujo, y automatización discreta de mensajes postventa que refuercen la relación con el cliente.

Formato de entrega:
Presenta cada bloque con encabezados claros. Usa ejemplos de copy reales y específicos, no genéricos. Adapta el tono de toda la respuesta al registro propio de la comunicación de lujo: elegante, preciso y evocador.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Desarrollar campañas de marketing completas para marcas de joyería y lujo con narrativa de alto impacto',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'API de configurador de joyas personalizado con IA',
                'description'       => 'Diseña la arquitectura y lógica de un configurador digital de joyas que use IA para recomendar combinaciones de materiales, piedras y estilos según las preferencias del usuario.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software especializado en plataformas de comercio de lujo digital. Tu objetivo es diseñar una API de configurador de joyas personalizado con capacidades de inteligencia artificial integradas.

Contexto del proyecto:
Una joyería de lujo quiere ofrecer en su sitio web y aplicación móvil un configurador interactivo que permita al cliente diseñar su propia joya eligiendo: tipo de pieza (anillo, collar, pulsera, pendientes), metal base (oro amarillo, oro blanco, oro rosado, platino), tipo y tamaño de piedra central, piedras secundarias, acabado superficial, y grabado personalizado. La IA debe guiar al cliente hacia combinaciones armónicas y calcular precio en tiempo real.

Instrucción de desarrollo — cubre estos módulos:

1. Arquitectura de la API REST
Define los endpoints principales de la API: POST /configurations para crear una configuración nueva, GET /configurations/{id} para recuperarla, POST /configurations/{id}/ai-suggest para obtener sugerencias de IA, GET /materials para listar materiales disponibles con stock y precios, y POST /orders para convertir una configuración en pedido. Especifica el esquema JSON de cada request y response incluyendo campos opcionales y validaciones.

2. Motor de recomendación con IA
Diseña el flujo de un motor de recomendación que analice las selecciones parciales del usuario y sugiera las siguientes elecciones más armónicas. El motor debe considerar: compatibilidad estética entre metales y piedras, tendencias actuales del sector, historial de preferencias del usuario si está autenticado, y presupuesto declarado al inicio del proceso. Describe el prompt de sistema que alimentaría un LLM actuando como asistente de configuración.

3. Cálculo dinámico de precio
Implementa la lógica de cálculo de precio en tiempo real. El precio depende de: peso en gramos del metal (calculado según dimensiones de la pieza), coste por gramo según cotización del metal del día, precio de cada piedra según talla, claridad y color (escala GIA), coste de mano de obra artesanal estimado por complejidad de la pieza, y margen de la marca. Describe cómo estructurar esta lógica en un servicio desacoplado con caché de cotizaciones.

4. Visualización 3D e integración con IA generativa
Describe la integración con una API de renderizado 3D (como Sketchfab o Three.js en el frontend) y cómo la IA generativa puede producir una imagen fotorrealista de la joya configurada. Define el flujo: configuración → prompt generado automáticamente con los parámetros elegidos → llamada a API de imagen → URL del render devuelto al cliente. Incluye el template de prompt para generación de imagen de joya.

5. Seguridad y protección de diseños
Implementa medidas para proteger los diseños de joyería: autenticación JWT, rate limiting por IP para evitar scraping de configuraciones, marca de agua invisible en imágenes de render, y endpoint de copyright que registre cada diseño único generado. Describe también cómo manejar la propiedad intelectual cuando un cliente diseña una pieza completamente nueva.

6. Testing y calidad de las recomendaciones de IA
Define una estrategia de evaluación de la calidad de las recomendaciones: conjunto de test con configuraciones conocidas y sus puntuaciones de armonía estética, métricas de satisfacción del cliente post-compra, y proceso de fine-tuning del modelo de recomendación con datos reales de conversión. Especifica cómo implementar un ciclo de mejora continua del motor de IA.

Formato esperado:
Entrega el diseño con diagramas de flujo en formato texto, esquemas JSON de ejemplo y pseudocódigo comentado donde sea necesario. Prioriza la escalabilidad y la experiencia de usuario premium.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar APIs y motores de IA para plataformas de personalización de joyería de lujo',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de colecciones de joyería asistido por IA',
                'description'       => 'Utiliza IA para generar conceptos de colección, explorar referencias estéticas, crear moodboards y desarrollar briefings de diseño para joyas con identidad de marca coherente.',
                'prompt_content'    => <<<'EOT'
Eres un director creativo especializado en el diseño de joyería fina y accesorios de lujo. Vas a usar la inteligencia artificial como herramienta de exploración creativa para desarrollar una colección completa desde el concepto hasta el briefing de producción.

Objetivo del proyecto:
Diseñar una colección de joyería de entre 8 y 12 piezas con una identidad visual y conceptual coherente. La colección debe poder comercializarse en el segmento de lujo accesible (rango 300-2.500 €) y tener potencial para presentarse en una feria de joyería internacional como Inhorgenta, Vicenzaoro o Baselworld.

Instrucción creativa — desarrolla estas fases:

1. Exploración conceptual con IA
Define el concepto narrativo de la colección respondiendo: ¿qué historia cuenta esta colección?, ¿qué emoción o estado de ánimo evoca?, ¿con qué movimiento artístico, periodo histórico o fenómeno natural dialoga? Usa IA para generar tres propuestas conceptuales distintas con nombre de colección, claim descriptivo y referencia estética principal para cada una. Selecciona la más potente y justifica tu elección.

2. Moodboard y universo visual
Para el concepto elegido, describe con detalle el universo visual: paleta de colores (materiales y piedras que la expresan), texturas predominantes (pulido espejo, satinado, oxidado, mate), formas geométricas o orgánicas rectoras, referencias en arte, arquitectura, naturaleza o moda que alimentan el diseño. Incluye un prompt detallado de IA para generar imágenes de inspiración para cada categoría del moodboard.

3. Definición de las piezas de la colección
Describe las 10 piezas de la colección indicando para cada una: nombre de la pieza, tipo (anillo, collar, pendientes, pulsera, broche), metal y acabado, piedras o elementos decorativos, descripción formal del diseño (proporciones, motivo central, detalle técnico distintivo), precio de venta estimado y posicionamiento dentro de la colección (pieza de entrada, pieza estrella, pieza de alta joyería).

4. Coherencia de la colección
Analiza la colección como conjunto: ¿qué elementos visuales repiten y crean lenguaje propio de la marca?, ¿cómo pueden combinarse las piezas para crear looks layering?, ¿qué piezas son las más fotogénicas y deben protagonizar la campaña?, ¿existe variación suficiente en precio y estilo para cubrir distintos momentos de uso? Usa IA para detectar huecos o incoherencias en la propuesta.

5. Briefing de producción para el artesano
Redacta un briefing técnico para el maestro joyero o taller de producción que incluya: especificaciones de materiales con referencias normalizadas, técnicas de fabricación requeridas (fundición, forja, engaste, esmalte), tolerancias dimensionales clave, puntos críticos de calidad a verificar, y prototipo prioritario para validar el concepto antes de producir la colección completa.

6. Estrategia de presentación de la colección
Diseña la presentación de la colección para una feria: nombre y claim en español e inglés, order of pieces para la vitrina (narrativa visual del espacio), fotografía de producto (fondo, iluminación, props), y kit de prensa con texto de presentación de 200 palabras. Usa IA para generar variaciones del texto de prensa adaptadas a medios de moda, medios de joyería especializada y redes sociales.

Entrega todo en un documento estructurado que pueda presentarse directamente a la dirección de la marca y al equipo de producción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Crear colecciones de joyería completas desde concepto hasta briefing de producción con apoyo de IA',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estrategia de ventas para joyería de lujo con IA',
                'description'       => 'Desarrolla un plan de ventas consultivo para joyería de alto valor utilizando IA para personalizar el proceso de venta, gestionar objeciones y fidelizar clientes VIP.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de ventas de alta gama especializado en el sector de la joyería y el lujo. Tu trabajo es diseñar una estrategia de ventas consultiva que utilice la inteligencia artificial para elevar la experiencia de compra y aumentar el ticket medio y la recurrencia de clientes.

Contexto de trabajo:
La joyería para la que diseñas esta estrategia tiene tres puntos de venta físicos en ciudades principales y una tienda online en crecimiento. El equipo de ventas está formado por 12 asesores especializados. El ticket medio actual es de 1.200 € y el objetivo es elevarlo a 1.800 € en 18 meses, con una tasa de repetición de compra del 35%.

Instrucción estratégica — desarrolla estos pilares:

1. El proceso de venta consultiva en lujo
Diseña el journey de venta para el canal físico en 6 etapas: bienvenida y lectura del cliente, descubrimiento de la ocasión y motivación de compra, presentación narrativa de la pieza (no de sus características técnicas), manejo de la experiencia sensorial (tactilidad, iluminación, presentación), cierre elegante sin presión, y ritual de packaging y despedida memorable. Para cada etapa, sugiere cómo usar IA (CRM con historial, sugerencias en tiempo real, perfiles de cliente) para personalizar la interacción.

2. Perfilado del cliente con IA
Implementa un sistema de perfilado que capture, tras cada visita: ocasión de compra declarada, piezas que el cliente tomó en mano, rango de precio con el que se sintió cómodo, reacciones ante distintos estilos (clásico, contemporáneo, artístico), y datos personales relevantes (aniversarios, cumpleaños de familiares). Describe cómo usar estos datos con IA para preparar la siguiente visita con recomendaciones ultra-personalizadas.

3. Gestión de objeciones de precio en lujo
En el lujo, el precio no se defiende con descuentos sino con valor percibido. Desarrolla respuestas elaboradas para las objeciones más frecuentes: "es muy caro", "lo veo más barato en internet", "necesito pensarlo", "no sé si es la ocasión adecuada". Cada respuesta debe reencuadrar la objeción en términos de significado, artesanía, exclusividad o inversión emocional. Usa IA para generar variaciones de estas respuestas según el perfil del cliente.

4. Programa VIP y fidelización con IA
Diseña un programa de clientes VIP con tres niveles de membresía. Para cada nivel define: criterio de acceso (gasto acumulado o frecuencia), beneficios exclusivos (acceso a piezas únicas antes del lanzamiento, invitaciones a eventos privados, servicio de mantenimiento gratuito), y comunicación personalizada generada con IA que llegue en los momentos de máxima relevancia (aniversarios, fechas señaladas).

5. Ventas online sin perder la experiencia de lujo
Adapta el proceso de venta consultiva al canal digital: chat con asesor humano asistido por IA que sugiere respuestas, videollamada de presentación de piezas de alta joyería, envío de muestras fotográficas personalizadas según el perfil del cliente, y servicio de mensajería privada para clientes VIP con atención dedicada. Especifica cómo la IA filtra y prioriza clientes online según su potencial de conversión.

6. Métricas de ventas en lujo
Define el cuadro de mando del equipo de ventas con KPI relevantes para el sector: ticket medio, tasa de conversión por tipo de visita, Net Promoter Score de clientes VIP, tiempo medio hasta segunda compra, y porcentaje de ventas generadas por recomendación. Describe cómo usar IA para analizar estas métricas y ofrecer coaching individualizado a cada asesor de ventas.

Redacta la estrategia con el tono propio de la consultoría de lujo: riguroso, aspiracional y orientado a la excelencia en cada detalle.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear estrategias de venta consultiva para joyería de alto valor con personalización mediante IA',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de producto para colecciones de joyería con IA',
                'description'       => 'Aplica metodologías de product management al desarrollo de colecciones de joyería usando IA para analizar tendencias, gestionar el portfolio y priorizar nuevas piezas.',
                'prompt_content'    => <<<'EOT'
Eres un product manager especializado en el sector de la joyería y los accesorios de lujo. Tu rol es aplicar las metodologías modernas de gestión de producto al desarrollo y gestión del portfolio de una marca de joyería, usando la inteligencia artificial como herramienta de decisión.

Objetivo del ejercicio:
La marca tiene actualmente 85 referencias activas en su portfolio. El 30% de las referencias generan el 70% de los ingresos. Hay que racionalizar el portfolio, priorizar el desarrollo de nuevas piezas para la próxima temporada y establecer un proceso de discovery continuo con apoyo de IA.

Instrucción de gestión de producto — trabaja estos bloques:

1. Auditoría del portfolio con IA
Diseña el proceso de auditoría del portfolio actual: matriz de análisis con ejes ventas vs. margen, identificación de piezas "vacas lecheras", "estrellas", "dilemas" y "perros" según el modelo BCG adaptado a joyería, análisis de canibalización entre piezas similares, y detección de huecos en el portfolio (ocasiones o segmentos de cliente no cubiertos). Describe cómo usar IA para procesar datos de ventas y generar recomendaciones de discontinuación o potenciación.

2. Discovery de nuevas piezas
Establece el proceso de discovery para identificar oportunidades de nuevas piezas: análisis de tendencias en plataformas de joyería (Pinterest Trends, Instagram hashtags, informes de ferias), escucha de demandas no satisfechas en reseñas y consultas de cliente, análisis de competidores en el segmento precio objetivo, y co-creación con clientes VIP mediante entrevistas estructuradas. Usa IA para sintetizar estos inputs y generar propuestas de concepto priorizadas.

3. Definición del producto con criterios de lujo
Para una nueva pieza propuesta, desarrolla el Product Requirements Document (PRD) adaptado a joyería: propuesta de valor diferencial, cliente objetivo y ocasión de uso, especificaciones de diseño en lenguaje no técnico, precio objetivo y posicionamiento en el portfolio, volumen mínimo de producción para rentabilidad, y criterios de éxito a 6 y 12 meses. Incluye un apartado de riesgos con el análisis de IA de las principales incertidumbres.

4. Roadmap de colecciones
Construye un roadmap de 18 meses con cuatro lanzamientos de colección (uno por temporada más una cápsula especial). Para cada lanzamiento define: tema conceptual, número de piezas, rango de precios, canal de lanzamiento principal (online, física, feria, colaboración), y recursos de diseño y producción necesarios. Usa IA para detectar conflictos de recursos entre lanzamientos y sugerir ajustes de timing.

5. Gestión del ciclo de vida de las piezas
Define los criterios y el proceso para cada fase del ciclo de vida de una pieza: lanzamiento limitado (early adopters, feedback), consolidación en el portfolio estándar, edición especial o revisión del diseño, y descatalogación. Especifica los umbrales de ventas y margen que activan cada transición y cómo el análisis de IA acelera la detección de señales de declive o de demanda emergente.

6. Colaboración entre producto, diseño y ventas
Establece el cadence de reuniones y los artefactos compartidos entre el equipo de producto, el estudio de diseño y el equipo de ventas: weekly de pipeline de nuevas piezas, monthly de revisión de portfolio, y quarterly de planificación de temporada. Define cómo la IA centraliza la información y genera informes automáticos que nutren estas reuniones con datos actualizados.

Entrega el plan en formato ejecutivo, con secciones claras y ejemplos concretos aplicados al sector de la joyería.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Aplicar product management moderno al portfolio de joyería con análisis y priorización mediante IA',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Reclutamiento de artesanos y gemólogos con IA',
                'description'       => 'Diseña un proceso de selección de talento especializado para el sector de la joyería: maestros joyeros, gemólogos, diseñadores y asesores de lujo, con apoyo de IA en cada fase.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en recursos humanos con experiencia en el reclutamiento de talento de nicho para el sector del lujo y la joyería artesanal. Tu objetivo es diseñar un proceso de selección completo para perfiles muy especializados, donde la oferta de candidatos es escasa y la cultura de la marca es un factor decisivo de retención.

Contexto organizacional:
La empresa necesita cubrir cuatro posiciones críticas en los próximos seis meses: un maestro joyero con mínimo 15 años de experiencia en alta joyería, un gemólogo certificado GIA para el área de compras de piedras preciosas, un diseñador de joyería con portafolio en el segmento contemporáneo de lujo, y dos asesores de ventas senior para el nuevo punto de venta en Madrid.

Instrucción de reclutamiento — desarrolla estos módulos:

1. Mapa de talento del sector
Describe dónde encontrar cada perfil: gremios y asociaciones de joyeros (FACGJ en España, Jewellers of America, Goldsmiths' Company), escuelas de gemología y diseño de joyería (Escola Massana, IED, Instituto Gemológico Español), comunidades online de artesanos de lujo, y redes sociales donde maestros joyeros comparten su trabajo (Instagram de taller, YouTube de técnica). Usa IA para monitorizar estas fuentes y alertar sobre candidatos activos o pasivos relevantes.

2. Diseño de la oferta para candidatos de nicho
Redacta las descripciones de puesto para cada uno de los cuatro roles, adaptadas a candidatos de nicho que no buscan trabajo activamente: lenguaje que apele al orgullo artesanal y a la excelencia técnica, descripción del proyecto de empresa que transmita propósito y permanencia, condiciones que compitan con talleres propios o con el autoempleo, y proceso de selección que respete el tiempo y la dignidad del candidato experto. Usa IA para generar variaciones de la oferta adaptadas a distintos canales de publicación.

3. Evaluación técnica con IA
Diseña las pruebas de evaluación para cada perfil: prueba práctica de banco para el maestro joyero (especifica qué técnica evaluar y los criterios de corrección), caso práctico de valoración de gemas para el gemólogo, revisión de portafolio con rúbrica para el diseñador, y role-play de venta de una pieza de alta joyería para los asesores. Describe cómo usar IA para analizar portafolios de diseño, evaluar la coherencia del historial profesional y detectar señales de excelencia artesanal en las respuestas escritas.

4. Entrevista por competencias para perfiles de lujo
Desarrolla una guía de entrevista estructurada para cada perfil con preguntas que evalúen: dominio técnico específico del puesto, capacidad para transmitir la filosofía del lujo artesanal al cliente, gestión del detalle y la exigencia propia del sector, adaptación al ritmo y la cultura de una marca de nicho, y actitud ante la formación continua y la evolución de las técnicas. Usa IA para analizar las respuestas en entrevistas grabadas y detectar coherencia entre lo declarado y el historial verificable.

5. Onboarding para artesanos de lujo
Diseña el plan de onboarding de 90 días para el maestro joyero y el gemólogo: inmersión en la historia y valores de la marca, conocimiento del portfolio actual y los procesos de diseño, presentación a proveedores de materiales y piedras de confianza, y mentoría por parte de un artesano senior durante las primeras semanas. Incluye hitos de evaluación a los 30, 60 y 90 días con criterios claros de valoración.

6. Retención del talento artesanal
El mayor riesgo con artesanos de lujo es perderlos a la competencia o al autoempleo. Diseña un plan de retención a largo plazo: desarrollo profesional con participación en ferias internacionales, reconocimiento del trabajo con firma de autor en piezas, participación en beneficios ligada a la exclusividad de su conocimiento, y plan de sucesión que convierta al artesano en maestro formador de las nuevas generaciones. Usa IA para detectar señales tempranas de desvinculación en los datos de clima laboral y productividad.

Presenta el proceso completo en un documento de RR. HH. estructurado, con plantillas reutilizables para cada fase.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reclutar y retener talento artesanal especializado en el sector de la joyería y el lujo con apoyo de IA',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis financiero del sector joyería y lujo con IA',
                'description'       => 'Aplica análisis financiero especializado al negocio de la joyería: valoración de inventario en metales preciosos, análisis de márgenes por colección y planificación de tesorería con fluctuaciones de commodities.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero con especialización en empresas del sector de la joyería y los bienes de lujo. Tu objetivo es desarrollar un análisis financiero completo que tenga en cuenta las peculiaridades contables y de valoración propias de este sector.

Contexto financiero:
La empresa joyera tiene una facturación anual de 4,2 millones de euros, un inventario de metales preciosos y piedras valorado en 1,8 millones, y opera con un ciclo de conversión de efectivo largo (media de 90 días entre compra de material y cobro de la venta). Los márgenes brutos varían significativamente entre piezas de catálogo estándar (45%) y piezas de alta joyería por encargo (65%).

Instrucción analítica — trabaja estos bloques:

1. Valoración del inventario de metales preciosos
Explica las metodologías de valoración de inventario aplicables a metales preciosos (FIFO, precio medio ponderado, valor de mercado) y su impacto en el resultado contable según la volatilidad del precio del oro y la plata. Diseña un modelo de seguimiento del inventario que use feeds de precios en tiempo real integrados con IA para alertar cuando el valor contable del inventario difiere significativamente del valor de mercado. Incluye el tratamiento contable de las coberturas de precio (hedging) si la empresa las utiliza.

2. Análisis de márgenes por colección y canal
Construye una estructura de análisis de márgenes que diferencie: coste de material (metal + piedras al precio del día de producción), mano de obra artesanal (horas x coste por hora de cada nivel de artesano), costes indirectos de diseño y prototipo amortizados por unidad, y margen de distribución según canal (tienda propia, multimarca, online, consignación en hoteles de lujo). Usa IA para detectar automáticamente las piezas con margen por debajo del umbral de rentabilidad y proponer ajustes de precio o de coste.

3. Planificación de tesorería con volatilidad de commodities
La compra de metales preciosos y piedras representa el mayor desembolso de tesorería y su precio fluctúa. Diseña un modelo de planificación de tesorería a 12 meses que incorpore: escenarios de precio del oro (base, optimista, pesimista), calendario de compras de material alineado con el plan de colecciones, y línea de crédito necesaria para financiar el inventario de campaña navideña. Describe cómo IA puede generar escenarios automáticamente actualizando las variables de mercado.

4. Rentabilidad por cliente VIP
En joyería de lujo, el 20% de los clientes generan el 60% del margen. Diseña el análisis de Customer Lifetime Value (CLV) para el segmento VIP: valor de compras históricas, frecuencia y recencia, coste de adquisición y retención, y margen neto por cliente a lo largo de la relación comercial. Usa IA para segmentar la base de clientes y predecir qué clientes actuales tienen mayor probabilidad de convertirse en VIP con la inversión correcta en relación.

5. Control de gestión mensual con IA
Define el cuadro de mando financiero mensual para la dirección: ventas por canal vs. objetivo, margen bruto por colección, rotación de inventario, días de cobro y de pago, y posición de tesorería neta. Describe cómo automatizar la generación de este informe con IA: extracción de datos del ERP, cálculo de indicadores, detección de desviaciones significativas y generación de comentarios explicativos en lenguaje natural para la dirección.

6. Valoración de la empresa joyera
En caso de búsqueda de inversor o comprador, describe los métodos de valoración más apropiados para una empresa joyera de lujo: múltiplos de EBITDA del sector, valor de la marca y de los intangibles (diseños registrados, clientela VIP), valor de liquidación del inventario de metales y piedras, y prima por exclusividad y posicionamiento. Usa IA para analizar transacciones comparables en el sector y producir un rango de valoración fundamentado.

Entrega el análisis en formato de informe financiero con tablas de ejemplo y fórmulas donde corresponda.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Analizar la salud financiera de una empresa joyera con las particularidades del sector lujo y materiales preciosos',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento normativo en joyería y lujo con IA',
                'description'       => 'Navega el marco legal del sector joyero: marcajes, trazabilidad de diamantes, normativa antilavado, propiedad intelectual de diseños y regulación de importaciones de materiales preciosos.',
                'prompt_content'    => <<<'EOT'
Eres un asesor legal especializado en el sector de la joyería, los metales preciosos y los bienes de lujo. Tu objetivo es elaborar una guía de cumplimiento normativo completa para una empresa joyera que opera en España y exporta a otros mercados europeos.

Contexto regulatorio:
La empresa fabrica joyería en España con metales adquiridos en el mercado internacional y piedras preciosas de distintos orígenes. Vende directamente al consumidor final en tiendas propias y online, y también a través de joyerías multimarca en Francia, Italia y Alemania.

Instrucción legal — desarrolla estos bloques normativos:

1. Marcaje obligatorio de metales preciosos en España
Explica el sistema de marcaje obligatorio regulado en España para el oro, la plata y el platino: títulos permitidos (750, 585, 375 para el oro; 925, 800 para la plata), punzones de contraste de la FECOM (Fábrica Nacional de Moneda y Timbre), marcas de fabricante obligatorias, y documentación requerida para cada partida de fabricación. Describe las sanciones por incumplimiento y cómo usar IA para gestionar el registro y trazabilidad de punzonados en el ERP de la empresa.

2. Proceso Kimberley y trazabilidad de diamantes
El Proceso Kimberley exige certificar que los diamantes comercializados no provienen de zonas de conflicto. Explica: qué documentación debe acompañar a cada lote de diamantes importado, cómo verificar la autenticidad del certificado Kimberley, las obligaciones del importador y del vendedor final, y el riesgo reputacional y legal de incumplimiento. Describe cómo implementar un sistema de trazabilidad blockchain o con IA que registre el origen de cada piedra desde la mina hasta la joya terminada.

3. Normativa antilavado de capitales en el sector lujo
Las joyerías están sujetas a la Ley 10/2010 de prevención del blanqueo de capitales. Desarrolla el plan de cumplimiento AML para la empresa: umbral de identificación de clientes (1.000 € en efectivo), KYC (Know Your Customer) para clientes VIP, declaración de operaciones sospechosas a la SEPBLAC, nombramiento de responsable de cumplimiento AML, y formación obligatoria del equipo de ventas. Usa IA para monitorizar patrones de transacciones inusuales y generar alertas automáticas ante operaciones de riesgo.

4. Propiedad intelectual de los diseños de joyería
Protege los diseños de la marca: registro de modelos industriales en la OEPM y en la EUIPO, protección automática por derecho de autor de diseños originales, duración y territorialidad de la protección, acción legal ante imitaciones en plataformas online (DMCA, reclamaciones en marketplaces de lujo), y política de diseños en contratos con diseñadores externos. Describe cómo usar IA para monitorizar internet y detectar posibles infracciones de los diseños registrados.

5. Regulación de importaciones de metales y piedras
Importar metales preciosos y piedras preciosas implica cumplir con: aranceles aduaneros según el código NC (Nomenclatura Combinada), certificados de origen para metales de minas en países con normativa de minerales de conflicto (Dodd-Frank), documentación sanitaria y de conformidad para ciertos tratamientos de piedras (irradiación, relleno), y declaración de valor en aduana. Usa IA para automatizar la clasificación arancelaria de nuevas referencias y detectar cambios regulatorios que afecten a las importaciones habituales.

6. Comercio electrónico y ventas online de joyería
La venta online de joyería implica obligaciones específicas: información precontractual sobre características de los metales y piedras, derecho de desistimiento de 14 días y su aplicación a joyas personalizadas (posible exclusión), política de devoluciones y garantías legales de 2 años, y reglamento de protección de datos en la gestión del perfil y preferencias del cliente VIP. Describe el checklist legal para el lanzamiento de una tienda online de joyería conforme con la normativa española y europea.

Presenta la guía en formato de checklist por bloques, con referencias normativas específicas (número de ley, artículo) y recomendaciones prácticas de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Elaborar un plan de cumplimiento legal completo para empresas del sector joyero y de lujo en España',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al cliente VIP para joyería de lujo con IA',
                'description'       => 'Diseña un servicio de atención al cliente de excelencia para joyería de lujo utilizando IA para personalizar cada interacción, gestionar reclamaciones con elegancia y construir relaciones duraderas.',
                'prompt_content'    => <<<'EOT'
Eres un experto en customer experience especializado en el sector del lujo, con foco en joyería de alta gama. Tu objetivo es diseñar un modelo de atención al cliente que eleve cada interacción a la altura de la experiencia de compra de lujo, usando la inteligencia artificial como aliado de la personalización y la excelencia.

Contexto del servicio:
La joyería atiende a clientes cuyo ticket medio supera los 1.000 € y para quienes la joya adquirida tiene un valor simbólico y emocional que va más allá del precio. Las reclamaciones, aunque escasas, son potencialmente devastadoras para la reputación si no se gestionan con la máxima delicadeza. El servicio posventa incluye: limpieza y mantenimiento, reparaciones, redimensionado de anillos, grabado y personalización, y certificados de tasación.

Instrucción de diseño del servicio — trabaja estos bloques:

1. El estándar de excelencia en atención de lujo
Define los principios que guían cada interacción con el cliente de lujo: anticipación de necesidades antes de que el cliente las exprese, personalización radical basada en el conocimiento del historial del cliente, respuesta inmediata con tiempo de resolución predecible, tono elegante y cálido que nunca suena automatizado, y discreción absoluta con los datos e información privada del cliente. Describe cómo la IA apoya cada principio sin reemplazar el componente humano.

2. Sistema de gestión de clientes VIP con IA
Diseña el perfil digital de cliente VIP que la IA mantiene actualizado: piezas adquiridas con fecha, ocasión y precio, preferencias de estilo documentadas, fechas relevantes (aniversario de boda, cumpleaños propios y de familiares), notas de interacciones anteriores, y alertas de servicio pendiente (mantenimiento anual, garantía próxima a vencer). Describe cómo el sistema genera recordatorios proactivos y sugerencias de contacto en momentos de alta relevancia para el cliente.

3. Gestión de reclamaciones en el sector lujo
Las reclamaciones en joyería de lujo requieren un protocolo especial. Desarrolla el proceso de gestión para los tres tipos más frecuentes: defecto en la pieza (rotura de engaste, pérdida de piedra, decoloración), discrepancia entre lo prometido y lo entregado en una pieza por encargo, y insatisfacción con el trato recibido en tienda. Para cada caso define: primer contacto (qué decir, qué no decir), escalado si es necesario, solución ofrecida y ritual de compensación que convierta la reclamación en una oportunidad de fidelización.

4. Servicio posventa como ventaja competitiva
Convierte el servicio posventa en un diferenciador de marca: programa de mantenimiento anual gratuito para clientes que superen un umbral de compra, servicio de limpieza en tienda sin cita como motivo de visita recurrente, seguro de joya que la marca facilita con condiciones preferentes, y certificado de tasación actualizable cada 3 años. Usa IA para identificar qué clientes tienen piezas que requieren mantenimiento próximo y generar la comunicación personalizada de recordatorio.

5. Comunicación posventa personalizada
Diseña la cadena de comunicaciones posventa para los 12 meses posteriores a una compra de alto valor: mensaje de agradecimiento artesanal 24h después, encuesta de satisfacción a las 2 semanas (adaptada al tono de lujo, no un formulario genérico), tarjeta de felicitación en el aniversario de la compra, e invitación al evento privado de presentación de la nueva colección a los 6 meses. Para cada comunicación, usa IA para personalizar el texto según el perfil y la historia del cliente.

6. Indicadores de calidad del servicio de lujo
Define los KPI del servicio de atención al cliente adaptados al sector: Net Promoter Score entre clientes VIP, tasa de reclamaciones por unidad vendida, tiempo medio de resolución de incidencia, porcentaje de clientes que repiten compra tras una reclamación gestionada, y número de menciones positivas espontáneas del servicio en reseñas y redes sociales. Describe cómo usar análisis de sentimiento con IA para procesar el feedback cualitativo y detectar áreas de mejora no capturadas por las métricas cuantitativas.

Entrega el modelo de servicio en un documento operativo que el equipo de atención al cliente pueda consultar en su trabajo diario.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Crear un servicio de atención al cliente de excelencia para joyería de lujo con personalización mediante IA',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultoría independiente para marcas de lujo con IA',
                'description'       => 'Estructura tu propuesta de valor como consultor freelance especializado en el sector del lujo y la joyería, usando IA para diferenciarte, escalar tu práctica y ofrecer servicios premium a marcas establecidas.',
                'prompt_content'    => <<<'EOT'
Eres un consultor independiente especializado en estrategia y operaciones para el sector de la joyería y el lujo. Tu objetivo es diseñar un modelo de práctica consultora que use la inteligencia artificial para ampliar tu capacidad de entrega, diferenciarte de consultoras generalistas y crear un posicionamiento de nicho reconocido en el mercado.

Contexto profesional:
Llevas 12 años trabajando en el sector, primero como directivo en una marca de joyería y luego como consultor independiente. Tienes una red de 40 contactos de decisión en el sector y has completado 15 proyectos de consultoría en los últimos 4 años. Quieres pasar de facturar 80.000 € anuales a 150.000 € sin contratar empleados, usando IA para multiplicar tu capacidad.

Instrucción de construcción de la práctica — trabaja estos bloques:

1. Posicionamiento como consultor de nicho en lujo
Define tu propuesta de valor diferencial como consultor del sector: especialización específica que pocos ofrecen (por ejemplo, transformación digital de marcas de lujo artesanal, o internacionalización de joyerías boutique), casos de éxito que demuestran el ROI de tu trabajo, y argumento contra la competencia de grandes consultoras (velocidad, coste, implicación personal del experto). Usa IA para analizar el mercado de consultores de lujo en España y detectar el nicho menos saturado donde tu experiencia es más valiosa.

2. Portafolio de servicios escalables con IA
Diseña una cartera de servicios en tres niveles: servicios de diagnóstico de bajo ticket (auditoría de portfolio, análisis de posicionamiento de marca) que sirven de entrada a nuevos clientes, servicios de implantación de ticket medio (desarrollo de estrategia go-to-market, diseño del proceso de venta consultiva), y retainer mensual de alto ticket (advisory estratégico continuo, acompañamiento en decisiones clave). Para cada nivel, describe cómo la IA te permite entregar más valor en menos tiempo y con mayor consistencia.

3. Productividad del consultor con IA
Implementa un stack de herramientas de IA para multiplicar tu productividad: generación de informes de diagnóstico a partir de datos del cliente con IA, investigación de mercado y análisis de competidores automatizado, redacción de propuestas comerciales y contratos a partir de plantillas inteligentes, y preparación de materiales de presentación de alta calidad en la mitad del tiempo. Describe tu flujo de trabajo semanal con y sin IA y cuantifica el tiempo ganado por tipo de tarea.

4. Captación de clientes con thought leadership de IA
Como consultor independiente, tu reputación es tu principal activo de marketing. Diseña una estrategia de contenidos que use IA para producir: artículos de opinión sobre el futuro del lujo y la joyería para LinkedIn y medios especializados, newsletter mensual de tendencias del sector para tu base de contactos, y casos de estudio (anonimizados) de proyectos completados con impacto medible. Especifica el workflow de producción de contenido con IA: desde el briefing hasta la publicación.

5. Gestión de proyectos y entrega de calidad
Define tu metodología de entrega como consultor de lujo: proceso de descubrimiento inicial (entrevistas, análisis de datos, benchmarking del sector), estructura del informe de diagnóstico, presentación ejecutiva de recomendaciones, y seguimiento de implantación. Describe cómo la IA asiste en cada fase: análisis de datos cualitativos de entrevistas, generación de comparativas de mercado, y redacción de los entregables finales manteniendo tu voz y criterio experto.

6. Escalado de ingresos sin perder independencia
Define el modelo financiero de tu práctica consultora: mix de proyectos de corta duración vs. retainers mensuales, política de tarifas por hora y por proyecto, criterios para rechazar proyectos que no encajan con tu posicionamiento, y momento en que tiene sentido colaborar con otros consultores independientes en proyectos grandes sin crear estructura fija. Usa IA para modelizar distintos escenarios de mix de proyectos y calcular el camino más rápido hacia el objetivo de facturación de 150.000 € anuales.

Entrega el plan de práctica consultora en un documento que puedas usar como hoja de ruta personal y como base para presentarte ante potenciales clientes del sector.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir y escalar una práctica de consultoría independiente especializada en lujo y joyería con apoyo de IA',
                'vote_score'        => 32,
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
