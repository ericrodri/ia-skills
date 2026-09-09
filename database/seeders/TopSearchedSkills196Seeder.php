<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills196Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de empleador en la era del trabajo híbrido',
                'description'      => 'Atrae talento de marketing en un mundo donde la flexibilidad es la primera condición de trabajo: los mensajes, los beneficios que importan y la estrategia de employer branding para el mundo post-pandemia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de employer branding con experiencia desarrollando estrategias de atracción de talento en empresas tech que han adoptado modelos de trabajo híbrido o completamente remoto. Voy a explorar contigo cómo hacer marketing de empleador efectivo en la era del trabajo flexible.

Mi contexto: [describe tu empresa: sector, tamaño, modelo de trabajo actual (híbrido, remoto, presencial), los perfiles de marketing que quieres atraer y los principales competidores por ese talento]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El nuevo contrato laboral: lo que el talento de marketing espera en 2024**
Las prioridades del talento de marketing han cambiado drásticamente desde 2020. Explícame qué busca el profesional de marketing cuando evalúa una oferta laboral hoy: la flexibilidad como condición de entrada (no como beneficio diferencial), la cultura del equipo como factor de decisión tan importante como el salario, el desarrollo profesional en un mercado que cambia muy rápido y los beneficios que importan (los que ya no importan). Por qué muchas empresas siguen comunicando los beneficios del pasado a candidatos que buscan los del presente.

**2. El employer brand para atraer talento de marketing**
El marketing atrae a profesionales que saben hacer marketing: son los candidatos más difíciles de impresionar con mensajes vacíos. Explícame cómo construir un employer brand auténtico y convincente para perfiles de marketing: la diferencia entre lo que la empresa dice que es y lo que los empleados dicen en Glassdoor y LinkedIn, cómo los equipos de marketing perciben la cultura de una empresa (el tipo de proyectos, el nivel de autonomía, la calidad del stack tecnológico y del presupuesto) y cómo comunicar estos elementos sin caer en el cliché de la cultura de startup.

**3. Los mensajes que funcionan para el modelo de trabajo híbrido**
Comunicar el modelo de trabajo híbrido de forma atractiva es un arte. Explícame cómo construir los mensajes correctos: la diferencia entre "flexibilidad real" y "flexibilidad con asterisco" (que el candidato detecta desde el primer proceso de selección), cómo describir el modelo de trabajo con precisión (días en oficina, herramientas de trabajo remoto, política de viajes, eventos de equipo) y los errores de comunicación que generan expectativas incorrectas y provocan churn en los primeros meses.

**4. Los canales para llegar al talento de marketing**
El talento de marketing está en distintos canales según el perfil y la seniority. Dame la estrategia de canales de employer branding para perfiles de marketing: LinkedIn como canal principal con el contenido que genera interés real, las comunidades profesionales de marketing donde el talento más cualificado está activo, el contenido generado por los propios empleados como fuente de credibilidad y la presencia en eventos y conferencias de marketing como canal de relación con talento pasivo.

**5. El proceso de selección como experiencia de marca**
Para el talento de marketing, el proceso de selección es la primera evidencia del employer brand. Guíame en el diseño de un proceso de selección que refuerce el mensaje de la empresa: el tiempo de respuesta y la comunicación durante el proceso (que refleja el respeto por el tiempo del candidato), el tipo de prueba técnica que evalúa habilidades reales sin pedir trabajo gratuito, y la experiencia de las entrevistas como oportunidad de mostrar la cultura del equipo.

**6. Medir y mejorar el employer brand**
El employer branding que no se mide no mejora. Propón el sistema de métricas para un employer brand enfocado en talento de marketing: la ratio de aceptación de ofertas, el tiempo hasta la primera aplicación desde la publicación de la oferta, el Net Promoter Score del proceso de selección (tanto de los candidatos que aceptaron como de los que rechazaron), el eNPS de los empleados actuales como indicador de la autenticidad del mensaje y el análisis de Glassdoor como termómetro de la percepción externa.

Quiero mensajes concretos y ejemplos de empresas que están haciendo bien el employer branding para trabajo híbrido, y las señales de alarma de las empresas que lo están haciendo mal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar estrategia de employer branding para atraer talento de marketing en entornos de trabajo flexible',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Distributed engineering teams: gestión de equipos remotos',
                'description'      => 'Gestiona equipos de ingeniería completamente distribuidos: las herramientas, los rituales asincrónicos y las prácticas de documentación que hacen funcionar a un equipo sin oficina ni zona horaria compartida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager con experiencia liderando equipos de ingeniería completamente distribuidos en distintas zonas horarias, con conocimiento profundo de las prácticas, herramientas y cultura que hacen funcionar a un equipo remoto de alto rendimiento. Voy a explorar contigo cómo gestionar un equipo de ingeniería distribuido de forma efectiva.

Mi contexto: [describe tu equipo: número de ingenieros, distribución geográfica y de zonas horarias, stack tecnológico y los principales retos que estás encontrando con la gestión remota]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del equipo de ingeniería distribuido que funciona**
Un equipo distribuido que funciona bien no es un equipo de oficina que trabaja desde casa: es un equipo diseñado desde sus fundamentos para operar de forma asíncrona. Explícame los principios que distinguen los equipos distribuidos de alto rendimiento: la documentación como hábito colectivo (si no está escrito, no existe), la asincronía como modo de trabajo por defecto (las decisiones se toman con documentos, no con reuniones), la autonomía como condición para la productividad (el engineer que necesita permiso para cada pequeña decisión no puede funcionar en remoto) y la confianza como base de la relación (el manager que gestiona por horas de pantalla destruye la motivación).

**2. Las herramientas del equipo distribuido**
La elección de herramientas determina la fricción del trabajo distribuido. Explícame el stack de herramientas para un equipo de ingeniería distribuido: las herramientas de comunicación (Slack vs. Teams: cuándo usar cada canal, las normas que evitan el ruido y la ansiedad de respuesta inmediata), las herramientas de documentación (Notion, Confluence, Linear: cómo mantenerlas útiles sin que se conviertan en cementerios de documentos), las herramientas de code review asíncrono y las de reunión cuando la sincronía es necesaria.

Incluye las configuraciones específicas y las normas de uso que hacen que las herramientas funcionen.

**3. Los rituales del equipo distribuido**
Los rituales de equipo reemplazan las conversaciones de pasillo que generan cohesión en la oficina. Propón el sistema de rituales para un equipo de ingeniería distribuido: el standup escrito diario (que no es un resumen de lo que hiciste ayer, sino un documento de bloqueos y coordinación), la retrospectiva remota que genera aprendizaje real, el one-on-one virtual que mantiene la relación manager-engineer, las sesiones de pair programming remoto y el team building que no se siente forzado en un entorno virtual.

**4. La documentación como ventaja competitiva del equipo distribuido**
Un equipo distribuido que documenta bien tiene una ventaja real sobre un equipo de oficina: el conocimiento está disponible para todos, siempre, sin necesidad de interrumpir a nadie. Guíame en la construcción de una cultura de documentación: los tipos de documentos que un equipo de ingeniería necesita (ADRs para decisiones de arquitectura, runbooks para operaciones, wikis para conocimiento del dominio), el proceso para que los documentos se escriban como parte del trabajo y no como tarea adicional y las prácticas para mantener la documentación actualizada.

**5. El hiring y el onboarding en equipos distribuidos**
Contratar e incorporar ingenieros en remoto requiere un proceso diferente al de la oficina. Explícame las particularidades del hiring remoto para ingeniería: los criterios de selección que predicen el éxito en entornos distribuidos (la capacidad de comunicación escrita, la proactividad, la autonomía), el proceso de evaluación técnica que funciona en remoto y el onboarding de 30-60-90 días que hace que el nuevo engineer sea productivo y se sienta parte del equipo sin haber pisado una oficina.

**6. El rendimiento y la carrera en equipos distribuidos**
Gestionar el rendimiento y el desarrollo profesional en remoto tiene matices importantes. Explícame cómo evaluar el rendimiento de un engineer que trabajas sin verle: los indicadores de productividad reales (no las horas de pantalla, sino el impacto del trabajo), el proceso de feedback continuo en remoto, cómo garantizar que los engineers distribuidos tienen las mismas oportunidades de visibilidad y crecimiento que los de la oficina y los riesgos de los sesgos de proximidad que favorecen a quienes están más cerca del manager.

Quiero prácticas concretas de equipos de ingeniería distribuidos que funcionan, con el razonamiento detrás de cada decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Liderar equipos de ingeniería distribuidos con prácticas asíncronas de alto rendimiento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design en equipos distribuidos',
                'description'      => 'El proceso de diseño cuando el equipo está en tres países: herramientas de colaboración asíncrona, rituales de critique remoto y la cultura de diseño que funciona sin la oficina.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con experiencia construyendo y liderando equipos de diseño distribuidos en distintas zonas horarias, con conocimiento profundo de las herramientas, los rituales y la cultura que hacen que el proceso de diseño funcione sin la fricción de la distancia. Voy a explorar contigo cómo hacer design de producto de calidad con un equipo distribuido.

Mi contexto: [describe tu equipo de diseño: número de diseñadores, distribución geográfica, stack de herramientas actual y los principales retos que encuentras al colaborar en remoto]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del proceso de diseño distribuido**
El diseño es una disciplina especialmente colaborativa, lo que hace que la distancia sea un reto particular. Explícame los principios que adaptan el proceso de diseño a un entorno distribuido: la documentación del razonamiento de diseño como práctica fundamental (el diseño sin contexto es solo una imagen), la asincronía como modo de trabajo por defecto para las fases de exploración y feedback, y la sincronía reservada para los momentos en que la conversación en tiempo real añade valor real (el critique, las decisiones difíciles, el brainstorming).

**2. El stack de herramientas para el diseño distribuido**
Las herramientas determinan la fricción del trabajo distribuido para los diseñadores. Explícame cómo configurar el stack para un equipo de diseño distribuido: Figma como lienzo de colaboración en tiempo real y asíncrona (las prácticas de organización de archivos, el versionado y los comentarios que hacen que Figma funcione como herramienta de colaboración real), Loom para los walkthroughs de diseño que reemplazan la presentación en sala, Notion para la documentación del proceso y las decisiones y las herramientas de feedback estructurado (FigJam, Miro) para el trabajo de ideación.

**3. El critique de diseño remoto**
La critique de diseño en la oficina es un ritual de alto valor que el remoto amenaza con convertir en una reunión de Zoom poco eficiente. Guíame en el diseño del critique remoto que genera feedback de calidad: el formato asíncrono (compartir el diseño con contexto escrito y pedir feedback estructurado antes de la reunión sincrónica), cómo estructurar la sesión de critique en vídeo para que sea eficiente, el lenguaje de feedback constructivo que funciona por escrito y las normas que hacen que los diseñadores junior se sientan seguros para compartir trabajo en progreso.

**4. La colaboración diseñador-developer en remoto**
La relación entre diseño e ingeniería es especialmente sensible a la distancia. Explícame las prácticas de handoff y colaboración que funcionan en remoto: la documentación de diseño que los developers necesitan para implementar sin preguntas, las sesiones de diseño-desarrollo remoto que mantienen el entendimiento mutuo, el proceso de QA de diseño sin poder estar en la misma pantalla y cómo construir la cultura de collaboration que hace que diseñadores y engineers trabajen como un equipo aunque estén en distintos países.

**5. La cultura de diseño sin la oficina**
La cultura de un equipo de diseño se construye en gran parte en las conversaciones informales que ocurren en la oficina. Explícame cómo construir una cultura de diseño fuerte en un equipo distribuido: los rituales que generan identidad colectiva (la retrospectiva de diseño mensual, el design show & tell, las sesiones de inspiración compartida), cómo mantener la coherencia visual y la dirección de diseño cuando el equipo no comparte el mismo contexto físico y cómo incorporar nuevos diseñadores en una cultura que no pueden absorber por osmosis.

**6. El design leadership en equipos distribuidos**
Liderar un equipo de diseño distribuido tiene particularidades que el leadership en oficina no prepara. Explícame las responsabilidades del design lead en entornos distribuidos: cómo mantener la visión de diseño consistente cuando el equipo opera de forma autónoma, cómo dar visibilidad al trabajo del equipo de diseño ante los stakeholders distribuidos, el one-on-one remoto como herramienta de desarrollo del diseñador y cómo detectar los signos de burnout o desconexión en un equipo que no puedes observar en persona.

Quiero ejemplos concretos de equipos de diseño distribuidos que funcionan bien y las prácticas específicas que los distinguen.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un proceso de diseño de calidad con equipos distribuidos en distintas zonas horarias',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas remotas: el proceso comercial sin presencia física',
                'description'      => 'Adapta el proceso de ventas al mundo virtual: los demos en vídeo, la construcción de relación sin el café de por medio y las técnicas de cierre que funcionan cuando todo pasa en Zoom.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia construyendo y liderando equipos de inside sales que operan completamente en remoto, con dominio de las técnicas y herramientas que hacen que el proceso comercial virtual genere resultados comparables o mejores que las ventas presenciales. Voy a explorar contigo cómo vender de forma efectiva en un entorno completamente virtual.

Mi contexto: [describe tu situación de ventas: tipo de producto o servicio, perfil del comprador, ciclo de venta habitual (duración, número de interlocutores) y los principales retos que encuentras vendiendo en remoto]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las ventajas y los retos de las ventas remotas**
Las ventas remotas no son una versión inferior de las ventas presenciales: son un canal diferente con sus propias ventajas y sus propios retos. Explícame qué gana el vendedor en remoto (el acceso a compradores de cualquier geografía, la posibilidad de organizar más reuniones por día, el uso de herramientas de inteligencia conversacional) y qué pierde (la energía de la presencia física, la conversación informal que construye relación, la lectura del lenguaje corporal). Cómo los mejores vendedores virtuales han convertido las limitaciones del formato en ventajas.

**2. La prospección y el outreach en el entorno virtual**
La prospección en remoto depende casi exclusivamente de los canales digitales. Guíame por el proceso de prospección que funciona en un entorno de ventas virtualmente: el outreach por LinkedIn (los mensajes que generan respuesta y los que van directos a spam), el cold email que abre puertas (la estructura, la personalización mínima viable y los tests que mejoran la tasa de respuesta), el outreach por vídeo personalizado (Loom, Vidyard) como diferenciador y las llamadas en frío que todavía funcionan en ciertos mercados.

**3. El demo de producto virtual de alto impacto**
El demo de producto es el momento de mayor influencia en el ciclo de ventas y en remoto requiere un diseño diferente. Explícame cómo estructurar un demo virtual que genera momentum de compra: la preparación previa que permite personalizar la demo sin consumir tiempo de la reunión, la gestión de la atención del comprador en Zoom (que es más difícil de mantener que en una sala de reuniones), las herramientas de interacción que hacen al comprador participar en lugar de observar y el cierre de la demo con los siguientes pasos claros.

**4. Construir relación y confianza sin presencia física**
La venta compleja se construye sobre la confianza y la relación personal. En remoto, construir esa relación requiere intención y método. Explícame cómo construir relación con el comprador en un entorno virtual: los primeros minutos de la reunión de Zoom como inversión en la relación (no como tiempo perdido), las señales de interés genuino que el comprador percibe aunque no haya contacto físico, el seguimiento entre reuniones que mantiene el momentum sin ser invasivo y los momentos adecuados para proponer una reunión presencial cuando el deal lo justifica.

**5. El ciclo de ventas virtual: gestión de múltiples stakeholders**
En las ventas B2B, la decisión de compra involucra a varios interlocutores que en remoto nunca estarán todos en la misma sala. Explícame cómo gestionar el proceso de ventas con múltiples stakeholders en remoto: las salas de ventas virtuales (plataformas como Aligned o Notion que centralizan todos los recursos del deal), cómo llegar a los stakeholders que no participan en las reuniones, la gestión del campeón interno que facilita el acceso a los decisores y las herramientas de firma electrónica que eliminan la fricción del cierre.

**6. El cierre y el seguimiento en ventas remotas**
Cerrar un deal en remoto sin la presión social de la presencia física requiere técnicas específicas. Guíame en el proceso de cierre virtual: las técnicas de urgencia que funcionan en remoto (y las que se perciben como manipuladoras), la propuesta comercial virtual que el comprador puede compartir internamente sin el vendedor presente, la gestión de las objeciones finales por correo o vídeo y el proceso de seguimiento post-cierre que consolida la relación y genera referencias.

Quiero técnicas concretas que funcionan en ventas B2B remotas, con los errores más comunes que cometen los vendedores que intentan replicar el proceso presencial en Zoom sin adaptarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Adaptar el proceso comercial al entorno virtual para mantener la efectividad de ventas en remoto',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management asíncrono',
                'description'      => 'Gestiona el producto con un equipo distribuido en zonas horarias: los documentos de decisión, la cultura de escritura y los procesos que eliminan la necesidad de reuniones sincrónicas para la mayoría de las decisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de producto con experiencia liderando equipos de producto distribuidos en múltiples zonas horarias, con dominio de las prácticas de product management asíncrono que permiten tomar decisiones de alta calidad sin depender de la presencia simultánea de todos los involucrados. Voy a explorar contigo cómo gestionar el producto de forma efectiva con un equipo distribuido.

Mi contexto: [describe tu situación: tamaño del equipo de producto (PMs, designers, engineers), distribución geográfica y de zonas horarias, y los principales dolores de la gestión distribuida que quieres resolver]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del product management asíncrono**
El PM asíncrono no es el PM que trabaja tarde para coincidir con el equipo de Asia: es el PM que ha rediseñado su proceso para que las decisiones de calidad no dependan de la presencia simultánea. Explícame los principios que hacen funcionar el product management asíncrono: la escritura como habilidad fundamental del PM distribuido (las ideas que no se pueden escribir con claridad no se pueden comunicar), la documentación como artefacto de alineación (que reemplaza la reunión de sincronía), la confianza como condición para la autonomía del equipo y el proceso de decisión que produce resultados sin necesidad de que todos estén en la misma sala virtual al mismo tiempo.

**2. Los documentos que reemplazan las reuniones**
En un equipo asíncrono, los documentos son la herramienta de colaboración más importante. Explícame los tipos de documentos que un PM distribuido necesita dominar: el PRD asíncrono (que incluye el contexto, las opciones consideradas y la decisión tomada, no solo la especificación técnica), el RFC (Request for Comments) para las decisiones que requieren input del equipo antes de decidir, el weekly update escrito que mantiene a los stakeholders informados sin reuniones de status y el documento de retrospectiva que captura aprendizajes sin necesitar que todos se conecten a la vez.

Para cada tipo de documento, dame la estructura y las claves para que sea efectivo como herramienta de colaboración asíncrona.

**3. El proceso de priorización distribuido**
Priorizar el roadmap con un equipo en varias zonas horarias es uno de los mayores retos del PM distribuido. Guíame en el diseño de un proceso de priorización asíncrono: cómo recopilar el input de ingeniería, diseño y stakeholders de negocio sin una reunión de planning, las herramientas de votación asíncrona que estructuran el debate antes de la decisión, cómo comunicar la priorización al equipo con el contexto suficiente para que la entiendan sin necesitar una explicación oral y el proceso de revisión del roadmap que mantiene la alineación sin consumir slots de calendario.

**4. El discovery asíncrono**
El discovery de producto —la investigación de usuarios, el análisis de datos y la exploración de soluciones— puede hacerse en gran medida de forma asíncrona. Explícame cómo adaptar el proceso de discovery a un entorno distribuido: las entrevistas con usuarios que se documentan de forma que todo el equipo puede acceder al aprendizaje, los estudios de usabilidad no moderados que generan insights sin la presencia del researcher, el análisis de datos asíncrono que produce hipótesis que el equipo puede debatir por escrito y el process de síntesis de research que convierte los hallazgos en decisiones de producto.

**5. La comunicación con stakeholders en entornos distribuidos**
El PM distribuido necesita mantener alineados a los stakeholders que están en distintas zonas horarias y que tienen distintos niveles de contexto. Propón el sistema de comunicación con stakeholders para un equipo de producto distribuido: el newsletter interno de producto (con la cadencia, el formato y el nivel de detalle que mantiene a los stakeholders informados sin abrumarlos), las demos asíncronas de producto mediante vídeo (que reemplazan el sprint review presencial), el proceso de escalada cuando una decisión necesita input de liderazgo y cómo gestionar las expectativas cuando los timelines cambian.

**6. La cultura del equipo de producto distribuido**
La cultura de un equipo de producto se construye en la forma en que trabaja, no en los off-sites anuales. Explícame cómo construir una cultura de producto fuerte en un entorno distribuido: los rituales que generan identidad de equipo (la retrospectiva de producto mensual, el intercambio de aprendizajes de la industria, la celebración de lanzamientos en remoto), cómo mantener el espíritu de colaboración y debate intelectual que caracteriza a los mejores equipos de producto cuando la mayoría de la comunicación es escrita y cómo incorporar nuevos PMs en la cultura del equipo.

Quiero ejemplos concretos de equipos de producto distribuidos que funcionan bien, con las prácticas específicas que los distinguen de los que sufren con la distancia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar prácticas de product management asíncrono para equipos distribuidos en múltiples zonas horarias',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Trabajo híbrido: políticas y cultura',
                'description'      => 'Diseña el modelo de trabajo híbrido que funciona: las políticas de presencia, la equidad entre quienes van a la oficina y quienes no y la cultura que mantiene la cohesión del equipo sin necesitar que todos estén en el mismo sitio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de people operations especializado en diseño de modelos de trabajo flexible, con experiencia ayudando a empresas a diseñar, implementar y ajustar políticas de trabajo híbrido que funcionan en la práctica y no solo en papel. Voy a explorar contigo cómo construir un modelo de trabajo híbrido que equilibre la flexibilidad con la cohesión del equipo.

Mi contexto: [describe tu empresa: sector, tamaño, número de oficinas, modelo de trabajo actual y los principales conflictos o tensiones que estás viviendo con el modelo híbrido]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Definir el modelo de trabajo híbrido que tiene sentido para tu empresa**
No existe un modelo de trabajo híbrido universal: el que funciona depende del tipo de trabajo, la cultura existente y los objetivos de negocio. Explícame los diferentes modelos de trabajo híbrido y cuándo tiene sentido cada uno: el híbrido con días fijos (toda la empresa va a la oficina los mismos días), el híbrido flexible (cada persona decide cuándo ir), el híbrido por equipos (cada equipo acuerda su calendario de presencia) y el remote-first con opciones de presencia (la oficina como herramienta, no como obligación). Los factores que determinan qué modelo se adapta mejor a cada organización.

**2. Las políticas de presencia que funcionan**
Las políticas de presencia son el elemento más delicado del modelo híbrido porque determinan la percepción de confianza y autonomía. Guíame en el diseño de políticas de presencia que la organización acepta y cumple: la diferencia entre mínimos de presencia (que generan resistencia si no se explica el porqué) y expectativas de colaboración (que generan más adherencia porque conectan con el propósito del trabajo en oficina), cómo definir los momentos que requieren presencia (reuniones de equipo, workshops de estrategia, onboarding de nuevos) y cómo comunicar las políticas de forma que se perciban como razonables.

**3. La equidad entre presenciales y remotos**
El mayor riesgo del modelo híbrido es la creación de dos clases de empleados: los que están en la oficina y tienen acceso informal al management y a las oportunidades, y los que trabajan en remoto y se sienten en desventaja. Explícame cómo diseñar el modelo híbrido que garantiza la equidad real: las prácticas de reunión que incluyen a todos por igual (la regla de que si uno está en remoto, todos están en remoto), el proceso de performance review que no favorece a los más visibles, el acceso a oportunidades de desarrollo y los mecanismos para detectar el proximity bias antes de que cause daño.

**4. La cultura en un equipo híbrido**
La cultura organizacional se construye en los momentos de interacción informal que en un modelo híbrido son irregulares y distribuidos de forma desigual. Propón las prácticas que mantienen la cultura del equipo híbrido: los rituales de equipo que funcionan tanto para presenciales como para remotos, el diseño de las oficinas como espacios de colaboración (no de trabajo individual que se hace mejor en casa), los momentos de conexión intencionales que compensan la reducción de las interacciones informales y cómo mantener la cultura de un equipo que no comparte el mismo espacio físico la mayor parte del tiempo.

**5. La comunicación en el modelo híbrido**
El modelo híbrido crea asimetrías de información: los que están en la oficina tienen conversaciones informales que los remotos no escuchan. Explícame cómo diseñar el sistema de comunicación del equipo híbrido que reduce estas asimetrías: las normas de comunicación que hacen que las decisiones relevantes siempre se documenten por escrito, los canales que evitan la fragmentación de la información según si eres presencial o remoto y el proceso para que el liderazgo sea transparente sobre las decisiones importantes con todo el equipo independientemente de dónde esté.

**6. Medir y ajustar el modelo híbrido**
Un modelo de trabajo híbrido que no se mide y se ajusta se deteriora con el tiempo. Propón el sistema de medición y mejora continua del modelo híbrido: las encuestas de satisfacción que detectan los problemas antes de que se conviertan en fuga de talento, las métricas de colaboración (uso de la oficina, patrones de reunión, satisfacción con la comunicación), el proceso de revisión periódica de las políticas de trabajo flexible y cómo gestionar los ajustes al modelo cuando los datos demuestran que algo no funciona.

Quiero ejemplos concretos de empresas que han implementado bien el modelo híbrido y las decisiones específicas que lo han hecho funcionar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar e implementar un modelo de trabajo híbrido que equilibra flexibilidad y cohesión organizacional',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Compensación en equipos globales y remotos',
                'description'      => 'Gestiona la complejidad de pagar a empleados en diferentes países: estructuras de compensación localizadas, instrumentos de equidad y los aspectos fiscales que la empresa y el empleado deben conocer.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de compensación y beneficios especializado en estructuras de remuneración para equipos globales y remotos, con experiencia diseñando políticas de compensación que equilibran la competitividad local, la equidad interna y la sostenibilidad económica de la empresa. Voy a explorar contigo cómo gestionar la compensación en un equipo distribuido globalmente.

Mi contexto: [describe tu situación: tamaño del equipo, países en que tienes empleados, si operas con entidades locales o Employer of Record, y los principales conflictos o preguntas abiertas sobre compensación que tienes]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las filosofías de compensación en equipos globales**
Hay tres filosofías principales para compensar a empleados en distintos países y cada una tiene consecuencias muy diferentes. Explícame en profundidad las tres: la compensación basada en la ubicación (pago según el mercado local de cada empleado, lo que maximiza la competitividad local pero crea disparidades entre empleados con el mismo rol), la compensación basada en un hub (pago según el mercado de la sede u otra ciudad de referencia, lo que simplifica pero puede estar desalineado con los mercados locales) y la compensación basada en el valor del rol (pago según la aportación al negocio independientemente de la ubicación, el modelo más difícil de implementar pero el más coherente con la filosofía remote-first). Las empresas que usan cada modelo y por qué.

**2. Los datos de mercado para compensación global**
Compensar de forma competitiva en distintos mercados requiere datos fiables de cada mercado. Guíame en el proceso de obtener y usar datos de compensación para múltiples países: las fuentes de datos de mercado que funcionan para equipos globales (Radford, Mercer, Levels.fyi para tech, los surveys locales), la metodología para posicionarse en el percentil correcto según la estrategia de talento de la empresa y cómo gestionar la actualización de los datos de mercado cuando los salarios en tech se mueven rápido en ciertos mercados.

**3. Los instrumentos de equidad en equipos globales**
Las opciones sobre acciones (stock options, RSUs, phantom equity) son una herramienta de compensación que se complica enormemente en equipos globales. Explícame la complejidad de los instrumentos de equidad para empleados en distintos países: la diferencia entre opciones de empresa privada y empresa pública en términos de liquidez y fiscalidad, el tratamiento fiscal de los instrumentos de equidad en los principales países (España, UK, Alemania, Francia, EEUU), los instrumentos alternativos que funcionan en jurisdicciones donde las opciones tienen problemas fiscales y cómo explicar el valor de la equidad a empleados que no están familiarizados con cómo funciona.

**4. Los aspectos fiscales de la compensación global**
La compensación de empleados en distintos países crea complejidad fiscal tanto para la empresa como para el empleado. Guíame por los aspectos fiscales que el responsable de compensación debe comprender: el concepto de permanent establishment y los riesgos de contratar directamente en un país sin entidad legal, el funcionamiento del Employer of Record como solución para contratar sin entidad propia, los aspectos fiscales del trabajo nómada (el empleado que trabaja desde distintos países durante el año) y las implicaciones de la doble imposición para empleados que tributan en dos países.

**5. Los beneficios en equipos globales**
Los beneficios que valoran los empleados varían enormemente según el país. Propón la estrategia de beneficios para un equipo global: los beneficios universales que tienen sentido para todos los empleados independientemente del país (el presupuesto de home office, la cobertura de salud complementaria, el presupuesto de desarrollo profesional), los beneficios que deben localizarse porque lo que es un diferencial en un mercado es el mínimo legal en otro (la paga de vacaciones adicional, la pensión privada, la cobertura de salud) y cómo comunicar los beneficios a un equipo global de forma que cada empleado entienda el valor total de su paquete de compensación.

**6. Transparencia salarial en equipos globales**
La tendencia hacia la transparencia salarial choca con la realidad de la compensación localizada en equipos globales. Explícame las opciones de transparencia salarial para equipos distribuidos: la transparencia total (publicar los salarios de todos los empleados), la transparencia de bandas (publicar las bandas salariales por nivel y rol), la transparencia de filosofía (explicar cómo se determinan los salarios sin publicar los números) y cómo gestionar las conversaciones difíciles cuando un empleado descubre que un colega en otro país cobra significativamente más o menos por un rol similar.

Quiero orientación práctica para empresas que están construyendo sus primeras políticas de compensación global, con los errores más comunes que cometen las startups cuando contratan sus primeros empleados internacionales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar políticas de compensación competitivas y equitativas para equipos distribuidos globalmente',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal del trabajo remoto y el teletrabajo',
                'description'      => 'Las implicaciones legales de tener empleados que trabajan desde casa o desde otro país: contratos de teletrabajo, normativa de prevención de riesgos y los riesgos de tener empleados en jurisdicciones extranjeras.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado laboralista especializado en derecho del trabajo en entornos de trabajo remoto y distribuido, con experiencia asesorando a empresas tech que tienen empleados trabajando desde distintas ubicaciones dentro y fuera de su país de origen. Voy a explorar contigo el marco legal del teletrabajo y el trabajo remoto internacional.

Mi contexto: [describe tu situación: país de la empresa, países donde tienes empleados trabajando en remoto, tipo de relación laboral (empleados directos, freelancers, Employer of Record) y las principales dudas legales que tienes]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El marco legal del teletrabajo en España y la UE**
La regulación del teletrabajo ha evolucionado significativamente desde 2020. Explícame el marco legal aplicable en España y su contexto europeo: la Ley de Trabajo a Distancia (Ley 10/2021) y sus principales obligaciones para empresa y empleado (el acuerdo de trabajo a distancia, el derecho a la desconexión digital, la compensación de gastos, el registro horario), la normativa de prevención de riesgos laborales aplicable al puesto de trabajo en el domicilio y las diferencias entre el trabajo a distancia regular (más del 30% del tiempo) y el trabajo híbrido puntual.

**2. El acuerdo de trabajo a distancia: qué debe incluir**
La Ley española exige un acuerdo escrito de trabajo a distancia para los empleados que teletrabajan de forma regular. Explícame qué debe incluir este acuerdo para ser conforme a la ley: el inventario de medios y equipos cedidos por la empresa, el horario de trabajo y las reglas de disponibilidad y desconexión, la identificación del centro de trabajo de referencia, el proceso de reversibilidad del acuerdo y las condiciones de compensación de gastos. Los riesgos legales de no tener este acuerdo formalizado o de tenerlo incompleto.

**3. Prevención de riesgos laborales en el teletrabajo**
La empresa sigue siendo responsable de la seguridad y salud del empleado que trabaja desde casa, aunque el espacio sea privado. Guíame por las obligaciones de prevención de riesgos en el teletrabajo: la evaluación de riesgos del puesto de trabajo en el domicilio (ergonomía, riesgos de la pantalla, condiciones lumínicas), el procedimiento de notificación de accidente de trabajo en el domicilio, la responsabilidad de la empresa cuando el accidente ocurre durante el horario de trabajo pero fuera de la oficina y los límites prácticos de la obligación de vigilancia de la salud cuando el empleado trabaja desde casa.

**4. El riesgo de contratar en remoto fuera de España**
Tener empleados trabajando desde otro país crea riesgos legales que muchas startups no anticipan. Explícame los principales riesgos del empleado remoto internacional: el riesgo de establecimiento permanente (que la empresa tribute en el país del empleado aunque no tenga intención de tener presencia allí), el riesgo de que la relación se rija por el derecho laboral del país donde trabaja el empleado (con las protecciones y obligaciones de ese país), el riesgo de doble afiliación a la seguridad social y cómo el Reglamento CE 883/2004 determina qué sistema de seguridad social se aplica dentro de la UE.

**5. El Employer of Record como solución y sus limitaciones**
El Employer of Record (EOR) se ha convertido en la solución estándar para contratar empleados en países donde la empresa no tiene entidad legal. Explícame qué es un EOR y cómo funciona en la práctica: el EOR como empleador formal del trabajador en el país de destino, quién asume la responsabilidad de cumplir con la legislación laboral local, los límites del EOR (no es válido para directivos con responsabilidad de representación, puede crear problemas si el empleado tiene acceso a datos sensibles y la regulación local lo limita) y los aspectos del contrato con el EOR que la empresa debe revisar con cuidado.

**6. El nómada digital: el empleado que trabaja desde varios países**
El empleado que trabaja desde diferentes países a lo largo del año crea una complejidad legal especial. Explícame los problemas legales del nómada digital desde el punto de vista de la empresa: el riesgo de establecimiento permanente cuando el empleado trabaja desde un país durante más de un cierto número de días, las obligaciones de información de la empresa cuando el empleado trabaja temporalmente desde otro país, la gestión del visado para el empleado que quiere trabajar legalmente desde un tercer país y la política de trabajo desde el extranjero que una empresa debe tener para gestionar estas situaciones.

Quiero orientación práctica para empresas tech que están gestionando estas situaciones por primera vez, con los errores más comunes y sus consecuencias reales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el marco legal del teletrabajo y el trabajo remoto internacional con seguridad jurídica',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success con equipos remotos',
                'description'      => 'Mantiene la calidad del soporte cuando el equipo está distribuido: los procesos, las herramientas de colaboración y la cultura de servicio que no depende de que el equipo esté físicamente junto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo y liderando equipos de CS completamente remotos o distribuidos en múltiples zonas horarias, con dominio de los procesos, herramientas y la cultura que mantienen la calidad del servicio al cliente cuando el equipo no comparte el mismo espacio físico. Voy a explorar contigo cómo hacer customer success de calidad con un equipo remoto.

Mi contexto: [describe tu equipo de CS: número de CSMs, distribución geográfica, modelo de CS (high-touch, tech-touch, scaled), número de cuentas gestionadas y los principales retos del trabajo en remoto para tu equipo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios del customer success remoto de alto rendimiento**
Un equipo de CS remoto que funciona bien no es un equipo de oficina que trabaja desde casa: ha rediseñado sus procesos para que la calidad del servicio no dependa de la proximidad física entre los miembros del equipo. Explícame los principios que distinguen a los equipos de CS remoto de alto rendimiento: la documentación de cada interacción con el cliente como hábito colectivo (que permite a cualquier miembro del equipo ponerse al día sin preguntar), el proceso de escalada que funciona sin poder girar la silla y preguntarle al compañero, la autonomía del CSM como condición de la calidad del servicio y la cultura de transparencia que hace que los problemas salgan a la superficie antes de convertirse en crisis.

**2. Las herramientas del equipo de CS remoto**
El stack de herramientas determina la eficiencia del equipo de CS distribuido. Explícame cómo configurar el stack para un equipo de CS remoto: la plataforma de CS (Gainsight, ChurnZero, Planhat) como centro de información del cliente al que todo el equipo accede en tiempo real, las herramientas de comunicación interna del equipo (los canales de Slack que garantizan que la información relevante de un cliente llega a quien la necesita), las herramientas de comunicación con el cliente (vídeo, email, portales de cliente) y las herramientas de documentación que mantienen el conocimiento del cliente accesible para todo el equipo.

**3. Los rituales del equipo de CS distribuido**
Los rituales de equipo generan la cohesión y el alineamiento que en la oficina ocurre de forma natural. Propón el sistema de rituales para un equipo de CS remoto: el standup de equipo (con el formato que genera información útil en menos de 15 minutos), la revisión de cuentas en riesgo (que garantiza que los casos críticos tienen visibilidad y un plan), la retrospectiva de equipo que genera aprendizajes aplicables, el one-on-one manager-CSM que mantiene la relación y detecta el burnout temprano y el team building que genera sentido de equipo sin requerir presencia física.

**4. El onboarding de nuevos CSMs en remoto**
Incorporar un nuevo CSM en un equipo remoto es especialmente delicado porque el contexto que en la oficina se absorbe por osmosis debe transmitirse de forma intencional. Guíame en el diseño del onboarding de 30-60-90 días para un CSM remoto: el acceso a la documentación de los clientes existentes, el proceso de shadowing remoto de las interacciones con clientes (cómo aprender observando cuando no puedes sentarte al lado del compañero), los primeros clientes que el nuevo CSM asume y el proceso de evaluación que garantiza que está listo antes de tener la autonomía completa.

**5. La gestión del rendimiento del CSM remoto**
Gestionar el rendimiento de un CSM en remoto requiere métricas claras porque la visibilidad del trabajo es menor. Explícame el sistema de gestión del rendimiento para un equipo de CS remoto: los KPIs que miden el impacto real del CSM (NRR, churn prevention, CSAT, time to value de las cuentas nuevas), los indicadores de actividad que son proxy del trabajo hecho (reuniones con clientes, EBRs completadas, health scores actualizados), el ciclo de feedback continuo que reemplaza la conversación informal y cómo detectar el CSM que tiene dificultades antes de que la situación afecte a las cuentas.

**6. La cultura de servicio en el equipo de CS remoto**
La cultura de servicio de un equipo de CS —la actitud proactiva, el orgullo por el trabajo bien hecho, la voluntad de ir más allá por el cliente— es más difícil de construir y mantener en remoto. Explícame cómo construir y mantener una cultura de servicio de alta calidad en un equipo distribuido: las prácticas que celebran el trabajo bien hecho (y cómo hacerlo visible cuando el trabajo del CSM es invisible para el resto de la organización), el proceso para compartir las victorias y los aprendizajes entre los miembros del equipo distribuido y cómo el manager de CS en remoto modela la cultura que quiere ver en el equipo.

Quiero ejemplos concretos de equipos de CS remoto que han resuelto los retos de la distancia, con las prácticas específicas que marcan la diferencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir y liderar equipos de customer success remotos que mantienen la calidad del servicio',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El freelance nómada digital',
                'description'      => 'Trabaja desde cualquier lugar mientras gestionas clientes: las herramientas, las zonas horarias y los aspectos prácticos del freelancer que convierte la libertad de ubicación en ventaja competitiva.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelancer experimentado con años de práctica como nómada digital, con conocimiento profundo de los aspectos prácticos, las herramientas y las estrategias que permiten trabajar con clientes de forma efectiva desde cualquier parte del mundo. Voy a explorar contigo cómo construir un negocio freelance que funciona desde cualquier lugar.

Mi contexto: [describe tu situación: tu especialidad como freelancer, el tipo de clientes con los que trabajas, si ya tienes experiencia trabajando en remoto o si estás planteando el salto al nomadismo digital por primera vez]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los fundamentos del freelance nómada digital**
El nomadismo digital no es unas vacaciones largas con portátil: es un modelo de trabajo que requiere disciplina, sistemas y decisiones conscientes para que los clientes reciban la misma calidad de servicio independientemente de donde estés. Explícame los fundamentos del freelance nómada digital sostenible: la diferencia entre el nómada que trabaja mientras viaja (que suele quemarse en pocos meses) y el nómada que ha diseñado su negocio para funcionar desde cualquier lugar, la importancia de las rutinas de trabajo que no dependen del contexto físico y los criterios para elegir destinos que son compatibles con el trabajo con clientes (conectividad, diferencia horaria, coste de vida).

**2. Las herramientas del nómada digital**
La selección de herramientas determina la eficiencia y la fiabilidad del trabajo nómada. Explícame el stack de herramientas imprescindible para el freelancer nómada: las herramientas de conectividad (los routers de viaje, las eSIM globales, las estrategias de backup de conexión para los momentos en que el WiFi falla durante una reunión importante), las herramientas de productividad que no dependen de una conexión estable, las herramientas de comunicación con clientes que funcionan bien en distintas condiciones de conexión y las herramientas de backup de datos que garantizan que el trabajo no se pierde aunque el portátil sí.

**3. La gestión de las zonas horarias con clientes**
Trabajar con clientes en distintas zonas horarias es uno de los mayores retos del nómada digital. Guíame en la gestión de las zonas horarias como parte del negocio freelance: cómo comunicar la diferencia horaria a los clientes de forma que no genere inseguridad sobre la disponibilidad, las estrategias para garantizar un tiempo de solapamiento suficiente para las reuniones y la comunicación urgente, la política de disponibilidad que establece expectativas claras sin sacrificar la libertad que buscas con el nomadismo y los destinos que son especialmente compatibles con los clientes europeos o americanos según la especialidad.

**4. Los aspectos legales y fiscales del nómada digital**
El nómada digital entra en una zona gris legal y fiscal que conviene entender antes de empezar a moverse. Explícame los aspectos legales y fiscales más relevantes: el concepto de residencia fiscal y por qué importa (no es donde vives físicamente, sino donde tributan tus ingresos), los países que ofrecen visados para nómadas digitales y las condiciones que aplican, el riesgo de la doble imposición y los convenios que lo mitigan, los seguros de salud para nómadas digitales que sustituyen a la cobertura de la seguridad social del país de origen y la importancia de contar con un asesor fiscal que entienda la situación del nómada.

**5. Gestionar clientes desde lejos: comunicación y confianza**
Los clientes que trabajan con un freelancer nómada necesitan la misma o mayor confianza que con un freelancer local. Explícame las prácticas de comunicación y gestión de clientes que construyen esa confianza desde la distancia: la transparencia sobre la disponibilidad y la ubicación (cuándo conviene informar al cliente de que estás de viaje y cuándo es irrelevante), los rituales de comunicación que mantienen al cliente informado sin reuniones innecesarias, la gestión de las expectativas sobre los tiempos de respuesta y cómo gestionar una crisis de proyecto cuando estás en una zona horaria incompatible con la del cliente.

**6. La sostenibilidad del nomadismo digital a largo plazo**
El nomadismo digital que parece apetecible desde la oficina puede desgastar de formas inesperadas. Explícame cómo construir un modelo de nomadismo digital sostenible a largo plazo: el ritmo de movimiento que permite trabajar bien (los nómadas que cambian de destino cada dos semanas raramente trabajan bien), la importancia de crear rutinas de vida que compensan la falta de comunidad local, cómo gestionar el aislamiento social que es uno de los mayores riesgos del nómada solitario, los modelos mixtos (nómada temporal, base fija con viajes frecuentes) que muchos nómadas adoptan después de los primeros años y cómo evaluar cuándo el nomadismo ya no es lo que quieres.

Quiero honestidad sobre los aspectos difíciles del nomadismo digital que rara vez se mencionan en el contenido aspiracional de Instagram, y las estrategias prácticas que hacen la diferencia entre el nómada que lo abandona en seis meses y el que construye un modelo de vida sostenible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un negocio freelance que funciona de forma sostenible desde cualquier parte del mundo',
                'vote_score'       => 44,
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
