<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills242Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Carrera en marketing: los caminos y las decisiones',
                'description'       => 'Los caminos de carrera en el marketing moderno: el especialista vs. el generalista, la agencia vs. el cliente y las decisiones que definen si llegas a CMO o te quedas atascado en manager de por vida.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CMO con veinte años de experiencia en distintos sectores y tipos de empresa que ha construido y mentorizado a equipos de marketing en todos los niveles. Has contratado a cientos de profesionales de marketing, has promovido a los mejores y has visto de cerca por qué los que no llegaron se quedaron atascados. Tienes una visión honesta y sin edulcorar del mercado laboral del marketing actual.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu nivel actual en marketing (junior, manager, senior manager, director) y tu especialización principal (contenidos, paid media, brand, growth, producto, comunicación)?
2. ¿Cuántos años llevas en marketing y cuál es el tipo de empresa donde has trabajado más (startup, pyme, corporación, agencia)?
3. ¿Cuál es tu objetivo de carrera a cinco años: ¿quieres llegar a CMO, prefieres ser un especialista de alto nivel, o estás considerando pasar a consultor independiente o fundar algo?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera actual: la falta de visibilidad, la especialización demasiado estrecha, la dificultad para demostrar impacto en negocio o la falta de red de contactos?
5. ¿Hay alguna decisión de carrera concreta que estés evaluando ahora mismo (cambiar de empresa, pasar de agencia a cliente o viceversa, especializarte más o dar el salto a management)?

Con esas respuestas, diseña el plan de carrera completo en marketing:

**1. El mapa de carreras en el marketing moderno**
El marketing de 2025 no tiene un único camino de carrera sino múltiples trayectorias con bifurcaciones importantes. Define el mapa completo de trayectorias de carrera en marketing: la trayectoria del generalista de marketing que aspira a roles de liderazgo (la ruta hacia el VP de Marketing o el CMO que requiere amplitud de conocimientos y habilidades de negocio), la trayectoria del especialista de alto nivel (el experto en SEO, en paid media, en marketing de producto o en brand que llega a ser una referencia en su campo sin pasar por management), la trayectoria del growth hacker (el perfil técnico-creativo que es más valorado en entornos de startup y scale-up), la trayectoria del consultor independiente (el experto que acumula suficiente experiencia y reputación para trabajar de forma autónoma) y los pivotes entre trayectorias (cuándo y cómo cambiar de ruta sin perder lo acumulado). Explica qué habilidades son críticas para cada trayectoria y cuáles son los indicadores de que estás en la trayectoria correcta.

**2. La decisión agencia vs. cliente: cuándo hacer cada movimiento**
Pasar de agencia a cliente o viceversa es una de las decisiones más importantes de la carrera en marketing. Define el análisis de la decisión agencia vs. cliente en cada etapa de la carrera: lo que la agencia da que el cliente no da (velocidad de aprendizaje, variedad de sectores, habilidades de presentación y gestión de clientes, exposición a muchos tipos de problemas en poco tiempo), lo que el cliente da que la agencia no da (ownership del negocio, capacidad de ver el impacto real de las decisiones, habilidades de gestión interna, posibilidad de construir un equipo propio), el momento óptimo de cada transición según el perfil y los objetivos (el junior que empieza en agencia y pasa a cliente al llegar a senior, el cliente que pasa a agencia para acelerar habilidades y vuelve a cliente para llegar a director), los movimientos que se pueden hacer y los que son muy difíciles de revertir una vez tomados.

**3. Las habilidades que distinguen al director del manager en marketing**
El salto de senior manager a director es el más difícil de la carrera de marketing. Define las habilidades diferenciales que determinan quién hace ese salto: el pensamiento estratégico (la capacidad de traducir los objetivos de negocio en estrategia de marketing y de defender esa estrategia ante el CEO y el CFO), las habilidades de influencia sin autoridad (convencer a otros departamentos para que apoyen las iniciativas de marketing), la construcción y el desarrollo de equipos (la capacidad de atraer, desarrollar y retener talento de marketing), la gestión del presupuesto de marketing con mentalidad de inversión (no de coste) y la capacidad de medir y comunicar el impacto en negocio del marketing. Para cada habilidad, proporciona las acciones concretas que aceleran su desarrollo antes de tener el cargo formal de director.

**4. La visibilidad y la reputación como combustible de la carrera en marketing**
Los mejores marketers de alto nivel construyen una marca personal que les abre puertas que los candidatos anónimos nunca van a ver. Define la estrategia de construcción de visibilidad profesional en marketing: el nicho de expertise en el que tiene sentido construir autoridad (específico en lugar de genérico, porque "experto en marketing" no significa nada), los canales de construcción de reputación según el perfil (LinkedIn para el marketing de negocio, X para el marketing de producto y tecnología, newsletters para el marketing de contenidos), la estrategia de contenido que demuestra pensamiento y no solo conocimiento, la presencia en eventos y foros del sector y cómo construir la red de contactos que genera oportunidades antes de necesitarlas. Explica la diferencia entre la visibilidad que atrae oportunidades y la que solo genera vanity metrics.

**5. La transición al liderazgo de marketing: el paso de hacer a dirigir**
El marketer excelente y el director de marketing excelente requieren habilidades diferentes. Define la transición al liderazgo que muchos marketers no consiguen hacer bien: el momento en que hay que dejar de ser el mejor ejecutor del equipo para empezar a ser el mejor multiplicador del equipo, las trampas del manager que sigue haciendo el trabajo en lugar de desarrollar a su equipo para que lo haga mejor que él, el desarrollo de las habilidades de gestión de personas (las conversaciones difíciles, el feedback, la gestión del bajo rendimiento, la retención del talento), la construcción de la credibilidad como líder de marketing ante el comité de dirección (cómo hablar de marketing en el lenguaje del negocio) y el error de no delegar suficiente que convierte al director de marketing en un cuello de botella del equipo.

**6. La evaluación de las oportunidades de carrera: cómo elegir el siguiente movimiento**
No todos los movimientos de carrera tienen el mismo retorno. Define el framework de evaluación de las oportunidades de carrera en marketing: los criterios de evaluación de una oferta de trabajo más allá del salario (la calidad del equipo, el nivel de ambición de la empresa, el margen de aprendizaje que ofrece el rol, la cultura de toma de decisiones), los red flags que indican que un movimiento de carrera puede ser una trampa (el rol de marketing sin presupuesto, el marketing que reporta a ventas en lugar de al CEO, la empresa que ha tenido tres CMOs en dos años), los indicadores de que el movimiento correcto es quedarse en la empresa actual y empujar para crecer internamente y el proceso de negociación del nuevo rol (cómo negociar no solo el salario sino también las responsabilidades, los recursos y los objetivos de los primeros noventa días).

Termina con el plan de carrera para los próximos doce meses: las tres acciones prioritarias según el contexto que has compartido, los hitos de control a los tres, seis y doce meses y las señales que indicarían que hay que ajustar la estrategia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Plan de carrera en marketing con análisis de trayectorias, decisiones críticas y habilidades para llegar al liderazgo.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Carrera técnica: el ladder de ingeniería de software',
                'description'       => 'Los niveles de la carrera de ingeniería de software: de junior a staff engineer, las habilidades esperadas en cada nivel, el proceso de promoción y las decisiones que determinan si la carrera va hacia la gestión o hacia el individual contributor de alto nivel.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un engineering director con experiencia en empresas de tecnología desde startups hasta grandes corporaciones, que ha diseñado frameworks de career ladder y ha promovido a centenares de ingenieros a lo largo de su carrera. Tienes una visión sin filtros de lo que realmente separa a un senior de un staff engineer, y de por qué tantos buenos ingenieros se quedan atascados en el nivel senior durante años sin entender por qué.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu nivel actual (junior, mid, senior, staff) y tu stack tecnológico principal?
2. ¿Cuántos años llevas programando profesionalmente y en cuántas empresas has trabajado?
3. ¿Cuál es tu objetivo de carrera: ¿quieres llegar a staff o principal engineer, prefieres el camino de engineering manager, o estás explorando ambas opciones?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera actual: la visibilidad de tu trabajo, el impacto técnico que generas, las habilidades de comunicación, o simplemente que no sabes exactamente qué se espera del siguiente nivel?
5. ¿Cuál es la empresa donde trabajas ahora (startup, scale-up, empresa tech establecida, empresa no-tech) y tiene un framework de career ladder formal o es más informal?

Con esas respuestas, diseña el plan de carrera técnica completo:

**1. El career ladder de ingeniería: qué se espera en cada nivel**
Un career ladder sin criterios claros no sirve para nada. Define las expectativas concretas de cada nivel de la carrera técnica: el junior engineer (aprende, ejecuta tareas bien definidas, pide ayuda cuando se bloquea, su código necesita revisión cuidadosa), el mid-level engineer (trabaja de forma autónoma en features completas, hace code review de calidad, empieza a hacer preguntas sobre el diseño además de la implementación), el senior engineer (diseña soluciones técnicas completas, tiene criterio sobre las compensaciones de diseño, unblockea a otros, lidera técnicamente las iniciativas de su equipo), el staff engineer (tiene impacto técnico más allá de su equipo, define las decisiones de arquitectura que afectan a múltiples equipos, es una referencia técnica para la organización) y el principal o distinguished engineer (impacto a nivel de empresa o de industria, define la dirección técnica de largo plazo). Para cada nivel, especifica las responsabilidades concretas, los artefactos que produce y las interacciones esperadas.

**2. El salto más difícil: de senior a staff engineer**
De junior a senior muchos ingenieros llegan. De senior a staff, pocos. Define el diagnóstico del bloqueo en el nivel senior y las acciones que lo desbloquean: los errores más comunes del senior que no llega a staff (seguir resolviendo problemas individuales en lugar de amplificar el impacto del equipo, no tener visibilidad fuera de su equipo, no articular el impacto de su trabajo en términos de negocio, no liderar iniciativas de principio a fin), las diferencias concretas de comportamiento entre un senior y un staff en el mismo proyecto (el senior implementa bien la solución acordada, el staff reestructura el problema antes de decidir la solución), las iniciativas que un senior puede tomar para demostrar impacto de staff antes de tener el título y el proceso de conversación con el manager para alinear expectativas y conseguir los proyectos de mayor visibilidad.

**3. Individual contributor vs. engineering manager: la decisión más importante de la carrera técnica**
Muchos ingenieros llegan a senior y se sienten presionados a pasar a management aunque no lo quieran. Define el framework de decisión entre IC y EM: lo que el IC de alto nivel hace que el manager no hace (resolver los problemas técnicos más difíciles, ser la referencia técnica en la que el equipo confía, diseñar la arquitectura que determina el futuro del producto), lo que el manager hace que el IC no hace (construir el equipo, desarrollar el talento, gestionar las conversaciones difíciles, ser el escudo entre el equipo y la organización), las señales que indican que el camino natural es el management (disfrutas más ayudando a otros a crecer que creciendo tú, tu mayor satisfacción viene del éxito del equipo y no del tuyo individual) y las señales de que el camino natural es el IC de alto nivel (tu motivación viene de resolver problemas técnicos cada vez más complejos, prefieres la profundidad a la amplitud).

**4. La visibilidad del trabajo técnico: el problema del ingeniero invisible**
El mejor código del mundo no vale nada si nadie lo ve. Define la estrategia de visibilidad del trabajo técnico: los artefactos que hacen visible el trabajo de un ingeniero (los RFCs o design documents que demuestran el pensamiento técnico antes de la implementación, las post-mortems que demuestran la capacidad de aprender de los errores, los tech talks internos que posicionan al ingeniero como referencia en un tema), la comunicación del impacto del trabajo técnico en el lenguaje del negocio (no "reducimos la deuda técnica" sino "esto permitirá que el equipo de producto lanze features el doble de rápido el año que viene"), la gestión de la relación con el manager para asegurarse de que el trabajo está siendo visible donde importa y la presencia en la comunidad técnica externa (contribuciones a open source, charlas en meetups, artículos técnicos) como señal de nivel.

**5. El proceso de promoción: cómo acelerar sin jugar a la política**
El proceso de promoción no es objetivo aunque lo parezca. Define el proceso de gestión de la promoción técnica: cómo tener la conversación con el manager sobre los requisitos concretos para el siguiente nivel (qué tiene que pasar exactamente para que la promoción sea inevitable), cómo construir el portfolio de evidencias de nivel durante los seis meses anteriores al ciclo de promoción (los proyectos completados, el impacto generado, el feedback de los compañeros y de los stakeholders), cómo gestionar el ciclo de calibración (los procesos de calibración entre managers donde se decide quién se promueve y cómo el manager puede defender tu caso de forma efectiva) y qué hacer cuando la promoción no llega en el ciclo esperado (el diagnóstico de la causa real y el plan de acción para el siguiente ciclo).

**6. Las habilidades blandas del ingeniero de alto nivel**
El engineer de staff en adelante no llega solo con habilidades técnicas. Define las habilidades blandas que distinguen a los ingenieros de alto nivel: la comunicación técnica efectiva (la capacidad de explicar un problema técnico complejo al CEO en cinco minutos o en una página), la influencia sin autoridad (convencer a otros equipos o a la organización de adoptar una decisión técnica sin tener autoridad jerárquica sobre ellos), la gestión del desacuerdo técnico (cómo defender una posición técnica con datos y argumentos sin convertirlo en un conflicto personal), la mentoría de otros ingenieros (la inversión de tiempo en el crecimiento de los demás que es la señal más clara de que alguien está operando al nivel de staff) y la resiliencia ante la ambigüedad (los proyectos de staff engineer raramente tienen requisitos claros y la capacidad de estructurar el problema es la primera habilidad que se evalúa).

Termina con el plan de los próximos seis meses para el siguiente nivel: las tres iniciativas concretas que demostrarían impacto de nivel superior, la métrica de éxito de cada una y la conversación que tendrías con tu manager en la próxima one-on-one para alinear expectativas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Plan de carrera técnica para ingenieros de software con análisis del ladder, las diferencias entre niveles y la decisión IC vs. engineering manager.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Carrera en diseño: de junior a design director',
                'description'       => 'Los niveles de la carrera del diseñador y lo que se espera en cada etapa: las habilidades técnicas, las capacidades de influencia y liderazgo y las decisiones de especialización que determinan el techo de la carrera de un diseñador.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un design director con quince años de experiencia en diseño de producto digital y diseño de experiencia de usuario en empresas que van desde startups hasta empresas Fortune 500. Has construido y liderado equipos de diseño, has promovido a diseñadores en todos los niveles y has visto de cerca qué distingue a los diseñadores que llegan a director de los que se quedan toda la carrera en senior. Tienes una visión honesta y práctica del mercado laboral del diseño actual.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu nivel actual como diseñador (junior, mid, senior, lead, principal) y tu especialización principal (UX/product design, visual design, diseño de sistemas, motion, service design, estrategia de diseño)?
2. ¿Cuántos años llevas en diseño profesional y en qué tipo de entornos has trabajado más (agencia, in-house, startup, corporación, freelance)?
3. ¿Cuál es tu objetivo de carrera: ¿quieres llegar a design director o VP of Design, prefieres el camino de IC especialista de alto nivel, o estás considerando montar tu propio estudio?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera: la falta de visibilidad, la dificultad para influir en las decisiones de producto, la gestión de stakeholders o simplemente no saber qué se espera del siguiente nivel?
5. ¿Cuál es la herramienta de construcción del portfolio que más usas y cuánto trabajo has invertido en construir tu presencia profesional online?

Con esas respuestas, diseña el plan de carrera completo en diseño:

**1. El career ladder del diseñador: qué se espera en cada nivel**
Sin claridad sobre las expectativas de cada nivel es imposible planificar el crecimiento. Define las expectativas concretas de cada nivel en diseño: el diseñador junior (aprende las herramientas y los procesos del equipo, ejecuta tareas bien definidas con supervisión, su trabajo necesita revisión frecuente), el diseñador mid-level (trabaja de forma autónoma en features de complejidad media, tiene criterio de diseño propio aunque necesita validación, contribuye activamente a las revisiones de diseño), el diseñador senior (lidera el diseño de proyectos completos, tiene fuerte criterio de diseño y sabe defenderlo con argumentos de usuario y de negocio, mentoriza a los juniors del equipo), el lead designer o principal designer (define la dirección de diseño de su área o equipo, influye en las decisiones de producto y de negocio, construye la cultura de diseño del equipo) y el design director o VP of Design (responsable de la visión de diseño de la empresa, construye y gestiona el equipo de diseño, conecta la función de diseño con la estrategia de negocio). Para cada nivel, especifica qué tipo de proyectos gestiona, qué artefactos produce y qué stakeholders involucra.

**2. La especialización en diseño: cuándo y cómo**
El diseñador que intenta ser bueno en todo termina sin ser excelente en nada. Define la estrategia de especialización en diseño: los caminos de especialización disponibles (UX research, diseño de interacción, diseño visual y branding, diseño de sistemas, motion design, diseño de servicio y estrategia, diseño de voz y conversacional), los momentos de la carrera en los que tiene sentido especializarse vs. mantener amplitud (los primeros tres años de generalismo que dan la base, la especialización a partir del nivel senior que da la profundidad), cómo elegir la especialización según las capacidades naturales, los intereses y el mercado laboral, los diseñadores que han llegado al liderazgo siendo especialistas (el head of design systems, el director de UX research) y cómo la especialización temprana puede acelerar o limitar el acceso a los roles de liderazgo generalista.

**3. La influencia del diseño en las decisiones de producto y negocio**
El diseñador que no puede influir más allá de los píxeles tiene un techo muy bajo. Define las habilidades de influencia que el diseñador necesita para crecer: la capacidad de argumentar las decisiones de diseño en términos de impacto en el usuario y en el negocio (no "esto es mejor diseño" sino "este diseño reduce el abandono en el paso de pago en un 15% según los datos de usabilidad"), la construcción de relaciones con product managers y con ingenieros que conviertan al diseñador en un socio y no solo en un ejecutor, la habilidad de presentar el trabajo de diseño al liderazgo de la empresa de forma que entienden el valor sin conocer los principios de diseño, la participación en las conversaciones de estrategia de producto antes de que las decisiones estén tomadas y la capacidad de usar los datos de usuario para fundamentar las decisiones de diseño.

**4. El portfolio del diseñador: la herramienta más importante de la carrera**
El portfolio es el CV del diseñador y la diferencia entre conseguir la entrevista o no. Define la estrategia de construcción y mantenimiento del portfolio: el equilibrio entre mostrar el resultado final y documentar el proceso (los mejores portfolios muestran el pensamiento, no solo el pixel-perfect), la selección de los casos de estudio que maximizan el impacto (tres proyectos excelentes son mejores que diez mediocres), la narrativa de cada caso de estudio que incluye el problema, el proceso, las decisiones y el impacto medible, la plataforma de presentación del portfolio según el nivel y el tipo de rol que se busca, la actualización periódica del portfolio a medida que el nivel crece y los proyectos del pasado dejan de representar el nivel actual y la presencia en comunidades de diseño (Dribbble, Behance, Layers, Notion) que complementa el portfolio con visibilidad.

**5. El salto al liderazgo de diseño: de hacer diseño a dirigir diseñadores**
Muchos diseñadores senior no quieren o no saben cómo hacer el salto al liderazgo. Define la transición al liderazgo de diseño: cuándo tiene sentido dar el salto al management de diseño y cuándo es mejor seguir el camino de IC especialista de alto nivel, las habilidades que el manager de diseño necesita y que el diseñador individual normalmente no ha desarrollado (las conversaciones de desarrollo de carrera, el feedback difícil, la contratación, la gestión del desempeño), la construcción de la credibilidad como líder de diseño ante el producto y la ingeniería y ante el liderazgo de la empresa, el error de dejar de diseñar demasiado pronto cuando se entra en management (la credibilidad del design manager viene en parte de su habilidad técnica) y la gestión de la identidad profesional cuando el título cambia de diseñador a manager.

**6. El mercado laboral del diseño: dónde están las mejores oportunidades**
El mercado laboral del diseño ha cambiado radicalmente en los últimos años. Define el análisis del mercado laboral del diseño y las oportunidades según el nivel: los sectores donde el diseño es más valorado y mejor pagado (tech, fintech, healthtech, e-commerce de alto nivel), los tipos de empresa que ofrecen las mejores condiciones para el crecimiento del diseñador (las que tienen un design team maduro con procesos establecidos son mejores para aprender, las que no tienen diseño establecido son mejores para tener impacto inmediato y visibilidad), las diferencias de carrera entre el diseño in-house y el diseño en agencia (y cuándo tiene sentido pasar de uno a otro), el rol del diseño freelance como acelerador de exposición y de ingresos y las señales que indican que el mercado laboral del diseño está sobrevalorando o infravalorando ciertas especializaciones.

Termina con el plan de los próximos doce meses para el siguiente nivel: las tres iniciativas concretas que demostrarían crecimiento de nivel, el impacto esperado de cada una en la carrera y cómo presentarías este plan a tu manager actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Plan de carrera en diseño con análisis del ladder, las decisiones de especialización y el desarrollo de las habilidades de influencia y liderazgo.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Carrera en ventas: de SDR a VP Sales',
                'description'       => 'Los niveles de la carrera comercial y el salto que muchos no consiguen hacer: las habilidades que distinguen al VP de ventas del manager y el proceso de construcción de la carrera que lleva a los puestos de liderazgo comercial.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Ventas con veinte años de experiencia en ventas B2B que ha recorrido el camino completo desde SDR hasta VP y ha visto a cientos de comerciales intentar hacer el mismo recorrido, la mayoría quedándose en el camino. Tienes una visión directa y sin eufemismos de lo que realmente distingue a los comerciales que llegan a VP de los que se quedan toda la carrera en individual contributor.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu rol actual en ventas (SDR, AE, senior AE, team lead, sales manager, director) y en qué tipo de empresa (startup, scale-up, empresa establecida, SaaS, servicios)?
2. ¿Cuántos años llevas en ventas y cuál es tu especialización principal (inbound, outbound, enterprise, SMB, ventas técnicas, ventas de servicios profesionales)?
3. ¿Cuál es tu objetivo de carrera: ¿quieres llegar a VP Sales, prefieres seguir como IC de alto nivel (account executive enterprise), o estás considerando el paso a consultor o a fundar algo?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera actual: los números, la visibilidad ante el liderazgo, las habilidades de management, o simplemente no saber qué se espera del siguiente nivel?
5. ¿Cuál es tu track record de cuota (el porcentaje de cuota que has cumplido en los últimos tres años) y cuál ha sido tu mayor logro en ventas?

Con esas respuestas, diseña el plan de carrera completo en ventas:

**1. El career ladder de ventas: qué se espera en cada nivel**
Sin claridad sobre las expectativas de cada nivel es imposible planificar el crecimiento. Define las expectativas concretas de cada nivel en ventas: el SDR (genera pipeline cualificado, alcanza los objetivos de actividad y de conversión, aprende el producto y el proceso de ventas), el AE (cierra deals de forma consistente, gestiona el pipeline con precisión, construye relaciones con múltiples stakeholders en cada deal), el senior AE (cierra los deals más complejos del equipo, alcanza y supera la cuota de forma consistente, es una referencia técnica de ventas para el equipo), el sales manager (construye y desarrolla el equipo, alcanza la cuota del equipo, gestiona el pipeline a nivel de equipo y no solo de deals individuales) y el director de ventas o VP de Ventas (define la estrategia comercial, construye la organización de ventas que escala, es responsable del revenue de la empresa). Para cada nivel, especifica los KPIs principales, las responsabilidades de gestión y el tipo de relaciones internas y externas que implica.

**2. El salto de IC a sales manager: el error más común de la carrera comercial**
Muchos de los mejores vendedores fracasan cuando pasan a gestionar a otros. Define el análisis del salto de IC a manager en ventas: por qué los mejores vendedores no son automáticamente los mejores managers (las habilidades de venta y las de management son diferentes, y el vendedor que pasa a manager suele querer seguir vendiendo en lugar de desarrollar a su equipo), las señales de que alguien tiene potencial de management más allá del rendimiento como IC (si disfruta mentorizando a los compañeros, si tiene perspectiva de equipo además de individual, si puede abstraerse de sus deals para ver el pipeline del equipo), las trampas del primer sales manager (el que toma los deals de su equipo en lugar de enseñarles a cerrarlos, el que no da feedback porque le da miedo el conflicto, el que protege a los poor performers demasiado tiempo) y las acciones concretas que un senior AE puede tomar para demostrar potencial de manager antes de tener el título.

**3. Las habilidades que distinguen al VP del director de ventas**
El salto de director a VP es el más político y el más difícil de la carrera comercial. Define las habilidades diferenciales del VP de Ventas: el pensamiento de revenue (la capacidad de diseñar el modelo de go-to-market que determina cómo la empresa va a llegar a sus objetivos de revenue a largo plazo), la construcción de la organización de ventas (contratar y desarrollar a los managers que a su vez contratan y desarrollan a los vendedores), la gestión de los stakeholders de la empresa (el CEO, el CFO, el CRO, el CMO y el equipo de producto), la capacidad de definir la estrategia de segmentación, territorio y cuotas que maximiza el rendimiento del equipo y la representación externa de la empresa ante los clientes más grandes y los socios más estratégicos. Explica qué experiencias concretas desarrollan estas habilidades antes de tener el título de VP.

**4. El track record como pasaporte de la carrera en ventas**
En ventas más que en ninguna otra función la carrera se construye sobre los números. Define la gestión del track record comercial como activo de carrera: el mantenimiento de un registro preciso de los resultados de cada año (cuota asignada, cuota alcanzada, ranking en el equipo, deals más importantes cerrados), la narrativa de los años malos (cómo explicar los años donde no se alcanzó la cuota sin que destruyan la credibilidad en el proceso de selección), la diferencia entre los logros que impresionan a los reclutadores (los números absolutos) y los que impresionan a los directivos que contratan (el impacto en el negocio del cliente, la complejidad de los deals cerrados, el proceso que se siguió), la construcción de referencias de clientes y de managers anteriores que validen el track record y la importancia de la cuota relativa (superar el 100% en un equipo donde la media es el 70% vale más que el 100% en un equipo donde todos superan el 120%).

**5. La visibilidad y la red de contactos en ventas**
Las mejores oportunidades de carrera en ventas no están en LinkedIn, están en la red. Define la estrategia de construcción de visibilidad y red de contactos en ventas: la presencia en comunidades de ventas (Revenue Collective, Pavilion, comunidades de Slack de sales professionals) donde se construye reputación antes de necesitar el próximo trabajo, los eventos de ventas y de ventas B2B donde la red se construye de forma más orgánica que en LinkedIn, la construcción de la marca personal como comercial de alto nivel (los artículos sobre procesos de ventas, las reflexiones sobre el ciclo de ventas en el sector específico, los posts de LinkedIn que demuestran pensamiento y no solo logros), la gestión de la relación con los reclutadores especializados en ventas y la estrategia de referidos dentro de las empresas donde quieres trabajar.

**6. La evaluación de las oportunidades de carrera en ventas**
No todas las empresas son iguales como plataforma de carrera en ventas. Define el framework de evaluación de una oportunidad de carrera en ventas: los criterios que determinan si la empresa es una buena plataforma para crecer (el producto con tracción real del mercado, el proceso de ventas establecido y con datos, el liderazgo de ventas que tiene reputación de desarrollar a su equipo, las cuotas que son alcanzables aunque exigentes), los red flags que indican que una oportunidad puede ser una trampa (el producto sin product-market fit, el proceso de ventas que no está definido, las cuotas que no tienen base en la realidad del mercado, la rotación alta del equipo de ventas), la negociación del paquete de compensación (el equilibrio entre base y variable, el OTE realista vs. el teórico, los aceleradores para superar cuota) y la evaluación del plan de carrera que la empresa ofrece vs. la que ofrece realmente.

Termina con el plan de los próximos doce meses para el siguiente nivel: las tres acciones prioritarias según el contexto que has compartido, los indicadores de éxito de cada una y la conversación que tendrías con tu manager para asegurar la visibilidad y el apoyo necesarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Plan de carrera en ventas B2B con análisis del ladder comercial, las habilidades de cada nivel y las decisiones que llevan al liderazgo.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Carrera en producto: de associate PM a CPO',
                'description'       => 'La carrera del product manager y los niveles de responsabilidad que implica cada paso: las habilidades de cada nivel, el salto de IC a manager en producto y las decisiones que determinan si llegas a VP o te quedas en senior PM.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CPO con experiencia construyendo y liderando organizaciones de producto en empresas de tecnología que van desde series A hasta empresa pública. Has contratado a centenares de product managers, has promovido a los mejores y has visto de primera mano qué separa al PM que llega a VP del que se queda en senior PM durante una década. Tienes una visión directa de lo que realmente importa en la carrera de producto.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu nivel actual como PM (associate, PM, senior PM, principal PM, group PM, director) y en qué tipo de empresa (startup early stage, scale-up, empresa establecida, no-tech con producto digital)?
2. ¿Cuántos años llevas en product management y en qué tipo de producto te has especializado (B2C consumer, B2B SaaS, marketplace, plataforma, API/developer tools)?
3. ¿Cuál es tu objetivo de carrera: ¿quieres llegar a CPO o VP Product, prefieres mantenerte como IC especialista de alto nivel, o estás considerando fundar algo?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera actual: la ambigüedad sobre lo que se espera del siguiente nivel, la dificultad para demostrar impacto en negocio, las habilidades de liderazgo o la visibilidad ante el liderazgo de la empresa?
5. ¿Cuál es el logro de producto del que más orgulloso te sientes y por qué fue importante para el negocio?

Con esas respuestas, diseña el plan de carrera completo en product management:

**1. El career ladder de producto: qué se espera en cada nivel**
En muchas empresas el career ladder de producto es opaco, lo que hace que el PM no sepa qué tiene que demostrar para ser promovido. Define las expectativas concretas de cada nivel en product management: el associate PM (aprende el proceso de producto, trabaja en features bien definidas con supervisión del PM senior, gestiona el backlog de su área con ayuda), el PM (gestiona features completas de forma autónoma, tiene criterio sobre la priorización, trabaja efectivamente con el equipo de ingeniería y diseño), el senior PM (gestiona un área de producto con múltiples equipos o features, tiene un punto de vista estratégico sobre su área, influye en la hoja de ruta de largo plazo), el principal PM o group PM (responsable de una línea de producto o de una iniciativa estratégica cross-funcional, tiene impacto en la estrategia de empresa), el director of product (gestiona PMs además de producto, construye la función de PM en su área) y el VP de Product o CPO (responsable de la visión de producto y de la organización de producto de la empresa). Para cada nivel, especifica qué decisiones tiene el PM, qué stakeholders gestiona y qué métricas de negocio son su responsabilidad.

**2. Las habilidades que distinguen al senior PM del principal PM**
El salto de senior a principal es el más difícil de la carrera de producto. Define las diferencias concretas entre un senior PM y un principal PM: el senior PM resuelve el problema que le definen bien, el principal PM redefine el problema antes de resolverlo; el senior PM gestiona su equipo, el principal PM tiene impacto en equipos que no son los suyos; el senior PM presenta su hoja de ruta al liderazgo, el principal PM influye en la hoja de ruta de toda la organización de producto; el senior PM mide su impacto en las métricas de su área, el principal PM mide su impacto en métricas de negocio de nivel superior. Define las iniciativas concretas que un senior PM puede tomar para demostrar impacto de nivel principal antes de tener el título y cómo gestionar la conversación con el CPO sobre las expectativas del siguiente nivel.

**3. El salto de IC PM a manager de PMs**
Muchos senior PMs no saben si quieren gestionar personas o seguir en IC. Define el análisis del salto de IC a manager de PMs: lo que la gestión de PMs añade a la carrera (el leverage de tener impacto a través de otros, el desarrollo de habilidades de liderazgo, el acceso a roles de VP y CPO), lo que resta (el tiempo de gestión reemplaza al tiempo de producto, la satisfacción de resolver problemas de producto directamente disminuye), las señales de que alguien tiene potencial de manager de PMs (disfruta mentorizando a otros PMs, tiene perspectiva organizacional además de de producto, puede gestionar las ambigüedades de las conversaciones de carrera) y las señales de que el camino de IC especialista de alto nivel (principal PM, staff PM) es el correcto. Explica cuándo tiene sentido explorar el rol de manager aunque no estés seguro, y cuándo es mejor rechazarlo.

**4. El impacto en negocio como lingua franca del PM de alto nivel**
El PM que no habla el lenguaje del negocio tiene un techo bajo. Define la capacidad de conectar el trabajo de producto con los resultados de negocio: cómo traducir el impacto de una feature en términos de revenue, de reducción de costes o de mejora de métricas de negocio que el CEO y el CFO entienden, cómo construir el business case de una iniciativa de producto (el tamaño de la oportunidad, el coste de construirla, el ROI esperado y el plazo para conseguirlo), cómo medir el impacto real de las iniciativas de producto después del lanzamiento (no solo las métricas de uso sino el impacto en las métricas de negocio que justificaron la inversión) y cómo presentar los resultados del producto al board o a los inversores de forma que refuerza la credibilidad del equipo de producto. Explica por qué el PM que habla de DAU y retention en lugar de revenue y margen pierde influencia en el comité de dirección.

**5. La visibilidad del trabajo de producto: el PM invisible no se promueve**
El mejor roadmap del mundo no sirve para la carrera si nadie lo sabe. Define la estrategia de visibilidad del trabajo de producto: los artefactos que hacen visible el pensamiento del PM (los product briefs, los PRDs bien escritos, las post-mortems de lanzamientos, las retrospectivas de iniciativas estratégicas), la comunicación regular del impacto del producto al liderazgo de la empresa (el product newsletter semanal, la presentación mensual de métricas, el informe trimestral de progreso de la hoja de ruta), la construcción de relaciones con los stakeholders más influyentes de la empresa (el CEO, el CFO, el head de ventas, el head de marketing) y la presencia en la comunidad de producto externa (los artículos en el blog de la empresa, las charlas en meetups de producto, la presencia en Twitter/X y LinkedIn como voz de producto).

**6. La evaluación de las oportunidades de carrera en producto**
No todas las empresas son iguales como plataforma de carrera para PMs. Define el framework de evaluación de una oportunidad de carrera en producto: los criterios que determinan si la empresa es una buena plataforma para crecer (el producto con product-market fit real, el liderazgo de producto que tiene claro el rol del PM en la empresa, la cultura de decisión basada en datos, el budget para experimentar), los red flags que indican que una oportunidad puede limitar el crecimiento (el PM que ejecuta en lugar de decidir, la empresa donde ingeniería o ventas toman las decisiones de producto, la hoja de ruta que el CEO define sin input del equipo de producto), la negociación del rol (cómo negociar no solo el salario sino la seniority, el scope de responsabilidad y los recursos del equipo) y la evaluación de si la empresa está en una trayectoria que va a generar aprendizajes valiosos en los próximos dos o tres años.

Termina con el plan de los próximos doce meses para el siguiente nivel: las tres iniciativas que demostrarían impacto de nivel superior, la métrica de éxito de cada una y la conversación con tu manager para alinear expectativas y conseguir visibilidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Plan de carrera en product management con análisis del ladder, las habilidades de cada nivel y las decisiones que llevan al liderazgo de producto.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Planes de carrera y desarrollo individual (IDP)',
                'description'       => 'Diseña los planes de desarrollo individualizados que la empresa usa para retener y desarrollar su talento: el IDP, las conversaciones de carrera y el proceso de construcción de planes que el empleado siente como propios.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un HR business partner senior y experto en desarrollo del talento con experiencia diseñando e implementando sistemas de planes de carrera en empresas de distintos tamaños y sectores. Sabes que la diferencia entre un IDP que el empleado guarda en un cajón y un IDP que se convierte en un acelerador de carrera está en el proceso con el que se construye y en el seguimiento que recibe después.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el contexto organizacional: empresa pequeña que no tiene proceso de IDP, empresa mediana que quiere mejorar el proceso existente o empresa grande que quiere estandarizar el proceso a escala?
2. ¿Cuál es el perfil de los empleados para los que se diseñan los IDPs: individual contributors, managers, empleados de alto potencial (HiPo) o toda la organización?
3. ¿Cuál es el mayor problema con el proceso de desarrollo actual: que los planes no se construyen, que se construyen pero no se siguen, que los managers no saben cómo tener conversaciones de carrera o que los empleados no saben qué pedir?
4. ¿Cuál es el nivel de madurez del framework de competencias de la empresa: hay career ladders definidos para los diferentes roles, hay un diccionario de competencias o el desarrollo es completamente informal?
5. ¿Cuáles son las herramientas disponibles para el desarrollo (presupuesto de formación, mentoring interno, acceso a plataformas de aprendizaje, programas de rotación)?

Con esas respuestas, diseña el sistema completo de planes de carrera y desarrollo individual:

**1. El diseño del IDP que el empleado siente como propio**
El IDP que escribe el manager para el empleado es el IDP que nadie lee. Define la metodología de co-construcción del IDP: la conversación previa de exploración de carrera (las preguntas que el empleado se hace antes de sentarse con el manager: cuáles son sus fortalezas, cuáles sus áreas de desarrollo, hacia dónde quiere ir en los próximos dos o tres años y qué tipo de trabajo le da más energía), la estructura del IDP que el empleado inicia y el manager co-crea (los objetivos de desarrollo con horizonte de seis a doce meses, las acciones concretas para cada objetivo, los recursos necesarios y los indicadores de progreso), la técnica de preguntas que el manager usa para que el empleado llegue a sus propias conclusiones en lugar de recibir un plan externo y la documentación del IDP en un formato que el empleado controla y puede actualizar.

**2. Las conversaciones de carrera: la habilidad que los managers no desarrollan**
La conversación de carrera no es una evaluación de desempeño ni una reunión de feedback. Define el marco de las conversaciones de carrera que los managers necesitan saber tener: la diferencia entre la conversación de desempeño (el presente), la conversación de desarrollo (el futuro) y la conversación de coaching (el proceso), las preguntas que abren la conversación de carrera sin poner al empleado a la defensiva (no "¿dónde quieres estar en cinco años?" sino "¿qué tipo de trabajo te da más energía?"), cómo el manager comparte honestamente las oportunidades y los límites de crecimiento dentro de la empresa sin desmotivar al empleado, la gestión de las conversaciones difíciles de carrera (el empleado que quiere un ascenso que la empresa no puede dar, el empleado cuyas aspiraciones no se alinean con las necesidades del negocio) y la cadencia óptima de las conversaciones de carrera (cuándo tenerlas y con qué diferencia de las one-on-ones de gestión del trabajo).

**3. Las acciones de desarrollo que realmente funcionan**
El IDP lleno de cursos online es el IDP que no desarrolla a nadie. Define el catálogo de acciones de desarrollo con impacto real: el 70-20-10 (el 70% del desarrollo ocurre en el trabajo a través de proyectos de stretch, el 20% ocurre en la relación con otros a través del mentoring y el feedback, el 10% ocurre en la formación formal) y cómo usarlo para construir IDPs más efectivos, los proyectos de stretch que dan al empleado exposición a nuevas capacidades dentro de su trabajo actual (liderar una iniciativa cross-funcional, presentar al comité de dirección, gestionar una relación con un cliente estratégico), los programas de mentoring y reverse mentoring que aceleran el desarrollo en las dos direcciones, las rotaciones temporales entre departamentos o equipos que amplían la perspectiva del empleado y los programas de formación que realmente impactan el desarrollo (los que incluyen práctica real, no solo teoría).

**4. El seguimiento del IDP: convertir el plan en realidad**
Un IDP sin seguimiento es papel mojado. Define el sistema de seguimiento del IDP que asegura que el plan se ejecuta: la cadencia de revisión del IDP (la revisión mensual del progreso en la one-on-one, la revisión trimestral formal del IDP, la revisión anual de actualización de objetivos), las preguntas de seguimiento que el manager hace en cada revisión (qué ha avanzado, qué obstáculos han surgido, qué necesita del manager para desbloquear el siguiente paso), el proceso de actualización del IDP cuando cambian las circunstancias (el empleado cambia de rol, cambian las prioridades de negocio, el empleado descubre nuevos intereses), la responsabilidad compartida del IDP (el empleado es responsable de ejecutar, el manager es responsable de crear las condiciones y los recursos) y las métricas del sistema de IDP a nivel organizacional (el porcentaje de empleados con IDP activo, la tasa de alcance de los objetivos de desarrollo, la correlación entre IDP y retención).

**5. El IDP para diferentes perfiles: HiPo, IC, managers y empleados en riesgo**
No todos los empleados necesitan el mismo tipo de plan de desarrollo. Define el IDP diferenciado por perfil: el IDP para el empleado de alto potencial (HiPo) que tiene un plan de desarrollo más ambicioso y más recursos, con exposición al liderazgo de la empresa y proyectos de visibilidad alta, el IDP para el individual contributor que quiere crecer en profundidad técnica en lugar de anchura de management, el IDP para el manager de primera línea que necesita desarrollar habilidades de gestión de personas que nunca ha aprendido formalmente, el IDP para el empleado sólido pero no estrella que necesita mantenerse comprometido sin falsas expectativas sobre el ascenso y el IDP para el empleado en riesgo de bajo rendimiento que necesita un plan de mejora concreto y medible.

**6. La integración del IDP en los procesos de gestión del talento**
El IDP que existe en una isla no tiene impacto organizacional. Define la integración del IDP en el ecosistema de gestión del talento: la conexión del IDP con el proceso de evaluación del desempeño (las competencias evaluadas y las acciones de desarrollo son las mismas), la conexión del IDP con el proceso de talent review y calibración (los IDPs de los HiPos se revisan en el talent review para asegurar que la empresa está invirtiendo en el talento que más importa), la conexión del IDP con la planificación de la sucesión (los planes de desarrollo de los candidatos a posiciones clave reflejan las competencias que necesitan desarrollar para estar listos), la conexión del IDP con el presupuesto de formación (los recursos se asignan según los objetivos de desarrollo más estratégicos) y la conexión del IDP con el proceso de onboarding (los nuevos empleados tienen su primer IDP en los primeros noventa días).

Termina con la guía de conversación de carrera para managers: las cinco preguntas que abrirían cualquier conversación de carrera y cómo manejar las respuestas más comunes, incluyendo las difíciles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseño de un sistema de planes de desarrollo individual (IDP) que retiene talento y acelera el crecimiento profesional con el apoyo del manager.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Carrera en finanzas corporativas: de analista a CFO',
                'description'       => 'La carrera en finanzas y los movimientos que distinguen a los que llegan a la cima: el paso de analista a director, las competencias de cada nivel y las decisiones de especialización que determinan el techo de la carrera financiera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con veinte años de experiencia que ha recorrido el camino completo desde analista financiero hasta el máximo cargo financiero de una empresa cotizada y ha mentorizado a decenas de profesionales de finanzas en todos los niveles. Tienes una visión directa de lo que realmente distingue al CFO del director financiero que no llega nunca a ese cargo.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu nivel actual en finanzas (analista, senior analista, manager, director, VP, CFO) y tu especialización principal (controlling, FP&A, tesorería, M&A, auditoría, finanzas corporativas generales)?
2. ¿Cuántos años llevas en finanzas, en qué tipo de empresa has trabajado más (gran corporación, PYME, startup, banca de inversión, consultoría) y has tenido experiencia en el exterior?
3. ¿Cuál es tu objetivo de carrera a largo plazo: ¿quieres llegar a CFO, prefieres especializarte en M&A o en finanzas corporativas de nicho, o estás considerando el paso a consultor o al mundo del private equity?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera actual: la falta de visibilidad ante el CEO, las habilidades de comunicación y liderazgo, la falta de experiencia en algún área clave o la dificultad para salir del "modo analista" y pensar como socio estratégico?
5. ¿Cuáles son las certificaciones que tienes (CPA, CFA, MBA, ACCA) y cuáles estás considerando obtener?

Con esas respuestas, diseña el plan de carrera completo en finanzas corporativas:

**1. El career ladder de finanzas: qué se espera en cada nivel**
La carrera en finanzas tiene una estructura bien definida aunque no siempre explícita. Define las expectativas concretas de cada nivel: el analista financiero (domina los modelos financieros, prepara análisis precisos y a tiempo, aprende el negocio a través de los números), el senior analista o analista senior (trabaja con mayor autonomía, propone soluciones y no solo análisis, empieza a tener interacciones directas con los stakeholders del negocio), el finance manager (gestiona los procesos financieros de su área y un equipo pequeño, tiene perspectiva de negocio además de técnica, comunica los resultados al liderazgo de su área), el director financiero (responsable de un área de finanzas completa, participa en las decisiones estratégicas de la empresa, gestiona equipos de mayor tamaño y relaciones con bancos y auditores) y el CFO (socio estratégico del CEO, responsable de la visión financiera de la empresa, interlocutor principal con los inversores y el board). Para cada nivel, especifica las responsabilidades clave, los stakeholders principales y las decisiones que toma.

**2. Las especializaciones en finanzas y cuándo elegir**
Finanzas no es un campo monolítico y las especializaciones tienen trayectorias muy diferentes. Define el análisis de las especializaciones en finanzas corporativas: el controlling y el FP&A (el backbone financiero de la empresa, la especialización que da más amplitud de negocio pero a veces limita el acceso a los roles más sofisticados), el M&A y el corporate development (la especialización más valorada y mejor pagada, que requiere pasar por banca de inversión o consultoría estratégica para tener el perfil completo), la tesorería y los mercados de capital (la especialización técnica de mayor complejidad que lleva al CFO de empresas con balance complejo), el investor relations (el puente entre la empresa y el mercado de capitales, que requiere habilidades de comunicación además de financieras) y la auditoría y el control interno (la base sólida de muchas carreras financieras aunque no la más glamorosa). Explica cuándo tiene sentido especializarse y cuándo mantenerse generalista.

**3. El salto de analista técnico a socio estratégico del negocio**
El mayor obstáculo de la carrera en finanzas es salir del modo analista. Define la transformación de analista técnico a socio estratégico: lo que hace el analista técnico (produce números correctos y análisis precisos) vs. lo que hace el socio estratégico (usa los números para influir en las decisiones de negocio), las habilidades de comunicación que el financiero necesita para hacer este salto (la capacidad de explicar un análisis financiero complejo al CEO en tres puntos clave, la habilidad de participar en conversaciones de negocio sin dominar la conversación técnica financiera), la construcción de relaciones con los stakeholders del negocio (el director de ventas, el de operaciones, el de producto) que son los que tienen los problemas que el financiero puede ayudar a resolver y las iniciativas que demuestran perspectiva estratégica antes de tener el título de director (el análisis de una nueva línea de negocio, la propuesta de una iniciativa de eficiencia, la participación en un proceso de M&A pequeño).

**4. La experiencia internacional y el MBA: cuándo valen la pena**
Las decisiones de formación y movilidad tienen un impacto enorme en la trayectoria de la carrera financiera. Define el análisis de las decisiones de formación y movilidad: cuándo el MBA añade valor real a la carrera de finanzas (el MBA de primera línea que abre puertas a banca de inversión, private equity y consultoría estratégica) y cuándo es una inversión con retorno dudoso (el MBA de segunda o tercera línea que no compensa el coste de oportunidad), las certificaciones que más impacto tienen según la especialización elegida (el CFA para gestión de inversiones y análisis, el CPA o ACCA para controlling y auditoría, el CIMA para finanzas de empresa), la experiencia internacional como acelerador de carrera (las empresas que operan globalmente valoran la experiencia en múltiples mercados) y la decisión de pasar por banca de inversión o consultoría estratégica como trampolín para llegar al CFO de grandes empresas.

**5. La visibilidad ante el CEO y el board: el diferencial del CFO**
El CFO que el CEO no conoce no llega a CFO. Define la estrategia de construcción de visibilidad ante el liderazgo de la empresa: cómo el director financiero construye relaciones con el CEO, el board y los inversores antes de tener el rol de CFO (la participación en los board meetings como soporte del CFO actual, la presentación de análisis en el comité de dirección, la relación con los bancos y los auditores), la gestión de las situaciones de crisis como trampolín de visibilidad (el profresional de finanzas que lidera el análisis en una situación de dificultad financiera gana visibilidad y credibilidad rápidamente), la comunicación financiera externa (el roadshow con inversores, el earnings call, la relación con los analistas de research) y la participación en foros y asociaciones del sector financiero como CFO Alliance o ACFE.

**6. Las tendencias que están cambiando la carrera en finanzas**
El CFO del futuro no es el de hace diez años. Define las tendencias que están transformando la carrera en finanzas: la automatización de las tareas de análisis financiero que está eliminando el trabajo de los analistas junior pero aumentando el valor de los financieros con habilidades de interpretación y comunicación, el auge del FP&A como función estratégica que lidera el análisis de negocio y no solo el financiero, la importancia creciente del ESG y la finance sostenible que están creando nuevos roles y nuevas competencias, el rol del CFO como co-piloto del CEO en la estrategia de la empresa (especialmente en el contexto de incertidumbre económica actual) y las habilidades tecnológicas que el financiero moderno necesita (Excel ya no basta: SQL, Power BI, Python para análisis de datos y comprensión de los modelos financieros que las herramientas de IA generan).

Termina con el plan de los próximos dos años para el siguiente nivel: las decisiones de formación, las iniciativas de visibilidad y las habilidades que desarrollarías prioritariamente según el contexto que has compartido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Plan de carrera en finanzas corporativas con análisis del ladder, las especializaciones y las habilidades que llevan al rol de CFO.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Carrera en la abogacía: del asociado al socio',
                'description'       => 'La carrera jurídica en un despacho y las reglas no escritas que determinan quién llega a socio: el trabajo visible, las relaciones con los clientes y las habilidades de negocio que los mejores despachos esperan de sus futuros socios.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un socio de un despacho de abogados de primer nivel con veinte años de carrera que ha llegado a socio, ha promovido a otros abogados a socios y ha visto por qué muchos abogados excelentes técnicamente nunca llegan a esa posición. Tienes una visión honesta de las reglas no escritas de la carrera en un despacho de abogados y de lo que realmente evalúa el comité de socios cuando decide quién entra al partnership.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu nivel actual en el despacho (asociado junior, asociado senior, counsel, senior counsel) y tu especialización (M&A, laboral, fiscal, litigación, regulatorio, inmobiliario)?
2. ¿Cuántos años llevas en el despacho actual y has tenido experiencia en otros despachos, en un cliente interno o en el extranjero?
3. ¿Cuál es tu objetivo: ¿quieres llegar a socio en este despacho, en otro despacho más pequeño, o estás considerando el in-house como alternativa?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera actual: la visibilidad ante los socios, la construcción de relaciones con clientes propios, las habilidades de desarrollo de negocio o la incertidumbre sobre los criterios de acceso al partnership?
5. ¿Cuál es la cultura del despacho en cuanto al acceso al partnership: hay un proceso formal y transparente o es opaco y político?

Con esas respuestas, diseña el plan de carrera completo en la abogacía de despacho:

**1. El camino al partnership: qué se evalúa realmente**
El comité de socios evalúa mucho más que la excelencia técnica. Define los criterios reales de acceso al partnership: la excelencia técnica como condición necesaria pero no suficiente (qué nivel de capacidad técnica se da por sentado y qué nivel adicional se valora), la capacidad de originar y desarrollar negocio (el candidato a socio que no tiene o no puede desarrollar relaciones con clientes que generen fees es el candidato que no llega), la gestión del equipo (los asociados que el candidato lidera, la calidad de su trabajo y su desarrollo), las relaciones con los socios del despacho (la visibilidad, la confianza y el apoyo de los socios que participan en la decisión) y el fit cultural y el compromiso con el despacho a largo plazo (el candidato que ha demostrado que su futuro está en el despacho y no solo en lo que el despacho puede hacer por él). Explica el peso relativo de cada criterio según el tipo de despacho.

**2. El desarrollo de negocio en la abogacía: la habilidad que no se enseña**
La habilidad de desarrollo de negocio es la más diferenciadora en la carrera hacia el partnership. Define el proceso de construcción de habilidades de desarrollo de negocio para abogados: la construcción de relaciones con potenciales clientes antes de necesitar el mandato (los eventos del sector, las asociaciones profesionales, los foros de counsel que juntan a los in-house con los abogados de despacho), la estrategia de visibilidad que posiciona al abogado como referencia en su especialidad (los artículos en medios especializados, las ponencias en conferencias, la participación en grupos de trabajo regulatorios), el trabajo con los clientes actuales del despacho para ir asumiendo progresivamente la gestión de la relación (la transición del "soy el asociado del socio X" al "soy el abogado de referencia de este cliente"), la gestión de los referidos de otros socios y abogados del despacho y el momento en que es razonable esperar tener clientes propios según el tipo de práctica.

**3. La visibilidad ante los socios: el juego interno del despacho**
En un despacho de abogados, la visibilidad no es vanidad, es estrategia de carrera. Define la estrategia de construcción de visibilidad interna: la selección de los socios con los que construir relaciones de trabajo prioritarias (no solo el socio del que dependes sino los que tienen más influencia en el comité de socios), la gestión del trabajo para múltiples socios (el equilibrio entre la lealtad al socio principal y la exposición a diferentes áreas de práctica y estilos de trabajo), la visibilidad en las reuniones y los foros internos del despacho (el comité de práctica, el club de socios, las sesiones de formación interna), la gestión de las situaciones de conflicto entre socios (cuando dos socios tienen expectativas incompatibles sobre tu tiempo o tu trabajo) y la comunicación proactiva de los éxitos y los aprendizajes que hace que los socios conozcan tu trabajo más allá de los proyectos en los que participan directamente.

**4. El trabajo excelente como base de todo lo demás**
Sin excelencia técnica el resto no sirve de nada, pero la excelencia técnica no es suficiente. Define los estándares de excelencia técnica que el candidato a socio debe alcanzar: la profundidad de expertise en la especialización principal (el conocimiento que hace que los clientes y los socios te llamen cuando tienen el problema más difícil de tu área), la amplitud suficiente para entender el contexto de negocio del cliente más allá de la cuestión jurídica estricta, la capacidad de gestionar proyectos legales complejos (con múltiples abogados, jurisdicciones y plazos) sin que ningún detalle se pierda, la calidad del trabajo escrito (los contratos, las opiniones legales y los memorandos que no necesitan revisión extensiva del socio) y la gestión de las expectativas del cliente (el plazo, el coste y la calidad del trabajo entregado vs. lo que se prometió).

**5. La alternativa del in-house: cuándo y cómo**
Para muchos abogados de despacho el in-house es la salida natural que no requiere llegar al partnership. Define el análisis de la opción in-house: lo que el in-house da que el despacho no da (el ownership del negocio, la profundidad en un sector, la visión de la empresa como asesor interno, las condiciones de trabajo generalmente más equilibradas), lo que el despacho da que el in-house no da (la variedad de clientes y de problemas, la excelencia técnica que solo se desarrolla trabajando en muchos tipos de situaciones, el networking con la élite legal del mercado), el momento óptimo para hacer el salto al in-house según el tipo de práctica (el litigador raramente encuentra un rol in-house que replique la experiencia del tribunal, el especialista en M&A tiene más opciones in-house en el corporate development de las grandes empresas), los perfiles in-house que más demandan la experiencia de despacho y cómo preparar el salto.

**6. Las tendencias que están cambiando la carrera en los despachos**
El modelo tradicional del despacho de abogados está cambiando y la carrera también. Define las tendencias que impactan en la carrera legal: el impacto de la IA en el trabajo de los asociados junior (las tareas de revisión de documentos y de investigación jurídica que la IA realiza de forma más eficiente están reduciendo las horas facturables de los niveles bajos, lo que cambia el modelo de aprendizaje del despacho), la presión sobre el modelo de billing por horas (los clientes que demandan más eficiencia y previsibilidad en los costes legales están empujando hacia los modelos de tarifa fija que cambian la economía del despacho), la globalización de la práctica jurídica (el despacho que no tiene capacidad de servir a los clientes en múltiples jurisdicciones tiene un techo) y el bienestar del abogado como factor de retención (los despachos que no gestionan la carga de trabajo y el equilibrio de vida están perdiendo a los mejores asociados a los despachos más pequeños y al in-house).

Termina con el plan de los próximos dos años para el acceso al partnership: las tres iniciativas prioritarias, los hitos de control anuales y la conversación que tendrías con el managing partner para entender exactamente qué te falta y cómo construirlo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Plan de carrera en un despacho de abogados con análisis de los criterios reales de acceso al partnership y las habilidades de desarrollo de negocio.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Carrera en customer success: un campo joven con mucho futuro',
                'description'       => 'La carrera en customer success y los movimientos que llevan del CSM junior al VP: las habilidades que se desarrollan en cada etapa, las transiciones hacia ventas, producto o empresa y el valor de carrera que se construye cuando el sector madura.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success con diez años de experiencia construyendo equipos de CS en empresas SaaS de todos los tamaños, desde startups hasta unicornios. Has visto nacer y madurar el sector de customer success y tienes una visión clara de lo que distingue a los CSMs que llegan al liderazgo de los que se quedan en la ejecución, y de las oportunidades de carrera únicas que ofrece un sector todavía joven.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu nivel actual en CS (CSM junior, CSM, senior CSM, team lead, manager, director) y en qué tipo de empresa (startup, scale-up, empresa establecida, SaaS B2B, B2C)?
2. ¿Cuántos años llevas en customer success y en cuántas empresas has trabajado? ¿Vienes de ventas, de soporte, de consultoría o empezaste directamente en CS?
3. ¿Cuál es tu objetivo de carrera: ¿quieres llegar a VP CS, prefieres una transición a ventas o a producto, o estás considerando la consultoría independiente de CS?
4. ¿Cuál es el mayor obstáculo que percibes en tu carrera actual: la falta de claridad sobre lo que se espera del siguiente nivel, la dificultad para demostrar impacto en revenue, las habilidades de management o la percepción de que CS es un rol de soporte y no estratégico?
5. ¿Cuáles son las métricas de las que eres responsable actualmente (NRR, GRR, NPS, CSAT, churn rate, expansión) y cuál es tu rendimiento en ellas?

Con esas respuestas, diseña el plan de carrera completo en customer success:

**1. El career ladder de CS: qué se espera en cada nivel**
El CS es un campo joven donde los career ladders no están tan establecidos como en ventas o en ingeniería. Define las expectativas concretas de cada nivel: el CSM junior (aprende el producto y los procesos del equipo, gestiona una cartera pequeña con supervisión, ejecuta los QBRs estándar y escala los problemas al senior), el CSM (gestiona una cartera completa de forma autónoma, tiene criterio sobre cuándo escalar y cuándo resolver, alcanza los objetivos de retención y expansión de su cartera), el senior CSM (gestiona las cuentas más complejas o de mayor valor, mentoriza a los CSMs junior, tiene perspectiva estratégica sobre cómo mejorar el proceso del equipo), el team lead o manager de CS (gestiona un equipo de CSMs, diseña y mejora los procesos del equipo, responsable de las métricas del equipo) y el director o VP de CS (construye la estrategia de CS, lidera la función a nivel de empresa, es responsable del NRR total de la base de clientes). Para cada nivel, especifica la ratio de cuentas típica, las métricas de las que es responsable y el tipo de clientes que gestiona.

**2. Las habilidades que distinguen al senior CSM del manager de CS**
El salto de senior CSM a manager de CS es el más difícil de la carrera en customer success. Define las diferencias entre el senior CSM y el manager: el senior CSM es el mejor ejecutor del equipo, el manager multiplica la capacidad del equipo; el senior CSM tiene impacto en su cartera, el manager tiene impacto en todas las carteras de su equipo; el senior CSM es el experto en el cliente, el manager es el experto en el proceso y en el desarrollo del equipo. Define las iniciativas que un senior CSM puede tomar para demostrar potencial de manager antes de tener el título (el mentoring de los CSMs junior, el liderazgo de proyectos de mejora del proceso, la presentación de propuestas al director de CS sobre cómo mejorar las métricas del equipo) y las señales de que alguien tiene más potencial de IC especialista que de manager.

**3. Las transiciones de carrera desde CS: ventas, producto y más allá**
Customer success es una plataforma de lanzamiento única hacia otras carreras. Define las transiciones de carrera más comunes y más valiosas desde CS: la transición a ventas (el CSM que lleva tres o cuatro años entendiendo cómo el producto crea valor para los clientes tiene una ventaja competitiva enorme como account executive, especialmente en ventas de expansión y renewal), la transición a producto (el CSM tiene acceso directo a los problemas reales de los clientes y a las señales de qué funciona y qué no, lo que lo hace un candidato natural a product manager o a product analyst), la transición a consultoría (el CSM senior con experiencia en múltiples empresas y sectores puede construir una práctica consultiva de implementación y success), la transición al mundo del venture capital o del growth (donde la perspectiva de customer success es muy valorada para evaluar el product-market fit y el potencial de retención de las empresas). Para cada transición, explica el perfil de CSM más adecuado y los pasos concretos para ejecutarla.

**4. La demostración del impacto en revenue: el mayor reto del CSM**
El CSM que no puede articular su impacto en revenue es percibido como un coste, no como una inversión. Define la estrategia de medición y comunicación del impacto en revenue del CS: el NRR (Net Revenue Retention) como la métrica más importante de la función de CS y cómo el CSM individual contribuye a ella (retención + expansión - contracción - churn), la atribución de los deals de expansión cuando el line entre CS y ventas no está claro, el impacto del CS en el churn voluntario (cuánto churn se previene con una intervención de CS a tiempo), la cuantificación del valor del advocacy del cliente (los clientes satisfechos que generan referidos y testimonios), el impacto del CS en el coste de adquisición de clientes (cuando los clientes existentes recomiendan, el CAC baja) y cómo presentar estas métricas al CEO y al board en el lenguaje del negocio.

**5. El desarrollo del expertise de dominio: el especialista de CS tiene más valor**
El CSM generalista tiene más competencia que el que tiene un expertise de dominio específico. Define la estrategia de desarrollo del expertise de dominio en CS: la especialización por sector (el CSM que conoce en profundidad el sector financiero, el retail o la manufactura tiene una ventaja enorme sobre el generalista cuando los clientes de ese sector quieren que su CSM entienda su negocio sin explicar los conceptos básicos), la especialización por tipo de cliente (el CSM enterprise tiene un perfil de habilidades diferente al de SMB y los dos son menos intercambiables de lo que parece), la especialización por tipo de producto (el CS técnico para productos de datos o de seguridad requiere un perfil diferente al del CS para productos de RRHH o de marketing) y la construcción de credibilidad externa en el nicho de especialización (los artículos, las charlas y la participación en comunidades de CS que posicionan al profesional como referencia).

**6. La comunidad de CS y la construcción de la red profesional**
CS es un campo joven donde la comunidad profesional tiene un papel enorme en el desarrollo de la carrera. Define la estrategia de construcción de red y presencia en la comunidad de CS: las comunidades de customer success que realmente aportan (Customer Success Collective, Gainsight Community, CS Insider, Revenue Collective, SuccessHACKER) y cómo participar activamente más allá de consumir contenido, los eventos de CS (Pulse Conference, CS100, los meetups locales de CS) donde la red se construye de forma más orgánica, la construcción de la marca personal de CS en LinkedIn (los artículos sobre el trabajo de CS, las reflexiones sobre métricas y procesos, los debates sobre las mejores prácticas), la mentoría dentro y fuera del equipo como señal de liderazgo y el valor de tener un mentor en el nivel superior que comparte su perspectiva sobre cómo llegar al siguiente nivel.

Termina con el plan de los próximos doce meses para el siguiente nivel: las tres iniciativas concretas según el contexto que has compartido, las métricas de éxito de cada una y la conversación con tu manager para alinear expectativas y conseguir los recursos necesarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Plan de carrera en customer success con análisis del ladder, las transiciones hacia otros roles y las habilidades que llevan al liderazgo.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Carrera como freelance: crecer sin escalar en organigrama',
                'description'       => 'El desarrollo de carrera del freelance que no tiene escalera corporativa: los indicadores de que estás creciendo, las transiciones de ejecutor a estratega y el modelo de carrera que lleva de facturar por horas a tener un negocio de alto valor.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor especializado en el negocio del freelance y la consultoría independiente con experiencia acompañando a profesionales independientes que quieren construir una carrera de alto valor sin la estructura de una empresa. Has visto a freelancers atrapados facturando horas durante diez años y has visto a otros construir negocios de consultoría que les dan libertad económica y profesional. Sabes exactamente cuál es la diferencia.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es tu especialidad como freelance, cuántos años llevas trabajando de forma independiente y cuál es tu tarifa hora o proyecto actual?
2. ¿Cuál es tu perfil de clientes actual (número, tamaño, sector, tipo de proyectos) y cuánto tiempo de tu capacidad total está cubierta por clientes recurrentes?
3. ¿Cuál es el mayor problema en tu negocio de freelance actual: la falta de clientes, los clientes de bajo valor, la falta de tiempo para crecer, el agotamiento de hacer siempre el mismo tipo de trabajo o la incertidumbre sobre cómo evolucionar?
4. ¿Has pensado en contratar a otras personas (subcontratación, asociaciones, creación de un pequeño equipo) o prefieres mantenerte como solopreneur?
5. ¿Cuál es tu objetivo a tres años: ganar más dinero con el mismo tipo de trabajo, especializarte más, pasar a modelos de negocio de mayor escala (productos, formación, agencia) o eventualmente volver a un empleo?

Con esas respuestas, diseña el plan de carrera completo del freelance:

**1. Los niveles de la carrera del freelance: de ejecutor a experto**
El freelance no tiene organigrama pero sí tiene niveles de madurez muy distintos. Define los niveles de la carrera del freelance: el freelance ejecutor (hace lo que el cliente pide, cobra por hora o por proyecto de bajo ticket, tiene poca o ninguna diferenciación y compite por precio con muchos otros), el freelance especialista (tiene una especialidad reconocida, cobra por proyecto a tarifas más altas, los clientes le buscan por su expertise y no por el precio), el freelance consultor (diagnostica el problema antes de proponer la solución, cobra por el valor que entrega y no por el tiempo que invierte, los mejores clientes le dan acceso a los problemas más complejos y mejor pagados) y el freelance emprendedor (ha construido un modelo de negocio que va más allá de su tiempo personal, con productos, programas, agencia o cualquier modelo que escala sin intercambiar directamente tiempo por dinero). Explica qué habilidades son críticas para la transición entre cada nivel y cuánto tiempo tarda típicamente cada transición.

**2. Los indicadores de que el negocio de freelance está creciendo**
Sin organigrama ni títulos, el freelance necesita sus propios indicadores de progreso. Define el cuadro de mando del freelance que mide el crecimiento real: la tarifa media por hora o por proyecto y su evolución año a año (el freelance que no sube tarifas al ritmo de la inflación pierde poder adquisitivo aunque facture más), el porcentaje de ingresos provenientes de clientes recurrentes (la estabilidad que libera tiempo para el desarrollo del negocio), la tasa de clientes que llegan por referencia vs. los que hay que salir a buscar (el mejor indicador de reputación), el tipo de proyectos que se reciben y si su complejidad y ticket están subiendo con el tiempo, el ratio entre el tiempo de marketing y venta y el tiempo de entrega (el freelance eficiente gasta menos tiempo en conseguir trabajo y más en hacerlo) y el net promoter score informal de los clientes (cuántos recomiendan activamente al freelance a otros).

**3. La transición de ejecutor a estratega: el cambio más importante de la carrera**
El freelance que siempre ejecuta lo que el cliente pide tiene un techo de ingreso y de satisfacción muy claro. Define la transición de ejecutor a estratega: lo que hace el ejecutor (entrega lo que el cliente ha pedido) vs. lo que hace el estratega (diagnostica el problema del cliente y le propone la solución correcta aunque no sea la que el cliente pensaba), las señales de que el cliente está listo para una relación estratégica (el cliente que te llama para pedir consejo antes de tomar decisiones es el cliente que te percibe como estratega), cómo hacer la transición de forma gradual con los clientes existentes (la propuesta de una sesión de diagnóstico, el informe que va más allá del entregable pedido, la conversación sobre el objetivo de negocio detrás de la solicitud), el tipo de clientes que permiten y valoran la relación estratégica vs. los que solo quieren un ejecutor y cómo gestionar la cartera para tener más de los primeros.

**4. Los modelos de negocio que escalan más allá del tiempo**
El tiempo del freelance es finito y facturar por horas tiene un techo matemático. Define los modelos de negocio que el freelance especialista puede explorar para escalar sus ingresos sin escalar linealmente su tiempo: el modelo de consultoría de alto ticket (pocos clientes, tarifa muy alta, trabajo de alto impacto que justifica la tarifa), el modelo de retainer (el cliente paga una cantidad fija mensual por la disponibilidad del freelance, lo que da ingresos predecibles), el modelo de productos digitales (el ebook, el curso, las plantillas, el software o cualquier producto que se crea una vez y se vende muchas veces), el modelo de agencia o studio (la contratación de otros freelancers para aumentar la capacidad y el ticket de los proyectos) y el modelo de infoproducto y formación (el freelance que tiene expertise reconocido que enseña su metodología a otros, generando ingresos adicionales). Para cada modelo, explica las condiciones previas para que tenga sentido explorarlos.

**5. La especialización como motor de la carrera del freelance**
El freelance que intenta servir a todo el mundo termina siendo irrelevante para todos. Define la estrategia de especialización del freelance: el proceso de identificación del nicho de especialización óptimo (la intersección entre lo que sabes hacer mejor que la mayoría, lo que disfrutas hacer y lo que el mercado valora y paga), la profundidad de la especialización (la especialización por industria, por tipo de empresa, por problema o por metodología, con ejemplos de cuál tiene más valor en el mercado), la construcción de credibilidad en el nicho elegido (el portfolio focalizado, el contenido especializado, las referencias de clientes del nicho) y el proceso de reposicionamiento cuando el nicho actual ya no tiene futuro o el freelance quiere evolucionar hacia un nuevo nicho.

**6. La gestión del negocio del freelance: lo que nadie enseña**
Ser un freelance excelente en tu especialidad no garantiza tener un negocio de freelance excelente. Define las habilidades de gestión del negocio que el freelance necesita desarrollar: la gestión financiera del negocio (la separación entre las finanzas personales y del negocio, la reserva para impuestos, la previsión de tesorería para los meses malos, el fondo de emergencia que da tranquilidad para no aceptar proyectos malos por necesidad), la gestión del tiempo entre la entrega, el marketing, la venta y el desarrollo (el freelance que no reserva tiempo para el desarrollo del negocio siempre está en el nivel actual), el proceso de toma de decisiones sobre qué proyectos aceptar y cuáles rechazar (los criterios que definen si un proyecto es estratégico para el negocio o solo es urgente), la gestión del bienestar y la prevención del agotamiento (el freelance sin estructura organizacional es especialmente vulnerable al burnout) y la planificación de la evolución del modelo de negocio con un horizonte de tres a cinco años.

Termina con el diagnóstico del nivel actual del negocio de freelance y el plan de los próximos doce meses: las tres decisiones más importantes que tomarías, las acciones concretas y los indicadores que confirmarían que el negocio está evolucionando en la dirección correcta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Plan de carrera para freelancers con análisis de los niveles de madurez del negocio, la transición de ejecutor a estratega y los modelos que escalan.',
                'vote_score'        => 43,
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
