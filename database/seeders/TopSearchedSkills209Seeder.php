<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills209Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Demand generation: crear demanda donde no existía',
                'description'       => 'Genera demanda para un producto nuevo o una categoría emergente: las estrategias de category creation, el content marketing que educa al mercado y las campañas que crean el problema antes de ofrecer la solución.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en demand generation, category creation y en el marketing de productos nuevos o categorías emergentes. Quiero que me ayudes a diseñar la estrategia para generar demanda donde todavía no existe: cuando el mercado no sabe que tiene el problema que mi producto resuelve.

Mi contexto:
- Producto o solución: [descripción de qué ofreces]
- Categoría de mercado: [¿es una categoría existente o estás creando una nueva?]
- Cliente objetivo: [perfil detallado del buyer persona]
- Situación actual de conocimiento del mercado: [el mercado conoce el problema pero no tu solución, o directamente no reconoce el problema]
- Budget de marketing disponible: [rango aproximado]
- Canales que tienes o puedes usar: [SEO, paid, eventos, partnerships, content, etc.]

Con esa información, quiero que me entregues una estrategia completa en estas áreas:

**1. El diagnóstico del problema: ¿creación de categoría o captura de demanda existente?**
Diferencia con claridad las dos estrategias fundamentales: capturar la demanda existente (SEO, SEM, comparativas) y crear la demanda nueva (educar al mercado, crear la categoría). Analiza en cuál de los dos escenarios estoy y qué implica en términos de tiempo, presupuesto y tipo de contenido necesario. Incluye los riesgos de cada enfoque y cómo combinarlos.

**2. El problema antes que la solución: cómo crear consciencia del problema**
Diseña la estrategia de contenidos que hace que el cliente potencial reconozca el problema que tiene antes de que sepa que existo. Incluye: qué tipo de contenido crea consciencia del problema (datos, estudios, historias, calculadoras de coste del problema), los canales donde distribuirlo, el journey desde la inconsciencia hasta el reconocimiento del problema, y cómo medir que el contenido está generando consciencia y no solo tráfico.

**3. La estrategia de category creation**
Si estoy creando una categoría nueva, diseña la estrategia para nombrarla, definirla y posicionarme como el líder natural. Incluye: cómo elegir el nombre de la categoría (criterios y proceso), cómo publicar el punto de vista de la categoría (category POV), cómo construir aliados que usen mi lenguaje y amplíen mi narrativa, y cómo medir si la categoría está ganando tracción en el mercado.

**4. El content marketing que educa al mercado a escala**
Diseña la arquitectura de contenidos que educará al mercado durante los próximos doce meses. Incluye: los pilares temáticos del contenido (los grandes problemas que aborda), los formatos para cada etapa del funnel (TOFU: consciencia del problema, MOFU: evaluación de la solución, BOFU: decisión), el calendario de publicación y los canales de distribución. Proporciona los diez títulos de contenido de TOFU más efectivos para mi categoría.

**5. Las campañas de activación de demanda**
Diseña tres campañas de marketing concretas que generarán demanda activa en los próximos noventa días. Para cada campaña: objetivo, audiencia, canal principal, mensaje central, formato del contenido o acción, presupuesto estimado y métricas de éxito. Las campañas deben cubrir distintas etapas del funnel y distintos canales para maximizar la cobertura.

**6. Los partnerships y amplificadores de demanda**
Identifica las fuentes de amplificación de la demanda que acelerarán el tiempo hasta el mercado sin requerir presupuesto de paid. Incluye: los influencers y líderes de opinión cuya audiencia es mi mercado objetivo, los medios y publicaciones que cubren el problema que resuelvo, las asociaciones profesionales y comunidades donde está mi buyer persona, y el modelo de colaboración con cada uno de ellos.

**7. Métricas de demand generation para una categoría nueva**
Define el dashboard de métricas que usaré para medir si la estrategia de demand generation está funcionando cuando la demanda todavía no existe. Incluye: métricas de consciencia (búsquedas del término de la categoría, share of voice, alcance del contenido), métricas de engagement (tiempo en página, subscribers, asistentes a eventos), métricas de intención (demostraciones solicitadas, descargas de recursos de evaluación) y métricas de conversión. Para cada una, el benchmark de referencia y el objetivo a doce meses.

Responde en español. Sé específico y accionable. Ten en cuenta que el mayor error en la creación de demanda es intentar capturar una demanda que todavía no existe en lugar de crearla, y que el tiempo es la variable más subestimada en este tipo de estrategia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la estrategia de demand generation para un producto nuevo o categoría emergente donde el mercado todavía no reconoce el problema.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Monetización de productos técnicos',
                'description'       => 'Convierte un proyecto técnico en un negocio: los modelos de monetización para APIs, herramientas open source y proyectos developer-first, y el proceso de encontrar el modelo que el mercado está dispuesto a pagar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en monetización de productos técnicos, developer tools y proyectos open source. Quiero que me ayudes a diseñar la estrategia de monetización para mi proyecto técnico: cómo convertir algo que la gente usa en algo por lo que está dispuesta a pagar.

Mi contexto:
- Descripción del proyecto técnico: [API, librería, CLI, herramienta SaaS, open source, etc.]
- Usuarios actuales y perfil: [número de usuarios, si son desarrolladores individuales, startups, empresas]
- Problema que resuelve el proyecto: [para qué lo usan]
- Modelo de distribución actual: [gratuito, open source, freemium, otro]
- Revenue actual si lo hay: [cero, algo de sponsorships, primeros clientes de pago]
- Competencia y cómo monetizan: [menciona los principales referentes]

Con esa información, quiero que me entregues una estrategia completa en estas áreas:

**1. Los modelos de monetización para proyectos técnicos**
Explica en detalle los principales modelos de monetización disponibles para productos técnicos: open core (gratis el núcleo, de pago las features enterprise), usage-based pricing (cobra por lo que usan), SaaS con tiers, marketplace de plugins o extensiones, soporte y consultoría profesional, y dual-license (open source + licencia comercial). Para cada modelo: cómo funciona, en qué tipo de proyecto encaja mejor, ventajas e inconvenientes, y un ejemplo real de empresa que lo aplica con éxito.

**2. El modelo de monetización para mi proyecto específico**
Basándote en el contexto que te he dado, recomienda el modelo o combinación de modelos más adecuada para mi proyecto. Justifica la recomendación con el perfil de mis usuarios, el tipo de valor que genero, la competencia y la etapa en la que estoy. Incluye también los modelos que descartarías y por qué.

**3. Diseño del modelo de precios**
Diseña la estructura de precios concreta para el modelo que recomiendas. Incluye: los tiers o planes (nombres, precios, qué incluye cada uno), el criterio de segmentación entre tiers (por uso, por tamaño de empresa, por features, por número de asientos), la estrategia de precios de lanzamiento vs. precios definitivos, y cómo gestionar el período de migración de usuarios gratuitos a de pago.

**4. La estrategia de go-to-market para developer tools**
Diseña la estrategia de go-to-market específica para un producto técnico cuya audiencia son desarrolladores. Incluye: cómo llegar a developers (Product Hunt, Hacker News, GitHub, communities, DevRel), cómo convertir usuarios de la herramienta gratuita en clientes de pago, el ciclo de adopción típico de una herramienta técnica y cómo acelerarlo, y cómo hacer que los desarrolladores sean los prescriptores que convencen a sus empresas de pagar.

**5. Open source y monetización: cómo no destruir la comunidad**
Si mi proyecto es o tiene componentes open source, diseña la estrategia para monetizar sin alienar a la comunidad de contribuidores y usuarios. Incluye: cómo definir qué queda open source y qué se vuelve comercial, cómo comunicar el cambio de modelo si ya eras completamente gratuito, cómo mantener la confianza de la comunidad, y los errores que han cometido otros proyectos open source al monetizar (HashiCorp, Elasticsearch, Redis) y cómo evitarlos.

**6. El proceso de validación del modelo de negocio**
Diseña el proceso de tres fases para validar que el modelo de monetización funciona antes de comprometerse completamente con él. Incluye: cómo hacer el primer experimento de precio (landing page, manual invoicing, beta de pago), qué señales indican que el modelo es el correcto, cuándo pivotar y cómo gestionar el aprendizaje de los experimentos fallidos.

**7. Métricas de un negocio de developer tools**
Define el set de métricas que usaré para medir la salud del negocio de monetización de mi proyecto técnico. Incluye: métricas de producto (DAU, WAU, activación), métricas de conversión (free-to-paid conversion rate, time-to-pay), métricas de ingresos (MRR, ARPU, churn, NRR) y métricas de comunidad (contributors, GitHub stars growth rate, integrations). Para cada una, el benchmark de referencia para el tipo de producto que tengo.

Responde en español. Sé concreto y específico para el tipo de proyecto técnico que tengo. Ten en cuenta que la monetización de proyectos técnicos tiene dinámicas muy distintas al SaaS tradicional y que la confianza de la comunidad es un activo que se destruye fácilmente y se reconstruye muy lentamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar la estrategia de monetización para convertir un proyecto técnico, API u herramienta open source en un negocio sostenible.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño que convierte: UX para el crecimiento del negocio',
                'description'       => 'El diseñador que entiende cómo el diseño impacta en los ingresos: los patrones de diseño que aumentan la conversión, el A/B testing de elementos visuales y el lenguaje del ROI para hablar con el negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en UX de conversión, growth design y en la intersección entre diseño de experiencia de usuario y resultados de negocio. Quiero que me ayudes a diseñar o mejorar experiencias que conviertan mejor: que conviertan visitantes en usuarios, usuarios en clientes de pago y clientes en promotores.

Mi contexto:
- Producto o servicio que quiero optimizar: [descripción del producto digital]
- Métrica de conversión principal que quiero mejorar: [registro, activación, compra, upgrade, retención]
- Tasa de conversión actual si la conoces: [menciona el número o di que no lo tienes]
- Principales puntos de fricción identificados: [dónde abandona la gente, qué dicen en los tests de usuario]
- Herramientas de análisis disponibles: [Google Analytics, Hotjar, Mixpanel, FullStory, otras]
- Capacidad de hacer A/B testing: [sí/no, herramienta que usas]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. El mapa de conversión del producto**
Diseña el mapa de los momentos críticos de conversión del journey del usuario en mi producto. Para cada momento: qué decisión toma el usuario, qué fricción puede impedirle avanzar, qué motivación necesita para continuar y qué señal de confianza o de valor le ayuda a decidir. Identifica los tres momentos donde el impacto de una mejora de diseño sería mayor.

**2. Los patrones de diseño que aumentan la conversión**
Explica los quince patrones de UX de conversión más efectivos y cuándo aplicar cada uno. Incluye: la prueba social (social proof), la urgencia y escasez, la reducción de pasos (simplificación del flujo), el principio de progreso (progress indicators), la anticipación del valor antes del pago, los formularios de mínima fricción, los estados vacíos que invitan a la acción y la onboarding progresiva. Para cada patrón: descripción, cómo implementarlo, ejemplo visual o de copy y cuándo no usarlo.

**3. El proceso de identificación de problemas de conversión**
Diseña el proceso de investigación de tres semanas para identificar qué está impidiendo la conversión en mi producto. Incluye: qué datos cuantitativos analizar (funnels, heatmaps, session recordings, drop-off points), qué investigación cualitativa hacer (tests de usabilidad, entrevistas de exit intent, encuestas on-page), y cómo sintetizar los hallazgos en una lista priorizada de hipótesis de mejora.

**4. El framework de A/B testing para diseñadores**
Diseña el proceso de experimentación que usaré para validar las mejoras de diseño con datos. Incluye: cómo formular una hipótesis de conversión (problema + cambio + resultado esperado), los criterios para decidir qué testear y en qué orden, cómo calcular el tamaño de muestra necesario, cuánto tiempo durar un test, cómo interpretar los resultados y qué hacer cuando el test pierde. Incluye también los errores más comunes en A/B testing que invalidan los resultados.

**5. El copy de conversión: cómo el texto vende más que el diseño**
Diseña las pautas de copywriting de conversión que aplicaré en las páginas y flujos más críticos. Incluye: cómo escribir el headline de la landing page (los tres componentes de un headline que convierte), cómo escribir el CTA principal (verbo de acción, valor específico, urgencia opcional), cómo tratar las objeciones con copy de soporte, y cómo adaptar el tono del copy a cada etapa del funnel.

**6. Cómo hablar de conversión con el negocio: el ROI del diseño**
Diseña el modelo para calcular y comunicar el impacto económico de las mejoras de diseño en términos que el negocio entiende. Incluye: cómo calcular el valor de un punto porcentual de mejora en la tasa de conversión, cómo presentar un caso de inversión en rediseño de un flujo crítico, qué métricas de diseño conectar con las métricas de negocio (LTV, CAC, MRR) y el template del informe de impacto de un experimento de diseño.

**7. Las métricas del growth designer**
Define el set de métricas que seguirás como diseñador orientado a la conversión. Incluye: métricas de activación (tiempo hasta el primer valor, completion rate del onboarding), métricas de conversión (free-to-paid, trial-to-paid), métricas de retención (D1, D7, D30 retention), métricas de engagement (DAU/MAU, feature adoption) y métricas de calidad del diseño (task success rate, SUS score). Para cada una, el benchmark de referencia para el tipo de producto que tengo.

Responde en español. Sé específico, accionable y fundamentado en datos. Ten en cuenta que el mejor diseño de conversión no engaña al usuario sino que elimina la fricción innecesaria entre la intención del usuario y el valor del producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar experiencias de producto que convierten mejor usando patrones de UX de conversión, A/B testing y el lenguaje del ROI.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Account expansion y upsell sistemático',
                'description'       => 'Crece dentro de los clientes existentes: el proceso de identificar oportunidades de expansión, el momento y el mensaje para la conversación de upsell y los indicadores de que un cliente está listo para comprar más.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en account management, revenue expansion y en las estrategias de crecimiento dentro de la base de clientes existente. Quiero que me ayudes a diseñar el sistema de account expansion y upsell que me permita crecer de forma sistemática con mis clientes actuales.

Mi contexto:
- Producto o servicio que vendo: [descripción y modelo de precios actual]
- Tipo de cliente: [tamaño, sector, perfil del buyer]
- Oportunidades de expansión disponibles: [más licencias, módulos adicionales, servicios, upsell a tier superior]
- Proceso de upsell actual: [reactivo cuando el cliente pide, proactivo sistemático, o no existe]
- Tasa de expansión de revenue actual si la conoces: [NRR aproximado]
- Relación con los clientes actuales: [quién del equipo los gestiona, con qué frecuencia hay contacto]

Con esa información, quiero que me entregues un sistema completo en estas áreas:

**1. El mapa de oportunidades de expansión**
Diseña el proceso para mapear las oportunidades de expansión dentro de cada cuenta. Incluye: cómo hacer el account mapping (identificar todos los usuarios, compradores, influenciadores y tomadores de decisión), cómo identificar los casos de uso no cubiertos, cómo detectar los departamentos o equipos que no usan el producto pero podrían hacerlo, y el template del account plan que usaré para documentar las oportunidades de cada cuenta.

**2. Las señales de que un cliente está listo para el upsell**
Lista las quince señales que indican que un cliente está preparado para comprar más. Categorízalas en: señales de uso (indicadores de adopción y valor obtenido), señales de comportamiento (preguntas que hace, features que explora), señales de negocio (crecimiento del cliente, cambios organizativos) y señales de relación (NPS alto, referencias dadas). Explica cómo detectar cada señal sistemáticamente y cuál es la ventana de tiempo óptima para actuar.

**3. El proceso de conversación de upsell**
Diseña el proceso de la conversación de upsell en cinco fases: preparación, apertura, exploración, propuesta y cierre. Para cada fase: qué información necesito antes de la conversación, qué preguntas abro, cómo presento el valor adicional en términos del negocio del cliente y no en términos de funcionalidades, cómo gestiono las objeciones más comunes y cómo propongo el siguiente paso sin presionar. Incluye los scripts o guiones de ejemplo para cada fase.

**4. El momento correcto: cuándo lanzar la conversación de expansión**
Diseña el sistema de triggers que determinan cuándo es el momento óptimo para iniciar la conversación de upsell. Incluye: los triggers basados en uso del producto (milestone de adopción alcanzado), los triggers basados en tiempo (X meses después del onboarding, renovación próxima), los triggers basados en el negocio del cliente (crecimiento del equipo, nueva financiación, expansión geográfica) y los triggers basados en la relación (NPS positivo, testimonial dado). Para cada trigger, el proceso de seguimiento y la conversación asociada.

**5. La gestión del portafolio de cuentas para maximizar la expansión**
Diseña el modelo de segmentación y priorización de la cartera de cuentas para enfocar el esfuerzo de expansión donde el ROI es mayor. Incluye: los criterios de segmentación (potencial de expansión, salud de la relación, tiempo de cliente), la matriz de priorización, cuántas cuentas puede gestionar un Account Manager con este enfoque y el ritmo de contacto y revisión de cuenta para cada segmento.

**6. Indicadores de éxito del programa de account expansion**
Define el dashboard de métricas que usaré para medir la efectividad del programa de expansión. Incluye: Net Revenue Retention (NRR), Gross Revenue Retention (GRR), expansión revenue por cuenta, uplift promedio de los upsells cerrados, tasa de conversión de las conversaciones de upsell, y tiempo promedio entre el primer contrato y el primer upsell. Para cada métrica, el benchmark para el tipo de negocio que tengo y el objetivo a doce meses.

**7. Los errores que matan el upsell antes de que empiece**
Lista los diez errores más comunes en los programas de account expansion que destruyen la confianza del cliente o pierden la oportunidad. Incluye: el upsell demasiado temprano (antes de que el cliente haya obtenido valor del producto actual), el upsell motivado por la cuota y no por el valor para el cliente, ignorar las señales de salud del cliente antes de proponer expansión, y no involucrar al champion del cliente en el proceso. Para cada error, la señal de que lo estás cometiendo y la corrección.

Responde en español. Sé concreto, accionable y orientado al cliente. Ten en cuenta que el upsell más sostenible es el que el cliente siente que ha pedido él, no el que le has vendido tú.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el sistema de account expansion y upsell para crecer de forma sistemática dentro de la base de clientes existente.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product-led growth (PLG)',
                'description'       => 'El modelo donde el producto es el canal de ventas: el freemium, el viral loop, el tiempo hasta el valor y las métricas de PLG que diferencian a las empresas que crecen con el producto de las que dependen del equipo de ventas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product-led growth (PLG), estrategia de producto y en los modelos de go-to-market donde el producto es el principal motor de adquisición, activación y retención. Quiero que me ayudes a diseñar o evaluar la estrategia de PLG para mi producto.

Mi contexto:
- Descripción del producto: [qué hace, para quién]
- Modelo de distribución actual: [sales-led, marketing-led, incipiente PLG]
- Modelo de pricing actual: [freemium, trial, solo de pago, otro]
- Métricas actuales de adopción: [usuarios activos, conversion rate, churn si los tienes]
- Tipo de usuario: [desarrolladores, equipos técnicos, usuarios de negocio, consumidores]
- Principal fricción en el funnel actual: [adquisición, activación, retención, monetización]

Con esa información, quiero que me entregues una estrategia completa en estas áreas:

**1. ¿Es PLG el modelo correcto para mi producto?**
Analiza si mi producto es adecuado para una estrategia PLG. Evalúa: el nivel de complejidad del producto (¿puede el usuario obtener valor sin intervención humana?), el perfil del usuario (¿puede tomar decisiones de compra de forma autónoma?), el tiempo hasta el valor (¿puede el usuario llegar al AHA moment en minutos?), y el potencial viral (¿el uso del producto genera exposición natural a potenciales nuevos usuarios?). Concluye con una recomendación clara: PLG puro, PLG híbrido con ventas, o sales-led con elementos de PLG.

**2. El freemium: diseño del tier gratuito que convierte**
Si el modelo incluye freemium, diseña la estrategia del tier gratuito. Incluye: qué features incluir en gratuito (suficiente valor para que el usuario se enganche pero no tanto como para que no tenga razón para pagar), dónde poner los limits o gates que motivan la conversión, cómo evitar que el tier gratuito canibalice el de pago, y los criterios para saber si tu freemium está bien calibrado. Propón el diseño concreto del tier gratuito para mi producto.

**3. El AHA moment y el tiempo hasta el valor**
Identifica el AHA moment de mi producto: el momento donde el usuario experimenta por primera vez el valor central del producto. Diseña el proceso de optimización del tiempo hasta ese momento. Incluye: cómo identificar el AHA moment a través de datos de comportamiento, cómo medir el time-to-value actual, qué fricción hay en el camino entre el registro y el AHA moment y cómo eliminarla, y el proceso de onboarding que lleva al usuario al AHA moment en el menor tiempo posible.

**4. Los viral loops del producto**
Diseña los mecanismos de viralidad que harán que el uso del producto genere exposición a nuevos usuarios potenciales. Incluye: los tipos de loops virales disponibles para mi producto (viral inherente, colaboración, referrals, integrations), cómo diseñar cada loop para que sea natural y no forzado, cómo medir el viral coefficient (K-factor) y qué valor de K indica que el loop está funcionando. Propón los dos loops virales más apropiados para mi producto.

**5. La conversión de usuarios gratuitos a de pago**
Diseña el sistema de conversión de free-to-paid. Incluye: los triggers de conversión (momentos donde el usuario más probablemente convierte), los mecanismos de upgrade in-app (gates, tooltips, upgrade flows), la secuencia de emails de nurturing para usuarios gratuitos que no han convertido, y el proceso de Product Qualified Lead (PQL) para escalar al equipo de ventas los usuarios gratuitos con alto potencial de empresa. Define los criterios de un PQL para mi producto.

**6. Las métricas de PLG que importan**
Define el dashboard de métricas de PLG que usaré para medir la salud del motor de crecimiento del producto. Incluye: métricas de adquisición (signups, fuentes de adquisición orgánica), métricas de activación (AHA moment completion rate, time-to-value), métricas de retención (D1, D7, D30 retention, logo churn), métricas de monetización (free-to-paid conversion rate, ARPU, NRR) y métricas virales (K-factor, viral cycle time, Net Promoter Score). Para cada métrica, el benchmark de referencia para el tipo de producto que tengo.

**7. La transición de sales-led a PLG**
Si actualmente opero con un modelo sales-led, diseña la hoja de ruta para añadir una capa de PLG sin destruir el negocio actual. Incluye: por dónde empezar (qué segmento de mercado atacar con PLG primero), cómo gestionar el conflicto entre el equipo de ventas y el modelo PLG, cuánto tiempo esperar para ver resultados del modelo PLG, y los hitos que confirmarán que la transición está funcionando antes de comprometer más recursos al nuevo modelo.

Responde en español. Sé específico para el tipo de producto y mercado que tengo. Ten en cuenta que PLG no es una estrategia de marketing sino una filosofía de construcción de producto donde cada feature es también un mecanismo de adquisición, retención o conversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar o evaluar la estrategia de product-led growth donde el producto es el principal motor de adquisición, activación y monetización.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Talent acquisition como ventaja competitiva',
                'description'       => 'El recruiting como fuente de ventaja: la marca empleadora, el proceso de selección que atrae a los mejores y la pipeline de talento que asegura que la empresa siempre puede ejecutar su estrategia de crecimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en talent acquisition, employer branding y en la construcción de procesos de selección que atraen a los mejores candidatos en mercados competitivos. Quiero que me ayudes a diseñar el sistema de talent acquisition de mi organización para que sea una fuente de ventaja competitiva real.

Mi contexto:
- Tamaño y etapa de la empresa: [startup, scale-up, empresa establecida; número de empleados]
- Perfiles más difíciles de contratar: [ingenieros, comerciales, ejecutivos, perfiles especializados]
- Número de contrataciones previstas en los próximos doce meses: [desglose por área si lo tienes]
- Marca empleadora actual: [desconocida, conocida en el sector, reconocida como empleador de referencia]
- Proceso de selección actual: [describe brevemente cómo seleccionas hoy]
- Principal problema de recruiting que sufres: [tiempo de cierre largo, candidatos de baja calidad, abandono en el proceso, etc.]

Con esa información, quiero que me entregues un sistema completo en estas áreas:

**1. La propuesta de valor para el empleado (EVP)**
Diseña la Employee Value Proposition de mi empresa: el conjunto de razones por las que alguien debería venir a trabajar aquí y no a la competencia. Incluye: cómo investigar qué valoran realmente los candidatos que quiero atraer, cómo articular la EVP en términos concretos (no el "somos apasionados y trabajamos en equipo"), cómo diferenciar la EVP según el perfil del candidato y cómo validar que la EVP es auténtica y no aspiracional. Proporciona el template de la EVP completa.

**2. La marca empleadora: cómo hacerte visible para los candidatos correctos**
Diseña la estrategia de employer branding para los próximos doce meses. Incluye: qué canales usar para cada perfil de candidato (LinkedIn, GitHub, comunidades técnicas, Stack Overflow, Glassdoor, eventos), qué tipo de contenido publicar (behind the scenes, historias de empleados, cómo trabajamos, qué construimos), quién crea el contenido y con qué frecuencia, y cómo medir si la marca empleadora está generando tráfico de candidatos cualificados.

**3. El proceso de selección que filtra y atrae**
Diseña el proceso de selección ideal para los perfiles clave que quiero contratar. Incluye: las fases del proceso (número, tipo y duración), cómo diseñar pruebas técnicas o de caso que sean retadoras pero respeten el tiempo del candidato, cómo estructurar las entrevistas para evaluar con rigor y consistencia, quién participa en el proceso y cuándo, y cómo asegurar que la experiencia del candidato es positiva incluso cuando no lo seleccionas.

**4. La pipeline de talento: de reactiva a proactiva**
Diseña el sistema para construir una pipeline de talento proactiva que no depende de que el puesto esté abierto para empezar a buscar. Incluye: cómo identificar y conectar con candidatos pasivos, cómo nutrir las relaciones con talento que no está buscando ahora, cómo organizar el CRM de candidatos, y el proceso de activación cuando abre un puesto para el que ya tienes candidatos calificados en pipeline.

**5. Reducción del time-to-hire sin sacrificar calidad**
Diseña el sistema para reducir el tiempo desde que abre el puesto hasta que el candidato acepta la oferta. Incluye: cómo reducir los tiempos de respuesta en cada fase, cómo eliminar las etapas del proceso que no aportan información diferencial, cómo gestionar la coordinación de agendas del comité de selección, y cómo hacer el offer management para minimizar el tiempo entre la decisión y la aceptación. Define el SLA de recruiting para cada tipo de posición.

**6. Diversidad e inclusión en el proceso de selección**
Diseña el proceso de selección que reduce los sesgos inconscientes y atrae candidatos diversos. Incluye: cómo escribir job descriptions que no ahuyenten a candidatos de grupos subrepresentados, cómo estructurar las entrevistas para que sean consistentes y comparables, qué formación necesita el comité de selección y cómo medir si el proceso está generando diversidad real o solo apariencia de diversidad.

**7. Métricas de talent acquisition de clase mundial**
Define el dashboard de métricas que usaré para medir la eficacia del proceso de talent acquisition. Incluye: time-to-fill, time-to-hire, cost-per-hire, offer acceptance rate, candidate experience score, source of hire, quality of hire (medida a los seis y doce meses) y retention de las contrataciones de los últimos doce meses. Para cada métrica, el benchmark de referencia y el objetivo a alcanzar.

Responde en español. Sé concreto y accionable. Ten en cuenta que el talent acquisition de clase mundial no trata a los candidatos como recursos sino como clientes de una experiencia que empieza mucho antes de que abra el puesto y termina mucho después de que el nuevo empleado se integre.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar el sistema de talent acquisition que atrae a los mejores candidatos y convierte el recruiting en una ventaja competitiva real.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión del crecimiento: escalar con disciplina financiera',
                'description'       => 'Los desafíos financieros del crecimiento rápido: el capital de trabajo que se estira, la contratación anticipada y los controles que evitan que el crecimiento destruya la caja antes de que el negocio llegue a la rentabilidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas corporativas, CFO de startups y en la gestión financiera de empresas en fase de crecimiento acelerado. Quiero que me ayudes a diseñar el sistema financiero que permite escalar el negocio sin que el crecimiento destruya la caja o la rentabilidad.

Mi contexto:
- Etapa y tamaño del negocio: [ARR o ingresos actuales, tasa de crecimiento, número de empleados]
- Modelo de negocio: [SaaS, marketplace, e-commerce, servicios, hardware+software, otro]
- Situación de caja actual: [runway en meses, fuente de financiación: bootstrapped, VC, deuda]
- Principal desafío financiero que estoy sufriendo: [burn rate alto, ciclo de cobro largo, contratación anticipada sin revenue, gestión del capital de trabajo]
- Métricas financieras que ya sigues: [menciona las que monitorizas]
- Próxima ronda de financiación o hito financiero: [si lo hay]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. El modelo financiero del crecimiento**
Diseña el modelo mental y los componentes del modelo financiero que necesito para escalar con disciplina. Incluye: cómo modelar el crecimiento de ingresos con sus supuestos (cohorts de clientes, expansión, churn), cómo modelar los costes que escalan con el negocio (COGS, S&M, R&D, G&A), cómo calcular la estructura de costes objetivo a medida que creces (benchmarks por tipo de negocio), y cómo construir el modelo de tres escenarios (base, optimista, pesimista) que usaré para tomar decisiones.

**2. La gestión del capital de trabajo en el crecimiento**
Diseña el sistema para gestionar el capital de trabajo durante el crecimiento acelerado. Incluye: cómo optimizar el ciclo de cobro (invoicing rápido, términos de pago agresivos, factoring si es necesario), cómo gestionar el ciclo de pago a proveedores (términos favorables, pagos diferidos), cómo gestionar el inventario si aplica, y los indicadores de alerta de estrés de capital de trabajo que debo monitorizar antes de que el problema se vuelva crítico.

**3. El burn rate y el runway: cómo gestionar la caja con precisión**
Diseña el sistema de gestión de tesorería y burn rate. Incluye: cómo calcular el burn neto de forma precisa (qué incluir y qué no), cómo hacer el forecast de caja a trece semanas (rolling cash forecast), cuánto runway mantener como colchón mínimo, los escenarios de stress test de caja y el proceso de decisión para ampliar runway (recorte de costes, aceleración de ingresos, financiación adicional) cuando el runway cae por debajo del umbral.

**4. La contratación anticipada: cuándo contratar antes del revenue**
Diseña el framework para tomar decisiones de contratación anticipada que son necesarias para crecer pero que aumentan el burn antes de generar ingresos. Incluye: cómo calcular el payback period de una contratación (cuántos meses hasta que el nuevo empleado genera más de lo que cuesta), cómo priorizar qué roles contratar primero, cómo gestionar el riesgo de contratar demasiado rápido (overhiring) y el proceso de revisión del headcount que evita tener que hacer layoffs.

**5. Las métricas financieras del crecimiento eficiente**
Define el set de métricas que usaré para asegurarme de que el crecimiento es eficiente y no está destruyendo valor. Incluye: el Rule of 40 (growth rate + EBITDA margin), el CAC Payback Period, el Burn Multiple (cuánto burning por cada dólar de ARR nuevo), el Magic Number (eficiencia del gasto en ventas y marketing), y el NRR como indicador de la calidad del revenue. Para cada métrica, el benchmark de referencia para el tipo de negocio y etapa en la que estoy.

**6. El camino a la rentabilidad: planificación del breakeven**
Diseña el plan financiero hacia la rentabilidad. Incluye: cómo calcular el punto de equilibrio (breakeven) por unidad de negocio y para la empresa total, cómo construir el plan de dos o tres años hacia la rentabilidad con los hitos intermedios, cómo comunicar la trayectoria hacia la rentabilidad a los inversores y al equipo, y qué señales en el modelo financiero indican que necesito replantear la estrategia de crecimiento antes de quedarse sin caja.

**7. Los controles financieros que escalan con el negocio**
Diseña el sistema de controles financieros internos que creceré a medida que escala la empresa. Incluye: el proceso de aprobación de gastos por nivel de autorización, el proceso de presupuestación y revisión mensual con los managers, el sistema de alertas de desviación del presupuesto, y los controles de cierre mensual que garantizan que los datos financieros son fiables y oportunos para tomar decisiones.

Responde en español. Sé concreto y específico para el tipo de negocio y etapa que tengo. Ten en cuenta que el crecimiento sin disciplina financiera no es crecimiento sino consumo de caja, y que los mejores negocios crecen rápido y eficientemente al mismo tiempo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar el sistema financiero que permite escalar el negocio con disciplina, controlando el burn, el capital de trabajo y el camino a la rentabilidad.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Protección de IP como activo de crecimiento',
                'description'       => 'La propiedad intelectual como fuente de ventaja competitiva y barrera de entrada: las patentes, las marcas, los secretos industriales y la estrategia legal de IP que maximiza el valor de los activos intangibles.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en propiedad intelectual, estrategia de IP y en la construcción de portfolios de activos intangibles que crean ventajas competitivas y barreras de entrada. Quiero que me ayudes a diseñar la estrategia de protección y monetización de la propiedad intelectual de mi empresa.

Mi contexto:
- Tipo de negocio y sector: [descripción del negocio y sector de actividad]
- Activos intangibles que creo que tengo: [tecnología propietaria, marca, contenido, datos, procesos, etc.]
- Protección de IP actual: [ninguna, marcas registradas, patentes, derechos de autor, secretos industriales]
- Principal riesgo de IP que me preocupa: [copia de la competencia, infracción de IP de terceros, pérdida de secretos industriales por empleados]
- Mercados geográficos donde opero o quiero operar: [España, UE, EEUU, global]
- Etapa y tamaño de la empresa: [startup, scale-up, empresa establecida]

Con esa información, quiero que me entregues una estrategia completa en estas áreas:

**1. Auditoría de activos de IP**
Diseña el proceso de auditoría de propiedad intelectual para identificar todos los activos intangibles de mi empresa que merecen protección. Incluye: las categorías de IP a revisar (invenciones y tecnología, marca y reputación, contenido y datos, know-how y procesos), las preguntas que debo hacerle a cada área de la empresa para descubrir activos ocultos, y cómo priorizar qué proteger primero basándome en el valor estratégico y el riesgo de copia.

**2. La estrategia de patentes**
Explica cuándo tiene sentido patentar y cuándo no, y cómo diseñar la estrategia de patentes para una empresa tecnológica. Incluye: los criterios de patentabilidad (novedad, actividad inventiva, aplicación industrial), la diferencia entre patente de producto, de proceso y de sistema, cómo decidir entre patentar o mantener el secreto industrial, la estrategia de portfolio de patentes (defensiva vs. ofensiva), los costes aproximados de patente en España, la UE y EEUU, y el proceso de filing desde la invención hasta la concesión.

**3. La estrategia de marcas y brand protection**
Diseña la estrategia de registro y protección de marcas. Incluye: cómo elegir un nombre de marca que sea registrable y defensible, el proceso de búsqueda de anterioridades antes de comprometerse con un nombre, la estrategia de registro por clases de Nice y territorios, cómo monitorizar el mercado para detectar infracciones, y el proceso de acción ante una infracción (desde el requerimiento amistoso hasta el procedimiento judicial).

**4. Protección de secretos industriales y know-how**
Diseña el sistema de protección de los secretos industriales y el know-how propietario de la empresa. Incluye: qué califica como secreto industrial según la Directiva de Secretos Comerciales, las medidas razonables para mantener la confidencialidad que la ley exige, cómo redactar los acuerdos de confidencialidad con empleados, socios y proveedores, el proceso de offboarding de empleados con acceso a información sensible, y cómo documentar los secretos industriales para poder defenderlos si hay una infracción.

**5. La estrategia de IP en las relaciones contractuales**
Diseña las cláusulas y protecciones de IP que incluiré en los contratos con empleados, contratistas, socios y clientes. Incluye: las cláusulas de asignación de IP en los contratos laborales (qué pasa con las invenciones que hace el empleado durante su jornada), los acuerdos de confidencialidad efectivos, las cláusulas de IP en los contratos con clientes (quién es dueño del trabajo creado para un cliente), y la due diligence de IP que haré antes de cualquier colaboración o adquisición.

**6. Monetización de la IP**
Diseña las estrategias para monetizar la propiedad intelectual más allá del uso propio. Incluye: el modelo de licencias (cómo estructurar una licencia de patente o de marca), la estrategia de franquicia como modelo de expansión basado en IP, los acuerdos de cross-licensing con competidores o socios estratégicos, y la valoración de activos de IP para una ronda de financiación o una operación de M&A.

**7. Gestión del riesgo de infracción de IP de terceros**
Diseña el sistema de gestión del riesgo de que mi empresa infrinja involuntariamente la IP de terceros. Incluye: el proceso de freedom-to-operate (FTO) antes de lanzar un nuevo producto o entrar en un nuevo mercado, cómo mantener actualizado el conocimiento del panorama de patentes relevante para mi tecnología, qué hacer cuando recibes una notificación de infracción (la respuesta correcta antes de escalar al litigio), y cómo gestionar la IP en el contexto del uso de modelos de IA generativa y contenido generado por IA.

Responde en español. Sé concreto y específico para el tipo de negocio y sector que tengo. Ten en cuenta que la IP es un activo que se deprecia rápidamente si no se gestiona activamente y que la decisión de proteger o no proteger tiene consecuencias que se ven años después.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la estrategia de protección y monetización de la propiedad intelectual de la empresa como fuente de ventaja competitiva.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Net Revenue Retention: el motor del crecimiento en SaaS',
                'description'       => 'El NRR como métrica principal de un negocio SaaS saludable: cómo calcularlo, qué lo mueve, las palancas de retención y expansión y el playbook que lleva el NRR por encima del 120%.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer success, métricas SaaS y en los modelos de crecimiento de negocios de suscripción. Quiero que me ayudes a entender en profundidad el Net Revenue Retention, las palancas que lo mueven y el playbook para llevarlo a niveles de clase mundial.

Mi contexto:
- Tipo de producto SaaS: [descripción del producto y modelo de precios]
- NRR actual si lo conoces: [porcentaje actual o di que no lo has medido]
- Principal fuente de pérdida de revenue: [churn de clientes, downgrades, o ambas]
- Principal fuente de expansión de revenue: [upsell, cross-sell, seat expansion, usage-based]
- Segmento de clientes principal: [SMB, mid-market, enterprise]
- Tamaño del equipo de customer success: [número de CSMs y cuentas por CSM]

Con esa información, quiero que me entregues un playbook completo en estas áreas:

**1. NRR: definición, cálculo e interpretación**
Explica en detalle qué es el Net Revenue Retention, cómo se calcula exactamente (fórmula con numerador y denominador), la diferencia entre NRR y GRR (Gross Revenue Retention), por qué el NRR puede ser mayor que el 100% y qué significa cuando lo es. Incluye el cálculo con un ejemplo numérico concreto para mi tipo de negocio. Explica también por qué el NRR es la métrica más importante en un negocio SaaS y qué cuenta sobre la salud del negocio que otras métricas no cuentan.

**2. Benchmarks de NRR por segmento y tipo de producto**
Proporciona los benchmarks de NRR para distintos tipos de negocio SaaS: SaaS de consumo, SMB SaaS, mid-market SaaS, enterprise SaaS, y usage-based SaaS. Explica por qué los benchmarks son distintos según el segmento y cómo comparar mi NRR con la referencia correcta para el tipo de negocio que tengo. Incluye los rangos de NRR que corresponden a negocio en peligro, negocio sano y negocio de clase mundial para mi segmento.

**3. Diagnóstico: por qué mi NRR está donde está**
Diseña el proceso de diagnóstico para entender con precisión qué está impulsando y qué está deprimiendo mi NRR. Incluye: cómo descomponer el NRR en sus cuatro componentes (starting MRR, churn MRR, contraction MRR, expansion MRR), cómo analizar el churn por cohorte para identificar patrones, cómo analizar el churn por segmento de cliente para ver dónde se concentra, y cómo identificar las causas raíz del churn con investigación cualitativa (entrevistas de churn, encuestas de cancelación).

**4. El playbook de reducción del churn**
Diseña el playbook para reducir el churn de clientes y el contraction revenue. Incluye: el sistema de health scoring para identificar clientes en riesgo antes de que cancelen, el proceso de intervención temprana cuando el health score cae (qué hace el CSM, en qué orden, con qué mensaje), el playbook de save de clientes que ya han enviado aviso de cancelación (qué ofrecer, qué no ofrecer, quién interviene), y el proceso de análisis post-churn para aprender de cada cancelación.

**5. El playbook de expansión de revenue**
Diseña el playbook para generar expansión revenue sistemáticamente. Incluye: el proceso de identificación de oportunidades de upsell basado en señales de uso del producto, el momento óptimo para iniciar la conversación de expansión, los triggers de cross-sell que la plataforma o el uso del producto envían, el proceso de coordinación entre CS y ventas para las oportunidades de expansión enterprise, y las métricas de eficacia del programa de expansión (tasa de conversión de las conversaciones de upsell, expansión MRR por CSM).

**6. El modelo de customer success que lleva el NRR al 120%+**
Diseña el modelo operativo de customer success que produce un NRR por encima del 120%. Incluye: la segmentación de clientes por potencial de expansión y riesgo (y el modelo de cobertura correspondiente), el journey del cliente post-venta con hitos de engagement que correlacionan con la retención, la cadencia de touchpoints por segmento, las métricas de actividad del CSM que predicen el NRR de la cohorte que gestiona, y el proceso de QBR (Quarterly Business Review) que refuerza el valor y descubre oportunidades de expansión.

**7. El NRR como métrica de inversión y de valoración**
Explica cómo el NRR impacta en la valoración de un negocio SaaS y por qué es una de las métricas más importantes para los inversores. Incluye: la relación entre NRR y el múltiplo de valoración, cómo proyectar el crecimiento futuro de revenue basándose en el NRR actual, cómo presentar el NRR y la trayectoria de mejora en el pitch a inversores, y los umbrales de NRR que corresponden a distintos perfiles de inversión (seed, series A, growth).

Responde en español. Sé concreto y accionable. Ten en cuenta que el NRR es el resultado de cientos de micro-decisiones operativas y que mejorarlo requiere disciplina sistemática y no acciones puntuales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Entender en profundidad el NRR y diseñar el playbook de retención y expansión que lleva el Net Revenue Retention a niveles de clase mundial.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Escalar ingresos como freelance sin escalar horas',
                'description'       => 'El modelo de ingresos del freelance que crece: los productos digitales, la formación, el retainer y los modelos de precio que desconectan los ingresos del tiempo y crean el camino hacia la escalabilidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en modelos de negocio para profesionales independientes y en las estrategias para escalar los ingresos del freelance sin escalar linealmente las horas de trabajo. Quiero que me ayudes a diseñar el modelo de ingresos que me permita ganar más sin trabajar más horas.

Mi contexto:
- Especialidad y tipo de trabajo que hago: [descripción de tu servicio actual]
- Modelo de pricing actual: [tarifa por hora, por proyecto, por resultado, retainer]
- Ingresos actuales y techo que has encontrado: [rango de ingresos y cuántas horas trabajas]
- Proyectos o servicios más recurrentes: [qué tipo de trabajo haces una y otra vez]
- Audiencia o comunidad que tienes si la tienes: [newsletter, red social, comunidad, lista de espera]
- Qué has intentado ya para escalar: [menciona si has probado algo]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Diagnóstico: por qué el modelo actual tiene techo**
Explica el modelo de ingresos del freelance hora-por-hora y por qué inevitablemente tiene un techo. Incluye: el cálculo del ingreso máximo teórico con el modelo actual (horas facturables máximas × tarifa), por qué en la práctica el techo es mucho más bajo (horas no facturables, vacaciones, baja, marketing), y las señales que indican que ya estoy en el techo o cerca de él. Después diseña el mapa de los modelos de ingresos alternativos ordenados de menor a mayor apalancamiento y de menor a mayor riesgo de implementación.

**2. El modelo de retainer: ingresos recurrentes predecibles**
Diseña el modelo de retainer para convertir clientes puntuales en clientes recurrentes. Incluye: cómo estructurar el retainer (qué incluye, qué no incluye, cómo gestionar el scope creep), cómo fijar el precio del retainer (basado en valor y no en horas), cómo vender el retainer a un cliente que ya trabaja contigo por proyecto, cuántos retainers puedes gestionar simultáneamente y cómo gestionar la renovación. Proporciona el template del acuerdo de retainer y los términos que debes incluir.

**3. Los productos digitales: empaquetar tu conocimiento una vez, vender infinitas veces**
Diseña la estrategia de productos digitales que puedo crear con mi conocimiento actual. Incluye: los tipos de productos digitales apropiados para un freelance (plantillas, frameworks, guías, herramientas, cursos grabados, libros), el proceso de elección del producto correcto para empezar (el que resuelve el problema que resuelvo en mis proyectos de forma escalable), cómo crear el primer producto sin distraerse del negocio principal, la estrategia de lanzamiento y los canales de distribución. Propón el producto digital concreto que más encaja con mi especialidad.

**4. La formación y los programas de enseñanza**
Diseña la estrategia de formación como fuente de ingresos de alto margen. Incluye: los modelos de formación disponibles (workshops presenciales, masterclasses online, cursos grabados, programas de mentoría grupal, cohorts en directo), cómo elegir el formato más adecuado para mi conocimiento y audiencia, cómo fijar el precio de la formación, cómo validar el programa con la primera cohorte antes de invertir en producción, y cómo escalar la formación sin sacrificar calidad.

**5. El pricing basado en valor: desconectar el precio del tiempo**
Diseña la transición del pricing por hora al pricing basado en valor. Incluye: cómo calcular el valor que genero para mis clientes en términos de negocio (ahorro de tiempo, aumento de ingresos, reducción de riesgo), cómo presentar el precio basado en valor a un cliente acostumbrado a pagar por hora, cómo gestionar la conversación cuando el cliente pregunta cuántas horas tardarás, y cómo usar el pricing basado en valor para aumentar el margen por proyecto sin necesariamente aumentar las horas.

**6. La audiencia como activo: construir antes de necesitar**
Diseña la estrategia para construir una audiencia que amplifique todos los modelos de ingresos anteriores. Incluye: qué canal de audiencia construir primero (newsletter, comunidad, perfil de LinkedIn, YouTube, podcast) según el tipo de conocimiento que tengo y mi estilo de comunicación, qué tipo de contenido publicar para atraer a mi cliente ideal y posicionarme como referente, la cadencia de publicación mínima viable que no interfiere con los proyectos de cliente, y cómo monetizar la audiencia de forma natural y no intrusiva.

**7. El plan de transición: del modelo actual al modelo escalable**
Diseña el plan de doce meses para transicionar del modelo de ingresos actual a un modelo más escalable sin comprometer los ingresos del presente. Incluye: el orden en el que implementaré cada nueva fuente de ingresos, los hitos por trimestre, cuánto tiempo dedicaré a cada iniciativa junto al trabajo de cliente, cómo medir si la transición está funcionando, y el criterio para decidir cuándo una nueva fuente de ingresos está lista para recibir más dedicación. Define qué porcentaje de mis ingresos quiero que venga de cada fuente al final de los doce meses.

Responde en español. Sé concreto y realista. Ten en cuenta que escalar los ingresos del freelance es un proceso gradual que requiere construir nuevas capacidades sin destruir el negocio actual, y que el mayor error es perseguir todos los modelos a la vez en lugar de ir uno a uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar el modelo de ingresos escalable del freelance que desconecta los ingresos del tiempo con retainers, productos digitales y formación.',
                'vote_score'        => 46,
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
