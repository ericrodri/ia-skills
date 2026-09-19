<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills454Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de contenido para empresas de logística con IA',
                'description'      => 'Crea estrategias de contenido atractivas para empresas del sector logístico usando IA generativa para posicionar la marca y captar clientes B2B.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de contenido B2B especializado en el sector logístico y supply chain. Tu misión es ayudarme a construir una estrategia de contenido completa para una empresa de logística que quiere diferenciarse de la competencia mediante contenido de valor.

Contexto de la empresa:
- Sector: logística, transporte y supply chain
- Público objetivo: directores de operaciones, jefes de logística, responsables de compras
- Objetivo: generar leads cualificados y posicionar la marca como referente del sector

Tarea principal:
Desarrolla una estrategia de contenido de 90 días para una empresa logística que incluya los siguientes elementos:

1. DIAGNÓSTICO DEL SECTOR
Analiza los puntos de dolor más comunes de los responsables de logística y supply chain: retrasos en entregas, visibilidad de inventario, costes de transporte, gestión de proveedores, cumplimiento normativo internacional. Identifica qué preguntas buscan en Google y qué tipo de contenido consumen.

2. PILARES DE CONTENIDO
Define tres a cinco pilares temáticos que conecten las soluciones de la empresa con las necesidades del mercado. Ejemplos: optimización de rutas, trazabilidad con IA, gestión de almacenes inteligentes, logística sostenible, automatización de última milla.

3. CALENDARIO EDITORIAL
Propón un calendario de contenidos para 12 semanas con:
- Dos artículos de blog por semana (título, ángulo, palabras clave primarias)
- Un caso de estudio mensual con estructura: problema, solución, resultados medibles
- Cuatro publicaciones semanales en LinkedIn con formatos variados: infografía, carrusel, vídeo corto, texto largo

4. ADAPTACIÓN CON IA
Explica cómo usar herramientas de IA como Claude para:
- Generar borradores de artículos técnicos a partir de briefings internos
- Transformar informes de operaciones en contenido divulgativo
- Adaptar el mismo contenido a diferentes formatos y canales
- Personalizar mensajes para distintos segmentos del público B2B

5. MÉTRICAS Y KPIs
Define los indicadores clave para medir el éxito: tráfico orgánico, tiempo en página, leads generados por contenido, MQL atribuidos al canal de contenido, tasa de conversión por pilar temático.

6. EJEMPLOS DE CONTENIDO
Redacta un ejemplo completo de cada formato:
- Titular de blog con meta descripción
- Estructura de carrusel de LinkedIn de cinco diapositivas
- Introducción de caso de estudio de 150 palabras

Asegúrate de que el lenguaje sea técnico pero accesible, con enfoque en el ROI y los resultados operativos que interesan al decisor empresarial en logística.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Generar estrategia de contenido B2B para empresa logística',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de algoritmos de optimización de rutas logísticas con IA',
                'description'      => 'Diseña y documenta sistemas de optimización de rutas para flotas de transporte usando algoritmos de IA y heurísticas avanzadas.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software senior especializado en algoritmos de optimización y sistemas de logística inteligente. Necesito tu ayuda para diseñar una solución técnica de optimización de rutas para una flota de transporte.

Parámetros del sistema:
- Flota: entre 20 y 200 vehículos de reparto
- Tipo de problema: Vehicle Routing Problem (VRP) con ventanas de tiempo (VRPTW)
- Restricciones: capacidad de carga, horarios de conductores, ventanas de entrega, zonas de tráfico restringido
- Objetivo: minimizar distancia total y coste de combustible manteniendo el nivel de servicio

Tarea de desarrollo:

1. ARQUITECTURA DE LA SOLUCIÓN
Describe la arquitectura técnica del sistema de optimización de rutas. Incluye:
- Componentes principales: motor de optimización, API de datos, módulo de actualización en tiempo real
- Tecnologías recomendadas: Python, OR-Tools de Google, frameworks de ML como TensorFlow o PyTorch para predicción de demanda
- Integración con sistemas existentes: ERP, TMS (Transportation Management System), GPS trackers

2. SELECCIÓN DE ALGORITMOS
Compara los enfoques algorítmicos más adecuados:
- Algoritmos exactos: programación lineal entera, branch and bound (para flotas pequeñas)
- Metaheurísticas: algoritmos genéticos, simulated annealing, búsqueda tabú (para escala media)
- Aprendizaje por refuerzo: Deep Q-Network para optimización dinámica en tiempo real
- Justifica cuándo usar cada enfoque según el tamaño de la flota y la frecuencia de replanificación

3. IMPLEMENTACIÓN EN PYTHON
Proporciona un esquema de código en Python usando OR-Tools que resuelva un caso básico de VRPTW:
- Definición del modelo de datos (nodos, distancias, capacidades, ventanas de tiempo)
- Configuración del solver con parámetros de tiempo límite y estrategia de búsqueda
- Extracción e interpretación de la solución óptima
- Manejo de casos donde no se encuentre solución factible

4. DATOS Y ENTRENAMIENTO
Explica cómo preparar los datos de entrenamiento para el componente de ML:
- Fuentes de datos: histórico de entregas, tiempos de tráfico por hora y zona, datos climáticos
- Feature engineering relevante: densidad de paradas por zona, patrones temporales, tipo de mercancía
- Validación del modelo: métricas de rendimiento operativo vs. métricas técnicas de ML

5. INTEGRACIÓN EN TIEMPO REAL
Diseña el flujo de reoptimización dinámica para gestionar imprevistos:
- Triggers para reoptimización: nueva entrega urgente, avería de vehículo, tráfico imprevisto
- Estrategias de reoptimización parcial para no invalidar rutas ya en curso
- API REST o WebSocket para comunicar cambios al sistema de seguimiento y a los conductores

6. BENCHMARKING Y MÉTRICAS
Define cómo medir el rendimiento del algoritmo en producción:
- KPIs operativos: reducción de kilómetros totales, puntualidad de entregas, utilización de flota
- KPIs técnicos: tiempo de computación de la solución, calidad relativa vs. óptimo teórico
- Plan de A/B testing para comparar el nuevo sistema contra el despacho manual

Incluye recomendaciones sobre librerías open source, servicios cloud para el cómputo intensivo y estrategias de fallback cuando el solver no converge en el tiempo disponible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar sistema de optimización de rutas con IA para flotas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de dashboards de visibilidad de supply chain con IA',
                'description'      => 'Crea dashboards operativos claros y accionables para equipos de supply chain usando principios de diseño de datos y sugerencias de IA.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de producto y data visualization specialist con experiencia en interfaces operativas para entornos de logística y supply chain. Necesito tu ayuda para diseñar un dashboard de visibilidad que sea realmente útil para los equipos de operaciones.

Contexto del proyecto:
- Usuarios: operadores de almacén, coordinadores de transporte, directores de operaciones
- Datos disponibles: estado de pedidos en tiempo real, posición GPS de flota, niveles de inventario, KPIs de proveedor, alertas de retraso
- Plataforma: aplicación web responsive, también usada en tablets en almacén

Objetivos del diseño:

1. JERARQUÍA DE INFORMACIÓN
Define qué información debe aparecer en cada nivel del dashboard:
- Vista ejecutiva (director de operaciones): KPIs de alto nivel, alertas críticas, tendencias semanales
- Vista operativa (coordinador): pedidos del día, estado de rutas, incidencias activas
- Vista de almacén (operador): tareas pendientes, ubicaciones de stock, prioridades de picking

Para cada vista, indica qué tres a cinco métricas son imprescindibles, cuáles son secundarias y qué datos pueden estar en un segundo nivel de profundidad.

2. COMPONENTES VISUALES
Diseña la anatomía de cada componente clave:
- Mapa de flota en tiempo real: qué capas mostrar, cómo codificar el estado del vehículo con color y forma, clustering para zonas densas
- Panel de alertas: clasificación por severidad, tiempo transcurrido, responsable asignado, acciones rápidas disponibles
- Gráficos de KPI: qué tipo de chart usar para cada métrica (gauge para utilización, sparkline para tendencia, barras apiladas para composición)
- Tabla de pedidos: columnas prioritarias, estados con iconografía clara, acciones en línea

3. SISTEMA DE COLOR Y ESTADO
Propón un sistema semántico de colores para estados operativos:
- Estados de pedido: pendiente, en tránsito, entregado, con incidencia, cancelado
- Alertas: informativa, advertencia, crítica, resuelta
- Rendimiento vs. objetivo: por encima, en objetivo, por debajo, crítico
Justifica las elecciones de color considerando accesibilidad (WCAG AA) y uso en entornos con mucha luz.

4. INTERACCIONES Y FLUJOS
Diseña las interacciones clave:
- Drill-down desde KPI hasta pedido individual
- Filtrado rápido por zona geográfica, tipo de servicio, cliente o estado
- Notificaciones push y cómo integrarlas sin interrumpir el flujo de trabajo
- Modo oscuro para uso nocturno en almacén

5. USO DE IA EN EL DISEÑO
Explica cómo incorporar recomendaciones de IA en la interfaz:
- Alertas predictivas: "Este pedido tiene un 78% de probabilidad de llegar tarde"
- Sugerencias de reoptimización: "Reasignar estos 3 pedidos reduciría el tiempo total en 40 minutos"
- Detección de anomalías: inventario que se desvía del patrón habitual
- Diseña los componentes de IA de forma que sean explicables y confiables para el operador

6. PROTOTIPO Y ENTREGABLES
Describe qué entregar en cada fase:
- Wireframes de baja fidelidad para validar jerarquía con usuarios
- Guía de componentes reutilizables en Figma o equivalente
- Especificaciones técnicas para el equipo de desarrollo (breakpoints, estados de carga, manejo de datos en tiempo real)
- Plan de pruebas de usabilidad con operadores reales

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar dashboard operativo de supply chain con visualización de IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Argumentario de ventas B2B para soluciones de logística con IA',
                'description'      => 'Construye un argumentario de ventas efectivo para vender tecnología de logística inteligente a directores de operaciones y supply chain.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas B2B con especialización en tecnología para logística y supply chain. Necesito construir un argumentario de ventas sólido para presentar una solución de optimización logística basada en IA a empresas medianas y grandes.

Perfil del cliente objetivo:
- Cargo: Director de Operaciones, Chief Supply Chain Officer, Jefe de Logística
- Empresa: industria manufacturera, distribución, retail o e-commerce con más de 50 vehículos
- Dolor actual: costes de transporte elevados, baja visibilidad del stock, entregas tardías, dependencia de procesos manuales

Construcción del argumentario:

1. APERTURA Y GENERACIÓN DE CONFIANZA
Diseña una apertura para la primera llamada o reunión que:
- Demuestre conocimiento del sector del cliente antes de hablar del producto
- Formule dos o tres preguntas de diagnóstico de alto impacto para descubrir el dolor específico
- Establezca credibilidad con referencias del sector o datos de referencia (benchmarks logísticos)
- Dure menos de tres minutos y lleve al cliente a hablar más que el vendedor

2. DESCUBRIMIENTO DEL DOLOR
Proporciona un banco de preguntas de descubrimiento organizadas por área:
- Costes: ¿Cómo miden actualmente el coste por entrega? ¿Cuánto representa el transporte sobre su facturación?
- Visibilidad: ¿Pueden los clientes ver el estado de sus pedidos en tiempo real? ¿Cuántas llamadas reciben por día sobre estado de envíos?
- Eficiencia operativa: ¿Cuánto tiempo dedica su equipo a planificar rutas manualmente? ¿Con qué frecuencia hay que reoptimizar por imprevistos?
- Tecnología actual: ¿Qué sistemas tienen en uso? ¿Cómo es la integración entre TMS, ERP y almacén?

3. PROPUESTA DE VALOR POR PERFIL
Adapta el mensaje de valor según el interlocutor:
- Para el Director Financiero: ROI en meses, reducción de coste por kilómetro, ahorro en horas operativas
- Para el Director de Operaciones: reducción de incidencias, mejora del OTD (On-Time Delivery), visibilidad en tiempo real
- Para el IT Manager: facilidad de integración, APIs estándar, tiempo de implementación, requisitos de infraestructura
- Para el CEO: ventaja competitiva, escalabilidad, casos de éxito comparables

4. MANEJO DE OBJECIONES FRECUENTES
Prepara respuestas para las objeciones más comunes:
- "Ya tenemos un TMS y funciona bien" → diferenciación por capa de IA predictiva sobre el TMS existente
- "Es muy caro para lo que hace" → cálculo del coste de no hacer nada, ROI en 6-12 meses
- "No tenemos recursos para implementarlo" → plan de onboarding guiado, integraciones preconfiguradas
- "Necesitamos pensarlo internamente" → técnica de avance: próximos pasos concretos y fecha de seguimiento
- "¿Podemos probarlo antes de comprometernos?" → propuesta de piloto con métricas de éxito acordadas

5. CIERRE Y PRÓXIMOS PASOS
Diseña el flujo de cierre consultivo:
- Cómo presentar la propuesta económica: precio anclado, opciones de entrada, comparativa con coste actual
- Técnica de cierre por alternativa: "¿Prefieren comenzar con la flota del norte o con la distribución nacional?"
- Plan de seguimiento si el cliente no decide en la reunión: secuencia de tres toques en dos semanas
- Criterios de avance del deal en el CRM: qué etapas definir y qué debe ocurrir para pasar de una a otra

6. HERRAMIENTAS DE IA PARA EL VENDEDOR
Explica cómo usar IA para mejorar el proceso de ventas:
- Preparación de reuniones: analizar la web del cliente, noticias recientes y LinkedIn para personalizar el discurso
- Generación de propuestas: crear propuestas personalizadas a partir de plantilla + notas del discovery
- Seguimiento: redactar emails de seguimiento persuasivos adaptados al tono y objeciones de cada cliente
- Análisis de llamadas: revisar transcripciones con IA para identificar patrones de éxito y áreas de mejora

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir argumentario de ventas para soluciones logísticas con IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product roadmap para plataforma de logística inteligente',
                'description'      => 'Define y prioriza el roadmap de producto para una plataforma SaaS de logística inteligente usando frameworks de priorización asistidos por IA.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en plataformas SaaS B2B para operaciones y logística. Necesito tu ayuda para construir un roadmap de producto estratégico para una plataforma de logística inteligente en fase de crecimiento.

Contexto del producto:
- Producto: plataforma SaaS de gestión y optimización logística con componentes de IA
- Estado actual: MVP con 30 clientes, facturación anual de 500K€, equipo de desarrollo de 8 personas
- Objetivo a 12 meses: escalar a 150 clientes y doblar el ARR

Construcción del roadmap:

1. RECOLECCIÓN DE INPUTS
Define el proceso estructurado para recopilar inputs del roadmap:
- Fuentes internas: feedback del equipo de ventas, análisis de churn, tickets de soporte, uso del producto (analytics)
- Fuentes externas: entrevistas con clientes actuales y churned, análisis de competidores, tendencias del mercado
- Cómo usar IA para analizar grandes volúmenes de feedback: clustering de solicitudes, detección de patrones, priorización automática por frecuencia e impacto

2. FRAMEWORK DE PRIORIZACIÓN
Aplica un framework de priorización a las iniciativas identificadas:
- Método RICE (Reach, Impact, Confidence, Effort): cómo puntuar cada dimensión para features logísticas
- Value vs. Complexity matrix: para decisiones rápidas en sesiones de equipo
- Cómo ponderar diferente las necesidades de retención (clientes existentes) vs. captación (nuevos mercados)
- Regla de equilibrio: qué porcentaje del trimestre dedicar a deuda técnica, nuevas features, mejoras de UX y escalabilidad

3. ESTRUCTURA DEL ROADMAP
Diseña la estructura visual y temporal del roadmap:
- Ahora / Próximo / Después (Now / Next / Later) como marco de comunicación
- Temas estratégicos como columna vertebral: visibilidad en tiempo real, automatización de decisiones, integraciones con terceros
- Cómo comunicar el roadmap de forma diferente a: inversores, clientes, equipo de ventas, equipo de desarrollo
- Qué NO incluir en el roadmap público y por qué

4. INICIATIVAS CLAVE PARA EL SECTOR LOGÍSTICO
Propón las diez iniciativas de mayor impacto que debería considerar una plataforma logística en 2025-2026:
- Para cada una: descripción, segmento beneficiado, complejidad estimada, potencial de impacto en retención o captación
- Ejemplos de área: predicción de demanda con ML, integración con plataformas de transporte (Uber Freight, Seur API), automatización de documentación aduanera, CO2 tracking para sostenibilidad

5. GESTIÓN DE STAKEHOLDERS Y EXPECTATIVAS
Diseña el proceso de governance del roadmap:
- Cadencia de revisión: semanal con equipo de producto, mensual con liderazgo, trimestral con clientes clave
- Cómo manejar las peticiones urgentes de clientes que rompen la planificación
- Proceso de escalado cuando ventas promete features no en el roadmap
- OKRs del equipo de producto vinculados al roadmap

6. MÉTRICAS DE PRODUCTO
Define las métricas de adopción y éxito por feature:
- Métricas de activación: ¿qué porcentaje de usuarios nuevos completa el setup en las primeras 48 horas?
- Métricas de retención: funcionalidades cuyo uso predice mejor la renovación
- North Star Metric para una plataforma logística: propón cuál debería ser y cómo medirla
- Cómo usar IA para detectar señales de churn tempranas a partir del comportamiento en la plataforma

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y priorizar roadmap de plataforma logística SaaS',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento en empresas de logística y transporte con IA',
                'description'      => 'Optimiza la selección, retención y desarrollo del personal operativo en empresas logísticas usando herramientas de IA para RRHH.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Recursos Humanos con experiencia en el sector logístico y de transporte. Necesito tu ayuda para diseñar un sistema integral de gestión del talento que resuelva los retos específicos de este sector: alta rotación, trabajo por turnos, perfiles muy operativos y escasez de conductores y operadores cualificados.

Contexto del sector:
- Alta rotación de personal operativo (conductores, mozos de almacén): habitualmente superior al 30% anual
- Dificultad para atraer talento joven al sector
- Necesidad de formación continua en nuevas tecnologías (TMS, scanners, automatización)
- Equipos distribuidos en múltiples centros logísticos y rutas

Estrategia de RRHH con IA:

1. ATRACCIÓN Y SELECCIÓN DE TALENTO
Diseña un proceso de selección moderno y eficiente para perfiles logísticos:
- Cómo usar IA para redactar ofertas de empleo que atraigan al perfil adecuado y eviten sesgos
- Plataformas y canales de captación más efectivos para conductores, operadores y perfiles técnicos
- Screening automatizado de CVs: criterios objetivos para perfiles operativos, cómo evitar el sesgo algorítmico
- Entrevistas estructuradas: banco de preguntas por rol (conductor, responsable de almacén, coordinador de rutas)
- Cómo reducir el tiempo de contratación de semanas a días sin sacrificar calidad

2. ONBOARDING OPERATIVO
Diseña un programa de incorporación efectivo para el sector logístico:
- Plan de onboarding de 30-60-90 días para conductor de reparto y para operador de almacén
- Uso de IA para generar materiales de formación personalizados según el perfil y el turno
- Checklist de onboarding digital: qué debe saber y hacer el nuevo empleado antes de operar de forma autónoma
- Mentor buddy program: cómo estructurarlo en equipos con alta rotación

3. RETENCIÓN Y COMPROMISO
Propón estrategias de retención específicas para el sector:
- Análisis predictivo de riesgo de abandono: qué señales detectar en el comportamiento del empleado
- Encuestas de pulso adaptadas al trabajador operativo (breves, móviles, anónimas)
- Programas de reconocimiento para perfiles no vinculados a métricas de ventas
- Flexibilidad de turnos asistida por IA: cómo equilibrar las preferencias del empleado con las necesidades operativas
- Planes de carrera en logística: rutas desde operador hasta responsable de almacén o coordinador de flota

4. FORMACIÓN Y DESARROLLO CON IA
Diseña un programa de upskilling para equipos logísticos:
- Identificación de brechas de habilidades: capacidades actuales vs. necesidades futuras (automatización, IA, sostenibilidad)
- Microformaciones adaptadas a turnos: módulos de 5-10 minutos accesibles desde móvil
- Simuladores y formación práctica: cómo complementar con IA la formación en uso de TMS o sistemas de gestión de almacén
- Certificaciones relevantes del sector y cómo financiarlas vinculándolas a compromisos de permanencia

5. ANALÍTICA DE RRHH PARA LOGÍSTICA
Define el cuadro de mando de RRHH específico para el sector:
- Métricas clave: tasa de rotación por turno y centro, coste de reemplazo por perfil, tiempo de vacante cubierta, NPS del empleado
- Alertas tempranas: absencias repetidas, bajada de productividad, no superación del periodo de prueba
- Benchmarking sectorial: cómo comparar los datos propios con los del sector

6. COMUNICACIÓN INTERNA EN EQUIPOS DISTRIBUIDOS
Propón un modelo de comunicación para equipos en ruta y almacén:
- Canales adecuados para empleados sin ordenador fijo (WhatsApp Business, app móvil corporativa)
- Cómo usar IA para personalizar comunicaciones y recordatorios por turno y rol
- Gestión de la comunicación en situaciones de crisis operativa (huelga, accidente, pico inesperado)

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar estrategia de talento para empresa logística con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de costes y rentabilidad de operaciones logísticas con IA',
                'description'      => 'Realiza análisis financieros detallados de operaciones de supply chain usando IA para identificar ineficiencias y oportunidades de ahorro.',
                'prompt_content'   => <<<'EOT'
Eres un Controller Financiero especializado en empresas de logística y distribución. Necesito tu apoyo para construir un modelo de análisis de costes y rentabilidad que permita tomar decisiones operativas y estratégicas basadas en datos.

Contexto financiero:
- Empresa de logística de última milla con facturación de 10M€ anuales
- Estructura de costes: 45% personal, 30% flota y combustible, 15% instalaciones, 10% tecnología y overhead
- Márgenes bajo presión por incremento del coste de carburante y competencia de precios

Análisis financiero con IA:

1. MODELO DE COSTES POR ENTREGA
Diseña un modelo que calcule el coste real por entrega o por ruta:
- Componentes del coste: coste de conductor por hora, amortización del vehículo, combustible por kilómetro, peajes, seguros, coste de las incidencias
- Cómo imputar costes indirectos (almacén, administración, IT) a cada entrega usando drivers de coste
- Segmentación de rentabilidad: por cliente, por zona geográfica, por tipo de servicio (urgente, estándar, bulto)
- Uso de IA para automatizar la imputación de costes a partir de datos del TMS y del ERP

2. ANÁLISIS DE RENTABILIDAD POR CLIENTE
Construye un análisis de customer profitability:
- Ingresos por cliente vs. costes directos e imputados
- Identificación de clientes unprofitable: qué hacer con ellos (renegociar tarifa, cambiar servicio, dejar ir)
- Curva de rentabilidad: top 20% de clientes que generan el 80% del margen vs. cola larga de clientes no rentables
- Cómo usar IA para predecir la rentabilidad futura de un cliente en el momento del onboarding

3. GESTIÓN Y OPTIMIZACIÓN DE COSTES DE FLOTA
Analiza la estructura de costes de flota:
- Coste total de propiedad (TCO) vs. leasing vs. flota subcontratada: cuándo es mejor cada opción
- Optimización del consumo de combustible: impacto de la conducción eficiente, mantenimiento preventivo, planificación de rutas
- Análisis de mantenimiento predictivo: coste de la avería inesperada vs. inversión en sensores IoT y IA predictiva
- Flota propia vs. capacidad spot: modelo de decisión para gestionar los picos de demanda

4. PRESUPUESTO Y FORECASTING CON IA
Diseña el proceso de presupuestación y proyección financiera:
- Modelo de forecasting de ingresos basado en datos históricos, estacionalidad y pipeline comercial
- Forecasting de costes variables (combustible, horas extra) usando modelos de ML sobre datos operativos
- Rolling forecast mensual: cómo actualizar las proyecciones sin esperar al presupuesto anual
- Escenarios: optimista, base y pesimista, y qué palancas accionarías en cada uno

5. KPIs FINANCIEROS DEL SECTOR LOGÍSTICO
Define el cuadro de mando financiero de una empresa logística:
- EBITDA por ruta y por cliente
- Coste por kilómetro y coste por entrega
- Ratio de utilización de flota
- DSO (Days Sales Outstanding) y gestión del circulante en un sector con grandes clientes que pagan a 60-90 días
- OTIF (On Time In Full) y su impacto económico: penalizaciones contractuales, clientes perdidos

6. REPORTING AUTOMATIZADO CON IA
Propón cómo automatizar el reporting financiero:
- Conexión de datos del TMS, GPS y ERP para un dashboard financiero en tiempo real
- Alertas automáticas cuando el coste por entrega supera el umbral de rentabilidad
- Generación de informes narrativos con IA: que el sistema no solo muestre los números sino que explique las variaciones en lenguaje natural para el comité de dirección

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar costes y rentabilidad de operaciones logísticas con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Revisión de contratos logísticos y compliance de transporte con IA',
                'description'      => 'Analiza contratos de transporte, acuerdos de nivel de servicio y normativa aduanera con IA para identificar riesgos legales en operaciones logísticas.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especialista en derecho del transporte, logística internacional y comercio exterior. Necesito tu ayuda para revisar y analizar la documentación jurídica y el marco normativo que afecta a las operaciones de una empresa de logística.

Ámbito de análisis:
- Contratos de transporte terrestre, marítimo y aéreo
- Acuerdos de nivel de servicio (SLA) con clientes y proveedores de transporte
- Normativa aduanera para operaciones de importación y exportación
- Seguros de transporte y responsabilidad civil

Análisis jurídico con IA:

1. REVISIÓN DE CONTRATOS DE TRANSPORTE
Define un proceso de revisión de contratos con apoyo de IA:
- Cláusulas críticas a identificar: limitación de responsabilidad, régimen de reclamaciones, plazos de notificación de daños, jurisdicción y ley aplicable
- Red flags en contratos estándar de navieras y operadores logísticos que intentan limitar su responsabilidad más allá de lo legal
- Cómo usar IA para comparar las cláusulas propuestas contra el convenio CMR (transporte terrestre internacional), las Reglas de Rotterdam o la Convención de Varsovia
- Plantilla de anotaciones y comentarios que un abogado puede generar con IA para el cliente no jurídico

2. ANÁLISIS DE SLAs CON CLIENTES
Diseña la estructura de un SLA de logística jurídicamente sólido:
- Definición precisa de los indicadores de servicio (OTD, tasa de daños, tiempo de respuesta a reclamaciones)
- Régimen de penalizaciones: cómo redactar créditos de servicio que sean ejecutables y proporcionales
- Cláusulas de fuerza mayor: qué eventos cubrir, cómo notificarlos y durante cuánto tiempo aplican
- Procedimiento de escalado y resolución de disputas: negociación, mediación y arbitraje antes del litigio
- Cláusulas de terminación: por incumplimiento, por conveniencia, con y sin causa

3. COMPLIANCE ADUANERO
Mapea las obligaciones legales en operaciones de importación y exportación:
- Documentación básica obligatoria: DUA, factura comercial, packing list, certificado de origen, carta de porte
- Regímenes aduaneros especiales: depósito aduanero, tránsito, importación temporal, perfeccionamiento activo
- Restricciones y prohibiciones por producto y destino: listas de control de exportación (EAR, ECCN), sanciones internacionales
- GDPR en la transmisión de datos de clientes a autoridades aduaneras de terceros países
- Cómo usar IA para mantenerse actualizado sobre cambios normativos y alertas de nuevas restricciones

4. RESPONSABILIDAD Y SEGUROS
Analiza el marco de responsabilidad en el transporte:
- Límites de responsabilidad por convenio internacional según el tipo de transporte y la mercancía
- Cómo articular la cobertura de seguro con los límites legales para que no haya brechas
- Proceso de gestión de siniestros: notificación, peritos, reserva de derechos, prescripción
- Responsabilidad del operador logístico (3PL) vs. del transportista efectivo: cuándo responde cada uno

5. CONTRATOS CON PROVEEDORES LOGÍSTICOS
Revisa los contratos con subcontratistas de transporte:
- Cláusulas de back-to-back: cómo trasladar al subcontratista las obligaciones asumidas con el cliente
- Control de proveedores: certificaciones exigibles, seguros mínimos, condiciones laborales
- Responsabilidad solidaria por accidentes de tráfico: marco legal en España y la UE
- Gestión de la información: confidencialidad, propiedad de los datos operativos, auditorías

6. IA COMO HERRAMIENTA JURÍDICA EN LOGÍSTICA
Explica cómo integrar IA en el flujo de trabajo jurídico logístico:
- Revisión automática de contratos: qué puede hacer la IA con fiabilidad (identificar cláusulas, comparar con plantilla) y qué requiere revisión humana obligatoria
- Monitorización normativa: alertas sobre cambios en regulación aduanera, nuevos convenios de transporte, modificaciones en listas de sanciones
- Generación de documentación estándar: contratos de transporte, cartas de reclamación, notificaciones de incidencia
- Límites éticos y de confidencialidad en el uso de IA con documentación jurídica de clientes

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Revisar contratos y compliance legal en operaciones logísticas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente proactiva en empresas de logística con IA',
                'description'      => 'Diseña flujos de comunicación proactiva y gestión de incidencias para clientes de empresas logísticas usando IA conversacional y automatización.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y atención al cliente para empresas de logística y mensajería. Necesito tu ayuda para transformar el servicio al cliente de reactivo a proactivo usando IA y automatización, reduciendo el volumen de contactos entrantes y mejorando la satisfacción.

Contexto del equipo:
- Empresa de logística con 5.000 envíos diarios
- Equipo de atención al cliente de 15 personas gestionando 800 contactos diarios por email, teléfono y chat
- Principal motivo de contacto: ¿Dónde está mi pedido? (60% de los contactos), seguido de incidencias y reclamaciones

Estrategia de Customer Service con IA:

1. COMUNICACIÓN PROACTIVA Y TRACKING
Diseña un sistema de comunicación proactiva que reduzca los contactos entrantes:
- Mapa de notificaciones automáticas por estado del envío: confirmación de recogida, en tránsito, en reparto, entregado, intento fallido
- Personalización del mensaje según el tipo de cliente: particular, empresa, e-commerce
- Canal óptimo por segmento: SMS para urgente, email para información detallada, WhatsApp para seguimiento conversacional
- Cómo predecir con IA qué envíos tienen mayor riesgo de retraso y notificar antes de que el cliente llame
- Redacción de los mensajes de notificación: tono, longitud, qué incluir y qué omitir

2. CHATBOT Y AUTOSERVICIO CON IA
Diseña la arquitectura de un chatbot de atención logística:
- Intenciones a cubrir: tracking, reprogramación de entrega, reclamación por daño, cambio de dirección, factura
- Árbol de conversación para la intención más frecuente: "¿Dónde está mi pedido?"
- Integración con el sistema de tracking en tiempo real para dar información precisa
- Manejo de excepciones: cuándo escalar al agente humano y cómo hacer el traspaso sin perder el contexto
- Métricas de éxito del chatbot: tasa de contención, CSAT post-chatbot, tiempo de resolución

3. GESTIÓN DE INCIDENCIAS CON IA
Diseña el flujo de gestión de incidencias más frecuentes:
- Clasificación automática de incidencias: daño en mercancía, extravío, entrega en lugar incorrecto, retraso injustificado
- Enrutamiento inteligente al equipo especializado según el tipo y la criticidad
- Respuesta automática de primer nivel mientras se investiga la incidencia
- Generación de compensaciones: cómo calibrar el tipo y valor de la compensación según el impacto y el historial del cliente
- Seguimiento hasta la resolución y encuesta de satisfacción post-resolución

4. AGENTE HUMANO AUMENTADO POR IA
Diseña las herramientas de asistencia al agente durante la interacción:
- Resumen automático del historial del cliente y sus envíos antes de responder
- Sugerencias de respuesta en tiempo real según el motivo de contacto detectado
- Detección de emoción del cliente (frustración, urgencia) para alertar al agente de la necesidad de empatía especial
- Base de conocimiento inteligente: el agente escribe el problema y la IA sugiere la respuesta o el procedimiento correcto
- Resumen automático de la conversación para el CRM al finalizar el contacto

5. ANÁLISIS DE SATISFACCIÓN Y VOZ DEL CLIENTE
Implementa un sistema de escucha y mejora continua:
- NPS y CSAT: cuándo y cómo enviar las encuestas en logística para maximizar la tasa de respuesta
- Análisis de sentimiento en emails y chats: detección automática de temas recurrentes de insatisfacción
- Loop de feedback a operaciones: cómo trasladar los insights de atención al cliente a los equipos de transporte y almacén para mejorar la calidad del servicio en origen
- Benchmark de satisfacción: qué niveles son habituales en el sector y cómo superar la media

6. MÉTRICAS Y OPTIMIZACIÓN DEL EQUIPO
Define el cuadro de mando del Customer Service logístico:
- Contactos por envío (CPO): métrica clave para medir la eficiencia
- First Contact Resolution (FCR): porcentaje de casos resueltos en el primer contacto
- Tiempo medio de resolución por tipo de incidencia
- Coste por contacto y evolución con la automatización
- Cómo usar IA para detectar agentes con bajo rendimiento y diseñar planes de coaching personalizados

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatizar atención al cliente en empresa logística con IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en digitalización de supply chain con IA',
                'description'      => 'Diseña tu propuesta de valor y metodología como consultor freelance especializado en digitalización y automatización de procesos logísticos con IA.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance con experiencia en transformación digital de empresas de logística y supply chain. Necesito tu ayuda para estructurar mi propuesta de valor, metodología de trabajo y modelo de negocio como consultor independiente especializado en digitalización logística con IA.

Contexto del consultor:
- Experiencia previa: 8 años en empresas de logística como responsable de operaciones o IT
- Especialidad: implementación de TMS, optimización de procesos, integración de sistemas
- Objetivo: lanzar práctica de consultoría independiente y facturar 80.000-100.000€ anuales en el primer año

Construcción de la práctica de consultoría:

1. PROPUESTA DE VALOR Y POSICIONAMIENTO
Define el nicho y la propuesta diferenciadora:
- Cómo elegir un nicho específico en logística que sea rentable y diferenciado: ¿última milla? ¿logística farmacéutica? ¿e-commerce B2B? ¿cold chain?
- Propuesta de valor para el cliente: qué problema resuelves, en cuánto tiempo y con qué resultado esperado
- Diferenciación vs. grandes consultoras: velocidad de implementación, conocimiento operativo profundo, compromiso con resultados, precio
- Cómo articular el pitch de 60 segundos y el de 10 minutos para distintos contextos

2. METODOLOGÍA DE DIAGNÓSTICO Y PROYECTO
Diseña la metodología de consultoría para proyectos de digitalización logística:
- Fase de diagnóstico (2-4 semanas): qué analizar, qué preguntar, qué datos recopilar, cómo presentar el informe
- Fase de diseño de solución: selección de herramientas, arquitectura tecnológica, plan de implementación
- Fase de implementación y change management: cómo gestionar la resistencia al cambio en equipos operativos
- Fase de medición de resultados: cómo demostrar el ROI del proyecto con datos reales
- Entregables estándar por fase: plantillas reutilizables que ahorren tiempo en cada proyecto

3. CAPTACIÓN DE CLIENTES
Define la estrategia de desarrollo de negocio:
- Cómo aprovechar la red de contactos del sector para los primeros clientes
- LinkedIn como canal principal: perfil optimizado, tipo de contenido que posiciona como referente, frecuencia y formato
- Alianzas con proveedores de software logístico (TMS, WMS) que buscan consultores certificados
- Conferencias y asociaciones del sector donde generar visibilidad: SIL, CSCMP, ICIL en España
- Uso de IA para generar contenido de thought leadership de forma eficiente y consistente

4. ESTRUCTURA DE SERVICIOS Y PRECIOS
Diseña el catálogo de servicios con su modelo de pricing:
- Diagnóstico logístico: entregable, duración, precio fijo o por día
- Selección e implementación de TMS/WMS: fases, precio por proyecto o por hito
- Formación y talleres: sobre digitalización logística, uso de IA en operaciones, para equipos de 5-20 personas
- Retainer mensual: para clientes recurrentes que necesitan apoyo continuo, qué incluye, cómo fijar el precio
- Cómo calcular tu tarifa diaria: costes fijos, días facturables esperados, margen y posicionamiento de mercado

5. OPERATIVA DEL NEGOCIO FREELANCE
Organiza la gestión administrativa y operativa:
- Herramientas esenciales: CRM ligero, gestión de proyectos, facturación, contabilidad, contrato estándar
- Uso de IA para productividad: preparación de propuestas, análisis de datos del cliente, generación de informes, gestión de emails
- Subcontratación estratégica: cuándo y a quién delegar para crecer sin contratar fijo
- Gestión del tiempo: balance entre ejecución de proyectos y desarrollo de negocio, que es el error más común del consultor autónomo

6. CRECIMIENTO Y ESCALABILIDAD
Planifica el crecimiento de la práctica más allá del trabajo individual:
- Productización de servicios: de consultoría personalizada a cursos online, frameworks vendibles, herramientas propias
- Construcción de comunidad: newsletter, grupo de LinkedIn, eventos de networking para posicionarse como hub del sector
- Asociación con otros consultores complementarios: cómo crear una red de colaboradores para proyectos mayores
- Indicadores de salud del negocio: tasa de repetición de clientes, porcentaje de ingresos recurrentes, pipeline de proyectos a 90 días

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar práctica de consultoría freelance en logística con IA',
                'vote_score'       => 36,
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
