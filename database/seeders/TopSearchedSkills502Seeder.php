<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills502Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'IA para gestión de reputación online en marketing',
                'description'       => 'Aprende a usar inteligencia artificial para monitorizar, analizar y responder reseñas online, protegiendo y potenciando la reputación de tu marca con estrategias automatizadas.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en gestión de reputación online y review management con amplia experiencia en marketing digital. Tu objetivo es ayudarme a construir una estrategia completa de gestión de reseñas para mi marca usando inteligencia artificial.

**Contexto de mi negocio:**
- Sector/industria: [describe tu sector]
- Plataformas donde tenemos presencia: [Google My Business, Trustpilot, Tripadvisor, Amazon, App Store, etc.]
- Volumen aproximado de reseñas mensuales: [número]
- Principal problema actual: [reseñas negativas sin responder / falta de consistencia / bajo volumen de reseñas positivas]

**tarea 1: Análisis de sentimiento de reseñas existentes**

Analiza las siguientes reseñas reales de mi negocio e identifica:
- Sentimiento general (positivo, negativo, neutro) con porcentaje estimado
- Temas recurrentes de queja (top 5)
- Temas recurrentes de elogio (top 5)
- Palabras clave más mencionadas
- Patrones temporales (¿hay épocas con más quejas?)
- Oportunidades de mejora del producto/servicio detectadas

Reseñas a analizar: [pega aquí tus reseñas reales]

**tarea 2: Sistema de respuesta automática personalizada**

Crea plantillas de respuesta profesionales y empáticas para cada categoría:

a) Reseñas de 5 estrellas — respuesta que fomente la fidelización y el boca a boca
b) Reseñas de 4 estrellas — agradecimiento con invitación a mejorar
c) Reseñas de 3 estrellas — reconocimiento neutro con propuesta de solución
d) Reseñas de 2 estrellas — respuesta empática con solución concreta y llamada a contacto privado
e) Reseñas de 1 estrella — manejo de crisis, desescalada emocional y recuperación del cliente

Cada plantilla debe:
- Sonar humana y personalizada, no corporativa
- Incluir el nombre del cliente si está disponible
- Mencionar detalles específicos de la reseña
- Tener entre 80 y 150 palabras
- Cumplir con las directrices de cada plataforma

**tarea 3: Estrategia de generación de reseñas positivas**

Diseña un plan de 30 días para aumentar el volumen de reseñas auténticas:
- Secuencia de emails post-compra para solicitar reseña (3 mensajes con asuntos y cuerpos)
- Guion de mensaje SMS/WhatsApp para clientes satisfechos
- Mejores momentos del customer journey para solicitar feedback
- Incentivos éticos (sin comprar reseñas) para motivar la participación

**tarea 4: Gestión de reseñas negativas — protocolo de crisis**

Cuando aparezca una reseña negativa viral o injusta, ejecuta este protocolo:
1. Evaluación de veracidad (¿es un cliente real o un troll?)
2. Respuesta pública inmediata (plantilla de primeras 2 horas)
3. Proceso de resolución privada (qué ofrecer y cómo negociar)
4. Solicitud de actualización de reseña una vez resuelto el problema
5. Cuándo y cómo reportar reseñas falsas a la plataforma

**tarea 5: Dashboard de métricas de reputación**

Define los KPIs esenciales que debo monitorizar semanalmente:
- Rating promedio por plataforma y tendencia
- Tasa de respuesta a reseñas (objetivo: 100% en 48h)
- Net Promoter Score estimado desde reseñas públicas
- Share of voice frente a competidores
- Impacto de la reputación en tráfico orgánico local (SEO)

Genera también un informe mensual de reputación tipo que pueda enviar a dirección.

**Restricciones importantes:**
- Todas las estrategias deben cumplir con las políticas de cada plataforma
- No sugerir nunca la compra, intercambio o manipulación de reseñas
- Las respuestas deben ser auténticas y resolver problemas reales
- Priorizar siempre la resolución del problema sobre la imagen pública

Comienza con el análisis de sentimiento y luego desarrolla cada tarea de forma ordenada.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión integral de reseñas y reputación online con IA para equipos de marketing',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'IA para integración de APIs de review management en desarrollo',
                'description'       => 'Implementa sistemas de gestión de reseñas automatizados integrando APIs de Google My Business, Trustpilot y otras plataformas con análisis de sentimiento mediante IA.',
                'prompt_content'    => <<<'EOT'
Eres un desarrollador backend senior especializado en integraciones de APIs y procesamiento de lenguaje natural. Necesito implementar un sistema completo de gestión de reseñas automatizado para una aplicación existente.

**Stack tecnológico:**
- Lenguaje/framework: [Node.js/Express, Python/FastAPI, PHP/Laravel, etc.]
- Base de datos: [PostgreSQL, MySQL, MongoDB]
- Infraestructura: [AWS, GCP, Azure, Heroku]
- APIs a integrar: [Google My Business, Trustpilot, Tripadvisor, Yelp]

**objetivo principal:**
Construir un microservicio que recopile reseñas de múltiples plataformas, analice sentimiento y genere respuestas automáticas usando IA.

**tarea 1: Arquitectura del sistema**

Diseña la arquitectura técnica del sistema con:
- Diagrama de componentes (en texto/ASCII)
- Flujo de datos desde cada API hasta la base de datos
- Estrategia de autenticación OAuth 2.0 para cada plataforma
- Manejo de rate limits y throttling por plataforma
- Sistema de colas (Redis/RabbitMQ) para procesamiento asíncrono
- Esquema de base de datos optimizado para almacenar reseñas multi-plataforma

**tarea 2: Integración con Google My Business API**

Proporciona el código completo para:
- Autenticación con la API de Google My Business
- Endpoint para listar todas las reseñas paginadas
- Webhook para recibir notificaciones de nuevas reseñas en tiempo real
- Función para publicar respuestas a reseñas específicas
- Manejo de errores y reintentos exponenciales

**tarea 3: Pipeline de análisis de sentimiento**

Implementa el pipeline de NLP:
- Integración con la API de Claude para análisis de sentimiento
- Clasificación multi-etiqueta (sentimiento + categorías de problema)
- Extracción de entidades nombradas (productos, empleados, ubicaciones)
- Detección de idioma y traducción automática si es necesario
- Scoring de urgencia (¿requiere respuesta inmediata?)
- Caché de resultados para evitar reprocesar reseñas ya analizadas

**tarea 4: Motor de respuestas automáticas**

Desarrolla el sistema de generación de respuestas:
- Función que toma la reseña + análisis de sentimiento y genera respuesta
- Sistema de plantillas con variables dinámicas (nombre cliente, producto, etc.)
- Lógica de aprobación: respuestas automáticas para 4-5 estrellas, cola de revisión para 1-3 estrellas
- A/B testing de diferentes estilos de respuesta
- Límites de longitud y validación de contenido antes de publicar

**tarea 5: Sistema de alertas y monitorización**

Configura el sistema de alertas:
- Webhook/notificación cuando el rating baje de un umbral definido
- Alerta inmediata para reseñas de 1 estrella con palabras clave críticas
- Resumen diario/semanal por email con métricas agregadas
- Dashboard en tiempo real con Chart.js o similar
- Logs estructurados para auditoría y debugging

**tarea 6: Tests y despliegue**

Escribe los tests y el proceso de despliegue:
- Tests unitarios para el parser de reseñas de cada plataforma
- Tests de integración con mocks de las APIs externas
- Tests de carga para el pipeline de sentimiento
- Dockerfile y docker-compose para desarrollo local
- Pipeline CI/CD en GitHub Actions

Incluye fragmentos de código reales y funcionales, no pseudocódigo. Comenta el código en español.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 90,
                'use_case'          => 'Desarrollo de microservicio de review management con análisis de sentimiento por IA',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'IA para diseño de dashboards de reputación y review UX',
                'description'       => 'Diseña interfaces intuitivas para gestionar reseñas y visualizar métricas de reputación online, aplicando principios de UX y visualización de datos con ayuda de IA.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador UX/UI senior con especialización en dashboards de datos y gestión de reputación online. Necesito crear una interfaz completa para que los gestores de reputación puedan monitorizar y responder reseñas de forma eficiente.

**Contexto del producto:**
- Tipo de usuario: gestores de marketing y community managers
- Plataformas integradas: Google, Trustpilot, Tripadvisor, Facebook
- Volumen de reseñas: hasta 500 reseñas mensuales
- Dispositivos: principalmente desktop, con vista básica en móvil

**objetivo de diseño:**
Crear un sistema de diseño y prototipos para una aplicación de gestión de reseñas que sea funcional, clara y reduzca el tiempo de respuesta a reseñas en un 70%.

**tarea 1: Arquitectura de información y flujos de usuario**

Define la arquitectura completa:
- Mapa del sitio con todas las pantallas necesarias
- Flujo principal: recibir reseña → analizar → responder → archivar
- Flujo de escalado: reseña negativa → alerta → revisión → resolución
- Flujo de reporting: datos → filtros → exportar informe
- Jerarquía de permisos: admin, gestor, revisor (solo lectura)

**tarea 2: Diseño del dashboard principal**

Describe en detalle el layout del dashboard principal:
- KPIs en el header: rating promedio, tendencia, reseñas pendientes, tiempo de respuesta
- Gráficos de línea: evolución del rating por plataforma (últimos 90 días)
- Mapa de calor: distribución de reseñas por hora y día de la semana
- Lista de reseñas recientes con indicadores de urgencia (color coding)
- Panel lateral: filtros por plataforma, rating, estado, fecha, idioma

Incluye las especificaciones de color, tipografía y espaciado que seguirían el design system.

**tarea 3: Vista de gestión de reseñas (Review Inbox)**

Diseña la interfaz principal de trabajo:
- Vista lista vs vista kanban (por estado: nueva, en proceso, respondida, archivada)
- Card de reseña: avatar, nombre, rating, fecha, plataforma, texto completo, análisis de sentimiento
- Panel de respuesta: editor de texto enriquecido, selector de plantillas, vista previa, botón publicar
- Atajos de teclado para acciones frecuentes
- Búsqueda y filtrado avanzado en tiempo real

**tarea 4: Sistema de visualización de sentimiento**

Define cómo visualizar el análisis de IA:
- Gauge chart para el NPS estimado
- Treemap de categorías de quejas y elogios
- Word cloud interactivo de términos frecuentes
- Gráfico de burbujas: rating vs volumen por competidor
- Comparativa temporal: ¿mejoramos mes a mes en cada categoría?

**tarea 5: Micro-interacciones y estados de la UI**

Especifica las micro-interacciones clave:
- Estado de carga mientras la IA analiza el sentimiento
- Animación al marcar una reseña como respondida
- Toast notifications para nuevas reseñas urgentes
- Empty states con ilustraciones y CTA claros
- Onboarding para nuevos usuarios (tooltips, tours guiados)

**tarea 6: Accesibilidad y responsive**

Asegura el cumplimiento de accesibilidad:
- Contraste de colores WCAG 2.1 AA para todos los estados
- Navegación por teclado completa
- ARIA labels para los gráficos y KPIs
- Vista tablet para el community manager en movimiento

Entrega las especificaciones como si fuera un handoff para desarrollo, con medidas en px/rem, tokens de color y notas de comportamiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseño de interfaz de gestión de reseñas y dashboard de reputación online',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IA para usar reseñas de clientes como herramienta de ventas',
                'description'       => 'Convierte las reseñas y testimonios de clientes en activos de ventas poderosos usando IA para extraer argumentos, objeciones y prueba social que cierren más deals.',
                'prompt_content'    => <<<'EOT'
Eres un experto en ventas consultivas y social selling con dominio de la psicología del comprador. Necesito convertir las reseñas y testimonios de nuestros clientes en herramientas de ventas que aceleren el ciclo comercial.

**Contexto comercial:**
- Tipo de producto/servicio: [describe tu oferta]
- Ticket promedio: [precio]
- Ciclo de ventas típico: [días/semanas]
- Principal objeción de compra: [precio / confianza / competencia / necesidad]

**tarea 1: Minería de argumentos de venta en reseñas**

Analiza las siguientes reseñas de clientes y extrae:
- Los 10 beneficios más mencionados (con frecuencia y frases exactas)
- Las objeciones superadas que aparecen en las reseñas ("al principio dudé, pero...")
- Las situaciones de antes/después más persuasivas
- Las comparaciones con competidores que favorecen mi producto
- Las métricas y resultados específicos mencionados (ROI, tiempo ahorrado, etc.)

Reseñas a analizar: [pega aquí]

**tarea 2: Biblioteca de prueba social por etapa del funnel**

Organiza los testimonios por momento de uso en el proceso de venta:

- Conciencia (TOFU): reseñas que explican el problema que resuelves
- Consideración (MOFU): reseñas que responden "¿por qué ustedes y no la competencia?"
- Decisión (BOFU): reseñas que superan la última objeción antes de comprar
- Post-venta (retención): reseñas que justifican la renovación o upsell

Para cada etapa, proporciona 3 testimonios seleccionados y el script de cómo usarlos en conversación.

**tarea 3: Scripts de ventas basados en reseñas reales**

Crea guiones de conversación para:
- Email de prospección: usa una reseña como apertura con un caso de éxito similar al prospecto
- Llamada de descubrimiento: cómo introducir una reseña cuando el prospecto menciona una objeción
- Presentación/demo: slide de testimonios que genere urgencia sin presionar
- Seguimiento post-reunión: email que refuerza con prueba social específica al sector del prospecto
- Respuesta a "lo tengo que pensar": mini caso de éxito que reactive la conversación

**tarea 4: Análisis de brechas en la prueba social**

Identifica qué testimonios me faltan para cerrar mejor:
- ¿Qué industrias o perfiles de cliente no están representados en mis reseñas?
- ¿Qué objeciones frecuentes no están siendo neutralizadas por testimonios actuales?
- ¿Cómo solicitar estratégicamente reseñas a clientes satisfechos para llenar esas brechas?
- Plantilla de entrevista de caso de éxito (5 preguntas) para crear testimonios de alto impacto

**tarea 5: Medición del impacto de la prueba social en ventas**

Define cómo medir si la estrategia funciona:
- KPIs de impacto: tasa de conversión antes/después, velocidad del ciclo de ventas
- A/B testing de emails con y sin testimonios
- Seguimiento de qué testimonios se usan más y cuáles cierran más deals

Proporciona un plan de implementación de 4 semanas para adoptar esta estrategia en el equipo de ventas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Uso estratégico de reseñas de clientes como herramienta de cierre de ventas',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'IA para integrar feedback de reseñas en el ciclo de producto',
                'description'       => 'Utiliza IA para transformar miles de reseñas de usuarios en insights accionables para el roadmap de producto, priorizando mejoras basadas en el impacto real en la satisfacción.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager senior con experiencia en empresas orientadas al cliente y en metodologías de product discovery basadas en datos cualitativos. Necesito un sistema para convertir las reseñas públicas de nuestro producto en insights que alimenten el roadmap de forma continua.

**Contexto del producto:**
- Tipo de producto: [SaaS / app móvil / ecommerce / producto físico]
- Plataformas de reseñas activas: [App Store, Google Play, G2, Capterra, Amazon]
- Frecuencia de lanzamientos: [mensual / quincenal / semanal]
- Equipo: [tamaño y estructura]

**tarea 1: Framework de análisis de reseñas para product insights**

Diseña el proceso de análisis mensual de reseñas:
- Protocolo de recopilación: qué plataformas, qué volumen, qué frecuencia
- Taxonomía de categorías de feedback (bugs, UX, features, onboarding, precio, soporte)
- Proceso de etiquetado con IA: cómo clasificar automáticamente cada reseña
- Detección de señales débiles: cómo identificar tendencias emergentes antes de que se vuelvan críticas
- Diferenciación entre feedback de usuarios power vs usuarios casuales

**tarea 2: Priorización de mejoras basada en reseñas**

Analiza estas reseñas y genera un informe de priorización:

Reseñas a analizar: [pega aquí las reseñas]

Para cada insight extraído, evalúa:
- Frecuencia de mención (cuántos usuarios lo mencionan)
- Impacto en churn (¿los usuarios que se van mencionan esto?)
- Impacto en rating (¿las reseñas de 1-2 estrellas lo mencionan más?)
- Segmento afectado (¿es un problema de todos o de un perfil específico?)
- Esfuerzo estimado de solución (T-shirt sizing: S/M/L/XL)
- Score de prioridad compuesto

**tarea 3: Conexión de reseñas con métricas de producto**

Define cómo correlacionar las reseñas con datos cuantitativos:
- ¿Qué features mencionadas en reseñas negativas tienen mayor tasa de abandono en el onboarding?
- ¿Los usuarios que mencionan una fricción específica tienen menor LTV?
- ¿Hay correlación entre el sentiment score de reseñas y el NPS interno?
- Cómo presentar estas correlaciones al equipo de ingeniería para justificar prioridades

**tarea 4: Proceso de cierre del loop con usuarios**

Crea un sistema para cerrar el loop con los reviewers:
- Cómo notificar a usuarios que reportaron un bug cuando se lanza el fix
- Plantilla de respuesta pública en App Store/Play anunciando mejoras pedidas por usuarios
- Proceso para convertir reviewers críticos en beta testers del fix
- Cómo medir si las mejoras implementadas mejoran el rating

**tarea 5: Informe mensual de voz del cliente para stakeholders**

Genera la estructura del informe mensual:
- Executive summary de la reputación online (una página)
- Top 3 temas de satisfacción y top 3 de insatisfacción
- Evolución del rating y NPS estimado desde reseñas
- Features más pedidas con evidencia de citas reales
- Impacto de mejoras lanzadas en el mes en el sentiment
- Recomendaciones para el próximo sprint

Adapta todo el sistema para que pueda ejecutarse con 4 horas de trabajo mensual usando IA para la mayor parte del análisis.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Integración de reseñas de usuarios en el proceso de product discovery y roadmap',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'IA para gestión de la reputación como empleador (employer branding)',
                'description'       => 'Monitoriza y mejora las reseñas en Glassdoor, LinkedIn e Indeed con IA para atraer y retener talento, construyendo una marca empleadora sólida y auténtica.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en employer branding y gestión de talento con experiencia en análisis de la reputación como empleador. Necesito construir una estrategia para mejorar nuestra reputación en plataformas de empleo y atraer mejor talento.

**Contexto de la empresa:**
- Sector y tamaño: [describe la empresa]
- Rating actual en Glassdoor/Indeed: [número de estrellas]
- Principales quejas en reseñas: [menciona las más frecuentes]
- Objetivo de contratación próximos 12 meses: [perfiles y volumen]

**tarea 1: Auditoría de reputación como empleador**

Analiza las siguientes reseñas de empleados (actuales y exex) y extrae:
- Temas de satisfacción más frecuentes (los que retienen talento)
- Temas de insatisfacción más frecuentes (los que provocan fuga de talento)
- Diferencias entre valoraciones de empleados actuales vs exemployados
- Diferencias por departamento, nivel o ubicación si es detectable
- Comparativa implícita con competidores que aparezca en las reseñas

Reseñas a analizar: [pega aquí]

**tarea 2: Plan de respuesta a reseñas en Glassdoor e Indeed**

Crea la estrategia de respuesta:
- Protocolo de respuesta pública para reseñas de 1-2 estrellas (tono empático, sin defensividad)
- Respuesta estándar para reseñas de 3 estrellas con reconocimiento y propuesta de mejora
- Respuesta para reseñas de 4-5 estrellas que refuerce la cultura positiva
- Cómo responder a acusaciones graves (discriminación, toxicidad) sin escalar el conflicto
- Quién en RRHH debe revisar y aprobar cada respuesta antes de publicar

**tarea 3: Programa de generación de reseñas auténticas**

Diseña el programa para aumentar el volumen de reseñas positivas:
- Mejor momento del employee journey para solicitar una reseña
- Script de solicitud por parte de managers (cómo pedirlo sin presionar)
- Campaña interna: "Comparte tu experiencia en Glassdoor" con incentivos éticos
- Cómo involucrar a embajadores internos (empleados satisfechos) en el employer branding
- Protocolo con empleados en salida (offboarding) para solicitar feedback honesto

**tarea 4: Mejoras internas basadas en el feedback de reseñas**

Transforma las quejas más frecuentes en planes de mejora:
- Identifica las 5 quejas más frecuentes y accionables
- Para cada queja, propón una mejora concreta con responsable, plazo e indicador de éxito
- Cómo comunicar internamente que estamos actuando sobre el feedback de los empleados
- Proceso de seguimiento trimestral para medir mejora en el sentiment

**tarea 5: Estrategia de contenido para employer branding**

Crea un plan de contenido para redes sociales y la página de empleo:
- 10 ideas de posts de LinkedIn que muestren la cultura real (basadas en las reseñas positivas)
- Guion para 3 vídeos cortos de "un día en la empresa" con empleados reales
- Actualización de la página de Careers basada en los valores más mencionados en reseñas positivas
- Cómo usar las reseñas como social proof en ofertas de empleo y proceso de reclutamiento

Incluye un calendario de ejecución de 90 días para toda la estrategia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Mejora de la reputación como empleador usando análisis de reseñas con IA',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA para analizar el impacto financiero de la reputación online',
                'description'       => 'Cuantifica el impacto económico de las reseñas online en los ingresos del negocio y diseña un business case para invertir en gestión de reputación usando análisis de datos con IA.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero con especialización en ROI de iniciativas de experiencia de cliente y marketing. Necesito cuantificar el impacto económico de nuestra reputación online y construir el business case para invertir en su mejora.

**Datos del negocio:**
- Ingresos anuales: [cifra]
- Tasa de conversión actual desde canales online: [porcentaje]
- Rating promedio actual: [estrellas]
- Coste de adquisición de cliente (CAC): [cifra]
- Ticket promedio y LTV: [cifras]

**tarea 1: Modelo de impacto financiero de la reputación**

Construye un modelo cuantitativo que relacione:
- Relación entre rating online y tasa de conversión (usa benchmarks de la industria)
- Impacto estimado de subir 0.5 estrellas en los ingresos anuales
- Coste de las reseñas negativas sin responder (clientes perdidos estimados)
- Valor económico de cada reseña positiva (impacto en SEO local, conversión, referidos)
- ROI proyectado de implementar un sistema de gestión de reseñas

**tarea 2: Análisis de correlación: reputación vs métricas financieras**

Analiza los datos históricos disponibles:
- Correlación entre picos de reseñas negativas y caídas en ventas
- Impacto del rating en el CPC y CPL de campañas de paid media (Google Ads penaliza ratings bajos)
- Diferencia en tasa de cierre entre leads que han leído reseñas vs los que no
- Impacto en la tasa de churn de clientes que dejan reseñas de 1-2 estrellas

**tarea 3: Business case para la dirección**

Estructura el business case completo:
- Situación actual: rating, volumen de reseñas, tiempo de respuesta, pérdida estimada
- Propuesta: sistema de gestión de reputación con IA (herramienta + proceso + recursos)
- Inversión requerida: herramienta (coste), tiempo del equipo (coste), formación (coste)
- Retorno esperado: proyección a 12 meses con escenarios conservador, base y optimista
- Payback period y VAN de la inversión
- Métricas de éxito con umbral mínimo aceptable

**tarea 4: Benchmarking sectorial**

Proporciona datos de referencia del sector:
- Rating promedio de las empresas líderes del sector
- Correlación rating-conversión documentada en estudios de Harvard/McKinsey/BrightLocal
- Casos de éxito con impacto financiero cuantificado de empresas similares
- Umbrales críticos: rating por debajo del cual la empresa pierde oportunidades significativas

**tarea 5: Modelo de seguimiento financiero mensual**

Define el cuadro de mando financiero de la reputación:
- Ingresos atribuibles a la mejora de reputación (metodología de atribución)
- Coste evitado por gestión proactiva de crisis de reputación
- Valor del tráfico orgánico local generado por mejor rating
- Ahorro en CAC gracias al boca a boca generado por reseñas positivas

Incluye una plantilla de Excel/hoja de cálculo estructurada que pueda usar mensualmente, con fórmulas y las fuentes de datos necesarias para cada celda.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Cuantificación del ROI de la reputación online y business case para inversión en review management',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'IA para gestión legal de reseñas falsas y difamación online',
                'description'       => 'Aprende a identificar reseñas falsas o difamatorias y gestiona el proceso legal de eliminación usando IA para documentar, escalar y proteger la reputación de tu cliente.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho digital, protección del honor y reputación online. Necesito un protocolo completo para gestionar situaciones donde un negocio o persona recibe reseñas falsas, difamatorias o malintencionadas.

**Contexto del caso:**
- Tipo de cliente: [empresa / profesional autónomo / persona pública]
- Plataformas afectadas: [Google, Trustpilot, Tripadvisor, Glassdoor, etc.]
- Tipo de contenido: [reseña falsa de no-cliente / campaña organizada / difamación con datos falsos]
- Jurisdicción: [España / México / Argentina / otro país hispanohablante]

**tarea 1: Identificación y documentación de reseñas ilegales**

Establece el protocolo de análisis:
- Indicadores que diferencian una reseña negativa legítima de una falsa o malintencionada
- Señales de campaña coordinada de reseñas negativas (timing, perfiles nuevos, lenguaje similar)
- Proceso de preservación de evidencia: capturas de pantalla con metadatos, notaría electrónica, blockchain
- Cuándo una reseña cruza la línea legal de la crítica legítima a la difamación
- Diferencia entre opinion statement (protegida) y false fact statement (accionable)

**tarea 2: Proceso de eliminación en cada plataforma**

Documenta el proceso en las principales plataformas:
- Google: formulario de solicitud, motivos aceptados, plazo de respuesta, escalado
- Trustpilot: proceso de disputa, documentación requerida, tiempo medio de resolución
- Tripadvisor: Management Response + proceso de reporte, criterios de eliminación
- Glassdoor: cómo denunciar reseñas que violan sus términos de servicio
- Qué hacer cuando la plataforma rechaza eliminar la reseña

**tarea 3: Acciones legales disponibles**

Analiza las vías legales aplicables en España y Latinoamérica:
- Derecho al honor e imagen: artículos aplicables del Código Civil y Constitución
- Solicitud de identificación del autor anónimo mediante requerimiento judicial
- Medidas cautelares para eliminar el contenido mientras dura el proceso
- Acción de cesación y rectificación
- Reclamación de daños y perjuicios: cómo cuantificar el daño reputacional
- Denuncia penal cuando aplica (calumnia, injurias, competencia desleal)

**tarea 4: Comunicación y gestión de la crisis**

Asesora sobre la comunicación durante el proceso:
- Respuesta pública en la plataforma mientras se tramita la eliminación (qué decir y qué no)
- Comunicación a clientes y stakeholders sobre la situación
- Cuándo conviene hacer pública la acción legal (con riespo de amplificación) vs gestión discreta
- Cómo manejar el seguimiento de medios si la historia se viraliza

**tarea 5: Medidas preventivas y de resiliencia reputacional**

Establece el plan preventivo:
- Monitorización continua para detectar campañas de desprestigio a tiempo
- Construcción de reserva reputacional: volumen de reseñas positivas que amortigüen ataques
- Cláusulas contractuales para prevenir reseñas difamatorias de ex-empleados o ex-clientes
- Política interna de comunicación digital que minimice el riesgo de controversias

Proporciona plantillas de comunicación, modelos de cartas de requerimiento y un árbol de decisión para que el cliente sepa qué vía tomar según la gravedad del caso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Protocolo legal para gestionar reseñas falsas, difamatorias y campañas de desprestigio online',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'IA para convertir reseñas negativas en oportunidades de soporte',
                'description'       => 'Transforma las reseñas negativas en casos de soporte resueltos y oportunidades de recuperación de clientes, usando IA para detectar problemas sistémicos y reducir el churn.',
                'prompt_content'    => <<<'EOT'
Eres un líder de Customer Success con experiencia en recuperación de clientes insatisfechos y en el uso de feedback público para mejorar la calidad del servicio. Necesito un sistema para convertir las reseñas negativas en oportunidades de mejora y recuperación.

**Contexto del equipo:**
- Tipo de negocio: [SaaS / ecommerce / servicio / producto físico]
- Volumen de reseñas negativas (1-2 estrellas) mensuales: [número]
- Tasa de churn actual: [porcentaje]
- Herramientas de soporte: [Zendesk, Intercom, Freshdesk, etc.]

**tarea 1: Sistema de triaje y respuesta rápida**

Diseña el flujo de trabajo cuando aparece una reseña negativa:
- Detección automática: configura alertas para reseñas de 1-2 estrellas con tiempo máximo de respuesta de 2 horas
- Clasificación por tipo: bug técnico / mal servicio / expectativas mal gestionadas / problema de precio / error del usuario
- Asignación al agente correcto según el tipo de problema
- Protocolo de contacto proactivo: cómo llegar al cliente más allá de la respuesta pública
- Script de primera llamada/email cuando localizas al cliente que dejó la reseña negativa

**tarea 2: Técnicas de recuperación de clientes (service recovery)**

Para cada tipo de problema detectado en las reseñas, define la estrategia de recuperación:

- Bug técnico confirmado: reconocimiento, timeline de solución, compensación justa, seguimiento
- Mal servicio de un agente: disculpa personalizada, escalado, auditoría interna, garantía de mejora
- Expectativas mal gestionadas: clarificación empática, reencuadre de valor, posible ajuste comercial
- Problema de precio: análisis de valor percibido, propuesta alternativa, negociación flexible
- Problema resuelto pero cliente sigue molesto: recovery excepcional, gesto sorpresa, seguimiento 30 días

**tarea 3: Extracción de insights para mejora del servicio**

Implementa el proceso mensual de análisis:
- Análisis de causa raíz de las quejas más frecuentes (método 5 Porqués aplicado a reseñas)
- Identificación de problemas sistémicos vs incidentes aislados
- Detección de fricción en el customer journey que genera insatisfacción silenciosa
- Correlación entre tipo de queja en reseñas y puntos del onboarding o uso del producto
- Reporte mensual para producto, operaciones y liderazgo con hallazgos accionables

**tarea 4: Métricas de Customer Success basadas en reseñas**

Define el scorecard del equipo:
- Tiempo medio de primera respuesta a reseñas negativas (objetivo: menos de 2 horas)
- Tasa de recuperación de clientes (porcentaje que actualiza su reseña o continúa como cliente)
- CSAT post-resolución de casos originados en reseñas negativas
- Reducción de churn atribuible a la gestión proactiva de reseñas
- Net Promoter Score antes y después de implementar el sistema

**tarea 5: Entrenamiento del equipo con reseñas reales**

Diseña el programa de formación:
- Cómo usar reseñas negativas reales (anonimizadas) en role plays de entrenamiento
- Guía de tono y empatía: diferencia entre disculpa corporativa y reconocimiento genuino
- Gestión emocional del agente cuando recibe insultos o críticas injustas
- Calibración quincenal del equipo usando reseñas como casos de estudio

Incluye ejemplos de respuestas modelo para los 5 tipos de reseña negativa más comunes y métricas de éxito para cada tipo de recuperación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de recuperación de clientes y mejora del servicio basado en análisis de reseñas negativas',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IA para construir reputación online como freelancer',
                'description'       => 'Desarrolla una estrategia completa de gestión de reputación digital como freelancer, desde la obtención de primeras reseñas hasta la construcción de autoridad en tu nicho usando IA.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de personal branding y marketing para freelancers con experiencia ayudando a profesionales independientes a construir su reputación online. Necesito una estrategia completa para posicionarme como referente en mi nicho y atraer clientes de mayor calidad.

**Perfil del freelancer:**
- Especialidad: [describe tu servicio]
- Años de experiencia: [número]
- Plataformas donde trabajo: [Upwork, Fiverr, Malt, LinkedIn, web propia]
- Tipo de cliente objetivo: [perfil del cliente ideal]
- Problema actual: [pocos testimonios / baja visibilidad / competencia por precio]

**tarea 1: Auditoría de reputación actual**

Evalúa mi presencia online actual:
- Análisis de mis perfiles en plataformas de freelancing (rating, volumen de reseñas, ratio respuesta)
- Comparativa con los 5 freelancers top de mi especialidad (¿qué tienen ellos que yo no tengo?)
- Brechas de credibilidad: qué prueba social me falta para justificar mis tarifas
- Quick wins: qué cambios rápidos mejorarían mi percepción de valor inmediatamente

**tarea 2: Sistema para obtener reseñas de calidad**

Diseña el proceso post-proyecto para obtener testimonios poderosos:
- Timing ideal: cuándo solicitar la reseña (justo cuando el cliente celebra el resultado)
- Script de solicitud que maximiza la probabilidad de recibir una reseña detallada
- Preguntas guía para que el cliente escriba una reseña específica y útil (no solo "muy buen trabajo")
- Seguimiento sin ser pesado: secuencia de 2 recordatorios si no responde
- Cómo pedir un testimonio en vídeo o en LinkedIn a clientes muy satisfechos

**tarea 3: Construcción de autoridad más allá de las reseñas**

Desarrolla el plan de posicionamiento como experto:
- Estrategia de contenido en LinkedIn: tipo de posts que atraen clientes (casos de éxito, antes/después, lecciones aprendidas)
- Cómo transformar cada proyecto completado en contenido de portafolio que vende
- Construcción de presencia en comunidades donde está tu cliente ideal
- Guest posts o colaboraciones que aumenten tu visibilidad y autoridad
- Optimización del perfil en plataformas de freelancing para máximo SEO interno

**tarea 4: Gestión de situaciones de reputación difíciles**

Prepárate para los escenarios complicados:
- Cliente insatisfecho que amenaza con dejar reseña negativa: cómo negociar antes de que ocurra
- Reseña negativa injusta ya publicada: respuesta profesional que muestre tu carácter sin atacar al cliente
- Cliente tóxico finalizado: cómo cerrar la relación minimizando el riesgo reputacional
- Disputa en Upwork/Fiverr: proceso de mediación y documentación de evidencias

**tarea 5: Posicionamiento de precio basado en reputación**

Conecta la reputación con el incremento de tarifas:
- Cuándo tienes suficiente reputación para subir precios (indicadores concretos)
- Cómo comunicar la subida de tarifas a clientes actuales sin perderlos
- Cómo usar los testimonios en la propuesta comercial para justificar una tarifa premium
- Estrategia de transición de Fiverr/Upwork a clientes directos usando la reputación acumulada

Crea un plan de implementación de 6 meses con hitos mensuales y métricas de progreso medibles.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de reputación online y obtención de testimonios para freelancers independientes',
                'vote_score'        => 48,
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
