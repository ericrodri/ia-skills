<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills166Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Arquitectura de datos para marketing',
                'description'       => 'Construye el stack de datos que alimenta la personalización: CDPs, data lakes, modelos de atribución y las decisiones de arquitectura que determinan si el marketing puede medir lo que importa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como arquitecto de datos especializado en marketing con experiencia en empresas de entre 50 y 500 empleados que intentan pasar de operar con hojas de cálculo y datos dispersos a tener un stack de datos coherente.

Voy a compartirte el contexto de mi empresa:
- Sector y modelo de negocio: [describe tu sector, si es B2B, B2C o mixto]
- Fuentes de datos actuales: [enumera tus fuentes: CRM, web analytics, ecommerce, ERP, soporte, etc.]
- Volumen aproximado de clientes/contactos: [número de registros activos]
- Herramientas de marketing en uso: [plataformas de email, paid media, automatización]
- Principal problema que quiero resolver: [atribución, personalización, segmentación, reporting]
- Presupuesto aproximado para infraestructura de datos: [rango mensual o anual]

Con este contexto, ayúdame a diseñar la arquitectura de datos de marketing ideal para mi situación.

**Parte 1 — Diagnóstico del estado actual**
Analiza los síntomas típicos de un marketing sin arquitectura de datos sólida: datos fragmentados en silos, atribución imposible de calcular correctamente, campañas personalizadas que en realidad no son personalizadas, reportes que llevan horas de consolidación manual. Identifica cuál de estos síntomas es el más crítico en mi contexto y por qué resolverlo primero genera el mayor retorno.

**Parte 2 — Los componentes del stack**
Explica cada componente y cuándo tiene sentido añadirlo:

1. **CDP (Customer Data Platform)**: diferencias entre un CDP operacional (Segment, mParticle) y un CDP analítico (Amplitude, Mixpanel), cuándo necesitas uno vs. el otro, y cuándo ninguno de los dos es la primera prioridad.

2. **Data Warehouse**: opciones según el volumen y presupuesto (BigQuery, Snowflake, Redshift, DuckDB para empresas pequeñas), y qué diferencia a un warehouse útil para marketing de uno que solo usa el equipo de datos.

3. **Data Lake vs. Data Lakehouse**: cuándo el volumen y la variedad de datos justifica la complejidad adicional de un lake, y cuándo sobredimensiona el problema.

4. **ETL / ELT**: herramientas de integración (Fivetran, Airbyte, Stitch, dbt) y la decisión clave de transformar antes o después de cargar.

5. **Capa de activación**: cómo los datos procesados llegan de vuelta a las herramientas de marketing (reverse ETL, APIs, webhooks) para permitir la personalización real.

**Parte 3 — Modelos de atribución**
Explica los modelos de atribución más usados (último clic, primer clic, lineal, decaimiento temporal, basado en datos) y las implicaciones arquitectónicas de cada uno: qué datos necesitas capturar, con qué granularidad y durante cuánto tiempo para que el modelo sea válido. Incluye la realidad del mundo cookieless y cómo el modelado estadístico (MMM, incrementalidad) está ganando terreno frente a la atribución determinística.

**Parte 4 — Hoja de ruta por fases**
Diseña una hoja de ruta en tres fases:
- Fase 1 (0-3 meses): fundamentos sin sobre-ingeniería, máximo impacto mínimo coste
- Fase 2 (3-9 meses): automatización del reporting y primeras capacidades de segmentación avanzada
- Fase 3 (9-18 meses): personalización en tiempo real y modelos predictivos

Para cada fase, indica qué herramientas concretas recomiendas según mi contexto, cuánto cuesta aproximadamente y qué capacidades desbloquea.

**Parte 5 — Las decisiones de arquitectura que más importan**
Identifica las tres decisiones de diseño que tienen mayor impacto a largo plazo: la estrategia de identidad del cliente (cómo unificar el mismo individuo a través de canales y dispositivos), la gobernanza de datos desde el primer día (quién puede hacer qué con qué datos), y la estrategia de first-party data ante la muerte de las cookies de terceros.

**Entregable final**
Produce un diagrama de arquitectura en texto (ASCII o descripción estructurada) que muestre las fuentes, las capas de procesamiento, el almacenamiento y las herramientas de activación de mi stack recomendado. Incluye también las tres señales de alerta que indican que la arquitectura está funcionando mal y necesita revisión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar el stack de datos de marketing que permite medir y personalizar con rigor',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Event-driven architecture',
                'description'       => 'Construye sistemas desacoplados con eventos: Apache Kafka, RabbitMQ, Event Sourcing, CQRS y los patrones que permiten escalar sin crear un monolito de eventos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como arquitecto de software especializado en sistemas distribuidos con experiencia práctica implementando arquitecturas orientadas a eventos en producción, incluyendo los fracasos que enseñan lo que los libros no cuentan.

Contexto de mi sistema actual:
- Tipo de aplicación: [describe si es un monolito, microservicios, una aplicación web, un sistema de procesamiento batch, etc.]
- Lenguaje y framework principal: [Java/Spring, Python/FastAPI, Node.js/NestJS, etc.]
- Volumen de transacciones/eventos estimado: [eventos por segundo o por día]
- Principal problema que quiero resolver con EDA: [desacoplamiento, escalabilidad, auditoría, reactividad, etc.]
- Experiencia del equipo con mensajería: [ninguna, algo con RabbitMQ, hemos tocado Kafka, etc.]
- Infraestructura actual: [on-premise, AWS, GCP, Azure, hybrid]

**Parte 1 — Por qué EDA y cuándo no**
Explica el problema que resuelve la arquitectura orientada a eventos con precisión técnica: el acoplamiento temporal y espacial en sistemas síncronos, el cuello de botella del componente más lento en una cadena de llamadas REST, y la fragilidad ante fallos en cascada. Pero también sé honesto sobre cuándo EDA complica más de lo que ayuda: sistemas con equipos pequeños, lógica transaccional muy acoplada, requisitos de consistencia fuerte o cuando el debugging distribuido superaría la capacidad del equipo.

**Parte 2 — El broker de mensajes correcto**
Compara las opciones principales en función de mi contexto:

- **Apache Kafka**: sus fortalezas reales (retención durable, replay de eventos, throughput masivo, el log como fuente de verdad), sus complejidades operacionales y por qué Kafka no es solo una cola de mensajes sino un log distribuido.
- **RabbitMQ**: cuándo su modelo de routing flexible (exchanges, bindings) lo hace más adecuado que Kafka, especialmente para casos de use de mensajería tradicional con acknowledgement y dead letter queues.
- **AWS SNS/SQS, Google Pub/Sub, Azure Service Bus**: las opciones managed y cuándo el coste operacional cero justifica las limitaciones de funcionalidad.
- **NATS y Redpanda**: alternativas más ligeras que merecen consideración.

Recomienda el broker más adecuado para mi situación y explica exactamente por qué.

**Parte 3 — Event Sourcing y CQRS**
Explica con precisión técnica y sin glamour excesivo:

- **Event Sourcing**: almacenar eventos en lugar de estado, cómo se reconstruye el estado actual, las proyecciones, los snapshots y cuándo el modelo de lectura separado del write model tiene sentido real.
- **CQRS**: separar el modelo de escritura del modelo de lectura, las implicaciones en consistencia eventual, y por qué muchos equipos implementan CQRS sin Event Sourcing y al revés.
- **Los problemas reales**: el versionado de eventos cuando el schema cambia, la complejidad del debugging en sistemas event-sourced y por qué el equipo de producto odia los "eventual consistency" cuando el usuario ve datos desactualizados.

**Parte 4 — Patrones críticos**
Para cada patrón, da un ejemplo de implementación en pseudocódigo o fragmento real:
- Outbox pattern: garantizar que el evento se emite si y solo si la transacción de base de datos se completa
- Saga pattern: transacciones distribuidas sin locks globales, sagas coreografiadas vs. orquestadas
- Consumer groups y particionado: garantizar orden dentro de una partición y paralelismo entre particiones
- Dead letter queues: qué hacer con los mensajes que fallan repetidamente

**Parte 5 — El diseño del evento**
Las decisiones que determinan si el sistema de eventos envejece bien o se convierte en un nuevo monolito distribuido: fat events vs. thin events, el schema registry, el versionado semántico de eventos y las convenciones de naming que hacen el sistema comprensible para quien llega dos años después.

**Entregable**
Diseña el esquema de eventos para el caso de uso más importante de mi sistema, con los productores, consumidores, el broker elegido, el flujo de un evento típico y los tres puntos de fallo más probables con sus mitigaciones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar e implementar una arquitectura orientada a eventos escalable y mantenible',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Atomic design en la práctica',
                'description'       => 'Implementa atomic design en un equipo real: átomos, moléculas, organismos, templates y las dificultades de mantener la coherencia cuando el sistema crece.',
                'prompt_content'    => <<<'PROMPT'
Actúa como design systems lead con experiencia implementando atomic design en equipos de producto reales, incluyendo las fricciones con desarrolladores, las presiones de los stakeholders y el momento en que el sistema empieza a deteriorarse sin disciplina activa.

Contexto de mi equipo:
- Tamaño del equipo de diseño: [número de diseñadores]
- Tamaño del equipo de desarrollo: [número de developers que consumen el sistema]
- Herramienta de diseño principal: [Figma, Sketch, Adobe XD]
- Framework frontend: [React, Vue, Angular, otro]
- Estado actual del design system: [no existe, existe pero está desactualizado, tenemos una librería de componentes pero no documentada, etc.]
- Tipo de producto: [app web, app móvil, plataforma multi-producto, ecommerce, SaaS B2B]
- Principal dolor que quiero resolver: [inconsistencia visual, velocidad de diseño, handoff, onboarding de nuevos diseñadores]

**Parte 1 — Por qué atomic design y cuándo fracasa**
Explica la premisa del atomic design de Brad Frost con honestidad: el modelo mental es valioso, pero la taxonomía estricta (¿esto es una molécula o un organismo?) genera más discusiones filosóficas que valor entregado en muchos equipos. Identifica qué parte del modelo tiene valor real y qué parte es terminología que cada equipo acaba redefiniendo a su manera.

**Parte 2 — Los átomos que de verdad importan**
Los elementos más fundamentales: tipografía (escala tipográfica, los pesos, las alturas de línea), color (paleta semántica vs. paleta literal, los tokens de color), espaciado (el sistema de espaciado y por qué el 4px o 8px base transforma la coherencia), iconografía (la librería de iconos, el tamaño estándar, las convenciones de uso) y los componentes de formulario base.

Para cada uno, explica la decisión de diseño que más impacta a largo plazo y el error más común que cometemos al definirlos.

**Parte 3 — Construir moléculas y organismos con criterio**
El problema real: ¿cuándo un componente merece estar en el sistema y cuándo es demasiado específico? Da criterios concretos para decidir qué entra al sistema (frecuencia de uso, estabilidad, reutilización cross-context) y qué se queda como componente local de la feature.

Explica el concepto de composición: cómo diseñar átomos con las props correctas para que las moléculas se construyan sobre ellos sin duplicar lógica visual, y cómo los organismos encapsulan patrones de UI completos que se repiten en contextos distintos.

**Parte 4 — Templates y páginas: donde el sistema se encuentra con la realidad**
Los templates son los esqueletos de las páginas: definen la estructura sin contenido real. Explica cómo usar templates para documentar los layouts del sistema, cómo gestionarlos cuando el producto tiene docenas de tipos de página distintos, y cómo las páginas (instancias de templates con contenido real) sirven para validar que el sistema funciona en contextos reales antes de que llegue a producción.

**Parte 5 — Mantenimiento: el reto que nadie menciona**
El design system muere sin governance activa. Explica el modelo de contribución (quién puede añadir componentes, quién revisa, quién aprueba), el proceso de deprecación (cómo retirar un componente sin romper 40 pantallas), las versiones y el changelog, y las métricas que indican si el sistema está siendo adoptado o ignorado.

**Parte 6 — El handoff diseño-desarrollo**
Cómo conectar el atomic design en Figma con los componentes reales en código: el naming convention compartido, los tokens de diseño como fuente única de verdad (Style Dictionary, Theo), y el proceso de sincronización cuando diseño y código divergen inevitablemente.

**Entregable**
Para mi tipo de producto y contexto, define: la estructura de componentes de los primeros tres meses (qué átomos y moléculas construir primero), el proceso de contribución mínimo viable y las tres reglas de oro que el equipo debe respetar para que el sistema no degrade.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar y mantener un design system basado en atomic design en un equipo real',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Arquitectura del proceso de ventas',
                'description'       => 'Diseña el proceso de ventas como un sistema: las etapas, los criterios de avance, los playbooks por segmento y los puntos de control que evitan que las oportunidades se pierdan en el pipeline.',
                'prompt_content'    => <<<'PROMPT'
Actúa como director de ventas con experiencia diseñando procesos de ventas desde cero y rediseñando procesos heredados que habían crecido sin estructura. Has trabajado en B2B SaaS, servicios profesionales y ventas de ciclo largo, y sabes la diferencia entre un proceso que vive en Notion y uno que el equipo realmente sigue.

Contexto de mi proceso de ventas actual:
- Modelo de venta: [B2B, B2C, marketplace, autoservicio + sales assist]
- Ticket promedio y ciclo de venta estimado: [ACV y duración media del ciclo]
- Tamaño del equipo de ventas: [número de AEs, SDRs, SEs, si los hay]
- CRM actual: [Salesforce, HubSpot, Pipedrive, sin CRM]
- Segmentos de clientes: [SMB, Mid-Market, Enterprise, o mixto]
- Principal punto de dolor del proceso actual: [oportunidades que se estancan, falta de visibilidad, criterios de avance inconsistentes, demasiadas etapas, pocas etapas, deals que se caen en la última fase]
- Cuántas oportunidades maneja un AE de media: [número]

**Parte 1 — El diagnóstico del proceso actual**
Explica los síntomas de un proceso de ventas mal diseñado: etapas definidas por actividades del vendedor en lugar de por el progreso del comprador, criterios de avance subjetivos que llevan a pipelines inflados, la ausencia de exit criteria que permite que los deals zombie vivan para siempre, y la desconexión entre el proceso en el CRM y lo que los vendedores realmente hacen.

Ayúdame a identificar cuál de estos problemas es el más crítico en mi situación.

**Parte 2 — El diseño de las etapas**
La filosofía central: las etapas deben reflejar el progreso del comprador, no las actividades del vendedor. Diseña las etapas para mi contexto con:
- El nombre de cada etapa desde la perspectiva del comprador
- La definición precisa de qué significa estar en esa etapa
- Los criterios de entrada (qué tiene que ser verdad para mover el deal a esta etapa)
- Los criterios de salida (qué evidencia objetiva necesito para avanzar)
- El porcentaje de probabilidad asignado a cada etapa y cómo calcularlo honestamente

**Parte 3 — Los playbooks por segmento**
Un proceso único no funciona para SMB y Enterprise. Diseña playbooks diferenciados que incluyan: las preguntas de discovery diferentes por segmento, los stakeholders típicos del proceso de compra y cómo navegar el comité de compras en Enterprise, los materiales de habilitación por etapa (templates de email, decks, business cases, RFP responses), y las señales de que el deal está en riesgo en cada segmento.

**Parte 4 — Los puntos de control anti-deals-zombie**
Los mecanismos que evitan que el pipeline se llene de oportunidades que nunca van a cerrar:
- El MEDDIC/MEDDPICC como marco de calificación y cómo adaptarlo a mi contexto
- Las fechas de last activity y next steps como campos obligatorios, no opcionales
- El proceso de deal review semanal: qué preguntas hacerse sobre cada oportunidad
- Los criterios de archivado de deals muertos y cómo hacerlo sin que el equipo lo evite

**Parte 5 — La integración con el CRM**
Cómo trasladar el proceso diseñado al CRM de forma que sea una herramienta de ayuda, no un sistema de control que el equipo evita: los campos obligatorios mínimos por etapa, las automatizaciones que ahorran tiempo al vendedor (no al manager), los dashboards de pipeline que muestran lo que importa.

**Entregable**
Para mi contexto específico, produce: el diseño de las etapas con criterios de entrada y salida, el playbook de discovery para el segmento principal y el formato del deal review semanal que el equipo pueda seguir en 30 minutos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar un proceso de ventas estructurado con criterios de avance claros y playbooks por segmento',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'API-first product design',
                'description'       => 'Diseña el producto con la API como ciudadano de primera clase: los beneficios para integradores, los principios del diseño de APIs y cómo la API-first philosophy cambia las decisiones de producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como product manager con experiencia en productos de plataforma y APIs públicas, que ha visto tanto el fracaso de equipos que publican APIs como un afterthought como el éxito de productos donde la API es el producto real y la interfaz gráfica es una de sus posibles expresiones.

Contexto de mi producto:
- Tipo de producto: [SaaS B2B, plataforma de datos, herramienta de desarrollo, producto de consumo con potencial de integración]
- Estado actual de la API: [no existe, existe pero es privada/interna, tenemos una API pública no documentada, tenemos una API pública con documentación básica]
- Perfil de los integradores esperados: [desarrolladores internos, partners tecnológicos, clientes enterprise con equipos técnicos, desarrolladores externos/marketplace]
- Casos de integración más demandados: [describe los casos que los clientes piden integrar con más frecuencia]
- Stack tecnológico: [lenguaje backend, si hay consideraciones específicas]
- Principal razón para apostar por API-first: [diferenciación competitiva, enterprise readiness, ecosistema de partners, velocidad interna de desarrollo]

**Parte 1 — La API-first philosophy y sus implicaciones de producto**
Explica qué significa realmente diseñar API-first: la API se diseña antes que la UI, la UI es una implementación de la API igual que cualquier integración externa, y las decisiones de producto se evalúan desde la perspectiva de si la API puede expresarlas con elegancia. Las implicaciones reales: los ingenieros de producto deben pensar en recursos y operaciones, no solo en pantallas; el contrato de la API es un compromiso público que tiene un coste de ruptura enorme; y la documentación no es opcional sino parte del producto.

**Parte 2 — Los principios del diseño de APIs que crean ecosistemas**
Los principios que separan las APIs que generan ecosistemas de las que nadie adopta:

- **Coherencia sobre originalidad**: convenciones REST vs. GraphQL vs. gRPC y cuándo cada opción tiene más sentido según el perfil del integrador
- **Resources, not actions**: el diseño orientado a recursos y por qué las APIs de acción son más difíciles de extender
- **Versionado desde el primer día**: estrategias de versionado (path versioning, header versioning, query param) y la política de deprecación que no rompe a los integradores
- **Paginación, filtrado y ordenación**: los patrones estándar que todo integrador espera encontrar sin necesidad de leer la documentación
- **Errores útiles**: el formato de error que da al desarrollador todo lo necesario para resolver el problema sin abrir un ticket de soporte
- **Idempotencia**: por qué los endpoints de escritura deben ser idempotentes y cómo implementarlo con idempotency keys

**Parte 3 — Autenticación y autorización**
Las opciones de autenticación para APIs públicas (API keys, OAuth 2.0 con diferentes flows, JWTs) y cuándo usar cada una. El modelo de permisos y scopes que permite a los integradores solicitar solo los accesos que necesitan. Las consideraciones de seguridad que deben estar presentes desde el diseño: rate limiting, IP allowlisting, audit logs de uso de API.

**Parte 4 — El developer experience como ventaja competitiva**
La documentación que convierte a un desarrollador escéptico en integrador activo en menos de 30 minutos: las guías de quickstart, la referencia de API generada desde el código (OpenAPI/Swagger), los SDK oficiales y cuándo tienen sentido, el sandbox o modo de prueba, los webhooks como complemento de la API pull y los changelogs que mantienen a los integradores informados.

**Parte 5 — Cómo API-first cambia las decisiones de producto**
Los cambios concretos en el proceso de producto: el API design review como paso obligatorio antes de escribir código, el RFC de API como herramienta de alineación interna, cómo los primeros integradores son los mejores beta testers del diseño, y la tensión entre la UI que necesita datos específicos y la API genérica que deben compartir todos los clientes.

**Entregable**
Para mi producto, diseña: el esquema de los tres recursos más importantes de mi API con sus endpoints, el modelo de autenticación recomendado, y el roadmap de las tres primeras versiones de la API con lo que incluye cada una y lo que deliberadamente excluye.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar productos con la API como ciudadano de primera clase para crear ecosistemas de integradores',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Arquitectura organizacional',
                'description'       => 'Diseña estructuras organizativas que escalan: team topologies, tribus y squads, las estructuras matriciales vs. planas y las decisiones de diseño organizacional que Spotify hizo famosas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como consultor de diseño organizacional con experiencia práctica en empresas tecnológicas y no tecnológicas que han atravesado momentos de crecimiento donde la estructura que funcionaba con 30 personas empieza a romperse con 80, y con 200 ya es un problema grave.

Contexto de mi organización:
- Tamaño actual y proyección a 12 meses: [número de personas ahora y en un año]
- Tipo de empresa: [startup tecnológica, empresa tecnológica establecida, empresa no tecnológica con área digital, etc.]
- Estructura actual: [describe cómo están organizadas las personas ahora: por función, por producto, mixto]
- Principal problema de coordinación que tienes hoy: [demasiadas reuniones de alineación, decisiones lentas, duplicación de trabajo, silos entre equipos, falta de ownership claro]
- Modelo de trabajo: [remoto, presencial, híbrido]
- Cuántos productos o líneas de negocio distintas gestionas: [número]

**Parte 1 — Por qué la estructura importa y cuándo es el momento de cambiarla**
Explica la Ley de Conway y sus implicaciones prácticas: los sistemas que un equipo construye reflejan la estructura de comunicación del equipo. Identifica los síntomas que indican que la estructura organizativa ha dejado de servir a la estrategia: cuando coordinar un cambio requiere reuniones entre cinco equipos, cuando nadie sabe quién decide qué, cuando los equipos se bloquean mutuamente constantemente.

**Parte 2 — Team Topologies: el marco más útil para equipos de producto**
Explica los cuatro tipos de equipo de Matthew Skelton y Manuel Pais:
- **Stream-aligned teams**: alineados a un flujo de valor (un producto, un segmento, un journey), responsables de entregar valor al cliente de forma autónoma
- **Enabling teams**: ayudan a los stream-aligned teams a adoptar nuevas capacidades sin crear dependencias permanentes
- **Complicated subsystem teams**: gestionan subsistemas con alta complejidad cognitiva que el stream-aligned team no puede asumir sin riesgo
- **Platform teams**: proveen capacidades internas como un producto, reduciendo la carga cognitiva de los stream-aligned teams

Y los tres modos de interacción: collaboration, X-as-a-service, facilitating. Explica cómo la elección del modo de interacción afecta tanto a la velocidad como a la calidad de la entrega.

**Parte 3 — El modelo Spotify: lo que funciona y lo que se malinterpreta**
Explica el modelo de tribus, squads, chapters y guilds con honestidad: Spotify mismo reconoció que el modelo evolucionó y que muchas empresas adoptaron la terminología sin entender los principios subyacentes. Las partes que tienen valor real (squads con ownership claro, chapters que mantienen la comunidad de práctica) y las partes que en muchos contextos generan más burocracia que autonomía.

**Parte 4 — Estructuras matriciales vs. planas vs. jerárquicas**
Para cada modelo, explica cuándo funciona, cuándo falla y cuáles son las señales de que has elegido el modelo incorrecto:
- La estructura funcional (por departamento): eficiente para especialización, lenta para coordinación cross-funcional
- La estructura de producto/proyecto: rápida para el equipo, duplicación de capacidades especializadas
- La matriz: intento de tener ambas ventajas que frecuentemente genera ambas desventajas (el problema del doble reporting)
- La estructura plana: funciona hasta que no funciona (generalmente entre 30 y 50 personas)

**Parte 5 — Las decisiones de diseño que determinan si la estructura escala**
Los principios que deben guiar el diseño, independientemente del modelo elegido: minimizar las dependencias entre equipos, maximizar el ownership claro de cada equipo, diseñar para la autonomía antes que para la coordinación, y construir la estructura alrededor de los flujos de valor, no de las disciplinas.

**Entregable**
Para mi contexto, diseña la estructura organizativa recomendada para los próximos 12 meses: los equipos, su misión, quién reporta a quién, cómo se coordinan y las tres decisiones de diseño más críticas que debo tomar en los primeros 90 días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar estructuras organizativas que escalan con el crecimiento del equipo y la estrategia',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Arquitectura financiera de un grupo empresarial',
                'description'       => 'Cómo estructurar un grupo de empresas: holdco, subcorporate, consolidación contable y las decisiones de estructura corporativa que optimizan impuestos y simplifican la gestión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como director financiero con experiencia en estructuración de grupos empresariales, tanto en el momento de crear la estructura inicial como en la reorganización de grupos que han crecido de forma orgánica y acumulan una arquitectura corporativa incoherente.

Nota importante: Este prompt genera un análisis conceptual y educativo. Las decisiones de estructura corporativa requieren asesoramiento jurídico y fiscal específico en cada jurisdicción. Consulta siempre con asesores especializados antes de tomar decisiones con impacto legal o fiscal.

Contexto de mi grupo:
- Número de entidades actuales y en qué jurisdicciones: [enumera las empresas y países]
- Actividades de cada entidad: [operativa, holding, inmobiliaria, licencias de IP, financiera, etc.]
- Facturación consolidada aproximada: [rango]
- Estructura de propiedad actual: [quiénes son los socios y cómo están distribuidas las participaciones]
- Jurisdicciones donde opera el grupo o donde queremos operar: [países]
- Principal objetivo de la restructuración: [optimización fiscal, preparación para M&A, entrada de inversores, separación de riesgos, gestión patrimonial personal de los fundadores]

**Parte 1 — Por qué la arquitectura corporativa importa**
Explica las consecuencias de una arquitectura corporativa mal diseñada: responsabilidad cruzada entre entidades sin propósito, complejidad fiscal sin beneficio, dificultad para introducir inversores en una entidad sin afectar a todas las demás, imposibilidad de vender una línea de negocio sin vender el grupo completo, y el coste de la complejidad administrativa cuando hay muchas entidades sin razón de ser.

**Parte 2 — El modelo holdco/opco**
El esquema más habitual en grupos medianos: una sociedad holding (holdco) que posee las participaciones de las sociedades operativas (opco). Explica:
- Las ventajas de la holdco: separación de riesgos, gestión centralizada de dividendos, régimen de participación-exención en muchas jurisdicciones
- Cuándo tiene sentido añadir una subcorporate (holdco intermedia) y cuándo sobredimensiona la estructura
- Cómo fluyen los dividendos desde las opcos a la holdco y desde la holdco a los socios personas físicas
- Las implicaciones de la estructura de préstamos intercompañía y los precios de transferencia que las acompañan

**Parte 3 — Entidades especiales: IP, inmobiliaria, financiera**
Las entidades especializadas que aparecen en grupos más sofisticados:
- **Sociedad de IP**: centralizar las marcas, patentes o software en una entidad que licencia a las operativas, las condiciones para que sea una estructura legítima y no una erosión de base imponible
- **Sociedad inmobiliaria**: separar los activos inmuebles de la operativa para protegerlos de los riesgos del negocio y optimizar la transmisión patrimonial
- **Sociedad financiera/tesorería**: gestionar la tesorería del grupo de forma centralizada, los cash pools y las implicaciones de los préstamos entre entidades a tipos de mercado

**Parte 4 — Consolidación contable**
Los principios de la consolidación contable para el grupo: eliminación de operaciones intragrupo, el tratamiento de las participaciones en subsidiarias, los minoritarios (non-controlling interests) y cómo la consolidación transforma un conjunto de balances individuales en la imagen financiera real del grupo. Las implicaciones para el reporting a inversores y para los convenants bancarios.

**Parte 5 — Preparación para eventos corporativos**
Cómo la arquitectura debe prepararse para los eventos que van a llegar: la entrada de un fondo de private equity o venture capital (qué estructura prefieren los fondos, el papel de la holdco vehicular de inversión), la venta de una línea de negocio (ring-fencing, carve-out y cómo la arquitectura facilita o complica la venta), y la transmisión intergeneracional (protocolo familiar y el papel de la holdco como mecanismo de gobernanza familiar).

**Entregable**
Para mi situación, propón la arquitectura corporativa recomendada con un diagrama de la estructura de entidades, el flujo de dividendos, las razones de ser de cada entidad y las tres decisiones de estructura que debo tomar primero y que tienen mayor impacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar y optimizar la estructura corporativa de un grupo empresarial',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Arquitectura contractual',
                'description'       => 'Diseña el marco contractual de una relación comercial compleja: el orden de prevalencia de documentos, las coberturas cruzadas y la estructura que protege ante los escenarios de conflicto más habituales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mercantilista con experiencia en el diseño de marcos contractuales para relaciones comerciales complejas: contratos de distribución internacional, acuerdos de desarrollo tecnológico, contratos de prestación de servicios de larga duración y marcos de colaboración entre empresas.

Nota importante: Este análisis tiene carácter educativo y no constituye asesoramiento jurídico. Las decisiones contractuales deben revisarse con abogados especializados en las jurisdicciones aplicables.

Contexto de la relación comercial:
- Tipo de relación: [distribución, desarrollo de software, prestación de servicios IT, licencia de tecnología, partnership comercial, joint venture, otro]
- Partes involucradas y sus jurisdicciones: [empresa A (país) y empresa B (país), y si hay más partes]
- Duración prevista de la relación: [plazo del contrato y renovaciones]
- Valor económico de la relación: [volumen anual aproximado]
- Principal activo o prestación en juego: [software, know-how, datos, distribución exclusiva, marca, otro]
- Principal riesgo que me preocupa: [impago, incumplimiento de exclusividad, fuga de know-how, cambio de control, insolvencia de la contraparte, litigio internacional]

**Parte 1 — La arquitectura como conjunto de documentos**
La mayoría de las relaciones comerciales complejas no se rigen por un único contrato sino por un marco de documentos. Explica el diseño de este marco:
- El **Acuerdo Marco** (Master Agreement): el documento padre que establece las condiciones generales, la estructura de responsabilidad y las cláusulas que aplican a toda la relación
- Las **Órdenes de Trabajo o Declaraciones de Alcance** (SOWs/Work Orders): los documentos específicos por proyecto o servicio que se ejecutan bajo el Acuerdo Marco
- Los **Anexos técnicos**: especificaciones, SLAs, políticas de seguridad, procedimientos de escalado
- Los **Acuerdos de Confidencialidad** (NDAs): si están integrados en el Acuerdo Marco o son documentos independientes y por qué

**Parte 2 — El orden de prevalencia**
La cláusula de jerarquía de documentos es crítica y muchas veces está mal redactada. Explica cómo definir el orden de prevalencia cuando hay conflicto entre el Acuerdo Marco, los anexos y las SOWs: cuándo el documento más reciente debe prevalecer y cuándo el más general debe proteger frente a las específicas, y la redacción concreta que resuelve la ambigüedad.

**Parte 3 — Las cláusulas que determinan el equilibrio de poder**
Las cláusulas que definen quién tiene el poder en la relación y cómo se distribuyen los riesgos:
- **Limitación de responsabilidad**: el cap de responsabilidad, las exclusiones y las carve-outs (los casos donde el cap no aplica: fraude, confidencialidad, propiedad intelectual)
- **Indemnizaciones cruzadas**: quién indemniza a quién en qué casos y el alcance del deber de indemnización
- **Propiedad intelectual**: quién es propietario de los desarrollos realizados durante la relación, los derechos de uso del background IP y los trabajos por encargo
- **Exclusividad y no competencia**: cómo delimitar los compromisos de exclusividad para que sean ejecutables y no sobredimensionados
- **Cambio de control**: el right to terminate por cambio de control y cuándo es legítimo exigirlo

**Parte 4 — Los escenarios de conflicto y su cobertura contractual**
Los escenarios de conflicto más habituales y cómo el contrato debe cubrirlos:
- Impago: penalizaciones, acumulación de intereses, derecho de suspensión de servicio y terminación por causa
- Incumplimiento del SLA: el crédito de servicio como remedio proporcional antes de escalar a terminación
- Insolvencia de la contraparte: cláusulas ipso facto (terminación automática por insolvencia) y su ejecutabilidad en distintas jurisdicciones
- Filtración de información confidencial: medidas cautelares sin necesidad de acreditar daño económico

**Parte 5 — La resolución de disputas**
La cláusula de resolución de disputas que más se ignora al firmar y que más importa cuando hay un conflicto: el escalonamiento (negociación, mediación, arbitraje o jurisdicción ordinaria), la elección de la sede arbitral y las reglas (ICC, AAA, LCIA, CIMA), la ley aplicable y la jurisdicción para medidas cautelares urgentes.

**Entregable**
Para mi relación comercial específica, diseña: el índice de los documentos del marco contractual con la función de cada uno, las cinco cláusulas donde debo negociar con mayor firmeza y la posición razonable en cada una, y los tres escenarios de conflicto más probables con la cobertura contractual que necesito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar el marco contractual de una relación comercial compleja con coberturas adecuadas',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Arquitectura de la organización de CS',
                'description'       => 'Diseña el equipo de customer success: segmentación de cartera, ratios CSM-clientes, escalas de engagement y los modelos de cobertura que equilibran coste y calidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como VP de Customer Success con experiencia construyendo organizaciones de CS desde cero en SaaS B2B, incluyendo la transición de un modelo de soporte reactivo a uno de éxito proactivo y los cambios de estructura que exige cada fase de crecimiento.

Contexto de mi organización de CS actual:
- ARR actual y número de clientes: [ARR en euros/dólares y número de cuentas activas]
- Distribución de la cartera por ACV: [qué porcentaje del ARR viene de clientes grandes, medianos y pequeños]
- Estructura actual del equipo de CS: [número de CSMs, si hay Technical Account Managers, onboarding specialists, etc.]
- Tasa de churn actual (revenue y logotipo): [porcentaje de churn anual]
- Principales razones de churn identificadas: [enumera las 2-3 razones principales]
- NPS o CSAT actual: [si lo mides, el dato]
- CRM/plataforma de CS: [Gainsight, Totango, ChurnZero, HubSpot, Salesforce, hojas de cálculo]

**Parte 1 — Los modelos de cobertura de CS**
Explica los tres modelos de cobertura y cuándo tiene sentido cada uno:
- **High-touch**: relación personalizada con un CSM dedicado, adecuado para clientes de alto ACV donde el coste del CSM es proporcional al riesgo de churn
- **Tech-touch**: automatización de las intervenciones mediante triggers basados en datos de uso, health scores y eventos del ciclo de vida, sin un CSM dedicado
- **Low-touch o hybrid**: una combinación donde la automatización cubre el volumen y el CSM interviene en momentos críticos (onboarding, renovación, riesgo)

El principio que gobierna la elección: el coste de servicio de un segmento no debe superar un porcentaje razonable del ACV de ese segmento (generalmente entre el 10% y el 20%). Calcula este ratio para mi cartera.

**Parte 2 — La segmentación de cartera**
El diseño de la segmentación de clientes que determina quién recibe qué nivel de servicio:
- Los criterios de segmentación más efectivos: ACV, potencial de expansión, complejidad de la implementación, estratégico vs. transaccional, madurez del cliente en el uso del producto
- Cuántos segmentos tiene sentido crear y el riesgo de sobre-segmentar
- Cómo gestionar los clientes que están en la frontera entre segmentos
- La revisión periódica de la segmentación y cuándo reclasificar una cuenta

**Parte 3 — Los ratios CSM-clientes y su calibración**
Los ratios típicos por segmento y las variables que los determinan:
- Enterprise (>100K ACV): entre 1:5 y 1:15 dependiendo de la complejidad
- Mid-Market (20K-100K ACV): entre 1:20 y 1:50
- SMB (<20K ACV): entre 1:100 y 1:200 con soporte tech-touch

Cómo calcular el ratio correcto para mi situación: el tiempo medio por cuenta por mes, las actividades de alto valor que no se pueden eliminar y las que se pueden automatizar.

**Parte 4 — Las escalas de engagement**
Los touchpoints estructurados del ciclo de vida del cliente:
- **Onboarding**: las primeras 90 días, los hitos de activación y cómo medir el time-to-value
- **Business review (QBR/EBR)**: la cadencia, el formato y las preguntas que hacen que el cliente vea valor en la reunión y no la cancele
- **Health score y early warning system**: los indicadores de uso, las señales de riesgo y la automatización de las alertas
- **Renovación**: el proceso de renovación que empieza 90 días antes y los playbooks para las renovaciones en riesgo

**Parte 5 — El diseño del equipo**
Los roles que necesito en cada fase de crecimiento:
- De 0 a 5M ARR: el perfil del CS generalista y por qué la especialización temprana es un error
- De 5M a 20M ARR: la separación entre onboarding specialists y CSMs de renovación, el primer Technical Account Manager
- De 20M a 50M ARR: la estructura de equipo con lead CSMs, el role de CS Operations y la incorporación de Digital CS

**Entregable**
Para mi situación, diseña: la segmentación de cartera con los criterios concretos, el modelo de cobertura por segmento, los ratios objetivo para el próximo año y el plan de contratación del equipo de CS para los próximos 12 meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar la estructura del equipo de customer success que equilibra coste de servicio y retención',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Arquitecto de soluciones freelance',
                'description'       => 'El nicho del arquitecto independiente que evalúa, diseña y valida soluciones técnicas sin implementar: la propuesta de valor, los clientes y las tarifas del rol más estratégico del mercado tech.',
                'prompt_content'    => <<<'PROMPT'
Actúa como arquitecto de soluciones freelance senior con cartera de clientes establecida, que ha pasado de ser desarrollador senior a consultor estratégico y ha recorrido el camino de definir el nicho, construir la propuesta de valor y posicionarse en el punto del mercado donde el conocimiento técnico tiene el precio más alto.

Contexto de mi situación actual:
- Experiencia técnica principal: [lenguajes, plataformas, sectores donde has trabajado más]
- Años de experiencia como técnico: [número]
- Situación actual: [empleado que quiere hacer la transición, freelance técnico que quiere subir en la cadena de valor, ya haciendo algo de consultoría sin estructura]
- Tipo de clientes con los que has trabajado: [startups, pymes, enterprise, agencies, sector público]
- Principal diferenciación técnica: [dónde eres mejor que la mayoría: cloud architecture, seguridad, data engineering, integraciones, otro]
- Objetivo de facturación anual: [rango objetivo]

**Parte 1 — La propuesta de valor del arquitecto de soluciones independiente**
Explica qué vende exactamente un arquitecto de soluciones freelance que no vende un desarrollador o un consultor generalista: no vende tiempo de implementación sino la reducción de riesgo en decisiones técnicas. El cliente paga por no cometer errores de arquitectura que cuestan diez veces más de corregir en producción que en papel.

La propuesta de valor concreta: la empresa necesita tomar una decisión técnica importante (elegir la plataforma cloud, diseñar el sistema de integración, evaluar si la arquitectura actual puede escalar, hacer due diligence técnica de una adquisición) y necesita a alguien que sepa más que sus ingenieros internos y que no tenga el sesgo de haber construido el sistema que está siendo evaluado.

**Parte 2 — Los perfiles de cliente que necesitan este servicio**
Los segmentos donde el arquitecto independiente tiene más probabilidades de encontrar clientes y ganar bien:
- **Empresas medianas en transformación tecnológica**: tienen presupuesto, tienen problemas técnicos serios y no pueden contratar un CTO senior
- **Fondos de PE/VC con portfolio tecnológico**: necesitan due diligence técnica en adquisiciones y evaluaciones de madurez técnica del portfolio
- **Startups pre-Series B**: el CTO necesita validación externa de sus decisiones antes de presentarlas a los inversores
- **Agencias de desarrollo**: subcontratan la figura de arquitecto para propuestas que requieren credibilidad técnica que no tienen internamente
- **Empresas corporativas con iniciativas de transformación digital**: el departamento de IT tiene suficiente con el día a día y necesita capacidad externa para los proyectos estratégicos

**Parte 3 — Los servicios y su packaging**
Los servicios que se pueden estructurar con precios fijos y entregables claros:
- **Architectural review**: análisis del sistema existente con informe de riesgos y recomendaciones (2-5 días, precio fijo)
- **Technology selection**: evaluación de opciones con criterios ponderados y recomendación razonada (1-3 días)
- **Due diligence técnica**: para M&A o entrada de inversores, análisis del stack, la deuda técnica y el equipo (3-10 días)
- **Architecture blueprint**: diseño de la arquitectura objetivo para un nuevo sistema o migración (5-15 días)
- **Advisory retainer**: disponibilidad mensual para consultas, revisión de decisiones y validaciones (tarifa mensual fija)

Para cada servicio, explica el entregable, el cliente típico y el rango de precio que el mercado acepta.

**Parte 4 — Las tarifas y la mentalidad de pricing**
La transición de vender tiempo (tarifa por hora o día) a vender valor (precio por proyecto o retainer). Por qué el arquitecto independiente no debería fijar tarifas por hora sino por proyecto con un scope definido, y cómo eso cambia la conversación con el cliente de "¿cuántas horas son?" a "¿qué resultado necesitas?"

Los rangos de mercado actuales para arquitectos senior en Europa: daily rates de 800-1.500€ para el mercado corporativo, project fees de 5.000-25.000€ para reviews y blueprints, retainers de 3.000-8.000€/mes para advisory continuado.

**Parte 5 — La transición desde el rol técnico**
El camino práctico para hacer la transición: los primeros clientes (los más fáciles de conseguir y por qué), cómo cobrar los primeros proyectos aunque no tengas track record como arquitecto, los casos de uso que hay que documentar desde el primer proyecto para construir el portfolio, y la presencia online que atrae a los clientes correctos (LinkedIn, artículos técnicos, conferencias).

**Entregable**
Para mi perfil específico, diseña: los dos servicios con los que debo comenzar (con su scope, entregables y precio inicial), el perfil del primer cliente ideal para conseguir en los próximos 60 días y el plan de 90 días para hacer la transición con riesgo controlado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir una práctica freelance como arquitecto de soluciones con tarifas de consultor senior',
                'vote_score'        => 44,
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
