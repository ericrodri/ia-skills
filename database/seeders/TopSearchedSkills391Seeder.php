<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills391Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Segmentación avanzada de listas de email para campañas de alto rendimiento',
                'description'      => 'Aprende a dividir tu base de suscriptores en segmentos precisos basados en comportamiento, datos demográficos e historial de compra. La segmentación correcta eleva drásticamente las tasas de apertura y conversión. Este prompt te guía para construir una estrategia de segmentación escalable.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en email marketing con más de diez años de experiencia diseñando estrategias de segmentación para marcas B2C y B2B. Tu objetivo es ayudarme a construir un sistema completo de segmentación de listas de correo electrónico que maximice la relevancia de cada mensaje y aumente las conversiones.

Contexto del proyecto:
Mi empresa [DESCRIBE TU EMPRESA: sector, tamaño de lista, plataforma de email marketing utilizada] tiene una base de suscriptores que actualmente recibe comunicaciones generales. Quiero evolucionar hacia una estrategia de segmentación avanzada.

Paso 1 — Auditoría de datos disponibles:
Enumera los campos de datos más valiosos para segmentar suscriptores. Distingue entre datos de perfil (nombre, ubicación, cargo, empresa), datos de comportamiento (aperturas, clics, historial de navegación web) y datos transaccionales (historial de compras, valor del cliente, frecuencia de compra). Indica qué herramientas de email marketing soportan de forma nativa cada tipo de dato y cuáles requieren integración con CRM o plataforma de e-commerce.

Paso 2 — Diseño de segmentos esenciales:
Crea al menos ocho segmentos estratégicos que toda empresa debería considerar. Para cada segmento indica: nombre del segmento, criterios de inclusión y exclusión, tamaño estimado como porcentaje de la lista total, objetivo de negocio que persigue y tipo de contenido más adecuado. Incluye segmentos como: nuevos suscriptores en período de bienvenida, compradores recientes, clientes de alto valor (VIP), leads fríos sin actividad en 90 días, usuarios que abandonaron el carrito, y suscriptores comprometidos que nunca han comprado.

Paso 3 — RFM para e-commerce:
Explica cómo aplicar el modelo RFM (Recencia, Frecuencia, Valor Monetario) para clasificar suscriptores en cinco grupos: campeones, leales, en riesgo, hibernando y perdidos. Proporciona las fórmulas de puntuación y los rangos de corte recomendados. Muestra cómo traducir cada grupo RFM en mensajes y ofertas específicas.

Paso 4 — Segmentación por engagement:
Diseña una metodología para medir el nivel de compromiso de cada suscriptor a lo largo del tiempo. Considera una escala de 1 a 5 basada en aperturas, clics, tiempo de lectura y conversiones en los últimos 90 días. Explica cómo automatizar la actualización de este score en las plataformas más populares (Klaviyo, Mailchimp, ActiveCampaign, HubSpot).

Paso 5 — Plan de implementación:
Proporciona un plan de cuatro semanas para migrar desde una lista única a un sistema multisegmento. Incluye tareas específicas, responsables sugeridos y criterios de éxito para cada fase.

Formato de entrega:
- Tabla comparativa de segmentos (columnas: nombre, criterios, tamaño, objetivo, contenido)
- Matriz RFM con puntuaciones y mensajes asociados
- Calendario de implementación en formato de lista con fechas relativas
- Lista de KPIs a monitorear durante el primer mes: tasa de apertura por segmento, CTR, tasa de cancelación y revenue por segmento
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar una estrategia de segmentación de email que aumente apertura y conversión',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Integración de triggers de comportamiento en flujos de email automatizados',
                'description'      => 'Implementa automatizaciones de email basadas en acciones específicas del usuario dentro de tu aplicación o sitio web. Los triggers de comportamiento permiten enviar el mensaje correcto en el momento exacto. Este prompt cubre el diseño técnico y editorial de estos flujos.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en integraciones de marketing automation y APIs de email. Necesito diseñar e implementar un sistema de triggers de comportamiento que dispare correos electrónicos personalizados basados en acciones del usuario en nuestra aplicación web.

Contexto técnico:
Nuestra aplicación está construida con [STACK TECNOLÓGICO: ej. Laravel + Vue.js / Node.js + React]. Usamos [PLATAFORMA DE EMAIL: ej. Mailchimp, Brevo, Postmark] y nuestra base de datos es [TIPO DE BD]. Tenemos aproximadamente [NÚMERO] usuarios activos mensuales.

Bloque 1 — Inventario de eventos de comportamiento:
Lista los veinte eventos de usuario más valiosos para disparar emails en una aplicación SaaS o e-commerce. Para cada evento, indica: nombre técnico sugerido del evento (snake_case), descripción del comportamiento, ventana temporal óptima de espera antes de enviar el email, y objetivo del mensaje (activación, retención, upsell, recuperación). Ejemplos de eventos: registro completado, primer login, función clave usada por primera vez, inactividad de 7 días, plan a punto de expirar, pago fallido.

Bloque 2 — Arquitectura de la integración:
Explica tres patrones arquitectónicos para capturar y procesar eventos de comportamiento:
a) Webhooks en tiempo real hacia la API de la plataforma de email
b) Cola de eventos con procesamiento asíncrono (RabbitMQ, Redis, SQS)
c) Batch nocturno con comparación de estados
Para cada patrón, describe pros, contras, complejidad de implementación y casos de uso ideales.

Bloque 3 — Código de ejemplo:
Escribe un fragmento de código en [LENGUAJE PREFERIDO] que demuestre cómo:
1. Registrar un evento de comportamiento cuando el usuario completa una acción clave
2. Enriquecerlo con propiedades del perfil del usuario
3. Enviarlo a la API de la plataforma de email con los atributos de personalización
Incluye manejo de errores, reintentos con backoff exponencial y logging.

Bloque 4 — Diseño del flujo editorial:
Para el evento "usuario inactivo por 7 días", diseña una secuencia de tres emails con: asunto, estructura del cuerpo, CTA principal, tono y criterio de salida del flujo (si el usuario vuelve a estar activo). Incluye las condiciones de filtrado para no enviar el email a usuarios que cancelaron su cuenta o están en período de prueba expirado.

Bloque 5 — Testing y monitoreo:
Describe una estrategia de QA para validar que los triggers se disparan correctamente, los emails llegan en el tiempo esperado y las propiedades de personalización se renderizan sin errores. Incluye las métricas de monitoreo en producción: latencia de disparo, tasa de entrega, tasa de rebote y alertas recomendadas.

Entrega esperada:
- Tabla de eventos con todos los campos descritos
- Diagrama textual del flujo de datos (evento → cola → email)
- Código funcional con comentarios explicativos
- Secuencia editorial completa para el caso de inactividad
- Checklist de testing y monitoreo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar emails automáticos basados en acciones del usuario en una aplicación',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de plantillas de email que equilibran estética y entregabilidad',
                'description'      => 'Crea plantillas de email visualmente atractivas que también superen los filtros de spam y se rendericen correctamente en todos los clientes de correo. El diseño de email tiene restricciones únicas que este prompt aborda en profundidad. Aprende a equilibrar creatividad y rendimiento técnico.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de experiencia de email con experiencia en diseño HTML para múltiples clientes de correo y conocimiento profundo de las limitaciones técnicas del medio. Necesito crear un sistema de plantillas de email que sea visualmente impactante, completamente responsivo y técnicamente óptimo para la entregabilidad.

Contexto del proyecto:
Nuestra marca [DESCRIBE TU MARCA: sector, paleta de colores, tipografía corporativa, tono] necesita un conjunto de plantillas de email para: newsletter semanal, email transaccional de bienvenida, campaña promocional y email de reactivación.

Sección 1 — Principios de diseño para email:
Explica las diez restricciones de diseño que diferencian el email del diseño web estándar. Aborda: soporte limitado de CSS (qué propiedades soporta Outlook, Gmail, Apple Mail), uso de tablas HTML como base de layout, imágenes bloqueadas por defecto en algunos clientes, fuentes web vs. fuentes seguras, modo oscuro automático y cómo defensivamente controlar los colores que el cliente de email invierte. Incluye una tabla de compatibilidad de las propiedades CSS más usadas en los cinco clientes de email con mayor cuota de mercado.

Sección 2 — Estructura base recomendada:
Describe la anatomía de una plantilla de email de alto rendimiento: contenedor exterior con ancho máximo de 600px, cabecera con logo, sección de hero con imagen o bloque de texto, cuerpo principal modular, sección de CTA destacado, footer con enlace de baja y datos legales. Especifica para cada sección el código HTML/CSS recomendado, las alternativas de texto plano y las consideraciones de accesibilidad (atributos alt, contraste mínimo, tamaño de fuente mínimo).

Sección 3 — Optimización para modo oscuro:
Explica cómo implementar soporte de modo oscuro en emails usando media queries y meta-etiquetas específicas. Muestra cómo usar la propiedad color-scheme, cómo añadir clases alternativas para fondos e imágenes en modo oscuro y qué herramientas permiten previsualizar el email en modo oscuro antes de enviarlo.

Sección 4 — Entregabilidad desde el diseño:
Lista los errores de diseño que más frecuentemente disparan filtros de spam: ratio texto-imagen desequilibrado, uso excesivo de mayúsculas, colores rojos en CTA, ausencia de texto plano, imágenes sin alt text. Proporciona las proporciones recomendadas y las mejores prácticas para que el contenido visual no penalice la entregabilidad.

Sección 5 — Sistema de diseño modular:
Diseña un sistema de ocho bloques reutilizables que puedan combinarse para construir cualquier tipo de email: bloque de texto con imagen lateral, bloque de producto (imagen + nombre + precio + CTA), bloque de testimonio, bloque de estadísticas, separador visual, bloque de redes sociales, bloque de artículos relacionados y footer estándar. Para cada bloque, describe su propósito, estructura HTML sugerida y variantes de personalización.

Formato de entrega:
- Tabla de compatibilidad CSS por cliente de email
- Descripción detallada de cada sección de la plantilla base
- Checklist de 20 puntos antes de enviar cualquier campaña
- Sistema de bloques modulares con descripción y casos de uso
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear un sistema de plantillas de email responsivas y optimizadas para entregabilidad',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Secuencias de email de nurturing para ciclos de venta largos',
                'description'      => 'Diseña flujos de email que acompañen al prospecto durante ciclos de compra complejos de semanas o meses. El nurturing efectivo educa, genera confianza y mantiene tu marca en el top of mind hasta que el lead esté listo para comprar. Este prompt te ayuda a construir estas secuencias paso a paso.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de ventas B2B especializado en estrategias de nurturing por email para productos y servicios de ticket alto con ciclos de decisión prolongados. Necesito diseñar una secuencia de emails que convierta leads fríos en oportunidades comerciales cualificadas a lo largo de un período de entre 30 y 90 días.

Contexto del negocio:
Vendemos [DESCRIBE TU PRODUCTO O SERVICIO: precio aproximado, proceso de compra, número de decisores involucrados, principales objeciones frecuentes]. Nuestros leads entran principalmente a través de [FUENTE: descarga de contenido, webinar, formulario web, evento presencial].

Parte 1 — Mapa del viaje del comprador:
Describe las cinco etapas por las que pasa un comprador B2B desde que identifica un problema hasta que firma el contrato: conciencia, consideración, evaluación, decisión y post-compra. Para cada etapa, especifica: las preguntas que se hace el comprador, sus miedos y motivaciones, el tipo de contenido de email más efectivo y el tono adecuado (educativo, consultivo, urgente). Indica cómo identificar en qué etapa se encuentra un lead basándose en su comportamiento digital.

Parte 2 — Secuencia de 12 emails en 60 días:
Diseña una secuencia completa de doce emails distribuidos en 60 días. Para cada email, proporciona:
- Número de día desde la suscripción
- Asunto (con variante A/B sugerida)
- Objetivo principal del email
- Estructura del cuerpo (1 párrafo de apertura, 2-3 bloques de valor, CTA)
- Tipo de contenido adjunto o enlazado (caso de éxito, guía, calculadora, demo, testimonial)
- Condición de salida del flujo (si el lead solicita demo o responde, sale de la secuencia automática)

Parte 3 — Personalización por perfil de comprador:
Muestra cómo adaptar los emails según el cargo del decisor. Crea variantes de asunto y primer párrafo para tres perfiles: CEO o Director General (foco en ROI y riesgo), Director de área funcional (foco en eficiencia y solución del problema), Técnico o evaluador (foco en detalles de implementación y integraciones). Explica cómo usar etiquetas de personalización de la plataforma de email para automatizar estas variantes.

Parte 4 — Manejo de objeciones por email:
Lista las cinco objeciones más comunes en ventas B2B de ticket alto (precio, tiempo de implementación, integración con sistemas actuales, retorno de inversión incierto, preferencia por el proveedor actual) y diseña un email específico para cada una que aborde la objeción de forma directa, honesta y con evidencia.

Parte 5 — Métricas y optimización continua:
Define los KPIs que debes monitorear para esta secuencia: tasa de apertura por email, CTR, tasa de respuesta, número de demos solicitadas, tiempo medio hasta la solicitud de demo, y tasa de conversión de lead a oportunidad. Proporciona los benchmarks de referencia para email B2B y explica cómo usar los datos de las primeras dos semanas para optimizar los asuntos y el timing.

Resultado esperado:
- Tabla del viaje del comprador por etapa
- Secuencia de 12 emails con todos los campos completados
- Variantes de personalización por cargo
- Banco de 5 emails de manejo de objeciones
- Dashboard de métricas con benchmarks B2B
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar una secuencia de nurturing por email para convertir leads fríos en oportunidades de venta',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de lifecycle emails para productos SaaS: de activación a retención',
                'description'      => 'Define la arquitectura completa de comunicación por email a lo largo del ciclo de vida del usuario de un producto SaaS. Desde el onboarding hasta la renovación, cada etapa requiere mensajes específicos. Este prompt te ayuda a diseñar cada flujo con foco en activación, engagement y reducción del churn.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product-led growth y estrategia de lifecycle emails para productos SaaS. Tu tarea es ayudarme a diseñar la arquitectura completa de comunicación por email que acompañe al usuario desde el registro hasta la renovación o expansión de su plan.

Contexto del producto:
Nuestro SaaS [NOMBRE Y DESCRIPCIÓN BREVE] tiene un período de prueba gratuita de [DURACIÓN], planes de [DESCRIBE LOS PLANES] y un ciclo de renovación [MENSUAL / ANUAL]. La tasa de conversión de prueba a pago actual es de [X%] y el churn mensual es de [X%].

Módulo 1 — Onboarding (días 1-14):
Diseña una secuencia de emails de onboarding que lleve al usuario a completar las tres acciones clave que predicen la retención a largo plazo. Primero, explica cómo identificar esas acciones clave (los "momentos aha") a través del análisis de cohortes: los usuarios que realizan estas acciones en los primeros 7 días retienen a tasas significativamente más altas. Luego diseña los emails de cada uno de los primeros siete días: bienvenida con valor inmediato, guía de primer paso, confirmación de progreso, introducción a función avanzada, caso de uso de referencia, invitación a soporte y resumen de progreso antes del fin del primer período.

Módulo 2 — Activación de trial (días 7-14 para usuarios no activados):
Para usuarios que llegaron al día 7 sin completar las acciones clave, diseña una sub-secuencia de rescate de 5 emails. Incluye: email de diagnóstico con pregunta directa sobre obstáculos, oferta de sesión de onboarding personalizada, caso de éxito de un cliente similar, simplificación del camino (reducir pasos para llegar al valor), y email final de "última oportunidad" antes del fin del trial.

Módulo 3 — Conversión (día 12-14):
Diseña tres emails de conversión para el final del período de prueba: recordatorio de cierre de trial con resumen de lo logrado, email de oferta de conversión con descuento de tiempo limitado si aplica, y email de encuesta para usuarios que no convierten para aprender por qué. Incluye el copy sugerido para el asunto y el cuerpo de cada uno.

Módulo 4 — Retención y expansión (meses 1-6):
Define una cadencia de emails mensuales para clientes de pago que combine: digest de uso mensual personalizado, introducción progresiva de funciones avanzadas, invitación a webinar de usuarios avanzados, solicitud de testimonial o caso de éxito, y comunicación proactiva cuando el usuario no se ha conectado en más de 14 días. Describe cómo personalizar estos emails con datos de uso del producto.

Módulo 5 — Prevención de churn:
Lista las señales de churn más comunes en SaaS (descenso de logins, reducción de uso de funciones clave, apertura de emails de soporte, downgrades) y diseña un flujo de emails de retención que se active automáticamente cuando se detecta una de estas señales. Incluye el escalado a contacto humano cuando el email automatizado no genera respuesta.

Entregable:
- Diagrama textual de la arquitectura completa de lifecycle emails
- Secuencia de onboarding día a día con objetivos y CTA
- Secuencia de rescate de trial para usuarios no activados
- Emails de conversión con copy sugerido
- Plan de retención mensual para clientes de pago
- Señales de churn y flujos de prevención asociados
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar la arquitectura completa de lifecycle emails para un producto SaaS',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación interna por email: plantillas para RRHH que informan y comprometen',
                'description'      => 'Diseña una estrategia de comunicación interna por email que mantenga a los empleados informados, comprometidos y alineados con la cultura de la empresa. Los emails de RRHH tienen desafíos únicos de tono y frecuencia. Este prompt cubre los flujos más críticos del ciclo del empleado.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos con experiencia en comunicación interna y employee experience. Necesito diseñar una estrategia completa de comunicación por email para los momentos más importantes del ciclo de vida del empleado en nuestra organización.

Contexto de la empresa:
Nuestra empresa tiene [NÚMERO] empleados distribuidos en [NÚMERO] oficinas o en modalidad remota/híbrida. El sector es [SECTOR] y la cultura organizacional se caracteriza por [DESCRIBE BREVEMENTE: formal/informal, jerárquica/plana, orientada a resultados/personas]. La herramienta de email interna es [OUTLOOK / GMAIL / OTRA].

Área 1 — Onboarding del nuevo empleado (semanas 1-4):
Diseña una secuencia de bienvenida de cuatro semanas compuesta por ocho emails. Los primeros tres días: bienvenida del CEO o fundador, guía práctica del primer día (accesos, sistemas, personas clave), y email del buddy o mentor asignado. La primera semana: resumen de beneficios y políticas clave. La segunda semana: invitación a reuniones de equipo y recursos de aprendizaje. El primer mes: encuesta de experiencia de onboarding y recordatorio de objetivos del período de prueba. Para cada email, especifica: remitente sugerido, asunto, estructura y tono.

Área 2 — Comunicaciones de cambio organizacional:
Proporciona plantillas para tres tipos de comunicación de cambio que generan más ansiedad en los empleados: reestructuración de equipo, cambio de política de trabajo remoto, y fusión o adquisición. Para cada plantilla, explica cómo estructurar el mensaje siguiendo el modelo ADKAR (Conciencia, Deseo, Conocimiento, Habilidad, Refuerzo) y cómo anticipar y responder a las preguntas más frecuentes de los empleados.

Área 3 — Comunicaciones de reconocimiento y logros:
Diseña cinco tipos de emails de reconocimiento que RRHH puede enviar a toda la empresa o a equipos específicos: reconocimiento de aniversarios laborales, celebración de logros de equipo, presentación de nuevo empleado destacado del mes, reconocimiento por valores corporativos demostrados, y comunicado de ascensos o cambios de rol. Para cada tipo, incluye el formato, el tono y los elementos que debe contener para que el reconocimiento sea percibido como genuino.

Área 4 — Comunicación de bienestar y beneficios:
Crea un calendario trimestral de emails de bienestar que recuerde a los empleados los beneficios disponibles y fomente su uso: seguro médico, días de descanso mental, programas de formación, beneficios flexibles. Incluye asuntos creativos que superen el filtro de "otro email de RRHH que no voy a leer" y proporciona datos o estadísticas que justifiquen el uso de cada beneficio.

Área 5 — Encuestas de pulso y clima laboral:
Diseña los emails de invitación y recordatorio para encuestas de clima laboral trimestrales. Aborda: cómo comunicar el propósito de la encuesta de forma que genere confianza y alta participación, cómo garantizar el anonimato, cómo comunicar los resultados de forma transparente y las acciones que se tomarán como consecuencia. Incluye el asunto y el cuerpo del email de resultados, que es el más crítico para mantener la credibilidad.

Entregables:
- Secuencia de onboarding de 8 emails con estructura completa
- 3 plantillas de comunicación de cambio con modelo ADKAR aplicado
- 5 formatos de emails de reconocimiento
- Calendario trimestral de bienestar con asuntos sugeridos
- Plantillas de encuesta: invitación, recordatorio y comunicación de resultados
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar comunicaciones internas por email para los momentos críticos del ciclo del empleado',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Email marketing para servicios financieros: cumplimiento y conversión',
                'description'      => 'Desarrolla campañas de email para productos financieros que cumplan con las regulaciones del sector y al mismo tiempo generen conversiones. El email en finanzas requiere un equilibrio entre claridad legal y persuasión. Este prompt cubre las mejores prácticas específicas del sector.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en marketing digital para el sector financiero con conocimiento profundo de las regulaciones de comunicación comercial en España y la Unión Europea (RGPD, LSSi-CE, normativa CNMV para productos de inversión, normativa de la Dirección General de Seguros). Necesito diseñar una estrategia de email marketing que sea legalmente correcta, éticamente responsable y comercialmente efectiva.

Contexto del negocio:
Ofrecemos [TIPO DE SERVICIO FINANCIERO: banco, gestora de inversión, fintech de préstamos, correduría de seguros, asesoría financiera independiente]. Nuestra audiencia objetivo es [DESCRIBE: perfil de cliente, nivel de conocimiento financiero, rango de ingresos o patrimonio].

Bloque 1 — Marco regulatorio para email en finanzas:
Explica los requisitos legales más importantes que debe cumplir cualquier comunicación comercial por email en el sector financiero en España: consentimiento previo y explícito bajo RGPD, obligación de incluir baja sencilla, prohibiciones de lenguaje garantista en inversiones, necesidad de advertencias de riesgo en productos financieros complejos, y diferencias entre comunicaciones informativas y comerciales. Indica para qué tipos de productos (cuentas corrientes, fondos de inversión, seguros de vida, créditos al consumo) aplican requisitos adicionales específicos.

Bloque 2 — Lenguaje persuasivo dentro de los límites legales:
Muestra cómo escribir copy financiero que genere interés y confianza sin caer en afirmaciones prohibidas. Proporciona diez ejemplos de transformación de frases problemáticas a frases correctas y efectivas. Por ejemplo: "garantizamos una rentabilidad del 8%" → cómo reformularlo; "sin riesgo para tu dinero" → cómo reformularlo. Incluye la lista de palabras prohibidas o de alto riesgo legal más comunes en el email de servicios financieros.

Bloque 3 — Secuencia para nuevos clientes:
Diseña una secuencia de bienvenida de seis emails para un nuevo cliente de una entidad financiera. Los emails deben: confirmar la apertura de la relación, explicar los servicios disponibles, educar sobre el uso seguro del producto, presentar las herramientas digitales disponibles, solicitar la completitud del perfil de cliente y hacer una primera oferta de producto complementario (cross-sell). Para cada email, incluye las advertencias legales que deben aparecer en el footer.

Bloque 4 — Emails de educación financiera como herramienta de retention:
Diseña un programa de email de educación financiera de doce semanas que aborde temas como: gestión del presupuesto personal, conceptos de diversificación de inversiones, cómo entender el riesgo en la inversión, planificación para la jubilación, y fiscalidad básica del ahorro. Explica cómo este tipo de contenido genera confianza a largo plazo, reduce el churn y prepara al cliente para contratar productos más avanzados.

Bloque 5 — Métricas y optimización específicas del sector:
Define los KPIs más relevantes para email marketing financiero: tasa de apertura de emails regulatorios vs. comerciales, CTR en productos de inversión, tasa de conversión por tipo de producto, tiempo medio hasta la primera contratación desde el email y tasa de baja por segmento. Explica cómo los benchmarks del sector financiero difieren de otros sectores y qué tasas de apertura son razonables esperar.

Entregables:
- Checklist legal de 15 puntos para cualquier email financiero
- Tabla de transformación de frases prohibidas a frases correctas
- Secuencia de 6 emails de bienvenida con advertencias legales incluidas
- Plan de 12 semanas de educación financiera con temas y objetivos
- Dashboard de KPIs con benchmarks del sector financiero
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear campañas de email para servicios financieros que cumplan la regulación y conviertan',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicaciones legales por email: claridad, cumplimiento y gestión de expectativas',
                'description'      => 'Diseña comunicaciones por email para bufetes y departamentos legales que informen claramente a los clientes sobre el estado de sus asuntos, gestionen expectativas y mantengan el cumplimiento profesional. La comunicación legal por email tiene requisitos únicos de precisión y confidencialidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en gestión de clientes para despachos de abogados con conocimiento de las normas deontológicas de la abogacía española y las obligaciones de comunicación con el cliente establecidas en el Estatuto General de la Abogacía. Necesito diseñar un sistema de comunicaciones por email para nuestro despacho que sea profesional, claro y cumpla con todas las obligaciones legales y éticas.

Contexto del despacho:
Nuestro despacho se especializa en [ÁREAS DE PRÁCTICA: ej. derecho mercantil, familia, laboral, penal, inmobiliario]. Tenemos [NÚMERO] abogados y atendemos principalmente a clientes [PERFIL: empresas / particulares / ambos]. Actualmente la comunicación con el cliente es [DESCRIBE LA SITUACIÓN ACTUAL: informal, reactiva, sin protocolo definido].

Sección 1 — Protocolo de comunicación con el cliente:
Define un protocolo de comunicaciones por email para las fases principales de un asunto legal: apertura del expediente y bienvenida al cliente, actualización quincenal del estado del asunto, comunicación de hitos importantes (presentación de escrito, vista oral, resolución judicial), entrega de documentos y solicitud de firma, y cierre del asunto con resumen de resultados. Para cada fase, especifica la frecuencia, el responsable de envío (socio, abogado junior, administrativo), el tono y los elementos obligatorios del email.

Sección 2 — Plantillas para situaciones delicadas:
Diseña plantillas de email para las situaciones de comunicación más difíciles en la práctica legal: comunicación de una sentencia desfavorable, solicitud de fondos adicionales por complejidad inesperada del asunto, comunicación de un error de procedimiento con propuesta de solución, retraso en los plazos por causas externas, y cierre del asunto por decisión del cliente contraria a la recomendación del abogado. Para cada plantilla, explica cómo equilibrar honestidad, empatía y protección de la relación con el cliente.

Sección 3 — Confidencialidad y seguridad en email:
Lista los requisitos de confidencialidad que deben cumplirse en las comunicaciones por email de un despacho: aviso legal y cláusula de confidencialidad en el pie de email, cómo compartir documentos sensibles de forma segura (portales de cliente vs. email cifrado vs. adjuntos protegidos con contraseña), qué información nunca debe enviarse por email sin cifrar, y cómo gestionar la autorización del cliente para comunicaciones electrónicas. Proporciona un modelo de aviso legal de email para despachos españoles.

Sección 4 — Facturación y honorarios comunicados correctamente:
Diseña una secuencia de emails para la comunicación de honorarios que evite conflictos: envío de presupuesto inicial, confirmación de la aceptación del presupuesto, recordatorio de provisión de fondos, envío de factura con desglose de trabajos realizados, y recordatorio de pago en caso de impago. Para cada email, indica el tono adecuado y cómo presentar el trabajo realizado de forma que justifique los honorarios sin necesidad de defenderlos.

Sección 5 — Marketing y captación de clientes por email dentro de la deontología:
Explica qué tipos de comunicaciones de marketing por email están permitidas y cuáles están prohibidas por las normas deontológicas de la abogacía. Diseña un newsletter mensual de contenido jurídico que genere autoridad y mantenga la relación con clientes pasados sin incurrir en publicidad contraria a la deontología. Incluye cinco ideas de contenido para los primeros cinco números.

Entregables:
- Protocolo de comunicaciones con plantilla para cada fase del asunto
- 5 plantillas para situaciones difíciles con notas explicativas
- Checklist de seguridad y confidencialidad para emails del despacho
- Secuencia de comunicación de honorarios y facturación
- Plan editorial de 5 newsletters jurídicos dentro de los límites deontológicos
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar comunicaciones por email para despachos legales que sean profesionales y cumplan la deontología',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Emails proactivos de Customer Success que previenen el churn antes de que ocurra',
                'description'      => 'Diseña una estrategia de comunicación por email proactiva que identifique señales de riesgo de abandono y actúe antes de que el cliente decida irse. El email de Customer Success va más allá del soporte reactivo y anticipa necesidades. Este prompt cubre los flujos de retención más efectivos.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Customer Success con experiencia en empresas SaaS B2B que han reducido su churn en más de un 30% mediante estrategias de comunicación proactiva por email. Necesito diseñar un sistema completo de emails de CS que identifique clientes en riesgo y actúe antes de que lleguen a la decisión de cancelar.

Contexto del negocio:
Nuestro producto es [DESCRIBE TU PRODUCTO O SERVICIO]. El contrato típico es [DURACIÓN Y VALOR]. Actualmente el churn anual es de [X%]. Los CSMs gestionan carteras de [NÚMERO] cuentas cada uno. Utilizamos [HERRAMIENTA DE CS: Gainsight, ChurnZero, Totango, o herramienta interna].

Parte 1 — Señales de alerta temprana (health score):
Define un sistema de health score basado en señales que se pueden detectar por email y comportamiento digital. Lista doce indicadores de riesgo divididos en tres niveles: señales amarillas (riesgo moderado: reducción del 20% en uso, apertura solo de emails de soporte, no apertura del newsletter), señales naranjas (riesgo alto: ausencia de login en 21 días, cancelación de reuniones de revisión, emails de queja sin resolver en 5 días), y señales rojas (riesgo crítico: solicitud de datos para exportar, contacto con competidores detectado en redes sociales, reducción del número de usuarios activos en más del 50%). Para cada señal, indica qué acción de email automatizada debe dispararse.

Parte 2 — Flujos de email por nivel de riesgo:

Para riesgo amarillo: diseña una secuencia de tres emails enviados a lo largo de 14 días que reenganchen al cliente con valor educativo y oferta de revisión del uso. El tono debe ser de consultor que ayuda, no de vendedor que teme perder la cuenta.

Para riesgo naranja: diseña una secuencia de dos emails enviados en 7 días más una llamada de seguimiento. El primero es un email del CSM asignado con un diagnóstico del uso y una propuesta concreta de acción. El segundo es una invitación a una sesión de optimización gratuita. Incluye el asunto, el cuerpo y las instrucciones de personalización con datos del cliente.

Para riesgo rojo: diseña un email de intervención ejecutiva donde un director o el CEO escribe directamente al decisor del cliente. Define el contenido, el tono y la oferta que puede incluirse (extensión de contrato, descuento de renovación, asignación de recurso dedicado) sin parecer desesperado.

Parte 3 — Emails de éxito del cliente como vacuna contra el churn:
Diseña una cadencia mensual de emails que demuestren el valor entregado al cliente: resumen de uso mensual con métricas clave, informe trimestral de ROI en formato visual, celebración de hitos del cliente (primer año, primer proyecto completado, mayor ahorro mensual). Explica cómo personalizar estos emails con datos del CRM y la plataforma de producto para que cada cliente reciba su propia historia de éxito.

Parte 4 — Proceso de win-back para clientes que cancelan:
Diseña una secuencia de tres emails para clientes que ya han cancelado: email inmediato de cierre con encuesta de razón de cancelación (nunca pedir que reconsideren en este email), email a los 30 días con actualización de producto que resuelve el problema mencionado en la encuesta, y email a los 90 días con oferta especial de regreso. Incluye el criterio para decidir en qué casos vale la pena intentar el win-back y en cuáles no.

Parte 5 — Métricas del programa de CS por email:
Define los KPIs para medir el éxito del programa: porcentaje de cuentas en riesgo que mejoran su health score tras la intervención, tiempo medio de respuesta del cliente al email del CSM, tasa de win-back de clientes cancelados, NPS de clientes que recibieron emails proactivos vs. los que no. Proporciona un modelo de informe mensual de CS que incluya estas métricas y cómo presentarlas a la dirección.

Entregables:
- Sistema de health score con 12 señales y niveles de alerta
- Flujos de email completos para cada nivel de riesgo (amarillo, naranja, rojo)
- Cadencia mensual de emails de valor con formato de personalización
- Secuencia de win-back de 3 emails con criterios de activación
- Plantilla de informe mensual de CS con KPIs y benchmarks
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar emails proactivos de Customer Success que reduzcan el churn antes de que ocurra',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Email marketing para freelancers: conseguir clientes y mantenerlos con una lista propia',
                'description'      => 'Construye una estrategia de email marketing personal que te permita como freelancer atraer nuevos clientes, mantener el contacto con clientes anteriores y generar ingresos recurrentes sin depender de plataformas externas. Tu lista de email es el activo más valioso de tu negocio independiente.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marketing para profesionales independientes y freelancers que han construido negocios sostenibles gracias a su lista de email. Necesito diseñar una estrategia de email marketing completa para mi negocio freelance que me permita generar clientes de forma predecible y mantener relaciones de largo plazo.

Contexto de mi negocio freelance:
Me dedico a [DESCRIBE TU SERVICIO: diseño web, redacción, consultoría, programación, fotografía, formación, etc.]. Mi cliente ideal es [DESCRIBE: tipo de empresa o profesional, sector, tamaño, problema que resuelven contigo]. Actualmente consigo clientes principalmente a través de [FUENTES ACTUALES]. Mi tarifa media es de [RANGO] y el proyecto típico dura [DURACIÓN].

Módulo 1 — Construcción de lista desde cero:
Explica cómo un freelancer puede construir una lista de email de cien suscriptores cualificados en sus primeros noventa días sin presupuesto publicitario. Incluye al menos ocho tácticas de captación orgánica: lead magnet descargable (qué tipos funcionan mejor para servicios profesionales), formulario en portfolio o web personal, firma de email con enlace de suscripción, publicaciones en LinkedIn con CTA a lista, colaboraciones con otros freelancers para intercambios de audiencia, charlas en eventos del sector, newsletter referenciada en entrevistas o podcasts, y comunidades online donde compartir contenido de valor con enlace a suscripción.

Módulo 2 — El newsletter del freelancer (formato y contenido):
Diseña la estructura de un newsletter mensual o quincenal que un freelancer pueda escribir en menos de dos horas y que posicione su expertise, genere confianza y abra conversaciones comerciales. Define el formato: longitud ideal, estructura de secciones (historia de proyecto reciente, lección aprendida, recurso recomendado, disponibilidad actual), tono y cómo cerrar cada número con una invitación sutil a trabajar juntos sin ser agresivo. Proporciona diez ideas de contenido para los primeros diez números.

Módulo 3 — Secuencia de bienvenida para nuevos suscriptores:
Diseña una secuencia de cuatro emails enviados en los primeros diez días tras la suscripción. El objetivo es: presentarte como persona y profesional, demostrar tu expertise con un caso concreto, describir cómo trabajas y para quién trabajas mejor, y hacer una primera invitación a conversar si tienen un proyecto adecuado. Para cada email, proporciona el asunto, la estructura del cuerpo y el CTA. El tono debe ser personal y conversacional, nunca corporativo.

Módulo 4 — Email de reactivación de clientes anteriores:
Diseña una secuencia de dos emails para contactar a clientes con los que trabajaste hace más de seis meses y que podrían tener nuevos proyectos. El primer email: actualización genuina de lo que has aprendido desde que trabajasteis juntos y pregunta abierta sobre su situación actual. El segundo email (si no responden en 7 días): caso de éxito reciente relevante para su sector con invitación explícita a retomar colaboración. Explica cómo personalizar estos emails para que no parezcan un correo de ventas genérico.

Módulo 5 — Gestión simple de email marketing para un freelancer:
Recomienda las herramientas de email marketing más adecuadas para un freelancer (considerando coste, facilidad de uso y funcionalidades necesarias): comparativa de Mailchimp, ConvertKit/Kit, Brevo, Substack y Beehiiv para un freelancer con menos de 1.000 suscriptores. Para cada herramienta, evalúa: precio hasta 1.000 suscriptores, facilidad de creación de automatizaciones, posibilidad de monetización directa, y si permite exportar la lista fácilmente. Proporciona una recomendación final según el perfil del freelancer.

Entregables:
- Plan de 90 días para construir una lista de 100 suscriptores con 8 tácticas orgánicas
- Plantilla de newsletter quincenal con estructura y 10 ideas de contenido
- Secuencia de 4 emails de bienvenida con copy sugerido
- 2 emails de reactivación de clientes anteriores con instrucciones de personalización
- Comparativa de 5 herramientas de email marketing con recomendación final
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una estrategia de email marketing personal para conseguir y mantener clientes como freelancer',
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
