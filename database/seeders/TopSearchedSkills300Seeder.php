<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills300Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'CMO transformacional: liderar el cambio cultural del marketing en la organización',
                'description'      => 'Desarrolla las competencias de liderazgo transformacional como CMO: cómo cambiar la mentalidad del equipo, influir en el C-suite y convertir marketing en motor estratégico del negocio.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo especializado en el desarrollo de directivos de marketing (CMOs, VPs de Marketing, directores de marketing) con experiencia trabajando con líderes en procesos de transformación organizacional. Has acompañado a CMOs en la transición de gestionar un departamento funcional a liderar el cambio cultural y estratégico de toda la organización.

Voy a compartirte mi situación como líder de marketing y necesito que me ayudes a desarrollar las competencias de liderazgo transformacional que necesito para llevar mi función al siguiente nivel.

**Mi contexto:**
- Mi rol actual: [CMO, VP Marketing, Director de Marketing]
- Tipo de empresa: [startup, scale-up, corporación, empresa familiar]
- Tamaño del equipo de marketing: [número de personas bajo mi responsabilidad]
- Mi principal desafío de liderazgo: [equipo reactivo, falta de influencia en el C-suite, marketing visto como gasto no como inversión, cultura de silos, resistencia al cambio, etc.]
- Lo que funciona bien en mi liderazgo actual: [tus fortalezas genuinas como líder]
- Lo que quiero cambiar en los próximos doce meses: [objetivos de desarrollo personal]

**Lo que necesito:**

Primero, ayúdame a entender qué significa el liderazgo transformacional en el contexto específico de un CMO:
- La diferencia entre el CMO transaccional (gestiona el presupuesto, supervisa las campañas, reporta métricas) y el CMO transformacional (cambia cómo la organización piensa sobre el cliente, el mercado y el crecimiento)
- Las tres transiciones más difíciles del CMO: de ejecutor a estratega, de gestor a líder de pensamiento, de dueño del canal a arquitecto de la experiencia del cliente
- Por qué el marketing tiene históricamente problemas de influencia en el C-suite y cómo un CMO transformacional rompe ese patrón
- El riesgo de la transformación prematura: cuándo el contexto organizacional no está preparado para un CMO transformacional y qué hacer en ese caso

Segundo, diseña mi plan de influencia en el C-suite y el consejo:
- Cómo traduzco el impacto del marketing al lenguaje del CEO (crecimiento), del CFO (rentabilidad), del COO (eficiencia) y del CRO (pipeline)
- El modelo de reporting que conecta las métricas de marketing con los indicadores de negocio que le importan a la junta
- Cómo construyo coaliciones internas: los aliados naturales del CMO dentro del C-suite y cómo los activo
- La gestión de las expectativas: cómo educo a mis pares sobre los tiempos del marketing sin perder credibilidad

Tercero, diseña el plan de transformación del equipo de marketing:
- El diagnóstico de madurez del equipo: cómo evalúo dónde está mi equipo hoy en términos de mentalidad, capacidades y cultura
- La visión del equipo que quiero construir: cómo comunico a dónde vamos de forma que inspire sin generar ansiedad
- La gestión del talento en la transformación: quién tiene el potencial de crecer al siguiente nivel, quién no encajará en el equipo que necesito construir
- El cambio de mentalidad: cómo paso de un equipo que ejecuta planes a uno que experimenta, mide y aprende

Cuarto, dame el framework de toma de decisiones como CMO transformacional:
- Cómo priorizo entre urgente (demandas del negocio a corto plazo) e importante (construcción de capacidades a largo plazo)
- Cómo gestiono la tensión entre el rendimiento trimestral y la inversión en marca a largo plazo
- Mi proceso de decisión sobre dónde externalizar y dónde construir capacidad interna
- Cómo gestiono mi propio tiempo para no quedar atrapado en la ejecución y mantener el espacio estratégico

Quinto, dame el plan de desarrollo personal como líder:
- Las tres o cuatro competencias de liderazgo que más impacto tendrían si las desarrollara en los próximos doce meses
- Los recursos (mentores, comunidades, libros, experiencias) que me recomendarías para mi situación específica
- Cómo construyo mi propia marca como líder de pensamiento en marketing, lo que amplifica mi influencia dentro y fuera de la organización
- Los indicadores de que estoy progresando como líder transformacional más allá de las métricas de negocio

Dame un plan concreto y honesto. Si hay aspectos de mi situación que requieren un planteamiento diferente al transformacional, dímelo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar competencias de liderazgo transformacional como CMO para influir estratégicamente en la organización',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Engineering leadership transformacional: de equipo técnico a motor de innovación',
                'description'      => 'Desarrolla las competencias de liderazgo transformacional como CTO o director de ingeniería: construye equipos de alto rendimiento, cambia la cultura técnica y posiciona la ingeniería como ventaja competitiva.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo con especialización en liderazgo técnico, habiendo trabajado con CTOs, VPs de Ingeniería y directores técnicos en empresas de tecnología desde startups hasta corporaciones. Entiendes los retos únicos del liderazgo en ingeniería: gestionar la tensión entre velocidad y calidad, entre deuda técnica y features nuevas, entre la autonomía del equipo y la alineación con el negocio.

Voy a compartirte mi situación como líder técnico y necesito que me ayudes a desarrollar las competencias de liderazgo transformacional que me llevarán de gestionar un equipo técnico a construir una organización de ingeniería que sea una ventaja competitiva real del negocio.

**Mi contexto:**
- Mi rol actual: [CTO, VP Engineering, Director de Ingeniería, Engineering Manager]
- Tipo de empresa: [startup en crecimiento, scale-up, empresa establecida en transformación digital]
- Tamaño del equipo técnico: [número de ingenieros]
- Mi perfil de origen: [vengo de ser IC (individual contributor), de consultoría, de gestión de producto, etc.]
- Mi principal desafío de liderazgo técnico: [escalar el equipo sin perder la cultura, deuda técnica que paraliza el negocio, falta de influencia en decisiones de producto, dificultad para retener talento senior, etc.]
- Lo que me preocupa de mi propio liderazgo: [la transición del código al management, cómo delegado sin perder el pulso técnico, cómo construyo el equipo que necesito, etc.]

**Lo que necesito:**

Primero, ayúdame a entender qué significa ser un engineering leader transformacional:
- La transición más difícil: de tu mejor ingeniero a líder de ingenieros. Qué tienes que dejar de hacer y qué tienes que empezar a hacer
- El riesgo del micromanagement técnico: cuando el líder técnico que fue el mejor IC no puede soltar el teclado y se convierte en cuello de botella
- La diferencia entre el CTO que gestiona el backlog técnico y el CTO que construye la capacidad de ingeniería que el negocio necesitará en tres años
- Por qué la influencia del líder de ingeniería sobre la estrategia de negocio depende de su capacidad para comunicar en términos de negocio, no solo técnicos

Segundo, diseña el plan de construcción del equipo de ingeniería de alto rendimiento:
- El modelo de equipo que quiero construir: qué tipo de cultura técnica, qué principios de ingeniería, qué estándares de calidad
- La arquitectura de talento: cómo equilibro entre especialistas profundos y generalistas versátiles. Qué roles no puedo permitirme no tener
- El proceso de reclutamiento como ventaja competitiva: cómo atraigo a ingenieros que no solo quieren dinero sino construir algo que importe
- El desarrollo del equipo: cómo creo un entorno donde los ingenieros crecen más rápido que en cualquier otro lugar

Tercero, diseña el plan de transformación de la cultura técnica:
- El diagnóstico de la cultura técnica actual: cómo evalúo la salud de la organización de ingeniería (más allá de la velocidad de sprint y el coverage de tests)
- Los rituales de cultura técnica: code reviews, post-mortems sin culpa, decisiones de arquitectura colaborativas, tiempo para la exploración técnica
- La gestión de la deuda técnica como conversación de negocio: cómo explico al CEO y al board el coste de la deuda técnica en términos de velocidad de negocio perdida
- La cultura de experimentación: cómo creo un ambiente donde fallar rápido y aprender es más valorado que no fallar nunca

Cuarto, diseña mi plan de influencia estratégica:
- Cómo me siento en la mesa de decisiones estratégicas como representante de la ingeniería, no solo como ejecutor de las decisiones del producto
- El lenguaje del negocio que necesito dominar: cómo traduzco decisiones técnicas en términos de riesgo, inversión y retorno
- La relación con el CEO, el CPO y el CFO: cómo construyo alianzas que dan a la ingeniería la influencia que merece
- Cómo gestiono las tensiones clásicas: ingeniería vs producto (¿quién decide qué construir?), velocidad vs calidad, construir vs comprar

Quinto, dame el plan de desarrollo personal como engineering leader:
- Las competencias no técnicas que más necesito desarrollar: comunicación ejecutiva, coaching de ingenieros, gestión del cambio
- Cómo mantengo mi credibilidad técnica sin convertirme en cuello de botella del código
- Mi plan para construir presencia como thought leader técnico dentro y fuera de la empresa
- Los indicadores de que mi liderazgo está transformando la organización de ingeniería

Sé directo sobre los retos específicos que presenta mi contexto y las trampas más comunes en las que caen los líderes técnicos en transformación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar competencias de liderazgo transformacional como CTO para convertir ingeniería en ventaja competitiva',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design leadership transformacional: cambiar cómo la organización ve el diseño',
                'description'      => 'Desarrolla las competencias de liderazgo transformacional como VP de Diseño o CDO: cómo elevar el diseño de función de producción a capacidad estratégica que influye en el producto y el negocio.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach especializado en liderazgo de diseño con experiencia trabajando con VPs de Diseño, Chief Design Officers y directores de experiencia de usuario en empresas de tecnología, retail, servicios financieros y startups. Entiendes el reto único del diseñador que llega al liderazgo: ha construido su carrera sobre el hacer, y ahora tiene que aprender a liderar, influir y transformar la percepción del diseño en la organización.

Voy a compartirte mi situación como líder de diseño y necesito que me ayudes a desarrollar el liderazgo transformacional que me permita cambiar cómo mi organización entiende y valora el diseño.

**Mi contexto:**
- Mi rol actual: [VP de Diseño, CDO, Director de UX, Design Lead]
- Tipo de empresa: [startup, empresa de producto, corporación en transformación digital]
- Tamaño del equipo de diseño: [número de diseñadores bajo mi responsabilidad]
- Mi principal desafío: [diseño visto como estética no como estrategia, falta de influencia en las decisiones de producto, equipo de diseño infravalorado, investigación de usuario que no se incorpora en decisiones, etc.]
- Lo que me preocupa de mi liderazgo: [cómo construyo el caso de negocio del diseño, cómo gestiono a ingenieros y PMs que no valoran el diseño, cómo desarrollo mi equipo, etc.]

**Lo que necesito:**

Primero, ayúdame a entender qué significa el design leadership transformacional:
- La madurez del diseño en las organizaciones: el modelo de madurez que va desde el diseño como producción gráfica hasta el diseño como capacidad estratégica. Dónde está mi organización y cómo la llevo al siguiente nivel
- El rol del design leader como educador: cómo cambio la mentalidad de toda la organización sobre qué hace el diseño y qué valor aporta
- La diferencia entre el diseñador que diseña y el líder de diseño que crea las condiciones para que otros diseñen mejor
- Por qué el design leadership transformacional requiere dominar el lenguaje del negocio: ROI del diseño, coste de la experiencia deficiente, valor de la retención

Segundo, diseña el plan para elevar el diseño a capacidad estratégica:
- Cómo construyo el caso de negocio del diseño en términos cuantitativos: estudios de impacto del diseño en conversión, retención y NPS. Cómo consigo esos datos en mi empresa
- El asiento en la mesa de decisiones: cómo me posiciono en las conversaciones de producto y negocio donde el diseño debe estar desde el inicio, no al final
- La relación con el CPO, el CTO y el CEO: cómo construyo la confianza y la influencia que necesito para que el diseño tenga peso real
- El prototipado estratégico: cómo uso el diseño para explorar el futuro del negocio antes de que el negocio lo haya conceptualizado

Tercero, diseña el plan de construcción del equipo de diseño de alta madurez:
- El modelo del equipo que quiero construir: qué roles necesito (UX Research, Diseño de Producto, Diseño de Sistemas, Content Design, etc.) y cómo los estructuro
- La cultura del equipo de diseño: cómo creo un entorno de feedback honesto, experimentación y curiosidad sin crear ego o competencia interna
- El design system como proyecto de liderazgo: cómo la construcción de un sistema de diseño es un ejercicio de influencia sobre toda la organización de producto
- El desarrollo del equipo: cómo creo caminos de crecimiento para diseñadores que quieren profundizar en su craft y para los que quieren crecer en liderazgo

Cuarto, diseña el plan de transformación cultural del diseño:
- Los rituales de diseño que transforman la cultura de la organización: design critiques abiertas, design reviews con el liderazgo, sesiones de investigación con usuarios a las que invito a ingenieros y PMs
- Cómo gestiono la resistencia al diseño: el PM que bypasea al diseñador, el ingeniero que implementa sin revisar, el CEO que cambia el diseño a última hora por preferencia personal
- Cómo distribuyo la mentalidad de diseño en toda la organización: no quiero ser el único que piensa en el usuario

Quinto, dame el plan de desarrollo personal como design leader:
- Las competencias de liderazgo que más necesito desarrollar: comunicación ejecutiva, influencia sin autoridad, construcción de equipos
- Cómo mantengo mi credibilidad como diseñador sin convertirme en cuello de botella del diseño
- Cómo construyo mi marca como design leader dentro y fuera de la organización
- Los indicadores de que mi liderazgo está transformando la madurez de diseño en la organización

Dame recomendaciones específicas para mi contexto y señala las trampas más frecuentes en las que caen los design leaders en transformación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Elevar el diseño de función de producción a capacidad estratégica que influye en las decisiones de negocio',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales leadership transformacional: redefinir la cultura comercial desde arriba',
                'description'      => 'Desarrolla el liderazgo transformacional como VP de Ventas o CRO: cómo construir una cultura comercial de alto rendimiento, cambiar la mentalidad del equipo y convertir ventas en una máquina predecible.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo especializado en liderazgo de ventas con experiencia trabajando con VPs de Ventas, CROs y directores comerciales en empresas de SaaS, servicios profesionales y empresas de alto crecimiento. Has acompañado a líderes comerciales en la construcción de organizaciones de ventas de alto rendimiento, la transformación de culturas comerciales disfuncionales y el desarrollo de equipos que venden de forma predecible y escalable.

Voy a compartirte mi situación como líder de ventas y necesito que me ayudes a desarrollar el liderazgo transformacional que me permita redefinir la cultura comercial de mi organización.

**Mi contexto:**
- Mi rol actual: [VP de Ventas, CRO, Director Comercial, Sales Manager]
- Tipo de empresa: [SaaS B2B, servicios profesionales, empresa industrial, etc.]
- Tamaño del equipo comercial: [número de comerciales bajo mi responsabilidad]
- Métricas actuales: [cuota de equipo, tasa de consecución, ciclo de venta medio, win rate]
- Mi principal desafío de liderazgo: [equipo con rendimiento desigual, cultura de hero sellers que no se puede escalar, falta de proceso, churn alto de comerciales, falta de predictibilidad en el forecast, etc.]
- Lo que me preocupa de mi propio liderazgo: [cómo dejo de ser el mejor vendedor del equipo para ser el mejor líder, cómo construyo el equipo que necesito, cómo genero confianza con el C-suite, etc.]

**Lo que necesito:**

Primero, ayúdame a entender qué significa el liderazgo transformacional en ventas:
- La transición del mejor vendedor al líder de vendedores: qué debes dejar de hacer y qué debes empezar a hacer cuando asumes el rol de director
- El modelo de liderazgo situacional en ventas: cómo lidero de forma diferente a un SDR junior, un AE con tres años de experiencia y un Key Account Manager senior
- La diferencia entre el director que gestiona el forecast y el que construye la cultura que hace que el forecast sea predecible
- Por qué la predictibilidad del negocio comercial empieza por la cultura, no por el CRM

Segundo, diseña el plan de transformación de la cultura comercial:
- El diagnóstico de la cultura actual: las señales de una cultura comercial disfuncional (hero sellers, sandbagging, finger-pointing, falta de coaching, competencia destructiva entre compañeros)
- La visión de la cultura que quiero construir: cómo la defino y cómo la comunico al equipo sin que suene a powerpoint corporativo
- Los comportamientos que voy a modelar como líder: la cultura comercial empieza en lo que el director hace, no en lo que dice
- Los rituales de cultura comercial: las reuniones, los celebraciones de victorias, los análisis de pérdidas, los procesos de coaching que instalan la cultura en el día a día

Tercero, diseña el sistema de gestión del rendimiento comercial:
- El sistema de coaching: cómo dedico tiempo de calidad a cada miembro del equipo en lugar de solo revisar el pipeline
- La gestión de los bottom performers: cuánto tiempo invierto en alguien que no está rindiendo antes de tomar la decisión de que no hay encaje
- La retención del talento top: cómo estructuro el rol, el territorio, los incentivos y el crecimiento para que los mejores no se vayan
- La contratación como decisión cultural: cómo el proceso de selección ya instala la cultura que quiero construir

Cuarto, diseña el plan de previsibilidad del negocio comercial:
- El proceso de ventas: cómo estandarizo el proceso sin matar la autonomía del vendedor. La diferencia entre un proceso como guía y un proceso como camisa de fuerza
- La higiene del CRM: cómo consigo que el equipo use el CRM correctamente no por obligación sino porque le ayuda a vender más
- El forecast: cómo construyo un modelo de forecast que sea útil para el CFO y el CEO sin convertir las revisiones de pipeline en sesiones de tortura
- El sistema de métricas de leading indicators: las métricas que me dicen hoy cómo voy a estar en ventas en 90 días

Quinto, dame el plan de influencia estratégica como líder de ventas:
- Cómo me posiciono en el C-suite como architect del revenue, no solo como responsable de cumplir la cuota
- La relación con el CMO (pipeline y calidad de leads), con el CPO (feedback de mercado al roadmap) y con el CFO (modelo de ingresos y inversión en ventas)
- Cómo uso los datos de ventas para influir en la estrategia de empresa
- Mi plan de desarrollo personal como líder: las competencias que más necesito desarrollar en los próximos doce meses

Sé específico para mi contexto y señala las trampas más comunes en las que caen los líderes comerciales en transformación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar la cultura comercial y construir una organización de ventas predecible y escalable',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'CPO transformacional: construir la organización de producto que el negocio necesita',
                'description'      => 'Desarrolla el liderazgo transformacional como CPO: cómo construir la cultura de producto, alinear a la organización alrededor del cliente y convertir producto en el motor del crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo con experiencia profunda en liderazgo de producto, habiendo trabajado con CPOs, VPs de Producto y directores de producto en empresas desde startups hasta corporaciones. Entiendes la complejidad única del rol: el CPO vive en la intersección de tecnología, negocio y cliente, y tiene que liderar sin control directo sobre los recursos de ingeniería, diseño y datos que necesita para ejecutar.

Voy a compartirte mi contexto como líder de producto y necesito que me ayudes a desarrollar el liderazgo transformacional que me permita construir la organización de producto que el negocio necesita para crecer.

**Mi contexto:**
- Mi rol actual: [CPO, VP de Producto, Director de Producto, Group PM]
- Tipo de empresa: [startup, scale-up, empresa establecida en transformación]
- Tamaño de la organización de producto: [PMs, diseñadores, analistas bajo mi coordinación]
- Mi principal desafío: [falta de estrategia de producto clara, equipos de producto que ejecutan sin visión, tensión entre el roadmap de cliente y el roadmap de negocio, dificultad para demostrar el ROI del producto, etc.]
- Lo que me preocupa de mi liderazgo: [cómo construyo una visión de producto que inspire, cómo gestiono la relación con ingeniería y diseño, cómo influyo en la estrategia de negocio, etc.]

**Lo que necesito:**

Primero, ayúdame a entender el liderazgo transformacional en el contexto del CPO:
- El CPO como chief empathy officer: por qué el liderazgo de producto transformacional empieza por construir la capacidad organizacional de entender al cliente profundamente
- La transición del PM al CPO: qué debes dejar de hacer (decidir sobre features concretas) y qué debes empezar a hacer (construir el sistema que toma mejores decisiones de producto)
- La diferencia entre el CPO que gestiona el roadmap y el que construye la estrategia de producto que guía todos los roadmaps
- El CPO como arquitecto de la cultura de producto: cómo el comportamiento del líder de producto se replica en cómo los equipos toman decisiones

Segundo, diseña el plan para construir la visión y estrategia de producto:
- El proceso de construcción de la visión de producto: cómo combino la comprensión del cliente, las tendencias del mercado y los objetivos del negocio en una visión que inspire y oriente
- La estrategia de producto: cómo tomo decisiones de dónde jugar y dónde no jugar en el mercado. Qué marco estratégico me ayuda a hacer esas elecciones difíciles
- Cómo comunico la visión y la estrategia a los equipos, al C-suite y a los inversores de forma que genere alineación y compromiso
- Cómo mantengo la estrategia de producto viva: cómo la reviso, la adapto y la comunico en un entorno cambiante sin crear confusión

Tercero, diseña la arquitectura de la organización de producto:
- La estructura del equipo de producto: cómo organizo a los PMs (por producto, por cliente, por etapa del journey, por objetivo) y los trade-offs de cada modelo
- El modelo operativo de producto: cómo el equipo de producto colabora con ingeniería, diseño, datos, ventas y marketing de forma que genere alineación sin crear burocracia
- Los rituales de producto que instalan la cultura: discovery continuo, revisiones de estrategia, retrospectivas de lanzamiento, sesiones de alineación con el negocio
- El desarrollo de los PMs: cómo creo un entorno donde los product managers crecen más rápido que en cualquier otro lugar

Cuarto, diseña el plan de influencia estratégica del CPO:
- Cómo construyo la credibilidad y la influencia en el C-suite para que el producto tenga el peso que merece en las decisiones de negocio
- La relación con el CEO: cómo gestiono las expectativas, las discrepancias y la confianza en el largo plazo
- La relación con el CTO: cómo construyo una alianza que elimina la fricción entre producto e ingeniería
- La relación con el CRO y el CMO: cómo el producto y la comercialización se alinean sin que ninguno domine al otro

Quinto, dame el plan de desarrollo personal como CPO transformacional:
- Las competencias de liderazgo que más necesito desarrollar en mi situación específica
- Cómo mantengo el pulso del cliente y del producto sin convertirme en cuello de botella de las decisiones de producto
- Mi plan de desarrollo como thought leader de producto dentro y fuera de la organización
- Los indicadores de que mi liderazgo está transformando la madurez de la organización de producto

Dame un plan concreto y honesto para los próximos doce meses, con hitos claros y métricas de progreso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 48,
                'use_case'         => 'Construir la cultura de producto y la organización que convierte producto en motor de crecimiento del negocio',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'CHRO transformacional: liderar la transformación de la función de personas',
                'description'      => 'Desarrolla el liderazgo transformacional como CHRO: cómo transformar RRHH de función administrativa a socio estratégico del negocio que impulsa el rendimiento organizacional.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo especializado en el desarrollo de directivos de personas y cultura (CHROs, VPs de People, directores de RRHH) con experiencia acompañando a líderes de la función de personas en la transformación de departamentos administrativos a socios estratégicos del negocio. Entiendes el reto singular del CHRO: liderar la función que más necesita el negocio pero que históricamente ha tenido menos influencia estratégica.

Voy a compartirte mi contexto como líder de la función de personas y necesito que me ayudes a desarrollar el liderazgo transformacional que me permita cambiar el rol de RRHH en mi organización.

**Mi contexto:**
- Mi rol actual: [CHRO, VP de People, Director de RRHH, HR Business Partner Senior]
- Tipo de empresa: [startup, scale-up, corporación, empresa familiar]
- Tamaño de la organización de personas: [número de personas en el equipo de RRHH]
- Mi principal desafío: [RRHH visto como función burocrática y de cumplimiento, falta de influencia en la estrategia de negocio, métricas de personas que no conectan con resultados de negocio, resistencia del liderazgo a invertir en cultura y talento, etc.]
- Lo que me preocupa de mi liderazgo: [cómo construyo el caso de negocio de la inversión en personas, cómo gestiono la relación con el CEO y el CFO, cómo desarrollo mi equipo de RRHH, etc.]

**Lo que necesito:**

Primero, ayúdame a entender qué significa el CHRO transformacional en el contexto actual:
- La evolución del rol de RRHH: de la función de administración de personal al socio estratégico del negocio. Dónde está el pendiente histórico de la profesión y por qué cuesta tanto avanzar
- El CHRO como arquitecto del rendimiento organizacional: cómo la estrategia de personas (talento, cultura, liderazgo, estructura) determina la capacidad del negocio para ejecutar su estrategia
- La diferencia entre el CHRO que gestiona el headcount y el que construye la organización que el negocio necesitará en tres años
- Por qué el CHRO transformacional necesita dominar el lenguaje del negocio: P&L, EBITDA, productividad por empleado, coste de rotación, ROI de formación

Segundo, diseña el plan de transformación de la función de RRHH:
- El diagnóstico de madurez de la función: dónde está mi equipo de RRHH hoy en el espectro de administrative-to-strategic
- Las capacidades que necesito construir en el equipo de RRHH: people analytics, diseño organizacional, gestión del cambio, desarrollo de liderazgo
- La tecnología de personas: cómo el HRIS, el people analytics y las herramientas de experiencia del empleado transforman la capacidad de la función
- El modelo de HR Business Partnership: cómo estructura los HRBP para que sean socios reales del negocio, no gestores de incidencias

Tercero, diseña el plan de influencia estratégica del CHRO:
- Cómo construyo el caso de negocio de la inversión en personas: el coste cuantificado de la rotación, el impacto del engagement en la productividad, el ROI de los programas de desarrollo de liderazgo
- La relación con el CEO: cómo me convierto en el consejero de confianza sobre las decisiones de organización y liderazgo
- La relación con el CFO: cómo traduzco la inversión en personas en términos financieros que el CFO pueda defender ante la junta
- La relación con el C-suite: cómo el CHRO ayuda al equipo directivo a desarrollar su propia capacidad de liderazgo

Cuarto, diseña la agenda de transformación cultural y de liderazgo:
- El diagnóstico de la cultura organizacional: cómo la evalúo con rigor, más allá de las encuestas de satisfacción anuales
- La agenda de cambio cultural: cómo identifico los comportamientos que necesito cambiar, los líderes que los modelan y los sistemas que los refuerzan o los penalizan
- El desarrollo de liderazgo como prioridad estratégica: cómo diseño un programa de desarrollo de líderes que tenga impacto real en el rendimiento del negocio
- La gestión de la sucesión: cómo construyo el banco de talento que garantiza la continuidad del negocio

Quinto, dame el plan de desarrollo personal como CHRO transformacional:
- Las competencias de liderazgo que más necesito desarrollar en mi situación específica
- Cómo construyo mi credibilidad como líder de negocio más allá de la expertise en RRHH
- Mi plan de desarrollo como thought leader en la función de personas
- Los indicadores de que mi liderazgo está transformando el impacto de RRHH en el negocio

Dame un plan honesto y específico, incluyendo las conversaciones difíciles que probablemente necesito tener para avanzar en la transformación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar la función de RRHH de administrativa a socia estratégica que impulsa el rendimiento organizacional',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'CFO transformacional: de guardián financiero a arquitecto del crecimiento',
                'description'      => 'Desarrolla el liderazgo transformacional como CFO: cómo evolucionar de controlar el pasado a construir el futuro, influir en la estrategia y convertir finanzas en ventaja competitiva del negocio.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo especializado en el desarrollo de directivos financieros (CFOs, VPs de Finanzas, directores financieros) con experiencia acompañando a líderes de la función financiera en la transición de guardián del rigor y el control hacia arquitecto del crecimiento y socio estratégico del CEO y el consejo.

Voy a compartirte mi contexto como líder financiero y necesito que me ayudes a desarrollar el liderazgo transformacional que me permita evolucionar mi rol y mi impacto en la organización.

**Mi contexto:**
- Mi rol actual: [CFO, VP de Finanzas, Director Financiero, Controller]
- Tipo de empresa: [startup con inversión, PYME, corporación, empresa familiar en crecimiento]
- Tamaño del equipo de finanzas: [número de personas en el área financiera]
- Mi principal desafío: [finanzas vistas como función de control y reporte, falta de influencia en las decisiones estratégicas de inversión y crecimiento, dificultad para que el CEO confíe en el análisis financiero para tomar decisiones de riesgo, equipo financiero reactivo y orientado al pasado, etc.]
- Lo que me preocupa: [cómo evoluciono de controller a partner estratégico, cómo construyo un equipo orientado al futuro, cómo gestiono la tensión entre control y velocidad de negocio]

**Lo que necesito:**

Primero, ayúdame a entender qué significa el CFO transformacional:
- La evolución del rol de CFO en el siglo XXI: de guardián del rigor financiero a arquitecto de la estrategia de capital y el crecimiento. Por qué este cambio es urgente en el contexto competitivo actual
- La tensión central del CFO moderno: cómo mantengo el rigor financiero y el control de riesgos sin convertirme en el freno del crecimiento
- La diferencia entre el CFO que mira el espejo retrovisor (reporting del pasado) y el que mira por el parabrisas (modelado del futuro y escenarios)
- Por qué el CFO transformacional necesita dominar la narrativa estratégica, no solo los números

Segundo, diseña el plan de transformación del equipo financiero:
- El diagnóstico de madurez: dónde está mi equipo en el espectro de transaccional a estratégico
- Las capacidades que necesito construir: FP&A avanzada, modelado de escenarios, business partnering, automatización de reporting, people management
- La tecnología financiera: cómo las herramientas de FP&A, BI y automatización transforman la capacidad del equipo para generar insights en lugar de datos
- El desarrollo del equipo: cómo creo analistas financieros que entienden el negocio, no solo las cuentas

Tercero, diseña el plan de influencia estratégica del CFO:
- Cómo construyo la relación con el CEO: el CFO como copiloto del CEO, no como su auditor. Cómo construyo esa confianza
- Mi rol en el consejo de administración y con los inversores: cómo comunico la salud financiera y la estrategia de capital de forma que genere confianza y apoyo
- La relación con el C-suite: cómo el CFO ayuda al CMO a construir el caso de inversión en marketing, al CPO a priorizar el roadmap en función del retorno, al CRO a diseñar el modelo de incentivos comerciales
- Mi posición en las decisiones de M&A, expansión y financiación: cómo me convierto en el arquitecto de la estrategia de capital del negocio

Cuarto, diseña la agenda financiera transformacional:
- El modelo de FP&A del futuro: cómo transformo el proceso de planificación de un ejercicio anual de negociación de presupuestos a un proceso continuo de asignación estratégica de recursos
- El business partnering financiero: cómo los finance business partners se convierten en socios reales de las unidades de negocio
- La automatización del reporting: cómo libero tiempo del equipo de las tareas transaccionales para invertirlo en análisis e insights
- La cultura de decisión basada en datos: cómo el CFO transforma la cultura del negocio para que las decisiones importantes tengan siempre soporte analítico riguroso

Quinto, dame el plan de desarrollo personal como CFO transformacional:
- Las competencias de liderazgo que más necesito desarrollar: comunicación ejecutiva, influencia estratégica, gestión del cambio
- Cómo construyo mi perfil como CFO moderno en el mercado: participación en consejos asesores, ponencias, publicaciones
- Los indicadores de que mi liderazgo está transformando el impacto de finanzas en el negocio
- Las conversaciones difíciles que probablemente necesito tener con el CEO o el consejo para avanzar en mi agenda

Dame un plan concreto para los próximos doce meses con hitos medibles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 48,
                'use_case'         => 'Evolucionar de CFO guardián del control a arquitecto del crecimiento y socio estratégico del CEO',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'General Counsel transformacional: el director jurídico que habilita el negocio',
                'description'      => 'Desarrolla el liderazgo transformacional como General Counsel o Director Jurídico: cómo evolucionar de asesor de riesgos a habilitador estratégico que acelera el negocio sin aumentar la exposición.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo con especialización en el desarrollo de directivos jurídicos (General Counsels, directores jurídicos, secretarios generales) con experiencia acompañando a líderes del área legal en la transición de guardianes del "no" a habilitadores estratégicos del crecimiento. Entiendes la tensión central del rol: la función jurídica existe para gestionar el riesgo, pero el exceso de cautela también es un riesgo para el negocio.

Voy a compartirte mi contexto como líder jurídico y necesito que me ayudes a desarrollar el liderazgo transformacional que me permita cambiar el rol de la función legal en mi organización.

**Mi contexto:**
- Mi rol actual: [General Counsel, Director Jurídico, Secretario General, Head of Legal]
- Tipo de empresa: [startup con inversión, scale-up, corporación, empresa regulada, empresa en expansión internacional]
- Tamaño del equipo jurídico: [abogados internos, paralegales, gestores de contratos]
- Mi principal desafío: [la función jurídica es percibida como un obstáculo al negocio, lentitud en la revisión de contratos que frena operaciones, falta de influencia en las decisiones estratégicas, presupuesto insuficiente para construir el equipo que necesito, etc.]
- Lo que me preocupa de mi liderazgo: [cómo cambio la percepción de la función legal, cómo gestiono la relación con el CEO y el C-suite, cómo construyo un equipo jurídico que añada valor de negocio]

**Lo que necesito:**

Primero, ayúdame a entender qué significa el General Counsel transformacional:
- La evolución del rol del GC: de redactor de contratos y gestor de litigios a asesor estratégico del C-suite y el consejo. Por qué este cambio es necesario en el contexto empresarial actual
- La trampa del abogado como freno: cómo la cultura del "no" destruye la credibilidad de la función legal y deja al negocio sin el asesoramiento que realmente necesita
- La diferencia entre gestionar el riesgo y eliminar el riesgo. Un negocio sin riesgo no crece: el GC transformacional ayuda a tomar riesgos calculados, no a evitarlos todos
- Por qué el GC moderno necesita hablar el lenguaje del negocio: velocidad al mercado, retorno de inversión, ventana de oportunidad, coste de oportunidad del retraso

Segundo, diseña el plan de transformación de la función jurídica:
- El diagnóstico de la función legal actual: qué parte del tiempo del equipo se dedica a trabajo transaccional de bajo valor y qué parte a asesoramiento estratégico de alto impacto
- El modelo operativo legal eficiente: cómo automatizo y proceso-ifico el trabajo transaccional (contratos estándar, compliance rutinario, gestión de marcas) para liberar capacidad para el trabajo estratégico
- La tecnología legal (legal tech): contratos inteligentes, plataformas de gestión contractual, herramientas de due diligence asistida por IA. Cómo evalúo e implemento las soluciones adecuadas para mi tamaño
- El modelo de compra de servicios externos: cómo optimizo el gasto en despachos externos para obtener más valor con el mismo o menor presupuesto

Tercero, diseña el plan de influencia estratégica del General Counsel:
- Mi asiento en el comité de dirección: cómo me posiciono como consejero estratégico, no solo como revisor de documentos. Qué aportación hago en las reuniones de estrategia que no aporta nadie más
- La relación con el CEO: cómo construyo la confianza como consejero legal de confianza que el CEO consulta antes de tomar decisiones importantes, no después de anunciarlas
- Mi rol con el consejo de administración y los accionistas: cómo gestiono la secretaría del consejo de forma que añada valor más allá de las formalidades
- La relación con los demás miembros del C-suite: cómo el GC transforma su relación con el CFO (M&A, financiación), el CPO (PI, privacidad), el CMO (publicidad, data) y el CRO (contratos comerciales)

Cuarto, diseña el plan de reducción del tiempo de ciclo legal:
- Cómo reduzco el tiempo de revisión de contratos sin aumentar el riesgo: playbooks de negociación, contratos pre-aprobados, levels of authority claros
- El proceso de escalado: qué decisiones puede tomar el negocio sin consultar a legal y cuáles requieren mi intervención
- La formación jurídica del equipo de negocio: cómo enseño a los comerciales, a los PMs y a los directivos a reconocer los riesgos legales básicos sin necesitar al abogado para cada decisión menor
- La medición de la eficiencia legal: cómo mido y reporto el tiempo de ciclo, la carga de trabajo y la satisfacción del cliente interno

Quinto, dame el plan de desarrollo personal como General Counsel transformacional:
- Las competencias no jurídicas que más impacto tendrían si las desarrollara: comunicación ejecutiva, pensamiento de negocio, gestión del cambio
- Cómo construyo mi perfil como GC moderno en el mercado: asociaciones de directores jurídicos, publicaciones, participación en consejos asesores
- Los indicadores de que la función jurídica está ganando influencia y siendo percibida como habilitadora del negocio
- Las conversaciones difíciles que probablemente tengo que tener para avanzar en mi agenda transformacional

Dame un plan específico para los primeros seis meses con acciones concretas y métricas de progreso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar la función jurídica de freno burocrático a habilitador estratégico del crecimiento del negocio',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'VP CS transformacional: crear la función de éxito del cliente que cambia el negocio',
                'description'      => 'Desarrolla el liderazgo transformacional como VP de Customer Success: construye la organización de CS que retiene, expande y convierte clientes en promotores, posicionando CS como motor de crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo especializado en el desarrollo de líderes de Customer Success (VPs de CS, Chief Customer Officers, directores de post-venta) con experiencia construyendo organizaciones de CS en empresas de SaaS B2B, plataformas y servicios profesionales. Has acompañado a líderes en la transición de gestionar el soporte reactivo a construir la función que retiene, expande y convierte a los clientes en el principal motor de crecimiento del negocio.

Voy a compartirte mi contexto como líder de Customer Success y necesito que me ayudes a desarrollar el liderazgo transformacional que me permita construir la función que mi negocio necesita.

**Mi contexto:**
- Mi rol actual: [VP de CS, Director de Customer Success, Head of CS, CCO]
- Tipo de empresa: [SaaS B2B, plataforma, servicios profesionales con componente tecnológico]
- Tamaño del equipo de CS: [número de CSMs, onboarding specialists, support]
- Métricas actuales: [Gross Retention Rate, Net Revenue Retention, NPS, CSAT]
- Mi principal desafío: [CS percibido como gasto no como inversión, churn que supera las expectativas, equipo reactivo que no hace expansion revenue, dificultad para demostrar el ROI de CS, falta de procesos escalables, etc.]
- Lo que me preocupa: [cómo posiciono CS como motor de crecimiento, cómo construyo el equipo que necesito, cómo influyo en el C-suite para conseguir los recursos que necesito]

**Lo que necesito:**

Primero, ayúdame a entender el liderazgo transformacional en Customer Success:
- La evolución de CS: de departamento de soporte reactivo a motor de Net Revenue Retention y expansión. Por qué este cambio es el más importante en el modelo de negocio de SaaS
- La diferencia entre el VP de CS que gestiona tickets y el que diseña el sistema que hace a los clientes exitosos de forma proactiva y escalable
- La métrica central del CS transformacional: por qué el NRR (Net Revenue Retention) es el KPI que unifica la retención y la expansión y cómo lo uso para conseguir recursos del C-suite
- Por qué el liderazgo de CS necesita hablar el lenguaje del CFO: LTV, payback period de la inversión en CS, coste de churn vs coste de retención

Segundo, diseña el plan de construcción de la organización de CS:
- El modelo de CS que necesito para mi segmento de clientes: high-touch para enterprise, scaled CS para mid-market, digital-led para SMB. Cómo decido el mix correcto según mi base de clientes
- Los roles que necesito construir: CSMs, onboarding, technical account management, customer education, community management. Cuáles son prioritarios según mi etapa
- El modelo de cobertura: cuántos clientes por CSM en cada segmento y cómo escalo la cobertura sin escalar linealmente el headcount
- El desarrollo del equipo de CS: qué perfil busco, cómo los onboardo, cómo los desarrollo y cómo los retengo en un mercado donde el talento de CS es escaso

Tercero, diseña la estrategia de CS proactivo y de expansión:
- El playbook de health score: cómo construyo un modelo de salud del cliente que predice el churn con suficiente antelación para intervenir
- La estrategia de onboarding: cómo diseño el onboarding para que el cliente llegue al valor en el menor tiempo posible y con el mayor grado de autonomía
- La estrategia de expansión: cómo el equipo de CS identifica y desarrolla oportunidades de upsell y cross-sell de forma que se perciba como asesoramiento, no como venta
- El programa de customer advocacy: cómo los clientes más exitosos se convierten en referencias, casos de éxito, ponentes y promotores activos

Cuarto, diseña el plan de influencia estratégica del VP de CS:
- Cómo construyo el caso de inversión en CS: el ROI cuantificado de la inversión en Customer Success en términos de NRR, LTV y coste de adquisición reducido
- Mi voz en el roadmap de producto: cómo el feedback sistemático de CS influye en las decisiones de producto. Cómo proceso y priorizo el feedback de clientes para que sea accionable
- La relación con ventas: cómo CS y ventas se alinean para que la promesa de venta sea la que CS puede cumplir. Cómo gestionamos el handoff para que no sea el punto de quiebre
- Mi relación con el CEO y el C-suite: cómo comunico el estado de la base de clientes, las tendencias de retención y las oportunidades de expansión de forma que genere decisiones estratégicas

Quinto, dame el plan de desarrollo personal como VP de CS transformacional:
- Las competencias de liderazgo que más necesito desarrollar en mi situación específica
- Cómo construyo mi perfil como líder de CS en el mercado: comunidad de CS, ponencias, publicaciones
- Los indicadores de que mi liderazgo está transformando la organización y el impacto de CS en el negocio
- Las conversaciones difíciles que necesito tener para avanzar en mi agenda

Dame un plan concreto para los próximos doce meses con hitos trimestrales y métricas de éxito.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 48,
                'use_case'         => 'Construir la organización de Customer Success que retiene, expande y convierte clientes en motor de crecimiento',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Liderazgo transformacional sin título: influir en organizaciones desde fuera',
                'description'      => 'Desarrolla las competencias de liderazgo e influencia como freelance o consultor independiente: cómo lideras el cambio en las organizaciones de tus clientes sin autoridad formal y con tiempo limitado.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach especializado en el desarrollo de freelancers y consultores independientes que trabajan en proyectos de transformación, cambio organizacional y desarrollo de capacidades en empresas cliente. Entiendes el reto único del consultor: tiene que generar cambio real en organizaciones donde no tiene autoridad formal, donde el tiempo es limitado y donde la resistencia al cambio externo es estructural.

Voy a compartirte mi situación como freelance o consultor y necesito que me ayudes a desarrollar las competencias de liderazgo e influencia que me permiten generar cambio real en las organizaciones donde trabajo.

**Mi contexto:**
- Mi especialidad: [consultoría de estrategia, transformación digital, cambio cultural, formación ejecutiva, facilitación, coaching organizacional, etc.]
- Tipo de proyectos que hago: [diagnósticos, diseño de programas, implementación de cambios, formación, mentoría de equipos, etc.]
- Duración típica de los proyectos: [semanas, meses, años]
- El tipo de organización cliente: [startups, PYMES, corporaciones, sector público, etc.]
- Mi principal desafío: [resistencia interna al cambio que propongo, falta de sponsor ejecutivo real, recomendaciones que no se implementan, dificultad para medir el impacto, proyectos que quedan bien sobre el papel pero no cambian nada en la práctica]
- Lo que me preocupa de mi capacidad de influencia: [cómo genero compromiso sin autoridad, cómo gestiono la política interna que no entiendo bien desde fuera, cómo aseguro que el cambio que ayudo a diseñar se sostiene cuando me voy]

**Lo que necesito:**

Primero, ayúdame a entender el liderazgo sin autoridad formal como modelo de influencia:
- Por qué los consultores externos tienen ventajas de influencia que los internos no tienen (visión externa, sin agenda política, permiso para decir lo incómodo) y cómo capitalizo esas ventajas
- Las trampas del consultor externo: ser demasiado amable para no perder el contrato, dar recomendaciones que el cliente quiere escuchar en lugar de las que necesita, crear dependencia en lugar de capacidad
- La diferencia entre el consultor que entrega un informe y el que genera un cambio real. Cuál es la diferencia en el proceso de trabajo, no solo en el output
- El modelo de influencia sin autoridad: cómo genero compromiso de las personas que necesito que actúen sin poder ordenárselo

Segundo, diseña mi estrategia de entrada y construcción de influencia en una nueva organización cliente:
- Las primeras cuatro semanas: cómo construyo credibilidad rápidamente, entiendo la política interna y mapeo los aliados y los resistentes
- La identificación del sponsor real: cómo distingo entre el contratante del proyecto (quien firma el contrato) y el sponsor real (quien va a proteger el proyecto cuando haya resistencia)
- El mapa de stakeholders: cómo mapeo a los actores clave, entiendo sus intereses y diseño una estrategia de influencia para cada uno
- Cómo gestiono la relación con los niveles jerárquicos que están por encima de mi interlocutor directo: cuándo escalo, cuándo no y cómo lo hago sin quemar al sponsor

Tercero, diseña el método de generación de cambio real durante el proyecto:
- El diagnóstico que genera compromiso: cómo hago el diagnóstico de forma participativa para que el cliente sienta que el análisis es suyo, no mío
- La co-creación de soluciones: cómo involucro al equipo interno en el diseño para que la implementación no dependa de mí
- La gestión de la resistencia: los tipos de resistencia al cambio que encontraré (racional, política, emocional) y cómo abordo cada una de forma diferente
- Los quick wins: cómo diseño victorias tempranas que generen momentum y reduzcan la resistencia inicial al proyecto

Cuarto, diseña la estrategia de transferencia de capacidades y cierre del proyecto:
- Cómo aseguro que el cambio se sostiene cuando me voy: a quién le transfiero el conocimiento, cómo lo hago y cómo lo valido
- El peligro de crear dependencia: cuándo el cliente te quiere contratar para siempre en lugar de aprender a hacerlo solo. Cómo gestiono esa tensión honestamente
- El cierre del proyecto: cómo diseño el final del proyecto para que sea un momento de celebración del cambio conseguido y no un "y ahora qué"
- El seguimiento post-proyecto: cómo mantengo la relación para asegurar el impacto y para futuras oportunidades sin que parezca que solo llamo para vender

Quinto, dame el plan de desarrollo personal como agente de cambio independiente:
- Las competencias de liderazgo e influencia que más necesito desarrollar en mi especialidad
- Cómo construyo mi metodología propia de cambio organizacional que me diferencia de otros consultores
- Los indicadores de que estoy generando impacto real (cambios que perduran) en lugar de solo satisfacción del cliente (les gustó el trabajo)
- Las conversaciones difíciles que probablemente evito tener con mis clientes y que me están costando impacto y credibilidad

Dame un marco concreto y herramientas que pueda empezar a aplicar en mi próximo proyecto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 42,
                'use_case'         => 'Desarrollar influencia y liderazgo sin autoridad formal para generar cambio real en organizaciones cliente',
                'vote_score'       => 44,
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
