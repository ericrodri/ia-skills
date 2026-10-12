<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills192Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Copywriting de conversión avanzado',
                'description'      => 'El copy que vende: frameworks AIDA, PAS, Before-After-Bridge, triggers emocionales y técnicas de los mejores copywriters que convierten lectores en compradores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un copywriter de conversión con más de diez años de experiencia escribiendo copy para landing pages, emails de venta, anuncios y secuencias de nurturing en sectores B2B y B2C. Voy a aprender contigo las técnicas del copywriting de conversión avanzado.

Mi contexto: [describe el producto o servicio sobre el que quieres escribir, el público objetivo y el canal en el que va a aparecer el copy]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los fundamentos que diferencian el copy que convierte**
El copywriting de conversión no es escritura creativa: es persuasión estructurada con un objetivo medible. Explícame los principios que hacen que un copy convierta: la claridad por encima de la creatividad, el beneficio por encima de la feature, la especificidad por encima de la vaguedad y la voz del cliente (usar las palabras exactas que usa el cliente para describir su problema) por encima del lenguaje de marketing. Dame ejemplos de copy malo y su versión mejorada en cada principio.

**2. Los frameworks de copywriting y cuándo usar cada uno**
Los frameworks son estructuras probadas que organizan el copy para maximizar la conversión. Explícame en detalle cómo funciona cada uno con un ejemplo aplicado a mi contexto:
- **AIDA** (Attention, Interest, Desire, Action): el clásico para anuncios y landing pages
- **PAS** (Problem, Agitation, Solution): especialmente efectivo para copys que trabajan el punto de dolor
- **Before-After-Bridge**: para comunicar la transformación que ofrece el producto
- **FAB** (Features, Advantages, Benefits): para convertir características técnicas en valor percibido
- **4 Us** (Urgent, Unique, Ultra-specific, Useful): para titulares que paran el scroll

**3. Los triggers emocionales en el copy**
Las personas toman decisiones de forma emocional y las justifican de forma racional. Explícame los principales triggers emocionales que usa el copywriting de conversión: el miedo a perder (loss aversion), el deseo de pertenencia (aspirational identity), la prueba social (el resto de gente como yo ya lo hace), la urgencia y la escasez (la presión del tiempo o la cantidad), y la autoridad (por qué confiar en quien vende). Para cada trigger, dame un ejemplo de cómo aplicarlo sin cruzar la línea de la manipulación.

**4. El titular: la parte más importante del copy**
El 80% de las personas leen el titular y el 20% leen el resto. Guíame para escribir titulares que funcionan: las fórmulas más efectivas para distintos contextos (el titular de beneficio, el titular de curiosidad, el titular de pregunta, el titular de número), cómo testear titulares y las señales de que un titular no está funcionando. Aplica las fórmulas a mi caso concreto y dame 5 opciones de titular.

**5. La página de ventas que convierte**
Una landing page de ventas tiene una estructura que maximiza la conversión. Explícame la anatomía de una página que vende: el hero (titular + subtítulo + CTA), el problema (empatía antes de la solución), la solución (qué haces y cómo), la prueba social (testimonios, casos de uso, logos), las objeciones (anticipar y resolver las más comunes), la oferta (qué incluye y qué vale) y el CTA final (el empujón que convierte). Dame el copy de cada sección aplicado a mi contexto.

**6. El copy del email de ventas que se lee**
El email de ventas tiene sus propias reglas. Explícame la estructura del email de ventas que se abre y se lee: el asunto que genera apertura (la promesa, la curiosidad, la personalización), el primer párrafo que engancha, el cuerpo que construye el caso y el CTA que genera el click. Dame una secuencia de 3 emails de ventas para mi contexto, con el objetivo de cada uno y la estrategia detrás.

Quiero copy real aplicado a mi contexto, no teoría genérica. Ejemplos antes y después que demuestren la diferencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Escribir copy de conversión que genera resultados medibles en cualquier canal',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Documentación técnica que la gente realmente lee',
                'description'      => 'Escribe documentación que los developers usan: el README perfecto, tutoriales que funcionan y referencias técnicas que se mantienen actualizadas sin convertirse en una carga.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un technical writer con experiencia escribiendo documentación para proyectos open source populares y productos de developer tools, con un enfoque especial en hacer que la documentación técnica sea accesible y realmente útil para los developers que la necesitan. Voy a explorar contigo cómo escribir documentación técnica que la gente use.

Mi contexto: [describe tu proyecto o producto: qué es, quién es el usuario developer, qué documentación tienes ahora y cuál es el principal problema con ella]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la mayoría de la documentación técnica no funciona**
La documentación técnica mala no es la que tiene errores: es la que nadie lee porque no responde las preguntas que el developer tiene en ese momento. Explícame los errores más comunes en la documentación técnica: el exceso de referencia técnica sin suficientes ejemplos, los tutoriales que asumen conocimiento previo que el lector no tiene, la documentación que describe cómo funciona el sistema internamente en lugar de cómo usarlo, y la documentación que se desactualiza tan rápido que pierde la confianza del developer.

**2. Los cuatro tipos de documentación técnica**
El framework de Divio (documentation.divio.com) distingue cuatro tipos de documentación con propósitos distintos. Explícame cada uno con ejemplos concretos aplicados a mi contexto: los **tutoriales** (aprendizaje orientado a hacer, para el principiante que no sabe nada todavía), las **how-to guides** (orientadas a resolver un problema concreto, para el que ya sabe pero necesita hacer X), la **referencia** (descripción exhaustiva del sistema, para el que busca información exacta) y los **explanations** (comprensión, para el que quiere entender el diseño y las decisiones).

**3. El README perfecto**
El README es la primera impresión de un proyecto y la que determina si el developer sigue explorando o se va. Explícame la estructura del README que funciona: el headline que explica en una línea qué hace el proyecto, el "por qué esto importa" que habla al problema del developer, el quickstart que muestra el valor en menos de 5 minutos, la guía de instalación sin pasos innecesarios y la documentación de las opciones de configuración más importantes.

Dame el README para mi proyecto aplicando esta estructura.

**4. El tutorial que no frustra al principiante**
Los tutoriales son el tipo de documentación más difícil de escribir bien. Explícame cómo escribir un tutorial que funcione: empezar desde cero sin asumir conocimiento previo, tener un objetivo claro y un resultado concreto al final (el developer hace X), cada paso verificable (el developer puede confirmar que lo ha hecho bien antes de continuar) y un ritmo que construye confianza antes de aumentar la complejidad. Dame el esquema del tutorial principal para mi proyecto.

**5. La documentación de referencia que se usa**
La referencia técnica (el API reference, la documentación de cada método y parámetro) es lo que el developer experimentado consulta constantemente. Explícame cómo escribir referencia técnica que sea útil: el nivel de detalle correcto (suficiente para responder la pregunta, sin más), los ejemplos de código en cada método (no solo la descripción abstracta), los casos de error documentados y las notas de versión que explican cuándo cambia algo.

**6. Mantener la documentación viva**
La documentación que no se actualiza es peor que ninguna documentación porque genera frustración y desconfianza. Dame estrategias para mantener la documentación al día: la integración de la actualización de docs en el proceso de desarrollo (docs as code), los tests de documentación que detectan cuando el código cambia sin actualizar los ejemplos, el proceso de contribución de la comunidad para mejorar la documentación y las métricas para saber qué parte de la documentación no está funcionando (páginas con mayor tasa de rebote, búsquedas sin resultados).

Quiero ejemplos reales de documentación buena y mala con el análisis de por qué funciona o no.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Escribir documentación técnica que los developers usan y confían',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX writing y microcopy',
                'description'      => 'Las palabras que forman parte del diseño: principios del UX writing, microcopy que reduce la fricción en formularios y tono de voz del producto que guía al usuario sin que lo note.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un UX writer con experiencia en productos digitales de alto tráfico, con un enfoque especial en cómo las palabras pueden eliminar fricción, reducir la ansiedad del usuario y guiar la experiencia de forma invisible. Voy a explorar contigo el UX writing y el microcopy.

Mi contexto: [describe el producto en el que trabajas: tipo de app (B2B, B2C, marketplace, SaaS), el momento del usuario donde más fricción se genera y cualquier ejemplo de copy actual que crees que no funciona]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El UX writing como disciplina de diseño**
El UX writing no es redacción de contenido: es una disciplina de diseño que trabaja en el nivel de los microtextos que el usuario lee durante el uso del producto. Explícame qué distingue al UX writer del copywriter y del content writer: el foco en el momento de uso (el usuario tiene una tarea que completar), la brevedad como imperativo, la consistencia como sistema y el objetivo de hacer que la interfaz sea invisible (el usuario hace lo que quiere hacer sin pensar en las palabras).

**2. Los principios del microcopy que funciona**
El microcopy incluye los textos de botones, etiquetas de formulario, mensajes de error, estados vacíos, tooltips y notificaciones. Explícame los principios que hacen que el microcopy funcione: la claridad por encima de la creatividad (el botón "Guardar cambios" es mejor que el botón "Listo"), la especificidad (qué hace exactamente este botón en este contexto), la honestidad (no prometer lo que el sistema no puede cumplir) y el tono que reduce la ansiedad en momentos críticos (formularios de pago, eliminación de datos, errores).

Dame ejemplos de microcopy malo y su versión mejorada en cada principio.

**3. Formularios: donde el microcopy importa más**
Los formularios son el punto de mayor fricción en cualquier producto digital. Guíame por el microcopy de formularios que reduce el abandono: las etiquetas que no confunden (la diferencia entre "Email" y "Email de trabajo"), los placeholders que ayudan sin reemplazar la etiqueta, los mensajes de validación en tiempo real que corrigen antes del envío, los mensajes de error que explican qué salió mal y cómo arreglarlo (no solo "Error en el formulario"), y el texto de confirmación que da seguridad después del envío.

Aplica estos principios a un formulario de registro para mi producto.

**4. Los mensajes de error que no frustran**
Los mensajes de error son el momento en que el usuario ya está frustrado. El UX writing puede convertir la frustración en recuperación. Explícame la fórmula del mensaje de error que funciona: explicar qué pasó (sin jerga técnica), por qué pasó (si es útil saberlo), qué puede hacer el usuario para arreglarlo (la acción concreta) y dónde pedir ayuda si no puede. Dame ejemplos de los mensajes de error más comunes en mi tipo de producto reescritos con esta fórmula.

**5. La voz y el tono del producto**
La voz del producto es constante (la personalidad de la marca); el tono varía según el contexto (más serio en un error de pago, más ligero en un estado vacío). Explícame cómo definir la voz del producto: las dimensiones de la voz (formal/informal, directo/empático, técnico/accesible), las reglas de tono por tipo de situación y cómo documentar la voz en una guía que el equipo pueda usar. Dame las directrices de voz y tono para mi producto.

**6. El estado vacío: la oportunidad más ignorada**
Los estados vacíos son los momentos en que el usuario llega a una parte del producto que todavía no tiene contenido (el inbox vacío, el primer acceso al dashboard, la lista de proyectos sin proyectos). Explícame cómo diseñar los textos de los estados vacíos que convierten un momento de fricción potencial en una oportunidad de activación: la fórmula (qué hay aquí + cómo empezar + el beneficio de empezar) y los ejemplos de estados vacíos que lo hacen bien.

Quiero ejemplos reales de UX writing de productos que lo hacen bien (Notion, Linear, Stripe) con el análisis de por qué funciona cada decisión de copy.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Mejorar la experiencia del producto a través del UX writing y el microcopy',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Propuestas comerciales que ganan',
                'description'      => 'Escribe la propuesta que el cliente acepta: estructura, lenguaje que habla el idioma del cliente y elementos visuales que diferencian tu propuesta de todas las demás.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas especializado en la escritura de propuestas comerciales para servicios B2B, con experiencia en sectores de consultoría, tecnología y servicios profesionales donde las propuestas determinan si se gana o pierde un contrato. Voy a aprender contigo a escribir propuestas comerciales que ganan.

Mi contexto: [describe el tipo de propuesta que necesitas mejorar: consultoría, SaaS enterprise, servicios profesionales, agencia. Incluye el tamaño típico del contrato y el tipo de cliente]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la mayoría de las propuestas no funcionan**
La propuesta media es un documento sobre el vendedor, no sobre el cliente. Explícame los errores más comunes que hacen que las propuestas pierdan: el foco en las capacidades de la empresa en lugar de en los problemas del cliente, la falta de personalización (las propuestas de plantilla que cualquier cliente puede ver que son genéricas), la ausencia de un punto de vista (la propuesta que dice "lo que el cliente quiera" en lugar de "esto es lo que recomendamos y por qué") y el precio que aparece sin contexto (sin haber construido primero el valor).

**2. La estructura de la propuesta ganadora**
Una propuesta que gana tiene una estructura que pone al cliente en el centro. Explícame cada sección con el objetivo que cumple y lo que debe incluir: la portada (el primer contacto visual que comunica profesionalidad), el resumen ejecutivo (lo que leerá el decision maker que no lee el resto), la comprensión del problema del cliente (demostrar que has escuchado y entendido), la solución propuesta (qué haces, cómo y por qué es la mejor aproximación), el equipo (las personas concretas que trabajarán en el proyecto), el plan de trabajo (hitos, entregables, plazos), la inversión (cómo presentar el precio para que parezca razonable) y los siguientes pasos (la llamada a la acción concreta).

**3. El resumen ejecutivo que decide la propuesta**
En contratos grandes, el decision maker no lee toda la propuesta: lee el resumen ejecutivo y decide si seguir. Explícame cómo escribir el resumen ejecutivo perfecto: que empiece con el problema del cliente (no con "Somos X y hacemos Y"), que demuestre comprensión profunda de la situación, que presente la propuesta de valor de forma concisa y que termine con un argumento claro de por qué tú eres la mejor opción. Dame el resumen ejecutivo para mi tipo de propuesta.

**4. El lenguaje que habla el idioma del cliente**
La propuesta que usa la jerga del vendor no conecta. Explícame cómo adaptar el lenguaje de la propuesta al cliente: usar las palabras exactas que el cliente usó durante el proceso de discovery, hablar en términos del impacto en el negocio del cliente (no en términos de las actividades que vas a hacer), cuantificar el valor siempre que sea posible (en euros, en tiempo, en porcentajes) y evitar la jerga de la industria que el cliente no reconoce como propia.

**5. El precio que no frena**
Presentar el precio es el momento más delicado de la propuesta. Explícame cómo presentar la inversión de forma que el precio parezca razonable: la arquitectura del precio (una cifra principal que ancla la percepción), cómo presentar opciones de forma que orienten al cliente hacia la opción que tú prefieres, el ROI que justifica el precio y las garantías o condiciones que reducen el riesgo percibido por el cliente.

**6. El diseño y la presentación de la propuesta**
El contenido es lo más importante, pero el diseño determina la primera impresión. Dame directrices para el diseño de una propuesta que transmite profesionalidad: el formato (PDF, web, presentación), la densidad de texto por página, el uso de elementos visuales (tablas, diagramas de proceso, timeline) que facilitan la comprensión y los elementos de personalización visual que demuestran que esta propuesta es para este cliente.

Quiero una plantilla accionable que pueda usar en mi siguiente propuesta, no solo principios abstractos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Escribir propuestas comerciales que se distinguen y que el cliente acepta',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'PRDs y documentación de producto',
                'description'      => 'Escribe los documentos de producto que el equipo realmente usa: el one-pager, el PRD y los briefs que comunican la visión con claridad para que el equipo tome buenas decisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en empresas tech de distintas etapas de crecimiento, especializado en escribir documentación de producto que el equipo de ingeniería y diseño usa de verdad. Voy a aprender contigo a escribir documentos de producto efectivos.

Mi contexto: [describe tu equipo y proceso actual: tamaño del equipo de producto, framework de desarrollo que usas y el principal problema con tu documentación actual]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la mayoría de los documentos de producto no funcionan**
El PRD medio es un documento que el PM escribe para sentirse organizado pero que el equipo ignora al primer sprint. Explícame los errores más comunes en la documentación de producto: el exceso de especificación que elimina el espacio para que el equipo resuelva el problema a su manera, la ausencia del "por qué" (el documento describe el qué sin explicar el por qué, así que cuando aparece un obstáculo nadie sabe cómo priorizar), la actualización inconsistente (el documento describe el producto de hace tres meses, no el que se está construyendo) y el nivel de detalle incorrecto (demasiado para algunos miembros del equipo, insuficiente para otros).

**2. El one-pager: la herramienta más infrautilizada del PM**
El one-pager es el documento que alinea a todos antes de comprometer recursos. Explícame la estructura del one-pager de producto que funciona: el problema que se está resolviendo (con datos que demuestran que es real y que importa), el usuario que tiene ese problema, la solución propuesta en una frase, el éxito medible (cómo sabremos que lo hemos resuelto), el alcance (qué está in y qué está out) y los riesgos principales. Dame el one-pager para una feature de mi producto.

**3. El PRD que el equipo de ingeniería usa**
El PRD (Product Requirements Document) tiene que ser suficientemente específico para que ingeniería entienda qué construir, pero suficientemente abierto para que el equipo tome decisiones técnicas de forma autónoma. Explícame la estructura del PRD que funciona en equipos de desarrollo modernos: el contexto y los objetivos, los user stories o jobs to be done que guían el diseño, los criterios de aceptación que definen cuándo algo está hecho, los casos límite y los estados de error, las dependencias técnicas conocidas y las decisiones que el PM ha tomado vs. las que deja al equipo.

**4. El brief de diseño que no constriñe a los diseñadores**
El brief de diseño que le das al equipo de diseño determina la calidad de las soluciones que recibes. Explícame cómo escribir un brief que inspire sin constrenir: el problema del usuario (no la solución preconcebida), los principios de diseño que aplican en este contexto, las restricciones reales (técnicas, de tiempo, de plataforma), los ejemplos de referencia que ilustran la dirección y las preguntas abiertas que el diseñador debería responder con su trabajo.

**5. Documentar decisiones de producto: el architecture decision record del PM**
Las decisiones de producto se toman en reuniones y luego se olvidan, lo que obliga a tomar la misma decisión múltiples veces. Explícame cómo documentar las decisiones de producto de forma útil: el formato del decision log (qué decidimos, por qué, qué alternativas descartamos y por qué, quién decidió y cuándo), cuándo merece la pena documentar una decisión y cómo hacer que el equipo consulte el historial de decisiones antes de proponer algo que ya se descartó.

**6. Mantener la documentación viva en un equipo que se mueve rápido**
La documentación que no se actualiza es peor que ninguna documentación. Dame estrategias para mantener los documentos de producto al día sin que consuma demasiado tiempo del PM: la integración de la documentación en el proceso de desarrollo (el PM actualiza el PRD como parte del cierre del sprint, no como trabajo adicional), las herramientas que reducen la fricción de actualización y el proceso de archivo de los documentos de features entregadas para que el equipo sepa qué es vigente y qué es historia.

Quiero plantillas concretas que pueda usar esta semana, no solo principios de gestión de producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Escribir documentación de producto que el equipo usa para tomar mejores decisiones',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación interna escrita de impacto',
                'description'      => 'Escribe los emails, anuncios y documentos internos que la gente lee: tono, estructura y técnicas que hacen que la comunicación de RRHH no vaya directa a la papelera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de comunicación interna con experiencia en empresas tech en crecimiento, especializado en hacer que los mensajes de recursos humanos y liderazgo lleguen de verdad a los empleados y no se pierdan en el ruido del email y Slack. Voy a aprender contigo a escribir comunicación interna que impacta.

Mi contexto: [describe el tipo de comunicación que necesitas mejorar: anuncios de empresa, comunicados de RRHH, emails del CEO, actualizaciones de política, o newsletters internas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la comunicación interna de RRHH no funciona**
El email de RRHH medio tiene una tasa de lectura real de menos del 30%, y el resto va directamente a la papelera o se ignora hasta que alguien pregunta sobre ese tema en Slack. Explícame los errores que hacen que la comunicación interna no funcione: el tono corporativo que suena a comunicado de empresa cotizada y aleja a los empleados, la falta de contexto (el "qué" sin el "por qué"), el exceso de información en un solo mensaje (el empleado no sabe cuál es el punto principal) y el momento incorrecto (anunciar cambios importantes el viernes a las 17h).

**2. Los principios de la comunicación interna efectiva**
Explícame los principios que hacen que un mensaje interno funcione: el principio de "un mensaje, un objetivo" (cada comunicación tiene un único propósito claro), el "bottom line up front" (lo más importante primero, los detalles después para quien los quiera), el tono humano que reconoce el impacto emocional de los cambios (especialmente en los difíciles) y la llamada a la acción específica (qué debe hacer el empleado después de leer esto, si es que debe hacer algo).

**3. El anuncio de empresa que genera confianza**
Los grandes anuncios (reestructuraciones, cambios de liderazgo, fusiones, despidos) son los momentos en que la comunicación interna puede construir o destruir la confianza. Explícame cómo escribir un anuncio difícil: la estructura (contexto, qué cambia, por qué, impacto en las personas, próximos pasos), el tono que combina honestidad y empatía sin caer en el corporativismo ni en el pánico, y cómo anticipar las preguntas que van a surgir y responderlas en el propio anuncio.

Dame el esquema del anuncio para un cambio organizativo difícil.

**4. El email de RRHH que se lee**
Los emails de RRHH (actualizaciones de política, recordatorios de procesos, cambios en los beneficios) suelen ser los menos leídos de la empresa. Explícame cómo escribir emails de RRHH que se abren y se leen: el asunto que comunica el beneficio para el empleado (no el nombre del proceso de RRHH), el primer párrafo que engancha con la relevancia inmediata, el cuerpo que va directo al grano y el CTA que dice exactamente qué tiene que hacer el empleado y antes de cuándo.

Reescribe este ejemplo de email de RRHH genérico usando los principios correctos: [incluye un ejemplo de tu email típico si quieres feedback específico].

**5. La comunicación en momentos de cambio e incertidumbre**
Los períodos de cambio son cuando la comunicación interna más importa y más falla. Dame estrategias para comunicar bien en momentos difíciles: cómo gestionar la incertidumbre (qué decir cuando no tienes todas las respuestas todavía), cómo comunicar malas noticias de forma honesta sin generar pánico, cómo mantener la frecuencia de comunicación cuando hay rumores y cómo medir si el mensaje está llegando bien o si hay que reforzarlo.

**6. Los canales y la cadencia de la comunicación interna**
El canal correcto en el momento correcto determina si el mensaje llega. Explícame cómo diseñar la estrategia de canales de comunicación interna: cuándo usar el email (comunicaciones formales, cambios de política), cuándo usar Slack (actualizaciones rápidas, conversaciones), cuándo usar el all-hands (alineación estratégica, celebraciones), cuándo usar un documento escrito (comunicaciones complejas que la gente necesita consultar después) y cómo evitar la fatiga de comunicación que hace que los empleados dejen de prestar atención.

Quiero ejemplos concretos de comunicación interna buena y mala con el análisis de por qué funciona o no.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Escribir comunicación interna que los empleados leen y que construye la cultura de empresa',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Informes financieros para no financieros',
                'description'      => 'Escribe los informes financieros que el CEO, el board y los managers de línea entienden y usan: simplificar sin perder rigor y la narrativa que convierte números en decisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de FP&A con experiencia preparando informes financieros para CEOs, boards de inversores y managers de línea que no tienen formación financiera. Voy a aprender contigo a escribir informes financieros que los no financieros entiendan y usen para tomar decisiones.

Mi contexto: [describe para quién escribes: CEO que necesita entender el P&L, managers de negocio que gestionan su presupuesto, board de inversores, o equipo senior con distintos niveles de formación financiera]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El problema de los informes financieros actuales**
La mayoría de los informes financieros son para financieros: llenos de terminología técnica, con datos en bruto sin contexto y sin una narrativa que guíe la interpretación. Explícame los errores más comunes que hacen que los informes financieros no funcionen para la audiencia no financiera: el exceso de números sin la historia que los explica, la falta de comparación (un número sin contexto no dice nada), el lenguaje técnico que intimida en lugar de iluminar y la ausencia de recomendaciones (el informe dice qué pasó pero no qué hacer).

**2. El principio de la narrativa financiera**
Un buen informe financiero cuenta una historia: qué pasó, por qué pasó, qué significa para el negocio y qué vamos a hacer. Explícame cómo estructurar la narrativa financiera: el executive summary que resume los tres mensajes más importantes en tres párrafos, la comparación que da contexto (vs. presupuesto, vs. año anterior, vs. forecast), el análisis de las variaciones que importan (no todas las variaciones son iguales) y las implicaciones y recomendaciones que guían la acción.

Aplica esta estructura a un informe mensual de P&L para un CEO sin formación financiera.

**3. Las métricas correctas para cada audiencia**
El CEO necesita métricas distintas del manager de producto y del board de inversores. Guíame para seleccionar las métricas correctas según la audiencia: las métricas de negocio que el CEO necesita (revenue, margen, burn, runway, NRR), las métricas operativas que los managers de línea gestionan (coste por unidad, productividad, variación presupuestaria) y las métricas de inversión que el board monitoriza (ARR growth, Rule of 40, LTV:CAC, payback period).

**4. Simplificar sin perder rigor**
El riesgo de simplificar para audiencias no financieras es perder el rigor y transmitir una imagen incorrecta de la realidad. Explícame cómo simplificar bien: el nivel de granularidad correcto para cada audiencia (el CEO necesita el total del gasto de marketing, no el desglose por campaña), cómo usar visualizaciones que simplifican sin distorsionar y cómo incluir las caveats necesarias sin que conviertan el informe en una lectura imposible.

**5. El diseño visual del informe financiero**
Los números necesitan presentación visual para ser interpretables. Dame directrices para el diseño de un informe financiero para no financieros: el uso de colores (rojo/verde con cuidado de no abusar), las tablas vs. los gráficos (cuándo cada uno es más claro), el tamaño de fuente y la densidad de información por página y los elementos de diseño que guían la lectura del ejecutivo que tiene 5 minutos para revisar el informe.

**6. La presentación oral del informe financiero**
Muchas veces el informe escrito va acompañado de una presentación en el all-hands o en el board meeting. Explícame cómo presentar oralmente los resultados financieros a una audiencia no financiera: cómo empezar con el mensaje principal y no con los datos, cómo gestionar las preguntas sobre números que no estás preparado para responder en el momento, cómo crear la sesión de discusión sobre las implicaciones estratégicas de los resultados y cómo evitar que la presentación financiera se convierta en una sesión de preguntas técnicas.

Quiero plantillas concretas y ejemplos de before/after de informes financieros reescritos para no financieros.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Escribir informes financieros que los no financieros entienden y usan para tomar decisiones',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y documentos legales en lenguaje claro',
                'description'      => 'El movimiento del plain language en la práctica legal: escribe contratos y documentos que los no abogados entienden sin perder eficacia jurídica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en plain language legal drafting, con experiencia redactando contratos y documentos jurídicos que son comprensibles para los no abogados sin sacrificar eficacia jurídica. Voy a aprender contigo a escribir documentos legales en lenguaje claro.

Mi contexto: [describe el tipo de documento legal en el que trabajas: contratos comerciales, términos y condiciones, avisos legales, políticas internas, acuerdos con empleados o clientes]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El movimiento del plain language legal**
La mayor parte de los contratos y documentos legales están escritos de una forma que los no abogados no pueden entender, lo que los hace menos efectivos (la gente no cumple con lo que no entiende) y más costosos (requieren interpretación profesional para cualquier duda). Explícame qué es el plain language legal drafting: la filosofía detrás del movimiento, los países y organizaciones que lo han adoptado (el Plain Language Act en EEUU, la Plain English movement en el Reino Unido) y los argumentos que convencen a los abogados más tradicionales de que el lenguaje claro no debilita los documentos.

**2. Los principios del plain language aplicados a documentos legales**
Escribir en lenguaje claro no es simplificar al punto de perder precisión: es eliminar la complejidad innecesaria. Explícame los principios del plain language en documentos legales: las frases cortas que son igual de precisas que las largas con muchas oraciones subordinadas, el vocabulario activo en lugar del pasivo (la empresa pagará vs. el pago será efectuado por la empresa), la eliminación de la terminología arcaica (witnesseth, heretofore, whereas) sin perder claridad jurídica, y la estructura que guía al lector (encabezados, listas, tablas para condiciones complejas).

**3. Los contratos comerciales que los clientes entienden**
El contrato que el cliente entiende es el contrato que el cliente cumple sin necesitar a su abogado. Guíame para redactar contratos comerciales en lenguaje claro: la estructura del contrato (de la más importante para el cliente a la más técnica), cómo redactar las obligaciones principales en frases simples, cómo escribir las cláusulas de responsabilidad y limitación de garantías de forma que el cliente entienda a qué está accediendo y cómo manejar las definiciones sin que el documento se convierta en un glosario interminable.

Dame las tres cláusulas más complicadas de un contrato de servicios SaaS reescritas en lenguaje claro.

**4. Los términos y condiciones y las políticas de privacidad legibles**
Los T&C y las políticas de privacidad son los documentos legales más vistos y los menos leídos del mundo, precisamente porque nadie los entiende. Explícame cómo redactar T&C y políticas de privacidad que cumplan con los requisitos legales (GDPR, LSSICE) y que el usuario pueda leer y entender en menos de 10 minutos: la estructura (resumen ejecutivo antes de los detalles), el lenguaje (español claro, no latinismos), las tablas que simplifican los derechos del usuario y la presentación que facilita el acceso a las secciones relevantes.

**5. Los documentos internos en lenguaje claro**
Los documentos internos (políticas de empresa, reglamentos internos, acuerdos con empleados) también se benefician del plain language. Explícame cómo redactar políticas internas que los empleados entienden y siguen: el nivel de lenguaje correcto para una audiencia no jurídica, cómo estructurar las políticas para que el empleado encuentre rápidamente lo que necesita saber y cómo presentar las consecuencias del incumplimiento de forma clara sin intimidar innecesariamente.

**6. El proceso de revisión y mejora de documentos existentes**
Si tienes contratos y documentos legales existentes que quieres mejorar, necesitas un proceso sistemático. Explícame el proceso de revisión en plain language: cómo identificar las secciones que más confunden a los no abogados (dónde hacen preguntas los clientes, dónde se producen las disputas de interpretación), cómo priorizar qué mejorar primero y cómo validar que la versión mejorada es igual de robusta jurídicamente que la original.

Quiero ejemplos concretos de textos legales complicados reescritos en lenguaje claro, con la explicación de cada decisión de redacción.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Redactar documentos legales que los no abogados entienden sin perder eficacia jurídica',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Comunicación escrita con clientes difíciles',
                'description'      => 'Escribe los emails que resuelven las situaciones más complicadas con clientes: malas noticias, subidas de precio, disculpas y rechazos que mantienen la relación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con experiencia gestionando las comunicaciones más difíciles con clientes: las subidas de precio, los incidentes de servicio, los rechazos de solicitudes y las situaciones donde hay que dar malas noticias mientras se mantiene la relación. Voy a aprender contigo a escribir emails que resuelven situaciones complicadas.

Mi contexto: [describe el tipo de situación que más te cuesta comunicar por escrito con clientes: malas noticias, subidas de precio, límites del servicio, incidentes, o rechazos de solicitudes]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios de la comunicación difícil con clientes**
La comunicación difícil con clientes no es un problema de escritura: es un problema de honestidad, empatía y claridad. Explícame los principios que guían las comunicaciones complicadas: la honestidad sin rodeos (decir lo que hay que decir de forma directa pero humana), la empatía antes de la explicación (reconocer el impacto en el cliente antes de explicar el porqué), la responsabilidad sin excusas (no culpar a factores externos cuando el problema es tuyo) y la solución junto con el problema (no comunicar un problema sin al menos una opción de solución).

**2. El email de malas noticias**
Las malas noticias van mal si llegan tarde, mal explicadas o sin solución. Explícame la estructura del email de malas noticias que mantiene la relación: la apertura directa que dice lo que hay que decir desde el principio (no enterrar las malas noticias en el tercer párrafo), el contexto que explica el por qué sin parecer una excusa, el impacto concreto en este cliente específico (no un mensaje genérico) y las opciones de solución o compensación que demuestran que te importa el cliente.

Dame la estructura y un ejemplo de email para comunicar que una feature que el cliente usa va a ser deprecada.

**3. La subida de precio: el email más temido**
Comunicar una subida de precio es uno de los momentos más delicados en la relación con el cliente. Explícame cómo estructurar el email de subida de precio que minimiza el churn: el timing correcto (con suficiente antelación para que el cliente pueda planificar), el framing del valor añadido (qué ha mejorado desde la última vez que pagó), la claridad sobre cuánto sube y cuándo aplica, y la forma de gestionar la conversación de negociación que inevitablemente sigue.

Dame el email de subida de precio para un SaaS B2B que sube un 20% al año siguiente.

**4. La disculpa que restaura la confianza**
Una mala disculpa es peor que no disculparse. Explícame la estructura de la disculpa que restaura la confianza: el reconocimiento explícito de lo que salió mal (sin minimizar ni relativizar), la explicación de qué pasó (sin que parezca una excusa), la asunción de responsabilidad, lo que se ha hecho para arreglarlo, y las medidas concretas para que no vuelva a pasar. Incluye qué no poner en una disculpa (los "si alguien se ha sentido molesto", los "lamentamos los inconvenientes").

**5. El rechazo que no cierra la relación**
A veces tienes que decir que no: a una solicitud de feature fuera de roadmap, a una petición de descuento que no tiene sentido, a una personalización que no podéis hacer. Explícame cómo rechazar sin cerrar la relación: la estructura del no que empatiza antes de negar, la alternativa que ofreces cuando el no es definitivo, la forma de gestionar la presión del cliente que insiste y cómo mantener la conversación abierta aunque la respuesta sea no en este momento.

**6. El manejo de un cliente en crisis**
El cliente que está en crisis (ha sufrido un incidente grave relacionado con tu servicio, está al borde del churn, tiene problemas internos que te culpa a ti) necesita un tipo de comunicación especial. Dame el protocolo de comunicación escrita para gestionar a un cliente en crisis: la cadencia de actualizaciones durante un incidente, el escalado correcto de la comunicación (cuándo debe escribir el CSM, cuándo el VP, cuándo el CEO), el tono que combina urgencia y calma y la comunicación post-incidente que cierra el episodio y restablece la confianza.

Quiero plantillas y ejemplos reales de cada tipo de comunicación, no solo principios abstractos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Escribir emails que resuelven situaciones difíciles con clientes y mantienen la relación',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Propuestas y comunicación escrita del freelance',
                'description'      => 'La escritura es la herramienta de ventas del freelance: emails que abren puertas, propuestas que se distinguen y el estilo de comunicación que genera confianza antes de la primera llamada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de freelancers con experiencia en el mundo de los servicios profesionales independientes, especializado en ayudar a los freelancers a mejorar su comunicación escrita para conseguir mejores clientes, cobrar más y generar confianza desde el primer contacto. Voy a aprender contigo a usar la escritura como herramienta de ventas.

Mi contexto: [describe tu servicio freelance: qué haces, para quién, en qué etapa estás (nuevo, establecido, en transición a clientes más grandes) y cuál es tu principal problema de comunicación escrita]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La escritura como ventaja competitiva del freelance**
La mayoría de los freelancers tienen habilidades similares. Lo que los diferencia es cómo se comunican: el freelance que escribe bien genera confianza antes de la primera llamada, parece más profesional que la competencia y cobra más porque su comunicación comunica más valor. Explícame por qué la escritura es la herramienta de ventas más infrautilizada del freelance y los principios que la hacen efectiva: la claridad, la especificidad, el foco en el cliente y la voz auténtica.

**2. El email de outreach que abre puertas**
El email en frío es el más difícil de escribir porque el destinatario no tiene contexto ni motivación para leerlo. Explícame la estructura del email de outreach que genera respuesta: el asunto que invita a abrir (específico sobre el destinatario, no genérico), el primer párrafo que demuestra que has investigado al cliente (no "vi tu web y me pareció interesante"), el valor que ofreces en términos del problema que resuelves para ese cliente específico y la CTA que pide algo pequeño (una llamada de 15 minutos, no contratar tus servicios).

Dame tres variantes del email de outreach para mi perfil y tipo de cliente.

**3. La propuesta que se distingue**
Las propuestas de la mayoría de los freelancers son iguales: una lista de servicios, un precio y un "espero tu respuesta". Explícame la propuesta que se distingue: cómo demostrar en la propuesta que has entendido el problema del cliente (mejor que nadie), la solución específica para este cliente (no una plantilla genérica), el proceso detallado que genera confianza (el cliente sabe exactamente cómo va a ser trabajar contigo) y el precio que parece razonable porque el valor está claro.

Dame la estructura de la propuesta que usaría para un proyecto típico de mi tipo de servicio.

**4. La comunicación durante el proyecto**
La comunicación durante el proyecto determina si el cliente vuelve y si te recomienda. Explícame los principios de la comunicación durante el proyecto: el update proactivo (no esperar a que el cliente pregunte), la transparencia sobre los problemas (comunicar los obstáculos antes de que afecten al plazo), la claridad en los hitos (el cliente sabe en todo momento dónde está el proyecto) y la comunicación de cambios de alcance que mantiene la relación aunque suponga conversaciones incómodas.

**5. El email de cierre y seguimiento post-proyecto**
El proyecto ha terminado: qué pasa ahora. La mayoría de los freelancers no tienen una estrategia de cierre que maximice las referencias y las repeticiones. Explícame cómo escribir el email de cierre que siembra el siguiente proyecto: el resumen del impacto del trabajo (en términos del cliente), la solicitud de testimonial en el momento de mayor satisfacción, las opciones de continuar la relación (el mantenimiento, la expansión, el siguiente proyecto) y cómo mantener el contacto de forma que no sea molesta.

**6. Tu voz y estilo de comunicación como parte de tu marca**
El freelance que suena igual que todos los demás no tiene marca. Dame estrategias para desarrollar un estilo de comunicación escrita propio: cómo encontrar tu voz natural en los emails y propuestas (sin que suene corporativo ni informal en exceso), cómo ser consistente en todos los puntos de contacto escritos (email, propuesta, LinkedIn, web) y cómo usar tu estilo de comunicación para atraer a los clientes con los que mejor encajas.

Quiero plantillas y ejemplos concretos de comunicación escrita de freelancers que lo hacen bien, con el análisis de por qué funciona cada decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Usar la escritura como herramienta de ventas y diferenciación como freelance',
                'vote_score'       => 47,
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
