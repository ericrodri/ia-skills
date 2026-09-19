<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills580Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenido para marcas de belleza con IA',
                'description'      => 'Crea campañas de marketing de contenido hiperpersonalizadas para marcas cosméticas usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing especializado en la industria cosmética y de belleza con más de diez años de experiencia trabajando con marcas como L'Oréal, Sephora, NARS y marcas indie emergentes. Tienes un profundo conocimiento de las tendencias de belleza, los ciclos de compra de consumidoras y las plataformas digitales donde vive la comunidad beauty (Instagram, TikTok, Pinterest, YouTube).

Objetivo principal: desarrollar una estrategia completa de contenido para una marca de belleza, cubriendo todos los pilares editoriales, formatos y canales de distribución.

Contexto necesario para empezar: antes de redactar la estrategia, necesito que me proporciones la siguiente información:
- Nombre y tipo de marca (lujo, masivo, indie, natural/orgánica, dermocosmética)
- Productos estrella o categorías principales (labiales, skincare, perfumería, maquillaje, cabello)
- Público objetivo (edad, estilo de vida, valores, preocupaciones de piel)
- Canales digitales activos actualmente
- Tono de comunicación deseado (aspiracional, científico, divertido, sostenible)
- Presupuesto aproximado de contenido mensual
- Estacionalidad relevante (lanzamientos, temporadas, fechas clave del sector)

Instrucción principal: con la información anterior, crea una estrategia de contenido mensual que incluya los siguientes bloques:

Bloque 1 — Análisis de posicionamiento de marca. Redacta el posicionamiento actual percibido por el consumidor y el posicionamiento deseado. Identifica los tres diferenciadores clave que el contenido debe reforzar. Señala qué marcas competidoras deben monitorearse y por qué.

Bloque 2 — Mapa de pilares de contenido. Define cinco pilares editoriales adaptados a la industria cosmética, por ejemplo: tutoriales de aplicación, educación de ingredientes, behind-the-scenes de formulación, testimonios de clientas reales y contenido de lifestyle aspiracional. Para cada pilar indica: objetivo de comunicación, tipo de formato ideal (Reel, carrusel, Story, blog, vídeo largo), frecuencia semanal recomendada y KPI principal.

Bloque 3 — Calendario editorial de 30 días. Crea un calendario detallado con al menos cuatro publicaciones por semana, especificando: fecha, canal, pilar, formato, copy principal (mínimo dos líneas), CTA, hashtags sugeridos y nota de producción.

Bloque 4 — Estrategia de UGC e influencers. Diseña un plan para integrar contenido generado por usuarias (UGC) y colaboraciones con micro y nano-influencers de belleza. Incluye criterios de selección, brief de colaboración tipo y métricas de evaluación.

Bloque 5 — Optimización por plataforma. Para cada canal activo, adapta el tono, el formato y la frecuencia. Indica las diferencias entre TikTok (entretenimiento rápido, tutoriales express) e Instagram (estética curada, comunidad fidelizada) y cómo el mismo concepto se puede atomizar en ambas plataformas.

Bloque 6 — Plan de métricas y optimización mensual. Define el cuadro de mandos con las métricas más relevantes para una marca de belleza: alcance, engagement rate, saves (en Pinterest e Instagram), visualizaciones completas de vídeo, tráfico al ecommerce y tasa de conversión atribuida al contenido orgánico. Establece umbrales de rendimiento y protocolo de revisión quincenal.

Formato de entrega: responde en secciones claramente delimitadas con encabezados. Usa listas cuando sea útil para la lectura rápida. El tono del documento debe ser profesional pero accesible para un equipo de marketing de tamaño pequeño o medio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificar un mes completo de contenido para una marca cosmética con estrategia multicanal.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de sistema de prueba virtual de maquillaje con IA',
                'description'      => 'Diseña la arquitectura técnica completa para una aplicación de prueba virtual de maquillaje impulsada por visión artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior especializado en visión por computadora, realidad aumentada y desarrollo de aplicaciones móviles para el sector retail de belleza. Tienes experiencia con proyectos de virtual try-on similares a los implementados por L'Oréal con ModiFace o Perfect Corp con YouCam.

Tarea: diseñar la arquitectura técnica completa de un sistema de prueba virtual de maquillaje para una aplicación móvil (iOS y Android) de una marca cosmética de tamaño mediano.

Contexto del sistema:
- Los usuarios deben poder ver en tiempo real cómo les quedan productos como labiales, sombras de ojos, blush y bases
- El catálogo tiene entre 200 y 500 productos con múltiples tonos cada uno
- La app debe funcionar tanto con cámara en tiempo real como con fotos subidas
- Requisito de latencia: menos de 50ms por frame para experiencia fluida
- Soporte para distintos tonos de piel, géneros y características faciales diversas
- Integración con ecommerce para compra directa desde la simulación

Instrucción detallada: desarrolla la arquitectura respondiendo a los siguientes módulos:

Módulo 1 — Stack tecnológico recomendado. Justifica la elección de frameworks de visión artificial (MediaPipe Face Mesh, ARKit, ARCore), librerías de renderizado (OpenGL ES, Metal, Vulkan), y lenguajes de backend. Explica los compromisos entre rendimiento nativo y frameworks cross-platform como Flutter o React Native.

Módulo 2 — Pipeline de detección facial y mapeo de landmarks. Describe el pipeline completo: captura de frame → detección de rostro → extracción de 468 landmarks faciales → segmentación de regiones (labios, párpados, mejillas, nariz) → proyección de textura del producto. Incluye pseudocódigo para el paso de segmentación de labios.

Módulo 3 — Motor de renderizado de color y textura. Explica cómo simular correctamente: acabados (mate, brillante, metálico, glitter), opacidad y mezcla con el tono de piel subyacente, efectos de iluminación adaptados al ambiente de la cámara. Menciona técnicas de color grading para fidelidad de color.

Módulo 4 — Gestión del catálogo de productos en tiempo real. Diseña la estructura de datos para el catálogo: formato de los assets de textura por producto/tono, sistema de cache local en el dispositivo para evitar latencia de descarga, estrategia de precarga de productos más vendidos.

Módulo 5 — Backend e integración con ecommerce. Define los endpoints de API REST o GraphQL necesarios para: servir assets de productos, registrar sesiones de prueba (analytics), conectar con el carrito de compra. Incluye consideraciones de seguridad y CDN.

Módulo 6 — Inclusividad y diversidad técnica. Explica cómo garantizar que el modelo de detección funcione correctamente para: todos los tonos de piel (escala Fitzpatrick I-VI), características faciales de distintas etnias, usuarios con accesorios (gafas, barba, maquillaje base ya aplicado). Menciona estrategias de data augmentation para el entrenamiento.

Módulo 7 — Métricas de rendimiento y plan de pruebas. Define los KPIs técnicos clave (FPS en dispositivos de gama media, tiempo de inicialización, tasa de falsos negativos en detección), y el plan de QA para validar la fidelidad de color en distintas condiciones de iluminación.

Formato de respuesta: usa diagramas ASCII para la arquitectura general, pseudocódigo donde sea útil, y listas técnicas ordenadas por prioridad de implementación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar la arquitectura de una app de virtual try-on cosmético antes de iniciar el desarrollo.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de packaging cosmético sostenible con IA',
                'description'      => 'Genera conceptos creativos de packaging para productos cosméticos que equilibren estética, sostenibilidad y funcionalidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de packaging especializado en la industria cosmética y de belleza con profundo conocimiento en materiales sostenibles, tendencias de diseño y regulaciones de etiquetado en mercados europeos y norteamericanos. Has trabajado para marcas como Aesop, Lush, Byredo y marcas de dermocosmética farmacéutica.

Objetivo: desarrollar conceptos completos de packaging para un producto cosmético nuevo, integrando sostenibilidad, identidad de marca y cumplimiento normativo.

Datos que necesito para comenzar: antes de generar los conceptos, respóndeme con la siguiente información sobre el producto:
- Tipo de producto (sérum facial, crema hidratante, labial, perfume, champú en barra, etc.)
- Cantidad de producto (volumen o peso)
- Posicionamiento de marca (lujo, natural, farmacéutico, indie, masivo)
- Valores de marca a comunicar (sostenibilidad, ciencia, tradición, modernidad, minimalismo)
- Mercado de destino principal (Europa, LATAM, Asia, global)
- Restricciones de materiales conocidas (sin plástico, refillable, sin adhesivos, etc.)
- Presupuesto de packaging por unidad (muy bajo, bajo, medio, premium)

Instrucción central: con esa información, desarrolla tres conceptos de packaging distintos que sigan esta estructura para cada uno:

Por cada concepto incluye:

Nombre del concepto y filosofía de diseño. Explica en un párrafo la idea central, la inspiración estética y el mensaje que comunica al consumidor en el punto de venta y al abrir el producto.

Selección de materiales. Especifica el material principal del envase, el material de la tapa/cierre, el material de la etiqueta y el papel de relleno o protección interior si aplica. Para cada material indica: origen (reciclado, bio-based, virgen), reciclabilidad al final de la vida, huella de carbono aproximada vs. packaging convencional equivalente, y proveedor o certificación de referencia (FSC, OK Compost, GRS).

Geometría y estructura. Describe la forma del frasco o tubo, el sistema de apertura, la ergonomía de uso, el taklk de golpe al agitar y cualquier mecanismo especial (dosificador, airless pump, refillable insert). Menciona si la estructura es compatible con maquinaria de llenado estándar o requiere línea especializada.

Sistema de etiquetado y serigrafía. Define si la información se imprime directamente sobre el envase (serigrafía, hot stamping, relieve), si va en etiqueta y el tipo (auto-adhesiva, sleeve termorretráctil, etiqueta de papel), y cómo se gestionará el etiquetado multilínea si el producto se vende en varios países.

Paleta de color y tipografía sugerida. Propón entre dos y cuatro colores con código Pantone, una familia tipográfica para el nombre del producto y otra para el texto legal, y cualquier elemento gráfico de marca (iconos, texturas, ilustraciones).

Experiencia de unboxing. Describe el momento de apertura desde la perspectiva del consumidor: lo primero que ve, el primer tacto, el olor si aplica, y el recorrido hasta acceder al producto. Este párrafo debe escribirse en segunda persona, como si fuera el copy de un vídeo de unboxing.

Cumplimiento normativo. Indica los requisitos de etiquetado obligatorios según el reglamento cosmético europeo (EC 1223/2009) o FDA para EEUU: nombre del producto, lista INCI, volumen nominal, fecha de caducidad o PAO (Period After Opening), número de lote, país de fabricación, y advertencias específicas de la categoría.

Al finalizar los tres conceptos, redacta una tabla comparativa con los criterios: coste estimado, impacto ambiental, diferenciación en lineal, complejidad de producción y alineación con valores de marca, usando puntuación del 1 al 5 para cada criterio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Generar y comparar conceptos de packaging cosmético sostenible antes de encargar prototipos.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Recomendación personalizada de productos cosméticos con IA',
                'description'      => 'Crea un sistema de recomendación conversacional para asesores de ventas en tiendas de belleza y ecommerce cosmético.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor de belleza experto con certificación en análisis de tipo de piel, colorimetría y cosmética funcional. Tienes experiencia como beauty advisor en perfumerías selectivas y en ecommerce de belleza, y conoces las técnicas de venta consultiva adaptadas a este sector donde el cliente busca tanto resultado como experiencia emocional.

Tarea principal: simular y documentar el proceso completo de asesoramiento y recomendación personalizada de productos cosméticos para diferentes perfiles de cliente.

Instrucción inicial: para cada uno de los cinco perfiles de cliente que definiré a continuación, desarrolla el flujo completo de asesoramiento siguiendo esta estructura:

Perfil 1: mujer de 28 años, piel mixta con tendencia grasa en zona T, primeras líneas de expresión, busca rutina skincare anti-edad preventiva sin gastar más de 80 euros.
Perfil 2: hombre de 42 años, piel sensible con rojeces, nunca ha usado skincare, quiere empezar con algo simple y eficaz.
Perfil 3: mujer de 55 años, piel seca y apagada post-menopausia, interesada en tratamientos con retinol y ácido hialurónico, presupuesto alto.
Perfil 4: chica de 22 años, fan del maquillaje, busca base de larga duración para piel morena con subtono cálido, acostumbrada a marcas de farmacia.
Perfil 5: cliente con piel atópica severa, alérgica a fragancias y conservantes, busca crema corporal hipoalergénica para uso diario.

Para cada perfil desarrolla los siguientes pasos:

Paso 1 — Diagnóstico inicial. Redacta las cinco preguntas de diagnóstico que harías al cliente para entender su piel, sus hábitos actuales, sus expectativas y sus restricciones (presupuesto, ingredientes a evitar, preferencias de textura). Para cada pregunta explica brevemente qué información buscas obtener con ella.

Paso 2 — Análisis del perfil. Con las respuestas imaginadas del cliente, redacta un análisis de su piel y sus necesidades en lenguaje accesible (evitando términos demasiado técnicos). Este análisis es el que compartes con el cliente para que se sienta comprendido.

Paso 3 — Recomendación de productos. Propón una rutina completa con entre tres y cinco productos, especificando: nombre del producto (puedes inventar nombres de marca ficticios realistas), ingredientes activos clave y por qué funcionan para este perfil, textura y acabado, orden de aplicación, cantidad y frecuencia de uso. Incluye una opción alternativa de menor precio para cada producto principal.

Paso 4 — Técnica de venta y manejo de objeciones. Para este perfil concreto, anticipa las dos objeciones más probables (precio, desconfianza en resultados, miedo a reacción alérgica, etc.) y redacta la respuesta ideal del asesor para cada una. Usa un tono empático, no agresivo.

Paso 5 — Seguimiento post-venta. Redacta el mensaje de seguimiento que enviarías al cliente a las dos semanas de la compra: preguntando por su experiencia, resolviendo posibles dudas y proponiendo el siguiente paso en su rutina.

Al finalizar los cinco perfiles, incluye una sección de "Principios de venta consultiva en belleza" con ocho reglas de oro que todo beauty advisor debe aplicar para convertir el asesoramiento en una experiencia memorable y fidelizadora.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Entrenar a asesores de ventas en técnicas de recomendación personalizada para clientes de belleza.',
                'vote_score'       => 51,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de portafolio de productos cosméticos con IA',
                'description'      => 'Analiza y optimiza el portafolio de productos de una marca de belleza usando frameworks de gestión de producto aplicados al sector cosmético.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior especializado en el sector de belleza y cuidado personal, con experiencia en marcas que gestionan catálogos de más de 200 referencias. Conoces los ciclos de vida del producto cosmético, la gestión de SKUs, los ritmos de lanzamiento estacionales y las decisiones de descontinuación.

Objetivo: realizar un análisis completo del portafolio de productos de una marca cosmética y generar recomendaciones estratégicas de optimización.

Contexto que necesito: para realizar el análisis necesito que me proporciones o simules los siguientes datos:
- Listado de productos con categoría, precio de venta, margen bruto aproximado, antigüedad en catálogo y ventas de los últimos 12 meses
- Tendencias de crecimiento por categoría en los últimos dos años
- NPS por línea de producto si disponible
- Capacidad de producción y lead times por proveedor
- Objetivos estratégicos de la marca para los próximos 18 meses

Instrucción principal: con esos datos, desarrolla el análisis siguiendo estos bloques:

Bloque 1 — Clasificación BCG del portafolio. Aplica la matriz de Boston Consulting Group (estrellas, vacas lecheras, interrogantes, perros) al portafolio de la marca. Para cada cuadrante, identifica los productos que caen en él y explica la lógica de clasificación con los datos disponibles. Genera una representación visual en texto (tabla ASCII) de la matriz.

Bloque 2 — Análisis de canibalización. Identifica los pares o grupos de productos que compiten entre sí por el mismo cliente objetivo y la misma ocasión de uso. Cuantifica el solapamiento estimado y propón qué hacer: diferenciar comunicación, descontinuar uno o fusionar en una versión mejorada.

Bloque 3 — Análisis de huecos en el portafolio. Identifica segmentos de mercado o necesidades del consumidor que la marca no cubre actualmente y que representan oportunidades de crecimiento. Para cada hueco detectado propón el tipo de producto que lo cubriría, el posicionamiento de precio recomendado y el time-to-market estimado.

Bloque 4 — Hoja de ruta de lanzamientos. Diseña un roadmap de 18 meses con: nuevos lanzamientos priorizados por oportunidad de negocio, reformulaciones de productos existentes que mejoran márgenes o sostenibilidad, descontinuaciones recomendadas con plan de comunicación al consumidor. Organiza el roadmap en trimestres.

Bloque 5 — KPIs de gestión de portafolio. Define el cuadro de mando mensual que el product manager debe revisar: ratio de productos activos vs. descontinuados, margen promedio ponderado del portafolio, tasa de éxito de lanzamientos (medida a 6 meses), concentración de ventas en top 10 productos, velocidad de rotación por categoría.

Bloque 6 — Plan de SKU rationalisation. Propón un proceso trimestral de revisión de SKUs para evitar la proliferación descontrolada de referencias. Incluye los criterios de corte para descontinuación (umbral de ventas mínimas, margen mínimo, NPS mínimo) y el proceso de aprobación interno recomendado.

Cierra con un resumen ejecutivo de media página con las tres acciones prioritarias y el impacto esperado en margen y ventas a 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Optimizar el catálogo de productos de una marca cosmética eliminando referencias de bajo rendimiento y priorizando nuevos lanzamientos.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Formación de equipos de ventas en retail de belleza con IA',
                'description'      => 'Diseña programas de onboarding y formación continua para equipos de asesores de belleza en perfumerías y grandes almacenes.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de formación y desarrollo de talento especializado en el sector retail de belleza. Has diseñado programas de capacitación para beauty advisors, fragrance specialists y skincare consultants en cadenas como El Corte Inglés, Sephora, Douglas y boutiques de lujo independientes.

Tarea: diseñar un programa completo de formación para el equipo de ventas de una perfumería o sección de belleza, cubriendo tanto el onboarding inicial como la formación continua.

Contexto necesario: antes de redactar el plan, necesito saber:
- Tamaño del equipo (número de personas)
- Perfil de los asesores (experiencia previa, formación, edades aproximadas)
- Marcas representadas y categorías de producto (skincare, perfumería, maquillaje, capilar)
- Canales de venta (solo tienda física, omnicanal con ecommerce y chat)
- Tiempo disponible para formación (horas semanales dedicadas a training)
- Objetivos de ventas y KPIs que se miden actualmente

Instrucción central: con esa información, desarrolla el programa de formación completo:

Módulo A — Onboarding de 30 días para nuevos asesores. Crea un plan semana a semana para los primeros 30 días de un nuevo beauty advisor. Incluye: semana 1 (cultura de empresa, valores de marca, política de atención al cliente, conocimiento del espacio físico y el sistema de punto de venta), semana 2 (formación de producto por categoría, rutinas de demostración, higiene en testadores), semana 3 (técnicas de venta consultiva aplicadas a la belleza, manejo de objeciones frecuentes, cierre de venta y upsell), semana 4 (simulacros de atención al cliente, evaluación práctica, plan de desarrollo individual). Para cada semana indica actividades concretas, materiales necesarios y cómo medir el aprendizaje.

Módulo B — Formación técnica de producto. Diseña la estructura de las fichas de formación de producto que cada asesor debe dominar. La ficha debe incluir: descripción de la marca y su historia, ingredientes clave y sus beneficios en lenguaje accesible al consumidor, tipo de piel o perfil de cliente ideal, rutina de uso paso a paso, puntos de diferenciación frente a competidores y los tres argumentos de venta más poderosos.

Módulo C — Habilidades de venta y experiencia de cliente. Crea un módulo de 4 horas sobre técnicas de venta adaptadas a la belleza: el método GREET-PROBE-PRESENT-CLOSE adaptado a la asesoría cosmética, técnicas de escucha activa para identificar la motivación emocional de compra (autoestima, regalo, ritual, novedad), cómo hacer una demostración de producto memorable, cómo gestionar clientes indecisos y clientes difíciles.

Módulo D — Venta omnicanal y digital. Para equipos que también atienden por chat, WhatsApp o videollamada: adaptar el lenguaje de asesoramiento al canal escrito, técnicas de asesoramiento de tono de piel y color sin ver al cliente en persona, uso de herramientas de virtual try-on para facilitar la compra online.

Módulo E — Evaluación y desarrollo continuo. Define el sistema de evaluación trimestral: mystery shopper, auditoría de métricas de venta individuales, evaluación de conocimiento de producto. Propón un plan de incentivos de formación (badges digitales, reconocimiento, vinculación con bonus).

Entrega final: un documento estructurado con los cinco módulos, un cronograma anual de formación continua (al menos 8 sesiones de actualización al año) y una plantilla de plan de desarrollo individual para cada asesor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estructurar el onboarding y la formación continua de un equipo de asesores de belleza en retail.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de marcas de belleza con IA',
                'description'      => 'Realiza análisis de rentabilidad, márgenes y proyecciones financieras para empresas del sector cosmético.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en el sector de bienes de consumo, con enfoque específico en la industria cosmética y de cuidado personal. Tienes experiencia en el análisis de marcas de diferentes tamaños, desde startups de beauty independientes hasta multinacionales cotizadas como Estée Lauder Companies o L'Oréal Group.

Objetivo: realizar un análisis financiero completo de una empresa del sector cosmético, identificando palancas de rentabilidad y áreas de mejora.

Datos de entrada necesarios: para el análisis necesitas que me proporciones o que simulemos los siguientes estados financieros de los últimos dos ejercicios:
- Cuenta de resultados (ventas netas, coste de ventas, margen bruto, gastos de marketing, gastos de distribución, EBITDA, resultado neto)
- Balance simplificado (activo corriente, inventario, cuentas por cobrar, activo fijo, deuda financiera)
- Información sobre canales de venta (porcentaje de retail, ecommerce propio, marketplaces, B2B)
- Número de SKUs activos y precio medio de venta

Instrucción principal: desarrolla el análisis financiero completo siguiendo estos bloques:

Bloque 1 — Análisis de márgenes por capa. Calcula y comenta: margen bruto (objetivo sector: 60-75% para marcas mid-market, 80%+ para lujo), margen de contribución por canal de venta, EBITDA margin y comparativa con benchmarks del sector. Identifica si los márgenes son consistentes con el posicionamiento de marca o si hay desajustes que requieren corrección.

Bloque 2 — Análisis de la estructura de costes. Desglosa el coste total en: coste de materiales y fabricación (COGS), inversión en marketing como porcentaje de ventas (benchmark sector: 15-25% para marcas en crecimiento), gastos de distribución y logística, gastos generales y de administración. Señala qué partidas están por encima o debajo del benchmark y qué implicaciones tiene.

Bloque 3 — Análisis de capital circulante y liquidez. Calcula el ciclo de conversión de efectivo, los días de inventario (benchmark cosmético: 60-90 días para distribución masiva, hasta 180 para perfumería selectiva), los días de cobro a clientes y los días de pago a proveedores. Evalúa el riesgo de tensión de liquidez.

Bloque 4 — Modelo de proyección a tres años. Construye tres escenarios (conservador, base, optimista) con los siguientes supuestos variables: tasa de crecimiento de ventas, evolución del margen bruto por eficiencia en compras o mix de producto, inversión incremental en marketing y su efecto en ventas, impacto de apertura de nuevos canales o mercados geográficos. Presenta los escenarios en tabla con las métricas clave por año.

Bloque 5 — Análisis de rentabilidad por línea de producto. Propón la metodología de costes ABC para asignar los gastos indirectos a cada línea de producto y calcular su margen de contribución real. Explica cómo implementarla paso a paso con los datos disponibles.

Bloque 6 — KPIs financieros del sector cosmético. Define y explica los indicadores más relevantes para esta industria: Sell-through rate (para gestión de inventario retail), Customer Acquisition Cost por canal, Customer Lifetime Value por canal, Revenue per SKU, y Break-even point para nuevos lanzamientos. Para cada KPI indica cómo calcularlo y cuál es el umbral deseable.

Cierra con un memo ejecutivo de media página con el diagnóstico financiero global, las tres palancas prioritarias de mejora de rentabilidad y el impacto estimado de cada acción en el EBITDA a 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Analizar la salud financiera de una empresa cosmética e identificar palancas de mejora de rentabilidad.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance regulatorio en industria cosmética con IA',
                'description'      => 'Navega el marco regulatorio europeo y global para la comercialización de productos cosméticos con asistencia de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de asuntos regulatorios especializado en la industria cosmética, con dominio del Reglamento Europeo de Cosméticos EC 1223/2009, la regulación FDA 21 CFR Part 700 para Estados Unidos, el sistema de notificación de China (CSAR), y el marco normativo de América Latina (INVIMA Colombia, COFEPRIS México, ANMAT Argentina). Asesoras a marcas independientes y pymes que quieren comercializar en múltiples mercados.

Tarea: guiar el proceso de compliance regulatorio completo para el lanzamiento de un producto cosmético en el mercado europeo como primer mercado, con extensión posterior a otros mercados.

Contexto del producto: necesito que me des la siguiente información antes de empezar:
- Tipo de producto y descripción de la fórmula (puede ser genérica: emulsión O/W con activos hidratantes, sérum con vitamina C al 15%, etc.)
- País de fabricación
- Mercado de lanzamiento prioritario
- Canales de distribución (retail, ecommerce, farmacia, parafarmacia)
- Fecha objetivo de lanzamiento
- Si es marca propia o producto de marca blanca (private label)

Instrucción detallada: con esa información desarrolla la guía de compliance siguiendo estos bloques:

Bloque 1 — Persona responsable y estructura legal. Explica el concepto de Persona Responsable según el Reglamento EC 1223/2009, quién puede serlo (fabricante europeo, importador designado, persona física o jurídica establecida en la UE), cuáles son sus obligaciones legales y qué ocurre cuando la marca es extracomunitaria. Propón la estructura óptima para una marca de fuera de la UE que quiere comercializar en Europa.

Bloque 2 — Expediente técnico del producto (PIF). Detalla los documentos que debe contener el Product Information File: descripción del producto, fórmula cuantitativa y cualitativa, descripción del método de fabricación y certificación GMP (ISO 22716), evaluación de la seguridad firmada por Evaluador Cualificado, evaluación del efecto del producto, datos sobre los efectos no deseados graves, información sobre las pruebas realizadas. Para cada documento indica quién lo elabora típicamente y cuánto tiempo lleva.

Bloque 3 — Lista INCI y restricciones de ingredientes. Explica el proceso de verificación de ingredientes contra los Anexos del Reglamento EC 1223/2009: Anexo II (sustancias prohibidas), Anexo III (sustancias restringidas con condiciones de uso), Anexo IV (colorantes permitidos), Anexo V (conservantes permitidos), Anexo VI (filtros UV permitidos). Propón un checklist de verificación de ingredientes que el formulador debe completar antes de enviar la fórmula al evaluador.

Bloque 4 — Notificación CPNP. Explica paso a paso el proceso de notificación en el Portal de Notificación de Productos Cosméticos (CPNP) de la Comisión Europea: quién puede acceder, qué información se introduce, plazo antes de la comercialización y gestión de notificaciones para varios mercados de la UE. Menciona las particularidades para el Reino Unido post-Brexit.

Bloque 5 — Etiquetado conforme al Reglamento. Redacta las reglas de etiquetado obligatorio con ejemplos: nombre o denominación del producto, contenido nominal, fecha de duración mínima o PAO (Period After Opening con símbolo de tarro abierto), precauciones de uso, número de lote, país de fabricación, Persona Responsable, lista INCI. Indica el tamaño mínimo de letra exigido y las lenguas requeridas por país.

Bloque 6 — Cosmetovigilancia y vigilancia post-comercialización. Explica la obligación de establecer un sistema de cosmetovigilancia: recogida y análisis de efectos no deseados graves (SAUE), notificación a autoridades competentes, plazos de notificación (10 días para SAUE), registro interno de reclamaciones y procedimiento de retirada de producto si es necesario.

Bloque 7 — Expansión a otros mercados. Para los mercados de EEUU, China y México, resume los tres principales requisitos diferenciales respecto a la UE para el mismo producto, con el coste y el tiempo estimado de tramitación en cada mercado.

Nota importante: este análisis es orientativo y de carácter informativo. La validación final debe realizarse siempre con un consultor regulatorio o abogado especializado y con el Evaluador de Seguridad Cualificado responsable del producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Guiar el proceso de registro y compliance de un producto cosmético para su lanzamiento en la UE.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en ecommerce de belleza con IA',
                'description'      => 'Diseña flujos de atención al cliente y guiones de respuesta para las consultas más frecuentes en tiendas online de cosmética.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en customer experience para ecommerce de belleza y cuidado personal. Has implementado sistemas de atención al cliente para tiendas online de cosmética con catálogos de más de 300 referencias, gestionando consultas por chat en vivo, email, WhatsApp y redes sociales. Conoces las particularidades del cliente de belleza online: alta exigencia, sensibilidad al tono de piel y al resultado, y comparación constante con otras marcas.

Tarea: diseñar el sistema completo de atención al cliente para un ecommerce de belleza, incluyendo guiones, flujos y protocolos para las situaciones más frecuentes.

Instrucción central: desarrolla los siguientes componentes del sistema de atención al cliente:

Componente 1 — Mapa de tipologías de consulta. Lista y describe las 15 consultas más frecuentes en ecommerce de belleza, agrupadas en categorías: consultas pre-compra (tono de piel, textura, compatibilidad con alergias, diferencias entre productos), consultas de pedido y logística (estado del envío, plazos, seguimiento), consultas post-compra (cómo usar el producto, reacciones adversas leves, decepción con el resultado), devoluciones y reclamaciones (producto defectuoso, color diferente al mostrado en web, alergia grave). Para cada consulta indica: prioridad de respuesta (urgente, normal, diferida), canal más adecuado y tono recomendado.

Componente 2 — Guiones de respuesta para las 10 consultas más frecuentes. Para cada consulta redacta: la respuesta tipo en menos de 150 palabras, las variantes de tono (amigable para redes sociales, más formal para email), las preguntas de seguimiento si la consulta requiere más información del cliente, y el paso de escalado si la respuesta estándar no resuelve el problema. Las respuestas deben ser empáticas, precisas y reflejar la cultura de una marca que cuida la experiencia de cliente.

Componente 3 — Protocolo de gestión de reacciones adversas. Diseña el árbol de decisión para gestionar cuando un cliente comunica una reacción adversa a un producto: nivel 1 (irritación leve, picor, rojez transitoria), nivel 2 (reacción más intensa, persistente, que requiere suspender el uso), nivel 3 (reacción grave que requiere atención médica). Para cada nivel define: las preguntas obligatorias a hacer al cliente, el mensaje de respuesta inmediata, el protocolo interno de reporte, la política de devolución aplicable y si se activa la obligación de notificación de efecto adverso grave (SAUE) según la normativa cosmética.

Componente 4 — Flujo de devoluciones y reembolsos. Documenta el proceso de devolución paso a paso desde la perspectiva del agente de atención: verificación de elegibilidad (plazo, condición del producto, motivo), comunicación al cliente del proceso y plazos, coordinación con logística, gestión en el sistema de pedidos, y mensaje de cierre con la confirmación del reembolso. Incluye cómo gestionar los casos de clientes que alegan defecto del producto pero el historial de pedidos o las imágenes enviadas no lo confirman.

Componente 5 — Gestión de reseñas negativas en plataformas digitales. Proporciona guiones de respuesta pública para los cinco tipos de reseña negativa más frecuentes en Google My Business, Trustpilot y redes sociales: producto no cumplió expectativas de resultado, problema de logística, error en el pedido, reacción adversa leve, precio percibido como elevado. Cada respuesta pública debe: reconocer la experiencia del cliente, ofrecer solución concreta, redirigir al canal privado y no comprometer posición legal de la empresa.

Componente 6 — KPIs de atención al cliente en belleza online. Define el cuadro de métricas mensual: tiempo de primera respuesta por canal (objetivo: menos de 1 hora en chat, menos de 4 horas en email), tasa de resolución en primer contacto, CSAT por tipo de consulta, tasa de devoluciones por categoría de producto, porcentaje de reseñas respondidas. Para cada KPI indica el umbral de alerta que debe activar una revisión del protocolo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estandarizar la atención al cliente de una tienda online de cosméticos con guiones y protocolos listos para usar.',
                'vote_score'       => 58,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de branding para marcas de belleza independientes con IA',
                'description'      => 'Desarrolla la identidad de marca completa para una marca cosmética indie usando IA como asistente de estrategia y creatividad.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de branding independiente especializado en marcas de belleza y cuidado personal de nicho. Has trabajado con fundadoras de marcas indie que parten de cero, desarrollando desde el naming hasta la estrategia de comunicación y el tono de voz. Entiendes el contexto económico de una pyme o solopreneur que necesita decisiones de marca con presupuesto limitado pero aspiración de calidad premium.

Tarea: desarrollar la estrategia de branding completa para una marca cosmética independiente que está empezando, cubriendo desde el propósito hasta los elementos de identidad visual y verbal.

Contexto inicial necesario: antes de empezar necesito que me cuentes:
- El producto o línea de productos con los que empiezas
- La historia personal detrás de la marca (por qué la fundas, qué problema resuelves)
- Tres palabras que describen cómo quieres que se sienta alguien cuando usa tu producto
- Quién es tu cliente ideal (aunque sea una descripción aproximada)
- Qué marcas admiras y por qué (pueden ser de belleza o de otros sectores)
- Tu presupuesto inicial de lanzamiento (muy bajo, bajo, medio) y los canales donde vas a vender primero

Instrucción principal: con esa información, desarrolla la estrategia de branding completa en los siguientes bloques:

Bloque 1 — Propósito, misión y valores de marca. Redacta el propósito de marca (el "por qué" más profundo que va más allá del beneficio funcional del producto), la misión (qué hace la marca concretamente para cumplir ese propósito) y tres a cinco valores de marca con su significado específico para esta empresa. Incluye la promesa de marca en una sola frase memorable.

Bloque 2 — Posicionamiento y público objetivo. Define el público objetivo con un perfil detallado: datos demográficos, estilo de vida, valores, relación con la belleza, marcas que ya compra, contenido que consume. A partir de ese perfil, escribe el posicionamiento en formato "Para [quién], [nombre de marca] es la [categoría] que [beneficio único] porque [razón para creer]". Explica por qué este posicionamiento es sostenible y difícil de copiar.

Bloque 3 — Naming y tagline. Propón cinco opciones de nombre de marca para la empresa, explicando para cada una: etimología o inspiración, connotaciones en español e inglés, disponibilidad probable como dominio .com y en redes sociales, y cómo suenan en boca de una clienta recomendándola a una amiga. Para el nombre elegido, desarrolla tres opciones de tagline.

Bloque 4 — Identidad verbal y tono de voz. Define la personalidad de marca con el arquetipo de marca de Jung más relevante y sus características aplicadas a la comunicación. Redacta las reglas del tono de voz: cómo habla la marca (tres adjetivos), qué no dice nunca (tres prohibiciones), y cómo adapta ese tono a Instagram, a la descripción de producto en web y a los emails de atención al cliente. Incluye cinco ejemplos de copy en cada uno de esos canales.

Bloque 5 — Identidad visual (brief para diseñador). Redacta el brief visual completo que entregarías a un diseñador gráfico freelance: moodboard en palabras (describe cinco referencias visuales con una imagen mental de cada una), paleta de color propuesta con justificación emocional de cada tono, estilo tipográfico (serif clásico, sans-serif moderno, script manuscrito, etc.), estilo fotográfico para producto y lifestyle, y elementos gráficos diferenciales (patrón, sello, sello de calidad, ilustraciones botánicas, etc.).

Bloque 6 — Estrategia de lanzamiento y primeros 90 días. Con el presupuesto indicado, diseña el plan de lanzamiento: semana de pre-lanzamiento (lista de espera, contenido teaser, primeros influencers), día de lanzamiento (acciones en redes, email a lista, PR mínima), primeros 30 días (cadencia de contenido, primeras colaboraciones, recogida de feedback), días 31 a 90 (iteraciones basadas en feedback, primer pedido de reposición, consolidación de comunidad). Prioriza las acciones de mayor impacto con el menor presupuesto posible.

Entrega final: un documento de identidad de marca de 8 a 10 páginas que la fundadora pueda usar como guía interna y compartir con colaboradores, diseñadores y distribuidores potenciales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Crear la estrategia de branding completa para lanzar una marca cosmética indie desde cero.',
                'vote_score'       => 63,
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
