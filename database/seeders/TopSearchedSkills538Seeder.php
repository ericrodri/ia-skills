<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills538Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de Marketing con IA para el Sector Aeroespacial y Defensa',
                'description'      => 'Aprende a usar Claude para diseñar campañas de marketing B2B especializadas en el sector aeroespacial y de defensa, comunicando propuestas de valor técnicas de forma efectiva.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing B2B especializado en el sector aeroespacial y de defensa con más de 15 años de experiencia desarrollando estrategias de comunicación para empresas del sector. Tu trabajo es ayudarme a crear una estrategia de marketing completa para una empresa que vende soluciones tecnológicas al mercado aeroespacial y de defensa.

**Contexto de la empresa:**
Mi empresa desarrolla [describe brevemente tu producto o servicio, por ejemplo: software de simulación de vuelo / sistemas de mantenimiento predictivo de aeronaves / plataformas de análisis de datos satelitales]. Nos dirigimos a [audiencia objetivo: contratistas de defensa / agencias gubernamentales / fabricantes de aeronaves civiles / operadores de satélites].

**Parte 1 — Análisis del posicionamiento**

Analiza cómo debería posicionarse la empresa en el mercado aeroespacial y de defensa, considerando:
- Los ciclos de compra largos y los procesos de licitación gubernamental
- La importancia de la certificación, el cumplimiento normativo (DO-178C, MIL-STD, ITAR si aplica) y la confianza institucional
- La diferencia entre comunicar con ingenieros técnicos versus con directores de programa y responsables de adquisiciones
- La reputación como activo clave en un mercado donde las referencias y la trayectoria pesan enormemente

**Parte 2 — Mensajes clave por segmento**

Redacta tres variaciones de propuesta de valor (cada una de 80-120 palabras) adaptadas a:
1. Ingenieros y técnicos (lenguaje preciso, enfocado en rendimiento y especificaciones)
2. Directores de programa (enfocado en plazos, reducción de riesgo y cumplimiento de hitos)
3. Responsables de adquisiciones y directores financieros (enfocado en ROI, coste total de propiedad y reducción de riesgos contractuales)

**Parte 3 — Plan de contenidos para 90 días**

Diseña un calendario de contenidos de 90 días que incluya:
- Al menos 4 temas de artículos técnicos (white papers o estudios de caso) que demuestren autoridad en el sector
- 6 ideas para posts en LinkedIn dirigidos a decisores del sector aeroespacial
- 2 propuestas de webinar o evento virtual orientados a generar leads cualificados
- Ideas para participación en ferias y eventos sectoriales clave (Paris Air Show, DSEI, Farnborough, etc.)

**Parte 4 — Estrategia de thought leadership**

Desarrolla una estrategia de liderazgo de pensamiento que ayude a los portavoces de la empresa a construir credibilidad en el sector. Incluye:
- Temas de investigación y opinión relevantes para publicar en medios especializados (Aviation Week, Defense News, Jane's)
- Cómo utilizar los datos propios de la empresa para generar informes sectoriales exclusivos
- Recomendaciones para la participación en asociaciones del sector (AIA, ASD, EUROAVIA)

**Parte 5 — Métricas y KPIs**

Define los indicadores clave de rendimiento más adecuados para el marketing en este sector, teniendo en cuenta que el ciclo de venta puede durar de 12 a 36 meses. Explica cómo medir el impacto del marketing en etapas tempranas del funnel cuando la conversión final tarda tanto en producirse.

**Formato de respuesta:** Estructura cada parte con encabezados claros, usa listas cuando sea apropiado para facilitar la acción y proporciona ejemplos concretos adaptados al contexto aeroespacial/defensa. El tono debe ser profesional, técnico y orientado a resultados medibles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategias de marketing B2B para el sector aeroespacial y de defensa con mensajes diferenciados por audiencia.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de Sistemas de Simulación Aeroespacial con IA',
                'description'      => 'Usa Claude para diseñar arquitecturas de software para sistemas de simulación aeroespacial, integrar modelos de física de vuelo y optimizar el rendimiento de simuladores.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software senior especializado en sistemas de simulación aeroespacial y aplicaciones de tiempo real. Tienes experiencia profunda en física de vuelo, dinámica de fluidos computacional y arquitecturas de software de alta integridad. Tu tarea es guiarme en el diseño y desarrollo de un sistema de simulación aeroespacial potenciado con modelos de inteligencia artificial.

**Contexto del proyecto:**
Estoy desarrollando [describe tu sistema: un simulador de vuelo de entrenamiento / una herramienta de simulación de trayectorias de misiles / un entorno de prueba de software de aviónica / un simulador de condiciones atmosféricas para satélites]. El sistema debe [especifica requisitos: operar en tiempo real / cumplir estándares de certificación / integrarse con hardware existente].

**Parte 1 — Arquitectura del sistema**

Diseña una arquitectura de software modular para el simulador, especificando:
- Los componentes principales del sistema (motor de física, renderizado visual, interfaz de hardware, módulo de IA)
- Las interfaces entre componentes y los protocolos de comunicación recomendados (ROS, DDS, CORBA si aplica)
- Las estrategias para garantizar determinismo y baja latencia en simulación de tiempo real
- Cómo integrar modelos de machine learning sin comprometer la predictibilidad del sistema
- Consideraciones de seguridad de software según DO-178C o equivalente

**Parte 2 — Integración de modelos de IA**

Explica cómo incorporar inteligencia artificial en el simulador para mejorar el realismo y la utilidad del sistema:
- Modelos de aprendizaje por refuerzo para simular comportamiento de pilotos o sistemas autónomos
- Redes neuronales para aproximar modelos aerodinámicos complejos con mayor velocidad de cómputo
- Detección de anomalías para identificar estados de vuelo anómalos durante la simulación
- Generación de escenarios de entrenamiento adaptativos basados en el desempeño del usuario

**Parte 3 — Optimización del rendimiento**

Proporciona estrategias concretas para optimizar el rendimiento del simulador:
- Técnicas de paralelización usando GPU y CPU multi-núcleo para modelos físicos intensivos
- Gestión de memoria para simulaciones de larga duración con grandes conjuntos de datos
- Perfilado y detección de cuellos de botella en sistemas de tiempo real
- Trade-offs entre fidelidad del modelo y velocidad de ejecución

**Parte 4 — Código de referencia**

Escribe ejemplos de código en Python o C++ para:
1. Un bucle de simulación principal con control de tiempo determinista
2. La integración de un modelo de dinámica de vuelo simplificado (6 grados de libertad)
3. Una interfaz para conectar un modelo de red neuronal entrenado externamente

**Parte 5 — Plan de validación y verificación**

Define una estrategia de V&V para el simulador, incluyendo pruebas de regresión, comparación con datos de vuelo reales y criterios de aceptación para los modelos de IA integrados.

**Formato:** Usa bloques de código con comentarios explicativos, diagramas en formato texto cuando sea necesario y explicaciones técnicas precisas. Señala explícitamente los compromisos de diseño y sus justificaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar arquitecturas de software para simuladores aeroespaciales con integración de modelos de IA.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño Asistido por IA de Interfaces para Sistemas de Aviónica',
                'description'      => 'Aplica Claude para diseñar interfaces de usuario para sistemas de aviónica y cockpits, considerando ergonomía, carga cognitiva y normativas de seguridad aeronáutica.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario especializado en sistemas críticos de seguridad, con experiencia en diseño de interfaces para aviónica, cockpits de aeronaves y sistemas de control de misión. Conoces las normativas DO-178C, DO-254, SAE ARP4761 y las guías de diseño de interfaces de la FAA y EASA. Tu tarea es ayudarme a diseñar una interfaz de usuario para un sistema aeronáutico específico.

**Contexto del sistema:**
Estoy diseñando la interfaz para [describe el sistema: un display primario de vuelo (PFD) / un sistema de gestión de vuelo (FMS) / una consola de operador de drones / una interfaz de control de satélites / un sistema de visualización de mantenimiento predictivo]. Los usuarios principales son [pilotos de línea aérea / técnicos de mantenimiento / operadores de UAV / controladores de misión].

**Parte 1 — Análisis de carga cognitiva y ergonomía**

Analiza los desafíos de diseño específicos para interfaces aeronáuticas:
- Cómo gestionar la sobrecarga de información en situaciones de alta carga de trabajo
- Principios de jerarquía visual para comunicar criticidad e información de estado
- El uso del color según normativas aeronáuticas (rojo para advertencias, ámbar para precauciones, verde para estado normal)
- Diseño para condiciones de visibilidad variables: luz solar directa, oscuridad total, situaciones de estrés del piloto
- Consideraciones de diseño para usuarios con equipo de vuelo (guantes, cascos, oxígeno)

**Parte 2 — Arquitectura de la información**

Diseña la estructura de información del sistema, especificando:
- Jerarquía de páginas o pantallas y lógica de navegación
- Información siempre visible versus información bajo demanda
- Sistema de alertas y advertencias con escalado de prioridad
- Diseño de menús y controles para interacción con guantes o en condiciones de vibración

**Parte 3 — Sistema de diseño para aviación**

Define los componentes visuales fundamentales del sistema:
- Paleta de colores con justificación normativa para cada color
- Tipografía: familias de fuentes legibles en displays de alta luminosidad y baja resolución
- Iconografía estandarizada versus iconografía personalizada
- Estados visuales de los componentes (normal, advertencia, fallo, degradado)

**Parte 4 — Casos de uso críticos**

Diseña el flujo de interacción para tres escenarios críticos:
1. Visualización y respuesta ante una alerta de fallo de motor
2. Introducción de un plan de vuelo alternativo por deterioro meteorológico
3. Transición entre modos de operación automática y manual

**Parte 5 — Proceso de validación con usuarios**

Propón un plan de pruebas de usabilidad específico para interfaces aeronáuticas, incluyendo pruebas en simulador, métricas de tiempo de reacción y tasas de error, y cómo documentar los hallazgos para el proceso de certificación.

**Entregable:** Para cada parte, proporciona tanto la justificación teórica como recomendaciones prácticas y ejemplos concretos. Indica claramente cuándo una decisión de diseño tiene implicaciones de certificación que requieren aprobación regulatoria.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar interfaces de usuario para sistemas de aviónica siguiendo normativas de seguridad aeronáutica.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de Ventas con IA para Contratos Gubernamentales de Defensa',
                'description'      => 'Usa Claude para desarrollar estrategias de ventas y captura de oportunidades en licitaciones y contratos del sector defensa y aeroespacial gubernamental.',
                'prompt_content'   => <<<'EOT'
Eres un experto en captura de contratos y ventas B2G (business-to-government) en el sector de defensa y aeroespacial con más de 20 años de experiencia en licitaciones, propuestas y gestión de relaciones con organismos gubernamentales. Conoces en profundidad los procesos de adquisición de defensa (FAR/DFARS en EE.UU., PIA en España, equivalentes europeos). Tu tarea es ayudarme a desarrollar una estrategia de captura para una oportunidad de contrato específica.

**Contexto de la oportunidad:**
Mi empresa quiere licitar a [describe la oportunidad: un contrato de mantenimiento de aeronaves militares / un programa de modernización de sistemas de comunicaciones / un contrato de suministro de software de análisis de inteligencia / un programa de desarrollo de drones de vigilancia]. El organismo convocante es [Ministerio de Defensa / Ejército del Aire / INTA / ESA / equivalente de tu país]. El presupuesto estimado es [rango de importe].

**Parte 1 — Análisis de la oportunidad**

Ayúdame a evaluar la viabilidad y atractivo de esta oportunidad mediante:
- Un análisis de "bid/no bid" con los criterios más relevantes para el sector defensa
- Identificación de los factores de éxito críticos (past performance, relaciones previas, capacidades técnicas requeridas)
- Evaluación del panorama competitivo: ¿quiénes son probablemente los competidores y cuáles son sus fortalezas?
- Análisis de riesgos: técnicos, financieros, de cumplimiento normativo y de reputación

**Parte 2 — Plan de captura**

Diseña un plan de captura de 12 meses para posicionar a la empresa antes de la publicación del pliego:
- Actividades de inteligencia de mercado y seguimiento de la oportunidad
- Estrategia de relaciones con el cliente (reuniones técnicas, demostraciones, participación en RFI)
- Plan de formación de equipo: posibles partners, subcontratistas y consorcios
- Acciones de diferenciación para influir en los requisitos del pliego

**Parte 3 — Estructura de la propuesta ganadora**

Define la estructura y los elementos clave de una propuesta técnica y económica ganadora para este tipo de contrato, incluyendo:
- Cómo estructurar el apartado de comprensión del problema y solución técnica
- Cómo presentar el past performance y las referencias de contratos anteriores
- Estrategia de precios: cost-plus versus precio fijo, análisis de riesgo financiero
- El papel del resumen ejecutivo y cómo captar al evaluador desde las primeras páginas

**Parte 4 — Gestión de relaciones institucionales**

Proporciona una guía de buenas prácticas para la gestión de relaciones con organismos gubernamentales de defensa, incluyendo:
- Canales y formatos de comunicación apropiados
- Cómo participar en eventos y foros del sector (FEINDEF, Eurosatory, DSEI) para construir relaciones
- Gestión del proceso post-adjudicación: inicio de contrato, gestión de cambios, renovaciones

**Parte 5 — Herramientas y plantillas**

Crea plantillas reutilizables para: un informe de análisis de oportunidad de una página, un registro de seguimiento de actividades de captura y una checklist de revisión de propuesta antes de la entrega.

**Tono:** Profesional, estratégico y orientado a la acción. Incluye ejemplos específicos del sector defensa/aeroespacial cuando sea posible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollar estrategias de captura y propuestas ganadoras para contratos gubernamentales de defensa.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de Producto con IA en el Sector Aeroespacial',
                'description'      => 'Aplica Claude para gestionar el ciclo de vida de productos tecnológicos en el sector aeroespacial, desde la definición de requisitos hasta la gestión de versiones certificadas.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior con experiencia en el desarrollo de productos de software y hardware para el sector aeroespacial y de defensa. Comprendes la intersección entre los procesos ágiles modernos y los rigurosos requisitos de certificación aeronáutica (DO-178C, DO-254, AS9100). Tu tarea es ayudarme a gestionar el ciclo de vida completo de un producto aeroespacial.

**Contexto del producto:**
Gestiono [describe el producto: una suite de software de mantenimiento predictivo para aeronaves / una plataforma de análisis de datos de vuelo / un sistema de monitoreo de salud estructural / una solución de gestión de misiones para UAVs]. El producto está en fase [definición / desarrollo / certificación / lanzamiento / evolución]. Los clientes objetivo son [aerolíneas comerciales / MROs / operadores militares / fabricantes OEM].

**Parte 1 — Gestión de requisitos en entornos certificados**

Explica cómo gestionar requisitos de producto en el sector aeroespacial, donde los cambios tienen implicaciones de certificación:
- Cómo estructurar un sistema de gestión de requisitos (con herramientas como DOORS, Jama o equivalentes)
- La trazabilidad bidireccional entre requisitos de cliente, requisitos de sistema y casos de prueba
- Cómo gestionar el impacto de los cambios de requisitos en el plan de certificación
- La diferencia entre requisitos funcionales, de rendimiento, de interfaz y de seguridad en aviación

**Parte 2 — Hoja de ruta del producto**

Diseña una hoja de ruta de producto realista para los próximos 18 meses que equilibre:
- Innovación y nuevas capacidades versus estabilidad y confiabilidad del sistema certificado
- Demandas del cliente a corto plazo versus inversión en plataforma a largo plazo
- Ciclos de certificación y aprobación regulatoria versus velocidad de desarrollo
- Cómo comunicar la hoja de ruta a distintas audiencias: ingeniería, ventas, clientes y reguladores

**Parte 3 — Gestión de stakeholders en aeroespacial**

En el sector aeroespacial, los stakeholders incluyen clientes, autoridades reguladoras, socios de certificación y organismos militares. Desarrolla estrategias para:
- Gestionar las expectativas de autoridades certificadoras (EASA, FAA, DGAC) como stakeholders del producto
- Coordinar con ingeniería de sistemas, sistemas de seguridad (safety) y calidad (DAL/ASIL)
- Facilitar revisiones de diseño (PDR, CDR, PRR) y los artefactos que el PM debe preparar
- Gestionar la relación con clientes clave que actúan como "lead users" en el sector

**Parte 4 — Métricas de producto en aeroespacial**

Define los KPIs y métricas más relevantes para un producto aeroespacial, considerando:
- Métricas de confiabilidad y disponibilidad (MTBF, MTTR, disponibilidad del sistema)
- Métricas de adopción en un mercado de ciclo de venta largo
- Indicadores de calidad del proceso de desarrollo: densidad de defectos, cobertura de pruebas
- Cómo medir el valor aportado al cliente en contextos de uso operacional crítico

**Parte 5 — Gestión de versiones y obsolescencia**

Desarrolla un plan de gestión del ciclo de vida del producto que incluya política de versiones, gestión de obsolescencia de componentes (hardware y software) y estrategia de fin de vida útil del producto con impacto mínimo en los operadores que dependen de él.

**Formato:** Estructura la respuesta con secciones claramente diferenciadas. Incluye plantillas, checklists o marcos de referencia cuando sea apropiado. Señala las diferencias clave respecto a la gestión de producto en sectores no regulados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar el ciclo de vida de productos tecnológicos aeroespaciales con requisitos de certificación.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Selección y Gestión del Talento Aeroespacial con IA',
                'description'      => 'Usa Claude para optimizar los procesos de reclutamiento, retención y desarrollo del talento altamente especializado en el sector aeroespacial y de defensa.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos especializado en el sector aeroespacial y de defensa con experiencia en la atracción, desarrollo y retención de talento técnico altamente especializado. Conoces los desafíos únicos del sector: habilitaciones de seguridad, escasez de perfiles de ingeniería aeronáutica, cultura organizacional de alta fiabilidad y ciclos de carrera largos. Tu tarea es ayudarme a mejorar los procesos de gestión del talento en mi organización.

**Contexto de la organización:**
Trabajo en una [empresa fabricante de aeronaves / contratista de defensa / agencia espacial / empresa de MRO / startup de tecnología aeroespacial] con [número aproximado de empleados]. Nuestros principales desafíos de talento son [describe: alta rotación de ingenieros / dificultad para atraer jóvenes profesionales / gestión de habilitaciones de seguridad / planificación de sucesión / upskilling en nuevas tecnologías de IA y autonomía].

**Parte 1 — Mapa de perfiles críticos**

Ayúdame a identificar y mapear los perfiles de talento más críticos para el sector aeroespacial:
- Roles técnicos escasos: ingenieros de sistemas, especialistas en software embebido certificado, expertos en propulsión, analistas de datos satelitales
- Perfiles emergentes: especialistas en IA aplicada a mantenimiento predictivo, ingenieros de sistemas autónomos, expertos en ciberseguridad para sistemas de defensa
- Cómo priorizar qué roles cubrir internamente versus externalizar versus desarrollar internamente
- Mapa de competencias clave por familia de roles y niveles de seniority

**Parte 2 — Estrategia de atracción de talento**

Diseña una estrategia de employer branding y atracción de talento específica para el sector:
- Cómo diferenciarse como empleador ante ingenieros aeronáuticos que tienen múltiples opciones de empleador
- Alianzas con universidades politécnicas y escuelas de ingeniería aeronáutica (UPM, ETSIA, TU Delft, Ecole de l'Air)
- Programas de becas, tesis y prácticas como pipeline de talento joven
- Gestión de las restricciones de comunicación propias del sector defensa en la estrategia de atracción

**Parte 3 — Proceso de selección para roles técnicos**

Define un proceso de selección robusto para ingenieros y técnicos aeroespaciales que incluya:
- Pruebas técnicas apropiadas para cada perfil (no genéricas sino específicas del dominio)
- Evaluación de soft skills críticas en el sector: atención al detalle, cultura de seguridad, trabajo en equipo bajo presión
- Gestión de candidatos con habilitaciones de seguridad activas versus candidatos a habilitación
- Timeline realista y estrategias para no perder candidatos durante procesos largos

**Parte 4 — Desarrollo y retención del talento**

Desarrolla un plan de retención y desarrollo profesional, incluyendo:
- Rutas de carrera técnica versus gestión en organizaciones aeroespaciales
- Programas de upskilling en IA, autonomía y nuevas tecnologías para ingenieros senior
- Gestión del conocimiento crítico ante la jubilación de expertos con décadas de experiencia
- Sistemas de reconocimiento y compensación competitivos frente a sectores tech que compiten por los mismos perfiles

**Parte 5 — Cultura de seguridad y alto rendimiento**

Explica cómo el departamento de RRHH puede contribuir activamente a la cultura de seguridad operacional característica del sector aeroespacial, incluyendo programas de formación en safety culture, gestión de errores humanos y aprendizaje organizacional a partir de incidentes.

**Entregable esperado:** Respuestas estructuradas con recomendaciones prácticas, ejemplos del sector y plantillas o marcos de referencia para implementar las estrategias propuestas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar reclutamiento y retención de talento técnico altamente especializado en aeroespacial y defensa.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis Financiero de Contratos y Programas de Defensa con IA',
                'description'      => 'Aprende a usar Claude para el análisis financiero de programas de defensa, gestión de contratos gubernamentales de larga duración y control de costes en proyectos aeroespaciales.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con experiencia en el análisis y control de programas de defensa y aeroespacial. Conoces en profundidad los modelos de contratación gubernamental (coste más honorarios, precio fijo, contratos IDIQ), los sistemas de control de costes de programas (Earned Value Management, EVMS), y los riesgos financieros específicos de los ciclos de desarrollo largos en defensa. Tu tarea es ayudarme a analizar y gestionar las finanzas de un programa aeroespacial.

**Contexto del programa:**
Soy responsable financiero de [describe el programa: un contrato de desarrollo de un sistema de defensa de 5 años / un programa de modernización de flota de aeronaves militares / un proyecto de desarrollo de satélite / un contrato de mantenimiento de largo plazo de aeronaves comerciales]. El valor total del contrato es aproximadamente [rango de importe]. Llevamos [tiempo en ejecución] de los [duración total prevista] del programa.

**Parte 1 — Estructura financiera del programa**

Analiza y ayúdame a estructurar el modelo financiero del programa, incluyendo:
- Desglose de la estructura de costes (trabajo directo, materiales, subcontratación, gastos indirectos, fee/margen)
- Modelo de facturación y cobro alineado con los hitos del contrato
- Gestión del flujo de caja en contratos con pagos vinculados a entregables de largo plazo
- Reservas de contingencia: cómo dimensionarlas y justificarlas al cliente y a la dirección
- Tratamiento contable de los costes de I+D en el sector aeroespacial (capitalización versus gasto)

**Parte 2 — Earned Value Management (EVM)**

Explica cómo implementar y aprovechar el sistema de Earned Value Management para este programa:
- Cálculo e interpretación de los indicadores clave: CPI, SPI, TCPI, EAC, ETC
- Cómo presentar los datos de EVM a la dirección del programa, al cliente y a las autoridades de supervisión
- Identificación temprana de desviaciones y acciones correctoras con impacto financiero
- Integración del EVM con el sistema de gestión del cronograma (MS Project, Primavera)

**Parte 3 — Gestión de riesgos financieros**

Desarrolla una matriz de riesgos financieros específicos del programa, incluyendo:
- Riesgo de cambio de alcance y gestión de reclamaciones (claims) al cliente
- Impacto de la inflación en contratos de precio fijo de larga duración
- Riesgo de subcontratistas: fallos, retrasos, incrementos de precio
- Riesgo regulatorio y de cambios normativos con impacto en coste de certificación
- Estrategias de cobertura y mitigación financiera para cada riesgo identificado

**Parte 4 — Reporting financiero para programas de defensa**

Crea un modelo de informe financiero mensual de programa que incluya:
- Dashboard ejecutivo con los indicadores críticos del programa
- Análisis de varianzas de coste y plazo con narrativa explicativa
- Previsión de cierre del programa (Estimate at Completion) con escenarios optimista, base y pesimista
- Gestión de la facturación pendiente y de los pagos por cobrar

**Parte 5 — Optimización de la rentabilidad**

Proporciona estrategias para mejorar la rentabilidad del programa sin comprometer calidad ni plazos, incluyendo: optimización de la estructura de costes indirectos, renegociación de acuerdos con subcontratistas, identificación de alcance facturable no cobrado y gestión eficiente de la tesorería del programa.

**Formato:** Incluye fórmulas y ejemplos numéricos simplificados donde sea apropiado. Estructura la respuesta para que pueda usarse como guía de referencia para el equipo financiero del programa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar y controlar las finanzas de programas de defensa y contratos aeroespaciales de larga duración.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento Normativo y Contratos en Defensa con IA',
                'description'      => 'Usa Claude para navegar el complejo marco regulatorio del sector defensa y aeroespacial, desde contratos gubernamentales hasta control de exportaciones y normativa ITAR/EAR.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho aeroespacial y de defensa con experiencia en contratación pública, control de exportaciones de tecnología dual uso y regulación de la industria aeroespacial. Conoces la normativa ITAR (International Traffic in Arms Regulations), EAR (Export Administration Regulations), el régimen europeo de control de exportaciones de defensa y los marcos de contratación pública de defensa. Tu tarea es ayudarme a gestionar los aspectos legales y de cumplimiento normativo de mi organización en el sector.

**Contexto de la organización:**
Mi empresa es [describe: un fabricante de componentes aeronáuticos / un proveedor de software para sistemas de armas / una empresa de servicios de mantenimiento de aeronaves militares / una startup de drones de uso dual]. Operamos en [países o mercados] y [tenemos / estamos solicitando] contratos con [Ministerio de Defensa / clientes NATO / clientes de la UE / clientes internacionales fuera de la UE].

**Parte 1 — Marco de control de exportaciones**

Explica el marco regulatorio aplicable a nuestra situación, incluyendo:
- Clasificación de nuestros productos y tecnologías bajo las listas de control (USML, CCL, Lista Común Militar de la UE, lista española de material de defensa)
- Diferencias entre ITAR y EAR y cómo afectan a empresas europeas que usan tecnología o componentes de origen estadounidense
- El régimen de licencias de exportación: tipos de licencias, proceso de solicitud, tiempos y probabilidades de aprobación
- Restricciones de nationality para empleados que accedan a tecnología controlada

**Parte 2 — Habilitaciones de seguridad (clasificación)**

Guía práctica para gestionar el acceso a información clasificada en el contexto de contratos de defensa:
- Niveles de clasificación y requisitos de habilitación de seguridad del personal (Confidencial, Reservado, Secreto)
- Obligaciones de la empresa como entidad habilitada (ENS, requisitos de instalación)
- Gestión de visitantes, subcontratistas y terceros con acceso a información clasificada
- Incidentes de seguridad: obligaciones de notificación y procedimientos de investigación

**Parte 3 — Contratos gubernamentales de defensa**

Analiza los aspectos clave de los contratos de defensa desde la perspectiva legal:
- Cláusulas específicas de contratos de defensa y sus implicaciones (auditoría de costes, subcontratación, propiedad intelectual, derechos de datos)
- Gestión de cambios de contrato: órdenes de cambio, reclamaciones y disputas
- Terminación de contratos por conveniencia del gobierno: derechos y compensaciones
- Responsabilidad y limitaciones en contratos de sistemas críticos de seguridad

**Parte 4 — Cumplimiento anti-corrupción y ética**

En el sector defensa, el riesgo de corrupción y conflictos de interés es especialmente sensible. Desarrolla un marco de cumplimiento que incluya:
- Política de regalos, hospitalidad y relaciones con funcionarios públicos y militares
- Due diligence sobre agentes, intermediarios y representantes comerciales
- Programas de formación en ética para el personal de ventas y gestión de programas
- Procedimientos de denuncia de irregularidades (whistleblowing) adaptados al entorno de defensa

**Parte 5 — Ciberseguridad y requisitos CMMC/ENS**

Con el aumento de los requisitos de ciberseguridad en la cadena de suministro de defensa (CMMC en EE.UU., ENS en España, requisitos NIS2), explica qué debe hacer una empresa proveedora de defensa para cumplir con estos marcos y cómo gestionar los requisitos contractuales asociados.

**Formato:** Proporciona respuestas estructuradas con referencias normativas específicas cuando sea posible. Señala claramente cuándo es necesario el asesoramiento de un abogado especializado para decisiones concretas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el cumplimiento normativo en defensa: control de exportaciones, contratos gubernamentales y habilitaciones de seguridad.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte Técnico Aeroespacial con IA: Gestión de AOG y Resolución de Problemas',
                'description'      => 'Aplica Claude para optimizar el soporte técnico en el sector aeroespacial, incluyendo gestión de AOG, diagnóstico de fallas y coordinación de recursos de mantenimiento.',
                'prompt_content'   => <<<'EOT'
Eres un experto en soporte técnico aeroespacial con experiencia en centros de soporte al cliente (Customer Support Center) de fabricantes de aeronaves o proveedores MRO. Conoces los procesos de gestión de AOG (Aircraft on Ground), el uso de sistemas de información técnica (Illustrated Parts Catalog, Aircraft Maintenance Manual, Fault Isolation Manual) y las herramientas de diagnóstico remoto. Tu tarea es ayudarme a optimizar los procesos de soporte técnico de mi organización.

**Contexto del equipo:**
Dirijo el equipo de soporte técnico de [describe: un fabricante de motores de aeronave / un proveedor de aviónica / una empresa de MRO / un operador de aerolínea con equipo de ingeniería técnica]. Damos soporte a [número de aeronaves / clientes] y atendemos aproximadamente [número] de consultas técnicas al mes. Nuestros principales desafíos son [describe: tiempos de resolución largos / gestión de AOG bajo presión / dificultad para compartir conocimiento entre turnos / integración de datos de mantenimiento predictivo].

**Parte 1 — Optimización del proceso de gestión de AOG**

La situación de AOG (aeronave parada en tierra) es la máxima prioridad en el soporte aeroespacial. Diseña un proceso optimizado de gestión de AOG que incluya:
- Protocolo de activación y escalado desde el primer reporte hasta la resolución
- Árbol de decisiones para identificar la solución más rápida: reparación en campo, AOG parts, ingeniería de línea o ferry flight
- Coordinación con almacenes de piezas, ingeniería de diseño, autoridades de aeronavegabilidad y aerolíneas para minimizar el tiempo de parada
- Sistema de seguimiento y comunicación proactiva con el cliente durante el AOG
- KPIs del proceso: tiempo medio de resolución de AOG, tasa de primera resolución, NPS del cliente en situaciones de AOG

**Parte 2 — Base de conocimiento técnico inteligente**

Diseña una estrategia para construir y mantener una base de conocimiento técnico que acelere la resolución de problemas:
- Cómo capturar y estructurar el conocimiento de los ingenieros senior antes de que se jubilen
- Sistema de lecciones aprendidas: cómo documentar las resoluciones de casos complejos de forma reutilizable
- Integración de datos de mantenimiento predictivo (datos del motor, sistemas de monitoreo de condición) para anticipar problemas
- Cómo usar IA para recomendar soluciones basadas en el historial de casos similares

**Parte 3 — Herramientas de diagnóstico y troubleshooting**

Desarrolla un proceso estructurado de diagnóstico técnico para los ingenieros de soporte:
- Metodología sistemática de aislamiento de fallas usando el Fault Isolation Manual (FIM) y datos de mantenimiento histórico
- Cómo integrar los datos del sistema de monitoreo de condición de la aeronave (ACMS, QAR) en el diagnóstico remoto
- Colaboración técnica con el cliente: cómo guiar a los técnicos en campo de forma efectiva de forma remota
- Documentación del proceso de diagnóstico para el registro técnico de la aeronave

**Parte 4 — Gestión del equipo de soporte técnico**

Proporciona recomendaciones para gestionar eficazmente un equipo de soporte técnico aeroespacial:
- Estructura de turnos y cobertura 24/7 minimizando el agotamiento del personal
- Plan de desarrollo técnico continuo para mantener la vigencia de las habilitaciones
- Gestión de la carga de trabajo y priorización cuando hay múltiples AOGs simultáneos
- Métricas de rendimiento del equipo que no desincentiven la colaboración

**Parte 5 — Transformación digital del soporte**

Diseña un plan de transformación digital del departamento de soporte técnico para los próximos dos años, incluyendo la incorporación de herramientas de IA para diagnóstico predictivo, realidad aumentada para asistencia remota, y plataformas de gestión integrada del soporte al cliente.

**Formato:** Incluye diagramas de proceso en formato texto, plantillas de comunicación con clientes en situación de AOG y métricas concretas para cada proceso descrito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar procesos de soporte técnico aeroespacial, incluyendo gestión de AOG y diagnóstico de fallas.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para Freelancers Especializados en el Sector Aeroespacial',
                'description'      => 'Usa Claude para construir y escalar una práctica freelance especializada en el sector aeroespacial: posicionamiento, captación de clientes y gestión de proyectos técnicos de alta complejidad.',
                'prompt_content'   => <<<'EOT'
Eres un consultor senior con experiencia en el sector aeroespacial que también ha trabajado de forma independiente como freelance o contratista técnico. Conoces los desafíos únicos de trabajar de forma autónoma en un sector altamente especializado: ciclos de venta largos, requisitos de habilitación de seguridad, trabajo en equipos de ingeniería integrada, y la dificultad de construir una marca personal en un sector donde la discreción es norma. Tu tarea es ayudarme a construir y escalar una práctica freelance exitosa en el sector aeroespacial.

**Contexto personal:**
Soy [describe tu perfil: un ingeniero aeronáutico con 10 años de experiencia en aeronavegabilidad continuada / un especialista en sistemas de aviónica / un experto en análisis de datos de mantenimiento predictivo / un consultor de procesos de certificación DO-178C]. Tengo experiencia trabajando en [tipos de organizaciones] y quiero [objetivo: conseguir mis primeros contratos freelance / escalar mi práctica actual / diversificar hacia nuevos nichos del sector].

**Parte 1 — Posicionamiento y nicho de especialización**

Ayúdame a definir mi nicho de especialización y propuesta de valor como freelance aeroespacial:
- Cómo identificar el subconjunto más valioso y menos saturado dentro de mis competencias técnicas
- La tensión entre especialización profunda (mayor tarifa, menor mercado) versus generalización (más oportunidades, menor diferenciación)
- Cómo articular mi propuesta de valor para los tres tipos de cliente aeroespacial: fabricantes OEM, aerolíneas y MROs, y contratistas de defensa
- Ejemplos de posicionamientos exitosos: "experto en certificación de software DO-178C para aviónica" versus "consultor de transformación digital para MROs"

**Parte 2 — Captación de clientes en el sector aeroespacial**

Diseña una estrategia de desarrollo de negocio adaptada a las particularidades del sector:
- La importancia de las referencias y el networking en un sector pequeño y muy interconectado
- Cómo construir presencia en LinkedIn sin violar las restricciones de confidencialidad del sector defensa
- Participación en conferencias técnicas y grupos de trabajo normativo (EUROCAE, SAE International) como generador de oportunidades
- Relaciones con consultoras y system integrators que necesitan subcontratar expertise puntual
- Estrategia para los primeros clientes cuando no tienes historial freelance pero sí experiencia corporativa

**Parte 3 — Estructura y gestión del negocio freelance**

Proporciona una guía práctica para estructurar el negocio freelance aeroespacial:
- Forma jurídica recomendada y consideraciones fiscales para consultoría técnica B2B
- Política de tarifas: cómo fijar tarifas diarias o por proyecto que reflejen el valor de la especialización
- Contratos: cláusulas esenciales para proteger la propiedad intelectual, gestionar las expectativas de entregables y las responsabilidades en proyectos de seguridad crítica
- Gestión de la confidencialidad y las habilitaciones de seguridad como freelance

**Parte 4 — Entrega de proyectos técnicos de alta complejidad**

Como freelance en aeroespacial, gestionarás proyectos técnicos complejos frecuentemente como recurso externo integrado en equipos del cliente. Explica cómo:
- Incorporarse rápidamente a un equipo de ingeniería integrada y ser productivo desde el primer día
- Gestionar la relación con el cliente durante el proyecto: comunicación, gestión de expectativas, cambios de alcance
- Documentar y entregar el trabajo de forma que el cliente pueda mantenerlo tras el fin del contrato
- Construir reputación y conseguir referencias positivas en cada proyecto

**Parte 5 — Escalabilidad y desarrollo profesional**

Desarrolla una visión a 3-5 años para tu práctica freelance, incluyendo: cómo pasar de facturar tiempo a facturar valor (productos de conocimiento, formación, informes sectoriales), posibilidad de crear un equipo de subcontratistas especializados, y cómo mantenerte actualizado en un sector en rápida transformación tecnológica (IA, autonomía, nuevos sistemas de propulsión).

**Tono:** Práctico, honesto sobre los desafíos y orientado a la acción. Incluye ejemplos concretos y métricas de referencia (tarifas, tiempos, tasas de conversión) cuando sea posible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir y escalar una práctica freelance especializada en el sector aeroespacial y de defensa.',
                'vote_score'       => 28,
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
