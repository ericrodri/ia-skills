<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills530Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de arte generativo con IA para galerías y museos',
                'description'       => 'Diseña campañas de marketing para exposiciones de arte generativo con IA, atraer nuevas audiencias y posicionar la marca cultural.',
                'prompt_content'    => <<<'EOT'
Actúa como director de marketing especializado en instituciones culturales y arte digital, con experiencia en conectar el arte generativo con IA con audiencias tanto tradicionales como digitales.

Trabajo en el marketing de una galería, museo o espacio cultural que está incorporando arte generativo con IA en su programación, y necesito estrategias para comunicarlo y atraer audiencias.

**Contexto de la institución:**
- Tipo de institución: [galería privada, museo público, espacio cultural alternativo, sala de exposiciones]
- Audiencia actual: [perfil del visitante habitual: edad, intereses, nivel de conocimiento de arte digital]
- Audiencia objetivo con el arte IA: [qué nuevos públicos queremos atraer: jóvenes, entusiastas de tecnología, coleccionistas digitales]
- Exposición o proyecto a comunicar: [descripción breve de la propuesta artística con IA]
- Presupuesto de marketing: [rango aproximado]

**Lo que necesito:**

1. **Narrativa de comunicación:**
   - Ayúdame a construir la narrativa de comunicación del arte generativo con IA para una audiencia que puede ser escéptica o no familiarizada con la IA como medio artístico.
   - Cómo hablar del proceso creativo del artista cuando usa IA: qué rol juega el artista, qué aporta la IA, cómo responder a "¿no lo hace todo la máquina?".
   - Dame 5 ángulos de historia (story angles) para pitch a medios de comunicación generalistas y especializados.

2. **Estrategia de contenido digital:**
   - Diseña una estrategia de contenido para Instagram, TikTok y YouTube que muestre el proceso de creación del arte con IA de manera visual y atractiva.
   - Qué tipo de contenido genera más engagement para exposiciones de arte digital (behind the scenes, time-lapses del proceso de generación, entrevistas con el artista sobre su relación con la IA).
   - Cómo usar IA para generar variaciones de material gráfico de la exposición para diferentes formatos y redes sociales.

3. **Captación de nuevas audiencias:**
   - Estrategia para atraer al público de tecnología y startups que no suele visitar museos.
   - Cómo colaborar con comunidades de IA (Discord de arte generativo, Twitter/X de AI art) para generar visibilidad orgánica.
   - Ideas de eventos o activaciones alrededor de la exposición que creen experiencia más allá de la visita tradicional.

4. **Marketing de la experiencia:**
   - Cómo comunicar la experiencia interactiva si la hay (obras generativas en tiempo real, participación del visitante).
   - Ideas para crear momentos "instagrameables" que el visitante comparta orgánicamente.

5. **Métricas de éxito:**
   - Qué KPIs de marketing debo fijar para esta campaña: visitas, engagement en RRSS, cobertura en medios, captación de nuevos perfiles de visitante.

Dame también textos de muestra para el dossier de prensa y la descripción de la exposición en la web.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Marketing cultural para exposiciones de arte generativo con IA',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo de plataformas de arte digital y NFTs con IA',
                'description'       => 'Diseña la arquitectura técnica de una plataforma de arte digital con IA, gestión de NFTs y derechos de propiedad intelectual.',
                'prompt_content'    => <<<'EOT'
Actúa como arquitecto de software especializado en plataformas de arte digital, tecnología blockchain y sistemas de gestión de derechos digitales para el sector cultural.

Necesito tu ayuda para diseñar la arquitectura técnica de una plataforma que combine arte generado con IA, tokenización en NFTs y gestión de derechos de propiedad intelectual.

**Descripción del proyecto:**
- Tipo de plataforma: [marketplace de NFTs de arte IA, plataforma de artistas digitales, galería virtual con tokenización, herramienta de creación colaborativa]
- Usuarios objetivo: [artistas, coleccionistas, instituciones culturales, público general]
- Funcionalidades principales requeridas: [lista de features clave]
- Presupuesto de desarrollo: [rango]
- Plazo de lanzamiento: [meses]

**Lo que necesito diseñar:**

1. **Arquitectura del sistema de generación de arte con IA:**
   - Cómo integrar modelos de IA generativa (Stable Diffusion, DALL-E, Midjourney API, modelos propios) en la plataforma de manera escalable.
   - Arquitectura de cola de trabajos para gestionar la generación de arte en paralelo sin degradar el rendimiento.
   - Cómo almacenar y servir las obras generadas (opciones: S3, IPFS, Arweave) con sus metadatos.
   - Consideraciones de caché y CDN para servir arte digital de alta resolución globalmente.

2. **Sistema de NFTs y blockchain:**
   - Qué blockchain elegir para mintear los NFTs (Ethereum, Polygon, Solana, Tezos) con análisis de pros y contras según mi caso de uso.
   - Cómo estructurar los smart contracts para los NFTs del arte: metadatos on-chain vs off-chain, royalties automáticos al artista, transferencia de derechos.
   - Cómo gestionar el wallet del usuario sin que necesite conocimientos técnicos de blockchain (custodial wallet vs non-custodial, social login con blockchain).

3. **Sistema de gestión de derechos de propiedad intelectual:**
   - Cómo registrar automáticamente la autoría de las obras generadas con IA en la plataforma.
   - Qué información debe incluir el certificado digital de autenticidad de una obra de arte IA.
   - Cómo gestionar las licencias de uso de las obras: qué puede hacer el comprador, qué derechos retiene el artista.
   - Integración con registros de propiedad intelectual existentes.

4. **Stack tecnológico recomendado:**
   - Backend, frontend, base de datos, indexación de blockchain, APIs de pago (fiat y cripto).
   - Herramientas de IA para moderación de contenido generado (evitar deepfakes o contenido inapropiado).

5. **Consideraciones de seguridad y escalabilidad:**
   - Principales vectores de ataque en plataformas de NFTs y cómo mitigarlos.
   - Cómo escalar la plataforma cuando el volumen de obras generadas y transacciones crece exponencialmente.

Incluye un diagrama de arquitectura en texto (usando ASCII o notación de cajas) y las decisiones técnicas clave con su justificación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Arquitectura técnica de plataformas de arte digital con IA y NFTs',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencias culturales inmersivas con IA',
                'description'       => 'Conceptualiza y diseña experiencias inmersivas para museos y espacios culturales usando IA generativa y tecnologías interactivas.',
                'prompt_content'    => <<<'EOT'
Actúa como diseñador de experiencias interactivas e inmersivas especializado en instalaciones culturales con inteligencia artificial, realidad aumentada y proyección monumental.

Necesito tu ayuda para conceptualizar y diseñar una experiencia cultural inmersiva que use IA generativa como elemento central de la experiencia del visitante.

**Contexto del proyecto:**
- Tipo de espacio: [museo, galería, sala de exposiciones, espacio público exterior, edificio histórico]
- Dimensiones del espacio: [metros cuadrados aproximados, altura, forma]
- Tema o contenido cultural que explorar: [historia, obra de un artista, fenómeno natural, tema social, patrimonio cultural]
- Audiencia objetivo: [perfil del visitante esperado]
- Presupuesto tecnológico estimado: [rango]
- Duración de la exposición: [temporal o permanente]

**Lo que necesito que diseñes:**

1. **Concepto de la experiencia:**
   - Desarrolla el concepto creativo central de la experiencia inmersiva, incluyendo la idea generadora, la narrativa que vivirá el visitante y cómo la IA transforma la experiencia.
   - Describe el "momento wow" de la experiencia: ese instante que el visitante recordará y compartirá.
   - Cómo la IA genera contenido en tiempo real que responde al visitante (movimiento, voz, número de personas, tiempo del día).

2. **Diseño de la experiencia paso a paso:**
   - Diseña el journey del visitante desde que entra al espacio hasta que sale, con cada fase, duración estimada e interacción con la IA.
   - Qué sensaciones o emociones debe provocar cada fase de la experiencia.
   - Cómo la experiencia es diferente para cada visitante gracias a la IA generativa (personalización en tiempo real).

3. **Diseño de sistemas interactivos:**
   - Qué sensores y tecnologías de captura propones (cámaras de profundidad, micrófonos, sensores de movimiento, reconocimiento facial ético).
   - Cómo la IA procesa los datos del visitante y genera respuestas visuales y sonoras en tiempo real.
   - Qué herramientas de IA generativa recomiendas para la generación de imágenes, sonido o texto en tiempo real.

4. **Consideraciones de accesibilidad e inclusión:**
   - Cómo hacer la experiencia accesible para visitantes con discapacidades visuales, auditivas o de movilidad.
   - Cómo gestionar situaciones de alta afluencia (experiencia diseñada para 1 persona vs grupos).

5. **Producción y tecnología:**
   - Qué equipos de proyección, pantallas o dispositivos recomiendas para el espacio descrito.
   - Infraestructura técnica necesaria: servidores locales vs cloud, latencia aceptable para la respuesta en tiempo real.
   - Plan de mantenimiento y actualización del contenido generativo.

Incluye referencias de instalaciones inmersivas con IA que hayan funcionado bien (teamLab, Random International, Es Devlin) como inspiración contextualizada.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Conceptualización y diseño de experiencias culturales inmersivas con IA generativa',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas de arte digital con IA a coleccionistas y empresas',
                'description'       => 'Desarrolla tu proceso de ventas consultivas para arte digital con IA dirigido a coleccionistas privados y colecciones corporativas.',
                'prompt_content'    => <<<'EOT'
Actúa como asesor de arte especializado en el mercado de arte digital y NFTs, con experiencia en ventas consultivas a coleccionistas privados e instituciones que están construyendo colecciones de arte digital con IA.

Necesito tu ayuda para desarrollar un proceso de ventas efectivo para arte digital generado con IA, dirigido a compradores que pueden ir desde coleccionistas jóvenes digitales hasta empresas que buscan arte para sus espacios corporativos.

**Contexto de mi propuesta:**
- Tipo de arte digital que vendo: [arte generativo con IA de autor, ediciones limitadas, instalaciones digitales, NFTs de artistas emergentes]
- Rango de precios: [desde X hasta Y euros/dólares]
- Canales actuales: [galería física, plataforma online, ferias de arte, redes sociales]
- Perfil de clientes actuales: [si ya tienes algunos, descríbelos]
- Principales objeciones que encuentras: [ej: "no entiendo el valor", "no sé si sube de valor", "¿qué compro exactamente?"]

**Lo que necesito:**

1. **Educación del comprador como base de la venta:**
   - Diseña una narrativa educativa para explicar el valor del arte digital con IA a compradores no familiarizados.
   - Cómo responder a "¿esto lo ha hecho una máquina o un artista?" de manera que refuerce el valor de la obra.
   - Argumentario para justificar el precio de una obra de arte digital con IA frente a arte físico tradicional.

2. **Proceso de venta consultiva:**
   - Diseña las fases del proceso de venta: descubrimiento del cliente, presentación personalizada, gestión de objeciones y cierre.
   - Qué preguntas hacer en la primera reunión para entender el perfil del coleccionista, su motivación de compra y su nivel de conocimiento del arte digital.
   - Cómo presentar una obra de arte digital de manera que transmita su valor (visualización, contexto del artista, proceso de creación con IA).

3. **Propuesta de valor para colecciones corporativas:**
   - Cómo vender arte digital con IA a empresas para sus oficinas, lobbies o colecciones corporativas.
   - Argumentos de branding, innovación y employer branding que conectan con los decisores empresariales.
   - Cómo estructurar propuestas de instalaciones de arte digital permanentes o rotativas para espacios corporativos.

4. **Gestión de la transacción:**
   - Qué debe incluir el contrato de venta de una obra de arte digital con IA (derechos de exhibición, reproducción, reventa).
   - Cómo gestionar la transferencia de NFTs o certificados de autenticidad de manera simple para el comprador.
   - Opciones de financiación o pago fraccionado para obras de alto valor.

5. **Fidelización y mercado secundario:**
   - Cómo mantener la relación con el coleccionista después de la venta para convertirlo en comprador recurrente.
   - Cómo gestionar el mercado secundario si el coleccionista quiere revender la obra.

Dame también una guía de preguntas frecuentes del comprador de arte digital con IA y respuestas modelo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Proceso de ventas consultivas de arte digital con IA a coleccionistas y empresas',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management de plataformas culturales digitales con IA',
                'description'       => 'Define la estrategia de producto de una plataforma cultural digital que usa IA para personalizar la experiencia y ampliar el acceso a la cultura.',
                'prompt_content'    => <<<'EOT'
Actúa como Product Manager especializado en plataformas digitales culturales, con experiencia en productos que democratizan el acceso al arte, la música, la literatura y el patrimonio cultural usando inteligencia artificial.

Necesito tu ayuda para definir la estrategia de producto de una plataforma cultural digital que usa IA como palanca de personalización, descubrimiento y creación.

**Contexto de la plataforma:**
- Tipo de plataforma: [streaming de cultura, museo virtual, plataforma de creación artística, archivo de patrimonio digital, app de aprendizaje artístico]
- Usuarios objetivo: [descripción del usuario principal y secundario]
- Propuesta de valor principal: [qué problema cultural resuelve]
- Estado actual: [idea, MVP lanzado, plataforma en crecimiento]
- Competidores o referencias: [plataformas similares que admiras o contra las que compites]

**Lo que necesito definir:**

1. **Visión y estrategia de producto:**
   - Ayúdame a articular la visión de producto a 3 años: qué experiencia cultural única habrá creado la IA que hoy no es posible.
   - Cómo posicionar la IA no como tecnología sino como servicio al usuario (la IA que entiende tu gusto artístico, la IA que te conecta con obras que no conocías).
   - Cuál es el diferenciador de IA que ningún competidor cultural tiene hoy y cómo construir ese moat tecnológico.

2. **Funcionalidades de IA con mayor impacto en usuarios:**
   - Recomendación personalizada de contenido cultural (arte, música, exposiciones, libros) basada en comportamiento e historial.
   - Generación de contenido educativo personalizado sobre obras de arte o artistas según el nivel de conocimiento del usuario.
   - Traducción y adaptación cultural de contenido para audiencias globales.
   - Herramientas de creación asistida por IA para que los usuarios creen su propio arte, música o escritura.

3. **Modelo de crecimiento:**
   - Qué loops de crecimiento construye la IA en una plataforma cultural (creación de contenido por usuarios, colecciones compartidas, recomendaciones sociales).
   - Cómo monetizar la plataforma sin comprometer la accesibilidad cultural (freemium, suscripción, partnership con instituciones).
   - Estrategia de contenido y partnerships con museos, galerías y artistas para construir el catálogo.

4. **Métricas de producto:**
   - Qué métricas de engagement son específicas de plataformas culturales (profundidad de exploración, diversidad de géneros consumidos, creaciones generadas).
   - Cómo medir si la IA está mejorando genuinamente el descubrimiento cultural vs simplemente crear cámaras de eco.

5. **Consideraciones éticas del producto:**
   - Cómo garantizar que la IA no homogeneiza el gusto cultural sino que amplía la diversidad de lo que los usuarios descubren.
   - Cómo gestionar los derechos de los artistas cuando la IA usa sus obras para entrenar modelos de recomendación o creación.

Incluye un ejemplo de roadmap trimestral para los primeros 12 meses con las funcionalidades de IA priorizadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Estrategia de producto para plataformas culturales digitales con IA',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'RRHH para organizaciones culturales en la era de la IA creativa',
                'description'       => 'Gestiona el impacto de la IA generativa en los roles creativos de tu organización cultural: formación, nuevos perfiles y gestión del cambio.',
                'prompt_content'    => <<<'EOT'
Actúa como director de Recursos Humanos especializado en organizaciones del sector cultural y creativo, con experiencia en gestionar la transición de equipos de artistas, diseñadores y creadores hacia un entorno de trabajo con inteligencia artificial generativa.

Necesito tu ayuda para gestionar el impacto de la IA generativa en los equipos creativos de mi organización cultural.

**Contexto de la organización:**
- Tipo de organización: [museo, galería, productora audiovisual, editorial, estudio de diseño, agencia creativa]
- Número de empleados creativos afectados: [cantidad y perfiles: diseñadores, ilustradores, redactores, fotógrafos, curators]
- Estado actual de adopción de IA: [ninguno, experimental, algunos la usan ya]
- Principal preocupación del equipo: [miedo a ser reemplazados, incertidumbre sobre el futuro de su rol, rechazo ético a la IA]
- Posición de la dirección: [quiere implementar IA agresivamente, quiere hacerlo con cuidado, no tiene posición clara]

**Lo que necesito:**

1. **Diagnóstico del impacto de la IA en los roles creativos:**
   - Analiza qué tareas de cada perfil creativo (diseñador gráfico, redactor, fotógrafo, ilustrador, curator) son más susceptibles de ser automatizadas por IA y cuáles se vuelven más valiosas.
   - Cómo comunicar este análisis al equipo de manera honesta sin generar pánico.
   - Cómo identificar qué empleados tienen más potencial para evolucionar hacia roles de "director creativo de IA" o "curador de contenido generativo".

2. **Plan de formación en IA para creativos:**
   - Diseña un plan de formación de 3 meses para que el equipo creativo aprenda a usar herramientas de IA generativa en su trabajo diario.
   - Cómo personalizar la formación según el perfil: diseñadores gráficos (Midjourney, Adobe Firefly), redactores (Claude, ChatGPT), fotógrafos (Lightroom AI, Generative Fill).
   - Qué indicadores de adopción usar para saber si la formación está funcionando.

3. **Redefinición de roles y nuevos perfiles:**
   - Qué nuevos perfiles creativos necesita una organización cultural en la era de la IA (AI Art Director, Prompt Engineer para arte, Curator de Arte Generativo).
   - Cómo redefinir los roles existentes incorporando responsabilidades de IA sin que parezca una sobrecarga.
   - Cómo gestionar las expectativas salariales cuando los empleados se vuelven más productivos con IA.

4. **Gestión ética de la IA en el trabajo creativo:**
   - Cómo establecer una política de uso ético de IA en la organización: qué está permitido, qué debe declararse, cómo proteger la autoría.
   - Cómo gestionar el debate ético dentro del equipo creativo sobre la legitimidad del arte generado con IA.

5. **Atracción de nuevo talento:**
   - Qué perfiles de talento debo buscar que combinen habilidades creativas con dominio de IA.
   - Cómo posicionar mi organización cultural como un lugar atractivo para trabajar en la intersección del arte y la IA.

Dame también un protocolo de conversación individual para hablar con cada empleado creativo sobre el impacto de la IA en su rol específico.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestión del talento creativo y adopción de IA en organizaciones culturales',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financiación de proyectos culturales con IA: subvenciones y nuevos modelos',
                'description'       => 'Explora modelos de financiación para proyectos de arte e IA: subvenciones públicas, crowdfunding cultural y nuevos modelos de ingresos digitales.',
                'prompt_content'    => <<<'EOT'
Actúa como gestor cultural y especialista en financiación de proyectos artísticos y culturales, con experiencia en combinar subvenciones públicas, financiación privada y nuevos modelos de ingresos digitales para proyectos en la intersección del arte y la inteligencia artificial.

Necesito tu ayuda para diseñar la estrategia de financiación de mi proyecto cultural con IA.

**Descripción del proyecto:**
- Tipo de proyecto: [exposición de arte IA, plataforma cultural digital, investigación artística, instalación pública, formación en arte digital]
- Presupuesto total necesario: [importe]
- Fase del proyecto: [idea, desarrollo, prototipo, lanzamiento]
- País y región donde se desarrolla: [importante para identificar convocatorias públicas]
- Equipo: [artistas, tecnólogos, gestores culturales involucrados]
- Duración del proyecto: [meses o años]

**Lo que necesito:**

1. **Mapa de financiación pública disponible:**
   - Qué fondos europeos aplican a proyectos de arte e IA (Creative Europe, Horizon Europe, fondos estructurales).
   - Qué convocatorias de subvención nacionales y regionales suelen financiar proyectos de arte digital en España (INAEM, fondos autonómicos, ayuntamientos).
   - Cómo usar IA para analizar bases de convocatorias y evaluar el encaje de mi proyecto antes de invertir tiempo en la solicitud.

2. **Construcción de la narrativa de la solicitud:**
   - Cómo redactar la descripción del proyecto para que conecte con los criterios de evaluación de subvenciones culturales (impacto social, innovación, accesibilidad, internacionalización).
   - Cómo explicar el rol de la IA en el proyecto de manera que los evaluadores no técnicos lo entiendan y valoren.
   - Qué indicadores de impacto son más convincentes en solicitudes de subvención cultural (número de personas alcanzadas, publicaciones, colaboraciones internacionales).

3. **Crowdfunding cultural:**
   - Qué plataformas de crowdfunding son más efectivas para proyectos de arte digital con IA (Verkami, Kickstarter, Patreon, Mirror para proyectos web3).
   - Cómo diseñar las recompensas para donantes que sean atractivas y económicamente viables.
   - Qué estrategia de comunicación y movilización de comunidad necesita una campaña de crowdfunding de arte IA.

4. **Nuevos modelos de ingresos con tokens y NFTs:**
   - Cómo usar la tokenización (NFTs, tokens de membresía) para financiar el proyecto a través de la comunidad.
   - Modelos de ingresos recurrentes para proyectos culturales digitales: suscripción, licencias, royalties de NFTs.
   - Riesgos y consideraciones legales de financiar proyectos culturales con criptomonedas.

5. **Partnerships con marcas y empresas tech:**
   - Cómo identificar y acercarse a empresas tecnológicas interesadas en patrocinar proyectos de arte IA (Adobe, Google Arts, Microsoft, fabricantes de hardware).
   - Qué propuesta de valor ofrecer a los patrocinadores corporativos.

Incluye un calendario de financiación con las convocatorias más relevantes del año y cuándo suelen abrirse.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de financiación para proyectos culturales en la intersección del arte y la IA',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Propiedad intelectual y derechos de autor en el arte generado con IA',
                'description'       => 'Navega el complejo marco legal de la propiedad intelectual cuando obras de arte son creadas con o por inteligencia artificial.',
                'prompt_content'    => <<<'EOT'
Actúa como abogado especialista en propiedad intelectual y derecho de autor con experiencia específica en el campo emergente del arte generado con inteligencia artificial, los NFTs y los derechos digitales en el sector cultural.

Necesito entender el marco legal de la propiedad intelectual cuando creo o comercializo arte generado con IA.

**Mi situación:**
- Rol: [artista que usa IA, galería que vende arte IA, plataforma que aloja arte IA, empresa que usa arte IA en su comunicación]
- Tipo de arte: [imágenes generadas con Midjourney/DALL-E/Stable Diffusion, música generada con IA, texto generado, video sintético, arte colaborativo humano-IA]
- Uso previsto: [venta como NFT, uso comercial en publicidad, exposición cultural, uso en publicaciones]
- País de operación: [España, Unión Europea, Estados Unidos, internacional]

**Lo que necesito que analices:**

1. **¿Quién es el autor del arte generado con IA?**
   - Cuál es el estado actual del derecho de autor sobre obras generadas total o parcialmente por IA en España, la UE y EE.UU.
   - Qué diferencia hay legalmente entre "arte asistido por IA" (humano con herramienta IA) y "arte generado por IA" (mínima intervención humana).
   - Qué nivel de contribución creativa humana es necesario para que una obra de arte IA sea protegible por derechos de autor.
   - Cómo documentar el proceso creativo para demostrar la autoría humana si se cuestiona.

2. **Derechos sobre los datos de entrenamiento:**
   - ¿Los modelos de IA que generan arte han sido entrenados con obras protegidas? ¿Qué implica eso legalmente para el usuario?
   - Cuáles son los principales litigios en curso (Getty vs Stability AI, artistas vs Midjourney) y qué puede aprenderse de ellos.
   - Cómo verificar qué datos de entrenamiento usa el modelo que estoy usando y si tiene acuerdos de licencia con los artistas.

3. **Derechos al comercializar arte IA:**
   - Qué derechos obtengo sobre las imágenes que genero con Midjourney, DALL-E, Stable Diffusion u otras herramientas (varía según las condiciones de cada plataforma).
   - Qué puedo y no puedo hacer comercialmente con arte generado por IA según los términos de servicio de las principales herramientas.
   - Cómo estructurar los contratos de venta de arte IA para proteger tanto al artista como al comprador.

4. **NFTs y registro de propiedad:**
   - Mintear un NFT, ¿otorga derechos de autor o solo derechos de propiedad del token?
   - Cómo estructurar los smart contracts de NFTs para incluir royalties, derechos de exhibición y condiciones de reventa.
   - Qué valor tiene un NFT como prueba de autenticidad y originalidad de una obra de arte IA.

5. **Recomendaciones prácticas:**
   - Qué pasos concretos debo seguir para proteger mis obras de arte IA lo máximo posible con el marco legal actual.
   - Qué cláusulas legales debo incluir en mis términos y condiciones si tengo una plataforma de arte IA.

Nota: Este análisis es orientativo y el marco legal está en constante evolución. Consulta a un abogado especialista para tu caso concreto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Marco legal de propiedad intelectual para arte generado con IA y NFTs',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte y comunidad para plataformas de arte digital con IA',
                'description'       => 'Diseña la estrategia de customer success y comunidad para una plataforma cultural digital con IA que conecta artistas y coleccionistas.',
                'prompt_content'    => <<<'EOT'
Actúa como director de Customer Success especializado en plataformas del sector cultural y creativo, con experiencia en construir comunidades vibrantes de artistas, coleccionistas y entusiastas del arte digital con IA.

Necesito diseñar la estrategia de customer success y comunidad para una plataforma que conecta artistas que usan IA con coleccionistas y amantes del arte digital.

**Contexto de la plataforma:**
- Tipo de plataforma: [marketplace de arte IA, galería virtual, comunidad de artistas digitales, plataforma de aprendizaje de arte con IA]
- Usuarios que atendemos: [artistas que crean con IA, coleccionistas digitales, instituciones culturales, público general interesado en arte]
- Tamaño actual de la comunidad: [número de usuarios registrados]
- Principales problemas de retención: [artistas que no venden, coleccionistas que no encuentran lo que buscan, confusión sobre NFTs y derechos]
- Canales de soporte actuales: [email, chat, Discord, redes sociales]

**Lo que necesito diseñar:**

1. **Onboarding diferenciado por tipo de usuario:**
   - Diseña el flujo de onboarding para artistas: cómo los ayudamos a subir sus primeras obras, configurar su perfil, entender los derechos y empezar a vender.
   - Diseña el flujo de onboarding para coleccionistas: cómo los educamos sobre arte digital con IA, les ayudamos a encontrar artistas y realizar su primera compra.
   - Qué contenido educativo automatizado con IA puede acompañar el onboarding para reducir las consultas de soporte.

2. **Gestión de las consultas más comunes:**
   - Cuáles son las 10 preguntas más frecuentes en plataformas de arte digital con IA y diseña respuestas modelo.
   - Cómo usar un chatbot con IA para resolver el 70% de las consultas sin intervención humana, especialmente las dudas sobre derechos, NFTs y pagos.
   - Protocolo de escalado para consultas complejas (disputas de autoría, transacciones fallidas, obras rechazadas por moderación).

3. **Construcción de comunidad:**
   - Diseña la estrategia de comunidad: canales de Discord o Slack, eventos virtuales, programas de artistas destacados.
   - Cómo usar IA para identificar a los miembros más activos e influyentes de la comunidad y convertirlos en embajadores.
   - Ideas de eventos comunitarios que generen engagement: challenges de arte con IA, exposiciones virtuales, sesiones de feedback entre artistas.

4. **Retención de artistas:**
   - Cómo apoyar a artistas que aún no han vendido nada para que no abandonen la plataforma.
   - Qué herramientas de IA pueden ayudar a los artistas a mejorar sus descripciones de obras, precios y visibilidad.
   - Programa de mentoría entre artistas establecidos y artistas nuevos.

5. **Métricas de comunidad y éxito:**
   - Qué métricas de community health debo monitorizar (DAU/MAU, ratio de artistas activos, tiempo hasta primera venta, NPS de artistas y coleccionistas).
   - Cómo usar IA para detectar señales de churn antes de que el usuario se vaya.

Incluye una plantilla de roadmap de customer success para los primeros 6 meses de la plataforma.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Customer success y comunidad para plataformas de arte digital con IA',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance de arte digital con IA: construye tu negocio creativo',
                'description'       => 'Lanza y monetiza tu práctica freelance de creación artística con IA: posicionamiento, precios, clientes y canales de venta.',
                'prompt_content'    => <<<'EOT'
Actúa como coach de negocios para artistas digitales y creativos freelance, especializado en ayudar a creadores que usan IA a construir negocios sostenibles y rentables con su arte.

Soy un creador que usa herramientas de IA generativa para crear arte digital y quiero construir un negocio freelance sostenible con mi trabajo.

**Mi perfil como creador:**
- Tipo de arte que creo: [ilustración digital con IA, arte generativo, fotografía con IA, diseño con IA, música generativa, video sintético]
- Herramientas que domino: [Midjourney, Stable Diffusion, DALL-E, RunwayML, Suno, etc.]
- Experiencia artística previa: [si tienes formación o experiencia en arte tradicional o diseño]
- Estilo o especialidad: [si tienes un estilo definido o temática preferida]
- Objetivo de ingresos: [mensual deseado]
- Tiempo disponible: [horas por semana para el negocio]

**Lo que necesito construir:**

1. **Propuesta de valor y posicionamiento:**
   - Ayúdame a definir mi nicho específico como artista digital con IA (hay mucha competencia genérica, necesito destacar).
   - Cómo combinar mi estilo artístico personal con las capacidades de IA para crear un lenguaje visual único e inimitable.
   - Dame 3 opciones de posicionamiento con el argumento diferenciador de cada uno.

2. **Fuentes de ingresos a explorar:**
   - Venta de obras originales: NFTs, prints físicos, arte digital en plataformas.
   - Servicios para empresas: ilustración, branding, contenido visual para marketing, diseño de personajes.
   - Licencias de arte: bancos de imágenes, licencias para uso comercial de mi estilo.
   - Formación y comunidad: cursos online, Patreon, workshops de arte con IA.
   - Colaboraciones con marcas: branded content, campañas con artistas.
   - Cuál de estas fuentes tiene más potencial dado mi perfil y cómo priorizarlas.

3. **Estructura de precios:**
   - Cómo fijar precios para mis obras digitales: qué factores considerar (tiempo, exclusividad, uso de la imagen, coleccionabilidad).
   - Estructura de precios para servicios a empresas: tarifa por hora, por proyecto, por campaña.
   - Cómo subir precios progresivamente a medida que creces sin perder clientes actuales.

4. **Captación de clientes y visibilidad:**
   - Dónde debo estar presente para vender mi arte: plataformas de NFTs, marketplaces de arte digital, redes sociales.
   - Estrategia de contenido en redes sociales para artistas de IA: qué publicar, con qué frecuencia, qué formatos funcionan mejor.
   - Cómo usar IA para automatizar parte de mi presencia digital y dedicar más tiempo a crear.

5. **Operativa del negocio freelance:**
   - Qué herramientas de IA necesito para gestionar mi negocio: CRM, facturación, contratos, gestión de proyectos.
   - Cómo proteger mis derechos como creador de arte con IA (contratos con clientes, términos de licencia).
   - Plan de acción para los primeros 90 días para pasar de crear como hobby a ingresar dinero real.

Dame también una plantilla de propuesta comercial para enviar a empresas que buscan arte digital con IA.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Construcción de negocio freelance como artista digital con IA',
                'vote_score'        => 43,
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
