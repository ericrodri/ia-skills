<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills190Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'CMO digital: el director de marketing del futuro',
                'description'      => 'Desarrolla las habilidades del CMO moderno que combina creatividad con datos: visión estratégica, construcción de equipos híbridos y capacidad de medir el impacto de cada acción de marketing.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo especializado en marketing con experiencia trabajando con CMOs de empresas tech de alto crecimiento. Voy a explorar contigo el perfil, las competencias y el desarrollo del Chief Marketing Officer digital del futuro.

Mi contexto: [describe tu situación actual: eres un marketing manager que aspira al CMO, un CMO recién nombrado, o un CEO que quiere entender qué esperar de su director de marketing]

Necesito que me ayudes a trabajar en profundidad los siguientes bloques:

**1. El perfil del CMO moderno**
Explícame qué distingue al CMO digital del director de marketing tradicional. Quiero entender la combinación de creatividad y pensamiento analítico que se espera hoy: cómo equilibrar la construcción de marca a largo plazo con la generación de demanda a corto plazo, y por qué los mejores CMOs son al mismo tiempo artistas y científicos de datos.

Dame ejemplos concretos de decisiones que un CMO moderno toma de forma diferente a como las tomaba un director de marketing hace diez años. Incluye cómo ha cambiado la relación del CMO con la tecnología, con el CFO y con el CEO.

**2. Visión estratégica y posicionamiento**
Ayúdame a desarrollar mi capacidad de pensar estratégicamente sobre el marketing. Quiero aprender a construir una narrativa de marca que diferencie a la empresa en mercados saturados, a identificar los segmentos de mayor valor y a construir el mensaje que resuena con cada uno.

Incluye un framework para evaluar si la estrategia de marketing está alineada con la estrategia de negocio, y cómo detectar cuando hay desalineación antes de que se convierta en un problema.

**3. Construcción de equipos híbridos**
El equipo de marketing moderno mezcla perfiles muy distintos: creadores de contenido, analistas de datos, expertos en paid media, desarrolladores de automatización y gestores de comunidad. Guíame para:
- Definir qué capacidades deben estar in-house y cuáles se externalizan
- Contratar los primeros perfiles cuando el equipo empieza a construirse
- Crear la cultura de equipo que hace que creativos y analistas trabajen juntos con fluidez
- Medir el rendimiento de cada perfil con las métricas correctas

**4. El CMO como ejecutivo de negocio**
Una de las grandes transiciones del CMO es dejar de ser el jefe de comunicación para convertirse en un driver de crecimiento del negocio. Explícame cómo construir credibilidad en el comité de dirección, qué lenguaje hablar para conectar con el CFO y el CEO, y cómo defender las inversiones de marketing en términos de ROI y valor de negocio.

Dame un script de cómo presentar el presupuesto de marketing al board de forma que sea aprobado sin recortes, incluyendo cómo anticipar las objeciones más comunes.

**5. Medir el impacto de todo**
Propón un sistema de medición integral para el CMO: desde las métricas de marca (awareness, NPS, brand equity) hasta las métricas de demanda (MQLs, pipeline generado, revenue atribuido). Quiero un dashboard ejecutivo con los 8-10 indicadores que el CMO debe revisar cada semana, y cómo interpretar las señales que indican que algo va mal antes de que los números de ventas lo confirmen.

**6. Plan de desarrollo para el CMO**
Basándote en mi contexto, diseña un plan de 90 días para las primeras semanas como CMO (o para acelerar mi desarrollo hacia ese rol). Incluye qué aprender, a quién conocer dentro y fuera de la empresa, qué victorias tempranas conseguir y cómo construir la reputación interna que el CMO necesita para tener influencia real.

Sé directo, concreto y usa ejemplos reales del mundo del marketing digital. Quiero frameworks accionables, no teoría genérica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar el perfil y las competencias del CMO digital moderno',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Engineering leadership: del IC al manager',
                'description'      => 'Navega la transición del individual contributor al engineering manager: las habilidades que hay que desarrollar, lo que hay que dejar de hacer y cómo redefinir el éxito cuando ya no eres tú quien escribe el código.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager senior con experiencia en empresas de software de alto crecimiento que ha mentoreado a docenas de ICs en su transición al management. Voy a trabajar contigo la transición del individual contributor (IC) al engineering manager (EM).

Mi contexto: [describe dónde estás: IC considerando el paso al management, nuevo EM en sus primeros 6 meses, o EM que quiere reflexionar sobre lo que ha aprendido]

Necesito que me guíes en profundidad por los siguientes temas:

**1. La identidad del IC vs. la identidad del manager**
La transición al management no es una promoción: es un cambio de carrera dentro de la misma empresa. Explícame qué pasa psicológicamente cuando un gran IC se convierte en manager: la pérdida de la satisfacción inmediata de cerrar un ticket, la incomodidad de no tener métricas de rendimiento personales claras y la tentación de seguir codificando para sentirse útil.

Dame estrategias para hacer el duelo del IC y construir una nueva identidad profesional basada en el éxito del equipo. Incluye cómo saber si estás preparado para el management o si el IC track es mejor para ti.

**2. Lo que tienes que dejar de hacer**
Uno de los errores más comunes del nuevo EM es seguir siendo el mejor programador del equipo. Explícame qué comportamientos del IC hay que abandonar en las primeras semanas: el heroísmo técnico, la tendencia a tomar decisiones de diseño unilateralmente, la comunicación directa con el código en lugar de con las personas.

Dame señales de alarma concretas de que un EM está cayendo en la trampa de actuar como IC, y cómo corregirlo antes de que dañe al equipo.

**3. Las nuevas habilidades que debes desarrollar**
El management requiere un conjunto de habilidades completamente diferente. Guíame por las más importantes:
- **1:1s que importan**: cómo estructurar las reuniones individuales para que sean útiles para el report y no solo un status update para el manager
- **Feedback que desarrolla**: cómo dar feedback técnico y de comportamiento que la persona recibe bien y que cambia cosas
- **Hiring como competencia core**: cómo construir el proceso de entrevistas, qué buscar en los candidatos y cómo tomar decisiones de contratación con información imperfecta
- **Gestión del rendimiento**: cómo identificar quién tiene potencial bloqueado, quién está en la posición incorrecta y cómo gestionar un bajo rendimiento sin destruir la moral del equipo

**4. Redefinir el éxito**
Como IC, el éxito era claro: el código funcionaba, el ticket estaba cerrado, el sprint acabado. Como manager, el éxito es difuso y retardado. Ayúdame a construir un sistema personal para medir si lo estoy haciendo bien como manager: qué señales buscar en el equipo, cómo interpretar las métricas de entrega, y cómo saber si los reportes están creciendo.

Incluye cómo gestionar la ambigüedad y la falta de feedback inmediato sin perder la motivación.

**5. La relación con tu propio manager y con los stakeholders**
Como IC, la relación con tu manager era relativamente simple. Como EM, tienes que gestionar hacia arriba (tu director), hacia abajo (tu equipo) y hacia los lados (producto, diseño, otros equipos de ingeniería). Dame estrategias para navegar estas tres dimensiones sin perder el foco ni quemar energía en política.

**6. Plan de 90 días del nuevo EM**
Diseña el plan de los primeros 90 días de un nuevo engineering manager: qué hacer la primera semana (escuchar, no cambiar nada), qué victorias buscar en el primer mes y qué bases establecer para el trimestre. Incluye los errores más comunes que cometen los nuevos EMs y cómo evitarlos.

Sé honesto sobre las partes difíciles de la transición. Quiero preparación real, no una versión edulcorada del management.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar la transición de IC a engineering manager con éxito',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Head of Design: liderar la función de diseño',
                'description'      => 'El rol del director de diseño en una empresa tech: construir el equipo, establecer procesos, defender la visión de diseño ante el negocio y medir el impacto de la función.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Design con más de diez años de experiencia liderando equipos de diseño en empresas de software B2B y B2C. Voy a explorar contigo el rol de director de diseño en una empresa tech.

Mi contexto: [describe tu situación: diseñador senior que aspira al liderazgo, nuevo Head of Design en sus primeros meses, o fundador que quiere contratar a su primer director de diseño]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El mandato del Head of Design**
El director de diseño no es el mejor diseñador del equipo: es quien crea las condiciones para que el equipo produzca el mejor trabajo. Explícame qué significa liderar la función de diseño en una empresa tech: la diferencia entre diseñar y dirigir diseño, lo que se espera del Head of Design en distintos contextos (startup, scale-up, enterprise) y cómo varía el rol según el nivel de madurez de diseño en la organización.

**2. Construir el equipo de diseño**
Guíame por la construcción del equipo: cuándo contratar el primer diseñador, cómo definir los roles (UX, UI, product design, research, motion), qué perfiles priorizar según la etapa del producto y cómo evaluar candidatos cuando entrevistas a personas más junior que tú en algunas especialidades.

Incluye cómo crear un equipo con diversidad cognitiva real, no solo en perfiles técnicos sino en formas de pensar el diseño. Dame las preguntas de entrevista que uso para detectar a los mejores diseñadores de producto.

**3. Establecer procesos de diseño que escalen**
Los procesos que funcionaban cuando erais dos diseñadores no funcionan con diez. Explícame cómo diseñar el proceso de diseño a medida que el equipo crece: el design sprint, la crítica de diseño, el handoff con desarrollo y la integración con el proceso de producto (discovery, delivery).

Incluye cómo evitar los dos extremos: demasiado proceso que paraliza la creatividad, y ningún proceso que produce trabajo inconsistente.

**4. Defender el diseño ante el negocio**
Una de las frustraciones más comunes del Head of Design es que sus decisiones son cuestionadas por personas que no entienden el diseño. Dame estrategias para construir credibilidad y defender las decisiones de diseño ante el CEO, el CPO y los stakeholders de negocio: el lenguaje que hablan, cómo traducir el valor del diseño a métricas de negocio y cómo ganar las batallas importantes sin librar todas las guerras.

**5. Medir el impacto de la función de diseño**
El design es una función difícil de medir. Propón un framework para demostrar el impacto del equipo de diseño: las métricas de proceso (velocidad, calidad), las métricas de producto (usabilidad, adopción de features) y las métricas de negocio (conversión, retención, NPS) que el diseño puede influenciar.

Incluye cómo presentar estos resultados trimestralmente al liderazgo de la empresa.

**6. Cultura de diseño y crecimiento del equipo**
Explícame cómo construir una cultura de diseño que atraiga talento y retenga a los mejores: el ambiente de crítica constructiva, el aprendizaje continuo, los rituales de equipo y el equilibrio entre excelencia y velocidad. Dame también un framework para el desarrollo profesional de los diseñadores de tu equipo.

Quiero respuestas directas y accionables, con ejemplos de situaciones reales que se dan en equipos de diseño de empresas tech.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar las competencias y el enfoque del director de diseño en tech',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'VP de ventas: liderar la organización comercial',
                'description'      => 'El VP de ventas que construye la máquina de ventas: contratación, coaching, cultura y sistemas que hacen que el equipo supere quota de forma consistente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de ventas con quince años de experiencia liderando organizaciones comerciales en empresas SaaS B2B, desde startups hasta scale-ups con equipos de 50+ AEs. Voy a explorar contigo el rol del VP de ventas y cómo construir una organización comercial de alto rendimiento.

Mi contexto: [describe tu situación: nuevo VP de ventas, sales manager que aspira al VP, o fundador que quiere estructurar su función comercial]

Ayúdame a trabajar en profundidad los siguientes bloques:

**1. El mandato del VP de ventas**
El VP de ventas no es el mejor vendedor del equipo: es el arquitecto de la máquina de ventas. Explícame la diferencia entre vender y dirigir ventas, qué se espera de un VP en distintas etapas de crecimiento (pre-PMF, post-PMF, scaling) y cómo cambia el foco del rol a medida que el equipo crece.

Incluye las señales que indican que una empresa necesita su primer VP de ventas (en lugar de seguir con el founder-led sales) y qué busca el board en este perfil.

**2. Contratar a los vendedores correctos**
La calidad del equipo determina casi todo. Guíame por el proceso de contratación de AEs y SDRs: los perfiles que funcionan según el tipo de venta (enterprise vs. mid-market vs. SMB), las entrevistas que revelan el potencial real y las señales de alarma que se ven en el proceso de entrevistas pero que muchos managers ignoran.

Dame el perfil del AE ideal para una empresa SaaS B2B con ticket medio de 20-50k ACV, y los primeros 5 AEs que contrataría si estuviese construyendo el equipo desde cero.

**3. Coaching y desarrollo del equipo**
El VP de ventas que solo mira el pipeline está dejando dinero sobre la mesa. Explícame cómo construir un sistema de coaching que mejore el rendimiento del equipo: el call review, el deal coaching, las 1:1s semanales y la identificación de los patrones que diferencian a los top performers.

Incluye cómo gestionar a los vendedores de alto rendimiento (que no necesitan mucho coaching pero sí retención) y a los de bajo rendimiento (cuándo invertir en desarrollo y cuándo tomar decisiones difíciles).

**4. Construir la máquina de ventas**
La máquina de ventas son los procesos y sistemas que hacen que el equipo funcione independientemente de las personas. Guíame para construir: el sales playbook, el proceso de cualificación (MEDDIC, BANT o el que uses), la metodología de deal review y los rituales de equipo (pipeline review, forecast, kickoffs).

Incluye cómo hacer que el CRM sea una herramienta de gestión real y no un cementerio de datos que los vendedores odian actualizar.

**5. Construir una cultura de ventas ganadora**
La cultura del equipo de ventas es lo que hace que la gente quiera ganar y no solo quiera cobrar. Dame estrategias para construir una cultura que combine competitividad sana, colaboración y resiliencia ante el rechazo: los rituales, los incentivos, el reconocimiento y la forma de gestionar los meses malos.

**6. Forecast y métricas de la organización comercial**
El VP de ventas que no hace forecast preciso pierde credibilidad rápidamente. Propón un sistema de métricas y forecast: los KPIs que reviso cada semana, el proceso de forecast mensual y trimestral, y cómo construir el track record de fiabilidad que te da influencia en el comité de dirección.

Sé directo y específico. Quiero el nivel de detalle que usaría un VP de ventas experimentado con un nuevo manager de su equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y liderar una organización de ventas de alto rendimiento',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'CPO y VP of Product: liderazgo de producto a escala',
                'description'      => 'El liderazgo de la función de producto en organizaciones de 50+ personas: estructura, rituales, cultura de decisión y equilibrio entre visión y ejecución.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CPO con experiencia liderando la función de producto en empresas tech en etapa de crecimiento acelerado, con equipos que van de 5 a 50+ product managers. Voy a explorar contigo el liderazgo de producto a escala.

Mi contexto: [describe tu situación: PM senior o director de producto que aspira al VP/CPO, nuevo líder de producto en su primer rol de liderazgo, o CEO que quiere entender qué esperar de su CPO]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La transición a líder de producto**
Liderar la función de producto es fundamentalmente diferente a ser un gran PM. Explícame qué cambia cuando eres responsable de toda la organización de producto: la gestión de managers (no solo ICs), la influencia sin autoridad directa sobre ingeniería y diseño, y la responsabilidad de la visión de producto a largo plazo mientras el equipo ejecuta en el corto plazo.

Dame las señales de que un PM está listo para liderar y las que indican que todavía no lo está.

**2. Estructura de la organización de producto**
La estructura define los outputs. Guíame por las distintas formas de organizar un equipo de producto de 10+ PMs: por cliente (SMB, mid-market, enterprise), por journey del usuario (acquisition, activation, retention), por dominio técnico o por área de negocio. Los trade-offs de cada modelo y cómo decidir cuál es el correcto en un momento dado.

Incluye cuándo tiene sentido crear roles especializados (platform PM, growth PM, data PM) y cuándo añaden complejidad sin valor.

**3. Rituales que mantienen la organización alineada**
Con múltiples equipos de producto, la descoordinación es el riesgo principal. Propón el sistema de rituales que mantiene a todos alineados sin generar burocracia: el quarterly planning, el weekly leadership sync, las revisiones de producto y los mecanismos de comunicación entre equipos.

Incluye cómo hacer que las reuniones de producto sean útiles para todos y no solo para el que las convoca.

**4. Cultura de decisión**
En organizaciones de producto maduras, las decisiones no las toma el CPO: las toma el equipo. Explícame cómo construir una cultura de decisión que empodere a los PMs sin crear caos: los frameworks para decidir (DACI, reversible vs. irreversible), los principios que guían las decisiones y cómo gestionar los desacuerdos entre equipos de producto.

**5. El equilibrio entre visión y ejecución**
El CPO que solo piensa en visión pierde contacto con la realidad; el que solo mira el backlog pierde la perspectiva estratégica. Dame estrategias para mantener este equilibrio: cómo dividir el tiempo entre el horizonte a 3 años y el sprint actual, cómo comunicar la visión de forma que inspire sin crear expectativas imposibles y cómo saber cuándo priorizar velocidad sobre calidad.

**6. El CPO como líder de negocio**
El CPO moderno no solo gestiona el producto: co-dirige el negocio. Explícame cómo construir credibilidad en el board, cómo conectar las decisiones de producto con los resultados de negocio y cómo influir en las decisiones de inversión, pricing y go-to-market desde la perspectiva de producto.

Quiero respuestas concretas con ejemplos de situaciones reales en organizaciones de producto a escala. Nada de teoría genérica de gestión de producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar el liderazgo de producto en organizaciones de 50+ personas',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'CHRO: el rol de recursos humanos en el comité de dirección',
                'description'      => 'El director de personas que influye en las decisiones estratégicas: la voz del CHRO en el board, los temas que debe llevar y cómo construir credibilidad en el máximo nivel.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CHRO con experiencia en el comité de dirección de empresas tech en etapa de crecimiento, que ha construido su influencia desde una función de RRHH percibida como administrativa hasta ser un verdadero co-piloto del CEO. Voy a trabajar contigo el rol del director de personas en el máximo nivel de liderazgo.

Mi contexto: [describe tu situación: director de RRHH que quiere tener más influencia estratégica, nuevo CHRO, o CEO que quiere saber cómo aprovechar mejor a su director de personas]

Explórame en profundidad los siguientes bloques:

**1. La transformación del rol de RRHH**
RRHH ha pasado de ser una función de cumplimiento y administración a ser un driver estratégico del negocio. Explícame cómo ha evolucionado el rol del director de personas en los últimos diez años, qué esperan de él los CEOs modernos y qué distingue al CHRO que tiene influencia real del que solo gestiona nóminas y conflictos.

Dame los indicadores de que una función de RRHH está operando en modo estratégico vs. en modo administrativo.

**2. La voz del CHRO en el board**
El comité de dirección toma decisiones sobre estrategia, inversión y estructura organizativa. Explícame qué temas debe llevar el CHRO al board, cómo presentarlos en el lenguaje del negocio y cómo construir la credibilidad necesaria para que sus recomendaciones sean escuchadas con el mismo peso que las del CFO o el CPO.

Incluye cómo hablar de cultura, engagement y talento en términos que impacten al CEO sin sonar a soft skills sin sustancia.

**3. Los temas estratégicos del CHRO**
Más allá de la contratación y el desarrollo, el CHRO moderno lidera temas que afectan a la dirección de la empresa. Guíame por los más importantes: la planificación de la fuerza laboral (workforce planning), la gestión del cambio organizativo, la planificación de la sucesión para roles críticos y la construcción de la cultura que soporta la estrategia de negocio.

**4. Datos y métricas de personas**
El CHRO que llega al board con "el engagement ha mejorado" sin datos no tiene autoridad. Propón el sistema de métricas de personas que el CHRO debe manejar: las de eficiencia operativa (coste por contratación, tiempo de incorporación), las de salud organizativa (retención, engagement, eNPS) y las de impacto de negocio (productividad por empleado, ROI de la inversión en L&D).

Incluye cómo construir el people dashboard ejecutivo y cómo usarlo para anticipar problemas antes de que se vuelvan crisis.

**5. Construir credibilidad en el máximo nivel**
La credibilidad del CHRO no viene del cargo: viene de la calidad de las decisiones que toma y de los resultados que genera. Dame estrategias para construir autoridad en el comité de dirección: los quick wins que demuestran el impacto de la función, cómo gestionar las situaciones difíciles (despidos, reestructuraciones, conflictos ejecutivos) y cómo mantener la confianza del CEO en momentos de presión.

**6. El CHRO como guardián de la cultura**
En etapas de crecimiento rápido, la cultura se erosiona si nadie la cuida activamente. Explícame cómo el CHRO defiende y evoluciona la cultura de la empresa: los rituales que la refuerzan, los comportamientos que la dañan y cómo el CHRO actúa como guarda de los valores sin convertirse en la policía de la cultura.

Quiero el nivel de detalle y la franqueza de alguien que ha estado en estas conversaciones. No me des teoría de gestión de personas: dame lo que funciona en la realidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar la influencia estratégica del CHRO en el comité de dirección',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'CFO moderno: más allá del control financiero',
                'description'      => 'El CFO que es co-piloto del CEO: el rol estratégico de las finanzas, la visión de negocio que se espera de un director financiero moderno y las habilidades que lo diferencian.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en empresas tech en distintas etapas de crecimiento, desde series A hasta pre-IPO, que ha construido su rol como verdadero co-piloto estratégico del CEO. Voy a explorar contigo el perfil y las competencias del CFO moderno.

Mi contexto: [describe tu situación: finance manager que aspira al CFO, nuevo CFO en su primer rol, o CEO que quiere sacar más valor a su director financiero]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La evolución del rol del CFO**
El CFO tradicional era el guardián de los números: auditoría, control, cumplimiento. El CFO moderno es el arquitecto de la estrategia financiera y el co-piloto del CEO. Explícame cómo ha cambiado el rol en los últimos diez años, qué competencias nuevas requiere y qué distingue al CFO que tiene influencia real en la dirección de la empresa del que solo gestiona el cierre mensual.

**2. El CFO como estratega de negocio**
Las mejores decisiones estratégicas de una empresa se toman con la participación activa del CFO. Explícame cómo el director financiero influye en las decisiones de inversión, de pricing, de expansión geográfica y de M&A: el tipo de análisis que aporta, las preguntas que hace y la forma en que equilibra el rigor financiero con la ambición del negocio.

Dame un framework para evaluar una decisión estratégica importante (como expandirse a un nuevo mercado o adquirir una empresa) desde la perspectiva del CFO.

**3. La relación CFO-CEO**
La dupla CFO-CEO es la más importante de una empresa. Explícame cómo construir una relación de confianza real: la comunicación directa sobre los números sin filtros, la forma de dar malas noticias temprano y la dinámica de complementarse (el CEO piensa en el crecimiento, el CFO piensa en la sostenibilidad del crecimiento).

Incluye cómo gestionar los momentos de desacuerdo sin dañar la relación y cómo el CFO mantiene su independencia mientras es parte del equipo de liderazgo.

**4. Comunicación financiera con el board y los inversores**
El CFO es el principal interlocutor financiero del board y de los inversores. Guíame para: preparar el board pack financiero que anticipa preguntas difíciles, presentar resultados negativos sin perder credibilidad, y construir el track record de fiabilidad en el forecast que genera confianza en el inversor.

**5. El equipo financiero del futuro**
El CFO moderno construye un equipo que combina el rigor contable con capacidades analíticas y de negocio. Explícame cómo estructurar la función financiera en una empresa tech en crecimiento: los roles que deben estar in-house (controller, FP&A, treasury), cuándo contratar cada uno y cómo crear la cultura de un equipo financiero que sea un partner del negocio y no un policía de los costes.

**6. Las métricas del CFO moderno**
Más allá del P&L y el balance, el CFO de una empresa tech maneja métricas que los CFOs tradicionales no conocían: ARR, NRR, CAC, LTV, Rule of 40, burn multiple. Explícame cómo el CFO moderno integra las métricas SaaS con las financieras tradicionales para tener una visión completa del negocio y cómo usa estas métricas para tomar mejores decisiones.

Incluye cómo construir el modelo financiero que sirve como herramienta de gestión y no solo como ejercicio de proyección.

Quiero el nivel de detalle de alguien que ha estado en las trincheras. Franqueza y ejemplos concretos sobre abstracciones teóricas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar el perfil estratégico del CFO moderno en empresas tech',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'General Counsel: el abogado que lidera el negocio',
                'description'      => 'El director jurídico que no solo asesora sino que co-dirige: el asiento en el board, la influencia en la estrategia corporativa y el perfil del GC que las empresas tech necesitan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un General Counsel con experiencia en empresas tech de alto crecimiento que ha construido su influencia desde el rol puramente asesor hasta ser un miembro con voz y voto en las decisiones estratégicas. Voy a explorar contigo el perfil del GC moderno en el mundo tech.

Mi contexto: [describe tu situación: abogado in-house que aspira al GC, nuevo General Counsel, o CEO/CFO que quiere entender qué perfil de GC necesita su empresa]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El GC que co-dirige vs. el GC que solo asesora**
La diferencia entre un director jurídico que tiene influencia real y uno que no está en la calidad de su asesoramiento técnico: está en si el CEO lo llama antes de tomar una decisión o después. Explícame qué distingue al GC estratégico del asesor jurídico tradicional, qué cambios de comportamiento y mentalidad requiere y cómo se construye esa posición de influencia en el tiempo.

**2. El asiento en el board**
El GC que está en el comité de dirección puede influir en las decisiones antes de que se tomen; el que llega después solo puede gestionar las consecuencias. Explícame cómo el GC gana y mantiene su asiento en el board: los temas que lidera (gobierno corporativo, M&A, regulatory), la forma en que habla el lenguaje del negocio y los momentos en que el GC es más valioso que cualquier otro miembro del equipo de liderazgo.

**3. Los temas estratégicos del GC en tech**
Las empresas tech tienen una agenda legal distinta de la de otros sectores. Guíame por los temas más importantes que el GC de una empresa tech debe dominar con profundidad estratégica: privacidad de datos y GDPR como ventaja competitiva (no solo compliance), propiedad intelectual y estrategia de patentes, contratos de enterprise que escalan, regulación de IA y los nuevos marcos regulatorios que están transformando el sector.

**4. Construir el equipo jurídico in-house**
El GC construye la función legal de la empresa y decide qué capacidades desarrollar internamente y cuáles externalizar. Explícame cómo diseñar el equipo jurídico de una empresa tech en crecimiento: los primeros roles que se contratan, los criterios para elegir entre un associate in-house o un despacho externo para cada tipo de trabajo y cómo gestionar la relación con los despachos externos para maximizar valor y controlar costes.

**5. El GC como gestor de riesgos**
La función principal del GC es proteger a la empresa de los riesgos que puede evitar y gestionar los que no puede. Propón un framework de gestión de riesgos jurídicos para una empresa tech: cómo identificar los riesgos materiales, cómo comunicarlos al CEO y al board sin crear pánico y cómo construir los sistemas (contratos estándar, políticas, training) que reducen la exposición sistemáticamente.

**6. El perfil del GC que las empresas tech necesitan**
Las empresas tech buscan un GC con un perfil diferente al del socio de despacho tradicional. Explícame qué combinación de habilidades hace al GC perfecto para una empresa tech: la comprensión del modelo de negocio SaaS, la capacidad de trabajar con velocidad sin sacrificar rigor, la comunicación directa sin jerga jurídica y la orientación a negocio que hace que el resto del equipo de liderazgo confíe en su criterio.

Quiero ejemplos reales de situaciones en las que el GC añade valor estratégico, no solo técnico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar el rol estratégico del General Counsel en empresas tech',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'VP de Customer Success: construir la función',
                'description'      => 'Construir la organización de customer success desde cero o transformar la existente: estructura, roles, procesos y cultura que hacen de CS un driver de crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo y escalando organizaciones de CS en empresas SaaS B2B, desde las primeras contrataciones hasta equipos de 30+ CSMs. Voy a explorar contigo cómo construir una función de customer success que sea un driver real de crecimiento.

Mi contexto: [describe tu situación: nuevo VP de CS, CSM senior que aspira al liderazgo, o CEO/CCO que quiere estructurar su organización de CS]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El mandato de Customer Success**
CS no es servicio al cliente ni soporte técnico. Es la función que garantiza que los clientes obtienen el valor que les prometiste y, como resultado, renuevan y expanden. Explícame el mandato real de una organización de CS de alto rendimiento: la diferencia entre CS reactivo (apagar fuegos) y CS proactivo (generar valor), y cómo el VP de CS convence al CEO de que CS es un driver de crecimiento, no un centro de coste.

**2. Diseñar la estructura de la organización**
La estructura de CS determina qué tipo de valor puedes entregar. Guíame por los modelos de segmentación más comunes: por tamaño de cliente (enterprise, mid-market, SMB), por modelo de engagement (high-touch, tech-touch, digital) y por especialización (CSM, implementation, renewals, support). Los trade-offs de cada modelo y cómo elegir el correcto según el ACV y el volumen de clientes.

Incluye cuándo tiene sentido crear roles especializados como Customer Success Engineer o Onboarding Specialist.

**3. El proceso de CS que genera valor**
El valor de CS se entrega a través de procesos repetibles. Explícame los procesos core de una organización de CS de alto rendimiento: el onboarding que acelera el time-to-value, el business review que refuerza el ROI, la gestión proactiva de riesgos de churn y el proceso de expansión que convierte CSMs en revenue generators.

Dame el playbook del quarterly business review (QBR) que los clientes valoran y que genera oportunidades de expansión.

**4. Métricas y salud del cliente**
El VP de CS que solo mira el NPS no tiene suficiente información. Propón el sistema de métricas de CS: las de salud del cliente (health score, product adoption, engagement), las de negocio (GRR, NRR, expansion revenue, churn por cohorte) y las de equipo (CSM capacity, time-to-value, QBR coverage). Incluye cómo construir el health score que predice el churn con suficiente anticipación para intervenir.

**5. Construir y desarrollar el equipo de CSMs**
El CSM es un rol difícil de contratar y de retener. Explícame qué perfil buscar en un CSM (el equilibrio entre orientación al cliente, comprensión del producto y capacidad comercial), cómo estructurar la onboarding del CSM para que alcance plena productividad en 90 días y cómo crear el camino de carrera que retiene al talento top.

**6. CS como revenue function**
El VP de CS moderno es responsable de una parte del ARR: las renovaciones y el expansion revenue. Explícame cómo construir la capacidad comercial dentro de CS: cuándo el CSM es quien cierra la expansión y cuándo pasa el testigo a ventas, cómo alinear los incentivos del CSM con los objetivos de revenue y cómo construir el proceso de renewal que maximiza la tasa de retención.

Quiero respuestas concretas con ejemplos de situaciones que se dan en equipos de CS de empresas SaaS B2B. Franqueza sobre lo que funciona y lo que no.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y escalar una organización de customer success como driver de crecimiento',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'De freelance a agencia: el salto del solopreneurship',
                'description'      => 'Cuándo y cómo pasar de trabajar solo a construir un equipo: los primeros hires, la estructura y la transformación mental de ejecutor a líder.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un empresario que ha recorrido el camino de freelance a agencia y que ha mentoreado a decenas de freelancers en la misma transición. Voy a explorar contigo cuándo y cómo dar el salto de trabajar solo a construir un equipo.

Mi contexto: [describe tu situación: freelance establecido con demasiada demanda, alguien que lleva tiempo pensando en crear su agencia, o alguien que ya ha dado los primeros pasos y tiene dificultades]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Señales de que es el momento de dar el salto**
No todo freelance exitoso debería crear una agencia. Explícame las señales que indican que el momento es el correcto: el nivel de demanda sostenida, el tipo de proyectos que estás recibiendo, el perfil de clientes que tienes y la capacidad de delegar que ya has demostrado (aunque sea de forma informal). E igual de importante: las señales que indican que todavía no es el momento, o que el modelo de agencia no es para ti.

Dame un ejercicio para evaluar de forma honesta si estás listo para el salto.

**2. La transformación mental: de ejecutor a líder**
El cambio más difícil no es operativo: es psicológico. Explícame qué tiene que cambiar en tu forma de pensar para pasar de ser el mejor ejecutor a ser alguien que lidera ejecutores: la identidad del "yo lo hago mejor", la dificultad de soltar el control, la incomodidad de cobrar por trabajo que hace otro y el nuevo rol de constructor de sistemas en lugar de artesano.

Dame estrategias concretas para hacer esta transición mental de forma sana y deliberada.

**3. Los primeros hires: a quién contratar primero**
El primer empleado de una agencia naciente es una decisión crítica. Guíame por las opciones: contratar a alguien que haga lo que tú haces (para duplicar la capacidad de entrega), contratar a alguien que haga lo que no se te da bien (para cubrir puntos ciegos) o contratar a alguien que te ayude a gestionar los clientes (para liberarte tiempo de delivery). Los pros y contras de cada modelo y cómo decidir.

Incluye si empezar con colaboradores freelance o contratar a alguien a tiempo completo, y los criterios para tomar esa decisión.

**4. La estructura de la agencia naciente**
Una agencia de 2-5 personas necesita estructura, pero no la misma que una de 20. Explícame cómo diseñar la estructura operativa de una agencia pequeña: los procesos de cliente (propuesta, onboarding, entrega, facturación), los sistemas de gestión interna (proyectos, comunicación, documentación) y los estándares de calidad que aseguran que el trabajo entregado con otras personas sea tan bueno como el que hacías tú solo.

**5. Economía de la agencia: cómo cambia el modelo financiero**
El modelo financiero del freelance y el de la agencia son muy distintos. Explícame cómo cambia la economía: la diferencia entre facturar tu tiempo y facturar la capacidad del equipo, el margen que necesitas para ser sostenible, cómo fijar precios cuando tienes empleados y cómo gestionar el flujo de caja cuando los costes fijos aumentan pero los ingresos pueden ser variables.

**6. Mantener la calidad y la cultura en el crecimiento**
Lo más difícil de escalar es mantener el nivel de calidad que te hizo exitoso como freelance. Dame estrategias para preservar la calidad cuando el trabajo lo hacen otras personas: los procesos de revisión, los estándares documentados, la cultura de excelencia que se transmite al equipo y la forma de gestionar los errores cuando inevitablemente ocurren.

Quiero la honestidad de alguien que ha pasado por esto, incluyendo lo que salió mal y lo que cambiaría. No quiero el discurso motivacional del "escala tu negocio".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Navegar la transición de freelance a agencia con criterio y sin romanticismos',
                'vote_score'       => 45,
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
