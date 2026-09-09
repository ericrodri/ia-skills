<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills225Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Adaptación del marketing en tiempos de cambio',
                'description'      => 'Cuando el mercado cambia de repente: la adaptación de la estrategia de marketing ante una crisis económica, un cambio de algoritmo o un cambio cultural que hace que lo que funcionaba ayer deje de funcionar hoy.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de marketing adaptativa y en la gestión del cambio en equipos de marketing. Quiero que me ayudes a rediseñar la estrategia de marketing de mi empresa ante un cambio disruptivo que ha dejado obsoleto parte de lo que hacíamos: la estrategia que seguíamos ya no produce los resultados que producía, y necesito un proceso para adaptarme con rapidez sin tirar por la borda todo lo que funciona.

Mi contexto:
- Tipo de cambio disruptivo que estoy enfrentando: [crisis económica que contrae el mercado, cambio de algoritmo de Google o Meta que destrona mi principal canal de adquisición, cambio cultural en mi audiencia que hace que mi mensaje ya no resuene, aparición de un competidor que ofrece lo mismo que yo de forma gratuita o a precio muy inferior, cambio regulatorio que afecta a cómo puedo comunicar o dónde puedo publicitar]
- Canales y estrategia que tenía antes del cambio: [describe brevemente]
- Impacto medible del cambio: [caída del tráfico, de las conversiones, del engagement, del revenue]
- Tiempo disponible para la adaptación: [urgente —semanas— o planificado —meses—]
- Recursos del equipo de marketing: [personas, presupuesto aproximado]

Con esa información, quiero que me entregues:

1. DIAGNÓSTICO: ENTENDER QUÉ HA CAMBIADO REALMENTE
Explica el proceso de diagnóstico del cambio antes de lanzarse a cambiar la estrategia: cómo identificar qué parte de la caída de resultados se debe al cambio externo y qué parte se debe a problemas previos que el cambio ha amplificado, cómo separar los cambios reversibles (el algoritmo puede volver a favorecernos si cambiamos nuestra táctica) de los irreversibles (el mercado ha cambiado de forma estructural y no va a volver), cómo usar los datos para entender el mecanismo exacto por el que el cambio ha afectado a los resultados (no solo que ha bajado el tráfico sino por qué y desde dónde), cómo hacer el diagnóstico rápido con datos imperfectos cuando no hay tiempo para un análisis exhaustivo y cómo comunicar el diagnóstico al equipo directivo de forma que genere voluntad de cambio en lugar de negación.

2. EL INVENTARIO DE LO QUE FUNCIONA: NO TIRAR TODO
Define el proceso de inventario de lo que sigue funcionando antes de diseñar la estrategia nueva: el error de los equipos de marketing en crisis es desechar todo en lugar de identificar lo que sigue siendo válido (la propuesta de valor central, los segmentos de cliente más resilientes, los canales que han resistido mejor el cambio, los contenidos que siguen generando engagement). Explica cómo hacer el audit rápido del portfolio de activos de marketing para identificar qué se preserva, qué se adapta y qué se abandona, cómo priorizar la asignación del presupuesto entre preservar lo que funciona y experimentar lo nuevo y cómo gestionar la presión de cambiar todo inmediatamente cuando el equipo directivo está ansioso.

3. REASIGNACIÓN DE CANALES: DIVERSIFICAR SIN DISPERSAR
Diseña la estrategia de reasignación de canales cuando el canal principal ha sido dañado por el cambio: cómo evaluar los canales alternativos según su accesibilidad para tu audiencia, su coste de activación y el tiempo que tardaría en producir resultados a escala, cómo construir el canal alternativo de forma paralela al canal principal que ha caído sin abandonar el principal antes de tener el alternativo probado, las estrategias de diversificación de canal que reducen la dependencia de una única fuente de tráfico o de adquisición (el problema que ha revelado el cambio es que dependías demasiado de un canal), el coste real de la diversificación de canales (tiempo, talento, presupuesto, aprendizaje) y el horizonte temporal realista para que el canal nuevo esté a pleno rendimiento.

4. ADAPTACIÓN DEL MENSAJE: CUANDO EL TONO YA NO ENCAJA
Explica cómo adaptar el mensaje y la comunicación de la marca cuando el contexto cultural o económico ha cambiado y el tono de antes resulta inapropiado o ineficaz: cómo detectar que el mensaje ha perdido resonancia (las métricas de engagement que caen, los comentarios que cambian de tono, la retroalimentación del equipo comercial que nota que el cliente responde diferente), cómo hacer el proceso de revisión del messaging sin romper la coherencia de la marca (los elementos que son centrales a la identidad y no deben cambiar versus los que son adaptables), cómo testear el nuevo mensaje antes de hacer el cambio masivo, cómo comunicar el cambio de tono al equipo de marketing y a los partners de agencia de forma que lo entiendan y lo ejecuten consistentemente y cómo gestionar el período de transición cuando conviven mensajes del antes y del después.

5. PRESUPUESTO EN CRISIS: HACER MÁS CON MENOS
Diseña la estrategia de marketing para cuando el presupuesto se ha reducido junto con el cambio del mercado: cómo hacer el corte de presupuesto de forma que preserve el mayor impacto posible (no todos los euros de marketing son iguales, y en un corte lineal del 20% se suele perder más del 20% de los resultados), cómo usar el análisis de contribución marginal para identificar qué inversiones de marketing tienen el mayor retorno incremental en el contexto nuevo, las tácticas de marketing de bajo coste que funcionan especialmente bien en períodos de contracción (el contenido de autoridad que genera tráfico orgánico duradero, la reactivación de clientes existentes que es más barata que la adquisición de nuevos, el referido que tiene el coste de adquisición más bajo), cómo justificar al equipo directivo el mantenimiento del presupuesto mínimo de marketing cuando hay presión de corte generalizada y cómo medir el coste de no invertir en marketing (el share of voice que se pierde, la cuota de mercado que gana el competidor que sí invierte durante la crisis).

6. EL EQUIPO: GESTIONAR EL CAMBIO INTERNAMENTE
Explica cómo gestionar el equipo de marketing durante un período de cambio y adaptación: la ansiedad del equipo cuando los resultados caen y no está claro qué hacer, cómo comunicar el diagnóstico y el plan de adaptación al equipo de forma que genere energía y no pánico, cómo mantener el foco en el proceso de experimentación y aprendizaje cuando el equipo quiere la solución inmediata, cómo gestionar la tentación de hacer cambios en los KPIs o en los objetivos para que la situación parezca mejor de lo que es, cómo proteger el talento durante períodos de recorte de presupuesto y cómo construir las competencias nuevas que el equipo necesita para operar en el contexto cambiado.

Termina con un plan de adaptación de marketing a 90 días: las decisiones que hay que tomar en los primeros 30 días (triage y preservación de lo que funciona), las acciones que se activan entre los días 30 y 60 (los experimentos en los canales y mensajes nuevos) y los hitos del día 90 que indican si la adaptación está funcionando o si hay que ajustar el rumbo de nuevo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Adaptar la estrategia de marketing cuando el mercado o el contexto cambian de forma disruptiva',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Aprendizaje continuo en tecnología: mantenerse relevante',
                'description'      => 'El developer que sigue siendo relevante en un sector que cambia cada seis meses: las estrategias de aprendizaje continuo, la gestión del conocimiento obsoleto y la mentalidad del lifelong learner aplicada al desarrollo de software.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en aprendizaje continuo y en el desarrollo de carrera para profesionales de la tecnología. Quiero que me ayudes a diseñar un sistema de aprendizaje que me permita mantenerme relevante como developer en un sector que cambia constantemente, sin quemar todo mi tiempo libre en cursos que nunca aplico y sin la ansiedad permanente de sentir que siempre voy por detrás de las tendencias.

Mi contexto:
- Stack y especialidad actual: [lenguajes, frameworks, tipo de desarrollo —backend, frontend, mobile, data, DevOps...]
- Años de experiencia: [aproximado]
- Tiempo disponible para el aprendizaje fuera del trabajo: [horas por semana realistas]
- Principal fuente de ansiedad tecnológica: [la velocidad de cambio del ecosistema JavaScript, el auge de la IA que parece amenazar mi rol, los lenguajes o paradigmas que no domino, la sensación de que lo que sé se está quedando obsoleto]
- Objetivo de carrera a 3 años: [sénior individual contributor, tech lead, architect, paso a product o management, entrepreneurship]

Con esa información, quiero que me entregues:

1. LA MENTALIDAD DEL DEVELOPER QUE APRENDE DE FORMA SOSTENIBLE
Explica la mentalidad que distingue al developer que aprende de forma sostenible y acumulativa del que vive en un ciclo de ansiedad tecnológica permanente: la diferencia entre el aprendizaje de fundamentos (que es acumulativo y se transfiere entre tecnologías) y el aprendizaje de herramientas específicas (que se queda obsoleto y genera la sensación de estar siempre por detrás), por qué los developers con más experiencia suelen aprender nuevas tecnologías más rápido aunque el stack sea completamente diferente (la comprensión de los patrones subyacentes que se transfieren), cómo separar la tecnología que necesitas aprender ahora de la que puedes aprender cuando la necesites y cómo construir la confianza en tu capacidad de aprender lo que necesites en el momento en que lo necesites, que es más valiosa que haber aprendido todo de antemano.

2. EL RADAR TECNOLÓGICO: MONITORIZAR SIN SATURARSE
Diseña el sistema de monitorización del ecosistema tecnológico que te mantiene informado sin consumir todo tu tiempo: las fuentes de información que debes seguir para detectar las tendencias relevantes antes de que sean mainstream (newsletters técnicas especializadas, podcasts de developers con criterio, los releases de las conferencias clave del ecosistema, el GitHub trending de tu área), cómo filtrar la señal del ruido en un mercado de contenido técnico saturado de hype, cómo usar el Thoughtworks Technology Radar o equivalente para orientarte sobre qué tecnologías adoptar, cuáles observar y cuáles evitar, cuánto tiempo dedicar semanalmente al monitoring sin que se convierta en una fuente de ansiedad y cómo decidir qué tecnologías emergen justifican una inversión de aprendizaje profunda y cuáles solo necesitan conocimiento superficial de awareness.

3. EL SISTEMA DE APRENDIZAJE DEL DEVELOPER: CÓMO APRENDER LO QUE APLICAS
Explica cómo diseñar el sistema personal de aprendizaje que convierte el conocimiento adquirido en habilidad aplicable: la diferencia entre el aprendizaje pasivo (ver cursos, leer artículos) y el aprendizaje activo (construir proyectos, contribuir a open source, enseñar lo que has aprendido), por qué el proyecto personal es la forma más efectiva de consolidar el aprendizaje de una nueva tecnología (y cómo elegir el proyecto que maximiza el aprendizaje sin convertirse en una carga), cómo usar el trabajo del día a día como fuente de aprendizaje activo (el refactoring que es una oportunidad para aprender un patrón nuevo, el bug que es una oportunidad para entender mejor el sistema), el método del "aprender en público" (escribir posts, hablar en meetups, compartir en comunidades) como acelerador del aprendizaje y el sistema de notas técnicas que hace que el conocimiento aprendido sea recuperable cuando lo necesitas meses después.

4. LA GESTIÓN DEL CONOCIMIENTO OBSOLETO: SABER QUÉ DEJAR IR
Explica cómo gestionar el conocimiento que se está quedando obsoleto: el developer que lleva años en una tecnología que está perdiendo relevancia enfrenta una decisión difícil (cuándo seguir profundizando en lo que sabe y cuándo empezar a pivotar hacia lo nuevo), cómo evaluar la trayectoria de relevancia de una tecnología (los indicadores de que una tecnología está en declive: caída del job posting, reducción de la comunidad, abandono por los proyectos más innovadores), cómo hacer la transición desde una tecnología en declive a una emergente sin perder el nivel de seniority (el developer que aprende React después de años en jQuery no empieza desde cero), cómo comunicar en el mercado laboral una transición de stack de forma que sea una fortaleza (la experiencia en sistemas legados como diferencial), y cómo gestionar el duelo del conocimiento que ya no te da ventaja.

5. EL IMPACTO DE LA IA EN EL ROL DEL DEVELOPER: ADAPTARSE SIN RENDIRSE
Explica cómo adaptarse al cambio que la IA (los copilots, los agentes de código, los modelos de lenguaje) está produciendo en el rol del developer: qué habilidades se devalúan cuando la IA puede generar código competente (la escritura de boilerplate, la búsqueda de sintaxis, la producción de código repetitivo), qué habilidades aumentan en valor cuando la IA acelera la producción de código (el diseño de sistemas, la comprensión del negocio, el review de código generado, la definición de los tests que verifican que el código hace lo que debe hacer, la gestión de la deuda técnica y la arquitectura de largo plazo), cómo usar las herramientas de IA como aceleradores del aprendizaje (el copilot que te muestra cómo se haría en un framework nuevo, el modelo que explica el código que no entiendes) y cómo posicionarte como el developer que sabe trabajar con IA de forma que multiplica su productividad en lugar del developer que resiste la IA por principio.

6. LA CARRERA TÉCNICA SOSTENIBLE: CRECER SIN AGOTARSE
Diseña el modelo de carrera técnica sostenible que evita el burnout del aprendizaje perpetuo: la diferencia entre el período de inversión intensa en aprendizaje (cuando cambias de stack, cuando comienzas un nuevo rol) y el período de consolidación (cuando aplicas y profundizas lo aprendido), cómo calibrar la intensidad del aprendizaje según el momento de la carrera y la vida personal, cómo construir la identidad profesional que no depende de un stack específico sino de las habilidades transferibles (el developer que resuelve problemas complejos, que diseña sistemas que evolucionan, que colabora efectivamente con el negocio), cómo usar el open source, las conferencias y las comunidades técnicas no solo para aprender sino para construir la reputación que hace que las oportunidades te busquen a ti y cómo saber cuándo es el momento de dejar de aprender y empezar a enseñar.

Termina con un plan de aprendizaje personalizado para los próximos 12 meses: la tecnología o habilidad en la que vas a invertir profundamente, el proyecto con el que la aprenderás, el tiempo semanal que dedicarás, las métricas con las que sabrás que estás progresando y la forma en que comunicarás ese aprendizaje al mercado laboral.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un sistema de aprendizaje continuo que mantiene la relevancia del developer sin burnout',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Resiliencia creativa: superar el bloqueo y la crítica',
                'description'      => 'El diseñador que sigue creando después de la crítica destructiva, el rechazo del cliente y el bloqueo creativo: las prácticas de resiliencia, el distanciamiento emocional del trabajo y la mentalidad que separa al creador de lo que crea.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en psicología de la creatividad y en el desarrollo de resiliencia para profesionales creativos. Quiero que me ayudes a construir la resiliencia creativa que me permite seguir produciendo trabajo de calidad después del feedback destructivo, el rechazo del cliente y los períodos de bloqueo creativo que afectan a todos los diseñadores en algún momento de su carrera.

Mi contexto:
- Tipo de trabajo creativo: [diseño gráfico, UX/UI, branding, ilustración, motion design, fotografía, arquitectura de interiores]
- Principal fuente de dificultad emocional en mi trabajo: [el cliente que rechaza el trabajo en el que he invertido semanas, el feedback que parece personal más que profesional, el bloqueo creativo que dura días o semanas, la comparación con otros diseñadores más reconocidos, el síndrome del impostor cuando muestro trabajo nuevo]
- Contexto de trabajo: [freelance, agencia, in-house]
- Situación que me ha llevado a buscar este tema: [un rechazo reciente especialmente duro, un período prolongado de bloqueo, la sensación de que el feedback está afectando mi forma de diseñar]

Con esa información, quiero que me entregues:

1. LA SEPARACIÓN ENTRE EL CREADOR Y LO CREADO: EL FUNDAMENTO DE LA RESILIENCIA
Explica el concepto de distanciamiento emocional del trabajo como base de la resiliencia creativa: por qué los diseñadores tendemos a identificarnos con lo que creamos (el trabajo es una extensión de nuestra visión, nuestra estética y nuestra inteligencia), por qué esta identificación nos hace vulnerables al feedback negativo (si rechazan el diseño, sentimos que nos rechazan a nosotros), cómo los creadores más prolíficos y resilientes de la historia han gestionado esta tensión (el artista que necesita la implicación emocional para crear pero que no puede colapsar con el rechazo), las prácticas concretas de distanciamiento que permiten implicarse plenamente en el proceso creativo sin que el resultado defina el valor personal, y la diferencia entre el orgullo sano del trabajo bien hecho y el orgullo frágil que colapsa con la primera crítica.

2. EL BLOQUEO CREATIVO: QUÉS ES Y CÓMO SE SALE
Explica la naturaleza del bloqueo creativo en el diseño y el proceso para salir de él: qué es realmente el bloqueo creativo (no la ausencia de ideas sino la inhibición de las ideas por el miedo al juicio propio o ajeno), los tipos de bloqueo más comunes en diseñadores (el bloqueo de la hoja en blanco, el bloqueo de la perfección que impide terminar, el bloqueo por fatiga creativa después de un período de alta producción), las causas más frecuentes (el miedo a no estar a la altura del trabajo anterior, la presión de los plazos, la desconexión con el propósito del trabajo), las técnicas de desbloqueamiento que funcionan (el sketch rápido sin juicio, el cambio de medio o herramienta, el estudio de referentes fuera de tu área habitual, la técnica de los 10 thumbnails malos) y cómo construir los rituales de arranque creativo que reducen la fricción del inicio.

3. LA GESTIÓN DEL FEEDBACK DESTRUCTIVO: EXTRAER VALOR DEL DOLOR
Define el proceso para gestionar el feedback destructivo o el rechazo del cliente de forma que sea una fuente de aprendizaje en lugar de una fuente de parálisis: cómo distinguir el feedback constructivo (que señala un problema real del trabajo) del feedback destructivo (que refleja preferencias personales, malentendidos del brief o dinámicas de poder), cómo procesar emocionalmente el feedback antes de responder (la pausa que evita la reacción defensiva), las preguntas que convierten el feedback vago en información accionable ("qué necesitarías ver para que esto funcione para ti"), cómo separar lo que hay que cambiar de lo que puedes defender, cómo mantener la integridad creativa en la conversación con el cliente sin convertirla en un conflicto de egos y cómo decidir cuándo defender el trabajo y cuándo ceder.

4. LA COMPARACIÓN CON OTROS: EL VENENO DE LAS REDES SOCIALES CREATIVAS
Explica cómo gestionar la comparación con otros diseñadores que es especialmente intensa en la era de Behance, Instagram y Dribbble: el efecto de highlight reel (vemos el mejor trabajo de todos los demás pero comparamos con todo nuestro trabajo, incluido el mediocre), cómo el algoritmo de las plataformas amplifica los trabajos extraordinarios creando una imagen distorsionada de lo que es el nivel medio del sector, las estrategias para usar las redes sociales creativas como fuente de inspiración sin que se conviertan en una fuente de insuficiencia, la práctica de la comparación temporal (compararte con quien eras hace un año en lugar de con los mejores del sector hoy), cómo construir la medida interna de calidad que no depende de las métricas de engagement y cómo gestionar la exposición a las redes en los períodos de mayor vulnerabilidad creativa.

5. EL SÍNDROME DEL IMPOSTOR EN EL DISEÑADOR: CREAR DESDE LA DUDA
Explica cómo gestionar el síndrome del impostor que afecta especialmente a los diseñadores que están creciendo en su carrera: el mecanismo del síndrome del impostor (la sensación de que no mereces el nivel que has alcanzado y de que pronto te descubrirán), por qué el síndrome del impostor es paradójicamente más intenso en los profesionales más capaces (los incompetentes no tienen la consciencia para saber lo que no saben), cómo distinguir la humildad intelectual sana (que reconoce lo que queda por aprender) de la autocrítica paralizante (que impide compartir y actuar sobre lo que ya sabes), las evidencias que puedes usar para calibrar tu nivel real cuando el síndrome del impostor distorsiona tu autopercepción y las prácticas de construcción de confianza que se basan en la acumulación de evidencia de lo que has hecho, no en la espera de sentirte suficientemente bueno.

6. LA PRÁCTICA CREATIVA SOSTENIBLE: DISEÑAR PARA DURAR
Define el modelo de práctica creativa sostenible que previene el burnout creativo y mantiene la capacidad de generar trabajo de calidad a lo largo de toda una carrera: la diferencia entre la intensidad creativa de corto plazo (que produce los mejores trabajos en los proyectos más importantes) y la sostenibilidad de largo plazo (que requiere períodos de recarga, proyectos de menor intensidad y espacio para la experimentación sin consecuencias), las prácticas de recarga creativa que los profesionales resilientes usan (el proyecto personal sin cliente, el estudio de disciplinas creativas distintas a la propia, la exposición a arte y cultura fuera del diseño), cómo construir la comunidad de peers creativos que ofrece perspectiva, apoyo y desafío intelectual (la soledad del freelance es uno de los principales factores de fragilidad creativa) y cómo gestionar los períodos de crisis creativa sin interpretar cada uno como el fin de la carrera.

Termina con un kit de emergencia creativa: el protocolo que activas cuando recibes un feedback devastador, cuando llevas una semana sin poder diseñar nada que te satisfaga o cuando la comparación con otros te ha parali¿zado, con los pasos concretos y el horizonte temporal realista para recuperar el estado creativo productivo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar resiliencia creativa para seguir produciendo trabajo de calidad después del rechazo y el bloqueo',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Adaptabilidad en ventas: pivotar cuando el mercado cambia',
                'description'      => 'El comercial que adapta su proceso cuando el contexto cambia: la recesión que paraliza el ciclo de ventas, el competidor nuevo que destrona tu propuesta de valor y el cambio en el comportamiento del comprador que requiere reinventar el playbook.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en adaptabilidad comercial y en la reinvención del proceso de ventas cuando el contexto cambia. Quiero que me ayudes a diseñar el proceso de adaptación cuando el contexto de ventas ha cambiado de forma disruptiva: el mercado se ha contraído, ha aparecido un competidor que cambia las reglas del juego o el comportamiento del comprador ha evolucionado de forma que el playbook que funcionaba ya no produce los mismos resultados.

Mi contexto:
- Tipo de ventas y producto: [SaaS B2B, servicios profesionales, hardware, consultoría, distribución]
- Cambio disruptivo que estoy enfrentando: [recesión económica que congela el presupuesto de los clientes, competidor nuevo que ofrece algo similar a precio muy inferior o gratis, cambio en el ciclo de compra del cliente, cambio regulatorio que afecta a mi categoría, disrupción tecnológica que hace obsoleta mi propuesta de valor]
- Impacto medible en mis ventas: [caída del conversion rate, alargamiento del ciclo de venta, incremento del churn en nuevos clientes, aumento de los deals perdidos por precio]
- Mi situación: [vendedor individual que necesita adaptar su proceso, manager de ventas que necesita reinventar el playbook del equipo]

Con esa información, quiero que me entregues:

1. EL DIAGNÓSTICO: ENTENDER EL MECANISMO DEL CAMBIO ANTES DE REACCIONAR
Explica el proceso de diagnóstico del cambio en el entorno de ventas antes de cambiar el proceso: cómo identificar si la caída de resultados se debe al cambio externo o a la ejecución interna (los cambios externos afectan a todo el equipo, los problemas de ejecución son más localizados), cómo mapear el mecanismo exacto por el que el cambio afecta al proceso de venta (si es una recesión: ¿en qué etapa del ciclo se rompen más deals? ¿el problema es la prospección, la cualificación, el cierre o la retención?), cómo usar los datos del CRM para hacer este diagnóstico rápidamente, cómo obtener la perspectiva del cliente sobre por qué el mercado está cambiando (las conversaciones con clientes actuales y perdidos son la fuente de insight más valiosa) y cómo separar los cambios temporales (la pausa de presupuesto de fin de año) de los cambios estructurales (el mercado no volverá a ser como era).

2. VENTAS EN RECESIÓN: DEFENDER Y CRECER CUANDO EL MERCADO SE CONTRAE
Define el playbook de ventas para entornos de contracción económica: la priorización de la base de clientes existentes frente a la adquisición de nuevos (el churn de un cliente existente es más caro de recuperar que el coste de retenerlo), las conversaciones de valor que demuestran el ROI del producto de forma que justifiquen el presupuesto cuando el CFO está cortando todo (el valor económico cuantificado reemplaza al valor intangible cuando el dinero escasea), la adaptación del discurso comercial al contexto de crisis del cliente (el producto que era un "nice to have" puede reposicionarse como un "must have" si se reenmarca correctamente como herramienta de eficiencia o de reducción de costes), el ajuste del deal structure para adaptarse a las restricciones presupuestarias del cliente (pagos en fases, proyectos piloto, precios por uso en lugar de licencias fijas) y las oportunidades de mercado que se abren en una recesión (los clientes que salen de competidores que reducen su servicio, los proyectos de transformación que la crisis ha vuelto urgentes).

3. RESPUESTA A UN COMPETIDOR DISRUPTIVO: CUANDO TU PROPUESTA DE VALOR YA NO ES ÚNICA
Explica el proceso de adaptación cuando un competidor ha cambiado las reglas del juego en el mercado: cómo analizar la propuesta del competidor de forma objetiva para entender qué ha cambiado realmente en la ecuación de valor del cliente (no lo que el competidor dice que ofrece sino lo que el cliente percibe que gana al considerarlo), cómo reposicionar tu propuesta de valor destacando las dimensiones en las que sigues siendo superior (y que el cliente valora), las conversaciones con deals perdidos frente al nuevo competidor que revelan los factores reales de la pérdida, cómo adaptar la conversación de descubrimiento para hacer visible el riesgo o el coste oculto del competidor (sin atacar directamente, sino mediante preguntas que el cliente puede hacerse a sí mismo), cuándo tiene sentido bajar el precio para competir en precio y cuándo es el principio de una guerra de precios que nadie gana y cómo el feedback del competidor puede informar la evolución de tu propio producto.

4. ADAPTACIÓN DEL PROCESO DE PROSPECCIÓN CUANDO EL CANAL YA NO FUNCIONA
Diseña el proceso de adaptación de la prospección cuando el canal principal ha dejado de producir oportunidades cualificadas: la revisión de los canales de generación de leads en función de dónde está ahora la atención del buyer (si los emails en frío ya no abren, si el outbound de LinkedIn está saturado, si el canal de referidos ha disminuido), la experimentación sistemática con nuevos canales de prospección (cómo probar un canal nuevo de forma controlada para validar su potencial antes de comprometer recursos), el ajuste del ICP (Ideal Customer Profile) cuando el cambio del mercado ha desplazado qué tipo de cliente puede comprar ahora, la adaptación del mensaje de prospección al contexto del buyer (el mensaje que funcionaba cuando había dinero y optimismo no funciona cuando hay recortes y miedo) y las estrategias de prospección que funcionan especialmente bien en entornos de cambio (los compradores que están evaluando activamente porque el cambio los ha afectado son más receptivos al prospecting que los que están en modo de stasis).

5. ADAPTACIÓN DEL DISCURSO: VENDER EL MISMO PRODUCTO EN UN CONTEXTO DIFERENTE
Explica cómo adaptar el discurso de ventas cuando el contexto del comprador ha cambiado pero el producto sigue siendo el mismo: el reenmarcado del valor del producto (el mismo producto puede presentarse como herramienta de crecimiento cuando el mercado crece, como herramienta de eficiencia cuando el mercado se contrae y como herramienta de supervivencia cuando la crisis es profunda), cómo identificar los casos de uso que el cambio del contexto ha vuelto más relevantes (la funcionalidad que antes era secundaria puede ser la principal en el nuevo contexto), cómo usar las historias de clientes que han tenido éxito usando el producto en un contexto similar al actual (el social proof del contexto adverso es más persuasivo que el del contexto favorable), la adaptación de las objeciones más comunes (en recesión la objeción de precio es diferente a la del período de bonanza) y cómo actualizar las historias de casos de éxito para que reflejen el ROI en el contexto actual.

6. LA MENTALIDAD DEL VENDEDOR ADAPTABLE: SOSTENER LA MOTIVACIÓN EN EL CAMBIO
Explica cómo mantener la motivación y el alto rendimiento como vendedor cuando el entorno es adverso: la diferencia entre el vendedor que atribuye el mal desempeño al mercado y no actúa (la víctima del contexto) y el que identifica qué puede controlar dentro del nuevo contexto y actúa (el agente del cambio), cómo mantener el foco en el proceso cuando los resultados no llegan con la misma velocidad, cómo gestionar la presión del manager y de los objetivos cuando el mercado ha cambiado y los objetivos del año ya no son realistas, cómo aprender de los vendedores de tu sector que están teniendo buenos resultados a pesar del contexto adverso (la inteligencia competitiva sobre las técnicas que funcionan en el nuevo contexto) y cómo usar los períodos de bajo volumen de deals para invertir en habilidades que aumentarán el win rate cuando el mercado se reactive.

Termina con un plan de adaptación de ventas de 60 días: las decisiones de los primeros 15 días (diagnóstico y priorización), las acciones entre los días 15 y 45 (los experimentos de adaptación del proceso y el mensaje) y los indicadores del día 60 que te dicen si la adaptación está funcionando o si necesitas pivotar de nuevo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Adaptar el proceso y el discurso de ventas cuando el mercado cambia de forma disruptiva',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product pivot: cuándo y cómo cambiar de dirección',
                'description'      => 'Las señales que indican que el producto necesita un pivot, el proceso de tomar la decisión con el equipo y los stakeholders y el modelo de ejecución que minimiza el trauma del cambio de dirección sin perder el momentum.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de producto y en la gestión del pivot para equipos de producto. Quiero que me ayudes a identificar cuándo el producto necesita un cambio de dirección estratégico, cómo tomar esa decisión con el equipo y los inversores y cómo ejecutar el pivot de forma que preserve el momentum y el aprendizaje acumulado sin caer en el caos de cambiar todo al mismo tiempo.

Mi contexto:
- Estado actual del producto: [en búsqueda de product-market fit, producto con tracción limitada, producto con algunas métricas buenas pero no todas, producto que ha perdido tracción tras un período de crecimiento]
- Síntomas que me hacen considerar el pivot: [bajo retention, NPS negativo, ciclo de ventas muy largo, los clientes que convierten no son el cliente que queremos, el mercado es más pequeño de lo que pensábamos]
- Tipo de pivot que estoy considerando: [cambio de segmento de cliente, cambio de propuesta de valor, cambio de modelo de negocio, cambio de canal, cambio de tecnología o de la funcionalidad core]
- Stakeholders que necesito gestionar: [cofundadores, inversores, equipo, clientes actuales]
- Runway disponible: [meses de caja restantes]

Con esa información, quiero que me entregues:

1. LAS SEÑALES QUE INDICAN QUE EL PRODUCTO NECESITA UN PIVOT
Explica las señales que distinguen el momento correcto para un pivot de las dificultades normales de la construcción de un producto: las señales falsas (el producto lleva solo tres meses en el mercado, el equipo de ventas no está ejecutando bien, el marketing no está llegando al buyer correcto —todos estos son problemas de ejecución que no requieren un pivot—) y las señales verdaderas (el producto lleva 12-18 meses, has hablado con decenas de clientes y las razones de no compra son estructurales, los clientes que sí compran abandonan rápidamente incluso cuando el onboarding es perfecto, no encuentras un segmento de clientes que ame el producto de verdad). Explica también las señales de que el pivot correcto ya está presente en los datos (el segmento de clientes que retiene mejor, el caso de uso que genera más entusiasmo, la funcionalidad que todos los clientes piden antes de lo previsto).

2. EL PROCESO DE DECISIÓN DE PIVOT: CÓMO LLEGAR A LA CONCLUSIÓN CORRECTA
Define el proceso de toma de decisión de pivot que es riguroso y participativo: cómo hacer el análisis de los datos de producto, ventas y retención que revelan si hay un problema estructural, cómo diseñar las conversaciones de customer discovery enfocadas en entender las razones del problema (no en confirmar la hipótesis del pivot que ya tienes en mente), cómo facilitar la conversación con el cofundador o el equipo directivo sobre si el pivot es necesario (la conversación más difícil de tener en una startup), cómo presentar el análisis a los inversores de forma que no destruya la confianza aunque el mensaje sea "hemos aprendido que el camino original no funciona", cuánto tiempo dar al proceso de decisión (el pivot decide demasiado rápido sin suficientes datos es tan peligroso como el que esperan demasiado) y cómo saber cuándo tienes suficiente información para decidir.

3. LOS TIPOS DE PIVOT: DE LO MÁS PEQUEÑO A LO MÁS GRANDE
Explica la taxonomía de pivots de menor a mayor disrupción para el producto y el equipo: el pivot de segmento (mismo producto, cliente diferente), el pivot de propuesta de valor (mismo cliente, problema diferente que resuelves), el pivot de canal (mismo producto y cliente, forma diferente de llegar a ellos), el pivot de modelo de negocio (mismo producto, monetización diferente), el pivot de tecnología (mismo problema, solución técnica diferente) y el pivot de cliente (del B2C al B2B o viceversa). Para cada tipo de pivot, explica el nivel de disrupción para el equipo, el tiempo que suele tomar hasta tener validación del nuevo camino, los activos del camino anterior que se preservan y los que se abandonan y el tipo de equipo y recursos que lo hace más o menos viable.

4. LA EJECUCIÓN DEL PIVOT: PRESERVAR EL APRENDIZAJE Y EL MOMENTUM
Define el proceso de ejecución del pivot que minimiza el trauma organizacional: cómo comunicar el pivot al equipo de forma que sea una historia de aprendizaje y no de fracaso (el marco narrativo que genera energía para el nuevo camino en lugar de desmoralización por el camino abandonado), cómo gestionar los clientes actuales que han comprado el producto tal como era (qué les debes, cómo comunicas el cambio, en qué casos tiene sentido mantener un segmento de clientes del producto anterior mientras desarrollas el nuevo), cómo preservar los activos que siguen siendo válidos (el código que se puede reusar, los aprendizajes de cliente que informan el nuevo producto, las relaciones con inversores y advisors que aportan en el nuevo contexto), cómo diseñar el plan de 90 días del pivot que tiene hitos de validación clara y cómo saber si el pivot está funcionando o si necesita ser ajustado.

5. LA COMUNICACIÓN CON LOS INVERSORES: LA CONVERSACIÓN MÁS DELICADA
Explica cómo gestionar la comunicación con los inversores durante un pivot: cuándo comunicar que estás pensando en un pivot (antes de haberlo decidido para incorporar su perspectiva, o solo cuando la decisión ya está tomada), cómo enmarcar el pivot como un signo de inteligencia y adaptabilidad del equipo en lugar de como un fracaso, qué información proporcionar en la comunicación del pivot (el análisis que lleva a la conclusión, la hipótesis del nuevo camino, el plan de ejecución y los hitos de validación), cómo gestionar al inversor que se opone al pivot, cómo manejar la situación cuando el runway es limitado y el pivot requiere tiempo adicional para validarse y cuándo el pivot implica también una conversación de refinanciación.

6. EL PIVOT DE VUELTA: CUANDO EL NUEVO CAMINO TAMPOCO FUNCIONA
Explica cómo gestionar la situación en la que el pivot no produce los resultados esperados: las señales que indican que el pivot fue la dirección correcta (aunque los resultados aún no sean los definitivos) versus las señales que indican que el pivot ha llevado a un callejón sin salida, cuánto tiempo dar al nuevo camino antes de concluir que no funciona (la tentación de pivotar de nuevo muy rápido antes de dar tiempo suficiente a la nueva dirección), cuándo tiene sentido hacer un segundo pivot y cómo evitar caer en el ciclo de pivots constantes que destruye la moral del equipo y la confianza de los inversores, cuándo el pivot ha demostrado que el problema que estás resolviendo no tiene el mercado que creías y la decisión correcta es cerrar la empresa y cuándo tiene sentido hacer un acqui-hire o una venta en condiciones de mercado difíciles.

Termina con el mapa de decisión del pivot: el árbol de decisión que va desde las primeras señales de alarma hasta la decisión de pivotar o perseverar, con los criterios de cada nodo del árbol y el proceso de validación del nuevo camino en los 90 días posteriores al pivot.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identificar cuándo pivotar, tomar la decisión y ejecutar el cambio de dirección del producto',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del cambio personal: ayudar a los empleados a adaptarse',
                'description'      => 'El profesional de RRHH que ayuda a las personas a adaptarse a los cambios organizacionales: el proceso de duelo organizacional, las técnicas de gestión del cambio individual y el rol del manager en la transición de sus colaboradores.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en psicología organizacional y en la gestión del cambio para profesionales de RRHH y managers. Quiero que me ayudes a diseñar el proceso de acompañamiento a los empleados durante un cambio organizacional significativo: la reestructuración, la fusión, la transformación digital, el cambio de modelo de trabajo o cualquier cambio que afecta profundamente a la forma en que las personas trabajan y a su identidad profesional en la organización.

Mi contexto:
- Tipo de cambio organizacional que estoy gestionando: [reestructuración con cambio de roles, transformación digital que cambia las herramientas y los procesos, fusión o adquisición que cambia la cultura, paso a trabajo híbrido o remoto, cambio de modelo de negocio que hace obsoletas algunas funciones]
- Tamaño de la organización y número de personas afectadas: [aproximado]
- Fase del cambio: [anuncio inminente, cambio en ejecución, post-cambio con resistencia]
- Principal dificultad actual: [resistencia activa de los empleados, ansiedad y baja productividad, pérdida de talento clave, falta de adherencia al nuevo modelo, los managers no están liderando el cambio]
- Mi rol: [CHRO, HR Business Partner, director de área o manager que lidera el cambio en su equipo]

Con esa información, quiero que me entregues:

1. LA CURVA DEL CAMBIO: ENTENDER LO QUE LAS PERSONAS VIVEN
Explica la curva del cambio (el modelo de Kübler-Ross aplicado al contexto organizacional) y cómo usarla para diseñar el acompañamiento: las fases que atraviesan las personas ante un cambio significativo (la negación inicial donde el cambio "no puede ser tan grave", la ira y la resistencia activa, la negociación donde la persona intenta recuperar parte de lo que pierde, la depresión y la pérdida de energía y finalmente la aceptación y la integración del nuevo modelo), cómo identificar en qué fase está cada persona o cada equipo, cómo adaptar la comunicación y el soporte a la fase en la que se encuentra cada persona y cuánto tiempo es normal que dure cada fase según la magnitud del cambio. Explica también por qué algunas personas atraviesan las fases más rápido que otras y qué factores lo explican.

2. LA COMUNICACIÓN DEL CAMBIO: LA PRIMERA Y MÁS IMPORTANTE DECISIÓN
Define la estrategia de comunicación del cambio que reduce la resistencia y construye voluntad de adaptación: el timing de la comunicación (anunciar demasiado pronto genera meses de ansiedad con información incompleta, anunciar demasiado tarde genera desconfianza cuando la noticia se filtra), el mensaje del cambio que responde a las preguntas que realmente importan a los empleados (¿qué significa esto para mí? ¿mi trabajo cambia? ¿mi posición está segura? ¿qué gano yo con este cambio?), la jerarquía de comunicación correcta (los managers deben ser informados antes que sus equipos para poder responder a las preguntas), los canales de comunicación (la comunicación del cambio significativo necesita la presencia del liderazgo, no un email), cómo manejar las preguntas a las que no tienes respuesta todavía sin que la incertidumbre se interprete como ocultamiento y cómo hacer el seguimiento de la comunicación para asegurarte de que el mensaje ha llegado y ha sido entendido.

3. EL ROL DEL MANAGER: EL VECTOR MÁS IMPORTANTE DEL CAMBIO
Explica el rol crítico del manager de proximidad en la gestión del cambio individual: el manager es el mediador entre el cambio organizacional abstracto y la experiencia concreta del empleado, por qué el 70% de la varianza en la respuesta al cambio de un equipo se explica por el comportamiento de su manager, las competencias que el manager necesita para liderar el cambio (la capacidad de escuchar sin ponerse a la defensiva, la honestidad sobre lo que sabe y lo que no, la capacidad de dar sentido al cambio sin negar la dificultad), cómo preparar a los managers para las conversaciones difíciles con sus equipos (el empleado que pregunta si va a perder su trabajo, el que lleva 20 años y siente que el cambio anula su experiencia), cómo gestionar al manager que es él mismo resistente al cambio y cuál es el límite entre la resistencia legítima del manager y la insubordinación que hay que gestionar.

4. LAS RESISTENCIAS: TIPOLOGÍA Y TRATAMIENTO
Define la tipología de resistencias al cambio y el proceso de gestión de cada una: la resistencia informacional (la persona no entiende por qué el cambio es necesario o no cree la justificación que se le ha dado, que se resuelve con más y mejor información), la resistencia emocional (la persona entiende el cambio racionalmente pero lo vive como una pérdida, que requiere espacio para el duelo y el reconocimiento del dolor), la resistencia de capacidades (la persona no tiene las habilidades para funcionar en el nuevo modelo, que se resuelve con formación y soporte), la resistencia de intereses (la persona pierde algo concreto con el cambio —estatus, poder, condiciones— y tiene incentivos para resistir, que requiere negociación o decisiones difíciles) y la resistencia cultural (el cambio choca con los valores o las normas no escritas de la organización, que es la más difícil de gestionar). Para cada tipo, dame el proceso de intervención.

5. LOS GRUPOS MÁS VULNERABLES EN EL CAMBIO
Explica cómo identificar y acompañar a los grupos más vulnerables durante un cambio organizacional: los empleados de mayor antigüedad (que han invertido muchos años en la forma de trabajar que cambia y cuya identidad está más vinculada al modelo anterior), los empleados con menor adaptabilidad digital (que enfrentan el cambio tecnológico como una amenaza a su competencia), los managers de nivel medio (que deben liderar el cambio para sus equipos mientras lo están viviendo ellos mismos), los empleados de alto rendimiento con alta empleabilidad (que ante la incertidumbre tienen más facilidad para irse a otro lugar) y los colectivos con representación sindical (donde la resistencia puede escalar a conflicto laboral si no se gestiona bien). Para cada grupo, define el plan de acompañamiento específico.

6. MEDIR Y GESTIONAR LA ADOPCIÓN DEL CAMBIO
Define el sistema de monitorización de la adopción del cambio que permite gestionar proactivamente en lugar de reaccionar cuando el problema ya es grande: los indicadores de adopción del cambio (el uso de las nuevas herramientas, la adherencia a los nuevos procesos, la participación en las formaciones, el NPS interno como proxy de la disposición al cambio), los indicadores de riesgo de talento (el incremento en el absentismo, la caída del engagement en las encuestas de pulso, el aumento de las conversaciones de offboarding), cómo usar las encuestas de pulso durante el proceso de cambio sin que se conviertan en una fuente de ruido sin acción, cómo diseñar los grupos de escucha que proporcionan información cualitativa sobre cómo se está viviendo el cambio y cómo informar al liderazgo sobre el estado de la adopción de forma que genere decisiones de aceleración o de ajuste del plan de cambio.

Termina con un plan de gestión del cambio a 6 meses: las actividades del mes 1 (diagnóstico y comunicación inicial), los meses 2 y 3 (formación y soporte a la adopción), los meses 4 y 5 (seguimiento y gestión de resistencias) y los hitos del mes 6 que indican si el cambio se ha consolidado o si necesita un período adicional de acompañamiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el proceso de acompañamiento a los empleados durante cambios organizacionales significativos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Adaptabilidad financiera: gestionar la empresa en ciclos económicos',
                'description'      => 'El director financiero que gestiona la empresa a través de los ciclos: la gestión conservadora en recesión, el aprovechamiento de las oportunidades en la recuperación y la disciplina financiera que hace que la empresa sobreviva cuando otras no lo hacen.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión financiera estratégica y en la adaptación de la empresa a los diferentes ciclos económicos. Quiero que me ayudes a diseñar el modelo de gestión financiera que hace que mi empresa sea resiliente en los momentos difíciles y capture el máximo valor en los momentos de bonanza, con la disciplina financiera que permite sobrevivir a los ciclos que eliminan a los competidores menos preparados.

Mi contexto:
- Tipo de empresa y sector: [empresa de servicios, empresa industrial, startup en crecimiento, empresa madura, empresa familiar]
- Situación del ciclo económico actual: [crecimiento, desaceleración, recesión, recuperación]
- Situación financiera actual de la empresa: [posición de caja fuerte, posición ajustada, endeudamiento alto, en crecimiento que consume caja]
- Principal preocupación financiera: [sobrevivir a una recesión con el nivel de deuda actual, no perder la posición competitiva mientras cortamos costes, capturar las oportunidades de la recuperación sin sobreendeudarse, preparar la empresa para el siguiente ciclo negativo]

Con esa información, quiero que me entregues:

1. EL CICLO ECONÓMICO Y SUS FASES: RECONOCER EL MOMENTO
Explica el modelo de gestión financiera que adapta la estrategia según la fase del ciclo económico: cómo identificar en qué fase del ciclo estamos (los indicadores adelantados que predicen el giro del ciclo antes de que sea obvio), las cuatro fases del ciclo y las implicaciones financieras de cada una (expansión: crecimiento del mercado, acceso fácil al crédito, competencia por el talento; pico: señales de sobrecalentamiento, endurecimiento de las condiciones financieras; recesión: contracción de la demanda, restricción del crédito, presión sobre los márgenes; recuperación: vuelta del crecimiento, oportunidades de adquisición a precios bajos), cómo evitar el error más caro del ciclo (sobrendeudarse en el pico de la expansión cuando el crédito es barato y los activos parecen baratos) y cómo preparar la empresa para el siguiente giro del ciclo cuando las cosas todavía van bien.

2. GESTIÓN FINANCIERA EN RECESIÓN: PRESERVAR LA CAJA Y EL NEGOCIO
Define el playbook de gestión financiera en recesión: la prioridad de la supervivencia (la empresa que no tiene caja no puede tomar ninguna otra decisión), la revisión del flujo de caja semanal o bisemanal durante la recesión (la frecuencia que permite reaccionar antes de que los problemas sean irresolubles), el proceso de optimización de la estructura de costes que preserva la capacidad de volver a crecer (los costes que puedes reducir sin dañar el negocio versus los costes que si los reduces hoy te costarán el doble recuperarlos mañana), la gestión del capital circulante en recesión (acelerar el cobro a clientes, extender el pago a proveedores, reducir el inventario), la renegociación proactiva de las condiciones financieras con los bancos antes de que los covenants sean un problema y la gestión de las decisiones de talento en recesión (qué se puede reducir y qué no sin destruir la capacidad de recuperación).

3. OPORTUNIDADES EN RECESIÓN: CRECER CUANDO OTROS SE CONTRAEN
Explica las oportunidades financieras y estratégicas que crea la recesión para las empresas que están en posición sólida: las adquisiciones de competidores en dificultades a precios que en expansión serían imposibles (cómo evaluar una oportunidad de M&A en recesión sin dejarse llevar por el precio aparentemente bajo), la captación de talento que está disponible porque otros están reduciendo plantilla, el aumento de la cuota de mercado cuando los competidores más frágiles cortan la inversión en marketing y ventas, las inversiones en capex o en tecnología que en expansión tienen largos plazos de entrega y ahora se ejecutan más rápido y barato, y cómo evaluar financieramente estas oportunidades cuando el acceso al crédito es más restringido y el riesgo de equivocarse es mayor.

4. GESTIÓN FINANCIERA EN RECUPERACIÓN: ACELERAR SIN SOBRECALENTARSE
Define el playbook de gestión financiera en la fase de recuperación: cómo identificar las señales tempranas de la recuperación en tu sector antes de que sea obvio para todos (los pedidos que vuelven, el crédito que se vuelve a otorgar, las conversaciones de M&A que se reactivan), cómo acelerar la inversión en crecimiento cuando el ciclo empieza a girar sin comprometer la posición de caja que ha permitido sobrevivir a la recesión, cómo gestionar la tentación de sobrecontratar y sobreinvertir en los primeros trimestres de recuperación (el error simétrico al de sobrendeudarse en el pico), el proceso de rebuild del balance durante la recuperación (reducir la deuda que se tomó para sobrevivir a la recesión, reconstruir la reserva de caja para el siguiente ciclo) y cómo comunicar la estrategia de la recuperación a los accionistas y al consejo de administración.

5. STRESS TEST FINANCIERO: PREPARARSE PARA EL SIGUIENTE CICLO
Explica el proceso de stress test financiero que prepara la empresa para el siguiente ciclo negativo: el análisis de escenarios de estrés (qué pasa con el flujo de caja si los ingresos caen un 20%, un 30% o un 40% durante 12 meses), los covenants bancarios que se romperían antes de que la caja sea un problema (y que hay que renegociar ahora mientras la empresa está en buena posición), el nivel mínimo de caja que la empresa necesita para sobrevivir 6, 12 y 18 meses sin ingresos adicionales, la evaluación de la rigidez de la estructura de costes (qué porcentaje de los costes son variables y reducibles rápidamente y cuáles son fijos y comprometidos en el largo plazo) y cómo usar el resultado del stress test para tomar decisiones hoy que reducen el riesgo cuando llegue el siguiente ciclo negativo.

6. EL CFO COMO AGENTE DE ADAPTABILIDAD ORGANIZACIONAL
Define el rol del director financiero como agente de adaptabilidad de la organización en los cambios de ciclo: cómo el CFO debe comunicar el estado del ciclo y las implicaciones financieras al consejo y al equipo directivo de forma que genere decisiones preventivas en lugar de reactivas, cómo construir la cultura de disciplina financiera en la organización que hace que los gestores de negocio tomen decisiones con conciencia del ciclo (la unidad de negocio que sobreinvierte en expansión crea un problema para toda la empresa en recesión), cómo usar el proceso de presupuestación y de planificación financiera como herramienta de adaptabilidad (el presupuesto base y los presupuestos contingentes para distintos escenarios de ciclo) y cómo el CFO puede construir las relaciones con los bancos, los inversores y los accionistas que dan a la empresa las opciones financieras que necesita para adaptarse en cualquier fase del ciclo.

Termina con un dashboard de indicadores financieros de ciclo económico: los KPIs que el CFO debe monitorizar para detectar el giro del ciclo antes de que sea obvio, las alertas que deben disparar una revisión de la estrategia financiera y los umbrales que activan cada fase del playbook de gestión de ciclo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el modelo de gestión financiera que adapta la empresa a cada fase del ciclo económico',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Adaptación a los cambios regulatorios acelerados',
                'description'      => 'Cuando las leyes cambian más rápido de lo que el despacho puede adaptarse: el proceso de monitoreo regulatorio, el impacto inmediato en los clientes y la capacidad del abogado de dar consejo cuando la normativa cambia.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del cambio regulatorio para despachos de abogados y departamentos jurídicos. Quiero que me ayudes a diseñar el sistema de monitoreo, análisis e implementación de los cambios regulatorios que permite al despacho o al departamento jurídico adaptarse rápidamente a las nuevas normativas y ofrecer consejo actualizado a los clientes antes de que el cambio se convierta en un riesgo para ellos.

Mi contexto:
- Área de práctica o sector regulado: [fintech y servicios financieros, privacidad de datos y tecnología, derecho laboral, derecho inmobiliario, compliance de empresas, derecho ambiental, derecho farmacéutico]
- Tipo de cambio regulatorio que estoy enfrentando: [nueva directiva europea en transposición, reforma legal de gran alcance, cambio de criterio interpretativo de la autoridad supervisora, nueva normativa técnica de desarrollo de ley existente]
- Principal dificultad: [el volumen de cambios es mayor que la capacidad del equipo de analizarlos, los clientes preguntan sobre el cambio antes de que el despacho lo haya analizado, la implementación de los cambios en los contratos y los procesos del cliente es lenta y costosa]
- Tamaño del equipo jurídico: [despacho pequeño, despacho mediano o grande, departamento legal corporativo]

Con esa información, quiero que me entregues:

1. EL SISTEMA DE MONITOREO REGULATORIO: NO PERDER EL CAMBIO
Explica cómo construir el sistema de monitoreo del entorno regulatorio que detecta los cambios relevantes antes de que entren en vigor: las fuentes primarias que hay que seguir (el BOE, el DOUE para el derecho europeo, los Boletines Oficiales autonómicos, las circulares y guías de los supervisores relevantes para el área de práctica), las fuentes secundarias que amplían la cobertura sin multiplicar el tiempo (los servicios de alertas jurídicas especializados, las publicaciones de los despachos internacionales que operan en el área regulatoria, las publicaciones de las asociaciones sectoriales), el proceso de filtrado de la información para que solo lleguen los cambios relevantes para el área de práctica (la señal en el ruido del boletín oficial que publica cientos de páginas al día), la asignación de responsabilidades de monitoreo en el equipo y la frecuencia de revisión según el dinamismo regulatorio del área.

2. EL ANÁLISIS DE IMPACTO: DE LA NORMA AL CLIENTE
Define el proceso de análisis de impacto de un cambio normativo sobre los clientes: cómo identificar qué clientes se ven afectados por el cambio (la base de clientes clasificada por actividad, por sector y por tipo de operaciones), cómo evaluar el nivel de impacto para cada tipo de cliente (impacto crítico que requiere acción inmediata, impacto significativo que requiere adaptación en el plazo establecido por la norma e impacto menor que requiere monitoring sin acción inmediata), cómo priorizar el análisis cuando hay múltiples cambios simultáneos con capacidad limitada de análisis en el equipo, cómo usar el análisis de impacto para identificar las oportunidades de negocio que crea el cambio regulatorio (el nuevo servicio de compliance, la revisión de contratos existentes, el proyecto de implementación que el cliente necesitará) y cómo documentar el análisis de forma que pueda actualizarse cuando la interpretación de la norma evolucione.

3. LA COMUNICACIÓN AL CLIENTE: SER PROACTIVO ANTES DE QUE PREGUNTEN
Explica cómo diseñar la comunicación proactiva de los cambios regulatorios relevantes a los clientes: el cliente que se entera del cambio por el despacho antes de que sea un problema tiene una experiencia de valor completamente distinta del cliente al que el despacho llama cuando el problema ya ha ocurrido, cómo calibrar el tono de la comunicación según la urgencia del cambio (la circular de alertas periódica para cambios de bajo impacto, la llamada directa del socio responsable para cambios de alto impacto), qué debe incluir la comunicación del cambio (el resumen del cambio, la fecha de entrada en vigor, el impacto para este cliente específico, las acciones que se recomiendan y los plazos), cómo adaptar el nivel de detalle de la comunicación según el perfil del receptor (el GC interno que quiere el análisis completo versus el CEO que quiere la conclusión y la acción), y cómo usar la comunicación regulatoria proactiva como herramienta de diferenciación y de fidelización.

4. LA IMPLEMENTACIÓN DEL CAMBIO: DEL ANÁLISIS A LA ACCIÓN DEL CLIENTE
Define el proceso de acompañamiento al cliente en la implementación de los cambios regulatorios: el gap analysis entre la situación actual del cliente y los requisitos de la nueva normativa (qué hace hoy el cliente, qué debe hacer para cumplir con la nueva norma y qué brecha hay que cerrar), el plan de implementación con los hitos, los plazos y las responsabilidades (quién hace qué y cuándo), la revisión y adaptación de los contratos existentes que requiere el cambio (los contratos marco, los términos y condiciones, los acuerdos de procesamiento de datos), la formación del equipo del cliente sobre las nuevas obligaciones y procesos, la creación de los procedimientos internos y los documentos que requiere el nuevo marco regulatorio y cómo gestionar los proyectos de implementación con múltiples clientes simultáneamente sin que la calidad se resienta.

5. GESTIÓN DEL CONOCIMIENTO REGULATORIO EN EL DESPACHO
Explica cómo construir y mantener el knowledge management del despacho en áreas regulatorias dinámicas: cómo documentar el análisis de cada cambio normativo de forma que pueda ser reutilizado cuando otros clientes pregunten sobre el mismo cambio, cómo construir la biblioteca de templates actualizados (contratos, políticas, procedimientos) que incorpora cada cambio normativo, cómo gestionar el proceso de actualización de los templates cuando una norma que los afectaba cambia (el template de contrato de procesamiento de datos que tiene que actualizarse con cada revisión del RGPD o de la normativa de desarrollo), cómo usar la gestión del conocimiento para que el associate pueda dar consejo de calidad sobre un cambio normativo sin necesitar al senior en cada consulta y cómo posicionar externamente el conocimiento del despacho en el cambio regulatorio mediante publicaciones, webinars y participación en grupos de trabajo sectoriales.

6. ADAPTABILIDAD DEL DESPACHO: CONSTRUIR LA CAPACIDAD DE RESPUESTA RÁPIDA
Define el modelo organizativo del despacho que permite responder a los cambios regulatorios más rápido que los competidores: la formación continua del equipo en las áreas regulatorias dinámicas (los planes de desarrollo que incluyen el seguimiento de las novedades regulatorias como competencia core), la red de colaboradores externos o el acceso a asociaciones sectoriales que amplían la capacidad de análisis sin incrementar los costes fijos, los procesos de revisión de la calidad del consejo regulatorio que aseguran que la respuesta al cambio es jurídicamente sólida aunque sea rápida, cómo gestionar los períodos de mayor carga regulatoria (cuando varias normativas importantes coinciden en el tiempo) sin que el equipo se desborde y cómo usar la tecnología (herramientas de legal tech, motores de búsqueda jurídica, herramientas de IA para el análisis inicial de los textos normativos) para aumentar la capacidad de respuesta del equipo sin comprometer la calidad del análisis jurídico.

Termina con un playbook de respuesta a un cambio regulatorio importante: los pasos desde que se detecta el cambio hasta que el cliente ha recibido la comunicación, ha aprobado el plan de implementación y está ejecutando las acciones requeridas, con los plazos orientativos para cada paso y los roles responsables de cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el sistema de adaptación al cambio regulatorio que protege a los clientes y diferencia al despacho',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en mercados en contracción',
                'description'      => 'Mantiene la retención cuando el cliente está bajo presión económica: las conversaciones de valor en tiempos difíciles, las concesiones que salvan el contrato y la estrategia de CS que construye la lealtad que dura más allá de la crisis.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success durante períodos de recesión y contracción de mercado. Quiero que me ayudes a diseñar la estrategia de CS que maximiza la retención cuando los clientes están bajo presión económica y están revisando todos sus gastos, incluyendo el nuestro, buscando las conversaciones de valor que justifican el contrato y las concesiones que salvan la relación sin destruir el margen del negocio.

Mi contexto:
- Tipo de producto o servicio: [SaaS B2B, plataforma de datos, servicios profesionales]
- ACV medio y segmentación de cuentas: [aproximado]
- Impacto de la situación económica en los clientes: [los clientes están cortando presupuesto, los deals de expansión se han congelado, los clientes piden renegociación de precios antes de la renovación, el churn ha aumentado]
- Situación del equipo de CS: [mismo equipo, equipo reducido, equipo sin experiencia en CS durante recesión]
- Principal miedo actual: [perder a los clientes más grandes, cascada de downgrade que compromete el NRR, perder cuentas que estaban en proceso de expansión]

Con esa información, quiero que me entregues:

1. IDENTIFICACIÓN TEMPRANA DE LAS CUENTAS EN RIESGO POR PRESIÓN ECONÓMICA
Explica el proceso de identificación temprana de las cuentas que están bajo presión económica antes de que lleguen con una petición de cancelación o renegociación: las señales externas que indican que el cliente puede estar en dificultades (noticias de layoffs en la empresa del cliente, caída del precio de la acción si es pública, reducción de la inversión visible, cambios en el liderazgo que suelen acompañar a los períodos de ajuste), las señales internas en el comportamiento del cliente en el producto (reducción del número de usuarios activos, caída del uso de funcionalidades premium, disminución de la frecuencia de acceso), las señales en la relación con el equipo de CS (reducción de la frecuencia de las reuniones periódicas, demoras en responder a los emails, cancelación de los QBRs) y cómo usar estas señales para priorizar las cuentas que necesitan intervención antes de que llegue la conversación de renegociación.

2. LA CONVERSACIÓN DE VALOR EN TIEMPOS DIFÍCILES: UN ENFOQUE DIFERENTE
Explica cómo adaptar la conversación de valor cuando el cliente está bajo presión económica: la conversación de valor en tiempos de bonanza ("mira todo lo que puedes hacer con el producto, aquí hay tres funcionalidades nuevas") no funciona cuando el cliente está cortando costes y lo que busca es justificar por qué mantiene lo que ya tiene. Define el nuevo enfoque: cómo cuantificar el ROI económico del producto en el lenguaje del ahorro de costes y de la eficiencia (si el producto ahorra 5 horas semanales de trabajo a un equipo de 10 personas, eso tiene un valor económico calculable), cómo posicionar el producto como parte de la solución al problema del cliente en lugar de como parte del problema de costes, cómo usar los datos de uso del producto para demostrar el valor que se está generando ahora mismo (no el valor potencial de funcionalidades que el cliente todavía no usa) y cómo preparar al champion interno con los argumentos que necesita para defender el presupuesto del producto ante el CFO.

3. LAS CONVERSACIONES DIFÍCILES: PETICIONES DE DESCUENTO Y RENEGOCIACIÓN
Define el proceso para gestionar las peticiones de descuento y de renegociación del contrato que llegan en períodos de presión económica: cómo distinguir la petición táctica (el cliente que pide descuento porque es parte de su proceso de compra y porque sabe que en la situación actual puede intentarlo) de la petición genuina de ayuda (el cliente que tiene un problema real de presupuesto y que si no conseguimos algo razonable se verá obligado a cancelar), cómo tener la conversación de valor antes de hablar de precio (el cliente que entiende el valor que obtiene está en mejor posición para defender el presupuesto internamente), las concesiones que puedes hacer sin destruir el margen (downsell a un plan más básico en lugar de cancelar, pago diferido de una parte del contrato, ampliación de plazo con precio congelado) y las concesiones que no debes hacer porque crean un precedente que afecta a toda la base de clientes.

4. GESTIÓN DEL DOWNSELL: PERDER MENOS PARA NO PERDER TODO
Explica la estrategia de gestión del downsell como alternativa al churn: cuándo el downsell es la opción correcta (el cliente que cancela vale cero, el cliente que hace downgrade mantiene la relación y puede recuperar el nivel cuando mejore su situación), cómo diseñar los planes de downsell que preservan el valor para el cliente mientras reducen el coste (qué funcionalidades se mantienen en el plan reducido para que el cliente siga generando valor), cómo presentar el downsell como una solución temporal y no como una renegociación permanente (el lenguaje de "pausa" o de "ajuste temporal" que mantiene la expectativa de recuperación), cómo gestionar el impacto del downsell en las métricas del equipo (el NRR que cae pero el churn que se evita) y cómo mantener el contacto y el nivel de servicio con las cuentas en downsell para que la relación se recupere cuando el cliente sale de la situación difícil.

5. LA ESTRATEGIA DE RETENCIÓN PROACTIVA: CONSTRUIR ANTES DE LA CRISIS
Define las prácticas de CS que construyen la resiliencia de la base de clientes antes de que llegue la presión económica: la diversificación del número de stakeholders comprometidos en cada cuenta (el cliente que tiene un solo champion es vulnerable cuando ese champion cambia o pierde influencia), la construcción del business case documentado que justifica el producto ante el CFO (que existe antes de que el CFO pregunte), la revisión periódica del valor generado que mantiene viva la percepción del ROI (y que hace que el producto no sea el primero en la lista de recortes), la integración profunda del producto en los procesos del cliente (que aumenta el coste de cambio) y el programa de comunidad de usuarios que construye la lealtad que va más allá de la relación contrato-proveedor.

6. EL EQUIPO DE CS EN RECESIÓN: HACER MÁS CON MENOS
Explica cómo gestionar el equipo de CS cuando la presión económica también afecta a los recursos internos del equipo: cómo priorizar el tiempo del equipo cuando hay más cuentas en riesgo de las que el equipo puede atender en profundidad (el triage de cuentas que maximiza el impacto del equipo), cómo usar la tecnología (las herramientas de CS como Gainsight, Totango o ChurnZero) para mantener el nivel de atención en las cuentas de menor ACV sin incrementar el tiempo del equipo, cómo mantener la motivación del equipo de CS cuando el NRR cae y las métricas están por debajo del objetivo a pesar del esfuerzo del equipo, cómo comunicar la situación al equipo directivo de forma que entienda la diferencia entre la pérdida de cuentas por el contexto económico y la pérdida por problemas de ejecución y cómo usar el período de presión para identificar y desarrollar las habilidades de CS que son especialmente valiosas en tiempos difíciles (la conversación de valor cuantificada, la gestión de la renegociación, el manejo de conversaciones ejecutivas).

Termina con un playbook de crisis de retención para el equipo de CS: el protocolo que activas cuando el churn empieza a acelerar, las prioridades del equipo en los primeros 30 días, las métricas que monitorizas diariamente y los umbrales que activan una escalación al equipo directivo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mantener la retención y el NRR cuando los clientes están bajo presión económica',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Resiliencia del freelance ante la incertidumbre',
                'description'      => 'El freelance que construye un negocio que resiste los momentos difíciles: la diversificación de ingresos, el fondo de emergencia y la mentalidad que convierte la incertidumbre del trabajo independiente en la libertad que otros envidian.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de negocio y en psicología para freelancers y trabajadores independientes. Quiero que me ayudes a construir la resiliencia del negocio freelance que le permite sobrevivir y prosperar en los momentos de incertidumbre: cuando los clientes tardan en pagar, cuando los proyectos se cancelan de repente, cuando el mercado se contrae o cuando una racha de seis meses de poco trabajo amenaza con destruir lo que has tardado años en construir.

Mi contexto:
- Tipo de trabajo freelance y especialidad: [desarrollo, diseño, consultoría, formación, copywriting, coaching, fotografía...]
- Años como freelance y estado actual del negocio: [recién empezado, establecido pero frágil, estable con alguna vulnerabilidad específica]
- Principal fuente de fragilidad del negocio: [dependencia de uno o dos clientes grandes, ingresos completamente irregulares, sin fondo de emergencia, mercado muy dependiente del ciclo económico, burnout recurrente]
- Momento que me ha llevado a buscar este tema: [acabo de perder mi cliente principal, llevo meses con la agenda medio vacía, me doy cuenta de que un problema inesperado podría poner en riesgo el negocio]
- Situación financiera personal: [sin ahorros de respaldo, con algunos meses de reserva, con fondo de emergencia suficiente]

Con esa información, quiero que me entregues:

1. DIAGNÓSTICO DE FRAGILIDAD: DÓNDE ESTÁ TU TALÓN DE AQUILES
Explica el proceso de diagnóstico de las fuentes de fragilidad del negocio freelance: la concentración de clientes (el riesgo de que el 80% de los ingresos vengan del 20% de los clientes o de un solo cliente), la concentración de sectores (el riesgo de que todos los clientes estén en el mismo sector y que la crisis del sector te arrase a ti también), la dependencia de un canal de generación de proyectos (el riesgo de que el 100% del trabajo llegue por una sola fuente como el boca a boca o una sola plataforma), la fragilidad del modelo de ingresos (el riesgo de un modelo 100% por proyecto sin ningún ingreso recurrente), el nivel de fondo de emergencia (los meses de gastos fijos que puedes cubrir sin ningún ingreso) y el nivel de diversificación de habilidades (el riesgo de ser tan especializado que un cambio tecnológico o de mercado hace que tu especialidad sea menos valiosa). Dame una scorecard de resiliencia del negocio freelance.

2. LA DIVERSIFICACIÓN DE INGRESOS: CONSTRUIR CAPAS DE ESTABILIDAD
Define la estrategia de diversificación de ingresos del freelance que reduce la dependencia de cualquier fuente única: el primer nivel de diversificación es tener múltiples clientes en distintos sectores (ningún cliente representa más del 30-40% de los ingresos), el segundo nivel es añadir un componente de ingresos recurrentes al modelo por proyecto (el retainer mensual de un cliente, la suscripción a un servicio o a una newsletter de pago, el mantenimiento periódico que sustituye al proyecto puntual), el tercer nivel es añadir ingresos pasivos o semiautomáticos (el curso online grabado, la plantilla o el producto digital que se vende sin intervención directa, el libro o el ebook sobre la especialidad), y el cuarto nivel es la creación de activos que generan valor a largo plazo (la comunidad, el podcast, el newsletter que construye audiencia y abre puertas a oportunidades que no buscas activamente). Para cada nivel, explica el tiempo y el esfuerzo de construcción y el retorno esperable.

3. EL FONDO DE EMERGENCIA DEL FREELANCE: LA PRIMERA PRIORIDAD
Explica la estrategia financiera del fondo de emergencia para freelancers: por qué el freelance necesita un fondo de emergencia mayor que el empleado (la irregularidad de los ingresos, los períodos de búsqueda de nuevos proyectos, el riesgo de impago de un cliente importante), cuántos meses de gastos debe cubrir el fondo de emergencia de un freelance (la respuesta varía según la previsibilidad de los ingresos y la rapidez con la que puedes generar nuevos proyectos), cómo construir el fondo de emergencia cuando los ingresos son irregulares (la estrategia de apartar un porcentaje fijo de cada factura antes de gastar nada), dónde mantener el fondo de emergencia (líquido pero separado de la cuenta corriente operativa), cómo gestionar el fondo de emergencia cuando tienes que usarlo (cuándo reponerlo y a qué ritmo) y cómo gestionar psicológicamente el uso del fondo de emergencia sin que genere una ansiedad paralizante.

4. LA PROSPECCIÓN CONTINUA: NUNCA DEJAR DE BUSCAR CUANDO ESTÁS OCUPADO
Explica por qué la prospección continua es la práctica de resiliencia más importante del freelance y cómo implementarla aunque tengas la agenda llena: el ciclo del feast-or-famine (abundancia o escasez) que afecta a la mayoría de los freelancers y que se produce por parar de prospectar cuando hay trabajo y arrancar de cero cuando el trabajo acaba, cómo diseñar la rutina mínima de prospección semanal que mantiene el pipeline activo aunque no tengas urgencia (una conversación de red, un post de autoridad, una propuesta de colaboración, un evento sectorial al mes), cómo mantener las relaciones con los clientes anteriores de forma que sean una fuente natural de trabajo recurrente y de referidos, cómo construir la visibilidad online que hace que las oportunidades lleguen sin que tengas que buscarlas activamente (el efecto de los artículos que se buscan en Google tres años después de haberlos publicado) y cómo gestionar el tiempo de prospección cuando la carga de trabajo actual es alta.

5. LA MENTALIDAD DE RESILIENCIA: CONVIVIR CON LA INCERTIDUMBRE SIN DESTRUIRSE
Explica las prácticas de gestión mental que permiten al freelance convivir con la incertidumbre de los ingresos sin que la ansiedad destruya la calidad de vida y del trabajo: la diferencia entre la ansiedad productiva (la que te hace prospectar y prepararte) y la ansiedad paralizante (la que te impide trabajar y pensar con claridad), cómo usar el plan financiero de supervivencia como herramienta de tranquilidad (saber que tienes un plan si los ingresos caen un 50% durante 6 meses reduce la ansiedad de forma significativa), cómo separar la identidad personal del rendimiento del negocio en los meses difíciles (tu valía como profesional no está determinada por si este mes has tenido mucho o poco trabajo), cómo gestionar la presión social del freelance que se compara con los empleados que tienen estabilidad aparente (el sesgo de comparar tu peor momento con el promedio de ellos) y cómo usar los períodos de baja carga de trabajo como períodos de inversión en habilidades, en visibilidad y en proyectos personales.

6. EL PLAN DE CONTINGENCIA: QUÉ HACES SI LO PEOR OCURRE
Define el plan de contingencia del freelance para los escenarios más adversos: el escenario de la racha larga sin trabajo (qué acciones activas en orden si llevas 1 mes, 3 meses o 6 meses sin proyectos suficientes), el escenario del cliente principal que no paga (los pasos legales y de recuperación de deuda, los ajustes de tesorería inmediatos, cómo gestionar el período sin ese ingreso), el escenario de la incapacidad temporal (la enfermedad o el accidente que te impide trabajar: qué seguros necesitas, cómo tienes cubierta la situación económica), el escenario del cambio tecnológico que hace obsoleta tu especialidad (el plan de reconversión que defines hoy, antes de que sea urgente) y el escenario nuclear de tener que volver al empleo por cuenta ajena (cómo mantener las condiciones para que esa decisión sea una elección y no una rendición). Para cada escenario, dame los primeros pasos concretos.

Termina con el manifiesto del freelance resiliente: los principios, las prácticas y los sistemas que definen el negocio freelance construido para durar, distinguiendo al freelance que sobrevive las crisis del que las usa como punto de inflexión para construir algo más sólido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir la resiliencia del negocio freelance para sobrevivir y crecer en los momentos de incertidumbre',
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
