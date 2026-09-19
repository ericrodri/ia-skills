<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills396Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Automatizar la captura de leads con n8n',
                'description'      => 'Crea flujos de trabajo automáticos para capturar, enriquecer y distribuir leads hacia tu CRM sin intervención manual.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en automatización de marketing con experiencia en n8n, la plataforma de automatización de flujos de trabajo de código abierto. Tu objetivo es enseñar a diseñar y construir un sistema automatizado de captura y gestión de leads que funcione 24/7 sin intervención humana.

**Por qué automatizar la captura de leads**

Cada lead que llega fuera del horario de oficina y no recibe respuesta en los primeros cinco minutos tiene una probabilidad de conversión dramáticamente menor. La automatización con n8n resuelve este problema: el lead llega, se enriquece con datos adicionales, se clasifica según criterios de calificación y se distribuye al comercial correcto en segundos, independientemente de la hora.

**Arquitectura del flujo de captura de leads con n8n**

El flujo típico tiene cinco etapas: captura de la fuente (formulario web, LinkedIn Lead Gen, anuncio de Facebook, etc.), enriquecimiento de datos (añadir información de empresa, cargo y LinkedIn a partir del email), calificación automática (scoring según criterios predefinidos), routing (distribución al equipo correcto según territorio, segmento o valor), y notificación y registro (alerta al comercial y registro en CRM).

**Instrucciones de implementación paso a paso**

Paso 1 — Identificar las fuentes de leads: Haz un inventario de todos los puntos donde capturas leads. Para cada fuente, identifica qué datos recibes y en qué formato. n8n tiene nodos nativos para Typeform, HubSpot Forms, Facebook Lead Ads, LinkedIn Lead Gen y webhooks genéricos.

Paso 2 — Configurar el trigger: Cada flujo en n8n empieza con un nodo trigger. Elige el nodo correspondiente a tu fuente principal. Para formularios propios, usa el nodo Webhook con la URL que proporciona n8n.

Paso 3 — Enriquecimiento de datos: Añade nodos de enriquecimiento. Las integraciones más útiles son Clearbit (datos de empresa y cargo), Hunter.io (verificación de email) y LinkedIn (mediante APIs de terceros). Si no tienes acceso a estas APIs, el nodo HTTP Request de n8n permite conectar con cualquier API REST.

Paso 4 — Lógica de calificación: Usa el nodo IF o Switch de n8n para evaluar criterios de calificación: tamaño de empresa, cargo del lead, sector, fuente de captación. Asigna un score numérico y clasifica como Hot, Warm o Cold.

Paso 5 — Routing y notificación: Según la clasificación, el flujo se bifurca. Los leads Hot van directamente al director comercial con alerta por Slack y WhatsApp. Los leads Warm entran en una secuencia de nurturing. Los Cold se registran en el CRM sin notificación inmediata.

Paso 6 — Registro en CRM: Usa el nodo de HubSpot, Salesforce, Pipedrive o el CRM que uses para crear o actualizar el contacto con todos los datos enriquecidos y el score asignado.

**Consejos de implementación**

Empieza con el flujo más simple posible: solo captura y registro en CRM. Añade complejidad progresivamente. Usa el modo de prueba de n8n para verificar cada nodo antes de activar el flujo. Configura siempre un nodo de manejo de errores para que los leads nunca se pierdan si algo falla.

**Resultado esperado**

Un flujo de n8n funcional que captura leads desde tu fuente principal, los enriquece, los clasifica y los distribuye automáticamente al equipo correcto con notificación inmediata.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatización de generación de leads',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Integrar tu CRM con otras herramientas usando Make',
                'description'      => 'Conecta tu CRM con email, calendario, facturación y herramientas de comunicación para eliminar la entrada manual de datos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en automatización de ventas con experiencia en Make (antes Integromat). Tu objetivo es enseñar a los equipos de ventas a conectar su CRM con el resto del stack tecnológico para eliminar la entrada manual de datos, reducir los errores y liberar tiempo para actividades de alto valor.

**El problema de los datos en silos**

Un comercial típico gasta entre 30% y 40% de su tiempo en tareas administrativas: actualizar el CRM, crear propuestas, registrar llamadas, enviar seguimientos. Cada dato que se introduce manualmente es un dato que puede olvidarse, introducirse con error o simplemente no introducirse porque el comercial estaba ocupado cerrando otra operación. Make resuelve esto conectando las herramientas para que los datos fluyan automáticamente.

**Integraciones de mayor impacto para equipos de ventas**

La primera integración que debes construir es la de email-CRM: cada email enviado o recibido de un contacto se registra automáticamente en el CRM. La segunda es calendario-CRM: cada reunión agendada crea una actividad en el pipeline. La tercera es propuesta-CRM: cuando se crea una propuesta en tu herramienta de documentos, el deal en el CRM avanza de etapa. La cuarta es facturación-CRM: cuando se firma un contrato o se paga una factura, el deal se cierra automáticamente.

**Instrucciones de implementación con Make**

Tarea 1 — Mapeo del flujo manual actual: Antes de automatizar, documenta el proceso actual. ¿Cuándo se actualiza el CRM? ¿Quién lo hace? ¿Qué datos se registran? ¿Qué se olvida frecuentemente? Este mapeo identifica los puntos de mayor impacto para la automatización.

Tarea 2 — Conexión de módulos en Make: Make funciona con módulos que representan acciones en cada aplicación. Para la integración email-CRM, el escenario básico tiene tres módulos: Watch Emails (Gmail/Outlook, el trigger), Search Contact (busca si el remitente existe en el CRM) y Create/Update Record (crea o actualiza el contacto con el email registrado).

Tarea 3 — Configuración de filtros: No todos los emails deben registrarse. Configura filtros en Make para excluir emails internos, newsletters y spam. Usa el módulo Filter de Make entre el trigger y la acción para aplicar condiciones.

Tarea 4 — Manejo de errores y duplicados: Añade lógica para manejar los casos edge: ¿qué pasa si el contacto no existe en el CRM? ¿Se crea automáticamente o se notifica al comercial? ¿Qué pasa si hay dos contactos con el mismo email? Define estas reglas explícitamente en el escenario.

Tarea 5 — Notificaciones de excepción: Para los casos que requieren decisión humana, configura un módulo de Slack o email que notifique al comercial responsable con toda la información necesaria para actuar.

Tarea 6 — Monitorización y logging: Activa el historial de ejecuciones de Make para auditar que los datos fluyen correctamente. Configura alertas para cuando un escenario falla.

**Resultado esperado**

Un conjunto de escenarios de Make que conectan el CRM con email, calendario y facturación, eliminando la entrada manual de datos en los flujos más frecuentes del proceso de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Automatización del proceso de ventas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Automatizar reportes financieros con n8n',
                'description'      => 'Genera reportes financieros automáticos que se consolidan, calculan y distribuyen sin intervención manual usando n8n.',
                'prompt_content'   => <<<'EOT'
Eres un CFO y especialista en automatización financiera con experiencia en la implementación de workflows de reporting automatizado para empresas en crecimiento. Tu objetivo es enseñar a los equipos financieros a usar n8n para construir sistemas de reportes que se generan, consolidan y distribuyen automáticamente.

**El problema del reporting manual en finanzas**

El equipo financiero de una empresa en crecimiento dedica una cantidad desproporcionada de tiempo a tareas de recopilación y formateo de datos: descargar extractos bancarios, actualizar hojas de cálculo, consolidar datos de diferentes sistemas y preparar los mismos informes semana tras semana. Este trabajo es repetitivo, propenso a errores y resta tiempo al análisis que realmente añade valor.

**Flujos de reporting que puedes automatizar con n8n**

Reporte de tesorería diario: extrae saldos de cuentas bancarias vía API bancaria o scraping autorizado, calcula la posición de caja neta y envía un resumen a dirección cada mañana. Cierre mensual: consolida datos de ventas (del CRM), costes (de la plataforma contable) y nóminas (del software de RRHH), genera el P&L del mes y lo distribuye a los stakeholders. Reporte de KPIs financieros: calcula métricas clave como MRR, churn revenue, CAC y LTV a partir de datos del CRM y la plataforma de pagos, y publica el dashboard actualizado en el canal de Slack de dirección.

**Instrucciones de implementación paso a paso**

Paso 1 — Identificar las fuentes de datos: Haz un inventario de todos los sistemas que contienen datos financieros: banco, contabilidad (Holded, QuickBooks, Xero), plataforma de pagos (Stripe, PayPal), CRM y herramientas de gastos. Para cada uno, verifica si tiene API disponible y qué datos puedes extraer.

Paso 2 — Diseñar el flujo de consolidación: Dibuja en papel el flujo antes de construirlo en n8n. Define: qué datos extraes de cada fuente, cómo los combinas (por fecha, por centro de coste, por categoría) y qué cálculos aplicas.

Paso 3 — Configurar los nodos de extracción: Para cada fuente de datos, usa el nodo correspondiente en n8n: nodo de Stripe para datos de pagos, nodo HTTP Request para APIs bancarias o contables, nodo de Google Sheets para datos en hojas de cálculo.

Paso 4 — Transformación y cálculo: Usa el nodo Function de n8n para escribir la lógica de negocio en JavaScript: sumas, diferencias, ratios, comparativas con períodos anteriores. Este nodo permite cálculos complejos sin necesidad de una base de datos externa.

Paso 5 — Generación del reporte: Usa el nodo de Google Slides, Google Docs o una plantilla HTML para generar el reporte formateado con los datos calculados. Alternativamente, actualiza un Google Sheet que sirva como dashboard.

Paso 6 — Distribución automatizada: Configura el nodo de Gmail o Slack para enviar el reporte a los destinatarios correctos, con el formato adecuado para cada canal (PDF adjunto por email, resumen ejecutivo en Slack).

**Seguridad y permisos**

Gestiona las credenciales de las APIs en el sistema de credenciales de n8n, nunca en los nodos directamente. Limita los permisos de las API keys al mínimo necesario (solo lectura cuando sea posible). Configura alertas para detectar si algún flujo falla y los datos no se han consolidado.

**Resultado esperado**

Un conjunto de flujos de n8n que generan y distribuyen automáticamente los reportes financieros más frecuentes, con alertas de error y gestión segura de credenciales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatización de reporting financiero',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Automatizar el onboarding de empleados con Make',
                'description'      => 'Crea un flujo automático que provisioné accesos, envíe bienvenidas y programe tareas de incorporación sin trabajo manual de RRHH.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en People Operations con experiencia en la digitalización y automatización de procesos de RRHH. Tu objetivo es enseñar a los equipos de Recursos Humanos a usar Make para construir un flujo de onboarding de empleados que se ejecute automáticamente desde la firma del contrato hasta el fin del período de prueba.

**Por qué el onboarding manual es una oportunidad perdida**

El onboarding es la primera experiencia del empleado en la empresa. Cuando ese proceso implica emails que se olvidan de enviar, accesos que llegan tarde y tareas que no están claras, el nuevo empleado empieza con la sensación de que la empresa no estaba preparada para recibirle. Make puede transformar esto: el proceso se ejecuta perfectamente cada vez, sin depender de que alguien recuerde hacerlo.

**Fases del onboarding que puedes automatizar**

Pre-onboarding (desde la firma del contrato hasta el primer día): provisión de herramientas, envío de documentación, preparación del puesto de trabajo. Primer día: bienvenida automática, presentación al equipo, agenda del primer día. Primera semana: check-ins automáticos, recordatorios de tareas obligatorias, asignación de buddy. Primeras semanas y período de prueba: seguimiento de objetivos de integración, encuestas de satisfacción, recordatorios de la evaluación del período de prueba.

**Instrucciones de implementación con Make**

Módulo 1 — Trigger de inicio: El flujo comienza cuando se firma el contrato. Esto puede ser un webhook desde tu herramienta de firma digital (DocuSign, Signaturit, HelloSign), o un cambio de etapa en tu ATS (Personio, Factorial, BambooHR).

Módulo 2 — Provisión de accesos: Crea automáticamente la cuenta en Google Workspace o Microsoft 365 con el email corporativo, añade al empleado a los grupos relevantes de Slack o Teams, crea la cuenta en las herramientas principales (Jira, Notion, HubSpot, etc.) usando sus respectivas APIs.

Módulo 3 — Comunicaciones de bienvenida: Envía al nuevo empleado un email de bienvenida personalizado con toda la información del primer día (hora de llegada, persona de contacto, agenda), un mensaje en Slack o Teams de bienvenida al canal del equipo, y el manual de bienvenida en PDF.

Módulo 4 — Creación de tareas y agenda: Crea automáticamente las tareas de onboarding en Asana, ClickUp o Notion asignadas a RRHH y al manager. Crea los eventos de calendario para las reuniones de onboarding y check-ins.

Módulo 5 — Seguimiento automatizado: Configura recordatorios secuenciales usando el módulo Sleep de Make o combinando con la herramienta de calendario: revisión a los 7 días, a los 30 y a los 90 días.

Módulo 6 — Encuestas de satisfacción: Envía automáticamente una encuesta de Typeform o Google Forms al final de la primera semana y al final del período de prueba. Consolida las respuestas en un spreadsheet para el análisis.

**Personalización por perfil**

Configura rutas diferentes según el departamento, la ubicación (presencial, remoto, híbrido) y el nivel de seniority. Make permite bifurcaciones condicionales que adaptan el flujo a cada perfil.

**Resultado esperado**

Un flujo de Make completo que automatiza el onboarding desde la firma del contrato hasta el fin del período de prueba, con provisión de accesos, comunicaciones personalizadas y seguimiento automático.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatización de procesos de RRHH',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Automatizar la publicación en redes sociales con n8n',
                'description'      => 'Programa y publica contenido en múltiples redes sociales de forma automática desde una única fuente de datos con n8n.',
                'prompt_content'   => <<<'EOT'
Eres un Social Media Manager con experiencia en automatización de publicación de contenido para múltiples canales. Tu objetivo es enseñar a construir con n8n un sistema de publicación automatizada que tome el contenido de una fuente centralizada y lo distribuya a las redes sociales correctas en el momento óptimo.

**El problema de la gestión manual de redes sociales**

Gestionar múltiples redes sociales manualmente implica cambiar entre plataformas constantemente, recordar qué se ha publicado dónde, y dedicar tiempo a tareas repetitivas de copia y pegado. Las herramientas de scheduling como Buffer o Hootsuite ayudan, pero requieren trabajo manual de carga. n8n puede automatizar incluso ese paso: el contenido fluye desde donde se crea hasta donde se publica sin intervención humana.

**Arquitectura del sistema de publicación automatizada**

El sistema tiene tres capas: fuente de contenido (dónde vive el contenido antes de publicar), motor de transformación (adapta el contenido a cada red social) y publicación (los nodos que realizan la publicación en cada plataforma).

**Fuentes de contenido compatibles con n8n**

Google Sheets: la forma más sencilla. Una hoja con columnas para texto, imagen, red social, fecha de publicación y estado. Notion database: ideal si usas Notion como gestor editorial. Airtable: más potente para equipos con flujos de aprobación. RSS de un blog: cuando quieres publicar automáticamente nuevos artículos en redes.

**Instrucciones de implementación con n8n**

Paso 1 — Preparar la fuente de contenido: Crea un Google Sheet con las columnas: texto principal, versión LinkedIn, versión Twitter, URL de imagen, etiquetas, red social objetivo, fecha/hora de publicación y estado (pendiente/publicado/error).

Paso 2 — Configurar el trigger de tiempo: Usa el nodo Schedule en n8n para que el flujo se ejecute cada hora o cada 15 minutos. En cada ejecución, el flujo busca en el Sheet los registros con fecha de publicación pasada y estado "pendiente".

Paso 3 — Leer y filtrar el contenido: El nodo de Google Sheets lee todos los registros y el nodo IF filtra los que deben publicarse: fecha de publicación <= ahora y estado = pendiente.

Paso 4 — Transformación por red social: Usa el nodo Switch para bifurcar según la red social objetivo. Para cada rama, aplica la transformación necesaria: acortar URLs, añadir hashtags, formatear el texto según las convenciones de cada plataforma.

Paso 5 — Descarga y preparación de imágenes: Si el contenido incluye imagen, usa el nodo HTTP Request para descargar la imagen desde la URL proporcionada. n8n puede manejar archivos binarios para adjuntarlos a la publicación.

Paso 6 — Publicación en cada plataforma: n8n tiene nodos nativos para Twitter/X y LinkedIn. Para Instagram, Facebook y TikTok, usa el nodo HTTP Request con sus APIs. Tras publicar, actualiza el estado en el Google Sheet a "publicado" y registra la URL del post.

Paso 7 — Manejo de errores: Si una publicación falla, actualiza el estado a "error", registra el mensaje de error y envía una notificación por Slack o email.

**Resultado esperado**

Un sistema de publicación automatizada que lee el contenido de un Google Sheet, lo adapta a cada red social y lo publica automáticamente en el horario programado, actualizando el estado en tiempo real.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatización de social media',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sincronizar datos entre aplicaciones con Make',
                'description'      => 'Mantén datos consistentes entre múltiples aplicaciones de tu stack tecnológico usando Make para sincronización bidireccional.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de integraciones con experiencia en el diseño de sistemas de sincronización de datos entre aplicaciones empresariales. Tu objetivo es enseñar a los equipos técnicos a usar Make para construir sincronizaciones de datos robustas que eliminen los silos de información.

**El problema de los datos inconsistentes entre aplicaciones**

Cuando el mismo dato vive en múltiples sistemas sin sincronización, aparecen inconsistencias: el cliente tiene una dirección en el CRM y otra diferente en la plataforma de facturación. El stock del producto es diferente en la tienda online y en el ERP. El perfil del candidato está actualizado en LinkedIn pero desactualizado en el ATS. Estas inconsistencias generan errores operativos, malas experiencias de cliente y trabajo manual para reconciliar los datos.

**Tipos de sincronización que puedes construir con Make**

Sincronización unidireccional: los datos fluyen siempre de la fuente maestra hacia las aplicaciones secundarias. Es más simple y evita conflictos. Sincronización bidireccional: los cambios en cualquier sistema se propagan al resto. Es más compleja porque requiere gestionar conflictos cuando el mismo dato se modifica en dos lugares a la vez. Sincronización por lotes: se ejecuta periódicamente (cada hora, cada día) y reconcilia todos los datos del período. Sincronización en tiempo real: los cambios se propagan en segundos usando webhooks.

**Instrucciones de implementación con Make**

Etapa 1 — Definir la fuente maestra: Para cada tipo de dato que quieres sincronizar, define cuál es la fuente de verdad. El CRM es la fuente maestra de los datos de cliente. El ERP es la fuente maestra del inventario. Esta decisión simplifica enormemente la lógica de sincronización.

Etapa 2 — Identificar los eventos que disparan la sincronización: Los webhooks son el mecanismo ideal: cuando se crea o actualiza un registro en la fuente maestra, esta envía un webhook a Make. Configura los webhooks en la aplicación fuente para los eventos relevantes (creación, actualización, eliminación).

Etapa 3 — Transformación de datos: Cada aplicación tiene su propio modelo de datos. Usa los módulos Map y Transform de Make para convertir el formato de datos de la fuente al formato que espera el destino. Presta especial atención a los campos con nombres distintos, los tipos de datos diferentes y los campos requeridos que pueden no existir en la fuente.

Etapa 4 — Lógica de upsert: En la aplicación destino, busca primero si el registro ya existe (por email, ID externo u otro identificador único). Si existe, actualiza; si no existe, crea. Este patrón evita duplicados y mantiene la consistencia.

Etapa 5 — Gestión de conflictos: Para sincronizaciones bidireccionales, implementa una estrategia de resolución de conflictos: "el más reciente gana", "la fuente maestra siempre prevalece" o "notificación manual cuando hay conflicto". Registra todos los conflictos para auditoría.

Etapa 6 — Monitorización y alertas: Configura el historial de ejecuciones de Make y crea alertas cuando una ejecución falla. Para datos críticos, implementa un proceso de reconciliación periódica que compare los datos entre sistemas y detecte inconsistencias.

**Resultado esperado**

Un sistema de sincronización de datos con Make que mantiene consistencia entre las aplicaciones más críticas del stack, con gestión de errores, resolución de conflictos y monitorización activa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Integración y sincronización de datos entre sistemas',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Automatizar notificaciones de cliente con n8n',
                'description'      => 'Construye un sistema de notificaciones proactivas que informe a los clientes en los momentos clave de su experiencia de forma automática.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Customer Success con experiencia en la implementación de sistemas de comunicación proactiva con clientes. Tu objetivo es enseñar a los equipos de CS a usar n8n para construir un sistema de notificaciones automáticas que mejore la experiencia del cliente y reduzca el volumen de tickets de soporte reactivo.

**El poder de la comunicación proactiva**

El cliente que recibe información proactiva en el momento correcto tiene una experiencia radicalmente mejor que el cliente que tiene que contactar para preguntar. Las notificaciones proactivas reducen la ansiedad del cliente, construyen confianza y disminuyen el volumen de tickets de soporte porque el cliente ya tiene la información que iba a pedir.

**Tipos de notificaciones que debes automatizar**

Confirmación de compra o registro: inmediatamente después de la acción, con los próximos pasos claros. Actualizaciones de estado: cuando el estado de un pedido, solicitud o proceso cambia. Alertas de hito: cuando el cliente alcanza un hito importante (primera semana de uso, primer mes, renovación próxima). Notificaciones de inactividad: cuando el cliente lleva tiempo sin usar el producto (oportunidad de reenganche). Alertas de riesgo: cuando un indicador de salud del cliente (health score) baja por debajo de un umbral.

**Instrucciones de implementación con n8n**

Configuración 1 — Notificaciones de cambio de estado: El trigger es un webhook desde tu plataforma de gestión (CRM, sistema de tickets, plataforma SaaS) que se activa cuando el estado de un registro cambia. El nodo de condición verifica el nuevo estado y el flujo envía el mensaje correspondiente por el canal preferido del cliente (email, SMS, WhatsApp, notificación push).

Configuración 2 — Alertas de hito temporales: Usa el nodo Schedule para ejecutar el flujo diariamente. El flujo consulta tu base de datos o CRM buscando clientes que cumplan la condición de hito (fecha de registro + 7 días = hoy, o fecha de renovación - 30 días = hoy) y envía el mensaje correspondiente.

Configuración 3 — Notificaciones de inactividad: El flujo diario consulta los logs de actividad y busca clientes sin actividad en los últimos N días. Según el número de días de inactividad, el mensaje varía: un recordatorio amable a los 7 días, una oferta de ayuda a los 14 días y una alerta al Customer Success Manager a los 21 días.

Configuración 4 — Personalización de mensajes: Usa el nodo Function de n8n para personalizar el contenido de cada notificación con los datos del cliente: nombre, nombre de empresa, nombre del plan, fecha de renovación, nombre del CSM asignado. Los mensajes personalizados tienen tasas de apertura y respuesta mucho más altas.

Configuración 5 — Gestión de preferencias: Respeta las preferencias de comunicación del cliente. Antes de enviar cualquier notificación, verifica en el CRM si el cliente ha optado por no recibir ese tipo de comunicación y si tiene un canal preferido.

Configuración 6 — Registro de comunicaciones: Después de enviar cada notificación, registra en el CRM que se ha enviado: tipo de notificación, fecha, canal y si fue entregada correctamente. Este histórico es valioso para el CSM cuando habla con el cliente.

**Resultado esperado**

Un sistema de notificaciones proactivas en n8n que cubre los momentos clave del customer journey, con personalización, respeto a las preferencias del cliente y registro en el CRM.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Comunicación proactiva con clientes',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Construir un pipeline de ventas automatizado con Make',
                'description'      => 'Automatiza las acciones de seguimiento, calificación y avance de oportunidades en tu pipeline de ventas usando Make.',
                'prompt_content'   => <<<'EOT'
Eres un Sales Operations Manager con experiencia en la implementación de procesos de ventas automatizados en empresas de rápido crecimiento. Tu objetivo es enseñar a los equipos de ventas a usar Make para construir un pipeline que avance automáticamente, con las acciones correctas en el momento correcto, sin depender de la memoria o disciplina individual de cada comercial.

**Por qué los pipelines manuales fallan**

Un pipeline de ventas bien diseñado define las etapas y las acciones que deben realizarse en cada una. El problema es que esas acciones dependen de que el comercial las recuerde y las ejecute. En la práctica, los seguimientos se olvidan, las propuestas llegan tarde y los leads fríos nunca reciben el nurturing que los reactivaría. Make automatiza las acciones rutinarias para que el comercial pueda concentrarse en las conversaciones de alto valor.

**Acciones del pipeline que puedes automatizar con Make**

Cuando un lead entra en el CRM: envío de email de respuesta automática, creación de tarea de primer contacto asignada al comercial, notificación por Slack al equipo de ventas. Cuando un deal avanza de etapa: envío de materiales relevantes para esa etapa (cases studies, propuesta, contrato), actualización del forecast en el spreadsheet del equipo, notificación al manager. Cuando un deal lleva X días sin actividad: recordatorio automático al comercial, alerta al manager si supera otro umbral. Cuando se gana un deal: notificación al equipo de implementación o CS, creación del proyecto en la herramienta de gestión de proyectos, actualización del dashboard de ventas.

**Instrucciones de implementación con Make**

Bloque 1 — Flujo de entrada de nuevos leads: Configura el trigger en tu CRM (HubSpot, Salesforce, Pipedrive) para cuando se crea un nuevo deal o contacto. El flujo envía el email de respuesta, crea la tarea de seguimiento con fecha límite en 24 horas, y notifica al comercial asignado por Slack con toda la información del lead.

Bloque 2 — Flujo de avance de etapa: Cuando un deal cambia de etapa en el CRM, Make detecta el cambio vía webhook y ejecuta las acciones correspondientes a la nueva etapa. Para la etapa "Propuesta enviada": registra la fecha de envío, crea un recordatorio de seguimiento a los 3 días y actualiza el campo de probabilidad de cierre.

Bloque 3 — Flujo de deals sin actividad: Un escenario programado que se ejecuta diariamente consulta el CRM buscando deals sin actividad en los últimos 7 días (para deals en etapas tempranas) o 3 días (para deals en propuesta o negociación). El comercial recibe un recordatorio con el contexto del deal y las acciones sugeridas.

Bloque 4 — Flujo de cierre ganado: Cuando un deal se marca como ganado en el CRM, Make activa la cadena de acciones post-cierre: notificación al equipo de CS con los datos del cliente, creación del proyecto de implementación en Asana o ClickUp, envío del email de bienvenida personalizado, actualización del dashboard de comisiones.

Bloque 5 — Reporting automático: Un escenario semanal consolida los datos del pipeline (número de deals por etapa, valor total, deals ganados y perdidos en la semana) y envía el resumen al equipo por email y Slack.

**Resultado esperado**

Un pipeline de ventas con Make que automatiza las acciones rutinarias de cada etapa, asegura los seguimientos a tiempo y genera reporting automático del estado del pipeline.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatización del proceso de ventas',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatizar backups y archivado de datos con n8n',
                'description'      => 'Implementa flujos automáticos de backup de datos críticos hacia múltiples destinos usando n8n para garantizar la continuidad.',
                'prompt_content'   => <<<'EOT'
Eres un DevOps engineer y administrador de sistemas con experiencia en la implementación de estrategias de backup y recuperación ante desastres. Tu objetivo es enseñar a los equipos técnicos a usar n8n para construir sistemas de backup automatizados que protejan los datos críticos de la empresa.

**Por qué el backup automatizado es no negociable**

Los backups manuales son backups que eventualmente dejan de hacerse. Las causas son siempre las mismas: el proceso es tedioso, no es una prioridad cuando hay trabajo urgente, y nadie lo nota hasta que se necesita recuperar datos que no existen. n8n permite automatizar el proceso completo: desde la extracción de datos hasta la verificación de que el backup se completó correctamente.

**Tipos de backup que puedes automatizar con n8n**

Backup de base de datos: exporta dumps de tu base de datos PostgreSQL, MySQL o MongoDB de forma periódica y los sube a S3, Google Cloud Storage o un servidor SFTP. Backup de archivos de usuario: sincroniza los archivos subidos por usuarios desde tu storage local o S3 hacia un bucket de backup en una región diferente. Backup de configuraciones: exporta las configuraciones de tus herramientas SaaS (Stripe, HubSpot, Notion) a través de sus APIs y las archiva en formato JSON. Archivado de logs: consolida los logs de aplicación, los comprime y los mueve a almacenamiento frío pasado un período de retención.

**Instrucciones de implementación con n8n**

Configuración 1 — Backup de base de datos con PostgreSQL: Usa el nodo Execute Command de n8n para ejecutar pg_dump con los parámetros correctos. El resultado es un archivo SQL que el nodo de S3 sube al bucket de backup con un nombre que incluye la fecha y hora. Configura el nodo Schedule para ejecutar el flujo diariamente a las 3:00 AM.

Configuración 2 — Verificación del backup: Después de subir el archivo, añade un nodo que verifique que el archivo existe en S3 y que su tamaño es mayor que un mínimo esperado (para detectar backups vacíos o corruptos). Si la verificación falla, envía una alerta inmediata por email y Slack.

Configuración 3 — Rotación de backups: Para controlar los costes de almacenamiento, implementa una política de retención. El flujo semanal lista los archivos de backup en S3, identifica los que superan el período de retención (por ejemplo, 30 días) y los elimina o los mueve a una clase de almacenamiento más barata (S3 Glacier).

Configuración 4 — Backup de datos de APIs externas: Para las herramientas SaaS que contienen datos críticos, usa el nodo HTTP Request de n8n para llamar a sus APIs de exportación y guarda el resultado en S3. Stripe tiene una API de exportación de transacciones, HubSpot permite exportar contactos y deals, y la mayoría de las herramientas modernas tienen endpoints de exportación.

Configuración 5 — Notificación de estado: Configura un resumen diario de los backups ejecutados: cuántos se completaron correctamente, cuántos fallaron, el tamaño total de datos protegidos. Este resumen va al canal de operaciones de Slack y al email del responsable técnico.

Configuración 6 — Test de restauración periódico: Al menos mensualmente, el flujo debe ejecutar una prueba de restauración: descargar el backup más reciente, restaurarlo en un entorno de prueba y verificar que los datos son coherentes. Este paso es el único que garantiza que los backups son realmente utilizables cuando se necesitan.

**Resultado esperado**

Un sistema de backup automatizado con n8n que ejecuta backups periódicos, verifica su integridad, gestiona la rotación y envía informes de estado diarios al equipo técnico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Operaciones y continuidad de sistemas',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Flujo de soporte al cliente automatizado con Make',
                'description'      => 'Crea un sistema de triaje, enrutamiento y respuesta automática de tickets de soporte usando Make para mejorar los tiempos de respuesta.',
                'prompt_content'   => <<<'EOT'
Eres un Head of Customer Support con experiencia en la implementación de sistemas de soporte escalables. Tu objetivo es enseñar a los equipos de atención al cliente a usar Make para construir un flujo de soporte automatizado que mejore los tiempos de primera respuesta, optimice el enrutamiento de tickets y libere al equipo de las tareas más repetitivas.

**El reto del soporte a escala**

Cuando el volumen de tickets crece, el equipo de soporte tiene que elegir entre dos males: contratar más agentes (costoso) o aceptar tiempos de respuesta más largos (perjudicial para la experiencia del cliente). La automatización con Make es una tercera opción: gestionar automáticamente el triaje, el enrutamiento y las respuestas a los casos más frecuentes, para que los agentes humanos puedan concentrarse en los casos que realmente requieren su intervención.

**Componentes del sistema de soporte automatizado**

El sistema se construye en tres capas. Primera capa: recepción y clasificación — todos los tickets entran por un punto único, se clasifican por tipo, urgencia y cliente. Segunda capa: enrutamiento — el ticket va al agente o cola correcta según la clasificación. Tercera capa: respuesta y resolución — los casos simples reciben respuesta automática; los complejos van al agente con contexto prepopulado.

**Instrucciones de implementación con Make**

Módulo 1 — Centralización de canales: Configura Make para recibir tickets de todos los canales: email (Gmail/Outlook), formulario web (Typeform, Gravity Forms), chat (Intercom, Drift) y redes sociales. Todos los tickets se consolidan en tu herramienta de helpdesk (Zendesk, Freshdesk, Intercom) con los datos del canal de origen.

Módulo 2 — Triaje automático: Cuando llega un nuevo ticket, el flujo lo analiza. Si usas IA (puedes integrar la API de OpenAI o Claude en Make), clasifica el tipo de problema: facturación, bug técnico, pregunta de uso, solicitud de feature, queja. Sin IA, usa reglas de palabras clave. Asigna una prioridad según el tipo de cliente (plan, antigüedad, valor del contrato) y el tipo de problema.

Módulo 3 — Enrutamiento inteligente: Según la clasificación, el flujo asigna el ticket al agente o equipo correcto. Los problemas de facturación van al equipo de billing. Los bugs técnicos van al soporte de nivel 2. Las preguntas de uso van al equipo de CS. Balancea la carga entre agentes disponibles o según especialización.

Módulo 4 — Respuestas automáticas para casos frecuentes: Para las consultas más frecuentes (restablecimiento de contraseña, información de precios, proceso de cancelación), configura respuestas automáticas que se envían en segundos. El flujo detecta el tipo de consulta y envía la respuesta correspondiente de una biblioteca de respuestas aprobadas.

Módulo 5 — Enriquecimiento de contexto: Antes de asignar un ticket a un agente, el flujo recupera automáticamente el historial del cliente del CRM: tickets anteriores, plan contratado, fecha de renovación, NPS más reciente. El agente recibe el ticket con todo el contexto ya disponible, sin tener que buscarlo manualmente.

Módulo 6 — SLA y escalado automático: Configura alertas de SLA en Make. Si un ticket de alta prioridad lleva más de una hora sin respuesta, el flujo escala automáticamente: notifica al supervisor, reasigna a un agente disponible y añade el ticket a la cola de urgencias.

Módulo 7 — Encuesta de satisfacción post-resolución: Cuando un ticket se cierra, Make envía automáticamente una encuesta de satisfacción (CSAT) al cliente. Las respuestas negativas generan una alerta al supervisor para seguimiento inmediato.

**Resultado esperado**

Un sistema de soporte automatizado con Make que centraliza todos los canales, clasifica y enruta tickets automáticamente, responde los casos más frecuentes en segundos y proporciona contexto completo al agente antes de que abra el ticket.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatización de operaciones de soporte',
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
