<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills597Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing industrial B2B con IA para empresas de automatización',
                'description'      => 'Aplica la IA para desarrollar estrategias de marketing B2B efectivas que posicionen soluciones de automatización industrial e Industria 4.0 ante compradores técnicos y directivos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing industrial B2B y estrategia de contenidos para el sector de la automatización industrial y la Industria 4.0. Necesito tu ayuda para desarrollar una estrategia de marketing completa impulsada por inteligencia artificial para una empresa que vende soluciones de automatización industrial a fabricantes, plantas de producción y empresas del sector manufacturero.

Contexto de la empresa:
Somos una empresa tecnológica que ofrece soluciones de automatización industrial (robots colaborativos, sistemas SCADA, integración de PLCs, gemelos digitales y plataformas de IoT industrial). Nuestro mercado objetivo son plantas de fabricación medianas y grandes en España y el sur de Europa. El proceso de compra es largo (6-18 meses), involve a múltiples decisores técnicos y económicos, y los compradores son muy escépticos ante el marketing convencional.

Objetivo de la campaña:
Diseña una estrategia de marketing B2B con IA que genere leads cualificados de directores de planta, directores de operaciones y directores de tecnología en el sector industrial.

Pilar 1 - Inteligencia de mercado con IA:
Describe cómo usar la IA para obtener inteligencia de mercado continua sobre el sector industrial. El sistema debe monitorizar: las licitaciones públicas de proyectos de digitalización industrial en España y la UE (portales de contratación pública, convocatorias de fondos europeos del programa Digital Europe y los PERTE industriales), las noticias sobre inversiones de automatización de las principales empresas industriales españolas (Seat, Inditex, Acerinox, ArcelorMittal, Repsol, grandes grupos de alimentación), las publicaciones técnicas de ingenieros y directivos industriales en LinkedIn que revelan sus prioridades actuales, y los eventos feriales del sector (Advanced Factories, SIL, EMO Hannover) donde la competencia presenta sus novedades. Define los dashboards de inteligencia que recibirá el equipo de marketing semanalmente.

Pilar 2 - Estrategia de contenido técnico con IA:
El marketing industrial requiere contenido técnico de alta credibilidad. Propón una estrategia de thought leadership basada en contenido con IA. Define los formatos más efectivos para los compradores industriales: los whitepapers técnicos (cómo estructurar un caso de estudio de automatización con datos de ROI verificables), los webinars técnicos para ingenieros de producción (qué temas concretos generan más registros en el sector), los vídeos de demostración de planta (cómo mostrar el antes y el después de una automatización de forma convincente) y los artículos en revistas especializadas del sector (Manufacturing, Automática e Instrumentación, Interempresas Robótica). Para cada formato, describe cómo la IA acelera la producción de contenido sin comprometer la precisión técnica.

Pilar 3 - Account Based Marketing (ABM) con IA:
Diseña una estrategia de ABM para los 50 prospectos más valiosos del mercado. Describe cómo usar la IA para identificar las cuentas con mayor potencial (basándose en tamaño de la planta, sector industrial, historial de inversiones en tecnología, posición en el ranking sectorial), cómo personalizar el contenido y los mensajes para cada cuenta objetivo (adaptando el caso de uso presentado al sector específico de cada prospecto), y cómo coordinar las acciones de marketing y ventas para estas cuentas de alta prioridad. Incluye las secuencias de outreach multicanal (LinkedIn, email, llamadas, visitas a feria) personalizadas con IA para cada perfil de decisor.

Pilar 4 - Generación y nurturing de leads con IA:
Propón el sistema de generación y maduración de leads para ciclos de venta largos. Describe el lead magnet más efectivo para atraer a directores de planta y operaciones (calculadora online de ROI de automatización, assessment de madurez digital, guía de justificación de inversión ante la dirección general). Diseña el programa de nurturing de 12 meses con secuencias de emails personalizados por IA, retargeting en LinkedIn y contenido progresivamente más específico y técnico. Define el sistema de lead scoring que determina cuándo un lead está suficientemente maduro para pasarlo al equipo de ventas.

Pilar 5 - Medición y optimización con IA:
Establece el sistema de medición del marketing industrial B2B. Define las métricas específicas del sector: coste por lead cualificado, tasa de conversión de lead a reunión de ventas, influencia del marketing en los deals cerrados por ventas (attribution model), velocidad del pipeline de ventas influenciado por marketing, y el LTV medio de un cliente industrial. Describe cómo la IA analiza estos datos para identificar qué contenidos y canales generan los leads de mayor calidad y acortan el ciclo de venta, y cómo implementa ajustes automáticos en las campañas de publicidad de pago.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de marketing B2B con IA para empresas de automatización industrial',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de sistemas de control industrial con IA e IoT',
                'description'      => 'Diseña e implementa sistemas de control industrial inteligentes que combinan PLCs, IoT industrial y modelos de IA para optimizar procesos de fabricación en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de sistemas de control industrial y arquitecto de soluciones IoT industrial (IIoT) con experiencia en proyectos de Industria 4.0 en plantas de fabricación. Necesito tu guía técnica completa para diseñar e implementar un sistema de control industrial inteligente que combine PLCs, sensores IoT y modelos de inteligencia artificial para optimizar los procesos de fabricación en tiempo real.

Contexto del proyecto:
Quiero modernizar el sistema de control de una planta de fabricación con 50 máquinas de producción, actualmente controladas por PLCs (Siemens S7-300 y Allen Bradley CompactLogix) que llevan más de 10 años en operación. El objetivo es añadir una capa de inteligencia artificial sobre la infraestructura existente sin reemplazar los activos actuales, reducir las paradas no planificadas en un 30% y aumentar el OEE (Overall Equipment Effectiveness) en 10 puntos porcentuales.

Objetivo técnico:
Diseña la arquitectura completa del sistema de Industria 4.0 y el plan de implementación.

Módulo técnico 1 - Arquitectura IIoT y conectividad de máquinas:
Describe la arquitectura de conectividad industrial para integrar las máquinas existentes en la plataforma de datos. Explica el uso de los protocolos industriales más comunes (OPC-UA, Modbus TCP, Profinet, EtherNet/IP) para extraer datos de los PLCs sin interrumpir la producción. Describe la implementación de gateways industriales (Siemens IoT 2050, Advantech, Moxa) como puentes entre el nivel de campo (OT - Operational Technology) y el nivel de datos (IT - Information Technology). Define la arquitectura de red segura con segregación entre la red industrial y la red corporativa (Purdue Model) y las medidas de ciberseguridad industrial imprescindibles (IEC 62443).

Módulo técnico 2 - Plataforma de datos industriales (Industrial Data Platform):
Diseña la arquitectura de la plataforma de datos industriales. Describe el pipeline de datos desde el sensor hasta el modelo de IA: recolección de datos de proceso (temperatura, presión, vibración, corriente eléctrica, velocidad de línea) a alta frecuencia (100 ms a 1 segundo según el parámetro), almacenamiento en una base de datos de series temporales (InfluxDB, TimescaleDB o Historian OSIsoft PI), capa de procesamiento de streams en tiempo real (Apache Kafka con Kafka Streams o Apache Flink) y API de acceso a los datos para los modelos de IA y las aplicaciones de visualización. Proporciona un ejemplo de arquitectura con tecnologías de código abierto que permita empezar con bajo coste.

Módulo técnico 3 - Modelos de IA para optimización del proceso:
Describe los modelos de machine learning más relevantes para el contexto de una planta de fabricación. Modelo 1: mantenimiento predictivo mediante análisis de vibración y temperatura con redes neuronales LSTM o algoritmos de detección de anomalías (Isolation Forest, Autoencoder) que alertan de un fallo inminente en un motor o rodamiento con 24-48 horas de antelación. Modelo 2: optimización de parámetros de proceso con reinforcement learning o modelos de optimización bayesiana que ajustan automáticamente los parámetros de la máquina (temperatura, velocidad, presión) para maximizar la calidad del producto y minimizar el consumo energético. Modelo 3: control de calidad visual con visión artificial (redes convolucionales) para detectar defectos en la línea de producción en tiempo real. Para cada modelo, describe el pipeline de datos de entrenamiento, la arquitectura de la red neuronal y el proceso de despliegue en producción (edge computing vs. cloud).

Módulo técnico 4 - Edge computing e inferencia en tiempo real:
Explica la arquitectura de edge computing para ejecutar los modelos de IA directamente en la planta, sin depender de la conectividad a la nube para las decisiones críticas. Describe el hardware de edge AI más adecuado (NVIDIA Jetson, Intel NUC con OpenVINO, Siemens Industrial Edge) y cómo desplegar modelos de IA optimizados para inferencia en tiempo real (cuantización del modelo, uso de TensorRT o ONNX Runtime). Establece la arquitectura híbrida donde el edge ejecuta la inferencia en tiempo real y la nube gestiona el reentrenamiento de modelos con datos históricos nuevos.

Módulo técnico 5 - Digital Twin (Gemelo Digital) de la planta:
Describe la implementación de un gemelo digital de la planta de fabricación. Explica qué es un digital twin industrial y cómo se diferencia de una simple simulación: el gemelo digital recibe datos reales de los sensores en tiempo real, modela el comportamiento físico de las máquinas y puede usarse para simular el impacto de cambios en los parámetros de proceso antes de aplicarlos en la realidad. Describe las plataformas de digital twin más usadas en la industria (Siemens Tecnomatix, PTC ThingWorx, Azure Digital Twins, AVEVA), el proceso de construcción del modelo físico (datos de diseño CAD, gemelos de las máquinas individuales, modelos de flujo de producción) y los casos de uso más valiosos del gemelo digital en una planta de fabricación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Arquitectura de sistema IIoT e IA para planta de fabricación industrial',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de plantas industriales con IA y simulación digital',
                'description'      => 'Usa la inteligencia artificial y las herramientas de diseño digital para optimizar el layout de plantas industriales, los flujos de producción y la ergonomía de los puestos de trabajo.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero industrial y diseñador de plantas de fabricación con experiencia en metodologías Lean Manufacturing, simulación de procesos y digitalización industrial. Necesito tu guía completa para usar la inteligencia artificial y las herramientas de diseño digital en la planificación y optimización del layout de una planta industrial.

Contexto del proyecto:
Necesito diseñar o rediseñar el layout de una planta de fabricación de componentes metálicos con 4.000 m² de superficie. La planta tiene líneas de mecanizado CNC, una zona de soldadura, una línea de pintura y una zona de montaje final. El objetivo es maximizar la eficiencia del flujo de materiales, reducir los transportes internos sin valor añadido, mejorar la ergonomía y la seguridad de los operarios y dejar espacio para la robotización futura de algunas estaciones.

Objetivo del diseño:
Usar IA y herramientas digitales para crear el diseño óptimo de la planta antes de mover una sola máquina.

Sección de diseño 1 - Análisis de flujo de materiales con IA:
Describe el proceso de análisis del flujo de materiales actual de la planta usando herramientas digitales. Explica cómo recopilar los datos necesarios: los tiempos de ciclo de cada operación, los volúmenes de producción por referencia de producto, las rutas de proceso de cada familia de piezas y los tiempos de transporte entre estaciones. Describe cómo construir el diagrama de flujo de materiales (Value Stream Map digital) con herramientas como Minitab, Tecnomatix Plant Simulation o herramientas de IA que identifican automáticamente los cuellos de botella, los transportes excesivos y las acumulaciones de inventario en proceso. Analiza cómo aplicar la metodología SLP (Systematic Layout Planning) asistida por IA para determinar las relaciones de proximidad óptimas entre las distintas áreas de la planta.

Sección de diseño 2 - Generación de alternativas de layout con IA:
Explica cómo usar la IA generativa y los algoritmos de optimización para generar automáticamente múltiples alternativas de layout que cumplan los requisitos de producción. Describe el uso de algoritmos genéticos o de optimización metaheurística para explorar el espacio de soluciones y encontrar las configuraciones que minimizan la distancia total recorrida por los materiales, el tiempo de tránsito entre procesos y los m² utilizados. Proporciona criterios para evaluar y seleccionar entre las alternativas generadas: no solo la eficiencia de flujo, sino también la flexibilidad ante cambios de producto, la facilidad de mantenimiento de la maquinaria y el cumplimiento normativo de seguridad (distancias mínimas, señalización, vías de evacuación).

Sección de diseño 3 - Simulación 3D y Digital Twin de la planta:
Describe cómo construir un modelo 3D y un gemelo digital de la planta para validar el diseño antes de la implementación. Explica el uso de software de simulación de planta (Siemens Tecnomatix, Dassault Systèmes DELMIA, FlexSim o AnyLogic) para simular el comportamiento de la planta con el nuevo layout: cómo se comporta el flujo de materiales con distintas mezclas de producción, dónde aparecen cuellos de botella cuando la demanda cambia, cómo afectan las averías de máquinas al flujo global y cuántos operarios son necesarios en cada turno según el programa de producción. Incluye el análisis ergonómico digital de los puestos de trabajo con herramientas como DELMIA Human o Jack de Siemens.

Sección de diseño 4 - Integración de robots y sistemas automáticos en el diseño:
Aborda cómo incorporar desde el diseño la futura robotización de estaciones de trabajo. Describe las zonas de seguridad y las distancias mínimas de diseño para robots colaborativos (cobots) y robots industriales tradicionales según la norma ISO 10218 y la especificación técnica ISO/TS 15066. Explica cómo diseñar las estaciones de trabajo para que sean fácilmente convertibles de manual a automatizada (alturas de trabajo estándar, acceso de herramientas automáticas, posicionamiento de piezas repetible). Proporciona criterios para decidir qué estaciones son candidatas prioritarias a robotización basándose en la ergonomía del operario, la repetitividad de la tarea y el volumen de producción.

Sección de diseño 5 - Plan de implementación del nuevo layout:
Diseña el plan de transición del layout actual al nuevo diseño. Describe cómo planificar el movimiento secuencial de las máquinas minimizando el impacto en la producción: qué máquinas se mueven primero, cómo gestionar el inventario de piezas en proceso durante el movimiento, qué producciones se deben adelantar para crear un colchón de seguridad y cómo gestionar la comunicación con los clientes durante el período de transición. Propón el cronograma de implementación en fases de fin de semana y vacaciones de planta para minimizar las horas de parada productiva. Define los KPIs de seguimiento del nuevo layout en los primeros seis meses: OEE, distancia media recorrida por pieza, tiempo de lead time de producción y número de accidentes e incidentes de seguridad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseño y optimización de plantas industriales con IA y simulación digital',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones de automatización industrial con IA',
                'description'      => 'Desarrolla un proceso de ventas consultivo con IA para comercializar soluciones de automatización, robótica e Industria 4.0 a directivos y técnicos de plantas de fabricación.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas con experiencia en la venta de soluciones de automatización industrial, robótica colaborativa e Industria 4.0 a empresas del sector manufacturero. Necesito tu ayuda para construir un proceso de ventas consultivo completo, asistido por inteligencia artificial, para vender soluciones de automatización industrial a medianas y grandes empresas fabricantes.

Perfil del producto:
Vendemos una suite de soluciones de automatización industrial que incluye: cobots (robots colaborativos) de entre 30.000 y 120.000 euros por unidad, sistemas de visión artificial para control de calidad, plataformas de análisis de datos industriales (IIoT) con suscripción anual de 15.000 a 60.000 euros, y proyectos de integración llave en mano con tickets promedio de 200.000 a 800.000 euros.

Contexto del proceso de venta:
El ciclo de venta típico es de 9 a 24 meses. Intervienen múltiples stakeholders: el director de producción o planta (necesita que funcione y mejore el OEE), el director financiero (necesita el ROI justificado), el director de ingeniería (valora la calidad técnica y la integración con los sistemas existentes), el responsable de mantenimiento (preocupado por la fiabilidad y el soporte) y, en ocasiones, el CEO o propietario en empresas familiares medianas.

Apartado de ventas 1 - Identificación y cualificación de oportunidades con IA:
Describe el proceso de prospección y cualificación de oportunidades asistido por IA. El sistema debe identificar las empresas con mayor probabilidad de comprar una solución de automatización en los próximos 12 meses basándose en: señales de expansión de capacidad productiva (nuevas naves, contratación de personal de producción, pedidos de maquinaria convencional), publicaciones de sus directivos en LinkedIn sobre desafíos de productividad o escasez de mano de obra, participación en convocatorias de ayudas a la digitalización industrial (PERTE, Programa de Reindustrialización del MITES), y cambios en la situación del sector (aumento de costes laborales, escasez de perfiles técnicos, competencia de países con costes bajos). Proporciona el modelo de puntuación de oportunidades (lead scoring) con los criterios y pesos de cada señal.

Apartado de ventas 2 - Discovery técnico y económico:
Diseña el proceso de discovery que debe hacer el comercial antes de preparar la propuesta. Define las 25 preguntas más importantes para el discovery con el director de producción: las que revelan los problemas de eficiencia actuales, los cuellos de botella en la línea, los problemas de calidad más frecuentes, la situación de la mano de obra y los objetivos de producción para los próximos 3 años. Define también las preguntas financieras para el director financiero o el CFO: el EBITDA del negocio, la política de inversión en activos, el umbral de ROI requerido para aprobar una inversión de este tipo y el proceso de aprobación de presupuestos de capex. Describe cómo la IA procesa las notas del discovery para identificar el caso de negocio más sólido y los riesgos del proyecto.

Apartado de ventas 3 - Construcción del caso de negocio y ROI:
Proporciona la metodología para construir el caso de negocio de una solución de automatización que convenza al director financiero. Define las variables de ahorro y beneficio que deben cuantificarse: reducción de costes de mano de obra directa (número de operarios reemplazados o reasignados), reducción de scrap y retrabajos (coste del defecto actual multiplicado por la reducción esperada), aumento de velocidad de producción (impacto en ingresos por mayor capacidad), mejora del OEE (traducida a unidades adicionales producidas), reducción de accidentes laborales (coste de los accidentes actuales y reducción de las primas del seguro) y reducción de desperdicio de materias primas. Muestra el cálculo completo del ROI, el payback period y el NPV para una instalación típica de un cobot en una estación de soldadura o montaje.

Apartado de ventas 4 - Gestión del proceso de decisión y las objeciones técnicas:
Describe cómo gestionar el largo proceso de decisión típico de la venta industrial. Propón las acciones de mantenimiento de la relación durante los 12-18 meses del ciclo de venta (visitas a instalaciones de referencia, invitaciones a demostraciones en laboratorio de automatización, participación conjunta en ferias del sector). Desarrolla las respuestas modelo para las 12 objeciones más frecuentes en la venta de automatización industrial: "tenemos operarios que llevan 20 años haciendo esa operación", "¿qué pasa si se avería la máquina?", "no tenemos ingenieros para mantener esto", "el proveedor anterior nos prometió lo mismo y no funcionó", y "necesitamos aprobación de la central en Alemania". Para cada objeción, diseña la respuesta basada en evidencia y en referencias de clientes del mismo sector.

Apartado de ventas 5 - Cierre, implantación y fidelización del cliente industrial:
Describe el proceso de cierre del contrato y los primeros 12 meses de relación con el cliente. Explica cómo estructurar el contrato de suministro e integración de una solución de automatización (garantías técnicas, SLA de soporte, formación del personal del cliente, propiedad del software y los datos). Diseña el plan de implantación por fases que minimice el riesgo para la producción del cliente. Propón el programa de éxito del cliente para los primeros 12 meses que asegure que el cliente alcanza el ROI prometido y que esté preparado para comprar la siguiente fase de automatización. Define los indicadores de salud del cliente que el sistema de CRM monitorizará con IA para detectar señales de insatisfacción o de oportunidad de upselling.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Proceso de venta consultiva de soluciones de automatización industrial con IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para soluciones de Industria 4.0 con IA',
                'description'      => 'Define la visión, el roadmap y las métricas de una plataforma de software industrial para Industria 4.0 que usa IA para optimizar la producción manufacturera.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en software industrial, plataformas IIoT y soluciones de Industria 4.0 para el sector manufacturero. Necesito tu ayuda para definir la estrategia de producto completa de una plataforma de software industrial que usa inteligencia artificial para ayudar a las plantas de fabricación a optimizar su producción.

Contexto del producto:
La plataforma es un software SaaS industrial (Manufacturing Execution System de nueva generación con IA) que conecta los datos de las máquinas, los sistemas ERP y los datos de calidad para proporcionar visibilidad en tiempo real del OEE (Overall Equipment Effectiveness), alertas predictivas de mantenimiento y recomendaciones de optimización del proceso generadas por IA. Tenemos 25 clientes industriales en España y Portugal y queremos llegar a 100 en los próximos 24 meses.

Objetivo de la sesión:
Construye el marco completo de gestión de producto para los próximos cuatro trimestres.

Dimensión estratégica 1 - Visión y posicionamiento del producto:
Define la visión de producto a 5 años. Analiza el mercado de software industrial: los MES tradicionales (SAP ME, Siemens Opcenter, Rockwell Plex), las plataformas IIoT de nueva generación (PTC ThingWorx, GE Predix, Siemens MindSphere) y los jugadores de nicho con IA. Propón el posicionamiento único de la plataforma en este mercado: en qué segmento de cliente, en qué vertical industrial y con qué capacidades de IA específicas la plataforma puede ser el líder indiscutible. Define el Ideal Customer Profile (ICP) con criterios de tamaño de planta, número de máquinas, vertical industrial (automoción, alimentación, metal-mecánica, farmacéutica), nivel de madurez digital y disposición para compartir datos de producción con una solución SaaS.

Dimensión estratégica 2 - Discovery y feedback de clientes industriales:
Describe el proceso de discovery continuo adaptado a un cliente industrial. Los directores de planta y los ingenieros de producción son perfiles muy ocupados que no quieren participar en grupos focales. Propón métodos alternativos de captura de insights: análisis del comportamiento de uso real en la plataforma (qué dashboards consultan más, qué alertas ignoran sistemáticamente, dónde abandonan el flujo de trabajo), entrevistas breves de 20 minutos integradas en las visitas de éxito del cliente, co-diseño de funcionalidades con los clientes más avanzados en un programa de beta testers industriales, y análisis de los tickets de soporte para identificar frustraciones recurrentes que revelan necesidades no cubiertas.

Dimensión estratégica 3 - Roadmap de IA para el producto industrial:
Define el roadmap de capacidades de IA para los próximos cuatro trimestres. Trimestre 1: mejora del modelo de mantenimiento predictivo con datos de vibración de alta frecuencia y alertas con 72 horas de antelación. Trimestre 2: recomendador de parámetros de proceso óptimos por turno y por operario, aprendiendo de los turnos con mejor OEE histórico. Trimestre 3: detección automática de anomalías de calidad en tiempo real con explicabilidad (la IA no solo detecta el defecto sino que identifica qué parámetro de proceso lo causó). Trimestre 4: planificador de producción asistido por IA que optimiza la secuencia de órdenes de fabricación según la disponibilidad de máquinas, materiales y personal. Para cada iniciativa, define los criterios de éxito desde la perspectiva del cliente industrial.

Dimensión estratégica 4 - Integración con el ecosistema industrial:
Analiza la estrategia de integraciones que determinará el éxito comercial del producto. Define las integraciones prioritarias: con los ERPs más usados en la industria española (SAP S/4HANA, Microsoft Dynamics, Sage X3, Odoo para PYMES), con los PLCs y sistemas SCADA más comunes (Siemens S7, Allen Bradley, Schneider Modicon), con los sistemas de calidad (SAP QM, sistemas LIMS para farmacéutica), y con las plataformas de mantenimiento (GMAO: IBM Maximo, SAP PM). Para cada integración, describe si construirla internamente, crear un marketplace de conectores de terceros o establecer partnerships tecnológicos. Define cómo la estrategia de integraciones se convierte en una ventaja competitiva y una barrera de entrada para competidores.

Dimensión estratégica 5 - Métricas de producto y modelo de negocio:
Define el modelo de métricas para el producto industrial B2B. Establece la métrica North Star que capture el valor real entregado al cliente (por ejemplo: "horas de parada no planificada evitadas por planta al mes" o "puntos de OEE ganados en los últimos 90 días"). Diseña el cuadro de mandos de salud del producto: métricas de adopción (porcentaje de usuarios activos semanales sobre licencias vendidas, profundidad de uso por módulo), métricas de retención (Net Revenue Retention, churn rate por segmento) y métricas de expansión (porcentaje de clientes que añaden plantas adicionales o módulos premium en los primeros 18 meses). Define el modelo de precios: por planta, por número de máquinas conectadas o por usuario, y cuál maximiza el LTV a largo plazo en el contexto industrial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Estrategia y roadmap de producto para plataforma de software Industria 4.0',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del cambio en Industria 4.0 con IA para equipos de RRHH',
                'description'      => 'Diseña un programa de gestión del cambio organizacional para acompañar a los equipos de producción en la transformación digital e Industria 4.0 de una planta industrial.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en gestión del cambio organizacional y desarrollo de personas con experiencia en la transformación digital de empresas industriales y manufactureras. Necesito tu ayuda para diseñar un programa completo de gestión del cambio para acompañar a los equipos de una planta de fabricación en la transición hacia la Industria 4.0.

Contexto de la transformación:
Una empresa industrial con 300 empleados en planta va a implementar en los próximos 18 meses: robots colaborativos (cobots) en las líneas de ensamblaje, un sistema de monitorización de máquinas con IA que genera alertas de mantenimiento predictivo, un MES (Manufacturing Execution System) que digitaliza las órdenes de trabajo en papel, y un sistema de control de calidad visual con cámaras e inteligencia artificial. El personal de producción tiene una media de edad de 45 años, baja cualificación digital y un fuerte arraigo cultural en los métodos de trabajo actuales.

Objetivo del programa:
Diseña el programa de gestión del cambio que garantice la adopción efectiva de la tecnología y preserve la cohesión del equipo durante la transformación.

Bloque de cambio 1 - Diagnóstico de la preparación para el cambio:
Describe el proceso de diagnóstico inicial que debes hacer antes de lanzar el programa de cambio. Propón la metodología de evaluación de la madurez organizacional: encuesta de clima y actitud ante el cambio (¿qué porcentaje del personal tiene miedo a ser reemplazado por la tecnología?), entrevistas en profundidad con los líderes informales de los distintos turnos (los operarios veteranos que influyen en la opinión del resto), análisis de los grupos de resistencia potencial y sus motivaciones, y evaluación del nivel de competencias digitales actual de la plantilla. Define cómo usar los resultados del diagnóstico para personalizar el programa de cambio según los distintos perfiles de empleado.

Bloque de cambio 2 - Comunicación y construcción del relato del cambio:
Diseña la estrategia de comunicación interna para la transformación industrial. El mensaje central debe abordar el miedo más grande de los operarios: ¿me va a quitar el trabajo un robot? Propón el relato auténtico y honesto sobre el futuro del trabajo en la planta: qué puestos cambiarán (el operario que antes supervisaba manualmente ahora supervisará la máquina y el dato), qué nuevas oportunidades de carrera crea la digitalización (técnico de mantenimiento de cobots, analista de datos de producción, supervisor de calidad digital), y cuál es el compromiso real de la empresa con su plantilla durante la transición. Define el plan de comunicación en cascada: cómo comunicar primero a la dirección, después a los mandos intermedios y por último a los operarios, con mensajes adaptados a cada nivel.

Bloque de cambio 3 - Formación y desarrollo de competencias digitales:
Diseña el programa de formación en competencias digitales para los distintos perfiles de la planta. Para los operarios de producción: formación básica en el uso de tablets y pantallas táctiles en la línea, cómo interpretar los datos del MES y cómo reportar incidencias digitalmente. Para los técnicos de mantenimiento: formación en mantenimiento de cobots, interpretación de alertas de mantenimiento predictivo e intervención correctiva guiada por IA. Para los supervisores y jefes de línea: formación en gestión de equipos humano-robot, interpretación de dashboards de OEE e IA, y liderazgo de equipos en entornos de trabajo digitalizado. Define el formato pedagógico: aprendizaje en el puesto de trabajo, microformación móvil, formación práctica en el gemelo digital antes de tocar la máquina real.

Bloque de cambio 4 - Involucramiento de los empleados como coprotagonistas:
Propón el sistema de participación activa de los empleados en la transformación. Define el programa de "embajadores de la digitalización": operarios voluntarios que aprenden primero las nuevas tecnologías y actúan como referentes y formadores informales para sus compañeros. Diseña los mecanismos de recogida de sugerencias de mejora de los empleados sobre el uso de las nuevas herramientas (los operarios que trabajan con las máquinas cada día conocen mejor que nadie qué funciona y qué no). Propón un sistema de reconocimiento de las contribuciones de los empleados a la mejora continua del sistema digital, que refuerce la apropiación de la tecnología y no la percepción de imposición desde la dirección.

Bloque de cambio 5 - Seguimiento, ajuste y consolidación del cambio:
Describe el sistema de seguimiento de la adopción tecnológica y del bienestar del equipo durante y después de la implementación. Define los indicadores de adopción que la IA puede monitorizar automáticamente: tasa de uso del MES por turno y por empleado, porcentaje de órdenes de trabajo procesadas digitalmente vs. en papel, tiempo medio de respuesta a las alertas de mantenimiento predictivo y valoración de los empleados en las encuestas de pulso mensuales. Propón el proceso de gestión de los rezagados (empleados que no adoptan la tecnología tras la formación): primero entender la causa raíz (¿es resistencia, es dificultad técnica o es un problema de acceso a los dispositivos?), luego intervenir con el tipo de apoyo adecuado para cada caso. Define los hitos del programa de cambio en los meses 3, 6, 12 y 18 para evaluar si la transformación está consolidada o necesita refuerzo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Programa de gestión del cambio para transformación Industria 4.0 en planta industrial',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'ROI y finanzas de proyectos de automatización industrial con IA',
                'description'      => 'Construye modelos financieros rigurosos para justificar y evaluar inversiones en automatización industrial, robótica e Industria 4.0 ante comités de dirección y consejos de administración.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con experiencia en la valoración de proyectos de inversión industrial y la justificación financiera de proyectos de automatización y digitalización de plantas de fabricación. Necesito tu ayuda para construir el marco financiero completo para evaluar y justificar inversiones en automatización industrial e Industria 4.0.

Contexto del proyecto:
Necesito preparar la justificación financiera de un proyecto de automatización industrial ante el comité de dirección o el consejo de administración de una empresa manufacturera. El proyecto implica la instalación de robots colaborativos, un sistema de monitorización con IA y un MES digital, con una inversión total de entre 500.000 y 2 millones de euros. La dirección exige un análisis financiero riguroso con ROI, payback period, VAN y TIR antes de aprobar la inversión.

Objetivo de la sesión:
Construye el modelo financiero completo y el argumentario para la presentación ante la dirección.

Marco financiero 1 - Cuantificación de los beneficios de la automatización:
Describe la metodología para cuantificar en euros todos los beneficios esperados del proyecto de automatización. Categoría 1: ahorro de costes de mano de obra directa (número de operarios que pasan a otras funciones o cuya contratación se evita, multiplicado por el coste laboral total incluyendo seguridad social). Categoría 2: reducción de costes de no-calidad (coste actual del scrap, los retrabajos, las garantías y las reclamaciones de clientes, multiplicado por el porcentaje de reducción esperado con la automatización y el control de calidad visual). Categoría 3: aumento de ingresos por mayor capacidad productiva (si la automatización permite aumentar la velocidad de línea, cuántas unidades adicionales por turno y a qué margen de contribución). Categoría 4: reducción de costes de mantenimiento no planificado (coste hora de parada de línea por avería, frecuencia actual de paradas no planificadas y reducción esperada con el mantenimiento predictivo). Categoría 5: ahorro energético por optimización del proceso con IA. Para cada categoría, explica cómo obtener los datos de partida y cómo aplicar los rangos de mejora conservadores, medios y optimistas.

Marco financiero 2 - Modelo de inversión y costes del proyecto:
Diseña la estructura de costes completa del proyecto de automatización. Costes de inversión (CAPEX): hardware (robots, sensores, cámaras, servidores edge, infraestructura de red industrial), software (licencias del MES, plataforma IIoT, modelos de IA), ingeniería e integración (diseño del sistema, programación, puesta en marcha), formación del personal y costes de certificación y validación. Costes operativos recurrentes (OPEX): licencias anuales de software, contratos de mantenimiento del hardware, coste del soporte técnico externo y costes de conectividad. Describe también los costes de riesgo (contingencia del 10-15% para proyectos industriales) y los costes de oportunidad (las paradas de producción durante la instalación y la puesta en marcha).

Marco financiero 3 - Modelo de ROI, payback, VAN y TIR:
Construye el modelo financiero completo del proyecto. Define la estructura del modelo de flujos de caja libre proyectados a 5 años con tres escenarios: conservador (los beneficios se materializan al 70% de lo esperado), base (100%) y optimista (120%). Calcula para cada escenario: el período de recuperación de la inversión (payback period), el Valor Actual Neto (VAN) con una tasa de descuento del 8-12% típica en proyectos industriales y la Tasa Interna de Retorno (TIR). Diseña una tabla Excel que el directivo pueda usar para cambiar los inputs clave (precio de la mano de obra, tasa de mejora de calidad, velocidad de producción) y ver el impacto en el ROI en tiempo real. Incluye el análisis de sensibilidad: ¿qué variable tiene mayor impacto en el ROI y cuál es el punto de inflexión donde el proyecto deja de ser rentable?

Marco financiero 4 - Financiación y optimización fiscal:
Describe las opciones de financiación disponibles para proyectos de automatización industrial en España. Analiza: los fondos europeos del programa FEDER y Horizonte Europa para proyectos de digitalización industrial, los préstamos del Instituto de Crédito Oficial (ICO) para inversiones productivas, las deducciones fiscales por inversiones en I+D+i aplicables a los proyectos con componente de IA e innovación, las bonificaciones en el Impuesto de Sociedades para empresas que invierten en activos intangibles tecnológicos, y el impacto del leasing financiero vs. la compra directa en el balance y en la caja de la empresa. Para cada opción, describe los requisitos de acceso, el plazo de resolución y cómo integrarla en el modelo financiero para maximizar el ROI neto de ayudas.

Marco financiero 5 - Presentación financiera ante el comité de dirección:
Diseña la presentación financiera del proyecto para el comité de dirección. Estructura la narrativa financiera en tres partes: primero el problema (cuánto cuesta la ineficiencia actual en euros por año, con datos reales de la empresa), después la solución y sus beneficios cuantificados (el resumen ejecutivo del ROI con el escenario base), y finalmente el plan de riesgo (qué puede salir mal, cuál es el coste del escenario conservador y por qué sigue siendo una buena inversión). Define las cinco preguntas más probables del CFO o del consejo y prepara la respuesta con datos para cada una. Propón el formato del executive summary de una página que resuma la decisión de inversión y pueda distribuirse por email antes de la reunión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Modelo financiero y justificación de inversión en automatización industrial',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo industrial con IA para abogados del sector',
                'description'      => 'Navega el marco regulatorio de la automatización industrial, la seguridad de máquinas y el Reglamento de IA para garantizar el cumplimiento legal de proyectos de Industria 4.0.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho industrial, seguridad de máquinas, responsabilidad por productos y regulación tecnológica en el contexto de la Industria 4.0. Necesito tu análisis jurídico completo sobre el marco regulatorio aplicable a la implementación de sistemas de automatización industrial con inteligencia artificial en plantas de fabricación en España y la Unión Europea.

Contexto jurídico del proyecto:
Una empresa industrial española quiere implementar los siguientes sistemas en su planta de fabricación: robots colaborativos (cobots) para operaciones de ensamblaje junto a operarios humanos, un sistema de visión artificial con IA para el control de calidad automatizado, un sistema de mantenimiento predictivo basado en IA que puede ordenar el paro automático de una máquina, y un gemelo digital de la planta conectado a los sistemas de control. Necesito el mapa regulatorio completo y las acciones jurídicas necesarias para operar con seguridad legal.

Objetivo del análisis:
Proporciona un mapa regulatorio completo y las acciones concretas necesarias para cumplir con todas las normativas aplicables.

Área normativa 1 - Directiva de Máquinas y Reglamento de Máquinas 2023:
Analiza el impacto del nuevo Reglamento de Máquinas (UE) 2023/1230, que sustituye a la Directiva 2006/42/CE y tiene aplicación plena desde enero de 2027. Explica cómo el nuevo reglamento aborda específicamente las máquinas con IA: el requisito de que los sistemas de IA integrados en máquinas sean transparentes y auditables, la obligación de documentar el comportamiento de la IA en los límites de la especificación de diseño, y las nuevas exigencias de evaluación de conformidad para máquinas con software actualizable que puede cambiar el comportamiento de la máquina. Describe el proceso de marcado CE para un cobot que incorpora un sistema de visión artificial con IA para la detección de la presencia humana y el ajuste automático de velocidad y fuerza.

Área normativa 2 - Normativa de seguridad de cobots (ISO 10218 e ISO/TS 15066):
Describe las obligaciones de seguridad específicas para la instalación de robots colaborativos junto a operarios. Explica los cuatro modos de colaboración definidos en la ISO/TS 15066 (parada de seguridad monitoreada, guía manual, monitorización de velocidad y separación, y limitación de potencia y fuerza), los requisitos de evaluación de riesgo que deben cumplirse antes de la puesta en marcha, y la obligación de realizar un análisis biomecánico para determinar los límites de fuerza y presión admisibles en cada aplicación específica. Describe quién es responsable (integrador, fabricante del cobot, empresa usuaria) cuando se produce un accidente en una instalación colaborativa y cómo distribuir contractualmente esta responsabilidad.

Área normativa 3 - Reglamento Europeo de IA (AI Act) aplicado a la industria:
Analiza cómo el AI Act clasifica y regula los sistemas de IA usados en la industria manufacturera. Clasifica cada uno de los sistemas del proyecto según el nivel de riesgo del AI Act: el sistema de control de calidad visual (probablemente bajo riesgo), el sistema de mantenimiento predictivo que puede ordenar paros automáticos de equipos (posiblemente alto riesgo si puede causar daños), el sistema de gestión de producción que influye en las condiciones de trabajo de los operarios (puede ser alto riesgo bajo el artículo 6.2 por impactar en trabajadores). Para los sistemas de alto riesgo, detalla las obligaciones: documentación técnica del sistema de IA, registro de logs, supervisión humana obligatoria, precisión y robustez verificadas, y registro en la base de datos de la UE.

Área normativa 4 - Protección de datos en el entorno industrial:
Aborda las implicaciones del RGPD en el contexto de la planta de fabricación digitalizada. Los sistemas de visión artificial pueden capturar imágenes de los operarios, lo que constituye tratamiento de datos biométricos especialmente protegidos según el artículo 9 del RGPD. Analiza cuándo el sistema de visión artificial que solo detecta presencia humana (sin identificar a la persona) está fuera del ámbito del RGPD y cuándo entra en él. Describe las obligaciones si el sistema sí identifica a los trabajadores: base jurídica del tratamiento, obligación de información, evaluación de impacto (EIPD) obligatoria y consulta previa a la autoridad supervisora (AEPD). Propón las medidas de privacidad por diseño que debe implementar el sistema para minimizar el tratamiento de datos personales.

Área normativa 5 - Responsabilidad civil por fallos del sistema de IA industrial:
Analiza el régimen de responsabilidad civil aplicable cuando un sistema de IA industrial causa un accidente, un defecto en la producción o un daño económico. Explica la aplicación de la Directiva de Responsabilidad por Productos (DPL) al software de IA industrial, la nueva Directiva de Responsabilidad por IA (AI Liability Directive) en proceso de aprobación, y la responsabilidad del integrador del sistema de IA que puede ser diferente a la del fabricante del hardware. Diseña la cadena contractual de responsabilidades recomendada entre el fabricante del robot, el proveedor del software de IA, el integrador del sistema y la empresa industrial usuaria, con las cláusulas de indemnización, los límites de responsabilidad y las coberturas de seguro recomendadas para cada parte.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Marco legal y regulatorio para implementar IA y automatización en plantas industriales',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico industrial con IA para equipos de mantenimiento',
                'description'      => 'Diseña un sistema de soporte técnico inteligente con IA para equipos de mantenimiento industrial que diagnostica averías, guía reparaciones y reduce el tiempo de parada de máquinas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en mantenimiento industrial, sistemas GMAO (Gestión de Mantenimiento Asistido por Ordenador) y soporte técnico para el sector manufacturero. Necesito tu ayuda para diseñar un sistema de soporte técnico industrial inteligente impulsado por inteligencia artificial que asista a los técnicos de mantenimiento en el diagnóstico de averías, la gestión de repuestos y la planificación del mantenimiento preventivo.

Contexto del sistema:
La planta industrial tiene 80 máquinas de producción (centros de mecanizado CNC, prensas, robots de soldadura y líneas de ensamblaje) con 15 técnicos de mantenimiento repartidos en tres turnos. El tiempo medio de reparación (MTTR) actual es de 4,2 horas y el tiempo medio entre fallos (MTBF) es de 180 horas. El objetivo es reducir el MTTR a menos de 2 horas y aumentar el MTBF a más de 250 horas en 18 meses mediante el uso de IA.

Objetivo del sistema:
Diseña la arquitectura completa del sistema de soporte técnico industrial con IA.

Componente de soporte 1 - Sistema de diagnóstico asistido por IA:
Describe el sistema de diagnóstico de averías guiado por IA que asiste al técnico desde el momento en que se produce un fallo. El sistema debe: recibir la alerta de la máquina con los datos del fallo (código de error, parámetros fuera de rango, historial reciente de la máquina), consultar la base de datos histórica de averías similares en esa máquina y en máquinas del mismo modelo, presentar al técnico un árbol de diagnóstico priorizado con la causa más probable en primer lugar (basado en frecuencia histórica y en los síntomas actuales), y guiar al técnico paso a paso en el proceso de verificación y reparación con instrucciones en lenguaje sencillo, diagramas y vídeos de referencia accesibles desde una tablet. Define cómo el sistema aprende de cada reparación completada para mejorar la precisión del diagnóstico futuro.

Componente de soporte 2 - Gestión inteligente de repuestos y almacén:
Diseña el sistema de gestión de repuestos con IA que garantice la disponibilidad de los componentes críticos sin inmovilizar excesivo capital en stock. El sistema debe calcular automáticamente el stock mínimo de cada referencia basándose en la frecuencia histórica de fallos, el lead time del proveedor y el coste de una hora de parada de producción. Debe generar alertas de reposición automáticas antes de que el stock caiga por debajo del mínimo de seguridad, identificar los repuestos con mayor impacto en el MTTR (los que, cuando no están disponibles, alargan la reparación más de 8 horas) y proponer la estandarización de componentes entre distintos modelos de máquina para reducir el número de referencias en almacén.

Componente de soporte 3 - Asistente de realidad aumentada para técnicos:
Propón la implementación de un asistente de mantenimiento con realidad aumentada (AR) que permita al técnico ver las instrucciones de reparación superpuestas sobre la máquina real. Describe el hardware más adecuado (gafas AR como Microsoft HoloLens, RealWear para entornos industriales, o simplemente una tablet con AR básico para empezar), cómo la IA identifica la máquina y el componente que el técnico está viendo mediante reconocimiento de imagen, y cómo superpone las instrucciones paso a paso, los diagramas eléctricos o hidráulicos relevantes y los valores de referencia correctos directamente en el campo visual del técnico. Incluye el caso de uso de asistencia remota: un experto externo puede ver lo que ve el técnico en la planta y guiarlo a distancia, reduciendo la necesidad de desplazamientos de especialistas.

Componente de soporte 4 - Sistema de gestión del conocimiento técnico:
Describe el sistema de captura y gestión del conocimiento técnico del equipo de mantenimiento con IA. El problema más crítico en mantenimiento industrial es la pérdida del conocimiento tácito cuando un técnico veterano se jubila o cambia de empresa. El sistema debe: capturar el conocimiento de los técnicos expertos mediante herramientas de documentación guiadas por IA (el técnico describe verbalmente cómo resolvió una avería y la IA estructura la información en formato de base de conocimiento), transcribir automáticamente las notas de voz de los técnicos durante la reparación, indexar y relacionar los casos de avería de forma que el nuevo técnico encuentre fácilmente la solución a un problema que un compañero ya resolvió antes, y gamificar la contribución al repositorio de conocimiento para incentivar a los técnicos a documentar sus soluciones.

Componente de soporte 5 - KPIs de mantenimiento y mejora continua con IA:
Diseña el cuadro de mandos de mantenimiento con IA que la dirección de planta y el jefe de mantenimiento revisan diariamente. Define las métricas de mantenimiento más importantes: OEE desglosado por disponibilidad, rendimiento y calidad; MTTR y MTBF por tipo de máquina y por familia de fallo; coste de mantenimiento por unidad producida; ratio de mantenimiento preventivo vs. correctivo (el objetivo es llegar al 70-30); y coste de los repuestos consumidos vs. presupuesto. Describe cómo la IA analiza automáticamente las desviaciones y genera el informe semanal de mantenimiento con los problemas prioritarios y las acciones recomendadas. Propón el proceso de revisión mensual de mejora continua donde el equipo de mantenimiento, guiado por los insights de la IA, prioriza las inversiones en mejora de fiabilidad de máquinas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema de soporte técnico con IA para mantenimiento industrial y gestión de averías',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en automatización industrial e Industria 4.0',
                'description'      => 'Construye un negocio de consultoría freelance especializado en proyectos de automatización industrial, robótica e Industria 4.0 para plantas de fabricación y empresas del sector manufacturero.',
                'prompt_content'   => <<<'EOT'
Eres un consultor industrial freelance senior especializado en proyectos de automatización, robótica y Industria 4.0 para el sector manufacturero. Necesito tu ayuda para construir mi negocio de consultoría independiente en el nicho de la automatización industrial e Industria 4.0, usando la inteligencia artificial como herramienta diferenciadora en mi práctica profesional.

Mi situación actual:
Tengo experiencia de 12 años en la industria manufacturera, los últimos 5 en un integrador de sistemas de automatización donde he liderado proyectos de robotización y digitalización de plantas. Quiero lanzarme como consultor freelance independiente para tener mayor autonomía, mejores ingresos y poder trabajar en proyectos más variados e interesantes. Mi red de contactos en el sector es sólida.

Objetivo de la sesión:
Diseña el plan completo para lanzar y escalar mi consultoría freelance en los primeros 18 meses.

Pilar estratégico 1 - Posicionamiento como experto en automatización:
Ayúdame a definir mi nicho específico dentro del amplio campo de la automatización industrial. Analiza cinco especializaciones posibles: consultoría de viabilidad y ROI para proyectos de robotización (ayudo a las empresas a decidir qué automatizar y a justificarlo financieramente), gestión de proyectos de integración de robots (PMO especializada en proyectos de automatización, sin hacer la integración técnica), auditoría de plantas industriales (evalúo el nivel de madurez digital y elaboro el roadmap de Industria 4.0), consultoría de mantenimiento predictivo e IIoT (diseño sistemas de sensorización y análisis de datos para plantas), y formación en Industria 4.0 para equipos directivos y técnicos de plantas. Para cada especialización, describe el cliente típico, el tipo de proyecto y honorario, la competencia existente y las barreras de entrada. Ayúdame a elegir el nicho donde mi experiencia específica es más valiosa.

Pilar estratégico 2 - Estructura de servicios y propuesta de valor:
Diseña el catálogo de servicios de la consultoría con tres niveles de compromiso. Nivel 1 - Diagnóstico estratégico (4-6 semanas, honorarios de 8.000 a 15.000 euros): evalúo la planta, identifico las oportunidades de automatización con mayor ROI y entrego un roadmap priorizado con casos de negocio para cada iniciativa. Nivel 2 - Consultoría de proyecto (3-9 meses, 1.000 a 1.500 euros por día): acompaño a la empresa en la licitación, selección del integrador y supervisión técnica de la implantación de un proyecto de automatización. Nivel 3 - Dirección técnica en retainer (6-12 meses, 3.000 a 5.000 euros al mes): dirijo técnicamente la función de Industria 4.0 de la empresa cliente, sin ser empleado. Para cada nivel, define el alcance exacto, los entregables, los criterios de éxito y las condiciones contractuales recomendadas.

Pilar estratégico 3 - Captación de clientes en el sector industrial:
Propón las estrategias de captación de clientes adaptadas a las particularidades del sector industrial. Los directores de planta y los directores de operaciones no están en Twitter y leen pocas newsletters. Describe cómo construir autoridad y visibilidad en los canales donde sí están: LinkedIn (cómo posicionarse como experto en automatización con contenido técnico de alta credibilidad que comparten ingenieros de producción), ponencias en ferias y congresos del sector (Advanced Factories en Barcelona, SIL, Emaf en Oporto), colaboración con asociaciones industriales (Feique, Anfac, Fiab, Cecap) y publicaciones en revistas técnicas del sector (Automática e Instrumentación, Interempresas Robótica, Tope Revista). Diseña también la estrategia de referencias: cómo convertir a cada cliente satisfecho en una fuente de nuevos proyectos.

Pilar estratégico 4 - Uso de la IA como ventaja competitiva del consultor:
Describe cómo integrar la IA en tu práctica de consultoría para diferenciarte de los consultores industriales tradicionales. Explica el uso de IA para: análisis de datos de planta más rápido y profundo (puedo analizar el histórico de averías de una planta en horas en lugar de semanas), generación de informes de diagnóstico más detallados y visuales, investigación de proveedores y soluciones tecnológicas disponibles en el mercado (me mantengo al día de las últimas tecnologías de automatización de forma eficiente), construcción de modelos financieros de ROI más sofisticados para la justificación de inversiones, y preparación de presentaciones para la dirección que comuniquen los beneficios técnicos de forma accesible para directivos no técnicos.

Pilar estratégico 5 - Gestión del negocio freelance en el sector industrial:
Describe la operativa del negocio de consultoría industrial freelance. Cubre: la forma jurídica óptima en España para facturar proyectos de entre 15.000 y 200.000 euros (autónomo puede ser insuficiente en algunos casos; la SL de consultoría da más credibilidad ante grandes clientes industriales), la gestión de tesorería en un negocio con proyectos de ticket alto pero pago lento (la industria paga a 60-90 días, necesitas un colchón de liquidez), el seguro de responsabilidad civil profesional indispensable para un consultor que asesora sobre proyectos de automatización de alto valor, los subcontratistas de confianza (ingenieros de automatización, especialistas en PLC, expertos en IA industrial) que puedes movilizar para proyectos que requieren capacidades complementarias, y el plan de crecimiento hacia una boutique de consultoría con 3-5 consultores asociados en los años 3-5 del negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Plan de negocio para consultoría freelance en automatización industrial e Industria 4.0',
                'vote_score'       => 50,
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
