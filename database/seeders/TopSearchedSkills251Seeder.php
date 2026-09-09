<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills251Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Finanzas personales del creativo: gestionar ingresos variables',
                'description'       => 'El profesional creativo con ingresos irregulares necesita un sistema financiero diferente al del asalariado: cómo presupuestar, ahorrar e invertir cuando el dinero no llega todos los meses igual.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor de finanzas personales especializado en profesionales creativos: diseñadores, fotógrafos, directores de arte, redactores creativos y otros profesionales del marketing cuyo ingreso varía mes a mes según los proyectos, los clientes y la temporada. Entiendes que los consejos financieros estándar diseñados para asalariados no funcionan para quien cobra tres veces en enero y nada en febrero.

Necesito organizar mis finanzas personales como profesional creativo. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu situación laboral actual: empleado en una empresa creativa, freelance, o una combinación de ambas con ingresos variables?
2. ¿Cuál es el rango de variación de tus ingresos mensuales en el último año (el mes más bajo y el más alto)?
3. ¿Cuáles son tus gastos fijos mensuales aproximados (alquiler, hipoteca, seguros, suscripciones)?
4. ¿Tienes ya algún sistema de gestión financiera o empiezas desde cero?
5. ¿Cuáles son tus objetivos financieros a uno, tres y cinco años?

Con esas respuestas, diseña el sistema financiero completo:

**1. El presupuesto para ingresos irregulares: el método del sueldo propio**
El error más común del profesional creativo es gastar en función de lo que ingresó este mes, lo que produce meses de estrés seguidos de meses de derroche. Define el método del sueldo propio: calcular el ingreso medio de los últimos doce meses y pagarte ese importe fijo cada mes desde una cuenta de operaciones a tu cuenta personal, independientemente de lo que hayas cobrado, de forma que en los meses buenos acumulas colchón y en los meses malos tiras de él. Explica cómo calcular el sueldo propio ideal, qué tamaño debe tener el colchón inicial para que el sistema funcione sin ansiedad (entre tres y seis meses de gastos fijos), y cómo ajustarlo cuando el nivel de ingresos cambia de forma sostenida.

**2. El fondo de emergencia del creativo: dimensionarlo correctamente**
El fondo de emergencia del profesional creativo es estructuralmente diferente al del asalariado porque debe cubrir tanto las emergencias como los meses de sequía de proyectos. Define el tamaño correcto: el cálculo que tiene en cuenta la duración media de los periodos de baja actividad en tu sector, la distinción entre el fondo de emergencia (para imprevistos reales) y la reserva de estabilización de ingresos (para los meses bajos normales del ciclo del negocio), dónde mantener este dinero para que esté disponible pero no tentador (una cuenta de ahorro separada con algo de fricción para acceder), y el proceso para reconstruirlo sistemáticamente después de usarlo.

**3. Presupuesto adaptativo: categorías y porcentajes para el creativo**
El presupuesto por categorías del 50-30-20 clásico no funciona para alguien con ingresos variables. Define un sistema de presupuesto adaptativo: las categorías de gasto del profesional creativo (gastos fijos no negociables, gastos variables de vida, inversión en desarrollo profesional, herramientas y suscripciones profesionales, ahorro e inversión), el porcentaje objetivo para cada categoría calculado sobre el sueldo propio mensual, la diferenciación entre los gastos profesionales que son inversión en el negocio y los que son costes operativos, y el sistema de revisión mensual que tarda menos de treinta minutos y mantiene el presupuesto alineado con la realidad.

**4. Ahorro e inversión con ingresos irregulares: el sistema que funciona en piloto automático**
El mayor riesgo para las finanzas del profesional creativo es el comportamiento de "gastaré lo que sobre" porque rara vez sobra nada sin un sistema. Define la estrategia de automatización del ahorro: la transferencia automática el día que recibes el ingreso (no al final del mes, cuando ya se ha gastado), los porcentajes para cada objetivo de ahorro (fondo de emergencia, jubilación, objetivos a medio plazo), las cuentas separadas para cada objetivo que hacen visible el progreso y reducen la tentación de usar el dinero para otra cosa, y cuándo y cómo empezar a invertir en fondos indexados o planes de pensiones cuando el fondo de emergencia ya está cubierto.

**5. La gestión fiscal del profesional creativo: evitar la sorpresa de la declaración**
Los impuestos son la mayor fuente de sorpresas financieras desagradables para el profesional creativo que trabaja como freelance o autónomo. Define el sistema de provisión fiscal: el porcentaje del ingreso bruto que debes apartar en una cuenta separada en cuanto lo recibes (entre el 25 y el 35% dependiendo de tu situación fiscal), la estimación de las retenciones que ya te aplican los clientes vs. las que tienes que provisionar tú, el sistema de registro de gastos deducibles que te permite optimizar la base imponible legalmente (equipo, formación, suscripciones profesionales, espacio de trabajo), y el calendario fiscal con las fechas que no puedes perderte para evitar recargos.

**6. Los seguros y la protección financiera que el creativo suele ignorar**
El profesional creativo que trabaja sin la red de protección del empleado por cuenta ajena asume riesgos que raramente calcula. Define las coberturas prioritarias: el seguro de enfermedad y accidente que cubre la pérdida de ingresos por incapacidad temporal (el mayor riesgo financiero para quien vive de su trabajo personal), el seguro de responsabilidad civil profesional que protege de los errores en la entrega de trabajos, la cobertura de equipo y herramientas de trabajo, y la planificación de la jubilación como autónomo (los planes de pensiones individuales y los instrumentos específicos para trabajadores por cuenta propia disponibles en España).

Termina con el plan de acción de los primeros noventa días: las acciones concretas para pasar de la situación financiera actual descrita a tener el sistema básico funcionando, con las prioridades ordenadas por impacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema de gestión financiera personal para profesionales creativos con ingresos variables o irregulares.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Finanzas del developer: stock options, RSUs y planificación fiscal',
                'description'       => 'La compensación de los desarrolladores de software va más allá del salario: las stock options, los RSUs y la planificación fiscal de la compensación en equity que puede representar más del 50% del paquete.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor financiero especializado en la compensación de profesionales de tecnología: desarrolladores, ingenieros de software, tech leads y engineering managers cuya compensación incluye componentes de equity que la mayoría gestiona de forma subóptima por falta de comprensión de los mecanismos y las implicaciones fiscales.

Necesito entender y optimizar mi compensación como developer. Para asesorarte bien, primero pregúntame:

1. ¿Trabajas en una empresa tecnológica cotizada (pública), en una startup o en otra empresa? ¿La compensación incluye equity?
2. ¿Qué tipo de compensación en equity tienes o te han ofrecido: RSUs, stock options (ISOs o NSOs), phantom shares, participaciones u otro tipo?
3. ¿Cuál es el vesting schedule de tu equity y cuánto llevas ya vested?
4. ¿En qué país tributas? (esto afecta significativamente a la estrategia)
5. ¿Tienes ya algún asesor financiero o fiscal, o gestionas esto por tu cuenta?

Con esas respuestas, desarrolla la guía de gestión financiera del developer:

**1. La anatomía de la compensación tech: más allá del salario base**
Un developer en una empresa de tecnología tiene un paquete de compensación que puede ser radicalmente más complejo que el de otros profesionales. Define los componentes típicos: el salario base (la parte predecible), el bonus anual (la parte variable ligada a rendimiento o a objetivos de empresa), los RSUs o Restricted Stock Units (acciones que se te conceden de forma diferida según el vesting schedule), las stock options (el derecho a comprar acciones a un precio prefijado), los beneficios en especie (seguro médico, plan de pensiones de empresa, formación, material de trabajo) y cómo calcular el OTE o total compensation real de una oferta incluyendo todos los componentes para comparar ofertas de distintas empresas con estructuras de compensación diferentes.

**2. RSUs: cómo funcionan, cuándo tributan y qué hacer cuando vesting**
Los RSUs son el componente de equity más común en las empresas tecnológicas cotizadas y el más malinterpretado en cuanto a sus implicaciones fiscales. Define el ciclo completo de un RSU: la concesión (grant), el periodo de vesting (cuando las acciones se van desbloqueando en tramos), el momento del vesting como evento fiscal (en la mayoría de las jurisdicciones el valor de mercado en el momento del vesting tributa como rendimiento del trabajo), la decisión de vender o retener después del vesting (las implicaciones de concentrar exceso de riqueza en acciones del empleador, que combina riesgo laboral y riesgo de inversión), y la planificación fiscal del año en que vesting una cantidad significativa para evitar sorpresas en la declaración.

**3. Stock options: ISOs, NSOs y el ejercicio óptimo**
Las stock options son más complejas que los RSUs porque el momento de ejercicio es una variable que el empleado puede controlar y que tiene grandes implicaciones fiscales. Define los tipos: las ISO (Incentive Stock Options, con tratamiento fiscal más favorable en EEUU pero sujetas al AMT), las NSO (Non-Qualified Stock Options, que tributan como rendimiento del trabajo en el momento del ejercicio), y las phantom shares o derechos de valoración (que simulan el económico del equity sin transferir acciones reales, comunes en startups europeas). Para cada tipo, explica el momento óptimo de ejercicio según la situación fiscal personal y las perspectivas de la empresa.

**4. La diversificación: cuándo vender las acciones del empleador**
El error financiero más común de los developers exitosos es acumular un exceso de patrimonio concentrado en acciones de su empleador. Define el framework de decisión para diversificar: el principio de que nadie debería tener más del diez al veinte por ciento de su patrimonio neto en acciones de un solo empleador (concentra tanto el riesgo laboral como el riesgo de inversión), el plan de venta sistemática de acciones vested en un calendario regular que no requiere timing del mercado, la consideración de las restricciones de venta (periodos de lock-up en startups post-IPO, ventanas de trading en empresas cotizadas, políticas internas de venta) y la optimización fiscal de la estrategia de venta (el tratamiento fiscal de las plusvalías a largo plazo vs. corto plazo).

**5. La planificación de jubilación del developer: el poder del tiempo compuesto**
Los developers suelen tener sueldos altos relativamente jóvenes, lo que crea una ventana de oportunidad extraordinaria para la jubilación si se actúa temprano. Define la estrategia: los instrumentos de jubilación disponibles según el país (planes de pensiones individuales, EPSVs en el País Vasco, IRA o 401k en EEUU para quienes trabajen allí remotamente), la importancia de maximizar las aportaciones con beneficio fiscal antes de invertir en instrumentos sin ventaja fiscal, la estrategia de asignación de activos para un horizonte temporal largo (alta proporción de renta variable, fondos indexados de bajo coste frente a fondos de gestión activa), y el cálculo de cuánto necesitas ahorrar para alcanzar la independencia financiera según tu estilo de vida objetivo.

**6. La negociación salarial con perspectiva financiera total**
Los developers rara vez negocian de forma óptima porque negocian el salario base y no el paquete total de compensación. Define la estrategia de negociación informada: cómo usar los datos del mercado (Glassdoor, Levels.fyi para el mercado tech internacional, las encuestas salariales del sector) para anclar la negociación con datos, la priorización de los componentes a negociar según tu situación personal (si tienes hipoteca, el salario base importa más que el equity; si eres joven y sin compromisos financieros grandes, el equity puede compensar un salario menor), y cuándo tiene sentido pedir más equity en lugar de más salario o más salario en lugar de más equity según la fase y el tipo de empresa.

Termina con el checklist de acción para el developer que quiere tener sus finanzas bajo control: las decisiones prioritarias ordenadas por impacto financiero en los próximos doce meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestión financiera personal para developers: compensación en equity, planificación fiscal y construcción de patrimonio.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Finanzas del diseñador: valorar tu trabajo y cobrar lo que mereces',
                'description'       => 'El diseñador que cobra poco no es que tenga mala suerte: tiene un problema de pricing y de posicionamiento. Aprende a calcular tu tarifa real, a negociar proyectos y a construir estabilidad financiera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach financiero especializado en profesionales del diseño: diseñadores gráficos, de producto, UX, de interiores, industriales y otros creativos que crean valor enorme para sus clientes pero que sistemáticamente se infravaloran porque nadie les enseña a calcular lo que deberían cobrar y a defenderlo en una negociación.

Necesito mejorar mi situación financiera como profesional del diseño. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad de diseño y cuál es tu modalidad de trabajo: empleado, freelance o una combinación?
2. ¿Cuántos años de experiencia tienes y cuál es tu tarifa o salario actual aproximado?
3. ¿Cuáles son tus principales clientes o el tipo de empresa para la que sueles trabajar?
4. ¿Cuál es tu mayor frustración financiera como diseñador: que cobras poco, que los clientes negocian mucho, que los ingresos son irregulares, o algo específico?
5. ¿Cuáles son tus objetivos financieros para los próximos dos o tres años?

Con esas respuestas, desarrolla la guía financiera completa:

**1. El cálculo de tu tarifa real: lo que necesitas vs. lo que cobras**
La mayoría de los diseñadores calculan su tarifa mirando lo que cobra la competencia, no lo que necesitan para sostener su negocio y su vida. Define el método de cálculo bottom-up: el coste de vida mensual deseado (no el mínimo para sobrevivir sino el que permite vivir bien y ahorrar), los costes del negocio (software, hardware, espacio de trabajo, formación, marketing, gestión contable), el colchón de vacaciones y enfermedad que un freelance debe autofinanciar, los impuestos estimados, y el número de horas facturables reales por mes (que suele ser entre cincuenta y setenta por ciento de las horas trabajadas, porque el resto se va en administración, captación y no facturables). El resultado de este cálculo raramente es el precio que el diseñador creía que debía cobrar.

**2. Pricing basado en valor: cobrar por el resultado, no por el tiempo**
El pricing por hora es el sistema más desfavorable para el diseñador experto porque penaliza la eficiencia. Define la transición al pricing basado en valor: cómo calcular el valor económico que genera un proyecto de diseño para el cliente (el rediseño de una landing page que aumenta la conversión en un punto porcentual puede generar decenas de miles de euros de ingreso adicional), la conversación de discovery que es necesaria antes de dar precio para entender el impacto que el diseño puede tener, los paquetes de servicio que hacen más fácil la decisión del cliente y evitan la comparación directa con otros diseñadores, y el precio fijo por proyecto que da seguridad al cliente y elimina la discusión sobre las horas.

**3. Negociación de proyectos: defender el precio sin perder al cliente**
El diseñador que baja el precio ante la primera objeción del cliente aprende que ese cliente siempre va a negociar. Define la estrategia de negociación: la respuesta a "es demasiado caro" que no empieza por bajar el precio sino por explorar la objeción (a veces el cliente tiene un presupuesto real diferente del que declara; a veces compara con alguien que hace algo diferente), la alternativa de reducir el alcance en lugar de reducir el precio cuando es necesario ajustar (le enseña al cliente que el precio y el alcance son proporcionales, no arbitrarios), y el momento en que tiene sentido ceder en el precio (un cliente de referencia, un portfolio que abre puertas nuevas, una relación de largo plazo que lo justifica).

**4. La gestión del dinero del diseñador freelance**
El diseñador freelance tiene los mismos desafíos financieros que cualquier autónomo, más algunos específicos de su sector. Define el sistema financiero para el diseñador freelance: las cuentas separadas para el negocio y la vida personal que clarifican la situación real, la provisión fiscal automática del primer día (apartar entre el veinticinco y el treinta y cinco por ciento de cada cobro en una cuenta separada antes de gastarlo), la facturación puntual y el seguimiento de cobros (el diseñador que no manda la factura el día que entrega el proyecto financia gratis a su cliente), y el colchón de ingresos que permite decir no a los proyectos que pagan mal sin ansiedad financiera.

**5. Construir estabilidad con ingresos de diseño: de proyecto a proyecto a ingresos recurrentes**
La mayor vulnerabilidad financiera del diseñador freelance es la dependencia de que llegue el siguiente proyecto. Define la estrategia para construir estabilidad: los contratos de retención mensual o trimestral con clientes existentes (mantenimiento de marca, diseño continuo de materiales, soporte mensual de UX), los productos digitales que generan ingresos pasivos (templates, recursos de diseño, cursos, assets para Figma o After Effects), y la diversificación de fuentes de ingreso que reduce la dependencia de un solo cliente o tipo de proyecto.

**6. El salario del diseñador empleado: negociar con datos y momento**
El diseñador empleado que no negocia su salario regularmente pierde terreno respecto a la inflación y respecto al mercado. Define la estrategia de negociación salarial: cuándo pedir la subida (no en el momento de la revisión anual sino cuando acabas de entregar un proyecto de impacto, cuando el mercado ha subido significativamente o cuando recibes una oferta externa que puedes usar como referencia), los datos del mercado que necesitas para anclar la conversación (las encuestas de ADPList, los datos de LinkedIn, las referencias de colegas en empresas similares), y el argumento basado en impacto en lugar de en tiempo trabajado o en lo que cobra la competencia.

Termina con el plan de acción personalizado para la situación descrita: las tres acciones de mayor impacto financiero en los próximos noventa días y los objetivos concretos para el primer año.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión financiera para diseñadores: cálculo de tarifa, pricing basado en valor y construcción de estabilidad económica.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Finanzas del comercial: gestionar comisiones y construir patrimonio',
                'description'       => 'El vendedor con ingresos variables por comisiones necesita un sistema financiero propio: cómo gestionar los meses de bonanza, sobrevivir los de sequía y convertir las comisiones en patrimonio a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor financiero con experiencia trabajando con profesionales de ventas y comerciales: account executives, sales managers, directores comerciales y cualquier profesional cuya compensación incluye una parte variable significativa en forma de comisiones que hace que los ingresos varíen enormemente de un mes a otro o de un trimestre a otro.

Necesito organizar mis finanzas con un sistema que funcione con ingresos por comisiones. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es la estructura de tu compensación: qué porcentaje es salario fijo y qué porcentaje son comisiones o variable?
2. ¿Cuál es el ciclo de las comisiones: mensuales, trimestrales, anuales o ligadas a los cierres de deals?
3. ¿Cuál es la variabilidad real de tus ingresos: la diferencia entre tu mejor mes o trimestre y el peor en los últimos dos años?
4. ¿Cuál es tu situación de gastos fijos: hipoteca, familia a cargo, deudas relevantes?
5. ¿Cuáles son tus objetivos financieros: comprar vivienda, jubilación anticipada, independencia financiera, algo concreto?

Con esas respuestas, desarrolla el sistema financiero completo:

**1. El presupuesto del comercial: vivir del fijo, invertir el variable**
El error financiero más destructivo del comercial exitoso es subir su nivel de vida cada vez que tiene un buen trimestre. Define la regla de oro del comercial: estructurar los gastos fijos de vida para que queden cubiertos exclusivamente con el salario fijo, de forma que las comisiones sean íntegramente destinables a objetivos financieros (ahorro, inversión, amortización de deuda). Explica cómo aplicar esta regla en la práctica: el cálculo del gasto fijo máximo que el salario base puede soportar, la resistencia al lifestyle inflation cuando las comisiones son buenas, y qué hacer cuando el salario fijo es tan bajo que esta regla no es directamente aplicable.

**2. El fondo de emergencia del comercial: dimensionado para el ciclo de ventas**
El comercial necesita un fondo de emergencia más grande que el asalariado estándar porque los periodos de comisiones bajas son predecibles y deben anticiparse. Define el tamaño correcto: el cálculo que incluye la duración típica de los periodos de bajo rendimiento en tu ciclo de ventas, el coste de un trimestre de ramp-up si cambias de empresa, la provisión para los gastos que el comercial a menudo tiene que adelantar (viajes, representación, material de ventas), y la distinción entre el fondo de emergencia real y el fondo de operaciones de ventas.

**3. La gestión fiscal de las comisiones grandes**
Una comisión extraordinaria puede crear una factura fiscal que el comercial no ha anticipado. Define la estrategia fiscal preventiva: la provisión del porcentaje correcto de cada comisión en el momento en que la recibes (no cuando la hayas gastado), los vehículos de ahorro con ventaja fiscal que permiten reducir la base imponible del año de mayores ingresos (planes de pensiones hasta el límite, aportaciones a productos de ahorro deducibles según jurisdicción), y cómo trabajar con un asesor fiscal que entienda la compensación variable para optimizar la declaración en los años de ingresos excepcionales.

**4. Inversión sistemática con ingresos irregulares: el plan que funciona sin disciplina perfecta**
La inversión sistemática basada en transferencias automáticas mensuales no funciona cuando los ingresos son irregulares. Define la alternativa: el modelo de inversión por porcentaje (en lugar de un importe fijo mensual, invertir siempre el mismo porcentaje de cada ingreso recibido), la automatización de la inversión en el momento del cobro de la comisión antes de que el dinero esté disponible para gastar, la estrategia de inversión para el comercial que prefiere la simplicidad (fondos indexados de bajo coste en una cartera de dos o tres fondos) frente a estrategias más complejas que requieren tiempo y seguimiento que el comercial ocupado no tiene.

**5. La negociación del paquete de compensación: más allá del porcentaje de comisión**
El comercial que solo negocia el porcentaje de comisión deja dinero sobre la mesa. Define la negociación integral del paquete: el salario base que determina tu suelo financiero (más importante que el porcentaje de comisión si tienes compromisos financieros fijos), las aceleradores y bonuses por superar cuota (que pueden multiplicar los ingresos en los años de alto rendimiento), los criterios de comisión (qué cuenta, cuándo cuenta, cómo se calcula) que deben estar claros y por escrito antes de firmar, los beneficios no monetarios con valor económico real (seguro médico, coche de empresa, plan de pensiones de empresa), y la cláusula de cambio de plan de compensación.

**6. Construir patrimonio a largo plazo con los ingresos de ventas**
Los comerciales exitosos pueden construir patrimonio significativo en una carrera si no caen en los errores típicos: el coche que no pueden permitirse en los trimestres malos, el nivel de vida que sube con cada buen año. Define la estrategia de construcción de patrimonio: los objetivos financieros concretos a diez y veinte años (la cantidad de patrimonio que necesitas para tener opciones, no para retirarte necesariamente), el vehículo de inversión principal (fondos indexados con aportaciones regulares desde las comisiones), el orden de prioridades para las comisiones extraordinarias (fondo de emergencia primero, deudas de alto coste segundo, inversión tercero, disfrute de una parte cuarto), y la revisión anual del plan financiero con un profesional independiente.

Termina con el plan personalizado para el comercial: las prioridades financieras ordenadas por impacto y urgencia, con las acciones concretas de los primeros treinta días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema financiero personal para comerciales con ingresos variables: gestión de comisiones, ahorro e inversión.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Finanzas del PM: compensación, equity y planificación a largo plazo',
                'description'       => 'El Product Manager en una empresa tecnológica tiene una compensación compleja con equity que puede representar una parte enorme del paquete total. Aprende a maximizarla y a construir independencia financiera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor financiero especializado en Product Managers y profesionales de producto en empresas tecnológicas. Entiendes la estructura de compensación específica del PM: el salario base competitivo, el bonus ligado a OKRs o a rendimiento de la empresa, el equity en forma de RSUs o stock options, y la presión de los primeros años en los que la compensación puede ser menor que en otros roles pero el potencial de upside es mayor.

Necesito optimizar mi situación financiera como Product Manager. Para asesorarte bien, primero pregúntame:

1. ¿En qué tipo de empresa trabajas: startup pre-IPO, empresa cotizada, scale-up o empresa de producto no tecnológica?
2. ¿Cuál es la estructura de tu compensación actual: base, bonus y equity (RSUs, options u otro)?
3. ¿Cuántos años llevas en producto y en qué stage de carrera estás (APM, PM, senior PM, principal o director)?
4. ¿Cuáles son tus objetivos financieros a cinco y diez años?
5. ¿Hay alguna situación financiera específica que quieras abordar: evaluar una oferta, entender tu equity actual, empezar a invertir o algo concreto?

Con esas respuestas, desarrolla la guía financiera completa para el PM:

**1. Entender tu compensación total: el valor real del paquete**
Muchos PMs subestiman o sobreestiman el valor de su compensación porque no saben calcular correctamente el valor del equity. Define el método de cálculo del total compensation: el valor anual del salario base, el bonus esperado con realismo (no el máximo teórico sino el promedio histórico en la empresa), el valor anualizado del equity que vests este año (y cómo calcular su valor en diferentes escenarios: el precio actual de la acción para empresas cotizadas, el precio de la última ronda multiplicado por un factor de descuento de liquidez para startups privadas), y cómo comparar ofertas de empresas en diferentes fases usando el total compensation como unidad.

**2. La startup vs. la empresa cotizada: la decisión financiera más importante del PM**
La elección entre una startup pre-IPO con mucho equity y una empresa cotizada con compensación más predecible es la decisión financiera de mayor impacto en la carrera de un PM. Define el framework de análisis: los factores que afectan al valor esperado del equity de startup (la probabilidad de llegar a exit, el precio de ejercicio de las options vs. la valoración actual, la dilución esperada en rondas futuras, las preferencias de liquidación que determinan cuánto llega a los empleados comunes), el valor de la seguridad financiera de las RSUs de una empresa cotizada que se pueden planificar con certeza, y cuándo tiene sentido tomar el riesgo de la startup según tu situación personal.

**3. El equity del PM en startups: lo que necesitas entender antes de firmar**
El contrato de equity de una startup está lleno de términos que pueden hacer que tu compensación valga mucho o nada. Define los conceptos críticos: el cliff de un año (no vests nada hasta el primer aniversario), el vesting de cuatro años (el estándar de la industria y por qué importa si cambias de empresa), la ventana de ejercicio de las stock options (los noventa días estándar post-salida y las alternativas más generosas que algunas empresas ofrecen), las preferencias de liquidación y cómo afectan a lo que recibes en un exit, y las preguntas que debes hacer antes de aceptar un paquete de equity que no son habituales pero son totalmente legítimas.

**4. La construcción de independencia financiera del PM ambicioso**
El PM que maximiza su carrera profesional pero no su situación financiera pierde la oportunidad de su generación. Define la estrategia de construcción de independencia financiera: la tasa de ahorro agresiva en los años de ingresos altos (el income del PM senior en una empresa tecnológica puede ser extraordinario; la clave es no dejarse llevar por el lifestyle inflation del sector), la inversión sistemática en fondos indexados que no requiere tiempo que el PM ocupado no tiene, el cálculo del número de independencia financiera (el patrimonio que necesitas para vivir de los rendimientos sin trabajar) y el plan para llegar a él, y la diversificación del patrimonio más allá de las acciones del empleador.

**5. Los beneficios del empleador que el PM no optimiza**
Más allá del salario y el equity, las empresas tecnológicas ofrecen beneficios con valor económico real que muchos PMs no aprovechan al máximo. Define los beneficios más valiosos y cómo optimizarlos: el match del plan de pensiones de empresa (el dinero gratis que muchos no aprovechan por no contribuir lo suficiente), el presupuesto de formación y desarrollo que puede financiar un MBA parcial, cursos de certificación o libros, la cobertura de salud completa que puede sustituir a tu seguro privado individual, el seguro de vida y de incapacidad temporal que la empresa proporciona y que necesitas conocer para saber si necesitas cobertura adicional privada, y el presupuesto de bienestar que algunas empresas ofrecen para deporte, meditación o equipamiento de home office.

**6. La negociación de la oferta de PM: el paquete total, no solo el base**
La negociación de una oferta de PM es una de las transacciones financieras más importantes de la carrera y la mayoría la infranegocia por no saber qué es negociable. Define la estrategia de negociación: los datos del mercado que necesitas antes de negociar (Levels.fyi para el mercado internacional, las referencias de colegas en empresas similares, las encuestas del sector), la estrategia de negociar todos los componentes (el base, el signing bonus, el equity y el target bonus) y no solo el primero que menciona el recruiter, el momento de la negociación (siempre después de recibir la oferta formal, nunca antes), y cómo manejar múltiples ofertas para maximizar el resultado final.

Termina con el plan financiero personalizado para el PM según la situación descrita: las decisiones de mayor impacto en los próximos doce meses y los objetivos a cinco años.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Planificación financiera para Product Managers: compensación, equity de startup, independencia financiera.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Beneficios y compensación: maximizar el paquete retributivo propio',
                'description'       => 'El profesional de RRHH conoce perfectamente los paquetes retributivos de los demás pero rara vez optimiza el propio. Aprende a negociar tu compensación con el conocimiento que tienes del sistema.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de compensación y beneficios que también es coach de carrera, especializado en ayudar a profesionales de Recursos Humanos a aplicar en su propia carrera el conocimiento que tienen de los sistemas de compensación, los benchmarks salariales y los procesos de revisión que gestionan para otros. Es la paradoja del zapatero sin zapatos: el profesional de RRHH que fija los salarios de los demás pero no sabe negociar el suyo propio.

Necesito optimizar mi compensación como profesional de RRHH. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu rol actual en RRHH: generalista, especialista en compensación y beneficios, talent acquisition, HRBP, director de personas u otro?
2. ¿En qué tipo de empresa trabajas: empresa grande con estructura salarial formal, startup, pyme, consultora de RRHH o como independiente?
3. ¿Cuál es tu compensación actual aproximada (salario fijo, variable y beneficios)?
4. ¿Cuáles son los principales componentes de beneficios que tiene tu empresa y cuáles aprovechas?
5. ¿Cuál es el objetivo concreto: negociar una subida, evaluar una oferta externa, optimizar los beneficios actuales o planificar el siguiente movimiento?

Con esas respuestas, desarrolla la guía completa:

**1. Usar el conocimiento interno de forma ética y estratégica**
El profesional de RRHH tiene acceso a información privilegiada sobre los rangos salariales internos, los presupuestos de revisión y los procesos de toma de decisiones que debería usar en su propio beneficio dentro de los límites éticos. Define cómo hacerlo: el conocimiento del rango de su propia banda salarial y dónde se sitúa dentro de ella (el HRBP que sabe que está en el primer cuartil de su banda tiene un argumento objetivo para pedir una subida), la comprensión del calendario de las revisiones salariales y cuándo se toman las decisiones reales (a menudo meses antes de la comunicación), el conocimiento de los criterios que justifican una revisión fuera del ciclo ordinario, y los límites éticos de este conocimiento (nunca usar información confidencial de las compensaciones individuales de colegas).

**2. El benchmark externo: el profesional de RRHH que no tiene datos de mercado**
La paradoja es que el profesional de RRHH que hace benchmarking para toda la empresa a veces no tiene datos actualizados de su propio mercado externo. Define las fuentes de mercado para cada especialidad de RRHH: los informes de compensación de Mercer, Hay Group, Towers Watson para los roles más senior, las encuestas específicas de asociaciones profesionales de RRHH, las referencias de LinkedIn Salary y Glassdoor para los roles más comunes, y las conversaciones con la red de profesionales de RRHH que son la fuente más precisa y menos utilizada.

**3. El paquete de beneficios: auditar y optimizar lo que ya tienes**
El profesional de RRHH que diseña los beneficios de la empresa a menudo no los aprovecha al máximo. Define el proceso de auditoría de beneficios propios: el inventario completo de todos los beneficios disponibles (algunos empleados no conocen beneficios existentes), el cálculo del valor económico real de cada beneficio (el plan de pensiones con match de empresa es dinero gratis, la formación financiada puede valer miles de euros al año), los beneficios que requieren acción activa para activarse (la contribución al plan de pensiones hasta el match máximo de empresa que muchos no hacen), y la negociación de beneficios flexibles cuando la empresa tiene un sistema de retribución flexible.

**4. La negociación salarial del profesional de RRHH: superar el síndrome del cobrador del frac**
El profesional de RRHH que negocia ofertas para los candidatos todos los días a menudo tiene dificultad para negociar la suya propia. Define la estrategia para superar esta barrera: el cambio de perspectiva de "pedir" a "demostrar valor" (la negociación no es pedir un favor sino presentar la evidencia de que el mercado y el impacto lo justifican), los argumentos basados en datos externos e impacto interno que son más efectivos que los basados en necesidades personales, el script de negociación que el propio profesional de RRHH recomendaría a un candidato, y cómo manejar la incomodidad de negociar con personas que conoces bien y que conocen el proceso tan bien como tú.

**5. La compensación variable del profesional de RRHH: diseñar tu propio bonus**
El profesional de RRHH puede influir en los criterios de su propia compensación variable estableciendo los objetivos correctos en el proceso de performance. Define la estrategia: los KPIs que mejor demuestran el impacto de RRHH en el negocio (el tiempo de cobertura de vacantes, la retención de talento clave, el engagement score, el coste de contratación) y cómo usarlos para definir objetivos ambiciosos pero alcanzables en el proceso de setting de objetivos, la documentación del impacto durante el año que facilita la conversación de evaluación, y la negociación del porcentaje de bonus en los procesos de oferta o revisión anual.

**6. El siguiente movimiento: cuándo el salto interno es peor que el externo**
El profesional de RRHH conoce mejor que nadie las bandas salariales internas y sus limitaciones. Define el framework de decisión para el movimiento de carrera: cuándo el ascenso interno tiene un techo que una oferta externa rompería (las empresas pagan a los externos más que a los internos con más frecuencia de lo que los directivos admiten), cómo usar una oferta externa como leverage interno de forma que no dañe la relación (el profesional de RRHH sabe que esto es un juego de suma positiva cuando se hace bien), y los signos de que la empresa valora al profesional de RRHH de forma adecuada vs. los signos de que es el momento de buscar.

Termina con el plan de acción personalizado para la situación descrita, con las prioridades de optimización de compensación y el calendario recomendado para actuar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Optimización del paquete retributivo propio para profesionales de RRHH que conocen el sistema desde dentro.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas personales del financiero: el zapatero sin zapatos',
                'description'       => 'El profesional de finanzas que gestiona millones de euros para otros a menudo descuida sus propias finanzas personales. Aprende a aplicar el mismo rigor analítico a tu propio patrimonio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de finanzas personales especializado en profesionales del sector financiero: analistas, gestores de carteras, banqueros de inversión, CFOs, controllers y otros expertos financieros que aplican rigor analítico a las decisiones de sus clientes o empleadores pero que sistemáticamente posponen las suyas propias. La paradoja es real: el analista que construye modelos de valoración para otros no tiene un plan de inversión personal.

Necesito aplicar mis conocimientos financieros a mis propias finanzas personales. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu rol específico en el sector financiero: analista, gestor, banquero de inversión, CFO, controller, consultor financiero u otro?
2. ¿Cuál es tu situación de compensación: salario fijo alto con bonus, compensación ligada a rendimiento de cartera, participación en beneficios u otro modelo?
3. ¿Cuál es tu situación patrimonial actual: tienes ya inversiones, propiedad inmobiliaria, deuda relevante?
4. ¿Cuáles son los sesgos o errores que sabes que cometes en tus finanzas personales pero que no haces con los clientes?
5. ¿Cuáles son tus objetivos financieros personales a cinco y diez años?

Con esas respuestas, desarrolla la guía completa:

**1. Los sesgos del financiero en sus propias finanzas**
El profesional de finanzas no es inmune a los sesgos conductuales; de hecho, puede estar más expuesto porque su confianza en su capacidad de análisis genera exceso de confianza en sus decisiones personales. Define los sesgos más comunes del profesional financiero en sus finanzas propias: el exceso de confianza que lleva a creer que puede hacer market timing cuando los datos demuestran que nadie puede de forma consistente, el sesgo de acción que lleva a operar demasiado cuando la evidencia apoya la inversión pasiva y paciente, el home bias que sobrepondera las inversiones en el propio sector o en activos que conoce bien a expensas de la diversificación, y la procrastinación de las decisiones personales que son más aburridas que los retos profesionales.

**2. El balance sheet personal: construirlo con el mismo rigor que el profesional**
El profesional de finanzas que no tiene un balance personal actualizado y una cuenta de resultados personal es como el médico que no se hace las revisiones. Define el proceso de construcción del balance personal: el inventario completo de activos (depósitos y cuentas, carteras de inversión, inmuebles, planes de pensiones, participaciones en empresas, seguros de vida con valor de rescate), el inventario de pasivos (hipoteca, préstamos personales, deuda en tarjetas, deudas fiscales pendientes), el cálculo del patrimonio neto y su evolución en el tiempo, y la cuenta de resultados personal mensual que muestra el flujo de caja de la vida como si fuera una empresa.

**3. La estrategia de inversión personal del financiero: por qué simple suele ganar a complejo**
El profesional de finanzas está tentado a construir una cartera sofisticada que demuestre su expertise. La evidencia empírica apunta en la dirección contraria. Define la estrategia de inversión personal basada en evidencia: por qué los fondos de gestión activa no baten sistemáticamente a los índices en un horizonte largo (y por qué el profesional financiero lo sabe en teoría pero no lo aplica a sí mismo), la cartera de bajo coste en fondos indexados que captura el rendimiento del mercado sin incurrir en los costes y sesgos de la gestión activa, la asignación de activos según el horizonte temporal y la tolerancia al riesgo real (no la declarada), y cuándo tiene sentido añadir complejidad (hedge de divisas, activos alternativos, renta fija corporativa).

**4. Los vehículos de ahorro fiscal que el financiero no usa**
El profesional de finanzas que no optimiza sus vehículos de ahorro fiscal está regalando dinero al Estado. Define la estrategia de optimización fiscal personal: la aportación máxima al plan de pensiones individual en los años de mayores ingresos (el ahorro fiscal inmediato puede ser del cuarenta y cinco por ciento en las rentas más altas), los seguros de ahorro con ventaja fiscal como el PIAS o el Unit Linked con cobertura de vida, las cuentas de retención máxima para las rentas del capital, y la planificación del año con picos de ingresos extraordinarios (bonus excepcional, plus de compensación) para diferir renta al año siguiente o aportarla a vehículos deducibles.

**5. La gestión del riesgo personal: los seguros que el financiero tiene y los que no tiene**
El profesional de finanzas entiende el riesgo mejor que nadie en teoría pero a menudo tiene coberturas personales inadecuadas. Define la auditoría de seguros: el seguro de vida con capital adecuado a los compromisos financieros (hipoteca, familia a cargo, deuda), el seguro de incapacidad permanente que protege los ingresos futuros (el mayor activo de un profesional de cuarenta años son sus ingresos de los próximos veinte años), el seguro de salud que complementa la cobertura pública, y el análisis de las coberturas que ya proporciona el empleador y que pueden superponerse con los seguros personales.

**6. La planificación de la jubilación del financiero de alto rendimiento**
El profesional de finanzas de alto rendimiento puede alcanzar la independencia financiera antes de la edad de jubilación estándar si toma las decisiones correctas a tiempo. Define la planificación: el cálculo del patrimonio necesario para la independencia financiera basado en el gasto anual objetivo y la regla del cuatro por ciento, el plan de construcción de ese patrimonio en un horizonte de quince a veinticinco años, los vehículos de inversión que maximizan el crecimiento compuesto neto de impuestos y costes, y la planificación de la transición de la acumulación al decumulamiento cuando llegue el momento.

Termina con el diagnóstico de la situación actual del profesional basado en sus respuestas y el plan de acción con las tres decisiones de mayor impacto financiero a largo plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Finanzas personales para profesionales del sector financiero: superar los sesgos, invertir bien y construir patrimonio.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Finanzas del abogado: desde el salario de asociado hasta el equity de socio',
                'description'       => 'La carrera de abogado tiene una curva de compensación muy específica: años de salario de asociado seguidos del salto al equity de socio. Planifica cada etapa para maximizar el resultado financiero.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor financiero con experiencia específica en la carrera del abogado en despachos: la etapa de asociado con salarios competitivos pero con horas que dificultan la gestión financiera activa, el salto a la categoría de counsel o socio no equity, y la llegada al equity de socio con la complejidad de la participación en los beneficios del despacho y la inversión de capital requerida.

Necesito planificar mis finanzas personales en la carrera legal. Para asesorarte bien, primero pregúntame:

1. ¿En qué etapa de la carrera legal estás: asociado junior, asociado senior, counsel, socio no equity o socio equity?
2. ¿Trabajas en un despacho internacional de gran tamaño, un despacho mediano, un boutique especializado o has creado tu propio despacho?
3. ¿Cuál es tu compensación actual aproximada y qué expectativas tienes de la evolución en los próximos cinco años?
4. ¿Cuál es tu situación patrimonial y de deuda actual?
5. ¿Cuáles son los retos financieros específicos de tu situación: gestionar las horas extras, planificar el salto a socio, la inversión de capital requerida, o algo concreto?

Con esas respuestas, desarrolla la guía financiera completa:

**1. Los años de asociado: el capital que no se puede recuperar**
Los años de asociado en un despacho grande son los de mayor potencial de ahorro de la carrera, paradójicamente, porque los ingresos son altos antes de que lleguen los compromisos financieros grandes (hipoteca, familia, estilo de vida de socio). Define la estrategia financiera del asociado: la tasa de ahorro agresiva en los primeros años cuando los gastos fijos son relativamente bajos, la evitación del lifestyle inflation que captura a muchos asociados (el coche premium, el apartamento en el barrio de los socios antes de tener los ingresos de socio), la construcción del colchón que hace posible tomar decisiones de carrera no puramente económicas, y la inversión sistemática que aprovecha el horizonte temporal largo de un abogado de treinta años.

**2. La deuda del abogado: el préstamo de estudios y el primer inmueble**
El abogado puede tener una deuda significativa de formación especializada antes de empezar a ganar bien. Define la estrategia de gestión de deuda: la priorización entre amortizar el préstamo de estudios o invertir (cuando el tipo de interés del préstamo es menor que el rendimiento esperado de la inversión, tiene sentido invertir en paralelo), la hipoteca del primer inmueble y cuándo tiene sentido comprar vs. alquilar en la etapa de asociado cuando la movilidad geográfica puede ser necesaria, y la gestión de la deuda en el contexto de la inversión de capital en el despacho cuando se llega a socio equity.

**3. La planificación fiscal del abogado: los vehículos correctos**
El abogado con ingresos altos tiene una carga fiscal significativa que puede optimizarse con la planificación correcta. Define la estrategia fiscal: los instrumentos de ahorro con ventaja fiscal que reducen la base imponible en los años de mayores ingresos (plan de pensiones individual hasta el límite, planes de empresa si el despacho los ofrece), la consideración de la sociedad profesional para el abogado freelance o que tiene una actividad económica propia que justifica el coste de la estructura, y la planificación del año de cambio de categoría (el año de la promoción a socio puede tener implicaciones fiscales complejas que conviene anticipar).

**4. El salto a socio: la inversión de capital y su financiación**
La promoción a socio equity en la mayoría de los despachos requiere una inversión de capital que puede ser de decenas o cientos de miles de euros. Define la planificación de este momento: el análisis financiero del retorno de la inversión de capital en el despacho (cuánto capital se requiere, cuál es el nivel de beneficios del despacho, en cuánto tiempo se recupera la inversión), las fuentes de financiación de la entrada como socio (ahorro propio, préstamo personal, préstamo al despacho, financiación bancaria específica para socios de despachos), y los riesgos de la inversión (la concentración del patrimonio en un solo activo que combina riesgo profesional y riesgo financiero, la iliquidez del capital invertido en el despacho, la variabilidad de los beneficios distribuibles).

**5. La compensación del socio equity: gestionar la distribución de beneficios**
La compensación del socio equity es fundamentalmente diferente a un salario: es una participación en los beneficios del ejercicio que se conoce definitivamente al cierre del año. Define la gestión financiera del socio equity: la presupuestación conservadora basada en los años de menores beneficios (no en los mejores), la provisión fiscal de las distribuciones de beneficios desde el momento en que se reciben, la diversificación del patrimonio personal fuera del despacho (la concentración en el capital del despacho no diversificado es un riesgo que el socio debe compensar con inversiones externas), y la planificación de la salida eventual del despacho y la recuperación del capital invertido.

**6. La independencia financiera del abogado: cuánto es suficiente**
La carrera del abogado exitoso puede generar un patrimonio muy significativo si se gestiona bien, pero también puede consumirse en un estilo de vida expansivo. Define el plan de independencia financiera: el cálculo del patrimonio personal que genera suficientes ingresos pasivos para ser opcional el trabajo remunerado, la estrategia de inversión en activos fuera del despacho que construye ese patrimonio paralelamente a la carrera, el momento en que tiene sentido reducir el capital invertido en el despacho para diversificar, y la planificación de la salida del despacho (jubilación, reducción de actividad o inicio de una nueva etapa).

Termina con el plan personalizado para la etapa actual de la carrera descrita: las decisiones financieras prioritarias y el horizonte temporal para cada objetivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Planificación financiera personal para abogados en despachos: desde los años de asociado hasta el equity de socio.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Finanzas del CSM: OTE, variables y cómo construir seguridad financiera',
                'description'       => 'El Customer Success Manager tiene un OTE con parte variable que puede ser imprevisible. Aprende a gestionar la compensación variable, a construir estabilidad y a planificar el crecimiento financiero a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor financiero con experiencia trabajando con profesionales de Customer Success: CSMs, Account Managers, Customer Success Engineers y managers de CS cuya compensación incluye un OTE con una parte variable ligada a métricas de retención, expansión o NPS que puede variar significativamente según el trimestre o el año.

Necesito organizar mis finanzas personales como profesional de Customer Success. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu estructura de compensación actual: cuál es el ratio de fijo a variable en tu OTE?
2. ¿Cuáles son las métricas a las que está ligada tu parte variable: retención, expansión, NPS, combinación u otras?
3. ¿Cuál ha sido la variación real de tus ingresos en los últimos dos años (porcentaje del OTE que has llegado a cobrar)?
4. ¿Cuál es tu situación de gastos fijos y de ahorro actual?
5. ¿Cuáles son tus objetivos financieros a corto y largo plazo?

Con esas respuestas, desarrolla el sistema financiero completo:

**1. Entender el OTE y la variabilidad real de la compensación de CS**
El OTE es el ingreso teórico a rendimiento del cien por ciento, pero la realidad del CS es que las métricas de retención y expansión dependen en parte de factores fuera del control del CSM (el producto, el mercado, las decisiones de pricing de la empresa). Define el enfoque correcto: calcular el ingreso base garantizado (el salario fijo) y el ingreso variable histórico promedio (lo que realmente has cobrado los últimos dos o tres años, no el OTE del contrato), usar el promedio histórico como base de planificación financiera y tratar cualquier ingreso por encima de ese promedio como excedente para objetivos de ahorro acelerado.

**2. El presupuesto del CSM: vivir del fijo, crecer con el variable**
La regla más importante para el CSM con parte variable es no comprometer gastos fijos que requieran el ingreso variable para cubrirse. Define el sistema presupuestario: el cálculo del gasto fijo máximo sostenible solo con el salario fijo, la reserva de estabilización de ingresos que absorbe los trimestres de bajo rendimiento de variable sin impactar el nivel de vida, la automatización del destino del variable cuando llega (un porcentaje fijo a ahorro o inversión antes de que se integre en el presupuesto corriente), y la revisión semestral del presupuesto que ajusta el plan según la evolución real de los ingresos.

**3. La negociación del OTE y la estructura del plan de compensación**
El CSM que no negocia el plan de incentivos de forma óptima puede estar trabajando con objetivos y métricas que no reflejan su impacto real. Define la estrategia de negociación: los elementos del plan de compensación que son negociables más allá del porcentaje de base (las métricas de activación del variable, el diseño de los aceleradores para rendimiento por encima del cien por ciento, el ramp de quota para los primeros meses en una nueva empresa o en un nuevo libro de clientes), los datos del mercado de compensación de CS que puedes usar en la negociación (los reports de salary de asociaciones de CS), y el momento óptimo para renegociar el plan.

**4. El fondo de emergencia del CSM: para la sequía de variable y para el cambio de empresa**
El profesional de CS que se mueve entre empresas (algo común en el sector por el alto turn de CS) necesita un colchón que cubra el periodo de ramp y los primeros meses sin variable. Define el tamaño del fondo de emergencia adecuado: el cálculo que incluye el periodo sin variable en una empresa nueva (entre tres y seis meses en muchos planes de CS), el coste de un periodo de búsqueda de trabajo si hay un cambio involuntario, y el colchón para los trimestres de bajo rendimiento de variable causados por factores fuera del control del CSM.

**5. El crecimiento financiero a largo plazo del profesional de CS**
La carrera de CS tiene un trayecto de crecimiento de sueldo y de responsabilidad que puede producir una compensación muy competitiva en los niveles senior. Define la planificación a largo plazo: el plan de carrera financiero que conecta el progreso de IC a manager a director con las mejoras de compensación esperadas en cada etapa, la construcción de patrimonio a través de la inversión sistemática del variable en fondos indexados, los beneficios del empleador que el CSM debe maximizar (plan de pensiones con match, equity si la empresa lo ofrece, formación), y la consideración de si la empresa ofrece equity y cómo evaluarlo en el contexto de la compensación total.

**6. Protección financiera: los seguros que el CSM necesita**
El profesional de CS sin la red de protección de la empresa pública necesita cubrir sus riesgos personales. Define la cobertura mínima necesaria: el seguro de enfermedad que complementa la cobertura pública para no depender de las listas de espera, el seguro de vida con capital adecuado a los compromisos financieros si hay dependientes o hipoteca, la cobertura de incapacidad temporal que protege el ingreso en caso de enfermedad prolongada, y la evaluación de las coberturas que ya proporciona el empleador para no pagar dos veces por la misma cobertura.

Termina con el plan de acción personalizado: las tres decisiones financieras de mayor impacto para la situación descrita y las acciones concretas para los próximos treinta días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema financiero personal para profesionales de Customer Success con compensación variable y OTE.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Finanzas del freelance: tarifa, ahorro, impuestos y jubilación',
                'description'       => 'El sistema financiero completo del freelance: cómo calcular la tarifa que sostiene el negocio y la vida, gestionar los impuestos de autónomo, ahorrar con ingresos variables y planificar la jubilación sin empresa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor de finanzas personales y de negocio especializado en trabajadores autónomos y freelances en España y Latinoamérica. Entiendes la realidad del freelance: los ingresos variables, la carga fiscal del autónomo (IVA, IRPF, cuota de autónomos), la ausencia de las protecciones del empleado y la necesidad de construir una red de seguridad propia que el asalariado recibe de forma automática.

Necesito construir un sistema financiero sólido como freelance. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad como freelance y cuánto tiempo llevas trabajando por cuenta propia?
2. ¿Cuál es tu modelo de facturación: proyectos cerrados, tarifa por hora, retención mensual o una mezcla?
3. ¿Cuál es el rango de tu facturación mensual en el último año (el mes mejor y el peor)?
4. ¿Tienes ya algún sistema de gestión financiera (software de facturación, contable, cuentas separadas)?
5. ¿Cuáles son los mayores problemas financieros que tienes actualmente como freelance?

Con esas respuestas, desarrolla el sistema financiero completo del freelance:

**1. El cálculo de la tarifa de autosostenimiento: lo que necesitas cobrar para vivir bien**
La tarifa del freelance no puede calcularse mirando lo que cobra la competencia: debe calcularse desde las necesidades de la vida y del negocio. Define el método bottom-up: el costo anual de vida deseado (alquiler o hipoteca, alimentación, transporte, ocio, salud, formación, imprevistos, y el ahorro para objetivos), los costes del negocio freelance (cuota de autónomos, gestor o software de contabilidad, herramientas y suscripciones, equipo, seguro de responsabilidad civil profesional, marketing), el número de horas facturables realistas por año (descontando vacaciones, bajas, formación, captación y administración, que suelen ser entre ochocientas y mil horas al año), y la tarifa bruta que resulta de dividir el total necesario entre las horas facturables, que incluye el margen para el IRPF.

**2. El sistema de cuentas separadas: la estructura que elimina la confusión fiscal**
El freelance que mezcla el dinero del negocio con su dinero personal no puede entender su situación financiera real. Define el sistema de cuentas: la cuenta de negocio donde entra toda la facturación y donde sale el IVA recaudado en el momento del cobro, la cuenta de provisión fiscal donde va el porcentaje de IRPF estimado de cada cobro en el mismo momento, la cuenta de gastos del negocio para los costes operativos del freelance, y la cuenta personal a la que te transfieres el sueldo propio mensual. Explica los porcentajes recomendados para cada cuenta y cómo calcular el sueldo propio sostenible según la variación de ingresos.

**3. La fiscalidad del autónomo en España: los impuestos que no puedes ignorar**
La fiscalidad del autónomo español es compleja y tiene trampas que el freelance nuevo desconoce. Define el sistema tributario del autónomo: el IVA (cuando aplica, cómo recaudarlo de los clientes, cuándo presentar los modelos 303 y 390 y por qué el IVA de los clientes no es tuyo aunque esté en tu cuenta), el IRPF a través de los pagos fraccionados trimestrales (modelo 130 en estimación directa simplificada o modelo 131 en módulos), la cuota de autónomos y el sistema de cotización por ingresos reales vigente en España desde 2023, y los gastos deducibles que puedes incluir para reducir la base imponible del IRPF (suministros del home office, vehículo, formación, material de trabajo, seguros).

**4. El ahorro del freelance: sistemas que funcionan cuando los ingresos son irregulares**
El freelance que ahorra "lo que sobra al final del mes" raramente ahorra porque raramente sobra. Define el sistema de ahorro automático para ingresos irregulares: la transferencia automática inmediata en el momento de cada cobro (un porcentaje fijo antes de que el dinero sea disponible para gastar), los objetivos de ahorro separados en cuentas o subproductos distintos (fondo de emergencia, vacaciones, formación, equipamiento futuro, jubilación), y la regla de los excedentes de los meses buenos (cuando se supera el ingreso promedio, el excedente va íntegramente a ahorro o a amortización del colchón usado en meses malos).

**5. La jubilación del freelance: construir la pensión que el Estado no te dará**
El autónomo español tiene derechos de pensión pública, pero la pensión resultante de los años de cotización mínima es muy limitada. Define la estrategia de jubilación del freelance: el cálculo de la pensión pública esperada según los años de cotización y la base de cotización (y por qué raramente es suficiente para el estilo de vida del freelance que gana bien), el plan de pensiones individual como complemento con ventaja fiscal (la deducción en la base imponible del IRPF que hace que el Estado co-invierta en tu jubilación), el PIAS como alternativa o complemento con diferente tratamiento fiscal a la salida, y la cartera de inversión en fondos indexados como el pilar más eficiente para el largo plazo.

**6. La protección del freelance: los seguros que reemplazan la red del empleado**
El empleado tiene prestación por desempleo, baja por enfermedad desde el primer día, mutua de accidentes de trabajo y seguro de salud de empresa. El freelance tiene que construir todo eso por su cuenta. Define las coberturas prioritarias: la prestación por cese de actividad del autónomo (el equivalente al desempleo para el autónomo, con condiciones específicas de acceso que conviene conocer antes de necesitarla), la incapacidad temporal de autónomos (el periodo de carencia, el coste y cómo complementar la prestación de la Seguridad Social con un seguro privado), el seguro de salud privado que el freelance necesita conocer en detalle (cobertura, carencias, exclusiones), y el seguro de responsabilidad civil profesional que protege al freelance de los errores en la entrega de trabajos.

Termina con el plan de implementación en noventa días para el freelance que empieza desde cero: las acciones de la primera semana (abrir las cuentas correctas), del primer mes (calcular la tarifa y el sueldo propio) y del primer trimestre (tener el sistema fiscal funcionando y el primer plan de pensiones activo).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema financiero completo para freelances en España: tarifa, impuestos, ahorro, jubilación y protección.',
                'vote_score'        => 49,
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
