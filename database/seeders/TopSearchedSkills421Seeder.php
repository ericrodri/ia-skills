<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills421Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Secuencias de onboarding personalizadas con IA para SaaS',
                'description'       => 'Diseña y automatiza correos, mensajes in-app y flujos de activación adaptados al perfil y comportamiento de cada nuevo usuario usando IA.',
                'prompt_content'    => <<<'EOT'
Eres experto en growth marketing y onboarding de productos SaaS. Tu tarea es diseñar una secuencia completa de activación para nuevos usuarios que maximice el tiempo hasta el primer valor (time-to-value) y reduzca el churn en los primeros 30 días.

Contexto que debes pedirme antes de empezar:
- Nombre del producto y propuesta de valor principal
- Acción clave de activación (el "momento aha": ej. enviar primer reporte, conectar integración, invitar a un colega)
- Segmentos principales de usuario (por rol, tamaño de empresa o caso de uso)
- Canales disponibles: email, in-app messaging, SMS, push, Intercom, etc.

Con esa información, genera lo siguiente:

1. MAPA DE ACTIVACIÓN
   - Define el "momento aha" principal y los micro-momentos previos que llevan a él
   - Identifica los 3 bloqueos más comunes que impiden que un usuario llegue al momento aha
   - Propón métricas clave: tasa de activación, DAU/WAU en semana 1, porcentaje de usuarios que completan setup

2. SECUENCIA DE EMAILS (7 correos en 14 días)
   Para cada correo indica: asunto, preview text, hora de envío recomendada, trigger de envío (temporal vs. comportamental), contenido principal (150 palabras), CTA y criterio de exclusión (si el usuario ya completó X, omitir este correo).
   - Email 1 (hora 0): Bienvenida + próximo paso inmediato
   - Email 2 (día 1, si no completó setup): Recordatorio con beneficio concreto
   - Email 3 (día 3): Caso de éxito de usuario similar
   - Email 4 (día 5, trigger: usó feature A pero no B): Tip avanzado
   - Email 5 (día 7): Check-in de valor + invitación a llamada
   - Email 6 (día 10): Feature destacado menos conocido
   - Email 7 (día 14): Revisión de logros + upsell suave

3. MENSAJES IN-APP
   - 3 tooltips o modales para el primer login (qué mostrar y cuándo ocultarlos)
   - 1 checklist de setup gamificado (máximo 5 pasos, con barra de progreso)
   - 2 nudges comportamentales para usuarios que se estancaron

4. SEGMENTACIÓN Y PERSONALIZACIÓN
   - Cómo adaptar los mensajes según el segmento (al menos 2 variantes por correo clave)
   - Variables de personalización recomendadas: nombre, empresa, caso de uso, progreso en setup
   - Lógica de ramificación: si el usuario completó X en los primeros 2 días, saltar a secuencia avanzada

5. PRUEBAS A/B PRIORITARIAS
   - Top 3 elementos a testear primero (asunto del email 1, longitud del onboarding checklist, timing del modal)
   - Hipótesis, métrica de éxito y tamaño de muestra mínimo para cada prueba

6. REVISIÓN A LOS 30 DÍAS
   - Dashboard de métricas sugerido
   - Señales de alerta temprana de churn (qué comportamiento en días 1-7 predice cancelación)
   - Plan de iteración: qué cambiar si la tasa de activación está por debajo del objetivo

Formato de entrega: documento estructurado con encabezados claros, listo para compartir con el equipo de producto y el desarrollador que implementará los triggers en el ESP o herramienta de onboarding.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Aumentar la tasa de activación de nuevos usuarios en productos SaaS mediante secuencias personalizadas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Automatización de flujos de onboarding con IA y webhooks',
                'description'       => 'Implementa un sistema de onboarding event-driven que reaccione al comportamiento del usuario en tiempo real, usando webhooks, colas y lógica de IA.',
                'prompt_content'    => <<<'EOT'
Eres arquitecto de software especializado en sistemas event-driven y automatización de producto. Tu objetivo es diseñar la arquitectura técnica y el código base para un sistema de onboarding reactivo que personalice la experiencia del usuario en tiempo real.

Antes de generar la solución, necesito que me proporciones:
- Stack tecnológico: lenguaje backend, framework, base de datos, ESP (Sendgrid, Postmark, etc.), herramienta de analytics
- Infraestructura de mensajería disponible: Kafka, RabbitMQ, Redis Streams, SQS u otra
- ¿Existe ya un sistema de feature flags? (LaunchDarkly, Unleash, etc.)
- Eventos de usuario que ya se trackean (o que hay que instrumentar desde cero)

Con esa información, entrega lo siguiente:

1. ARQUITECTURA DEL SISTEMA
   - Diagrama de flujo en texto (formato ASCII o Mermaid) que muestre: fuente de evento → cola → worker → acción
   - Componentes: Event Collector, Event Bus, Onboarding Engine, Action Executor, State Store
   - Decisión de almacenamiento de estado: Redis vs. base de datos relacional con justificación
   - Manejo de idempotencia: cómo evitar que un mismo evento dispare la misma acción dos veces

2. CATÁLOGO DE EVENTOS
   - Define los 15 eventos de onboarding más importantes (nombre en snake_case, payload JSON de ejemplo, origen del evento)
   - Ejemplos: user_registered, profile_completed, first_integration_connected, invite_sent, first_report_created
   - Distingue entre eventos de comportamiento (acciones del usuario) y eventos temporales (cron jobs)

3. MOTOR DE REGLAS
   - Pseudocódigo o código real del motor de reglas que evalúa: si (evento X ocurre) Y (el usuario está en estado S) → ejecutar acción A
   - Estructura de datos para guardar el estado de onboarding de cada usuario
   - Cómo priorizar acciones cuando múltiples reglas se cumplen al mismo tiempo

4. IMPLEMENTACIÓN DE WORKERS
   - Código de un worker de ejemplo en el lenguaje elegido que: consume el evento, evalúa reglas, ejecuta acción y actualiza estado
   - Manejo de errores y reintentos con backoff exponencial
   - Dead Letter Queue: qué hacer con eventos que fallan repetidamente

5. INTEGRACIÓN CON IA
   - Cómo usar un modelo de lenguaje para: personalizar el copy de los mensajes en tiempo real según el contexto del usuario
   - Prompt template para generar mensajes contextuales con variables (nombre, progreso, bloqueo detectado)
   - Rate limiting y caché de respuestas de IA para no superar costes

6. TESTING Y OBSERVABILIDAD
   - Suite de tests: unitarios para el motor de reglas, de integración para el flujo completo, tests de carga
   - Métricas a exponer: latencia de procesamiento, tasa de error por tipo de evento, cobertura de eventos
   - Alertas recomendadas en Datadog/Grafana/CloudWatch

7. PLAN DE ROLLOUT
   - Cómo migrar gradualmente de un onboarding estático a este sistema event-driven sin interrupciones
   - Feature flags para activar el nuevo sistema por cohorte de usuarios

Entrega el código en bloques separados con comentarios explicativos. Incluye un README de 200 palabras para el equipo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Construir infraestructura técnica para onboarding reactivo y personalizado en tiempo real.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencias de onboarding guiadas por IA',
                'description'       => 'Crea flujos de onboarding visualmente efectivos que reduzcan la fricción, usen IA para adaptar el recorrido y conviertan al usuario nuevo en usuario activo.',
                'prompt_content'    => <<<'EOT'
Eres diseñador de UX especializado en experiencias de producto y onboarding interactivo. Tu misión es diseñar un sistema de onboarding que minimice la fricción cognitiva, guíe al usuario hasta su primer valor y sea adaptable según el perfil detectado.

Información previa que necesito de ti:
- Producto o servicio a diseñar
- Plataforma: web app, móvil (iOS/Android), desktop o híbrida
- Tipo de usuario objetivo: técnico, no técnico, gestor, ejecutivo, etc.
- Tiempo máximo tolerable para el onboarding según investigación existente

Con esos datos, genera:

1. AUDITORÍA DEL ONBOARDING ACTUAL (si existe)
   - Lista de fricciones típicas en onboardings: formularios largos, jerga técnica, pasos innecesarios, falta de contexto
   - Principios de diseño para eliminarlas: progressive disclosure, zero-state design, contextual help

2. ARQUITECTURA DE PANTALLAS
   - Flujo de pantallas en texto estructurado (nombre de pantalla → propósito → decisión de ramificación)
   - Regla de los 3 pasos: cómo reducir cualquier onboarding a máximo 3 pasos iniciales
   - Pantallas opcionales vs. obligatorias: cuáles se pueden posponer al primer uso real

3. COMPONENTES DE DISEÑO
   - Especificaciones para: barra de progreso, tooltips contextuales, empty states, celebration moments (confeti, animación de logro)
   - Microcopy para cada CTA, mensaje de error y estado vacío (tono: amigable, directo, sin jerga)
   - Checklist de accesibilidad: contraste, tamaño de fuente, soporte de teclado, lectores de pantalla

4. PERSONALIZACIÓN CON IA
   - Flujo de branching según respuestas al wizard de setup: si el usuario dice que es "gestor", mostrar plantillas; si es "técnico", mostrar integraciones
   - Cómo usar IA para recomendar el primer caso de uso según industria o rol declarado
   - Diseño de los estados del onboarding: no iniciado, en progreso, completado, reactivado

5. PROTOTIPO EN TEXTO
   - Descripción detallada de cada pantalla del flujo principal (qué ve el usuario, qué puede hacer, qué pasa si no hace nada)
   - Especificaciones de animaciones y transiciones: duración, curva de easing, qué elemento se anima
   - Comportamiento en mobile vs. desktop: diferencias de layout y flujo

6. MÉTRICAS DE DISEÑO
   - KPIs de onboarding desde perspectiva UX: completion rate, time-to-complete, drop-off por paso
   - Cómo instrumentar el diseño para trackear cada interacción (nombres de eventos, propiedades)
   - Protocolo de test de usabilidad: 5 tareas, guía del moderador, criterios de éxito

7. ITERACIÓN Y MEJORA
   - Plan de heatmaps y session recordings para detectar fricciones post-lanzamiento
   - Cuándo y cómo hacer una revisión mayor del onboarding (señales de que hay que rediseñar)

Entrega: documento de diseño con especificaciones listas para trasladar a Figma y al equipo de desarrollo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar flujos de onboarding que maximicen la activación y minimicen la fricción del usuario nuevo.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Activación temprana de clientes B2B con señales de IA',
                'description'       => 'Identifica señales de riesgo y oportunidad en los primeros 30 días de un cliente B2B para intervenir proactivamente y acelerar la adopción.',
                'prompt_content'    => <<<'EOT'
Eres consultor de ventas y customer success especializado en cuentas B2B enterprise y mid-market. Tu objetivo es crear un sistema de detección de señales y playbooks de intervención para los primeros 30 días de vida de un cliente nuevo, el período más crítico para evitar el churn temprano.

Datos que necesito para personalizar la respuesta:
- Tipo de producto: software, servicios profesionales, plataforma, hardware + software
- Ciclo de ventas promedio: corto (<30 días), medio (1-3 meses), largo (>3 meses)
- Número de usuarios por cuenta objetivo: 1-5, 6-50, 50+
- ¿Existe un CSM dedicado por cuenta o es un modelo tech-touch/low-touch?

Con esa información, genera:

1. MODELO DE SEÑALES DE ACTIVACIÓN
   - 10 señales positivas que indican que el cliente va bien (ej. completó setup, invitó a 3+ usuarios, exportó primer reporte)
   - 8 señales de riesgo temprano (ej. no loginó en 7 días, solo 1 de 10 licencias activas, soporte ticket sin resolver)
   - Peso de cada señal: cómo calcular un "health score" de onboarding del 0 al 100
   - Umbral de alerta: en qué puntuación se activa una intervención proactiva

2. PLAYBOOKS DE INTERVENCIÓN
   Para cada nivel de riesgo (verde/amarillo/rojo), define:
   - Quién interviene: AE, CSM, producto, soporte
   - Canal: email, llamada, in-app, Slack Connect
   - Mensaje exacto a enviar (template con variables de personalización)
   - Objetivo de la intervención: ¿qué acción queremos que tome el cliente?
   - Plazo de seguimiento y criterio de éxito

3. CONVERSACIÓN DE DESCUBRIMIENTO POST-VENTA
   - Guía de la llamada de kickoff (60 minutos): agenda, preguntas clave, documentos a entregar
   - Preguntas para identificar el caso de uso principal del cliente (el que justifica la compra)
   - Cómo documentar el "definition of success" acordado con el cliente para usarlo en QBRs

4. COORDINACIÓN VENTAS-CS
   - Qué información debe traspasar el AE al CSM en el handoff (template de traspaso)
   - Cómo involucrar al AE si el cliente tiene riesgo de churn en el mes 1
   - Métricas compartidas entre ventas y CS durante el primer trimestre

5. USO DE IA PARA PERSONALIZACIÓN
   - Cómo usar IA para redactar emails de seguimiento personalizados según el health score y el sector del cliente
   - Plantilla de prompt para generar un plan de onboarding personalizado por industria
   - Automatización de alertas: qué señales deben disparar una notificación automática en Slack o CRM

6. MÉTRICAS DE ÉXITO DEL PROGRAMA
   - KPIs: tasa de activación a 30 días, NPS a 90 días, churn en primer año por cohorte de onboarding
   - Cómo presentar los resultados al VP de Ventas y al CPO en una reunión mensual
   - Dashboard recomendado: qué ver cada día, cada semana, cada mes

Entrega: playbook completo en formato de documento, listo para ser usado por el equipo de ventas y CS.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Detectar señales de riesgo en clientes B2B nuevos e intervenir proactivamente para garantizar la activación.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Optimización del time-to-value con análisis de onboarding IA',
                'description'       => 'Usa IA para analizar datos de onboarding, identificar cuellos de botella y priorizar mejoras que acorten el tiempo hasta el primer valor percibido.',
                'prompt_content'    => <<<'EOT'
Eres product manager especializado en crecimiento de producto y optimización del funnel de activación. Tu misión es analizar el onboarding actual de un producto, identificar los mayores cuellos de botella y proponer un roadmap de mejoras priorizadas por impacto en el time-to-value (TTV).

Antes de comenzar el análisis, necesito:
- Descripción del producto y su propuesta de valor central
- Pasos actuales del onboarding (lista numerada)
- Métricas disponibles: tasas de completado por paso, tiempo en cada paso, drop-off rates
- Herramientas de analytics disponibles: Mixpanel, Amplitude, Heap, PostHog, etc.
- Objetivo de TTV actual vs. deseado (ej. reducir de 7 días a 3 días)

Con esa información, produce:

1. ANÁLISIS DEL FUNNEL ACTUAL
   - Tabla de conversión paso a paso con tasa de drop-off y tiempo promedio en cada paso
   - Identificación del "leaky bucket": el paso con mayor abandono
   - Segmentación del análisis: ¿el drop-off varía por plan, segmento, canal de adquisición o dispositivo?
   - Hipótesis sobre las causas de cada drop-off (basada en el comportamiento observado)

2. MAPA DE VALOR PERCIBIDO
   - Define el "momento aha" primario y los "momentos aha" secundarios
   - Correlación entre completar ciertos pasos y la retención a 30/60/90 días
   - Cálculo del TTV actual: tiempo mediana desde registro hasta primer momento aha
   - Benchmark del sector: ¿cuál es un buen TTV para este tipo de producto?

3. PRIORIZACIÓN DE MEJORAS
   - Matriz de impacto vs. esfuerzo con al menos 10 iniciativas de mejora
   - Quick wins (implementables en menos de 1 sprint) vs. proyectos estratégicos
   - Para cada iniciativa: hipótesis, métrica de éxito, tamaño de muestra mínimo para A/B test, esfuerzo estimado
   - Orden de prioridad recomendado con justificación

4. ROADMAP DE ONBOARDING (90 días)
   - Sprint 1-2: Quick wins de copy y UX sin cambios técnicos
   - Sprint 3-4: Mejoras de flujo y reducción de pasos
   - Sprint 5-6: Personalización y branching por segmento
   - Sprint 7-12: Onboarding guiado por IA y personalización avanzada

5. FRAMEWORK DE EXPERIMENTOS
   - Plantilla de documento de experimento: hipótesis, variantes, métrica primaria, métricas de guardia, duración, criterio de decisión
   - Cómo evitar experimentos contaminados: aislamiento de segmentos, periodos de aprendizaje
   - Cadencia de revisión de experimentos: weekly experiment review con el equipo

6. USO DE IA EN EL ANÁLISIS CONTINUO
   - Cómo usar un modelo de lenguaje para interpretar patrones en los datos de onboarding
   - Automatización del reporte semanal de onboarding con IA
   - Predicción de churn en días 1-7 basada en comportamiento de onboarding

7. COMUNICACIÓN CON STAKEHOLDERS
   - Cómo presentar el estado del onboarding al CEO y al equipo de ventas
   - Métricas de onboarding en el monthly business review
   - Narrativa: "cada punto porcentual de mejora en activación equivale a X en ARR"

Entrega: documento de análisis y roadmap listo para presentar en reunión de producto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Analizar y optimizar el onboarding de producto para reducir el time-to-value y aumentar la retención.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Onboarding de empleados acelerado con asistentes de IA',
                'description'       => 'Diseña un programa de onboarding de nuevos empleados que use IA para personalizar el aprendizaje, responder dudas frecuentes y acelerar la productividad.',
                'prompt_content'    => <<<'EOT'
Eres especialista en People Operations y diseño instruccional. Tu objetivo es crear un programa de onboarding de empleados modernizado con herramientas de IA que reduzca el tiempo hasta la productividad plena y mejore la experiencia del nuevo empleado desde el día cero.

Información necesaria para personalizar el programa:
- Tamaño de la empresa y sector
- Modalidad de trabajo: presencial, remoto, híbrido
- Roles para los que diseñar el onboarding (técnicos, comerciales, operativos, etc.)
- Herramientas de HRIS, LMS o comunicación interna disponibles
- Duración actual del onboarding y principales quejas de nuevos empleados

Con esa información, genera:

1. PROGRAMA DE ONBOARDING DE 90 DÍAS
   - Semana 0 (pre-boarding): qué preparar antes del primer día, documentos a firmar, accesos a configurar
   - Días 1-5 (orientación): agenda hora a hora del primer día, reuniones de presentación, setup técnico
   - Semanas 2-4 (aprendizaje): módulos de formación, shadowing, primeras tareas con supervisión
   - Mes 2 (contribución guiada): primeros proyectos reales, feedback semanal, checklist de competencias
   - Mes 3 (autonomía): objetivos propios, evaluación de onboarding, plan de desarrollo individual

2. ASISTENTE DE IA PARA NUEVOS EMPLEADOS
   - Diseño de un chatbot de onboarding: preguntas frecuentes que debe saber responder (top 30)
   - Base de conocimiento: qué documentos, políticas y procesos debe indexar
   - Cómo escalar al humano correcto cuando el bot no puede responder
   - Integración con Slack, Teams o el canal de comunicación interno

3. PERSONALIZACIÓN POR ROL Y PERFIL
   - Cómo adaptar el onboarding según el departamento, nivel de seniority y modalidad de trabajo
   - Rutas de aprendizaje diferenciadas: técnico junior remoto vs. manager presencial
   - Detección de gaps: cómo identificar áreas donde el nuevo empleado necesita más apoyo

4. MATERIALES DE ONBOARDING
   - Guía de bienvenida: qué incluir (cultura, valores, estructura, procesos clave, glosario interno)
   - Checklist del manager de onboarding: 20 acciones en los primeros 30 días
   - Plantilla de plan de 30-60-90 días personalizado por rol
   - Encuesta de pulso semanal (5 preguntas) para detectar problemas temprano

5. MÉTRICAS DE ÉXITO
   - KPIs de onboarding: tiempo hasta primer contribución, eNPS a 30/90 días, tasa de retención a 6 meses
   - Cómo medir la efectividad del asistente de IA: preguntas respondidas, escalaciones, satisfacción
   - Dashboard de onboarding para RRHH: estado de cada nuevo empleado en tiempo real

6. AUTOMATIZACIONES CON IA
   - Generación automática del plan de 30-60-90 días a partir de la descripción del puesto
   - Resumen semanal automático del progreso del nuevo empleado para el manager
   - Detección de señales de desenganche temprano y alertas al HR Business Partner

Entrega: programa completo con todos los materiales listos para implementar, en formato de documento compartible con managers y el equipo de RRHH.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Modernizar el onboarding de nuevos empleados con IA para acelerar su productividad y mejorar la retención.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Activación de usuarios en productos fintech con IA',
                'description'       => 'Diseña flujos de onboarding para productos financieros digitales que superen la fricción regulatoria (KYC, AML) sin perder usuarios en el camino.',
                'prompt_content'    => <<<'EOT'
Eres experto en producto y crecimiento para empresas fintech. Tu reto específico es diseñar un onboarding que equilibre los requisitos regulatorios (KYC, AML, verificación de identidad) con una experiencia de usuario fluida que minimice el abandono durante el proceso de registro y activación.

Contexto necesario antes de comenzar:
- Tipo de producto fintech: neo-banco, plataforma de inversión, crédito, pagos, seguros, cripto
- Jurisdicción principal de operación (afecta a requisitos regulatorios)
- Nivel de regulación requerido: ¿KYC básico (email + teléfono), estándar (documento + selfie) o reforzado (biometría + prueba de ingresos)?
- Proveedor de verificación de identidad actual o disponible (Jumio, Onfido, Persona, etc.)

Con esa información, genera:

1. FLUJO DE ONBOARDING REGULATORIO OPTIMIZADO
   - Mapeo de todos los pasos de KYC/AML requeridos y cómo presentarlos de forma amigable
   - Principio de "lazy KYC": qué información pedir en el momento mínimo necesario vs. desde el inicio
   - Diseño de la pantalla de carga de documentos: instrucciones claras, ejemplos visuales, errores comunes
   - Gestión de rechazos: qué comunicar al usuario cuando el KYC falla y cómo ofrecer un camino alternativo

2. ESTRATEGIA DE ACTIVACIÓN FINANCIERA
   - Definir el "primer valor financiero": primera transferencia, primer depósito, primer pago, primera inversión
   - Cómo incentivar la primera transacción: cashback, bonificación de bienvenida, acceso a feature premium
   - Flujo de activación de la tarjeta o producto principal: paso a paso con microcopy para cada pantalla
   - Gamificación del primer mes: progreso financiero, logros, comparativas anónimas con usuarios similares

3. COMUNICACIONES DE ONBOARDING
   - Secuencia de SMS y push notifications para los primeros 7 días (momento de envío, copy exacto)
   - Email de bienvenida que explique cómo el producto ayudará al usuario a alcanzar sus objetivos
   - Notificaciones in-app contextuales: cuándo mostrar tips de uso y cómo no resultar invasivo
   - Mensajes de regulación: cómo explicar el KYC sin asustar al usuario (tono transparente y empático)

4. PERSONALIZACIÓN CON IA
   - Cómo usar el perfil financiero del usuario para personalizar el onboarding (primera vez en fintech vs. usuario avanzado)
   - Recomendación de productos o features según el objetivo financiero declarado
   - Detección de abandono en KYC y mensaje de recuperación personalizado

5. SEGURIDAD Y CONFIANZA
   - Elementos de diseño que comunican seguridad: certificaciones, sellos, testimonios
   - Cómo manejar el miedo al fraude: qué explicar sobre protección de datos en el momento adecuado
   - Balance entre seguridad y fricción: qué verificaciones se pueden diferir sin comprometer el cumplimiento

6. MÉTRICAS CLAVE FINTECH
   - KYC completion rate, tiempo mediano de verificación, tasa de rechazo por motivo
   - Tasa de activación financiera (usuarios que hicieron su primera transacción en 7 días)
   - Correlación entre completar onboarding gamificado y LTV a 12 meses

Entrega: documento de estrategia de onboarding fintech con flujos detallados y copy de comunicaciones listo para el equipo de producto y compliance.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar onboarding para productos financieros que cumpla requisitos regulatorios sin perder usuarios.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Onboarding legal y de compliance automatizado con IA',
                'description'       => 'Automatiza el proceso de intake de nuevos clientes, verificación documental y comunicación de obligaciones legales usando IA para agilizar el onboarding en despachos y departamentos legales.',
                'prompt_content'    => <<<'EOT'
Eres abogado especializado en gestión de despachos y tecnología legal. Tu objetivo es diseñar un sistema de onboarding de clientes para un despacho o departamento legal que use IA para acelerar el proceso, minimizar errores y garantizar el cumplimiento normativo desde el primer contacto.

Datos necesarios para personalizar la solución:
- Tipo de práctica legal: corporativo, litigación, familia, inmobiliario, M&A, compliance regulatorio
- Jurisdicción y requisitos de verificación de identidad aplicables (AML, KYC para abogados)
- Software de gestión de despacho actual: Clio, MyCase, Filevine, o sistema propio
- Número de clientes nuevos por mes y quién gestiona actualmente el onboarding

Con esa información, genera:

1. FLUJO DE INTAKE DE CLIENTES CON IA
   - Formulario de intake inteligente: preguntas que se adaptan según el tipo de asunto (condicional logic)
   - Verificación automática de conflictos de interés: cómo automatizar la búsqueda en la base de datos del despacho
   - Verificación de identidad y cumplimiento AML: documentos a solicitar, proceso de verificación, registro de due diligence
   - Carta de encargo automatizada: generación de contrato de servicios a partir de los datos del intake

2. COMUNICACIONES AUTOMÁTICAS
   - Email de confirmación de recepción (inmediato): qué incluir, tono, próximos pasos
   - Secuencia de 3 emails en los primeros 5 días: presentación del equipo, portal de cliente, expectativas del proceso
   - Plantillas de mensajes para los hitos clave del onboarding: documentos recibidos, conflicto verificado, contrato firmado
   - Recordatorios automáticos para documentos pendientes (sin parecer agresivos)

3. PORTAL DEL CLIENTE
   - Funcionalidades mínimas: carga de documentos, firma electrónica, mensajería segura, seguimiento del estado del asunto
   - Experiencia del primer login: tutorial, qué subir primero, cómo comunicarse con el equipo
   - Preguntas frecuentes del cliente respondidas por IA (basadas en el tipo de asunto)

4. ESTANDARIZACIÓN DEL PROCESO
   - Checklist de onboarding legal: 15 pasos desde el primer contacto hasta el inicio del trabajo
   - Roles y responsabilidades: ¿quién hace qué? (recepcionista, paralegal, abogado junior, socio)
   - SLAs internos: tiempos máximos para cada paso del onboarding
   - Control de calidad: quién revisa que el onboarding se completó correctamente

5. USO DE IA PARA EFICIENCIA
   - Resumen automático del intake: el abogado recibe un brief de una página del asunto del cliente
   - Generación de la carta de encargo a partir del formulario (con revisión humana antes de enviar)
   - Clasificación automática del asunto por área de práctica y nivel de complejidad
   - Detección de red flags en el intake que requieren atención especial

6. MÉTRICAS Y MEJORA CONTINUA
   - KPIs del onboarding legal: tiempo desde primer contacto hasta inicio de trabajo, tasa de conversión de consulta a cliente, satisfacción del cliente en el onboarding
   - Encuesta de onboarding al cliente (5 preguntas) y cómo usar el feedback
   - Revisión trimestral del proceso: qué ajustar según los datos

Entrega: sistema completo de onboarding legal con todos los documentos, plantillas y flujos listos para implementar en el despacho.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Agilizar el onboarding de clientes en despachos legales garantizando el cumplimiento normativo con IA.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Reducción de churn en primeros 30 días con IA en CS',
                'description'       => 'Implementa un sistema de detección temprana de riesgo de cancelación y playbooks de intervención de customer success para los primeros 30 días de vida del cliente.',
                'prompt_content'    => <<<'EOT'
Eres director de Customer Success con experiencia en reducción de early churn en productos SaaS. Tu misión es construir un sistema completo de detección de riesgo en el período de onboarding y los playbooks de intervención del equipo de CS para salvar cuentas en riesgo antes de que lleguen a su primera renovación.

Información necesaria para personalizar el sistema:
- Modelo de negocio: B2B, B2C o PLG (product-led growth)
- Segmentación de clientes: enterprise, mid-market, SMB, self-serve
- Herramientas disponibles: CRM (Salesforce, HubSpot), plataforma de CS (Gainsight, ChurnZero, Vitally), analytics de producto
- Señales de comportamiento que ya se trackean en el producto

Con esa información, genera:

1. MODELO DE HEALTH SCORE DE ONBOARDING
   - 12 señales de comportamiento que predicen churn temprano (con peso de 1 a 10 para cada una)
   - Fórmula del health score: cómo combinar las señales en un número de 0 a 100
   - Segmentación por nivel de riesgo: verde (70-100), amarillo (40-69), rojo (0-39)
   - Frecuencia de actualización del health score y quién lo revisa

2. TRIGGERS DE ALERTA AUTOMÁTICOS
   - Lista de 8 eventos que deben disparar una alerta inmediata al CSM (ej. no login en 5 días, cancelación de reunión de kickoff, ticket de soporte P1 sin resolver)
   - Configuración recomendada en Gainsight/ChurnZero/Vitally o similar
   - Priorización de alertas: cómo evitar el "alert fatigue" del equipo de CS
   - Escalación: cuándo involucrar al manager de CS o al AE

3. PLAYBOOKS DE INTERVENCIÓN
   Para cada segmento de riesgo y tipo de señal:
   - Objetivo de la intervención: ¿qué queremos lograr con este contacto?
   - Canal y mensaje recomendado (email, llamada, in-app, video personalizado)
   - Template de email o guía de llamada con preguntas abiertas para descubrir el bloqueo
   - Acciones de seguimiento: qué registrar en el CRM, cuándo hacer follow-up
   - Escalación: si la intervención no funciona en X días, qué hacer a continuación

4. SEGMENTACIÓN DE ESFUERZO DE CS
   - Modelo de cobertura: qué cuentas tienen CSM dedicado, cuáles son tech-touch, cuáles self-serve
   - Reglas de engagement: cuándo pasar de tech-touch a high-touch según el health score
   - Automatizaciones para cuentas self-serve: emails de rescate, in-app prompts, webinars de activación

5. MÉTRICAS Y REPORTING
   - KPIs del equipo de CS en onboarding: tasa de activación a 30 días por CSM, NPS a 30 días, churn temprano por cohorte
   - Dashboard semanal de onboarding: qué ver cada lunes
   - Análisis de churn retrospectivo: cómo investigar los clientes que se fueron y qué señal fue la primera en aparecer

6. CULTURA DE PROACTIVIDAD
   - Cómo entrenar al equipo de CS para ser proactivo en lugar de reactivo
   - Ritmo de cadencias: qué tocar cada semana con cada segmento de cuenta
   - Celebración de éxitos: cómo reconocer al equipo cuando un cliente en riesgo se salva

Entrega: playbook completo de CS para onboarding con health score model, playbooks de intervención y configuración de herramientas, listo para el equipo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Detectar y salvar clientes en riesgo de cancelar durante los primeros 30 días de onboarding.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Onboarding de clientes freelance con flujos IA',
                'description'       => 'Crea un proceso de onboarding profesional para nuevos clientes freelance que automatice el intake, la firma de contratos y la configuración del proyecto con ayuda de IA.',
                'prompt_content'    => <<<'EOT'
Eres freelancer profesional con un negocio consolidado. Tu objetivo es diseñar un sistema de onboarding de nuevos clientes que sea eficiente, profesional y automatizado en lo máximo posible, usando herramientas de IA y automatización para ahorrar tiempo sin perder el toque personal que diferencia tu servicio.

Información que necesito para personalizar el sistema:
- Tipo de servicio freelance: diseño, desarrollo, consultoría, copywriting, marketing, etc.
- Valor promedio de cada proyecto: pequeño (<1.000€), medio (1.000-10.000€), grande (>10.000€)
- Herramientas actuales: gestor de proyectos (Notion, Asana, Trello), facturación (FreshBooks, Wave), firma digital (DocuSign, HelloSign)
- Tiempo que actualmente dedicas al onboarding de cada cliente nuevo

Con esa información, genera:

1. FLUJO COMPLETO DE ONBOARDING EN 5 PASOS
   - Paso 1 - Descubrimiento: formulario de intake con las preguntas clave para entender el proyecto (objetivos, presupuesto, plazos, ejemplos de referencia)
   - Paso 2 - Propuesta: cómo generar una propuesta personalizada con IA en 30 minutos
   - Paso 3 - Contrato: plantilla de contrato por tipo de proyecto con las cláusulas esenciales
   - Paso 4 - Setup del proyecto: configuración del espacio de trabajo compartido, accesos, comunicación
   - Paso 5 - Kickoff: agenda de la llamada de inicio, documentos a preparar, expectativas a alinear

2. FORMULARIO DE INTAKE INTELIGENTE
   - 15 preguntas esenciales para entender el proyecto y al cliente (incluyendo preguntas que revelan red flags)
   - Red flags del cliente: señales de que un proyecto puede ser problemático (cambios frecuentes de opinión, presupuesto irreal, falta de decisor claro)
   - Cómo usar las respuestas del intake para generar automáticamente el brief del proyecto con IA

3. PROPUESTA PROFESIONAL CON IA
   - Estructura de propuesta: portada, resumen ejecutivo, alcance, metodología, inversión, próximos pasos
   - Cómo usar IA para redactar cada sección a partir del intake del cliente
   - Opciones de pricing: cómo presentar 3 opciones (básico, recomendado, premium) para anclar el precio
   - Follow-up de la propuesta: cuándo y cómo hacer seguimiento sin resultar insistente

4. CONTRATO Y TÉRMINOS
   - Cláusulas esenciales: alcance, revisiones incluidas, pago, propiedad intelectual, confidencialidad, resolución de disputas
   - Cómo adaptar el contrato según el tipo y tamaño del proyecto
   - Proceso de firma digital y archivo del contrato firmado

5. COMUNICACIONES AUTOMÁTICAS
   - Email de bienvenida al nuevo cliente: qué incluir, tono, qué esperar en los próximos días
   - Email de confirmación de pago del anticipo: profesional y que transmita confianza
   - Recordatorio del kickoff: agenda, documentos a preparar, enlace a la llamada
   - Check-in de la primera semana: cómo hacer el primer seguimiento de satisfacción

6. HERRAMIENTAS Y AUTOMATIZACIÓN
   - Stack recomendado para automatizar el onboarding (herramientas con versión gratuita o económica)
   - Cómo conectar el formulario de intake → CRM → contrato → proyecto con Zapier o Make
   - Plantillas de Notion/Asana para el espacio del proyecto con el cliente
   - Tiempo estimado de ahorro por cliente con el sistema automatizado

Entrega: sistema completo de onboarding freelance con todos los templates, flujos y automatizaciones listos para implementar esta semana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Crear un onboarding de cliente freelance profesional y automatizado que ahorre tiempo y mejore la experiencia.',
                'vote_score'        => 37,
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
