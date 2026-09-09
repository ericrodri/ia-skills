<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills186Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gestión de stakeholders en marketing',
                'description'       => 'Alinea a todos los que influyen en las decisiones de marketing: el CEO que quiere cambiar el mensaje, las ventas que piden leads y el producto que pide un lanzamiento mañana.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de stakeholders y política organizacional en entornos de marketing. Necesito que me ayudes a diseñar el sistema de gestión de stakeholders de mi departamento de marketing para reducir el caos de peticiones, alinear expectativas y conseguir que las decisiones de marketing se tomen de forma más racional y menos reactiva.

Mi contexto:
- Tipo de empresa y tamaño: [startup / scale-up / empresa mediana / corporación]
- Mi rol: [CMO / director de marketing / responsable de marketing / solo en el equipo]
- Principales stakeholders que me generan conflicto: [CEO / ventas / producto / finanzas / legal / dirección general]
- El conflicto más frecuente: [cambios de prioridades de última hora / peticiones fuera del roadmap / presión por resultados de corto plazo / falta de presupuesto / aprobaciones que bloquean]
- Estado actual de la relación con los stakeholders: [caótica / funcional pero con mucha fricción / razonablemente bien / necesita mejora estructural]

Dame:

1. EL MAPA DE STAKEHOLDERS DE MARKETING
Ayúdame a construir el mapa de stakeholders de marketing: cómo identificar a todos los actores que influyen en las decisiones del departamento, cómo clasificarlos por poder de decisión e interés en el marketing (la matriz de poder vs. interés), y qué estrategia de relación y comunicación aplico a cada cuadrante. Incluye a los stakeholders internos (dirección, ventas, producto, finanzas) y externos (agencias, medios, socios).

2. CÓMO GESTIONAR AL CEO QUE QUIERE CAMBIAR EL MENSAJE
El CEO que lee un artículo el domingo y el lunes quiere cambiar el posicionamiento de la empresa es uno de los desafíos más comunes en marketing. ¿Cómo gestiono ese tipo de intervención sin decir que no de forma abrupta, pero también sin comprometerme a cambios de estrategia sin sentido? Dame el proceso: cómo escuchar la petición con respeto, cómo hacer las preguntas correctas para entender la inquietud subyacente, cómo evaluar si hay algo válido en la petición y cómo responder con datos y con alternativas.

3. LA RELACIÓN MARKETING-VENTAS: CÓMO ALINEARLA DE VERDAD
La tensión entre marketing y ventas es estructural en la mayoría de las empresas. ¿Cómo construyo una relación de trabajo real con el equipo comercial? Dame el sistema: el SLA de marketing con ventas (qué tipos de leads entrego y en qué plazo), el proceso de retroalimentación de ventas a marketing sobre la calidad de los leads, la reunión de alineación marketing-ventas (formato, frecuencia, agenda), y cómo manejo la acusación de que marketing no genera leads de calidad.

4. EL ROADMAP DE MARKETING COMO HERRAMIENTA DE ALINEACIÓN
¿Cómo uso el roadmap de marketing para gestionar las expectativas y reducir las peticiones fuera de ciclo? Dame la estructura del roadmap de marketing: los horizontes de planificación, los tipos de iniciativas que incluye, cómo comunicarlo a los stakeholders (no solo al equipo), cómo utilizarlo para decir que no con datos cuando llega una petición urgente y con qué frecuencia actualizarlo y comunicar los cambios.

5. CÓMO PEDIR PRESUPUESTO Y CONSEGUIRLO
Pedir presupuesto de marketing y conseguir que lo aprueben es una habilidad política tan importante como la estratégica. Dame el proceso: cómo construir el business case del presupuesto de marketing, cómo presentarlo en función de quien lo aprueba (CEO, CFO, consejo), qué argumentos funcionan mejor con cada stakeholder financiero, y cómo gestionar los recortes de presupuesto sin que afecten a los objetivos comprometidos.

6. COMUNICACIÓN EJECUTIVA: CÓMO HABLAR EL IDIOMA DEL NEGOCIO
El mayor error de los profesionales de marketing ante los stakeholders ejecutivos es hablar de métricas de marketing en lugar de métricas de negocio. ¿Cómo traduzco los resultados de marketing al lenguaje del CFO, del CEO y de la junta directiva? Dame el framework de reporting ejecutivo de marketing: las tres o cuatro métricas que importan en sala de dirección, cómo presentar el ROI de las iniciativas y cómo conectar el funnel de marketing con el crecimiento del negocio.

7. CUANDO LOS STAKEHOLDERS SE CONVIERTEN EN UN BLOQUEO
¿Qué hago cuando un stakeholder bloquea sistemáticamente las iniciativas de marketing? Dame el playbook para gestionar al bloqueador: cómo diagnosticar si el bloqueo es racional (tienen una razón válida) o político (protegen su territorio), las estrategias de influencia sin autoridad para mover la posición del bloqueador, cuándo escalar al superior común y cómo hacerlo sin quemar la relación, y cómo documentar el proceso para proteger al equipo de marketing si el bloqueo tiene consecuencias en los resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema de gestión de stakeholders del departamento de marketing para reducir el caos, alinear expectativas y conseguir más con menos fricción.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Influencia técnica sin autoridad',
                'description'       => 'El senior engineer o tech lead que mueve decisiones sin ser manager: las técnicas de influencia en organizaciones de ingeniería donde todos tienen opinión técnica.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en liderazgo técnico y desarrollo de carrera en ingeniería de software. Necesito que me ayudes a desarrollar mi capacidad de influencia técnica en la organización: mover decisiones de arquitectura, adopción de tecnología y mejoras de proceso sin tener autoridad formal de management sobre las personas.

Mi contexto:
- Mi rol actual: [senior engineer / staff engineer / principal engineer / tech lead / arquitecto]
- Tamaño del equipo de ingeniería: [número aproximado de personas]
- Tipo de organización: [startup / scale-up / empresa tech / empresa no-tech con equipo de desarrollo]
- El tipo de influencia que quiero ejercer: [decisiones de arquitectura / adopción de nuevas tecnologías / mejora de procesos de desarrollo / estándares de código / cultura de ingeniería]
- Mi mayor reto ahora: [no me escuchan / mis propuestas no avanzan / los managers toman decisiones técnicas sin consultarme / hay resistencia al cambio / la política organizacional bloquea las mejoras técnicas]

Dame:

1. EL MODELO DE INFLUENCIA TÉCNICA: CÓMO FUNCIONA SIN AUTORIDAD
Explícame los mecanismos de influencia en organizaciones de ingeniería para personas sin autoridad formal: la credibilidad técnica como base de la influencia, la red de relaciones como amplificador, la comunicación de ideas de forma que otros las adopten como propias y la influencia a través de la información y la transparencia. ¿Por qué los mejores ingenieros aprenden a influir sin ordenar?

2. CÓMO CONSTRUIR CREDIBILIDAD TÉCNICA QUE INFLUYA
La credibilidad técnica es el activo fundamental del senior engineer. ¿Cómo la construyo y la mantengo? Dame las acciones concretas: el código de alta calidad que otros ingenieros estudian y citan, las revisiones de código que enseñan sin humillar, la documentación técnica que se convierte en la referencia del equipo, la participación en comunidades externas (conferencias, open source, artículos técnicos) que trae reputación externa hacia adentro, y los onboardings de nuevos ingenieros donde demuestro profundidad.

3. CÓMO PROPONER UN CAMBIO TÉCNICO Y CONSEGUIR QUE AVANCE
Una propuesta técnica que no consigue apoyo es un fracaso, independientemente de su calidad técnica. Dame el proceso para proponer y conseguir adopción de un cambio técnico: el RFC (Request for Comments) como herramienta de influencia (estructura, a quién se manda, cómo se gestiona el proceso de comentarios), cómo conseguir aliados antes de hacer la propuesta pública, cómo manejar la resistencia técnica con datos y experimentos en lugar de con debate de opiniones, y cómo reconocer cuándo la propuesta no va a prosperar y qué hacer.

4. GESTIÓN DE LOS INGENIEROS QUE SE OPONEN
En un equipo de ingeniería con alta densidad de opiniones técnicas fuertes, la oposición es constante. ¿Cómo manejo al ingeniero con más antigüedad que bloquea sistemáticamente mis propuestas, al manager que toma decisiones técnicas sin entenderlas y al equipo que prefiere el status quo al cambio? Dame las técnicas específicas para cada tipo de resistencia: la escucha activa que desactiva la oposición emocional, la prueba de concepto que convence mejor que cualquier argumento y el piloto controlado como puerta de entrada.

5. EL TECH LEAD COMO INFLUENCIADOR DE CULTURA
La cultura de ingeniería se forma más desde los seniors que desde los managers. ¿Cómo influyo en la cultura de ingeniería del equipo desde mi posición? Dame las palancas: el estándar que establezco con mis propias decisiones (la forma en que testeo, documento y reviso código), las conversaciones de pasillo que normalizan ciertas prácticas, los postmortems que construyo de forma que generen aprendizaje sin culpa, y los rituales técnicos (demo days, architecture reviews, tech talks) que puedo proponer y liderar.

6. CÓMO COMUNICAR CON MANAGERS Y DIRECTIVOS
El senior engineer que quiere influir necesita aprender a comunicar con personas que no tienen contexto técnico profundo. Dame el framework de comunicación técnica para audiencias no técnicas: cómo traducir los trade-offs técnicos a términos de negocio (velocidad, riesgo, coste, calidad), cómo presentar una propuesta técnica en una reunión de dirección, cuánto detalle dar y cuánto omitir, y cómo responder a la presión por acelerar cuando la decisión correcta es la más lenta.

7. PLAN DE DESARROLLO DE INFLUENCIA TÉCNICA
Dame un plan de desarrollo de 6 a 12 meses para aumentar mi influencia técnica en la organización: los hábitos semanales que construyen credibilidad (revisiones, documentación, mentoring), las iniciativas de medio plazo que expanden la red de influencia (RFCs, tech talks, colaboración cross-team) y los objetivos de largo plazo que consolidan la posición de referente técnico (arquitectura de referencia, estándares adoptados, ingenieros que he desarrollado y que amplifican mi visión).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Desarrollar la capacidad de influencia técnica sin autoridad formal para mover decisiones de arquitectura, tecnología y cultura de ingeniería.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Conseguir buy-in para el diseño',
                'description'       => 'La política organizacional del diseñador: cómo conseguir que los stakeholders apoyen las decisiones de diseño antes de que estén terminadas, reduciendo los ciclos de revisión.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en liderazgo de diseño y gestión de stakeholders en entornos de producto digital. Necesito que me ayudes a desarrollar las habilidades de influencia y comunicación que necesito como diseñador para conseguir que mis decisiones de diseño sean respetadas y apoyadas por el equipo, el management y los stakeholders sin pasar por interminables ciclos de revisión.

Mi contexto:
- Mi rol: [UX designer / product designer / design lead / head of design / diseñador freelance]
- Entorno de trabajo: [startup / empresa de producto / agencia / cliente grande]
- Stakeholders con los que más fricción tengo: [PM que cambia requisitos en la revisión final / CEO que tiene opinión sobre todo / desarrolladores que dicen que no se puede hacer / clientes que piden cambios estéticos sin fundamento]
- El problema que más me cuesta: [las revisiones de diseño que destruyen semanas de trabajo / falta de respeto por las decisiones de diseño / los cambios basados en preferencia personal del stakeholder / los diseños que llegan a desarrollo cambiados]
- Mi nivel de experiencia: [junior / mid / senior / lead]

Dame:

1. POR QUÉ EL DISEÑO SIN BUY-IN ES TRABAJO PERDIDO
Explícame el ciclo vicioso de las revisiones de diseño cuando los stakeholders no han sido involucrados: cómo el trabajo de semanas puede destruirse en una reunión de feedback de una hora, por qué esto es un problema de proceso y no solo de stakeholders difíciles, y cómo los mejores design teams del mundo han resuelto este problema. Dame el principio fundamental: el buy-in se construye durante el proceso, no en la presentación final.

2. EL MAPA DE STAKEHOLDERS DE DISEÑO
Antes de empezar cualquier proyecto de diseño significativo, debo conocer el mapa de poder. Dame el proceso para mapear a los stakeholders de un proyecto de diseño: quién tiene poder de veto, quién influye en quien tiene el veto, quién puede ser aliado del diseño y quién tiene intereses que pueden entrar en conflicto con las decisiones de diseño. ¿Cómo obtengo esa información antes de que sea demasiado tarde?

3. INVOLUCRAR A LOS STAKEHOLDERS EN EL PROCESO (NO EN LA REVISIÓN)
La clave del buy-in es involucrar a los stakeholders antes de que el diseño esté terminado, no después. Dame las tácticas específicas: los design sprints y los co-design workshops para involucrar a PM y negocio desde el principio, las revisiones de diseño en fases tempranas (moodboards, wireframes, prototipos de baja fidelidad) que permiten el feedback antes de que el coste del cambio sea alto, y las sesiones de alineación de dirección antes de la presentación formal.

4. CÓMO PRESENTAR EL DISEÑO PARA QUE SEA DIFÍCIL DE RECHAZAR
La presentación de diseño es una habilidad política tanto como creativa. Dame el framework para presentar decisiones de diseño de forma que estén alineadas con los objetivos del stakeholder: cómo conectar las decisiones de diseño con los objetivos de negocio (conversión, retención, NPS), cómo presentar las alternativas que no elegí y por qué, cómo usar la investigación de usuarios como escudo frente a las preferencias personales del stakeholder, y cómo estructurar la reunión de feedback para que sea productiva y no destructiva.

5. CÓMO RESPONDER AL FEEDBACK BASADO EN PREFERENCIA PERSONAL
"No me gusta el azul" o "hazlo más grande" son los comentarios que destrozan la moral de cualquier diseñador. ¿Cómo respondo a ese tipo de feedback sin decir que no de forma abrupta pero tampoco implementando cambios sin fundamento? Dame las preguntas que transforman el feedback de preferencia personal en feedback útil: "¿Qué problema intentas resolver con ese cambio?", "¿Qué objetivo del usuario o del negocio no crees que esté cubierto?". Dame el guión completo de la conversación de feedback.

6. LA RELACIÓN CON LOS DESARROLLADORES: ALLY, NO ADVERSARIO
Los desarrolladores pueden ser el mayor aliado o el mayor obstáculo del diseñador. ¿Cómo construyo una relación de trabajo real con el equipo de desarrollo? Dame las prácticas: cuándo y cómo involucrar a desarrollo en las decisiones de diseño (antes de que estén terminadas), cómo documentar el diseño para desarrollo de forma que reduzca la fricción en la implementación, cómo responder cuando el desarrollador dice que algo "no se puede hacer" y cómo crear un canal de comunicación directo que evite que el diseño llegue a producción cambiado.

7. CONSTRUIR LA CULTURA DE DISEÑO EN LA ORGANIZACIÓN
El buy-in individual es importante, pero el objetivo es construir una cultura organizacional donde el diseño sea respetado estructuralmente. Dame el plan a largo plazo: cómo evangelizar el valor del diseño con métricas de negocio, cómo crear rituales de diseño en la organización (design crits, showcases, design principles compartidos), cómo establecer los procesos que hacen que el diseño tenga voz en las decisiones estratégicas y cómo desarrollar aliados en el management que defiendan el diseño cuando el diseñador no está en la sala.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Desarrollar las habilidades de influencia y comunicación para conseguir que las decisiones de diseño sean respetadas y apoyadas por todos los stakeholders.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión de múltiples stakeholders en ventas enterprise',
                'description'       => 'Navega los comités de compra enterprise: el mapa de poder, los champions y los bloqueadores y la estrategia de influencia en cada uno.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas enterprise y gestión de comités de compra complejos. Necesito que me ayudes a diseñar el sistema para gestionar los múltiples stakeholders que intervienen en el proceso de compra de mis clientes enterprise, identificar a los que toman realmente la decisión, neutralizar a los bloqueadores y maximizar las posibilidades de cierre.

Mi contexto:
- Qué vendo y a qué tipo de empresas: [producto o servicio y tamaño de empresa objetivo]
- Ticket medio y ciclo de venta aproximado: [para entender la complejidad del comité]
- Número de stakeholders típico en el proceso de compra: [cuántas personas suelen estar involucradas]
- Los roles más frecuentes en el comité: [CTO, CFO, legal, CISO, usuarios finales, procurement, etc.]
- Mi mayor reto en la gestión del comité: [no llego al decisor final / el champion no tiene suficiente peso / procurement bloquea al final / ciclos muy largos / ofertas que se quedan sin respuesta]

Dame:

1. LA ANATOMÍA DEL COMITÉ DE COMPRA ENTERPRISE
Explícame la estructura típica de un comité de compra en una empresa mediana o grande: los roles económicos (quien aprueba el gasto), los roles técnicos (quien evalúa la solución), los roles de usuario (quien la va a usar), los roles de influencia (quien tiene opinión sin estar formalmente en el proceso) y los roles de bloqueo (procurement, legal, seguridad). ¿Cómo ha cambiado el comité de compra en los últimos años y por qué hay más personas involucradas que nunca?

2. EL MAPA DE PODER: CÓMO CONSTRUIRLO Y ACTUALIZARLO
El mapa de poder es el documento más importante de una oportunidad enterprise. Dame el proceso para construirlo: las preguntas que le hago a mi champion para entender quién tiene influencia real, cómo identifico a las personas que no están en las reuniones pero tienen peso en la decisión, cómo mapeo las relaciones entre los stakeholders (quién influye en quién, qué alianzas existen, qué conflictos hay), y cómo mantengo el mapa actualizado a medida que avanza el proceso.

3. EL CHAMPION: CÓMO IDENTIFICARLO, ACTIVARLO Y PROTEGERLO
El champion es el stakeholder interno que vende por mí cuando no estoy en la sala. ¿Cómo identifico quién puede ser mi champion en un proceso enterprise? Dame los criterios: el acceso a los decisores, la motivación personal para que el proyecto salga adelante, la credibilidad interna y la disposición a dar la cara. ¿Cómo le doy las herramientas para que venda internamente? ¿Qué hago si el champion tiene poco peso político? ¿Y si el champion se va de la empresa durante el proceso?

4. LOS BLOQUEADORES: TIPOS Y ESTRATEGIAS
No todas las resistencias son iguales. Dame la tipología de bloqueadores en ventas enterprise y la estrategia para cada uno:
- El bloqueador técnico (dice que la solución no cumple los requisitos)
- El bloqueador económico (dice que es demasiado caro)
- El bloqueador político (protege a un proveedor actual o tiene intereses en que el proyecto no salga)
- El bloqueador de seguridad o compliance (CISO, legal, privacidad)
- El indiferente (no bloquea activamente pero tampoco ayuda)

Para cada tipo dame la estrategia de influencia específica y los errores a evitar.

5. CÓMO LLEGAR AL DECISOR ECONÓMICO FINAL
El mayor error en ventas enterprise es cerrarse en el nivel técnico y nunca llegar al decisor económico. ¿Cómo accedo al ejecutivo que firma el cheque? Dame las tácticas: cómo pedir el acceso a través del champion sin dañar la relación con el interlocutor actual, cómo usar el executive briefing o el business case para justificar la reunión con el C-level, y cómo preparar esa reunión ejecutiva para que sea totalmente diferente a la reunión técnica.

6. EL PROCESO DE PROCUREMENT: CÓMO GESTIONARLO SIN QUE DESTRUYA EL DEAL
Procurement llega al final del proceso y puede destruir meses de trabajo con una petición de descuento del 30% o una revisión de contrato de tres meses. ¿Cómo preparo el proceso de procurement desde el principio? Dame las mejores prácticas: cómo introducir el tema de procurement en las fases tempranas del proceso, qué información pedir al champion sobre los procesos de compra de la empresa, cómo anticipar las objeciones de precio de procurement con el business case correcto y cómo negociar con procurement sin destruir el margen.

7. MULTI-THREADING: POR QUÉ NUNCA DEBO DEPENDER DE UN SOLO CONTACTO
El multi-threading es la práctica de construir relaciones con múltiples stakeholders en paralelo. ¿Por qué es crítico y cómo lo ejecuto sin que el interlocutor principal se sienta amenazado? Dame el sistema: cuántos contactos activos debo tener en una oportunidad enterprise, cómo presentarme a nuevos stakeholders de forma natural, qué tipo de contenido o interacción mantengo con cada uno y cómo uso el multi-threading para recuperar una oportunidad cuando el champion desaparece o pierde poder.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema de gestión de comités de compra enterprise para identificar a los decisores reales, neutralizar bloqueadores y maximizar la tasa de cierre.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product politics',
                'description'       => 'El PM que navega la política organizacional: cómo construir alianzas, gestionar a los stakeholders difíciles y conseguir recursos para el roadmap en organizaciones con intereses contrapuestos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de producto y liderazgo de producto en organizaciones complejas. Necesito que me ayudes a desarrollar las habilidades de influencia política y gestión de stakeholders que son imprescindibles para que un Product Manager consiga recursos, prioridad y alineación en una organización donde todos tienen opinión sobre el producto y los intereses son contrapuestos.

Mi contexto:
- Mi rol: [PM / Senior PM / Group PM / Head of Product / CPO]
- Tipo de organización: [startup / scale-up / empresa mediana / corporación]
- Principales stakeholders con los que tengo fricción: [CEO / CTO / ventas / marketing / diseño / ingeniería / legal / finanzas / otros PMs]
- El mayor desafío político que tengo ahora: [conseguir prioridad en el roadmap para mis iniciativas / conseguir presupuesto o headcount / alinear a ingeniería y negocio / gestionar los feature requests de ventas / la política entre los equipos de producto]
- Mi estilo actual de trabajo político: [evito la política / la manejo de forma reactiva / estoy desarrollando estas habilidades / tengo experiencia pero quiero mejorar]

Dame:

1. POR QUÉ LA POLÍTICA ES INSEPARABLE DEL ROL DE PM
El PM no tiene autoridad directa sobre casi nadie pero es responsable del resultado del producto. Explícame por qué este gap entre responsabilidad y autoridad hace que la política organizacional sea una habilidad técnica del rol, no una debilidad de carácter. ¿Cómo los mejores PMs del mundo entienden y navegan la política de sus organizaciones? ¿Cuál es la diferencia entre jugar a la política y gestionar las organizaciones con inteligencia relacional?

2. EL MAPA DE PODER DE LA ORGANIZACIÓN DE PRODUCTO
Para influir en una organización necesito entenderla. Dame el proceso para construir el mapa de poder informal de mi empresa: quién tiene la última palabra en las decisiones de producto (no el organigrama sino el poder real), qué alianzas existen entre directivos, cuáles son los intereses de cada stakeholder (que no siempre coinciden con los objetivos declarados) y cuáles son los temas no negociables para cada actor clave. ¿Cómo obtengo esta información de forma ética?

3. CÓMO CONSEGUIR QUE EL ROADMAP TENGA APOYO ANTES DE PRESENTARLO
El mayor error de los PMs es presentar el roadmap y recibir el rechazo en la reunión. ¿Cómo construyo el apoyo al roadmap antes de la presentación formal? Dame el proceso de pre-wiring: las conversaciones uno a uno previas con los stakeholders clave para entender sus preocupaciones, ajustar la propuesta y construir aliados que defiendan el roadmap en la reunión cuando yo no pueda hacerlo. ¿A quién debo hablar primero y en qué orden?

4. CÓMO GESTIONAR LOS FEATURE REQUESTS DE VENTAS SIN PERDER LA ESTRATEGIA
El equipo de ventas siempre tiene urgencia máxima en sus peticiones de features y el PM tiene que decidir sin destruir la relación ni comprometer el roadmap estratégico. ¿Cómo diseño el proceso de intake y priorización de peticiones de ventas? Dame el sistema: el formulario de petición que captura el impacto de negocio, el proceso de evaluación con criterios objetivos, cómo comunicar el no o el "más adelante" sin dañar la relación, y el SLA de respuesta que da previsibilidad a ventas.

5. ALINEAR INGENIERÍA CON PRODUCTO: MÁS ALLÁ DEL SPRINT
La tensión entre producto e ingeniería es estructural: producto quiere velocidad y el máximo de features, ingeniería quiere calidad y tiempo para la deuda técnica. ¿Cómo construyo la relación de trabajo real con el equipo de ingeniería que reduce esa tensión? Dame las prácticas concretas: cuándo y cómo involucrar a ingeniería en las decisiones de producto antes de que estén definidas, cómo hacer espacio para la deuda técnica en el roadmap sin que sea una batalla, y cómo construir la confianza con el tech lead que hace que las conversaciones difíciles sean más fáciles.

6. CÓMO PEDIR RECURSOS Y CONSEGUIRLOS
Como PM, necesito headcount para crecer y presupuesto para ejecutar. ¿Cómo hago ese proceso de forma que las probabilidades de éxito sean máximas? Dame el framework para construir el business case de recursos de producto: qué datos incluir, cómo presentarlo según el tipo de audiencia (CEO vs. CFO), qué timing elegir (planning anual vs. petición fuera de ciclo), y cómo hacer seguimiento sin ser percibido como pesado.

7. CUANDO LA POLÍTICA SE CONVIERTE EN UN OBSTÁCULO INSUPERABLE
¿Qué hago cuando la política organizacional es tan disfuncional que bloquea sistemáticamente las iniciativas de producto? Dame el diagnóstico de cuándo el problema es navegable (con las técnicas correctas) y cuándo es estructural (y el problema real es que la organización no está preparada para una función de producto fuerte). Incluye las señales de que ha llegado el momento de escalar el problema a niveles superiores y las de que ha llegado el momento de irme.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Desarrollar las habilidades de influencia política del PM para conseguir recursos, alineación y prioridad en organizaciones con intereses contrapuestos.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'RRHH como socio estratégico del negocio',
                'description'       => 'El CHRO que tiene influencia en el comité de dirección: cómo el departamento de personas pasa de ser un cost center a ser considerado un driver de negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en dirección de personas y liderazgo de RRHH. Necesito que me ayudes a desarrollar el posicionamiento del departamento de RRHH (o de personas) como socio estratégico del negocio, con influencia real en el comité de dirección, en las decisiones de inversión y en la agenda de la empresa.

Mi contexto:
- Mi rol: [CHRO / directora de personas / HR Business Partner / responsable de RRHH]
- Tamaño de la empresa: [número de empleados aproximado]
- Percepción actual del departamento de RRHH en la organización: [administrativo y de soporte / relevante en algunas áreas / respetado pero no estratégico / ya tiene algo de influencia estratégica]
- Principale reto para ganar influencia: [el CEO no ve a RRHH como estratégico / falta de datos y métricas / desconexión con los objetivos de negocio / el departamento está demasiado ocupado con tareas administrativas / reputación histórica negativa en la organización]
- Lo que quiero conseguir: [asiento en el comité de dirección / influencia en decisiones de inversión en personas / ser consultado antes de decisiones estratégicas que afectan al talento]

Dame:

1. LA BRECHA ENTRE RRHH OPERATIVO Y RRHH ESTRATÉGICO
Explícame la diferencia entre el departamento de RRHH que gestiona nóminas, contratos y procesos de selección (el modelo operativo) y el departamento de personas que influye en la estrategia de la empresa, diseña la organización y gestiona el talento como ventaja competitiva (el modelo estratégico). ¿Cómo ha evolucionado el rol del CHRO en los últimos diez años y qué han hecho los CHROs más influyentes para ganarse el asiento en la mesa de dirección?

2. EL LENGUAJE DEL NEGOCIO: LA CLAVE DE LA INFLUENCIA
RRHH pierde influencia cuando habla el idioma de personas y no el idioma del negocio. ¿Cómo aprendo a hablar en términos que el CEO, el CFO y los directores de negocio entienden y valoran? Dame el framework de traducción: cómo conectar las iniciativas de talento con los KPIs de negocio (revenue por empleado, time-to-productivity de los nuevos contratados, coste del churn de talento clave, correlación entre engagement y resultados), y cómo presentar el impacto económico de las decisiones de personas de forma que sean relevantes en una sala de dirección.

3. EL PEOPLE ANALYTICS COMO HERRAMIENTA DE INFLUENCIA
Los datos de personas son uno de los activos más infrautilizados de las organizaciones. ¿Cómo construyo la capacidad de people analytics en mi departamento? Dame el plan: las métricas básicas que todo departamento de RRHH debería tener (turnover por departamento y nivel, time-to-fill, coste de contratación, distribución del rendimiento, análisis de compensación), las herramientas accesibles para un equipo pequeño, y cómo usar estos datos para construir el caso de negocio de las iniciativas de personas y para anticipar problemas antes de que sean visibles para el management.

4. EL HRBP COMO INTERFAZ CON EL NEGOCIO
El modelo de HR Business Partner es el puente entre el departamento de personas y las unidades de negocio. ¿Cómo diseño el rol del HRBP para que sea genuinamente estratégico? Dame la descripción del HRBP ideal: las conversaciones que debe tener con el director de negocio (planning de talento, estructura organizativa, gestión del rendimiento), cómo equilibra el tiempo entre lo administrativo y lo estratégico, y cómo evita convertirse en el administrador de RRHH del equipo de negocio.

5. CÓMO INFLUIR EN EL COMITÉ DE DIRECCIÓN
Tener asiento en el comité de dirección es una cosa; tener influencia real es otra. ¿Cómo me posiciono para que las decisiones estratégicas de la empresa incorporen la perspectiva de personas antes de tomarse, no después? Dame las tácticas: cómo preparo el comité de dirección con información relevante sobre el estado del talento, cómo planteo los temas de personas en términos de riesgo estratégico (la falta de talento en un área crítica como riesgo para el plan de negocio), y cómo construyo la credibilidad de que puedo ejecutar lo que prometo.

6. GESTIONAR LA RESISTENCIA DE LOS DIRECTIVOS DE LÍNEA
Los directores de las áreas de negocio a veces ven a RRHH como un departamento que les complica la vida en lugar de ayudarles. ¿Cómo gestiono esa resistencia y convierto a los directores de línea en aliados de la agenda de personas? Dame el enfoque: las conversaciones que debo tener para entender sus necesidades de talento reales, cómo les ayudo a resolver problemas concretos que les preocupan (el director comercial que no puede retener a su mejor vendedor, el director de operaciones que tarda meses en contratar perfiles técnicos) y cómo construyo con eso la reputación de RRHH como habilitador del negocio.

7. EL PLAN DE TRANSFORMACIÓN DE RRHH A SOCIO ESTRATÉGICO
Dame el plan de 12 a 24 meses para transformar el posicionamiento del departamento de personas en mi organización: los quick wins del primer trimestre que demuestran valor rápido (los datos que nunca se habían tenido, la iniciativa de retención que salva un talento clave), las iniciativas de medio plazo que construyen capacidad estratégica (people analytics, modelo HRBP, planificación de la plantilla), y los hitos que indican que el departamento ha alcanzado el posicionamiento estratégico que buscamos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Transformar el posicionamiento del departamento de RRHH de operativo a estratégico, con influencia real en las decisiones de negocio y en el comité de dirección.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'CFO como influenciador organizacional',
                'description'       => 'El director financiero que convence a todos los departamentos de que la disciplina financiera beneficia a todos: las técnicas de influencia del CFO moderno.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en liderazgo financiero y gestión organizacional. Necesito que me ayudes a desarrollar las habilidades de influencia del CFO moderno: cómo hacer que los departamentos abracen la disciplina financiera en lugar de verla como un obstáculo, cómo posicionarme como socio estratégico del CEO y cómo influir en la organización más allá del control del gasto.

Mi contexto:
- Mi rol: [CFO / director financiero / controller / finance business partner]
- Tipo de organización: [startup con inversores / empresa mediana / corporación / empresa familiar]
- Percepción actual de finanzas en la organización: [el departamento que dice no / la policía del presupuesto / administrativo / ya con algo de influencia estratégica]
- Mayor reto de influencia: [los directores de área no hacen caso de los presupuestos / el CEO toma decisiones sin consultar finanzas / la organización no entiende los números / las peticiones de presupuesto llegan fuera de ciclo y sin business case]
- Lo que quiero conseguir: [ser consultado antes de las decisiones estratégicas / que los directores de área entiendan el impacto de sus decisiones / construir una cultura de accountability financiero]

Dame:

1. DE LA POLICÍA DEL PRESUPUESTO AL SOCIO ESTRATÉGICO
Explícame la transformación del rol del CFO en los últimos años: de guardián del gasto a socio estratégico del CEO y de la organización. ¿Cómo ha cambiado lo que se espera de un CFO moderno? ¿Por qué los mejores CFOs son los que tienen más influencia en la estrategia y no solo en el control? Dame ejemplos del tipo de decisiones que un CFO con influencia real puede moldear frente a uno que solo reporta números.

2. CÓMO HABLAR EL IDIOMA DE CADA ÁREA
El CFO que solo habla en términos financieros no llega al director comercial, al CTO ni al director de operaciones. ¿Cómo aprendo a comunicar el impacto financiero en el idioma de cada área? Dame el framework de traducción para las principales áreas: cómo explico el impacto del coste de adquisición al equipo de marketing, el coste de la deuda técnica al CTO, el ROI del talento al CHRO y la rentabilidad por producto al equipo de ventas. ¿Qué preguntas debo hacer para entender los drivers de negocio de cada departamento antes de intentar influir?

3. EL BUSINESS PARTNERING FINANCIERO
El modelo de finance business partner sitúa a personas de finanzas dentro o cerca de los equipos de negocio para aportar perspectiva financiera en tiempo real. ¿Cómo diseño e implemento este modelo? Dame la estructura: qué perfiles de finanzas poner en el rol, qué tipo de soporte ofrecen (análisis de rentabilidad, modelización de escenarios, seguimiento del presupuesto), cómo medir si están aportando valor y cómo evitar que se conviertan en simples reporteros de números.

4. CONSTRUIR CULTURA DE ACCOUNTABILITY FINANCIERO
¿Cómo construyo una cultura donde los directores de área se sienten dueños de sus números y no solo ejecutores de un presupuesto que les impusieron? Dame las tácticas: cómo involucrar a los directores en el proceso de presupuestación en lugar de imponerles las cifras, cómo diseñar los KPIs financieros que cada directivo monitoriza en su cuadro de mando, cómo hacer que las reuniones de seguimiento presupuestario sean conversaciones de negocio en lugar de auditorías, y cómo crear los incentivos correctos para que el cumplimiento del presupuesto sea una prioridad también para las áreas.

5. CÓMO INFLUIR EN LAS DECISIONES ESTRATÉGICAS ANTES DE QUE SE TOMEN
El CFO que se entera de las decisiones estratégicas después de que se han tomado es un CFO sin influencia real. ¿Cómo me posiciono para ser consultado antes de que se tomen las decisiones de inversión, expansión o reestructuración? Dame las tácticas: la relación uno a uno con el CEO que me pone en el flujo de información estratégica, cómo me hago imprescindible en los procesos de due diligence de nuevas iniciativas, cómo construyo la agenda del comité de dirección para que los temas financieros estén integrados en la conversación estratégica desde el principio.

6. GESTIONAR LA RESISTENCIA DE LOS DIRECTIVOS DE LÍNEA
El director de ventas que dice que el presupuesto le ata las manos o el de marketing que dice que finanzas no entiende la inversión en marca son adversarios frecuentes del CFO. ¿Cómo gestiono esa resistencia y convierto a los directivos de línea en aliados de la disciplina financiera? Dame el enfoque: cómo entender sus necesidades financieras reales (no siempre es más dinero: a veces es más flexibilidad, más agilidad, más visibilidad), cómo diseñar el proceso presupuestario para que sientan que tienen voz, y cómo demostrar que la disciplina financiera les ayuda a conseguir sus objetivos de negocio en lugar de dificultarlos.

7. EL CFO COMO COMUNICADOR: SIMPLIFICAR LO COMPLEJO
La capacidad de comunicar información financiera compleja de forma clara y accionable es la habilidad de influencia más importante del CFO. ¿Cómo desarrollo esa capacidad? Dame el framework de comunicación financiera: cómo diseñar el dashboard ejecutivo que da a cada directivo la información que necesita (no todo el detalle sino lo relevante para sus decisiones), cómo presentar los resultados financieros en el comité de dirección de forma que generen conversación estratégica en lugar de revisión de cifras, y cómo comunicar una situación financiera difícil sin generar pánico pero sí urgencia de acción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Desarrollar las habilidades de influencia del CFO moderno para posicionarse como socio estratégico y construir una cultura de accountability financiero en la organización.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'El abogado interno como asesor estratégico',
                'description'       => 'El general counsel que influye en las decisiones de negocio más allá del asesoramiento legal: cómo construir credibilidad y asiento en la mesa donde se toman las decisiones.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en liderazgo jurídico corporativo y gestión del departamento legal. Necesito que me ayudes a desarrollar el posicionamiento del abogado interno como asesor estratégico del negocio, con influencia real en el comité de dirección y en las decisiones clave de la empresa, más allá del rol tradicional de asesoramiento legal reactivo.

Mi contexto:
- Mi rol: [General Counsel / Director Jurídico / abogado in-house]
- Tamaño y tipo de empresa: [startup / empresa mediana / corporación / empresa cotizada]
- Áreas de práctica principales: [M&A / laboral / regulatorio / contratos / propiedad intelectual / etc.]
- Percepción actual del departamento legal en la organización: [el departamento que dice no / la unidad que ralentiza los proyectos / administrativo-contractual / con algo de influencia estratégica]
- Mayor reto para ganar influencia: [no se nos consulta antes de las decisiones / se ve al departamento legal como un freno / falta de visibilidad en el comité de dirección / la organización no entiende el valor del asesoramiento preventivo]

Dame:

1. LA TRANSFORMACIÓN DEL ROL DEL ABOGADO INTERNO
Explícame la evolución del General Counsel en los últimos veinte años: del revisor de contratos y gestor de litigios al asesor estratégico que sienta en el comité de dirección. ¿Qué ha cambiado en el entorno de negocio (digitalización, globalización, regulación creciente, riesgos reputacionales) para que el abogado interno haya ganado relevancia estratégica? ¿Qué características tienen los General Counsel con mayor influencia en sus organizaciones?

2. DE "EL DEPARTAMENTO QUE DICE NO" A "EL QUE BUSCA EL CÓMO"
La reputación del departamento legal como el que frena los proyectos es el mayor obstáculo para la influencia del abogado interno. ¿Cómo cambio esa percepción? Dame el cambio de enfoque: cómo paso de dar respuestas de riesgo puro (esto no se puede hacer) a aportar alternativas que permitan hacer el negocio de forma que gestione el riesgo de forma aceptable, cómo incorporo el análisis de riesgo-beneficio en mis recomendaciones y cómo comunico los riesgos jurídicos en términos que el CEO y los directores de negocio puedan entender y ponderar.

3. CÓMO CONSTRUIR RELACIONES DE CONFIANZA CON EL NEGOCIO
La influencia del abogado interno se basa en la confianza que el equipo directivo deposita en él. ¿Cómo construyo esa confianza? Dame las prácticas: el tiempo dedicado a entender el negocio en profundidad (el modelo de ingresos, la propuesta de valor, los mercados, los competidores), las conversaciones informales con los directivos que me dan visibilidad temprana de los proyectos, y cómo ser el primero al que llaman cuando hay una decisión difícil porque saben que voy a ayudarles a encontrar la solución y no solo a señalar el problema.

4. LEGAL OPS: HACER MÁS CON MENOS Y CON DATOS
El departamento legal que tiene datos sobre su propia eficiencia y puede demostrarlo con métricas gana credibilidad interna. Dame el plan de legal operations básico: qué métricas debe monitorizar un departamento legal (tiempo de revisión de contratos, coste de los asuntos externos vs. internos, volumen de consultas por área, tiempo de respuesta), cómo usar esos datos para demostrar el valor del departamento, y cómo la tecnología legal (CLM, herramientas de IA para contratos) puede liberar tiempo para el trabajo estratégico.

5. CÓMO POSICIONARME EN EL COMITÉ DE DIRECCIÓN
Tener asiento en el comité de dirección y tener influencia en él son cosas distintas. ¿Cómo preparo y uso el tiempo en el comité de dirección para aportar perspectiva estratégica en lugar de solo reportar temas legales? Dame el enfoque: cómo preparo los temas jurídicos para que sean relevantes para la agenda estratégica del comité (no el detalle del litigio sino el impacto en la reputación, en los resultados o en la estrategia), cómo anticipo los temas que van a estar en la agenda y preparo la perspectiva jurídica de forma proactiva, y cómo intervengo en temas no estrictamente jurídicos aportando perspectiva de riesgo y gobierno.

6. GESTIONAR LA RELACIÓN CON LOS DESPACHOS EXTERNOS
El General Counsel que gestiona bien los despachos externos genera ahorro y también credibilidad interna. ¿Cómo diseño el panel de despachos, la política de selección de asesores externos, los mecanismos de fee arrangement que alineen los incentivos del despacho con los del cliente, y el proceso de control de calidad y coste del trabajo externo? ¿Cómo uso la relación con los despachos para acceder a know-how que no tengo internamente y cómo evito la dependencia excesiva de asesores externos en áreas que debería dominar internamente?

7. EL ABOGADO INTERNO COMO GESTOR DE LA CULTURA DE CUMPLIMIENTO
El General Counsel moderno es también el guardián de la cultura ética de la empresa. ¿Cómo construyo y gestiono el programa de compliance que va más allá del mero cumplimiento normativo y se convierte en un activo de reputación y de cultura? Dame el plan: la política de código de conducta, los canales de denuncia, la formación en compliance para toda la organización, la respuesta ante un incidente y cómo usar el compliance como palanca de influencia y de reputación del departamento legal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Desarrollar el posicionamiento del abogado interno como asesor estratégico con influencia real en las decisiones de negocio y en el comité de dirección.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS como voz del cliente en la organización',
                'description'       => 'El equipo de CS que influye en el roadmap del producto, en las políticas comerciales y en la cultura de la empresa usando la voz del cliente como herramienta de influencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success y liderazgo de equipos de clientes. Necesito que me ayudes a desarrollar la influencia del departamento de Customer Success en la organización, usando la voz del cliente como herramienta para influir en el roadmap del producto, en las políticas comerciales, en el servicio de soporte y en la cultura general de la empresa.

Mi contexto:
- Mi rol: [CSM / Team Lead de CS / Head of CS / VP of Customer Success]
- Tipo de producto: [SaaS / plataforma / servicio recurrente / etc.]
- Tamaño del equipo de CS: [solo / pequeño / equipo grande]
- Influencia actual del equipo de CS en la organización: [nula / poca / en desarrollo / razonablemente bien]
- Principal frustración: [el producto no incorpora el feedback de los clientes / las políticas comerciales generan churn que CS tiene que gestionar / soporte no resuelve los problemas que CS detecta / nadie escucha al equipo de CS cuando alerta de problemas]
- Lo que quiero conseguir: [que el producto escuche el feedback de clientes / que los decisiones comerciales consideren el impacto en el cliente / ser invitado a las reuniones donde se toman decisiones que afectan a los clientes]

Dame:

1. LA PARADOJA DE CS: RESPONSABLE DEL CLIENTE SIN AUTORIDAD SOBRE NADA
El equipo de CS es responsable de la retención de los clientes pero no controla el producto, el precio, el soporte ni las políticas comerciales. Explícame cómo esta paradoja hace que CS necesite ser uno de los equipos con mayor habilidad de influencia sin autoridad de toda la empresa. ¿Cómo los mejores equipos de CS del mundo han convertido la voz del cliente en una palanca de influencia real sobre el resto de la organización?

2. EL SISTEMA DE CAPTURA Y AMPLIFICACIÓN DE LA VOZ DEL CLIENTE
La voz del cliente solo tiene impacto organizacional cuando está bien capturada, organizada y presentada en el momento correcto. Dame el sistema completo: las herramientas para capturar feedback (NPS, CSAT, conversaciones de QBR, tickets de soporte, entrevistas de churn), cómo estructurarlo para que sea accionable (por tipo de problema, por segmento de cliente, por urgencia), cómo compartirlo internamente con la frecuencia y el formato correctos para que no sea ignorado, y cómo mantener el bucle cerrado con el cliente cuando su feedback produce un cambio.

3. CÓMO INFLUIR EN EL ROADMAP DEL PRODUCTO
El equipo de CS tiene el acceso más directo al dolor real de los clientes, pero la mayoría de los equipos de producto no incorporan ese feedback de forma sistemática. ¿Cómo construyo el canal de feedback CS-Producto que realmente funciona? Dame el proceso: el formato de la petición de feature que product management puede priorizar (impacto en retención, número de clientes afectados, ARR en riesgo), la cadencia de las reuniones de alineación CS-producto, cómo diferenciar el feedback de los clientes que son edge cases del feedback que representa a la mayoría, y cómo hacer seguimiento del feedback que se ha comprometido incluir en el roadmap.

4. CÓMO INFLUIR EN LAS DECISIONES COMERCIALES
Las decisiones del equipo comercial (precio, contrato, promesas de producto, descuentos) afectan directamente al cliente y al trabajo de CS. ¿Cómo influyo en esas decisiones antes de que creen problemas en la cartera? Dame las tácticas: cómo construir el canal de comunicación CS-Ventas (los red flags que CS debe comunicar cuando una venta se está haciendo sobre promesas incumplibles), cómo presentar el impacto financiero del churn generado por problemas comerciales al equipo de ventas y al management, y cómo involucrarme en el diseño de las políticas de onboarding y de las condiciones contractuales que afectan a la retención.

5. LOS DATOS QUE DAN AUTORIDAD A CS EN LA ORGANIZACIÓN
El equipo de CS que solo habla de "los clientes están contentos o no" tiene poca influencia. El que habla de churn rate, NRR, ARR en riesgo y coste de retención tiene mucha. ¿Qué datos debe dominar y comunicar el equipo de CS para ganar influencia interna? Dame el set de métricas y el formato de reporte que conecta el trabajo de CS con los resultados financieros de la empresa: el NRR como métrica principal, el ARR en riesgo clasificado por urgencia, el coste del churn vs. el coste de retención, y el impacto de CS en el LTV.

6. CONSTRUIR ALIANZAS CROSS-FUNCIONALES
CS no puede influir solo: necesita alianzas con producto, ventas, marketing y soporte. ¿Cómo construyo esas alianzas de forma estratégica? Dame el plan: los rituales de alineación cross-funcional que debo proponer (la reunión de churn review mensual con producto y ventas, el voice of customer trimestral con dirección), cómo hacer que cada departamento aliado sienta que CS les aporta valor (no que les señala problemas), y cómo usar los quick wins para construir credibilidad con cada área.

7. EL HEAD OF CS EN EL COMITÉ DE DIRECCIÓN
¿Cómo consigo que la perspectiva del cliente esté representada en las decisiones estratégicas de la empresa? Dame el plan para que la dirección de CS tenga un asiento en la mesa: los argumentos para justificar esa presencia (el cliente es el activo más importante de la empresa y alguien debe ser su voz en las decisiones estratégicas), el tipo de aportación que debo hacer en el comité (no reportar NPS sino conectar la satisfacción del cliente con la estrategia de crecimiento), y cómo demostrar con datos que CS es un driver de negocio y no solo un cost center.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Desarrollar la influencia del equipo de CS en la organización usando la voz del cliente para impactar en el producto, las políticas comerciales y la estrategia de la empresa.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión de stakeholders en proyectos freelance',
                'description'       => 'Cuando hay múltiples decisores en el cliente y cada uno tiene una opinión diferente: las técnicas de alineación que hacen que el proyecto avance sin bloquearse.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de proyectos y relación con clientes para profesionales independientes y freelancers. Necesito que me ayudes a diseñar el sistema para gestionar los múltiples decisores que a veces hay en un proyecto freelance: cuando el cliente no es una persona sino un comité de personas con opiniones diferentes que pueden bloquear el proyecto o destruir el trabajo ya entregado.

Mi contexto:
- Mi especialidad freelance: [diseño / desarrollo / copywriting / consultoría / fotografía / etc.]
- Tipo de cliente donde más ocurre este problema: [pymes / empresas medianas / startups con varios socios / cualquier cliente con más de un decisor]
- El escenario más habitual que me bloquea: [el CEO y el marketing director tienen visiones opuestas / los dos socios de la empresa no se ponen de acuerdo / el interlocutor con quien trabajo no tiene autoridad para aprobar / el cliente invita a nuevas personas a revisar el trabajo en fases avanzadas]
- Mi mayor frustración: [trabajo destruido en la última revisión / ciclos de revisión interminables / cambios de rumbo sin previo aviso / facturas que no se pagan porque el proyecto no termina de aprobarse]

Dame:

1. POR QUÉ LOS MÚLTIPLES DECISORES SON EL MAYOR RIESGO DEL FREELANCE
Explícame la dinámica de los comités de decisión en los proyectos freelance: por qué la falta de un único decisor claro multiplica el riesgo de scope creep, los ciclos de revisión infinitos y los proyectos que nunca llegan al cierre. ¿Cuándo se complica la estructura de decisión de un cliente (crecimiento de la empresa, cambio de estrategia, entrada de nuevos directivos, proyectos de alto impacto) y cómo lo puedo detectar antes de firmar el contrato?

2. LA FASE DE DISCOVERY: MAPEAR EL PODER ANTES DE EMPEZAR
El momento de descubrir quién toma las decisiones es antes de firmar el contrato, no en la primera revisión. ¿Qué preguntas debo hacer en la reunión de discovery para mapear la estructura de decisión del cliente? Dame las preguntas exactas: quién va a aprobar el entregable final, qué personas van a estar implicadas en el proceso, cómo se toman las decisiones en la empresa cuando hay desacuerdo, y cuál es el proceso de aprobación interna. ¿Qué señales de alarma en la respuesta del cliente me indican que voy a tener problemas con los stakeholders?

3. EL CONTRATO QUE PROTEGE AL FREELANCE EN ENTORNOS MULTI-DECISOR
¿Qué cláusulas debo incluir en el contrato cuando trabajo con un cliente que tiene múltiples decisores? Dame las cláusulas específicas: quién es el interlocutor único y el firmante de las aprobaciones (nombrado en el contrato), el proceso de revisión con número máximo de rondas incluidas, qué pasa si se añaden nuevos revisores después de acordado el scope, cómo se gestionan las revisiones contradictorias entre distintos stakeholders del cliente, y cómo facturar las rondas adicionales de revisión.

4. CÓMO ALINEAR A LOS STAKEHOLDERS ANTES DE ENTREGAR
El error más caro del freelance es entregar el trabajo terminado a un comité de personas que no han alineado sus expectativas previamente. ¿Cómo involucro a todos los decisores relevantes en las fases previas del proyecto? Dame el proceso: la reunión de kickoff con todos los stakeholders presentes para alinear objetivos y expectativas, los checkpoints de validación en fases intermedias (wireframes, borradores, prototipos) donde obtengo aprobación parcial antes de continuar, y cómo documento cada aprobación intermedia para que sea difícil retractarse en la revisión final.

5. CUANDO LOS STAKEHOLDERS SE CONTRADICEN
¿Qué hago cuando el director de marketing dice una cosa y el CEO dice la contraria y yo tengo que entregar algo que los dos aprueben? Dame el playbook para gestionar la contradicción entre stakeholders del cliente: cómo identificar quién tiene la última palabra en caso de desacuerdo (y si no está claro, cómo pedírselo al cliente), cómo presentar las dos opciones de forma que el cliente resuelva el conflicto internamente antes de darme instrucciones, y cómo documentar las instrucciones recibidas para que quede claro que el cambio de dirección vino del cliente.

6. LOS NUEVOS REVISORES QUE APARECEN EN FASES AVANZADAS
El escenario más destructivo para un proyecto freelance es la aparición de nuevas personas con opinión y autoridad en fases avanzadas del proyecto. ¿Cómo gestiono esta situación? Dame el protocolo: cómo responder cuando el cliente dice que quiere que "el CEO también dé su opinión" cuando el proyecto ya está en fase de diseño final, qué decir para proteger el trabajo ya aprobado, cómo hacer que las nuevas opiniones no destruyan la dirección acordada, y cuándo es legítimo cobrar extra por el rework generado por la incorporación de nuevos decisores.

7. CÓMO CERRAR PROYECTOS CON MÚLTIPLES DECISORES
El cierre formal del proyecto es especialmente importante cuando hay varios decisores. ¿Cómo consigo la aprobación final de un proyecto cuando hay varias personas que deben firmar? Dame el proceso de cierre: la reunión de presentación final con todos los stakeholders relevantes, el acta de aprobación que todos firman (o el email de confirmación que tiene el mismo efecto), cómo gestionar las últimas revisiones de último minuto, y cómo asegurarme de que la factura final se paga sin esperar a que todos los stakeholders se pongan de acuerdo en que el proyecto está terminado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el sistema para gestionar múltiples decisores en proyectos freelance y evitar los ciclos de revisión infinitos y los bloqueos de aprobación.',
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
