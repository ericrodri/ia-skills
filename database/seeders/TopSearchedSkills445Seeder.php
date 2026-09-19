<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills445Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Lead scoring predictivo con IA para campañas de marketing',
                'description'      => 'Aplica modelos de inteligencia artificial para puntuar y priorizar leads automáticamente, maximizando el retorno de tus campañas de demand generation.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing basado en datos y generación de demanda. Tu tarea es ayudarme a implementar un sistema de lead scoring predictivo con inteligencia artificial para optimizar mis campañas de marketing.

objetivo: Construir un modelo de puntuación de leads que identifique automáticamente cuáles prospectos tienen mayor probabilidad de convertirse en clientes, permitiendo que el equipo de marketing enfoque recursos en los segmentos de mayor valor.

instrucción principal:
Analiza los siguientes elementos para construir el sistema de lead scoring:

1. DATOS DEMOGRÁFICOS Y FIRMOGRÁFICOS
Define qué atributos del lead deben recibir mayor peso en la puntuación:
- Tamaño de empresa (número de empleados, facturación anual)
- Sector o industria (alineación con tu ICP - Ideal Customer Profile)
- Cargo y nivel de antigüedad del contacto
- Ubicación geográfica y mercado objetivo
- Tecnologías utilizadas (tech stack del prospecto)

2. DATOS DE COMPORTAMIENTO
Incorpora señales de intención que indiquen interés activo:
- Páginas visitadas en el sitio web y tiempo de permanencia
- Descargas de contenido (ebooks, whitepapers, casos de estudio)
- Asistencia a webinars o eventos
- Aperturas y clics en campañas de email
- Interacciones en redes sociales con tu marca
- Búsquedas orgánicas de términos relacionados con tu producto

3. MODELO DE PUNTUACIÓN
Construye la matriz de scoring con los siguientes rangos:
- 0-30 puntos: Lead frío (nurturing automático, contenido educativo)
- 31-60 puntos: Lead templado (secuencias de email personalizadas, retargeting)
- 61-85 puntos: Lead caliente (contacto de SDR, demo personalizada)
- 86-100 puntos: Lead muy caliente (prioridad alta, contacto inmediato del AE)

4. INTEGRACIÓN CON HERRAMIENTAS
Detalla cómo conectar el modelo con:
- CRM (Salesforce, HubSpot, Pipedrive)
- Plataforma de automatización de marketing
- Herramientas de enriquecimiento de datos (Clearbit, ZoomInfo, Apollo)
- Dashboard de reporting para el equipo

5. CRITERIOS DE DEGRADACIÓN
Define cuándo restar puntos a un lead:
- Inactividad prolongada (más de 45 días sin interacción)
- Visitas a páginas de desuscripción o careers
- Cargo o empresa fuera del ICP
- Rebotes de email o número de teléfono inválido

6. CICLO DE MEJORA CONTINUA
Establece un proceso para refinar el modelo:
- Revisión mensual de leads convertidos vs. no convertidos
- A/B testing de umbrales de puntuación
- Retroalimentación del equipo de ventas sobre calidad de leads
- Ajuste de pesos según datos históricos de conversión

tarea final:
Genera una propuesta estructurada de lead scoring para mi empresa, incluyendo: tabla de atributos con pesos sugeridos, flujo de trabajo de automatización, métricas de éxito (MQL, SQL, tasa de conversión por segmento) y un plan de implementación de 90 días para poner en marcha el sistema.

Incluye ejemplos concretos de reglas de automatización y sugiere qué herramientas de IA (como Einstein Analytics, Marketo AI, o modelos propios en Python/sklearn) serían más adecuadas según el volumen de datos disponible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar lead scoring predictivo con IA para priorizar prospectos y maximizar conversiones en campañas de marketing.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de APIs para captura y enriquecimiento de leads con IA',
                'description'      => 'Diseña e implementa un sistema backend que capture leads desde múltiples fuentes, los enriquezca automáticamente y los distribuya al CRM usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de captación de datos y pipelines de marketing tecnológico. Tu objetivo es ayudarme a diseñar una arquitectura de APIs robusta para gestionar el ciclo completo de captura, enriquecimiento y distribución de leads utilizando inteligencia artificial.

objetivo: Construir un backend escalable que reciba leads desde múltiples puntos de contacto (formularios web, eventos, integraciones con plataformas de terceros), los enriquezca con datos adicionales mediante APIs de IA, y los entregue al CRM con el perfil completo del prospecto.

instrucción 1 — Fuentes de captura de leads:
Define los endpoints necesarios para recibir leads desde:
- Formularios web (REST API con validación en tiempo real)
- Webhooks de plataformas publicitarias (Meta Ads, Google Ads, LinkedIn Ads)
- Integraciones nativas con herramientas de eventos (Eventbrite, Hopin)
- Chat en vivo y chatbots (Intercom, Drift, ManyChat)
- Extensiones de scraping ético y LinkedIn Sales Navigator

instrucción 2 — Pipeline de enriquecimiento con IA:
Diseña el flujo de procesamiento asíncrono:
1. Recepción del lead básico (email, nombre, empresa)
2. Validación y deduplicación mediante embeddings vectoriales
3. Enriquecimiento con Clearbit/Apollo/Hunter.io (cargo, tamaño empresa, LinkedIn URL)
4. Clasificación automática por ICP usando un modelo de ML entrenado con datos históricos
5. Scoring predictivo basado en atributos firmográficos y comportamentales
6. Detección de intención de compra mediante análisis semántico de mensajes de formulario

instrucción 3 — Stack tecnológico recomendado:
Detalla la implementación con:
- Lenguaje: Node.js (Fastify) o Python (FastAPI) para los microservicios
- Cola de mensajes: Redis Streams o RabbitMQ para procesamiento asíncrono
- Base de datos: PostgreSQL para almacenamiento principal + Pinecone para búsqueda vectorial
- Cache: Redis para deduplicación en tiempo real
- Orquestación: Docker Compose para desarrollo, Kubernetes para producción

instrucción 4 — Integraciones con CRM:
Implementa conectores para:
- HubSpot API v3 (creación de contactos, deals, asociaciones)
- Salesforce REST API (lead creation con custom fields)
- Pipedrive API (persons y deals con pipeline routing)
- Gestión de errores y reintentos con backoff exponencial

instrucción 5 — Seguridad y compliance:
Incluye medidas para:
- Rate limiting por IP y por API key
- Validación de datos PII con enmascaramiento en logs
- Cumplimiento GDPR/CCPA: consentimiento explícito y derecho al olvido
- Auditoría de todas las transformaciones de datos

tarea final:
Genera el diseño completo de la arquitectura, incluyendo: diagrama de componentes (en formato texto/ASCII), contratos de API en OpenAPI 3.0, esquema de base de datos con índices optimizados, y un plan de monitoreo con métricas clave (latencia p99, tasa de enriquecimiento exitoso, duplicados detectados). Incluye ejemplos de código para los componentes más críticos del pipeline.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar un sistema backend de captura, enriquecimiento y distribución de leads con IA para maximizar la calidad de los prospectos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de landing pages de alta conversión con IA para demand generation',
                'description'      => 'Crea landing pages visualmente poderosas y orientadas a la conversión, utilizando IA para optimizar copy, jerarquía visual y elementos de captura de leads.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI especializado en conversion rate optimization (CRO) y demand generation. Tu misión es ayudarme a diseñar landing pages de alta conversión que capturen leads de calidad para campañas de marketing B2B o B2C.

objetivo: Crear el diseño completo de una landing page optimizada para la captación de leads, aplicando principios de psicología del comportamiento, diseño persuasivo y las mejores prácticas de CRO potenciadas por inteligencia artificial.

instrucción 1 — Estructura y jerarquía visual:
Define el layout de la página siguiendo el patrón F o Z de lectura:
- Hero section: propuesta de valor principal en 7 palabras o menos, subheadline que amplía el beneficio, CTA primario visible above the fold
- Sección de prueba social: logos de clientes, número de usuarios, testimonios con foto y cargo
- Sección de beneficios: 3-5 puntos clave con iconografía consistente
- Sección de características: tabla comparativa o cards con detalles del producto/servicio
- Sección de garantía o reducción de riesgo: política de devolución, prueba gratuita, sin tarjeta
- CTA secundario: formulario de captura simplificado (máximo 3 campos)
- Footer mínimo: links legales, logo, sin distractores de navegación

instrucción 2 — Optimización del formulario de captura:
Diseña el formulario aplicando principios de fricción mínima:
- Número óptimo de campos según el objetivo (1 campo para awareness, 3-5 para MQL calificado)
- Microinteracciones de validación en tiempo real
- Progressive disclosure para formularios largos (multi-step wizard)
- Social proof junto al CTA ("Únete a 12.000 profesionales")
- Botón de envío con copy específico (evitar "Enviar", usar "Obtener mi guía gratis")

instrucción 3 — Paleta visual y tipografía para conversión:
Recomienda decisiones de diseño basadas en datos:
- Color del CTA primario: contraste alto con el fondo, color de acción (naranja, verde, azul brillante según el contexto de marca)
- Tipografía: sans-serif para legibilidad en pantallas, escala tipográfica con jerarquía clara
- Espaciado: uso generoso de whitespace para dirigir la atención
- Imágenes: personas reales usando el producto, caras mirando hacia el CTA (eye-tracking)
- Video: autoplay muted en hero aumenta conversión un 80% en B2B

instrucción 4 — Elementos de urgencia y escasez:
Incorpora activadores psicológicos éticos:
- Contador de tiempo para ofertas limitadas
- Indicador de disponibilidad ("Solo quedan 12 plazas")
- Notificaciones de actividad social en tiempo real ("Maria de Barcelona acaba de descargar esto")
- Badges de validación: "Más de 500 descargas esta semana"

instrucción 5 — Optimización para IA y testing:
Planifica el proceso de mejora continua:
- Variantes para A/B testing: headline, imagen hero, color del CTA, longitud del formulario
- Heatmaps y session recordings (Hotjar, Microsoft Clarity)
- Análisis con IA de patrones de abandono del formulario
- Personalización dinámica por fuente de tráfico (distinto hero para tráfico de LinkedIn vs. Google)

tarea final:
Genera una especificación completa de diseño para mi landing page, incluyendo: wireframe en texto estructurado con todas las secciones, copy sugerido para cada bloque, paleta de colores con códigos HEX, lista de assets necesarios, y un plan de testing de 30 días con hipótesis priorizadas por impacto potencial. Adapta las recomendaciones al sector y tipo de oferta que yo te indique.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar landing pages optimizadas para la captura de leads con los principios de CRO y personalización con IA.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Prospección automatizada de clientes B2B con inteligencia artificial',
                'description'      => 'Implementa un sistema de outbound prospecting que use IA para identificar, calificar y contactar prospectos ideales de forma personalizada y escalable.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B y outbound prospecting con profundo conocimiento en herramientas de automatización e inteligencia artificial. Tu objetivo es ayudarme a construir un sistema de prospección automatizada que genere un flujo constante de oportunidades de venta calificadas.

objetivo: Diseñar e implementar un proceso de prospecting que utilice IA para identificar prospectos que encajan con mi ICP, personalizar el outreach a escala, y aumentar significativamente la tasa de respuesta y agendamiento de llamadas.

instrucción 1 — Definición del ICP (Ideal Customer Profile):
Construye el perfil detallado del cliente ideal:
- Rango de facturación anual de la empresa objetivo
- Número de empleados y estructura organizacional
- Sectores e industrias prioritarias
- Tecnologías que usa el prospecto (tech stack como señal de intención)
- Dolores específicos que tu solución resuelve
- Cargo del decisor principal y del influenciador
- Señales de compra: financiamiento reciente, crecimiento de equipo, expansión a nuevos mercados

instrucción 2 — Fuentes de datos para prospección:
Identifica y configura las fuentes de prospectos:
- LinkedIn Sales Navigator: búsquedas booleanas avanzadas para encontrar decisores
- Apollo.io o Hunter.io: extracción de emails verificados y datos firmográficos
- G2/Capterra: prospectos que evalúan soluciones de la competencia
- Job boards: empresas que contratan roles relacionados con el problema que resuelves
- Noticias de prensa: financiamientos Serie A/B, nuevos lanzamientos, expansiones
- GitHub: repositorios que usan tecnologías complementarias a tu producto

instrucción 3 — Personalización a escala con IA:
Implementa personalización en tres niveles:
- Nivel 1 (industria): adapta el mensaje al sector específico del prospecto
- Nivel 2 (empresa): menciona un dato concreto de la empresa (noticias recientes, crecimiento, tecnología usada)
- Nivel 3 (persona): referencia algo específico del perfil de LinkedIn del contacto (publicación reciente, cargo anterior, conexiones en común)

Usa IA para generar las primeras líneas personalizadas de cada email de forma automática, manteniendo el resto del mensaje como template.

instrucción 4 — Secuencia de outreach multicanal:
Diseña la secuencia de contacto:
- Día 1: Conexión en LinkedIn sin nota o con nota de valor
- Día 3: Email 1 — problema + solución + CTA suave (responder sí/no)
- Día 7: LinkedIn message de seguimiento con case study relevante
- Día 10: Email 2 — diferente ángulo (ROI, competencia, urgencia)
- Día 14: Llamada en frío con voicemail preparado
- Día 18: Email 3 — "¿sigue siendo relevante?" / breakup email

instrucción 5 — Métricas y optimización:
Define los KPIs del sistema de prospección:
- Tasa de apertura de emails (objetivo: >40%)
- Tasa de respuesta (objetivo: >8%)
- Tasa de reuniones agendadas por cada 100 prospectos contactados
- Tiempo medio de respuesta de leads
- Pipeline generado por canal (LinkedIn vs. email vs. llamada)

tarea final:
Genera un playbook completo de prospección para mi empresa, incluyendo: plantillas de email para cada punto de la secuencia, scripts de llamada en frío, mensajes de LinkedIn personalizados, lista de herramientas recomendadas con costes estimados, y un plan de implementación de 60 días con metas semanales de actividad y pipeline generado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un sistema de prospección B2B automatizada con IA para generar un flujo constante de oportunidades calificadas.',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia product-led growth con IA para generación de demanda orgánica',
                'description'      => 'Diseña un modelo PLG donde el propio producto actúa como el principal canal de captación de leads, potenciado por análisis de comportamiento con inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product-led growth (PLG) y estrategia de producto con experiencia en empresas SaaS de alto crecimiento. Tu objetivo es ayudarme a diseñar una estrategia donde el propio producto sea el motor principal de captación y conversión de nuevos usuarios, utilizando inteligencia artificial para optimizar cada etapa del funnel.

objetivo: Crear un modelo PLG completo que genere demanda orgánica, reduzca el costo de adquisición de clientes (CAC) y acelere el ciclo de ventas mediante una experiencia de producto que se auto-promueve.

instrucción 1 — Modelo de entrada al producto:
Define la estrategia de acceso:
- Freemium: acceso gratuito con límites en uso o funcionalidades
- Free trial: acceso completo por tiempo limitado (14 o 30 días)
- Reverse trial: acceso al plan premium por defecto, con downgrade al free al terminar
Analiza cuál modelo encaja mejor según el ciclo de ventas, el valor percibido inicial y el tiempo al valor (TTV - Time to Value).

instrucción 2 — Optimización del onboarding con IA:
Diseña el flujo de activación:
- Definición del "momento aha": acción específica que convierte usuarios en retenidos
- Onboarding personalizado según el rol y caso de uso del usuario (recogido en el signup)
- Tooltips y guías contextuales activados por comportamiento (no por tiempo)
- Emails de activación basados en acciones completadas vs. no completadas
- IA que predice qué usuarios están en riesgo de abandono en las primeras 48 horas

instrucción 3 — Viralidad y loops de crecimiento:
Implementa mecanismos de crecimiento viral:
- Loops de invitación: el usuario obtiene valor extra al invitar a colegas
- Compartición nativa: outputs del producto que se comparten en redes sociales o email
- Colaboración en equipo: la experiencia mejora cuantos más usuarios hay en el workspace
- Branded free tier: el producto lleva tu marca cuando es compartido externamente
- Integraciones como canal: conexiones con Slack, Notion, Google Workspace que exponen tu producto

instrucción 4 — Señales de Product Qualified Lead (PQL):
Define cuándo un usuario free está listo para comprar:
- Ha completado el "momento aha" más de 3 veces en 7 días
- Ha invitado a 2 o más colegas
- Ha alcanzado el 80% del límite del plan gratuito
- Ha accedido a funcionalidades premium bloqueadas más de 5 veces
- Usa el producto más de 4 días a la semana durante 3 semanas consecutivas

instrucción 5 — Estrategia de expansión y upsell:
Diseña el camino de conversión:
- Notificaciones in-app personalizadas en el momento de fricción
- Página de pricing con comparativa de planes clara y contextual
- Prueba del plan superior activada automáticamente en hitos clave
- Sales-assist motion: el equipo de ventas contacta solo los PQLs de mayor valor

tarea final:
Genera un plan PLG completo para mi producto, incluyendo: definición del momento aha específico para mi caso de uso, mapa de onboarding con todos los touchpoints automatizados, lista de señales PQL con puntuación, métricas de growth a monitorear (tiempo al primer valor, DAU/MAU, NRR), y un roadmap de 90 días para implementar el modelo PLG de forma progresiva.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar una estrategia product-led growth con IA para generar demanda orgánica y reducir el CAC.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding con IA para atraer talento como lead generation de candidatos',
                'description'      => 'Aplica técnicas de demand generation al reclutamiento, usando IA para construir una marca empleadora que atraiga prospectos de talento de forma continua y orgánica.',
                'prompt_content'   => <<<'EOT'
Eres un experto en recursos humanos, employer branding y talent acquisition con experiencia en aplicar metodologías de marketing digital a la captación de candidatos. Tu objetivo es ayudarme a construir una estrategia de employer branding que funcione como un sistema de generación continua de candidatos cualificados.

objetivo: Diseñar y ejecutar una estrategia de employer branding que posicione a la empresa como destino de empleo de referencia en su sector, generando un pipeline constante de candidatos pasivos que se convierten en solicitantes activos.

instrucción 1 — Auditoría de marca empleadora actual:
Analiza el punto de partida:
- Perfil de empresa en LinkedIn, Glassdoor, Indeed y Infojobs
- Puntuación y comentarios de empleados actuales y ex-empleados
- Comparativa con los tres principales competidores en términos de percepción de marca
- Análisis de las publicaciones más exitosas del equipo en redes sociales
- Keywords asociadas a la marca empleadora (positivas y negativas)

instrucción 2 — EVP (Employee Value Proposition):
Define la propuesta de valor para empleados:
- Qué hace única a la empresa como lugar de trabajo (cultura, misión, impacto)
- Beneficios diferenciales vs. el mercado (flexibilidad, desarrollo profesional, compensación)
- Testimonios auténticos de empleados en diferentes roles y niveles
- Logros y reconocimientos de la empresa (certificaciones, premios, cobertura de prensa)
- El "por qué" que conecta emocionalmente con el talento que quieres atraer

instrucción 3 — Estrategia de contenido para atracción de talento:
Crea el plan editorial:
- LinkedIn: posts sobre cultura, proyectos, equipo y detrás de cámaras (3 veces por semana)
- Blog de carreras: casos de éxito de empleados, cómo es trabajar en cada equipo
- Video: "un día en la vida de" para los roles más demandados
- Podcast o newsletter interno que se comparte externamente
- GitHub, Dribbble, Behance: presencia en las plataformas donde está el talento técnico o creativo

instrucción 4 — Automatización con IA para el pipeline de talento:
Implementa herramientas de captación:
- Chatbot en la página de carreras para calificar candidatos fuera de horario laboral
- Alertas de empleo personalizadas según el perfil del candidato
- Nurturing de candidatos pasivos con contenido relevante según su perfil
- Análisis predictivo de qué candidatos tienen más probabilidad de aceptar una oferta
- ATS con scoring automático de CVs basado en el perfil del puesto

instrucción 5 — Métricas de employer branding como canal de adquisición:
Define los KPIs:
- Número de candidatos espontáneos por mes (demanda inbound)
- Tasa de conversión de visita a página de carreras a aplicación
- Calidad de los candidatos (porcentaje que pasan la primera criba)
- Tiempo medio de cobertura de vacantes vs. benchmark del sector
- eNPS (Employee Net Promoter Score) y su correlación con la atracción de talento

tarea final:
Genera una estrategia de employer branding de 6 meses para mi empresa, incluyendo: EVP en 3 versiones (para perfiles técnicos, creativos y comerciales), calendario editorial mensual con temas y formatos, lista de herramientas de IA para el pipeline de talento con estimación de costes, y un plan de medición con dashboards de seguimiento para presentar al Comité de Dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una estrategia de employer branding que genere un pipeline continuo de candidatos cualificados usando IA.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelado del ROI de campañas de demand generation con IA para finanzas',
                'description'      => 'Construye modelos financieros precisos para medir el retorno real de las campañas de generación de demanda, atribuyendo ingresos correctamente con ayuda de inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en modelos de atribución de marketing y análisis de retorno sobre inversión (ROI). Tu objetivo es ayudarme a construir un framework financiero riguroso para medir el impacto real de las campañas de demand generation y justificar la inversión en marketing ante el equipo directivo.

objetivo: Diseñar un modelo de ROI completo para campañas de demand generation que permita tomar decisiones basadas en datos sobre la asignación presupuestaria, optimizar el gasto en marketing y demostrar el valor económico de cada canal de captación de leads.

instrucción 1 — Fundamentos del modelo de atribución:
Define el modelo de atribución más adecuado para tu ciclo de ventas:
- First-touch: asigna el 100% del crédito al primer canal de contacto
- Last-touch: asigna el 100% al último punto antes de la conversión
- Linear: distribuye el crédito de forma equitativa entre todos los touchpoints
- Time-decay: da más peso a los touchpoints más cercanos a la conversión
- Data-driven: modelo de machine learning que pondera según el impacto real histórico
Analiza cuál es más adecuado según la duración del ciclo de ventas y el número de touchpoints promedio.

instrucción 2 — Estructura del modelo financiero:
Construye el modelo con los siguientes componentes:
- Inversión total por canal: paid search, social ads, contenido, eventos, SDR outbound
- CPL (Costo Por Lead) por canal y segmento de ICP
- Tasa de conversión Lead > MQL > SQL > Oportunidad > Cliente
- ACV (Annual Contract Value) promedio por segmento
- Tiempo medio del ciclo de ventas en días
- LTV (Lifetime Value) por cohorte de adquisición
- Payback period por canal de adquisición

instrucción 3 — Cálculo del ROI ajustado:
Aplica ajustes para un ROI más preciso:
- Costes indirectos: herramientas de marketing automation, salarios del equipo, agencias
- Atribución multicanal: distribuye el ingreso entre todos los canales del journey
- Factores de tiempo: descuento del flujo de caja por el ciclo de ventas largo
- Análisis de contribución marginal: ROI incremental de aumentar el presupuesto en cada canal
- Comparación con el coste de no invertir (impacto en crecimiento si se recorta el presupuesto)

instrucción 4 — Dashboard de reporting financiero:
Diseña las visualizaciones para el CFO y el board:
- Gráfico de embudo con tasas de conversión y valor por etapa
- Tabla de contribución por canal (inversión, leads, MQLs, revenue atribuido, ROI)
- Tendencia mensual de CAC, LTV y ratio LTV/CAC (objetivo: >3x)
- Proyección de pipeline y revenue para los próximos 3 meses
- Análisis de sensibilidad: qué pasa con el revenue si el presupuesto de marketing varía ±20%

instrucción 5 — Optimización basada en datos con IA:
Implementa mejoras continuas:
- Modelo predictivo de conversión por segmento y canal
- Alertas automáticas cuando el CPL supera el umbral rentable
- Recomendaciones de reasignación presupuestaria basadas en rendimiento histórico
- Forecast de pipeline ajustado por probabilidad de cierre con ML

tarea final:
Construye el modelo financiero completo para mi empresa, incluyendo: plantilla de hoja de cálculo con todas las métricas y fórmulas, ejemplos con datos simulados para validar la lógica, narrativa ejecutiva para presentar al CFO, y recomendaciones de herramientas (Tableau, Looker, Power BI, o Python con pandas) para automatizar el reporting mensual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir modelos financieros de ROI para campañas de demand generation con atribución multicanal y análisis predictivo.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance legal en captación de leads con IA: GDPR, CCPA y normativa española',
                'description'      => 'Asegura que tus estrategias de generación de leads cumplan con la normativa de protección de datos vigente, con especial atención a GDPR, LOPDGDD y el uso de IA en el procesamiento de datos personales.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en protección de datos y privacidad digital con experiencia en el asesoramiento a empresas sobre el cumplimiento normativo en sus estrategias de marketing digital. Tu objetivo es ayudarme a diseñar un framework legal completo para que mis actividades de captación de leads sean plenamente conformes con la normativa aplicable.

objetivo: Crear un protocolo de compliance que garantice que todas las actividades de demand generation —desde la captura del lead hasta su procesamiento y almacenamiento— cumplen con el GDPR, la LOPDGDD española, la LSSI (Ley de Servicios de la Sociedad de la Información) y, donde aplique, el CCPA californiano.

instrucción 1 — Base legal para el procesamiento de datos de leads:
Define la base jurídica adecuada según el contexto:
- Consentimiento explícito: cuándo es necesario, cómo debe obtenerse y documentarse
- Interés legítimo: criterios para su aplicación en marketing B2B y cómo documentar el test de balance
- Ejecución de contrato: para datos necesarios para prestar el servicio solicitado
- Obligación legal: casos donde el tratamiento es requerido por ley
Analiza qué base legal aplica en cada punto del funnel de captación de leads.

instrucción 2 — Diseño de formularios de captación conformes:
Especifica los elementos obligatorios en cada formulario:
- Información de primera capa: quién es el responsable del tratamiento, finalidad principal, ejercicio de derechos
- Checkbox de consentimiento: granular, sin casillas pre-marcadas, separado de los términos de servicio
- Enlace a política de privacidad completa (segunda capa)
- Consentimiento separado para comunicaciones comerciales vs. gestión de la relación
- Registro de consentimiento con timestamp, IP y versión de la política vigente

instrucción 3 — Transferencias internacionales de datos:
Aborda los escenarios más comunes en marketing digital:
- Uso de herramientas de CRM y marketing automation con servidores en EE.UU. (HubSpot, Salesforce, Mailchimp)
- Cláusulas contractuales tipo (SCCs) y cómo documentar el acuerdo
- Adecuación del país tercero: lista actualizada de países con decisión de adecuación
- Binding Corporate Rules para grupos empresariales multinacionales
- Evaluaciones de impacto de transferencia (TIA) post-Schrems II

instrucción 4 — IA y tratamiento automatizado en el pipeline de leads:
Regula el uso de IA en la generación y procesamiento de leads:
- Artículo 22 GDPR: decisiones automatizadas y perfilado con efectos significativos
- Derecho a la explicación de las decisiones tomadas por algoritmos de scoring
- Evaluación de Impacto en Protección de Datos (EIPD/DPIA) para sistemas de IA de alto riesgo
- AI Act europeo: clasificación del riesgo de los sistemas de IA usados en marketing
- Obligaciones de transparencia con los titulares de los datos sobre el uso de IA

instrucción 5 — Gestión de derechos de los interesados:
Implementa el proceso para atender:
- Derecho de acceso: cómo verificar la identidad y qué información proporcionar
- Derecho de supresión ("derecho al olvido"): protocolo de eliminación en CRM, backups y terceros
- Derecho de oposición al marketing directo: desuscripción inmediata y efectiva
- Portabilidad: exportación de datos en formato estructurado y legible por máquina
- Plazos legales: respuesta en 1 mes, ampliable a 3 en casos complejos

tarea final:
Genera un protocolo de compliance completo para mis actividades de demand generation, incluyendo: checklist de cumplimiento por canal (formularios web, email marketing, LinkedIn, llamadas), plantillas de cláusulas de privacidad adaptadas a cada contexto, registro de actividades de tratamiento (RAT) para las actividades de marketing, y un plan de respuesta ante solicitudes de derechos de los interesados con tiempos y responsables. Incluye referencias a los artículos específicos del GDPR y la LOPDGDD aplicables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Garantizar el cumplimiento legal de las estrategias de captación de leads con GDPR, LOPDGDD y normativa de IA.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success como canal de generación de demanda con IA',
                'description'      => 'Transforma tu equipo de customer success en un motor de generación de leads mediante referencias, expansión de cuentas y advocacy de clientes, potenciado con IA.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success y growth con experiencia en transformar equipos de soporte y éxito de clientes en canales activos de generación de ingresos y nuevos leads. Tu objetivo es ayudarme a diseñar un programa que convierta a los clientes satisfechos en la fuente más rentable de nuevos prospectos.

objetivo: Crear un sistema de customer success-led growth donde los clientes existentes sean el principal motor de demanda, mediante referencias activas, expansión de cuentas y programas de advocacy, todo optimizado con herramientas de inteligencia artificial.

instrucción 1 — Identificación de clientes promotores con IA:
Define el proceso para encontrar los mejores embajadores:
- Análisis de NPS: segmentación de promotores (9-10), pasivos (7-8) y detractores (0-6)
- Health score: métricas de salud de la cuenta (uso del producto, ROI obtenido, relación con el equipo)
- Señales de expansión: identificación de clientes con potencial de upsell o cross-sell
- Análisis de sentiment en tickets de soporte y calls con IA (Gong, Chorus)
- Predicción de churno para priorizar la retención antes de que sea tarde

instrucción 2 — Programa de referencias estructurado:
Diseña el sistema de incentivos para referencias:
- Incentivos económicos: descuento en la renovación, créditos de producto, comisión en efectivo
- Incentivos no económicos: acceso anticipado a nuevas funcionalidades, co-marketing, visibilidad de marca
- Proceso de referencia: formulario simple, tracking del origen, comunicación de estado al promotor
- Gamificación: ranking de clientes referidores, badges, reconocimiento público
- SLA para el seguimiento de referencias: contacto en menos de 24 horas, actualización semanal al referidor

instrucción 3 — Expansión de cuentas como generación de pipeline:
Implementa la estrategia de growth dentro de las cuentas existentes:
- Mapeo de stakeholders: identificar nuevos decisores y usuarios en la organización cliente
- Land and expand: venta inicial mínima seguida de expansión progresiva por departamento
- Business review trimestral: presentar ROI obtenido y oportunidades de mayor valor
- Alertas de expansión automáticas: notificación al CSM cuando un cliente alcanza umbrales de uso
- Playbook de upsell: cuándo y cómo presentar el upgrade al plan superior

instrucción 4 — Programa de advocacy y co-marketing:
Convierte clientes en generadores de contenido:
- Casos de estudio: proceso para identificar, entrevistar y publicar historias de éxito
- Testimonios en vídeo: guía de producción con preguntas estructuradas y proceso de aprobación
- Webinars y eventos: clientes como ponentes en eventos propios o sectoriales
- Reseñas en G2, Capterra, Trustpilot: programa de solicitud sistemática con timing óptimo
- Comunidad de usuarios: foro o Slack privado que genera engagement y retención

instrucción 5 — Métricas de CS como canal de demanda:
Define los KPIs del programa:
- Revenue de referencias: porcentaje del ARR total proveniente de clientes actuales
- Net Revenue Retention (NRR): objetivo >120% indicando expansión neta
- Tasa de referencia: porcentaje de promotores que generan al menos una referencia activa al año
- Valor medio de un cliente referenciado vs. leads de otros canales
- CAC de referencia vs. CAC de paid acquisition (objetivo: referencia sea 5-10x más barato)

tarea final:
Genera un programa completo de CS-led growth para mi empresa, incluyendo: plantilla de health score con pesos por métrica, playbook de referencias con scripts de conversación para los CSMs, calendario de business reviews con agenda tipo, plan de 90 días para lanzar el programa de advocacy, y un dashboard de métricas en tiempo real para el equipo de customer success.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir el equipo de customer success en un canal de generación de leads mediante referencias y advocacy de clientes.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de captación de clientes para freelancers con IA y automatización',
                'description'      => 'Construye un sistema de demand generation personalizado para freelancers que genere un flujo constante de leads de calidad sin depender de plataformas intermediarias.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocio para freelancers y profesionales independientes con experiencia en marketing personal y sistemas de captación de clientes. Tu objetivo es ayudarme a construir un sistema propio de generación de demanda que funcione de forma automática y me libere de depender de plataformas como Fiverr, Upwork o InfoJobs.

objetivo: Diseñar un ecosistema de marketing personal que me posicione como referente en mi nicho, genere leads calificados de forma continua y me permita trabajar con los clientes que elijo, a las tarifas que merezco, sin intermediarios que se lleven una comisión.

instrucción 1 — Definición del nicho y posicionamiento:
Clarifica tu propuesta de valor como freelancer:
- Especialización: definir el nicho más rentable y menos competido dentro de tu área de expertise
- ICP del freelancer: el tipo de cliente ideal (sector, tamaño de empresa, presupuesto, problema concreto)
- Propuesta de valor única: qué te hace diferente de los 10.000 freelancers que hacen lo mismo
- Prueba social disponible: portfolio, resultados medibles, testimonios, casos de éxito
- Tarifa objetivo y cómo justificarla ante los clientes

instrucción 2 — Presencia digital como imán de clientes:
Construye los activos de captación:
- LinkedIn optimizado: headline que describe el resultado que ofreces, no tu cargo; about centrado en el cliente, no en ti
- Web personal con landing page orientada a conversión (no portfolio estático)
- Contenido educativo: artículos, posts o vídeos que demuestran expertise y atraen a clientes con ese problema
- Lead magnet: recurso gratuito de alto valor (checklist, plantilla, mini-curso) a cambio del email
- Perfil en directorios especializados del nicho (no generalistas)

instrucción 3 — Sistema de referidos y red de contactos:
Activa tu red existente como fuente de leads:
- Mapa de contactos: categoriza a tus 50 contactos más valiosos por influencia y afinidad
- Campaña de reactivación: contacta a ex-clientes y colaboradores con un mensaje de valor, no de venta
- Programa de referidos para clientes actuales: incentivo claro por cada cliente referido que cierra
- Alianzas estratégicas: identifica 3-5 profesionales complementarios (no competidores) para intercambiar referidos
- Comunidades online: foros, grupos de Slack, Discord y LinkedIn donde está tu cliente ideal

instrucción 4 — Automatización con IA para escalar sin trabajar más horas:
Implementa herramientas que multiplican tu presencia:
- IA para la creación de contenido: genera 30 ideas de posts en 20 minutos, escribe primeros borradores
- Email marketing automatizado: secuencia de nurturing para leads que se descargan tu lead magnet
- Chatbot en tu web: califica leads, responde preguntas frecuentes y agenda calls automáticamente
- CRM gratuito o de bajo coste (HubSpot free, Notion CRM) para hacer seguimiento de oportunidades
- Alertas de oportunidades: Google Alerts + herramientas de social listening para encontrar conversaciones donde puedes aportar valor

instrucción 5 — Proceso de cierre y gestión del pipeline freelance:
Diseña el embudo de ventas simplificado:
- Página de "trabaja conmigo": preguntas de calificación para filtrar clientes no ideales
- Discovery call: estructura de 30 minutos para entender el problema y presentar tu solución
- Propuesta tipo: plantilla que describe el resultado, el proceso, el precio y las garantías
- Seguimiento: secuencia de emails de seguimiento automatizados si el prospecto no responde
- Cierre: cómo manejar objeciones de precio y urgencia sin negociar a la baja

tarea final:
Genera mi sistema de captación de clientes personalizado, incluyendo: headline de LinkedIn optimizado para mi nicho, estructura de la landing page de mi web, plan de contenido mensual con temas y formatos, guión de la discovery call, plantilla de propuesta comercial, y un plan de implementación de 8 semanas para lanzar el sistema con tareas concretas por semana. Dame las herramientas de IA específicas más adecuadas para freelancers con presupuesto limitado (menos de 50€/mes).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema propio de captación de clientes para freelancers con IA, sin depender de plataformas intermediarias.',
                'vote_score'       => 58,
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
