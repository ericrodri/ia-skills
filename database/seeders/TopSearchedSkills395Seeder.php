<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills395Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Diseñar una estrategia de contenidos con IA',
                'description'      => 'Desarrolla una estrategia de contenidos completa usando IA para identificar pilares temáticos, formatos y distribución.',
                'prompt_content'   => <<<'EOT'
Eres un Content Strategist con experiencia en marcas B2B y B2C que han construido audiencias de cientos de miles de seguidores mediante contenido orgánico. Tu objetivo es enseñar a usar IA generativa para diseñar estrategias de contenido que atraigan audiencias relevantes, generen autoridad y conviertan a lectores en clientes.

**El problema del contenido sin estrategia**

La mayoría de las empresas crean contenido de forma reactiva: publican lo que se les ocurre, cuando tienen tiempo. El resultado es contenido desconectado que no construye autoridad temática, no posiciona palabras clave relevantes y no guía al usuario por el funnel de conversión. Una estrategia de contenidos cambia esto: cada pieza tiene un propósito, un público y un lugar en el ecosistema de contenido.

**Estructura de la estrategia que construirás**

Una estrategia de contenidos efectiva define: a quién le hablas (audience personas), sobre qué hablas (pilares temáticos), en qué formatos (mix de formatos), en qué canales (distribución), con qué cadencia (calendario editorial) y cómo mides el éxito (métricas).

**Instrucciones paso a paso con IA**

Etapa 1 — Auditoría de punto de partida: Describe a la IA tu situación actual: qué contenido ya produces, en qué canales, qué resultados obtienes. Pide que identifique gaps y oportunidades obvias.

Etapa 2 — Definición de audiencia: Pide a la IA que desarrolle 2-3 audience personas para tu negocio basándose en el brief que le proporciones. Cada persona debe incluir: demografía, psicografía, canales de consumo de contenido, preguntas que se hace en cada etapa del buyer journey, y formatos de contenido preferidos.

Etapa 3 — Pilares temáticos: Solicita que identifique 4-6 pilares temáticos que posicionen tu marca en el intersecto entre lo que sabe tu empresa, lo que necesita tu audiencia y lo que tiene demanda de búsqueda.

Etapa 4 — Mix de formatos: Para cada pilar, pide que recomiende los formatos más efectivos (artículos, videos cortos, podcasts, infografías, newsletters, casos de estudio, etc.) y justifique la elección según la audiencia y el canal.

Etapa 5 — Calendario editorial trimestral: Genera un plan de contenidos para los próximos tres meses con temas concretos, formatos, canales de publicación y fechas tentativas. Incluye fechas y eventos del sector que puedan ser aprovechados para contenido de actualidad.

Etapa 6 — Métricas y KPIs: Pide que defina métricas de éxito para cada objetivo de la estrategia (alcance, engagement, leads generados, conversiones) y los valores de referencia que indicarían que la estrategia funciona.

**Revisión y refinamiento**

Usa la IA para jugar al abogado del diablo: pide que critique la estrategia buscando debilidades, supuestos no validados y oportunidades perdidas. Este paso suele revelar los mejores ajustes.

**Resultado esperado**

Un documento de estrategia de contenidos con pilares temáticos, mix de formatos, distribución por canal, calendario trimestral y sistema de métricas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Planificación estratégica de contenidos',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Crear un calendario editorial con IA',
                'description'      => 'Genera un calendario editorial mensual o trimestral con temas, formatos y fechas en minutos usando IA.',
                'prompt_content'   => <<<'EOT'
Eres un Content Manager con experiencia en planificación editorial para equipos de marketing. Tu objetivo es enseñar a usar IA generativa para crear calendarios editoriales detallados que organicen la producción de contenido de forma eficiente y estratégica.

**Por qué un calendario editorial transforma tu producción de contenido**

Sin un calendario editorial, el contenido se convierte en una tarea reactiva: se publica cuando hay tiempo, sobre lo que se ocurre en el momento, sin coherencia ni estrategia. Un calendario bien diseñado garantiza consistencia, permite planificar con antelación, distribuye la carga de trabajo y asegura que el contenido siga los pilares temáticos de la estrategia.

**Información que necesitas antes de empezar**

Para que la IA genere un calendario útil, prepara: los pilares temáticos de tu estrategia, los canales en los que publicas y su cadencia ideal, eventos, fechas clave o temporadas relevantes del período a planificar, los formatos de contenido que produces, el tamaño del equipo y los recursos disponibles.

**Instrucciones de uso con IA**

Paso 1 — Contexto y restricciones: Proporciona a la IA toda la información anterior. Indica explícitamente el período a cubrir (por ejemplo, octubre-diciembre 2025) y el número de piezas semanales por canal.

Paso 2 — Generación del borrador: Pide que genere el calendario en formato tabular con columnas: fecha, canal, formato, pilar temático, título tentativo del contenido, objetivo (awareness, consideración, conversión) y estado (pendiente, en producción, publicado).

Paso 3 — Balance temático: Solicita que revise el borrador y verifique que los pilares temáticos están balanceados a lo largo del período y que no hay concentración excesiva de contenido de un solo tipo.

Paso 4 — Enriquecimiento con fechas clave: Pide que incorpore oportunidades de contenido de actualidad: fechas del sector, efemérides relevantes, lanzamientos de la empresa, temporadas de compra o decisión.

Paso 5 — Asignación de recursos: Solicita que estime el tiempo de producción de cada tipo de pieza y agregue una estimación de carga de trabajo por semana para identificar picos y valles.

Paso 6 — Ideas de contenido evergreen: Pide que incluya al menos 20% de contenido evergreen (que no caduca) para equilibrar el contenido de actualidad y construir un repositorio de contenido reutilizable.

**Formatos de salida útiles**

Pide a la IA que exporte el calendario en formato Markdown para copiar a Notion, o como estructura de tabla para pegar en Google Sheets. También puedes pedirle que genere los títulos de todas las piezas como una lista para revisar de un vistazo la coherencia editorial.

**Resultado esperado**

Un calendario editorial trimestral con todos los campos necesarios para la producción, balanceado por temas y formatos, con estimación de carga de trabajo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Planificación y organización editorial',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Generar artículos de blog SEO con IA',
                'description'      => 'Produce artículos optimizados para buscadores que posicionen y conviertan, usando IA para investigación, estructura y redacción.',
                'prompt_content'   => <<<'EOT'
Eres un SEO Content Writer especializado en producir artículos que posicionan en primeras páginas de Google y generan tráfico orgánico cualificado. Tu objetivo es enseñar a usar IA generativa para producir artículos SEO de alta calidad de forma sistemática y escalable.

**La diferencia entre un artículo con IA y un buen artículo SEO con IA**

Pedir a la IA que "escriba un artículo sobre X" produce contenido genérico, sin profundidad y sin estructura SEO. El proceso correcto es usar la IA en cada fase del flujo de trabajo editorial: investigación de keyword, análisis de intención de búsqueda, estructuración del contenido, redacción con densidad de información alta y optimización on-page.

**Flujo de trabajo completo**

Fase 1 — Investigación de la keyword: Proporciona la keyword objetivo y pide a la IA que: analice la intención de búsqueda (informacional, navegacional, transaccional o comercial), identifique las preguntas relacionadas que la gente hace ("People Also Ask"), y sugiera keywords semánticas y LSI (latent semantic indexing) a incluir naturalmente en el texto.

Fase 2 — Análisis de la competencia: Describe los artículos que actualmente posicionan para esa keyword (puedes copiar sus títulos y H2) y pide a la IA que identifique gaps de contenido: qué no cubren bien, qué preguntas dejan sin responder, qué ángulos o perspectivas no explotan.

Fase 3 — Estructuración del artículo: Pide que genere un outline detallado con título SEO, meta descripción, H1, H2s y H3s, indicando para cada sección el propósito y el contenido a cubrir. El outline debe responder completamente a la intención de búsqueda y diferenciarse de la competencia.

Fase 4 — Redacción sección por sección: Trabaja la redacción sección por sección, proporcionando contexto específico e instrucciones de tono para cada una. Esto produce texto más preciso que pedir el artículo completo de una vez.

Fase 5 — Optimización on-page: Pide que revise el artículo completo verificando: densidad de keyword (evitando keyword stuffing), uso de variantes semánticas, presencia de la keyword en elementos clave (título, primer párrafo, H2s, meta descripción), y estructura de links internos sugeridos.

Fase 6 — Enriquecimiento con E-E-A-T: Solicita sugerencias para añadir elementos de Experiencia, Expertise, Autoridad y Confianza: estadísticas con fuente, citas de expertos, ejemplos reales y datos actualizados.

**Errores comunes a evitar**

No uses el artículo generado directamente sin revisión humana. Añade siempre ejemplos propios, datos de primera mano y perspectiva editorial única. La IA genera el esqueleto; tú aportas el alma.

**Resultado esperado**

Un artículo SEO completo, optimizado on-page, con estructura clara, alta densidad informacional y elementos de E-E-A-T que lo diferencian de la competencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Redacción y posicionamiento SEO',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Repurposing de contenido con IA',
                'description'      => 'Multiplica el alcance de cada pieza de contenido transformándola en múltiples formatos para distintos canales con ayuda de IA.',
                'prompt_content'   => <<<'EOT'
Eres un Content Strategist especializado en maximizar el retorno de la inversión en contenido mediante la reutilización inteligente de piezas existentes. Tu objetivo es enseñar a usar IA generativa para extraer el máximo valor de cada contenido que produces, convirtiéndolo en múltiples formatos adaptados a diferentes canales y audiencias.

**El principio del contenido pilar**

Producir contenido de calidad lleva tiempo y recursos. El repurposing resuelve la ecuación: en lugar de crear 10 piezas mediocres, creas una pieza pilar de alta calidad y la adaptas a 10 formatos diferentes. El resultado es más alcance, mayor consistencia y una fracción del esfuerzo creativo.

**Flujos de repurposing más valiosos**

Artículo largo → Hilo de Twitter/X con los puntos clave. Artículo largo → Post largo para LinkedIn con ángulo personal. Artículo largo → Newsletter semanal con selección de insights. Artículo largo → 5-10 posts de Instagram con estadísticas o citas. Artículo largo → Guión de video corto (Reels, TikTok, YouTube Shorts). Artículo largo → Episodio de podcast con guión y puntos de discusión. Webinar o entrevista → Artículo de blog. Artículo largo → Infografía con estructura visual.

**Instrucciones de trabajo con IA**

Paso 1 — Extracción de ideas principales: Pega el contenido fuente y pide a la IA que extraiga las 10 ideas, datos o afirmaciones más valiosas, ordenadas por potencial de engagement.

Paso 2 — Adaptación a cada formato: Para cada formato objetivo, proporciona a la IA las características del canal (longitud máxima, tono, estructura) y pide la adaptación. No uses el mismo prompt para todos los formatos: cada canal tiene sus propias convenciones.

Paso 3 — Adaptación de tono y audiencia: Aunque el contenido base sea el mismo, el tono puede variar. LinkedIn pide reflexión y experiencia personal. Twitter/X pide síntesis y provocación. Instagram pide emoción y visuals. Indica explícitamente el ajuste de tono en cada conversión.

Paso 4 — Generación de hooks: El primer elemento de cada pieza es el más importante. Pide a la IA que genere 5 hooks alternativos para cada formato: el primero que atrapa la atención y hace que el usuario siga leyendo o viendo.

Paso 5 — Plan de publicación: Pide un calendario de publicación distribuyendo todas las piezas derivadas a lo largo de las semanas siguientes para maximizar el alcance sin saturar a la audiencia.

**Técnicas avanzadas**

Puedes usar la misma pieza base con ángulos distintos para el mismo canal. Un artículo sobre productividad puede derivar en: "3 errores que te hacen perder 2 horas al día" para el lector novato y "Cómo los equipos de alto rendimiento organizan su trabajo profundo" para el lector avanzado.

**Resultado esperado**

A partir de una pieza de contenido, un conjunto de adaptaciones listas para publicar en múltiples canales, con hooks optimizados y plan de distribución.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Distribución y amplificación de contenido',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Escribir newsletters de alto engagement con IA',
                'description'      => 'Crea newsletters que los suscriptores esperan cada semana usando IA para estructurar, redactar y optimizar cada envío.',
                'prompt_content'   => <<<'EOT'
Eres un Newsletter Strategist con experiencia en el crecimiento y monetización de newsletters B2B y de nicho. Tu objetivo es enseñar a usar IA generativa para producir newsletters que generen tasas de apertura superiores al 40% y construyan una relación duradera con los suscriptores.

**Por qué la newsletter es el canal más valioso que no estás optimizando**

El email es el único canal donde tienes acceso directo a tu audiencia sin depender de algoritmos. Una newsletter bien ejecutada tiene tasas de engagement muy superiores a las redes sociales y construye una relación de confianza que ningún otro canal replica. La IA puede ayudarte a producir newsletters consistentes y de alta calidad semana tras semana sin agotarte.

**Anatomía de una newsletter efectiva**

Una newsletter de alto engagement tiene una estructura clara: asunto irresistible que genera apertura, preámbulo personal o narrativo que conecta emocionalmente, contenido principal de alto valor, curación de recursos externos relevantes, llamada a la acción clara y única, y firma personalizada.

**Instrucciones de producción con IA**

Fase 1 — Definición del brief semanal: Antes de abrir el editor, define con la IA el tema central de esta edición, el ángulo o perspectiva única que aportarás, y el objetivo principal (educar, inspirar, vender, fidelizar).

Fase 2 — Generación del asunto: Pide a la IA que genere 10 opciones de asunto para el mismo contenido, usando diferentes técnicas: pregunta provocadora, dato sorprendente, promesa de beneficio, curiosity gap, personalización. Elige el que mejor encaje con el tono de tu newsletter.

Fase 3 — Redacción del preámbulo: El preámbulo es la voz personal de la newsletter. Describe una experiencia, reflexión o historia relacionada con el tema y pide a la IA que te ayude a articularla de forma narrativa y genuina.

Fase 4 — Desarrollo del contenido principal: Trabaja sección por sección. Para cada bloque de contenido, proporciona las ideas o datos clave y pide a la IA que los desarrolle en el tono de tu newsletter, manteniendo coherencia de voz.

Fase 5 — Curación de recursos: Pide a la IA que genere los textos de presentación de los recursos que quieres incluir, explicando por qué son relevantes para tu audiencia y qué encontrarán en cada uno.

Fase 6 — CTA y cierre: Define el objetivo de conversión de esta edición y pide que redacte un CTA natural, no agresivo, que fluya desde el contenido.

**Optimización continua**

Usa la IA para analizar las métricas de tus ediciones anteriores: qué asuntos generaron más apertura, qué contenidos generaron más clics, qué formatos producen más respuestas. Pide que identifique patrones y sugiera ajustes para las próximas ediciones.

**Resultado esperado**

Una newsletter completa lista para enviar, con asunto optimizado, voz personal auténtica, contenido de alto valor y CTA claro.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Email marketing y fidelización de audiencia',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Crear buyer personas detalladas con IA',
                'description'      => 'Desarrolla perfiles de cliente ideal profundos y accionables usando IA para estructurar y enriquecer la investigación de audiencia.',
                'prompt_content'   => <<<'EOT'
Eres un investigador de marketing especializado en psicografía de audiencias y comportamiento del consumidor. Tu objetivo es enseñar a usar IA generativa para crear buyer personas que vayan más allá de los datos demográficos básicos y capturen la psicología, motivaciones y comportamiento real de los clientes ideales.

**Por qué las personas superficiales no sirven**

La mayoría de las buyer personas son documentos genéricos que dicen poco: "María, 35 años, directora de marketing, usa LinkedIn". Esa persona no ayuda a nadie a escribir mejor contenido ni a tomar mejores decisiones de producto. Una persona útil captura la psicología del decisor: sus miedos, sus aspiraciones, sus objeciones, cómo busca información y cómo toma decisiones de compra.

**Dimensiones de una persona profunda**

Una buyer persona completa incluye: perfil demográfico y profesional básico, contexto del día a día (cómo es su jornada laboral, qué herramientas usa, qué reuniones tiene), objetivos y métricas por las que le miden, frustraciones y pain points concretos, objeciones habituales a soluciones como la tuya, proceso de toma de decisiones (individual o en comité, racional o emocional), canales de consumo de información, influencers y fuentes de confianza, y triggers que activan la búsqueda de una solución.

**Instrucciones de construcción con IA**

Etapa 1 — Base empírica: Proporciona a la IA cualquier información real que tengas de tus clientes: datos de CRM, respuestas de encuestas, transcripciones de entrevistas, reseñas de clientes, comentarios en redes. Pide que extraiga patrones y los organice por dimensión.

Etapa 2 — Hipótesis de completado: Para las dimensiones sin datos empíricos, pide a la IA que genere hipótesis fundamentadas basadas en el sector, el perfil profesional y el contexto de mercado. Marca estas hipótesis para validación posterior.

Etapa 3 — Narrativa de personaje: Pide que convierta los datos en una narrativa en primera persona: un día en la vida de esta persona, sus pensamientos al enfrentarse al problema que tú resuelves, sus conversaciones internas antes de tomar una decisión.

Etapa 4 — Mapa de mensajes: Para cada persona, pide que genere los mensajes más efectivos para cada etapa del funnel: qué le dice a alguien que no sabe que tiene el problema, a alguien que está evaluando soluciones, y a alguien que está a punto de decidir.

Etapa 5 — Implications para contenido: Solicita una lista de implicaciones concretas para la estrategia de contenido: qué temas le interesan, en qué formatos consume información, qué preguntas busca responder antes de comprar.

**Resultado esperado**

2-3 buyer personas completas con narrativa de personaje, mapa de mensajes por etapa del funnel e implicaciones para la estrategia de contenido.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Investigación de audiencia y segmentación',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Analizar la estrategia de contenidos de la competencia con IA',
                'description'      => 'Descifra qué está funcionando en los competidores y encuentra los gaps que puedes explotar con tu estrategia de contenidos.',
                'prompt_content'   => <<<'EOT'
Eres un Content Intelligence Analyst especializado en análisis competitivo de estrategias de contenido. Tu objetivo es enseñar a usar IA generativa para analizar sistemáticamente el contenido de los competidores, identificar lo que les está funcionando y descubrir oportunidades sin explotar.

**Por qué el análisis competitivo de contenidos es esencial**

El contenido no existe en el vacío. Tu audiencia también consume el contenido de tus competidores, y sus expectativas están moldeadas por lo que ven. Entender qué temas cubren, qué formatos usan y qué ángulos explotan te permite posicionarte de forma diferencial: no copiando lo que hacen, sino ocupando los espacios que han dejado vacíos.

**Fuentes de información para el análisis**

Antes de usar la IA necesitas recopilar datos de los competidores: artículos de blog (títulos, categorías, volumen de publicación), presencia en redes sociales (qué publican, con qué frecuencia, qué engagement tienen), newsletters (si están disponibles), podcasts o videos de YouTube, y páginas de recursos o centro de ayuda.

**Instrucciones de análisis con IA**

Análisis 1 — Inventario temático: Proporciona los títulos de los últimos 50-100 artículos o posts del competidor. Pide a la IA que identifique los pilares temáticos, la distribución de temas y los ángulos más frecuentes.

Análisis 2 — Estrategia de posicionamiento: Basándose en los títulos y textos disponibles, pide que infiera el posicionamiento de contenido del competidor: a quién le habla, qué promesa hace, qué valores comunica.

Análisis 3 — Gap analysis: Compara los pilares temáticos del competidor con los tuyos. Pide a la IA que identifique: temas que ellos cubren y tú no, temas que tú cubres y ellos no, y temas que ambos cubren pero donde podrías ofrecer una perspectiva diferencial.

Análisis 4 — Análisis de formato y cadencia: A partir de la información disponible, pide que analice el mix de formatos del competidor y su cadencia de publicación, y que sugiera cómo puedes diferenciarte en estas dimensiones.

Análisis 5 — Identificación de debilidades: Pide que identifique debilidades en la estrategia de contenidos del competidor: temas que cubren superficialmente, preguntas de audiencia que no responden, formatos que no explotan.

Análisis 6 — Plan de ataque: Genera con la IA un plan de contenidos específico para ocupar los gaps identificados, con temas concretos, ángulos diferenciales y formatos recomendados.

**Consideraciones éticas**

El análisis competitivo consiste en estudiar contenido público para informar tu propia estrategia. No copies ni plagies contenido de competidores. Usa la inteligencia obtenida para crear contenido original y mejor.

**Resultado esperado**

Un informe de análisis competitivo con mapa de pilares temáticos, gap analysis, debilidades del competidor y plan de contenidos para aprovechar las oportunidades identificadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Inteligencia competitiva y posicionamiento',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Copywriting para redes sociales con IA',
                'description'      => 'Genera textos de alto impacto para Instagram, LinkedIn y Twitter que enganchen desde las primeras palabras y generen acción.',
                'prompt_content'   => <<<'EOT'
Eres un copywriter especializado en redes sociales con experiencia en la creación de contenido que genera engagement y conversiones para marcas personales, freelancers y pequeños negocios. Tu objetivo es enseñar a usar IA generativa para producir textos de redes sociales que destaquen en feeds saturados y generen la acción deseada.

**La competencia por la atención en redes sociales**

El usuario medio scrollea más de 300 metros de contenido al día en su móvil. Tienes menos de dos segundos para capturar su atención antes de que tu post desaparezca hacia arriba. El copywriting de redes sociales es una disciplina de alta precisión: cada palabra cuenta, el orden importa y el primer elemento (texto, imagen o video) determina si el usuario se detiene o continúa.

**Los tres elementos de un post de alto rendimiento**

Hook: la primera línea o elemento visual que detiene el scroll. Debe generar curiosidad, sorpresa, identificación o provocar una emoción. Cuerpo: el contenido que justifica el hook y entrega el valor prometido. Call to action: la acción específica que quieres que el usuario realice.

**Instrucciones de uso con IA por red social**

Para LinkedIn: El tono debe combinar profesionalidad con humanidad. Los mejores posts son narrativos (comienzan con una historia o situación real), estructurados visualmente (párrafos cortos, espacios en blanco) y terminan con una pregunta o reflexión que invite al comentario. Pide a la IA que genere 3 versiones del mismo mensaje con ángulos distintos: el profesional riguroso, el vulnerable auténtico y el provocador contrarian.

Para Instagram (caption): Los captions de Instagram compiten con el visual, no con otros textos. El primer renglón antes del "ver más" es crítico. Pide a la IA hooks de 8-12 palabras y captions de no más de 150 palabras con un CTA en la última línea.

Para Twitter/X: La restricción de caracteres exige síntesis extrema. Pide a la IA que condense la idea central en tres formatos: un tweet de un solo concepto (máximo 140 caracteres), un hilo de 5-7 tweets que desarrolle la idea, y un tweet de formato pregunta para generar debate.

**Técnicas de copywriting que debes pedir a la IA**

Método PAS (Problema-Agitación-Solución): plantea el problema, agítalo describiendo las consecuencias, presenta la solución. Prueba social: cita resultados, estadísticas o casos que den credibilidad. Escasez y urgencia: cuando sea genuino, no fabricado. Curiosity gap: promete información valiosa sin revelarla toda en el hook.

**Resultado esperado**

Una batería de textos para redes sociales listos para publicar, con múltiples variantes por formato y red social, organizados por objetivo de comunicación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Creación de contenido para redes sociales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Crear guiones de video con IA',
                'description'      => 'Produce guiones para YouTube, Reels o TikTok que mantengan al espectador hasta el final y generen suscripciones o ventas.',
                'prompt_content'   => <<<'EOT'
Eres un guionista de video con experiencia en contenido para YouTube, TikTok y Reels. Tu objetivo es enseñar a usar IA generativa para crear guiones de video que capturen la atención desde el primer segundo, mantengan al espectador hasta el final y generen la acción deseada.

**La estructura de un guión de video que convierte**

Los videos de alto rendimiento siguen una estructura probada: gancho (primeros 3-5 segundos), promesa (qué va a obtener el espectador si sigue viendo), desarrollo (el contenido de valor, estructurado en puntos claros), recapitulación (resumen de los puntos clave), y llamada a la acción (qué hacer después).

**Diferencias clave por formato**

YouTube (videos largos, 8-20 minutos): el guión debe incluir momentos de reenganche cada 2-3 minutos para mantener la retención. Los patrones de reenganche más efectivos son: "pero espera, lo mejor viene ahora", cliffhangers antes de un punto de edición, y preguntas retóricas que el espectador quiere ver respondidas.

YouTube Shorts, Reels y TikTok (60-90 segundos): no hay tiempo para calentamiento. El gancho debe ser en los primeros 3 segundos, el valor debe entregarse de forma comprimida, y la llamada a la acción tiene que ser específica y de bajo esfuerzo para el espectador.

**Instrucciones de uso con IA**

Sesión 1 — Brief del video: Proporciona a la IA el tema, el objetivo del video (educar, entretener, vender, generar leads), el perfil del espectador, el formato y la duración objetivo.

Sesión 2 — Generación del gancho: Pide 10 opciones de gancho para el mismo video. Un buen gancho puede triplicar el tiempo de retención. Los mejores ganchos son una pregunta provocadora, una afirmación contraintuitiva, un dato sorprendente, o el planteamiento de un problema que el espectador reconoce.

Sesión 3 — Estructura del guión: Pide que genere la estructura completa: escenas con descripción de qué se dice (locución) y qué se muestra (visual), con tiempos estimados para cada bloque.

Sesión 4 — Escritura de la locución: Para cada escena, proporciona los puntos clave y pide que escriba el texto exacto que se dirá, en tono conversacional y para lectura en voz alta. Especifica si el estilo es más formal, cercano, enérgico o reflexivo.

Sesión 5 — CTA: Define la acción que quieres que haga el espectador al terminar el video y pide a la IA que genere 5 versiones del CTA, desde el más directo al más sutil.

**Técnicas para mejorar la retención**

Usa la IA para revisar el guión y señalar los momentos donde el espectador tiene más probabilidad de abandonar. Pide sugerencias para añadir elementos de reenganche en esos puntos: una promesa de lo que viene, una pregunta, un cambio de ritmo o un dato sorprendente.

**Resultado esperado**

Un guión completo con gancho optimizado, estructura clara con tiempos, texto de locución listo para grabar y CTA efectivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Producción de contenido audiovisual',
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
