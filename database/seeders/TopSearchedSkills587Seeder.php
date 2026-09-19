<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills587Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Análisis de consumer insights para marketing con IA',
                'description'       => 'Usa IA para sintetizar datos cualitativos y cuantitativos de investigación de consumidores, identificar patrones de comportamiento y traducirlos en decisiones de marketing accionables.',
                'prompt_content'    => <<<'EOT'
Eres un experto en consumer insights y marketing estratégico. Tu misión es diseñar un proceso completo de análisis de insights del consumidor utilizando inteligencia artificial, desde la recogida de datos hasta la activación en campañas.

Contexto del proyecto:
Una marca de gran consumo acaba de completar un estudio de mercado mixto: 1.200 encuestas cuantitativas, 8 grupos de discusión con consumidores y 15 entrevistas en profundidad con usuarios intensivos. El volumen de información es enorme y el equipo necesita extraer los insights más accionables en menos de una semana para alimentar el plan de marketing del próximo año.

Instrucción de análisis — desarrolla estos bloques:

1. Síntesis de datos cualitativos con IA
Describe el proceso de análisis de transcripciones de grupos de discusión y entrevistas usando IA: preparación del corpus textual (limpieza, formato, anonimización), identificación de temas recurrentes y tensiones narrativas mediante análisis de sentimiento y modelado de tópicos, extracción de verbatims representativos por tema, y síntesis de hallazgos en un mapa de insights jerarquizado por frecuencia e intensidad emocional. Incluye los prompts de IA para cada fase del análisis cualitativo.

2. Cruce de datos cuantitativos y cualitativos
Explica cómo triangular los resultados cuantitativos de las encuestas con los hallazgos cualitativos: qué afirmaciones cuantitativas cobran significado con la voz del consumidor, qué patrones estadísticos se explican con las narrativas de los grupos, y qué tensiones aparecen entre lo que los consumidores dicen y lo que los datos de comportamiento muestran. Usa IA para generar hipótesis explicativas de las discrepancias encontradas.

3. Segmentación de consumidores basada en insights
Desarrolla una segmentación de consumidores orientada al marketing (no solo demográfica) basada en los insights del estudio: actitudes ante la categoría, motivaciones de compra, barreras de prueba y adopción, y grado de implicación con la marca. Para cada segmento, genera con IA una descripción narrativa rica que el equipo de marketing pueda usar para empatizar con el consumidor al desarrollar campañas.

4. Insight statement y oportunidades de marketing
Para cada uno de los cinco insights principales identificados, redacta un insight statement en el formato estándar de la industria: tensión entre una verdad humana universal y el contexto específico del consumidor que genera una oportunidad. A continuación, usa IA para generar tres ideas de activación de marketing para cada insight: una acción de comunicación, una de producto o servicio, y una de experiencia de marca.

5. Storytelling de insights para presentación ejecutiva
Diseña la estructura de la presentación de resultados para la dirección: narrativa de apertura que engancha con una historia de consumidor real, los cinco insights clave presentados visualmente, implicaciones para el plan de marketing del año, y recomendaciones priorizadas por impacto y facilidad de implementación. Usa IA para generar el storyboard slide a slide de esta presentación de 20 minutos.

6. Plan de activación de insights en el año
Convierte los insights en un calendario de activación: qué insight impulsa cada campaña o iniciativa del año, cómo se medirá si la activación resonó con el consumidor objetivo, y proceso de actualización de insights a lo largo del año con datos de mercado continuos. Describe cómo implementar un dashboard de escucha continua del consumidor con IA que alerte cuando un insight previamente identificado evoluciona o pierde vigencia.

Entrega el proceso de análisis como una guía operativa que el equipo de insights pueda seguir en su próximo proyecto de investigación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sintetizar y activar consumer insights de estudios de mercado complejos con apoyo de IA',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plataforma de investigación de mercados automatizada con IA',
                'description'       => 'Diseña la arquitectura de una herramienta SaaS de investigación de mercados que use IA para automatizar el diseño de encuestas, el análisis de respuestas y la generación de informes.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software con especialización en plataformas de datos y herramientas de investigación. Tu objetivo es diseñar una plataforma SaaS de investigación de mercados que automatice con IA las fases más intensivas en tiempo: diseño de cuestionarios, análisis de respuestas abiertas e informes de resultados.

Contexto del producto:
La plataforma compite en el mercado de herramientas de investigación online (similar a SurveyMonkey, Typeform o Qualtrics) pero con un diferencial claro: la IA asiste al investigador en cada fase del proceso, desde el diseño metodológico hasta la redacción del informe final.

Instrucción de arquitectura — trabaja estos módulos:

1. Módulo de diseño de cuestionarios asistido por IA
Diseña el flujo de creación de un cuestionario con asistencia de IA: el usuario describe en lenguaje natural el objetivo de la investigación y el público objetivo, la IA propone una estructura de cuestionario con secciones, tipo de preguntas (likert, NPS, abierta, ranking, semántico diferencial), y redacción de cada ítem optimizada para evitar sesgo de deseabilidad social. El sistema detecta preguntas dobles, preguntas cargadas o ambiguas y sugiere correcciones. Define los endpoints API, el modelo de datos del cuestionario y el prompt de sistema para el asistente de diseño.

2. Motor de análisis de respuestas abiertas
El análisis de preguntas abiertas es el cuello de botella de la investigación cualitativa. Diseña el pipeline de procesamiento: recepción de respuestas en streaming, preprocesamiento (limpieza, normalización, detección de idioma), análisis de sentimiento por respuesta, modelado de tópicos con LDA o BERTopic, clustering semántico de respuestas similares, y extracción de verbatims representativos por cluster. Especifica la arquitectura de microservicios para este pipeline y los tiempos de procesamiento esperados para 1.000 respuestas.

3. Generación automática de informes con IA
Define el motor de generación de informes: a partir de los datos procesados, la IA genera automáticamente un informe con estructura narrativa (resumen ejecutivo, hallazgos por sección, implicaciones y recomendaciones), gráficos y visualizaciones generados dinámicamente, y texto interpretativo para cada resultado. El informe se exporta en PDF, PowerPoint y dashboard interactivo. Describe el template de prompt para la generación del texto del informe y la arquitectura del renderizador de gráficos.

4. Panel de control del investigador
Diseña la interfaz del investigador (describe los componentes principales del frontend): árbol de encuestas activas con estado en tiempo real, visualización de la tasa de respuesta y calidad de las respuestas (detección de respondedores sin esfuerzo), preview del análisis parcial antes de que el campo esté cerrado, y asistente conversacional para explorar los datos de la encuesta con preguntas en lenguaje natural. Especifica las llamadas a la API que cada componente realiza.

5. Gestión de paneles de consumidores con IA
La plataforma integra un panel propio de respondentes. Diseña el sistema de gestión: perfil demográfico y psicográfico de cada panelista, sistema de invitación inteligente que selecciona el subconjunto más representativo del target para cada estudio, detección de panelistas de baja calidad (speeders, straight-liners, inconsistentes), y modelo de incentivos dinámico que mantiene la tasa de respuesta sin degradar la calidad. Usa IA para el matching entre perfiles de panelistas y targets de investigación.

6. Seguridad y cumplimiento en investigación de mercados
La recopilación de datos de consumidores implica obligaciones legales. Define: consentimiento informado RGPD adaptado a investigación de mercados, anonimización de respuestas antes del análisis, derecho al olvido del panelista, y política de retención de datos. Describe también las medidas de seguridad de la plataforma: cifrado en tránsito y en reposo, control de acceso por roles, y auditoría de quién accede a qué datos de investigación.

Entrega la especificación técnica en formato de documento de arquitectura con diagramas de componentes en formato texto y decisiones de diseño justificadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar plataformas SaaS de investigación de mercados con IA integrada en todo el proceso',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño UX centrado en consumer insights con IA',
                'description'       => 'Transforma los hallazgos de investigación de usuarios en decisiones de diseño UX usando IA para sintetizar entrevistas, crear personas y priorizar mejoras de experiencia de usuario.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador UX senior especializado en investigación de usuarios y diseño centrado en el ser humano. Tu objetivo es crear un proceso de trabajo que use IA para transformar los hallazgos de investigación en decisiones de diseño sólidas y bien fundamentadas.

Contexto del proyecto:
Un equipo de producto ha completado 20 entrevistas con usuarios de una aplicación de gestión financiera personal. Las entrevistas arrojan una cantidad enorme de información sobre comportamientos, frustraciones, momentos de deleite y necesidades no satisfechas. El reto es convertir todo ese material cualitativo en insights de diseño accionables y en mejoras priorizadas del producto.

Instrucción de proceso UX — desarrolla estas fases:

1. Síntesis de entrevistas con IA
Define el proceso de análisis de las 20 transcripciones de entrevistas: carga del corpus en el sistema de IA, identificación de citas significativas por tema (pain points, workarounds, momentos de satisfacción, comportamientos inesperados), agrupación temática por afinidad, y detección de patrones que aparecen en múltiples usuarios. Incluye los prompts de IA para extraer citas relevantes, generar un mapa de afinidad digital y detectar tensiones entre distintos grupos de usuarios.

2. Construcción de personas con IA
A partir de los hallazgos de las entrevistas, genera tres personas de usuario con IA: para cada persona define nombre y foto generada por IA, perfil sociodemográfico y tecnológico, objetivo principal al usar la app, frustraciones más intensas, comportamientos observados en las entrevistas que la definen, y cita representativa en su propia voz. Cada persona debe ser lo suficientemente específica para que el equipo de diseño tome decisiones distintas según cuál sea el usuario objetivo.

3. Mapa de journey y puntos de fricción
Para la persona principal, construye el mapa de customer journey de la app financiera: cada fase del uso (descarga, onboarding, primer registro de gasto, revisión mensual, objetivo de ahorro), qué hace el usuario en cada fase, qué piensa y siente (incluido el nivel de estrés o satisfacción), y qué fricciones o barreras encuentra. Usa IA para identificar los momentos críticos donde la fricción es mayor y el impacto en la retención del usuario más elevado.

4. Traducción de insights en oportunidades de diseño
Para cada insight principal del estudio, genera con IA tres "How Might We" (HMW) statements que reformulen el problema como una oportunidad de diseño. Luego, para cada HMW, propone tres conceptos de solución de diseño distintos: uno conservador que mejora lo existente, uno moderado que introduce un nuevo patrón de interacción, y uno disruptivo que reimagina la experiencia. Presenta las soluciones en forma de wireframe textual (descripción de pantalla y flujo de interacción).

5. Priorización de mejoras de UX con IA
Con la lista de oportunidades de mejora identificadas, diseña la matriz de priorización: impacto en la satisfacción del usuario (basado en la frecuencia e intensidad del pain point en las entrevistas), esfuerzo de implementación (estimado con el equipo de desarrollo), y alineación con los objetivos de negocio del producto. Usa IA para generar el argumento de priorización para cada mejora y para detectar inconsistencias en la valoración del equipo.

6. Validación de diseño con usuarios con IA
Define el plan de validación de las soluciones propuestas: guion del test de usabilidad para las tres principales mejoras, criterios de éxito de cada tarea (tiempo de completado, tasa de error, satisfacción declarada), y proceso de análisis de los resultados del test con IA para detectar patrones de error y generar recomendaciones de iteración. Describe también cómo usar IA para generar variaciones de copy y microcopy a testar en el diseño.

Presenta el proceso como una guía práctica para equipos de diseño UX que quieren incorporar IA en su flujo de investigación sin perder el rigor metodológico.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Convertir investigación cualitativa de usuarios en decisiones de diseño UX con apoyo de IA',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estrategia de ventas basada en investigación de mercado con IA',
                'description'       => 'Traduce los hallazgos de investigación de mercados en argumentarios de venta, identificación de segmentos prioritarios y adaptación del mensaje comercial según el perfil del comprador.',
                'prompt_content'    => <<<'EOT'
Eres un director comercial con experiencia en la transformación de inteligencia de mercado en estrategias de venta de alto impacto. Tu objetivo es diseñar el proceso de activación comercial de un estudio de mercado, convirtiendo los insights del consumidor en ventajas competitivas para el equipo de ventas.

Contexto comercial:
Una empresa B2B de software para PYMES acaba de recibir el resultado de un estudio de mercado con 800 directivos encuestados y 12 entrevistas con compradores actuales y perdidos. Los hallazgos incluyen: las tres principales fricciones en el proceso de compra de software, los criterios de decisión más valorados (precio vs. soporte vs. facilidad de uso), los competidores percibidos como más fuertes por segmento, y las objeciones más frecuentes en el ciclo de venta.

Instrucción comercial — trabaja estos bloques:

1. Mapa de segmentos prioritarios según el estudio
Analiza los hallazgos del estudio para identificar los tres segmentos de empresa con mayor potencial de conversión: ¿qué perfil de empresa tiene la mayor combinación de dolor no resuelto y propensión a comprar?, ¿qué tamaño de empresa y sector presentan la mayor alineación con la propuesta de valor actual?, y ¿qué segmento tiene el ciclo de venta más corto según los datos del estudio? Usa IA para cruzar los datos de la encuesta con la base de clientes actual y detectar el perfil de empresa con mayor probabilidad de cierre.

2. Argumentario de ventas basado en insights
Transforma los insights del estudio en un argumentario de ventas estructurado: las tres fricciones principales del mercado como gancho de apertura de conversación comercial, los criterios de decisión más valorados como pilares del pitch, y los puntos de diferenciación frente a cada competidor nombrado en el estudio. Genera con IA variaciones del argumentario adaptadas a cada segmento prioritario y al perfil del interlocutor (CEO, director de operaciones, responsable de IT).

3. Gestión de objeciones con inteligencia de mercado
El estudio identificó las cinco objeciones más frecuentes en el ciclo de venta. Para cada una, desarrolla una respuesta fundamentada en datos del propio estudio: si la objeción es "es muy caro", responde con el ROI documentado en los casos de clientes actuales y con el coste de la situación actual identificado en las entrevistas. Si la objeción es "necesitamos pensarlo", responde con el tiempo medio de implementación y los riesgos de posponer la decisión. Usa IA para generar variaciones de cada respuesta según el sector del prospect.

4. Adaptación del mensaje por canal de venta
El equipo comercial opera en tres canales: venta directa (reuniones presenciales), inbound (leads que solicitan demo), y canal indirecto (partners). Para cada canal, adapta el mensaje comercial según lo aprendido en el estudio: ¿qué argumento resuena más en una primera llamada en frío?, ¿qué caso de uso debe protagonizar la demo para el perfil de lead inbound más frecuente?, y ¿qué materiales de habilitación necesita el canal indirecto para replicar el argumentario? Usa IA para generar el guion de cada tipo de interacción comercial.

5. Identificación de oportunidades de upsell y cross-sell
El estudio también reveló necesidades no satisfechas en la base de clientes actuales. Identifica las tres oportunidades principales de expansión de ingresos en clientes existentes: qué módulos adicionales cubren los pain points no resueltos identificados en las entrevistas con clientes, qué argumentos de upsell son más efectivos según el perfil de la empresa, y cómo identificar con IA qué clientes tienen mayor propensión a expandir la relación. Genera el guion de la conversación de revisión anual con el cliente orientada al upsell.

6. Plan de habilitación del equipo de ventas
Traduce todo lo anterior en un plan de formación del equipo de ventas: sesión de presentación del estudio de mercado con los cinco hallazgos más accionables para el comercial, taller de role-play con las nuevas respuestas a objeciones, actualización del CRM con los segmentos y criterios de priorización del estudio, y checklist de calificación de leads actualizado con las señales de compra identificadas en la investigación. Usa IA para generar material de formación adaptado al nivel de experiencia de cada comercial.

Entrega el plan de activación comercial como documento ejecutivo con secciones diferenciadas por equipo y canal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Convertir hallazgos de investigación de mercado en estrategias y argumentarios de ventas con IA',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Validación de producto con consumer insights y IA',
                'description'       => 'Usa investigación de mercados y análisis de IA para validar hipótesis de producto, priorizar funcionalidades y tomar decisiones de roadmap respaldadas por la voz del cliente.',
                'prompt_content'    => <<<'EOT'
Eres un product manager especializado en product discovery y validación de hipótesis con datos de mercado. Tu objetivo es diseñar el proceso de validación de un nuevo producto o funcionalidad utilizando consumer insights e inteligencia artificial para reducir el riesgo de inversión en desarrollo.

Contexto del proyecto:
Tu equipo tiene tres hipótesis de producto que compiten por el presupuesto de desarrollo del próximo trimestre. Cada una requiere entre 4 y 8 semanas de ingeniería. Antes de comprometer recursos, necesitas validar cuál de las tres tiene mayor respaldo de la demanda real del mercado y mayor potencial de impacto en métricas clave de producto.

Instrucción de validación — desarrolla estas fases:

1. Marco de validación de hipótesis de producto
Define el framework de validación que usarás: hipótesis de cliente (¿a quién beneficia?), hipótesis de problema (¿qué pain point resuelve?), hipótesis de solución (¿cómo lo resuelve?), hipótesis de valor (¿cuánto está dispuesto a pagar o cuánto mejora la retención?), y criterio de validación (¿qué evidencia necesitas para considerar la hipótesis validada?). Para cada una de las tres hipótesis, completa este framework antes de seleccionar los métodos de investigación más adecuados.

2. Selección de métodos de investigación con IA
Elige los métodos más eficientes para validar cada hipótesis en función del tiempo disponible y la madurez del concepto: encuesta de concepto a usuarios actuales (para medir interés declarado), test de landing page con tráfico real (para medir comportamiento real), entrevistas de problem discovery con usuarios objetivo (para explorar el pain point en profundidad), y análisis de reseñas de competidores con IA (para entender qué valoran y qué echan en falta los usuarios de soluciones similares). Justifica la combinación elegida para cada hipótesis.

3. Análisis de reseñas y feedback de competidores con IA
Para cada hipótesis, realiza un análisis de la señal de mercado existente: reseñas en app stores, G2, Capterra y Trustpilot de productos competidores o adyacentes, posts en comunidades de usuarios (Reddit, Slack groups, Product Hunt comments), y menciones en redes sociales. Usa IA para extraer los temas de queja y petición más frecuentes, cuantificar su importancia relativa, y mapearlos contra las tres hipótesis de producto para ver cuál está más respaldada por evidencia orgánica.

4. Diseño y análisis de encuesta de validación con IA
Para la hipótesis más prometedora, diseña una encuesta de validación de 8 preguntas: pregunta de segmentación para filtrar el público objetivo, pregunta de frecuencia e intensidad del problema, escala de disposición a pagar por la solución, preferencia entre tu concepto y las alternativas actuales, y pregunta abierta sobre lo que más y menos les gusta del concepto. Usa IA para analizar las respuestas abiertas, generar un resumen ejecutivo de hallazgos, y producir la recomendación de go/no-go fundamentada en los datos.

5. Priorización de funcionalidades con impact-effort y datos de mercado
Con los resultados de la validación, construye la matriz de priorización de las tres hipótesis: impact score basado en el tamaño del segmento afectado y la intensidad del pain point validado, effort score estimado por el equipo de ingeniería, y confidence score basado en la solidez de la evidencia recogida. Usa IA para detectar sesgos en la valoración del equipo y para generar argumentos contrarios a las preferencias iniciales del equipo de producto.

6. Presentación de la decisión de roadmap
Diseña la presentación de la decisión de priorización para los stakeholders: resumen del proceso de validación, evidencia clave de cada hipótesis, recomendación de priorización con justificación, riesgos asumidos con la elección, y criterios de éxito de la funcionalidad elegida que se medirán tras el lanzamiento. Usa IA para adaptar el nivel de detalle y el lenguaje de la presentación al perfil de cada stakeholder (CEO, CTO, equipo de ventas).

Entrega el proceso completo de validación en un documento que el equipo de producto pueda seguir como guía metodológica para futuros proyectos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Validar hipótesis de producto con investigación de mercado e IA para reducir el riesgo de inversión en desarrollo',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Investigación del mercado laboral con IA para RRHH',
                'description'       => 'Aplica metodologías de investigación de mercados al análisis del mercado laboral: benchmarking salarial, tendencias de demanda de talento, y análisis de competidores como empleadores.',
                'prompt_content'    => <<<'EOT'
Eres un business partner de RRHH con experiencia en inteligencia de mercado laboral y estrategia de talento. Tu objetivo es diseñar un proceso de investigación del mercado laboral con apoyo de IA que proporcione a la dirección datos sólidos para decisiones estratégicas de talento.

Contexto de la investigación:
La empresa donde trabajas opera en el sector tecnológico y tiene dificultades para atraer y retener talento de ingeniería de software en tres ciudades. La dirección quiere saber: si los salarios actuales son competitivos, cuáles son los atributos de empleador más valorados por el talento objetivo, y qué están haciendo los competidores para ganar la batalla por el talento.

Instrucción de investigación — trabaja estos bloques:

1. Benchmarking salarial con IA
Diseña el proceso de benchmarking salarial externo: fuentes de datos a utilizar (Glassdoor, LinkedIn Salary, Infojobs, encuestas sectoriales de KPMG o Mercer), metodología de comparación (por nivel de experiencia, tecnología y ciudad), y análisis de la posición actual de la empresa en el mercado (¿percentil 25, 50 o 75?). Usa IA para procesar múltiples fuentes de datos salariales, detectar discrepancias entre fuentes y producir un resumen ejecutivo del gap salarial con las recomendaciones de ajuste necesarias.

2. Análisis de la propuesta de valor del empleador
Investiga qué atributos valoran más los ingenieros de software al elegir empleador: análisis de reseñas de Glassdoor y Kununu de la empresa y de sus principales competidores, encuesta interna de clima que añade contexto cualitativo a los datos externos, y grupos de discusión con el talento objetivo del mercado. Usa IA para identificar los gaps entre lo que los competidores ofrecen como EVP (Employee Value Proposition) y lo que la empresa ofrece, y para generar recomendaciones de mejora priorizadas.

3. Análisis de competidores como empleadores
Monitoriza las prácticas de atracción de talento de los cinco competidores principales: qué posiciones tienen abiertas en LinkedIn y cuánto llevan publicadas (señal de dificultad de contratación), qué beneficios y condiciones destacan en sus ofertas, cómo presentan su cultura y propósito en la marca empleadora, y qué dicen de ellos en Glassdoor los empleados actuales y anteriores. Usa IA para procesar esta información y generar un mapa de posicionamiento de la empresa vs. competidores como empleadores.

4. Tendencias del mercado de talento tecnológico
Analiza las tendencias macro del mercado laboral tech que afectan a la estrategia de talento: evolución de la oferta y demanda de perfiles de ingeniería de software por especialización (frontend, backend, data, cloud, seguridad), impacto del trabajo remoto en la competencia geográfica por talento, emergencia de nuevos perfiles ligados a la IA que cambian los planes de plantilla, y tendencias en formatos de contratación (empleado vs. freelance vs. contratistas). Usa IA para sintetizar informes sectoriales y producir un resumen de implicaciones para la estrategia de talento a 2 años.

5. Encuesta de clima y engagement con análisis de IA
Diseña una encuesta de clima laboral orientada a detectar el riesgo de fuga de talento clave: preguntas sobre intención de permanencia, satisfacción con los principales atributos del trabajo, percepción de oportunidades de desarrollo, y comparación percibida con el mercado. Usa IA para analizar las respuestas abiertas, identificar los colectivos con mayor riesgo de abandono, y generar recomendaciones de acción por departamento y nivel.

6. Informe ejecutivo de inteligencia de mercado laboral
Estructura el informe final para la dirección: posición salarial actual y gap recomendado por perfil, puntos fuertes y débiles de la EVP vs. competidores, riesgos de talento identificados en el análisis de clima, y plan de acción priorizado para mejorar la posición competitiva como empleador en los próximos 12 meses. Usa IA para generar visualizaciones textuales de los datos y para adaptar el tono del informe al perfil del director al que va dirigido.

Entrega la guía de investigación como proceso replicable que RRHH pueda ejecutar de forma periódica para mantener actualizada la inteligencia del mercado laboral.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Investigar el mercado laboral con datos externos e IA para decisiones estratégicas de talento y retribución',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de tendencias de mercado financiero con IA',
                'description'       => 'Aplica inteligencia artificial al análisis de tendencias de mercados financieros combinando datos macroeconómicos, noticias del sector y señales de mercado para generar informes de inteligencia accionables.',
                'prompt_content'    => <<<'EOT'
Eres un analista de mercados financieros con experiencia en el uso de herramientas cuantitativas y análisis fundamental. Tu objetivo es diseñar un proceso de análisis de tendencias de mercado que combine datos financieros estructurados con inteligencia artificial para producir informes de mayor calidad en menos tiempo.

Contexto analítico:
Tu equipo produce un informe mensual de tendencias de mercado para inversores institucionales. El informe analiza: condiciones macroeconómicas globales, evolución de los principales índices bursátiles y de renta fija, tendencias sectoriales, y radar de riesgos emergentes. El proceso actual consume 3 semanas de trabajo del equipo y el objetivo es reducirlo a 1 semana manteniendo la calidad analítica.

Instrucción de análisis — trabaja estos módulos:

1. Recopilación y síntesis de datos macroeconómicos con IA
Define el pipeline de datos: fuentes primarias (Bloomberg, Refinitiv, Eurostat, BIS, Fed, BCE), frecuencia de actualización, y proceso de normalización para comparabilidad histórica. Usa IA para: detectar automáticamente las publicaciones de datos relevantes del mes (inflación, empleo, PIB, decisiones de política monetaria), generar un resumen narrativo de las condiciones macro con el contexto histórico pertinente, y marcar las desviaciones significativas respecto al consenso de mercado. Define el prompt de sistema para el agente de síntesis macroeconómica.

2. Análisis de señales de mercado con IA
Diseña el proceso de análisis de las señales técnicas y de precio de los mercados: evolución de índices principales con análisis de drivers (qué sectores y valores explican el movimiento del índice), spreads de crédito soberano y corporativo como indicadores de riesgo, flujos de capital entre regiones y clases de activos, y posicionamiento de inversores institucionales (datos COT, flujos de ETF). Usa IA para procesar estas señales simultáneamente y generar una narrativa coherente del estado del mercado.

3. Análisis de sentimiento y noticias de mercado
Integra el análisis de sentimiento de noticias financieras en el proceso: monitorización de medios financieros de referencia (Financial Times, Wall Street Journal, Bloomberg), análisis de sentimiento de las transcripciones de earnings calls de empresas del índice, y detección de temas emergentes en la comunidad financiera (Twitter/X financiero, Substack de analistas). Usa IA para cuantificar el sentimiento agregado del mercado y detectar divergencias entre el sentimiento narrativo y la acción del precio.

4. Radar de riesgos emergentes
Define el proceso de identificación de riesgos no en precio: riesgos geopolíticos con impacto potencial en mercados, riesgos regulatorios en sectores clave del portfolio, riesgos de liquidez en mercados de deuda emergente, y riesgos tecnológicos de disrupción sectorial. Usa IA para monitorizar fuentes de información no convencionales (informes de think tanks, publicaciones académicas, declaraciones de responsables de política) y generar alertas cuando emerge un riesgo con potencial de impacto significativo en los mercados.

5. Construcción automatizada del informe con IA
Define el flujo de generación automática del informe mensual: agregación de los análisis parciales de cada módulo, generación del resumen ejecutivo de una página, redacción de las secciones narrativas con los datos procesados, y producción del apartado de perspectivas y escenarios. Especifica el proceso de revisión humana: qué partes del informe el analista revisa siempre, qué partes son directamente publicables si los datos de entrada son correctos, y cuál es el proceso de validación del juicio de la IA antes de su publicación.

6. Distribución y seguimiento del impacto del informe
Diseña el proceso de distribución del informe a inversores institucionales: personalización del sumario ejecutivo según el perfil de cartera de cada cliente, seguimiento de qué secciones leen y cuánto tiempo dedican a cada una, y proceso de feedback recogido a través de comentarios o llamadas de seguimiento. Usa IA para analizar el comportamiento de lectura y detectar qué tipos de análisis generan mayor engagement y valor percibido entre los clientes.

Entrega el diseño del proceso analítico como guía operativa con estimación de tiempo por fase y herramientas de IA recomendadas para cada módulo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Producir informes de inteligencia de mercados financieros de mayor calidad y en menor tiempo con apoyo de IA',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Investigación de mercado legal para due diligence con IA',
                'description'       => 'Utiliza IA para acelerar el análisis de mercado en procesos de due diligence: análisis de competidores, regulación sectorial, jurisprudencia relevante y riesgos legales del sector objetivo.',
                'prompt_content'    => <<<'EOT'
Eres un abogado de M&A y due diligence con experiencia en operaciones de adquisición en diferentes sectores industriales. Tu objetivo es diseñar un proceso de investigación de mercado legal asistida por IA que acelere la fase de análisis sectorial en los procesos de due diligence.

Contexto de la operación:
Tu firma asesora a un fondo de private equity que está evaluando la adquisición de una empresa mediana del sector de la salud digital (aplicaciones de monitorización de salud y telemedicina). El proceso de due diligence tiene un plazo de 6 semanas y uno de los entregables críticos es el informe de análisis regulatorio y de mercado del sector.

Instrucción de investigación legal — trabaja estos bloques:

1. Mapa regulatorio del sector objetivo con IA
Define el proceso de construcción del mapa regulatorio del sector de la salud digital: identificación de las normativas aplicables en España y la UE (RGPD sanitario, Reglamento de Dispositivos Médicos MDR, Directiva NIS2, ley de garantías del mercado interior digital), análisis del grado de cumplimiento típico de los operadores del sector, y evaluación del riesgo regulatorio asociado a la empresa objetivo. Usa IA para procesar normativa compleja y producir un resumen ejecutivo con las obligaciones más relevantes y las sanciones por incumplimiento.

2. Análisis de jurisprudencia relevante
Identifica y analiza la jurisprudencia nacional y europea relevante para el sector: sentencias del Tribunal de Justicia de la UE sobre protección de datos en salud, resoluciones de la AEPD sobre apps de salud, y doctrina del Comité Europeo de Protección de Datos. Usa IA para procesar el texto de las resoluciones y sentencias, extraer los principios aplicables a la empresa objetivo, y detectar si alguna práctica actual de la empresa está en conflicto con la jurisprudencia vigente.

3. Análisis competitivo del mercado para el comprador
Más allá del análisis de la empresa objetivo, el comprador necesita entender el mercado en que entra. Diseña el análisis de mercado de la salud digital: principales competidores en España y Europa, cuotas de mercado estimadas, modelos de negocio predominantes (B2C, B2B2C, integración con sistemas públicos de salud), nivel de consolidación del sector (M&A recientes), y tendencias de crecimiento respaldadas por datos sectoriales. Usa IA para procesar informes sectoriales de Deloitte, McKinsey, IESE y organismos sectoriales y producir un análisis comparativo en menos tiempo.

4. Riesgos legales específicos del sector
Identifica los riesgos legales propios del sector de la salud digital que deben evaluarse en el due diligence: responsabilidad civil por error del algoritmo de diagnóstico, cumplimiento de la normativa de dispositivos médicos si la app tiene funcionalidad diagnóstica, protección de datos sensibles de salud y obligaciones reforzadas del RGPD, y contratos con sistemas de salud públicos y sus cláusulas de rescisión. Para cada riesgo, define el proceso de investigación y los documentos que deben solicitarse en el data room.

5. Proceso de análisis documental del data room con IA
El data room de una due diligence contiene cientos de documentos. Diseña el proceso de análisis asistido por IA: clasificación automática de documentos por tipo y relevancia, extracción de cláusulas críticas en contratos (penalizaciones, restricciones de transferencia, cambio de control), detección de discrepancias entre documentos (por ejemplo, contratos que difieren de la descripción en el cuestionario de due diligence), y generación automática de una lista de cuestiones pendientes para el vendedor. Especifica las categorías de documentos que la IA puede analizar con mayor autonomía y las que requieren revisión humana inmediata.

6. Informe de due diligence legal con IA
Define la estructura del informe de due diligence legal y el proceso de generación asistida por IA: resumen ejecutivo de riesgos por nivel de severidad (alto, medio, bajo), hallazgos por área (contractual, regulatoria, laboral, propiedad intelectual, protección de datos), recomendaciones de precio-ajuste o condiciones precedentes derivadas de los hallazgos, y declaraciones y garantías recomendadas para el contrato de compraventa. Describe cómo la IA genera el borrador del informe a partir de los análisis parciales y cuál es el rol del abogado senior en la revisión y validación final.

Entrega el proceso de due diligence legal como protocolo replicable para diferentes sectores, con especificación de las adaptaciones necesarias según el tipo de industria objetivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Acelerar el análisis regulatorio y de mercado en procesos de due diligence con apoyo de IA',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de satisfacción del cliente con IA para CS',
                'description'       => 'Implementa un sistema de análisis continuo de la satisfacción del cliente usando IA para procesar encuestas, reseñas y conversaciones de soporte, e identificar las mejoras de mayor impacto.',
                'prompt_content'    => <<<'EOT'
Eres un director de customer success especializado en el análisis de la experiencia del cliente y la mejora continua del servicio. Tu objetivo es diseñar un sistema de análisis de satisfacción del cliente que use inteligencia artificial para transformar el feedback masivo en insight accionable para el equipo de CS y para los equipos de producto y operaciones.

Contexto del equipo:
El equipo de customer success gestiona 2.400 clientes activos y recibe mensualmente: 800 tickets de soporte resueltos, 350 respuestas a encuestas NPS, 120 reseñas en plataformas externas (G2, Capterra, Trustpilot), y 60 llamadas de renovación o churn. El reto es procesar todo este feedback sin que se pierda entre el ruido operativo diario.

Instrucción del sistema — desarrolla estos módulos:

1. Recopilación y centralización del feedback con IA
Define la arquitectura de recopilación: integración del CRM con las plataformas de encuesta (Typeform, SurveyMonkey), de ticketing (Zendesk, Intercom), de reseñas externas (G2, Capterra) y de grabaciones de llamadas. Usa IA para: transcribir y etiquetar automáticamente las grabaciones de llamadas, clasificar cada ticket de soporte por tema y subtema, y asignar un nivel de urgencia y sentimiento a cada pieza de feedback. Describe el flujo de datos y el modelo de etiquetas jerárquico para la clasificación.

2. Análisis de NPS con inteligencia cualitativa
El NPS numérico dice poco sin el análisis de los comentarios. Diseña el proceso de análisis de las respuestas NPS: segmentación entre detractores, pasivos y promotores, análisis de sentimiento y extracción de temas de los comentarios de texto libre, identificación de los drivers de promotores (¿qué valoran más?) y de detractores (¿qué les impide recomendar?), y tendencia de NPS por segmento de cliente, antigüedad y producto utilizado. Usa IA para generar automáticamente el informe mensual de NPS con interpretación narrativa de los resultados.

3. Detección temprana de riesgo de churn
Diseña el modelo de alerta temprana de churn: señales de comportamiento negativo (caída del uso del producto, tickets de frustración, reducción del equipo de contacto en el cliente), señales de feedback negativo (detractor en NPS, reseña negativa reciente, queja sin resolver), y señales relacionales (falta de respuesta a comunicaciones, no asistencia a eventos de CS). Usa IA para combinar estas señales en un score de riesgo de churn actualizado semanalmente y priorizarlos para la intervención del equipo de CS.

4. Priorización de mejoras de producto y servicio
El análisis de feedback revela continuamente oportunidades de mejora. Define el proceso de priorización: agrupación de quejas y sugerencias por tema, cuantificación de cuántos clientes y qué porcentaje de ARR afectan, estimación del impacto en NPS de resolverlo, y presentación al equipo de producto en el formato que mejor facilite la toma de decisiones. Usa IA para generar automáticamente el informe de "top 10 mejoras solicitadas por clientes" mensual con los argumentos de negocio para cada una.

5. Programa de escucha activa con clientes VIP
Los clientes de mayor valor merecen un proceso de escucha más profundo que una encuesta NPS. Diseña el programa de Voice of the Customer para clientes estratégicos: entrevistas trimestrales de business review estructuradas con guion, análisis de la transcripción con IA para detectar señales de riesgo u oportunidades de expansión, y plan de acción personalizado generado a partir de cada entrevista. Define el formato de la entrevista, el guion tipo y el proceso de análisis con IA.

6. Dashboard de satisfacción y reporting ejecutivo
Diseña el cuadro de mando de satisfacción del cliente para la dirección: NPS global y por segmento con tendencia, CSAT de tickets de soporte, tasa de churn voluntario y predicción del siguiente mes, top temas de insatisfacción con impacto en ARR, y progreso de las iniciativas de mejora en curso. Describe cómo IA genera automáticamente el comentario narrativo del informe mensual, destacando las variaciones más significativas y las acciones recomendadas para el mes siguiente.

Entrega el diseño del sistema como especificación técnica y operativa que el equipo de CS pueda implementar en sus herramientas actuales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformar el feedback masivo de clientes en insight accionable para CS y producto con análisis de IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Investigador de mercados freelance con IA',
                'description'       => 'Construye tu práctica como investigador de mercados freelance usando IA para ofrecer estudios de mayor profundidad en menos tiempo, diferenciarte de las grandes agencias y escalar tu negocio independiente.',
                'prompt_content'    => <<<'EOT'
Eres un investigador de mercados independiente con experiencia en metodología cualitativa y cuantitativa. Tu objetivo es diseñar un modelo de negocio freelance en investigación de mercados que use la inteligencia artificial como ventaja competitiva frente a las grandes agencias de investigación.

Contexto profesional:
Llevas 8 años en el sector, primero en una agencia de investigación y luego como consultor independiente. Tus principales clientes actuales son PYMES y startups que no pueden permitirse los presupuestos de las grandes agencias pero necesitan insights rigurosos para tomar decisiones. Quieres posicionarte como "el investigador con resultados de agencia grande y agilidad de consultor boutique".

Instrucción de modelo de negocio — trabaja estos bloques:

1. Posicionamiento diferencial con IA
Define tu propuesta de valor como investigador freelance con IA: qué ofreces que las grandes agencias no pueden (velocidad, acceso directo al experto, precio ajustado, insights más accionables y menos académicos), qué ofreces que otros freelancers sin IA no pueden (mayor volumen de análisis cualitativo, síntesis más rápida, informes más visuales y ejecutivos), y cuál es tu especialización de nicho (por ejemplo, investigación para startups en fase de product-market fit, o investigación para marcas de consumo en el segmento premium). Genera con IA tres propuestas de posicionamiento distintas y selecciona la más auténtica con tu experiencia.

2. Portfolio de servicios y precios
Diseña tu cartera de servicios con tres niveles de precio y complejidad: servicio básico de análisis de reseñas y feedback existente con informe de insights (entregable en 5 días, precio 800-1.500 €), servicio estándar de encuesta cuantitativa + análisis cualitativo de acompañamiento (entregable en 15 días, precio 3.000-6.000 €), y servicio premium de estudio mixto completo con workshop de activación de insights (entregable en 4 semanas, precio 8.000-15.000 €). Para cada servicio, detalla qué incluye exactamente y cómo la IA te permite entregarlo con la calidad de una agencia pero a un coste más competitivo.

3. Proceso de entrega con IA
Documenta tu metodología de trabajo con IA para cada tipo de proyecto: en proyectos cualitativos, cómo usas IA para analizar transcripciones, construir mapas de afinidad y generar el informe narrativo; en proyectos cuantitativos, cómo usas IA para diseñar el cuestionario, analizar respuestas abiertas y generar visualizaciones de datos; y en proyectos mixtos, cómo combinas ambos flujos para producir insights triangulados. Para cada fase, especifica qué hace la IA, qué haces tú, y cuánto tiempo ahorra la IA respecto al proceso tradicional.

4. Captación de clientes y marketing personal
Define tu estrategia de captación como freelance de investigación: contenidos de thought leadership en LinkedIn que demuestren tu metodología y muestren ejemplos de insights generados, partnerships con consultoras de estrategia y agencias de marketing que no tienen capacidad de investigación interna, y presencia en comunidades de startups y aceleradoras donde el product-market fit es una necesidad urgente. Usa IA para generar el plan de contenidos mensual de LinkedIn con temas concretos, formato de cada publicación y frecuencia óptima para tu audiencia objetivo.

5. Gestión de proyectos y calidad del entregable
Define tu proceso de gestión de proyectos como freelance: propuesta comercial con alcance preciso (para evitar scope creep), contrato con cláusulas de confidencialidad y propiedad del estudio, gestión del cliente durante el proyecto (check-ins, gestión de expectativas, revisiones intermedias), y proceso de entrega y presentación de resultados. Describe el template de informe de investigación que utilizas como base, y cómo la IA lo genera partiendo de los análisis parciales del proyecto.

6. Escalado del negocio sin contratar empleados
Define el modelo de crecimiento de tu práctica freelance usando IA para escalar sin estructura: subcontratación de la moderación de grupos a otros freelancers mientras tú te centras en el análisis e informe, creación de productos de investigación escalables (informes sectoriales vendibles a múltiples clientes simultáneamente), y desarrollo de un curso online de metodología de investigación que genera ingresos pasivos. Modela con IA los distintos escenarios de facturación y elige el mix de servicios que maximiza los ingresos anuales con la menor dependencia de proyectos de cliente únicos.

Entrega el modelo de negocio como un plan de práctica freelance que puedas usar para tomar decisiones estratégicas y como base para presentarte ante potenciales clientes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir y escalar un negocio freelance de investigación de mercados usando IA como ventaja competitiva',
                'vote_score'        => 33,
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
