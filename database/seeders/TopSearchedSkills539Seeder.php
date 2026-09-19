<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills539Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de Supply Chain con IA: Comunicar Valor en la Cadena de Suministro',
                'description'      => 'Usa Claude para crear estrategias de marketing B2B para empresas de logística, gestión de compras y soluciones de cadena de suministro, diferenciando la propuesta de valor en un mercado muy competitivo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing B2B especializado en soluciones de supply chain, logística y gestión de compras. Tienes experiencia trabajando con empresas que venden tecnología, consultoría y servicios a directores de compras, directores de operaciones y responsables de logística en empresas medianas y grandes. Tu tarea es ayudarme a desarrollar una estrategia de marketing completa para una empresa del sector.

**Contexto de la empresa:**
Mi empresa ofrece [describe tu solución: una plataforma de previsión de demanda con IA / un sistema de gestión de proveedores / una solución de visibilidad de la cadena de suministro / servicios de consultoría en compras estratégicas]. Nos dirigimos a [empresas de distribución / fabricantes industriales / retail / sector farmacéutico / alimentación]. El principal problema que resolvemos es [describe el pain point: exceso de inventario / ruptura de stock / falta de visibilidad de proveedores / procesos de compra lentos].

**Parte 1 — Posicionamiento y mensajes clave**

Desarrolla una estrategia de posicionamiento clara para el mercado de supply chain, incluyendo:
- Cómo diferenciar la propuesta de valor en un mercado saturado de proveedores de tecnología
- Mensajes principales adaptados a los tres decisores clave: Director de Compras (CPO), Director de Operaciones (COO) y Director de Tecnología (CTO/CIO)
- El antes y el después: cómo cuantificar y comunicar el impacto económico de nuestra solución (reducción de inventario, ahorro en compras, mejora del nivel de servicio)
- Cómo usar casos de uso y datos del sector para hacer los mensajes más creíbles y concretos

**Parte 2 — Estrategia de contenidos**

Diseña un plan de contenidos de 6 meses orientado a generar demanda y educar al mercado:
- Temas de artículos y white papers sobre tendencias relevantes (IA en previsión de demanda, resiliencia de la cadena de suministro, nearshoring, descarbonización de la logística)
- Ideas para estudios de caso y benchmarks sectoriales que demuestren resultados tangibles
- Contenido para LinkedIn dirigido a CPOs y directores de supply chain: formatos, frecuencia y temas
- Webinars y eventos virtuales para generar leads cualificados en el sector

**Parte 3 — Estrategia de Account-Based Marketing (ABM)**

El ciclo de venta en supply chain es largo y los comités de compra son amplios. Diseña una estrategia de ABM para los 20 clientes objetivo más atractivos, incluyendo:
- Cómo identificar y priorizar las cuentas objetivo usando datos de mercado
- Contenido personalizado por cuenta: cómo adaptar el mensaje al contexto específico de cada empresa
- Orquestación de touchpoints: secuencia de acciones coordinadas entre marketing y ventas
- Métricas de ABM específicas para ciclos de venta de 6-18 meses

**Parte 4 — Presencia en eventos y asociaciones del sector**

Identifica los eventos, asociaciones y comunidades más relevantes para llegar a los decisores de supply chain en España y Europa (CSCMP, ELA, ICIL, SIL Barcelona, LogiMAT) y proporciona una estrategia de participación que maximice el retorno de la inversión en cada uno.

**Parte 5 — Medición y optimización**

Define los KPIs de marketing más relevantes para una empresa de supply chain B2B con ciclo de venta largo, incluyendo indicadores de awareness, generación de pipeline, calidad de leads y contribución del marketing a los ingresos. Proporciona una metodología para atribuir el impacto de marketing en ventas con ciclos de más de 12 meses.

**Entregable:** Respuestas estructuradas y accionables. Incluye ejemplos concretos de mensajes, titulares de contenido y métricas de referencia del sector. El tono debe ser profesional y orientado a resultados de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar estrategias de marketing B2B para empresas de tecnología y servicios de supply chain.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de Sistemas de Previsión de Demanda Inteligente con IA',
                'description'      => 'Aprende a usar Claude para diseñar e implementar sistemas de previsión de demanda con machine learning, integrando múltiples fuentes de datos para optimizar el inventario.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de datos y machine learning especializado en supply chain y gestión de inventarios. Tienes experiencia diseñando sistemas de previsión de demanda que combinan modelos estadísticos clásicos con técnicas modernas de machine learning, integrando datos de ventas históricas, señales externas (clima, eventos, macroeconomía) y datos de planificación del negocio. Tu tarea es guiarme en el diseño e implementación de un sistema de previsión de demanda para mi organización.

**Contexto del proyecto:**
Trabajo en [describe la empresa: un retailer con 500 SKUs / un fabricante industrial con lista de materiales compleja / una empresa de distribución farmacéutica / una cadena de alimentación]. Actualmente hacemos la previsión [describe la situación actual: manualmente en Excel / con el módulo básico del ERP / con un sistema de previsión legacy]. Los principales problemas son [exceso de inventario en productos lentos / rupturas de stock en productos clave / tiempo excesivo del equipo de planificación / incapacidad de incorporar factores externos].

**Parte 1 — Diseño de la arquitectura del sistema**

Diseña una arquitectura completa del sistema de previsión de demanda, incluyendo:
- Fuentes de datos a integrar: ventas históricas, inventario, pedidos abiertos, datos de punto de venta, datos externos (Google Trends, clima, calendario de festivos, indicadores macroeconómicos)
- Pipeline de ingesta y preprocesamiento de datos: limpieza, detección de anomalías, manejo de series temporales con huecos
- Selección de modelos: cuándo usar modelos estadísticos (SARIMA, Holt-Winters, Prophet) versus modelos de ML (XGBoost, LightGBM, LSTM) versus ensamblados
- Arquitectura de despliegue: batch forecasting versus streaming, frecuencia de reentrenamiento, infraestructura en cloud

**Parte 2 — Implementación del modelo base**

Proporciona código Python comentado para implementar un pipeline de previsión de demanda que incluya:
- Carga y preprocesamiento de datos de ventas con pandas
- Implementación de un modelo base con Prophet para series temporales con estacionalidad múltiple
- Evaluación del modelo con métricas apropiadas (MAPE, WMAPE, Bias, nivel de servicio)
- Generación de intervalos de predicción para gestión de inventario de seguridad

**Parte 3 — Incorporación de señales externas**

Explica cómo enriquecer el modelo incorporando factores externos:
- Integración de datos meteorológicos para productos con demanda estacional dependiente del clima
- Incorporación de calendario de festivos, eventos especiales y campañas de marketing
- Uso de datos macroeconómicos o de indicadores adelantados del sector
- Cómo gestionar la disponibilidad limitada de señales externas en producción

**Parte 4 — Gestión de excepciones y casos especiales**

El 20% de los SKUs generan el 80% de los problemas de previsión. Desarrolla estrategias para gestionar:
- Productos de nueva introducción (cold start problem) sin historial de ventas
- Productos discontinuados o en fase de salida
- Eventos excepcionales (pandemias, disrupciones de suministro, picos de demanda inesperados)
- SKUs de muy baja rotación donde los modelos estándar fallan

**Parte 5 — Integración con procesos de planificación**

Define cómo integrar los resultados del sistema de previsión con los procesos de negocio existentes: interfaz con el equipo de planificadores, integración con el ERP para órdenes de compra automáticas, ciclo de revisión y override manual, y un dashboard de KPIs de previsión para la dirección.

**Formato:** Incluye bloques de código Python con comentarios claros, recomendaciones de librerías específicas y referencias a frameworks estándar del sector (IBP, Kinaxis, o implementaciones open source equivalentes).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar e implementar sistemas de previsión de demanda con machine learning para optimizar inventarios.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de Experiencia de Usuario para Plataformas de Gestión de Compras con IA',
                'description'      => 'Usa Claude para diseñar interfaces intuitivas y eficientes para plataformas de e-procurement, gestión de proveedores y automatización de compras corporativas.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario especializado en aplicaciones empresariales B2B, con experiencia en plataformas de e-procurement, gestión de proveedores (SRM) y automatización de compras. Conoces las particularidades del diseño de software empresarial: usuarios con alta carga de trabajo, flujos de aprobación complejos, necesidad de eficiencia sobre estética, y la diversidad de perfiles de usuario (compradores, solicitantes, aprobadores, proveedores). Tu tarea es ayudarme a diseñar o mejorar la experiencia de usuario de una plataforma de gestión de compras.

**Contexto del proyecto:**
Estoy diseñando [describe el proyecto: una nueva plataforma de e-procurement / la mejora del módulo de gestión de proveedores de un ERP / un portal de proveedores / una aplicación móvil para aprobación de pedidos]. Los usuarios principales son [solicitantes de compra en distintos departamentos / buyers del equipo de compras / directores que aprueban presupuestos / proveedores que gestionan sus pedidos].

**Parte 1 — Arquitectura de información y flujos principales**

Diseña la arquitectura de información de la plataforma, mapeando:
- Los flujos principales: solicitud de compra → aprobación → licitación/orden → recepción → factura → pago
- Roles y permisos: qué ve y puede hacer cada tipo de usuario
- Páginas o pantallas principales y su jerarquía de navegación
- Cómo simplificar flujos de compra recurrentes (contratos marco, catálogos gestionados)

**Parte 2 — Diseño de los flujos de aprobación**

Los flujos de aprobación son el corazón de cualquier plataforma de compras. Diseña una experiencia de aprobación que:
- Minimice la fricción para aprobadores que trabajan con muchas solicitudes al día
- Proporcione toda la información relevante para tomar la decisión sin salir del flujo de aprobación
- Soporte aprobación en móvil con la misma eficiencia que en escritorio
- Gestione elegantemente los casos de delegación, urgencia y rechazo con comentarios

**Parte 3 — Portal de proveedores**

Diseña la experiencia del portal de proveedores, considerando que los proveedores son usuarios externos con distintos niveles de adopción tecnológica:
- Proceso de onboarding simplificado para nuevos proveedores
- Gestión de catálogos y precios por el propio proveedor
- Seguimiento de pedidos, albaranes y facturas en tiempo real
- Comunicación estructurada con el equipo de compras

**Parte 4 — Dashboard de analítica de compras**

Diseña un dashboard de análisis de gasto para directores de compras y CFOs que incluya:
- Visualización del gasto por categoría, proveedor, departamento y período
- KPIs clave: ahorros conseguidos, concentración de proveedores, cumplimiento de contratos marco, ciclo de pago
- Alertas y anomalías: gastos no contratados, proveedores con riesgo, desviaciones de presupuesto
- Diseño de filtros y drill-down para análisis ad hoc

**Parte 5 — Asistencia de IA en el flujo de compras**

Diseña cómo integrar capacidades de IA en la experiencia de usuario de forma natural y útil:
- Recomendaciones de proveedor basadas en precio, calidad y historial de entrega
- Clasificación automática de gastos y sugerencia de categoría de compra
- Detección de duplicados y compras fuera de contrato
- Asistente conversacional para búsqueda de productos en catálogo y resolución de dudas del proceso

**Entregable:** Para cada sección, describe los componentes de diseño, los principios de UX aplicados y crea wireframes detallados en formato texto (describiendo la disposición de elementos en cada pantalla). Señala las decisiones de diseño más críticas y sus justificaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar interfaces intuitivas para plataformas de e-procurement y gestión de compras corporativas.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación con Proveedores Asistida por IA: Estrategias y Scripts de Venta',
                'description'      => 'Usa Claude para preparar estrategias de negociación con proveedores, desarrollar argumentarios de venta para soluciones de compras y gestionar relaciones comerciales en la cadena de suministro.',
                'prompt_content'   => <<<'EOT'
Eres un director de compras y negociación con más de 15 años de experiencia gestionando relaciones comerciales con proveedores estratégicos en sectores como manufactura, retail y distribución. También has trabajado en el lado vendedor, ayudando a empresas de tecnología y consultoría a vender sus soluciones a equipos de compras corporativos. Tu tarea es ayudarme a preparar una negociación o desarrollar un argumentario comercial para el sector de compras y supply chain.

**Contexto:**
Necesito [elige tu caso: preparar la negociación anual de precio con uno de mis principales proveedores / desarrollar un argumentario de ventas para vender nuestra solución de automatización de compras a un CPO / gestionar una situación de proveedor en riesgo o con problemas de calidad / negociar un acuerdo de suministro preferente con un proveedor estratégico].

**Parte 1 — Análisis de la situación de negociación**

Ayúdame a analizar la situación de negociación desde ambos lados de la mesa:
- Cuál es mi posición de partida, mis objetivos mínimos y aspiracionales, y mis alternativas (BATNA)
- Qué información debería recopilar sobre la contraparte antes de negociar (situación financiera, cuota de mercado que represento, alternativas que tienen, presiones internas)
- Los principales drivers de valor y de coste en esta relación comercial
- Las dinámicas de poder: quién tiene más influencia y cómo equilibrar la balanza

**Parte 2 — Estrategia y táctica de negociación**

Desarrolla una estrategia de negociación completa que incluya:
- El enfoque general: negociación competitiva versus colaborativa según el tipo de relación
- Las variables a negociar más allá del precio (plazos de pago, nivel de servicio, mínimos de pedido, exclusividades, índices de revisión de precios)
- Concesiones planificadas: qué estoy dispuesto a dar y a cambio de qué
- Tácticas específicas para las situaciones más comunes: apertura de la negociación, manejo del impasse, cierre del acuerdo

**Parte 3 — Scripts y argumentarios específicos**

Proporciona scripts de conversación detallados para los momentos más críticos de la negociación:
- Apertura: cómo establecer el tono y el marco de la negociación
- Respuesta a la petición de rebaja de precio del cliente (si estoy vendiendo)
- Cómo presentar una subida de precio a un cliente (si estoy comprando, cómo resistirla)
- Manejo de objeciones específicas del sector de compras: "tenemos otras ofertas más baratas", "necesitamos validar con dirección", "el proceso de aprobación de proveedores tarda meses"
- Cierre del acuerdo: cómo llegar a un acuerdo duradero que preserve la relación

**Parte 4 — Gestión de proveedores estratégicos**

Más allá de la negociación puntual, desarrolla un marco para la gestión de relaciones con proveedores estratégicos:
- Segmentación de proveedores: cómo identificar cuáles merecen inversión en relación estratégica
- Scorecard de proveedores: KPIs de rendimiento, calidad, innovación y sostenibilidad
- Reuniones de revisión estratégica: estructura, agenda y dinámica de las business reviews con proveedores clave
- Cómo co-crear valor con proveedores estratégicos: proyectos de innovación conjunta, acceso preferente a capacidad

**Parte 5 — Documentación y seguimiento post-negociación**

Define el proceso para documentar los acuerdos alcanzados, hacer seguimiento de los compromisos, y preparar la siguiente ronda de negociación con la información de esta. Incluye una plantilla de acuerdo de negociación y un tracker de compromisos de proveedor.

**Tono:** Directo, estratégico y orientado a resultados. Incluye frases y formulaciones concretas que puedo usar en la negociación real. Señala cuándo la táctica recomendada puede tener efectos secundarios en la relación a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar estrategias y scripts de negociación con proveedores para compras corporativas.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product Management con IA para Plataformas de Supply Chain',
                'description'      => 'Aplica Claude para definir la hoja de ruta de productos de supply chain y compras, priorizando funcionalidades con impacto en eficiencia operativa y ahorro en costes.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior con experiencia en el desarrollo de plataformas de supply chain, e-procurement y gestión de proveedores en entornos B2B. Conoces los desafíos de construir software empresarial en un sector donde las integraciones con ERPs legacy, los procesos de compra complejos y la diversidad de usuarios son la norma. Tu tarea es ayudarme a gestionar la estrategia de producto de una plataforma de supply chain.

**Contexto del producto:**
Soy PM de [describe: una plataforma de e-procurement SaaS / un módulo de previsión de demanda / una solución de visibilidad de cadena de suministro / una herramienta de análisis de gasto]. El producto está en fase [early stage con primeros clientes / crecimiento con 50+ clientes / escala con cientos de clientes]. Nuestros principales retos de producto son [integración con ERPs de los clientes / tiempo de implementación demasiado largo / churn por baja adopción de usuarios finales / competencia de plataformas todo-en-uno].

**Parte 1 — Estrategia de producto para supply chain B2B**

Define la estrategia de producto a 12-24 meses, incluyendo:
- Cómo elegir entre ser una plataforma integral versus ser un punto de solución especializado (best-of-breed)
- Estrategia de integraciones: qué ERPs y plataformas conectar primero y cómo construir un ecosistema de integraciones mantenible
- El dilema del configurability: cuánta personalización ofrecer sin convertir el producto en un proyecto de consultoría
- Cómo equilibrar las funcionalidades que piden los clientes grandes (enterprise) versus las que necesitan los clientes medianos (mid-market)

**Parte 2 — Descubrimiento de producto en supply chain**

Las personas usuarias de supply chain (compradores, planificadores, directores de compras) son muy ocupadas y difíciles de acceder para investigación de usuario. Diseña un proceso de descubrimiento de producto que incluya:
- Métodos de investigación adaptados al contexto: shadowing en operaciones de compra, análisis de logs de uso, entrevistas de cliente, advisory boards
- Cómo extraer insights de las conversaciones del equipo de ventas y de soporte
- Análisis de datos de uso para identificar fricciones y funcionalidades poco adoptadas
- Técnicas para validar hipótesis de producto con usuarios que no tienen tiempo para experimentos

**Parte 3 — Priorización y hoja de ruta**

Desarrolla un framework de priorización específico para software de supply chain que tenga en cuenta:
- Impacto en el cliente: ahorro de tiempo, reducción de costes de inventario, mejora del nivel de servicio
- Impacto en el negocio: reducción de churn, mejora de la tasa de expansión, aceleración del ciclo de venta
- Complejidad de las integraciones con sistemas legacy de los clientes
- Dependencias técnicas y deuda técnica que limita la velocidad de desarrollo

**Parte 4 — Go-to-market del producto**

Define la estrategia de lanzamiento de nuevas funcionalidades en el mercado de supply chain:
- Cómo comunicar el valor de nuevas capacidades de IA a CPOs y directores de operaciones que son escépticos del hype
- Estrategia de beta y clientes piloto: cómo seleccionarlos y qué obtener de ellos
- Formación y enablement del equipo de ventas para vender capacidades de IA complejas
- Documentación y materiales de onboarding que aceleren la adopción de nuevas funcionalidades

**Parte 5 — Métricas de producto**

Define el sistema de métricas de producto más relevante para una plataforma de supply chain, incluyendo métricas de adopción (usuarios activos, funcionalidades adoptadas, tiempo en plataforma), métricas de valor para el cliente (ahorro generado, reducción de tiempo de ciclo, mejora del fill rate) y métricas de salud del negocio (NRR, churn, tiempo de implementación).

**Formato:** Estructurado y accionable. Incluye frameworks, plantillas y ejemplos concretos del mercado de supply chain. Señala las diferencias clave entre la gestión de producto en supply chain versus otros verticales B2B.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir estrategia y hoja de ruta de productos de supply chain y e-procurement.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del Talento en Logística y Compras con IA',
                'description'      => 'Usa Claude para optimizar la selección, formación y retención del talento en equipos de compras, logística y cadena de suministro, un sector con alta demanda de perfiles especializados.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos con experiencia en el sector de logística, compras y cadena de suministro. Conoces el mercado de talento de este sector: escasez de planificadores de demanda con experiencia en IA, alta rotación en posiciones operativas de logística, la dificultad de atraer talento digital hacia roles de supply chain y la transformación de los perfiles de compras tradicionales hacia posiciones de strategic sourcing y compras digitales. Tu tarea es ayudarme a mejorar la gestión del talento en mi organización de supply chain.

**Contexto de la organización:**
Gestiono el talento de [describe: el departamento de compras de una empresa industrial con 50 personas / el equipo de logística y operaciones de un retailer / la función de supply chain de un laboratorio farmacéutico / una empresa de consultoría especializada en supply chain]. Nuestros principales retos de talento son [alta rotación en almacén y operaciones / dificultad para contratar planificadores con conocimiento de IA / upskilling del equipo de compras tradicional hacia compras estratégicas / retención de perfiles digitales en un sector percibido como poco atractivo].

**Parte 1 — Mapa de competencias para supply chain del futuro**

Desarrolla un mapa de competencias actualizado para los principales roles de supply chain, incluyendo las capacidades digitales y analíticas que son cada vez más necesarias:
- Planificador de demanda: de Excel a machine learning, interpretación de previsiones de IA, gestión de excepciones
- Buyer y category manager: de negociación transaccional a strategic sourcing, análisis de gasto, gestión de riesgos de proveedor
- Responsable de logística: de gestión de operaciones a optimización de redes, uso de sistemas WMS/TMS avanzados
- Analista de supply chain: perfil híbrido de datos y negocio, visualización, storytelling con datos

**Parte 2 — Atracción de talento digital hacia supply chain**

El sector compite por perfiles digitales con empresas tech más atractivas. Diseña una estrategia de employer branding que:
- Comunique el impacto y la complejidad intelectual de los roles de supply chain
- Llegue a perfiles de ciencias de datos, ingeniería industrial e ingeniería informática con mensajes diferenciados
- Aproveche las universidades y programas de máster en supply chain y logística (ESADE, EAE, Illinois, MIT SCM)
- Gestione las expectativas salariales de perfiles digitales en un sector con bandas salariales históricamente más bajas que el tech puro

**Parte 3 — Programas de upskilling del equipo actual**

Diseña un plan de formación y upskilling para transformar las competencias del equipo existente:
- Itinerario formativo para buyers tradicionales que necesitan adquirir capacidades de análisis de datos
- Programa de alfabetización en IA para el equipo de planificación: qué necesitan saber (no programar, sino interpretar y validar)
- Cómo diseñar programas de aprendizaje en el flujo de trabajo para personas que no pueden abandonar sus responsabilidades operativas
- Métricas de efectividad de la formación en supply chain: no solo horas de formación sino cambio de comportamiento medible

**Parte 4 — Gestión del talento operativo**

La rotación en posiciones operativas de logística (almacén, transporte, operaciones de compra) es uno de los grandes retos del sector. Desarrolla estrategias para:
- Reducir la rotación temprana en los primeros 90 días mediante onboarding estructurado
- Crear rutas de carrera claras desde posiciones operativas hacia roles de gestión o especialización
- Gestionar la automatización y digitalización de operaciones sin perder el engagement del equipo
- Beneficios y condiciones de trabajo diferenciadores para posiciones operativas en logística

**Parte 5 — Analítica de talento para supply chain**

Define qué datos de talento son más críticos para una organización de supply chain y cómo usarlos para tomar mejores decisiones: análisis de rotación por rol y causa raíz, identificación de perfiles de alto potencial, planificación de sucesión para roles críticos como planificador jefe o director de compras, y correlación entre indicadores de talento y KPIs operativos.

**Entregable:** Respuestas prácticas y concretas, con plantillas de job descriptions para roles de supply chain digital, matrices de competencias y planes de acción específicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Atraer, desarrollar y retener talento especializado en supply chain y compras en un mercado competitivo.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Optimización Financiera de la Cadena de Suministro con IA',
                'description'      => 'Usa Claude para analizar el impacto financiero de las decisiones de supply chain, optimizar el capital circulante y desarrollar modelos de TCO para decisiones de sourcing.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con experiencia en el análisis financiero de operaciones de supply chain. Entiendes profundamente la relación entre las decisiones de compras, inventario y logística y su impacto en el capital circulante, la rentabilidad y el flujo de caja de la empresa. Conoces herramientas como el análisis de coste total de propiedad (TCO), la optimización del ciclo de conversión de caja y los modelos de financiación de la cadena de suministro (supply chain finance). Tu tarea es ayudarme a mejorar la gestión financiera de las operaciones de supply chain.

**Contexto de la empresa:**
Soy CFO o responsable financiero de [describe: una empresa manufacturera con 200M€ de facturación / un retailer con gestión de inventario compleja / una empresa de distribución con capital circulante bajo presión / un grupo industrial con múltiples plantas y divisiones]. El inventario representa [X% de los activos], el plazo de pago a proveedores es de [X días] y el plazo de cobro de clientes es de [X días]. Nuestros principales desafíos financieros en supply chain son [exceso de capital inmovilizado en inventario / financiación costosa de operaciones de compra / falta de visibilidad del coste real de la cadena de suministro / decisiones de sourcing que no consideran el coste financiero completo].

**Parte 1 — Ciclo de conversión de caja y capital circulante**

Analiza la estructura financiera de la cadena de suministro, incluyendo:
- Desglose del ciclo de conversión de caja (DIO + DSO - DPO) y su impacto en las necesidades de financiación operativa
- Cuantificación del coste financiero del inventario actual: no solo el coste de almacenamiento, sino el coste de capital (WACC) aplicado al inventario inmovilizado
- Análisis de sensibilidad: ¿cuánto capital libera reducir el inventario X días? ¿cuánto cuesta extender el plazo de pago a proveedores?
- Benchmarking del ciclo de conversión de caja versus empresas del sector

**Parte 2 — Análisis de coste total de propiedad (TCO)**

Desarrolla un modelo de TCO para la toma de decisiones de sourcing que incluya:
- Todos los componentes del coste de aprovisionamiento más allá del precio de compra (transporte, almacenamiento, coste financiero del inventario de tránsito, coste de calidad, coste de riesgo de suministro)
- Cómo cuantificar el coste del riesgo de suministro: impacto de una rotura de stock, coste de diversificar proveedores versus concentrar volumen
- Análisis make vs buy: qué fabricar internamente versus externalizar con criterio financiero riguroso
- Impacto financiero del nearshoring versus offshoring más allá del precio unitario

**Parte 3 — Supply Chain Finance y optimización de pagos**

Explica cómo estructurar programas de financiación de la cadena de suministro que beneficien tanto a la empresa como a los proveedores:
- Programas de confirming y reverse factoring: cómo funcionan, beneficios para ambas partes y consideraciones contables
- Dynamic discounting: cuándo ofrecer descuentos por pronto pago y cómo calcular la rentabilidad
- Gestión de proveedores en riesgo financiero: cómo identificar proveedores con problemas de liquidez y qué hacer antes de que fallen
- Consideraciones sobre el tratamiento contable del confirming bajo NIIF 16 y las implicaciones regulatorias recientes

**Parte 4 — KPIs financieros de supply chain**

Define el cuadro de mando financiero de supply chain más relevante, incluyendo:
- Indicadores de eficiencia del capital: rotación de inventario, días de inventario, ROCE de activos logísticos
- Indicadores de coste total: coste de servir (cost-to-serve) por canal y cliente, coste logístico sobre ventas
- Indicadores de riesgo financiero: concentración de proveedores, exposición a divisas, riesgo de crédito de proveedores estratégicos
- Cómo presentar estos indicadores al Consejo de Administración en el contexto de la estrategia de supply chain

**Parte 5 — Modelo financiero para decisiones de inversión en supply chain**

Proporciona una metodología para evaluar inversiones en supply chain (nueva tecnología de previsión de demanda, automatización de almacén, plataforma de visibilidad) desde una perspectiva financiera rigurosa, incluyendo VAN, TIR, periodo de recuperación y análisis de sensibilidad.

**Formato:** Incluye fórmulas, ejemplos numéricos simplificados y tablas de análisis cuando sea apropiado. El nivel de detalle debe ser suficiente para que el análisis sea implementable por un equipo financiero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar el impacto financiero de decisiones de supply chain y optimizar el capital circulante.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión Legal de Contratos de Proveedores con IA',
                'description'      => 'Aprende a usar Claude para redactar, revisar y gestionar contratos con proveedores, incluyendo cláusulas de nivel de servicio, gestión de riesgos y cumplimiento normativo en la cadena de suministro.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho mercantil y contratos comerciales con experiencia en la gestión legal de relaciones con proveedores en empresas de manufactura, distribución y retail. Conoces los contratos de suministro, acuerdos marco, contratos de prestación de servicios logísticos, acuerdos de nivel de servicio (SLAs) y la normativa aplicable a la cadena de suministro (normativa de morosidad, normativa de cadena alimentaria, legislación de subcontratación, debida diligencia en derechos humanos). Tu tarea es ayudarme a gestionar los aspectos legales de las relaciones con proveedores.

**Contexto de la organización:**
Soy el responsable legal de compras de [describe: una empresa industrial con 200 proveedores estratégicos / un retailer con cadena de suministro global / una empresa de alimentación sujeta a la Ley de la Cadena Alimentaria / un grupo de distribución con contratos de transporte y logística]. Nuestros principales retos legales son [contratos con proveedores sin estándares / SLAs sin mecanismos de penalización efectivos / riesgo de morosidad en pagos a proveedores / nuevas obligaciones de due diligence en derechos humanos y sostenibilidad].

**Parte 1 — Estructura del contrato marco de proveedores**

Diseña la estructura y las cláusulas esenciales de un contrato marco de proveedores adaptado a nuestra situación, incluyendo:
- Definición del alcance del suministro y del territorio de aplicación
- Condiciones de precio, revisión de precios e indexación (IPC, índices de materias primas)
- Plazos y condiciones de pago: cumplimiento de la Ley de Morosidad (30/60 días según sector)
- Cláusulas de propiedad intelectual sobre diseños, moldes y desarrollos realizados a medida
- Confidencialidad y protección de información comercialmente sensible compartida con el proveedor

**Parte 2 — Acuerdos de nivel de servicio (SLAs)**

Desarrolla un modelo de SLA robusto para contratos de suministro y servicios logísticos que incluya:
- KPIs de rendimiento del proveedor: OTIF (On Time In Full), calidad (PPM, tasa de rechazo), servicio
- Mecanismos de penalización: cómo estructurar bonificaciones y penalizaciones que sean legalmente ejecutables
- Proceso de medición, reporting y revisión del cumplimiento del SLA
- Consecuencias del incumplimiento sistemático: from improvement plan to contract termination

**Parte 3 — Gestión de riesgos legales en la cadena de suministro**

Analiza los principales riesgos legales en la gestión de proveedores y proporciona estrategias de mitigación:
- Riesgo de dependencia excesiva de un proveedor único: cláusulas de protección y planes de continuidad
- Riesgo de incumplimiento de la normativa laboral y de seguridad por parte del proveedor y la responsabilidad de la empresa compradora
- Riesgo de force majeure y disrupciones globales de suministro: cómo definir y gestionar estas situaciones contractualmente
- Riesgo de insolvencia del proveedor: señales de alerta y mecanismos contractuales de protección

**Parte 4 — Cumplimiento en sostenibilidad y derechos humanos**

Las nuevas normativas europeas (Directiva de Debida Diligencia Corporativa en Sostenibilidad, CSDDD) imponen obligaciones crecientes sobre la cadena de suministro. Desarrolla un marco de cumplimiento que incluya:
- Qué empresas están obligadas y en qué plazos según la CSDDD
- Cláusulas contractuales con proveedores que trasladen las obligaciones de debida diligencia
- Proceso de evaluación de riesgos ESG en la cadena de suministro
- Gestión de incidentes: qué hacer cuando se detecta una violación de derechos humanos o ambiental en la cadena de suministro

**Parte 5 — Resolución de disputas con proveedores**

Diseña un protocolo de gestión y resolución de disputas con proveedores que incluya:
- Escalado interno antes de llegar a disputas formales
- Mecanismos de resolución alternativa de disputas (mediación, arbitraje) versus litigación judicial
- Cómo preservar la relación comercial durante una disputa y cuándo es preferible ceder
- Documentación mínima que debe mantenerse para defender la posición de la empresa en una disputa

**Formato:** Incluye plantillas de cláusulas contractuales concretas, listas de verificación y referencias a la normativa española y europea aplicable. Señala cuándo es necesario el asesoramiento de abogados especializados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Redactar y gestionar contratos con proveedores con cláusulas de SLA, riesgos y cumplimiento normativo.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al Cliente con IA para Plataformas de Gestión de Pedidos y Compras',
                'description'      => 'Usa Claude para optimizar el soporte al cliente en plataformas de e-procurement y gestión de pedidos, reduciendo el tiempo de resolución y mejorando la satisfacción de compradores y proveedores.',
                'prompt_content'   => <<<'EOT'
Eres un director de soporte al cliente con experiencia en plataformas de software B2B para supply chain, e-procurement y gestión de pedidos. Conoces los desafíos específicos del soporte en este sector: usuarios empresariales con poca tolerancia al tiempo de inactividad, integraciones complejas con ERPs que generan problemas difíciles de diagnosticar, la diversidad de usuarios (compradores, solicitantes, aprobadores, proveedores) con distintas necesidades y niveles de habilidad técnica. Tu tarea es ayudarme a mejorar los procesos y la efectividad del equipo de soporte.

**Contexto del equipo:**
Dirijo el equipo de soporte de [describe: una plataforma de e-procurement SaaS con 200 clientes empresariales / una solución de gestión de pedidos para retailers / un sistema de visibilidad de cadena de suministro / una plataforma de portal de proveedores]. Atendemos aproximadamente [número] de tickets al mes. Los principales problemas que recibimos son [problemas de integración con ERP / dudas de proceso de compradores sin experiencia en la plataforma / errores en flujos de aprobación / incidencias de proveedores que no pueden acceder o facturar].

**Parte 1 — Clasificación y priorización de incidencias**

Diseña un sistema de clasificación y priorización de incidencias adaptado a las plataformas de procurement:
- Categorías de incidencias: técnicas (integración, rendimiento, errores), funcionales (uso de la plataforma, procesos), de datos (discrepancias de pedidos, facturas) y de acceso (usuarios bloqueados, permisos)
- Criterios de priorización: impacto en el negocio del cliente (un flujo de aprobación roto puede paralizar compras críticas), urgencia, número de usuarios afectados
- SLAs diferenciados por tipo y prioridad de incidencia, con tiempos de respuesta y resolución realistas
- Proceso de escalado: cuándo y cómo escalar al equipo de producto, integraciones o ingeniería

**Parte 2 — Base de conocimiento para soporte en procurement**

Desarrolla una estrategia para construir y mantener una base de conocimiento efectiva:
- Estructura de la base de conocimiento: guías de usuario por perfil (comprador, solicitante, aprobador, proveedor, administrador), guías de troubleshooting de integraciones, FAQs por módulo
- Cómo mantener la base de conocimiento actualizada con cada release de producto
- Estrategia de self-service: cómo reducir el volumen de tickets mediante mejor documentación y formación proactiva
- Uso de IA para recomendar artículos relevantes en función de la descripción del problema del usuario

**Parte 3 — Soporte a las integraciones con ERP**

Las integraciones con ERPs son la principal fuente de incidencias complejas. Diseña un proceso de soporte para estos casos:
- Checklist de diagnóstico de problemas de integración: qué información recopilar del cliente, cómo identificar si el problema está en la plataforma o en el ERP del cliente
- Proceso de coordinación con el equipo técnico del cliente y con el proveedor del ERP
- Gestión de incidencias de sincronización de datos: pedidos duplicados, discrepancias de inventario, errores de facturación
- Documentación de integraciones certificadas y problemas conocidos por versión de ERP

**Parte 4 — Onboarding y formación de nuevos usuarios**

El soporte en plataformas de procurement tiene un componente importante de formación, especialmente en los primeros meses tras la implementación. Diseña un programa de onboarding que:
- Capacite a los administradores del cliente para que sean el primer nivel de soporte para sus propios usuarios
- Ofrezca formación adaptada a cada perfil de usuario (compradores, solicitantes, aprobadores, proveedores)
- Reduzca los tickets de "cómo se hace X" mediante formación proactiva y mejores materiales de ayuda contextual
- Mida la efectividad del onboarding mediante indicadores de adopción y reducción de tickets de tipo funcional

**Parte 5 — Métricas y mejora continua del soporte**

Define el sistema de métricas del equipo de soporte más adecuado para una plataforma de procurement, incluyendo tiempo de primera respuesta, CSAT, tasa de resolución en primer contacto, tasa de deflexión por self-service, y cómo usar estos datos para identificar mejoras del producto o de la documentación.

**Formato:** Práctico y orientado a la implementación. Incluye plantillas de comunicación con clientes, protocolos de escalado y checklists de diagnóstico. El tono debe ser profesional y enfocado en resultados medibles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar el soporte al cliente en plataformas de e-procurement y gestión de pedidos.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para Freelancers de Consultoría en Supply Chain y Compras',
                'description'      => 'Usa Claude para construir y escalar una práctica freelance de consultoría en supply chain, desde el posicionamiento como experto hasta la entrega de proyectos de transformación de compras.',
                'prompt_content'   => <<<'EOT'
Eres un consultor senior independiente con experiencia en proyectos de transformación de supply chain y compras en empresas industriales, de distribución y retail. Has trabajado tanto en grandes consultoras (McKinsey, KPMG, Accenture) como de forma independiente, y conoces bien las diferencias: el freelance en supply chain puede ofrecer profundidad de expertise y flexibilidad que las grandes firmas no pueden, pero construir una cartera de clientes y una reputación sólida lleva tiempo y estrategia. Tu tarea es ayudarme a construir una práctica freelance exitosa en el ámbito del supply chain y las compras.

**Contexto personal:**
Soy [describe tu perfil: un ex-director de compras con 15 años de experiencia en el sector industrial / un especialista en implementación de ERP con módulo de procurement / un experto en optimización de inventarios con background en planificación / un analista de datos especializado en supply chain analytics]. Quiero [conseguir mis primeros contratos como freelance / escalar mi práctica actual de 2 clientes a 5-8 / desarrollar un producto o metodología propia que me diferencie].

**Parte 1 — Posicionamiento del experto en supply chain**

Ayúdame a definir y articular mi nicho de especialización como consultor freelance de supply chain:
- Cómo elegir entre especialización horizontal (una técnica como la previsión de demanda o el strategic sourcing) versus vertical (un sector como farmacéutico o alimentación)
- Las propuestas de valor más diferenciadas en el mercado actual: IA aplicada a supply chain, sostenibilidad y ESG en compras, resilencia y nearshoring, digitalización de procurement
- Cómo articular mi propuesta de valor en una frase memorable que resuene con directores de compras y directores de operaciones
- Construcción del portafolio y casos de éxito cuando tienes experiencia corporativa pero no independiente

**Parte 2 — Captación de clientes para consultoría de supply chain**

Diseña una estrategia de desarrollo de negocio realista para un consultor freelance en este sector:
- El papel central de las referencias y el networking en un sector donde la confianza es todo
- Cómo posicionarse en LinkedIn como experto en supply chain: qué tipo de contenido genera credibilidad con CPOs y directores de operaciones
- Participación en asociaciones sectoriales (ICIL, AERCE, CSCMP en España y Europa) como generadora de oportunidades
- Relaciones con consultoras que subcontratan experts para proyectos de implementación
- Estrategia de primer proyecto: cómo conseguir el proyecto de referencia que abre las siguientes puertas

**Parte 3 — Estructuración y entrega de proyectos de consultoría**

Como freelance, entregas proyectos de transformación de supply chain frecuentemente solo o con un equipo pequeño. Proporciona metodologías para:
- Estructurar el diagnóstico inicial de una organización de compras o supply chain en 2-3 semanas
- Diseñar y facilitar talleres de definición de estrategia de compras con equipos directivos
- Entregar análisis de gasto y oportunidades de ahorro de forma rigurosa y accionable
- Gestionar proyectos de implementación de herramientas de supply chain sin perder de vista los objetivos de negocio

**Parte 4 — Modelos de negocio y tarifas**

Define la estructura de negocio y precios más adecuada para una consultoría freelance de supply chain:
- Tarifas de referencia para distintos tipos de proyecto y niveles de seniority (tarifa diaria, proyecto por entregable, retainer mensual)
- Cómo pasar de vender tiempo a vender valor: metodologías propietarias, herramientas y frameworks con precio premium
- Gestión del pipeline: cómo mantener continuidad de ingresos en un negocio con proyectos de duración variable
- Cuándo y cómo asociarse con otros freelancers o consultoras para proyectos de mayor escala

**Parte 5 — Desarrollo de productos de conocimiento**

A medida que la práctica madura, desarrollar productos de conocimiento (metodologías documentadas, herramientas de diagnóstico, informes sectoriales, formación) permite escalar ingresos más allá de las horas facturables. Diseña una estrategia para crear y comercializar:
- Una metodología de diagnóstico de madurez de compras con herramienta de autoevaluación
- Un informe anual de benchmarking de compras para tu sector de especialización
- Un programa de formación online para compradores que quieran desarrollar capacidades de strategic sourcing o de compras digitales

**Tono:** Honesto, práctico y orientado a la acción. Incluye rangos de tarifas, tiempos realistas de construcción de la práctica y ejemplos concretos de cómo otros consultores han construido posicionamientos diferenciados en supply chain.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir y escalar una práctica freelance de consultoría especializada en supply chain y compras.',
                'vote_score'       => 27,
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
