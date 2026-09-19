<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills455Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de newsletter B2C con IA generativa para marcas',
                'description'      => 'Diseña y ejecuta una estrategia de newsletter orientada a consumidores finales usando IA para personalizar contenido, automatizar envíos y maximizar la tasa de apertura.',
                'prompt_content'   => <<<'EOT'
Eres un experto en email marketing y estrategia de contenido para marcas de consumo (B2C). Necesito tu ayuda para construir una estrategia de newsletter completa que convierta suscriptores en clientes recurrentes y embajadores de marca usando IA generativa para escalar la personalización.

Contexto de la marca:
- Sector: moda, lifestyle, bienestar, alimentación o cualquier marca de consumo
- Base de suscriptores actual: entre 5.000 y 50.000 contactos
- Objetivo: incrementar la tasa de apertura al 35%+, la tasa de clic al 5%+, y los ingresos atribuidos al canal email en un 30%

Estrategia completa de newsletter B2C:

1. POSICIONAMIENTO Y VOZ DE LA NEWSLETTER
Define la identidad editorial de tu newsletter:
- Propuesta de valor única: por qué un suscriptor debería esperar tu email con ilusión y no marcarlo como spam
- Tono y personalidad: el arco entre formal e informal según el sector y el público objetivo
- Naming de la newsletter: cómo elegir un nombre propio que la haga sentir como una publicación, no como publicidad
- Frecuencia óptima: diaria, semanal o bisemanal según el sector y el ciclo de compra del producto
- Cómo usar IA para mantener la coherencia de voz en todos los envíos aunque los redacten personas distintas

2. SEGMENTACIÓN DE LA BASE DE DATOS
Diseña la arquitectura de segmentación para personalización a escala:
- Segmentos por comportamiento: compradores recientes, compradores recurrentes, nunca ha comprado, inactivos más de 90 días
- Segmentos por interés: basados en páginas visitadas, productos vistos o categorías de artículos más leídos
- Segmentos por ciclo de vida: nuevo suscriptor (secuencia de bienvenida), cliente activo, cliente en riesgo de churn
- Cómo usar IA para crear microsegmentos dinámicos a partir de comportamiento en tiempo real
- RFM básico para newsletters B2C: Recency, Frequency, Monetary aplicado a los datos de email y compra

3. CALENDARIO EDITORIAL Y TIPOS DE CONTENIDO
Propón un calendario editorial mensual con la mezcla de contenidos óptima:
- Newsletters informativas: tendencias del sector, guías de uso del producto, contenido educativo
- Newsletters transaccionales: lanzamiento de producto, oferta exclusiva para suscriptores, restock
- Newsletters relacionales: historia de la marca, behind the scenes, testimonios de clientes, UGC
- Newsletters estacionales: planificación de campañas clave (Navidad, Black Friday, verano, vuelta al cole)
- Ratio recomendado entre contenido de valor y contenido promocional: regla 80/20 adaptada al email

4. PRODUCCIÓN CON IA GENERATIVA
Diseña el flujo de producción de cada número:
- Briefing estructurado para la IA: cómo describir el objetivo, el segmento, el tono y los puntos clave en un prompt eficaz
- Generación de asunto y preheader: técnica de generar 10 variantes y seleccionar la mejor mediante test A/B
- Redacción del cuerpo: estructura hero-body-CTA, cómo inyectar personalización dinámica (nombre, ciudad, última compra)
- Revisión editorial: qué debe revisar siempre un humano aunque el borrador lo haya generado la IA (precisión, tono, links)
- Tiempo de producción objetivo: de 4 horas por newsletter a 45 minutos con IA integrada en el flujo

5. AUTOMATIZACIONES Y SECUENCIAS
Define las automatizaciones de email imprescindibles:
- Bienvenida: secuencia de 3-5 emails para convertir al nuevo suscriptor en primer comprador
- Abandono de carrito: timing, número de recordatorios y oferta progresiva
- Post-compra: confirmación, seguimiento de envío, solicitud de reseña y recomendación de producto complementario
- Reactivación de inactivos: secuencia de win-back con oferta de última oportunidad y limpieza de la lista
- Cómo usar IA para personalizar el contenido de cada paso de la automatización según el comportamiento previo

6. MÉTRICAS Y OPTIMIZACIÓN CONTINUA
Define el sistema de medición y mejora:
- KPIs primarios: tasa de apertura, tasa de clic, tasa de conversión a compra, revenue por email enviado
- KPIs secundarios: tasa de baja, tasa de spam, crecimiento neto de la lista, coste por suscriptor adquirido
- Cadencia de análisis y reporting: semanal para métricas de engagement, mensual para ingresos atribuidos
- Plan de testing sistemático: qué probar, cómo diseñar el test, cómo leer los resultados y escalar el ganador
- Cómo usar IA para identificar patrones en los datos y generar hipótesis de mejora accionables

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear estrategia de newsletter B2C personalizada con IA generativa',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de newsletters técnicas con APIs de IA y código',
                'description'      => 'Construye un pipeline automatizado para generar, personalizar y enviar newsletters técnicas usando APIs de IA, Python y plataformas de email marketing.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en automatización de contenido y sistemas de comunicación digital. Necesito tu ayuda para construir un pipeline técnico completo que automatice la producción y envío de una newsletter usando APIs de IA generativa.

Objetivo del sistema:
- Generar automáticamente el contenido de una newsletter semanal a partir de fuentes de datos definidas
- Personalizar el contenido por segmento de suscriptores usando ML de comportamiento
- Integrar con plataformas de email como Mailchimp, SendGrid o Brevo vía API
- Reducir el tiempo de producción humana de la newsletter de horas a minutos de revisión final

Arquitectura técnica del pipeline:

1. RECOLECCIÓN DE CONTENIDO FUENTE
Diseña el módulo de ingesta de datos:
- Web scraping con Python (BeautifulSoup, Scrapy): fuentes RSS, blogs del sector, GitHub trending, Hacker News
- APIs de agregación de noticias: NewsAPI, Feedly API, Reddit API para temas técnicos
- Base de datos interna: artículos propios del blog, documentación, changelog del producto
- Procesamiento inicial: deduplicación, filtrado por relevancia con embeddings de texto, scoring por engagement histórico
- Almacenamiento: esquema de base de datos para artículos candidatos, su puntuación y su estado de uso

2. GENERACIÓN DE CONTENIDO CON IA
Implementa el módulo de generación usando la API de Claude u OpenAI:
- Prompt engineering para resumen ejecutivo de artículos: técnica de few-shot con ejemplos del estilo deseado
- Generación de intro editorial: narrativa que conecte los temas de la semana con contexto y punto de vista propio
- Generación de asuntos del email: múltiples variantes con técnicas de curiosity gap, beneficio directo y personalización
- Control de calidad automático: validación de longitud, detección de alucinaciones, coherencia temática
- Rate limiting y manejo de errores de la API: reintentos, fallback a contenido cacheado

3. PERSONALIZACIÓN POR SEGMENTO
Construye el motor de personalización:
- Modelo de segmentación basado en comportamiento: aperturas, clics, tiempo de lectura estimado, historial de compras
- Content-based filtering: qué artículos de la newsletter le interesan a cada suscriptor según su historial
- Reordenación dinámica del contenido por segmento: misma newsletter, distinto orden de bloques según preferencias
- Personalización en el asunto y en el saludo con datos del CRM vía merge tags
- Umbral mínimo de confianza: cuándo es mejor no personalizar y enviar la versión genérica

4. INTEGRACIÓN CON PLATAFORMA DE EMAIL
Implementa la integración con la plataforma de envío:
- Autenticación y gestión segura de API keys (variables de entorno, gestores de secretos)
- Creación de campañas vía API: construir el HTML del email a partir de plantilla Jinja2, insertar contenido generado, asignar segmento
- Segmentación en la plataforma: uso de listas, tags o condiciones dinámicas para enviar versiones distintas a distintos grupos
- Programación del envío: determinación del mejor horario por segmento con datos históricos de la plataforma
- Webhooks de respuesta: captura de eventos (apertura, clic, baja) para retroalimentar el modelo de segmentación

5. MONITOREO Y ALERTAS
Diseña el sistema de observabilidad del pipeline:
- Logging estructurado: cada paso del pipeline registra su estado, errores y métricas en formato JSON
- Alertas: notificación por Slack o email si el pipeline falla, si la tasa de error de la API supera el umbral o si el contenido generado no supera el control de calidad
- Dashboard de métricas: número de artículos procesados, coste de la API de IA por edición, tasa de éxito del envío
- Revisión humana obligatoria: interfaz web mínima (Flask o FastAPI) que muestra el borrador generado y permite aprobar o editar antes del envío

6. DESPLIEGUE Y OPERATIVA
Define la infraestructura de producción:
- Orquestación: cron job, Apache Airflow o Prefect para ejecutar el pipeline semanalmente de forma fiable
- Infraestructura cloud: Lambda en AWS o Cloud Run en GCP para ejecución serverless del pipeline
- Gestión de costes de IA: estimación del coste mensual de la API según volumen de suscriptores y frecuencia
- Estrategia de pruebas: test unitarios para cada módulo, test de integración end-to-end con lista de suscriptores de prueba

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatizar pipeline de generación y envío de newsletters con IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de plantillas de email y newsletters con asistencia de IA',
                'description'      => 'Crea sistemas de plantillas de email visualmente efectivas y accesibles usando IA para generar variantes, optimizar el layout y mantener la coherencia de marca.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de comunicación digital especializado en email design y sistemas de diseño para newsletters. Necesito tu ayuda para crear un sistema de plantillas de email modular, escalable y accesible que permita producir newsletters de alta calidad de forma consistente.

Contexto del proyecto:
- Cliente o marca con identidad visual definida (logo, tipografía, paleta de colores)
- Tipos de emails a diseñar: newsletter semanal, email transaccional, email de campañas especiales, secuencia de bienvenida
- Plataforma: Mailchimp, Brevo, HubSpot o cualquier ESP con editor drag-and-drop y soporte para HTML personalizado

Sistema de diseño de email:

1. FUNDAMENTOS TÉCNICOS DEL EMAIL DESIGN
Entiende las restricciones únicas del diseño de email:
- Compatibilidad con clientes de email: diferencias entre Gmail, Outlook, Apple Mail, Yahoo y sus versiones móviles
- Ancho máximo recomendado: 600px para el contenedor principal, márgenes laterales en móvil
- Tipografía en email: cuándo usar tipografía web (Google Fonts con fallback) y cuándo es más seguro usar tipografías del sistema
- Imágenes y accesibilidad: alt text descriptivo, diseño que funcione sin imágenes activadas (habitual en Outlook corporativo)
- Dark mode: cómo diseñar emails que se vean bien tanto en modo claro como oscuro

2. ARQUITECTURA DE LA PLANTILLA MODULAR
Diseña un sistema de bloques reutilizables:
- Bloque de cabecera: logo, nombre de la newsletter, número de edición, enlace a versión web
- Bloque hero: imagen principal + titular + subtitular + CTA principal
- Bloque de artículo: imagen lateral o superior, título, resumen de 2-3 líneas, botón de leer más
- Bloque de lista: para múltiples ítems cortos sin imagen (noticias, recursos, eventos)
- Bloque de cita destacada: pullquote con tipografía grande y borde lateral de color
- Bloque de producto o oferta: imagen de producto, precio, descripción corta, botón de compra
- Bloque de patrocinador o publicidad: claramente diferenciado del contenido editorial
- Bloque de pie de página: datos legales, redes sociales, enlace de baja, actualizar preferencias

3. SISTEMA DE COLOR Y JERARQUÍA VISUAL
Define el lenguaje visual del email:
- Uso de la paleta de marca en email: colores primarios, secundarios y neutros, qué usar para fondos y qué para acentos
- Jerarquía tipográfica: tamaños de fuente para H1 (titular principal), H2 (títulos de sección), body y caption
- Uso del espacio en blanco: cómo el padding y el margen crean respiración y guían la lectura en pantalla
- Contraste de accesibilidad: ratio mínimo 4.5:1 para texto normal y 3:1 para texto grande según WCAG AA
- Botones CTA: diseño, texto, tamaño mínimo táctil (44x44px), variantes (primario, secundario, texto)

4. USO DE IA EN EL DISEÑO DE EMAIL
Integra IA en el flujo de trabajo de diseño:
- Generación de variantes de layout: describe el objetivo del email a la IA y pide tres propuestas de estructura distintas
- Optimización de asuntos y preheaders: solicita a la IA 10 variantes del asunto para test A/B según el objetivo (curiosidad, urgencia, beneficio)
- Redacción de copy de apoyo: titulares de sección, texto de botones CTA, pie de imagen
- Detección de problemas de accesibilidad: describe el diseño a la IA y pregunta por posibles barreras de accesibilidad
- Adaptación de contenido: transformar el mismo contenido en formatos distintos (newsletter larga, email corto de anuncio, push notification)

5. PROCESO DE PRODUCCIÓN Y CONTROL DE CALIDAD
Define el flujo de trabajo estándar:
- Checklist de diseño antes de enviar: previsualización en al menos 3 clientes de email distintos, verificación de todos los links, alt text en todas las imágenes, tamaño de archivo de las imágenes bajo 200KB
- Testing en dispositivos: herramientas como Litmus o Email on Acid para previsualización automatizada
- Revisión de accesibilidad: herramientas de comprobación de contraste, validador de HTML de email
- Versionado de plantillas: cómo mantener un repositorio de plantillas con historial de cambios

6. ENTREGABLES Y DOCUMENTACIÓN
Define qué entregar al equipo y al cliente:
- Kit de plantillas en Figma: componentes de email como librería de diseño reutilizable
- HTML limpio y comentado: código de las plantillas listo para importar en el ESP
- Guía de uso para el redactor: qué bloques usar en cada tipo de email, cómo insertar imágenes, qué textos son editables
- Guía de marca para email: adaptaciones específicas de la identidad visual para el canal email

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar sistema de plantillas de newsletter con coherencia de marca',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Secuencias de email de ventas B2B generadas con IA',
                'description'      => 'Crea secuencias de prospección y nurturing por email altamente personalizadas para ventas B2B usando IA para aumentar la tasa de respuesta.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B y copywriting de email con enfoque en outbound prospección y nurturing de leads. Necesito tu ayuda para construir secuencias de email de ventas efectivas y personalizadas usando IA para escalar sin perder la calidad.

Contexto de ventas:
- Tipo de venta: B2B, ticket medio-alto (10.000-100.000€ anuales), ciclo de venta de 1-6 meses
- Canal: email frío de prospección + secuencias de nurturing para leads inbound
- Objetivo: incrementar la tasa de respuesta del email frío del 2% al 8% y reducir el tiempo de cualificación

Construcción de secuencias con IA:

1. FUNDAMENTOS DEL EMAIL DE VENTAS EFECTIVO
Entiende los principios que hacen que un email de ventas funcione:
- La regla del 1-1-1: un destinatario, un objetivo, una llamada a la acción
- Longitud óptima: 50-150 palabras para email frío, 150-300 para nurturing con contexto
- Personalización real vs. personalización de superficie: la diferencia entre mencionar el nombre y demostrar que conoces el negocio del prospecto
- Asuntos que abren: sin clickbait, con relevancia demostrada, con especificidad (mencionar el nombre de la empresa o un dato concreto)
- CTA de bajo compromiso: pedir 15 minutos en lugar de una demo de una hora

2. INVESTIGACIÓN DEL PROSPECTO CON IA
Define el proceso de investigación previo a la escritura:
- Fuentes de información: LinkedIn del prospecto, web corporativa, noticias recientes sobre la empresa, ofertas de trabajo activas, entrevistas del CEO
- Prompts para extraer insights: cómo pedirle a la IA que analice la web del prospecto y sugiera tres ángulos de conversación relevantes
- Señales de compra a detectar: expansión de la empresa, nueva ronda de financiación, cambio de responsable, apertura de nueva oficina
- Creación de snippets de personalización: primeras líneas del email que demuestran investigación real y generan curiosidad

3. ESTRUCTURA DE LA SECUENCIA FRÍA
Diseña una secuencia de prospección de 5 a 7 toques:
- Email 1 (día 1): apertura con valor, problema específico del sector del prospecto, CTA de bajo compromiso
- Email 2 (día 3): seguimiento con ángulo diferente, prueba social o caso de uso similar
- Email 3 (día 7): contenido de valor gratuito (artículo, calculadora, benchmark) relacionado con su negocio
- Email 4 (día 14): perspectiva diferente, pregunta abierta sobre su situación actual
- Email 5 (día 21): urgencia suave, mención de un logro reciente de un competidor directo del prospecto
- Email 6 (día 30): break-up email, cierre del hilo con humor o elegancia que deja la puerta abierta
- Reglas de pausa: cuándo parar la secuencia si hay respuesta, visita a la web o descarga de contenido

4. NURTURING DE LEADS INBOUND
Diseña secuencias para leads que ya mostraron interés:
- Después de descarga de contenido: secuencia de 3 emails que profundiza en el tema y propone una conversación
- Después de demo o prueba gratuita: secuencia de activación que guía hacia el primer valor tangible
- Leads que se enfrían: win-back después de 30-60 días de silencio tras una conversación inicial
- Personalización por industria: cómo adaptar la secuencia genérica al sector específico del lead (retail, SaaS, manufactura)

5. PRODUCCIÓN CON IA GENERATIVA
Define el flujo de escritura y revisión con IA:
- Prompt maestro para generar un borrador del email frío a partir de: nombre y cargo del prospecto, empresa, industria, propuesta de valor del vendedor, tono deseado
- Revisión de tono: cómo pedirle a la IA que evalúe si el email suena demasiado comercial y sugiera cómo humanizarlo
- Variantes de asunto: generación de 8-10 opciones para test A/B por segmento
- Checklist de revisión humana: lo que siempre debe comprobar el vendedor antes de enviar (precisión de datos, personalización real, link funcionando, firma correcta)

6. AUTOMATIZACIÓN Y ESCALA
Configura el sistema de envío y seguimiento:
- Herramientas de secuencias de ventas: Lemlist, Outreach, Salesloft, Apollo, configuración de secuencias multicanal
- Integración con CRM: registro automático de actividad, actualización del stage del lead según respuesta
- A/B testing sistemático: qué elementos probar (asunto, longitud, CTA, día de envío) y cómo interpretar los resultados
- Métricas de rendimiento: tasa de apertura, tasa de respuesta, tasa de reunión agendada, revenue atribuido a secuencias

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear secuencias de email de ventas B2B personalizadas con IA',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Newsletter de producto para comunidades tech y usuarios avanzados',
                'description'      => 'Diseña y gestiona una newsletter de producto que mantenga informados y comprometidos a los usuarios más avanzados usando IA para curar y redactar el contenido.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en comunicación de producto y community building para productos SaaS y herramientas técnicas. Necesito tu ayuda para crear una newsletter de producto que se convierta en el canal de referencia para los usuarios más avanzados y que impulse la adopción de nuevas funcionalidades.

Contexto del producto:
- Producto SaaS B2B con una base de usuarios técnicos: desarrolladores, PMs, analistas
- Newsletter de producto actual: changelog básico con escasa apertura y poco engagement
- Objetivo: convertir la newsletter en una publicación que los usuarios esperen con interés y que aumente el uso de features avanzadas

Estrategia de newsletter de producto:

1. POSICIONAMIENTO Y DIFERENCIACIÓN
Define qué debe ser la newsletter de producto:
- Más que un changelog: qué hace que una newsletter de producto sea irresistible para usuarios técnicos
- La mezcla de contenidos: novedades del producto, contexto de por qué se tomaron las decisiones, casos de uso avanzados, roadmap adelantos exclusivos, contenido de la comunidad
- Tono de PM a usuario: cómo escribir con honestidad sobre los retos, los errores corregidos y las decisiones de tradeoff sin sonar a marketing
- Frecuencia y extensión: quincenal suele funcionar mejor que semanal para producto; longitud de 600-1.200 palabras

2. ESTRUCTURA DEL NÚMERO TIPO
Diseña la estructura editorial de cada edición:
- Sección "Qué hay de nuevo": tres a cinco novedades destacadas con captura de pantalla y una línea de contexto sobre por qué se construyó
- Sección "En profundidad": un análisis de 300-400 palabras de una funcionalidad nueva o mejorada, con casos de uso reales
- Sección "De la comunidad": pregunta frecuente en soporte o foro convertida en tip, contribución de un usuario power user, snippet de código útil
- Sección "En el radar": anticipo honesto de dos o tres cosas en las que el equipo está trabajando, con nivel de certeza
- Sección "Recursos": tutorial relevante, documentación actualizada, vídeo de producto

3. PRODUCCIÓN CON IA
Integra IA en el flujo de producción:
- Briefing del número: cómo crear un documento de input con las novedades del sprint, los tickets cerrados relevantes y los feedbacks recibidos para pasarle a la IA
- Redacción del changelog: transformar notas técnicas de ingeniería en texto claro y orientado al beneficio del usuario
- Generación de ejemplos de uso: pedir a la IA que genere tres escenarios reales donde la nueva feature aporta valor tangible
- Asuntos y preheaders: variantes para test A/B con ángulos distintos (novedad, beneficio, curiosidad)
- Revisión de accesibilidad: simplificación del lenguaje técnico para usuarios menos avanzados sin perder profundidad

4. CONSTRUCCIÓN DE COMUNIDAD ALREDEDOR DE LA NEWSLETTER
Transforma la newsletter en un asset de comunidad:
- Reply-friendly: cómo invitar a los lectores a responder con feedback real y cómo gestionar las respuestas
- Integración con foro o Slack: cómo la newsletter lleva tráfico a discusiones activas en la comunidad
- Programa de beta readers: cómo reclutar usuarios avanzados que lean la newsletter antes del envío y aporten perspectiva
- User spotlight: cómo identificar a los power users más interesantes y convertirlos en protagonistas de una sección
- Loop de feedback al equipo de producto: cómo sistematizar los insights recibidos por la newsletter para el proceso de priorización

5. MÉTRICAS DE ÉXITO DEL PM
Define los KPIs específicos para la newsletter de producto:
- Métricas de engagement: tasa de apertura, tasa de clic por sección, replies recibidas, tiempo de lectura estimado
- Métricas de adopción: correlación entre lectura de la newsletter y uso de la feature presentada
- Métricas de retención: ¿los usuarios que leen la newsletter tienen mayor retención y menor churn?
- NPS de la newsletter: encuesta semestral sobre satisfacción y valor percibido
- Cómo presentar el impacto de la newsletter al liderazgo: marco de ROI del canal

6. CRECIMIENTO DE LA LISTA
Estrategias para hacer crecer la base de suscriptores de calidad:
- Integración en el onboarding: cómo hacer que el nuevo usuario se suscriba en los primeros días
- Incentivos de suscripción: acceso anticipado al roadmap, invitación a beta features, webinars exclusivos
- Cross-promoción: newsletter de producto recomendada en blog, documentación y webinars
- Nunca comprar listas: por qué la calidad de los suscriptores importa más que la cantidad para una newsletter de producto

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear newsletter de producto que impulse adopción y comunidad',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Newsletter de comunicación interna para empleados con IA',
                'description'      => 'Diseña y produce una newsletter interna que mantenga a los equipos informados, comprometidos y alineados con la cultura de empresa usando IA generativa.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación interna y Employee Experience. Necesito tu ayuda para transformar la comunicación interna de una empresa mediante una newsletter de empleados que sea realmente leída, apreciada y que refuerce la cultura organizacional.

Contexto de la empresa:
- Tamaño: entre 100 y 1.000 empleados, distribuidos en oficinas, trabajo remoto o híbrido
- Situación actual: la comunicación interna llega por email masivo, intranet que nadie visita y grupos de WhatsApp no oficiales
- Objetivo: crear un canal de comunicación interna que el 70%+ de los empleados abra y que reduzca los malentendidos organizacionales

Newsletter interna con IA:

1. DISEÑO DE LA PUBLICACIÓN INTERNA
Define la identidad de la newsletter de empleados:
- Nombre y concepto editorial: algo que refleje la cultura de la empresa y genere identidad de comunidad
- Frecuencia: quincenal suele ser el equilibrio entre suficiente información y no saturación
- Tono: más humano y menos corporativo, con humor moderado cuando la cultura lo permita
- Quién la escribe y quién la valida: modelo de producción descentralizado con colaboración de varios departamentos
- Cómo usar IA para mantener el tono humano y consistente aunque contribuyan distintas personas

2. ESTRUCTURA DE CONTENIDOS
Diseña las secciones fijas y variables de cada número:
- "Lo más importante de la quincena": tres noticias de empresa que todo el mundo debe conocer, redactadas con contexto y no solo como anuncio
- "Personas": presentación de nuevas incorporaciones, reconocimiento de logros de empleados, aniversarios de empresa
- "Desde los equipos": rotación mensual de un equipo diferente que comparte qué está construyendo o en qué proyecto está inmerso
- "Formación y oportunidades": cursos disponibles, vacantes internas, programas de desarrollo
- "Agenda": eventos de empresa, reuniones abiertas, team buildings, fechas importantes
- "Voz del empleado": encuesta breve de pulso, pregunta de la quincena, espacio de opinión anónima

3. PRODUCCIÓN CON IA GENERATIVA
Integra IA en el flujo de producción semanal o quincenal:
- Recolección de inputs: formulario sencillo que rellenan los responsables de cada departamento con las novedades del periodo
- Redacción con IA: transformar bullet points administrativos en prosa amigable y alineada con el tono de la empresa
- Personalización por departamento: segmentar contenido específico de relevancia para cada área (comercial, técnico, operaciones)
- Traducción: si la empresa opera en múltiples idiomas, generar versiones localizadas de forma eficiente
- Revisión obligatoria: qué debe revisar siempre el equipo de comunicación antes de enviar (información confidencial, datos de personas, tono apropiado)

4. ENGAGEMENT Y PARTICIPACIÓN
Diseña estrategias para que los empleados no solo lean sino que participen:
- Concurso fotográfico mensual: los empleados envían fotos de su espacio de trabajo, su mascota o un momento de equipo
- Q&A con liderazgo: los empleados envían preguntas anónimas y el CEO o directores responden en la newsletter
- Quiz de cultura: pregunta trivia sobre la historia de la empresa o los valores, con premio simbólico para el primero que responda
- "Recomendación de la semana": los empleados recomiendan un libro, podcast, restaurante o herramienta
- Sistema de reconocimiento entre pares: los empleados pueden nominar a compañeros y aparecen en la sección de personas

5. MÉTRICAS DE COMUNICACIÓN INTERNA
Define cómo medir el impacto de la newsletter:
- Tasa de apertura: objetivo mínimo del 60-70% (muy superior al email marketing externo por la relación con el emisor)
- Tasa de clic: qué links incluir para medir el interés por cada sección
- Encuesta de satisfacción trimestral: ¿la newsletter te ayuda a estar informado? ¿La recomendarías a un nuevo compañero?
- Correlación con eNPS: ¿los empleados que leen la newsletter tienen mayor satisfacción y menor intención de abandono?
- Seguimiento cualitativo: qué comentan los managers en las reuniones de equipo sobre la newsletter

6. GOBERNANZA Y ESCALABILIDAD
Define el modelo operativo de la newsletter interna:
- Responsable de comunicación interna: perfil, dedicación de tiempo semanal, relación con RRHH y liderazgo
- Calendario editorial: cómo planificar con antelación para no improvisar con prisas
- Proceso de aprobación: qué contenidos requieren validación del CEO o de legal antes de publicarse
- Archivo de la newsletter: dónde quedan guardadas las ediciones anteriores para incorporaciones y consultas

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear newsletter interna para mejorar comunicación y cultura de empresa',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Newsletter financiera y de inversión con contenido generado por IA',
                'description'      => 'Diseña una newsletter de análisis financiero y de mercados que combine rigor analítico con redacción asistida por IA para audiencias de inversores y profesionales.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero y editor de publicaciones financieras con experiencia en newsletters de inversión, análisis de mercados y educación financiera. Necesito tu ayuda para crear una newsletter financiera de calidad que combine rigor analítico con accesibilidad para distintas audiencias.

Advertencia legal importante: el contenido de newsletters financieras debe incluir siempre disclaimers claros de que no constituye asesoramiento de inversión. El proceso descrito es para periodismo y divulgación financiera, no para recomendaciones individualizadas de inversión.

Contexto de la publicación:
- Audiencia: inversores particulares avanzados, gestores de patrimonios, profesionales del sector financiero
- Temáticas: análisis macroeconómico, mercados de renta variable y renta fija, criptoactivos, finanzas personales avanzadas
- Modelo de negocio: suscripción de pago (entre 10 y 50€ al mes) con nivel gratuito de acceso limitado

Construcción de la newsletter financiera:

1. MODELO EDITORIAL Y POSICIONAMIENTO
Define el enfoque diferencial de la publicación:
- Nicho específico: análisis macro, acciones de valor, mercados emergentes, small caps, inversión sostenible... elegir uno en lugar de cubrirlo todo
- Voz editorial: analítica y directa, con opinión propia y razonamiento transparente
- Diferenciación vs. medios financieros generalistas: profundidad de análisis, fuentes primarias, modelización propia
- Modelo freemium: qué contenido está en acceso abierto para captación y qué está detrás del muro de pago

2. RECOLECCIÓN Y PROCESAMIENTO DE DATOS CON IA
Define el flujo de trabajo de análisis:
- Fuentes de datos financieros: Yahoo Finance, FRED (Federal Reserve Economic Data), Bloomberg (si hay acceso), SEC EDGAR para fundamentales de empresas
- Uso de IA para síntesis de informes: cómo resumir el informe trimestral de 200 páginas de una empresa en los tres datos más relevantes
- Análisis de sentimiento de mercado: uso de IA para analizar titulares de noticias financieras y estimar el sentimiento del mercado
- Monitorización de alertas: configurar vigilancias sobre empresas, sectores o indicadores macroeconómicos clave
- Tablas y gráficos: cómo usar IA para describir y comentar gráficos sin copiar las imágenes (para accesibilidad y texto plano)

3. ESTRUCTURA DEL NÚMERO TIPO
Diseña el formato de cada edición:
- Apertura editorial: 150-200 palabras de perspectiva macro sobre el contexto de mercado de la semana
- Análisis principal: un activo, sector o concepto macroeconómico analizado en profundidad (600-800 palabras)
- Datos de la semana: tres a cinco indicadores o datos clave con comentario breve sobre su implicación
- Cartera de seguimiento: actualización semanal de posiciones teóricas con razonamiento de los movimientos
- Lectura recomendada: un artículo, paper académico o informe de research externo con síntesis y punto de vista propio

4. REDACCIÓN CON IA: LÍMITES Y APLICACIONES
Define qué puede hacer la IA y qué no en una newsletter financiera:
- Lo que la IA puede hacer bien: sintetizar datos públicos, estructurar el análisis, mejorar la legibilidad del texto técnico, generar variantes del titular
- Lo que requiere siempre al analista humano: la tesis de inversión, la interpretación de los datos, la gestión del riesgo, la responsabilidad sobre las opiniones
- Proceso de revisión rigurosa: verificación de todos los datos citados, actualización de cifras en tiempo real, validación de la fuente
- Disclaimer obligatorio: cómo redactar el aviso legal de no asesoramiento de forma clara y en lugar prominente

5. CRECIMIENTO Y MONETIZACIÓN
Define el modelo de negocio sostenible:
- Estrategia de captación: content marketing en LinkedIn y Twitter, apariciones en podcasts financieros, alianzas con brokers y plataformas
- Niveles de suscripción: qué incluye el plan gratuito, el básico y el premium
- Upsell de servicios complementarios: sesiones de análisis en grupo (webinar mensual), acceso a modelos de valoración en Excel, comunidad privada
- Métricas financieras de la newsletter: MRR, churn mensual, LTV por plan, CAC por canal de adquisición

6. CUMPLIMIENTO REGULATORIO
Asegura el marco legal de la publicación:
- Diferencia entre divulgación financiera y asesoramiento regulado: cuándo se cruza la línea y qué riesgos conlleva
- Disclaimers: texto estándar de no asesoramiento, no garantía de resultados, riesgo de pérdida de capital
- Transparencia sobre conflictos de interés: si el autor tiene posiciones en los activos que analiza, debe declararlo
- GDPR en gestión de suscriptores de pago: datos de facturación, retención de datos, derecho de baja

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear newsletter financiera con análisis de mercados asistido por IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Boletín legal y de compliance redactado con asistencia de IA',
                'description'      => 'Produce boletines jurídicos y de cumplimiento normativo para clientes empresariales usando IA para sintetizar legislación y redactar con claridad.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especialista en derecho empresarial y comunicación jurídica. Necesito tu ayuda para diseñar y producir un boletín legal de alta calidad que mantenga informados a los clientes sobre los cambios normativos que afectan a sus negocios, usando IA para hacer el proceso más eficiente sin sacrificar el rigor jurídico.

Contexto del despacho o área legal:
- Emisor: despacho de abogados, asesoría legal o departamento jurídico de una empresa
- Destinatarios: clientes empresariales, directores generales, directores financieros, responsables de compliance
- Temáticas: derecho mercantil, laboral, fiscal, protección de datos, regulación sectorial específica

Estructura y producción del boletín legal:

1. POSICIONAMIENTO DEL BOLETÍN JURÍDICO
Define la propuesta de valor del boletín:
- Por qué un cliente debería leer tu boletín en lugar de el BOE directamente: síntesis, contexto, implicaciones prácticas
- Nivel de profundidad: conceptual (cualquier empresario lo entiende) vs. técnico (para directores financieros o compliance officers)
- Frecuencia: mensual para novedades normativas, o alerta específica cuando haya cambios urgentes de alto impacto
- Diferenciación de otros despachos: ángulo práctico orientado al impacto en el negocio, no solo descripción de la norma

2. IDENTIFICACIÓN Y SEGUIMIENTO NORMATIVO CON IA
Define el proceso de vigilancia normativa:
- Fuentes de seguimiento: BOE, DOUE, webs de organismos reguladores (AEPD, CNMC, Banco de España, DGT), bases de datos jurídicas
- Uso de IA para síntesis: cómo transformar un texto legal denso de 20 páginas en un resumen ejecutivo de 5 puntos accionables
- Alertas automáticas: configuración de Google Alerts, suscripciones a newsletters de organismos reguladores, APIs de bases de datos jurídicas
- Priorización: cómo decidir qué cambios normativos merecen una alerta urgente y cuáles van al boletín mensual

3. ESTRUCTURA DEL NÚMERO TIPO
Diseña el formato estándar del boletín:
- Resumen ejecutivo: tres a cinco cambios normativos del mes con impacto directo en las empresas, en formato de tabla o bullet points
- Análisis principal: una norma nueva o sentencia relevante analizada en profundidad, con contexto, implicaciones y recomendaciones de acción
- Calendario de cumplimiento: fechas límite próximas (declaraciones fiscales, registros obligatorios, adaptaciones a nueva normativa)
- Consulta del mes: respuesta a una pregunta frecuente de clientes, anonimizada y con valor formativo general
- Novedades jurisprudenciales: sentencia relevante del Tribunal Supremo, Audiencia Nacional o TJUE con implicación práctica

4. REDACCIÓN CON IA EN DOCUMENTOS JURÍDICOS
Define el proceso de redacción asistida:
- Síntesis de textos legales: cómo pedir a la IA que extraiga las obligaciones concretas de una directiva o reglamento complejo
- Traducción de lenguaje jurídico a lenguaje empresarial: el boletín debe ser comprensible para un CEO sin formación legal
- Generación de ejemplos prácticos: cómo ilustrar el impacto de una norma con un caso ficticio de empresa
- Revisión obligatoria del abogado: qué nunca puede enviar sin revisión humana experta (interpretación de normas, recomendaciones específicas, afirmaciones sobre consecuencias legales)
- Disclaimer estándar: el boletín es información general y no constituye asesoramiento jurídico individualizado

5. DISTRIBUCIÓN Y FIDELIZACIÓN DE CLIENTES
Define la estrategia de distribución:
- Segmentación de la lista: enviar solo las secciones relevantes a cada tipo de cliente (el boletín laboral al director de RRHH, el fiscal al director financiero)
- Personalización: cómo incluir una nota personal del abogado responsable de cada cliente
- Multicanal: mismo contenido adaptado para el boletín email, un artículo en LinkedIn y un hilo divulgativo en Twitter
- Propuesta de valor para el cliente: el boletín como recordatorio de que el despacho vigila sus intereses y está al día

6. EFICIENCIA Y ROI PARA EL DESPACHO
Cuantifica el valor del boletín para el negocio del despacho:
- Tiempo de producción con y sin IA: estimación del ahorro de horas por número
- Oportunidades de negocio generadas: cuántas consultas o nuevos mandatos se originan como seguimiento del boletín
- Posicionamiento de marca: el boletín como herramienta de thought leadership que reduce el ciclo de venta
- Coste de producción vs. valor percibido por el cliente: cómo justificar el boletín en la propuesta de honorarios

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Producir boletín legal de compliance para clientes empresariales con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Emails de onboarding y retención de clientes generados con IA',
                'description'      => 'Diseña secuencias de email de onboarding y retención para reducir el churn y maximizar el tiempo de vida del cliente usando IA para personalizar cada etapa del ciclo de vida.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y lifecycle email marketing para empresas SaaS y de suscripción. Necesito tu ayuda para diseñar secuencias de email que conviertan nuevos usuarios en clientes comprometidos y reduzcan el churn en cada etapa del ciclo de vida.

Contexto del producto:
- Tipo de negocio: SaaS B2B o B2C con modelo de suscripción mensual o anual
- Problema actual: tasa de churn del primer mes del 20-30%, baja adopción de funcionalidades clave, poca renovación voluntaria
- Objetivo: reducir el churn en el primer mes al 10%, aumentar el feature adoption al 60% en las primeras dos semanas, mejorar la tasa de renovación anual al 80%

Secuencias de email con IA:

1. SECUENCIA DE BIENVENIDA Y ACTIVACIÓN
Diseña la secuencia de onboarding de los primeros 14 días:
- Email día 0 (inmediatamente tras registro): bienvenida calurosa, las tres cosas más importantes que hacer en los primeros 10 minutos, enlace a guía de inicio rápido
- Email día 1: consejo accionable sobre la funcionalidad más adoptada por usuarios exitosos, con captura de pantalla y link directo al paso concreto
- Email día 3: validación del progreso si completó el primer paso, o empujón suave si no lo hizo (bifurcación por comportamiento)
- Email día 7: caso de uso inspiracional de un cliente real, testimonio en primera persona, invitación a webinar de onboarding
- Email día 10: funcionalidad avanzada que diferencia a los usuarios de alto retención, explicada de forma simple con beneficio claro
- Email día 14: check-in de satisfacción, pregunta abierta sobre qué les está faltando, invitación a llamada con el equipo de CS
- Cómo usar IA para personalizar cada email según la industria del usuario, el plan contratado y las acciones realizadas en la app

2. SECUENCIA DE ADOPCIÓN DE FUNCIONALIDADES
Diseña emails de adopción de features específicas:
- Trigger de comportamiento: cuándo enviar (usuario usa feature A pero no feature B, que es crítica para la retención)
- Formato: el email de feature adoption más efectivo: problema → solución con la feature → cómo activarla en 2 pasos → CTA al paso concreto dentro de la app
- Cómo usar IA para generar variantes del copy según el perfil del usuario (técnico vs. no técnico, rol en la empresa)
- Frecuencia máxima: cuántos emails de producto se pueden enviar por semana sin saturar

3. SECUENCIA DE RIESGO DE CHURN
Diseña el sistema de detección y retención de clientes en riesgo:
- Señales de riesgo: bajada de login frequency, descenso en el uso de features core, apertura de ticket de cancelación, falta de respuesta a los últimos 3 emails
- Email de reengagement: tono diferente (más humano, desde el CEO o el responsable de CS), oferta de valor (sesión gratuita, descuento, nueva feature), CTA de llamada de 15 minutos
- Secuencia de win-back post-cancelación: tres emails en 30 días para recuperar al cliente cancelado, con oferta progresiva
- Cómo usar IA para analizar el comportamiento del cliente en la app y redactar un email que demuestre que conocemos su situación específica

4. SECUENCIA DE RENOVACIÓN Y EXPANSIÓN
Diseña emails para maximizar la renovación y el upsell:
- Pre-renovación (30-60-90 días antes): recordatorio de valor entregado con datos reales del uso del cliente (métricas de impacto, horas ahorradas, resultados alcanzados)
- Propuesta de upgrade: cuándo y cómo ofrecer un plan superior o add-ons según el comportamiento en la plataforma
- Post-renovación: agradecimiento, novedades del plan renovado, hoja de ruta de lo que viene
- Email de referidos: cómo pedir una recomendación a un cliente satisfecho en el momento de máxima satisfacción (tras una renovación o un logro relevante)

5. PERSONALIZACIÓN CON IA A ESCALA
Define el sistema técnico de personalización:
- Merge tags de comportamiento: uso de datos del producto (features activadas, número de proyectos, última sesión) como variables en el email
- Bifurcación de secuencias: cómo crear árboles de decisión en el ESP para enviar emails distintos según el comportamiento del usuario
- Generación dinámica de contenido con IA: el email genera su cuerpo en tiempo real llamando a una API de IA con los datos del usuario como contexto
- Límites de la personalización: cuándo la personalización excesiva resulta invasiva y cómo mantener la confianza del usuario

6. MEDICIÓN Y OPTIMIZACIÓN
Define el sistema de análisis y mejora de las secuencias:
- Métricas de email de ciclo de vida: tasa de apertura no es suficiente, medir completion rate (cuántos completaron el paso sugerido), impacto en retención a 30 y 90 días
- Correlación email → retención: metodología para medir si los usuarios que abren y clican los emails de onboarding tienen mayor retención
- Proceso de iteración: revisión mensual de cada email de la secuencia con datos reales, identificación del eslabón más débil, hipótesis de mejora, test A/B
- Cómo usar IA para analizar los datos de las secuencias y generar recomendaciones de optimización accionables

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar secuencias de email de onboarding y retención con IA',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Monetización de newsletter freelance con IA como palanca de crecimiento',
                'description'      => 'Diseña un modelo de negocio rentable para una newsletter de nicho como freelancer, usando IA para escalar la producción y diversificar los ingresos.',
                'prompt_content'   => <<<'EOT'
Eres un emprendedor de contenidos y newsletter creator con experiencia en modelos de negocio basados en audiencias de nicho. Necesito tu ayuda para construir un modelo de negocio sólido y escalable alrededor de una newsletter como freelancer o creador independiente, usando IA para producir más con menos tiempo.

Contexto del creador:
- Perfil: profesional con experiencia en un sector específico que quiere monetizar su conocimiento mediante una newsletter
- Estado actual: newsletter con entre 500 y 5.000 suscriptores, publicación irregular, sin modelo de monetización claro
- Objetivo: llegar a 3.000-5.000€ mensuales de ingresos recurrentes en 12 meses con la newsletter como core del negocio

Modelo de negocio de newsletter con IA:

1. ELECCIÓN DEL NICHO Y VALIDACIÓN
Define cómo elegir y validar el nicho de la newsletter:
- Criterios de un buen nicho para newsletter: audiencia con poder adquisitivo, problema específico no resuelto bien por los medios generalistas, mercado lo suficientemente grande para monetizar pero suficientemente pequeño para diferenciarse
- Validación antes de comprometerse: cómo lanzar una edición de prueba con 100 suscriptores y medir el engagement real
- Análisis de la competencia: qué otras newsletters existen en tu nicho, cómo se diferencian, qué gaps dejan sin cubrir
- Cómo usar IA para investigar el nicho: preguntar a la IA sobre los problemas más buscados, el vocabulario del sector, las comunidades existentes

2. MODELOS DE MONETIZACIÓN PARA NEWSLETTERS
Diseña la estrategia de ingresos diversificada:
- Suscripción de pago (Substack, Beehiiv, Ghost): qué contenido poner en abierto y qué detrás del muro de pago, cómo fijar el precio (5-15€ al mes según el nicho), conversión esperada de gratuito a pago (1-5%)
- Patrocinios y publicidad: cómo calcular la tarifa por anuncio según el tamaño de lista (CPM habitual en newsletters de nicho: 30-80€ por mil), qué anunciantes son compatibles con tu audiencia, cómo estructurar el pitch de patrocinio
- Productos digitales: cursos online, plantillas, bases de datos, guías premium que complementan el contenido de la newsletter
- Consultoría y servicios: cómo la newsletter activa la demanda de proyectos freelance de consultoría o formación en tu área de expertise
- Afiliación: programas de afiliados de herramientas o servicios usados por tu audiencia, cómo integrar recomendaciones sin dañar la confianza

3. CRECIMIENTO DE LA LISTA CON IA Y CONTENIDO
Define la estrategia de crecimiento de suscriptores:
- Imán de leads: lead magnet de alto valor para conseguir el primer suscriptor (checklist, plantilla, mini guía) que la IA puede ayudar a producir rápidamente
- Distribución de contenido: cómo reutilizar cada newsletter como hilo de Twitter, carrusel de LinkedIn, artículo de blog y short video, multiplicando el alcance sin multiplicar el trabajo
- SEO para newsletters: cómo publicar el archivo de ediciones pasadas y posicionarlo en Google para captar suscriptores orgánicos
- Colaboraciones: intercambios de menciones con otras newsletters complementarias (newsletter swaps), apariciones como invitado en podcasts del nicho
- Publicidad de pago: cuándo tiene sentido pagar para crecer, qué canales funcionan mejor para newsletters (Meta Ads, Beehiiv Boost, SparkLoop)

4. SISTEMA DE PRODUCCIÓN CON IA
Diseña el flujo de trabajo semanal o quincenal para producir con IA:
- Tiempo total dedicado por edición: objetivo de 3-4 horas para newsletter de pago de calidad con IA, vs. 8-12 horas sin IA
- Fase 1 - Research (30-45 min): uso de IA para monitorizar fuentes del nicho, extraer los temas más relevantes, generar el índice de la edición
- Fase 2 - Redacción (60-90 min): borrador generado con IA a partir del índice, personalización de la voz del autor, ejemplos propios y perspectiva única
- Fase 3 - Edición (30-45 min): revisión humana imprescindible, corrección de imprecisiones, inyección de experiencia personal que la IA no puede replicar
- Fase 4 - Diseño y envío (30 min): montaje en la plataforma, revisión de links, programación del envío

5. COMUNIDAD Y ENGAGEMENT
Construye engagement más allá del email:
- Discord o comunidad privada: cómo crear una comunidad de pago alrededor de la newsletter para suscriptores premium
- Eventos en directo: webinars mensuales exclusivos para suscriptores de pago como refuerzo del valor de la suscripción
- AMAs (Ask Me Anything): sesiones de preguntas y respuestas en directo o por escrito para generar engagement y ideas de contenido
- Red de suscriptores: cómo conectar a los suscriptores entre sí (directorio de miembros, canales de networking) para aumentar el valor percibido de la comunidad

6. MÉTRICAS DEL NEGOCIO DE NEWSLETTER
Define los indicadores clave del negocio:
- MRR de suscripciones de pago: ingreso mensual recurrente y su evolución
- Churn mensual: porcentaje de cancelaciones, objetivo por debajo del 3% mensual
- LTV por suscriptor de pago: cuánto tiempo permanece el suscriptor de media multiplicado por la cuota mensual
- Tasa de conversión freemium a pago: porcentaje de suscriptores gratuitos que se convierten, objetivo 2-5%
- Revenue total diversificado: qué porcentaje vienen de suscripciones, patrocinios y productos propios
- Cómo usar IA para analizar los datos de la newsletter y generar un informe mensual del estado del negocio con recomendaciones accionables

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Monetizar newsletter freelance de nicho con IA para escalar ingresos',
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
