<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills610Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing digital para aceite de oliva con IA',
                'description'      => 'Crea campañas de marketing digital especializadas para productores y comercializadores de aceite de oliva usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing digital especializado en productos agroalimentarios de alta gama, con profundo conocimiento del sector oleícola y las tendencias de consumo gourmet.

Objetivo: Diseñar una estrategia de marketing digital completa para una marca de aceite de oliva virgen extra (AOVE) que quiere aumentar su presencia online y sus ventas directas al consumidor final.

Contexto del negocio a analizar:
- Tipo de empresa: [cooperativa oleícola / almazara familiar / marca boutique]
- Variedad principal de aceituna: [Picual / Arbequina / Hojiblanca / Cornicabra / otra]
- Mercado objetivo: [nacional / exportación Europa / exportación Asia / EE.UU.]
- Precio por botella de 500ml: [rango de precio]
- Canales actuales: [web propia / Amazon / tiendas gourmet / restauración]
- Certificaciones: [DOP / IGP / ecológico / convencional]
- Presupuesto mensual de marketing: [cantidad]

tarea 1 — Análisis del público objetivo:
Describe en detalle 3 arquetipos de cliente ideal (buyer personas) para este AOVE. Para cada persona incluye: perfil sociodemográfico, motivaciones de compra (salud, gastronomía, origen, sostenibilidad), canales digitales que usa, objeciones habituales y mensajes clave que resuenan con ella.

tarea 2 — Estrategia de contenido:
Diseña un plan de contenido para 30 días que incluya:
a) 12 publicaciones para Instagram (con descripción, hashtags y llamada a la acción)
b) 4 artículos de blog orientados a SEO sobre el AOVE (títulos, estructura y palabras clave principales)
c) 2 newsletters para la base de datos de clientes (asunto, preheader y estructura del cuerpo)
d) 1 vídeo guión de 60 segundos para Reels/TikTok sobre el proceso de cosecha o extracción

tarea 3 — Posicionamiento y diferenciación:
Redacta una propuesta de valor única (PUV) de máximo 3 frases que capture la esencia de la marca y la diferencie de competidores industriales. Incluye también 5 razones de compra emocionales y 5 racionales que se usarán en todos los materiales.

tarea 4 — Campaña de lanzamiento o temporada:
Estructura una campaña para el período de campaña oleícola (noviembre-enero) o para San Valentín / Navidad, con:
- Concepto creativo
- Mecánica de la promoción
- Textos para anuncios de Meta Ads (3 variantes de copy)
- Textos para Google Ads (2 anuncios de búsqueda)
- Email de campaña

tarea 5 — Métricas y KPIs:
Define los 8 indicadores clave que medirán el éxito de esta estrategia durante los próximos 3 meses, con los valores de referencia del sector y las acciones correctivas si no se alcanzan.

Formato de entrega: Presenta cada sección con encabezados claros, usa listas cuando sea adecuado y finaliza con un cronograma semanal de implementación para los primeros 30 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar estrategias de marketing digital para productores y comercializadores de aceite de oliva virgen extra.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Análisis de datos de producción oleícola con IA',
                'description'      => 'Usa IA para analizar datos agronómicos, de producción y de calidad en el sector del aceite de oliva y optimizar el rendimiento de la almazara.',
                'prompt_content'   => <<<'EOT'
Actúa como un científico de datos con especialización en agricultura de precisión y procesado agroalimentario, con experiencia específica en el sector oleícola.

Objetivo: Ayudarme a diseñar un sistema de análisis de datos integral para una almazara o cooperativa oleícola que quiere tomar decisiones basadas en datos para mejorar la calidad del aceite, optimizar el proceso de extracción y reducir costes operativos.

Contexto técnico:
- Volumen de producción anual: [toneladas de aceituna molturada]
- Sistema de extracción: [continuo de 2 fases / 3 fases / prensas]
- Fuentes de datos actuales: [sensores de línea / análisis de laboratorio / registros manuales]
- Software existente: [ERP / hojas de cálculo / ninguno]
- Equipo técnico: [ingenieros agrónomos / maestros almazareros / sin perfil técnico]

instrucción 1 — Arquitectura del sistema de datos:
Diseña la arquitectura de un sistema de recogida y análisis de datos para la almazara. Especifica:
a) Qué datos recoger en campo (índice de madurez, humedad, rendimiento graso estimado)
b) Qué parámetros monitorizar en tiempo real durante la molturación y extracción
c) Qué análisis fisicoquímicos y organolépticos registrar en laboratorio
d) Cómo estructurar la base de datos (esquema simplificado de tablas y relaciones)
e) Qué herramientas de bajo coste (Python, Power BI, Google Sheets con Apps Script) permiten implementarlo sin grandes inversiones

instrucción 2 — Modelos predictivos de rendimiento y calidad:
Explica cómo construir 3 modelos predictivos con los datos históricos de la almazara:
a) Predicción del rendimiento graso (kg aceite / 100 kg aceituna) en función de variedad, madurez y condiciones climáticas
b) Predicción de la acidez libre del aceite en función de parámetros de proceso
c) Clasificación automática de lotes por categoría de calidad (virgen extra, virgen, lampante) antes del análisis oficial

Para cada modelo indica: variables de entrada, algoritmo recomendado, tamaño mínimo de dataset y métricas de evaluación.

instrucción 3 — Dashboard operativo:
Define las visualizaciones clave que debe tener un dashboard para el director técnico de la almazara durante la campaña. Incluye: KPIs en tiempo real, alertas automáticas y gráficos de evolución semanal.

instrucción 4 — Trazabilidad y blockchain:
Describe cómo integrar un sistema de trazabilidad desde el olivar hasta la botella, con los datos mínimos necesarios para obtener la certificación DOP y para ofrecer un QR de trazabilidad al consumidor final.

instrucción 5 — Código de ejemplo:
Escribe un script en Python que lea un CSV con datos de análisis de laboratorio (acidez, índice de peróxidos, K270, polifenoles) y clasifique automáticamente cada muestra según la normativa vigente de categorías de aceite de oliva.

Formato de respuesta: Estructura técnica clara con secciones diferenciadas, código comentado en Python y recomendaciones priorizadas por impacto y coste de implementación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar sistemas de análisis de datos y modelos predictivos para almazaras y cooperativas oleícolas.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de packaging para aceite de oliva gourmet con IA',
                'description'      => 'Genera conceptos creativos y briefings de packaging para productos de aceite de oliva premium con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte especializado en packaging de productos agroalimentarios de lujo y gourmet, con experiencia en el mercado nacional e internacional del aceite de oliva.

Objetivo: Desarrollar el concepto creativo y el briefing completo de packaging para una nueva línea de aceite de oliva virgen extra de alta gama que quiere competir en el segmento premium nacional y en mercados de exportación (Alemania, Japón, EE.UU.).

Información del proyecto:
- Nombre de la marca: [nombre]
- Origen y territorio: [provincia / comarca / nombre del olivar]
- Variedad/es de aceituna: [variedades]
- Historia o storytelling: [legado familiar / nueva generación / proyecto agroecológico]
- Competidores de referencia: [marcas que admiras o con las que compites]
- Rango de precio final al consumidor: [precio botella 500ml]
- Formato/s de envase: [botella vidrio / lata / bag-in-box / otros]
- Valores de marca: [tradición / innovación / sostenibilidad / lujo / proximidad]

instrucción 1 — Análisis de tendencias de packaging:
Describe las 5 tendencias actuales más relevantes en packaging de aceite de oliva premium (tipografía, materiales, color, ilustración, sostenibilidad) con ejemplos de marcas internacionales de referencia y cómo se podrían adaptar al proyecto concreto.

instrucción 2 — Conceptos creativos:
Desarrolla 3 conceptos de packaging diferenciados:
- Concepto A: Minimalismo contemporáneo (para mercado alemán y nórdico)
- Concepto B: Identidad territorial y artesanal (para mercado japonés y asiático)
- Concepto C: Storytelling familiar y emocional (para mercado norteamericano)

Para cada concepto describe: paleta de colores (con códigos Pantone orientativos), tipografía recomendada, elementos gráficos principales, materiales del envase, acabados especiales (relieve, papel especial, sello de lacre, etc.) y emoción que transmite al abrirlo.

instrucción 3 — Elementos obligatorios de etiquetado:
Lista todos los elementos que deben aparecer obligatoriamente en la etiqueta de un AOVE según la normativa europea (Reglamento UE 1308/2013 y Reglamento delegado 2022/2104) y cómo integrarlos de forma elegante sin que rompan el diseño.

instrucción 4 — Briefing para diseñador:
Redacta un briefing profesional de 500 palabras que se entregaría a un diseñador gráfico externo, con todos los datos, restricciones técnicas (medidas de la etiqueta, sistema de impresión, número de tintas) y directrices creativas del concepto elegido.

instrucción 5 — Checklist de validación:
Crea una lista de verificación de 20 puntos para revisar el packaging final antes de mandarlo a imprimir, que cubra aspectos legales, técnicos, de usabilidad y de comunicación de marca.

Formato de entrega: Secciones claramente diferenciadas con los 3 conceptos presentados de forma visual con texto descriptivo, seguidos del briefing y el checklist listos para usar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear conceptos de packaging y briefings para aceite de oliva virgen extra de alta gama.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategias de venta B2B para aceite de oliva con IA',
                'description'      => 'Desarrolla argumentarios de venta y estrategias de prospección B2B para colocar aceite de oliva en restaurantes, hoteles y distribuidores con ayuda de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con más de 10 años de experiencia en la venta de productos agroalimentarios premium en canal HORECA (hoteles, restaurantes y catering) y en grandes superficies especializadas.

Objetivo: Crear un sistema completo de venta B2B para una almazara o marca de aceite de oliva virgen extra que quiere expandir su presencia en el canal profesional.

Información comercial:
- Tipo de producto: [AOVE monovarietal / coupage / ecológico / DOP]
- Formato para HORECA: [garrafa 5L / botella 750ml / dosificadores / sobres monodosis]
- Precio por litro para HORECA: [precio]
- Zona geográfica de actuación: [provincia / comunidad autónoma / nacional]
- Cartera actual de clientes B2B: [número aproximado]
- Equipo de ventas: [comercial en solitario / equipo de X personas]

instrucción 1 — Identificación y segmentación de clientes objetivo:
Crea una matriz de priorización de tipos de cliente B2B para este AOVE. Clasifica por: potencial de volumen, disposición a pagar precio premium, frecuencia de compra y facilidad de conversión. Incluye mínimo 8 tipos de cliente (restaurantes con estrella Michelin, bistró moderno, hotel boutique, caterings de eventos, tiendas gourmet, distribuidores regionales, etc.) con criterios de cualificación para cada uno.

instrucción 2 — Argumentario de ventas:
Desarrolla un argumentario comercial estructurado con:
a) Apertura de contacto (guión de llamada en frío de 60 segundos)
b) Preguntas de diagnóstico para descubrir necesidades (10 preguntas consultivas)
c) Presentación de beneficios (3 beneficios principales con pruebas y datos)
d) Manejo de las 5 objeciones más comunes ("ya tengo proveedor", "es muy caro", "no tengo espacio", "no sé si mis clientes lo apreciarán", "mándame info por email")
e) Técnicas de cierre adaptadas al perfil del comprador HORECA

instrucción 3 — Secuencia de prospección multicanal:
Diseña una secuencia de prospección de 8 pasos en 3 semanas que combine: LinkedIn, email personalizado, llamada telefónica y visita presencial con muestra. Redacta las plantillas de cada mensaje.

instrucción 4 — Propuesta comercial tipo:
Redacta una propuesta comercial de 1 página para un restaurante de cocina mediterránea moderna. Incluye: descripción del producto, condiciones de precio por volumen, plazos de entrega, política de devoluciones y propuesta de valor diferencial frente a marcas industriales.

instrucción 5 — CRM y seguimiento:
Diseña el flujo de etapas del pipeline de ventas B2B (desde prospecto hasta cliente recurrente) y las actividades de seguimiento recomendadas en cada etapa. Incluye los campos mínimos que deben registrarse en el CRM para cada cliente.

Formato de respuesta: Argumentario listo para usar con guiones textuales, plantillas de email/LinkedIn y un pipeline visual descrito con claridad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear argumentarios y secuencias de venta B2B para aceite de oliva en canal HORECA y distribución.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto oleícola y nuevas gamas con IA',
                'description'      => 'Aplica metodologías de product management para desarrollar y gestionar el portafolio de productos de una marca de aceite de oliva con inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager con experiencia en marcas de alimentación premium, especializado en el desarrollo de nuevas líneas de producto en el sector oleícola.

Objetivo: Desarrollar una estrategia de portafolio y un proceso de lanzamiento de nuevos productos para una marca de aceite de oliva virgen extra que quiere crecer más allá de su referencia principal.

Contexto del negocio:
- Producto estrella actual: [descripción del AOVE principal]
- Facturación anual estimada: [rango]
- Canales de venta: [ecommerce / HORECA / retail / exportación]
- Capacidad de producción: [toneladas de aceite por campaña]
- Recursos de I+D y laboratorio: [internos / externos / ninguno]

instrucción 1 — Análisis del portafolio actual y oportunidades:
Aplica la matriz BCG al portafolio actual de productos e identifica oportunidades de crecimiento. A continuación, propón 6 ideas de nuevos productos o formatos con alto potencial (ej: AOVE infusionado, aceite de cosecha temprana, formato regalo, aceite para cosmética, etc.), explicando para cada uno: mercado objetivo, diferenciación, viabilidad productiva y estimación de precio de venta.

instrucción 2 — Proceso de desarrollo de nuevo producto:
Diseña un proceso de Stage-Gate adaptado al sector oleícola con 5 etapas (descubrimiento, definición, desarrollo, validación, lanzamiento). Para cada etapa especifica: actividades clave, entregables, criterios de aprobación para pasar a la siguiente fase y equipo responsable.

instrucción 3 — Investigación de mercado express:
Diseña una encuesta de 10 preguntas para validar el interés de los consumidores en uno de los nuevos productos propuestos. Incluye la lógica de distribución de la encuesta y cómo interpretar los resultados para tomar la decisión de go/no-go.

instrucción 4 — Roadmap de producto:
Crea un roadmap de producto para los próximos 12 meses que muestre: cuándo lanzar cada referencia, qué canales se activan en cada fase y cómo gestionar la complejidad operativa sin saturar la capacidad productiva.

instrucción 5 — Métricas de producto:
Define los 10 KPIs de producto que medirás durante el primer año de vida de cada nueva referencia, con umbrales de éxito y de descontinuación del producto.

Formato de respuesta: Roadmap visual descrito en texto, plantillas de Stage-Gate y encuesta listas para usar, con recomendaciones priorizadas por impacto y urgencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar y desarrollar el portafolio de productos de una marca de aceite de oliva usando metodologías de product management.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en cooperativas oleícolas con IA',
                'description'      => 'Optimiza la gestión de personas en cooperativas y empresas del sector oleícola usando inteligencia artificial para mejorar la selección, formación y retención del equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de recursos humanos especializado en empresas agroalimentarias y cooperativas del sector oleícola, con conocimiento de la gestión de personal de temporada y equipos técnicos especializados.

Objetivo: Diseñar un sistema integral de gestión del talento adaptado a las particularidades del sector oleícola, que combine personal fijo y temporal de campaña, perfiles técnicos y administrativos.

Contexto de la organización:
- Tipo de empresa: [cooperativa / almazara familiar / empresa oleícola moderna]
- Número de empleados fijos: [número]
- Personal de temporada (campaña): [número y duración de la campaña]
- Perfiles principales: [operarios de almazara / técnicos agrónomos / administrativos / comerciales]
- Localización: [municipio / comarca]
- Retos actuales de RRHH: [rotación / dificultad de captación / falta de formación / conflictividad]

instrucción 1 — Planificación de plantilla para campaña:
Diseña un plan de necesidades de personal para la campaña oleícola (octubre-enero), incluyendo: perfil de cada puesto, número de personas, semanas de contratación, competencias necesarias y salario de referencia según convenio del sector. Incluye un cronograma de incorporaciones escalonadas.

instrucción 2 — Proceso de selección para perfiles técnicos:
Crea un proceso de selección completo para el puesto de maestro almazarero o técnico de extracción, que incluya: descripción del puesto, canales de publicación de la oferta, preguntas de entrevista por competencias (10 preguntas con guía de evaluación) y prueba técnica práctica.

instrucción 3 — Plan de onboarding y formación:
Diseña un programa de onboarding de 2 semanas para nuevos operarios de almazara y un plan de formación continua anual para el personal fijo. Incluye módulos obligatorios (PRL, calidad, normativa DOP) y optativos (sostenibilidad, digitalización).

instrucción 4 — Evaluación del desempeño:
Adapta el proceso de evaluación del desempeño a la realidad de una cooperativa oleícola. Propón: criterios de evaluación para perfiles operativos y técnicos, frecuencia de las evaluaciones, formato de la conversación de feedback y vinculación con política retributiva.

instrucción 5 — Retención y cultura organizacional:
Diseña 5 iniciativas concretas de retención y mejora del clima laboral adaptadas al sector oleícola (orgullo de pertenencia al territorio, participación en decisiones de la cooperativa, formación en agricultura de precisión, etc.) con el coste estimado y el impacto esperado en la rotación.

Formato de respuesta: Documentos y plantillas listos para usar, cronograma de campaña y recomendaciones priorizadas por impacto en la retención y productividad del equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar sistemas de gestión del talento para cooperativas y empresas del sector oleícola.',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del negocio oleícola con IA',
                'description'      => 'Usa IA para analizar la rentabilidad, costes y viabilidad financiera de una almazara, cooperativa o marca de aceite de oliva.',
                'prompt_content'   => <<<'EOT'
Actúa como un controller financiero especializado en empresas agroalimentarias, con experiencia en el análisis económico del sector oleícola y en la evaluación de inversiones en transformación agroalimentaria.

Objetivo: Construir un modelo de análisis financiero completo para una empresa del sector oleícola que permita entender la rentabilidad actual, identificar palancas de mejora y evaluar inversiones futuras.

Datos financieros base (completar con los datos reales):
- Producción propia de aceituna (kg): [cantidad]
- Aceituna molturada total (propia + de socios): [cantidad]
- Precio medio del aceite vendido (€/kg): [precio]
- Ingresos totales del último ejercicio: [importe]
- Estructura de costes principales: [mano de obra / energía / envases / comercialización / financieros]
- Deuda financiera actual: [importe y tipo]
- Inversiones en activo fijo: [valor del inmovilizado]

instrucción 1 — Estructura de costes y márgenes:
Construye la estructura de costes completa de la almazara, diferenciando entre costes fijos y variables. Calcula el coste de producción por kg de aceite, el margen bruto por canal de venta (granel, envasado propio, exportación) y el punto de equilibrio operativo.

instrucción 2 — Análisis de rentabilidad por producto y canal:
Diseña una matriz de rentabilidad que muestre el margen de contribución de cada referencia de producto (AOVE monovarietal, ecológico, coupage, aceite de oliva virgen) en cada canal de venta. Identifica los productos y canales que destruyen valor y las palancas para mejorarlos.

instrucción 3 — Flujo de caja de campaña:
Modela el flujo de caja mensual de una campaña oleícola tipo (octubre del año N a septiembre del año N+1), identificando los meses de mayor tensión de liquidez (pago de aceituna, envases, costes de campaña) y las fuentes de financiación disponibles (líneas de confirming, anticipo de ventas, ICO).

instrucción 4 — Evaluación de inversiones:
Calcula el VAN, TIR y payback de las siguientes inversiones típicas del sector:
a) Renovación de la línea de extracción continua de 2 fases
b) Instalación de paneles solares para autoconsumo energético
c) Inversión en ecommerce y marca propia (web + packaging + marketing digital)

Para cada inversión detalla: importe estimado, ahorro o ingreso adicional esperado, plazo de amortización y riesgo principal.

instrucción 5 — Dashboard financiero:
Define los 12 ratios y KPIs financieros que deben monitorizarse mensualmente en una empresa oleícola, con los valores de referencia del sector y las alertas que deben activarse cuando se desvíen.

Formato de respuesta: Plantillas de Excel descritas con fórmulas, análisis de sensibilidad para los principales drivers de rentabilidad y recomendaciones estratégicas priorizadas por impacto financiero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar la rentabilidad y estructura financiera de empresas y cooperativas del sector oleícola.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo DOP e IGP en aceite de oliva con IA',
                'description'      => 'Navega la normativa de Denominaciones de Origen Protegidas e Indicaciones Geográficas Protegidas para aceite de oliva con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor jurídico especializado en derecho agroalimentario, propiedad industrial y normativa de calidad diferenciada en el sector oleícola europeo. Tu conocimiento abarca el Reglamento (UE) n.º 1151/2012, los reglamentos de ejecución de cada DOP/IGP y la normativa nacional de aplicación.

Objetivo: Proporcionar una guía jurídica y de cumplimiento completa para una almazara o cooperativa que quiere obtener o mantener una certificación DOP o IGP para su aceite de oliva.

Contexto legal (indicar):
- DOP/IGP de interés: [nombre de la denominación]
- Estado actual: [ya inscrita / en proceso de solicitud / planteando solicitarlo]
- Tipo de operador: [productor de aceituna / almazara / envasador / los tres]
- Problemas de cumplimiento detectados: [si los hay]
- Inspección prevista: [fecha aproximada]

instrucción 1 — Requisitos de inscripción y pliego de condiciones:
Explica de forma estructurada los requisitos obligatorios para inscribirse en una DOP/IGP de aceite de oliva típica en España: zona geográfica delimitada, variedades autorizadas, prácticas agronómicas permitidas, parámetros analíticos mínimos (acidez, índice de peróxidos, polifenoles), condiciones de extracción y envasado. Diferencia entre requisitos obligatorios y voluntarios.

instrucción 2 — Proceso de certificación y auditoría:
Describe paso a paso el proceso de certificación anual ante el organismo de control (OC), incluyendo: documentación obligatoria, registros que deben mantenerse durante la campaña, plan de control interno, toma de muestras y análisis requeridos. Incluye un calendario de actividades de cumplimiento mes a mes.

instrucción 3 — Uso del logotipo DOP/IGP y etiquetado:
Detalla las normas de uso del logotipo comunitario DOP/IGP y de la contraetiqueta numerada del consejo regulador: dimensiones mínimas, colores permitidos, posición obligatoria en la botella, menciones obligatorias adicionales según el Reglamento (UE) 2022/2104 de información alimentaria.

instrucción 4 — Infracciones y régimen sancionador:
Describe las infracciones más comunes en el sector oleícola (mezcla de variedades no autorizadas, envasado fuera de zona, falsificación de certificados) y el régimen sancionador aplicable, incluyendo las consecuencias de la descertificación temporal o definitiva.

instrucción 5 — Estrategia de cumplimiento preventivo:
Diseña un programa de cumplimiento interno (compliance agroalimentario) para la almazara, con: política de calidad, procedimientos documentados, matriz de riesgos normativos, plan de formación del personal y protocolo de respuesta ante una inspección o denuncia.

Nota importante: Esta información tiene carácter orientativo. Para casos concretos, consulta siempre con un abogado especializado en derecho agroalimentario y con el consejo regulador de la DOP/IGP correspondiente.

Formato de respuesta: Guía estructurada con secciones diferenciadas, checklist de cumplimiento listo para imprimir y calendario anual de actividades normativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar el cumplimiento normativo de certificaciones DOP e IGP para aceite de oliva.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente para tiendas de aceite gourmet con IA',
                'description'      => 'Crea respuestas, guiones y flujos de atención al cliente para tiendas especializadas en aceite de oliva de calidad usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer experience especializado en el sector agroalimentario gourmet, con conocimiento profundo del aceite de oliva virgen extra y de las expectativas del consumidor de productos premium.

Objetivo: Diseñar un sistema completo de atención al cliente para una tienda especializada en aceite de oliva (física, online o ambas) que eleve la experiencia de compra y maximice la fidelización de clientes.

Contexto de la tienda:
- Tipo de tienda: [física / ecommerce / ambas]
- Productos principales: [AOVE monovarietal / coupage / ecológico / variedades regionales]
- Ticket medio: [precio]
- Volumen de pedidos online mensuales: [número]
- Canales de atención actuales: [email / WhatsApp / teléfono / chat web]
- Principal motivo de contacto de los clientes: [dudas sobre el producto / seguimiento de pedidos / reclamaciones]

instrucción 1 — Base de conocimiento del producto:
Redacta una guía de consulta rápida para el equipo de atención al cliente que incluya:
a) Diferencias entre aceite de oliva virgen extra, virgen y lampante (en lenguaje sencillo para explicar al cliente)
b) Cómo identificar un AOVE de calidad (color, aroma, sabor, etiquetado)
c) Consejos de conservación y uso en cocina
d) Qué significan los parámetros de calidad (acidez, polifenoles, cosecha temprana)
e) Respuestas a las 10 preguntas más frecuentes sobre el AOVE

instrucción 2 — Guiones de atención por canal:
Desarrolla guiones de atención al cliente para 5 situaciones habituales:
a) Cliente que quiere saber cuál es el AOVE más adecuado para su uso (ensaladas, frituras, crudo, repostería)
b) Cliente que recibe un pedido con la botella rota
c) Cliente que dice que el aceite "huele raro" o tiene mal sabor
d) Cliente que quiere hacer un regalo corporativo de lotes de empresa
e) Cliente fidelizado que quiere conocer las novedades de la nueva campaña

Para cada situación: saludo, preguntas de diagnóstico, respuesta principal y oferta de seguimiento.

instrucción 3 — Programa de fidelización:
Diseña un programa de fidelización con 3 niveles (Aficionado, Gourmand, Maestro) con los beneficios de cada nivel, los puntos o criterios de ascenso y las comunicaciones automáticas que se envían en cada momento (bienvenida, cumpleaños, aniversario, nueva campaña, cosecha temprana disponible).

instrucción 4 — Gestión de reseñas online:
Escribe plantillas de respuesta para: 5 reseñas positivas diferentes (Google, Trustpilot, Amazon), 3 reseñas negativas con quejas legítimas y 2 reseñas negativas injustas o de mala fe. Para cada plantilla indica el tono, la estructura y el objetivo de la respuesta.

instrucción 5 — Métricas de experiencia de cliente:
Define los 6 KPIs de customer experience más relevantes para esta tienda gourmet, con los valores de referencia del sector y las acciones de mejora para cada uno.

Formato de respuesta: Guiones listos para copiar y usar, programa de fidelización con descripción detallada y plantillas de respuesta a reseñas clasificadas por situación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar sistemas de atención al cliente y fidelización para tiendas especializadas en aceite de oliva gourmet.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría oleícola freelance con IA',
                'description'      => 'Estructura y potencia tu negocio de consultoría freelance especializada en el sector del aceite de oliva usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en profesionales independientes del sector agroalimentario, con experiencia en ayudar a expertos oleícolas a monetizar su conocimiento como freelances.

Objetivo: Diseñar un modelo de negocio sostenible y escalable para un profesional (agrónomo, enólogo reconvertido en oleólogo, maestro almazarero, catador certificado o técnico oleícola) que quiere ofrecer sus servicios de consultoría de forma independiente al sector oleícola.

Perfil del freelance:
- Especialidad principal: [producción / calidad / comercialización / exportación / formación / marketing oleícola]
- Años de experiencia en el sector: [número]
- Certificaciones o acreditaciones: [panel de cata COI / agrónomo colegiado / otras]
- Objetivo de ingresos mensuales: [cantidad]
- Disponibilidad semanal: [horas]
- Zona geográfica de actuación: [local / nacional / internacional remoto]

instrucción 1 — Definición de servicios y tarifas:
Diseña un catálogo de 6 servicios de consultoría oleícola con alto potencial de demanda. Para cada servicio incluye: descripción, cliente objetivo, formato de entrega (presencial, remoto, informe escrito), duración, tarifa recomendada (por hora, por proyecto o por retainer mensual) y propuesta de valor diferencial. Incluye también la justificación de las tarifas basada en el valor generado para el cliente, no en el tiempo invertido.

instrucción 2 — Estrategia de posicionamiento y marca personal:
Ayúdame a construir mi marca personal como consultor oleícola experto. Desarrolla: mi declaración de posicionamiento (1 frase), mi perfil de LinkedIn optimizado (titular, extracto de 300 palabras y 5 competencias clave), mi bio para propuestas comerciales y los 3 pilares de contenido que publicaré para atraer clientes inbound.

instrucción 3 — Captación de primeros clientes:
Diseña una estrategia de captación de los primeros 5 clientes sin presupuesto de marketing. Incluye: lista de 10 asociaciones, ferias oleícolas y redes profesionales donde debo estar presente, guión de llamada a cooperativas y almazaras, propuesta de colaboración con bodegas y queserías para servicios complementarios, y cómo ofrecer una consultoría inicial gratuita que convierta en proyecto de pago.

instrucción 4 — Propuesta comercial tipo:
Redacta una propuesta comercial de 2 páginas para una cooperativa oleícola que quiere mejorar la calidad de su aceite y acceder a mercados premium. Incluye: diagnóstico del problema, solución propuesta, metodología de trabajo, entregables, plazo, inversión y garantías.

instrucción 5 — Gestión operativa del negocio freelance:
Describe el stack de herramientas digitales mínimo (con coste) para gestionar el negocio de consultoría: CRM, facturación y contabilidad, gestión de proyectos, firma digital de contratos, videoconferencias y plataforma para alojar informes y entregables. Incluye también las cláusulas esenciales que deben aparecer en el contrato de servicios de consultoría.

Formato de respuesta: Catálogo de servicios con tarifas, propuesta comercial lista para adaptar y usar, y guía de herramientas con recomendaciones concretas de software para cada categoría.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y escalar un negocio de consultoría freelance especializada en el sector oleícola.',
                'vote_score'       => 32,
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
