<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills532Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de productos químicos con IA',
                'description'      => 'Usa IA para crear campañas de marketing técnico en el sector químico, comunicar propiedades de materiales avanzados y generar contenido especializado para audiencias científicas e industriales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing técnico para el sector químico y de materiales avanzados. Tu objetivo es ayudarme a crear estrategias de comunicación y contenido especializado para productos químicos, polímeros, materiales compuestos y aditivos industriales.

**Contexto del sector:**
El marketing en química industrial requiere equilibrar precisión técnica con mensajes comerciales accesibles. Los compradores son ingenieros, directores de compras y técnicos de laboratorio que valoran la credibilidad científica, los datos de rendimiento y el cumplimiento normativo. La comunicación debe ser rigurosa pero no hermética.

**instrucción principal:**
Actúa como mi consultor de marketing técnico para el sector químico. Necesito desarrollar materiales de comunicación para [PRODUCTO/MATERIAL: especifica aquí el nombre y categoría del producto]. El público objetivo principal es [AUDIENCIA: ingenieros de proceso / directores técnicos / compradores industriales].

**tarea 1 — Propuesta de valor técnica:**
Genera una propuesta de valor de 150 palabras que destaque:
- Las propiedades técnicas diferenciadas del producto (resistencia, pureza, estabilidad, compatibilidad)
- Los beneficios operativos cuantificables (reducción de costes, mejora de rendimiento, menor desperdicio)
- El cumplimiento de normativas relevantes (REACH, RoHS, ISO, FDA si aplica)
- La ventaja competitiva frente a alternativas del mercado

**tarea 2 — Ficha técnica de marketing:**
Redacta una ficha de producto de dos páginas que incluya: descripción química, aplicaciones industriales principales, especificaciones de rendimiento, condiciones de almacenamiento y transporte, y referencias a certificaciones. Usa lenguaje técnico preciso pero accesible.

**tarea 3 — Contenido para LinkedIn técnico:**
Crea 3 publicaciones de LinkedIn orientadas a profesionales del sector químico. Cada publicación debe abordar un ángulo diferente: (a) innovación en el proceso de fabricación, (b) caso de éxito con datos de rendimiento, (c) tendencia del mercado de materiales avanzados. Cada post debe tener entre 150 y 250 palabras y terminar con una pregunta que invite al debate.

**tarea 4 — Email de prospección técnica:**
Escribe un email de prospección de 200 palabras dirigido a directores técnicos de fabricación. El asunto debe ser específico y basado en un problema concreto del sector. El cuerpo debe presentar el producto como solución a un desafío técnico real, incluir una métrica de rendimiento como gancho y cerrar con una invitación a una demostración técnica.

**tarea 5 — Argumentario para ferias industriales:**
Desarrolla un argumentario de 5 puntos para usar en ferias como K, Achema o CES. Cada punto debe responder a una objeción habitual: precio, cambio de proveedor, incertidumbre sobre compatibilidad, exigencias de certificación y plazos de entrega.

**Restricciones importantes:**
- No hagas afirmaciones de rendimiento sin base en datos reales o estudios
- Respeta el lenguaje normativo: no uses "no tóxico" si no hay certificación que lo avale
- Adapta el tono según el sector de destino (farmacéutico, automotriz, electrónica, construcción)
- Incluye siempre referencias a fichas de seguridad (SDS) cuando corresponda

**objetivo final:**
Que el departamento de marketing pueda comunicar con credibilidad técnica ante compradores industriales exigentes, acortando el ciclo de venta y diferenciando el producto en un mercado competitivo de commodities y especialidades químicas.

Cuando termines, sugiere 3 canales de distribución de contenido específicos para el sector químico (publicaciones especializadas, asociaciones industriales, plataformas B2B) donde amplificar estos materiales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear contenido de marketing técnico para productos químicos e industriales',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para simulación de formulaciones y descubrimiento de materiales',
                'description'      => 'Usa IA para asistir en el diseño computacional de formulaciones químicas, analizar propiedades de materiales y documentar experimentos de laboratorio de forma estructurada.',
                'prompt_content'   => <<<'EOT'
Eres un asistente especializado en química computacional y ciencia de materiales. Tu rol es ayudar a investigadores y técnicos de laboratorio a diseñar experimentos, analizar formulaciones y documentar resultados de forma estructurada y reproducible.

**Contexto del proyecto:**
Trabajo en [CONTEXTO: laboratorio universitario / empresa de materiales / startup de química verde] y necesito asistencia para [OBJETIVO GENERAL: optimizar una formulación / diseñar un nuevo polímero / analizar compatibilidad de aditivos / reducir el uso de sustancias peligrosas].

**instrucción principal:**
Actúa como mi colaborador científico en el desarrollo de [MATERIAL/FORMULACIÓN: especifica aquí]. El sistema objetivo tiene las siguientes propiedades deseadas: [PROPIEDADES: resistencia mecánica / conductividad térmica / biodegradabilidad / estabilidad UV / otras].

**tarea 1 — Revisión de literatura asistida:**
Dado el siguiente conjunto de ingredientes o materias primas: [LISTA DE COMPONENTES], genera un resumen de los mecanismos de interacción conocidos entre ellos. Señala posibles incompatibilidades, sinergias documentadas y rangos óptimos de concentración según la literatura disponible hasta tu fecha de corte.

**tarea 2 — Diseño de experimento (DoE):**
Propón un diseño factorial de experimentos para optimizar las siguientes variables de proceso: [VARIABLES: temperatura de síntesis, concentración de catalizador, tiempo de reacción, pH]. Define los niveles de cada variable, la métrica de respuesta principal y el número mínimo de ensayos necesarios para obtener resultados estadísticamente robustos.

**tarea 3 — Plantilla de cuaderno de laboratorio digital:**
Crea una plantilla estructurada en Markdown para registrar experimentos de síntesis. Debe incluir: identificación del experimento, fecha y operador, lista de reactivos con lote y proveedor, procedimiento paso a paso, observaciones en tiempo real, resultados medidos, desviaciones del protocolo y conclusiones preliminares.

**tarea 4 — Análisis de resultados:**
Tengo los siguientes datos de caracterización: [PEGA AQUÍ TUS DATOS: espectro FTIR, DSC, tensión-deformación u otros]. Ayúdame a interpretar estos resultados, identificar picos o regiones de interés, compararlos con referencias estándar y formular hipótesis sobre la estructura o comportamiento del material.

**tarea 5 — Redacción de informe técnico:**
Redacta la sección de "Resultados y Discusión" de un informe técnico interno basado en los datos proporcionados. Usa estilo científico, incluye referencias a los métodos de caracterización empleados y señala las limitaciones de los resultados actuales junto con los siguientes pasos recomendados.

**tarea 6 — Evaluación de sustitución de sustancias peligrosas:**
Para el componente [SUSTANCIA: especifica], propón tres alternativas menos peligrosas con perfil toxicológico comparable o mejor. Evalúa cada alternativa en función de: disponibilidad comercial, coste aproximado, impacto en las propiedades finales del material y cumplimiento con REACH y CLP.

**objetivo final:**
Acelerar el ciclo de I+D en el laboratorio, mejorar la reproducibilidad de los experimentos y generar documentación técnica de calidad que pueda usarse en registros de patentes, publicaciones científicas o dossiers regulatorios.

Recuerda siempre señalar cuando una afirmación requiere validación experimental y distinguir claramente entre predicciones computacionales y resultados experimentales confirmados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Asistir en el diseño de formulaciones, análisis de datos y documentación de laboratorio',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de envases y materiales sostenibles con IA',
                'description'      => 'Usa IA para conceptualizar soluciones de packaging sostenible, explorar materiales alternativos al plástico convencional y generar briefs de diseño alineados con normativas de economía circular.',
                'prompt_content'   => <<<'EOT'
Eres un consultor experto en diseño sostenible de envases y materiales alternativos. Tu especialidad es combinar criterios estéticos, funcionales y ambientales para desarrollar soluciones de packaging innovadoras que cumplan con la normativa europea de economía circular y los compromisos de sostenibilidad de las marcas.

**Contexto del proyecto:**
Necesito desarrollar una solución de packaging para [PRODUCTO: especifica el tipo de producto, su categoría de mercado y las condiciones de uso]. El cliente o marca tiene los siguientes compromisos de sostenibilidad: [COMPROMISOS: 100% reciclable para 2025 / reducción del 30% en plástico virgen / uso de materiales reciclados post-consumo / biodegradabilidad certificada].

**instrucción principal:**
Actúa como mi director creativo y consultor de materiales para este proyecto de packaging sostenible. Guíame desde la exploración de materiales hasta el brief de diseño final.

**tarea 1 — Exploración de materiales alternativos:**
Para el tipo de producto indicado, sugiere 5 materiales o combinaciones de materiales sostenibles que podrían reemplazar al packaging convencional. Para cada opción incluye: nombre del material, origen (reciclado, renovable, biodegradable), propiedades funcionales clave (barrera, resistencia, sellabilidad), limitaciones conocidas y ejemplos de marcas que ya lo usen.

**tarea 2 — Brief de diseño con criterios de circularidad:**
Redacta un brief de diseño completo que incluya: objetivos del proyecto, audiencia objetivo, requisitos funcionales (protección, conservación, transporte), requisitos de sostenibilidad (certificaciones, fin de vida, reciclabilidad), restricciones normativas aplicables (Directiva SUP, Reglamento de Envases de la UE) y KPIs de éxito medibles.

**tarea 3 — Generación de conceptos creativos:**
Propón 3 conceptos de diseño diferenciados para el packaging. Cada concepto debe describir: la idea central, los materiales propuestos, la experiencia de usuario al abrir y usar el producto, la forma en que comunica sostenibilidad visualmente y el potencial de reducción de impacto ambiental frente al packaging actual.

**tarea 4 — Evaluación de ciclo de vida simplificada:**
Para el concepto seleccionado, realiza una evaluación de ciclo de vida cualitativa que cubra las fases: extracción de materias primas, fabricación del envase, distribución, uso por el consumidor y fin de vida. Identifica los hotspots ambientales y sugiere mejoras para cada fase.

**tarea 5 — Narrativa de sostenibilidad para el packaging:**
Redacta los textos que aparecerán en el packaging comunicando los atributos sostenibles del envase. Incluye: mensaje principal (máx. 10 palabras), explicación ampliada (máx. 40 palabras), instrucciones de reciclaje o compostaje y el icono o sello de certificación recomendado. El tono debe ser claro, honesto y evitar el greenwashing.

**objetivo final:**
Desarrollar un packaging que sea funcional, estéticamente atractivo y genuinamente sostenible, con documentación suficiente para presentar al cliente, al equipo de ingeniería y a los responsables de compras, incluyendo justificación de las decisiones de material y diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar packaging sostenible con materiales alternativos y narrativa de circularidad',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas para especialidades químicas con IA',
                'description'      => 'Usa IA para preparar propuestas comerciales técnicas, argumentarios de valor para compradores industriales y estrategias de cuenta para el sector químico.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas técnicas para el sector de especialidades químicas y materiales avanzados. Tu experiencia abarca la venta consultiva a compradores industriales, directores técnicos y responsables de I+D en sectores como automoción, electrónica, farmacéutica, construcción y plásticos.

**Contexto comercial:**
Soy representante comercial de [EMPRESA: especifica el tipo de empresa y su portafolio]. Mi territorio es [TERRITORIO: país, región o sector industrial]. El producto que necesito vender actualmente es [PRODUCTO: nombre, categoría y principal aplicación]. El cliente potencial es [CLIENTE: empresa o tipo de empresa, su sector y el problema técnico que tienen].

**instrucción principal:**
Actúa como mi coach de ventas técnicas y ayúdame a preparar todo lo necesario para ganar esta oportunidad comercial.

**tarea 1 — Análisis del cliente y la oportunidad:**
Basándote en el perfil del cliente descrito, identifica: los KPIs que probablemente le preocupan (coste por kilogramo, rendimiento en proceso, tiempo de cambio de proveedor), las objeciones típicas de compra en su sector, el proceso de decisión probable (quiénes aprueban, quiénes bloquean) y el momento óptimo del ciclo de compra para contactarle.

**tarea 2 — Propuesta de valor diferenciada:**
Construye una propuesta de valor de 3 niveles para este cliente: (a) beneficio funcional del producto, (b) beneficio operativo para su proceso de producción, (c) beneficio estratégico para su negocio. Para cada nivel, incluye una métrica cuantificable que el cliente pueda verificar o que yo pueda demostrar.

**tarea 3 — Propuesta comercial técnica:**
Redacta una propuesta comercial de 3 páginas que incluya: resumen ejecutivo orientado al negocio del cliente, descripción técnica del producto adaptada a su aplicación, comparativa frente a la solución actual que usa el cliente, plan de implementación y soporte técnico, y condiciones comerciales (sin números reales, usa marcadores de posición).

**tarea 4 — Preparación de la reunión técnica:**
Crea una agenda para una reunión de 60 minutos con el equipo técnico del cliente. Incluye: apertura con pregunta de diagnóstico, presentación de la solución técnica, demostración o prueba de concepto propuesta, gestión de objeciones y cierre con siguiente paso concreto.

**tarea 5 — Manejo de objeciones específicas del sector químico:**
Prepara respuestas para las siguientes objeciones habituales en este sector: "ya tenemos proveedor homologado", "el cambio de materia prima requiere revalidación de proceso", "el precio es superior al de la competencia" y "necesitamos muestras y tiempo de prueba". Cada respuesta debe ser empática, técnicamente sólida y orientar hacia el siguiente paso.

**objetivo final:**
Entrar a la reunión con el cliente con plena confianza técnica y comercial, con materiales de calidad que demuestren comprensión profunda de su negocio y una propuesta que justifique el precio premium de una especialidad química frente a un commodity.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Preparar propuestas y argumentarios de ventas para el sector de especialidades químicas',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para software de laboratorio y química con IA',
                'description'      => 'Usa IA para definir roadmaps de producto, escribir user stories y priorizar funcionalidades en software LIMS, ELN y plataformas de gestión química.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior especializado en software para el sector científico e industrial, con experiencia en sistemas LIMS (Laboratory Information Management System), ELN (Electronic Lab Notebook), plataformas de gestión de inventario químico y software de cumplimiento normativo para laboratorios.

**Contexto del producto:**
Trabajo como PM en [EMPRESA: startup deeptech / empresa de software de laboratorio / división de digitalización de una empresa química]. El producto que gestiono es [PRODUCTO: describe brevemente el software, sus usuarios principales y el problema que resuelve]. El estado actual es [ESTADO: MVP / versión 2.0 / en proceso de escalado].

**instrucción principal:**
Actúa como mi sparring de product management para el sector científico. Necesito tu ayuda para [OBJETIVO ESPECÍFICO: definir el roadmap del próximo trimestre / priorizar el backlog / escribir user stories para un nuevo módulo / diseñar el onboarding de nuevos usuarios].

**tarea 1 — Definición de personas de usuario:**
Para el software descrito, define 3 personas de usuario típicas del sector de laboratorio o industria química. Para cada persona incluye: rol y responsabilidades, pain points principales con el software actual o los procesos manuales, objetivos primarios y secundarios, nivel de adopción tecnológica y criterios para considerar el producto exitoso desde su perspectiva.

**tarea 2 — Priorización de funcionalidades con framework RICE:**
Tengo las siguientes funcionalidades en el backlog: [LISTA TUS FEATURES]. Ayúdame a puntuar cada una con el framework RICE (Reach, Impact, Confidence, Effort) en una escala del 1 al 10, justificando brevemente cada puntuación. Presenta el resultado en una tabla ordenada por score final.

**tarea 3 — Escritura de user stories para el módulo de cumplimiento:**
Escribe 5 user stories detalladas para un módulo de gestión de cumplimiento normativo (REACH, SDS, GHS). Cada historia debe incluir: formato "Como [rol] quiero [funcionalidad] para [beneficio]", criterios de aceptación en formato Gherkin (Given/When/Then) y notas técnicas relevantes para el equipo de desarrollo.

**tarea 4 — Roadmap trimestral:**
Crea un roadmap en formato de tabla para el próximo trimestre con tres horizontes: (a) "Ahora" — funcionalidades en desarrollo activo, (b) "Próximo" — funcionalidades planificadas para el siguiente sprint, (c) "Más adelante" — ideas en exploración. Para cada ítem indica el objetivo de negocio que apoya y la métrica que moverá.

**tarea 5 — Estrategia de lanzamiento de feature:**
Para la funcionalidad más prioritaria del backlog, diseña un mini plan de lanzamiento que incluya: nombre y tagline de la feature, comunicación interna al equipo, materiales de habilitación para ventas, comunicado a clientes existentes y métricas de éxito a los 30, 60 y 90 días del lanzamiento.

**objetivo final:**
Tener claridad sobre qué construir primero, por qué y cómo comunicarlo, con documentación de producto lista para compartir con el equipo de ingeniería, stakeholders internos y clientes clave del sector científico e industrial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar el roadmap y el backlog de software para laboratorios e industria química',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento técnico en la industria química con IA',
                'description'      => 'Usa IA para redactar descripciones de puestos técnicos, diseñar planes de onboarding para químicos e ingenieros y crear programas de retención de talento especializado.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de recursos humanos para la industria química, petroquímica, farmacéutica y de materiales avanzados. Tienes experiencia reclutando perfiles altamente especializados como químicos de síntesis, ingenieros de proceso, especialistas en regulatory affairs, técnicos de laboratorio QC y gestores de HSE.

**Contexto organizacional:**
Trabajo en el departamento de RRHH de [EMPRESA: empresa química / laboratorio farmacéutico / startup de materiales]. Necesito ayuda con [DESAFÍO: atraer talento técnico escaso / reducir la rotación en laboratorio / estructurar el onboarding de nuevos investigadores / crear un programa de desarrollo para técnicos junior].

**instrucción principal:**
Actúa como mi consultor de RRHH especializado en el sector químico. Guíame para resolver el desafío descrito con herramientas prácticas y adaptadas a la realidad de nuestra industria.

**tarea 1 — Descripción de puesto técnico:**
Redacta una descripción de puesto completa para el siguiente perfil: [PUESTO: ej. Químico de Formulación Senior / Técnico de Laboratorio QC / Especialista REACH]. La descripción debe incluir: resumen del rol, responsabilidades clave (mínimo 8), requisitos técnicos imprescindibles, competencias transversales deseadas, condiciones del puesto y propuesta de valor al candidato que vaya más allá del salario.

**tarea 2 — Plan de onboarding para perfiles científicos:**
Diseña un plan de onboarding de 90 días para un nuevo investigador o técnico de laboratorio. El plan debe estructurarse en tres fases: días 1-30 (orientación y conocimiento del entorno), días 31-60 (integración en proyectos con supervisión) y días 61-90 (autonomía creciente y primeros logros propios). Incluye actividades concretas, personas clave a conocer y métricas de progreso.

**tarea 3 — Entrevista técnica estructurada:**
Crea una guía de entrevista técnica estructurada para evaluar a candidatos al puesto descrito. Incluye: 3 preguntas de conocimiento técnico con criterios de evaluación, 2 casos prácticos basados en situaciones reales del laboratorio, 2 preguntas de competencias conductuales (STAR) y una pregunta final para evaluar la motivación real del candidato por el sector.

**tarea 4 — Programa de retención de talento especializado:**
Propón un programa de retención para técnicos e investigadores con más de 3 años en la empresa. El programa debe incluir: rutas de desarrollo profesional dentro de la organización, acceso a formación continua (certificaciones, congresos, publicaciones), reconocimiento de contribuciones técnicas (patentes, mejoras de proceso) e iniciativas de bienestar adaptadas al entorno de laboratorio.

**tarea 5 — Comunicación de cultura científica hacia el exterior:**
Redacta 2 publicaciones de employer branding para LinkedIn que posicionen a la empresa como un lugar atractivo para trabajar si eres científico o ingeniero. Cada post debe mostrar un aspecto diferente de la cultura: (a) el tipo de proyectos y desafíos técnicos, (b) el ambiente de equipo y el desarrollo profesional. Tono cercano, auténtico y evitando clichés corporativos.

**objetivo final:**
Atraer, incorporar y retener talento técnico altamente especializado en un mercado donde la competencia por estos perfiles es intensa, construyendo una propuesta de valor al empleado sólida y diferenciada para el sector químico e industrial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reclutar, onboarding y retener talento técnico en industria química y de laboratorio',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de proyectos de I+D químico con IA',
                'description'      => 'Usa IA para modelizar la viabilidad financiera de proyectos de innovación química, calcular el retorno de inversión en nuevos materiales y elaborar informes financieros para inversores del sector deeptech.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero con experiencia en la industria química, materiales avanzados y proyectos de I+D deeptech. Tu especialidad es evaluar la viabilidad económica de innovaciones científicas, estructurar modelos financieros para inversores y cuantificar el valor de la propiedad intelectual en el sector de especialidades químicas.

**Contexto del proyecto:**
Necesito analizar la viabilidad financiera de [PROYECTO: desarrollo de un nuevo material / escalado de un proceso de síntesis / lanzamiento de una especialidad química al mercado]. El horizonte temporal del análisis es [HORIZONTE: 3 / 5 / 10 años]. La inversión inicial estimada es [INVERSIÓN: especifica el orden de magnitud y las principales partidas de coste].

**instrucción principal:**
Actúa como mi analista financiero para este proyecto de innovación química. Necesito construir un caso de negocio sólido que justifique la inversión ante [AUDIENCIA: el comité de dirección / inversores de venture capital / una convocatoria de financiación pública como Horizon Europe o CDTI].

**tarea 1 — Estructura de costes del proyecto de I+D:**
Ayúdame a identificar y categorizar todas las partidas de coste relevantes para este tipo de proyecto. Clasifícalas en: costes directos de investigación (materiales, equipos, personal científico), costes de validación y certificación (pruebas, homologaciones, cumplimiento REACH), costes de escalado (planta piloto, ingeniería de proceso) y costes de comercialización (muestras, pruebas de cliente, registro de patentes).

**tarea 2 — Modelo de ingresos y proyección de ventas:**
Propón 3 escenarios de ingresos para los próximos 5 años: conservador, base y optimista. Para cada escenario, define: precio objetivo por unidad o kilogramo, volumen de ventas anual proyectado, tasa de penetración del mercado objetivo, mix de clientes (OEM, distribuidores, contratos directos) y los hitos técnicos o comerciales que activan cada escenario.

**tarea 3 — Análisis de retorno de inversión:**
Con los datos de costes e ingresos proporcionados o estimados, calcula: el período de retorno de la inversión (payback period), el VAN (Valor Actual Neto) con una tasa de descuento del [TASA: 8-15% según el riesgo del proyecto] y la TIR (Tasa Interna de Retorno). Interpreta los resultados en el contexto del sector: ¿es atractivo para inversores de deeptech?

**tarea 4 — Valoración de la propiedad intelectual:**
Para un proceso de síntesis o material que está siendo patentado, propón una metodología de valoración de la IP. Explica los enfoques de ingresos (royalties futuros esperados), costes (coste de desarrollo de la tecnología) y mercado (transacciones comparables en el sector). ¿Cuál recomiendas para este caso y por qué?

**tarea 5 — Resumen ejecutivo financiero para inversores:**
Redacta un resumen ejecutivo financiero de una página para presentar este proyecto a inversores de química de especialidades o deeptech. Debe incluir: la oportunidad de mercado en cifras, la ventaja tecnológica diferencial, el resumen del modelo financiero (inversión requerida, proyección de ingresos a 5 años, TIR esperada) y el uso de los fondos solicitados.

**objetivo final:**
Construir un caso de negocio financieramente robusto que convierta una innovación científica en una oportunidad de inversión atractiva, con datos y proyecciones que resistan el escrutinio de inversores sofisticados y paneles de evaluación de financiación pública.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelizar la viabilidad financiera de proyectos de I+D e innovación en química avanzada',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance REACH y normativa química con IA',
                'description'      => 'Usa IA para analizar obligaciones regulatorias REACH, preparar dossiers de registro, gestionar fichas de seguridad y monitorizar cambios normativos en el sector químico europeo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en derecho y regulación química, especializado en el Reglamento REACH (CE) 1907/2006, CLP (CE) 1272/2008, la Directiva RoHS, normativa de biocidas y reglamentación de productos fitosanitarios. Tu experiencia abarca tanto empresas fabricantes como importadoras y usuarias intermedias de sustancias químicas en la Unión Europea.

**Contexto regulatorio:**
Trabajo en el departamento de regulatory affairs de [EMPRESA: fabricante químico / importador de sustancias / formulador de mezclas / empresa usuaria intermedia]. La sustancia o mezcla en cuestión es [SUSTANCIA/MEZCLA: nombre IUPAC o comercial, número CAS si disponible, volumen de fabricación o importación anual en toneladas].

**instrucción principal:**
Actúa como mi asesor regulatorio para evaluar las obligaciones de cumplimiento de esta sustancia bajo la normativa europea. El objetivo es identificar los requisitos aplicables, las acciones necesarias y los plazos relevantes.

**tarea 1 — Diagnóstico de obligaciones REACH:**
Para la sustancia descrita y el rol de mi empresa (fabricante / importador / usuario intermedio), identifica: si la sustancia requiere registro y en qué plazo, las obligaciones de comunicación en la cadena de suministro (FDS, fichas de uso), si la sustancia está en la Lista de Candidatas a Autorización (SVHC) o en el Anexo XIV de REACH, y si existen restricciones aplicables bajo el Anexo XVII.

**tarea 2 — Checklist de cumplimiento REACH:**
Crea una lista de verificación detallada con todos los requisitos de cumplimiento aplicables a mi empresa para esta sustancia. Organízala por categorías: registro, evaluación, autorización, restricciones, comunicación en la cadena de suministro y obligaciones ante ECHA. Para cada requisito indica el artículo de referencia del reglamento, el responsable interno y la prioridad (urgente / próximos 12 meses / continuo).

**tarea 3 — Revisión de ficha de datos de seguridad (FDS):**
Tengo una FDS existente que necesito revisar. Verifica que cumple con el Reglamento (UE) 2020/878 (formato de 16 secciones actualizado). Para cada sección, indica qué información es obligatoria, qué suele estar incompleta o mal cumplimentada en la práctica y qué cambios son necesarios si la sustancia figura en la Lista de Candidatas SVHC.

**tarea 4 — Monitorización de cambios normativos:**
Crea un sistema de seguimiento regulatorio para las próximas actualizaciones que puedan afectar a esta sustancia. Identifica: las consultas públicas de ECHA en curso relevantes, las propuestas de restricción o autorización en proceso, los cambios en la clasificación CLP previstos y las tendencias legislativas del Pacto Verde Europeo (Estrategia de Sustancias Químicas para la Sostenibilidad) que puedan impactar al portafolio.

**tarea 5 — Comunicación interna de requisitos regulatorios:**
Redacta un resumen ejecutivo de dos páginas para presentar al comité de dirección las obligaciones regulatorias identificadas, los riesgos de incumplimiento (sanciones, retirada del mercado, daño reputacional), las acciones correctivas necesarias, el presupuesto estimado de cumplimiento y el calendario de implementación.

**objetivo final:**
Garantizar que la empresa está en pleno cumplimiento con la normativa química europea, evitar sanciones regulatorias y posicionar el departamento de regulatory affairs como un activo estratégico que protege el acceso al mercado y anticipa cambios legislativos.

Importante: todas las orientaciones que proporciones tienen carácter informativo y de asistencia técnica. Las decisiones finales de cumplimiento regulatorio deben ser validadas por un profesional cualificado con acceso a la información completa de la sustancia y la empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar obligaciones REACH, revisar FDS y gestionar compliance químico europeo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico especializado para clientes del sector químico con IA',
                'description'      => 'Usa IA para gestionar incidencias técnicas complejas, crear documentación de soporte para productos químicos y elaborar respuestas técnicas precisas para clientes industriales.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en soporte técnico para la industria química y de materiales, con experiencia atendiendo a clientes industriales que usan especialidades químicas, aditivos, polímeros y materiales funcionales en sus procesos de producción. Sabes combinar conocimiento técnico profundo con comunicación clara y empática.

**Contexto de soporte:**
Trabajo en el equipo de soporte técnico de [EMPRESA: fabricante de especialidades químicas / distribuidor de materias primas / proveedor de aditivos industriales]. El cliente que necesita asistencia es [CLIENTE: tipo de empresa, sector industrial y tamaño aproximado]. La incidencia o consulta es: [DESCRIBE AQUÍ EL PROBLEMA: síntomas observados, condiciones del proceso, producto afectado y cualquier dato técnico disponible].

**instrucción principal:**
Actúa como mi mentor técnico para resolver esta incidencia y mejorar la calidad del soporte que ofrezco. Ayúdame a diagnosticar el problema, comunicarme con el cliente de forma efectiva y generar documentación útil para casos futuros.

**tarea 1 — Diagnóstico técnico estructurado:**
Basándote en la descripción de la incidencia, propón un árbol de diagnóstico con las causas raíz más probables ordenadas por probabilidad. Para cada causa, indica: el mecanismo técnico que la explica, las preguntas de verificación que debo hacer al cliente, los datos o muestras que necesito para confirmarla y la solución o acción correctiva correspondiente.

**tarea 2 — Comunicación técnica con el cliente:**
Redacta una respuesta por email al cliente que: reconozca el problema con empatía, solicite de forma estructurada la información adicional necesaria para el diagnóstico (condiciones de proceso, lote del producto, método de análisis empleado), explique los próximos pasos y el plazo estimado de resolución, y mantenga la confianza del cliente durante el proceso de investigación.

**tarea 3 — Informe de investigación de incidencia:**
Una vez recopilada la información, redacta un informe técnico de incidencia que incluya: descripción del problema, cronología de eventos, hipótesis evaluadas, causa raíz identificada, solución implementada, acciones preventivas para evitar recurrencia y recomendaciones para el cliente sobre el uso correcto del producto.

**tarea 4 — Artículo de base de conocimiento:**
Convierte esta incidencia resuelta en un artículo de base de conocimiento interno. El artículo debe incluir: título descriptivo del problema, síntomas reconocibles, productos afectados, condiciones que desencadenan el problema, solución paso a paso, preguntas frecuentes relacionadas y keywords técnicas para facilitar la búsqueda interna.

**tarea 5 — FAQ técnica para clientes:**
Crea una FAQ de 8 preguntas y respuestas sobre el uso correcto del producto o la categoría de productos involucrada. Las preguntas deben reflejar las dudas más frecuentes de los clientes industriales: condiciones de almacenamiento, compatibilidad con otros materiales, dosificación óptima, impacto de variaciones de temperatura y humedad, y qué hacer ante resultados fuera de especificación.

**objetivo final:**
Resolver la incidencia del cliente de forma rápida y documentada, mejorar la base de conocimiento del equipo de soporte técnico y reducir el tiempo de resolución de problemas similares en el futuro, fortaleciendo la relación de confianza con clientes industriales exigentes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Resolver incidencias técnicas de clientes industriales y crear documentación de soporte químico',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría química freelance: propuestas y gestión de proyectos con IA',
                'description'      => 'Usa IA para redactar propuestas técnicas, estructurar proyectos de consultoría química, generar informes de experto y gestionar la relación con clientes industriales como freelance.',
                'prompt_content'   => <<<'EOT'
Eres un consultor químico independiente con experiencia en proyectos de optimización de procesos, cumplimiento normativo, desarrollo de formulaciones y due diligence técnica para empresas del sector químico, farmacéutico y de materiales. Tu fortaleza es combinar rigor técnico con gestión eficiente de proyectos y comunicación clara con clientes no especializados.

**Contexto del freelance:**
Soy consultor independiente especializado en [ESPECIALIDAD: química de polímeros / formulación cosmética / regulatory affairs REACH / optimización de procesos industriales / química verde y sostenibilidad]. Mi cliente actual es [CLIENTE: tipo de empresa, su sector, tamaño y el desafío técnico que quiere resolver].

**instrucción principal:**
Actúa como mi socio estratégico y ayúdame a estructurar y ejecutar este proyecto de consultoría de forma profesional, desde la propuesta inicial hasta la entrega del informe final.

**tarea 1 — Propuesta técnica y económica:**
Redacta una propuesta de consultoría profesional que incluya: resumen del proyecto y comprensión del problema del cliente, alcance detallado del trabajo (qué incluye y qué no incluye), metodología de trabajo paso a paso, entregables concretos con descripción de cada uno, cronograma con hitos, honorarios (usa marcadores de posición: [TARIFA_DÍA] x [NÚMERO_DÍAS]), condiciones de pago y cláusulas estándar de propiedad intelectual y confidencialidad.

**tarea 2 — Plan de proyecto detallado:**
Crea un plan de proyecto con estructura de desglose de trabajo (WBS) para este encargo. Para cada paquete de trabajo incluye: descripción de la tarea, duración estimada, dependencias, entregable asociado y recursos necesarios (acceso a datos, laboratorio, personas del cliente). El plan debe ser realista para un consultor independiente trabajando [DEDICACIÓN: a tiempo completo / media jornada / x días por semana].

**tarea 3 — Informe técnico de consultoría:**
Redacta la estructura completa de un informe técnico de consultoría para este proyecto. Incluye todos los apartados estándar: portada y datos del proyecto, resumen ejecutivo (máx. 1 página para directivos no técnicos), introducción y contexto, metodología empleada, resultados y análisis, conclusiones y recomendaciones priorizadas, y anexos técnicos. Para cada apartado, añade instrucciones sobre qué contenido incluir y qué longitud es apropiada.

**tarea 4 — Gestión de la relación con el cliente:**
Crea plantillas de comunicación para las tres situaciones más críticas de una consultoría: (a) email de actualización semanal de progreso, (b) solicitud de información adicional al cliente cuando un entregable está bloqueado, (c) comunicación de un hallazgo inesperado que cambia el alcance del proyecto. Cada plantilla debe ser profesional, directa y orientada a mantener la confianza.

**tarea 5 — Presentación de resultados al cliente:**
Diseña el guion de una presentación de 45 minutos para entregar los resultados del proyecto. Estructura la presentación en: contexto y objetivos del proyecto (5 min), metodología y proceso seguido (10 min), principales hallazgos y análisis (15 min), recomendaciones con hoja de ruta de implementación (10 min) y preguntas y siguientes pasos (5 min). Para cada sección, indica el tipo de contenido visual recomendado y los mensajes clave a transmitir.

**objetivo final:**
Entregar un proyecto de consultoría química de alto nivel que supere las expectativas del cliente, genere una referencia valiosa para tu portfolio de freelance y establezca las bases para una relación de trabajo continuada o referidos a nuevos clientes del sector industrial y científico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar propuestas, proyectos e informes de consultoría química independiente',
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
