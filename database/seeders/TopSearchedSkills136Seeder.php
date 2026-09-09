<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills136Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Automatización de marketing con IA',
                'description'      => 'Usa IA para personalizar en tiempo real, predecir el mejor momento de contacto y escalar campañas que antes requerían un equipo completo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing automation y machine learning aplicado al marketing. Voy a describir mi stack actual y mis objetivos de automatización, y necesito que me ayudes a diseñar un sistema de automatización de marketing con IA que vaya más allá de los simples email flows.

Mi situación actual:
[Describe tu stack actual: CRM, ESP, herramientas de analytics, volumen de leads por mes, número de segmentos activos y qué automatizaciones tienes hoy]

Lo que quiero conseguir:
[Explica tus objetivos: ¿personalización 1:1, predicción de churn, optimización del send time, lead scoring dinámico, o todo lo anterior?]

Basándote en esa información, necesito que me ayudes con lo siguiente:

**1. Diagnóstico del estado actual**
Analiza las brechas entre mi stack actual y lo que sería posible con IA. Identifica los tres puntos de mayor impacto donde la IA podría mejorar mis resultados de marketing de forma inmediata.

**2. Arquitectura de personalización en tiempo real**
Diseña un sistema de personalización que funcione en el momento en que el usuario interactúa: qué señales capturar (comportamiento en web, historial de compras, interacciones anteriores con email), cómo procesarlas en tiempo real, qué modelo de IA usar para las recomendaciones y cómo integrarlo con mi ESP o CRM actual.

**3. Predicción del mejor momento de contacto**
Explícame cómo construir o integrar un modelo de send-time optimization: qué datos necesito históricos para entrenarlo, cómo funciona el scoring de propensión de apertura y clic, y cómo implementarlo sin un equipo de data science propio usando herramientas SaaS existentes.

**4. Lead scoring dinámico con IA**
Diseña un sistema de lead scoring que se actualice en tiempo real con cada interacción del lead, no solo con reglas fijas. Incluye: qué eventos usar como señal positiva y negativa, cómo ponderar el decay temporal (un lead que abrió hace 3 meses vale menos que uno de ayer), y cómo integrarlo con mi proceso de handoff a ventas.

**5. Segmentación predictiva**
Describe cómo pasar de segmentos basados en atributos estáticos (empresa, cargo) a segmentos basados en comportamiento y propensión futura: RFM extendido, clustering de comportamiento y modelos de propensión a compra o churn.

**6. Orquestación de campañas con IA**
Diseña un flujo de decisión automática donde la IA decide no solo cuándo contactar, sino qué canal usar (email, SMS, push, paid retargeting), qué mensaje mostrar y cuándo pausar la presión para no quemar al contacto.

**7. Medición y optimización continua**
Define el framework de métricas para este sistema: cómo separar el impacto de la IA del resto de cambios, qué experimentos A/B correr primero, y cómo establecer un ciclo de mejora semanal que no requiera un científico de datos dedicado.

**8. Roadmap de implementación**
Dame un plan por fases de 90 días: qué implementar primero para obtener resultados rápidos, qué requiere más preparación y en qué orden construir las capacidades para no invertir en tecnología que no puedo usar todavía.

**9. Herramientas y costes**
Recomienda las herramientas concretas que mejor encajan con mi stack actual (indica si son SaaS o requieren equipo técnico interno), los costes aproximados y las alternativas open source si el presupuesto es limitado.

**10. Riesgos y errores comunes**
Lista los tres errores más frecuentes al implementar marketing automation con IA (como automatizar procesos rotos, o escalar antes de validar el mensaje) y cómo evitarlos en mi caso concreto.

Al final, dame un resumen ejecutivo de una página que pueda presentar a dirección para justificar la inversión en este sistema.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un sistema de automatización de marketing con IA que personaliza, predice y escala campañas.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Agentes de IA para automatización de tareas',
                'description'      => 'Construye agentes que ejecutan flujos complejos de investigación, redacción y análisis de datos, con las integraciones que los conectan con sistemas reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de sistemas de IA especializado en agentes autónomos y automatización de flujos complejos. Quiero construir un agente de IA que pueda ejecutar tareas de múltiples pasos con mínima intervención humana.

Contexto de mi caso:
[Describe la tarea o flujo que quieres automatizar: ¿investigación de mercado, generación de reportes, análisis de datos, scraping y síntesis de información, o un proceso específico de tu empresa?]

Mi stack técnico:
[Lenguaje de programación principal, APIs disponibles, bases de datos que uso, servicios externos a integrar]

Nivel de autonomía deseado:
[¿Quieres supervisión humana en cada paso, solo en decisiones críticas, o autonomía completa?]

Con ese contexto, necesito tu ayuda para diseñar e implementar el agente:

**1. Diseño de la arquitectura del agente**
Explica qué tipo de arquitectura conviene para mi caso: ReAct (Reasoning + Acting), Plan-and-Execute, o un sistema multi-agente con roles especializados. Justifica la elección basándote en la complejidad de la tarea y el nivel de autonomía requerido.

**2. Definición de herramientas y capacidades**
Lista las herramientas concretas que el agente necesitará: búsqueda web, lectura de archivos, ejecución de código, llamadas a APIs, escritura en bases de datos. Para cada herramienta, explica cómo definirla en el formato de tool-calling del modelo que voy a usar y qué validaciones de seguridad implementar.

**3. Gestión del contexto y la memoria**
Diseña la estrategia de memoria del agente: memoria de trabajo para la sesión actual, memoria episódica para aprender de ejecuciones anteriores y memoria semántica para conocimiento del dominio. Explica qué guardar en vector store, qué en base de datos relacional y qué en el contexto del modelo directamente.

**4. Planificación y descomposición de tareas**
Muéstrame cómo hacer que el agente descomponga tareas complejas en subtareas ejecutables: el prompt de planificación, cómo manejar dependencias entre pasos, y cómo recuperarse cuando un paso falla sin reiniciar todo el proceso.

**5. Integración con sistemas reales**
Dame el código de las integraciones más comunes: lectura de emails, escritura en Google Sheets, llamadas a APIs REST con autenticación, consultas a bases de datos SQL. Incluye el manejo de errores, reintentos y timeouts.

**6. Supervisión humana y puntos de control**
Diseña el sistema de human-in-the-loop: cuándo pausar y pedir confirmación, cómo presentar al humano la situación y las opciones, y cómo retomar la ejecución después de la aprobación. Incluye el logging de decisiones para auditoría.

**7. Evaluación y observabilidad**
Explica cómo instrumentar el agente para saber qué está haciendo en cada momento: logging estructurado de cada acción y su resultado, métricas de latencia y coste por ejecución, y cómo depurar cuando el agente toma una decisión incorrecta.

**8. Seguridad y límites**
Define los guardarraíles del agente: qué acciones nunca debería poder ejecutar de forma autónoma, cómo evitar bucles infinitos o uso excesivo de recursos, y cómo proteger credenciales y datos sensibles que el agente necesita para operar.

**9. Código de implementación**
Escribe el código base del agente en mi lenguaje de programación principal: la clase del agente, el loop de ejecución, el sistema de herramientas y el primer flujo completo de principio a fin. Usa LangChain, LangGraph o código nativo según lo que mejor se adapte a mi stack.

**10. Escalado y despliegue**
Explica cómo pasar de un agente local a uno en producción: containerización, colas de tareas para ejecución asíncrona, múltiples instancias paralelas y el sistema de monitorización para detectar fallos en ejecuciones no supervisadas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar y construir agentes de IA que automatizan flujos complejos con integración a sistemas reales.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Automatización del workflow de diseño',
                'description'      => 'Usa Figma plugins, IA generativa y scripts para automatizar las partes repetitivas del trabajo de diseño y liberar tiempo para lo creativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador senior con experiencia en automatización de procesos de diseño y dominio de herramientas como Figma, plugins de automatización y herramientas de IA generativa para diseño. Quiero optimizar mi workflow de diseño para dedicar menos tiempo a tareas repetitivas.

Mi situación actual:
[Describe tu rol: ¿diseñador de producto, diseñador gráfico, UX researcher? ¿Trabajas en equipo o solo? ¿Cuántos proyectos manejas en paralelo?]

Las tareas que más tiempo me consumen:
[Lista las 5 tareas que más tiempo te llevan: ¿resizing de assets, exportación de variantes, creación de mockups para presentaciones, documentación de componentes, generación de wireframes iniciales?]

Mi stack actual:
[Figma, Sketch, Adobe XD, Illustrator, Photoshop: lo que usas habitualmente y qué plugins ya tienes instalados]

Con ese contexto, ayúdame a construir un workflow automatizado:

**1. Auditoría de tareas automatizables**
Analiza las tareas que describes y clasifícalas en: totalmente automatizables ahora mismo, parcialmente automatizables con supervisión humana, y que requieren criterio creativo y no deben automatizarse. Para las automatizables, ordénalas por impacto en tiempo ahorrado.

**2. Automatización en Figma**
Para las tareas que ocurren en Figma, recomienda plugins específicos con nombre y función concreta: generación de contenido con texto e imágenes reales, exportación por lotes de variantes y tamaños, sincronización con design tokens, y documentación automática de componentes. Para cada plugin, explica exactamente qué parte del proceso elimina.

**3. IA generativa para exploración inicial**
Diseña un flujo de trabajo que use IA generativa (Midjourney, DALL-E, Stable Diffusion o Firefly) para la fase de exploración: cómo formular prompts que generen referencias útiles y no genéricas, cómo pasar de la imagen generada al diseño real en Figma, y cómo documentar el proceso para que el cliente entienda el valor de la exploración.

**4. Scripts de automatización con la API de Figma**
Muéstrame cómo usar la API de Figma para automatizar tareas que no cubren los plugins: exportación programática de assets con nomenclatura automática, generación de variantes de componentes a partir de datos en hoja de cálculo, y actualización de textos en múltiples frames con una sola operación.

**5. Automatización del flujo de revisión y entrega**
Diseña el proceso automático desde que el diseño está listo hasta que el desarrollador lo tiene todo: generación de especificaciones técnicas, exportación de assets en todos los formatos y resoluciones necesarios, creación del changelog de cambios entre versiones y notificación al equipo.

**6. Gestión de assets y biblioteca**
Explica cómo automatizar el mantenimiento de la biblioteca de diseño: detección de componentes duplicados, actualización masiva de estilos cuando cambia el design token, y sincronización entre la biblioteca de Figma y el sistema de diseño en código.

**7. Generación de mockups para presentaciones**
Muéstrame cómo automatizar la creación de presentaciones de diseño: plantillas de presentación que se autocompletan con el diseño actual, mockups de dispositivos que se actualizan al cambiar el diseño base, y generación de prototipos de demostración para stakeholders.

**8. IA para feedback y revisión**
Explica cómo usar IA para acelerar el proceso de revisión: herramientas que detectan inconsistencias de diseño automáticamente, cómo usar modelos de lenguaje para redactar los comentarios de revisión de forma más clara, y cómo categorizar y priorizar el feedback recibido.

**9. Flujo de trabajo semanal automatizado**
Diseña mi semana de trabajo con la automatización en marcha: qué ejecutar al inicio del día automáticamente, qué revisar una vez por semana, y cuántas horas debería ahorrar al mes cuando el sistema esté implementado.

**10. Medición del impacto**
Define cómo medir que la automatización está funcionando: tiempo por tarea antes y después, número de revisiones por proyecto, velocidad de entrega y satisfacción del cliente. Dame la plantilla del registro de tiempo que debo llevar las primeras 4 semanas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Automatizar las partes repetitivas del workflow de diseño para dedicar más tiempo a la creatividad.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'SDR con IA: automatiza la prospección y el primer contacto',
                'description'      => 'Automatiza la investigación de cuentas, la personalización de mensajes y la cadencia que genera reuniones sin parecer un robot.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas B2B y automatización de outbound con amplia experiencia en SDR management y herramientas de sales engagement. Quiero construir un sistema de prospección automatizado con IA que genere reuniones sin sacrificar la personalización.

Mi contexto comercial:
[Describe tu producto o servicio, ticket medio, ciclo de venta aproximado y el perfil de tu cliente ideal (ICP): sector, tamaño de empresa, cargo del decisor]

Mi situación actual como SDR:
[Cuántas cuentas trabajas por semana, qué herramientas usas (CRM, LinkedIn Sales Navigator, herramienta de secuencias), qué tasa de respuesta obtienes hoy y cuántas reuniones generas al mes]

Objetivo:
[¿Quieres aumentar el volumen de prospección, mejorar la tasa de respuesta, reducir el tiempo de investigación por cuenta, o los tres?]

Con ese contexto, diseña mi sistema de SDR con IA:

**1. Investigación de cuentas automatizada**
Diseña el flujo de investigación que ejecuta la IA antes de cualquier contacto: fuentes de datos a consultar (web de la empresa, LinkedIn, noticias recientes, job postings), señales de compra que indican que la cuenta está en el momento adecuado, y cómo estructurar la información recopilada en un brief de cuenta de una página.

**2. Scoring y priorización de cuentas**
Construye el sistema de scoring que decide a qué cuentas contactar primero: criterios de fit con el ICP (ponderados por importancia), señales de intención de compra (el peso que le das a que hayan publicado un puesto relacionado con tu solución), y cómo actualizar el score automáticamente según las interacciones.

**3. Personalización de mensajes a escala**
Explica cómo generar mensajes personalizados para cada cuenta sin que suenen genéricos: el framework del mensaje (problema específico del sector + señal reciente de la cuenta + conexión con tu solución), los prompts para que la IA redacte el primer email, y las reglas para que el mensaje pase el test "¿esto solo se lo podría decir a esta empresa?".

**4. Diseño de la cadencia**
Diseña la secuencia de contactos multicanal (email, LinkedIn, llamada, videomail) con los intervalos exactos, el objetivo de cada touchpoint, y la progresión de mensajes que va de lo desconocido a lo conocido. Incluye cuándo pausar la secuencia si hay señales de desinterés.

**5. Automatización de LinkedIn**
Detalla qué acciones de LinkedIn automatizar (connection requests, mensajes de seguimiento, interacciones con contenido) y cuáles mantener siempre manuales para no violar los términos de servicio ni parecer un bot. Incluye los límites diarios seguros y cómo rotar acciones para no activar restricciones.

**6. Gestión de respuestas y clasificación**
Diseña el sistema de clasificación automática de respuestas: cómo categorizar entre interesado, no es el momento, no es el decisor, competidor activo y rechazo definitivo, y qué acción automática ejecutar en cada caso para mantener la conversación viva o agregar a una lista de nurture.

**7. Métricas y optimización semanal**
Define el dashboard de SDR que miro cada lunes: actividades completadas vs objetivo, tasas de apertura y respuesta por secuencia, número de cuentas en cada etapa del pipeline y el tiempo promedio de respuesta. Incluye cuándo una secuencia merece ser optimizada y cómo hacerlo.

**8. Integración con el CRM**
Explica cómo mantener el CRM limpio sin entrada manual de datos: sincronización automática de actividades desde la herramienta de secuencias, actualización de estados de oportunidad al recibir una respuesta y creación automática de tasks de seguimiento para el AE cuando se agenda una reunión.

**9. Herramientas recomendadas**
Recomienda el stack específico para este sistema (herramienta de secuencias, enriquecimiento de datos, IA para redacción y plataforma de automatización), con costes aproximados por herramienta y las integraciones nativas disponibles entre ellas.

**10. La línea entre automatización y spam**
Explica los límites éticos y prácticos de la automatización en outbound: qué escala dispara los filtros de spam, cómo mantener la reputación del dominio de email, y las señales que indican que tu automatización se ha vuelto contraproducente antes de que el daño sea irreversible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un sistema de prospección SDR automatizado que genera reuniones con personalización real.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Automatización de procesos de producto',
                'description'      => 'Automatiza la recolección de feedback, el análisis de tickets y los reportes de métricas para que el PM pase más tiempo en decisiones y menos en recopilación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en product management y automatización de procesos operativos de producto. Quiero diseñar un sistema que automatice las tareas de recopilación y síntesis de información que me consumen tiempo como PM, para poder dedicarlo a decisiones estratégicas.

Mi contexto como PM:
[Describe el producto que gestionas: B2B o B2C, etapa del producto (early stage, growth, mature), tamaño del equipo y a cuántos stakeholders reportas]

Mis fuentes de información actuales:
[Lista de dónde viene el feedback hoy: Intercom, Zendesk, App Store reviews, entrevistas de usuario, NPS surveys, Slack del equipo, reuniones con ventas]

Las tareas que más tiempo consumen:
[Ejemplo: consolidar el feedback semanal, preparar el reporte de métricas para el all-hands, analizar tickets de soporte para identificar patrones, actualizar el roadmap con la nueva información]

Con ese contexto, diseña mi sistema de automatización:

**1. Central de feedback automatizada**
Diseña el pipeline que recoge feedback de todas las fuentes y lo centraliza: conectores para cada herramienta (Intercom, Zapier, Segment), categorización automática por feature area y tipo de feedback (bug, feature request, UX issue), y la base de datos donde se almacena todo con los metadatos necesarios para filtrar y priorizar.

**2. Análisis de tickets con IA**
Construye el flujo de análisis automático de tickets de soporte: cómo agrupar tickets similares por problema subyacente (no solo por etiqueta manual), cómo extraer el insight accionable de un cluster de tickets y cómo generar automáticamente el resumen semanal de los top 5 problemas por volumen e impacto.

**3. Automatización del reporte de métricas**
Diseña el sistema que genera el reporte de métricas automáticamente: conexión con tus fuentes de datos (Mixpanel, Amplitude, Google Analytics, base de datos), las métricas clave de tu producto, el formato del reporte y el canal de distribución (Slack, email, Notion) con la cadencia adecuada.

**4. Health score del producto**
Crea un health score compuesto que combine múltiples señales (retención, activación, satisfacción NPS, volumen de tickets, velocidad del equipo) en un único número que resume la salud del producto, con alertas automáticas cuando cualquier dimensión cae por debajo del umbral.

**5. Síntesis de entrevistas de usuario**
Diseña el flujo para procesar entrevistas de usuario con IA: transcripción automática, extracción de citas relevantes por tema, identificación de patrones entre entrevistas, y generación del insight document que presenta los hallazgos al equipo de forma accionable.

**6. Automatización del backlog**
Explica cómo mantener el backlog actualizado automáticamente: añadir items desde las fuentes de feedback con la información mínima (título, descripción, fuente, impacto estimado), alertar cuando un item acumula suficiente evidencia para ser priorizado, y archivar automáticamente los que llevan más de 6 meses sin movimiento.

**7. Preparación de meetings automatizada**
Diseña el sistema que prepara automáticamente el contexto para las reuniones recurrentes: sprint planning (métricas de la semana anterior, top feedback, items listos para estimar), steering committee (progreso vs objetivos, riesgos, decisiones necesarias) y reunión con ventas (estado de los deals que dependen del roadmap).

**8. Alertas proactivas**
Define el sistema de alertas que te avisa antes de que un problema se convierta en crisis: qué umbrales de métricas deben disparar una alerta (caída de retención superior al 5%, spike de tickets de soporte, NPS que cae por debajo del target) y cómo enrutar cada alerta al responsable correcto.

**9. Documentación de decisiones automática**
Construye el sistema que documenta las decisiones de producto automáticamente: captura de la decisión desde Slack o la herramienta de gestión del equipo, el contexto y las alternativas consideradas, y el repositorio donde se guardan para consulta futura.

**10. Medición del tiempo recuperado**
Define cómo medir el impacto de la automatización en tu trabajo como PM: horas semanales dedicadas a tareas operativas antes y después, tiempo de respuesta al feedback de usuarios, velocidad en la toma de decisiones y calidad percibida por el equipo. Dame la plantilla del registro de las primeras 8 semanas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar la recopilación y síntesis de información de producto para liberar tiempo de decisión estratégica.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Automatización de RRHH con IA',
                'description'      => 'Screening de CVs, respuesta a candidatos, generación de contratos y los flujos de onboarding que se ejecutan solos mientras el equipo se centra en lo humano.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en automatización de procesos de recursos humanos con experiencia en HR Tech, compliance laboral y gestión del cambio. Quiero diseñar un sistema que automatice los procesos repetitivos de RRHH manteniendo la calidad del trato con candidatos y empleados.

Mi contexto en RRHH:
[Tamaño de la empresa, volumen de contrataciones al mes, sectores en los que contratas, herramientas que usas hoy: ATS, HRIS, herramienta de firma digital]

Los procesos que más tiempo consumen:
[Ejemplo: screening de CVs, respuesta a candidatos en cada etapa, coordinación de entrevistas, generación de contratos, onboarding de documentación]

Mis límites:
[Qué no quieres automatizar por razones de trato humano o compliance: ejemplo, no automatizar el rechazo de candidatos en proceso avanzado]

Con ese contexto, diseña mi sistema de automatización de RRHH:

**1. Screening de CVs con IA**
Diseña el sistema de screening inicial: cómo definir los criterios de evaluación en lenguaje natural (no solo keywords), cómo usar IA para puntuar cada CV contra esos criterios, cómo evitar el sesgo algorítmico y qué información presentar al recruiter para tomar la decisión final de forma eficiente.

**2. Comunicación automática con candidatos**
Construye el flujo de comunicaciones automáticas en cada etapa del proceso: acuse de recibo de la candidatura, invitación a entrevista con enlace de autoscheduling, confirmación de entrevista con agenda y acceso, feedback post-entrevista y cierre (tanto seleccionado como no seleccionado). Incluye el tono y la personalización mínima que hace que no parezca automático.

**3. Coordinación de entrevistas**
Diseña el sistema de coordinación: integración con los calendarios del panel entrevistador, selección automática del slot según disponibilidad, envío de invitaciones, recordatorios 24 horas antes y agenda de la entrevista con el perfil del candidato para cada entrevistador.

**4. Evaluación estructurada de entrevistas**
Construye el formulario de evaluación que se envía automáticamente al entrevistador justo después de la entrevista: las preguntas específicas para el puesto, la escala de valoración, el campo de comentarios cualitativos y el plazo máximo para responder antes de que se active un recordatorio.

**5. Generación de contratos**
Diseña el flujo de generación automática de contratos: las plantillas por tipo de contrato y puesto, los campos variables que se rellenan desde el ATS (nombre, cargo, salario, fecha de incorporación), la revisión legal automática de que todos los campos están completos, y la integración con la herramienta de firma digital.

**6. Onboarding automatizado**
Construye el checklist de onboarding que se ejecuta automáticamente al firmar el contrato: envío de documentación de bienvenida, creación de cuentas en las herramientas corporativas, asignación del buddy o mentor, agenda de la primera semana y recordatorios al manager de cada tarea de su responsabilidad.

**7. Offboarding sistemático**
Diseña el proceso de baja que garantiza que no se queda nada: checklist de revocación de accesos, recuperación de equipos, liquidación de vacaciones, carta de recomendación si aplica y encuesta de salida. Define qué pasos requieren confirmación humana y cuáles pueden ejecutarse automáticamente.

**8. Reporting de RRHH automatizado**
Define el dashboard de métricas que se genera automáticamente: tiempo de cobertura de posiciones, tasa de aceptación de ofertas, coste por contratación, NPS del proceso de candidato y tasa de retención a 90 días. Incluye la cadencia del reporte y los destinatarios.

**9. Compliance y protección de datos**
Explica cómo mantener el compliance en el proceso automatizado: plazos de retención de CVs según el GDPR, consentimiento para el tratamiento de datos personales, trazabilidad de las decisiones de selección para auditorías, y qué documentación conservar de cada proceso completado.

**10. Gestión del cambio con el equipo**
Dame el plan para introducir la automatización en el equipo de RRHH: cómo presentar el sistema sin que parezca que va a quitar trabajo, qué métricas mostrar primero para generar confianza, y cómo recoger el feedback del equipo para mejorar el sistema en las primeras 8 semanas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar los flujos repetitivos de RRHH para que el equipo se centre en el trato humano.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Automatización contable con IA',
                'description'      => 'Conciliación, categorización de gastos, generación de informes y los flujos que reducen el cierre mensual de días a horas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en automatización de procesos contables y financieros con experiencia en fintech, ERPs y herramientas de contabilidad modernas. Quiero diseñar un sistema que automatice las tareas repetitivas del ciclo contable mensual.

Mi situación actual:
[Tamaño de la empresa, volumen de transacciones mensuales, herramientas contables que usas (QuickBooks, Xero, Holded, SAP, A3), y cuántos días te lleva actualmente el cierre mensual]

Los procesos que más tiempo consumen:
[Lista los 5 procesos que más horas te llevan: categorización de gastos, conciliación bancaria, revisión de facturas de proveedores, cierre contable, generación de informes para dirección]

Mi equipo:
[Número de personas en el departamento, nivel técnico del equipo y si tenéis un IT interno que pueda ayudar con integraciones]

Con ese contexto, diseña mi sistema de automatización contable:

**1. Automatización de la conciliación bancaria**
Diseña el flujo de conciliación automática: importación de movimientos bancarios vía Open Banking o CSV, matching automático con los asientos contables usando reglas de importe, fecha y descripción, lista de excepción para los movimientos sin match y el proceso de revisión humana de los descuadres.

**2. Categorización inteligente de gastos**
Construye el sistema de categorización automática: modelo de IA entrenado con el histórico de transacciones de tu empresa, reglas de negocio que complementan al modelo (proveedor X siempre es categoría Y), workflow de revisión para categorías ambiguas y el proceso de aprendizaje continuo cuando el humano corrige una categorización.

**3. Procesamiento de facturas de proveedores**
Diseña el pipeline de facturas: recepción por email o portal de proveedor, extracción automática de datos con OCR e IA (razón social, NIF, importe, impuestos, fecha), validación contra el pedido de compra correspondiente, contabilización automática si todo cuadra, y cola de revisión para las excepciones.

**4. Automatización del cierre mensual**
Construye el checklist de cierre que se ejecuta automáticamente: acumulaciones y periodificaciones recurrentes, amortizaciones de activos fijos, provisiones estándar, conciliación de cuentas intercompany y el informe de estado del cierre que indica qué está completado y qué requiere revisión.

**5. Generación de informes financieros**
Diseña el sistema de reporting automático: P&L mensual con comparativa vs presupuesto y mismo período del año anterior, balance de situación, cash flow y el análisis de desviaciones más relevantes. Define el formato, los destinatarios y la hora exacta de distribución.

**6. Gestión de tesorería automatizada**
Explica cómo automatizar la previsión de tesorería: agregación de saldos de todas las cuentas bancarias en tiempo real, previsión de cobros basada en las facturas emitidas pendientes de cobro, previsión de pagos basada en las facturas de proveedores aceptadas, y alerta automática cuando el saldo disponible en 30 días cae por debajo del umbral de seguridad.

**7. Compliance fiscal automatizado**
Diseña el sistema de compliance: calendario fiscal automático con recordatorios de presentación de modelos (IVA, IS, retenciones), preparación automática de los datos para cada modelo a partir de los asientos contables, y registro de presentaciones con el justificante adjunto.

**8. Integración con el ecosistema de herramientas**
Explica cómo integrar la contabilidad con el resto de sistemas de la empresa: CRM para facturación automática desde el deal cerrado, herramienta de gastos de empleados para la conciliación, e-commerce para el registro de ventas, y el ERP si existe. Define qué integrar vía API nativa y qué necesita middleware.

**9. Auditoría y trazabilidad**
Construye el sistema de trazabilidad que facilita las auditorías: log de cada asiento con su origen (manual, automático, importación), la documentación soporte adjunta a cada transacción, el trail de aprobaciones y las métricas de calidad del proceso (porcentaje de transacciones auto-categorizadas correctamente, tiempo de cierre por mes).

**10. Roadmap de implementación**
Dame el plan de implementación por fases: qué automatizar primero para obtener el mayor ahorro de tiempo con el menor riesgo (spoiler: la conciliación bancaria suele ser la primera), qué requiere migración de datos históricos y cuánto tiempo llevaría tener el sistema completo operativo en mi empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Reducir el cierre mensual de días a horas automatizando los procesos contables repetitivos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Automatización del trabajo legal',
                'description'      => 'Redacción de contratos estándar, revisión de documentos, due diligence y los flujos que permiten al abogado enfocarse en el asesoramiento estratégico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Legal Tech y automatización de despachos de abogados con experiencia en el uso de IA para procesos legales. Quiero diseñar un sistema de automatización para el trabajo legal que reduzca el tiempo en tareas repetitivas sin comprometer la calidad ni el compliance.

Mi perfil:
[Describe tu especialidad legal: derecho mercantil, laboral, inmobiliario, propiedad intelectual, etc. ¿Trabajas en despacho, empresa o como freelance? ¿Cuántos asuntos gestionas en paralelo?]

Los procesos que más tiempo consumen:
[Lista los 5 procesos que más horas te llevan: redacción de contratos estándar, revisión de due diligence, análisis de jurisprudencia, gestión de plazos, generación de informes para el cliente]

Mis herramientas actuales:
[Software de gestión del despacho, herramientas de búsqueda jurídica que usas, plataformas de firma digital, etc.]

Con ese contexto, diseña mi sistema de automatización legal:

**1. Biblioteca de contratos y plantillas inteligentes**
Diseña el sistema de generación de contratos estándar: la biblioteca de plantillas por tipo de contrato, el cuestionario de recogida de datos del cliente que rellena automáticamente los campos variables, las cláusulas condicionales que se incluyen o excluyen según el perfil del asunto, y el workflow de revisión antes de enviar al cliente.

**2. Due diligence automatizada**
Construye el flujo de due diligence: checklist automático según el tipo de operación (compraventa de empresa, fusión, entrada de inversor), asignación de tareas al equipo con plazos, sistema de recogida de documentación del target, y el informe de due diligence que se genera automáticamente a partir de los hallazgos registrados.

**3. Revisión de contratos con IA**
Explica cómo usar IA para revisar contratos de la otra parte: extracción automática de cláusulas clave (limitación de responsabilidad, jurisdicción, rescisión, propiedad intelectual), comparación contra tu posición estándar, identificación de cláusulas inusuales o ausentes, y el informe de revisión con el semáforo de riesgos.

**4. Análisis de jurisprudencia y normativa**
Diseña el flujo de investigación jurídica automatizada: búsqueda en bases de datos (CENDOJ, Westlaw, Tirant), extracción de los precedentes relevantes para el asunto, resumen de la doctrina aplicable y el memo jurídico que estructura los argumentos para el cliente o para el tribunal.

**5. Gestión de plazos y calendarios procesales**
Construye el sistema de gestión de plazos: integración con los sistemas judiciales para importar plazos automáticamente donde sea posible, calendario procesal que se actualiza con cada notificación, alertas escalonadas (15 días, 7 días, 2 días antes del vencimiento) y el protocolo de contingencia cuando un plazo está en riesgo.

**6. Generación de informes para clientes**
Diseña la automatización del reporting al cliente: informe mensual de estado del asunto generado automáticamente a partir de las actividades registradas, alerta de hitos relevantes (señalamiento de juicio, resolución de recurso), y la factura mensual generada a partir de las horas registradas con el desglose de actividades.

**7. Automatización de la gestión documental**
Explica cómo automatizar la organización de documentos: nomenclatura automática de archivos según el tipo de documento y el asunto, clasificación en la estructura de carpetas del caso, extracción de metadatos (fecha del documento, partes, tipo) y el índice documental del expediente que se actualiza automáticamente.

**8. Onboarding de clientes**
Construye el flujo de alta de nuevo cliente: formulario de recogida de datos y conflictos de interés, verificación de identidad (KYC) automática, generación del contrato de encargo profesional, firma digital y creación del expediente en el sistema de gestión del despacho.

**9. Compliance y confidencialidad**
Explica los límites que la IA no debe cruzar en el entorno legal: qué información nunca procesar con herramientas de IA externas, cómo gestionar los datos de clientes cumpliendo con el secreto profesional y el GDPR, y qué advertencias incluir en los documentos generados con IA para mantener la responsabilidad profesional del abogado.

**10. El equilibrio entre automatización y criterio jurídico**
Dame el marco para decidir qué automatizar y qué no: qué tareas legales requieren siempre el criterio del abogado (la estrategia del asunto, la negociación, la relación con el cliente en momentos críticos), qué puede delegar en la IA con revisión posterior, y qué puede ejecutarse de forma completamente automática. Incluye cómo documentar este criterio para el equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatizar el trabajo legal repetitivo para que el abogado se enfoque en el asesoramiento estratégico.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Automatización del ciclo de Customer Success',
                'description'      => 'Health scores automáticos, alertas de churn, QBR decks y los flujos que escalan la atención personalizada sin escalar el equipo proporcionalmente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success Operations y automatización de procesos de CS con experiencia en SaaS B2B. Quiero diseñar un sistema que automatice las tareas operativas del ciclo de CS para escalar la atención personalizada sin aumentar el equipo.

Mi contexto de CS:
[Número de cuentas por CSM, segmentos de clientes que gestionas (enterprise, mid-market, SMB), ARR promedio por cuenta y las métricas de producto que tienes disponibles]

Mis herramientas actuales:
[CRM, plataforma de CS si la tienes (Gainsight, ChurnZero, Totango), herramienta de analytics de producto, plataforma de comunicación con el cliente]

Los procesos que más tiempo consumen:
[Ejemplo: preparación de QBRs, actualización de health scores, seguimiento de onboarding, análisis de riesgo de churn, generación de reportes internos]

Con ese contexto, diseña mi sistema de automatización de CS:

**1. Health score automático y multidimensional**
Diseña el health score que se actualiza en tiempo real sin intervención manual: las dimensiones a medir (adopción del producto, compromiso del equipo del cliente, outcomes alcanzados, satisfacción en encuestas, interacciones de soporte), los pesos de cada dimensión según el segmento, y los umbrales que definen las categorías de salud (verde, amarillo, rojo).

**2. Sistema de alertas de churn**
Construye el sistema de alertas tempranas: las señales de riesgo de churn más predictivas en tu producto (caída de login activos, reducción del uso de features clave, aumento de tickets de soporte, no respuesta a comunicaciones), los umbrales que disparan cada nivel de alerta (informativa, urgente, crítica), y la acción automática recomendada para el CSM en cada caso.

**3. Automatización del onboarding**
Diseña el flujo de onboarding que corre solo: milestones del onboarding con las fechas objetivo para cada uno, check automático de si el cliente ha completado cada milestone usando datos del producto, comunicaciones automáticas que nudgean al cliente cuando se retrasa, y escalado al CSM cuando el retraso supera el umbral de riesgo.

**4. Preparación automática de QBRs**
Construye el sistema que genera el deck de QBR automáticamente: plantilla adaptable al segmento del cliente, población automática de métricas de uso y ROI desde las fuentes de datos, sección de logros del trimestre generada a partir de los milestones completados, y los objetivos del próximo trimestre basados en el plan de éxito del cliente.

**5. Seguimiento de adoption y engagement**
Diseña el dashboard de adoption que el CSM ve en tiempo real: usuarios activos por semana, features adoptadas vs features contratadas, sesiones por usuario y profundidad de uso, con la comparativa vs cohorte similar para contextualizar si el nivel de adoption es normal o preocupante.

**6. Automatización de las comunicaciones de ciclo**
Define qué comunicaciones pueden automatizarse completamente: congratulaciones por hitos de adoption, recordatorios de features no utilizadas, encuestas de NPS en el momento adecuado, y resúmenes mensuales de valor. Define también qué siempre debe venir del CSM de forma personal y por qué.

**7. Gestión de renovaciones**
Construye el flujo de renovación: alerta 180 días antes de la fecha de renovación, análisis automático del riesgo de la cuenta (health score + histórico de interacciones), briefing para el CSM con el argumentario de renovación basado en el valor entregado, y tracking del proceso de negociación en el CRM.

**8. Expansión y upsell automático identificado**
Diseña el sistema de identificación de oportunidades de expansión: señales de que el cliente está listo para un upgrade (uso máximo del plan actual, adopción completa de features del tier, solicitudes de features del tier superior), workflow de notificación al CSM y al AE, y el playbook de conversación para la propuesta de expansión.

**9. Reporting interno automatizado**
Define el reporte semanal de CS que se genera automáticamente para el Head of CS: estado de la cartera por health score, cuentas con alertas activas, renovaciones en riesgo, nuevas incorporaciones al onboarding y métricas de productividad del equipo (touchpoints por cuenta, tiempo de respuesta).

**10. Escalado sin pérdida de personalización**
Dame el marco para escalar el número de cuentas por CSM sin perder la calidad de la relación: qué automatizar para ganar eficiencia, qué personalizar siempre (aunque sea ayudado por IA), y cuál es el ratio máximo de cuentas por CSM en cada segmento antes de que la automatización deje de compensar la pérdida de calidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Escalar la atención de Customer Success con automatización sin aumentar el equipo proporcionalmente.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Automatizar el negocio freelance',
                'description'      => 'Propuestas, facturas, seguimiento de proyectos y los flujos que hacen que el negocio funcione mientras el freelance está trabajando para el cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad especializado en negocios freelance y solopreneur, con experiencia en automatización de los procesos administrativos y comerciales que acompañan al trabajo independiente. Quiero diseñar un sistema que haga funcionar mi negocio en piloto automático en todo lo que no requiere mi talento específico.

Mi perfil freelance:
[Describe tu especialidad: diseñador, desarrollador, consultor, copywriter, etc. Cuántos clientes tienes activos, volumen de facturación mensual y cuántas horas por semana dedicas a tareas no facturables]

Mis herramientas actuales:
[Software de facturación, herramienta de gestión de proyectos, CRM si tienes, y cualquier herramienta de automatización que ya uses]

Lo que más quiero automatizar:
[Lista en orden de prioridad: propuestas, facturación, seguimiento de cobros, onboarding de clientes, seguimiento de proyectos, reporting al cliente, o gestión del tiempo]

Con ese contexto, diseña mi sistema de negocio freelance automatizado:

**1. Generación de propuestas automáticas**
Construye el flujo de propuesta: formulario de descubrimiento que rellena el cliente potencial con los datos del proyecto, sistema que genera automáticamente el borrador de propuesta con el alcance, entregables, plazos y presupuesto basados en las respuestas, y el proceso de revisión y ajuste antes de enviar. Incluye las plantillas para los 3 tipos de proyecto más comunes en tu especialidad.

**2. Facturación y cobros automáticos**
Diseña el sistema de facturación sin fricción: generación automática de la factura al aprobar el proyecto, recordatorios automáticos escalonados de cobro (3 días antes, el día del vencimiento, 7 días después), y el protocolo para cobros problemáticos. Incluye cómo integrar pagos online para reducir el tiempo de cobro.

**3. Onboarding de nuevos clientes**
Construye el proceso de bienvenida que corre solo cuando firma el contrato: email de bienvenida con los próximos pasos, formulario de briefing del proyecto, acceso al espacio de trabajo colaborativo, agenda del kickoff y el checklist interno que garantiza que no te olvidas de nada en el inicio de cada proyecto.

**4. Gestión y seguimiento del proyecto**
Diseña el sistema de tracking del proyecto: tablero de proyecto con las tareas, hitos y plazos, actualizaciones automáticas de estado al cliente cuando se completa cada hito, alerta interna cuando el proyecto se desvía del tiempo estimado, y el proceso de gestión de cambios de alcance con presupuesto adicional.

**5. Comunicación proactiva con el cliente**
Construye el flujo de comunicación que mantiene al cliente tranquilo sin que tengas que recordarlo: actualización de estado los lunes o el día acordado, resumen al final de cada fase con los próximos pasos, y el proceso de escalado cuando hay un problema que requiere una conversación urgente.

**6. Generación de reportes de valor**
Diseña el reporte mensual o por proyecto que muestra el valor entregado: las métricas de resultado conseguidas (no solo los entregables), el tiempo del cliente ahorrado o el ROI estimado, y el documento que usa como base para la conversación de renovación o expansión del proyecto.

**7. CRM y pipeline de oportunidades**
Explica cómo llevar el pipeline sin convertirlo en una carga: qué información mínima registrar de cada contacto y oportunidad, cuándo hacer el seguimiento y con qué mensaje, y cómo identificar en tu red actual quién tiene más probabilidad de ser el próximo cliente antes de necesitar salir a buscar trabajo nuevo.

**8. Contabilidad y gestión fiscal**
Diseña el sistema contable mínimo viable para un freelance: registro automático de ingresos y gastos desde las facturas y extractos bancarios, previsión trimestral de la factura fiscal (IVA, IRPF), y el resumen financiero mensual que te da claridad sobre el estado real del negocio en 10 minutos.

**9. Automatización del marketing personal**
Construye el sistema de presencia mínima que genera leads sin ocupar tu tiempo creativo: el calendario de contenido en LinkedIn con los temas que refuerzan tu expertise, el sistema de reutilización de contenido (un artículo → varios posts → newsletter), y el proceso de seguimiento de las conversaciones que genera el contenido sin perder ninguna oportunidad.

**10. El dashboard del negocio freelance**
Define el panel de control semanal que revisas los lunes en 15 minutos: facturación del mes actual vs objetivo, días de trabajo vendidos vs disponibles en el próximo mes, cobros pendientes por fecha de vencimiento, y las 3 acciones más importantes para el negocio esa semana. Dame la plantilla de Notion, Airtable o la herramienta que prefieras.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Poner el negocio freelance en piloto automático en todo lo que no requiere el talento específico del freelance.',
                'vote_score'       => 45,
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
