<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills475Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gestión de crisis de marca con IA',
                'description'       => 'Aprende a usar IA para detectar, analizar y responder a crisis de reputación en tiempo real, protegiendo la imagen de tu marca con comunicados precisos y estrategias de contención.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión de crisis de comunicación corporativa y relaciones públicas. Tu misión es ayudarme a diseñar un protocolo completo de respuesta ante una crisis de reputación de marca utilizando inteligencia artificial.

**Contexto de la crisis:**
[DESCRIBE LA SITUACIÓN: tipo de crisis, alcance geográfico, medios afectados, tiempo transcurrido desde el inicio]

**Fase 1 — Diagnóstico inmediato**

Analiza la situación siguiendo este esquema:

1. **Clasificación de la crisis**: Determina si es una crisis operacional, reputacional, legal, de producto o de comunicación. Asigna un nivel de severidad del 1 al 5 basándote en el potencial impacto económico, legal y reputacional.

2. **Mapa de stakeholders afectados**: Identifica y prioriza a los públicos impactados: clientes, inversores, empleados, medios, reguladores, comunidades locales y socios estratégicos. Para cada grupo, define el mensaje clave y el canal de comunicación preferente.

3. **Análisis de narrativa circulante**: Examina qué versión de los hechos está dominando en redes sociales, medios digitales y prensa tradicional. Identifica los tres principales puntos de fricción narrativa que necesitan corrección o matización.

**Fase 2 — Redacción de comunicados**

Genera los siguientes documentos:

- **Comunicado de prensa inicial** (máximo 300 palabras): Reconoce la situación sin admitir culpabilidad excesiva, muestra empatía genuina, anuncia las acciones inmediatas que se están tomando y proporciona un canal de contacto oficial.

- **Declaración del portavoz** (60-90 segundos de lectura): Adapta el comunicado a un formato oral directo, con frases cortas, lenguaje accesible y tono sereno pero firme.

- **Respuestas tipo para redes sociales**: Crea cinco variantes de respuesta para comentarios negativos en Twitter/X, Instagram y LinkedIn, diferenciando entre críticas legítimas, rumores infundados y ataques de mala fe.

- **Nota interna para empleados**: Redacta un mensaje interno que informe al equipo de la situación, evite el pánico, establezca quién puede hablar públicamente y refuerce el sentido de cohesión.

**Fase 3 — Monitorización y ajuste**

Define un sistema de seguimiento con estos elementos:

- Palabras clave y hashtags prioritarios a monitorizar cada dos horas durante las primeras 48 horas.
- Indicadores de resolución: ¿cómo sabremos que la crisis está cediendo? Define métricas concretas (ratio de menciones positivas/negativas, volumen de búsquedas, cobertura mediática).
- Plan de escalada: si la situación empeora, ¿cuál es el siguiente nivel de respuesta? ¿Cuándo se convoca rueda de prensa? ¿Cuándo interviene el CEO directamente?

**Fase 4 — Recuperación reputacional**

Una vez contenida la crisis, propón un plan de 30 días para reconstruir la confianza:

- Acciones de responsabilidad social o compensación visibles.
- Contenido editorial proactivo que reencuadre la narrativa.
- Alianzas con voces externas creíbles (expertos, influencers sectoriales, medios especializados).
- Revisión de procesos internos que se comunicará públicamente como mejora.

**Entregable final**: Resume todo en una hoja de ruta visual con fases, responsables, canales y tiempos. Usa un formato de tabla para los primeros siete días críticos.

Sé específico, práctico y adapta cada sección al sector y tamaño de la empresa que te indique. Evita generalidades: cada recomendación debe ser accionable en las próximas horas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear un protocolo de respuesta ante crisis reputacional con comunicados, mensajes por stakeholder y plan de recuperación de marca.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'API de monitorización de medios con IA para desarrolladores',
                'description'       => 'Diseña e implementa un sistema automatizado de monitorización de menciones de marca integrando APIs de noticias, análisis de sentimiento con IA y alertas en tiempo real.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de análisis de datos en tiempo real y procesamiento de lenguaje natural. Necesito que me guíes en el diseño e implementación de una plataforma de monitorización de medios y redes sociales basada en IA.

**Objetivo del sistema:**
Construir una solución que rastree menciones de una marca o conjunto de palabras clave en fuentes digitales, analice el sentimiento de cada mención y genere alertas y reportes automáticos.

**Requisitos técnicos del sistema:**

Especifica la arquitectura completa considerando:

1. **Fuentes de datos**: ¿Cómo integrar las APIs de Twitter/X (v2), Reddit, NewsAPI, Google News RSS y fuentes RSS personalizadas? Describe el diseño del conector genérico que permita añadir nuevas fuentes sin reescribir el núcleo del sistema.

2. **Pipeline de ingesta**: Diseña un pipeline asíncrono (considera Kafka, RabbitMQ o Redis Streams) que maneje picos de volumen sin perder menciones. Define la estructura del mensaje en la cola: campos obligatorios, esquema JSON, TTL y estrategia de dead-letter queue.

3. **Análisis de sentimiento con IA**: Compara tres aproximaciones técnicas:
   - Llamadas a la API de un LLM (Claude, GPT-4) con prompts clasificadores
   - Modelo local fine-tuned (BERT, RoBERTa en HuggingFace)
   - Servicio gestionado (AWS Comprehend, Google Natural Language API)
   Para cada una, indica latencia esperada, coste por millón de menciones, precisión típica y casos de uso óptimos.

4. **Almacenamiento y búsqueda**: ¿Qué base de datos elegirías para almacenar millones de menciones con búsqueda full-text, filtros temporales y agregaciones? Justifica la elección entre Elasticsearch, PostgreSQL con extensiones y ClickHouse para analytics.

5. **Sistema de alertas**: Implementa una lógica de alertas con umbrales dinámicos (no solo estáticos): si el volumen de menciones negativas supera N desviaciones estándar respecto a la media histórica, dispara la alerta. Describe el algoritmo y el código de ejemplo en Python.

**Código de ejemplo solicitado:**

Proporciona snippets concretos para:
- Función de clasificación de sentimiento usando la API de Claude con manejo de errores y reintentos exponenciales.
- Esquema de base de datos (SQL o mapping de Elasticsearch) para almacenar menciones con metadatos enriquecidos.
- Endpoint REST (FastAPI o Express) que sirva el dashboard de métricas agregadas: menciones por hora, score de sentimiento promedio, top fuentes, top términos asociados.

**Consideraciones de producción:**

Aborda estos aspectos críticos:
- Rate limiting de APIs externas: estrategia de throttling y caché de resultados.
- Coste de las llamadas a LLMs: ¿cómo minimizar el gasto procesando solo las menciones relevantes?
- Privacidad y GDPR: ¿qué datos de usuarios de redes sociales puedes almacenar legalmente?
- Escalabilidad horizontal: ¿cómo escalar de 10.000 a 10 millones de menciones diarias sin rediseñar?

**Entregable**: Diagrama de arquitectura en texto (ASCII o Mermaid), stack tecnológico recomendado con justificación, y roadmap de implementación en cuatro sprints de dos semanas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar la arquitectura de un sistema de media monitoring con análisis de sentimiento por IA, alertas automáticas y pipeline de datos escalable.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de identidad visual para portavoces virtuales de marca',
                'description'       => 'Crea la guía de diseño completa para un portavoz virtual o avatar de marca: personalidad visual, expresiones, paleta cromática y directrices de uso en comunicados y vídeos corporativos.',
                'prompt_content'    => <<<'EOT'
Eres un director de arte especializado en identidad de marca y diseño de personajes corporativos. Tu encargo es ayudarme a crear la guía de diseño completa para un portavoz virtual de una empresa, es decir, un avatar o personaje animado que represente a la marca en comunicados, vídeos, redes sociales y eventos digitales.

**Briefing de la marca:**
[DESCRIBE LA EMPRESA: sector, valores de marca, público objetivo, tono de comunicación actual, paleta de colores corporativa existente]

**Bloque 1 — Definición de la personalidad visual**

Desarrolla el perfil del personaje en estas dimensiones:

1. **Arquetipo de marca**: ¿Es el Sabio, el Héroe, el Cuidador, el Explorador? Justifica qué arquetipo encaja con los valores corporativos y cómo se traduce visualmente en rasgos físicos, expresiones y postura corporal.

2. **Rasgos físicos y estilo gráfico**: ¿Humano realista, ilustración plana, 3D cartoon, personaje abstracto? Define proporciones, rango de edad percibida, rasgos faciales distintivos y elementos de vestuario que reflejen la personalidad de marca. Incluye variantes para contextos formal e informal.

3. **Paleta cromática del personaje**: A partir de la identidad de marca existente, propón una paleta específica para el personaje: color de piel o textura base, color de vestuario primario y secundario, color de acento para detalles. Justifica cada elección en términos de psicología del color y coherencia con la marca.

4. **Expresiones emocionales**: Diseña un set de seis expresiones estándar que el personaje debe tener: neutral/profesional, alegría, empatía/escucha, sorpresa positiva, determinación y disculpa/reconocimiento. Para cada expresión, describe los cambios en cejas, ojos, boca y postura.

**Bloque 2 — Directrices de uso en comunicación corporativa**

Define las normas de aplicación en estos formatos:

- **Comunicados de crisis**: El personaje debe transmitir seriedad y empatía. ¿Qué expresión usar? ¿Cómo posicionarlo en pantalla? ¿Qué elementos gráficos eliminar del fondo para no distraer?
- **Anuncios de producto**: Expresión de entusiasmo moderado, uso de gestos señaladores, integración con mockups de producto.
- **Redes sociales**: Versión simplificada del personaje (avatar de icono, stickers animados, reacciones tipo emoji).
- **Vídeos corporativos largos**: Variaciones de vestuario según el contexto (presentación formal, sesión informativa, entorno de trabajo).

**Bloque 3 — Especificaciones técnicas para el equipo de producción**

Proporciona las especificaciones que necesitará el equipo técnico:

- Formatos de exportación: SVG vectorial, PNG transparente en múltiples resoluciones, archivo Lottie para animaciones web, rigging básico para After Effects.
- Guía de proporciones en grid (sistema de unidades basado en la altura del personaje como módulo base).
- Reglas de zona de exclusión: espacio mínimo alrededor del personaje en composiciones.
- Lista de usos prohibidos: modificaciones de color no autorizadas, deformaciones, uso con fondos que comprometan la legibilidad.

**Entregable final**: Un documento de brand guidelines del personaje estructurado como si fuera un PDF de identidad corporativa: portada, índice, secciones por bloque y ejemplos de uso correcto e incorrecto. Incluye el texto de cada sección listo para copiar al documento final.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Crear la guía de diseño completa para un portavoz virtual corporativo, con personalidad visual, expresiones, paleta y directrices de uso.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Redacción de propuestas comerciales con narrativa de relaciones públicas',
                'description'       => 'Usa IA para crear propuestas de venta que integren elementos de storytelling corporativo, gestión de reputación y posicionamiento de marca para cerrar contratos de mayor valor.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de ventas B2B con amplia experiencia en comunicación corporativa y relaciones públicas. Tu especialidad es crear propuestas comerciales que no solo venden un servicio o producto, sino que posicionan a la empresa vendedora como el socio estratégico más creíble y reputado del mercado.

**Datos de la propuesta:**
- Empresa que vende: [NOMBRE, SECTOR, AÑOS DE TRAYECTORIA]
- Producto o servicio ofrecido: [DESCRIPCIÓN BREVE]
- Cliente potencial: [EMPRESA, SECTOR, TAMAÑO, PERSONA DECISORA]
- Problema que resuelve: [PAIN POINT PRINCIPAL]
- Presupuesto estimado: [RANGO]
- Competidores en licitación: [SI LOS CONOCES]

**Estructura de la propuesta:**

**Sección 1 — Portada e introducción ejecutiva**

Redacta una introducción de una página que:
- Abra con una estadística o dato de mercado que valide el problema del cliente.
- Presente a la empresa vendedora en tres frases que destaquen reputación, credibilidad y diferenciación.
- Anticipe el resultado principal que el cliente obtendrá si elige esta solución.

**Sección 2 — Diagnóstico de la situación del cliente**

Demuestra que conoces profundamente al cliente antes de vender. Redacta un análisis de dos páginas que incluya:
- Retos específicos del sector del cliente en el contexto actual.
- Impacto reputacional o de negocio si el problema no se resuelve en los próximos 12 meses.
- Referencia a noticias, tendencias o regulaciones que hacen urgente la acción.

**Sección 3 — Solución propuesta con narrativa de valor**

Presenta la solución evitando el lenguaje técnico innecesario. Para cada componente del servicio:
- Explica qué hace en lenguaje del cliente, no del proveedor.
- Conecta ese componente con un beneficio de negocio medible.
- Añade una prueba social: cita de cliente, caso de estudio o dato de resultado.

**Sección 4 — Por qué nosotros: posicionamiento reputacional**

Esta sección es la que diferencia propuestas mediocres de propuestas ganadoras. Incluye:
- Historia breve de origen de la empresa que genere confianza (no aburrida; con conflicto y resolución).
- Tres reconocimientos, certificaciones, apariciones en medios o alianzas estratégicas que validen la credibilidad.
- Presentación del equipo que trabajará en el proyecto: fotos, trayectorias breves, logros específicos.

**Sección 5 — Inversión y condiciones**

Presenta el precio como una inversión con ROI estimado, no como un coste. Incluye:
- Tabla de opciones (Básico / Estándar / Premium) con clara diferenciación de valor.
- Cálculo simplificado del retorno esperado en 6 y 12 meses.
- Garantías o compromisos de resultados que reduzcan el riesgo percibido.
- Condiciones de pago flexibles y próximos pasos concretos.

**Sección 6 — Cierre emocional y llamada a la acción**

Termina con un párrafo que reencuadre la decisión como una oportunidad, no como un gasto. Incluye una frase de urgencia genuina (no artificial) y la acción exacta que el cliente debe realizar en las próximas 48 horas.

Adapta el tono, el vocabulario y los ejemplos al sector y la cultura corporativa del cliente que me indiques. La propuesta debe poder leerse en 10 minutos y provocar la sensación de que el proveedor ya entiende mejor el negocio del cliente que algunos de sus propios empleados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Redactar propuestas comerciales B2B con storytelling corporativo, posicionamiento reputacional y narrativa de valor que aumenten la tasa de cierre.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de comunicación de producto con enfoque de relaciones públicas',
                'description'       => 'Define la narrativa de lanzamiento de un producto integrando técnicas de PR: mensajes clave por audiencia, kit de prensa, plan de medios y gestión proactiva de la reputación del producto.',
                'prompt_content'    => <<<'EOT'
Eres un product marketer con especialización en relaciones públicas tecnológicas. Tu misión es ayudarme a construir la estrategia de comunicación completa para el lanzamiento de un nuevo producto o funcionalidad, integrando técnicas de PR para maximizar el impacto y construir reputación desde el día uno.

**Datos del producto:**
- Nombre del producto o funcionalidad: [NOMBRE]
- Descripción en una frase: [QUÉ HACE Y PARA QUIÉN]
- Fecha de lanzamiento prevista: [FECHA]
- Mercados objetivo: [GEOGRAFÍAS Y SEGMENTOS]
- Principales competidores: [LISTA]
- Diferenciador clave: [LO QUE NADIE MÁS TIENE]

**Módulo 1 — Arquitectura de mensajes**

Desarrolla la jerarquía de mensajes del lanzamiento:

1. **Mensaje maestro** (una frase de posicionamiento que capture la esencia del producto y su impacto en la vida o el negocio del usuario).
2. **Mensajes por audiencia** (tres versiones adaptadas para: usuarios finales, compradores/decisores corporativos y medios de comunicación).
3. **Proof points** (cinco datos, resultados de beta o testimonios que respalden cada mensaje principal).
4. **Ángulos de historia para PR** (tres narrativas diferentes que podrías ofrecer a distintos tipos de medios: tecnología, negocio, estilo de vida o sector vertical).

**Módulo 2 — Kit de prensa digital**

Genera el contenido completo del press kit:

- **Nota de prensa** (400 palabras): Titular ganador, primer párrafo con las 5W, cuerpo con beneficios y diferenciadores, cita del CEO o Product Lead, boilerplate de empresa, datos de contacto.
- **Ficha técnica del producto**: Especificaciones, precios, disponibilidad, plataformas compatibles, integraciones principales.
- **Preguntas y respuestas anticipadas** (10 Q&A): Incluye las preguntas incómodas sobre privacidad, seguridad, precio y comparación con competidores.
- **Lista de assets gráficos recomendados**: Qué capturas de pantalla, vídeos cortos y gráficos deben prepararse para el kit.

**Módulo 3 — Plan de relaciones con medios**

Diseña la estrategia de outreach:

- **Mapa de medios prioritarios**: Clasifica en Tier 1 (medios top del sector), Tier 2 (medios especializados y blogs influyentes) y Tier 3 (comunidades y newsletters). Propón cinco ejemplos concretos para cada tier.
- **Secuencia de embargo y exclusivas**: ¿A quién ofrecer primero la historia y en qué condiciones? Define el calendario de embargo (cuándo se levanta, qué incluye el paquete de exclusiva).
- **Plantilla de email de pitch personalizado**: Un correo de 150 palabras que capture la atención del periodista en los primeros tres segundos.

**Módulo 4 — Gestión proactiva de la reputación**

Anticipa los riesgos reputacionales del lanzamiento:

- Identifica los tres escenarios de crisis más probables (fallo técnico el día de lanzamiento, cobertura negativa comparativa, crítica en redes de un influencer del sector).
- Para cada escenario, propón la respuesta en menos de dos horas: quién habla, qué dice, en qué canal.
- Define las métricas de éxito de comunicación a 30, 60 y 90 días del lanzamiento.

Sé concreto y proporciona ejemplos reales adaptados al tipo de producto que te indique. Cada sección debe ser directamente utilizable por el equipo sin necesitar reescrituras.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir la estrategia de comunicación y relaciones públicas para el lanzamiento de un producto, con kit de prensa, plan de medios y gestión de riesgos reputacionales.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Comunicación interna de cambios organizacionales con IA',
                'description'       => 'Redacta comunicados internos claros y empáticos para anunciar reestructuraciones, cambios de liderazgo o transformaciones culturales, minimizando el impacto negativo en el clima laboral.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en comunicación organizacional y gestión del cambio. Tu misión es ayudarme a diseñar la estrategia de comunicación interna para un cambio organizacional significativo, asegurando que los empleados lo reciban con claridad, confianza y el menor nivel posible de ansiedad o resistencia.

**Descripción del cambio:**
[TIPO DE CAMBIO: reestructuración, fusión, cambio de CEO, despidos, cambio de modelo de trabajo, transformación digital, nueva estrategia corporativa]
[ALCANCE: cuántas personas afecta, qué departamentos, qué geografías]
[FECHA DE ANUNCIO PREVISTA]
[INFORMACIÓN QUE PUEDE COMPARTIRSE vs. INFORMACIÓN CONFIDENCIAL]

**Fase 1 — Análisis del impacto en las personas**

Antes de redactar nada, analiza:

1. **Segmentación de empleados por nivel de impacto**: ¿Quiénes son los más afectados directamente? ¿Quiénes lo perciben como amenaza aunque no lo sean? ¿Quiénes son los embajadores naturales del cambio?

2. **Mapa de emociones anticipadas**: Para cada grupo, ¿qué emociones predominarán en las primeras 24 horas? ¿Qué rumores ya circulan o podrían circular? ¿Qué preguntas harán inmediatamente?

3. **Riesgos de comunicación**: ¿Qué filtraciones externas son probables? ¿Cómo afecta esto al timing y al nivel de detalle del anuncio interno?

**Fase 2 — Arquitectura de mensajes internos**

Desarrolla los mensajes clave para cada audiencia interna:

- **Mensaje para toda la organización**: Honesto, empático, con las razones reales del cambio (sin jerga corporativa vacía), lo que cambia, lo que no cambia y los próximos pasos concretos.
- **Mensaje para managers**: Información adicional sobre cómo gestionar las preguntas de sus equipos, qué pueden decir y qué no, y cómo se les apoyará en la transición.
- **Mensaje para los empleados más afectados**: Comunicación individualizada o de grupo reducido, con mayor detalle y espacio para preguntas.

**Fase 3 — Redacción de piezas de comunicación**

Genera los siguientes documentos listos para usar:

- **Email del CEO o líder máximo** (300-400 palabras): Apertura personal (no corporativa), reconocimiento de la dificultad del cambio, visión clara del futuro deseado, compromiso con la transparencia y próximos pasos.
- **FAQ interna** (15 preguntas): Incluye las preguntas que nadie quiere responder pero todos van a hacer: ¿habrá más despidos? ¿cambia mi salario? ¿quién tomó esta decisión y por qué?
- **Guía para managers** (una página): Cómo abrir la conversación con su equipo, frases que funcionan y frases que debes evitar, cómo escuchar activamente y cuándo escalar a RRHH.
- **Mensaje en canal de comunicación interna** (Slack, Teams): Versión breve y cálida del anuncio para el canal general, que invite al diálogo sin generar caos.

**Fase 4 — Plan de seguimiento a 30 días**

Define cómo mantener la confianza durante la transición:
- Cadencia de actualizaciones (qué, quién, cuándo y por qué canal).
- Espacios de escucha (town halls, sesiones de preguntas anónimas, encuestas de clima).
- Indicadores de que la comunicación está funcionando (nivel de engagement interno, retención de talento clave, productividad).

Adapta todo el contenido al tipo de cambio y cultura organizacional que me describas. El tono debe ser siempre humano, directo y respetuoso: los empleados detectan inmediatamente el lenguaje corporativo evasivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar la estrategia de comunicación interna para reestructuraciones o cambios organizacionales, con mensajes segmentados, FAQ interna y plan de seguimiento.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de riesgo reputacional para inversores con IA',
                'description'       => 'Evalúa el riesgo reputacional de empresas cotizadas o en proceso de inversión analizando su historial de comunicación, cobertura mediática, controversias y posicionamiento de marca.',
                'prompt_content'    => <<<'EOT'
Eres un analista de riesgo especializado en factores ESG y reputación corporativa para fondos de inversión e instituciones financieras. Tu encargo es elaborar un informe de riesgo reputacional de una empresa como parte del proceso de due diligence de una inversión o adquisición.

**Empresa a analizar:**
[NOMBRE, TICKER SI COTIZA, SECTOR, GEOGRAFÍA PRINCIPAL, TAMAÑO]

**Bloque 1 — Análisis de historial reputacional**

Evalúa los últimos tres años de la empresa en estas dimensiones:

1. **Cobertura mediática**: ¿Cuál es el ratio de cobertura positiva vs. negativa? ¿En qué momentos ha sufrido picos de prensa negativa? ¿Cuánto tardó en recuperarse en términos de cobertura?

2. **Controversias documentadas**: Clasifica cualquier crisis o controversia pública en: operacional (fallos de producto o servicio), legal (litigios, regulatoria, compliance), social (trato a empleados, proveedores, comunidades) y medioambiental.

3. **Comunicación de resultados**: ¿Cómo ha comunicado resultados negativos? ¿Ha sido proactiva o reactiva? ¿Sus guidance y comunicados de resultados generan confianza o escepticismo en el mercado?

**Bloque 2 — Evaluación de vulnerabilidades actuales**

Identifica los riesgos reputacionales latentes:

- **Dependencia de figuras clave**: ¿Existe un riesgo de personalización excesiva en el CEO o fundador? ¿Qué ocurre con la reputación si esa persona abandona la empresa o incurre en un escándalo personal?
- **Exposición en redes sociales**: ¿La empresa o sus líderes tienen posiciones públicas en temas políticos o sociales que puedan alienar a clientes o inversores?
- **Cadena de suministro y proveedores**: ¿Existen riesgos reputacionales por prácticas de terceros que la empresa no controla directamente?
- **Regulación emergente**: ¿Qué cambios regulatorios en curso podrían obligar a la empresa a cambios que generen cobertura negativa?

**Bloque 3 — Benchmarking competitivo reputacional**

Compara la reputación de la empresa con sus tres principales competidores en:
- Índices de confianza del consumidor disponibles públicamente.
- Posición en rankings de reputación corporativa (Merco, RepTrak, Fortune Most Admired).
- Presencia y tono en medios especializados del sector.
- Opinión de empleados en plataformas como Glassdoor o LinkedIn.

**Bloque 4 — Cuantificación del riesgo**

Traduce el análisis a lenguaje financiero:
- **Impacto histórico en valoración**: ¿Las crisis reputacionales pasadas correlacionaron con caídas en el precio de la acción o en métricas de negocio? ¿De qué magnitud y duración?
- **Prima o descuento reputacional**: ¿Cotiza con descuento o prima respecto a sus comparables, y en qué medida la reputación explica esa diferencia?
- **Score de riesgo reputacional**: Proporciona una puntuación de 1 a 10 con su justificación y el principal driver de riesgo identificado.

**Entregable**: Informe ejecutivo de cuatro páginas con conclusión clara sobre si el riesgo reputacional es un factor limitante, manejable o una ventaja diferencial para la inversión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Elaborar un informe de riesgo reputacional para due diligence de inversiones, con análisis de cobertura mediática, vulnerabilidades y cuantificación del riesgo.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Redacción de comunicados legales accesibles con IA',
                'description'       => 'Transforma documentos legales complejos en comunicados corporativos claros para empleados, clientes y medios, manteniendo la precisión jurídica y cumpliendo con los requisitos de transparencia.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en comunicación legal corporativa, con experiencia en traducir documentos jurídicos complejos a lenguaje accesible sin perder rigor ni crear riesgos adicionales para la empresa. Tu encargo es ayudarme a redactar comunicados legales que sean simultáneamente precisos, comprensibles y estratégicamente bien posicionados.

**Documento o situación legal a comunicar:**
[DESCRIBE EL DOCUMENTO O LA SITUACIÓN: fallo judicial, acuerdo extrajudicial, cambio regulatorio, investigación administrativa, denuncia pública, cambio en términos y condiciones]

**Audiencias que recibirán la comunicación:**
[MARCA LAS QUE APLIQUEN: clientes, empleados, inversores, medios de comunicación, reguladores, público general]

**Bloque 1 — Análisis de riesgos de comunicación**

Antes de redactar, identifica:

1. **Qué puede decirse sin crear riesgos legales adicionales**: ¿Qué información está ya en el dominio público? ¿Qué admisiones deben evitarse? ¿Qué lenguaje podría interpretarse como reconocimiento de culpa o responsabilidad?

2. **Obligaciones de divulgación**: ¿Existe alguna obligación legal de comunicar esta información (empresa cotizada, sector regulado, normativa de protección de datos)? ¿Qué plazos aplican?

3. **Riesgos reputacionales de no comunicar**: ¿Si no se comunica proactivamente, cuál es la probabilidad de que salga a través de otra vía (filtración, descubrimiento por periodistas, denuncia de empleados)?

**Bloque 2 — Versiones del comunicado por audiencia**

Redacta versiones adaptadas para:

- **Nota de prensa para medios** (250 palabras): Lenguaje neutral y objetivo, sin victimismo ni agresividad hacia terceros, con los hechos esenciales y la posición oficial de la empresa.

- **Comunicado a clientes** (150 palabras): Enfocado en el impacto práctico para ellos, acciones que la empresa está tomando para proteger sus intereses y canal de contacto para dudas.

- **Comunicado a empleados** (200 palabras): Contexto suficiente para evitar rumores, instrucciones claras sobre qué pueden decir públicamente y a quién deben dirigir las preguntas externas.

- **Carta a inversores o accionistas** (300 palabras): Impacto financiero estimado si procede, medidas de mitigación, posición competitiva no afectada y próximos hitos del proceso legal.

**Bloque 3 — Protocolo de gestión de preguntas**

Prepara al equipo para las preguntas que lleguen tras el comunicado:

- **10 preguntas frecuentes de periodistas**: Con respuesta oficial aprobada para cada una. Incluye las preguntas más incómodas: ¿admiten responsabilidad? ¿cuánto dinero perderán? ¿afecta al empleo?

- **Frases de cierre para entrevistas**: Tres formulaciones que permitan terminar una línea de preguntas incómodas sin parecer evasivo ni hostil.

- **Instrucciones para el portavoz**: Qué tono adoptar, qué gestos y lenguaje corporal en cámara, cuándo remitir a la nota escrita y cuándo comprometerse con un seguimiento.

**Bloque 4 — Monitorización post-comunicado**

Define el plan de seguimiento en las 72 horas posteriores al comunicado:
- Palabras clave a monitorizar en tiempo real.
- Umbrales de alerta que activan respuesta adicional.
- Cuándo emitir una actualización y con qué información adicional.

Asegúrate de que todos los textos han sido revisados bajo el principio de no crear obligaciones legales no intencionadas. Señala con [REVISAR CON ASESOR LEGAL] cualquier fragmento que deba ser validado por el departamento jurídico antes de publicarse.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Redactar comunicados legales accesibles para múltiples audiencias, con análisis de riesgos de comunicación y protocolo de gestión de preguntas.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Respuestas de atención al cliente con gestión de reputación integrada',
                'description'       => 'Diseña plantillas y flujos de respuesta al cliente que resuelvan problemas, protejan la reputación de marca en canales públicos y conviertan quejas en casos de éxito compartibles.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en experiencia del cliente y gestión de reputación online. Tu encargo es ayudarme a crear un sistema completo de respuesta a clientes que resuelva sus problemas de manera efectiva y, al mismo tiempo, proteja y mejore activamente la reputación de la marca en canales públicos como redes sociales, Google Business, Trustpilot o foros sectoriales.

**Contexto de la empresa:**
[SECTOR, TIPO DE PRODUCTO O SERVICIO, VOLUMEN APROXIMADO DE QUEJAS MENSUALES, CANALES PRINCIPALES DE ATENCIÓN]

**Bloque 1 — Clasificación estratégica de quejas**

Antes de responder, clasifica cada queja en dos dimensiones:

1. **Dimensión de resolución**: ¿Es un problema técnico, de expectativas, de proceso o de comunicación? ¿Tiene solución inmediata, solución a largo plazo o no tiene solución satisfactoria?

2. **Dimensión reputacional**: ¿La queja es pública o privada? ¿Tiene potencial viral (injusticia clara, humor, indignación)? ¿El cliente tiene audiencia significativa? ¿Es un ataque de mala fe o un cliente genuinamente frustrado?

Según la combinación de estas dos dimensiones, propón cuatro arquetipos de situación y la estrategia de respuesta óptima para cada uno.

**Bloque 2 — Plantillas de respuesta por canal y tipo de queja**

Genera respuestas tipo para las siguientes situaciones:

- **Reseña negativa pública de 1 estrella** (Google, Trustpilot): Respuesta visible para todos que reconozca el problema, no sea defensiva, ofrezca solución concreta y convierta el episodio en demostración de compromiso de servicio. Máximo 150 palabras.

- **Queja viral en Twitter/X**: Respuesta inicial en menos de una hora que detenga la escalada, seguida de un DM para resolver en privado. La respuesta pública debe ser empática, no corporativa, y demostrar que hay personas reales detrás.

- **Queja en grupo de Facebook o foro sectorial**: Respuesta que respete las normas de la comunidad, aporte valor informativo y no parezca un intento de silenciar la crítica.

- **Email de queja formal**: Respuesta estructurada con reconocimiento, explicación, solución y compensación si procede. Incluye cómo convertir el email de cierre en una solicitud de actualización de reseña.

- **Queja en LinkedIn de cliente corporativo**: Tono más formal, reconocimiento del impacto en su negocio, compromiso con seguimiento personalizado por parte de un responsable de cuenta.

**Bloque 3 — Convertir quejas en casos de éxito**

Define el proceso para identificar quejas resueltas que pueden convertirse en contenido de marca:

- Criterios para seleccionar una queja resuelta como candidata a caso de éxito.
- Guion de conversación para solicitar al cliente permiso para compartir su historia.
- Formato del caso de éxito para redes sociales: qué problema tenía, cómo se resolvió, qué dice el cliente ahora.
- Cómo solicitar una actualización de reseña negativa de manera natural y no presionada.

**Bloque 4 — Sistema de mejora continua basado en quejas**

Diseña un proceso mensual para extraer inteligencia de las quejas:
- Categorización de quejas por tipo de problema para identificar patrones.
- Informe mensual para producto y operaciones con los top cinco problemas recurrentes.
- Métrica de "recuperación de confianza": porcentaje de clientes que quejaron y volvieron a comprar o mejoraron su reseña.

Proporciona todos los textos en un tono cálido, directo y genuinamente humano. Evita el lenguaje corporativo evasivo. Los clientes detectan inmediatamente las respuestas automatizadas sin personalización real.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear un sistema de respuesta a quejas de clientes que resuelva problemas, proteja la reputación en canales públicos y convierta críticas en casos de éxito.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Kit de comunicación corporativa para freelancers y consultores independientes',
                'description'       => 'Crea tu sistema completo de comunicación profesional: propuestas, comunicados de crisis con clientes, gestión de reputación online y plantillas para cada momento del ciclo de cliente.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de comunicación y branding personal especializado en profesionales independientes, freelancers y consultores. Tu misión es ayudarme a construir un sistema de comunicación corporativa profesional adaptado a mi realidad de trabajar en solitario o en equipo pequeño, con la credibilidad y consistencia que normalmente solo tienen las grandes empresas.

**Mi perfil profesional:**
[ESPECIALIDAD, AÑOS DE EXPERIENCIA, TIPO DE CLIENTES HABITUALES, TICKET MEDIO DE PROYECTOS, CANALES DONDE TENGO PRESENCIA]

**Módulo 1 — Narrativa de marca personal**

Desarrolla los bloques de comunicación fundamentales de mi marca:

1. **Bio profesional en tres versiones**: Una extensa (300 palabras para web o LinkedIn), una media (100 palabras para propuestas y presentaciones) y una corta (50 palabras para perfiles y firmas de email). Cada versión debe destacar mi diferenciador único, los resultados que genero para clientes y el tipo de proyectos en los que destaco.

2. **Propuesta de valor en una frase**: La frase que responde a "¿a qué te dedicas?" de forma memorable, específica y orientada a resultados, no a actividades.

3. **Historia de origen profesional**: Una narrativa de dos párrafos que explique por qué hago lo que hago, con un momento de inflexión real que genere conexión emocional con potenciales clientes.

**Módulo 2 — Comunicación en momentos de tensión con clientes**

Prepara plantillas para las situaciones difíciles que todo freelancer enfrenta:

- **Retraso en la entrega**: Email que comunica el retraso con honestidad, explica el motivo sin excusas excesivas, propone nueva fecha y ofrece algo de valor como compensación.
- **Desacuerdo en revisiones o alcance**: Respuesta que establece límites profesionales sin deteriorar la relación, recuerda el alcance acordado y propone opciones de resolución.
- **Cliente que no paga**: Secuencia de tres emails (recordatorio amable, aviso formal, último aviso) que escalan progresivamente en tono sin quemar la relación innecesariamente.
- **Finalización anticipada del proyecto**: Comunicado profesional cuando el cliente o yo decidimos no continuar, que proteja mi reputación y deje la puerta abierta.
- **Respuesta a reseña negativa en LinkedIn o plataforma**: Cómo responder públicamente de forma que quien lo lea vea profesionalismo, no defensividad.

**Módulo 3 — Gestión de reputación online para independientes**

Crea un sistema sencillo de gestión de mi reputación digital:

- **Solicitud de testimonios**: Email o mensaje para pedir un testimonio al finalizar un proyecto exitoso, con las preguntas específicas que guíen al cliente a dar un testimonio útil (no genérico).
- **Caso de estudio simplificado**: Estructura de una página para documentar un proyecto de éxito: situación inicial, mi intervención, resultado medible, cita del cliente.
- **Respuesta a críticas en foros o redes**: Plantilla adaptable para responder críticas públicas de manera que refuerce mi credibilidad ante terceros que lean el intercambio.

**Módulo 4 — Comunicación de aumento de tarifas**

El momento más incómodo para muchos freelancers: subir precios. Proporciona:
- Email de comunicación de aumento de tarifas para clientes existentes (tono positivo, justificado en valor entregado, con suficiente antelación).
- Respuesta para cuando un cliente cuestiona el aumento o negocia a la baja.
- Cómo comunicar mis nuevas tarifas a potenciales clientes nuevos de forma que el precio nunca parezca el tema central.

Adapta todo el contenido a mi especialidad y tipo de clientes. El tono debe ser profesional pero personal: soy una persona, no una corporación, y eso es precisamente lo que me diferencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir el sistema completo de comunicación profesional para freelancers: narrativa de marca, plantillas para momentos difíciles y gestión de reputación online.',
                'vote_score'        => 52,
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
