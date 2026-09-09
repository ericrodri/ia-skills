<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills252Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Knowledge management en marketing: capturar lo que funciona',
                'description'       => 'El equipo de marketing que no captura y sistematiza lo que aprende repite los mismos errores y reinventa la rueda en cada campaña. Construye el sistema de conocimiento que multiplica la efectividad del equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en gestión del conocimiento aplicado a equipos de marketing con experiencia ayudando a equipos de marketing de distintos tamaños a dejar de depender de la memoria individual de sus miembros y construir sistemas que hacen que el conocimiento del equipo sea acumulativo, accesible y transferible.

Necesito construir un sistema de gestión del conocimiento para mi equipo de marketing. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de marketing y cuáles son las principales funciones o especialidades dentro de él?
2. ¿Cuál es el mayor problema de conocimiento que tienes ahora: el conocimiento se va con las personas cuando salen, no hay acceso fácil a lo que ha funcionado antes, cada persona trabaja con sus propios sistemas, u otro?
3. ¿Qué herramientas usa ya el equipo para documentar o compartir información: Notion, Confluence, Google Drive, Slack u otras?
4. ¿Cuánto tiempo a la semana dedica el equipo actualmente a buscar información o a rehacer trabajo ya realizado?
5. ¿Cuáles son los tipos de conocimiento más críticos para tu equipo: los insights de audiencia, los learnings de campañas, los procesos de producción de contenido, las directrices de marca u otros?

Con esas respuestas, diseña el sistema completo de gestión del conocimiento:

**1. El diagnóstico del conocimiento: dónde vive lo que sabe el equipo**
Antes de construir un sistema nuevo, hay que entender dónde está el conocimiento actualmente. Define el proceso de auditoría de conocimiento: el mapeo de las fuentes de conocimiento existentes (las carpetas de Drive que nadie organiza, los Slack con conversaciones con insights que nadie recupera, los documentos de post-mortem que nadie lee, la cabeza de las personas con más experiencia), la identificación de los gaps más dolorosos (el conocimiento que el equipo busca frecuentemente y no encuentra), y la clasificación del conocimiento por tipo (el conocimiento explícito que ya está documentado aunque mal organizado, y el conocimiento tácito que está en las personas y que hay que hacer aflorar).

**2. La arquitectura del knowledge base de marketing**
Un knowledge base de marketing sin una arquitectura clara se convierte rápidamente en un cementerio de documentos que nadie consulta. Define la estructura óptima: las categorías principales adaptadas al equipo de marketing (insights de audiencia y buyer personas, directrices de marca y mensajes clave, learnings de campañas y experimentos, procesos y playbooks, recursos de producción como templates y assets, datos y benchmarks del sector), la jerarquía de profundidad que permite navegar desde lo general hasta lo específico, el sistema de etiquetado que permite la búsqueda transversal por tema, canal o tipo de contenido, y la distinción entre el conocimiento evergreen que apenas cambia y el conocimiento táctico que se actualiza con cada campaña.

**3. El sistema de captura de learnings de campañas**
El learning que no se documenta inmediatamente se pierde. Define el proceso de captura sistemática: el briefing de campaña que incluye las hipótesis explícitas que se van a testear (para poder evaluarlas al cerrar), la revisión de campaña o sprint review que ocurre siempre al cerrar cada proyecto y que produce el documento de learnings en menos de treinta minutos, la plantilla del learning de campaña que captura lo que se hizo, los resultados con métricas, qué funcionó y por qué, qué no funcionó y por qué, y la recomendación para la próxima vez, y el proceso de indexación del learning en el knowledge base para que sea recuperable.

**4. Los playbooks de marketing: el conocimiento que escala**
El playbook es el formato de conocimiento más valioso del equipo de marketing porque convierte el expertise individual en un proceso que cualquier miembro del equipo puede ejecutar. Define cómo construir playbooks efectivos: la identificación de los procesos que merecen un playbook (los que se repiten con frecuencia, los que generan más errores cuando se ejecutan sin guía, los que dependen del conocimiento de una sola persona), la estructura del playbook que es lo suficientemente detallada para que alguien nuevo pueda seguirla pero lo suficientemente concisa para que alguien ocupado la consulte, y el proceso de mantenimiento que actualiza el playbook cuando el proceso mejora.

**5. La cultura de documentación: hacer que el equipo comparta su conocimiento**
El mayor obstáculo de cualquier sistema de gestión del conocimiento no es la herramienta sino el comportamiento del equipo. Define la estrategia de adopción: los incentivos que hacen que documentar sea fácil y valioso en lugar de una tarea adicional (el documento que el miembro del equipo necesita consultar él mismo es el que documenta con más cuidado), la fricción mínima en el proceso de documentación (los formularios de captura, las plantillas pregeneradas, la integración en los workflows existentes), el rol del líder del equipo como modelo de comportamiento (el manager que documenta primero y que hace preguntas que solo están respondidas en el knowledge base), y la revisión periódica del knowledge base en las reuniones de equipo para mantenerlo vivo.

**6. La medición del impacto del knowledge management en marketing**
Un sistema de knowledge management que no se mide no mejora y no genera la inversión de tiempo que requiere. Define las métricas de impacto: el tiempo de onboarding de nuevos miembros del equipo antes y después de tener el knowledge base (el indicador más claro del valor del sistema), la frecuencia de consulta del knowledge base (cuántas búsquedas y qué documentos se consultan más, que indica dónde está el conocimiento más valioso), el tiempo ahorrado en no tener que buscar o rehacer trabajo (una estimación basada en encuesta al equipo), y la reducción de los errores repetidos que se detecta en las revisiones de campañas.

Termina con el plan de implementación en noventa días: las acciones de la primera semana para montar la estructura mínima viable, el calendario de captura del conocimiento más crítico del equipo, y los hitos que indican que el sistema está siendo adoptado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir un sistema de gestión del conocimiento para equipos de marketing que captura los learnings y escala el expertise.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Documentación de arquitectura: ADRs, wikis y onboarding técnico',
                'description'       => 'El equipo de desarrollo que no documenta bien su arquitectura paga el coste en decisiones repetidas, onboarding lento y deuda de conocimiento. Construye el sistema de documentación técnica que el equipo realmente usa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un ingeniero de software senior con experiencia construyendo sistemas de documentación de arquitectura que los equipos de desarrollo realmente usan: los Architecture Decision Records que capturan el razonamiento de las decisiones técnicas, las wikis que se mantienen actualizadas, y los materiales de onboarding técnico que llevan a un nuevo developer a ser productivo en semanas en lugar de meses.

Necesito mejorar la documentación técnica y de arquitectura de mi equipo. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de desarrollo y cuál es la complejidad de la arquitectura: monolito, microservicios, serveless, híbrido?
2. ¿Cuál es el mayor problema de conocimiento que tienes: las personas no saben por qué se tomaron ciertas decisiones técnicas, el onboarding de nuevos developers es muy lento, el conocimiento depende de una o dos personas clave, u otro?
3. ¿Qué herramientas de documentación usa ya el equipo: Confluence, Notion, GitHub wiki, docs en el repositorio, o ninguna de forma sistemática?
4. ¿Cuánto tiempo pasan los developers buscando respuestas a preguntas que deberían estar documentadas?
5. ¿Cuál es la velocidad de rotación del equipo y con qué frecuencia se incorporan nuevos developers?

Con esas respuestas, diseña el sistema de documentación técnica:

**1. Architecture Decision Records: capturar el razonamiento de las decisiones**
El ADR es el artefacto de documentación de arquitectura más valioso que existe porque responde la pregunta que más frecuentemente hace un developer que se incorpora al equipo: ¿por qué el sistema está hecho así? Define el sistema de ADRs: el formato del ADR que captura el contexto (cuál era la situación cuando se tomó la decisión), las opciones consideradas con sus trade-offs, la decisión tomada y su justificación, y las consecuencias esperadas, el proceso de creación de ADRs que los integra en el flujo de trabajo de desarrollo (el ADR se escribe antes de implementar la decisión, no después, y se revisa en la code review), la localización de los ADRs en el repositorio (en un directorio /docs/adr numerado cronológicamente para que sean parte del historial del código), y cómo gestionar los ADRs obsoletos cuando la decisión ha cambiado.

**2. La wiki técnica que se mantiene actualizada**
El cementerio de wikis con información desactualizada es el principal obstáculo para que los developers consulten la documentación existente. Define el sistema de wiki que permanece relevante: el principio de que la documentación debe vivir cerca del código para que el impulso natural de actualizar el código incluya actualizar la documentación, la distinción entre los tipos de documentación con diferentes ciclos de vida (la arquitectura de alto nivel cambia poco, los detalles de implementación cambian con cada release), el proceso de revisión periódica de la wiki (la auditoría semestral que identifica los documentos obsoletos), y la métrica de salud de la wiki que detecta cuando se está dejando de mantener.

**3. El onboarding técnico que lleva al developer a ser productivo rápidamente**
El coste del onboarding técnico lento es enorme: un developer que tarda tres meses en ser productivo en lugar de tres semanas representa semanas de productividad perdida multiplicadas por el número de incorporaciones al año. Define el sistema de onboarding técnico: el mapa de la arquitectura que da el contexto de alto nivel antes de entrar en los detalles, el diagrama de los componentes principales y sus relaciones que el developer necesita entender antes de tocar código, la guía de setup del entorno de desarrollo local que funciona sin asistencia humana (el test de esta guía es que el developer más nuevo la siga en solitario y registre los problemas), las rutas de onboarding por especialización (el developer de backend y el de frontend necesitan materiales diferentes), y los primeros tickets o tareas guiadas que permiten aprender el codebase contribuyendo desde el primer día.

**4. La documentación de los sistemas de producción**
Los runbooks, los playbooks de incidencias y la documentación operacional son los documentos más críticos del equipo y los más frecuentemente ignorados hasta que ocurre un incidente. Define la estrategia de documentación operacional: el runbook de cada servicio crítico que describe cómo desplegarlo, escalarlo, diagnosticar sus problemas más comunes y recuperarlo de un fallo, la postmortem como fuente de conocimiento (el postmortem bien escrito que captura el timeline, el análisis de causa raíz y las acciones correctivas se convierte en conocimiento que previene el siguiente incidente), y el proceso de revisión de runbooks antes de cada deploy importante que verifica que la documentación refleja el estado actual del sistema.

**5. El proceso de documentación que los developers realmente siguen**
El mayor problema de la documentación técnica no es la herramienta ni el formato: es que los developers no documentan porque lo perciben como trabajo adicional que no está en el critical path de la feature. Define la estrategia de integración en el workflow: la definición de hecho (definition of done) que incluye la documentación como criterio de completitud de una feature o un cambio de arquitectura, las plantillas de documentación que reducen el tiempo de escritura al mínimo, la revisión de la documentación como parte del proceso de code review (el revisor verifica que el cambio está documentado si era necesario), y el reconocimiento del trabajo de documentación como contribución de primer nivel igual que el código.

**6. Las métricas de salud de la documentación técnica**
Define cómo medir si el sistema de documentación funciona: el tiempo medio de onboarding de nuevos developers como indicador primario del valor del sistema (más rápido es mejor), la frecuencia de consulta de los documentos como indicador de relevancia (los documentos que nadie consulta o están mal organizados o no contienen lo que el equipo necesita), el número de preguntas repetidas en Slack o en reuniones que deberían estar respondidas en la documentación (estas son oportunidades de mejora), y la satisfacción del equipo con la documentación medida en la retro periódica.

Termina con el plan de implementación para el equipo descrito: las tres iniciativas de mayor impacto en los primeros noventa días y el criterio para saber si el sistema está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema de documentación técnica para equipos de desarrollo: ADRs, wikis actualizadas y onboarding que funciona.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design system como conocimiento compartido',
                'description'       => 'El design system no es solo una librería de componentes: es el sistema de conocimiento compartido que hace que el equipo de diseño trabaje con consistencia, velocidad y sin reinventar la rueda en cada proyecto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un design system lead con experiencia construyendo y manteniendo design systems en organizaciones de distinto tamaño: desde el design system de un equipo de cuatro diseñadores en una startup hasta el sistema que coordina el trabajo de equipos distribuidos en múltiples países. Entiendes que un design system no es un proyecto que se termina sino un producto vivo que necesita mantenimiento, gobernanza y adopción activa.

Necesito construir o mejorar el design system como herramienta de gestión del conocimiento de diseño. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de diseño y cuántos desarrolladores trabajan con el sistema de diseño?
2. ¿Tienes ya algún design system o librería de componentes existente, aunque sea parcial o informal?
3. ¿Cuáles son los principales problemas que quieres resolver: inconsistencia visual entre productos, lentitud en la producción de nuevas interfaces, falta de documentación de decisiones de diseño, dificultad de handoff con desarrollo?
4. ¿Qué herramientas usa el equipo: Figma, Sketch, Adobe XD para diseño, y Storybook, Zeroheight u otra para documentación?
5. ¿Cuál es el contexto técnico del frontend: React, Vue, Angular, tecnología propia, o una mezcla?

Con esas respuestas, diseña el design system como sistema de conocimiento:

**1. El design system como fuente única de verdad**
El design system no es solo una librería de componentes en Figma: es la documentación del lenguaje visual y de interacción del producto, las decisiones de diseño y sus justificaciones, y los patrones que el equipo ha validado con usuarios y que no hay que reinventar. Define las dimensiones del design system como knowledge base: las design tokens (los valores de color, tipografía, espaciado, sombras y radios que son las decisiones de diseño más fundamentales y que deben estar documentadas con su intención y sus reglas de uso), los principios de diseño (los criterios que guían las decisiones cuando el sistema no tiene una respuesta explícita), los patrones de interacción (las soluciones a los problemas de UX más frecuentes con la justificación de por qué este patrón y no otro), y los componentes con sus estados, variantes y guías de cuándo usar cuál.

**2. La documentación de los componentes que el equipo realmente consulta**
La documentación de un design system que solo describe lo que hace el componente sin explicar cuándo y por qué usarlo no es suficiente. Define la anatomía de la documentación de componente efectiva: la descripción del propósito del componente (qué problema resuelve y en qué contextos), las variantes disponibles con la guía de cuándo usar cada una, los estados del componente (default, hover, focus, disabled, loading, error) con sus implicaciones de accesibilidad, los ejemplos de uso correcto e incorrecto (el do y el don't que cristaliza las reglas en ejemplos visuales concretos), las guías de accesibilidad específicas del componente, y el enlace al componente de código correspondiente en la librería de desarrollo.

**3. La gobernanza del design system: quién decide, quién mantiene, cómo evoluciona**
Un design system sin gobernanza clara se fragmenta o se queda obsoleto. Define el modelo de gobernanza adaptado al tamaño del equipo: el modelo centralizado para equipos pequeños (un equipo core de design system que es la única fuente de contribuciones), el modelo federado para equipos medianos (equipos de producto que contribuyen pero con un proceso de revisión y aceptación central), el proceso de propuesta y evaluación de nuevos componentes (el criterio de cuándo un patrón que un equipo ha creado para su producto merece ser elevado al sistema compartido), y el proceso de deprecación de componentes cuando un patrón se queda obsoleto.

**4. El proceso de contribución: cómo el equipo enriquece el sistema**
El design system que solo pueden cambiar dos personas se convierte en un cuello de botella. Define el proceso de contribución que mantiene la calidad sin frenar la velocidad: la propuesta de nuevo componente o patrón (el formulario que documenta el caso de uso, los ejemplos de uso en al menos dos productos diferentes, la propuesta de diseño inicial), la revisión del design system team que evalúa la propuesta (los criterios de aceptación: reutilizabilidad, consistencia con el sistema existente, calidad de la implementación de referencia), el proceso de testing de accesibilidad y usabilidad antes de publicar, y la comunicación de los cambios al equipo.

**5. La adopción del design system: que el equipo lo use en lugar de inventarse cosas**
El mayor reto de cualquier design system es la adopción: hacer que el equipo de diseño lo consulte antes de diseñar y que el equipo de desarrollo lo use antes de implementar. Define la estrategia de adopción: la formación inicial que lleva a cada nuevo miembro del equipo a conocer el sistema antes de empezar a trabajar, el proceso de diseño que incluye como primer paso revisar el design system antes de diseñar desde cero, la revisión de diseño que verifica si se están usando los componentes existentes o si se está creando algo nuevo sin justificación, los incentivos que hacen que usar el sistema sea más fácil que no usarlo (el componente en Figma que es un clic vs. diseñar desde cero), y el canal de comunicación de actualizaciones del design system que mantiene al equipo informado de las novedades.

**6. La medición del impacto del design system**
Define las métricas que demuestran el valor del design system a la organización: la velocidad de diseño de nuevas interfaces medida en el tiempo de diseño de una pantalla estándar antes y después del sistema, la consistencia visual medida en el número de inconsistencias detectadas en las revisiones de diseño, la velocidad de desarrollo medida en el tiempo de implementación de nuevas interfaces usando los componentes del sistema vs. sin ellos, la cobertura de adopción medida en el porcentaje de componentes de los productos que usan la librería compartida, y el coste de mantenimiento del sistema en horas del equipo vs. el coste que tendría no tenerlo.

Termina con el roadmap de los primeros seis meses del design system: las prioridades de construcción o mejora basadas en el impacto y el estado actual descrito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir y mantener un design system como sistema de conocimiento compartido que acelera el diseño y garantiza la consistencia.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales playbook: el conocimiento que escala el equipo comercial',
                'description'       => 'El sales playbook transforma el arte de vender en un proceso replicable: las objeciones respondidas, los scripts que funcionan y el conocimiento del equipo top que todo el equipo puede usar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia construyendo y mejorando sales playbooks para equipos comerciales de distintos sectores y tamaños: desde el startup que quiere formalizar por primera vez su proceso de ventas hasta la empresa mediana que necesita escalar un equipo de ventas de cinco a cincuenta personas sin perder la calidad del proceso.

Necesito construir o mejorar el sales playbook de mi equipo. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo comercial actualmente y cuál es el objetivo de crecimiento en los próximos doce meses?
2. ¿Cuál es el ciclo de venta típico: cuánto dura desde el primer contacto hasta el cierre y cuántas personas suelen estar involucradas en la decisión de compra?
3. ¿Tienes ya algún proceso de ventas documentado o todo el conocimiento comercial vive en las personas más experimentadas del equipo?
4. ¿Cuáles son los principales cuellos de botella del proceso de ventas actual: la generación de leads, la cualificación, la demo, el cierre u otro?
5. ¿Cuáles son las objeciones más frecuentes que el equipo encuentra y que ralentizan o pierden los deals?

Con esas respuestas, diseña el sales playbook completo:

**1. La anatomía del sales playbook efectivo**
Un sales playbook que es un PDF de cien páginas que nadie lee no funciona. Define la estructura del playbook que el equipo usa: el resumen ejecutivo que cualquier vendedor puede leer en diez minutos y que contiene lo esencial (el ICP, la propuesta de valor, los dos o tres mensajes principales, las objeciones más comunes y sus respuestas), los módulos específicos por etapa del proceso de ventas que el vendedor consulta en el momento que los necesita, el material de referencia rápida (los one-pagers, los battle cards contra competidores, los email templates) que están organizados para acceso inmediato, y el sistema de actualización periódica que mantiene el playbook alineado con la realidad del mercado.

**2. El ICP y la cualificación: el conocimiento que evita perder tiempo**
El playbook que no define con precisión quién es el cliente ideal y cómo cualificarlo es incompleto. Define la sección de ICP y cualificación: el perfil del cliente ideal con criterios específicos y objetivos (sector, tamaño de empresa, cargo del decisor, señales de problema que indican que el cliente tiene la necesidad ahora), los criterios de cualificación del marco MEDDIC, BANT o el que use el equipo con las preguntas concretas para explorar cada dimensión, las señales de descalificación que el vendedor debe detectar temprano para no invertir tiempo en deals que no se pueden ganar, y las preguntas de discovery que ayudan al vendedor a entender el problema del prospecto antes de presentar la solución.

**3. Los mensajes de ventas y la propuesta de valor por perfil de comprador**
El CFO no compra por las mismas razones que el Director de IT, aunque los dos estén involucrados en la misma decisión de compra. Define la biblioteca de mensajes por perfil: el mensaje principal para cada tipo de stakeholder del proceso de compra (el económico que aprueba el presupuesto, el técnico que evalúa la solución, el usuario que va a trabajar con el producto diariamente), las historias de cliente para cada perfil que demuestran el valor en el lenguaje del comprador, y la guía de cuándo y cómo usar cada mensaje según la etapa del deal y el interlocutor.

**4. El manejo de objeciones: el conocimiento que diferencia a los mejores vendedores**
El vendedor top responde las objeciones de forma natural porque las ha escuchado mil veces y sabe exactamente qué funciona. Define el playbook de objeciones: el inventario de las diez objeciones más frecuentes recopilado de las conversaciones reales del equipo, para cada objeción el marco de respuesta (reconocer la objeción, reformularla si es necesario, responder con evidencia y preguntar para verificar que la respuesta ha sido satisfactoria), las diferencias en cómo responder la misma objeción según la etapa del deal (una objeción de precio en la primera llamada se maneja diferente que en la negociación final), y los errores más comunes al responder cada objeción que el coaching del manager debe corregir.

**5. El proceso de demo y presentación que convierte**
La demo es el momento de mayor palanca en la mayoría de los procesos de ventas B2B y el que más varía en calidad según el vendedor. Define el playbook de la demo: la estructura de la demo que empieza con el problema del cliente antes de mostrar el producto (el cliente que ve el producto sin contexto no conecta las features con sus necesidades), los flujos de demo para los casos de uso más comunes del ICP que permiten mostrar exactamente lo que el cliente necesita ver sin recorrer todo el producto, las preguntas de engagement durante la demo que verifican que el cliente está siguiendo y conectando con lo que ve, y el proceso de next steps al final de la demo que compromete al cliente en el siguiente paso concreto.

**6. El coaching y la mejora continua del playbook**
Un sales playbook estático pierde vigencia. Define el sistema de mejora continua: el proceso de revisión mensual del playbook basado en los deals ganados y perdidos del mes (qué mensajes, qué respuestas a objeciones y qué técnicas aparecen en los deals ganados que están en el playbook, y cuáles deberían estar pero no están), la sesión de deal review semanal donde el equipo comparte lo que ha funcionado y lo que no para actualizar el conocimiento colectivo, el proceso de onboarding de nuevos vendedores que usa el playbook como eje del proceso de formación, y la métrica de adopción del playbook (el porcentaje de vendedores que usa el material del playbook en sus conversaciones de ventas).

Termina con el plan de construcción del playbook en cuatro semanas: los módulos prioritarios para tener primero, el proceso de recopilación del conocimiento del equipo existente, y el plan de lanzamiento y adopción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir un sales playbook que captura el conocimiento del mejor vendedor y lo hace replicable en todo el equipo.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product wiki: centralizar el conocimiento del producto',
                'description'       => 'El equipo de producto que no tiene una wiki centralizada pierde tiempo buscando decisiones pasadas y onboarding nuevos PMs desde cero. Construye la product wiki que todo el equipo usa y mantiene.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de producto con experiencia construyendo y manteniendo sistemas de conocimiento de producto en organizaciones que van desde startups con un solo PM hasta empresas con veinte PMs trabajando en distintas áreas del mismo producto. Entiendes que la product wiki no es solo documentación: es la memoria colectiva del equipo de producto.

Necesito construir o mejorar la product wiki de mi equipo. Para asesorarte bien, primero pregúntame:

1. ¿Cuántos PMs hay en el equipo y cuántos ingenieros, diseñadores y otros stakeholders acceden regularmente a la documentación de producto?
2. ¿Cuál es el mayor problema de conocimiento que tienes: no se recuerdan las decisiones pasadas y el razonamiento detrás, el onboarding de nuevos PMs es muy lento, los stakeholders no tienen visibilidad del estado del producto, u otro?
3. ¿Qué herramientas usa ya el equipo para documentar: Notion, Confluence, Google Docs, Linear, Jira u otras?
4. ¿Cuántos productos o áreas de producto distintas necesitan estar representadas en la wiki?
5. ¿Cuál es la disciplina del equipo con la documentación actual: hay algo documentado aunque de forma caótica, o se parte prácticamente desde cero?

Con esas respuestas, diseña el sistema completo de product wiki:

**1. La arquitectura de la product wiki: lo que el equipo busca y encuentra**
Una wiki sin arquitectura es una colección de documentos que nadie puede navegar. Define la estructura óptima para la product wiki: las secciones de primer nivel (el producto en su conjunto con visión y estrategia, las áreas o squads con sus respectivos roadmaps y decisiones, los procesos del equipo de producto, el conocimiento de usuarios y mercado, la historia del producto con decisiones pasadas y sus justificaciones), la profundidad de cada sección según la complejidad del producto, el sistema de navegación que permite llegar al documento correcto en menos de tres clics, y la distinción entre los documentos de referencia que son estables y los documentos de trabajo que cambian frecuentemente.

**2. Los Product Requirements Documents y los documentos de decisión**
El PRD y sus equivalentes modernos son el conocimiento más valioso del PM porque capturan el porqué de las decisiones de producto. Define el sistema de documentación de decisiones: la plantilla del PRD o spec que incluye el problema a resolver y la evidencia que lo valida, las opciones consideradas con sus trade-offs, la decisión tomada y su justificación, los criterios de éxito que se van a medir, y las hipótesis que la decisión pretende validar, el proceso de revisión y aprobación del PRD que garantiza el alineamiento antes de que el equipo empiece a construir, y el sistema de versioning que preserva el histórico de cambios en el documento cuando la spec evoluciona.

**3. El roadmap como conocimiento compartido**
El roadmap no es solo un plan: es la comunicación de las prioridades y el razonamiento estratégico del equipo de producto a todos los stakeholders. Define el sistema de roadmap en la wiki: los diferentes niveles de granularidad del roadmap (el roadmap estratégico de doce a dieciocho meses para la dirección, el roadmap táctico de seis meses para los equipos de desarrollo, el now-next-later para la comunicación general), el proceso de actualización del roadmap y la comunicación de los cambios, la documentación de las decisiones de priorización que explica por qué X está en el roadmap y Y no (la pregunta más frecuente que recibe el PM de los stakeholders), y la distinción entre el roadmap de compromisos y el roadmap de intenciones.

**4. El conocimiento de usuarios: centralizar lo que el equipo sabe sobre el cliente**
El conocimiento de usuarios es el activo más valioso del equipo de producto y el más disperso. Define el repositorio de conocimiento de usuario: el sistema de insights de investigación que recoge los hallazgos de cada estudio de usuario, test de usabilidad, entrevista y encuesta en un lugar accesible y buscable, las buyer personas actualizadas con la evidencia en la que se basan, el mapa de jobs-to-be-done del usuario que captura las necesidades más profundas detrás de las peticiones de funcionalidades, y el proceso de actualización del conocimiento de usuario cuando la investigación produce nuevos hallazgos que contradicen o matizan lo que se creía antes.

**5. El onboarding del PM: la wiki como acelerador de productividad**
Un nuevo PM que puede encontrar en la wiki todo el contexto que necesita llega a ser productivo mucho más rápido que uno que tiene que preguntar a todo el mundo. Define el programa de onboarding basado en la wiki: la ruta de lectura recomendada para los primeros catorce días (los documentos en el orden correcto para construir el modelo mental del producto, el equipo y la empresa), los documentos must-read que todo PM debe conocer independientemente de su área (la visión del producto, los principios de diseño, la estrategia de la empresa, el proceso de desarrollo del equipo), y el buddy de onboarding que guía al nuevo PM por la wiki y responde las preguntas que no están respondidas.

**6. La cultura de documentación del equipo de producto**
La wiki más bien diseñada no funciona si el equipo no la alimenta. Define la estrategia de adopción y mantenimiento: la norma de que toda decisión de producto relevante va a la wiki antes de comunicarse por Slack o en reunión (lo que se decide en Slack se pierde; lo que va a la wiki se preserva), la revisión trimestral de la wiki que audita los documentos obsoletos y los elimina o actualiza, la asignación de ownership de las secciones de la wiki a los PMs correspondientes, y la integración de la actualización de la wiki en el proceso de desarrollo (la feature que se lanza actualiza la spec correspondiente; la decisión que se toma en la sprint planning va al decision log).

Termina con el plan de noventa días para construir la product wiki mínima viable: los documentos prioritarios para crear primero, el proceso de migración del conocimiento existente disperso, y los hitos de adopción que indican que el sistema está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir una product wiki que centraliza el conocimiento del equipo de producto y acelera el onboarding y la toma de decisiones.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del conocimiento organizacional: no perder lo que saben los que se van',
                'description'       => 'Cuando un empleado clave sale de la organización, se lleva conocimiento crítico que tardará meses en reconstruirse. Diseña el sistema que captura y preserva el conocimiento antes de que se pierda.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en gestión del conocimiento organizacional con experiencia ayudando a organizaciones de distintos sectores a diseñar sistemas que capturan el conocimiento crítico de sus empleados, especialmente en los momentos de transición como las salidas de personas clave, las reestructuraciones o el crecimiento rápido que incorpora muchos nuevos miembros.

Necesito construir un sistema de gestión del conocimiento organizacional. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño de la organización y cuál es la función o el departamento en el que el problema de pérdida de conocimiento es más crítico?
2. ¿Cuál ha sido el detonante de esta iniciativa: la salida reciente de alguien clave, el crecimiento rápido que hace evidente la falta de sistemas, una reestructuración inminente, o una reflexión proactiva?
3. ¿Qué tipos de conocimiento son más críticos: los procesos operativos, las relaciones con clientes y proveedores, el expertise técnico, el know-how de gestión, u otro?
4. ¿Tiene la organización ya alguna cultura de documentación o es prácticamente inexistente?
5. ¿Cuáles son las herramientas disponibles para la gestión del conocimiento: intranet, SharePoint, Notion, Google Workspace u otras?

Con esas respuestas, diseña el sistema de gestión del conocimiento:

**1. El mapa de conocimiento crítico: saber qué no se puede perder**
Antes de diseñar el sistema de captura, hay que identificar qué conocimiento es verdaderamente crítico. Define el proceso de mapeo: la identificación de los conocimiento holders (las personas que tienen conocimiento que nadie más tiene, o que lo tienen de forma mucho más profunda que los demás), la clasificación del conocimiento por criticidad (el conocimiento que si se pierde impacta directamente en el negocio vs. el que puede reconstruirse) y por reemplazabilidad (el conocimiento que está documentado aunque sea parcialmente vs. el que solo existe en la mente de una persona), y el análisis de riesgo que identifica qué personas, si salieran mañana, causarían el mayor daño organizacional.

**2. El proceso de knowledge transfer: cómo extraer lo que saben las personas**
El conocimiento tácito es el más valioso y el más difícil de capturar porque quien lo tiene a menudo no puede articularlo de forma consciente. Define los métodos de extracción de conocimiento tácito: las entrevistas de conocimiento estructuradas (las preguntas que hacen que el experto explique no solo qué hace sino por qué y cómo decide, que es donde está el conocimiento real), el shadowing documentado (observar al experto en acción y documentar lo que hace en situaciones reales que revelan el know-how que no puede articular en una conversación), y el proceso de knowledge transfer entre la persona que sale o está en riesgo de salir y su sucesor, con sesiones estructuradas y un plan de transferencia que cubre las áreas de conocimiento prioritarias.

**3. Los procesos de offboarding como oportunidad de captura de conocimiento**
El offboarding es el momento más crítico para la captura de conocimiento y el más frecuentemente malutilizado. Define el proceso de offboarding para la transferencia de conocimiento: el inventario de conocimiento que el empleado que sale debe completar (los proyectos activos y su estado, los contactos clave y el contexto de cada relación, los procesos que gestiona y los documentos donde están documentados, las cosas que nadie más sabe de los sistemas que gestiona), el periodo de solapamiento con el sucesor que permite la transferencia práctica del conocimiento en acción, y el sistema de contactabilidad post-salida para los casos en que emergen preguntas que no se anticiparon durante el offboarding.

**4. El sistema de documentación del conocimiento organizacional**
El conocimiento capturado que no está organizado y accesible es casi tan inútil como el que no se ha capturado. Define la arquitectura del sistema de conocimiento organizacional: las categorías de conocimiento que tienen sentido para la organización (los procesos operativos por área funcional, el conocimiento de clientes y relaciones externas, el expertise técnico y metodológico, el conocimiento institucional sobre la historia y las decisiones pasadas), el nivel de detalle adecuado para cada tipo de documento (el proceso que alguien nuevo necesita ejecutar requiere más detalle que el contexto histórico de una decisión), y el sistema de búsqueda y recuperación que hace que el conocimiento documentado sea encontrable cuando se necesita.

**5. La cultura de documentación: de la excepción al hábito**
El mayor obstáculo de la gestión del conocimiento organizacional es hacer que las personas documenten de forma habitual y no solo en situaciones de crisis. Define la estrategia de cambio cultural: el liderazgo visible de la dirección que modela el comportamiento (el manager que documenta lo que decide y lo comparte en la plataforma de conocimiento), los incentivos que hacen que documentar sea reconocido como contribución de valor (no solo el resultado del trabajo sino el conocimiento que genera el trabajo), la reducción de la fricción de documentación (las plantillas que hacen fácil documentar, la integración de la documentación en los flujos de trabajo existentes), y la comunicación regular del valor del sistema (los casos en que el sistema de conocimiento ha evitado un problema o acelerado la resolución de uno).

**6. La medición del impacto de la gestión del conocimiento**
Define cómo medir si el sistema de gestión del conocimiento funciona: la velocidad de onboarding de nuevos empleados como proxy de la calidad del conocimiento documentado (si los nuevos son más productivos más rápido, el sistema funciona), el número de conocimiento holders únicos que han pasado por el proceso de knowledge capture (la cobertura del riesgo de concentración de conocimiento), la frecuencia de consulta del knowledge base (los documentos que nadie consulta no están respondiendo las necesidades reales del equipo), y el impacto de las salidas de personas después de implementar el sistema comparado con antes (el tiempo de recuperación del conocimiento perdido).

Termina con el plan de implementación prioritaria para la situación descrita: las iniciativas de mayor impacto inmediato para el riesgo de conocimiento más crítico identificado, y el roadmap de los siguientes seis meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema de gestión del conocimiento organizacional que captura el expertise crítico antes de que se pierda con las salidas de personal.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial knowledge base: procesos, políticas y lecciones aprendidas',
                'description'       => 'El departamento de finanzas que no tiene sus procesos documentados depende de personas que no son escalables. Construye la base de conocimiento financiero que hace el equipo más resiliente y eficiente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con experiencia construyendo la infraestructura de conocimiento de departamentos de finanzas: los procesos documentados de cierre mensual, las políticas financieras que guían las decisiones del equipo, los procedimientos de control interno, y los registros de lecciones aprendidas de los momentos críticos que han ocurrido en el pasado.

Necesito construir la base de conocimiento del departamento de finanzas. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de finanzas y cuáles son sus principales funciones: contabilidad, controlling, tesorería, fiscalidad, M&A u otras?
2. ¿Cuál es el mayor problema de conocimiento del departamento: los procesos dependen de una o dos personas, hay inconsistencias en cómo se ejecutan los mismos procesos, el onboarding es muy lento, o los errores se repiten porque no se documenta lo que pasó?
3. ¿Qué herramientas usa el equipo para documentar actualmente: Excel, Word en carpetas compartidas, SharePoint, Notion, u otras?
4. ¿Cuál es el nivel de madurez de los procesos: están definidos aunque sea informalmente, o hay que definirlos al mismo tiempo que documentarlos?
5. ¿Cuáles son los procesos más críticos donde un error o una salida de personal causaría mayor impacto?

Con esas respuestas, diseña el sistema de conocimiento financiero:

**1. El inventario de procesos críticos: saber qué necesita documentarse primero**
Antes de documentar, hay que priorizar. Define el proceso de inventario y priorización: el mapeo de todos los procesos del departamento (el cierre mensual, la conciliación bancaria, el proceso de pagos a proveedores, el ciclo de reporting, los procesos de compliance fiscal, el proceso de auditoría interna), la clasificación por criticidad y por concentración de conocimiento (los procesos que dependen de una sola persona son los de mayor riesgo), y el criterio de priorización para documentar primero los de mayor impacto y mayor riesgo de pérdida de conocimiento.

**2. Los procedimientos de operación estándar en finanzas**
El SOP del departamento de finanzas tiene requisitos de precisión y verificabilidad únicos porque los errores tienen consecuencias directas en los estados financieros y en el cumplimiento normativo. Define la estructura del procedimiento financiero efectivo: el propósito del procedimiento y su alcance, los roles y responsabilidades en cada paso, el procedimiento paso a paso con los sistemas y las referencias exactas que se usan en cada uno (el campo del ERP, el template de Excel, el sistema de aprobación), los controles internos integrados en el procedimiento (las verificaciones que detectan errores antes de que impacten en los estados financieros), y los criterios de excepción y escalado cuando el procedimiento no cubre un caso particular.

**3. Las políticas financieras: el conocimiento que guía las decisiones**
Las políticas financieras son el conocimiento que permite al equipo tomar decisiones consistentes sin tener que escalar cada caso al director. Define el sistema de políticas financieras: la política de gastos (quién puede aprobar qué importes, qué es un gasto elegible, cómo se justifica), la política de crédito y cobros (los plazos de pago estándar, el proceso de seguimiento de impagados, los criterios para activar medidas de cobro más agresivas), la política de tesorería (los límites de cash mínimo, los instrumentos de inversión autorizados, el proceso de gestión de divisa), y la política de control de compromisos (el proceso de aprobación de contratos y compromisos de gasto que vinculan a la empresa).

**4. El registro de lecciones aprendidas de finanzas**
Los errores del pasado son el conocimiento más valioso si se documentan correctamente. Define el sistema de registro de lecciones aprendidas: el proceso de documentación post-incidente (el error de cierre que costó corregir, la discrepancia de auditoría, la estimación fiscal incorrecta que generó una sanción) que captura qué pasó, cuál fue el impacto, cuál fue la causa raíz y qué control o procedimiento se añadió para evitar que vuelva a ocurrir, el registro de lecciones aprendidas en el knowledge base que es accesible al equipo, y la revisión periódica de las lecciones aprendidas en las sesiones de equipo que refuerza el aprendizaje.

**5. El onboarding del nuevo miembro del equipo de finanzas**
Un contable o controller nuevo que necesita meses para entender los procesos del departamento es un riesgo operativo y un coste. Define el programa de onboarding basado en el knowledge base: la ruta de lectura de los primeros dos días (los documentos que dan el contexto del departamento, la empresa y los sistemas), las prácticas supervisadas de los primeros catorce días donde el nuevo miembro ejecuta los procedimientos con un buddy que verifica y responde preguntas, los criterios de competencia para cada proceso (el nuevo miembro puede ejecutar el proceso de forma autónoma cuando supera la verificación), y el feedback loop que usa las preguntas y confusiones del nuevo miembro para mejorar la documentación.

**6. El mantenimiento del knowledge base financiero**
Un knowledge base que no se actualiza después de los cambios normativos, de sistemas o de procesos es peor que no tener uno porque da una falsa sensación de seguridad. Define el proceso de mantenimiento: el trigger de actualización del knowledge base (cualquier cambio en la normativa aplicable, en el ERP o en los sistemas financieros, en la organización del equipo o en los procesos desencadena la revisión de los documentos afectados), la asignación de ownership de cada sección del knowledge base a un miembro del equipo responsable de su mantenimiento, y la auditoría semestral que revisa todos los documentos y verifica que reflejan el estado actual de los procesos.

Termina con el plan de los primeros noventa días para el departamento de finanzas descrito: los procesos prioritarios para documentar primero, el equipo que participa en la documentación, y el calendario de revisión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir la base de conocimiento del departamento de finanzas: SOPs, políticas, procedimientos y lecciones aprendidas.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Knowledge management jurídico: plantillas, precedentes y doctrina interna',
                'description'       => 'El despacho o departamento jurídico que no gestiona su conocimiento reinventa la rueda en cada asunto. Construye el sistema que captura los precedentes, las plantillas y el criterio jurídico del equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director jurídico con experiencia construyendo sistemas de gestión del conocimiento jurídico en despachos de abogados y en departamentos legales internos de empresas. Sabes que el conocimiento jurídico más valioso es el que está en los documentos ya negociados, en los argumentos que han funcionado ante los tribunales y en los criterios de interpretación que el equipo ha desarrollado a lo largo de los asuntos que ha tramitado.

Necesito construir el sistema de gestión del conocimiento del equipo jurídico. Para asesorarte bien, primero pregúntame:

1. ¿Es un despacho de abogados externo o un departamento jurídico interno de una empresa? ¿Cuántos abogados tiene el equipo?
2. ¿Cuáles son las principales especialidades jurídicas del equipo?
3. ¿Cuál es el mayor problema de conocimiento que tienes: los abogados no comparten las plantillas ni los precedentes, el conocimiento está en silos por especialidad, el onboarding de nuevos abogados es muy lento, u otro?
4. ¿Qué herramientas usa el equipo para gestionar los documentos: sistemas de gestión documental como iManage o NetDocuments, Google Drive, SharePoint, u otros?
5. ¿Cuánto tiempo estima el equipo que se pierde buscando plantillas, precedentes o criterios que deberían estar centralizados?

Con esas respuestas, diseña el sistema de gestión del conocimiento jurídico:

**1. La biblioteca de plantillas y precedentes como activo estratégico**
El documento más valioso de un despacho no es el que está ahora mismo en redacción: es el contrato que fue negociado durante seis meses y que contiene el equilibrio de cláusulas que el cliente aceptó, o el alegato que convenció al tribunal y cuya argumentación puede reutilizarse. Define el sistema de gestión de plantillas y precedentes: el proceso de selección de los documentos que merecen ser transformados en plantilla (los contratos de alta frecuencia, las demandas en asuntos recurrentes, los memos de análisis jurídico sobre cuestiones habituales), el proceso de anonimización y abstracción del documento específico en plantilla reutilizable, y el sistema de metadatos que hace encontrable la plantilla correcta cuando se necesita.

**2. La doctrina interna: el criterio jurídico del equipo**
El criterio jurídico del equipo sobre las cuestiones recurrentes es el conocimiento más difícil de documentar y el más valioso para la consistencia y la calidad. Define el sistema de doctrina interna: los memos de criterio (el documento que fija la posición del equipo sobre una cuestión jurídica recurrente, por ejemplo cómo interpretar una cláusula estándar, qué nivel de riesgo es aceptable en un tipo de contrato concreto), el proceso de actualización cuando hay cambios normativos o jurisprudenciales que cambian el criterio, y la integración de la doctrina interna en el proceso de trabajo de los abogados más junior que consultan el criterio antes de redactar o de aconsejar.

**3. El sistema de búsqueda de precedentes por parámetros relevantes**
El precedente más valioso es el que el abogado puede encontrar cuando tiene un asunto similar. Define el sistema de búsqueda: los metadatos que deben acompañar a cada precedente (el tipo de documento, la materia jurídica, la especialidad, el cliente tipo, el resultado, las cláusulas más relevantes), el sistema de búsqueda por parámetros que permite filtrar precedentes por materia, tipo de cláusula o tipo de asunto, y el proceso de indexación de los nuevos documentos para que el sistema de precedentes crezca con cada asunto que se tramita.

**4. El conocimiento de clientes y sectores: la inteligencia que se acumula**
El abogado que lleva cinco años trabajando para el sector de energías renovables ha acumulado un conocimiento del sector, de sus particularidades regulatorias y de la tolerancia al riesgo de sus actores que es extremadamente valioso. Define el sistema de captura del conocimiento sectorial: los perfiles de sector que recogen la regulación aplicable, los actores principales, las prácticas de mercado y las tendencias, los perfiles de cliente que documentan las preferencias de negociación, los criterios internos de aprobación y las personas de contacto en cada empresa cliente, y el proceso de actualización periódica de estos perfiles que mantienen el conocimiento relevante.

**5. El onboarding del abogado junior: el knowledge base como acelerador**
El abogado junior que tiene acceso a la doctrina interna, las plantillas comentadas y los precedentes del equipo aprende en meses lo que de otra forma llevaría años de trabajo y de preguntar a los socios. Define el programa de onboarding jurídico basado en el knowledge base: la ruta de conocimiento por especialidad que el junior recorre en las primeras semanas (los memos de criterio de su área, las plantillas más importantes con sus comentarios explicativos, los asuntos ejemplares que ilustran cómo trabaja el equipo), el proceso de supervisión de los primeros trabajos que usa el feedback como oportunidad de enriquecer el knowledge base cuando el junior hace una pregunta que no está respondida en él.

**6. La cultura de contribución al knowledge base jurídico**
El sistema de conocimiento jurídico que solo alimentan dos o tres personas se convierte en un cuello de botella. Define la estrategia de adopción: la integración de la contribución al knowledge base en el proceso de cierre de asuntos (al cerrar un asunto, el abogado identifica si hay algún documento o criterio que merece añadirse al sistema), el reconocimiento de la contribución al knowledge base como trabajo de valor (equivalente a la facturación en términos de reconocimiento de rendimiento), y la revisión periódica del estado del knowledge base por el socio o director jurídico que mantiene vivo el compromiso con el sistema.

Termina con el plan de los primeros noventa días: los tres pilares del sistema de conocimiento jurídico que deben estar operativos al final del trimestre y el proceso de construcción de cada uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema de gestión del conocimiento jurídico: plantillas, precedentes, doctrina interna y onboarding de abogados.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS knowledge base: el centro de ayuda que reduce tickets',
                'description'       => 'El knowledge base de Customer Success que funciona reduce el volumen de tickets, acelera la resolución y empodera al cliente para resolver sus propios problemas. Diseña el sistema que lo consigue.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia diseñando y optimizando knowledge bases y centros de ayuda que tienen un impacto medible en la reducción de tickets de soporte y en la satisfacción del cliente. Entiendes que el mejor ticket de soporte es el que nunca se abre porque el cliente encontró la respuesta en el help center antes de escribir al equipo.

Necesito construir o mejorar el knowledge base de Customer Success de mi empresa. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo de producto o servicio que soportas y cuál es el perfil de usuario: técnico, no técnico, o una mezcla?
2. ¿Cuál es el volumen actual de tickets de soporte al mes y cuáles son los temas más frecuentes?
3. ¿Tienes ya un help center o knowledge base existente? Si es así, ¿cuántos artículos tiene y cuánto tráfico recibe?
4. ¿Cuántos agentes de CS tiene el equipo y cuánto tiempo dedican a responder preguntas que podrían estar respondidas en el help center?
5. ¿Cuál es la plataforma que usas o planeas usar: Zendesk Guide, Intercom, Notion público, GitBook, Freshdesk u otra?

Con esas respuestas, diseña el sistema completo de knowledge base para CS:

**1. La estrategia de contenido del knowledge base: qué artículos crear primero**
Crear artículos al azar no produce un knowledge base que defecta tickets; crear los artículos correctos en el orden correcto sí. Define la estrategia de contenido basada en datos: el análisis de los tickets más frecuentes de los últimos tres meses que identifica los temas con mayor potencial de deflexión (si el treinta por ciento de los tickets preguntan lo mismo, ese tema merece el mejor artículo del help center), la priorización por impacto (los temas frecuentes y simples de explicar tienen el mayor ROI), la identificación de los gaps (las preguntas que el equipo responde en tickets que no están respondidas en el help center), y la estrategia para los temas complejos que no pueden reducirse a un artículo sino que requieren una serie o una guía estructurada.

**2. La estructura de artículos que responde antes de que el usuario termine de preguntar**
El artículo de knowledge base efectivo responde la pregunta específica que el usuario tiene en el momento en que la tiene, en el tiempo mínimo posible. Define la plantilla del artículo que funciona: el título en forma de pregunta o de solución que coincide con cómo el usuario formula la búsqueda, la respuesta directa en el primer párrafo (sin preámbulos que hacen que el usuario tenga que leer antes de llegar a lo que busca), el desarrollo con pasos numerados para los procedimientos o con secciones claras para la información conceptual, las capturas de pantalla o vídeos cortos para los procedimientos complejos, y los artículos relacionados al final que ayudan al usuario a resolver el problema siguiente que tendrá después de resolver este.

**3. La organización del help center: estructura que el usuario navega sin perderse**
Un help center con mil artículos sin organización clara es peor que uno con cien artículos bien estructurados porque frustrar al usuario que busca es peor que no tener el artículo. Define la arquitectura del help center: las categorías de primer nivel que organizan el contenido por área del producto o por tipo de tarea del usuario (no por la estructura interna de la empresa), la profundidad adecuada de la jerarquía (dos o tres niveles es el máximo navegable), la página de inicio del help center que destaca los artículos más buscados y las novedades, y el sistema de búsqueda que devuelve resultados relevantes incluso cuando el usuario usa terminología diferente a la del artículo.

**4. El proceso de creación y mantenimiento del contenido del help center**
El knowledge base que se desactualiza cuando el producto cambia daña la confianza del usuario y genera más tickets, no menos. Define el proceso de creación y mantenimiento: el flujo de creación de nuevos artículos (quién los crea, quién los revisa, quién los aprueba antes de publicar), la integración del help center con el proceso de desarrollo del producto (cada release de producto que cambia la interfaz o los flujos del usuario dispara la actualización de los artículos afectados), el proceso de identificación de artículos obsoletos (la señal de que un artículo tiene muchas valoraciones negativas o genera tickets de seguimiento indica que no está funcionando), y la cadencia de revisión periódica de los artículos de mayor tráfico.

**5. La deflexión de tickets: integrar el knowledge base en el flujo de soporte**
El knowledge base que solo existe en una URL separada tiene mucho menos impacto en la deflexión que el que está integrado en los puntos donde el usuario busca ayuda. Define las estrategias de deflexión activa: el widget de búsqueda del help center integrado en el formulario de creación de ticket (cuando el usuario empieza a escribir su pregunta, el widget sugiere artículos relevantes y muchos usuarios encuentran la respuesta sin abrir el ticket), el chatbot que usa el knowledge base como base de respuestas para las preguntas más comunes antes de conectar con un agente humano, y la firma de los agentes de CS que incluye links a los artículos relevantes en cada respuesta de ticket para que el usuario pueda encontrar información adicional.

**6. La medición del impacto del knowledge base**
Define el sistema de métricas que demuestra el ROI del knowledge base: el ticket deflection rate (el porcentaje de sesiones del help center que terminan sin que el usuario abra un ticket, que es el indicador primario de efectividad), el tiempo de resolución medio de los tickets que incluyen un link al help center vs. los que no (los artículos del help center que reducen el tiempo de resolución son más valiosos que los que simplemente informan), la valoración de artículos (el porcentaje de usuarios que lo marcan como útil, con un análisis de por qué los artículos con baja valoración no funcionan), y el costo por ticket antes y después de la implementación del knowledge base.

Termina con el plan de lanzamiento del knowledge base mínimo viable en treinta días: los diez artículos que deberías publicar primero para el mayor impacto en deflexión, el proceso de publicación y el plan de promoción al equipo y a los clientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar un knowledge base de Customer Success que reduce el volumen de tickets y empodera al cliente para resolver sus propios problemas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión del conocimiento del freelance: sistemas personales de PKM',
                'description'       => 'El freelance que no gestiona su conocimiento personal pierde tiempo buscando lo que ya sabe, reinventa soluciones que ya ha encontrado y no capitaliza lo que aprende en cada proyecto. Diseña tu sistema de PKM.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en productividad y gestión del conocimiento personal con experiencia ayudando a profesionales independientes y freelances a construir sistemas de Personal Knowledge Management (PKM) que les hacen más productivos, más creativos y más capaces de ofrecer trabajo de mayor calidad a sus clientes sin invertir más tiempo.

Necesito construir mi sistema de gestión del conocimiento personal como freelance. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad como freelance y qué tipo de conocimiento es más crítico para tu trabajo: conocimiento técnico, metodológico, de sector, de clientes, creativo u otro?
2. ¿Cuál es el mayor problema que tienes con tu gestión del conocimiento actual: no encuentras lo que has aprendido, no tienes hábito de capturar lo que aprendes, tienes demasiados sistemas distintos que no conectan entre sí, u otro?
3. ¿Qué herramientas usas actualmente para tomar notas y gestionar información: Notion, Obsidian, Roam, Apple Notes, OneNote, o directamente no usas nada sistemático?
4. ¿Cuánto tiempo estimas que pierdes a la semana buscando información que ya tenías o rehaciendo trabajo de investigación o análisis que ya habías hecho?
5. ¿Cuáles son los tipos de proyectos o tareas en los que más recurrirías a un sistema de conocimiento bien construido?

Con esas respuestas, diseña el sistema de PKM personalizado:

**1. Los principios del PKM efectivo para el freelance**
El PKM del freelance tiene requisitos específicos que lo diferencian del PKM del estudiante o del trabajador corporativo: el freelance necesita un sistema que funcione sin estructura corporativa, que se adapte a proyectos discontinuos de distintos clientes y sectores, y que produzca valor tangible en forma de mejor trabajo en menos tiempo. Define los principios fundacionales: la captura ubicua (el sistema de PKM que no captura en el momento en que el pensamiento ocurre pierde el ochenta por ciento de su valor), la organización orientada a la acción (organizar por proyectos y áreas de responsabilidad en lugar de por categorías abstractas), la revisión periódica (el conocimiento que no se revisa se olvida; el sistema que no se revisa se convierte en un cementerio de notas), y la segunda utilidad (cada nota debe estar escrita pensando en el yo futuro que la leerá en un contexto diferente).

**2. El sistema de captura: no perder lo que aprendes**
La captura es el eslabón más frágil del PKM porque ocurre en contextos donde no tienes tiempo de hacer una buena nota. Define el sistema de captura rápida: la herramienta de captura de inbox (una sola herramienta para todo lo que captura, sin fricción, que funciona en el móvil y en el escritorio, que no requiere organización en el momento de la captura), los formatos de captura para distintos tipos de entrada (el artículo que quieres leer después, la idea que se te ocurre en la ducha, el aprendizaje de un proyecto que quieres preservar, el dato o la referencia que vas a necesitar), y el proceso de procesamiento del inbox periódico que mueve lo capturado al lugar correcto del sistema.

**3. La organización del conocimiento: un sistema que crece contigo**
El sistema de organización del PKM que funciona para un freelance en su primer año no es el mismo que necesita en su décimo. Define el sistema de organización escalable: el método PARA (Proyectos activos, Áreas de responsabilidad, Recursos temáticos y Archivo) como punto de partida que organiza el conocimiento por utilidad futura en lugar de por categoría abstracta, la adaptación del método PARA para el contexto del freelance (los proyectos de clientes, las áreas de especialidad del negocio, los recursos por tema que son relevantes para el trabajo), y el principio de la organización mínima viable (no invertir tiempo en una taxonomía perfecta que cambiará; dejar que el sistema evolucione con el uso).

**4. El procesamiento y la elaboración: convertir información en conocimiento**
El PKM que solo captura y organiza información es un repositorio, no un sistema de conocimiento. El conocimiento real se produce cuando el freelance elabora la información capturada y la conecta con lo que ya sabe. Define el proceso de elaboración: la nota atómica (el concepto de escribir cada idea en su propia nota de forma que pueda conectarse con otras notas de forma flexible), las conexiones entre notas (el enlace entre la idea nueva y las ideas relacionadas existentes que produce el grafo de conocimiento que acelera el pensamiento), la nota de síntesis (el documento que integra múltiples fuentes y notas sobre un tema en una comprensión propia del freelance), y el proceso de revisión espaciada que consolida el conocimiento a largo plazo.

**5. Los sistemas de referencia para el trabajo del freelance**
Además del conocimiento en proceso de elaboración, el freelance necesita sistemas de referencia de acceso rápido que le evitan perder tiempo buscando. Define los sistemas de referencia del freelance: la biblioteca de recursos por especialidad (los mejores artículos, libros, estudios y referencias del sector ordenados por tema con una nota que resume por qué cada recurso es valioso), el archivo de proyectos anteriores con las lecciones aprendidas (el sistema que hace que el siguiente proyecto parecido se beneficie de todo lo que aprendiste en el anterior), las plantillas y checklists reutilizables que aceleran el trabajo recurrente (el brief de cliente, la checklist de entrega, el informe post-proyecto), y el archivo de citas e ideas que alimenta el trabajo creativo y las propuestas.

**6. El hábito de mantenimiento del PKM: el sistema que no se abandona**
El mayor graveyard de sistemas de PKM son las personas que los construyen con entusiasmo y los abandonan en dos semanas. Define el sistema de mantenimiento sostenible: la revisión diaria de inbox que vacía la bandeja de entrada en menos de diez minutos, la revisión semanal del sistema que procesa las notas en bruto, conecta ideas y planifica el contenido de la semana siguiente, la revisión mensual que audita los proyectos activos y archiva los completados, y el principio de la complejidad mínima (el sistema de PKM que funciona es el más simple que cubre las necesidades del freelance, no el más sofisticado que existe).

Termina con el diseño del sistema específico para el freelance basado en las herramientas y las necesidades descritas: la estructura de organización recomendada, el workflow de captura y procesamiento, y el plan de implementación en las primeras dos semanas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema de gestión del conocimiento personal (PKM) para freelances que captura lo aprendido y lo convierte en ventaja competitiva.',
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
