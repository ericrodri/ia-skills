<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills258Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Cómo ascender en marketing más rápido: visibilidad, impacto y movimiento',
                'description'       => 'Acelera tu carrera en marketing con la estrategia de visibilidad interna, los proyectos que construyen reputación y los movimientos laterales y verticales que llevan al siguiente nivel.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un mentor de carrera especializado en profesionales de marketing con experiencia ayudando a marketers de todos los niveles a acelerar su progresión desde ejecutivo hasta director y CMO. Quiero acelerar mi carrera en marketing de manera inteligente y estratégica, no solo trabajando más duro sino tomando las decisiones y construyendo las relaciones que realmente importan para ascender. Ayúdame a diseñar mi plan de carrera acelerada.

**Preguntas iniciales:**
1. ¿Cuál es tu nivel actual (júnior, mid, senior, manager) y cuál es el siguiente paso al que quieres llegar?
2. ¿En qué te especializas (performance, contenido, brand, growth, producto) y qué tan diversificado es tu perfil?
3. ¿En qué tipo de empresa trabajas (startup, scale-up, corporación, agencia) y cuánto tiempo llevas allí?
4. ¿Cuál es el mayor obstáculo percibido para ascender: falta de visibilidad, de habilidades, de sponsor interno o de la oportunidad correcta?

**EL MAPA DE LA CARRERA ACELERADA EN MARKETING:**

LO QUE REALMENTE DISTINGUE AL MARKETER QUE SUBE DEL QUE SE ESTANCA
La carrera en marketing no avanza por antigüedad ni por hacer bien el trabajo que te asignaron. Avanza por tres elementos: el impacto medible que demuestras en los resultados del negocio (no en las métricas de vanidad), la visibilidad estratégica con las personas que toman las decisiones de promoción y contratación y la percepción de que estás listo para el siguiente nivel antes de que te lo den. Ayúdame a evaluar mi posición actual en cada uno de estos tres elementos y a identificar dónde tengo el mayor gap.

EL MARKETING DE TU PROPIA CARRERA
Los mejores marketers son paradójicamente los peores vendedores de sí mismos. Saben vender productos y marcas pero no se aplican las mismas técnicas a su propia carrera. Tu carrera necesita una estrategia de posicionamiento, un canal de distribución (dónde eres visible) y un mensaje claro (por qué eres la persona correcta para el siguiente nivel). Ayúdame a construir la estrategia de personal branding interno y externo que acelera mi progresión.

**CONSTRUIR VISIBILIDAD INTERNA:**

LOS PROYECTOS QUE CONSTRUYEN REPUTACIÓN
No todos los proyectos tienen el mismo impacto en tu carrera. Los proyectos que construyen reputación tienen estas características: son visibles para el liderazgo senior, producen resultados medibles que puedes atribuirte claramente, te ponen en contacto con las personas más influyentes de la organización y te dan la oportunidad de demostrar habilidades del nivel superior al que ocupas actualmente. Ayúdame a identificar los proyectos de mayor impacto en mi organización actual y a posicionarme para conseguirlos.

LA RELACIÓN CON EL SPONSOR INTERNO
La diferencia entre el marketer que asciende rápido y el que se estanca a menudo es la existencia de un sponsor interno: alguien con influencia y poder en la organización que cree en ti, que habla de ti en las conversaciones donde no estás y que te da acceso a oportunidades que de otra manera no llegarían. Un sponsor no es lo mismo que un mentor: el mentor te da consejos, el sponsor actúa en tu nombre. Ayúdame a identificar a los candidatos a sponsor en mi organización y a construir esas relaciones de manera genuina y estratégica.

COMUNICAR EL IMPACTO DE TU TRABAJO
Hacer buen trabajo no es suficiente si las personas correctas no lo saben. El marketer que asciende rápido sabe comunicar su impacto de manera efectiva: en las reuniones con el liderazgo, en los updates del equipo, en las conversaciones informales y en los documentos de revisión de desempeño. Ayúdame a desarrollar el hábito de comunicar el impacto de mi trabajo en términos que el liderazgo entiende y valora (ingresos, leads, eficiencia, alcance) en lugar de en términos de actividad (contenidos publicados, campañas lanzadas).

**CONSTRUIR VISIBILIDAD EXTERNA:**

LA ESTRATEGIA DE PRESENCIA PÚBLICA DEL MARKETER
El marketer que construye visibilidad externa (LinkedIn, conferencias, publicaciones del sector) acelera su carrera de dos maneras: se hace más atractivo para las oportunidades externas (lo que también aumenta su valor interno) y desarrolla una red que le da acceso a oportunidades e información que los que no tienen presencia pública no tienen. Ayúdame a diseñar mi estrategia de visibilidad externa adaptada a mi nivel actual y al tiempo que tengo disponible para construirla.

**MOVIMIENTOS ESTRATÉGICOS DE CARRERA:**

CUÁNDO MOVERSE LATERALMENTE Y CUÁNDO ESPERAR
A veces el movimiento más rápido hacia arriba es lateral: cambiar de una especialidad a otra, cambiar de empresa o cambiar de sector. Los movimientos laterales bien elegidos añaden profundidad al perfil, abren nuevas redes y posicionan al marketer para saltos verticales que no eran posibles desde su posición anterior. Ayúdame a evaluar si en mi situación actual un movimiento lateral aceleraría mi carrera y, si es así, cuál sería el movimiento correcto.

NEGOCIAR LA PROMOCIÓN
Cuando llega el momento de la conversación de promoción, la preparación es clave. Ayúdame a prepararme para esa conversación: cómo documentar el caso para la promoción (el impacto medible, la responsabilidad ya asumida, la evidencia de operar al nivel superior), cómo anticipar las objeciones y cómo negociar no solo el título sino el paquete completo (responsabilidades, equipo, presupuesto, compensación).

Dame el plan de carrera acelerada en marketing personalizado a mi situación actual que me permita llegar al siguiente nivel en el menor tiempo posible con las decisiones y movimientos correctos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Plan de carrera acelerada en marketing con estrategia de visibilidad, proyectos de impacto y movimientos estratégicos',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Engineering career acceleration: cómo pasar de mid a senior en 18 meses',
                'description'       => 'Diseña el plan de carrera acelerada del engineer que quiere pasar al nivel senior con las habilidades técnicas, los proyectos, las relaciones y los hábitos que hacen ese salto posible.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un engineering manager y mentor de carrera con experiencia ayudando a ingenieros de software a acelerar su progresión desde mid-level hasta senior engineer y más allá en empresas de tecnología. Quiero diseñar el plan de carrera que me permita alcanzar el nivel senior en los próximos 12 a 18 meses y necesito entender no solo qué habilidades técnicas desarrollar, sino también cómo operar de manera diferente, qué proyectos elegir y qué relaciones construir para hacer ese salto posible.

**Preguntas iniciales:**
1. ¿Cuál es tu nivel actual (júnior, mid) y cuánto tiempo llevas en ese nivel y en la empresa?
2. ¿Cuál es tu stack tecnológico principal y cuál es tu área de mayor fortaleza técnica actualmente?
3. ¿Qué feedback has recibido sobre qué necesitas mejorar para ascender al nivel senior?
4. ¿Hay un leveling framework o rubric definido en tu empresa que describa qué se espera de un senior engineer?

**LA DIFERENCIA REAL ENTRE MID Y SENIOR:**

MÁS ALLÁ DE LAS HABILIDADES TÉCNICAS
El salto de mid a senior no es principalmente un salto técnico; es un salto en el scope de impacto y en la manera de operar. El engineer mid-level resuelve bien los problemas que le asignan. El senior engineer identifica los problemas que hay que resolver, diseña las soluciones con mayor alcance, anticipa los problemas antes de que ocurran y eleva el nivel de las personas que le rodean. Esta diferencia en el modo de operar es lo que más valoran los engineering managers a la hora de evaluar si alguien está listo para el senior level. Ayúdame a hacer un diagnóstico honesto de en qué puntos opero ya como senior y en cuáles todavía como mid.

LO QUE LOS ENGINEERING MANAGERS BUSCAN EN UN SENIOR
Los criterios más comunes para el nivel senior son: la capacidad de tomar ownership de un proyecto complejo de principio a fin (incluyendo la definición del problema, el diseño de la solución y la entrega), la capacidad de tomar decisiones técnicas con trade-offs claros y de comunicarlas al equipo, la capacidad de elevar el nivel del equipo a través del mentoring y el code review y la capacidad de operar con autonomía sin necesidad de supervisión frecuente. Ayúdame a entender qué peso tiene cada uno de estos criterios en mi empresa específica y cómo me evalúan actualmente en cada uno.

**EL PLAN DE DESARROLLO TÉCNICO:**

PROFUNDIDAD VERSUS AMPLITUD
El senior engineer tiene típicamente una profundidad clara en un área técnica (el go-to person del equipo para una tecnología o tipo de problema) combinada con suficiente amplitud para entender el sistema completo y colaborar efectivamente con las partes del stack que no son su especialidad. Ayúdame a definir la combinación correcta de profundidad y amplitud para mi contexto: dónde debo ir más profundo en los próximos meses y qué áreas debo conocer bien aunque no sea un experto.

PROYECTOS STRETCH QUE ACELERAN EL DESARROLLO
Los proyectos que más aceleran el desarrollo técnico son los que están al borde de tu capacidad actual: suficientemente difíciles como para que aprendas, pero no tan imposibles como para que fracases. Ayúdame a identificar los proyectos stretch disponibles en mi contexto actual y a posicionarme para conseguirlos. Los mejores proyectos stretch para el nivel mid que quiere llegar a senior suelen involucrar: liderar técnicamente un módulo o servicio, diseñar la arquitectura de una feature nueva, mejorar el rendimiento o la fiabilidad de un sistema existente o liderar la adopción de una nueva tecnología o práctica.

**OPERAR COMO SENIOR ANTES DE SERLO:**

EL PRINCIPIO DEL NIVEL SUPERIOR
La manera más rápida de conseguir la promoción es operar al nivel superior antes de que te la den. Esto significa: tomar la iniciativa en identificar problemas y proponer soluciones en lugar de esperar a que te asignen el trabajo, hacer preguntas de arquitectura y diseño en los PRs en lugar de solo comentar la implementación, ofrecer mentoring a los júniores del equipo aunque no sea tu responsabilidad formal y participar activamente en las decisiones técnicas del equipo con puntos de vista propios y bien argumentados. Ayúdame a identificar las tres o cuatro acciones concretas que puedo empezar a hacer esta semana para operar más como senior.

VISIBILIDAD DENTRO DEL EQUIPO Y LA ORGANIZACIÓN
El trabajo técnico excelente que nadie ve no construye una carrera. El senior engineer de alto rendimiento sabe comunicar el impacto de su trabajo al equipo y al manager: en los stand-ups, en los design documents, en los postmortems y en las conversaciones de carrera con el manager. Ayúdame a desarrollar el hábito de comunicar el impacto de mi trabajo técnico en términos que mi manager y los stakeholders entiendan.

**LA RELACIÓN CON EL MANAGER:**

LA CONVERSACIÓN DE CARRERA CON EL MANAGER
La relación con el engineering manager es el factor más determinante de la velocidad de la progresión. El engineer que tiene conversaciones claras y frecuentes sobre su carrera con el manager acelera su progresión de manera significativa. Ayúdame a preparar la conversación de carrera con mi manager: cómo expresar claramente mi objetivo de llegar al senior level, cómo pedir feedback específico sobre los gaps que necesito cerrar y cómo acordar un plan concreto con hitos medibles.

Dame el plan de 18 meses para llegar al nivel senior con los objetivos de desarrollo técnico, los proyectos que quiero conseguir, los hábitos de operación que quiero cambiar y los hitos que me indicarán que estoy en el camino correcto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Plan de carrera acelerada de mid a senior engineer con habilidades técnicas, proyectos y manera de operar',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseñador que avanza: el portafolio, la visibilidad y las conversaciones correctas',
                'description'       => 'Acelera tu carrera como diseñador con el portafolio que abre puertas, la presencia que construye reputación y las conversaciones que consiguen las oportunidades que quieres.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un design leader y mentor de carrera con experiencia ayudando a diseñadores de todos los niveles a acelerar su progresión y a conseguir los roles y proyectos que quieren. Quiero acelerar mi carrera como diseñador de manera estratégica y necesito un plan que cubra las tres palancas que más importan: el portafolio que demuestra mi nivel, la visibilidad que genera oportunidades y las conversaciones que consiguen lo que quiero.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad de diseño (UX, UI, branding, motion, product design) y tu nivel actual?
2. ¿Cuál es el siguiente rol o tipo de empresa al que quieres llegar?
3. ¿Cuál es el mayor obstáculo que percibes para avanzar: el portafolio, las conexiones, las habilidades o la falta de oportunidades en el entorno actual?
4. ¿Tienes un portafolio online activo y, si es así, cuándo fue la última vez que lo actualizaste?

**EL PORTAFOLIO QUE ABRE PUERTAS:**

LO QUE BUSCA UN HIRING MANAGER EN EL PORTAFOLIO DE UN DISEÑADOR
Los hiring managers y design leaders que revisan portafolios no evalúan solo la estética del trabajo; evalúan tres cosas principalmente: si el diseñador entiende el problema que está resolviendo (no solo la solución), si puede articular su proceso de toma de decisiones de diseño (por qué eligió ese camino y no otro) y si el trabajo tiene un impacto medible en los usuarios o en el negocio. Un portafolio de tres proyectos bien documentados supera a uno de diez proyectos superficialmente presentados. Ayúdame a seleccionar y estructurar los proyectos de mi portafolio con estos criterios.

LA ESTRUCTURA DEL CASE STUDY EFECTIVO
El case study es el formato que mejor comunica el valor de un diseñador. Un case study efectivo tiene: el contexto del proyecto (empresa, producto, momento en el ciclo), el problema que se estaba resolviendo (con evidencia: research, datos, feedback de usuarios), el proceso de diseño (las iteraciones, las decisiones y los trade-offs), la solución final (con las decisiones de diseño explicadas) y el impacto (métricas antes y después, feedback cualitativo). Ayúdame a construir el case study de mi proyecto más fuerte siguiendo esta estructura.

PRESENTAR TRABAJO CONFIDENCIAL
Muchos diseñadores no pueden mostrar su mejor trabajo por acuerdos de confidencialidad con empleadores anteriores. Ayúdame a navegar este problema: cómo mostrar el proceso de diseño sin revelar información confidencial, cómo usar versiones anonimizadas o redactadas del trabajo y cómo presentar proyectos personales o de práctica que demuestren las mismas habilidades.

**CONSTRUIR VISIBILIDAD QUE GENERA OPORTUNIDADES:**

LA PRESENCIA EN DRIBBBLE, BEHANCE Y LINKEDIN
La visibilidad del diseñador se construye de manera diferente según el tipo de trabajo que hace y el tipo de oportunidades que busca. Dribbble y Behance son potentes para los diseñadores visuales y de UI; LinkedIn es esencial para los diseñadores de producto y UX que buscan roles en empresas de tecnología. Ayúdame a diseñar mi estrategia de presencia online según mi especialidad y mis objetivos de carrera: qué plataformas priorizar, con qué frecuencia publicar y qué tipo de contenido genera más engagement con las personas que toman decisiones de contratación en mi categoría.

COMPARTIR EL PROCESO CREATIVO COMO ESTRATEGIA DE VISIBILIDAD
Uno de los tipos de contenido más efectivos para el diseñador que construye reputación es compartir el proceso de trabajo: los bocetos, las iteraciones, los momentos de decisión, los experimentos que no funcionaron. Este tipo de contenido humaniza el proceso creativo y demuestra la profundidad del pensamiento de diseño de manera que el trabajo final no puede hacer. Ayúdame a desarrollar el hábito de documentar y compartir mi proceso creativo de manera que construya mi reputación como diseñador que piensa profundamente, no solo que ejecuta bien.

**LAS CONVERSACIONES QUE CONSIGUEN LAS OPORTUNIDADES:**

NETWORKING SIN QUE PAREZCA NETWORKING
El networking efectivo para el diseñador no consiste en ir a eventos y entregar tarjetas de visita; consiste en construir relaciones genuinas con personas que comparten tus intereses de diseño. Las comunidades de diseño online (Design Systems Community, Figma Community, grupos de UX en LinkedIn y Slack) son los mejores lugares para empezar: participar en las discusiones, compartir recursos y dar feedback al trabajo de otros construye relaciones reales con diseñadores y design leaders que pueden convertirse en las conexiones que abren las puertas que quieres abrir. Ayúdame a identificar las comunidades más relevantes para mi especialidad y a diseñar cómo participar en ellas de manera auténtica.

LA ENTREVISTA DE DISEÑO: PRESENTAR EL PORTAFOLIO CON CONFIANZA
La presentación del portafolio en la entrevista es el momento que más determina el resultado del proceso de selección para un diseñador. Ayúdame a preparar la presentación del portafolio: cómo estructurar los 30-45 minutos típicos de una portfolio presentation, cómo narrar el case study de manera que demuestre el pensamiento estratégico además de la ejecución, cómo responder las preguntas difíciles (¿qué cambiarías?, ¿qué no funcionó?) y cómo cerrar la presentación de manera que posicione claramente por qué soy la persona correcta para el rol.

Dame el plan concreto para acelerar mi carrera como diseñador en los próximos doce meses con acciones específicas para el portafolio, la visibilidad y las conversaciones que generan oportunidades.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Plan de carrera acelerada del diseñador con portafolio, visibilidad online y conversaciones estratégicas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas como trampolín: cómo usar el comercial para llegar donde quieres',
                'description'       => 'Diseña la estrategia de carrera que usa el rol comercial como plataforma de lanzamiento hacia el puesto que realmente quieres: management, customer success, partnerships o emprendeduría.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de carrera especializado en profesionales de ventas con experiencia ayudando a comerciales a diseñar su trayectoria de carrera a largo plazo, tanto dentro de la función de ventas (hacia sales management o revenue leadership) como hacia otras funciones que las habilidades comerciales habilitan (customer success, partnerships, product, emprendeduría). Quiero diseñar la carrera que realmente quiero usando mi experiencia en ventas como la plataforma de lanzamiento que es.

**Preguntas iniciales:**
1. ¿Cuánto tiempo llevas en ventas y en qué tipo de ventas (inbound, outbound, B2B, B2C, enterprise, SMB)?
2. ¿Cuál es el destino de carrera que más te atrae (seguir en ventas hacia management, pasar a CS o partnerships, pasar a producto, emprender, o algo diferente)?
3. ¿Cuáles son las habilidades que has desarrollado en ventas que más valoras y crees que te diferencian?
4. ¿Qué te retiene actualmente en la función de ventas o qué te impide hacer el movimiento que quieres?

**LAS HABILIDADES QUE LAS VENTAS TE DAN Y QUE SON DIFÍCILES DE CONSEGUIR DE OTRA MANERA:**

EL VALOR ÚNICO DE LA EXPERIENCIA EN VENTAS
La experiencia en ventas desarrolla un conjunto de habilidades que son extremadamente valiosas en casi cualquier rol y que son difíciles de desarrollar sin la exposición directa al proceso comercial: la capacidad de entender el negocio del cliente (y por extensión cualquier stakeholder), la habilidad de influir sin autoridad, la resiliencia ante el rechazo, la capacidad de simplificar mensajes complejos para audiencias diversas y el instinto para identificar el valor en una conversación. Ayúdame a hacer el inventario completo de las habilidades que he desarrollado en ventas y a entender cómo se traducen al tipo de rol que quiero.

LA INTELIGENCIA EMOCIONAL DEL VENDEDOR
Los mejores vendedores tienen un desarrollo de inteligencia emocional (empatía, gestión del rechazo, lectura del estado emocional del interlocutor, adaptación del mensaje) que la mayoría de los profesionales de otras funciones no tienen. Esta inteligencia emocional es un activo enorme para el management, para el customer success, para las partnerships y para el emprendeduría. Ayúdame a articular cómo mi experiencia en ventas me ha desarrollado emocionalmente y cómo eso añade valor en el rol al que quiero llegar.

**RUTAS DE CARRERA DESDE LAS VENTAS:**

HACIA EL SALES MANAGEMENT
La transición de top performer individual a sales manager es una de las transiciones de carrera más difíciles porque requiere cambiar de mentalidad completamente: de obtener resultados tú mismo a obtener resultados a través de otros. Muchos top performers fracasan como managers porque intentan hacer el trabajo de los vendedores del equipo en lugar de desarrollarlos. Si el sales management es tu objetivo, ayúdame a diseñar la preparación: los proyectos de liderazgo informal que puedo tomar ahora (mentoring de nuevos, liderazgo de iniciativas del equipo), las conversaciones con mi manager sobre el desarrollo hacia el management y las habilidades de coaching que necesito desarrollar antes de dar el salto.

HACIA CUSTOMER SUCCESS
La transición de ventas a customer success es natural pero no automática. El CS Manager necesita un perfil diferente al vendedor: más orientado a la relación a largo plazo que al cierre, más cómodo con el proceso de adopción que con la persuasión inicial y con un enfoque más proactivo en la gestión del éxito del cliente que en la gestión de la pipeline. Ayúdame a entender qué de mi experiencia en ventas se traslada directamente al CS y qué necesito desarrollar específicamente para ser un CS Manager de alto rendimiento.

HACIA PARTNERSHIPS Y BUSINESS DEVELOPMENT
Business development y partnerships son roles donde la experiencia en ventas es la base perfecta. Requieren la capacidad de identificar oportunidades de valor mutuo, construir relaciones con stakeholders de empresas partner y negociar acuerdos complejos. La diferencia clave con las ventas directas es la naturaleza de la relación: más colaborativa, más a largo plazo y con una mentalidad de ganar-ganar en lugar de cerrar. Ayúdame a diseñar la transición hacia BD o partnerships si es el camino que quiero seguir.

EL EMPRENDEDURÍA DESDE LAS VENTAS
El vendedor que quiere emprender tiene una ventaja enorme: sabe cómo conseguir clientes, que es la habilidad más escasa y más valiosa para un emprendedor en los primeros estadios. El camino del vendedor hacia el emprendeduría puede tomar varias formas: el freelance que usa sus habilidades comerciales para conseguir clientes, el fundador que lidera la función de ventas desde el día uno o el comercial que identifica una oportunidad en el mercado que conoce profundamente por su trabajo con clientes. Ayúdame a explorar si el emprendeduría es un camino para mí y cómo la experiencia en ventas me posiciona para ese salto.

**EL PLAN DE TRANSICIÓN:**

CONSTRUCCIÓN DE LA NARRATIVA DE CARRERA
Para hacer cualquiera de estas transiciones de manera efectiva, necesitas una narrativa de carrera coherente que conecte tu experiencia en ventas con el rol al que quieres llegar. Esta narrativa debe responder la pregunta "¿por qué tú?" de manera que haga que tu experiencia en ventas sea un activo en lugar de una rareza para el rol objetivo. Ayúdame a construir mi narrativa de carrera para la transición que quiero hacer.

Dame el plan de carrera de los próximos dos años que use mi experiencia en ventas como trampolín hacia el rol que realmente quiero, con los pasos concretos, las habilidades a desarrollar y las conversaciones a tener.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Plan de carrera para usar la experiencia en ventas como trampolín hacia el rol o función deseada',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'PM career growth: los proyectos, los patrones y las relaciones que aceleran',
                'description'       => 'Diseña el plan de carrera del product manager que quiere crecer más rápido con los proyectos que construyen reputación, los patrones de liderazgo de producto y las relaciones que abren puertas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Product Officer y mentor de carrera con experiencia ayudando a product managers de todos los niveles a acelerar su progresión en empresas de tecnología. Quiero diseñar el plan de carrera que me permita llegar al siguiente nivel de PM más rápido con las decisiones correctas sobre proyectos, el desarrollo de los patrones de liderazgo que distinguen a los mejores PMs y las relaciones que abren las puertas al siguiente nivel. Ayúdame a construir ese plan.

**Preguntas iniciales:**
1. ¿Cuál es tu nivel actual (associate PM, PM, senior PM, principal PM, director) y cuánto tiempo llevas en ese nivel?
2. ¿En qué tipo de empresa y producto trabajas (B2B SaaS, consumer, plataforma, marketplace)?
3. ¿Cuál es el feedback que has recibido sobre los gaps que necesitas cerrar para ascender?
4. ¿Cuál es la ambición a largo plazo: CPO, fundador de producto, consultor, o algo diferente?

**LA CARRERA DEL PM: UN JUEGO DE IMPACTO Y VISIBILIDAD:**

LO QUE DISTINGUE AL PM QUE ASCIENDE RÁPIDO
Los PMs que avanzan más rápido comparten un patrón: entregan outcomes medibles (no solo features), operan a un scope superior al de su nivel (anticipan los problemas del negocio antes de que se conviertan en requisitos de producto) y construyen la confianza del liderazgo con la consistencia de sus juicios y decisiones. La visibilidad sola no es suficiente; tiene que estar respaldada por el impacto. Y el impacto sin visibilidad tampoco avanza la carrera porque las decisiones de promoción las toman personas que necesitan saber qué has conseguido. Ayúdame a evaluar mi situación actual en estas tres dimensiones.

EL ALCANCE DEL IMPACTO COMO PALANCA DE CRECIMIENTO
En la mayoría de las organizaciones de producto, el nivel de PM está directamente relacionado con el alcance del impacto: el PM júnior impacta en una feature, el PM mid en un área de producto, el senior PM en un producto completo, el principal PM en múltiples productos o en la estrategia cross-funcional y el director en la estrategia de la organización de producto. Para subir de nivel, necesitas demostrar que puedes operar al alcance del nivel superior. Ayúdame a identificar cómo puedo aumentar el alcance de mi impacto sin esperar a una promoción formal.

**LOS PROYECTOS QUE CONSTRUYEN REPUTACIÓN:**

PROYECTOS DE ALTO IMPACTO Y ALTA VISIBILIDAD
No todos los proyectos tienen el mismo impacto en la carrera. Los mejores proyectos para la carrera del PM tienen tres características: impacto directo en las métricas más importantes del negocio (revenue, retención, crecimiento de usuarios), visibilidad con el liderazgo senior y la oportunidad de demostrar habilidades del nivel superior al que ocupas. Ayúdame a identificar estos proyectos en mi organización y a diseñar la estrategia para conseguirlos.

LA DISCIPLINA DE LOS DOCUMENTOS DE PRODUCTO
Los mejores PMs dejan un rastro de pensamiento documentado que hace su calidad intelectual visible a toda la organización. Los PRDs bien escritos, los one-pagers de estrategia, los memos de análisis de oportunidad y los postmortems de lanzamiento con aprendizajes honestos construyen una reputación de rigor y profundidad que la conversación sola no puede construir. Ayúdame a desarrollar el hábito de escribir mejor y a usar los documentos de producto como herramienta de visibilidad y de construcción de credibilidad.

**LOS PATRONES DE LIDERAZGO DE PRODUCTO:**

DE EJECUTOR A ESTRATEGA
El salto más importante en la carrera del PM es el de ejecutor (que entrega bien lo que se le dice que construya) a estratega (que identifica qué construir y por qué). Este salto requiere un cambio en la manera de participar en las conversaciones: hacer las preguntas que otros no están haciendo, conectar los puntos entre los datos del mercado y la estrategia del producto y proponer direcciones en lugar de solo responder a las que otros proponen. Ayúdame a identificar los momentos concretos en mi trabajo donde puedo operar más como estratega.

STAKEHOLDER MANAGEMENT COMO HABILIDAD DE SENIOR PM
Los PMs senior y principal son notablemente mejores en el manejo de stakeholders que los PMs júnior, no porque sean más simpáticos sino porque entienden los incentivos y los objetivos de cada stakeholder y saben cómo crear las condiciones para la alineación. Ayúdame a desarrollar esta habilidad: cómo mapear a los stakeholders de mis proyectos más importantes, cómo entender qué quiere realmente cada uno más allá de lo que dice y cómo diseñar el proceso de alineación que produce el resultado que necesito.

**LAS RELACIONES QUE ABREN PUERTAS:**

LA RELACIÓN CON EL CPO O EL VP OF PRODUCT
La relación con el liderazgo de producto es la más determinante de la velocidad de la progresión del PM. El PM que tiene visibilidad directa con el CPO o VP of Product, que participa en las conversaciones estratégicas y que recibe feedback directo del liderazgo acelera su carrera de manera significativa. Ayúdame a construir esa relación de manera genuina: cómo contribuir en los foros donde el liderazgo está presente, cómo solicitar tiempo de mentor de manera que añada valor al liderazgo y no solo a mí y cómo usar las oportunidades formales (all-hands, product reviews) para mostrar el pensamiento estratégico.

LA RED EXTERNA DE PRODUCT MANAGERS
La comunidad de product management es activa y generosa con su conocimiento. Los PMs que participan en esa comunidad (Product Tank, Mind the Product, comunidades de LinkedIn y Slack de PM) construyen una red que les da acceso a perspectivas externas, a oportunidades de trabajo y a la visibilidad que complementa la visibilidad interna. Ayúdame a diseñar cómo participar en la comunidad de PM de manera que construya mi reputación y mi red sin que consuma demasiado tiempo.

Dame el plan de carrera para los próximos 18 meses que me permita llegar al siguiente nivel de PM con los proyectos correctos, los patrones de liderazgo que necesito desarrollar y las relaciones que aceleran el proceso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Plan de carrera acelerada del product manager con proyectos de alto impacto, liderazgo estratégico y relaciones clave',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Carrera en RRHH: de generalista a HRBP estratégico',
                'description'       => 'Diseña el plan de carrera que te lleva de ejecutar procesos de RRHH a ser un business partner estratégico que influye en las decisiones de negocio con el talento y la cultura como palancas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief People Officer y mentor de carrera con experiencia ayudando a profesionales de RRHH a hacer la transición desde roles operativos y generalistas hacia posiciones de HR Business Partner estratégico y liderazgo de People. Quiero diseñar el camino que me lleva de ejecutar los procesos de RRHH a ser un socio estratégico del negocio que tiene influencia real en las decisiones sobre personas, cultura y organización. Ayúdame a construir ese plan.

**Preguntas iniciales:**
1. ¿Cuál es tu rol actual en RRHH (generalista, recruiter, L&D, compensation, HR operations) y cuánto tiempo llevas en RRHH?
2. ¿Cuál es el tipo de empresa en el que trabajas y cuánto acceso tienes actualmente al liderazgo del negocio?
3. ¿Cuál es la percepción que tiene el negocio de RRHH en tu organización: soporte administrativo, control o socio estratégico?
4. ¿Qué te falta según tu evaluación para dar el salto al HRBP estratégico: conocimiento del negocio, credibilidad con los líderes, habilidades de consultoría o visibilidad?

**LA DIFERENCIA ENTRE EL HR GENERALISTA Y EL HRBP ESTRATÉGICO:**

EL GENERALISTA EJECUTA, EL HRBP INFLUYE
El HR generalista opera principalmente en el ámbito de los procesos: gestiona el ciclo de vida del empleado, asegura el cumplimiento legal, administra los beneficios, procesa las incidencias y apoya a los managers en las situaciones difíciles. El HRBP estratégico opera en el ámbito de la estrategia de negocio: entiende los objetivos del área que apoya, identifica las implicaciones de personas de esos objetivos, diseña las intervenciones de talento y cultura que los habilitan y mide su impacto en los resultados del negocio. Ayúdame a hacer el diagnóstico de dónde opero actualmente en ese espectro.

EL CONOCIMIENTO DE NEGOCIO COMO FUNDAMENTO
La mayor diferencia entre el HR generalista y el HRBP estratégico no es técnica; es el conocimiento del negocio. El HRBP que habla con el CFO de la capacidad del equipo para ejecutar la estrategia financiera o con el CTO sobre el plan de hiring para construir el equipo técnico del producto necesita entender profundamente cómo funciona ese negocio. Ayúdame a construir el plan para desarrollar el conocimiento de negocio que me falta: cómo aprendo el modelo de negocio de las áreas que apoyo, cómo desarrollo la literacidad financiera que me permite hablar el idioma del liderazgo y cómo me mantengo actualizado sobre las tendencias del sector en el que opera mi empresa.

**EL PLAN DE DESARROLLO HACIA EL HRBP ESTRATÉGICO:**

DESARROLLAR LAS HABILIDADES DE CONSULTORÍA INTERNA
El HRBP efectivo opera como un consultor interno: diagnostica los problemas de organización y personas, diseña las intervenciones, facilita los procesos de cambio y mide el impacto. Este modo de operar requiere habilidades de diagnóstico (hacer las preguntas correctas para entender el problema real), diseño de intervenciones (seleccionar las iniciativas de RRHH que mejor se ajustan a cada situación) y gestión del cambio (conseguir que las iniciativas se implementen en organizaciones que naturalmente resisten el cambio). Ayúdame a identificar las habilidades de consultoría que más necesito desarrollar y a diseñar cómo hacerlo.

CONSTRUIR CREDIBILIDAD CON EL LIDERAZGO
La credibilidad del HRBP con el liderazgo del negocio es su activo más valioso y también el más difícil de construir desde cero. Se construye con tres elementos: la demostración de que entiende el negocio tan bien como los líderes de línea, la consistencia en el cumplimiento de los compromisos y la capacidad de aportar perspectivas de personas que el negocio no tiene internamente. Ayúdame a diseñar la estrategia para construir credibilidad con el liderazgo en mi organización actual: las conversaciones que inicio, los proyectos que propongo y los resultados que comunico.

**PROYECTOS QUE ACELERAN LA TRANSICIÓN:**

Los proyectos que más aceleran la transición de generalista a HRBP estratégico son los que requieren trabajar directamente con el liderazgo del negocio en problemas de organización y talento de alto impacto: el rediseño organizacional de un área en transformación, el diseño e implementación de un proceso de succession planning, la evaluación y mejora de la experiencia del empleado con impacto en la retención o el diseño de un programa de desarrollo de liderazgo para los managers del negocio. Ayúdame a identificar las oportunidades de este tipo disponibles en mi organización y a posicionarme para liderarlas.

LA ESPECIALIZACIÓN COMO PALANCA
En algunos casos, la especialización profunda en un área de RRHH (L&D, talent acquisition, compensation, organizational effectiveness) puede ser la palanca que abre la puerta al HRBP estratégico porque te convierte en el experto al que el negocio recurre para los problemas más complejos de esa área. Ayúdame a evaluar si en mi caso la especialización o la amplitud es el camino más rápido hacia el impacto estratégico.

**LA ESTRATEGIA EXTERNA:**

Además del desarrollo interno, el HRBP estratégico construye su carrera con visibilidad externa: las certificaciones relevantes (SHRM, CIPD, certificaciones de coaching), la participación en comunidades de People professionals (Society for HR Management, HR Open Source) y el aprendizaje continuo de las tendencias de People que el negocio querrá discutir. Ayúdame a diseñar el plan de desarrollo externo que complementa el trabajo interno.

Dame el plan de carrera concreto para los próximos 24 meses que me lleve de mi rol actual al HRBP estratégico con los proyectos, las habilidades y las relaciones que hacen ese salto posible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Plan de carrera para la transición de HR generalista a HR Business Partner estratégico',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Carrera financiera acelerada: los movimientos que distinguen a los que suben',
                'description'       => 'Diseña el plan de carrera que te lleva de analista a manager y de manager a director financiero con los movimientos, las habilidades y las visibilidades que aceleran la progresión en finanzas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO y mentor de carrera con experiencia ayudando a profesionales de finanzas a diseñar y ejecutar planes de carrera acelerada desde analista financiero hasta finance manager, controller, CFO y roles ejecutivos. Quiero diseñar el plan de carrera que me permita avanzar más rápido en finanzas con los movimientos estratégicos correctos, el desarrollo de las habilidades que más se valoran al siguiente nivel y la visibilidad que genera las oportunidades que quiero.

**Preguntas iniciales:**
1. ¿Cuál es tu rol actual (analista, senior analista, manager, controller, finance director) y cuánto tiempo llevas en finanzas?
2. ¿En qué función de finanzas te especializas (FP&A, controlling, auditoría, tesorería, M&A, inversión)?
3. ¿Cuál es el siguiente rol al que quieres llegar y en qué plazo?
4. ¿Cuál es el mayor obstáculo percibido para ascender: las habilidades técnicas, la visibilidad con el liderazgo, el conocimiento del negocio o las habilidades blandas de liderazgo?

**EL MAPA DE LA CARRERA FINANCIERA:**

LO QUE DISTINGUE AL FINANCIERO QUE SUBE
Los profesionales de finanzas que ascienden más rápido comparten un patrón diferente al de quienes se estancan: no son necesariamente los mejores con los números; son los que mejor comunican el impacto de los números en el negocio. La carrera financiera acelerada requiere el dominio técnico como fundamento (sin él no hay credibilidad), pero la palanca del avance es la capacidad de conectar el análisis financiero con las decisiones de negocio de manera que el liderazgo entienda y valore. Ayúdame a evaluar mi posición actual en esta dimensión.

LA EVOLUCIÓN DEL ROL FINANCIERO A LO LARGO DE LA CARRERA
La carrera financiera evoluciona de manera predecible en términos de lo que se espera en cada nivel: el analista produce análisis precisos, el manager lidera el proceso de análisis y gestiona al equipo de analistas, el controller o finance manager es responsable de la integridad de los datos y del proceso de cierre, el finance director es un socio estratégico de las áreas de negocio y el CFO es un co-estratega del CEO. En cada nivel, las habilidades técnicas importan menos y las habilidades de liderazgo e influencia importan más. Ayúdame a entender qué se espera del nivel al que quiero llegar y cómo prepararme para operar en ese nivel antes de la promoción.

**LOS MOVIMIENTOS QUE ACELERAN LA CARRERA:**

ROTACIONES FUNCIONALES Y EXPOSICIÓN A DIFERENTES ÁREAS DE FINANZAS
Los CFOs más completos suelen haber pasado por diferentes funciones dentro de finanzas: auditoría que da rigor de proceso, FP&A que da visión estratégica, controlling que da profundidad operativa y treasury que da perspectiva de gestión de riesgos. Una rotación bien elegida al momento correcto puede añadir una dimensión completa al perfil financiero que acelera la carrera de manera significativa. Ayúdame a evaluar si una rotación funcional aceleraría mi carrera en este momento y, si es así, cuál sería la más estratégica.

EL FINANCE BUSINESS PARTNER COMO TRAMPOLÍN
El rol de Finance Business Partner, que trabaja directamente con las áreas de negocio como su socio financiero, es uno de los más transformadores para la carrera financiera porque desarrolla simultáneamente el conocimiento del negocio, las habilidades de comunicación e influencia y la credibilidad con el liderazgo no financiero. Si en tu organización existe este rol, considerarlo puede acelerar enormemente la progresión hacia los niveles más senior de finanzas. Ayúdame a evaluar si el Finance Business Partner es un movimiento estratégico para mí.

EXPOSICIÓN A PROYECTOS DE ALTO PERFIL
Los proyectos de alto perfil en finanzas (M&A, due diligence, restructuración, salida a bolsa, expansión internacional, fundraising) aceleran la carrera de manera desproporcionada porque dan exposición a situaciones de alta complejidad y alta visibilidad. Ayúdame a identificar los proyectos de este tipo que podrían surgir en mi organización en los próximos meses y a posicionarme para participar en ellos.

**DESARROLLAR LAS HABILIDADES DEL NIVEL SUPERIOR:**

DE ANALISTA A STORYTELLER FINANCIERO
La habilidad de comunicar historias con datos financieros de manera que el liderazgo entienda, se sienta informado y pueda actuar es la habilidad más diferenciadora en la carrera financiera después del nivel analista. Ayúdame a desarrollar esta habilidad: cómo estructuro el mensaje financiero para diferentes audiencias, cómo convierto una tabla de números en una narrativa de negocio y cómo me preparo para las preguntas difíciles en las presentaciones al liderazgo.

LIDERAZGO DE EQUIPOS DE FINANZAS
El paso del trabajo individual al liderazgo de equipos en finanzas es un salto que muchos financieros técnicamente fuertes no logran hacer bien. Ayúdame a prepararme para liderar un equipo de analistas: las habilidades de coaching que desarrollan a los analistas, el feedback que construye la calidad sin desmotivar y la gestión del equipo en los períodos de alta carga (cierre, presupuesto, auditoría).

Dame el plan de carrera concreto para los próximos 24 meses que me permita avanzar al siguiente nivel en finanzas con los movimientos, las habilidades y la visibilidad que hacen ese salto posible en mi contexto específico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Plan de carrera acelerada en finanzas con movimientos estratégicos, habilidades clave y visibilidad con el liderazgo',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Abogado en ascenso: cómo construir la reputación que lleva al socio',
                'description'       => 'Diseña la estrategia de carrera que construye la reputación, las relaciones y el libro de negocio que hacen posible el ascenso a socio en un despacho o al liderazgo jurídico en empresa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un socio de despacho y mentor de carrera jurídica con experiencia ayudando a abogados associates y senior associates a diseñar la carrera que les lleva a la sociedad en un despacho o a los roles de máximo liderazgo jurídico en empresa (General Counsel, Deputy GC). Quiero diseñar la estrategia de carrera que construye la reputación, el libro de negocio y las relaciones que hacen posible ese ascenso de manera más acelerada y consciente. Ayúdame a construir ese plan.

**Preguntas iniciales:**
1. ¿En qué tipo de entorno trabajas (despacho grande, mediano o boutique, departamento jurídico interno) y cuál es tu área de práctica?
2. ¿Cuántos años de experiencia llevas y cuál es tu nivel actual (associate, senior associate, of counsel, senior legal)?
3. ¿Cuál es el destino de carrera que persigues: la sociedad en el despacho, el General Counsel de una empresa o un camino diferente?
4. ¿Cuál es el mayor gap que ves en tu situación actual para llegar a ese destino?

**EL CAMINO HACIA LA SOCIEDAD: LO QUE REALMENTE IMPORTA:**

LOS TRES PILARES DE LA CARRERA HACIA EL SOCIO
En casi todos los despachos, el ascenso a socio requiere la demostración sólida de tres elementos: la excelencia técnica (la profundidad jurídica que hace que los clientes y otros socios confíen en ti para los asuntos más complejos), el libro de negocio (la capacidad de originar y mantener relaciones con clientes que generan ingresos para el despacho) y el liderazgo interno (la capacidad de gestionar equipos, mentorizar a los associates jóvenes y contribuir a la cultura y la estrategia del despacho). En cada despacho el peso relativo de estos tres pilares varía, pero ninguno puede estar completamente ausente. Ayúdame a evaluar mi posición actual en cada uno.

LA TRAMPA DE LA EXCELENCIA TÉCNICA SIN DESARROLLO DE NEGOCIO
El abogado técnicamente brillante que no desarrolla el libro de negocio tiene un techo de carrera claro: puede ser un excelente senior associate o un of counsel que hace trabajo técnico complejo para los socios, pero raramente llega a la sociedad plena. La excelencia técnica es necesaria pero no suficiente. El desarrollo del libro de negocio es la habilidad que más asusta a los abogados con perfil técnico porque requiere habilidades de relación y de venta que raramente se desarrollan en la formación jurídica. Ayúdame a superar esa barrera.

**CONSTRUIR LA REPUTACIÓN JURÍDICA:**

LA REPUTACIÓN TÉCNICA DENTRO DEL DESPACHO
La reputación técnica dentro del despacho es el fundamento de todo lo demás. Se construye siendo el abogado al que los socios quieren en sus asuntos más complicados y del que los clients solicitan por nombre. Ayúdame a diseñar la estrategia para construir esa reputación: cómo me especializo en el área de práctica donde quiero ser la referencia, cómo produzco el trabajo que hace que los socios me busquen para los asuntos más importantes y cómo gestiono mi visibilidad interna para que mi trabajo sea conocido más allá de los socios con los que trabajo directamente.

LA REPUTACIÓN EXTERNA Y EL POSICIONAMIENTO EN EL MERCADO
La reputación externa (en publicaciones especializadas, en directorios jurídicos como Legal 500 o Chambers, en asociaciones de abogados del sector) es un componente creciente del valor del abogado para el despacho porque facilita el desarrollo de negocio. Ayúdame a diseñar la estrategia de visibilidad externa adaptada a mi área de práctica y a mi nivel: los artículos que escribo, las conferencias en las que participo y los directorios a los que contribuyo.

**DESARROLLAR EL LIBRO DE NEGOCIO:**

CONSTRUIR RELACIONES CON CLIENTES ACTUALES
El libro de negocio de un associate empieza antes de tener clientes propios: se construye con las relaciones que desarrolla con los clientes de los socios con los que trabaja. Cada cliente que conoces gracias a un asunto es un contacto que puede convertirse en cliente tuyo en el futuro si mantienes la relación. Ayúdame a construir el sistema de desarrollo de relaciones con clientes actuales: cómo mantengo el contacto con los interlocutores de los clientes más allá del asunto concreto, cómo les aporto valor de manera proactiva (alertas de jurisprudencia, novedades normativas) y cómo construyo la confianza personal que es la base del libro de negocio.

EL PLAN DE DESARROLLO DE NEGOCIO
El desarrollo de negocio para el abogado requiere un plan concreto: los segmentos de mercado donde me quiero posicionar (por sector, por tipo de asunto, por tamaño de cliente), las actividades de desarrollo de relaciones que hago de manera consistente (almuerzo con clientes potenciales, participación en asociaciones empresariales del sector, presencia en eventos del sector) y las métricas que me indican que el plan está funcionando. Ayúdame a diseñar ese plan para los próximos dos años.

**EL CAMINO AL GENERAL COUNSEL:**

Si el destino es el liderazgo jurídico en empresa en lugar de la sociedad en el despacho, el plan de carrera es diferente. Ayúdame a entender cómo diseñar la carrera hacia el General Counsel: los tipos de experiencia que los Boards y CEOs buscan en el GC (negocio además de derecho, gestión de equipos, relación con el Board), los movimientos de carrera que abren esa puerta (despacho grande más empresa tecnológica o de alto crecimiento, exposición a M&A y regulación) y las relaciones que generan las oportunidades de GC que raramente se publicitan.

Dame el plan de carrera concreto para los próximos tres años que construya la reputación técnica, el libro de negocio y las relaciones que hacen posible el ascenso a socio o al liderazgo jurídico en empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Plan de carrera jurídica hacia la sociedad o el liderazgo de GC con reputación, libro de negocio y relaciones estratégicas',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Career in CS: de CSM a líder de CS, y de ahí a cualquier sitio',
                'description'       => 'Diseña el plan de carrera que te lleva de Customer Success Manager a VP of CS o te abre puertas a roles de revenue, producto, o dirección general con las habilidades y la visibilidad correctas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success y mentor de carrera con experiencia ayudando a Customer Success Managers a diseñar su trayectoria de carrera, tanto dentro de la función de CS (hacia el liderazgo de CS) como hacia otras funciones que la experiencia en CS habilita (account management, revenue leadership, producto, operaciones). Quiero diseñar la carrera que realmente quiero a partir de mi posición como CSM y necesito el plan concreto para lograrlo.

**Preguntas iniciales:**
1. ¿Cuánto tiempo llevas en CS y cuál es tu nivel actual (junior CSM, CSM, senior CSM, team lead)?
2. ¿En qué tipo de empresa (startup, scale-up, enterprise) y qué tipo de clientes gestionas (SMB, mid-market, enterprise)?
3. ¿Cuál es el destino de carrera que más te atrae: liderazgo de CS, account management y ventas, producto, operaciones o dirección general?
4. ¿Cuál es el mayor gap que percibes entre tu situación actual y el rol al que quieres llegar?

**EL VALOR ÚNICO DE LA EXPERIENCIA EN CS:**

LO QUE EL CSM APRENDE QUE POCOS APRENDEN EN OTROS ROLES
La experiencia en CS desarrolla un conjunto de habilidades y perspectivas que son extremadamente valiosas en muchos otros roles: la comprensión profunda del problema real del cliente en el contexto de su negocio, la capacidad de gestionar relaciones complejas con múltiples stakeholders en la cuenta del cliente, la habilidad de influir sin autoridad formal, la gestión de las expectativas en situaciones difíciles y la capacidad de ver el producto desde la perspectiva del usuario que paga. Estas habilidades son la base de la carrera acelerada en CS y en cualquier función a la que decidas moverte. Ayúdame a hacer el inventario de las habilidades que he desarrollado en CS y a entender cómo se traducen al rol al que quiero llegar.

LA POSICIÓN ÚNICA DEL CSM EN LA ORGANIZACIÓN
El CSM tiene acceso a información y perspectivas que pocas personas en la organización tienen: sabe exactamente qué partes del producto los clientes usan y cuáles ignoran, conoce los problemas de implementación que ralentizan la adopción, entiende los casos de uso reales que el producto está resolviendo versus los que estaba diseñado para resolver y tiene datos sobre la competencia que los clientes mencionan en las conversaciones. Esta posición única es un activo enorme para cualquier función a la que quieras moverte. Ayúdame a usar esta información de manera estratégica tanto para añadir valor en mi rol actual como para construir la credibilidad que necesito para el siguiente.

**HACIA EL LIDERAZGO DE CS:**

DE CSM A TEAM LEAD Y VP OF CS
El camino hacia el liderazgo de CS requiere un cambio de mentalidad significativo: de obtener resultados de tus propias cuentas a obtener resultados a través del equipo que lideras. Los mejores CS leaders no son necesariamente los mejores CSMs porque las habilidades de gestión de cuentas y las habilidades de liderazgo de equipo son diferentes. Ayúdame a identificar las habilidades de liderazgo que necesito desarrollar si el management de CS es mi camino: el coaching de los CSMs del equipo, el diseño de los procesos y los playbooks que escalan el CS y la gestión de las métricas del equipo (NRR, GRR, churn, expansión) con la profundidad de un líder de revenue.

CONSTRUIR VISIBILIDAD CON EL LIDERAZGO DE REVENUE
El VP of CS tiene influencia directa en las decisiones de revenue de la empresa. Construir esa credibilidad requiere demostrar que entiendes el negocio en términos financieros, no solo en términos de satisfacción del cliente. Ayúdame a desarrollar la literacidad financiera y de revenue que necesito para tener conversaciones de impacto con el CRO, el CFO y el CEO sobre el papel del CS en el crecimiento del negocio.

**RUTAS DESDE EL CS HACIA OTRAS FUNCIONES:**

CS HACIA VENTAS Y ACCOUNT MANAGEMENT
La transición de CS a ventas (especialmente account management o expansión) es natural porque el CSM ya gestiona relaciones, identifica oportunidades de expansión y tiene credibilidad con el cliente. La diferencia clave es el componente de cierre: el CS gestiona la relación y el valor percibido, mientras que el AM tiene cuota de expansión y upsell. Ayúdame a diseñar la transición si ventas o AM es mi camino: qué habilidades de cierre necesito desarrollar, cómo posiciono mi experiencia en CS como ventaja competitiva para un rol de AM y cómo consigo la primera oportunidad que me permite demostrar la capacidad de cerrar.

CS HACIA PRODUCTO
La transición de CS a producto es muy valorada porque el CSM tiene una perspectiva del usuario que los product managers con perfil más técnico raramente tienen. Muchas empresas buscan activamente ex-CSMs para roles de PM porque traen la voz del cliente al proceso de producto. Ayúdame a evaluar si esta transición es posible en mi empresa actual o en el mercado y a diseñar el plan para hacerla: las habilidades de PM que necesito desarrollar, cómo construyo el portafolio de pensamiento de producto que demuestra la capacidad y cómo consigo la primera oportunidad de PM.

CS HACIA OPERACIONES
El CS leader con visión de operaciones puede moverse hacia roles de Revenue Operations o Customer Success Operations que son cada vez más valorados en empresas SaaS en crecimiento. Estos roles diseñan los procesos, las herramientas y los datos que hacen que el CS escale. Ayúdame a entender si este es un camino para mí y qué necesito desarrollar para acceder a él.

Dame el plan de carrera concreto para los próximos 18 meses que use mi experiencia en CS como plataforma de lanzamiento hacia el rol que quiero con los pasos específicos, las habilidades a desarrollar y las conversaciones clave que necesito tener.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Plan de carrera desde Customer Success Manager hacia el liderazgo de CS o hacia otras funciones como ventas, producto u operaciones',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance que escala: de venderse por horas a construir un negocio',
                'description'       => 'Diseña la transición del modelo de freelance por horas al modelo de negocio escalable con productos, servicios empaquetados o un equipo que multiplica tu capacidad sin multiplicar tus horas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de negocio especializado en la transición del modelo de freelance por horas al modelo de negocio independiente escalable, con experiencia ayudando a consultores, diseñadores, developers, writers y otros profesionales independientes a construir negocios que generan ingresos sin requerir su presencia en todas y cada una de las horas facturadas. Quiero diseñar la transición de mi modelo de freelance actual hacia un modelo que escale, y necesito el plan concreto que lo hace posible.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad, tu tarifa actual y el tipo de trabajo que haces para los clientes?
2. ¿Cuántos ingresos tienes actualmente y cuántas horas trabajas para conseguirlos?
3. ¿Cuál es el modelo de escala que más te atrae: productizar tus servicios, crear productos digitales, construir un equipo pequeño o una combinación?
4. ¿Cuáles son tus mayores miedos o resistencias a escalar: perder el control de la calidad, la incertidumbre de los ingresos, la complejidad de gestionar personas o algo diferente?

**EL TECHO DEL MODELO DE FREELANCE POR HORAS:**

EL PROBLEMA MATEMÁTICO DEL TIEMPO COMO LÍMITE
El modelo de freelance por horas tiene un techo matemático: hay un número máximo de horas que puedes trabajar y un precio máximo de mercado por hora en tu categoría. El producto de esos dos números es tu ingreso máximo posible sin cambiar el modelo. Para el freelance que ha llegado a ese techo o que anticipa llegar a él, la escala requiere romper la ecuación tiempo = dinero de una de estas maneras: cobrar por el valor en lugar de por el tiempo, multiplicar la capacidad con un equipo, o crear productos que generan ingresos sin tu tiempo directo. Ayúdame a calcular mi techo actual y a evaluar cuál de estas tres rutas es más adecuada para mí.

LA PARADOJA DEL FREELANCE EXITOSO
Cuanto más exitoso es el freelance en el modelo por horas, más difícil es el cambio: tienes clientes que pagan bien, ingresos predecibles y un estilo de vida construido alrededor de ese modelo. Cambiar requiere aceptar un período de ingresos más bajos o más inciertos mientras construyes el nuevo modelo. Pero esperar a que el modelo actual deje de funcionar para empezar a construir el siguiente es demasiado tarde. Ayúdame a diseñar la transición de manera que sea gradual y que minimice el riesgo financiero.

**LAS RUTAS DE ESCALA:**

PRODUCTIZAR LOS SERVICIOS
La productización del servicio es la primera y más accesible forma de escala para el freelance. Consiste en convertir un servicio que ahora customizas completamente para cada cliente en un servicio con un alcance, un proceso y un precio definido que puede entregarse de manera más eficiente. La productización reduce el tiempo de venta (el cliente sabe exactamente qué compra), reduce el tiempo de entrega (el proceso está estandarizado) y permite cobrar más (el cliente paga por el resultado, no por las horas). Ayúdame a identificar el servicio de mi negocio con mayor potencial de productización y a diseñar la oferta productizada.

CONSTRUIR PRODUCTOS DIGITALES
Los productos digitales (cursos, templates, herramientas, informes de investigación, frameworks) permiten al freelance generar ingresos recurrentes o pasivos sin intercambiar tiempo por dinero. Son el modelo de mayor potencial de escala y el que requiere más inversión inicial sin garantía de retorno. Ayúdame a evaluar si el producto digital es una ruta viable para mí: qué conocimiento tengo que tiene valor para una audiencia más amplia que mis clientes directos, cómo valido la demanda antes de invertir en la creación del producto y cuál es el modelo de distribución que mejor se ajusta a mi audiencia.

CONSTRUIR UN EQUIPO PEQUEÑO
La subcontratación o la construcción de un equipo pequeño permite multiplicar la capacidad de entrega sin aumentar las horas propias. El freelance que se convierte en el director creativo o el arquitecto de soluciones, delegando la ejecución a colaboradores de confianza, puede multiplicar su facturación sin multiplicar sus horas de trabajo. Pero este modelo requiere habilidades de gestión, sistemas de garantía de calidad y una posición de mercado que justifique el precio necesario para cubrir el coste de los colaboradores con margen. Ayúdame a evaluar si este modelo es el correcto para mí y, si es así, cómo doy los primeros pasos.

**DISEÑAR LA TRANSICIÓN:**

EL MODELO HÍBRIDO DURANTE LA TRANSICIÓN
La transición del modelo freelance por horas al modelo escalable raramente ocurre de un día para otro; lo más seguro es un período híbrido donde mantienes los ingresos del modelo actual mientras construyes el nuevo. Ayúdame a diseñar el modelo híbrido para mi transición: qué porcentaje del tiempo dedico al nuevo modelo versus al modelo actual, cómo priorizo los proyectos de clientes versus el desarrollo del nuevo modelo y cuánto tiempo es razonable para que el nuevo modelo genere los primeros ingresos significativos.

LAS COMPETENCIAS DEL FREELANCE QUE CONSTRUYE UN NEGOCIO
El salto de freelance a fundador de negocio requiere desarrollar competencias que el trabajo de cliente raramente desarrolla: el marketing y la distribución del producto o servicio (cómo llego a una audiencia más amplia que mis clientes actuales), las operaciones del negocio (cómo gestiono los sistemas, los procesos y los colaboradores) y la mentalidad de inversión (cómo invierto tiempo y dinero en el negocio hoy para obtener retornos futuros). Ayúdame a identificar cuáles de estas competencias necesito desarrollar más urgentemente para mi ruta de escala específica.

Dame el plan concreto para la transición de mi modelo de freelance actual al modelo escalable que quiero construir, con los pasos específicos, los hitos financieros que me indican que la transición está funcionando y las decisiones clave que tendré que tomar en el camino.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Plan de transición del modelo de freelance por horas a un negocio escalable con servicios productizados, productos digitales o equipo',
                'vote_score'        => 47,
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
