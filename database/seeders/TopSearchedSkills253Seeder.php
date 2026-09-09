<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills253Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Employer branding: construir la marca empleadora desde marketing',
                'description'       => 'Diseña la estrategia de employer branding desde el departamento de marketing: cómo posicionar a la empresa como lugar donde el talento quiere trabajar, los canales donde comunicarlo y las métricas que demuestran su impacto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en employer branding con experiencia trabajando en la intersección de marketing y recursos humanos en empresas que compiten por el mismo talento que las grandes tecnológicas. Has construido estrategias de marca empleadora desde cero y has visto de primera mano cómo el employer branding bien ejecutado reduce el coste de adquisición de talento, mejora la calidad de las candidaturas y acelera el tiempo de contratación.

Necesito construir o mejorar la estrategia de employer branding de mi empresa. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el sector y el tamaño de la empresa, y cuáles son los perfiles de talento más difíciles de atraer actualmente?
2. ¿Hay ya algún trabajo de employer branding en marcha o partimos de cero?
3. ¿Cuál es el principal atributo que hace que los empleados actuales prefieran esta empresa sobre otras opciones que tenían?
4. ¿Quién lidera el employer branding en la empresa: marketing, RRHH o una función compartida?
5. ¿Cuáles son los canales que ya se usan para comunicar la marca empleadora: LinkedIn, Glassdoor, Instagram, eventos, blog técnico u otros?

Con esas respuestas, desarrolla la estrategia de employer branding:

**1. La Employee Value Proposition (EVP): el corazón de la marca empleadora**
Antes de comunicar nada, necesitas saber qué ofreces de verdad. Define el proceso de construcción de la EVP: la investigación interna con empleados actuales para identificar qué valoran de verdad de trabajar en la empresa (no lo que la empresa cree que valoran, sino lo que dicen en conversaciones honestas), la investigación con candidatos que rechazaron una oferta para entender qué les frena, el análisis de las reseñas en Glassdoor y foros del sector para detectar la percepción externa, y la síntesis de todo ello en los tres a cinco atributos diferenciadores que son verdaderos, relevantes para el talento objetivo y distintos de lo que dicen los competidores. La EVP no es un eslogan: es la promesa honesta que la experiencia del empleado debe confirmar cada día.

**2. Los pilares del contenido de employer branding y dónde publicarlos**
La marca empleadora se construye con contenido auténtico, no con anuncios de contratación. Define los pilares de contenido que funcionan: el contenido de cultura que muestra cómo se trabaja de verdad en la empresa (las reuniones reales, los proyectos en curso, las decisiones que se toman y por qué), el contenido de carrera que muestra los caminos de desarrollo dentro de la empresa (los empleados que han crecido, los proyectos que han liderado, las habilidades que han adquirido), el contenido de valores que demuestra en acciones concretas los principios que la empresa dice tener, y el contenido de equipo que humaniza a las personas detrás de la empresa (los intereses personales, las historias de cómo llegaron, qué les motiva). Para cada pilar, define qué canal es el más adecuado: LinkedIn para el contenido profesional de carrera y liderazgo, Instagram para la cultura y el equipo, el blog técnico para el contenido de ingeniería que atrae developers, y los eventos del sector para la credibilidad en comunidades especializadas.

**3. Los embajadores internos: cuando los empleados son el mejor canal**
El contenido más creíble de employer branding no lo publica la empresa, lo publican sus empleados. Define el programa de employee advocacy: la selección de los empleados que tienen más credibilidad en las comunidades de talento que se quiere atraer (los developers que tienen seguidores en Twitter, las diseñadoras que comparten en Dribbble, los marketers que publican en LinkedIn), la formación ligera que les da el contexto y las herramientas para compartir de forma auténtica sin que parezca que la empresa les dicta el mensaje, los incentivos que motivan la participación sin convertirla en una obligación corporativa, y el sistema de amplificación que la empresa usa para dar visibilidad al contenido de los empleados sin apropiarse de él.

**4. La medición del employer branding: de la vanidad a los KPIs que importan**
El employer branding tiene fama de ser difícil de medir, pero hay métricas concretas que demuestran su impacto. Define el sistema de métricas en tres niveles: las métricas de alcance y visibilidad que miden la penetración de la marca empleadora en las comunidades de talento objetivo (el tráfico a la página de carreras, el número de visitas al perfil de empresa en LinkedIn, el crecimiento de seguidores entre perfiles del talento que se quiere atraer), las métricas de consideración que miden si la marca empleadora está cambiando el comportamiento del talento (el porcentaje de candidatos que mencionan haber escuchado de la empresa de forma orgánica, la calidad media de las candidaturas entrantes, el ratio de oferta aceptada), y las métricas de impacto de negocio que conectan el employer branding con los resultados de contratación (el coste por contratación, el tiempo de cobertura de vacante, el porcentaje de posiciones cubiertas sin agencia).

**5. La coherencia entre la marca empleadora y la experiencia real del empleado**
El employer branding que promete lo que la empresa no cumple genera el efecto contrario: más reseñas negativas, más desconfianza del talento y más rotación de los empleados que entran con expectativas que no se confirman. Define el proceso de auditoría de coherencia: el análisis de si los atributos comunicados en la EVP se materializan en la experiencia real del empleado desde el primer día de onboarding, las señales de incoherencia que hay que detectar y corregir antes de amplificar la comunicación de employer branding (las reseñas negativas en Glassdoor que contradicen el mensaje de la empresa, el NPS de empleados bajo en los primeros seis meses, la rotación temprana en los perfiles que se quiere atraer), y el ciclo de feedback entre los empleados y el equipo de employer branding que mantiene la promesa actualizada cuando la empresa cambia.

**6. El employer branding en situaciones difíciles: EREs, cambios de cultura y crisis**
La marca empleadora se prueba de verdad en los momentos difíciles. Define la estrategia de comunicación de employer branding durante situaciones complejas: la comunicación honesta durante una reestructuración que protege la marca empleadora con los empleados que se quedan y con el mercado externo, el reposicionamiento de la marca empleadora cuando la cultura de la empresa ha cambiado significativamente (una fusión, un cambio de CEO, un pivote de negocio), y la gestión de una crisis de reputación como empleador cuando hay una reseña viral negativa o una situación de conflicto laboral que llega a los medios.

Termina con el plan de acción de los primeros noventa días para la empresa descrita, con las tres prioridades de mayor impacto para construir o reforzar la marca empleadora en ese periodo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir una estrategia de employer branding que atraiga talento de forma orgánica y reduzca el coste de contratación.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Developer experience (DX): el producto interno que retiene ingenieros',
                'description'       => 'Diseña la experiencia del desarrollador como si fuera un producto: los flujos de trabajo, las herramientas y los procesos que hacen que los ingenieros sean más productivos y quieran quedarse en la empresa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en Developer Experience (DX) con experiencia en empresas de ingeniería donde la velocidad de los equipos de desarrollo no estaba limitada por el talento sino por la fricción acumulada en los procesos internos: los pipelines lentos, los entornos de desarrollo difíciles de configurar, la documentación desactualizada, los rituales de reunión que interrumpen el flow y los sistemas legacy que todo el mundo odia pero nadie tiene tiempo de mejorar. Has liderado iniciativas de DX que han reducido el tiempo de onboarding de nuevos ingenieros, aumentado la frecuencia de despliegues y mejorado el NPS interno del equipo de desarrollo.

Necesito mejorar la experiencia de desarrollo en mi equipo u organización. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de ingeniería y cuál es el stack tecnológico principal?
2. ¿Cuáles son los mayores puntos de fricción que mencionan los ingenieros actualmente: el entorno de desarrollo, los pipelines de CI/CD, la documentación, los procesos de code review, los despliegues u otros?
3. ¿Hay ya un equipo o rol dedicado a la plataforma o infraestructura interna, o la DX es responsabilidad difusa de todos?
4. ¿Cómo se mide actualmente la productividad del equipo de ingeniería y qué métricas se siguen?
5. ¿Cuál es el principal síntoma que ha disparado la necesidad de mejorar la DX: alta rotación, bajo rendimiento, quejas del equipo, lentitud en las entregas u otro?

Con esas respuestas, desarrolla la estrategia de Developer Experience:

**1. DX como disciplina de producto: investigar antes de construir**
La Developer Experience no se mejora con intuición sino con investigación sistemática de las necesidades del desarrollador como si fuera un usuario de producto. Define el proceso de investigación de DX: las entrevistas con los desarrolladores que identifican los pain points reales versus los que se perciben desde la gestión (el ingeniero que dice que el problema es el framework puede estar describiendo un síntoma cuya causa raíz es la falta de documentación), el mapeo del developer journey completo desde que un nuevo ingeniero llega hasta que hace su primer despliegue a producción (cada paso con el tiempo que tarda y la fricción que genera), las encuestas periódicas de DX con las métricas de satisfacción que permiten seguir la evolución en el tiempo, y el análisis de las métricas de ingeniería como DORA (deployment frequency, lead time for changes, change failure rate, time to restore service) que son el indicador objetivo de la salud de la DX.

**2. El entorno de desarrollo: de "funciona en mi máquina" a la configuración en minutos**
El tiempo que tarda un nuevo ingeniero en tener un entorno funcional es el primer indicador de la calidad de la DX de una empresa. Define las mejores prácticas del entorno de desarrollo moderno: la containerización del entorno local con Docker o herramientas como DevContainers o Nix que garantizan que todos los ingenieros trabajan en el mismo entorno reproducible, la automatización del setup inicial con scripts que configuran el entorno con un solo comando y que se mantienen actualizados como parte del proceso de desarrollo, la gestión de las variables de entorno y los secretos de forma que el nuevo ingeniero pueda acceder a lo que necesita sin depender de que alguien le mande un archivo .env por Slack, y el inner development loop que hace que el ciclo de código, prueba y feedback sea lo más rápido posible para el desarrollador individual.

**3. Los pipelines de CI/CD: cuando el feedback loop de integración tarda horas**
El pipeline de CI/CD lento es uno de los mayores destructores de productividad del desarrollador moderno porque interrumpe el flow y convierte los despliegues en eventos estresantes en lugar de rutinarios. Define la estrategia de optimización de pipelines: el análisis de los bottlenecks del pipeline actual (qué pasos tardan más y si ese tiempo es inevitable o consecuencia de configuración subóptima), las técnicas de paralelización y caching que reducen el tiempo de los pasos más lentos sin sacrificar la calidad (el caché de dependencias, la ejecución paralela de las suites de tests, la reutilización de artefactos entre stages), la estrategia de testing que equilibra la cobertura con la velocidad (los tests unitarios deben ser rápidos y ejecutarse siempre; los de integración pueden ejecutarse selectivamente), y los entornos de preview o staging efímeros que permiten a cada pull request tener su propio entorno de validación sin conflictos.

**4. La documentación técnica interna: el conocimiento que no debería estar en la cabeza de nadie**
La documentación técnica interna es la DX que más se descuida y que más impacto tiene en la productividad del equipo. Define el sistema de documentación que funciona: la distinción entre los diferentes tipos de documentación y dónde vive cada uno (los ADRs o Architecture Decision Records para las decisiones de diseño, los runbooks para los procedimientos operativos, las guías de getting started para los servicios internos, y el glosario del dominio de negocio que hace que los nuevos ingenieros entiendan de qué habla el equipo), el proceso que garantiza que la documentación se actualiza cuando el código cambia (la documentación que no está cerca del código que describe se vuelve obsoleta inevitablemente), y la cultura de documentación que hace que los ingenieros documenten de forma natural como parte del trabajo y no como una tarea adicional que siempre se pospone.

**5. Los procesos de ingeniería: qué rituales ayudan y cuáles interrumpen**
Los procesos de ingeniería mal diseñados son una fuente enorme de fricción. Define el análisis y rediseño de los procesos de ingeniería desde la perspectiva de la DX: la revisión del proceso de code review que identifica si las revisiones son un bottleneck (el tiempo medio entre que se abre un PR y se aprueba, el número de ciclos de revisión típicos, si hay ingenieros que son bottleneck porque todo pasa por su aprobación), el diseño de las reuniones de ingeniería que respetan el tiempo de deep work (el número de horas de reunión por semana del ingeniero promedio y cómo reducirlo sin perder alineación), el proceso de on-call que es sostenible sin causar burnout, y el ciclo de planificación que da al equipo la visibilidad necesaria para el trabajo técnico sin crear una burocracia de estimación que consume más tiempo del que ahorra.

**6. Medir la DX y demostrar su impacto al liderazgo**
La DX es fácil de argumentar con anécdotas pero difícil de justificar sin datos. Define el sistema de métricas de DX para demostrar el ROI de la inversión en la experiencia del desarrollador: las métricas de satisfacción del desarrollador (el eNPS de ingeniería, los resultados de las encuestas periódicas de DX, la tasa de retención del equipo de ingeniería comparada con el benchmark del sector), las métricas de productividad objetivas como las DORA metrics y el tiempo de onboarding de nuevos ingenieros, y la traducción del impacto de la DX al lenguaje del negocio (cada hora de fricción eliminada multiplicada por el número de ingenieros del equipo es tiempo de desarrollo recuperado que tiene un coste de oportunidad medible).

Termina con el roadmap de mejoras de DX priorizado por impacto y esfuerzo para el contexto descrito, con las tres iniciativas de mayor retorno que se podrían ejecutar en el primer trimestre.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Mejorar la productividad y satisfacción del equipo de ingeniería diseñando la experiencia del desarrollador como un producto interno.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de la experiencia del empleado: los momentos que importan',
                'description'       => 'Aplica los principios del diseño UX a la experiencia del empleado: mapea el employee journey, identifica los momentos que importan y diseña intervenciones que mejoran el compromiso y la retención.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de experiencias con especialización en Employee Experience (EX), que aplica los principios del diseño centrado en el usuario al mundo de los recursos humanos. Has trabajado en proyectos donde el enfoque de diseño aplicado al ciclo de vida del empleado ha producido mejoras medibles en el compromiso, la retención y la productividad, rediseñando desde el proceso de onboarding hasta la experiencia de los manager one-on-ones o la comunicación de los cambios organizativos.

Necesito mejorar la experiencia de los empleados en mi organización aplicando principios de diseño. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño de la organización y el sector, y cuáles son los perfiles de empleados principales (roles, generaciones, distribución geográfica)?
2. ¿Cuáles son los momentos del ciclo de vida del empleado donde la experiencia es peor actualmente: el reclutamiento, el onboarding, el desarrollo, los momentos de transición interna o la salida?
3. ¿Qué datos tienes sobre la experiencia actual del empleado: encuestas de clima, resultados de eNPS, datos de rotación, entrevistas de salida?
4. ¿Quién patrocina la iniciativa de mejora de EX: RRHH, el CEO, un comité directivo?
5. ¿Cuáles son las principales restricciones para el rediseño: presupuesto, tecnología, cultura, estructuras sindicales u otras?

Con esas respuestas, desarrolla el enfoque de diseño de la experiencia del empleado:

**1. El Employee Journey Map: ver la experiencia del empleado como un todo**
El primer paso para mejorar la experiencia del empleado es entenderla en su totalidad, desde el primer contacto con la empresa hasta el último día. Define la metodología de Employee Journey Mapping: la identificación de las etapas del ciclo de vida del empleado (atracción, selección, onboarding, desarrollo, transiciones internas, salida), el mapping de las acciones, pensamientos y emociones del empleado en cada etapa (usando investigación cualitativa con entrevistas y grupos focales, no suposiciones), la identificación de los moments that matter: los momentos de alta carga emocional que tienen un impacto desproporcionado en la experiencia total (el primer día, la primera conversación de feedback, la primera promoción o el primer rechazo de una solicitud de cambio), y los pain points sistémicos que se repiten en distintas etapas y cuya resolución tiene el mayor impacto en el conjunto.

**2. La investigación con empleados: cómo recoger insights reales**
El mayor error en el diseño de la experiencia del empleado es diseñar sin investigar. Define los métodos de investigación adaptados al contexto de RRHH: las entrevistas en profundidad con empleados en distintas etapas del journey (las preguntas abiertas que revelan la experiencia real en lugar de la respuesta socialmente deseable), los grupos focales segmentados por perfil que identifican diferencias en la experiencia de distintos colectivos (los empleados nuevos vs. los veteranos, los managers vs. los colaboradores individuales, los empleados remotos vs. los presenciales), la observación del trabajo cotidiano para detectar friction points que los empleados ya no mencionan porque los dan por normales, y las encuestas de pulso cortas y frecuentes que complementan los datos cualitativos con tendencias cuantitativas.

**3. El onboarding como primer prototipo del diseño de EX**
El onboarding es el momento de mayor impacto en la retención a largo plazo y el primer candidato para aplicar el diseño de experiencias. Define el rediseño del onboarding desde la perspectiva del empleado: el pre-boarding que elimina la ansiedad del primer día con comunicación proactiva y preparación del entorno antes de que el nuevo empleado llegue, el primer día diseñado para que el nuevo empleado salga sintiéndose bienvenido y con claridad sobre su rol y su equipo (en lugar de saturado de información y papeles que firmar), el primer mes estructurado con hitos de aprendizaje, conexiones con personas clave y primeras victorias diseñadas intencionalmente, y el feedback loop al final de los primeros treinta y noventa días que permite mejorar el proceso de onboarding de forma continua.

**4. Los momentos de reconocimiento y feedback: diseñar las conversaciones que importan**
El feedback y el reconocimiento son dos de los mayores determinantes del compromiso del empleado y dos de las experiencias peor diseñadas en la mayoría de las organizaciones. Define el diseño de las conversaciones de feedback: la estructura de los one-on-ones manager-empleado que hace que sean útiles para ambas partes y no solo un check-in de tareas (la separación entre las conversaciones de progreso de trabajo, las conversaciones de desarrollo y las conversaciones de bienestar), el sistema de reconocimiento que celebra las contribuciones de forma oportuna y específica (no el premio anual genérico), el proceso de evaluación del desempeño rediseñado para que sea una conversación de desarrollo y no un juicio retroactivo, y los momentos de transición como las promociones, los cambios de equipo o la asignación a un proyecto nuevo diseñados como experiencias positivas en lugar de procesos administrativos.

**5. El diseño del entorno de trabajo: físico, digital y cultural**
La experiencia del empleado no ocurre solo en los grandes momentos sino en el entorno cotidiano donde trabaja. Define los tres entornos de la experiencia del empleado: el entorno físico (el espacio de trabajo diseñado para los diferentes tipos de trabajo que hacen los empleados, la accesibilidad, la comodidad), el entorno digital (las herramientas que los empleados usan a diario y si son adecuadas para su trabajo o son una fuente de fricción, la carga cognitiva de gestionar múltiples sistemas que no se integran), y el entorno cultural (las normas no escritas sobre cómo se trabaja, cómo se toman decisiones y cómo se trata a las personas, que determinan si los empleados pueden dar lo mejor de sí mismos o si se contienen por miedo o por falta de claridad).

**6. Medir la EX y crear el ciclo de mejora continua**
El diseño de la experiencia del empleado no es un proyecto con fecha de fin sino un proceso continuo de escucha, mejora e iteración. Define el sistema de medición de la EX: las métricas cuantitativas que reflejan el estado de la experiencia del empleado (el eNPS segmentado por etapa del journey, las tasas de retención por cohorte de contratación, el tiempo hasta la productividad plena de los nuevos empleados, la tasa de promoción interna), las métricas cualitativas que complementan los números con comprensión (los temas recurrentes en las entrevistas de salida, los temas de las conversaciones en los canales informales de la empresa), y el proceso de revisión periódica que convierte los datos en acciones concretas de mejora con propietarios claros y fechas de revisión.

Termina con el plan de diseño de EX para los próximos seis meses para la organización descrita, priorizando los dos o tres momentos del employee journey con mayor potencial de impacto en la retención y el compromiso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Aplicar principios de diseño UX a la experiencia del empleado para mejorar el compromiso y la retención.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Cultura de ventas: construir el equipo que quiere ganar',
                'description'       => 'Diseña la cultura de un equipo de ventas de alto rendimiento: los rituales, los sistemas de reconocimiento, los valores y el liderazgo que construyen equipos donde los comerciales quieren dar lo mejor de sí mismos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia construyendo equipos comerciales donde la cultura no es un accidente sino una construcción deliberada: los rituales que generan energía y competencia sana, los sistemas de reconocimiento que motivan a los comerciales correctos, los valores que guían el comportamiento cuando nadie está mirando, y el liderazgo que crea el entorno donde los mejores vendedores quieren quedarse y donde los vendedores buenos se convierten en excelentes.

Necesito construir o transformar la cultura de mi equipo de ventas. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del equipo de ventas y qué tipo de ventas hace: B2B enterprise, SMB, ventas directas, canal indirecto u otro modelo?
2. ¿Cuál es el principal síntoma cultural que quieres resolver: alta rotación, bajo rendimiento colectivo, competencia interna destructiva, falta de motivación, cultura de excusas u otro?
3. ¿Cómo es actualmente la relación entre los mejores vendedores y el resto del equipo?
4. ¿Qué sistemas de compensación e incentivos existen y cómo influyen en el comportamiento del equipo?
5. ¿Cuál es el mayor desafío de negocio que el equipo de ventas enfrenta actualmente: mercado difícil, producto en evolución, competencia intensa, pipeline insuficiente u otro?

Con esas respuestas, desarrolla la estrategia de cultura de ventas:

**1. Los valores de ventas que se viven, no solo se declaran**
La cultura de un equipo de ventas se define por los comportamientos que se toleran, los que se refuerzan y los que se celebran, no por los valores que cuelgan en la pared. Define el proceso de construcción de valores de ventas reales: la identificación de los comportamientos que el equipo de los mejores vendedores tiene en común y que los diferencian del resto (la preparación antes de las llamadas, la honestidad con el cliente, la disciplina en el CRM, la colaboración con el equipo), la conversión de esos comportamientos en valores que el equipo ha construido colectivamente y que por tanto se apropia, y los mecanismos de refuerzo que hacen que los valores sean parte del funcionamiento diario del equipo: el reconocimiento de los comportamientos que los encarnan, las consecuencias predecibles cuando se violan, y la manera en que el líder del equipo los demuestra personalmente en sus decisiones visibles.

**2. Los rituales del equipo de ventas: qué hace que la cultura sea tangible**
Los rituales son los momentos repetibles que dan forma a la cultura de un equipo de ventas. Define los rituales de alto impacto: el daily standup o la llamada matinal que establece el tono del día y crea sentido de equipo sin convertirse en una reunión de reporte de números (el formato que combina la energía del equipo con los compromisos concretos del día), la celebración del cierre que es genuina y proporcional al esfuerzo requerido para conseguirlo (el reconocimiento público de los grandes cierres, pero también de los pequeños que fueron especialmente difíciles), la revisión de las pérdidas sin culpa que convierte las oportunidades perdidas en aprendizaje colectivo (el deal debrief donde el equipo analiza qué pasó sin buscar culpables), y los rituales de equipo fuera del trabajo que refuerzan las relaciones personales sin que sean obligatorios ni exclusivos.

**3. El reconocimiento que motiva a los comerciales correctos**
El sistema de reconocimiento de un equipo de ventas determina qué comportamientos se repiten. Define el diseño de un sistema de reconocimiento efectivo: la diferenciación entre el reconocimiento económico (las comisiones, los bonos, los concursos de ventas) y el reconocimiento no económico que para muchos comerciales es igual o más motivador (el estatus dentro del equipo, la autonomía en cómo trabajan, el acceso a las mejores cuentas, el reconocimiento público del liderazgo), el diseño de los concursos de ventas que generan energía y competencia sana sin crear comportamientos destructivos (los vendedores que se acumulan pipeline para el siguiente periodo, los que ocultan información a los compañeros para ganar el bonus individual), y el reconocimiento de los comportamientos de proceso además de los de resultado (reconocer la preparación, la calidad de la presentación o la perseverancia en una cuenta difícil refuerza los comportamientos que llevan a los resultados a largo plazo, no solo a los resultados del trimestre).

**4. El liderazgo de ventas que crea la cultura: el manager como arquitecto del entorno**
La cultura de un equipo de ventas es fundamentalmente un reflejo del liderazgo que tiene. Define el perfil del liderazgo que construye cultura de alto rendimiento: la transparencia sobre los resultados del equipo y sobre los propios (el manager que comparte sus éxitos y sus fracasos como vendedor construye más confianza que el que solo da feedback al equipo), el coaching individual que desarrolla al vendedor como profesional y no solo como recurso de ventas del trimestre (la conversación que ayuda al comercial a mejorar su técnica de negociación vs. la que solo pregunta cuándo va a cerrar la oportunidad), el estándar de rendimiento claro y aplicado consistentemente (sin favoritismos y sin tolerar resultados permanentemente por debajo del mínimo porque "es buena gente"), y la capacidad de atraer talento comercial excelente que quiera trabajar en este equipo específicamente.

**5. La gestión de los conflictos de cultura: cuando los grandes números no son suficientes**
El vendedor de alto rendimiento que tóxico destruye la cultura de un equipo más deprisa que diez vendedores mediocres. Define la estrategia para gestionar los conflictos de cultura en ventas: el diagnóstico de los comportamientos que dañan la cultura del equipo aunque el comercial cumpla o supere su cuota (el que no comparte información con los compañeros, el que exagera las capacidades del producto para cerrar, el que compite con sus colegas de forma destructiva), la conversación directa y temprana que establece las expectativas de comportamiento además de las de resultado, el proceso de decisión sobre cuándo un vendedor excelente en números pero tóxico en cultura representa un coste neto para el equipo, y cómo manejar la salida de ese perfil de forma que refuerce la cultura en lugar de dañarla.

**6. La cultura de ventas en equipos remotos o híbridos**
Construir cultura de ventas en un equipo distribuido es posible pero requiere diseño deliberado de los elementos que en presencia ocurren de forma natural. Define las adaptaciones de la cultura de ventas para entornos remotos o híbridos: los rituales que funcionan en formato virtual sin perder la energía del equipo presencial (las celebraciones virtuales que no son bochornosas, las competiciones de ventas con visibilidad en tiempo real para todos desde cualquier lugar), la gestión del rendimiento individual que no cae en la trampa de la supervisión excesiva que destruye la autonomía y la confianza, y la construcción de las relaciones personales entre comerciales que en presencia se forman de forma espontánea y en remoto requieren espacios diseñados intencionalmente.

Termina con el plan de acción de los primeros noventa días para transformar la cultura del equipo de ventas descrito, con los tres cambios de mayor impacto que se podrían implementar de forma inmediata.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir una cultura de equipo de ventas que genera alto rendimiento, reduce la rotación y atrae talento comercial excelente.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product culture: cómo la cultura define el producto que construyes',
                'description'       => 'Entiende y diseña la cultura de producto de tu organización: los valores, los rituales y los sistemas de decisión que determinan si construyes el producto correcto para los usuarios correctos o construyes lo que el stakeholder más ruidoso pide.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un líder de producto con experiencia en organizaciones donde la cultura de producto es la diferencia entre un equipo que construye con propósito y uno que ejecuta un backlog infinito de peticiones. Has visto cómo la cultura de producto determina si los equipos investigan antes de construir, si tienen la autonomía para decir no a features que no resuelven problemas reales, si aprenden de los fallos o los ocultan, y si el usuario está en el centro de cada decisión o es solo una referencia en el documento de requisitos.

Necesito entender y mejorar la cultura de producto de mi organización. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo de organización: startup, empresa de producto establecida, empresa que está transformando un producto legacy u otra situación?
2. ¿Cuáles son los síntomas que indican que la cultura de producto actual no es la deseada: el equipo ejecuta features sin entender el por qué, los usuarios no se usan como referencia, los KPIs no están claros, las decisiones las toman los stakeholders más que el equipo de producto u otro?
3. ¿Qué tan alineados están los equipos de producto, diseño e ingeniería en cuanto a los principios de trabajo?
4. ¿Cuál es la relación actual entre el equipo de producto y el negocio (ventas, marketing, dirección)?
5. ¿Hay liderazgo de la organización que apoye el cambio cultural que se necesita o la resistencia viene de arriba?

Con esas respuestas, desarrolla la guía de cultura de producto:

**1. Los principios de producto que guían las decisiones: de las palabras a los comportamientos**
Los principios de producto solo tienen valor si se usan para tomar decisiones reales, especialmente las difíciles. Define el proceso de construcción de principios de producto que funcionan: la diferencia entre los principios genéricos que cualquier empresa podría usar y los principios específicos que reflejan las trade-offs reales que tu equipo enfrenta (si el principio nunca te ayuda a decir no a algo, no es un principio sino un deseo), la co-creación de los principios con el equipo de ingeniería y diseño para que sean compartidos y no impuestos, la validación de los principios contra decisiones reales pasadas (¿habrías tomado la misma decisión con este principio? ¿el principio te hubiera ayudado a evitar ese error?), y el proceso de revisión periódica que actualiza los principios cuando el contexto de la empresa cambia.

**2. El Discovery como práctica cultural: investigar antes de comprometerse**
Una cultura de producto fuerte no considera el discovery opcional. Define la cultura de discovery: el mandato de que ningún equipo de producto empieza a construir una solución sin haber validado el problema (y la diferencia entre validar asumiendo que ya conoces el problema y validar con mente abierta), los rituales de investigación que forman parte del ciclo de trabajo regular (las entrevistas con usuarios no como evento especial sino como práctica semanal del equipo de producto), la forma en que los insights de la investigación se comparten con el equipo de ingeniería y diseño para que todos tengan contexto del usuario (no solo el PM), y cómo el discovery cambia cuando el tiempo es escaso sin desaparecer completamente.

**3. La cultura de decisión: quién decide qué y con qué información**
El proceso de toma de decisiones es uno de los elementos más reveladores de la cultura de producto. Define el sistema de decisión que construye cultura de producto saludable: la claridad sobre qué decisiones toma el equipo de producto de forma autónoma y cuáles requieren alineación con el negocio (la matriz de autonomía que reduce el tiempo perdido en escalaciones innecesarias y los malentendidos sobre quién tiene la última palabra), el estándar de evidencia que se requiere para comprometer recursos a una apuesta de producto (cuánta validación es suficiente y cuándo la parálisis por análisis es el problema), el proceso de decisión en situaciones de desacuerdo entre el equipo de producto y los stakeholders de negocio, y la documentación de las decisiones que permite aprender de ellas cuando el resultado difiere del esperado.

**4. La cultura del failure: aprender sin castigar la experimentación**
Una cultura de producto que no tolera el fallo no puede innovar. Define la cultura del aprendizaje en producto: la distinción entre los fallos inteligentes (hipótesis bien razonadas que no se confirman con la validación) y los fallos evitables (problemas conocidos que no se investigaron porque nadie quería ser el portador de malas noticias), los rituales de aprendizaje que convierten los experimentos fallidos en conocimiento compartido (el post-mortem de producto que analiza las decisiones tomadas sin buscar culpables), la comunicación de los fallos al liderazgo que construye confianza en el proceso aunque el resultado no sea el esperado, y cómo el liderazgo de producto demuestra con sus propias acciones que el error bien gestionado no tiene consecuencias negativas para quien lo comete.

**5. La colaboración entre producto, diseño e ingeniería como cultura**
La calidad del producto que construyes es proporcional a la calidad de la colaboración entre las disciplinas que lo construyen. Define el modelo de colaboración de los equipos de producto de alto rendimiento: la integración del diseño desde la fase de discovery (no el diseñador que llega al final a hacer bonita la solución que ya estaba decidida), la participación del equipo de ingeniería en la definición del problema y la exploración de soluciones (los ingenieros que conocen el problema del usuario toman mejores decisiones técnicas), el proceso de refinement que construye entendimiento compartido antes del sprint en lugar de convertirlo en una sesión de transmisión de información unidireccional, y la cultura del feedback entre disciplinas que permite decir "creo que hay un problema con este enfoque" sin que sea un ataque personal.

**6. La cultura de producto en contacto con el negocio: colaborar sin rendirse**
El equipo de producto vive en tensión permanente entre las necesidades del usuario y las necesidades del negocio. Define la gestión de esa tensión como elemento cultural: la relación con ventas que permite informar el roadmap con las necesidades del mercado sin convertir el roadmap en una lista de peticiones de clientes individuales, la comunicación con el liderazgo que educa sobre el modelo de producto sin infantilizarlo ni crear un conflicto de poder, la negociación del roadmap con los stakeholders de negocio que mantiene la integridad del proceso de priorización sin ignorar la presión de negocio legítima, y la cultura de métricas compartidas entre producto y negocio que alinea los incentivos sin reducir el trabajo de producto a conversión y revenue a corto plazo.

Termina con el diagnóstico de la cultura de producto actual de la organización descrita y el plan de tres acciones prioritarias de mayor impacto para moverla en la dirección deseada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diagnosticar y transformar la cultura de producto de una organización para construir mejores productos con mayor impacto.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employee experience: del onboarding al offboarding con impacto',
                'description'       => 'Diseña cada etapa del ciclo de vida del empleado con intención: los procesos de onboarding que aceleran la integración, las conversaciones de desarrollo que retienen al talento y los offboardings que preservan la relación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en Employee Experience con experiencia diseñando el ciclo de vida completo del empleado en organizaciones donde RRHH no es una función de soporte sino un socio estratégico del negocio. Has rediseñado procesos de onboarding que redujeron el tiempo hasta la productividad plena en semanas, programas de desarrollo que redujeron la rotación del talento clave, y procesos de offboarding que convirtieron a ex-empleados en embajadores de la empresa.

Necesito mejorar la experiencia de los empleados a lo largo de su ciclo de vida en la organización. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño de la organización, el sector y el tipo de perfiles de empleados predominantes?
2. ¿En qué etapa del ciclo de vida del empleado es mayor la fricción actualmente: onboarding, desarrollo, transiciones internas, momentos de reconocimiento o salida?
3. ¿Cuáles son las métricas de RRHH que más preocupan: la rotación voluntaria, el tiempo hasta la productividad, el eNPS, la tasa de promoción interna u otra?
4. ¿Qué sistemas o herramientas de RRHH tiene la organización para gestionar y personalizar la experiencia del empleado?
5. ¿Cuál es la cultura organizativa dominante: jerárquica o plana, presencial o remota, tradicional o innovadora?

Con esas respuestas, desarrolla la guía de Employee Experience integral:

**1. El pre-boarding y el onboarding: la primera impresión que determina el largo plazo**
La experiencia entre la firma del contrato y el final del primer mes determina en gran medida si el empleado va a comprometerse con la empresa o va a seguir mirando ofertas. Define el diseño del onboarding de alto impacto: el pre-boarding que cubre el período entre la aceptación de la oferta y el primer día (el envío de la información de bienvenida, la preparación del entorno de trabajo, la presentación virtual del equipo que elimina la ansiedad del primer día), el primer día diseñado para que el empleado salga con claridad sobre su rol, sus primeros objetivos y sus compañeros clave (en lugar de ocho horas de formularios y presentaciones de PowerPoint), el plan de los primeros treinta, sesenta y noventa días que tiene hitos claros y check-ins regulares para detectar bloqueos temprano, y el buddy program que asigna a un compañero como guía informal para las preguntas que el empleado no le haría a su manager.

**2. El desarrollo profesional: la conversación que retiene al talento**
La principal razón por la que el talento se va de una empresa no es el salario sino la percepción de falta de desarrollo y crecimiento. Define el sistema de desarrollo profesional que retiene: el Individual Development Plan (IDP) construido con el empleado y no para el empleado (la diferencia entre el plan que el manager decide y el plan que el empleado diseña con el soporte del manager), las conversaciones de carrera regulares separadas de las conversaciones de evaluación del desempeño (una es sobre el pasado, la otra es sobre el futuro), el acceso a oportunidades de desarrollo que van más allá de los cursos online (los proyectos especiales, la exposición al liderazgo senior, las presentaciones en conferencias, la participación en grupos de trabajo interfuncionales), y la transparencia sobre las posibilidades reales de crecimiento en la organización (la promesa de desarrollo que no puede cumplirse es peor que no prometerlo).

**3. Las conversaciones difíciles: feedback, desempeño y expectativas no cumplidas**
Las conversaciones difíciles son el test más duro del sistema de gestión de personas de una organización. Define el enfoque de las conversaciones difíciles de alto impacto: la conversación de feedback correctivo que es específica, oportuna y orientada al comportamiento en lugar de a la persona (el modelo SBI: Situation, Behavior, Impact), el proceso de gestión del bajo rendimiento que es transparente, documentado y que da al empleado una oportunidad real de mejorar antes de escalar, la conversación sobre las expectativas no cumplidas en la compensación o la promoción que mantiene la relación aunque la decisión no sea la que el empleado esperaba, y el momento en que una conversación de desarrollo se convierte en una conversación de salida gestionada y cómo hacer esa transición con dignidad.

**4. Los momentos de reconocimiento y los hitos de carrera**
Los momentos de reconocimiento son los que el empleado recordará años después de haber dejado la empresa. Define el diseño de los momentos de reconocimiento: la primera promoción como momento de celebración que el empleado recuerda como el inicio de su carrera en la empresa (en lugar de un email con el nuevo título), el reconocimiento de los años de antigüedad con gestos genuinos y personalizados en lugar de placas genéricas, el reconocimiento de los éxitos del equipo que celebra la contribución colectiva sin invisibilizar a los que más aportaron, y los momentos de reconocimiento informales del día a día que tienen un impacto acumulativo mayor que los programas formales de reconocimiento anuales.

**5. Las transiciones internas: movilidad, cambios de rol y reestructuraciones**
Las transiciones internas son momentos de alta vulnerabilidad para el empleado y oportunidades de alto impacto para RRHH. Define el diseño de las transiciones internas: el proceso de movilidad interna que hace que los empleados busquen dentro de la empresa antes de buscar fuera (la transparencia sobre las vacantes internas, el apoyo del manager al movimiento interno en lugar de bloquearlo para no perder a un buen empleado), la gestión del cambio de manager o de equipo con una transición cuidada que mantiene la continuidad del desarrollo del empleado, y la comunicación y el soporte durante las reestructuraciones que respeta la dignidad de todos los afectados incluyendo los que se quedan (la supervivors' guilt es uno de los efectos más subestimados de las reorganizaciones).

**6. El offboarding: la salida que preserva la relación**
El offboarding es la etapa del ciclo de vida del empleado más descuidada y la que tiene mayor impacto en la reputación de la empresa como empleador. Define el offboarding de alto impacto: la entrevista de salida diseñada para conseguir honestidad real (no el formulario online que nadie rellena con sinceridad, sino la conversación con alguien distinto del manager directo y del RRHH de la empresa), la transición del conocimiento que protege al equipo y al proyecto sin convertir las últimas semanas del empleado en una sesión de documentación forzada, la gestión de la comunidad de alumni que mantiene la relación con los ex-empleados (que son candidatos futuros, potenciales clientes o referencias para nuevos candidatos), y el diagnóstico sistemático de los patrones en las salidas que informa las mejoras en la retención antes de que sea demasiado tarde.

Termina con el plan de mejora de Employee Experience para la organización descrita, con los dos o tres momentos del ciclo de vida donde el rediseño tendría mayor impacto en las métricas de retención y compromiso identificadas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el ciclo de vida completo del empleado para mejorar la retención, el compromiso y la experiencia en cada etapa.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Cultura financiera: cuando toda la empresa entiende los números',
                'description'       => 'Construye una cultura de alfabetización financiera en la organización: los programas, los rituales y las herramientas que hacen que todos los empleados, no solo el equipo de finanzas, entiendan el impacto de sus decisiones en el negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO o director financiero con experiencia en empresas donde la cultura financiera no es solo responsabilidad del equipo de finanzas sino una competencia organizativa que hace que los managers de todos los departamentos tomen mejores decisiones porque entienden las implicaciones financieras de sus acciones. Has diseñado programas de formación financiera para no financieros, sistemas de información que democratizan los datos financieros y rituales de negocio que mantienen a toda la organización orientada a los resultados.

Necesito construir o mejorar la cultura financiera de mi organización. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño y el tipo de organización, y cuál es el nivel de comprensión financiera actual de los managers no financieros?
2. ¿Cuáles son los síntomas que indican que la cultura financiera actual es insuficiente: decisiones de inversión sin análisis de ROI, sorpresas en el cierre mensual, desconexión entre los objetivos de los equipos y los resultados financieros u otro?
3. ¿Qué información financiera comparte actualmente la empresa con los managers y los empleados?
4. ¿Hay resistencia en el equipo directivo a compartir más información financiera con la organización, y cuáles son las razones?
5. ¿Cuál es el principal objetivo de negocio que la mejora de la cultura financiera debería apoyar: la rentabilidad, el control del gasto, la aceleración del crecimiento u otro?

Con esas respuestas, desarrolla la estrategia de cultura financiera:

**1. El open book management: la filosofía que democratiza los números**
Una organización con cultura financiera fuerte comparte la información financiera porque confía en que los empleados que la entienden tomarán mejores decisiones. Define el modelo de transparencia financiera adecuado para la organización: el espectro del open book management desde la transparencia total de todas las cifras hasta el acceso a los indicadores relevantes para cada rol (y cómo decidir dónde posicionarse en ese espectro según la cultura de confianza de la organización, el sector y las consideraciones legales de confidencialidad), los indicadores financieros que todos los managers deberían entender independientemente de su función (el margen de contribución, el EBITDA, el flujo de caja operativo, el runway si es una startup), y la diferencia entre compartir datos y crear comprensión (los datos sin contexto no construyen cultura financiera).

**2. La formación financiera para no financieros: hacer accesible lo complejo**
La mayoría de los programas de formación financiera para no financieros fallan porque tratan a los participantes como estudiantes de finanzas en lugar de como profesionales que necesitan entender los conceptos financieros en el contexto de su propio trabajo. Define el enfoque de formación financiera efectiva: el currículo mínimo que todo manager de cualquier función debería dominar (cómo leer un P&L, la diferencia entre coste fijo y variable, qué es el punto de equilibrio, cómo calcular el ROI de una inversión en su área, cómo su departamento afecta al margen de la empresa), la metodología de aprendizaje que usa ejemplos del negocio real de la empresa en lugar de casos ficticios, la formación en el contexto del trabajo (el análisis financiero de una decisión real que el manager está tomando ahora) en lugar de en el aula, y la construcción de confianza para que los managers no financieros hagan preguntas financieras sin sentir que deberían ya saber la respuesta.

**3. Los rituales financieros que crean cultura: el ritmo de los números**
La cultura financiera se construye con rituales regulares que hacen que los números sean parte de la conversación cotidiana del negocio. Define los rituales financieros de una organización con alta cultura financiera: el business review mensual que no es solo un reporte de finanzas sino una conversación donde los managers de todos los departamentos analizan juntos cómo los resultados de sus áreas han afectado al resultado global (y la diferencia entre un business review que genera aprendizaje y uno que genera defensividad), el forecast trimestral co-construido por los departamentos en lugar de impuesto desde finanzas (cuando los managers participan en construir el presupuesto lo sienten suyo y lo persiguen de forma diferente), y el cierre mensual comunicado de forma que todos los managers entiendan no solo los números sino las decisiones que los produjeron.

**4. Los dashboards financieros que guían las decisiones del día a día**
La información financiera que llega tarde o en formatos que solo entiende el equipo de finanzas no construye cultura financiera. Define el diseño de los dashboards financieros para no financieros: los indicadores financieros relevantes para cada departamento presentados en el contexto del objetivo del departamento (el coste de adquisición de clientes para marketing, el coste por ticket para customer success, el coste de producción por unidad para operaciones), la frecuencia de actualización que permite la toma de decisiones oportuna sin crear ruido (los indicadores que requieren visibilidad diaria y los que son suficientes semanales o mensuales), y la interfaz del dashboard que es intuitiva para usuarios no financieros (sin jerga contable, con los semáforos que indican el estado de forma visual, con el contexto del periodo anterior y del objetivo para dar perspectiva).

**5. La cultura de ROI: pensar en retorno antes de pedir presupuesto**
Una de las manifestaciones más valiosas de la cultura financiera es cuando los managers piensan espontáneamente en el retorno esperado antes de pedir recursos. Define cómo construir la cultura de ROI: el template estándar de análisis de ROI que todos los managers usan para proponer inversiones de cualquier tamaño (que sea lo suficientemente simple para que se use de verdad y lo suficientemente riguroso para que sirva para tomar decisiones), el proceso de aprobación de inversiones que da autonomía a los managers dentro de sus límites sin crear burocracia para las decisiones pequeñas, el seguimiento post-inversión que compara el ROI realizado con el prometido (lo que aprende el manager cuando su análisis fue optimista es más valioso que cualquier formación), y cómo crear el entorno donde los managers proponen inversiones con retorno claro en lugar de pedir presupuesto por si acaso.

**6. La cultura financiera en situaciones de presión: cuando los números no son los esperados**
La cultura financiera se prueba de verdad cuando los resultados no son buenos. Define el comportamiento organizativo deseable en situaciones de presión financiera: la comunicación transparente de los desvíos presupuestarios que permite actuar a tiempo en lugar de descubrirlos tarde, el proceso de replanning ágil cuando las condiciones cambian que ajusta los objetivos sin crear caos, la toma de decisiones de reducción de costes con criterio financiero en lugar de con criterio político (cortar primero lo que menos impacta al negocio, no lo que tiene menos defensores), y cómo mantener la motivación del equipo en periodos de restricción financiera siendo transparente sobre la situación sin crear pánico.

Termina con el plan de construcción de cultura financiera para la organización descrita, con los tres rituales e iniciativas de mayor impacto que se podrían implementar en los próximos seis meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir alfabetización financiera en toda la organización para mejorar la calidad de las decisiones y el alineamiento con los objetivos de negocio.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cultura de cumplimiento: compliance que no paraliza el negocio',
                'description'       => 'Diseña una cultura de cumplimiento normativo que protege a la organización sin crear burocracia que frena el negocio: los programas, los procesos y el tono desde arriba que hacen que el compliance sea un habilitador y no un obstáculo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Compliance Officer o director jurídico con experiencia construyendo programas de cumplimiento normativo en organizaciones donde el compliance no es una función de control que dice no sino un socio estratégico que ayuda al negocio a crecer dentro de los límites establecidos. Has diseñado programas que reducen el riesgo regulatorio real sin crear capas de burocracia que ralentizan las decisiones y frustran a los equipos operativos.

Necesito construir o mejorar la cultura de cumplimiento en mi organización. Para asesorarte bien, primero pregúntame:

1. ¿En qué sector opera la organización y cuáles son los principales marcos regulatorios que debe cumplir (GDPR, PCI-DSS, SOX, FDA, sector financiero u otros)?
2. ¿Cuál es el síntoma principal que indica que la cultura de cumplimiento actual tiene problemas: incidentes de cumplimiento recurrentes, paralización del negocio por procesos de aprobación lentos, empleados que evitan al equipo de compliance, desconocimiento de las normas u otro?
3. ¿Cuál es la actitud del liderazgo senior hacia el compliance: lo ven como un coste necesario, como un riesgo que gestionar activamente o como un elemento diferenciador?
4. ¿Hay ya un programa de formación en compliance y qué formato tiene actualmente?
5. ¿Cuáles son las áreas de la organización con mayor riesgo de cumplimiento y mayor resistencia a los controles?

Con esas respuestas, desarrolla la estrategia de cultura de cumplimiento:

**1. El tono desde arriba: cuando el liderazgo hace que el compliance sea creíble**
Un programa de compliance sin compromiso visible del liderazgo senior es papel mojado. Define el rol del liderazgo en la cultura de cumplimiento: las acciones concretas que el CEO y el equipo directivo deben tomar para demostrar que el compliance no es solo para los niveles medios de la organización (las decisiones de negocio que rechazan una oportunidad por razones de compliance, la comunicación interna que celebra los comportamientos éticos, la respuesta del liderazgo cuando se detecta una infracción de compliance por parte de alguien con posición de poder), la diferencia entre declarar los valores éticos y demostrarlos con comportamientos visibles, y cómo el Chief Compliance Officer gestiona la relación con el CEO y el consejo de administración para que el compliance tenga el respaldo que necesita para ser efectivo.

**2. El programa de formación en compliance que cambia comportamientos**
Los módulos de formación en compliance que la gente hace en veinte minutos para marcar la casilla y olvidar no sirven para construir cultura. Define el programa de formación en compliance efectivo: el diseño por roles y riesgos específicos en lugar de una formación genérica para toda la organización (el empleado de ventas necesita entender los riesgos de soborno en contextos comerciales; el empleado de IT necesita entender la seguridad de datos; ambas formaciones son compliance pero son completamente diferentes), el uso de escenarios reales del negocio de la empresa en lugar de casos abstractos (el dilema ético que el empleado podría enfrentar la próxima semana es más efectivo que el ejemplo de otra industria), la frecuencia y los formatos que garantizan la retención (microlearning regular en lugar de formación anual masiva), y los mecanismos de evaluación que miden el cambio de comportamiento y no solo la tasa de finalización de los módulos.

**3. Los canales de reporte y la cultura de denuncia: hacer que sea seguro hablar**
Una cultura de compliance fuerte necesita que los empleados reporten los problemas que observan. Define el sistema de reporte de cumplimiento que funciona: el canal de denuncia (whistleblowing) diseñado para garantizar la confidencialidad y la no represalia de forma creíble (no basta con declarar la política; el empleado debe creer que la empresa la cumple), la respuesta a las denuncias que es oportuna, transparente con el denunciante sobre el resultado del proceso y proporcional a la gravedad, la comunicación de los casos resueltos que demuestra que el canal funciona sin revelar datos confidenciales, y el análisis de las tendencias en los reportes que identifica los patrones de riesgo sistémicos antes de que se conviertan en incidentes graves.

**4. El compliance como habilitador del negocio: decir sí de forma segura**
El compliance que solo sabe decir no destruye su credibilidad dentro de la organización. Define el modelo de compliance como socio del negocio: la actitud de encontrar el camino seguro para hacer lo que el negocio necesita hacer en lugar de simplemente bloquear (el análisis de riesgo que identifica cómo mitigar los riesgos de una iniciativa en lugar de vetarla por el riesgo inherente), el asesoramiento proactivo al negocio cuando hay regulaciones nuevas o cambios de contexto que abren oportunidades o cierran riesgos antes conocidos, el service level agreement del equipo de compliance con los equipos operativos que garantiza respuestas en plazos razonables (la solicitud de revisión que tarda semanas frustra al negocio y genera el incentivo de evitar al compliance), y la comunicación de las decisiones de compliance que explica el razonamiento en lugar de simplemente prohibir.

**5. Los controles y los procedimientos: diseñar para que se cumplan**
Los controles de compliance que son difíciles de seguir se convierten en controles que nadie sigue. Define el diseño de controles y procedimientos efectivos: el principio de que el control debe ser la forma más fácil de hacer las cosas, no una capa adicional encima del proceso natural (cuando el control es más difícil que no cumplirlo, el empleado elegirá el camino de menor resistencia), la automatización de los controles que pueden automatizarse para eliminar el error humano y la carga cognitiva del empleado (la aprobación automática de transacciones por debajo del umbral, el bloqueo técnico de acciones no autorizadas), la revisión periódica de los controles existentes para eliminar los que ya no son necesarios o que nunca fueron efectivos (el manual de compliance que nadie lee porque tiene doscientas páginas), y el diseño de los procedimientos con los empleados que los van a seguir para garantizar que son prácticos.

**6. La gestión de incidentes de compliance: responder bien cuando algo falla**
La forma en que una organización responde a una infracción de compliance es tan importante para la cultura como la prevención. Define el protocolo de respuesta a incidentes de compliance: la investigación interna que es objetiva, rápida y documentada correctamente (con el asesoramiento legal sobre cuándo el proceso debe ser privilegiado), la comunicación interna del incidente que es honesta sobre lo que ocurrió sin crear pánico ni difundir rumores, las acciones correctivas que atacan la causa raíz y no solo el síntoma (la infracción individual que es consecuencia de un proceso deficiente requiere arreglar el proceso), y la comunicación con los reguladores cuando la notificación es obligatoria, que es proactiva, completa y demuestra que la empresa ha tomado el control de la situación.

Termina con el plan de mejora de la cultura de cumplimiento para la organización descrita, con las tres iniciativas de mayor impacto en la reducción del riesgo real de compliance sin añadir burocracia innecesaria.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir una cultura de cumplimiento normativo que protege a la organización y es un habilitador del negocio en lugar de un obstáculo.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS culture: el equipo que genuinamente quiere ayudar al cliente',
                'description'       => 'Construye la cultura de un equipo de Customer Success donde los agentes no solo cumplen métricas sino que genuinamente se preocupan por el éxito del cliente: los valores, el liderazgo y los sistemas que hacen que la actitud de servicio sea auténtica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia construyendo equipos donde la cultura de servicio al cliente no es una declaración de valores en la pared sino el comportamiento cotidiano de cada persona del equipo: el agente que se queda cinco minutos más para resolver el problema del cliente aunque su turno haya terminado, el CSM que avisa proactivamente de un problema que el cliente todavía no ha detectado, el líder que trata a su equipo con el mismo respeto con el que espera que el equipo trate al cliente.

Necesito construir o mejorar la cultura de mi equipo de Customer Success. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el modelo de CS: Customer Success de alto contacto con CSMs dedicados, soporte técnico reactivo, equipo mixto u otro modelo?
2. ¿Cuáles son los síntomas que indican que la cultura actual no es la deseada: agentes que hacen lo mínimo, alta rotación del equipo, NPS interno bajo, conflictos entre el equipo y los clientes u otro?
3. ¿Cuál es el perfil del cliente: empresa grande con relaciones complejas, pyme, consumidor individual u otro?
4. ¿Cómo se mide actualmente el rendimiento del equipo de CS y qué comportamientos incentivan esas métricas de forma no intencionada?
5. ¿Cuál es la relación entre el equipo de CS y el resto de la organización: colaborativa, aislada, percibida como inferior a ventas o producto u otra?

Con esas respuestas, desarrolla la estrategia de cultura de Customer Success:

**1. Los valores de CS que se viven en la conversación más difícil**
Los valores de un equipo de CS se demuestran no en la interacción fácil sino en la conversación donde el cliente está furioso, el sistema no funciona y el agente ha tenido un día difícil. Define el proceso de construcción de valores de CS auténticos: la identificación de los comportamientos que distinguen a los mejores miembros del equipo en las situaciones más difíciles (la empatía que no es performativa, la proactividad que no espera que el cliente pregunte, la honestidad que admite cuando hay un error en lugar de culpar al cliente), la conversión de esos comportamientos en valores compartidos que el equipo construye colectivamente, y los mecanismos que refuerzan los valores en el día a día: las historias de clientes que el equipo comparte donde los valores se demostraron en circunstancias difíciles.

**2. El hiring para la cultura de CS: contratar la actitud que no se puede entrenar**
Las habilidades técnicas de Customer Success se pueden enseñar; la actitud genuina de querer ayudar al cliente, no. Define el proceso de selección que identifica la predisposición al servicio antes que las habilidades técnicas: las preguntas de entrevista que revelan la actitud real del candidato hacia los clientes difíciles (no "¿cómo manejas a un cliente enfadado?" sino escenarios específicos donde el candidato debe demostrar cómo pensaría), las señales en la experiencia del candidato que indican orientación al cliente (los empleos anteriores donde el contacto con el cliente era la parte más valorada del trabajo), los test cases de situaciones reales del equipo que revelan cómo el candidato priorizaría cuando hay conflicto entre lo que el cliente quiere y lo que la empresa puede dar, y las referencias que validan la actitud de servicio en entornos anteriores.

**3. El onboarding del equipo de CS: transmitir la cultura desde el primer día**
El primer mes de un nuevo miembro del equipo de CS determina si va a internalizar la cultura o si va a adoptar los atajos que siempre existen en cualquier equipo. Define el onboarding cultural del equipo de CS: la inmersión en las conversaciones con clientes reales desde el primer día (escuchar llamadas grabadas, acompañar a CSMs senior, ver cómo se manejan las situaciones difíciles en vivo), la transmisión explícita de los valores y los comportamientos que los encarnan con ejemplos reales y no abstractos, la asignación de un mentor senior que modela la cultura de CS en las situaciones cotidianas, y las primeras oportunidades de interacción con clientes diseñadas para que el nuevo miembro tenga éxito y construya confianza en lugar de que las primeras experiencias sean traumáticas.

**4. El liderazgo que crea la cultura de servicio: tratar al equipo como quieres que traten al cliente**
La forma en que el líder de CS trata a su equipo es el mejor predictor de cómo el equipo tratará al cliente. Define el modelo de liderazgo que construye cultura de CS: el líder que resuelve los problemas del equipo con la misma urgencia con la que el equipo resuelve los del cliente (si el agente no puede resolver el problema del cliente porque el sistema interno no funciona y el líder no lo prioriza, el mensaje es que el cliente no importa de verdad), el líder que protege al equipo del burnout gestionando la carga de trabajo de forma sostenible (un equipo agotado no puede tener empatía genuina con el cliente), y el líder que celebra los comportamientos de cultura aunque no tengan impacto inmediato en las métricas (el agente que invirtió una hora en resolver un problema complejo merece el mismo reconocimiento que el que cerró diez tickets rápidos).

**5. Las métricas que refuerzan la cultura de CS correcta**
Las métricas de CS determinan el comportamiento del equipo más que cualquier declaración de valores. Define el sistema de métricas que refuerza la cultura de servicio genuino: la identificación de las métricas que incentivan los comportamientos incorrectos (el tiempo de resolución que lleva a cerrar tickets sin resolver el problema de fondo, el número de tickets cerrados que incentiva la velocidad sobre la calidad, la escalación que se evita para mantener el ratio personal aunque la situación la requiera), las métricas que reflejan la calidad del servicio desde la perspectiva del cliente (el CSAT con preguntas específicas sobre si el problema se resolvió completamente, el Customer Effort Score que mide cuánto esfuerzo tuvo que hacer el cliente para resolver su problema), y el equilibrio entre las métricas de eficiencia que el negocio necesita y las métricas de calidad que la cultura de CS requiere.

**6. La gestión del burnout: cuando cuidar a los clientes agota**
El burnout es el mayor enemigo de la cultura de CS porque es imposible mantener empatía genuina cuando el agente está agotado. Define la estrategia de prevención del burnout en CS: el diseño de la carga de trabajo que reconoce que el CS emocional es más agotador que el trabajo técnico (el agente que gestiona situaciones de alta carga emocional necesita rotación o recuperación, no solo más formación), los rituales de equipo que procesan colectivamente las interacciones difíciles sin que el agente los lleve a casa (el debrief de las conversaciones complicadas donde el equipo comparte cómo se sintió y cómo lo gestionó), los límites saludables que el liderazgo modela y refuerza (la disponibilidad fuera del horario de trabajo, la desconexión real en el tiempo libre), y la cultura de pedir ayuda cuando una situación supera la capacidad emocional individual.

Termina con el plan de acción de los primeros noventa días para construir o transformar la cultura del equipo de CS descrito, con las tres iniciativas de mayor impacto en el compromiso del equipo y en la satisfacción del cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir una cultura de equipo de Customer Success donde la orientación genuina al cliente es el comportamiento natural de todos.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Cultura personal: los valores y rituales del freelance exitoso',
                'description'       => 'Define la cultura personal de tu carrera freelance: los valores que guían tus decisiones de negocio, los rituales de trabajo que sostienen tu productividad y bienestar, y las creencias sobre el trabajo que determinan el tipo de carrera que construyes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de carrera especializado en freelancers y trabajadores independientes con experiencia ayudando a profesionales a construir carreras freelance sostenibles: no solo rentables en el corto plazo sino satisfactorias y sostenibles en el largo plazo. Has visto de primera mano cómo los freelancers que tienen claridad sobre sus valores, sus rituales de trabajo y sus límites construyen carreras que duran y se disfrutan, mientras que los que van reaccionando a las circunstancias acaban agotados o trabajan para clientes que no les gustan con proyectos que no les motivan.

Necesito definir o revisar la cultura personal de mi carrera freelance. Para asesorarte bien, primero pregúntame:

1. ¿En qué fase de tu carrera freelance estás: empezando, consolidado con varios años de experiencia, o en un momento de reorientación?
2. ¿Cuáles son los mayores desafíos que enfrenta tu carrera freelance actualmente: conseguir clientes, gestionar el tiempo, mantener la motivación, gestionar las finanzas, definir la dirección u otro?
3. ¿Cuáles son los tipos de proyectos o clientes que más disfrutas y los que más te drenan?
4. ¿Tienes rituales de trabajo establecidos o tu jornada varía mucho día a día?
5. ¿Hay aspectos de tu forma de trabajar que sabes que necesitas cambiar pero has resistido cambiar hasta ahora?

Con esas respuestas, desarrolla la guía de cultura personal del freelance:

**1. Los valores del freelance: las líneas que no cruzas y las que defines**
Los valores son el sistema operativo de la carrera freelance: determinan qué proyectos aceptas, con qué clientes trabajas, cuánto cobras y cómo tratas tu trabajo. Define el proceso de clarificación de valores: la identificación de los valores que ya tienes aunque no los hayas articulado explícitamente (los proyectos que has rechazado aunque pagaran bien, los límites que nunca has cruzado aunque te hayan presionado, las condiciones de trabajo que nunca aceptarías), la conversión de esos valores en principios de negocio concretos que guían las decisiones cotidianas (el valor de "integridad con el cliente" se convierte en el principio "nunca prometo resultados que no puedo garantizar"), y el uso de los valores como filtro para las oportunidades: una oportunidad que viola un valor fundamental no es una oportunidad, es un coste.

**2. Los rituales de trabajo: el diseño intencional de la jornada freelance**
Sin la estructura que impone la oficina, el freelance que no diseña sus rituales de trabajo acaba trabajando cuando puede en lugar de cuando quiere, contestando emails a las once de la noche y sintiendo que nunca termina el trabajo. Define el diseño de los rituales de la jornada freelance: el ritual de inicio que señala que el trabajo ha comenzado y activa el modo de concentración (el equivalente al trayecto al trabajo que el freelance no tiene de forma natural), los bloques de tiempo protegidos para el trabajo de mayor valor que requiere concentración profunda (sin interrupciones, sin correo, sin redes), el ritual de cierre que señala que el trabajo ha terminado y permite la desconexión real (la revisión de lo conseguido, la preparación del día siguiente, el cierre del ordenador), y los rituales semanales que mantienen la perspectiva sobre la carrera más allá de los proyectos del día a día.

**3. Las creencias sobre el trabajo que determina el tipo de freelance que eres**
Las creencias sobre el trabajo son el elemento más poderoso y más invisible de la cultura personal del freelance. Define el proceso de examen de las creencias limitantes más comunes: la creencia de que cobrar más equivale a perder clientes (que lleva al freelance a cobrar menos de lo que vale, a aceptar proyectos que no quiere para llenar la agenda y a no invertir en su desarrollo porque necesita generar ingresos inmediatos), la creencia de que decir no a un proyecto es un riesgo que no puede permitirse (que lleva a aceptar proyectos malos que consumen el tiempo que podría dedicarse a los buenos), la creencia de que el trabajo duro es la única variable que determina el éxito (que ignora el rol del posicionamiento, la comunicación y las relaciones en la construcción de una carrera freelance), y las creencias sobre el merecimiento que limitan la ambición del freelance.

**4. Los límites del freelance: definir qué tipo de clientes y proyectos aceptas**
Los límites del freelance son la manifestación práctica de sus valores. Define el sistema de límites que protege la carrera y el bienestar: los límites de proyecto (los tipos de trabajo que no aceptas por razones de especialización, ética o encaje cultural), los límites de cliente (las señales de alerta que indican que un cliente va a ser problemático antes de firmar el contrato, los comportamientos de cliente que justifican finalizar la relación), los límites de tiempo y disponibilidad (los horarios donde estás accesible, los plazos realistas que no comprometes por presión, la política sobre el trabajo urgente fuera de horario), y los límites financieros (el precio mínimo por debajo del que no trabajas independientemente de la situación del pipeline).

**5. La comunidad del freelance: la red que sustituye a la oficina**
El freelance que trabaja solo pierde los beneficios de la comunidad que la oficina proporciona de forma natural. Define la construcción de la comunidad profesional del freelance: las comunidades online y presenciales donde el freelance de tu especialidad se conecta, aprende y colabora, el peer group de freelancers del mismo nivel que proporciona el contexto para calibrar precios, detectar tendencias del mercado y compartir los retos de la carrera, el sistema de relaciones con otros freelancers de disciplinas complementarias que permite la colaboración en proyectos más grandes y las referencias mutuas, y los mentores o referentes de carrera que el freelance observa y de quienes aprende aunque no tenga acceso directo a ellos.

**6. La sostenibilidad de la carrera freelance: construir para el largo plazo**
La trampa más común del freelance exitoso a corto plazo es no construir los activos que hacen la carrera sostenible a largo plazo. Define la estrategia de sostenibilidad de la carrera freelance: la diversificación de los ingresos que reduce la dependencia de un cliente o de un tipo de proyecto (los ingresos pasivos, los productos, la formación o el contenido que complementan los ingresos de servicio), la inversión en el posicionamiento y la reputación que hace que los mejores proyectos lleguen sin esfuerzo de prospección, la gestión financiera que crea el colchón que permite rechazar proyectos malos y tomarse el tiempo que necesita para encontrar los buenos, y el diseño de la carrera en el largo plazo que define qué tipo de freelance quieres ser en cinco años y qué decisiones de hoy te llevan hacia eso.

Termina con el plan personal de los próximos noventa días para reforzar la cultura personal de la carrera freelance descrita, con los tres cambios de mayor impacto en la sostenibilidad y la satisfacción de la carrera.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Definir los valores, rituales y creencias que construyen una carrera freelance sostenible, satisfactoria y alineada con lo que el profesional quiere.',
                'vote_score'        => 39,
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
