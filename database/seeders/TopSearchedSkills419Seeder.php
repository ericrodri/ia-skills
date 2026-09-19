<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills419Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Identificación y análisis de influencers con IA para campañas de marca',
                'description'       => 'Usa IA para identificar los influencers más relevantes para tu marca, analizar su audiencia y predecir el ROI de una colaboración antes de contratarlos.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en marketing de influencers con amplia experiencia en la identificación, evaluación y gestión de colaboraciones con creadores de contenido. Conoces en profundidad las métricas clave del sector, las diferencias entre tipos de influencers (nano, micro, macro, mega) y cómo evaluar la autenticidad de una audiencia.

**Mi contexto:**
Soy un profesional de marketing que necesita identificar y analizar influencers para una campaña de colaboración de marca. Quiero usar IA para hacer este proceso más eficiente y basado en datos, reduciendo el tiempo de investigación manual y mejorando la calidad de mis selecciones.

**tarea: guíame en la estrategia de identificación y análisis de influencers con IA**

1. **Definición del perfil de influencer ideal**: Antes de buscar, ayúdame a definir el perfil ideal para mi marca. Haré preguntas sobre mi producto/servicio, público objetivo, valores de marca y objetivos de campaña. Basándome en mis respuestas, genera un perfil detallado del influencer ideal con:
   - Rango de seguidores óptimo y por qué
   - Nichos de contenido alineados con mi marca
   - Demografía de audiencia objetivo
   - Valores y estilo de contenido compatibles
   - Plataformas prioritarias (Instagram, TikTok, YouTube, etc.)

2. **Framework de evaluación con IA**: Dame un framework completo para evaluar a un influencer usando IA. Para cada candidato, explica cómo usar IA para analizar:
   - Tasa de engagement real vs. esperada para su tamaño de audiencia
   - Calidad y autenticidad de los comentarios (identificar comentarios genéricos vs. conversaciones reales)
   - Coherencia entre los valores del influencer y los de la marca
   - Historial de colaboraciones previas y éxito de estas
   - Análisis de sentimiento de la audiencia hacia el influencer

3. **Detección de fraude y audiencias falsas**: Enséñame a usar IA para identificar señales de alerta en un perfil de influencer: crecimiento súbito e inexplicable de seguidores, engagement inconsistente, comentarios repetitivos o genéricos, desproporción entre seguidores y alcance real. Dame prompts específicos para este análisis.

4. **Generación de brief creativo con IA**: Una vez seleccionado el influencer, dame un sistema para generar el brief creativo de la colaboración con IA. El brief debe incluir: objetivos de la campaña, mensajes clave a transmitir, libertad creativa vs. requisitos obligatorios, formatos de contenido, fechas clave y métricas de éxito.

5. **Predicción de ROI con IA**: ¿Cómo usar datos disponibles (engagement rate, CPM promedio del sector, conversión estimada por tipo de contenido) para que la IA me ayude a estimar el ROI esperado de una colaboración? Dame un modelo de cálculo que pueda usar como referencia en las negociaciones.

6. **Gestión de la relación con influencers**: ¿Cómo usar IA para personalizar las comunicaciones con cada influencer (outreach inicial, negociación, seguimiento)? Dame plantillas de prompts para cada etapa de la comunicación que suenen auténticas y no automatizadas.

7. **Análisis post-campaña**: ¿Qué métricas revisar después de una campaña con influencers y cómo usar IA para extraer aprendizajes y mejorar la selección en futuras campañas? Dame un framework de análisis de resultados.

El objetivo es construir un proceso de selección de influencers más riguroso, eficiente y basado en datos que mejore el ROI de mis inversiones en marketing de influencers.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Identificación y evaluación de influencers para campañas de marketing',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de plataformas de gestión de UGC con IA',
                'description'       => 'Diseña sistemas para recopilar, moderar y distribuir contenido generado por usuarios (UGC) usando IA, integrando moderación automática y clasificación inteligente.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software especializado en plataformas de contenido y sistemas de moderación automatizada. Tienes experiencia en el diseño de pipelines de procesamiento de UGC (User Generated Content) que combinan moderación automática por IA con revisión humana selectiva.

**Mi contexto:**
Soy un desarrollador que necesita diseñar o mejorar un sistema de gestión de contenido generado por usuarios. La plataforma recibirá fotos, videos y textos de usuarios y necesita: moderar el contenido de forma eficiente, clasificarlo por categorías relevantes, identificar el contenido de mayor calidad para destacarlo y distribuirlo en diferentes puntos de la experiencia del producto.

**objetivo: diseñar la arquitectura técnica del sistema de UGC con IA**

1. **Arquitectura del pipeline de moderación**: Diseña la arquitectura técnica de un pipeline de moderación de UGC que use IA en múltiples capas:
   - Capa 1: Moderación automática de contenido inapropiado (violencia, desnudez, spam, hate speech)
   - Capa 2: Clasificación temática y por categorías relevantes para el negocio
   - Capa 3: Puntuación de calidad del contenido (resolución, composición, relevancia)
   - Capa 4: Detección de contenido duplicado o muy similar
   - Capa 5: Revisión humana para casos ambiguos o de alto impacto

2. **Selección de APIs y modelos de IA**: ¿Qué APIs y modelos de IA son más adecuados para cada capa del pipeline? Compara opciones para: moderación de imágenes (AWS Rekognition, Google Vision AI, Azure Content Moderator), análisis de texto (para descripciones y comentarios), extracción de metadatos visuales y generación de tags automáticos.

3. **Diseño del sistema de colas**: ¿Cómo diseñar el sistema de colas y workers para procesar el UGC de forma eficiente y escalable? Considera: procesamiento asíncrono, priorización de contenido, manejo de picos de carga, reintentos en caso de error y monitorización del estado del pipeline.

4. **Schema de base de datos para UGC**: Diseña el schema de base de datos para almacenar UGC con todos sus metadatos: estado de moderación, scores de calidad por dimensión, tags automáticos, datos del creador, métricas de engagement, historial de moderación. Incluye consideraciones de rendimiento e indexación.

5. **Sistema de aprendizaje continuo**: ¿Cómo diseñar el sistema para que aprenda de las decisiones de moderación humana y mejore la precisión de la IA a lo largo del tiempo? ¿Cómo gestionar los datos de entrenamiento y cuándo reentrenar los modelos?

6. **API para consumo del UGC**: Diseña la API que expondrá el UGC moderado y clasificado al resto de la aplicación. ¿Qué endpoints son necesarios? ¿Cómo implementar filtros por categoría, calidad, fecha? ¿Cómo gestionar la personalización del UGC mostrado por usuario?

7. **Monitorización y alertas**: ¿Qué métricas de sistema y de negocio monitorizar en el pipeline de UGC? ¿Cómo detectar anomalías (aumento súbito de contenido inapropiado, caída en la tasa de aprobación, degradación de la calidad media)? Dame un dashboard de métricas clave.

El resultado debe ser una arquitectura escalable, cost-effective y mantenible que permita gestionar grandes volúmenes de UGC con alta calidad de moderación y clasificación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de sistemas de moderación y gestión de UGC con IA',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Creación de briefs creativos para influencers con IA',
                'description'       => 'Genera briefs creativos detallados y personalizados para colaboraciones con influencers usando IA, que equilibren las directrices de marca con la libertad creativa del creador.',
                'prompt_content'    => <<<'EOT'
Eres un director creativo con experiencia en campañas de marketing de influencers. Sabes que el brief creativo es el documento más importante de cualquier colaboración: un brief demasiado restrictivo ahoga la creatividad del influencer y produce contenido artificial; uno demasiado vago resulta en contenido fuera de marca. El equilibrio es un arte.

**Mi contexto:**
Soy un diseñador o director creativo que debe preparar briefs para colaboraciones con influencers. Necesito que el brief comunique claramente la visión creativa de la marca, los requisitos obligatorios de la campaña y el espacio de libertad creativa del influencer, de forma que el resultado sea contenido auténtico y alineado con la marca.

**tarea: sistema de creación de briefs creativos para influencers con IA**

1. **Estructura del brief perfecto**: Define la estructura ideal de un brief creativo para influencers que incluya todas las secciones necesarias:
   - Overview de la campaña y objetivos
   - Contexto de marca y valores a transmitir
   - Descripción del producto/servicio a comunicar
   - Mensajes clave obligatorios vs. opcionales
   - Dirección creativa y referencias visuales
   - Formatos de contenido requeridos (stories, reels, post, video, etc.)
   - Requisitos técnicos (hashtags, menciones, disclosure legal)
   - Timeline y fechas de entrega
   - Proceso de aprobación
   Dame la plantilla completa con instrucciones para rellenar cada sección.

2. **Adaptación del brief por tipo de influencer**: ¿Cómo adaptar el brief según el tipo de influencer? Dame pautas para:
   - Nano-influencers (comunidades pequeñas y muy fieles): más libertad, relación más personal
   - Micro-influencers (10K-100K): equilibrio entre directrices de marca y autenticidad
   - Macro-influencers (100K+): más estructura, proceso de aprobación formal
   - Celebrities: múltiples stakeholders, equipo de representación, procesos más rígidos

3. **Generación de referencias visuales con IA**: ¿Cómo usar IA para generar referencias visuales que inspiren al influencer sin coartar su creatividad? ¿Qué tipo de moodboard puedo construir con IA? ¿Cómo describir la estética deseada en términos que un influencer pueda interpretar libremente?

4. **Prompts para diferentes categorías de campaña**: Dame prompts específicos para generar briefs de campaña en diferentes categorías:
   - Lanzamiento de producto
   - Campaña de lifestyle y aspiración
   - Tutorial o demostración de uso
   - Campaña de temporada (verano, Navidad, etc.)
   - UGC para reutilizar en canales de la marca

5. **Comunicación del brief al influencer**: ¿Cómo presentar el brief de forma que el influencer se sienta inspirado y no limitado? Dame tips de comunicación y un email de presentación del brief que establezca una relación colaborativa desde el inicio.

6. **Proceso de revisión de propuestas creativas**: Una vez el influencer propone su concepto creativo, ¿cómo usar IA para evaluar si se alinea con el brief? ¿Cómo dar feedback constructivo que mejore el concepto sin destruir la voz auténtica del influencer?

7. **Archivo de briefs y aprendizaje**: ¿Cómo documentar los briefs y sus resultados para mejorar los futuros? ¿Qué información del resultado de cada colaboración debo capturar para perfeccionar el proceso de briefing? Dame un sistema de archivo y aprendizaje.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Briefs creativos para colaboraciones con influencers',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Social selling con influencers internos e IA para ventas B2B',
                'description'       => 'Convierte a tu equipo de ventas en influencers de LinkedIn usando IA para crear contenido personal auténtico que genere leads y acelere el ciclo de ventas B2B.',
                'prompt_content'    => <<<'EOT'
Eres un experto en social selling B2B y en la estrategia de Employee Advocacy o influencers internos en LinkedIn. Entiendes que en ventas B2B modernas, los compradores investigan a las personas antes de hablar con ellas, y que un vendedor con presencia de autoridad en LinkedIn cierra más deals y con ciclos más cortos.

**Mi contexto:**
Soy un profesional de ventas B2B que quiere usar LinkedIn y otras redes sociales como canal de generación de leads y construcción de relaciones con prospectos. Quiero crear contenido profesional auténtico que posicione mi expertise, atraiga a decisores de mi target y facilite las conversaciones de ventas.

**objetivo: sistema de social selling con apoyo de IA**

1. **Auditoría de mi perfil como vendedor-influencer**: Ayúdame a evaluar mi perfil de LinkedIn actual para identificar qué optimizar. ¿Qué elementos del perfil son más importantes para un vendedor B2B? ¿Cómo debe estar redactado el titular, el extracto, la experiencia? ¿Qué hace que un perfil sea magnético para decisores del sector?

2. **Estrategia de contenido para vendedor B2B**: Diseña mi estrategia de contenido en LinkedIn como vendedor:
   - ¿Con qué frecuencia publicar?
   - ¿Qué tipos de contenido generan más engagement con decisores B2B?
   - ¿Cómo equilibrar contenido de valor, contenido personal y contenido relacionado con mi solución?
   - ¿Qué formatos funcionan mejor (texto largo, carruseles, videos cortos)?

3. **Generación de ideas de contenido con IA**: Dame un sistema para generar ideas de contenido semanalmente usando IA. ¿Cómo describir mi expertise, mi sector y mis prospectos típicos para que la IA genere ideas de posts relevantes? Dame un prompt que pueda usar cada semana para generar 5-10 ideas de contenido.

4. **Redacción de posts con voz propia**: ¿Cómo usar IA para redactar posts que suenen a mí, no a una máquina? Dame un proceso de:
   - Definición de mi voz y estilo personal
   - Creación de un "prompt de estilo" que entrene a la IA en mi forma de escribir
   - Flujo de trabajo para borrador con IA y edición personal

5. **Engagement estratégico en LinkedIn**: ¿Cómo usar IA para identificar publicaciones de prospectos en las que participar de forma auténtica y valiosa? ¿Cómo redactar comentarios que aporten valor y me posicionen como experto sin parecer spam?

6. **Conversión del contenido en conversaciones de ventas**: ¿Cómo convertir el engagement generado por mi contenido en conversaciones de ventas? ¿Cuándo y cómo enviar un DM a alguien que ha interactuado con mi contenido? Dame scripts de DM que se sientan naturales y no invasivos.

7. **Medición del impacto del social selling**: ¿Qué métricas de LinkedIn debo seguir para medir el impacto de mi estrategia de social selling en mi pipeline? ¿Cómo atribuir leads y deals a mi actividad de contenido? Dame un dashboard de métricas simple.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Social selling con contenido de influencer para profesionales de ventas B2B',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Integración de UGC en el ciclo de desarrollo de producto con IA',
                'description'       => 'Usa IA para analizar el contenido generado por usuarios como fuente de insights de producto, identificar pain points emergentes y priorizar mejoras del roadmap.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager con experiencia en metodologías de product discovery centradas en el usuario. Entiendes que el UGC (reseñas, comentarios en redes, foros de usuarios, videos de unboxing y tutoriales de clientes) es una fuente extraordinariamente rica de insights de producto que muchos equipos desperdician por falta de un sistema de análisis sistemático.

**Mi contexto como PM:**
Gestiono un producto digital o físico y quiero usar el contenido que generan mis usuarios (reseñas en app stores, comentarios en redes sociales, posts de clientes, videos de uso del producto) como fuente de insights para mi roadmap. Actualmente este análisis es manual y poco sistemático.

**objetivo: sistema de análisis de UGC para product discovery con IA**

1. **Inventario de fuentes de UGC relevantes**: Ayúdame a mapear todas las fuentes de UGC relevantes para mi producto:
   - Reseñas en app stores (iOS/Android)
   - Reseñas en plataformas de e-commerce
   - Menciones en redes sociales (Twitter/X, Instagram, TikTok)
   - Posts en comunidades (Reddit, foros de sector)
   - Videos de usuarios en YouTube y TikTok
   - Comentarios en el chat de soporte
   ¿Cuáles son prioritarias? ¿Cómo priorizarlas según tipo de producto?

2. **Framework de análisis de UGC con IA**: Diseña un framework para analizar UGC con IA que permita extraer insights estructurados:
   - Categorización de feedback por área funcional (onboarding, feature X, rendimiento, precio, etc.)
   - Análisis de sentimiento por categoría
   - Identificación de pain points más mencionados
   - Detección de features solicitadas por los usuarios
   - Comparación con el UGC de la competencia
   Dame los prompts específicos para cada tipo de análisis.

3. **Procesamiento de reseñas en masa**: ¿Cómo procesar cientos de reseñas de forma eficiente con IA? Dame un proceso para:
   - Preparar el lote de reseñas para el análisis
   - Prompt para análisis temático de múltiples reseñas
   - Generación de un resumen ejecutivo de los patrones encontrados
   - Identificación de las 5-10 citas más representativas de cada tema

4. **Detección de señales emergentes**: ¿Cómo usar IA para detectar tendencias emergentes en el UGC antes de que se conviertan en problemas o en demandas masivas? ¿Qué señales de alerta temprana buscar? ¿Con qué frecuencia analizar?

5. **De insights de UGC a decisiones de roadmap**: ¿Cómo conectar los insights del análisis de UGC con el proceso de priorización del roadmap? Dame un proceso para traducir "los usuarios se quejan de X en muchas reseñas" en una user story, una estimación de impacto y una propuesta de solución que pueda llevar al equipo.

6. **Comunicación de insights con stakeholders**: ¿Cómo presentar los insights del análisis de UGC a stakeholders de forma convincente? ¿Cómo usar las citas de usuarios como evidencia en las decisiones de producto? Dame un formato de informe de UGC para stakeholders.

7. **Ritmo de análisis de UGC**: ¿Con qué frecuencia debo analizar el UGC? ¿Qué hacer en la revisión semanal vs. mensual vs. trimestral? Dame un calendario de análisis de UGC integrado en mi ritual de trabajo como PM.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Análisis de UGC para product discovery y roadmap',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer branding con influencers internos e IA para atraer talento',
                'description'       => 'Convierte a tus empleados en embajadores auténticos de la cultura de empresa usando IA para generar contenido de employer branding que atraiga talento de calidad.',
                'prompt_content'    => <<<'EOT'
Eres un experto en employer branding y en programas de Employee Advocacy. Sabes que los candidatos de talento confían más en las opiniones de empleados actuales que en los mensajes corporativos oficiales. Un programa bien diseñado de influencers internos puede transformar radicalmente la capacidad de atracción de talento de una organización, especialmente en sectores competitivos.

**Mi contexto en RRHH:**
Soy un profesional de RRHH o Talent Acquisition que quiere construir o mejorar el employer branding de mi empresa. Quiero activar a empleados como embajadores auténticos en redes sociales, especialmente LinkedIn, para atraer candidatos de calidad que se identifiquen con nuestra cultura.

**objetivo: programa de influencers internos para employer branding con IA**

1. **Diagnóstico de la marca empleadora actual**: ¿Cómo evaluar el estado actual del employer branding de mi empresa? ¿Qué fuentes de información analizar (Glassdoor, LinkedIn, redes sociales, encuestas de empleados)? Dame un framework de diagnóstico y un prompt de IA para analizar las menciones de la empresa como empleador.

2. **Identificación y activación de embajadores internos**: ¿Cómo identificar qué empleados tienen mayor potencial y motivación para ser embajadores de marca? ¿Qué perfiles de empleado son más creíbles para diferentes segmentos de candidatos? ¿Cómo presentarles el programa para que se sumen voluntariamente?

3. **Sistema de contenido de employer branding con IA**: Diseña un sistema para generar contenido de employer branding auténtico con apoyo de IA:
   - Formato de entrevistas cortas a empleados que la IA puede convertir en posts de LinkedIn
   - Prompts para que los empleados compartan sus experiencias en formatos estructurados
   - Calendario editorial de employer branding con temas clave (cultura, proyectos, crecimiento, diversidad)
   - Prompts para adaptar el mismo contenido a diferentes formatos (post de texto, carrusel, video corto)

4. **Guía de estilo para embajadores**: ¿Qué directrices dar a los empleados para que su contenido sea auténtico pero alineado con la marca? ¿Cómo equilibrar la libertad expresiva del empleado con las necesidades de la empresa? Dame una guía de estilo de employer branding concisa que pueda distribuir a los embajadores.

5. **Gestión del UGC de employer branding**: ¿Cómo recopilar, aprobar y redistribuir el contenido que generan los empleados embajadores? ¿Qué proceso de moderación ligero garantiza que el contenido es apropiado sin volverse burocrático?

6. **Métricas de employer branding**: ¿Qué KPIs medir para evaluar el impacto del programa de influencers internos? Considera: alcance de las publicaciones, engagement, visitas al perfil de empresa, aplicaciones de empleo recibidas, calidad de los candidatos. Dame un dashboard de métricas mensual.

7. **Conexión entre employer branding y atracción de talento**: ¿Cómo conectar el contenido de employer branding con los procesos de reclutamiento activos? ¿Cómo usar el programa para acelerar la cobertura de posiciones específicas difíciles de cubrir? Dame estrategias para convertir el alcance orgánico en candidaturas concretas.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Employer branding con influencers internos para atracción de talento',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Medición del ROI de campañas de influencers con IA para CFOs',
                'description'       => 'Aplica modelos de atribución y análisis financiero con IA para medir el retorno real de las inversiones en marketing de influencers y justificarlo ante la dirección financiera.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero especializado en medición del ROI de inversiones en marketing. Entiendes la tensión entre los equipos de marketing que defienden el valor intangible de las campañas de influencers y la dirección financiera que exige números concretos y comparables. Tu especialidad es construir puentes entre ambas visiones con modelos de atribución rigurosos.

**Mi contexto:**
Soy un profesional de finanzas o un CMO que necesita medir y reportar el ROI de las inversiones en marketing de influencers. El mayor desafío es la atribución: ¿cómo saber cuántas ventas generó realmente un influencer? ¿Cómo comparar el coste-eficiencia de influencers vs. otros canales de marketing?

**objetivo: framework de medición del ROI de marketing de influencers con IA**

1. **Modelo de atribución para influencer marketing**: Explica los principales modelos de atribución aplicables al marketing de influencers (last click, first click, lineal, time decay, basado en datos) y sus limitaciones específicas para este canal. ¿Cuál recomiendas según el tipo de campaña y objetivo?

2. **Métricas financieras clave por objetivo de campaña**: Define las métricas financieras más adecuadas según el objetivo de la campaña:
   - Campañas de awareness: CPM, coste por alcance, valor equivalente de publicidad
   - Campañas de consideration: CPE (coste por engagement), tráfico generado, coste por visita
   - Campañas de conversión: CPA, ROAS, LTV de clientes captados vía influencer
   Dame fórmulas concretas para calcular cada métrica.

3. **Análisis de coste-eficiencia entre influencers**: ¿Cómo comparar el desempeño financiero de diferentes influencers en una misma campaña? Dame un modelo de scoring financiero que combine: coste de la colaboración, alcance, engagement, conversiones atribuidas y coste por resultado. Incluye el prompt de IA para generar el análisis comparativo.

4. **Benchmarks de industria**: ¿Cuáles son los benchmarks de referencia de ROI en marketing de influencers por sector, tipo de influencer y objetivo de campaña? ¿Cómo usar IA para contextualizar mis resultados frente a estos benchmarks?

5. **Presentación del ROI a la dirección financiera**: ¿Cómo traducir los datos de una campaña de influencers en un lenguaje financiero que convenza a un CFO? Dame la estructura de un informe de ROI de marketing de influencers para la alta dirección, con los elementos que no pueden faltar y ejemplos de cómo presentar los datos.

6. **Modelo de presupuestación de influencer marketing**: ¿Cómo definir el presupuesto óptimo para marketing de influencers como porcentaje del presupuesto total de marketing? ¿Cómo distribuirlo entre tipos de influencers? Dame un modelo de presupuestación que justifique las decisiones con datos financieros.

7. **Análisis post-campaña con IA**: Dame un proceso de análisis post-campaña financiero usando IA que cubra: comparación de resultados reales vs. previsión, análisis de desviaciones, extracción de aprendizajes para optimizar futuras inversiones y recomendación de continuidad o ajuste de la estrategia.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Medición del ROI financiero de inversiones en marketing de influencers',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos y compliance legal para campañas de influencers con IA',
                'description'       => 'Usa IA para revisar contratos de influencers, garantizar el cumplimiento de la normativa de publicidad encubierta y gestionar los riesgos legales de las colaboraciones.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho de la publicidad, propiedad intelectual y marketing digital. Tienes experiencia en el marco legal de las colaboraciones con influencers en Europa y España, incluyendo la Ley General de Publicidad, la Ley de Competencia Desleal, el GDPR y las directrices de la CNMC sobre publicidad encubierta.

**Mi contexto legal:**
Soy un abogado o responsable legal que asesora a marcas o a influencers en colaboraciones comerciales. Necesito garantizar que los contratos son sólidos, que el contenido cumple con la normativa de transparencia publicitaria y que la marca está protegida frente a los riesgos de una colaboración con un creador de contenido.

**objetivo: sistema legal para campañas de influencers con IA**

1. **Normativa aplicable en España y Europa**: Resume el marco regulatorio aplicable a las colaboraciones con influencers en España y la UE:
   - Obligaciones de disclosure (identificación de contenido publicitario)
   - Directrices de la CNMC sobre comunicaciones comerciales en redes sociales
   - Código de conducta de Autocontrol para influencers
   - Regulaciones de sectores específicos (alimentación, salud, finanzas, productos para menores)
   - GDPR en el tratamiento de datos de audiencias
   Dame los requisitos concretos de cumplimiento en cada área.

2. **Elementos esenciales del contrato de influencer**: Diseña la estructura de un contrato de colaboración con influencer que cubra todos los aspectos críticos:
   - Definición del alcance de la colaboración y entregables
   - Derechos de uso y propiedad intelectual del contenido
   - Cláusulas de exclusividad y no competencia
   - Obligaciones de disclosure y publicidad transparente
   - Proceso de aprobación del contenido
   - Consecuencias del incumplimiento
   - Terminación anticipada y sus condiciones
   Dame una checklist de cláusulas que no pueden faltar.

3. **Revisión de contratos con IA**: ¿Cómo usar IA para revisar eficientemente un contrato de colaboración con influencer? ¿Qué aspectos pedir a la IA que analice? ¿Cuáles son las cláusulas más problemáticas que la IA puede ayudar a detectar? Dame los prompts de revisión específicos para este tipo de contrato.

4. **Gestión del riesgo reputacional**: ¿Qué cláusulas incluir en el contrato para proteger a la marca de comportamientos del influencer que puedan ser perjudiciales? (polémicas, declaraciones inapropiadas, cambios de imagen del influencer). ¿Qué es una cláusula morality clause y cuándo incluirla?

5. **Compliance de contenido publicitario**: ¿Cómo diseñar un proceso de revisión legal del contenido generado por el influencer antes de su publicación? ¿Qué elementos verificar? ¿Cómo usar IA para revisar borradores de contenido en busca de afirmaciones problemáticas o claims que requieren sustanciación?

6. **Gestión de incidencias y crisis legal**: ¿Qué hacer cuando un influencer publica contenido que viola el contrato o causa daño reputacional a la marca? Dame un protocolo de respuesta legal escalonado: desde la solicitud de corrección hasta la acción legal formal.

7. **Documentación y archivo legal**: ¿Qué documentación mantener de cada colaboración con influencers para proteger a la marca en caso de reclamación? ¿Cómo organizar el archivo de contratos, contenidos aprobados y comunicaciones? Dame un sistema de documentación legal de campañas.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Marco legal y contractual para campañas de marketing de influencers',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de reseñas y UGC negativo en atención al cliente con IA',
                'description'       => 'Implementa un sistema de respuesta a reseñas negativas y contenido crítico de usuarios con IA que convierta las quejas públicas en oportunidades de fidelización.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión de la reputación online y en estrategias de respuesta a feedback negativo de clientes. Entiendes que una reseña negativa bien gestionada puede ser más valiosa que diez positivas: demuestra la autenticidad de la marca, la capacidad de respuesta y el compromiso con la mejora continua.

**Mi contexto en Customer Success:**
Gestiono la reputación online de una empresa a través de las respuestas a reseñas en Google, Trustpilot, App Store, redes sociales y plataformas de e-commerce. El volumen de reseñas hace imposible responder manualmente a todas con la calidad y personalización que quisiera.

**objetivo: sistema de gestión de UGC negativo y reseñas con IA**

1. **Clasificación del UGC negativo**: Diseña un sistema de clasificación del contenido negativo de usuarios que permita priorizar las respuestas:
   - Crítica constructiva con queja legítima
   - Queja por problema técnico o de servicio
   - Reseña de cliente insatisfecho con expectativas no cumplidas
   - Comentario de troll o malintencionado
   - Crisis reputacional grave
   Dame los criterios de clasificación y el nivel de urgencia y recursos que requiere cada tipo.

2. **Framework de respuesta empática con IA**: Diseña un framework de respuesta a reseñas negativas que siga estos principios: reconocimiento, empatía, acción y cierre. Dame los prompts de IA para generar respuestas que:
   - Nunca sean defensivas ni culpen al cliente
   - Reconozcan la experiencia del cliente sin admitir responsabilidad legal innecesariamente
   - Ofrezcan una solución concreta o un canal de contacto privado
   - Mantengan la voz y el tono de la marca

3. **Personalización masiva de respuestas**: ¿Cómo usar IA para generar respuestas que parezcan personalizadas aunque se gestionen en volumen? ¿Qué elementos de cada reseña debo incorporar en el prompt para evitar respuestas genéricas? Dame un flujo de trabajo de respuesta a reseñas eficiente.

4. **Gestión de crisis reputacional en redes sociales**: Cuando un contenido negativo de un usuario se viraliza o genera mucho engagement negativo, ¿cuál es el protocolo de respuesta? ¿Cómo usar IA para: evaluar el alcance de la crisis, redactar un comunicado de respuesta, monitorizar la evolución y decidir si es necesario escalar internamente?

5. **Conversión de quejas en oportunidades**: ¿Cómo convertir una reseña negativa en una oportunidad de fidelización? Dame estrategias y ejemplos de respuestas que han logrado recuperar a un cliente insatisfecho. ¿Cuándo ofrecer compensación y cómo hacerlo públicamente vs. en privado?

6. **Análisis de patrones en el feedback negativo**: ¿Cómo usar IA para analizar el conjunto de reseñas negativas e identificar los problemas sistémicos que las generan? ¿Cómo presentar estos insights al equipo de producto o de operaciones para impulsar mejoras que reduzcan el volumen futuro de quejas?

7. **Métricas de gestión de reputación**: ¿Qué KPIs seguir para medir la efectividad de mi gestión de reseñas? Considera: rating medio, evolución temporal, tasa de respuesta, tiempo medio de respuesta, reseñas positivas generadas tras resolución de queja. Dame un dashboard de reputación online semanal.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestión de reseñas negativas y reputación online con IA',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión de clientes de marketing de influencers como freelancer con IA',
                'description'       => 'Usa IA para ofrecer servicios profesionales de marketing de influencers como freelancer: desde la propuesta comercial hasta los informes de resultados para tus clientes.',
                'prompt_content'    => <<<'EOT'
Eres un mentor de negocios para freelancers especializados en marketing digital, con experiencia en la gestión de clientes de marketing de influencers. Entiendes que los freelancers de este sector enfrentan el reto de competir con agencias más grandes mientras mantienen la agilidad y el trato personalizado que justifica su propuesta de valor.

**Mi contexto como freelancer:**
Soy un freelancer o consultor independiente especializado en marketing de influencers. Mis servicios incluyen: estrategia de influencer marketing, identificación y gestión de influencers, coordinación de campañas y medición de resultados. Quiero usar IA para ofrecer un servicio de mayor calidad, escalar mi capacidad sin contratar equipo y posicionarme mejor frente a agencias.

**objetivo: sistema de negocio de influencer marketing freelance con IA**

1. **Propuestas comerciales ganadoras con IA**: Dame un sistema para crear propuestas comerciales de servicios de influencer marketing que vendan:
   - Estructura de la propuesta: problema del cliente, solución propuesta, metodología, equipo (tú + IA), entregables, inversión, casos de éxito
   - Cómo usar IA para personalizar cada propuesta con datos del cliente potencial
   - Cómo presentar el uso de IA como ventaja competitiva, no como señal de que se trabaja menos
   - Cómo fijar y defender tus honorarios frente a las objeciones de precio

2. **Proceso de onboarding de clientes**: Diseña un proceso de onboarding de nuevos clientes que use IA para:
   - Generar el cuestionario de descubrimiento inicial
   - Sintetizar la información recopilada en un brief estratégico
   - Crear el plan de influencer marketing personalizado para cada cliente
   - Establecer las expectativas y los KPIs desde el inicio

3. **Gestión operativa de campañas con IA**: ¿Cómo usar IA para gestionar de forma eficiente múltiples campañas de influencers para diferentes clientes? Dame un sistema de gestión de proyectos que incluya:
   - Seguimiento del estado de cada campaña y cada influencer
   - Comunicaciones con influencers (outreach, briefing, seguimiento)
   - Comunicaciones con clientes (updates semanales, alertas, solicitudes de aprobación)
   - Checklist de control de calidad de cada pieza de contenido

4. **Informes de resultados profesionales con IA**: ¿Cómo generar informes de resultados de campañas que impresionen a los clientes y justifiquen tu fee? Dame un formato de informe mensual de campaña de influencers y prompts de IA para:
   - Recopilar y organizar las métricas clave
   - Generar la narrativa de resultados en tono ejecutivo
   - Crear visualizaciones de datos simples con texto
   - Redactar las conclusiones y recomendaciones para el mes siguiente

5. **Posicionamiento y captación de clientes**: ¿Cómo posicionarte como freelancer experto en influencer marketing y atraer clientes de calidad? ¿Cómo usar IA para crear contenido de pensamiento de liderazgo en tu área de especialización? Dame un plan de marketing personal para freelancers de este sector.

6. **Precios y modelo de negocio**: ¿Cuáles son los modelos de pricing más habituales en servicios de influencer marketing (fee mensual de gestión, success fee, fee por proyecto, porcentaje del budget de influencers)? ¿Cuándo usar cada modelo? ¿Cómo calcular tus tarifas para ser competitivo y rentable?

7. **Escalado del negocio freelance con IA**: ¿Cómo usar IA para asumir más clientes sin sacrificar la calidad del servicio? ¿Cuándo es el momento de crear una agencia o asociarte con otros freelancers? Dame un roadmap de crecimiento del negocio freelance de influencer marketing.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Servicios freelance de marketing de influencers con IA',
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
