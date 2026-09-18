<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills293Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Voice of customer: sistemas para capturar y actuar sobre la voz del cliente en marketing',
                'description'      => 'Construye un sistema de escucha del cliente que convierte insights en mensajes, productos y campañas más efectivas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en investigación de mercado y estrategia de marketing con especialización en programas de Voice of Customer (VoC). Necesito diseñar un sistema sistemático para capturar la voz del cliente y convertirla en decisiones de marketing concretas.

Contexto de mi empresa:
Trabajo en el equipo de marketing de [empresa, sector, tipo de producto o servicio]. Nuestro cliente ideal es [perfil]. Actualmente recibimos feedback de forma irregular a través de [menciona los canales que usas: soporte, redes sociales, encuestas esporádicas, etc.]. El principal problema es que [no sabemos qué mensajes resuenan, nuestro copy no conecta, lanzamos campañas sin validación previa, etc.].

Lo que necesito:

1. MAPA DE FUENTES DE ESCUCHA DEL CLIENTE
Define las diez fuentes principales de datos de voz del cliente que debe monitorizar marketing: reseñas en Google, App Store y Trustpilot, conversaciones en redes sociales y grupos de la industria, tickets de soporte categorizado por tema, entrevistas cualitativas con clientes, chats de ventas y grabaciones de llamadas, encuestas de satisfacción post-compra, grabaciones de sesiones de usuario, feedback de clientes perdidos (churn interviews), conversaciones en foros y comunidades online, y comentarios en anuncios de la competencia. Para cada fuente indica: qué tipo de insight aporta, con qué frecuencia revisarla y qué herramienta o proceso usar para capturarla.

2. SISTEMA DE PROCESAMIENTO Y CATEGORIZACIÓN
¿Cómo proceso el volumen de feedback que capturo sin que me consuma el día? Define: cómo crear un sistema de etiquetas o categorías para clasificar el feedback (por tema, emoción, etapa del ciclo de vida, tipo de cliente), cómo priorizar qué feedback analizar en profundidad versus qué revisar a alto nivel, y cómo usar IA para acelerar la categorización sin perder la riqueza cualitativa.

3. DEL LENGUAJE DEL CLIENTE AL COPY DE MARKETING
Este es el mayor valor del VoC para marketing. Explica cómo extraer el lenguaje exacto que usan los clientes para describir: sus problemas antes de encontrar tu producto, los beneficios que más valoran, las objeciones que tenían antes de comprar, y cómo se sienten después de usar el producto. Muéstrame cómo ese lenguaje se traduce directamente en titulares de landing page, asuntos de email y mensajes de anuncios.

4. VoC EN EL PROCESO DE CREACIÓN DE CAMPAÑAS
¿Cómo integro la escucha del cliente en el workflow de creación de campañas? Define el proceso: revisión de VoC antes de definir la campaña (qué busco), cómo usar insights de VoC para definir el mensaje central, cómo validar el copy con clientes reales antes del lanzamiento, y cómo medir si el mensaje de la campaña resonó (métricas de relevancia, no solo de rendimiento).

5. SISTEMA DE REPORTING DE VoC A PRODUCTO Y DIRECCIÓN
El VoC no es solo para marketing. Define cómo compartir los insights con otras áreas: el formato del informe mensual de VoC (una página, visual, accionable), cómo priorizar los temas más frecuentes para presentarlos a producto, y cómo vincular los insights de clientes con decisiones de negocio concretas (nueva funcionalidad, cambio de pricing, ajuste de propuesta de valor).

6. PROGRAMA DE ENTREVISTAS DE CLIENTE: GUÍA PRÁCTICA
Dame una guía para hacer entrevistas de cliente en formato de diez preguntas que extraen los insights de marketing más valiosos. Incluye: cómo reclutar a los entrevistados, cuánto durar, cómo abrir la conversación para que el cliente hable de su mundo y no de tu producto, y cuáles son las preguntas de oro que revelan el lenguaje de marketing más potente.

Sé específico con herramientas recomendadas, templates de categorización y ejemplos de cómo un insight de cliente se convierte en un titular de campaña. Este prompt es para un marketer que quiere que sus mensajes vendan más porque hablan el idioma exacto del cliente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de VoC que mejora el copy y los mensajes de marketing',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Technical feedback loops: code review constructivo y cultura de mejora continua en equipos de desarrollo',
                'description'      => 'Diseña procesos de feedback técnico que mejoran la calidad del código y desarrollan a los ingenieros del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager o tech lead con experiencia construyendo culturas de feedback técnico efectivo en equipos de ingeniería de software. Necesito diseñar los procesos de feedback que mejoran tanto la calidad del código como el desarrollo profesional de cada ingeniero del equipo.

Contexto de mi equipo:
Trabajo como [tech lead / engineering manager / senior developer] en un equipo de [número] ingenieros con niveles [juniors, mids, seniors mezclados / principalmente juniors / etc.]. Nuestra stack es [lenguajes y frameworks principales]. Actualmente el proceso de code review [no existe / es inconsistente / tarda mucho / genera conflictos / se centra en nitpicking en lugar de en lo importante].

Lo que necesito:

1. CULTURA DE FEEDBACK TÉCNICO: PRINCIPIOS FUNDAMENTALES
Define los principios que deben guiar el feedback técnico en un equipo saludable: la diferencia entre feedback sobre el código y feedback sobre la persona, el principio de intención benévola por defecto (cómo asumir que la otra persona tomó la mejor decisión con la información que tenía), por qué el "nitpicking" es el mayor enemigo de una cultura de review útil, y cómo distinguir entre preferencias personales de estilo y problemas reales de calidad o mantenibilidad.

2. ESTRUCTURA DEL CODE REVIEW EFECTIVO
Define el proceso de code review que equilibra velocidad y calidad: el tiempo máximo que debe pasar desde que se abre un PR hasta el primer review (veinticuatro horas como estándar), los cuatro niveles de comentario que un reviewer debe distinguir (bloqueante, mejora importante, sugerencia, nit), cómo estructurar el primer comentario de una review para dar contexto antes de los detalles, y cuándo aprobar un PR a pesar de tener comentarios menores pendientes.

3. CÓMO DAR FEEDBACK TÉCNICO SIN GENERAR DEFENSIVIDAD
Transforma estos comentarios de code review problemáticos en comentarios constructivos: "Esto está mal", "¿Por qué hiciste esto así?", "Esto no escala", "Ya lo he dicho antes". Para cada uno: explica por qué genera defensividad y rescríbelo usando las técnicas de feedback técnico constructivo (preguntas en lugar de afirmaciones, separar el problema de la solución, ofrecer alternativas con razonamiento).

4. FEEDBACK EN DIFERENTES CONTEXTOS TÉCNICOS
¿Cómo adapto el feedback según el contexto? Define el tono y el nivel de detalle correcto para: review de código de un junior que está aprendiendo (reforzar lo que hizo bien, explicar el razonamiento detrás de cada sugerencia), review de código de un senior (ir directo al punto, esperar debate, aceptar que puede tener razón), review bajo presión de tiempo o deadline (qué sacrificar y qué nunca sacrificar), y self-review antes de abrir el PR (checklist de diez puntos).

5. MÁS ALLÁ DEL CODE REVIEW: OTROS FEEDBACK LOOPS TÉCNICOS
El code review es solo uno de los canales de feedback técnico. Define cómo estructurar: las retrospectivas de calidad de código (mensual, con datos reales de bugs y deuda técnica), los one-on-ones técnicos entre tech lead y cada ingeniero (qué preguntas hacer sobre su desarrollo, sus frustraciones y sus ambiciones técnicas), el post-mortem de incidente como herramienta de aprendizaje sin culpa, y la documentación de decisiones de arquitectura (ADR) como feedback loop hacia el futuro.

6. MÉTRICAS DE SALUD DEL FEEDBACK TÉCNICO
¿Cómo sé si mi proceso de feedback técnico está funcionando? Define los indicadores que debo monitorizar: tiempo medio de cycle time del PR (desde apertura hasta merge), porcentaje de PRs que se mergean en el primer review sin cambios mayores, número de bugs en producción trazables a ausencia de review, y señales cualitativas de que la cultura de feedback es saludable (juniors que piden reviews voluntariamente, debates técnicos abiertos en los canales del equipo).

Este prompt es para un tech lead o engineering manager que quiere que el feedback técnico mejore el producto y desarrolle a las personas, no que genere fricción y desmotivación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar procesos de code review y feedback técnico que desarrollan al equipo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design feedback: cómo recibir y dar crítica de diseño que mejora el trabajo',
                'description'      => 'Domina el arte de la crítica de diseño para que el feedback mejore las propuestas sin destruir la motivación del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de diseño con experiencia en critique sessions, portfolio reviews y construcción de culturas de feedback en equipos de diseño de producto, UX y comunicación visual. Necesito aprender a dar y recibir feedback de diseño que mejore el trabajo y fortalezca al equipo.

Contexto de mi situación:
Soy [diseñador junior/senior/director de diseño] trabajando en [agencia / equipo interno de producto / freelance]. Las situaciones de feedback más difíciles que enfrento son [presentaciones a clientes que no saben de diseño / feedback de stakeholders que mezclan gustos personales con requisitos de negocio / compañeros de equipo que se toman el feedback como crítica personal / no saber cómo dar feedback constructivo sin herir sentimientos].

Lo que necesito:

1. EL FRAMEWORK DE LA CRÍTICA DE DISEÑO EFECTIVA
Define el framework completo para una critique session de diseño: cómo abrir la sesión estableciendo el contexto (objetivos del diseño, usuario objetivo, restricciones) antes de que nadie emita opinión, la diferencia entre descripción (lo que veo), interpretación (lo que creo que significa), evaluación (si funciona para el objetivo) y sugerencia (cómo podría mejorar), y por qué ese orden importa. Explica también cuánto debe durar una critique bien facilitada según el tipo de proyecto.

2. DAR FEEDBACK DE DISEÑO SIN IMPONER EL PROPIO ESTILO
El mayor error en feedback de diseño es confundir "no me gusta" con "no funciona". Muéstrame cómo dar feedback anclado en criterios objetivos: funciona para el usuario objetivo, cumple el objetivo de negocio, es coherente con el sistema de diseño, es accesible. Para cada criterio, escribe un ejemplo de comentario de feedback que usa ese criterio en lugar de la preferencia personal.

3. RECIBIR FEEDBACK SIN PONERSE A LA DEFENSIVA
¿Cómo entreno a un diseñador para que reciba crítica de forma productiva? Define: la regla de "escuchar primero, preguntar después" (nunca defender el diseño hasta haber entendido completamente el problema que señala el reviewer), las preguntas que convierten un comentario vago en feedback accionable ("¿qué objetivo no está cumpliendo esta solución?", "¿qué esperabas ver aquí?"), y cómo distinguir entre feedback que debo incorporar y feedback que debo explicar por qué no corresponde.

4. GESTIONAR FEEDBACK DE CLIENTES Y STAKEHOLDERS SIN CONOCIMIENTO DE DISEÑO
El escenario más difícil: el cliente dice "hazlo más grande y en rojo". Define el proceso para: escuchar el comentario sin discutirlo de inmediato, identificar el objetivo o preocupación real detrás del comentario de superficie, proponer alternativas que abordan el objetivo sin comprometer el diseño, y cuándo es correcto ceder y cuándo defender la decisión de diseño con datos o principios.

5. FACILITAR UNA CRITIQUE SESSION DE EQUIPO
Dame la guía paso a paso para facilitar una critique session de treinta minutos con un equipo mixto (diseñadores, PMs, desarrolladores): cómo preparar a los participantes antes de la sesión, qué información debe compartir el diseñador al principio, las reglas de la sesión que garantizan feedback constructivo, cómo gestionar a la persona que monopoliza la conversación o que ataca en lugar de construir, y cómo terminar con acciones claras y priorizadas.

6. FEEDBACK ESCRITO VERSUS FEEDBACK EN VIVO
¿Cuándo usar Figma comments, Loom, email o una reunión en vivo para dar feedback de diseño? Define los criterios de elección: tipo de feedback (estructural versus de detalle), urgencia, sensibilidad emocional del tema, y nivel de experiencia del receptor. Incluye también las mejores prácticas para escribir un comentario de Figma que sea claro, específico y accionable sin que se pierda el tono.

7. CULTURA DE FEEDBACK EN EL EQUIPO DE DISEÑO
¿Cómo construyo una cultura donde el feedback de diseño es bienvenido y no temido? Define las prácticas semanales que normalizan la critique: show-and-tell de trabajo en progreso (work-in-progress, no solo obra final), la regla de "trabajo en proceso tiene permiso de estar roto", el papel del director de diseño como modelo de cómo recibir y dar feedback, y cómo celebrar el diseño que mejoró significativamente gracias a la crítica.

Este prompt es para diseñadores que quieren que el feedback sea la herramienta más poderosa de su proceso, no la parte que más temen.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Dominar la crítica de diseño para mejorar el trabajo y la dinámica del equipo',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales feedback: aprender de los "no" para mejorar el proceso de ventas',
                'description'      => 'Transforma cada oportunidad perdida en inteligencia de ventas que mejora el pipeline, el pitch y el proceso comercial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia en metodologías de ventas consultivas y en la construcción de sistemas de aprendizaje basados en el análisis de oportunidades perdidas. Necesito diseñar un sistema para convertir cada "no" de un prospecto en información que mejore mi proceso de ventas.

Contexto de mi equipo:
Soy [director comercial / sales manager / vendedor individual] en una empresa de [sector, tipo de producto o servicio, ciclo de venta aproximado]. Cerramos aproximadamente [número] oportunidades al mes y perdemos [número o porcentaje]. Actualmente cuando perdemos una oportunidad [no hacemos nada / anotamos algo en el CRM / hacemos una llamada de análisis informal].

Lo que necesito:

1. SISTEMA DE ANÁLISIS DE OPORTUNIDADES PERDIDAS
Define el proceso completo para analizar cada oportunidad perdida: qué información capturar en el CRM en el momento del cierre negativo (razón oficial dada por el prospecto, razón real percibida por el comercial, etapa en que se perdió, competidor que ganó si aplica, duración del ciclo, número de touchpoints), cómo hacer la distinción entre razones de superficie y razones reales, y con qué periodicidad revisar el agregado de oportunidades perdidas (semanal en individuo, mensual en equipo).

2. LA ENTREVISTA POST-VENTA PERDIDA
La mayoría de las empresas nunca llaman al prospecto que dijo no. Diseña la guía de la entrevista de "lost deal": cómo hacer la petición (el email o llamada de contacto post-cierre que tiene alta tasa de aceptación), las cinco preguntas de oro que revelan la razón real de la pérdida, cómo escuchar sin defender ni contradecir, y qué preguntas sobre el proceso te dicen más de lo que podrías mejorar que las preguntas sobre el producto. Escribe el guión completo de la conversación.

3. PATRONES: DEL CASO INDIVIDUAL AL INSIGHT SISTÉMICO
Un "no" individual es anécdota. La suma de "no" es inteligencia. Define cómo agregar y analizar las razones de pérdida para encontrar patrones: cómo crear un sistema de categorías que sea útil (no más de diez categorías, con ejemplos claros de cada una), cómo visualizar las tendencias mensuales de razones de pérdida, y cómo distinguir entre un problema de producto, un problema de precio, un problema de proceso comercial o un problema de perfil del prospecto (ICP incorrecto).

4. FEEDBACK DE PÉRDIDAS AL PROCESO COMERCIAL
¿Cómo convierto los insights de pérdidas en mejoras concretas del proceso? Define: cómo traducir "nos ganó el precio de la competencia" en ajustes al pitch (manejo de objeciones de precio, posicionamiento de valor), cómo traducir "necesitaban más tiempo para decidir" en ajustes al proceso (materiales de habilitación, reuniones de nurturing, secuencia de seguimiento), y cómo traducir "el producto no tenía X funcionalidad" en feedback prioritario para producto.

5. FEEDBACK DE PÉRDIDAS A LA CUALIFICACIÓN
Muchos "no" son consecuencia de haber invertido tiempo en prospectos que nunca iban a comprar. Analiza: cómo usar el análisis de pérdidas para refinar el ICP (ideal customer profile), qué señales de "mala cualificación" aparecen consistentemente en las oportunidades perdidas, y cómo ajustar los criterios de cualificación (BANT, MEDDIC o el framework que uses) para entrar menos en deals que no puedes ganar.

6. CULTURA COMERCIAL DEL APRENDIZAJE
¿Cómo construyo un equipo comercial que aprende de las pérdidas sin que sea una sesión de humillación o de búsqueda de culpables? Define: la cadencia y formato de la revisión de pérdidas en equipo (no más de treinta minutos, foco en el aprendizaje sistémico), el rol del manager en facilitar la sesión (preguntar, no juzgar), cómo celebrar al vendedor que comparte el aprendizaje más valioso del mes aunque sea de una pérdida, y cómo documentar el aprendizaje en el playbook de ventas para que beneficie a todo el equipo.

Escribe con ejemplos concretos y guiones reales. El objetivo es que cada "no" valga más que un "sí" fácil en términos de aprendizaje comercial.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Convertir las oportunidades perdidas en inteligencia comercial que mejora el proceso de ventas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'User research feedback: convertir lo que escuchas en decisiones de producto',
                'description'      => 'Diseña el sistema de user research que transforma las conversaciones con usuarios en decisiones de roadmap concretas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un investigador de UX y product manager con experiencia en diseño de programas de investigación continua de usuarios. Necesito construir un sistema para capturar feedback de usuarios de forma regular y convertirlo en decisiones de producto concretas y priorizadas.

Contexto de mi producto:
Trabajo en [describe el producto: SaaS, app, plataforma, etc.] para [perfil de usuario]. Actualmente [no hacemos investigación formal / hacemos entrevistas esporádicas / tenemos datos cuantitativos pero no sabemos el "por qué" detrás de los números / el equipo de producto toma decisiones basadas en intuición o en las solicitudes del cliente más ruidoso].

Lo que necesito:

1. PROGRAMA DE INVESTIGACIÓN CONTINUA DE USUARIOS
Define cómo estructurar un programa de investigación que sea sostenible con recursos limitados: la cadencia recomendada de entrevistas de usuario (entre cuatro y ocho por mes como mínimo viable), cómo reclutar participantes de forma sistemática sin que sea una tarea manual constante (panel de usuarios voluntarios, segmentos por tipo de usuario, incentivos apropiados), y cómo distribuir el tiempo entre investigación generativa (descubrir problemas) y evaluativa (validar soluciones).

2. LA ENTREVISTA DE USUARIO QUE PRODUCE INSIGHTS REALES
La mayoría de las entrevistas de usuario producen confirmaciones en lugar de descubrimientos. Diseña la guía de entrevista que evita este error: las preguntas de apertura que hacen que el usuario hable de su realidad antes de mencionar tu producto, la técnica de "cuéntame la última vez que..." para obtener comportamiento real en lugar de comportamiento ideal, cómo profundizar con "¿por qué?" sin parecer interrogatorio, y las señales en la conversación que indican que has tocado un pain point real (el usuario cambia el tono, da un ejemplo espontáneo, hace una pausa larga).

3. DE LA ENTREVISTA AL INSIGHT: EL PROCESO DE SÍNTESIS
¿Cómo proceso lo que escuché en diez entrevistas y lo convierto en insights accionables? Define el proceso de síntesis: cómo tomar notas durante la entrevista sin perder el hilo de la conversación, el método de affinity mapping para agrupar observaciones similares, cómo distinguir entre observación (lo que dijo el usuario), interpretación (lo que significa) e implicación (lo que debería hacer el producto), y cómo priorizar insights según frecuencia, intensidad del pain y alineación con la estrategia.

4. FEEDBACK DE USUARIOS AL ROADMAP
¿Cómo lleva un PM los insights de investigación al proceso de priorización del roadmap? Define: el formato del "research report" que un PM puede presentar en diez minutos a un equipo de producto, cómo traducir un pain point de usuario en una historia de usuario y en un criterio de éxito medible, y cómo balancear el feedback de usuarios con otras fuentes de priorización (datos de uso, objetivos de negocio, deuda técnica).

5. FEEDBACK CUANTITATIVO VERSUS CUALITATIVO: CÓMO COMBINARLOS
Los números dicen qué pasa, los usuarios dicen por qué. Define cómo combinar ambos: cuándo empezar por los datos cuantitativos para definir dónde investigar (funnel drop-offs, features con bajo engagement, segmentos con alto churn) y cuándo empezar por la investigación cualitativa para generar hipótesis que luego validas con datos. Incluye tres ejemplos de cómo un dato cuantitativo llevó a una entrevista que reveló el insight real detrás del número.

6. DEMOCRATIZAR LA INVESTIGACIÓN EN EL EQUIPO DE PRODUCTO
¿Cómo consigo que no solo el PM haga investigación de usuarios? Define el programa de "everyone does research": cómo entrenar a diseñadores y desarrolladores para hacer entrevistas básicas, el formato de la sesión de escucha en equipo (interview watch party), cómo compartir los insights de forma que todo el equipo los interiorice (no solo un documento que nadie lee), y cómo construir un repositorio de insights de usuario que sea consultable antes de cada decisión de producto.

Sé concreto con guías de entrevista, plantillas de síntesis y ejemplos de cómo un insight se convierte en una funcionalidad. Este prompt es para un PM que quiere que las decisiones de producto vengan de la realidad del usuario, no de suposiciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de user research que convierte conversaciones en decisiones de roadmap',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Performance feedback: el ciclo de feedback que desarrolla a las personas en RRHH',
                'description'      => 'Diseña conversaciones y sistemas de feedback de desempeño que desarrollan a las personas y mejoran los resultados del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en desarrollo de talento y gestión del desempeño con experiencia construyendo sistemas de feedback que realmente desarrollan a las personas en lugar de limitarse a evaluar el pasado. Necesito diseñar el proceso de feedback de desempeño que use mi empresa para que tenga impacto real en el desarrollo de cada persona.

Contexto de mi organización:
Trabajo en RRHH o como manager en [empresa, sector, tamaño]. Actualmente el proceso de feedback de desempeño [se hace una vez al año / es informal / genera ansiedad más que desarrollo / los managers no saben cómo dar feedback difícil / las conversaciones son superficiales y no producen cambio real].

Lo que necesito:

1. EL MODELO DE FEEDBACK DE DESEMPEÑO CONTINUO
¿Por qué la evaluación anual no funciona y qué la reemplaza? Define el modelo de feedback continuo que funciona: check-ins quincenales o mensuales de quince a treinta minutos con agenda fija, la conversación de mid-year para ajustar objetivos y dar feedback de desarrollo, la revisión de fin de año centrada en reconocimiento y plan de crecimiento, y el feedback 360 como herramienta complementaria (no como sustituto de la conversación directa con el manager). Para cada momento: qué preguntas guían la conversación y qué documenta el manager después.

2. EL MODELO SBI PARA FEEDBACK DE DESEMPEÑO
El framework Situación-Comportamiento-Impacto es el estándar más efectivo para dar feedback específico. Explica: qué es cada componente con ejemplos de feedback real (tanto positivo como de desarrollo), cómo aplicarlo a comportamientos observados recientemente y no a rasgos de personalidad, y cuáles son los errores más comunes al usarlo (generalizar, juzgar intenciones, mezclar varios comportamientos en un solo feedback). Escribe cinco ejemplos de SBI para situaciones de trabajo reales.

3. CONVERSACIONES DE FEEDBACK DIFÍCILES
Las conversaciones sobre desempeño bajo o comportamiento problemático son las que los managers más evitan y más impactan. Define el protocolo para: preparar la conversación (qué documentar antes, cómo elegir el momento y el lugar), abrir la conversación sin que el empleado se cierre de inmediato, presentar el problema con datos y ejemplos concretos, escuchar la perspectiva del empleado antes de proponer soluciones, y terminar con un acuerdo de mejora claro con fecha de seguimiento. Incluye las frases que funcionan y las que debes evitar.

4. FEEDBACK DE RECONOCIMIENTO: TAN IMPORTANTE COMO EL CORRECTIVO
Muchos managers dan feedback solo cuando algo va mal. Diseña un sistema de reconocimiento que sea específico y frecuente: la diferencia entre "bien hecho" (inútil) y reconocimiento basado en comportamiento y resultado, la cadencia recomendada de reconocimiento formal versus informal, y cómo hacer que el reconocimiento público (en reuniones de equipo o canales de comunicación) sea motivador sin ser vergonzoso para el receptor.

5. PLANES DE DESARROLLO INDIVIDUAL (PDI) QUE SE EJECUTAN
La mayoría de los PDI quedan en el cajón. Define el proceso para crear un PDI que se cumpla: cómo hacer que el empleado sea el protagonista de su propio plan de desarrollo (no que el manager se lo imponga), qué elementos incluye un PDI efectivo (objetivo de desarrollo, acciones concretas, recursos necesarios, plazos y criterios de éxito), y cómo hacer el seguimiento mensual sin que sea una reunión más de burocracia.

6. CALIBRACIÓN Y EQUIDAD EN EL FEEDBACK
¿Cómo garantizo que el feedback de desempeño sea consistente y equitativo en toda la organización? Define: el proceso de calibración entre managers (qué preguntas se responden en una sesión de calibración, cómo llegar a acuerdos sobre estándares de desempeño), los sesgos más comunes en la evaluación del desempeño (efecto halo, similitud, recencia) y cómo mitigarlos, y cómo usar datos de desempeño para detectar inequidades por género, origen o antigüedad.

Este prompt es para responsables de RRHH y managers que quieren que el feedback de desempeño sea la herramienta de desarrollo más poderosa de su organización, no el trámite administrativo que todos temen en diciembre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un sistema de feedback de desempeño que desarrolla personas y mejora equipos',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial feedback loops: cómo los números informan las decisiones de gestión financiera',
                'description'      => 'Diseña el sistema de reporting e indicadores financieros que convierte datos contables en decisiones de gestión accionables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO o director financiero con experiencia en diseño de sistemas de reporting de gestión para empresas en crecimiento. Necesito construir el sistema de feedback financiero que permita a dirección tomar mejores decisiones con la información correcta en el momento adecuado.

Contexto de mi empresa:
Trabajo como [CFO / controller / director financiero / CEO con responsabilidad financiera] en una empresa de [sector, tamaño, modelo de negocio]. Actualmente el reporting financiero [llega tarde / es demasiado detallado para ser útil en dirección / no conecta los números con las decisiones del negocio / los responsables de área no entienden sus métricas financieras].

Lo que necesito:

1. EL CUADRO DE MANDO FINANCIERO DE GESTIÓN
Define la arquitectura del cuadro de mando financiero que debe tener cualquier empresa en crecimiento: la distinción entre métricas de resultado (P&L, balance, flujo de caja) y métricas de anticipación (pipeline de ventas, ciclo de conversión de efectivo, burn rate), los indicadores financieros por nivel jerárquico (qué ve el CEO, qué ve el director de área, qué ve el CFO), y la cadencia de reporting (diario, semanal, mensual, trimestral) con el formato apropiado para cada frecuencia.

2. DEL DATO CONTABLE A LA DECISIÓN DE GESTIÓN
El mayor fallo del reporting financiero es presentar datos sin contexto decisional. Muéstrame cómo transformar cada dato financiero en una pregunta de gestión: cómo presentar el margen bruto por línea de producto para que el CEO entienda qué mix de ventas maximiza la rentabilidad, cómo mostrar el ciclo de cobro para que comercial entienda el impacto de sus condiciones de pago, y cómo presentar el burn rate para que el equipo entienda la relación entre contratación y runway.

3. FEEDBACK FINANCIERO A LAS ÁREAS DEL NEGOCIO
Cada área del negocio toma decisiones que tienen impacto financiero. Define cómo finanzas da feedback financiero a cada área: qué métricas comparte finanzas con marketing (coste de adquisición, payback period, margen por canal), qué métricas comparte con operaciones (coste por unidad, eficiencia operativa, variación presupuestaria), y qué métricas comparte con RRHH (coste de personal sobre ingresos, productividad por empleado, coste de rotación). Para cada área: el formato de la reunión de feedback financiero mensual.

4. ANÁLISIS DE VARIACIONES COMO HERRAMIENTA DE APRENDIZAJE
La variación entre presupuesto y real es el feedback más valioso que produce finanzas. Define el proceso: cómo calcular y presentar las variaciones de forma que sean comprensibles para directores no financieros, cómo distinguir entre variaciones de precio, volumen y eficiencia para que el análisis sea accionable, y el protocolo de la reunión de análisis de variaciones (treinta minutos mensuales con cada responsable de área, no una reunión de dirección donde nadie se atreve a hablar).

5. CASH FLOW COMO FEEDBACK DE SALUD DEL NEGOCIO
Muchas empresas rentables quiebran por falta de liquidez porque no monitorean el flujo de caja. Define el sistema de feedback de tesorería: la previsión de tesorería a trece semanas (por qué trece semanas, cómo construirla, con qué frecuencia actualizarla), los indicadores de alerta temprana de problemas de liquidez, y cómo comunicar a dirección una situación de tensión de caja sin generar pánico innecesario.

6. CULTURA FINANCIERA EN LA ORGANIZACIÓN
El mejor sistema de reporting falla si los directivos no entienden los números. Define cómo finanzas educa a la organización: las tres métricas financieras que todo director de área debe entender de su negocio, cómo hacer una sesión de formación financiera de noventa minutos para directivos no financieros (qué incluir, qué evitar, cómo hacerlo relevante para su área), y cómo gamificar el reporting financiero para que los equipos se apropien de sus métricas.

Responde con ejemplos de dashboards, formatos de reunión y plantillas de análisis de variaciones. Este prompt es para un profesional financiero que quiere que los números generen decisiones mejores, no más reuniones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el sistema de reporting financiero que conecta los números con las decisiones de gestión',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Client feedback jurídico: cómo el despacho aprende de la experiencia del cliente',
                'description'      => 'Diseña el sistema de feedback de clientes que mejora la calidad del servicio jurídico y fortalece la relación cliente-despacho.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión y desarrollo de negocio jurídico con experiencia en programas de satisfacción de clientes en despachos de abogados. Necesito diseñar un sistema de feedback de clientes que mejore la calidad del servicio jurídico, detecte problemas antes de que el cliente se vaya y genere referencias y recomendaciones.

Contexto de mi despacho:
Trabajo en [despacho boutique / gran firma / consulta individual] especializado en [área jurídica]. Tenemos aproximadamente [número] clientes activos. Actualmente el feedback de los clientes [solo llega cuando hay un problema grave / lo obtenemos de forma informal en las reuniones / no tenemos ningún proceso sistemático]. El mayor riesgo es [perder clientes sin entender por qué / no saber si estamos cumpliendo sus expectativas / no capitalizar la satisfacción para generar referencias].

Lo que necesito:

1. EL PROGRAMA DE FEEDBACK DE CLIENTES PARA UN DESPACHO
Define el sistema completo adaptado a las particularidades del sector jurídico: por qué los despachos tienen resistencia cultural al feedback de clientes (confidencialidad, jerarquía profesional, miedo al juicio de la competencia técnica), la distinción entre satisfacción con el resultado y satisfacción con el servicio, y la cadencia de feedback en los tres momentos clave: al cerrar un encargo, durante asuntos de larga duración y en la reunión de revisión anual de la relación.

2. LA ENCUESTA DE SATISFACCIÓN JURÍDICA
Diseña la encuesta de satisfacción específica para servicios jurídicos: cuántas preguntas (máximo ocho para garantizar la respuesta), la escala recomendada (NPS de promotor/detractor, escala de uno a cinco por dimensión), las dimensiones que medir en un despacho (comunicación y capacidad de respuesta, claridad en el asesoramiento, cumplimiento de plazos, relación calidad-precio, confianza en el equipo, disposición a recomendar), y las preguntas abiertas que revelan los insights más valiosos. Escribe la encuesta completa lista para usar.

3. CÓMO PEDIR FEEDBACK SIN QUE PAREZCA UN TRÁMITE
La mayoría de los despachos envían una encuesta por email que nadie responde. Define las mejores prácticas para maximizar la tasa de respuesta: el mejor momento del encargo para pedir feedback (inmediatamente al cierre, no tres meses después), si es mejor hacerlo en persona, por teléfono o por escrito según el tipo de cliente, cómo el socio responsable presenta la petición de feedback (las palabras exactas que aumentan la tasa de respuesta), y cómo hacer el seguimiento sin parecer pesado.

4. CONVERTIR EL FEEDBACK EN MEJORAS DEL SERVICIO
El feedback que no genera cambio es solo una ilusión de mejora. Define el proceso: quién en el despacho recibe y procesa el feedback (socio director, responsable de calidad, comité de gestión), el formato de la reunión mensual de revisión de feedback (qué preguntas se responden, qué decisiones se toman), y cómo comunicar a los clientes que su feedback produjo un cambio concreto (el mayor generador de lealtad en servicios profesionales).

5. FEEDBACK NEGATIVO Y GESTIÓN DE CONFLICTOS CON EL CLIENTE
Cuando el feedback es negativo, la reacción del despacho define si el cliente se va o se queda. Define el protocolo: cómo responder en las primeras veinticuatro horas a un feedback negativo (quién llama, qué dice, qué no dice), las etapas de la conversación de recuperación del cliente insatisfecho, cómo documentar el incidente para que el equipo aprenda, y cómo distinguir entre un cliente que tiene razón y hay que compensar y un cliente con expectativas desajustadas que hay que corregir.

6. DEL CLIENTE SATISFECHO A LA REFERENCIA
El feedback positivo es una oportunidad de desarrollo de negocio que la mayoría de los despachos desaprovecha. Define: el momento adecuado para pedir una referencia o recomendación (después de un resultado exitoso, nunca como transacción), las formas naturales de convertir la satisfacción en testimonial o en referencia (reseña en Google, testimonio para la web del despacho, introducción a un conocido), y cómo el programa de feedback se integra con el plan de desarrollo de negocio del despacho.

Este prompt es para abogados y directores de despacho que quieren que la relación con el cliente sea una ventaja competitiva, no solo un requisito deontológico. Escribe con ejemplos concretos de lenguaje que funciona en el entorno jurídico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar un programa de feedback de clientes que mejora el servicio jurídico y genera referencias',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer feedback systems: NPS, CSAT y la voz del cliente que mejora el producto',
                'description'      => 'Diseña el sistema de feedback de clientes de CS que va más allá de los números para producir mejoras reales del producto y la experiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success y experiencia de cliente con experiencia diseñando programas de medición de satisfacción y sistemas de feedback que producen cambios reales en el producto y el servicio. Necesito construir el sistema de feedback de clientes que conecte lo que sienten los usuarios con las decisiones de producto, soporte y operaciones.

Contexto de mi empresa:
Trabajo en CS de [empresa SaaS / plataforma / empresa de servicios]. Actualmente medimos [NPS / CSAT / CES / ninguna métrica formal] y el mayor problema es que [los números no nos dicen qué hacer / el feedback llega pero nadie actúa sobre él / las encuestas tienen tasas de respuesta muy bajas / no sabemos cómo cerrar el loop con los clientes que respondieron].

Lo que necesito:

1. EL ECOSISTEMA DE MÉTRICAS DE SATISFACCIÓN
Define las tres métricas principales de satisfacción de cliente y cuándo usar cada una: NPS (Net Promoter Score) para medir lealtad y riesgo de churn a largo plazo, CSAT (Customer Satisfaction Score) para medir satisfacción en un momento o transacción específica, y CES (Customer Effort Score) para medir la facilidad de uso del producto o del soporte. Para cada métrica: qué mide realmente, en qué momento del ciclo de vida del cliente aplicarla, cuál es el benchmark de referencia en mi industria y cuáles son sus limitaciones.

2. DISEÑO DE LA ENCUESTA QUE MAXIMIZA RESPUESTAS
Las encuestas largas no se responden. Define el diseño de encuesta óptimo para CS: el número máximo de preguntas según el canal (email: máximo cinco, in-app: máximo dos), el momento de envío que maximiza la tasa de respuesta (en contexto de uso, no días después), la pregunta cuantitativa (NPS o CSAT) combinada con la pregunta cualitativa de seguimiento (¿cuál es la razón principal de tu puntuación?), y cómo personalizar la encuesta según el segmento del cliente para aumentar la relevancia.

3. ANÁLISIS DE RESPUESTAS CUALITATIVAS A ESCALA
Cuando tienes cientos de respuestas de texto abierto, ¿cómo las procesas sin leer una a una? Define el proceso: cómo crear un sistema de categorización de feedback cualitativo que sea consistente entre varios analistas, cómo usar análisis de sentimiento y clustering temático para encontrar los temas más frecuentes, y cómo distinguir entre feedback sobre el producto, feedback sobre el soporte y feedback sobre los procesos del cliente.

4. CERRAR EL LOOP: EL MOMENTO MÁS IMPORTANTE
El mayor error en feedback de cliente es no responder a quien respondió. Define el proceso de close the loop: cómo responder en menos de cuarenta y ocho horas a cada detractor (NPS 0-6) con una llamada personal del CSM, cómo responder a promotores (NPS 9-10) para convertirlos en referencias o testimoniales, y cómo responder a pasivos (NPS 7-8) con contenido de valor que los empuje hacia la zona de promotores. Escribe las plantillas de mensaje para cada segmento.

5. DEL FEEDBACK AL PRODUCTO: EL CANAL QUE MÁS IMPORTA
El feedback de CS es el input de producto más valioso que existe. Define el sistema para que el feedback llegue al equipo de producto de forma accionable: el formato del informe mensual de CS a producto (temas más mencionados, frecuencia, ejemplos de citas literales, impacto en NPS), la reunión quincenal entre CS y producto para discutir el feedback más crítico, y cómo priorizar el feedback de clientes en el contexto del roadmap (no todos los feedbacks merecen una funcionalidad).

6. PROGRAMA DE MEJORA BASADO EN EL FEEDBACK
Define el ciclo completo de mejora continua basada en feedback: medir (encuestas en el momento correcto), analizar (síntesis de temas frecuentes), priorizar (impacto en retención y satisfacción), implementar (cambio en producto, proceso o comunicación), comunicar (avisar al cliente del cambio que generó su feedback) y medir de nuevo (¿mejoró la puntuación en ese segmento?). Incluye la cadencia recomendada para cada fase y quién es responsable de cada paso.

Este prompt es para equipos de CS que quieren que el feedback sea el motor de mejora continua, no solo un número en un dashboard que nadie mira. Escribe con herramientas específicas, plantillas de encuesta y guiones de close the loop.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir el sistema de NPS, CSAT y feedback cualitativo que mejora el producto y la experiencia',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Feedback del cliente freelance: cómo pedirlo, procesarlo y usarlo para crecer',
                'description'      => 'Diseña el proceso de feedback de tus clientes freelance que mejora tu servicio, genera referencias y hace crecer tu negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocios para freelancers y consultores independientes con experiencia ayudando a profesionales a construir sistemas de feedback que mejoran su servicio y hacen crecer su reputación. Necesito diseñar el proceso de feedback de cliente que funciona para un negocio unipersonal.

Contexto de mi negocio:
Soy freelance en [área: diseño, desarrollo, marketing, consultoría, redacción, etc.]. Trabajo principalmente con [tipo de cliente: startups, pymes, agencias, empresas grandes]. Al terminar un proyecto [no pido feedback / pido feedback de forma espontánea pero sin proceso / recibo algunos testimoniales sin sistema / tengo miedo de pedir feedback por si es negativo].

Lo que necesito:

1. POR QUÉ EL FREELANCE EVITA PEDIR FEEDBACK Y CÓMO SUPERARLO
La mayoría de los freelancers no pide feedback por miedo al rechazo o por no saber cómo pedirlo. Analiza: los tres miedos más comunes (miedo a la crítica negativa, miedo a parecer inseguro, miedo a incomodar al cliente), por qué cada uno de esos miedos está mal fundado, y cómo cambiar el frame del feedback de "evaluación de mi trabajo" a "herramienta para darte mejor servicio". Incluye el cambio de mentalidad que permite pedir feedback con confianza.

2. CUÁNDO Y CÓMO PEDIR FEEDBACK
El timing lo es todo. Define el proceso: el mejor momento para pedir feedback (al cierre del proyecto, cuando la satisfacción está alta y el resultado fresco), el canal correcto según la relación con el cliente (presencialmente o por videollamada para clientes cercanos, email para clientes más distantes), el mensaje exacto que usas para pedir feedback sin que suene a trámite administrativo, y la diferencia entre pedir feedback de desarrollo (para mejorar) y pedir testimonial (para vender). Escribe las plantillas de mensaje para cada situación.

3. LA CONVERSACIÓN DE CIERRE DE PROYECTO
La mejor forma de obtener feedback es en una llamada de cierre, no en una encuesta. Diseña la guía de la llamada de treinta minutos que cierras al finalizar cada proyecto: cómo abrir la conversación, las preguntas que revelan qué valoró más el cliente (para que lo repliques), las preguntas que revelan qué mejorar (para que crezcas), y cómo terminar la llamada de forma que el cliente quede con una impresión excelente y esté dispuesto a recomendarte. Escribe el guión completo de la conversación.

4. PROCESAR EL FEEDBACK SIN HUNDIRTE NI INFLARTE
Recibir feedback es un ejercicio de regulación emocional. Define: cómo procesar el feedback positivo sin volverme complaciente (qué pregunta me hago después de un buen testimonial para seguir mejorando), cómo procesar el feedback negativo sin hundirme (el proceso de un día para digerir la crítica, extraer el aprendizaje y tomar acción), y cómo distinguir entre feedback que debo incorporar y feedback que refleja expectativas desalineadas que nunca debí aceptar como cliente.

5. CONSTRUIR EL REPOSITORIO DE TESTIMONIALES Y CASOS
El feedback de clientes satisfechos es tu mejor material de ventas. Define el sistema para capturarlo y usarlo: cómo transformar el feedback verbal en un testimonial escrito (el proceso de redactar tú el testimonial con las palabras del cliente y pedirle aprobación), dónde publicar los testimoniales para máxima visibilidad (web, LinkedIn, propuestas, email de presentación), y cómo construir estudios de caso a partir de proyectos exitosos sin revelar información confidencial del cliente.

6. USAR EL FEEDBACK PARA MEJORAR TUS SERVICIOS Y PRECIOS
El feedback es el mapa de ruta de tu crecimiento como freelance. Define: cómo identificar el patrón de qué es lo que más valoran tus clientes para potenciarlo en tu propuesta de valor, cómo usar el feedback para detectar servicios que puedes añadir o expandir, y cómo el feedback de clientes de alto valor te da argumentos para subir tus tarifas en la próxima renovación o con nuevos clientes.

7. REFERENCIAS Y REFERIDOS: EL PASO SIGUIENTE AL FEEDBACK
El cliente que dejó un buen feedback está en el mejor momento para presentarte a otros. Define: el momento y las palabras exactas para pedir una referencia de forma natural (sin que parezca desesperado ni transaccional), cómo hacer que el cliente te recuerde cuando alguien en su red necesita tus servicios, y si tiene sentido crear un programa de referidos con algún incentivo para clientes que generen nuevos proyectos.

Escribe con tono cercano y práctico, para alguien que trabaja solo y quiere que el feedback sea el combustible del crecimiento de su negocio, no una fuente de ansiedad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Pedir, procesar y usar el feedback de clientes para crecer como freelance',
                'vote_score'       => 43,
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
