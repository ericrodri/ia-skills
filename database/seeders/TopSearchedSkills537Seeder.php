<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills537Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación y posicionamiento de marca en el sector minero con IA',
                'description'      => 'Usa IA para desarrollar estrategias de comunicación efectivas para empresas del sector minero, abordando sostenibilidad, responsabilidad social y relaciones con comunidades.',
                'prompt_content'   => <<<'EOT'
Eres un estratega de comunicación corporativa con especialización en industrias extractivas y minería. Necesito tu ayuda para desarrollar una estrategia de comunicación y posicionamiento de marca para una empresa del sector minero.

objetivo: Crear una estrategia integral de comunicación que posicione a la empresa minera como un actor responsable, sostenible e innovador, abordando los desafíos únicos de reputación y relaciones con stakeholders que enfrenta esta industria.

instrucción detallada:

Diagnóstico de reputación y percepciones:
Ayúdame a realizar un diagnóstico del estado reputacional actual. Define las dimensiones a evaluar: percepción de la empresa entre comunidades locales, medios de comunicación, inversores, reguladores y ONGs. ¿Qué metodologías de análisis de sentimiento y monitoreo de menciones uso para el sector minero? ¿Qué temas son los más sensibles y cuáles representan oportunidades de diferenciación?

Narrativa corporativa para el sector minero:
Diseña la narrativa central de la empresa que permita hablar con autenticidad de los siguientes temas sin caer en greenwashing: contribución al desarrollo local y regional, gestión ambiental y planes de cierre de mina, innovación tecnológica y digitalización de operaciones, seguridad laboral y bienestar de trabajadores, y rol en la cadena de suministro de materiales críticos para la transición energética.

Estrategia de contenidos por audiencia:
Genera el plan de contenidos diferenciado para cada stakeholder clave. Para inversores: contenido sobre ESG, gestión de riesgos y perspectivas de crecimiento. Para comunidades locales: programas de desarrollo, empleo local y gestión ambiental. Para medios: posicionamiento como empresa responsable e innovadora. Para talento: cultura organizacional y desarrollo profesional en minería moderna.

Gestión de crisis de comunicación:
El sector minero enfrenta riesgos reputacionales altos: accidentes, conflictos sociales, impactos ambientales. Diseña el protocolo de comunicación de crisis para los tres escenarios de mayor probabilidad. ¿Qué mensajes clave, qué portavoces y qué canales usa en cada escenario?

Uso de IA para monitoreo y respuesta:
¿Cómo implemento un sistema de monitoreo de menciones con IA que detecte situaciones de riesgo reputacional antes de que escalen? Define las alertas clave, los umbrales de intervención y el proceso de respuesta en redes sociales y medios digitales.

Relaciones con comunidades y licencia social:
Diseña la estrategia de comunicación para construir y mantener la licencia social para operar. ¿Cómo uso canales digitales para mantener informadas y comprometidas a las comunidades del entorno de operaciones? ¿Qué tipo de contenido genera confianza y diálogo genuino?

Métricas de reputación:
Define el tablero de métricas de reputación que monitoreo mensualmente: share of voice, sentimiento en medios, nivel de confianza en encuestas de comunidades, cobertura ESG en informes de analistas y evolución del índice de licencia social.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de comunicación y gestión reputacional para empresas del sector minero',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de sistemas de monitoreo minero con IA e IoT',
                'description'      => 'Diseña e implementa plataformas de monitoreo inteligente para operaciones mineras usando IA, sensores IoT y análisis predictivo para mejorar seguridad y eficiencia operacional.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de sistemas con especialización en Industrial IoT, inteligencia artificial aplicada y sistemas de monitoreo para industrias pesadas. Necesito tu ayuda para diseñar un sistema de monitoreo inteligente para operaciones mineras.

objetivo: Desarrollar una plataforma de monitoreo en tiempo real que integre datos de sensores IoT distribuidos en la mina con modelos de IA para predicción de fallas, detección de anomalías, optimización de procesos y mejora de la seguridad operacional.

instrucción técnica completa:

Arquitectura del sistema de monitoreo:
Diseña la arquitectura de referencia para un sistema de monitoreo minero con IA. Define las capas del sistema: capa de sensores y dispositivos de campo (geomecánicos, ambientales, de equipos, de personal), capa de comunicaciones (redes en entorno subterráneo o a cielo abierto), capa de procesamiento de datos (edge computing vs cloud), capa analítica (dashboards, alertas, modelos predictivos) y capa de integración con sistemas operacionales (ERP, SCADA, dispatch).

Casos de uso prioritarios de IA en minería:
Para cada caso de uso, describe el modelo de IA recomendado, los datos de entrenamiento necesarios, las métricas de éxito y la forma de implementación:

1. Mantenimiento predictivo de equipos críticos (camiones, palas, chancadoras).
2. Detección de anomalías geomecánicas para prevención de derrumbes.
3. Monitoreo de calidad del aire y gas en labores subterráneas.
4. Optimización de despacho de flotas con ML.
5. Predicción de ley de mineral para optimización del proceso metalúrgico.

Procesamiento de datos en tiempo real:
¿Cómo proceso los flujos masivos de datos de sensores en tiempo real? Define la arquitectura de streaming (Apache Kafka, AWS Kinesis u otras alternativas), el esquema de almacenamiento de series temporales (InfluxDB, TimescaleDB) y el pipeline de detección de anomalías en tiempo real.

Conectividad en entornos mineros:
Los entornos mineros presentan desafíos únicos de conectividad. ¿Qué tecnologías de comunicación son viables en mina subterránea (leaky feeder, UWB, WiFi mesh, LTE privada)? ¿Cómo diseño el sistema para operar en modo degradado cuando se pierde conectividad?

Gestión de la seguridad personal:
Define la arquitectura del sistema de localización y monitoreo de personal en mina. ¿Cómo rastreo la ubicación de cada trabajador en tiempo real? ¿Cómo detecto situaciones de emergencia (caída, falta de movimiento, exposición a gases)? ¿Cómo activo el protocolo de evacuación automática?

Integración con gemelo digital:
¿Cómo construyo un gemelo digital de la operación minera que integre los datos de sensores con el modelo 3D de la mina? ¿Cómo uso el gemelo digital para simular escenarios de falla y planificar operaciones?

Plan de implementación por fases:
Define el roadmap de implementación en tres fases: monitoreo básico y alertas, análisis predictivo y mantenimiento, y optimización autónoma. Para cada fase indica duración estimada, inversión aproximada, hitos clave y retorno esperado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Plataforma de monitoreo inteligente para operaciones mineras con IoT e IA predictiva',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Visualización de datos geológicos y cartografía minera con IA',
                'description'      => 'Diseña dashboards y visualizaciones especializadas para datos geológicos, modelos de bloques y cartografía minera que faciliten la interpretación y toma de decisiones.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de visualización de datos con especialización en ciencias de la tierra, minería y sistemas de información geográfica (GIS). Necesito tu ayuda para diseñar visualizaciones efectivas de datos geológicos y operacionales para el sector minero.

objetivo: Crear dashboards y visualizaciones que transformen datos geológicos complejos (sondajes, modelos de bloques, leyes de mineral, estructuras geológicas) en representaciones visuales intuitivas que faciliten la toma de decisiones operacionales y de exploración.

instrucción detallada:

Tipos de datos geológicos a visualizar:
Ayúdame a entender el universo de datos que necesito representar visualmente. Para cada tipo de dato, define el reto de visualización específico: datos de sondajes (trayectorias 3D, litología por intervalo, resultados analíticos), modelos de bloques tridimensionales con ley estimada, planos de labores mineras actualizados en tiempo real, datos estructurales (fallas, contactos, alteraciones), y series temporales de producción y ley.

Principios de diseño para visualización geocientífica:
¿Qué principios específicos de diseño se aplican a la visualización geológica? Aborda: paletas de colores para litología y ley de mineral que sean intuitivas y accesibles para personas con daltonismo, jerarquía visual en mapas y secciones con múltiples capas de información, manejo del espacio 3D en representaciones 2D, y leyendas y escalas adecuadas para audiencias técnicas y no técnicas.

Dashboard operacional para geólogos:
Diseña el layout del dashboard principal para el equipo de geología. Debe mostrar en una sola vista: avance de sondajes en curso, resultados analíticos más recientes, variación de ley respecto al modelo geológico, alertas de desviación significativa, y estado de las labores de exploración. Define la jerarquía de información y la frecuencia de actualización de cada panel.

Dashboard ejecutivo para gerencia:
Para la alta gerencia, diseña una vista simplificada que muestre sin tecnicismos: estado de los recursos y reservas, avance del plan de exploración, predicción de ley de mineral para el próximo trimestre, y KPIs de cumplimiento del plan minero. ¿Cómo simplifico la complejidad geológica sin perder la información crítica para la decisión?

Uso de IA para interpretación geológica visual:
¿Cómo incorporo IA en el proceso de interpretación? Describe aplicaciones como: detección automática de anomalías en secciones geológicas, correlación automática de unidades entre sondajes, sugerencia de zonas de interés para perforación futura, y generación automática de informes geológicos a partir de los datos visualizados.

Herramientas y tecnologías:
¿Qué herramientas recomiendas para construir estas visualizaciones? Compara opciones especializadas (Leapfrog, Datamine, Micromine) con herramientas de BI generales (Power BI, Tableau, Grafana) y soluciones web personalizadas (D3.js, Three.js para 3D). ¿Cuándo usar cada una?

Accesibilidad y distribución:
¿Cómo distribuyo estas visualizaciones a usuarios en distintos niveles de la organización, incluyendo operadores en terreno con dispositivos móviles y en condiciones de conectividad limitada?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño de dashboards y visualizaciones especializadas para datos geológicos y operaciones mineras',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis de mercados de commodities mineros con IA para estrategias comerciales',
                'description'      => 'Usa IA para analizar tendencias de precios, demanda global y factores geopolíticos en mercados de commodities mineros, informando decisiones de venta y contratos de largo plazo.',
                'prompt_content'   => <<<'EOT'
Eres un trader y analista de mercados de commodities con especialización en metales y minerales industriales. Necesito tu ayuda para desarrollar un proceso de análisis de mercado con IA que informe mis decisiones comerciales en el sector minero.

objetivo: Construir un sistema de análisis de mercados de commodities que use IA para procesar grandes volúmenes de datos de precios, demanda, oferta y factores macro, generando señales comerciales y recomendaciones de estrategia de venta.

instrucción completa:

Fuentes de datos y ecosistema de información:
Identifica las fuentes de datos más relevantes para el análisis de mercados de commodities mineros. Incluye: precios spot e históricos (LME, COMEX, SGX), inventarios en almacenes de bolsa, reportes de producción y consumo por país, indicadores macroeconómicos clave (PMI industrial de China, índice de construcción, demanda de vehículos eléctricos), publicaciones de analistas (Wood Mackenzie, CRU, Roskill), y noticias y eventos geopolíticos que afectan la oferta.

Modelo de análisis de precios:
¿Cómo construyo un modelo de análisis de precios que use IA? Define las variables de entrada para predecir la dirección de precios a 30, 60 y 90 días. ¿Qué tipo de modelos son más útiles: series temporales (ARIMA, LSTM), modelos de factores fundamentales, o una combinación? ¿Cómo evalúo y calibro el modelo?

Análisis de la cadena de demanda:
Para cada commodity (cobre, litio, níquel, zinc u otro relevante para mi operación), diseña el análisis de la cadena de demanda que responde: ¿cuáles son los sectores de consumo más importantes y cómo están creciendo? ¿Qué desarrollos tecnológicos o regulatorios están transformando la demanda? ¿Cómo monitoreo los indicadores líderes de demanda en tiempo real?

Estrategia de venta y cobertura:
Basado en el análisis de mercado, ¿cómo defino la estrategia óptima de venta? Aborda: timing de ventas spot vs contratos de largo plazo, uso de instrumentos de cobertura (forwards, opciones) para gestionar el riesgo de precio, estrategia de diversificación de clientes y mercados destino, y condiciones de precio y volumen en contratos de suministro.

Análisis de competidores y oferta global:
¿Cómo monitoreó la evolución de la oferta global para anticipar movimientos de precio? Define el sistema de seguimiento de: producciones de los principales productores mundiales, proyectos en construcción y en estudio con potencial de entrar al mercado, costos de producción por operación (curva de costos de la industria), y disrupciones de oferta por conflictos, regulaciones o problemas operacionales.

Reportes automatizados con IA:
Diseña el informe semanal de mercado que genera automáticamente la IA para el equipo comercial. ¿Qué secciones incluye? ¿Qué visualizaciones son más relevantes? ¿Cómo resume los eventos de la semana y su impacto esperado en precios?

Integración con decisiones de planificación minera:
¿Cómo vinculo el análisis de mercado con el plan de producción de la mina? ¿Cuándo conviene acelerar o diferir la producción según las perspectivas de precio? ¿Cómo comunico estas recomendaciones al equipo de planificación y gerencia?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Análisis inteligente de mercados de commodities para estrategia comercial en minería',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Desarrollo de soluciones tecnológicas para digitalización minera con IA',
                'description'      => 'Diseña y prioriza el roadmap de digitalización para operaciones mineras, integrando IA, automatización y datos para mejorar productividad, seguridad y sostenibilidad.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en tecnología para industrias pesadas con experiencia en transformación digital de operaciones mineras. Necesito tu ayuda para diseñar una estrategia de digitalización y el roadmap de productos tecnológicos para una empresa minera.

objetivo: Desarrollar un roadmap de digitalización que priorice las iniciativas de mayor impacto en productividad, seguridad y sostenibilidad, definiendo los productos tecnológicos a construir o adquirir, los casos de negocio y el plan de implementación.

instrucción detallada:

Diagnóstico de madurez digital:
Ayúdame a evaluar el nivel de madurez digital actual de la operación minera. Define el modelo de madurez con cinco niveles: operaciones en papel y sistemas legacy, digitalización básica y conectividad, integración de datos y visibilidad, análisis avanzado y optimización, y autonomía y operación remota. ¿Qué preguntas y métricas uso para ubicar a la organización en este modelo?

Identificación de oportunidades de digitalización:
Para cada área operacional (exploración, planificación minera, operaciones de mina, procesamiento metalúrgico, mantenimiento, logística, medio ambiente y seguridad), identifica las tres oportunidades de digitalización de mayor impacto. Para cada oportunidad, estima el beneficio potencial en términos de reducción de costos, mejora de productividad o reducción de riesgos.

Priorización del roadmap:
Genera una matriz de priorización de iniciativas considerando: impacto en el negocio (reducción de costos, mejora de seguridad, reducción de impacto ambiental), viabilidad técnica actual, nivel de inversión requerida, tiempo hasta primeros resultados, y disponibilidad de datos para entrenar modelos de IA. Clasifica cada iniciativa en: implementar en 0-6 meses, 6-18 meses, o 18-36 meses.

Casos de negocio detallados:
Para las tres iniciativas de mayor prioridad, genera un caso de negocio que incluya: descripción del problema actual y su costo, solución tecnológica propuesta, beneficios cuantificados con supuestos explícitos, inversión requerida (capex y opex), período de retorno de la inversión, riesgos principales y cómo mitigarlos.

Gestión del cambio y adopción:
La digitalización en minería enfrenta resistencia cultural y brechas de habilidades. Define el plan de gestión del cambio para las iniciativas de mayor impacto: cómo involucro a los trabajadores en el diseño de las soluciones, qué capacitación es necesaria, cómo mido la adopción y qué mecanismos de soporte son necesarios.

Gobernanza de datos en minería:
¿Cómo establezco la infraestructura de datos necesaria para soportar las iniciativas de IA? Define la arquitectura de datos (data lake, data warehouse, data mesh), la política de calidad de datos, y el modelo de gobierno que define quién es responsable de qué datos.

Ecosistema de proveedores y build vs buy:
Para cada iniciativa, ayúdame a decidir si construyo la solución internamente, adquiero una solución existente o desarrollo una alianza con un proveedor especializado. ¿Qué criterios uso para esta decisión en el contexto minero?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Roadmap de digitalización e IA para operaciones mineras con casos de negocio',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Seguridad laboral y capacitación en minería con IA',
                'description'      => 'Implementa programas de seguridad y capacitación para trabajadores mineros potenciados con IA que predicen riesgos, personalizan el entrenamiento y mejoran la cultura de seguridad.',
                'prompt_content'   => <<<'EOT'
Eres un experto en seguridad industrial con especialización en minería y en el uso de tecnología para la prevención de accidentes. Necesito tu ayuda para diseñar un programa de seguridad laboral y capacitación potenciado con inteligencia artificial.

objetivo: Crear un programa integral de seguridad y capacitación que use IA para predecir situaciones de riesgo, personalizar el entrenamiento según el perfil de cada trabajador, detectar comportamientos inseguros en tiempo real y construir una cultura de seguridad sostenible.

instrucción completa:

Análisis del perfil de riesgo de la operación:
Ayúdame a sistematizar el análisis de riesgos con IA. Define cómo estructuro la base de datos de incidentes históricos para que la IA pueda identificar patrones. ¿Qué variables influyen en la probabilidad de accidente: turno, clima, antigüedad del trabajador, tipo de tarea, zona de la mina, carga de trabajo previa? ¿Cómo construyo un modelo predictivo de riesgo diario?

Sistema de detección de comportamientos inseguros:
¿Cómo uso visión computarizada y sensores para detectar comportamientos inseguros en tiempo real? Define los casos de uso principales: uso incorrecto de EPP (casco, arnés, guantes), proximidad peligrosa a equipos pesados, velocidad excesiva de vehículos, postura o movimiento indicativo de fatiga, y acceso a zonas restringidas. Para cada caso, indica qué tecnología es necesaria y cómo se activa la alerta.

Programa de capacitación personalizada con IA:
Diseña el programa de capacitación que usa IA para personalizar el entrenamiento según el perfil de cada trabajador. El sistema debe considerar: historial de capacitaciones previas, incidentes o casi-accidentes en los que estuvo involucrado, tarea específica que realizará en los próximos días, y nivel de experiencia y cualquier indicador de riesgo personal. ¿Cómo genera el sistema el plan de capacitación personalizado?

Formatos de capacitación innovadores:
¿Qué formatos de capacitación son más efectivos para trabajadores mineros? Aborda: realidad virtual para simulación de escenarios de riesgo, microlearning en dispositivos móviles para capacitaciones breves diarias, gamificación con desafíos de seguridad y reconocimientos, y mentoring entre pares con trabajadores experimentados.

Cultura de reporte y aprendizaje:
Uno de los principales desafíos en seguridad minera es el sub-reporte de casi-accidentes. ¿Cómo uso IA y diseño de incentivos para aumentar la cultura de reporte y aprendizaje organizacional? ¿Cómo facilito el reporte anónimo y el análisis automático de los reportes?

Métricas de seguridad y cultura:
Define el cuadro de mando de seguridad que monitoreo con IA: indicadores lagging (tasa de accidentes, severidad, días perdidos), indicadores leading (casi-accidentes reportados, inspecciones completadas, comportamientos inseguros detectados, participación en capacitaciones), y índices de cultura de seguridad.

Cumplimiento regulatorio:
¿Cómo garantizo que el programa cumpla con las regulaciones de seguridad minera aplicables en mi jurisdicción? ¿Cómo el sistema genera automáticamente los reportes requeridos por los organismos reguladores?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Programa de seguridad laboral predictiva y capacitación personalizada para trabajadores mineros',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de operaciones mineras con modelos de IA',
                'description'      => 'Construye modelos financieros avanzados para operaciones mineras que integran variabilidad geológica, precios de commodities y costos operacionales usando IA para mejorar la precisión.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en el sector minero con experiencia en modelación de proyectos extractivos y valoración de activos mineros. Necesito tu ayuda para construir modelos financieros avanzados para una operación minera usando inteligencia artificial.

objetivo: Desarrollar un modelo financiero integral para una operación minera que capture la complejidad geológica, la volatilidad de precios de commodities y la variabilidad operacional, usando IA para mejorar la precisión de las proyecciones y la gestión del riesgo financiero.

instrucción detallada:

Estructura del modelo financiero minero:
Diseña la arquitectura del modelo financiero específico para minería. A diferencia de otros sectores, el modelo minero debe integrar: el modelo geológico y de recursos (ley, tonelaje, recuperación metalúrgica), el plan minero (secuencia de extracción, ritmo de producción), el modelo de costos operacionales (AISC, C1, C2, C3), las proyecciones de precio de commodity y tasas de cambio, y la estructura de capital e impuestos aplicables.

Modelación de la incertidumbre geológica:
¿Cómo incorporo la incertidumbre geológica en el modelo financiero? Define la metodología para: simular múltiples escenarios de ley de mineral usando el modelo geoestadístico, propagar esa incertidumbre hacia las proyecciones de producción e ingresos, y cuantificar el rango de valor presente neto que resulta. ¿Cómo uso Monte Carlo o simulación de IA para este análisis?

Proyección de costos con IA:
Los costos en minería son altamente variables. ¿Cómo uso IA para mejorar la proyección de costos? Define los modelos para: predicción de consumo de energía según plan de producción, proyección de costos de mantenimiento basada en vida útil de activos, estimación de costos ambientales y de cierre, y sensibilidad de costos a variaciones en precio de insumos clave (diesel, electricidad, explosivos, acero).

Análisis de sensibilidad y escenarios:
Genera la estructura del análisis de sensibilidad estándar para un proyecto minero. ¿Cuáles son las variables de mayor impacto en el VPN: precio del metal, ley de mineral, costos operativos, tasa de descuento, tipo de cambio? ¿Cómo presento visualmente el análisis tornado y los escenarios extremos?

Valoración de activos mineros:
¿Cuáles son los métodos de valoración más adecuados para activos mineros en distintas etapas de desarrollo: exploración, prefactibilidad, factibilidad y operación? Define cuándo usar DCF, cuándo usar múltiplos de mercado (EV/Recursos, EV/EBITDA) y cuándo usar opciones reales para capturar el valor de la flexibilidad operacional.

Modelo de optimización del plan minero:
¿Cómo uso IA u optimización matemática para determinar el plan minero que maximiza el VPN dentro de las restricciones técnicas y ambientales? ¿Qué variables optimizo: secuencia de bloques a extraer, ritmo de producción anual, tamaño de la planta de procesamiento?

Reporting financiero para inversionistas:
¿Qué reportes financieros son estándar en el sector minero para comunicar con inversionistas? Define el contenido del informe técnico-económico bajo estándares internacionales (NI 43-101, JORC) y cómo la IA puede ayudar a mantenerlo actualizado y consistente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Modelación financiera avanzada para proyectos y operaciones mineras con análisis de riesgo',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento regulatorio en minería con IA y gestión documental automatizada',
                'description'      => 'Automatiza el seguimiento de obligaciones regulatorias, permisos ambientales y reportes de cumplimiento en operaciones mineras usando IA para reducir el riesgo de incumplimiento.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho minero y ambiental con experiencia en gestión de cumplimiento regulatorio para grandes operaciones extractivas. Necesito tu ayuda para diseñar un sistema de gestión de cumplimiento regulatorio con IA para una empresa minera.

objetivo: Implementar un sistema que permita gestionar de forma proactiva todas las obligaciones regulatorias, permisos y compromisos ambientales de la operación minera, usando IA para automatizar el seguimiento, generar alertas anticipadas y producir los reportes requeridos.

instrucción detallada:

Inventario de obligaciones regulatorias:
Ayúdame a construir el inventario completo de obligaciones regulatorias aplicables a una operación minera. Clasifica las obligaciones por: autoridad competente (ministerio de minería, autoridad ambiental, ente fiscal, municipio), tipo de obligación (permiso, reporte periódico, monitoreo, pago), frecuencia (diaria, mensual, trimestral, anual, ad-hoc), y consecuencia del incumplimiento (multa, suspensión, revocación de permiso).

Sistema de seguimiento de permisos:
¿Cómo gestiono el ciclo de vida completo de los permisos mineros y ambientales? Define el sistema para rastrear: fecha de otorgamiento y vencimiento, condiciones y compromisos asociados a cada permiso, estado de cumplimiento de cada condición, proceso de renovación con alertas de inicio del trámite, y historial de modificaciones.

Automatización de reportes regulatorios:
Para los reportes periódicos que debo presentar a las autoridades, ¿cómo uso IA para automatizar su elaboración? Define el proceso para: extracción automática de datos de los sistemas operacionales, validación de consistencia de los datos antes del reporte, generación del borrador del informe según el formato requerido, y revisión y aprobación por el responsable legal.

Monitoreo ambiental y alertas de cumplimiento:
La operación minera tiene compromisos de monitoreo ambiental (agua, aire, suelo, ruido, biodiversidad). ¿Cómo integro los datos de monitoreo ambiental con el sistema de cumplimiento para detectar automáticamente cuando un parámetro se acerca o supera el límite permitido? ¿Qué protocolo de respuesta activo en cada caso?

Gestión de compromisos con comunidades:
Muchos permisos incluyen compromisos sociales (empleo local, programas de desarrollo comunitario, fondos de compensación). ¿Cómo rastrea el sistema el cumplimiento de estos compromisos no regulatorios pero igualmente críticos? ¿Cómo genero reportes de cumplimiento social para presentar a las comunidades?

Base de datos de regulaciones y actualizaciones:
Las regulaciones mineras cambian frecuentemente. ¿Cómo mantengo actualizado el inventario de obligaciones cuando cambia la ley? Define el proceso de monitoreo de cambios regulatorios, evaluación de impacto en las obligaciones existentes y actualización del sistema de gestión de cumplimiento.

Preparación para auditorías e inspecciones:
¿Cómo uso el sistema para preparar la empresa ante una auditoría o inspección regulatoria? Define cómo el sistema genera el expediente de cumplimiento completo, organiza la evidencia documental de cada obligación cumplida, y prepara al equipo para responder las consultas del inspector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema de gestión de cumplimiento regulatorio minero con automatización de reportes y alertas',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico para operaciones mineras con IA y base de conocimiento especializada',
                'description'      => 'Diseña un sistema de soporte técnico inteligente para operaciones mineras que resuelve incidentes de equipos, procesos y sistemas con IA especializada en el dominio minero.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en gestión de activos y mantenimiento industrial con experiencia en soporte técnico para operaciones mineras. Necesito tu ayuda para diseñar un sistema de soporte técnico inteligente específico para el sector minero.

objetivo: Crear un sistema de soporte técnico con IA que ayude a los operadores y técnicos de mantenimiento a diagnosticar y resolver incidentes de equipos y procesos en tiempo real, reduciendo el tiempo de parada no planificada y la dependencia de expertos externos.

instrucción completa:

Base de conocimiento técnico minero:
Define la estructura de la base de conocimiento especializada que necesita el sistema. Las categorías principales son: manuales técnicos de equipos (chancadoras, molinos, correas transportadoras, equipos de perforación, camiones de extracción), procedimientos de operación y mantenimiento, historial de fallas y soluciones documentadas, diagramas de proceso y P&ID, y normas y estándares aplicables. ¿Cómo estructuro y mantengo actualizada esta base de conocimiento?

Sistema de diagnóstico asistido por IA:
Diseña el flujo de diagnóstico inteligente. Cuando un operador reporta un incidente (sonido inusual en chancadora, temperatura elevada en motor, alarma en panel de control), ¿cómo guía el sistema de IA el proceso de diagnóstico? Define el árbol de preguntas, la integración con datos de sensores en tiempo real y el proceso de confirmación del diagnóstico.

Integración con historial de mantenimiento:
¿Cómo conecta el sistema de soporte con el historial de mantenimiento del equipo (CMMS)? Para diagnosticar un problema, ¿qué información del historial es más relevante: último mantenimiento preventivo, fallas similares en el pasado, componentes reemplazados recientemente? ¿Cómo usa la IA este historial para refinar el diagnóstico?

Escalado inteligente a especialistas:
No todos los incidentes pueden resolverse localmente. Define el proceso de escalado: cuándo el sistema recomienda llamar al fabricante del equipo, cuándo escala al equipo de ingeniería interna, y cuándo activa el protocolo de parada de emergencia. ¿Cómo prepara el sistema al técnico para la llamada con el especialista, generando un resumen del incidente y el diagnóstico previo?

Soporte en condiciones adversas:
Los técnicos de mantenimiento minero trabajan en condiciones difíciles (polvo, ruido, luz baja, guantes). ¿Cómo diseño la interfaz del sistema para ser usable en estas condiciones? ¿Qué rol juegan la interacción por voz, los comandos simplificados y los dispositivos ruguerizados?

Aprendizaje continuo del sistema:
¿Cómo mejora el sistema con cada incidente resuelto? Define el proceso de retroalimentación: el técnico confirma si el diagnóstico fue correcto y documenta la solución final. ¿Cómo usa el sistema esta información para mejorar el diagnóstico de incidentes similares futuros?

Métricas de efectividad del soporte técnico:
¿Qué indicadores miden el impacto del sistema? Define las métricas principales: tiempo promedio de diagnóstico, tasa de resolución local sin escalado externo, reducción del MTTR (tiempo medio de reparación), número de paradas no planificadas evitadas por diagnóstico temprano, y satisfacción de los técnicos con el sistema.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema de soporte técnico inteligente para diagnóstico y resolución de incidentes en operaciones mineras',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría especializada en minería con IA para freelancers independientes',
                'description'      => 'Desarrolla y posiciona servicios de consultoría especializados en tecnología e IA para el sector minero, diferenciándote como experto independiente en transformación digital minera.',
                'prompt_content'   => <<<'EOT'
Eres un consultor senior independiente con especialización en tecnología e inteligencia artificial aplicada al sector minero. Necesito tu ayuda para diseñar y posicionar mis servicios de consultoría especializada en minería con IA.

objetivo: Crear un portafolio de servicios de consultoría diferenciados para el sector minero, con propuestas de valor claras, metodologías propias y estrategias de posicionamiento que me permitan competir con firmas consultoras establecidas desde mi práctica independiente.

instrucción detallada:

Definición del nicho de especialización:
El sector minero es amplio. Ayúdame a identificar el nicho donde puedo diferenciame más efectivamente como consultor independiente. Evalúa las siguientes especializaciones en función de la demanda, la competencia y el valor que puedo aportar: digitalización de operaciones mineras, gestión de datos geológicos y modelos de recursos con IA, seguridad predictiva en minería, sostenibilidad y descarbonización con tecnología, y optimización de costos operacionales con analytics. ¿Cuál recomiendas priorizar y por qué?

Portafolio de servicios especializados:
Para el nicho seleccionado, diseña los tres servicios principales que voy a ofrecer. Para cada servicio define: nombre y descripción en lenguaje de negocio (no técnico), problema que resuelve, entregables concretos, metodología diferenciada, duración típica, precio orientativo (por proyecto o por día) y perfil del cliente ideal.

Propuesta de valor diferenciada:
¿Cómo me diferencio de las grandes firmas consultoras (McKinsey, Deloitte, Accenture) y de los proveedores tecnológicos especializados en minería? Define mi propuesta única de valor como consultor independiente: combinación de expertise técnico y de negocio, velocidad de respuesta, costo-beneficio, transferencia real de conocimiento al equipo del cliente, y continuidad de la relación.

Estrategia de captación de clientes en el sector minero:
El sector minero tiene dinámicas de relación comercial particulares. ¿Cómo construyo mi red de contactos y genero oportunidades sin un equipo comercial? Define mi estrategia de: participación en conferencias y eventos del sector (PDAC, Mining Indaba, Perumin), publicación de contenido especializado en LinkedIn y medios del sector, alianzas con proveedores tecnológicos que me refieran clientes, y recomendaciones de clientes satisfechos.

Desarrollo de metodología propia:
Para posicionarme como experto, necesito una metodología propia reconocible. Ayúdame a estructurar y nombrar mi metodología para el diagnóstico y hoja de ruta de digitalización minera. ¿Cuáles son las fases, los entregables de cada fase y los criterios de éxito?

Gestión de proyectos de consultoría:
¿Cómo gestiono proyectos de consultoría minera de forma eficiente como consultor independiente? Define mis herramientas, procesos de comunicación con el cliente, gestión de cambios de alcance, y cómo garantizo la calidad de los entregables sin un equipo de revisión.

Escalabilidad de la práctica independiente:
¿Cómo escalo mi práctica sin perder el posicionamiento de experto independiente? Evalúa opciones como: formar una red de consultores asociados especializados, desarrollar productos de conocimiento escalables (cursos, guías, herramientas), o asociarme con proveedores tecnológicos como partner consultor certificado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de práctica de consultoría independiente especializada en tecnología e IA para el sector minero',
                'vote_score'       => 30,
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
