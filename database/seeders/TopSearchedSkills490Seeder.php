<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills490Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Identificación de micro-influencers con IA para campañas de marketing',
                'description'      => 'Usa Claude para descubrir y evaluar micro-influencers relevantes para tu marca, analizar su autenticidad y estimar el ROI potencial antes de contactarlos.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en influencer marketing con profundo conocimiento en análisis de datos y estrategia de contenido digital.

Tu tarea es ayudarme a identificar y evaluar micro-influencers para una campaña de marketing. Necesito un sistema completo de análisis que me permita tomar decisiones basadas en datos reales y no en suposiciones.

**Contexto del brief que debes pedirme:**
Antes de comenzar, solicítame la siguiente información:
1. Nombre de la marca y categoría de producto o servicio
2. Presupuesto disponible para la campaña de influencers
3. Público objetivo (edad, intereses, ubicación geográfica)
4. Plataformas prioritarias (Instagram, TikTok, YouTube, etc.)
5. Objetivos de la campaña (awareness, conversiones, engagement, tráfico web)
6. Valores de marca que el influencer debe compartir

**Fase 1: Criterios de selección inteligente**
Una vez que tengas el contexto, genera una lista de criterios de evaluación ponderados:
- Tasa de engagement real vs inflada (engagement rate genuino mínimo del 3% para micro-influencers)
- Coherencia temática entre el nicho del influencer y la categoría del producto
- Calidad y autenticidad del contenido publicado en los últimos 90 días
- Crecimiento orgánico de seguidores (detecta compra de seguidores)
- Distribución demográfica de la audiencia (solicitar media kit)
- Historial de colaboraciones previas y resultados publicados
- Ratio de comentarios auténticos vs spam o bots en los últimos 10 posts

**Fase 2: Framework de detección de fraude**
Desarrolla un protocolo para identificar señales de alerta:
- Picos anómalos de seguidores en fechas específicas
- Comentarios genéricos repetitivos o en idiomas no coherentes con la audiencia declarada
- Proporción de likes sobre seguidores fuera del rango estadístico normal
- Cuentas de seguidores con perfil incompleto o sin actividad
- Engagement que no correlaciona con el alcance declarado
- Diferencias entre métricas del media kit y las observaciones directas

**Fase 3: Plantilla de briefing para el influencer**
Crea un documento de briefing profesional que incluya:
- Descripción detallada de la campaña y objetivos medibles
- Guía de mensajes clave y tono de comunicación permitido
- Lista de restricciones (competidores, claims prohibidos, temas sensibles)
- Especificaciones técnicas del contenido (formato, duración, hashtags, menciones)
- Calendario de publicaciones y fechas de entrega de borradores
- Métricas de éxito acordadas y método de reporte

**Fase 4: Estimación de ROI antes de la negociación**
Genera un modelo de proyección de resultados que contemple:
- Alcance estimado (reach) basado en el follower count y engagement rate histórico
- CPM estimado comparado con publicidad pagada convencional en la misma plataforma
- Conversiones proyectadas usando benchmarks del sector por categoría de producto
- Valor de contenido generado (UGC) para uso posterior en ads pagados
- Comparativa costo-beneficio vs otras acciones de marketing digital del plan

**Fase 5: Estrategia de micro-influencers vs mega-influencers**
Explica cuándo elegir cada tipo de influencer con datos y justificación estratégica:
- Micro-influencers (1k-100k): mayor autenticidad, mejor engagement, CPM más eficiente
- Macro-influencers (100k-1M): mayor alcance, menor conversión directa
- Criterios de decisión según objetivo de campaña y etapa del funnel
- Cómo combinar ambos tipos en una estrategia de múltiples capas

**Entregable final:**
Proporciona una hoja de evaluación lista para usar en formato estructurado, con puntuación de 0 a 100 para cada influencer analizado, recomendación de presupuesto por perfil y una guía de seguimiento post-campaña para medir resultados reales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Selección y evaluación de micro-influencers con criterios objetivos y detección de fraude',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistema de tracking de afiliados con IA para desarrolladores',
                'description'      => 'Diseña con Claude la arquitectura de un sistema de seguimiento de conversiones para programas de afiliados, incluyendo detección de fraude y atribución multi-touch.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de tracking de marketing digital y atribución de conversiones.

Tu objetivo es ayudarme a diseñar e implementar un sistema robusto de tracking para un programa de afiliados. Este sistema debe ser escalable, resistente al fraude y capaz de manejar atribución multi-touch de manera precisa.

**Información que debes solicitarme:**
1. Stack tecnológico actual (lenguaje, base de datos, infraestructura cloud)
2. Volumen estimado de clics y conversiones por día
3. Tipos de conversiones a rastrear (ventas, registros, leads, instalaciones)
4. Modelo de comisión (CPA, CPC, CPL, revenue share)
5. Número de afiliados en el programa
6. Requerimientos de tiempo real vs procesamiento en batch

**Módulo 1: Arquitectura del sistema de tracking**
Diseña la arquitectura técnica completa:
- Sistema de generación de URLs de tracking con parámetros encriptados y únicos por afiliado
- Mecanismo de cookies first-party y alternativas cookieless (fingerprinting ético, server-side tracking)
- Pipeline de eventos: clic → visita → conversión → atribución → pago
- Base de datos optimizada para consultas de alta frecuencia con indexación estratégica
- API endpoints para registro de eventos con validación de integridad
- Sistema de webhooks para notificaciones en tiempo real a los afiliados

**Módulo 2: Motor de atribución**
Implementa modelos de atribución configurables:
- Last-click: el afiliado del último clic recibe el 100% de la comisión
- First-click: el afiliado que inició el journey recibe el crédito completo
- Linear: distribución equitativa entre todos los touchpoints
- Time-decay: mayor peso a los touchpoints más recientes antes de la conversión
- Atribución basada en reglas personalizadas según el tipo de producto o campaña
- Manejo de ventanas de atribución configurables (7, 14, 30, 60 días)

**Módulo 3: Sistema de detección de fraude**
Desarrolla algoritmos de detección de tráfico fraudulento:
- Detección de click stuffing: múltiples clics del mismo origen en ventana corta
- Análisis de patrones de IP sospechosos y rangos de datacenter conocidos
- Validación de user-agent y correlación con comportamiento real de usuario
- Detección de conversiones autoatribuidas por el propio afiliado
- Score de riesgo por afiliado basado en historial y patrones estadísticos
- Sistema de hold automático para conversiones de alto riesgo pendientes de validación manual
- Integración con listas negras de IPs fraudulentas actualizadas en tiempo real

**Módulo 4: Dashboard y reporting**
Define las métricas y visualizaciones esenciales:
- Métricas por afiliado: clics, conversiones, tasa de conversión, EPC, comisión acumulada
- Análisis de tendencias temporales y detección de anomalías estadísticas
- Comparativas de rendimiento entre cohortes de afiliados
- Reportes de fraude con detalle técnico para auditorías
- Exportación de datos en formatos estándar para reconciliación contable
- Alertas automáticas por email o Slack cuando se detectan patrones inusuales

**Módulo 5: Código de implementación**
Proporciona snippets de código comentados para:
- Función de generación de URL de tracking con HMAC para validación
- Middleware de registro de clics con captura de metadatos del request
- Job en background para procesamiento y validación de conversiones
- Query SQL optimizada para el cálculo de comisiones del período
- Tests unitarios para los casos críticos del motor de atribución

**Entregable:**
Entrega un documento técnico completo con diagramas de flujo, esquema de base de datos en SQL, y checklist de implementación por fases con estimación de esfuerzo en días de desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Arquitectura de sistema de tracking y atribución para programas de afiliados',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Briefs creativos para campañas de influencer marketing con IA',
                'description'      => 'Genera briefs creativos detallados y personalizados para influencers, adaptados al estilo de cada creador y los objetivos visuales de la marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo especializado en contenido para redes sociales y campañas de influencer marketing.

Tu misión es ayudarme a crear briefs creativos completos y accionables para influencers, que preserven la autenticidad de cada creador mientras comunican los mensajes clave de la marca con eficacia.

**Información inicial que debes solicitarme:**
1. Nombre de marca, producto o servicio a promocionar y sus características diferenciales
2. Plataforma objetivo y formato de contenido (Reels, TikTok, YouTube, stories, posts estáticos)
3. Perfil del influencer (nicho, estilo visual predominante, tono de voz habitual)
4. Mensajes clave que la marca debe comunicar obligatoriamente
5. Elementos visuales de marca (colores, tipografías, logos) y su nivel de integración requerido
6. Restricciones creativas y topics prohibidos

**Sección 1: Análisis del estilo del influencer**
Antes de redactar el brief, analiza el perfil creativo del influencer:
- Describe el estilo visual dominante (minimalista, colorido, lifestyle, editorial, humor, educativo)
- Identifica el tono de voz característico (cercano, experto, irónico, inspiracional)
- Detecta los formatos que generan mayor engagement en su historial de contenido
- Evalúa cómo han integrado marcas anteriores de forma exitosa sin perder autenticidad
- Define el nivel de libertad creativa que la colaboración debe ofrecer al influencer

**Sección 2: Concepto creativo central**
Desarrolla la idea creativa que conecte la marca con el mundo del influencer:
- Concepto narrativo principal que justifique la colaboración de forma orgánica
- Historia o situación que dé contexto natural a la mención del producto
- Gancho de apertura para los primeros 3 segundos del video (formato video) o el primer elemento visual (formato imagen)
- Arco narrativo propuesto: introducción, desarrollo, momento del producto, llamada a la acción
- Alternativas creativas B y C por si el influencer prefiere otro enfoque

**Sección 3: Especificaciones técnicas del contenido**
Define con precisión los requerimientos de producción:
- Duración del contenido por formato (15s, 30s, 60s, 3-5 min según plataforma)
- Ratio de aspecto y resolución mínima requerida
- Requisitos de iluminación y calidad de audio si aplica
- Momentos obligatorios de aparición del producto (primer plano, uso real, packaging visible)
- Textos o overlays requeridos y posición en pantalla
- Hashtags obligatorios, menciones de cuenta y links en bio o swipe-up
- Música: pista sugerida, libre de derechos o con licencia provista por la marca

**Sección 4: Guía de mensajes y claims**
Proporciona una guía clara y usable para el influencer:
- Claims principales aprobados por legal para comunicar sobre el producto
- Frases prohibidas o afirmaciones que no pueden hacerse (claims de salud, comparativas, etc.)
- Mensajes de apoyo opcionales que enriquecen la narrativa
- Forma correcta de integrar la mención patrocinada según regulaciones de publicidad (#publi, #ad, etiqueta de contenido pago según país)
- Tono permitido: ¿puede usarse humor? ¿testimonial personal? ¿opinión del influencer?

**Sección 5: Proceso de aprobación y entrega**
Define el flujo de trabajo claro para ambas partes:
- Fecha límite de entrega del borrador (guion o storyboard) para revisión de marca
- Número de rondas de revisión incluidas y plazo de respuesta garantizado por la marca
- Criterios de aceptación o rechazo del contenido final
- Fecha de publicación acordada y ventana permitida
- Protocolo para comunicar cambios de última hora o imprevistos
- Formato de entrega del contenido final y derechos de uso para reutilización en paid media

**Entregable final:**
Entrega el brief completo en formato listo para enviar al influencer, con un tono colaborativo y profesional que transmita respeto por su creatividad mientras garantiza los objetivos de la marca.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Creación de briefs creativos personalizados para influencers respetando su estilo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación de contratos con influencers usando IA como asesor estratégico',
                'description'      => 'Usa Claude como asesor de negociación para establecer términos justos con influencers, calcular tarifas basadas en métricas reales y proteger los intereses de la marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior de negociación especializado en contratos de influencer marketing y marketing de contenidos.

Tu objetivo es prepararme como negociador profesional en mis conversaciones con influencers y sus representantes, dándome herramientas, argumentos y estrategias basadas en datos del mercado.

**Contexto que necesito que me pidas:**
1. Perfil del influencer: plataforma, número de seguidores, engagement rate y nicho
2. Tipo de colaboración: post único, campaña, embajador de marca, content creator en nómina
3. Presupuesto máximo disponible para esta colaboración (confidencial para la negociación)
4. Urgencia de la campaña y fechas inamovibles
5. Derechos de uso del contenido que la marca necesita
6. Historial previo de colaboraciones con este influencer

**Módulo 1: Valoración objetiva del influencer**
Calcula el valor de mercado basado en métricas reales:
- Fórmula CPM basada en engagement rate: valor por post = (seguidores × engagement rate × CPM de referencia del sector)
- Benchmarks de mercado por rango de seguidores y categoría de nicho en España/Latinoamérica
- Ajuste por exclusividad temporal: +20-40% si se pide no colaborar con competidores
- Ajuste por derechos de uso en paid media: +30-60% según duración y territorios de uso
- Estimación del valor de UGC (User Generated Content) como activo reutilizable
- Tabla de tarifas de referencia por plataforma y tipo de contenido actualizada

**Módulo 2: Estrategia de negociación por fases**
Desarrolla un plan de negociación en 4 fases:

Fase de apertura: Presenta la propuesta inicial siempre por debajo del valor de mercado calculado para tener margen de maniobra. No reveles el presupuesto máximo. Enfoca el valor en la exposición de marca y el portfolio que la colaboración aporta al influencer.

Fase de exploración: Haz preguntas sobre sus objetivos: ¿busca tarifas altas o relaciones de largo plazo? ¿Prefiere pagos únicos o comisiones recurrentes? ¿Tiene exclusividades vigentes con otras marcas? Esta información define la estrategia óptima.

Fase de propuesta: Ofrece paquetes estructurados con anclas de precio. Incluye siempre opciones de bajo, medio y alto compromiso para que el influencer elija (técnica de elección ilusoria).

Fase de cierre: Identifica el BATNA (mejor alternativa) de ambas partes. Si el acuerdo no es posible en los términos requeridos, define claramente el punto de quiebre y prepara la salida con la relación intacta.

**Módulo 3: Cláusulas contractuales esenciales**
Lista las cláusulas que no pueden faltar en ningún contrato de influencer:
- Derechos de contenido: qué puede y no puede hacer la marca con el material producido
- Exclusividad: categoría de producto, duración y territorio de la restricción competitiva
- Aprobación de contenido: número de revisiones, plazos de respuesta y criterios de aceptación
- Obligaciones de publicación: fecha, hora, duración de permanencia del post, formato exacto
- Métricas mínimas garantizadas y consecuencias si no se alcanzan (si aplica)
- Divulgación publicitaria: responsabilidad del influencer de etiquetar contenido patrocinado según normativa
- Kill fee: compensación si la campaña se cancela después de producir el contenido

**Módulo 4: Respuestas a objeciones comunes**
Prepara argumentos para las situaciones más frecuentes:
- "Mi tarifa mínima es X y no bajo de ahí": cómo ofrecer valor adicional no monetario
- "Necesito los derechos de mi contenido para mi portfolio": cómo estructurar licencias compartidas
- "No tengo tiempo en esas fechas": cómo reorganizar sin perder al influencer
- "Trabajo con agencia y ellos gestionan mis tarifas": cómo negociar directamente con la agencia

**Entregable:**
Al finalizar el análisis, dame un documento de una página con la oferta inicial recomendada, los puntos de no negociación de la marca, los beneficios adicionales que puedo ofrecer y el guion de apertura de la negociación listo para usar en el primer email o llamada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de negociación de tarifas y contratos con influencers basada en métricas',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Dashboard de métricas de influencer marketing para product managers',
                'description'      => 'Define con Claude el diseño y los KPIs de un dashboard para monitorear campañas de influencer marketing desde la perspectiva de producto y negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager especializado en plataformas de datos de marketing y analytics de performance.

Tu objetivo es ayudarme a diseñar un dashboard completo de métricas para el seguimiento de campañas de influencer marketing que sea útil tanto para el equipo de marketing como para la dirección ejecutiva.

**Información que necesitaré que me proporciones:**
1. Tipo de empresa y modelo de negocio (ecommerce, SaaS, marketplace, etc.)
2. Volumen mensual de campañas de influencer activas
3. Herramientas actuales de analytics disponibles (GA4, Mixpanel, Looker, Data Studio, etc.)
4. Acceso a datos de ventas y atribución (CRM, plataforma de ecommerce)
5. Nivel técnico del equipo que usará el dashboard
6. Frecuencia de reporting requerida (tiempo real, diaria, semanal)

**Bloque 1: KPIs estratégicos de nivel C-Suite**
Define las métricas que interesan a dirección:
- ROI total del programa de influencer marketing vs otros canales de adquisición
- Revenue atribuido a campañas de influencer en el período (con modelo de atribución elegido)
- Customer Acquisition Cost (CAC) por canal comparado con influencer
- Lifetime Value (LTV) de clientes adquiridos vía influencer vs otros canales
- Share of Voice ganado en el nicho vs competidores durante la campaña
- Tendencia trimestral de inversión vs retorno con proyección para el siguiente período

**Bloque 2: KPIs operativos del equipo de marketing**
Métricas de gestión de campaña del día a día:
- Por influencer: alcance, impresiones, engagement rate, clics en link, conversiones directas
- Por campaña: CPM, CPC, CPA, tasa de conversión del tráfico generado
- Comparativa de rendimiento real vs estimaciones del brief inicial
- Progreso del calendario de publicaciones vs plan acordado
- Tasa de aprobación de contenido (cuántas rondas de revisión promedio)
- Tiempo promedio de pago a influencers vs SLA acordado

**Bloque 3: Métricas de calidad de audiencia**
Indicadores de autenticidad y relevancia:
- Sentiment score de los comentarios (positivo, neutro, negativo con ejemplos)
- Tasa de comentarios de calidad vs spam o bots detectados
- Demographic match: porcentaje de la audiencia del influencer que coincide con el ICP de la marca
- Brand safety score: análisis de contexto en el que aparece la mención de marca
- Share of mentions positivas en conversaciones orgánicas post-campaña

**Bloque 4: Pipeline y gestión de relaciones**
Vista de estado del programa de influencers:
- Funnel de influencers: prospectados → contactados → en negociación → contratados → publicados → pagados
- Tasa de respuesta a outreach y tiempo promedio hasta firma de contrato
- NPS de influencers del programa (¿recomendarían trabajar con la marca?)
- Influencers top performers por categoría de nicho
- Vencimiento de contratos y fechas de renovación próximas
- Budget utilizado vs disponible por campaña y por período fiscal

**Bloque 5: Análisis de fraude y compliance**
Panel de control de calidad y riesgo:
- Alertas de cuentas con caída anómala de seguidores (posible compra o limpieza de bots)
- Porcentaje de seguidores sospechosos por influencer (con umbral de alerta automática)
- Estado de divulgación publicitaria: ¿todos los posts tienen las etiquetas requeridas?
- Log de incidentes: posts eliminados, controversias, incumplimientos de contrato

**Entregable:**
Diseña el wireframe en texto estructurado del dashboard con: nombre de cada panel, métricas mostradas, tipo de visualización recomendada (tabla, línea temporal, barras, gauge, mapa de calor), fuente de datos y frecuencia de actualización. Incluye también la propuesta de stack tecnológico mínimo para implementarlo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de dashboard de KPIs para monitoreo de campañas de influencer marketing',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento creativo: contratación de influencers como equipo externo',
                'description'      => 'Usa Claude para estructurar un programa de influencers como si fuera un equipo de talento externo, con procesos de selección, onboarding y evaluación de desempeño.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH especializado en gestión de talento creativo y equipos de marketing no convencionales.

Tu objetivo es ayudarme a profesionalizar la relación con influencers y creadores de contenido, tratándolos como talento estratégico de la organización con procesos claros de selección, incorporación y desarrollo.

**Información de partida que debes solicitarme:**
1. Tamaño del programa actual de influencers y presupuesto anual
2. Tipos de colaboración que maneja la empresa (embajadores, campañas puntuales, creators en nómina)
3. Equipo interno que gestiona las relaciones con influencers
4. Herramientas de gestión de proyectos y comunicación disponibles
5. Problemáticas actuales más frecuentes en la gestión de influencers
6. Cultura de empresa y valores que deben compartir los colaboradores externos

**Proceso 1: Perfil del influencer ideal (Influencer Persona)**
Define el arquetipo de colaborador ideal para cada tipo de campaña:
- Valores personales y profesionales alineados con la cultura de marca
- Habilidades de producción de contenido requeridas (edición, fotografía, guion)
- Nivel de profesionalismo esperado (respeto de plazos, comunicación, calidad de entrega)
- Compatibilidad de audiencia con el cliente objetivo de la marca
- Historial de relaciones con marcas anteriores (referencias de otros clientes)
- Red de influencia más allá de las métricas: ¿es reconocido en su comunidad como autoridad?

**Proceso 2: Proceso de selección estructurado**
Diseña un pipeline de selección de 4 etapas:

Etapa 1 - Captación: fuentes de prospección (herramientas de discovery, referidos de influencers actuales, hashtags de nicho, agencias especializadas)

Etapa 2 - Evaluación inicial: checklist de criterios mínimos (engagement rate, calidad de contenido, coherencia de valores, ausencia de controversias)

Etapa 3 - Prueba de concepto: propuesta de un contenido de prueba pagado para evaluar proceso de trabajo, calidad de entrega y facilidad de colaboración antes de un compromiso mayor

Etapa 4 - Incorporación formal: firma de contrato marco, onboarding a herramientas de comunicación, sesión de alineación estratégica con el equipo de marketing

**Proceso 3: Onboarding para creators**
Diseña el kit de bienvenida al programa:
- Guía de identidad de marca interactiva adaptada para creadores de contenido
- Manual de procesos: cómo enviar propuestas de contenido, plazos de revisión, cómo facturar
- Acceso a biblioteca de assets de marca (logos, paleta de color, fotografías de producto en alta resolución)
- Sesión introductoria de 30 minutos con el manager de influencers para alinear expectativas
- Canal de comunicación dedicado (WhatsApp Business, Slack, Notion) con tiempo de respuesta garantizado
- Calendario editorial de la marca para planificar colaboraciones con antelación

**Proceso 4: Sistema de evaluación de desempeño**
Crea una metodología de evaluación trimestral:
- Scorecard de rendimiento con métricas ponderadas (50% resultados, 30% proceso, 20% valores)
- Criterios de permanencia en el programa, ascenso a embajador y salida del programa
- Reuniones de feedback constructivo para mejorar la colaboración a largo plazo
- Reconocimiento y recompensas para top performers (incremento de tarifa, exclusividad, co-branding)
- Proceso de offboarding profesional cuando la relación llega a su fin

**Entregable:**
Proporciona el diseño completo del programa con todos los documentos internos necesarios: job description del gestor de influencers, plantilla de evaluación inicial, agenda del onboarding y plantilla del scorecard trimestral.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Programa profesional de gestión de influencers como talento externo estratégico',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de rentabilidad en programas de afiliados con IA',
                'description'      => 'Usa Claude para construir modelos financieros que evalúen la rentabilidad real de un programa de afiliados, incluyendo costes ocultos y proyecciones a 12 meses.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en marketing digital y modelos de adquisición de clientes.

Tu objetivo es ayudarme a construir un análisis financiero completo y riguroso de un programa de afiliados o de influencer marketing, identificando los costos reales, la rentabilidad por canal y las proyecciones de crecimiento.

**Datos que necesito que me solicites:**
1. Inversión mensual total en el programa de afiliados o influencers
2. Revenue mensual atribuido al programa (con modelo de atribución utilizado)
3. Margen bruto del producto o servicio promovido
4. Customer Acquisition Cost (CAC) objetivo de la empresa
5. LTV promedio del cliente y tasa de retención mensual
6. Costos operativos del equipo que gestiona el programa

**Análisis 1: Estructura de costos completa**
Desglosa todos los costos reales del programa, incluyendo los frecuentemente ignorados:
- Comisiones directas pagadas a afiliados o influencers
- Costo del equipo interno de gestión (tiempo dedicado × coste por hora)
- Herramientas tecnológicas: plataforma de afiliados, herramientas de tracking, software de análisis
- Costos de producción de assets creativos facilitados a afiliados
- Costos legales: revisión de contratos, compliance de publicidad
- Costos de fraude: devoluciones y comisiones pagadas por conversiones fraudulentas
- Costos de pago: comisiones bancarias, PayPal, plataformas de pago internacional
- Overhead de empresa: porcentaje proporcional de infraestructura digital

**Análisis 2: Cálculo de rentabilidad real**
Construye el modelo de P&L del programa:
- Revenue bruto generado por el programa en el período
- Margen de contribución después de costos directos de producto o servicio
- Deducción de comisiones pagadas → Margen neto de afiliados
- Deducción de costos operativos totales → EBITDA del programa
- Cálculo del ROI real: (beneficio neto / inversión total) × 100
- Comparativa de rentabilidad vs otros canales de adquisición (SEM, email, orgánico, social pagado)
- Punto de equilibrio (break-even): cuándo el programa comienza a ser rentable

**Análisis 3: Métricas financieras clave del programa**
Define y calcula los indicadores de salud financiera:
- EPC (Earnings Per Click): cuánto gana la empresa por cada clic de afiliado
- CPO (Cost Per Order): costo total por cada pedido generado por afiliados
- Revenue share efectivo: porcentaje real del revenue que va a comisiones
- Payback period: en cuántos meses se recupera la inversión en un influencer o afiliado
- Churn de afiliados: tasa de abandono del programa y su impacto en revenue proyectado

**Análisis 4: Proyección financiera a 12 meses**
Modela tres escenarios de evolución del programa:
- Escenario conservador: crecimiento del 10% mensual en afiliados activos, misma tasa de conversión
- Escenario base: crecimiento del 20% mensual con mejora del 15% en calidad de afiliados
- Escenario optimista: incorporación de mega-influencers, duplicación de tasa de conversión por mejora de landing pages

Para cada escenario, proyecta: revenue mensual, comisiones totales, CAC resultante, ratio LTV/CAC y mes de break-even.

**Análisis 5: Optimización financiera del programa**
Identifica las palancas de mejora de rentabilidad:
- Segmentación de afiliados por rentabilidad: cuáles generan el 80% del revenue con el 20% de la inversión
- Oportunidades de renegociación de comisiones con afiliados de bajo rendimiento
- Análisis de producto: cuáles son los productos más rentables de promover vía afiliados
- Optimización de la ventana de atribución: impacto financiero de cambiar de 30 a 14 días

**Entregable:**
Genera una plantilla de Excel o Google Sheets con todas las fórmulas comentadas, lista para actualizar mensualmente con los datos reales del programa, más un resumen ejecutivo de una página para presentar a la dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelo financiero completo de rentabilidad para programas de afiliados e influencers',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y compliance legal para campañas de influencer marketing',
                'description'      => 'Usa Claude para revisar y estructurar contratos con influencers, verificar el cumplimiento de normativas de publicidad y proteger legalmente a la marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho digital, publicidad y propiedad intelectual con experiencia en contratos de influencer marketing.

Tu objetivo es ayudarme a construir un marco legal sólido para las campañas de influencer marketing de mi empresa, minimizando riesgos legales y asegurando el cumplimiento normativo en todos los mercados donde opera la marca.

**Información que debes solicitarme para contextualizar:**
1. Países o mercados donde se publicarán las campañas (España, México, Argentina, USA, etc.)
2. Tipo de producto o servicio (¿hay regulaciones especiales de salud, finanzas, alimentación?)
3. Tipo de influencer (menor de edad, persona pública, cuenta de empresa vs personal)
4. Derechos sobre el contenido que la marca necesita (uso en paid media, web, punto de venta)
5. Modelo de relación laboral con el influencer (autónomo, empresa, agencia intermediaria)

**Bloque 1: Estructura del contrato marco de influencer**
Define las cláusulas esenciales que debe contener todo contrato:
- Identificación de las partes y declaración de capacidad legal para contratar
- Objeto del contrato: descripción precisa del contenido a producir y publicar
- Contraprestación económica: importe, forma de pago, moneda y plazos (anticipo y liquidación)
- Derechos de propiedad intelectual: cesión de derechos de uso del contenido producido, territorios, duración y medios autorizados
- Exclusividad: categoría competitiva y período de restricción con compensación asociada
- Obligaciones del influencer: plazos de entrega, número de revisiones, obligación de publicar y mantener el contenido activo
- Obligaciones de la marca: facilitar assets, aprobar en plazo, pagar en plazo
- Cláusula de conformidad con normativas de publicidad: responsabilidad del influencer de etiquetar el contenido como publicitario
- Cláusula de confidencialidad: protección de información comercial de la marca
- Cláusula de moralidad: derecho de la marca a rescindir si el influencer incurre en conductas que dañen la reputación de la marca
- Resolución de conflictos: jurisdicción aplicable y mecanismo de mediación o arbitraje

**Bloque 2: Normativa de publicidad por mercado**
Analiza los requisitos legales de divulgación publicitaria en cada mercado relevante:
- España: obligaciones según la Ley General de Publicidad y directrices de la CNMC sobre influencers
- México: lineamientos de la PROFECO y el IMPI sobre publicidad engañosa en redes sociales
- Argentina: normativa de la CONARP y recomendaciones vigentes para contenido patrocinado
- Estados Unidos: directrices de la FTC (Federal Trade Commission) sobre endorsements y divulgaciones
- Unión Europea: Directiva de Servicios de Comunicación Audiovisual y su impacto en influencers
- Requisitos específicos por sector: salud, finanzas, alimentos, bebidas alcohólicas, productos para menores

**Bloque 3: Gestión de derechos de contenido**
Estructura el régimen de propiedad intelectual de forma clara:
- Quién posee los derechos del contenido producido (influencer vs marca vs compartidos)
- Licencia de uso: exclusiva vs no exclusiva, revocable vs irrevocable
- Usos autorizados: organic social, paid media (boosted posts), web corporativa, email marketing, punto de venta, televisión
- Uso de imagen del influencer en materiales de marca más allá del contenido original
- Derechos morales del influencer y límites a la modificación del contenido
- Protección de datos personales del influencer y su audiencia según GDPR o LGPD

**Bloque 4: Gestión de riesgos y contingencias**
Prepara cláusulas para situaciones de crisis:
- Kill fee: compensación justa si la marca cancela después de la producción del contenido
- Procedimiento ante incumplimiento de plazos de publicación por parte del influencer
- Protocolo de gestión de crisis reputacional (controversia del influencer durante la campaña)
- Derecho de la marca a solicitar la retirada del contenido en casos justificados
- Garantías frente a contenido que infrinja derechos de terceros producido por el influencer

**Entregable:**
Genera la plantilla de contrato completa en español jurídico profesional, adaptada al mercado indicado, con todos los campos variables señalados entre corchetes para personalizar por campaña. Incluye también una checklist de compliance legal de 20 puntos para revisar antes de publicar cualquier campaña.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marco legal completo para contratos y compliance en influencer marketing',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Detección de fraude en afiliados con IA para equipos de customer success',
                'description'      => 'Usa Claude para desarrollar protocolos de detección de fraude en programas de afiliados, identificar patrones sospechosos y proteger el presupuesto de marketing.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en fraude digital y análisis de datos de marketing con experiencia en programas de afiliados a gran escala.

Tu objetivo es ayudarme a construir un sistema de prevención y detección de fraude en nuestro programa de afiliados, protegiendo el presupuesto de marketing y garantizando que solo pagamos comisiones por conversiones legítimas.

**Datos de contexto que necesito que me solicites:**
1. Volumen de transacciones diarias en el programa de afiliados
2. Tipos de conversiones que se comisionan (ventas, registros, leads, instalaciones)
3. Modelo de comisión actual (CPA, CPC, CPL, revenue share)
4. Herramientas de tracking actuales y nivel de acceso a datos raw
5. Principales países de origen del tráfico de afiliados
6. Historial de problemas de fraude detectados previamente

**Capa 1: Catálogo de tipos de fraude en afiliados**
Explica en detalle cada tipo de fraude y cómo identificarlo:

Click fraud o click stuffing: generación masiva de clics falsos para inflar comisiones. Se detecta por ratio anómalo de clics sobre conversiones, tiempo entre clic y conversión demasiado corto (milisegundos), y concentración de clics en rangos de IP específicos.

Cookie hijacking o cookie dropping: inyección de cookies de afiliado en el navegador del usuario sin que haya interactuado con el afiliado. Se detecta analizando el historial de navegación previo y comparando el referrer del clic con la cookie de atribución activa.

Adware y malware: software que reemplaza cookies legítimas de otros afiliados o instala las propias sin consentimiento del usuario. Se detecta por patrones de atribución inconsistentes con el comportamiento orgánico del usuario.

Fraude de leads falsos: envío masivo de leads con datos de contacto generados aleatoriamente o comprados. Se detecta por tasas de contactabilidad muy bajas, dominios de email temporales y patrones de formulario automatizado.

Autopurchase fraud: el propio afiliado compra el producto usando su link de afiliado para cobrar la comisión. Se detecta cruzando IPs del comprador con IPs históricas del afiliado y analizando patrones de compra anómalos.

Brand bidding no autorizado: el afiliado compra palabras clave de la marca en Google Ads para capturar tráfico que debería ser directo o de SEO. Se detecta monitorizando las subastas de Google Ads para el nombre de marca.

**Capa 2: Sistema de scoring de riesgo por conversión**
Diseña un algoritmo de scoring que evalúe cada conversión antes de aprobarla:
- Score 0-25 (bajo riesgo): aprobar y pagar automáticamente
- Score 26-60 (riesgo medio): revisión manual antes del pago
- Score 61-100 (alto riesgo): retener pago y abrir investigación

Factores que incrementan el score de riesgo:
- IP en lista negra conocida o rango de datacenter
- Conversión ocurre menos de 30 segundos después del clic
- Mismo dispositivo genera múltiples conversiones en 24 horas
- Dirección de email con dominio temporal (Mailinator, 10MinuteMail, etc.)
- Patrón de conversión fuera del horario habitual del país del usuario
- Discrepancia entre idioma del navegador y país de la IP

**Capa 3: Investigación de afiliados sospechosos**
Protocolo de investigación cuando se detecta un afiliado con actividad anómala:
- Auditoría retrospectiva: análisis de todas las conversiones de los últimos 90 días
- Verificación de identidad: solicitar documentación KYC antes de pagos superiores a un umbral
- Test de honestidad: conversión controlada para verificar si el afiliado la atribuye correctamente
- Revisión de medios: verificar que el afiliado realmente tiene los canales de tráfico declarados
- Comparativa de calidad: tasa de devolución, churn temprano y LTV de clientes traídos por el afiliado vs promedio del programa

**Capa 4: Proceso de respuesta a fraude confirmado**
Define el protocolo de actuación cuando el fraude está confirmado:
- Bloqueo inmediato de generación de nuevas comisiones
- Retención del saldo pendiente de pago pendiente de auditoría
- Notificación formal al afiliado con evidencias documentadas
- Proceso de recuperación de comisiones pagadas por conversiones fraudulentas
- Comunicación interna al equipo y registro en el sistema para prevenir reincidencia
- Evaluación legal: ¿aplica reclamación judicial o denuncia a autoridades?

**Entregable:**
Proporciona el playbook completo de anti-fraude con el algoritmo de scoring documentado, la plantilla de investigación de afiliados sospechosos y el protocolo de respuesta en formato de proceso paso a paso listo para implementar por el equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de detección y prevención de fraude en programas de marketing de afiliados',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de influencer marketing para freelancers de marketing digital',
                'description'      => 'Usa Claude para diseñar y ejecutar campañas de influencer marketing como servicio freelance, desde la propuesta al cliente hasta el informe de resultados.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marketing digital freelance especializado en influencer marketing y marketing de contenidos para marcas pequeñas y medianas.

Tu objetivo es ayudarme a ofrecer servicios profesionales de influencer marketing a mis clientes, con procesos replicables, propuestas ganadoras y entregables de alta calidad que justifiquen mis honorarios.

**Información que debes pedirme:**
1. Perfil de mis clientes habituales (sector, tamaño de empresa, presupuesto típico)
2. Servicios de influencer marketing que quiero ofrecer (estrategia, gestión completa, consultoría puntual)
3. Mis herramientas disponibles para análisis de influencers y tracking
4. Nivel de experiencia previa en influencer marketing
5. Mercados en los que trabajo habitualmente (España, Latinoamérica, ambos)

**Módulo 1: Definición de mi oferta de servicios**
Diseña un catálogo de servicios escalable para diferentes presupuestos:

Servicio Básico (hasta 1.500€/mes): auditoría de influencers actuales del cliente, identificación de 10 perfiles potenciales, brief creativo de una campaña y seguimiento de una colaboración

Servicio Estándar (hasta 3.500€/mes): estrategia trimestral de influencer marketing, gestión completa de 3-5 colaboraciones por mes, negociación de contratos, coordinación de contenidos y reporte mensual de resultados

Servicio Premium (más de 5.000€/mes): programa completo de embajadores, construcción de comunidad de creadores, campañas multi-plataforma, análisis de competidores y consultoría estratégica mensual

**Módulo 2: Propuesta comercial ganadora**
Estructura una propuesta que convierta prospectos en clientes:
- Resumen ejecutivo: situación actual del cliente y oportunidad identificada
- Diagnóstico: análisis breve del perfil de cliente objetivo del cliente y potencial de influencer marketing en su sector
- Propuesta de valor diferencial: por qué trabajar conmigo vs una agencia o contratar internamente
- Metodología de trabajo: proceso paso a paso de cómo ejecuto las campañas
- Casos de éxito o ejemplos comparables (si no tengo portfolio propio, cómo presentar benchmarks del sector)
- Propuesta económica con tres opciones de inversión
- Garantías: qué ofrezco si los resultados no se alcanzan

**Módulo 3: Proceso de onboarding del cliente**
Define el proceso de inicio de relación profesional:
- Sesión de discovery de 60 minutos: buyer persona, competidores, tono de marca, contenido prohibido
- Auditoría de herramientas: ¿qué tiene el cliente? ¿qué necesito yo para gestionar la campaña?
- Definición de KPIs acordados y método de medición aprobado por ambas partes
- Contrato de prestación de servicios: honorarios, plazos de pago, propiedad de los entregables, cláusula de confidencialidad
- Plan de comunicación: frecuencia de actualizaciones, formato de reporte y canal de contacto

**Módulo 4: Flujo de trabajo de gestión de campaña**
Diseña el proceso operativo replicable para cada campaña:

Semana 1: prospección y shortlist de influencers según criterios del brief
Semana 2: outreach, negociación y confirmación de colaboraciones
Semana 3: envío de brief, seguimiento de producción de contenido y revisiones
Semana 4: publicación, monitoreo de métricas y recogida de screenshots de resultados

Herramientas de productividad recomendadas para gestionar todo el proceso de forma autónoma: gestión de proyectos, comunicación con influencers, tracking de métricas, facturación y contratos.

**Módulo 5: Informe de resultados profesional**
Diseña el formato del reporte mensual para el cliente:
- Resumen ejecutivo: logros del mes en 5 bullet points orientados a negocio
- Resultados por colaboración: métricas de cada influencer con comparativa vs estimación del brief
- ROI calculado con el modelo de atribución acordado
- Aprendizajes del mes: qué ha funcionado mejor y por qué
- Recomendaciones para el próximo mes con propuestas de mejora concretas
- Previsión de resultados para el mes siguiente con escenario base y optimista

**Entregable:**
Genera la plantilla completa de propuesta comercial, el contrato de servicios básico para freelancers y la plantilla del informe mensual de resultados, todos listos para personalizar y usar con los primeros clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Servicio freelance completo de influencer marketing desde propuesta hasta reporte',
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
