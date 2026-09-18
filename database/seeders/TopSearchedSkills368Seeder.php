<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills368Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1. Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Diseñar una estrategia de marketing de influencers de principio a fin',
                'description'      => 'El marketing de influencers mal planificado quema presupuesto en colaboraciones sin impacto. Aprende a diseñar una estrategia completa: desde la definición de objetivos hasta la selección de creadores, briefing, gestión de campaña y medición de resultados. Consigue colaboraciones que generen tanto alcance como conversión real.',
                'prompt_content'   => <<<'EOT'
Actúa como estratega de marketing de influencers con experiencia en campañas para marcas de consumo y SaaS. Ayúdame a diseñar una estrategia de influencer marketing completa y ejecutable para una campaña específica.

**Contexto de la campaña** (adapta la estrategia a este escenario):
Marca de software de gestión de proyectos B2B orientada a equipos creativos y agencias. Presupuesto de campaña: 20.000 €. Objetivo principal: generar registros de prueba gratuita entre profesionales creativos (diseñadores, directores de arte, project managers en agencias). Duración: 3 meses.

**Lo que necesito**

1. **Estrategia de selección de influencers**: define los criterios para elegir qué tipo de creadores encajan con la campaña. Incluye: tiers de influencers a usar (nano, micro, macro) y por qué, métricas de evaluación (engagement rate mínimo, calidad de audiencia, alineación de valores), nichos de contenido relevantes, y cómo detectar influencers con audiencias infladas o compradas.

2. **Framework de vetting de influencers**: propón un proceso para evaluar a un creador antes de contratarlo. Incluye qué datos revisar (demográficos de audiencia, historial de colaboraciones, calidad del contenido, comentarios), herramientas útiles para el análisis, señales de alerta, y una plantilla de scorecard para comparar candidatos.

3. **Brief de influencer**: escribe un brief completo que dar a los creadores seleccionados. Incluye: contexto de marca, mensajes clave, lo que NO deben decir, ejemplos de contenido que sí funciona, requisitos de disclosure (#ad, #publicidad), formatos y canales requeridos, fechas de entrega y proceso de aprobación.

4. **Plan de distribución presupuestaria**: explica cómo distribuir los 20.000 € entre diferentes tipos de creadores, plataformas, y fases de la campaña. Justifica la distribución con argumentos de impacto esperado.

5. **Sistema de medición y KPIs**: define las métricas principales y secundarias de la campaña. Para cada métrica especifica: cómo medirla, con qué frecuencia, y cuál sería un buen resultado dado el sector y presupuesto. Incluye métricas de alcance, engagement, tráfico generado y conversiones.

6. **Plan de gestión de la relación con creadores**: explica cómo gestionar la relación durante la campaña. Define comunicación esperada, cómo dar feedback sobre el contenido sin matar la autenticidad, qué hacer si un creador incumple el acuerdo, y cómo cultivar relaciones a largo plazo con los mejores performers.

7. **Template de contrato simplificado**: esboza los puntos clave que debe cubrir un contrato o acuerdo de colaboración con un influencer. Incluye: alcance de contenido, derechos de uso, exclusividad, plazos, compensación, disclosure obligatorio y cláusula de indemnización.

**Formato de salida**
Cada sección con su propio encabezado. Las plantillas y scorecards en formato tabla o lista estructurada. El brief de influencer en formato de documento que pueda enviarse directamente a un creador.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategia completa de influencer marketing con selección y medición',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 2. Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Construir una plataforma de gestión de campañas de influencers: arquitectura y APIs',
                'description'      => 'Las marcas y agencias necesitan herramientas para gestionar colaboraciones con creadores a escala. Aprende a diseñar la arquitectura técnica de una plataforma de influencer marketing: desde la integración con APIs de redes sociales hasta el tracking de resultados. Entiende los retos específicos de este tipo de aplicaciones.',
                'prompt_content'   => <<<'EOT'
Actúa como arquitecto de software con experiencia en plataformas de marketing technology (martech) y APIs de redes sociales. Ayúdame a diseñar la arquitectura técnica de una plataforma de gestión de campañas de influencers.

**Descripción del producto**
La plataforma permite a marcas y agencias: descubrir influencers, analizar su perfil y audiencia, gestionar el outreach y los contratos, hacer seguimiento de las publicaciones y medir el ROI de las campañas. Se integra con Instagram, TikTok, YouTube y Pinterest.

**Entregables técnicos que necesito**

1. **Arquitectura del sistema**: diseña la arquitectura de alto nivel de la plataforma. Incluye: servicios principales (descubrimiento, análisis, gestión de campañas, reporting), base de datos recomendada para cada tipo de dato, patrón de integración con las APIs de las redes sociales, y cómo manejar el rate limiting de esas APIs.

2. **Modelo de datos**: diseña el esquema de base de datos para las entidades principales: Influencer, AudienceSnapshot, Campaign, CampaignCollaboration, Content, PerformanceMetric. Para cada entidad define los campos clave y las relaciones entre ellas.

3. **Integración con APIs de redes sociales**: explica los retos específicos de integrar con Instagram Graph API, TikTok for Developers, YouTube Data API y Pinterest API. Para cada una describe: qué datos se pueden obtener, qué limitaciones hay (rate limits, acceso a datos de audiencia), y cómo gestionar los tokens de acceso de los influencers.

4. **Sistema de ingesta y actualización de datos**: diseña un pipeline para mantener actualizados los datos de los influencers. Incluye: qué datos actualizar con qué frecuencia, cómo priorizar la actualización según el tamaño del influencer, cómo detectar cambios anómalos (picos de seguidores que sugieren compra de followers), y qué stack de procesamiento asíncrono usar.

5. **Sistema de detección de fraude**: explica los algoritmos y señales que usarías para detectar influencers con audiencias compradas o infladadas. Incluye: análisis de tasa de crecimiento anómala, ratio de engagement vs. seguidores, análisis de comentarios (spam, emojis genéricos), y comparativa con benchmarks del sector.

6. **Dashboard de reporting**: diseña la arquitectura del módulo de reporting. Qué métricas calcular, cómo agregarlas a nivel de campaña y de marca, cómo manejar la atribución cuando hay varios influencers en una misma campaña, y cómo exportar los datos.

**Formato de salida**
Usa diagramas de texto (ASCII) donde ayuden a entender la arquitectura. Define el esquema de base de datos en formato SQL o pseudocódigo. Sé específico en tecnologías recomendadas con justificación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar arquitectura técnica de plataforma de influencer marketing',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 3. Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Co-crear contenido visual con influencers manteniendo la identidad de marca',
                'description'      => 'La co-creación con influencers es un equilibrio difícil: darles libertad creativa para que el contenido sea auténtico, pero mantener suficiente control para proteger la identidad de marca. Aprende a diseñar un proceso de co-creación que produzca contenido que tanto la marca como el creador se enorgullezcan de publicar. Evita los errores más comunes que hacen que el UGC se vea forzado.',
                'prompt_content'   => <<<'EOT'
Actúa como director creativo con experiencia en campañas de co-creación con influencers y content creators. Ayúdame a diseñar un proceso de co-creación que produzca contenido auténtico y alineado con la marca al mismo tiempo.

**El reto de la co-creación**
Cuando las marcas dan demasiadas instrucciones, el contenido de los influencers parece un anuncio forzado y la audiencia lo rechaza. Cuando dan demasiada libertad, el contenido no comunica el mensaje clave o no se alinea con la identidad visual de la marca. Necesito encontrar el punto medio.

**Entregables que necesito**

1. **Framework de brief creativo para co-creación**: diseña un brief creativo específicamente pensado para influencers, distinto al brief publicitario tradicional. Debe comunicar: el espíritu de la marca (no las reglas), el problema que resuelve el producto para la audiencia del creador, los mensajes que deben quedar en la mente del espectador, lo que NO puede aparecer, y los requisitos técnicos mínimos (formato, duración, disclosure). El brief debe inspirar creatividad, no ahogarla.

2. **Kit de brand assets para creadores**: define qué materiales debe recibir un influencer para poder co-crear contenido alineado con la marca. Incluye: guía de estilo simplificada (paleta de colores, tipografías clave, tono de voz), biblioteca de assets listos para usar (logos en distintos formatos, stickers, overlays), ejemplos de contenido que sí funciona y ejemplos de lo que no funciona.

3. **Proceso de revisión y aprobación**: diseña un proceso de revisión que proteja a la marca sin matar la autenticidad del creador. Define cuántas rondas de revisión son razonables, qué criterios usar para aprobar o rechazar contenido, cómo dar feedback constructivo que el creador pueda implementar sin sentirse censurado, y tiempos máximos de cada fase.

4. **Guía para evaluar contenido generado por el usuario (UGC)**: crea un rubric para evaluar el contenido entregado por los creadores antes de aprobarlo. Criterios de evaluación: alineación con la voz de marca, calidad técnica (iluminación, sonido, edición), autenticidad percibida, cumplimiento de requisitos de disclosure, y potencial de rendimiento.

5. **Estrategia de contenido reutilizable**: explica cómo negociar los derechos de uso del contenido creado por influencers para reutilizarlo en otros canales (paid social, web, email). Define qué pedir en el contrato, cómo adaptar el UGC para otros formatos, y cómo mantener la autenticidad al reutilizarlo fuera del contexto original.

6. **Ejemplos de briefs exitosos**: redacta dos ejemplos de briefs creativos para co-creación: uno para una marca de moda sostenible con un influencer de lifestyle, y otro para una app de finanzas personales con un creador de contenido financiero. Cada brief debe ser conciso (máximo una página) pero inspirador.

**Formato de salida**
Secciones con encabezados claros. Los briefs de ejemplo en formato documento que pueda enviarse directamente. El rubric de evaluación en formato de tabla.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar proceso de co-creación con influencers sin perder identidad de marca',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 4. Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Usar influencers y social selling para acelerar el pipeline de ventas B2B',
                'description'      => 'El social selling a través de líderes de opinión y microinfluencers B2B es una de las estrategias de generación de demanda más subutilizadas. Aprende a identificar influencers en tu industria, activar programas de employee advocacy, y usar el contenido de terceros para calentar prospectos antes de la primera llamada. Acorta el ciclo de venta con credibilidad prestada.',
                'prompt_content'   => <<<'EOT'
Actúa como director de ventas B2B con experiencia en social selling y uso de influencers para acelerar pipelines comerciales. Ayúdame a diseñar una estrategia que combine influencer marketing y social selling para generar demanda más calificada.

**El contexto**
Vendo software de gestión de proyectos a empresas medianas. El ciclo de venta es de 3-6 meses. Los prospectos típicos son directores de operaciones y CTOs que se informan leyendo contenido de expertos antes de hablar con un vendedor. Quiero estar presente en ese proceso de investigación mucho antes de que el prospecto llegue a nuestra web.

**Entregables que necesito**

1. **Mapa de influencers B2B relevantes**: explica cómo identificar los líderes de opinión que mis prospectos siguen y leen. Define qué canales priorizar (LinkedIn, newsletters de nicho, podcasts, comunidades), cómo evaluar si un influencer llega realmente a los decisores que me interesan, y cómo construir una lista de 20-30 influencers objetivo.

2. **Estrategia de social selling con influencers**: diseña un plan para que el equipo de ventas use el contenido de influencers como palanca en su proceso de prospección. Incluye: cómo usar el contenido de un influencer para iniciar conversaciones con prospectos, cómo mencionar una publicación relevante en un cold email o mensaje de LinkedIn, y cómo posicionarse como seguidor inteligente de los mismos referentes que el prospecto.

3. **Programa de employee advocacy**: diseña un programa para convertir a los propios empleados (especialmente los que tienen perfil público) en microinfluencers de la marca. Incluye: cómo seleccionar a los participantes, qué tipo de contenido compartir, cómo darles libertad editorial sin perder alineación con la marca, cómo incentivarlos, y cómo medir el impacto en la generación de pipeline.

4. **Estrategia de co-marketing con influencers**: propón 3-4 formatos de colaboración con influencers B2B que tengan impacto directo en ventas. Por ejemplo: webinars conjuntos, guías co-creadas, apariciones en podcasts, case studies con el influencer como protagonista. Para cada formato describe cómo medirías su impacto en el pipeline.

5. **Secuencia de nurturing usando contenido de influencers**: diseña una secuencia de emails de nurturing de 6 pasos que use contenido de influencers y expertos del sector como recursos de valor. Cada email debe avanzar al prospecto en el ciclo de compra sin ser un email de venta.

6. **Métricas de impacto en ventas**: define cómo medir si la estrategia de influencer marketing está generando impacto real en el pipeline comercial. Incluye métricas como: touchpoints influenciados, leads atribuidos al canal de influencer, velocidad del ciclo de venta para leads influenciados vs. no influenciados.

**Formato de salida**
Secciones con encabezados claros. La secuencia de nurturing con los 6 emails redactados (asunto + cuerpo del email). Las métricas en formato tabla con definición y forma de cálculo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Usar influencers B2B y social selling para generar pipeline más calificado',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 5. Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Diseñar productos y features para la creator economy',
                'description'      => 'La creator economy es uno de los segmentos de mayor crecimiento en tecnología de consumo. Aprende a entender las necesidades específicas de los creadores de contenido como usuarios, diseñar features que resuelvan sus problemas de monetización y gestión, y construir un flywheel que haga crecer el producto junto a los creadores más relevantes de tu nicho.',
                'prompt_content'   => <<<'EOT'
Actúa como Product Manager con experiencia en plataformas de creator economy y herramientas para creadores de contenido. Ayúdame a diseñar un producto o set de features orientado a satisfacer las necesidades de los creadores de contenido.

**El contexto**
Tengo una plataforma de aprendizaje online donde expertos pueden crear y vender cursos. Los creadores actuales son profesionales con audiencia en otras redes (YouTube, Instagram, LinkedIn) que buscan monetizar su conocimiento. El problema: muchos creadores se van a competidores porque nuestras herramientas de gestión y monetización son básicas.

**Entregables que necesito**

1. **Mapa de necesidades del creador**: realiza un análisis detallado de las necesidades de un creador de contenido a lo largo de su ciclo de vida. Distingue entre las necesidades de un creador emergente (menos de 1.000 seguidores), uno en crecimiento (1.000-50.000) y uno establecido (más de 50.000). Para cada etapa define sus principales frustraciones, qué herramientas necesita más, y cómo nuestro producto puede ser la solución.

2. **Oportunidades de features para retener creadores**: basándote en el mapa de necesidades, propón 8-10 features priorizadas que incrementarían la retención de creadores en la plataforma. Para cada feature incluye: descripción, problema que resuelve, impacto esperado (alto/medio/bajo), esfuerzo de desarrollo estimado (alto/medio/bajo), y segmento de creadores al que beneficia más.

3. **Estrategia de monetización para creadores**: diseña un sistema de monetización que permita a los creadores maximizar sus ingresos en la plataforma. Incluye: modelos de precios para sus cursos (one-time, suscripción, freemium), herramientas de upsell y cross-sell, posibilidades de membresía o comunidad de pago, y cómo la plataforma gana dinero de forma alineada con los éxitos del creador.

4. **Programa de partner de creadores**: diseña un programa para atraer y retener a los mejores creadores del nicho. Incluye: criterios de selección, beneficios del programa (acceso anticipado a features, soporte prioritario, revenue share mejorado), obligaciones del creador, y cómo este programa genera un flywheel de crecimiento para la plataforma.

5. **Métricas de éxito del creador**: define los KPIs que usarías para medir si los creadores tienen éxito en la plataforma. Incluye métricas de ingresos, engagement de sus alumnos, crecimiento de audiencia en la plataforma, y satisfacción. Define umbrales que te indiquen si un creador está en riesgo de irse.

6. **Roadmap de 12 meses**: elabora un roadmap de alto nivel de las principales iniciativas de producto para los próximos 12 meses orientadas a mejorar la experiencia del creador. Organízalo por trimestre con objetivos claros para cada fase.

**Formato de salida**
Encabezados claros para cada sección. La lista de features en formato tabla con columnas de impacto y esfuerzo para visualizar la matriz. El roadmap en formato de tabla por trimestre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar features y estrategia de producto para plataformas de creator economy',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 6. RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Usar influencers internos y employer branding para atraer talento',
                'description'      => 'Los candidatos más cotizados investigan la cultura de una empresa antes de postularse, y confían más en empleados actuales que en mensajes corporativos. Aprende a construir un programa de employer branding basado en influencers internos: empleados auténticos que comunican la realidad de trabajar en tu organización y atraen talento afín.',
                'prompt_content'   => <<<'EOT'
Actúa como especialista en employer branding y atracción de talento con experiencia en programas de employee advocacy. Ayúdame a diseñar una estrategia de employer branding usando influencers internos para atraer talento de alta calidad.

**El problema**
La empresa tiene dificultad para atraer talento técnico y creativo porque pocas personas la conocen como empleador. El perfil de LinkedIn corporativo tiene poco alcance, los anuncios de trabajo no generan candidatos de calidad, y los candidatos que llegan no tienen una idea clara de cómo es trabajar en la empresa. Quiero cambiar eso.

**Entregables que necesito**

1. **Estrategia de employer branding basada en empleados**: diseña una estrategia para usar a los propios empleados como embajadores de la marca empleadora. Define qué tipo de contenido funciona mejor para employer branding (día a día, proyectos, cultura, aprendizaje, beneficios reales), en qué canales publicarlo, y cómo diferenciar el contenido auténtico del contenido corporativo disfrazado.

2. **Programa de employee advocacy**: diseña un programa para identificar, activar y apoyar a empleados que quieran compartir su experiencia públicamente. Incluye: cómo seleccionar a los participantes (voluntarios, no presionados), qué tipo de apoyo darles (formación en comunicación, acceso a herramientas, tiempo), qué libertad editorial tienen, y cómo incentivarlos sin que parezca forzado.

3. **Política de redes sociales para empleados**: redacta una política de redes sociales clara y equilibrada que defina qué pueden y qué no pueden compartir los empleados sobre su trabajo. Debe proteger a la empresa sin ahogar la autenticidad. Incluye ejemplos de contenido permitido, contenido que requiere aprobación, y contenido prohibido.

4. **Proceso de colaboración con influencers externos del sector de RRHH**: explica cómo colaborar con influencers de recursos humanos, cultura organizacional o del sector profesional específico de la empresa para amplificar el employer branding. Define qué tipo de contenido co-crear, cómo medir el impacto, y qué beneficios ofrecer a cambio de la colaboración.

5. **Métricas de employer branding**: define los KPIs para medir si la estrategia está funcionando. Incluye métricas de alcance (impresiones, seguidores de perfiles de empleados), métricas de atracción (candidatos inbound, calidad de candidatos), métricas de conversión (tasa de aceptación de ofertas, tiempo de cobertura de posiciones), y métricas de percepción (employer brand score, Glassdoor rating).

6. **Plan de contenido para 90 días**: propón un calendario de contenido de 90 días para el programa de employee advocacy. Para cada semana define el tema principal, el formato de contenido, el canal y quién podría ser el protagonista. Incluye tipos de publicaciones como: tour de la oficina, día en la vida de un empleado, proyecto del que estamos orgullosos, nuevos beneficios, aniversarios de empleados.

**Formato de salida**
Secciones con encabezados claros. La política de redes sociales en formato documento que pueda distribuirse. El calendario de contenido en formato tabla por semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir programa de employer branding con empleados como influencers internos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 7. Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Medir el ROI de campañas de influencers y justificar la inversión',
                'description'      => 'El marketing de influencers sufre de un problema de atribución: es difícil saber exactamente qué parte del negocio generó. Aprende a construir un framework de medición robusto que combine métricas de alcance, engagement, tráfico y conversión para calcular el ROI real de cada campaña y justificar la inversión ante dirección.',
                'prompt_content'   => <<<'EOT'
Actúa como analista de marketing con especialización en medición y atribución de campañas digitales. Ayúdame a construir un framework de medición del ROI de campañas de influencer marketing que sea riguroso y que pueda presentarse a dirección financiera.

**El problema**
El equipo de marketing invierte en influencers pero no puede demostrar con claridad cuánto negocio generan. La dirección pregunta "¿cuánto nos costó cada cliente que viene de influencers?" y no tenemos una respuesta sólida. Necesito un sistema de medición que resuelva el problema de la atribución y justifique (o cuestione) la inversión.

**Entregables que necesito**

1. **Framework de métricas por etapa del funnel**: diseña un sistema de métricas para medir el impacto de los influencers en cada etapa del funnel. Para cada etapa (awareness, consideración, conversión, retención) define: qué métricas medir, cómo obtener los datos, qué benchmarks usar como referencia, y cómo interpretar los resultados.

2. **Metodología de atribución para influencers**: explica las principales metodologías de atribución aplicables a influencer marketing (last click, multi-touch, incrementalidad) y sus pros y contras. Recomienda cuál usar según el tamaño de la empresa y la madurez del equipo de datos. Incluye cómo implementar tracking básico (UTMs, códigos de descuento, landing pages exclusivas) para mejorar la trazabilidad.

3. **Modelo de cálculo de ROI**: diseña una hoja de cálculo (describe su estructura con filas y fórmulas) para calcular el ROI de una campaña de influencers. Incluye: inversión total (pagos a influencers, producción, gestión), ingresos atribuidos directamente, valor estimado del earned media (impresiones orgánicas), valor del contenido generado (reutilización en paid), y cómo calcular el costo por resultado en cada métrica clave.

4. **Análisis comparativo con otros canales**: explica cómo comparar el rendimiento de los influencers con otros canales de marketing (paid social, email, SEO) para tomar decisiones de asignación de presupuesto. Incluye qué métricas normalizar para hacer la comparación justa.

5. **Plantilla de informe de campaña**: diseña una plantilla de informe post-campaña que presente los resultados de forma clara para distintas audiencias: una sección para el CMO (resultados de negocio, ROI) y una sección técnica para el equipo de marketing (análisis por influencer, creative insights). Incluye secciones para: resumen ejecutivo, métricas de rendimiento, análisis por influencer, aprendizajes creativos, recomendaciones y próximos pasos.

6. **Cuándo dejar de invertir en influencers**: define criterios claros para saber cuándo una inversión en influencers no está dando resultados y debe cortarse o pivotarse. Incluye umbrales de métricas por debajo de los cuales la campaña no es rentable, y cómo presentar esa conclusión a dirección.

**Formato de salida**
Encabezados claros. El modelo de ROI con la estructura de la hoja de cálculo en formato tabla. La plantilla de informe lista para usar. Las fórmulas matemáticas claras y con ejemplos numéricos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Calcular y comunicar el ROI de campañas de influencer marketing',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            // 8. Legal
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y compliance legal en campañas de marketing de influencers',
                'description'      => 'Las colaboraciones con influencers tienen un marco legal complejo: obligaciones de disclosure, derechos de imagen, propiedad intelectual del contenido, y regulaciones publicitarias específicas. Aprende a proteger a la marca con contratos sólidos y a garantizar el cumplimiento normativo en cada campaña. Evita multas regulatorias y problemas reputacionales.',
                'prompt_content'   => <<<'EOT'
Actúa como abogado especializado en marketing digital, publicidad y derecho de la competencia. Ayúdame a entender el marco legal de las campañas de marketing de influencers en España y la Unión Europea, y a preparar la documentación necesaria para proteger a la marca.

**El contexto**
Una empresa española va a lanzar varias campañas de influencer marketing en Instagram y TikTok, colaborando con creadores de distintos tamaños. Quiero asegurarme de que todas las colaboraciones cumplan la normativa vigente y que los contratos protejan los intereses de la marca.

**Entregables que necesito**

1. **Marco regulatorio aplicable**: explica las principales normas legales que regulan la publicidad en redes sociales y las colaboraciones con influencers en España y la UE. Incluye: Ley General de Publicidad, Código de Conducta de Influencers de Autocontrol, regulación de la FTC (si hay colaboraciones con creadores en EE.UU.), Directiva de Prácticas Comerciales Desleales, y las políticas propias de Instagram y TikTok sobre contenido patrocinado.

2. **Obligaciones de disclosure**: explica con detalle cómo deben etiquetarse los contenidos patrocinados según la regulación española y europea. Incluye: qué etiquetas son válidas (#publicidad, #ad, #patrocinado), dónde deben colocarse, qué pasa con el contenido de regalo o canje, y los errores más comunes que se cometen y por qué son un problema legal.

3. **Elementos clave del contrato con el influencer**: redacta un listado comentado de las cláusulas que debe incluir un contrato de colaboración con un influencer. Para cada cláusula explica por qué es importante y qué riesgos mitiga. Incluye: alcance y descripción del contenido, plazos de entrega y publicación, derechos de uso y licencias, exclusividad, obligaciones de disclosure, proceso de aprobación, compensación y forma de pago, duración de la publicación, confidencialidad, terminación anticipada, y responsabilidad e indemnización.

4. **Propiedad intelectual del contenido generado**: explica a quién pertenece el contenido creado por el influencer en el contexto de una colaboración pagada, cómo negociar los derechos de uso para amplificar el contenido en paid media, y cómo gestionar los derechos de imagen de personas que aparecen en el contenido (incluyendo el propio influencer).

5. **Gestión de riesgos reputacionales y legales**: explica qué cláusulas usar para protegerse si el influencer publica algo inapropiado, comete un acto deshonroso o viola las normas de la plataforma. Incluye: cláusula de moralidad, proceso para exigir eliminación del contenido, y cómo gestionar la comunicación de crisis en estos casos.

6. **Checklist de compliance pre-campaña**: crea un checklist de los pasos que el equipo de marketing debe verificar antes de publicar cualquier contenido patrocinado. Incluye verificación del contrato, etiquetado correcto, aprobación del contenido, y archivo de evidencias para demostrar el cumplimiento.

**Formato de salida**
Encabezados claros. El checklist en formato de lista con casillas. Las cláusulas contractuales en formato de lista numerada con explicación de cada una. Nota: este análisis es informativo y no sustituye el asesoramiento jurídico profesional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Proteger a la marca con contratos sólidos y cumplimiento normativo en influencer marketing',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            // 9. Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Convertir clientes satisfechos en brand advocates y microinfluencers',
                'description'      => 'Tus mejores clientes son tu canal de marketing más creíble. Aprende a identificar clientes satisfechos con audiencia relevante, diseñar programas de advocacy que los conviertan en embajadores auténticos, y medir el impacto de ese advocacy en la retención y la adquisición de nuevos clientes. Construye un flywheel de crecimiento basado en la prueba social.',
                'prompt_content'   => <<<'EOT'
Actúa como Head of Customer Success con experiencia en programas de advocacy y comunidades de clientes. Ayúdame a diseñar un programa para convertir a los clientes más satisfechos en brand advocates que contribuyan activamente al crecimiento de la empresa.

**El contexto**
Tenemos una base de clientes satisfechos (NPS promedio de 45) pero no la estamos aprovechando para generar referencias, contenido de prueba social o amplificación en redes sociales. Los mejores clientes no hablan de nosotros porque nadie les ha pedido que lo hagan de forma estructurada. Quiero cambiar eso.

**Entregables que necesito**

1. **Identificación de potenciales advocates**: diseña un proceso para identificar qué clientes tienen más potencial como advocates. Define los criterios de selección: combinación de satisfacción (NPS alto, uso activo del producto), impacto en su sector (si tienen audiencia en LinkedIn u otras redes, si son reconocidos en su industria), y disposición a participar. Incluye cómo hacer el primer contacto sin resultar intrusivo.

2. **Programa de customer advocacy escalonado**: diseña un programa con diferentes niveles de participación para clientes advocates. Nivel básico: reseñas en G2 o Google, testimonios escritos, participación en encuestas. Nivel medio: casos de estudio, apariciones en webinars, referencias activas. Nivel avanzado: ponencias en eventos de la empresa, co-creación de contenido, advisory board. Para cada nivel define los beneficios que recibe el advocate a cambio.

3. **Programa de cliente-influencer**: diseña un programa específico para clientes que tienen audiencia relevante en redes sociales. Incluye: cómo identificarlos, qué tipo de colaboración de contenido proponerles, qué les ofrecemos a cambio (acceso anticipado a features, descuentos, revenue share por referidos), y cómo medir el impacto de sus publicaciones en la adquisición de nuevos clientes.

4. **Proceso de creación de casos de estudio**: diseña un proceso eficiente para producir casos de estudio con clientes advocates. Incluye: cómo proponer el caso de estudio al cliente, guía de entrevista para extraer resultados cuantitativos y cualitativos, proceso de redacción y aprobación, formatos de publicación (texto largo, video, infografía) y cómo usar el caso de estudio en el proceso de venta.

5. **Sistema de referidos estructurado**: diseña un programa de referidos para que los advocates traigan nuevos clientes de forma activa. Incluye: mecánica del programa (qué obtiene el advocate cuando refiere), cómo hacer el tracking de referidos, cómo reconocer y celebrar a los mejores referidores, y cómo comunicar el programa a los clientes elegibles.

6. **Métricas del programa de advocacy**: define los KPIs para medir si el programa está generando impacto en el negocio. Incluye: número de advocates activos, contenido generado por advocates, leads generados por referidos, tasa de conversión de leads de advocate vs. otros canales, impacto en retención, y valor del earned media generado.

**Formato de salida**
Encabezados claros para cada entregable. El programa escalonado en formato tabla. El proceso de casos de estudio en formato de checklist paso a paso. Las métricas con definición y cómo calcularlas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programa de advocacy para convertir clientes satisfechos en embajadores de marca',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 10. Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Monetizar tu audiencia como freelancer y creador de contenido',
                'description'      => 'Si tienes una audiencia en redes sociales o una newsletter, puedes monetizarla de múltiples formas además de las colaboraciones de influencer tradicionales. Aprende a construir un modelo de negocio como creador de contenido que combine colaboraciones con marcas, productos propios, servicios premium y comunidad de pago. Diversifica tus ingresos y reduce la dependencia de un solo cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de negocio especializado en creator economy y monetización de audiencias. Ayúdame a diseñar un modelo de negocio sostenible como freelancer-creador de contenido que aproveche mi audiencia para generar múltiples fuentes de ingresos.

**El contexto**
Soy un freelancer con experiencia en marketing digital. Tengo una newsletter de 3.000 suscriptores y un perfil de LinkedIn con 8.000 seguidores. Hasta ahora he usado esas audiencias solo para conseguir clientes de consultoría, pero sé que puedo monetizarlas de formas más directas y escalables. Quiero reducir mi dependencia de proyectos de consultoría por horas.

**Entregables que necesito**

1. **Mapa de fuentes de ingresos para creadores-freelancers**: explica las principales formas en que un profesional con mi perfil puede monetizar su audiencia. Para cada modelo incluye: descripción, esfuerzo de implementación, potencial de ingresos estimado, y para qué tamaño de audiencia tiene sentido. Incluye: colaboraciones con marcas, productos digitales (cursos, plantillas, guías), membresía o comunidad de pago, servicios premium (consultoría de alto valor, retainers), afiliación, y eventos o workshops.

2. **Estrategia de colaboraciones con marcas**: explica cómo posicionarte ante las marcas como microinfluencer de nicho de alto valor. Incluye: cómo definir tu media kit, qué tarifas son razonables según tu audiencia y engagement, cómo prospectar marcas relevantes, cómo negociar contratos que te den libertad editorial, y cómo mantener la confianza de tu audiencia al hacer colaboraciones patrocinadas.

3. **Creación de tu primer producto digital**: diseña un plan paso a paso para lanzar tu primer producto digital (elige el más adecuado para mi perfil: plantilla, guía, mini-curso). Incluye: cómo validar la idea con tu audiencia antes de crearlo, qué plataforma usar para venderlo, cómo fijar el precio, cómo lanzarlo a tu lista y generar las primeras ventas en los primeros 7 días.

4. **Modelo de membresía o comunidad de pago**: explica cómo crear una comunidad de pago alrededor de tu expertise. Incluye: qué tipo de contenido y acceso ofrecerías a los miembros, cómo fijar el precio mensual, en qué plataforma montarla, cómo conseguir los primeros 50 miembros fundadores, y cómo retenerlos mes a mes.

5. **Plan de crecimiento de audiencia**: diseña una estrategia de 6 meses para hacer crecer tu audiencia de forma orgánica. Incluye: tipo de contenido que funciona mejor en LinkedIn y en newsletters, frecuencia de publicación óptima, tácticas de colaboración con otros creadores para amplificar el alcance, y cómo convertir seguidores en suscriptores de newsletter (más valiosos porque los posees tú, no la plataforma).

6. **Hoja de ruta de 12 meses**: propón un plan de 12 meses para pasar de depender 80 % de proyectos de consultoría a tener el 40 % de tus ingresos viniendo de productos y audiencia. Define hitos por trimestre, inversión de tiempo requerida y metas de ingresos realistas.

**Formato de salida**
Encabezados claros. El mapa de fuentes de ingresos en formato tabla. El plan de lanzamiento del producto digital en formato de checklist. La hoja de ruta en formato por trimestre con objetivos concretos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar modelo de negocio para monetizar audiencia como freelancer-creador',
                'vote_score'       => 48,
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
