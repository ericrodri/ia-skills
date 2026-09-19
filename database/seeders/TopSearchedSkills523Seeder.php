<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills523Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Newsletters periodísticos personalizados con IA',
                'description'      => 'Crea y optimiza newsletters de periodismo digital usando IA para segmentar audiencias, personalizar contenido y maximizar tasas de apertura y suscripción.',
                'prompt_content'   => <<<'EOT'
Eres un estratega de newsletters periodísticos con experiencia en medios digitales. Tu objetivo es ayudarme a crear una newsletter de periodismo que destaque por su personalización y relevancia para cada segmento de audiencia.

**Contexto del proyecto:**
Necesito desarrollar una estrategia completa de newsletter periodístico usando IA para personalizar el contenido, aumentar la retención de suscriptores y monetizar la audiencia de manera sostenible.

**Paso 1: Definición de segmentos de audiencia**
Ayúdame a identificar y describir los 5 segmentos principales de mi audiencia periodística. Para cada segmento, define:
- Perfil demográfico y psicográfico
- Temas de interés prioritarios
- Frecuencia de consumo de noticias preferida
- Formato de contenido que mejor convierte (texto largo, resúmenes, infografías, audio)
- Propuesta de valor específica que los retiene

**Paso 2: Arquitectura de contenido personalizado**
Diseña una estructura de newsletter que pueda adaptarse automáticamente a cada segmento. Incluye:
- Cabecera dinámica con titular personalizado según intereses del suscriptor
- Sección de noticias prioritarias (algoritmo de selección basado en historial de clics)
- Bloque de análisis profundo exclusivo para suscriptores premium
- Recomendaciones editoriales cruzadas (artículos relacionados que el lector no ha visto)
- Llamada a la acción personalizada según etapa del ciclo de vida del suscriptor

**Paso 3: Sistema de verificación de noticias asistido por IA**
Crea un flujo de trabajo para verificar la veracidad del contenido antes de enviarlo:
- Lista de verificación de fuentes primarias y secundarias
- Plantilla para contrastar datos con bases de datos públicas
- Protocolo para identificar bulos o desinformación viral
- Formato de corrección transparente si se detecta un error posterior al envío
- Indicadores de confiabilidad que puedo incluir visualmente en cada noticia

**Paso 4: Estrategia de monetización para medios digitales**
Desarrolla tres modelos de monetización complementarios para mi newsletter:
- Modelo de suscripción freemium (qué contenido es gratuito vs. premium)
- Patrocinios nativos que no comprometan la credibilidad editorial
- Eventos exclusivos para suscriptores como fuente de ingresos adicional
- Métricas clave para evaluar el valor del tiempo de vida del suscriptor (LTV)

**Paso 5: Optimización mediante IA generativa**
Dame un plan mensual de pruebas A/B para optimizar:
- Líneas de asunto (subject lines) con máximo impacto emocional o informativo
- Hora y día de envío óptimos por segmento geográfico
- Longitud ideal del contenido según el dispositivo de lectura dominante
- Elementos interactivos (encuestas, preguntas al editor) para aumentar engagement

**Paso 6: Métricas editoriales y de negocio**
Define un dashboard de indicadores que combine métricas periodísticas y empresariales:
- Tasa de apertura por segmento y tendencia mensual
- Clics por artículo y profundidad de lectura estimada
- Tasa de conversión de gratuito a premium
- Churn rate y causas principales de cancelación
- Ingresos por suscriptor y proyección trimestral

Al final, genera un calendario editorial de 4 semanas que muestre cómo aplicar todo lo anterior en un ciclo real de producción periodística, indicando qué tareas hace la IA y cuáles requieren criterio editorial humano.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de newsletter periodístico personalizado con IA para medios digitales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataforma de verificación de noticias con IA para desarrolladores',
                'description'      => 'Diseña e implementa una arquitectura técnica para sistemas de fact-checking automatizado en medios digitales usando modelos de lenguaje y APIs de verificación.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de procesamiento de lenguaje natural para medios de comunicación. Tu objetivo es ayudarme a diseñar una plataforma técnica de verificación de noticias que combine IA y fuentes de datos estructuradas.

**Contexto técnico:**
Quiero construir un sistema de fact-checking automatizado que asista a periodistas en la verificación de afirmaciones factuales antes de publicar. El sistema debe ser escalable, auditable y capaz de manejar contenido en tiempo real.

**Tarea 1: Arquitectura del sistema de verificación**
Diseña la arquitectura técnica completa del sistema:
- Diagrama de componentes: ingesta de texto, NLP pipeline, motor de verificación, base de conocimiento, API de salida
- Tecnologías recomendadas para cada capa (lenguajes, frameworks, bases de datos vectoriales)
- Estrategia de caching para verificaciones repetidas sobre afirmaciones similares
- Diseño de la API REST o GraphQL que expondrá los resultados al CMS editorial
- Plan de escalabilidad horizontal para picos de tráfico en noticias de última hora

**Tarea 2: Pipeline de extracción de afirmaciones**
Escribe el pseudocódigo y la lógica de negocio para:
- Tokenización y segmentación de artículos en unidades verificables (claims)
- Clasificación de afirmaciones según tipo: estadística, histórica, cita textual, pronóstico
- Priorización de afirmaciones a verificar según criticidad editorial
- Normalización de entidades nombradas (personas, lugares, organizaciones, fechas)
- Gestión de ambigüedad cuando una afirmación tiene múltiples interpretaciones válidas

**Tarea 3: Integración con fuentes de datos externas**
Proporciona un plan de integración con las siguientes fuentes:
- APIs de datos gubernamentales y estadísticas oficiales (INE, Eurostat, World Bank)
- Bases de datos de fact-checkers reconocidos (Snopes, PolitiFact, Maldita.es)
- Wikipedia y Wikidata como base de conocimiento general
- Hemerotecas digitales para verificar publicaciones previas del mismo medio
- Google Fact Check Tools API para consultas en tiempo real

**Tarea 4: Modelo de scoring de credibilidad**
Diseña el algoritmo de puntuación que evalúe cada afirmación:
- Escala de fiabilidad (0-100) con umbrales para "verificado", "no verificado", "falso"
- Ponderación de fuentes según su autoridad y proximidad temporal
- Penalización por escasez de fuentes o contradicción entre ellas
- Cálculo de incertidumbre cuando las fuentes son parciales o desactualizadas
- Generación de explicaciones legibles por humanos para cada puntuación

**Tarea 5: Panel editorial y flujo de trabajo**
Diseña la interfaz funcional para el equipo de redacción:
- Vista de cola de verificaciones pendientes con priorización automática
- Detalle de cada claim con evidencias, fuentes y puntuación de confianza
- Herramienta para que el periodista acepte, rechace o escale la verificación
- Trazabilidad completa del proceso de fact-checking para auditorías
- Integración con el CMS para bloquear publicación si hay claims sin verificar

**Tarea 6: Consideraciones éticas y de sesgo**
Analiza los riesgos técnicos y éticos del sistema:
- Estrategias para detectar y mitigar sesgos en los modelos de lenguaje
- Protocolo cuando el sistema contradice el criterio del periodista
- Privacidad de los borradores periodísticos procesados por el sistema
- Transparencia hacia los lectores sobre el uso de verificación automatizada
- Plan de actualización continua del modelo ante nuevas formas de desinformación

Incluye al final un plan de implementación por fases en 6 meses, con entregables técnicos concretos para cada sprint.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Arquitectura técnica de fact-checking automatizado para redacciones periodísticas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño editorial digital de medios con IA',
                'description'      => 'Usa IA para crear sistemas de diseño visual adaptados a medios periodísticos digitales, desde la identidad visual hasta las plantillas dinámicas para diferentes formatos de contenido.',
                'prompt_content'   => <<<'EOT'
Eres un director de arte digital especializado en medios de comunicación. Tu objetivo es ayudarme a desarrollar un sistema de diseño editorial completo para un medio digital que mantenga coherencia visual mientras se adapta a múltiples formatos y plataformas.

**Contexto del proyecto:**
Necesito crear un sistema de diseño editorial que pueda escalarse usando IA para generar variaciones visuales consistentes, mantener la identidad de marca y adaptarse a diferentes formatos: web, newsletters, redes sociales y aplicaciones móviles.

**Objetivo 1: Sistema de identidad visual periodística**
Desarrolla las bases del sistema de diseño editorial:
- Guía de tipografía jerárquica para titulares, subtítulos, texto corrido y pies de foto
- Paleta cromática primaria y secundaria con justificación de cada color en contexto periodístico
- Criterios para el uso de espacio en blanco que favorezca la legibilidad en pantalla
- Sistema de iconografía editorial coherente con el tono del medio
- Principios de accesibilidad visual aplicados al diseño periodístico (contraste, tamaño, legibilidad)

**Objetivo 2: Plantillas dinámicas para diferentes formatos de noticia**
Crea especificaciones detalladas para plantillas que la IA pueda generar automáticamente:
- Plantilla de noticia de última hora: máxima urgencia visual, información mínima esencial
- Plantilla de reportaje largo: diseño que invite a la lectura prolongada, con anclajes visuales
- Plantilla de contenido explicativo: infografías integradas, datos visualizados, storytelling progresivo
- Plantilla para contenido de opinión: jerarquía clara entre autor y texto, diferenciación visual del resto
- Plantilla de entrevista: diseño dialógico que facilite la lectura en preguntas y respuestas

**Objetivo 3: Generación de assets visuales con IA**
Define el flujo de trabajo para crear elementos visuales con herramientas de IA:
- Criterios editoriales para seleccionar y generar imágenes de cabecera
- Protocolo de atribución cuando se usan imágenes generadas por IA junto a fotografías reales
- Sistema de thumbnails optimizados para diferentes redes sociales con proporciones y texto adaptados
- Generación de gráficos de datos simples (barras, líneas, donas) con estilo editorial consistente
- Plantillas de stories y Reels que mantengan la identidad visual del medio en formato vertical

**Objetivo 4: Diseño para newsletters de periodismo**
Especifica el sistema visual para emails periodísticos:
- Jerarquía visual de secciones en un email que se lea en menos de 3 minutos
- Uso de color como código semántico (rojo para urgente, azul para análisis, verde para cultura)
- Componentes modulares reutilizables: cabecera, bloque de noticia, separadores, footer editorial
- Adaptación del diseño a diferentes clientes de email (Gmail, Outlook, Apple Mail)
- Optimización de peso de imágenes para evitar que los emails caigan en spam

**Objetivo 5: Coherencia visual entre plataformas**
Crea un manual de adaptación para cada canal:
- Web desktop y mobile: qué elementos se muestran u ocultan según el viewport
- Twitter/X: cómo adaptar visualmente el contenido para el feed y los hilos
- Instagram: diferencia entre el grid permanente y las historias efímeras
- LinkedIn: tono más sobrio y profesional manteniendo la identidad del medio
- YouTube (si aplica): miniaturas, títulos en pantalla y grafismos de vídeo

Al final, proporciona una lista de herramientas de IA recomendadas para cada parte del proceso de diseño editorial, con casos de uso específicos y limitaciones éticas a considerar en el periodismo visual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de diseño editorial digital con IA para medios de comunicación',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Monetización de medios digitales con IA para equipos comerciales',
                'description'      => 'Estrategias de ventas publicitarias y modelos de negocio para medios periodísticos digitales, usando IA para identificar oportunidades de ingresos y optimizar propuestas comerciales.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial especializado en medios digitales con experiencia en publicidad programática, branded content y modelos de suscripción. Tu objetivo es ayudarme a construir una estrategia de monetización sostenible para un medio periodístico digital.

**Contexto comercial:**
Tengo un medio digital con audiencia consolidada y necesito diversificar mis fuentes de ingresos más allá de la publicidad display tradicional. Quiero usar IA para identificar oportunidades, personalizar propuestas comerciales y optimizar mis ingresos por audiencia.

**Área 1: Análisis de la audiencia como activo comercial**
Ayúdame a valorar mi audiencia para la venta publicitaria:
- Segmentación de audiencia por valor comercial (datos demográficos, intención de compra, historial de engagement)
- Cálculo del CPM (coste por mil impresiones) óptimo según cada segmento
- Construcción del media kit con datos que maximicen el atractivo para anunciantes
- Comparativa de mi audiencia frente a benchmarks del sector de medios digitales
- Identificación de los sectores de anunciantes con mayor afinidad a mi audiencia

**Área 2: Branded content y periodismo patrocinado**
Diseña un modelo de contenido patrocinado que preserve la credibilidad editorial:
- Criterios para aceptar o rechazar anunciantes según compatibilidad editorial
- Plantilla de propuesta de branded content con objetivos medibles para el anunciante
- Estructura de precios según formato (artículo, vídeo, podcast, newsletter exclusiva)
- Sistema de disclosure transparente que cumpla las normas éticas y legales
- Métricas de rendimiento para reportar al anunciante al final de la campaña

**Área 3: Modelos de suscripción y muros de pago**
Desarrolla una estrategia de paywall que maximice los ingresos sin perder audiencia:
- Análisis de qué contenido poner detrás del muro de pago y cuál mantener gratuito
- Estrategia de precios por niveles: básico, estándar, premium con beneficios diferenciados
- Tácticas de conversión de lectores recurrentes gratuitos en suscriptores de pago
- Programa de retención para reducir el churn en los primeros 90 días de suscripción
- Cálculo del LTV (lifetime value) del suscriptor y umbral de rentabilidad por tipo de plan

**Área 4: Eventos y comunidad como fuente de ingresos**
Crea un modelo de negocio basado en eventos periodísticos:
- Tipos de eventos apropiados para un medio digital (conferencias, webinars, encuentros con periodistas)
- Estrategia de precios para eventos híbridos (presencial + streaming)
- Plan de patrocinio de eventos con propuesta de valor clara para el anunciante
- Modelo de membresía de comunidad exclusiva con beneficios escalonados
- Conversión de asistentes a eventos en suscriptores del medio

**Área 5: Publicidad programática y tecnología AdTech**
Optimiza los ingresos publicitarios tecnológicos:
- Configuración óptima del header bidding para maximizar el fill rate y el CPM
- Selección de redes publicitarias según tipo de audiencia y nicho editorial
- Equilibrio entre densidad publicitaria y experiencia de usuario (UX)
- Uso de first-party data para audiencias personalizadas sin cookies de terceros
- Proyección de ingresos programáticos según tráfico mensual y benchmarks del sector

**Área 6: Propuesta comercial personalizada con IA**
Crea una plantilla de propuesta comercial que pueda personalizarse con IA para cada anunciante potencial:
- Análisis previo del anunciante: sector, competidores, objetivos de marketing
- Propuesta de valor adaptada a los objetivos específicos del anunciante
- Formatos recomendados con argumentos basados en casos de éxito anteriores
- Paquete combinado que integre varios formatos con descuento por volumen
- Seguimiento post-propuesta y gestión de objeciones comunes

Cierra con un plan de acción de 90 días para implementar las primeras tres fuentes de ingresos y los KPIs comerciales que medirían el éxito de cada una.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de monetización y ventas publicitarias para medios periodísticos digitales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto editorial digital con IA: estrategia y roadmap',
                'description'      => 'Desarrolla la estrategia de producto para un medio periodístico digital usando IA para personalizar la experiencia de lectura, aumentar el engagement y reducir el churn.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en medios digitales con experiencia en plataformas editoriales, aplicaciones de noticias y sistemas de personalización de contenido. Tu objetivo es ayudarme a definir la estrategia de producto de un medio periodístico digital.

**Contexto del producto:**
Gestiono un medio digital y necesito evolucionar nuestro producto para competir con las grandes plataformas de distribución de noticias. Quiero usar IA para crear una experiencia de lectura superior, personalizada y que genere hábito en nuestra audiencia.

**Bloque 1: Diagnóstico del producto actual**
Ayúdame a evaluar el estado actual del producto editorial:
- Framework para auditar la experiencia de usuario actual de principio a fin
- Identificación de los principales puntos de fricción en el funnel de lectura
- Análisis de las métricas clave: tiempo en página, páginas por sesión, recurrencia, conversión a registro y suscripción
- Comparativa con las mejores prácticas de medios líderes en UX periodístico
- Priorización de problemas según impacto en retención y monetización

**Bloque 2: Motor de personalización de contenido**
Diseña el sistema de recomendación de noticias:
- Lógica del algoritmo de personalización: historial de lectura, intereses declarados, contexto temporal
- Equilibrio entre burbuja de filtros (mostrar solo lo que el usuario ya consume) y descubrimiento editorial
- Sistema de preferencias explícitas (el usuario elige sus temas) vs. implícitas (aprendizaje automático)
- Personalización de la página de inicio vs. personalización dentro de artículos relacionados
- Estrategia editorial humana que supervisa y corrige el algoritmo para evitar sesgos

**Bloque 3: Engagement y formación de hábito de lectura**
Aplica la ciencia del comportamiento para crear hábitos de lectura:
- Notificaciones push personalizadas: frecuencia, timing, tipo de contenido por segmento
- Sistema de gamificación editorial (rachas de lectura, logros por categoría, retos semanales)
- Newsletters personalizadas como punto de contacto diario que ancla el hábito
- Resumen semanal personalizado del contenido más relevante para cada lector
- Programa de onboarding para nuevos usuarios que maximice la activación en los primeros 7 días

**Bloque 4: Experiencia de suscripción y reducción de churn**
Optimiza el ciclo de vida del suscriptor:
- Mapa del journey del suscriptor desde el registro gratuito hasta la renovación anual
- Señales predictivas de abandono: qué comportamientos indican que un suscriptor va a cancelar
- Flujo de rescate automático para suscriptores en riesgo (pausa, descuento, cambio de plan)
- Encuestas de cancelación y cómo usar el feedback para mejorar el producto
- Programa de reactivación para ex-suscriptores con propuesta de valor actualizada

**Bloque 5: Funcionalidades diferenciadoras con IA**
Propón las 5 funcionalidades únicas que posicionarían al medio frente a la competencia:
- Resumen de noticias generado por IA con diferentes longitudes (30 segundos, 2 minutos, lectura completa)
- Chat con el artículo: el lector puede hacer preguntas al texto y recibir respuestas contextualizadas
- Timeline personalizado de una noticia: ver cómo ha evolucionado una historia a lo largo del tiempo
- Modo sin conexión inteligente que precarga el contenido más relevante antes de perder señal
- Alertas de seguimiento de temas: el usuario activa un tema y recibe actualizaciones curadas

**Bloque 6: Roadmap de producto y métricas de éxito**
Construye el plan de ejecución:
- Roadmap de 12 meses dividido en tres horizontes (0-3 meses, 4-6 meses, 7-12 meses)
- Criterios de priorización entre funcionalidades (valor para el usuario, impacto en ingresos, esfuerzo técnico)
- OKRs por trimestre alineados con los objetivos de negocio del medio
- Plan de experimentación: qué funcionalidades se lanzan como A/B test antes de hacerlas globales
- Proceso de feedback continuo con la audiencia para validar decisiones de producto

Termina con una guía de cómo presentar este roadmap al equipo editorial y de negocio para alinear expectativas y conseguir el apoyo necesario para ejecutarlo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de producto y roadmap para medios periodísticos digitales con IA',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos periodísticos con IA para RRHH',
                'description'      => 'Aplica IA en la gestión de redacciones periodísticas: reclutamiento de talento editorial, evaluación de desempeño, planificación de turnos y desarrollo profesional de periodistas.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos especializado en empresas de medios de comunicación. Tu objetivo es ayudarme a modernizar la gestión del talento en una redacción periodística usando IA para optimizar procesos sin perder el factor humano esencial en el periodismo.

**Contexto organizacional:**
Dirijo el equipo de personas de un medio digital con una redacción de 20-50 periodistas, editores, fotógrafos y profesionales digitales. Quiero usar IA para atraer mejor talento, gestionar el rendimiento de manera más justa y desarrollar las competencias que el sector exige hoy.

**Módulo 1: Reclutamiento de talento periodístico**
Diseña un proceso de selección moderno para periodistas digitales:
- Perfil competencial actualizado del periodista digital: habilidades técnicas, editoriales y de IA
- Redacción de ofertas de empleo que atraigan perfiles innovadores sin excluir diversidad
- Proceso de evaluación técnica: prueba de escritura + prueba de criterio editorial + prueba de uso de herramientas digitales
- Entrevista por competencias con preguntas específicas para evaluar ética periodística y adaptabilidad
- Uso de IA para filtrar candidaturas con criterios objetivos y transparentes (sin sesgos de nombre o género)

**Módulo 2: Onboarding en redacciones digitales**
Crea un plan de incorporación para nuevos periodistas:
- Plan de onboarding de 90 días: semana a semana, con objetivos progresivos
- Asignación de mentor editorial para guiar el criterio periodístico del nuevo integrante
- Formación en herramientas de la redacción: CMS, SEO, redes sociales, herramientas de IA editoriales
- Protocolo de primeras publicaciones: revisión obligatoria antes de publicar en solitario
- Métricas de éxito del onboarding: cuándo consideramos que el periodista está plenamente incorporado

**Módulo 3: Evaluación de desempeño en redacciones**
Desarrolla un sistema de evaluación justo para periodistas:
- Indicadores de rendimiento periodístico: alcance de artículos, engagement, exclusivas, impacto social
- Equilibrio entre métricas cuantitativas (tráfico, shares) y cualitativas (calidad editorial, ética)
- Proceso de evaluación 360 grados adaptado a la cultura de redacción
- Conversación de desempeño semestral: guía para el responsable y el periodista
- Plan de mejora personalizado cuando el desempeño está por debajo de lo esperado

**Módulo 4: Formación continua en IA para periodistas**
Diseña el programa de upskilling editorial:
- Mapa de competencias en IA que cada perfil periodístico necesita desarrollar
- Plan de formación por niveles: básico (uso de herramientas), intermedio (integración en flujo), avanzado (innovación editorial)
- Recursos de aprendizaje recomendados: cursos, comunidades, podcasts, publicaciones especializadas
- Proyecto práctico de formación: cada periodista experimenta con IA en un proyecto real durante un mes
- Incentivos para la adopción de nuevas herramientas sin generar ansiedad tecnológica

**Módulo 5: Bienestar y prevención del burnout en redacciones**
Aborda los riesgos laborales específicos del periodismo digital:
- Señales de burnout en redacciones: síntomas específicos del trabajo periodístico bajo presión
- Protocolo de gestión de la carga de trabajo en períodos de noticias de alto impacto
- Políticas de desconexión digital para periodistas en tiempos de news 24/7
- Apoyo psicológico para periodistas que cubren contenido traumático o de alta carga emocional
- Cultura de redacción que equilibre exigencia editorial con sostenibilidad personal

**Módulo 6: Planificación de plantilla y escalabilidad**
Ayúdame a planificar las necesidades futuras de talento:
- Análisis de qué roles periodísticos están siendo transformados por la IA y cuáles son irreemplazables
- Plan de reconversión para periodistas cuyas tareas están siendo automatizadas
- Nuevos perfiles que emergen en las redacciones digitales (data journalist, SEO editor, IA editor)
- Estrategia de freelancers y colaboradores externos para flexibilizar la plantilla
- Proyección de plantilla óptima para los próximos 3 años según el plan de negocio del medio

Finaliza con una hoja de ruta de transformación de la cultura de RRHH en la redacción, priorizando las acciones que mayor impacto tienen en la retención del talento periodístico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión del talento y cultura organizacional en redacciones periodísticas digitales',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos de negocio financieros para medios digitales con IA',
                'description'      => 'Analiza y proyecta la viabilidad financiera de un medio periodístico digital usando IA para modelar escenarios de ingresos, optimizar la estructura de costes y tomar decisiones de inversión.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero especializado en empresas de medios de comunicación digitales. Tu objetivo es ayudarme a construir un modelo financiero robusto para un medio periodístico que combine diferentes fuentes de ingresos y gestione eficientemente sus costes editoriales y tecnológicos.

**Contexto financiero:**
Gestiono las finanzas de un medio digital en crecimiento y necesito estructurar un modelo que permita proyectar escenarios, justificar inversiones en IA y tecnología, y demostrar viabilidad a potenciales inversores o accionistas.

**Área financiera 1: Estructura de ingresos diversificada**
Construye el modelo de ingresos completo del medio:
- Ingresos publicitarios: CPM medio por formato, fill rate, estacionalidad y proyección de tráfico
- Ingresos de suscripción: precio por plan, tasa de conversión esperada, churn mensual y LTV
- Branded content: número de campañas anuales esperadas, ticket medio y margen por campaña
- Eventos y formación: ingresos por evento, capacidad y frecuencia anual
- Licencias y sindicación de contenido: modelo de royalties para otros medios o plataformas
- Proyección total de ingresos a 3 años con escenario conservador, base y optimista

**Área financiera 2: Estructura de costes editorial y tecnológica**
Analiza y optimiza la estructura de gastos:
- Costes de personal editorial: redactores, editores, fotógrafos, diseñadores, community managers
- Costes tecnológicos: hosting, CMS, CDN, herramientas de IA, plataforma de newsletters, AdTech
- Costes de distribución: agencias de noticias, licencias de contenido, sindicación
- Costes de marketing y adquisición de audiencia: SEM, redes sociales, SEO, programas de referidos
- Costes generales y administrativos: oficina, seguros, legal, contabilidad
- Identificación de costes fijos vs. variables y palancas de optimización con IA

**Área financiera 3: Métricas financieras clave para medios digitales**
Define el dashboard de KPIs financieros:
- ARPU (Average Revenue Per User) por segmento de audiencia y canal
- CAC (Customer Acquisition Cost) por canal de captación y tipo de suscriptor
- LTV/CAC ratio como indicador de sostenibilidad del modelo de suscripción
- EBITDA del medio por línea de negocio (publicidad, suscripción, eventos)
- Punto de equilibrio operativo: cuántos suscriptores o visitas necesito para ser rentable
- Burn rate y runway si el medio está en fase de inversión

**Área financiera 4: Análisis de inversión en IA y tecnología**
Evalúa el retorno de la inversión tecnológica:
- ROI de implementar un motor de personalización de contenido
- Ahorro de costes por automatizar tareas editoriales con IA (resúmenes, titulares, SEO básico)
- Coste-beneficio de un sistema de fact-checking automatizado vs. equipo de verificación humano
- Análisis de build vs. buy para las principales herramientas tecnológicas del medio
- Impacto en ingresos de mejorar la experiencia de usuario con personalización

**Área financiera 5: Gestión del flujo de caja en medios con estacionalidad**
Planifica la liquidez ante la estacionalidad publicitaria:
- Meses de mayor y menor inversión publicitaria en medios digitales (patrón anual)
- Estrategias de mitigación de la estacionalidad: anticipar cobros, ajustar producción, diversificar ingresos
- Política de cobro y condiciones de pago con anunciantes y agencias de medios
- Fondo de maniobra recomendado para un medio de este tamaño
- Líneas de crédito o financiación alternativa disponibles para medios digitales

**Área financiera 6: Presentación a inversores y estrategia de financiación**
Prepara el argumentario financiero:
- Estructura del deck financiero para inversores en medios digitales
- Métricas que los inversores de medios priorizan en la due diligence
- Opciones de financiación disponibles: capital riesgo, subvenciones a medios, crowdfunding de lectores, deuda
- Valoración del medio: múltiplos de ingresos habituales en el sector
- Pacto de socios y derechos económicos a considerar al entrar socios inversores

Termina con una plantilla de modelo financiero en formato tabla (ingresos, costes, margen, inversión, flujo de caja) para los próximos 36 meses, con las celdas clave que se deben personalizar según el contexto del medio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelación financiera y análisis de rentabilidad para medios periodísticos digitales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y ético del periodismo con IA',
                'description'      => 'Analiza el marco legal aplicable al uso de IA en medios periodísticos: derechos de autor, privacidad, responsabilidad editorial, protección de fuentes y cumplimiento regulatorio.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho de la comunicación y tecnología con experiencia en medios de comunicación digitales. Tu objetivo es ayudarme a construir un marco legal y ético sólido para el uso de inteligencia artificial en un medio periodístico.

**Contexto legal:**
Mi medio utiliza IA para generar borradores de contenido, verificar noticias, personalizar la experiencia del lector y optimizar la distribución. Necesito entender las obligaciones legales, los riesgos de responsabilidad y las buenas prácticas éticas que debo implementar.

**Área legal 1: Derechos de autor y propiedad intelectual**
Analiza el marco de propiedad intelectual aplicable:
- Autoría del contenido generado con asistencia de IA: ¿quién es el titular de los derechos?
- Responsabilidad del medio cuando el contenido de IA replica involuntariamente texto protegido
- Uso de obras de terceros para entrenar modelos de IA propios: requisitos de licencia
- Protección del contenido periodístico del medio frente al scraping por parte de sistemas de IA
- Contratos de colaboración con periodistas freelance en el contexto del uso de IA editorial

**Área legal 2: Privacidad y protección de datos de la audiencia**
Cumplimiento del RGPD en el contexto de la personalización periodística:
- Bases legales para el tratamiento de datos de comportamiento lector (historial de clics, tiempo de lectura)
- Requisitos de consentimiento informado para la personalización algorítmica del contenido
- Política de privacidad actualizada que explique el uso de IA de manera comprensible
- Derechos del lector: acceso, rectificación, supresión y portabilidad de sus datos de comportamiento
- Transferencia de datos a terceros (plataformas de IA, ad networks): cláusulas contractuales necesarias

**Área legal 3: Responsabilidad por contenido periodístico con IA**
Gestiona el riesgo de responsabilidad editorial:
- Responsabilidad del medio por contenido inexacto generado total o parcialmente por IA
- Obligaciones de verificación antes de publicar contenido asistido por IA
- Política de correcciones y derecho a réplica cuando el error tiene componente de IA
- Responsabilidad por contenido de terceros curado o resumido con IA
- Seguro de responsabilidad civil para medios que usan IA editorial: coberturas recomendadas

**Área legal 4: Protección de fuentes en el entorno de IA**
Salvaguarda las fuentes periodísticas:
- Riesgos de revelar fuentes confidenciales al usar sistemas de IA para procesar entrevistas
- Requisitos de confidencialidad en los contratos con proveedores de IA
- Protocolo de manejo de información de fuentes antes de introducirla en herramientas de IA
- Marco legal del secreto profesional periodístico en España y Europa
- Cómo auditar si los sistemas de IA del medio podrían exponer información confidencial

**Área legal 5: Transparencia y etiquetado del contenido con IA**
Obligaciones de disclosure hacia la audiencia:
- Marco regulatorio actual y emergente sobre etiquetado de contenido generado por IA
- Estándares éticos de organizaciones periodísticas sobre transparencia en el uso de IA
- Política editorial de disclosure: cuándo y cómo informar al lector del uso de IA
- Diferencia entre IA como herramienta de asistencia (no requiere disclosure) y como autora (sí requiere)
- Riesgos reputacionales y legales de no etiquetar adecuadamente el contenido de IA

**Área legal 6: Cumplimiento regulatorio emergente**
Prepárate para la regulación futura del uso de IA en medios:
- Implicaciones del Reglamento Europeo de Inteligencia Artificial (AI Act) para los medios de comunicación
- Obligaciones de los medios como "high-risk AI system users" o como proveedores de contenido a sistemas de IA
- Ley de Servicios Digitales (DSA): obligaciones de transparencia algorítmica para plataformas de distribución de noticias
- Iniciativas de autorregulación del sector periodístico europeo en el uso de IA
- Plan de compliance para adaptarse a los cambios regulatorios en un entorno en constante evolución

Proporciona al final una checklist legal práctica que el equipo editorial pueda usar antes de publicar cualquier contenido que haya sido producido con asistencia de IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marco legal y compliance para el uso de IA en medios periodísticos',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención a lectores con IA en medios digitales',
                'description'      => 'Diseña un sistema de atención al lector usando IA para gestionar suscripciones, resolver dudas editoriales, gestionar quejas y construir una relación cercana con la audiencia.',
                'prompt_content'   => <<<'EOT'
Eres un director de atención al cliente especializado en medios de comunicación digitales. Tu objetivo es ayudarme a implementar un sistema de atención al lector con IA que mejore la satisfacción de la audiencia, reduzca la carga del equipo de soporte y contribuya a la retención de suscriptores.

**Contexto del servicio:**
Mi medio digital tiene una comunidad de lectores activos y suscriptores de pago. Recibimos consultas sobre suscripciones, quejas sobre contenido, solicitudes de corrección y preguntas editoriales. Quiero usar IA para atender mejor a nuestra audiencia sin perder el tono humano propio del periodismo.

**Pilar 1: Arquitectura del sistema de atención al lector**
Diseña el sistema de soporte omnicanal:
- Canales de atención: email, chat web, redes sociales, formulario de contacto web
- Flujo de enrutamiento: qué consultas resuelve la IA y cuáles escala al equipo humano
- Base de conocimiento editorial: FAQs sobre el medio, sus periodistas, su política editorial y sus suscripciones
- Horarios de atención automatizada vs. atención humana y expectativas de tiempo de respuesta
- Integración del sistema de atención con el CRM de suscriptores y el CMS editorial

**Pilar 2: Tipos de consultas y flujos de resolución**
Mapea los flujos de atención por categoría de consulta:
- Consultas de suscripción: activación, cambio de plan, cancelación, facturación, acceso técnico
- Consultas editoriales: errores en artículos, solicitudes de corrección, derecho de réplica
- Quejas sobre contenido: sensibilidad, bias percibido, omisiones editoriales
- Consultas de verificación: lectores que quieren contrastar datos publicados por el medio
- Denuncias de uso indebido de la plataforma: spam, acoso en comentarios, suplantación

**Pilar 3: Tono y personalidad del asistente IA del medio**
Define la voz del asistente de atención:
- Guía de tono: cómo se comunica el medio (serio e informativo, cercano y accesible, riguroso pero humano)
- Plantillas de respuesta para los 10 tipos de consultas más frecuentes adaptadas a ese tono
- Protocolo de escalada a periodista o editor cuando la consulta requiere criterio editorial
- Respuesta ante ataques a la credibilidad del medio: cómo responder con firmeza y transparencia
- Personalización de respuestas según el tipo de suscriptor (nuevo, recurrente, premium)

**Pilar 4: Gestión de la comunidad de lectores**
Usa la IA para gestionar la participación de la audiencia:
- Moderación automática de comentarios: criterios para aprobar, editar o eliminar comentarios
- Detección de desinformación en comentarios de lectores y protocolo de gestión
- Fomento del debate constructivo: cómo la IA puede facilitar conversaciones de calidad
- Gestión de trolls y acoso: protocolo de bloqueo y denuncia
- Reconocimiento de lectores más activos y valiosos para la comunidad

**Pilar 5: Retroalimentación editorial desde la atención al lector**
Convierte las interacciones en inteligencia editorial:
- Sistema de tagging de consultas para identificar tendencias de interés de la audiencia
- Proceso para que las quejas de lectores lleguen al equipo editorial de manera estructurada
- Análisis mensual de consultas frecuentes como input para la agenda editorial
- Encuestas de satisfacción posteriores a la resolución de consultas
- Dashboard de sentimiento de la audiencia basado en el volumen y tipo de consultas

**Pilar 6: Métricas de calidad del servicio al lector**
Define los KPIs del departamento de atención:
- Tiempo medio de primera respuesta (FRT) por canal y tipo de consulta
- Tasa de resolución en primer contacto (FCR) para el asistente de IA
- NPS (Net Promoter Score) de lectores después de interactuar con el servicio de atención
- Tasa de retención de suscriptores que contactaron con soporte vs. los que no
- Coste de atención por consulta y ahorro generado por la automatización con IA

Cierra con un manual de estilo de atención al lector de 2 páginas que el equipo pueda usar como referencia rápida, incluyendo ejemplos de respuestas buenas y malas para los escenarios más habituales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de atención al lector con IA para medios periodísticos digitales',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Periodismo freelance con IA: productividad y posicionamiento',
                'description'      => 'Estrategias para periodistas freelance que quieren usar IA para producir más contenido de calidad, gestionar su carrera independiente y posicionarse en un mercado cada vez más competitivo.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de carrera especializado en periodistas freelance y creadores de contenido independientes. Tu objetivo es ayudarme a construir una carrera periodística freelance sostenible y competitiva usando IA como palanca de productividad, diferenciación y crecimiento.

**Contexto del freelance:**
Soy periodista freelance y quiero usar IA para producir más y mejor contenido, gestionar mi negocio de manera más eficiente y posicionarme como referente en mi nicho temático. Busco un modelo de trabajo independiente que me permita vivir del periodismo sin depender de un único cliente.

**Pilar 1: Productividad periodística con IA**
Diseña mi flujo de trabajo con IA para maximizar la producción:
- Sistema de investigación acelerada: cómo usar IA para rastrear fuentes, datos y tendencias en mi nicho
- Flujo de escritura asistida: de la idea al borrador en la mitad del tiempo, sin perder mi voz
- Proceso de fact-checking básico con IA antes de entregar a la redacción
- Optimización SEO de artículos para publicaciones digitales usando asistentes de IA
- Gestión de mis notas e investigación en una base de conocimiento personal con IA

**Pilar 2: Posicionamiento de nicho y marca personal**
Construye mi propuesta de valor como periodista freelance especializado:
- Definición de mi nicho editorial: qué temas cubro mejor que nadie y por qué me pagan más por ello
- Estrategia de contenido propio para demostrar mi expertise (newsletter, blog, hilos de Twitter/X)
- Construcción de mi portfolio periodístico: qué piezas mostrar y cómo presentarlas digitalmente
- Presencia en LinkedIn como periodista freelance: cómo atraer encargos sin parecer desesperado
- Uso de IA para generar ideas de contenido propio que refuercen mi autoridad en el nicho

**Pilar 3: Captación de clientes y gestión comercial**
Desarrolla mi estrategia para conseguir y retener medios clientes:
- Proceso de prospección de medios afines a mi especialidad: dónde buscar, cómo contactar
- Carta de presentación para medios digitales que destaque mi valor en la era de la IA
- Negociación de tarifas: cómo justificar precios más altos cuando la IA produce "texto barato"
- Contratos básicos para freelancers: cláusulas imprescindibles sobre derechos, plazos y pagos
- Gestión de la relación con editores: cómo mantener la relación entre encargos y conseguir exclusivas

**Pilar 4: Diversificación de ingresos como periodista independiente**
Crea múltiples fuentes de ingresos complementarias:
- Newsletter propia de pago: cómo monetizar mi audiencia directamente sin intermediarios
- Cursos y talleres de periodismo: empaquetar mi conocimiento como formador
- Consultoría de comunicación: ayudar a empresas a comunicar mejor en mi área de especialidad
- Conferencias y ponencias: cómo posicionarse como speaker en eventos del sector
- Libros y ebooks: transformar mi periodismo en productos editoriales propios

**Pilar 5: Ética del periodismo freelance con IA**
Navega los dilemas éticos del periodismo asistido por IA:
- Transparencia con los medios: cuándo y cómo informar de que he usado IA en la producción
- Cómo mantener mi voz y criterio editorial cuando la IA escribe borradores
- Protección de fuentes cuando uso herramientas de transcripción o resumen con IA
- Derechos sobre el contenido que produzco con asistencia de IA: ¿soy el autor?
- Política personal sobre los tipos de contenido que no produciré aunque me los pidan

**Pilar 6: Gestión del negocio y sostenibilidad financiera**
Administra tu carrera freelance como un negocio:
- Estructura fiscal básica para periodistas freelance en España (autónomo, facturación, gastos deducibles)
- Política de tarifas: cómo estructurar precios por artículo, por hora o por proyecto
- Gestión del tiempo: cuántas horas para producir contenido vs. captar clientes vs. formación
- Fondo de reserva recomendado para cubrir meses de baja facturación
- Plan de crecimiento a 2 años: de freelance individual a microagencia de periodismo especializado

Finaliza con un plan de acción de 30-60-90 días para que pueda empezar a aplicar la IA en mi carrera freelance de manera inmediata, con tareas concretas y medibles para cada período.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Productividad y gestión de carrera para periodistas freelance usando IA',
                'vote_score'       => 40,
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
