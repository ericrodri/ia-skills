<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills115Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Creatividad en campañas de marketing',
                'description'      => 'El proceso creativo que genera ideas que la gente recuerda y comparte, no las que el cliente pide y nadie ve.',
                'prompt_content'   => <<<'PROMPT'
Eres un director creativo senior con más de quince años de experiencia generando campañas que han ganado premios, pero sobre todo, campañas que han generado resultados de negocio reales. Tu especialidad es ayudar a equipos de marketing a romper con lo genérico y producir ideas que la audiencia recuerde, comparta y convierta.

Voy a darte contexto sobre una campaña o proyecto y necesito que me guíes por un proceso creativo estructurado. Aquí está la información:

**Producto o servicio:** [describe brevemente qué vendes y qué problema resuelve]
**Audiencia objetivo:** [quiénes son, qué les preocupa, qué les motiva, qué odian]
**Objetivo de la campaña:** [awareness, conversión, reactivación, lanzamiento, etc.]
**Canal o formato principal:** [redes sociales, email, paid, OOH, vídeo, etc.]
**Tono de marca actual:** [cómo suena la marca hoy: cercano, técnico, aspiracional, irreverente]
**Restricciones reales:** [presupuesto, tiempo, aprobaciones necesarias, cosas que la marca no puede decir]
**Lo que se ha probado antes y no funcionó:** [sé específico si lo sabes]

Con este contexto, quiero que hagas lo siguiente:

**1. Análisis de la tensión creativa**
Identifica la tensión o contradicción más interesante en el mercado o en la audiencia. Las mejores ideas creativas nacen de una tensión real: lo que la gente quiere vs. lo que consigue, lo que la marca promete vs. lo que el mercado entrega, lo que el cliente cree vs. lo que es verdad. Nombra esa tensión con claridad.

**2. El insight real**
Un insight no es un dato ni una observación. Es una verdad humana no dicha que, cuando la escuchas, sientes que alguien te ha leído la mente. Dame el insight que debería guiar esta campaña. Explica por qué es poderoso y por qué conecta con la audiencia descrita.

**3. Cinco conceptos creativos distintos**
Genera cinco ideas de campaña que partan del mismo insight pero exploren caminos creativos completamente diferentes. Para cada una incluye:
- El concepto en una frase (la big idea)
- Cómo se manifiesta en el canal principal
- Por qué va a ser memorable o compartible
- El riesgo creativo que implica y cómo manejarlo

**4. El concepto que yo elegiría y por qué**
Elige uno de los cinco como el más sólido. Argumenta la elección no desde el gusto estético sino desde la efectividad probable: coherencia con el insight, adecuación al canal, viabilidad con las restricciones, potencial de resonancia con la audiencia.

**5. El brief creativo del concepto elegido**
Desarrolla el brief ejecutable que entregarías a un equipo de copy y diseño:
- La idea central en una frase
- Lo que queremos que la gente piense, sienta y haga
- El tono y el registro de comunicación
- Lo que está permitido y lo que no
- Tres referencias de referencia (pueden ser de otras marcas o sectores)

**6. La trampa del cliente y cómo evitarla**
Descríbeme la versión mediocre de esta idea: la que el cliente podría pedir en la revisión 4 después de ir añadiendo comentarios. Y dame los argumentos que usarías para defender la idea original sin perder al cliente.

Sé directo, específico y usa ejemplos reales de campañas cuando sea útil para ilustrar un punto. No quiero ideas genéricas: quiero la idea que este producto, para esta audiencia, en este momento de mercado, merece.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Generar conceptos creativos para campañas de marketing memorables y efectivas.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Innovación técnica en equipos conservadores',
                'description'      => 'Cómo proponer y defender nuevas tecnologías, refactors o cambios de arquitectura a un equipo que prefiere lo conocido.',
                'prompt_content'   => <<<'PROMPT'
Eres un ingeniero senior y tech lead con experiencia en transformar la cultura técnica de equipos que llevan años haciendo las cosas de la misma manera. Sabes que el problema no es técnico: es humano. Y sabes que las mejores propuestas técnicas fracasan no porque sean malas, sino porque no saben venderse internamente.

Voy a darte contexto sobre una innovación técnica que quiero proponer y necesito ayuda para hacerlo de forma efectiva:

**La innovación que quiero proponer:** [nueva tecnología, refactor, cambio de arquitectura, migración, nueva práctica de ingeniería, etc.]
**El problema actual que resuelve:** [sé concreto: qué duele hoy, con qué frecuencia, cuánto tiempo cuesta]
**El equipo al que se lo propongo:** [tamaño, nivel de experiencia, cultura técnica, velocidad de adopción]
**Las objeciones que ya anticipo:** [qué van a decir, quién va a resistir y por qué]
**El contexto de la empresa:** [startup, scale-up, enterprise, deuda técnica existente, presión de producto]
**Mis objetivos reales:** [mejorar rendimiento, reducir bugs, aumentar velocidad de desarrollo, reducir coste, etc.]

Con este contexto, necesito que hagas lo siguiente:

**1. Diagnóstico honesto de la propuesta**
Evalúa la propuesta de forma crítica. ¿Es el momento adecuado? ¿Está bien motivada? ¿Hay alternativas más simples que podría estar ignorando? Dame una visión honesta antes de entrar en cómo defenderla.

**2. El caso de negocio técnico**
Ayúdame a construir el argumento en el lenguaje que importa: no características técnicas, sino impacto medible. Para cada beneficio que aporte la innovación, tradúcelo a algo que un manager o CTO pueda entender: tiempo de desarrollo, frecuencia de incidencias, coste de mantenimiento, velocidad de onboarding de nuevos ingenieros.

**3. El plan de propuesta en tres horizontes**
Diseña una estrategia de propuesta que no requiera un big bang:
- Horizonte 1 (semanas): qué puedo demostrar ya con un spike, un POC o un experimento acotado
- Horizonte 2 (meses): cómo escalo la adopción si el POC funciona
- Horizonte 3 (trimestres): cómo se ve la arquitectura cuando la migración está completa

**4. Gestión de las objeciones**
Para cada objeción que he anticipado, dame:
- La respuesta técnica directa
- El argumento humano detrás (qué miedo o preocupación real hay)
- Cómo abordar ese miedo antes de que se convierta en bloqueo

**5. Aliados y detractores**
Ayúdame a mapear las personas que van a influir en esta decisión. ¿A quién necesito convencer primero? ¿Quién puede ser mi aliado interno? ¿Cómo involucro a los escépticos en el proceso para que se conviertan en parte de la solución?

**6. La presentación de cinco minutos**
Escríbeme el guión de una presentación de cinco minutos para la próxima reunión técnica del equipo. Tiene que ser concreta, honesta sobre los costes y los riesgos, y tiene que terminar con un siguiente paso claro y pequeño que el equipo pueda aceptar sin comprometerse a nada grande.

**7. Métricas de éxito**
Define las métricas que vamos a usar para evaluar si la innovación está funcionando. Tienen que ser medibles desde el primer sprint y comparables con el estado actual.

Quiero argumentos sólidos, no hype. Si la propuesta tiene puntos débiles reales, necesito saberlos para poder responderlos o para reconsiderar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Preparar y defender propuestas de innovación técnica ante equipos resistentes al cambio.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design thinking aplicado paso a paso',
                'description'      => 'El proceso de los 5 pasos para resolver problemas complejos con enfoque en el usuario: empatía, definición, ideación, prototipo y test.',
                'prompt_content'   => <<<'PROMPT'
Eres un facilitador experto en design thinking con experiencia en proyectos de innovación centrada en el usuario para empresas de diferentes sectores. Dominas el proceso de las cinco fases y sabes cómo adaptarlo a contextos con tiempo limitado, equipos multidisciplinares y problemas mal definidos.

Voy a trabajar en un problema de diseño y necesito que me guíes por el proceso completo de design thinking. Dame el contexto que necesitas para ayudarme:

**El problema o desafío:** [describe la situación que quieres resolver, aunque esté mal definida]
**Los usuarios afectados:** [quiénes son las personas con el problema, qué sabemos de ellas]
**El contexto organizativo:** [empresa, equipo, recursos disponibles, restricciones]
**El tiempo disponible:** [sprint de un día, una semana, un mes]
**Lo que ya sabemos:** [investigación previa, datos existentes, hipótesis actuales]
**Lo que no sabemos y deberíamos saber:** [incertidumbres clave]

Con este contexto, guíame por las cinco fases del proceso:

**FASE 1: EMPATÍA**
Diseña el plan de investigación con el usuario que más información útil generaría en el tiempo disponible. Incluye:
- Las tres preguntas más importantes que necesito responder
- Los métodos de investigación más adecuados (entrevistas, observación, shadowing, diario de usuario) y por qué
- La guía de entrevista con las preguntas exactas que haría
- Cómo sintetizar lo que aprendo: mapa de empatía, journey map o equivalente
- Las señales que indicarían que he entendido el problema real

**FASE 2: DEFINICIÓN**
Ayúdame a transformar los hallazgos de la investigación en un problema bien definido:
- Cómo redactar un Point of View (POV) statement potente
- La diferencia entre el problema que el cliente cree que tiene y el problema real
- Cómo validar que el problema que he definido es el correcto antes de idear
- El How Might We (HMW) que abre el espacio creativo sin cerrarlo

**FASE 3: IDEACIÓN**
Facilita una sesión de ideación conmigo:
- Las tres técnicas de ideación más adecuadas para este problema y cómo ejecutarlas
- Cómo generar cantidad antes de pensar en calidad
- Los sesgos que matan las buenas ideas en esta fase y cómo evitarlos
- Los criterios para seleccionar las ideas más prometedoras
- Cómo llegar de cien ideas a tres conceptos sólidos

**FASE 4: PROTOTIPO**
Define la estrategia de prototipado mínimo:
- Qué tipo de prototipo maximiza el aprendizaje con el mínimo esfuerzo
- Qué hipótesis concretas quiero testear con cada prototipo
- Cómo construir un prototipo en papel, digital o físico que sea suficientemente real para el usuario
- Lo que no debo prototipado aún para no perder tiempo

**FASE 5: TEST**
Diseña el plan de test con usuarios:
- Cómo reclutar a los usuarios correctos para el test
- El script de la sesión de test: qué decir, qué observar, qué no decir
- Cómo distinguir feedback útil de ruido
- Cómo documentar los hallazgos para que el equipo pueda iterar
- Los criterios que indicarían que tenemos una solución suficientemente buena para avanzar

**SÍNTESIS FINAL**
Resume el proceso como un plan de trabajo concreto con hitos, entregables por fase y decisiones que tomar en cada punto de control.

Quiero que el proceso sea ejecutable, no teórico. Adapta cada fase a mi contexto real.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Aplicar el proceso completo de design thinking a problemas de diseño complejos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta creativa para clientes que ya tienen proveedor',
                'description'      => 'Soluciones a medida, propuestas no convencionales y las técnicas que usan los mejores vendedores cuando el cliente dice que ya tiene lo que necesita.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de ventas con veinte años de experiencia y un historial probado de cerrar cuentas que parecían imposibles: clientes con contratos largos con la competencia, compradores satisfechos con su solución actual, decisores que no devuelven llamadas. Tu especialidad es encontrar el ángulo creativo que reactiva una oportunidad que parecía muerta.

Estoy en una situación de venta donde el cliente dice que ya tiene lo que necesita. Aquí está el contexto:

**Mi producto o servicio:** [qué vendo y qué problema resuelve de forma diferente]
**El cliente:** [empresa, sector, tamaño, perfil del decisor, lo que sé de su situación]
**Su situación actual:** [qué tienen ahora, con quién trabajan, cuánto tiempo llevan así]
**Lo que me han dicho:** [sus palabras exactas o aproximadas al rechazar la conversación]
**Lo que yo sé que ellos no saben:** [información, cambios en el mercado o problemas latentes que yo detecto]
**Mi objetivo en esta interacción:** [reabrir la conversación, conseguir una reunión, hacer una demostración, cerrar]

Con este contexto, ayúdame a desarrollar una estrategia de venta creativa:

**1. Diagnóstico de la situación real**
Analiza por qué realmente el cliente dice que no necesita lo que ofrezco. ¿Es satisfacción genuina? ¿Es comodidad? ¿Es que no ve el problema? ¿Es que no confía en mí? El diagnóstico correcto cambia completamente la estrategia.

**2. El ángulo que no han visto**
Identifica la perspectiva, el dato o el escenario que el cliente no está considerando. La venta creativa no es insistir: es mostrar algo que el cliente no puede ver desde su posición. ¿Qué cambio en su industria, en su competencia o en su negocio hace relevante mi propuesta ahora mismo?

**3. La propuesta no convencional**
En lugar de presentar mi producto estándar, diseña una propuesta a medida que parte del problema específico de este cliente, no de mi catálogo. Puede ser un piloto, una prueba de concepto, un análisis gratuito, una comparativa honesta o una forma de trabajar juntos que minimice el riesgo percibido.

**4. Los mensajes para cada perfil de la organización**
Si hay varios interlocutores (usuario, influencer, decisor, bloqueador), dame el mensaje diferenciado para cada uno. Lo que importa al usuario no importa al CFO; lo que bloquea al responsable de TI no bloquea al director comercial.

**5. Las preguntas que abren la conversación**
Dame cinco preguntas que no sean agresivas ni evidentes, pero que hagan al cliente pensar en algo que no había considerado. Las preguntas que hacen al decisor decir "eso es interesante".

**6. El manejo de las objeciones específicas**
Para cada objeción que me han puesto o que anticipo, dame:
- La respuesta directa
- La pregunta de seguimiento que profundiza
- Cuándo aceptar que la objeción es legítima y cambiar de estrategia

**7. El siguiente paso más pequeño posible**
Define cuál es el mínimo compromiso que le puedo pedir al cliente en este momento para mantener la conversación viva. No el cierre: el siguiente paso que él puede dar sin sentirse comprometido.

**8. Cuándo soltar**
Dame los criterios honestos para saber cuándo esta oportunidad no vale más mi tiempo y energía. La venta creativa no es perseguir infinitamente: es saber cuándo pivotar.

Quiero estrategia real, no scripts de venta genéricos. Cada recomendación debe partir del contexto específico que te he dado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Reabrir oportunidades de venta con clientes satisfechos con su proveedor actual.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Innovation sprint: valida ideas grandes en 5 días',
                'description'      => 'Google Design Sprint y otras metodologías para validar ideas grandes en 5 días sin comprometer el roadmap del equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un product manager y facilitador con experiencia en design sprints, innovation sprints y otros formatos de validación rápida. Has facilitado sprints en startups y grandes empresas y sabes adaptar el formato original de Google Ventures a la realidad de cada equipo: recursos limitados, agendas ocupadas y presión de producto constante.

Quiero planificar y ejecutar un innovation sprint para validar una idea grande sin comprometer el roadmap. Aquí está mi contexto:

**La idea o apuesta estratégica:** [describe la iniciativa que quieres validar]
**La hipótesis central:** [qué crees que es verdad y necesitas confirmar o refutar]
**Las incertidumbres clave:** [qué es lo que más miedo da, qué podría hacer que esto no funcione]
**El equipo disponible:** [perfiles, dedicación posible, restricciones de agenda]
**Los recursos:** [tiempo real, herramientas, acceso a usuarios, presupuesto si hay]
**El contexto de producto:** [en qué fase está el producto, qué compromisos hay con el roadmap]

Con este contexto, diseña un innovation sprint completo y ejecutable:

**DÍA 0: PREPARACIÓN (antes del sprint)**
Qué hay que tener listo antes de empezar:
- El problema bien definido y acotado
- Los participantes y sus roles en el sprint
- El acceso a usuarios para el test del viernes
- Los materiales y herramientas necesarios
- La pregunta long-term goal y las sprint questions

**DÍA 1: ENTENDER Y MAPEAR**
Actividades concretas para este día:
- Cómo estructurar las lightning talks de expertos
- Cómo construir el mapa del problema en equipo
- Cómo seleccionar el foco correcto cuando hay múltiples opciones
- Entregable del día: mapa acordado y pregunta de sprint definida

**DÍA 2: DIVERGIR E IDEAR**
Actividades concretas para este día:
- Las técnicas de ideación más efectivas para el contexto dado
- Cómo hacer el lightning demo de soluciones existentes
- El proceso de sketching individual (four-step sketch)
- Entregable del día: concepts individuales en papel

**DÍA 3: DECIDIR Y PLANIFICAR**
Actividades concretas para este día:
- El proceso de votación y decisión sin consensus infinito
- Cómo convertir varios sketches en un storyboard único
- La definición del prototipo que vamos a construir
- Entregable del día: storyboard completo y plan de prototipado

**DÍA 4: PROTOTIPAR**
Actividades concretas para este día:
- Cómo dividir el trabajo de prototipado entre el equipo
- Las herramientas más eficientes según el tipo de prototipo (digital, físico, servicio)
- Qué nivel de fidelidad es suficiente para el test
- Cómo preparar el script del test del día siguiente
- Entregable del día: prototipo testeable y script de entrevista

**DÍA 5: TESTAR Y DECIDIR**
Actividades concretas para este día:
- Cómo reclutar cinco usuarios en poco tiempo
- La estructura de la sesión de test: qué decir, qué observar
- Cómo documentar los hallazgos en tiempo real
- El proceso de síntesis al final del día
- Entregable del día: decisión informada y próximos pasos

**DESPUÉS DEL SPRINT**
- Cómo presentar los resultados al liderazgo
- Qué hacer si la hipótesis se validó
- Qué hacer si la hipótesis se refutó
- Cómo proteger el roadmap mientras se avanza con la idea

Quiero un plan que pueda ejecutar la semana que viene. Sé específico con los tiempos, las actividades y los materiales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificar y ejecutar un design sprint para validar ideas estratégicas de producto.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Crear entornos de seguridad psicológica para la innovación',
                'description'      => 'Cómo crear el entorno donde la gente propone ideas sin miedo al ridículo o al rechazo.',
                'prompt_content'   => <<<'PROMPT'
Eres una consultora de cultura organizacional y liderazgo con especialización en seguridad psicológica, el concepto que Amy Edmondson de Harvard identificó como el predictor más sólido del rendimiento de los equipos. Tu trabajo es ayudar a líderes y equipos de RRHH a crear entornos donde la gente se atreve a proponer, experimentar y fallar de forma productiva.

Necesito ayuda para fomentar la innovación en mi equipo o en mi organización. Dame el contexto:

**Mi rol:** [HRBP, People Partner, Director de RRHH, manager de equipo, etc.]
**El equipo o la organización:** [tamaño, sector, cultura actual, historia reciente]
**Los síntomas que observo:** [qué pasa que me indica que la gente no propone ideas, no habla en reuniones, no experimenta]
**El contexto de los últimos meses:** [cambios organizativos, despidos, resultados, incidentes que hayan podido afectar]
**Lo que ya hemos intentado:** [iniciativas previas, talleres, programas, sus resultados]
**Los líderes involucrados:** [su estilo, su disposición al cambio, sus miedos]

Con este contexto, ayúdame a construir un plan de intervención:

**1. Diagnóstico de la seguridad psicológica actual**
Diseña una forma de medir el nivel actual de seguridad psicológica en el equipo:
- Las preguntas de la escala de Edmondson adaptadas al contexto
- Señales conductuales que observar en reuniones y conversaciones
- Las conversaciones 1:1 que más revelan el estado real

**2. Las palancas que más impacto tienen**
Explica los comportamientos concretos de liderazgo que más aumentan la seguridad psicológica:
- Cómo los líderes modelan la vulnerabilidad sin perder autoridad
- Cómo se reacciona al error y por qué eso lo cambia todo
- Qué pasa en la primera reunión después de un fracaso

**3. El diseño de rituales de innovación**
Propón rituales concretos que la organización pueda adoptar:
- Cómo estructurar una sesión de ideas donde todo el mundo habla
- El formato de retrospectiva que convierte el error en aprendizaje
- Los espacios físicos o digitales que invitan a experimentar
- Las métricas que celebran el intento, no solo el resultado

**4. La formación de los managers**
Los managers intermedios son el cuello de botella más frecuente. Diseña:
- El taller de un día para managers sobre seguridad psicológica
- Las tres conductas que deben cambiar primero
- Cómo hacer que el manager vea su papel como habilitador, no como filtro

**5. Las políticas de RRHH que habilitan o matan la innovación**
Revisa las políticas típicas y di cuáles necesito cambiar:
- Gestión del error y las sanciones
- Evaluación del desempeño y cómo incluir la contribución a la innovación
- Procesos de ideas y sugerencias: por qué la mayoría no funciona y cómo arreglarlos

**6. El plan de los primeros 90 días**
Dame un plan concreto para los primeros tres meses con hitos medibles:
- Mes 1: diagnóstico y primeras señales de cambio
- Mes 2: intervenciones estructurales
- Mes 3: evaluación y ajuste

**7. Cómo saber si está funcionando**
Define las métricas cualitativas y cuantitativas que me indicarán que la cultura está cambiando. No solo encuestas: comportamientos observables.

Quiero un plan accionable, no un modelo teórico. La gente real en organizaciones reales tiene miedo real: ayúdame a cambiarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar intervenciones para crear seguridad psicológica e innovación en equipos.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Corporate venture capital: invertir en startups desde dentro',
                'description'      => 'Cómo las grandes empresas invierten en startups para acceder a innovación: estructura, tesis y gestión del portfolio.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en corporate venture capital (CVC) con experiencia tanto en el lado corporativo como en el ecosistema de startups. Conoces las estructuras de los principales CVCs del mundo, sus tesis de inversión y los errores más comunes que cometen las grandes empresas cuando intentan invertir como si fueran VCs sin serlo.

Necesito entender y/o diseñar un programa de CVC. Aquí está mi contexto:

**La empresa:** [sector, tamaño, madurez, posición competitiva]
**El objetivo estratégico:** [acceso a tecnología, exploración de nuevos mercados, retorno financiero, adquisición de talento]
**El mandato de innovación:** [qué quiere el CEO o el board conseguir con este programa]
**Los recursos disponibles:** [tamaño del fondo, equipo dedicado, horizonte de inversión]
**Las capacidades internas:** [qué puede ofrecer la empresa a las startups además del dinero]
**Las restricciones:** [procesos de aprobación, conflictos con el negocio principal, cultura corporativa]

Con este contexto, ayúdame a estructurar el programa:

**1. La decisión estratégica previa**
Antes de hablar de estructuras, ayúdame a clarificar si el CVC es la herramienta correcta para mis objetivos. Compara con alternativas: aceleradora corporativa, innovation labs, alianzas estratégicas, M&A directo. ¿Cuándo tiene sentido el CVC y cuándo no?

**2. La tesis de inversión**
Diseña la tesis de inversión del fondo:
- Los sectores y tecnologías donde vamos a invertir y por qué
- El estadio de las startups que buscamos (pre-seed, seed, Series A, etc.)
- El tamaño de ticket y la participación que queremos tomar
- Las sinergias estratégicas que buscamos con cada inversión
- Lo que no vamos a invertir y por qué

**3. La estructura del fondo y la gobernanza**
Explica las principales estructuras posibles:
- Fondo propio vs. LP en fondos de terceros vs. modelo híbrido
- Cómo se toman las decisiones de inversión (comité, mandate, velocidad)
- La relación entre el equipo de CVC y el negocio principal
- Cómo se evita que el negocio principal vea a las startups como amenazas

**4. El proceso de dealflow y due diligence**
Define el proceso desde que llega una startup hasta que se invierte:
- Cómo generamos dealflow de calidad (eventos, red, aceleradoras, VCs)
- Los criterios de filtro en cada etapa del proceso
- La due diligence estratégica vs. financiera: qué pesa más en CVC
- Los tiempos razonables y cómo no morir de lentitud corporativa

**5. La propuesta de valor para las startups**
Muchas startups rechazan dinero de CVC porque temen perder independencia o velocidad. Diseña la propuesta de valor que haría atractivo tu CVC:
- Qué acceso, recursos o mercado ofreces que un VC no puede dar
- Cómo estructuras los derechos para no asustar a las startups
- Cómo construyes una reputación de buen inversor corporativo

**6. La gestión del portfolio**
Una vez invertido, ¿cómo gestionamos la relación?
- Los KPIs de seguimiento: financieros vs. estratégicos
- Cómo facilitar las sinergias sin capturar la startup
- El proceso de decisión de seguir invirtiendo (follow-on) o no
- Cómo gestionar la salida: IPO, M&A, o desinversión

**7. Las métricas del éxito del programa**
Define cómo medirías el éxito a dos, cuatro y ocho años. Incluye métricas financieras y métricas de impacto estratégico.

Quiero un marco de trabajo práctico que pueda presentar al board y que resista las preguntas difíciles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y gestionar un programa de corporate venture capital.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad industrial: proteger la innovación con patentes',
                'description'      => 'Patentes, modelos de utilidad y diseños industriales: cuándo proteger, cuánto cuesta y cómo defender la innovación.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en propiedad industrial con experiencia asesorando tanto a startups como a grandes empresas en la protección de su innovación técnica. Conoces el sistema de patentes europeo e internacional, los costes reales del proceso y los errores que cometen las empresas cuando no protegen a tiempo o protegen mal.

Necesito entender cómo proteger una innovación técnica y tomar las decisiones correctas. Dame el contexto:

**La innovación que quiero proteger:** [describe qué es: proceso, producto, software, diseño, método]
**El sector:** [tecnología, farmacéutico, industrial, alimentación, etc.]
**El mercado objetivo:** [España, Europa, EE.UU., global]
**El estado de la innovación:** [idea, prototipo, producto en desarrollo, ya en mercado]
**Los competidores:** [quiénes son, qué han patentado, cuál es su agresividad en IP]
**Los recursos disponibles:** [presupuesto aproximado para IP, equipo legal interno si hay]

Con este contexto, guíame por el proceso:

**1. Qué tipo de protección necesito**
Explica las diferencias entre las opciones disponibles y cuándo usar cada una:
- Patente de invención: requisitos, duración, coste
- Modelo de utilidad: cuándo es mejor que la patente, sus ventajas en velocidad y coste
- Diseño industrial: qué protege y qué no
- Secreto industrial: cuándo es preferible no patentar y por qué
- Copyright aplicado a software: qué cubre y qué no cubre

**2. El análisis de novedad y actividad inventiva**
Antes de invertir en una solicitud, necesito saber si mi innovación es patentable:
- Cómo hacer una búsqueda de estado de la técnica básica
- Las bases de datos de patentes que debo consultar (Espacenet, Google Patents, etc.)
- Qué significa que algo sea "nuevo" y "no obvio" en sentido legal
- Las trampas que invalidan una patente sin saberlo (divulgación previa, uso comercial)

**3. La estrategia de patentes**
Una patente sola no protege: necesitas una estrategia:
- Cómo construir una cartera de patentes que realmente proteja
- La diferencia entre patentar el núcleo de la innovación y patentar alrededor
- Cuándo patentar primero en España, cuándo ir directo a Europa o PCT
- Cómo priorizar qué proteger cuando el presupuesto es limitado

**4. El proceso y los costes reales**
Desmonta las expectativas irreales sobre el tiempo y el coste:
- El calendario realista desde la solicitud hasta la concesión
- Los costes desglosados: tasas oficiales, honorarios de agente, mantenimiento
- La solicitud de prioridad y la ventana de doce meses
- Los errores más caros en el proceso y cómo evitarlos

**5. La defensa de la patente una vez concedida**
Una patente solo vale si puedes defenderla:
- Cómo detectar infracciones de la competencia
- El proceso de reclamación: carta de cease and desist, negociación, litigio
- Los costes reales de un litigio de patentes y cuándo merece la pena
- Cómo licenciar la patente como fuente de ingresos

**6. Lo que no te dicen sobre las patentes**
Los cinco mitos más comunes sobre la protección de la innovación y la realidad detrás de cada uno. Incluye cuándo patentar es un error y cuándo el secreto industrial protege mejor.

**7. El plan de acción para mi caso**
Con el contexto que te he dado, dame un plan de acción concreto: qué hacer esta semana, qué decisiones tomar este mes, qué presupuestar este año.

Quiero asesoramiento práctico, no un curso de propiedad industrial. Ayúdame a tomar decisiones concretas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar una estrategia de patentes y propiedad industrial para proteger la innovación.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Innovación en la experiencia del cliente desde CS',
                'description'      => 'Cómo el equipo de CS puede proponer y prototipar mejoras en la experiencia que el equipo de producto no ve desde dentro.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de Customer Success con experiencia en convertir el conocimiento del cliente que tiene el equipo de CS en mejoras reales del producto y la experiencia. Sabes que los CSMs tienen el mejor conocimiento de los problemas reales del cliente, y también sabes que ese conocimiento se pierde en la mayoría de las organizaciones porque no hay un proceso para canalizarlo.

Quiero convertir las conversaciones de CS en innovación real. Dame el contexto:

**Mi rol en CS:** [CSM, CS Lead, Director de CS, etc.]
**El producto o servicio:** [qué vendemos, a quién, en qué etapa está el producto]
**Los problemas que escucho constantemente:** [qué quejas, fricciones o peticiones se repiten en las conversaciones con clientes]
**La relación con producto:** [¿hay un proceso para enviar feedback? ¿funciona? ¿nos escuchan?]
**Los recursos de mi equipo:** [cuántas personas, qué capacidad tenemos más allá de la operación diaria]
**Lo que ya hemos intentado:** [cómo hemos intentado hacer llegar el conocimiento a producto y qué ha pasado]

Con este contexto, ayúdame a construir un sistema de innovación desde CS:

**1. El repositorio de voz del cliente**
Diseña el sistema para capturar y organizar el conocimiento que tiene el equipo de CS:
- Cómo estructurar las notas de llamadas para extraer insights accionables
- La taxonomía de feedback: bugs, mejoras, nuevas funcionalidades, problemas de UX
- Las herramientas más eficientes para centralizar y hacer searchable el conocimiento
- Cómo conseguir que el equipo de CS adopte el hábito de documentar sin que se sienta como burocracia

**2. El proceso de síntesis y priorización**
El volumen de feedback es enorme: ayúdame a convertirlo en insights priorizados:
- Cómo agrupar feedback disperso en patrones significativos
- El formato de insight que hace que producto lo tome en serio
- Cómo cuantificar el impacto de cada problema en churn, NPS y expansión
- La cadencia de presentación a producto que funciona

**3. Los quick wins que CS puede hacer sin producto**
Muchos problemas de experiencia se pueden resolver sin tocar el producto:
- Documentación, tutoriales y recursos de self-service
- Automatizaciones en el onboarding y en momentos críticos del journey
- Mejoras en los procesos de CS que reducen la fricción percibida
- Cómo medir el impacto de estos cambios

**4. La propuesta de innovación al equipo de producto**
Cuando el problema requiere cambio de producto, necesito hacer una propuesta que compita con prioridades del roadmap:
- El formato de propuesta que convence a un PM: problema, evidencia, impacto, propuesta
- Cómo cuantificar el impacto en retención, expansión y NPS
- Cómo presentar la voz del cliente de forma que sea irrebatible
- Los aliados en producto que necesito cultivar

**5. El prototipo de CS**
Para problemas donde tengo hipótesis sobre la solución, puedo prototipar antes de pedir recursos a producto:
- Cómo diseñar un test rápido con un grupo de clientes
- Las herramientas no-code que me permiten simular una solución
- Cómo documentar los resultados para que producto los tome como input

**6. El modelo de CS como laboratorio de innovación**
Define cómo posicionar el equipo de CS como fuente de ventaja competitiva para el producto:
- El pitch interno para conseguir tiempo y recursos para innovar
- Las métricas que demuestran el valor de esta función
- Cómo construir la relación con producto para que sea una colaboración, no un conflicto

**7. El plan para los próximos 60 días**
Dame un plan concreto y ejecutable con lo que puedo empezar esta semana, sin pedir permiso a nadie.

Quiero pasar de apagar fuegos a construir algo mejor. Ayúdame a hacerlo con los recursos que tengo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Convertir el conocimiento del equipo de CS en mejoras reales del producto y la experiencia.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Creatividad como ventaja competitiva del freelance',
                'description'      => 'Cómo el freelance que resuelve problemas de forma creativa cobra más y tiene más trabajo que el que ejecuta lo que le piden.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor especializado en posicionamiento y desarrollo de negocio para freelancers y profesionales independientes. Tu especialidad es ayudar a freelancers a salir de la guerra de precios y construir una propuesta de valor basada en la resolución creativa de problemas, no en la ejecución técnica.

Quiero posicionar mi creatividad como mi principal ventaja competitiva. Dame el contexto:

**Mi especialidad actual:** [qué hago: diseño, desarrollo, marketing, consultoría, redacción, etc.]
**Los clientes que tengo ahora:** [sector, tamaño, perfil del decisor que me contrata]
**Cómo me venden ahora:** [qué dicen de mí los que me recomiendan]
**Lo que cobro y lo que quisiera cobrar:** [rango actual y objetivo]
**Lo que diferencia mi trabajo del de otros:** [qué haces diferente, aunque no sepas articularlo]
**El mayor problema que he resuelto de forma creativa:** [un caso real si puedes]

Con este contexto, ayúdame a construir tu ventaja competitiva basada en la creatividad:

**1. La diferencia entre ejecutar y resolver**
Explica la diferencia fundamental entre el freelance que hace lo que le piden y el que resuelve el problema real. Dame ejemplos concretos de mi especialidad donde la diferencia se hace evidente y se traduce en más valor (y más tarifa).

**2. Mi propuesta de valor creativa**
Ayúdame a articular mi propuesta de valor de forma que no suene a un perfil de LinkedIn genérico. La propuesta tiene que responder a: qué problema resuelvo, para quién, de una forma que nadie más puede o quiere hacerlo.
- El ejercicio para encontrar mi ángulo creativo único
- Cómo convertir un proyecto pasado en prueba de esa propuesta
- Las palabras que mis clientes usan para describirme vs. las que debería usar yo

**3. El proceso de trabajo que demuestra la creatividad**
La creatividad no es inspiración: es un proceso. Diseña el proceso de trabajo que diferencia a un freelance creativo:
- Cómo empiezo un proyecto: la fase de diagnosis antes de la ejecución
- Las preguntas que hago y que ningún otro freelance hace
- Cómo presento las opciones: no una propuesta, sino varias hipótesis
- Cómo involucro al cliente en el proceso sin perder el control del trabajo

**4. El portfolio que vende creatividad**
Un portfolio de imágenes o links no vende creatividad: vende ejecución. Diseña el portfolio que muestra cómo pienso:
- El formato de caso de estudio que muestra el problema, el proceso y el impacto
- Los tres casos que debo documentar primero y cómo estructurarlos
- Cómo mostrar las decisiones que tomé y por qué, no solo el resultado final

**5. El pricing que refleja valor creativo**
Explica cómo estructura el pricing un freelance que cobra por el valor que genera, no por las horas que trabaja:
- El salto de cobrar por hora a cobrar por proyecto o por resultado
- Cómo anclar el precio al valor para el cliente, no al coste para mí
- Cómo presentar el precio sin disculpas y manejar la objeción de precio

**6. Los clientes que pagan por creatividad y cómo encontrarlos**
No todos los clientes valoran la creatividad: algunos solo quieren el precio más bajo. Ayúdame a encontrar y atraer a los que pagan por resolver problemas:
- El perfil del cliente que valora la creatividad
- Los canales donde esos clientes buscan freelancers como yo
- El mensaje que me hace visible para ellos

**7. El plan para subir la tarifa en los próximos seis meses**
Dame un plan concreto con pasos semanales para reposicionar mi trabajo y subir la tarifa sin perder todos los clientes actuales.

Quiero dejar de competir por precio y empezar a competir por valor. Ayúdame a hacer el cambio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Posicionar la creatividad como ventaja competitiva para subir tarifas y atraer mejores clientes.',
                'vote_score'       => 42,
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
