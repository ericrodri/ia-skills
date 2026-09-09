<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills270Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Pricing communication: cómo comunicar el precio sin asustarse',
                'description'       => 'Desarrolla la estrategia y el lenguaje para comunicar el precio de productos y servicios de marketing con confianza, reduciendo la fricción en la conversación de precio y aumentando la tasa de conversión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en comunicación de precio y en psicología del consumidor con experiencia en estrategias de marketing B2B y B2C. La comunicación del precio es uno de los momentos de mayor fricción en el proceso de compra, y la manera en que se comunica puede ser tan determinante como el precio en sí mismo para la decisión del cliente. Necesito mejorar cómo mi organización o mis productos comunican el precio.

**Preguntas para personalizar la estrategia:**
1. ¿Qué tipo de producto o servicio estás comunicando: producto de consumo, servicio profesional, software SaaS, o servicio de marketing?
2. ¿Cuál es el principal problema con la comunicación de precio actual: los clientes sienten que es caro, hay confusión sobre qué incluye, hay vergüenza o incomodidad al mencionar el precio, o el precio se percibe como bajo y esto genera desconfianza?
3. ¿El precio se comunica de forma proactiva o reactiva, es decir, el cliente lo pregunta o tú lo presentas antes?
4. ¿Hay diferentes niveles o paquetes de precio que deben comunicarse o es un precio único?

**EL MARCO MENTAL CORRECTO PARA COMUNICAR EL PRECIO:**

La mayoría de las personas en marketing tienen una relación incómoda con la comunicación de precio porque inconscientemente piensan en el precio como un coste para el cliente, no como el reflejo del valor que entregan. Esa incomodidad se transmite y crea más fricción que el precio en sí mismo. Ayúdame a construir el marco mental correcto:

El precio como señal de valor: en muchos mercados, el precio bajo genera desconfianza antes de generar atractivo. Un precio más alto, bien comunicado, puede ser un argumento de venta. ¿Cómo pensar en el precio como parte de la propuesta de valor, no como un obstáculo a la compra?

La ancla de valor antes del precio: el cliente no puede evaluar si un precio es justo si no tiene claro el valor que recibe. La comunicación del precio debe empezar siempre por el valor, no por el número. ¿Cómo establecer el ancla de valor de manera efectiva antes de mencionar el precio?

La comparación correcta: el precio se evalúa siempre en relación a algo. Si no controlas esa comparación, el cliente la hará por su cuenta, a menudo comparando con opciones que no son equivalentes. ¿Cómo enmarcar el precio frente a la comparación más favorable para tu propuesta de valor?

**ESTRATEGIAS DE COMUNICACIÓN DE PRECIO:**

El desglose del valor: en lugar de comunicar el precio total, cómo desglosar el valor de cada componente de la oferta para que el precio parezca razonable en relación a lo que incluye. Esta técnica es especialmente efectiva en servicios complejos donde el cliente no tiene visibilidad del trabajo detrás del precio.

El precio en unidades comparables: reducir el precio a una unidad de tiempo o de uso que lo haga comprensible y menos intimidante. "X euros al día" en lugar de "X euros al año". Cómo usar esta técnica de manera honesta, sin que parezca un truco que el cliente va a detectar.

La prueba social de precio: cómo usar testimonios y casos de éxito de clientes similares para normalizar el precio y reducir la percepción de riesgo. Los clientes tienen menos resistencia al precio cuando ven que otros como ellos lo han pagado y han obtenido valor.

La estructura de paquetes y el efecto ancla: cómo diseñar la presentación de opciones de precio para que la opción que más te interesa vender sea la que el cliente percibe como la más razonable. El efecto del precio ancla (presentar una opción más cara primero) y cómo usarlo éticamente.

**GESTIONAR LA CONVERSACIÓN DE PRECIO EN VIVO:**

Cómo responder a "es caro" sin entrar en pánico ni en un descuento inmediato. Cómo distinguir entre la objeción de precio real (el cliente genuinamente no puede pagarlo) y la objeción de precio táctica (el cliente está negociando). Cómo mantener el precio cuando tienes razones para hacerlo y cómo ofrecer alternativas cuando el precio es genuinamente un obstáculo.

**COMUNICACIÓN DE SUBIDAS DE PRECIO:**

Cómo comunicar un aumento de precio a clientes existentes de manera que no genere churn. La narrativa correcta, el momento adecuado, el plazo de antelación razonable y cómo gestionar las negociaciones que inevitablemente surgirán.

Ayúdame a construir una estrategia de comunicación de precio que refleje el valor real de lo que ofrezco y que convierte el precio en un argumento de venta, no en un obstáculo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de comunicación de precio para reducir fricción y aumentar conversión',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Usage-based pricing: la arquitectura técnica detrás del pago por uso',
                'description'       => 'Diseña e implementa la arquitectura técnica para un modelo de pricing basado en uso: medición, metering, facturación y las integraciones necesarias para que el modelo funcione con precisión y escalabilidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software con experiencia específica en la implementación de sistemas de usage-based pricing (UBP) en productos SaaS y plataformas de infraestructura. El modelo de pago por uso es uno de los modelos de monetización con mayor alineación entre el valor que recibe el cliente y lo que paga, pero su implementación técnica tiene una complejidad considerable. Necesito diseñar o mejorar la arquitectura técnica detrás de mi modelo de UBP.

**Contexto del sistema:**
1. ¿Cuál es la unidad de uso que vas a medir: llamadas a API, datos procesados, usuarios activos, transacciones, tiempo de compute, tokens consumidos u otra métrica?
2. ¿Cuál es el volumen estimado de eventos de uso que el sistema debe procesar: miles por día, millones por día, o más?
3. ¿Qué sistema de facturación tienes actualmente o estás considerando: Stripe Billing, Chargebee, Lago, un sistema propio?
4. ¿Hay requisitos específicos de latencia en la atribución del uso: debe ser en tiempo real, near-real-time, o la reconciliación diaria o mensual es suficiente?

**LA ARQUITECTURA DE UN SISTEMA DE METERING ROBUSTO:**

El metering (medición del uso) es el componente más crítico de un sistema de UBP porque los errores en la medición tienen implicaciones directas en la facturación. Ayúdame a diseñar un sistema de metering que sea preciso, tolerante a fallos y escalable:

Instrumentación en el punto de uso: cómo capturar los eventos de uso en el momento correcto del ciclo de vida de la petición. Qué debe registrarse en cada evento (timestamp, customer_id, resource_type, quantity, metadata relevante) y cómo garantizar que los eventos se capturan incluso cuando hay errores en el procesamiento downstream.

El pipeline de eventos: cómo diseñar el pipeline desde la generación del evento hasta su registro en el sistema de metering. El uso de colas de mensajes (Kafka, SQS, Pub/Sub) para garantizar la entrega de eventos sin pérdida, incluso cuando hay caídas temporales en los servicios downstream. Patrones de idempotencia para evitar el doble conteo cuando los eventos se reintentan.

Almacenamiento de eventos de uso: qué tipo de almacenamiento usar para los eventos de uso en bruto (append-only, inmutable) versus el almacenamiento de los agregados de uso que se usan para la facturación. Cómo gestionar el volumen de datos a lo largo del tiempo sin que los costes de almacenamiento se disparen.

**AGREGACIÓN Y FACTURACIÓN:**

Cómo diseñar el sistema de agregación que convierte los eventos de uso en bruto en los agregados que se usan para calcular la factura. Las diferentes estrategias de agregación según el modelo de pricing: tarifas lineales, tarifas por bloques (tiered), tarifas de volumen, tarifas matriciales (matrix pricing).

Integración con el sistema de facturación: cómo sincronizar los agregados de uso con la plataforma de facturación. Los patrones de integración con Stripe Billing Meters, con Lago (open source) o con sistemas propios. Cómo manejar los casos edge: clientes que se quedan sin crédito a mitad de un ciclo, upgrades y downgrades de plan, periodos de prueba.

**VISIBILIDAD DEL USO PARA EL CLIENTE:**

El modelo de UBP solo funciona si el cliente entiende en todo momento qué está consumiendo y cuánto le va a costar. Cómo implementar un dashboard de uso en tiempo real o near-real-time. Alertas de consumo que el cliente puede configurar (al alcanzar el 80% del presupuesto, por ejemplo). La estimación de la factura al final del período basada en el consumo actual.

**TESTING Y VALIDACIÓN DEL SISTEMA:**

Cómo testear un sistema de metering y facturación: qué tipos de tests son necesarios (unit tests del cálculo de tarifas, integration tests del pipeline de eventos, tests de reconciliación entre eventos capturados y factura generada). Cómo detectar anomalías en el metering que indiquen posibles errores antes de que lleguen a la factura del cliente.

Ayúdame a diseñar una arquitectura técnica de usage-based pricing que sea precisa, escalable y que ofrezca la visibilidad que el cliente necesita para confiar en el modelo de facturación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de arquitectura técnica para sistemas de usage-based pricing en SaaS',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Pricing del diseñador: cómo cobrar por valor y no por horas',
                'description'       => 'Desarrolla un modelo de pricing basado en el valor que entregas como diseñador, superando la mentalidad de la tarifa por hora para cobrar lo que tu trabajo realmente vale para el cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador freelance senior o como un consultor de negocio especializado en la economía del diseño y en los modelos de pricing para profesionales creativos. La transición de cobrar por horas a cobrar por valor es uno de los cambios más importantes y más rentables que puede hacer un diseñador en su carrera, y también uno de los más difíciles porque requiere un cambio profundo en cómo se percibe el propio trabajo. Necesito ayuda para hacer esa transición.

**Contexto de la situación actual:**
1. ¿Cuál es tu especialidad de diseño: UX/UI, diseño gráfico, diseño de producto, branding, diseño de servicios, o motion design?
2. ¿Cuál es tu modelo de pricing actual: tarifa por hora, tarifa diaria, precio fijo por proyecto, o una combinación?
3. ¿Cuál es el principal problema con el modelo actual: los clientes comparan tu tarifa con la de otros y siempre negocian a la baja, los proyectos se alargan y no puedes cobrar el tiempo adicional, o sientes que tu precio no refleja el impacto real de tu trabajo?
4. ¿Trabajas principalmente para empresas o para particulares?

**POR QUÉ EL PRICING POR HORAS PERJUDICA A LOS DISEÑADORES:**

El modelo de tarifa por hora tiene un problema estructural que perjudica específicamente a los buenos diseñadores: cuanta más experiencia tienes, más rápido resuelves los problemas, y si cobras por hora, tu eficiencia trabaja en tu contra. Ayúdame a entender las alternativas:

El pricing por valor parte de una pregunta diferente: no "¿cuánto tiempo me lleva esto?" sino "¿cuánto vale para el cliente el resultado que voy a entregar?". Un rediseño de la página de conversión principal de un e-commerce que aumenta la tasa de conversión un 2% puede valer decenas de miles de euros para el cliente. ¿Cómo identificar ese valor antes de hacer el presupuesto?

El riesgo y la responsabilidad en el pricing por valor: cuando cobras por horas, el cliente asume el riesgo (si tarda más, paga más). Cuando cobras por valor o por proyecto a precio fijo, asumes parte del riesgo. Cómo gestionar ese riesgo de manera que sea manejable y no te exponga a pérdidas en proyectos que se complican.

**MODELOS DE PRICING ALTERNATIVOS A LA TARIFA POR HORA:**

Precio fijo por entregable: cómo definir con precisión el alcance del entregable para que el precio fijo sea sostenible, y cómo gestionar los cambios de alcance sin comprometer la relación con el cliente.

Precio por resultado: en proyectos donde el impacto es medible (aumento de conversión, reducción de fricción, mejora de la tasa de completado), cómo estructurar un modelo de pricing que combine una tarifa base con un componente variable vinculado al resultado.

Retainer mensual: cómo estructurar un acuerdo de retainer que beneficie tanto al diseñador (ingresos predecibles, relación de largo plazo) como al cliente (acceso a un recurso de diseño de confianza sin el proceso de contratación). Qué debe incluir el retainer y cómo manejar los meses en que la demanda es mayor o menor de lo habitual.

Paquetes de diseño: cómo estructurar ofertas cerradas con un alcance y un precio definidos que sean fáciles de comprar para el cliente y sostenibles para el diseñador. Cómo diseñar los paquetes para que la opción que más te interesa sea también la que el cliente tiende a elegir.

**COMUNICAR EL PRECIO BASADO EN VALOR:**

Cómo tener la conversación de precio con el cliente cuando no cobras por horas sino por el valor del resultado. Cómo responder a "¿cuánto cobras por hora?" cuando tu modelo ya no funciona así. Cómo presentar el precio de un proyecto en términos de inversión y retorno, no de tiempo y tarifa.

**LA TRANSICIÓN GRADUAL:**

Cómo hacer la transición del pricing por horas al pricing por valor sin perder los clientes actuales. Qué tipo de proyectos o clientes elegir para empezar a probar el nuevo modelo. Cómo gestionar el período en que tienes clientes con diferentes modelos de pricing simultáneamente.

Ayúdame a construir un modelo de pricing que refleje el valor real de mi trabajo como diseñador y que me permita crecer sin que mi capacidad de generar ingresos esté limitada por el número de horas disponibles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Transición del modelo de tarifa por hora al pricing basado en valor para diseñadores',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Price negotiation: defender el precio sin entrar en guerra de descuentos',
                'description'       => 'Desarrolla las técnicas y el marco mental para defender el precio de tu propuesta durante la negociación comercial, protegiendo el margen sin perder el trato y sin entrar en una guerra de descuentos que devalúa tu oferta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas o un coach de negociación comercial con experiencia en ventas B2B de soluciones de valor medio y alto. La negociación de precio es el momento de mayor presión en el proceso comercial, y la mayoría de los vendedores ceden demasiado rápido y demasiado pronto porque no tienen un marco claro para gestionar esa presión. Necesito desarrollar esa capacidad.

**Contexto de la situación de negociación:**
1. ¿Qué tipo de solución o servicio estás vendiendo y cuál es el rango de precio habitual de tus propuestas?
2. ¿Cuál es el patrón más frecuente de negociación de precio que enfrentas: el cliente pide un descuento directo, compara con competidores más baratos, dice que no tiene presupuesto, o usa el poder de compra de un volumen mayor para negociar a la baja?
3. ¿Hay presión interna para cerrar (fin de trimestre, objetivos de pipeline) que debilita tu posición negociadora?
4. ¿Tienes autoridad para dar descuentos o necesitas escalar la aprobación?

**EL MARCO MENTAL DE LA NEGOCIACIÓN DE PRECIO:**

Antes de entrar en las técnicas, el marco mental es lo que determina si vas a ceder o a defender. Ayúdame a construir el marco correcto:

La posición de BATNA: cuál es tu mejor alternativa si no cierras este trato. Si no tienes una buena alternativa, tu posición negociadora es débil aunque tu propuesta sea la mejor del mercado. Cómo mejorar tu posición negociadora construyendo un pipeline suficiente para que ningún trato sea imprescindible.

La confianza en el precio: si no crees genuinamente que tu precio es justo para el valor que entregas, el cliente lo va a sentir y va a negociar más agresivamente. Cómo construir la convicción interna sobre el precio de tu propuesta basándote en el valor que has entregado a clientes similares.

El costo del descuento: un descuento del 10% en el precio rara vez es un 10% menos de ingresos; en términos de margen puede ser un 30% o un 50% menos de beneficio. Cómo calcular el costo real de cada descuento para entender cuándo tiene sentido darlo y cuándo no.

**LAS TÉCNICAS DE DEFENSA DE PRECIO:**

La pregunta antes de la respuesta: cuando el cliente pide un descuento, la primera respuesta no es un no ni un sí. Es una pregunta: "¿qué te ha hecho pensar que el precio no refleja el valor que recibes?". Esta pregunta revela si la objeción es de precio real, de comparación con competidores, o de proceso interno de aprobación, y permite responder a la causa real en lugar de al síntoma.

El intercambio en lugar del descuento: cuando el descuento es necesario, nunca darlo sin recibir algo a cambio. Qué se puede pedir en intercambio: pago anticipado, extensión del contrato, referencia firmada, testimonial, caso de estudio, acceso a más usuarios para el piloto. Este intercambio mantiene el precio psicológicamente justo y evita que el cliente piense que el precio inicial tenía margen de maniobra ilimitado.

La reducción de alcance: en lugar de bajar el precio, reducir lo que incluye la propuesta hasta que el precio sea aceptable para el cliente. Esta técnica es más honesta que el descuento porque alinea precio con valor, y a menudo el cliente decide que prefiere el alcance completo al precio original.

La anclaje hacia arriba: cómo usar una primera propuesta más amplia o un precio de lista más alto como ancla desde la que negociar, de manera que el precio final percibido sea razonable aunque sea más alto del que el cliente esperaba inicialmente.

**GESTIONAR LA PRESIÓN DEL CIERRE:**

Cómo manejar la presión de fin de trimestre que te tienta a dar descuentos que no deberías dar. Cómo gestionar la aprobación de descuentos internamente sin que el cliente perciba que tienes margen y empiece a negociar más. Cómo decir que no definitivamente a un descuento sin perder el trato ni la relación.

Ayúdame a desarrollar un marco de negociación de precio que me permita defender el valor de mi propuesta con convicción y con técnica, cerrando tratos justos para ambas partes sin devaluar lo que vendo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Técnicas de negociación para defender el precio y proteger el margen en ventas B2B',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Monetization strategy: elegir el modelo de pricing correcto para tu producto',
                'description'       => 'Evalúa y define la estrategia de monetización y el modelo de pricing más adecuado para tu producto digital, considerando el comportamiento del cliente, la competencia y los objetivos de crecimiento del negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en estrategia de monetización y pricing para productos digitales con experiencia en SaaS, marketplaces, aplicaciones de consumo y plataformas B2B. La elección del modelo de pricing es una de las decisiones de producto más importantes y más irreversibles que puede tomar un equipo de producto: afecta a la percepción del valor, al comportamiento del usuario y a la economía del negocio. Necesito analizar y definir la estrategia de monetización correcta para mi producto.

**Contexto del producto y el negocio:**
1. ¿Qué tipo de producto es y quiénes son los clientes objetivo: B2B, B2C o B2B2C?
2. ¿En qué fase está el producto: pre-lanzamiento (definiendo el modelo desde cero), con un modelo existente que necesita evolucionar, o con un problema específico (churn alto, expansión baja, dificultad para escalar el precio)?
3. ¿Cuáles son los principales competidores y cómo monetizan?
4. ¿Cuál es el modelo de crecimiento principal: product-led growth (PLG), sales-led growth (SLG) o una combinación?

**LOS MODELOS DE PRICING Y CUÁNDO APLICAR CADA UNO:**

Ayúdame a entender los principales modelos de pricing para productos digitales, con sus ventajas, limitaciones y los contextos donde mejor funcionan:

Precio por usuario (per seat): el modelo más común en SaaS B2B. Funciona bien cuando el valor escala con el número de usuarios y cuando el comprador puede controlar cuántas licencias compra. Las limitaciones: incentiva al cliente a minimizar el número de usuarios declarados, limita la expansión y no siempre refleja el valor real que obtiene la empresa.

Usage-based pricing (pago por uso): alinea precio con valor de manera directa y reduce la barrera de entrada. Las limitaciones: hace la predicción de ingresos más difícil, puede generar sorpresas en la factura del cliente y requiere una arquitectura técnica más compleja.

Precio por resultado o por outcome: el modelo más alineado con el valor pero el más difícil de implementar. Cuándo tiene sentido intentarlo, cómo diseñar el contrato de manera que sea justo para ambas partes y cómo gestionar las disputas sobre la atribución del resultado.

Freemium: cómo diseñar el tier gratuito para que genere conversión al tier de pago, no solo una base de usuarios que nunca van a pagar. Las tasas de conversión de freemium que son realistas y cómo optimizarlas. Cuándo el freemium tiene sentido y cuándo es un error estratégico.

Marketplace y revenue share: cuando el modelo de negocio es una plataforma que conecta oferta y demanda, cómo diseñar el modelo de comisión de manera que sea percibido como justo por ambos lados y que no genere incentivos para el desintermediado.

**EL DISEÑO DE LOS TIERS DE PRECIO:**

Cómo diseñar los planes de precio de manera que la arquitectura de opciones dirija al cliente hacia el plan que más te interesa vender. El número correcto de opciones (generalmente tres), cómo nombrar los planes, qué features incluir en cada tier y cuál es la "feature gate" correcta que convierte usuarios del plan gratuito o básico a los planes de pago.

La psicología del precio en los tiers: cómo usar el precio ancla, el efecto señuelo y la arquitectura de opciones para que la comparación entre tiers favorezca la elección del plan objetivo.

**VALIDACIÓN Y EXPERIMENTOS DE PRECIO:**

Cómo validar el modelo de pricing antes de un lanzamiento completo. Qué experimentos de precio son éticamente correctos y cuáles no. Cómo interpretar las señales de precio durante los primeros meses de operación: qué te dice la distribución de planes elegidos por los clientes sobre si los tiers están bien diseñados.

**CAMBIOS DE MODELO DE PRICING:**

Cuando el modelo actual no funciona, cómo hacer la transición a un nuevo modelo sin destruir la confianza de los clientes existentes. La comunicación del cambio, el período de transición y el manejo de los clientes que se ven perjudicados por el nuevo modelo.

Ayúdame a tomar la decisión de monetización más estratégica para mi producto, con un análisis claro de las opciones y un plan para validar y ejecutar el modelo elegido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Definición y evaluación de estrategias de monetización para productos digitales',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Compensation benchmarking: cómo fijar salarios competitivos',
                'description'       => 'Diseña un proceso robusto de benchmarking salarial que permita fijar rangos de compensación competitivos, equitativos e internamente consistentes para atraer, retener y motivar al talento.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de compensación y beneficios o un CHRO con experiencia en diseño de estructuras salariales para empresas de diferentes tamaños y sectores. La compensación es uno de los factores más críticos para la atracción y retención del talento, y un sistema de fijación de salarios que no sea riguroso, equitativo y competitivo tiene consecuencias directas en la capacidad de la organización para conseguir y mantener a las personas que necesita. Necesito diseñar o mejorar el proceso de benchmarking salarial.

**Contexto de la organización:**
1. ¿De qué tamaño es la organización y en qué sector opera?
2. ¿Cuál es la situación actual: estás construyendo la estructura salarial desde cero, tienes una estructura existente que quieres revisar, o hay un problema específico (dificultad para contratar, rotación alta por razones salariales, quejas internas sobre equidad)?
3. ¿Cuál es la filosofía de compensación que quieres aplicar: pagar en el percentil 50 del mercado, en el 75, o diferenciado por familia de puestos o nivel de criticidad?
4. ¿Cuáles son las familias de puestos más críticas para el negocio y las que tienen mayor dificultad para atraer talento?

**LAS FUENTES DE DATOS DE MERCADO PARA EL BENCHMARKING:**

El benchmarking salarial es tan bueno como sus fuentes de datos. Ayúdame a identificar y evaluar las mejores fuentes para mi contexto:

Encuestas salariales de consultoras especializadas (Mercer, Willis Towers Watson, Korn Ferry, Hay Group): cómo evaluar qué encuesta es más relevante para tu sector y tu geografía, qué tipo de datos proporciona cada una y cuál es su coste. Cómo leer los datos de las encuestas: la diferencia entre los datos de total cash, base salary y total target compensation, y cuándo usar cada uno.

Fuentes gratuitas o de bajo coste: plataformas como Glassdoor, LinkedIn Salary, Levels.fyi (para tecnología) o los datos del INE y del Ministerio de Trabajo en España. Cuáles tienen mayor fiabilidad y cómo triangular datos de varias fuentes para compensar los sesgos de cada una.

Datos de mercado propios: cómo usar las propuestas rechazadas, los datos de las entrevistas de salida y la información sobre las contraofertas aceptadas o rechazadas por los candidatos como fuentes de inteligencia de mercado en tiempo real.

**LA ARQUITECTURA DE BANDAS SALARIALES:**

Cómo diseñar una estructura de bandas salariales que sea internamente equitativa y externamente competitiva. El número adecuado de bandas según el tamaño de la organización. La amplitud de cada banda (la diferencia entre el mínimo y el máximo) y cómo interpretarla en términos de progresión dentro del rol. La superposición entre bandas adyacentes y qué indica sobre las posibilidades de crecimiento.

Cómo gestionar la posición de cada persona dentro de su banda: el compa-ratio (el salario actual como porcentaje del punto medio de la banda) y cómo usarlo para tomar decisiones de incremento salarial que sean equitativas y orientadas al rendimiento.

**EQUIDAD INTERNA Y ANÁLISIS DE BRECHAS:**

Cómo hacer un análisis de equidad interna que identifique situaciones en que personas en roles similares cobran de manera significativamente diferente sin una justificación objetiva (diferencia de rendimiento, de experiencia o de impacto). Cómo gestionar las brechas detectadas: qué correcciones hacer, en qué plazo y con qué presupuesto.

El análisis de equidad de género y diversidad: cómo hacer el análisis que detecta brechas salariales no justificadas por género, origen o edad. Cuál es el marco legal aplicable y cómo gestionar el proceso de corrección de manera que sea justo para todas las partes y legalmente sólido.

**COMUNICACIÓN DE LA POLÍTICA SALARIAL:**

La transparencia salarial es una tendencia creciente y en algunos contextos una obligación legal (la directiva europea de transparencia retributiva). Cómo definir el nivel adecuado de transparencia para tu organización: desde la publicación de las bandas salariales por nivel hasta la total transparencia individual. Cómo comunicar la política salarial de manera que los empleados entiendan cómo se toman las decisiones de compensación y qué pueden hacer para progresar.

Ayúdame a construir un proceso de benchmarking salarial que genere una estructura de compensación que sea competitiva en el mercado, equitativa internamente y que el equipo perciba como justa y transparente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño de procesos de benchmarking salarial y estructuras de compensación competitivas',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Pricing analysis: el análisis financiero detrás de las decisiones de precio',
                'description'       => 'Desarrolla el marco analítico financiero para evaluar decisiones de pricing: análisis de elasticidad, modelos de impacto en rentabilidad, análisis de contribución y simulación de escenarios de precio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero o un analista de pricing con experiencia en el análisis cuantitativo detrás de las decisiones de precio en empresas de producto y de servicios. El pricing es una de las palancas de rentabilidad con mayor impacto y menor exploración sistemática en la mayoría de las organizaciones: un aumento del 1% en el precio tiene un impacto en el beneficio operativo significativamente mayor que la misma mejora en volumen o en costes. Necesito desarrollar el rigor analítico para tomar mejores decisiones de precio.

**Contexto del análisis de pricing:**
1. ¿Para qué tipo de empresa o producto estás haciendo el análisis: empresa de producto físico, SaaS, servicios profesionales, o marketplace?
2. ¿Cuál es el objetivo del análisis: evaluar un cambio de precio específico, revisar la arquitectura de precios completa, entender la elasticidad de la demanda, o analizar el impacto de una oferta de descuento?
3. ¿Qué datos tienes disponibles: histórico de ventas por precio, datos de conversión, información de competidores, datos de encuestas de disposición a pagar?
4. ¿Cuál es el nivel de sofisticación analítica del equipo que usará los resultados: directivos no financieros, equipo de producto, o un comité ejecutivo con perfil financiero fuerte?

**EL ANÁLISIS DE ELASTICIDAD DE LA DEMANDA:**

La elasticidad precio-demanda mide en cuánto cambia la demanda ante un cambio en el precio. Ayúdame a entender cómo calcularla y usarla:

Estimación de la elasticidad con datos históricos: cómo usar regresiones sobre los datos históricos de precio y volumen para estimar la elasticidad. Las limitaciones de este enfoque (la elasticidad puede cambiar en el tiempo, hay variables de confusión que deben controlarse) y cómo interpretarla correctamente.

El test de precio como herramienta de medición: cómo diseñar un experimento de precio que permita estimar la elasticidad de manera directa. Los requisitos para un test de precio válido (grupos de control y tratamiento comparables, muestra suficiente, duración adecuada) y las implicaciones éticas y de negocio de hacer tests de precio.

La disposición a pagar (willingness to pay): cómo usar encuestas de Van Westendorp o conjoint analysis para estimar la disposición a pagar antes de tener datos históricos. Cómo interpretar los resultados y cuáles son sus limitaciones.

**EL MODELO DE IMPACTO FINANCIERO DE UN CAMBIO DE PRECIO:**

Cómo construir un modelo que proyecte el impacto en ingresos y rentabilidad de un cambio de precio, considerando el efecto precio (más ingresos por unidad) y el efecto volumen (posiblemente menos unidades si la demanda es elástica). La lógica del punto de indiferencia: a qué nivel de caída de volumen el aumento de precio deja de ser beneficioso.

Para servicios y SaaS, el análisis es más complejo porque el churn puede verse afectado por el precio. Cómo modelar el impacto de un cambio de precio en el churn, en el LTV de los clientes y en el ARR/MRR a lo largo del tiempo.

**ANÁLISIS DE CONTRIBUCIÓN Y SEGMENTACIÓN DE PRECIO:**

No todos los clientes tienen la misma disposición a pagar ni la misma sensibilidad al precio. Cómo analizar la contribución por segmento de cliente para identificar oportunidades de pricing diferenciado que maximicen el surplus de la empresa sin perder los segmentos de menor disposición a pagar.

La discriminación de precio de manera éticamente aceptable y legalmente correcta: descuentos por volumen, pricing geográfico, pricing por segmento de cliente, bundles y unbundles. Cuándo cada una de estas estrategias tiene sentido y qué riesgos implica.

**PRESENTACIÓN DE LAS RECOMENDACIONES DE PRECIO:**

Cómo estructurar el análisis de pricing en un documento ejecutivo que presente la recomendación con claridad, con la evidencia que la respalda y con la modelización de los escenarios alternos. Qué sensitivities mostrar para que el comité de decisión entienda cuán robusta es la recomendación ante diferentes hipótesis de elasticidad.

Ayúdame a construir el rigor analítico necesario para tomar decisiones de precio basadas en datos y en modelización financiera sólida, no en intuición o en imitación de la competencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Análisis financiero cuantitativo para decisiones de pricing y estrategia de precio',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Fee structures en servicios jurídicos: del billable hour a los modelos alternativos',
                'description'       => 'Diseña e implementa modelos alternativos de honorarios jurídicos que alineen mejor los incentivos con el cliente, diferencien el despacho en el mercado y construyan relaciones de mayor valor a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de estrategia o managing partner con experiencia en la evolución de los modelos de facturación de despachos jurídicos y en los modelos alternativos de honorarios (AFAs, Alternative Fee Arrangements) que están ganando terreno en el mercado legal. El modelo de la hora facturable ha dominado el sector jurídico durante décadas, pero sus limitaciones son bien conocidas tanto para los clientes como para los propios despachos. Necesito entender las alternativas y diseñar la transición hacia un modelo más adecuado para mi despacho.

**Contexto del despacho:**
1. ¿De qué tipo es el despacho: boutique especializada, firma mediana generalista, o despacho de nicho muy específico?
2. ¿Cuál es la práctica principal: corporativo/M&A, litigación, laboral, inmobiliario, propiedad intelectual, u otras?
3. ¿Cuál es el principal problema con el modelo actual de facturación por horas: el cliente presiona para reducir los honorarios, hay dificultad para ganar nuevos clientes que comparan con competidores, o hay insatisfacción interna con el modelo porque no refleja el valor aportado?
4. ¿Hay clientes corporativos que ya están pidiendo modelos alternativos de facturación?

**LAS LIMITACIONES DEL MODELO DE HORA FACTURABLE:**

El modelo de la hora facturable tiene incentivos perversos que son bien conocidos pero raramente articulados con claridad: penaliza la eficiencia (cuanto más rápido trabajas, menos facturas), incentiva la sobre-elaboración de los trabajos (más horas es más dinero) y crea una opacidad para el cliente que genera desconfianza. Ayúdame a articular estas limitaciones de manera que justifiquen internamente la exploración de alternativas.

Al mismo tiempo, el modelo de la hora facturable tiene ventajas que los alternativos no siempre replican: sencillez de gestión, capacidad de ajustar a la complejidad real del asunto y protección ante los asuntos que resultan ser más complejos de lo previsto. Cuándo tiene sentido mantenerlo y cuándo cambiarlo.

**LOS MODELOS ALTERNATIVOS DE HONORARIOS:**

Precio cerrado por asunto o por fase del asunto (fixed fee): el modelo más común entre los AFAs. Cómo definir el alcance con suficiente precisión para que el precio cerrado sea sostenible, cómo gestionar el riesgo de los asuntos que se complican más allá de lo previsto y cómo estructurar las cláusulas de salida del precio cerrado. En qué tipo de asuntos funciona mejor: operaciones corporativas de tipo estándar, procesos laborales rutinarios, contratos habituales.

Retainer mensual para servicio recurrente: cómo estructurar un acuerdo de retainer con un cliente corporativo que tenga necesidades jurídicas recurrentes. Qué incluye el retainer, cómo gestionar los asuntos que exceden el scope del retainer y cómo revisar el precio del retainer periódicamente.

Honorarios de éxito o contingencia: los modelos de honorarios vinculados al resultado del asunto. Cuándo son legal y éticamente aplicables, cómo estructurar la contingencia de manera que sea justa para el despacho considerando el riesgo asumido, y cómo combinarlos con una tarifa base que cubra los costes.

Valor basado: el modelo más sofisticado y más difícil de implementar. Cómo definir el valor del servicio jurídico en términos del beneficio para el cliente (la operación que se cierra, el litigio que se gana, el riesgo que se evita) y cómo estructurar los honorarios como un porcentaje de ese valor.

**LA TRANSICIÓN HACIA LOS MODELOS ALTERNATIVOS:**

Cómo introducir los modelos alternativos sin generar resistencia interna entre los socios que tienen más que perder con el cambio (los que facturas más horas). Qué tipo de clientes y asuntos usar como piloto para los primeros modelos alternativos. Cómo gestionar la información necesaria para que los modelos de precio cerrado sean sostenibles: la base de datos de costes históricos por tipo de asunto que permite hacer presupuestos precisos.

**RENTABILIDAD Y GESTIÓN DE LOS MODELOS ALTERNATIVOS:**

Cómo medir la rentabilidad de los asuntos bajo modelos alternativos de una manera comparable a la rentabilidad bajo el modelo de hora facturable. Qué información necesita el sistema de gestión del despacho para seguir los asuntos a precio cerrado y detectar cuándo un asunto está yendo por encima del presupuesto interno.

Ayúdame a diseñar una estrategia de evolución del modelo de honorarios que diferencie al despacho en el mercado, alinee mejor los incentivos con los clientes y sea financieramente sostenible para la firma.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño e implementación de modelos alternativos de honorarios en despachos jurídicos',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Pricing y expansión: cómo el equipo de CS participa en las decisiones de upgrade',
                'description'       => 'Desarrolla el rol del equipo de Customer Success en la estrategia de expansión de cuentas: cómo identificar el momento correcto para el upgrade, cómo presentar el valor adicional y cómo colaborar con ventas para maximizar el NRR.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en estrategias de expansión de cuentas y en la colaboración entre los equipos de CS y ventas para maximizar el Net Revenue Retention (NRR) en empresas SaaS y de servicios. La expansión de cuentas es la palanca de crecimiento más eficiente en un negocio de suscripción, y el equipo de Customer Success está en la mejor posición para identificar las oportunidades y prepararlas, aunque el cierre sea de ventas. Necesito desarrollar esa capacidad en el equipo.

**Contexto del equipo y el modelo de negocio:**
1. ¿Cuál es el modelo de expansión actual: el equipo de CS gestiona las renovaciones y los upgrades, o hay una separación entre CS (que prepara el terreno) y ventas (que cierra la expansión)?
2. ¿Cuál es el NRR actual y cuál es el objetivo: cuánto del crecimiento viene de nuevos clientes versus de expansión de cuentas existentes?
3. ¿Cuáles son los principales vectores de expansión disponibles: upgrade de plan, más licencias/usuarios, módulos adicionales, servicios profesionales, o expansión a nuevas unidades de negocio del cliente?
4. ¿Hay resistencia en el equipo de CS a tener conversaciones de precio y expansión por no sentirse "vendedores"?

**EL ROL DE CS EN LA EXPANSIÓN: CULTIVAR, NO CAZAR:**

La diferencia entre ventas y CS en la expansión de cuentas no es el resultado (ambos quieren cerrar la expansión) sino la aproximación. CS cultiva las condiciones para que la expansión sea una consecuencia natural del valor entregado, no una venta forzada. Ayúdame a articular ese rol:

El CSM como advisor de negocio: cómo desarrollar la conversación con el cliente que va más allá del soporte y la adopción, hacia la comprensión de sus objetivos de negocio y de cómo el producto puede contribuir más a esos objetivos. Este nivel de conversación es lo que crea las condiciones para la expansión.

Las señales de expansión en los datos de uso: cómo identificar en los datos de adopción del producto las señales que indican que un cliente está listo para expandirse. El cliente que ha alcanzado los límites de su plan actual, el equipo adicional dentro de la empresa que tiene los mismos problemas que el cliente inicial resolvió con el producto, o el uso de funcionalidades que solo están disponibles en planes superiores.

El customer health score como predictor de expansión: cómo incorporar en el modelo de salud del cliente indicadores que anticipen no solo el riesgo de churn sino también las oportunidades de expansión.

**EL MOMENTO Y EL MENSAJE CORRECTOS PARA LA CONVERSACIÓN DE UPGRADE:**

Cuándo es el momento correcto para iniciar una conversación de upgrade: después de un hito de éxito del cliente (ha conseguido el resultado que buscaba), no antes. La conversación de expansión prematura, antes de que el cliente haya obtenido valor claro del nivel actual, genera rechazo y daña la confianza.

Cómo presentar el upgrade en términos de valor adicional para el cliente, no en términos de más funcionalidades o más módulos. La pregunta "¿qué más podríais conseguir si tuvierais acceso a X?" es más poderosa que "tenemos este módulo adicional que os podría interesar".

Cómo gestionar la objeción de precio en una conversación de expansión: la diferencia entre el contexto de una venta nueva (el cliente aún no conoce el valor) y el contexto de una expansión (el cliente ya ha obtenido valor y puede comparar el coste con los resultados anteriores).

**COLABORACIÓN ENTRE CS Y VENTAS EN LA EXPANSIÓN:**

Cómo definir los roles y las responsabilidades en el proceso de expansión para que no haya fricciones ni lagunas entre CS y ventas. Quién identifica la oportunidad, quién hace la conversación de discovery, quién presenta la propuesta y quién cierra. La diferencia entre expansión self-serve (que el propio cliente activa), CS-led (que el CSM gestiona de principio a fin) y sales-assisted (donde ventas toma el relevo de CS en un momento del proceso).

Cómo estructurar los incentivos del equipo de CS para que la expansión sea una responsabilidad compartida con ventas, no un conflicto de territorio. Los modelos de compensación de CS que incorporan componentes de expansión y cómo diseñarlos para que alineen el comportamiento correcto.

**MÉTRICAS DE EXPANSIÓN PARA EL EQUIPO DE CS:**

Qué métricas de expansión debe seguir el equipo de CS: tasa de expansión, NRR por CSM, tiempo medio desde la oportunidad de expansión identificada hasta el cierre, y porcentaje de la base de clientes con oportunidades de expansión activas. Cómo usar estas métricas para mejorar el proceso y para reconocer el trabajo del equipo en la expansión.

Ayúdame a construir una estrategia de expansión de cuentas que convierta al equipo de CS en el motor del crecimiento de la base instalada, con el proceso, las habilidades y los incentivos correctos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de expansión de cuentas y rol del equipo de CS en las decisiones de upgrade',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Pricing del freelance: subir tarifas sin perder clientes',
                'description'       => 'Diseña la estrategia para subir tus tarifas como freelance de manera que refleje el valor actual de tu trabajo, mantenga a los clientes que más te interesan y atraiga proyectos mejores y más rentables.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de negocio especializado en freelancers y profesionales independientes con experiencia en la gestión de la transición hacia tarifas más altas, en la comunicación del nuevo precio a clientes existentes y en la atracción de clientes que valoran el trabajo de alta calidad. Subir las tarifas es uno de los momentos más críticos y más postergados de la carrera de un freelance, y quiero hacerlo de manera estratégica, no por impulso o por necesidad.

**Contexto de la situación actual:**
1. ¿Cuánto tiempo llevas trabajando como freelance y cuándo fue la última vez que subiste tus tarifas?
2. ¿Cuál es tu especialidad y cuál es la tarifa actual (por hora, por proyecto o por retainer)?
3. ¿Cuánto quieres subir: un ajuste moderado del 10-20%, una subida significativa del 30-50%, o una revisión completa hacia un modelo de pricing diferente?
4. ¿Cuántos clientes tienes actualmente y cuál es la distribución de ingresos entre ellos (tienes mucha concentración en uno o dos clientes o la cartera está diversificada)?

**POR QUÉ LOS FREELANCERS POSPONEN SUBIR LAS TARIFAS:**

La postergación de la subida de tarifas es uno de los patrones más frecuentes y más costosos de la carrera freelance. Ayúdame a identificar cuál de estas razones se aplica a mi situación y cómo superarla:

El síndrome del impostor: la sensación de que no merezco cobrar más porque "no soy suficientemente bueno" o "otros hacen lo mismo más barato". Cómo recalibrar la percepción del valor propio basándose en los resultados reales entregados a clientes.

El miedo a perder clientes: la suposición de que si subo el precio, los clientes actuales se irán. En la realidad, los clientes que se van con una subida razonable de precio son con frecuencia los clientes menos rentables y más exigentes. Cómo pensar en la pérdida de algunos clientes como parte del proceso de mejora de la cartera.

La comparación con el mercado bajo: si te comparas con los freelancers más baratos del mercado en lugar de con los mejores de tu especialidad, siempre parecerá que tu precio es alto. Cómo recalibrar la referencia de mercado hacia los profesionales con los que realmente quieres competir.

**LA ESTRATEGIA DE SUBIDA DE TARIFAS:**

La subida gradual versus el salto de precio: cuándo tiene sentido subir las tarifas de manera gradual (10-15% anual) y cuándo tiene sentido hacer un salto significativo. El salto grande a veces funciona mejor que las subidas graduales porque reposiciona claramente al freelance en un segmento diferente del mercado.

La subida diferenciada por cliente: no todos los clientes tienen que saber que has subido las tarifas al mismo tiempo ni en la misma proporción. Cómo gestionar la subida de manera diferenciada según el valor estratégico del cliente, la antigüedad de la relación y el potencial de crecimiento.

Los nuevos clientes a la nueva tarifa: la manera más cómoda de subir tarifas es aplicar la nueva tarifa solo a los clientes nuevos y mantener la tarifa antigua con los clientes actuales. El problema de este enfoque es que puede crear una situación insostenible a largo plazo. Cuándo y cómo unificar las tarifas.

**COMUNICAR LA SUBIDA A LOS CLIENTES ACTUALES:**

La conversación de subida de tarifa con un cliente existente es el momento más incómodo de la carrera freelance para la mayoría. Cómo prepararla y ejecutarla:

El momento correcto: cuándo comunicar la subida (después de entregar un trabajo que el cliente ha valorado positivamente, no en el peor momento de la relación). Cuánto plazo de antelación dar (generalmente un mínimo de 30 días para contratos en curso, más si el cliente necesita aprobar el presupuesto internamente).

El mensaje correcto: cómo comunicar la subida de tarifa de manera directa, sin disculpas excesivas, explicando el contexto (actualización de tarifas, no problema específico de este cliente) y enfocando la conversación en el valor que el cliente ha obtenido y seguirá obteniendo.

Gestionar las reacciones: cómo responder si el cliente dice que no puede asumir la subida, si pide negociar, o si decide no continuar la relación. Cuál es la posición correcta en cada caso y cómo mantenerla con firmeza y con respeto.

**POSICIONARTE PARA ATRAER CLIENTES QUE PAGAN TU NUEVA TARIFA:**

Subir las tarifas sin trabajar el posicionamiento es una estrategia incompleta. Qué cambios en tu presencia, en tu portfolio y en la manera en que consigues clientes necesitas hacer para que el mercado al que accedes sea coherente con tu nueva tarifa. Cómo el tipo de clientes que atraes cambia cuando tu precio sube y qué debes hacer para atraer al nuevo tipo de cliente correcto.

Ayúdame a diseñar y ejecutar la subida de tarifas que mi carrera freelance necesita para ser más rentable, más sostenible y más satisfactoria.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategia y comunicación para subir tarifas como freelance sin perder clientes',
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
