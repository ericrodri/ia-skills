<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills491Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de productos industriales con IA para el sector manufactura',
                'description'      => 'Usa Claude para desarrollar estrategias de marketing B2B para el sector industrial, creando contenido técnico que conecte con ingenieros y directivos de manufactura.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing industrial con profundo conocimiento del sector manufactura e Industria 4.0.

Tu objetivo es ayudarme a diseñar una estrategia de marketing efectiva para productos o servicios dirigidos al sector industrial, donde el ciclo de venta es largo, los compradores son técnicos y la decisión involucra a múltiples stakeholders.

**Información que necesito que me solicites:**
1. Producto o servicio a comercializar (maquinaria, software industrial, componentes, servicios de mantenimiento)
2. Segmento de mercado objetivo (tipo de planta, industria, tamaño de empresa)
3. Rol del comprador principal (ingeniero de planta, director de operaciones, director de compras, CEO)
4. Presupuesto y canales de marketing disponibles
5. Principales competidores y posicionamiento actual en el mercado
6. Ciclo de ventas típico y proceso de decisión de compra del cliente objetivo

**Estrategia 1: Posicionamiento técnico de la propuesta de valor**
Desarrolla un posicionamiento basado en datos de rendimiento y ROI:
- Traducción de características técnicas a beneficios económicos cuantificables (reducción de downtime, ahorro en mantenimiento, incremento de OEE)
- Cálculo del ROI del producto para el cliente tipo con variables concretas y reales
- Propuesta de valor diferenciada por rol: qué le importa al ingeniero vs al director financiero vs al CEO
- Posicionamiento frente a la competencia basado en especificaciones técnicas verificables
- Casos de uso documentados con métricas de impacto en producción

**Estrategia 2: Contenido técnico para generación de demanda**
Planifica una estrategia de contenido para el sector industrial:
- Tipos de contenido de alto valor para la audiencia técnica: white papers, especificaciones técnicas, estudios de caso, videos de demostración en planta, webinars con ingenieros
- SEO técnico: palabras clave industriales con intención de compra (búsquedas de especificaciones, comparativas, proveedores)
- Cadencia de publicación y canales según el comportamiento de búsqueda de compradores industriales
- LinkedIn como canal prioritario para alcanzar a decisores industriales: tipo de contenido, formato y frecuencia
- Catálogo de productos digital optimizado para ser encontrado por ingenieros en búsqueda activa
- Calculadoras de ROI interactivas y herramientas de configuración de producto en la web

**Estrategia 3: Generación de leads cualificados B2B**
Diseña el sistema de captación y cualificación de prospectos:
- Criterios de calificación ICP (Ideal Customer Profile) para el sector industrial: tamaño de planta, tecnología instalada, presupuesto de capex, urgencia del proyecto
- Lead magnets para el sector industrial: guías de comparación técnica, estudios de eficiencia, checklists de mantenimiento preventivo
- Proceso de nurturing de prospectos con ciclo de decisión largo (6-18 meses): contenido por etapa del funnel
- Integración con ferias industriales y eventos del sector como canal de generación de leads offline
- Estrategia de account-based marketing (ABM) para las 50 cuentas de mayor potencial

**Estrategia 4: Habilitación del equipo de ventas**
Crea materiales de apoyo para el proceso de venta:
- Guión de primera llamada adaptado al sector industrial con preguntas de descubrimiento técnico
- Presentación de ventas modular: versión para ingeniero, versión para dirección, versión para compras
- Respuestas a objeciones técnicas más frecuentes con argumentos basados en datos
- Plantillas de propuesta técnica y comercial por tipo de proyecto
- Comparativa de producto vs competencia en formato de tabla técnica para uso en ventas

**Entregable:**
Proporciona el plan de marketing industrial completo a 6 meses con acciones por mes, responsables sugeridos, KPIs de cada acción y presupuesto orientativo por canal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing B2B para productos y servicios del sector industrial',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de sistemas de gemelos digitales con IA para manufactura',
                'description'      => 'Usa Claude para diseñar la arquitectura de un gemelo digital de línea de producción, seleccionar tecnologías y planificar la integración con sistemas físicos existentes.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de sistemas de Industria 4.0 especializado en gemelos digitales (digital twins) e integración de sistemas OT/IT en entornos de manufactura.

Tu objetivo es ayudarme a diseñar e implementar un gemelo digital para una instalación industrial, desde la captura de datos del mundo físico hasta la simulación y optimización en el entorno virtual.

**Información de contexto que necesito:**
1. Tipo de instalación industrial (planta de ensamblaje, producción continua, manufactura discreta, almacén logístico)
2. Sistemas y maquinaria existentes (PLCs, SCADA, sensores IoT, robots, CNC)
3. Conectividad disponible (protocolos industriales: OPC-UA, MQTT, Modbus, Profibus, EtherNet/IP)
4. Infraestructura IT disponible (servidores, cloud, red industrial segregada)
5. Objetivo principal del gemelo digital (mantenimiento predictivo, optimización de producción, simulación de cambios, entrenamiento de operarios)
6. Nivel de madurez digital actual de la planta

**Arquitectura 1: Capa de adquisición de datos**
Diseña el sistema de captura de datos del mundo físico:
- Inventario de sensores necesarios por tipo de variable a monitorizar (temperatura, vibración, presión, caudal, posición, corriente eléctrica, velocidad)
- Protocolo de comunicación óptimo para cada tipo de equipo y cómo integrar equipos legacy sin conectividad nativa
- Edge computing: procesamiento local en la planta para reducir latencia y gestionar la conectividad intermitente
- Gateway industrial: concentrador de datos que normaliza protocolos y envía a la nube
- Estrategia de adquisición en tiempo real vs batch según la naturaleza de cada variable
- Gestión de la seguridad en la red OT: segmentación, firewalls industriales, acceso remoto seguro

**Arquitectura 2: Plataforma del gemelo digital**
Define el stack tecnológico de la plataforma:
- Comparativa de plataformas de gemelo digital: Azure Digital Twins, AWS IoT TwinMaker, Siemens MindSphere, PTC ThingWorx, plataforma open source
- Modelo de datos: cómo representar la jerarquía física (planta → línea → máquina → componente) en el modelo digital
- Motor de simulación: qué tecnología usar para replicar el comportamiento físico de los equipos
- Integración con sistemas de información corporativos: ERP (SAP), MES (Manufacturing Execution System), CMMS de mantenimiento
- Gestión del histórico de datos: time-series database (InfluxDB, TimescaleDB) y data lake para análisis retrospectivo
- Visualización 3D: integración con modelos CAD y plataformas de renderizado en tiempo real

**Arquitectura 3: Modelos predictivos y de optimización**
Implementa la inteligencia del gemelo digital:
- Modelos de mantenimiento predictivo: detección de anomalías en vibraciones con ML (isolation forest, LSTM, autoencoders), predicción de fallo de rodamientos, motores y sistemas hidráulicos
- Optimización de parámetros de producción: búsqueda del punto óptimo de velocidad, temperatura y presión para maximizar OEE (Overall Equipment Effectiveness)
- Simulación de escenarios: qué pasa si cambio la secuencia de producción, añado un turno o sustituyo un componente
- Detección de cuellos de botella en la línea de producción usando simulación de eventos discretos
- Algoritmo de scheduling de producción optimizado por restricciones de máquina, material y demanda

**Arquitectura 4: Interfaz y casos de uso operativos**
Define cómo el equipo usará el gemelo digital:
- Panel de control para el operario: estado en tiempo real de su línea, alertas de anomalía, instrucciones de ajuste
- Dashboard para el responsable de mantenimiento: estado de salud de cada equipo, próximas intervenciones recomendadas, historial de intervenciones vs alertas del modelo
- Herramienta de simulación para ingeniería: probar cambios de layout o de proceso sin parar la producción
- Módulo de entrenamiento: simulador para formar operarios nuevos en condiciones de fallo seguras

**Plan de implementación:**
Proporciona el plan de proyecto en 4 fases con hitos, dependencias técnicas, riesgos y mitigación, estimación de coste total de implementación y TCO (Total Cost of Ownership) a 3 años.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño de arquitectura de gemelo digital para plantas de manufactura e Industria 4.0',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de plantas de producción asistido por IA con optimización de layout',
                'description'      => 'Usa Claude para analizar y optimizar el layout de una planta de manufactura, identificando ineficiencias en el flujo de materiales y proponiendo rediseños basados en principios Lean.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero industrial especializado en diseño de plantas, manufactura Lean y optimización de flujos de producción.

Tu objetivo es ayudarme a analizar y rediseñar el layout de una instalación industrial para maximizar la eficiencia del flujo de materiales, reducir desperdicios y mejorar las condiciones de trabajo.

**Información que debes solicitarme:**
1. Tipo y dimensiones del espacio disponible (metros cuadrados, altura, forma de la nave)
2. Procesos productivos que se realizan y su secuencia lógica de operaciones
3. Tipos y dimensiones de la maquinaria principal
4. Volumen y variedad de productos fabricados (mix de productos)
5. Número de operarios por turno y su distribución actual
6. Principales problemas identificados actualmente (distancias, cuellos de botella, accidentes, contaminación cruzada)

**Análisis 1: Diagnóstico del layout actual**
Evalúa la situación actual con herramientas de ingeniería industrial:
- Diagrama de flujo de materiales actual: mapea el recorrido de materiales y productos en proceso a lo largo de toda la planta
- Análisis de distancias recorridas: calcula los metros que recorre cada material por unidad producida
- Value Stream Mapping (VSM) del estado actual: identifica actividades de valor añadido vs desperdicios (esperas, transportes, inventarios intermedios)
- Mapa de frecuencias: qué pares de procesos intercambian materiales con mayor frecuencia (análisis from-to chart)
- Identificación de los 8 desperdicios Lean presentes en el layout actual: sobreproducción, esperas, transportes, sobreprocesamiento, inventario, movimientos, defectos, talento no utilizado
- Análisis de seguridad: cruces de tráfico peatonal con maquinaria, ergonomía de puestos de trabajo, señalización y zonas de emergencia

**Análisis 2: Principios de diseño de planta aplicados**
Aplica los principios de ingeniería de plantas para generar alternativas:
- Principio de integración total: diseño que integra operarios, máquinas, materiales, movimiento y tiempo
- Principio de mínima distancia: minimizar los metros recorridos por los materiales entre operaciones consecutivas
- Principio de flujo: diseñar el movimiento según la secuencia de operaciones sin retrocesos ni cruces
- Principio de espacio cúbico: aprovechar la altura disponible con sistemas de almacenamiento vertical
- Principio de satisfacción y seguridad: lugares de trabajo seguros, iluminados y ergonómicos
- Principio de flexibilidad: diseño que pueda adaptarse ante cambios futuros de producto o volumen

**Análisis 3: Generación de alternativas de layout**
Propone 3 alternativas de rediseño con sus trade-offs:

Alternativa A: Layout por proceso (funcional): agrupa máquinas del mismo tipo, óptimo para alta variedad y bajo volumen.

Alternativa B: Layout por producto (línea de producción): máquinas ordenadas según la secuencia del proceso, óptimo para bajo mix y alto volumen.

Alternativa C: Layout celular: células de manufactura autónomas por familia de producto, equilibrio entre flexibilidad y eficiencia.

Para cada alternativa, calcula la reducción de distancias recorridas, el impacto en WIP (work in progress) y la inversión de relocación de equipos.

**Análisis 4: Optimización del layout seleccionado**
Refina la alternativa elegida con técnicas de optimización:
- Ubicación de almacenes de materia prima y producto terminado cerca de los puntos de consumo y expedición
- Diseño de pasillos: anchura mínima según normativa, circulación unidireccional vs bidireccional, marcaje en suelo
- Zonas de trabajo visual: marcaje de zonas de máquina, zona de operario, zonas de stock Kanban
- Puntos de suministro de energía, aire comprimido y fluidos industriales adaptados al nuevo layout
- Plan de actuaciones 5S para sostener el nuevo orden y organización

**Entregable:**
Proporciona el informe completo de rediseño con el comparativo de métricas antes y después (distancias, WIP, productividad estimada), la justificación de la alternativa seleccionada y el plan de implementación del cambio de layout con fases, plazos y estimación de inversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Optimización de layout de planta industrial con metodología Lean e ingeniería de flujos',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2B de soluciones de Industria 4.0 con IA como asesor estratégico',
                'description'      => 'Usa Claude para preparar estrategias de venta de tecnología industrial, identificar los pain points del cliente y estructurar propuestas de valor en lenguaje de negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de ventas B2B especializado en tecnología industrial y soluciones de Industria 4.0.

Tu objetivo es ayudarme a ser más efectivo vendiendo soluciones tecnológicas complejas al sector manufactura, donde los compradores son técnicamente exigentes, los ciclos son largos y las propuestas deben justificarse con ROI concreto.

**Contexto que necesito que me proporciones:**
1. Solución que vendes: tipo de tecnología industrial (IoT, MES, robótica, automatización, software de gestión de planta)
2. Mercado objetivo: tipo de industria, tamaño de empresa, países
3. Proceso de compra típico del cliente: quién participa, cuánto tarda, cómo se aprueba la inversión
4. Principales objeciones que enfrentas en el ciclo de venta
5. Tu ventaja competitiva frente a otras soluciones del mercado
6. Cuota mensual y número de oportunidades activas en tu pipeline

**Fase 1: Investigación del prospecto antes del primer contacto**
Desarrolla un protocolo de investigación pre-visita:
- Análisis de la empresa: sector exacto, procesos productivos, productos que fabrican, mercados donde vende
- Indicadores de madurez digital: ¿tienen ERP? ¿qué sistemas de planta usan? ¿han hecho inversiones digitales previas?
- Señales de dolor identificables: reportes de prensa sobre problemas de calidad, expansiones de capacidad, cambios de dirección industrial
- Mapa de stakeholders: organigrama de operaciones, IT y dirección financiera para identificar a todos los influenciadores de la decisión
- Historial de compras en tecnología industrial: proveedores actuales, proyectos en curso o recientes

**Fase 2: Descubrimiento de necesidades con preguntas SPIN**
Estructura la conversación de descubrimiento con metodología SPIN Selling adaptada a la venta industrial:

Preguntas de Situación: conocer el estado actual sin hacer perder tiempo (¿cuántas líneas de producción tienen? ¿qué sistema de mantenimiento utilizan?)

Preguntas de Problema: hacer aflorar los puntos de dolor latentes (¿con qué frecuencia sufren paradas no planificadas? ¿cuánto tiempo pierde el equipo recogiendo datos de producción manualmente?)

Preguntas de Implicación: ampliar el impacto del problema para crear urgencia (¿cuánto les cuesta cada hora de parada no planificada? ¿cómo afecta a sus clientes los retrasos en entrega?)

Preguntas de Necesidad de Pago: hacer que el cliente articule el valor de la solución (¿qué significaría para ustedes reducir las paradas no planificadas en un 40%? ¿cómo afectaría a su margen si pudieran aumentar el OEE 5 puntos?)

**Fase 3: Construcción del business case**
Ayuda al cliente a justificar la inversión internamente:
- Cálculo de ROI: cuantifica el ahorro en tiempo de parada, reducción de scrap, ahorro en mano de obra indirecta, mejora de calidad
- Payback period: en cuántos meses se recupera la inversión con los ahorros calculados
- Comparativa de coste de no hacer nada: cuánto pierde el cliente cada mes que no implementa la solución
- Riesgos mitigados: compliance regulatorio, riesgo reputacional por defectos de calidad, dependencia de operarios clave
- Casos de éxito comparables: empresas similares con resultados documentados y extrapolables

**Fase 4: Gestión del proceso de decisión multi-stakeholder**
Navega la complejidad del comité de compra industrial:
- Mapa de influencia y autoridad: quién recomienda, quién bloquea, quién tiene poder de veto, quién firma
- Estrategia de venta por perfil: argumentos técnicos para el ingeniero, ROI para el CFO, visión estratégica para el CEO
- Cómo gestionar al comprador que favorece la solución del competidor sin generar conflicto
- Manejo de la fase de piloto o prueba de concepto: cómo convertir un piloto en un pedido completo

**Entregable:**
Genera el playbook de ventas completo con el guión de primera visita, el template de business case en Excel con fórmulas de ROI y el deck de propuesta de valor en formato estructurado listo para personalizar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Playbook de ventas B2B de tecnología industrial con business case y metodología SPIN',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de soluciones de IA para manufactura e Industria 4.0',
                'description'      => 'Usa Claude para diseñar la hoja de ruta de producto de una solución tecnológica para manufactura, priorizando funcionalidades según el impacto operativo real.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior especializado en software industrial y soluciones de Industria 4.0 para el sector manufactura.

Tu objetivo es ayudarme a construir y gestionar la hoja de ruta de producto de una solución de software o hardware para plantas industriales, tomando decisiones de priorización basadas en el impacto operativo y la estrategia de negocio.

**Datos de partida que debes solicitarme:**
1. Descripción del producto o solución (MES, CMMS, plataforma IoT, sistema de calidad, ERP industrial)
2. Estado actual del producto: etapa de desarrollo, clientes actuales, principales funcionalidades existentes
3. Tipo de cliente objetivo y su proceso de compra
4. Principales competidores y su posicionamiento en el mercado
5. Recursos de desarrollo disponibles (tamaño del equipo, tecnología base)
6. Métricas de negocio prioritarias (ARR, churn, NPS, time to value)

**Marco 1: Descubrimiento de necesidades del usuario industrial**
Diseña el proceso de research de producto para el contexto industrial:
- Técnicas de entrevista de usuario adaptadas a operarios de planta, ingenieros de proceso y jefes de producción (cómo entrevistar a alguien que está en medio del turno de producción)
- Observación en planta (gemba walk): qué observar y cómo documentar lo que ves sin interrumpir la producción
- Análisis de logs y datos de uso del producto para inferir friction points sin preguntar directamente
- Síntesis de feedback de los tickets de soporte para identificar patrones de necesidad recurrentes
- Job-to-be-done del usuario industrial: qué trabajo funcional, emocional y social trata de resolver con el producto

**Marco 2: Priorización de funcionalidades para manufactura**
Adapta los frameworks estándar de product management al contexto industrial:
- Impact vs Effort adaptado: impacto medido en reducción de paradas, mejora de OEE, reducción de scrap o ahorro de mano de obra indirecta
- Valor de negocio: funcionalidades que permiten cerrar deals más grandes, reducir churn o acelerar el time to value
- Urgencia regulatoria: funcionalidades exigidas por normativas de calidad (ISO 9001, TS 16949), seguridad o medioambiente
- Deuda técnica: cuánto frena el crecimiento del producto y cuándo priorizar su resolución
- Diseño de la hoja de ruta por horizontes temporales: Now (próximos 3 meses), Next (3-6 meses), Later (6-18 meses)

**Marco 3: Diseño de la experiencia de usuario industrial**
Define los principios de UX para entornos de manufactura:
- Diseño para condiciones adversas: pantallas con luz solar directa, operación con guantes, ruido ambiente elevado, pantallas industriales con resolución limitada
- Simplicidad extrema: el operario de planta no puede dedicar tiempo a aprender software; la interfaz debe ser obvia sin formación
- Alertas y notificaciones en contexto: cómo llevar la información crítica al operario en el momento en que la necesita sin crear fatiga de alertas
- Integración con el flujo de trabajo físico: el software debe seguir la secuencia de operaciones físicas, no al revés
- Modo sin conexión: las plantas tienen zonas sin conectividad; el producto debe funcionar en local y sincronizar cuando haya red

**Marco 4: Go-to-market para productos industriales**
Diseña la estrategia de lanzamiento de nuevas funcionalidades:
- Early adopter program: cómo seleccionar los clientes piloto en el sector industrial y qué valor ofrecerles a cambio del feedback
- Proceso de validación industrial antes del lanzamiento general: pruebas en entorno real de producción, simulación de condiciones extremas
- Documentación técnica y formación: cómo comunicar nuevas funcionalidades a audiencias técnicas con diferente nivel de madurez digital
- Upsell y expansión: cómo vender funcionalidades adicionales a clientes existentes en una industria conservadora en sus decisiones de compra

**Entregable:**
Proporciona la plantilla de PRD (Product Requirements Document) adaptada al sector industrial, el framework de priorización en hoja de cálculo con los criterios definidos y la plantilla de presentación de hoja de ruta para clientes y para el equipo de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Roadmap y priorización de producto para soluciones de software industrial e Industria 4.0',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del cambio y talento humano en la transformación hacia Industria 4.0',
                'description'      => 'Usa Claude para diseñar un programa de gestión del cambio que acompañe a los equipos de manufactura en la adopción de nuevas tecnologías industriales.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH especializado en transformación cultural y gestión del cambio en entornos industriales.

Tu objetivo es diseñar un programa completo de gestión del cambio para acompañar a una planta de manufactura en su transición hacia Industria 4.0, abordando las resistencias, formando al talento existente y atrayendo nuevos perfiles digitales.

**Información que necesito que me pidas:**
1. Tipo y tamaño de la planta (número de operarios, nivel de sindicación, antigüedad media)
2. Tecnologías que se van a implementar (robots, sistemas de visión, sensores IoT, software MES)
3. Timeline de implementación tecnológica previsto
4. Cultura organizacional actual: ¿conservadora o abierta al cambio?
5. Experiencias previas de cambio en la organización y su resultado
6. Presupuesto disponible para formación y gestión del cambio

**Diagnóstico 1: Análisis de impacto en las personas**
Evalúa cómo afecta la transformación a cada colectivo:
- Mapa de stakeholders: quién gana, quién pierde y quién se mantiene neutro con los cambios tecnológicos
- Análisis de puestos afectados: qué tareas se automatizan, qué nuevas habilidades se necesitan, qué puestos desaparecen y qué nuevos roles emergen
- Evaluación de la brecha de competencias (skills gap): diferencia entre las habilidades actuales del equipo y las requeridas en el nuevo escenario digital
- Identificación de líderes de opinión en planta: operarios respetados cuya actitud positiva puede influir al resto del equipo
- Análisis de resistencias potenciales: miedos más comunes (pérdida de empleo, no saber usar la tecnología, pérdida de autonomía) y cómo abordarlos desde la comunicación

**Plan 2: Estrategia de comunicación del cambio**
Diseña el plan de comunicación interna:
- Narrativa del cambio: el mensaje central que explica el por qué de la transformación de forma honesta y conectada con la seguridad del empleo
- Segmentación de mensajes: qué decirle al operario de línea, al mando intermedio, al sindicato y a la dirección
- Canales de comunicación en entorno industrial: tablón de anuncios, reuniones de equipo, vídeos en pantallas de planta, newsletter digital
- Calendario de comunicaciones: hitos clave, mensajes antes y después de cada fase de implementación
- Canal de feedback y preguntas: buzón de sugerencias, sesiones de preguntas y respuestas, reuniones de actualización
- Gestión de rumores: cómo detectar bulos que circulan en la planta y neutralizarlos con información veraz

**Plan 3: Programa de formación y upskilling**
Diseña el plan de desarrollo de competencias:
- Currículum de formación por rol: qué necesita aprender cada perfil (operario de línea, técnico de mantenimiento, ingeniero de proceso, responsable de calidad)
- Itinerarios formativos: combinación de formación en planta, e-learning, formación externa en centros especializados y aprendizaje entre pares
- Metodología de formación para operarios industriales: aprendizaje basado en práctica real, formación corta en el puesto de trabajo, uso de realidad aumentada para guiar tareas nuevas
- Certificaciones industriales: qué certificaciones externas añaden valor (PLC, robótica industrial, análisis de datos de producción)
- Programa de mentoring interno: cómo emparejar a operarios experimentados con nuevos perfiles digitales para transferencia de conocimiento bidireccional
- Métricas del programa de formación: tasa de completación, evaluación de competencias adquiridas, aplicación real en el puesto de trabajo

**Plan 4: Atracción de nuevos perfiles digitales**
Diseña la estrategia de reclutamiento para Industria 4.0:
- Nuevos perfiles necesarios en la planta digital: data analyst de producción, ingeniero de robótica, especialista en automatización, técnico de ciberseguridad industrial
- Employer branding industrial: cómo posicionar la planta como un entorno de trabajo tecnológico y con futuro para atraer talento joven
- Fuentes de reclutamiento: universidades técnicas, formación profesional dual, comunidades de ingeniería online

**Entregable:**
Proporciona el plan de gestión del cambio completo con cronograma de comunicaciones, currículum de formación por rol, KPIs del programa y plantilla del estudio de clima laboral para medir el impacto del proceso de transformación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Programa de gestión del cambio y upskilling para la transformación digital en manufactura',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de inversiones en automatización e Industria 4.0',
                'description'      => 'Usa Claude para construir modelos financieros que justifiquen inversiones en tecnología industrial, con análisis de payback, VAN y análisis de sensibilidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero industrial especializado en evaluación de inversiones en activos productivos y proyectos de transformación digital en manufactura.

Tu objetivo es construir el análisis financiero riguroso que justifique una inversión en tecnología de Industria 4.0 ante el consejo de administración, con modelos cuantitativos robustos y análisis de riesgo.

**Datos de inversión que debes solicitarme:**
1. Descripción de la tecnología a implementar (robot, sistema de visión, IoT, software MES, línea automatizada)
2. Inversión total (CAPEX): equipamiento, instalación, integración, formación, licencias de software
3. Beneficios esperados: reducción de costes operativos, incremento de capacidad, mejora de calidad, reducción de scrap
4. Vida útil estimada del activo y valor residual al final de la vida útil
5. WACC (coste de capital) de la empresa o tasa de descuento requerida por la dirección
6. Horizonte de evaluación del proyecto (normalmente 5-10 años para inversiones industriales)

**Modelo 1: Cuantificación de beneficios**
Transforma mejoras operativas en euros concretos:
- Reducción de mano de obra directa: número de operarios × coste cargado × horas de operación anual
- Ahorro en mantenimiento correctivo: frecuencia de averías actuales × coste de cada avería (mano de obra + recambios + pérdida de producción)
- Reducción de scrap y reprocesos: porcentaje de defectos actuales × coste del material × volumen de producción anual
- Incremento de capacidad productiva: unidades adicionales por hora × margen de contribución por unidad × horas de operación
- Reducción de consumo energético: diferencia de consumo entre proceso manual y automatizado × precio kWh × horas anuales
- Mejora de tiempo de ciclo: reducción en % del tiempo de fabricación × impacto en capacidad y flexibilidad de entrega

**Modelo 2: Estructura financiera del proyecto**
Construye el modelo de flujos de caja:
- Inversión inicial total (CAPEX): desglose por partidas y timing de pagos durante la implementación
- Costes operativos incrementales (OPEX) del nuevo sistema: mantenimiento, licencias software, consumibles, energía adicional
- Ahorro de costes operativos anuales: suma de todos los beneficios cuantificados en el Modelo 1
- Flujos de caja libres anuales: ahorro - OPEX incremental - amortización fiscal
- Valor residual en el año final: valor de mercado del activo o valor de libro según normativa fiscal
- Consideraciones fiscales: amortización acelerada si está disponible, deducciones por digitalización o inversión productiva

**Modelo 3: Métricas de evaluación de inversión**
Calcula los indicadores financieros estándar:
- Payback period simple: años hasta recuperar la inversión sin descuento
- Payback period descontado: años hasta recuperar la inversión considerando el valor temporal del dinero
- VAN (Valor Actual Neto): suma de flujos de caja descontados menos inversión inicial; debe ser positivo para aprobar la inversión
- TIR (Tasa Interna de Retorno): rentabilidad intrínseca del proyecto; debe superar el WACC
- ROI del proyecto: beneficio neto total / inversión total en el horizonte de evaluación
- EBITDA incremental: mejora del EBITDA anual gracias a la inversión

**Modelo 4: Análisis de sensibilidad y riesgo**
Evalúa la robustez del proyecto ante incertidumbre:
- Variables críticas: identifica los 3-4 factores con mayor impacto en el VAN (precio del producto, volumen de producción, ahorro en mano de obra, tasa de defectos)
- Análisis de escenarios: calcula el VAN en escenario pesimista (50% de los beneficios), base y optimista (beneficios con 20% de upside)
- Análisis de punto de equilibrio: ¿qué nivel mínimo de utilización de la máquina hace que el proyecto sea rentable?
- Montecarlo conceptual: describe cómo modelar la distribución de probabilidad del VAN con las variables de riesgo identificadas

**Entregable:**
Proporciona la plantilla completa del modelo financiero en formato Excel con todas las fórmulas y los escenarios, más la presentación ejecutiva de una página con el resumen de los indicadores clave para la aprobación por parte del comité de inversiones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelo financiero completo para justificar inversiones en automatización y tecnología industrial',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance y regulación legal en manufactura inteligente e Industria 4.0',
                'description'      => 'Usa Claude para mapear el marco regulatorio aplicable a una planta de manufactura digital, identificar obligaciones de compliance y gestionar los riesgos legales de las nuevas tecnologías.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho industrial, regulación tecnológica y compliance para el sector manufactura en España y la Unión Europea.

Tu objetivo es ayudarme a mapear el marco legal y regulatorio completo aplicable a una instalación de manufactura que está implementando tecnologías de Industria 4.0, identificando todas las obligaciones de compliance y los riesgos legales emergentes.

**Contexto que necesito que me proporciones:**
1. Tipo de planta y sector industrial (automoción, alimentación, química, electrónica, farmacia, etc.)
2. Tecnologías que se están implementando (robots colaborativos, IA para control de calidad, gemelos digitales, sensores IoT, procesamiento de datos en cloud)
3. Tamaño de la empresa y países donde opera
4. Situación laboral de los trabajadores (convenio colectivo aplicable, representación sindical)
5. Datos que se procesan en los sistemas digitales (datos de producción, datos de empleados, datos de clientes)

**Área 1: Seguridad de máquinas y robotización**
Mapea el marco legal de seguridad industrial:
- Directiva de Máquinas 2006/42/CE y el nuevo Reglamento de Máquinas 2023/1230: marcado CE, evaluación de conformidad, documentación técnica para robots industriales y colaborativos
- EN ISO 10218 (seguridad de robots industriales) y ISO/TS 15066 (robots colaborativos): cómo cumplir los estándares técnicos de seguridad para cobots
- Reglamento de IA europeo (EU AI Act): clasificación de los sistemas de IA usados en la planta (riesgo alto, limitado o mínimo) y obligaciones por categoría
- Evaluación de riesgos de la convivencia humano-robot: obligaciones del empresario según la Ley de Prevención de Riesgos Laborales
- Responsabilidad civil y penal en caso de accidente con un robot o sistema autónomo: quién responde (fabricante, integrador, empresa usuaria)

**Área 2: Protección de datos y privacidad en el entorno industrial**
Analiza las obligaciones de privacidad en la planta digital:
- RGPD aplicado al entorno industrial: qué datos de empleados se procesan en los sistemas de manufactura (rendimiento por operario, seguimiento de movimientos, control de acceso biométrico)
- Bases jurídicas para el tratamiento de datos de empleados en el entorno de Industria 4.0: cuándo es necesario el consentimiento y cuándo aplica el interés legítimo o la relación laboral
- Privacy by design en el diseño de los sistemas de control de planta: minimización de datos, anonimización de métricas de producción vinculadas a operarios
- Transferencias internacionales de datos a sistemas cloud fuera de la UE: cláusulas contractuales tipo, Binding Corporate Rules
- Datos de clientes en los sistemas de producción: trazabilidad de producto con datos personales del destinatario

**Área 3: Derecho laboral y digitalización**
Gestiona los derechos de los trabajadores en la transformación digital:
- Derecho de información y consulta a la representación de los trabajadores antes de implementar tecnologías de control y supervisión
- Acuerdo de teletrabajo y desconexión digital si aplica a perfiles de gestión de planta
- Limitaciones al uso de sistemas de videovigilancia, biometría y geolocalización para control de empleados
- Regulación del algoritmo de gestión del trabajo: obligación de informar a los trabajadores de la lógica de los sistemas automatizados que afectan a sus condiciones laborales (Ley Rider en España)
- Obligaciones en materia de formación para la adaptación tecnológica (Estatuto de los Trabajadores)

**Área 4: Ciberseguridad y resiliencia operacional**
Analiza las obligaciones de ciberseguridad en infraestructuras industriales:
- Directiva NIS2 y su aplicación al sector manufactura: quién es operador esencial o importante y cuáles son sus obligaciones
- Esquema Nacional de Seguridad si la empresa tiene contratos con administraciones públicas
- Estándares de ciberseguridad industrial: IEC 62443 para sistemas de control industrial (ICS/SCADA)
- Obligación de notificación de incidentes a las autoridades (INCIBE, CNPD) y a los afectados
- Responsabilidad contractual ante clientes si un ciberataque interrumpe la cadena de suministro

**Entregable:**
Genera el mapa de compliance completo con todas las normativas aplicables, sus requisitos concretos, el organismo supervisor competente y una valoración del nivel de riesgo si no se cumple. Incluye también el plan de acción de compliance con las acciones prioritarias ordenadas por nivel de riesgo legal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Mapa de compliance legal y regulatorio para plantas de manufactura con Industria 4.0',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico inteligente para sistemas de manufactura con IA',
                'description'      => 'Usa Claude para diseñar un sistema de soporte técnico para plantas industriales, con bases de conocimiento de averías, guías de diagnóstico y protocolos de escalado.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de soporte técnico especializado en sistemas industriales y maquinaria de manufactura.

Tu objetivo es diseñar e implementar un sistema de soporte técnico de alto rendimiento para dar servicio a plantas industriales con equipos complejos, donde el tiempo de respuesta y la resolución en el primer contacto son críticos porque cada hora de parada tiene un coste elevado.

**Información de contexto necesaria:**
1. Tipos de sistemas y maquinaria que se soportan (PLCs, robots, sistemas CNC, líneas de producción, equipos de medición, software industrial)
2. Número de clientes o plantas a las que se da soporte y su distribución geográfica
3. Equipo de soporte disponible: nivel 1 (call center técnico), nivel 2 (especialistas por tecnología), nivel 3 (ingeniería de campo)
4. SLAs actuales o requeridos: tiempo de primera respuesta y tiempo de resolución según criticidad
5. Sistemas actuales de ticketing y gestión de conocimiento
6. Principales causas de fallo más frecuentes en los equipos soportados

**Pilar 1: Base de conocimiento de averías industriales**
Construye el repositorio de conocimiento técnico:
- Estructura de la base de conocimiento: árbol de categorías por tipo de equipo, subsistema y modo de fallo
- Formato estándar del artículo de conocimiento técnico: descripción del síntoma, posibles causas (árbol de decisión), pasos de diagnóstico en orden de probabilidad, solución definitiva, código de pieza de repuesto si aplica, tiempo estimado de reparación
- Proceso de captura del conocimiento tácito de los técnicos senior: cómo documentar lo que saben los expertos antes de que se jubilen o cambien de empresa
- Sistema de rating de artículos: los técnicos votan la utilidad de cada artículo para identificar los de mayor calidad
- Proceso de revisión y actualización: quién revisa los artículos obsoletos y con qué periodicidad
- Categorías de averías comunes en manufactura: fallos eléctricos, fallos mecánicos, fallos de software/firmware, errores de configuración, desgaste de consumibles

**Pilar 2: Sistema de diagnóstico guiado con IA**
Diseña el asistente de diagnóstico de primer nivel:
- Árbol de diagnóstico interactivo: serie de preguntas binarias que llevan al técnico al diagnóstico correcto paso a paso
- Integración de datos de telemetría: si el equipo tiene conectividad, el sistema de soporte lee automáticamente los logs de error y los parámetros de funcionamiento para pre-diagnosticar antes de que hable el técnico de cliente
- Priorización automática de tickets por criticidad: clasificación según impacto en producción (parada total, degradación, intermitente, sin impacto en producción)
- Sistema de sugerencias de solución basado en el historial de averías similares: búsqueda por síntomas en la base de conocimiento con similitud semántica
- Detección de patrones de fallo recurrente en un mismo equipo: alerta automática cuando un equipo supera el umbral de intervenciones en un período

**Pilar 3: Protocolos de escalado y gestión de crisis**
Define el proceso de escalado por criticidad:
- Clasificación de criticidad: P1 (parada total de línea productiva), P2 (reducción de capacidad superior al 30%), P3 (degradación de calidad o seguridad), P4 (avería sin impacto en producción inmediata)
- SLA por nivel de criticidad: tiempos de primera respuesta, tiempo máximo de resolución remota antes de escalar a campo, tiempo máximo de resolución en campo
- Protocolo de war room para P1: convocatoria inmediata del equipo de especialistas, comunicación al cliente cada 30 minutos, coordinación de envío urgente de repuestos
- Gestión de repuestos críticos: stock de guardia de piezas de alta rottura, red de proveedores de emergencia, logística urgente 24/7
- Post mortem de incidentes graves: análisis de causa raíz, acciones preventivas y actualización de la base de conocimiento

**Pilar 4: Métricas y mejora continua del soporte**
Define los KPIs del área técnica:
- First Contact Resolution (FCR): porcentaje de tickets resueltos en el primer contacto sin escalar
- Mean Time to Repair (MTTR): tiempo medio desde la apertura del ticket hasta la resolución completa
- Mean Time Between Failures (MTBF) por modelo de equipo: indicador de calidad del producto y efectividad del mantenimiento preventivo
- Customer Effort Score técnico: facilidad con que el cliente resuelve su problema con el soporte
- Coste por ticket por nivel de soporte: para identificar qué resolvemos de forma más eficiente y qué necesita más recursos
- Ratio de reaperturas: tickets que vuelven a abrirse en menos de 7 días por resolución incompleta

**Entregable:**
Genera la plantilla completa del artículo de base de conocimiento técnico, el árbol de diagnóstico para las 5 averías más frecuentes y el playbook de gestión de incidentes P1 con el protocolo de comunicación al cliente listo para usar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de soporte técnico industrial con base de conocimiento de averías y diagnóstico guiado',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de Industria 4.0 como servicio freelance con IA',
                'description'      => 'Usa Claude para estructurar y escalar un negocio freelance de consultoría de transformación digital industrial, con metodología propia, propuestas y entregables.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en el diseño y crecimiento de consultorías técnicas independientes para el sector industrial.

Tu objetivo es ayudarme a construir un negocio freelance de consultoría de Industria 4.0 y transformación digital para manufactura, desde la definición de la propuesta de valor hasta la operativa del proyecto y la escala del negocio.

**Información de partida que debes solicitarme:**
1. Experiencia técnica de base: área de especialización (automatización, IoT, robótica, datos industriales, Lean + digital, mantenimiento predictivo)
2. Experiencia profesional previa en el sector industrial: años, tipo de empresa, proyectos destacados
3. Tipo de cliente objetivo: tamaño de empresa, sector industrial, madurez digital
4. Modelo de negocio preferido: proyectos por tiempo y material, proyectos llave en mano, retainers de consultoría continua, formación
5. Objetivos de facturación a 12 meses y modelo de vida profesional deseado
6. Recursos disponibles: herramientas, red de contactos en el sector, socios potenciales

**Bloque 1: Definición del posicionamiento como consultor industrial**
Diseña el nicho y la propuesta de valor diferencial:
- Especialización vertical: no "consultor de Industria 4.0" genérico, sino "especialista en digitalización de mantenimiento para industria alimentaria" (ejemplo)
- Propuesta de valor concreta y medible: qué resultado específico consiguen las plantas que contratan tus servicios (reducción de paradas no planificadas, mejora del OEE, reducción de costes de mantenimiento)
- Credenciales que construyen confianza en el sector industrial conservador: certificaciones técnicas, casos de éxito documentados con métricas reales, artículos técnicos publicados
- Posicionamiento de tarifas: cómo justificar una tarifa de 800-1.500€/día como consultor independiente frente a la alternativa de contratar a un empleado o a una gran consultora
- Diferenciación frente a las grandes consultoras: agilidad, acceso directo al experto senior, enfoque en implementación práctica vs reportes teóricos

**Bloque 2: Portafolio de servicios y modelo de precios**
Diseña el catálogo de servicios con estructura de precios:

Diagnóstico de madurez digital (proyecto cerrado 3.000-8.000€): evaluación de la situación actual de la planta en 5 dimensiones de Industria 4.0, con hoja de ruta priorizada de mejoras

Implementación de proyecto piloto (proyecto cerrado 15.000-50.000€): implementación de una tecnología específica (ej. sistema de monitorización de activos con IoT) en un área piloto con resultados medibles

Consultoría estratégica continua (retainer mensual 2.000-5.000€/mes): acompañamiento mensual al equipo de planta en la ejecución de la hoja de ruta digital, resolución de dudas y formación continua

Formación interna para equipos de planta: diseño e impartición de programas de formación en tecnologías específicas de Industria 4.0

**Bloque 3: Proceso de venta y captación de clientes en el sector industrial**
Define el sistema de desarrollo de negocio:
- Canales de captación: red de contactos en el sector, participación como ponente en ferias industriales (Hannover Messe, Advanced Factories, ferias sectoriales), LinkedIn como canal de posicionamiento de autoridad
- Contenido de posicionamiento: artículos técnicos en LinkedIn, casos de éxito anonimizados, webinars para directores de operaciones, newsletter técnica mensual
- Proceso de venta: primera reunión de diagnóstico gratuita (30 min) → propuesta de auditoría de bajo coste → proyecto completo
- Gestión del proceso de decisión largo: cómo mantener el contacto con prospectos de ciclos de 6-12 meses sin ser invasivo
- Red de prescriptores: integradores de sistemas, distribuidores de tecnología, fabricantes de maquinaria que pueden recomendar tus servicios a sus clientes

**Bloque 4: Metodología de entrega de proyectos**
Diseña el proceso de entrega profesional y replicable:
- Estructura del proyecto de consultoría de diagnóstico: fases, entregables, métodos de recogida de información en planta (entrevistas, observación, análisis de datos)
- Plantilla del informe de diagnóstico de madurez digital con puntuación por dimensión y hoja de ruta priorizada
- Gestión de la relación con el cliente durante el proyecto: reuniones de seguimiento, comunicación proactiva, gestión de expectativas
- Documentación de resultados: cómo medir y documentar el impacto del trabajo realizado para construir el portfolio de casos de éxito
- Proceso de cierre de proyecto y apertura de siguientes oportunidades: encuesta de satisfacción, solicitud de referencia y propuesta de continuidad

**Entregable:**
Proporciona la propuesta de consultoría tipo lista para personalizar, el informe de diagnóstico de madurez digital en formato estructurado y el plan de desarrollo de negocio a 12 meses con objetivos mensuales de pipeline, propuestas y cierres.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Negocio freelance de consultoría de transformación digital industrial con metodología propia',
                'vote_score'       => 39,
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
