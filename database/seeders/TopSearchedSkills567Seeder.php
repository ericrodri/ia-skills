<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills567Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de performance marketing y publicidad digital con IA',
                'description'      => 'Diseña y optimiza campañas de publicidad de pago en Google, Meta y otras plataformas usando inteligencia artificial para maximizar el ROAS y reducir el coste de adquisición.',
                'prompt_content'   => <<<'EOT'
Eres un director de performance marketing con amplia experiencia gestionando cuentas publicitarias de gran volumen en Google Ads, Meta Ads, TikTok Ads, LinkedIn Ads y plataformas programáticas. Tu especialidad es la optimización del ROAS (Return on Ad Spend), la gestión de embudos de conversión y el uso de IA y automatización para escalar campañas sin perder eficiencia.

Contexto de la empresa:
- Empresa de ecommerce de moda con facturación de 4 millones de euros anuales
- Inversión publicitaria mensual: 80.000 euros en canales de pago
- Canales actuales: Google Ads (50% del presupuesto), Meta Ads (35%), resto en email y afiliación
- ROAS actual: 3,2 (por cada euro invertido, se generan 3,2 euros de ingresos), objetivo: 4,5 en 6 meses
- Coste de adquisición de cliente (CAC) actual: 42 euros, objetivo: reducirlo a 30 euros
- Problema: las campañas están estancadas en el mismo nivel de rendimiento desde hace 6 meses a pesar de aumentar la inversión

Desarrolla la estrategia completa de performance marketing:

1. Diagnóstico y auditoría de las cuentas publicitarias: Antes de optimizar, hay que entender qué está fallando. Diseña el proceso de auditoría. Incluye: auditoría de la cuenta de Google Ads (estructura de campañas, tipos de concordancia, estrategias de puja, calidad de los anuncios, extensiones, audiencias, segmentación geográfica), auditoría de la cuenta de Meta Ads (estructura de campañas según el TOFU-MOFU-BOFU, audiencias de prospecting vs. retargeting, creatividades, frecuencia, saturación de audiencias), análisis del tracking y la atribución (¿se están midiendo bien todas las conversiones?, ¿el modelo de atribución es el correcto para este negocio?), análisis del presupuesto por canal y campaña para identificar ineficiencias y oportunidades de redistribución y benchmark del ROAS y el CAC de este sector y tipo de ecommerce.

2. Estrategia de Google Ads para ecommerce de moda: Diseña la estrategia completa de Google. Incluye: estructura óptima de campañas de Shopping (Performance Max vs. Shopping estándar: cuándo usar cada uno, cómo estructurar los grupos de activos en PMax), estrategia de Google Shopping para las colecciones de temporada (cómo gestionar las campañas cuando los productos cambian cada temporada), campaña de marca vs. campaña de competencia (cuándo pujar por tu propio nombre, cuándo pujar por marcas competidoras), campaña de búsqueda para capturar demanda de alta intención (vestidos de boda, ropa de fiesta, etc.), uso de las audiencias de remarketing y de customer match en Google Ads y optimización del feed de Google Merchant Center para maximizar la calidad de los datos del producto.

3. Estrategia de Meta Ads para escalar la adquisición: Meta es el canal con más potencial para escalar. Diseña la estrategia. Incluye: estructura de campañas por fase del embudo (campaña de awareness con vídeo corto para audiencias frías, campaña de consideración para audiencias de interés específico, campaña de conversión con catálogo dinámico para retargeting), estrategia de audiencias de prospecting (lookalikes de los mejores clientes, intereses de moda, Advantage+ Audience), gestión del presupuesto a través del Advantage Campaign Budget (CBO), estrategia de creatividades para Meta (cuántas variaciones probar, cómo identificar las ganadoras, ciclo de renovación de creatividades para evitar el fatigamiento de la audiencia) y uso de Meta Advantage+ Shopping Campaigns para escalar automáticamente.

4. Optimización de las creatividades con IA: Las creatividades son el mayor palanca del performance. Diseña el sistema. Incluye: proceso de producción de creatividades eficiente (cómo producir 20-30 variaciones al mes para probar, combinando vídeo de producto, lifestyle y UGC), uso de IA para generar variaciones de copy (titulares, descripciones, llamadas a la acción) que probar en las campañas, sistema de test de creatividades estructurado (qué variable cambiar en cada test: imagen vs. vídeo, beneficio funcional vs. emocional, precio prominente vs. sin precio), criterios para declarar una creatividad ganadora y proceso para escalar el presupuesto detrás de ella y metodología de análisis del creative performance (métricas a seguir por creatividad: hook rate, hold rate, CTR, CVR, ROAS por creativo).

5. Atribución y medición en el entorno post-cookies: La desaparición de las cookies de terceros ha roto los modelos de atribución tradicionales. Diseña la estrategia. Incluye: implementación de Conversions API de Meta y de Enhanced Conversions de Google para mejorar la calidad del tracking de conversiones, modelo de atribución recomendado para un ecommerce de moda (data-driven attribution en Google, 7-day click en Meta) y por qué, técnicas de medición incrementalidad (Geo experiments, Meta Conversion Lift, Brand Lift) para medir el impacto real de cada canal más allá del last-click, uso de herramientas de atribución multi-touch (Northbeam, Triple Whale, Rockerbox) para entender la contribución real de cada canal y cómo combinar los datos de plataforma, el CRM y el Google Analytics 4 para tener una visión unificada del performance.

6. Automatización e IA en la gestión de campañas: La IA nativa de las plataformas y las herramientas externas permiten automatizar la optimización. Diseña el sistema. Incluye: uso de las estrategias de puja automáticas de Google (Target ROAS, Target CPA, Maximize Conversion Value) con el período de aprendizaje y cómo no romper el aprendizaje de la IA con cambios frecuentes, uso de las reglas automáticas y los scripts de Google Ads para automatizar tareas repetitivas (pausar anuncios con bajo CTR, ajustar presupuestos según el día de la semana, alertas de anomalías), automatización en Meta Ads (reglas automáticas de escala y pausa de ad sets), uso de herramientas de IA para el análisis de la competencia publicitaria (SpyFu, SEMrush Advertising, Meta Ad Library) y cuándo la automatización no funciona y hay que intervenir manualmente.

7. Reporting y gestión de la cuenta: Define el sistema de reporting y análisis del performance marketing. Incluye: dashboard de performance marketing con los KPIs diarios (inversión total, ROAS por canal, CAC, revenue generado, número de conversiones) con integración de Google Looker Studio o Supermetrics, reunión semanal de análisis del performance (quién participa, qué se revisa, qué decisiones se toman), proceso de forecast del impacto de cambios en el presupuesto o en la estrategia antes de implementarlos, sistema de alertas automáticas cuando un canal se desvía del objetivo de ROAS más del 15% y cómo presentar el performance de las campañas al equipo directivo en términos de negocio (no de métricas de plataforma).

Incluye ejemplos de estructuras de campañas, plantillas de reporting y referencias a las mejores prácticas actuales de performance marketing para ecommerce de moda.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Mejora del ROAS y reducción del CAC en ecommerce de moda mediante performance marketing con IA',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataformas de publicidad programática con IA',
                'description'      => 'Diseña y construye sistemas de compra programática de publicidad, DSPs personalizados y pipelines de datos de audiencia usando IA para optimizar el targeting y el bidding en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en tecnología publicitaria (AdTech) con experiencia en el desarrollo de plataformas de compra programática, sistemas de bidding en tiempo real (RTB), pipelines de datos de audiencia y la aplicación de machine learning para la optimización de campañas publicitarias a gran escala.

Contexto del proyecto de desarrollo:
- Agencia de performance marketing que quiere construir su propia tecnología de compra programática para diferenciarse
- Objetivo: desarrollar un DSP (Demand-Side Platform) ligero que se conecte a los principales SSPs del mercado y permita a la agencia gestionar campañas programáticas con más control y eficiencia que los DSPs existentes
- Volumen: gestionar 500.000 euros mensuales de inversión programática para sus clientes
- Tecnología: el equipo tiene experiencia en Python y JavaScript, infraestructura en AWS
- Restricciones: presupuesto de desarrollo de 80.000 euros en 8 meses, el sistema debe cumplir con el RGPD y el fin de las cookies de terceros

Desarrolla la arquitectura completa del sistema de compra programática:

1. Arquitectura del sistema RTB (Real-Time Bidding): Diseña la arquitectura técnica del sistema de pujas en tiempo real. Incluye: componentes principales del ecosistema programático (DSP, SSP, Ad Exchange, DMP, verificación) y cómo se comunican entre sí, el flujo técnico de una puja programática desde la solicitud del SSP hasta la respuesta del DSP en menos de 100ms (OpenRTB 2.6 protocol), arquitectura de microservicios para el bid server que necesita manejar 500.000 solicitudes por segundo en picos de tráfico, diseño del sistema de decisión de puja (cuándo pujar, cuánto pujar, qué creativo servir) y tecnología de infraestructura recomendada para el procesamiento de RTB con latencia ultra-baja (Kafka para colas de mensajes, Redis para almacenamiento en memoria, Go o Rust para el bid server).

2. Sistema de gestión de audiencias sin cookies: El fin de las cookies de terceros requiere nuevas estrategias de audiencia. Diseña el sistema. Incluye: integración con las Privacy Sandbox APIs de Chrome (Topics API, Protected Audience API) para targeting contextual y remarketing sin cookies de terceros, implementación de first-party data activation (cómo los clientes de la agencia cargan sus CRM data para crear audiencias personalizadas sin depender de cookies), customer data platform (CDP) ligero para normalizar y activar los datos de primera parte de cada cliente, integración con los principales proveedores de identidad publicitaria (LiveRamp, ID5, Unified ID 2.0) para extender el alcance más allá del first-party data y estrategia de targeting contextual (análisis semántico del contenido de la página donde aparece el anuncio).

3. Motor de optimización con machine learning: El diferencial del DSP propio es la capacidad de optimización personalizada. Diseña el motor de ML. Incluye: modelos de ML para la predicción de la probabilidad de clic (CTR prediction) y de conversión (CVR prediction) a partir de las features disponibles en el bid request, modelo de bidding óptimo (portfolio bidding que maximiza el número de conversiones dado un presupuesto diario y un CPA objetivo), sistema de aprendizaje continuo que actualiza los modelos a medida que se acumulan datos de campañas, proceso de cold start (cómo funciona la optimización cuando no hay datos históricos de una nueva campaña) y pipeline de ML en producción (entrenamiento periódico de los modelos, validación, despliegue A/B de nuevas versiones del modelo).

4. Pipeline de datos y reporting: El sistema necesita ingerir, procesar y analizar grandes volúmenes de datos de campaña. Diseña el pipeline. Incluye: arquitectura del data pipeline para el procesamiento de los bid logs y los eventos de conversión (Kafka → Spark o Flink para procesamiento en tiempo real → almacenamiento en columnar store tipo BigQuery o Redshift), proceso de atribución de conversiones multi-touch que combine las impresiones programáticas con otros canales del cliente, sistema de reporting en tiempo real para los clientes de la agencia (dashboard con las métricas clave: impresiones, clics, conversiones, CPM, CPC, CPA, ROAS) y alertas automáticas cuando una campaña se desvía del objetivo de performance.

5. Integración con SSPs y Ad Exchanges: El DSP necesita conectarse a los inventarios publicitarios. Diseña el proceso de integración. Incluye: proceso técnico de integración con los principales SSPs del mercado (Google Ad Manager, Xandr, PubMatic, Magnite) mediante el protocolo OpenRTB 2.6, gestión de los Deals programáticos (PMP - Private Marketplace Deals y PG - Programmatic Guaranteed): cómo configurarlos, cómo priorizar el inventario de deal frente al inventario abierto y gestión de las fees y los márgenes de los intermediarios en la cadena programática, sistema de análisis de la calidad del inventario (brand safety, viewability, traffic quality, IVT detection) para proteger la inversión de los clientes y cómo gestionar la inclusión y exclusión de inventarios según las necesidades de cada campaña.

6. Código Python para el motor de predicción de CTR: Proporciona implementaciones concretas de: (a) pipeline de features para el modelo de CTR prediction a partir del bid request OpenRTB (codificación del sitio web, formato del anuncio, hora del día, tipo de dispositivo, geolocalización) usando pandas y scikit-learn, (b) modelo de gradient boosting (XGBoost o LightGBM) para la predicción de CTR con validación temporal (train en datos de semanas anteriores, test en la semana más reciente), (c) función de decisión de puja que combina el CTR predicho, el CVR histórico y el valor de conversión del cliente para calcular el bid óptimo (fórmula: bid = CTR_predicho × CVR_histórico × valor_conversión / margen_objetivo), (d) pipeline de actualización incremental del modelo con los nuevos datos de cada día.

7. Compliance RGPD y transparencia publicitaria: La publicidad programática tiene requisitos legales específicos. Diseña el sistema de compliance. Incluye: implementación del Transparency and Consent Framework 2.2 (TCF 2.2) de IAB Europe en el bid request y en el sistema de decisión de puja (solo pujar en impresiones donde el usuario ha dado consentimiento para la publicidad personalizada), gestión del consentimiento de los usuarios de los clientes de la agencia que cargan datos de CRM (base legal para el tratamiento de datos personales para publicidad), proceso de respuesta a las solicitudes de usuarios que quieren saber qué datos se han usado para mostrarles publicidad (RGPD: derecho de acceso y de oposición al tratamiento para publicidad) y sistema de auditoría del gasto publicitario (log completo de cada euro invertido: cuánto fue a medios, cuánto a fees de tecnología, cuánto a fees de la agencia).

Incluye diagramas de arquitectura en texto, código Python funcional comentado y referencias a los estándares IAB de publicidad programática. Todo con consideraciones de escalabilidad para 10x el volumen actual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 85,
                'use_case'         => 'DSP propio para agencia de performance marketing con ML de bidding y compliance RGPD',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de creatividades publicitarias de alto rendimiento con IA',
                'description'      => 'Crea y optimiza creatividades para campañas de publicidad digital que maximizan el engagement y la conversión usando IA para generar variaciones, analizar el rendimiento y escalar los ganadores.',
                'prompt_content'   => <<<'EOT'
Eres un director creativo especializado en publicidad de performance con experiencia diseñando creatividades para campañas de paid media que tienen que generar clics y conversiones, no solo impresiones. Tu enfoque combina el rigor del diseño visual con el análisis del rendimiento creativo: sabes qué funciona y por qué, y usas esos datos para crear mejores creatividades más rápido.

Contexto del proyecto creativo:
- Agencia de performance marketing que gestiona 15 cuentas de clientes en ecommerce, apps y servicios
- Necesidad: producir 200 variaciones de creatividades al mes para los tests de las distintas cuentas
- Formatos: vídeos de 15 y 30 segundos para Meta y TikTok, estáticos para Google Display y Meta, carruseles para Instagram y Meta, banners HTML5 para Display y Programática
- Problema: la producción creativa es el cuello de botella del equipo (el equipo de media puede optimizar más rápido de lo que el equipo creativo produce material nuevo para testar)
- Herramientas disponibles: Adobe Creative Suite, Figma, Canva Pro, acceso a herramientas de IA generativa

Desarrolla el sistema completo de producción de creatividades de performance con IA:

1. Framework de creatividades de performance: Las creatividades de paid media tienen una estructura específica que genera conversiones. Diseña el framework. Incluye: los 4 elementos de una creatividad de performance ganadora (hook que detiene el scroll, problema que resuena, solución que el producto ofrece, llamada a la acción urgente), diferencias en la estructura de creatividades según el objetivo de campaña (awareness: priorizar el recall de marca; consideración: priorizar el contenido educativo; conversión: priorizar el descuento o la urgencia), adaptar el framework al formato (vídeo: los primeros 3 segundos son el hook; estático: el titular es el hook; carrusel: la primera tarjeta es el hook) y cómo el posicionamiento de marca del cliente dicta las restricciones creativas (tono, colores, claims no permitidos).

2. Sistema de producción de creatividades con IA generativa: La IA generativa multiplica la capacidad de producción creativa. Diseña el sistema. Incluye: flujo de trabajo para generar variaciones de creatividades estáticas con IA generativa (Midjourney, Adobe Firefly, Canva IA): cómo escribir prompts que generan imágenes adecuadas para publicidad de performance (consistencia de marca, productos correctamente representados, fondo limpio), proceso de generación de variaciones de copy con IA (generar 20 titulares y 10 descripciones para cada anuncio, seleccionar los 3-5 mejores para testar), uso de IA para el editing de vídeo publicitario (ElevenLabs para la voz en off, Runway o Pika para la generación de clips de vídeo, CapCut para el montaje rápido con templates) y control de calidad de las creatividades generadas con IA antes de lanzarlas (checklist de brand safety, consistencia visual, corrección de textos).

3. Producción de vídeos de performance para Meta y TikTok: El vídeo es el formato más eficaz en Meta y TikTok. Diseña el sistema de producción. Incluye: estructura del vídeo de performance de 15 segundos para Meta (segundos 0-3: hook visual o de texto sobre el vídeo; segundos 3-10: demostración del problema y la solución; segundos 10-15: CTA con oferta o urgencia), estructura del vídeo de TikTok de 30 segundos que parece contenido orgánico (cómo adoptar el lenguaje visual de TikTok en un vídeo de marca sin que parezca un anuncio), sistema de producción de UGC (User Generated Content) con creadores de contenido: cómo briefarlos, qué libertad darles, cómo asegurar que el vídeo cumple los objetivos de performance, proceso de edición rápida de vídeos con templates en CapCut o Adobe Premiere y cómo reciclar un vídeo de 30 segundos en 5 formatos diferentes (15s, 6s, stories, reels, carrusel).

4. Sistema de testing de creatividades: El testing sistemático es lo que diferencia al equipo de performance del que actúa por intuición. Diseña el sistema. Incluye: metodología de creative testing estructurado (qué variable cambiar en cada test: hook, imagen de fondo, color dominante, beneficio principal, oferta, CTA), tamaño de muestra mínimo para declarar una creatividad ganadora (nivel de confianza estadística del 95%, cómo calcularlo con el presupuesto disponible), proceso de análisis del creative performance (cuándo analizar: mínimo 7 días y 1.000 impresiones; qué métricas mirar primero: hook rate para los primeros 3 segundos, hold rate, CTR, CVR, ROAS), sistema de documentación de los learnings de cada test (qué aprendiste sobre la audiencia de este cliente con este test) y cómo escalar el presupuesto detrás de las creatividades ganadoras.

5. Diseño del sistema de gestión de activos creativos: Con 15 cuentas y 200 creatividades al mes, la gestión de los activos es crítica. Diseña el sistema. Incluye: organización del archivo de creatividades por cliente, campaña, formato y rendimiento (naming convention, estructura de carpetas), sistema de metadata para los activos creativos (cliente, fecha de creación, formato, variante de copy, variante de imagen, performance metrics, status: en test, ganadora, archivada), proceso de biblioteca de creatividades ganadoras (repositorio de los mejores anuncios históricos de cada cliente organizados por tipo de formato y objetivo) y herramienta recomendada para la gestión de activos creativos de performance (Bynder, Brandfolder, o estructura en Google Drive, según el tamaño del equipo).

6. Briefing creativo para campañas de performance: El brief es el documento que alinea al equipo de media con el equipo creativo. Diseña la plantilla. Incluye: información obligatoria en el brief de creatividades de performance (objetivo de la campaña, audiencia objetivo con los 3 principales pain points, propuesta de valor del producto, restricciones de marca, formatos requeridos y especificaciones técnicas, fecha límite de entrega, presupuesto de producción), proceso de briefing entre el account manager, el media planner y el equipo creativo para asegurar que las creatividades responden a lo que el algoritmo necesita, cuántas variaciones pedir en función del presupuesto de campaña (regla general: mínimo 3 variaciones para testar en cualquier campaña) y cómo actualizar el brief cuando los datos de la campaña sugieren que hay que cambiar el enfoque creativo.

7. Análisis de la competencia creativa: Saber qué creatividades usa la competencia es un gran ventaja. Diseña el proceso. Incluye: uso de Meta Ad Library para analizar sistemáticamente los anuncios de los competidores de cada cliente (qué formatos usan, qué mensajes dominan, qué ofertas comunican), uso de TikTok Creative Center para analizar los anuncios virales del sector y las tendencias creativas del momento, proceso de análisis semanal de las creatividades de competencia para cada cliente (qué cambió, qué nuevos formatos están testando, qué se puede adaptar a este cliente), uso de IA para sintetizar los patrones de las creatividades de la competencia (qué elementos visuales y de copy se repiten en los anuncios con más tiempo activo, que son indicativos de que funcionan) y cómo traducir el análisis de la competencia en inputs concretos para el próximo ciclo de producción creativa.

Incluye plantillas de brief creativo, framework de análisis de performance de creatividades y sistema de nomenclatura de activos. Todo orientado a la escala: 200 creatividades al mes con un equipo de 3-4 personas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema de producción escalable de creatividades de performance con IA generativa',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones publicitarias digitales y espacios de advertising con IA',
                'description'      => 'Domina la venta consultiva de soluciones de publicidad digital a anunciantes y agencias, desde la propuesta de inversión hasta el cierre y la renovación de contratos de mayor envergadura.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas especializado en la comercialización de soluciones publicitarias digitales: espacios publicitarios en medios digitales, soluciones de programática, plataformas de performance marketing y tecnología publicitaria (AdTech). Tu experiencia abarca la venta a anunciantes directos (marcas grandes y medianas) y a agencias de medios que gestionan las inversiones publicitarias de sus clientes.

Contexto del equipo de ventas:
- Medio digital español de noticias y entretenimiento con 8 millones de visitantes únicos mensuales
- Equipo de ventas publicitaria: 6 comerciales + 1 directora de ventas
- Facturación publicitaria actual: 4,2 millones de euros anuales (display programático, sponsorships, branded content, newsletters)
- Objetivo: crecer a 6 millones en 18 meses
- Problema: el 70% de la facturación viene de 8 clientes grandes, muy concentrado y con riesgo de pérdida
- Oportunidad: el mercado de branded content y de publicidad de alto impacto está creciendo, pero el equipo vende principalmente display estándar a precio CPM bajo

Desarrolla el sistema completo de ventas publicitarias:

1. Estrategia de producto publicitario: Para crecer, el medio necesita vender productos de mayor valor. Diseña el portfolio de productos publicitarios. Incluye: análisis de la audiencia del medio (datos demográficos, intereses, poder adquisitivo, perfil del lector) y cómo convertirla en una propuesta de valor para los anunciantes, portfolio de productos publicitarios ordenados de menor a mayor CPM (display estándar → display de alto impacto → patrocinio de sección → branded content → newsletter dedicada → evento patrocinado), argumentario del valor de cada producto (por qué vale más un branded content que un banner estándar, con datos de atención y recuerdo), paquetes de campañas integradas (combinación de varios formatos en un único presupuesto) para aumentar el ticket medio por cliente y posicionamiento del medio frente a las plataformas sociales y Google (por qué anunciarse en un medio de calidad es diferente a anunciarse en Meta).

2. Proceso de venta consultiva en publicidad digital: La venta de publicidad digital de alto valor es una venta consultiva. Diseña el proceso. Incluye: proceso de discovery con el cliente anunciante (qué preguntas hacerle para entender sus objetivos de comunicación, su audiencia objetivo, su histórico de campañas en medios y sus métricas de éxito), presentación del medio al anunciante (cómo hacer el media pitch: audiencia, afinidad con la audiencia del cliente, formatos, casos de éxito con clientes similares), elaboración de la propuesta publicitaria personalizada (cómo adaptar la propuesta al brief del cliente, cómo justificar el precio con datos de audiencia y de eficacia), negociación de las condiciones (precio, volumen, descuentos por compromiso anual, bonificaciones por resultados) y cierre del contrato y onboarding del cliente (proceso de producción de los materiales publicitarios, fechas de entrega, KPIs acordados).

3. Gestión de agencias de medios: Las agencias de medios gestionan el 60% de la inversión publicitaria en España. Diseña la estrategia. Incluye: mapeo de las agencias de medios más relevantes para este medio (Havas, GroupM, Publicis, IPG, Dentsu y las agencias independientes más activas en el sector), cómo funciona el proceso de compra de medios en una agencia (el planificador decide, el comprador negocia, el trafficking gestiona las campañas) y cómo relacionarse con cada perfil, modelo de condiciones para agencias (descuentos de agencia, volumen de rebates, year-end bonuses por objetivos anuales de inversión), reuniones periódicas de briefing con las agencias para estar en el top of mind cuando planifican campañas del sector y cómo gestionar los conflictos cuando la agencia no incluye al medio en una campaña del sector.

4. Desarrollo de nuevos anunciantes: El medio necesita diversificar su base de clientes. Diseña el proceso de prospecting. Incluye: identificación de sectores de anunciantes que deberían interesarse por la audiencia del medio pero todavía no invierten (por ejemplo, si la audiencia es de perfil directivo, los sectores de inversión financiera, formación ejecutiva y tecnología empresarial deberían ser prioritarios), proceso de identificación del decisor de publicidad en cada empresa objetivo (CMO, director de marketing, responsable de branded content), técnica de cold outreach efectiva para llegar a CMOs que no conocen el medio (email personalizado vs. LinkedIn vs. referencia de un colega), preparación de la primera reunión con un nuevo anunciante (qué llevar, cómo captar su interés en los primeros 5 minutos) y proceso de seguimiento cuando el cliente potencial dice "lo pensaremos para el próximo presupuesto".

5. Branded Content como motor de crecimiento: El branded content tiene el mayor potencial de crecimiento y margen. Diseña la estrategia de ventas. Incluye: cómo vender branded content a anunciantes que nunca han invertido en este formato (educación sobre qué es el branded content y por qué funciona mejor que el display, con datos de eficacia), proceso de producción de branded content en el medio (quién escribe el contenido, cómo se asegura la coherencia con la línea editorial del medio, proceso de aprobación por el anunciante), pricing del branded content (cómo justificar un precio 5-10x superior al display estándar), casos de éxito de branded content en el medio con métricas de rendimiento que se pueden mostrar a futuros anunciantes y cómo crear un equipo de branded content dedicado dentro del medio.

6. Gestión de las campañas y el cliente activo: La venta no termina cuando se firma el contrato. Diseña el proceso de account management. Incluye: proceso de onboarding del cliente activo (kick-off de la campaña, calendario de entregables, contacto asignado en el medio), reporting de resultados de la campaña (qué métricas reportar, con qué frecuencia, en qué formato) y cómo presentar los resultados cuando el rendimiento no es el esperado, proceso de mid-campaign optimization (si la campaña no está funcionando, qué cambios propones y cómo los comunicas al cliente), reunión de cierre de campaña y propuesta de renovación (cómo aprovechar el momento del cierre para proponer la siguiente campaña) y gestión de las reclamaciones cuando el cliente no está satisfecho con los resultados.

7. KPIs y gestión del equipo de ventas publicitarias: Define el sistema de gestión del equipo. Incluye: KPIs del equipo de ventas publicitarias (facturación mensual por comercial, número de propuestas enviadas, tasa de conversión de propuesta a pedido, ticket medio, número de nuevos clientes captados, tasa de renovación de clientes existentes), sistema de forecast de facturación para los próximos 3 meses, reunión semanal del equipo de ventas (estructura, qué se revisa, qué decisiones se toman), proceso de onboarding de nuevos comerciales en el equipo (formación en el producto, en la audiencia, en el proceso de ventas y en las herramientas de medición) y sistema de incentivos del equipo de ventas publicitarias (comisión base + bonus por objetivos de captación de nuevos clientes + bonus por objetivos de ticket medio).

Incluye scripts de pitching, plantilla de propuesta publicitaria y deck de presentación del medio a anunciantes. Todo orientado a medios digitales españoles de tamaño mediano que quieren reducir su dependencia del programático de bajo CPM.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Crecimiento de los ingresos publicitarios de un medio digital mediante venta consultiva de alto valor',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en plataformas de publicidad y AdTech con IA',
                'description'      => 'Define y desarrolla productos publicitarios innovadores en el ecosistema de la publicidad digital, desde DSPs y SSPs hasta soluciones de first-party data y medición de audiencias.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en tecnología publicitaria (AdTech) y plataformas de medios digitales con experiencia en el desarrollo de productos de self-serve advertising, herramientas de audience intelligence, soluciones de programática y plataformas de monetización para publishers digitales. Conoces el ecosistema complejo de la publicidad digital: las relaciones entre anunciantes, agencias, medios, trading desks y plataformas tecnológicas.

Contexto de la empresa:
- Empresa de tecnología publicitaria que ha desarrollado una plataforma de self-serve advertising para publishers medianos
- El producto permite a los publishers vender su inventario publicitario directamente a los anunciantes sin intermediarios
- Estado actual: 45 publishers en la plataforma, 200 anunciantes activos, 8 millones de euros de volumen de inversión gestionada anualmente
- Objetivo: doblar el número de publishers y triplicar el volumen de inversión en 18 meses
- Mayor reto: los publishers más grandes exigen funcionalidades avanzadas que el producto aún no tiene (yield optimization, Private Marketplace Deals, first-party data activation)

Desarrolla el sistema completo de gestión de producto para la plataforma de AdTech:

1. Estrategia de producto y roadmap: Diseña la estrategia de producto para los próximos 18 meses. Incluye: análisis del feedback de los 45 publishers actuales (qué funcionalidades piden, qué problemas tienen con el producto actual, por qué algunos publishers no usan toda la plataforma), análisis de los gaps de producto que impiden atraer publishers más grandes (qué tienen los líderes del mercado como Xandr o PubMatic que la plataforma no tiene), framework de priorización del roadmap (Impact x Esfuerzo x Estrategia) para ordenar las 30 funcionalidades en desarrollo, roadmap de 18 meses con las features agrupadas en 3 releases trimestrales y cómo comunicar el roadmap a los publishers actuales para gestionar sus expectativas y retener su lealtad durante el desarrollo.

2. Diseño del módulo de yield optimization: El yield optimization es la funcionalidad más demandada por los publishers grandes. Diseña el producto. Incluye: análisis de las estrategias de optimización de yield disponibles (header bidding, price floors dinámicos, unfilled rate optimization, revenue por sesión de usuario maximización), diseño del algoritmo de floor price dinámico que ajusta el precio mínimo de cada impresión en función de la probabilidad de que un comprador pague más (modelo de ML basado en el histórico de pujas recibidas por cada combinación de inventario + audiencia + hora del día), UX del dashboard de yield optimization para el publisher (cómo visualizar el impacto de los diferentes floors, qué configuraciones aplicar) y proceso de A/B testing del floor price para que el publisher pueda validar la mejora de ingresos.

3. Plataforma de Private Marketplace Deals: Los PMP Deals son el producto de mayor margen. Diseña el módulo. Incluye: flujo de creación de un PMP Deal (el publisher define las condiciones: inventario disponible, audiencia, período, precio mínimo; el anunciante accede al Deal ID para configurar sus pujas; la plataforma matchea y contabiliza), dashboard del publisher para gestionar sus Deals activos (volumen de pujas recibidas, win rate, fill rate, precio medio pagado, ingresos generados), marketplace de Deals donde los anunciantes pueden descubrir los inventarios premium disponibles y solicitar acceso, proceso de negociación de Deals entre el publisher y el anunciante (cómo la plataforma facilita la negociación sin intermediarios) y reporting detallado de los Deals para que ambas partes puedan evaluar el rendimiento.

4. Módulo de first-party data para publishers: El fin de las cookies hace que el first-party data del publisher sea su activo más valioso. Diseña el producto. Incluye: herramienta de audience intelligence que permite al publisher crear segmentos de audiencia a partir de sus datos propios (comportamiento de los lectores: qué contenido consumen, con qué frecuencia visitan, cuánto tiempo pasan, qué compran si tiene ecommerce), sistema de activación de esos segmentos para los anunciantes en la plataforma (sin compartir datos individuales, cumpliendo con RGPD), mecanismo de enriquecimiento de los datos del publisher con datos de contexto (tipo de contenido consumido, intención inferida) para crear segmentos más valiosos, proceso de onboarding de los datos de primera parte del publisher (integración técnica, validación de calidad, creación de los primeros segmentos) y privacy-by-design: cómo la arquitectura garantiza que los datos de los usuarios se usan de forma conforme al RGPD.

5. Self-serve advertising para anunciantes: La plataforma permite a los anunciantes comprar directamente. Diseña el UX del módulo de anunciante. Incluye: flujo de creación de campaña en self-serve (configuración de objetivos, selección de publishers e inventarios, definición de la audiencia, carga de creatividades, definición del presupuesto y la puja, activación), dashboard del anunciante con las métricas de campaña en tiempo real (impresiones, CTR, conversiones, gasto, ROAS) con granularidad por publisher, por día y por creatividad, sistema de recomendaciones automáticas para optimizar las campañas activas (basado en el análisis del performance: "aumentar el floor price en este publisher mejorará tu win rate un 30%"), proceso de gestión del presupuesto y la facturación en self-serve (prepago vs. postpago, sistema de crédito, facturación automática) y proceso de verificación de los anunciantes nuevos (para evitar fraude y brand safety issues para los publishers).

6. Analytics e inteligencia de negocio para publishers: Los publishers necesitan entender su negocio publicitario en profundidad. Diseña el módulo de analytics. Incluye: análisis de la monetización por sección del site (qué partes del publisher generan más ingresos, cuáles tienen CPMs más altos, cuáles tienen el mayor unfilled rate), análisis de la audiencia del publisher con métricas de valor para los anunciantes (distribución geográfica, intereses inferidos, recurrencia), análisis de los competidores del publisher (benchmarking de CPMs y fill rates con otros publishers similares en la plataforma, anonymizado), forecasting de ingresos publicitarios (proyección de los ingresos del próximo mes basada en el histórico y en las reservas de campaña confirmadas) y alertas automáticas cuando algo afecta negativamente a los ingresos (caída del fill rate, caída del CPM, pérdida de un Deal importante).

7. Go-to-market y crecimiento de la plataforma: Para doblar los publishers, la plataforma necesita crecer activamente. Diseña la estrategia. Incluye: proceso de captación de nuevos publishers (cómo identificar publishers del tamaño objetivo, cómo hacer el outreach inicial, propuesta de valor específica para cada segmento de publisher), proceso de onboarding de nuevos publishers (integración técnica: tag de header bidding, configuración inicial, primeras 2 semanas de monitorización activa), modelo de pricing de la plataforma para los publishers (tarifa fija mensual vs. comisión sobre los ingresos generados vs. freemium con funcionalidades premium de pago) y comunidad de publishers como estrategia de retención (foro, webinars de yield optimization, benchmarks del sector).

Incluye mockups de wireframes descritos en texto, framework de priorización de producto y referencias al ecosistema AdTech europeo actual (IAB Europe, post-cookies, AI Act aplicado a publicidad).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Escalada de plataforma AdTech self-serve mediante yield optimization y first-party data activation',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos de performance marketing y paid media con IA',
                'description'      => 'Lidera equipos de especialistas en publicidad digital, gestiona su desarrollo profesional y construye procesos de trabajo eficientes en un entorno de alta velocidad y constante cambio de plataformas.',
                'prompt_content'   => <<<'EOT'
Eres un director de Recursos Humanos y gestión de equipos con especialización en el sector del marketing digital y las agencias de publicidad. Conoces las particularidades de gestionar equipos donde la tecnología cambia constantemente, los resultados son muy medibles y la presión por el rendimiento de las campañas es muy alta, con clientes exigentes y plazos muy ajustados.

Contexto de la agencia:
- Agencia de performance marketing con 35 personas especializadas en paid media
- Equipo: 4 account managers, 12 media specialists (Google Ads, Meta Ads, programática), 6 creativos de performance, 4 analistas de datos, 4 personas de estrategia y 5 de operaciones
- Problema principal: rotación del 40% anual en el equipo de media specialists (se van a otras agencias o a cliente interno)
- Segundo problema: las plataformas cambian tan rápido que el equipo pierde competitividad en 12-18 meses sin formación constante
- Cultura: muy orientada a resultados de cliente, con mucha presión y poco tiempo para el desarrollo personal
- Dirección: fundadores con perfil técnico de media, sin experiencia previa en gestión de personas

Desarrolla la estrategia completa de gestión del equipo de performance marketing:

1. Diagnóstico de la rotación en el equipo de media: Diseña el proceso de diagnóstico. Incluye: análisis de las entrevistas de salida de los media specialists que se han ido en el último año (qué dicen sobre el motivo real de la salida: salario, crecimiento, carga de trabajo, cultura, proyecto), encuesta de clima laboral específica para equipos de paid media (qué aspectos medir: variedad de cuentas, formación continua, autonomía para tomar decisiones de campaña, reconocimiento del trabajo técnico, relación con los account managers, herramientas disponibles), benchmarking del salario y las condiciones de las agencias de performance más valoradas en España para los perfiles de media specialist y mapa de los momentos del ciclo de vida del specialist donde más se producen las salidas.

2. Propuesta de valor al media specialist: ¿Por qué un buen media specialist debería trabajar en esta agencia en lugar de en Google, en Meta, en un ecommerce grande o en otra agencia? Diseña la Employee Value Proposition. Incluye: los elementos de la propuesta de valor que la agencia puede ofrecer y una empresa cliente no puede (variedad de sectores y tipos de campaña que acelera el aprendizaje, ecosistema de compañeros con quienes aprender, presupuestos a gestionar que pocos negocios individuales tienen, visibilidad a múltiples plataformas y tecnologías), cómo comunicar esa propuesta de valor en LinkedIn y en las entrevistas de selección, plan de experiencia del specialist en los primeros 90 días que materializa la propuesta y beneficios específicos para el perfil de marketing digital (suscripción a herramientas de análisis como Semrush o SpyFu, budget personal de formación en plataformas, asistencia a eventos del sector como el Performance Summit).

3. Plan de carrera y formación continua: El conocimiento de las plataformas caduca en 12-18 meses sin actualización. Diseña el sistema. Incluye: mapa de carrera para media specialists (junior → mid → senior → lead → director de paid media), competencias requeridas en cada nivel con criterios objetivos de evaluación (no solo el rendimiento de las cuentas, también el conocimiento de plataformas, la capacidad de análisis, la gestión del cliente), programa de formación mensual para el equipo (qué novedades de plataforma hay que conocer, quién las presenta, cómo se difunde el conocimiento dentro del equipo), proceso de certificación en plataformas (Google Ads, Meta Blueprint, TikTok Ads) con financiación de la agencia y tiempo para estudiar, budget personal de formación (cursos externos, libros, eventos) que el specialist gestiona autónomamente.

4. Gestión de la carga de trabajo y el bienestar: La agencia de performance tiene picos de trabajo muy intensos (lanzamientos de campaña, peaks estacionales, crisis de cuenta). Diseña el sistema. Incluye: modelo de asignación de cuentas por specialist (cuántas cuentas puede gestionar bien un specialist según su nivel de experiencia y la complejidad de cada cuenta), proceso de detección temprana de la sobrecarga (indicadores de que un specialist está sobrecargado: aumento de errores en las campañas, retrasos en los reportings, respuestas tardías a los clientes, cambios de humor) y protocolo de respuesta inmediata, política de gestión del trabajo fuera de horario en la agencia (cuándo es aceptable trabajar fuera de horario y cuándo no, compensación o recuperación del tiempo extra) y ciclo de revisión semestral de la carga de trabajo de cada persona y reasignación de cuentas según la situación.

5. Proceso de selección de media specialists: Para bajar la rotación, también hay que contratar mejor. Diseña el proceso. Incluye: perfil del media specialist ideal para esta agencia (no solo conocimiento técnico de plataformas, sino también: curiosidad intelectual para adaptarse a los cambios constantes, capacidad analítica para interpretar datos, orientación a resultados, actitud de ownership sobre las cuentas que gestiona y comunicación efectiva con clientes), proceso de selección específico para paid media (prueba técnica práctica de análisis de una campaña real, preguntas de entrevista para evaluar el razonamiento analítico y la actitud ante el error), dónde encontrar a los mejores candidatos (comunidades de marketing digital en LinkedIn, grupos de Slack del sector, antiguos alumnos de los mejores programas de marketing digital en España) y cómo evaluar a candidatos sin mucha experiencia pero con alto potencial de aprendizaje.

6. Gestión del conocimiento en un equipo de media: En un equipo de media, el conocimiento de las plataformas y de los clientes es el activo más valioso. Diseña el sistema. Incluye: proceso de documentación de las mejores prácticas del equipo (qué estructura de campaña funcionó mejor en este sector, qué audiencia convirtió mejor en este tipo de producto), sistema de compartición de aprendizajes entre specialists (reunión mensual de learnings: cada specialist presenta un aprendizaje de sus cuentas que sea útil para el resto), proceso de transferencia de cuentas cuando un specialist se va o cambia de cuentas (documentación del estado de la cuenta, historial de tests, conocimiento específico del cliente) y cómo capturar y retener el conocimiento institucional para que la agencia no dependa de que una persona específica gestione una cuenta específica.

7. Cultura y ambiente de trabajo en la agencia de performance: La cultura de la agencia es el factor más difícil de replicar y el más difícil de cambiar. Diseña la estrategia. Incluye: los valores culturales que la agencia quiere construir (aprendizaje continuo, ownership de los resultados, transparencia sobre el rendimiento de las campañas, colaboración entre equipos de media y creatividad) y cómo los fundadores los modelan con su comportamiento, rituales de equipo que construyen cultura (kick-off de lunes, celebración de los logros del viernes, hackathon trimestral de ideas creativas), cómo gestionar los conflictos internos cuando dos specialists discrepan sobre la mejor estrategia para una cuenta, proceso de feedback 360 específico para el entorno de agencia de performance y cómo construir una cultura donde el error en una campaña es una oportunidad de aprendizaje y no motivo de vergüenza.

Incluye plantillas de evaluación de desempeño para media specialists, guión de la reunión de carrera semestral y programa de onboarding para nuevos miembros del equipo de paid media.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Retención del talento y construcción de cultura de aprendizaje en agencias de performance marketing',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control de presupuesto y ROI de campañas publicitarias con IA',
                'description'      => 'Gestiona y optimiza la inversión publicitaria de tu empresa o de tus clientes usando IA para analizar el retorno real de cada canal, redistribuir el presupuesto y maximizar el impacto del gasto en publicidad.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero y de análisis de inversiones publicitarias con especialización en el marketing de performance y la medición del retorno de la inversión en publicidad digital. Tu experiencia abarca la gestión del presupuesto de marketing de empresas con inversiones de 500.000 a 10 millones de euros anuales en medios de pago, la modelización del Marketing Mix y el análisis de la contribución real de cada canal a los resultados de negocio.

Contexto de la empresa:
- Empresa de servicios financieros B2C con 15 millones de euros de facturación
- Inversión publicitaria anual: 2,2 millones de euros en medios de pago (Google Ads, Meta Ads, TV regional, radio, patrocinios)
- Problema: el equipo de marketing no puede justificar ante el CFO y el CEO el retorno de la inversión publicitaria, especialmente de los canales offline (TV y radio)
- Segundo problema: el presupuesto se asigna históricamente sin análisis riguroso del retorno por canal
- Objetivo: implementar un sistema de medición del ROI publicitario que permita tomar mejores decisiones de asignación del presupuesto y justificar (o no) cada canal ante la dirección

Desarrolla el sistema completo de control financiero de la inversión publicitaria:

1. Framework de medición del ROI publicitario: Diseña el modelo conceptual de cómo se mide el ROI de la inversión publicitaria en este sector. Incluye: definición de los KPIs financieros de la inversión publicitaria (ROAS: ratio de ingresos por inversión, CAC: coste de adquisición por cliente nuevo, LTV/CAC: relación entre el valor del cliente y el coste de adquirirlo, payback period: meses hasta recuperar el CAC, contribución marginal de cada cliente adquirido), diferencia entre el ROAS a corto plazo (ingresos inmediatos generados por la campaña) y el ROAS a largo plazo (que incluye los ingresos futuros del cliente durante su ciclo de vida), modelo de atribución de ingresos a los canales cuando un cliente ha tenido múltiples touchpoints antes de convertirse (last-click vs. data-driven attribution vs. Marketing Mix Modeling) y por qué el modelo de atribución elegido cambia radicalmente el ROI calculado para cada canal.

2. Marketing Mix Modeling (MMM): El MMM es el único método que puede medir el impacto de TV y radio en las ventas. Diseña el proceso de implementación. Incluye: datos necesarios para un MMM (series temporales semanales de ventas e ingresos, inversión publicitaria semana a semana por canal, variables de control: estacionalidad, precio, actividad competidora, condiciones macroeconómicas), metodología del MMM (regresión multiple con variables de saturación y adstockización del efecto publicitario en el tiempo), interpretación de los resultados del MMM (cuánto ha contribuido cada canal a las ventas en el período analizado, cuál es el punto de saturación de cada canal, cuál sería el presupuesto óptimo para cada canal) y cómo presentar los resultados del MMM al CEO y al CFO de forma que apoyen la decisión de inversión.

3. Incrementalidad y experimentos de medición: La atribución de las plataformas sobreestima su propio impacto. Diseña el programa de medición de incrementalidad. Incluye: diseño de geo experiments para medir la incrementalidad de Google Ads (elegir mercados de control donde se apaga la campaña, comparar las ventas en los mercados de test vs. control), uso de Meta Conversion Lift para medir el impacto incremental de las campañas de Meta sobre las ventas que hubieran ocurrido de todas formas (sin publicidad), Brand Lift Study para medir el impacto de las campañas de awareness en el recuerdo de marca y la intención de compra, cómo diseñar un holdout experiment para medir el impacto del email marketing en las ventas y cómo construir un programa de experimentos de medición sistemático que va acumulando evidencia sobre el ROI real de cada canal.

4. Modelo de presupuestación y optimización del portfolio de canales: Una vez que tienes los datos de ROI real por canal, ¿cómo asignas el presupuesto? Diseña el modelo de optimización. Incluye: modelo de curva de respuesta por canal (cómo aumentan los ingresos cuando aumentas la inversión en cada canal, con rendimientos decrecientes), modelo de optimización del presupuesto que maximiza los ingresos totales dado un presupuesto total (programación lineal o algoritmo de optimización con restricciones de canal mínimo y máximo), proceso de simulación de escenarios (qué pasaría si quitamos el presupuesto de TV y lo ponemos en Google Ads, o si aumentamos el presupuesto total un 20%), ciclo de revisión trimestral del modelo con los nuevos datos de cada trimestre y rebalanceo del presupuesto y cómo gestionar políticamente la decisión de reducir la inversión en un canal que históricamente ha tenido presupuesto (TV) cuando los datos sugieren que no genera ROI suficiente.

5. Reporting financiero de la inversión publicitaria: El CFO necesita entender la inversión publicitaria como una inversión financiera. Diseña el sistema de reporting. Incluye: dashboard mensual de la inversión publicitaria para el comité de dirección (inversión total y por canal, ingresos atribuidos a cada canal, CAC por canal y total, LTV/CAC ratio, evolución del ROAS en los últimos 12 meses), informe trimestral de análisis del ROI publicitario para el consejo (qué canales están por encima y por debajo del ROAS objetivo, qué experimentos hemos realizado y qué hemos aprendido, propuesta de rebalanceo del presupuesto) y cómo presupuestar el gasto de marketing para el año siguiente integrando los aprendizajes del MMM y los experimentos de incrementalidad del año en curso.

6. Código Python para el análisis del ROI publicitario: Proporciona implementaciones concretas de: (a) modelo de Marketing Mix Modeling básico con statsmodels que incluya adstockización (efecto carry-over de la publicidad en semanas posteriores a la inversión) y saturación (curva de Hill para modelar los rendimientos decrecientes de cada canal), (b) función de optimización del presupuesto por canal usando scipy.optimize que maximiza los ingresos dados los datos del MMM y un presupuesto total fijo, (c) visualización de la curva de respuesta de cada canal (inversión en eje X, ingresos generados en eje Y) y del punto de saturación y (d) dashboard automático de KPIs financieros de marketing en Python usando pandas y plotly con los datos exportados del CRM.

7. Auditoría del gasto publicitario: Antes de optimizar, hay que auditar si el gasto está bien gestionado. Diseña el proceso. Incluye: revisión de las comisiones y fees de la agencia (comisión sobre medios, fees de gestión, fees de tecnología) y cómo compararlos con el benchmark del sector, auditoría del fraude publicitario y el tráfico inválido (click fraud en Google, fake impressions en programática) y cómo recuperar dinero de las plataformas cuando hay evidencia de fraude, revisión de los contratos con medios y agencias para identificar cláusulas que penalizan al anunciante (compromisos de inversión mínima, penalizaciones por reducción del presupuesto), análisis de los descuentos de volumen disponibles en cada plataforma y si la empresa los está aprovechando al máximo y cómo consolidar la compra de medios para obtener mejores condiciones.

Proporciona modelos de Excel para el MMM simplificado, plantillas de reporting financiero de marketing para el CEO y el CFO, y referencias al estado del arte en medición del ROI publicitario (papers de Meta y Google sobre sus métodos de medición de incrementalidad).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Sistema de medición del ROI real de la inversión publicitaria con Marketing Mix Modeling e incrementalidad',
                'vote_score'       => 54,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance legal en publicidad digital, cookies y privacidad con IA',
                'description'      => 'Navega el marco legal de la publicidad digital en Europa: RGPD, ePrivacy, Digital Services Act y la nueva regulación de IA aplicada a la publicidad con IA como asistente jurídico.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho digital y compliance de la publicidad con experiencia en la aplicación del RGPD, la Directiva ePrivacy, la Ley de Servicios de la Sociedad de la Información (LSSI), el Digital Services Act (DSA) y el nuevo Reglamento de IA de la UE a las empresas de publicidad digital, agencias de medios, plataformas de AdTech y anunciantes.

Contexto de la consulta legal:
- Agencia de performance marketing española que gestiona campañas para 20 clientes
- Situación: la agencia usa cookies de terceros para el remarketing, píxeles de Meta y Google para la atribución, datos de audiencia de DMP y técnicas de targeting basadas en IA
- Problemas legales: han recibido un requerimiento de la AEPD sobre una campaña de uno de sus clientes, tienen dudas sobre la legalidad del targeting por comportamiento y se preparan para la desaparición de las cookies de terceros
- Necesidad: revisión completa del marco de compliance de la agencia y de sus clientes

Desarrolla el asesoramiento legal completo:

1. Marco legal de las cookies y el tracking publicitario: El RGPD y la Directiva ePrivacy regulan el uso de cookies con fines publicitarios. Explica: qué tipos de cookies requieren consentimiento del usuario (tracking cookies, cookies de remarketing, cookies de análisis de audiencia) y cuáles no (cookies estrictamente necesarias), requisitos del consentimiento válido según el RGPD y la Directiva ePrivacy (libre, informado, específico, inequívoco: qué significa cada requisito en la práctica de la publicidad digital), cómo debe diseñarse un Consent Management Platform (CMP) que cumpla con los requisitos (el famoso banner de cookies), la sanción de la AEPD a Vueling y a otras empresas españolas como referencia de qué no hacer y cómo afectará el Reglamento ePrivacy (cuando se apruebe) al régimen de cookies en Europa.

2. Targeting publicitario y datos personales: El targeting por comportamiento es la técnica más regulada. Diseña el análisis legal. Incluye: análisis de la legalidad de los principales tipos de targeting bajo el RGPD (retargeting basado en cookies de primera parte vs. tercera parte, lookalike audiences basadas en datos propios vs. datos de Meta o Google, targeting por categorías especiales de datos: salud, religión, orientación sexual, que está prohibido en publicidad), el concepto de legítimo interés como base legal para el targeting publicitario y por qué el EDPB (Comité Europeo de Protección de Datos) ha rechazado su uso en publicidad conductual, análisis del caso específico del requerimiento de la AEPD (qué tipo de targeting puede haber causado el problema) y cómo auditar las audiencias usadas en las campañas para identificar y eliminar las que no tienen base legal.

3. Digital Services Act y obligaciones para plataformas de publicidad: El DSA ha cambiado las reglas para las grandes plataformas publicitarias. Explica: qué plataformas están sujetas al DSA como Very Large Online Platforms (VLOPs) y cuáles como Very Large Online Search Engines (VLOSEs) y qué obligaciones tienen (Google, Meta, TikTok, Twitter, Amazon), las nuevas restricciones del DSA sobre la publicidad dirigida (prohibición de publicidad basada en categorías especiales de datos, prohibición de publicidad dirigida a menores), el Repositorio de Anuncios del DSA (Ad Library) y cómo los anunciantes y las agencias deben proporcionar información transparente sobre sus anuncios, las obligaciones de los anunciantes que usan estas plataformas (no solo las obligaciones de las plataformas) y cómo el DSA afecta al reporting que Meta y Google proporcionan a los anunciantes.

4. Reglamento de IA y publicidad digital: El AI Act clasifica algunos sistemas de IA publicitaria como de alto riesgo. Explica: qué sistemas de IA usados en publicidad digital son considerados de alto riesgo por el AI Act (sistemas que perfilán a los usuarios para mostrarles publicidad que explota sus vulnerabilidades: adicciones, deudas, problemas de salud mental), las obligaciones para los proveedores y los usuarios de sistemas de IA publicitaria de alto riesgo (transparencia, documentación técnica, supervisión humana, evaluación de conformidad), la prohibición de los sistemas de IA que manipulan a los consumidores mediante técnicas subliminales o que explotan vulnerabilidades, cómo afecta el AI Act al uso de sistemas de smart bidding y de generación de creatividades publicitarias con IA y el calendario de aplicación del AI Act y qué deben hacer las agencias y anunciantes para prepararse.

5. Contratos y responsabilidades en la cadena publicitaria: La agencia, el anunciante y las plataformas tienen responsabilidades diferentes. Diseña el marco contractual. Incluye: análisis de la responsabilidad del anunciante vs. la agencia vs. la plataforma cuando una campaña viola el RGPD (quién es el responsable del tratamiento y quién el encargado del tratamiento en cada relación), cláusulas de compliance de datos que deben incluirse en el contrato entre agencia y anunciante (quién decide sobre los datos usados para el targeting, quién responde ante la AEPD, cómo se gestionan las auditorías de protección de datos), Data Processing Agreement (DPA) con Meta y Google (qué derechos y qué obligaciones tiene el anunciante según los DPA estándar de estas plataformas), proceso de due diligence de las AdTech que la agencia usa (DMPs, DSPs, herramientas de atribución) para verificar su compliance con el RGPD y gestión de las brechas de seguridad que afectan a datos de audiencias publicitarias.

6. Publicidad en buscadores y regulación de la competencia: Además del RGPD, la publicidad en buscadores tiene sus propias regulaciones. Explica: obligaciones de etiquetado de los anuncios de búsqueda de pago (cómo deben marcarse claramente como publicidad según la normativa española y europea), regulación de la publicidad comparativa (cuándo es legal compararse con la competencia en un anuncio, cuándo es publicidad engañosa), uso del nombre de marcas competidoras como keywords en Google Ads (doctrina del TJUE sobre el keyword advertising y el uso de marcas ajenas), regulación de las reseñas pagadas y el marketing de influencers en relación con las campañas de performance (cuando un influencer promueve un producto a cambio de pago o comisión, qué obligaciones de transparencia tiene) y cómo afecta el Digital Markets Act (DMA) a las relaciones entre anunciantes y las grandes plataformas tecnológicas.

7. Gestión del requerimiento de la AEPD y respuesta a autoridades: La agencia ha recibido un requerimiento de la AEPD. Diseña el protocolo de respuesta. Incluye: análisis de los tipos de actuación de la AEPD (actuaciones previas de investigación, procedimientos sancionadores, medidas cautelares) y cuál es el más grave, proceso de respuesta al requerimiento (plazo legal para responder, quién responde, qué documentación acompañar, cómo argumentar el cumplimiento o la corrección de la práctica cuestionada), cómo negociar con la AEPD durante el procedimiento (compromiso de corrección de las prácticas a cambio de reducción de la sanción), régimen sancionador del RGPD en España (importes máximos de las sanciones: 20 millones de euros o el 4% de la facturación global, cómo se gradúan las sanciones) y cómo diseñar un programa de compliance de protección de datos para la agencia que prevenga futuros problemas con la AEPD (DPO, registro de actividades, evaluaciones de impacto, formación del equipo).

Incluye checklist de compliance de publicidad digital bajo el RGPD, plantilla de Data Processing Agreement para agencias de publicidad y referencias a las resoluciones de la AEPD sobre publicidad digital y cookies. Todo comprensible para el equipo de marketing y los clientes de la agencia sin formación jurídica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Compliance RGPD, DSA y AI Act para agencias de publicidad digital y sus anunciantes',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a anunciantes y gestión de cuentas publicitarias con IA',
                'description'      => 'Diseña un sistema de soporte y customer success para anunciantes que gestionan campañas en plataformas digitales, reduciendo el churn y maximizando el gasto activo mediante atención proactiva.',
                'prompt_content'   => <<<'EOT'
Eres un director de customer success especializado en el soporte a anunciantes en plataformas de publicidad digital. Tu experiencia abarca el soporte a anunciantes en plataformas de self-serve advertising, la gestión de cuentas de clientes de alto valor y el diseño de sistemas de onboarding y retención para reducir el churn de anunciantes en plataformas competitivas como Google, Meta, o plataformas independientes de AdTech.

Contexto de la plataforma:
- Plataforma de self-serve advertising para publishers medianos con 200 anunciantes activos
- Distribución de anunciantes: 20 grandes (gasto mensual >5.000 euros), 80 medianos (gasto mensual 500-5.000 euros), 100 pequeños (gasto mensual <500 euros)
- Problema: tasa de churn del 35% anual (los anunciantes dejan de invertir en la plataforma)
- Principal causa de churn: los anunciantes no ven resultados porque no configuran bien sus campañas y no reciben suficiente soporte para mejorarlas
- Equipo: 3 customer success managers y 1 director, con un ratio de 66 cuentas por CSM que es insostenible
- NPS de anunciantes: 18, objetivo superar 45

Desarrolla el sistema completo de soporte y customer success para anunciantes:

1. Segmentación y modelo de atención por segmento: No todos los anunciantes merecen la misma atención. Diseña el modelo de segmentación. Incluye: criterios de segmentación de la base de anunciantes (gasto mensual actual, potencial de crecimiento del gasto, antigüedad en la plataforma, nivel de actividad, sectores con mayor LTV), modelo de atención diferenciado por segmento (anunciantes grandes: CSM dedicado + revisión mensual de cuenta + acceso a beta features; anunciantes medianos: CSM compartido + check-in quincenal + recursos de autoservicio; anunciantes pequeños: soporte self-serve + email automatizado + base de conocimiento + webinars grupales), recursos y tiempo asignados a cada segmento para que el equipo de 3 CSMs sea sostenible y proceso de escalación entre segmentos cuando un anunciante pequeño empieza a crecer.

2. Proceso de onboarding de nuevos anunciantes: El onboarding es el momento más crítico para prevenir el churn. Diseña el proceso. Incluye: flujo de onboarding de los primeros 30 días de un anunciante nuevo (día 1: bienvenida y acceso a la plataforma; día 3: llamada de setup con el CSM para configurar la primera campaña; día 7: primera revisión del performance de la campaña; día 14: análisis de los primeros resultados y ajustes; día 30: revisión completa y propuesta de escala), materiales de onboarding self-serve (guía de inicio rápido en vídeo, plantillas de campaña por sector, FAQ de los errores más frecuentes en la configuración), proceso de onboarding automatizado para los anunciantes pequeños (secuencia de emails de onboarding con tips de configuración, vídeos cortos de funcionalidades clave, checklist de campaña bien configurada) y métricas de éxito del onboarding (anunciante que ha lanzado su primera campaña en las primeras 48 horas, que ha obtenido su primer clic, que ha convertido su primera venta a través de la plataforma).

3. Detección temprana y prevención del churn: El churn se puede predecir semanas antes de que ocurra. Diseña el sistema de early warning. Incluye: señales de riesgo de churn en los datos de uso de la plataforma (caída del gasto semanal superior al 30%, campaña pausada durante más de 7 días sin nueva actividad, ausencia de respuesta a los emails del CSM, reducción del número de creativas activas), modelo predictivo de churn usando esas señales (qué anunciantes tienen alta probabilidad de dejar de invertir en las próximas 4 semanas), protocolo de intervención del CSM cuando un anunciante entra en riesgo de churn (llamada de diagnóstico, análisis de las campañas activas e identificación del problema, propuesta de solución con plazo concreto) y playbooks de win-back para anunciantes que ya han dejado de invertir (cuándo contactarles, qué ofrecerles para que vuelvan, qué no hacer).

4. Optimización proactiva de las campañas de los clientes: En lugar de esperar a que el anunciante tenga un problema, el CSM identifica oportunidades de mejora proactivamente. Diseña el sistema. Incluye: revisión semanal de las cuentas de alto valor (qué analizar: métricas de performance vs. objetivo, creatividades activas y su antigüedad, audiencias utilizadas y su saturación, presupuesto consumido vs. disponible), alertas automáticas cuando una campaña entra en un estado subóptimo (CTR por debajo del promedio del sector, frecuencia demasiado alta que indica saturación de la audiencia, presupuesto limitando el alcance de la campaña), modelo de recomendaciones automáticas basadas en IA que el CSM revisa y envía al cliente (si el CTR es bajo: "tus creatividades llevan 3 semanas activas, prueba a cambiarlas"), proceso de benchmark de la cuenta del cliente frente a otros anunciantes del mismo sector en la plataforma y protocolo para proponer el aumento del presupuesto cuando el rendimiento lo justifica.

5. Gestión de las incidencias y reclamaciones de los anunciantes: Las incidencias técnicas y los resultados por debajo de las expectativas son inevitables. Diseña el protocolo. Incluye: clasificación de las incidencias por tipo y urgencia (incidencia técnica que impide que la campaña funcione: urgente; underperformance vs. objetivo: media; duda sobre funcionalidad: baja), proceso de resolución de cada tipo con tiempos de respuesta garantizados, gestión de la reclamación del anunciante que dice que los resultados no justifican la inversión (análisis de las causas reales, qué puede mejorarse en la campaña, qué es expectativa no realista del anunciante), proceso de compensación cuando hay un problema técnico que ha afectado al rendimiento de la campaña (crédito publicitario, extensión gratuita de la campaña) y seguimiento post-incidencia para asegurar que el anunciante ha quedado satisfecho.

6. Programa de educación y habilitación del anunciante: Los anunciantes que más saben de la plataforma invierten más y hacen menos churn. Diseña el programa. Incluye: academia online de la plataforma (cursos en vídeo de 10-15 minutos sobre cada funcionalidad clave, certificación de anunciante avanzado), webinars mensuales en grupo sobre temas de performance marketing relevantes para los anunciantes de la plataforma (cómo mejorar el CTR, cómo testear creatividades, cómo interpretar el dashboard de reporting), newsletter semanal con tips de optimización y novedades de la plataforma, comunidad de anunciantes donde se comparten buenas prácticas y se hacen preguntas entre iguales y cómo el programa de habilitación reduce el tiempo que el CSM dedica a resolver dudas básicas y lo libera para actividades de mayor valor.

7. KPIs y gestión del equipo de customer success: Define el sistema de medición del customer success. Incluye: KPIs del equipo de CSM (NPS de los anunciantes asignados, tasa de churn de la cartera, gasto mensual gestionado por el CSM y evolución, número de anunciantes que han escalado de segmento durante el trimestre, tiempo medio de resolución de incidencias), modelo de incentivos para el equipo de CSM (qué comportamientos se premian: retención, crecimiento del gasto, NPS; qué se evita incentivar: número de llamadas o de tickets cerrados que no correlacionan con el valor real), reunión semanal del equipo de customer success (revisión de los anunciantes en riesgo, celebración de éxitos, intercambio de mejores prácticas) y proceso de escalación de los problemas del anunciante que el CSM no puede resolver por sí solo (cuándo escalar al equipo de producto, cuándo al equipo legal, cuándo a la dirección).

Proporciona scripts de conversación para el CSM, plantilla de revisión de cuenta mensual y sistema de alertas de churn en hojas de cálculo. Todo adaptado a una plataforma de publicidad digital con pocos recursos en el equipo de customer success.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Reducción del churn de anunciantes y crecimiento del gasto activo en plataforma de publicidad digital',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor freelance de paid media y performance marketing con IA',
                'description'      => 'Construye y escala tu práctica independiente de consultoría en publicidad digital y performance marketing usando IA para gestionar más clientes con mayor eficiencia y mejores resultados.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance de paid media y performance marketing con experiencia gestionando campañas de publicidad digital para clientes de diferentes sectores y tamaños. Trabajas de forma independiente después de años en agencias y como responsable de marketing interno, y has adoptado la IA como herramienta central para escalar tu práctica sin contratar equipo.

Situación de tu práctica freelance:
- Consultor independiente de paid media con 4 años de práctica propia
- Servicios: gestión de campañas de Google Ads y Meta Ads, estrategia de paid media, consultoría de marketing digital
- Clientes actuales: 8 clientes, gestión mensual de 280.000 euros de inversión publicitaria total
- Ingresos: 78.000 euros anuales, objetivo de 130.000 en 18 meses
- Forma de trabajo: honorarios de gestión (5-8% de la inversión gestionada) + fee fijo mensual por cliente
- Mayor limitación: llevas al límite de lo que puedes gestionar bien en solitario, y añadir más clientes sin procesos mejores te hundiría en la operativa

Desarrolla el sistema completo para escalar tu práctica de consultoría de paid media:

1. Posicionamiento especializado para cobrar más: Para crecer en ingresos sin gestionar más clientes, necesitas especializarte y subir tarifas. Diseña tu posicionamiento. Incluye: los sectores o tipos de cliente donde tienes ventaja competitiva clara y donde el CPM más alto o el LTV más largo justifican honorarios superiores (ecommerce de alto ticket, servicios financieros, B2B de software), el argumento para subir tus tarifas a los clientes actuales (qué resultados has conseguido que justifican la subida, cómo plantearlo sin que suene a ultimátum), la transición de cobrar por porcentaje de inversión gestionada a cobrar por valor entregado (fee fijo alto + bonus por resultados: cómo estructurarlo), cómo comunicar tu especialización en LinkedIn para atraer clientes que pagan más sin negociar el precio y cuántos clientes ideales necesitas para llegar a 130.000 euros con el nuevo modelo de honorarios.

2. IA para multiplicar tu eficiencia operativa: La IA te permite gestionar más cuentas con mejor calidad en el mismo tiempo. Diseña tu stack tecnológico. Incluye: uso de Claude para el análisis de las cuentas publicitarias (síntesis del estado de una cuenta a partir del export del performance de las últimas 4 semanas, identificación de las principales oportunidades de mejora, generación del borrador del informe mensual del cliente), automatización de los reportes mensuales con Google Looker Studio + Supermetrics (el dashboard se actualiza solo, tú solo añades el comentario estratégico), scripts de Google Ads con IA para automatizar la gestión de bids, la pausa de palabras clave con bajo rendimiento y las alertas de anomalías, uso de IA para el análisis de la competencia publicitaria (resumen semanal de los cambios en la estrategia publicitaria de los competidores de tus clientes) y flujo de trabajo semanal por cliente optimizado con IA (cuánto tiempo en análisis, cuánto en ajustes, cuánto en el informe, cuánto en la llamada de cliente).

3. Diseño de tus servicios para escalar: El servicio de gestión de campañas tiene un techo. Diseña servicios complementarios que escalen. Incluye: auditoría de cuentas de paid media (servicio puntual: 1.500-2.500 euros por cuenta auditada, proceso estructurado en 5 días, entregable: informe de 20 páginas con las 10 principales oportunidades de mejora), formación en Google Ads y Meta Ads para equipos de marketing internos (taller presencial u online: 3.000-4.000 euros por taller, cómo estructurarlo para que sea valioso sin que se lo monten solos), informe de estrategia de paid media para el CMO (2.000-3.000 euros, análisis del mix óptimo de canales para los objetivos del cliente y el presupuesto disponible) y cómo posicionar cada servicio para que sea un escalón hacia la gestión mensual recurrente.

4. Captación de clientes de mayor calidad: Para llegar a 130.000 euros necesitas clientes que paguen más, no más clientes baratos. Diseña la estrategia. Incluye: perfil del cliente ideal de tu nueva etapa (facturación mínima de la empresa, presupuesto mínimo de paid media que justifica tus honorarios, sector prioritario, tipo de decisor que contrata consultores de paid media), estrategia de LinkedIn para atraer ese perfil (contenido que resuena con los CMOs y directores de marketing de empresas medianas: análisis de casos reales anonimizados, opiniones sobre las novedades de las plataformas, resultados de tus clientes), cómo usar tus casos de éxito actuales para atraer clientes del mismo sector (un buen caso de éxito en ecommerce de moda trae más clientes de ecommerce de moda), proceso de cualificación de nuevos prospectos para no malgastar tiempo en clientes que no encajan y cómo gestionar la transición de clientes actuales poco rentables para hacer hueco a clientes de mayor valor.

5. Proceso de venta y propuesta para clientes premium: Los clientes de mayor presupuesto tienen un proceso de decisión más largo y exigen más profesionalidad. Diseña el proceso. Incluye: proceso de discovery antes de la propuesta (qué preguntas hacerle al CMO para entender sus objetivos, su situación actual, sus frustraciones con la agencia anterior y sus criterios de éxito), estructura de la propuesta de servicios de paid media (diagnóstico del problema del cliente, propuesta de solución con metodología específica, equipo si trabajas con colaboradores, cronograma de los primeros 90 días, inversión y términos del contrato), cómo hacer la presentación oral de la propuesta (de 30 minutos, con 3-4 slides clave, cómo manejar el "lo pensamos" y cuándo hacer el follow-up), manejo de las objeciones más frecuentes (precio demasiado alto, preferimos agencia con equipo grande, ya lo hacemos interno) y proceso de onboarding del cliente premium para que sienta desde el día 1 que ha tomado la decisión correcta.

6. Gestión de la reputación y las referencias: El principal canal de captación de clientes premium son las referencias. Diseña el sistema. Incluye: proceso de solicitud de referencias y testimonios a los clientes actuales (cuándo pedirlos, cómo pedirlos, en qué formato: LinkedIn recommendation, caso de éxito escrito, vídeo testimonial), programa de referidos entre clientes (qué incentivo ofreces a quien te presenta un cliente nuevo), cómo construir una red de colaboradores que te envíen clientes (otros freelancers de marketing digital que no hacen paid media, agencias de SEO que necesitan un especialista de paid media para sus clientes, consultores de estrategia que detectan necesidades de paid media en sus proyectos), presencia en comunidades profesionales de marketing en España (Comité de Marketing Digital de la AEA, grupos de LinkedIn, eventos de performance marketing) y cómo convertir tu audiencia de LinkedIn en un canal de captación de clientes inbound.

7. Gestión financiera y crecimiento sostenible: Con ingresos de 78.000 euros escalando a 130.000 euros, la gestión de la práctica requiere más estructura. Diseña el sistema. Incluye: modelo de ingresos mixto (honorarios fijos recurrentes + bonus por performance + servicios puntuales de auditoría y formación) con previsión de ingresos mes a mes para los próximos 12 meses, gestión del pipeline de nuevos clientes (cuántos prospectos necesitas en el funnel para cerrar el número de clientes nuevos que te has propuesto este trimestre), proceso de offboarding de clientes que ya no encajan en tu modelo actualizado (cómo gestionar la conversación, cómo recomendar un sustituto, cómo terminar bien la relación), decisión de cuándo contratar a tu primer colaborador (qué perfil, qué tareas le delegas, cómo lo formas en tu metodología) y gestión fiscal de una práctica freelance que factura 130.000 euros anuales (cuándo crear una SL, IVA en los servicios a clientes europeos, retención de IRPF en facturas a empresas españolas).

Proporciona plantillas de propuesta de servicios, system prompt de Claude para análisis de cuentas de Google Ads, y cronograma de transición de clientes de bajo a alto valor. Todo adaptado a la realidad del consultor freelance de paid media en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Escalar la práctica freelance de paid media con IA y especialización en clientes de mayor valor',
                'vote_score'       => 45,
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
