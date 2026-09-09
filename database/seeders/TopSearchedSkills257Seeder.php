<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills257Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Deep work para marketers: crear sin interrupciones en el mundo del ruido',
                'description'       => 'Aplica los principios del trabajo profundo al marketing para producir el contenido estratégico de mayor calidad en menos tiempo, protegiendo las horas de máxima concentración del ruido del entorno.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de productividad especializado en profesionales creativos y de marketing, con experiencia en la aplicación de los principios del deep work de Cal Newport en entornos de marketing digital donde las interrupciones son constantes y la cultura de la respuesta inmediata es la norma. Quiero aprender a trabajar en profundidad como marketer para producir el trabajo de mayor calidad y mayor impacto sin que las demandas del día a día fragmenten mi capacidad creativa y estratégica.

**Preguntas iniciales:**
1. ¿Cuál es el tipo de trabajo de mayor valor que produces como marketer y que requiere concentración profunda (estrategia, contenido long-form, análisis, planificación de campañas)?
2. ¿Cuántas interrupciones recibes de media en una jornada de trabajo (Slack, emails, reuniones, solicitudes ad hoc)?
3. ¿Cuántas horas de concentración sin interrupciones produces actualmente en un día normal?
4. ¿Trabajas en remoto, en oficina o en un modelo híbrido?

**EL PROBLEMA DE ATENCIÓN DEL MARKETER:**

LA TRAMPA DE LA REACTIVIDAD
El marketer moderno vive en un estado de reactividad permanente: monitorizando las métricas en tiempo real, respondiendo a los comentarios de redes sociales, atendiendo las solicitudes de ventas y stakeholders y apagando los fuegos que genera el día a día. Este estado de reactividad es incompatible con el trabajo creativo y estratégico de alta calidad. Cuando el cerebro está constantemente interrumpido, no puede alcanzar el nivel de concentración que produce el trabajo verdaderamente bueno. Ayúdame a diagnosticar el nivel de fragmentación de mi jornada actual y a identificar cuánto trabajo de alta calidad estoy perdiendo como resultado.

LA ILUSIÓN DE LA MULTITAREA
En marketing es especialmente tentador intentar hacer varias cosas a la vez: lanzar una campaña mientras contestas emails mientras revisas las métricas. La neurociencia es clara: la multitarea no existe. Lo que hacemos es cambiar de tarea rápidamente y cada cambio tiene un coste cognitivo (el residuo de atención) que degrada la calidad de todo lo que sigue. Ayúdame a entender el impacto concreto de la multitarea en la calidad de mi trabajo creativo y estratégico y a construir el argumento para reducirla de manera sistemática.

**DISEÑAR EL ENTORNO PARA EL DEEP WORK EN MARKETING:**

IDENTIFICAR EL TRABAJO QUE MERECE CONCENTRACIÓN PROFUNDA
No todo el trabajo de marketing requiere deep work. El contenido estratégico, la planificación de campañas, el análisis de datos complejo, la escritura de textos de marca y la definición de posicionamiento sí lo requieren. El scheduling de posts, la gestión de comentarios, las reuniones de alineación y la revisión de métricas rutinarias no. Ayúdame a clasificar mis tareas de marketing por el nivel de concentración que requieren y a construir el calendario que asigna el tiempo correcto a cada tipo de tarea.

PROTEGER LAS HORAS DE MÁXIMA ENERGÍA CREATIVA
Cada persona tiene un cronotipo que determina cuándo su cerebro está en su mejor momento para el trabajo creativo y estratégico. El error más común del marketer es usar esas horas de máxima energía en reuniones y emails, dejando el trabajo creativo para cuando ya está mentalmente agotado. Ayúdame a identificar mis horas de máxima energía creativa y a diseñar el sistema de protección de esas horas: cómo configurar la disponibilidad del calendario, cómo comunicar la política de disponibilidad a los colegas y cómo gestionar las expectativas de respuesta inmediata.

RITUALES DE ENTRADA AL ESTADO DE CONCENTRACIÓN
El estado de concentración profunda no se activa instantáneamente; requiere un ritual de entrada que prepare el cerebro para el trabajo profundo. Ayúdame a diseñar mi ritual de entrada al deep work: la preparación del entorno físico, el silenciamiento de todas las notificaciones, el elemento de inicio que indica al cerebro que empieza el tiempo de concentración (una música específica, una frase de intención, un temporizador) y la duración óptima del bloque de concentración.

**ESTRATEGIAS ESPECÍFICAS PARA MARKETING:**

BATCHING DEL TRABAJO CREATIVO
El batching consiste en agrupar las tareas del mismo tipo en un único bloque de tiempo para reducir el cambio de contexto. Para el marketer, el batching del contenido es especialmente potente: escribir todos los posts de la semana en una sesión, producir todos los emails del mes en un día específico, preparar todos los informes en la misma mañana. Ayúdame a diseñar el sistema de batching para los tipos de trabajo creativo que produzco con más frecuencia.

GESTIÓN DE LAS HERRAMIENTAS SOCIALES SIN QUE CONSUMAN EL DÍA
Para el marketer, las redes sociales son una herramienta de trabajo, pero también una fuente infinita de distracción. Ayúdame a establecer el sistema de uso de redes sociales en el trabajo que me permite hacer el trabajo de gestión de comunidad de manera eficiente sin que las redes fragmenten el resto de la jornada: las ventanas de tiempo para la gestión de social media, las herramientas de programación que separan la creación del publishing y los límites de tiempo en las plataformas.

**MEDIR EL PROGRESO:**

CÓMO SABER SI EL DEEP WORK ESTÁ FUNCIONANDO
Los beneficios del deep work para el marketer se miden tanto en la calidad del output como en la cantidad. Ayúdame a establecer las métricas que me dicen que el sistema está funcionando: las horas de trabajo profundo por semana, la calidad percibida del trabajo creativo producido, la velocidad de producción de contenido estratégico y el impacto en las métricas de negocio del trabajo que produzco cuando estoy verdaderamente concentrado.

Dame el plan concreto para implementar el deep work en mi trabajo de marketing, incluyendo el rediseño de la jornada, los rituales de concentración y el sistema de gestión de las interrupciones que inevitablemente vendrán.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Implementar el trabajo profundo en el día a día del marketer para producir trabajo de mayor calidad estratégica',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Flow state del developer: entrar en zona y proteger el tiempo de codificación',
                'description'       => 'Diseña tu jornada para entrar en estado de flujo de manera consistente, proteger los bloques de codificación profunda y defender tu tiempo de los enemigos del flow del developer.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en productividad del developer y en la psicología del estado de flujo (flow state) aplicada al trabajo de programación. Quiero aprender a entrar en estado de flujo de manera más consistente, mantenerlo durante más tiempo y proteger mis bloques de codificación profunda de las interrupciones que lo destruyen. Ayúdame a diseñar el sistema de trabajo que maximiza el tiempo de alta calidad que paso escribiendo código.

**Preguntas iniciales:**
1. ¿Cuál es el tipo de trabajo de codificación en el que entras más fácilmente en estado de flujo (algoritmos, nuevas features, refactorización, debugging)?
2. ¿Cuáles son las interrupciones más frecuentes que rompen tu concentración (Slack, reuniones, pull requests, preguntas de colegas)?
3. ¿Trabajas en remoto, en oficina o híbrido? ¿El entorno físico es un problema?
4. ¿Cuántas horas de codificación profunda y sin interrupciones produces actualmente en un día normal?

**LA PSICOLOGÍA DEL FLOW STATE EN PROGRAMACIÓN:**

QUÉ ES EL ESTADO DE FLUJO Y POR QUÉ IMPORTA PARA EL DEVELOPER
El estado de flujo en programación es ese estado de concentración total donde el tiempo parece pasar más rápido, los problemas se resuelven con una claridad inusual y el código fluye con una calidad que raramente se alcanza en condiciones normales. Los estudios sobre la productividad de los programadores muestran que en estado de flujo se produce entre 5 y 10 veces más código de calidad que en estado de trabajo fragmentado. El problema es que el flow state es delicado: una interrupción de dos minutos puede costar 15-30 minutos de recuperación del contexto mental. Ayúdame a entender las condiciones que facilitan el flujo en mi caso concreto.

LAS CONDICIONES DEL FLUJO EN PROGRAMACIÓN
El estado de flujo requiere unas condiciones específicas: la tarea debe tener la dificultad correcta (ni demasiado fácil que aburra, ni demasiado difícil que genere ansiedad), debes tener objetivos claros de lo que quieres conseguir en la sesión, el entorno debe estar libre de interrupciones y debes haber eliminado las decisiones no técnicas que fragmentan la atención. Ayúdame a evaluar mis sesiones de trabajo recientes: cuántas veces he alcanzado el flujo, cuánto ha durado y qué lo ha interrumpido.

**DISEÑAR LA JORNADA DEL DEVELOPER PARA EL FLUJO:**

LOS BLOQUES DE CODIFICACIÓN PROFUNDA
El bloque de codificación profunda es el núcleo de la jornada del developer de alto rendimiento. Para la mayoría de los developers, el bloque óptimo es de 90 a 120 minutos, que corresponde a los ciclos ultradianos naturales del cerebro. Ayúdame a diseñar mis bloques de codificación profunda: el número de bloques por día, su duración, cuándo los programo según mi cronotipo y los límites no negociables que los protegen (sin reuniones, sin Slack, sin interrupciones).

LA RUTINA DE PREPARACIÓN ANTES DEL BLOQUE
Entrar en el flujo no es instantáneo. Los mejores developers tienen una rutina de preparación que prepara el cerebro para la concentración profunda: revisar el objetivo de la sesión (qué quiero tener terminado al final del bloque), preparar el contexto de código (abrir los archivos relevantes, leer el código del entorno del problema a abordar), silenciar todas las notificaciones y hacer la transición mental del modo reactivo al modo de trabajo profundo. Ayúdame a diseñar mi rutina de preparación personalizada.

EL SISTEMA DE GESTIÓN DE CONTEXTO
Uno de los mayores costes cognitivos del trabajo del developer es la pérdida de contexto: cuando vuelves a un problema después de una interrupción, tienes que reconstruir el estado mental del código en tu cabeza. Ayúdame a construir el sistema de gestión de contexto que minimiza ese coste: las notas de cierre de sesión que capturo antes de cada interrupción (dónde estoy, qué estaba intentando hacer, cuál era el siguiente paso), el sistema de comentarios en el código que preserva el pensamiento en progreso y el ritual de entrada que reconstruye el contexto al retomar el trabajo.

**DEFENDER EL TIEMPO DE CODIFICACIÓN:**

LAS REUNIONES: EL MAYOR ENEMIGO DEL FLOW DEL DEVELOPER
Las reuniones son el principal fragmentador del tiempo del developer. Una reunión de una hora no cuesta una hora; cuesta la hora de la reunión más el tiempo de recuperación del contexto antes y después. El developer de alto rendimiento negocia activamente la estructura de reuniones para proteger sus bloques de codificación. Ayúdame a diseñar la estrategia de gestión de reuniones: cómo agrupas las reuniones en días o franjas horarias específicas, cómo comunicas tu política de disponibilidad al equipo y cómo rechazas o reestructuras las reuniones que fragmentan innecesariamente el tiempo de codificación.

GESTIÓN DE SLACK Y COMUNICACIÓN ASÍNCRONA
Slack es el segundo mayor enemigo del flow state del developer. La cultura de la respuesta inmediata en Slack convierte la jornada del developer en una serie de microinterrupciones que hacen imposible el trabajo profundo. Ayúdame a establecer el sistema de gestión de Slack que protege el flujo: las franjas de revisión de mensajes, la configuración de notificaciones que solo interrumpen para lo verdaderamente urgente, cómo comunicar los tiempos de respuesta esperados y cómo educar al equipo sobre la diferencia entre urgente e importante.

LA CULTURA DE EQUIPO Y EL RESPETO AL FLUJO
El problema del flow state no es solo individual; es cultural. Si el equipo no entiende el valor del flujo del developer, las interrupciones seguirán. Ayúdame a construir el argumento para establecer una cultura de equipo que respeta el tiempo de concentración: cómo presentar el concepto al equipo, cómo establecer las normas de interrupción aceptables y cómo celebrar los resultados de los períodos de trabajo profundo para reforzar la cultura.

Dame el sistema completo para entrar en flujo de manera más consistente y proteger el tiempo de codificación profunda que produce el mejor trabajo de mi carrera como developer.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema para alcanzar y proteger el estado de flujo en la codificación diaria',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Creatividad sin distracciones: el diseñador que protege su espacio creativo',
                'description'       => 'Construye el entorno, los rituales y los límites que protegen tu tiempo de creación profunda como diseñador y producen el trabajo más innovador y de mayor calidad de tu carrera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de creatividad y productividad para diseñadores con experiencia ayudando a profesionales del diseño a proteger su capacidad creativa en entornos de trabajo con alta demanda y constantes interrupciones. Quiero construir el sistema de trabajo que me permita producir el trabajo de diseño más creativo e innovador de mi carrera protegiendo el tiempo y el espacio mental necesarios para que eso ocurra.

**Preguntas iniciales:**
1. ¿Cuál es el tipo de trabajo de diseño en el que tu creatividad fluye con más facilidad (conceptualización, exploración visual, diseño de sistemas, ilustración)?
2. ¿Cuáles son las principales amenazas a tu concentración creativa (reuniones, revisiones de cliente, solicitudes ad hoc, las propias herramientas digitales)?
3. ¿Trabajas solo, en equipo o con clientes directos? ¿Hay expectativas de disponibilidad inmediata?
4. ¿Tienes una diferencia notable en la calidad del trabajo que produces cuando estás en un estado de concentración profunda versus cuando trabajas de manera fragmentada?

**LA ESPECIFICIDAD DE LA CREATIVIDAD PROFUNDA EN DISEÑO:**

EL ESTADO CREATIVO Y POR QUÉ ES TAN FRÁGIL
El estado creativo del diseñador comparte características con el flow state del developer pero tiene una dimensión adicional: la creación visual requiere no solo concentración sino también un estado mental específico de apertura, exploración y tolerancia a la ambigüedad que tarda más en activarse y se destruye más fácilmente. Interrumpir a un diseñador en medio de un proceso de exploración creativa no solo cuesta el tiempo de recuperación cognitiva; puede romper completamente el hilo creativo que llevaba a algo interesante. Ayúdame a entender las condiciones en las que mi creatividad funciona mejor y cómo crearlas de manera más consistente.

EL PROBLEMA DE LAS REVISIONES Y LOS CAMBIOS DE CONTEXTO
El diseñador trabaja en múltiples proyectos y recibe feedback y solicitudes de cambio de manera asíncrona y desordenada. El cambio constante entre proyectos en diferentes etapas (uno en exploración conceptual, otro en producción de assets, otro en revisión final) fragmenta el pensamiento creativo de una manera que el propio diseñador a veces no percibe como un problema hasta que lo compara con los períodos de trabajo más concentrado. Ayúdame a diagnosticar el impacto del cambio de contexto en mi trabajo creativo.

**DISEÑAR EL ENTORNO CREATIVO:**

EL ENTORNO FÍSICO PARA LA CREATIVIDAD
El entorno físico tiene un impacto mayor en el trabajo creativo que en el trabajo analítico porque la creatividad es sensible a los estímulos sensoriales. Los mejores diseñadores cuidan su entorno de trabajo como parte de su proceso creativo. Ayúdame a diseñar el entorno físico óptimo para mi trabajo creativo: el nivel de luz, el nivel de sonido (silencio, música, ruido ambiental), la organización del espacio de trabajo, los objetos visuales que me inspiran y la minimización de los estímulos que distraen.

EL ENTORNO DIGITAL PARA LA CREATIVIDAD
Las herramientas digitales del diseñador son también una fuente de distracción: las notificaciones de Figma, los comentarios de los clientes en tiempo real, las actualizaciones de plugins, el feed de Behance o Dribbble que está siempre a un clic. Ayúdame a configurar el entorno digital que protege el tiempo de trabajo creativo: la configuración de notificaciones en las herramientas de diseño, los modos de no molestar, las extensiones del navegador que bloquean las distracciones y la separación entre el tiempo de inspiración (explorar referencias) y el tiempo de creación.

**LOS RITUALES DEL DISEÑADOR CREATIVO:**

EL RITUAL DE ENTRADA AL MODO CREATIVO
Entrar en el estado creativo óptimo requiere un ritual de transición que indica al cerebro que empieza el tiempo de creación. Ayúdame a diseñar mi ritual de entrada al trabajo creativo profundo: el tiempo de preparación, los elementos que activan el estado creativo (música específica, un ejercicio de calentamiento visual, la revisión del brief y los objetivos de la sesión) y el elemento final que cierra el ritual y da inicio al trabajo.

LA SESIÓN DE EXPLORACIÓN SIN JUICIO
Los mejores diseñadores saben separar la fase de exploración (donde todo vale, donde el juicio crítico está desactivado) de la fase de refinamiento (donde se evalúa y selecciona). Mezclar las dos fases produce diseño mediocre: o te autocensuras antes de explorar suficiente, o te quedas en la exploración infinita sin avanzar. Ayúdame a estructurar las sesiones de exploración creativa de manera que maximicen la generación de ideas antes de entrar en el modo de evaluación y selección.

**GESTIÓN DE LA DEMANDA EXTERNA:**

CLIENTES Y FEEDBACK: CÓMO CREAR MOMENTOS DE REVISIÓN SIN INTERRUPCIONES CONTINUAS
El mayor generador de interrupciones para el diseñador son los clientes y los stakeholders internos que quieren ver el trabajo en progreso, dan feedback desorganizado y cambian de opinión constantemente. Ayúdame a diseñar el sistema de relación con clientes y stakeholders que concentra el feedback en momentos específicos: las revisiones estructuradas con agenda, la gestión de comentarios asíncronos que no interrumpen el trabajo en progreso y las expectativas de disponibilidad que protegen el tiempo de creación.

DECIR NO A LAS SOLICITUDES QUE FRAGMENTAN LA CREATIVIDAD
Una de las habilidades más importantes del diseñador que quiere producir trabajo de calidad es la capacidad de decir no o "ahora no" a las solicitudes que fragmentan el tiempo creativo. Ayúdame a desarrollar los scripts y las políticas que me permiten proteger mi tiempo sin dañar las relaciones con clientes, colegas o managers.

Dame el sistema completo para proteger mi espacio creativo como diseñador y producir el trabajo más innovador e impactante de mi carrera de manera consistente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema para proteger el espacio creativo del diseñador y producir trabajo de mayor calidad e innovación',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Productividad del comercial: hacer más llamadas con menos energía desperdiciada',
                'description'       => 'Diseña la jornada comercial para maximizar las actividades de alto impacto, gestionar la energía en las llamadas difíciles y mantener el rendimiento sin quemarte en el proceso.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en productividad y gestión del rendimiento para profesionales de ventas con experiencia en entornos de alta presión tanto en ventas inbound como outbound B2B. Quiero diseñar mi jornada comercial de manera que maximice el número y la calidad de las interacciones con prospectos y clientes, gestione mi energía de manera inteligente y mantenga un rendimiento alto de manera sostenible. Ayúdame a construir ese sistema.

**Preguntas iniciales:**
1. ¿Cuál es tu modelo de ventas (outbound, inbound o mixto) y el número de llamadas o reuniones al día que realizas actualmente?
2. ¿Cuál es el mayor desperdicio de energía en tu jornada actual (prospección, administración, esperas, llamadas sin preparación)?
3. ¿Cuándo en el día sientes que tienes más energía y confianza para hacer llamadas de calidad?
4. ¿Cuál es el ratio actual entre las actividades de alto impacto (llamadas, reuniones) y las de bajo impacto (emails administrativos, CRM)?

**DISEÑO DE LA JORNADA COMERCIAL DE ALTO RENDIMIENTO:**

LOS BLOQUES DE ACTIVIDAD COMERCIAL
La jornada del comercial de alto rendimiento no es una jornada continua de llamadas; es una jornada diseñada con bloques de actividad diferenciados. Los bloques de llamadas de prospección y seguimiento son distintos de los bloques de preparación de reuniones, del tiempo de actualización del CRM y del tiempo de formación. Cada tipo de actividad requiere un estado mental diferente y mezclarlos reduce la calidad de todos. Ayúdame a diseñar mi jornada ideal con bloques diferenciados según el tipo de actividad y mi nivel de energía a lo largo del día.

EL BLOQUE DE LLAMADAS DE ALTA INTENSIDAD
Las llamadas de prospección en frío o de seguimiento activo son la actividad de mayor impacto y mayor coste energético de la jornada del comercial. Concentrarlas en bloques de tiempo específicos (el "power hour" o el "bloque de prospección") tiene múltiples ventajas: el estado mental de las llamadas es más difícil de activar pero dura más si no lo interrumpes, el calentamiento entre las primeras llamadas y las siguientes mejora la calidad de las conversaciones y la acumulación de energía y confianza en el bloque produce mejores resultados que las llamadas dispersas. Ayúdame a diseñar mis bloques de llamadas: cuántos por día, de qué duración, en qué franja horaria y cómo entro en el estado mental correcto antes de la primera llamada.

PREPARACIÓN DE LLAMADAS: CUÁNTO ES SUFICIENTE
La preparación de las llamadas es un equilibrio entre la calidad y la velocidad. La preparación excesiva es un mecanismo de evitación disfrazado de profesionalismo; la preparación insuficiente produce llamadas genéricas que no generan respuesta. Ayúdame a definir el estándar de preparación correcto para cada tipo de llamada en mi proceso de ventas: el mínimo de información que necesito sobre el prospecto antes de marcar, el tiempo máximo que invierto en preparación por llamada y cómo uso las plantillas y los sistemas para que la preparación sea consistente y eficiente.

**GESTIÓN DE LA ENERGÍA EN VENTAS:**

EL CICLO DE ENERGÍA DEL COMERCIAL
Las ventas son un trabajo emocionalmente demandante. El rechazo, las objeciones, las llamadas difíciles y las propuestas perdidas tienen un coste energético real que el comercial que no lo gestiona bien acaba pagando en forma de agotamiento, desmotivación y bajo rendimiento. Ayúdame a entender mi ciclo de energía en el trabajo comercial: cuándo tengo más energía y confianza para las actividades de mayor intensidad, cuándo el coste energético del rechazo acumulado empieza a afectar la calidad de las llamadas y cómo gestiono la recuperación dentro de la jornada.

LAS MICRORECUPERACIONES ENTRE LLAMADAS
El comercial que hace llamadas durante horas sin pausa produce llamadas de calidad decreciente. Las microrecuperaciones entre llamadas son esenciales para mantener la calidad de la energía y el tono a lo largo del bloque. Ayúdame a diseñar las microrecuperaciones entre bloques de llamadas: cuánto tiempo, qué actividad (movimiento físico, hidratación, desconexión breve de la pantalla) y cómo las integro en el ritmo del bloque sin que rompan el estado mental de ventas.

**ADMINISTRACIÓN Y CRM: EL LADRÓN SILENCIOSO DE TIEMPO COMERCIAL:**

El tiempo administrativo del comercial es el mayor ladrón de tiempo comercial. Las actualizaciones del CRM, los emails de seguimiento, la preparación de propuestas y la gestión de la pipeline pueden consumir entre el 30% y el 50% de la jornada de un comercial si no se gestionan con intención. Ayúdame a diseñar el sistema de administración comercial que minimiza el tiempo dedicado a estas tareas sin descuidar la calidad del CRM ni la personalización de las propuestas: el batching de las tareas administrativas al final del día, las plantillas que aceleran los emails de seguimiento y el sistema de actualización rápida del CRM que no interrumpe el flujo de llamadas.

Dame el sistema completo de jornada comercial de alto rendimiento que me permita hacer más actividad de mayor calidad con menos energía desperdiciada y de manera sostenible a largo plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseño de la jornada comercial para maximizar la productividad y gestionar la energía de manera sostenible',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'PM sin reuniones: recuperar tiempo para el trabajo de producto que importa',
                'description'       => 'Audita y rediseña tu calendario de reuniones como PM para proteger el tiempo de pensamiento estratégico, discovery y escritura que produce el impacto real en el producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product management coach con experiencia ayudando a product managers a recuperar el control de su tiempo y a proteger el espacio necesario para el trabajo de producto de mayor impacto. Quiero auditar mi calendario actual y rediseñarlo para que mis reuniones generen valor real y protegen el tiempo para el trabajo estratégico, el discovery y la escritura que produce el impacto real en el producto que gestiono.

**Preguntas iniciales:**
1. ¿Cuántas horas de reuniones tienes en una semana típica y cuántas de esas crees que son verdaderamente necesarias?
2. ¿Cuándo en la semana tienes tiempo para pensar con profundidad sobre el producto, hacer research o escribir documentación?
3. ¿Cuál es el trabajo de PM que más impacto tiene en el producto y que menos tiempo recibes para hacer bien?
4. ¿El problema son las reuniones con tu equipo, con stakeholders, o con clientes?

**EL PROBLEMA DEL PM SIEMPRE EN REUNIONES:**

EL COSTO OCULTO DE LAS REUNIONES PARA EL PM
El PM que vive en reuniones no tiene tiempo para hacer el trabajo que lo hace un buen PM: entender profundamente el problema del usuario, conectar los puntos entre el feedback del mercado y la estrategia del producto, escribir los documentos que alinean al equipo y pensar con antelación sobre las decisiones difíciles que se avecinan. El resultado es un PM reactivo que resuelve los problemas del día a día en reuniones pero que no lidera el producto estratégicamente. Ayúdame a estimar cuánto trabajo de alto valor estoy dejando de hacer por exceso de reuniones.

LAS REUNIONES COMO SOLUCIÓN DE DEFECTO
La mayoría de las reuniones en las organizaciones de producto nacen de un defecto de comunicación: cuando no hay claridad sobre quién decide qué, cuándo la documentación no es suficientemente buena para resolver preguntas por escrito, o cuando la cultura no tiene confianza en el proceso asíncrono. Las reuniones se convierten en la solución de defecto para todo lo que no funciona bien de otra manera. Ayúdame a identificar qué reuniones de mi calendario son síntomas de procesos no resueltos y cómo abordar el problema de raíz.

**AUDITORÍA Y REDISEÑO DEL CALENDARIO:**

LA AUDITORÍA DE REUNIONES
El primer paso es hacer un inventario honesto de las reuniones actuales. Para cada reunión recurrente: ¿cuál es su propósito real?, ¿qué pasaría si la eliminara?, ¿podría reemplazarse por comunicación asíncrona?, ¿podría reducirse su frecuencia o duración?, ¿debo estar yo presente o podría asistir otro miembro del equipo? Ayúdame a hacer esta auditoría de mi calendario actual y a identificar las reuniones candidatas a eliminar, reducir o transformar.

EL REDISEÑO DEL CALENDARIO
Después de la auditoría, diseña conmigo el calendario ideal de la semana del PM: los bloques de trabajo profundo protegidos para el pensamiento estratégico y la escritura, los bloques de discovery (entrevistas, análisis), los tiempos dedicados a las reuniones agrupadas en franjas horarias específicas y el tiempo de disponibilidad para las conversaciones no planificadas que inevitablemente ocurren.

**TRANSFORMAR REUNIONES EN COMUNICACIÓN MÁS EFECTIVA:**

REUNIONES QUE PUEDEN CONVERTIRSE EN DOCUMENTOS
La mayoría de las reuniones de actualización de estado pueden reemplazarse por un documento bien escrito que todos leen de manera asíncrona. El PM es el mejor candidato para liderar este cambio en la organización. Ayúdame a identificar las reuniones de mi calendario que pueden convertirse en documentos y a diseñar el formato de los documentos de actualización que realmente se leen y que reducen la necesidad de reuniones.

REUNIONES QUE DEBEN SER MÁS CORTAS Y MÁS ENFOCADAS
Las reuniones que sí generan valor (decisiones colectivas, brainstorming, alineación en momentos críticos) deben ser más cortas y más enfocadas. Ayúdame a rediseñar el formato de las reuniones recurrentes de mi calendario: la agenda estructurada que se envía con antelación, el pre-read que garantiza que todos llegan preparados, el facilitador que mantiene el foco y los action items concretos que salen de cada reunión.

**NEGOCIAR EL TIEMPO CON LOS STAKEHOLDERS:**

Uno de los mayores retos del PM para proteger su tiempo son los stakeholders que interpretan la disponibilidad inmediata como engagement y la falta de respuesta instantánea como falta de interés. Ayúdame a construir el sistema de comunicación con stakeholders que gestiona sus expectativas de acceso sin sacrificar el tiempo de trabajo estratégico: las office hours regulares que concentran las conversaciones ad hoc, la política de respuesta a mensajes y emails y cómo comunicar la estructura de trabajo sin que parezca que estás poniendo barreras.

Dame el plan concreto para recuperar entre 10 y 15 horas semanales de reuniones innecesarias y convertirlas en tiempo de trabajo de producto de alto impacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Auditoría y rediseño del calendario del PM para proteger el tiempo de trabajo estratégico de producto',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR sin urgencias falsas: gestionar la bandeja de entrada sin ser esclavo',
                'description'       => 'Diseña el sistema de gestión de la comunicación en RRHH que diferencia lo urgente de lo importante, responde con rapidez lo que lo merece y protege el tiempo para el trabajo estratégico de personas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en productividad y gestión del tiempo especializado en profesionales de Recursos Humanos, un rol que se caracteriza por la alta demanda de atención inmediata de múltiples stakeholders (empleados, managers, candidatos, liderazgo) y donde la gestión reactiva puede consumir el 100% del tiempo si no se gestiona con intención. Quiero diseñar el sistema de gestión de la comunicación y la demanda en RRHH que me permita responder bien y rápido lo que merece urgencia, diferir lo que puede esperar y proteger el tiempo para el trabajo estratégico de personas que tiene impacto real en la organización.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de la empresa y el número de empleados que atiendes como HR?
2. ¿Cuáles son los canales de comunicación por los que recibes la mayor parte de las solicitudes (email, Slack, Teams, WhatsApp, en persona)?
3. ¿Cuál es el tipo de solicitud más frecuente que recibes y que podría gestionarse de otra manera?
4. ¿Cuánto tiempo al día dedicas a responder solicitudes versus a proyectos de RRHH de mayor impacto?

**EL PROBLEMA DE LA REACTIVIDAD EN RRHH:**

RRHH: EL ROL MÁS PROPENSO AL MODO REACTIVO
El profesional de RRHH es el centro de gravedad de muchas urgencias en la organización: el empleado que tiene un conflicto con su manager, el candidato que tiene dudas sobre la oferta, el manager que necesita apoyo para una conversación difícil, el directivo que quiere revisar el headcount. La mayoría de estas situaciones llegan como "urgente" aunque no lo sean realmente. Sin un sistema de gestión de la demanda, RRHH opera en modo bombero permanente, siempre apagando fuegos en lugar de construir los sistemas que los previenen. Ayúdame a diagnosticar mi nivel actual de reactividad y el coste que tiene en el trabajo estratégico.

LA FALSA URGENCIA EN RRHH
Muchas de las solicitudes que llegan como urgentes a RRHH no lo son. La urgencia percibida suele ser una combinación de: la ansiedad del solicitante (que no distingue entre importante y urgente), la falta de sistemas de autoservicio que resuelvan las preguntas frecuentes sin intervención de RRHH y la cultura de respuesta inmediata que se ha establecido porque RRHH siempre ha respondido inmediatamente. Ayúdame a identificar los tipos de solicitudes que recibo y a clasificarlos por su urgencia real versus su urgencia percibida.

**EL SISTEMA DE GESTIÓN DE LA COMUNICACIÓN EN RRHH:**

TRIAGE DE SOLICITUDES
El primer elemento del sistema es el triage: clasificar cada solicitud al recibirla según su urgencia y su importancia. Los criterios de urgencia real en RRHH son pocos: situaciones de riesgo para la salud o seguridad de un empleado, conflictos graves que afectan a la operativa del negocio, plazos legales o regulatorios inminentes. Todo lo demás puede gestionarse en el tiempo normal de respuesta. Ayúdame a definir los criterios de triage específicos para mi contexto y a establecer los tiempos de respuesta por categoría.

LOS SISTEMAS DE AUTOSERVICIO QUE REDUCEN LA DEMANDA
Muchas de las preguntas que llegan a RRHH son recurrentes y tienen respuestas documentadas: ¿cuántos días de vacaciones me quedan?, ¿cómo solicito la baja médica?, ¿cuál es el proceso de onboarding del nuevo empleado? Cada pregunta recurrente que llega a RRHH es una señal de que falta un sistema de autoservicio. Ayúdame a identificar las preguntas más frecuentes que recibo y a diseñar los sistemas que las resuelven sin mi intervención: la wiki de RRHH, el chatbot de preguntas frecuentes, las guías de manager y los procesos autodocumentados.

BATCHING DE LAS RESPUESTAS
El profesional de RRHH que responde cada email o Slack en el momento en que llega pierde el hilo de trabajo cada pocas minutos. El batching de respuestas (revisar y responder la comunicación en ventanas de tiempo específicas) protege el trabajo estratégico sin comprometer los tiempos de respuesta para lo que verdaderamente importa. Ayúdame a diseñar el sistema de batching para mi caso: cuántas ventanas de revisión de comunicación al día, cuánto tiempo duran, cómo configuro las notificaciones para que solo interrumpan para lo verdaderamente urgente y cómo comunico el sistema a los empleados y managers.

**PROTEGER EL TIEMPO ESTRATÉGICO DE RRHH:**

EL TRABAJO QUE SOLO RRHH PUEDE HACER
El trabajo de mayor impacto de RRHH es estratégico: diseñar el programa de desarrollo del liderazgo, construir la cultura de feedback, analizar los datos de rotación para identificar los departamentos con mayor riesgo, diseñar la estrategia de employer branding. Este trabajo no ocurre solo; hay que proteger el tiempo para hacerlo. Ayúdame a identificar los tres proyectos estratégicos de RRHH de mayor impacto en mi organización y a bloquear el tiempo para avanzar en ellos de manera consistente, aunque sea en bloques pequeños.

Dame el sistema de gestión de la demanda en RRHH que me permita ser percibido como responsive y accesible sin estar disponible de manera reactiva las ocho horas del día.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema de gestión de la demanda en RRHH que diferencia la urgencia real de la falsa y protege el tiempo estratégico',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis en profundidad: cómo el financiero se concentra en lo que importa',
                'description'       => 'Diseña el sistema de trabajo que permite al profesional de finanzas proteger el tiempo para el análisis profundo y la reflexión estratégica, diferenciándolos de las tareas rutinarias de reporting.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en productividad para profesionales de finanzas con experiencia ayudando a analistas, controllers y FP&A managers a diseñar su jornada de manera que proteja el tiempo para el análisis de mayor calidad, el modelado complejo y el pensamiento estratégico que diferencia al financiero que añade valor del que solo produce reportes. Quiero construir el sistema de trabajo que me permita producir el análisis financiero más profundo e impactante de mi carrera.

**Preguntas iniciales:**
1. ¿Cuál es tu rol específico en finanzas y cuáles son los outputs de mayor valor que produces (modelos, análisis ad hoc, reportes de gestión, análisis de inversión)?
2. ¿Cuánto tiempo a la semana dedicas a análisis profundo versus a tareas rutinarias de extracción, transformación y presentación de datos?
3. ¿Cuáles son las principales interrupciones que fragmentan tu tiempo de análisis (peticiones ad hoc, reuniones, consultas de managers)?
4. ¿Tienes períodos de alta carga (cierre mensual, presupuesto, auditoría) que acaparan toda la capacidad del equipo?

**EL TRABAJO FINANCIERO DE ALTO VALOR REQUIERE CONCENTRACIÓN:**

POR QUÉ EL ANÁLISIS FINANCIERO PROFUNDO ES DIFÍCIL DE PRODUCIR EN FRAGMENTOS
El análisis financiero de calidad no es solo extraer datos y formatearlos en una tabla; es identificar los patrones relevantes, formular hipótesis sobre las causas, contrastarlas con el contexto del negocio y traducir los hallazgos en recomendaciones accionables. Este proceso requiere tener muchas variables simultáneamente en la cabeza y construir una narrativa coherente sobre el estado del negocio. Una interrupción en medio de este proceso no solo cuesta el tiempo de recuperación cognitiva; puede hacer que pierdas el hilo del análisis y tengas que empezar desde el principio. Ayúdame a entender el coste real de las interrupciones en la calidad de mi análisis financiero.

LOS DOS TIPOS DE TRABAJO EN FINANZAS
El trabajo de finanzas se divide claramente en dos tipos: el trabajo rutinario (extracción de datos, actualización de dashboards, preparación de reportes estándar, reconciliaciones) y el trabajo analítico (análisis de variaciones con diagnóstico de causas, modelado de escenarios, análisis de rentabilidad, evaluación de decisiones de inversión). El error más común en finanzas es mezclar ambos tipos en la misma jornada de manera que el trabajo rutinario siempre consume el tiempo que debería ir al trabajo analítico. Ayúdame a separar estos dos tipos de trabajo de manera más sistemática.

**DISEÑO DE LA JORNADA DEL FINANCIERO DE ALTO IMPACTO:**

LOS BLOQUES DE ANÁLISIS PROFUNDO
El análisis financiero de calidad requiere bloques de tiempo protegidos de al menos 90 minutos sin interrupciones. Ayúdame a diseñar los bloques de análisis profundo en mi jornada: en qué momento del día (teniendo en cuenta cuándo mi mente está más aguda para el trabajo numérico y conceptual), cuántos bloques por semana son posibles dada la estructura actual de mi trabajo y cómo los protejo de las peticiones ad hoc y las reuniones.

AUTOMATIZACIÓN DEL TRABAJO RUTINARIO
El trabajo rutinario de finanzas es el mayor ladrón de tiempo analítico. Cada hora que el equipo de finanzas pasa extrayendo datos manualmente, reformateando tablas o actualizando dashboards es una hora que no se dedica al análisis. Ayúdame a identificar las tareas rutinarias de mi trabajo que tienen mayor potencial de automatización y a diseñar el plan para automatizarlas: las herramientas que puedo usar (Python, Power Query, SQL, herramientas de ETL, macros de Excel) y el orden de prioridad según el tiempo que liberaría cada automatización.

**GESTIÓN DE LAS PETICIONES AD HOC:**

Las peticiones ad hoc de los managers y directivos son el mayor generador de interrupciones para el equipo de finanzas. La solicitud de "¿puedes mirar por qué las ventas de X bajaron el mes pasado?" puede llegar en cualquier momento y suele percibirse como urgente. Ayúdame a diseñar el sistema de gestión de peticiones ad hoc que las recibe y gestiona sin que interrumpan el trabajo analítico en progreso: el proceso de intake de solicitudes, los SLAs por tipo de petición, cómo comunicar al negocio el proceso de priorización y cómo usar el análisis proactivo para reducir el volumen de peticiones reactivas.

EL ANÁLISIS PROACTIVO COMO ESTRATEGIA DE PRODUCTIVIDAD
El financiero que produce análisis proactivos (anticipando las preguntas que los managers van a hacer antes de que las formulen) no solo añade más valor sino que también reduce el volumen de peticiones ad hoc que recibe. Ayúdame a diseñar la estrategia de análisis proactivo para mi contexto: qué preguntas de negocio tienen más probabilidad de surgir en las próximas semanas, qué análisis recurrentes puedo preparar de antemano y cómo publicar los análisis proactivos de manera que lleguen a los stakeholders correctos en el momento correcto.

Dame el sistema de trabajo del financiero de alto impacto que me permita producir el análisis más profundo de mi carrera protegiendo el tiempo que requiere frente a las demandas rutinarias del día a día.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema de trabajo para proteger el tiempo de análisis financiero profundo frente a las tareas rutinarias y las interrupciones',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Concentración del abogado: redactar, investigar y analizar sin interrupciones',
                'description'       => 'Diseña el sistema de trabajo que permite al abogado proteger el tiempo de concentración que requiere el trabajo jurídico de mayor calidad, diferenciando la urgencia real de la percibida.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en productividad y gestión del tiempo para abogados con experiencia en entornos de despacho y de asesoría jurídica interna donde la cultura de disponibilidad inmediata y la alta demanda de atención son la norma. Quiero diseñar el sistema de trabajo que me permita producir el trabajo jurídico de mayor calidad (redacción de documentos complejos, investigación legal profunda, análisis estratégico de casos) protegiendo el tiempo de concentración que ese trabajo requiere.

**Preguntas iniciales:**
1. ¿Cuál es tu área de práctica y entorno de trabajo (despacho, departamento jurídico interno, trabajo independiente)?
2. ¿Cuáles son los tipos de trabajo jurídico que más tiempo y concentración requieren de ti actualmente?
3. ¿Cuáles son las principales fuentes de interrupción en tu jornada (clientes, socios, colegas, notificaciones, reuniones)?
4. ¿Cuántas horas al día produces actualmente de trabajo jurídico de alta concentración sin interrupciones?

**LA ESPECIFICIDAD DEL TRABAJO JURÍDICO PROFUNDO:**

POR QUÉ EL TRABAJO JURÍDICO REQUIERE CONCENTRACIÓN SOSTENIDA
La redacción de un contrato complejo, la elaboración de un escrito de defensa o el análisis de la jurisprudencia aplicable a un caso no son trabajos que se puedan hacer de manera fragmentada sin pérdida de calidad. El trabajo jurídico de alta calidad requiere mantener en la mente simultáneamente múltiples capas de análisis: los hechos del caso, el marco jurídico aplicable, la posición de la contraparte, los precedentes relevantes y la estrategia a largo plazo del cliente. Una interrupción en medio de este proceso no solo cuesta el tiempo de recuperación; puede producir errores de análisis que tienen consecuencias reales para el cliente y riesgos profesionales para el abogado.

LA CULTURA DE DISPONIBILIDAD INMEDIATA EN EL DERECHO
La cultura legal, especialmente en los despachos, promueve la disponibilidad inmediata como señal de compromiso y excelencia profesional. El abogado que responde los emails del cliente a las 11 de la noche y coge el teléfono en cualquier momento es valorado en muchos entornos. Esta cultura, sin embargo, tiene un coste directo en la calidad del trabajo jurídico: es imposible producir el mejor análisis legal mientras se está constantemente interrumpido. Ayúdame a navegar esta tensión entre la disponibilidad que los clientes y los socios esperan y la concentración que el trabajo de calidad requiere.

**DISEÑO DEL SISTEMA DE TRABAJO JURÍDICO:**

IDENTIFICAR EL TRABAJO QUE MERECE CONCENTRACIÓN TOTAL
No todo el trabajo jurídico requiere el mismo nivel de concentración. La redacción de un contrato complejo, la elaboración de una demanda, el análisis de la posición jurídica en un asunto nuevo o la investigación de un precedente son trabajos de alta concentración. La revisión de emails rutinarios, las conferencias de actualización de estado, la firma de documentos estándar o la revisión de facturas son trabajos de baja concentración. Ayúdame a clasificar mi trabajo jurídico habitual y a asignar el tiempo correcto a cada tipo.

BLOQUES DE TRABAJO JURÍDICO PROFUNDO
Los bloques de trabajo profundo para el abogado deben ser más largos que en otros trabajos porque el tiempo de entrada al estado de concentración jurídica es mayor: necesitas recuperar el contexto del asunto (los hechos, los argumentos en desarrollo, la posición de las partes) antes de poder avanzar de manera productiva. Ayúdame a diseñar mis bloques de trabajo jurídico profundo: la duración óptima, la frecuencia por semana, el momento del día más adecuado para mi cronotipo y los rituales de preparación (revisión del contexto del asunto, lectura de las notas de la sesión anterior) que me preparan para entrar rápidamente en el análisis profundo.

**GESTIÓN DE LA COMUNICACIÓN CON CLIENTES:**

LOS CLIENTES Y LA EXPECTATIVA DE DISPONIBILIDAD
La relación con los clientes es la principal fuente de interrupciones para el abogado. El cliente que tiene un asunto urgente, que quiere una actualización, que tiene una duda sobre el contrato que acaba de recibir genera una presión de disponibilidad que puede fragmentar completamente la jornada de trabajo. Ayúdame a diseñar el sistema de comunicación con clientes que gestiona sus expectativas de acceso sin comprometer el tiempo de trabajo jurídico profundo: la política de retorno de llamadas, las ventanas de disponibilidad para conversaciones no urgentes, cómo comunicar la política al cliente de manera que genere confianza en lugar de ansiedad.

URGENCIA REAL VERSUS URGENCIA PERCIBIDA EN DERECHO
En el trabajo jurídico, los clientes tienden a percibir todo como urgente. La habilidad del abogado para calibrar la urgencia real versus la urgente percibida es una competencia profesional crítica. Ayúdame a desarrollar los criterios para clasificar la urgencia real en mi práctica: qué situaciones requieren respuesta en horas (plazos procesales inminentes, situaciones de riesgo agudo para el cliente), qué puede esperar 24-48 horas y qué puede gestionarse en el tiempo normal de respuesta de la semana.

Dame el sistema de trabajo jurídico que me permita producir el mejor análisis, la mejor redacción y la mejor estrategia de mi carrera protegiendo el tiempo de concentración que ese nivel de calidad requiere.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema de trabajo para que el abogado proteja el tiempo de concentración que requiere el trabajo jurídico de alta calidad',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS proactivo vs reactivo: salir del modo bombero y gestionar con intención',
                'description'       => 'Transforma tu manera de trabajar en customer success pasando del modo reactivo de apagar fuegos al modo proactivo de prevenir problemas y gestionar relaciones con intención estratégica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia transformando equipos y prácticas de CS del modo reactivo al modo proactivo en empresas SaaS B2B. Quiero transformar mi manera de trabajar en customer success: pasar de reaccionar a los problemas de los clientes cuando ya se han producido a prevenirlos de manera sistemática y gestionar mis cuentas con intención estratégica en lugar de desde la urgencia permanente. Ayúdame a diseñar ese cambio.

**Preguntas iniciales:**
1. ¿Cuál es tu ratio de cuentas y el modelo de CS (high touch, tech touch, mixto)?
2. ¿Qué porcentaje de tu tiempo estás actualmente resolviendo problemas que ya han ocurrido versus previniendo que ocurran?
3. ¿Cuáles son los tipos de problemas que más frecuentemente te llegan de los clientes en modo urgente?
4. ¿Tienes visibilidad del estado de salud de tus cuentas antes de que el cliente manifieste un problema, o te enteras cuando ya existe?

**EL COSTE DEL CS REACTIVO:**

EL MODO BOMBERO Y SUS CONSECUENCIAS
El CS Manager reactivo vive en un estado de urgencia permanente: un cliente que amenaza con no renovar, otro que tiene un bug crítico, otro que no entiende cómo usar una feature clave, otro que no ha recibido la respuesta del equipo de soporte a tiempo. Este estado de urgencia permanente produce cuatro consecuencias graves: las relaciones con los clientes se construyen sobre los problemas en lugar de sobre el valor, el equipo de CS queda exhausto con la gestión de crisis, las renovaciones son más difíciles porque el cliente asocia el producto con los problemas que ha tenido y el CS Manager no tiene tiempo para las actividades de expansión y upsell que generan ingresos adicionales. Ayúdame a cuantificar el coste del modo reactivo en mi trabajo.

LA RAÍZ DEL PROBLEMA REACTIVO
La reactividad en CS no es simplemente un problema de priorización; suele ser síntoma de problemas más profundos: falta de visibilidad del estado real de las cuentas antes de que el problema sea evidente, ausencia de sistemas de alerta temprana, cobertura excesiva de cuentas por CS Manager que hace imposible la proactividad y falta de procesos estructurados para los momentos clave del ciclo de vida del cliente. Ayúdame a diagnosticar las causas raíz de la reactividad en mi trabajo de CS.

**CONSTRUIR EL SISTEMA DE CS PROACTIVO:**

HEALTH SCORE Y ALERTAS TEMPRANAS
El fundamento del CS proactivo es la visibilidad del estado real de las cuentas antes de que el cliente manifieste un problema. El health score combina los indicadores de engagement con el producto, el uso de las features clave, la frecuencia de contacto y los tickets de soporte recientes para dar una visión del estado de salud de la relación. Ayúdame a diseñar el health score para mis cuentas: los indicadores que incluyo, cómo los combino en un score único, los umbrales que activan una alerta y el proceso de revisión del health score que forma parte de la rutina semanal.

EL CALENDARIO PROACTIVO
El CS proactivo requiere un calendario diseñado, no un calendario que se llena de respuestas a urgencias. Ayúdame a diseñar el calendario proactivo del CS Manager: los bloques reservados para las revisiones de salud de las cuentas, los check-ins planificados con las cuentas de mayor valor, la preparación de los QBRs con suficiente antelación y el tiempo reservado para el desarrollo de las relaciones con los stakeholders de las cuentas clave.

PLAYBOOKS PARA LOS MOMENTOS CRÍTICOS DEL CICLO DE VIDA
Los problemas de CS suelen ocurrir en momentos predecibles del ciclo de vida del cliente: la primera semana de uso cuando el onboarding es crítico, el momento en que el campeón interno del producto cambia de rol, los meses previos a la renovación cuando el cliente empieza a evaluar el ROI. Ayúdame a diseñar los playbooks proactivos para cada uno de estos momentos críticos: el proceso de intervención temprana, el mensaje que envío, el objetivo de la intervención y cómo mido que fue exitosa.

**GESTIÓN DEL TIEMPO DEL CS MANAGER PROACTIVO:**

BLOQUES DE ANÁLISIS DE CUENTAS
El CS proactivo requiere tiempo semanal dedicado al análisis del estado de las cuentas: revisar los health scores, identificar las cuentas que muestran señales de deterioro y planificar las intervenciones. Este tiempo raramente ocurre si no se bloquea en el calendario. Ayúdame a diseñar los bloques de análisis de cuentas en mi jornada semanal y el proceso de revisión que produce el plan de acción para la semana.

DECIR NO A LA URGENCIA QUE NO LO ES
El CS Manager que quiere operar de manera proactiva necesita la habilidad de clasificar las urgencias entrantes y responder a cada una en su tiempo correcto. Ayúdame a desarrollar los criterios para clasificar la urgencia de las solicitudes de los clientes: qué requiere respuesta inmediata, qué puede esperar unas horas y qué puede integrarse en la siguiente interacción planificada sin que afecte a la relación con el cliente.

Dame el sistema completo de CS proactivo que me permita salir del modo bombero y gestionar mis cuentas con la intención estratégica que produce renovaciones, expansión y clientes que me recomiendan.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Transformación del CS Manager del modo reactivo al proactivo con sistemas de alerta, playbooks y calendario intencional',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Productividad del freelance: trabajar menos horas y ganar más',
                'description'       => 'Diseña el sistema de trabajo del freelance de alto rendimiento que maximiza los ingresos por hora trabajada, elimina el trabajo de bajo valor y crea la estructura que permite crecer sin trabajar más.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de negocio para freelancers con experiencia ayudando a profesionales independientes a aumentar sus ingresos mientras reducen sus horas de trabajo, pasando de vender tiempo a vender valor y resultados. Quiero rediseñar mi negocio freelance para ganar significativamente más mientras trabajo menos horas, y necesito el sistema que lo hace posible de manera sostenible.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad freelance, tu tarifa actual y el número de horas que trabajas a la semana de media?
2. ¿Cuánto de tu tiempo facturable es trabajo que realmente te gusta y en el que produces resultados excepcionales, y cuánto es trabajo que haces porque lo necesitas económicamente?
3. ¿Cuál es el mayor problema de tu negocio freelance actualmente: conseguir suficientes clientes, cobrar lo suficiente, gestionar el tiempo o la consistencia de los ingresos?
4. ¿Cuánto tiempo dedicas actualmente a actividades de venta y marketing de tu negocio versus al trabajo para clientes?

**EL CAMBIO DE MENTALIDAD: DE VENDER TIEMPO A VENDER VALOR:**

EL TECHO DE INGRESOS DEL FREELANCE POR HORA
El mayor limitador del ingreso del freelance que cobra por hora es matemático: hay un límite físico al número de horas que puedes trabajar y hay un límite de lo que el mercado paga por hora en tu categoría. Para romper ese techo, el freelance necesita desconectar su precio del tiempo y conectarlo al valor que produce. Ayúdame a entender la diferencia concreta en mi caso: cuánto cobra mi cliente del resultado que mi trabajo produce versus lo que me paga a mí, y cómo puedo capturar una mayor parte de ese valor.

IDENTIFICAR EL TRABAJO DE MAYOR VALOR
No todo el trabajo que haces como freelance tiene el mismo valor para tus clientes ni el mismo impacto en tu cuenta de resultados. Ayúdame a hacer el análisis de rentabilidad de mi trabajo freelance: qué tipos de proyectos tienen la mayor relación entre el valor que aporto y el tiempo que invierto, qué tipos de clientes son más rentables y qué tipos de trabajo debería eliminar, delegar o renegociar.

**DISEÑO DEL SISTEMA DE TRABAJO DEL FREELANCE EFICIENTE:**

PRODUCTIVIDAD REAL VS HORAS EN EL ESCRITORIO
El freelance que quiere ganar más trabajando menos tiene que empezar por medir su productividad real: cuántas horas a la semana produce trabajo facturable de alta calidad versus cuántas horas pasa en el escritorio sin producir output valioso. La mayoría de los freelancers descubren que pueden mantener o aumentar su output reduciendo las horas totales si eliminan las fuentes de ineficiencia. Ayúdame a hacer esta auditoría de mi jornada actual.

LOS SISTEMAS QUE MULTIPLICAN LA PRODUCTIVIDAD
El freelance de alto rendimiento tiene sistemas para todo lo que hace más de una vez: plantillas de propuestas, procesos de onboarding del cliente, flujos de trabajo para los tipos de proyecto más frecuentes, sistemas de gestión de versiones y feedback. Cada sistema que construyes te devuelve horas de trabajo cada mes. Ayúdame a identificar los sistemas que mayor impacto tendrían en mi productividad si los construyera y a priorizarlos por el tiempo que liberarían.

TARIFICACIÓN BASADA EN VALOR Y PAQUETES DE SERVICIOS
La transición de cobrar por hora a cobrar por paquetes de servicios o por valor es el cambio más transformador para el ingreso del freelance. Los paquetes permiten que el cliente compre un resultado, no tu tiempo, y alinean tus incentivos con los del cliente: cuanto más eficiente eres, más ganas por hora trabajada. Ayúdame a diseñar la estructura de paquetes o servicios para mi negocio freelance: cómo defino los entregables, cómo establezco el precio basado en el valor y cómo comunico el nuevo modelo a los clientes actuales y futuros.

**ATRAER MEJORES CLIENTES QUE PAGAN MÁS:**

El freelance que quiere trabajar menos horas y ganar más necesita inevitablemente subir su tarifa o cambiar el perfil de sus clientes, o ambas cosas. Ayúdame a diseñar la estrategia para atraer clientes de mayor valor: el posicionamiento que me diferencia en mi especialidad, los canales de visibilidad que llegan a los clientes dispuestos a pagar más y el proceso de calificación que me permite identificar rápidamente si un prospecto es el tipo de cliente correcto antes de invertir tiempo en la propuesta.

DECIR NO COMO ESTRATEGIA DE NEGOCIO
Uno de los mayores aceleradores del ingreso del freelance es aprender a decir no a los proyectos, clientes y tarifas que no encajan con su posicionamiento objetivo. Cada proyecto que acepta por debajo de su tarifa objetivo o fuera de su especialidad tiene un coste de oportunidad: el tiempo que consume es tiempo que no está disponible para proyectos mejores. Ayúdame a construir los criterios de decisión para aceptar o rechazar proyectos y los scripts para comunicar el rechazo de manera que preserve la relación y deje la puerta abierta.

Dame el plan completo para rediseñar mi negocio freelance de manera que en los próximos doce meses pueda ganar más con menos horas de trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema para que el freelance aumente sus ingresos mientras reduce las horas de trabajo mediante eficiencia, posicionamiento y precio por valor',
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
