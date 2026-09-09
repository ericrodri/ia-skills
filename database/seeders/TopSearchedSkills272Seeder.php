<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills272Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Burnout en marketing: reconocerlo y gestionarlo antes de que sea tarde',
                'description'       => 'Desarrolla la capacidad de identificar las señales tempranas de burnout en el entorno del marketing y construye estrategias prácticas para recuperar la energía y la motivación antes de llegar al agotamiento total.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un psicólogo especializado en bienestar laboral con experiencia específica en los perfiles creativos y de alta presión como el marketing. El burnout en marketing tiene características particulares que lo hacen especialmente traicionero: la presión de resultados medibles, los ciclos de campaña sin fin, la cultura de la disponibilidad constante y la expectativa de creatividad on demand crean las condiciones perfectas para el agotamiento crónico. Necesito entender mejor el burnout en mi contexto profesional y construir estrategias de gestión reales.

**Preguntas para personalizar la estrategia:**
1. ¿Cuáles son los síntomas que estás experimentando actualmente: agotamiento físico, cinismo hacia el trabajo, sensación de ineficacia, dificultad para concentrarse, o irritabilidad creciente?
2. ¿El burnout viene principalmente del volumen de trabajo, de la falta de control sobre las decisiones, de la ambigüedad de los objetivos, o de conflictos con el equipo o la dirección?
3. ¿Estás en un rol de marketing individual contributor, de manager de equipo, o de director responsable de resultados de negocio?
4. ¿Cuánto margen tienes para cambiar tu carga de trabajo actual, o estás en una situación donde el volumen es estructuralmente fijo?

**POR QUÉ EL MARKETING ES ESPECIALMENTE VULNERABLE AL BURNOUT:**

El marketing combina varios factores de riesgo de burnout que raramente se dan juntos en otras profesiones. La responsabilidad de los resultados es alta pero el control sobre los mismos es parcial: el algoritmo cambia, el mercado se mueve, el presupuesto se recorta. La creatividad se demanda de manera constante y la creatividad on demand sin recuperación se agota igual que cualquier otro recurso. La cultura de la "siempre activa" en digital marketing y redes sociales difumina los límites entre el tiempo laboral y el personal. Y la medición constante de resultados crea un estado de evaluación permanente que es psicológicamente agotador.

**LAS FASES DEL BURNOUT Y CÓMO RECONOCERLAS ANTES DEL COLAPSO:**

El burnout no llega de golpe: tiene fases identificables que, reconocidas a tiempo, permiten intervenir antes de llegar al agotamiento completo. La fase de entusiasmo excesivo y sobre-compromiso donde la persona trabaja más horas de las sostenibles con energía aparente. La fase de estancamiento donde el trabajo ya no satisface aunque siga haciéndose bien. La fase de frustración donde emergen el cinismo y la irritabilidad. La fase de apatía donde la persona hace lo mínimo para cumplir y la creatividad se apaga. Y el colapso final donde el organismo fuerza la parada. Identificar en qué fase estás es el primer paso para intervenir de manera apropiada.

**ESTRATEGIAS DE RECUPERACIÓN A CORTO PLAZO:**

Las intervenciones de emergencia cuando el agotamiento ya es real pero no has llegado al colapso. Cómo renegociar la carga de trabajo de manera efectiva sin parecer que no puedes con el puesto. Cómo crear recuperación real dentro de la semana laboral cuando las vacaciones no son una opción inmediata. La diferencia entre el descanso que recupera (sueño, tiempo sin pantallas, actividad física) y el descanso que no recupera (series, redes sociales pasivas).

**CAMBIOS ESTRUCTURALES PARA PREVENIR LA RECAÍDA:**

El burnout que se trata solo con descanso sin cambiar las condiciones que lo generaron vuelve. Cómo identificar los factores estructurales de tu entorno de trabajo que contribuyen al agotamiento y cómo abordarlos: negociación de carga, establecimiento de límites comunicados explícitamente, identificación de las tareas de bajo valor que consumen energía sin contribuir a resultados, y cómo gestionar la presión de la dirección sin sacrificar el bienestar.

Ayúdame a construir un plan personalizado para recuperarme del agotamiento actual y para cambiar las condiciones que lo están generando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategias de recuperación y prevención del burnout adaptadas al contexto del marketing',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Bienestar del developer: sostenibilidad en una profesión de alta presión',
                'description'       => 'Aprende a construir una carrera de desarrollo sostenible que mantenga la salud física, mental y la motivación a largo plazo, equilibrando la alta demanda de la profesión con el bienestar personal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de bienestar con experiencia específica en la comunidad de desarrollo de software. El desarrollo de software es una profesión con condiciones de bienestar muy particulares: trabajo cognitivo intensivo que agota el cerebro de maneras que no siempre se reconocen como fatiga, sedentarismo estructural, cultura del crunch y del "always on", y la presión constante de mantenerse actualizado en un campo que cambia a velocidad exponencial. Necesito construir una práctica de bienestar adaptada a las realidades específicas de mi profesión.

**Preguntas para personalizar el enfoque:**
1. ¿Cuál es tu mayor desafío de bienestar actual: agotamiento mental al final del día, falta de sueño de calidad, problemas físicos relacionados con el sedentarismo, ansiedad por mantenerte actualizado, o dificultad para desconectar fuera del horario laboral?
2. ¿Trabajas en un entorno de alta presión con crunch frecuente, o el problema es más la acumulación gradual de estrés crónico bajo?
3. ¿Trabajas en remoto, en oficina, o en modelo híbrido? El entorno físico afecta mucho a las estrategias aplicables.
4. ¿Tienes una rutina de bienestar actual que intentes mantener, o estás partiendo prácticamente de cero?

**EL AGOTAMIENTO COGNITIVO Y CÓMO GESTIONARLO:**

El trabajo de programación es uno de los más cognitivamente exigentes que existen. Requiere mantener enormes volúmenes de contexto en la memoria de trabajo, cambiar entre niveles de abstracción constantemente, y mantener una atención sostenida que el cerebro no puede mantener indefinidamente sin coste. La mayoría de los developers trabajan en contra de su biología: fuerzan sesiones de concentración de muchas horas, tienen pocas pausas reales, y confunden "estar en el ordenador" con "ser productivo".

La gestión del agotamiento cognitivo no es solo descanso: es gestión activa de la carga cognitiva durante el día. Las pausas estructuradas que realmente permiten la recuperación de la atención. La alternancia de tareas de alta demanda cognitiva con tareas de menor demanda. El reconocimiento de los límites personales de concentración efectiva y el diseño del día de trabajo alrededor de esos límites, no en su contra.

**EL SEDENTARISMO Y SUS CONSECUENCIAS ESPECÍFICAS:**

El trabajo de programación lleva a un sedentarismo severo con consecuencias específicas que van más allá del riesgo cardiovascular general: problemas de espalda y cuello relacionados con la postura en pantalla, síndrome del túnel carpiano y otras lesiones por esfuerzo repetitivo, deterioro de la calidad del sueño por exposición a luz azul y por falta de actividad física, y el impacto del sedentarismo en el estado de ánimo y la energía mental. Estrategias prácticas para interrumpir el sedentarismo que sean compatibles con el flujo de trabajo de un developer.

**LA PRESIÓN DE LA ACTUALIZACIÓN CONTINUA:**

La sensación de que nunca estás suficientemente actualizado es uno de los factores de estrés más específicos de esta profesión. El campo evoluciona más rápido de lo que cualquier persona puede absorber, y eso genera una ansiedad crónica que consume energía mental aunque no se manifieste como síntoma obvio. Cómo hacer las paces con la imposibilidad de saberlo todo, cómo seleccionar qué aprender sin sentirse culpable por lo que no se aprende, y cómo construir una estrategia de aprendizaje continuo que sea motivadora en lugar de agotadora.

**LÍMITES Y DESCONEXIÓN REAL:**

La cultura de muchos equipos de desarrollo normaliza la disponibilidad fuera del horario laboral. Cómo establecer límites de disponibilidad que sean respetados, cómo gestionar las situaciones de urgencia real sin que se conviertan en la norma, y cómo lograr una desconexión real al final del día cuando el trabajo mental sigue activo.

Ayúdame a construir un plan de bienestar sostenible adaptado a las realidades específicas de mi trabajo como developer.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Plan de bienestar sostenible adaptado a las condiciones específicas del desarrollo de software',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Creatividad y bienestar: proteger la energía creativa a largo plazo',
                'description'       => 'Aprende a gestionar la energía creativa como recurso limitado, a reconocer el agotamiento creativo y a construir prácticas de recuperación que sostengan la calidad del trabajo de diseño a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un psicólogo de la creatividad y coach de bienestar con experiencia trabajando con profesionales del diseño y de las industrias creativas. El agotamiento creativo es diferente al agotamiento físico: se manifiesta como bloqueo, como indiferencia hacia el trabajo que antes apasionaba, como incapacidad de generar ideas nuevas y como sensación de que todo lo que produces está por debajo de tu estándar. Es una condición real y frecuente en los profesionales del diseño, y tiene causas específicas y estrategias de recuperación concretas. Necesito entender cómo gestionar mi energía creativa de manera sostenible.

**Preguntas para personalizar la estrategia:**
1. ¿Cuál es tu especialidad de diseño: UX/UI, diseño gráfico, diseño de producto, motion, branding u otra?
2. ¿Cómo se manifiesta el agotamiento creativo en tu caso: bloqueo para generar ideas, indiferencia hacia el trabajo, perfeccionismo paralizante, o sensación de que todo lo que produces es mediocre?
3. ¿El agotamiento creativo está relacionado con el volumen de trabajo, con la falta de variedad y retos interesantes, con clientes difíciles, o con la presión de cumplir plazos constantemente?
4. ¿Tienes prácticas actuales para recuperar energía creativa (proyectos personales, tiempo en naturaleza, exposición a arte) o han ido desapareciendo bajo la presión del trabajo?

**POR QUÉ LA CREATIVIDAD SE AGOTA Y CÓMO FUNCIONA ESE PROCESO:**

La creatividad no es una fuente inagotable: es un proceso que requiere inputs (exposición a estímulos nuevos, tiempo de reflexión no dirigida, experiencias diversas), procesamiento interno (generalmente inconsciente, que ocurre cuando el cerebro no está bajo demanda activa) y outputs (el trabajo creativo en sí). Cuando solo hay outputs y no hay inputs ni tiempo de procesamiento, la fuente se seca. La cultura del diseño de muchas organizaciones exige outputs constantes sin reconocer que los inputs y el procesamiento son parte esencial del proceso creativo, no tiempo perdido.

**SEÑALES TEMPRANAS DEL AGOTAMIENTO CREATIVO:**

Las señales de alerta que preceden al bloqueo total: la sensación de que las primeras ideas son siempre malas y que el proceso es más lento. El recurso a soluciones familiares y seguras en lugar de explorar alternativas. La pérdida de curiosidad por el trabajo de otros diseñadores. La dificultad para conectar con el contexto del usuario y la tendencia a resolver el problema técnicamente sin profundidad. La irritabilidad ante el feedback de los clientes. Reconocer estas señales a tiempo permite intervenir antes de llegar al bloqueo.

**ESTRATEGIAS DE RECUPERACIÓN CREATIVA:**

La recuperación creativa requiere estrategias diferentes a la recuperación del agotamiento físico. El descanso pasivo no recupera la creatividad: hay que alimentar la fuente. Cómo construir una práctica de inputs creativos que sea compatible con la carga de trabajo: qué tipo de exposición creativa recupera vs. qué tipo agota aún más, cómo usar el tiempo de transporte o los descansos para inputs creativos de calidad, y el valor del aburrimiento consciente como espacio de procesamiento que el cerebro necesita.

Los proyectos personales como herramienta de recuperación: cómo diseñar proyectos personales que recarguen en lugar de ser otra fuente de presión, la diferencia entre un proyecto personal que libera y uno que genera más obligaciones, y cómo proteger el espacio para ellos cuando el trabajo comercial presiona.

**DISEÑAR UN ENTORNO DE TRABAJO CREATIVO SOSTENIBLE:**

Las condiciones del entorno de trabajo que apoyan o destruyen la sostenibilidad creativa: el tipo de feedback recibido y cómo procesarlo sin que afecte a la autoestima creativa, la variedad de proyectos y cómo negociarla cuando el trabajo tiende a ser repetitivo, y los rituales de trabajo que facilitan el acceso al estado de flujo.

Ayúdame a construir un sistema de gestión de mi energía creativa que me permita sostener la calidad de mi trabajo de diseño a largo plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategias de recuperación y gestión de la energía creativa para diseñadores a largo plazo',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Resiliencia emocional en ventas: gestionar el rechazo sin quemarse',
                'description'       => 'Desarrolla la resiliencia emocional necesaria para sostener el rendimiento en ventas a largo plazo, gestionando el rechazo continuo sin que afecte a la motivación, la autoestima o la salud mental.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un psicólogo especializado en alto rendimiento y en el bienestar de profesionales de ventas. Las ventas son una de las profesiones con mayor presión emocional sostenida: el rechazo es estructural al trabajo, los resultados son públicos y medibles en tiempo real, la presión de cuota genera ansiedad crónica, y la montaña rusa emocional entre el cierre de un gran deal y una racha de pérdidas seguidas es de una intensidad que pocas profesiones igualan. La resiliencia emocional no es solo resistir: es aprender a procesar y recuperarse del rechazo de manera que no desgaste la motivación ni la identidad. Necesito construir una práctica de resiliencia adaptada a mi realidad en ventas.

**Preguntas para personalizar la estrategia:**
1. ¿Qué tipo de ventas haces: ciclo largo B2B con pocos deals grandes, ciclo corto con volumen alto, ventas consultivas de servicios, o ventas transaccionales?
2. ¿Cómo se manifiesta el impacto emocional del rechazo en tu caso: evitación de las llamadas difíciles, desmotivación después de rachas malas, necesidad de validación externa para mantener la confianza, o pensamientos rumiativos sobre deals perdidos?
3. ¿Tienes un equipo o manager que apoye activamente el bienestar emocional, o la cultura es de alta presión y poca sensibilidad al agotamiento?
4. ¿Estás experimentando el agotamiento ahora mismo o buscas herramientas preventivas para sostener el rendimiento a largo plazo?

**EL RECHAZO COMO CARACTERÍSTICA ESTRUCTURAL DEL TRABAJO DE VENTAS:**

El primer cambio cognitivo que necesita un profesional de ventas sostenible es entender el rechazo como dato, no como juicio personal. Esto es más fácil de decir que de hacer, porque el cerebro humano está programado para reaccionar al rechazo social con la misma intensidad que al peligro físico. La investigación en neurociencia muestra que el rechazo social activa las mismas vías del dolor que el dolor físico. Por eso decir "no te lo tomes personal" es un consejo inútil sin las herramientas para realmente conseguirlo.

El encuadre correcto del rechazo: un "no" no es el final de una historia, es información sobre el ajuste entre la oferta y la necesidad en ese momento específico. Los profesionales de ventas de alto rendimiento a largo plazo han desarrollado la capacidad de separar el resultado del deal de su valoración de sí mismos. Cómo construir ese desacoplamiento de manera práctica.

**LA PRESIÓN DE CUOTA Y EL ESTRÉS CRÓNICO:**

La cuota de ventas es una forma particular de estrés: es una presión que nunca desaparece completamente (cuando alcanzas la cuota del mes, ya hay una cuota nueva para el siguiente mes), y esa presión acumulada sin resolución es uno de los factores de burnout más potentes en la profesión. Cómo gestionar la ansiedad de cuota: técnicas de compartimentalización que permiten mantener la perspectiva a largo plazo cuando los números a corto plazo no van bien, estrategias de enfoque en el proceso (lo que está bajo tu control) vs. el resultado (lo que no está totalmente bajo tu control), y rutinas de cierre de día que permiten desconectar emocionalmente del trabajo.

**RECUPERACIÓN DESPUÉS DE RACHAS MALAS:**

Todos los profesionales de ventas tienen rachas malas: periodos donde nada cierra, donde las conversaciones no progresan y donde la confianza se va deteriorando. Cómo acortar esas rachas: el análisis frío de los indicadores de actividad para distinguir entre una racha de mala suerte y un problema real de ejecución, las acciones de recuperación que generan momentum a corto plazo, y cómo gestionar la presión del equipo y la dirección durante esos periodos sin que amplifique el agotamiento.

**CONSTRUIR UNA IDENTIDAD PROFESIONAL RESILIENTE:**

Los profesionales de ventas más resilientes no definen su identidad por los resultados del último mes. Han construido una narrativa sobre sí mismos que integra el ciclo de victorias y derrotas como parte natural de la profesión, y que ancla su valoración en aspectos del trabajo que están bajo su control: la calidad del proceso, el desarrollo de las relaciones, el aprendizaje continuo.

Ayúdame a desarrollar las herramientas emocionales y cognitivas para sostener el rendimiento en ventas a largo plazo sin que el rechazo destruya la motivación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Desarrollo de resiliencia emocional para gestionar el rechazo en ventas sin agotamiento',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'PM burnout: cuando llevas todo el mundo encima y nadie lo sabe',
                'description'       => 'Aprende a identificar el burnout específico del product manager, que emerge de la responsabilidad sin autoridad directa, y construye estrategias para gestionarlo sin comprometer ni la salud ni el producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un psicólogo organizacional con experiencia en el bienestar de profesionales de producto y liderazgo. El burnout del product manager tiene una naturaleza particular que lo hace especialmente difícil de gestionar: la responsabilidad del éxito del producto es máxima pero la autoridad directa sobre los equipos que lo construyen es mínima. El PM es el punto de convergencia de las demandas de todos los stakeholders (la dirección, el equipo de ingeniería, el diseño, el marketing, ventas, los clientes) sin tener poder jerárquico sobre ninguno de ellos. Este desequilibrio entre responsabilidad y control es una de las recetas más seguras para el burnout crónico. Necesito entender mejor cómo gestionar esta presión específica.

**Preguntas para personalizar el enfoque:**
1. ¿Cuál es la fuente principal de presión actualmente: la presión de la dirección por resultados, la fricción con el equipo de ingeniería por el backlog, los stakeholders con demandas conflictivas, o la sensación de que el producto no avanza lo suficientemente rápido?
2. ¿El burnout se manifiesta como agotamiento físico, como cinismo hacia el trabajo o los stakeholders, como sensación de ineficacia a pesar de trabajar mucho, o como los tres a la vez?
3. ¿Tienes apoyo de tu manager o estás gestionando la presión sin una red de apoyo?
4. ¿Eres el único PM del equipo o hay un equipo de producto con el que puedas compartir la carga?

**EL DESEQUILIBRIO RESPONSABILIDAD-CONTROL COMO RAÍZ DEL PM BURNOUT:**

El modelo de Karasek sobre el estrés laboral establece que el burnout emerge específicamente del desequilibrio entre alta demanda y bajo control. El product manager vive permanentemente en esa zona: se le pide que entregue resultados de negocio ambiciosos, pero no controla los tiempos de desarrollo, no puede obligar a nadie a implementar su visión, y no decide el presupuesto. La presión viene de arriba, de abajo y de todos los lados, y el PM absorbe esa presión como interface entre todos los sistemas. Reconocer este patrón estructural es el primer paso para gestionarlo.

**GESTIONAR LAS DEMANDAS CONFLICTIVAS SIN COLAPSARSE:**

Cada stakeholder tiene una perspectiva legítima y una demanda que considera urgente. La dirección quiere más velocidad, el equipo de ingeniería quiere más tiempo para hacerlo bien, ventas quiere las features que prometió a los clientes, y los usuarios quieren soluciones a sus problemas reales. Cómo gestionar esas demandas conflictivas sin absorber el coste emocional de cada conversación difícil, cómo decir no a stakeholders poderosos sin que esa conversación consuma energía durante días, y cómo construir los marcos de priorización que despersonalizan las decisiones difíciles.

**LOS LÍMITES EN UN ROL SIN LÍMITES:**

El PM es el trabajo ideal para alguien que no sabe poner límites: siempre hay algo más que hacer, siempre hay una conversación pendiente, siempre hay un stakeholder que quiere tiempo. Cómo construir límites de disponibilidad reales en un rol donde la expectativa cultural es la disponibilidad total, cómo proteger el tiempo de trabajo profundo necesario para la calidad del pensamiento de producto, y cómo gestionar la culpa de no estar siempre disponible.

**RECUPERACIÓN Y RECONSTRUCCIÓN:**

Si el burnout ya es real, cómo recuperarse sin perder el trabajo: cómo negociar temporalmente la carga, cómo identificar las tareas de PM que consumen energía sin aportar valor y delegar o eliminarlas, y cómo reconstruir la motivación cuando el producto que alguna vez fue emocionante se ha convertido en una fuente de agotamiento.

Ayúdame a construir un plan para gestionar la presión específica del rol de PM y para recuperar el equilibrio entre la responsabilidad del producto y mi bienestar personal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategias para gestionar el burnout específico del product manager con responsabilidad sin autoridad',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Salud mental en el trabajo: políticas y prácticas que hacen la diferencia',
                'description'       => 'Aprende a diseñar e implementar políticas y prácticas de salud mental en el entorno laboral que sean genuinamente efectivas, más allá de los programas de bienestar superficiales que no cambian nada.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en psicología organizacional y bienestar en el trabajo con experiencia en el diseño e implementación de programas de salud mental en empresas. La salud mental en el trabajo se ha convertido en un tema prioritario, pero la mayoría de las organizaciones responden con medidas cosméticas: un día de bienestar al año, un descuento en una app de meditación, y un taller de gestión del estrés que no cambia ninguna de las condiciones que generan ese estrés. Necesito diseñar e implementar prácticas de salud mental que impacten de verdad en la experiencia de las personas.

**Preguntas para personalizar el diseño:**
1. ¿Cuál es el tamaño de tu organización: startup pequeña, empresa mediana o gran corporación?
2. ¿Cuáles son los principales indicadores de problema de salud mental que observas actualmente: absentismo, alta rotación, bajo rendimiento, conflictos frecuentes, o encuestas de satisfacción que reflejan malestar?
3. ¿Tienes el apoyo de la dirección para implementar cambios reales en las condiciones de trabajo, o el mandato es solo implementar programas que no toquen la estructura?
4. ¿Hay recursos presupuestarios disponibles o buscas estrategias de bajo coste pero alto impacto?

**POR QUÉ LA MAYORÍA DE LOS PROGRAMAS DE BIENESTAR NO FUNCIONAN:**

Los programas de bienestar corporativo fracasan porque confunden los síntomas con las causas. Ofrecer clases de yoga a empleados que trabajan 60 horas semanales no resuelve el problema: en el mejor caso da a algunos empleados una hora de alivio en una semana de agotamiento. Las investigaciones sobre bienestar organizacional son claras: los factores que más impactan en la salud mental son las condiciones de trabajo, no los programas de apoyo. La carga de trabajo razonable, la claridad de los objetivos, el control sobre el propio trabajo, las relaciones con managers y compañeros, y el sentido de propósito son los determinantes reales del bienestar.

**LO QUE REALMENTE MUEVE LA AGUJA:**

Las políticas de carga de trabajo real: cómo establecer normas organizacionales sobre las horas de trabajo, la disponibilidad fuera del horario y el tiempo de descanso que sean respetadas en la práctica y no solo en el papel. El impacto de la calidad del management en la salud mental de los equipos: los managers son el factor individual más determinante del bienestar de las personas, y invertir en la calidad del management es la intervención de mayor retorno. La psicología de la seguridad: el entorno donde las personas se sienten seguras de decir lo que piensan, de admitir errores y de pedir ayuda es el que mejor protege la salud mental.

**PROGRAMAS DE APOYO QUE SÍ FUNCIONAN:**

Los programas de Employee Assistance Program (EAP) bien implementados con psicólogos accesibles de verdad. Las políticas de baja por salud mental sin estigma. Los espacios de conversación sobre bienestar que no son performativos. La formación de managers para identificar y responder apropiadamente a las señales de malestar en sus equipos. Cómo diseñar cada uno de estos elementos de manera que sean usados de verdad y no se queden en papel mojado.

**MEDIR EL IMPACTO REAL:**

Los indicadores de salud mental que son útiles para RRHH: más allá del absentismo (que es un indicador tardío), qué medir en las encuestas de clima, cómo hacer entrevistas de salida que capturan el bienestar como factor, y cómo usar esos datos para iterar las políticas.

Ayúdame a diseñar un programa de salud mental en el trabajo que aborde tanto las condiciones estructurales como los programas de apoyo, con un plan de implementación realista.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño e implementación de políticas y prácticas de salud mental realmente efectivas en el trabajo',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Estrés financiero en el trabajo: gestionar la presión del rol financiero',
                'description'       => 'Aprende a gestionar el estrés específico del rol financiero, donde la responsabilidad sobre los números de la empresa genera una presión sostenida con características únicas que requieren estrategias de gestión específicas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un psicólogo especializado en estrés laboral con experiencia trabajando con profesionales del ámbito financiero. El estrés en los roles financieros tiene características únicas que lo diferencian del estrés en otras profesiones: la responsabilidad sobre los números de la empresa es tangible y medible, los errores tienen consecuencias directas y visibles, la presión de los ciclos de cierre (mensual, trimestral, anual) es estructural e inamovible, y existe una tensión frecuente entre la integridad financiera y las presiones de la dirección para mostrar mejores resultados. Necesito desarrollar estrategias de gestión del estrés adaptadas a las realidades de mi rol.

**Preguntas para personalizar el enfoque:**
1. ¿Cuál es tu rol: CFO, controller, analista financiero, contable, auditor u otro?
2. ¿La principal fuente de estrés son los cierres de período, las presiones de la dirección, la responsabilidad legal y regulatoria, la complejidad del trabajo, o las relaciones con otros departamentos?
3. ¿Trabajas en un entorno donde la cultura financiera es de alta presión y pocas vacaciones en períodos de cierre, o hay más equilibrio?
4. ¿El estrés se manifiesta principalmente durante los períodos de cierre o es un estrés constante durante todo el año?

**LAS FUENTES ESPECÍFICAS DE ESTRÉS EN LOS ROLES FINANCIEROS:**

La responsabilidad de la exactitud: en la mayoría de los trabajos un error se puede corregir sin grandes consecuencias. En finanzas, un error puede tener consecuencias legales, regulatorias o de negocio significativas. Esa conciencia de que la exactitud importa de verdad crea una presión de atención sostenida que es cognitivamente agotadora. La gestión de esta presión no es eliminarla (la exactitud sí importa) sino construir sistemas y procesos que reduzcan el riesgo de error y, por tanto, reduzcan la ansiedad que viene con esa responsabilidad.

Los ciclos de cierre como fuente de estrés estructural: los cierres de período son picos de trabajo predecibles pero inevitables. La mayoría de los profesionales financieros los viven con los mismos niveles de estrés año tras año sin haber construido estrategias para gestionarlos mejor. Cómo prepararse para los cierres de manera que reduzcan el estrés: distribución anticipada de la carga, automatización de procesos recurrentes, y gestión de las expectativas de los stakeholders sobre los tiempos.

**LA TENSIÓN ENTRE INTEGRIDAD Y PRESIÓN DE LA DIRECCIÓN:**

Una de las fuentes de estrés más específicas y poco discutidas en los roles financieros es la presión de la dirección para presentar los números de la manera más favorable posible, a veces en tensión con la exactitud o la normativa. Cómo gestionar esas situaciones sin comprometer la integridad profesional y sin que el coste emocional de esa tensión sea insostenible. Cuándo es una presión razonable de interpretación contable legítima y cuándo cruza la línea a algo que requiere una conversación difícil.

**ESTRATEGIAS DE RECUPERACIÓN ENTRE CICLOS:**

Los períodos entre cierres son la oportunidad de recuperación que muchos profesionales financieros no aprovechan porque la cultura del rol los llena de trabajo que "hay que adelantar". Cómo usar esos períodos para recuperación real: qué tipo de actividades permiten la recuperación del agotamiento cognitivo acumulado, y cómo proteger el tiempo de recuperación sin que la conciencia de la próxima fecha de cierre lo sabotee.

Ayúdame a construir un sistema de gestión del estrés adaptado a las realidades específicas de mi rol financiero y a los ciclos de trabajo de mi posición.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestión del estrés específico del rol financiero con estrategias adaptadas a sus ciclos y presiones únicas',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Burnout en la abogacía: un problema sistémico con soluciones prácticas',
                'description'       => 'Comprende las causas estructurales del burnout en la profesión jurídica y desarrolla estrategias prácticas de prevención y recuperación adaptadas a las realidades únicas de la práctica del derecho.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un psicólogo especializado en bienestar de profesionales del derecho con experiencia en el análisis de las condiciones de la práctica jurídica y sus consecuencias en la salud mental. El burnout en la abogacía es un problema de proporciones epidémicas, con estudios que muestran consistentemente que los abogados tienen tasas de depresión, ansiedad, abuso de sustancias y burnout significativamente más altas que la media de la población. No es un problema de individuos frágiles: es un problema sistémico enraizado en la cultura y las condiciones estructurales de la profesión. Necesito entender las causas reales y construir estrategias de gestión que funcionen en el contexto real del trabajo legal.

**Preguntas para personalizar el enfoque:**
1. ¿Trabajas en un despacho (grande, mediano o pequeño), en el in-house de una empresa, en la administración pública, o ejerces como abogado independiente?
2. ¿Cuál es el área de práctica: litigación, corporativo, M&A, laboral, penal, familia, administrativo u otra? El área determina mucho el perfil de estrés.
3. ¿Cuáles son las principales fuentes de agotamiento actual: las horas de trabajo, la presión de los plazos judiciales, los clientes difíciles, la cultura interna del despacho, la facturación de horas, o la complejidad emocional de algunos asuntos?
4. ¿Eres asociado/a bajo presión de un partnership, socio/a con responsabilidades propias, o estás en otro momento de la carrera?

**LAS CAUSAS ESTRUCTURALES DEL BURNOUT JURÍDICO:**

El modelo de facturación por horas es una máquina generadora de burnout: incentiva el tiempo invertido en lugar del valor creado, hace que el descanso se viva como pérdida económica, dificulta la delegación porque toda hora delegada es una hora que no se factura a tu nombre, y crea una cultura donde la presencia y la disponibilidad son señales de compromiso. Es un sistema que premia el agotamiento.

La cultura de adversarialidad de la profesión: el litigante vive en un estado de alerta y preparación para el conflicto que no desaparece completamente al salir de los juzgados. La mente litigante que busca los argumentos contrarios, anticipa los riesgos y never lowers its guard es una mente que no descansa fácilmente. Esa hipervigilancia tiene un coste cognitivo y emocional que se acumula.

La responsabilidad por las consecuencias de los clientes: en pocas profesiones las decisiones tienen las consecuencias que tienen en el derecho. Un error puede costarle a un cliente millones, la libertad, o un negocio de por vida. Esa responsabilidad no se puede desconectar al salir del despacho, y la ansiedad que genera es una de las fuentes de estrés más específicas de la profesión.

**ESTRATEGIAS PRÁCTICAS DENTRO DE LAS RESTRICCIONES DE LA PROFESIÓN:**

El bienestar en la abogacía tiene que ser compatible con las realidades de la profesión: los plazos judiciales no se negocian, los clientes en crisis necesitan respuesta, y la cultura de muchos despachos no va a cambiar de un día para otro. Cómo construir prácticas de bienestar que funcionen dentro de esas restricciones reales.

La gestión de la energía vs. la gestión del tiempo: los abogados son maestros de la gestión del tiempo (toda hora cuenta) pero raramente piensan en la gestión de la energía. Cómo identificar las actividades que drenan energía de manera desproporcionada y las que la recuperan, y cómo diseñar la semana para alternarlas de manera que la energía disponible sea más sostenible.

La conversación difícil sobre límites con los clientes: cómo comunicar los límites de disponibilidad a clientes que esperan respuesta inmediata sin comprometer la relación ni perder el asunto.

Ayúdame a construir un plan de bienestar adaptado a las realidades estructurales de mi práctica jurídica, con estrategias que pueda implementar sin esperar a que cambie la cultura de la profesión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategias de prevención y recuperación del burnout adaptadas a las condiciones estructurales de la abogacía',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión emocional en CS: cuando el cliente te afecta más de lo que debería',
                'description'       => 'Aprende a gestionar el impacto emocional de las interacciones con clientes difíciles en customer success, protegiendo la salud mental del equipo sin sacrificar la calidad del servicio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un psicólogo especializado en bienestar de profesionales de atención al cliente y customer success. El trabajo con clientes tiene un coste emocional real y poco reconocido: la empatía que hace buenos a los profesionales de CS es la misma que los hace vulnerables al agotamiento emocional. Absorber las frustraciones, los miedos y a veces la hostilidad de los clientes de manera constante, manteniendo siempre una actitud de servicio, es un trabajo emocional intenso que tiene consecuencias en la salud mental si no se gestiona bien. Necesito construir estrategias para gestionar el impacto emocional del trabajo con clientes sin dejar de ser un profesional de CS de calidad.

**Preguntas para personalizar las estrategias:**
1. ¿Cuál es el tipo de interacción con clientes que más te afecta emocionalmente: los clientes agresivos o irrespetuosos, los clientes en situación de crisis o emergencia, las quejas sobre problemas que no puedes resolver, o los clientes que culpan al servicio de problemas que no son responsabilidad tuya?
2. ¿El agotamiento emocional es inmediato (sales de una llamada difícil muy afectado) o es acumulativo (con el tiempo las interacciones te afectan más)?
3. ¿Tienes un sistema personal para recuperarte después de interacciones difíciles o acumulas el impacto sin procesarlo?
4. ¿Tu manager o la cultura del equipo reconoce el coste emocional del trabajo o se espera que lo absorbas sin mencionarlo?

**EL TRABAJO EMOCIONAL Y SUS CONSECUENCIAS:**

Arlie Hochschild definió el trabajo emocional como la gestión de los propios sentimientos para crear una expresión facial y corporal observable públicamente. En el contexto del CS, esto significa mantener un tono paciente y empático independientemente de cómo te esté tratando el cliente, lo que requiere un esfuerzo activo de supresión o modificación de las emociones propias. Cuando ese esfuerzo es constante y sin recuperación, lleva al agotamiento emocional, que es uno de los tres componentes del burnout.

La diferencia entre empatía sostenible y empatía que agota: la empatía cognitiva (entender lo que siente el cliente) es compatible con el bienestar a largo plazo; la empatía emocional (sentir lo que siente el cliente) sin distancia puede ser agotadora en los contextos de alta intensidad emocional. Cómo mantener la calidad del servicio usando empatía cognitiva cuando la empatía emocional ya está agotada.

**TÉCNICAS DE GESTIÓN DEL IMPACTO EMOCIONAL EN TIEMPO REAL:**

Las técnicas para mantenerse presente y funcional durante una interacción difícil sin que la experiencia emocional del cliente te desborde: la distancia compasiva, el anclaje en el proceso, la respiración como regulador del sistema nervioso, y el reencuadre cognitivo de la hostilidad del cliente.

Qué hacer inmediatamente después de una interacción difícil para procesar el impacto antes de atender al siguiente cliente: los rituales de transición que permiten la recuperación entre interacciones, la importancia de no pasar de una llamada difícil directamente a la siguiente sin ningún espacio de recuperación.

**PROTEGER LA EMPATÍA A LARGO PLAZO:**

La empatía no es un recurso infinito: se puede agotar. La compasion fatigue (agotamiento por compasión) es un fenómeno real en profesiones de alta exposición al sufrimiento ajeno. Cómo construir una práctica de autocuidado que proteja la capacidad de empatía a largo plazo: qué actividades de recuperación son más efectivas para el agotamiento emocional (a diferencia del físico o cognitivo), y cómo saber cuándo necesitas hablar de las experiencias difíciles con alguien.

Ayúdame a construir un sistema de gestión emocional que me permita hacer un trabajo de CS de calidad durante años sin quemarme en el proceso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Técnicas de gestión emocional para profesionales de CS expuestos continuamente a clientes difíciles',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Bienestar del freelance: construir un negocio que no te destruya',
                'description'       => 'Aprende a construir un negocio freelance sostenible que proteja tu salud física y mental, con estrategias adaptadas a los desafíos únicos de trabajar de forma independiente sin las estructuras de apoyo del empleo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach especializado en el bienestar de profesionales independientes y trabajadores autónomos. El trabajo freelance tiene una relación particular con el bienestar: la libertad y la autonomía que lo hacen atractivo son las mismas características que, sin las estructuras correctas, pueden generar un nivel de estrés crónico que el trabajo por cuenta ajena raramente produce. La incertidumbre de ingresos, la soledad, la dificultad para desconectar cuando la oficina está en casa, y la ausencia de redes de apoyo institucionales son factores de riesgo reales que muchos freelances descubren demasiado tarde. Necesito construir un modelo de trabajo freelance que sea sostenible a largo plazo.

**Preguntas para personalizar las estrategias:**
1. ¿Llevas cuánto tiempo como freelance y cuál fue tu principal motivación: huir de un entorno laboral tóxico, buscar más libertad, ganar más dinero, o compatibilizar con otras responsabilidades vitales?
2. ¿Cuáles son los principales desafíos de bienestar actuales: la incertidumbre de ingresos, la dificultad para desconectar, la soledad, la gestión del tiempo sin estructura, o el miedo a rechazar clientes aunque el trabajo no sea bueno para ti?
3. ¿Trabajas desde casa o desde un espacio compartido (coworking, cafeterías)? La respuesta afecta enormemente las estrategias de bienestar aplicables.
4. ¿Tienes una vida social activa fuera del trabajo que compense el aislamiento del freelance, o tu red social principal era la oficina y desde que eres autónomo se ha reducido?

**LOS RIESGOS DE BIENESTAR ESPECÍFICOS DEL FREELANCE:**

La incertidumbre de ingresos es el factor de estrés más distintivo del freelance. A diferencia del empleado que sabe lo que cobra el primer día de cada mes, el freelance vive en un estado de incertidumbre que el sistema nervioso procesa como amenaza permanente. Esa amenaza crónica de bajo nivel consume energía mental de manera constante aunque no sea consciente, y es uno de los factores que más contribuye al agotamiento a medio plazo.

La trampa del siempre disponible: el freelance que teme perder clientes tiene una tendencia natural a estar siempre disponible, a responder mensajes a cualquier hora, y a aceptar urgencias que los empleados en las mismas condiciones rechazarían. Esa disponibilidad total destruye los límites entre tiempo laboral y personal y es incompatible con el bienestar a largo plazo.

La soledad como factor de salud: la salud mental está fuertemente correlacionada con la calidad de las conexiones sociales. El empleado tiene conexión social estructurada con su equipo; el freelance tiene que construirla activamente. Sin esa construcción activa, la soledad del trabajo independiente puede convertirse en un factor de riesgo real para la salud mental.

**ESTRUCTURAS DE BIENESTAR PARA EL FREELANCE:**

La estructura temporal: cómo crear rutinas diarias y semanales que proporcionen la predictibilidad que el empleo da de manera natural y que el cerebro necesita para funcionar bien. Los horarios de trabajo explícitos, las rutinas de inicio y cierre del día, y los rituales de transición entre el tiempo de trabajo y el tiempo personal.

La estructura financiera como base de bienestar: cómo construir los colchones financieros y los sistemas de gestión del dinero que reducen la ansiedad de la incertidumbre de ingresos. El fondo de emergencia de meses de gastos fijos, la separación entre las cuentas personal y profesional, y la planificación fiscal que elimina las sorpresas. La ansiedad financiera es tratable con organización y no solo con más ingresos.

La construcción de comunidad: cómo crear la conexión social que el trabajo independiente no proporciona de forma automática. Los grupos de freelances, los coworkings, las comunidades online de especialidad, y el mantenimiento activo de relaciones profesionales son formas de construir esa red que protege tanto el bienestar como el negocio.

**SABER CUÁNDO DECIR NO:**

La capacidad de rechazar trabajo que no es bueno para ti (clientes difíciles, proyectos por debajo de tu precio, plazos imposibles) es la habilidad de bienestar más importante del freelance y también la más difícil de ejercitar cuando la incertidumbre de ingresos activa el miedo. Cómo construir la confianza para rechazar trabajo inadecuado y cómo crear las condiciones financieras que hacen esa confianza posible.

Ayúdame a construir un modelo de trabajo freelance sostenible con las estructuras de bienestar que compensen las ausencias del trabajo por cuenta ajena.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategias de bienestar sostenible adaptadas a los desafíos únicos del trabajo freelance independiente',
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
