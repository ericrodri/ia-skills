<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills224Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Toma de decisiones de marketing con datos incompletos',
                'description'      => 'Decide la estrategia cuando los datos no son perfectos: el proceso de decisión bajo incertidumbre, los sesgos cognitivos que distorsionan las decisiones de marketing y los frameworks que producen mejores resultados que la intuición sola.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en toma de decisiones estratégicas de marketing y en el análisis de datos para profesionales del marketing. Quiero que me ayudes a desarrollar un proceso de decisión más riguroso para las decisiones de marketing que tomo con datos imperfectos, incompletos o contradictorios, evitando los sesgos cognitivos que me hacen creer que tengo más certeza de la que realmente tengo.

Mi contexto:
- Tipo de decisiones de marketing que enfrento regularmente: [presupuesto de canales, lanzamiento de producto, posicionamiento, creatividad, expansión geográfica...]
- Calidad de datos que tengo habitualmente: [datos de buena calidad pero tardíos, datos en tiempo real pero incompletos, datos que no miden lo que realmente importa]
- Principal sesgo o error que reconozco en mis decisiones: [decido por intuición y busco datos que lo confirmen, paralizo la decisión esperando datos perfectos, sigo lo que hace la competencia sin evaluar si aplica a mi contexto]
- Consecuencias de las malas decisiones de marketing en mi empresa: [presupuesto desperdiciado, oportunidades perdidas, daño de marca, pérdida de market share]

Con esa información, quiero que me entregues:

1. LOS SESGOS COGNITIVOS QUE DISTORSIONAN LAS DECISIONES DE MARKETING
Explica los principales sesgos cognitivos que afectan específicamente a los profesionales del marketing: el sesgo de confirmación (buscar datos que confirman lo que ya creemos, ignorando los que lo contradicen), el sesgo de disponibilidad (sobrepesar las decisiones que recuerdo bien porque fueron recientes o impactantes), el sesgo de atribución (atribuir el éxito de una campaña a lo que más nos gusta de ella y el fracaso a factores externos), el efecto halo (si una campaña fue brillante en creatividad, asumir que también fue eficiente en ROI), el sesgo del superviviente (aprender solo de las campañas que salieron bien sin analizar las que fracasaron) y el sesgo de anclaje (quedar atrapados en el presupuesto del año anterior como referencia). Para cada sesgo, dame un ejemplo de marketing real y una técnica para contrarrestarlo.

2. EL FRAMEWORK DE DECISIÓN BAJO INCERTIDUMBRE
Define el proceso paso a paso para tomar decisiones de marketing con datos incompletos: cómo definir con precisión la decisión que hay que tomar (muchas decisiones mal tomadas empiezan por no tener claro qué se está decidiendo exactamente), cómo identificar la información que tienes, la que podrías conseguir con tiempo y la que nunca tendrás, cómo cuantificar la incertidumbre (¿cuánto confío en cada dato?), cómo enumerar las opciones posibles incluyendo la de no hacer nada, cómo evaluar cada opción considerando el mejor escenario y el peor, cómo tomar la decisión eligiendo el criterio adecuado (maximizar el resultado esperado, minimizar el peor caso posible, maximizar el aprendizaje) y cómo documentar la decisión de forma que puedas aprender de ella en el futuro.

3. DATOS CUALITATIVOS COMO COMPLEMENTO A LOS CUANTITATIVOS
Explica cómo usar los datos cualitativos de forma rigurosa en las decisiones de marketing cuando los datos cuantitativos son insuficientes: las conversaciones con clientes como fuente de insight (cuántas necesitas, cómo estructurarlas, cómo evitar el sesgo del investigador), las señales débiles del mercado que los datos cuantitativos no capturan (el cambio en el lenguaje de los clientes, la pregunta que se repite en el equipo de ventas, el comentario en redes que nadie ha escalado todavía), cómo combinar señales cuantitativas y cualitativas en una misma decisión y cómo presentar decisiones basadas en datos cualitativos ante un comité que solo confía en los números.

4. EXPERIMENTOS COMO HERRAMIENTA DE DECISIÓN
Diseña el modelo de experimentos de marketing que genera los datos necesarios para las decisiones más importantes: cuándo un experimento controlado es la respuesta correcta (y cuándo no hay tiempo ni budget para hacerlo), cómo diseñar un experimento de marketing que produce datos accionables (la hipótesis, la métrica principal, el tamaño mínimo de muestra, el período de tiempo necesario), cómo hacer A/B testing más allá de los test de email: en landing pages, en creatividades, en precios, en propuestas de valor, cómo ejecutar un experimento rápido y barato cuando la decisión no justifica un test largo (las smoke test, los MVPs de campaña) y cómo interpretar los resultados de un experimento que no son estadísticamente significativos.

5. VELOCIDAD VS. CERTEZA: CUÁNDO DECIDIR SIN ESPERAR MÁS DATOS
Explica cómo tomar la decisión de cuándo tienes suficiente información para decidir versus cuándo merece la pena esperar más datos: el concepto del valor de la información adicional (el análisis de si conseguir más datos antes de decidir cambiaría la decisión y cuánto cuesta esperar), las situaciones de marketing donde la velocidad es más valiosa que la certeza (ventanas de oportunidad de mercado, reacciones a la competencia, tendencias que evolucionan rápido), las situaciones donde esperar es correcto (decisiones irreversibles de posicionamiento o de marca, inversiones grandes con ciclos de retorno largos) y el proceso para comprometerse con una fecha de decisión al comienzo del proceso de análisis y respetarla.

6. APRENDER DE LAS DECISIONES PASADAS: EL SISTEMA DE REVISIÓN
Define el proceso de revisión sistemática de las decisiones de marketing pasadas que mejora la calidad de las decisiones futuras: cómo documentar una decisión de marketing en el momento en que se toma (el problema, las opciones consideradas, los datos disponibles, los supuestos, la opción elegida y el resultado esperado), cómo hacer la revisión post-decisión cuando los resultados están disponibles (qué acertamos, qué nos equivocamos, por qué), cómo construir el log de decisiones del equipo de marketing que se convierte en una fuente de aprendizaje colectivo y cómo usar los post-mortems de campañas que no funcionaron para mejorar el proceso de decisión sin convertirlos en una sesión de búsqueda de culpables.

Termina con un checklist de decisión de marketing que el equipo pueda usar en las reuniones de estrategia: las preguntas que deben hacerse antes de comprometer presupuesto o dirección estratégica, los datos mínimos que deben tener y los sesgos que deben verificar explícitamente antes de cerrar la decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Mejorar la calidad de las decisiones de marketing cuando los datos son imperfectos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Pensamiento sistémico para arquitectos técnicos',
                'description'      => 'El developer que ve el sistema completo: las herramientas del pensamiento sistémico aplicadas a la arquitectura de software, los bucles de retroalimentación y los efectos de segundo orden que solo se ven cuando piensas en el sistema completo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en pensamiento sistémico aplicado a la arquitectura de software y al diseño de sistemas técnicos complejos. Quiero que me ayudes a desarrollar la capacidad de ver y razonar sobre los sistemas técnicos como un todo, identificando los bucles de retroalimentación, los efectos no deseados y las consecuencias de segundo orden que no son visibles cuando se diseña componente por componente.

Mi contexto:
- Tipo de sistema que diseño o mantengo: [sistema distribuido, monolito en transición a microservicios, plataforma de datos, sistema de tiempo real, aplicación SaaS multi-tenant]
- Tamaño y complejidad del sistema: [número de servicios o componentes, número de usuarios, volumen de datos]
- Principal problema actual: [el sistema tiene comportamientos emergentes inesperados, los cambios en un componente tienen efectos imprevisibles en otros, el rendimiento degrada de formas que no entendemos, los incidentes se propagan de formas que sorprenden]
- Mi rol: [arquitecto de soluciones, senior engineer, tech lead, staff engineer, CTO]

Con esa información, quiero que me entregues:

1. LOS FUNDAMENTOS DEL PENSAMIENTO SISTÉMICO APLICADOS AL SOFTWARE
Explica los conceptos fundamentales del pensamiento sistémico y cómo se traducen al diseño de sistemas de software: los stocks y los flows (los estados del sistema y los procesos que los cambian), los bucles de retroalimentación positiva (que amplifican los cambios, como el crecimiento de la base de usuarios que requiere más recursos que a su vez permiten más usuarios) y los bucles de retroalimentación negativa (que estabilizan el sistema, como los circuit breakers que limitan la propagación de fallos), los retrasos en el sistema (la latencia entre una causa y su efecto que hace que las intervenciones parezcan no funcionar hasta que es tarde) y las propiedades emergentes (el comportamiento del sistema que no se puede predecir sumando el comportamiento de los componentes individuales).

2. DIAGRAMAS DE BUCLES CAUSALES EN ARQUITECTURA DE SOFTWARE
Explica cómo usar los diagramas de bucles causales (Causal Loop Diagrams) para modelar las interdependencias en un sistema de software: cómo identificar las variables del sistema que importan (latencia, throughput, error rate, tamaño de la cola, número de workers), cómo trazar las relaciones de causalidad entre ellas (si aumenta X, ¿qué pasa con Y?), cómo identificar los bucles de retroalimentación en el diagrama (los círculos de causas y efectos que se retroalimentan), cómo usar el diagrama para predecir el comportamiento del sistema bajo condiciones de estrés y cómo identificar los puntos de intervención que tienen mayor influencia sobre el comportamiento del sistema. Dame un ejemplo de diagrama de bucles causales para un sistema de procesamiento de mensajes bajo carga.

3. EFECTOS DE SEGUNDO Y TERCER ORDEN EN LAS DECISIONES DE ARQUITECTURA
Define el proceso para identificar los efectos de segundo y tercer orden de las decisiones de arquitectura antes de implementarlas: los efectos directos son fáciles de ver (si añado un caché, las lecturas serán más rápidas), los efectos de segundo orden son los que se derivan de los primeros (si las lecturas son más rápidas, el usuario hace más lecturas, lo que aumenta la presión sobre el caché) y los efectos de tercer orden son los que emergen cuando el sistema se adapta a los efectos de segundo orden (el caché se invalida más frecuentemente, lo que produce más cache misses en momentos de alta concurrencia). Para cada tipo de decisión de arquitectura (añadir un caché, introducir un message broker, pasar de monolito a microservicios, añadir un rate limiter), explica los efectos de segundo y tercer orden que hay que considerar.

4. ARQUETIPOS SISTÉMICOS EN SOFTWARE: PATRONES QUE SE REPITEN
Explica los arquetipos sistémicos más comunes que aparecen en los sistemas de software y las organizaciones técnicas: el arquetipo "Shifting the Burden" (resolver el síntoma en lugar de la causa raíz, que hace que el sistema se vuelva cada vez más dependiente de la solución parcial), el arquetipo "Limits to Growth" (un motor de crecimiento que choca con un límite que no se ha identificado a tiempo), el arquetipo "Tragedy of the Commons" (recursos compartidos que se degradan porque ningún equipo tiene responsabilidad individual sobre su estado) y el arquetipo "Escalation" (dos componentes o equipos que se sobredimensionan mutuamente en respuesta a los cambios del otro). Para cada arquetipo, dame un ejemplo concreto en un sistema de software y el patrón de intervención correcto.

5. DISEÑO DE SISTEMAS RESILIENTES DESDE UNA PERSPECTIVA SISTÉMICA
Diseña el framework para construir sistemas de software que son resilientes no porque cada componente sea perfecto sino porque el sistema en su conjunto absorbe y se recupera de los fallos: el principio de que la resiliencia es una propiedad emergente del sistema (no de los componentes individuales), cómo diseñar los bucles de feedback negativos que estabilizan el sistema cuando se degrada (circuit breakers, backpressure, rate limiting, timeout cascadeado), cómo diseñar la degradación elegante (el sistema que ofrece funcionalidad reducida en lugar de fallar completamente), cómo usar el chaos engineering como herramienta de aprendizaje sistémico y cómo diseñar los observability systems para que el equipo pueda razonar sobre el estado del sistema durante un incidente.

6. PENSAMIENTO SISTÉMICO EN LA TOMA DE DECISIONES DE ARQUITECTURA
Explica cómo integrar el pensamiento sistémico en el proceso de decisión de arquitectura del día a día: cómo usar la pregunta "¿y luego qué?" en cadena para identificar los efectos de largo plazo de una decisión técnica, cómo facilitar las discusiones de arquitectura para que el equipo razone sobre el sistema completo y no solo sobre el componente que están diseñando, cómo documentar los supuestos sistémicos de una decisión de arquitectura para poder revisarlos cuando el sistema evoluciona, cómo usar los Architecture Decision Records (ADRs) para capturar no solo la decisión sino el modelo sistémico que la fundamenta y cómo construir la cultura de pensamiento sistémico en un equipo de ingeniería que tiende al pensamiento local y a corto plazo.

Termina con los cinco anti-patrones más comunes en el diseño de sistemas que se pueden evitar con pensamiento sistémico: el equipo que optimiza su componente degradando el sistema, el arquitecto que diseña para el caso de uso actual sin modelar el crecimiento, el equipo que elimina el monitoring de un componente que "siempre funciona" y el ingeniero que introduce una dependencia sin analizar los bucles de retroalimentación que crea.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar el pensamiento sistémico al diseño y análisis de arquitecturas de software complejas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Toma de decisiones de diseño con evidencia limitada',
                'description'      => 'Decide el diseño cuando no tienes el presupuesto ni el tiempo para el research perfecto: los métodos de diseño con información limitada, los heurísticos de Nielsen y el proceso de decisión que minimiza el riesgo sin paralizarse.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de experiencia de usuario y en la toma de decisiones de diseño bajo condiciones de incertidumbre. Quiero que me ayudes a desarrollar un proceso de toma de decisiones de diseño que sea riguroso sin requerir el research extensivo que en la mayoría de los proyectos no hay tiempo ni presupuesto para hacer, usando los métodos de validación rápida y los principios heurísticos que minimizan el riesgo de un mal diseño.

Mi contexto:
- Tipo de proyecto de diseño: [aplicación web, app móvil, rediseño de producto existente, diseño de nuevo servicio, e-commerce]
- Presupuesto y tiempo disponible para research: [ninguno, mínimo (1-2 semanas), moderado]
- Equipo con el que trabajo: [solo, equipo pequeño de diseño, equipo multifuncional con desarrollo y producto]
- Principal problema en las decisiones de diseño: [el cliente o el PM decide basándose en preferencias personales, hay demasiadas opiniones sin datos que las respalden, las decisiones se toman tarde cuando ya es costoso cambiarlas]
- Usuarios del producto: [acceso limitado a usuarios reales, comunidad activa de usuarios, usuarios internos de empresa]

Con esa información, quiero que me entregues:

1. HEURÍSTICOS DE NIELSEN: LOS PRINCIPIOS QUE SUSTITUYEN AL RESEARCH
Explica los 10 heurísticos de usabilidad de Jakob Nielsen como herramienta de evaluación de diseño que no requiere usuarios: cada heurístico con su definición, su aplicación práctica en el diseño de productos digitales y tres ejemplos de violaciones comunes que deberías identificar en un audit de usabilidad heurística. Explica también cómo hacer un análisis heurístico en práctica: el proceso, el tiempo necesario, el número de evaluadores recomendado y cómo documentar y priorizar los hallazgos. Define cuándo el análisis heurístico es suficiente y cuándo los heurísticos no pueden sustituir al research con usuarios reales.

2. MÉTODOS DE RESEARCH RÁPIDO: EVIDENCIA EN TIEMPO RÉCORD
Define el catálogo de métodos de research que generan insights accionables en poco tiempo y con poco presupuesto: las entrevistas de usuario de 30 minutos (cómo reclutar a 5 usuarios en 48 horas, qué preguntar, cómo sintetizar los hallazgos en insights accionables), el guerrilla testing (cómo hacer tests de usabilidad informales en una cafetería o con compañeros de trabajo en un día), los tests de 5 segundos (qué información revela la primera impresión y cómo interpretar los resultados), el análisis de datos de comportamiento existentes (qué puedes aprender de Analytics, Hotjar o el feedback del equipo de soporte sin hacer research nuevo) y los tests de concepto con prototipos en papel. Para cada método, especifica el tiempo mínimo necesario, el coste y qué tipo de preguntas de diseño responde.

3. EL ÁRBOL DE DECISIÓN DEL DISEÑADOR PRAGMÁTICO
Define el proceso de decisión cuando hay opciones de diseño en conflicto y tiempo limitado para resolverlo: primero comprobar si hay un patrón de diseño establecido que resuelve el problema (los design patterns de Material Design, Human Interface Guidelines o los patrones de Mobbin que eliminan la decisión porque ya hay una solución probada), segundo revisar si hay datos de comportamiento existentes que orientan la decisión, tercero hacer un análisis heurístico rápido de las opciones en conflicto, cuarto hacer un test de concepto con 3-5 personas si las opciones siguen en empate y quinto tomar la decisión con el mejor criterio disponible documentando los supuestos que la fundamentan. Dame el árbol de decisión completo con los criterios de salida de cada rama.

4. PRIORIZACIÓN DE PROBLEMAS DE DISEÑO CON DATOS LIMITADOS
Explica cómo priorizar los problemas de diseño cuando tienes más problemas identificados de los que puedes resolver: la matriz de impacto/esfuerzo aplicada al UX (cómo evaluar el impacto de un problema de usabilidad en los objetivos del usuario y del negocio, cómo estimar el esfuerzo de diseño e implementación), cómo usar la frecuencia y la severidad de un problema como criterios de priorización (un problema que afecta a todos los usuarios en el flujo principal es más crítico que uno que afecta a pocos usuarios en un flujo secundario), cómo comunicar la priorización al cliente o al PM de forma que sea comprensible sin jerga de UX y cómo decidir qué problemas aceptar y no resolver en esta iteración.

5. COMUNICAR DECISIONES DE DISEÑO SIN DATOS PERFECTOS
Explica cómo defender y comunicar decisiones de diseño cuando no tienes el research extensivo que el cliente o el stakeholder podría pedir: cómo usar los principios de diseño y los heurísticos como lenguaje compartido que no requiere datos de usuario para ser convincente, cómo presentar las opciones que has evaluado (no solo la elegida) para mostrar que la decisión es el resultado de un proceso y no de una preferencia, cómo cuantificar el riesgo de la decisión sin investigación adicional y el coste de hacer más research antes de decidir, cómo proponer un plan de validación post-lanzamiento que completa la evidencia que faltaba en el momento de la decisión y cómo documentar las decisiones de diseño en un formato que permite revisarlas cuando hay más datos disponibles.

6. EL DISEÑADOR COMO FACILITADOR DE DECISIONES DE EQUIPO
Define el rol del diseñador en la facilitación de las decisiones de diseño que involucran a múltiples stakeholders: cómo facilitar el design critique (la sesión de feedback estructurado que separa la opinión personal del análisis de usabilidad), cómo usar los dot voting y otros métodos de facilitación para llegar a una decisión cuando hay múltiples opiniones en el equipo sin que la reunión acabe en parálisis o en que gana quien habla más alto, cómo manejar el cliente o el stakeholder que tiene una opinión muy definida sobre el diseño (el síndrome del "yo en lugar del usuario") y cómo construir el proceso de decisión de diseño en el equipo que sea riguroso y rápido a la vez.

Termina con un kit de supervivencia del diseñador sin datos: los recursos, los checklists y los procesos que puedes activar cuando tienes que tomar una decisión de diseño importante mañana y no tienes ni tiempo ni presupuesto para el research que necesitarías idealmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Tomar decisiones de diseño rigurosas cuando el tiempo y el presupuesto de research son limitados',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Cualificación de oportunidades: saber cuándo seguir y cuándo soltar',
                'description'      => 'El comercial que no persigue todos los deals sino los correctos: el framework de cualificación, las señales que indican que un deal no va a cerrar y el proceso de parar de invertir tiempo donde no hay retorno.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en cualificación de oportunidades de ventas y en la gestión eficiente del pipeline comercial. Quiero que me ayudes a desarrollar el criterio y el proceso que me permite identificar qué oportunidades merecen mi tiempo y energía y cuáles debo descartar antes de invertir semanas o meses en un deal que no va a cerrar.

Mi contexto:
- Tipo de ventas que hago: [B2B SaaS, servicios profesionales, hardware enterprise, consultoría, distribución]
- Ciclo de venta típico: [semanas o meses, número de reuniones típicas antes del cierre]
- Principal problema con el pipeline actual: [demasiados deals que no avanzan y acaparan tiempo, no sé cuándo parar de invertir en un deal en duda, cierro menos deals de los que debería por perseguir los equivocados]
- Framework de cualificación que uso actualmente: [ninguno, BANT, MEDDIC, SPICED, otro]
- Tamaño medio del deal y ciclo de decisión del cliente: [aproximado]

Con esa información, quiero que me entregues:

1. POR QUÉ LOS VENDEDORES PERSIGUEN DEALS QUE NO VAN A CERRAR
Explica los mecanismos psicológicos que llevan a los vendedores a seguir invirtiendo tiempo en oportunidades que deberían haber descartado: el sunk cost fallacy (cuanto más tiempo he invertido en un deal, más difícil es soltarlo aunque las señales sean negativas), el optimismo natural del vendedor (que interpreta las señales ambiguas como positivas porque quiere que el deal funcione), la presión del pipeline (necesito deals en el pipeline para que el CRM y el manager estén contentos, aunque los deals no sean reales), el miedo a cerrar la oportunidad y tener que prospectar más y la confusión entre actividad y progreso (muchas reuniones no significa avance real en el proceso de compra del cliente). Dame el test de auto-diagnóstico para saber si estoy en este patrón.

2. FRAMEWORKS DE CUALIFICACIÓN: MEDDIC, BANT Y SPICED
Explica en profundidad los tres frameworks de cualificación más usados y cuándo usar cada uno: BANT (Budget, Authority, Need, Timing, el más sencillo y el menos predictivo), MEDDIC/MEDDPICC (Metrics, Economic Buyer, Decision Criteria, Decision Process, Identify Pain, Champion, Competition, el más riguroso para ventas enterprise) y SPICED (Situation, Pain, Impact, Critical Event, Decision, diseñado para SaaS con ciclos más cortos). Para cada framework, explica qué preguntas usar para obtener la información de cada criterio, cuándo hacer estas preguntas en el proceso de venta (no todas en la primera llamada) y cómo interpretar las respuestas para tomar la decisión de seguir o no.

3. LAS SEÑALES DE ALERTA QUE PREDICEN UN DEAL QUE NO VA A CERRAR
Define el catálogo de red flags que indican que una oportunidad tiene baja probabilidad de cierre: el contacto que no puede conseguirte una reunión con el decisor económico después de varias semanas (no tiene influencia real), el deal que lleva meses en la misma etapa del pipeline sin avanzar (no hay urgencia real), el cliente que pide más información y demos pero no avanza hacia la decisión (está usando el proceso de evaluación para conseguir información de forma gratuita sin intención de comprar), la ausencia de un evento crítico que hace que el cliente tenga que decidir antes de una fecha (sin urgencia no hay cierre), el contacto que no puede explicarte el proceso de decisión de la empresa (no está dentro del proceso real de compra) y el presupuesto que "se está gestionando" pero que nadie puede confirmar que existe. Para cada señal, dame la pregunta que la revela.

4. EL PROCESO DE DESCALIFICACIÓN: CÓMO SALIR SIN QUEMAR LA RELACIÓN
Define el proceso de descalificación de una oportunidad que preserva la relación con el contacto: cómo tener la conversación de "necesito entender si tiene sentido seguir adelante" que es honesta sin ser agresiva, cómo hacer las preguntas que revelan si el deal es real o no sin que el contacto sienta que lo estás interrogando, cómo comunicar la decisión de no seguir invirtiendo tiempo en la oportunidad sin dejar al contacto con mal sabor de boca (el contacto de hoy puede ser el decisor de mañana o puede referirte a otros clientes) y cómo dejar la puerta abierta para el futuro cuando las circunstancias del cliente cambien.

5. EL PIPELINE SALUDABLE: CALIDAD SOBRE CANTIDAD
Explica cómo construir y mantener un pipeline de oportunidades que sea pequeño, cualificado y de alta probabilidad de cierre: cuántas oportunidades debe tener un vendedor en el pipeline en función de su cuota y de su ciclo de venta (la cobertura de pipeline óptima por etapa), cómo calcular la probabilidad real de cierre de cada oportunidad en función de los criterios de cualificación (no la probabilidad que pones en el CRM para que el manager no te presione, sino la que usarías para apostar tu propio dinero), cómo revisar el pipeline semanalmente para identificar los deals que necesitan acción y los que necesitan descalificación y cómo comunicar al manager un pipeline más pequeño pero más real sin que genere pánico.

6. LA DISCIPLINA DE LA CUALIFICACIÓN CONTINUA
Define el proceso de cualificación continua a lo largo de todo el ciclo de venta: la cualificación no es un evento puntual que ocurre en la primera reunión sino un proceso continuo de validación y revalidación de los criterios de cualificación a medida que el deal avanza. Explica cómo reevaluar la cualificación en cada etapa del proceso de venta (los criterios que importan en el discovery son distintos a los que importan cuando el deal está en la fase de propuesta), cómo gestionar el deal que pasa de cualificado a dudoso a mitad del proceso (cambio de decisor, pérdida de presupuesto, aparición de un competidor), cuándo hacer la pregunta directa al cliente sobre la probabilidad de compra y cómo interpretar su respuesta.

Termina con un scorecard de cualificación personalizado para mi tipo de venta: los criterios con sus pesos, la puntuación de corte por debajo de la cual descalifico la oportunidad y las preguntas específicas para obtener la información de cada criterio de forma natural en la conversación de ventas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Cualificar oportunidades de venta con rigor para invertir el tiempo donde hay retorno real',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product decisions bajo incertidumbre: apostar con inteligencia',
                'description'      => 'Toma decisiones de producto cuando no tienes todos los datos: el expected value, los experimentos como herramienta de decisión y el proceso que convierte la incertidumbre en aprendizaje en lugar de parálisis.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en toma de decisiones de producto bajo incertidumbre y en el diseño de procesos de aprendizaje continuo para equipos de producto. Quiero que me ayudes a desarrollar un framework de decisión que me permita apostar con inteligencia cuando los datos son incompletos, evitar la parálisis por análisis y construir el sistema de aprendizaje que mejora la calidad de mis decisiones en el tiempo.

Mi contexto:
- Tipo de producto: [SaaS B2B, app de consumo, plataforma marketplace, producto interno, producto de datos]
- Tamaño del equipo y madurez del producto: [producto nuevo en búsqueda de product-market fit, producto en crecimiento, producto en madurez]
- Principal problema en las decisiones de producto: [demasiada incertidumbre sobre qué construir, no tenemos datos suficientes para decidir, las decisiones se toman por intuición o por la opinión del más senior, no aprendemos de nuestras decisiones pasadas]
- Ciclo de entrega y velocidad de iteración: [lanzamos cada semana / cada mes / ciclos más largos]

Con esa información, quiero que me entregues:

1. EL EXPECTED VALUE EN DECISIONES DE PRODUCTO
Explica cómo aplicar el concepto de valor esperado (expected value) a las decisiones de producto: qué es el valor esperado (la suma ponderada de los posibles resultados multiplicados por su probabilidad), cómo estimar las probabilidades de los distintos escenarios de una decisión de producto (qué pasa si la funcionalidad tiene éxito, qué pasa si fracasa, qué pasa si no la construimos), cómo estimar el valor de cada escenario (en métricas de negocio: retención, conversión, revenue, engagement), cómo calcular y comparar el expected value de distintas opciones y cuáles son las limitaciones del expected value cuando las probabilidades son muy inciertas o cuando los escenarios negativos son catastróficos. Dame un ejemplo completo de análisis de expected value para una decisión de producto típica.

2. CUÁNDO EXPERIMENTAR Y CUÁNDO DECIDIR SIN EXPERIMENTO
Define el framework de decisión sobre cuándo hacer un experimento antes de la decisión de producto y cuándo es mejor decidir directamente: el experimento merece la pena cuando la incertidumbre es alta, el coste del experimento es bajo en relación al coste de equivocarse y los resultados del experimento van a cambiar la decisión; la decisión directa es mejor cuando la incertidumbre es baja, el coste de esperar al experimento es mayor que el coste de equivocarse o el experimento no sería válido por las condiciones del mercado. Define los criterios específicos para esta decisión y las situaciones donde el PM cae en la trampa de pedir más datos cuando en realidad está evitando la decisión.

3. DISEÑO DE EXPERIMENTOS DE PRODUCTO: MÁS ALLÁ DEL A/B TEST
Explica cómo diseñar experimentos de producto que generan insights de decisión, no solo datos: la hipótesis como elemento central del experimento (la hipótesis que, si es verdadera, cambia la decisión), los experimentos cuantitativos para validar hipótesis de comportamiento (A/B tests, tests de adopción, tests de retención), los experimentos cualitativos para validar hipótesis de valor (entrevistas de problema, tests de concepto, fake door tests), los experimentos de bajo coste para validar antes de construir (landing pages de funcionalidades no existentes, Wizard of Oz, concierge MVP) y cómo diseñar el experimento para que los resultados sean interpretables (el tamaño de muestra mínimo, el período de tiempo, la métrica principal y las métricas de guardia que evitan que el experimento dañe la experiencia del usuario).

4. EL COSTO DE LA INCERTIDUMBRE Y EL VALOR DE LA INFORMACIÓN
Explica cómo cuantificar el valor de conseguir más información antes de decidir: el concepto del valor de la información perfecta (cuánto vale saber con certeza el resultado de una decisión, que es el límite máximo que tiene sentido gastar en research o en un experimento), el valor de la información imperfecta (cuánto vale reducir la incertidumbre un porcentaje determinado), cómo aplicar este análisis a una decisión de producto concreta para saber si tiene sentido hacer un sprint de discovery antes de ponerse a construir y cómo comunicar este análisis al equipo para que todos entiendan por qué se está invirtiendo tiempo en research que podría usarse para construir.

5. PROCESAR EL FRACASO: APRENDER DE LAS DECISIONES QUE NO FUNCIONARON
Define el proceso de aprendizaje de las decisiones de producto que no producen el resultado esperado: cómo distinguir una mala decisión de un mal resultado (una decisión puede ser correcta en proceso y tener un mal resultado por mala suerte, y viceversa), cómo hacer el post-mortem de una decisión de producto fallida de forma que genere aprendizaje real (la hipótesis que tenías, los supuestos que has invalidado, lo que harías diferente), cómo crear el decision log del equipo de producto que acumula el aprendizaje de las decisiones pasadas, cómo evitar que los post-mortems se conviertan en sesiones de búsqueda de culpables y cómo usar el fracaso para calibrar mejor las estimaciones de probabilidad en futuras decisiones.

6. LA CULTURA DE DECISIÓN EN EL EQUIPO DE PRODUCTO
Explica cómo construir la cultura de decisión en el equipo de producto que es a la vez rigurosa y rápida: cómo crear el ambiente donde el equipo se siente cómodo tomando decisiones con incertidumbre sin esperar certezas que nunca llegan, cómo distinguir las decisiones reversibles (que se pueden tomar rápido y ajustar) de las irreversibles (que merecen más análisis), cómo usar el concepto de "type 1 y type 2 decisions" de Amazon en el contexto del equipo de producto, cómo delegar las decisiones al nivel correcto del equipo (el PM no debería ser el cuello de botella de todas las decisiones), cómo hacer las reuniones de decisión de producto más eficientes (quién decide, qué información se necesita, en cuánto tiempo) y cómo comunicar las decisiones y sus razones al resto de la organización.

Termina con un manual de decisión de producto en una página: el proceso de toma de decisiones del equipo, el template de decisión que todos usan, los criterios para decidir qué necesita experimento y qué no, y la cadencia de revisión de las decisiones pasadas que mantiene el sistema de aprendizaje funcionando.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar un framework de decisión de producto que equilibra rigor y velocidad bajo incertidumbre',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Decisiones de talento bajo incertidumbre: contratar sin garantías',
                'description'      => 'Las decisiones de contratación, promoción y desvinculación siempre tienen incertidumbre: el proceso de decisión estructurado, los sesgos que distorsionan las decisiones de personas y las técnicas que mejoran su calidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en psicología organizacional y en el diseño de procesos de decisión de talento para profesionales de RRHH y managers. Quiero que me ayudes a desarrollar un proceso de decisión más riguroso para las decisiones de talento —contratación, promoción, evaluación de desempeño y desvinculación— que minimice el impacto de los sesgos cognitivos y produzca mejores resultados con la incertidumbre inherente a las decisiones sobre personas.

Mi contexto:
- Tipos de decisiones de talento que tomo regularmente: [contratación, promoción, evaluación de desempeño, planes de desarrollo, desvinculaciones]
- Tamaño de la organización y sector: [aproximado]
- Principal problema en las decisiones de talento actuales: [demasiada subjetividad, inconsistencia entre managers, sesgo en la selección de ciertos perfiles, dificultad para justificar decisiones de desvinculación, promociones que no predicen el desempeño en el nuevo rol]
- Procesos actuales: [sin proceso estructurado, proceso básico, proceso completo pero con baja adherencia]

Con esa información, quiero que me entregues:

1. LOS SESGOS QUE DISTORSIONAN LAS DECISIONES DE TALENTO
Explica los principales sesgos cognitivos que afectan las decisiones de personas: el sesgo de afinidad (favorecemos a candidatos que se parecen a nosotros en experiencia, formación o personalidad), el efecto halo (si el candidato es bueno en lo que evaluamos primero, asumimos que es bueno en todo), el sesgo de confirmación (interpretamos la información de la entrevista para confirmar la primera impresión que nos dio el CV), el sesgo de contraste (evaluamos a un candidato en relación al candidato anterior en lugar de en relación a los criterios del puesto), el sesgo de atribución fundamental (atribuimos el comportamiento del candidato a rasgos de personalidad en lugar de a circunstancias), el sesgo de recencia (en la evaluación del desempeño, recordamos mejor los eventos más recientes) y el sesgo de la semejanza cultural (rechazamos a candidatos que desafían la cultura actual sin evaluar si esa cultura debe cambiar). Para cada sesgo, dame una técnica específica para reducir su impacto.

2. EL PROCESO DE CONTRATACIÓN ESTRUCTURADA QUE PREDICE EL DESEMPEÑO
Define el proceso de contratación estructurada que mejora la calidad de las decisiones de selección: la definición del perfil de éxito del puesto (las competencias que predicen el desempeño en este rol específico, no el rol genérico), el diseño de la scorecard del puesto (criterios medibles, orden de importancia, descriptores de qué significa cada nivel), la entrevista estructurada de comportamiento (el método STAR, las preguntas que evalúan evidencia pasada como predictor del comportamiento futuro), la calibración del panel entrevistador (cómo alinear los criterios antes de las entrevistas y cómo consolidar las evaluaciones después sin que el más senior sesga a los demás), los ejercicios prácticos o cases como validación de habilidades y cómo tomar la decisión final basada en la scorecard y no en la reacción visceral.

3. DECISIONES DE PROMOCIÓN: EVALUAR EL POTENCIAL, NO SOLO EL DESEMPEÑO ACTUAL
Explica el proceso de decisión de promoción que diferencia el desempeño en el rol actual del potencial para el rol siguiente: el error más caro en management (promover al mejor individual contributor a manager porque es el mejor individual contributor, sin evaluar si tiene las habilidades de liderazgo), cómo evaluar el potencial de liderazgo (la capacidad de abstraer, la disposición a aprender, la capacidad de influir sin autoridad), cómo usar el assessment de 360 grados como herramienta de evaluación de potencial, cómo diseñar los proyectos de stretch assignment que revelan el potencial antes de la promoción formal, cómo calibrar las decisiones de promoción entre managers para que el criterio sea consistente en toda la organización y cómo comunicar las decisiones de no-promoción de forma que no destruyan la motivación del empleado.

4. EVALUACIÓN DE DESEMPEÑO: REDUCIR LA SUBJETIVIDAD
Diseña el proceso de evaluación de desempeño que minimiza la subjetividad sin convertirse en un ejercicio burocrático: la definición de expectativas claras y medibles al inicio del período de evaluación (OKRs, objetivos SMART o cualquier sistema que permita la evaluación objetiva al final), el proceso de recogida de evidencia durante el año (el performance journal que el manager mantiene para no depender solo de la memoria al final del año), la calibración de ratings entre managers (el proceso de normalización que evita que un manager con estándares altos penalice a sus empleados frente a un manager con estándares bajos), el uso de los datos de 360 feedback como complemento (no como sustituto) de la evaluación del manager y cómo documentar las evaluaciones de forma que sean defensibles si el empleado las cuestiona.

5. DECISIONES DE DESVINCULACIÓN: RIGOR Y HUMANIDAD
Explica el proceso de toma de decisiones de desvinculación que es a la vez riguroso y humano: cómo documentar el proceso de gestión del desempeño que precede a la decisión de desvinculación (los feedbacks, los planes de mejora, los hitos y los resultados), cómo evaluar si la desvinculación es la decisión correcta o si hay alternativas que no se han considerado (un cambio de rol, un cambio de manager, un cambio de equipo), cómo tomar la decisión en comité para reducir el sesgo individual, cómo preparar y ejecutar la conversación de desvinculación con dignidad, cómo gestionar el proceso legal y administrativo según la regulación aplicable y cómo comunicar la salida al equipo de forma que no genere inseguridad entre los que se quedan.

6. CALIBRACIÓN Y APRENDIZAJE: MEJORAR LA CALIDAD DE LAS DECISIONES EN EL TIEMPO
Define el sistema de mejora continua de las decisiones de talento: el seguimiento del desempeño de las contrataciones realizadas (el "quality of hire" a 6 y 12 meses que valida el proceso de selección), el análisis de los patrones de desvinculación (qué tipo de contrataciones no funcionan y por qué, qué señales en el proceso de selección las habría identificado antes), el análisis de las promociones que no funcionaron (el manager que no tenía las habilidades de liderazgo que el equipo de selección creyó que tenía), la revisión anual del proceso de decisión de talento con el equipo de RRHH para identificar los sesgos más recurrentes y cómo el sistema de decisión puede mejorarse para el siguiente ciclo.

Termina con un kit de decisiones de talento para managers: las herramientas, los templates y los procesos que un manager necesita para tomar mejores decisiones de personas en el día a día, sin convertir cada decisión en un proceso burocrático.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejorar la calidad de las decisiones de talento reduciendo sesgos y aumentando la consistencia',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de escenarios y gestión de la incertidumbre financiera',
                'description'      => 'Construye modelos que acomodan la incertidumbre: el análisis de escenarios, el análisis de Montecarlo y las técnicas de gestión del riesgo que permiten tomar decisiones financieras informadas cuando el futuro es imprevisible.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en modelización financiera y en la gestión de la incertidumbre para directores financieros y analistas. Quiero que me ayudes a diseñar el sistema de análisis financiero que toma decisiones inteligentes cuando el futuro no es previsible: los modelos de escenarios, los análisis de sensibilidad y las técnicas de gestión del riesgo que permiten planificar de forma robusta en lugar de construir un modelo puntual que todo el mundo sabe que estará equivocado.

Mi contexto:
- Tipo de empresa y sector: [startup, empresa mediana en crecimiento, empresa industrial, empresa de servicios financieros]
- Tipo de decisión financiera que necesito modelizar: [plan de negocio para inversores, decisión de inversión en nueva capacidad, presupuesto anual, valoración de empresa para adquisición]
- Principal fuente de incertidumbre en tu negocio: [precio de las materias primas, tipo de cambio, crecimiento del mercado, comportamiento del cliente, regulación]
- Herramientas disponibles: [Excel, Python, modelos financieros básicos, sistema de BI]
- Audiencia del análisis: [junta directiva, inversores, banco, equipo directivo]

Con esa información, quiero que me entregues:

1. ANÁLISIS DE ESCENARIOS: MÁS ALLÁ DEL MEJOR/PEOR CASO
Explica el diseño de un análisis de escenarios riguroso que va más allá del simplista "optimista, base y pesimista": cómo identificar las variables de incertidumbre clave que determinan el resultado del negocio (las variables que tienen alto impacto y alta incertidumbre, distinguiéndolas de las que tienen alto impacto pero son predecibles y las que son inciertas pero irrelevantes), cómo construir escenarios internamente consistentes (los escenarios no son combinaciones aleatorias de las variables sino historias coherentes sobre el futuro), cómo definir los 3-5 escenarios que capturan el espacio de posibilidades relevante (no el peor caso posible sino el peor caso plausible), cómo asignar probabilidades a los escenarios de forma que sean justificables y cómo usar los escenarios para tomar decisiones más robustas (la estrategia que funciona bien en varios escenarios es mejor que la que solo funciona en el escenario base).

2. ANÁLISIS DE SENSIBILIDAD: IDENTIFICAR LAS VARIABLES QUE MÁS IMPORTAN
Define el proceso de análisis de sensibilidad que identifica qué variables tienen más impacto en el resultado: el análisis de sensibilidad one-way (cómo varía el resultado cuando cambias una variable manteniendo las demás constantes), el tornado chart como herramienta de visualización de la sensibilidad (qué variables tienen el mayor rango de impacto), el análisis de sensibilidad two-way (cómo interaccionan dos variables clave), la interpretación de los resultados del análisis de sensibilidad para priorizar la mitigación de riesgos (las variables con más impacto son las que merecen planes de contingencia), cómo comunicar los resultados del análisis de sensibilidad a una audiencia no técnica y cómo usar el análisis de sensibilidad para identificar los supuestos del modelo que son más críticos de validar.

3. SIMULACIÓN DE MONTECARLO: CUANDO LAS DISTRIBUCIONES IMPORTAN
Explica cuándo y cómo usar la simulación de Montecarlo para modelizar la incertidumbre financiera: cuándo la simulación de Montecarlo aporta más que el análisis de escenarios (cuando hay muchas variables independientes con incertidumbre o cuando las distribuciones no son simétricas), cómo definir las distribuciones de probabilidad para las variables de entrada (uniforme, normal, triangular, log-normal y cuándo usar cada una), cómo interpretar los resultados de la simulación (la distribución de probabilidad del resultado, el percentil 10 y el 90 como rango de confianza, la probabilidad de alcanzar un objetivo específico), las herramientas para hacer simulación de Montecarlo en Excel (@RISK, Crystal Ball, Python con numpy) y las limitaciones de la simulación de Montecarlo (la correlación entre variables, los fat tails, los eventos discretos).

4. GESTIÓN DEL RIESGO FINANCIERO: DEL ANÁLISIS A LA ACCIÓN
Define el proceso de gestión del riesgo financiero que convierte el análisis en decisiones: la identificación del risk appetite de la organización (cuánta variabilidad en los resultados puede asumir sin que sea un problema existencial), las estrategias de mitigación de riesgos financieros (hedging de divisas y materias primas, contratos de precio fijo con proveedores, diversificación de clientes y mercados, seguros), el análisis coste-beneficio de la mitigación (cuánto cuesta el hedge y cuánto valor protege), el diseño del plan de contingencia para los escenarios adversos (qué decisiones se toman automáticamente si el negocio cae por debajo de una métrica clave) y los covenants financieros como herramienta de disciplina y de comunicación con los financiadores.

5. PLANIFICACIÓN FINANCIERA DINÁMICA: ACTUALIZAR EL MODELO CUANDO CAMBIA EL CONTEXTO
Explica el proceso de planificación financiera dinámica que actualiza las proyecciones cuando la realidad cambia: la diferencia entre el presupuesto (el compromiso del principio de año) y el forecast (la mejor estimación actualizada del resultado esperado), los procesos de reforecast trimestral que mantienen el modelo relevante, el rolling forecast como alternativa al presupuesto anual fijo (proyecciones a 12-18 meses que se actualizan mensualmente), cómo comunicar las desviaciones del presupuesto al comité de dirección de forma que genere decisiones y no solo accountability, cómo usar los indicadores adelantados (leading indicators) que predicen las métricas financieras con semanas o meses de antelación para actuar antes de que el problema aparezca en los estados financieros.

6. COMUNICAR LA INCERTIDUMBRE A LOS STAKEHOLDERS
Explica cómo comunicar modelos financieros con incertidumbre a diferentes audiencias: al consejo de administración (que necesita el rango de resultados y las decisiones estratégicas que dependen de en qué escenario estamos), a los inversores (que quieren entender el risk-adjusted return y la gestión que hace el equipo del riesgo), al banco (que quiere el stress test del modelo de deuda y las coberturas del riesgo de crédito), al equipo directivo (que necesita los indicadores que activan los planes de contingencia y los límites de inversión en cada escenario) y al equipo financiero (que ejecuta los modelos y necesita entender los supuestos para actualizarlos correctamente). Para cada audiencia, define el formato y el nivel de detalle correcto.

Termina con un template de modelo de escenarios para mi tipo de empresa: la estructura del modelo, las variables de incertidumbre que hay que modelizar, los escenarios que hay que definir y el proceso de actualización mensual que mantiene el modelo relevante durante el año.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir modelos financieros que acomodan la incertidumbre y mejoran las decisiones bajo riesgo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Asesoramiento jurídico bajo incertidumbre: dar consejo cuando la ley no es clara',
                'description'      => 'Cuando la normativa es ambigua o el precedente no existe: el proceso de análisis jurídico en terreno incierto, la comunicación del riesgo al cliente y la responsabilidad del abogado que da consejo en la zona gris.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en metodología jurídica y en el asesoramiento en situaciones de incertidumbre normativa. Quiero que me ayudes a desarrollar el proceso de análisis y comunicación del consejo jurídico en los casos donde la ley no es clara: la normativa reciente sin desarrollar reglamentario, el área de derecho emergente sin jurisprudencia consolidada o el caso que cae en el límite entre dos regímenes jurídicos distintos.

Mi contexto:
- Área de práctica: [tecnología y datos, mercantil, regulatorio financiero, derecho laboral, compliance, fiscal, derecho inmobiliario]
- Tipo de incertidumbre jurídica habitual: [normativa reciente sin precedente, conflicto entre normativa nacional y europea, área emergente sin regulación específica, zona gris entre dos interpretaciones posibles]
- Tipo de cliente: [empresa con alta tolerancia al riesgo, empresa conservadora, empresa regulada, startup en sector nuevo]
- Principal dificultad: [cómo dar un consejo útil sin poder ser categórico, cómo comunicar el riesgo sin asustar al cliente de forma que no tome ninguna decisión, cómo proteger la responsabilidad del despacho cuando el consejo es inevitablemente incierto]

Con esa información, quiero que me entregues:

1. EL MÉTODO DE ANÁLISIS JURÍDICO EN TERRENO INCIERTO
Explica el proceso de análisis jurídico cuando no hay certeza normativa: el punto de partida en la letra de la ley (aunque sea ambigua, la interpretación literal es siempre el primer elemento), la jerarquía de fuentes de interpretación que usar cuando la ley no es clara (exposición de motivos, trabajos preparatorios, directivas europeas que transpone la ley nacional, la ratio legis, los principios generales del derecho aplicables), cómo usar la analogía con normativa similar para extraer principios aplicables, cómo interpretar el silencio del legislador (¿es una laguna que hay que integrar o una exclusión implícita?), cuándo la interpretación sistemática (la ley en su contexto) modifica el resultado de la interpretación literal y cómo documentar el proceso de análisis para que sea reproducible y defensible si la interpretación es cuestionada.

2. LA COMUNICACIÓN DEL RIESGO JURÍDICO AL CLIENTE
Define el proceso de comunicación del riesgo jurídico que es honesto sin ser paralizante: cómo cuantificar el riesgo jurídico (la probabilidad de que la interpretación adversa sea la correcta y el impacto si lo es), cómo estructurar el consejo en un memo de riesgo (la posición jurídica más probable, las posiciones alternativas con su probabilidad y sus consecuencias, las medidas de mitigación disponibles y la recomendación del abogado sobre cómo proceder), cómo calibrar el lenguaje del consejo según el nivel de certeza real (las diferencias entre "claramente", "probablemente", "posiblemente" y "es discutible" como descriptores del nivel de confianza), cómo adaptar el nivel de detalle del análisis según el perfil del cliente (el CEO que quiere la conclusión versus el consejo jurídico interno que quiere el análisis completo) y cuándo la incertidumbre es tan alta que el consejo correcto es recomendar buscar una ruling administrativa o una resolución vinculante antes de actuar.

3. LAS ZONAS GRISES MÁS COMUNES EN MI ÁREA DE PRÁCTICA
Identifica y analiza las zonas grises más frecuentes en mi área de práctica: explica cuáles son las ambigüedades normativas más recurrentes que se presentan en mi tipo de asesoramiento, cómo ha evolucionado la interpretación de la autoridad competente (la DGT, la CNMV, la AEPD, la Inspección de Trabajo u otro organismo según el área), qué posiciones han mantenido los tribunales cuando han tenido que pronunciarse y qué posiciones doctrinales conviven en la literatura jurídica sobre estas materias. Para cada zona gris, dame la posición más conservadora, la más favorable para el cliente y mi recomendación sobre qué posición defender y en qué circunstancias.

4. PROTEGER LA RESPONSABILIDAD DEL ABOGADO EN CONSEJO INCIERTO
Explica cómo el abogado debe proteger su responsabilidad profesional cuando el consejo jurídico es inevitablemente incierto: la importancia de documentar los supuestos sobre los que se basa el consejo (si los hechos que el cliente me ha comunicado son distintos a los reales, el consejo puede ser distinto), cómo comunicar por escrito las reservas del consejo sin que el cliente las ignore, las cláusulas de los engagement letters que limitan el alcance del consejo a los hechos y la normativa disponibles en el momento, cuándo es necesario actualizar el consejo cuando cambia la normativa o la jurisprudencia después de haberlo emitido, la diferencia entre la responsabilidad por un error de análisis (evitable) y la responsabilidad por una interpretación que el tribunal rechaza (inherente a la práctica en zonas grises) y cuándo tiene sentido obtener un second opinion de otro despacho para reducir el riesgo de responsabilidad en consejo de alto impacto.

5. EL CONSEJO PREVENTIVO: DISEÑAR PARA MINIMIZAR EL RIESGO
Define el proceso de asesoramiento preventivo que diseña la operación del cliente para minimizar el riesgo jurídico en zonas de incertidumbre: cómo recomendar estructuras alternativas que consiguen el objetivo económico del cliente con menor exposición jurídica, cómo usar los safe harbors normativos cuando existen (las excepciones o los supuestos que el regulador ha confirmado expresamente como conformes), cómo diseñar las medidas de compliance que reducen la probabilidad de sanción incluso si la interpretación del regulador es adversa (el esfuerzo razonable de cumplimiento como elemento mitigador en el procedimiento sancionador), cómo documentar el proceso de decisión del cliente de forma que sea evidente que actuó de buena fe con el mejor consejo disponible y cuándo tiene sentido solicitar una consulta vinculante a la autoridad competente para eliminar la incertidumbre.

6. MANTENERSE ACTUALIZADO EN ÁREAS EN EVOLUCIÓN RÁPIDA
Explica el proceso de actualización continua en áreas jurídicas donde la normativa, la jurisprudencia y los criterios administrativos evolucionan rápidamente: el sistema de monitoring de novedades normativas (cómo seguir el BOE, las directivas europeas, las circulares de los supervisores y las resoluciones de los tribunales relevantes para mi área), cómo estructurar el análisis de impacto de un cambio normativo para los clientes afectados, cómo posicionar el despacho como referente de conocimiento actualizado en el área y cuándo la incertidumbre regulatoria es tan alta que el consejo más valioso que puede dar el abogado es ayudar al cliente a construir un modelo de negocio que sea resiliente a distintos escenarios regulatorios.

Termina con un template de memo de consejo jurídico bajo incertidumbre: la estructura del documento, el lenguaje que describe correctamente el nivel de certeza en cada sección y las advertencias estándar que debe incluir todo consejo emitido en terreno normativo incierto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Dar consejo jurídico riguroso y responsable en situaciones de incertidumbre normativa',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Priorización de cuentas con información imperfecta',
                'description'      => 'Decide qué cuentas necesitan tu atención cuando los datos de health score son incompletos: los indicadores cualitativos, la intuición del CSM experimentado y el proceso de triage que optimiza el tiempo del equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success y en la gestión de portfolios de cuentas para equipos de CS. Quiero que me ayudes a desarrollar un proceso de priorización de cuentas que funciona cuando los datos de health score son incompletos, inconsistentes o simplemente no existen, usando los indicadores cualitativos y el juicio del CSM para optimizar el tiempo del equipo cuando hay más cuentas que atender de las que el equipo puede cubrir.

Mi contexto:
- Tamaño del portfolio de cuentas: [número de cuentas por CSM]
- Tipo de producto: [SaaS B2B, plataforma de datos, servicios profesionales]
- Calidad de los datos de health score actuales: [ningún sistema formal, health score básico, health score sofisticado pero con datos incompletos]
- Principal problema de priorización: [no sé por dónde empezar cada semana, dedico demasiado tiempo a las cuentas que piden más atención aunque no sean las de mayor riesgo, las cuentas que no contactan me sorprenden con un churn]
- Segmentación de cuentas: [enterprise, mid-market, SMB o mezcla de todos]

Con esa información, quiero que me entregues:

1. LOS LÍMITES DEL HEALTH SCORE Y POR QUÉ NO PUEDE SER TU ÚNICO CRITERIO
Explica por qué el health score, aunque es una herramienta valiosa, no puede ser el único criterio de priorización para un CSM: los datos que el health score no captura (la conversación informal que tuvo el champion con un competidor, el cambio de organigrama que el sistema todavía no refleja, el proyecto interno del cliente que está consumiendo todo su presupuesto), los falsos positivos (cuentas con health score verde que churnan porque el usuario activo no es el decisor de renovación), los falsos negativos (cuentas con health score rojo que renuevan porque el decisor tiene razones estratégicas que no están en los datos de uso), el lag del health score (que refleja el comportamiento pasado y puede no predecir el futuro cuando el contexto ha cambiado) y el sesgo de los datos de uso hacia los usuarios activos (que no te dice nada de los stakeholders que no usan el producto pero que toman la decisión de renovar).

2. LOS INDICADORES CUALITATIVOS QUE COMPLETAN EL HEALTH SCORE
Define el catálogo de indicadores cualitativos que un CSM experimentado usa para priorizar sus cuentas cuando los datos son incompletos: las señales de riesgo que no aparecen en el sistema (el tone of voice del cliente en los emails, la reducción de asistencia a las reuniones periódicas, la petición de información sobre la exportación de datos, el cambio de champion o de sponsor ejecutivo, el comentario en una conversación casual sobre que "están evaluando las opciones"), las señales de oportunidad que tampoco están en el CRM (la mención de un nuevo proyecto que podría usar el producto, el cambio de liderazgo que puede reabrir presupuesto, la noticia de una ronda de financiación o de una adquisición que cambia el contexto). Explica cómo capturar estos indicadores de forma sistemática y cómo incorporarlos al proceso de priorización.

3. EL PROCESO DE TRIAGE SEMANAL: DECIDIR DÓNDE INVERTIR EL TIEMPO
Diseña el proceso de triage semanal que un CSM puede completar en 30-45 minutos para decidir cómo distribuir su tiempo la semana siguiente: la revisión de las cuentas con eventos inminentes (renovaciones, EBRs, go-lives, vencimientos de contratos), la revisión de las señales de riesgo que han aparecido en la semana (bajas en el uso, tickets de soporte no resueltos, emails sin responder), la revisión de las oportunidades de expansión que hay que trabajar activamente, la distribución del tiempo restante entre las cuentas que no han generado señal pero que necesitan contacto proactivo de mantenimiento y el ajuste de la priorización cuando aparece una urgencia no prevista. Dame un template de triage semanal que pueda completar en una hoja de cálculo o en el CRM.

4. LA SEGMENTACIÓN DINÁMICA: MOVER LAS CUENTAS SEGÚN CAMBIA SU SITUACIÓN
Explica cómo gestionar la segmentación dinámica de las cuentas: la diferencia entre la segmentación estática (por ACV, por tamaño, por industria, que determina el modelo de atención base) y la segmentación dinámica (el movimiento temporal de una cuenta a un segmento de mayor atención cuando hay un riesgo o una oportunidad que lo justifica), cómo decidir cuándo mover una cuenta al modo de atención intensivo (el red account que necesita intervención ejecutiva), cuándo volver al modo de atención normal después de una crisis y cómo gestionar el portfolio cuando hay demasiadas cuentas en modo de atención intensivo simultáneamente (el triage de urgencias que decide cuáles son las más críticas cuando el equipo está desbordado).

5. LA INTUICIÓN DEL CSM COMO DATO: FORMALIZAR EL JUICIO EXPERTO
Explica cómo formalizar y capturar la intuición del CSM experimentado de forma que sea transferible y escalable en el equipo: el CSM que lleva años en el rol tiene un modelo mental implícito de qué cuentas están en riesgo que es más preciso que el health score pero que vive solo en su cabeza, cómo hacer explícito este modelo (qué señales usa el CSM senior para llegar a su juicio, cómo las pondera, cómo las combina), cómo documentar el juicio del CSM en el CRM de forma que pueda ser revisado y calibrado (la nota de "percibo que esta cuenta está en riesgo por X e Y" es más valiosa que simplemente bajar el health score sin explicar por qué), cómo usar el juicio del CSM senior para entrenar al CSM junior y cómo calibrar el juicio del equipo en las reuniones de revisión de cartera comparando las predicciones con los resultados reales.

6. CONSTRUIR EL SISTEMA DE DATOS QUE MEJORA CON EL TIEMPO
Define el proceso para construir progresivamente el sistema de datos de health score que completa la información cualitativa: por dónde empezar cuando no hay nada (las dos o tres métricas de uso que son más predictivas de la renovación en tu producto específico), cómo agregar capas de datos a medida que el sistema madura, cómo validar que los indicadores que estás midiendo realmente predicen el comportamiento de renovación (el análisis retrospectivo de los churns para identificar las señales que estaban presentes semanas o meses antes), cómo hacer que el equipo de CS sea un contribuidor activo al sistema de datos (aportando los indicadores cualitativos que el sistema no captura) y cómo usar el análisis de cohortes para identificar qué segmentos de clientes tienen patrones de riesgo distintos.

Termina con un playbook de priorización de cuentas para un CSM con un portfolio de 50 cuentas: el proceso semanal de triage, el sistema de captura de señales cualitativas, los criterios de escalación y el modelo de distribución del tiempo entre cuentas en riesgo, cuentas en expansión y cuentas en modo de mantenimiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Priorizar el portfolio de cuentas de CS cuando los datos son incompletos y el tiempo es limitado',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Decisiones de negocio del freelance: aceptar o rechazar proyectos',
                'description'      => 'El criterio del freelance que sabe qué proyectos aceptar y cuáles rechazar: el framework de cualificación de proyectos, la valoración del coste de oportunidad y el proceso de decisión que maximiza el valor del negocio a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de negocio para freelancers y consultores independientes. Quiero que me ayudes a desarrollar el criterio y el proceso que me permite decidir qué proyectos aceptar y cuáles rechazar para maximizar el valor total de mi negocio freelance a largo plazo, sin caer en la trampa de aceptar todo lo que aparece por miedo a la escasez o de rechazar proyectos rentables por criterios demasiado rígidos.

Mi contexto:
- Especialidad como freelance: [desarrollo, diseño, consultoría, copywriting, marketing, coaching, asesoramiento jurídico o financiero]
- Situación actual del negocio: [agenda llena, agenda con huecos, en proceso de transición hacia un tipo de trabajo diferente]
- Principal error que reconozco en mis decisiones de proyectos pasadas: [acepto proyectos por debajo de mi valor porque necesito el dinero, rechazo proyectos sin evaluar el coste de oportunidad real, acepto proyectos con clientes problemáticos que ya daban señales de alerta, no sé cuándo rechazar un proyecto pequeño para no perder el proyecto grande que podría llegar]
- Objetivo de negocio a 12 meses: [aumentar la tarifa media, trabajar menos horas con los mismos ingresos, especializarme en un tipo de proyecto, conseguir clientes más grandes]

Con esa información, quiero que me entregues:

1. EL FRAMEWORK DE EVALUACIÓN DE PROYECTOS: MÁS ALLÁ DEL PRECIO
Explica el framework completo de evaluación de un proyecto freelance que considera todos los factores relevantes más allá del precio: el valor económico directo (precio, tarifa hora real descontando la gestión, el tiempo de venta y las revisiones), el valor estratégico del proyecto (¿me ayuda a construir el portfolio que quiero?, ¿me da acceso a un sector o a un tipo de cliente al que quiero llegar?, ¿genera una referencia que abre otras puertas?), el coste de oportunidad (¿qué no puedo hacer si acepto este proyecto?), el coste de energía (¿este proyecto va a consumir energía desproporcionada por la complejidad del cliente o del trabajo?), el aprendizaje potencial (¿aprenderé algo que incrementa mi valor a futuro?) y el riesgo del proyecto (¿cuál es la probabilidad de que el proyecto genere conflictos, impagos o retrasos?). Dame una scorecard de evaluación de proyectos con los pesos de cada criterio.

2. LOS SESGOS QUE DISTORSIONAN LAS DECISIONES DE PROYECTOS DEL FREELANCE
Explica los sesgos cognitivos que llevan a los freelancers a tomar malas decisiones sobre qué proyectos aceptar: el sesgo de la escasez (cuando la agenda está vacía, cualquier proyecto parece bueno aunque no lo sea), el sesgo del sunk cost (seguir invirtiendo en un proceso de venta porque ya he invertido tiempo en él, aunque el cliente sea inadecuado), la hiperbólica del descuento (sobrevalorar el ingreso inmediato del proyecto pequeño frente al ingreso futuro del proyecto grande que requiere más desarrollo), el sesgo de optimismo (creer que el cliente problemático no lo será conmigo, que el proyecto difuso se aclarará durante la ejecución, que el plazo imposible se puede cumplir), el sesgo de aversión a la pérdida (no rechazar un proyecto mediocre porque eso implica no tener ese ingreso seguro) y cómo identificar cuándo estás tomando una decisión bajo la influencia de uno de estos sesgos.

3. LAS SEÑALES DE ALERTA DEL CLIENTE PROBLEMÁTICO
Define el catálogo de red flags que predicen que un cliente va a ser problemático antes de que el proyecto empiece: el cliente que no puede definir claramente lo que quiere en la primera conversación (el proyecto difuso que siempre cuesta más de lo cotizado), el cliente que pide el trabajo más barato y más rápido del mercado (la presión de precio que nunca termina), el cliente que ya ha trabajado con muchos freelancers y ninguno "llegó a entender lo que quería" (el problema está en el cliente, no en los freelancers anteriores), el cliente que pide trabajo de prueba gratuito antes de contratar (no valora el trabajo), el cliente que tarda semanas en responder a los emails pero necesita el trabajo para ayer (no va a respetar tus tiempos), el cliente que cuestiona tu precio antes de conocer el alcance y el cliente que "tiene muy poco presupuesto pero la visibilidad que te dará valdrá mucho más". Para cada señal, dame la respuesta correcta.

4. EL COSTE DE OPORTUNIDAD: LO QUE PIERDES CUANDO DICES QUE SÍ
Explica cómo calcular y usar el coste de oportunidad en las decisiones de proyectos del freelance: el proyecto que aceptas te hace renunciar al proyecto que no puedes hacer porque no tienes tiempo, al cliente que podrías haber desarrollado si hubieras dedicado ese tiempo a prospección, al descanso que necesitas para mantener la calidad de tu trabajo y a las inversiones en formación o en tu propio negocio que generan retorno a largo plazo. Enséñame a calcular el coste de oportunidad real de un proyecto (no el precio que paga el cliente sino el valor de todo lo que renuncio), cómo comparar proyectos que no son directamente comparables (uno paga más pero es más largo, otro paga menos pero abre una puerta nueva) y cómo usar el coste de oportunidad para fijar el precio mínimo que un proyecto debe alcanzar para que valga la pena aceptarlo.

5. CÓMO RECHAZAR UN PROYECTO SIN QUEMAR LA RELACIÓN
Define el proceso de rechazo de un proyecto que preserva la relación con el potencial cliente: cuándo rechazar directamente y cuándo proponer una alternativa (referir a otro freelance de confianza, proponer un proyecto de menor alcance que sí puedas hacer, proponer una fecha futura cuando tendrás disponibilidad), cómo comunicar el rechazo de forma que el cliente lo reciba bien (el mensaje que es honesto, breve y deja la puerta abierta sin dar falsas esperanzas), cómo rechazar un proyecto por precio sin hacer que el cliente sienta que no vale para ti (el rechazo que no destruye la relación aunque el proyecto no se haga hoy), cuándo es correcto rechazar un proyecto sin dar ninguna explicación y cómo gestionar el cliente que insiste después del primer rechazo.

6. LA ESTRATEGIA DE PORTFOLIO DE PROYECTOS A LARGO PLAZO
Explica cómo diseñar el portfolio de proyectos activos de un freelance que equilibra los ingresos a corto plazo con la construcción del negocio a largo plazo: el mix correcto entre proyectos de alto precio pero alta energía y proyectos de menor precio pero mayor automatización o recurrencia, cómo usar los proyectos estratégicos (que quizás pagan menos pero construyen el portfolio que abre puertas mejores) sin que dañen la rentabilidad del negocio, cómo planificar el pipeline de proyectos futuros mientras ejecutas los actuales (la prospección que no para aunque la agenda esté llena) y cómo revisar trimestralmente si el tipo de proyectos que estás aceptando te acerca o te aleja del freelance que quieres ser en dos años.

Termina con un proceso de decisión de proyecto en 24 horas: los pasos que sigues desde que recibes un briefing hasta que comunicas tu decisión, las preguntas que haces al cliente antes de decidir, los criterios que aplicas y el formato de respuesta según si la decisión es aceptar, rechazar o pedir más información.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar el criterio para aceptar solo los proyectos que maximizan el valor del negocio freelance',
                'vote_score'       => 47,
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
