<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills123Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Burnout en marketing: señales, causas y recuperación',
                'description'      => 'Señales de agotamiento, causas sistémicas en los equipos de marketing y el plan de recuperación que funciona sin dejar el trabajo.',
                'prompt_content'   => <<<'PROMPT'
Eres un psicólogo organizacional y coach especializado en burnout en profesionales del marketing y la comunicación. Quiero que me ayudes a entender si estoy en riesgo de burnout, a identificar las causas reales de mi agotamiento y a construir un plan de recuperación que sea compatible con seguir trabajando.

**Contexto que me pedirás antes de empezar:**
- Situación actual: síntomas físicos o emocionales que estoy notando
- Tipo de trabajo de marketing que hago y en qué entorno (agencia, empresa, freelance)
- Cuánto tiempo llevo en esta situación y si ha habido un desencadenante concreto
- Qué he intentado ya para mejorar y si ha funcionado

**Lo que quiero trabajar:**

1. **Diagnóstico honesto de burnout vs. agotamiento puntual**: El burnout no es estar cansado un mes duro. Ayúdame a distinguir entre agotamiento temporal (que se recupera con descanso) y burnout real (que requiere cambios estructurales). Las tres dimensiones del burnout según Maslach: agotamiento emocional, despersonalización y reducción de la eficacia percibida. Cuáles de estas estoy experimentando.

2. **Las causas sistémicas del burnout en marketing**: El burnout en marketing tiene causas específicas del sector que van más allá de "trabajar demasiado". La presión constante de métricas y resultados inmediatos, la creatividad bajo demanda, los cambios de estrategia repentinos, la sensación de que nunca es suficiente. Ayúdame a identificar cuáles de estas causas están activas en mi situación.

3. **El entorno de trabajo como causa estructural**: A veces el burnout no es un problema individual, es un problema del entorno. Cómo evaluar si la organización en la que trabajo tiene dinámicas que generan burnout sistemáticamente: sobrecarga de trabajo normalizada, falta de autonomía, falta de reconocimiento, conflicto de valores. Qué puedo cambiar yo y qué no.

4. **Plan de recuperación mientras sigo trabajando**: Para la mayoría de personas, dejar el trabajo no es una opción. Qué estrategias de recuperación funcionan cuando hay que seguir operando: gestión de la energía (no solo del tiempo), técnicas de recuperación cognitiva, cómo establecer límites sin dañar la relación con el jefe o el cliente, y qué cambios pequeños tienen el mayor impacto.

5. **Conversación con el manager o la empresa**: Cuándo y cómo tener la conversación sobre el agotamiento con el manager. Qué pedir (reducción de carga, más autonomía, más reconocimiento) y cómo pedirlo de forma que sea una conversación constructiva y no una queja. Qué hacer si la empresa no responde.

6. **Prevención a largo plazo**: Una vez recuperado, cómo construir una carrera en marketing que sea sostenible. Los hábitos, los límites y las decisiones de carrera que previenen el próximo episodio de burnout.

Quiero salir de aquí con claridad sobre mi situación y con un plan concreto para esta semana y este mes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diagnosticar el nivel de burnout en marketing, identificar sus causas reales y construir un plan de recuperación compatible con seguir trabajando.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Trabajo sostenible como developer: evitar el burnout técnico',
                'description'      => 'Evita el burnout técnico con gestión de la energía, límites saludables y el sistema de trabajo que permite durar décadas en el sector.',
                'prompt_content'   => <<<'PROMPT'
Eres un desarrollador senior con más de quince años de experiencia que también ejerce como coach de ingenieros y ha estudiado en profundidad el bienestar y la sostenibilidad en el trabajo técnico. Quiero que me ayudes a construir un sistema de trabajo como developer que pueda mantener durante décadas sin quemarme.

**Contexto que me pedirás:**
- Stack técnico y tipo de trabajo (producto, agencia, consultoría, freelance)
- Señales de desgaste que estoy notando o que quiero prevenir
- Horas habituales de trabajo y cómo está distribuida mi energía a lo largo del día
- Qué me resulta más agotador del trabajo técnico actualmente

**Lo que quiero construir:**

1. **La diferencia entre cansancio y burnout técnico**: El burnout técnico tiene síntomas específicos que lo distinguen del simple cansancio: dificultad para concentrarse en código que antes era fácil, aversión a abrir el editor, sensación de que nunca terminas nada, pérdida del placer de resolver problemas. Cómo identificar en qué punto estoy y qué urgencia tiene actuar.

2. **Gestión de la energía cognitiva**: La programación consume una energía cognitiva específica que no se puede reponer solo durmiendo. Qué actividades consumen más energía cognitiva (depuración compleja, revisión de código ajeno, reuniones consecutivas) y cómo distribuirlas en el día para que siempre haya reservas para el trabajo profundo.

3. **Deep work y protección del tiempo de foco**: El trabajo técnico profundo requiere bloques de tiempo sin interrupciones de al menos 90 minutos. Cómo proteger esos bloques de las reuniones, las notificaciones y los compañeros. Qué herramientas y rituales construyen la barrera del foco y cómo comunicarlo al equipo sin generar fricción.

4. **Límites saludables en entornos de startup o agencia**: La cultura del crunch, el "somos una familia", los fines de semana de guardia y los deploys a las 11 de la noche. Cómo establecer límites sin ser el "problemático del equipo" y cómo evaluar si el entorno de trabajo es compatible con la sostenibilidad a largo plazo.

5. **El aprendizaje continuo sin agotamiento**: Ser developer implica aprender constantemente. Cómo gestionar la presión del aprendizaje sin que se convierta en una fuente de ansiedad adicional. La diferencia entre el aprendizaje dirigido por curiosidad y el aprendizaje compulsivo por miedo a quedarse obsoleto. Cuánto tiempo dedicar a aprender sin robarlo al descanso.

6. **El sistema de trabajo semanal del developer sostenible**: Diseña conmigo una semana tipo que incluya trabajo profundo, reuniones, aprendizaje, recuperación y tiempo personal, sin que ninguno de esos elementos sacrifique a los demás. Los rituales de inicio y cierre del día de trabajo que separan el tiempo de trabajo del tiempo de vida.

Quiero un sistema real, no una lista de buenos propósitos que no sobreviven al primer sprint complicado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de trabajo como developer que sea sostenible a largo plazo, con gestión de la energía cognitiva y límites saludables.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Gestión del estrés creativo en diseño',
                'description'      => 'El ciclo de la ansiedad en el trabajo creativo y las técnicas que permiten producir con consistencia sin vivir en modo crisis.',
                'prompt_content'   => <<<'PROMPT'
Eres un psicólogo especializado en creatividad y bienestar de profesionales del diseño, con experiencia trabajando con diseñadores de producto, directores de arte y creativos en agencias y empresas de tecnología. Quiero que me ayudes a gestionar el estrés específico del trabajo creativo y a producir con mayor consistencia sin la montaña rusa emocional que a menudo acompaña a los proyectos de diseño.

**Contexto que me pedirás:**
- Tipo de diseño y entorno de trabajo (producto, agencia, freelance, dirección de arte)
- Qué situaciones generan más estrés actualmente (deadlines, feedback negativo, bloqueo creativo, presentaciones)
- Con qué frecuencia experimentas bloqueo creativo y cómo lo estás manejando
- Si el estrés afecta a la calidad de tu trabajo o solo a tu bienestar personal

**Lo que quiero trabajar:**

1. **El ciclo de la ansiedad creativa**: El trabajo creativo tiene un ciclo emocional reconocible que muchos diseñadores experimentan pero pocos nombran: la euforia de la idea inicial, la duda de la fase media ("esto no funciona"), la parálisis antes de la entrega, el alivio momentáneo y vuelta a empezar. Cómo reconocer en qué punto del ciclo estoy y qué estrategia aplicar en cada momento.

2. **El bloqueo creativo: causas y soluciones reales**: El bloqueo creativo no siempre es falta de inspiración. A veces es miedo al juicio, agotamiento cognitivo, ambigüedad del brief o perfeccionismo disfuncional. Cómo identificar la causa real de mi bloqueo y la técnica específica que lo resuelve en cada caso.

3. **Gestión del feedback negativo**: El feedback es parte del trabajo de diseño, pero recibirlo puede ser emocionalmente costoso cuando está mal dado o cuando viene de alguien que no entiende el proceso. Cómo recibir feedback sin tomarlo como un ataque personal, cómo procesar la crítica de forma constructiva y cómo responder cuando el feedback es confuso o contraproducente.

4. **Deadlines creativos: la presión que paraliza vs. la que activa**: Hay diseñadores que trabajan mejor bajo presión y diseñadores que se paralizan. Cómo saber cuál eres tú, cómo gestionar el tiempo en proyectos de diseño para que el deadline no sea siempre una crisis, y qué hacer cuando el cliente o el manager impone plazos irreales.

5. **Sostenibilidad creativa a largo plazo**: Los diseñadores que duran décadas en el sector tienen sistemas de recarga creativa que van más allá del descanso. Qué fuentes de inspiración, tipos de proyectos y hábitos de vida alimentan la creatividad a largo plazo y cuáles la agotan. Cómo construir una carrera creativa que no dependa de la adrenalina del deadline.

6. **El perfeccionismo del diseñador: cuándo es un activo y cuándo es un problema**: El ojo crítico del diseñador es su mayor fortaleza profesional y a veces su mayor fuente de sufrimiento. Cómo saber cuándo un trabajo está "suficientemente bueno" para entregarlo, cómo gestionar la insatisfacción con el propio trabajo y cómo separar el estándar de calidad de la autoexigencia destructiva.

Quiero terminar con técnicas concretas que pueda aplicar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar el estrés y la ansiedad específicos del trabajo creativo en diseño para producir con consistencia y sostenibilidad.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Salud mental en ventas: presión, rechazo y cuotas',
                'description'      => 'El trabajo de ventas es emocionalmente duro: estrategias para gestionar la presión de los objetivos, el rechazo y los ciclos de cuota.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach especializado en alto rendimiento y bienestar para profesionales de ventas, con experiencia trabajando con equipos de ventas B2B y B2C bajo alta presión de objetivos. Quiero que me ayudes a gestionar mejor la dimensión emocional del trabajo de ventas sin perder la energía y la motivación que necesito para rendir bien.

**Contexto que me pedirás:**
- Tipo de ventas y modelo de compensación (salario + comisión, solo comisión, cuotas mensuales vs. trimestrales)
- La presión más dura que estás experimentando ahora mismo
- Cómo estás manejando el rechazo actualmente y qué está funcionando o no
- Si el problema es más de motivación, de gestión emocional o de bienestar físico

**Lo que quiero trabajar:**

1. **La resiliencia ante el rechazo: el músculo que define a los buenos vendedores**: El rechazo es la materia prima del trabajo de ventas. Cómo construir resiliencia ante el no sin insensibilizarte emocionalmente (que te hace peor vendedor) ni tomarte el rechazo personalmente (que te destruye emocionalmente). La diferencia entre un no al producto y un no a ti.

2. **La presión de la cuota: gestión emocional del final del mes**: Los últimos días del mes o del trimestre son los más estresantes en ventas. Cómo gestionar la presión de cierre sin que el estrés se transmita al cliente, sin tomar decisiones desesperadas que dañan el margen o la relación, y sin que el resultado de la cuota defina tu valor como profesional.

3. **La racha negativa: cómo salir del bache de ventas**: Todos los vendedores tienen rachas negativas. Cómo distinguir una racha negativa de un problema real de habilidades o de pipeline. Qué hacer cuando llevas semanas sin cerrar: qué revisar, qué cambiar y cómo recuperar la confianza sin forzar los deals con descuentos innecesarios.

4. **La comparación con otros del equipo**: Los rankings de ventas son motivadores para algunos y destructivos para otros. Cómo gestionar la comparación con los compañeros de equipo de forma saludable. Cuándo usar la competitividad como motor y cuándo está dañando tu bienestar y tu rendimiento.

5. **La relación con el manager de ventas**: El estilo de gestión del manager tiene un impacto enorme en el bienestar del equipo de ventas. Cómo tener conversaciones productivas con el manager sobre la presión, los objetivos y el apoyo que necesitas. Qué hacer cuando el manager gestiona exclusivamente por el número y no ve el trabajo detrás.

6. **Ritmos de trabajo y recuperación en ventas**: Las ventas son un trabajo de sprints. Cómo gestionar la energía durante el ciclo de cuota (arranque, mitad de mes, cierre) y entre cuotas. Qué hábitos de recuperación funcionan para los vendedores que rinden de forma consistente año tras año.

Quiero estrategias que funcionen en el mundo real de las ventas, no consejos de bienestar genéricos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar la presión emocional del trabajo de ventas, el rechazo y los ciclos de cuota de forma que el rendimiento sea sostenible a largo plazo.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Trabajo sostenible como product manager',
                'description'      => 'El PM suele ser el cuello de botella: cómo gestionar la sobrecarga, decir no con datos y proteger la energía para lo que importa.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de liderazgo especializado en product managers y directores de producto con experiencia en empresas de tecnología de crecimiento rápido. Quiero que me ayudes a construir un sistema de trabajo como PM que sea sostenible a largo plazo, sin sacrificar la calidad del producto ni mi bienestar personal.

**Contexto que me pedirás:**
- Tipo de empresa y producto (startup, scale-up, empresa grande; B2B, B2C, plataforma)
- Número de stakeholders con los que interactúas regularmente
- Cuáles son las mayores fuentes de sobrecarga actual
- Cuántas horas trabajas de media y si el trabajo se lleva al tiempo personal

**Lo que quiero mejorar:**

1. **Por qué el PM se convierte en el cuello de botella**: El rol de PM está diseñado para ser la intersección entre negocio, tecnología y usuario, lo que lo convierte naturalmente en el punto de convergencia de todas las preguntas, decisiones y bloqueos. Cómo identificar dónde estoy siendo un cuello de botella innecesario y cómo eliminar esas dependencias sin perder el control sobre las decisiones que realmente importan.

2. **Decir no como competencia estratégica**: El PM que no sabe decir no acaba haciendo el producto de sus stakeholders, no el producto correcto. Cómo decir no con datos y con alternativas, de forma que el stakeholder se sienta escuchado aunque no obtenga lo que pide. Los marcos (RICE, ICE, value vs. effort) como herramienta de negociación, no solo de priorización interna.

3. **Gestión de las interrupciones y las reuniones**: El PM promedio pasa el 70% de su tiempo en reuniones. Cómo auditar el calendario, qué reuniones son prescindibles, cómo hacer que las reuniones necesarias sean más cortas y efectivas, y cómo proteger bloques de tiempo para el trabajo profundo (investigación de usuario, definición de producto, análisis de datos).

4. **La ansiedad del PM: el síndrome del "todo depende de mí"**: Muchos PMs sienten una responsabilidad abrumadora por los resultados del producto aunque no controlan directamente la ejecución. Cómo gestionar esa ansiedad, dónde está realmente tu responsabilidad y dónde está la responsabilidad del equipo, y cómo construir la confianza en el equipo que te permite soltar el control micro.

5. **Límites con el equipo, los stakeholders y la dirección**: Cómo establecer límites de disponibilidad (horarios, canales de comunicación, tiempos de respuesta) sin dañar las relaciones ni la confianza del equipo. Qué expectativas gestionar desde el primer día en un nuevo rol o equipo para no acabar en la espiral de disponibilidad 24/7.

6. **Energía para lo que importa**: El trabajo de PM que más impacto tiene (investigación de usuario, decisiones de estrategia, claridad de visión) es también el que más frecuentemente se sacrifica por lo urgente. Cómo proteger tiempo y energía para el trabajo de alta palanca del PM que es lo que diferencia a los PMs buenos de los PMs medios.

Dame un sistema concreto que pueda implementar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de trabajo sostenible como PM que elimina los cuellos de botella, protege el tiempo de foco y gestiona la presión de stakeholders.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Wellbeing organizacional como estrategia de RRHH',
                'description'      => 'Más allá de los beneficios: construye un entorno de trabajo que previene el burnout y donde la gente rinde bien sin quemarse.',
                'prompt_content'   => <<<'PROMPT'
Eres una directora de People con experiencia en diseño de programas de bienestar organizacional en empresas de entre 50 y 500 personas, con enfoque en resultados de negocio reales, no en iniciativas de bienestar cosmético. Quiero que me ayudes a construir una estrategia de wellbeing que realmente prevenga el burnout y mejore el rendimiento sostenible del equipo.

**Contexto que me pedirás:**
- Tamaño y tipo de empresa y sector
- Evidencia de problema: indicadores de burnout, rotación, absentismo, o simplemente intuición de que el equipo está agotado
- Recursos disponibles (presupuesto, tiempo de RRHH, apoyo de dirección)
- Qué iniciativas de bienestar hemos probado ya y qué resultado han tenido

**La estrategia de wellbeing que quiero construir:**

1. **Diagnóstico del estado de bienestar de la organización**: Antes de diseñar ningún programa, necesito saber qué está pasando realmente. Cómo hacer un diagnóstico riguroso del estado de bienestar organizacional: qué datos analizar (absentismo, rotación por departamento, resultados de encuesta de clima), qué preguntas cualitativas hacer, y cómo identificar los departamentos o roles en mayor riesgo.

2. **Las causas organizacionales del burnout que los programas de bienestar ignoran**: Los programas de yoga, las apps de meditación y los días de salud mental no funcionan si las causas del burnout son estructurales: sobrecarga de trabajo sistémica, falta de autonomía, ambigüedad de rol, gestión deficiente o falta de reconocimiento. Cómo identificar y abordar las causas raíz, no los síntomas.

3. **El rol del manager en el bienestar del equipo**: Los estudios muestran que el manager directo es el factor más determinante en el bienestar de un empleado, por encima de los programas de la empresa. Cómo formar a los managers para que detecten señales de burnout, tengan conversaciones de bienestar sin cruzar límites y gestionen la carga de trabajo de su equipo de forma sostenible.

4. **Diseño de trabajo saludable**: El wellbeing no es solo lo que hacemos después del trabajo, es cómo diseñamos el trabajo mismo. Principios de job design que promueven el bienestar: autonomía, variedad de tareas, claridad de rol, feedback regular y posibilidad de crecimiento. Cómo aplicarlos en los roles concretos de nuestra organización.

5. **Programa de bienestar que va más allá de los beneficios**: Qué iniciativas de bienestar tienen evidencia de funcionar y cuáles son solo marketing de employer branding. La diferencia entre el bienestar reactivo (apoyo cuando alguien está mal) y el bienestar preventivo (condiciones de trabajo que evitan que la gente llegue a ese punto).

6. **Cómo medir el ROI del bienestar**: Cómo justificar la inversión en bienestar ante la dirección con métricas de negocio. La relación entre bienestar, productividad, retención y coste. Qué indicadores de leading (anticipan el burnout) medir, no solo los de lagging (miden el daño ya hecho).

Dame un plan concreto adaptado al tamaño y recursos de mi empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar una estrategia de bienestar organizacional que prevenga el burnout, mejore la retención y sea medible en términos de negocio.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas personales para profesionales de alto rendimiento',
                'description'      => 'Cómo los directivos y profesionales exitosos gestionan su patrimonio personal: ahorro, inversión y planificación a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor financiero independiente especializado en planificación patrimonial para profesionales de alto rendimiento: directivos, consultores senior, médicos especialistas, abogados de éxito y emprendedores con ingresos variables y/o elevados. Quiero que me ayudes a construir una estrategia de finanzas personales que esté a la altura de mi nivel profesional.

**Contexto que me pedirás:**
- Situación profesional y tipo de ingresos (salario fijo, variable, mixto, autónomo)
- Situación patrimonial actual (nivel de ahorro, deudas, propiedades)
- Objetivos financieros a largo plazo (independencia financiera, jubilación anticipada, apoyo a familia)
- Nivel de conocimiento financiero actual y nivel de riesgo con el que me siento cómodo

**Lo que quiero construir:**

1. **La estructura financiera del profesional de alto rendimiento**: Cómo organizar las finanzas personales cuando los ingresos son altos o variables. La separación entre cuenta operativa (gastos del mes), cuenta de ahorro (liquidez de reserva de 6-12 meses) y cuenta de inversión (capital a largo plazo). Cuánto mantener en cada uno y por qué.

2. **Tasa de ahorro y velocidad hacia la independencia financiera**: La tasa de ahorro (porcentaje de los ingresos que se ahorra) es el factor más determinante para llegar a la independencia financiera. Qué tasa de ahorro es razonable en mi situación, cómo calcular cuántos años me faltan para ser financieramente independiente y qué palancas tienen mayor impacto.

3. **Estrategia de inversión para profesionales no financieros**: Los profesionales que no son financieros necesitan una estrategia de inversión que no requiera horas de dedicación semanal. La cartera pasiva indexada como estrategia base, qué fondos indexados elegir (MSCI World, S&P 500, bonos), cuándo y cómo rebalancear, y cómo mantener la disciplina en las caídas de mercado.

4. **Fiscalidad de las inversiones**: Cómo invertir de forma fiscalmente eficiente. La diferencia entre las plusvalías a corto y largo plazo, el tratamiento fiscal de los dividendos, cómo usar los vehículos de inversión con ventaja fiscal disponibles (planes de pensiones, seguros de inversión, PIAS) y cuándo tienen sentido y cuándo no.

5. **Gestión de ingresos variables**: Los profesionales con bonus, comisiones o facturación variable tienen el riesgo de gastar a la altura de los meses buenos y no ahorrar en los malos. El sistema de gestión de ingresos variables que asegura el ahorro antes que el gasto y que protege el estilo de vida cuando los ingresos bajan.

6. **Los errores financieros del profesional exitoso**: Los errores de finanzas personales más frecuentes entre personas con buenos ingresos: el lifestyle creep (gastar todo lo que se gana), no diversificar (concentración en la empresa propia o en el inmobiliario), no tener testamento o planificación de herencia, y confundir riqueza con ingreso.

Quiero salir de esta sesión con un plan financiero personal claro y accionable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una estrategia de finanzas personales para profesionales con ingresos altos o variables: ahorro, inversión indexada y planificación a largo plazo.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Conciliación y derechos laborales para profesionales',
                'description'      => 'Los derechos que muchos profesionales desconocen: teletrabajo, desconexión digital, reducción de jornada y permisos.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado laboralista especializado en derechos de los trabajadores con experiencia en asesorar a profesionales de cuello blanco: directivos, técnicos, mandos intermedios y trabajadores cualificados. Quiero entender qué derechos laborales tengo que a menudo desconozco o no ejerzo por miedo o desconocimiento.

**Contexto que me pedirás:**
- País y tipo de contrato (indefinido, temporal, directivo)
- Si trabajas en empresa privada, pública o como autónomo
- La situación concreta que te preocupa o sobre la que quieres información
- Si hay un convenio colectivo aplicable y si lo conoces

**Los derechos que quiero entender:**

1. **Derecho a la desconexión digital**: La Ley de Teletrabajo en España reconoce el derecho a la desconexión digital fuera del horario laboral. Qué significa exactamente este derecho, qué dice la ley, qué debe hacer la empresa para garantizarlo y qué puedo hacer si mi empresa no lo respeta. La diferencia entre lo que dice la ley y lo que ocurre en la práctica.

2. **Teletrabajo y trabajo a distancia: mis derechos**: La regulación del teletrabajo: qué debe incluir el acuerdo de trabajo a distancia, qué costes debe asumir la empresa (equipamiento, conexión, parte proporcional de los suministros del hogar), y qué pasa si la empresa quiere que vuelva presencialmente después de un acuerdo de teletrabajo.

3. **Reducción de jornada y excedencias**: Cuándo tengo derecho a reducción de jornada, cómo solicitarla, qué impacto tiene en el salario y en los derechos de cotización, y si la empresa puede negarla. El derecho a excedencia voluntaria y por cuidado de familiares: plazos, condiciones y si me garantiza la reincorporación al mismo puesto.

4. **Permisos retribuidos que muchos desconocen**: Más allá de las vacaciones, qué permisos retribuidos tengo derecho a disfrutar: permiso por mudanza, por exámenes, por fallecimiento o enfermedad grave de familiares, por asuntos propios. Cómo se cuentan (días naturales vs. laborables), si el convenio mejora lo que dice el Estatuto y cómo solicitarlos correctamente.

5. **Mis derechos si la empresa cambia las condiciones**: Qué pasa si la empresa modifica sustancialmente mis condiciones de trabajo (horario, salario, funciones, lugar de trabajo). El procedimiento de modificación sustancial de condiciones de trabajo, qué opciones tengo como trabajador (aceptar, impugnar, rescindir con indemnización) y los plazos para ejercerlos.

6. **Cuando las cosas van mal: el despido y la negociación de la salida**: Qué tipos de despido existen, qué indemnización corresponde a cada uno y cómo saber si el despido es procedente o improcedente. Cómo negociar una salida voluntaria (baja incentivada) cuando la relación laboral ya no funciona, sin perder derechos innecesariamente.

Explícame todo en lenguaje claro, con referencias a la normativa cuando sea necesario.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Conocer los derechos laborales que muchos profesionales desconocen: desconexión digital, teletrabajo, reducción de jornada, permisos y despido.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Prevención del burnout en equipos de Customer Success',
                'description'      => 'El equipo de CS tiene las tasas de burnout más altas: el sistema de gestión de carga, descanso y reconocimiento que lo previene.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de Customer Success con experiencia en gestionar equipos de CS de alto rendimiento en empresas SaaS y conocimiento profundo de las causas específicas de burnout en este tipo de equipo. Quiero que me ayudes a construir un sistema que prevenga el burnout en mi equipo de CS de forma estructural, no solo con iniciativas puntuales de bienestar.

**Contexto que me pedirás:**
- Tamaño del equipo de CS y número de cuentas por CSM
- Tipo de clientes (SMB, mid-market, enterprise) y nivel de complejidad del producto
- Indicadores de burnout que ya estás observando (rotación, absentismo, bajo rendimiento, quejas del equipo)
- Qué has intentado ya para mejorar el bienestar del equipo

**Las causas específicas del burnout en CS:**

1. **La carga emocional del trabajo de CS**: Los CSMs absorben la frustración, los problemas y la urgencia de los clientes constantemente. Esta carga emocional es invisible en los reportes de actividad pero es una de las causas principales de burnout en CS. Cómo hacerla visible, cómo gestionarla a nivel individual y de equipo, y qué procesos de descarga emocional funcionan en equipos de CS de alto contacto.

2. **El problema del ratio de cuentas**: Demasiadas cuentas por CSM es la causa estructural más común de burnout en CS. Cómo calcular el ratio óptimo de cuentas por CSM según el tipo de cliente y el modelo de CS (high touch, mid touch, tech touch). Cómo justificar ante la dirección la necesidad de contratar más CSMs con datos de riesgo de retención de clientes.

3. **La ambigüedad del rol de CS**: El CSM es a menudo responsable del éxito del cliente pero sin control sobre el producto, el soporte o los recursos de implementación. Cómo definir claramente el rol de CS para reducir la frustración de la ambigüedad, qué fronteras establecer con otros departamentos y cómo manejar las situaciones en las que el CSM no puede resolver el problema del cliente.

4. **Gestión de la demanda entrante**: Las interrupciones constantes de los clientes son uno de los mayores obstáculos para el trabajo profundo y planificado de los CSMs. Cómo establecer SLAs de respuesta que gestionen las expectativas del cliente, cómo usar los canales de comunicación correctamente y cómo proteger tiempo para el trabajo de proactive success que tiene más impacto en la retención.

5. **Reconocimiento en un rol sin visibilidad**: El buen trabajo de CS es invisible cuando todo va bien: el cliente que no se va, el problema que se previno antes de que explotara. Cómo hacer visible el impacto del equipo de CS ante la dirección y ante el resto de la empresa, y cómo construir rituales de reconocimiento interno que van más allá del "gracias" en Slack.

6. **El sistema de rotación y vacaciones**: Los CSMs a menudo no descansan de verdad porque temen que sus cuentas sufran mientras están ausentes. Cómo construir un sistema de cobertura de cuentas durante las vacaciones que permita al CSM desconectar de verdad, sin que el cliente note la diferencia ni el compañero que cubre sufra una carga excesiva.

Dame un plan que pueda implementar en los próximos 90 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Prevenir el burnout en equipos de Customer Success con cambios estructurales en carga de trabajo, gestión emocional y reconocimiento.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sostenibilidad del negocio freelance a largo plazo',
                'description'      => 'Cómo construir un negocio independiente que puedes mantener décadas sin agotarte: ritmo, límites y estructura.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor especializado en el modelo de negocio freelance y en la sostenibilidad de los negocios independientes a largo plazo. Tengo un negocio freelance que funciona pero que me está costando más de lo que debería en términos de tiempo, energía y bienestar. Quiero que me ayudes a rediseñarlo para que sea sostenible no solo este año, sino durante las próximas décadas.

**Contexto que me pedirás:**
- Tipo de servicio y tiempo que llevas como freelance
- Cuántas horas trabajas de media y cuántas dedicas a gestión vs. trabajo directo para clientes
- Los aspectos del negocio que más te agotan actualmente
- Si tienes ingresos fuera del trabajo por proyecto (productos, formación, comunidad)

**Lo que quiero rediseñar:**

1. **El modelo de negocio sostenible para freelances**: Hay modelos de negocio freelance que requieren que estés siempre en máxima intensidad y otros que escalan tu capacidad sin escalar tus horas. Analiza mi modelo actual y ayúdame a entender qué palancas tengo para aumentar el valor por hora trabajada, reducir la dependencia de mi tiempo directo y crear más estabilidad de ingresos.

2. **Límites con los clientes: la habilidad más importante y menos enseñada**: Muchos freelances aceptan lo que el cliente pide porque tienen miedo de perder el contrato. Cómo establecer límites claros con los clientes desde el inicio de la relación: alcance del proyecto, horas de contacto, tiempos de respuesta, y qué pasa cuando el cliente pide más de lo acordado. Los límites que protegen la rentabilidad y los que protegen la energía.

3. **El calendario del freelance sostenible**: Cuántas horas de trabajo para clientes por semana es sostenible a largo plazo (la respuesta suele sorprender). Cómo distribuir el tiempo entre trabajo de cliente, desarrollo del negocio, aprendizaje y descanso real. El peligro de la sobrecontratación en los momentos de alta demanda y cómo evitar el ciclo de fiesta y hambre.

4. **Ingresos recurrentes para el freelance**: El trabajo por proyecto genera ingresos irregulares que son una fuente de estrés constante. Cómo construir una base de ingresos recurrentes: retainers mensuales con clientes existentes, productos digitales, formación, comunidad de pago. Qué palanca tiene más sentido en mi caso concreto y cómo construirla sin sacrificar el negocio principal.

5. **La soledad del freelance: comunidad y estructura social**: El trabajo independiente puede ser muy solitario, lo que tiene un coste en bienestar y creatividad a largo plazo. Cómo construir una red de pares, comunidades profesionales y rituales de conexión que cubran la dimensión social que el trabajo en empresa daba de forma natural.

6. **La salida planificada del freelancing: qué opciones tienes**: El freelancing no tiene que ser para siempre. Cuáles son las salidas naturales del negocio freelance cuando llega el momento: vender la cartera de clientes, convertirlo en agencia, crear un producto, o simplemente reducir la carga gradualmente hacia una semi-jubilación activa. Cómo pensar en la sostenibilidad del negocio teniendo en cuenta el largo plazo de la carrera.

Dame un plan concreto para rediseñar mi negocio freelance esta semana y en los próximos seis meses.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Rediseñar el negocio freelance para que sea sostenible a largo plazo: ritmo de trabajo, límites con clientes, ingresos recurrentes y equilibrio personal.',
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
