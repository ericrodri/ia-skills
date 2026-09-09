<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills260Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estructuras de marketing modernas: pod model, growth teams y squads',
                'description'       => 'Conoce los modelos de organización del equipo de marketing más efectivos en empresas en crecimiento: el pod model orientado a producto, los growth teams y los squads multidisciplinares, y aprende cuándo y cómo implementarlos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Marketing Officer con experiencia construyendo y restructurando equipos de marketing en startups en diferentes etapas de crecimiento, desde los primeros cinco empleados hasta los equipos de más de cien personas en empresas que han alcanzado el scale. Quiero entender los diferentes modelos de organización del equipo de marketing, cuándo aplicar cada uno y cómo gestionar la transición cuando el modelo actual ya no sirve.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño actual de tu equipo de marketing y el estadio de la empresa (pre-PMF, crecimiento, escala)?
2. ¿Cómo está organizado actualmente el equipo de marketing (por canal, por producto, de manera generalista)?
3. ¿Cuál es el mayor problema de la estructura actual: silos de información, falta de ownership, dependencia excesiva de un canal, o dificultad para escalar?
4. ¿Tu empresa tiene un modelo de negocio PLG (product-led growth), SLG (sales-led growth) o un modelo híbrido?

**LOS MODELOS DE ORGANIZACIÓN DEL EQUIPO DE MARKETING:**

EL EQUIPO DE MARKETING GENERALISTA: CUÁNDO FUNCIONA Y CUÁNDO SE ROMPE
El equipo de marketing generalista, donde cada persona toca múltiples disciplinas, es el modelo natural de las startups en fase temprana. Un CMO o marketing lead con uno o dos generalistas puede cubrir todos los frentes cuando el volumen de trabajo lo permite. El problema es que este modelo no escala: cuando la empresa crece, la profundidad de expertise necesaria en cada canal o disciplina supera lo que un generalista puede ofrecer. Ayúdame a identificar las señales que indican que el equipo generalista ha llegado a su límite y es el momento de pasar a un modelo más especializado.

EL POD MODEL: MARKETING ORIENTADO A PRODUCTO
El pod model organiza el equipo de marketing en pods o células pequeñas y multidisciplinares, cada una orientada a un producto, segmento de mercado o etapa del funnel. Cada pod tiene todo lo que necesita para ejecutar: un content marketer, un paid specialist, un analista y un PM de marketing, trabajando de manera autónoma con sus propios objetivos y métricas. Este modelo es especialmente efectivo cuando la empresa tiene múltiples productos o segmentos que requieren estrategias de marketing diferenciadas. Ayúdame a diseñar la estructura de pods para mi equipo de marketing, definir los criterios de agrupación, las métricas de cada pod y los mecanismos de coordinación entre pods para evitar la duplicación y aprovechar las sinergias.

LOS GROWTH TEAMS: CUANDO EL CRECIMIENTO ES LA FUNCIÓN
Un growth team es un equipo pequeño, altamente autónomo y experimentador, cuyo único objetivo es encontrar y escalar los vectores de crecimiento del negocio. Se diferencia del equipo de marketing tradicional en que es radicalmente orientado a datos, prueba hipótesis con velocidad, trabaja en ciclos cortos de experimentación y tiene acceso directo al producto para implementar cambios. El modelo de growth team ha sido el motor de crecimiento de empresas como Dropbox, Airbnb y Uber. Ayúdame a entender cuándo tiene sentido crear un growth team en mi empresa, cómo se relaciona con el equipo de marketing existente y cuáles son las condiciones mínimas para que funcione (acceso a datos, velocidad de desarrollo, apoyo del liderazgo).

**LOS SQUADS MULTIDISCIPLINARES:**

EL MODELO SPOTIFY APLICADO AL MARKETING
El modelo de squads, popularizado por Spotify para ingeniería, está siendo adaptado por los equipos de marketing más avanzados. En este modelo, los equipos de marketing no se organizan por disciplina (SEO team, paid team, content team) sino en squads orientados a misiones específicas: un squad de adquisición, un squad de activación, un squad de retención. Cada squad incluye las disciplinas necesarias para ejecutar su misión de manera autónoma. Ayúdame a diseñar la arquitectura de squads para mi equipo de marketing: las misiones de cada squad, la composición ideal, los OKRs de squad y los mecanismos de gobernanza que coordinan los squads sin crear burocracia.

GESTIONAR LAS TENSIONES DEL MODELO EN SQUADS
Los modelos en squads crean tensiones organizativas específicas que el líder de marketing debe gestionar: la tensión entre la autonomía del squad y la coherencia de marca, la dificultad de desarrollar expertise profundo cuando las personas trabajan en squads en lugar de en equipos de especialidad, y el riesgo de duplicación de trabajo entre squads con objetivos solapados. Ayúdame a entender cómo las empresas más avanzadas gestionan estas tensiones: los capítulos de especialidad que mantienen la comunidad de práctica entre especialistas de diferentes squads, las guilds de marca que aseguran la coherencia y los mecanismos de coordinación ligeros.

**TRANSICIONAR DE UNA ESTRUCTURA A OTRA:**

CUÁNDO Y CÓMO RESTRUCTURAR EL EQUIPO DE MARKETING
La restructuración de un equipo de marketing es una de las decisiones más difíciles del CMO porque interrumpe el trabajo en curso, genera incertidumbre entre el equipo y tiene costes de transición significativos. Ayúdame a diseñar la transición de la estructura actual a la estructura objetivo: el plan de comunicación con el equipo, el período de transición gradual, cómo gestionar las resistencias y cómo medir que la nueva estructura está funcionando.

CONTRATAR PARA LA ESTRUCTURA OBJETIVO
La restructuración del equipo de marketing requiere también replantear la estrategia de contratación. Ayúdame a definir los perfiles que necesito para la estructura objetivo: las habilidades técnicas específicas de cada rol, la mentalidad y los valores que busco en cada posición y el orden de prioridad de las contrataciones para que la nueva estructura funcione lo antes posible.

Dame el plan completo de diseño organizacional para mi equipo de marketing, incluyendo la estructura recomendada para mi estadio actual, el proceso de transición y los mecanismos de coordinación y medición que la hacen funcionar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño de la estructura organizativa del equipo de marketing con pod model, growth teams y squads según el estadio de la empresa',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de equipos de ingeniería: squads, tribes y el modelo Spotify',
                'description'       => 'Comprende los modelos de organización de equipos de ingeniería que mejor escalan: el modelo Spotify con squads, tribes y chapters, y las alternativas que han emergido para superar sus limitaciones en la práctica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un engineering manager o VP of Engineering con experiencia diseñando y evolucionando la estructura de equipos de ingeniería en empresas en crecimiento, con conocimiento profundo del modelo Spotify (squads, tribes, chapters y guilds), sus fortalezas, sus limitaciones en la práctica y las alternativas que han desarrollado las empresas más avanzadas a partir de su experiencia. Quiero entender cómo diseñar la estructura organizativa del equipo de ingeniería que mejor sirve al negocio en mi estadio actual de crecimiento.

**Preguntas iniciales:**
1. ¿Cuántas personas hay actualmente en el equipo de ingeniería y cuántas en los próximos doce meses?
2. ¿Cómo está organizado actualmente el equipo (por tecnología, por producto, por proyecto)?
3. ¿Cuál es el mayor problema de la estructura actual: dependencias entre equipos que bloquean el delivery, falta de ownership de los productos, dificultad para escalar el equipo o conflictos de priorización?
4. ¿Cuál es el modelo de negocio y la arquitectura de producto (monolítico, microservicios, multiproducto)?

**EL MODELO SPOTIFY: SQUADS, TRIBES, CHAPTERS Y GUILDS:**

LOS SQUADS: LA UNIDAD MÍNIMA DE AUTONOMÍA
El squad es el núcleo del modelo Spotify: un equipo pequeño (5-8 personas), autónomo, multidisciplinar y orientado a una misión de producto específica. El squad tiene todo lo que necesita para diseñar, construir y desplegar su parte del producto sin depender de otros equipos: developers de frontend y backend, un diseñador, un data analyst y un product manager. La autonomía del squad es el valor principal del modelo: el squad decide cómo construir lo que tiene que construir sin necesitar aprobación de otros equipos. Ayúdame a diseñar los squads para mi organización: cómo definir las misiones, cómo asignar el ownership de los servicios o dominios del producto y cómo minimizar las dependencias entre squads.

LAS TRIBES: COORDINACIÓN SIN BUROCRACIA
Cuando la empresa crece, los squads se agrupan en tribes: colecciones de squads que trabajan en áreas relacionadas del producto. La tribe mantiene la alineación entre los squads sin crear la burocracia de la jerarquía tradicional. Ayúdame a diseñar la estructura de tribes para mi organización: el criterio para agrupar squads en tribes, el tamaño óptimo de cada tribe (el modelo Spotify recomienda no más de 100 personas), el papel del tribe lead y los mecanismos de coordinación dentro de la tribe.

LOS CHAPTERS Y LAS GUILDS: COMUNIDADES DE PRÁCTICA
Los chapters son los grupos de personas con la misma especialidad dentro de una tribe (todos los iOS developers de la tribe, todos los data engineers). El chapter lead es el manager formal de las personas del chapter y tiene responsabilidad sobre su desarrollo técnico y su carrera. Las guilds son comunidades de práctica que cruzan las fronteras de las tribes: la guild de seguridad, la guild de accesibilidad, la guild de machine learning. Ayúdame a entender cómo implementar los chapters y las guilds de manera que funcionen en la práctica: el tiempo dedicado a las actividades del chapter versus el trabajo en el squad, cómo los chapter leads gestionan el desarrollo técnico de las personas y cómo las guilds comparten conocimiento sin consumir demasiado tiempo de las personas.

**LAS LIMITACIONES DEL MODELO SPOTIFY EN LA PRÁCTICA:**

LO QUE NO TE CUENTAN DEL MODELO SPOTIFY
Spotify mismo ha reconocido que el modelo que describieron en sus famosos white papers de 2012 era una aspiración más que una realidad en ese momento. Las empresas que han intentado implementarlo han descubierto varias limitaciones: la autonomía de los squads crea inconsistencias técnicas cuando no hay suficiente coordinación, los chapters y las guilds son difíciles de mantener activos cuando las personas están muy comprometidas con sus squads, y el modelo asume un nivel de madurez técnica y de producto que muchas empresas no tienen. Ayúdame a identificar las limitaciones del modelo Spotify que son más relevantes para mi contexto y las adaptaciones que han desarrollado otras empresas para superarlas.

**ALTERNATIVAS Y EVOLUCIONES DEL MODELO:**

TEAM TOPOLOGIES: UNA PERSPECTIVA DIFERENTE
Team Topologies es el framework de diseño de equipos de ingeniería que más tracción ha ganado recientemente como alternativa o complemento al modelo Spotify. Define cuatro tipos de equipo (stream-aligned, enabling, platform y complicated-subsystem) y tres modos de interacción (collaboration, facilitation y X-as-a-service). Ayúdame a entender cómo el framework de Team Topologies puede complementar o reemplazar el modelo Spotify en mi organización, y qué tipo de equipo corresponde a cada parte de mi estructura actual.

LA PLATAFORMA DE INGENIERÍA COMO EQUIPO INTERNO
Uno de los modelos más impactantes en la organización de ingeniería moderna es el platform team: un equipo de ingeniería cuyo cliente son los otros equipos de la empresa. El platform team construye y mantiene los tools, los servicios internos y la infraestructura que permite a los squads de producto moverse rápido sin tener que preocuparse de las capas de bajo nivel. Ayúdame a evaluar si mi organización está en el tamaño y el momento correctos para crear un platform team y cómo diseñarlo para que sirva a los equipos de producto de manera efectiva.

Dame el diseño organizativo completo para mi equipo de ingeniería, incluyendo la estructura de squads y tribes, los mecanismos de coordinación y el plan de evolución para los próximos dieciocho meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de la estructura organizativa del equipo de ingeniería con squads, tribes, chapters y Team Topologies',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design organization: cómo estructurar el equipo de diseño en una empresa en crecimiento',
                'description'       => 'Aprende a diseñar la organización del equipo de diseño que mejor sirve a la empresa en cada etapa de crecimiento: los modelos centralizado, descentralizado y federado, y cuándo y cómo hacer la transición entre ellos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Design o VP of Design con experiencia construyendo y restructurando equipos de diseño en empresas en diferentes etapas de crecimiento, con conocimiento profundo de los modelos de organización de diseño y cómo cada uno sirve (o no sirve) a las necesidades de negocio. Quiero aprender a diseñar la organización del equipo de diseño que maximiza el impacto del diseño en el producto y en el negocio, adaptado al estadio actual de la empresa.

**Preguntas iniciales:**
1. ¿Cuántos diseñadores hay actualmente en el equipo y cómo está distribuido su tiempo entre proyectos?
2. ¿El diseño está centralizado en un equipo propio o los diseñadores están embebidos en los equipos de producto?
3. ¿Cuál es el mayor problema de la estructura actual: falta de consistencia visual, diseñadores demasiado dispersos entre proyectos, falta de tiempo para el trabajo estratégico, o dificultad para construir expertise profundo?
4. ¿La empresa tiene un design system establecido o es un área de deuda pendiente?

**LOS MODELOS DE ORGANIZACIÓN DEL DISEÑO:**

EL MODELO CENTRALIZADO: DISEÑO COMO EQUIPO FUNCIONAL
En el modelo centralizado, todos los diseñadores pertenecen a un único equipo de diseño con su propio manager y sus propios procesos. Los diseñadores se asignan a proyectos de producto de manera temporal o permanente pero reportan al Head of Design. Las ventajas son evidentes: mayor consistencia de calidad, mejor desarrollo del talento diseñador, más facilidad para construir y mantener el design system y mayor influencia del diseño en las decisiones estratégicas. El riesgo es que el equipo centralizado se convierte en un cuello de botella cuando crece la demanda. Ayúdame a evaluar si el modelo centralizado es el adecuado para mi estadio actual y cómo gestionarlo para maximizar sus ventajas y minimizar sus riesgos.

EL MODELO DESCENTRALIZADO: DISEÑADORES EMBEBIDOS EN LOS EQUIPOS
En el modelo descentralizado, los diseñadores están completamente embebidos en los equipos de producto y reportan al product manager o al engineering manager de su equipo. La ventaja es la proximidad al producto y la agilidad: el diseñador entiende profundamente el dominio de su equipo y puede responder con rapidez a las necesidades. El riesgo es la fragmentación: sin un equipo central de diseño, la consistencia de la experiencia del usuario sufre, el design system se abandona y los diseñadores pierden la comunidad de práctica que los hace crecer. Ayúdame a entender cuándo el modelo descentralizado tiene sentido y cómo mitigar sus riesgos.

EL MODELO FEDERADO: LO MEJOR DE AMBOS MUNDOS
El modelo federado es el más común en las empresas que han superado los 10-15 diseñadores: los diseñadores están embebidos en los equipos de producto (autonomía, proximidad) pero también pertenecen a un equipo de diseño central ligero (comunidad de práctica, design system, calidad). En la práctica, el diseñador tiene un manager de diseño para su desarrollo profesional y trabaja día a día con el equipo de producto al que está asignado. Ayúdame a diseñar el modelo federado para mi organización: la estructura de reporting, los mecanismos de coordinación, el tiempo dedicado a las actividades del equipo central versus el trabajo en el equipo de producto y cómo medir la salud de la organización federada.

**EL DESIGN SYSTEM COMO INFRAESTRUCTURA ORGANIZATIVA:**

EL DESIGN SYSTEM ES UN PRODUCTO INTERNO
El design system es la herramienta más poderosa para escalar el impacto del diseño sin escalar linealmente el equipo. Un design system bien construido permite a los diseñadores moverse más rápido, garantiza la consistencia de la experiencia del usuario y reduce la deuda de diseño acumulada. Ayúdame a entender el design system como un producto con su propio equipo, su propio roadmap y sus propios usuarios (los otros diseñadores y los developers): cómo priorizar el trabajo del design system frente al trabajo de producto, cómo medir la adopción y el impacto del design system y cómo conseguir el buy-in del liderazgo para invertir en él.

CUÁNDO CREAR UN EQUIPO DEDICADO AL DESIGN SYSTEM
En un equipo pequeño, el design system es una responsabilidad compartida que todos contribuyen a construir y mantener. A partir de cierto tamaño (típicamente con más de 8-10 diseñadores), tiene sentido crear un equipo o al menos un rol dedicado al design system. Ayúdame a evaluar si mi organización está en el momento correcto para dedicar recursos al design system y cómo estructurar el equipo o el rol responsable.

**DESARROLLAR EL TALENTO DISEÑADOR:**

LAS CARRERAS EN DISEÑO: IC Y MANAGEMENT
El equipo de diseño maduro tiene dos carreras diferenciadas: la carrera de individual contributor (IC) que lleva del junior designer al staff designer y al principal designer, y la carrera de management que lleva del design lead al head of design al VP of Design. Muchas organizaciones fuerzan a los diseñadores más senior a entrar en management para crecer, perdiendo así a los mejores ICs. Ayúdame a diseñar el marco de carreras de diseño que reconoce y remunera la excelencia en ambas trayectorias.

CONTRATAR Y EVALUAR DISEÑADORES
Los procesos de selección de diseñadores deben evaluar habilidades que van más allá del portfolio visual: el pensamiento de diseño, la capacidad de hacer las preguntas correctas, la habilidad para comunicar las decisiones de diseño y la capacidad de colaborar con producto e ingeniería. Ayúdame a diseñar el proceso de selección de diseñadores que identifica estas habilidades con precisión, incluyendo el brief del portfolio review, las preguntas de la entrevista de diseño y el ejercicio práctico que revela el proceso de pensamiento del candidato.

Dame el modelo organizativo completo para mi equipo de diseño, adaptado a mi estadio actual, con el plan de evolución para los próximos dieciocho meses y los mecanismos de coordinación que maximizan el impacto del diseño.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Modelos de organización del equipo de diseño (centralizado, descentralizado, federado) y diseño del design system como producto interno',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estructura del equipo comercial: SDR, AE, AM y los roles que escalan',
                'description'       => 'Aprende a diseñar la estructura del equipo de ventas que escala: cuándo separar los roles de SDR y AE, cómo diseñar el handoff, cuándo añadir account managers y cómo construir la jerarquía comercial que crece sin perder velocidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Sales con experiencia construyendo equipos de ventas desde cero en startups B2B en diferentes etapas de crecimiento, con conocimiento profundo de los modelos de organización comercial que escalan y los errores más comunes que cometen las empresas al diseñar su equipo de ventas. Quiero aprender a diseñar la estructura del equipo de ventas que sirve mejor a los objetivos de negocio en mi estadio actual y cómo construir los pilares para escalar.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño actual del equipo de ventas y el modelo de negocio (SaaS B2B, ventas transaccionales, ciclo largo enterprise)?
2. ¿Cómo está organizado actualmente el equipo de ventas y cuál es el mayor problema de la estructura actual?
3. ¿Cuál es el ACV (Annual Contract Value) promedio y la duración del ciclo de ventas?
4. ¿El equipo tiene actualmente roles separados de prospección (SDR) y cierre (AE) o son los mismos comerciales los que hacen todo?

**LOS ROLES DEL EQUIPO COMERCIAL MODERNO:**

EL SDR (SALES DEVELOPMENT REPRESENTATIVE): ESPECIALIZACIÓN EN PROSPECCIÓN
El SDR es el rol especializado en la generación y cualificación de oportunidades comerciales. Su trabajo es identificar prospectos que encajan con el perfil de cliente ideal, iniciar el contacto (outbound), cualificar el interés y las necesidades iniciales, y pasar las oportunidades cualificadas al AE para el proceso de cierre. La especialización del SDR tiene una ventaja clara: la prospección outbound requiere un volumen de contactos y una resiliencia al rechazo que es difícil de mantener cuando también tienes que cerrar deals. Ayúdame a entender cuándo tiene sentido crear el rol de SDR en mi equipo (el ACV típico que lo justifica, el volumen de oportunidades necesario) y cómo estructurar el equipo de SDRs: el ratio SDR/AE, las métricas de los SDRs (actividad, conversión a oportunidad cualificada, pipeline generado) y el proceso de desarrollo de carrera del SDR hacia el rol de AE.

EL AE (ACCOUNT EXECUTIVE): EL CERRADOR
El AE es responsable de convertir las oportunidades cualificadas en contratos cerrados. En el modelo completo, el AE recibe las oportunidades del SDR y gestiona el proceso de ventas desde la primera demo hasta la firma del contrato. El diseño del equipo de AEs incluye decisiones sobre la especialización (por segmento de cliente, por industria vertical, por geografía), la estructura de la cuota (cuota anual, cuota mensual, mix de comisión), el sistema de remuneración variable y los mecanismos de coaching que mejoran la conversión. Ayúdame a diseñar la estructura del equipo de AEs para mi empresa: la segmentación de los AEs, el sistema de cuotas y la estructura del plan de compensación.

EL AM (ACCOUNT MANAGER): RETENCIÓN Y EXPANSIÓN
El Account Manager es responsable de la relación con los clientes después del cierre inicial: garantizar el éxito del cliente con el producto, gestionar las renovaciones y encontrar las oportunidades de upsell y cross-sell. La decisión de separar los roles de AE y AM tiene implicaciones importantes: un AE especializado en cierre tiene diferentes habilidades y motivaciones que un AM especializado en la relación a largo plazo. Ayúdame a entender cuándo tiene sentido crear el rol de AM y cómo diseñar el handoff entre AE y AM para que el cliente no sienta que ha sido "vendido" y luego abandonado.

**LOS MODELOS DE ORGANIZACIÓN COMERCIAL:**

SEGMENTACIÓN POR TAMAÑO DE CLIENTE (SMB, MID-MARKET, ENTERPRISE)
El modelo de organización comercial más común en las empresas B2B es la segmentación por tamaño de cliente: un equipo de SMB (small and medium business) con ciclos cortos, un equipo de mid-market con procesos más sofisticados y un equipo de enterprise con ciclos largos y múltiples stakeholders. Cada segmento requiere skills diferentes, procesos diferentes y métricas diferentes. Ayúdame a evaluar si mi empresa está en el momento correcto para segmentar el equipo comercial y cómo diseñar la transición.

ORGANIZACIÓN POR VERTICAL O INDUSTRIA
En mercados donde el conocimiento de la industria es un diferenciador de ventas significativo, la organización del equipo de ventas por vertical (salud, educación, fintech, retail) puede ser más efectiva que la organización por tamaño de cliente. Ayúdame a evaluar si la organización por vertical tiene sentido para mi empresa y cómo construirla sin crear silos que impiden aprovechar el conocimiento del producto de manera transversal.

**LIDERAZGO COMERCIAL Y GESTIÓN DEL EQUIPO:**

EL SALES MANAGER: RATIO DE GESTIÓN Y RESPONSABILIDADES
El ratio de gestión del sales manager (número de comerciales por manager) tiene un impacto directo en la calidad del coaching y en los resultados del equipo. Un manager con demasiados comerciales no puede hacer el coaching necesario; uno con pocos comerciales está infrautilizado. El ratio óptimo varía según el modelo de ventas: para equipos de SMB con ciclos cortos puede ser de 8-10, para equipos enterprise con ciclos largos puede ser de 4-6. Ayúdame a diseñar la jerarquía de liderazgo comercial para mi equipo actual y el plan de contratación de managers a medida que el equipo crece.

Dame la estructura completa del equipo comercial para mi empresa, con los roles, los ratios, los mecanismos de coordinación, el plan de compensación y el roadmap de contratación para los próximos doce meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño de la estructura del equipo de ventas con roles SDR, AE y AM, segmentación por cliente y plan de escala',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product organization: cómo estructurar equipos de producto por etapa de empresa',
                'description'       => 'Aprende los modelos de organización de los equipos de producto que mejor funcionan en cada etapa de crecimiento: desde el fundador PM hasta el sistema de squads de producto a escala, con los mecanismos de priorización y coordinación que los hacen funcionar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia construyendo organizaciones de producto en startups desde la fase pre-PMF hasta empresas de más de cien millones de ARR, con conocimiento profundo de cómo los modelos de organización de producto deben evolucionar a medida que la empresa crece y qué errores son más comunes en cada transición. Quiero aprender a diseñar la organización de producto que mejor sirve al negocio en mi estadio actual y construir los fundamentos para la siguiente etapa.

**Preguntas iniciales:**
1. ¿Cuántos product managers hay actualmente en la empresa y cuántos ingenieros?
2. ¿Cuál es el estadio de la empresa (pre-PMF, post-PMF en crecimiento, escala)?
3. ¿Cuál es el modelo de negocio (SaaS B2B, PLG, marketplace, e-commerce)?
4. ¿Cuál es el mayor problema de la organización de producto actual: falta de ownership, demasiadas dependencias entre equipos, dificultad para priorizar entre múltiples áreas del producto, o PM sin suficiente autonomía?

**LA EVOLUCIÓN DE LA ORGANIZACIÓN DE PRODUCTO:**

FASE 1: EL FUNDADOR COMO PM
En las primeras etapas de la startup, el fundador es el product manager por defecto. Esta configuración tiene una ventaja enorme: el fundador tiene la visión, la autoridad y la urgencia para tomar decisiones de producto rápidamente. El problema surge cuando el equipo crece y el fundador ya no puede gestionar todos los detalles del producto mientras también gestiona la empresa. El primer PM contratado es una de las contrataciones más delicadas de la historia de la empresa. Ayúdame a entender cuándo es el momento correcto para contratar el primer PM, qué perfil buscar (un generalist con mentalidad de founder, no un PM corporativo de gran empresa) y cómo hacer la transición sin perder la velocidad y la visión que ha caracterizado al fundador-PM.

FASE 2: EL EQUIPO DE PMS FUNCIONAL
Con varios PMs, el modelo más natural es el equipo funcional donde los PMs se distribuyen el producto por áreas (adquisición, activación, retención, monetización, plataforma). Esta distribución tiene sentido cuando el producto es todavía relativamente unificado y el equipo es pequeño. El head of product coordina la priorización y garantiza la coherencia de la visión. Ayúdame a diseñar el equipo funcional de PMs para mi empresa: cómo asignar las áreas del producto, cómo gestionar la priorización entre áreas y cómo construir el sistema de OKRs que alinea el trabajo de todos los PMs hacia los objetivos de negocio.

FASE 3: LOS SQUADS DE PRODUCTO A ESCALA
A partir de cierto tamaño (típicamente con más de 4-5 PMs), los equipos de producto más avanzados adoptan el modelo de squads: equipos pequeños y autónomos, cada uno con su PM, sus ingenieros y su diseñador, responsable de un área del producto o de un segmento de usuarios. El squad tiene autonomía para decidir cómo conseguir sus objetivos y no necesita aprobación constante de arriba. Ayúdame a diseñar la estructura de squads para mi organización de producto: los criterios para definir los squads (por dominio, por segmento de usuario, por etapa del funnel), las métricas de squad, los mecanismos de coordinación entre squads y el papel del CPO y los PMs senior en este modelo.

**PRIORIZACIÓN A ESCALA:**

CÓMO PRIORIZAR CUANDO HAY MÚLTIPLES EQUIPOS DE PRODUCTO
La priorización en una organización de producto con múltiples squads es uno de los mayores desafíos: cómo decidir qué hace cada squad, cómo arbitrar los conflictos de recursos entre squads y cómo garantizar que la suma del trabajo de todos los squads produce el mayor impacto posible en el negocio. Ayúdame a diseñar el sistema de priorización a escala: el proceso de planning trimestral con OKRs de empresa, de tribe y de squad, el mecanismo de triage de las oportunidades de producto y el proceso de decisión cuando los squads compiten por el mismo recurso (datos, infraestructura, equipo de diseño central).

DISCOVERY A ESCALA: MANTENER EL CONTACTO CON EL USUARIO CUANDO EL EQUIPO CRECE
Uno de los mayores riesgos de la organización de producto a escala es que los PMs se alejan del usuario y empiezan a tomar decisiones basadas en datos de analytics y en las peticiones de los stakeholders internos en lugar de en el entendimiento profundo del problema del usuario. Ayúdame a diseñar los mecanismos que mantienen el contacto con el usuario a escala: el programa de entrevistas de usuario para cada squad, los mecanismos de síntesis del conocimiento del usuario entre squads y el rol del research centralizado en este ecosistema.

Dame el modelo organizativo completo para mi equipo de producto, adaptado a mi estadio actual, con el plan de evolución para las próximas dos etapas de crecimiento y los mecanismos de coordinación y priorización que lo hacen funcionar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Modelos de organización de equipos de producto por etapa de empresa, desde el fundador-PM hasta los squads autónomos a escala',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Diseño organizacional: estructuras planas, matriciales y el futuro del trabajo',
                'description'       => 'Comprende los principios del diseño organizacional moderno: las ventajas y los límites de las estructuras planas, cuándo la matriz funciona y cuándo destruye valor, y cómo diseñar organizaciones que combinan agilidad y coherencia en el trabajo híbrido y remoto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en diseño organizacional y desarrollo organizativo con experiencia asesorando a empresas en diferentes estadios de crecimiento sobre cómo diseñar estructuras que equilibran la agilidad con la coherencia, la autonomía con la coordinación y la eficiencia operativa con el bienestar de las personas. Quiero entender los principios del diseño organizacional moderno para poder asesorar a mi empresa o a mis clientes sobre la estructura que mejor sirve a sus objetivos.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de la organización que quieres diseñar o rediseñar, y cuál es su modelo de negocio?
2. ¿Cuál es la estructura actual (funcional, matricial, por producto, plana) y cuáles son los síntomas que indican que la estructura no está funcionando?
3. ¿Cuál es el mayor driver del cambio organizacional: el crecimiento del equipo, un cambio en la estrategia de negocio, la adopción del trabajo remoto o híbrido, o la ineficiencia y los cuellos de botella?
4. ¿Cuál es el horizonte de la restructuración: un cambio inmediato de urgencia o un proceso de transformación gradual a dos o tres años?

**LAS ESTRUCTURAS ORGANIZATIVAS Y CUÁNDO USAR CADA UNA:**

LA ESTRUCTURA FUNCIONAL: EL MODELO CLÁSICO Y SUS LÍMITES
La estructura funcional, donde las personas se organizan por su especialidad (departamento de marketing, departamento de ingeniería, departamento de ventas), es el modelo más común y el que surge de manera natural en la mayoría de las empresas. Sus ventajas son la especialización profunda, el desarrollo del talento dentro de cada función y la eficiencia en las operaciones repetitivas. Sus límites son la lentitud para responder a las necesidades del mercado (porque todo requiere coordinación entre departamentos), los silos de información y la dificultad para orientar la organización al cliente. Ayúdame a evaluar si la estructura funcional sigue siendo adecuada para mi organización o si hay síntomas que indican que es el momento de evolucionarla.

LA ESTRUCTURA MATRICIAL: PODER Y PELIGRO
La estructura matricial intenta combinar las ventajas de la organización funcional (especialización, desarrollo del talento) con las de la organización por producto o por cliente (orientación al resultado, velocidad). En la matriz, una persona tiene dos managers: el functional manager (responsable de su desarrollo y de los estándares de su especialidad) y el project o product manager (responsable de los resultados del trabajo). El problema fundamental de la matriz es la ambigüedad de autoridad: cuando los dos managers no están de acuerdo, la persona en la intersección queda atrapada. Ayúdame a entender cuándo la matriz funciona de verdad, cuáles son las condiciones organizativas que la hacen viable y cómo diseñarla para minimizar los conflictos de autoridad.

LAS ESTRUCTURAS PLANAS: LA PROMESA Y LA REALIDAD
Las estructuras planas (pocas capas jerárquicas, mucha autonomía individual) son el modelo aspiracional de muchas startups y empresas de tecnología. Empresas como Spotify, Valve o Basecamp han evangelizado las virtudes de la organización plana. La realidad es más compleja: la investigación sobre organizaciones planas muestra que la jerarquía formal tiende a ser reemplazada por una jerarquía informal basada en la influencia y la red de contactos, que no es necesariamente más justa ni más eficiente. Ayúdame a entender cuándo las estructuras planas funcionan (tamaño del equipo, tipo de trabajo, cultura) y cuándo la falta de jerarquía crea más problemas de los que resuelve.

**EL FUTURO DEL TRABAJO Y EL DISEÑO ORGANIZACIONAL:**

DISEÑAR PARA EL TRABAJO REMOTO E HÍBRIDO
El trabajo remoto e híbrido no es solo una preferencia de los empleados; es un cambio estructural que requiere rediseñar los procesos de coordinación, comunicación y toma de decisiones de la organización. Las organizaciones que simplemente trasladan sus procesos presenciales al entorno remoto descubren que son mucho menos eficientes. Ayúdame a entender los principios de diseño organizacional para el trabajo distribuido: la documentación como herramienta de coordinación principal, el diseño de los rituales de equipo asincrónicos y sincrónicos, la gestión del rendimiento en entornos donde la presencia no es visible y la construcción de la cultura de empresa sin las interacciones físicas informales.

LA ORGANIZACIÓN COMO SISTEMA ADAPTATIVO
El mayor error del diseño organizacional es tratarlo como un evento puntual: "rediseñamos la organización" y luego se ejecuta durante años sin revisión. Las organizaciones más resilientes son las que tienen la capacidad de adaptarse continuamente a los cambios del entorno sin necesitar grandes restructuraciones traumáticas. Ayúdame a diseñar los mecanismos de adaptación continua de la organización: los ciclos de revisión de la estructura, los mecanismos de feedback bottom-up sobre lo que no funciona y los principios de diseño organizacional que permiten la experimentación y la adaptación.

EL DISEÑO ORGANIZACIONAL EN FUNCIÓN DE LA ESTRATEGIA
La estructura siempre sigue a la estrategia: el diseño organizacional debe ser la expresión de las prioridades estratégicas de la empresa. Ayúdame a alinear el diseño de mi organización con la estrategia de negocio actual: las decisiones organizativas que refuerzan las capacidades estratégicas que nos diferencian, las estructuras que aceleran los procesos de mayor impacto y los cambios organizativos que eliminan las fricciones que ralentizan la ejecución de la estrategia.

Dame el análisis completo de la estructura organizativa que mejor sirve a mi empresa en este momento, con el plan de transición, los mecanismos de coordinación y los indicadores que me dirán si el diseño está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Principios y modelos de diseño organizacional para empresas en crecimiento: estructuras funcionales, matriciales, planas y para el trabajo remoto',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finance team structure: cómo organizar el departamento financiero mientras la empresa crece',
                'description'       => 'Aprende a diseñar y evolucionar la estructura del departamento de finanzas según el estadio de la empresa: desde el primer finance hire hasta el equipo de FP&A, accounting, treasury y tax que gestiona una empresa en escala.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia construyendo departamentos de finanzas en startups en diferentes etapas de crecimiento, desde el primer contrato con el gestor externo hasta el equipo financiero de treinta personas que gestiona la complejidad de una empresa en escala internacional. Quiero aprender a diseñar el departamento de finanzas que sirve mejor a las necesidades del negocio en cada momento, tomando las decisiones correctas sobre cuándo construir el equipo interno versus externalizar y en qué roles invertir primero.

**Preguntas iniciales:**
1. ¿Cuál es el estadio de la empresa (pre-seed, Series A/B, Series C+, pre-IPO o cotizada)?
2. ¿Cómo está organizado actualmente el departamento de finanzas y qué funciones están externalizadas?
3. ¿Cuáles son las mayores áreas de dolor financiero actual: el cierre contable tarda demasiado, no hay visibilidad del cash flow, la función de FP&A no existe o es rudimentaria, el equipo no puede dar soporte al crecimiento internacional?
4. ¿Cuál es el ARR o los ingresos anuales actuales y la tasa de crecimiento prevista?

**LA EVOLUCIÓN DEL DEPARTAMENTO DE FINANZAS:**

FASE 1: LA EXTERNALIZACIÓN TOTAL (PRE-SEED Y SEED)
En las primeras etapas de la startup, la función financiera está típicamente externalizada: un asesor fiscal y contable externo gestiona la contabilidad, la facturación, las declaraciones fiscales y el cumplimiento legal básico. El CEO o el COO hacen el seguimiento del cash flow con una hoja de cálculo. Este modelo es eficiente para el volumen de transacciones y la complejidad de esta etapa, pero tiene un límite claro: cuando el negocio crece, la externación total no puede dar la visibilidad financiera en tiempo real que la empresa necesita para tomar decisiones. Ayúdame a identificar las señales que indican que es el momento de internalizar la función financiera.

EL PRIMER FINANCE HIRE: FINANCE MANAGER O CONTROLLER
La primera contratación financiera interna es una de las decisiones más importantes del CEO. El debate clásico es entre contratar un Controller (enfocado en el cierre contable y el cumplimiento) o un Finance Manager más generalista que pueda hacer tanto la parte contable como el análisis financiero básico. La decisión depende del mayor dolor actual: si el problema es el cierre contable y el compliance, el Controller es la prioridad; si el problema es la falta de visibilidad para la toma de decisiones, el Finance Manager o incluso un Head of Finance con perfil más estratégico puede ser el primer hire correcto. Ayúdame a definir el perfil del primer finance hire para mi empresa y a diseñar el proceso de selección.

FASE 2: SEPARAR ACCOUNTING DE FP&A
A medida que la empresa crece (típicamente a partir de Series A-B), la función financiera se divide en dos grandes especialidades: la contabilidad (accounting) que se ocupa del registro preciso de todas las transacciones, el cierre contable mensual y el cumplimiento fiscal, y la planificación y análisis financiero (FP&A) que se ocupa de los modelos financieros, los presupuestos, las previsiones y el análisis del rendimiento del negocio. Ayúdame a diseñar la transición de un Finance Manager generalista a un equipo con roles especializados en accounting y FP&A: cuándo hacer la separación, qué perfiles contratar y cómo gestionar la transición sin perder continuidad.

**LAS FUNCIONES FINANCIERAS ESPECIALIZADAS:**

EL EQUIPO DE FP&A: EL SOCIO ESTRATÉGICO DEL NEGOCIO
La función de FP&A es la que más valor estratégico puede aportar al negocio: la construcción del modelo financiero de la empresa, el presupuesto anual, las previsiones rolling, los análisis de unit economics y rentabilidad por producto o segmento de cliente, y el soporte a las decisiones de inversión y asignación de recursos. Un buen equipo de FP&A es el socio financiero de los líderes de negocio y les da la visibilidad que necesitan para tomar mejores decisiones. Ayúdame a diseñar el equipo de FP&A: los perfiles que lo componen, las herramientas que usan (modelo financiero, herramientas de BI, software de FP&A), los entregables recurrentes (presupuesto, forecast mensual, board reporting) y cómo medir el impacto del equipo de FP&A en el negocio.

TREASURY, TAX Y COMPLIANCE: CUÁNDO SE NECESITAN
Con el crecimiento internacional y el aumento de la complejidad fiscal, las empresas necesitan eventualmente funciones especializadas de treasury (gestión del cash, inversión de los excedentes de liquidez, gestión del riesgo de tipo de cambio), tax (planificación fiscal internacional, precios de transferencia, compliance en múltiples jurisdicciones) y legal/compliance. Ayúdame a entender cuándo y cómo construir estas capacidades: las señales que indican que la complejidad supera la capacidad del equipo generalista, si es mejor externalizar o construir el expertise interno y cómo estructurar estas funciones cuando se internalizan.

HERRAMIENTAS Y SISTEMAS FINANCIEROS
La capacidad del departamento de finanzas de servir al negocio depende en gran medida de la calidad de sus herramientas: el ERP o sistema contable, las herramientas de FP&A, las plataformas de pagos internacionales, las herramientas de gestión de gastos y el software de reporting. Ayúdame a diseñar el stack tecnológico del departamento de finanzas adaptado al estadio actual de mi empresa y el plan de migración cuando el crecimiento lo requiera.

Dame el plan completo de construcción y evolución del departamento de finanzas para mi empresa, con los roles prioritarios, el timing de las contrataciones y los sistemas que necesito en cada etapa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño y evolución del departamento de finanzas por etapa de empresa: desde el primer finance hire hasta FP&A, treasury y tax',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal team design: in-house vs external, y cómo estructurar el departamento jurídico',
                'description'       => 'Aprende a tomar las decisiones correctas sobre cuándo construir el equipo jurídico interno, qué funciones externalizar a despachos, cómo estructurar el departamento legal en crecimiento y cómo medir el valor que aporta el área jurídica al negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o Chief Legal Officer con experiencia construyendo departamentos jurídicos internos en empresas en crecimiento, tomando las decisiones sobre cuándo internalizar versus externalizar las funciones legales, diseñando la estructura del equipo y gestionando la relación con los despachos externos. Quiero aprender a diseñar y gestionar el departamento jurídico que mejor sirve al negocio en cada etapa de crecimiento, optimizando el coste legal sin comprometer la calidad ni el cumplimiento.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de la empresa y el estadio de crecimiento, y cómo está gestionada actualmente la función jurídica (totalmente externa, primer abogado interno, equipo en construcción)?
2. ¿Cuáles son las áreas jurídicas de mayor demanda y riesgo en tu negocio (contratos comerciales, propiedad intelectual, laboral, regulatorio, privacidad, M&A)?
3. ¿Cuál es el mayor dolor del modelo actual: el coste de los despachos externos, la lentitud de respuesta, la falta de conocimiento del negocio por parte de los externos, o la calidad del asesoramiento?
4. ¿Tu empresa opera en múltiples jurisdicciones o principalmente en España?

**EL DEBATE IN-HOUSE VS EXTERNAL:**

CUÁNDO CONTRATAR EL PRIMER ABOGADO IN-HOUSE
La decisión de contratar el primer abogado interno es una de las más importantes para el CEO y el CFO. El primer abogado in-house tiene sentido cuando: el volumen de trabajo legal recurrente justifica el coste de un salario versus las horas de despacho, la empresa necesita asesoramiento legal integrado en el proceso de negocio (no solo consultoría reactiva), los riesgos legales del negocio son suficientemente complejos o específicos como para que valga la pena tener expertise interno, y el tiempo de respuesta de los externos es un cuello de botella. Ayúdame a evaluar si mi empresa está en el momento correcto para el primer abogado in-house y a definir el perfil que busco: si necesito un generalista que cubra múltiples áreas o un especialista en el área de mayor riesgo.

EL MODELO HÍBRIDO: LO MEJOR DE AMBOS MUNDOS
El modelo más eficiente en la mayoría de las empresas en crecimiento no es ni la externalización total ni el equipo interno completo, sino un modelo híbrido: un equipo interno pequeño que gestiona el trabajo recurrente y de alta frecuencia (contratos comerciales estándar, revisiones de NDAs, gestión del cumplimiento) apoyado por despachos externos para el trabajo especializado, de alta complejidad o con picos de demanda (M&A, litigación, regulatorio internacional). La clave del modelo híbrido es definir con claridad qué se hace inside y qué se externaliza, y gestionar la relación con los despachos externos de manera que sean verdaderos socios estratégicos del negocio. Ayúdame a diseñar el modelo híbrido para mi empresa.

**LA ESTRUCTURA DEL DEPARTAMENTO JURÍDICO:**

LOS ROLES DEL EQUIPO JURÍDICO EN CRECIMIENTO
El departamento jurídico de una empresa en crecimiento evoluciona de manera previsible: el primer hire es típicamente un generalista con capacidad de corporativo, contratos y laboral básico; con el crecimiento se añaden especialistas en las áreas de mayor volumen o riesgo (privacidad y GDPR si hay datos de usuarios, regulatorio si hay licencias, propiedad intelectual si la tecnología es core); el equipo senior incluye un General Counsel o Chief Legal Officer con visión estratégica y habilidad para gestionar tanto el equipo interno como los despachos externos. Ayúdame a diseñar el plan de construcción del equipo jurídico: el orden de contratación, los perfiles prioritarios y el timing en función del crecimiento del negocio.

LA GESTIÓN DE LOS DESPACHOS EXTERNOS
La relación con los despachos externos es una palanca crítica de la función jurídica. La mayoría de las empresas gestionan esta relación de manera reactiva y cara: contratan al despacho cuando tienen un problema y pagan las horas sin una estructura de optimización. Los departamentos jurídicos más avanzados gestionan sus despachos como proveedores estratégicos: con panels de despachos seleccionados por especialidad, fee arrangements alternativos (fixed fees, retainers, blended rates), budget control rigoroso y métricas de performance para los despachos. Ayúdame a diseñar el sistema de gestión de despachos externos que optimiza el coste sin comprometer la calidad.

**MEDIR EL VALOR DEL DEPARTAMENTO JURÍDICO:**

EL PROBLEMA DEL DEPARTAMENTO JURÍDICO COMO COST CENTER
El departamento jurídico es típicamente percibido como un cost center: genera costes pero no ingresos directos. Esta percepción infravalora el valor real que aporta la función jurídica al negocio: los contratos bien negociados que protegen los ingresos, la gestión de los riesgos que previene las pérdidas, el asesoramiento que permite al negocio moverse más rápido con seguridad. Ayúdame a construir el framework de métricas que hace visible el valor del departamento jurídico: los indicadores de eficiencia (tiempo de respuesta, coste por contrato), los indicadores de riesgo gestionado (valor del riesgo mitigado, incidents evitados) y los indicadores de impacto en el negocio (deals acelerados por soporte jurídico ágil).

Dame el plan completo de diseño del departamento jurídico para mi empresa, con el modelo híbrido in-house/external, la estructura del equipo interno, el sistema de gestión de despachos y las métricas de valor que justifican la inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño del departamento jurídico: modelo in-house vs external, estructura del equipo legal en crecimiento y gestión de despachos',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS team structure: high-touch, low-touch, tech-touch y cuándo usar cada modelo',
                'description'       => 'Aprende a diseñar la estructura del equipo de customer success en función del ACV, el volumen de clientes y el estadio de la empresa: cuándo invertir en high-touch, cuándo escalar con tech-touch y cómo segmentar para maximizar el NRR.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia construyendo y restructurando equipos de CS en empresas SaaS B2B en diferentes estadios de crecimiento, con conocimiento profundo de los modelos de cobertura de clientes (high-touch, low-touch, tech-touch) y cómo elegir el modelo correcto para cada segmento de clientes en función del ACV, el potencial de expansión y el coste de atención. Quiero diseñar la estructura del equipo de CS que maximiza el Net Revenue Retention mientras mantiene la eficiencia operativa.

**Preguntas iniciales:**
1. ¿Cuál es el ACV (Annual Contract Value) promedio de tu base de clientes y cómo está segmentada (SMB, mid-market, enterprise)?
2. ¿Cuántos clientes gestiona actualmente cada CSM y cuál es el NRR (Net Revenue Retention) actual?
3. ¿Cuál es el mayor problema del modelo de CS actual: el churn es alto, el equipo está saturado, no hay capacidad para upsell, o los clientes enterprise reciben el mismo tratamiento que los SMB?
4. ¿Tienes actualmente algún nivel de CS automatizado o tech-touch, o todo el CS es gestionado por personas?

**LOS MODELOS DE COBERTURA EN CUSTOMER SUCCESS:**

HIGH-TOUCH CS: GESTIÓN PROACTIVA Y PROFUNDA
El modelo high-touch asigna un CSM dedicado a cada cuenta, con contacto frecuente (semanal o quincenal), un programa de éxito personalizado, QBRs (Quarterly Business Reviews) regulares y capacidad para escalar problemas complejos. Este modelo es justificable cuando el ACV de la cuenta es suficientemente alto para cubrir el coste del CSM, cuando el producto tiene alta complejidad de implementación, cuando el potencial de expansión de la cuenta es significativo y cuando la pérdida de la cuenta tendría un impacto material en el negocio. Ayúdame a definir los criterios para las cuentas high-touch en mi empresa: el ACV mínimo, el potencial de expansión y otros factores de priorización, y a diseñar el modelo de cobertura high-touch: el ratio CSM/cuentas, la cadencia de contacto y el programa de éxito.

LOW-TOUCH CS: EFICIENCIA CON CALIDAD
El modelo low-touch asigna un CSM a una cartera mayor de cuentas (típicamente 50-100) con un modelo de cobertura más reactivo y escalado: check-ins programados con menor frecuencia, playbooks estándar para los momentos críticos del ciclo de vida del cliente y escalado a recursos compartidos (webinars, guías, support team) para las necesidades que no requieren atención personalizada. Este modelo es adecuado para el segmento de clientes con ACV medio donde el high-touch no es rentable pero donde hay suficiente potencial de expansión como para que valga la pena la inversión en CS. Ayúdame a diseñar el modelo low-touch para el segmento correspondiente de mi empresa: la cadencia de contacto, los playbooks de intervención en los momentos críticos y las métricas de eficiencia del CSM en modelo low-touch.

TECH-TOUCH CS: ESCALAR SIN ESCALAR EL EQUIPO
El modelo tech-touch reemplaza la mayor parte del contacto humano con interacciones automatizadas: emails de onboarding y de educación disparados por el comportamiento del usuario, alertas automáticas cuando el usuario lleva tiempo sin hacer login, webinars grupales para la formación de los clientes, y un sistema de scoring que identifica los clientes en riesgo para una intervención proactiva puntual de un CSM. Este modelo es el único viable para el segmento de clientes con ACV bajo donde el coste de la atención personalizada supera el valor del contrato. Ayúdame a diseñar la estrategia tech-touch para mi empresa: los triggers de automatización, el contenido del programa de lifecycle marketing para clientes, y cuándo y cómo interviene el humano en el modelo tech-touch.

**DISEÑAR LA SEGMENTACIÓN Y EL MODELO DE COBERTURA:**

LA SEGMENTACIÓN DE LA BASE DE CLIENTES
El primer paso para diseñar el equipo de CS correcto es segmentar la base de clientes según los criterios que determinan el modelo de cobertura adecuado: el ACV actual, el ACV potencial (tamaño de la empresa y expansión posible), el nivel de complejidad técnica del uso del producto y la estrategia de expansión de mercado. Una segmentación típica divide los clientes en enterprise (high-touch), mid-market (low-touch) y SMB (tech-touch), aunque los criterios específicos varían según el negocio. Ayúdame a diseñar la segmentación de mis clientes actuales y a calcular el modelo de cobertura que maximiza el NRR dentro de los límites de coste que puedo asumir.

EL RATIO CSM/CLIENTES Y EL COSTE DE COBERTURA
El ratio de clientes por CSM es la decisión más directa en el diseño del equipo de CS. Un ratio demasiado bajo (pocos clientes por CSM) produce una experiencia de alta calidad pero un coste de CS que puede ser insostenible. Un ratio demasiado alto produce un CSM saturado que no puede hacer CS proactivo y resulta en mayor churn. Ayúdame a calcular el ratio óptimo para cada segmento de mi base de clientes y a estimar el headcount del equipo de CS que necesito para cubrir la base actual con el modelo de cobertura diseñado.

LA ESTRUCTURA DEL EQUIPO DE CS A ESCALA
A medida que el equipo de CS crece, necesita roles especializados más allá del CSM generalista: el Onboarding Specialist que gestiona las primeras semanas de vida del cliente, el Technical Account Manager para los clientes enterprise con necesidades de integración complejas, el Renewal Manager que gestiona el proceso de renovación como proceso de ventas, y el CSM Manager que lidera equipos de 5-8 CSMs. Ayúdame a diseñar la estructura del equipo de CS para mi empresa actual y el plan de evolución a medida que la base de clientes crece.

Dame la estructura completa del equipo de customer success para mi empresa, con la segmentación de clientes, el modelo de cobertura por segmento, el headcount necesario y el plan de evolución para los próximos doce meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño del equipo de CS con modelos high-touch, low-touch y tech-touch, segmentación de clientes y optimización del NRR',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Construir un equipo alrededor del freelance: de solopreneur a micro-agencia',
                'description'       => 'Aprende a hacer la transición de freelance individual a micro-agencia o estudio: cuándo contratar los primeros colaboradores, cómo estructurar el equipo para mantener la calidad y la rentabilidad, y cómo gestionar el negocio que ya no puedes hacer solo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de negocio para freelancers y propietarios de micro-agencias con experiencia acompañando a profesionales independientes en la transición de solopreneur a dirigir un equipo pequeño, con conocimiento profundo de los desafíos operativos, financieros y humanos de esta transición y de los modelos de negocio que la hacen sostenible. Quiero aprender a construir el equipo alrededor de mi negocio freelance de manera que aumente los ingresos, mantenga la calidad del trabajo y no me convierta en el gestor que ya no puede trabajar en los proyectos que le gustan.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad y el tipo de cliente actual? ¿Estás rechazando proyectos por falta de capacidad o el problema es diferente?
2. ¿Cuál es tu objetivo: aumentar los ingresos manteniendo la calidad, ofrecer un servicio más completo a tus clientes actuales, o reducir tu dependencia de clientes únicos construyendo un equipo?
3. ¿Tienes ya algún colaborador (subcontratistas, freelancers que te ayudan puntualmente) o estás completamente solo?
4. ¿Cuál es tu mayor miedo sobre la transición: perder el control de la calidad, no poder pagar a las personas si bajan los proyectos, o convertirte en manager en lugar de en especialista?

**LA DECISIÓN DE CRECER: CUÁNDO Y POR QUÉ:**

LAS SEÑALES QUE INDICAN QUE ES EL MOMENTO DE CONTRATAR
No todos los freelancers deben construir un equipo. La transición tiene sentido cuando: rechazas sistemáticamente proyectos por falta de capacidad (no por falta de demanda), tienes proyectos recurrentes con clientes estables que garantizan una base de ingresos, el trabajo que produces tiene componentes repetibles que otros pueden ejecutar con las instrucciones correctas y estás dispuesto a dedicar tiempo a gestionar personas además de hacer trabajo de cliente. Si estás considerando contratar solo para "trabajar menos" sin tener la demanda que lo justifique, el modelo no va a funcionar. Ayúdame a evaluar honestamente si estoy en el momento correcto para empezar a construir el equipo.

LOS MODELOS DE EQUIPO EN EL FREELANCE EXPANDIDO
Hay diferentes maneras de construir un equipo alrededor de tu negocio freelance: el modelo de subcontratación (usas colaboradores freelancers para los proyectos que lo requieren sin contratación fija), el modelo de micro-agencia con colaboradores fijos (tienes un equipo pequeño estable con el que trabajas en todos los proyectos), el modelo de studio (una estructura más formalizada con roles definidos, procesos documentados y capacidad para varios proyectos en paralelo) y el modelo de productizado (conviertes tu expertise en un servicio estandarizado que un equipo puede ejecutar con menor dependencia de ti). Ayúdame a evaluar cuál de estos modelos es más adecuado para mi caso y a diseñar la transición hacia él.

**LOS PRIMEROS COLABORADORES:**

A QUIÉN CONTRATAR PRIMERO
La primera contratación del freelance que está construyendo su equipo es crítica. El error más común es contratar a alguien igual a ti (otro especialista en tu misma especialidad) cuando lo que más necesitas es alguien que haga las cosas que no quieres hacer o que no eres bueno haciendo: la gestión administrativa, la coordinación de proyectos, las partes del trabajo que son repetitivas y no requieren tu nivel de expertise. Ayúdame a identificar cuál es el perfil de la primera contratación más impactante para mi negocio y cómo diseñar el rol de manera que libere mi tiempo para el trabajo de mayor valor.

SUBCONTRATAR VS CONTRATAR: LAS IMPLICACIONES
La decisión entre trabajar con subcontratistas freelancers o contratar personas fijas (empleados o autónomos continuos) tiene implicaciones operativas, financieras y de riesgo muy diferentes. Los subcontratistas ofrecen flexibilidad: solo pagas cuando hay trabajo; pero conllevan riesgo de disponibilidad y menor compromiso con los estándares del negocio. Las contrataciones fijas ofrecen consistencia y desarrollo del talento; pero crean compromisos de coste mensual independientemente del volumen de proyectos. Ayúdame a diseñar el modelo de relación con los colaboradores que mejor se adapta a la estructura de ingresos y al tipo de trabajo de mi negocio.

**LA GESTIÓN DEL NEGOCIO CON EQUIPO:**

SISTEMAS Y PROCESOS PARA ESCALAR LA CALIDAD
La calidad de un freelance individual está garantizada por tu conocimiento y tu estándar personal. Cuando el trabajo lo hacen otras personas, la calidad debe estar garantizada por los sistemas: los briefs de proyecto que capturan el contexto que los colaboradores necesitan para ejecutar bien, las revisiones en los puntos clave del proceso, los estándares de entrega documentados y el proceso de feedback que mejora a los colaboradores con el tiempo. Ayúdame a construir los sistemas que garantizan la calidad del trabajo cuando no soy yo quien lo ejecuta.

LA RENTABILIDAD DEL NEGOCIO CON EQUIPO
La rentabilidad del freelance con equipo es una ecuación diferente a la del freelance individual. Cuando contratas colaboradores, tu margen bruto (la diferencia entre lo que cobras al cliente y lo que pagas a los colaboradores) es la base de tu negocio. Ayúdame a construir el modelo financiero de mi negocio con equipo: el precio de los servicios que cubre los costes de los colaboradores y genera un margen suficiente, cómo gestionar el riesgo de períodos de baja demanda con costes fijos de personal y cuándo el modelo de equipo genera más ingresos para mí que el modelo solopreneur.

Dame el plan completo para construir el equipo alrededor de mi negocio freelance: el modelo de equipo correcto para mi caso, la primera contratación, los sistemas de calidad y el modelo financiero que lo hace sostenible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Transición de freelance solopreneur a micro-agencia: cuándo contratar, qué modelo de equipo, sistemas de calidad y rentabilidad',
                'vote_score'        => 46,
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
