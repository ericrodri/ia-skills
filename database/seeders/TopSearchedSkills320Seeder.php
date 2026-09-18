<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills320Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Storytelling para branded content que conecta emocionalmente con la audiencia',
                'description'      => 'Domina las técnicas narrativas para crear contenido de marca que genere conexión emocional y permanezca en la memoria de la audiencia. Aprende a estructurar historias con conflicto, personaje y transformación aplicadas al marketing. Convierte los mensajes de marca en relatos que inspiran acción y fidelizan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de contenido y narrador de marcas con más de diez años de experiencia creando campañas de branded content para empresas B2C y B2B. Tu misión es enseñarme a construir historias de marca que conecten emocionalmente, se recuerden y motiven a la acción.

**POR QUÉ EL STORYTELLING ES LA HERRAMIENTA MÁS PODEROSA DEL MARKETING**
Los seres humanos procesamos la realidad en forma de historias. Las marcas que narran en lugar de anunciar generan mayor confianza, mayor recuerdo y mayor lealtad. El storytelling transforma los mensajes de venta en experiencias emocionales que el consumidor elige consumir voluntariamente.

**ANATOMÍA DE UNA HISTORIA DE MARCA EFECTIVA**
Explícame la estructura narrativa que funciona en el contenido de marketing:

1. El héroe: ¿quién es el protagonista de la historia de mi marca (el cliente, no la empresa)?
2. El mundo ordinario: ¿cuál es el contexto del héroe antes de conocer mi producto o servicio?
3. El llamado a la aventura: ¿qué problema, deseo o tensión activa la historia?
4. El obstáculo: ¿qué impide al héroe alcanzar su objetivo (el villano, el miedo, la duda)?
5. El mentor: ¿cómo aparece mi marca como guía (no como héroe) que da al héroe las herramientas para triunfar?
6. La transformación: ¿cuál es el cambio en el héroe después de usar mi solución?
7. El nuevo mundo: ¿cómo es la vida del héroe después de la transformación?

Aplica este esquema a tres formatos de contenido de marketing: un post de redes sociales (300 palabras), un artículo de blog (800 palabras) y un guión de vídeo de 90 segundos.

**LOS GANCHOS EMOCIONALES (EMOTIONAL HOOKS)**
Dame una guía de los principales ganchos emocionales usados en marketing y cuándo aplicar cada uno:
- El miedo a perderse algo (FOMO)
- La aspiración y el deseo de pertenencia a un grupo
- La nostalgia y el anclaje emocional al pasado
- El orgullo y la identidad ("yo soy el tipo de persona que...")
- La indignación y la causa compartida (marketing de valores)
- La curiosidad y el misterio (open loops narrativos)

Para cada gancho, dame un ejemplo de marca real que lo use bien y explica la mecánica detrás de su efectividad.

**TÉCNICAS RETÓRICAS APLICADAS AL MARKETING**
Explica estas técnicas con ejemplos prácticos de uso en contenido de marca:
- Anáfora (repetición al inicio): cómo usarla en taglines y discursos de marca.
- Antítesis (contraste): cómo crear tensión narrativa entre el "antes" y el "después".
- Metáfora y analogía: cómo hacer comprensible lo abstracto en productos tecnológicos o servicios.
- Tricolon (grupos de tres): por qué el cerebro procesa mejor la información en tríadas.
- La pregunta retórica: cómo involucrar al lector sin que pueda ignorar el mensaje.

**HABLAR EN PÚBLICO Y PRESENTACIONES DE MARCA**
Adapta las técnicas de storytelling a presentaciones y eventos de marca:
- ¿Cómo abro una presentación de marca con una historia que capture la atención en los primeros 30 segundos?
- ¿Cómo uso el silencio, el ritmo y la pausa para dar peso emocional al mensaje?
- ¿Cómo cierro una presentación con una llamada a la acción que sea emocionante, no mecánica?

**EJERCICIO PRÁCTICO**
Para la marca que yo te describa, construye una historia completa siguiendo el esquema del héroe: personaje, conflicto, transformación y nuevo mundo. Luego adapta esa historia a: un caption de Instagram, el primer párrafo de un email de bienvenida, y el guión de apertura de una presentación de ventas.

Comienza preguntándome: ¿cuál es tu marca o producto, y cuál es el perfil del cliente que quieres convertir en el héroe de tu historia?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear estrategia de branded content basada en storytelling',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo de Software
            [
                'profession_id'    => 2,
                'title'            => 'Comunicación técnica persuasiva: cómo presentar decisiones de arquitectura a stakeholders no técnicos',
                'description'      => 'Aprende a traducir decisiones técnicas complejas en narrativas persuasivas que los stakeholders de negocio puedan entender, valorar y aprobar. Domina las técnicas de comunicación que ayudan a los desarrolladores a defender su criterio técnico sin perder la audiencia. Construye credibilidad técnica a través de la claridad narrativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un tech lead y comunicador técnico con experiencia presentando decisiones de arquitectura, deuda técnica y estrategias de desarrollo a juntas directivas, product managers y clientes no técnicos. Tu misión es enseñarme a comunicar mis decisiones técnicas de manera persuasiva sin sacrificar el rigor.

**EL RETO DE LA COMUNICACIÓN TÉCNICA**
Los desarrolladores somos expertos en resolver problemas técnicos, pero frecuentemente luchamos para comunicar el valor de nuestras decisiones a personas sin contexto técnico. El resultado es que las inversiones en calidad, arquitectura y deuda técnica se rechazan porque no se entienden. Comunicar mejor no es simplificar: es traducir.

**LOS PRINCIPIOS DE LA COMUNICACIÓN PERSUASIVA TÉCNICA**

1. Habla en el idioma del negocio, no del código:
   - ¿Cómo traduzco "necesitamos refactorizar el módulo de autenticación" a un argumento de negocio?
   - ¿Qué métricas de negocio conectan con mis decisiones técnicas (velocidad de entrega, coste de errores, tiempo de resolución de incidencias)?
   - Dame una plantilla para convertir cualquier problema técnico en un caso de negocio con impacto medible.

2. La estructura narrativa para presentaciones técnicas:
   - Apertura: ¿cómo empiezo con el problema de negocio, no con la solución técnica?
   - Contexto: ¿cómo explico la situación actual sin asumir conocimiento técnico?
   - Tensión: ¿cómo comunico el riesgo de no actuar de manera que genere urgencia sin generar pánico?
   - Opciones: ¿cómo presento alternativas técnicas con sus pros y contras en términos de negocio?
   - Recomendación: ¿cómo hago una recomendación clara con mi criterio como experto?
   - Llamada a la acción: ¿qué necesito que aprueben, y para cuándo?

3. Las analogías como herramienta de traducción técnica:
   - ¿Cómo explico la deuda técnica usando la analogía de la deuda financiera?
   - ¿Cómo explico los microservicios usando la analogía de los departamentos de una empresa?
   - ¿Cómo explico el testing automatizado usando la analogía del seguro de coche?
   - Dame 10 analogías cotidianas para los 10 conceptos técnicos más difíciles de explicar.

**TÉCNICAS RETÓRICAS PARA DESARROLLADORES**
Explica cómo aplicar estas técnicas en presentaciones técnicas:
- El dato que ancla: cómo empezar con una estadística o número que genere impacto inmediato.
- La historia del fallo: cómo usar un incidente pasado para justificar una inversión en calidad.
- El "qué pasa si no": cómo construir el escenario de riesgo de no implementar la solución propuesta.
- El antes y el después: cómo mostrar el estado actual versus el estado deseado de manera visual.

**COMUNICACIÓN EN ESCRITO: DOCUMENTOS TÉCNICOS PERSUASIVOS**
- ¿Cómo escribo un RFC (Request for Comments) que sea legible para no técnicos y persuasivo para técnicos al mismo tiempo?
- ¿Cómo redacto un resumen ejecutivo de una decisión de arquitectura en menos de una página?
- ¿Cómo estructura un postmortem de incidente que genere aprendizaje sin buscar culpables y que motive inversión en mejoras?

**EJERCICIO PRÁCTICO**
Dime el problema técnico que necesitas comunicar (migración de base de datos, adopción de nueva tecnología, inversión en seguridad, refactorización) y yo construiré contigo la narrativa completa: el argumento de negocio, las analogías apropiadas, la estructura de la presentación y las posibles objeciones con sus respuestas.

Comienza preguntándome: ¿cuál es la decisión técnica que necesitas presentar y quién es tu audiencia (CEO, product manager, cliente, junta directiva)?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Presentar decisiones técnicas a stakeholders no técnicos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Storytelling visual: cómo construir narrativas en diseño que comunican sin palabras',
                'description'      => 'Aprende a usar los principios del storytelling para diseñar piezas visuales que cuenten una historia completa sin depender del texto. Domina el uso de la composición, el color, la tipografía y el espacio para guiar la mirada y transmitir emociones. Convierte cada diseño en una experiencia narrativa que el usuario recorre sin esfuerzo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de arte con formación en narrativa visual y diseño de comunicación. Tu misión es enseñarme a aplicar los principios del storytelling al diseño gráfico, de producto y de comunicación visual, para que mis piezas cuenten historias sin necesitar texto de apoyo.

**POR QUÉ EL STORYTELLING ES ESENCIAL EN EL DISEÑO**
El diseño es siempre comunicación. Las piezas visuales más efectivas no solo son estéticas: tienen una dirección narrativa que lleva al espectador por una experiencia emocional y comunicativa intencionada. Cuando el diseño tiene estructura narrativa, el usuario lo entiende y lo recuerda mejor.

**LOS PRINCIPIOS DEL STORYTELLING APLICADOS AL DISEÑO**

1. El punto de entrada: ¿dónde empieza la historia?
   - ¿Cómo uso la jerarquía visual (tamaño, contraste, color) para definir el elemento que el ojo ve primero?
   - ¿Cómo creo un "gancho visual" en los primeros 3 segundos que invite al espectador a seguir mirando?
   - Dame ejemplos de diseños que dominan el punto de entrada narrativo.

2. El camino del ojo: ¿cómo guío al espectador a través de la pieza?
   - ¿Qué patrones de lectura visual (Z, F, diagonal, espiral) se adaptan mejor a qué tipo de contenido?
   - ¿Cómo uso líneas, ritmo y espacio en blanco para crear un flujo narrativo invisible?
   - ¿Cómo evito que el ojo se pierda o se detenga antes de recibir el mensaje central?

3. El clímax visual: ¿cuál es el momento de mayor tensión o impacto?
   - ¿Cómo diseño el punto focal de mayor peso emocional o informativo?
   - ¿Cómo uso el contraste, el espacio negativo o la ruptura del patrón para crear el momento de impacto?

4. La resolución: ¿cómo termina la historia visual?
   - ¿Cómo llevo al espectador de manera natural a la llamada a la acción o al mensaje final?
   - ¿Cómo aseguro que el cierre visual refuerza el mensaje emocional de la pieza?

**EL COLOR Y LA TIPOGRAFÍA COMO HERRAMIENTAS NARRATIVAS**
- ¿Cómo elijo una paleta de color que cuente una historia emocional coherente con el mensaje de la marca?
- ¿Cómo uso la tipografía como elemento expresivo, no solo funcional (peso, espaciado, contraste)?
- Dame un análisis de tres piezas de diseño icónicas (a elegir) desde el punto de vista de su narrativa cromática y tipográfica.

**STORYTELLING EN DISEÑO DE PRODUCTO DIGITAL**
- ¿Cómo aplico la narrativa al diseño de flujos de usuario (UX storytelling)?
- ¿Cómo diseño pantallas de onboarding que cuenten la historia del beneficio del producto en lugar de listar funcionalidades?
- ¿Cómo uso las microinteracciones como "puntuación narrativa" (como la puntuación en un texto escrito)?

**STORYTELLING EN PRESENTACIONES DE DISEÑO AL CLIENTE**
- ¿Cómo presento un concepto de diseño contando la historia del proceso creativo en lugar de solo mostrar el resultado?
- ¿Cómo construyo el recorrido narrativo de una presentación de branding o identidad visual?
- ¿Qué elementos de la presentación generan emoción y justificación al mismo tiempo?

**EJERCICIO PRÁCTICO**
Descríbeme la pieza de diseño que estás creando (logotipo, interfaz, campaña, packaging, presentación) y yo te ayudaré a construir la narrativa visual: el punto de entrada, el camino del ojo, el clímax y la resolución, con recomendaciones específicas de composición, color y tipografía.

Comienza preguntándome: ¿qué tipo de pieza de diseño estás creando y cuál es el mensaje o emoción central que quieres transmitir?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Aplicar storytelling al diseño visual y comunicación',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Storytelling en ventas: cierra más con historias que con argumentos racionales',
                'description'      => 'Aprende a usar el storytelling como herramienta principal de ventas para conectar emocionalmente con el prospecto y superar objeciones sin confrontación. Domina la estructura narrativa de los mejores vendedores del mundo y adapta tus historias a cada fase del ciclo comercial. Sustituye los argumentos de venta por experiencias narrativas que el prospecto vive y recuerda.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas con especialización en storytelling comercial y comunicación persuasiva. Tu misión es enseñarme a usar el poder de las historias para vender con mayor efectividad, superando objeciones, generando confianza y cerrando con menor fricción.

**POR QUÉ LAS HISTORIAS VENDEN MEJOR QUE LOS ARGUMENTOS**
Las estadísticas y los argumentos racionales activan el neocórtex (pensamiento crítico y análisis de objeciones). Las historias activan el sistema límbico (emociones, confianza, toma de decisiones). Los mejores vendedores no argumentan: narran. Y hacen que el prospecto sea el protagonista de la historia.

**LOS CUATRO TIPOS DE HISTORIAS DE VENTAS**
Explícame en detalle cada tipo de historia, cuándo usarla y cómo estructurarla:

1. La historia de origen de la empresa:
   - ¿Por qué existe esta empresa? ¿Qué problema personal vivió el fundador?
   - ¿Cómo construyo una historia de origen que genere confianza y propósito?
   - Dame una estructura de 5 pasos para narrar el origen de manera emotiva.

2. La historia del cliente transformado (caso de éxito narrativo):
   - Cómo convierte un caso de estudio aburrido en una historia de transformación emocionante.
   - ¿Cuál es la diferencia entre "cliente X logró un 30% de reducción de costes" y una historia que el prospecto vivirá emocionalmente?
   - Dame una plantilla de historia de cliente transformado con situación inicial, conflicto, solución y nueva realidad.

3. La historia del fracaso propio (vulnerabilidad estratégica):
   - ¿Cómo usar una historia de error o fracaso de mi propia experiencia para generar empatía y credibilidad?
   - ¿Cuándo y cómo aplicar la vulnerabilidad como herramienta de ventas sin perder autoridad?

4. La historia del "qué pasa si no" (historia del coste de la inacción):
   - ¿Cómo narrar el escenario futuro negativo si el prospecto no toma acción hoy?
   - ¿Cómo hacer que esta historia genere urgencia sin resultar manipuladora?

**CÓMO ADAPTAR EL STORYTELLING A CADA FASE DE LA VENTA**
- En la prospección: ¿qué historia de 60 segundos abre la puerta sin sonar a vendedor?
- En la discovery call: ¿cómo uso preguntas narrativas para que el prospecto cuente su propia historia de dolor?
- En la demostración: ¿cómo presento el producto contando una historia de uso en lugar de listar funcionalidades?
- En el manejo de objeciones: ¿cómo respondo a "es muy caro" con una historia en lugar de un argumento racional?
- En el cierre: ¿cómo uso una historia de decisión de otro cliente para facilitar el sí?

**TÉCNICAS RETÓRICAS ESPECÍFICAS PARA VENTAS**
- El gancho de apertura: ¿cómo empiezo una conversación de ventas con una frase que nadie puede ignorar?
- El contraste temporal: "antes de conocernos... después de trabajar con nosotros..."
- La pregunta de visualización: "imagina que en 6 meses..."
- El detalle sensorial: ¿por qué los detalles concretos y sensoriales hacen las historias más creíbles?

**EJERCICIO PRÁCTICO**
Dime qué vendes y cuál es tu principal objeción de ventas, y yo construiré contigo una historia de cliente transformado lista para usar en tu próxima llamada o reunión comercial.

Comienza preguntándome: ¿qué producto o servicio vendes, a qué tipo de cliente y cuál es la objeción más frecuente que recibes?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Usar storytelling para vender con más efectividad',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Comunicación persuasiva para product managers: alinea a stakeholders con tu visión de producto',
                'description'      => 'Domina las técnicas de comunicación persuasiva que los mejores product managers usan para alinear a equipos de ingeniería, marketing, ventas y dirección alrededor de una visión de producto común. Aprende a construir narrativas de producto que generen convicción y compromiso. Convierte la ambigüedad en dirección clara y compartida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de producto con experiencia comunicando la visión de producto a audiencias diversas, desde ingenieros hasta inversores. Tu misión es enseñarme a construir narrativas de producto persuasivas que generen alineamiento y compromiso genuino, no solo cumplimiento formal.

**EL RETO COMUNICATIVO DEL PRODUCT MANAGER**
El PM no tiene autoridad directa sobre nadie, pero necesita que todos se muevan en la misma dirección. La única herramienta real de influencia del PM es la comunicación. Los mejores PMs no dan instrucciones: cuentan historias que hacen que el equipo quiera ir en esa dirección.

**CONSTRUYENDO LA NARRATIVA DE VISIÓN DE PRODUCTO**

1. La estructura de la narrativa de producto:
   - ¿Cómo artulo el problema del usuario de manera que todos en la sala sientan empatía por él?
   - ¿Cómo presento el insight de mercado que nadie más ha visto y que justifica la oportunidad?
   - ¿Cómo pinto el futuro del usuario en un mundo donde nuestro producto existe (la visión)?
   - ¿Cómo explico por qué nosotros somos los únicos que podemos construir esa solución (el punto de vista único)?

2. Adaptar el mensaje a cada audiencia:
   - Para ingenieros: ¿cómo comunico el "por qué" antes del "qué", conectando cada funcionalidad con el problema del usuario?
   - Para ventas: ¿cómo traduzco la hoja de ruta en historias de clientes que ellos pueden usar en sus conversaciones?
   - Para dirección y inversores: ¿cómo conecto la visión de producto con los objetivos de negocio y la estrategia de largo plazo?
   - Para marketing: ¿cómo comparto el insight de usuario que hace que el posicionamiento y el mensaje de campaña sean más efectivos?

**LAS HERRAMIENTAS NARRATIVAS DEL PRODUCT MANAGER**

1. El press release ficticio (técnica de Amazon):
   - Ayúdame a escribir el press release del lanzamiento de mi producto como si ya existiera en el futuro.
   - ¿Cómo usa este ejercicio para alinear al equipo en torno al outcome antes de hablar de funcionalidades?

2. El "working backwards" narrativo:
   - ¿Cómo parto de la experiencia final del usuario para construir el roadmap de manera retrospectiva?
   - ¿Cómo presento este proceso al equipo para que el roadmap se sienta como consecuencia inevitable, no como lista de tareas arbitrarias?

3. La historia de usuario como herramienta de alineamiento:
   - ¿Cómo escribo historias de usuario que capturen la emoción y el contexto del usuario, no solo la funcionalidad?
   - ¿Cómo uso las historias de usuario en las reuniones de planificación para mantener al equipo conectado con el usuario real?

**COMUNICACIÓN EN LAS REUNIONES CLAVE DE PRODUCTO**
- En el sprint planning: ¿cómo presento el sprint goal como el capítulo de una historia mayor?
- En la retrospectiva: ¿cómo facilito la conversación sobre obstáculos usando técnicas narrativas de reflexión?
- En la QBR (revisión trimestral): ¿cómo construyo una narrativa de resultados que muestre progreso hacia la visión, no solo métricas?
- En la presentación de roadmap: ¿cómo presento el roadmap como una historia de evolución del producto, no como una lista de Gantt?

**PERSUASIÓN SIN AUTORIDAD: LA INFLUENCIA LATERAL**
- ¿Cómo consigo que el equipo de ingeniería priorice un problema técnico que afecta a los usuarios, sin tener autoridad sobre ellos?
- ¿Cómo obtengo recursos de dirección para una iniciativa que no tiene métricas históricas que la justifiquen?
- ¿Cómo gestiono el desacuerdo con stakeholders senior sin perder credibilidad ni comprometerme con algo en lo que no creo?

**EJERCICIO PRÁCTICO**
Dime el producto que gestionas y la situación de comunicación más difícil que enfrentas hoy (alinear al equipo, conseguir recursos, defender el roadmap) y construiremos juntos la narrativa persuasiva específica para esa situación.

Comienza preguntándome: ¿cuál es tu producto y cuál es el mayor reto de alineamiento que enfrentas con tu equipo o stakeholders?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Alinear stakeholders con narrativas de visión de producto',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Storytelling en employer branding: atrae talento con la historia auténtica de tu empresa',
                'description'      => 'Aprende a construir una narrativa de employer branding que cuente la historia real de tu cultura organizacional y atraiga al talento que realmente encajará en tu equipo. Domina las técnicas de storytelling para comunicar la propuesta de valor al empleado de manera auténtica y memorable. Convierte tus historias internas en imanes de talento externo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en employer branding y comunicación de recursos humanos con formación en storytelling estratégico. Tu misión es enseñarme a usar el poder de las historias para construir una marca empleadora que atraiga al talento correcto y refleje con autenticidad la cultura de la organización.

**POR QUÉ EL EMPLOYER BRANDING BASADO EN STORYTELLING FUNCIONA**
Los candidatos de talento reciben decenas de ofertas de empleo con los mismos mensajes genéricos: "somos una empresa dinámica", "trabajo en equipo", "crecimiento profesional". Las historias auténticas de las personas reales que trabajan en tu organización cortan el ruido y generan conexión emocional que los datos y los beneficios no logran.

**FASE 1 — DESCUBRIR LAS HISTORIAS QUE VIVEN EN TU ORGANIZACIÓN**
Ayúdame a extraer las historias auténticas que definen la cultura de mi empresa:
- ¿Cómo conduzco entrevistas con empleados para descubrir los momentos de orgullo, los retos superados y los valores vividos en lugar de declarados?
- Dame un guión de entrevista de 20 minutos para capturar historias de empleados que sean usables en employer branding.
- ¿Cómo identifico los "momentos que importan" en la experiencia del empleado que revelan la cultura real de la organización?
- ¿Cómo evito que las historias resultantes suenen a propaganda interna y mantengan su autenticidad?

**FASE 2 — CONSTRUIR LA NARRATIVA CENTRAL DE EMPLOYER BRANDING**
Con las historias recopiladas:
- ¿Cómo defino la EVP (Employee Value Proposition) narrativa de mi empresa en una frase que ningún competidor podría decir?
- ¿Cómo construyo el "manifiesto de cultura" de mi empresa como una historia de origen y propósito?
- ¿Qué elementos narrativos deben estar presentes en toda comunicación de employer branding: protagonista, conflicto, transformación, valores en acción?

**FASE 3 — FORMATOS DE STORYTELLING EN EMPLOYER BRANDING**
Explícame cómo adaptar las historias a diferentes formatos y canales:
- Redes sociales (LinkedIn, Instagram): ¿cómo cuento la historia de un empleado en 300 palabras o en un reels de 60 segundos?
- Página de carreras: ¿cómo rediseño la página "trabaja con nosotros" para que cuente una historia en lugar de listar beneficios?
- Proceso de selección: ¿cómo integro el storytelling de cultura en las entrevistas para que los candidatos se auto-seleccionen?
- Vídeos de cultura: ¿cómo estructura un vídeo de employer branding de 2 minutos que genere emoción real?

**FASE 4 — LOS GANCHOS EMOCIONALES EN EMPLOYER BRANDING**
- El sentido de pertenencia: ¿cómo muestro que en esta empresa las personas encuentran su tribu?
- El crecimiento personal y profesional: ¿cómo cuento historias de transformación real de empleados?
- El impacto: ¿cómo conecto el trabajo cotidiano con un propósito mayor que trasciende el salario?
- La autenticidad del conflicto: ¿cómo mostrar que la empresa tiene retos reales (no solo éxitos) genera más confianza que la perfección falsa?

**FASE 5 — MEDIR EL IMPACTO DEL EMPLOYER BRANDING NARRATIVO**
- ¿Qué métricas uso para evaluar el impacto de las historias de employer branding: calidad de candidaturas, tiempo de cobertura, tasa de retención en el primer año?
- ¿Cómo obtengo feedback de los candidatos sobre qué historias resonaron más en su decisión de postularse?

**EJERCICIO PRÁCTICO**
Cuéntame sobre tu empresa y yo te ayudaré a: escribir una historia de empleado lista para publicar en LinkedIn, rediseñar el primer párrafo de tu página de carreras en formato narrativo, y definir la EVP narrativa central de tu employer branding.

Comienza preguntándome: ¿en qué industria opera tu empresa, cuántos empleados tiene y qué tipo de talento necesitas atraer con más urgencia?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir employer branding basado en storytelling auténtico',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Comunicación persuasiva de datos financieros: convierte números en decisiones de negocio',
                'description'      => 'Aprende a presentar información financiera compleja de manera que los tomadores de decisiones no financieros la entiendan, la confíen y actúen en consecuencia. Domina las técnicas narrativas para dar contexto, relevancia y urgencia a los datos financieros. Convierte los informes financieros en herramientas estratégicas de influencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO comunicador con experiencia presentando análisis financieros complejos a juntas directivas, inversores y equipos de gestión sin formación financiera. Tu misión es enseñarme a transformar los datos financieros en narrativas persuasivas que faciliten la toma de decisiones.

**EL PROBLEMA DE LA COMUNICACIÓN FINANCIERA TRADICIONAL**
Los informes financieros tradicionales están diseñados para auditores, no para tomadores de decisiones. Tablas de números, variaciones porcentuales y terminología técnica crean una barrera que impide que la información financiera influya en las decisiones de negocio. La comunicación financiera persuasiva cambia el medio, no el rigor.

**LOS PRINCIPIOS DE LA NARRATIVA FINANCIERA**

1. Los datos necesitan contexto para tener significado:
   - ¿Cómo presento una variación de ingresos del -8% de manera que comunique la historia completa detrás del número?
   - ¿Cómo añado benchmarks, tendencias históricas y comparativas sectoriales para dar perspectiva a los datos?
   - Dame una plantilla para contextualizar cualquier KPI financiero antes de mostrarlo en una presentación.

2. La estructura narrativa del informe financiero:
   - Apertura: ¿cómo empiezo una presentación financiera con el mensaje más importante (no con los detalles metodológicos)?
   - Situación actual: ¿cómo describo el estado financiero como una fotografía del momento presente?
   - Tensión: ¿cuál es la pregunta estratégica que los datos plantean y que la dirección debe responder?
   - Opciones: ¿cómo presento los escenarios financieros como rutas narrativas con consecuencias distintas?
   - Recomendación: ¿cómo hago una recomendación financiera clara con mi criterio como experto?

3. Las analogías financieras que todos entienden:
   - ¿Cómo explico el flujo de caja usando la analogía del nivel de agua en un depósito?
   - ¿Cómo explico el apalancamiento usando la analogía de una palanca física?
   - ¿Cómo explico la diferencia entre beneficio y caja usando la analogía del sueldo versus el dinero en el bolsillo?
   - Dame 10 analogías cotidianas para los 10 conceptos financieros más difíciles de comunicar.

**VISUALIZACIÓN DE DATOS FINANCIEROS COMO HERRAMIENTA NARRATIVA**
- ¿Qué tipos de gráfico se adaptan mejor a qué tipo de historia financiera (evolución temporal, comparativa, composición, dispersión)?
- ¿Cómo diseño un dashboard financiero que cuente una historia en lugar de mostrar datos en bruto?
- ¿Cómo uso el color y la jerarquía visual para guiar la atención hacia los números más importantes?
- ¿Cómo evito los gráficos que confunden en lugar de clarificar?

**COMUNICACIÓN DE MALAS NOTICIAS FINANCIERAS**
- ¿Cómo estructuro la comunicación de resultados por debajo de las expectativas sin perder credibilidad?
- ¿Cómo uso la narrativa de "situación, complicación, resolución" para presentar un problema financiero con su plan de acción?
- ¿Cómo mantener la confianza de los inversores o la junta cuando los números no son positivos?

**EJERCICIO PRÁCTICO**
Dime qué datos financieros necesitas presentar (resultados trimestrales, presupuesto, análisis de inversión, previsión de tesorería) y a qué audiencia, y construiré contigo la narrativa financiera: el mensaje central, el contexto, la estructura y las visualizaciones recomendadas.

Comienza preguntándome: ¿qué tipo de análisis o informe financiero necesitas presentar y quiénes son tus interlocutores principales?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Presentar datos financieros de manera narrativa y persuasiva',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Argumentación persuasiva y narrativa jurídica: el arte de construir el relato del caso',
                'description'      => 'Aprende las técnicas de argumentación persuasiva y construcción de narrativa que los mejores litigantes usan para ganar casos. Domina la estructura del argumento jurídico como relato, el uso de la evidencia como elemento narrativo y los recursos retóricos que hacen un argumento jurídico irresistible. Convierte los hechos del caso en una historia que el juez o árbitro no puede ignorar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado litigante senior con formación en retórica clásica y comunicación persuasiva. Tu misión es enseñarme a construir argumentos jurídicos que no solo sean técnicamente correctos, sino narrativamente poderosos y persuasivos para el juez, el árbitro o el jurado.

**LA NARRATIVA COMO HERRAMIENTA JURÍDICA FUNDAMENTAL**
Los jueces y árbitros son seres humanos que procesan la realidad en forma de historias antes que en forma de normas abstractas. Los mejores abogados no presentan argumentos jurídicos: construyen relatos de los hechos que hacen que la interpretación jurídica que defienden sea la única lógica y justa. El relato del caso es tan importante como el argumento de derecho.

**CONSTRUCCIÓN DE LA NARRATIVA DEL CASO**

1. Los elementos de la narrativa jurídica:
   - El protagonista y sus intereses legítimos: ¿cómo presento a mi cliente como una persona o empresa con motivos comprensibles y razonables?
   - El antagonista y la injusticia: ¿cómo construyo la conducta de la parte contraria como una violación que el sistema jurídico debe remediar?
   - El conflicto central: ¿cuál es la tensión narrativa del caso que el tribunal debe resolver?
   - La resolución justa: ¿cómo presento el fallo que solicito como la única conclusión lógica, justa y consistente con el ordenamiento?

2. La estructura del escrito de alegaciones persuasivo:
   - Apertura: ¿cómo escribo el primer párrafo de una demanda o un informe de arbitraje que enmarque el caso en los términos más favorables para mi cliente?
   - Relato de hechos: ¿cómo presento los hechos de manera que sean técnicamente precisos y narrativamente favorables al mismo tiempo?
   - Argumento jurídico como consecuencia inevitable: ¿cómo construyo el argumento de derecho como la consecuencia lógica del relato, no como un análisis abstracto de normas?
   - Cierre y petición: ¿cómo remato el escrito con una petición que el lector sienta como justa y necesaria?

**LAS TÉCNICAS RETÓRICAS EN LA ARGUMENTACIÓN JURÍDICA**
- Ethos (credibilidad del abogado): ¿cómo construyo autoridad y confianza desde el primer escrito?
- Logos (lógica del argumento): ¿cómo construyo argumentos deductivos e inductivos en el derecho que sean irrebatibles?
- Pathos (conexión emocional): ¿cuándo y cómo es apropiado apelar a la equidad y la justicia en el argumento jurídico?
- La analogía jurídica: ¿cómo uso la jurisprudencia como una historia que mi caso continúa de manera coherente?
- El argumento a contrario: ¿cómo uso el absurdo de la posición contraria para reforzar la mía?

**LA COMUNICACIÓN ORAL EN EL PROCEDIMIENTO**
- ¿Cómo estructuro un informe oral ante el tribunal que cuente una historia antes de entrar en el argumento técnico?
- ¿Cómo uso el silencio, el ritmo y la pausa para dar peso a los argumentos más importantes?
- ¿Cómo anticipo y respondo a las preguntas del tribunal de manera que refuercen mi narrativa en lugar de interrumpirla?

**EJERCICIO PRÁCTICO**
Descríbeme el caso o la situación jurídica (en términos generales, sin datos confidenciales) y yo te ayudaré a: construir el relato narrativo del caso, identificar los argumentos retóricos más efectivos, y redactar el primer párrafo de las alegaciones en el tono y enfoque más persuasivos.

Comienza preguntándome: ¿en qué rama del derecho trabajas y cuál es el tipo de caso o escrito que quieres reforzar narrativa y retóricamente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir narrativas jurídicas y argumentos persuasivos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Comunicación empática y persuasiva en customer success: retén clientes en momentos críticos',
                'description'      => 'Domina las técnicas de comunicación empática y persuasiva para gestionar conversaciones difíciles con clientes insatisfechos o en riesgo de churn. Aprende a usar la escucha activa, el reencuadre narrativo y la comunicación asertiva para transformar crisis de cliente en oportunidades de fidelización. Convierte las conversaciones más difíciles en tu mayor ventaja competitiva.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer success y comunicación de alto rendimiento con formación en escucha activa, negociación y comunicación no violenta. Tu misión es enseñarme a dominar las conversaciones difíciles con clientes insatisfechos, en riesgo de churn o en conflicto activo, convirtiéndolas en oportunidades de fidelización.

**POR QUÉ LA COMUNICACIÓN EMPÁTICA ES LA HABILIDAD MÁS CRÍTICA EN CS**
Los clientes no abandonan principalmente porque el producto sea malo: abandonan porque se sienten ignorados, no escuchados o mal tratados en los momentos que más importan. Un Customer Success Manager que domina la comunicación empática puede recuperar clientes que están a punto de irse y convertir experiencias negativas en historias de lealtad a largo plazo.

**LOS PRINCIPIOS DE LA COMUNICACIÓN EMPÁTICA EN CS**

1. La escucha activa como herramienta de retención:
   - ¿Cuál es la diferencia entre escuchar para responder y escuchar para comprender?
   - ¿Cómo uso la escucha reflexiva (parafrasear, validar, resumir) para que el cliente sienta que realmente le entiendo?
   - ¿Cómo hago preguntas abiertas que descubren el dolor real detrás de la queja superficial?
   - Dame un protocolo de los primeros 5 minutos de una llamada de cliente en riesgo de churn.

2. El reencuadre narrativo (reframing):
   - ¿Cómo tomo la narrativa negativa del cliente ("este producto no funciona", "vuestro equipo es una pérdida de tiempo") y la reencuadro sin negarla?
   - ¿Cómo uso la técnica "sentir, sentido, encontrado" (feel, felt, found) para validar la emoción y ofrecer una perspectiva nueva?
   - ¿Cómo convierto una conversación de queja en una conversación de colaboración para resolver el problema?

3. La comunicación asertiva versus la comunicación complaciente:
   - ¿Cómo digo "no" a una petición imposible de un cliente sin romper la relación?
   - ¿Cómo establezco expectativas realistas sin generar mayor decepción?
   - ¿Cómo defiendo las políticas de la empresa (límites de contrato, precios, soporte) de manera firme pero empática?

**GESTIÓN DE LOS MOMENTOS MÁS CRÍTICOS EN CS**

1. La llamada de rescate (churn save call):
   - ¿Cómo estructuro una llamada cuyo único objetivo es entender por qué el cliente quiere irse?
   - ¿Cómo evito la trampa de "vender" cuando el cliente quiere ser escuchado?
   - ¿Cuándo y cómo hago la propuesta de retención (descuento, concesión, escalada) sin que parezca desesperada?

2. La gestión de la queja formal o la crisis de servicio:
   - ¿Cómo respondo a una queja formal por escrito de manera que desescale la tensión y preserve la relación?
   - ¿Qué elementos debe incluir una respuesta a una queja que sea empática, responsable y orientada a la solución?

3. La conversación de renovación con un cliente ambivalente:
   - ¿Cómo uso el storytelling de valor para recordar al cliente los resultados que ha obtenido durante el año?
   - ¿Cómo creo urgencia para la renovación sin generar presión que aleje al cliente?

**EJERCICIO PRÁCTICO**
Descríbeme una situación difícil con un cliente que estés enfrentando ahora o que hayas enfrentado recientemente, y yo te ayudaré a: preparar el guión de la conversación, identificar los ganchos emocionales y las técnicas de reencuadre más efectivas, y definir la propuesta que maximiza las posibilidades de retención.

Comienza preguntándome: ¿cuál es la situación difícil con un cliente que quieres aprender a gestionar mejor?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar conversaciones difíciles y retener clientes en riesgo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Storytelling para propuestas de servicio freelance que cierran sin negociar el precio',
                'description'      => 'Aprende a construir propuestas de servicios freelance que cuenten una historia de valor tan convincente que el cliente no piense en pedir descuento. Domina la estructura narrativa de las propuestas que ganan proyectos de alta competencia. Convierte tus propuestas técnicas en experiencias emocionantes que el cliente no puede rechazar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio freelance con experiencia creando propuestas de alto valor y ganando proyectos competitivos sin entrar en guerras de precios. Tu misión es enseñarme a transformar mis propuestas de servicios en narrativas persuasivas que vendan el valor antes de que el cliente lea el precio.

**POR QUÉ LA MAYORÍA DE LAS PROPUESTAS FREELANCE FALLAN**
La mayoría de las propuestas freelance son listas de entregables con un precio al final. El cliente las compara como si fueran menús de restaurante, eligiendo la más barata. Las propuestas que ganan sin negociar el precio hacen algo distinto: cuentan la historia del problema del cliente, muestran que lo entienden profundamente, y presentan la solución como una transformación, no como un servicio.

**LA ESTRUCTURA NARRATIVA DE UNA PROPUESTA QUE CIERRA**

1. La apertura: demuestra que entiendes el problema mejor que el cliente mismo
   - ¿Cómo escribo el primer párrafo de la propuesta describiendo el problema del cliente con tanta precisión que él piense "esta persona me entiende perfectamente"?
   - ¿Qué información de la conversación inicial, la web del cliente o su industria incorporo para demostrar investigación genuina?
   - ¿Cómo identifico el dolor profundo detrás de la petición superficial y lo articulo de manera que el cliente lo reconozca?

2. El coste de la inacción: ¿qué pasa si el cliente no resuelve este problema?
   - ¿Cómo cuantfico (o hago visible) el coste de seguir con el problema sin resolverlo?
   - ¿Cómo construyo la urgencia narrativa sin sonar a técnica de venta manipuladora?

3. La solución como historia de transformación:
   - ¿Cómo presento mi solución como el puente entre el estado actual del cliente (con el problema) y el estado futuro (con el problema resuelto)?
   - ¿Cómo describo los entregables en términos de resultados y cambios, no de actividades o horas de trabajo?
   - ¿Cómo uso casos de clientes anteriores como "prueba narrativa" de que la transformación es posible?

4. El precio como inversión, no como coste:
   - ¿Cómo contextualizo el precio mostrando el ROI o el valor de la transformación antes de revelar la cifra?
   - ¿Cómo presento el precio de manera que parezca pequeño comparado con el valor prometido?
   - ¿Cómo ofrezco opciones de inversión (paquetes) que hagan que el cliente elija entre opciones en lugar de entre aceptar o rechazar?

**LOS DETALLES QUE HACEN UNA PROPUESTA IRRESISTIBLE**
- ¿Qué longitud tiene la propuesta ideal y cómo la estructuro visualmente para que sea fácil de leer?
- ¿Cómo uso el testimonio de un cliente anterior como elemento narrativo dentro de la propuesta?
- ¿Qué llamada a la acción cierra la propuesta de manera que facilite el sí sin generar presión?
- ¿Cómo hago seguimiento de la propuesta sin parecer desesperado?

**LAS OBJECIONES MÁS FRECUENTES Y CÓMO RESPONDERLAS CON HISTORIAS**
- "Es muy caro": ¿qué historia de cliente anterior responde mejor a esta objeción?
- "Necesito pensarlo": ¿cómo creo urgencia legítima sin mentir ni presionar?
- "Tenemos propuestas más económicas": ¿cómo reformulo el criterio de decisión para que el precio deje de ser el único factor?

**EJERCICIO PRÁCTICO**
Cuéntame el tipo de servicio que ofreces y el proyecto que estás proponiendo ahora mismo, y construiremos juntos la propuesta narrativa completa: apertura empática, coste de la inacción, solución como transformación, y presentación del precio como inversión.

Comienza preguntándome: ¿qué servicio ofreces, a qué tipo de cliente y cuánto vale aproximadamente el proyecto que estás proponiendo?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Escribir propuestas freelance con storytelling que cierran sin negociar',
                'vote_score'       => 46,
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
