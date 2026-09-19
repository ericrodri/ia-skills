<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills552Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de productos alimentarios y bebidas con IA',
                'description'      => 'Crea estrategias de marketing para productos de alimentación usando IA: posicionamiento, tendencias de consumo, campañas en retail y redes sociales.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de gran consumo (FMCG) especializado en el sector de alimentación y bebidas. Tu objetivo es diseñar una estrategia de marketing completa para el lanzamiento de un nuevo producto alimentario en el mercado español e hispanohablante.

objetivo: Posicionar un nuevo producto de alimentación saludable (por ejemplo, una bebida vegetal funcional o un snack proteico) en un mercado competitivo, diferenciándolo de las marcas establecidas y construyendo una base de consumidores leales.

contexto: El consumidor de alimentación saludable en España es cada vez más exigente: lee etiquetas, busca ingredientes naturales, valora la trazabilidad y el origen de los ingredientes, y toma decisiones influenciadas por recomendaciones en redes sociales y opiniones de expertos en nutrición. El canal de distribución es mixo: supermercados, tiendas especializadas y e-commerce.

tarea 1 — Investigación de mercado y tendencias con IA:
Define cómo usar IA para analizar el mercado de alimentación saludable: análisis de tendencias de búsqueda (Google Trends, Amazon bestsellers en la categoría), monitorización de redes sociales para identificar ingredientes o formatos en auge, análisis de los ingredientes y claims nutricionales de los competidores, y segmentación de los consumidores actuales de la categoría según motivaciones (salud, sostenibilidad, conveniencia, sabor).

tarea 2 — Posicionamiento y propuesta de valor:
Diseña el posicionamiento del producto: eje de diferenciación principal (el único snack proteico con X% de proteína vegetal y sin azúcar añadida), target primario y secundario con descripción detallada del consumidor ideal, claim nutricional principal y claims secundarios cumpliendo la normativa europea de salud (Reglamento 1924/2006), y naming y packaging con paleta de colores que transmita los valores del producto.

tarea 3 — Estrategia de lanzamiento en retail:
Define el plan de entrada en los canales de distribución: estrategia de listing en las principales cadenas de supermercados (Mercadona, Carrefour, El Corte Inglés, Día), materiales de punto de venta (displays, promotores, degustaciones), política de precios de lanzamiento y gestión de las promociones iniciales, y criterios de rotación mínima para asegurar la permanencia en el lineal.

tarea 4 — Marketing digital y redes sociales:
Propón la estrategia de marketing digital: plan de contenidos para Instagram y TikTok (recetas con el producto, testimonios de consumidores reales, contenido educativo sobre los ingredientes), colaboración con microinfluencers de nutrición y wellness (criterios de selección, tipo de colaboración, métricas de éxito), estrategia de Google Shopping y Amazon para el canal e-commerce, y campaña de lanzamiento con objetivo de brand awareness en Meta Ads.

tarea 5 — Estrategia de muestras y generación de prueba:
Diseña el programa de generación de prueba: distribución de muestras gratuitas en puntos de máxima afinidad (gimnasios, consultas de nutricionistas, eventos de wellness), programa de referrals para convertir a los primeros consumidores en prescriptores, packaging de lanzamiento especial con código QR que lleva a contenido exclusivo, y campaña de reseñas verificadas en Google, Amazon y Trustpilot.

tarea 6 — KPIs y métricas de lanzamiento:
Define los indicadores de éxito del lanzamiento en los primeros 6 meses: distribución numérica (porcentaje de puntos de venta con el producto), distribución ponderada (porcentaje del volumen de ventas de la categoría cubierto), tasa de prueba y repetición de compra, awareness espontáneo y sugerido, share of voice en redes sociales, y coste de adquisición de cliente en e-commerce.

Formato de respuesta: Organiza en secciones claras con titulares, incluye ejemplos de copy para redes sociales, tabla de KPIs con objetivos a 3 y 6 meses, y timeline del lanzamiento en formato visual de texto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzar productos de alimentación saludable con estrategia de marketing digital y retail potenciada por IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software de trazabilidad alimentaria con IA y blockchain',
                'description'      => 'Diseña la arquitectura de un sistema de trazabilidad para la cadena alimentaria usando IA, IoT y blockchain para cumplir con la normativa europea y garantizar la seguridad.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de trazabilidad para la industria alimentaria y agroindustria. Tu objetivo es diseñar la arquitectura técnica de una plataforma de trazabilidad alimentaria que cubra toda la cadena: desde el origen agrícola hasta el consumidor final.

contexto: El Reglamento (CE) 178/2002 de la UE exige trazabilidad completa de todos los alimentos. La crisis de la carne de caballo en 2013 y los brotes de E. coli han demostrado la importancia de poder rastrear el origen de un alimento en menos de 24 horas. Las empresas que implementan trazabilidad avanzada reducen el coste de las retiradas de producto en un 60% y generan confianza del consumidor.

tarea 1 — Arquitectura del sistema de trazabilidad:
Define la arquitectura técnica de la plataforma: capa de captura de datos (lectores RFID en almacenes, códigos QR en origen agrícola, básculas inteligentes conectadas, sensores de temperatura en cámaras frigoríficas), capa de procesamiento y validación de datos con IA, capa de blockchain permisionado para el registro inmutable de cada transacción de la cadena, y capa de visualización para operadores, auditores y consumidores finales.

tarea 2 — Modelo de datos de trazabilidad:
Diseña el modelo de datos que representa cada eslabón de la cadena: entidad Lote (con origen, fecha de cosecha/producción, proveedor, certificaciones), entidad Transformación (materias primas utilizadas, proceso aplicado, fecha, instalación), entidad Transporte (origen, destino, temperatura registrada, tiempo de tránsito), y entidad Punto de venta (distribuidor, fecha de recepción, condiciones de almacenamiento). Define las relaciones entre entidades y los campos obligatorios por normativa.

tarea 3 — Integración de IoT para monitorización de calidad:
Explica cómo integrar dispositivos IoT en la cadena alimentaria: sensores de temperatura y humedad en cámaras frigoríficas con alertas automáticas cuando se rompe la cadena de frío, lectores RFID en las puertas de los almacenes para registro automático de entradas y salidas, básculas conectadas para verificar el peso de los lotes en cada transferencia, y cámaras con visión artificial para el control de calidad visual en líneas de producción.

tarea 4 — IA para predicción de calidad y seguridad:
Describe los modelos de IA para garantizar la seguridad alimentaria: modelo predictivo de vida útil del producto basado en las condiciones de temperatura registradas durante el transporte y almacenamiento, detección de anomalías en los datos de los sensores que puedan indicar problemas de refrigeración, clasificación automática de la calidad de materias primas a partir de imágenes (IA de visión), y predicción del riesgo de contaminación cruzada basada en el historial de incidencias de cada instalación.

tarea 5 — Portal de transparencia para consumidores:
Diseña la experiencia del consumidor final: código QR en el packaging del producto que lleva a una página web con el mapa del viaje del producto (origen, transformadores, transportistas), certificaciones verificadas (ecológico, sin gluten, origen España), condiciones de temperatura durante el transporte, y información nutricional extendida con análisis de ingredientes por IA. Define cómo hacer esta información comprensible para un consumidor no técnico.

tarea 6 — Gestión de alertas y retiradas de producto:
Define el protocolo de gestión de crisis alimentarias con el sistema: cuando se detecta un problema de seguridad en un lote, identificación automática de todos los productos afectados en toda la cadena (hacia adelante y hacia atrás), generación del listado de distribuidores y puntos de venta que recibieron el producto contaminado, comunicación automatizada a todos los actores afectados, y report para la Agencia Española de Seguridad Alimentaria (AESAN) generado automáticamente.

Formato de respuesta: Incluye el diagrama de arquitectura en ASCII, el modelo de datos en formato de entidades y atributos, y el protocolo de retirada de producto en diagrama de flujo textual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar sistemas de trazabilidad alimentaria con IA, IoT y blockchain para cumplir normativa europea',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de packaging alimentario sostenible con IA',
                'description'      => 'Crea packaging para productos alimentarios que combine atractivo visual, comunicación de claims nutricionales, sostenibilidad ambiental y cumplimiento normativo europeo.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador gráfico especializado en packaging de productos alimentarios con expertise en sostenibilidad y normativa europea de etiquetado. Tu objetivo es diseñar un sistema de packaging completo para una gama de productos de alimentación ecológica que sea visualmente atractivo, informativo y ambientalmente responsable.

objetivo: Crear un sistema de diseño de packaging para una gama de 5 productos de alimentación ecológica (aceite de oliva, conservas de tomate, legumbres, cereales y snacks) que transmita los valores de la marca (artesanal, local, sostenible) y cumpla con toda la normativa europea de etiquetado alimentario.

contexto: El consumidor actual de productos ecológicos es exigente: busca autenticidad, quiere saber de dónde viene el producto, valora el packaging sostenible y desconfía de los diseños demasiado comerciales o "greenwashing". Al mismo tiempo, el producto debe destacar en el lineal del supermercado frente a marcas con mayor presupuesto de diseño.

tarea 1 — Sistema de identidad visual de la gama:
Define el sistema de diseño de la gama completa: paleta de colores principal y colores diferenciadores por categoría de producto, tipografía principal para el nombre de marca y tipografía secundaria para claims e información nutricional, sistema de iconografía para los atributos del producto (ecológico, local, artesanal, sin gluten), y elementos gráficos que creen coherencia visual entre todos los productos de la gama.

tarea 2 — Arquitectura de la información del packaging:
Define la jerarquía de información en el frente del envase: nivel 1 (nombre de la marca, nombre del producto, cantidad neta), nivel 2 (claim principal: "100% ecológico", "origen España", "sin conservantes"), nivel 3 (imagen del producto o elemento fotográfico que evoque el origen), y código QR de trazabilidad. Para el reverso: tabla nutricional completa según Reglamento 1169/2011, lista de ingredientes, declaraciones alérgenos, y sellos de certificación (Eurohoja, IGP, etc.).

tarea 3 — Sostenibilidad del packaging:
Propón las alternativas de materiales sostenibles según el tipo de producto: vidrio reutilizable para aceite y conservas con tapón metálico estampado, cartón FSC reciclado para cereales y legumbres con ventana de celofán compostable, y bolsas de papel kraft para snacks con cierre resellable. Explica las implicaciones de cada material en el proceso de impresión, el coste de producción, y la comunicación de sostenibilidad al consumidor.

tarea 4 — IA para optimización del diseño:
Describe cómo usar IA en el proceso de diseño: generación de variaciones de la imagen principal del producto con IA generativa para seleccionar la más efectiva, análisis de eye-tracking simulado para predecir cuál es el primer elemento en el que se fija el consumidor en el lineal, test A/B digital del packaging antes de la impresión física (encuesta online con mockups), y análisis de los packagings de la competencia para identificar oportunidades de diferenciación visual.

tarea 5 — Adaptación a los distintos canales de venta:
Define cómo el packaging se adapta a cada canal: supermercado (diseño optimizado para la visibilidad en lineal, código de barras EAN-13), e-commerce (packaging secundario para resistir el transporte, fotografía del producto para Amazon y Shopify, unboxing experience), tienda especializada (packaging premium con mayor densidad de información sobre el origen y el productor), y mercado de productores (packaging mínimo, etiqueta artesanal para reforzar la autenticidad).

tarea 6 — Proceso de diseño y validación:
Define el flujo de trabajo de diseño del packaging con IA: briefing estructurado (producto, target, posicionamiento, normativa aplicable), generación de conceptos con IA en la fase de exploración, selección del concepto en workshop con el cliente, desarrollo del diseño final con todos los elementos reglamentarios, validación legal de las menciones obligatorias, pre-prensa y prueba de color, y aprobación final con checklist de cumplimiento normativo.

Formato de respuesta: Incluye el sistema de diseño en tabla con especificaciones técnicas, el checklist de cumplimiento normativo del etiquetado europeo, y el briefing de diseño en formato template reutilizable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar packaging alimentario sostenible con IA que cumpla normativa europea y destaque en el lineal',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas en distribución alimentaria con IA',
                'description'      => 'Optimiza la gestión comercial de una empresa de distribución alimentaria con IA: segmentación de clientes, rutas de ventas, gestión de promociones y predicción de demanda.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director Comercial especializado en distribución alimentaria con experiencia en grandes cuentas (retail moderno y hostelería) y canal impulso. Tu objetivo es diseñar una estrategia comercial integral potenciada por IA para una empresa distribuidora de productos alimentarios con una cartera de 800 clientes activos y 12 comerciales.

contexto: La empresa distribuye 200 referencias de alimentación seca y refrigerada a supermercados independientes, tiendas de conveniencia y restaurantes en una región con 5 provincias. Los comerciales visitan a los clientes de forma rutinaria sin priorización basada en datos. El 20% de los clientes genera el 70% del volumen y muchos clientes pequeños no se visitan con la frecuencia óptima.

tarea 1 — Segmentación de clientes con IA:
Define el modelo de segmentación de la cartera de clientes: criterios de segmentación (volumen de compra mensual, frecuencia de pedido, margen bruto generado, potencial de crecimiento, riesgo de abandono), clustering automático con IA en 4-5 segmentos con nombre, perfil y estrategia comercial diferenciada por segmento, y criterios de reclasificación automática de clientes cuando cambia su comportamiento de compra.

tarea 2 — Optimización de rutas y visitas con IA:
Diseña el sistema de optimización de rutas comerciales: algoritmo de optimización de visitas que considera frecuencia óptima por segmento de cliente, tiempo de desplazamiento, y capacidad del comercial (número de visitas por día), priorización dinámica de las visitas basada en el score de oportunidad de cada cliente (¿está en riesgo de abandono? ¿tiene potencial de venta cruzada no explotado?), y redistribución automática de la cartera cuando hay cambios en el equipo.

tarea 3 — IA para ventas cruzadas y upselling:
Explica el sistema de recomendación de productos para cada cliente: análisis de la cesta de compra de cada cliente comparada con clientes similares que compran más referencias, identificación de los productos de la cartera que el cliente no compra pero debería (basado en su tipo de negocio y lo que compran clientes similares), y generación automática de propuesta de venta cruzada para el comercial antes de cada visita, con argumentario y precio personalizado.

tarea 4 — Gestión de promociones y planificación comercial:
Define el sistema de gestión de promociones con IA: planificación del calendario promocional basado en el histórico de ventas (qué promociones funcionaron mejor, en qué épocas, con qué clientes), generación automática de la propuesta promocional personalizada por segmento de cliente, seguimiento en tiempo real de la efectividad de cada promoción (incremento de ventas, profit impact), y análisis de canibalización entre referencias promocionadas.

tarea 5 — Predicción de demanda y gestión de stock:
Diseña el modelo de predicción de demanda para la distribuidora: variables del modelo (histórico de ventas por referencia y por cliente, estacionalidad, días festivos, promociones planificadas, tendencias del mercado), integración con el sistema de pedidos a proveedores para optimizar el stock en el almacén, alertas de rotura de stock inminente con recomendación de pedido urgente, y gestión del exceso de stock con propuestas de promoción flash.

tarea 6 — KPIs comerciales y dashboard del equipo:
Define el sistema de seguimiento de la actividad comercial: métricas individuales del comercial (número de visitas realizadas vs. planificadas, tasa de conversión de propuestas, volumen vendido vs. objetivo, nuevos clientes captados, clientes recuperados), métricas de la cartera (tasa de retención de clientes, distribución de ventas por segmento, evolución del mix de producto), y dashboard diario en el móvil del comercial con su agenda optimizada y las oportunidades del día.

Formato de respuesta: Incluye el modelo de segmentación en tabla con criterios y estrategia, el dashboard del comercial con los KPIs en formato visual de texto, y el proceso de generación de propuestas de venta cruzada en pasos numerados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Optimizar la fuerza de ventas en distribución alimentaria con IA de segmentación, rutas y predicción',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de nuevos productos alimentarios con IA y consumer insights',
                'description'      => 'Lidera el desarrollo de nuevos productos de alimentación usando IA para analizar tendencias de consumo, gestionar el proceso Stage-Gate y optimizar el lanzamiento al mercado.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Innovación y Desarrollo de Producto para una empresa de alimentación de tamaño mediano. Tu objetivo es diseñar un proceso de desarrollo de nuevos productos (NPD) potenciado por inteligencia artificial que reduzca el tiempo de lanzamiento al mercado y aumente la tasa de éxito de los nuevos productos.

contexto: La empresa lanza una media de 8 nuevos productos al año, de los cuales el 60% fracasa en el primer año en el mercado. El proceso de desarrollo es lento (12-18 meses desde la idea hasta el lineal), basado en intuición más que en datos, y desconectado de las señales reales del consumidor. La competencia está acelerando su ciclo de innovación y llegando primero al mercado con las tendencias.

tarea 1 — Detección de tendencias con IA:
Define el sistema de vigilancia de tendencias de consumo: fuentes de datos a monitorizar (Google Trends, redes sociales, reseñas de Amazon en categorías adyacentes, menús de restaurantes de tendencia, publicaciones científicas sobre nutrición, datos de ventas de categorías emergentes en EE.UU. y norte de Europa como indicadores adelantados), análisis de IA para identificar tendencias en fase de crecimiento antes de que lleguen al mainstream, y generación mensual del mapa de oportunidades de innovación con scoring de cada tendencia.

tarea 2 — Proceso Stage-Gate mejorado con IA:
Diseña el proceso de desarrollo de producto con decisiones basadas en datos: Gate 0 (idea a oportunidad: filtro inicial basado en tamaño del mercado, fit con la marca y capacidades de producción), Gate 1 (oportunidad a concepto: validación cuantitativa con consumidores vía encuesta online), Gate 2 (concepto a prototipo: análisis de viabilidad técnica y financiera con simulación de P&L), Gate 3 (prototipo a test de mercado: test de producto ciego y uso en casa), y Gate 4 (lanzamiento: decisión final con previsión de ventas validada).

tarea 3 — Consumer insights con IA:
Explica cómo la IA mejora la investigación de consumidores: análisis de sentimiento de reseñas online de productos de la competencia para identificar lo que los consumidores echan de menos, segmentación automática de los consumidores entrevistados en clusters con comportamientos y motivaciones similares, análisis de los datos de un test de producto para predecir la intención de recompra y el precio máximo aceptable, y síntesis de los hallazgos de investigación cualitativa (focus groups, entrevistas) mediante transcripción y análisis automático.

tarea 4 — Formulación y optimización del producto con IA:
Describe cómo la IA apoya el desarrollo técnico del producto: diseño experimental asistido (Design of Experiments) para encontrar la formulación óptima con menos iteraciones, predicción de la vida útil del producto basada en las condiciones de almacenamiento y la formulación, optimización del coste de la formulación manteniendo el perfil sensorial objetivo, y validación nutricional automática para asegurar el cumplimiento de los claims que se quieren comunicar.

tarea 5 — Previsión de ventas del nuevo producto:
Define el modelo de forecasting para el lanzamiento: factores de entrada del modelo (tamaño del mercado objetivo, cuota de mercado objetivo, distribución numérica prevista, frecuencia de compra estimada, precio y elasticidad, inversión en marketing), modelado de distintos escenarios (pesimista, base, optimista), y calibración del modelo con los datos reales de las primeras semanas en el mercado para ajustar la previsión del año.

tarea 6 — Aprendizaje post-lanzamiento:
Diseña el proceso de aprendizaje sistemático de cada lanzamiento: métricas de seguimiento a 3, 6 y 12 meses (ventas, distribución, repeat rate, cuota de mercado), análisis de los productos que han fracasado para identificar patrones comunes, base de datos de los aprendizajes de cada lanzamiento accesible para el equipo de innovación, y proceso de decisión de continuación, reformulación o retirada del producto basado en criterios predefinidos.

Formato de respuesta: Incluye el proceso Stage-Gate en tabla con criterios de aprobación por gate, el modelo de previsión de ventas con las variables en lista, y el template de aprendizajes post-lanzamiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Acelerar el desarrollo de nuevos productos alimentarios con IA en el proceso Stage-Gate y consumer insights',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Reclutamiento y gestión de talento en agroindustria con IA',
                'description'      => 'Diseña procesos de selección para perfiles técnicos y de campo en el sector agroalimentario usando IA: agrónomos, técnicos de calidad, operarios de producción.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en el sector agroalimentario. Tu objetivo es diseñar un proceso integral de reclutamiento y gestión del talento para una empresa agroindustrial con 300 empleados que procesa y comercializa productos hortofrutícolas.

contexto: La empresa tiene una gran variabilidad en las necesidades de personal a lo largo del año debido a la estacionalidad de la producción: en temporada alta necesita hasta 150 operarios adicionales y en temporada baja tiene plantilla estable de 80 personas. Además, tiene dificultades para atraer y retener talento técnico cualificado (técnicos de calidad, agrónomos, responsables de producción) porque las condiciones de trabajo en el campo y en la fábrica no son tan atractivas como en otros sectores.

tarea 1 — Estrategia de talento diferenciada por perfil:
Define la estrategia de talento para cada tipo de perfil: talento técnico cualificado (agrónomos, ingenieros de alimentos, técnicos de laboratorio de calidad), mandos intermedios (responsables de turno, jefes de línea, supervisores de campo), y mano de obra estacional (operarios de temporada, recolectores, clasificadores). Para cada perfil describe la propuesta de valor al empleado, los canales de sourcing y los criterios de selección prioritarios.

tarea 2 — Reclutamiento de talento técnico con IA:
Explica cómo usar IA para el reclutamiento de perfiles técnicos: búsqueda en LinkedIn de agrónomos y técnicos de alimentos con las competencias específicas del sector, análisis de CVs con IA para identificar candidatos con experiencia en normativa de seguridad alimentaria (BRC, IFS, ISO 22000), scoring automático de candidatos basado en la adecuación al perfil, y programa de colaboración con universidades politécnicas y escuelas de ingeniería agronómica.

tarea 3 — Gestión de personal estacional con IA:
Diseña el sistema de reclutamiento y gestión de personal de temporada: base de datos de candidatos de temporadas anteriores con evaluación de rendimiento, comunicación automatizada para reactivar a los mejores candidatos antes de la temporada, proceso de contratación masiva en 72 horas (entrevista grupal, alta en seguridad social automatizada, uniforme y EPI), y gestión de la formación obligatoria de prevención de riesgos y manipulación de alimentos en formato e-learning con seguimiento automático.

tarea 4 — Onboarding en entornos de producción:
Define el proceso de onboarding específico para el entorno agroalimentario: formación en seguridad alimentaria y buenas prácticas de manufactura (BPM) en el primer día, asignación de un compañero mentor durante la primera semana, formación en puesto de trabajo con checklist de competencias a validar, y sistema de evaluación al final del período de prueba con criterios objetivos de desempeño en el puesto.

tarea 5 — Retención en un sector con alta rotación:
Propón estrategias de retención adaptadas al sector agroalimentario: plan de carrera visible para los operarios con posibilidad de llegar a puesto de supervisión en 3-5 años, bonificación por disponibilidad en temporada alta y recompensa por repetir en la empresa cada año, mejora de las condiciones de trabajo (climatización en almacenes, descansos adecuados, comunicación transparente de los objetivos de producción), y programa de conciliación para los trabajadores con cargas familiares que permite ajustar turnos con antelación.

tarea 6 — KPIs de RRHH adaptados al sector:
Define los indicadores clave de gestión de personas para una empresa agroalimentaria: coste de la mano de obra por tonelada producida, tasa de absentismo en temporada alta vs. baja, tiempo de cobertura de vacantes técnicas, tasa de retorno del personal de temporada de un año al siguiente, tasa de accidentes laborales (imprescindible en entornos industriales y de campo), y eNPS del personal fijo vs. eventual.

Formato de respuesta: Incluye el plan de reclutamiento estacional en calendario anual, la tabla de KPIs con objetivos y benchmarks del sector, y el programa de onboarding en checklist por días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar el reclutamiento y retención de talento en empresas agroalimentarias con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero y valoración de empresas del sector alimentario',
                'description'      => 'Evalúa la viabilidad financiera y valora empresas del sector agroalimentario: cooperativas, procesadoras y distribuidoras, usando IA para el análisis de ratios y proyecciones.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en el sector agroalimentario con experiencia en valoración de empresas, análisis de cooperativas agrarias y due diligence en operaciones de M&A en el sector de la alimentación. Tu objetivo es elaborar un análisis financiero completo de una empresa procesadora de frutas y hortalizas de tamaño mediano.

contexto: La empresa procesadora tiene una facturación de 45 millones de euros, trabaja con márgenes ajustados típicos del sector (EBITDA del 8%), tiene alta dependencia de las condiciones climáticas para el suministro de materias primas, y exporta el 40% de su producción. Un fondo de private equity está estudiando la adquisición de una participación mayoritaria.

tarea 1 — Análisis de los estados financieros históricos:
Define el proceso de análisis de los últimos 5 años de estados financieros: evolución de la cifra de negocio y análisis de sus drivers (volumen, precio, mix de producto, mercados), análisis de márgenes (bruto, EBITDA, EBIT, neto) y comparativa con benchmarks del sector agroalimentario, análisis del working capital y su estacionalidad (las necesidades de circulante en temporada alta son críticas en este sector), y evolución de la deuda financiera neta y los ratios de apalancamiento.

tarea 2 — Análisis de riesgos específicos del sector:
Identifica y cuantifica los riesgos propios del sector agroalimentario: riesgo climático (dependencia de las cosechas para el suministro de materia prima y su impacto en los costes), riesgo de concentración de clientes (ventas a grandes cadenas de distribución que tienen alto poder de negociación), riesgo regulatorio (normativa de seguridad alimentaria, etiquetado, pesticidas, normativa medioambiental), riesgo de divisas en las exportaciones, y riesgo de commodities en los precios de la materia prima.

tarea 3 — Modelo de valoración DCF:
Diseña el modelo de Discounted Cash Flow para la empresa: proyección de los flujos de caja libres para los próximos 5 años basada en las hipótesis de crecimiento del sector, los drivers operativos de la empresa y los planes estratégicos de la dirección, cálculo del WACC adaptado al sector agroalimentario (prima de riesgo de mercado, beta sectorial, coste de la deuda), valor terminal con tasa de crecimiento a perpetuidad acorde con las perspectivas del sector, y análisis de sensibilidad del valor a las hipótesis clave (tasa de crecimiento, margen EBITDA, WACC).

tarea 4 — Valoración por múltiplos comparables:
Realiza la valoración por múltiplos de transacciones comparables: selección de las transacciones de M&A comparables en el sector agroalimentario europeo de los últimos 3 años, múltiplos de valoración utilizados en el sector (EV/EBITDA, EV/Ventas, PER), ajustes al múltiplo por las características específicas de la empresa (tamaño, márgenes, crecimiento, concentración de clientes), y rango de valoración resultante con reconciliación entre el DCF y los múltiplos.

tarea 5 — Análisis de sinergias para el comprador:
Cuantifica las sinergias de la operación para el potencial comprador: sinergias de ingresos (acceso a nuevos mercados, cross-selling con el portfolio del comprador, fortalecimiento de las relaciones con clientes comunes), sinergias de costes (economías de escala en compra de materias primas, reducción de costes generales, optimización logística), sinergias de capital circulante (mejora de los plazos de cobro y pago por el mayor poder de negociación del grupo), y timeline de realización de cada sinergia.

tarea 6 — Estructura de la operación y retorno para el inversor:
Define la estructura financiera de la operación: distribución entre equity y deuda (leveraged buyout o adquisición con financiación bancaria), covenants financieros habituales en operaciones del sector, escenarios de retorno para el inversor a 5 años (TIR, múltiplo de la inversión) en función de las hipótesis de crecimiento y el múltiplo de salida, y estructura de incentivos para el equipo directivo (management buy-out, participación en el valor creado).

Formato de respuesta: Incluye las hipótesis del modelo DCF en tabla con justificación, el rango de valoración en waterfall chart textual, y el análisis de sensibilidad en matriz bidimensional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Valorar empresas agroalimentarias con DCF, múltiplos y análisis de riesgos del sector para operaciones de M&A',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo en la industria alimentaria con IA',
                'description'      => 'Gestiona el cumplimiento de la normativa alimentaria europea con IA: etiquetado, seguridad alimentaria, alérgenos, registros sanitarios y auditorías BRC/IFS.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho alimentario y regulación de la seguridad alimentaria en la Unión Europea. Tu objetivo es diseñar un sistema de gestión del cumplimiento normativo para una empresa fabricante de productos alimentarios que exporta a mercados europeos.

contexto: La empresa fabricante está sujeta a una amplia normativa: Reglamento 178/2002 (legislación alimentaria general), Reglamento 1169/2011 (información al consumidor y etiquetado), Reglamento 852/2004 (higiene alimentaria), normativas de aditivos, contaminantes y residuos de plaguicidas, y estándares de certificación privados (BRC, IFS) exigidos por los grandes distribuidores. Los incumplimientos pueden suponer retiradas de producto, multas cuantiosas y daño reputacional irreparable.

tarea 1 — Mapa regulatorio del sector alimentario:
Elabora el mapa de la normativa aplicable a una empresa de fabricación de productos alimentarios en la UE: legislación horizontal (aplicable a todos los alimentos), legislación vertical (específica para categorías como lácteos, cárnicos, bebidas), normativa de etiquetado y declaraciones nutricionales y de propiedades saludables, reglamentos de contaminantes y residuos, y normativa de materiales en contacto con alimentos (envases). Define qué organismo es responsable de la supervisión de cada área en España (AESAN, CCAA, Agencia Tributaria para el impuesto de plásticos).

tarea 2 — Sistema de gestión del etiquetado con IA:
Diseña el proceso de validación de etiquetas con IA: checklist de los elementos obligatorios del etiquetado según el Reglamento 1169/2011 (denominación del alimento, lista de ingredientes, declaración nutricional, alérgenos en negrita, cantidad neta, fecha de consumo preferente o caducidad, condiciones de conservación, nombre del fabricante), validación automática de las declaraciones nutricionales y de propiedades saludables contra la lista positiva del Reglamento 1924/2006, y análisis de IA de las etiquetas de nuevos productos antes del lanzamiento para detectar incumplimientos.

tarea 3 — Gestión de alérgenos:
Define el sistema de gestión de alérgenos basado en la normativa europea: los 14 alérgenos de declaración obligatoria y sus fuentes, evaluación del riesgo de contaminación cruzada en el proceso productivo, protocolo de limpieza y validación para cambios de producción entre referencias con y sin alérgenos, sistema de trazabilidad de alérgenos a lo largo del proceso, y revisión anual del análisis de riesgos de alérgenos con actualización de las declaraciones en el etiquetado.

tarea 4 — Preparación para auditorías BRC/IFS con IA:
Explica cómo la IA ayuda en la preparación de las auditorías de certificación: análisis de los informes de auditorías anteriores para identificar las no conformidades recurrentes, generación de los planes de acción correctiva con plazos y responsables, revisión automática de los procedimientos documentados para detectar desactualización, y simulación de auditoría (pre-auditoría) con la lista de comprobaciones que aplicará el auditor externo.

tarea 5 — Gestión de no conformidades y retiradas de producto:
Define el proceso de gestión de crisis de seguridad alimentaria: procedimiento de notificación a la autoridad competente (AESAN) en caso de riesgo para la salud del consumidor, protocolo de retirada y recuperación de producto del mercado, comunicación a los consumidores y a los medios de comunicación (estrategia de crisis con IA para redactar comunicados), y análisis de causa raíz de la no conformidad para evitar su repetición.

tarea 6 — Vigilancia regulatoria y anticipación a cambios normativos:
Propón el sistema de vigilancia regulatoria con IA: monitorización automática del Diario Oficial de la UE y del BOE para detectar cambios normativos relevantes, análisis del impacto de cada cambio normativo en los productos y procesos de la empresa, calendario de adaptación a las nuevas normas con el tiempo de transición disponible, y participación en los períodos de consulta pública para influir en la regulación en desarrollo.

Formato de respuesta: Incluye el mapa regulatorio en tabla por área con el reglamento aplicable y el organismo supervisor, el checklist de etiquetado obligatorio, y el protocolo de retirada de producto en diagrama de flujo de decisión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el cumplimiento normativo alimentario europeo con IA para etiquetado, alérgenos y auditorías',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en empresas de alimentación online con IA',
                'description'      => 'Diseña el sistema de atención al cliente para un e-commerce de alimentación: gestión de incidencias, reclamaciones de calidad, devoluciones y fidelización con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Experience especializado en e-commerce de alimentación y servicios de entrega a domicilio. Tu objetivo es diseñar un sistema integral de atención al cliente para una tienda online de productos alimentarios artesanales que recibe 500 pedidos al mes y tiene un NPS actual de 28 que necesitan elevar a 60.

contexto: Los clientes de e-commerce de alimentación son especialmente exigentes porque los productos son perecederos, las expectativas de frescura son altas, y un pedido mal gestionado puede suponer pérdida del alimento y frustración emocional (era para una cena especial, era un regalo). Los motivos de contacto más frecuentes son: estado del pedido (35%), producto llegó en mal estado (25%), pregunta sobre ingredientes o alérgenos (20%), y cambio o cancelación de pedido (20%).

tarea 1 — Canales de atención y gestión de contactos:
Define la estrategia multicanal de atención: chat en vivo en la web con IA para consultas de ingredientes y alérgenos (respuesta en menos de 30 segundos), WhatsApp Business para seguimiento de pedidos en tiempo real, email para reclamaciones formales y solicitudes de documentación, y teléfono solo para incidencias urgentes que el canal digital no puede resolver. Diseña el árbol de decisión para enrutar cada tipo de consulta al canal correcto.

tarea 2 — Gestión de incidencias de calidad con IA:
Diseña el protocolo de gestión cuando un cliente reporta un problema de calidad: flujo de recogida de información (foto del producto, número de pedido, descripción del problema), análisis automático de la foto con IA para clasificar el tipo de incidencia (producto dañado en el transporte, producto en mal estado desde el origen, error en el pedido), respuesta empática personalizada en menos de 2 horas, y solución estándar por tipo de incidencia (reenvío inmediato, reembolso, bono de descuento según gravedad).

tarea 3 — Seguimiento de pedidos proactivo con IA:
Explica el sistema de comunicación proactiva durante la entrega: confirmación del pedido con resumen de los productos y fecha de entrega estimada, notificación cuando el pedido sale del almacén con link de tracking en tiempo real, alerta si hay retraso previsto con nueva hora estimada de entrega y disculpa proactiva, confirmación de entrega con solicitud de valoración de los productos, y seguimiento 48 horas después de la entrega con receta sugerida para los productos comprados.

tarea 4 — Asistente de IA para consultas de ingredientes y alérgenos:
Define las capacidades del asistente virtual para consultas de producto: base de conocimiento con la ficha completa de todos los productos (ingredientes, alérgenos, información nutricional, métodos de producción, certificaciones ecológicas), respuesta a preguntas en lenguaje natural sobre compatibilidad con dietas especiales (vegano, celíaco, sin lactosa, diabético), y escalado a asesor humano cuando la consulta tiene implicaciones médicas o el cliente indica alergia grave.

tarea 5 — Programa de fidelización basado en la experiencia:
Propón el programa de fidelización adaptado al e-commerce de alimentación: sistema de puntos por compra con canje en futuros pedidos, caja de fidelización mensual para clientes recurrentes con productos exclusivos a precio especial, programa de referidos con descuento para el cliente que recomienda y para el nuevo cliente, y gestión proactiva de los clientes en riesgo de abandono (no han comprado en 60 días) con oferta personalizada basada en sus productos más comprados.

tarea 6 — Métricas y mejora continua del servicio:
Define el sistema de métricas del servicio al cliente para alimentación online: First Contact Resolution (porcentaje de problemas resueltos en el primer contacto), tiempo medio de primera respuesta por canal, coste de resolución por tipo de incidencia, tasa de incidencias por tipo de producto (para identificar problemas de calidad recurrentes y alertar a producción), NPS post-entrega y post-resolución de incidencia, y tasa de retención de clientes que han tenido una incidencia (indicador de la calidad de la resolución).

Formato de respuesta: Incluye el árbol de decisión de enrutamiento en formato textual, el protocolo de resolución de incidencias de calidad en tabla por tipo de problema con la solución estándar, y las métricas en tabla con objetivos y frecuencia de medición.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la atención al cliente con IA para e-commerce de alimentación: incidencias de calidad, seguimiento y fidelización',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría agroalimentaria con IA para pequeños productores',
                'description'      => 'Diseña proyectos de consultoría para ayudar a agricultores, cooperativas y pequeños productores a digitalizarse y adoptar IA en su gestión y comercialización.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor independiente especializado en transformación digital y digitalización del sector agroalimentario. Tu objetivo es diseñar una propuesta de consultoría para ayudar a una cooperativa agrícola de 80 socios productores de aceite de oliva virgen extra a mejorar su competitividad mediante la adopción de tecnología e inteligencia artificial.

contexto: La cooperativa produce 500.000 litros de aceite de oliva virgen extra al año y vende el 70% a granel a grandes envasadores, obteniendo un precio bajo que no refleja la calidad de su aceite. El 30% lo envasa y vende bajo marca propia, pero con escasa presencia online y sin capacidad de marketing. Los socios son agricultores de mediana edad con poca formación digital y resistencia al cambio.

tarea 1 — Diagnóstico de madurez digital y oportunidades:
Define la metodología de diagnóstico de la cooperativa: evaluación del estado actual en 5 dimensiones (gestión interna y administración, gestión agronómica de las parcelas, trazabilidad y control de calidad, canal de venta y marketing, y formación digital de los socios), identificación de las 3 oportunidades de mayor impacto con menor resistencia al cambio para empezar, y construcción de la hoja de ruta de digitalización a 3 años con inversión y retorno estimados.

tarea 2 — Gestión agronómica digital con IA:
Diseña el plan de adopción de agricultura de precisión: implementación de sensores de suelo y estaciones meteorológicas en las parcelas de los socios para optimizar el riego y la fertilización, uso de imágenes de satélite e IA para detectar estrés hídrico, plagas o enfermedades antes de que sean visibles, aplicación móvil para que los socios registren las labores realizadas y reciban recomendaciones de tratamiento, y cuaderno de campo digital que genera automáticamente el registro de uso de fitosanitarios exigido por la normativa.

tarea 3 — Trazabilidad y diferenciación de calidad:
Explica cómo implementar un sistema de trazabilidad que genere valor comercial: registro de datos de cada partida desde la recolección (variedad, fecha, temperatura, análisis de madurez) hasta el envasado (condiciones de extracción, filtrado, almacenamiento), código QR en el envase que muestra al consumidor el origen del aceite con las parcelas georeferenciadas en un mapa, y solicitud de certificaciones de mayor valor (DOP, agricultura ecológica, Demeter) apoyada en los datos del sistema de trazabilidad.

tarea 4 — Estrategia de comercialización directa con IA:
Define el plan de venta directa bajo marca propia: creación de la tienda online con optimización SEO para búsquedas de aceite de oliva premium, estrategia de marketing de contenidos (recetas, catas, historia del olivar) con apoyo de IA para la generación de contenido, programa de suscripción mensual de aceite de temporada (cosecha nueva) para fidelizar a los compradores, y exportación directa a consumidores europeos con logística de envío optimizada.

tarea 5 — Formación digital para los socios:
Propón el plan de formación y adopción para los socios agricultores: diagnóstico del nivel digital de cada socio, itinerario formativo personalizado por nivel (usuario básico de smartphone, usuario de aplicaciones de gestión, usuario avanzado de agricultura de precisión), formación presencial en la cooperativa con casos prácticos de la propia explotación, y designación de socios early adopters como agentes de cambio que apoyan a sus compañeros.

tarea 6 — Propuesta económica y modelo de colaboración:
Estructura la propuesta de consultoría para la cooperativa: desglose de la inversión necesaria (software de trazabilidad, sensores IoT, desarrollo de la tienda online, certificaciones, formación), fuentes de financiación disponibles (subvenciones del PERTE Agroalimentario, fondos FEADER para modernización de cooperativas, préstamos ICO para digitalización), modelo de honorarios del consultor (tarifa por proyecto + éxito ligado al incremento del precio medio del aceite vendido), y métricas de impacto a 3 años (precio medio de venta por litro, porcentaje de venta directa, ingresos generados por el canal online).

Formato de respuesta: Organiza la propuesta como un documento ejecutivo con resumen en 5 puntos, el plan de digitalización en roadmap visual de texto por trimestre, y la tabla de inversión y financiación con desglose por partida.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Desarrollar proyectos de consultoría de digitalización con IA para cooperativas y pequeños productores agroalimentarios',
                'vote_score'       => 41,
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
