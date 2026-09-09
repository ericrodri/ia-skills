<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills226Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Performance marketing avanzado: ROAS y optimización',
                'description'       => 'El marketing de performance que va más allá de las métricas básicas: la optimización del ROAS por canal, la atribución multi-touch y las palancas que los equipos de paid media más avanzados usan para escalar el gasto sin perder eficiencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en performance marketing con amplia experiencia gestionando presupuestos de paid media en múltiples canales. Necesito que me ayudes a llevar la optimización de mi estrategia de performance marketing al siguiente nivel, más allá de las métricas básicas de CPC y CTR.

Mi contexto:
- Canales de paid media activos: [Google Ads, Meta Ads, TikTok Ads, LinkedIn, otros que uses]
- Presupuesto mensual aproximado: [indica el rango]
- ROAS actual por canal si lo conoces: [lista los que tengas]
- Modelo de atribución que usas actualmente: [last click, data-driven, lineal, etc.]
- Principal problema de eficiencia ahora mismo: [escalar sin perder ROAS / atribución poco clara / canales que no convierten / dificultad para justificar el presupuesto]
- Tipo de negocio y ticket medio: [e-commerce, SaaS, lead gen, etc.]

Con ese contexto, dame:

1. ROAS POR CANAL: CÓMO CALCULAR EL ROAS CORRECTO
Explícame la diferencia entre el ROAS bruto y el ROAS ajustado a margen (MER o blended ROAS). ¿Por qué el ROAS que reporta la plataforma publicitaria suele estar inflado? Dame el proceso para calcular el ROAS real de cada canal teniendo en cuenta el coste del producto, los retornos, el coste de la plataforma y el overhead del equipo. ¿Cuál debería ser el ROAS objetivo mínimo para cada canal según mi tipo de negocio?

2. ATRIBUCIÓN MULTI-TOUCH: MÁS ALLÁ DEL LAST CLICK
Explícame los principales modelos de atribución (last click, first click, lineal, time decay, posicional y data-driven) y sus implicaciones prácticas en la toma de decisiones de inversión por canal. ¿Cuándo tiene sentido cada uno? Dame el proceso para evaluar qué modelo de atribución se ajusta mejor a mi ciclo de compra y cómo implementarlo sin perderme en la configuración técnica. Incluye cómo usar la atribución de GA4 junto con la de las plataformas de pago sin volverte loco con las discrepancias de datos.

3. ESCALADO SIN PÉRDIDA DE ROAS: LAS PALANCAS AVANZADAS
Dame las cinco palancas más efectivas para escalar el presupuesto de paid media sin que el ROAS se deteriore, incluyendo: la segmentación por audiencia de mayor valor, la automatización de pujas (Target ROAS, Maximize Conversion Value), el bid shading, el uso de señales de primera parte (first-party data) y la expansión creativa. Para cada palanca, dame el proceso concreto y los umbrales a monitorizar antes de que se produzca el punto de rendimientos decrecientes.

4. CREATIVE TESTING SISTEMÁTICO
¿Cómo monto un sistema de creative testing que me permita iterar creatividades sin contaminar los resultados? Dame el framework de testeo: la estructura de campañas para testing, cuántas variantes testear a la vez, qué métricas primarias y secundarias usar, el tamaño de muestra mínimo para declarar un ganador y cómo trasladar los aprendizajes creativos al equipo de contenido.

5. FIRST-PARTY DATA Y COOKIELESS FUTURE
¿Cómo me preparo para el mundo post-cookie y maximizo el uso de mis datos de primera parte en las campañas de paid media? Dame el proceso para construir y activar las audiencias de first-party data en Meta, Google y TikTok: la lista de clientes para lookalikes, las audiencias de CRM, el píxel propio y las Conversions API. ¿Qué diferencia de rendimiento genera activar la CAPI frente al píxel estándar?

6. REPORTING Y DASHBOARDS DE PERFORMANCE
¿Cómo diseño el dashboard de performance marketing que le da al equipo la visión correcta sin ahogarse en métricas? Dame la estructura del dashboard ideal: las métricas de nivel de campaña, de canal y de negocio, la cadencia de revisión correcta (diaria, semanal, mensual), las alertas automáticas que debo configurar y cómo presentar los resultados a la dirección sin entrar en el detalle técnico que solo confunde.

7. ERRORES QUE DESTRUYEN EL ROAS
Lista los seis errores más comunes que cometen los equipos de performance marketing cuando intentan escalar: el presupuesto que se concentra en la fase de aprendizaje sin suficiente volumen, las pujas automáticas mal calibradas, el audience overlap entre campañas, la falta de exclusiones de audiencias ya convertidas, la sobreoptimización a corto plazo y la falta de control del gasto en campañas de brand. Para cada error, dame la solución concreta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Optimizar la estrategia de performance marketing más allá de las métricas básicas: ROAS real, atribución y escalado eficiente.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'APIs como producto: diseño y monetización',
                'description'       => 'Construye y monetiza una API que otros developers quieren usar: el diseño que facilita la adopción, los modelos de pricing por uso y la documentación que convierte a los developers en clientes sin necesidad de un equipo de ventas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product management para APIs y productos developer-facing, con experiencia en empresas que han construido APIs como negocio principal. Necesito tu ayuda para diseñar, lanzar y monetizar una API que otros developers adopten y paguen.

Mi contexto:
- Descripción de la API que quiero construir o mejorar: [qué hace, qué problema resuelve para el developer]
- Estado actual: [idea / prototipo / ya en producción con usuarios / buscando monetizar lo que ya tenemos]
- Audiencia objetivo: [indie hackers, startups, empresas medianas, enterprise, o mezcla]
- Competidores o alternativas que el developer tiene: [menciona 2-3 y sus fortalezas]
- Equipo técnico disponible: [solo / pequeño equipo / equipo con dedicación exclusiva]
- Principal reto ahora mismo: [adopción / retención / monetización / documentación / soporte]

Con ese contexto, dame:

1. DISEÑO DE API QUE FACILITA LA ADOPCIÓN
¿Cuáles son los principios de diseño de una API que los developers adoptan sin fricción? Explícame cómo aplicar REST correctamente (o cuándo GraphQL o gRPC tienen más sentido), el diseño de los endpoints que resulta intuitivo para el developer nuevo, la convención de nombres de recursos, el tratamiento de errores con códigos HTTP correctos y mensajes de error accionables, la paginación que no rompe los clientes existentes y el versionado de la API sin dejar a nadie atrás.

2. DEVELOPER EXPERIENCE (DX): EL FACTOR DIFERENCIAL
¿Qué separa una API que los developers recomiendan de una que evitan? Dame las cinco dimensiones de la developer experience que más impactan en la adopción: el tiempo hasta el primer hello world (TTFHW), la calidad de los mensajes de error, la previsibilidad del comportamiento, la consistencia del diseño y la documentación interactiva. Para cada dimensión, dame una acción concreta que puedo implementar esta semana.

3. DOCUMENTACIÓN QUE CONVIERTE
¿Cómo construyo la documentación de API que convierte a los developers que llegan curiosos en clientes de pago? Dame la estructura de la documentación ideal: el quickstart que funciona en menos de cinco minutos, las guías conceptuales que explican el modelo mental, la referencia completa de cada endpoint, los ejemplos de código en los lenguajes más populares, el playground interactivo y los tutoriales de casos de uso reales. ¿Cuál es la herramienta más efectiva para construirla con un equipo pequeño?

4. MODELOS DE MONETIZACIÓN PARA APIS
Explícame los modelos de pricing que mejor funcionan para APIs según el tipo de producto y la audiencia: el pay-per-call, los tiers por volumen, el freemium con límites de rate, el flat fee con overage, el modelo de unidades de crédito y el enterprise custom. Para mi caso específico, ¿cuál recomiendas y por qué? Diseña los primeros tres o cuatro tiers con los límites, el precio y las features de diferenciación que deben estar en cada nivel.

5. LA CAPA GRATUITA Y LA CONVERSIÓN A PAGO
¿Cuánto dar gratis y cómo diseñar los límites para que el free tier convierta a paid de forma natural? Dame el proceso para definir el límite de uso del free tier: lo suficientemente generoso para que el developer valide la API en producción real, pero con la fricción justa cuando empieza a escalar. Incluye las señales que debo monitorizar para identificar al developer free que está listo para convertir, y el proceso de outreach que maximiza esa conversión sin resultar invasivo.

6. SDK Y LIBRERÍAS CLIENTE: CUÁNDO Y CÓMO
¿Cuándo tiene sentido invertir en SDKs propios en lugar de dejar que cada developer construya su wrapper? Dame el proceso de decisión, los lenguajes en los que primero invertir según la audiencia objetivo, cómo diseñar el SDK para que tenga la misma calidad de DX que la propia API y cómo mantener los SDKs actualizados sin que se conviertan en una deuda técnica que paraliza al equipo.

7. COMUNIDAD Y ECOSISTEMA DE DEVELOPERS
¿Cómo construyo una comunidad de developers alrededor de mi API que acelere la adopción sin que yo tenga que contratar un equipo de DevRel grande? Dame la estrategia mínima viable: el canal de comunicación (Discord, Slack, foro), el programa de early adopters, el tratamiento de los bug reports como feedback de producto y la generación de contenido (tutoriales, integraciones) con la ayuda de la propia comunidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar, documentar y monetizar una API que otros developers adoptan y pagan sin necesidad de un equipo de ventas grande.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'E-commerce UX: el diseño que vende online',
                'description'       => 'Diseña experiencias de e-commerce que convierten: el checkout sin fricción, las páginas de producto que comunican valor y los patrones de diseño que reducen el abandono del carrito y aumentan el ticket medio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en UX para e-commerce con experiencia en la optimización de la conversión en tiendas online de distintos sectores y tamaños. Necesito tu ayuda para mejorar el diseño de mi tienda online para aumentar la tasa de conversión, reducir el abandono del carrito y aumentar el ticket medio.

Mi contexto:
- Tipo de productos o servicios que vendo: [describe qué vendes y el rango de precio]
- Plataforma de e-commerce: [Shopify, WooCommerce, Magento, solución propia, etc.]
- Tasa de conversión actual si la conoces: [porcentaje aproximado]
- Tasa de abandono del carrito si la conoces: [porcentaje aproximado]
- Principal problema de UX identificado: [checkout complejo / páginas de producto poco convincentes / navegación confusa / problemas en mobile / etc.]
- Volumen de tráfico mensual aproximado: [para calibrar el impacto de las mejoras]

Con ese contexto, dame:

1. LA PÁGINA DE PRODUCTO QUE CONVIERTE
¿Cuáles son los elementos imprescindibles de una página de producto que convierte? Dame el diseño óptimo de la PDP (Product Detail Page): la jerarquía visual de la información, las imágenes y el vídeo de producto, la descripción que comunica beneficios en lugar de características, la prueba social (reseñas, ratings, UGC), la gestión de la disponibilidad y el stock, el CTA principal y el diseño del selector de variantes. Para cada elemento, dame el patrón de diseño que mejor funciona y el error más frecuente que lo sabotea.

2. EL CHECKOUT SIN FRICCIÓN
¿Cómo diseño el proceso de checkout que minimiza el abandono? Dame la estructura óptima: cuántos pasos tiene el checkout ideal, qué información pedir en qué orden, cómo manejar el registro obligatorio vs. el checkout como invitado, el diseño del formulario que reduce los errores de validación, la jerarquía de los métodos de pago y las señales de seguridad que tranquilizan al comprador en el momento más crítico. ¿Cuáles son los cinco campos del formulario que más fricciones generan y cómo rediseñarlos?

3. MOBILE-FIRST: EL E-COMMERCE EN EL MÓVIL
¿Cómo adapto el diseño para que la compra en mobile sea tan fácil como en desktop? Dame los patrones específicos para mobile e-commerce: el tamaño de los tap targets, el diseño de las imágenes de producto en formato vertical, el teclado adecuado para cada campo del formulario, el sticky CTA mientras se hace scroll en la PDP y los gestos que los usuarios de mobile esperan en la galería de imágenes. ¿Qué métricas debo comparar entre desktop y mobile para identificar dónde el móvil tiene problemas específicos?

4. REDUCIR EL ABANDONO DEL CARRITO: DISEÑO Y COMPORTAMIENTO
¿Qué cambios de diseño reducen el abandono del carrito sin necesidad de hacer email de recuperación? Dame las técnicas de diseño que abordan las causas principales del abandono: la transparencia de costes (shipping costs inesperados), el cálculo del total antes de llegar al checkout, el carrito persistente entre sesiones, la barra de progreso del checkout, los mensajes de urgencia y escasez que son auténticos (no los falsos), y la opción de guardar el carrito para después.

5. UPSELL Y CROSS-SELL QUE NO MOLESTAN
¿Cómo diseño las recomendaciones de producto que aumentan el ticket medio sin interrumpir el flow de compra? Dame el diseño de los módulos de upsell y cross-sell en los distintos momentos del funnel: en la PDP (productos complementarios), en el carrito (add-ons de bajo precio que no cuestionan la compra principal), en el checkout (garantía extendida, servicio premium) y en la confirmación de pedido (la próxima compra). Para cada momento, dame el copy y el diseño que funciona mejor.

6. BÚSQUEDA Y NAVEGACIÓN QUE NO PIERDE AL COMPRADOR
¿Cómo diseño la búsqueda y la navegación de una tienda online con catálogo medio o grande para que el usuario siempre encuentre lo que busca? Dame el diseño del buscador (autocompletado, corrección de errores tipográficos, búsqueda por sinónimos), los filtros y facetas de la página de resultados, la jerarquía de la navegación y la página de categoría que equilibra la cantidad de producto con la claridad de la propuesta de valor.

7. CONFIANZA Y CONVERSIÓN: LAS SEÑALES QUE TRANQUILIZAN AL COMPRADOR
¿Qué elementos de diseño generan confianza en el momento de la compra? Dame la lista completa de los trust signals que debo incluir y dónde colocarlos: los sellos de seguridad en el checkout, la política de devoluciones visible antes de añadir al carrito, las reseñas verificadas, el chat de soporte en el momento de duda, los métodos de pago reconocibles y las garantías que reducen el riesgo percibido. ¿Cuáles son los trust signals que más impactan en mi categoría de producto?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Rediseñar la UX de una tienda online para aumentar la conversión, reducir el abandono del carrito y mejorar el ticket medio.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Digital sales: el proceso de ventas en el mundo online',
                'description'       => 'Adapta el proceso de ventas al entorno digital: las demos virtuales, el cierre por videoconferencia y las herramientas de sales intelligence que hacen que el equipo venda más con menos tiempo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas digitales y sales operations con experiencia en equipos de ventas que operan completamente en remoto o en modelos híbridos. Necesito tu ayuda para adaptar y optimizar el proceso de ventas de mi empresa al entorno digital: desde la prospección hasta el cierre.

Mi contexto:
- Tipo de producto o servicio que vendo: [describe brevemente]
- Modelo de venta actual: [inbound / outbound / mixto]
- Tamaño del equipo de ventas: [número de comerciales aproximado]
- Ciclo de venta aproximado: [días / semanas / meses]
- Ticket medio: [rango aproximado]
- Principal reto en el proceso de ventas digital: [prospección fría que no convierte / demos que no cierran / pipeline que se estanca / herramientas fragmentadas / falta de visibilidad del proceso]

Con ese contexto, dame:

1. PROSPECCIÓN DIGITAL EFICIENTE: OUTREACH QUE FUNCIONA
¿Cómo diseño la estrategia de prospección digital que genera respuesta sin resultar spam? Dame el framework de outreach multicanal: la secuencia de LinkedIn + email + llamada, el copywriting del primer contacto que genera respuesta, la personalización a escala usando sales intelligence y las herramientas que automatizan sin perder el toque personal. ¿Cuál es la cadencia correcta de seguimiento y cuándo debo dejar de contactar a un prospect que no responde?

2. DEMOS VIRTUALES QUE CONVIERTEN
¿Cómo diseño y ejecuto demos por videoconferencia que avanzan el deal en lugar de informar sin comprometer? Dame la estructura de la demo virtual perfecta: la preparación previa (investigación del prospect, configuración del entorno), los primeros cinco minutos que enganchan, cómo hacer preguntas en lugar de hablar, cuándo mostrar el producto y cuándo no, el manejo de interrupciones y problemas técnicos y el cierre de la demo con un siguiente paso claro. ¿Cuáles son los errores más frecuentes en las demos virtuales?

3. HERRAMIENTAS DE SALES INTELLIGENCE Y SEÑALES DE COMPRA
¿Qué herramientas de sales intelligence debo usar para que mi equipo llegue al prospect en el momento correcto con el mensaje correcto? Dame una panorámica de las herramientas más efectivas por categoría: intención de compra (Bombora, G2), señales de contratación (LinkedIn), enriquecimiento de datos (Apollo, Clearbit), y tracking de visitantes web (Leadfeeder). Para cada categoría, dame el caso de uso concreto y cómo integrar las señales en el workflow del comercial.

4. EL PIPELINE DIGITAL: GESTIÓN Y VISIBILIDAD
¿Cómo diseño el pipeline de ventas digital para que tenga visibilidad real del estado de cada deal? Dame la estructura de etapas del pipeline con criterios de entrada y salida objetivos para cada etapa (no basados en la intuición del comercial), las métricas de pipeline health que debo monitorizar (conversion rate por etapa, velocity, deal size por segmento) y el proceso de pipeline review semanal que identifica los deals bloqueados y los que están en riesgo.

5. CIERRE POR VIDEOCONFERENCIA: LAS TÉCNICAS QUE FUNCIONAN
¿Cómo cierro deals de forma efectiva en un entorno completamente virtual? Dame las técnicas de cierre adaptadas al contexto digital: cómo crear urgencia genuina sin presionar, el uso de la propuesta interactiva en lugar del PDF estático, la gestión de los stakeholders múltiples que no están en la misma sala, el proceso de firma electrónica y el manejo de las últimas objeciones en el cierre. ¿Qué diferencias clave hay entre cerrar en persona y cerrar por videollamada?

6. AUTOMATIZACIÓN Y SECUENCIAS DE VENTAS
¿Qué partes del proceso de ventas debo automatizar y cuáles debo mantener manuales? Dame el mapa de automatización del proceso de ventas: los emails de nurturing automatizados, las secuencias de seguimiento, la asignación automática de leads, las alertas de engagement y el scoring de leads. Para cada automatización, dame el criterio para activarla y cómo evitar que la automatización destruya la experiencia del prospect.

7. KPIs DEL EQUIPO DE VENTAS DIGITAL
¿Cuáles son las métricas que debo monitorizar para saber si el proceso de ventas digital está funcionando? Dame el dashboard de métricas del equipo de ventas: las métricas de actividad (emails enviados, llamadas, demos realizadas), las métricas de conversión por etapa, las métricas de pipeline (creación, velocidad, valor), las métricas de resultado (ARR generado, cuota alcanzada) y las métricas de eficiencia (coste por deal, revenue por comercial). ¿Cuáles son las más predictivas del resultado final?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Adaptar y optimizar el proceso de ventas al entorno digital: prospección, demos virtuales, herramientas de sales intelligence y cierre por videoconferencia.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Marketplace: construir el lado de la oferta y la demanda',
                'description'       => 'Construye el mercado bilateral que conecta dos grupos: el problema del huevo y la gallina, los modelos de arranque del mercado y las métricas que definen si el marketplace es saludable o está en desequilibrio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product strategy para marketplaces y plataformas bilaterales con experiencia en el diseño y lanzamiento de mercados en distintas categorías. Necesito tu ayuda para resolver el problema central del marketplace: cómo construir simultáneamente el lado de la oferta y el de la demanda, y cómo saber si el mercado está en equilibrio o en problemas.

Mi contexto:
- Descripción del marketplace que estoy construyendo o planificando: [qué conecta, qué tipo de transacciones facilita]
- Estado actual: [idea / pre-lanzamiento / ya con usuarios en uno o ambos lados / buscando escalar]
- Lado de la oferta: [quiénes son los proveedores, vendedores, o prestadores de servicio]
- Lado de la demanda: [quiénes son los compradores, clientes, o consumidores]
- Modelo de monetización previsto o actual: [comisión por transacción, subscripción, listing fee, etc.]
- Mayor reto ahora mismo: [el huevo y la gallina / retención de uno de los lados / calidad de la oferta / confianza / monetización]

Con ese contexto, dame:

1. EL PROBLEMA DEL HUEVO Y LA GALLINA: ESTRATEGIAS DE ARRANQUE
Explícame las principales estrategias para resolver el problema del huevo y la gallina en un marketplace: el constraining side approach (subsidiar uno de los lados primero), el faking it (simular oferta antes de tenerla), el single-side value (crear valor para un solo lado antes de conectarlos), el offline-to-online (traer transacciones que ya ocurren offline) y el geographic focus (arrancar en una ciudad o nicho antes de escalar). Para cada estrategia, dame el caso de uso ideal, los riesgos y un ejemplo de marketplace conocido que la usó.

2. SECUENCIA DE LANZAMIENTO: CUÁL ES EL LADO QUE ARRANCO PRIMERO
¿Debo construir primero el lado de la oferta o el de la demanda? Dame el framework de decisión según las características de mi mercado: qué lado tiene mayor coste de adquisición, cuál tiene mayor propensión a hacer churn si no tiene transacciones y cuál es más difícil de conseguir una vez que el marketplace crece. Para mi caso específico, ¿cuál es el lado constraining y cuál debería arrancar primero?

3. MÉTRICAS DE SALUD DEL MARKETPLACE
¿Cómo sé si mi marketplace es saludable o está en desequilibrio? Dame el set completo de métricas de salud de un marketplace: el liquidity ratio (transacciones por oferta disponible), el fill rate (porcentaje de demanda que encuentra oferta), el repeat purchase rate, el tiempo medio hasta la primera transacción, el GMV por usuario activo en cada lado, y las métricas de confianza (dispute rate, churn post-primera transacción). Para cada métrica, dame el rango de valores que indica un mercado sano y los umbrales de alerta.

4. RETENCIÓN DE AMBOS LADOS: EL RETO ASIMÉTRICO
¿Cómo retengo a los proveedores y a los compradores con necesidades tan distintas? Dame la estrategia de retención diferenciada para cada lado: qué necesita el proveedor para no abandonar (volumen de transacciones, pagos rápidos, herramientas de gestión, visibilidad), qué necesita el comprador para repetir (selección de calidad, precio competitivo, experiencia fluida, confianza), y cómo el equipo de producto debe priorizar cuando las necesidades de los dos lados entran en conflicto.

5. CALIDAD EN EL MARKETPLACE: CÓMO CONTROLARLA SIN AHOGAR LA OFERTA
¿Cómo mantengo la calidad de la oferta sin que el proceso de aprobación desincentive a los nuevos proveedores? Dame el modelo de gestión de calidad: el onboarding selectivo vs. el open marketplace, el sistema de ratings y reviews que no se puede manipular, el proceso de offboarding de los malos actores, las métricas de calidad que monitorizo en el dashboard y cómo comunico los estándares de calidad a los proveedores sin que resulte autoritario.

6. MONETIZACIÓN DEL MARKETPLACE: CÓMO Y CUÁNDO COBRAR
¿Cuándo es el momento correcto para activar la monetización y qué modelo elegir? Dame el análisis de los principales modelos de monetización para marketplaces (comisión de transacción, subscripción de acceso, listing fee, freemium con featured listings, servicios de valor añadido, SaaS para proveedores) y para cuál encaja mejor en mi caso. ¿Cómo evito que activar la monetización destruya la confianza del mercado o desplace las transacciones fuera de la plataforma?

7. ESCALAR EL MARKETPLACE: DE UN NICHO A UNA CATEGORÍA
¿Cómo escalo el marketplace sin perder la densidad de oferta y demanda que hace que funcione en el nicho inicial? Dame la estrategia de expansión: cuándo y cómo expandirse geográficamente, cómo añadir nuevas categorías sin diluir el foco, el riesgo de expansión prematura y los indicadores de que el mercado está listo para escalar. Dame también el caso de los marketplaces que escalaron demasiado pronto y qué pasó.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar la estrategia de arranque de un marketplace bilateral: resolver el problema del huevo y la gallina, definir métricas de salud y escalar sin perder la densidad del mercado.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Plataformas de trabajo gig y gestión de talento flexible',
                'description'       => 'Gestiona la fuerza de trabajo que combina empleados fijos con trabajadores gig, freelancers y agencias: los modelos de contratación flexible, la gestión de la experiencia de cada tipo de trabajador y la estrategia que maximiza la flexibilidad sin perder calidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de talento y workforce planning con experiencia en organizaciones que combinan empleados fijos con trabajadores gig, freelancers y agencias. Necesito tu ayuda para diseñar o mejorar el modelo de gestión de talento flexible de mi organización.

Mi contexto:
- Tamaño de la organización: [número de empleados fijos aproximado]
- Sectores o funciones donde usas o quieres usar talento flexible: [tecnología, marketing, diseño, ventas, operaciones, etc.]
- Tipos de trabajadores externos que usas actualmente: [freelancers, agencias, consultoras, plataformas gig, etc.]
- Proporción actual de talento flexible sobre el total: [porcentaje aproximado]
- Principal reto: [calidad del trabajo freelance / onboarding lento / costes difíciles de controlar / problemas legales / integración cultural / falta de proceso]
- País donde operas principalmente: [importante para el marco legal]

Con ese contexto, dame:

1. EL MODELO DE TALENTO FLEXIBLE: CUÁNDO USAR CADA TIPO
¿Cuándo tiene sentido contratar a un empleado fijo, a un freelance, a una agencia o a un trabajador de plataforma gig? Dame el framework de decisión para cada tipo de proyecto o función: las variables que determinan la elección correcta (frecuencia de la necesidad, especificidad del conocimiento, tiempo de onboarding, coste a largo plazo y riesgo de dependencia). Para mi caso específico, ¿qué mix de talento recomendarías y por qué?

2. ONBOARDING DE TRABAJADORES EXTERNOS: EL PROCESO QUE ACELERA LA CALIDAD
¿Cómo diseño el proceso de onboarding de freelancers y agencias para que empiecen a producir calidad desde el primer día? Dame el proceso de onboarding estructurado: el brief inicial que elimina las idas y venidas, la sesión de kick-off que alinea expectativas, el acceso a herramientas y sistemas, la revisión del primer entregable y el feedback estructurado que calibra al freelance para los siguientes proyectos. ¿Qué documentación de contexto de empresa debo preparar para no explicar lo mismo cada vez que incorporo a alguien nuevo?

3. GESTIÓN DE LA CALIDAD EN PROYECTOS CON TALENTO EXTERNO
¿Cómo garantizo la calidad del trabajo cuando la persona que lo hace no está en la empresa? Dame el proceso de gestión de calidad para proyectos con externos: los hitos de revisión, los criterios de aceptación del entregable, el proceso de feedback constructivo que mejora el trabajo sin ofender al profesional y el protocolo cuando el trabajo entregado no cumple los estándares. ¿Cómo evito el scope creep y los malentendidos sobre lo que estaba incluido en el proyecto?

4. PLATAFORMAS GIG Y MARKETPLACES DE TALENTO: CÓMO ELEGIR Y USAR
¿Qué plataformas de talento flexible existen y para qué tipo de necesidades es mejor cada una? Dame una panorámica de las principales plataformas (Upwork, Toptal, Fiverr Business, Malt, Deel, etc.) diferenciando por tipo de perfil, nivel de calidad, modelo de precios y complejidad de gestión. ¿Cómo evalúo correctamente los perfiles en estas plataformas y qué señales me indican que un candidato va a dar buen resultado antes de contratarlo?

5. MARCO LEGAL Y CUMPLIMIENTO: EL RIESGO QUE NADIE QUIERE
¿Cuáles son los riesgos legales de gestionar mal la relación con trabajadores externos y cómo los mitigó? Explícame los criterios que determinan si un freelance puede ser recalificado como empleado (la prueba de laboralidad en España, el IR35 en UK, la clasificación de contractor en EE.UU.), los contratos que debo tener firmados, el tratamiento del RGPD para los datos a los que el freelance tiene acceso y el proceso de offboarding que protege la propiedad intelectual de la empresa.

6. COSTES Y PRESUPUESTACIÓN DEL TALENTO FLEXIBLE
¿Cómo calculo el coste real de usar talento flexible versus contratar de forma fija? Dame el modelo de cálculo del coste total: la tarifa del freelance más los costes ocultos (tiempo de gestión, onboarding, revisiones, errores), la comparación con el coste empleado fijo (salario más seguridad social, beneficios, espacio de oficina, equipamiento), y cuándo la ecuación favorece claramente uno u otro. ¿Cómo presupuesto el talento flexible en el plan anual de forma que sea predecible?

7. CULTURA E INTEGRACIÓN: LOS EXTERNOS QUE SE SIENTEN PARTE DEL EQUIPO
¿Cómo integro a los trabajadores externos en la cultura y los procesos del equipo sin crear una ciudadanía de segunda clase? Dame las prácticas de integración que funcionan: la inclusión en las reuniones relevantes (y la exclusión de las que no aportan), el acceso a los canales de comunicación del equipo, el reconocimiento del buen trabajo y el proceso de feedback bidireccional que hace que el freelance quiera seguir trabajando con nosotros y no con la competencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar un modelo de gestión de talento flexible que combina empleados fijos con freelancers, gig workers y agencias con calidad y cumplimiento legal.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelos de negocio digitales: cómo se valoran',
                'description'       => 'Entiende cómo se valoran las empresas digitales: los múltiplos de las plataformas, los SaaS, los marketplaces y los negocios de contenido, y las razones por las que los modelos de negocio digitales se valoran de formas tan diferentes a los tradicionales.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en valoración de empresas digitales con experiencia en operaciones de M&A, venture capital y análisis de equity de compañías de tecnología y negocios online. Necesito que me ayudes a entender cómo se valoran los distintos modelos de negocio digitales y qué factores determinan los múltiplos que el mercado les asigna.

Mi contexto:
- Tipo de empresa o modelo de negocio que quiero valorar o entender: [SaaS, marketplace, e-commerce, media/contenido, plataforma, fintech, etc.]
- Propósito del análisis: [preparar una ronda de inversión / evaluar una adquisición / entender la posición competitiva / due diligence / curiosidad analítica]
- Métricas financieras disponibles si las tienes: [ARR, MRR, GMV, revenue, EBITDA, growth rate, churn, etc.]
- Etapa de la empresa: [pre-revenue / early stage / growth / late stage / cotizada]
- Mercado geográfico principal: [EE.UU., Europa, LATAM, global]

Con ese contexto, dame:

1. POR QUÉ LOS NEGOCIOS DIGITALES SE VALORAN DIFERENTE
Explícame los principios fundamentales que hacen que los modelos de negocio digitales reciban múltiplos tan distintos a los negocios tradicionales: los efectos de red, la escalabilidad sin coste marginal proporcional, el poder de los datos, los costes de cambio de los clientes y la velocidad de crecimiento que puede hacer que un negocio pequeño hoy sea gigante en tres años. ¿Por qué dos empresas con el mismo revenue pueden tener valoraciones diez veces diferentes?

2. MÚLTIPLOS POR MODELO DE NEGOCIO: EL MAPA COMPLETO
Dame el mapa de múltiplos típicos (EV/Revenue y EV/EBITDA en cotizadas, revenue multiples en privadas) para cada uno de los siguientes modelos de negocio digitales: SaaS B2B con alto NRR, SaaS con churn elevado, marketplace de alta liquidez, e-commerce de marca propia, media y contenido de subscripción, fintech de pagos y fintech de préstamos. Para cada modelo, explica qué justifica el múltiplo y qué lo comprime.

3. LAS MÉTRICAS QUE DETERMINAN EL MÚLTIPLO EN SAAS
¿Qué métricas concretas de un SaaS explican la diferencia entre un múltiplo de 3x revenue y uno de 15x revenue? Dame el análisis detallado de los factores que más impactan en el múltiplo de un SaaS: el growth rate (la regla del 40, el Rule of 40 actualizado), el Net Revenue Retention (por qué un NRR por encima del 120% es transformador), el gross margin, el CAC Payback Period, la concentración de clientes y el market size. Dame rangos concretos de cada métrica y cómo se traduce en múltiplo.

4. VALORACIÓN DE MARKETPLACES: EL GMV COMO MÉTRICA ENGAÑOSA
¿Por qué el GMV no es suficiente para valorar un marketplace y qué métricas son más relevantes? Explícame las métricas específicas de valoración de marketplaces: el take rate y su evolución, la liquidez del mercado (transacciones por oferta disponible), el repeat rate de compradores y vendedores, el NPS de ambos lados y el EBITDA margin del negocio neto. ¿Qué múltiplos suelen pagar los compradores estratégicos y los financieros en adquisiciones de marketplaces?

5. NEGOCIOS DE CONTENIDO Y MEDIA DIGITAL: CÓMO SE VALORAN
¿Cómo se valoran los negocios de contenido digital: newsletters de pago, comunidades, podcasts, canales de YouTube, blogs con SEO o plataformas de e-learning? Dame el framework de valoración de activos digitales de contenido: los múltiplos sobre ingresos de subscripción vs. ingresos publicitarios, la importancia de la diversificación de ingresos, el valor de la audiencia propia (lista de email, seguidores) y cómo los negocios de contenido han sido adquiridos históricamente. ¿Cuándo tiene sentido comprar un activo de contenido digital?

6. DUE DILIGENCE FINANCIERO EN NEGOCIOS DIGITALES
¿Qué aspectos específicos debo revisar en el due diligence financiero de un negocio digital que son distintos al due diligence tradicional? Dame el checklist de due diligence financiero para empresas digitales: la verificación de las métricas de SaaS (cómo se calculan realmente el churn y el NRR), la calidad del revenue (reconocimiento contable en contratos anuales prepagados), la concentración de tráfico en canales que no controla la empresa (SEO, paid, etc.), la dependencia de plataformas de terceros (App Store, Amazon) y las métricas de cohort que revelan la salud real de la retención.

7. CÓMO MEJORAR EL MÚLTIPLO ANTES DE UNA RONDA O VENTA
¿Qué acciones concretas puede tomar un fundador o CFO para mejorar el múltiplo de valoración antes de levantar una ronda o iniciar un proceso de venta? Dame el plan de acción de doce meses para mejorar el perfil de valoración: qué métricas priorizar, cómo limpiar el P&L para que los EBITDA ajustados sean defendibles, cómo reducir la concentración de clientes si es un problema y cómo narrar el crecimiento futuro de forma que los inversores le asignen valor.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender cómo se valoran los distintos modelos de negocio digitales y qué métricas determinan los múltiplos que el mercado asigna.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Derecho digital y regulación de plataformas',
                'description'       => 'El marco legal de las plataformas digitales: la responsabilidad de los intermediarios, la regulación de contenidos (DSA en Europa), los mercados digitales (DMA) y los retos jurídicos de los negocios que operan en múltiples jurisdicciones a través de internet.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado experto en derecho digital y regulación de plataformas con experiencia en el asesoramiento a empresas tecnológicas que operan en la Unión Europea y a nivel internacional. Necesito que me expliques el marco legal que regula las plataformas digitales y los retos jurídicos que debo conocer para operar con seguridad.

Mi contexto:
- Tipo de plataforma o negocio digital: [marketplace / red social / plataforma de contenido / motor de búsqueda / app store / comparador / SaaS / otro]
- Jurisdicciones donde opera: [UE, España, EE.UU., LATAM, o varias]
- Número aproximado de usuarios o empresas usuarias: [relevante para determinar la categoría regulatoria]
- Situación jurídica que quiero analizar: [cumplimiento del DSA / impacto del DMA / responsabilidad por contenidos de usuarios / datos y RGPD aplicado a plataformas / contratación con usuarios y cláusulas abusivas / preparación para auditoría regulatoria]

Con ese contexto, dame:

1. EL DSA (DIGITAL SERVICES ACT): OBLIGACIONES POR TAMAÑO
Explícame la estructura del Reglamento de Servicios Digitales (DSA, Reglamento UE 2022/2065): las cuatro categorías de prestadores (servicios de intermediación, servicios de alojamiento, plataformas online y muy grandes plataformas o VLOP) y las obligaciones que aplican a cada una. ¿Cuándo una plataforma pasa a ser considerada Muy Grande (45 millones de usuarios mensuales) y qué obligaciones adicionales conlleva esa categoría, incluyendo las auditorías anuales y los informes de transparencia?

2. RESPONSABILIDAD POR CONTENIDOS DE USUARIOS
¿Cuándo es responsable la plataforma por los contenidos que publican sus usuarios? Explícame el régimen de responsabilidad de los intermediarios en la UE: el principio del puerto seguro del DSA, las condiciones para perder la exoneración de responsabilidad (conocimiento efectivo y falta de acción diligente), el sistema de notice-and-action que obliga a la plataforma a actuar ante notificaciones de ilicitud y las diferencias con el régimen de la Section 230 en EE.UU. ¿Qué sistemas de moderación de contenido debo implementar para no perder el safe harbor?

3. EL DMA (DIGITAL MARKETS ACT): GATEKEEPERS Y OBLIGACIONES
¿Qué es el Reglamento de Mercados Digitales (DMA, Reglamento UE 2022/1925) y a quién aplica? Explícame los criterios para ser designado gatekeeper (volumen de negocio, número de usuarios, posición de puerta de acceso), las obligaciones que implica la designación (interoperabilidad, datos de terceros, no auto-preferencia, acceso a datos de plataforma) y los servicios básicos de plataforma que cubre. ¿Cómo cambia el mercado digital europeo para las empresas que no son gatekeepers pero que compiten con ellos?

4. TÉRMINOS Y CONDICIONES DE LAS PLATAFORMAS
¿Qué deben incluir los términos y condiciones de una plataforma digital para cumplir con la normativa europea? Dame el checklist de cláusulas obligatorias bajo el DSA y la Directiva de Derechos de los Consumidores: los mecanismos de reclamación internos, la información sobre el sistema de recomendación, la transparencia en la publicidad, las cláusulas sobre suspensión de cuentas (con preaviso y motivación) y los requisitos para las plataformas que permiten a empresas vender a consumidores (marketplace B2C). ¿Cuáles son las cláusulas que la AEPD y la Comisión Europea han considerado abusivas?

5. DATOS EN PLATAFORMAS: RGPD Y DATA ACT
¿Qué obligaciones específicas de protección de datos tienen las plataformas digitales más allá del RGPD estándar? Explícame la aplicación del RGPD a los modelos de negocio basados en datos de usuarios (publicidad segmentada, perfiles de comportamiento, datos de menores), el nuevo Reglamento de Datos (Data Act, Reglamento UE 2023/2854) y cómo impacta a los fabricantes de dispositivos conectados y a las plataformas que generan datos de terceros, y el requisito de portabilidad de datos del DSA para que los usuarios puedan cambiar de plataforma.

6. CUMPLIMIENTO REGULATORIO: EL PROGRAMA DE COMPLIANCE DIGITAL
¿Cómo diseño el programa de compliance regulatorio para una plataforma digital que quiere estar al día con la regulación europea? Dame los elementos del programa: el mapa de obligaciones aplicables según la categoría del DSA/DMA, el sistema de gestión de riesgos de contenido ilícito, el proceso de respuesta a las autoridades (CNMC, AEPD, Comisión Europea), el nombramiento del punto de contacto regulatorio y la documentación que debo tener disponible para una auditoría de la Comisión.

7. LOS CINCO RIESGOS LEGALES QUE MÁS IGNORAN LAS STARTUPS DIGITALES
Lista los cinco riesgos legales que las plataformas digitales en crecimiento ignoran hasta que les explota: la falta de adecuación del sistema de notice-and-takedown, los dark patterns en el proceso de registro y cancelación que violan el DSA y la Directiva de Consumidores, el uso de datos de usuarios para entrenar modelos de IA sin base jurídica adecuada, la falta de transparencia en los sistemas de recomendación y la acumulación de multas por incumplimiento del RGPD que puede alcanzar el 4% del facturación global.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender el marco legal de las plataformas digitales en Europa: DSA, DMA, responsabilidad por contenidos y compliance regulatorio.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Digital-first customer success',
                'description'       => 'El modelo de customer success que funciona sin calls semanales: el onboarding en producto, el éxito automatizado y la intervención humana selectiva que escala la cobertura sin perder calidad en los momentos que importan.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer success strategy con experiencia en el diseño de modelos de CS digital-first para empresas SaaS y plataformas que necesitan escalar la cobertura sin aumentar el equipo de forma proporcional. Necesito tu ayuda para construir o mejorar el modelo de customer success que funciona sin depender de las calls semanales con cada cliente.

Mi contexto:
- Tipo de producto: [SaaS B2B, plataforma, herramienta de productividad, etc.]
- Número de clientes activos: [aproximado]
- Segmentación de clientes actual: [si tienes enterprise, mid-market, SMB, self-serve, etc.]
- Modelo de CS actual: [un CSM por X clientes / todos en high-touch / sin CS organizado / etc.]
- Principal reto de escalabilidad: [demasiadas cuentas por CSM / no hay visibilidad del engagement / el onboarding es manual / los clientes no adoptan bien el producto / churn sin señales previas]
- NRR actual si lo conoces: [el indicador principal de la salud del CS]

Con ese contexto, dame:

1. EL MODELO DIGITAL-FIRST: QUÉ SIGNIFICA EN PRÁCTICA
Explícame qué es el customer success digital-first y en qué se diferencia del modelo tradicional high-touch: el onboarding en producto vs. el onboarding guiado por un CSM, los touchpoints automatizados vs. las calls programadas, la intervención basada en señales de producto vs. las reuniones periódicas de calendario. ¿Qué tipo de empresa y qué ticket medio o ARR por cliente hacen que el modelo digital-first sea la elección correcta? ¿Cuándo sigue siendo imprescindible el high-touch?

2. ONBOARDING EN PRODUCTO: EL PRIMER MES QUE LO CAMBIA TODO
¿Cómo diseño el onboarding en producto que lleva al cliente a su primer momento de valor sin necesitar a un CSM de la mano? Dame el proceso de diseño del onboarding digital: la definición del momento de valor (el aha moment) que quiero que el cliente alcance en los primeros siete días, los tooltips y walkthroughs que guían sin abrumar, los emails de activación que acompañan al onboarding en el producto, los checklists de setup que dan sensación de progreso y la medición del completion rate por paso. ¿Cómo distingo a los clientes que necesitan ayuda manual en el onboarding de los que avanzan solos?

3. HEALTH SCORE Y SEÑALES DE ENGAGEMENT
¿Cómo construyo un health score que me diga cuándo un cliente está en riesgo antes de que cancele? Dame el proceso de diseño del customer health score: qué variables de engagement en el producto incluir (login frequency, feature adoption, invitaciones a otros usuarios, volumen de uso), cómo ponderarlas, cómo combinarlas con señales externas (NPS, tickets de soporte, estado del contrato) y con qué frecuencia recalcular el score. ¿Qué umbrales de health score deben desencadenar una alerta al equipo de CS?

4. AUTOMATIZACIÓN DEL ÉXITO: LOS TOUCHPOINTS QUE FUNCIONAN SIN CSM
¿Qué touchpoints automatizados puedo implementar para sustituir las calls periódicas en las cuentas de menor ARR? Dame el mapa de touchpoints automatizados en el ciclo de vida del cliente: el email de bienvenida del onboarding, el milestone email cuando el cliente alcanza el primer momento de valor, la alerta de baja actividad antes de que caiga demasiado, el email de expansión cuando el cliente está usando el 80% de su límite, el NPS automático en el momento correcto del ciclo de vida y el proceso de renovación automatizado para las cuentas sin riesgo. Para cada touchpoint, dame el trigger, el canal, el tono y el objetivo.

5. INTERVENCIÓN HUMANA SELECTIVA: CUÁNDO Y CÓMO
¿Cuándo merece la pena que un CSM intervenga de forma proactiva en una cuenta digital-first? Dame el modelo de intervención basada en señales: los triggers que deben mover a un cliente del track digital al track human (caída de engagement por debajo del umbral, NPS detractor, escalación de soporte repetida, señal de compra de la competencia), el protocolo de outreach del CSM cuando interviene (qué decir, en qué canal, con qué objetivo) y cómo volver al track digital una vez resuelta la situación.

6. MÉTRICAS DEL MODELO DIGITAL-FIRST
¿Cuáles son las métricas que me dicen si el modelo digital-first está funcionando? Dame el set de KPIs del CS digital: el time-to-value del onboarding, el onboarding completion rate, el product engagement score por cohorte, el churn rate por segmento (digital vs. high-touch), el NRR por canal de CS, el número de cuentas por CSM y la cobertura de intervenciones proactivas sobre el total de alertas generadas. ¿Qué benchmarks son razonables para cada métrica según el tipo de producto?

7. LA TRANSICIÓN DE HIGH-TOUCH A DIGITAL-FIRST
¿Cómo hago la transición de un modelo de CS high-touch a uno digital-first sin generar churn en el proceso? Dame el plan de transición: cómo identificar qué cuentas pueden pasar al track digital sin riesgo (por ARR, por engagement, por madurez en el uso del producto), cómo comunicar el cambio a los clientes, qué hacer con los clientes que se resisten a la transición y cómo medir el impacto del cambio en el NRR durante los primeros seis meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar un modelo de customer success digital-first que escala la cobertura sin aumentar el equipo de forma proporcional.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Monetización de conocimiento online: cursos, comunidades y subscripciones',
                'description'       => 'El freelance que construye ingresos pasivos digitales: los cursos online, las comunidades de pago y los contenidos de subscripción que complementan los ingresos del trabajo directo con clientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en creación de negocios de conocimiento online con experiencia ayudando a profesionales independientes y freelancers a construir fuentes de ingresos pasivos o semi-pasivos a través de cursos, comunidades y contenidos de subscripción. Necesito tu ayuda para diseñar mi estrategia de monetización de conocimiento online que complemente mis ingresos actuales como freelance.

Mi contexto:
- Área de conocimiento o especialización: [describe en qué eres experto]
- Audiencia objetivo: [a quién va dirigido tu conocimiento: otros profesionales, empresas, particulares, etc.]
- Presencia digital actual: [newsletter, LinkedIn, YouTube, podcast, Twitter/X, web, etc. y el tamaño aproximado de cada audiencia]
- Ingresos actuales como freelance: [opcional, para calibrar la ambición del proyecto de monetización]
- Qué formato te atrae más: [cursos grabados, comunidad, subscripción de contenido, mentoring grupal, etc.]
- Principal obstáculo que te frena: [no sé por dónde empezar / no tengo audiencia / no sé qué precio poner / me da miedo no vender / no tengo tiempo para crear el contenido]

Con ese contexto, dame:

1. EL MAPA DE PRODUCTOS DE CONOCIMIENTO: CUÁL EMPEZAR
¿Cuál es el producto de conocimiento correcto para empezar según mi situación? Dame el mapa de productos de conocimiento ordenados por esfuerzo de creación y potencial de ingresos: el ebook o guía (bajo esfuerzo, bajo precio), el taller online en directo (medio esfuerzo, validación rápida), el curso grabado (alto esfuerzo, escalable), la comunidad de pago (mantenimiento continuo, ingresos recurrentes) y el programa de mentoring grupal (alto precio, alto esfuerzo, bajo volumen). Para mi perfil específico, ¿cuál recomiendas como primer producto y cuál como siguiente paso?

2. VALIDACIÓN ANTES DE CREAR: CÓMO VENDER ANTES DE TENER EL PRODUCTO
¿Cómo valido que alguien va a pagar por mi conocimiento antes de dedicar meses a crear el curso o la comunidad? Dame el proceso de validación mínima: la encuesta de necesidades, la conversación de discovery con diez personas de mi audiencia, el presale de un taller en directo como prueba de concepto, y cómo interpretar la respuesta (la diferencia entre "suena bien" y "toma mi dinero"). ¿Cuántas ventas necesito para considerar validada la idea?

3. PRICING DEL CONOCIMIENTO: CUÁNTO COBRAR
¿Cómo pongo precio a un curso, una comunidad o una subscripción de contenido sin quedarme corto ni espantar a la audiencia? Dame el framework de pricing para productos de conocimiento: la anchoring de precio en el valor transformacional (no en las horas de contenido), la diferencia entre el precio de lanzamiento y el precio definitivo, cómo testear el precio con la audiencia antes de fijar el definitivo y los rangos de precio habituales por tipo de producto y audiencia. ¿Por qué la mayoría de los freelancers ponen precios demasiado bajos en sus productos digitales?

4. CONSTRUCCIÓN DE AUDIENCIA: EL ACTIVO PREVIO AL PRODUCTO
¿Cómo construyo la audiencia que compra mis productos de conocimiento si aún no la tengo o es pequeña? Dame la estrategia de construcción de audiencia para freelancers: el contenido que demuestra expertise (LinkedIn, newsletter, YouTube) versus el contenido que entretiene, la cadencia de publicación sostenible para alguien que tiene clientes, la estrategia de lista de email como activo más valioso y las colaboraciones con otros creadores para acceder a audiencias establecidas. ¿Cuánta audiencia necesito para hacer un lanzamiento viable?

5. LANZAMIENTO: EL PROCESO DESDE CERO A LA PRIMERA VENTA
¿Cómo lanzo mi primer producto de conocimiento si no tengo experiencia previa en lanzamientos? Dame el proceso de lanzamiento paso a paso: la lista de espera para generar urgencia, la secuencia de emails de lanzamiento (cuántos, con qué contenido, con qué cadencia), la página de ventas mínima que convierte, la gestión de la ventana de lanzamiento (cuánto tiempo abrir el carrito) y cómo gestionar el post-lanzamiento si las ventas son menores a las esperadas. ¿Cuánto tiempo de preparación necesito para un lanzamiento sencillo?

6. COMUNIDADES DE PAGO: EL MODELO DE INGRESOS RECURRENTES
¿Cómo diseño y gestiono una comunidad de pago que la gente quiere seguir pagando mes a mes? Dame el modelo de comunidad viable para un freelance: la plataforma correcta (Circle, Skool, Discord, Slack), el precio de subscripción que equilibra acceso y valor percibido, la propuesta de valor central que hace que la gente no cancele, el nivel mínimo de actividad que necesito mantener como creador y el proceso de incorporación de nuevos miembros que maximiza la retención desde el primer día. ¿Cuántos miembros mínimos necesito para que la comunidad tenga vida propia?

7. BALANCEAR EL NEGOCIO DE CONOCIMIENTO CON LOS CLIENTES FREELANCE
¿Cómo gestiono el tiempo para construir productos de conocimiento sin descuidar a mis clientes actuales ni quemarme? Dame el modelo de gestión del tiempo del freelance que construye un negocio de conocimiento en paralelo: cuántas horas a la semana es realista dedicar en cada etapa, qué delegar primero (edición, community management, soporte), cuándo tiene sentido reducir los clientes freelance para dedicar más tiempo al negocio de conocimiento y cómo saber que el negocio de conocimiento está listo para ser la fuente principal de ingresos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar la estrategia de monetización de conocimiento online: cursos, comunidades y subscripciones que complementan los ingresos del trabajo freelance.',
                'vote_score'        => 45,
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
