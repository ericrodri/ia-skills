<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills216Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Liderar equipos de marketing en remoto',
                'description'       => 'Gestiona el equipo de marketing cuando no está físicamente junto: los rituales que mantienen la cohesión, las herramientas de colaboración creativa y el proceso de aprobación de campañas en asíncrono.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director o VP de Marketing con experiencia liderando equipos de marketing distribuidos en múltiples ubicaciones y zonas horarias. Quiero construir o mejorar el sistema de liderazgo del equipo de marketing en remoto para que opere con la misma cohesión, creatividad y velocidad que un equipo co-ubicado.

**Preguntas iniciales:**
1. ¿Cuál es la estructura del equipo de marketing (tamaño, ubicaciones, funciones: contenido, diseño, performance, brand)?
2. ¿El equipo es completamente remoto o hay una sede central con algunos miembros en remoto?
3. ¿Cuáles son los mayores problemas del equipo actualmente: falta de cohesión, velocidad de ejecución, calidad del trabajo o alineación con el negocio?
4. ¿Qué herramientas de colaboración usa el equipo actualmente?

**LOS RITUALES DEL EQUIPO DE MARKETING EN REMOTO:**

EL WEEKLY MARKETING SYNC
El ritual más importante del equipo de marketing en remoto es la reunión semanal del equipo. Ayúdame a diseñar el formato del weekly marketing sync que funciona en remoto: la duración óptima (45-60 minutos, no más), la agenda que combina alineación sobre las prioridades de la semana con visibilidad sobre el trabajo en curso y con un espacio para compartir aprendizajes o inspiración, cómo mantener la energía del equipo en una reunión por vídeo y cómo evitar que se convierta en un status report aburrido.

RITUALES DE CREATIVIDAD EN ASÍNCRONO
El trabajo creativo en marketing necesita inputs colectivos que en la oficina ocurren de manera informal. Diseña conmigo los rituales de creatividad del equipo de marketing en remoto: los canales de Slack para compartir inspiración y referencias sin que sean obligatorios ni generen ruido, los brainstormings asíncronos en Notion o Miro donde cada miembro añade ideas antes de la sesión de síntesis y los espacios de feedback entre pares que mantienen la calidad sin depender de que el manager revise todo.

COHESIÓN DE EQUIPO SIN OFICINA
La cohesión del equipo de marketing, que por naturaleza es un equipo que trabaja con ideas y necesita confianza para compartirlas, es especialmente importante en remoto. Dame los rituales que construyen cohesión sin forzar socialización no deseada: el canal de no-trabajo en Slack, la reunión mensual informal de equipo sin agenda de trabajo, el reconocimiento público de los logros individuales y la celebración de los lanzamientos de campaña que hace visible el trabajo del equipo.

**PROCESOS DE TRABAJO EN REMOTO:**

EL PROCESO DE APROBACIÓN DE CAMPAÑAS EN ASÍNCRONO
El cuello de botella más común en los equipos de marketing en remoto son las aprobaciones. Ayúdame a diseñar el proceso de aprobación de campañas que funciona en asíncrono: el documento de brief de campaña que contiene todo lo que el aprobador necesita saber para dar el visto bueno sin una reunión, el sistema de comentarios en Figma o Notion para el feedback sobre los creativos, el SLA de respuesta a las solicitudes de aprobación y los criterios de cuándo la asincronía no es suficiente y hay que agendar una llamada.

DOCUMENTACIÓN COMO BASE DEL TRABAJO EN REMOTO
Los equipos de marketing en remoto que funcionan bien tienen una cultura de documentación que los equipos co-ubicados no necesitan porque resuelven todo en conversaciones. Dame el sistema de documentación del equipo de marketing: los documentos que deben existir siempre actualizados (brand guidelines, proceso de producción de contenido, calendario de campañas, repositorio de aprendizajes), el formato que hace que los documentos sean útiles y no se conviertan en documentos que nadie lee y la cultura de actualización que mantiene la documentación viva.

**LIDERAZGO A DISTANCIA:**

GESTIÓN DEL RENDIMIENTO EN REMOTO
Evaluar el rendimiento de un equipo de marketing en remoto requiere métricas claras porque no hay observación directa del trabajo. Ayúdame a establecer el sistema de gestión del rendimiento en remoto: los OKRs individuales que alinean el trabajo de cada miembro del equipo con los objetivos de marketing, las reuniones 1:1 semanales como el ritual central de la gestión del rendimiento individual y el sistema de feedback continuo que no depende de la revisión anual.

DETECCIÓN DE PROBLEMAS SIN SEÑALES FÍSICAS
En la oficina, el manager detecta los problemas de un miembro del equipo por señales no verbales. En remoto, hay que crear mecanismos alternativos. Dame las estrategias para detectar y atender los problemas de bienestar y rendimiento del equipo en remoto antes de que se conviertan en crisis: las preguntas de check-in en los 1:1, las encuestas de pulso del equipo y los indicadores de rendimiento que alertan antes de que el problema sea visible.

Dame el sistema completo de liderazgo del equipo de marketing en remoto que hace que el equipo sea más productivo, más creativo y más cohesionado que la mayoría de los equipos que trabajan en la misma oficina.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de liderazgo y gestión de equipos de marketing distribuidos en remoto',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Engineering leadership en equipos distribuidos',
                'description'       => 'Lidera el equipo de ingeniería en múltiples zonas horarias: los rituales que escalan en remoto, la gestión del rendimiento a distancia y la cultura técnica que se mantiene sin cercanía física.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Engineering o Engineering Manager con experiencia liderando equipos de ingeniería distribuidos en múltiples zonas horarias. Quiero construir el sistema de liderazgo técnico que hace que el equipo de ingeniería distribuido sea tan efectivo o más que un equipo co-ubicado.

**Preguntas iniciales:**
1. ¿Cuál es la distribución geográfica del equipo y la diferencia máxima de zona horaria entre los miembros?
2. ¿El equipo es completamente remoto o hay algunos nodos con varios miembros en la misma ubicación?
3. ¿Cuáles son los mayores retos actuales: coordinación entre zonas horarias, mantenimiento de la cultura técnica, gestión del rendimiento individual o velocidad de entrega?
4. ¿El equipo opera en squads autónomos o en un equipo único con un backlog compartido?

**DISEÑO ORGANIZATIVO PARA LA DISTRIBUCIÓN:**

SQUADS Y ZONAS HORARIAS
El diseño organizativo tiene un impacto enorme en la efectividad de los equipos distribuidos. Ayúdame a optimizar el diseño del equipo para la distribución: cómo organizar los squads para minimizar la dependencia entre personas en zonas horarias alejadas, cuándo tiene sentido crear squads por zona horaria versus squads funcionales con solapamiento horario y cómo gestionar las dependencias entre squads distribuidos con procesos asíncronos que no bloqueen la entrega.

EL SOLAPAMIENTO DE HORAS: EL RECURSO MÁS ESCASO
En los equipos distribuidos, las horas en que todos los miembros del equipo están disponibles simultáneamente son el recurso más valioso y más escaso. Ayúdame a gestionar el solapamiento de horas: cómo identificar las horas de solapamiento máximo entre zonas horarias, qué actividades requieren sincronía (decisiones complejas, pair programming, debugging de problemas críticos) y cuáles pueden hacerse de manera asíncrona (code review, documentación, diseño de arquitectura).

**RITUALES DE INGENIERÍA EN REMOTO:**

DAILY STANDUP DISTRIBUIDO
El daily standup del equipo de ingeniería en remoto requiere adaptaciones que preserven el valor sin crear fricción horaria. Diseña conmigo el daily standup del equipo distribuido: el standup asíncrono en Slack con el formato estándar (qué hice ayer, qué haré hoy, hay algún bloqueante) como alternativa a la videollamada obligatoria, cuándo la llamada síncrona añade más valor que el standup asíncrono y cómo el manager procesa los updates asíncronos para detectar bloqueantes y actuar rápido.

SPRINT PLANNING Y RETROSPECTIVAS EN REMOTO
Las ceremonias de Scrum o las equivalentes en otros marcos de trabajo requieren adaptación para funcionar en remoto. Ayúdame a diseñar el sprint planning distribuido: la preparación asíncrona del backlog antes de la sesión síncrona, las herramientas de colaboración (Miro, Figma, Linear) que facilitan la participación de todos independientemente de su ubicación y el formato de retrospectiva que genera insights genuinos sin la incomodidad de hablar sobre problemas delante de la cámara.

**CULTURA TÉCNICA EN REMOTO:**

MANTENIMIENTO DE LOS ESTÁNDARES TÉCNICOS
La cultura técnica del equipo (las prácticas de código, los principios de arquitectura, los estándares de calidad) se mantiene en la oficina a través de conversaciones informales y la observación directa. En remoto, hay que construir mecanismos explícitos. Ayúdame a diseñar el sistema de mantenimiento de la cultura técnica en remoto: el tech book club mensual, los tech talks internos grabados y accesibles asíncronamente, los guilds de práctica técnica y las sesiones de pair programming distribuido que construyen la cohesión técnica del equipo.

CODE REVIEW COMO HERRAMIENTA DE CULTURA EN REMOTO
En los equipos distribuidos, el code review es uno de los pocos rituales donde los engineers interactúan directamente con el trabajo de sus compañeros. Ayúdame a optimizar el code review en remoto: el SLA de revisión que asegura que los PRs no se quedan bloqueados por diferencias de zona horaria, el tono de los comentarios que construye relaciones positivas cuando no hay interacción cara a cara y cómo usar el code review como oportunidad de mentoring asíncrono.

**GESTIÓN DEL RENDIMIENTO A DISTANCIA:**

MÉTRICAS DE RENDIMIENTO INDIVIDUAL
Sin observación directa, las métricas de rendimiento son más importantes en los equipos distribuidos. Dame el sistema de métricas de rendimiento individual para engineers en remoto: las métricas de output (velocidad de entrega, calidad del código, impacto de las features), las métricas de proceso (participación en code reviews, documentación generada, contribución a la cultura técnica) y cómo usar estas métricas en las conversaciones de desarrollo sin convertirlas en microgestión.

Dame el manual completo de engineering leadership para equipos distribuidos que hace que la distribución geográfica sea una ventaja competitiva en lugar de un obstáculo para la excelencia técnica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Liderazgo de equipos de ingeniería distribuidos en múltiples zonas horarias',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design leadership en remoto',
                'description'       => 'Lidera el equipo de diseño cuando está distribuido: el proceso de critique en remoto, la colaboración en Figma en tiempo real y los rituales que mantienen la identidad del equipo sin oficina compartida.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Design o Design Director con experiencia liderando equipos de diseño distribuidos en empresas de tecnología. Quiero construir el sistema de liderazgo del equipo de diseño en remoto que mantiene la calidad del trabajo, la cohesión del equipo y la identidad de diseño sin compartir un espacio físico.

**Preguntas iniciales:**
1. ¿Cuál es la estructura del equipo de diseño (UX researchers, product designers, UI designers, design system)?
2. ¿El equipo está completamente en remoto o hay algunos miembros en la misma ubicación?
3. ¿Cuáles son los mayores retos del equipo en remoto: la calidad del trabajo, la velocidad de iteración, la cohesión del equipo o la alineación con los equipos de producto?
4. ¿Qué herramientas de diseño y colaboración usa el equipo actualmente?

**PROCESOS DE DISEÑO EN REMOTO:**

CRITIQUE SESSIONS EN REMOTO
La critique session es el ritual más importante del equipo de diseño y el que más sufre cuando el equipo está distribuido. Ayúdame a diseñar el proceso de critique en remoto que funciona: el formato de presentación del trabajo en Figma que da contexto suficiente para que el feedback sea útil, las normas de la critique en remoto (cámara encendida, turno de silencio para que todos lean antes de hablar, comentarios escritos en Figma antes de la discusión verbal) y cómo crear un ambiente donde los diseñadores junior se atreven a compartir trabajo inacabado sin miedo al juicio.

COLABORACIÓN EN FIGMA EN TIEMPO REAL Y ASÍNCRONO
Figma es la herramienta que hace posible la colaboración de diseño en remoto, pero usarla bien requiere establecer protocolos. Diseña conmigo el sistema de colaboración en Figma para el equipo distribuido: la estructura del workspace que hace que cualquier miembro del equipo encuentre lo que busca en segundos, los protocolos de comentarios en Figma para el feedback asíncrono, las convenciones de naming y organización que facilitan el handoff y la colaboración simultánea y las plantillas que aceleran el inicio de cada tipo de proyecto.

DESIGN REVIEWS CON STAKEHOLDERS EN REMOTO
Presentar el trabajo de diseño a los stakeholders en remoto requiere más preparación que en la oficina. Ayúdame a diseñar el proceso de design review con stakeholders en remoto: cómo preparar el documento de contexto que el stakeholder lee antes de la sesión (el problema que se resuelve, las alternativas exploradas, la decisión tomada y los motivos), cómo estructurar la sesión de review de 45 minutos para que el feedback sea específico y accionable, y cómo gestionar los stakeholders que quieren rediseñar todo en la reunión.

**CULTURA DE DISEÑO EN REMOTO:**

IDENTIDAD DEL EQUIPO SIN OFICINA
La identidad de un equipo de diseño se construye con un lenguaje visual compartido, un conjunto de referencias y una forma de hablar sobre el diseño que es propia del equipo. En remoto, estos elementos deben construirse explícitamente. Ayúdame a construir la identidad del equipo de diseño en remoto: el canal de Slack donde el equipo comparte inspiración y referentes, el ritual mensual de "show your work" donde cada diseñador comparte algo en lo que está trabajando o aprendiendo, y las actividades de equipo que no son sobre trabajo pero que construyen la confianza necesaria para el feedback honesto.

DESIGN SYSTEM COMO PEGAMENTO CULTURAL
El design system no es solo una herramienta técnica; es el artefacto que codifica la cultura de diseño del equipo y asegura la consistencia del producto. Ayúdame a gestionar el design system en un equipo distribuido: el proceso de contribución que permite que cualquier miembro del equipo proponga cambios, el proceso de revisión y aprobación de componentes nuevos, la documentación de los principios de diseño que explica el "por qué" detrás de las decisiones y la cadencia de actualización que mantiene el sistema vivo sin convertirse en un proyecto de mantenimiento interminable.

**LIDERAZGO DE DISEÑADORES EN REMOTO:**

DESARROLLO PROFESIONAL A DISTANCIA
Desarrollar profesionalmente a los diseñadores del equipo sin la observación directa que facilita el liderazgo en la oficina requiere mecanismos explícitos. Ayúdame a diseñar el sistema de desarrollo profesional en remoto: los 1:1 semanales con el formato que los hace efectivos (no son status reports; son conversaciones de desarrollo), el plan de carrera individual que da a cada diseñador claridad sobre su siguiente nivel y los proyectos stretch que aceleran el desarrollo sin sobrecarga.

DETECCIÓN DEL BURNOUT EN EL EQUIPO DE DISEÑO
Los diseñadores en remoto son especialmente vulnerables al burnout porque la frontera entre el trabajo y la vida personal es más difusa. Dame las señales de alerta del burnout en el equipo de diseño en remoto y el sistema para detectarlas y actuar antes de que se conviertan en una baja o una dimisión.

Dame el sistema completo de design leadership en remoto que hace que el equipo sea reconocido por la excelencia de su trabajo y por ser un lugar donde los diseñadores quieren estar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Liderazgo de equipos de diseño distribuidos y cultura de diseño en remoto',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales management en remoto',
                'description'       => 'Gestiona el equipo comercial a distancia: el coaching por vídeo, el acompañamiento en llamadas remotas y la motivación del equipo de ventas cuando no existe la energía del sales floor físico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Sales o Sales Manager con experiencia gestionando equipos de ventas completamente remotos o híbridos en empresas B2B de tecnología. Quiero construir el sistema de gestión del equipo de ventas en remoto que mantiene la energía, la accountability y el rendimiento del equipo sin el beneficio de compartir el mismo espacio físico.

**Preguntas iniciales:**
1. ¿Cuál es la estructura del equipo de ventas (SDRs, AEs, AMs) y su distribución geográfica?
2. ¿El modelo de ventas es principalmente inbound, outbound o mixto?
3. ¿Cuáles son los mayores retos del equipo en remoto: energía, accountability, coaching, coordinación o cultura?
4. ¿Cuál es la tasa de attainment actual y cómo se compara con cuando el equipo estaba en oficina, si lo estuvo?

**EL SALES FLOOR VIRTUAL:**

REPLICAR LA ENERGÍA SIN EL ESPACIO FÍSICO
El sales floor físico tiene una energía de competencia amigable y urgencia que motiva a los vendedores y que es muy difícil de replicar en remoto. Ayúdame a construir el equivalente virtual: el canal de Slack de celebraciones donde se anuncian cada deal cerrado en tiempo real, el leaderboard visible para todo el equipo con las métricas de actividad y resultados de la semana, las sesiones de llamadas en grupo en Zoom donde cada comercial hace sus llamadas de prospección en paralelo mientras el manager está disponible para coaching inmediato y las competiciones de equipo con incentivos que crean urgencia artificial en períodos de bajo rendimiento.

RITUALES DE ENERGÍA Y MOTIVACIÓN
La energía del equipo de ventas en remoto requiere inversión deliberada. Diseña los rituales de energía del equipo: el kickoff de la semana de lunes que establece el tono, celebra los logros de la semana anterior y alinea los objetivos de la semana nueva, la llamada de cierre del mes o el trimestre que crea urgencia colectiva para los últimos días y las microinteracciones de celebración a lo largo del día que mantienen la energía alta sin requerir reuniones.

**COACHING EN REMOTO:**

CALL COACHING SIN ESTAR EN LA SALA
El coaching de llamadas de ventas es el ritual más impactante del sales manager y el que más sufre con la transición al remoto. Ayúdame a adaptar el call coaching al entorno remoto: el shadowing de llamadas en directo a través de Zoom donde el manager escucha sin intervenir, las herramientas de grabación y análisis de llamadas (Gong, Chorus, Salesloft) que permiten el coaching asíncrono con comentarios en los momentos exactos de la llamada que requieren mejora, el formato de la sesión de call review (el comercial comparte la grabación, hace su autoevaluación antes de recibir el feedback del manager) y cómo priorizar qué llamadas revisar cuando el equipo tiene un volumen alto.

PIPELINE REVIEWS EN REMOTO
La pipeline review semanal es el ritual de gestión más importante del equipo de ventas. Dame el formato de pipeline review en remoto que genera accountability real: la preparación que el comercial debe hacer antes de la sesión (el estado actualizado de cada deal en el CRM, la siguiente acción y la fecha), las preguntas que el manager hace para evaluar la calidad del pipeline versus la cantidad y cómo convertir los hallazgos de la pipeline review en acciones de coaching concretas para la semana.

**GESTIÓN DEL RENDIMIENTO A DISTANCIA:**

MÉTRICAS DE ACTIVIDAD Y RESULTADO EN REMOTO
Sin la observación directa, las métricas son el proxy del rendimiento en remoto. Ayúdame a diseñar el cuadro de mando del equipo de ventas en remoto: las métricas de actividad (llamadas, emails, demostraciones completadas) que el manager monitoriza diariamente, las métricas de pipeline (valor total, velocidad, tasa de conversión por etapa) que se revisan semanalmente y las métricas de resultado (quota attainment, ACV) que se evalúan mensualmente. Incluye los umbrales que disparan una conversación de coaching o de desempeño.

ONBOARDING DE NUEVOS COMERCIALES EN REMOTO
Incorporar un nuevo comercial al equipo de ventas en remoto es uno de los procesos más difíciles porque la mayor parte del aprendizaje informal en la oficina se pierde. Diseña el programa de onboarding de nuevos comerciales en remoto: el plan de los primeros 30, 60 y 90 días, el buddy program que asigna a un comercial experimentado como referencia durante las primeras semanas, el rol play de ventas en remoto como práctica antes de las primeras llamadas reales y los hitos de aceleración al rendimiento completo que el nuevo comercial debe alcanzar en cada etapa.

Dame el sistema completo de sales management en remoto que mantiene la energía, la accountability y el rendimiento del equipo comercial sin el sales floor físico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestión y coaching de equipos de ventas en entornos remotos e híbridos',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product leadership en equipos distribuidos',
                'description'       => 'Lidera la organización de producto cuando está distribuida: la comunicación escrita que sustituye a las conversaciones de pasillo, el proceso de decisión asíncrono y la cultura que se construye sin espacio físico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Product Officer o Head of Product con experiencia liderando organizaciones de producto distribuidas en múltiples ubicaciones y zonas horarias. Quiero construir el sistema de liderazgo de producto en remoto que hace que la organización sea efectiva, cohesionada y que entregue valor de manera consistente sin compartir espacio físico.

**Preguntas iniciales:**
1. ¿Cuál es la estructura de la organización de producto (PMs, diseñadores, researchers) y su distribución geográfica?
2. ¿El equipo de producto trabaja con squads de ingeniería co-ubicados o también los engineers están distribuidos?
3. ¿Cuáles son los mayores retos del equipo de producto en remoto: velocidad de decisión, alineación estratégica, cohesión del equipo o colaboración con ingeniería?
4. ¿Hay una cultura de escritura establecida en el equipo o la comunicación es principalmente oral?

**LA COMUNICACIÓN ESCRITA COMO COMPETENCIA CENTRAL:**

LA CULTURA DE ESCRITURA DEL EQUIPO DE PRODUCTO
En los equipos de producto distribuidos, la calidad de la comunicación escrita determina la calidad de las decisiones y la velocidad de ejecución. Los equipos que resuelven todo en conversaciones de pasillo no pueden operar en remoto porque no hay pasillo. Ayúdame a construir la cultura de escritura del equipo de producto: los documentos que deben existir para cada tipo de decisión (PRDs, design briefs, decisiones de arquitectura, postmortems), el estándar de calidad de los documentos (claros, concisos, con el contexto necesario para que el lector pueda decidir sin preguntar), el proceso de feedback asíncrono sobre los documentos y cómo hacer que el equipo escriba más y mejor sin que se sienta como burocracia.

EL DECISION LOG
En los equipos distribuidos, las decisiones que se toman en conversaciones informales son invisibles para el resto del equipo y crean confusión. Diseña conmigo el sistema de decision log del equipo de producto: qué tipos de decisiones requieren documentación, el formato del registro de decisión (el contexto, las alternativas consideradas, la decisión tomada y los motivos, las consecuencias anticipadas) y cómo el decision log se convierte en la memoria institucional del equipo.

**PROCESOS DE PRODUCTO EN REMOTO:**

DISCOVERY EN ASÍNCRONO
El discovery de producto tradicional se hace en workshops y sesiones de trabajo en equipo. En remoto, hay que adaptar estos procesos para que funcionen en asíncrono. Ayúdame a diseñar el proceso de discovery asíncrono: el documento de problem brief que el PM comparte antes de la sesión para que todos lleguen con contexto y perspectiva, las herramientas de colaboración asíncrona (Miro, FigJam, Notion) para el mapeo de oportunidades y el ejercicio de priorización asíncrono que recoge la perspectiva de todos antes de la sesión de síntesis síncrona.

ROADMAP PLANNING EN EQUIPOS DISTRIBUIDOS
El proceso de roadmap planning en equipos distribuidos requiere más estructura que en la oficina para asegurar que todas las voces se escuchan y que las decisiones de priorización reflejan el conocimiento colectivo del equipo. Dame el proceso de roadmap planning distribuido: la recopilación asíncrona de inputs de los stakeholders antes de las sesiones, el formato de la sesión de priorización que funciona con un equipo en múltiples zonas horarias y cómo comunicar el roadmap de manera que genere alineación y no preguntas recurrentes.

**CULTURA DE EQUIPO DE PRODUCTO EN REMOTO:**

ONBOARDING DE PMs EN REMOTO
Los primeros días de un nuevo PM en el equipo son críticos para su efectividad a largo plazo. En remoto, el onboarding requiere un sistema muy explícito porque no hay immersión natural en el ambiente de la oficina. Diseña el programa de onboarding de PMs en remoto: el documento de contexto del producto y el mercado que el nuevo PM debe leer antes de empezar, el plan de reuniones con los stakeholders clave en las primeras dos semanas, el primer proyecto pequeño que le da visibilidad y credibilidad rápidas y el buddy PM que le ayuda a navegar la cultura del equipo.

RITUALES DE EQUIPO QUE CONSTRUYEN CONFIANZA
La confianza entre los miembros del equipo de producto es la base de la colaboración efectiva y el debate productivo. En remoto, la confianza hay que construirla de manera deliberada. Ayúdame a diseñar los rituales que construyen confianza en el equipo de producto sin oficina: la reunión mensual de equipo sin agenda de trabajo, los 1:1 entre PMs de diferentes squads para mantener la cohesión horizontal y los espacios donde el equipo puede compartir las dudas y los fracasos sin que sean juzgados.

Dame el sistema completo de product leadership en remoto que hace que la organización de producto distribuida sea reconocida por su capacidad de tomar decisiones rápidas y entregar productos de impacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Liderazgo de organizaciones de producto distribuidas en entornos remotos',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del rendimiento en remoto',
                'description'       => 'Evalúa y desarrolla a las personas cuando no las ves a diario: los indicadores de rendimiento en remoto, las conversaciones de desarrollo por vídeo y el feedback continuo que sustituye a la observación directa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en gestión de personas y performance management con experiencia adaptando los sistemas de gestión del rendimiento a los entornos de trabajo en remoto e híbrido. Quiero diseñar o mejorar el sistema de gestión del rendimiento para que funcione cuando el manager y los miembros del equipo no comparten el mismo espacio físico.

**Preguntas iniciales:**
1. ¿Cuál es el modelo de trabajo actual: totalmente remoto, híbrido con flexibilidad o híbrido con días fijos en la oficina?
2. ¿Existe un proceso formal de evaluación del rendimiento actualmente o es informal?
3. ¿Cuáles son los mayores retos de la gestión del rendimiento en remoto: la falta de visibilidad sobre el trabajo, la dificultad para dar feedback, la equidad en las evaluaciones o el desarrollo profesional?
4. ¿Los managers tienen experiencia gestionando en remoto o es una capacidad que hay que desarrollar?

**LOS PRINCIPIOS DEL RENDIMIENTO EN REMOTO:**

OUTPUT SOBRE PRESENCIA
El mayor error de la gestión del rendimiento en remoto es intentar medir la presencia (horas conectado, tiempo de respuesta en Slack) en lugar del output (trabajo entregado, impacto generado, objetivos alcanzados). Ayúdame a articular los principios del rendimiento en remoto que deben guiar el sistema: la definición clara de qué se espera de cada persona (objetivos, entregables, comportamientos), la medición basada en resultados y no en actividad visible y la autonomía sobre el cómo a cambio de accountability sobre el qué.

CONFIANZA COMO FUNDAMENTO
La gestión del rendimiento en remoto requiere un nivel de confianza más explícito que en la oficina. Un manager que en remoto microgestiona (pide actualizaciones constantes, monitoriza el tiempo de respuesta, requiere check-ins frecuentes) destruye la productividad y la motivación del equipo. Dame el framework de confianza para la gestión en remoto: cómo establecer expectativas claras desde el principio, cómo hacer visible el trabajo sin microgestionar y cómo calibrar cuándo el nivel de autonomía es apropiado según la experiencia y el historial del empleado.

**EL SISTEMA DE GESTIÓN DEL RENDIMIENTO EN REMOTO:**

OBJETIVOS Y OKRs EN REMOTO
Los objetivos claros son el sustituto de la supervisión directa en el trabajo en remoto. Ayúdame a diseñar el sistema de objetivos que funciona en remoto: el proceso de establecimiento de OKRs individuales que están alineados con los objetivos del equipo y la empresa, la cadencia de revisión del avance (check-in quincenal o mensual en lugar de revisión anual), la conversación de ajuste cuando los objetivos se vuelven irrelevantes o cuando las circunstancias cambian y cómo usar los objetivos como herramienta de desarrollo y no solo de evaluación.

EL 1:1 EN REMOTO: EL RITUAL CENTRAL
En remoto, el 1:1 semanal entre el manager y cada miembro del equipo es el ritual más importante de la gestión del rendimiento. Ayúdame a diseñar el 1:1 en remoto que genera valor real: el formato que hace que la reunión no sea un status report (el estado de los proyectos va en un documento compartido, no en la reunión), las preguntas que el manager hace para entender el estado real del empleado (qué le está costando, qué necesita del manager, qué aprendió la semana pasada), cómo usar el 1:1 para el desarrollo profesional y el feedback continuo y cómo crear el ambiente psicológicamente seguro para que el empleado comparta los problemas antes de que se conviertan en crisis.

**FEEDBACK Y DESARROLLO EN REMOTO:**

FEEDBACK CONTINUO SIN INTERACCIÓN ESPONTÁNEA
En la oficina, el feedback ocurre de manera espontánea en conversaciones informales. En remoto, hay que crear mecanismos para que el feedback continúe fluyendo. Diseña el sistema de feedback continuo en remoto: los canales y herramientas para dar feedback específico y oportuno en el contexto del trabajo (comentarios en los documentos, mensajes de Slack con el reconocimiento inmediato después de una buena presentación), la cadencia de las conversaciones de feedback más estructuradas y cómo hacer que el feedback en remoto sea tan natural y frecuente como en la oficina.

EVALUACIONES FORMALES EN REMOTO
Las evaluaciones formales de rendimiento en remoto requieren un proceso más estructurado para compensar la falta de observación directa. Dame el diseño del proceso de evaluación formal en remoto: la autoevaluación como punto de partida, el feedback de 360 grados que recoge la perspectiva de los compañeros y los stakeholders, la conversación de evaluación por videollamada que es de desarrollo y no solo de calificación y cómo gestionar los sesgos de la evaluación en remoto (el sesgo de proximidad que favorece a los que están más visibles).

EQUIDAD EN LAS EVALUACIONES HÍBRIDAS
El mayor riesgo de los modelos híbridos es que los empleados que trabajan más desde la oficina sean evaluados más favorablemente que los que trabajan más en remoto, aunque su rendimiento sea equivalente. Ayúdame a diseñar el sistema de calibración de evaluaciones que asegura la equidad entre empleados remotos e híbridos.

Dame el sistema completo de gestión del rendimiento en remoto que es justo, efectivo y que desarrolla a las personas independientemente de dónde trabajen.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de gestión del rendimiento para equipos en remoto e híbridos',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Liderazgo del equipo financiero en entornos híbridos',
                'description'       => 'Gestiona el equipo de finanzas en formato híbrido: los rituales que mantienen la coordinación cuando parte del equipo está en oficina y parte en casa, y los procesos que aseguran la consistencia del trabajo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO o Director de Finanzas con experiencia gestionando equipos financieros en entornos de trabajo híbrido, donde parte del equipo trabaja en la oficina y parte en remoto de manera flexible o según días fijos. Quiero construir el sistema de liderazgo del equipo de finanzas que funciona de manera equitativa y eficiente independientemente de dónde trabaje cada miembro.

**Preguntas iniciales:**
1. ¿Cuál es la política híbrida de la empresa y del equipo de finanzas (días fijos en oficina, totalmente flexible, o modelo asíncrono-primero)?
2. ¿Cuál es el tamaño del equipo de finanzas y sus subfunciones (contabilidad, FP&A, tesorería, controlling)?
3. ¿Cuáles son los mayores retos del modelo híbrido para el equipo de finanzas: el cierre mensual, la coordinación de las tareas con plazos fijos, la equidad entre empleados en oficina y en remoto o la cultura de equipo?
4. ¿Las herramientas del equipo de finanzas están accesibles en la nube o hay dependencias de sistemas que requieren estar en la oficina?

**LOS RETOS ESPECÍFICOS DEL EQUIPO DE FINANZAS HÍBRIDO:**

EL CIERRE MENSUAL EN HÍBRIDO
El cierre mensual es el proceso más crítico y con mayor presión temporal del equipo de finanzas. En un entorno híbrido, la coordinación del cierre es más compleja porque diferentes miembros del equipo pueden estar en diferentes ubicaciones en los días críticos. Ayúdame a diseñar el proceso de cierre mensual que funciona en híbrido: el calendar compartido que establece qué días de cierre se espera que el equipo esté en la oficina (si aplica), la checklist de cierre en Notion o Asana que da visibilidad sobre el estado de cada tarea independientemente de dónde esté el responsable, los SLAs de respuesta entre miembros del equipo durante el período de cierre y cómo gestionar los bloqueantes de cierre cuando el equipo no está físicamente junto.

ACCESO A SISTEMAS Y DATOS EN REMOTO
Los equipos de finanzas dependen de ERP, sistemas bancarios y herramientas de reporting que a veces tienen restricciones de acceso en remoto. Ayúdame a resolver los problemas técnicos que limitan el trabajo remoto del equipo de finanzas: la evaluación de qué sistemas requieren acceso desde la red de la empresa (VPN), cuáles pueden migrarse a herramientas en la nube equivalentes para el trabajo en remoto y cómo gestionar los procesos que aún requieren presencia física (firmas originales, acceso a documentación física).

**LIDERAZGO EN HÍBRIDO:**

EQUIDAD ENTRE EMPLEADOS EN OFICINA Y EN REMOTO
El mayor riesgo del modelo híbrido es que los empleados que están más en la oficina tienen más visibilidad con el manager y son percibidos como más comprometidos, aunque su rendimiento sea equivalente o inferior al de los que trabajan en remoto. Ayúdame a diseñar el sistema de liderazgo que asegura la equidad: las reuniones de equipo que siempre incluyen a todos independientemente de su ubicación (nunca reuniones presenciales que los remotos deben seguir por teléfono), las conversaciones de carrera que se tienen igual de frecuentemente con los remotos que con los presenciales y la evaluación del rendimiento basada en output y no en presencia visible.

RITUALES DE EQUIPO EN HÍBRIDO
Los rituales del equipo de finanzas deben diseñarse para que funcionen igualmente bien con una distribución variable de presencialidad. Diseña los rituales del equipo de finanzas híbrido: la reunión semanal del equipo que incluye a todos (si hay miembros en remoto, la reunión es siempre por vídeo aunque algunos estén en la misma sala), el canal de comunicación del equipo que mantiene la comunicación fluida entre los que están en oficina y los que están en remoto y los encuentros presenciales del equipo completo con una frecuencia que equilibra el coste y el beneficio de la presencialidad.

**PROCESOS Y HERRAMIENTAS:**

DIGITALIZACIÓN DE LOS PROCESOS MANUALES
Los equipos de finanzas que operan con documentos físicos y procesos que requieren presencia tienen dificultades especiales en el modelo híbrido. Ayúdame a identificar los procesos del equipo de finanzas que aún dependen de la presencia física y a diseñar su digitalización: la firma electrónica para los documentos que requieren autorización, el workflow de aprobación digital para los procesos que antes requerían una firma en papel y el archivo digital de los documentos financieros para que sean accesibles desde cualquier ubicación.

COMUNICACIÓN ASÍNCRONA EN FINANZAS
Los equipos de finanzas tienen una cultura de comunicación más formal que otros departamentos, pero en el modelo híbrido es importante que la comunicación asíncrona fluya bien entre los miembros que están en diferentes ubicaciones. Dame el diseño del sistema de comunicación asíncrona del equipo de finanzas: los canales por función (contabilidad, FP&A, tesorería) en Slack o Teams, el SLA de respuesta a los mensajes no urgentes y el protocolo para los temas urgentes que requieren respuesta inmediata.

Dame el sistema completo de liderazgo del equipo de finanzas en entorno híbrido que asegura la eficiencia operativa, la equidad entre todos los miembros del equipo y la consistencia del trabajo financiero independientemente de la ubicación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Liderazgo de equipos financieros en entornos de trabajo híbrido',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de equipos jurídicos en remoto',
                'description'       => 'Lidera el departamento legal cuando está distribuido: la revisión de documentos en asíncrono, la coordinación de plazos procesales desde distintas ubicaciones y la cultura jurídica sin proximidad física.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o Director Legal con experiencia liderando departamentos jurídicos internos en entornos de trabajo en remoto e híbrido. Quiero construir el sistema de gestión del equipo legal que funciona cuando los abogados no están físicamente juntos, preservando la calidad del trabajo jurídico y la coordinación que los plazos procesales y regulatorios exigen.

**Preguntas iniciales:**
1. ¿Cuál es la estructura del equipo jurídico (tamaño, especialidades: contratos, laboral, compliance, litigios)?
2. ¿El equipo es completamente remoto o trabaja en modelo híbrido?
3. ¿Cuáles son los mayores retos del equipo jurídico en remoto: la coordinación de plazos, la revisión de documentos, la comunicación con los clientes internos o la cultura de equipo?
4. ¿Las herramientas de gestión documental y el acceso a los sistemas jurídicos están disponibles en la nube o hay dependencias de sistemas locales?

**LA GESTIÓN DOCUMENTAL EN REMOTO:**

REPOSITORIO CENTRALIZADO DE DOCUMENTOS JURÍDICOS
El trabajo jurídico gira alrededor de los documentos: contratos, escrituras, resoluciones, escritos procesales. En remoto, el acceso a estos documentos desde cualquier ubicación es crítico. Ayúdame a diseñar el sistema de gestión documental del equipo jurídico en remoto: la estructura del repositorio en la nube (SharePoint, Google Drive o un CLM) que organiza los documentos por tipo, asunto y cliente, los permisos de acceso que aseguran la confidencialidad y la seguridad de la información jurídica y el sistema de versionado de documentos que asegura que todos trabajan sobre la versión correcta.

REVISIÓN Y COMENTARIOS EN ASÍNCRONO
La revisión colaborativa de documentos jurídicos en remoto es uno de los procesos que más cambia respecto a la oficina. Diseña el proceso de revisión asíncrona de documentos jurídicos: el uso de los cambios controlados y los comentarios en Word o Google Docs para la revisión colaborativa, el protocolo de consolidación de comentarios cuando varios abogados revisan el mismo documento, los plazos internos de revisión que aseguran que los documentos se entregan en plazo sin llamadas de última hora y cómo gestionar las revisiones urgentes cuando el abogado responsable no está disponible.

**COORDINACIÓN DE PLAZOS Y URGENCIAS:**

EL SISTEMA DE GESTIÓN DE PLAZOS JURÍDICOS EN REMOTO
Los plazos procesales y regulatorios no esperan y su incumplimiento puede tener consecuencias gravísimas. En remoto, la gestión de los plazos requiere un sistema explícito que no dependa de que alguien lo recuerde. Ayúdame a diseñar el sistema de gestión de plazos del equipo jurídico en remoto: el calendario compartido de plazos críticos (demandas, recursos, alegaciones, renovaciones regulatorias) con alertas automáticas con suficiente antelación, el protocolo de verificación diaria de los plazos próximos por parte del responsable del asunto y el plan de contingencia cuando el abogado responsable no está disponible en los días previos a un plazo crítico.

GESTIÓN DE URGENCIAS SIN OFICINA
Las urgencias jurídicas requieren disponibilidad inmediata y colaboración rápida. Diseña el protocolo de gestión de urgencias del equipo jurídico en remoto: el canal de urgencias en Slack o Teams que activa la disponibilidad de todos los miembros del equipo cuando hay una crisis, el protocolo de escalado cuando el abogado responsable no responde en el tiempo acordado y cómo documentar y gestionar las crisis jurídicas de manera que la solución sea trazable y reproducible.

**CULTURA DEL EQUIPO JURÍDICO EN REMOTO:**

CONFIDENCIALIDAD Y SEGURIDAD EN REMOTO
El trabajo jurídico maneja información altamente confidencial y el entorno remoto introduce riesgos específicos de seguridad. Ayúdame a establecer las políticas de seguridad para el equipo jurídico en remoto: las normas de uso de redes (prohibición de redes públicas sin VPN), los requisitos de los dispositivos (cifrado, contraseñas, gestión de dispositivos), la política de pantallas en espacios públicos y el protocolo de notificación en caso de pérdida de un dispositivo o brecha de seguridad.

DESARROLLO PROFESIONAL Y MENTORING EN REMOTO
Los abogados junior aprenden mucho del contacto diario con los senior en la oficina: cómo redactan los emails al cliente, cómo plantean los argumentos jurídicos, cómo gestionan una negociación. En remoto, este aprendizaje informal desaparece y hay que sustituirlo con mecanismos explícitos. Diseña el programa de desarrollo y mentoring del equipo jurídico en remoto: la revisión comentada de documentos como herramienta de formación, el debriefing post-asunto donde el equipo extrae los aprendizajes y los documenta y el programa de exposición a diferentes áreas del derecho para los abogados junior.

Dame el sistema completo de gestión del equipo jurídico en remoto que asegura la calidad del trabajo, el cumplimiento de los plazos y el desarrollo del equipo sin depender de la presencia física.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestión de equipos jurídicos en entornos de trabajo en remoto e híbrido',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS leadership en remoto',
                'description'       => 'Lidera el equipo de customer success a distancia: el coaching de las llamadas con clientes, la detección de problemas sin observación directa y la cultura de equipo que mantiene la energía del servicio al cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia liderando equipos de CS en remoto en empresas SaaS B2B. Quiero construir el sistema de liderazgo del equipo de customer success en remoto que mantiene la calidad del servicio al cliente, el rendimiento del equipo y la cultura que hace que los CS Managers estén motivados para dar su mejor trabajo.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño del equipo de CS, el modelo de servicio (high touch, tech touch, mixto) y la distribución geográfica?
2. ¿El equipo es completamente remoto o trabaja en modelo híbrido?
3. ¿Cuáles son los mayores retos del equipo de CS en remoto: rendimiento individual inconsistente, calidad de las QBRs, detección del riesgo de churn, cultura de equipo o coordinación?
4. ¿Hay herramientas de grabación y análisis de llamadas (Gong, Chorus, Zoom) que el equipo use actualmente?

**COACHING EN REMOTO:**

CALL COACHING SIN ESTAR EN LA SALA
El coaching de las llamadas con clientes es el ritual más impactante del líder de CS y el que más se transforma en remoto. Ayúdame a diseñar el sistema de call coaching en remoto: el shadowing de llamadas en directo a través de Zoom donde el manager observa sin intervenir (con el acuerdo previo del cliente si es necesario), el análisis asíncrono de llamadas grabadas con herramientas como Gong con comentarios específicos en los momentos de la llamada que merecen coaching, el formato de la sesión de call review (el CS Manager hace su autoevaluación antes de recibir el feedback del manager) y cómo construir el plan de mejora individual a partir de los patrones que emergen de múltiples reviews.

QBR COACHING EN REMOTO
Las QBRs son la interacción más importante del CS Manager con el cliente y la que mayor impacto tiene en la retención y la expansión. Ayúdame a diseñar el proceso de QBR coaching en remoto: la revisión previa del deck de QBR (los datos del cliente, el plan del próximo período, los riesgos y las oportunidades que el CS Manager ha identificado), la sesión de rol play de la QBR donde el manager hace de cliente difícil para preparar al CS Manager para las preguntas incómodas y el debriefing post-QBR donde se extraen los aprendizajes para la siguiente.

**GESTIÓN DEL RENDIMIENTO EN REMOTO:**

DETECCIÓN DE PROBLEMAS SIN OBSERVACIÓN DIRECTA
En la oficina, el líder de CS detecta los problemas de rendimiento por señales no verbales: el CS Manager que parece estresado, el que lleva días sin sonreír, el que evita las conversaciones difíciles. En remoto, estas señales no existen y hay que crear mecanismos alternativos. Ayúdame a construir el sistema de detección temprana de problemas en el equipo de CS en remoto: los indicadores cuantitativos que alertan antes de que el problema sea evidente (caída en el número de QBRs completadas, aumento del tiempo de respuesta al cliente, caída del health score de la cartera), las preguntas de check-in en los 1:1 que revelan el estado real del CS Manager y cómo crear el ambiente donde el equipo comparte los problemas antes de que sean crisis.

MÉTRICAS Y ACCOUNTABILITY EN REMOTO
El equipo de CS en remoto necesita un cuadro de mando que dé visibilidad sobre el rendimiento de cada CS Manager sin necesidad de la observación directa. Dame el diseño del cuadro de mando del equipo de CS en remoto: las métricas de proceso (número de QBRs completadas, tiempo de respuesta al cliente, porcentaje de cuentas con health score actualizado), las métricas de resultado (NRR por CS Manager, tasa de retención, pipeline de expansión) y la cadencia de revisión de estas métricas en las reuniones de equipo y en los 1:1.

**CULTURA DEL EQUIPO DE CS EN REMOTO:**

ENERGÍA Y MOTIVACIÓN SIN CONTACT CENTER FÍSICO
Los equipos de CS y soporte al cliente tienen una energía de equipo que en la oficina se retroalimenta entre los miembros del equipo. En remoto, esta energía hay que crearla deliberadamente. Diseña los rituales de energía del equipo de CS en remoto: el canal de Slack donde se celebran los wins (la renovación de una cuenta difícil, el upsell conseguido, el NPS excelente de un cliente), el equipo de la semana con reconocimiento visible, las sesiones de team learning donde el equipo comparte los casos más interesantes o difíciles de la semana y la reunión mensual de equipo que combina negocio con conexión personal.

ONBOARDING DE CS MANAGERS EN REMOTO
Un nuevo CS Manager en remoto necesita más estructura en su onboarding que en la oficina porque el aprendizaje informal no ocurre. Diseña el programa de onboarding del CS Manager en remoto: el plan de los primeros 30, 60 y 90 días, el programa de shadowing de llamadas con CS Managers experimentados del equipo, la asignación inicial de cuentas de baja complejidad para construir la confianza y las revisiones semanales del manager con el nuevo CS Manager durante los primeros tres meses.

Dame el sistema completo de CS leadership en remoto que hace que el equipo entregue un servicio de alta calidad a los clientes, alcance sus métricas de retención y expansión y esté motivado para dar lo mejor de sí mismo desde cualquier ubicación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Liderazgo y coaching de equipos de customer success en remoto',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestionar colaboradores y subcontratistas en remoto',
                'description'       => 'El freelance que construye un equipo virtual: la selección de colaboradores para el trabajo asíncrono, la coordinación de proyectos sin presencialidad y el modelo que produce resultados sin depender de la sincronía.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior o consultor independiente con experiencia construyendo y gestionando equipos virtuales de colaboradores y subcontratistas en proyectos de diseño, desarrollo, marketing y consultoría. Quiero aprender a construir y gestionar un equipo virtual de colaboradores que me permita escalar mi negocio freelance sin los costes y la complejidad de contratar empleados.

**Preguntas iniciales:**
1. ¿Cuál es tu servicio freelance y cuáles son las áreas donde necesitas colaboradores o subcontratistas?
2. ¿Has trabajado con colaboradores antes o es la primera vez que explores esta opción?
3. ¿El objetivo principal es escalar la capacidad para tomar más proyectos, cubrir áreas de especialización que tú no tienes o tener backup cuando tienes picos de trabajo?
4. ¿Cuál es tu modelo de proyecto (por proyecto, retainer mensual, mixto) y cómo encajaría el trabajo de los colaboradores en ese modelo?

**CONSTRUCCIÓN DEL EQUIPO VIRTUAL:**

DEFINIR QUÉ SUBCONTRATAR
El primer error del freelance que empieza a trabajar con colaboradores es subcontratar lo equivocado. Ayúdame a identificar qué partes de tu servicio son candidatas a la subcontratación: las tareas que son repetitivas, bien definidas y donde no añades tu mayor valor diferencial (candidatas a subcontratar), las tareas que requieren tu conocimiento específico del cliente o tu criterio experto (que debes hacer tú) y cómo definir los entregables de los colaboradores de manera que sean verificables sin microgestión.

SELECCIÓN DE COLABORADORES PARA EL TRABAJO ASÍNCRONO
No todos los colaboradores funcionan bien en un modelo de trabajo asíncrono. Los que funcionan en remoto tienen características específicas: son muy buenos comunicadores por escrito, son autónomos para resolver problemas menores sin preguntar, son proactivos en comunicar los bloqueantes antes de que afecten al plazo y tienen un historial de entregas de calidad sin supervisión directa. Ayúdame a diseñar el proceso de selección de colaboradores que filtra por estas características: las plataformas donde encontrar colaboradores de calidad (Toptal, Malt, 99designs, Contra), las pruebas de trabajo que evalúan la calidad del trabajo y la capacidad de trabajar en asíncrono y las señales de alerta que indican que un colaborador no va a funcionar bien sin supervisión.

**EL SISTEMA DE TRABAJO CON COLABORADORES:**

BRIEFING Y ONBOARDING DE COLABORADORES
La calidad del trabajo de un colaborador es directamente proporcional a la calidad del briefing que le das. Ayúdame a diseñar el sistema de briefing de proyectos para colaboradores: el documento de brief que incluye el contexto del cliente, el objetivo del entregable, las especificaciones técnicas o creativas, los ejemplos de referencia, el plazo y los criterios de calidad con los que evaluarás el entregable. También diseña el proceso de onboarding del nuevo colaborador: los documentos de contexto que le explican tu forma de trabajar, las herramientas que usas y las expectativas de comunicación.

COORDINACIÓN SIN REUNIONES
Los equipos virtuales que funcionan bien minimizan las reuniones sincrónicas y maximizan el trabajo asíncrono. Ayúdame a diseñar el sistema de coordinación asíncrona con los colaboradores: la herramienta de gestión de proyectos (Notion, Linear, Asana o Trello) donde viven las tareas asignadas a cada colaborador con su plazo y sus especificaciones, el canal de comunicación asíncrona (Slack o similar) con el protocolo de respuesta y el sistema de actualización de estado que permite al cliente saber dónde está el proyecto sin necesitar una llamada de status.

**CALIDAD Y RELACIÓN CON LOS COLABORADORES:**

CONTROL DE CALIDAD SIN MICROGESTIÓN
Mantener la calidad del trabajo entregado al cliente final cuando parte del trabajo lo hacen colaboradores es uno de los mayores retos del modelo. Ayúdame a diseñar el sistema de control de calidad: el proceso de revisión del trabajo del colaborador antes de entregarlo al cliente, los criterios de calidad que el colaborador conoce desde el principio para que el ciclo de revisión sea eficiente y el sistema de feedback al colaborador que mejora la calidad del trabajo siguiente.

RELACIÓN DURADERA CON LOS MEJORES COLABORADORES
Los colaboradores que funcionan bien son activos del negocio freelance y vale la pena invertir en la relación para que sean socios estables. Ayúdame a construir la estrategia de relación con los colaboradores de confianza: cómo asegurar la disponibilidad de los mejores colaboradores cuando los necesitas (sin compromiso de exclusividad), cómo dar feedback que mejora la relación en lugar de deteriorarla y cómo construir la confianza que permite delegar trabajo cada vez más complejo sin revisión exhaustiva.

ASPECTOS LEGALES Y FISCALES DE LA SUBCONTRATACIÓN
Trabajar con colaboradores tiene implicaciones legales y fiscales que el freelance debe gestionar correctamente. Dame la guía básica de los aspectos legales y fiscales de la subcontratación en España: el contrato de prestación de servicios con el colaborador, la facturación entre autónomos y las implicaciones fiscales de los pagos a colaboradores, y cuándo la relación con un colaborador puede calificarse como relación laboral encubierta.

Dame el sistema completo para construir y gestionar un equipo virtual de colaboradores que me permita escalar el negocio freelance sin los costes y la complejidad del empleo y sin sacrificar la calidad que mis clientes esperan de mí.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construcción y gestión de equipos virtuales de colaboradores para freelancers',
                'vote_score'        => 48,
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
