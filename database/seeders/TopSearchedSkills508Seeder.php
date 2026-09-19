<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills508Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing logístico con IA: posiciona tu empresa de transporte',
                'description'      => 'Usa Claude para crear campañas de marketing diferenciadas para empresas de logística y transporte, destacando capacidades de IA, trazabilidad y eficiencia operativa.',
                'prompt_content'   => <<<'EOT'
Eres el responsable de marketing de una empresa de logística y transporte que acaba de implementar soluciones de inteligencia artificial para optimización de rutas, predicción de demanda y seguimiento en tiempo real. Tu objetivo es comunicar estas capacidades de forma clara y atractiva a potenciales clientes B2B.

instrucción principal:
Actúa como experto en marketing B2B del sector logístico. Voy a darte información sobre nuestra empresa y necesito que desarrolles una estrategia de contenidos completa que posicione nuestras capacidades de IA como ventaja competitiva frente a operadores tradicionales.

Datos de nuestra empresa:
- Operamos flotas de transporte de mercancías en España y Portugal
- Hemos implementado un sistema de optimización de rutas con IA que reduce costes un 18%
- Ofrecemos trazabilidad blockchain + IA en tiempo real
- Nuestro sistema predice demanda de envíos con 92% de precisión
- Gestionamos última milla con algoritmos inteligentes de asignación

tarea 1 — Propuesta de valor diferencial:
Redacta 3 propuestas de valor únicas (UVP) de máximo 2 frases cada una, enfocadas en: (a) reducción de costes operativos, (b) visibilidad total de la cadena de suministro, (c) experiencia del destinatario final. Usa datos cuantificables y lenguaje directo para directores de operaciones y supply chain.

tarea 2 — Calendario editorial mensual:
Crea un plan de contenidos de 4 semanas para LinkedIn y el blog corporativo. Para cada semana define: tema central, tipo de contenido (artículo, caso de uso, infografía, vídeo corto), ángulo de IA aplicada, llamada a la acción. Total: 12 piezas de contenido.

tarea 3 — Messaging para distintos buyer personas:
Desarrolla mensajes clave adaptados a estos tres perfiles:
(a) Director de Operaciones de empresa industrial: preocupado por costes y eficiencia
(b) Director de Compras de retail: focalizado en fiabilidad y lead times
(c) CEO de pyme exportadora: busca escalar sin perder control
Para cada perfil: pain point principal, mensaje central, proof point con dato, CTA específico.

tarea 4 — Email de prospección outbound:
Escribe un email en frío de 150-200 palabras dirigido a directores de supply chain de empresas industriales con más de 200 empleados. El asunto debe generar apertura (máximo 50 caracteres), el cuerpo debe conectar con un problema real, mencionar nuestra capacidad de IA de forma natural y terminar con una pregunta que invite a responder. Evita sonar a plantilla genérica.

tarea 5 — Argumentario para ferias y eventos:
Diseña un pitch de 90 segundos para usar en stands de ferias logísticas como SIL o Logistics Madrid. Estructura: gancho inicial con estadística impactante, problema que resolvemos, cómo lo hace nuestra IA, resultado concreto de un cliente, pregunta de calificación final.

Formato de entrega:
Organiza todo el output con encabezados claros por tarea. Usa bullet points donde sea útil. Incluye al final una sección de "palabras clave SEO" con 10 términos relevantes para posicionar la empresa en búsquedas de potenciales clientes logísticos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear estrategia de marketing B2B para empresa logística con IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistema de optimización de rutas logísticas con IA: arquitectura y código',
                'description'      => 'Diseña e implementa con Claude la arquitectura de un sistema de optimización de rutas para flotas de transporte usando algoritmos de IA, APIs de mapas y predicción de tráfico.',
                'prompt_content'   => <<<'EOT'
Eres un desarrollador senior especializado en sistemas de logística y optimización combinatoria. Necesitas diseñar e implementar un sistema de optimización de rutas para una flota de vehículos de reparto utilizando inteligencia artificial y algoritmos modernos de routing.

contexto del proyecto:
La empresa gestiona 50 vehículos de reparto en una ciudad de 500.000 habitantes. Cada día reciben entre 800 y 1.200 pedidos de entrega. El objetivo es minimizar la distancia total recorrida, respetar ventanas horarias de entrega, maximizar la utilización de capacidad de cada vehículo y reducir emisiones de CO2.

instrucción 1 — Diseño de arquitectura:
Diseña la arquitectura completa del sistema con los siguientes componentes: módulo de ingestión de pedidos (API REST), motor de optimización (qué algoritmo recomiendas y por qué entre: algoritmos genéticos, ant colony optimization, vehicle routing problem solvers como OR-Tools, reinforcement learning), módulo de actualización dinámica de rutas en tiempo real, integración con APIs de tráfico (Google Maps Platform o HERE), sistema de notificaciones a conductores y clientes. Incluye diagrama de componentes en texto (ASCII o Mermaid).

instrucción 2 — Implementación del núcleo de optimización:
Escribe el código Python del módulo principal usando Google OR-Tools para resolver el Vehicle Routing Problem with Time Windows (VRPTW). El código debe: (a) definir la estructura de datos para pedidos, vehículos y depósito, (b) configurar las restricciones de capacidad y ventanas horarias, (c) implementar la función de optimización con callback de progreso, (d) devolver las rutas ordenadas por vehículo con distancia total y tiempo estimado. Añade comentarios explicativos en cada sección relevante.

instrucción 3 — API REST con FastAPI:
Desarrolla el endpoint principal `/optimize-routes` en FastAPI que: reciba un JSON con lista de pedidos (coordenadas, peso, ventana horaria, prioridad), lista de vehículos (capacidad, posición inicial), ejecute la optimización de forma asíncrona con Celery, devuelva un job_id inmediatamente y permita consultar el resultado con `/routes/{job_id}`. Incluye validación con Pydantic y manejo de errores.

instrucción 4 — Actualización dinámica de rutas:
Diseña el sistema de re-optimización en tiempo real cuando ocurren eventos imprevistos: nuevo pedido urgente añadido a mitad de jornada, vehículo con avería que debe redistribuir sus pedidos, tráfico intenso detectado en un segmento de ruta. ¿Qué estrategia usarías? ¿Re-optimización completa o algoritmo de inserción local? Implementa la función de inserción dinámica de un nuevo pedido en rutas ya en curso.

instrucción 5 — Métricas y dashboard:
Define las métricas KPI del sistema (distancia total, pedidos por vehículo, tasa de entrega en ventana horaria, coste por pedido) y escribe las queries SQL para calcularlas desde una base de datos PostgreSQL con tabla de rutas completadas. Propón la estructura de tablas necesaria.

Entrega todo el código listo para usar, con instrucciones de instalación de dependencias y ejemplos de datos de prueba.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar sistema VRP con IA para optimización de flotas de reparto',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño UX para apps de tracking logístico con IA',
                'description'      => 'Usa Claude para diseñar la experiencia de usuario de una aplicación de seguimiento de envíos potenciada por IA, desde los flujos de navegación hasta los micro-momentos de comunicación proactiva.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI especializado en aplicaciones de logística y e-commerce. Tu cliente es una empresa de transporte que quiere lanzar una app móvil de tracking de envíos que use IA para anticipar incidencias, comunicar proactivamente al destinatario y diferenciarse de las apps de seguimiento genéricas.

objetivo del proyecto:
Diseñar una app móvil (iOS y Android) que transforme la experiencia de seguimiento de un paquete de algo pasivo (el usuario entra a ver dónde está) a algo proactivo y empático (la app avisa, predice y resuelve antes de que surja el problema).

tarea 1 — Investigación de usuario y pain points:
Desarrolla un mapa de empatía detallado para el usuario destinatario típico: persona que espera un paquete importante en casa o en la oficina. Identifica sus pensamientos, sentimientos, frustraciones y motivaciones en cada etapa del proceso: confirmación del pedido, tránsito, aviso de entrega, intento fallido de entrega, recogida en punto de conveniencia. Lista los 5 pain points críticos que la IA puede resolver.

tarea 2 — Flujos de usuario principales:
Define los user flows para estos 3 escenarios:
(a) Seguimiento en tiempo real con predicción de hora de llegada por IA (con margen de 30 minutos)
(b) Notificación proactiva de retraso detectado por IA antes de que el usuario lo note, con opciones de acción: reprogramar, desviar a punto de recogida, contactar con soporte
(c) Gestión de intento de entrega fallido con opciones inteligentes según el historial del usuario
Para cada flujo: lista los pasos, identifica los puntos de decisión y señala dónde entra la IA.

tarea 3 — Microcopy y tono de voz:
La app usa IA para predecir y comunicar. Escribe el microcopy para estas situaciones críticas:
- Notificación push: el paquete llegará entre las 14:30 y 15:00 (alta confianza de IA)
- Notificación push: detectamos posible retraso, actualizamos tu estimación
- Pantalla de estado: paquete en tránsito con probabilidad del 87% de entrega hoy
- Mensaje de error empático cuando el repartidor no pudo acceder al edificio
El tono debe ser claro, humano, nunca alarmista y transmitir que la empresa está en control de la situación.

tarea 4 — Componentes de diseño para estados de IA:
Describe los componentes visuales necesarios para representar la incertidumbre de las predicciones de IA sin confundir al usuario. ¿Cómo muestras visualmente que la hora de llegada es una predicción y no un dato exacto? ¿Cómo representas un nivel de confianza del 75% vs 95%? Propón un sistema de iconografía y colores para los diferentes estados del envío potenciado por IA.

tarea 5 — Accesibilidad y diseño inclusivo:
Lista los criterios de accesibilidad WCAG 2.1 nivel AA más relevantes para esta app de tracking. ¿Qué consideraciones especiales aplican cuando la app muestra predicciones de IA a usuarios con discapacidad visual o cognitiva? Propón adaptaciones específicas para el lector de pantalla en las pantallas de estado en tiempo real.

Organiza tu respuesta con los 5 entregables bien diferenciados. Incluye referencias a patrones de diseño existentes (Material Design, Human Interface Guidelines) donde sean aplicables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar app de tracking logístico con UX proactiva potenciada por IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2B de soluciones logísticas con IA: argumentario y objeciones',
                'description'      => 'Construye con Claude un argumentario de ventas completo para comercializar plataformas de logística inteligente, superando objeciones técnicas y de precio en ciclos de venta complejos.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial con 10 años de experiencia vendiendo software y soluciones tecnológicas a empresas industriales y de distribución. Ahora representas una plataforma de logística inteligente con IA y necesitas entrenar a tu equipo de ventas para cerrar contratos con grandes cuentas.

contexto de ventas:
El producto es una plataforma SaaS de gestión logística con IA que incluye: optimización de rutas, predicción de demanda, gestión de almacén inteligente y trazabilidad en tiempo real. El precio oscila entre 2.000 y 15.000 euros/mes según el tamaño de la flota. El ciclo de venta típico dura entre 3 y 9 meses e involucra a Operaciones, IT, Compras y Dirección General.

instrucción 1 — Mapa de stakeholders y mensajes por rol:
Para cada uno de estos perfiles internos en la empresa cliente, desarrolla: su principal preocupación en la decisión de compra, el argumento central que resuena con él y la prueba de valor más convincente.
Perfiles: Director de Operaciones, CTO/Director IT, Director de Compras, CFO, CEO.

instrucción 2 — Manejo de las 8 objeciones más frecuentes:
Para cada objeción, escribe la respuesta ideal siguiendo la estructura: valida la objeción → reformula → responde con dato o ejemplo → pregunta de avance.
Objeciones: (1) "Es muy caro para lo que ofrece", (2) "Ya tenemos un TMS y funciona bien", (3) "La IA es una caja negra, no me fío", (4) "Nuestros conductores no van a adaptarse", (5) "Necesitamos integración con nuestro ERP SAP", (6) "¿Qué pasa con la seguridad de nuestros datos de rutas?", (7) "Necesitamos referencias en nuestro sector", (8) "Ahora no es el momento, quizás el año que viene".

instrucción 3 — Propuesta económica que justifica el ROI:
Diseña una plantilla de cálculo de ROI para presentar al CFO. Incluye: (a) inputs del cliente (número de vehículos, coste por km, pedidos diarios, tasa de incidencias), (b) ahorros calculados con nuestra plataforma (reducción de km, menos incidencias, ahorro en combustible, reducción de horas extras), (c) payback period estimado, (d) coste de no hacer nada en 12 meses. El cálculo debe ser conservador y auditeable.

instrucción 4 — Email de seguimiento post-demo:
Escribe un email de seguimiento para enviar 24 horas después de una demo. El email debe: resumir los 3 puntos de dolor específicos que mencionó el cliente, conectarlos con las funcionalidades que vio en la demo, incluir un caso de éxito relevante (inventado pero realista), proponer un siguiente paso concreto (llamada con el equipo técnico, prueba piloto de 30 días, visita a cliente de referencia).

instrucción 5 — Plan de cierre para los últimos 30 días del ciclo:
Diseña un plan de actividades para las últimas 4 semanas antes del cierre esperado de un contrato de 80.000 euros anuales. ¿A quién contactar, cuándo, con qué mensaje? ¿Qué incentivos o urgencias pueden acelerar la decisión sin hacer descuentos que deprecien el producto?

Entrega todo estructurado como un manual de ventas usable directamente por el equipo comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Entrenar equipo comercial para vender plataformas logísticas con IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para plataformas logísticas inteligentes',
                'description'      => 'Aplica frameworks de product management con Claude para priorizar el roadmap de una plataforma logística con IA, desde la definición de OKRs hasta la gestión de deuda técnica vs nuevas funcionalidades.',
                'prompt_content'   => <<<'EOT'
Eres el Head of Product de una startup de logtech que ha desarrollado una plataforma de gestión logística con IA. La empresa tiene 3 años, 45 clientes B2B, un equipo de 8 desarrolladores y acaba de cerrar una ronda Serie A de 4 millones de euros. El board exige crecer de 45 a 120 clientes en 18 meses sin sacrificar la retención actual (NRR 108%).

objetivo de este ejercicio:
Usar Claude como sparring de product management para estructurar las decisiones estratégicas más críticas del próximo trimestre.

tarea 1 — OKRs del trimestre:
Define los OKRs para el equipo de producto para el Q4 del año en curso. El contexto: el principal competidor acaba de lanzar una funcionalidad de predicción de demanda que nuestros clientes están preguntando; tenemos deuda técnica importante en el módulo de integraciones con ERPs (causa el 40% de los tickets de soporte); hay 3 grandes cuentas en pipeline que requieren una funcionalidad de gestión de almacén que no tenemos. Propón 2-3 objectives con 3-4 key results cada uno, medibles y accionables.

tarea 2 — Framework de priorización del roadmap:
Ayúdame a priorizar estas 6 iniciativas usando RICE scoring (Reach, Impact, Confidence, Effort). Para cada iniciativa estima los valores de cada dimensión y justifica el score:
(a) Módulo de predicción de demanda (respuesta competitiva)
(b) Refactoring del sistema de integraciones ERP (deuda técnica)
(c) Funcionalidad básica de gestión de almacén (unlock grandes cuentas)
(d) App móvil para conductores v2 con tracking mejorado (retención clientes actuales)
(e) Dashboard de sostenibilidad y huella de carbono (tendencia de mercado)
(f) API pública para integraciones de terceros (ecosistema y partnerships)

tarea 3 — Discovery de la funcionalidad de almacén:
Diseña el plan de discovery para validar la funcionalidad de gestión de almacén antes de comprometer 3 sprints de desarrollo. ¿Con quién hablarías y qué preguntas harías? ¿Qué prototipo mínimo usarías para testear el concepto? ¿Qué métricas de éxito definen si vale la pena construirlo? ¿Cuál es el riesgo de no hacerlo?

tarea 4 — Comunicación al board sobre el roadmap:
Redacta el mensaje ejecutivo (máximo 1 página) para presentar al board la decisión de priorizar la deuda técnica de integraciones sobre la funcionalidad de predicción de demanda que pide el mercado. Argumenta la decisión con impacto en métricas de negocio (tiempo de onboarding, tickets de soporte, NPS), riesgo técnico y trade-offs asumidos.

tarea 5 — Métricas de producto por segmento:
Define el North Star Metric para la plataforma y las métricas de nivel 2 por tipo de cliente: (a) medianas empresas de distribución, (b) grandes operadores logísticos 3PL, (c) empresas industriales con logística interna. ¿Por qué difieren y cómo afecta esto al diseño del producto?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Priorizar roadmap y OKRs de plataforma logística con IA en escala',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento en empresas de transporte y logística con IA',
                'description'      => 'Usa Claude para diseñar políticas de RRHH adaptadas al sector logístico, donde la automatización con IA redefine los roles de conductores, almacenistas y coordinadores de operaciones.',
                'prompt_content'   => <<<'EOT'
Eres directora de Recursos Humanos de una empresa de transporte y logística con 280 empleados: 120 conductores, 80 operarios de almacén, 40 coordinadores de operaciones y 40 en funciones de soporte y administración. La empresa está implementando IA para optimización de rutas, robots de almacén colaborativos (cobots) y sistemas de planificación automática. Esto genera incertidumbre entre la plantilla y plantea retos de reskilling importantes.

instrucción 1 — Diagnóstico de impacto de la IA por rol:
Analiza el impacto de la automatización con IA en cada uno de los 4 colectivos de la empresa. Para cada uno indica: (a) tareas que se automatizan total o parcialmente, (b) nuevas competencias requeridas, (c) nivel de ansiedad esperado ante el cambio, (d) oportunidades de upskilling. Sé realista: algunos roles cambiarán profundamente, no lo minimices, pero tampoco lo catastrofices.

instrucción 2 — Plan de comunicación del cambio:
La dirección va a anunciar en 3 semanas la implementación de sistemas de IA que afectan directamente a los conductores (app de rutas optimizadas con seguimiento) y almacenistas (cobots en el área de picking). Diseña el plan de comunicación interna: (a) mensajes clave por colectivo, (b) canales y momentos de comunicación (reuniones, intranet, comunicados físicos en vestuarios), (c) cómo manejar las preguntas difíciles sobre despidos, (d) rol de los mandos intermedios como embajadores del cambio.

instrucción 3 — Programa de reskilling para conductores:
Los conductores pasarán de planificar sus propias rutas a ejecutar rutas optimizadas por IA y gestionar la interacción con el sistema de tracking en tiempo real. Diseña un programa de formación de 3 meses que incluya: contenidos (uso de la app, interpretación de rutas optimizadas, gestión de excepciones), formato (talleres presenciales, microlearning móvil, mentoring entre pares), métricas de éxito del programa y cómo mantener la motivación de conductores con más de 15 años de experiencia que pueden sentirse cuestionados.

instrucción 4 — Gestión del desempeño en el nuevo contexto:
Con IA monitorizando rutas, tiempos de entrega y comportamiento de conducción, ¿cómo rediseñas el sistema de evaluación del desempeño de los conductores? Define: (a) qué datos de la IA pueden usarse en la evaluación y cuáles no (privacidad, convenio colectivo), (b) cómo equilibras métricas cuantitativas de la IA con la valoración cualitativa del mando, (c) sistema de incentivos que use los datos de IA de forma motivadora y no punitiva.

instrucción 5 — Política de uso ético de la IA con la plantilla:
Redacta los principios de una política de uso ético de la IA aplicada a la gestión de personas en esta empresa. Cubre: transparencia con los empleados sobre qué datos recoge la IA, limitaciones al uso de datos de IA en decisiones de despido o sanción, derecho del empleado a explicación de decisiones automatizadas, y mecanismos de reclamación. Inspírate en el AI Act europeo y el RGPD.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar plan de reskilling y cambio cultural en empresa logística con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de flotas y operaciones logísticas con IA',
                'description'      => 'Utiliza Claude para modelizar los costes de una flota de transporte, calcular el ROI de implementar IA logística y construir el business case para la dirección financiera.',
                'prompt_content'   => <<<'EOT'
Eres el CFO de una empresa de transporte terrestre de mercancías con una flota de 65 vehículos (40 camiones de reparto y 25 furgonetas). La empresa factura 8,2 millones de euros anuales. El director de operaciones te propone invertir en una plataforma de IA logística con un coste de implementación de 120.000 euros y una licencia anual de 48.000 euros. Tu trabajo es construir el modelo financiero que justifique o rechace la inversión.

tarea 1 — Modelo de costes actual de la flota:
Construye un modelo de costes detallado de la flota actual. Categorías a incluir: combustible (estimado en 28% de costes variables), mantenimiento y neumáticos, seguros, amortización de vehículos, coste de conductores (salario, SS, formación, horas extra), costes de incidencias (retrasos, re-entregas, reclamaciones de clientes), costes de coordinación y planificación manual de rutas. Usa datos representativos del sector transporte español e indica las fuentes o benchmarks que usas.

tarea 2 — Cálculo de ahorros proyectados con IA:
El proveedor de IA afirma que su plataforma puede generar estos ahorros: reducción del 15% en kilómetros recorridos, reducción del 20% en incidencias de entrega, reducción del 8% en mantenimiento preventivo gracias al análisis predictivo, ahorro del 25% en horas de coordinación de rutas. Aplica estos porcentajes a tu modelo de costes del punto anterior con un enfoque conservador (aplica un factor de descuento del 30% a las proyecciones del proveedor) y calcula el ahorro anual neto esperado.

tarea 3 — Business case completo con VAN, TIR y payback:
Con la inversión inicial (120.000 euros), el coste anual (48.000 euros) y los ahorros proyectados del punto anterior, construye el business case a 5 años. Calcula: (a) flujo de caja incremental año a año, (b) Valor Actual Neto usando una tasa de descuento del 10%, (c) Tasa Interna de Retorno, (d) periodo de payback (en meses). Presenta los resultados en una tabla clara y comenta si la inversión es recomendable.

tarea 4 — Análisis de sensibilidad:
Los ahorros reales dependen de cuánto se implemente bien el sistema. Construye un análisis de sensibilidad con 3 escenarios: (a) optimista: se materializa el 100% de los ahorros proyectados por el proveedor, (b) base: se materializa el 70% (tu hipótesis de trabajo), (c) pesimista: solo se logra el 40% de los ahorros. ¿En qué escenario la inversión deja de ser rentable? ¿Qué KPIs operativos debes monitorizar mensualmente para detectar si estás en el escenario pesimista?

tarea 5 — Presentación ejecutiva de la decisión de inversión:
Redacta el resumen ejecutivo de 1 página para presentar al consejo de administración. Debe incluir: la oportunidad y el riesgo de no actuar, la inversión requerida, el retorno esperado en el escenario base, los riesgos principales de la inversión y las salvaguardas propuestas, y la recomendación final con las condiciones que la sustentan (p.ej., piloto en 10 vehículos antes de extender al 100% de la flota).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelizar ROI e inversión en IA logística para presentar al consejo',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance legal en logística internacional con IA',
                'description'      => 'Usa Claude para navegar el marco regulatorio de la logística internacional, desde normativas aduaneras hasta responsabilidad en contratos de transporte automatizados con IA.',
                'prompt_content'   => <<<'EOT'
Eres abogado especialista en derecho del transporte y comercio internacional. Tu cliente es una empresa de logística que opera en España, Francia, Alemania y Portugal, con envíos frecuentes a Marruecos y México. Acaban de implementar sistemas de IA para automatizar la gestión de documentación aduanera, clasificación de mercancías y planificación de rutas internacionales.

instrucción 1 — Marco regulatorio del transporte internacional con IA:
Analiza las principales normativas que afectan al uso de IA en operaciones de logística internacional. Cubre: (a) Reglamento de IA de la UE (AI Act) y cómo clasifica los sistemas de IA logística, (b) normativas de transporte terrestre internacional (CMR para Europa), (c) regulación aduanera de la UE y el papel de los sistemas automatizados de clasificación arancelaria, (d) normativa de protección de datos (RGPD) aplicada al tracking de vehículos y conductores, (e) regulaciones específicas para operaciones con Marruecos y México.

instrucción 2 — Responsabilidad contractual cuando la IA comete errores:
Uno de los sistemas de IA clasifica erróneamente una mercancía, lo que genera una retención aduanera de 5 días y pérdidas para el cliente de 40.000 euros. Analiza: (a) ¿quién es responsable: la empresa logística, el proveedor del software de IA o el cliente que validó la clasificación?, (b) ¿cómo debe estar redactada la cláusula de limitación de responsabilidad en el contrato con el cliente?, (c) ¿qué cobertura de seguro necesita la empresa para cubrir errores de IA en operaciones aduaneras?, (d) ¿qué obligaciones de documentación y trazabilidad debe mantener la empresa para defenderse en un litigio?

instrucción 3 — Redacción de cláusulas contractuales para logística con IA:
Redacta las cláusulas contractuales que debe incluir el contrato de servicios logísticos para cubrir el uso de IA. Incluye cláusulas sobre: (a) alcance del servicio automatizado con IA y sus limitaciones, (b) responsabilidad por errores del sistema de IA, (c) obligaciones de supervisión humana, (d) protección y uso de datos del cliente procesados por la IA, (e) derecho a auditar el sistema de IA, (f) protocolo de incidencias y escalado. Usa lenguaje jurídico apropiado pero comprensible.

instrucción 4 — Due diligence del proveedor de IA:
La empresa está evaluando tres proveedores de IA para automatizar la documentación aduanera. Diseña el cuestionario de due diligence legal que debe responder cada proveedor, cubriendo: certificaciones y cumplimiento regulatorio, localización de datos y subprocesadores, política de errores y responsabilidad, conformidad con el AI Act, acuerdos de nivel de servicio con penalizaciones, y condiciones de portabilidad de datos en caso de cambio de proveedor.

instrucción 5 — Guía de cumplimiento para el equipo operativo:
Redacta una guía práctica de cumplimiento (máximo 2 páginas) para los coordinadores logísticos que usan el sistema de IA diariamente. ¿Qué deben verificar antes de confirmar una clasificación aduanera generada por IA? ¿Cuándo deben escalar a un agente aduanero humano? ¿Cómo documentan su revisión para cumplir con los requisitos de supervisión humana del AI Act?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el marco legal y contractual del uso de IA en logística internacional',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente para empresas de logística con IA conversacional',
                'description'      => 'Diseña con Claude un sistema de atención al cliente inteligente para empresas de transporte, que gestione tracking, reclamaciones y reprogramaciones con IA conversacional integrada en los canales de soporte.',
                'prompt_content'   => <<<'EOT'
Eres el responsable de Customer Success de una empresa de logística que gestiona 2.000 envíos diarios. El equipo de atención al cliente recibe 350 contactos al día: 45% consultas de tracking, 30% reclamaciones por retrasos o daños, 15% solicitudes de reprogramación de entrega, y 10% otros. Quieres implementar IA conversacional para resolver automáticamente el 60% de los contactos y mejorar la experiencia del cliente en los casos que requieren atención humana.

tarea 1 — Diseño del sistema de IA conversacional:
Define la arquitectura del sistema de atención al cliente con IA. ¿Qué canales cubrirá (WhatsApp Business, chat web, email automático, IVR telefónico)? ¿Cómo se integra con el sistema de tracking interno? ¿Qué información del envío y del historial del cliente consulta en tiempo real? ¿Cuál es el protocolo de escalado al agente humano y cómo se transfiere el contexto? Diseña el árbol de decisión para los 3 tipos de contacto más frecuentes.

tarea 2 — Scripts y respuestas para los flujos de IA:
Escribe los guiones de conversación en español para estos 4 escenarios:
(a) Cliente pregunta "¿dónde está mi paquete?" con número de seguimiento → el sistema consulta en tiempo real y da el estado actual con predicción de entrega
(b) Cliente informa que el paquete llegó dañado → el sistema recoge la información, abre el expediente de reclamación y explica los pasos siguientes
(c) Cliente quiere cambiar la dirección de entrega → el sistema verifica si el paquete está aún en tránsito y gestiona el cambio o explica por qué no es posible
(d) Cliente lleva 10 días sin noticias de su envío → el sistema detecta la situación como crítica, pide disculpas de forma genuina y escala de inmediato a un agente con contexto completo
Los diálogos deben sonar naturales, no robotizados, y reflejar empatía en los momentos de crisis.

tarea 3 — Métricas y KPIs del sistema de IA en CS:
Define el cuadro de mando para medir el rendimiento del sistema de IA en atención al cliente. Incluye: tasa de contención (porcentaje resuelto sin humano), CSAT por canal (IA vs agente), tiempo medio de resolución comparado con el sistema anterior, tasa de escalado innecesario (IA que escala casos que podría resolver), y NPS diferencial entre clientes que interactuaron solo con IA vs con agente humano. ¿Con qué frecuencia revisarías estas métricas y qué umbrales activarían una revisión del sistema?

tarea 4 — Gestión de reclamaciones con IA y cumplimiento normativo:
Las reclamaciones por pérdida o daño tienen plazos legales según el CMR (Convenio de Transporte Internacional) y la normativa española. ¿Cómo garantiza el sistema de IA que: (a) informa al cliente de sus derechos y plazos correctamente, (b) recoge toda la documentación necesaria para la reclamación (fotos de daños, albarán, factura), (c) cumple los plazos de respuesta legales, (d) no hace reconocimientos de culpabilidad implícitos en las respuestas automáticas? Redacta un protocolo de reclamaciones con IA conforme a la normativa.

tarea 5 — Formación del equipo humano para trabajar con IA:
Con el 60% de los contactos resueltos por IA, los agentes humanos gestionarán los casos más complejos y emocionalmente exigentes. Diseña el programa de formación para el equipo de CS que incluya: cómo revisar y entender el contexto que les transfiere la IA, cómo gestionar clientes que ya interactuaron con la IA y están frustrados, habilidades de resolución de conflictos avanzadas para los casos más difíciles, y cómo retroalimentar al sistema de IA con los errores o lagunas que detecten en su trabajo diario.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar IA conversacional en atención al cliente de empresa logística',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de transformación digital logística con IA',
                'description'      => 'Usa Claude para estructurar tu oferta de consultoría freelance en digitalización e IA logística, desde el diagnóstico inicial hasta la entrega de proyectos de optimización de operaciones.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en transformación digital de empresas de transporte y logística, con background como director de operaciones durante 8 años. Ahora ofreces tus servicios como independiente y quieres usar la IA como palanca para diferenciarte, entregar más valor y escalar tu práctica de consultoría.

instrucción 1 — Diseño de tu oferta de servicios:
Diseña un catálogo de 4-5 servicios de consultoría bien definidos para el mercado logístico español. Para cada servicio incluye: nombre comercial, descripción para el cliente en términos de resultado (no de actividades), duración típica del proyecto, precio orientativo o modelo de tarificación, perfil de cliente ideal y entregables concretos. Los servicios deben cubrir desde diagnóstico rápido hasta proyectos de implementación más largos, creando una escalera de valor.

instrucción 2 — Metodología de diagnóstico logístico con IA:
Diseña la metodología de diagnóstico que usas en tus proyectos. El diagnóstico debe ser ejecutable en 5 días de trabajo e identificar las 3-5 oportunidades de mejora con mayor ROI potencial para el cliente. Incluye: (a) lista de preguntas clave para la fase de entrevistas con dirección y operaciones, (b) datos que solicitas al cliente y cómo los analizas con IA, (c) cómo priorizas las oportunidades de mejora (impacto vs esfuerzo), (d) estructura del informe de diagnóstico entregable. ¿Cómo usas Claude en cada fase del diagnóstico?

instrucción 3 — Propuesta comercial tipo:
Redacta una propuesta comercial completa para un proyecto de 3 meses de consultoría de optimización logística con IA para una empresa de distribución con 30 vehículos. Estructura: resumen ejecutivo, diagnóstico de la situación actual del cliente (con datos ficticios pero realistas), objetivos y alcance del proyecto, metodología de trabajo, equipo y dedicación, entregables del proyecto, cronograma de hitos, inversión y condiciones de pago, referencias y credenciales. El presupuesto debe estar justificado y reflejar el valor entregado, no las horas trabajadas.

instrucción 4 — Herramientas de IA para tu práctica de consultoría:
Diseña tu stack de herramientas de IA para ser más eficiente en tu trabajo de consultor. Para cada fase del proyecto (diagnóstico, análisis, diseño de soluciones, presentación, seguimiento), indica: qué herramienta de IA usas, cómo la usas, qué tiempo te ahorras y qué calidad adicional aportas al cliente. Incluye uso de Claude para análisis de datos operativos del cliente, generación de informes y preparación de talleres. ¿Cómo comunicas al cliente que usas IA en tu trabajo?

instrucción 5 — Estrategia de captación de clientes y posicionamiento:
Diseña la estrategia para conseguir los primeros 5 clientes de consultoría logística con IA en los próximos 6 meses. Incluye: perfil exacto del cliente ideal (sector, tamaño, síntomas que indican que te necesitan), canales de captación más efectivos para este perfil (LinkedIn, asociaciones sectoriales, partners tecnológicos, eventos), contenido que publicarías para demostrar expertise y atraer inbound, cómo usar un primer proyecto a precio reducido para conseguir testimonios y referencias, y métricas para saber si tu estrategia de captación está funcionando.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estructurar oferta y captación de clientes para consultoría logística freelance',
                'vote_score'       => 34,
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
