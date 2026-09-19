<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills606Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para servicios de impresión 3D industrial con IA',
                'description'      => 'Diseña estrategias de marketing B2B y B2C para empresas de impresión 3D y fabricación aditiva, diferenciando los servicios por tecnología, material y sector de aplicación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing industrial y tecnológico especializado en el sector de la impresión 3D y la fabricación aditiva. Tu objetivo es ayudarme a diseñar una estrategia de marketing completa para captar y fidelizar clientes en un mercado altamente técnico donde la educación del comprador es clave para el cierre.

Contexto del negocio:
- Tipo de empresa (bureau de impresión 3D bajo demanda, fabricante de impresoras 3D, proveedor de materiales, ingeniera de servicios de diseño para fabricación aditiva): [ESPECIFICAR]
- Tecnologías que ofrecemos (FDM, SLA, SLS, MJF, DMLS/SLM para metal, Polyjet): [ESPECIFICAR]
- Sectores objetivo (aeroespacial, automoción, salud/dispositivos médicos, arquitectura, consumo, joyería): [ESPECIFICAR]
- Mercado geográfico (local, nacional, exportación): [ESPECIFICAR]
- Presupuesto mensual de marketing: [ESPECIFICAR]
- Diferenciadores clave frente a competidores: [ESPECIFICAR]

Tarea 1 — Posicionamiento por tecnología y aplicación:
Define el posicionamiento de mercado para cada tecnología o servicio ofrecido, respondiendo a:
a) Qué problema específico del cliente resuelve cada tecnología (velocidad, propiedades mecánicas, complejidad geométrica, biocompatibilidad, coste por pieza).
b) Tabla comparativa de tecnologías vs. procesos tradicionales de fabricación (mecanizado CNC, inyección de plástico, fundición): cuándo la fabricación aditiva gana y cuándo pierde.
c) Casos de uso estrella por sector donde la impresión 3D tiene ventaja competitiva clara.
d) Mensaje diferencial para clientes que nunca han usado impresión 3D y para clientes que ya tienen experiencia con la tecnología.

Tarea 2 — Estrategia de contenidos técnicos:
El comprador industrial necesita educación técnica antes de decidir. Diseña un plan de contenidos de 6 meses que incluya:
- Artículos técnicos para ingenieros: diseño para fabricación aditiva (DfAM), tolerancias y acabados, selección de material por aplicación.
- Casos de estudio documentados: antes/después con datos reales de ahorro de tiempo, peso o coste.
- Comparativas de material con hojas de datos (datasheets visuales para no especialistas).
- Vídeos de proceso: cómo se fabrica una pieza de principio a fin en cada tecnología.
- Webinars técnicos para ingenieros de compras: criterios de selección de proveedor de impresión 3D.

Tarea 3 — Generación de leads B2B para fabricación aditiva:
Define la estrategia de captación de leads cualificados:
- LinkedIn Ads orientadas a ingenieros de procesos, responsables de prototipado y directores de manufactura.
- SEO técnico: palabras clave long tail por tecnología y aplicación (impresión 3D titanio aeroespacial, SLS nylon alta temperatura, etc.).
- Participación en ferias sectoriales (Formnext, TCT, Advanced Factories): estrategia antes, durante y después del evento.
- Programa de referidos entre clientes industriales: incentivos y mecanismos de seguimiento.

Tarea 4 — Marketing de precios y presupuestación:
El precio de la fabricación aditiva es complejo y difícil de comunicar. Diseña la estrategia de pricing communication:
- Cómo presentar presupuestos online de forma que el cliente entienda el valor (no solo el coste).
- Calculadora de ROI integrada en el sitio web: coste de impresión 3D vs. coste de molde para series cortas.
- Estrategia de precio por volumen para clientes industriales que repiten pedidos.

Tarea 5 — Métricas de marketing para servicios de fabricación:
Define el cuadro de mando de marketing específico para un bureau de impresión 3D: coste por lead cualificado (MQL), tasa de conversión de presupuesto a pedido, ticket medio por pedido y por cliente, tiempo medio del ciclo de compra, tasa de recompra de clientes industriales y NPS de clientes tras la entrega.

Formato de respuesta: usa tablas comparativas para el posicionamiento tecnológico. Incluye ejemplos de copies para LinkedIn Ads y para el sitio web por sector objetivo. Proporciona un calendario editorial de contenidos mes a mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategias de marketing técnico y generación de leads para empresas del sector de la impresión 3D',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Optimización de modelos 3D para fabricación aditiva con IA',
                'description'      => 'Aplica IA para analizar, optimizar y validar modelos 3D destinados a fabricación aditiva, reduciendo fallos de impresión, tiempo de post-procesado y coste de material.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en procesamiento geométrico, diseño para fabricación aditiva (DfAM) e integración de herramientas de IA en flujos de trabajo de impresión 3D. Tu objetivo es ayudarme a diseñar o mejorar un pipeline de software para optimizar modelos 3D antes de su fabricación.

Contexto del proyecto:
- Tecnología de fabricación aditiva objetivo (FDM, SLA/DLP, SLS, MJF, DMLS para metal): [ESPECIFICAR]
- Software de diseño CAD utilizado actualmente (Fusion 360, SolidWorks, CATIA, FreeCAD, Blender): [ESPECIFICAR]
- Volumen de modelos procesados mensualmente: [ESPECIFICAR]
- Problemas principales actuales (fallos de impresión frecuentes, exceso de soportes, warping, piezas que no encajan en ensamblaje): [ESPECIFICAR]
- Stack tecnológico del equipo (Python, C++, JavaScript, herramientas de análisis de malla): [ESPECIFICAR]
- Requisitos de integración con software de laminado (Cura, PrusaSlicer, Chitubox, Netfabb, Materialise Magics): [ESPECIFICAR]

Tarea 1 — Pipeline de validación automática de modelos 3D:
Diseña un pipeline de validación automática que detecte y corrija problemas comunes en archivos STL y 3MF antes del laminado:
a) Detección de errores geométricos: mallas no cerradas (non-manifold), normales invertidas, triángulos degenerados, agujeros en la superficie.
b) Análisis de imprimibilidad: voladizos superiores al ángulo crítico sin soporte, paredes demasiado delgadas, puentes demasiado largos, tamaño de poros insuficiente para limpieza.
c) Estimación automática de material y tiempo de impresión a partir del análisis geométrico.
d) Herramientas y librerías de Python recomendadas: trimesh, numpy-stl, open3d, pymeshlab, meshio.

Tarea 2 — Optimización topológica asistida por IA:
Explica cómo integrar herramientas de optimización topológica en el flujo de diseño:
- Principios de la optimización topológica: minimización de masa con restricciones de rigidez, frecuencia o esfuerzo máximo.
- Herramientas disponibles: módulo de simulación en Fusion 360, nTopology, Altair Inspire, solvers open source (Topy, OpenLSTO).
- Cómo definir el espacio de diseño, las cargas aplicadas y los constraints de fabricación aditiva (espesor mínimo de pared, orientación de construcción).
- Post-procesamiento del resultado de optimización topológica para hacerlo imprimible sin soporte excesivo.

Tarea 3 — Modelos de IA para predicción de defectos:
Diseña un sistema de predicción de defectos de impresión basado en machine learning:
- Conjunto de datos necesario: parámetros de impresión (temperatura, velocidad, altura de capa), propiedades del material, geometría de la pieza y resultado (éxito/defecto y tipo de defecto).
- Arquitectura del modelo: ¿red neuronal convolucional sobre imágenes de la capa durante la impresión, modelo tabular sobre parámetros de proceso, o combinación?
- Integración en tiempo real: cómo leer datos de la impresora durante la fabricación y detener el proceso si la probabilidad de defecto supera un umbral.
- Conjuntos de datos públicos disponibles para entrenamiento: AM-GFM dataset, datasets de Fraunhofer, datos de competiciones de Kaggle sobre manufactura.

Tarea 4 — API para gestión de trabajos de impresión:
Diseña una API REST para un bureau de impresión 3D que gestione el flujo desde la carga del modelo hasta la entrega:
- Endpoints para carga de archivo, análisis automático de imprimibilidad, cotización en tiempo real, aprobación de trabajo, seguimiento de estado de fabricación y notificación de entrega.
- Integración con el software de la impresora (OctoPrint, Duet, Bambu Connect) para monitorización remota.
- Sistema de cola de trabajos con priorización por urgencia y tecnología disponible.

Tarea 5 — Herramientas de IA generativa para diseño paramétrico:
Explica cómo usar modelos de lenguaje e IA generativa para asistir el diseño de piezas para fabricación aditiva:
- Generación de geometrías mediante text-to-3D (Shap-E, Point-E, TripoSR): estado actual y limitaciones para uso industrial.
- Asistentes de código para scripting en FreeCAD (Python), Fusion 360 (API JavaScript) o Grasshopper (C#/Python): cómo usar Claude o GitHub Copilot para automatizar tareas de diseño paramétrico.
- RAG sobre documentación técnica de materiales y fichas de proceso para que el asistente responda preguntas de ingeniería específicas de fabricación aditiva.

Formato de respuesta: incluye fragmentos de código Python funcionales para las herramientas de validación de malla. Proporciona pseudocódigo para la arquitectura del modelo de predicción de defectos. Usa diagramas de flujo textuales para el pipeline completo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar pipelines de software para validar, optimizar y predecir defectos en modelos 3D para fabricación aditiva',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño generativo para fabricación aditiva con IA',
                'description'      => 'Domina el flujo de trabajo de diseño generativo asistido por IA para crear piezas complejas optimizadas por topología, imposibles de fabricar con métodos convencionales.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador industrial y experto en diseño generativo para fabricación aditiva, con dominio de herramientas como Autodesk Fusion 360, nTopology, Grasshopper y técnicas de optimización topológica. Tu objetivo es ayudarme a desarrollar un flujo de trabajo completo para crear piezas funcionales de alto rendimiento aprovechando las capacidades únicas de la impresión 3D.

Información del proyecto de diseño:
- Tipo de pieza o componente a diseñar (bracket estructural, soporte de carga, intercambiador de calor, prótesis, componente de vehículo): [ESPECIFICAR]
- Material de fabricación (PLA, PETG, nylon, fibra de carbono, titanio, aluminio, acero inoxidable): [ESPECIFICAR]
- Cargas y condiciones de servicio (fuerzas aplicadas, temperatura, entorno corrosivo, ciclos de fatiga): [ESPECIFICAR]
- Restricciones de fabricación (tecnología de impresión, tamaño máximo de pieza, orientación de impresión preferida): [ESPECIFICAR]
- Objetivo principal (reducción de peso, aumento de rigidez, reducción de coste, mejora estética): [ESPECIFICAR]
- Software de diseño disponible: [ESPECIFICAR]

Tarea 1 — Principios del diseño para fabricación aditiva (DfAM):
Explica las reglas de diseño específicas para cada tecnología de fabricación aditiva:
a) FDM/FFF: orientación de capas para maximizar resistencia en la dirección de carga, minimización de soportes, diseño de encajes y tolerancias.
b) SLS/MJF: libertad geométrica sin soportes, grosor mínimo de pared, canales internos y estructuras en lattice, eliminación de polvo atrapado.
c) SLA/DLP: geometrías de alta precisión, áreas de succión en impresión, acabados superficiales alcanzables.
d) DMLS/SLM (metal): gestión de tensiones residuales, orientación para minimizar distorsión, diseño de soportes para metal, tratamientos térmicos post-fabricación.

Tarea 2 — Flujo de trabajo de diseño generativo:
Define el proceso paso a paso para crear una pieza mediante diseño generativo:
- Definición del espacio de diseño: geometría que el material puede ocupar, zonas de preservación obligatoria (tornillos, interfases de ensamblaje).
- Aplicación de cargas y condiciones de contorno en el simulador FEM integrado.
- Configuración del estudio generativo: objetivos (minimizar masa, maximizar rigidez), restricciones de fabricación (ángulo máximo de voladizo, simetría), y número de soluciones a explorar.
- Interpretación y selección de resultados: cómo evaluar las soluciones generadas y elegir la más adecuada.
- Post-procesamiento: suavizado de la geometría orgánica resultante para mejorar el acabado y la imprimibilidad.

Tarea 3 — Estructuras en lattice y gyroide:
Profundiza en el uso de estructuras internas reticulares para piezas de fabricación aditiva:
- Tipos de lattice (BCC, FCC, TPMS como gyroide, schwartz diamond): propiedades mecánicas y aplicaciones óptimas de cada una.
- Gradiente de densidad: cómo variar la densidad del lattice en diferentes zonas de la pieza según el mapa de esfuerzos.
- Herramientas para generar lattices: nTopology, Materialise Magics, Lattice Studio, scripts en Python con la librería latticeboltzmann o similares.
- Aplicaciones: estructuras aeroespaciales de bajo peso, implantes ortopédicos con porosidad controlada para osteointegración, intercambiadores de calor con geometría gyroide.

Tarea 4 — Verificación y validación mediante simulación FEM:
Diseña el proceso de validación de la pieza diseñada antes de fabricarla:
- Análisis estático lineal: comprobación de tensiones de Von Mises y factor de seguridad.
- Análisis modal: frecuencias propias para componentes sometidos a vibraciones.
- Análisis de fatiga: estimación de vida en servicio para piezas bajo cargas cíclicas.
- Herramientas accesibles: Fusion 360 Simulation, SimScale (cloud), FreeCAD FEM, Ansys Student Edition.
- Validación experimental: cómo planificar ensayos de tracción y flexión para validar el modelo de simulación con piezas reales.

Tarea 5 — Presentación del diseño al cliente o equipo:
Define cómo comunicar el proceso y los resultados del diseño generativo a stakeholders no técnicos:
- Comparativa visual antes/después: pieza diseñada convencionalmente vs. pieza generativa (peso, coste de material, número de piezas eliminadas en el ensamblaje).
- Renderizado fotorrealista de la pieza generativa en su contexto de uso.
- Documentación de diseño: ficha técnica con dimensiones clave, material, proceso de fabricación y parámetros de impresión validados.
- Prototipado rápido para validación física antes de la producción final.

Formato de respuesta: usa diagramas de flujo textuales para el proceso de diseño generativo completo. Incluye una tabla comparativa de tipos de lattice con sus propiedades. Proporciona recomendaciones de software con indicación de coste y curva de aprendizaje.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Crear piezas optimizadas mediante diseño generativo y topológico para fabricación aditiva',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones de impresión 3D industrial con IA',
                'description'      => 'Desarrolla argumentarios y procesos de venta consultiva para comercializar impresoras 3D industriales, materiales técnicos y servicios de fabricación aditiva a empresas manufactureras.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas especializado en tecnología de fabricación aditiva industrial. Tu objetivo es ayudarme a desarrollar una estrategia de ventas completa para comercializar impresoras 3D industriales, materiales de alto rendimiento y servicios de bureau a empresas manufactureras de sectores exigentes.

Contexto del equipo comercial:
- Producto o servicio a vender (impresora 3D industrial, materiales de ingeniería, servicio de bureau de impresión, consultoría de implementación de fabricación aditiva en planta): [ESPECIFICAR]
- Sectores objetivo (automoción, aeroespacial, dispositivos médicos, electrónica, energía): [ESPECIFICAR]
- Ticket medio de venta (desde impresora de 5.000€ hasta línea de producción de 500.000€+): [ESPECIFICAR]
- Ciclo de venta típico: [ESPECIFICAR]
- Equipo de ventas (tamaño, perfiles técnicos o comerciales puros): [ESPECIFICAR]
- Principales competidores: [ESPECIFICAR]

Tarea 1 — Identificación de oportunidades en manufactura:
Define los criterios para identificar empresas manufactureras con alta probabilidad de adopción de fabricación aditiva:
a) Señales de dolor: series cortas de producción (1-500 piezas), alta variedad de SKUs, piezas de repuesto con larga demanda, tiempos de entrega de herramental muy largos, rediseños frecuentes de producto.
b) Sectores con mayor ROI demostrado: aeroespacial (reducción de peso), médico (personalización masiva), automoción de nicho (prototipos y series especiales).
c) Triggers de compra: fallo de un proveedor tradicional, nuevo proyecto con requisitos geométricos imposibles para mecanizado, plan de reducción de inventario de repuestos.

Tarea 2 — Argumentario técnico-comercial por aplicación:
Desarrolla argumentarios específicos para las aplicaciones más comunes:
- Prototipado rápido: argumentos de velocidad (de semanas a días), coste de iteración reducido y ventaja competitiva en time-to-market.
- Herramientas, fixtures y utillaje de planta: ROI inmediato frente al mecanizado convencional, posibilidad de producción interna sin dependencia de proveedores.
- Piezas de usuario final en series cortas: coste comparativo sin moldes, break-even point respecto a inyección.
- Repuestos under demand: reducción del inventario inmovilizado, disponibilidad de repuestos de máquinas descatalogadas.

Tarea 3 — Proceso de venta consultiva para tecnología industrial:
Define el proceso completo de venta para soluciones de fabricación aditiva de alto valor:
- Prospección y cualificación: cómo identificar al champion técnico y al economic buyer dentro de la empresa industrial.
- Evaluación de la aplicación: proceso para identificar la pieza piloto ideal para demostrar el ROI (alta complejidad, producción repetitiva, coste actual conocido).
- Prueba de concepto técnica: protocolo de impresión de la pieza piloto, análisis comparativo de calidad y coste, presentación de resultados al comité.
- Propuesta de valor: cómo calcular y presentar el ROI en euros concretos (ahorro en herramental, reducción de inventario, ahorro en tiempo de ingeniería).
- Gestión del proceso de compra en grandes empresas: comité de aprobación, validación de proveedor, negociación de contrato de mantenimiento.

Tarea 4 — Demostraciones técnicas y eventos de cliente:
Diseña el plan de demostraciones técnicas para captar nuevos clientes industriales:
- Open house en showroom: agenda tipo, selección de piezas de demostración por sector, materiales de sala y seguimiento.
- Visita técnica en planta del cliente: cómo preparar una auditoría de aplicaciones en una planta manufacturera para identificar oportunidades.
- Participación en ferias industriales: estrategia de stand, material demostrativo y protocolo de captación de contactos cualificados.

Tarea 5 — Gestión de cuenta y expansión en clientes industriales:
Una vez cerrada la primera venta, define la estrategia para crecer dentro de la cuenta:
- Onboarding técnico: formación del operador, validación de los primeros trabajos de producción, soporte de aplicaciones en los primeros 3 meses.
- Identificación de nuevas aplicaciones dentro de la misma empresa: cómo realizar una auditoría de aplicaciones adicionales a los 6 meses.
- Programa de cliente referencia: cómo convertir un cliente satisfecho en prescriptor activo ante sus pares del sector.
- Upsell de material y consumibles: modelo de negocio recurrente en torno a materiales certificados y contratos de mantenimiento.

Formato de respuesta: incluye una calculadora de ROI en formato tabla para la aplicación de repuestos. Usa roleplay para simular la presentación de resultados del piloto al comité de compra. Proporciona una guía de agenda para la visita técnica en planta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Vender soluciones de fabricación aditiva industrial con argumentarios técnicos y procesos de venta consultiva',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en fabricación aditiva bajo demanda con IA',
                'description'      => 'Aplica metodologías de product management para diseñar, lanzar y escalar un servicio digital de fabricación aditiva bajo demanda, desde la carga del modelo hasta la entrega.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en plataformas digitales de manufactura y servicios de fabricación aditiva bajo demanda (on-demand manufacturing). Tu objetivo es ayudarme a diseñar o mejorar un producto digital que conecte clientes que necesitan piezas impresas en 3D con capacidad de fabricación instalada.

Contexto del producto:
- Modelo de negocio (bureau propio, marketplace que conecta demanda con múltiples bureaux, híbrido): [ESPECIFICAR]
- Tecnologías de fabricación disponibles o a incluir: [ESPECIFICAR]
- Estado actual del producto (idea, MVP, en crecimiento, en escala): [ESPECIFICAR]
- Métricas actuales de uso (pedidos mensuales, ticket medio, tasa de repetición): [ESPECIFICAR]
- Principales problemas del cliente (presupuestación lenta, calidad inconsistente, falta de visibilidad del estado del pedido): [ESPECIFICAR]
- Competidores directos (Xometry, Hubs, Treatstock, Sculpteo): [ESPECIFICAR]

Tarea 1 — Propuesta de valor y diferenciación:
Define la propuesta de valor del servicio de fabricación aditiva bajo demanda para cada segmento de cliente:
a) Startups y empresas de hardware: velocidad de entrega, precio competitivo para series pequeñas, asesoría técnica en selección de material y tecnología.
b) Ingeniería industrial y R&D: calidad certificada, trazabilidad completa, materiales de alto rendimiento, posibilidad de firmar NDA.
c) Educación y makers: accesibilidad, precio bajo para FDM básico, plataforma intuitiva sin conocimientos técnicos profundos.
d) Producción bajo demanda de series cortas: precio por volumen, integración ERP/API, gestor de cuenta dedicado.

Tarea 2 — Diseño del flujo de pedido digital:
Diseña el flujo de usuario completo desde la carga del modelo hasta la entrega, optimizando la tasa de conversión en cada paso:
- Carga del archivo: formatos soportados (STL, 3MF, STEP, OBJ), validación automática de imprimibilidad, mensajes de error accionables.
- Configuración del pedido: selección de tecnología, material, acabado superficial, cantidad y urgencia; comparador de opciones con impacto en precio y plazo.
- Presupuestación en tiempo real: algoritmo de cotización instantánea vs. solicitud de presupuesto manual para piezas complejas.
- Aprobación y pago: proceso de checkout optimizado para reducción del abandono.
- Seguimiento: notificaciones automáticas de estado (en cola, en producción, en post-procesado, enviado) con acceso al portal de seguimiento.

Tarea 3 — Roadmap del producto y priorización:
Define el roadmap del producto para los próximos 12 meses con iniciativas priorizadas por impacto en ingresos y satisfacción del cliente:
- Trimestre 1: mejoras en el motor de cotización instantánea y reducción del tiempo entre carga y presupuesto.
- Trimestre 2: portal del cliente con historial de pedidos, reutilización de configuraciones y gestión de presupuesto.
- Trimestre 3: API para integración con ERPs de clientes industriales (Epicor, IFS, SAP B1).
- Trimestre 4: programa de calidad con certificados de conformidad digitales y trazabilidad de lote.

Tarea 4 — Métricas de producto para plataformas de manufactura:
Define el sistema de métricas de producto específico para un servicio de fabricación aditiva:
- Métricas de conversión: tasa de carga de modelo a pedido pagado, abandono por etapa del funnel, tiempo medio de cotización.
- Métricas de operaciones: porcentaje de pedidos entregados a tiempo, tasa de reclamaciones por calidad, tiempo de producción medio por tecnología.
- Métricas de negocio: ingresos por pedido, margen bruto por tecnología, tasa de repetición de clientes, LTV vs. CAC.
- Métricas de experiencia: NPS post-entrega, CSAT por etapa del proceso, resolución de incidencias en primer contacto.

Tarea 5 — Estrategia de expansión de capacidad:
Define cómo escalar la capacidad de producción sin perder calidad:
- Modelo de red de bureaux certificados: criterios de incorporación de nuevos fabricantes, auditoría de calidad inicial y continua, distribución de trabajos por proximidad geográfica y especialización tecnológica.
- Gestión de la capacidad en picos de demanda: colaboraciones con fabricantes puntales, priorización de trabajos urgentes.
- Automatización del back-office: asignación automática de trabajos a máquinas, optimización del anidado de piezas (nesting) para maximizar el uso del volumen de impresión.

Formato de respuesta: diseña el flujo de usuario con un wireframe textual paso a paso. Usa el framework RICE para priorizar las iniciativas del roadmap. Incluye una tabla de métricas con objetivo, métrica, fórmula de cálculo y fuente de datos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar y escalar un servicio digital de fabricación aditiva bajo demanda con enfoque de producto',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Formación en fabricación aditiva para equipos industriales con IA',
                'description'      => 'Diseña programas de capacitación en impresión 3D y fabricación aditiva para equipos de ingeniería, producción y compras de empresas manufactureras.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en formación técnica industrial con experiencia en el diseño de programas de capacitación en tecnologías de fabricación avanzada, incluyendo fabricación aditiva e Industria 4.0. Tu objetivo es ayudarme a diseñar un programa de formación en impresión 3D adaptado a las necesidades de una organización manufacturera.

Contexto de la organización:
- Sector industrial y productos que fabrica: [ESPECIFICAR]
- Perfiles a formar (ingenieros de diseño, técnicos de producción, responsables de compras, directivos): [ESPECIFICAR]
- Nivel de conocimiento actual en fabricación aditiva (nulo, básico, intermedio): [ESPECIFICAR]
- Tecnologías disponibles en la empresa o que se van a incorporar: [ESPECIFICAR]
- Modalidad de formación preferida (presencial en planta, e-learning, híbrida, externa en centro especializado): [ESPECIFICAR]
- Presupuesto y tiempo máximo por empleado para la formación: [ESPECIFICAR]

Tarea 1 — Diagnóstico de necesidades formativas:
Define el proceso para identificar las brechas de conocimiento de cada perfil antes de diseñar el programa:
a) Evaluación inicial: test de conocimientos técnicos y encuesta de necesidades por perfil.
b) Mapa de competencias en fabricación aditiva por rol: qué debe saber un ingeniero de diseño (DfAM, selección de material, tolerancias), un técnico de producción (operación de máquina, mantenimiento, post-procesado) y un responsable de compras (evaluación de proveedores, análisis de costes, criterios de calidad).
c) Priorización de contenidos según impacto en la actividad productiva actual de la empresa.

Tarea 2 — Diseño del programa de formación por niveles:
Estructura el programa en tres niveles de capacitación:
- Nivel 1 (Fundamentos): para todos los perfiles. Qué es la fabricación aditiva, tecnologías principales y casos de uso industriales. Duración: 4 horas en formato e-learning o taller presencial.
- Nivel 2 (Técnico aplicado): para ingenieros y técnicos. Diseño para fabricación aditiva (DfAM), selección de material por aplicación, operación de máquinas, control de calidad de piezas impresas. Duración: 16-24 horas con prácticas en máquina.
- Nivel 3 (Avanzado): para ingenieros senior y líderes de proyecto. Optimización topológica, diseño generativo, análisis FEM, implementación de fabricación aditiva en producción en serie. Duración: 40 horas con proyecto final.

Tarea 3 — Recursos y materiales didácticos:
Define los materiales necesarios para cada nivel del programa:
- Manuales técnicos: guía de materiales por tecnología, fichas de tolerancias y acabados, biblioteca de casos de uso industriales.
- Ejercicios prácticos: diseña 5 ejercicios progresivos de DfAM para el nivel técnico, desde una pieza simple con voladizo hasta un bracket optimizado topológicamente.
- Recursos online recomendados: cursos de Coursera, MIT OpenCourseWare, Stratasys University, Ultimaker Academy, Materialise Academy.
- Evaluación de competencias: rúbricas de evaluación para los ejercicios prácticos y examen final de cada nivel.

Tarea 4 — Implantación y seguimiento del plan formativo:
Define el proceso de implantación del programa en la organización:
- Selección y formación de formadores internos (train-the-trainer) para sostenibilidad del programa.
- Calendario de implantación por grupos y prioridad según rol.
- Integración con el sistema de gestión de la formación (LMS) corporativo.
- Seguimiento de la transferencia al puesto de trabajo: cómo medir si la formación se aplica realmente (número de aplicaciones identificadas, piezas fabricadas, proyectos iniciados).

Tarea 5 — Certificaciones y reconocimiento profesional:
Informa sobre las certificaciones profesionales en fabricación aditiva disponibles para los empleados formados:
- AMSC (Additive Manufacturing Skills Consortium): niveles y requisitos.
- Certificaciones de fabricantes: Stratasys FDM Certification, Ultimaker Essentials.
- Certificaciones de entidades de normalización: ASTM y ISO en fabricación aditiva (normas ISO/ASTM 52900).
- Impacto en el desarrollo profesional y la propuesta de valor del empleado en el mercado laboral.

Formato de respuesta: presenta el mapa de competencias por rol en una tabla. Detalla los 5 ejercicios prácticos con objetivos de aprendizaje, duración y criterios de evaluación. Proporciona un modelo de plan de formación anual con cronograma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programas de formación en fabricación aditiva adaptados a equipos industriales',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de costos en impresión 3D y fabricación aditiva con IA',
                'description'      => 'Aplica modelos financieros para analizar el costo total de propiedad de equipos de fabricación aditiva, comparar con procesos tradicionales y calcular el punto de equilibrio por aplicación.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en manufacturación avanzada y evaluación de inversiones en tecnología industrial. Tu objetivo es ayudarme a construir modelos de análisis de costos rigurosos para decisiones de inversión en fabricación aditiva, comparar la viabilidad económica frente a procesos tradicionales y calcular el ROI de la implementación.

Contexto del análisis:
- Tipo de decisión (compra de equipo de impresión 3D, externalización vs. internalización, expansión del parque de máquinas, inversión en tecnología de metal): [ESPECIFICAR]
- Aplicación o familia de piezas a analizar: [ESPECIFICAR]
- Proceso alternativo de fabricación convencional (mecanizado CNC, inyección de plástico, fundición, chapa): [ESPECIFICAR]
- Volumen de producción anual: [ESPECIFICAR]
- Horizonte de análisis (años): [ESPECIFICAR]
- Tasa de descuento o coste de capital de la empresa: [ESPECIFICAR]

Tarea 1 — Estructura de costos en fabricación aditiva:
Desglosa todos los componentes del costo de producción en fabricación aditiva:
a) Costos de material: precio por kg de filamento, resina, polvo o hilo metálico; porcentaje de material en soporte desperdiciado; polvo reciclado en SLS/MJF.
b) Costos de máquina: precio de adquisición, vida útil esperada, amortización lineal o acelerada, coste de mantenimiento anual (contrato preventivo + correctivo), consumo energético (kWh por hora de impresión).
c) Costos de mano de obra: preparación del trabajo (setup), carga/descarga, post-procesado (retirada de soportes, limpieza, curado, pulido, pintura).
d) Costos de calidad: inspección dimensional, ensayos mecánicos si aplica, certificados de conformidad.
e) Costos generales: espacio físico requerido (m²), climatización si aplica, licencias de software CAD/CAM/laminado.

Tarea 2 — Comparativa de costos frente a procesos alternativos:
Construye el modelo comparativo de costos entre fabricación aditiva y el proceso convencional para la aplicación especificada:
- Estructura de costos del proceso convencional: utillaje/molde (CAPEX amortizado por unidad), tiempo de mecanizado o ciclo de inyección, mano de obra, scrap y retrabajo.
- Curva de break-even: número de piezas a partir del cual la fabricación aditiva es más económica (crítico para la decisión make-or-buy).
- Consideración de costos ocultos del proceso convencional: inventario almacenado, tiempo de entrega de herramientas, mínimos de pedido.
- Análisis de sensibilidad: cómo varía el break-even al cambiar el precio del material, el coste de la máquina o el volumen de producción.

Tarea 3 — Modelo de coste total de propiedad (TCO):
Desarrolla el modelo TCO para la compra de una impresora 3D industrial:
- CAPEX: precio del equipo, instalación, formación inicial, inversión en software.
- OPEX anual: material, energía, mantenimiento, mano de obra dedicada, consumibles de post-procesado.
- Valor residual al final de la vida útil.
- TCO por pieza: cómo calcular el coste unitario real en función del volumen de producción anual y el grado de utilización de la máquina.

Tarea 4 — Análisis de viabilidad de inversión:
Para la compra de equipo de fabricación aditiva, calcula:
- Flujos de caja diferencial: ahorro en costes de producción y herramental vs. CAPEX y OPEX del equipo.
- VAN (Valor Actual Neto): interpretación para la decisión de inversión.
- TIR (Tasa Interna de Retorno): comparación con el coste de capital.
- Período de retorno de la inversión (payback): simple y descontado.
- Análisis de escenarios: optimista (alto volumen de producción y precio de material estable), base y pesimista (baja utilización, subida del precio de polímeros técnicos).

Tarea 5 — Modelo de negocio para bureau de impresión 3D:
Si la decisión es ofrecer el servicio de fabricación aditiva a terceros, construye el modelo de negocio:
- Precio de venta por cm³ de pieza o por hora de máquina: benchmarking de precios de mercado por tecnología.
- Grado de utilización mínimo para alcanzar el punto de equilibrio operativo.
- Margen bruto objetivo por tecnología (FDM/SLA para consumo vs. SLS/DMLS industrial).
- Proyección de ingresos a 3 años según escenarios de captación de clientes.

Formato de respuesta: construye las tablas de costos con fórmulas explicadas. Presenta la curva de break-even en formato de tabla numérica (no gráfico). Incluye una plantilla Excel-compatible con las variables de entrada del modelo TCO.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir modelos financieros para evaluar inversiones en fabricación aditiva y comparar costos con procesos tradicionales',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad intelectual en fabricación aditiva con IA',
                'description'      => 'Analiza el marco legal de propiedad intelectual aplicable a piezas impresas en 3D, archivos de diseño digital y tecnologías de fabricación aditiva, incluyendo patentes y derechos de autor.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en propiedad intelectual e industrial con experiencia en el sector tecnológico y de manufactura avanzada. Tu objetivo es ayudarme a entender y gestionar los riesgos legales relacionados con la propiedad intelectual en el contexto de la impresión 3D y la fabricación aditiva.

Contexto del cliente:
- Perfil (empresa de impresión 3D que recibe archivos de clientes, diseñador que vende archivos 3D, empresa que fabrica piezas para uso propio o para terceros, fabricante de impresoras 3D): [ESPECIFICAR]
- Sectores en los que opera: [ESPECIFICAR]
- Problemas o riesgos de PI actuales (clientes que suben archivos de terceros, replicación de piezas de repuesto patentadas, uso de geometrías escaneadas): [ESPECIFICAR]
- Jurisdicción principal (España/UE, EE.UU., otro): [ESPECIFICAR]
- Si tiene un portfolio de diseños propios a proteger: [ESPECIFICAR]

Tarea 1 — Marco de derechos de autor para archivos de diseño 3D:
Analiza la protección por derechos de autor aplicable a los archivos digitales de diseño en 3D:
a) Protegibilidad de los archivos STL, STEP y similares: ¿son obras protegidas por derechos de autor? ¿Qué requisito de originalidad deben cumplir?
b) Diferencia entre proteger el archivo digital y proteger la pieza física resultante: cuándo la pieza puede tener protección adicional como diseño industrial registrado.
c) Qué sucede con el archivo cuando se vende la pieza física: ¿incluye el comprador licencia para reimprimir?
d) Plataformas de venta de archivos 3D (Thingiverse, MyMiniFactory, Cults3D): análisis de sus términos de licencia y riesgos para diseñadores y usuarios.

Tarea 2 — Patentes en fabricación aditiva:
Explica el sistema de patentes aplicado al sector de la fabricación aditiva:
- Qué se puede patentar: el proceso de fabricación aditiva (método), la máquina (dispositivo) o la pieza con geometría funcional novedosa (producto).
- Vigencia de patentes clave en fabricación aditiva: el vencimiento de patentes de FDM (2009) y SLS (2014) impulsó el mercado de código abierto; próximas patentes de SLA, MJF y DMLS que vencerán.
- Cómo verificar si una pieza que quiero replicar está protegida por patente: búsqueda en Espacenet, Google Patents, USPTO.
- Agotamiento del derecho de patente: ¿puedo imprimir en 3D una pieza de repuesto de un producto que compré legalmente?

Tarea 3 — Responsabilidad legal del bureau de impresión 3D:
Define las responsabilidades y riesgos legales de un proveedor de servicios de fabricación aditiva:
- Responsabilidad por infracción de PI cuando el cliente sube un archivo que replica una pieza patentada: ¿responde el bureau como coinfractor?
- Safe harbor y requisitos de knowledge: cuándo el bureau puede alegar desconocimiento y cómo implementar un sistema de notice-and-takedown efectivo.
- Cláusulas contractuales recomendadas en los términos de servicio: declaración de titularidad del archivo, indemnización al cliente, limitación de responsabilidad del bureau.
- Responsabilidad por productos defectuosos: quién responde ante daños causados por una pieza impresa en 3D defectuosa (cliente que diseñó la pieza, bureau que la fabricó, fabricante del material).

Tarea 4 — Protección de diseños propios:
Define la estrategia de protección de la PI generada por una empresa de fabricación aditiva:
- Diseño industrial registrado (UE): qué diseños son registrables, proceso de registro ante la EUIPO, duración (25 años), coste y ventajas frente al derecho de autor.
- Secreto industrial: protección de parámetros de proceso propietarios (configuraciones de impresión, tratamientos especiales) mediante acuerdos de confidencialidad.
- Licencias de uso para archivos digitales vendidos online: tipos de licencias Creative Commons y licencias propietarias, qué condiciones incluir para proteger el negocio.

Tarea 5 — Checklist legal para operadores de fabricación aditiva:
Crea una checklist de cumplimiento legal adaptada al sector, que incluya:
- Revisión de los términos de uso al aceptar archivos de clientes.
- Proceso de verificación mínima de titularidad de los archivos.
- Contratos recomendados con clientes, proveedores de software CAD y diseñadores externos.
- Política de respuesta ante reclamaciones de infracción de PI.
- Seguro de responsabilidad civil profesional específico para fabricantes por fabricación aditiva.

Formato de respuesta: usa tablas comparativas para los tipos de protección de PI disponibles. Incluye modelos de cláusulas contractuales adaptadas al sector. Proporciona la checklist en formato verificable con indicación de urgencia (crítica, recomendada, opcional).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar los riesgos de propiedad intelectual en operaciones de fabricación aditiva y servicios de impresión 3D',
                'vote_score'       => 23,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico para clientes de impresión 3D con IA',
                'description'      => 'Diseña protocolos de atención al cliente para bureaux de impresión 3D y fabricantes de impresoras, gestionando incidencias de calidad, fallos de impresión y consultas técnicas de usuarios con distinto nivel de experiencia.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en experiencia de cliente y soporte técnico para empresas del sector de la impresión 3D y fabricación aditiva. Tu objetivo es ayudarme a diseñar procesos eficaces de atención al cliente que resuelvan rápidamente las incidencias técnicas de usuarios con niveles de conocimiento muy diferentes, desde makers entusiastas hasta ingenieros de producción.

Contexto de la empresa:
- Tipo de empresa (bureau de impresión 3D, fabricante o distribuidor de impresoras, proveedor de materiales, plataforma de marketplace de fabricación): [ESPECIFICAR]
- Canales de soporte disponibles (email, chat en vivo, teléfono, centro de ayuda online, comunidad/foro): [ESPECIFICAR]
- Volumen de tickets mensuales actual o previsto: [ESPECIFICAR]
- Tecnologías de impresión soportadas: [ESPECIFICAR]
- Perfil del usuario (makers, empresas industriales, diseñadores, educación): [ESPECIFICAR]
- Tiempo medio de resolución objetivo: [ESPECIFICAR]

Tarea 1 — Taxonomía de incidencias en impresión 3D:
Clasifica las categorías de soporte más frecuentes y define el nivel de urgencia y el canal de resolución para cada una:
a) Incidencias de calidad de pieza: warping, delamination, stringing, blobs, layer shifting, piezas frágiles, problemas dimensionales.
b) Problemas de pedido: retraso en la entrega, pieza incorrecta enviada, daño durante el transporte, discrepancia entre presupuesto y factura.
c) Consultas técnicas de diseño: dudas sobre tolerancias, orientación de impresión, acabado superficial alcanzable, selección de material para una aplicación.
d) Incidencias de plataforma digital: problemas con el cargador de archivos, errores en el cotizador, fallos en el área de cliente.
e) Soporte a fabricantes de impresoras: diagnóstico de fallos de hardware, errores de firmware, problemas de laminado.

Tarea 2 — Árbol de diagnóstico para los defectos más comunes:
Diseña guías de diagnóstico paso a paso para los defectos de impresión 3D más frecuentes:
- Warping en FDM (levantamiento de esquinas): árbol de causas (temperatura de cama, adhesión, geometría de la pieza, material) con soluciones ordenadas por probabilidad.
- Bajo porcentaje de relleno o pieza frágil: análisis de parámetros de laminado, calidad del filamento, temperatura de extrusión.
- Piezas SLS/MJF con porosidad o polvos no consolidados: causas en el proceso de sinterizado y post-procesado.
- Resinado: piezas SLA con deformaciones o fallos de adhesión a la plataforma.
Cada árbol debe terminar en una acción concreta para el agente de soporte.

Tarea 3 — Base de conocimiento y autoservicio:
Diseña la estructura del centro de ayuda para reducir el volumen de tickets repetitivos:
- Guías de preparación de archivos: formatos aceptados, reparación de mallas defectuosas (uso de Meshmixer, Netfabb, PrusaSlicer), tolerancias recomendadas por tecnología.
- Guías de post-procesado: retirada de soportes FDM, limpieza de resinas SLA, limpieza de polvo SLS, pulido y pintura de piezas impresas.
- Calculadora de material y coste estimado.
- Vídeos de proceso: cómo funciona cada tecnología para que el cliente entienda por qué su pieza tiene ese aspecto.
- FAQ por sector de aplicación (médico, automoción, joyería, educación).

Tarea 4 — Gestión de reclamaciones de calidad:
Define el protocolo completo para la gestión de reclamaciones de calidad:
- Proceso de reclamación: cómo solicita el cliente una reclamación, qué evidencias debe proporcionar (fotos, vídeos, mediciones).
- Evaluación interna: criterios para determinar si el defecto es responsabilidad del bureau (proceso) o del cliente (diseño no imprimible, material inadecuado para la aplicación).
- Resoluciones posibles: reimpresión gratuita, descuento en el próximo pedido, devolución parcial, proceso de mejora continua interna.
- Escalado: cuándo escalar a ingeniería de aplicaciones o a la dirección de operaciones.
- Documentación y cierre: cómo registrar las reclamaciones para análisis de tendencias y mejora continua.

Tarea 5 — Métricas de soporte técnico para fabricación aditiva:
Define el cuadro de mando del equipo de soporte: tiempo de primera respuesta por canal y prioridad, tasa de resolución en primer contacto, CSAT post-resolución, tasa de tickets de calidad sobre total de pedidos, tiempo medio de resolución de reclamaciones, y ratio de tickets resueltos por artículo de base de conocimiento.

Formato de respuesta: presenta los árboles de diagnóstico en formato de lista anidada con decisiones y acciones. Usa tablas para la taxonomía de incidencias con nivel de urgencia y canal de resolución. Incluye guiones de respuesta para los casos de reclamación de calidad más delicados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar procesos de soporte técnico para clientes de bureaux de impresión 3D y fabricantes de impresoras',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Servicios freelance en diseño 3D y fabricación aditiva con IA',
                'description'      => 'Estructura tu propuesta de servicios como profesional independiente especializado en diseño CAD, impresión 3D y fabricación aditiva, captando clientes y gestionando proyectos de manera eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en diseño 3D y fabricación aditiva. Tu objetivo es ayudarme a estructurar mis servicios profesionales, captar clientes de manera consistente, fijar precios competitivos y gestionar proyectos de diseño e impresión 3D de forma eficiente como profesional independiente.

Información sobre mi perfil como freelance:
- Especialización técnica (diseño CAD paramétrico, diseño generativo, modelado orgánico, ingeniería inversa, diseño de producto): [ESPECIFICAR]
- Software de diseño dominado (Fusion 360, SolidWorks, Rhino, Blender, FreeCAD): [ESPECIFICAR]
- Tecnologías de impresión disponibles (propias o acceso a bureau externo): [ESPECIFICAR]
- Años de experiencia y proyectos destacados: [ESPECIFICAR]
- Tarifa hora actual o deseada: [ESPECIFICAR]
- Sectores o tipos de proyectos que quiero priorizar: [ESPECIFICAR]

Tarea 1 — Definición del nicho y propuesta de valor:
Define tu posicionamiento como freelance en el mercado del diseño 3D y la fabricación aditiva:
a) Nicho de especialización: por sector (joyería, medicina, arquitectura, industria, producto de consumo) o por tipo de servicio (prototipado rápido, diseño para fabricación aditiva, ingeniería inversa, animación de producto).
b) Propuesta de valor diferencial: qué ofreces que no hacen los bureaux industriales genéricos (agilidad, diseño integrado con fabricación, conocimiento del sector del cliente, iteraciones ilimitadas).
c) A quién te diriges: define tres buyer personas ideales (startup de hardware, empresa de joyería, pyme industrial que necesita prototipado ágil).
d) Proof of concept de tu especialización: cómo demostrar credibilidad rápidamente con un portfolio digital bien construido.

Tarea 2 — Catálogo de servicios con precios orientativos:
Define una oferta de servicios clara con tres niveles de servicio:
- Servicio básico (rápido y de bajo coste): modelado 3D de pieza simple con entrega de STL, presupuesto de impresión incluido. Precio fijo.
- Servicio estándar (proyecto completo): diseño CAD paramétrico, múltiples iteraciones, prototipo físico incluido, documentación técnica. Precio por proyecto.
- Servicio premium (consultoría + fabricación): diseño optimizado para fabricación (DfAM), simulación FEM básica, prototipo validado + serie inicial. Precio por proyecto o retainer mensual.
Incluye tiempos de entrega, revisiones incluidas y condiciones de cambio de alcance.

Tarea 3 — Captación de clientes como freelance técnico:
Diseña tu estrategia de captación de clientes en el nicho de diseño 3D:
- Portfolio online: cómo estructurar un portfolio en Behance, GrabCAD o web propia que genere confianza (casos de estudio completos con problema, proceso y resultado, no solo renders bonitos).
- LinkedIn para profesionales de diseño industrial: tipo de contenido que posiciona (comparativas de materiales, casos de diseño generativo, análisis de fallos de impresión resueltos).
- Plataformas de trabajo freelance especializadas en diseño e ingeniería: Upwork, Fiverr Pro, DesignCrowd, GrabCAD Marketplace, Freelancer.
- Comunidades especializadas: grupos de Thingiverse, Reddit (r/3Dprinting, r/functionalprint), Discord de diseño industrial, asociaciones de diseñadores industriales.
- Colaboraciones con bureaux de impresión 3D: cómo convertirte en proveedor de diseño preferente de un bureau que no tiene diseñadores propios.

Tarea 4 — Gestión de proyectos freelance de diseño 3D:
Define el proceso de gestión de proyectos para entregar con calidad y sin sobrepasar el tiempo estimado:
- Brief del cliente: plantilla de recogida de requisitos técnicos (dimensiones, material, proceso de fabricación previsto, función de la pieza, restricciones de coste).
- Proceso de diseño en sprints: revisiones con el cliente en hitos (concepto, diseño preliminar, diseño final, fichero para fabricación).
- Gestión de cambios de alcance: cómo documentar y cobrar los cambios solicitados fuera del brief inicial.
- Control de versiones de archivos CAD: convenciones de nomenclatura y herramientas de backup.

Tarea 5 — Finanzas y aspectos legales del negocio freelance en 3D:
Aborda los aspectos prácticos de la gestión del negocio:
- Tarifa hora vs. precio por proyecto: cuándo usar cada modelo y cómo calcular el precio mínimo rentable considerando horas no facturables.
- Contrato tipo para proyectos de diseño: cláusulas de propiedad intelectual (¿quién es propietario de los archivos CAD?), confidencialidad, revisiones incluidas, condiciones de pago y penalizaciones por retraso del cliente.
- Herramientas de productividad: software de gestión de proyectos, facturación y seguimiento de tiempo recomendados para un freelance técnico.
- Fiscalidad del freelance técnico en España: epígrafe IAE más adecuado, IVA en servicios digitales transfronterizos, deducciones de material e impresoras 3D.

Formato de respuesta: proporciona el catálogo de servicios en formato tabla listo para incluir en una web. Incluye una plantilla de brief de cliente en formato cuestionario. Redacta las cláusulas de PI del contrato tipo adaptadas a proyectos de diseño 3D.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estructurar servicios y captar clientes como freelance especializado en diseño 3D y fabricación aditiva',
                'vote_score'       => 46,
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
