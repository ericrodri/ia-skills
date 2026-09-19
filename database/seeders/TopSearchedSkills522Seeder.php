<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills522Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Plan de comunicación de crisis con IA para marcas y empresas',
                'description'      => 'Diseña planes de comunicación de crisis completos usando IA para anticipar escenarios, preparar mensajes clave, coordinar portavoces y gestionar la reputación de marca en tiempo real durante una crisis.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de comunicación de crisis con más de 15 años de experiencia gestionando situaciones de emergencia reputacional para marcas de consumo, empresas industriales y organizaciones públicas.

contexto: Una crisis de comunicación puede destruir en 72 horas lo que una marca ha construido en décadas. La velocidad a la que se propagan las noticias negativas en redes sociales, la presión de los medios y la expectativa del público de respuestas inmediatas exigen que las organizaciones tengan planes de crisis preparados con antelación y herramientas para ejecutarlos en tiempo real. La IA puede acelerar tanto la preparación como la ejecución de la respuesta.

tarea: Desarrolla el plan de comunicación de crisis completo para [NOMBRE DE ORGANIZACIÓN] ante el siguiente escenario de crisis: [DESCRIBIR EL ESCENARIO: accidente con víctimas, fallo de producto, escándalo de corrupción, ciberataque con fuga de datos, crisis laboral pública, o cualquier otro].

FASE 1 — Diagnóstico y evaluación inicial de la crisis
- Analiza el escenario de crisis en los primeros 60 minutos: ¿qué ha ocurrido exactamente?, ¿qué se sabe con certeza y qué aún es incierto?, ¿quiénes son los afectados directos?, ¿cuál es el riesgo reputacional estimado en escala de 1 a 10?
- Identifica las partes interesadas críticas (stakeholders) que deben ser contactadas en las primeras 2 horas: empleados, familias de afectados, autoridades regulatorias, socios comerciales clave, y medios de comunicación.
- Diseña el protocolo de activación del equipo de crisis: quién convoca, quién forma parte del comité de crisis (CEO, Director de Comunicación, Director Jurídico, Director de Operaciones), y cuál es el canal de comunicación interno de emergencia.

FASE 2 — Mensajes clave y posicionamiento
- Desarrolla los 3 mensajes clave que la organización debe comunicar en las primeras 4 horas: qué ocurrió (solo lo que se sabe con certeza), qué estamos haciendo (acciones concretas inmediatas), y qué comprometemos (investigación, transparencia, apoyo a afectados).
- Diseña el tono y el lenguaje de crisis: cuándo usar la primera persona del CEO, cuándo hablar en nombre de "la empresa", y qué palabras evitar en situaciones de crisis (no minimizar, no defensivo, no promesas que no se pueden cumplir).
- Crea las variantes del mensaje para cada canal y audiencia: comunicado de prensa formal, publicación en redes sociales, comunicación interna a empleados, y carta a clientes afectados.

FASE 3 — Gestión de medios y redes sociales en tiempo real
- Diseña el protocolo de gestión de medios durante la crisis: cómo seleccionar el portavoz adecuado según el tipo de crisis, cómo preparar al portavoz para las preguntas difíciles, y cuándo hacer una rueda de prensa versus cuándo emitir solo un comunicado escrito.
- Crea un sistema de monitorización en tiempo real durante la crisis: qué palabras clave seguir en redes sociales, cómo clasificar las menciones por urgencia (desinformación que se viraliza, periodistas solicitando comentario, afectados buscando información), y quién es responsable de cada tipo de respuesta.
- Propón el árbol de decisión para responder en redes sociales: cuándo responder públicamente, cuándo derivar a canal privado, cuándo no responder (y por qué a veces el silencio estratégico es la opción correcta), y cuándo es necesario escalar al equipo jurídico antes de publicar.

FASE 4 — Análisis de riesgo reputacional con IA
- Diseña el sistema de análisis de riesgo reputacional con IA durante la crisis: monitorización del sentimiento en redes sociales, detección de narrativas falsas o distorsionadas antes de que se viralicen, y estimación del alcance de la crisis en medios digitales.
- Propón cómo usar IA para identificar a los actores que amplifican la crisis (periodistas influyentes, cuentas con muchos seguidores que publican información negativa, stakeholders internos que filtran información) y diseñar una respuesta diferenciada para cada uno.
- Describe el sistema de alertas para el comité de crisis: cuándo una crisis escala de nivel 2 a nivel 3, qué señales indican que la crisis se está conteniendo, y cuándo es el momento adecuado para pasar de gestión de emergencia a recuperación de reputación.

FASE 5 — Recuperación y aprendizaje post-crisis
- Diseña el plan de recuperación de reputación para los 30, 60 y 90 días posteriores a la crisis: qué acciones concretas demuestran que la organización ha aprendido y cambiado, cómo comunicar los avances sin parecer que se está haciendo publicidad de la propia crisis, y cómo volver a la narrativa positiva de forma creíble.
- Propón el proceso de revisión interna post-crisis: qué funcionó del plan de crisis, qué falló, qué se puede mejorar para la próxima vez, y cómo documentar el aprendizaje en el manual de crisis actualizado.

entregable: El plan de comunicación de crisis completo en formato ejecutable, listo para ser aprobado por la dirección y distribuido al equipo de crisis.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollar planes de comunicación de crisis completos y ejecutables con apoyo de IA para empresas y marcas',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistemas de alerta temprana y comunicación de emergencia con IA',
                'description'      => 'Diseña la arquitectura técnica de plataformas de gestión de crisis y comunicación de emergencia que usan IA para detectar situaciones críticas, coordinar respuestas y comunicar en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de sistemas especializado en plataformas de gestión de emergencias, comunicación de crisis, y detección temprana de situaciones críticas mediante inteligencia artificial y análisis de datos en tiempo real.

contexto: Las organizaciones y los gobiernos necesitan sistemas que detecten situaciones de crisis antes de que escalen, coordinen la respuesta de múltiples equipos simultáneamente, y comuniquen información crítica a distintas audiencias de forma clara y rápida. Estos sistemas combinan monitorización de fuentes de datos heterogéneas, análisis con IA, y canales de comunicación multimodal.

tarea: Diseña la arquitectura técnica completa de [NOMBRE DEL SISTEMA] de gestión de crisis y comunicación de emergencia para [TIPO DE ORGANIZACIÓN: empresa industrial con riesgo de accidentes / municipio con gestión de emergencias / hospital / empresa de infraestructuras críticas / organización de seguridad].

MÓDULO 1 — Sistema de detección temprana con IA
- Diseña el pipeline de ingesta de señales de alerta: qué fuentes de datos monitorizar en tiempo real (sensores IoT de instalaciones, redes sociales y medios digitales, canales de comunicación interna, informes de campo de equipos operativos, feeds de agencias de noticias), y cómo normalizar datos heterogéneos en un modelo unificado.
- Especifica el modelo de detección de anomalías: qué algoritmos usar para identificar señales de crisis emergente (variación estadística en sensores, pico de menciones negativas en redes sociales, aumento de llamadas al servicio de atención al cliente sobre el mismo tema), con umbrales configurables por tipo de riesgo.
- Diseña el sistema de clasificación y priorización de alertas: cómo el sistema distingue entre incidentes menores, situaciones que requieren monitorización y crisis que requieren activación inmediata del protocolo de emergencia.

MÓDULO 2 — Centro de mando y coordinación de respuesta
- Diseña el dashboard de gestión de crisis en tiempo real: qué información mostrar al comité de crisis (mapa de situación, línea temporal de eventos, estado de cada equipo de respuesta, canales de comunicación activos, cobertura de medios en tiempo real), y cómo priorizarla visualmente bajo presión.
- Especifica el sistema de asignación de tareas de emergencia: cómo el sistema genera automáticamente la lista de acciones requeridas según el tipo de crisis activado, asigna responsables, rastrea el estado de cada acción, y alerta cuando una tarea crítica no se ha completado en el tiempo previsto.
- Diseña el sistema de comunicación interna de emergencia: canales redundantes (app móvil, SMS, email, radio digital), protocolo de confirmación de lectura para mensajes críticos, y gestión de comunicación con equipos en campo sin conexión permanente.

MÓDULO 3 — Motor de comunicación externa en tiempo real
- Especifica el sistema de gestión de comunicaciones externas durante la crisis: gestión del flujo de trabajo de aprobación de comunicados (redacción → revisión jurídica → aprobación del portavoz → publicación), integración con plataformas de publicación (web, Twitter/X, LinkedIn, sistema de notas de prensa), y registro de todas las comunicaciones emitidas con timestamp.
- Diseña el módulo de IA generativa para soporte a la redacción de crisis: cómo el sistema propone borradores de comunicados basados en el tipo de crisis, los mensajes clave aprobados y el tono de la organización, con posibilidad de edición humana antes de publicación.
- Propón el sistema de gestión de preguntas frecuentes de crisis: cómo el sistema recopila las preguntas que llegan por distintos canales, identifica las más frecuentes y urgentes, y propone respuestas validadas para el equipo de atención al público.

MÓDULO 4 — Análisis de sentimiento y monitorización de narrativas
- Diseña el pipeline de análisis de sentimiento en tiempo real durante una crisis: ingesta de menciones de redes sociales, clasificación de sentimiento por audiencia (empleados, clientes, medios, público general), detección de narrativas falsas o distorsionadas, e identificación de voces influyentes que amplifican la crisis.
- Especifica el sistema de alertas de escalada: cuándo la situación en redes sociales requiere intervención inmediata del equipo de comunicación (narrativa falsa que supera las X menciones por hora, periodista de medio de referencia publicando información incorrecta), y cuál es el protocolo de respuesta automática versus humana.
- Propón cómo el sistema aprende de cada crisis para mejorar la detección futura: feedback loop con el equipo de crisis sobre la calidad de las alertas, ajuste de umbrales y modelos de detección, y biblioteca de patrones de crisis históricos.

MÓDULO 5 — Infraestructura resiliente y seguridad
- Diseña la arquitectura de alta disponibilidad para un sistema de gestión de crisis: redundancia geográfica, failover automático, y garantía de que el sistema funciona precisamente cuando más se necesita (bajo picos de carga durante la crisis).
- Describe los requisitos de seguridad: el sistema maneja información confidencial sobre la crisis antes de su comunicación pública, por lo que necesita control de acceso granular, cifrado de todas las comunicaciones internas, y auditoría completa de accesos.
- Propón el plan de pruebas del sistema: cómo hacer simulacros de crisis para verificar que todos los componentes funcionan bajo presión, sin afectar a los sistemas de producción.

entregable: Documento de arquitectura técnica con diagramas del sistema, especificaciones de los módulos principales, y plan de implementación por fases.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar plataformas técnicas de gestión de crisis y comunicación de emergencia con IA para organizaciones',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de materiales de comunicación de crisis claros y accesibles con IA',
                'description'      => 'Diseña la identidad visual de emergencia, los materiales de comunicación de crisis y los sistemas de señalización que permiten comunicar información crítica de forma rápida, clara y universal en situaciones de emergencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de comunicación especializado en comunicación de emergencia, diseño de crisis, señalización de emergencias y materiales de comunicación accesibles para situaciones de alta presión y audiencias diversas.

contexto: En una situación de crisis, la comunicación visual salva vidas. Los materiales de emergencia deben ser comprensibles bajo estrés extremo, en condiciones de baja visibilidad, por personas de diferentes idiomas y capacidades, y en cuestión de segundos. El diseño de comunicación de crisis es una disciplina que combina psicología del estrés, accesibilidad universal y diseño de información clara.

objetivo: Diseña el sistema completo de comunicación visual de crisis para [TIPO DE ORGANIZACIÓN: empresa industrial / hospital / municipio / aeropuerto / centro comercial / evento masivo] ante el escenario de [TIPO DE EMERGENCIA: evacuación / incendio / ciberataque con comunicación al público / accidente con víctimas / crisis de reputación pública].

ÁREA 1 — Sistema de identidad visual de emergencia
- Diseña el sistema de identidad visual específico para comunicaciones de crisis: cómo diferenciarlo visualmente de la comunicación habitual de la organización para que el receptor identifique inmediatamente que se trata de una situación de emergencia (uso de color, tipografía de alta legibilidad, iconografía de alerta).
- Define la paleta de colores de emergencia: rojo para peligro inmediato, naranja para alerta, amarillo para precaución, y verde para zona segura / situación controlada. Describe cómo aplicar esta paleta en distintos soportes (digital, físico, señalización).
- Propón el sistema tipográfico de emergencia: tamaño mínimo de fuente para lectura a distancia, fuentes de máxima legibilidad bajo estrés (sin serifas, alto contraste, espaciado generoso), y jerarquía visual de mensajes según urgencia.

ÁREA 2 — Materiales de comunicación digital de crisis
- Diseña las plantillas de comunicación digital de emergencia: publicación en redes sociales de alerta urgente (formato cuadrado y horizontal), banner de aviso para la web corporativa, notificación push para la app de la organización, y plantilla de email de crisis.
- Para cada plantilla, especifica: estructura visual (qué va en la zona de máxima atención, qué es secundario), texto máximo recomendado, y elementos obligatorios (qué ha ocurrido, qué deben hacer los afectados, dónde obtener más información).
- Propón cómo adaptar los materiales digitales para accesibilidad: contraste mínimo WCAG AA, texto alternativo para imágenes, compatibilidad con lectores de pantalla, y versión de alto contraste para personas con baja visión.

ÁREA 3 — Señalización física de emergencia
- Diseña el sistema de señalización de emergencia para [TIPO DE INSTALACIÓN]: señales de evacuación, puntos de encuentro, zonas de exclusión, y rutas de acceso para servicios de emergencia.
- Define los estándares de tamaño y visibilidad para señales en condiciones de baja visibilidad (humo, apagón de luz): materiales fotoluminiscentes, iluminación de emergencia, y distancia mínima de lectura.
- Propón un sistema de señalización multiidioma y con iconografía universal para entornos con público internacional: cómo representar "evacuación", "punto de encuentro", "no entrar" y "teléfono de emergencias" sin depender del texto.

ÁREA 4 — Comunicación de crisis para audiencias vulnerables
- Diseña materiales de comunicación de crisis adaptados a: personas con discapacidad visual (mensajes de audio, señales en braille), personas con discapacidad auditiva (mensajes visuales, luz de alerta), personas mayores (texto grande, instrucciones simples paso a paso), y niños (iconografía clara, colores reconocibles, instrucciones en lenguaje simple).
- Propón cómo comunicar una emergencia a personas que no hablan el idioma local: pictogramas universales, señas internacionales de emergencia, y materiales en los 5 idiomas más hablados por la audiencia del lugar.
- Describe el uso de IA para generar rápidamente versiones accesibles de comunicados de crisis: traducción automática verificada, simplificación de lenguaje para nivel de comprensión básico, y generación de versión de lectura fácil (lectura fácil estándar AENOR).

ÁREA 5 — Simulacros y testing de los materiales
- Diseña una metodología para testar los materiales de comunicación de crisis con usuarios reales antes de una emergencia: qué preguntar, cómo simular condiciones de estrés en el test, y qué métricas de comprensión usar.
- Propón cómo usar IA para generar escenarios de simulacro de crisis y revisar si los materiales diseñados responden correctamente a cada escenario.
- Describe el proceso de actualización de materiales: cómo mantener los templates de crisis actualizados con los cambios de identidad corporativa, los cambios de protocolo de emergencia, y las lecciones aprendidas de simulacros o crisis reales.

entregable: El sistema completo de comunicación visual de crisis: guía de identidad visual de emergencia, conjunto de plantillas digitales y físicas listas para usar, y guía de aplicación para el equipo de comunicación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar materiales visuales y sistemas de comunicación de crisis accesibles y efectivos para organizaciones',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de servicios de consultoría de gestión de crisis con IA a empresas',
                'description'      => 'Diseña la propuesta de valor y la estrategia comercial para vender servicios de consultoría y preparación ante crisis a empresas, usando IA como diferenciador en análisis de riesgo y simulacros digitales.',
                'prompt_content'   => <<<'EOT'
Actúa como un comercial senior especializado en la venta de servicios de consultoría de gestión de crisis, comunicación de emergencia y análisis de riesgo reputacional a empresas de mediano y gran tamaño.

contexto: La gestión de crisis es un mercado de consultoría en crecimiento: los escándalos corporativos, los ciberataques, los accidentes industriales y las crisis de comunicación en redes sociales han hecho que cada vez más empresas inviertan en preparación ante crisis antes de que ocurran. El ciclo de venta es complejo porque el cliente compra algo que espera no necesitar nunca, y el momento de mayor receptividad es justo después de una crisis (propia o de un competidor del sector).

tarea: Diseña la estrategia de ventas completa para [NOMBRE DE CONSULTORA DE CRISIS] orientada a vender servicios de preparación y gestión de crisis a [TIPO DE EMPRESA: empresa industrial con riesgo operacional / empresa de gran consumo con exposición reputacional / empresa de servicios financieros / institución pública].

BLOQUE 1 — Propuesta de valor y portfolio de servicios
- Diseña el portfolio de servicios de consultoría de crisis diferenciados por precio y momento de compra: retainer de preparación (auditoría de vulnerabilidades, manual de crisis, formación del equipo), servicio de guardia 24/7 para crisis en tiempo real, y análisis post-crisis y plan de recuperación de reputación.
- Define la propuesta de valor para cada nivel de decisión: CEO (protección de la empresa y su legado), Director de Comunicación (herramientas y soporte para el peor momento), Director de Operaciones (reducción del tiempo de respuesta y del impacto operacional), y Consejo de Administración (cumplimiento de obligaciones de gobierno corporativo).
- Describe cómo posicionar la IA como diferenciador del servicio: monitorización de riesgo reputacional en tiempo real, simulacros de crisis con escenarios generados por IA, y análisis predictivo de vulnerabilidades sectoriales.

BLOQUE 2 — Estrategia de prospección y timing de venta
- Define los triggers de venta más potentes para servicios de gestión de crisis: ¿cuándo es el cliente más receptivo? Justo después de una crisis en su sector, tras un cambio de CEO o Director de Comunicación, durante la revisión anual de riesgos, o cuando el consejo exige un plan de continuidad de negocio.
- Diseña la estrategia de prospección basada en alertas de crisis del sector: cómo monitorizar los escándalos, accidentes y crisis de comunicación en las industrias de tus clientes potenciales, y cómo contactar a las empresas de ese sector en las 2 semanas posteriores con un mensaje relevante y oportuno.
- Propón los canales de captación para la consultoría de crisis: referencias de abogados de empresa y aseguradoras (que conocen a los directivos después de una crisis), eventos de gestión de riesgos y compliance, y contenido de thought leadership (artículos de análisis de grandes crisis del año, presencia en medios especializados).

BLOQUE 3 — Argumentario de venta y manejo de objeciones
- Diseña el argumentario de venta para la reunión con el Director de Comunicación de una empresa de gran consumo: cómo abrir con un escenario de crisis relevante para su sector, cómo cuantificar el coste de una crisis no gestionada (caída de ventas, coste legal, pérdida de cuota de mercado, valor de la acción), y cómo presentar el coste del servicio como una prima de seguro racional.
- Diseña respuestas a las principales objeciones del sector: "tenemos un departamento de comunicación interno para eso", "esperamos que no nos ocurra nunca", "el presupuesto de comunicación ya está comprometido", "¿qué diferencia hay entre vosotros y cualquier agencia de PR?", y "¿cómo sé que vuestra IA funciona de verdad?".
- Propón cómo usar un simulacro de crisis en vivo durante el proceso de venta: una demostración de 30 minutos en la que el equipo directivo del cliente vive un escenario de crisis simulado y experimenta en carne propia la diferencia entre tener un plan preparado y no tenerlo.

BLOQUE 4 — Estructura de la propuesta comercial
- Diseña la propuesta comercial tipo para un contrato de preparación ante crisis: diagnóstico de vulnerabilidades de la empresa (qué riesgos tienen según su sector, tamaño y exposición mediática), plan de trabajo de 6 meses, entregables (manual de crisis, formación del comité, simulacro), precio y condiciones.
- Propón el modelo de retainer anual para guardia de crisis: qué incluye (monitorización semanal, línea directa 24/7 para activar en caso de crisis, actualización trimestral del plan), con qué SLA de tiempo de respuesta (el consultor de crisis lidera en menos de 2 horas desde la activación), y a qué precio.
- Describe cómo manejar la negociación de precio con el CFO o el consejo: qué ROI medir para justificar la inversión, qué casos de éxito usar como referencia, y cuándo ofrecer un piloto reducido para reducir el riesgo percibido de la inversión.

entregable: Un playbook de ventas completo para la consultoría de crisis, con scripts de prospección, presentación de venta y propuesta comercial tipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Vender servicios de consultoría de gestión de crisis y comunicación de emergencia a empresas con apoyo de IA',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product Manager de plataforma de gestión de crisis: producto para el peor día',
                'description'      => 'Define la visión, el roadmap y las métricas de una plataforma SaaS de gestión de crisis que las organizaciones usan para prepararse, detectar y responder a situaciones de emergencia con apoyo de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en plataformas SaaS B2B de gestión de riesgos, comunicación de crisis, y software de emergencias para organizaciones complejas.

contexto: Una plataforma de gestión de crisis es uno de los productos más exigentes de diseñar: tiene que ser lo suficientemente simple para usarse bajo una presión extrema (cuando el CEO está gritando y los periodistas llaman), lo suficientemente completa para cubrir todos los escenarios posibles, y lo suficientemente fiable para funcionar exactamente cuando más se necesita. El PM de este tipo de producto enfrenta el reto de que el cliente espera no usarlo nunca en serio, pero exige que funcione perfectamente cuando llegue ese día.

tarea: Actúa como PM de [NOMBRE DE PLATAFORMA DE GESTIÓN DE CRISIS] y desarrolla los siguientes entregables:

ENTREGABLE 1 — Visión de producto y propuesta de valor única
- Define la visión de producto a 3 años: a quién sirves (grandes empresas industriales, instituciones públicas, cadenas de retail con exposición de marca, empresas de infraestructuras críticas), qué problema resuelves mejor que ninguna solución existente, y qué tiene que ser cierto en el mundo para que tu plataforma sea indispensable.
- Describe el insight de usuario central: ¿qué hace una empresa cuando le estalla una crisis sin tener una plataforma? ¿Cuál es el caos que tu producto evita? Haz que ese dolor sea tan concreto que cualquier directivo lo reconozca en 30 segundos.
- Analiza el panorama competitivo de software de gestión de crisis: Everbridge, OnSolve, Crisisgo, Noggin. ¿Dónde falla la competencia y qué espacio en blanco justifica una nueva plataforma diferenciada con IA?

ENTREGABLE 2 — Investigación de usuario y casos de uso críticos
- Diseña el plan de investigación de usuario para una plataforma de crisis: a quién entrevistar (directores de comunicación que han vivido una crisis real, responsables de seguridad corporativa, equipos de emergencias de grandes instalaciones), qué preguntar, y cómo diseñar una sesión de research que simule las condiciones de estrés en que se usará el producto.
- Define los 5 casos de uso críticos que el producto debe resolver impecablemente antes de cualquier otro: activación del comité de crisis, emisión del primer comunicado, monitorización de cobertura en tiempo real, coordinación de equipos en campo, y generación del informe post-crisis.
- Describe cómo validar que el producto funciona bajo presión real: qué significa "listo para producción" en un producto de crisis (no que pase los tests, sino que funcione cuando el sistema está bajo carga máxima y el usuario está bajo estrés extremo).

ENTREGABLE 3 — Roadmap de producto por fases
- Diseña el roadmap de los próximos 4 trimestres: Q1 (MVP con manual de crisis digital, comité de crisis y comunicaciones básicas), Q2 (monitorización de redes sociales y alertas con IA), Q3 (simulacros digitales con escenarios generados por IA), Q4 (análisis predictivo de riesgo reputacional y reporting ejecutivo).
- Para cada trimestre, define: hipótesis que se valida, métrica de éxito, y criterio de salida para pasar a la siguiente fase.
- Describe las decisiones de build vs. buy más críticas: ¿construir el módulo de monitorización de redes sociales o integrar con Brandwatch/Meltwater?, ¿desarrollar firma electrónica de comunicados o integrar con soluciones existentes?

ENTREGABLE 4 — Métricas de producto para una plataforma de crisis
- Define la North Star Metric de la plataforma: ¿número de organizaciones que han completado al menos un simulacro de crisis en los últimos 90 días?, ¿tiempo medio de activación del protocolo de crisis desde que se detecta el incidente?, ¿porcentaje de clientes que renuevan y amplían el contrato tras vivir una crisis real?
- Diseña el árbol de métricas: adquisición (coste de adquisición por tamaño de empresa), activación (porcentaje de clientes que completan la configuración del manual de crisis en los primeros 30 días), retención (tasa de renovación anual), y expansión (porcentaje de clientes que añaden módulos adicionales o amplían licencias).
- Propón las métricas de calidad del producto específicas para software de crisis: uptime garantizado (99,99% con SLA contractual), tiempo de carga del dashboard en condición de máxima carga, y tasa de falsos positivos en el sistema de alertas.

ENTREGABLE 5 — Modelo de negocio y go-to-market
- Diseña el modelo de precios para la plataforma: por número de empleados cubiertos, por número de escenarios de crisis configurados, o por nivel de funcionalidades (starter para pymes, professional para medianas empresas, enterprise para grandes organizaciones con SLA dedicado).
- Describe la estrategia go-to-market: ¿venta directa a través de equipo comercial especializado?, ¿canal de partners (aseguradoras, consultoras de riesgos, auditoras de compliance)?, ¿modelo de distribución a través de asociaciones sectoriales de empresas industriales?
- Propón cómo gestionar la estacionalidad del mercado de crisis: ¿cuándo son los mejores momentos para vender preparación ante crisis, y cómo mantener el interés del cliente durante los meses sin ninguna crisis visible en el sector?

entregable: Un documento de visión de producto con el roadmap del año, el árbol de métricas, y la propuesta de go-to-market.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir visión, roadmap y métricas de una plataforma SaaS de gestión de crisis con IA para organizaciones',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH en crisis: comunicación interna de emergencia y gestión del equipo humano',
                'description'      => 'Diseña protocolos de comunicación interna de crisis, gestión del bienestar de empleados bajo emergencia, y planes de continuidad de RRHH para mantener la operatividad y la cohesión del equipo en situaciones críticas.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos con experiencia en la gestión de equipos durante situaciones de crisis: ERTEs masivos, accidentes laborales graves, ciberataques que paralizan la operación, escándalos corporativos que afectan a la motivación del equipo, o crisis sanitarias que obligan a reorganizar la forma de trabajo.

contexto: En una crisis, el equipo de RRHH tiene un papel doble y contradictorio: debe gestionar sus propias emociones y las de su equipo mientras simultaneamente apoya a la dirección en la gestión de la emergencia. Las personas son el activo más crítico en una crisis: si el equipo se desmorona, la organización no puede responder. Si la comunicación interna falla, los rumores y el miedo paralizan la operación.

tarea: Diseña el plan de gestión de RRHH en crisis para [NOMBRE DE ORGANIZACIÓN] ante el siguiente escenario: [TIPO DE CRISIS: accidente grave en instalación con víctimas entre empleados / ciberataque que paraliza los sistemas durante días / ERTE masivo por crisis económica / escándalo de corrupción que afecta a la cúpula directiva / pandemia o crisis sanitaria que obliga a reorganizar el trabajo].

ÁREA 1 — Comunicación interna de emergencia
- Diseña el protocolo de comunicación interna de las primeras 2 horas de la crisis: quién comunica (el CEO, el Director de RRHH, el mando directo), qué se comunica (solo lo que se sabe con certeza, reconocimiento del impacto humano, medidas inmediatas de protección), por qué canal (todos simultáneamente: email, intranet, WhatsApp de empresa, reunión presencial o videollamada urgente), y con qué tono (directo, humano, sin eufemismos).
- Crea las plantillas de comunicación interna de crisis para los primeros mensajes: comunicado inicial del CEO a toda la plantilla, mensaje del mando directo a su equipo, y FAQ inicial para gestores con las respuestas a las preguntas más frecuentes de los empleados.
- Propón cómo gestionar la comunicación interna durante el período de incertidumbre (cuando la crisis dura días o semanas y no hay respuestas claras aún): cadencia de actualizaciones, cómo comunicar la incertidumbre de forma honesta sin generar pánico, y cómo distinguir entre lo que se sabe, lo que se está investigando y lo que aún es desconocido.

ÁREA 2 — Bienestar psicológico del equipo en crisis
- Diseña el protocolo de apoyo psicológico de emergencia: cuándo activar el servicio de atención psicológica para empleados, cómo comunicarlo sin estigmatizar su uso, y qué tipo de apoyo ofrecer según la gravedad de la crisis (línea de escucha, sesiones grupales de debriefing, atención individual para casos graves).
- Propón cómo identificar a los empleados más vulnerables durante la crisis: personas en situación personal difícil, empleados con vínculos directos con los afectados, personas con antecedentes de problemas de salud mental, y mandos intermedios bajo presión extrema por ser el primer punto de contacto del equipo.
- Describe el plan de seguimiento post-crisis: cómo acompañar al equipo en la recuperación emocional después de que la emergencia inmediata haya pasado, qué señales indican que un empleado necesita apoyo adicional, y cuándo es el momento adecuado para hacer una revisión colectiva de la experiencia vivida.

ÁREA 3 — Continuidad operativa de RRHH durante la crisis
- Diseña el plan de continuidad de RRHH: cómo mantener los procesos críticos de recursos humanos (nóminas, gestión de bajas, contratación urgente si se necesita personal adicional) cuando la organización está en modo de emergencia y el equipo de RRHH tiene capacidad reducida.
- Propón cómo gestionar las ausencias del equipo durante la crisis: empleados directamente afectados por la emergencia, bajas por estrés o impacto psicológico, y personal que necesita atender a familiares afectados.
- Describe el sistema de gestión de turnos de emergencia: cómo organizar la disponibilidad del equipo de RRHH en modo de crisis 24/7 sin agotar a las personas, con rotación, tiempos de descanso obligatorios y sustituciones previstas.

ÁREA 4 — Gestión de equipos en situaciones de alta presión
- Diseña la guía para mandos intermedios durante una crisis: cómo mantener la moral del equipo cuando las noticias son malas, cómo responder a preguntas que no tienen respuesta aún, cómo tomar decisiones bajo presión e incertidumbre, y cómo reconocer y gestionar su propio agotamiento.
- Propón cómo usar IA para apoyar a los managers durante la crisis: asistente de comunicación que propone cómo hablar con el equipo en distintos escenarios, generador de respuestas a preguntas frecuentes difíciles, y sistema de alerta cuando un manager no ha contactado con sus colaboradores en el tiempo previsto.
- Describe el protocolo de toma de decisiones de RRHH en crisis: qué decisiones puede tomar el mando directo autónomamente, cuáles requieren autorización de RRHH, y cuáles necesitan el visto bueno de la dirección general o del asesor jurídico.

ÁREA 5 — Aprendizaje organizacional post-crisis
- Diseña el proceso de revisión de la gestión de RRHH durante la crisis: encuesta de experiencia del empleado post-crisis (cómo se sintieron informados, apoyados y liderados), análisis de los puntos de fallo en la comunicación interna, y propuesta de mejoras para el plan de crisis de RRHH.
- Propón cómo documentar las lecciones aprendidas en el manual de gestión de crisis de RRHH para que estén disponibles para el equipo que gestione la próxima crisis.

entregable: El plan de gestión de RRHH en crisis completo, con protocolos, plantillas de comunicación y guía para mandos intermedios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar la comunicación interna y el bienestar del equipo durante situaciones de crisis con apoyo de IA',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de riesgo financiero en crisis corporativas con IA',
                'description'      => 'Usa IA para modelar el impacto financiero de distintos escenarios de crisis corporativa, cuantificar el riesgo reputacional en términos económicos, y diseñar estrategias de mitigación para proteger el valor de la empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en gestión de riesgos corporativos, valoración del impacto económico de crisis empresariales, y en el análisis cuantitativo del riesgo reputacional y operacional en situaciones de emergencia.

contexto: Las crisis corporativas tienen un coste financiero medible y a menudo subestimado: caída del valor bursátil, pérdida de clientes, aumento del coste de financiación, costes legales y de indemnizaciones, y el coste de la recuperación reputacional. La capacidad de modelar estos costes antes y durante una crisis es crítica para la toma de decisiones financieras en situaciones de emergencia.

tarea: Desarrolla el análisis de riesgo financiero completo para [NOMBRE DE EMPRESA] ante el escenario de crisis: [TIPO DE CRISIS: escándalo de corrupción directiva / accidente industrial grave / fuga de datos de clientes / retirada masiva de producto defectuoso / crisis de liquidez pública].

MÓDULO 1 — Modelado del impacto financiero de la crisis
- Diseña el modelo de impacto financiero de la crisis con 3 escenarios (crisis contenida en 72 horas, crisis que dura 2 semanas, crisis que genera litigio colectivo de 12 meses): ¿cuánto puede costar cada escenario en términos de caída de ingresos, costes de gestión de crisis, costes legales, y coste de la recuperación?
- Propón cómo estimar la caída de ingresos según el tipo de crisis: pérdida de clientes por desconfianza, cancelación de contratos con cláusula de reputación, reducción de ticket medio, y aumento de la tasa de churn en los 6 meses posteriores a la crisis.
- Diseña el modelo de impacto en el coste de capital: ¿cómo una crisis reputacional grave afecta al rating crediticio de la empresa, al coste de nueva financiación bancaria, y a la valoración en caso de necesitar una ampliación de capital de emergencia?

MÓDULO 2 — Cuantificación del riesgo reputacional
- Define el método para cuantificar el valor de la reputación corporativa antes de la crisis: ¿cuánto vale la confianza de los clientes en términos de price premium que pagan, tasa de retención superior a la competencia, y reducción del coste de adquisición de nuevos clientes?
- Diseña el modelo de pérdida de valor reputacional según la gravedad de la crisis: casos de referencia de empresas comparables (Volkswagen Dieselgate, Johnson & Johnson Tylenol, BP Deepwater Horizon) con los impactos financieros documentados y los factores que determinaron si la empresa se recuperó o no.
- Propón cómo usar análisis de sentimiento y datos de redes sociales para construir un índice de reputación en tiempo real, y modelar cómo la evolución de ese índice predice la recuperación de ventas en los trimestres posteriores.

MÓDULO 3 — Gestión financiera durante la crisis activa
- Diseña el protocolo de gestión de caja en crisis: qué líneas de crédito de emergencia tener pre-aprobadas, cuánta liquidez mínima mantener disponible, y cuándo activar un proceso de gestión de caja diaria en lugar de semanal.
- Propón cómo comunicar la situación financiera a los grupos de interés financieros durante la crisis: qué decir a los bancos acreedores, a los bonistas si los hay, y a los inversores institucionales para evitar que la crisis operacional desencadene también una crisis de financiación.
- Describe el protocolo de revisión del guidance financiero durante la crisis: ¿cuándo retirar el guidance anual que ya no es válido?, ¿cómo comunicarlo a los analistas de bolsa si la empresa cotiza?, y ¿qué alternativa ofrecer para no aumentar la incertidumbre del mercado?

MÓDULO 4 — Seguros y protección financiera ante crisis
- Diseña el análisis de coberturas de seguros aplicables a distintos tipos de crisis: seguro de responsabilidad civil, seguro de interrupción de negocio, seguro de ciberriesgos, seguro de Directors & Officers (D&O), y seguro de reputación.
- Propón cómo activar correctamente las coberturas de seguro en una crisis para no perder el derecho a indemnización: plazos de notificación, documentación requerida, y coordinación con el broker de seguros desde el primer día de la crisis.
- Describe cómo modelar el net cost de la crisis después del seguro: qué parte cubre el seguro, qué franquicias aplican, y cuál es el coste neto final para la empresa.

MÓDULO 5 — Plan de recuperación financiera post-crisis
- Diseña el plan de recuperación financiera a 12 meses: ¿qué medidas de reducción de costes son necesarias para compensar la caída de ingresos?, ¿qué inversiones en recuperación de reputación generan el mejor ROI?, y ¿cuál es el horizonte realista para volver a los niveles de rentabilidad pre-crisis?
- Propón cómo usar IA para monitorizar la recuperación financiera: indicadores adelantados de que la confianza del cliente se está recuperando (índices de intención de compra, NPS, búsquedas de marca en Google), y su correlación histórica con la recuperación de ingresos.

entregable: Un informe de riesgo financiero de crisis con los modelos de impacto cuantificados, el análisis de coberturas de seguro, y el plan de recuperación financiera.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelar y cuantificar el impacto financiero de crisis corporativas y diseñar estrategias de mitigación con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión legal de crisis corporativas con IA: responsabilidad, comunicados y litigios',
                'description'      => 'Usa IA para gestionar los aspectos jurídicos de una crisis corporativa: análisis de responsabilidad legal, revisión de comunicados de prensa, gestión de demandas colectivas, y coordinación con asesores externos en situaciones de emergencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director Jurídico (General Counsel) con experiencia en la gestión legal de crisis corporativas: accidentes industriales, escándalos de corrupción, ciberataques con fuga de datos, demandas colectivas de consumidores, e investigaciones regulatorias urgentes.

advertencia: Este prompt genera orientación jurídica de carácter informativo. En una crisis real, actúa siempre bajo la dirección de abogados colegiados especializados y consulta con los asesores externos del despacho de referencia de la empresa.

contexto: El departamento jurídico juega un papel crítico en la gestión de crisis corporativas: determina qué puede y no puede decirse públicamente sin crear responsabilidad adicional, gestiona la comunicación con reguladores y autoridades, coordina a los abogados externos en múltiples frentes, y protege la posición legal de la empresa mientras el equipo de comunicación gestiona la narrativa pública.

tarea: Diseña el protocolo de gestión jurídica de crisis para [NOMBRE DE EMPRESA] ante el siguiente escenario: [TIPO DE CRISIS: accidente grave con víctimas en instalación propia / fuga de datos de clientes con posible violación GDPR / escándalo de conducta irregular de directivos / demanda colectiva por producto defectuoso].

ÁREA 1 — Evaluación jurídica de emergencia en las primeras horas
- Diseña el protocolo de evaluación jurídica de las primeras 4 horas de la crisis: qué preguntas debe responder el equipo jurídico antes de que la empresa emita cualquier comunicación pública (¿hay obligación legal de notificar a autoridades regulatorias?, ¿en qué plazo?, ¿la comunicación pública puede usarse como admisión de responsabilidad en un litigio posterior?).
- Propón cómo usar IA para acelerar el análisis inicial de responsabilidad legal: revisión de contratos, pólizas de seguro y normativa aplicable en paralelo, identificación de precedentes jurisprudenciales en casos similares del sector, y mapa de jurisdicciones implicadas si la crisis tiene dimensión internacional.
- Describe el protocolo de preservación de evidencias desde el primer momento de la crisis: qué comunicaciones internas deben archivarse de forma especial, cómo suspender la política habitual de borrado automático de emails, y quién tiene autoridad para hacerlo.

ÁREA 2 — Revisión jurídica de comunicaciones de crisis
- Diseña el flujo de revisión jurídica de comunicados de prensa durante la crisis: qué revisa el equipo jurídico (declaraciones que admiten responsabilidad, promesas que crean compromisos legales, afirmaciones de hecho que podrían ser contradichas), cuánto tiempo tiene el abogado para revisar (en crisis esto se mide en minutos), y cómo priorizar la velocidad frente a la perfección.
- Propón un sistema de frases aprobadas previamente por el equipo jurídico para los tipos de crisis más frecuentes del sector: frases que expresan empatía sin admitir responsabilidad, compromisos de investigación que no prejuzgan el resultado, y afirmaciones sobre medidas de protección adoptadas.
- Describe cómo usar IA para revisar en tiempo real los borradores de comunicados de crisis: identificación de afirmaciones potencialmente problemáticas desde el punto de vista de responsabilidad, sugerencias de reformulaciones jurídicamente más seguras, y alerta sobre compromisos inadvertidos.

ÁREA 3 — Gestión de reguladores y autoridades en crisis
- Diseña el protocolo de comunicación con reguladores durante una crisis: cuándo notificar proactivamente (antes de que el regulador lo descubra por los medios), qué notificar y qué no (en el caso de fuga de datos, qué datos exige el GDPR comunicar a la AEPD en 72 horas), y cómo gestionar la relación con el inspector o funcionario asignado.
- Propón cómo coordinar la respuesta a múltiples reguladores simultáneamente en una crisis con dimensión multijurisdiccional: regulador español, europeo, y autoridades de países donde opera la empresa.
- Describe el protocolo de cooperación con las autoridades de investigación: cuándo cooperar activamente facilita una resolución más rápida y favorable, cuándo es necesario ejercer el derecho de no autoincriminación, y cómo documentar el nivel de cooperación ofrecido.

ÁREA 4 — Gestión de demandas y litigios de crisis
- Diseña el sistema de gestión de la demanda legal masiva post-crisis: cómo centralizar todas las notificaciones de reclamación, cómo priorizar los casos más graves, y cómo coordinar a los abogados externos encargados de la defensa.
- Propón cómo usar IA para analizar el volumen de reclamaciones y extraer patrones: tipología de daños alegados, distribución geográfica, perfiles de demandantes, y estimación de la exposición económica total de la empresa.
- Describe la estrategia de resolución de demandas: ¿cuándo es preferible llegar a acuerdos extrajudiciales rápidos, cuándo es mejor litigar, y cuándo ofrecer un fondo de compensación voluntaria para evitar demandas colectivas de mayor cuantía?

ÁREA 5 — Lecciones jurídicas post-crisis
- Diseña el análisis post-crisis del departamento jurídico: ¿qué cambios en contratos, pólizas de seguro o procedimientos internos hubieran reducido la exposición legal de la empresa?, ¿qué cláusulas de los contratos con clientes o proveedores funcionaron como protección y cuáles resultaron problemáticas?
- Propón las actualizaciones al manual jurídico de crisis basadas en la experiencia vivida.

entregable: El protocolo de gestión jurídica de crisis listo para su aprobación por el Consejo de Administración y el equipo directivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar los aspectos legales de crisis corporativas con apoyo de IA para minimizar responsabilidad y proteger a la empresa',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en crisis: gestionar el aluvión de contactos con IA y empatía',
                'description'      => 'Diseña los protocolos de atención al cliente durante una crisis corporativa: cómo gestionar el volumen masivo de contactos, responder con empatía y coherencia, y proteger la relación con los clientes afectados cuando la empresa está bajo presión extrema.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Service con experiencia en la gestión de departamentos de atención al cliente durante situaciones de crisis corporativa: retiradas masivas de producto, fallos de servicio generalizados, ciberataques que afectan a datos de clientes, y escándalos de empresa que generan miles de contactos simultáneos de clientes preocupados o indignados.

contexto: El departamento de atención al cliente es el punto de contacto directo entre la empresa y los clientes afectados durante una crisis. En 24-48 horas, el volumen de contactos puede multiplicarse por 10 o por 100. Los agentes, que habitualmente manejan consultas de rutina, se enfrentan de golpe a clientes asustados, indignados o dañados, con guiones que no cubren la situación, y sin información clara sobre lo que la empresa ha decidido hacer. El resultado, sin preparación, es un desastre de comunicación que amplifica la crisis.

tarea: Diseña el sistema de gestión de atención al cliente en crisis para [NOMBRE DE EMPRESA] ante el escenario de [TIPO DE CRISIS: fallo masivo del servicio / retirada de producto por defecto de seguridad / fuga de datos de clientes / escándalo que afecta a la confianza en la marca].

MÓDULO 1 — Activación del modo de atención al cliente de crisis
- Diseña el protocolo de activación del modo crisis en el contact center: quién decide activarlo, qué cambios operativos implica de inmediato (extensión de horarios, llamada al personal de descanso, redistribución de carga por canal), y cómo comunicar al equipo lo que está ocurriendo antes de que empiecen a atender llamadas sobre el tema.
- Define los guiones de emergencia que el equipo necesita en los primeros 30 minutos: qué decir sobre lo que ha ocurrido (solo lo aprobado por comunicación y legal), qué compromisos puede hacer el agente (qué ofrecer a afectados sin necesitar autorización), y cómo manejar a los clientes que insultan o amenazan bajo presión.
- Propón cómo usar IA para generar en tiempo real las FAQ de crisis y distribuirlas al equipo: el sistema recoge las preguntas más frecuentes que llegan por distintos canales, propone respuestas consistentes con el mensaje oficial de la empresa, y las pone a disposición del agente durante la conversación.

MÓDULO 2 — Gestión del volumen masivo de contactos
- Diseña la estrategia de triaje de contactos durante la crisis: cómo clasificar los casos por urgencia (afectado directamente con daño económico, afectado que necesita información urgente, cliente preocupado que no ha sido afectado, periodista o influencer que se hace pasar por cliente), y cómo enrutar cada categoría al canal y al agente adecuado.
- Propón el sistema de autoservicio de crisis: qué información poner en la página de crisis del website para que el cliente encuentre la respuesta sin necesitar contactar, qué preguntas puede resolver el chatbot de IA con las respuestas oficiales aprobadas, y cuándo el chatbot debe transferir al humano sin intentar resolver.
- Describe cómo gestionar las redes sociales como canal de atención al cliente durante la crisis: quién monitoriza, quién responde, qué respuestas se dan en público vs. en privado, y cómo evitar que una respuesta pública equivocada amplifique la crisis.

MÓDULO 3 — Comunicación empática bajo presión extrema
- Diseña el programa de formación de emergencia para agentes que van a atender clientes afectados por la crisis: cómo escuchar activamente a un cliente indignado, cómo expresar empatía genuina sin admitir responsabilidad legal, cómo manejar las emociones propias durante una llamada difícil, y cuándo escalar.
- Crea las plantillas de respuesta empática para los 5 tipos de cliente más frecuentes en crisis: el cliente asustado, el cliente indignado, el cliente que ha sufrido un daño económico real, el cliente que exige una explicación inmediata que la empresa aún no puede dar, y el cliente que amenaza con ir a los medios.
- Propón cómo usar IA para apoyar al agente durante la conversación de crisis: sugerencias de respuesta en tiempo real según el tono del cliente, alertas cuando la conversación está escalando hacia un conflicto, y recomendación de cuándo ofrecer compensación según el perfil del cliente y la gravedad del caso.

MÓDULO 4 — Gestión de compensaciones y resolución de casos
- Diseña el sistema de autorización de compensaciones durante la crisis: qué puede ofrecer el agente sin preguntar (descuento, crédito, reembolso hasta X euros), qué necesita autorización del supervisor (compensación superior, envío de producto de sustitución urgente), y qué requiere aprobación de la dirección (compensación por daños morales, acuerdos de confidencialidad).
- Propón cómo documentar cada caso de crisis de forma que la empresa tenga registro completo para el análisis posterior, el proceso legal si llega, y el aprendizaje para futuras crisis.
- Describe el sistema de seguimiento de casos abiertos durante la crisis: cómo asegurar que ningún cliente afectado queda sin respuesta, cómo priorizar los casos más urgentes, y cómo cerrar los casos de forma satisfactoria cuando la situación se normaliza.

MÓDULO 5 — Recuperación de la relación con el cliente post-crisis
- Diseña el plan de recuperación de la relación con clientes afectados en los 30 días posteriores a la crisis: cuándo contactarles proactivamente, qué decirles, qué ofrecer para demostrar que la empresa ha aprendido y mejorado, y cómo medir si la relación se ha recuperado.
- Propón métricas de éxito del equipo de customer service durante y después de la crisis: tasa de resolución en primer contacto, NPS post-crisis de clientes afectados vs. no afectados, tasa de retención de clientes que contactaron durante la crisis, y tiempo medio de resolución de casos.

entregable: El manual de atención al cliente en crisis con guiones, protocolos de triaje, sistema de compensaciones y plan de recuperación de clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el volumen masivo de contactos de clientes durante una crisis corporativa con empatía y apoyo de IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer de gestión de crisis: servicios de comunicación de emergencia para pymes',
                'description'      => 'Diseña tu negocio freelance como consultor de gestión de crisis para pymes y organizaciones sin departamento de comunicación propio: qué servicios ofrecer, cómo posicionarte y cómo estar disponible cuando un cliente te necesita urgentemente.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio especializado en el desarrollo de servicios freelance en gestión de crisis, comunicación de emergencia y consultoría de reputación para pequeñas y medianas empresas.

contexto: La mayoría de las pymes no tienen ni el presupuesto ni la necesidad de contratar un departamento de comunicación de crisis permanente. Pero cuando les estalla una crisis (un accidente, un artículo negativo viral, una estrella de 1 en Google que se viraliza, un conflicto laboral que sale a la luz), se quedan completamente desprotegidas. Esto crea una oportunidad enorme para freelancers especializados en crisis que pueden activarse en pocas horas y ofrecer la experiencia de una gran consultora a precio accesible.

objetivo: Diseña el modelo de negocio completo del freelancer de gestión de crisis [TU NOMBRE O MARCA] orientado a [TIPO DE CLIENTE: pymes de entre 10 y 200 empleados / restaurantes y hostelería / clínicas y servicios de salud / tiendas online y e-commerce / bufetes de abogados y profesionales liberales].

BLOQUE 1 — Definición de servicios y propuesta de valor
- Diseña el portfolio de servicios de crisis para el mercado de pymes, con precios accesibles y entregables claros:
  1. Auditoría de vulnerabilidades de crisis (4 horas, informe de riesgos y recomendaciones)
  2. Manual de crisis básico (elaboración del plan de emergencia personalizado, 2-3 semanas)
  3. Retainer de guardia de crisis (disponibilidad telefónica 24/7 durante una crisis activa, precio por día o semana)
  4. Simulacro de crisis (sesión de 2 horas con el equipo directivo)
  5. Gestión activa de una crisis en curso (honorarios por horas con mínimo de 8 horas)
- Define tu propuesta de valor central: ¿qué obtiene una pyme contratándote a ti que no podría conseguir llamando a una agencia de PR genérica o intentando gestionar la crisis sola con el equipo de dirección?
- Describe cómo diferenciarte en el mercado de pymes: disponibilidad real cuando la pyme más te necesita (fines de semana, festivos, madrugadas), conocimiento de los recursos y costes realistas del segmento, y trato directo sin intermediarios.

BLOQUE 2 — Modelo operativo del freelancer de crisis
- Diseña tu sistema de disponibilidad 24/7 para clientes en retainer: cómo gestionar la guardia de crisis sin que arruine tu vida personal, qué herramientas usar para recibir la alerta de activación (número de teléfono dedicado, app de guardia), y cómo establecer los límites del servicio en el contrato (qué incluye "disponibilidad 24/7" y qué no).
- Propón el flujo de trabajo de las primeras 4 horas al recibir una llamada de crisis de un cliente: qué preguntas hacer, qué información recopilar, qué primeras acciones realizar mientras llegas (física o virtualmente) al lado del cliente, y cómo priorizar cuando hay múltiples frentes abiertos.
- Describe el stack de herramientas que necesitas para gestionar una crisis de cliente en remoto: monitorización de menciones en tiempo real, plataforma de comunicación segura con el cliente, herramientas de IA para agilizar la redacción de comunicados, y sistema de documentación del caso para el informe post-crisis.

BLOQUE 3 — Captación de clientes y visibilidad de mercado
- Diseña el plan de captación de clientes para el freelancer de crisis que no quiere gastar en publicidad: qué comunidades de empresarios frecuentar (asociaciones empresariales locales, grupos de LinkedIn de directivos de pymes, cámaras de comercio), qué contenido publicar para posicionarte como referente en gestión de crisis para pymes, y cómo generar una red de referidos con abogados de empresa, asesores financieros y gestorías que conocen a sus clientes en el peor momento.
- Propón una estrategia de contenido de crisis para redes sociales: análisis de crisis reales de pymes (sin nombrar a la empresa si es privado), consejos prácticos de prevención de crisis, y casos de éxito (con permiso del cliente) que demuestran el valor de tu trabajo.
- Describe cómo construir autoridad en el sector sin haber gestionado todavía ninguna gran crisis: casos de estudio de crisis públicas analizadas desde el punto de vista de las mejores prácticas, participación en podcasts de emprendimiento, y artículos en medios económicos locales.

BLOQUE 4 — Precios, contratos y gestión del negocio
- Diseña tu estructura de tarifas adaptada al mercado de pymes: precio base por auditoría (accesible para convencer al cliente que no cree que va a tener nunca una crisis), precio del retainer mensual (asequible para que lo mantengan aunque no haya crisis activa), y precio de activación urgente (suficientemente alto para compensar la disponibilidad total que implica, pero justificable para la pyme ante el coste de una crisis no gestionada).
- Crea el contrato tipo de retainer de crisis para pymes: qué incluye la guardia, qué es adicional, tiempo de respuesta garantizado, condiciones de activación, y cláusula de confidencialidad reforzada (porque el cliente te contará información muy sensible en las primeras horas de la crisis).
- Propón cómo gestionar la facturación en crisis: muchos clientes te llamarán en modo pánico y no querrán hablar de contratos hasta después. ¿Cómo proteges tu trabajo jurídicamente y económicamente sin que la negociación del contrato retrase la respuesta a la crisis?

BLOQUE 5 — Desarrollo profesional continuo
- Describe cómo mantenerte actualizado en gestión de crisis: qué libros de referencia leer (Bernstein, Dezenhall, Coombs), qué casos de crisis estudiar cada mes, qué certificaciones o programas de formación en crisis management existen en España y Europa.
- Propón cómo construir una red de colaboradores para los casos más grandes: ¿cuándo necesitas traer a un abogado de empresa, a un experto en ciberseguridad, o a un portavoz entrenado? ¿Con quién puedes co-gestionar una crisis que supera tu capacidad individual?

entregable: Tu propuesta de servicio de retainer de crisis lista para enviar a tu primer cliente potencial, con precio, alcance del servicio y condiciones de activación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar y lanzar servicios freelance de consultoría de gestión de crisis y comunicación de emergencia para pymes',
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
