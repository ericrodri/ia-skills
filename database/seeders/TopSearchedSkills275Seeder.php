<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills275Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Stakeholder management del CMO: navegar la política de C-suite',
                'description'      => 'Aprende a gestionar las relaciones con el CEO, CFO, CPO y el resto del C-suite como CMO, alineando la agenda de marketing con los objetivos del negocio y construyendo influencia organizacional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo especializado en CMOs y directores de marketing con experiencia en empresas de crecimiento rápido. Necesito mejorar mi capacidad para gestionar a los stakeholders del C-suite y aumentar la influencia del área de marketing en las decisiones estratégicas de la empresa.

**Contexto necesario:**
- ¿Cuál es el tamaño de la empresa y el sector?
- ¿Cuánto tiempo llevas en el puesto de CMO o director de marketing?
- ¿Cuáles son los principales stakeholders con los que debes trabajar (CEO, CFO, CPO, CRO)?
- ¿Cuál es el principal punto de tensión o fricción con otros líderes?
- ¿Cómo se percibe actualmente el área de marketing dentro de la empresa (centro de gasto, motor de crecimiento, función de soporte)?

**Análisis y plan de acción:**

1. **Diagnóstico de la dinámica política actual**: Evalúa el mapa de poder en el C-suite. Identifica: quién tiene más influencia sobre las decisiones que te afectan, quién es aliado natural del marketing y quién lo ve como un coste, cuáles son los intereses de cada stakeholder clave y cómo el marketing puede contribuir a ellos. Proporciona un mapa de stakeholders con nivel de influencia, actitud hacia marketing y estrategia de relación.

2. **El lenguaje del C-suite para el CMO**: Uno de los errores más comunes del CMO es hablar en métricas de marketing (impresiones, CTR, MQL) cuando los demás ejecutivos piensan en revenue, margen y crecimiento. Explica cómo traducir los resultados de marketing al lenguaje que importa a cada stakeholder: al CEO (crecimiento y cuota de mercado), al CFO (ROI y eficiencia del gasto), al CPO (calidad del feedback de mercado y adopción de producto), y al CRO (calidad del pipeline y velocidad de ventas).

3. **Gestión de la relación con el CEO**: El CEO es el stakeholder más crítico para el CMO. Diseña una estrategia de relación: qué información le presentas y con qué frecuencia, cómo estructuras las actualizaciones para que sean relevantes y concisas, cómo gestionas los momentos de presión cuando los resultados no son los esperados, y cómo construyes confianza más allá del reporte periódico.

4. **Alineación marketing-ventas como palanca de influencia**: En muchas organizaciones, la fricción entre marketing y ventas reduce la credibilidad de ambos ante el C-suite. Diseña una estrategia para convertir esta relación en una alianza que refuerce la posición de ambas áreas. Incluye: qué métricas compartir, qué reuniones establecer, y cómo presentar los resultados conjuntos a la dirección.

5. **Construir el caso financiero del marketing**: La influencia del CMO en el C-suite depende en gran medida de su capacidad para justificar la inversión en marketing con números concretos. Explica cómo construir el modelo de atribución que conecta el gasto en marketing con el revenue, cómo presentar el presupuesto de marketing como inversión (no como coste), y cómo manejar las discusiones sobre recortes de presupuesto con argumentos basados en datos.

6. **Gestión de conflictos ejecutivos**: Define cómo manejar situaciones de conflicto con otros miembros del C-suite: cuando el CPO quiere lanzar un producto sin involucrar a marketing, cuando el CFO quiere recortar el presupuesto de brand, o cuando el CRO cuestiona la calidad de los leads. Para cada situación, proporciona el enfoque de gestión y el argumento concreto.

7. **Plan de 90 días para aumentar la influencia**: Diseña un plan concreto de 12 semanas para mejorar la posición del CMO en el C-suite. Incluye: acciones de relación con cada stakeholder clave, cambios en la forma de reportar resultados, y hitos para saber si la influencia está creciendo.

**Formato esperado:**
- Mapa de stakeholders con estrategia por perfil
- Tabla de traducción de métricas de marketing al lenguaje de cada ejecutivo
- Estructura de la actualización mensual para el CEO
- Plantilla del caso financiero del marketing
- Plan de 90 días con acciones semanales

Empieza con el diagnóstico de contexto.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mejorar la influencia del CMO en el C-suite y construir relaciones estratégicas que aumenten el impacto del área de marketing.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Influir sin autoridad: el developer que consigue que adopten sus propuestas técnicas',
                'description'      => 'Aprende a conseguir que tus propuestas técnicas sean adoptadas por el equipo y la organización sin depender de la jerarquía, usando argumentos, alianzas y comunicación estratégica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager y coach técnico con experiencia ayudando a desarrolladores a ganar influencia organizacional sin tener autoridad formal. Quiero aprender a conseguir que mis propuestas técnicas sean adoptadas: nuevas tecnologías, cambios de arquitectura, mejoras de proceso o estándares de código.

**Contexto necesario:**
- ¿Cuál es la propuesta técnica que quieres que adopten?
- ¿Quién tiene el poder de decisión (tech lead, CTO, el equipo completo)?
- ¿Cuáles son los principales obstáculos que anticipas (resistencia al cambio, preocupaciones de deuda técnica, presión de tiempo)?
- ¿Has intentado proponer esto antes? ¿Qué ocurrió?
- ¿Tienes aliados dentro del equipo que comparten tu punto de vista?

**Estrategia de influencia técnica:**

1. **Diagnóstico de la situación de influencia**: Evalúa el contexto en el que debes influir. Mapea: quién toma la decisión, quién influye sobre esa persona, qué objeciones son probables, qué intereses tiene cada actor (velocidad de entrega, estabilidad del sistema, coste de mantenimiento, desarrollo profesional del equipo), y cuál es el momento político adecuado para proponer el cambio.

2. **El RFC (Request for Comments) como herramienta de influencia**: La forma más efectiva para un developer de ganar buy-in técnico es escribir una propuesta estructurada. Explica cómo redactar un RFC que tenga impacto: estructura recomendada (contexto del problema, soluciones consideradas, propuesta recomendada, impacto en el equipo, riesgos y mitigaciones), cómo involucrar a los stakeholders clave antes de publicarla, y cómo gestionar el proceso de feedback para llegar a una decisión.

3. **Construcción de alianzas técnicas**: La influencia colectiva es más poderosa que la individual. Identifica quién en el equipo tiene intereses similares a los tuyos y cómo construir una coalición. Explica cómo co-desarrollar la propuesta con aliados para que se conviertan en defensores, y cómo usar el consenso del equipo como argumento ante la dirección.

4. **Demostración antes de argumentación**: En la ingeniería, mostrar es más poderoso que decir. Diseña una estrategia de prueba de concepto o spike que demuestre el valor de tu propuesta con datos reales antes de pedir la adopción completa. Cómo elegir el experimento adecuado, cómo medirlo, y cómo presentar los resultados de forma que sean persuasivos.

5. **Comunicación adaptada al interlocutor**: Un argumento técnico perfecto puede fallar si no está adaptado a quien lo escucha. Explica cómo presentar la misma propuesta a: un tech lead (enfocando en deuda técnica y mantenibilidad), un product manager (enfocando en velocidad de entrega futura), y un CTO o director de ingeniería (enfocando en riesgo, escalabilidad y coste a largo plazo).

6. **Gestión de la resistencia y las objeciones**: Identifica las objeciones más comunes a las propuestas técnicas de cambio y proporciona respuestas preparadas. Objeciones frecuentes: "ahora no es el momento", "el equipo no tiene tiempo de aprender algo nuevo", "lo que tenemos funciona bien", "ya lo intentamos antes y no funcionó". Para cada una, proporciona el argumento y la actitud correcta.

7. **Seguimiento después del no**: Cuando una propuesta es rechazada, ¿qué hacer? Diseña la estrategia de seguimiento: cómo mantener viva la propuesta sin resultar pesado, cómo usar el tiempo de espera para construir más evidencia, y cómo identificar el momento en que el contexto ha cambiado y la propuesta vuelve a tener oportunidad.

**Formato esperado:**
- Mapa de stakeholders con intereses y estrategia de relación
- Plantilla de RFC con secciones y guía de redacción
- Plan de prueba de concepto con métricas de éxito
- Tabla de objeciones con respuestas preparadas
- Secuencia de acciones para los próximos 30 días

Comienza con el diagnóstico de contexto antes de construir la estrategia.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Conseguir que las propuestas técnicas sean adoptadas por el equipo y la organización sin depender de la autoridad formal.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design advocacy: cómo conseguir que la organización invierta en diseño',
                'description'      => 'Aprende a construir el argumento interno para que la empresa valore, financie y priorice el diseño, convirtiendo a los diseñadores en socios estratégicos en lugar de ejecutores de tareas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design leader con experiencia elevando la función de diseño dentro de organizaciones donde históricamente ha tenido poco peso estratégico. Necesito construir el caso para que la dirección entienda el valor del diseño y aumente la inversión en el equipo y en los procesos de diseño.

**Contexto necesario:**
- ¿Cuántas personas hay en el equipo de diseño y a quién reportan?
- ¿Cómo se involucra el diseño actualmente en el ciclo de producto (desde el inicio o solo al final)?
- ¿Cuál es la percepción de la dirección sobre el rol del diseño (ejecución visual, experiencia de usuario, diferenciación estratégica)?
- ¿Existe algún momento reciente en que el diseño haya tenido impacto medible en el negocio?
- ¿Cuál es la inversión en diseño comparada con la de ingeniería?

**Plan de design advocacy:**

1. **Diagnóstico de la madurez del diseño en la organización**: Evalúa en qué nivel de madurez está el diseño en la empresa usando el modelo de madurez de diseño (desde el nivel 1 donde el diseño es solo estética hasta el nivel 5 donde el diseño es una ventaja competitiva diferencial). Identifica los síntomas del nivel actual y qué se necesita para subir al siguiente.

2. **El lenguaje del negocio para los diseñadores**: El diseño no convence a la dirección hablando de tipografía, espaciado o sistemas de diseño. Explica cómo traducir el impacto del diseño al lenguaje del negocio: cómo el diseño reduce el tiempo de desarrollo (menos ciclos de corrección), mejora la conversión (más ingresos), reduce el churn (mejor retención) y aumenta la velocidad del equipo de producto. Proporciona fórmulas y ejemplos de cálculo.

3. **Construcción del business case del diseño**: Diseña el argumento completo para presentar a la dirección. Incluye: el costo de no invertir en diseño (deuda de experiencia, retrabajo, pérdida de clientes), el retorno esperado de la inversión adicional en diseño, benchmarks de empresas que han elevado el diseño y sus resultados, y el plan de inversión concreto con su proyección de impacto.

4. **Evidencia interna del impacto del diseño**: Muestra cómo construir el porfolio de impacto interno: documentar casos en los que el diseño ha tenido impacto medible (un rediseño que aumentó la conversión, un flujo simplificado que redujo las llamadas al soporte, un sistema de diseño que aceleró el desarrollo). Proporciona la plantilla de caso de impacto de diseño.

5. **Alianzas estratégicas para el diseño**: El diseño no puede elevar su posición de forma aislada. Identifica los aliados naturales dentro de la organización: el VP de Producto (que se beneficia de un mejor proceso de discovery), el CTO (que se beneficia de un sistema de diseño que acelera el desarrollo), y el equipo de ventas (que se beneficia de una mejor experiencia del cliente). Para cada aliado, diseña la estrategia de relación y el argumento compartido.

6. **Métricas de diseño para la dirección**: Define qué métricas deben seguirse para demostrar el impacto del diseño de forma continua. Incluye: Design Quality Score (satisfacción del usuario con la experiencia), tiempo de entrega de funcionalidades (impacto del sistema de diseño), tasa de cambios post-lanzamiento por falta de diseño previo, y NPS correlacionado con mejoras de experiencia.

7. **Plan de visibilidad progresiva**: Diseña una estrategia de 6 meses para aumentar la visibilidad y el peso estratégico del diseño en la organización. Incluye: qué reuniones debe participar el diseño que hoy no participa, qué artefactos debe producir el diseño para la dirección (research insights, impact reports), y cómo estructurar las demos de diseño para que sean eventos de influencia, no solo de presentación.

**Formato esperado:**
- Diagnóstico de madurez de diseño con nivel actual y siguiente
- Business case del diseño con números concretos
- Plantilla de caso de impacto de diseño
- Mapa de aliados con estrategia de relación
- Plan de visibilidad de 6 meses

Empieza con las preguntas de contexto y luego construye el análisis completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el argumento interno para que la organización valore e invierta en diseño como función estratégica.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Internal selling: convencer a la propia organización para cerrar la venta',
                'description'      => 'Aprende a gestionar el proceso de aprobación interna cuando el comprador está convencido pero necesita que su propia organización diga que sí: comités de compra, procurement, legal y finanzas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior account executive con experiencia en ventas complejas B2B donde el proceso de aprobación interna del comprador es tan difícil como convencer al propio decisor. Necesito aprender a gestionar la venta interna que el comprador debe hacer dentro de su organización para que el deal avance y se cierre.

**Contexto necesario:**
- ¿Cuál es el tipo de producto o servicio que vendes y cuál es el ticket medio?
- ¿Con quién tienes la relación principal (el usuario, el decisor económico, el champion)?
- ¿Cuáles son los stakeholders internos del comprador que deben aprobar la compra?
- ¿En qué punto del proceso está el deal actualmente?
- ¿Has identificado algún bloqueador o stakeholder hostil en el proceso de aprobación?

**Estrategia de internal selling:**

1. **Mapa del comité de compra del cliente**: Antes de ayudar a tu champion a vender internamente, necesitas entender a quién debe convencer. Diseña el framework para mapear el comité de compra: identifica a los iniciadores (quien inicia el proceso), influenciadores (quien da opinión), decisores (quien firma), usuarios (quien usará el producto), y gatekeepers (quien puede bloquear o ralentizar). Para cada rol, define qué les importa y qué argumento resonará con ellos.

2. **Capacitar al champion**: El champion es el activo más valioso de cualquier deal complejo. Explica cómo hacer de tu champion el mejor vendedor de tu producto dentro de su organización. Proporciona: el kit de herramientas que debes darle (presentación ejecutiva, business case, FAQ de objeciones, casos de clientes similares), cómo prepararle para las reuniones internas a las que no puedes asistir, y cómo mantenerle energizado y comprometido durante un proceso largo.

3. **El business case para el decisor económico**: El decisor económico raramente usa el producto y le importa el impacto financiero, no las funcionalidades. Diseña la estructura del business case que tu champion debe presentar: cuánto cuesta el problema que el producto resuelve, cuánto es el retorno esperado (en cifras concretas), cuál es el período de recuperación de la inversión, y qué pasa si no hacen nada. Proporciona la plantilla adaptable.

4. **Gestión del departamento de procurement**: Procurement puede ralentizar o bloquear un deal que ya está acordado a nivel ejecutivo. Diseña la estrategia para gestionar procurement: qué información preparar de antemano (seguridad, referencias, certificaciones), cómo involucrar a procurement antes de que se conviertan en un obstáculo, y qué negociar (precio, términos, garantías) para cerrar rápido una vez que llegan.

5. **Neutralizar al stakeholder hostil**: En cualquier comité de compra hay alguien que se opone: el que prefiere a la competencia, el que defiende la solución interna, el que simplemente se resiste al cambio. Diseña la estrategia para neutralizar su oposición: cómo identificarlo a tiempo, cómo entender qué hay detrás de su resistencia, y cómo abordarlo directamente o a través del champion.

6. **Acortar los tiempos de aprobación**: Los deals mueren más por inercia que por rechazo explícito. Explica cómo crear urgencia legítima que acelere el proceso de aprobación interno del cliente: deadlines de negocio reales, condiciones de precio con fecha de expiración, costos de la demora que el cliente pueda cuantificar, y compromisos mutuos de avance.

7. **Planes de acción conjuntos (Mutual Action Plans)**: El MAP es la herramienta más poderosa para estructurar la venta interna. Diseña una plantilla de MAP que incluya: todos los pasos del proceso de aprobación interno, el responsable de cada paso en el lado del cliente, las fechas objetivo, y los entregables del vendedor en cada etapa. Explica cómo presentarlo y cómo usarlo para mantener el momentum.

**Formato esperado:**
- Plantilla de mapa del comité de compra
- Kit del champion con lista de materiales
- Plantilla del business case financiero
- Checklist de preparación para procurement
- Plantilla de Mutual Action Plan
- Estrategia de neutralización del stakeholder hostil

Empieza con el contexto del deal específico antes de construir la estrategia.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar el proceso de aprobación interna del comprador para hacer avanzar deals B2B complejos que necesitan múltiples aprobaciones.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Stakeholder alignment: gestionar a todos los que opinan sobre el producto',
                'description'      => 'Aprende a alinear a los stakeholders del producto: desde el CEO que quiere una funcionalidad urgente hasta el equipo de ventas que pide lo que les pide el cliente, manteniendo la visión del producto intacta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Producto o product coach con experiencia en la gestión de stakeholders en organizaciones donde todo el mundo tiene opinión sobre el producto. Necesito construir un sistema para gestionar las demandas, expectativas y conflictos de los stakeholders sin perder el foco en la visión del producto.

**Contexto necesario:**
- ¿Cuál es el tipo de producto y el tamaño de la organización?
- ¿Cuáles son los principales stakeholders con los que debes trabajar (CEO, ventas, marketing, soporte, clientes clave)?
- ¿Cuál es el principal dolor en la gestión de stakeholders hoy (demasiadas peticiones sin filtro, cambios de prioridad frecuentes, falta de transparencia en el roadmap)?
- ¿Cómo se toman actualmente las decisiones de producto? ¿Existe un proceso formal?
- ¿Tienes un roadmap y cómo se comunica a los stakeholders?

**Sistema de stakeholder alignment:**

1. **Mapa de stakeholders del producto**: Crea el framework para mapear a todos los stakeholders con influencia sobre el producto. Para cada uno define: su nivel de influencia sobre las decisiones de producto, su nivel de interés en el roadmap, su objetivo principal y las métricas que le importan, y su patrón de interacción preferido (reunión regular, actualización escrita, acceso a datos). Produce la matriz de stakeholders.

2. **El proceso de input de stakeholders**: Diseña un proceso estructurado para recoger, evaluar y responder a las peticiones de los stakeholders. Incluye: cómo los stakeholders envían sus peticiones (formulario estándar, reunión de discovery, canal definido), cómo se evalúan las peticiones (framework de priorización compartido), y cómo se comunica la decisión de incluir o no incluir en el roadmap. El objetivo es que los stakeholders se sientan escuchados incluso cuando la respuesta es "no ahora".

3. **Gestión del CEO que quiere todo para ya**: El CEO como stakeholder tiene características especiales: máxima influencia y a veces menor contexto sobre las complejidades técnicas o de UX. Diseña la estrategia específica para gestionar las peticiones del CEO: cómo escuchar el problema detrás de la petición de funcionalidad, cómo evaluar el impacto real sobre los OKRs de la empresa, cómo decir "no" o "no ahora" con argumentos que el CEO acepte, y cómo mantener informado al CEO sin que cada conversación derive en un cambio de roadmap.

4. **Alineación con ventas y marketing**: Ventas y marketing son stakeholders con una doble naturaleza: fuente de insights reales de mercado y presión constante por funcionalidades específicas para un cliente o campaña. Diseña el proceso de colaboración con ventas y marketing: qué reuniones tener, cómo distinguir las señales de ruido en sus peticiones, y cómo involucrarlos en el proceso de discovery sin que cogestionen el roadmap.

5. **Comunicación del roadmap**: El roadmap es la herramienta central de alineación de stakeholders. Diseña el formato y la cadencia de comunicación del roadmap para diferentes audiencias: el roadmap estratégico para la dirección (horizontes de tiempo amplios, objetivos de negocio), el roadmap de producto para los equipos (temas e iniciativas, no funcionalidades específicas), y el roadmap de lanzamiento para ventas y marketing (compromisos de entrega razonables sin fechas exactas).

6. **Gestión de los conflictos entre stakeholders**: Cuando dos stakeholders tienen necesidades contradictorias (ventas quiere A y la dirección quiere B), el product manager queda en medio. Diseña el proceso de resolución de conflictos: cómo elevar el conflicto de forma productiva, cómo construir el criterio de decisión compartido, y cómo comunicar la decisión a la parte que no obtiene lo que quería.

7. **Rituales de alineación de stakeholders**: Define la cadencia de rituales necesarios para mantener a los stakeholders alineados de forma sostenible. Propón: la reunión de revisión de roadmap (frecuencia, participantes, agenda), las actualizaciones de progreso (formato, canal, frecuencia), y el proceso de retrospectiva de stakeholder alignment (cómo mejorar el proceso cada trimestre).

**Formato esperado:**
- Plantilla de mapa de stakeholders con matriz de influencia/interés
- Proceso de intake de peticiones con formulario estándar
- Script para gestionar la petición urgente del CEO
- Estructura de los tres tipos de roadmap
- Calendario de rituales de alineación
- Plantilla de comunicación de decisión de "no ahora"

Empieza con el diagnóstico de situación antes del plan.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un sistema para gestionar las demandas y expectativas de todos los stakeholders del producto manteniendo la visión y el foco.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR como partner estratégico: influir en la agenda de dirección',
                'description'      => 'Aprende a transformar el rol de RRHH de función administrativa a socio estratégico que influye en las decisiones de negocio, usando datos de personas y alineándose con los objetivos de la empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer o consultor de transformación de RRHH con experiencia convirtiendo áreas de recursos humanos transaccionales en socios estratégicos del negocio. Necesito elevar el impacto de RRHH en la organización y conseguir que la dirección nos vea como un motor de negocio, no como un departamento de soporte.

**Contexto necesario:**
- ¿Cuál es el tamaño de la empresa y el sector?
- ¿Cómo se percibe actualmente RRHH en la organización?
- ¿A quién reporta RRHH (CEO, COO, CFO)?
- ¿Participa RRHH en el comité de dirección?
- ¿Cuál es el principal reto de negocio de la empresa donde RRHH podría aportar más?

**Plan de transformación a partner estratégico:**

1. **Diagnóstico del rol actual de RRHH**: Evalúa en qué modelo operativo está RRHH hoy usando el modelo de Ulrich (socio estratégico, agente del cambio, campeón de los empleados, experto administrativo). Identifica cuánto tiempo dedica RRHH a cada rol y qué espera la dirección de RRHH. Proporciona el diagnóstico con brechas identificadas.

2. **Conectar RRHH con los objetivos de negocio**: El primer paso para ser un partner estratégico es demostrar cómo las iniciativas de personas impactan en los resultados del negocio. Para cada objetivo estratégico de la empresa (crecimiento, eficiencia, expansión internacional, transformación digital), identifica la palanca de personas que RRHH puede accionar y el impacto esperado en el negocio.

3. **El people data como herramienta de influencia**: Los directores de negocio confían en los datos para tomar decisiones. Diseña el dashboard de personas que RRHH debe presentar a la dirección: qué métricas son las más relevantes para el CEO (rotación de personas clave, tiempo de cobertura de posiciones críticas, engagement en relación con productividad), cómo presentarlos en el contexto de negocio, y con qué frecuencia.

4. **Posicionarse como agente del cambio**: Uno de los roles más estratégicos de RRHH es liderar o facilitar los procesos de transformación organizacional. Define cómo RRHH puede posicionarse como el socio clave en iniciativas de cambio: fusiones y adquisiciones, expansiones a nuevos mercados, transformación digital, o reestructuraciones. Qué metodologías debe dominar el equipo de RRHH para liderar el change management.

5. **El business partner de RRHH**: Describe cómo transformar el rol del HR Business Partner de gestor de casos a consejero estratégico del manager de negocio. Qué competencias debe desarrollar el HRBP (comprensión del negocio, análisis de datos, coaching ejecutivo), cómo debe estructurar su agenda de trabajo con cada unidad de negocio, y cómo medir su efectividad como partner.

6. **Gestión de la agenda de dirección desde RRHH**: Define cómo RRHH puede poner temas en la agenda de la dirección que de otro modo no llegarían: cultura organizacional, bienestar y su impacto en productividad, diversidad y talento, planificación de la sucesión. Para cada tema, proporciona el argumento de negocio y la forma de presentarlo.

7. **Plan de transformación de RRHH en 12 meses**: Diseña el roadmap de un año para transformar RRHH en un partner estratégico. Divide el año en tres fases: fundación (datos, procesos, credibilidad), visibilidad (participación en decisiones estratégicas, proyectos de alto impacto), y consolidación (RRHH como voz habitual en el comité de dirección, iniciativas propias con presupuesto asignado).

**Formato esperado:**
- Diagnóstico del modelo operativo de RRHH actual
- Mapa de conexión entre objetivos de negocio y palancas de personas
- Dashboard de people data para la dirección
- Plan de transformación de 12 meses con hitos
- Propuesta de agenda para la próxima reunión del comité de dirección con perspectiva de RRHH

Empieza con el diagnóstico de contexto antes de construir el plan.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar RRHH de función administrativa a socio estratégico con influencia real en las decisiones de negocio.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finance as business partner: de guardián del gasto a socio estratégico',
                'description'      => 'Aprende a transformar el rol del departamento de finanzas de controlador de costes a socio estratégico que impulsa el crecimiento, usando el análisis financiero para influir en las decisiones de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO o director financiero con experiencia transformando el área de finanzas de función de control en motor de valor para el negocio. Necesito redefinir el rol de mi equipo financiero para que sea un auténtico business partner que facilite el crecimiento en lugar de frenar iniciativas por razones puramente presupuestarias.

**Contexto necesario:**
- ¿Cuál es el tamaño de la empresa y en qué etapa de crecimiento está?
- ¿Cómo perciben las áreas de negocio al equipo de finanzas actualmente?
- ¿Cuánto tiempo dedica finanzas al reporting histórico versus al análisis prospectivo?
- ¿Participan las finanzas en las decisiones estratégicas desde el inicio o solo cuando hay que aprobar el presupuesto?
- ¿Tiene el equipo financiero capacidades de análisis de datos más allá de Excel?

**Transformación a finance business partner:**

1. **Diagnóstico de la función financiera actual**: Evalúa en qué modelo opera finanzas hoy: función de control (reporting y cumplimiento), función de análisis (FP&A básico), o función de co-pilotaje estratégico (insight generation, decisión support). Identifica los síntomas del modelo actual y qué se necesita para evolucionar.

2. **Redefinir el valor de finanzas para el negocio**: El finance business partner no solo controla el gasto; genera insights que mejoran las decisiones. Diseña el nuevo modelo de valor: qué análisis puede producir finanzas que las áreas de negocio no tienen capacidad de hacer, cómo convertir los datos financieros en recomendaciones accionables, y cómo posicionarse como el socio que hace que los managers tomen mejores decisiones con más confianza.

3. **La transición del reporting al forecasting**: El reporting histórico es necesario pero no estratégico. Explica cómo evolucionar hacia un modelo donde finanzas se enfoca en el forecast (qué va a pasar) y los escenarios (qué podría pasar si cambian las variables clave). Diseña la estructura del proceso de forecast rolling y los escenarios que deben producirse para cada decisión estratégica relevante.

4. **Embeberse en el negocio**: Los finance business partners más efectivos entienden la lógica de cada área de negocio, no solo los números. Diseña cómo el equipo financiero debe organizarse para asignar a cada área de negocio un FBP dedicado. Qué reuniones debe tener el FBP con el líder de negocio, qué análisis debe preparar proactivamente (sin que se lo pidan), y cómo ganarse la confianza del equipo de negocio.

5. **Simplificar el proceso de aprobación de inversiones**: Uno de los mayores puntos de fricción entre finanzas y el negocio es el proceso de aprobación de inversiones, percibido como lento y burocrático. Diseña un proceso de aprobación que sea riguroso pero ágil: qué decisiones pueden tomarse con un análisis simple (business case de una página), cuáles requieren un análisis completo, y cómo estructurar las reuniones de comité para que sean decisivas.

6. **Democratizar el acceso a los datos financieros**: En lugar de ser el único repositorio de información financiera, finanzas puede crear más valor enseñando al negocio a leer y usar sus propios datos. Diseña la estrategia de financial literacy para los managers: qué métricas debe entender cada área de negocio, cómo crear dashboards autoservicio, y cómo los FBPs pueden actuar como coaches financieros de los líderes de negocio.

7. **Métricas de éxito del finance business partner**: Define cómo medir si la transformación está funcionando. Propón: NPS interno de finanzas (cómo valoran el negocio el soporte de finanzas), tiempo de respuesta a solicitudes de análisis, % de decisiones estratégicas en las que finanzas ha participado desde el inicio, y calidad de los forecasts (desviación real vs prevista).

**Formato esperado:**
- Diagnóstico del modelo financiero actual con brechas
- Modelo de valor del finance business partner
- Proceso de forecast rolling con estructura y cadencia
- Plantilla de business case de una página para inversiones pequeñas
- Plan de transformación de 12 meses con hitos y métricas

Empieza con el análisis de contexto.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Transformar finanzas de función de control a socio estratégico que impulsa el crecimiento y mejora la calidad de las decisiones de negocio.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal como habilitador del negocio: de departamento del "no" a socio',
                'description'      => 'Aprende a transformar el rol del departamento legal de freno percibido a habilitador del crecimiento, gestionando el riesgo de forma inteligente y construyendo credibilidad con las áreas de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un General Counsel o director jurídico con experiencia transformando departamentos legales de función reactiva y de control en socios estratégicos del negocio. Necesito cambiar la percepción del área legal dentro de la empresa y demostrar que el derecho puede ser un motor de crecimiento, no solo un freno.

**Contexto necesario:**
- ¿Cuál es el tamaño de la empresa y el sector?
- ¿Cuál es la percepción actual del área legal en la organización?
- ¿Cuáles son los principales tipos de asuntos que gestiona el equipo legal (contratos, regulatorio, M&A, litigios, propiedad intelectual)?
- ¿Existe un proceso de consulta legal estructurado o el negocio acude a legal de forma irregular?
- ¿Cuál es el mayor punto de fricción entre legal y el negocio?

**Transformación a legal business partner:**

1. **Diagnóstico del modelo legal actual**: Evalúa cómo opera el departamento legal hoy. ¿Es principalmente reactivo (responde a lo que le llega) o proactivo (identifica riesgos antes de que ocurran)? ¿Se involucra legal en las decisiones estratégicas desde el inicio o solo cuando el acuerdo ya está hecho? ¿Cómo mide legal su propio rendimiento? Proporciona el diagnóstico con las brechas más importantes.

2. **Gestión del riesgo como valor estratégico**: El rol más valioso de legal no es decir "no" sino cuantificar el riesgo y proporcionar alternativas que permitan avanzar. Diseña el framework de gestión del riesgo legal: cómo clasificar los riesgos por probabilidad e impacto, cómo comunicarlos al negocio en lenguaje comprensible (no en términos jurídicos), y cómo proporcionar siempre al menos una alternativa viable junto con la evaluación del riesgo.

3. **Cambiar de "no" a "cómo"**: El lenguaje es la herramienta más poderosa de transformación del departamento legal. Diseña el cambio de mentalidad y comunicación: en lugar de "esto no se puede hacer" → "para hacer esto necesitamos resolver X"; en lugar de "hay un riesgo legal" → "el riesgo es X, la probabilidad Y, y estas son las tres formas de mitigarlo". Proporciona ejemplos concretos de cómo reformular las respuestas legales.

4. **Estandarización para la velocidad**: Una de las razones por las que el negocio percibe a legal como lento es que cada asunto se trata desde cero. Diseña el sistema de estandarización legal: qué contratos deben tener plantillas aprobadas que el negocio pueda usar sin consultar a legal, qué decisiones legales recurrentes deben tener política aprobada de antemano, y cómo construir el playbook de negociación para los contratos más frecuentes.

5. **Educación jurídica del negocio**: El mejor servicio que legal puede prestar al negocio es reducir la dependencia del negocio de legal para las decisiones rutinarias. Diseña el programa de legal empowerment: qué deben saber los managers sobre contratos, propiedad intelectual, protección de datos y empleo para gestionar sus riesgos del día a día sin acudir siempre a legal. Qué formato de formación es más efectivo (talleres, FAQs, guías visuales).

6. **Legal en las decisiones estratégicas**: Define cómo legal debe posicionarse para estar presente en las decisiones estratégicas que tienen implicaciones jurídicas antes de que el problema ocurra. Qué reuniones estratégicas debe asistir el director jurídico, cómo debe preparar las reuniones (con un análisis proactivo, no esperando a que le pregunten), y cómo ganarse el respeto de los miembros del comité de dirección como consejero estratégico.

7. **Métricas del legal business partner**: Define cómo medir el nuevo modelo de legal. Propón: tiempo de respuesta a solicitudes por tipo, NPS interno del servicio legal, tasa de contratos gestionados con plantillas estándar vs revisión manual, coste del departamento legal como % de los ingresos, y número de incidencias legales prevenidas vs gestionadas (ratio proactivo/reactivo).

**Formato esperado:**
- Diagnóstico del modelo legal con brechas
- Framework de gestión del riesgo legal con matriz de comunicación
- Ejemplos de reformulación de respuestas legales del "no" al "cómo"
- Plan de estandarización con lista de plantillas y políticas prioritarias
- Programa de legal empowerment para managers
- Métricas del nuevo modelo con benchmarks

Empieza con el análisis de contexto y luego construye el plan de transformación.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar el departamento legal de función reactiva de control a socio estratégico que habilita el crecimiento gestionando el riesgo con inteligencia.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Internal advocacy del cliente: representar la voz del cliente dentro de la empresa',
                'description'      => 'Aprende a construir el sistema para que la voz del cliente llegue a las decisiones de producto, tecnología y negocio, convirtiendo al equipo de CS en el puente entre el cliente y la organización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo la función de voz del cliente dentro de organizaciones donde el equipo de producto y tecnología está demasiado alejado de los usuarios reales. Necesito diseñar el sistema para que los insights de clientes lleguen a las decisiones correctas en el momento correcto.

**Contexto necesario:**
- ¿Cuántos clientes gestiona el equipo de CS?
- ¿Existe algún proceso formal para recoger y escalar el feedback de clientes?
- ¿Cuál es la relación actual entre CS y el equipo de producto?
- ¿Participan los clientes en algún proceso de discovery de producto?
- ¿Cuál es el principal punto de fricción: que el producto no recoge el feedback, que lo recoge pero no actúa, o que actúa pero no comunica al cliente?

**Sistema de advocacy interno del cliente:**

1. **Diagnóstico del flujo de voz del cliente**: Evalúa cómo viaja el feedback del cliente desde el contacto inicial (soporte, renovación, QBR) hasta las decisiones de producto. Identifica los puntos de ruptura: dónde se pierde el feedback, dónde se transforma en algo que no refleja la realidad del cliente, y dónde existe desconexión entre lo que los clientes dicen que quieren y lo que el equipo de producto entiende que quieren.

2. **Taxonomía del feedback de clientes**: Para que el feedback de clientes sea útil para el equipo de producto, debe estar estructurado. Diseña el sistema de clasificación del feedback: por tipo (bug, petición de funcionalidad, mejora de UX, queja de proceso), por segmento de cliente (tamaño, sector, plan), por impacto en el negocio del cliente (crítico, importante, cosmético), y por frecuencia (cuántos clientes expresan el mismo problema).

3. **Ritmos de comunicación entre CS y Producto**: Define la cadencia de reuniones y comunicaciones entre el equipo de CS y el de producto para que el feedback fluya de forma sistemática. Propón: la reunión mensual de feedback de clientes (agenda, participantes, formato), el proceso de escalación urgente para problemas críticos que afectan a la retención, y el canal de comunicación para el feedback del día a día (sin saturar al equipo de producto).

4. **El customer case para el roadmap**: Cuando el equipo de CS quiere que una petición de cliente entre en el roadmap, necesita construir el caso de negocio. Diseña la plantilla del customer case: cuántos clientes afecta, cuál es el impacto en la retención o la expansión si no se resuelve, cuál es el segmento de clientes afectado, y cuál es el coste alternativo (cuánto tiempo de CS consume este problema hoy). Proporciona la plantilla completa.

5. **Programa de voz del cliente para el equipo de producto**: El feedback indirecto siempre llega filtrado. Diseña el programa de exposición directa del equipo de producto a los clientes: customer interviews organizadas por CS, shadowing de llamadas de renovación, presencia en QBRs de clientes clave, y user testing con clientes reales. Cómo estructurar cada tipo de exposición para que sea eficiente para el equipo de producto.

6. **Cerrar el loop con el cliente**: Una de las razones por las que los clientes dejan de compartir feedback es que sienten que no pasa nada. Diseña el proceso de cierre del loop: cómo notificar al cliente cuando su feedback ha influido en una decisión de producto, cómo comunicar los lanzamientos de funcionalidades a los clientes que las pidieron, y cómo convertir esta comunicación en una oportunidad de reforzar la relación.

7. **Métricas del programa de voz del cliente**: Define cómo medir si el sistema está funcionando. Propón: tasa de feedback estructurado sobre total de interacciones con clientes, % de peticiones de clientes que llegan al backlog de producto, tasa de conversión de peticiones en backlog a funcionalidades lanzadas, y correlación entre el feedback recogido y las métricas de retención.

**Formato esperado:**
- Mapa del flujo de feedback con puntos de ruptura identificados
- Sistema de clasificación del feedback con categorías y campos
- Cadencia de reuniones CS-Producto con agendas tipo
- Plantilla del customer case para el roadmap
- Proceso de cierre del loop con el cliente
- Dashboard de métricas del programa de voz del cliente

Empieza con el diagnóstico de contexto.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el sistema para que la voz del cliente llegue de forma estructurada a las decisiones de producto y negocio.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Stakeholder management del freelance: gestionar a todos los que dicen qué hacer',
                'description'      => 'Aprende a gestionar clientes, responsables de área y tomadores de decisión en proyectos freelance donde las instrucciones vienen de múltiples fuentes y los conflictos de prioridades son constantes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio para freelancers con experiencia en la gestión de proyectos complejos donde intervienen múltiples stakeholders en el lado del cliente. Necesito aprender a gestionar situaciones donde el responsable de área me da instrucciones distintas al director, o donde los cambios de alcance llegan de diferentes personas sin coordinación entre ellas.

**Contexto necesario:**
- ¿Cuál es tu especialidad como freelance (diseño, desarrollo, consultoría, redacción)?
- ¿Con cuántas personas del lado del cliente sueles trabajar en un proyecto típico?
- ¿Cuál es el principal problema que vives: instrucciones contradictorias, cambios de alcance no coordinados, o dificultad para llegar al decisor real?
- ¿Tienes algún proceso definido para gestionar los cambios de alcance?
- ¿Ha habido algún proyecto que se complicó especialmente por la gestión de stakeholders?

**Sistema de gestión de stakeholders para el freelance:**

1. **Diagnóstico del ecosistema de stakeholders en cada proyecto**: Antes de empezar cualquier proyecto, necesitas mapear quién puede influir en el trabajo. Diseña el proceso de discovery de stakeholders: qué preguntas hacer al cliente en la reunión de arranque (quién debe aprobar los entregables, quién puede pedir cambios, existe algún comité de revisión), y cómo documentar el mapa de stakeholders para usar durante todo el proyecto.

2. **Identificar al decisor real desde el principio**: Uno de los errores más comunes del freelance es trabajar solo con el contacto que te contrató sin saber si tiene autoridad real para aprobar el trabajo. Diseña el proceso para identificar al decisor final: qué preguntas hacer, cómo plantear la necesidad de involucrar a ese decisor en etapas clave, y cómo gestionar la situación cuando el contacto no quiere que vayas más arriba.

3. **Gestión de instrucciones contradictorias**: Cuando el responsable de marketing te dice una cosa y el director de comunicación te dice otra, tienes un problema. Diseña el protocolo para gestionar instrucciones contradictorias: cómo documentarlo, cómo escalar el conflicto al cliente de forma constructiva sin tomar partido, y cómo protegerte contractualmente de los cambios que derivan de conflictos internos del cliente.

4. **Control del alcance en entornos multi-stakeholder**: En proyectos con varios stakeholders, el scope creep es inevitable porque cada uno añade sus propias peticiones. Diseña el proceso de control del alcance: cómo definir en el contrato quién puede solicitar cambios y cuál es el proceso de aprobación, cómo comunicar los cambios de alcance cuando ocurren (sin confrontación pero con claridad), y cómo presupuestar los cambios adicionales de forma que el cliente lo vea como normal y no como una sorpresa.

5. **Comunicación estructurada con múltiples stakeholders**: Define cómo gestionar la comunicación en un proyecto multi-stakeholder sin perder tiempo ni crear malentendidos. Propón: la cadencia de actualizaciones (a quién se informa de qué y con qué frecuencia), el formato de los informes de progreso (breve, visual, centrado en decisiones pendientes), y cómo gestionar un canal de comunicación grupal cuando los stakeholders no están coordinados entre sí.

6. **Gestión de las revisiones y aprobaciones**: Las revisiones son el momento de mayor riesgo en los proyectos con múltiples stakeholders porque cada uno puede tener una opinión diferente. Diseña el proceso de revisión: cómo estructurar las rondas de feedback (consolidado, no por separado de cada stakeholder), cómo limitar el número de rondas de revisión en el contrato, y cómo gestionar el feedback contradictorio dentro del mismo comité de revisión.

7. **Protección contractual en proyectos multi-stakeholder**: Define qué cláusulas deben estar presentes en el contrato cuando trabajas en proyectos con múltiples tomadores de decisión. Incluye: definición de quién es el interlocutor único con poder de aprobación, proceso y límite de cambios de alcance, qué ocurre si el proyecto se detiene por falta de decisión interna del cliente, y cómo se gestionan los cambios de brief derivados de cambios organizativos en el cliente.

**Formato esperado:**
- Checklist de discovery de stakeholders para la reunión de arranque
- Protocolo de gestión de instrucciones contradictorias
- Plantilla de comunicación de cambio de alcance
- Estructura del informe de progreso multi-stakeholder
- Cláusulas contractuales recomendadas para proyectos con múltiples decisores

Empieza con el contexto y luego construye el sistema completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar proyectos freelance con múltiples stakeholders, instrucciones contradictorias y cambios de alcance no coordinados.',
                'vote_score'       => 34,
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
