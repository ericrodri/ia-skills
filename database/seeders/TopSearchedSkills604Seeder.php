<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills604Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de tendencias de consumo de vino con IA',
                'description'      => 'Usa IA para identificar tendencias emergentes en el consumo de vino, segmentar audiencias y diseñar campañas de marketing dirigidas al público enófilo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital especializado en el sector vitivinícola y enoturismo. Tu objetivo es ayudarme a analizar las tendencias de consumo de vino en el mercado actual y diseñar una estrategia de marketing basada en datos para una bodega o distribuidora de vinos.

Contexto de mi negocio:
- Tipo de empresa (bodega productora, importadora, distribuidora, tienda especializada): [ESPECIFICAR]
- Mercado objetivo (nacional, exportación, ambos): [ESPECIFICAR]
- Segmento de precio (entrada, gama media, premium, ultra-premium): [ESPECIFICAR]
- Variedades o denominaciones principales: [ESPECIFICAR]
- Presupuesto mensual de marketing aproximado: [ESPECIFICAR]

Tarea 1 — Análisis de tendencias actuales:
Analiza las siguientes dimensiones del mercado del vino:
a) Tendencias de consumo por generación (millennials, generación Z, baby boomers) y sus preferencias de varietales, formatos de envase y canales de compra.
b) Auge del vino natural, biodinámico y ecológico: oportunidades y amenazas para bodegas convencionales.
c) Tendencias en formatos alternativos: bag-in-box, latas, vinos sin alcohol o de baja graduación.
d) Influencia de las redes sociales (especialmente TikTok e Instagram) en la decisión de compra de vinos jóvenes.
e) El rol de las plataformas de e-commerce y aplicaciones de maridaje en la distribución digital.

Tarea 2 — Segmentación de audiencia:
Define tres perfiles de buyer persona para el segmento de negocio indicado, incluyendo:
- Datos demográficos y psicográficos.
- Canales de información preferidos (redes, podcasts, revistas especializadas, ferias).
- Motivaciones de compra (regalo, autoconsumo, coleccionismo, eventos sociales).
- Barreras de entrada (precio percibido, desconocimiento de variedades, falta de confianza).

Tarea 3 — Estrategia de contenidos para redes sociales:
Crea un plan editorial de 4 semanas para Instagram y LinkedIn con al menos 3 publicaciones semanales por plataforma, diferenciando el tono y formato según la red. Incluye:
- Ideas de contenido educativo sobre variedades, maridajes y procesos de elaboración.
- Formatos recomendados (Reel, carrusel, historia, artículo largo).
- Hashtags estratégicos por publicación.
- Propuesta de colaboraciones con influencers o sommeliers.

Tarea 4 — Plan de email marketing para enoturismo:
Diseña una secuencia de 5 emails para captar visitantes a la bodega y convertirlos en compradores recurrentes. Incluye asuntos atractivos, estructura del cuerpo y llamadas a la acción concretas.

Tarea 5 — Indicadores de rendimiento (KPIs):
Define los KPIs más relevantes para medir el éxito de la campaña de marketing vitivinícola: alcance, engagement, tasa de conversión en e-commerce, número de suscriptores a newsletter, visitas a bodega generadas por campañas digitales.

Formato de respuesta: organiza la respuesta en secciones numeradas con subtítulos claros. Usa tablas cuando sea útil para comparar perfiles o planificar el calendario editorial. Prioriza recomendaciones accionables y adaptadas al sector del vino, evitando generalidades.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar estrategias de marketing digital para bodegas basadas en tendencias de consumo actuales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de app de maridaje vino-comida con IA',
                'description'      => 'Utiliza IA para diseñar la arquitectura y lógica de recomendación de una aplicación de maridaje vino-comida, integrando APIs de bodegas y bases de datos enológicas.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en aplicaciones móviles y sistemas de recomendación. Necesito tu ayuda para diseñar y planificar el desarrollo de una aplicación de maridaje vino-comida que use inteligencia artificial para ofrecer recomendaciones personalizadas.

Especificaciones del proyecto:
- Plataforma objetivo (iOS, Android, web progresiva, multiplataforma): [ESPECIFICAR]
- Stack tecnológico preferido: [ESPECIFICAR o dejar en blanco para recomendación]
- Presupuesto de desarrollo aproximado: [ESPECIFICAR]
- Modelo de negocio (gratuita con ads, freemium, suscripción, B2B para restaurantes): [ESPECIFICAR]
- Integraciones necesarias (APIs de bodegas, Vivino, Wine-Searcher, etc.): [ESPECIFICAR]

Tarea 1 — Arquitectura del sistema de recomendación:
Diseña la arquitectura del motor de recomendación de maridajes. Incluye:
a) Modelo de datos para vinos (varietal, región, cuerpo, taninos, acidez, dulzor, precio) y platos (tipo de cocina, ingredientes principales, método de cocción, intensidad de sabor).
b) Algoritmo de recomendación: explica las ventajas de usar filtrado colaborativo, content-based filtering o un enfoque híbrido para este caso de uso específico.
c) Estrategia de cold start: cómo manejar la falta de datos iniciales de un nuevo usuario.
d) Sistema de retroalimentación: cómo el usuario evalúa recomendaciones y cómo el modelo aprende de esas valoraciones.

Tarea 2 — Diseño de base de datos:
Define el esquema completo de la base de datos relacional o NoSQL más adecuada, con tablas/colecciones para: usuarios, vinos, platos, maridajes, valoraciones, listas de favoritos y historial. Justifica la elección del tipo de base de datos.

Tarea 3 — API y endpoints principales:
Documenta los endpoints REST o GraphQL necesarios para:
- Búsqueda y filtrado de vinos por múltiples criterios.
- Obtención de recomendaciones de maridaje dado un plato o ingrediente.
- Gestión de perfil de usuario y preferencias.
- Integración con APIs externas de precios y disponibilidad.

Tarea 4 — Integración de LLM para descripciones y explicaciones:
Diseña el flujo de integración con un modelo de lenguaje para generar:
- Descripciones sensoriales de vinos en lenguaje accesible para no expertos.
- Explicaciones detalladas de por qué un vino marida bien con un plato concreto.
- Sugerencias alternativas cuando el vino recomendado no está disponible.

Tarea 5 — Plan de desarrollo por sprints:
Propón un roadmap de desarrollo en sprints de 2 semanas para un MVP funcional en 4 meses. Detalla los entregables de cada sprint, los criterios de aceptación y las dependencias entre módulos.

Tarea 6 — Consideraciones de escalabilidad:
Explica cómo escalar la aplicación para soportar 100.000 usuarios activos mensuales, incluyendo estrategias de caché, balanceo de carga y gestión eficiente de modelos de IA en producción.

Formato de respuesta: usa esquemas técnicos (en formato texto o pseudocódigo) para la arquitectura y el modelo de datos. Incluye tablas comparativas cuando evalúes alternativas tecnológicas. Proporciona ejemplos concretos de queries y respuestas de API.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificar el desarrollo técnico de una app de maridaje con sistema de recomendación inteligente',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de etiquetas de vino con IA generativa',
                'description'      => 'Aprovecha la IA para conceptualizar, describir y orientar la creación de etiquetas de vino diferenciadas, alineadas con la identidad de la bodega y las expectativas del consumidor objetivo.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador gráfico especializado en branding para el sector vitivinícola con experiencia en packaging premium. Tu objetivo es ayudarme a conceptualizar y desarrollar el diseño de etiquetas para una nueva línea de vinos, utilizando IA como herramienta de ideación y refinamiento.

Información sobre el proyecto:
- Nombre de la bodega o marca: [ESPECIFICAR]
- Tipo de vino (tinto, blanco, rosado, espumoso, generoso): [ESPECIFICAR]
- Número de referencias en la línea: [ESPECIFICAR]
- Segmento de precio y público objetivo: [ESPECIFICAR]
- Concepto o historia de la bodega (terroir, familia, tradición, modernidad, etc.): [ESPECIFICAR]
- Mercados de destino (nacional, exportación a qué países): [ESPECIFICAR]
- Restricciones legales conocidas (menciones obligatorias en etiqueta): [ESPECIFICAR]

Tarea 1 — Análisis de referentes visuales:
Analiza las tendencias actuales en diseño de etiquetas de vino a nivel global:
a) Estilos dominantes por segmento de precio (minimalismo en premium, ilustración artesanal en naturales, fotografía en mass market).
b) Uso del color en etiquetas: qué paletas funcionan mejor para blancos, tintos y rosados en lineales y en digital.
c) Tipografías más utilizadas: serif clásicas vs. sans-serif modernas vs. caligrafía artesanal.
d) Tendencias en materiales y acabados: papel verjurado, relieves, laminados metálicos, etiquetas con gofrado.

Tarea 2 — Desarrollo de concepto creativo:
Basándote en la información de la bodega, propón tres conceptos creativos distintos para la etiqueta:
- Concepto A: enfoque clásico/patrimonial (evoca tradición y territorio).
- Concepto B: enfoque moderno/contemporáneo (apela a consumidores jóvenes urbanos).
- Concepto C: enfoque artístico/diferenciador (colaboración conceptual, ilustración única).
Para cada concepto incluye: descripción del estilo visual, paleta de colores con códigos hex, tipografía principal y secundaria, elementos gráficos clave y mood board textual.

Tarea 3 — Prompts para herramientas de IA generativa:
Crea prompts detallados en inglés para generar imágenes de referencia en Midjourney, DALL-E o Adobe Firefly para cada uno de los tres conceptos. Incluye parámetros de estilo, iluminación, composición y referentes artísticos.

Tarea 4 — Requisitos legales y técnicos:
Detalla los elementos obligatorios en la etiqueta según la normativa europea de etiquetado de vinos (reglamento UE 2021/2117) y las adaptaciones necesarias para exportación a EE.UU., UK y mercados asiáticos.

Tarea 5 — Brief para imprenta:
Redacta un brief técnico completo para la imprenta, incluyendo: dimensiones estándar por formato de botella (Bordelesa, Borgoña, Alsaciana, espumosos), número de tintas, tipos de papel recomendados, acabados especiales y archivo de entrega (formato, resolución, perfiles de color).

Formato de respuesta: estructura la respuesta con encabezados claros para cada concepto y tarea. Usa listas para los elementos técnicos y descripción narrativa para los conceptos creativos. Incluye una tabla comparativa de los tres conceptos al final.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Conceptualizar etiquetas de vino diferenciadas con guías creativas y técnicas completas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas de vino premium con IA',
                'description'      => 'Diseña argumentarios de venta, protocolos de cata comercial y estrategias de fidelización para distribuidores y consumidores finales de vinos de alta gama.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial especializado en la distribución y venta de vinos premium y ultra-premium. Tu objetivo es ayudarme a desarrollar una estrategia de ventas completa que combine técnicas de venta consultiva con conocimiento enológico profundo.

Contexto de mi operación comercial:
- Canal principal de venta (HORECA, retail especializado, e-commerce, clubes de vino, eventos privados): [ESPECIFICAR]
- Ticket medio por operación: [ESPECIFICAR]
- Número de referencias en catálogo: [ESPECIFICAR]
- Equipo comercial actual (tamaño y experiencia): [ESPECIFICAR]
- Principales zonas geográficas de actuación: [ESPECIFICAR]
- Diferenciadores competitivos de la bodega o distribuidora: [ESPECIFICAR]

Tarea 1 — Argumentario de ventas por segmento:
Desarrolla argumentarios específicos para los siguientes perfiles de cliente:
a) Sumiller de restaurante con estrella Michelin: enfoca en exclusividad, terroir, puntuaciones de crítica y capacidad de maridaje con alta cocina.
b) Director de compras de cadena de tiendas especializadas: prioriza rotación, márgenes, exclusividad de zona y soporte de marketing.
c) Comprador particular de alta capacidad adquisitiva: apela a la inversión, coleccionismo, experiencia y acceso a reservas especiales.
d) Event planner de celebraciones corporativas: destaca imagen de marca, servicio logístico y opciones de personalización.

Tarea 2 — Protocolo de cata comercial:
Diseña una cata comercial de 90 minutos para presentar una nueva añada a compradores potenciales. Incluye:
- Selección de vinos para la cata (número, orden de servicio, temperatura).
- Guión de presentación con anécdotas del viticultor, características del terroir y proceso de elaboración.
- Técnicas de storytelling para crear conexión emocional con el producto.
- Manejo de objeciones típicas (precio, falta de conocimiento de la bodega, fidelidad a competidores).

Tarea 3 — Pipeline y CRM para distribución de vinos:
Diseña el proceso de ventas desde la prospección hasta el cierre y la posventa, con:
- Etapas del pipeline específicas para el sector vitivinícola.
- Criterios de cualificación de prospectos (BANT adaptado al sector).
- Cadencia de seguimiento para cada etapa.
- Campos clave en el CRM para el sector: preferencias de varietal, presupuesto anual, eventos próximos.

Tarea 4 — Programa de fidelización y club de vinos:
Propón un programa de fidelización para clientes B2C con tres niveles de membresía. Define: beneficios por nivel, precio de suscripción, frecuencia de envío, opciones de personalización y estrategia de comunicación para reducir el churn.

Tarea 5 — Métricas y objetivos comerciales:
Define un cuadro de mando comercial con KPIs mensuales: número de nuevas cuentas abiertas, valor medio de pedido, tasa de recompra, margen bruto por referencia, coste de adquisición de cliente y lifetime value.

Formato de respuesta: usa roleplay cuando desarrolles los argumentarios (simula diálogos vendedor-cliente). Emplea tablas para el pipeline y el programa de fidelización. Incluye ejemplos de frases y preguntas de descubrimiento específicas para cada perfil.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar estrategias y argumentarios de venta para distribución de vinos premium',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de catálogo de vinos con IA para e-commerce',
                'description'      => 'Optimiza la gestión del catálogo de una tienda online de vinos usando IA para descripciones, categorización, precios dinámicos y experiencia de usuario.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en e-commerce para el sector vitivinícola. Tu objetivo es ayudarme a diseñar y optimizar la gestión del catálogo de una tienda online de vinos, aplicando inteligencia artificial para mejorar la experiencia de usuario y aumentar la conversión.

Información sobre la plataforma:
- Plataforma de e-commerce (Shopify, WooCommerce, Magento, desarrollo propio): [ESPECIFICAR]
- Número actual de referencias en catálogo: [ESPECIFICAR]
- Ticket medio de compra: [ESPECIFICAR]
- Principales categorías de producto: [ESPECIFICAR]
- Volumen mensual de visitas y tasa de conversión actual: [ESPECIFICAR]
- Mercados donde opera (nacional, internacional): [ESPECIFICAR]

Tarea 1 — Arquitectura del catálogo:
Define la taxonomía completa del catálogo, incluyendo:
a) Categorías y subcategorías (por tipo de vino, región, varietal, precio, ocasión, maridaje).
b) Atributos de producto esenciales para filtrado: denominación de origen, añada, graduación, temperatura de servicio, potencial de guarda, perfil sensorial (tánico, ácido, frutado, mineral).
c) Sistema de etiquetado inteligente para facilitar la búsqueda facetada.
d) Gestión de variantes: diferentes formatos de botella (750ml, magnum, jeróboam) y presentaciones (estuche, cesta de regalo).

Tarea 2 — Generación de descripciones con IA:
Diseña un proceso para usar IA en la generación de fichas de producto completas. Incluye:
- Plantilla de información técnica que el bodeguero proporciona.
- Instrucciones para el modelo de IA para generar: descripción sensorial, sugerencias de maridaje, temperatura de servicio y notas del enólogo.
- Proceso de revisión y aprobación por el sommelier de la tienda.
- Adaptación de tono según el segmento de precio (accesible vs. coleccionista).

Tarea 3 — Sistema de recomendaciones:
Diseña los módulos de recomendación personalizados para:
- Página de producto: "También te puede interesar" y "Maridaje perfecto".
- Carrito de compra: upsell a formatos especiales y cross-sell con accesorios (copas, decantadores).
- Email post-compra: sugerencias basadas en el historial de compra.
- Página de inicio personalizada según comportamiento de navegación.

Tarea 4 — Pricing dinámico y gestión de stock:
Propón una estrategia de pricing dinámico considerando: temporada, stock disponible, puntuaciones recientes de críticos, añadas próximas a agotarse y precios de la competencia. Define alertas automáticas para gestión de stock crítico.

Tarea 5 — Roadmap de mejoras de UX:
Crea un roadmap trimestral de mejoras de la experiencia de usuario, priorizadas por impacto estimado en conversión: buscador con autocompletado enológico, quiz de preferencias para nuevos usuarios, modo "sorpréndeme" y catas virtuales en directo.

Formato de respuesta: usa wireframes textuales para describir la arquitectura de páginas. Emplea tablas para la taxonomía del catálogo y el roadmap de UX. Incluye ejemplos concretos de descripciones de producto generadas por IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar catálogo y experiencia de usuario en tienda online de vinos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Selección de sommeliers y personal de bodega con IA',
                'description'      => 'Optimiza los procesos de selección, formación y gestión del talento especializado en el sector vitivinícola, desde sommeliers hasta técnicos de bodega.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos con profundo conocimiento del sector vitivinícola y la gestión de talento en hostelería de alto nivel. Tu objetivo es ayudarme a diseñar procesos de selección y desarrollo de personal especializado en vinos.

Contexto de la organización:
- Tipo de empresa (bodega, restaurante con carta de vinos extensa, distribuidora, escuela de hostelería): [ESPECIFICAR]
- Puesto o puestos a cubrir: [ESPECIFICAR]
- Número de posiciones abiertas: [ESPECIFICAR]
- Certificaciones requeridas o valoradas (WSET, Court of Master Sommeliers, etc.): [ESPECIFICAR]
- Presupuesto salarial para el puesto: [ESPECIFICAR]
- Beneficios adicionales que puede ofrecer la empresa: [ESPECIFICAR]

Tarea 1 — Definición de perfil del puesto:
Para cada puesto especificado, desarrolla:
a) Descripción completa del puesto adaptada al sector vitivinícola.
b) Competencias técnicas imprescindibles (conocimiento de regiones, varietales, procesos de elaboración, cata ciega, gestión de cava, selección de carta).
c) Competencias blandas clave (comunicación con cliente, gestión de equipo, resistencia en servicio, pasión por el vino).
d) Indicadores de rendimiento (KPIs) específicos para el puesto.

Tarea 2 — Proceso de selección en 5 etapas:
Diseña un proceso de selección riguroso que incluya:
- Filtrado de CV: criterios de preselección y red flags específicos del sector.
- Entrevista telefónica inicial: preguntas de cualificación y evaluación de actitud.
- Prueba técnica escrita: test de conocimiento enológico con respuestas modelo.
- Prueba práctica de cata: protocolo de evaluación ciega de 3 vinos con rúbrica de puntuación.
- Entrevista final con cliente misterioso: simulación de servicio en restaurante o visita a bodega.

Tarea 3 — Plan de onboarding y formación:
Diseña un plan de incorporación de 90 días para un nuevo sommelier, con objetivos semanales, materiales de formación recomendados, visitas a bodegas previstas y mentoring con el jefe de sala o enólogo.

Tarea 4 — Retención del talento especializado:
El sector del vino sufre alta rotación. Propón una estrategia de retención que incluya: plan de carrera claro, programa de formación continua (cursos WSET, viajes a regiones vinícolas, catas con expertos), política de participación en concursos de sommeliers y beneficios no salariales atractivos.

Tarea 5 — Evaluación del desempeño:
Crea una rúbrica de evaluación semestral específica para sommeliers y personal de bodega, con criterios objetivos para cada competencia técnica y comportamental, y un proceso de feedback constructivo adaptado a la cultura del sector.

Formato de respuesta: incluye plantillas editables para cada etapa del proceso de selección. Usa tablas para la rúbrica de evaluación y el plan de onboarding. Proporciona ejemplos de preguntas de cata y sus respuestas modelo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar procesos de selección y formación de talento especializado en el sector vitivinícola',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de bodegas y viñedos con IA',
                'description'      => 'Aplica IA para modelizar los costos de producción vitivinícola, valorar activos (viñedos, marcas, inventario de añadas) y evaluar la viabilidad de inversiones en el sector del vino.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en el sector agroalimentario y vitivinícola, con experiencia en valoración de bodegas, estructuración de inversiones y análisis de rentabilidad de proyectos vitícolas. Tu objetivo es ayudarme a realizar un análisis financiero completo de una operación vitivinícola.

Datos de la operación:
- Tipo de análisis (valoración de bodega para compraventa, plan de negocio para nueva bodega, análisis de rentabilidad de línea de producto, financiación de expansión de viñedo): [ESPECIFICAR]
- Superficie de viñedo (hectáreas) y régimen de tenencia (propiedad, arrendamiento, mixto): [ESPECIFICAR]
- Producción anual (botellas o kilos de uva): [ESPECIFICAR]
- Precio medio de venta por botella y mix de canales: [ESPECIFICAR]
- Estructura de costos actual si está disponible: [ESPECIFICAR]
- Horizonte temporal del análisis: [ESPECIFICAR]

Tarea 1 — Estructura de costos vitivinícolas:
Desglosa la estructura de costos completa de una bodega, diferenciando:
a) Costos vitícolas: plantación y mantenimiento del viñedo, mano de obra de poda y vendimia, fitosanitarios, maquinaria agrícola.
b) Costos vinícolas: equipamiento de bodega, barricas (amortización y renovación), energía, análisis y certificaciones.
c) Costos de envasado: botellas, tapones, cápsulas, etiquetas, cajas.
d) Costos comerciales y de marketing.
e) Costos administrativos y financieros.

Tarea 2 — Modelos de valoración de activos vitivinícolas:
Explica y aplica los tres métodos de valoración más usados en el sector:
- Método de capitalización de rentas: valor del viñedo basado en rendimiento económico esperado.
- Método comparativo: benchmarking con transacciones recientes de viñedos similares en la región.
- Método del coste de reposición: especialmente relevante para viñedos viejos con valor de escasez.
Define también cómo valorar los activos intangibles: marca, cuota de denominación de origen, red de distribución.

Tarea 3 — Proyección financiera a 5 años:
Construye un modelo financiero con: cuenta de resultados proyectada, flujo de caja libre y balance simplificado. Incluye tres escenarios (pesimista, base, optimista) sensibles a: precio de venta por botella, producción por hectárea, tipo de cambio para exportación y coste de financiación.

Tarea 4 — Análisis de inversión:
Para una inversión específica (nueva planta embotelladora, adquisición de viñedo, apertura de sala de visitas para enoturismo), calcula: TIR, VAN, payback period y punto de equilibrio. Justifica los supuestos usados.

Tarea 5 — Fuentes de financiación para el sector vitivinícola:
Detalla las opciones de financiación disponibles en España: subvenciones FEAGA para reestructuración de viñedo, líneas ICO agroalimentario, financiación de banca especializada (CAJAMAR, CAIXABANK agro), crowdfunding de inversión en bodegas y fondos de capital privado especializados en food & beverage.

Formato de respuesta: usa tablas para la estructura de costos y el modelo financiero. Presenta los escenarios en columnas comparativas. Incluye fórmulas explicadas para los cálculos de valoración y análisis de inversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Analizar la viabilidad financiera y valorar activos en operaciones vitivinícolas',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo en exportación de vinos con IA',
                'description'      => 'Usa IA para navegar el complejo marco regulatorio de la exportación de vinos: denominaciones de origen, etiquetado obligatorio, aranceles y barreras no arancelarias por mercado.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en comercio internacional y regulación agroalimentaria con experiencia en el sector vitivinícola europeo y en exportación a mercados globales. Tu objetivo es ayudarme a entender y cumplir con el marco normativo aplicable a la exportación de vinos españoles.

Información de contexto:
- País o países de destino de la exportación: [ESPECIFICAR]
- Tipo de producto (vino tranquilo, espumoso, generoso, vino sin alcohol, vermut): [ESPECIFICAR]
- Denominación de origen o indicación geográfica: [ESPECIFICAR]
- Volumen de exportación previsto: [ESPECIFICAR]
- Experiencia previa en exportación: [ESPECIFICAR]
- Canal de distribución en destino (importador, distribuidor, venta directa online): [ESPECIFICAR]

Tarea 1 — Marco regulatorio europeo del vino:
Explica la regulación comunitaria vigente aplicable a la producción y comercialización del vino, con especial atención a:
a) Reglamento UE 1308/2013 (OCM vitivinícola) y sus implicaciones prácticas para productores.
b) Reglamento delegado UE 2019/934 (prácticas enológicas autorizadas).
c) Reglamento UE 2021/2117: nuevas obligaciones de etiquetado nutricional y lista de ingredientes (fecha de aplicación y excepciones).
d) Denominaciones de Origen Protegidas (DOP) e Indicaciones Geográficas Protegidas (IGP): requisitos de certificación y control por parte del Consejo Regulador.

Tarea 2 — Requisitos de etiquetado por mercado de destino:
Para cada mercado especificado, detalla los requisitos obligatorios de etiquetado:
- Menciones legales obligatorias (denominación, graduación, volumen, alérgenos, país de origen).
- Menciones prohibidas o que requieren aprobación específica.
- Idiomas requeridos en la etiqueta.
- Requisitos de la contrataetiqueta (si aplica).
- Información sobre salud en el etiquetado (advertencias en determinados mercados).

Tarea 3 — Aranceles y acuerdos comerciales:
Analiza el régimen arancelario aplicable a la exportación de vino desde la UE a los mercados objetivo:
- Tipo arancelario vigente y posibles contingentes arancelarios.
- Acuerdos de libre comercio aplicables (TLC UE-Japón, CETA con Canadá, acuerdo con Australia en negociación, etc.).
- Requisitos de certificado de origen para beneficiarse de tipos preferenciales.
- Documentación aduanera requerida: EUR.1, declaración en factura, certificado VI-1.

Tarea 4 — Barreras no arancelarias y registro de productos:
Detalla los requisitos de registro y homologación de productos vitivinícolas en mercados con exigencias específicas:
- EE.UU.: proceso de aprobación ante el TTB (Tax and Trade Bureau), importers permit, etiquetado COLA.
- China: registro en CNCA, certificado de análisis, requisitos de etiqueta en chino mandarín.
- Japón: notificación a la autoridad sanitaria, requisitos de aditivos autorizados.
- Mercados islámicos: posición sobre vinos en países con restricciones parciales.

Tarea 5 — Checklist de cumplimiento para nueva exportación:
Crea una checklist completa de los pasos a seguir antes de realizar el primer envío a cada mercado objetivo, ordenada cronológicamente y con indicación de tiempos estimados y organismos responsables.

Formato de respuesta: usa tablas comparativas para los requisitos por mercado. Proporciona referencias a la normativa específica (número de reglamento, artículo). Incluye la checklist en formato de lista con casillas verificables. Señala claramente cuándo se recomienda consultar con un agente de aduanas local.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el cumplimiento normativo y arancelario en la exportación internacional de vinos',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente para enoturismo con IA',
                'description'      => 'Diseña protocolos de atención al cliente para visitas a bodega, catas y experiencias enoturísticas, optimizando la experiencia del visitante y la conversión a ventas.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en experiencia de cliente y enoturismo con amplia trayectoria en bodegas que reciben visitantes nacionales e internacionales. Tu objetivo es ayudarme a diseñar protocolos de atención al cliente que conviertan cada visita en una experiencia memorable y generen ventas recurrentes.

Contexto de la bodega o espacio enoturístico:
- Tipo de experiencias ofrecidas (visita con cata, maridaje, taller de elaboración, vendimia, cena en bodega, hospedaje): [ESPECIFICAR]
- Número de visitantes mensuales actuales o previstos: [ESPECIFICAR]
- Idiomas del personal de atención: [ESPECIFICAR]
- Canal de reservas principal (web propia, booking.com experiences, Viator, teléfono): [ESPECIFICAR]
- Precio por persona de la experiencia más demandada: [ESPECIFICAR]
- Perfil del visitante habitual (turista nacional, extranjero, grupos, parejas, empresas): [ESPECIFICAR]

Tarea 1 — Customer journey del visitante enoturístico:
Mapea el viaje completo del cliente desde el descubrimiento de la bodega hasta la recomendación post-visita:
a) Fase de descubrimiento: canales de captación (redes sociales, TripAdvisor, agencias de viaje, boca a boca).
b) Reserva: proceso de reserva online, confirmación y preparación del visitante.
c) Llegada y bienvenida: protocolo de recepción y primera impresión.
d) Experiencia en bodega: narración del viñedo, proceso de elaboración y cata guiada.
e) Tienda y cierre: transición natural a la venta de vinos y productos.
f) Post-visita: seguimiento, review y programa de fidelización.

Tarea 2 — Guión de visita comentada:
Desarrolla un guión completo de 90 minutos para una visita con cata que incluya:
- Storytelling sobre el origen de la bodega y el terroir (adaptado a distintos niveles de conocimiento enológico).
- Puntos de parada en el viñedo, zona de elaboración y cava de barricas con explicaciones accesibles.
- Guión de la cata de 3 vinos: qué decir de cada uno, cómo involucrar al visitante, preguntas para fomentar la participación.
- Técnicas para identificar el nivel de conocimiento del grupo y adaptar el discurso.

Tarea 3 — Gestión de visitantes internacionales:
Diseña protocolos específicos para grupos internacionales: adaptación cultural del discurso (diferencias entre visitantes anglosajones, asiáticos, latinoamericanos), glosario enológico en 5 idiomas, materiales de sala en varios idiomas y gestión de restricciones dietéticas o religiosas durante el maridaje.

Tarea 4 — Conversión de visitante a cliente:
Define técnicas de venta no invasiva en el contexto de la visita a bodega:
- Momento óptimo para presentar los vinos a la venta.
- Packs y formatos especiales disponibles solo para visitantes.
- Gestión del envío internacional de vinos comprados en bodega.
- Programa de "embajadores" para visitantes que repiten o recomiendan activamente.

Tarea 5 — Gestión de reseñas y reputación online:
Crea un protocolo para gestionar las reseñas en Google, TripAdvisor y booking.com: plantillas de respuesta a reseñas positivas y negativas, proceso interno de recogida de feedback durante la visita y estrategia para incrementar el número de reseñas verificadas.

Formato de respuesta: escribe el guión de visita en formato teatral con indicaciones de movimiento y gestión del grupo. Usa tablas para el customer journey y la gestión de visitantes por nacionalidad. Incluye ejemplos de respuesta a reseñas negativas tipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar la experiencia del visitante en enoturismo y convertir visitas en ventas recurrentes',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de marketing para bodegas con IA',
                'description'      => 'Diseña tu propuesta de servicios de consultoría de marketing para el sector vitivinícola, desde el diagnóstico inicial hasta la entrega de resultados medibles.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en marketing para el sector vitivinícola. Tu objetivo es ayudarme a estructurar mis servicios, diseñar propuestas comerciales ganadoras y gestionar proyectos de marketing para bodegas y distribuidoras de vinos de manera eficiente.

Información sobre mi perfil como consultor:
- Años de experiencia en el sector del vino: [ESPECIFICAR]
- Especialización principal (branding, digital, enoturismo, exportación, trade marketing): [ESPECIFICAR]
- Bodegas o proyectos destacados en cartera: [ESPECIFICAR]
- Tarifa hora o proyecto actual: [ESPECIFICAR]
- Capacidad de facturación mensual máxima: [ESPECIFICAR]
- Herramientas y plataformas que domino: [ESPECIFICAR]

Tarea 1 — Catálogo de servicios de consultoría:
Define una propuesta de servicios estructurada en tres niveles:
a) Servicios de diagnóstico y estrategia: auditoría de marca, análisis de posicionamiento competitivo, estrategia digital integral para bodegas, plan de internacionalización de marca.
b) Servicios de implementación: gestión de redes sociales especializadas en vino, campañas de lanzamiento de nuevas añadas, diseño de experiencias enoturísticas, estrategia de contenidos para club de vinos.
c) Servicios de formación y mentoring: formación del equipo comercial de la bodega en ventas consultivas, talleres de storytelling del vino, asesoría a bodegueros en presencia digital.

Tarea 2 — Propuesta comercial tipo para una bodega mediana:
Redacta una propuesta de consultoría completa de 6 páginas para una bodega con DO reconocida que quiere mejorar su presencia digital e incrementar las ventas directas. Incluye: diagnóstico de situación, objetivos medibles, alcance del trabajo, metodología, equipo, cronograma, inversión y condiciones.

Tarea 3 — Proceso de onboarding de un nuevo cliente bodega:
Define el proceso de incorporación de un nuevo cliente: reunión de kick-off, cuestionario de diagnóstico inicial, accesos a plataformas, definición de flujos de trabajo y comunicación, y entregables del primer mes.

Tarea 4 — Posicionamiento y captación de clientes:
Diseña tu estrategia de visibilidad como consultor especializado en el sector del vino:
- Presencia en LinkedIn: tipo de contenido, frecuencia, estrategia de conexión con bodegas y directores de marketing.
- Participación en ferias del sector (Prowein, Vinexpo, Fenavin): cómo preparar el networking.
- Colaboraciones con asociaciones de bodegas, escuelas de sumilleres y medios especializados.
- Generación de casos de éxito y testimonios para el sitio web.

Tarea 5 — Gestión financiera y legal del negocio de consultoría:
Explica cómo estructurar legalmente la actividad (autónomo, SL), llevar el control de facturación, negociar contratos con bodegas (derechos de uso de marca, confidencialidad, propiedad intelectual de las estrategias diseñadas) y gestionar la tesorería con la estacionalidad del sector vitivinícola (campañas de vendimia y Navidad concentran ingresos).

Formato de respuesta: proporciona la propuesta comercial en formato estructurado listo para adaptar. Usa tablas para el catálogo de servicios con precios orientativos. Incluye un modelo de contrato de confidencialidad adaptado al sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar servicios y captar clientes como consultor freelance especializado en marketing vitivinícola',
                'vote_score'       => 39,
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
