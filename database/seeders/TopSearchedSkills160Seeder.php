<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills160Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing industrial B2B para manufactura',
                'description'       => 'Genera demanda para productos industriales: ferias sectoriales, catálogos técnicos y los canales que llegan a ingenieros y compradores de planta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing B2B especializado en el sector industrial y manufacturero con más de quince años de experiencia generando demanda para empresas que venden maquinaria, componentes y soluciones técnicas a otras empresas.

Voy a darte el contexto de mi empresa y necesito que me ayudes a construir una estrategia de marketing industrial completa y accionable.

**CONTEXTO DE MI EMPRESA**
Nombre o tipo de empresa: [describe brevemente tu empresa, productos y tamaño]
Producto o solución que vendemos: [especifica el producto, tecnología o servicio]
Mercado objetivo: [sector industrial, tamaño de empresas cliente, geografía]
Ticket medio y ciclo de venta estimado: [precio aproximado y duración del proceso de compra]
Canales actuales que ya usamos: [ferias, web, comerciales directos, distribuidores, etc.]
Principal reto de marketing ahora mismo: [describe el problema concreto]

**LO QUE NECESITO**

1. **Análisis del buyer committee industrial**
Identifica los perfiles que intervienen en la decisión de compra (director de producción, jefe de mantenimiento, director de compras, CFO, ingeniero de proceso) y describe qué le preocupa a cada uno, en qué fase del proceso interviene y qué argumentos resuenan con cada perfil.

2. **Estrategia de contenido técnico**
Diseña un plan de contenidos para los próximos tres meses que incluya: artículos técnicos para el blog, casos de éxito con métricas concretas (OEE, tiempo de parada, ahorro energético), vídeos de producto en entorno real de planta, y especificaciones técnicas descargables. Para cada tipo de contenido indica el objetivo, el formato, el canal de distribución y el perfil al que se dirige.

3. **Estrategia para ferias industriales**
Dame un plan para sacar el máximo partido a la próxima feria sectorial: pre-feria (convocatoria de reuniones, materiales), durante la feria (argumentario, captura de leads, demo en stand) y post-feria (secuencia de seguimiento en los siete días siguientes). Incluye una plantilla de email de seguimiento post-feria.

4. **LinkedIn y canales digitales B2B industriales**
Explica cómo usar LinkedIn para llegar a los ingenieros y responsables de producción que no abren cold emails: tipos de contenido que funcionan en este segmento, estrategia de Social Selling para el equipo comercial, y cómo amplificar los casos de éxito técnicos.

5. **Catálogo técnico que vende**
Dame una estructura para el catálogo técnico que funcione tanto en papel (feria) como en PDF descargable (web): qué información poner en cada página, cómo presentar las especificaciones técnicas de forma que el ingeniero las entienda de un vistazo, y qué métricas de negocio incluir para que el comprador pueda justificar la inversión internamente.

6. **Métricas e indicadores clave**
¿Qué KPIs debo medir en marketing industrial para demostrar el impacto en el pipeline comercial? Incluye tanto métricas digitales (tráfico orgánico técnico, descargas de fichas técnicas, solicitudes de demo) como métricas de negocio (leads cualificados generados, contribución al pipeline, coste por lead industrial).

7. **Plan de acción para los próximos 30 días**
Cierra con una lista priorizada de acciones concretas que pueda empezar esta semana, ordenadas por impacto estimado y esfuerzo requerido.

Sé específico, usa ejemplos del sector industrial cuando sea posible, y adapta las recomendaciones al contexto que te he dado. Evita los consejos genéricos de marketing digital que no funcionan cuando el cliente es un director de planta con treinta años de experiencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de marketing B2B para empresas industriales que necesitan llegar a compradores técnicos y comités de compra en manufactura.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'IoT e industria 4.0: conecta máquinas y sensores',
                'description'       => 'Diseña arquitecturas para conectar máquinas, sensores y sistemas de planta usando protocolos MQTT, OPC-UA y arquitecturas edge-cloud.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de soluciones especializado en IoT industrial e Industria 4.0 con experiencia en proyectos de digitalización de planta en sectores como automoción, alimentación, química y metal-mecánica.

Necesito tu ayuda para diseñar e implementar un proyecto de conectividad industrial. Dime lo que necesitas saber y luego dame el plan completo.

**CONTEXTO DEL PROYECTO**
Tipo de planta o instalación: [describe el entorno industrial]
Máquinas o activos a conectar: [tipos de máquinas, PLCs, sensores existentes]
Objetivo principal del proyecto: [monitorización, mantenimiento predictivo, OEE, control de calidad, trazabilidad, etc.]
Infraestructura existente: [red OT, sistemas SCADA o MES actuales, conectividad a internet en planta]
Restricciones: [presupuesto estimado, plazo, requisitos de seguridad, equipo disponible]

**LO QUE NECESITO**

1. **Elección de protocolo de comunicación**
Compara MQTT, OPC-UA, Modbus TCP, PROFINET y otros protocolos relevantes para mi caso de uso. Explica cuándo usar cada uno, cómo combinarlos en una arquitectura híbrida y qué pasarelas (gateways) industriales son las más usadas para bridgear protocolos legacy con arquitecturas modernas.

2. **Arquitectura edge-cloud para el caso de uso**
Diseña la arquitectura completa: desde el sensor hasta el dashboard. Incluye la capa de adquisición en planta (PLCs, gateways edge), el procesamiento en el edge (qué lógica va al edge, por qué), la comunicación hacia la nube, la elección de plataforma cloud (AWS IoT, Azure IoT Hub, Google Cloud IoT, plataformas industriales como Siemens MindSphere o Rockwell FactoryTalk) y la capa de visualización y analítica.

3. **Seguridad en redes OT/IT**
Explica los principios de seguridad en entornos industriales: segmentación de red OT/IT, zonas Purdue, autenticación de dispositivos, cifrado en tránsito y en reposo, y los vectores de ataque más comunes en plantas industriales. Dame una checklist de seguridad para el proyecto.

4. **Implementación paso a paso**
Dame un plan de implementación por fases: prueba de concepto con dos o tres máquinas, piloto en una línea de producción, despliegue completo. Para cada fase indica duración estimada, entregables, criterios de éxito y riesgos principales.

5. **Código y configuración de referencia**
Proporciona ejemplos de código o configuración para: un cliente MQTT en Python que lea datos de un PLC y los publique en un broker, una configuración básica de OPC-UA con Node-RED, y una función Lambda o Azure Function que procese los mensajes y los almacene.

6. **KPIs y casos de uso de mayor ROI**
¿Qué proyectos de IoT industrial generan el mayor retorno? Dame los cinco casos de uso más comunes con el ROI típico que alcanzan (reducción de paradas, mejora del OEE, ahorro energético, reducción de rechazos de calidad) y los indicadores que hay que medir antes y después del proyecto para demostrar el valor.

7. **Gestión del cambio en planta**
El mayor obstáculo suele ser el operario y el técnico de mantenimiento, no la tecnología. Dame estrategias concretas para conseguir la adopción del sistema por parte del personal de planta.

Sé técnico y específico. Si necesitas más contexto sobre mi caso, pregúntame antes de responder.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño de arquitecturas IoT industriales para digitalización de planta en proyectos de Industria 4.0.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX para entornos industriales y HMI con guantes',
                'description'       => 'Diseña interfaces para operarios de planta, pantallas táctiles de maquinaria y HMI que funcionan con guantes y en condiciones adversas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de UX especializado en interfaces industriales (HMI — Human Machine Interfaces) con experiencia en proyectos para entornos de planta, donde los usuarios llevan guantes, hay ruido, vibración, iluminación deficiente y el margen de error es crítico.

Voy a darte el contexto de la interfaz que necesito diseñar y quiero que me ayudes a hacerlo correctamente.

**CONTEXTO DEL PROYECTO**
Tipo de interfaz a diseñar: [panel de control de máquina, aplicación de tablet para operario, sistema SCADA en pantalla grande, app móvil para técnico de mantenimiento, etc.]
Entorno de uso: [descripción del entorno: ruido, suciedad, iluminación, temperatura, si se usan guantes, etc.]
Usuarios finales: [perfil del operario: edad aproximada, nivel tecnológico, idioma, turnicidad]
Tareas críticas que debe soportar la interfaz: [lista las 3-5 tareas más importantes que el operario realiza]
Restricciones técnicas: [tamaño de pantalla, sistema operativo, hardware existente, conectividad]
Normativas relevantes: [ISO 11064, IEC 62264, normativas de seguridad funcional aplicables]

**LO QUE NECESITO**

1. **Principios de diseño para entornos industriales**
Explica los principios fundamentales que diferencian el UX industrial del UX de consumo: tamaño mínimo de targets táctiles para uso con guantes (mín. 20mm según ISO), jerarquía visual para pantallas con polvo o reflejos, uso del color en HMI (convenciones ISA 101, semáforo de alarmas), y tipografía legible en condiciones adversas.

2. **Análisis de tareas y flujos críticos**
Para las tareas que me has dado, diseña los flujos de usuario: el menor número posible de pasos, confirmaciones explícitas para acciones irreversibles (arranque, parada de emergencia, cambio de receta), y manejo de errores que el operario pueda entender sin leer un manual.

3. **Sistema de alarmas y alertas**
El diseño de alarmas es el área más crítica en los HMI industriales. Dame las directrices para un sistema de alarmas correcto: priorización (crítica, alta, media, baja), presentación visual y sonora, reconocimiento de alarmas, y los errores de diseño más comunes que llevan a la fatiga de alarmas.

4. **Wireframes de las pantallas principales**
Describe (con detalle suficiente para implementar) la estructura de las pantallas principales: pantalla de estado general, pantalla de operación de la máquina, pantalla de alarmas activas y pantalla de histórico. Indica la posición de cada elemento, el tamaño y el color.

5. **Accesibilidad y ergonomía física**
Considera la posición física del operario frente a la pantalla: altura de montaje del panel, ángulo de visión, distancia de lectura. Dame recomendaciones de ergonomía física para la instalación del hardware.

6. **Testing con usuarios en entorno real**
¿Cómo hago pruebas de usabilidad en una planta industrial? Dame un protocolo de testing adaptado: cómo reclutar operarios, cómo realizar pruebas sin detener la producción, qué métricas medir (tiempo en tarea, tasa de error, satisfacción) y cómo incorporar el feedback.

7. **Entregables del diseñador UX industrial**
¿Qué documentos debe entregar un diseñador UX en un proyecto de HMI? Lista los entregables con una descripción breve de cada uno.

Sé muy específico con medidas, convenciones y estándares. El error en un HMI industrial tiene consecuencias reales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño de interfaces HMI y paneles de control para entornos industriales con operarios que trabajan con guantes y en condiciones adversas.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas de maquinaria y soluciones industriales',
                'description'       => 'Domina el ciclo de venta largo industrial: demostraciones en planta, negociación técnica y comités de compra de ingeniería y producción.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con veinte años de experiencia vendiendo maquinaria industrial, automatización y soluciones técnicas a empresas manufactureras. Conoces a fondo el ciclo de venta largo, los comités de compra con múltiples interlocutores y la negociación técnica.

Dame ayuda para gestionar la siguiente situación de ventas industriales.

**CONTEXTO DE LA OPORTUNIDAD**
Producto o solución que vendo: [describe la maquinaria, equipamiento o solución técnica]
Cliente objetivo: [sector, tamaño de empresa, país]
Interlocutores identificados hasta ahora: [perfiles de los contactos con los que ya hablo]
Fase del proceso de venta: [primer contacto / visita de diagnóstico / propuesta técnica / negociación / cierre]
Principal obstáculo o reto actual: [describe el problema o bloqueo específico]
Ticket estimado y presupuesto del cliente: [si lo conoces]
Plazo de decisión del cliente: [si lo sabes]

**LO QUE NECESITO**

1. **Mapeo del comité de compra**
Ayúdame a identificar todos los perfiles que van a intervenir en la decisión: el usuario técnico (director de producción, ingeniero de proceso, jefe de mantenimiento), el comprador (dirección de compras), el financiero (CFO, controller), el decisor final (gerente, CEO en pymes) y los posibles bloqueadores. Para cada perfil: qué le preocupa, qué argumento le convence y cómo ganar su apoyo.

2. **Estrategia de acceso y cualificación**
Si aún no tengo acceso a todos los perfiles, dame un plan para conseguirlo sin quemar al contacto que ya tengo. ¿Cómo pido que me presenten al director de producción cuando solo hablo con compras? ¿Cómo cualificó la oportunidad antes de invertir tiempo?

3. **Preparación de la visita a planta**
La demostración en planta es el momento clave en ventas industriales. Dame un checklist de preparación: qué preguntas hacer antes de la visita, qué materiales llevar, cómo estructurar las dos horas en planta y cómo asegurar que el cliente ve su problema reflejado en mi solución.

4. **Propuesta técnico-económica que gana**
¿Cómo estructuro la propuesta para que el cliente pueda defenderla internamente? Dame la estructura ideal: resumen ejecutivo para el gerente, argumentación técnica para el ingeniero, análisis de ROI para el financiero. Incluye los elementos que no pueden faltar y los errores más comunes en propuestas industriales.

5. **Negociación técnica y de precio**
El cliente siempre pide descuento. Dame un argumentario de negociación: cómo defender el precio con el coste total de propiedad (TCO), cómo manejar la comparación con competidores más baratos, y qué concesiones puedo ofrecer sin destruir el margen (plazos de pago, garantías extendidas, formación, soporte en arranque).

6. **Gestión del ciclo largo: 6-18 meses sin perder momentum**
¿Cómo mantengo viva una oportunidad cuando el cliente dice "lo decidiremos en el próximo presupuesto"? Dame una cadencia de contacto y los tipos de contenido o acciones que justifican volver a contactar sin resultar pesado.

7. **Señales de cierre y cómo pedir el pedido**
¿Cuáles son las señales de que el cliente está listo para decidir? Dame las técnicas de cierre apropiadas para la venta industrial consultiva.

Adapta todo al contexto concreto que te he dado. Sé directo y práctico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestión del ciclo de venta largo en ventas industriales B2B con múltiples interlocutores técnicos y comités de compra.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management para software MES y SCADA',
                'description'       => 'Gestiona el producto de sistemas que controlan la producción: MES, SCADA y las decisiones de roadmap cuando el cliente es un director de planta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager senior especializado en software industrial para manufactura, con experiencia en MES (Manufacturing Execution Systems), SCADA y plataformas de control de producción. Entiendes tanto el dominio industrial como las metodologías ágiles adaptadas a entornos donde las actualizaciones de software tienen impacto directo en la producción.

Ayúdame con el siguiente reto de producto industrial.

**CONTEXTO DE MI PRODUCTO**
Tipo de software: [MES, SCADA, plataforma de trazabilidad, sistema de gestión de calidad, planificador de producción, etc.]
Mercado objetivo: [sector industrial, tamaño de planta, geografía]
Fase del producto: [idea / MVP / producto con clientes / crecimiento / madurez]
Principales clientes actuales: [si tienes, describe brevemente]
Reto principal de producto: [describe el problema concreto que necesitas resolver]
Recursos disponibles: [tamaño del equipo de desarrollo, presupuesto aproximado]

**LO QUE NECESITO**

1. **Gestión del backlog en software industrial**
El software MES y SCADA tiene particularidades únicas: los clientes son directores de planta con décadas de experiencia que saben exactamente lo que quieren (y no siempre tienen razón). Dame estrategias para gestionar las peticiones de personalización extrema sin perder la genericidad del producto, cómo priorizar entre clientes con producción parada y roadmap estratégico, y cómo escribir historias de usuario cuando el "usuario" es un PLC.

2. **Discovery en entornos industriales**
¿Cómo hago investigación de usuario en una planta de producción? Dame técnicas de discovery adaptadas: observación en planta sin interrumpir la producción, entrevistas con operarios y técnicos de mantenimiento (que no son los que pagan pero son los que usan), y cómo distinguir el problema real del síntoma que el cliente describe.

3. **Gestión de actualizaciones sin parar la producción**
En entornos industriales, una actualización de software mal gestionada puede parar la producción y costar miles de euros por minuto. Dame una estrategia de release management: cómo planificar las actualizaciones con el cliente, qué entornos de prueba necesito, cómo hacer rollback rápido y cómo comunicar al cliente cada cambio.

4. **Integraciones con el ecosistema industrial**
El MES vive en el medio: arriba el ERP (SAP, Oracle, Microsoft Dynamics) y abajo los PLCs, SCADA y sensores. Dame un framework para gestionar las integraciones: qué documentar, cómo cobrar el trabajo de integración (¿es producto o proyecto?), y cómo diseñar una API que soporte los estándares industriales (ISA-95, B2MML).

5. **Métricas de producto para software industrial**
¿Qué métricas mide un PM de software industrial? No solo las métricas SaaS tradicionales (DAU, churn, NPS) sino las específicas del sector: tasa de uptime del sistema en planta, tiempo de respuesta en operaciones críticas, cobertura de los procesos del cliente, y el impacto en los KPIs operativos del cliente (OEE, FPY, MTTR).

6. **Roadmap y comunicación con clientes industriales**
¿Cómo presento el roadmap a un director de planta que no entiende de sprints ni de metodologías ágiles? Dame una plantilla de roadmap orientada a resultados de negocio y una estrategia de comunicación adaptada a este perfil.

7. **Precio y modelo de negocio en software industrial**
¿Cómo monetizo el software MES o SCADA? Compara los modelos: licencia perpetua (que el cliente industrial tradicional prefiere), SaaS por planta, por usuario, por módulo, y los modelos híbridos. ¿Cuándo tiene sentido ofrecer servicios profesionales junto al software?

Sé específico para el contexto industrial. Evita los consejos de PM de apps de consumo que no aplican en este sector.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión de producto para software MES, SCADA y sistemas de control de producción industrial.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de talento en manufactura y planta industrial',
                'description'       => 'Atrae y retiene operarios, técnicos e ingenieros en un sector que compite contra oficinas con aire acondicionado: los programas que funcionan.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de RRHH con experiencia en empresas del sector industrial y manufacturero, donde los retos de atracción y retención del talento son radicalmente distintos a los de las empresas tecnológicas o de servicios. Conoces las particularidades del trabajo por turnos, el convenio colectivo del metal, la competencia con otras industrias y la brecha generacional en las plantas.

Ayúdame con el siguiente reto de gestión de personas en manufactura.

**CONTEXTO DE MI EMPRESA**
Tipo de empresa y sector: [automoción, alimentación, química, metal-mecánica, electrónica, etc.]
Tamaño de la plantilla: [número de trabajadores y distribución por perfil: operarios, técnicos, ingenieros, administración]
Principal problema de talento: [rotación alta, dificultad para reclutar perfiles técnicos, envejecimiento de plantilla, falta de operarios cualificados, etc.]
Zona geográfica: [ciudad o región, importancia del mercado laboral local]
Convenio colectivo aplicable: [si lo sabes]
Presupuesto aproximado disponible: [si puedes indicarlo]

**LO QUE NECESITO**

1. **Estrategia de atracción de talento industrial**
¿Cómo compito con las empresas de servicios y tecnología por el talento joven cuando mi planta no tiene vistas al mar? Dame una estrategia de employer branding industrial: qué argumentos resuenan con los jóvenes técnicos (estabilidad, salario, aprendizaje, orgullo de fabricar cosas reales), cómo usar las redes sociales para mostrar el entorno de trabajo, y qué canales de reclutamiento funcionan mejor para perfiles industriales (ETTs, FP dual, colaboración con institutos).

2. **Incorporación y onboarding en planta**
El primer mes es crítico para la retención del operario nuevo. Dame un programa de onboarding para perfiles de planta: bienvenida, formación en seguridad, asignación de tutor, seguimiento a los 30-60-90 días y las señales de alerta que indican que el nuevo empleado va a marcharse.

3. **Gestión del turno rotativo y conciliación**
El trabajo por turnos es el principal motivo de rotación. Dame estrategias para hacer el turno más llevadero: diseño del cuadrante de turnos, bolsas de horas, flexibilidad dentro del turno, y los beneficios no salariales que más valora el trabajador de planta (transporte, comedor, guardería, flexibilidad para citas médicas).

4. **Retención de técnicos e ingenieros industriales**
Los perfiles de mantenimiento, proceso y calidad son los más difíciles de reclutar y los más caros de perder. Dame un plan de retención específico: desarrollo profesional técnico (certificaciones, formación en nuevas tecnologías), bandas salariales competitivas y cómo construir un plan de carrera cuando la empresa es pequeña y no hay muchos niveles.

5. **Gestión del envejecimiento de la plantilla**
En muchas plantas industriales, el 40% de la plantilla se jubilará en los próximos diez años y se llevarán el conocimiento con ellos. Dame estrategias de transferencia de conocimiento: programas de mentoring intergeneracional, documentación del know-how de los operarios expertos y planes de sucesión para los perfiles críticos.

6. **Clima laboral y relaciones con el comité de empresa**
Las plantas industriales con comité de empresa fuerte tienen una dinámica particular. Dame consejos para mantener un clima laboral positivo, gestionar las relaciones sindicales de forma constructiva y comunicar los cambios (reorganizaciones, inversiones en automatización) de forma que no generen resistencia.

7. **Plan de acción prioritario**
Dame un plan de los primeros noventa días para abordar el principal reto que te he descrito, con acciones concretas, responsables y métricas de seguimiento.

Adapta las recomendaciones a la realidad del entorno industrial español. No me des consejos de empresa tecnológica que no aplican en una planta de producción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de atracción, retención y desarrollo de talento en empresas manufactureras e industriales.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de inversión en maquinaria industrial (ROI de capex)',
                'description'       => 'Calcula el ROI de capex industrial: payback, TIR, análisis de ciclo de vida del activo y justificación financiera de la automatización.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un controller financiero industrial con experiencia en análisis de inversiones en activos productivos para empresas manufactureras. Dominas el análisis de capex, la metodología de ciclo de vida de activos y la justificación financiera de proyectos de automatización ante comités de dirección y accionistas.

Ayúdame a construir el análisis financiero completo para la siguiente inversión industrial.

**DATOS DE LA INVERSIÓN**
Descripción de la inversión: [maquinaria, línea de producción, robot, sistema de automatización, etc.]
Coste de adquisición e instalación (capex total): [en euros]
Vida útil estimada del activo: [en años]
Valor residual al final de la vida útil: [en euros, si aplica]
Situación actual (sin la inversión): [costes actuales, capacidad, productividad, problemas que resuelve]
Beneficios esperados de la inversión: [ahorro de costes laborales, reducción de rechazos, mayor capacidad, etc. con cifras estimadas]
Costes operativos anuales del nuevo activo (opex): [mantenimiento, consumo energético, seguros, etc.]
Coste de capital de la empresa (WACC o tasa de descuento): [si lo sabes, o indícame si necesitas ayuda para estimarlo]

**LO QUE NECESITO**

1. **Cálculo del Payback y ROI simple**
Con los datos que te he dado, calcula el período de recuperación de la inversión (payback simple y descontado) y el ROI simple. Explica cómo interpretar estos resultados y cuáles son los valores de referencia típicos en inversiones industriales del sector.

2. **Análisis de VAN y TIR**
Construye el modelo de flujos de caja libre durante la vida útil del activo y calcula el Valor Actual Neto (VAN) y la Tasa Interna de Retorno (TIR). Explica si la inversión crea valor con la tasa de descuento que te he dado.

3. **Análisis de Coste Total de Propiedad (TCO)**
Muéstrame el TCO completo del activo durante su vida útil: capex inicial, costes de instalación y puesta en marcha, costes de mantenimiento preventivo y correctivo, consumo energético, formación del personal, actualizaciones de software si aplica, y coste de la baja del activo al final. Compara el TCO de la nueva inversión con el TCO de la situación actual.

4. **Análisis de sensibilidad**
¿Qué pasa si los beneficios esperados son un 20% menores de lo previsto? ¿O si el capex se desvía un 15% al alza? Construye un análisis de sensibilidad con escenarios pesimista, base y optimista para las variables más inciertas.

5. **Justificación ante el comité de dirección**
Dame una estructura para presentar esta inversión al consejo de administración o al comité de dirección: los números clave en una página, los argumentos cualitativos que complementan los números (ventaja competitiva, riesgo de no invertir, obsolescencia tecnológica) y cómo responder a las preguntas más habituales ("¿no podemos esperar un año más?", "¿por qué no arrendarlo?").

6. **Alternativa de leasing o renting industrial**
¿Tiene sentido financiar este activo mediante leasing o renting en lugar de compra directa? Compara el impacto en el balance, en la tesorería y en los ratios financieros clave.

7. **Impacto en los estados financieros**
¿Cómo afecta esta inversión al balance, a la cuenta de resultados (amortización, EBITDA, EBIT) y al estado de flujos de caja? Dame las líneas principales de impacto.

Muestra los cálculos paso a paso para que pueda validarlos y adaptar el modelo a mis datos reales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Análisis financiero completo de inversiones en maquinaria industrial: VAN, TIR, payback, TCO y presentación al comité de dirección.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Seguridad industrial y responsabilidad de producto (Directiva de Máquinas)',
                'description'       => 'Navega la normativa CE, directivas de máquinas y la responsabilidad civil cuando un producto industrial falla y causa daños.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho industrial y responsabilidad de producto con experiencia en el marcado CE, la Directiva de Máquinas y los procedimientos de reclamación cuando un producto industrial causa daños a personas o a instalaciones.

Ayúdame a entender y gestionar la siguiente situación legal en el ámbito industrial.

**CONTEXTO DEL CASO O CONSULTA**
Tipo de empresa y rol: [fabricante de maquinaria / importador / distribuidor / usuario final / aseguradora]
Producto o máquina involucrada: [descripción técnica del activo]
Situación o consulta concreta: [marcado CE de nuevo producto / accidente laboral / reclamación de cliente / auditoría de mercado / exportación fuera de la UE]
País o países implicados: [mercado de comercialización o donde ocurrió el incidente]
¿Existe ya un incidente o solo es consulta preventiva? [describe el incidente si existe]

**LO QUE NECESITO**

1. **Marco normativo aplicable**
Identifica las directivas europeas que aplican a la maquinaria o producto descrito: Directiva de Máquinas 2006/42/CE (y la nueva 2023/1230 que la sustituirá), Directiva de Baja Tensión, Directiva EMC, Directiva ATEX si aplica, y las normas armonizadas EN relevantes. Explica qué implica cada una para el fabricante.

2. **Proceso de marcado CE para maquinaria**
¿Qué pasos debe seguir un fabricante para obtener el marcado CE de una máquina? Explica el procedimiento completo: evaluación de riesgos según EN ISO 12100, selección del procedimiento de evaluación de conformidad (módulo A, B+C, etc.), elaboración del expediente técnico, Declaración de Conformidad UE y aplicación del marcado. ¿Cuándo es obligatorio un organismo notificado?

3. **Responsabilidad del fabricante vs. usuario**
¿Dónde termina la responsabilidad del fabricante y empieza la del usuario en caso de accidente? Explica el régimen de responsabilidad por productos defectuosos (Directiva 85/374/CEE y su refundición), la responsabilidad objetiva del fabricante, y los supuestos que la exoneran (uso indebido, modificaciones del usuario, riesgo del desarrollo).

4. **Gestión de un accidente laboral con maquinaria**
Si se ha producido un accidente en planta con la máquina, ¿cuáles son los pasos inmediatos que debe dar el fabricante? Incluye: notificación a la autoridad laboral, conservación de pruebas, comunicación con la aseguradora, apertura del expediente de investigación interna, y comunicación con el perjudicado y su empresa.

5. **Recalls y retirada del mercado**
¿Cuándo está obligado el fabricante a retirar un producto del mercado? ¿Cuál es el procedimiento de recall en Europa? Dame los pasos y los plazos, incluyendo la notificación a RAPEX (Safety Gate) y a las autoridades nacionales.

6. **Contratos de suministro y limitación de responsabilidad**
¿Cómo debo redactar las cláusulas de responsabilidad en los contratos de suministro de maquinaria para limitar la exposición del fabricante? ¿Qué cláusulas son válidas y cuáles son nulas aunque estén firmadas?

7. **Seguro de responsabilidad civil de producto**
¿Qué coberturas debe tener la póliza de RC de producto de un fabricante industrial? ¿Cuáles son los límites recomendados según el tipo de producto y el mercado de exportación?

Cita las normativas concretas cuando sea relevante, pero explica las implicaciones prácticas de forma comprensible para un no jurista.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestión del marcado CE, cumplimiento de la Directiva de Máquinas y responsabilidad civil por productos industriales defectuosos.',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte técnico industrial: SLAs y gestión de incidentes en planta',
                'description'       => 'Gestiona contratos de mantenimiento, SLAs de tiempo de respuesta y la crisis cuando la parada de producción cuesta miles por minuto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un responsable de servicio técnico postventa con experiencia en soporte de maquinaria industrial y software de control de producción, donde una parada no planificada puede costar miles de euros por hora y la presión del cliente en crisis es extrema.

Ayúdame con la siguiente situación de soporte técnico industrial.

**CONTEXTO DEL CASO**
Tipo de producto o solución que soporto: [maquinaria, software MES/SCADA, robot industrial, sistema de visión, etc.]
Tipo de cliente: [planta de producción, tamaño, sector, criticidad de la producción]
Situación actual: [parada de producción en curso / diseño de contrato de mantenimiento / revisión de SLAs / formación del equipo de soporte]
Urgencia: [¿hay producción parada ahora mismo? ¿cuánto tiempo lleva parada?]
Recursos de soporte disponibles: [equipo propio, red de técnicos, soporte remoto, repuestos en stock]

**LO QUE NECESITO**

1. **Protocolo de gestión de incidentes críticos (producción parada)**
Dame el protocolo paso a paso para gestionar un incidente P1 (producción parada): el proceso de escalado en los primeros diez minutos, la comunicación inicial con el cliente, cómo coordinar soporte remoto y desplazamiento de técnico en paralelo, y el registro del incidente. Incluye una plantilla de comunicación de crisis para el cliente.

2. **Diseño de niveles de servicio (SLAs) para maquinaria industrial**
¿Cómo estructuro los SLAs de un contrato de mantenimiento industrial? Dame las métricas clave: tiempo de primera respuesta, tiempo de resolución remota, tiempo de resolución on-site, disponibilidad garantizada del sistema (uptime), y penalizaciones por incumplimiento. ¿Qué es razonable comprometer para distintos niveles de contrato (básico, estándar, premium, 24x7)?

3. **Contratos de mantenimiento: estructura y cláusulas clave**
Ayúdame a estructurar un contrato de mantenimiento industrial: qué cubre y qué excluye (desgaste normal, consumibles, daños por mal uso), cómo gestionar los repuestos críticos (stock propio vs. depósito en cliente), condiciones de las intervenciones de emergencia fuera de horario, y cómo escalar el precio con la inflación.

4. **Diagnóstico remoto y soporte por video**
El soporte remoto bien implementado resuelve el 40-60% de los incidentes sin desplazamiento. Dame las mejores prácticas para el soporte remoto industrial: herramientas adecuadas para acceso remoto a PLCs y SCADAs (con las restricciones de ciberseguridad industriales), protocolos de uso de gafas de realidad aumentada para guiar al técnico del cliente, y cómo documentar la sesión remota.

5. **Gestión de la comunicación con el cliente en crisis**
Cuando la planta lleva dos horas parada y el director de producción está al teléfono cada diez minutos, ¿cómo gestiono la comunicación? Dame las reglas de comunicación en crisis: frecuencia de actualizaciones, qué decir cuando todavía no tienes la solución, cómo manejar la presión sin prometer lo que no puedes cumplir.

6. **Gestión del conocimiento y base de casos**
¿Cómo construyo una base de conocimiento de soporte técnico industrial que realmente funcione? Dame la estructura de los casos, cómo capturar el conocimiento de los técnicos más expertos, y cómo hacer que el equipo la consulte y la mantenga actualizada.

7. **Métricas del servicio técnico industrial**
¿Qué KPIs debe medir el departamento de soporte técnico? Incluye: MTTR (Mean Time to Repair), MTBF (Mean Time Between Failures), tasa de resolución en primer contacto, coste por incidente, satisfacción del cliente (CSAT) y la relación entre estas métricas y la renovación de contratos de mantenimiento.

Sé muy práctico. En soporte industrial, los errores de protocolo tienen consecuencias inmediatas y medibles en euros.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestión de incidentes críticos, diseño de SLAs y contratos de mantenimiento en soporte técnico de maquinaria y software industrial.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultor de digitalización industrial freelance',
                'description'       => 'El nicho del consultor independiente en industria 4.0: proyectos que contratan las pymes manufactureras y la propuesta de valor del experto externo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de negocio especializado en ayudar a profesionales técnicos a construir una práctica consultora independiente en el nicho de la digitalización industrial e Industria 4.0, con clientes que son pymes manufactureras.

Quiero construir o mejorar mi negocio como consultor independiente de digitalización industrial. Dime lo que necesitas saber sobre mi situación y luego dame un plan completo.

**MI SITUACIÓN ACTUAL**
Experiencia técnica y sectorial: [describe tu experiencia: años en la industria, tecnologías que dominas, sectores en los que has trabajado]
Situación actual: [empleado pensando en saltar / ya freelance pero sin suficientes clientes / freelance establecido que quiere crecer]
Primer cliente o proyecto de referencia: [si ya tienes alguno, descríbelo]
Red de contactos actual: [describe tu red: ex-colegas, contactos de ferias, LinkedIn, etc.]
Tarifa objetivo o actual: [euros por día o por proyecto]
Principal freno o duda: [¿qué te impide avanzar?]

**LO QUE NECESITO**

1. **Definición del nicho y propuesta de valor**
En digitalización industrial hay mucho ruido y muchos generalistas. ¿Cómo me especializo de forma que los clientes me busquen a mí? Ayúdame a definir mi nicho específico (tecnología + sector + tamaño de empresa + problema que resuelvo), a redactar mi propuesta de valor en dos frases, y a posicionarme de forma diferencial frente a las consultoras grandes y los integradores locales.

2. **Identificación y acceso a los clientes ideales**
La pyme manufacturera no busca consultores en internet, los recomienda un conocido o los conoce en una feria. Dame una estrategia de desarrollo de negocio adaptada a este mercado: cómo activar la red de contactos existente, qué asociaciones industriales y clústeres sectoriales vale la pena trabajar, y cómo usar LinkedIn para estar presente en las conversaciones de los directores de planta y gerentes de pymes industriales.

3. **Los proyectos que compran las pymes industriales**
No todas las pymes van a contratar un proyecto de IoT de 200.000 euros. ¿Cuáles son los proyectos que una pyme manufacturera está dispuesta a pagar y que puede ejecutar un consultor freelance? Dame un catálogo de servicios típicos: diagnóstico de digitalización, auditoría de datos de producción, selección de software MES, piloto de monitorización, formación de equipos... con el rango de precio y duración típico de cada uno.

4. **Estructura de precios y modelo de trabajo**
¿Cobro por día, por proyecto o por resultado? ¿Cuánto puedo cobrar como consultor independiente de Industria 4.0 en España? Dame un marco de precios realista, cómo pasar de cotizar días a cotizar proyectos de precio fijo, y cómo estructurar los contratos para protegerme del scope creep.

5. **Credibilidad y generación de confianza sin marca corporativa**
La pyme industrial es desconfiada con los consultores externos que no conocen su sector. ¿Cómo construyo credibilidad sin el respaldo de una consultora grande? Dame estrategias: portfolio de casos de éxito anonimizados, publicaciones técnicas en LinkedIn, ponencias en jornadas sectoriales, certificaciones que tienen peso en el sector industrial.

6. **Operativa del negocio freelance industrial**
Aspectos prácticos: facturación como autónomo vs. constitución de SL, seguro de RC profesional para consultores industriales, gestión de la administración (contratos, facturas, impuestos) sin que consuma demasiado tiempo, y cómo gestionar los períodos entre proyectos.

7. **Plan de los primeros noventa días**
Dame un plan de acción concreto para los primeros tres meses: las acciones de desarrollo de negocio que debo priorizar, cómo conseguir el primer proyecto (o el siguiente) y cómo construir el negocio de forma que no dependa de un solo cliente.

Sé realista sobre las dificultades del mercado industrial español y el tiempo que tarda en construirse una cartera de clientes en este nicho.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción y crecimiento de una práctica consultora independiente especializada en digitalización industrial e Industria 4.0.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
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
