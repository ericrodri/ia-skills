<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills255Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gestión de agencias y proveedores de marketing',
                'description'       => 'Gestiona con eficacia el ecosistema de agencias y proveedores de marketing: cómo seleccionarlos, onboardearlos, medir su rendimiento y construir relaciones que producen el mejor trabajo en lugar de las facturas más altas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de marketing con experiencia gestionando ecosistemas complejos de agencias y proveedores: la agencia de publicidad que gestiona las campañas de paid media, la consultora de SEO, el estudio de diseño para los activos creativos, el proveedor de email marketing, la productora de vídeo y la agencia de relaciones públicas. Has aprendido que la calidad del trabajo que producen estas agencias depende en gran medida de cómo el cliente interno las gestiona: los briefings que dan, la claridad de los objetivos, la consistencia del feedback y la relación que construyen.

Necesito mejorar la gestión de mis agencias y proveedores de marketing. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo interno de marketing y qué capacidades se gestionan con agencias externas vs. las que se mantienen internamente?
2. ¿Cuántas agencias y proveedores gestiona actualmente el equipo y cuáles son los más críticos?
3. ¿Cuáles son los principales problemas con la gestión actual: trabajo de baja calidad, costes fuera de control, falta de alineación con los objetivos, coordinación deficiente entre agencias, o algo específico?
4. ¿Cómo se estructura actualmente el sistema de compensación de las agencias: fee mensual, por proyecto, por resultados o un modelo mixto?
5. ¿Cuál es el proceso de briefing y de aprobación de trabajos con las agencias actualmente?

Con esas respuestas, desarrolla la guía de gestión de agencias y proveedores de marketing:

**1. La selección de agencias: más allá del pitch impresionante**
El error más común en la selección de agencias de marketing es elegir a la que hace el mejor pitch en lugar de a la que va a producir el mejor trabajo real. Define el proceso de selección basado en evidencia: la definición del perfil de agencia ideal antes de lanzar el proceso (el tamaño adecuado para que tu cuenta sea importante para ellos pero no su único cliente, la especialización en tu sector o modelo de negocio, la composición del equipo que va a trabajar en tu cuenta), el proceso de RFP que evalúa la capacidad real de la agencia con un caso práctico basado en un reto de negocio real en lugar de una presentación genérica de credenciales, la verificación de referencias con clientes actuales y anteriores de la agencia que revela cómo es trabajar con ellos cuando hay un problema, la evaluación del equipo específico que va a gestionar la cuenta (no el equipo senior que hace el pitch y luego desaparece), y la negociación del contrato que establece los compromisos de nivel de servicio antes de firmar.

**2. El onboarding de la agencia: la inversión que determina la calidad del año**
Las primeras semanas de trabajo con una agencia nueva determinan el tono y la calidad de toda la relación. Define el proceso de onboarding de agencias: el knowledge transfer completo que da a la agencia el contexto que necesita para trabajar bien (la estrategia de marca, el posicionamiento, los clientes y sus perfiles, los competidores, los aprendizajes de las campañas anteriores, los procesos internos de aprobación), la presentación del equipo interno de marketing y de los stakeholders de negocio que la agencia necesita conocer, los primeros proyectos de menor riesgo que permiten aprender cómo trabajar juntos antes de confiarles las iniciativas más críticas, y el proceso de feedback de los primeros trabajos que es más explícito que en las etapas posteriores de la relación cuando ya hay un entendimiento mutuo establecido.

**3. El briefing: el input que determina la calidad del output**
La agencia produce el trabajo que el briefing les pide, y un briefing vago produce trabajo vago. Define la anatomía del briefing de marketing efectivo: el contexto del negocio que la agencia necesita para entender por qué este proyecto importa ahora (no solo el brief de la campaña sino el contexto estratégico), el público objetivo definido con precisión (el cliente que debería responder a esta comunicación y su estado mental en el momento de contacto), el objetivo específico y medible del proyecto (no "mejorar el awareness" sino "aumentar el número de formularios completados en la landing en un 20%"), las restricciones de marca, tono y presupuesto que la agencia debe respetar, y los criterios de éxito que se usarán para evaluar el trabajo en la presentación.

**4. La gestión del rendimiento de la agencia: métricas y conversaciones difíciles**
La agencia que no recibe feedback claro sobre su rendimiento no puede mejorar. Define el sistema de gestión del rendimiento de las agencias: los KPIs específicos por agencia que miden el impacto en el negocio y no solo la actividad (la agencia de paid media se mide por el ROAS y el CAC, no por el número de anuncios publicados; la agencia de SEO se mide por el tráfico orgánico cualificado y las posiciones en keywords de negocio, no por el número de artículos publicados), las revisiones periódicas formales de rendimiento donde se comparan los resultados con los compromisos del principio de año, la comunicación del bajo rendimiento que es directa y temprana en lugar de esperar a la revisión anual, y el proceso de decisión sobre cuándo un problema de rendimiento de la agencia es recuperable con cambios en la relación y cuándo justifica el cambio de proveedor.

**5. La coordinación entre múltiples agencias: que el ecosistema funcione como un todo**
Cuando hay múltiples agencias trabajando en paralelo, la coordinación entre ellas es responsabilidad del cliente interno. Define el modelo de coordinación de múltiples proveedores de marketing: la claridad sobre quién hace qué (la matriz de responsabilidades que evita los solapamientos y los gaps entre proveedores), los rituales de coordinación donde las agencias relevantes se alinean sobre el calendario de campañas, los mensajes de marca y los entregables que dependen de unas de otras (la agencia de diseño necesita saber qué está planeando la agencia de paid media para preparar los creativos a tiempo), el proceso de gestión de conflictos entre agencias que compiten por el mismo presupuesto o por la dirección creativa de una campaña, y la posición del equipo interno de marketing como árbitro y garante de la coherencia de la estrategia.

**6. La renovación o el cambio de agencia: cuándo toca y cómo hacerlo bien**
Ninguna relación con una agencia dura para siempre y el fin bien gestionado es tan importante como el comienzo. Define el proceso de decisión y gestión del cambio de agencia: los síntomas que indican que la relación con una agencia ha llegado a su fin natural (el equipo creativo de la agencia ha perdido frescura después de años trabajando con la misma marca, la agencia ha crecido y tu cuenta ya no es prioritaria para ellos, los resultados llevan trimestres por debajo del objetivo y los cambios de proceso no han resuelto el problema), el proceso de búsqueda de la nueva agencia que ocurre en paralelo con la relación existente para minimizar el tiempo sin cobertura, y la gestión de la transición que protege el conocimiento acumulado (los activos creativos, los aprendizajes de las campañas, los accesos a las plataformas) y que respeta la relación profesional con la agencia saliente.

Termina con el plan de mejora de la gestión de agencias para el ecosistema de proveedores descrito, con las tres acciones de mayor impacto en la calidad del trabajo y en la eficiencia del gasto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar el ecosistema de agencias y proveedores de marketing para obtener mejor trabajo, mayor eficiencia y relaciones más productivas.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Vendor management técnico: evaluar y gestionar proveedores de software',
                'description'       => 'Gestiona el ecosistema de proveedores de software y tecnología de tu organización: cómo evaluar, seleccionar, negociar y gestionar el ciclo de vida de los proveedores técnicos para maximizar el valor y minimizar el riesgo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CTO o director de ingeniería con experiencia gestionando el portfolio de proveedores de software en organizaciones donde las decisiones de tecnología de terceros tienen un impacto directo en la velocidad del equipo de desarrollo, la seguridad de los sistemas y el coste de la operación. Has evaluado y seleccionado desde herramientas de developer tooling hasta plataformas de infraestructura cloud, y has aprendido que la decisión de qué software comprar es tan importante como la de qué construir internamente.

Necesito mejorar la gestión de proveedores de software y tecnología en mi organización. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de ingeniería y el tipo de producto o sistema que construye la empresa?
2. ¿Cuántos proveedores de software y tecnología gestiona actualmente la organización y cuáles son los más críticos para el negocio?
3. ¿Cuáles son los principales problemas con la gestión actual de proveedores: shadow IT sin control, costes de licencias fuera de control, dependencias de proveedores que generan riesgo, evaluaciones de nuevas herramientas sin proceso sistemático u otro?
4. ¿Hay un proceso formal de evaluación y aprobación de nuevas herramientas o cada equipo compra lo que necesita de forma independiente?
5. ¿Cuál es el presupuesto aproximado en software de terceros y cómo se distribuye entre los proveedores principales?

Con esas respuestas, desarrolla la guía de vendor management técnico:

**1. El portfolio de software: inventario, categorización y racionalización**
Antes de gestionar los proveedores, necesitas saber qué tienes. Define el proceso de inventario y racionalización del portfolio de software: el audit de todas las herramientas y suscripciones activas de la organización (incluyendo el shadow IT que los equipos han comprado sin pasar por el proceso de aprobación), la categorización por criticidad para el negocio (las herramientas críticas cuya caída afecta al producto o a los ingresos, las herramientas importantes para la productividad del equipo, las herramientas discrecionales que son útiles pero reemplazables), la identificación de duplicidades donde múltiples equipos pagan por herramientas que hacen lo mismo sin que ninguno lo sepa, y el análisis de utilización que detecta las licencias que se pagan pero no se usan (es frecuente que la utilización real sea un 40 o 50% de las licencias contratadas).

**2. El proceso de evaluación de nuevas herramientas: construir, comprar o integrar**
La decisión de adoptar un nuevo proveedor de software es una de las decisiones técnicas más importantes y raramente se toma con el rigor que merece. Define el proceso de evaluación de proveedores técnicos: el análisis build vs. buy que evalúa si el problema que la herramienta resuelve es suficientemente diferenciador para justificar su construcción interna o si es una capacidad que la empresa no necesita poseer (con los criterios que inclinan hacia cada opción: complejidad de construcción, velocidad de time-to-market, diferenciación competitiva, coste de mantenimiento), la evaluación técnica que verifica que la herramienta cumple los requisitos de integración, rendimiento, seguridad y escalabilidad antes de comprometerse (el POC que simula el caso de uso real de la organización, no la demo del comercial), y la evaluación del proveedor como empresa que valora su estabilidad financiera, su roadmap de producto y la calidad de su soporte técnico.

**3. La seguridad y el cumplimiento en la gestión de proveedores**
Cada proveedor de software que accede a datos de la empresa o que se integra con los sistemas de producción es una superficie de ataque potencial. Define el framework de seguridad para la gestión de proveedores técnicos: el proceso de security review que evalúa el nivel de acceso que el proveedor necesita y los controles de seguridad que implementa (las certificaciones como SOC 2 Type II, ISO 27001 o el equivalente en el sector), el análisis del riesgo de la cadena de suministro de software que identifica las dependencias críticas cuyo fallo o compromiso afectaría a los sistemas de la empresa, los contratos con cláusulas de seguridad que establecen los compromisos del proveedor en términos de protección de datos, notificación de incidentes y auditoría, y el proceso de offboarding de proveedores que garantiza la revocación de accesos y la eliminación de datos cuando termina la relación.

**4. La negociación de contratos de software: más allá del precio de lista**
El precio de lista de una herramienta SaaS rara vez es el precio que una organización debería pagar. Define la estrategia de negociación con proveedores de software: los elementos del contrato que tienen más valor para la organización y que raramente se negocian (las cláusulas de portabilidad de datos que garantizan que puedes exportar tus datos si cambias de proveedor, el precio garantizado para los próximos años que protege contra aumentos de precio cuando la dependencia sea alta, el SLA de disponibilidad y las penalizaciones por incumplimiento), las palancas de negociación del cliente (el volumen de licencias, el compromiso multianual, la referenciabilidad como caso de éxito, el momento del proceso de compra respecto al final del trimestre del proveedor), y los términos contractuales que no deben aceptarse aunque el proveedor diga que son estándar.

**5. La gestión del ciclo de vida del proveedor: el día después de firmar el contrato**
La firma del contrato es el inicio de la relación, no el fin del proceso de selección. Define el sistema de gestión del ciclo de vida del proveedor: el proceso de onboarding técnico que implementa la integración, forma al equipo y establece los canales de soporte, el sistema de monitorización de la utilización y el coste que detecta de forma temprana cuando la herramienta se usa más de lo previsto (y el coste se dispara) o menos de lo previsto (y las licencias se desperdician), las revisiones periódicas del proveedor que evalúan si sigue siendo la mejor opción dado cómo ha evolucionado el mercado y las necesidades de la empresa, y el proceso de gestión de las renovaciones que comienza noventa días antes del vencimiento para que haya tiempo de negociar o de evaluar alternativas.

**6. La estrategia de reducción de la dependencia de proveedores críticos**
La dependencia de un proveedor de software crítico es un riesgo estratégico que crece con el tiempo. Define la estrategia de gestión del vendor lock-in: la identificación de los proveedores con mayor vendor lock-in actual (los que tienen acceso a datos críticos difíciles de exportar, los que están profundamente integrados en los sistemas de producción, los cuya sustitución requeriría un esfuerzo de migración de meses), el diseño de las capas de abstracción técnica que reducen la dependencia de implementaciones específicas de proveedores (las interfaces que permiten cambiar el proveedor sin reescribir toda la integración), la estrategia de datos que garantiza siempre la posesión y la portabilidad de los datos propios independientemente del proveedor que los aloja, y el plan de contingencia para los proveedores más críticos que define qué haría la organización si el proveedor quebrara o dejara de ser viable.

Termina con el plan de mejora de la gestión de proveedores técnicos para el contexto descrito, con las tres iniciativas de mayor impacto en la reducción de riesgos y en la optimización del coste del portfolio de software.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestionar el portfolio de proveedores de software y tecnología para maximizar el valor, reducir el riesgo y optimizar el gasto.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Gestión de proveedores creativos: freelancers, estudios y productoras',
                'description'       => 'Gestiona el ecosistema de proveedores creativos externos: cómo seleccionar, briefar, dar feedback y construir relaciones duraderas con freelancers de diseño, estudios de marca y productoras que produzcan trabajo de alta calidad de forma eficiente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director creativo o director de diseño con experiencia gestionando ecosistemas de proveedores creativos externos en empresas donde el equipo interno de diseño necesita complementarse con talento externo: el freelance de ilustración para los proyectos específicos, el estudio de marca para los proyectos de identidad, la productora de vídeo para los contenidos audiovisuales, y el fotógrafo para las sesiones de producto. Has aprendido que la calidad del trabajo creativo que producen los proveedores externos depende tanto de cómo los gestionas como de su talento.

Necesito mejorar la gestión de mis proveedores creativos externos. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo de trabajo creativo que gestionas principalmente: diseño de marca, diseño digital, motion graphics, fotografía, vídeo, ilustración u otro?
2. ¿Cuántos proveedores creativos gestiona actualmente tu equipo y cuáles son los más frecuentes?
3. ¿Cuáles son los principales problemas con la gestión actual: trabajo que no respeta el briefing, tiempos de entrega incumplidos, costes por encima del presupuesto, falta de consistencia con la marca u otro?
4. ¿Hay un proceso de briefing estándar para los proveedores o cada proyecto empieza desde cero?
5. ¿Cuáles son las plataformas o canales que usas actualmente para encontrar y gestionar proveedores creativos?

Con esas respuestas, desarrolla la guía de gestión de proveedores creativos:

**1. La construcción del roster de proveedores creativos: calidad, especialización y confianza**
El roster de proveedores creativos de un equipo de diseño es un activo estratégico que se construye con el tiempo. Define el proceso de construcción del roster: la categorización de los tipos de trabajo creativo que requieren proveedores externos y el perfil ideal de proveedor para cada categoría (el freelance de ilustración digital que entiende tu estética, el estudio de brand que tiene experiencia en tu sector, la productora de vídeo con capacidad de producción en los formatos que necesitas), el proceso de evaluación de nuevos proveedores creativos que va más allá del portfolio (la prueba de concepto pagada que evalúa cómo trabajan bajo condiciones reales con un briefing de tu empresa, la verificación de referencias con otros clientes sobre cumplimiento de plazos y gestión del feedback), y el nivel de profundidad de relación adecuado para cada tipo de proveedor (el partner estratégico que conoce tu marca profundamente vs. el proveedor para trabajos específicos).

**2. El briefing creativo: el documento que determina la calidad del trabajo**
El proveedor creativo solo puede entregar lo que el briefing le pide, y un briefing vago produce trabajo vago. Define la anatomía del briefing creativo efectivo: el contexto de marca que da al proveedor el marco en el que debe trabajar (el posicionamiento, los valores de marca, el tono visual, los principios de diseño y las restricciones de marca), el contexto del proyecto que explica por qué este trabajo existe y qué problema de negocio o de comunicación resuelve, la audiencia que debe responder a este trabajo (con sus características, su relación con la marca y el momento de contacto), las especificaciones técnicas del entregable (formatos, dimensiones, resolución, plataformas de uso), los ejemplos de referencia que calibran el estilo esperado (tanto el trabajo que te gusta y por qué como el que no te gusta y por qué no), el presupuesto y el calendario, y los criterios de aprobación que definen cuándo el trabajo está listo para su uso.

**3. El proceso de feedback: cómo comunicar lo que no funciona sin destruir el trabajo**
El feedback creativo mal dado genera ciclos de revisión que consumen tiempo y dinero sin mejorar el trabajo. Define el proceso de feedback creativo efectivo: la diferencia entre el feedback descriptivo que explica cómo hacer el cambio (y que limita la creatividad del proveedor) y el feedback de problema que explica qué no está funcionando desde la perspectiva del objetivo (y que permite al proveedor encontrar la mejor solución), la consolidación del feedback de múltiples stakeholders antes de comunicarlo al proveedor (el feedback contradictorio que llega por separado de distintas personas de la empresa es la principal causa de los proyectos creativos que nunca se resuelven), el número de rondas de revisión acordadas desde el inicio que establece las expectativas y los costes adicionales si se superan, y el feedback positivo que reconoce lo que sí funciona para que el proveedor sepa en qué dirección continuar.

**4. La gestión de los plazos y los presupuestos creativos**
Los proyectos creativos tienen una tendencia natural a expandirse en alcance, tiempo y coste si no se gestionan activamente. Define el sistema de gestión de proyectos creativos con proveedores externos: el scoping del trabajo antes de comprometer el presupuesto (el desglose de entregables, los formatos incluidos y los excluidos, el número de conceptos iniciales y de rondas de revisión incluidas en el precio), el proceso de change order cuando el alcance cambia respecto al acordado (cada cambio de briefing significativo es un nuevo trabajo que requiere un nuevo acuerdo de precio y tiempo), la gestión del calendario que incluye los tiempos internos de feedback y aprobación en la planificación (el proveedor que entrega a tiempo pero tarda semanas en recibir feedback tiene el mismo problema que el que entrega tarde), y el proceso de liquidación de facturas que es rápido y fiable para construir la reputación de buen cliente que atrae al mejor talento creativo.

**5. La gestión de la consistencia de marca con múltiples proveedores**
Cuando varios proveedores creativos trabajan en paralelo para la misma marca, la consistencia es el mayor reto. Define el sistema de gestión de la consistencia de marca con ecosistemas de proveedores: el brand kit completo que cada proveedor recibe como base de trabajo (los assets en los formatos correctos, las guías de uso de la marca, los ejemplos de trabajo aprobado y los ejemplos de trabajo rechazado con la explicación del por qué), la revisión creativa interna antes de la aprobación final que garantiza que el trabajo de cada proveedor es consistente con el sistema visual global, y el proceso de onboarding de nuevos proveedores que transmite el ADN de la marca más allá de las reglas escritas (las sesiones de inmersión de marca que hacen que el proveedor entienda el espíritu además de las normas).

**6. Las relaciones a largo plazo con los mejores proveedores creativos**
Los mejores proveedores creativos tienen opciones sobre con quién trabajan, y construir la relación que hace que te elijan a ti es una ventaja competitiva. Define la estrategia de relación a largo plazo con los proveedores creativos más valiosos: el tratamiento como socios creativos en lugar de como proveedores de servicio (incluirlos en las conversaciones de estrategia creativa antes de dar el briefing, compartir el contexto de negocio que les ayuda a entender mejor para qué trabajan), el feedback del trabajo publicado que cierra el loop y les permite ver el impacto de su trabajo en el contexto real, el pago puntual y en las condiciones acordadas que en el mundo creativo es un diferenciador notable, y las referencias a otros clientes de calidad que construyen una relación de reciprocidad donde el proveedor también referencia trabajo hacia ti.

Termina con el plan de mejora de la gestión de proveedores creativos para el contexto descrito, con las tres acciones de mayor impacto en la calidad del trabajo y en la eficiencia del proceso creativo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Gestionar el ecosistema de proveedores creativos externos para obtener trabajo de mayor calidad de forma más eficiente.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Partner selling: construir y activar un canal de partners',
                'description'       => 'Diseña y activa una estrategia de ventas a través de partners: cómo seleccionar los partners adecuados, darles los recursos para vender, crear los incentivos correctos y gestionar el canal para que genere revenue de forma escalable.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de canales o VP de ventas con experiencia construyendo programas de partners desde cero en empresas de software B2B donde el canal indirecto representa una oportunidad de escalar las ventas sin escalar el equipo comercial propio de forma proporcional. Has diseñado programas de partners para distintos tipos de socios: los resellers que venden el producto a sus clientes, los integradores que lo implementan en proyectos más grandes, los consultores que lo recomiendan, y los tecnológicos que construyen integraciones con sus propios productos.

Necesito construir o mejorar la estrategia de ventas a través de partners. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el producto o servicio que quieres vender a través del canal y qué tipo de partner sería el más adecuado para tu mercado objetivo?
2. ¿Tienes ya algún programa de partners en marcha o partimos de cero?
3. ¿Cuál es el modelo de compensación que estás considerando para los partners: descuento sobre el precio de lista, comisión sobre la venta, modelo de referencia u otro?
4. ¿Cuáles son los principales retos anticipados: encontrar partners dispuestos a vender tu producto, que los partners activen el programa, el conflicto entre el canal indirecto y el equipo de ventas directo u otro?
5. ¿Cuál es el objetivo de revenue que el canal de partners debería generar en los próximos doce meses?

Con esas respuestas, desarrolla la guía de partner selling:

**1. La estrategia de canal: qué tipo de partners y para qué segmento de mercado**
No todos los tipos de partners son adecuados para todos los productos y mercados. Define la estrategia de canal: la tipología de partners según el modelo de negocio (resellers que compran y revenden, referral partners que recomiendan y reciben comisión, implementadores que venden servicios de implementación alrededor del producto, tecnológicos que integran el producto con el suyo), la selección del tipo de partner más adecuado para tu producto según el ciclo de venta, el perfil del comprador final y la complejidad de la implementación, y la segmentación del mercado donde el canal tiene ventaja sobre la venta directa (las geografías donde no tienes presencia, los segmentos de cliente donde el partner ya tiene la relación, los casos de uso que requieren servicios de implementación que el partner puede proveer).

**2. El reclutamiento de partners: encontrar y seleccionar los socios correctos**
El error más común en los programas de partners es reclutar a cualquier partner dispuesto en lugar de seleccionar a los que tienen el perfil correcto. Define el proceso de reclutamiento de partners: el perfil del partner ideal (el tamaño adecuado para que tu producto sea relevante para su negocio, la complementariedad de su oferta con tu producto, la capacidad comercial para llevar tu producto al mercado, el acceso a los clientes que quieres alcanzar), los canales de reclutamiento de partners (las asociaciones del sector donde los potenciales partners participan, los eventos de tecnología, las referencias de tu propia base de clientes que trabajan con partners que podrían revender tu producto), el proceso de evaluación del partner potencial antes de firmar el acuerdo (la visita o llamada con su equipo comercial que revela si entienden tu producto y si hay fit real), y los criterios de selección que rechaza partners que no tienen el perfil aunque estén dispuestos a firmar.

**3. El programa de partners: los elementos que lo hacen atractivo y efectivo**
Un programa de partners bien diseñado hace que los partners quieran vender tu producto de forma activa. Define los elementos del programa de partners: los incentivos económicos que hacen que el partner priorice tu producto frente a los de la competencia (el margen suficiente para que la venta sea rentable para el partner, los aceleradores por volumen que aumentan el margen cuando el partner supera los objetivos, los incentivos por nuevos clientes que son más generosos que los de renovación), el soporte de ventas y marketing que hace que el partner pueda vender sin ser un experto en tu producto (los materiales de venta que el partner puede personalizar con su marca, los demos que el partner puede reproducir, los recursos técnicos para responder preguntas de clientes), y la formación que certifica al equipo de ventas del partner para que sepa posicionar tu producto correctamente.

**4. La activación del canal: pasar de firmar el acuerdo a la primera venta**
La mayoría de los partners que firman un acuerdo nunca llegan a vender activamente. Define el proceso de activación del canal: el plan de los primeros noventa días con el partner nuevo que define los hitos de activación (la formación del equipo, la primera oportunidad trabajada en conjunto, el primer cliente potencial de la pipeline del partner presentado al equipo), el partner manager o channel account manager que dedica tiempo proactivo a los partners de mayor potencial en lugar de esperar a que el partner llame con oportunidades, y la identificación temprana de los partners activos (que generarán el 80% del revenue del canal) vs. los partners pasivos (que firmaron el acuerdo pero no activan) para concentrar los recursos donde mayor retorno producen.

**5. La gestión del conflicto de canal: ventas directas vs. partners**
El conflicto entre el equipo de ventas directas y el canal de partners es uno de los mayores riesgos de los programas de partners. Define la estrategia de gestión del conflicto de canal: las reglas claras de registro de oportunidades que establecen qué cliente o proyecto pertenece al canal y cuál al equipo directo (el deal registration que protege al partner que ha creado una oportunidad de que el equipo directo la cierre por encima de su cabeza), la política de pricing que evita que el equipo directo compita con el canal en precio (el precio de venta al cliente final que el partner no puede superar y el equipo directo no puede socavar), y la cultura interna que trata el revenue del canal como propio y no como competencia al equipo de ventas directas.

**6. La medición del programa de partners: qué funciona y qué necesita mejora**
Un programa de partners sin métricas no puede mejorarse sistemáticamente. Define el sistema de métricas del programa de partners: las métricas de salud del canal (el número de partners activos vs. los reclutados, el revenue generado por el canal como porcentaje del revenue total, el número de nuevos clientes aportados por el canal), las métricas de calidad del canal (el NPS de los partners que mide su satisfacción con el programa, la tasa de retención de partners de un año a otro, el tiempo medio de activación de un partner nuevo desde la firma del acuerdo), y el análisis de los partners más exitosos que identifica qué tienen en común los que generan más negocio para aplicar esos atributos al reclutamiento de futuros partners.

Termina con el plan de construcción o mejora del programa de partners para el contexto descrito, con las tres iniciativas de mayor impacto en la activación del canal y en la generación de revenue en los próximos seis meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir y activar un canal de partners que escale las ventas sin escalar el equipo comercial propio de forma proporcional.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Build vs buy: decidir qué construir y qué comprar',
                'description'       => 'Domina el framework de decisión build vs. buy para equipos de producto: cómo evaluar cuándo tiene sentido construir internamente, cuándo comprar una solución de terceros y cuándo integrar, con los criterios que van más allá del coste inmediato.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager o CTO con experiencia tomando decisiones de build vs. buy en distintos contextos: desde startups donde el tiempo al mercado es la variable más crítica, hasta empresas maduras donde la deuda técnica de años de construir todo internamente es el problema principal. Has aprendido que la decisión correcta entre construir, comprar o integrar raramente es obvia y que los argumentos más convincentes en el momento suelen obviar los costes y los riesgos que se revelan con el tiempo.

Necesito mejorar mi proceso de decisión entre construir internamente o comprar soluciones de terceros. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo de decisión que tienes delante: una capacidad de infraestructura, una feature del producto de cara al usuario, una herramienta interna para el equipo u otro?
2. ¿Cuál es el contexto de la organización: startup en etapa temprana donde la velocidad importa más que la optimización, empresa en crecimiento que está construyendo su stack, o empresa madura que está evaluando reemplazar algo que construyó internamente?
3. ¿Cuáles son los factores que hacen que esta decisión sea difícil actualmente: hay opciones comerciales que cubren el 80% de las necesidades pero no el 20% diferenciador, el equipo de ingeniería prefiere construir por razones técnicas, el presupuesto es el factor limitante u otro?
4. ¿Cuánto tiempo tiene el equipo de ingeniería para construir y mantener la solución si se decide construir internamente?
5. ¿Cuáles son los riesgos que más preocupan: el vendor lock-in si se compra, la complejidad técnica si se construye, el tiempo de desarrollo si se construye desde cero u otro?

Con esas respuestas, desarrolla el framework de decisión build vs. buy:

**1. Los criterios de la decisión: más allá del coste de construcción**
La decisión de build vs. buy suele reducirse al coste de desarrollo vs. el precio de la suscripción, pero esa comparación ignora la mayoría de los factores que importan a largo plazo. Define el framework completo de evaluación: la diferenciación competitiva (si la capacidad que se va a construir o comprar es un diferenciador competitivo que los usuarios valoran de forma única, construir puede tener sentido; si es una capacidad commodity que muchos proveedores ofrecen bien, comprar es casi siempre la opción correcta), el coste total de propiedad (el build incluye no solo el coste de desarrollo inicial sino el mantenimiento continuo, las actualizaciones de seguridad, la formación del equipo y el coste de oportunidad del tiempo de ingeniería que podría dedicarse al producto diferenciador), el time-to-market (la solución comercial que se puede implementar en semanas vs. la solución interna que tardará meses en estar lista para producción, con el coste de oportunidad de esa diferencia), y el riesgo de ejecución (la probabilidad de que el equipo construya la solución con la calidad y en el tiempo estimado, que raramente es del 100%).

**2. Cuándo construir tiene sentido: los casos en que el build gana**
Hay situaciones donde construir internamente es claramente la mejor decisión. Define los criterios que justifican el build: la diferenciación competitiva que no puede reproducirse con ninguna solución comercial (cuando la forma en que resuelves el problema es parte del valor que el usuario percibe de tu producto, y no existe una solución comercial que permita esa diferenciación), el control de datos sensibles que no pueden compartirse con terceros por razones de seguridad, privacidad o regulatorias, la integración profunda con sistemas propietarios que las soluciones comerciales no pueden conseguir sin un esfuerzo de integración tan grande que equivale a construir desde cero, y la acumulación de conocimiento propietario en el dominio que se convierte en una ventaja competitiva duradera.

**3. Cuándo comprar tiene sentido: los casos en que el buy gana**
La mayoría de las capacidades de un producto digital no son diferenciadoras y comprarlas libera al equipo de ingeniería para enfocarse en lo que sí lo es. Define los criterios que justifican el buy: las capacidades commodity donde el mercado ha convergido en soluciones maduras y bien mantenidas (la autenticación, el procesamiento de pagos, el email de notificaciones transaccionales, la búsqueda, el almacenamiento de archivos), las capacidades donde el equipo interno no tiene la expertise especializada que la solución comercial ha acumulado durante años (la detección del fraude, el procesamiento de lenguaje natural, la geolocalización), y las situaciones donde el time-to-market es la variable más crítica y la solución comercial permite llegar al mercado meses antes de lo que permitiría la construcción interna.

**4. La opción integrate: cuando nada es suficiente por sí solo**
Hay una tercera opción que la dicotomía build vs. buy obscurece: integrar múltiples soluciones comerciales con una capa de orquestación propia. Define cuándo el modelo de integración es la mejor opción: cuando existen soluciones comerciales especializadas y excelentes en capacidades específicas pero ninguna cubre el caso de uso completo (la integración de las mejores herramientas de cada categoría con una capa de lógica de negocio propia que las orquesta), las consideraciones de esta opción que deben tenerse en cuenta (la complejidad de mantener múltiples integraciones, el riesgo de que un proveedor cambie su API o su modelo de precios, la experiencia del usuario cuando las soluciones integradas no tienen coherencia), y cuándo la integración es una solución temporal mientras se evalúa si una capacidad merece ser construida internamente.

**5. El proceso de evaluación de las opciones comerciales: cómo seleccionar el proveedor correcto**
Cuando la decisión es comprar, la selección del proveedor correcto es tan importante como la decisión de comprar. Define el proceso de evaluación de proveedores en el contexto del build vs. buy: el RFI o el proceso de research que identifica las opciones disponibles en el mercado (incluyendo las que no aparecen en los primeros resultados de búsqueda), el POC o la prueba de concepto que evalúa cómo funciona la solución con los datos y los casos de uso reales de la empresa (no la demo del proveedor), la evaluación del roadmap del proveedor que valida si sus planes de desarrollo futuros están alineados con la dirección del producto propio, y los criterios de exit que definen en qué condiciones se renegociaría la decisión de comprar (el proveedor que cambia su modelo de precios, el que no cumple sus compromisos de producto o el que es adquirido por un competidor).

**6. La gobernanza de la decisión: quién decide y cómo se revisa en el tiempo**
La decisión de build vs. buy en el momento de tomarla raramente es la correcta para siempre. Define el proceso de gobernanza de estas decisiones: el comité o el proceso de decisión que incluye las perspectivas de ingeniería (la factibilidad y el coste técnico), producto (el impacto en el usuario y la diferenciación), negocio (el coste total y el ROI) y seguridad (los riesgos de la solución externa), la documentación de la decisión que registra los supuestos bajo los que se tomó y los criterios que justificarían revisarla, la revisión periódica de las decisiones de build vs. buy más importantes que evalúa si los supuestos originales siguen siendo válidos (el proveedor que era la mejor opción hace dos años puede no serlo hoy si han surgido alternativas mejores o si el equipo de ingeniería ha ganado la expertise para construirlo internamente).

Termina con el análisis de la decisión de build vs. buy específica del contexto descrito, con la recomendación razonada y los tres factores de mayor peso en la decisión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Tomar mejores decisiones sobre qué capacidades construir internamente y cuáles comprar o integrar de terceros.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de proveedores de RRHH: headhunters, plataformas y consultoras',
                'description'       => 'Gestiona el ecosistema de proveedores de RRHH para maximizar el retorno: cómo seleccionar y trabajar con headhunters, plataformas de reclutamiento, consultoras de cultura y sistemas de gestión del talento.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de RRHH o Chief People Officer con experiencia gestionando el ecosistema de proveedores externos de recursos humanos en organizaciones donde el equipo interno de RRHH necesita complementarse con expertise externa para cubrir capacidades que no tiene o escalar en momentos de alto crecimiento: los headhunters para los perfiles directivos y especializados, las plataformas de reclutamiento para el volumen, las consultoras de cultura y liderazgo para los proyectos de transformación, y los sistemas de gestión del talento que procesan los datos del ciclo de vida del empleado.

Necesito mejorar la gestión de mis proveedores de RRHH. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de RRHH interno y qué capacidades gestiona con proveedores externos actualmente?
2. ¿Cuáles son los tipos de proveedores de RRHH que más usas: headhunters, plataformas de empleo, consultoras de formación, empresas de outplacement, proveedores de beneficios, sistemas de HRIS u otro?
3. ¿Cuáles son los principales problemas con la gestión actual de los proveedores de RRHH: coste elevado sin resultados proporcionales, calidad de los candidatos aportados por los headhunters, falta de especialización de las consultoras, problemas de coordinación u otro?
4. ¿Cuál es el presupuesto aproximado en proveedores de RRHH y cómo se distribuye entre las categorías?
5. ¿Cuáles son los proyectos de RRHH más importantes del próximo año que requerirán soporte externo?

Con esas respuestas, desarrolla la guía de gestión de proveedores de RRHH:

**1. El ecosistema de proveedores de RRHH: mapa y priorización**
Antes de optimizar la gestión de proveedores, necesitas una visión clara de qué tienes y qué necesitas. Define el proceso de mapeo del ecosistema de proveedores de RRHH: el inventario de todos los proveedores activos con el coste, la función que cubren y el nivel de satisfacción actual, la categorización por criticidad para los objetivos de RRHH del año (los proveedores que si fallan afectan a los planes de crecimiento o a la cultura de la empresa vs. los que son reemplazables fácilmente), la identificación de las capacidades que el equipo interno de RRHH necesita desarrollar para reducir la dependencia de ciertos proveedores externos, y la identificación de los gaps donde se necesita soporte externo que actualmente no se tiene.

**2. La gestión de los headhunters: obtener el talento que no consigues por otros canales**
Los headhunters o executive search firms representan un coste significativo y producen resultados muy variables. Define el proceso de gestión de headhunters: la selección del headhunter adecuado para cada búsqueda (el generalista que conoce el mercado de directivos de tu sector vs. el especialista en la función específica que sabes que es difícil de encontrar), el briefing de la búsqueda que va más allá del job description e incluye la cultura de la empresa, el estilo de liderazgo requerido y los criterios de éxito en los primeros noventa días (que el headhunter entiende bien el perfil real que buscas, no solo las credenciales en papel), el seguimiento del proceso de búsqueda con hitos claros (el número de candidatos presentados en qué plazo, el feedback sobre el mercado de disponibilidad del perfil), y la negociación de los honorarios con las garantías de reemplazo que protejan la inversión si el candidato no supera el periodo de prueba.

**3. Las plataformas de reclutamiento: optimizar el coste y la calidad del sourcing**
Las plataformas de reclutamiento como LinkedIn, Infojobs o Indeed representan una inversión significativa con rendimientos muy variables según cómo se gestionan. Define la estrategia de gestión de plataformas de reclutamiento: la evaluación del ROI de cada plataforma por tipo de perfil (la plataforma que funciona mejor para perfiles técnicos no es necesariamente la mejor para perfiles comerciales o de operaciones), la optimización de los anuncios de empleo en cada plataforma con las best practices de copy y de targeting que maximizan la tasa de candidaturas cualificadas, la gestión del presupuesto de publicidad de empleo que se asigna según el coste por contratación histórico de cada plataforma y perfil, y la integración de las plataformas con el ATS interno para que el flujo de candidatos sea eficiente y trazable.

**4. Las consultoras de formación y desarrollo: seleccionar y medir el impacto**
Las consultoras de formación y desarrollo son el proveedor de RRHH con mayor varianza entre el precio y el impacto real. Define el proceso de gestión de las consultoras de formación: la definición del resultado de negocio que la formación debe producir antes de buscar el proveedor (no "queremos un programa de liderazgo" sino "queremos que nuestros managers tengan las conversaciones de feedback que actualmente no tienen"), la selección del proveedor basada en la evidencia de impacto medido en proyectos similares (no en el folleto comercial ni en el número de horas de formación), el diseño del programa con el proveedor que integra la formación con la práctica real en el trabajo en lugar de la formación como evento aislado, y la medición del impacto del programa en los indicadores de comportamiento o de negocio que justificaron la inversión.

**5. Los sistemas de HRIS y HCM: la decisión de tecnología de RRHH**
El sistema de información de RRHH es el proveedor tecnológico más estratégico del departamento y uno de los más difíciles de cambiar una vez implementado. Define el proceso de selección y gestión de sistemas de RRHH: los requisitos funcionales que el sistema debe cubrir según las necesidades actuales y las previstas en los próximos tres años (la planificación de la fuerza laboral, la gestión del ciclo de vida del empleado, el performance management, el people analytics, la integración con payroll), la evaluación de las opciones del mercado con una RFP estructurada que va más allá de la demo y evalúa la capacidad de integración con los sistemas existentes, la experiencia del usuario para los empleados y los managers que son quienes lo usarán en el día a día, y la gestión de la relación con el proveedor una vez implementado el sistema (las actualizaciones, las nuevas funcionalidades y los problemas de soporte).

**6. La medición del ROI de los proveedores de RRHH: justificar el gasto**
El presupuesto de RRHH dedicado a proveedores externos debe justificarse con el mismo rigor que cualquier otra inversión de negocio. Define el sistema de medición del ROI de los proveedores de RRHH: el coste por contratación segmentado por canal y por proveedor que identifica cuál tiene mejor rendimiento para cada tipo de búsqueda, la calidad de las contrataciones aportadas por cada headhunter medida por la retención y el rendimiento en los primeros doce meses, el impacto de los programas de formación en las métricas de negocio que se comprometieron en el diseño del programa, y la comparación del coste del proveedor externo con el coste de desarrollo de la capacidad internamente para decidir cuándo tiene sentido hacer la inversión en equipo propio.

Termina con el plan de optimización del ecosistema de proveedores de RRHH para el contexto descrito, con las tres acciones de mayor impacto en la eficiencia del gasto y en la calidad de los resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar el ecosistema de proveedores de RRHH para obtener mayor ROI del gasto en headhunters, plataformas y consultoras.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de proveedores financieros: bancos, auditores y asesores',
                'description'       => 'Gestiona el ecosistema de proveedores financieros externos con eficiencia: cómo seleccionar y negociar con bancos, auditorías, asesores fiscales y consultoras financieras para maximizar el valor y minimizar los costes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO o director financiero con experiencia gestionando el ecosistema de proveedores financieros externos en empresas donde las relaciones con los bancos, las auditorías, los asesores fiscales y las consultoras financieras tienen un impacto directo en el coste de capital, el cumplimiento regulatorio y la calidad de las decisiones estratégicas. Has negociado condiciones bancarias en momentos de expansión y de dificultad, has coordinado procesos de auditoría que van más allá del mero cumplimiento, y has seleccionado asesores financieros para transacciones de M&A y rondas de financiación.

Necesito mejorar la gestión de mis proveedores financieros externos. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo y el tamaño de la empresa, y cuáles son los proveedores financieros externos más críticos actualmente: banco principal, auditor externo, asesor fiscal, consultora financiera u otro?
2. ¿Cuáles son los principales retos con la gestión actual de proveedores financieros: coste elevado, calidad del servicio insuficiente, falta de proactividad, problemas de coordinación u otro?
3. ¿Hay operaciones o proyectos financieros específicos previstos en los próximos doce meses que requieran soporte externo: una ronda de financiación, una adquisición, una refinanciación, una internacionalización u otro?
4. ¿Cuál es el volumen de facturación aproximado y la complejidad regulatoria o sectorial que afecta a las necesidades de asesoramiento?
5. ¿Hay algún proveedor financiero específico con el que la relación no está funcionando bien y que debería revisarse?

Con esas respuestas, desarrolla la guía de gestión de proveedores financieros:

**1. La gestión bancaria: más allá de la cuenta corriente**
La relación con el banco o los bancos de la empresa es una de las más estratégicas del departamento financiero y raramente se gestiona con la proactividad que merece. Define la estrategia de gestión bancaria: la estructura de bancos adecuada para el tamaño y la actividad de la empresa (el banco principal para la operativa diaria y la financiación, los bancos secundarios para servicios específicos o para diversificar el riesgo de concentración bancaria), la negociación de las condiciones bancarias con los argumentos que funcionan en la práctica (la solidez del balance y la generación de caja, el volumen de operaciones que genera la empresa al banco, la oferta de servicios adicionales como la gestión de cobros o el factoring, y la amenaza creíble de trasladar parte de las operaciones a un banco competidor), la gestión proactiva de la relación con el director de empresas del banco que anticipa las necesidades de financiación antes de que sean urgentes, y el proceso de revisión periódica de las condiciones bancarias para verificar que siguen siendo competitivas.

**2. La auditoría externa: de la obligación regulatoria al valor estratégico**
La auditoría externa es uno de los mayores costes fijos del departamento financiero y raramente produce el valor que podría dar si se gestionara de forma estratégica. Define la estrategia de gestión de la auditoría: la selección del auditor adecuado para el tamaño y la complejidad de la empresa (la firma de las Big 4 que da credibilidad pero cobra en consecuencia vs. la firma de segunda línea especializada en tu sector que puede dar el mismo nivel de servicio a menor coste), el proceso de onboarding del equipo de auditoría que minimiza el tiempo dedicado por el equipo financiero interno a preparar la información que el auditor necesita, la negociación del fee de auditoría que tiene más margen del que parece especialmente en las renovaciones (con el argumento de la eficiencia del proceso después de los primeros años de trabajo conjunto), y la extracción de valor de las observaciones de la auditoría más allá del informe de auditoría (los management letters que identifican las debilidades del control interno son una fuente de mejoras del proceso financiero).

**3. El asesoramiento fiscal: planificación estratégica vs. cumplimiento reactivo**
El asesor fiscal que solo informa sobre las obligaciones fiscales de los últimos meses está prestando un servicio de cumplimiento, no de planificación estratégica. Define la gestión del asesor fiscal estratégico: la diferencia entre el servicio de cumplimiento fiscal (la presentación de los impuestos, la respuesta a los requerimientos de la Administración) que puede realizarse con un proveedor de menor coste, y el asesoramiento de planificación fiscal estratégica que requiere un asesor que conoce profundamente la empresa y su situación y que proactivamente identifica las oportunidades de eficiencia fiscal, la estructura societaria que optimiza la carga fiscal para el modelo de negocio actual y el previsto en los próximos años, y el proceso de revisión periódica de la estructura fiscal que se adapta a los cambios regulatorios y a la evolución de la empresa.

**4. Los asesores para transacciones: M&A, rondas de financiación y refinanciaciones**
Los asesores financieros para transacciones son los proveedores financieros más caros y los que mayor impacto pueden tener en el resultado de la empresa. Define el proceso de selección y gestión de los asesores de transacciones: la selección del asesor adecuado para el tipo de transacción (el banco de inversión para las operaciones de M&A de mayor tamaño, la boutique financiera especializada para las transacciones de tamaño medio en sectores específicos, el asesor de deuda para las refinanciaciones), el proceso de pitch de mandato donde varios asesores compiten por el proyecto (que revela las diferencias en el enfoque, la estrategia y el fee), la estructura de honorarios que alinea los incentivos del asesor con los del cliente (el success fee que depende del resultado de la transacción, vs. el fee fijo que se paga independientemente del resultado), y la gestión activa del proceso de transacción que mantiene la dirección del proceso en la empresa aunque el asesor tenga el expertise técnico.

**5. Las consultoras financieras para proyectos especiales**
Las consultoras financieras se contratan para proyectos de transformación, reestructuración o mejora de procesos donde el equipo interno no tiene la capacidad o el tiempo. Define la gestión eficiente de las consultoras financieras: la definición del scope del proyecto antes de contratar que establece los entregables, los plazos y los criterios de éxito de forma que eviten el scope creep que multiplica los costes, el proceso de selección que evalúa la relevancia de la experiencia del equipo propuesto (no las credenciales de la firma sino la experiencia específica del equipo que va a trabajar en el proyecto), la gestión del equipo de la consultora durante el proyecto que asegura la transferencia de conocimiento al equipo interno en lugar de crear una dependencia permanente del consultor, y el proceso de medición del impacto del proyecto que valida si el ROI justificó la inversión.

**6. La gobernanza del ecosistema de proveedores financieros**
El departamento financiero necesita una visión integrada de todos sus proveedores externos para optimizar el conjunto. Define el modelo de gobernanza del ecosistema de proveedores financieros: el panel de proveedores financieros con la evaluación periódica del rendimiento y el coste de cada uno, el proceso de revisión del mercado para las categorías de mayor coste que verifica que los proveedores actuales siguen siendo la mejor opción (la auditoría se licita al mercado cada cinco o siete años, los servicios bancarios se revisan anualmente), y la gestión del conflicto de intereses de los proveedores financieros que tienen relaciones con múltiples partes de la empresa o que prestan servicios que podrían crear independencia comprometida.

Termina con el plan de optimización del ecosistema de proveedores financieros para el contexto descrito, con las tres acciones de mayor impacto en la eficiencia del gasto y en la calidad del soporte financiero externo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestionar el ecosistema de proveedores financieros externos para maximizar el valor y minimizar los costes de bancos, auditores y asesores.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de despachos externos y proveedores jurídicos',
                'description'       => 'Gestiona el ecosistema de despachos externos y proveedores jurídicos de forma estratégica: cómo seleccionar el despacho adecuado para cada tipo de asunto, negociar honorarios, medir el rendimiento y construir relaciones que producen el mejor trabajo al menor coste.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o director jurídico con experiencia gestionando el gasto en despachos externos en organizaciones donde el presupuesto de asesoramiento jurídico externo es significativo y donde la diferencia entre una buena y una mala gestión de los proveedores jurídicos puede representar millones de euros en honorarios y en calidad de los resultados jurídicos. Has implementado paneles de proveedores, negociado AFAs (Alternative Fee Arrangements) con los despachos, y construido relaciones de partnership con los despachos más estratégicos.

Necesito mejorar la gestión de mis despachos externos y proveedores jurídicos. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del departamento jurídico interno y cuánto se gasta aproximadamente en despachos externos al año?
2. ¿Cuáles son los tipos de trabajo jurídico que se externaliza principalmente: litigios, M&A, contratación compleja, propiedad intelectual, cumplimiento regulatorio, laboral u otro?
3. ¿Cuántos despachos externos gestiona actualmente el departamento y cuáles son los más significativos en términos de gasto?
4. ¿Cuáles son los principales problemas con la gestión actual de los despachos: facturas que superan el presupuesto, calidad insuficiente, falta de previsibilidad del coste, despachos que no cumplen los plazos u otro?
5. ¿Hay ya un panel de despachos externo o cada encargo se hace ad hoc sin proceso sistemático?

Con esas respuestas, desarrolla la guía de gestión de despachos externos:

**1. El panel de despachos: selección estratégica en lugar de relaciones históricas**
El modelo de gestión de despachos externos que se basa en relaciones históricas del CEO o del GC anterior suele ser más caro y menos eficiente que el panel de despachos seleccionado por criterios objetivos. Define el proceso de construcción o revisión del panel de despachos: la segmentación del trabajo jurídico por tipo y complejidad que determina qué categorías de despacho necesita la empresa (el global law firm para las transacciones internacionales complejas, el despacho especializado por áreas de práctica para el trabajo recurrente especializado, el despacho de tamaño medio con tarifas más competitivas para el contencioso de menor complejidad, y el proveedor alternativo de servicios jurídicos o Legal Process Outsourcing para el trabajo de alto volumen y menor complejidad), el proceso de pitch o RFP que permite a los despachos competir por el trabajo con propuestas que incluyen el equipo, la metodología y los honorarios, y los criterios de selección que van más allá de las credenciales del despacho para incluir la relevancia de la experiencia específica del equipo propuesto.

**2. La negociación de honorarios: modelos alternativos al time & material**
El modelo de tarifa por hora es el más beneficioso para el despacho y el más desfavorable para el cliente en términos de alineación de incentivos. Define las alternativas al modelo de tarifa por hora: el precio fijo por asunto (el agreed fixed fee que da previsibilidad al cliente y eficiencia al despacho), el presupuesto por etapas (el stage-based budgeting que fija el precio por cada fase del asunto con posibilidad de ajuste si el alcance cambia), el modelo de success fee o cuota litis para los litigios donde el resultado es binario y medible (el despacho cobra menos si pierde y más si gana), y el descuento por volumen o preferred rate agreement con los despachos del panel que ofrece tarifas reducidas a cambio de la garantía de un volumen mínimo de trabajo. Para cada modelo, explica cuándo es más adecuado y cómo estructurar la conversación de negociación.

**3. El briefing jurídico y la gestión del scope: evitar los presupuestos que se disparan**
El presupuesto de un asunto jurídico que supera el 50% del estimado inicial es una señal de que el briefing o la gestión del scope han fallado. Define el proceso de briefing y gestión del scope de los asuntos jurídicos externos: el briefing que da al despacho el contexto suficiente para estimar con precisión el trabajo (los antecedentes del asunto, los documentos relevantes, los objetivos del cliente, el presupuesto disponible y las restricciones de tiempo), el scope agreement que define con precisión qué está incluido y qué está excluido en el precio acordado, el proceso de gestión de los cambios de scope que requiere un acuerdo previo antes de que el despacho realice el trabajo adicional, y las alertas de presupuesto que el despacho debe comunicar proactivamente cuando prevé superar el 75% del presupuesto acordado.

**4. La revisión de facturas: el control del gasto externo**
La revisión sistemática de las facturas de los despachos externos es una de las acciones de mayor ROI en la gestión de proveedores jurídicos. Define el proceso de revisión de facturas: las herramientas de e-billing que automatizan la revisión de las facturas con las billing guidelines de la empresa (los códigos de actividad que son inadmisibles, los niveles de seniority que son inadecuados para el tipo de trabajo, los gastos que requieren autorización previa), la revisión manual de las partidas que generan más dudas (las horas de reuniones internas del despacho, los gastos de investigación que podrían estar incluidos en la tarifa, el trabajo de múltiples abogados en tareas que podría hacer uno), y el proceso de disputa de partidas que mantiene la relación profesional con el despacho mientras protege el presupuesto del departamento jurídico.

**5. La medición del rendimiento de los despachos: más allá de la percepción subjetiva**
La evaluación del rendimiento de los despachos que se basa solo en la impresión subjetiva del GC pierde la objetividad que permitiría tomar mejores decisiones de asignación. Define el sistema de métricas de rendimiento de los despachos: las métricas cuantitativas que miden el rendimiento objetivo (el coste por tipo de asunto vs. el benchmark del mercado y vs. otros despachos del panel, el cumplimiento de los presupuestos acordados, el cumplimiento de los plazos), las métricas de resultado para los asuntos contenciosos (la tasa de éxito en asuntos similares, el resultado de los procedimientos vs. la recomendación de estrategia inicial), y la evaluación cualitativa estructurada que evalúa la calidad del asesoramiento, la capacidad de respuesta y la proactividad del equipo del despacho.

**6. Las relaciones estratégicas con los despachos de referencia**
Los mejores despachos también seleccionan sus clientes, y la empresa que es cliente de elección recibe mejor talento, mayor proactividad y más valor. Define la estrategia de relación estratégica con los despachos más importantes: los comportamientos del cliente que hacen que el despacho priorice su trabajo (el pago puntual, el briefing de calidad, la toma de decisiones ágil, la retroalimentación sobre el trabajo realizado), los programas de partnership que formalizan la relación estratégica con los despachos más importantes (las sesiones de formación, las actualizaciones de mercado, el acceso al talent pipeline del despacho), y el proceso de gestión de los cambios en el equipo del despacho que garantiza la continuidad del conocimiento de la empresa cuando rotan los abogados que la gestionan.

Termina con el plan de mejora de la gestión de despachos externos para el contexto descrito, con las tres acciones de mayor impacto en la reducción del coste y en la mejora de la calidad del servicio jurídico externo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestionar el ecosistema de despachos externos para reducir el coste del asesoramiento jurídico y mejorar la calidad de los resultados.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Tech stack de CS: evaluar y gestionar las herramientas del equipo',
                'description'       => 'Diseña y gestiona el stack de herramientas del equipo de Customer Success: cómo evaluar, seleccionar e integrar las plataformas de CS, los sistemas de ticketing, las herramientas de comunicación y los sistemas de analytics que hacen al equipo más efectivo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success o Head of CS Operations con experiencia evaluando e implementando stacks de herramientas para equipos de Customer Success en empresas SaaS de distintos tamaños. Has visto los extremos: el equipo que gestiona todo con hojas de cálculo y email hasta que el caos hace imposible escalar, y el equipo que compra todas las herramientas del mercado sin integrarlas y acaba con un ecosystem de herramientas que nadie usa bien. Has encontrado el punto medio donde las herramientas correctas, bien integradas y adoptadas, multiplican la capacidad del equipo.

Necesito evaluar o mejorar el stack de herramientas de mi equipo de Customer Success. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de CS y el modelo de servicio: high-touch, tech-touch o escalado?
2. ¿Cuál es el stack de herramientas actual y cuáles son los mayores problemas con las herramientas existentes?
3. ¿Cuáles son las principales ineficiencias operativas que las herramientas deberían resolver: visibilidad del estado del cliente, gestión de la carga de trabajo del equipo, automatización de comunicaciones, análisis de riesgo de churn u otro?
4. ¿Cuál es el presupuesto disponible para el tech stack de CS y qué nivel de integración técnica puede dar soporte el equipo de ingeniería?
5. ¿Cuál es el número de clientes que gestiona el equipo y el nivel de complejidad de las relaciones?

Con esas respuestas, desarrolla la guía de tech stack de CS:

**1. Las categorías de herramientas del stack de CS: el mapa del ecosistema**
El stack de CS moderno tiene categorías de herramientas con funciones distintas que deben complementarse. Define las categorías principales del tech stack de CS: la Customer Success Platform (CSP) que centraliza la visibilidad de la salud del cliente, gestiona las tareas del CSM y automatiza los playbooks (Gainsight, Totango, ChurnZero, ClientSuccess), el CRM que mantiene la información de la relación con el cliente y el historial de interacciones (Salesforce, HubSpot), la plataforma de ticketing y soporte que gestiona las solicitudes de los clientes y mide los SLAs de resolución (Zendesk, Intercom, Freshdesk), la herramienta de comunicación con el cliente que gestiona los emails automatizados y las secuencias de onboarding (que puede ser parte del CRM o una herramienta especializada), y la plataforma de product analytics que alimenta el health scoring con datos de uso real del producto (Amplitude, Mixpanel, o la integración nativa del producto). Para cada categoría, explica qué problema resuelve y cuándo es necesaria vs. cuándo puede cubrirse con herramientas existentes.

**2. La Customer Success Platform: cuándo justifica la inversión**
La Customer Success Platform es la herramienta más específica del stack de CS y la decisión de adoptarla o no es la más importante del tech stack. Define el proceso de decisión sobre la CS Platform: las señales que indican que el equipo está listo para una CS Platform (el equipo tiene más de cinco o diez CSMs y la gestión del portfolio de cuentas con el CRM y las hojas de cálculo ya no es sostenible, hay datos de uso del producto disponibles para alimentar el health scoring, el equipo tiene playbooks de CS que se pueden automatizar), el proceso de evaluación de las plataformas del mercado que va más allá de la demo (el POC con datos reales de clientes que valida si la plataforma puede construir el health score que el equipo necesita, la evaluación de la integración con el CRM y la plataforma de producto), y las alternativas a la CS Platform cuando el equipo aún no la necesita (la combinación de CRM, hojas de cálculo y automation de email que puede cubrir las necesidades de un equipo pequeño de forma más económica).

**3. La integración del stack: la suma de las partes es mayor que el todo**
Un stack de herramientas no integradas es más perjudicial que no tener herramientas porque obliga al equipo a mantener los datos actualizados en múltiples sistemas. Define la estrategia de integración del tech stack de CS: los flujos de datos que deben existir entre las herramientas del stack (el CRM que actualiza la CS Platform con los datos de la relación comercial, la plataforma de producto que alimenta la CS Platform con los datos de uso, el sistema de ticketing que registra en la CS Platform las interacciones de soporte que afectan al health score), la herramienta de integración que conecta los sistemas que no tienen conectores nativos (Zapier para equipos pequeños, una integración custom para empresas con más recursos técnicos), y el principio de que los datos deben fluir de forma automática entre sistemas para que el CSM no tenga que actualizar manualmente la misma información en múltiples lugares.

**4. La adopción del tech stack: cuando las herramientas no se usan**
Las mejores herramientas de CS son inútiles si el equipo no las usa de forma consistente. Define el proceso de adopción del tech stack de CS: el onboarding del equipo en las nuevas herramientas que combina la formación inicial con la práctica inmediata en casos de uso reales (la formación teórica sin práctica inmediata produce equipos que saben usar la herramienta en teoría pero vuelven a las hojas de cálculo en la práctica), los workflows en las herramientas que están diseñados para el flujo de trabajo natural del CSM en lugar de requerir que el CSM cambie su forma de trabajar para adaptarse a la herramienta, el proceso de feedback del equipo sobre las herramientas que permite identificar los friction points que están reduciendo la adopción, y las métricas de adopción que miden si el equipo usa las herramientas de forma consistente.

**5. La evaluación de proveedores de herramientas de CS: más allá del feature set**
Las demos de las herramientas de CS siempre impresionan; la realidad del uso diario es otra historia. Define el proceso de evaluación de proveedores de herramientas de CS: el POC estructurado que prueba los casos de uso más críticos para el equipo (no los que el proveedor propone en la demo sino los que el equipo usa en el día a día), la evaluación de la calidad del soporte técnico del proveedor durante el proceso de venta (el proveedor que responde lento o que no puede responder las preguntas técnicas en el proceso de venta va a ser un problema cuando haya un incidente en producción), la revisión de las referencias de clientes similares en tamaño y modelo de CS que usan la herramienta, y la evaluación del roadmap del proveedor que verifica que las features que necesitarás en el futuro están en el roadmap.

**6. La optimización continua del stack: cuándo cambiar una herramienta**
Las necesidades del equipo de CS evolucionan con el crecimiento de la empresa y el stack de herramientas debe evolucionar con ellas. Define el proceso de revisión y optimización del tech stack de CS: la revisión periódica del stack que evalúa si cada herramienta sigue siendo la mejor opción dado cómo ha evolucionado el mercado y las necesidades del equipo, las señales que indican que es momento de reemplazar una herramienta (la herramienta que el equipo evita usando workarounds, los límites técnicos que están frenando el crecimiento del equipo, el coste que ya no se justifica dado el valor que aporta), y el proceso de migración de herramientas que minimiza la disrupción del equipo durante la transición.

Termina con la evaluación del stack de herramientas de CS actual descrito y las recomendaciones priorizadas de mejora, con el plan de implementación de los cambios más urgentes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Evaluar, seleccionar e integrar las herramientas del stack de Customer Success para aumentar la productividad y la efectividad del equipo.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Red de colaboradores del freelance: subcontratar con criterio',
                'description'       => 'Construye y gestiona tu red de colaboradores y subcontratistas como freelance: cómo encontrar, seleccionar, briefar y trabajar con otros profesionales para escalar tu capacidad, cubrir tus gaps y ofrecer proyectos más grandes sin sacrificar la calidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior con experiencia construyendo una red de colaboradores que le permite tomar proyectos más grandes de los que podría ejecutar solo, cubrir las capacidades que no tiene de forma excelente, y gestionar picos de carga sin comprometer la calidad ni el plazo. Has aprendido que la diferencia entre el freelance que trabaja solo con un techo de ingresos y el que construye una micro-agencia o un colectivo de talento está en la capacidad de gestionar el trabajo de otros tan bien como el propio.

Necesito construir o mejorar mi red de colaboradores y mi capacidad de subcontratar. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad y qué tipo de proyectos haces actualmente?
2. ¿Cuáles son las principales razones por las que necesitas colaboradores: capacidades que no tienes, volumen que supera tu capacidad individual, o proyectos que requieren un equipo multidisciplinar?
3. ¿Has trabajado ya con subcontratistas o colaboradores y, si es así, cuáles han sido los principales problemas?
4. ¿Cómo gestionas actualmente la relación con los clientes cuando trabajas con colaboradores: el cliente sabe que hay otras personas en el proyecto o la relación es siempre contigo?
5. ¿Cuál es el modelo de negocio que quieres construir: una micro-agencia con colaboradores regulares, un colectivo de freelancers con marca compartida, o simplemente aumentar tu capacidad puntualmente con colaboradores ocasionales?

Con esas respuestas, desarrolla la guía de gestión de colaboradores del freelance:

**1. La estrategia de colaboración: qué externalizar y qué hacer siempre tú**
La decisión de qué subcontratar es tan importante como la de a quién. Define la estrategia de subcontratación del freelance: la diferenciación entre las capacidades core que son el núcleo de tu propuesta de valor y que siempre debes hacer tú (lo que hace que el cliente te elija a ti específicamente), las capacidades complementarias que el proyecto necesita pero que no son tu especialidad (el copywriting si eres diseñador, el desarrollo si eres consultor de estrategia, la fotografía si eres diseñador gráfico), y las tareas de producción que son el trabajo de ejecución después de las decisiones creativas o estratégicas y que pueden delegarse a colaboradores de menor coste (la maquetación, la edición de vídeo, la búsqueda de información). Esta claridad te permite construir la red de colaboradores correcta para tu modelo de negocio.

**2. La construcción de la red: encontrar colaboradores de confianza antes de necesitarlos**
La peor forma de encontrar un colaborador es cuando necesitas uno para un proyecto que ya tiene fecha de entrega. Define el proceso de construcción proactiva de la red de colaboradores: las comunidades profesionales donde conocer a otros freelancers con las capacidades complementarias a las tuyas (los Slack de profesionales, las asociaciones del sector, los eventos y meetups, las plataformas como Toptal o Malt donde puedes conectar con talento verificado), el proceso de calificación de potenciales colaboradores antes de que los necesites (la conversación inicial que evalúa su especialización, su forma de trabajar y su disponibilidad típica, el proyecto pequeño de prueba cuando surge la oportunidad para validar la calidad antes de comprometerte en un proyecto mayor), y el mantenimiento de la red de colaboradores que no desaparece cuando no tienes proyectos para ellos (el check-in periódico, el intercambio de oportunidades y referencias).

**3. El briefing a colaboradores: transferir el contexto sin perder calidad**
La calidad del trabajo de un colaborador es proporcional a la calidad del briefing que le das. Define el proceso de briefing a colaboradores del freelance: la diferencia entre el briefing que le das al colaborador y el briefing que te ha dado el cliente (necesitas añadir el contexto que el colaborador necesita sobre tu forma de trabajar, el estilo esperado y los estándares de calidad que debes mantener), la documentación que acompaña al briefing (los activos de marca, los ejemplos de referencia, los trabajos anteriores aprobados que calibran el estándar), la disponibilidad para responder preguntas durante la ejecución que evita que el colaborador complete el trabajo en la dirección equivocada, y el proceso de revisión del trabajo del colaborador que garantiza que cumple los estándares antes de entregarlo al cliente.

**4. La relación económica con los colaboradores: precios, contratos y pagos**
La relación económica mal gestionada es la principal fuente de problemas en las colaboraciones freelance. Define el modelo económico de las colaboraciones: la fijación del precio del trabajo del colaborador que garantiza tu margen y que es justo para el colaborador (el margen de coordinación y de responsabilidad final que es legítimo cobrar sobre el trabajo subcontratado, y la diferencia entre el markup razonable y la explotación), el acuerdo de confidencialidad con el colaborador que protege la información del cliente que necesitas compartir para que el trabajo sea posible, el contrato o el acuerdo de colaboración que establece los entregables, los plazos, el precio y las condiciones de pago, y el proceso de pago que es puntual y en las condiciones acordadas porque la reputación de pagador fiable atrae a los mejores colaboradores.

**5. La gestión de la calidad y los plazos: cuando el colaborador es parte de tu reputación**
Cuando subcontratas parte de un proyecto, la calidad del trabajo del colaborador es tu responsabilidad ante el cliente. Define el sistema de control de calidad y gestión de plazos con colaboradores: el proceso de revisión en etapas que detecta los problemas de dirección temprano (el check-in al 30% del trabajo que verifica que el colaborador va en la dirección correcta antes de que termine el trabajo completo), el buffer de tiempo en el planning que absorbe los retrasos del colaborador sin afectar a la fecha de entrega comprometida con el cliente, el proceso de gestión cuando el trabajo del colaborador no está a la altura del estándar (la conversación directa con el plan de corrección, y la decisión de cuándo es más eficiente hacerlo tú mismo), y el proceso de cierre del proyecto con el colaborador que incluye el feedback sobre el trabajo realizado.

**6. Escalar la red: de la colaboración puntual al colectivo de talento**
Algunos freelancers llegan a un punto donde la red de colaboradores se convierte en un activo estratégico que cambia la naturaleza del negocio. Define el proceso de evolución de la red de colaboradores: las señales que indican que la colaboración puntual debe convertirse en una relación más estructurada (el colaborador con quien trabajas en casi todos los proyectos merece una conversación sobre una alianza más formal), las distintas estructuras de colaboración más formal (la micro-agencia donde tú eres el front de cara al cliente y gestionas un equipo de colaboradores, el colectivo de freelancers donde varios profesionales complementarios colaboran con una marca compartida, la alianza estratégica con otro freelance donde cada uno mantiene su marca pero se referencian mutuamente y colaboran en los proyectos que lo justifican), y las implicaciones fiscales y legales de cada modelo que conviene revisar con un asesor antes de formalizar.

Termina con el plan de construcción de la red de colaboradores para el perfil descrito, con las tres acciones más urgentes para tener colaboradores de confianza disponibles antes de que los necesites.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir y gestionar una red de colaboradores y subcontratistas que permita al freelance escalar su capacidad sin sacrificar la calidad.',
                'vote_score'        => 44,
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
