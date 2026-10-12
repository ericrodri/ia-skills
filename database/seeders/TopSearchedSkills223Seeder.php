<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills223Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Negociación con agencias y proveedores de marketing',
                'description'      => 'Negocia los contratos con agencias creativas, medios y proveedores de tecnología de marketing: la preparación, los puntos de negociación clave y las técnicas que consiguen mejores condiciones sin dañar la relación de largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de contratos con agencias y proveedores de marketing. Quiero que me ayudes a preparar y ejecutar la negociación con mis proveedores clave de marketing: agencias creativas, medios de comunicación, plataformas tecnológicas y consultoras especializadas, consiguiendo las mejores condiciones posibles sin deteriorar las relaciones que necesito mantener a largo plazo.

Mi contexto:
- Tipo de proveedor con el que voy a negociar: [agencia creativa, agencia de medios, proveedor de MarTech, influencer, consultora de marketing]
- Volumen de gasto anual con este proveedor: [aproximado]
- Duración de la relación actual: [nueva relación / llevo X años trabajando con ellos]
- Principal punto de fricción: [precio, calidad, plazos, exclusividad, transparencia en los costes]
- Mi posición de poder en la negociación: [somos un cliente grande para ellos / somos uno más / dependemos mucho de ellos]

Con esa información, quiero que me entregues:

1. PREPARACIÓN: EL TRABAJO ANTES DE SENTARSE A NEGOCIAR
Explica el proceso de preparación completa para la negociación con un proveedor de marketing: cómo hacer el benchmarking de mercado (qué pagan empresas similares, cuáles son las tarifas estándar de la agencia o del tipo de proveedor), cómo calcular el valor que representa mi empresa para el proveedor (no solo el dinero, también el portfolio, la visibilidad y la referenciabilidad), cómo identificar los intereses reales del proveedor más allá de su posición declarada (maximizar el precio) y cómo definir mi BATNA —la alternativa si no hay acuerdo— para negociar desde una posición sólida incluso cuando el proveedor es más grande que yo.

2. LOS PUNTOS DE NEGOCIACIÓN MÁS ALLÁ DEL PRECIO
Define todos los elementos negociables en un contrato con una agencia o proveedor de marketing: el precio es solo uno de ellos. Explica cómo negociar el alcance del trabajo (qué incluye y qué genera costes adicionales), los plazos de entrega y las penalizaciones por incumplimiento, los derechos de propiedad intelectual sobre los materiales creados, las cláusulas de exclusividad o no competencia, la transparencia en los costes de producción y en las comisiones de medios, los términos de pago (los 60 o 90 días que muchas agencias no quieren aceptar), las cláusulas de terminación anticipada y las revisiones de rendimiento como hito de precio variable.

3. TÉCNICAS DE NEGOCIACIÓN APLICADAS AL CONTEXTO DE MARKETING
Explica las técnicas de negociación más efectivas en el contexto específico de proveedores de marketing: el anclaje inicial (cuándo y cómo poner el primer número sobre la mesa), la concesión estratégica (qué concesiones tienen bajo coste para mí pero alto valor percibido para la agencia), la técnica del paquete (cómo negociar múltiples puntos simultáneamente para crear espacio de intercambio), cómo usar la comparación con otros proveedores sin amenazar de forma que dañe la relación y cómo manejar los intentos de la agencia de reencuadrar la conversación hacia el valor que aportan cuando la presión de precio incomoda.

4. NEGOCIACIÓN CON AGENCIAS CREATIVAS: LAS PARTICULARIDADES
Diseña la estrategia específica para negociar con agencias creativas (publicidad, diseño, contenido, branding): cómo negociar las fees de retainer frente a los proyectos puntuales, la estructura de tarifas por hora versus entregables, la transparencia en los costes de producción (markups sobre proveedores externos), los derechos sobre las piezas creativas (quién es dueño de los artes terminados, del código, de las fotografías), cómo gestionar las revisiones ilimitadas que muchos clientes asumen pero que no están en el contrato y el incentivo variable ligado a resultados de negocio que alinea los intereses de la agencia con los del cliente.

5. NEGOCIACIÓN CON MEDIOS Y PLATAFORMAS PUBLICITARIAS
Explica cómo negociar con medios de comunicación y plataformas de publicidad digital: cuándo los medios tienen margen real de negociación (fechas de cierre de trimestre, inventario sin vender, relaciones de largo plazo), qué bonificaciones adicionales puedes negociar más allá del descuento en tarifa (posición preferente, sponsored content, exclusividad en una categoría, extensiones de campaña sin coste), cómo evaluar si el descuento propuesto es real o es simplemente el descuento estándar que dan a todos y cómo estructurar los acuerdos anuales de inversión que te dan poder de negociación durante todo el año.

6. MANTENER LA RELACIÓN DESPUÉS DE NEGOCIAR
Define el proceso de cierre de la negociación y de gestión de la relación post-negociación: cómo formalizar los acuerdos de forma que no haya ambigüedad después, cómo comunicar el resultado de la negociación sin hacer sentir al proveedor que ha perdido (el proveedor resentido tiene mil maneras de recuperar lo concedido durante la ejecución), cómo establecer los hitos de revisión del contrato para ajustar las condiciones a medida que la relación evoluciona y cómo construir la relación de partnership real que hace que el proveedor quiera darte su mejor trabajo aunque no seas el cliente más grande de su cartera.

Termina con una guía de señales de alerta durante la negociación: los comportamientos de la agencia o proveedor que indican que la relación no va a funcionar bien aunque el precio sea competitivo, y las condiciones mínimas que nunca debes aceptar en un contrato con un proveedor de marketing independientemente de la presión del tiempo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Preparar y ejecutar la negociación con agencias y proveedores de marketing para obtener mejores condiciones',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Negociación de oferta de trabajo y compensación tech',
                'description'      => 'Negocia tu paquete de compensación como developer: el salario base, el equity, los beneficios y las cláusulas del contrato que marcan la diferencia a largo plazo y que la mayoría de los developers aceptan sin negociar.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de compensación para perfiles tecnológicos. Quiero que me ayudes a negociar la mejor oferta posible para mi próxima posición como developer o ingeniero de software, entendiendo todos los componentes del paquete de compensación y las técnicas que me permitan maximizar el valor total sin quemar la relación con el futuro empleador.

Mi contexto:
- Tipo de posición: [developer backend, frontend, full-stack, DevOps, data engineer, engineering manager...]
- Empresa que me hace la oferta: [startup early-stage, scale-up con financiación, empresa tech grande, empresa no-tech con equipo tech]
                - Oferta inicial recibida: [salario base, equity si lo hay, beneficios]
- Mi situación actual: [tengo otra oferta, sigo en mi empresa actual, llevo tiempo buscando]
- Años de experiencia y stack principal: [describe brevemente tu perfil]

Con esa información, quiero que me entregues:

1. ENTENDER EL PAQUETE COMPLETO: MÁS ALLÁ DEL SALARIO BASE
Explica todos los componentes de la compensación total de un perfil tech y cómo valorarlos: el salario base (el componente más visible pero no siempre el más importante), el bonus anual y cómo se calcula realmente, el equity (stock options versus RSUs, la diferencia entre el valor nominal y el valor real, cómo interpretar la valoración de las opciones en una startup), los beneficios en especie (seguro médico privado, seguro de vida, plan de pensiones, coche de empresa), el presupuesto de formación y conferencias, el home office allowance y los días de vacaciones adicionales. Enséñame a calcular el valor económico real de cada componente para poder comparar ofertas que parecen similares pero no lo son.

2. BENCHMARKING: SABER LO QUE VALE TU PERFIL
Diseña el proceso de benchmarking de tu compensación antes de negociar: las fuentes de datos más fiables para conocer los rangos de mercado (Glassdoor, Levels.fyi para big tech y scale-ups, LinkedIn Salary, surveys sectoriales de empresas de recruiting, conversaciones con colegas), cómo interpretar los datos de compensación para tu stack, tu nivel de experiencia y tu geografía, cómo ajustar el benchmark a las particularidades de la empresa que te ofrece (una startup puede pagarte menos en salario pero más en equity potencial) y cómo usar este benchmark para fundamentar tu contraoferta con datos, no solo con deseos.

3. EQUITY: LO QUE LA MAYORÍA DE LOS DEVELOPERS NO ENTIENDEN AL FIRMAR
Explica en profundidad cómo evaluar y negociar el equity en diferentes tipos de empresa: las stock options en startups (qué es el strike price, qué es el cliff, qué es el vesting schedule, qué es el exercise window y por qué importa, qué pasa con tus opciones si la empresa te despide antes del vesting), las RSUs en scale-ups y big tech (cuándo vestan, qué pasa si el precio de la acción baja después de la concesión), cómo evaluar el equity de una startup (qué porcentaje te dan, cuántas acciones hay en total, cuál es la valoración actual de la empresa, qué dilución puedes esperar en futuras rondas). Dame las diez preguntas que debes hacer sobre el equity antes de firmar.

4. LA CONTRAOFERTA: CÓMO NEGOCIAR SIN PERDER LA OFERTA
Define el proceso de negociación de la contraoferta: cuándo es el momento correcto para negociar (después de recibir la oferta escrita, nunca antes), cómo responder al primer ofrecimiento verbal para ganar tiempo sin comprometerte, cómo formular la contraoferta (por email o en conversación, con cifras específicas o con rangos), qué argumentos usar para justificar tu contraoferta (benchmark de mercado, tus otras opciones, el coste de oportunidad de dejar tu empresa actual), cómo pedir más de un componente simultáneamente sin parecer codicioso y cómo gestionar el silencio o el rechazo inicial de la empresa sin ceder de inmediato.

5. CLÁUSULAS DEL CONTRATO QUE LA MAYORÍA FIRMA SIN LEER
Explica las cláusulas del contrato de trabajo tech que tienen impacto económico y que muchos developers no negocian: la cláusula de no competencia (qué puedes negociar en su alcance geográfico y temporal), la cláusula de propiedad intelectual (asegúrate de que tus proyectos personales fuera del horario laboral no pertenecen a la empresa), el período de preaviso (en ambas direcciones), las condiciones del despido (qué indemnización vas a recibir más allá del mínimo legal), los acuerdos de no solicitar empleados y las cláusulas de aceleración del vesting si hay una adquisición de la empresa.

6. MÚLTIPLES OFERTAS Y TIMING: LA PALANCA MÁS POTENTE
Diseña la estrategia para gestionar múltiples procesos de selección simultáneos y usar los plazos de las ofertas a tu favor: cómo sincronizar los procesos para que las ofertas lleguen al mismo tiempo (o cerca), cómo comunicar a una empresa que tienes otra oferta sin mentir y sin revelar más información de la necesaria, cómo usar la oferta competidora como palanca de negociación de forma que la empresa perciba que estás eligiendo entre buenas opciones (no que solo quieres más dinero), cómo gestionar los plazos de respuesta cuando una empresa te presiona para decidir antes de que hayas terminado los otros procesos y cuándo tiene sentido rechazar una oferta superior si la empresa o el proyecto tienen más potencial a largo plazo.

Termina con una lista de los errores más comunes que cometen los developers en la negociación de compensación: aceptar la primera oferta sin negociar, negociar solo el salario base ignorando el equity, no pedir el desglose completo del equity antes de firmar, revelar el salario actual antes de tener la oferta y ceder demasiado rápido ante el primer rechazo de la contraoferta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Negociar la mejor oferta de compensación posible en una posición tech',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Negociación de honorarios para diseñadores',
                'description'      => 'Negocia el precio de tu trabajo como diseñador sin incomodarte: la preparación, el anclaje, las concesiones que puedes dar y los límites que no debes cruzar cuando el cliente pide descuento.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de honorarios para diseñadores freelance y agencias de diseño. Quiero que me ayudes a defender el precio de mi trabajo con confianza, a preparar la conversación de presupuesto antes de que ocurra y a manejar los momentos incómodos cuando el cliente pide descuento en el proyecto que llevo semanas cotizando.

Mi contexto:
- Especialidad de diseño: [branding, UX/UI, diseño editorial, motion, packaging, diseño web...]
- Tipo de cliente habitual: [startup, empresa mediana, corporación, particular]
- Tarifa media actual: [por hora o por proyecto]
- Principal problema con la negociación de precios: [me cuesta poner precio, los clientes siempre piden descuento, acepto trabajos por debajo de mi valor, no sé cómo responder cuando me comparan con alguien más barato]
- Proyecto concreto que necesito negociar: [describe brevemente el proyecto y el presupuesto que has propuesto]

Con esa información, quiero que me entregues:

1. EL PRECIO ANTES DE LA CONVERSACIÓN: CÓMO CALCULAR Y PRESENTAR TU TARIFA
Explica el proceso completo de cálculo de honorarios: cómo calcular tu tarifa hora real (no solo el tiempo de trabajo visible, también el tiempo de gestión, revisiones, comunicación con el cliente, formación continua y los días no facturables del año), cómo estructurar el presupuesto por proyecto de forma que el cliente vea el valor, no solo el número total, qué información incluir en la propuesta económica para anclar la conversación antes de que empiece la negociación y cuándo presentar el precio (en la reunión de discovery, en un documento separado, después o antes de la propuesta creativa).

2. EL ANCLAJE: PONER EL PRIMER NÚMERO
Explica la técnica del anclaje en el contexto de la negociación de honorarios de diseño: por qué quien pone el primer número tiene ventaja, cómo elegir el número de apertura (suficientemente alto para tener margen de concesión sin ser ridículo), cómo presentar el precio con confianza en lugar de con disculpas, cómo manejar el silencio que sigue a comunicar el precio (la pausa incómoda que muchos diseñadores llenan con una bajada de precio inmediata y voluntaria) y cuándo es mejor preguntar el presupuesto del cliente antes de presentar el tuyo propio.

3. LAS OBJECIONES DE PRECIO MÁS COMUNES Y CÓMO RESPONDERLAS
Define el playbook de respuesta a las objeciones de precio más habituales en diseño: "es demasiado caro para nuestro presupuesto", "vi otro diseñador que hace lo mismo por la mitad", "si salimos bien en este proyecto te traeremos más trabajo", "podemos pagarte menos ahora pero te damos visibilidad" y "¿no puedes hacer una versión más sencilla por menos?". Para cada objeción, dame la respuesta que defiende el precio sin ponerse a la defensiva, reconoce la posición del cliente y redirige la conversación hacia el valor en lugar de quedarme atrapado en una guerra de números.

4. CONCESIONES INTELIGENTES: QUÉ PUEDES DAR SIN PERDER MARGEN
Explica qué concesiones puede hacer un diseñador cuando el cliente necesita moverse en el precio pero el descuento directo daña el margen y la percepción de valor: reducir el alcance del proyecto en lugar de bajar el precio (menos versiones, menos formatos, menos revisiones), cambiar el timing (precio más bajo si el cliente acepta plazos más largos o menor prioridad en tu agenda), ofrecer un proyecto piloto de menor tamaño que demuestre el valor antes de comprometerse con el proyecto completo, estructurar el pago en fases condicionadas a hitos y las mejoras en las condiciones de pago (anticipo mayor) como compensación a una reducción de precio. Enséñame a presentar estas concesiones de forma que el cliente entienda que está obteniendo algo a cambio de algo, no que le estoy haciendo un favor.

5. LOS LÍMITES QUE NO DEBES CRUZAR
Define los límites de la negociación de honorarios que un diseñador profesional no debe cruzar independientemente de la presión del cliente: el precio mínimo que garantiza la sostenibilidad del negocio (cómo calcularlo), las condiciones de trabajo que no puedes aceptar aunque el cliente lo enmarque como parte del "descuento" (trabajar sin contrato, sin anticipo, con revisiones ilimitadas o cediendo la propiedad intelectual sin precio adicional), las señales de alerta que indican que el cliente tiene una mentalidad transaccional que generará problemas durante el proyecto aunque el presupuesto se cierre y cómo rechazar un proyecto con educación y sin quemar la relación cuando las condiciones económicas no son aceptables.

6. EL PROCESO DE CIERRE: CONFIRMAR SIN AMBIGÜEDAD
Diseña el proceso de cierre del acuerdo económico: cómo pasar de la conversación verbal al documento escrito que confirma el precio, el alcance y las condiciones de pago, qué debe incluir el presupuesto o la propuesta para que sea vinculante (descripción del trabajo, número de revisiones incluidas, plazos, forma de pago, condiciones de cancelación), cómo pedir la firma y el anticipo antes de empezar el trabajo sin que parezca desconfianza y qué pasa si el cliente quiere empezar antes de que esté todo firmado.

Termina con los diez errores más comunes de los diseñadores en la negociación de honorarios: desde aceptar trabajar "por el portfolio" hasta no cobrar el anticipo antes de empezar, pasando por no tener un contrato que defina el alcance. Para cada error explica por qué ocurre y cómo evitarlo en la siguiente negociación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Defender el precio del trabajo de diseño y manejar las negociaciones con clientes',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación de precio sin bajar el margen',
                'description'      => 'Cierra sin descuentos: las técnicas de negociación que defienden el precio, las concesiones que tienen coste para ti pero valor para el cliente y el proceso de cierre que no convierte cada deal en una guerra de precios.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de ventas y en la defensa del precio en procesos de compra competitivos. Quiero que me ayudes a construir el playbook de negociación que me permita cerrar deals sin ceder margen innecesariamente: las técnicas que defienden el precio, las concesiones inteligentes y el proceso de cierre que convierte la conversación de precio en una conversación de valor.

Mi contexto:
- Tipo de producto o servicio: [describe qué vendes]
- Precio medio de venta y margen bruto actual: [aproximado]
- Principal presión de precio que recibo: [el cliente pide descuento, la competencia es más barata, procurement tiene poder en la negociación, hay múltiples ofertas en evaluación]
- Descuento medio que acabo concediendo: [porcentaje aproximado]
- Tipo de cliente con el que negocio más: [startup, empresa mediana, enterprise, cliente público]

Con esa información, quiero que me entregues:

1. POR QUÉ BAJAS EL PRECIO CUANDO NO DEBERÍAS: LOS MECANISMOS PSICOLÓGICOS
Explica los mecanismos psicológicos que llevan a los vendedores a conceder descuentos innecesarios: el miedo a perder el deal (que hace que cedas precio antes de que el cliente lo pida realmente), la incomodidad con el silencio (que rellenas con concesiones), la presión del fin de trimestre que desplaza el poder de negociación al comprador, la tendencia a aceptar la primera objeción de precio como un rechazo real cuando en muchos casos es solo una prueba táctica, y el sesgo de confirmación que hace que el vendedor que ya cree que su precio es alto ceda más rápido que el que cree que su precio es justo. Entender estos mecanismos es el primer paso para evitarlos.

2. EL VALOR ANTES QUE EL PRECIO: ESTABLECER EL MARCO CORRECTO
Define el proceso de establecimiento de valor antes de que llegue la conversación de precio: cómo cuantificar el ROI de tu producto para el cliente específico (el ahorro en coste, el incremento de ingresos, la reducción de riesgo que genera tu solución), cómo usar el discovery para entender el coste de no hacer nada para el cliente (que anchora el precio como una inversión, no como un gasto), cómo presentar el precio en el contexto del valor creado (no como un número aislado sino como el precio de X euros de valor), y cómo construir el business case que el contacto puede usar para justificar la inversión ante su superior o su comité de compras.

3. RESPONDER A LA PRESIÓN DE PRECIO SIN CEDER MARGEN
Explica las técnicas para responder a las peticiones de descuento sin bajar el precio directamente: la técnica del "¿qué te hace pensar que es caro?" que revela si la objeción es de presupuesto real o de valor percibido, la respuesta al precio de la competencia ("entiendo que tienes otra opción, hablemos de qué es diferente"), cómo usar el silencio deliberado después de que el cliente pide descuento para no ser el primero en moverse, la técnica del "si yo / entonces tú" para cualquier concesión de precio (si bajo el precio, el cliente da algo a cambio), y cómo escalar la conversación a una discusión de valor total en lugar de dejarse quedar atrapado en una negociación de precio unitario.

4. CONCESIONES INTELIGENTES: DAR SIN PERDER MARGEN
Define el catálogo de concesiones que tienen coste real para ti pero alto valor percibido para el cliente y que te permiten mover la negociación sin tocar el precio: la ampliación de plazo de pago (valor para el comprador, coste de financiación para ti), el servicio de onboarding extendido o la formación adicional, el acceso anticipado a funcionalidades en desarrollo, las garantías de resultado con cláusula de devolución, el soporte prioritario durante los primeros meses, los créditos de servicio en lugar de descuento en precio, y la extensión del período de prueba. Para cada concesión, enséñame a presentarla como un intercambio (el cliente da algo a cambio) y no como un regalo.

5. NEGOCIACIÓN CON PROCUREMENT: LAS REGLAS DEL JUEGO
Explica el proceso específico de negociación con departamentos de compras o procurement en empresas grandes: cómo funciona el proceso de compra desde dentro de la empresa (qué objetivos tiene el comprador, cómo lo miden, qué KPIs de ahorro necesita conseguir), cómo mantener la relación con el usuario o el champion durante la fase de negociación con procurement (que tiene sus propios objetivos distintos a los del usuario), las tácticas de compras que debes conocer para no caer en ellas (el "tenemos tu competidor al mismo precio", el "solo necesito el 5% de descuento para aprobar el deal", el "necesito una última concesión antes de firmar") y cuándo la concesión de precio es la decisión correcta para cerrar el deal sin dañar el margen de largo plazo.

6. EL CIERRE: CREAR URGENCIA SIN BAJAR EL PRECIO
Diseña el proceso de cierre de la negociación: cómo crear urgencia sin recurrir al descuento de última hora (el descuento que enseña al cliente a esperar siempre al último momento para comprar), cómo usar el compelling event (la fecha o el evento que hace que esperar tenga un coste para el cliente), cómo estructurar la oferta final que cierra el deal (el paquete de valor adicional que sustituye al descuento), cómo pedir el sí de forma directa sin presionar y cómo gestionar el "déjame consultarlo con mi jefe" que aparece justo cuando creías que el deal estaba cerrado.

Termina con un simulacro de negociación: dame el guion completo de una conversación de negociación de precio, desde la apertura del cliente ("esto es más caro que lo que teníamos pensado") hasta el cierre, con las respuestas en cada momento de presión y las concesiones que hago en el orden correcto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Cerrar deals defendiendo el precio y evitando descuentos innecesarios',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Negociación de recursos y prioridades internas',
                'description'      => 'El PM que consigue recursos sin tener autoridad formal: las técnicas de negociación interna, el momento adecuado para pedir y el proceso de construir el caso que hace que los decisores digan que sí.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en influencia y negociación interna para product managers. Quiero que me ayudes a desarrollar las habilidades de negociación interna que permiten a un PM conseguir recursos, prioridad en el roadmap y apoyo organizacional sin tener autoridad formal sobre los equipos con los que trabaja.

Mi contexto:
- Empresa y contexto organizacional: [startup, scale-up, corporación; estructura horizontal o vertical]
- Qué quiero conseguir: [más ingenieros para mi equipo, prioridad en el roadmap Q3, presupuesto para investigación de usuarios, aprobación de una iniciativa estratégica]
- Los stakeholders que necesito convencer: [CTO, CEO, VP de Producto, director de Ingeniería, finanzas]
- Principal obstáculo actual: [compito con otros equipos por los mismos recursos, no tengo acceso directo al decisor, mis datos son incompletos, hay resistencia política al proyecto]
- Mi posición en la organización: [PM individual, senior PM, head of product]

Con esa información, quiero que me entregues:

1. ENTENDER LOS INTERESES DE CADA STAKEHOLDER ANTES DE PEDIR
Explica cómo mapear los intereses reales de cada stakeholder que necesitas convencer: la diferencia entre sus posiciones declaradas (lo que dicen que quieren) y sus intereses reales (lo que necesitan para que su trabajo tenga éxito), cómo descubrir qué métricas tiene cada stakeholder en su OKR que podrían alinearse con lo que tú pides, cómo identificar a los aliados que se benefician de tu iniciativa y que pueden apoyarte antes de la conversación formal y cómo mapear los posibles detractores y sus objeciones antes de que las expresen en una reunión donde tienes menos control.

2. EL CASO DE NEGOCIO INTERNO: HABLAR EL IDIOMA DEL DECISOR
Define el proceso de construcción del caso de negocio interno para la petición de recursos: cómo traducir el beneficio del producto en el lenguaje que importa al decisor (revenue, margen, reducción de churn, coste de oportunidad, riesgo estratégico), cómo cuantificar el impacto de la iniciativa en las métricas de negocio que el decisor tiene en su dashboard, cómo estructurar la presentación del caso (el problema, la solución propuesta, las alternativas que has descartado y por qué, el coste de no hacer nada, la inversión requerida y el retorno esperado) y cómo calibrar el nivel de detalle según el stakeholder (el CEO necesita el resumen ejecutivo, el CTO necesita la profundidad técnica).

3. EL TIMING Y EL CONTEXTO: CUÁNDO PEDIR
Explica la importancia del timing en la negociación interna y cómo elegir el momento correcto para presentar tu petición: los ciclos de planificación y presupuestación en los que debes sembrar la iniciativa con semanas de antelación, los momentos de alta receptividad del decisor (después de un buen resultado, después de una conversación sobre el problema que tú quieres resolver, al principio de un trimestre cuando el presupuesto aún no está comprometido), los momentos que debes evitar (después de malas noticias, en períodos de crisis, cuando el decisor está bajo presión de otro frente) y cómo usar los eventos externos (un competidor que lanza algo relevante, un dato de mercado) para crear el contexto urgente que hace más receptiva la conversación.

4. NEGOCIACIÓN DE PRIORIDADES EN EL ROADMAP
Diseña la estrategia específica para negociar la prioridad en el roadmap cuando hay múltiples iniciativas compitiendo por los mismos recursos de ingeniería: cómo usar un framework de priorización objetivo (impact/effort, RICE, WSJF) que despolitiza la conversación, cómo presentar las iniciativas en competencia de forma que la tuya salga favorecida sin parecer que has manipulado el proceso, cómo gestionar la conversación cuando el CTO o el CEO tiene su propia agenda de prioridades que no coincide con la tuya y cómo negociar el alcance de tu iniciativa (un MVP que consiga los recursos que necesitas en lugar de el proyecto completo que nadie aprueba).

5. ALIANZAS INTERNAS: CONSTRUIR COALICIONES ANTES DE LA REUNIÓN
Explica cómo construir la coalición de apoyo interno que hace que tu petición llegue a la reunión de decisión con momentum: cómo identificar a los stakeholders que se benefician directamente de tu iniciativa (los aliados naturales), cómo activarlos para que aporten su apoyo antes o durante la reunión de decisión, cómo gestionar a los neutrales para que al menos no bloqueen y cómo trabajar con los posibles detractores antes de la reunión para entender y si es posible neutralizar sus objeciones. Explica la diferencia entre construir una coalición (que es legítimo) y hacer política interna desleal (que daña la organización y tu reputación a largo plazo).

6. MANEJAR EL NO Y LA NEGOCIACIÓN ITERATIVA
Define el proceso para gestionar el rechazo de una petición interna y mantener viva la iniciativa: cómo entender las razones reales del rechazo (presupuesto, prioridad, falta de confianza en el análisis, timing), cómo convertir el "no ahora" en una conversación sobre qué condiciones harían posible el sí, cómo pedir una decisión pequeña que construye momentum hacia la decisión grande, cómo mantener la relación con el decisor que rechazó sin resentimiento y cómo saber cuándo la negociación interna no tiene futuro y es el momento de escalar, de modificar radicalmente la propuesta o de aceptar que esta iniciativa no ocurrirá en este ciclo.

Termina con un plan de influencia de 8 semanas para una iniciativa concreta que quieras conseguir: las conversaciones de siembra que hay que tener, los datos que necesitas preparar, los aliados que hay que activar y los hitos de decisión en los que debes estar presente con el argumento correcto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Conseguir recursos y prioridad para iniciativas de producto sin autoridad formal',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Negociación de convenios y condiciones laborales',
                'description'      => 'Negocia con los representantes de los trabajadores: la preparación del proceso de negociación colectiva, la estrategia de concesiones y el proceso de construcción de acuerdos que ambas partes pueden defender.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación colectiva y relaciones laborales para directores de RRHH y directores de relaciones laborales. Quiero que me ayudes a diseñar la estrategia de negociación de un convenio colectivo o de un acuerdo de condiciones laborales con los representantes de los trabajadores, construyendo un acuerdo que sea sostenible para la empresa y que los representantes puedan defender ante sus representados.

Mi contexto:
- Tipo de negociación: [convenio colectivo de empresa, acuerdo de empresa específico, modificación de condiciones sustanciales, negociación de ERTE o restructuración]
- Tamaño de la empresa y plantilla: [número de empleados, número de delegados sindicales]
- Situación económica de la empresa: [crecimiento, estabilidad, dificultades, transformación]
- Historia de la relación con los representantes: [relación constructiva, historia de conflictos, primera negociación]
- Principal punto de tensión esperado: [salarios, jornada, teletrabajo, flexibilidad, condiciones de desvinculación]

Con esa información, quiero que me entregues:

1. PREPARACIÓN: EL ANÁLISIS ANTES DE LA MESA DE NEGOCIACIÓN
Explica el proceso de preparación completa antes de iniciar la negociación colectiva: el análisis de la situación económica de la empresa que respalda o limita las propuestas (la cuenta de resultados, los ratios de productividad, el benchmark salarial del sector), el análisis de las demandas previsibles de la representación de los trabajadores (qué van a pedir, cuáles son sus prioridades reales más allá de las posiciones de apertura), la definición de los máximos y mínimos de la empresa en cada punto del orden del día y el análisis de las alternativas en caso de no acuerdo (qué ocurre si hay huelga, qué ocurre si el convenio vence y la empresa debe acudir al convenio sectorial). Dame un template de análisis pre-negociación para un convenio de empresa.

2. LA DELEGACIÓN NEGOCIADORA: QUIÉN SE SIENTA Y CON QUÉ MANDATO
Define la composición óptima de la delegación negociadora de la empresa: el papel del director de RRHH (coordinador del equipo), el papel del director financiero o el controlador de gestión (que aporta los números), el papel del asesor jurídico laboral (que vigila la legalidad y la redacción), el papel del director de operaciones o del negocio (que aporta la perspectiva del impacto operativo), cómo definir el mandato de la delegación (qué puede decidir en la mesa y qué necesita aprobación superior), cómo coordinar internamente entre sesiones para que la posición de la empresa sea coherente y cómo gestionar los mensajes públicos durante el proceso de negociación.

3. LA APERTURA DE LA NEGOCIACIÓN: POSICIÓN DE APERTURA Y CLIMA
Explica cómo gestionar las primeras sesiones de la negociación colectiva: la propuesta de apertura de la empresa (cómo presentarla para que sea creíble, que tenga margen de movimiento y que no sea tan agresiva que rompa el clima desde el principio), cómo responder a la propuesta de apertura de los representantes (que habitualmente es máxima y alejada de lo posible), cómo establecer el proceso de negociación (orden del día, frecuencia de sesiones, forma de toma de acuerdos parciales), cómo crear un clima de negociación constructivo desde el inicio y qué señales de alerta indican que la otra parte no tiene intención de negociar de buena fe.

4. ESTRATEGIA DE CONCESIONES: EL ARTE DE MOVERSE
Define la estrategia de concesiones en una negociación colectiva: el principio de que cada concesión debe ser recíproca (no se da sin recibir), la secuencia correcta de las concesiones (empezar por los puntos de menor coste para la empresa y mayor valor para los representantes), cómo usar los puntos de intercambio (cedo en jornada si me dan flexibilidad en organización del trabajo), cuándo hacer una concesión grande que desbloquea el proceso y cuándo resistir aunque la presión sea alta, cómo presentar las concesiones de forma que tengan valor percibido para los representantes y cómo evitar hacer concesiones que crean precedentes que no puedes sostener en el siguiente ciclo de negociación.

5. LA GESTIÓN DE LOS MOMENTOS DE CRISIS EN LA NEGOCIACIÓN
Explica cómo gestionar los momentos de crisis durante el proceso de negociación: la amenaza de huelga (cómo evaluar si es una táctica de negociación o una decisión real, cómo responder sin escalar), el bloqueo de la negociación (cuando ambas partes han agotado su margen de movimiento y la negociación está estancada), la filtración de información confidencial a los medios o a la plantilla, la aparición de conflictos internos en la representación de los trabajadores y el papel de la mediación o el arbitraje cuando la negociación directa ha fallado. Define cuándo tiene sentido pedir la intervención de un mediador externo y cómo elegirlo.

6. EL CIERRE Y LA COMUNICACIÓN DEL ACUERDO
Define el proceso de cierre de la negociación y de comunicación del acuerdo: cómo saber cuándo el acuerdo es el mejor posible (la zona donde ambas partes han cedido lo suficiente pero no más de lo que pueden sostener), cómo redactar el acuerdo de forma que sea claro y que no genere interpretaciones conflictivas en la aplicación cotidiana, cómo comunicar el acuerdo a la plantilla (tanto el contenido como el proceso que llevó a él), cómo gestionar el período entre la firma del acuerdo y su ratificación por la asamblea de trabajadores y cómo iniciar la relación post-negociación de forma que construya capital para la siguiente negociación en lugar de empezar desde el resentimiento.

Termina con una guía de los errores más costosos en la negociación colectiva: las concesiones que parecen pequeñas pero crean precedentes caros, las cláusulas ambiguas que generan conflictos en la aplicación y los momentos en los que los negociadores de empresa ceden más de lo necesario por presión del tiempo o por incomodidad con el conflicto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de negociación de convenios colectivos y acuerdos laborales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Negociación con bancos y entidades financieras',
                'description'      => 'Negocia las condiciones de la financiación bancaria: el crédito, el tipo de interés, las garantías y las cláusulas de los contratos de préstamo que pueden marcar la diferencia entre un negocio rentable y uno que trabaja para el banco.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación con entidades financieras para directores financieros y empresarios. Quiero que me ayudes a negociar las condiciones de la financiación bancaria de mi empresa: el precio del dinero, las garantías que el banco puede exigir, las cláusulas del contrato de préstamo y la estrategia de relación bancaria que me da poder de negociación a largo plazo.

Mi contexto:
- Tipo de financiación que necesito negociar: [póliza de crédito, préstamo a largo plazo, financiación de circulante, leasing, confirming, descuento de facturas]
- Importe aproximado: [rango]
- Situación financiera de la empresa: [crecimiento rentable, crecimiento con pérdidas, estable con cash flow positivo, situación de tensión de liquidez]
- Bancos con los que trabajo actualmente: [número de bancos, relación principal]
- Principal problema con la financiación actual: [tipo de interés alto, exigencia de garantías personales, cláusulas restrictivas, falta de flexibilidad en los vencimientos]

Con esa información, quiero que me entregues:

1. LA PREPARACIÓN: EL DOSSIER QUE ABRE LAS PUERTAS
Explica qué información debe tener preparada una empresa antes de acudir a negociar con un banco: el dossier bancario que todo director financiero debería tener actualizado (balance auditado, cuenta de resultados de los últimos tres años con proyecciones, cuadro de financiación actual por entidad, cash flow proyectado, descripción del negocio y el plan estratégico), cómo presentar los datos de la empresa de la forma más favorable sin faltar a la veracidad, cómo anticipar las objeciones que planteará el banco (ratio de endeudamiento, rentabilidad, garantías disponibles) y cómo usar el análisis de la situación del banco (las entidades también tienen objetivos de colocación de crédito que trabajan a nuestro favor).

2. EL PRECIO DEL DINERO: EURIBOR, SPREADS Y COMISIONES
Explica los componentes del coste de la financiación bancaria y qué elementos son negociables: la estructura del tipo de interés (Euribor más spread o tipo fijo), qué determina el spread que el banco aplica (el rating interno de la empresa, el sector, la garantía, el volumen de la operación), cómo interpretar el tipo efectivo total (que incluye comisiones de apertura, estudio, disponibilidad y cancelación además del tipo nominal), cuándo tiene sentido fijar el tipo y cuándo asumir el tipo variable, y qué argumentos usar para reducir el spread: el volumen de negocio total que dejo en el banco (pasivo, seguros, nóminas), la solidez de las garantías que ofrezco y la presencia de otras ofertas competidoras.

3. LAS GARANTÍAS: PROTEGER EL PATRIMONIO PERSONAL
Explica la negociación de las garantías que el banco exige para conceder la financiación: la diferencia entre garantías reales (hipoteca sobre inmueble, prenda sobre activos) y garantías personales (aval del socio mayoritario o del administrador), por qué los bancos prefieren las garantías personales (son más fáciles de ejecutar) y cómo negociar la limitación o eliminación del aval personal cuando la empresa tiene suficiente capacidad de repago, las alternativas a las garantías personales directas (SGR —Sociedad de Garantía Recíproca—, garantías del ICO, covenants financieros como sustituto), y los límites del aval personal que puedes intentar negociar (importe máximo, plazo, condiciones de liberación).

4. LAS CLÁUSULAS DEL CONTRATO QUE DEBES NEGOCIAR
Define las cláusulas del contrato de préstamo que tienen impacto económico y que la mayoría de las empresas firma sin negociar: los covenants financieros (ratios que si se incumplen dan al banco el derecho de vencimiento anticipado), la cláusula de pari passu (que obliga a tratar a todos los acreedores igual), las restricciones a la distribución de dividendos o a operaciones corporativas, las cláusulas de cambio de control (que pueden requerir reembolso anticipado si cambia el accionariado), la penalización por cancelación anticipada y las condiciones para la modificación de los términos del préstamo si la situación financiera de la empresa cambia. Para cada cláusula, define cuándo puedes negociarla y cuáles son los argumentos para hacerlo.

5. LA ESTRATEGIA MULTI-BANCO: CREAR COMPETENCIA
Explica la estrategia de diversificación bancaria como herramienta de poder de negociación: el número óptimo de entidades bancarias para una empresa de tu tamaño (demasiadas diluyen la relación, pocas crean dependencia), cómo usar las propuestas competidoras de otros bancos para mejorar las condiciones del banco principal sin quemar la relación, cuándo tiene sentido cambiar de banco principal y cuándo es mejor negociar con el banco actual, cómo gestionar la concentración de riesgo en una sola entidad (que limita tu poder de negociación) y cómo construir la relación con nuevos bancos en momentos de bonanza financiera para tener opciones cuando las vengas malas lleguen.

6. LA RELACIÓN BANCARIA A LARGO PLAZO
Define el modelo de gestión de la relación bancaria que construye poder de negociación en el tiempo: la importancia de la transparencia proactiva con el banco (comunicar las malas noticias antes de que las descubran), cómo usar los momentos de buena situación financiera para mejorar condiciones o reducir garantías, qué información dar periódicamente al banco (más allá de la obligatoria) para construir confianza, cómo gestionar la relación con el gestor del banco (que cambia frecuentemente) de forma que la relación no dependa de una persona sino de la institución y cómo preparar la conversación de renegociación de condiciones cuando llega el vencimiento del préstamo o cuando la situación del mercado ha cambiado.

Termina con un checklist de la negociación bancaria completa: los puntos que hay que revisar antes de firmar cualquier contrato de financiación, las preguntas que debes hacer al banco antes de aceptar la oferta y las cláusulas que nunca debes firmar sin haber negociado primero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Negociar las condiciones de la financiación bancaria para mejorar el coste y las garantías',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Negociación en el contexto jurídico: técnicas y ética',
                'description'      => 'La negociación como herramienta central de la práctica jurídica: las técnicas de negociación posicional vs. integrativa, los límites éticos del abogado negociador y el proceso de construir acuerdos que se mantienen en el tiempo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación jurídica y en las técnicas de resolución de conflictos aplicadas a la práctica del derecho. Quiero que me ayudes a desarrollar las habilidades de negociación que un abogado necesita dominar para resolver los asuntos de sus clientes de la forma más eficiente posible, entendiendo los límites éticos que diferencian la negociación efectiva de la conducta contraria a la deontología profesional.

Mi contexto:
- Área de práctica: [M&A, litigación civil, derecho laboral, derecho inmobiliario, derecho penal, derecho de familia, derecho mercantil]
- Tipo de negociación habitual: [acuerdos extrajudiciales, negociación de contratos, mediación, transacciones, acuerdos de divorcio]
- Principal dificultad: [el cliente quiere más de lo que es razonable esperar, la otra parte no negocia de buena fe, no sé cuándo aconsejar al cliente que acepte o que siga adelante, gestión de la presión del tiempo]
- Mi experiencia en negociación: [principiante, con experiencia pero sin formación sistemática, experimentado que quiere mejorar en áreas específicas]

Con esa información, quiero que me entregues:

1. NEGOCIACIÓN POSICIONAL VS. NEGOCIACIÓN DE INTERESES: CUÁNDO USAR CADA ENFOQUE
Explica las dos grandes escuelas de negociación y cuándo usar cada una en el contexto jurídico: la negociación posicional (positional bargaining) donde cada parte defiende una posición y hace concesiones graduales hacia el centro, y la negociación basada en intereses (interest-based negotiation o principled negotiation, del método Harvard) que busca acuerdos creativos que satisfacen los intereses reales de ambas partes más allá de sus posiciones declaradas. Define las situaciones jurídicas donde la negociación posicional es inevitable (disputas de una sola variable como el importe de la indemnización) y los contextos donde la negociación de intereses genera acuerdos superiores para ambas partes (divorcios complejos con hijos, relaciones comerciales de largo plazo, disputas entre socios donde la empresa debe seguir).

2. LA PREPARACIÓN DEL ABOGADO NEGOCIADOR
Define el proceso de preparación completa antes de una negociación jurídica: el análisis de la posición jurídica real del cliente (qué ganaría si va a juicio, con qué probabilidad y en qué plazo), el análisis de la posición jurídica de la otra parte (sus fortalezas, sus debilidades, sus incertidumbres), la identificación de los intereses reales del cliente (que no siempre coinciden con su posición declarada), el análisis de los intereses de la contraparte (que el abogado contrario puede revelarte si los interpretas correctamente), la definición del BATNA del cliente (qué pasa si no hay acuerdo), la estimación del BATNA de la otra parte y la zona de posible acuerdo entre ambas. Dame un template de preparación de negociación jurídica.

3. TÉCNICAS DE NEGOCIACIÓN PARA ABOGADOS
Explica las técnicas de negociación más efectivas en el contexto jurídico: el anclaje con la oferta de apertura (cómo presentar el primer número o la primera propuesta para enmarcar la negociación), el uso de los precedentes jurídicos y los datos objetivos como criterios de legitimación que despolitizan la negociación, la técnica de separar las personas del problema (que es especialmente difícil en litigación donde los clientes llevan años de conflicto), el uso del tiempo como herramienta (plazos procesales, fechas de juicio, necesidades de liquidez), cómo gestionar las amenazas veladas de la contraparte sin escalar el conflicto y cómo crear opciones de valor para ambas partes que permiten cerrar acuerdos donde la posición puramente posicional habría fracasado.

4. LOS LÍMITES ÉTICOS DEL ABOGADO NEGOCIADOR
Explica los límites éticos que el abogado debe respetar en la negociación: la prohibición de hacer afirmaciones falsas sobre los hechos (que es distinto a no revelar información), la obligación de no engañar a la otra parte sobre la ley aplicable, la diferencia entre táctica de negociación legítima (bluff sobre la intención de ir a juicio) y conducta contraria a la deontología (falsificar documentos, mentir sobre el estado de salud del cliente), cuándo el abogado tiene la obligación de corregir una falsa impresión que la contraparte tiene sobre los hechos, cómo gestionar la instrucción del cliente de usar tácticas que el abogado considera desleales y la responsabilidad disciplinaria del abogado por la conducta de su cliente durante la negociación.

5. ACONSEJAR AL CLIENTE: CUÁNDO ACEPTAR Y CUÁNDO SEGUIR
Explica el proceso de asesoramiento al cliente en los momentos clave de la negociación: cómo comunicar al cliente una oferta que el abogado considera razonable pero que el cliente rechaza por razones emocionales (la negociación tiene también una dimensión psicológica de reconocimiento y dignidad), cómo ayudar al cliente a separar los intereses económicos reales de las posiciones emocionales, cómo explicar el coste real de continuar el litigio (en tiempo, en dinero, en incertidumbre, en energía emocional) frente al beneficio del acuerdo, cuándo el abogado debe respetar la decisión irracional del cliente de rechazar una oferta razonable y cuándo tiene la obligación de ser más directivo en el asesoramiento.

6. MEDIACIÓN Y OTROS MÉTODOS ALTERNATIVOS
Define el papel del abogado en los procesos de mediación y otros métodos alternativos de resolución de conflictos: cómo preparar al cliente para una mediación (qué esperar, qué actitud adoptar, cuánto revelar al mediador en las sesiones privadas), el papel del abogado durante la sesión de mediación (cuándo hablar y cuándo dejar hablar al cliente), cómo usar la mediación como herramienta de descubrimiento de los intereses reales de la contraparte aunque no se llegue a un acuerdo en la sesión, las diferencias entre mediación facilitativa y evaluativa y cuándo conviene cada una, y cómo integrar la mediación en la estrategia procesal global del asunto.

Termina con los diez errores más comunes de los abogados en la negociación: el error de negociar como abogado cuando el cliente necesita que negocie como consejero estratégico, el error de mezclar el ego profesional con los intereses del cliente, el error de no preparar el BATNA antes de sentarse a negociar y el error de cerrar la negociación sin verificar que el acuerdo se puede ejecutar realmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar las habilidades de negociación jurídica con fundamento técnico y ético',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Negociación de renovaciones y upsells',
                'description'      => 'Negocia las renovaciones y las ampliaciones de contrato con los clientes: la preparación, el timing y el proceso que convierte la conversación de renovación en una oportunidad de expansión sin crear la sensación de presión.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de renovaciones y expansión de cuentas para equipos de customer success. Quiero que me ayudes a diseñar el proceso y desarrollar las habilidades que convierten la conversación de renovación en una oportunidad de crecimiento de la cuenta, sin que el cliente sienta que está siendo presionado para comprar más de lo que necesita.

Mi contexto:
- Tipo de producto o servicio: [SaaS B2B, plataforma de datos, servicios profesionales, software enterprise]
- Ciclo de renovación: [mensual, anual, plurianual]
- ACV medio y rango de expansión típico: [aproximado]
- Principal problema en las renovaciones: [el cliente renegocía el precio a la baja, las renovaciones se alargan más de lo previsto, el upsell se percibe como presión comercial, bajo NRR]
- Mi rol: [CSM que también cierra la renovación, CSM que pasa el deal a ventas en cierto punto, Account Manager]

Con esa información, quiero que me entregues:

1. LA PREPARACIÓN DE LA RENOVACIÓN: EL TRABAJO DE LOS MESES ANTERIORES
Explica el proceso de preparación de la renovación que empieza mucho antes de la conversación formal: cómo construir durante el año el registro de valor entregado al cliente (los hitos alcanzados, los problemas resueltos, las métricas que han mejorado gracias al producto), cómo identificar con antelación las cuentas que tienen riesgo de renovación complicada (los indicadores de health score que predicen una negociación difícil), cómo mapear los stakeholders que participarán en la decisión de renovación (que en enterprise puede ser diferente del contacto habitual del CSM), cuándo iniciar formalmente el proceso de renovación según el tamaño de la cuenta y el ciclo de compra del cliente.

2. LA CONVERSACIÓN DE VALOR: ANTES DE HABLAR DE PRECIO
Define el proceso de la conversación de valor que debe preceder a cualquier conversación de precio en una renovación: cómo estructurar el business review de renovación (los resultados obtenidos con métricas, la comparación con los objetivos acordados al inicio, el ROI calculado de la inversión en el producto), cómo cuantificar el valor de forma que sea creíble para el cliente (usando sus propios datos, no solo los del producto), cómo anclar la conversación de renovación en el coste de migrar a otra solución (el coste de cambio como parte del valor del producto actual) y cómo preparar al champion interno del cliente para que pueda defender la renovación ante el decisor económico.

3. NEGOCIACIÓN DE PRECIO EN LA RENOVACIÓN: DEFENDER EL VALOR SIN PERDER EL CONTRATO
Explica las técnicas de negociación de precio específicas para el contexto de renovación: cómo responder a la petición de descuento del cliente que amenaza con no renovar si no baja el precio (cuándo el descuento es una táctica de negociación y cuándo es una señal real de riesgo de churn), cómo usar la información del uso real del producto para fundamentar el precio (el cliente que usa el 80% de las funcionalidades tiene menos margen de negociación que el que usa el 20%), cómo estructurar el intercambio de concesiones (si bajo el precio, el cliente firma por más años; si mantengo el precio, ofrezco valor adicional), y cómo gestionar la presión de procurement que aparece en las grandes cuentas justo antes de renovar.

4. EL UPSELL Y EL CROSS-SELL EN LA RENOVACIÓN: CREAR LA OPORTUNIDAD
Diseña el proceso para identificar y convertir oportunidades de expansión en el contexto de la renovación: cómo identificar los casos de uso adicionales que el cliente podría activar (y que todavía no tiene en su contrato), cómo presentar el upsell de forma que el cliente lo perciba como una recomendación de valor y no como una venta adicional, cómo usar la conversación de renovación como contexto para proponer la expansión sin que parezca oportunista, cómo calcular y presentar el ROI incremental de la expansión y cómo manejar el "lo consideraremos para el próximo año" que separa la conversación de expansión de la renovación.

5. GESTIÓN DE LOS ESCENARIOS DIFÍCILES DE RENOVACIÓN
Explica cómo gestionar los escenarios de renovación más complicados: el cliente que está evaluando a la competencia (cómo abordar la conversación cuando sabes que hay una evaluación en curso), el cliente que ha tenido una mala experiencia con el producto (cómo reconstruir la confianza antes de la renovación), el cliente que ha cambiado de champion y el nuevo decisor no tiene contexto del valor que el producto ha generado (cómo onboardear al nuevo stakeholder rápidamente), el cliente que está en dificultades financieras (cuándo ofrecer condiciones especiales y cuándo el riesgo de impago hace que no valga la pena renovar) y el cliente que ha sido adquirido por otra empresa (cómo gestionar la incertidumbre del proceso de compra sobre la renovación).

6. EL CIERRE DE LA RENOVACIÓN: EL PROCESO FINAL
Define el proceso de cierre de la renovación: cómo estructurar la propuesta de renovación (qué incluir, cómo presentar las opciones, cómo hacer que la opción de expansión sea más atractiva que la renovación sin cambios), cómo gestionar el proceso de firma en las grandes cuentas (la aprobación interna, el proceso de procurement, la revisión legal del contrato), cómo crear urgencia sin presionar (los incentivos de precio por firma antes de una fecha, el presupuesto del cliente que vence), cómo hacer el handoff correcto cuando el deal pasa a ser gestionado por el equipo de ventas y cómo mantener la relación de CS durante y después del proceso de renovación para no perder la confianza del cliente.

Termina con las métricas que debes monitorizar para mejorar continuamente el proceso de renovación: el forecast accuracy de las renovaciones (predecir correctamente qué renueva y qué no), el ciclo medio de cierre de la renovación, el net revenue retention por segmento de cuenta y las razones de churn y downsell que te enseñan qué debes mejorar en el proceso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir las conversaciones de renovación en oportunidades de expansión de cuenta',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Negociación de proyectos y contratos freelance',
                'description'      => 'Negocia cada aspecto del proyecto antes de empezar: el alcance, el precio, los plazos y las condiciones de revisión que evitan los conflictos al final cuando el cliente recuerda el proyecto de forma diferente.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de proyectos y contratos para freelancers y consultores independientes. Quiero que me ayudes a diseñar el proceso completo de negociación de un proyecto freelance: desde la primera conversación con el potencial cliente hasta la firma del contrato, pasando por todas las conversaciones donde se definen las condiciones que determinan si el proyecto será rentable, bien organizado y libre de conflictos.

Mi contexto:
- Tipo de trabajo freelance: [desarrollo, diseño, consultoría, copywriting, marketing, legal, formación...]
- Tarifa media actual: [por hora o por proyecto]
- Principal problema en los proyectos que acepto: [el alcance crece sin que el precio crezca, el cliente pide revisiones ilimitadas, los plazos se alargan por causa del cliente pero el precio no cambia, conflictos al final porque el cliente esperaba algo diferente]
- Tipo de cliente habitual: [startup, empresa mediana, corporación, particular]
- Estado actual de mis contratos: [sin contrato escrito, contrato básico, propuesta detallada pero sin firmarse siempre]

Con esa información, quiero que me entregues:

1. LA PRIMERA CONVERSACIÓN: CUALIFICAR ANTES DE COTIZAR
Explica el proceso de cualificación del proyecto y del cliente antes de invertir tiempo en preparar una propuesta: las preguntas que revelan si el proyecto es viable (¿tienen presupuesto definido?, ¿quién toma la decisión final?, ¿cuál es el plazo real y el plazo ideal?), las señales de alerta que indican que el cliente será problemático aunque el proyecto parezca interesante (pide más de tres cotizaciones, no tiene claro lo que quiere, ya ha tenido conflictos con freelancers anteriores, dice que "es fácil y rápido"), cómo hacer las preguntas de cualificación de forma natural en la conversación de discovery sin parecer un interrogatorio y cuándo tiene sentido rechazar un proyecto desde el principio en lugar de cotizarlo y que te rechacen.

2. LA PROPUESTA: DEFINIR EL ALCANCE CON PRECISIÓN QUIRÚRGICA
Define el proceso de elaboración de la propuesta que previene los conflictos futuros: cómo describir el alcance del trabajo de forma específica y limitada (qué incluye el proyecto y, tan importante como eso, qué no incluye), cómo estructurar los entregables con criterios de aceptación claros (qué tiene que tener el entregable para que el cliente lo acepte como completado), cuántas rondas de revisión están incluidas en el precio y qué ocurre si se superan, cómo describir los supuestos del proyecto (información que el cliente debe proporcionar, accesos que necesitas, disponibilidad de interlocutores), cómo incluir las condiciones de pago y de cancelación en la propuesta antes de que el cliente la firme y por qué el contrato debe estar separado de la propuesta.

3. EL PRECIO: ANCLAJE, PRESENTACIÓN Y DEFENSA
Explica la estrategia de presentación y defensa del precio en el contexto de proyectos freelance: cómo presentar el precio de forma que el cliente lo evalúe como una inversión y no como un gasto, cómo usar el anclaje inicial a tu favor (presentar el precio completo antes de que el cliente proponga el suyo), cómo responder a las objeciones de precio más comunes en proyectos freelance ("es más de lo que tenía en mente", "encontré alguien más barato", "¿puedes hacer algo básico por menos?"), qué opciones de pricing puedes ofrecer sin bajar el precio total (pago en fases, precio para un alcance reducido) y cómo comunicar las subidas de tarifa a clientes existentes sin perder la relación.

4. EL CONTRATO: LAS CLÁUSULAS QUE TE PROTEGEN
Define las cláusulas del contrato freelance que debes tener sí o sí: el alcance detallado (con referencia a la propuesta), el precio total y la estructura de pagos (con el anticipo que cobras antes de empezar), las condiciones de las revisiones (número, tipo, proceso), la cláusula de cambios de alcance (cómo se gestionan los cambios fuera del scope original y a qué precio), la propiedad intelectual (quién es dueño de qué y cuándo), la confidencialidad, la cláusula de cancelación (qué ocurre si el cliente cancela el proyecto a medias y cómo calculas lo que ya has trabajado), los plazos de entrega y las condiciones en las que los plazos se alargan sin penalización para ti y los intereses de demora en los pagos. Dame una estructura de contrato freelance con las secciones clave.

5. GESTIÓN DEL SCOPE CREEP: EL PROYECTO QUE CRECE
Explica el proceso para gestionar el scope creep durante el proyecto: cómo identificar cuándo una petición del cliente está dentro del scope original y cuándo es un trabajo adicional, cómo tener la conversación de scope creep con el cliente sin que se sienta atacado (la técnica de "con mucho gusto, y esto es lo que implica"), cómo documentar los cambios de alcance de forma que no haya ambigüedad, cómo presentar el coste adicional de los cambios de forma que el cliente lo perciba como una consecuencia natural de sus propias decisiones y no como un intento de sacarle más dinero y cómo gestionar el cliente que sistemáticamente pide trabajo adicional asumiendo que está incluido.

6. EL CIERRE DEL PROYECTO Y LA RELACIÓN FUTURA
Define el proceso de cierre del proyecto y de gestión de la relación post-proyecto: cómo obtener la aceptación formal del trabajo completado (que es el punto a partir del cual el cliente no puede pedir más revisiones), cómo gestionar la última factura cuando el cliente está satisfecho (el momento en que pagar se convierte en una prioridad baja), cómo solicitar el testimonio o la recomendación en el momento de máxima satisfacción del cliente, cómo mantener el contacto con los clientes pasados para generar trabajo recurrente y referencias y cómo construir la relación de largo plazo que hace que el cliente vuelva para el siguiente proyecto en lugar de empezar desde cero con otro freelance.

Termina con un checklist de negociación freelance: la lista de todo lo que debes tener acordado y por escrito antes de empezar cualquier proyecto, desde el precio hasta los criterios de aceptación de los entregables, para que nunca más termines un proyecto en conflicto con un cliente que recuerda el proyecto de forma diferente a ti.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Negociar proyectos freelance con contratos claros que previenen conflictos',
                'vote_score'       => 46,
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
