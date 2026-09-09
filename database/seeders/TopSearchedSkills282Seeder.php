<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills282Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Colaboración entre marketing y ventas: el alineamiento que mueve el negocio',
                'description'      => 'Aprende a construir los procesos, acuerdos y ritmos de trabajo que alinean marketing y ventas para generar más ingresos con menos fricción interna.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ingresos (CRO) con experiencia en construir equipos de marketing y ventas que trabajen como uno solo. Necesito tu ayuda para diseñar el sistema de alineamiento entre marketing y ventas que elimine la fricción, mejore la calidad del pipeline y aumente la velocidad de conversión.

**El problema clásico entre marketing y ventas**

En la mayoría de empresas, marketing y ventas se culpan mutuamente del rendimiento insuficiente: "los leads de marketing son basura", dice ventas. "Ventas no trabaja los leads que les enviamos", responde marketing. Este conflicto es caro, está generalizado y es completamente evitable con los acuerdos y procesos correctos.

La raíz del problema no es la mala voluntad sino la falta de definiciones compartidas, métricas comunes y rituales de comunicación que mantengan a ambos equipos sincronizados sobre lo que funciona y lo que no.

**El Service Level Agreement (SLA) entre marketing y ventas**

El primer paso para alinear ambos equipos es un acuerdo explícito sobre qué se compromete cada uno. El SLA de marketing y ventas define:

1. **Definición compartida del lead cualificado**: qué es un MQL (Marketing Qualified Lead) con criterios específicos y verificables. No "una empresa que encaja en nuestro ICP que ha mostrado interés", sino "empresa de 50-500 empleados en España, sector industrial, cargo director o superior, que ha solicitado una demo o descargado dos o más recursos en los últimos 30 días". La definición tiene que ser binaria: cumple o no cumple.

2. **Criterios de paso de MQL a SQL**: cuándo pasa un lead del ownership de marketing al de ventas. Qué información mínima tiene que tener el lead en el CRM antes del traspaso.

3. **Compromisos de ventas**: en cuántas horas tiene que contactar ventas a un MQL recibido (el estándar de industria es menos de 24 horas hábiles). Qué hacer con los leads que no cumplen los criterios de timing.

4. **Compromisos de marketing**: cuántos MQLs al mes se compromete a generar marketing, por canal y por segmento. Qué hace con el feedback de ventas sobre la calidad de los leads.

5. **Proceso de retroalimentación**: cómo y con qué frecuencia ventas comparte información sobre la calidad de los leads con marketing. La "disposición del lead" en el CRM como fuente de datos para optimizar las campañas.

**Los rituales de sincronización**

Reuniones regulares entre marketing y ventas que tienen que funcionar:

- Weekly sync de pipeline: revisión rápida del pipeline activo, cuellos de botella de la semana, ajustes urgentes en campañas o mensajes
- Monthly review de lead quality: análisis conjunto de los datos de conversión del mes. ¿Qué fuentes de leads tienen mejor tasa de conversión a cliente? ¿Qué segmentos están sobre o subrepresentados?
- Quarterly planning conjunto: el equipo de ventas comparte su feedback sobre objeciones frecuentes, mensajes que resuenan y mensajes que no. Marketing ajusta el posicionamiento y el contenido en consecuencia.

**Herramientas y CRM como fuente de verdad compartida**

El mayor bloqueador técnico de la alineación es que marketing y ventas trabajan con datos diferentes. Cómo construir la única fuente de verdad:

- Cómo integrar las herramientas de marketing (HubSpot, Marketo, Google Analytics) con el CRM de ventas (Salesforce, HubSpot CRM, Pipedrive)
- Qué datos tiene que ver cada equipo sobre el pipeline: ventas necesita saber de dónde viene el lead y su historial de engagement; marketing necesita saber si el lead convirtió y en cuánto tiempo
- Dashboards compartidos: qué métricas tienen que estar visibles para ambos equipos en tiempo real

**El mensaje: coherencia desde marketing hasta el cierre**

Uno de los síntomas del desalineamiento es el mensaje inconsistente: marketing promete X, ventas habla de Y, y el cliente recibe Z en el onboarding. Cómo construir el mensaje unificado:

- La narrativa comercial central: qué problema resolvemos, para quién, por qué somos diferentes. Elaborada conjuntamente y usada por ambos equipos.
- El banco de contenidos de enablement: materials de marketing que ventas realmente usa (no los que crea marketing sin preguntar a ventas qué necesitan)
- Cómo mantener el mensaje actualizado cuando el mercado cambia

**Métricas compartidas: el indicador máximo de alineamiento**

El equipo de marketing y ventas realmente alineado mide el éxito con las mismas métricas de negocio: ingresos generados, no volumen de leads. Cómo construir el modelo de atribución que muestra la contribución real de cada equipo al resultado final.

Dame un plan de 60 días para implementar el SLA y los rituales de sincronización con mi equipo actual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir procesos y acuerdos de alineamiento entre marketing y ventas para generar más ingresos con menos fricción interna.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Engineering collaboration: code review, pair programming y cultura de equipo técnico',
                'description'      => 'Construye una cultura de colaboración técnica donde el code review es aprendizaje, el pair programming es productivo y el equipo crece junto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager con experiencia en construir equipos de ingeniería de alto rendimiento donde la colaboración técnica es una ventaja competitiva. Necesito tu ayuda para diseñar las prácticas, normas y cultura de colaboración que hacen que mi equipo de desarrollo trabaje mejor junto.

**Por qué la colaboración técnica es más que un proceso**

La diferencia entre un equipo de ingeniería bueno y uno excelente raramente es la habilidad técnica individual: es la capacidad de trabajar juntos de forma que el todo sea mayor que la suma de las partes. Un equipo que hace code review de forma efectiva detecta bugs antes, comparte conocimiento continuamente y mantiene estándares de calidad sin necesidad de supervisión constante. Un equipo que hace pair programming bien entrega código más sólido y forma a los juniors más rápido que cualquier curso.

**Code Review: de trámite a herramienta de crecimiento**

El code review mal hecho es un cuello de botella desmotivante. El code review bien hecho es la práctica de aprendizaje más poderosa de un equipo técnico.

Principios del code review efectivo:

1. **El propósito del code review**: no es encontrar errores (los tests existen para eso), sino compartir conocimiento, mantener la coherencia del código, detectar problemas de diseño que los tests no capturan, y asegurar que el equipo entiende los cambios que entran en la base de código.

2. **La actitud del reviewer**: comentar código, no a personas. "Esta función tiene alta complejidad ciclomática, ¿podríamos dividirla?" vs. "esto es demasiado complicado". La diferencia no es solo semántica: cambia la experiencia del equipo y la disposición a mejorar.

3. **La actitud del autor**: el PR no es el trabajo terminado, es el inicio de la conversación. Cómo escribir descripciones de PR que contextualizan el cambio y facilitan el review. Cómo responder a los comentarios con apertura sin perder el criterio propio.

4. **La escala del review**: qué debe comentarse siempre (bugs, problemas de seguridad, violaciones del estilo acordado del equipo), qué puede comentarse con "nit:" (preferencias de estilo no críticas que el autor puede ignorar), y qué no debería comentarse (decisiones de implementación igualmente válidas que solo reflejan preferencia personal).

5. **El tamaño del PR**: el problema del PR de 3.000 líneas que nadie puede revisar bien. La política de PRs pequeños y frecuentes como práctica de equipo.

6. **El tiempo de review**: el SLA interno del equipo para revisar PRs. El PR ignorado durante días destruye el flujo de trabajo y la moral.

**Pair Programming: cuándo y cómo hacerlo bien**

El pair programming no es para todo momento ni para todo tipo de trabajo:

- Cuándo hacer pair programming: problemas complejos o ambiguos donde dos perspectivas desde el inicio evitan caminos ciegos; onboarding de nuevos miembros del equipo; cuando un senior y un junior trabajan en una parte crítica del sistema; cuando el equipo está atascado en un problema difícil.

- Cuándo NO hacer pair programming: trabajo mecánico y repetitivo; cuando un integrante del equipo necesita tiempo de concentración profunda; cuando los estilos de trabajo son muy incompatibles sin tiempo para alinearlos.

- El formato efectivo de pair programming: driver-navigator (quien escribe el código y quien supervisa se turnan con frecuencia, cada 15-25 minutos), cómo estructurar la sesión para que sea productiva y no agotadora.

- Pair programming remoto: las herramientas (Live Share de VSCode, Tuple, GitDuo) y las convenciones que hacen funcionar el pair en remoto.

**La cultura de aprendizaje técnico colectivo**

Más allá del code review y el pair programming:

- Tech talks internas: cómo crear el espacio para que los ingenieros compartan lo que aprenden. El formato de la charla técnica interna que la gente quiere escuchar.
- Postmortems blameless: cómo hacer que los incidentes sean una fuente de aprendizaje colectivo sin miedo al señalamiento individual. La plantilla de postmortem y el ritual de revisión.
- Architectural Decision Records (ADR): cómo documentar las decisiones de arquitectura importantes para que el equipo futuro entienda el razonamiento, no solo la decisión.
- Rotación de código: cómo evitar los silos de conocimiento donde solo una persona entiende un módulo crítico.

**Métricas de la salud de la colaboración técnica**

- Tiempo de ciclo de PR: desde que se abre hasta que se merguea. El estándar de equipos de alto rendimiento.
- Distribución de reviews: si siempre revisan las mismas personas, hay un cuello de botella de conocimiento.
- Tiempo de respuesta a comentarios: la velocidad de las conversaciones de code review.

Dame un plan de implementación de estas prácticas para un equipo de [N] personas con [nivel de experiencia actual] en un entorno [remoto/híbrido/presencial].
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir prácticas de code review y pair programming que convierten la colaboración técnica en ventaja competitiva del equipo.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design collaboration: trabajar con developers, PMs y stakeholders sin fricciones',
                'description'      => 'Aprende a colaborar efectivamente con equipos de producto y negocio: cómo comunicar decisiones de diseño, gestionar feedback y proteger la visión sin crear conflictos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con experiencia trabajando en equipos multidisciplinares donde el diseño colabora estrechamente con ingeniería, producto y negocio. Necesito tu ayuda para desarrollar las habilidades y procesos de colaboración que me permitan trabajar con todos estos perfiles de forma efectiva y sin las fricciones que suelen acompañar al diseño en entornos técnicos.

**Por qué el diseñador necesita dominar la colaboración**

El diseño no existe en el vacío. Por bueno que sea el trabajo visual o de interacción, si no se implementa correctamente, si los stakeholders no lo entienden o si el PM lo descarta por "no encajar en el sprint", el diseño no tiene impacto. La habilidad de colaborar efectivamente es tan importante para el diseñador como la habilidad de diseñar bien.

**Colaboración con Ingeniería**

La relación entre diseño e ingeniería es la más operativa y la que más afecta a la calidad del producto final:

1. **El handoff de diseño**: cómo preparar los diseños en Figma o la herramienta correspondiente para que los desarrolladores puedan implementarlos con mínima ambigüedad. Componentes bien nombrados, tokens de diseño, guías de comportamiento interactivo, estados de error y vacío, comportamiento responsive. El handoff como documentación, no como trámite.

2. **Participar en el planning técnico**: por qué el diseñador debe estar presente en las conversaciones técnicas de estimación y planificación, no como quien toma la decisión sino como quien aporta contexto sobre las implicaciones del diseño en la implementación.

3. **La revisión de implementación (QA de diseño)**: cómo hacer la revisión de lo que engineering implementa de forma constructiva. El diseñador que revisa comparando píxel a píxel sin priorizar vs. el que distingue los problemas críticos de funcionalidad e identidad visual de las diferencias menores.

4. **Cuando la implementación y el diseño difieren**: cómo gestionar la conversación cuando engineering implementa algo diferente a lo diseñado. Cuándo insistir, cuándo adaptar el diseño a la realidad técnica y cuándo encontrar una tercera opción.

5. **Design tokens y sistemas de diseño compartidos**: cómo el design system es el lenguaje común entre diseño e ingeniería. Cómo construirlo y mantenerlo de forma colaborativa.

**Colaboración con Product Management**

El PM y el diseñador deben ser el equipo más simbiótico del producto:

1. **Participar en el discovery**: por qué el diseñador tiene que estar en las conversaciones con usuarios desde el principio, no solo recibir los requisitos del PM. Cómo proponer y facilitar sesiones de investigación de usuario.

2. **Comunicar las decisiones de diseño con razonamiento**: no presentar el diseño como "así me parece bien" sino como "he tomado esta decisión porque los usuarios en nuestras entrevistas mostraron X, y esta solución reduce la fricción en el paso Y". El diseño justificado es el diseño que sobrevive al feedback.

3. **Proteger el diseño sin ser intransigente**: cuándo defender una decisión de diseño ante la presión del PM y cuándo ceder. La diferencia entre la decisión que afecta a la experiencia del usuario y la preferencia personal del diseñador.

4. **El diseñador como pensador de producto**: cómo ir más allá de los requisitos recibidos y proponer mejoras al flujo o al concepto cuando el diseño revela un problema más profundo.

**Colaboración con Stakeholders de Negocio**

Los stakeholders no técnicos tienen una relación compleja con el diseño:

1. **Presentar diseño a stakeholders**: cómo estructurar la presentación de un diseño para una audiencia que evalúa por gusto, no por criterio de UX. El contexto que hay que dar antes de mostrar los pantallazos.

2. **Gestionar el feedback de "no me gusta"**: transformar el feedback de gusto en feedback de criterio. Preguntas para entender qué objetivo no está cumpliendo el diseño según el stakeholder, más allá de la preferencia estética.

3. **Decisiones de diseño que tienen que aprobarse y cuáles no**: qué necesita validación del negocio y qué puede decidir el diseñador con el PM sin escalar. El exceso de aprobaciones ralentiza sin añadir valor.

**Herramientas de colaboración**

Cómo usar Figma, Notion, Jira y otras herramientas para que la colaboración sea fluida y no genere ruido adicional. Las convenciones de nomenclatura, la organización de los archivos de diseño y la documentación de decisiones que evitan conversaciones repetidas.

Dame un plan de mejora de la colaboración para las tres relaciones clave (engineering, PM, stakeholders) con acciones concretas para esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Colaborar efectivamente con developers, PMs y stakeholders para que el diseño tenga impacto real en el producto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Equipo de ventas cohesionado: cómo construir la cultura de colaboración comercial',
                'description'      => 'Construye un equipo de ventas donde la colaboración, el intercambio de inteligencia comercial y el apoyo mutuo mejoran el rendimiento individual y colectivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia construyendo equipos de ventas de alto rendimiento donde la colaboración entre vendedores es una ventaja competitiva, no una amenaza. Necesito tu ayuda para construir la cultura y los procesos que convierten a un grupo de vendedores individuales en un equipo cohesionado.

**El problema de la cultura de ventas individualista**

Los equipos de ventas tienen una tendencia natural hacia el individualismo: las comisiones son individuales, los rankings son individuales y la cultura de la competencia interna puede crear héroes solitarios que acumulan información en vez de compartirla. El resultado es un equipo donde cada vendedor reinventa la rueda, los nuevos tardan mucho en alcanzar la productividad y el conocimiento sobre clientes y mercado se pierde cuando alguien se va.

El equipo de ventas colaborativo no sacrifica la motivación individual: la amplifica con el soporte colectivo. El vendedor que puede pedir ayuda a un colega con un caso difícil cierra más que el que trabaja solo.

**Los fundamentos de la colaboración en ventas**

1. **Inteligencia comercial compartida**: el conocimiento sobre clientes, competidores, objeciones y técnicas de cierre que el equipo comparte activamente. Cómo construir el sistema de captura y distribución de esta inteligencia.

2. **La cultura de victorias compartidas**: cómo celebrar los logros individuales de forma que generen aprendizaje colectivo, no envidia. El debrief de victorias: qué hizo exactamente el vendedor que cerró ese deal difícil.

3. **La cultura de fracasos analizados**: cómo hablar de los deals perdidos de forma que el equipo aprenda sin que sea una experiencia humillante para quien los perdió. El postmortem de oportunidad perdida como práctica regular.

**Procesos de colaboración comercial**

1. **Deal reviews colectivas**: revisión periódica de las oportunidades más grandes o más difíciles del pipeline con todo el equipo. El vendedor presenta el caso, el equipo aporta ideas, perspectivas y recursos. Cómo estructurar estas sesiones para que sean útiles y no una reunión de control.

2. **Mentoring y shadowing entre pares**: emparejar vendedores más experimentados con los más nuevos no solo para transmitir técnica sino para transmitir mentalidad, gestión de la adversidad y conocimiento del mercado.

3. **Biblioteca de contenido comercial colectiva**: el repositorio donde el equipo guarda los emails que funcionan, las propuestas ganadoras, las respuestas a objeciones específicas, los casos de éxito por sector. Cómo mantenerla viva y actualizada.

4. **Inteligencia de competidores**: el sistema para que cada vendedor recopile y comparta información sobre competidores que aparece en sus conversaciones con clientes. El equipo que sabe cómo responder a cada competidor tiene ventaja.

**La estructura de incentivos que fomenta la colaboración**

No se puede construir una cultura de colaboración con una estructura de incentivos puramente individualista. Opciones:

- Bonus de equipo complementario al individual: cuando el equipo alcanza el objetivo colectivo, todo el equipo recibe un incentivo extra
- Reconocimiento del "mejor apoyo al equipo": métricas de colaboración (cuántos deals ayudó, cuánto conocimiento compartió) que tienen visibilidad en la dirección
- Cómo diseñar territorios y cuotas que no creen competencia destructiva dentro del equipo

**Retos de la colaboración en ventas**

- El vendedor estrella que no colabora: cómo gestionarlo sin perder su rendimiento individual ni dañar la cultura del equipo
- La resistencia a compartir información: por qué los vendedores acumulan información y cómo cambiar ese incentivo
- El equipo distribuido o remoto: cómo mantener la colaboración cuando el equipo no comparte espacio físico

**Métricas de la colaboración comercial**

- Tiempo de rampa de los nuevos vendedores: indicador de la efectividad del sistema de onboarding y mentoring
- Porcentaje de deals con participación de más de un vendedor: indicador de colaboración real en oportunidades
- NPS interno del equipo: cómo se sienten los vendedores sobre el apoyo que reciben del equipo

Dame un plan de 90 días para transformar la cultura de mi equipo de ventas e implementar los primeros rituales de colaboración.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir la cultura y procesos de colaboración en un equipo de ventas para mejorar el rendimiento colectivo e individual.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Cross-functional teams: coordinar diseño, ingeniería y negocio sin guerras',
                'description'      => 'Aprende a liderar equipos multidisciplinares donde diseño, ingeniería y negocio trabajan hacia un objetivo compartido sin conflictos de poder ni silos de información.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de producto con amplia experiencia liderando equipos multidisciplinares (cross-functional) en empresas tecnológicas. Necesito tu ayuda para desarrollar las habilidades y los sistemas que me permitan coordinar equipos donde participan perfiles de diseño, ingeniería y negocio de forma que avancen juntos en vez de en sentidos opuestos.

**Por qué los equipos cross-functional son difíciles**

Reunir en un mismo equipo a perfiles con formaciones, mentalidades y lenguajes profesionales muy diferentes (un diseñador, un backend developer y un analista de negocio) crea tensiones naturales. Cada perfil tiene sus propias prioridades, su propia definición de "calidad" y su propio ritmo de trabajo. Sin un sistema claro de coordinación, estas diferencias se convierten en conflictos, parálisis o silos informales.

La teoría de los equipos cross-functional es atractiva: diversidad de perspectivas, propiedad end-to-end del producto, decisiones más completas. La práctica es más difícil: reuniones que no llegan a acuerdos, decisiones que se toman fuera del equipo, frustración de perfiles que sienten que no son escuchados.

**El diseño del equipo cross-functional efectivo**

1. **Objetivo compartido claro**: el equipo tiene que tener un objetivo de negocio medible que todos entienden y que trasciende las métricas individuales de cada función. No "el equipo de checkout" sino "el equipo que mejora la tasa de conversión del checkout del 2,3% al 3,5% en el Q3".

2. **Roles y responsabilidades claros**: la confusión sobre quién decide qué es la fuente de más conflictos en equipos cross-functional. El PM decide qué se construye y por qué. El tech lead decide cómo se construye. El design lead decide la experiencia de usuario. Cada uno puede y debe influir en el área del otro, pero la decisión final tiene su dueño.

3. **Ritmo de trabajo compartido**: cómo alinear los ciclos de trabajo de funciones que naturalmente trabajan a ritmos diferentes. El diseñador necesita tiempo de discovery antes del sprint. El engineer necesita especificaciones antes de estimar. El analista de negocio necesita datos antes de priorizar. Cómo secuenciar esto sin que se convierta en cascada.

**Rituales de coordinación cross-functional**

Los rituales que hacen funcionar al equipo:

1. **Planning conjunto**: cuando todo el equipo planifica juntos el trabajo del periodo, el contexto se comparte y los problemas de dependencia se detectan antes. Cómo facilitar un planning que no sea solo el PM dictando y el resto asintiendo.

2. **Revisión de diseño con engineering antes de comprometerse**: el prototipo que engineering revisa antes de que el diseñador lo dé por finalizado ahorra semanas de implementación imposible o frustrante.

3. **Retrospectiva de equipo genuina**: no una lista de "qué fue bien / qué fue mal" sin consecuencias. Una conversación real sobre qué cambiar en la forma de trabajar, con compromisos específicos y seguimiento en la siguiente retro.

4. **Comunicación asíncrona efectiva**: en equipos con trabajo híbrido o remoto, cómo documentar decisiones y contexto para que no se pierdan entre reuniones. El principio "write it down": si no está escrito, no se decidió.

**Gestión de conflictos en equipos cross-functional**

Los conflictos más comunes y cómo gestionarlos:

- "Engineering dice que tardaría seis semanas y negocio necesita dos": cómo facilitar la conversación de trade-offs sin que se convierta en una guerra de poder.
- "El diseñador insiste en una solución que engineering considera no implementable": cómo llegar a una solución técnicamente viable que preserve la intención de diseño.
- "Negocio quiere una feature que product cree que no es prioritaria para los usuarios": cómo hacer explícita la tensión y llegar a una decisión razonada.

En cada caso: quién facilita la conversación, qué información se necesita para decidir, cómo se toma la decisión final cuando no hay consenso.

**La confianza como infraestructura**

Los equipos cross-functional funcionan cuando los integrantes confían en el criterio de los otros perfiles aunque no entiendan todos los detalles de su disciplina. Cómo construir esa confianza:

- Transparencia sobre las razones de las decisiones: explicar el "por qué" no solo el "qué"
- Cumplir los compromisos inter-equipo: nada destruye la confianza cross-functional como las promesas incumplidas
- Reconocimiento de la expertise ajena: el PM que reconoce la expertise del engineer, el engineer que reconoce la del diseñador

Dame un diagnóstico del estado de colaboración de mi equipo cross-functional actual y las tres acciones prioritarias para mejorar la coordinación en el próximo sprint.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Liderar equipos cross-functional donde diseño, ingeniería y negocio coordinan eficientemente hacia un objetivo compartido.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Team effectiveness: diagnosticar y mejorar el rendimiento del equipo',
                'description'      => 'Aprende a diagnosticar los problemas que limitan el rendimiento de un equipo y a diseñar intervenciones que mejoren la efectividad colectiva de forma duradera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de efectividad organizacional con experiencia en diagnóstico y mejora de equipos en entornos corporativos y de alta tecnología. Necesito tu ayuda para desarrollar la capacidad de diagnosticar con precisión qué está limitando el rendimiento de un equipo y diseñar intervenciones que realmente funcionen.

**El problema del equipo de bajo rendimiento**

Un equipo que no funciona bien raramente tiene un único problema. Los síntomas más visibles (conflictos interpersonales, plazos incumplidos, baja moral) suelen ser consecuencias de causas más profundas: falta de claridad de objetivos, ausencia de confianza psicológica, dinámicas de poder disfuncionales, o simplemente la ausencia de los procesos correctos. Intervenir en los síntomas sin entender las causas es perder tiempo y empeorar la situación.

**El diagnóstico de efectividad del equipo**

El primer paso es entender exactamente qué está fallando. Ayúdame a construir el proceso de diagnóstico:

1. **Señales de alerta por dimensión**: cómo detectar problemas en cada dimensión clave:
   - Claridad de propósito: ¿saben los miembros del equipo exactamente cuál es el objetivo compartido y cómo mide el éxito?
   - Roles y responsabilidades: ¿sabe cada persona qué se espera de ella y cómo se relaciona con el trabajo de los demás?
   - Confianza y seguridad psicológica: ¿puede la gente decir lo que piensa sin miedo a represalias? ¿Admiten los errores abiertamente?
   - Conflicto constructivo: ¿se debate con profundidad antes de decidir, o hay silencio aparente que esconde desacuerdo?
   - Accountability: ¿las personas cumplen sus compromisos? ¿Hay consecuencias cuando no se cumplen?
   - Orientación a resultados: ¿el equipo celebra los resultados de negocio o los entregables y actividades?

2. **Métodos de diagnóstico**: qué herramientas usar para recopilar información honesta sobre el estado del equipo:
   - Encuestas anónimas de clima y efectividad: qué preguntar y cómo interpretar los resultados
   - Entrevistas individuales confidenciales: las preguntas que revelan lo que las encuestas no capturan
   - Observación de reuniones: qué patrones de comportamiento en las reuniones son diagnósticos de problemas más profundos
   - Análisis de datos de rendimiento: qué métricas objetivas hablan de la salud del equipo

3. **El modelo de Google sobre efectividad de equipos (Project Aristotle)**: la seguridad psicológica como el factor número uno. Cómo medir la seguridad psicológica de mi equipo con los instrumentos de Amy Edmondson.

**Intervenciones de efectividad por tipo de problema**

Según el diagnóstico, qué intervención es la adecuada:

- Problema de claridad de objetivos: el taller de definición de OKR o de propósito del equipo. Cómo facilitarlo para que el resultado sea apropiado por el equipo, no impuesto por el manager.
- Problema de confianza interpersonal: las actividades de construcción de confianza que funcionan (no el team building artificial). El perfil DISC, MBTI o Working Styles como herramienta de comprensión mutua.
- Problema de conflicto disfuncional: cómo instalar el conflicto constructivo en un equipo que evita el desacuerdo o que tiene desacuerdos destructivos.
- Problema de accountability: el sistema de compromisos explícitos y seguimiento que no es microgestión.
- Problema de liderazgo: cuando el problema está en el manager, no en el equipo. Cómo gestionarlo si eres el manager, cómo gestionarlo si eres RRHH.

**El plan de mejora de efectividad**

Cómo construir un plan de mejora que sea:
- Específico: basado en el diagnóstico, no en el modelo genérico de "build trust, communicate better"
- Participativo: el equipo co-diseña la solución, no la recibe de arriba
- Medible: con indicadores que permiten saber si la mejora está funcionando
- Sostenible: que no dependa de la presencia constante de un consultor externo

**Cuándo un equipo no tiene solución**

No todos los problemas de equipo tienen solución sin cambios estructurales. Señales de que el problema es el diseño organizacional, no el equipo: incentivos que ponen a los miembros en competencia, liderazgo que sabotea la colaboración, o misión del equipo que es internamente contradictoria.

Dame el framework de diagnóstico para mi equipo actual y las intervenciones prioritarias para los próximos tres meses.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diagnosticar los problemas que limitan el rendimiento de un equipo y diseñar intervenciones efectivas y duraderas.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finance y el resto de la empresa: dejar de ser el departamento del "no"',
                'description'      => 'Transforma el rol de finanzas de controlador presupuestario a socio estratégico que habilita el crecimiento con decisiones financieras rápidas y bien fundamentadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO moderno con experiencia en transformar la función financiera de un departamento de control a un socio estratégico del negocio. Necesito tu ayuda para rediseñar cómo mi equipo de finanzas se relaciona con el resto de la empresa para que seamos percibidos como habilitadores del crecimiento, no como el departamento que dice no a todo.

**El problema de reputación de finanzas**

El departamento de finanzas tiene en muchas empresas la reputación de ser el freno del negocio: el que pide tres aprobaciones para cualquier gasto, el que tarda semanas en aprobar un contrato, el que responde a toda petición con "no hay presupuesto". Esta reputación no siempre es injusta, pero sí es costosa: los otros departamentos evitan a finanzas hasta el último momento, ocultan información financiera relevante o toman decisiones sin consultarles para evitar el retraso.

El resultado es una empresa que toma peores decisiones financieras porque finanzas no tiene acceso a la información correcta en el momento correcto.

**El nuevo rol de finanzas como socio de negocio**

El Finance Business Partner (FBP) es el modelo que está transformando la función financiera en empresas avanzadas. El FBP no espera a que los datos lleguen a finanzas: va al negocio, entiende sus objetivos y les ayuda a tomar mejores decisiones más rápido.

Ayúdame a construir este rol en mi empresa:

1. **La mentalidad del FBP**: de "mi trabajo es controlar el gasto" a "mi trabajo es ayudar al negocio a conseguir sus objetivos dentro de los límites financieros". La diferencia entre estas dos mentalidades en el comportamiento diario.

2. **La presencia en los equipos de negocio**: el FBP tiene presencia regular en los equipos de marketing, producto, ventas o operaciones. Participa en sus reuniones de planificación, entiende sus retos y aporta análisis financiero proactivo.

3. **El lenguaje del negocio**: finanzas habla de EBITDA, capex y amortizaciones. El negocio habla de clientes, features y campañas. El FBP traduce ambos mundos.

**Procesos de colaboración que cambian la dinámica**

1. **Business reviews mensuales**: reuniones donde finanzas presenta a cada área el análisis de su rendimiento financiero: no solo "te has pasado del presupuesto" sino "has generado X de ingresos con Y de inversión, y el ratio es Z comparado con el objetivo y con el mes anterior".

2. **Previsión colaborativa (rolling forecast)**: en vez de presupuesto anual rígido que nadie cumple, un proceso de previsión continua donde el negocio aporta inputs y finanzas modela las implicaciones. La previsión como conversación, no como impuesto.

3. **Aprobación rápida de gastos**: cómo rediseñar el proceso de aprobación para que sea ágil sin perder el control. Límites de aprobación claros, herramientas de solicitud que no requieran reunión, tiempos de respuesta comprometidos.

4. **La consulta preventiva**: cuando el negocio consulta a finanzas antes de iniciar un proyecto (no después de comprometerse), finanzas puede aportar análisis que mejora la decisión y el proceso se hace colaborativo en vez de de control.

**Comunicación financiera que el negocio entiende**

- Cómo construir el dashboard financiero mensual para directivos no financieros: pocas métricas, visualización clara, contexto de tendencia e implicación de la cifra.
- Cómo presentar el análisis de rentabilidad de una iniciativa de forma que el responsable del área pueda tomar la decisión.
- Cómo comunicar las malas noticias financieras de forma que generen acción en vez de defensividad.

**Construir la confianza con el negocio**

La transición de controlador a socio lleva tiempo porque requiere cambiar la percepción acumulada:

- Los primeros 90 días del nuevo rol de finanzas: las acciones concretas que cambian la percepción
- Cómo ganar credibilidad como socio estratégico: llegar con análisis proactivos antes de que te los pidan
- Cuándo finanzas tiene que decir no y cómo decirlo de forma que preserve la relación

Dame un plan de transformación para mi equipo de finanzas con hitos trimestrales y las métricas que indicarán que el cambio está funcionando.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transformar finanzas de departamento de control a socio estratégico que habilita el crecimiento con análisis y colaboración.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal en el equipo de proyecto: colaborar con negocio sin ralentizarlo',
                'description'      => 'Aprende a integrar la función legal en los proyectos de negocio de forma ágil: cuándo y cómo involucrar a legal para obtener valor sin crear cuellos de botella.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un general counsel con experiencia en empresas de tecnología y crecimiento rápido donde la velocidad de ejecución es una ventaja competitiva. Necesito tu ayuda para diseñar cómo la función legal puede colaborar con los equipos de negocio de forma que aporten valor real sin convertirse en un cuello de botella que ralentiza la empresa.

**El problema de la colaboración entre legal y negocio**

Legal tiene la reputación de ralentizar los proyectos: revisa los contratos durante semanas, pide condiciones que el negocio percibe como excesivamente conservadoras, y responde a las peticiones con análisis de riesgo que el equipo comercial no sabe cómo usar para tomar decisiones. Esta dinámica crea dos comportamientos disfuncionales: el negocio evita consultar a legal para no frenar los proyectos, lo que aumenta el riesgo real; o legal revisa todo con el mismo nivel de detalle, lo que genera cuello de botella.

La función legal efectiva en una empresa moderna es ágil, colaborativa y orientada a habilitar el negocio dentro de límites de riesgo claros.

**El modelo de colaboración legal ágil**

1. **Triaje de riesgo legal**: no todas las decisiones y contratos requieren el mismo nivel de análisis legal. El sistema de triaje categoriza las peticiones en tres niveles:

   - Verde (bajo riesgo): el equipo puede proceder con el template estándar sin revisión individual. Ejemplos: contratos de servicios estándar bajo umbral económico, NDAs con el formato aprobado, comunicaciones de marketing dentro de las guías establecidas.

   - Amarillo (riesgo medio): legal revisa en plazo acotado (24-48 horas) con análisis enfocado en los puntos de mayor riesgo. El equipo tiene un plazo claro de respuesta.

   - Rojo (alto riesgo): revisión completa con análisis profundo. Reservado para contratos materiales, operaciones corporativas, decisiones regulatorias y situaciones de potencial litigación.

2. **Templates y playbooks**: el trabajo legal más valioso que libera tiempo para el análisis de alto impacto. Contratos estándar pre-aprobados que el negocio puede usar sin revisión individual, playbooks de posiciones negociadoras por tipo de contrato (qué podemos aceptar, qué podemos aceptar con modificaciones, qué no podemos aceptar), guías de cumplimiento para las operaciones más frecuentes (privacidad de datos, comunicaciones comerciales, contratación).

3. **El abogado incrustado en el equipo de proyecto**: en proyectos de alto impacto o alta complejidad jurídica, el abogado participa desde el inicio, no al final para revisar lo ya decidido. La diferencia de valor es enorme: aportar antes evita problemas que costarían mucho resolver después.

**Cómo trabajar con legal de forma efectiva desde el negocio**

Para los equipos de negocio que colaboran con legal:

1. **Cuándo involucrar a legal**: la regla de "mejor pronto que tarde" en las situaciones de riesgo. Qué tipo de decisiones tienen siempre implicaciones legales que el negocio suele no ver: contratación de proveedores, uso de datos de clientes, nuevos modelos de negocio, comunicaciones sobre el producto, relaciones laborales.

2. **Cómo hacer una petición efectiva a legal**: qué información incluir en la petición para que legal pueda responder rápido y bien. El contexto del negocio (por qué necesitamos esto, cuándo lo necesitamos, qué alternativas hemos considerado) es tan importante como la pregunta jurídica.

3. **Cómo usar el análisis de riesgo de legal para tomar decisiones**: legal puede presentar riesgos en términos de probabilidad e impacto que permitan al negocio tomar decisiones conscientes. El "esto conlleva riesgo legal significativo" sin cuantificación no permite decidir; el "esta cláusula crea un riesgo de reclamación que estimamos en entre X e Y euros con probabilidad Z%" sí.

**Construir la confianza entre legal y negocio**

- La reunión recurrente de legal con los equipos de negocio clave: presencia proactiva que reduce la percepción de legal como departamento reactivo
- Comunicación preventiva: alertas tempranas sobre cambios regulatorios o novedades jurídicas que el negocio necesita saber
- Formación de equipos de negocio: cómo dar a marketing, ventas y producto la formación mínima que les permite identificar cuándo necesitan consultar a legal

Dame un diseño del modelo operativo de colaboración entre legal y los equipos de negocio de mi empresa, con los templates prioritarios y el sistema de triaje adaptado a nuestra actividad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Integrar la función legal en proyectos de negocio de forma ágil para aportar valor sin crear cuellos de botella.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS con producto y marketing: el triángulo que decide el éxito del cliente',
                'description'      => 'Construye la colaboración entre Customer Success, producto y marketing para cerrar el ciclo de feedback del cliente y mejorar el producto y la comunicación continuamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en construir los puentes entre CS, producto y marketing para que la voz del cliente impacte en las decisiones de la empresa. Necesito tu ayuda para diseñar los procesos de colaboración entre estos tres equipos que hacen que el cliente esté en el centro de las decisiones.

**El triángulo virtuoso: CS, producto y marketing**

Cuando CS, producto y marketing colaboran bien, se crea un ciclo virtuoso:

- CS recoge de los clientes información sobre problemas, necesidades y expectativas que el producto no está cumpliendo
- Producto usa esta información para priorizar mejoras que aumentan el valor entregado
- Marketing usa los casos de éxito y el entendimiento profundo de los clientes para comunicar el valor de forma más precisa
- Los clientes sienten que son escuchados, están más satisfechos y son más propensos a renovar y referir

Cuando este triángulo no funciona, cada equipo vive en su silo: CS gestiona el dolor del cliente sin poder resolverlo, producto construye features basándose en suposiciones no validadas, y marketing habla de un producto que no corresponde a la experiencia real del cliente.

**CS como fuente de inteligencia de producto**

El equipo de CS tiene acceso a la información más valiosa sobre el producto: el feedback directo, no filtrado, de clientes que están usando el producto para resolver problemas reales.

Cómo sistematizar esta inteligencia:

1. **El sistema de captura de feedback**: cómo CS registra el feedback de los clientes de forma estructurada. No solo "el cliente está insatisfecho" sino "el cliente ha mencionado que la funcionalidad X no funciona para el caso de uso Y porque Z". La etiqueta, la frecuencia y el impacto en renovación.

2. **El proceso de escalada a producto**: cómo prioriza CS qué feedback escalar, con qué frecuencia y en qué formato. La diferencia entre el feedback anecdótico de un cliente difícil y la tendencia de tres clientes enterprise mencionando el mismo problema.

3. **Los artefactos que producto necesita de CS**: no "los clientes quieren más funcionalidades de reporting" sino "los clientes de segmento X, que representan el 40% del ARR, no pueden completar el caso de uso Y por falta de funcionalidad Z, lo que es el segundo motivo de churn según nuestros exit interviews".

4. **Participar en el discovery de producto**: cómo CS facilita el acceso de producto a los clientes correctos para las sesiones de investigación de usuario. CS tiene la relación; producto tiene las preguntas. La colaboración hace que ambos sean más efectivos.

**CS como fuente de inteligencia de marketing**

Los clientes más satisfechos y con mejores resultados son el material de marketing más poderoso. Cómo CS conecta con marketing:

1. **Identificar los casos de éxito**: CS sabe qué clientes tienen resultados que merecen ser contados y cuáles tienen la disposición y el perfil para participar en un caso de éxito.

2. **El proceso de producción de casos de éxito**: CS facilita el acceso al cliente y el contexto; marketing produce el contenido. Los roles claros y el proceso sin fricciones.

3. **Testimonios y referidos**: CS es el canal natural para conseguir testimonios y activar el programa de referidos de clientes. Cómo integrarlo en el proceso de CS sin que parezca una petición incómoda.

4. **Feedback sobre los mensajes de marketing**: los clientes que llegan con expectativas incorrectas sobre el producto revelan un problema de comunicación de marketing. CS es el primero en detectarlo. Cómo cerrar este loop con marketing.

**Los rituales de colaboración del triángulo**

1. **Reunión mensual CS-Producto de revisión de feedback**: los temas recurrentes, las tendencias de churn, las requests más frecuentes y su priorización en el roadmap.

2. **Reunión trimestral CS-Marketing de casos de éxito y mensajes**: qué clientes nuevos están listos para un caso de éxito, qué mensajes de marketing están creando expectativas incorrectas según el feedback de onboarding.

3. **El canal de comunicación asíncrona**: dónde va el feedback que no puede esperar a la reunión mensual. El canal de Slack o el sistema de tickets que mantiene la comunicación fluida entre los tres equipos.

**Métricas compartidas del triángulo**

- NPS y su evolución: CS lo mide, producto actúa en él, marketing lo usa como prueba social
- Churn por razón: CS lo captura, producto lo prioriza, marketing lo evita mejorando la comunicación de expectativas
- Time to value: CS lo mide en el onboarding, producto lo optimiza con mejoras en la activación, marketing lo usa como argumento de venta

Dame el diseño completo del sistema de colaboración entre CS, producto y marketing para mi empresa, con los rituales, los canales y las métricas compartidas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la colaboración entre CS, producto y marketing para poner la voz del cliente en el centro de las decisiones de la empresa.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Colaborar con otros freelancers: proyectos conjuntos y redes de apoyo',
                'description'      => 'Aprende a construir alianzas con otros freelancers para ganar proyectos más grandes, ofrecer servicios complementarios y apoyarte mutuamente en el camino independiente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con una red activa de colaboradores que le permite ganar proyectos que ninguno podría conseguir solo. Necesito tu ayuda para construir un sistema de colaboración con otros freelancers que amplíe mi capacidad, abra nuevas oportunidades y cree una red de apoyo en el camino independiente.

**Por qué los freelancers no colaboran (y por qué deberían)**

El freelance tiene una tendencia al aislamiento: trabajas solo, compites con colegas del mismo sector por los mismos clientes, y la cultura de la independencia a veces se confunde con el individualismo. El resultado es que muchos freelancers limitan artificialmente su capacidad de generar ingresos al tamaño de lo que pueden hacer solos, pierden proyectos grandes que requieren capacidad o expertise complementaria, y carecen de la red de apoyo que los empleados tienen de forma natural en el trabajo.

Los freelancers que construyen colaboraciones activas ganan más, trabajan en proyectos más interesantes, tienen menos periodos de sequía y son más resilientes ante los cambios del mercado.

**Tipos de colaboración entre freelancers**

1. **Servicios complementarios**: el diseñador que colabora con el desarrollador, el estratega de contenidos que trabaja con el copywriter, el consultor de negocio que se alía con el consultor de datos. La colaboración complementaria permite ofrecer al cliente un servicio más completo sin tener que ser experto en todo.

2. **Capacidad adicional**: dos o más freelancers con el mismo perfil que se asocian para ganar proyectos de mayor volumen o mayor duración que ninguno podría asumir solo. El cliente tiene un interlocutor único pero la capacidad de un equipo.

3. **Referidos mutuos**: red informal de freelancers que se refieren trabajo cuando no pueden o no quieren aceptar un proyecto. Funciona a largo plazo cuando la confianza está bien establecida y los referidos son de calidad.

4. **Comunidad de práctica y aprendizaje**: freelancers del mismo sector que se reúnen regularmente para compartir conocimiento, experiencias, retos y estrategias de negocio. Sin proyecto conjunto, pero con beneficio mutuo real.

**Cómo construir la red de colaboración**

1. **Identificar a los colaboradores ideales**: no es cuestión de conocer a mucha gente, sino de conocer bien a las personas correctas. Qué buscar en un potencial colaborador: calidad de trabajo comparable a la tuya, valores profesionales alineados, reputación verificable, complementariedad de skills o de red de clientes.

2. **El primer acercamiento**: cómo proponer una colaboración a alguien con quien no trabajas habitualmente. La conversación de sondeo antes del acuerdo formal: "He visto tu trabajo en X y creo que nuestras capacidades son muy complementarias. ¿Te gustaría explorar si hay proyectos donde podríamos trabajar juntos?"

3. **Dar antes de recibir**: la mejor forma de iniciar una colaboración real es dar valor primero. Referir un proyecto, compartir un contacto útil, dar feedback sobre su trabajo o presentarlos a alguien relevante. La reciprocidad se construye con el tiempo.

**El acuerdo de colaboración entre freelancers**

Cuando hay un proyecto conjunto, el acuerdo tiene que ser explícito:

1. **División de responsabilidades**: quién hace qué, quién es el interlocutor principal con el cliente, cómo se gestiona el feedback que llega al proyecto.

2. **División de ingresos**: cómo se reparte el ingreso del proyecto. Por horas trabajadas, por valor aportado, por aportación de cliente. La conversación de dinero tiene que hacerse antes del proyecto, no durante.

3. **Gestión de la relación con el cliente**: ¿el cliente sabe que trabajan como red de colaboradores o presenta el trabajo como propio? Las implicaciones de cada modelo.

4. **Qué pasa si algo va mal**: si uno de los colaboradores no cumple, si hay una disputa sobre la calidad del trabajo o sobre el reparto. El acuerdo previo sobre cómo resolver estos escenarios evita que las colaboraciones destruyan amistades y reputaciones.

**La comunidad como activo del freelance**

Más allá de los proyectos conjuntos, la comunidad de freelancers tiene un valor enorme para el bienestar y el desarrollo profesional:

- Cómo encontrar y elegir las comunidades de freelancers relevantes para tu perfil
- Cómo participar de forma que construyas reputación y generes conexiones reales
- Las comunidades de nicho vs. las generales: dónde es más rentable invertir el tiempo
- Cómo organizar o co-organizar espacios de intercambio que posicionen tu expertise y construyan tu red

**La salud psicológica de la colaboración**

Colaborar como freelance requiere gestionar la tensión entre la autonomía que buscaste al independizarte y la coordinación que requiere el trabajo conjunto:

- Cómo mantener tu identidad y tu posicionamiento mientras colaboras con otros
- Gestionar los desacuerdos profesionales con colaboradores sin destruir la relación
- Cuándo una colaboración no está funcionando y cómo terminarla limpiamente

Dame un plan de construcción de red de colaboradores para los próximos seis meses, con las acciones concretas por semana para activar y mantener las relaciones clave.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir alianzas con otros freelancers para ganar proyectos más grandes, intercambiar referidos y apoyarse mutuamente.',
                'vote_score'       => 36,
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
