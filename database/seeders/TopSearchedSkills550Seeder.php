<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills550Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campañas de marketing para vehículos eléctricos con IA',
                'description'      => 'Diseña estrategias de marketing digital para vehículos eléctricos usando IA para segmentar audiencias, crear mensajes de sostenibilidad y optimizar conversiones.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing digital especializado en el sector automoción y movilidad eléctrica. Tu misión es diseñar una estrategia de campaña completa para la promoción de vehículos eléctricos (BEV o PHEV) dirigida al mercado hispanohablante.

objetivo: Crear una estrategia de marketing integral que combine mensajes de sostenibilidad, ahorro económico y tecnología avanzada para posicionar un modelo de vehículo eléctrico frente a los competidores de combustión interna.

contexto: El mercado de vehículos eléctricos en España y Latinoamérica está en plena expansión. Los consumidores tienen objeciones concretas: autonomía, infraestructura de carga, precio de adquisición y desconocimiento técnico. La campaña debe anticipar y desarmar estas objeciones mientras construye deseo de marca.

tarea 1 — Análisis de audiencia:
Define tres arquetipos de comprador diferenciados (por ejemplo: urbanita tecnológico, familia concienciada, empresario con flota). Para cada arquetipo indica: motivaciones de compra, objeciones principales, canales digitales preferidos y mensaje clave que resuena con su perfil.

tarea 2 — Propuesta de valor y mensajes:
Redacta cinco mensajes publicitarios distintos (titulares + cuerpo corto) que combinen ahorro en combustible, beneficios fiscales, reducción de emisiones y experiencia de conducción superior. Cada mensaje debe adaptarse a uno de los arquetipos definidos.

tarea 3 — Plan de medios:
Diseña un plan de distribución multicanal con presupuesto orientativo (porcentaje por canal) para: Google Search Ads, Meta Ads (Instagram y Facebook), YouTube pre-roll, LinkedIn (para flotas B2B), influencers de automoción sostenible y SEO de contenidos. Incluye métricas KPI por canal.

tarea 4 — Estrategia de contenidos:
Propone un calendario editorial de 8 semanas con tipos de contenido: vídeo de test drive, infografía de coste total de propiedad, artículo de blog sobre puntos de carga, webinar para empresas interesadas en flotas eléctricas, y caso de éxito de cliente real.

tarea 5 — Optimización con IA:
Explica cómo usar herramientas de inteligencia artificial para: segmentación predictiva de audiencias, generación automática de variantes de copy para A/B testing, análisis de sentimiento en redes sociales sobre la marca, y personalización dinámica del sitio web según el perfil del visitante.

tarea 6 — Estrategia de remarketing:
Diseña un flujo de remarketing para leads que visitaron el configurador del vehículo sin completar la solicitud de prueba. Incluye secuencia de emails, anuncios de retargeting y oferta de cierre.

Formato de respuesta: Estructura el plan en secciones claramente diferenciadas con subtítulos. Usa listas con viñetas para los mensajes y KPIs. Incluye ejemplos concretos de copy listo para usar en campañas reales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear campañas de marketing para vehículos eléctricos con segmentación y mensajes optimizados por IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de software para sistemas de conducción asistida con IA',
                'description'      => 'Diseña la arquitectura técnica de sistemas ADAS y de conducción autónoma aplicando IA, procesamiento en tiempo real y protocolos de seguridad crítica.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior especializado en sistemas embebidos para automoción y conducción autónoma. Tu objetivo es diseñar la arquitectura de software para un sistema de asistencia avanzada a la conducción (ADAS) de nivel SAE 2+ o nivel 3.

contexto: Los vehículos modernos integran múltiples sensores (cámaras, LiDAR, radar, ultrasonidos) que deben procesarse en tiempo real con latencias inferiores a 100 ms. La seguridad funcional es crítica y debe cumplir la norma ISO 26262. El software debe ser mantenible, actualizable OTA (Over The Air) y capaz de ejecutar modelos de IA para detección de objetos, predicción de trayectorias y toma de decisiones.

tarea 1 — Arquitectura del sistema:
Diseña un diagrama de bloques funcional con los siguientes módulos: capa de percepción (fusión de sensores), capa de comprensión del entorno (detección y clasificación de objetos), capa de planificación (predicción y decisión), capa de control (actuación sobre dirección, freno y aceleración), y capa de supervisión y monitorización. Describe las interfaces entre módulos y los protocolos de comunicación (CAN, Ethernet, SOME/IP).

tarea 2 — Pipeline de procesamiento de IA:
Explica cómo implementar un pipeline de inferencia con modelos de deep learning (redes neuronales convolucionales para visión, transformers para predicción) ejecutándose en hardware especializado (GPU embebida, NPU). Indica cómo gestionar la latencia, la temperatura y la eficiencia energética.

tarea 3 — Seguridad funcional:
Describe las estrategias de redundancia y fail-safe según ISO 26262 ASIL-D: watchdogs de hardware, particionado de memoria, mecanismos de degradación controlada, logging de eventos para análisis post-mortem, y validación continua de los modelos de IA en producción.

tarea 4 — Actualización OTA y ciclo de desarrollo:
Diseña el flujo de actualización de software y modelos de IA por aire. Incluye: firma criptográfica de paquetes, rollback automático ante fallos, pruebas de regresión automatizadas en simulación antes del despliegue, y gestión de versiones con compatibilidad hacia atrás.

tarea 5 — Testing y validación:
Propón una estrategia de testing con: simulación en entornos virtuales (CARLA, SUMO), hardware-in-the-loop (HIL), pruebas en pista cerrada y validación estadística de escenarios edge-case. Incluye métricas de cobertura y criterios de aceptación.

tarea 6 — Stack tecnológico recomendado:
Lista las herramientas, frameworks y lenguajes recomendados: ROS 2, AUTOSAR Adaptive, C++17, Python para prototipado, TensorRT para inferencia, VECTOR CANalyzer, y servicios cloud para recopilación de datos de flota.

Formato de respuesta: Usa diagramas ASCII para la arquitectura, tablas para las tecnologías y listas numeradas para los flujos de proceso. Justifica cada decisión de diseño con criterios técnicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar arquitecturas de software para vehículos autónomos y sistemas ADAS con IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interiores y UX de cockpit de vehículos con IA',
                'description'      => 'Usa IA para diseñar interfaces de usuario y experiencias de cockpit en vehículos modernos, combinando ergonomía, pantallas táctiles y asistentes de voz.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX/UI senior especializado en Human Machine Interface (HMI) para automoción. Tu objetivo es diseñar la experiencia de usuario del cockpit digital de un vehículo eléctrico premium destinado al mercado europeo.

objetivo: Crear un sistema de interfaz conductor-vehículo que sea intuitivo, seguro (mínima distracción), accesible y estéticamente coherente con los valores de marca: sostenibilidad, tecnología y lujo accesible.

contexto: El cockpit moderno integra: cuadro de instrumentos digital (cluster), pantalla central táctil de 15 pulgadas, head-up display (HUD), sistema de asistente de voz con IA, controles en el volante, y conectividad con smartphones (Apple CarPlay, Android Auto). El conductor no debe apartar la vista de la carretera más de 1,5 segundos para cualquier interacción.

tarea 1 — Arquitectura de información:
Define la jerarquía de información del cockpit: qué datos son de nivel primario (velocidad, autonomía, navegación), secundario (multimedia, climatización, teléfono) y terciario (configuración del vehículo, actualizaciones). Diseña la lógica de priorización de alertas.

tarea 2 — Flujos de interacción:
Mapea los cinco flujos de usuario más frecuentes: introducir destino de navegación, ajustar climatización, reproducir música, responder una llamada telefónica, y activar el piloto asistido. Para cada flujo indica el número mínimo de interacciones y el tiempo estimado de completación.

tarea 3 — Sistema de asistente de voz con IA:
Diseña el comportamiento del asistente de voz: comandos naturales sin palabras clave forzadas, manejo de ambigüedad, confirmación visual de comandos, personalización de preferencias del conductor, y integración con el calendario y los contactos del teléfono.

tarea 4 — Diseño visual y ergonomía:
Describe el sistema de diseño visual: tipografía para alta legibilidad en movimiento (mínimo 3 mm de altura de carácter), paleta de colores para modo día y nocturno, iconografía universal, zonas de no interacción táctil mientras se conduce, y adaptación a distintas condiciones de luz.

tarea 5 — Accesibilidad y personalización:
Define cómo el sistema se adapta a conductores con discapacidades visuales leves, personas mayores, y usuarios con perfiles de conducción distintos (deportivo, eco, confort). Incluye perfiles de usuario configurables y aprendizaje de hábitos con IA.

tarea 6 — Prototipado y validación:
Propón un proceso de diseño iterativo: wireframes en papel, prototipo digital en Figma con simulación de conducción, pruebas de usabilidad en simulador de manejo, métricas de distracción (tiempo de ojos fuera de la carretera, número de toques por tarea), e iteración hasta cumplir estándares ISO 15008.

Formato de respuesta: Incluye especificaciones en tablas, mapas de flujo en texto estructurado y justificaciones de cada decisión de diseño basadas en principios de UX y normativa de automoción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar interfaces HMI y cockpits digitales para vehículos modernos con criterios UX y IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Optimización del proceso de ventas en concesionarios con IA',
                'description'      => 'Aplica IA para mejorar el proceso de ventas en concesionarios: cualificación de leads, seguimiento automatizado, configuradores inteligentes y cierre de ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor experto en ventas para el sector automoción con especialización en transformación digital de concesionarios. Tu objetivo es diseñar un sistema de ventas aumentado con inteligencia artificial para un concesionario multimarca con ventas de 200 vehículos al mes.

contexto: El proceso de compra de un vehículo dura entre 30 y 90 días. Los compradores investigan en internet antes de visitar el concesionario. Los vendedores pierden tiempo con leads fríos y no tienen visibilidad del historial de interacciones digitales del cliente. La tasa de conversión de visita a venta está en el 18% y el objetivo es elevarla al 28%.

tarea 1 — Cualificación de leads con IA:
Diseña un sistema de scoring de leads que analice: comportamiento en el sitio web (modelos vistos, tiempo en configurador, comparativas descargadas), interacciones en redes sociales, historial de formularios y datos CRM. Define los criterios para clasificar leads en frío, tibio y caliente, y el protocolo de actuación para cada categoría.

tarea 2 — Seguimiento automatizado:
Crea secuencias de seguimiento multicanal automatizadas: email personalizado basado en el modelo configurado, SMS de recordatorio de cita, WhatsApp Business con ficha del vehículo, y llamada del vendedor en el momento de mayor probabilidad de contacto. Define los disparadores y la cadencia óptima.

tarea 3 — Configurador inteligente con IA:
Describe cómo implementar un configurador de vehículos con recomendaciones basadas en: presupuesto declarado, uso previsto (urbano, familiar, largo recorrido), modelos más configurados por perfiles similares, y opciones con mayor valor percibido para el cliente. Incluye integración con calculadora de financiación en tiempo real.

tarea 4 — Asistente de ventas con IA para el vendedor:
Diseña una herramienta de apoyo para el vendedor que, durante la visita física, le proporcione: resumen del historial digital del cliente, objeciones probables según su perfil, argumentario personalizado, comparativa automática con el vehículo que viene a cambiar, y propuesta de financiación óptima.

tarea 5 — Gestión de la prueba de conducción:
Propón un proceso digitalizado para la prueba de conducción: agendado online con disponibilidad en tiempo real, check-in digital con verificación de carnet, recogida de feedback inmediato post-prueba mediante encuesta SMS, y seguimiento automático 24 horas después.

tarea 6 — KPIs y dashboard de ventas:
Define los indicadores clave para medir el impacto de la IA en el proceso de ventas: tasa de conversión por etapa del funnel, coste por lead cualificado, tiempo medio de ciclo de venta, NPS post-venta, y revenue por vendedor. Diseña la estructura del dashboard semanal para el jefe de ventas.

Formato de respuesta: Incluye los flujos de proceso en formato de lista numerada, las secuencias de comunicación en formato de timeline, y los KPIs en tabla con meta y método de medición.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar el proceso de ventas de concesionarios con herramientas de IA y automatización',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto para plataformas de movilidad como servicio (MaaS)',
                'description'      => 'Define la estrategia de producto para apps de movilidad urbana integrando transporte público, carsharing, bicicletas y scooters con IA de optimización.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior especializado en movilidad urbana y plataformas MaaS (Mobility as a Service). Tu objetivo es definir la estrategia de producto para una aplicación de movilidad integrada que opere en ciudades de más de 500.000 habitantes.

objetivo: Crear un producto digital que permita a los usuarios planificar, reservar y pagar cualquier combinación de medios de transporte (metro, autobús, tren de cercanías, taxi, VTC, carsharing, bicicleta y patinete eléctrico) desde una única interfaz, con recomendaciones personalizadas por IA.

contexto: El mercado MaaS está fragmentado entre apps de transporte público, apps de microtransporte y servicios de ridesharing. Los usuarios sufren fricción al cambiar entre aplicaciones y métodos de pago. La oportunidad es crear la capa de orquestación que unifique toda la oferta de movilidad urbana y genere valor con datos de comportamiento.

tarea 1 — Definición del producto y propuesta de valor:
Articula la propuesta de valor para tres segmentos: commuter diario, turista urbano y empresa que gestiona desplazamientos de empleados. Define las tres funcionalidades núcleo que deben existir en la versión 1.0 y el criterio por el que las elegiste (framework Jobs To Be Done).

tarea 2 — Arquitectura de funcionalidades con IA:
Describe cómo la IA mejora cada capa del producto: planificación de rutas multimodal con predicción de afluencia en tiempo real, recomendación de modo de transporte según clima y hora, predicción de disponibilidad de vehículos compartidos, y personalización de la interfaz según hábitos del usuario.

tarea 3 — Roadmap de producto a 12 meses:
Define los hitos de producto trimestre a trimestre: MVP con dos modos de transporte integrados, expansión a todos los modos, funcionalidades de suscripción mensual (pass de movilidad), integraciones B2B para empresas, y modelo de datos abiertos para ciudades.

tarea 4 — Métricas y OKRs:
Define los objetivos y resultados clave para los primeros 12 meses: usuarios activos mensuales, número de viajes planificados vs. ejecutados, NPS, tiempo medio de planificación de ruta, tasa de retención a 30 días, y revenue por usuario. Explica cómo cada métrica se conecta al modelo de negocio.

tarea 5 — Estrategia de partnerships e integraciones:
Diseña el plan de integración con operadores de transporte (APIs de datos en tiempo real, ticketing), operadores de microtransporte (Lime, Bird, SEAT MÓ), y empresas (programa de beneficios de movilidad para empleados). Incluye modelo de revenue sharing.

tarea 6 — Gestión de la experiencia del usuario:
Define el flujo de onboarding del usuario en menos de 3 minutos, el sistema de notificaciones proactivas (alertas de retraso, alternativas sugeridas), el programa de fidelización gamificado basado en kilómetros sostenibles, y el proceso de recogida de feedback continuo.

Formato de respuesta: Usa un roadmap visual en texto, tablas para OKRs y métricas, y diagramas de flujo en formato ASCII para los procesos de usuario.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Definir estrategia de producto para plataformas MaaS con IA de optimización de movilidad urbana',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Reclutamiento de talento técnico en empresas de automoción con IA',
                'description'      => 'Diseña procesos de selección para perfiles técnicos en la industria del automóvil eléctrico usando IA: ingenieros de baterías, software automotriz y especialistas en IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en talent acquisition para el sector de automoción eléctrica y tecnología vehicular. Tu objetivo es diseñar un proceso de reclutamiento eficiente para cubrir posiciones técnicas críticas en una empresa de vehículos eléctricos en expansión.

contexto: La industria del vehículo eléctrico enfrenta una guerra por el talento técnico. Los perfiles más demandados (ingenieros de baterías, desarrolladores de software embebido, especialistas en IA para visión por computador, expertos en ciberseguridad automotriz) tienen tasas de desempleo cercanas al 0% y son objetivo permanente de headhunters. La empresa necesita contratar 50 ingenieros en los próximos 12 meses.

tarea 1 — Mapa de talento y perfiles críticos:
Define los 5 perfiles técnicos más difíciles de reclutar en el sector: competencias técnicas requeridas, años de experiencia mínima, formación universitaria o alternativa válida, y fuentes de talento no convencionales (doctores en física, ex-NASA, reconversión de ingenieros de combustión).

tarea 2 — Sourcing con IA:
Describe cómo usar herramientas de IA para el sourcing proactivo: búsqueda semántica en LinkedIn y GitHub, análisis de publicaciones técnicas y patentes para identificar expertos, rastreo de conferencias especializadas (Battery Show, Autonomous Vehicle Technology Expo), y programas de reclutamiento en universidades con doctorados en electromovilidad.

tarea 3 — Proceso de selección técnica:
Diseña un proceso de evaluación en 4 fases: criba curricular automática con IA (criterios y pesos), prueba técnica en casa (máximo 3 horas), entrevista técnica con el equipo (estructura y preguntas clave), y entrevista de valores y cultura. Define el tiempo máximo del proceso: 3 semanas desde primera contacto a oferta.

tarea 4 — Employer branding técnico:
Propón una estrategia de employer branding para atraer talento técnico: presencia en GitHub y Stack Overflow, blog técnico con artículos de los propios ingenieros, participación en hackathones de movilidad eléctrica, programa de prácticas con universidades técnicas, y política de trabajo remoto y publicaciones académicas.

tarea 5 — Retención y desarrollo:
Define el plan de retención para los primeros 12 meses: onboarding técnico acelerado, mentoring con ingenieros senior, plan de formación continua (certificaciones, congresos), participación en decisiones de arquitectura, y modelo de compensación con stock options ligado a hitos de producto.

tarea 6 — KPIs de reclutamiento:
Establece métricas del proceso: tiempo medio de cobertura por perfil, coste por contratación, tasa de aceptación de oferta, satisfacción del candidato con el proceso (NPS), retención a 12 meses, y ratio de contrataciones provenientes de cada canal.

Formato de respuesta: Usa tablas para los perfiles y métricas, listas numeradas para los procesos, y ejemplos de preguntas de entrevista técnica por perfil.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar procesos de reclutamiento técnico en el sector de automoción eléctrica con apoyo de IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de flotas de vehículos eléctricos para empresas',
                'description'      => 'Evalúa la viabilidad financiera de electrificar una flota corporativa con IA: TCO, ROI, modelos de financiación y análisis de riesgo.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en movilidad corporativa y electrificación de flotas. Tu objetivo es elaborar un análisis financiero completo para la toma de decisión de electrificar la flota de vehículos de una empresa mediana con 80 vehículos actualmente diésel.

contexto: La empresa tiene vehículos diésel con una antigüedad media de 4 años. El consumo mensual de combustible asciende a 18.000 euros. El Gobierno ofrece subvenciones de hasta 7.000 euros por vehículo eléctrico comprado y la empresa puede acceder a leasing operativo. La transición debe completarse en 3 años con una inversión mínima de capital propio.

tarea 1 — Cálculo del Coste Total de Propiedad (TCO):
Compara el TCO a 5 años entre el escenario actual (diésel) y el escenario electrificado. Incluye: precio de adquisición o cuota de leasing, combustible vs. electricidad, mantenimiento preventivo y correctivo, seguros, impuestos (matriculación, circulación), depreciación, y coste de instalación de infraestructura de carga en la sede. Presenta los resultados en tabla anual.

tarea 2 — Análisis de ROI y payback:
Calcula el retorno sobre la inversión y el período de recuperación de la inversión en la electrificación. Considera los ahorros en combustible, reducción de costes de mantenimiento (menos piezas móviles), beneficios fiscales (deducción IVA, amortización acelerada), y ahorro en tasas municipales para vehículos eléctricos.

tarea 3 — Modelos de financiación:
Evalúa tres alternativas de financiación: compra directa con subvenciones, leasing operativo con servicio de mantenimiento incluido (Renting), y leasing financiero. Para cada opción analiza el impacto en el balance, la flexibilidad para renovar la flota, y el tratamiento fiscal.

tarea 4 — Análisis de sensibilidad y riesgos:
Realiza un análisis de sensibilidad variando: precio de la electricidad (±30%), precio del combustible (±40%), depreciación del vehículo eléctrico, y disponibilidad de subvenciones. Identifica los escenarios pesimista, base y optimista, y define los umbrales que harían no rentable la electrificación.

tarea 5 — Plan de transición financiera:
Diseña el plan de inversión por fases a 3 años: qué porcentaje de la flota electrificar cada año, criterio de priorización (rutas cortas primero, mayor uso diario), gestión de la flota híbrida durante la transición, y provisión presupuestaria anual necesaria.

tarea 6 — Reporting de sostenibilidad y ESG:
Calcula el impacto de la electrificación en los indicadores ESG de la empresa: reducción de emisiones CO2 en toneladas anuales, mejora del rating de sostenibilidad, potencial de acceso a financiación verde (bonos verdes, créditos sostenibles), y valor de marca en reporting de sostenibilidad para inversores.

Formato de respuesta: Incluye tablas numéricas para TCO y ROI, gráficos en formato ASCII para el análisis de sensibilidad, y resumen ejecutivo de máximo 5 puntos para la dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Evaluar la viabilidad financiera de electrificar flotas corporativas con análisis TCO y ROI',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para vehículos autónomos y responsabilidad civil con IA',
                'description'      => 'Analiza el marco normativo europeo para vehículos autónomos, la atribución de responsabilidad en accidentes y los contratos de homologación.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho de la automoción, tecnología y responsabilidad civil. Tu objetivo es elaborar un análisis jurídico completo sobre el marco legal aplicable a los vehículos autónomos y los sistemas de conducción asistida en la Unión Europea y España.

contexto: La regulación de vehículos autónomos está evolucionando rápidamente. El Reglamento UN-R157 (UNECE) regula los sistemas ALKS de nivel 3. La Directiva de Responsabilidad por Productos de la UE (85/374/CEE) está siendo revisada para incluir sistemas de IA. España adaptó la legislación de tráfico para permitir pruebas de vehículos autónomos. Los fabricantes, las aseguradoras y los operadores de flotas necesitan claridad jurídica sobre quién responde cuando un vehículo autónomo causa un accidente.

tarea 1 — Marco normativo europeo y español:
Analiza la normativa vigente y en tramitación: Reglamento UN-R157 (ALKS nivel 3), AI Act de la UE y su clasificación de sistemas de IA de alto riesgo en automoción, Reglamento General de Seguridad Vehicular 2019/2144, reforma de la Directiva de Responsabilidad por Productos, y Real Decreto 339/1990 (Ley de Tráfico española) y sus modificaciones para vehículos autónomos.

tarea 2 — Atribución de responsabilidad en accidentes:
Analiza los escenarios de responsabilidad según el nivel de autonomía SAE: nivel 2 (conductor siempre responsable), nivel 3 (responsabilidad del fabricante cuando el sistema está activo), nivel 4-5 (responsabilidad del operador o fabricante sin conductor). Explica cómo se articulan las acciones de repetición entre aseguradora, propietario y fabricante.

tarea 3 — Contratos de homologación y certificación:
Describe el proceso de homologación de un sistema ADAS o de conducción autónoma: documentación técnica requerida, ensayos de homologación tipo (crash test, escenarios de conducción), certificación de los sistemas de IA según el AI Act (auditoría de datos de entrenamiento, explicabilidad del modelo), y mantenimiento de la homologación tras actualizaciones OTA.

tarea 4 — Protección de datos y privacidad:
Analiza las obligaciones RGPD para los datos que recopilan los vehículos autónomos: datos de geolocalización, grabaciones de cámaras internas y externas, datos biométricos del conductor para sistemas de monitorización de fatiga, transferencia de datos a fabricantes para mejora de modelos de IA, y derechos del propietario sobre sus datos de conducción.

tarea 5 — Contratos con fabricantes y operadores de flota:
Propón las cláusulas contractuales clave para: contrato de licencia de software automotriz (actualización OTA, ciberseguridad, resolución de conflictos), contrato de operación de flota autónoma (distribución de responsabilidades, seguros obligatorios, protocolos de incidente), y acuerdos de nivel de servicio para la disponibilidad del sistema.

tarea 6 — Tendencias regulatorias y recomendaciones:
Resume las tendencias regulatorias previstas para 2025-2030 en la UE y proporciona recomendaciones para que fabricantes, aseguradoras y operadores de flotas se preparen jurídicamente: política de seguros adaptada, gestión documental de logs de conducción, y participación en grupos de trabajo regulatorios.

Formato de respuesta: Estructura el análisis por bloques temáticos con referencias normativas específicas (número de artículo, reglamento). Incluye tabla de atribución de responsabilidad por nivel SAE y lista de cláusulas contractuales modelo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Analizar el marco legal europeo de vehículos autónomos y la atribución de responsabilidad civil',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente para talleres y concesionarios con IA conversacional',
                'description'      => 'Implementa chatbots y sistemas de IA para mejorar la atención al cliente en talleres: citas, diagnósticos previos, seguimiento de reparaciones y encuestas de satisfacción.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer experience y transformación digital para el sector de posventa de automoción. Tu objetivo es diseñar un sistema integral de atención al cliente con IA para una red de talleres oficiales con 15 instalaciones y 4.000 vehículos reparados al mes.

contexto: Los clientes de taller valoran la transparencia sobre el estado de su vehículo, la rapidez en la comunicación y la ausencia de sorpresas en el presupuesto. El 60% de las consultas que recibe el taller son peticiones de cita, consultas sobre el estado de la reparación y preguntas sobre presupuestos. El equipo humano pierde 2 horas diarias por taller en gestión de estas consultas repetitivas.

tarea 1 — Diseño del chatbot de atención al cliente:
Define la arquitectura conversacional del asistente virtual para WhatsApp y la web del taller: árbol de intenciones (cita, estado de reparación, presupuesto, garantía, asistencia en carretera), manejo de lenguaje natural en español con coloquialismos del sector ("el coche hace un ruido raro"), integración con el DMS (Dealer Management System) para consultar datos reales, y escalado a agente humano cuando el bot no puede resolver.

tarea 2 — Proceso de agendado de citas con IA:
Diseña el flujo de reserva de cita online: identificación del cliente y vehículo (matrícula), descripción del problema o servicio solicitado (mantenimiento, revisión, avería), sugerencia automática de fecha y hora según disponibilidad y tipo de trabajo, confirmación por SMS/WhatsApp, y recordatorio 24 horas antes con opción de reagendar.

tarea 3 — Diagnóstico previo asistido por IA:
Crea un flujo de preguntas diagnósticas que el bot hace al cliente antes de la cita: tipo de síntoma (ruido, luz de avería, consumo elevado, problema eléctrico), cuándo aparece el problema, historial de reparaciones previas relevante, y generación automática de un pre-diagnóstico orientativo para el técnico receptor que agilice la estimación del tiempo de trabajo.

tarea 4 — Seguimiento de reparación en tiempo real:
Define el sistema de comunicación proactiva durante la reparación: notificación al inicio del trabajo, alerta cuando se detecta una avería adicional con foto adjunta y presupuesto para aprobación del cliente, notificación de finalización con vídeo de la revisión de entrega (multipoint inspection), y resumen digital de los trabajos realizados y la próxima revisión recomendada.

tarea 5 — Gestión de quejas y recuperación de clientes:
Diseña el protocolo de gestión de insatisfacción: detección temprana de clientes insatisfechos mediante análisis de sentimiento en los mensajes del chat, respuesta empática y ofrecimiento de solución en menos de 2 horas, escalado automático al responsable de taller para casos graves, y seguimiento post-resolución con encuesta de satisfacción.

tarea 6 — Encuestas de satisfacción y mejora continua:
Propón el sistema de NPS post-taller: envío automático de encuesta breve 48 horas después de recoger el vehículo, análisis de respuestas con IA para identificar patrones de insatisfacción por tipo de trabajo o técnico, dashboard semanal para el gerente del taller, y programa de fidelización basado en visitas acumuladas.

Formato de respuesta: Incluye los flujos conversacionales en formato de árbol de decisión textual, las notificaciones en ejemplos de mensajes reales, y las métricas en tabla con valores objetivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar IA conversacional para mejorar la atención al cliente en talleres y concesionarios',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de transformación digital para el sector automoción con IA',
                'description'      => 'Diseña propuestas de consultoría para ayudar a empresas del sector automoción a adoptar IA en sus operaciones: manufactura, cadena de suministro y experiencia de cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor independiente especializado en transformación digital e inteligencia artificial para la industria del automóvil. Tu objetivo es desarrollar una propuesta de consultoría completa para un fabricante de componentes de automoción (tier 1) con 800 empleados que quiere integrar IA en sus operaciones para reducir costes y mejorar la calidad.

contexto: El fabricante produce sistemas de frenos y suspensión para marcas de automóviles premium. Tiene problemas de defectos de calidad que cuestan 2 millones de euros anuales en reclamaciones y reprocesos. Su cadena de suministro sufre roturas de stock que retrasan la entrega a los clientes. Tiene datos de producción de los últimos 5 años pero no los está aprovechando.

tarea 1 — Diagnóstico inicial y hoja de ruta:
Define la metodología de diagnóstico de madurez digital: evaluación de infraestructura de datos (ERP, MES, sensores IoT en línea), competencias digitales del equipo, cultura de toma de decisiones basada en datos, y benchmarking con competidores del sector. Presenta la hoja de ruta de transformación a 18 meses con hitos trimestrales.

tarea 2 — IA para control de calidad en manufactura:
Diseña la propuesta de implementación de visión artificial para control de calidad: selección del tipo de defectos detectables (grietas, dimensiones fuera de tolerancia, acabados superficiales), arquitectura del sistema de cámaras y algoritmos de detección, integración con el MES para trazabilidad de piezas defectuosas, cálculo de ROI basado en reducción del coste de no calidad, y plan de validación antes de despliegue en producción.

tarea 3 — IA para la cadena de suministro:
Propón un sistema de predicción de demanda y gestión de inventario: modelo predictivo basado en pedidos históricos, estacionalidad y señales externas (lanzamiento de nuevos modelos de vehículos de los clientes), optimización automática de niveles de stock por referencia, alertas tempranas de riesgo de rotura, y evaluación de proveedores alternativos mediante análisis de datos de entrega.

tarea 4 — Mantenimiento predictivo de maquinaria:
Define la solución de mantenimiento predictivo para las líneas de producción críticas: sensores IoT recomendados (vibración, temperatura, consumo eléctrico), modelos de machine learning para detección de anomalías antes de avería, integración con el sistema de órdenes de trabajo de mantenimiento, y cálculo del ahorro por reducción de paradas no planificadas.

tarea 5 — Propuesta económica y modelo de colaboración:
Estructura la propuesta económica de consultoría: fases del proyecto con entregables por fase (discovery, diseño, implementación piloto, escalado), modelo de honorarios (tarifa fija por fase + éxito ligado a reducción del coste de no calidad), plazos de pago, y cláusulas de propiedad intelectual de los modelos de IA desarrollados.

tarea 6 — Gestión del cambio y capacitación:
Diseña el plan de gestión del cambio para asegurar la adopción: identificación de champions internos en producción y calidad, programa de formación para operarios (uso de dashboards de IA), comunicación a la dirección con casos de éxito del sector, y métricas de adopción (porcentaje de decisiones basadas en datos vs. intuición).

Formato de respuesta: Estructura la propuesta como un documento ejecutivo con resumen en la primera sección, desarrollo técnico en el cuerpo, y propuesta económica en tabla al final. Incluye ejemplos de ROI calculado para cada caso de uso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollar propuestas de consultoría para transformación digital con IA en manufactura de automoción',
                'vote_score'       => 40,
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
