<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills159Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Trade marketing',
                'description'       => 'La disciplina que trabaja en el punto de venta: gestión de categoría, promociones, displays y las técnicas que mueven el producto en el lineal físico y digital.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en trade marketing y gestión de categoría con experiencia en grandes marcas de gran consumo operando en canales de distribución modernos y tradicionales. Necesito diseñar o mejorar mi estrategia de trade marketing para incrementar la visibilidad y rotación de mi producto en el punto de venta.

Mi contexto:
- Categoría de producto: [alimentación, bebidas, higiene, cuidado personal, hogar, mascotas...]
- Canales de distribución actuales: [hipermercado, supermercado, canal impulso, cash & carry, e-commerce...]
- Clientes principales (retailers): [Mercadona, Carrefour, Dia, Lidl, El Corte Inglés, Consum...]
- Reto principal: [baja visibilidad en el lineal, pérdida de espacio, mala rotación, competencia de marca blanca]

Desarrolla:

**1. Los fundamentos del trade marketing y la gestión de categoría**
Explica el rol del trade marketing en la cadena de valor entre fabricante y distribuidor: cómo funciona la gestión por categorías (Category Management), qué es el role de la categoría desde la perspectiva del retailer (destino, rutina, conveniencia, placer) y cómo la gestión por categorías determina el espacio de lineal, el surtido y la ubicación del producto.

**2. El joint business plan con el retailer**
- Qué es un JBP (Joint Business Plan) y por qué es el documento más importante de la relación fabricante-retailer
- Los elementos que componen un JBP: objetivos de negocio compartidos, plan de actividades, inversión co-financiada, métricas de evaluación
- Cómo presentar un JBP al comprador de un gran retailer: la narrativa, los datos que necesitas llevar y cómo alinear los objetivos del fabricante con los del retailer
- Las diferencias entre un JBP con Mercadona (sin actividades promocionales, foco en eficiencia) y con Carrefour o El Corte Inglés (con mayor actividad promocional y mayor flexibilidad)

**3. Gestión del espacio de lineal**
- Cómo funciona el planograma y quién tiene el poder real sobre el espacio asignado a cada fabricante
- Los argumentos que mueven el espacio de lineal: velocidad de rotación, rentabilidad por metro lineal, atracción de tráfico a la categoría
- El modelo de rendimiento del lineal: superficie óptima, efecto de visibilidad, correlación entre espacio y ventas
- Cómo gestionar una reducción de espacio por parte del retailer sin que sea definitiva

**4. Estrategia de activaciones en punto de venta**
Para cada tipo de activación, explica cuándo usarla, qué impacto de ventas genera y cómo calcular el ROI:
- Displays secundarios: cabeceras de góndola, displays de suelo, expositores de mostrador
- Señalización de precio y promoción: stoppers, wobblers, carteles de precio especial
- Degustaciones y promotores: cuándo la activación humana justifica el coste
- Activaciones estacionales: Navidad, verano, campaña escolar, San Valentín

**5. Trade marketing en e-commerce y retail digital**
- Cómo trasladar la lógica del trade marketing al lineal digital: la posición en resultados de búsqueda, las fichas de producto, los banners patrocinados
- La gestión de la categoría en plataformas como Amazon, Mercadona Online, Carrefour.es
- El retail media: qué es, cómo funciona y cuándo invertir en los formatos publicitarios de los retailers
- Las métricas del trade marketing digital: share of search, conversion rate, contenido enriquecido

**6. Promociones efectivas y medición del ROI promocional**
- Los tipos de promociones más efectivos por categoría: precio reducido, 2x1, regalo, sorteo, descuento diferido
- El cálculo del ROI promocional: cómo saber si una promoción ha generado valor o solo ha adelantado compras
- El fenómeno del pantry loading y cómo evitar que las promociones canibalicen ventas futuras
- La coordinación de la promoción entre el departamento de trade, marketing y ventas

**7. Negociación de condiciones comerciales con el retailer**
- Las condiciones que el fabricante negocia con el retailer más allá del precio: rappels, descuentos por volumen, condiciones de pronto pago, co-inversión en actividades
- Cómo preparar la negociación anual de condiciones: la información que necesitas llevar y la que debes evitar revelar
- Las palancas de negociación del fabricante: exclusividades, innovaciones, actividades de marketing, datos de categoría

**8. Plan de trade marketing para los próximos 12 meses**
Las actividades de trade marketing planificadas por trimestre, con inversión estimada, retailer objetivo, tipo de activación y métrica de éxito para cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia completa de trade marketing para marcas de gran consumo: gestión de categoría, planogramas, activaciones en punto de venta y medición del ROI promocional.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Tecnología para CPG y FMCG',
                'description'       => 'Los sistemas que conectan fabricante, distribuidor y retailer: EDI, VMI, previsión de demanda y la integración con los ERPs del canal de distribución.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de soluciones con especialización en sistemas de tecnología para fabricantes de bienes de consumo masivo (CPG/FMCG) y su integración con distribuidores y retailers. Necesito entender y diseñar la arquitectura tecnológica que conecta mis operaciones con el canal de distribución de manera eficiente y fiable.

Mi contexto:
- Tipo de empresa: [fabricante de gran consumo, distribuidor, broker, agente de ventas]
- Canales de distribución: [hipermercados, canal tradicional, canal HORECA, e-commerce, export]
- ERP actual: [SAP, Oracle, Microsoft Dynamics, otro, ninguno]
- Reto principal: [visibilidad de inventario en canal, pedidos ineficientes, previsión de demanda, integración con retailers]

Desarrolla:

**1. El ecosistema tecnológico del gran consumo**
Dibuja el mapa de sistemas que conectan a los actores del gran consumo: fabricante, co-manufacturer, distribuidor, mayorista, retailer y e-commerce. Explica los flujos de información (pedidos, facturas, albaranes, datos de venta y stock) y los flujos físicos de producto, y cómo la tecnología los conecta o los hace más eficientes.

**2. EDI (Electronic Data Interchange)**
- Qué es el EDI y por qué sigue siendo el estándar de comunicación entre fabricantes y grandes retailers décadas después de su creación
- Los mensajes EDI más importantes en gran consumo: ORDERS (pedido), ORDRSP (respuesta al pedido), DESADV (aviso de expedición), INVOIC (factura), RECADV (confirmación de recepción), INVRPT (informe de inventario)
- Los estándares EDI relevantes en España y Europa: EDIFACT, GS1 EANCOM, XML/EDIFACT, AS2
- Cómo implementar EDI con un retailer: los pasos, los plazos y los costes de la integración
- Los proveedores de integración EDI para FMCG: Edicom, SPS Commerce, OpenText, SERES

**3. VMI (Vendor Managed Inventory)**
- Qué es el VMI y cómo invierte la relación de pedido tradicional: el fabricante gestiona el stock del retailer
- Las condiciones que hacen que el VMI funcione: datos de venta en tiempo real, confianza mutua, sistemas integrados
- Los beneficios del VMI para el fabricante (mejor previsión, menos roturas) y para el retailer (menos trabajo administrativo, mejor servicio)
- Cómo implementar un VMI con un gran cliente: los datos que necesitas recibir y con qué frecuencia
- Las herramientas de VMI: SAP VM, Oracle VMI, soluciones específicas de FMCG

**4. Previsión de demanda y planificación (S&OP)**
- Los modelos de previsión de demanda para FMCG: modelos estadísticos, modelos de ML, enfoques híbridos
- El proceso de Sales & Operations Planning (S&OP): cómo alinear la previsión comercial con la capacidad de producción y la planificación de materias primas
- Las fuentes de datos que mejoran la previsión en gran consumo: ventas históricas, datos POS del retailer, datos de mercado (Nielsen, Kantar), estacionalidad, eventos especiales
- Las herramientas de demand planning para FMCG: SAP IBP, Oracle Demantra, Anaplan, Blue Yonder, o3

**5. Integración con ERPs de retailers**
- Cómo funcionan las integraciones con los ERPs de los principales retailers españoles (sistemas SAP de Carrefour, sistemas propietarios de Mercadona)
- Los portales de proveedores de los grandes retailers: qué datos exponen, cómo acceder y cómo automatizar la extracción
- Las limitaciones de las integraciones con retailers: frecuencia de actualización, calidad de datos, latencia entre la venta y la disponibilidad del dato

**6. Track and trace y trazabilidad de producto**
- Los requisitos de trazabilidad de la regulación europea (Reglamento Delegado de la Comisión) para alimentos y productos de consumo
- La implementación de GS1 para la trazabilidad: códigos de barras, GS1-128, GTIN, GLN, SSCC
- Los sistemas de trazabilidad de lote y fecha de caducidad y cómo conectarlos con los sistemas del distribuidor y el retailer
- El papel del blockchain en la trazabilidad de FMCG: cuándo tiene sentido y cuándo es solo marketing

**7. Datos de sell-out y analytics de canal**
- La diferencia entre sell-in (ventas del fabricante al distribuidor) y sell-out (ventas del distribuidor al consumidor) y por qué el segundo es más valioso
- Cómo conseguir datos de sell-out de los retailers: portales de datos, EDI INVRPT, acuerdos de intercambio de datos
- Los paneles de datos del mercado: cómo usar los datos de Nielsen o Kantar para complementar los datos propios
- El dashboard de canal para el equipo de ventas: qué métricas mostrar, con qué frecuencia actualizar y cómo construirlo

**8. Hoja de ruta tecnológica para los próximos 24 meses**
Las inversiones tecnológicas prioritarias para mejorar la integración con el canal de distribución, ordenadas por impacto en ventas y complejidad de implementación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Arquitectura tecnológica para fabricantes de FMCG: EDI con retailers, VMI, previsión de demanda y trazabilidad de producto desde fabricante hasta punto de venta.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Packaging design',
                'description'       => 'Diseño de envases que venden: los principios de diseño en el lineal, las restricciones de producción y el packaging sostenible que cumple la regulación y reduce el impacto ambiental.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de packaging senior con experiencia en el sector de gran consumo y conocimiento profundo de la producción de envases, la regulación de etiquetado y los principios de diseño de envases que aumentan la conversión en el punto de venta.

Mi proyecto de packaging:
- Categoría de producto: [alimentación, bebidas, higiene, cosmética, limpieza del hogar...]
- Tipo de envase: [caja de cartón, botella de plástico, tarro de vidrio, lata, bolsa flexible, envase múltiple...]
- Mercado objetivo: [España, Europa, exportación]
- Reto principal: [nuevo lanzamiento, rediseño de gama, sostenibilidad, reducción de costes, cumplimiento regulatorio]

Desarrolla:

**1. Los principios del diseño de packaging que vende en el lineal**
Explica los factores que determinan si un envase llama la atención y comunica correctamente en el punto de venta:
- El SEQ (Shelf Eye Quoting): cómo medir la visibilidad de un envase en el lineal y qué factores la determinan
- La jerarquía visual: el orden en que el ojo del consumidor lee el envase (primero el color y la forma, luego la imagen de marca, después el beneficio principal, finalmente el nombre del producto)
- El impacto del bloqueo de color en el lineal: por qué la coherencia de color entre referencias de una misma gama multiplica la visibilidad
- La lectura a 3 metros, a 1 metro y a 30 centímetros: qué debe comunicar el envase en cada distancia

**2. Diseño del frente del pack**
El panel frontal del envase es el espacio más valioso de toda la comunicación de marca en gran consumo:
- Los elementos obligatorios y los opcionales en el frente del pack según la categoría
- La arquitectura de marca en el frente: cómo equilibrar el logo, el naming de la variante, el beneficio principal y los elementos decorativos
- Claims y sellos: cuáles aumentan la conversión (sin azúcar, ecológico, vegano) y cómo posicionarlos sin sobrecargar el diseño
- Fotografías de producto vs. ilustraciones: cuándo usa cada uno y los errores habituales en la fotografía de producto para packaging

**3. Regulación de etiquetado en España y Europa**
Para cada tipo de producto, explica los requisitos obligatorios de etiquetado:
- Alimentos: Reglamento UE 1169/2011 (lista de ingredientes, información nutricional, alérgenos, fecha de consumo preferente/caducidad, peso neto, país de origen)
- Cosmética: Reglamento UE 1223/2009 (INCI, PAO, numero de lote, información de seguridad)
- Productos de limpieza: Reglamento CLP (pictogramas de peligro, frases H y P, identificación del fabricante)
- Los errores de etiquetado más comunes que generan sanciones o retiradas de mercado

**4. Restricciones técnicas de producción**
El diseño de packaging está limitado por los procesos de producción. Explica las restricciones más importantes:
- Tintas y colores: diferencia entre diseño en pantalla y resultado impreso, el sistema Pantone y su aplicación en packaging, las tintas de proceso vs. tintas planas
- Zonas de sangrado, de seguridad y de corte en el diseño de envases plegables
- Las tolerancias de producción que el diseñador debe conocer para evitar sorpresas en la imprenta
- Los formatos de entrega al fabricante de envases: qué exigen y cómo preparar los archivos correctamente

**5. Packaging sostenible**
- La regulación de envases y residuos en España y Europa (Directiva SUPD de plásticos de un solo uso, Reglamento de Envases de la UE)
- Los objetivos de reciclabilidad que la regulación impone y cómo afectan al diseño: monocapas vs. multicapas, materiales reciclables vs. compostables
- Cómo comunicar la sostenibilidad del envase sin incurrir en greenwashing: las guías de la CNMC y de la Comisión Europea sobre claims medioambientales
- Las alternativas de materiales sostenibles para cada tipo de envase y su impacto en coste y diseño
- El ecodiseño: cómo reducir el material usado sin comprometer la protección del producto

**6. Packaging para e-commerce**
- La diferencia entre un envase diseñado para el lineal físico y uno diseñado para ser vendido y entregado por e-commerce
- El packaging secundario para e-commerce: protección, unboxing experience y comunicación de marca fuera del punto de venta
- El impacto del e-commerce en el diseño del pack primario: los consumidores ven primero una foto en pantalla, no el envase en el lineal

**7. El proceso de diseño y aprobación de un pack**
- Las fases del proyecto de packaging: briefing, concepto, diseño, revisión legal y regulatoria, producción de artes finales, prueba de imprenta, aprobación y producción en masa
- Quién interviene en la aprobación de un pack en una empresa de gran consumo: marketing, regulatory affairs, ventas, calidad, supply chain
- Los timings reales de un proyecto de packaging: de qué depende y cómo acortarlos

**8. Brief de packaging**
Ayúdame a escribir un brief completo para el proyecto de packaging de mi producto, incluyendo todos los elementos que un diseñador externo o un equipo interno necesita para empezar a trabajar sin ambigüedad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Guía completa de diseño de packaging para gran consumo: principios de visibilidad en el lineal, regulación de etiquetado, restricciones de producción y packaging sostenible.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Key account management en gran consumo',
                'description'       => 'Gestiona las cuentas de Mercadona, Carrefour o El Corte Inglés: los joint business plans, los acuerdos anuales y la negociación con los compradores de las grandes cadenas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en key account management para fabricantes de gran consumo con experiencia en la negociación y gestión de cuentas de grandes distribuidores españoles y europeos. Necesito mejorar mi capacidad de gestión estratégica de las grandes cuentas y prepararme para las negociaciones anuales.

Mi contexto:
- Rol: [KAM, National Account Manager, Director de Cuentas]
- Retailer(s) que gestiono: [Mercadona, Carrefour, El Corte Inglés, Dia, Lidl, Alcampo, Consum...]
- Categoría de producto: [tipo de categoría]
- Volumen aproximado de la cuenta: [millones de euros o % de la facturación]
- Reto principal: [ganar espacio de lineal, defender condiciones, lanzar innovaciones, gestionar las presiones de comprador]

Desarrolla:

**1. El rol del KAM en gran consumo y su relación con el comprador**
Explica la estructura del equipo de compras de un gran retailer: el comprador (buyer) y el category manager, cómo toman decisiones, qué KPIs tienen y qué presiones reciben de su dirección. Esto es fundamental para entender qué argumentos funcionan y cuáles no en la negociación.

**2. Preparación de la negociación anual**
- El calendario de negociación anual con los principales retailers españoles: cuándo empiezan, cuándo hay que tener los acuerdos firmados y cómo afecta al proceso de planificación del fabricante
- Los datos que debes llevar a la negociación anual: datos de venta sell-in y sell-out, cuota de mercado, comparativa de rendimiento vs. competidores, rentabilidad de la categoría
- Cómo construir el argumentario de negociación: qué pides, por qué lo pides y con qué datos lo justificas
- Los errores más comunes de los KAMs en la preparación de la negociación

**3. El Joint Business Plan (JBP) como herramienta de negociación**
- Cómo estructurar un JBP que el comprador quiera firmar: la narrativa, los datos de categoría, el plan de actividades y los compromisos mutuos
- La diferencia entre un JBP con Mercadona (sin actividades, foco en precio y eficiencia) y con Carrefour o El Corte Inglés (con actividades promocionales, espacio extra, co-inversión)
- Cómo negociar el JBP: qué ceder primero, qué defender hasta el final y cómo crear valor para ambas partes
- El seguimiento del JBP a lo largo del año: las revisiones trimestrales y cómo gestionar las desviaciones

**4. Las condiciones comerciales que se negocian**
Para cada tipo de condición, explica qué es, cómo se negocia y cuál es el rango habitual en el sector:
- Precio neto de tarifa: el proceso de revisión de precios y cómo argumentar subidas en contexto inflacionario
- Rappels por volumen: la estructura de los rappels, cómo calcularlos y cómo negociar los objetivos
- Descuentos por actividad: co-inversión en folletos, displays, degustaciones, espacios especiales
- Condiciones de pago: plazo de pago, pronto pago, las negociaciones de la Ley de Morosidad
- Devoluciones y gestión de producto sin salida: cómo limitar las condiciones de devolución

**5. Gestión de las innovaciones con el retailer**
- Cómo presentar un nuevo producto a un comprador de gran retailer: el proceso, el kit de lanzamiento y los argumentos que funcionan
- Los criterios que usa el retailer para decidir si lista una innovación: incrementalidad de la categoría, rentabilidad, velocidad esperada, riesgo de obsolescencia
- Cómo gestionar el periodo de prueba de una innovación antes de que el comprador decida mantenerla o eliminarla
- Cómo defender un producto que no está rotando bien en el primer período

**6. Gestión de la relación más allá de la negociación**
- El contacto regular con el comprador durante el año: qué frecuencia, qué formato y qué contenido aportar
- Cómo convertirse en un proveedor de referencia para el comprador: ser un experto de la categoría, no solo un vendedor de tu propia marca
- El manejo de las crisis con el retailer: problemas de suministro, retiradas de producto, incumplimiento de condiciones
- La gestión de las relaciones a múltiples niveles: no depender solo del comprador sino construir relaciones con el category manager, el director de compras y otros stakeholders

**7. KPIs del KAM en gran consumo**
- Las métricas que mide el KAM y las que mide su empresa sobre la cuenta: sell-in, sell-out, cuota de lineal, presencia de referencias, cumplimiento del JBP, rentabilidad de la cuenta
- Cómo construir el dashboard de gestión de cuenta y con qué frecuencia revisarlo
- Los indicadores de alerta temprana que señalan que una relación comercial con un retailer está deteriorándose

**8. Plan de cuenta anual**
Ayúdame a estructurar el plan de cuenta para el próximo año con mi principal retailer: objetivos, actividades planificadas, recursos necesarios, hitos de seguimiento y escenarios alternativos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Guía de key account management para fabricantes de gran consumo: preparación de la negociación anual con retailers, joint business plans y gestión de condiciones comerciales.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Innovación de producto en gran consumo',
                'description'       => 'Lanza nuevas referencias: el proceso de innovación, el consumer testing, el go-to-market y las decisiones de portfolio que afectan a toda la gama.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en innovación de producto y gestión de portfolio para empresas de gran consumo con experiencia en el proceso de desarrollo de nuevas referencias desde la idea hasta el lanzamiento comercial.

Mi contexto:
- Tipo de empresa: [fabricante de marca líder, fabricante de marca de distribuidor, empresa de nicho, startup de FMCG]
- Categoría de producto: [alimentación, bebidas, higiene, cosmética, hogar...]
- Fase del proyecto: [idea, concepto validado, en desarrollo, listo para lanzar]
- Reto principal: [crear una innovación que aguante en el lineal, diferenciarse de la marca blanca, lanzar en un mercado saturado]

Desarrolla:

**1. El funnel de innovación en gran consumo**
Explica el proceso de desarrollo de una nueva referencia desde la identificación de la oportunidad hasta el lanzamiento, describiendo las fases (Stage-Gate o equivalente), los criterios de paso entre fases, los recursos necesarios en cada etapa y las tasas de éxito reales en innovación de gran consumo (el dato de que el 70-80% de las innovaciones de FMCG fracasan en el primer año).

**2. Identificación y validación de la oportunidad**
- Las fuentes de insight de consumidor que generan oportunidades de innovación: datos de mercado (Nielsen, Kantar), análisis de tendencias, social listening, shopper research, análisis de la competencia internacional
- Cómo pasar de un insight de consumidor a una oportunidad de negocio concreta: el modelo need-state, la dimensión del mercado y la estimación de la cuota alcanzable
- Las preguntas que debes responder antes de comprometer recursos de desarrollo: ¿el consumidor tiene este problema?, ¿lo compraría a este precio?, ¿en qué canal lo buscaría?

**3. Desarrollo del concepto y consumer testing**
- Cómo escribir un concepto de producto para testarlo con consumidores: los elementos obligatorios (insight, beneficio, razón para creer, discriminador)
- Los métodos de consumer testing en gran consumo: focus groups, tests cuantitativos, concept tests online, tests de producto monadico y comparativo, In-Home Use Tests (IHUT)
- Cómo interpretar los resultados de un consumer test: qué métricas son predictoras del éxito en el lineal (purchase intent, uniqueness, relevance)
- Los umbrales de aprobación que usan las empresas de gran consumo para decidir si un concepto pasa a desarrollo

**4. Decisiones de portfolio**
- Cómo evaluar el impacto de una innovación en el portfolio existente: canibalización vs. incrementalidad, efecto halo y efecto canibal en la gama
- Las decisiones de arquitectura de marca en la innovación: extensión de línea, sub-marca, nueva marca, co-branding
- Cuándo eliminar referencias del portfolio para dar espacio a la innovación: el análisis de contribución marginal y de complejidad operativa
- La gestión del portfolio de innovaciones en cartera: cómo priorizar cuando los recursos de desarrollo son limitados

**5. Desarrollo de producto y sourcing**
- El proceso de desarrollo técnico de la fórmula o del producto: las iteraciones entre el equipo de I+D, el de calidad y el de marketing
- La decisión de fabricación propia vs. co-manufacturing: cuándo externalizar la producción de una innovación y qué riesgos conlleva
- Los requisitos regulatorios del producto que deben estar resueltos antes de lanzar: aprobaciones, certificaciones, homologaciones

**6. Go-to-market de la innovación**
- El plan de lanzamiento: en qué canal lanzar primero (retailer de prueba, canal especializado, e-commerce como test)
- Los objetivos de distribución ponderada: cuántos puntos de venta en el primer año y cómo construirlos progresivamente
- La argumentación de venta al retailer: los datos que necesita el KAM para listar la innovación
- El plan de marketing del lanzamiento: qué soporte necesita una innovación para arraigar en el lineal

**7. Seguimiento del lanzamiento**
- Los indicadores de alerta temprana que dicen si una innovación va a sobrevivir: velocidad de rotación en las primeras semanas, recompra, distribución ponderada alcanzada, feedback del canal
- Los criterios para decidir si una innovación se mantiene, se reformula o se elimina
- El proceso de post-mortem de innovaciones que no funcionan: qué aprender para el siguiente ciclo de innovación

**8. Pipeline de innovación para los próximos 3 años**
Diseña la estructura del pipeline de innovación que necesita mi empresa: cuántas innovaciones por año, con qué distribución entre extensiones de línea, renovaciones y grandes apuestas de innovación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Proceso completo de innovación de producto en gran consumo: del insight de consumidor al lanzamiento comercial, con consumer testing, decisiones de portfolio y go-to-market.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de equipos de campo',
                'description'       => 'La fuerza de ventas y merchandising que trabaja en ruta: gestión remota, incentivos, herramientas de sales force automation y la cultura de equipos que no van a la oficina.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en gestión de equipos de ventas y merchandising de campo para empresas de gran consumo. Tengo bajo mi responsabilidad un equipo que trabaja en ruta, visitando clientes y puntos de venta, y necesito diseñar un sistema de gestión que mejore el rendimiento, la motivación y la eficiencia de ese equipo.

Mi equipo:
- Tamaño del equipo: [número de personas]
- Tipo de trabajo: [preventa, autoventa, merchandising, promotores, delegados]
- Zona geográfica: [nacional, regional, varias provincias]
- Reto principal: [baja productividad, alta rotación, falta de visibilidad de lo que hacen, resultados inconsistentes entre rutas]

Desarrolla:

**1. El diseño de la fuerza de ventas de campo**
- Cómo diseñar las rutas de visita para maximizar la cobertura y la frecuencia adecuada para cada tipo de cliente
- Los criterios de segmentación de la cartera de clientes para asignar la frecuencia de visita correcta: volumen de compra, potencial, tipo de establecimiento
- El dimensionamiento del equipo: cómo calcular el número de personas necesarias en función de la cartera de clientes, la frecuencia de visita y los objetivos de distribución
- La organización territorial: criterios para dividir las zonas entre comerciales

**2. Herramientas de Sales Force Automation (SFA)**
- Qué es la SFA y por qué es imprescindible para gestionar un equipo de campo en gran consumo
- Las funcionalidades que debe tener una herramienta de SFA para equipos de FMCG: planificación de rutas, registro de visitas, pedidos, control de presencia de producto, gestión de material PLV, reporte de incidencias
- Los principales proveedores de SFA para gran consumo: StayInFront, Repsly, Salesforce Field Service, Pitcher, soluciones propietarias de grandes empresas
- Los KPIs que la SFA debe capturar automáticamente: visitas realizadas vs. planificadas, efectividad de visita (pedido o acción realizada), tiempo en cliente, cobertura de distribución

**3. Sistema de objetivos e incentivos**
- Cómo diseñar el sistema de objetivos de un equipo de campo: el equilibrio entre objetivos cuantitativos (volumen, distribución, facturación) y cualitativos (ejecución en punto de venta, calidad de la visita)
- El modelo de variable para comerciales de campo: qué porcentaje del salario variable es motivador sin ser fuente de conflicto
- Los errores más comunes en el diseño de incentivos para equipos de campo: objetivos que no controlan, métricas que se falsifican fácilmente, variable que no se percibe como alcanzable
- Incentivos no económicos que funcionan para equipos en ruta: reconocimiento, formación, autonomía, flexibilidad

**4. Gestión remota del equipo de campo**
- Cómo liderar y motivar a personas que no ves físicamente cada día y cuya oficina es su coche o la calle
- La cadencia de comunicación del manager con el equipo de campo: qué comunicar en el canal de equipo, qué en conversación individual, con qué frecuencia hacer salidas de campo conjuntas
- La reunión de equipo de campo: cómo hacerla efectiva cuando el equipo está disperso geográficamente y el tiempo juntos es escaso
- Las herramientas de comunicación que funcionan para equipos en ruta: WhatsApp de empresa, Teams, aplicaciones de briefing diario

**5. Onboarding y formación del personal de campo**
- El onboarding de un comercial o promotor nuevo: los primeros 30, 60 y 90 días en la empresa
- La formación continua de un equipo en ruta: cómo formar a personas que no tienen tiempo para sentarse a hacer cursos
- El conocimiento de producto y de técnicas de venta que un delegado comercial de FMCG debe tener y cómo certificarlo
- El acompañamiento de campo como herramienta de desarrollo: cómo hacer una jornada de acompañamiento que sea de desarrollo y no de control

**6. Rotación y retención del personal de campo**
- Por qué los equipos de campo tienen mayor rotación que otros y cuáles son los factores más relevantes
- Las señales de que un comercial de campo va a marcharse y cómo actuar antes de que sea tarde
- El coste real de la rotación de un comercial en ruta: más allá del coste de selección, el coste de la cartera perdida y el servicio deteriorado
- Las condiciones de trabajo y los beneficios que más valoran los profesionales de campo

**7. KPIs del equipo de campo**
Define el dashboard de indicadores que el manager de un equipo de campo debe revisar diaria, semanal y mensualmente: cobertura de visitas, efectividad de visita, distribución ponderada, pedido medio, velocidad de ejecución en punto de venta.

**8. Plan de mejora del rendimiento del equipo**
Las iniciativas que voy a implementar en los próximos 90 días para mejorar el rendimiento del equipo de campo, con responsable, plazo y métrica de éxito para cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de gestión de equipos de ventas y merchandising de campo en gran consumo: diseño de rutas, SFA, incentivos y liderazgo remoto de equipos en ruta.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'P&L de categoría',
                'description'       => 'Gestiona la cuenta de resultados de una categoría de productos: la estructura de costes de un FMCG, los drivers de rentabilidad y las decisiones que mejoran el margen sin sacrificar el volumen.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con experiencia en la gestión del P&L de categorías de gran consumo. Necesito entender y gestionar la cuenta de resultados de mi categoría o marca para tomar mejores decisiones que mejoren la rentabilidad sin sacrificar el crecimiento en volumen.

Mi contexto:
- Tipo de empresa: [multinacional de gran consumo, empresa familiar FMCG, startup de alimentación]
- Categoría o marca a gestionar: [describe]
- Posición actual: [responsable de marketing, brand manager, responsable de categoría, director comercial]
- Reto financiero principal: [márgenes bajo presión, costes de materias primas disparados, inversión en marketing difícil de justificar, mejorar la rentabilidad del canal]

Desarrolla:

**1. La estructura del P&L de una categoría de gran consumo**
Explica línea por línea la cuenta de resultados de una marca o categoría de FMCG:
- Facturación bruta (Gross Sales): ventas a PVP o a precio de tarifa
- Deducciones comerciales (Trade Spend): rappels, descuentos por actividad, devoluciones
- Facturación neta (Net Sales): la cifra real de ingresos
- Coste de fabricación (COGS): materias primas, envases, mano de obra directa, costes de conversión
- Margen bruto (Gross Margin): Net Sales - COGS
- Inversión de marketing (A&P: Advertising & Promotion): media, trade marketing, shopper marketing, activaciones
- Contribución antes de gastos fijos (Contribution Margin)
- Gastos fijos asignados a la categoría
- EBIT de la categoría

**2. Los drivers de rentabilidad en FMCG**
Para cada driver, explica cómo impacta en el P&L y las decisiones que lo mejoran:
- Precio: la palanca más potente en el margen; cómo gestionar subidas de precio sin perder volumen
- Mix de producto: el efecto del mix de referencias sobre el margen promedio de la categoría
- Eficiencia de fabricación: la curva de experiencia y la economía de escala en producción
- Trade spend: el ROI de la inversión comercial y cómo optimizarla por canal y tipo de actividad
- A&P: cómo medir el retorno de la inversión en publicidad y marketing de marca

**3. Gestión de costes de materias primas**
La volatilidad de las materias primas es uno de los mayores riesgos del margen en FMCG:
- Cómo construir un modelo de seguimiento de los costes de materias primas y su impacto en el P&L
- Las estrategias de cobertura de materias primas: contratos a plazo, fijación de precio con proveedores, fórmulas de revisión de precio
- Cuándo y cómo trasladar una subida de costes al precio de venta: los argumentos con el retailer y los límites del mercado
- Las decisiones de reformulación y optimización de la receta para mejorar el margen sin que el consumidor lo note

**4. Trade spend y su ROI**
El trade spend (inversión en el canal) representa en muchas empresas de gran consumo entre el 15% y el 30% de la facturación bruta:
- Cómo calcular el ROI de cada tipo de actividad de trade: promoción de precio, display, folleto, degustación
- La gestión de los contratos de trade spend con los retailers: cómo asegurarte de que pagas solo lo que genera valor
- El proceso de revisión y optimización del trade spend: cómo reasignar el presupuesto de las actividades de menor ROI a las de mayor ROI

**5. Pricing strategy y revenue growth management**
- Qué es el Revenue Growth Management (RGM) y cómo lo aplican las grandes empresas de gran consumo
- Las palancas del RGM: precio, mix, promociones, arquitectura de precio por canal y formato
- Cómo construir una estrategia de precio que maximice los ingresos netos, no solo el volumen

**6. Forecasting financiero de la categoría**
- Cómo construir el presupuesto anual de la categoría: el proceso, los supuestos y los escenarios
- La revisión mensual del P&L: cómo analizar las desviaciones y tomar decisiones correctivas
- Los indicadores de alerta que dicen que el P&L se va a desviar antes de que se desvíe

**7. La conexión entre decisiones de marketing y el P&L**
- Cómo evaluar el impacto financiero de una innovación antes de lanzarla
- El análisis de contribución de una extensión de línea nueva: cuándo añade margen y cuándo canibaliza el margen existente
- Cómo usar el P&L de categoría para priorizar las inversiones de marketing

**8. Dashboard financiero de categoría**
Define el dashboard mensual que el responsable de una categoría de FMCG debe tener para gestionar la rentabilidad: las líneas de P&L, los KPIs de margen, el seguimiento del trade spend y las alertas de desviación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestión del P&L de una categoría de gran consumo: estructura de costes FMCG, optimización del trade spend, pricing strategy y forecasting financiero.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Regulación de producto de consumo',
                'description'       => 'Etiquetado, claims nutricionales, publicidad dirigida a menores y los requisitos legales que afectan al lanzamiento de nuevos productos en el mercado europeo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en regulación de productos de consumo en España y la Unión Europea, con experiencia en alimentación, cosmética, productos de limpieza del hogar y otros bienes de consumo masivo. Necesito entender el marco legal completo que regula el lanzamiento de nuevos productos al mercado europeo.

Mi proyecto:
- Tipo de producto: [alimento, suplemento alimenticio, cosmético, producto de limpieza, juguete, artículo de puericultura...]
- Mercados objetivo: [España, Francia, Alemania, UK, otros]
- Reto legal principal: [cumplimiento de etiquetado, validación de claims, publicidad a menores, ingredientes controvertidos, nuevo canal de venta]

Desarrolla:

**1. El mapa regulatorio de los productos de consumo en Europa**
Explica las principales regulaciones europeas que afectan a los productos de gran consumo según la categoría:
- Alimentos: Reglamento 1169/2011 (información alimentaria), Reglamento 1924/2006 (claims nutricionales y de salud), Reglamento 2018/848 (ecológico), Directiva de Aditivos, Novel Foods
- Cosméticos: Reglamento 1223/2009, la lista de ingredientes prohibidos, restricciones de conservantes
- Productos de limpieza: Reglamento CLP, Reglamento de Detergentes
- Juguetes y artículos de puericultura: Directiva de Seguridad de Juguetes, requisitos CE
- Packaging y envases: Reglamento de Envases, Directiva SUP (plásticos de un solo uso)

**2. Requisitos de etiquetado para el mercado español y europeo**
Para el tipo de producto más relevante, explica los requisitos de etiquetado obligatorios:
- Información mínima obligatoria: qué debe aparecer y en qué tamaño de fuente
- Idioma: en qué idiomas debe estar la información y cuándo son obligatorias las traducciones
- Formato y legibilidad: los requisitos de contraste, tamaño de fuente y posición de los elementos obligatorios
- Etiquetado electrónico: las posibilidades y limitaciones de complementar la etiqueta física con información digital

**3. Claims nutricionales y de salud en alimentación**
La regulación de claims en alimentación es una de las más estrictas del mundo:
- La distinción entre claim nutricional (describe un contenido: "rico en fibra") y claim de salud (describe una función: "la vitamina C contribuye al funcionamiento normal del sistema inmune")
- La lista de claims autorizados por la EFSA: cómo usarlos correctamente y qué condiciones de uso específicas tienen
- Los claims que están prohibidos o que requieren autorización específica
- El proceso de autorización de un nuevo claim de salud ante la EFSA: cuánto tiempo, qué documentación y cuánto coste

**4. Publicidad de productos de consumo y restricciones especiales**
- La regulación de la publicidad de alimentos dirigida a menores: el PAOS (en España) y las restricciones europeas
- Los límites de los claims en publicidad vs. los permitidos en etiquetado: no son siempre los mismos
- La publicidad comparativa: cuándo es legal y cuándo no
- Los influencers y el etiquetado de publicidad en redes sociales para productos de consumo: las obligaciones de transparencia

**5. Ingredientes y sustancias controvertidas**
- Las sustancias cuyo uso está restringido o prohibido en alimentos, cosméticos o productos de limpieza según la regulación europea
- Cómo comprobar si un ingrediente o formulación es legal en todos los mercados donde quieres vender
- Las diferencias entre la regulación europea y la de UK, US, o mercados de exportación
- El proceso de gestión de un ingredient-issue cuando un regulador cuestiona una sustancia que ya tienes en el mercado

**6. Proceso de lanzamiento legal de un producto**
Diseña el proceso de verificación legal antes del lanzamiento:
- Quién en la empresa es responsable de validar el cumplimiento regulatorio antes de imprimir las etiquetas
- El checklist legal de un lanzamiento: los puntos que no pueden quedar sin validar
- Cómo gestionar la revisión legal cuando las fechas de lanzamiento son muy ajustadas
- Los organismos a los que debes notificar el lanzamiento de ciertos tipos de productos (cosméticos en el CPNP, suplementos alimenticios a la AESAN)

**7. Gestión de crisis regulatoria**
- Qué hacer cuando recibes una queja de la AECOSAN, la AESAN o de un consumidor sobre el etiquetado de tu producto
- El proceso de retirada voluntaria de un producto del mercado: cuándo es obligatoria y cuándo es preventiva
- La comunicación de una alerta de seguridad de producto: los canales RASFF y cómo gestionar la comunicación con consumidores y retailers
- Las sanciones por incumplimiento de la regulación de productos de consumo en España

**8. Checklist de compliance para el lanzamiento**
Genera un checklist completo de cumplimiento regulatorio para el tipo de producto de mi empresa, organizado por fase del lanzamiento: desarrollo de producto, aprobación de etiquetado, notificación a autoridades y seguimiento postlanzamiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Marco legal completo para el lanzamiento de productos de consumo en España y Europa: etiquetado obligatorio, claims permitidos, restricciones publicitarias y gestión de crisis regulatoria.',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al consumidor en FMCG',
                'description'       => 'Gestiona los contactos de consumidores finales para una marca de gran consumo: reclamaciones, crisis de producto y los sistemas de CRM del consumidor a escala.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en gestión de la experiencia del consumidor para marcas de gran consumo con experiencia en los sistemas de atención, las crisis de producto y el uso estratégico de la relación con el consumidor final.

Mi contexto:
- Tipo de empresa: [multinacional de FMCG, empresa de alimentación nacional, empresa de cosmética, empresa de limpieza del hogar]
- Volumen de contactos con consumidores: [contactos mensuales aproximados]
- Canales actuales de atención: [teléfono, email, redes sociales, web, retailer...]
- Reto principal: [gestionar el volumen de reclamaciones, mejorar la calidad de las respuestas, gestionar una crisis, aprovechar los datos de consumidor]

Desarrolla:

**1. La función de atención al consumidor en una empresa de gran consumo**
Explica por qué la atención al consumidor es estratégicamente importante para una marca de gran consumo más allá de resolver reclamaciones: es la única relación directa que tiene el fabricante con el consumidor final (el retailer tiene la relación comercial, pero el fabricante raramente habla directamente con quien compra y usa el producto). Describe el valor de los datos que se recogen en la atención al consumidor y cómo las mejores empresas los usan.

**2. Los canales de contacto y su gestión**
Para cada canal, explica el perfil del consumidor que lo usa, el tipo de contacto más frecuente y las mejores prácticas de gestión:
- Teléfono de atención gratuito: los consumidores que llaman, el perfil de reclamaciones y el dimensionamiento del equipo
- Email y formulario web: los plazos de respuesta que el consumidor espera y los estándares de calidad de respuesta
- Redes sociales (Twitter/X, Instagram, Facebook): las diferencias entre la atención pública y la privada, los tiempos de respuesta esperados
- WhatsApp Business: cuándo tiene sentido y cómo gestionarlo a escala
- Los retailers como canal de atención: cómo gestionar las reclamaciones que llegan a través del punto de venta

**3. Gestión de tipos de contactos**
Para cada tipo de contacto, explica el proceso de gestión y la respuesta ideal:
- Reclamación de producto (cuerpo extraño, defecto de calidad, packaging defectuoso): el proceso de recogida de muestra, análisis y respuesta
- Reacción adversa (cosmética, alimentación): el protocolo de seguridad del producto y la obligación de notificación regulatoria
- Consulta sobre ingredientes o alérgenos: la importancia de la precisión en la respuesta y los riesgos de una respuesta errónea
- Feedback positivo y sugerencias de mejora: cómo canalizar internamente el feedback positivo y las ideas de consumidor

**4. El CRM del consumidor en FMCG**
- La diferencia entre el CRM de una empresa de gran consumo y el de una empresa de servicios: en FMCG, el consumidor compra en el retailer y no tienes su historial de compra a menos que tengas un programa de fidelización
- Cómo construir y enriquecer la base de datos de consumidores a través de los contactos de atención
- Los sistemas de CRM para el servicio al consumidor en FMCG: Salesforce Service Cloud, Zendesk, Sprinklr, Hootsuite Inbox
- El uso de los datos del CRM para mejorar el producto, el packaging y la comunicación

**5. Gestión de crisis de producto**
- Los criterios que activan una crisis de producto: el número de reclamaciones similares en un período, la gravedad del problema de seguridad, la aparición en medios
- El protocolo de gestión de crisis de producto: la activación del equipo, la comunicación interna, la decisión de retirada y la comunicación externa
- La comunicación con el consumidor durante una crisis: cómo ser transparente y empático sin crear más alarma
- La comunicación con los retailers durante una retirada de producto: el proceso y los plazos
- Los casos de crisis de producto conocidos en FMCG y qué aprendizajes dejaron

**6. Redes sociales y gestión de la reputación**
- Cómo monitorizar las menciones de la marca en redes sociales y en medios para detectar problemas emergentes antes de que se conviertan en crisis
- El protocolo de respuesta en redes sociales: cuándo responder públicamente y cuándo llevar la conversación al privado
- Los influencers y las reseñas negativas: cómo gestionar críticas de personas con audiencia sin amplificar el problema
- La diferencia entre una queja individual viral y una crisis real de producto

**7. Métricas de atención al consumidor en FMCG**
- Los KPIs que mide el departamento de atención al consumidor: tiempo de primera respuesta, tiempo de resolución, satisfacción del consumidor (CSAT), Net Promoter Score
- Cómo medir el impacto de la atención al consumidor en la fidelidad a la marca: el consumidor que reclamó y fue bien atendido tiene mayor LTV que el que nunca reclamó
- El reporting de atención al consumidor que la dirección de la empresa necesita ver: tendencias de reclamaciones, temas emergentes, señales de problema de calidad

**8. Plan de mejora del servicio al consumidor**
Las iniciativas que implementaré en los próximos 6 meses para mejorar la calidad y la eficiencia de la atención al consumidor, con responsable, plazo y métrica de éxito para cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de atención al consumidor para marcas de gran consumo: gestión de reclamaciones, protocolo de crisis de producto, CRM del consumidor y métricas de calidad de servicio.',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultor de marketing freelance en gran consumo',
                'description'       => 'El nicho del consultor de gran consumo independiente: los proyectos que contratan las marcas medianas y la propuesta de valor del experto externo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en desarrollo de negocio para consultores de marketing independientes especializados en el sector de gran consumo y FMCG. Quiero construir o hacer crecer mi práctica como consultor freelance de marketing en el sector de gran consumo: entender qué proyectos tienen demanda, cómo posicionarme frente a las grandes consultoras y cómo conseguir clientes de manera sistemática.

Mi perfil:
- Experiencia previa: [años en marketing de gran consumo, empresas donde has trabajado]
- Especialización: [brand management, trade marketing, innovación, shopper marketing, digital FMCG, category management...]
- Estado actual: [quiero empezar, tengo algún proyecto, quiero escalar]
- Tipo de cliente al que quiero llegar: [marcas medianas nacionales, multinacionales medianas, startups de alimentación, empresas familiares de FMCG]

Desarrolla:

**1. El mercado de la consultoría de marketing en gran consumo**
Describe el mercado actual de consultoría independiente en FMCG en España:
- Los tipos de proyectos que contratan externamente las empresas de gran consumo: auditorías de marca, planes de lanzamiento, reestructuración de portfolio, proyectos de innovación, análisis de competencia, formación de equipos
- Qué perfil de empresa contrata consultores externos de marketing en FMCG: las medianas que no tienen todo el expertise interno, las multinacionales que quieren una visión externa, los fondos de PE que han adquirido una marca de FMCG y necesitan talento de marketing rápidamente
- Por qué el consultor independiente tiene ventajas sobre las grandes consultoras de estrategia en proyectos de FMCG: conocimiento del sector, velocidad, precio, ausencia de overhead junior

**2. Las especialidades con mayor demanda**
Para cada especialidad de marketing de gran consumo, explica la demanda actual, el tipo de proyecto típico y el rango de tarifas:
- Innovación y lanzamiento de producto: validación de concepto, go-to-market, soporte al lanzamiento
- Brand strategy y reposicionamiento: auditoría de marca, definición de plataforma, brief de comunicación
- Trade marketing y shopper marketing: estrategia de canal, gestión de categoría, materiales PLV
- Category management y análisis de mercado: análisis de Nielsen/Kantar, recomendaciones de portfolio, JBP con retailers
- Digital marketing para FMCG: social media, e-commerce, direct-to-consumer, retail media
- Interim marketing manager: cobertura de vacante, apoyo en picos de trabajo

**3. Posicionamiento del consultor de FMCG**
- Cómo definir el nicho dentro del marketing de gran consumo que te diferencia: la combinación de sector (alimentación, cosmética, limpieza, bebidas) y disciplina (innovación, trade, digital, brand) que te hace único
- La propuesta de valor del consultor freelance vs. las grandes firmas de consultoría: qué prometes que McKinsey o BCG no pueden prometer
- Los mensajes que resuenan con los directores de marketing de empresas de FMCG medianas: velocidad, experiencia directa en el lineal, ausencia de capas junior, implicación personal del experto

**4. Captación de clientes en el sector FMCG**
- Las fuentes de proyectos para un consultor de marketing en gran consumo: red de contactos de ex-colegas, recomendaciones de clientes actuales, LinkedIn, headhunters de interim, agencias de marketing que subcontratan expertise específico
- Cómo activar la red de contactos del sector: el mensaje inicial, el seguimiento y cómo mantener la relación caliente sin ser invasivo
- LinkedIn para consultores de FMCG: qué publicar para que los directores de marketing de empresas de gran consumo te encuentren cuando necesitan un experto externo
- Los eventos del sector donde el consultor de FMCG construye red: Aral, FIAB, eventos de distribución, jornadas de la industria alimentaria

**5. Estructura y pricing de los proyectos**
- Los modelos de engagement más comunes en consultoría de FMCG: proyecto cerrado por entregable, retainer mensual, interim por días, facilitación de workshops
- Los rangos de tarifa por día para consultores de marketing de gran consumo en España según la experiencia y la especialización
- Cómo estructurar un presupuesto de proyecto que sea competitivo y rentable
- El contrato tipo para proyectos de consultoría de FMCG: qué incluir y qué protege al consultor

**6. Entregables que los clientes de FMCG valoran**
- Los formatos de trabajo y entregables que los directores de marketing de FMCG esperan de un consultor externo: análisis de mercado, brand book, plan de marketing anual, workshop de innovación, formación del equipo
- La diferencia entre lo que el cliente pide y lo que realmente necesita: cómo gestionar el scope del proyecto para entregar valor real
- Cómo presentar los resultados de un proyecto de consultoría a la dirección de una empresa de FMCG

**7. Escalabilidad del negocio de consultoría en FMCG**
- Los modelos de crecimiento del consultor independiente: seguir siendo solo, crear un equipo de asociados, crear una boutique de consultoría de FMCG, formación y contenido como línea de ingresos complementaria
- Cuándo tiene sentido asociarse con otros consultores complementarios para ofrecer proyectos más completos
- El paso de consultor individual a empresa: cuándo y cómo hacerlo

**8. Plan de negocio para los próximos 12 meses**
Las iniciativas concretas mes a mes para construir una cartera de clientes estable como consultor de marketing de gran consumo, con los ingresos objetivo por trimestre y los hitos que confirman que el negocio está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Guía completa para construir una práctica de consultoría freelance especializada en marketing de gran consumo: especialidades con demanda, tarifas de mercado y estrategia de captación de clientes FMCG.',
                'vote_score'        => 35,
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
