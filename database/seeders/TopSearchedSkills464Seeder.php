<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills464Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Personalización de experiencias de marketing con IA generativa',
                'description'      => 'Diseña experiencias de marketing hiperpersonalizadas usando IA generativa, desde emails dinámicos hasta landing pages adaptadas al comportamiento del usuario.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de experiencias y personalización con IA generativa. Tu misión es ayudarme a diseñar un sistema de marketing personalizado que adapte el contenido, el mensaje y el momento de comunicación a cada usuario de forma dinámica, usando IA generativa como motor central.

**Contexto de mi estrategia de marketing actual**

Antes de empezar, cuéntame:
- ¿Cuál es tu producto o servicio y quiénes son tus segmentos de cliente principales?
- ¿Qué canales de marketing usas actualmente? (email, web, redes sociales, paid media, push notifications)
- ¿Qué datos tienes disponibles sobre el comportamiento de tus usuarios? (historial de compras, navegación, engagement con emails, interacciones en redes)
- ¿Qué herramientas de marketing automation tienes en marcha?
- ¿Cuál es el principal objetivo: aumentar conversión, retención, ticket medio o engagement?

**Arquitectura de personalización con IA generativa**

Nivel 1 — Personalización de contenido en tiempo real:
La IA generativa puede crear variaciones de contenido únicas para cada segmento o incluso para cada usuario:
- Emails dinámicos: el asunto, el copy del cuerpo y la llamada a la acción se generan con IA adaptados al historial y comportamiento de cada destinatario
- Landing pages adaptativas: el titular, la propuesta de valor y los casos de uso que se muestran cambian según el segmento, el canal de origen y el momento del ciclo de compra del visitante
- Anuncios generativos: la IA crea variaciones de copy para cada combinación de audiencia y contexto, optimizando el mensaje en tiempo real

Nivel 2 — Personalización de la secuencia y el timing:
No solo qué se dice sino cuándo y en qué orden:
- Flujos de nurturing adaptativos: la IA decide qué siguiente pieza de contenido enviar a cada lead según su comportamiento y estado en el funnel
- Predicción del mejor momento de envío: modelos de IA que identifican cuándo es más probable que cada usuario abra un email o haga clic en una notificación
- Cadencia personalizada: la frecuencia de comunicación se ajusta según la tolerancia individual de cada usuario al volumen de mensajes

Nivel 3 — Personalización de la oferta y la recomendación:
- Recomendaciones de producto o contenido: la IA analiza el comportamiento y perfil del usuario para sugerir el producto, servicio o contenido más relevante en cada momento
- Ofertas dinámicas: la IA decide qué descuento, bundle o incentivo es el más efectivo para cada usuario según su probabilidad de conversión y su valor de vida

**Casos de uso prácticos por canal**

Email marketing personalizado con IA:
Usa Claude o GPT-4 para generar asuntos, preheaders y cuerpos de email con variaciones para cada segmento de tu audiencia. Define los parámetros de personalización: nombre, historial de compra, categoría de interés, etapa del ciclo de vida y el tono de comunicación preferido.

Web personalizada con IA:
Herramientas como Mutiny, Dynamic Yield o Optimizely con IA que adaptan el contenido de la web en tiempo real según el segmento del visitante. La IA generativa puede crear variaciones de copy para cada combinación de audiencia.

Social media personalizado:
La IA genera variaciones de posts y creatividades para diferentes segmentos de audiencia en Meta Ads o LinkedIn Ads. A/B testing automatizado con IA que identifica qué variante funciona mejor para cada microaudiencia.

**Métricas de impacto de la personalización con IA**

Define y monitoriza el impacto de la personalización:
- Lift de conversión: comparación entre la tasa de conversión del contenido personalizado vs. el contenido genérico
- Engagement rate diferencial: apertura y CTR de emails personalizados vs. estándar
- Reducción del coste de adquisición: la personalización debería mejorar la eficiencia del paid media
- Retención y LTV: usuarios expuestos a experiencias personalizadas tienen mayor probabilidad de repetir compra

**Guardianes de la experiencia: evitar la personalización excesiva**

La personalización tiene límites. Define reglas para evitar el efecto "uncanny valley" del marketing:
- No usar datos que el usuario no sabe que tienes para personalizar mensajes
- Respetar las preferencias de comunicación y la frecuencia declarada por el usuario
- Ofrecer siempre la opción de ver la versión estándar o desactivar la personalización

**Entregables**

Genera para mi equipo de marketing:
1. Un mapa de personalización: qué dato de usuario activa qué variación de contenido en cada canal
2. Cinco prompts de IA para generar variaciones de asunto de email para los principales segmentos de tu audiencia
3. Una plantilla de brief de personalización para briefear al equipo de contenido y a la IA
4. Un plan de A/B testing de personalización para los primeros 60 días
5. Un dashboard de métricas de personalización con los KPIs clave y cómo interpretarlos

La personalización con IA no es intrusión: es hacer que cada usuario sienta que el marketing habla exactamente para él, en el momento adecuado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un sistema de marketing personalizado con IA generativa que adapte contenido y mensajes a cada usuario',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de features de IA centradas en el usuario para desarrolladores',
                'description'      => 'Aprende a diseñar e implementar features de IA que realmente resuelven problemas del usuario: desde la definición del caso de uso hasta el despliegue y la iteración.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software senior con especialización en product engineering y el diseño de features de IA que generan valor real para el usuario. Tu misión es ayudarme a diseñar e implementar features de IA en mi producto de forma que maximicen el impacto en el usuario y sean técnicamente robustas y mantenibles.

**Contexto del producto y la feature**

Para comenzar, necesito entender el proyecto:
- ¿Qué tipo de producto estás construyendo y cuáles son sus usuarios principales?
- ¿Qué feature de IA estás considerando implementar? (generación de contenido, recomendaciones, búsqueda semántica, clasificación automática, extracción de datos, asistente conversacional)
- ¿Cuál es el problema concreto del usuario que quieres resolver con esta feature?
- ¿Qué stack tecnológico usas? (lenguaje, framework, infraestructura cloud, modelos de IA)
- ¿Tienes datos etiquetados disponibles o dependerás de modelos preentrenados y APIs?

**Framework de diseño de features de IA centradas en el usuario**

Fase 1 — Definición del problema y el valor:
Antes de escribir código, define claramente:
- El "job to be done" del usuario: ¿qué tarea quiere completar y qué le impide hacerlo bien hoy?
- La hipótesis de valor: ¿cómo exactamente esta feature de IA hará la tarea más fácil, rápida o de mayor calidad?
- Los criterios de éxito medibles: ¿cómo sabrás que la feature está funcionando? (tiempo ahorrado, tasa de adopción, satisfacción, reducción de errores)
- El "minimum lovable feature": ¿cuál es la versión más pequeña de esta feature que ya aportaría valor real?

Fase 2 — Diseño de la interacción de IA:
El diseño de la experiencia de usuario de una feature de IA tiene particularidades que el diseño tradicional no contempla:
- Gestión de expectativas: el usuario debe entender qué puede y qué no puede hacer la IA. Un diseño honesto sobre las limitaciones construye más confianza que uno que promete demasiado
- Control y corrección: el usuario siempre debe poder revisar, editar y rechazar el output de la IA fácilmente
- Transparencia del proceso: ¿debe el usuario ver cómo la IA llega a su resultado, o solo el resultado final?
- Manejo de fallos graceful: ¿qué pasa cuando la IA no sabe, se equivoca o devuelve un resultado de baja calidad?
- Feedback loop: cómo el usuario puede indicar que el resultado es bueno o malo para mejorar el modelo

Fase 3 — Arquitectura técnica de la feature de IA:
Define la arquitectura con estas decisiones clave:
- Modelo vs. API: ¿construyes tu propio modelo, haces fine-tuning de uno existente, o usas una API como OpenAI, Anthropic o Google?
- On-device vs. server-side: ¿el procesamiento de IA ocurre en el cliente o en el servidor?
- Latencia y UX: ¿cuánta latencia puede tolerar la experiencia de usuario? ¿Necesitas streaming de respuestas?
- Caché y optimización de costes: ¿qué respuestas de IA puedes cachear para reducir llamadas a la API y costes?
- Fallbacks y degradación gradual: ¿qué hace el sistema si la API de IA falla o responde con errores?

Fase 4 — Implementación y prompt engineering:
Para features basadas en LLMs, el prompt engineering es una disciplina en sí misma:
- Diseño del system prompt: el system prompt define el comportamiento base de la IA en tu producto
- Técnicas de prompting: chain of thought, few-shot examples, structured output con JSON schema
- Gestión del contexto: cómo incluir el contexto relevante del usuario en el prompt sin superar el límite de tokens
- Evaluación automatizada de outputs: tests que validan que los outputs de la IA cumplen los criterios de calidad

Fase 5 — Lanzamiento, monitoreo e iteración:
- Feature flags para un despliegue controlado y A/B testing
- Logging de los inputs, outputs y feedback de usuario para el análisis posterior
- Métricas de rendimiento de la IA: latencia, tasa de errores, calidad de outputs (métricas automáticas y humanas)
- Proceso de iteración: cómo usar los datos recopilados para mejorar los prompts, el modelo o la experiencia de usuario

**Antipatrones de features de IA a evitar**

Añadir IA porque está de moda sin un problema concreto que resolver. Mostrar el output de la IA directamente sin revisión o filtrado. Ignorar los fallos de la IA en el diseño de la experiencia. No medir el impacto real en el usuario tras el lanzamiento.

**Entregables**

Genera para mi proyecto:
1. Un canvas de diseño de feature de IA con todos los elementos: problema, hipótesis de valor, arquitectura técnica, criterios de éxito y plan de lanzamiento
2. Un template de system prompt base para la feature que estoy diseñando, con instrucciones de personalización
3. Una lista de los diez casos extremos (edge cases) que debo considerar en el diseño de esta feature
4. Un plan de evaluación de la feature de IA con las métricas técnicas y de experiencia de usuario
5. Un checklist de lanzamiento de feature de IA que cubra calidad, seguridad, rendimiento y experiencia de usuario

Las mejores features de IA no se notan como IA: se notan como el producto que finalmente entiende lo que el usuario necesita.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar e implementar features de IA centradas en el usuario con una arquitectura robusta y una experiencia de uso excelente',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Prototipado acelerado de UX con IA: del wireframe al test en horas',
                'description'      => 'Usa IA para comprimir el ciclo de prototipado de UX: genera wireframes, flujos de usuario y prototipos interactivos en horas para validar ideas con usuarios reales más rápido.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario senior con dominio en metodologías de prototipado rápido y el uso de herramientas de IA para acelerar el ciclo de diseño. Tu misión es ayudarme a comprimir radicalmente el tiempo desde la idea hasta el prototipo testeable con usuarios reales, usando IA como copiloto de diseño en cada etapa.

**Contexto del proyecto de diseño**

Para orientar el proceso, cuéntame:
- ¿Qué estás diseñando? (nueva app, feature de producto existente, rediseño, onboarding, checkout, etc.)
- ¿Quiénes son los usuarios objetivo y qué problema concreto resuelve este diseño?
- ¿En qué plataforma? (web, móvil iOS, móvil Android, desktop, kiosco)
- ¿Cuál es el plazo para tener un prototipo listo para tests con usuarios?
- ¿Qué herramientas de diseño usas? (Figma, Sketch, Adobe XD, Framer, etc.)

**Flujo de prototipado acelerado con IA**

Etapa 1 — Generación del brief de diseño con IA (30 minutos):
Antes de abrir Figma, usa la IA para estructurar el brief de diseño:
- Describe el problema de usuario en lenguaje natural y pide a la IA que lo reformule como una "problem statement" formal con el formato "usuario + necesidad + insight"
- Genera con IA los flujos de usuario principales en formato textual antes de visualizarlos
- Pide a la IA que liste los estados de la interfaz que necesitas diseñar: vacío, con datos, error, cargando, éxito
- Usa la IA para identificar los componentes de UI que necesitarás y si existen en tu design system

Etapa 2 — Wireframing asistido por IA (1-2 horas):
La IA puede acelerar la fase de wireframing de varias formas:
- Herramientas como Uizard, Galileo AI o Visily que convierten prompts de texto en wireframes visuales en minutos
- Generación de múltiples variantes de layout a partir de una descripción textual para explorar el espacio de diseño más rápido
- Claude o ChatGPT para generar el copy de placeholder realista (no "Lorem ipsum") que simule mejor el contenido real
- IA para sugerir patrones de UI establecidos para cada tipo de interacción que necesitas diseñar

Etapa 3 — Diseño de flujos con IA (2-3 horas):
Para los flujos de usuario más críticos:
- Describe el flujo en lenguaje natural a la IA y pide que lo convierta en un diagrama de pasos con decisiones y variantes
- Usa la IA para identificar casos extremos en el flujo que podrías haber omitido
- Genera con IA los microcopy de cada estado del flujo: mensajes de error, confirmaciones, tooltips, empty states
- Pide a la IA que revise el flujo buscando puntos de fricción o pasos innecesarios

Etapa 4 — Prototipo interactivo con IA (2-3 horas):
Herramientas para pasar de wireframe a prototipo interactivo con apoyo de IA:
- Framer AI: genera componentes interactivos a partir de descripciones de texto
- Figma con plugins de IA: Magician, Automator o Builder para generar variantes y conectar flujos automáticamente
- Relume para generar layouts de web completos con IA a partir de un brief
- IA para generar el código del prototipo en React o HTML directamente desde el diseño

Etapa 5 — Preparación del test con usuarios con IA (1 hora):
La IA puede ayudarte a preparar el test de usuario:
- Genera el guión de la entrevista de test con la IA, adaptado a los objetivos de validación
- Crea con IA las tareas que pedirás a los usuarios que realicen en el prototipo
- Prepara con IA las preguntas de seguimiento para explorar el porqué detrás de los comportamientos observados
- Genera una plantilla de síntesis de hallazgos para organizar el feedback de los tests

**Herramientas de IA para el prototipado UX**

Wireframing: Uizard, Galileo AI, Visily, Penpot AI
Diseño de componentes: Figma con Magician, Framer AI
Generación de copy: Claude, ChatGPT, Copy.ai
Generación de imágenes de placeholder: Midjourney, DALL·E, Adobe Firefly
Prototipado con código: Cursor, v0 by Vercel para prototipos en React

**Entregables**

Genera para mi proyecto de diseño:
1. Una estructura de brief de diseño con los prompts de IA para generar cada sección
2. Una lista de los prompts más efectivos para generar wireframes de los tipos de pantalla más comunes
3. Un template de microcopy para los estados de UI más frecuentes: vacío, error, cargando, éxito, confirmación
4. Un guión de test de usuario de 45 minutos con las tareas y preguntas principales
5. Un checklist de revisión de prototipo antes del test con los aspectos críticos de UX que verificar

El prototipado acelerado con IA no elimina el pensamiento de diseño: elimina la fricción entre pensar y mostrar, permitiéndote validar más ideas con usuarios reales en el mismo tiempo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar IA para comprimir el ciclo de prototipado UX y pasar de idea a prototipo testeable en horas en lugar de días',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Diseño de experiencias de venta guiadas por IA para comerciales B2B',
                'description'      => 'Crea experiencias de venta personalizadas y guiadas por IA que aumenten la tasa de conversión en ventas B2B complejas, desde la demo hasta el cierre.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas B2B consultivas y diseño de experiencias de compra con IA. Tu misión es ayudarme a diseñar experiencias de venta guiadas por IA que hagan que cada interacción con un prospecto sea más relevante, personalizada y orientada al cierre.

**Contexto del proceso de venta**

Para personalizar el diseño, cuéntame:
- ¿Qué tipo de producto o servicio vendes y cuál es el ticket medio?
- ¿Cuánto dura el ciclo de venta típico y cuántos decisores intervienen?
- ¿Cuáles son las principales objeciones que enfrentas en el proceso?
- ¿Qué herramientas de CRM y sales enablement usas actualmente?
- ¿En qué parte del proceso de venta pierdes más oportunidades?

**Framework de experiencia de venta guiada por IA**

Momento 1 — Investigación y preparación con IA (antes de cada contacto):
La IA puede transformar cómo te preparas para cada interacción con un prospecto:
- Investigación de cuenta con IA: análisis automático de la web, LinkedIn, noticias y redes sociales de la empresa prospecto para identificar contexto relevante, señales de compra y pain points potenciales
- Perfil del decisor: la IA construye un perfil del contacto basándose en su LinkedIn, artículos publicados y actividad pública para personalizar el enfoque
- Preparación de la conversación: la IA genera un brief de preparación para cada reunión con los puntos clave a abordar, las preguntas más relevantes y las posibles objeciones a anticipar

Momento 2 — Discovery con IA como copiloto:
Durante las reuniones de discovery:
- Herramientas de transcripción y análisis en tiempo real (Gong, Chorus, Otter AI) que identifican señales de interés y dolor del prospecto mientras hablas
- La IA sugiere en tiempo real qué preguntas de seguimiento hacer según lo que el prospecto acaba de decir
- Análisis post-reunión: la IA genera un resumen de la reunión, los pain points identificados, los compromisos adquiridos y los próximos pasos recomendados

Momento 3 — Demo personalizada con IA:
Una de las mayores oportunidades de diferenciación con IA:
- Generación automática de demos personalizadas: la IA adapta el guión de la demo al sector, rol y pain points específicos del prospecto, en lugar de usar una demo genérica
- Creación de materiales de demo personalizados: slides, casos de uso y ejemplos generados por IA específicamente para el sector y la empresa del prospecto
- Simulación de escenarios de ROI: la IA genera proyecciones de retorno de inversión personalizadas con los datos del prospecto

Momento 4 — Gestión de objeciones con IA:
- Base de conocimiento de objeciones: la IA mantiene y consulta una base de datos de las objeciones más frecuentes con las respuestas más efectivas
- Generación de respuestas a objeciones en tiempo real durante la reunión
- Creación de contenido de seguimiento para resolver objeciones específicas: casos de estudio, comparativas, referencias

Momento 5 — Propuesta y negociación con IA:
- Generación de propuestas económicas personalizadas con IA, adaptadas al tamaño, sector y necesidades específicas del prospecto
- Análisis de probabilidad de cierre: la IA evalúa la oportunidad según múltiples señales y predice la probabilidad de ganarla
- Estrategia de negociación: la IA sugiere la secuencia óptima de concesiones y alternativas basándose en el historial de éxito en cierres similares

Momento 6 — Seguimiento inteligente con IA:
- Secuencias de seguimiento personalizadas: la IA genera mensajes de seguimiento adaptados al punto específico del proceso y al comportamiento reciente del prospecto
- Alertas de engagement: la IA avisa cuando un prospecto ha vuelto a visitar el site, ha abierto la propuesta o ha compartido contenido, indicando el momento óptimo para contactar

**Métricas de impacto**

Mide el impacto de la experiencia de venta guiada por IA:
- Tasa de conversión de discovery a demo
- Tasa de conversión de demo a propuesta
- Tasa de cierre y velocidad del ciclo de venta
- Deal size promedio
- Win rate contra competidores identificados

**Entregables**

Genera para mi equipo de ventas:
1. Un playbook de investigación pre-reunión con los prompts de IA para cada tipo de cuenta y contacto
2. Un template de brief de demo personalizada con los elementos que la IA debe adaptar para cada prospecto
3. Una base de datos de las diez objeciones más frecuentes con las respuestas más efectivas
4. Un template de propuesta económica generada con IA, adaptable por sector y tamaño de empresa
5. Una secuencia de seguimiento post-demo de seis mensajes, con variantes para diferentes escenarios

Las mejores experiencias de venta B2B con IA no se sienten como automatización: se sienten como el comercial que mejor te conoce.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar experiencias de venta B2B guiadas por IA que personalicen cada interacción y aumenten la tasa de cierre',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Co-creación de roadmaps de producto con IA como copiloto estratégico',
                'description'      => 'Usa la IA como copiloto estratégico para construir, priorizar y comunicar tu roadmap de producto, integrando datos de usuarios, mercado y negocio de forma más rápida.',
                'prompt_content'   => <<<'EOT'
Eres un product manager estratégico con experiencia en el uso de IA para acelerar y mejorar la calidad del proceso de construcción del roadmap de producto. Tu misión es ayudarme a usar la IA como copiloto en cada etapa del proceso de roadmapping: desde la recopilación de inputs hasta la comunicación del roadmap a los stakeholders.

**Contexto del producto y el equipo**

Para comenzar, necesito entender el contexto:
- ¿Qué tipo de producto gestionas y en qué etapa se encuentra? (0 a 1, crecimiento, madurez, revamp)
- ¿Cuántos stakeholders principales tiene el roadmap? (CEO, ingeniería, ventas, marketing, clientes)
- ¿Qué herramientas de gestión de producto usas actualmente? (Jira, Linear, Notion, Productboard, etc.)
- ¿Cuál es el principal desafío en tu proceso de roadmapping? (demasiados inputs, priorización difícil, alineación de stakeholders, comunicación)
- ¿Cuál es el horizonte temporal de tu roadmap? (trimestral, semestral, anual)

**Proceso de co-creación de roadmap con IA**

Fase 1 — Recopilación e integración de inputs con IA:
El mayor desafío del roadmap es sintetizar inputs de múltiples fuentes. La IA puede ayudarte a:
- Análisis de feedback de usuarios: la IA procesa y clasifica cientos de tickets de soporte, reseñas de app stores, respuestas de NPS y entrevistas de usuario para identificar los temas más frecuentes y urgentes
- Análisis competitivo automatizado: la IA monitorea los changelogs, blogs y redes sociales de los competidores para identificar tendencias y gaps de producto
- Síntesis de requests de ventas: la IA analiza las notas del CRM y los tickets de feature requests de clientes para cuantificar la demanda y el impacto en ingresos
- Consolidación de insights: la IA genera un resumen ejecutivo de todos los inputs recibidos, agrupados por tema y priorizados por frecuencia e impacto potencial

Fase 2 — Priorización con IA:
La priorización es donde la IA puede aportar más rigor y menos sesgo:
- Scoring automatizado de iniciativas: aplica frameworks de priorización (RICE, ICE, MoSCoW, Impact vs. Effort) con la ayuda de la IA para puntuar cada iniciativa de forma consistente
- Análisis de dependencias: la IA identifica las dependencias técnicas y de negocio entre iniciativas para ordenarlas correctamente
- Simulación de escenarios: ¿qué pasa si priorizamos A antes que B? La IA puede modelar diferentes secuencias de roadmap y proyectar su impacto en las métricas clave
- Detección de sesgos en la priorización: la IA puede señalar cuando el roadmap está sesgado hacia las solicitudes de un segmento de clientes o de un stakeholder interno

Fase 3 — Narrativa y comunicación del roadmap con IA:
Un buen roadmap no es solo una lista de features: es una historia estratégica:
- Generación de la narrativa del roadmap: la IA ayuda a articular el "por qué" detrás de las decisiones de priorización en un lenguaje que resuene con cada audiencia
- Adaptación del roadmap por audiencia: la IA genera versiones del roadmap adaptadas al CEO (impacto en negocio), al equipo de ingeniería (detalles técnicos), a ventas (funcionalidades que ayudan a cerrar deals) y a clientes (value delivery timeline)
- FAQ de roadmap: la IA anticipa las preguntas más frecuentes de cada stakeholder y genera las respuestas

Fase 4 — Mantenimiento y actualización del roadmap con IA:
El roadmap vive y cambia constantemente:
- La IA monitorea si han cambiado las condiciones que justificaban las prioridades actuales
- Alertas de desalineación: cuando un nuevo input contradice fuertemente una decisión del roadmap, la IA lo señala
- Generación automática del roadmap update mensual con los cambios realizados y su justificación

**Herramientas de IA para el product manager**

Síntesis de feedback: Dovetail, Grain, Lyssna con IA para analizar research de usuario.
Gestión de features: Productboard, Canny o Gleap con IA para gestionar y priorizar feature requests.
Generación de contenido del roadmap: Claude, ChatGPT con prompts específicos de product management.
Análisis competitivo: Crayon, Klue o Kompyte para monitorear competidores con IA.

**Entregables**

Genera para mi proceso de roadmapping:
1. Una plantilla de brief de iniciativa de roadmap con todos los campos que la IA puede ayudar a rellenar
2. Un modelo de scoring RICE adaptado a mi producto con los criterios y pesos recomendados
3. Tres versiones de la narrativa del roadmap adaptadas a CEO, equipo de ingeniería y clientes
4. Un prompt de IA para generar el roadmap update mensual a partir de los cambios realizados
5. Un proceso de revisión trimestral del roadmap con los pasos y los inputs que debe analizar la IA

El roadmap co-creado con IA es más riguroso, más rápido de construir y más fácil de comunicar. El product manager sigue siendo el que toma las decisiones: la IA le da más contexto y menos trabajo manual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Usar la IA como copiloto para construir, priorizar y comunicar el roadmap de producto de forma más rápida y rigurosa',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseño de experiencia del empleado con IA: mapas de journey y momentos que importan',
                'description'      => 'Aplica metodologías de diseño de experiencias y herramientas de IA para mapear y mejorar el employee journey, identificando y rediseñando los momentos críticos del ciclo de vida.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de experiencia del empleado (Employee Experience Design) y en el uso de IA para mapear, analizar y mejorar los momentos críticos del ciclo de vida del empleado. Tu misión es ayudarme a aplicar metodologías de diseño de experiencias, potenciadas por IA, para crear un journey del empleado que sea más satisfactorio, coherente y alineado con la cultura de la organización.

**Contexto de la organización**

Para comenzar el diseño, cuéntame:
- ¿Cuántos empleados tiene la organización y qué perfiles predominan?
- ¿Cuáles son los principales desafíos de experiencia del empleado en este momento? (onboarding, engagement, desarrollo, comunicación interna, trabajo híbrido)
- ¿Qué datos de experiencia del empleado tienes disponibles? (encuestas de clima, eNPS, entrevistas de salida, datos de rendimiento)
- ¿Tienes ya algún mapeo del employee journey o es la primera vez que lo abordas de forma estructurada?
- ¿Cuál es el momento del ciclo de vida que genera más fricción o insatisfacción?

**Metodología de diseño del employee journey con IA**

Etapa 1 — Investigación y síntesis de la experiencia actual:
Antes de diseñar, necesitas entender la experiencia real de los empleados. La IA puede ayudarte a:
- Analizar el feedback cualitativo de encuestas de clima, entrevistas de salida y reviews en Glassdoor para identificar los pain points más frecuentes
- Sintetizar entrevistas de empleados: si realizas entrevistas de research interno, la IA puede transcribirlas, analizarlas y agrupar los hallazgos por temas
- Cruzar datos cuantitativos y cualitativos: la IA identifica correlaciones entre métricas de engagement y momentos específicos del journey

Etapa 2 — Construcción del mapa del employee journey:
El employee journey map es la herramienta central del EX design. Incluye:
- Las etapas del ciclo de vida: atracción, selección, onboarding, desarrollo, crecimiento, retención, offboarding
- Los "momentos que importan" en cada etapa: los touchpoints con mayor impacto emocional y en el engagement
- Las emociones del empleado en cada momento: lo que piensa, siente y hace
- Los pain points y las oportunidades de mejora

La IA puede ayudarte a construir el journey map de varias formas:
- Generación de una versión inicial del journey basada en los datos de research
- Identificación de los momentos de mayor impacto usando análisis de sentimiento del feedback de empleados
- Comparación del journey actual versus el journey ideal que los empleados describen

Etapa 3 — Diseño de los momentos críticos:
Una vez identificados los momentos que más importan, diseña la experiencia ideal para cada uno:

Momentos típicamente críticos en el employee journey:
- El primer día: la primera impresión de la cultura real de la empresa
- El final del periodo de prueba: la conversación de feedback y confirmación
- La primera promoción o cambio de rol
- El regreso de una baja larga (maternidad, paternidad, enfermedad)
- El primer conflicto con el manager
- La conversación de salida o cambio de empresa

Para cada momento crítico, define:
- Qué debe sentir el empleado antes, durante y después de este momento
- Qué acciones concretas de la empresa crean esa experiencia
- Cómo la IA puede personalizar o mejorar este momento específico

Etapa 4 — Prototipado y test de la nueva experiencia:
Antes de implementar cambios a gran escala, testea con un grupo piloto:
- La IA puede generar materiales para el piloto: comunicaciones, guías para managers, templates de conversación
- Recoge feedback del piloto con encuestas rápidas generadas con IA
- La IA analiza el feedback y sugiere ajustes antes del despliegue completo

Etapa 5 — Medición del impacto:
Define cómo medirás si la experiencia ha mejorado:
- Métricas de experiencia: eNPS por etapa del journey, CSAT de momentos específicos
- Métricas de negocio: retención, tiempo de productividad plena, tasa de absentismo

**Entregables**

Genera para mi proyecto de EX design:
1. Una plantilla de employee journey map con las etapas, touchpoints y dimensiones a analizar
2. Un protocolo de entrevista de investigación de experiencia del empleado de diez preguntas clave
3. Un modelo de diseño de "momento crítico": qué elementos definir para cada momento que importa
4. Un framework de priorización de mejoras de EX basado en impacto en engagement y coste de implementación
5. Un plan de piloto de 60 días para testear el rediseño de los tres momentos más críticos

El diseño de la experiencia del empleado con IA no es tecnificar RRHH: es escuchar mejor, diseñar con más empatía y ejecutar con más consistencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mapear y rediseñar el employee journey usando metodologías de EX design e IA para mejorar los momentos críticos del ciclo de vida',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Diseño de productos financieros digitales asistido por IA',
                'description'      => 'Aplica IA en el diseño de nuevos productos financieros digitales: desde el análisis de necesidades del cliente hasta el modelado de la estructura del producto y la estrategia de lanzamiento.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de productos financieros digitales con dominio en el uso de IA para acelerar la innovación en el sector financiero. Tu misión es ayudarme a diseñar un nuevo producto financiero digital usando la IA como copiloto en cada etapa del proceso: desde la identificación de la necesidad hasta la definición de la estructura del producto y la estrategia de go-to-market.

**Contexto de mi organización y el producto**

Para comenzar el diseño, necesito entender:
- ¿Qué tipo de entidad financiera eres? (banco, fintech, insurtech, neobroker, plataforma de pagos)
- ¿A qué segmento de clientes va dirigido el nuevo producto? (retail, PYME, wealth management, millennials, etc.)
- ¿Qué necesidad o problema financiero del cliente quieres resolver?
- ¿Cuál es el marco regulatorio en el que operas? (BCE, CNMV, Banco de España, FCA, etc.)
- ¿Tienes datos de comportamiento financiero de tus clientes actuales que puedas usar como input?

**Proceso de diseño de producto financiero con IA**

Fase 1 — Investigación de la necesidad con IA:
Antes de diseñar el producto, la IA puede ayudarte a entender la necesidad del cliente en profundidad:
- Análisis de datos de comportamiento financiero de clientes existentes: la IA identifica patrones de uso, necesidades insatisfechas y oportunidades de producto en los datos de transacciones, consultas y comportamiento digital
- Análisis del mercado y la competencia: la IA procesa información sobre productos similares en el mercado, sus características, precios y valoraciones de usuarios para identificar el espacio de oportunidad
- Síntesis de research cualitativo: la IA analiza entrevistas con clientes y grupos de discusión para extraer insights de forma más rápida y estructurada

Fase 2 — Conceptualización y estructura del producto:
Una vez validada la necesidad, diseña la estructura del producto:

Definición del producto:
- ¿Cuál es la promesa de valor core para el cliente? (simplificación, rentabilidad, control, protección)
- ¿Cuál es el mecanismo de generación de valor? (diferencial de tipo, comisión por transacción, suscripción, prime brokerage)
- ¿Cuáles son las features mínimas del MVP versus las features diferenciadoras para fases posteriores?

Modelado financiero del producto con IA:
- La IA ayuda a modelar diferentes escenarios de pricing y márgenes
- Análisis de elasticidad: ¿cómo responde la demanda a diferentes puntos de precio?
- Proyección de unit economics: coste de adquisición, valor de vida del cliente, tiempo hasta la rentabilidad
- Modelado de riesgo: la IA puede ayudar a estimar el riesgo crediticio o de mercado del nuevo producto bajo diferentes escenarios

Fase 3 — Diseño de la experiencia del cliente:
Los mejores productos financieros digitales son aquellos cuya experiencia hace que el cliente olvide que está haciendo algo financiero:
- Customer journey de onboarding: el flujo de alta del producto debe ser tan simple como abrir una cuenta de redes sociales, con la IA identificando cada punto de fricción que reduzca la conversión
- Personalización de la experiencia: la IA adapta el producto a las características y comportamiento de cada cliente (límites dinámicos, recomendaciones, alertas inteligentes)
- Explicación del producto: la IA genera contenido educativo personalizado que ayuda al cliente a entender y usar mejor el producto

Fase 4 — Compliance y gestión del riesgo regulatorio:
En productos financieros, el compliance no es opcional:
- La IA analiza el marco regulatorio aplicable y genera una checklist de requisitos de compliance
- Identificación de riesgos regulatorios del diseño del producto: la IA señala los aspectos del diseño que podrían generar problemas con el regulador
- Generación de la documentación legal necesaria: términos y condiciones, fichas de producto, documentación MiFID o PRIIPS si aplica

Fase 5 — Go-to-market con IA:
- Segmentación del mercado con IA: identificar cuál es el segmento de early adopters con mayor probabilidad de adopción
- Generación de la narrativa de producto: la IA ayuda a articular la propuesta de valor en el lenguaje del cliente, no en el lenguaje financiero técnico
- Predicción de adopción: modelos de IA que estiman la curva de adopción según las características del producto y el segmento objetivo

**Entregables**

Genera para mi proyecto de producto financiero:
1. Una plantilla de Product Concept Canvas financiero con todos los elementos del diseño del producto
2. Un modelo financiero simplificado del producto con los unit economics clave y tres escenarios de adopción
3. Un customer journey de onboarding del producto con los puntos de fricción identificados y las mejoras propuestas
4. Una checklist de compliance regulatorio para el tipo de producto que estoy diseñando
5. Una narrativa de producto en lenguaje cliente para los tres canales principales de comunicación

Los mejores productos financieros digitales no se diseñan en salas de reuniones: se diseñan desde los datos y las necesidades reales de los clientes, con la IA como copiloto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar nuevos productos financieros digitales usando IA en la investigación, conceptualización, modelado y go-to-market',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Diseño de flujos de contratos digitales inteligentes con IA',
                'description'      => 'Diseña flujos de contratación digital donde la IA acelera la redacción, revisión, negociación y gestión del ciclo de vida de los contratos.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en legaltech y diseño de flujos de contratos digitales inteligentes. Tu misión es ayudarme a diseñar un sistema de gestión de contratos donde la IA acelere y mejore cada etapa del ciclo de vida contractual, desde la redacción hasta el seguimiento de obligaciones y renovaciones.

**Contexto de mi gestión de contratos actual**

Para comenzar el diseño, necesito entender tu situación:
- ¿Qué tipo de contratos gestiona tu organización con más frecuencia? (NDA, contratos de servicios, SLA, contratos de proveedores, contratos laborales, licencias)
- ¿Cuántos contratos nuevos se firman al mes y cuántos están activos en la cartera?
- ¿Cuál es el proceso actual? ¿Usas Word, un CLM (Contract Lifecycle Management) o algo ad hoc?
- ¿Cuáles son los principales cuellos de botella en el proceso contractual? (tiempo de redacción, revisiones internas, negociación, firma, seguimiento)
- ¿Tienes un equipo legal interno o dependes de asesoramiento externo?

**Flujo de contratos digitales inteligentes con IA**

Etapa 1 — Redacción asistida por IA:
La redacción de contratos es la tarea donde la IA ya genera mayor ahorro de tiempo:
- Generación de contratos desde plantillas: la IA adapta una plantilla base al contexto específico del contrato, rellenando las variables relevantes (partes, objeto, plazo, precio, condiciones especiales) a partir de un brief en lenguaje natural
- Redacción desde cero: para contratos más complejos o atípicos, la IA genera un primer borrador que el abogado revisa y refina, acelerando el proceso de dos a ocho horas a treinta a sesenta minutos
- Coherencia terminológica: la IA verifica que los términos definidos se usen de forma consistente a lo largo del contrato
- Adaptación jurisdiccional: la IA adapta el contrato a la legislación aplicable según la jurisdicción de las partes

Etapa 2 — Revisión y análisis de riesgos con IA:
La revisión de contratos recibidos de terceros es donde más tiempo se pierde en los departamentos legales:
- Extracción de información clave: la IA identifica y extrae automáticamente las cláusulas más importantes (limitación de responsabilidad, indemnizaciones, rescisión, propiedad intelectual, confidencialidad) y las presenta en un resumen ejecutivo
- Análisis de riesgos: la IA compara el contrato recibido contra la posición estándar de la empresa y señala las desviaciones y su nivel de riesgo (alto, medio, bajo)
- Detección de cláusulas problemáticas: la IA identifica cláusulas potencialmente problemáticas o poco habituales que el abogado debe revisar con especial atención
- Benchmarking contractual: la IA compara las condiciones del contrato contra benchmarks del sector

Etapa 3 — Negociación asistida por IA:
- Generación de redlines: la IA genera las modificaciones propuestas de forma automática en el formato de redlines de Word
- Sugerencias de posición negociadora: para cada punto de conflicto, la IA sugiere la posición de partida, el punto de compromiso aceptable y la línea roja
- Análisis de impacto de las modificaciones propuestas por la contraparte: la IA evalúa el impacto legal y de negocio de las modificaciones que solicita la otra parte

Etapa 4 — Firma y ejecución digital:
- Integración con plataformas de firma electrónica (DocuSign, HelloSign, Signaturit) con flujos de aprobación y firma automatizados
- Verificación de cumplimiento antes de la firma: la IA confirma que el contrato final incorpora todas las condiciones acordadas

Etapa 5 — Gestión del ciclo de vida y obligaciones:
- Extracción automática de obligaciones: la IA identifica todas las obligaciones contractuales con sus fechas y responsables
- Alertas de vencimientos y renovaciones: sistema de alertas automáticas para fechas críticas (vencimiento, renovación automática, opción de terminación)
- Seguimiento de SLA y KPIs contractuales: la IA monitorea el cumplimiento de las métricas acordadas en los contratos de servicio

**Herramientas de IA para la gestión de contratos**

Plataformas CLM con IA: Ironclad, Conga, Icertis, Juro, DocuSign CLM.
IA para revisión de contratos: Kira Systems, Luminance, Legartis, Spellbook.
Generación de contratos: Lexion, ContractPodAi, o Claude/GPT-4 con prompts especializados.

**Entregables**

Genera para mi departamento legal:
1. Un mapa del flujo de contratos ideal con las etapas, los actores y las herramientas de IA en cada paso
2. Un prompt de IA para generar un primer borrador de los tres tipos de contrato más frecuentes en tu organización
3. Una checklist de revisión de contratos de terceros con los puntos de riesgo más frecuentes
4. Una plantilla de extracción de obligaciones contractuales para el seguimiento post-firma
5. Un análisis coste-beneficio de implementar un CLM con IA versus el proceso actual

Los flujos de contratos digitales con IA no reemplazan al abogado: liberan al abogado de las tareas mecánicas para que se enfoque en el análisis estratégico y la negociación donde realmente aporta valor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar flujos de contratos digitales inteligentes donde la IA acelera la redacción, revisión y gestión del ciclo de vida contractual',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Diseño de experiencias de soporte omnicanal con IA conversacional',
                'description'      => 'Diseña un sistema de soporte al cliente omnicanal donde la IA conversacional ofrece experiencias consistentes y personalizadas en todos los canales de contacto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de experiencias de cliente y arquitectura de sistemas de soporte omnicanal con IA conversacional. Tu misión es ayudarme a diseñar un sistema de atención al cliente donde la IA conversacional ofrezca una experiencia consistente, personalizada y de alta calidad en todos los canales de contacto, desde el chat web hasta el teléfono.

**Contexto de mi sistema de soporte actual**

Para comenzar el diseño, cuéntame:
- ¿Qué canales de soporte tienes actualmente? (email, chat web, teléfono, WhatsApp, redes sociales, app móvil)
- ¿Cuántas consultas de soporte recibes por semana y cómo se distribuyen por canal?
- ¿Cuáles son las diez consultas más frecuentes en cada canal?
- ¿Qué porcentaje de consultas se resuelven en el primer contacto actualmente?
- ¿Tienes ya algún bot o automatización en algún canal?

**Arquitectura del soporte omnicanal con IA conversacional**

Pilar 1 — Capa de IA conversacional unificada:
El error más común en la implementación de soporte con IA es crear bots independientes para cada canal sin coherencia. El diseño correcto es:
- Una base de conocimiento unificada que alimenta la IA en todos los canales
- Una única identidad y personalidad de marca para el asistente de IA, independientemente del canal
- Historial de interacciones compartido entre canales: si el cliente empezó en el chat y pasa al teléfono, el agente humano y la IA tienen todo el contexto
- Consistencia en las respuestas: la misma pregunta recibe la misma respuesta de calidad en todos los canales

Pilar 2 — Diseño conversacional por canal:
Aunque la base de conocimiento y la personalidad son unificadas, la forma de la conversación se adapta al canal:
- Chat web: conversación textual con soporte de elementos visuales (imágenes, botones, carruseles de opciones)
- WhatsApp Business: conversación asíncrona con mensajes cortos y claros, sin menús complejos
- Teléfono con IA (voice AI): conversación por voz con latencia mínima, reconocimiento de intención sin comandos exactos y detección de emociones
- Email: respuestas más largas y estructuradas, con referencias a documentación y siguientes pasos claros
- Redes sociales: respuestas públicas breves que resuelven o derivan al canal privado, gestionando la reputación además del soporte

Pilar 3 — Gestión inteligente del escalado a humanos:
El escalado humano no debe ser un fallo del sistema: debe ser una decisión inteligente:
- Detección de intención de escalada: la IA reconoce cuándo el usuario quiere hablar con un humano y lo gestiona sin fricción
- Escalada por tipo de consulta: define qué tipos de consultas siempre deben ir a un humano independientemente de si la IA puede resolverlas
- Escalada por detección emocional: la IA detecta frustración, angustia o urgencia y escala de forma proactiva sin que el cliente tenga que pedirlo
- Escalada inteligente con contexto completo: el agente humano recibe el historial completo de la conversación y una síntesis del problema del cliente antes de tomar la llamada o el chat

Pilar 4 — Personalización de la experiencia en cada canal:
La IA puede personalizar la experiencia de soporte usando el historial del cliente:
- Saludar al cliente por su nombre y reconocer sus interacciones recientes
- Anticipar el motivo de contacto basándose en el comportamiento reciente (acaba de hacer un pedido, tiene una renovación próxima, ha visitado la página de cancelación)
- Adaptar el nivel de detalle de las respuestas según el perfil del cliente (novato vs. usuario avanzado, cliente premium vs. estándar)

Pilar 5 — Métricas y mejora continua:
- First Contact Resolution Rate (FCR): porcentaje de consultas resueltas por la IA sin intervención humana
- CSAT del bot: satisfacción específica con la experiencia de IA
- Deflection rate: porcentaje de consultas que la IA resuelve frente al total
- Tasa de escalada innecesaria: consultas que escalan a humanos pero que la IA podría haber resuelto
- Análisis de gaps de conocimiento: consultas que la IA no pudo responder y que deben incorporarse a la base de conocimiento

**Entregables**

Genera para mi sistema de soporte:
1. Un mapa de la arquitectura omnicanal con la IA conversacional como capa central y los canales conectados
2. Un diseño de flujo conversacional para las cinco consultas más frecuentes en mi canal principal
3. Un protocolo de escalada inteligente con los criterios de transferencia a humanos para cada tipo de situación
4. Una guía de diseño de personalidad y tono del asistente de IA coherente con la marca
5. Un plan de implementación por fases: qué canal automatizar primero y por qué, con los criterios de éxito para avanzar a la siguiente fase

El soporte omnicanal con IA bien diseñado hace que el cliente no sepa ni le importe si está hablando con una IA o con un humano: solo sabe que su problema se resuelve rápido y bien.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un sistema de soporte omnicanal con IA conversacional que ofrezca experiencias consistentes y personalizadas en todos los canales',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Diseño de portfolio y propuestas de proyecto con IA para freelancers creativos',
                'description'      => 'Usa la IA para diseñar un portfolio digital de alto impacto y crear propuestas de proyecto personalizadas que aumenten tu tasa de cierre como freelancer creativo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing personal, diseño de portfolios digitales y estrategia de negocio para freelancers creativos. Tu misión es ayudarme a usar la IA para construir un portfolio digital que atraiga a los clientes correctos y crear propuestas de proyecto personalizadas que aumenten significativamente mi tasa de cierre.

**Contexto de mi práctica freelance**

Para personalizar la estrategia, cuéntame:
- ¿Cuál es tu especialidad como freelancer creativo? (diseño gráfico, UX, copywriting, fotografía, motion design, desarrollo web, ilustración, etc.)
- ¿Cuál es tu cliente objetivo ideal? (startups, agencias, marcas de consumo, empresas B2B, etc.)
- ¿Cuál es tu rango de precios habitual por proyecto?
- ¿Tienes ya un portfolio online? ¿Qué herramienta usas? (Behance, Dribbble, web propia, Notion, etc.)
- ¿Cuál es tu mayor reto: conseguir más leads, convertir mejor los leads que recibes, o justificar precios más altos?

**Diseño del portfolio digital con IA**

Módulo 1 — Estrategia de posicionamiento del portfolio:
Antes de diseñar el portfolio, define tu posicionamiento con la ayuda de la IA:
- La IA analiza tu trabajo actual y el mercado para identificar en qué nicho puedes posicionarte de forma diferenciada
- Generación de tu propuesta de valor única: qué te hace diferente de los cientos de freelancers con habilidades similares
- Identificación de los tres a cinco tipos de proyecto en los que quieres especializarte y que deberían ser el centro de tu portfolio

Módulo 2 — Selección y presentación de proyectos con IA:
El portfolio no es una galería de todo tu trabajo: es una selección curada de tus mejores proyectos relevantes para tu cliente objetivo:
- La IA te ayuda a seleccionar qué proyectos incluir según su relevancia para el cliente objetivo y su impacto demostrable
- Estructura de cada caso de estudio con IA: contexto del cliente, el reto, tu proceso de trabajo, la solución y los resultados medibles
- Generación del copy de cada caso de estudio: la IA transforma tus notas sobre un proyecto en una narrativa estructurada y atractiva para el cliente
- Optimización de los títulos y descripciones de proyectos para que sean atractivos para tu cliente objetivo

Módulo 3 — Textos del portfolio con IA:
Los textos del portfolio son tan importantes como los proyectos visuales:
- About me: la IA te ayuda a escribir una presentación personal que sea auténtica, específica y que conecte con tu cliente objetivo
- Servicios: descripción de cada servicio en el lenguaje del cliente, enfocada en los resultados que generas, no en las tareas que realizas
- Testimoniales: la IA puede ayudarte a solicitar y estructurar testimoniales de clientes que sean específicos y convincentes
- FAQ: anticipar y responder las preguntas más frecuentes de clientes potenciales antes de la primera conversación

Módulo 4 — SEO y visibilidad del portfolio con IA:
Un portfolio invisible no genera negocio:
- La IA genera una estrategia de keywords para posicionar tu portfolio en búsquedas de tu especialidad
- Optimización de los títulos, meta descriptions y alt texts de las imágenes
- Estrategia de contenido para LinkedIn o un blog que genere visibilidad y autoridad en tu nicho

**Diseño de propuestas de proyecto con IA**

Componente 1 — Brief de investigación del cliente:
Antes de escribir la propuesta, usa la IA para investigar al cliente:
- Análisis de la web, LinkedIn y noticias del cliente para entender su contexto, retos y cultura
- Identificación de los proyectos similares que el cliente ha realizado anteriormente
- Puntos de conexión entre los proyectos de tu portfolio y las necesidades del cliente

Componente 2 — Estructura de la propuesta ganadora:
La IA puede generar el borrador de la propuesta en cuestión de minutos si tienes los inputs correctos:
- Sección de entendimiento del proyecto: demuestra que entiendes el reto del cliente mejor que nadie
- Enfoque y metodología: cómo vas a abordar el proyecto de forma que genere confianza
- Casos de estudio relevantes: los dos o tres proyectos de tu portfolio más parecidos al que propones
- Entregables y plazos: qué recibirá el cliente, cuándo y en qué formato
- Inversión: el precio presentado de forma que enfatice el valor generado, no el tiempo invertido
- Garantías y próximos pasos: cómo reduces el riesgo percibido para el cliente

Componente 3 — Follow up inteligente con IA:
- La IA genera una secuencia de seguimiento personalizada para cada propuesta enviada
- Ajuste de la propuesta según el feedback del cliente: la IA sugiere cómo modificar la propuesta si el cliente tiene objeciones de precio, plazo o enfoque

**Entregables**

Genera para mi práctica freelance:
1. Una estructura de portfolio en cinco secciones con el contenido y copy recomendado para cada una
2. Una plantilla de caso de estudio de proyecto con las preguntas que la IA necesita para escribir cada sección
3. Una propuesta de proyecto tipo de dos páginas con la estructura y el copy base adaptables a cada cliente
4. Una secuencia de seguimiento de tres mensajes post-propuesta, con variantes para diferentes escenarios de respuesta del cliente
5. Un sistema de precios con la narrativa de valor recomendada para justificar tu tarifa ante clientes que negocian precio

Un portfolio y propuestas diseñadas con IA no reemplazan tu talento: hacen que ese talento sea visible para los clientes correctos en el momento justo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar IA para diseñar un portfolio digital de alto impacto y crear propuestas de proyecto personalizadas que aumenten la tasa de cierre',
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
