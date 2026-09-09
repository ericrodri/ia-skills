<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills184Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Psicología del precio en marketing',
                'description'       => 'Aplica los principios de la economía conductual para presentar los precios de forma que maximicen la conversión: el efecto ancla, el precio de señuelo y los bundles que funcionan.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en economía conductual aplicada al marketing y la conversión. Quiero que me ayudes a diseñar la estrategia de presentación de precios para mi producto o servicio usando los principios más efectivos del behavioral pricing.

Mi contexto:
- Producto/servicio: [describe brevemente qué vendes]
- Precio objetivo o rango actual: [indica el precio o rango que tienes en mente]
- Público objetivo: [perfil del cliente, poder adquisitivo aproximado, contexto de compra]
- Canal de venta principal: [web, app, llamada comercial, tienda física, etc.]
- Competidores principales y sus precios: [menciona 2-3 referencias de mercado]
- ¿Tienes varias opciones o tiers? [sí/no, descríbelos si los tienes]

Con esa información, quiero que me entregues:

1. ANÁLISIS DEL EFECTO ANCLA
Explícame cómo puedo usar el precio de referencia o ancla para que mi precio objetivo parezca razonable o incluso una ganga. Dame ejemplos concretos de cómo presentar el ancla en mi página de precios, en el proceso de checkout o en la conversación comercial. Incluye cuál debería ser el ancla ideal para mi caso y cómo introducirla sin que parezca artificial.

2. ESTRATEGIA DE SEÑUELO (DECOY PRICING)
Si tengo o puedo crear múltiples opciones, diseña una opción señuelo que haga que la opción que yo quiero vender parezca la elección obvia. Explica por qué funciona psicológicamente este efecto en mi categoría específica y cómo estructurar los tres tiers para maximizar la elección del tier medio o el que más me interesa vender.

3. BUNDLES Y AGRUPACIÓN DE VALOR
Propón dos o tres bundles posibles combinando mis productos, servicios o features. Para cada bundle indica: qué incluir, cómo nombrarlo, a qué precio posicionarlo y cómo comunicar el ahorro respecto a comprar por separado. Explica la diferencia entre bundling puro y mixed bundling y cuál me conviene según mi caso.

4. OTROS SESGOS COGNITIVOS APLICABLES
Identifica al menos cuatro sesgos adicionales relevantes para mi situación, entre los siguientes: el efecto de la gratitud (reciprocidad), el sesgo del número izquierdo (9,99 vs 10,00), el framing de pérdidas vs ganancias, la aversión a pagar, el efecto de la escasez o urgencia percibida, y el sesgo de la prueba social en el precio. Para cada uno dame una táctica concreta que pueda implementar en mi caso.

5. JERARQUÍA VISUAL DE PRECIOS
Dame recomendaciones sobre cómo presentar visualmente los precios: tamaño de fuente, color, posición, qué elementos destacar y cuáles minimizar. Incluye si debo mostrar el precio mensual vs anual, cómo comunicar los descuentos por volumen y si conviene o no mostrar el precio de los competidores.

6. TEST A/B PRIORITARIO
Dado todo lo anterior, ¿cuál es el primer test A/B que debería hacer para validar la presentación de precios más efectiva en mi caso? Dame la hipótesis, las dos variantes a testear, la métrica principal y el tamaño de muestra mínimo estimado.

7. ERRORES FRECUENTES A EVITAR
Lista los cinco errores más comunes en la presentación de precios en mi categoría y cómo evitarlos: los que destruyen confianza, los que generan fricción innecesaria y los que hacen que el cliente compare con referencias equivocadas.

Responde con ejemplos concretos adaptados a mi contexto. Cuando uses datos de estudios o investigaciones de behavioral economics, cítalos brevemente. El objetivo final es aumentar la tasa de conversión sin bajar el precio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar la presentación de precios usando economía conductual para maximizar conversión.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Monetización de APIs y productos developer-facing',
                'description'       => 'Decide cómo cobrar por una API: por llamada, por uso, por tier y los modelos de pricing que los developers aceptan y los que les ahuyentan.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product monetization con especialización en productos developer-facing y APIs. Necesito diseñar o revisar el modelo de pricing de mi API o producto técnico para developers.

Mi contexto:
- Descripción de la API o producto: [qué hace, qué problema resuelve]
- Estado actual: [MVP sin usuarios / en beta / ya con usuarios de pago / migrando de modelo]
- Usuarios objetivo: [indie hackers, startups, empresas medianas, enterprise, o mezcla]
- Coste variable por llamada o uso: [coste de infraestructura, LLM, base de datos, etc. si lo sabes]
- Competidores y sus modelos de pricing: [menciona 2-3 y cómo cobran]
- Volumen actual de llamadas o uso si ya lo tienes: [número aproximado]

Con esa información, dame:

1. ANÁLISIS DE LOS MODELOS DE PRICING PARA APIS
Explica las ventajas y desventajas de cada uno de estos modelos aplicados a mi caso concreto:
- Pay-per-call o pay-per-use puro
- Tiers basados en volumen con precio decreciente por unidad
- Freemium con límites de rate y cuota mensual
- Flat fee mensual con límite de uso incluido y overages
- Seat-based o per-user (si aplica a mi caso)
- Revenue share o success-based (si aplica)
- Enterprise custom pricing con contrato anual

Para cada modelo indica: en qué fase de la empresa suele funcionar mejor, qué tipo de developer lo prefiere y cuándo genera fricción.

2. MODELO RECOMENDADO PARA MI CASO
Basándote en mi contexto, recomienda el modelo o la combinación de modelos que mejor encaja. Justifica la recomendación. Si propones tiers, diseña los tres o cuatro tiers iniciales con nombres, límites de uso, precio mensual y las features de diferenciación que no deberían estar en el tier inferior.

3. LA CAPA GRATUITA Y SUS LÍMITES
¿Debo tener un free tier? ¿Cuánto dar gratis? Ayúdame a definir los límites del free tier de forma que sea suficientemente generoso para que el developer pueda evaluar el producto en producción real, pero que cree fricción natural cuando escale. Incluye cómo comunicar los límites sin que el developer sienta que le están tendiendo una trampa.

4. ERRORES QUE HACEN HUIR A LOS DEVELOPERS
Lista al menos seis prácticas de pricing que generan rechazo en la comunidad developer: las que se perciben como trampa, las que generan incertidumbre de coste, las que dificultan la planificación presupuestaria de startups y las que provocan que el developer busque una alternativa open source. Para cada una, dame la alternativa correcta.

5. DOCUMENTACIÓN DE PRECIOS Y CALCULADORA
¿Cómo debo presentar los precios en la página de pricing y en la documentación? Dame la estructura ideal de la pricing page para un producto developer-facing, incluyendo si conviene o no mostrar una calculadora de estimación de costes y cómo construirla para que no genere ansiedad sino confianza.

6. TRANSICIÓN DE BETA GRATUITA A PRICING
Si estoy pasando de acceso gratuito durante la beta a un modelo de pago, dame el proceso paso a paso: la comunicación, los plazos, qué concesiones dar a los early adopters y cómo minimizar el churn en esa transición crítica.

7. MÉTRICAS DE MONETIZACIÓN A MONITORIZAR
Lista las cinco métricas clave de monetización para una API: las que me dicen si el pricing está bien calibrado, si tengo problemas de expansión de ingresos y si el free tier está convirtiendo a paid a la tasa esperada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el modelo de monetización óptimo para una API o producto técnico dirigido a developers.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Valorar el trabajo de diseño',
                'description'       => 'El pricing de servicios de diseño: cómo salir de la tarifa por hora, el pricing basado en valor y los modelos que generan mayor margen con mejor relación con el cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en estudios de diseño y profesionales creativos. Necesito tu ayuda para revisar y mejorar cómo valoro y comunico el precio de mis servicios de diseño.

Mi contexto:
- Tipo de servicios que ofrezco: [identidad visual, UX/UI, diseño web, ilustración, motion, packaging, etc.]
- Mercado objetivo: [startups, pymes, enterprise, consumidores directos, agencias]
- Modelo de pricing actual: [tarifa por hora / tarifa diaria / precio por proyecto / retainer / mix]
- Precio actual aproximado: [indica rangos si puedes]
- Dónde sientes que el modelo actual falla: [compras de precio, clientes que piden descuento, scope creep, etc.]
- Años de experiencia y nivel percibido en el mercado: [junior / mid / senior / experto reconocido]

Con esa información, dame:

1. POR QUÉ LA TARIFA POR HORA ES UN TECHO DE CRISTAL
Explícame los problemas estructurales de cobrar por hora en diseño: por qué penaliza la eficiencia, cómo crea fricción de microgestión con el cliente, qué mensaje envía sobre el valor del trabajo y por qué los mejores diseñadores del mundo no cobran así. Dame datos o ejemplos reales si los tienes.

2. MODELOS ALTERNATIVOS AL BILLING POR HORA
Para cada uno de los siguientes modelos, explícame cómo funciona, cuándo aplicarlo, cómo presentarlo al cliente y cuáles son sus riesgos:
- Precio fijo por proyecto con entregables definidos
- Pricing basado en valor (value-based pricing)
- Retainer mensual con disponibilidad garantizada
- Precio por resultado o success fee (si aplica al diseño)
- Productized services con paquetes fijos y alcance definido

3. CÓMO CALCULAR EL PRECIO BASADO EN VALOR
Dame el proceso paso a paso para estimar el valor que mi trabajo genera para el cliente: cómo hacer las preguntas adecuadas en la discovery call, cómo cuantificar el impacto económico del diseño (conversión, reducción de soporte, velocidad de desarrollo, percepción de marca) y cómo anclar el precio en ese valor en lugar de en mis horas.

4. LA CONVERSACIÓN DE PRECIO CON EL CLIENTE
Escríbeme un guión de la conversación de precio para los tres escenarios más habituales:
- Cliente que pregunta el precio al inicio antes de hablar del proyecto
- Cliente que tiene presupuesto definido y pide que encaje en él
- Cliente que recibe la propuesta y pide descuento

Para cada escenario dame las frases exactas que puedo usar, las preguntas que debo hacer y cómo manejar las objeciones más frecuentes sin bajar el precio.

5. PRODUCTIZED SERVICES PARA DISEÑADORES
¿Cómo puedo crear dos o tres paquetes de servicios estandarizados que me permitan vender sin hacer propuestas personalizadas cada vez? Ayúdame a definir qué incluye cada paquete, cómo nombrarlo, a qué precio posicionarlo y cómo comunicar el valor en la landing o en la propuesta.

6. CÓMO SUBIR LOS PRECIOS A CLIENTES ACTUALES
Dame el proceso para subir los precios a clientes con los que llevo tiempo trabajando: cuándo comunicarlo, cómo justificarlo, qué porcentaje de subida es razonable y qué hacer si el cliente no acepta la subida.

7. ERRORES DE PRICING MÁS CAROS EN DISEÑO
Lista los seis errores más costosos que cometen los diseñadores al poner precio a su trabajo, incluyendo el underpricing por inseguridad, el scope creep sin cargo adicional, las revisiones ilimitadas en el contrato y los presupuestos que no contemplan el tiempo de gestión del cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Salir del modelo de tarifa por hora y adoptar pricing basado en valor para servicios de diseño.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Descuentos estratégicos en ventas',
                'description'       => 'Cuándo dar descuentos y cuándo defenderlos: las técnicas para negociar sin bajar el precio, las concesiones que no son dinero y el impacto de los descuentos en el LTV.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en negociación comercial y estrategia de ventas. Necesito que me ayudes a construir un marco para tomar decisiones sobre descuentos: cuándo darlos, cómo de grandes, qué pedir a cambio y cómo defenderme cuando el cliente pide una rebaja.

Mi contexto:
- Tipo de producto o servicio que vendo: [describe brevemente]
- Ciclo de venta aproximado: [días / semanas / meses]
- Ticket medio y si hay contratos recurrentes: [indica si es venta única o recurrente]
- Situación habitual de descuento: [el cliente siempre pide descuento al final / hay descuentos de cierre de trimestre / descuentos por volumen / etc.]
- ¿Tienes política de descuentos definida? [sí/no]
- Mayor reto actual con los descuentos: [presión de precio al final del ciclo, comparación con competidores, descuentos que luego quedan como el precio base, etc.]

Dame:

1. EL COSTE REAL DE UN DESCUENTO EN EL LTV
Muéstrame con un ejemplo numérico sencillo cómo un descuento del 15% en el precio inicial de un contrato recurrente afecta al LTV a 3 años. Incluye también el efecto en el margen y en la percepción de valor del cliente a largo plazo. ¿Por qué los clientes con descuento agresivo tienen peor retención y NPS?

2. CUÁNDO SÍ DAR UN DESCUENTO
Define los criterios objetivos bajo los cuales dar un descuento es una decisión estratégicamente correcta: volumen de compra mínimo, pago anticipado, referencialidad del cliente, velocidad de cierre, coste de no cerrar, etc. Dame un checklist de validación antes de aprobar cualquier descuento.

3. TÉCNICAS PARA DEFENDER EL PRECIO SIN PERDER LA VENTA
Dame al menos seis técnicas concretas para responder a la petición de descuento sin bajar el precio, incluyendo:
- Anclar en el valor y el ROI en lugar de en el precio
- Reducir el alcance en lugar de bajar el precio
- Fraccionar el pago sin reducir el total
- Ofrecer una versión de entrada y escalar
- Crear urgencia con precio actual limitado en el tiempo
- Mover la conversación al coste de no actuar

Para cada técnica dame las frases exactas que puedo usar en la conversación.

4. CONCESIONES QUE NO SON DINERO
Lista diez concesiones no monetarias que puedo ofrecer como alternativa a bajar el precio: las que tienen alto valor percibido para el cliente pero bajo coste real para mí. Incluye ejemplos como incorporación prioritaria, acceso anticipado a features, soporte dedicado, formación, visibilidad en mi web, etc.

5. POLÍTICA DE DESCUENTOS: CÓMO DISEÑARLA
Ayúdame a diseñar una política de descuentos formal para mi empresa: los niveles de aprobación según el porcentaje de descuento, los criterios de elegibilidad, cómo documentarlos en el CRM y cómo comunicarla al equipo comercial para que no la use como herramienta de cierre por defecto.

6. CÓMO EVITAR QUE EL DESCUENTO SE CONVIERTA EN EL NUEVO PRECIO BASE
¿Qué pasa cuando un cliente obtiene un descuento una vez y lo espera siempre? Dame el proceso para evitar que los descuentos puntuales se conviertan en la expectativa permanente del cliente: la comunicación en el momento del descuento y la gestión en la renovación.

7. SCRIPTS DE NEGOCIACIÓN DE PRECIO
Escríbeme tres scripts de negociación para estos escenarios: cliente que pide un 30% de descuento y amenaza con irse a la competencia, cliente que pide igualar el precio de un competidor más barato, y cliente que pide descuento de cierre de trimestre. Para cada uno dame el guión completo con objeciones y respuestas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir un marco de decisión sobre descuentos y técnicas para defender el precio en negociación.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'SaaS pricing optimization',
                'description'       => 'Encuentra el precio óptimo para tu SaaS: van Westendorp, conjoint analysis, price elasticity y las palancas de monetización que la mayoría de los product managers ignoran.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en SaaS pricing strategy y monetización de productos digitales. Necesito tu ayuda para optimizar el pricing de mi SaaS, tanto desde la perspectiva metodológica como de implementación práctica.

Mi contexto:
- Descripción del SaaS: [qué hace, para quién, qué problema resuelve]
- Modelo de pricing actual: [por usuario, por uso, flat, freemium, etc.]
- Precio actual por tier: [lista los tiers actuales con precio y qué incluye]
- ARR o MRR aproximado si ya tienes ingresos: [opcional]
- Principal problema de monetización ahora mismo: [conversión baja de free a paid, churn por precio, expansión revenue insuficiente, dificultad para subir precio, etc.]
- Tamaño del equipo de producto: [solo / pequeño equipo / equipo grande]

Dame:

1. METODOLOGÍA VAN WESTENDORP APLICADA A MI CASO
Explícame cómo funciona el Price Sensitivity Meter de van Westendorp y dame las cuatro preguntas exactas que debo incluir en mi encuesta de pricing. ¿Cómo interpreto los cuatro puntos de precio resultantes (demasiado barato, barato, caro, demasiado caro)? ¿Con cuántas respuestas tengo suficiente para extraer conclusiones? Dame un ejemplo de análisis con números hipotéticos para mi categoría de producto.

2. CONJOINT ANALYSIS SIMPLIFICADO
¿Cómo puedo hacer un análisis conjoint básico sin ser un investigador de mercado? Dame el proceso simplificado para entender qué combinación de features y precios maximiza el WTP (willingness to pay) de mis segmentos de usuarios. Incluye herramientas accesibles para hacerlo y cómo interpretar los resultados.

3. ELASTICIDAD DEL PRECIO EN SAAS
Explícame el concepto de elasticidad de precio aplicado a SaaS y cómo puedo estimarla sin hacer un experimento de precios que afecte a todos mis usuarios. ¿Qué estrategias existen para testear precios de forma segura: cohorts geográficos, nuevos registros solamente, etc.? ¿Cuánto tiempo necesito para tener datos significativos?

4. LAS PALANCAS DE MONETIZACIÓN QUE LOS PMs IGNORAN
Más allá del precio del plan, explícame las siguientes palancas de monetización y cómo aplicarlas en mi caso:
- Value metric: ¿estoy cobrando por la métrica correcta?
- Packaging: ¿estoy agrupando las features de la forma que maximiza el upgrade?
- Expansion revenue: ¿tengo upsell y cross-sell sistematizados?
- Annual vs monthly billing: ¿estoy capturando suficiente ARR?
- Add-ons y features premium: ¿qué debería estar fuera del plan base?
- Pricing page optimization: ¿mi pricing page convierte al máximo?

5. PRICING PAGE: ANATOMÍA Y MEJORES PRÁCTICAS
Diseña la estructura ideal de mi pricing page: el número de tiers recomendado, cómo nombrarlos, qué destacar visualmente, si debo mostrar el toggle mensual/anual, cómo presentar la comparativa de features, qué CTA usar para cada tier y qué elementos de prueba social incluir cerca del precio.

6. SUBIR EL PRECIO SIN PERDER USUARIOS
Dame el proceso completo para ejecutar una subida de precio: cómo comunicarla a los usuarios actuales (qué decir, cuándo, en qué canal), qué grandfathering ofrecer y por cuánto tiempo, cómo medir el impacto en churn y cuál es el rango de subida que históricamente los SaaS pueden absorber sin churn significativo.

7. MÉTRICAS DE PRICING HEALTH
¿Cómo sé si mi pricing está bien calibrado? Dame las seis métricas que debo monitorizar regularmente: las que me indican si el precio es demasiado bajo, si estoy dejando dinero sobre la mesa o si el packaging está frenando la conversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Optimizar el pricing de un SaaS usando metodologías de investigación de precio y palancas de monetización.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Estructura salarial y bandas retributivas',
                'description'       => 'Diseña el sistema de compensación que es equitativo, competitivo y escalable: la arquitectura de puestos, las bandas salariales y la comunicación del sistema a los empleados.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en compensación y beneficios (C&B) con experiencia en el diseño de estructuras salariales para empresas en crecimiento. Necesito tu ayuda para diseñar o revisar el sistema de bandas retributivas de mi organización.

Mi contexto:
- Tamaño de la empresa: [número de empleados aproximado]
- Sectores o áreas funcionales principales: [tecnología, ventas, operaciones, etc.]
- País o países donde opera la empresa: [importante para la referencia de mercado]
- Situación actual: [sin estructura formal / estructura desactualizada / primera vez que lo diseñamos]
- Reto principal: [equidad interna / competitividad externa / escalabilidad / transparencia con empleados]
- ¿Tienes acceso a encuestas salariales de mercado? [sí / no / cuáles]

Con ese contexto, dame:

1. ARQUITECTURA DE PUESTOS: EL PRIMER PASO
Explícame cómo diseñar la arquitectura de puestos antes de definir las bandas salariales: qué es un job family, cómo agrupar los roles, qué niveles definir (IC levels, management levels) y cómo documentar los criterios de cada nivel para que sean objetivos y defendibles. Dame un ejemplo de arquitectura para una empresa de tecnología de 50-200 personas.

2. CÓMO DEFINIR LAS BANDAS SALARIALES
Una vez tengo la arquitectura de puestos, ¿cómo defino el ancho de cada banda? Explícame la diferencia entre banda estrecha y banda ancha, cómo usar el percentil de mercado (P25, P50, P75, P90) como punto de referencia, y cómo calibrar el midpoint de cada banda. ¿Cuántas bandas debería tener una empresa de mi tamaño?

3. FUENTES DE DATOS DE MERCADO
¿Qué encuestas y fuentes de datos salariales puedo usar para anclar mis bandas al mercado? Dame una lista de las fuentes más fiables por país o región, explícame cómo interpretar los datos (percentiles, mediana vs media, ajuste por tamaño de empresa) y cada cuánto tiempo debería actualizar las referencias.

4. EQUIDAD INTERNA: ANÁLISIS DE GAPS
¿Cómo hago un análisis de equidad interna para identificar si hay personas por encima o por debajo de la banda correspondiente a su nivel? Dame el proceso de análisis, cómo priorizar los casos de corrección, el plan de acción para los que están por debajo de la banda (corrección inmediata o faseada) y cómo gestionar a los que están por encima (red circles).

5. CÓMO COMUNICAR EL SISTEMA A LOS EMPLEADOS
¿Cuánto transparencia es recomendable? Dame las tres posturas posibles (opaco / semitransparente / radicalmente transparente), los pros y contras de cada una y cuál recomiendas para mi situación. Incluye también cómo comunicar el sistema en el onboarding, en las revisiones salariales y cuando un empleado pregunta directamente por qué gana lo que gana.

6. INTEGRACIÓN CON EL CICLO DE REVISIÓN SALARIAL
¿Cómo integro las bandas salariales con el proceso anual de revisión? Dame el calendario típico, cómo definir el presupuesto de incrementos, cómo distribuirlo entre los empleados según su posición en la banda y su desempeño, y cómo documentar las decisiones para que sean auditables y defensibles.

7. ERRORES FRECUENTES EN EL DISEÑO DE BANDAS
Lista los seis errores más comunes que cometen las empresas cuando diseñan su primera estructura salarial: las bandas demasiado estrechas que no permiten progresión, los niveles mal definidos que generan inflación de títulos, la falta de actualización al mercado y los sistemas que se convierten en fuente de conflicto en lugar de en herramienta de gestión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar un sistema de bandas salariales equitativo, competitivo y bien comunicado para la organización.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Transfer pricing y precios de transferencia',
                'description'       => 'Los precios de transferencia entre entidades de un grupo empresarial: el principio arm\'s length, los métodos de valoración y los riesgos fiscales de hacerlo mal.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en fiscalidad internacional y precios de transferencia. Necesito que me ayudes a entender el marco regulatorio y a diseñar la política de precios de transferencia de mi grupo empresarial.

Mi contexto:
- Descripción del grupo: [número de entidades, países donde opera, estructura de holding si la hay]
- Tipos de transacciones entre entidades: [ventas de productos, prestación de servicios, royalties, préstamos intragrupo, compraventa de activos, etc.]
- Volumen aproximado de transacciones intragrupo: [importante para evaluar el riesgo y las obligaciones de documentación]
- País sede y países de las filiales: [lista los países principales]
- ¿Tienes ya política de precios de transferencia documentada? [sí/no/desactualizada]

Con ese contexto, dame:

1. EL PRINCIPIO ARM'S LENGTH: QUÉ ES Y POR QUÉ IMPORTA
Explícame el principio de plena competencia (arm's length) tal como lo define la OCDE en las Directrices de Precios de Transferencia: qué significa que dos entidades vinculadas deben operar como si fueran independientes, qué consecuencias tiene no cumplirlo y cómo lo interpretan las administraciones tributarias de los principales países donde opera mi grupo.

2. LOS CINCO MÉTODOS DE VALORACIÓN DE LA OCDE
Explícame cada uno de los cinco métodos aceptados por la OCDE para determinar el precio de transferencia correcto:
- Precio comparable no controlado (CUP)
- Precio de reventa (RPM)
- Coste incrementado (Cost Plus)
- Margen neto de la operación (TNMM)
- Distribución del resultado (Profit Split)

Para cada método indica: cuándo aplicarlo, qué datos necesito para usarlo, sus ventajas y limitaciones, y dame un ejemplo numérico sencillo aplicado a mi tipo de transacción principal.

3. DOCUMENTACIÓN OBLIGATORIA
¿Qué documentación debo tener preparada para defender mis precios de transferencia ante una inspección? Explícame la estructura del Masterfile y del Local File según las directrices de la OCDE y del plan de acción BEPS, qué umbrales de volumen de transacciones activan la obligación de documentación en los principales países europeos y latinoamericanos, y cuál es el Country-by-Country Report (CbCR) y cuándo estoy obligado a presentarlo.

4. ACUERDOS PREVIOS DE VALORACIÓN (APA)
¿Qué es un Acuerdo Previo de Valoración (APA) y cuándo me conviene negociar uno con la administración tributaria? Explícame la diferencia entre APA unilateral, bilateral y multilateral, el proceso y el plazo típico para obtenerlo y en qué situaciones es rentable la inversión de tiempo y recursos que requiere.

5. RIESGOS FISCALES PRINCIPALES
¿Cuáles son los principales riesgos fiscales de una política de precios de transferencia mal diseñada o mal documentada? Incluye: ajuste primario y secundario, doble imposición, sanciones por falta de documentación, el riesgo de la cláusula anti-abuso y cómo el plan BEPS de la OCDE ha endurecido la posición de las administraciones tributarias. Dame ejemplos de los errores más habituales y sus consecuencias.

6. POLÍTICA DE PRECIOS DE TRANSFERENCIA: CÓMO DISEÑARLA
Dame los pasos para diseñar la política de precios de transferencia de mi grupo: el inventario de transacciones intragrupo, la selección del método para cada tipo de transacción, la fijación del rango de plena competencia, la revisión anual y la actualización de la documentación. ¿Con qué frecuencia debo revisar el estudio de comparables?

7. IMPLICACIONES PRÁCTICAS PARA EL CFO
Más allá de la teoría, ¿cuáles son las tres o cuatro decisiones prácticas que debe tomar el CFO de un grupo en crecimiento sobre precios de transferencia? Incluye cuándo contratar a un especialista externo, cómo preparar al equipo interno para una inspección y cómo integrar el transfer pricing en la planificación fiscal global del grupo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender y diseñar la política de precios de transferencia de un grupo empresarial para cumplir con la normativa y minimizar el riesgo fiscal.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Precios abusivos y competencia',
                'description'       => 'Cuándo el precio de un producto o servicio puede ser considerado abusivo o anticompetitivo: la normativa de competencia aplicada a la fijación de precios.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado experto en derecho de la competencia con especialización en prácticas de precios anticompetitivas. Necesito que me expliques el marco legal que rodea la fijación de precios desde la perspectiva del derecho de la competencia: qué está prohibido, qué es arriesgado y cómo diseñar la política de precios de una empresa cumpliendo la normativa.

Mi contexto:
- Tipo de empresa: [describe el sector y la posición de mercado aproximada]
- Mercado donde opera: [Unión Europea / España / LATAM / EE.UU. / varios]
- Situación que quiero analizar: [cuota de mercado elevada y posible posición dominante / acuerdos de precios con distribuidores / coordinación con competidores / precios muy bajos por debajo de costes / revisión general de cumplimiento]

Con ese contexto, dame:

1. EL ARTÍCULO 102 TFUE Y LA POSICIÓN DE DOMINANCIA
Explícame qué es el abuso de posición dominante en materia de precios bajo el artículo 102 del TFUE (y su equivalente en el artículo 2 de la LDC española): qué umbral de cuota de mercado crea una presunción de posición dominante, qué prácticas de precio están expresamente prohibidas (precios excesivos, precios predatorios, discriminación de precios, precio de compresión del margen) y qué criterios usan la Comisión Europea y la CNMC para evaluar cada una.

2. PRECIOS EXCESIVOS: EL TEST DE UNITED BRANDS
¿Cuándo un precio alto es ilegal por ser excesivo? Explícame el test de United Brands desarrollado por el TJUE para determinar si un precio es injustamente elevado: la comparación con el coste económico, la comparación con los precios en otros mercados y la evaluación del valor económico del producto. Dame ejemplos de casos reales en los que se ha declarado que un precio era excesivo y cuáles han prosperado o no ante los tribunales.

3. PRECIOS PREDATORIOS: CUÁNDO BAJAR EL PRECIO ES ILEGAL
¿Cuándo fijar un precio muy bajo puede ser una práctica anticompetitiva? Explícame el concepto de precio predatorio: los tests de Akzo y AKZO para determinar si un precio está por debajo del coste variable medio o del coste total medio, y cuándo se puede justificar que un precio bajo no es predatorio sino una respuesta competitiva legítima. ¿Qué documentación interna puede convertirse en prueba de intención predatoria?

4. FIJACIÓN DE PRECIOS ENTRE COMPETIDORES (CÁRTELES)
¿Qué intercambios de información sobre precios entre competidores son ilegales? Explícame la línea entre inteligencia competitiva legítima y coordinación de precios prohibida: el intercambio directo de precios futuros, los hub-and-spoke a través de distribuidores, el algoritmo pricing coordinado y los riesgos de las asociaciones sectoriales y los contacts en ferias. ¿Qué cláusulas o conductas de pricing en acuerdos de distribución pueden constituir restricción vertical?

5. PRECIOS DE REVENTA MÍNIMOS Y RESTRICCIONES VERTICALES
¿Puedo imponer a mis distribuidores el precio al que revenden mi producto? Explícame el régimen de los precios de reventa mínimos bajo el Reglamento de Exención por Categorías de Restricciones Verticales (330/2010 y su sucesor 2022/720): qué está prohibido, qué está permitido (precios máximos, precios recomendados), y cómo la CNMC ha sancionado casos de imposición de precios de reventa.

6. PROGRAMME DE COMPLIANCE DE COMPETENCIA EN PRECIOS
¿Cómo diseño un programa de cumplimiento en materia de competencia centrado en la política de precios? Dame los elementos esenciales: la política interna de aprobación de precios, el protocolo de contacto con competidores, la formación del equipo comercial y de marketing, y cómo documentar las decisiones de pricing para que sean defensibles ante una eventual investigación.

7. LOS CINCO RIESGOS PRÁCTICOS QUE MÁS IGNORAN LAS EMPRESAS
Lista los cinco comportamientos de pricing que las empresas realizan sin saber que pueden ser anticompetitivos: el pricing algorítmico que converge con el competidor, los descuentos de fidelidad exclusiva, la compresión de márgenes en mercados de telecomunicaciones o energía, el pricing diferenciado geográfico sin justificación objetiva y el uso de datos de mercado de una asociación sectorial para calibrar precios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Entender qué prácticas de fijación de precios pueden ser anticompetitivas y cómo diseñar una política de precios que cumpla la normativa de competencia.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Price increases sin churn',
                'description'       => 'Implementa subidas de precio en la cartera de clientes sin perder los contratos: el proceso, la comunicación y las concesiones que hacen que el cliente acepte pagar más.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success y estrategia de retención con amplia experiencia gestionando subidas de precio en carteras de clientes SaaS y de servicios recurrentes. Necesito tu ayuda para planificar e implementar una subida de precio minimizando el churn.

Mi contexto:
- Tipo de producto o servicio: [SaaS / servicio profesional recurrente / plataforma / etc.]
- Porcentaje de subida que necesito aplicar: [indica el % aproximado]
- Cartera de clientes: [número aproximado, distribución de tamaños, antigüedad media]
- Motivo de la subida: [inflación de costes / reposicionamiento / necesidad de margen / new features justifican precio mayor]
- Plazo para implementarla: [cuándo necesitas que entre en vigor]
- Mayor miedo: [churn masivo / conversaciones difíciles / dañar la relación / renegociaciones a la baja]

Con ese contexto, dame:

1. SEGMENTACIÓN DE LA CARTERA ANTES DE LA SUBIDA
¿Cómo debo segmentar a los clientes antes de comunicar la subida? Explícame cómo clasificarlos según su riesgo de churn (engagement, NPS, historial de pagos, relación con el champion, existencia de contratos en vigor) y según su valor estratégico (ARR, potencial de expansión, referencialidad). Dame una matriz de 2x2 y la estrategia diferenciada para cada cuadrante.

2. EL TIMING IDEAL PARA LA SUBIDA
¿Cuándo es el mejor momento para comunicar e implementar una subida de precio? Dame los criterios: la relación con el ciclo de renovación del contrato, el estado de salud del producto (no justo después de un incidente), el momento del año (evitar fin de año / Q4 de los clientes enterprise) y el estado de la relación con el cliente (no durante una escalación). ¿Cuánto tiempo de antelación debo dar?

3. LA COMUNICACIÓN DE LA SUBIDA: SCRIPT Y CANAL
¿Cómo comunico la subida por escrito y en la conversación? Dame:
- El email de notificación de la subida: el asunto, el cuerpo, el tono, qué justificación dar y qué no decir nunca
- El script de la llamada de seguimiento con los clientes de mayor riesgo: las frases de apertura, cómo anticipar la objeción antes de que la planten, cómo anclar en el valor entregado y cómo cerrar el acuerdo
- Lo que nunca debes decir: las frases que convierten una subida asumible en un motivo de cancelación

4. CONCESIONES QUE HACEN ACEPTABLE LA SUBIDA
Si el cliente no acepta la subida directamente, ¿qué concesiones puedo ofrecer sin comprometer los ingresos a largo plazo? Dame al menos ocho opciones: el lock-in a precio actual a cambio de firma de contrato anual anticipado, el grandfathering temporal, las features adicionales sin coste, la formación adicional, el acceso anticipado a nueva funcionalidad, y otras concesiones de alto valor percibido y bajo coste real.

5. LOS CLIENTES QUE AMENAZAN CON IRSE
¿Cómo manejo al cliente que dice que va a cancelar si sube el precio? Dame el playbook completo: las preguntas que debo hacer para distinguir al que realmente se va del que está negociando, cuándo ceder y cuándo no, qué counter-offer hacer si decido retenerlo y cómo documentar la excepción para que no se convierta en precedente.

6. MÉTRICAS DE ÉXITO DE LA SUBIDA
¿Cómo mido si la subida se ha implementado bien? Dame las métricas que debo monitorizar: la tasa de churn en los 90 días post-comunicación comparada con la tasa base, el NRR antes y después, el número de contratos renegociados a la baja y a qué % promedio y la satisfacción medida por NPS en el trimestre posterior.

7. POST-MORTEM Y APRENDIZAJES
Después de ejecutar la subida, ¿qué debo analizar para hacerlo mejor la próxima vez? Dame el template del post-mortem de la subida de precio: qué funcionó, qué no, qué segmentos respondieron mejor, qué mensajes fueron más efectivos y cómo preparar a mi equipo de CS para que la siguiente subida genere menos fricción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Planificar e implementar una subida de precio en la cartera de clientes minimizando el churn y las renegociaciones.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Value-based pricing para freelancers',
                'description'       => 'Cobra en función del valor que entregas, no de las horas que inviertes: el proceso de descubrimiento del valor, la propuesta y la conversación de precio con el cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en freelancers y profesionales independientes. Necesito que me ayudes a implementar el value-based pricing en mi práctica freelance: dejar de cotizar por horas y empezar a cobrar en función del valor que creo para el cliente.

Mi contexto:
- Tipo de servicio freelance: [copywriting, desarrollo, diseño, consultoría, marketing, etc.]
- Mercado objetivo: [el tipo de clientes con los que trabajas o quieres trabajar]
- Modelo actual: [tarifa por hora / tarifa diaria / precio por proyecto estimado en horas]
- Precio actual aproximado: [rango de proyectos típicos]
- Mayor dificultad con el pricing actual: [clientes que comparan por precio hora / dificultad para estimar el tiempo / sensación de estar cobrando poco / etc.]

Dame:

1. POR QUÉ EL MODELO POR HORAS LIMITA TU NEGOCIO
Explícame los tres problemas estructurales del modelo por horas para un freelance: el techo de ingresos que impone, el incentivo perverso que crea (eres más rentable siendo lento), y cómo posiciona tus servicios como un commodity en lugar de como un resultado. Incluye el efecto psicológico que tiene en el cliente (microgestión, petición de informes de horas, comparación con otras tarifas).

2. QUÉ ES EL VALOR Y CÓMO LO DESCUBRO
Antes de poder cobrar por valor, necesito entender qué valor crea mi trabajo. Dame el proceso de discovery del valor: las preguntas exactas que debo hacer al cliente en la primera conversación para entender el impacto económico de mi trabajo en su negocio. Incluye preguntas sobre el coste del problema que resuelvo, el beneficio esperado del resultado que entrego, el riesgo de no actuar y el valor del tiempo que le ahorro.

3. CÓMO CUANTIFICAR EL VALOR EN EUROS O DÓLARES
Una vez entiendo el contexto del cliente, ¿cómo convierto eso en un número? Dame el proceso para estimar el valor económico de mi entregable: los multiplicadores que suelen aplicarse (cobrar el 10-15% del valor generado es una referencia habitual), cómo ajustarlo según el riesgo percibido por el cliente, y cómo anclar el precio en ese valor en la conversación sin que el cliente sienta que le estás cobrando en función de sus ingresos.

4. LA PROPUESTA DE VALOR-BASED PRICING
¿Cómo cambio la estructura de mi propuesta para reflejar el valor en lugar de las horas? Dame la estructura de una propuesta orientada al resultado: cómo describir el problema del cliente, el resultado que voy a entregar (no el proceso ni las horas), el impacto esperado en su negocio y el precio como inversión frente al retorno esperado. Incluye un ejemplo de propuesta antes y después del cambio.

5. LA CONVERSACIÓN DE PRECIO
¿Cómo presento el precio en la conversación con el cliente sin generar el shock de ser más caro que lo que esperaban? Dame el script de la conversación de precio: cómo introducir el número, cómo manejarlo si hay silencio, cómo responder si el cliente dice que es demasiado y cómo cerrar sin regatear. Incluye la frase exacta para presentar el precio de forma que el cliente piense en el valor antes de pensar en el coste.

6. CÓMO MANEJAR AL CLIENTE QUE SOLO PIENSA EN EL PRECIO/HORA
¿Qué hago cuando el cliente insiste en comparar mi precio con la tarifa por hora de otra persona o de una agencia? Dame las técnicas para mover la conversación del precio al resultado: cómo reformular la comparación, cómo hacer que el cliente piense en lo que le cuesta el problema que no está resolviendo y cómo posicionarte como la opción más cara pero también la de menor riesgo.

7. CASOS PRÁCTICOS POR TIPO DE FREELANCE
Dame un ejemplo concreto de cómo aplicar el value-based pricing para tres de estos perfiles (los que sean más relevantes para mi caso): copywriter de conversión, desarrollador web freelance, consultor de marketing, diseñador UX, consultor de RRHH o coach ejecutivo. Para cada caso, muéstrame la pregunta de discovery, el cálculo del valor aproximado y el rango de precio resultante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Implementar el value-based pricing para dejar de cotizar por horas y cobrar en función del valor generado.',
                'vote_score'        => 47,
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
