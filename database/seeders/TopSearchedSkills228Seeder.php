<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills228Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing para startups en fase de crecimiento',
                'description'       => 'El marketing de una startup que acaba de levantar una ronda: cómo escalar el equipo de marketing, los canales que priorizan, el balance entre brand y performance y las métricas de marketing que los inversores quieren ver.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing para startups en fase de crecimiento con experiencia trabajando con empresas respaldadas por venture capital en la transición del 0 al 1 al 1 al 10. Necesito tu ayuda para diseñar la estrategia de marketing de mi startup en esta fase crítica de post-ronda.

Mi contexto:
- Descripción del producto o servicio: [qué resuelves y para quién]
- Ronda que acabo de cerrar o que estoy planificando: [seed / serie A / serie B y el importe aproximado]
- Estado actual del marketing: [sin equipo / una persona / equipo pequeño sin estructura]
- Canales de adquisición actuales si los hay: [indica cuáles y su rendimiento aproximado]
- Mercado objetivo principal: [B2B / B2C / B2B2C, sector, geografía]
- Métrica norte (North Star Metric) de la empresa: [la que define el crecimiento del negocio]

Con ese contexto, dame:

1. LA ESTRATEGIA DE MARKETING POST-RONDA: POR DÓNDE EMPEZAR
¿Cuál es el orden correcto de prioridades de marketing para una startup que acaba de levantar una ronda? Explícame por qué no debo hacer todo a la vez: cuál es el canal que debo dominar primero antes de diversificar, cómo balanceo entre los canales de adquisición a corto plazo (paid) y los canales de construcción a largo plazo (SEO, brand, community), y qué parte del presupuesto de marketing debo reservar para experimentos versus para escalar lo que ya sé que funciona. Para mi caso específico, ¿cuál es la secuencia correcta?

2. CONSTRUIR EL EQUIPO DE MARKETING: LA SECUENCIA DE CONTRATACIONES
¿En qué orden debo contratar el equipo de marketing después de levantar una ronda? Dame la secuencia de contrataciones de marketing según el tamaño de la ronda y la etapa: si el primer marketer debe ser un generalista que hace todo, un growth marketer que escala la adquisición o directamente un head of marketing que construye el equipo. ¿Cuándo tiene sentido contratar especialistas (SEO, paid media, content) versus generalistas o agencias? ¿Cuál es el error más frecuente en la contratación del equipo de marketing de una startup que acaba de cerrar ronda?

3. BRAND VS PERFORMANCE: EL BALANCE CORRECTO SEGÚN LA ETAPA
¿Cuánto invertir en brand marketing versus performance marketing en cada etapa de crecimiento? Explícame por qué las startups early-stage que solo hacen performance marketing construyen un techo de cristal de crecimiento, y por qué las que solo hacen brand no tienen el combustible para el crecimiento a corto plazo. Dame el framework para decidir el mix correcto de brand y performance según la etapa, el sector y el ciclo de compra, con ejemplos de startups que han encontrado el balance correcto y las que no.

4. LAS MÉTRICAS DE MARKETING QUE LOS INVERSORES QUIEREN VER
¿Qué métricas de marketing debo presentar en el board de inversores y cómo las calculo correctamente? Dame el set de métricas de marketing que los VCs de serie A y serie B esperan ver en el reporting mensual: el CAC por canal y el CAC blended, el LTV/CAC ratio, el payback period de la adquisición, la tasa de crecimiento del pipeline generado por marketing, el porcentaje de revenue atribuido a marketing y la eficiencia del gasto en marketing (ROAS blended, MER). ¿Cuáles son las métricas que los inversores usan para evaluar si el equipo de marketing está desplegando el capital de forma eficiente?

5. PRODUCT-LED GROWTH VS SALES-LED GROWTH: EL MODELO QUE ESCALA
¿Debo apostar por un modelo PLG o por un modelo SLG después de la ronda? Dame el framework de decisión entre PLG (el producto genera adquisición, activación y retención sin necesidad de un equipo de ventas grande) y SLG (el equipo de ventas lidera el crecimiento con el marketing como soporte de generación de demanda). ¿Cuándo tiene sentido el modelo híbrido PLG+SLG y cuándo intentar los dos a la vez mata la ejecución? Para mi tipo de producto y mercado, ¿cuál recomiendas?

6. CATEGORY CREATION VS CATEGORY CAPTURE
¿Debo crear una nueva categoría de producto o debo posicionarme dentro de una existente? Explícame la diferencia entre category creation (más lento y costoso, pero con menor competencia si funciona) y category capture (más rápido, pero con más competencia y mayor presión de precio). Dame los criterios para decidir cuál adoptar según mi producto y mercado, los errores más comunes de las startups que intentan crear categoría sin el presupuesto suficiente y los ejemplos de startups que hicieron bien cada estrategia.

7. EL PLAN DE MARKETING A DOCE MESES: CÓMO ESTRUCTURARLO
¿Cómo construyo el plan de marketing a doce meses que le presento al board de inversores? Dame la estructura del plan de marketing anual para una startup post-ronda: los objetivos de negocio que el marketing debe soportar, la estrategia por canal con presupuesto y KPIs, el plan de contrataciones del equipo, los experimentos que voy a lanzar y cómo voy a medir el éxito, y los hitos de marketing que quiero haber alcanzado al final de cada trimestre. ¿Cuáles son los compromisos de marketing que debo y no debo hacer frente a los inversores?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar la estrategia de marketing de una startup en fase de crecimiento post-ronda: equipo, canales, métricas y balance entre brand y performance.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Engineering para el crecimiento: escalar la arquitectura con la empresa',
                'description'       => 'El equipo de ingeniería que crece de 5 a 50 developers: la evolución de la arquitectura, los problemas de coordinación que aparecen con la escala y las decisiones técnicas que hay que tomar antes de que los problemas de escala paralicen el negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ingeniería de software y liderazgo técnico con experiencia en escalar equipos y arquitecturas en startups respaldadas por venture capital. Necesito tu ayuda para navegar la transición de un equipo de ingeniería pequeño a uno que puede crecer de 5 a 50 developers sin que la velocidad de entrega se desplome.

Mi contexto:
- Estado actual del equipo: [número de developers, seniority mix, estructura del equipo]
- Arquitectura técnica actual: [monolito, microservicios, serverless, descripción del stack]
- Fase de crecimiento: [acabamos de levantar una ronda / en proceso de contratar / la arquitectura ya está dando problemas]
- Principales problemas técnicos actuales: [deploys lentos / base de código que nadie entiende entero / coordinación difícil entre developers / incidencias frecuentes en producción / deuda técnica que frena la velocidad]
- Stack tecnológico principal: [lista las tecnologías principales]

Con ese contexto, dame:

1. LOS PROBLEMAS DE ESCALA QUE APARECEN DE 5 A 50 DEVELOPERS
¿Qué problemas técnicos y organizativos surgen inevitablemente cuando un equipo de ingeniería crece de 5 a 50 personas? Explícame los problemas que no eran problemas con un equipo pequeño: el coupling del código que impide que múltiples equipos trabajen en paralelo sin pisarse, la falta de ownership claro de los sistemas, el test suite que tarda cuarenta minutos en ejecutarse, los deploys que requieren coordinación manual, las dependencias entre equipos que generan cuellos de botella y la falta de documentación que hace que el conocimiento tribal se convierta en un riesgo. ¿Cuáles son los primeros síntomas de que la arquitectura no va a escalar con el equipo?

2. MONOLITO VS MICROSERVICIOS: LA DECISIÓN QUE NO TIENE VUELTA FÁCIL
¿Cuándo tiene sentido migrar de un monolito a microservicios y cuándo es un error prematuro? Dame el framework de decisión: los síntomas del monolito que ya no puede seguir creciendo (ciclos de deploy que bloquean a todos, imposibilidad de escalar componentes independientemente, tecnología que limita el reclutamiento), los beneficios reales versus los costes ocultos de los microservicios (overhead de operaciones, complejidad de la comunicación entre servicios, dificultad del debugging distribuido), y el camino intermedio del modular monolith que puede darte los beneficios de la separación sin los costes operativos de los microservicios.

3. LA ARQUITECTURA DE EQUIPOS: CONWAY'S LAW EN PRÁCTICA
¿Cómo estructuro los equipos de ingeniería para que la arquitectura técnica y la estructura del equipo estén alineadas? Explícame la ley de Conway en términos prácticos: por qué la arquitectura del software tiende a reflejar la estructura de comunicación de la organización, cómo diseñar los equipos para que tengan ownership completo de sus sistemas (equipos de stream-aligned versus platform teams versus enabling teams según el modelo de Team Topologies), y cómo evitar los equipos con demasiadas dependencias externas que se convierten en cuellos de botella.

4. DEUDA TÉCNICA: CÓMO GESTIONARLA CUANDO HAY PRESIÓN DE CRECIMIENTO
¿Cómo gestiono la deuda técnica acumulada en la fase de velocidad cuando ahora necesito escalar sin que el negocio se detenga? Dame el proceso de gestión de la deuda técnica en una startup en crecimiento: cómo identificar y priorizar la deuda que realmente frena la velocidad versus la deuda que es incómoda pero no urgente, cómo negociar con el negocio el tiempo para reducir la deuda sin parecer que estás frenando el crecimiento, y las estrategias de reducción de deuda que minimizan el riesgo (refactoring incremental, strangler fig pattern, feature flags para migrar gradualmente).

5. EL PIPELINE DE CI/CD QUE ESCALA CON EL EQUIPO
¿Cómo diseño el pipeline de integración continua y despliegue continuo que mantiene la velocidad cuando hay veinte developers haciendo push al mismo tiempo? Dame el diseño del pipeline ideal: la estrategia de branching (trunk-based development versus gitflow), el test suite que da feedback rápido sin tardar cuarenta minutos, los feature flags que permiten deploys frecuentes sin afectar a los usuarios, el proceso de revisión de código que no se convierte en cuello de botella y los mecanismos de rollback que hacen que un deploy fallido sea un evento menor y no una emergencia.

6. CONTRATACIÓN TÉCNICA EN HIPERCRECIMIENTO: CALIDAD VS VELOCIDAD
¿Cómo mantengo la calidad de las contrataciones técnicas cuando el negocio me presiona para contratar rápido? Dame el proceso de contratación técnica que escala: la entrevista estructurada que es consistente aunque no siempre participe el mismo engineering manager, el calibrado del panel de entrevistadores para que usen los mismos criterios, el proceso de onboarding que hace que el nuevo developer empiece a contribuir en la primera semana (no en el primer mes), y los criterios de contratación que no sacrifico aunque haya presión de velocidad.

7. ENGINEERING CULTURE EN CRECIMIENTO RÁPIDO: CÓMO NO DESTRUIRLA
¿Cómo protejo la cultura de ingeniería (excelencia técnica, autonomía, foco en el impacto) cuando la empresa crece rápido y llega nuevo management que no viene del mundo técnico? Dame las prácticas que preservan la cultura de ingeniería: el proceso de revisión técnica que no se convierte en comité de aprobación, la autonomía del equipo para tomar decisiones técnicas dentro de los guardianes definidos, el espacio para la innovación y la experimentación aunque haya presión de entrega, y la comunicación de las decisiones técnicas al negocio de forma que se entienda el valor sin necesidad de entrar en el detalle técnico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Escalar la arquitectura técnica y el equipo de ingeniería de 5 a 50 developers sin perder velocidad de entrega ni cultura de excelencia.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de producto en empresas respaldadas por VC',
                'description'       => 'El diseñador en una startup con inversión: las presiones del crecimiento rápido sobre el proceso de diseño, el balance entre velocidad y calidad y la gestión de stakeholders en una empresa donde el inversor tiene mucha opinión.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño de producto con experiencia en startups respaldadas por venture capital en distintas fases de crecimiento. Necesito tu ayuda para navegar los retos específicos del diseño de producto en una startup que acaba de levantar una ronda y que está bajo presión de crecimiento rápido.

Mi contexto:
- Tipo de producto que diseño: [B2B SaaS, consumer app, marketplace, plataforma, etc.]
- Ronda actual de la empresa: [seed / serie A / serie B]
- Tamaño del equipo de diseño: [solo / dos a tres diseñadores / equipo pequeño]
- Relación actual con producto e ingeniería: [describe brevemente cómo funciona la colaboración]
- Principal tensión de diseño ahora mismo: [velocidad vs calidad / falta de research / stakeholders con demasiadas opiniones / deuda de diseño acumulada / sin sistema de diseño]

Con ese contexto, dame:

1. DISEÑAR RÁPIDO SIN DISEÑAR MAL: EL BALANCE CORRECTO
¿Cómo encuentro el balance entre la velocidad que exige una startup en crecimiento y la calidad de diseño que hace que el producto sea diferencial? Explícame el concepto de diseño de suficiente calidad para el momento (good enough design for the stage): qué nivel de pulido es necesario en cada fase de la startup, cómo identificar qué partes del producto necesitan el máximo nivel de calidad (los flujos de conversión, el onboarding, los momentos de WOW del producto) versus qué partes pueden ser funcionales sin ser perfectas, y cómo negociar con el PM y el engineering lead cuando la presión de entrega amenaza la calidad en los lugares que más importan.

2. DESIGN DEBT: EL ENEMIGO SILENCIOSO DEL DISEÑO EN STARTUPS
¿Cómo gestiono la deuda de diseño acumulada en la fase de velocidad sin que se convierta en un obstáculo para el crecimiento? Dame el proceso de gestión de la deuda de diseño: cómo identificar y cuantificar la deuda (inconsistencias en la UI, flujos que nunca se optimizaron, componentes duplicados), cómo priorizarla según el impacto en el usuario y en la velocidad del equipo de diseño, y cómo negociar con producto e ingeniería el tiempo para reducirla de forma incremental sin detener la entrega de nuevas features.

3. EL DESIGN SYSTEM EN UNA STARTUP: CUÁNDO CONSTRUIRLO
¿Cuándo tiene sentido invertir en un design system en una startup y cuándo es prematuro? Dame el framework de decisión: los síntomas que indican que ya es el momento (inconsistencias que el usuario nota, tiempo excesivo de handoff con ingeniería, diseñadores que duplican componentes en lugar de reutilizarlos), el MVP del design system que da el ochenta por ciento del valor con el veinte por ciento del esfuerzo, y cómo construirlo de forma que ingeniería lo adopte en lugar de ignorarlo.

4. GESTIÓN DE STAKEHOLDERS EN UNA STARTUP CON INVERSORES
¿Cómo gestiono la presión de los fundadores, los inversores y el board que tienen opiniones muy concretas sobre el diseño? Dame las técnicas de gestión de stakeholders para el diseñador en una startup: cómo presentar las decisiones de diseño basadas en datos y en research de usuarios (no en preferencias estéticas), cómo manejar al inversor que quiere que el producto se parezca a otro que conoce, cómo convertir el feedback subjetivo del fundador en criterios evaluables y cómo involucrar a los stakeholders en el proceso de diseño para que sientan ownership sin convertirlos en codiseñadores.

5. RESEARCH DE USUARIOS CON RECURSOS LIMITADOS
¿Cómo hago research de usuarios de calidad cuando no tengo un equipo de UX research dedicado y el tiempo es escaso? Dame el kit de research mínimo viable para un diseñador en startup: las cinco o seis entrevistas de usuario que dan más insight que cien encuestas, el test de usabilidad no moderado que puedo lanzar en una tarde, las métricas de producto que actúan como proxy del comportamiento del usuario, y cómo usar los datos de soporte, las grabaciones de Hotjar o FullStory y el NPS como fuentes de insight continuo sin necesitar un investigador dedicado.

6. DISEÑO PARA EL CRECIMIENTO: CÓMO EL DISEÑADOR CONTRIBUYE AL GROWTH
¿Cómo contribuye el diseño al crecimiento del negocio más allá de hacer que el producto sea bonito? Dame el framework del diseño orientado al crecimiento: cómo el diseñador trabaja en los flujos de onboarding que reducen el time-to-value, cómo optimiza los flujos de conversión y activación con experimentos de diseño, cómo diseña los momentos de expansión (upsell, invitación a otros usuarios, upgrade al tier superior) y cómo mide el impacto del diseño en las métricas de negocio. ¿Cómo presento mi contribución al crecimiento en términos que el CEO y el board de inversores entienden?

7. EL DISEÑADOR COMO VOZ DEL USUARIO EN LA STARTUP
¿Cómo me establezco como la voz del usuario en una startup donde las decisiones de producto se toman rápido y con mucha opinión interna? Dame las estrategias para posicionar al equipo de diseño como el guardian de la experiencia del usuario: cómo crear el flujo de insights de usuario que llega regularmente a los fundadores y al equipo de producto, cómo usar los datos de comportamiento de usuario para ganar credibilidad frente a las opiniones internas, y cómo convertir el feedback del usuario en munición de priorización en el planning de producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Navegar los retos del diseño de producto en una startup con inversión: velocidad, calidad, deuda de diseño y gestión de stakeholders.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Fundraising como venta: conseguir inversión',
                'description'       => 'El founder que consigue financiación: el proceso del fundraising como un proceso de ventas, el pitch deck que convence a los inversores y las respuestas a las preguntas difíciles que siempre hacen en el due diligence.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en fundraising y ventas para startups con experiencia asesorando a founders en procesos de ronda de inversión de seed a serie B. Necesito tu ayuda para diseñar y ejecutar el proceso de fundraising como si fuera un proceso de ventas: con pipeline, con follow-up y con cierre.

Mi contexto:
- Descripción de la startup: [qué hace, mercado al que se dirige, modelo de negocio]
- Ronda que quiero levantar: [seed / pre-seed / serie A / serie B] y el importe objetivo
- Métricas actuales si las tengo: [ARR o MRR, growth rate, usuarios, GMV, retención, etc.]
- Estado del proceso de fundraising: [no he empezado / tengo reuniones pero no cierran / tengo un lead investor pero necesito completar la ronda / etc.]
- Principal dificultad en el fundraising: [no tengo acceso a los inversores correctos / las reuniones van bien pero no hay término sheet / no sé qué métricas les interesan / el pitch no convence]

Con ese contexto, dame:

1. EL FUNDRAISING COMO PROCESO DE VENTAS: LA MENTALIDAD CORRECTA
¿Por qué el fundraising es fundamentalmente un proceso de ventas y cuál es el impacto de adoptar esa mentalidad? Explícame la analogía completa: el inversor como el cliente ICP (los criterios de fit del inversor: tesis de inversión, etapa, sector, geografía), el pipeline de inversores como el pipeline de ventas (cuántos necesito al inicio del funnel para cerrar una ronda), el proceso de calificación (por qué hablar con inversores que no encajan es un desperdicio de tiempo), la gestión del proceso (cómo crear momentum entre distintos inversores para acelerar las decisiones) y el cierre (cómo forzar la decisión sin presionar y quemar la relación).

2. EL PITCH DECK: LA ESTRUCTURA QUE CONVENCE
¿Cuál es la estructura del pitch deck que convence a los inversores correctos? Dame la anatomía del pitch deck ideal para mi etapa: la portada que comunica la propuesta de valor en una frase, el problema que resuelvo con datos que muestran el tamaño real de la oportunidad, la solución y por qué es diferencial (no solo una descripción de producto), la tracción con las métricas más relevantes para mi etapa presentadas de forma honesta, el modelo de negocio que el inversor entiende en treinta segundos, el mercado con el TAM/SAM/SOM que es creíble (no inventado), el equipo y por qué somos las personas correctas para este problema, la competencia sin minimizarla y la petición (cuánto levanto, para qué lo uso, qué hitos me da). ¿Cuáles son los errores más frecuentes en cada slide?

3. ACCESO A LOS INVERSORES: CÓMO LLEGAR A LOS QUE IMPORTAN
¿Cómo consigo acceso a los inversores correctos si no tengo una red establecida en el ecosistema? Dame las estrategias para generar acceso de calidad: las presentaciones de founder a founder (warm intros que multiplican por diez la tasa de respuesta), los eventos y comunidades donde los inversores están de forma genuina, el inbound de inversores a través de contenido y visibilidad del fundador, las aceleradoras y programas que dan acceso a redes de inversión, y el cold outreach que funciona (y el que no). Para cada canal, dame la tasa de conversión esperada y el tiempo que consume.

4. LA REUNIÓN CON EL INVERSOR: CÓMO CONDUCIRLA
¿Cómo conduzco la reunión con un inversor para que sea una conversación y no una presentación unilateral? Dame el guión de la primera reunión: cómo abrir la reunión generando interés (no empezando por el pitch deck), cuándo y cómo presentar el deck, cómo hacer las preguntas que revelan si el inversor encaja con mi empresa (no solo si yo encajo con su tesis), cómo manejar las preguntas difíciles en tiempo real y cómo cerrar la reunión con un siguiente paso concreto que mantiene el momentum. ¿Cuáles son los errores más frecuentes de los founders en las reuniones con inversores?

5. LAS PREGUNTAS DIFÍCILES DEL DUE DILIGENCE: CÓMO RESPONDERLAS
¿Cuáles son las preguntas difíciles que siempre aparecen en el due diligence y cómo las respondo de forma honesta y convincente? Dame las respuestas a las preguntas más frecuentes: por qué no has levantado antes si el mercado es tan grande, qué pasa si un competidor más grande replica tu producto, por qué tu equipo es el correcto para este problema, cómo defiendes las métricas de retención que están por debajo del benchmark del sector, y qué harías diferente si pudieras volver atrás. Para cada pregunta, dame el principio de la respuesta correcta: honesta, específica y que convierta una debilidad aparente en una señal de madurez del founder.

6. GESTIÓN DEL PIPELINE DE INVERSORES: EL PROCESO
¿Cómo gestiono el pipeline de veinte o treinta inversores simultáneos sin perder el hilo y sin parecer caótico? Dame el sistema de gestión del pipeline de inversores: el CRM mínimo (puede ser un Notion o una hoja de cálculo) con las etapas del proceso, el seguimiento de los términos clave del proceso de diligencia de cada inversor, el seguimiento de las fechas de revisión del comité, la gestión de los updates periódicos que mantienen el interés sin saturar al inversor y el proceso de creación de FOMO cuando tienes momentum (sin mentir sobre el estado de las negociaciones).

7. EL TÉRMINO SHEET Y LA NEGOCIACIÓN
¿Cómo negocio el término sheet cuando llega sin que las condiciones me destruyan la cap table? Dame el análisis de los términos clave que más importan y los que son más negociables: la valoración pre-money (y por qué a veces es mejor una valoración menor con mejores condiciones), las cláusulas de liquidation preference (participante vs no participante, y el múltiplo), el anti-dilution, el pro-rata y los derechos de información. ¿Cuándo necesito un abogado especializado en VC para revisar el término sheet y cuáles son las cláusulas que nunca debo aceptar sin asesoramiento?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar y ejecutar el proceso de fundraising como un proceso de ventas: pipeline, pitch deck, acceso a inversores y negociación del término sheet.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product-market fit antes de la Serie A',
                'description'       => 'Demuestra el PMF que los inversores de Serie A quieren ver: las métricas de retención, la densidad de uso y los indicadores cualitativos que convencen a un inversor de que el mercado quiere tu producto antes de que escales la distribución.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product strategy y en la evaluación del product-market fit con experiencia en startups en la transición de la etapa seed a la serie A. Necesito tu ayuda para diagnosticar el estado de PMF de mi producto y para construir el argumento de PMF que convence a los inversores de serie A de que el mercado quiere genuinamente lo que hemos construido.

Mi contexto:
- Descripción del producto: [qué hace, para quién, qué problema resuelve]
- Métricas actuales si las tengo: [ARR o MRR, usuarios activos, retención, growth rate, NPS, etc.]
- Señales positivas de PMF que ya tenemos: [clientes que renuevan, referencias espontáneas, uso frecuente, etc.]
- Señales preocupantes: [churn elevado, uso esporádico, dependencia de pocos clientes, etc.]
- Etapa actual: [seed con tracción inicial / buscando la serie A / ya tenemos algunos clientes pagando]

Con ese contexto, dame:

1. QUÉ ES REALMENTE EL PMF Y POR QUÉ ES TAN DIFÍCIL DE MEDIR
Explícame el product-market fit más allá de la definición de Marc Andreessen: por qué el PMF no es un estado binario sino un espectro, por qué muchos founders creen que tienen PMF cuando en realidad tienen problem-market fit (el problema es real pero la solución no es claramente superior a las alternativas), y por qué el PMF es específico a un segmento (puedes tener PMF para un tipo de cliente y cero PMF para otro). Dame los conceptos de PMF cualitativo versus cuantitativo y cuándo cada uno es más relevante.

2. LAS MÉTRICAS CUANTITATIVAS DE PMF QUE LOS VCs DE SERIE A QUIEREN VER
¿Qué métricas concretas buscan los inversores de serie A para validar el PMF? Dame el set de métricas cuantitativas de PMF: la retención de cohortes (qué curva de retención a los seis y doce meses indica PMF sólido según el tipo de producto), el NRR (por qué un NRR por encima del 120% es la señal más potente de PMF en B2B SaaS), el DAU/MAU ratio (qué ratio indica hábito versus uso esporádico), el time-to-value del onboarding (cómo la velocidad de activación predice la retención), y el porcentaje de usuarios que llegaría al 40% del survey de Sean Ellis. Para cada métrica, dame el umbral que indica PMF claro versus PMF débil.

3. EL ANÁLISIS DE COHORTES: LA RADIOGRAFÍA DEL PMF
¿Cómo construyo y presento el análisis de cohortes que muestra el PMF de forma convincente? Dame el proceso de construcción del análisis de cohortes: cómo agrupar a los usuarios por fecha de inicio, qué métrica de retención usar (usuarios activos, revenue, feature clave), cómo calcular la retención correctamente para evitar los errores más frecuentes (el survivor bias, el efecto del crecimiento sobre las cohortes recientes), y cómo presentar las curvas de cohortes de forma que el patrón de PMF sea evidente para un inversor en treinta segundos.

4. SEÑALES CUALITATIVAS DE PMF: LO QUE LOS NÚMEROS NO CAPTURAN
¿Cuáles son las señales cualitativas que indican PMF incluso cuando las métricas cuantitativas todavía no son perfectas? Dame el análisis de las señales cualitativas: los clientes que te contactan para pedirte features en lugar de solo reportar bugs, las referencias espontáneas entre clientes del mismo sector, el churn que revierten cuando amenazan con irse porque no encuentran una alternativa mejor, el uso del producto para casos de uso que no habías diseñado, y las conversaciones de venta donde el ciclo se acorta porque el cliente ya conoce el producto por referencias.

5. PMF PARA DISTINTOS TIPOS DE PRODUCTO
¿Cómo varía la definición y la medición del PMF según el tipo de producto? Dame las señales específicas de PMF para: el SaaS B2B de ciclo largo (la retención y el expansion revenue), el consumer product de uso diario (el DAU/MAU y la retención a los treinta días), el marketplace bilateral (la liquidez y el repeat rate de ambos lados) y el product-led growth (la tasa de activación del free-to-paid y el tiempo hasta la primera transacción de valor). Para mi tipo de producto, ¿cuáles son las métricas de PMF más relevantes?

6. CÓMO CONSTRUIR EL ARGUMENTO DE PMF PARA LA SERIE A
¿Cómo presento el estado de PMF de mi producto de forma convincente en las reuniones con inversores de serie A incluso cuando las métricas no son perfectas? Dame el framework del argumento de PMF: cómo combinar los datos cuantitativos con las señales cualitativas para construir una narrativa coherente, cómo presentar el churn de forma honesta pero en su contexto correcto (las razones del churn importan tanto como el número), cómo mostrar la evolución del PMF con el tiempo (de las cohortes antiguas a las recientes) y cómo identificar y nombrar el segmento donde el PMF es más claro (aunque no lo tengas para todos los clientes).

7. QUÉ HACER SI EL PMF NO ESTÁ CLARO
¿Qué hago si mis métricas sugieren que el PMF todavía no está consolidado antes de ir a la serie A? Dame el plan de acción para encontrar el PMF antes de la siguiente ronda: el proceso de discovery de los clientes con mayor retención para entender qué tienen en común, el proceso de pivot del segmento o del caso de uso basado en los datos de retención, cómo concentrar los recursos en el segmento donde el PMF es más claro en lugar de intentar servir a todos, y cuándo tiene sentido posponer el fundraising para tener mejores métricas versus cuándo la ventana de mercado no permite esperar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diagnosticar y demostrar el product-market fit con las métricas de retención, cohortes y señales cualitativas que convencen a los inversores de Serie A.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People ops en hipercrecimiento',
                'description'       => 'Gestiona las personas cuando la empresa crece de 10 a 100 empleados en 12 meses: la contratación masiva sin perder la cultura, los procesos de RRHH que se implementan por primera vez y los errores de people ops que destruyen la cultura de las startups que crecen demasiado rápido.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en people operations con experiencia en startups en hipercrecimiento que han pasado de 10 a 100 empleados en períodos de doce a dieciocho meses. Necesito tu ayuda para diseñar el modelo de people ops que gestiona el crecimiento explosivo sin que la cultura se destruya en el proceso.

Mi contexto:
- Tamaño actual del equipo: [número de empleados]
- Ritmo de crecimiento previsto: [cuántas personas planeas contratar en los próximos doce meses]
- Estado actual de people ops: [sin HR formal / una persona de people / equipo pequeño / agencia externa]
- Aspectos de la cultura actual que quieres preservar: [describe los dos o tres más importantes]
- Principal miedo del hipercrecimiento: [contratar mal / perder la cultura / gestores que no están preparados / procesos que se rompen / compensación desigual]

Con ese contexto, dame:

1. LA FUNCIÓN DE PEOPLE OPS EN HIPERCRECIMIENTO: QUÉ PRIORIZAR
¿Cuál es el orden correcto de prioridades de people ops cuando la empresa crece de 10 a 100 personas en un año? Explícame qué construir primero: el proceso de contratación que puede escalar sin sacrificar calidad, las políticas y la documentación mínima que evitan los problemas legales y de equidad, los rituales de cultura que no dependen de la cercanía física, el proceso de feedback y desarrollo de managers y el compensation framework que es equitativo a medida que el equipo crece. ¿Cuáles son los procesos de HR que implementados demasiado pronto matan la agilidad y cuáles implementados demasiado tarde generan crisis?

2. CONTRATACIÓN MASIVA SIN PERDER LA CALIDAD
¿Cómo mantengo la calidad de las contrataciones cuando necesito contratar veinte o treinta personas en tres meses? Dame el proceso de contratación que escala: la estandarización del proceso sin que se convierta en burocracia, la formación de los entrevistadores que no son de RRHH para que evalúen bien, el calibrado de los criterios de contratación con los managers de cada área, la gestión del pipeline de candidatos con un ATS que no requiere un equipo dedicado, y el proceso de toma de decisión que no crea cuellos de botella cuando hay que contratar a veinte personas al mismo tiempo.

3. PRESERVAR LA CULTURA EN EL HIPERCRECIMIENTO: LO QUE FUNCIONA Y LO QUE NO
¿Cómo preservo la cultura de la empresa cuando en tres meses el cincuenta por ciento del equipo es nuevo? Dame las prácticas que preservan la cultura de forma efectiva y las que son teatro cultural que no funciona: el onboarding cultural que transmite los valores de forma auténtica (no un slide deck), los rituales que se escalan con el equipo (las reuniones all-hands, las retrospectivas, los canales de comunicación transparente), el proceso de gestión de las personas que no encajan con la cultura y el rol de los primeros empleados como guardianes culturales a medida que la empresa crece.

4. LA CRISIS DEL MANAGER PRIMERIZO EN STARTUPS
¿Cómo gestiono la transición de los primeros empleados a managers cuando no tienen experiencia de gestión? Dame el programa mínimo de desarrollo de managers para una startup: la formación en los fundamentos de la gestión de personas (feedback, delegación, gestión del desempeño), el sistema de soporte del manager nuevo (el buddy de manager más experimentado, las reuniones de calibración entre managers), los primeros signos de que un manager está teniendo problemas y el proceso de intervención antes de que el problema afecte al equipo. ¿Cuándo tiene sentido contratar un manager externo en lugar de promover a alguien interno?

5. COMPENSACIÓN EQUITATIVA EN CRECIMIENTO RÁPIDO
¿Cómo gestiono la compensación de forma que sea equitativa cuando he contratado a personas con salarios muy distintos en diferentes momentos del mercado? Dame el proceso de implementación del primer compensation framework en una startup en crecimiento: cuándo es el momento correcto para implementarlo (antes de que las inequidades se acumulen), cómo hacer el benchmarking de mercado con recursos limitados, cómo gestionar las correcciones de las personas que están por debajo de la banda sin crear expectativas de revisión continua, y cómo comunicar el sistema a los empleados sin que la conversación de compensación se convierta en una fuente de conflicto.

6. PROCESOS DE RRHH QUE SE ROMPEN EN EL CRECIMIENTO
¿Qué procesos de RRHH que funcionaban con diez personas se rompen inevitablemente con cincuenta? Dame el mapa de los procesos que necesitan ser rediseñados antes de que el problema sea visible: el onboarding informal que ya no escala, el performance review que no existe y que empieza a generar conflictos, la política de vacaciones y ausencias que no está documentada, el proceso de resolución de conflictos que antes se gestionaba de forma ad hoc y que ahora necesita un proceso formal, y el offboarding que nunca se ha hecho con un empleado que tiene acceso a información sensible.

7. LOS ERRORES DE PEOPLE OPS QUE DESTRUYEN STARTUPS EN HIPERCRECIMIENTO
¿Cuáles son los errores más frecuentes de people ops que destruyen la cultura y la moral en las startups que crecen demasiado rápido? Dame el análisis de los cinco errores más costosos: contratar por velocidad sacrificando los criterios de cultura, no invertir en managers cuando el equipo crece porque no hay tiempo, implementar políticas de HR rígidas que no tienen sentido para el tamaño del equipo, no gestionar a las personas que no rinden porque el ambiente de crecimiento lo oculta, y no comunicar con suficiente transparencia los cambios de estrategia y de organigrama que el hipercrecimiento genera inevitablemente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el modelo de people ops que gestiona el hipercrecimiento de 10 a 100 empleados sin destruir la cultura ni la calidad de las contrataciones.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Venture debt, SAFEs y rondas de inversión',
                'description'       => 'Entiende los instrumentos financieros que usan las startups: el SAFE, la nota convertible, el venture debt y los términos de las rondas de inversión que el founder debe entender antes de firmar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas para startups y en los instrumentos de financiación del ecosistema de venture capital. Necesito que me ayudes a entender en profundidad los distintos instrumentos financieros que usan las startups para levantar capital y los términos clave que todo founder debe entender antes de firmar.

Mi contexto:
- Etapa de la empresa: [pre-seed / seed / serie A / serie B o posterior]
- Instrumento que estoy evaluando o que ya tengo: [SAFE / nota convertible / equity round / venture debt / otros]
- Importe que quiero levantar: [rango aproximado]
- Valoración actual o pre-money que tienes en mente: [si la tienes]
- Principal duda o preocupación: [dilución / términos del SAFE / conditions del venture debt / interacción entre instrumentos / impacto en el exit]

Con ese contexto, dame:

1. EL SAFE (SIMPLE AGREEMENT FOR FUTURE EQUITY): CÓMO FUNCIONA
Explícame el SAFE de Y Combinator en detalle: qué es (no es deuda, no es equity todavía), cómo se convierte en acciones en la siguiente ronda de equity (el descuento y el valuation cap), las cuatro versiones del SAFE estándar de YC (pre-money, post-money, con y sin valuation cap), por qué el SAFE post-money es el que más dilución puede generar para el founder y cómo calcularlo con un ejemplo numérico. ¿En qué situaciones tiene sentido usar un SAFE y en cuáles es mejor ir directamente a una ronda priced?

2. LA NOTA CONVERTIBLE: DIFERENCIAS CON EL SAFE
¿Qué diferencias hay entre un SAFE y una nota convertible (convertible note)? Explícame los elementos específicos de la nota convertible que no tiene el SAFE: el tipo de interés que genera (cómo se acumula y cómo se convierte), el maturity date y qué pasa si la nota llega al vencimiento sin haberse convertido, el covenants que puede incluir y el evento de change of control. ¿Cuándo es mejor un SAFE versus una nota convertible para el founder y cuándo para el inversor?

3. EQUITY ROUND (PRICED ROUND): LOS TÉRMINOS QUE MÁS IMPORTAN
¿Cuáles son los términos clave de una ronda de equity priced que debo entender antes de firmar? Dame el análisis de los términos más importantes del term sheet: la valoración pre-money versus post-money (y cómo calcular la dilución real), el tipo de acción (ordinaria versus preferente), la liquidation preference (1x non-participating vs participating, y el impacto en distintos escenarios de exit), el anti-dilution (broad-based weighted average vs full ratchet), las preferencias de arrastre (drag-along), el pro-rata right de los inversores existentes y el vesting de los founders (cliff y schedule).

4. VENTURE DEBT: CUÁNDO TIENE SENTIDO Y CUÁNDO ES UNA TRAMPA
¿Qué es el venture debt y cuándo es una herramienta útil versus un riesgo para la startup? Explícame el venture debt: qué es (deuda bancaria adaptada a startups sin cash flow positivo, normalmente con warrant coverage), quiénes lo ofrecen (Silicon Valley Bank, Kreos Capital, Western Technology Investment y otros), cuándo tiene sentido usarlo (para extender la runway entre rondas, para financiar crecimiento sin dilución adicional cuando las métricas ya son sólidas), y cuándo es un riesgo (cuando la startup no tiene visibilidad de cómo va a repagar, cuando los covenants son restrictivos o cuando el warrant coverage es excesivo). Dame un ejemplo numérico del coste real del venture debt comparado con levantar equity.

5. DILUCIÓN: CÓMO CALCULARLA Y CÓMO GESTIONARLA
¿Cómo calculo la dilución acumulada en distintos escenarios de financiación? Dame el modelo de dilución a lo largo de múltiples rondas: cómo calcular el porcentaje de ownership del founder después del SAFE, la serie A y la serie B, el impacto del option pool shuffle que los inversores piden antes de la ronda (y que diluye al founder antes de que el inversor entre), y cómo la liquidation preference puede hacer que el founder reciba mucho menos de lo esperado en un exit de precio moderado aunque tenga un porcentaje de equity significativo.

6. EL CAP TABLE: CÓMO GESTIONARLO PARA QUE NO SEA UN PROBLEMA EN LA SERIE A
¿Cómo debe ser el cap table ideal para llegar bien a la serie A? Dame el análisis del cap table saludable: el porcentaje de ownership que los inversores de serie A esperan que tengan los founders en esa etapa (y cuándo hay demasiada dilución para que el equipo fundador esté suficientemente incentivado), el número de inversores que es manejable (y los problemas que genera un cap table con treinta inversores angel), cómo limpiar el cap table antes de la ronda (los buy-outs de ángeles que quieren salir y el proceso de autorización), y las herramientas para gestionarlo (Carta, Capdesk, Pulley).

7. ERRORES FINANCIEROS QUE LOS FOUNDERS COMETEN EN EL FUNDRAISING
¿Cuáles son los errores financieros más frecuentes que cometen los founders en el proceso de fundraising y que les cuestan caro después? Dame el análisis de los cinco errores más costosos: el SAFE post-money con valuation cap muy bajo que diluye masivamente en la siguiente ronda, el founder que no negocia la liquidation preference porque no entiende su impacto en el exit, el option pool que se crea demasiado pequeño y requiere ampliaciones dilutivas frecuentes, el venture debt contraído sin tener clara la estrategia de repago, y la valoración inflada en la ronda que convierte la siguiente ronda en un down round o hace imposible levantar en las condiciones esperadas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender en profundidad los instrumentos financieros de las startups: SAFE, nota convertible, equity round y venture debt con sus términos clave y el impacto en la dilución.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Term sheets y documentación de inversión',
                'description'       => 'Negocia y entiende los documentos jurídicos del proceso de inversión: el term sheet, el SHA y las cláusulas de liquidation preference, anti-dilution y drag-along que pueden tener un impacto enorme en el resultado de los fundadores en un exit.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado experto en venture capital y financiación de startups con experiencia asesorando a founders e inversores en procesos de inversión desde seed hasta serie B. Necesito que me ayudes a entender y negociar los documentos jurídicos del proceso de inversión: qué significan realmente los términos, cuáles son negociables y cuáles pueden destruir el valor del founder en el exit.

Mi contexto:
- Tipo de ronda que estoy negociando: [pre-seed / seed / serie A / serie B]
- Importe de la ronda: [aproximado]
- Tipo de inversor: [VC institucional / family office / business angel / sindicato]
- Documentación que tengo o que estoy negociando: [term sheet / SHA / SPA / SAFE / nota convertible]
- Principal preocupación jurídica: [liquidation preference / anti-dilution / drag-along / veto rights / información y control / combinación de varios]
- País de constitución de la empresa: [importante para el derecho aplicable]

Con ese contexto, dame:

1. EL TERM SHEET: ESTRUCTURA Y TÉRMINOS CLAVE
¿Cuál es la estructura de un term sheet estándar en una ronda de inversión de venture capital? Dame el análisis de los bloques principales: la valoración (pre-money vs post-money y el option pool shuffle), el tipo de acción (ordinaria con derechos mejorados, preferente, clase especial), los derechos económicos (liquidation preference, dividendos preferentes, anti-dilution), los derechos de control y gobierno (representación en el consejo, veto rights, drag-along, tag-along), los derechos de información (reporting mensual, acceso a libros) y los derechos de transferencia y salida (lock-up, derecho de adquisición preferente, co-sale). ¿Cuáles son los términos que debo negociar activamente y cuáles son más difíciles de mover?

2. LIQUIDATION PREFERENCE: EL TÉRMINO QUE MÁS PUEDE DOLER EN EL EXIT
Explícame en detalle la liquidation preference y su impacto en distintos escenarios de exit. Dame ejemplos numéricos para: la liquidation preference 1x non-participating (el inversor recupera lo que puso o convierte en acciones ordinarias, lo que sea mayor), la 1x participating (el inversor recupera su inversión y además participa en el resto como si tuviera acciones ordinarias), el múltiplo superior a 1x (2x o 3x participating) y la preferencia acumulada con dividend. ¿En qué precio de exit empieza a doler la liquidation preference para el founder? ¿Cómo negocio para suavizar este término?

3. ANTI-DILUTION: BROAD-BASED VS FULL RATCHET
¿Qué es el anti-dilution y por qué importa tanto si hay un down round? Explícame la diferencia entre los dos mecanismos principales: el full ratchet (el precio de conversión se ajusta al precio del down round, lo que puede destruir completamente el cap table del founder) versus el broad-based weighted average (el ajuste es más moderado y considera todas las acciones en circulación). Dame un ejemplo numérico del impacto de cada mecanismo en un down round del 50% y cómo negocio para obtener el broad-based en lugar del full ratchet si el inversor pide anti-dilution.

4. DRAG-ALONG Y TAG-ALONG: DERECHOS DE ARRASTRE Y ACOMPAÑAMIENTO
¿Qué son los derechos de drag-along y tag-along y cómo pueden afectar al founder en una situación de exit o de cambio de control? Explícame el drag-along: cómo funciona (la mayoría puede obligar a la minoría a vender si el exit alcanza el quórum acordado), qué quórum de activación es razonable para el founder (por qué un drag-along que se activa solo con el voto del inversor es muy problemático), y cómo negociar un drag-along con protecciones para el founder (precio mínimo de exit, quórum que incluye al fundador). Explícame también el tag-along: por qué el founder debe tenerlo y cuándo le protege.

5. DERECHOS DE VETO Y GOBIERNO EN EL CONSEJO
¿Qué decisiones de la empresa pueden vetar los inversores según los derechos de control habituales en los term sheets? Dame el análisis de los derechos de veto más frecuentes: los que son razonables (cambios de estatutos, emisión de nuevas acciones, venta de activos materiales, operaciones por encima de un importe) versus los que son demasiado restrictivos para una startup en crecimiento (contrataciones de directivos por encima de cierto salario, capex por encima de un umbral muy bajo, cambios de producto o de modelo de negocio). ¿Cómo negocio los umbrales y los quórums de los derechos de veto para preservar la agilidad operativa?

6. EL SHA (SHAREHOLDERS' AGREEMENT): LAS CLÁUSULAS QUE IMPORTAN
¿Cuáles son las cláusulas del Shareholders' Agreement que debo leer con más atención más allá de las económicas? Dame el análisis de las cláusulas clave del SHA: el bad leaver versus good leaver (qué triggeres convierten al founder que se va en bad leaver y qué precio recibe por sus acciones en cada caso), el lock-up post-exit (cuánto tiempo el founder está obligado a quedarse después de una adquisición), las restricciones de competencia post-salida (non-compete), las cláusulas de representaciones y garantías (warranties) que el founder hace sobre el estado de la empresa y su potencial responsabilidad si resultan incorrectas, y los mecanismos de resolución de disputas entre socios (deadlock, arbitraje).

7. CÓMO NEGOCIAR EL TERM SHEET: EL PROCESO Y LAS PALANCAS
¿Cómo negocio el term sheet de forma efectiva sin poner en riesgo la relación con el inversor? Dame el proceso de negociación: qué términos abrir primero (los económicos que son más fáciles de anclar), cuáles dejar para el final (los de gobierno que son más sensibles para el inversor), cómo usar la competencia entre inversores para mejorar los términos sin que parezca una táctica obvia, qué concesiones puedo hacer que no me cuesten mucho (como algunos derechos de información adicionales) a cambio de mejorar los términos que más me importan (liquidation preference, anti-dilution), y cuándo la negociación de términos está poniendo en riesgo el deal y debo parar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender y negociar los documentos jurídicos del proceso de inversión: term sheet, SHA y las cláusulas que más impactan en el resultado del founder en el exit.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success como ventaja para el fundraising',
                'description'       => 'El equipo de CS que hace el fundraising más fácil: las métricas de retención, los testimonios de clientes y los logos que refuerzan el pitch y convencen a los inversores de que el producto tiene tracción real.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer success strategy y en la narrativa de fundraising para startups B2B. Necesito tu ayuda para convertir las métricas y los activos del equipo de customer success en un argumento de inversión convincente: el CS como prueba de que el producto tiene tracción real y que los clientes no solo compran sino que renuevan, expanden y recomiendan.

Mi contexto:
- Tipo de producto: [SaaS B2B, plataforma, servicios con componente recurrente, etc.]
- Estado actual del equipo de CS: [sin CS formal / un CSM / equipo pequeño / proceso estructurado]
- Métricas de CS actuales si las tengo: [NRR, GRR, churn, NPS, tiempo de onboarding, health scores, etc.]
- Etapa de fundraising: [preparando la narrativa para serie A / en proceso con inversores / tengo reuniones pero la tracción no convence]
- Principal debilidad de las métricas de CS ahora mismo: [churn más alto de lo esperado / pocos clientes para mostrar retención estadísticamente significativa / clientes satisfechos pero que no expanden / etc.]

Con ese contexto, dame:

1. POR QUÉ EL CS ES EL ARGUMENTO DE PMF MÁS CONVINCENTE
¿Por qué los inversores de serie A consideran las métricas de customer success como el argumento más sólido de product-market fit? Explícame la lógica del inversor: la diferencia entre un cliente que compra (puede ser persuasión del equipo de ventas) y un cliente que renueva y expande (no puede ser marketing, es evidencia de valor real), por qué el NRR es la métrica que más predice el crecimiento futuro de una empresa B2B SaaS y por qué los logos de clientes conocidos en el pitch deck tienen valor pero las métricas de retención tienen más.

2. LAS MÉTRICAS DE CS QUE LOS VCS QUIEREN VER EN EL PITCH
¿Qué métricas específicas de customer success debo incluir en el pitch deck y cómo presentarlas de forma que maximicen el impacto? Dame el set de métricas de CS para el pitch: el Net Revenue Retention (cómo calcularlo correctamente y qué múltiplo indica un negocio de alta calidad en B2B SaaS), el Gross Revenue Retention (para separar el churn de revenue del expansion revenue), el análisis de cohortes de retención (la curva que debe aplanarse si hay PMF), el NPS como señal de advocacy y el time-to-value del onboarding como predictor de retención. Para cada métrica, dame el benchmark del sector y cómo presentar el dato aunque no sea perfecto.

3. LOS TESTIMONIOS DE CLIENTES COMO ACTIVO DE FUNDRAISING
¿Cómo convierto los testimonios de mis clientes en un activo que refuerza el pitch de inversión? Dame el proceso de creación de testimonios de cliente para el fundraising: cómo seleccionar a los clientes correctos para dar testimonio (los que tienen mayor NPS, los que han renovado o expandido, los que son reconocibles para los inversores del sector), las preguntas que generar el tipo de testimonio que convence (foco en el resultado de negocio, no en la feature), el formato del testimonio (vídeo breve, case study escrito, referencia disponible para el due diligence) y cómo presentarlos en el pitch deck sin que parezcan cherry-picked.

4. REFERENCIAS DE CLIENTES EN EL DUE DILIGENCE: CÓMO PREPARARLAS
¿Cómo preparo a mis clientes para que sean referencias en el due diligence del inversor de forma que la conversación refuerce el deal en lugar de sabotearlo? Dame el proceso de preparación de referencias: cómo seleccionar a los clientes correctos (no solo los que hablan bien sino los que pueden articular el valor de negocio), cómo briefarles antes de la llamada con el inversor (qué preguntas van a hacer, en qué aspectos centrarse), cómo gestionar al cliente que tiene críticas legítimas (por qué la referencia honesta que menciona áreas de mejora puede ser más convincente que la referencia perfecta que levanta sospechas) y cómo agradecer y cuidar a los clientes que son referencias.

5. EL NRR COMO HISTORIA DE CRECIMIENTO
¿Cómo presento el NRR en el pitch cuando todavía tengo pocos clientes y la métrica puede no ser estadísticamente significativa? Dame el proceso de narración del NRR en distintas etapas: cómo presentar el NRR con una cohorte de diez o veinte clientes (incluyendo la nota metodológica honesta), cómo usar la expansión de las tres o cuatro cuentas más grandes como indicador cualitativo de la tendencia aunque el NRR agregado no sea representativo, y cómo mostrar la evolución trimestral del NRR para demostrar que la tendencia es creciente aunque el punto de partida sea modesto.

6. CONVERTIR EL CHURN EN UNA NARRATIVA HONESTA
¿Cómo presento el churn de forma honesta cuando la tasa es más alta de lo que el sector considera saludable? Dame el framework de narración del churn para el fundraising: la segmentación del churn (churn por tipo de cliente, por tamaño, por sector o por uso del producto), la identificación de las razones del churn (churn por fit incorrecto del segmento inicial versus churn por problemas del producto), las acciones que ya has tomado para reducirlo y la tendencia de las cohortes más recientes comparada con las antiguas. ¿Cuándo un churn alto es una señal de que el mercado objetivo inicial era incorrecto y cómo convertir eso en una narrativa de aprendizaje y pivote?

7. EL CUSTOMER SUCCESS MANAGER COMO ACTIVO EN EL PITCH
¿Cómo presento al equipo de CS como un activo diferencial en el pitch de inversión? Dame el argumento del CS como ventaja competitiva: el tiempo hasta el primer valor (time-to-value) que hace que los clientes vean el ROI antes de que piensen en cancelar, el proceso de onboarding proactivo que maximiza la adopción del producto, el modelo de expansion revenue que crece el ARR sin aumentar el CAC, y el sistema de health scores que detecta el riesgo de churn antes de que el cliente lo decida. ¿Cómo demuestro que el CS que tenemos hoy es escalable con el crecimiento que voy a tener con la inversión de la ronda?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Convertir las métricas y activos del equipo de CS en un argumento de inversión convincente para el fundraising de serie A.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'El freelance en el ecosistema startup: trabajar con fundadores',
                'description'       => 'El freelance que trabaja con startups respaldadas por VC: la dinámica de los proyectos en startups de rápido crecimiento, la negociación de equity vs. cash y los aspectos prácticos de cobrar de una startup que quema caja.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en el trabajo freelance con startups tecnológicas y en el ecosistema de venture capital. Necesito tu ayuda para entender y navegar la dinámica específica de trabajar como freelance con startups respaldadas por inversión: sus tiempos, sus formas de pagar, sus expectativas y las oportunidades y riesgos que no aparecen en los proyectos con empresas más maduras.

Mi contexto:
- Tipo de servicio freelance que ofrezco: [diseño, desarrollo, marketing, contenido, legal, finanzas, etc.]
- Experiencia previa con startups: [ninguna / algunos proyectos / trabajo principalmente con startups]
- Tipo de startups con las que quiero trabajar o ya trabajo: [pre-seed / seed / serie A y más]
- Principal motivación para trabajar con startups: [proyectos más interesantes / posibilidad de equity / mayor velocidad / etc.]
- Principal miedo o preocupación: [no cobrar / proyectos que no terminan / expectativas de disponibilidad poco razonables / equity que no vale nada]

Con ese contexto, dame:

1. LA DINÁMICA DE TRABAJAR CON STARTUPS: QUÉ ESPERAR
¿En qué se diferencia trabajar con una startup respaldada por VC de trabajar con una empresa más madura? Dame el mapa honesto de las diferencias: los tiempos de decisión más rápidos (a veces demasiado rápidos y sin el brief que necesitas), el cambio de prioridades que puede cancelar un proyecto a mitad sin previo aviso, la directa con el CEO o el founder que hace las reuniones más eficientes pero también más intensas, la cultura de urgencia permanente que hace que todo sea para ayer, y la energía y el entusiasmo del equipo que hacen que los mejores proyectos con startups sean los más estimulantes de tu carrera. ¿Cómo calibro mis expectativas y las del cliente desde el inicio?

2. EQUITY VS CASH: LA NEGOCIACIÓN QUE PARECE OBVIA PERO NO LO ES
¿Cuándo tiene sentido aceptar equity o una combinación de equity y cash como freelance y cuándo es una mala idea? Dame el análisis completo de la negociación de equity como parte del pago: la diferencia entre opciones (stock options) y acciones (equity directo), cómo valorar el equity cuando la empresa es pre-revenue o tiene una valoración muy temprana, el porcentaje de equity que es razonable pedir para distintos tipos y tamaños de proyecto, los términos del vesting que debo exigir (cliff de doce meses, vesting de tres o cuatro años), y las señales que indican que el equity que me ofrecen no va a valer nada (cap table complicado, fundadores que ya han diluido mucho, mercado estrecho). ¿Cuándo es mejor cobrar solo en cash aunque el equity parezca atractivo?

3. CÓMO COBRAR DE UNA STARTUP QUE QUEMA CAJA
¿Cómo estructuro el contrato y el calendario de pagos cuando mi cliente es una startup que tiene doce meses de runway? Dame el proceso de gestión del riesgo de cobro cuando trabajo con startups: la estructura de pagos que protege mi liquidez (anticipo inicial, hitos de pago, sin pagos al final del proyecto que es cuando el riesgo es mayor), la verificación de la salud financiera de la startup antes de empezar (cómo evaluar el runway sin que parezca desconfiado), el contrato que me protege si la startup cierra o cancela el proyecto a mitad, y la gestión del founder que pide noventa días de plazo de pago porque es como lo hace con sus proveedores enterprise.

4. GESTIÓN DE EXPECTATIVAS CON FUNDADORES: EL ARTE DEL SCOPE
¿Cómo gestiono el scope y las expectativas de un fundador que está acostumbrado a que su equipo interno haga lo que hace falta sin contrato formal? Dame el proceso de alineación de expectativas desde el primer contacto: el brief escrito que el founder rara vez ha preparado (cómo ayudarle a construirlo), la propuesta que define los entregables de forma que sea imposible el scope creep silencioso, la gestión de las peticiones adicionales que aparecen a mitad del proyecto (cómo documentarlas y cobrarlas sin que parezca que soy inflexible), y el proceso de validación y aprobación de entregables que no depende de que el founder tenga tiempo para responder.

5. LAS RELACIONES CON STARTUPS QUE SE CONVIERTEN EN RETAINERS
¿Cómo convierto un proyecto puntual con una startup en una relación de retainer mensual que me da ingresos recurrentes? Dame el proceso de conversión de proyecto a retainer: cuándo proponer el retainer (al final de un proyecto exitoso, cuando el cliente empieza a pedir cosas fuera del scope), cómo estructurarlo (horas disponibles versus entregables definidos), cómo fijar el precio del retainer con una startup que tiene presupuesto limitado pero necesidad continua de mi trabajo, y cómo mantener la relación de retainer cuando la startup crece y necesita más de lo que yo solo puedo dar.

6. NETWORKING EN EL ECOSISTEMA STARTUP: CÓMO CONSEGUIR CLIENTES
¿Cómo consigo acceso a startups que necesitan mis servicios si no tengo ya una red en el ecosistema de VC? Dame el mapa de canales para acceder a startups como cliente: las aceleradoras y los programas de founders que buscan proveedores de confianza (Y Combinator, Techstars, Wayra, Seedcamp, las locales de tu mercado), los inversores VC que recomiendan proveedores a su portfolio (cómo llegar a los partners de operaciones), las comunidades de founders (Slack groups, Discord, eventos de networking del ecosistema), y la estrategia de contenido en LinkedIn orientada al ecosistema startup que genera inbound. ¿Cuál es el canal más eficiente según mi tipo de servicio?

7. PROTECCIÓN LEGAL TRABAJANDO CON STARTUPS
¿Qué protecciones legales específicas necesito cuando trabajo con startups para proteger mi trabajo, mi pago y mi propiedad intelectual? Dame el checklist de protecciones legales para el freelance que trabaja con startups: el contrato de servicios que define la propiedad intelectual del trabajo entregado (cuándo se transfiere: ¿al pago total o a cada entrega?), las cláusulas de cancelación que me protegen si la startup cierra o pivota y cancela el proyecto, el acuerdo de confidencialidad (NDA) que firmo y qué debo leer antes de firmarlo, la gestión de la información de la startup a la que tengo acceso (datos de clientes, métricas financieras, roadmap) y el proceso de documentación del trabajo entregado que me protege si hay una disputa posterior.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Navegar la dinámica de trabajar como freelance con startups respaldadas por VC: expectativas, negociación de equity vs cash y protección ante los riesgos específicos.',
                'vote_score'        => 41,
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
