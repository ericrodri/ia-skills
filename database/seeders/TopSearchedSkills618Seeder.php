<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills618Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para marketing en aerolíneas y captación de pasajeros',
                'description'      => 'Diseña estrategias de marketing para aerolíneas y operadores de turismo aéreo: segmentación de pasajeros, personalización de ofertas, gestión de programas de fidelización y campañas multicanal.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing especializado en el sector de la aviación comercial y el turismo aéreo con amplia experiencia en aerolíneas de bajo coste, aerolíneas tradicionales y operadores turísticos con flota propia.

Tu objetivo es ayudarme a desarrollar una estrategia de marketing integral para una aerolínea o negocio relacionado con el transporte aéreo, aprovechando las capacidades de la inteligencia artificial para personalizar la experiencia del pasajero y optimizar la inversión publicitaria.

Segmentación avanzada de pasajeros con IA
Desarrolla perfiles de cliente precisos y accionables:

Segmentos de demanda principales:
- Viajero de negocio frecuente: prioriza tiempo, confiabilidad y servicios premium
- Turista de ocio sensible al precio: prioriza coste total y flexibilidad de destinos
- Viajero VFR (visita a familiares y amigos): demanda específica por origen-destino y temporalidad
- Estudiante internacional: recurrencia estacional, sensibilidad al precio extrema
- Viajero premium de largo radio: dispuesto a pagar por confort en viajes de más de 6 horas

Variables de segmentación con IA:
- Análisis de comportamiento de búsqueda y reserva: antelación, canales, patrones de abandono
- Historial de vuelos: rutas frecuentes, clase preferida, servicios ancillary comprados
- Comportamiento en el destino: integración con datos de hotel, rent-a-car, actividades
- Sensibilidad al precio en tiempo real: elasticidad dinámica por segmento y ruta

Personalización de la oferta y comunicación
Diseña experiencias individualizadas:
- Motor de recomendación de destinos basado en historial y preferencias del pasajero
- Personalización de ofertas de upgrade, servicios a bordo y ancillary según perfil
- Comunicación proactiva de ofertas relevantes en el momento adecuado del journey del viajero
- Programas de fidelización inteligentes: puntos, beneficios y comunicación adaptados al nivel del socio
- Recuperación automatizada de pasajeros que abandonaron el proceso de reserva

Estrategia de canales y captación
Optimiza la mezcla de canales de adquisición:
- Optimización de campañas SEM en Google Flights, Kayak y Skyscanner
- Estrategia de metabuscadores: cuándo competir en precio y cuándo diferenciarse en servicio
- Redes sociales para aerolíneas: Instagram para inspiración de destinos, LinkedIn para viajero corporativo
- Email marketing segmentado: campañas de oferta de último minuto, alertas de precio, inspiración
- Programa de afiliación con agencias de viaje online y bloggers de viaje

Gestión de la reputación y crisis en aviación
Protege y construye la marca en un sector de alto impacto:
- Protocolo de comunicación en caso de retraso, cancelación o incidente
- Monitorización de la reputación online: review platforms, redes sociales, foros de viajeros frecuentes
- Estrategia de respuesta a opiniones negativas en TripAdvisor, Trustpilot y app stores
- Gestión de la narrativa de marca durante crisis del sector (pandemia, huelgas, accidentes)
- Construcción de embajadores de marca entre los viajeros frecuentes más influyentes

Revenue y marketing conjunto
Conecta marketing con revenue management:
- Coordinación entre campañas de marketing y estrategia de precios dinámicos
- Cómo el marketing de destinos estimula la demanda en rutas con baja ocupación
- Promociones especiales para llenar vuelos en periodos de baja demanda
- Co-marketing con destinos turísticos, aeropuertos y empresas del ecosistema de viaje

Genera una estrategia de marketing para [INDICAR TIPO: aerolínea de bajo coste/aerolínea regional/operador aéreo turístico] con rutas principalmente en [INDICAR GEOGRAFÍA] y un presupuesto de marketing de [INDICAR PRESUPUESTO ANUAL].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollar estrategias de marketing personalizadas para aerolíneas con segmentación avanzada e IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para sistemas de gestión y software en aviación comercial',
                'description'      => 'Explora las aplicaciones de IA y software especializado en aviación: sistemas de gestión de operaciones de vuelo, mantenimiento predictivo, planificación de tripulaciones y optimización de rutas.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de sistemas de tecnología de la información especializado en aviación civil con amplia experiencia en la implementación de software operacional crítico para aerolíneas, proveedores de servicios de navegación aérea y aeropuertos.

Tu objetivo es proporcionar una visión comprensiva de los sistemas de software y las aplicaciones de IA en el sector de la aviación comercial, desde los sistemas operacionales críticos hasta las aplicaciones de analítica avanzada para la optimización del negocio.

Ecosistema tecnológico de la aviación comercial
Mapea los sistemas clave que componen la infraestructura tecnológica:

Sistemas de gestión de operaciones (OCC):
- Sistema de control de operaciones de vuelo: monitorización en tiempo real de la flota
- Flight Operations Quality Assurance (FOQA): análisis de datos de vuelo para seguridad
- Aircraft Communications Addressing and Reporting System (ACARS): comunicación tierra-aire
- Electronic Flight Bag (EFB): digitalización de la documentación de cabina
- Gestión dinámica de slots y coordinación con el espacio aéreo (ATFM)

Sistemas de pasajeros y reservas:
- Passenger Service System (PSS): reservas, inventario, check-in, embarque
- Global Distribution Systems (GDS): Amadeus, Sabre, Travelport — integración y estrategia
- Revenue Management System (RMS): pricing dinámico y gestión de inventario por clase
- Customer Data Platform: integración de datos de pasajero a través de todos los canales
- Aplicación móvil del pasajero: funcionalidades críticas y arquitectura

Sistemas de mantenimiento con IA
Desarrolla la perspectiva de mantenimiento predictivo:
- Aircraft Health Monitoring (AHM): sensores, datos en tiempo real y alertas predictivas
- Maintenance Repair and Overhaul (MRO) software: planificación y registro de tareas de mantenimiento
- Modelos de IA para predecir fallos de componentes antes de que ocurran: arquitectura y datos necesarios
- Optimización del inventario de piezas de repuesto usando aprendizaje automático
- Digital twin del avión: simulación del estado del sistema para mantenimiento preventivo

Optimización con IA en operaciones
Explica las aplicaciones de IA de mayor impacto:
- Optimización de rutas: minimización de consumo de combustible con datos meteorológicos en tiempo real
- Planificación de tripulaciones con IA: asignación óptima respetando la regulación EASA
- Gestión de irregularidades operacionales (OTP): recuperación automática ante retrasos en cascada
- Optimización de la utilización de flota: máximo aprovechamiento del activo entre operaciones
- Predicción de demanda por ruta: modelos de machine learning para la planificación de capacidad

Arquitectura de datos en aviación
Diseña la infraestructura de datos:
- Integración de datos de múltiples sistemas legacy en un data lake central
- APIs de conexión con sistemas de gestión del espacio aéreo (SWIM, NextGen, SESAR)
- Seguridad y soberanía de los datos de vuelo: regulación y mejores prácticas
- Análisis en tiempo real vs. análisis batch: arquitectura lambda para operaciones críticas
- Governance de datos: calidad, linaje y auditoría en un entorno regulado

Seguridad, certificación y compliance tecnológico
Aborda los requisitos regulatorios:
- Requisitos de certificación de software aeronáutico: DO-178C, EUROCAE ED-109
- Ciberseguridad en aviación: EASA regulación y mejores prácticas para sistemas críticos
- Gestión de la continuidad operacional en sistemas IT de aerolínea
- GDPR y gestión de datos de pasajeros: API, PNR y regulación de transferencia internacional de datos

Genera una hoja de ruta tecnológica para una aerolínea de tamaño [INDICAR TAMAÑO: regional/mediana/grande] con flota de [INDICAR NÚMERO] aeronaves que quiere modernizar sus sistemas operacionales, priorizando las inversiones con mayor impacto en eficiencia operativa y experiencia del pasajero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar arquitecturas tecnológicas y aplicaciones de IA para operaciones de aerolíneas y aviación comercial',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para diseño de experiencia del pasajero en aviación comercial',
                'description'      => 'Rediseña la experiencia del pasajero en todos los touchpoints del viaje aéreo usando metodología de diseño de servicios y IA: desde la búsqueda y reserva hasta la llegada al destino.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de servicios y director de experiencia del cliente (CX) especializado en el sector de la aviación con amplia experiencia rediseñando la experiencia del pasajero para aerolíneas, aeropuertos y operadores de turismo aéreo.

Tu objetivo es ayudarme a mapear, analizar y rediseñar la experiencia completa del pasajero en todos los puntos de contacto del viaje aéreo, usando metodología de diseño de servicios e inteligencia artificial para crear experiencias memorables y diferenciadoras.

Mapeo del journey completo del pasajero
Documenta todos los momentos del viaje:

Fase 1 — Inspiración y planificación (semanas/meses antes del viaje):
- Descubrimiento del destino: cómo la aerolínea puede estar presente en la fase de inspiración
- Comparación de opciones: experiencia en metabuscadores y web propia
- Proceso de reserva: fricciones actuales y oportunidades de mejora
- Experiencia post-reserva: confirmación, información previa al vuelo, gestión de la reserva

Fase 2 — Preparación para el viaje (días antes):
- Check-in online: usabilidad, personalización y oportunidades de upsell
- Selección de asiento y servicios adicionales: cómo hacer el upsell valioso en lugar de intrusivo
- Comunicación previa al vuelo: información útil vs. comunicación comercial excesiva
- Gestión de cambios y cancelaciones: el momento de verdad que define la reputación de la aerolínea

Fase 3 — En el aeropuerto de origen:
- Llegada al aeropuerto: señalización, transporte y primera impresión
- Proceso de facturación: autoservicio, asistencia humana, gestión de colas
- Control de seguridad: la parte de la experiencia que la aerolínea no controla pero puede preparar
- Sala de embarque: tiempos de espera, información, servicios disponibles
- Proceso de embarque: gestión de grupos, asistencia a pasajeros con necesidades especiales

Fase 4 — A bordo:
- Experiencia de bienvenida: primer contacto con la tripulación de cabina
- Confort del asiento: percepción del espacio, ergonomía, almacenaje
- Servicio de a bordo: comida, bebida, entretenimiento, conectividad WiFi
- Gestión de imprevistos a bordo: turbulencias, retrasos en vuelo, incidentes menores
- Experiencia de llegada: preparación para el aterrizaje y desembarque

Fase 5 — En el aeropuerto de destino:
- Desembarque y flujo dentro del aeropuerto
- Recogida de equipaje: el momento de mayor ansiedad del viaje
- Aduana e inmigración: gestión de la experiencia en un proceso no controlado por la aerolínea
- Salida del aeropuerto: conexión con el destino

Fase 6 — Post-viaje:
- Comunicación de seguimiento: solicitud de feedback, agradecimiento, próxima oferta
- Gestión de incidencias post-vuelo: equipaje dañado, quejas, compensaciones
- Acreditación de puntos en el programa de fidelización
- Recordatorio y fidelización para el próximo viaje

Aplicación de IA en el diseño de la experiencia
Integra tecnología de forma invisible y útil:
- Personalización del journey en tiempo real basada en el perfil del pasajero
- Comunicación proactiva ante incidencias: el pasajero sabe antes que llegue al problema
- Asistente virtual en la app que guía al pasajero a través de situaciones complejas
- Reconocimiento facial y biometría para agilizar procesos en el aeropuerto
- IA en el servicio de a bordo: recomendaciones de menú, entretenimiento personalizado

Diseño de momentos de verdad memorables
Identifica y potencia los momentos clave:
- Los tres momentos de mayor impacto en la satisfacción y la fidelización del pasajero
- Cómo convertir los momentos de dolor (retraso, cambio de puerta) en momentos de servicio memorable
- El papel de la tripulación de cabina en la creación de experiencias emocionales positivas
- Sorpresas y detalles que generan comentarios positivos espontáneos

Genera un mapa de experiencia del pasajero (CJM) para un vuelo de corto radio de [INDICAR DURACIÓN: 1-3 horas] operado por [INDICAR TIPO: aerolínea de bajo coste/aerolínea tradicional] identificando los cinco puntos de mayor friccción actual y las tres oportunidades de mayor impacto para mejorar la experiencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Rediseñar la experiencia del pasajero en todos los touchpoints del viaje aéreo usando diseño de servicios e IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para revenue management y optimización de ventas en aerolíneas',
                'description'      => 'Domina las técnicas de revenue management aplicadas a la aviación comercial: pricing dinámico, gestión de inventario por clase, estrategia de ancillary revenue y optimización de la distribución.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Revenue Management con amplia experiencia en aerolíneas de bajo coste y aerolíneas de red, con profundo conocimiento de los sistemas de pricing dinámico, gestión de inventario y estrategias de maximización de ingresos en el transporte aéreo.

Tu objetivo es proporcionar una guía completa sobre revenue management en aviación comercial, desde los fundamentos conceptuales hasta las aplicaciones avanzadas de inteligencia artificial para la optimización continua de ingresos.

Fundamentos de revenue management en aviación
Establece la base conceptual:
- Qué es el revenue management y por qué la aviación fue pionera en su desarrollo
- Las tres condiciones que hacen óptimo el RM: capacidad perecedera, demanda segmentable y costes fijos altos
- Diferencia entre yield management (precio por unidad de capacidad) y revenue management (ingresos totales optimizados)
- El concepto de RASK (Revenue per Available Seat Kilometer) como métrica central
- Evolución del RM: desde las clases tarifarias fijas al pricing dinámico con IA

Arquitectura del sistema de revenue management
Comprende los componentes del sistema:
- Sistema de inventario: clases de reserva (booking classes), nesting y virtual nesting
- Motor de forecasting: cómo predecir la demanda por vuelo, fecha y clase con modelos de ML
- Motor de optimización: algoritmos para calcular los precios y el inventario óptimo en tiempo real
- Sistema de pricing: definición de tarifas base, reglas de aplicación y modificadores dinámicos
- Integración con el Passenger Service System (PSS) y los canales de distribución

Estrategia de pricing dinámico
Desarrolla una estrategia de precios avanzada:
- Curva de reservas: comportamiento típico de la demanda según antelación a la fecha de vuelo
- Diferenciación de precios por segmento: negocio vs. ocio, early booker vs. last minute
- Gestión de la antelación de la reserva: cuándo abrir clases baratas y cuándo cerrarlas
- Control de capacidad por clase: bid price y seat protection para maximizar el mix de clases
- Reacción ante movimientos de competidores: cuándo seguir al mercado y cuándo diferenciarse

Ancillary revenue: más allá del billete
Maximiza los ingresos adicionales por pasajero:
- Taxonomía de ancillary revenue: servicios opcionales (equipaje, asiento) vs. non-air (hotel, coche)
- Estrategia de unbundling: qué incluir en el precio base y qué cobrar por separado
- Optimización del momento de oferta: en la reserva, pre-vuelo, en el aeropuerto, a bordo
- Personalización de la oferta de ancillary basada en el perfil y el historial del pasajero
- Impacto del ancillary en la comparación de precios en metabuscadores: gestión de la percepción de precio

Gestión de la distribución y los canales
Optimiza cómo y dónde se vende:
- Estrategia de canal directo vs. indirecto: ventajas, desventajas y trade-offs de margen
- NDC (New Distribution Capability): cómo está transformando la distribución aérea
- Gestión de los GDS: contenido diferenciado y estrategia de paridad de precios
- Online Travel Agencies (OTAs): relación estratégica vs. conflicto de canal
- Programa de ventas corporativas: contratos, tarifas negociadas y gestión de cuentas

IA y machine learning en revenue management
Explica las capacidades avanzadas:
- Modelos de demanda con redes neuronales para capturar patrones no lineales
- RL (Reinforcement Learning) para la optimización dinámica del inventario
- Predicción de la disposición a pagar (WTP) a nivel de cliente individual
- Detección de anomalías en la demanda para detectar eventos especiales y ajustar precios
- Sistemas de RM autónomos: cuánto automatizar y dónde mantener supervisión humana

Genera una estrategia de revenue management para una ruta [INDICAR CARACTERÍSTICAS: origen-destino, distancia, frecuencia semanal] operada por [INDICAR TIPO DE AEROLÍNEA] en un contexto competitivo de [INDICAR NÚMERO] competidores directos en la ruta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Dominar revenue management y pricing dinámico en aviación comercial para maximizar ingresos por vuelo',
                'vote_score'       => 53,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestión de productos y servicios en aerolíneas',
                'description'      => 'Aplica metodología de producto digital a los servicios de una aerolínea: diseño de la propuesta de valor, roadmap de servicios, gestión de la cartera de rutas y desarrollo de nuevos servicios ancillary.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product con especialización en servicios de transporte aéreo y amplia experiencia aplicando metodología de producto a las aerolíneas, integrando principios de diseño centrado en el usuario con las restricciones operativas y regulatorias del sector aeronáutico.

Tu objetivo es ayudarme a aplicar un enfoque de gestión de producto moderno a los servicios de una aerolínea, desde la definición de la propuesta de valor y la cartera de rutas hasta el desarrollo de nuevos servicios digitales y ancillary.

Definición de la propuesta de valor del producto aéreo
Establece el fundamento estratégico:
- Diferenciación del producto aéreo: precio, conveniencia, confort, servicio, red de destinos
- Segmentos de cliente y cómo la propuesta de valor se adapta a cada uno
- Competitive landscape: análisis del posicionamiento de competidores directos e indirectos
- Modelo de negocio: LCC (Low Cost Carrier), FSC (Full Service Carrier), híbrido — implicaciones en el producto
- Jobs to be done del pasajero: qué trabajo está contratando al comprar un billete de avión

Gestión de la cartera de rutas como portfolio de productos
Aplica metodología de portfolio al network:
- Análisis de la cartera de rutas: rentabilidad, crecimiento, cuota de mercado y potencial
- Matriz de decisión para el lanzamiento de nuevas rutas: demanda, competencia, fit operativo, slots
- Criterios de discontinuación de rutas no rentables: quándo cerrar una ruta y cómo gestionar el proceso
- Optimización de frecuencias: cuántos vuelos semanales por ruta maximizan la rentabilidad
- Estacionalidad y adaptación del network al calendario de demanda

Producto de cabina y experiencia a bordo
Gestiona el producto físico y digital del vuelo:
- Configuración de cabina: número de asientos, pitch, clase de negocio — decisiones de flota
- Producto de entretenimiento a bordo (IFE): contenido, hardware, WiFi — modelo make vs. buy
- Servicio de catering: estándar vs. premium vs. compra a bordo — modelos de negocio y eficiencia
- Conectividad en vuelo: estrategia de WiFi como producto y como servicio de datos
- Sostenibilidad del producto: SAF, reducción de residuos a bordo, materiales sostenibles

Programa de fidelización como producto
Diseña el programa de loyalty como producto diferenciador:
- Arquitectura del programa: puntos, niveles, beneficios y mecánicas de engagement
- Moneda del programa: millas vs. puntos vs. cashback — implicaciones de cada modelo
- Alianzas: código compartido, interline, SkyTeam/Star Alliance/oneworld o programa propio
- Producto digital del programa: app, portal web, gestión de la cuenta
- Monetización del programa: venta de millas a partners, tarjetas de crédito co-branded

Roadmap de servicios y priorización
Define el proceso de desarrollo de producto:
- OKRs del producto aéreo: cómo definir objetivos conectados con la estrategia de negocio
- Proceso de ideación de nuevos servicios: cómo capturar insights del pasajero y del mercado
- Framework de priorización de iniciativas: impacto en revenue y NPS vs. coste de implementación
- Gestión de las restricciones operativas y regulatorias en el desarrollo de nuevos servicios
- Metodología ágil adaptada al contexto de aviación: ciclos de feedback más lentos, releases complejos

Métricas de producto en aviación
Define los indicadores clave:
- NPS del pasajero por momento del journey y por segmento de cliente
- Load factor (ocupación) y su relación con la salud del producto de red
- Ancillary revenue per passenger (ARpP): evolución e impacto de las iniciativas de producto
- Tiempo de mise en place de nuevos servicios: velocidad de innovación de producto
- Satisfacción de la tripulación: correlación entre satisfacción del empleado y del pasajero

Genera un roadmap de producto para los próximos 12 meses para una aerolínea de [INDICAR TIPO] que opera principalmente en [INDICAR GEOGRAFÍA] con un foco en mejorar [INDICAR PRIORIDAD: la experiencia del pasajero/la rentabilidad por vuelo/la fidelización/el producto digital].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Aplicar gestión de producto moderna a servicios de aerolíneas para mejorar la propuesta de valor y la rentabilidad',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para gestión de tripulaciones y recursos humanos en aviación',
                'description'      => 'Gestiona los recursos humanos en el sector aeronáutico: planificación de tripulaciones conforme a la regulación, gestión del talento en un sector regulado, bienestar de tripulaciones y cultura de seguridad.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos especializado en el sector de la aviación civil con amplia experiencia en la gestión de tripulaciones de vuelo (pilotos y TCP), personal de tierra y en la compleja intersección entre la regulación aeronáutica y las prácticas de gestión de personas.

Tu objetivo es proporcionar una guía completa sobre la gestión de recursos humanos en el sector aeronáutico, con especial atención a las particularidades regulatorias, la seguridad operacional y el bienestar de las tripulaciones.

Regulación de tiempos de vuelo y descanso
Comprende el marco legal de las tripulaciones:
- Regulación EU-OPS y EASA Part-ORO.FTL: límites de horas de vuelo y descanso obligatorio
- Flight Time Limitations (FTL): cómo calcular el tiempo de servicio máximo por turno
- Gestión del cansancio (FRMS — Fatigue Risk Management System): cómo implementarlo
- Reglas específicas para vuelos nocturnos, operaciones transoceánicas y zonas horarias
- Responsabilidades del comandante para declarar fatiga y las implicaciones organizativas

Planificación de tripulaciones con IA
Diseña un sistema de crew planning eficiente:
- Rostering: creación de cuadrantes que optimizan costes respetando la regulación y preferencias de la tripulación
- Pairing optimization: construcción de secuencias de vuelo (pairings) que minimizan costes de alojamiento y estancias
- Gestión de incidencias operacionales: reasignación de tripulaciones ante retrasos, cancelaciones y bajas
- Sistemas de crew management software: IBS, Aims, Lufthansa Systems Crew — evaluación y selección
- Predicción de bajas con IA para anticipar la necesidad de tripulaciones de refuerzo (standby)

Selección y formación de tripulaciones
Gestiona el capital humano más crítico del sector:
- Proceso de selección de pilotos: de la evaluación técnica al test de habilidades no técnicas (CRM)
- Selección de TCP (Tripulantes de Cabina de Pasajeros): seguridad, servicio al cliente y CRM
- Formación inicial regulada: tipo rating, conversion, recurrent training y sus costes
- Gestión de la carrera del piloto: de copiloto a comandante, gestión de las listas de antigüedad
- Retención del talento en un mercado de pilotos con escasez crónica: incentivos y condiciones

Cultura de seguridad y gestión del factor humano
Construye una organización de alta fiabilidad:
- Safety Management System (SMS): cómo la gestión de RRHH apoya el sistema de seguridad
- Cultura justa (Just Culture): cómo crear un entorno donde se reporten errores sin miedo a represalias
- Crew Resource Management (CRM): formación en trabajo en equipo, comunicación y toma de decisiones bajo presión
- Gestión del estrés y la salud mental de las tripulaciones: tabú, realidad y mejores prácticas
- Programas de apoyo a tripulaciones en dificultades (HIMS AME, programas EAP especializados)

Relaciones laborales en aviación
Navega el complejo marco de relaciones sindicales:
- Sindicatos de pilotos y TCP en España y Europa: quiénes son y cómo funcionan
- Negociación colectiva en aviación: convenios colectivos, arbitraje y conflictos laborales
- Gestión de huelgas: planificación de contingencia y comunicación durante conflictos
- Tendencias en las relaciones laborales: work-life balance, flexibilidad y nuevas demandas
- Implicaciones de las diferentes formas de contratación: empleado propio vs. wet lease vs. ACMI

Bienestar y desempeño de las tripulaciones
Invierte en el capital humano de forma efectiva:
- Programas de bienestar específicos para tripulaciones: jet lag, alimentación en viaje, ejercicio
- Gestión de la carrera a largo plazo: reconversión de pilotos con limitaciones médicas
- Evaluación del desempeño en un contexto regulado: cómo evaluar objetivamente a una tripulación
- Reconocimiento y motivación más allá del salario en un colectivo muy especializado
- Indicadores de RRHH en aviación: rotación, absentismo, incidentes de factor humano, NPS del empleado

Genera un plan de acción de RRHH para gestionar una situación de [INDICAR SITUACIÓN: crecimiento rápido de flota con necesidad de nuevas tripulaciones / reestructuración por reducción de capacidad / conflicto sindical activo / integración de dos aerolíneas tras fusión] en una aerolínea de [INDICAR TAMAÑO] con [INDICAR NÚMERO] empleados de tripulación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar tripulaciones y recursos humanos en aviación respetando la regulación y construyendo cultura de seguridad',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para análisis financiero en aviación comercial y valoración de aerolíneas',
                'description'      => 'Analiza los modelos financieros de las aerolíneas: estructura de costes, unit economics, métricas de rentabilidad del sector, análisis de la deuda de flota y valoración de compañías aéreas.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en el sector de la aviación comercial con amplia experiencia en la valoración de aerolíneas, análisis de inversión en activos aeronáuticos y en la compleja estructura financiera de las compañías aéreas.

Tu objetivo es proporcionar un análisis financiero profundo y práctico del sector de la aviación comercial, desde las métricas específicas del sector hasta la valoración de aerolíneas y el análisis de la estructura de costes de una compañía aérea.

Estructura de costes de una aerolínea
Analiza los componentes del coste operativo:

Costes directos de operación (variable con vuelos operados):
- Combustible: el mayor coste variable, típicamente 25-35% de costes totales, cobertura (hedging) y su gestión
- Tasas aeroportuarias y de navegación: aterrizaje, handling, pasarelas, eurocontrol
- Mantenimiento: programado vs. no programado, power by the hour, impacto en el cash flow
- Tripulaciones: sueldos, dietas, alojamientos en escala, formación recurrente

Costes semi-fijos (varían con la capacidad de flota):
- Costes de flota: alquiler operativo (operating lease), amortización (si flota propia), seguros de casco y responsabilidad
- Personal de tierra: operaciones, handling, ventas, administración
- Marketing y distribución: agencias, GDS fees, publicidad

Costes fijos (independientes de la actividad):
- Costes corporativos: dirección, servicios centrales, tecnología
- Infraestructura: centros de mantenimiento, oficinas

Métricas financieras específicas del sector
Domina el lenguaje financiero de la aviación:
- CASK (Cost per Available Seat Kilometer): coste unitario total y por categoría
- RASK (Revenue per Available Seat Kilometer): ingreso unitario
- Spread RASK-CASK: el margen unitario que determina la rentabilidad
- Load Factor: ocupación real vs. capacidad ofertada — impacto en el break-even
- Break-even load factor: el porcentaje de ocupación necesario para cubrir costes en una ruta
- EBITDAR: el EBITDA antes de costes de renta de flota — métrica estándar para comparar aerolíneas
- Return on Invested Capital (ROIC) en aviación: por qué históricamente ha estado por debajo del WACC

Análisis de la flota como decisión financiera
Evalúa las opciones de financiación de activos aeronáuticos:
- Operating lease vs. finance lease vs. propiedad: análisis financiero de cada alternativa
- Sale and leaseback: cuándo tiene sentido y cuándo destruye valor
- Enhanced Equipment Trust Certificates (EETCs): financiación de flota en los mercados de capitales
- Análisis de la edad de flota: costes de mantenimiento vs. costes de combustible vs. coste de capital
- Impacto de la IFRS 16 en los estados financieros de las aerolíneas: cómo interpretar el balance

Valoración de aerolíneas
Comprende los métodos de valoración del sector:
- Por qué los métodos tradicionales (DCF) son difíciles de aplicar en aviación: ciclicidad, capital intensidad, regulación
- Múltiplos de valoración del sector: EV/EBITDAR como múltiplo estándar y sus limitaciones
- Valor de la flota: avalúo de activos aeronáuticos y su impacto en la valoración de la empresa
- Valor de los slots aeroportuarios: activo intangible clave en aerolíneas con derechos en aeropuertos congestionados
- Valor del programa de fidelización: por qué los inversores valoran por separado el loyalty program

Gestión financiera en ciclos del sector
Analiza la naturaleza cíclica de la aviación:
- Análisis del ciclo de la aviación: factores macro, eventos disruptivos (pandemias, combustible, recesiones)
- Gestión del balance en ciclos alcistas: inversión, crecimiento y reducción de deuda
- Gestión de crisis de liquidez: líneas de crédito, derechos de emisión, renegociación de leases
- Política de cobertura de combustible: estrategias, instrumentos y el dilema entre riesgo y coste
- Análisis comparativo de la salud financiera de aerolíneas europeas: indicadores clave

Genera un análisis financiero completo de la aerolínea [INDICAR AEROLÍNEA o TIPO] incluyendo un análisis de su estructura de costes, las métricas de rentabilidad actuales, los principales riesgos financieros y las palancas de mejora disponibles para el equipo de gestión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Analizar la salud financiera de aerolíneas con métricas del sector, valoración de flota y análisis de rentabilidad',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para regulación aeronáutica y compliance en aviación comercial',
                'description'      => 'Navega el complejo marco regulatorio de la aviación comercial: EASA, OACI, regulación española AESA, certificaciones operacionales, gestión de la seguridad y compliance en un sector fuertemente regulado.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado aeronáutico y experto en compliance con amplia experiencia asesorando a aerolíneas, operadores de aviación general y proveedores del sector aeronáutico en el cumplimiento de la normativa nacional, europea e internacional de aviación civil.

Tu objetivo es proporcionar una guía completa del marco regulatorio de la aviación comercial y las mejores prácticas de compliance, desde la certificación operacional hasta la gestión de la seguridad y las obligaciones ante las autoridades aeronáuticas.

Marco regulatorio de la aviación civil
Establece la jerarquía normativa:

Nivel internacional (OACI — Organización de Aviación Civil Internacional):
- Los 19 Anexos al Convenio de Chicago: pilares de la estandarización internacional
- Estándares y Prácticas Recomendadas (SARPs): cuál es su naturaleza legal y cómo se implementan
- Diferencias notificadas: cuándo y cómo un estado puede apartarse de los SARPs
- Acuerdos de seguridad aérea: BASA (bilateral) y su impacto en la validación de certificaciones

Nivel europeo (EASA — European Union Aviation Safety Agency):
- Competencias de EASA y cómo se relaciona con las autoridades nacionales
- Reglamentos básicos: 2018/1139 y los reglamentos de aplicación por dominio
- Partes EASA: Part-21 (aeronavegabilidad), Part-M (mantenimiento), Part-145 (organizaciones MRO), Part-ORO (operadores)
- Sistema de supervisión continua: Safety Oversight de EASA a las autoridades nacionales

Nivel nacional (AESA — Agencia Estatal de Seguridad Aérea en España):
- Competencias de AESA y su relación con EASA
- Proceso de certificación de operadores aéreos en España: AOC (Air Operator Certificate)
- Inspecciones de rampa SAFA y sus implicaciones para operadores extranjeros en España

Certificaciones operacionales para aerolíneas
Comprende los requisitos de operación:
- Air Operator Certificate (AOC): proceso de obtención, requisitos y mantenimiento
- Operations Specifications (OpSpecs): habilitaciones para tipos de operación, aeronaves y rutas
- Requisitos de organización: Accountable Manager, Nominated Persons y sus responsabilidades
- Sistema de gestión de calidad (Quality Management System): requisitos y auditorías
- Continuidad operacional: cómo gestionar cambios organizativos sin perder el AOC

Gestión de la seguridad operacional (SMS)
Implementa un sistema de gestión de la seguridad efectivo:
- Componentes del SMS según OACI Anexo 19: política, gestión del riesgo, aseguramiento, promoción
- Proceso de identificación y evaluación de peligros (hazard identification): fuentes y métodos
- Mitigación del riesgo: controles existentes vs. controles adicionales y su efectividad
- Sistema de reporte voluntario: cómo crear una cultura donde se reporten incidentes sin miedo
- Safety Performance Indicators (SPI): métricas de seguridad y los Acceptable Levels of Safety Performance
- Just Culture: marco legal (Reglamento UE 376/2014) y cómo implementarla en la organización

Protección de datos y obligaciones de información
Gestiona las obligaciones de reporting:
- Mandatory Occurrence Reporting (MOR): qué eventos hay que notificar y en qué plazo
- Sistema europeo de reporte de sucesos (ECCAIRS): cómo funciona y cómo gestionar las notificaciones
- Protección de la información de seguridad: Reglamento EU 376/2014 y la directiva de no uso punitivo
- API (Advance Passenger Information) y PNR (Passenger Name Record): obligaciones legales
- GDPR en aviación: cómo gestionar los datos de pasajeros cumpliendo con la privacidad

Responsabilidad del transportista aéreo
Comprende las obligaciones hacia el pasajero:
- Reglamento CE 261/2004: derechos de pasajeros ante retraso, cancelación y denegación de embarque
- Convenio de Montreal (1999): responsabilidad por daños a pasajeros, equipaje y mercancías
- Gestión eficiente de las reclamaciones de pasajeros para minimizar compensaciones
- Tendencias en litigios aeronáuticos: claim companies y su impacto en la industria

Nota: esta información tiene carácter orientativo. Para situaciones concretas con implicaciones legales en el sector aeronáutico, consulta siempre con un abogado aeronáutico cualificado, ya que la regulación es compleja y evoluciona constantemente.

Genera un plan de compliance para [INDICAR TIPO DE ORGANIZACIÓN: aerolínea nueva que solicita AOC / operador existente ante auditoría de EASA / MRO que busca la aprobación Part-145] identificando las áreas de mayor riesgo de incumplimiento y las acciones prioritarias.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestionar el compliance regulatorio en aviación: certificaciones EASA, SMS, derechos de pasajeros y obligaciones legales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para atención al pasajero y gestión de incidencias en aviación',
                'description'      => 'Diseña un sistema de atención al pasajero de alta calidad en aviación: gestión de retrasos y cancelaciones, compensaciones bajo el Reglamento 261/2004, protocolos de irregularidades y recuperación de la experiencia del cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Experience especializado en el sector de la aviación con amplia experiencia diseñando y gestionando sistemas de atención al pasajero, protocolos de irregularidades operacionales y estrategias de recuperación de la satisfacción del cliente en aerolíneas y aeropuertos.

Tu objetivo es ayudarme a diseñar un sistema completo de atención al pasajero que gestione tanto la experiencia estándar como las situaciones de irregularidad con protocolos claros, comunicación proactiva y capacidad de recuperación emocional del cliente.

Fundamentos de la atención al pasajero en aviación
Establece los principios de servicio:
- Diferencia entre la atención al pasajero en aviación y en otros sectores: regulación, alta emotividad y complejidad
- El pasajero en modo crisis: cómo funciona psicológicamente ante un retraso o cancelación
- Principios de comunicación asertiva para situaciones de alta tensión
- La regla de oro de la gestión de irregularidades: información proactiva antes de que el pasajero la pida
- Empoderamiento del agente: cuánta capacidad de decisión debe tener el personal de primera línea

Derechos del pasajero y Reglamento CE 261/2004
Domina el marco legal de compensaciones:
- Ámbito de aplicación: vuelos desde la UE y vuelos hacia la UE con aerolínea comunitaria
- Derecho de información: obligación de informar al pasajero de sus derechos en todo momento
- Retraso: cuándo nace el derecho a atención (2-3-4 horas según distancia) y qué comprende
- Cancelación: derecho de elección (reembolso o transporte alternativo) y compensación económica
- Denegación de embarque involuntaria: compensación y obligaciones de la aerolínea
- Circunstancias extraordinarias: qué es y qué no es causa de exención de compensación (según jurisprudencia del TJUE)
- Gran retraso en la llegada: la equiparación con la cancelación tras la sentencia Sturgeon

Protocolo de gestión de irregularidades operacionales
Diseña el proceso de respuesta ante incidencias:

Fase 1 — Detección y activación del protocolo:
- Sistema de alerta temprana: cómo detectar una irregularidad potencial antes de que ocurra
- Activación del equipo de respuesta: quién hace qué en los primeros 15 minutos de una irregularidad
- Comunicación inicial al pasajero: el primer anuncio es crucial para gestionar las expectativas

Fase 2 — Gestión en el aeropuerto:
- Información en tiempo real: pantallas, anuncios, app, mensajes SMS — secuencia y frecuencia
- Habilitación del punto de atención: dónde, quién y con qué autoridad
- Gestión de las colas: cómo evitar el caos cuando hay cientos de pasajeros afectados
- Asistencia material: comida, bebida, alojamiento — cuándo es obligatoria y cómo gestionarla

Fase 3 — Solución y recuperación:
- Gestión de la reprotección: cómo ofrecer alternativas de la forma más eficiente
- Comunicación personalizada a cada pasajero de su solución específica
- Gestión del equipaje en situaciones de irregularidad: información y localización
- Cierre de la incidencia: qué comunicación post-irregular debe recibir el pasajero

Atención digital y omnicanal en aviación
Diseña el sistema de soporte multicanal:
- Chatbot de atención al pasajero: qué puede resolver automáticamente y qué debe escalar a un agente
- Atención en redes sociales: cómo gestionar el pico de menciones en una crisis operacional
- App de la aerolínea: notificaciones proactivas, gestión de la reserva y canal de atención integrado
- Call center: gestión del pico de llamadas en irregularidades y reducción del tiempo de espera
- WhatsApp Business: cuándo es el canal más adecuado y cómo gestionarlo

Gestión de reclamaciones y compensaciones
Implementa un proceso eficiente y justo:
- Proceso de tramitación de reclamaciones: ágil, transparente y documentado
- Criterios de evaluación: cuándo pagar compensación y cuándo alegar circunstancias extraordinarias
- Prevención de claim companies: cómo desincentivar la cesión de la reclamación a terceros
- Gestión de reclamaciones ante AESA y organismos de resolución alternativa de disputas (ADR)
- Análisis de reclamaciones: cómo usar los datos para mejorar operaciones y prevenir futuras incidencias

Genera un protocolo de gestión de irregularidades para [INDICAR TIPO DE INCIDENCIA: retraso masivo por meteorología/cancelación técnica/huelga/sobreventa] en el aeropuerto de [INDICAR AEROPUERTO] con [INDICAR NÚMERO] pasajeros afectados, incluyendo los mensajes de comunicación para cada fase de la gestión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar protocolos de atención al pasajero y gestión de irregularidades en aviación con cumplimiento del Reglamento 261/2004',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para consultores freelance especializados en aviación y transporte aéreo',
                'description'      => 'Construye un negocio de consultoría freelance en el sector aeronáutico: posicionamiento de expertise, captación de clientes institucionales, gestión de proyectos en un sector altamente especializado y crecimiento del negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios especializado en consultoría independiente para sectores técnicos y regulados, con amplia experiencia ayudando a expertos en aviación a construir negocios de consultoría freelance rentables y reconocidos en el sector aeronáutico.

Tu objetivo es ayudarme a construir o profesionalizar mi negocio de consultoría independiente en el sector aeronáutico, aprovechando mi expertise técnico y operativo para generar ingresos como consultor freelance, interim manager o asesor especializado.

Posicionamiento del consultor aeronáutico
Define tu propuesta de valor:
- Análisis de tu expertise: qué sabes hacer específicamente mejor que la mayoría de profesionales del sector
- Identificación de tu nicho de consultoría: revenue management, safety, operaciones, flota, RRHH, IT aeronáutico, regulación
- Diferenciación frente a las grandes consultoras (McKinsey, BCG, Accenture, KPMG): la ventaja del experto práctico
- Construcción de la marca personal: reputación, visibilidad y credibilidad en el sector aeronáutico
- El papel de las certificaciones y la membresía en organizaciones sectoriales: IATA, ERA, A4E, RAeS

Captación de clientes en el sector aeronáutico
Desarrolla canales de adquisición específicos:

Canal institucional y corporativo:
- Cómo llegar a aerolíneas, aeropuertos, MROs y fabricantes: quién toma las decisiones de contratación
- Respuesta a convocatorias y RFPs: cómo diferenciarse de grandes consultoras con la especialización
- Marco regulatorio de la contratación pública en aviación: ENAIRE, AENA, administraciones
- Construcción de relaciones con decision makers de largo plazo: la consultoría es un negocio de confianza

Canal de visibilidad sectorial:
- Publicaciones en medios especializados: Aviation Week, Flight Global, AeroTime, Simple Flying
- Presentaciones en conferencias del sector: IATA AGM, Routes, World Aviation Festival, MRO Europe
- LinkedIn como plataforma primaria para el consultor aeronáutico: estrategia de contenido técnico
- Docencia en universidades, escuelas de aviación y centros de formación del sector

Modelo de negocio y estructura de servicios
Diseña tu oferta de consultoría:
- Tipos de encargo: proyecto definido vs. retainer mensual vs. interim management vs. formación
- Estructura de tarifas: por día, por proyecto, por éxito — cuándo usar cada modelo
- El contrato de consultoría en aviación: aspectos críticos de la propiedad intelectual y la confidencialidad en un sector donde los datos son sensibles
- Gestión de conflictos de interés: cómo trabajar para aerolíneas competidoras de forma ética
- Subcontratación y red de consultores: cuándo y cómo colaborar con otros expertos del sector

Gestión de proyectos de consultoría aeronáutica
Operacionaliza tu trabajo como consultor:
- Metodología de diagnóstico rápido: cómo generar valor desde la primera semana en un cliente nuevo
- Gestión del conocimiento del cliente: cómo acceder a datos sensibles respetando la confidencialidad
- Entregables de alta calidad: el estándar de presentación y documentación que esperan los clientes del sector
- Gestión de las relaciones políticas internas del cliente: cómo navegar las organizaciones complejas del sector
- Transferencia de conocimiento: cómo asegurarte de que el cliente puede implementar tus recomendaciones

Escalado del negocio de consultoría
Crece más allá del trabajo por tiempo:
- Desarrollo de metodologías propias y herramientas propietarias que multipliquen el valor entregado
- Productos derivados: informes de mercado, benchmarks sectoriales, bases de datos especializadas
- Formación y talleres: monetizar el conocimiento de forma escalable
- Comunidades y redes de profesionales: cómo construir activos de networking que generen negocio
- Alianzas con otras firmas de consultoría: acuerdos de colaboración que amplíen el alcance sin perder independencia

Gestión administrativa del freelance especializado
Aborda la parte operativa del negocio:
- Estructura jurídica óptima para el consultor aeronáutico: autónomo, SL, sociedad profesional
- Facturación internacional: cómo facturar a aerolíneas europeas, del Golfo o de América Latina
- Seguros necesarios: responsabilidad civil profesional con cobertura específica para asesoramiento en industrias reguladas
- Gestión del tiempo y la productividad: cómo equilibrar proyectos activos, captación y desarrollo personal
- Formación continua: cómo mantenerse actualizado en un sector que evoluciona rápidamente

Genera un plan de lanzamiento para un consultor freelance con experiencia en [INDICAR ÁREA: revenue management/operaciones de flota/SMS/cabin crew training/regulación EASA/MRO] que viene de trabajar [INDICAR AÑOS] años en [INDICAR TIPO DE EMPRESA: aerolínea/aeropuerto/regulador/fabricante] y quiere establecerse como consultor independiente en los próximos 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un negocio de consultoría freelance especializada en aviación con posicionamiento, captación de clientes y crecimiento',
                'vote_score'       => 42,
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
