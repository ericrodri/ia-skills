<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills215Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Análisis competitivo de marketing',
                'description'       => 'Estudia a la competencia para diferenciarte: el análisis del mensaje, los canales y las campañas de los competidores y la síntesis que revela los espacios en blanco donde tu marca puede destacar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un estratega de marketing y experto en inteligencia competitiva con experiencia realizando análisis competitivos de marketing para empresas B2B y B2C en sectores de alta competencia. Quiero entender profundamente cómo posiciona su marketing la competencia para identificar los espacios en blanco donde mi marca puede diferenciarse sin competir de frente.

**Preguntas iniciales:**
1. ¿Cuál es tu empresa, el producto o servicio que ofreces y cuál es el sector?
2. ¿Quiénes son los tres o cuatro competidores principales que quieres analizar?
3. ¿Cuál es el objetivo del análisis: refinar el posicionamiento de la marca, mejorar la estrategia de contenidos, optimizar el paid media o preparar el lanzamiento de un nuevo producto?
4. ¿Hay algún competidor específico que el equipo percibe como la mayor amenaza o del que más se aprende?

**EL FRAMEWORK DE ANÁLISIS COMPETITIVO DE MARKETING:**

ANÁLISIS DEL POSICIONAMIENTO Y EL MENSAJE
El posicionamiento de un competidor se revela en cómo habla de su producto, no en lo que dice en su página "About". Ayúdame a analizar el posicionamiento de los competidores: el tagline y la propuesta de valor principal de la home, el claim para cada segmento de cliente en sus páginas de soluciones o industrias, el lenguaje que usan para describir el problema del cliente (el framing del problema es el posicionamiento más honesto), los testimoniales y casos de éxito que destacan (revelan a qué cliente ideal se dirigen) y las objeciones que responden en sus FAQs y páginas de comparativa.

ANÁLISIS DE CANALES Y ESTRATEGIA DE CONTENIDOS
La estrategia de contenidos de un competidor es un mapa de sus prioridades de marketing. Ayúdame a analizar la estrategia de contenidos de los competidores: los temas que dominan en su blog y los que evitan, la frecuencia de publicación y la profundidad del contenido (indicador de la inversión en SEO), los formatos de contenido que priorizan (video, podcast, newsletter, eventos), la estrategia de social media por plataforma y el tipo de contenido que genera más engagement.

ANÁLISIS DE PAID MEDIA
La inversión en paid media revela las prioridades de adquisición y los mensajes que funcionan para la competencia. Ayúdame a analizar la estrategia de paid media de los competidores usando las herramientas disponibles: la Meta Ad Library para ver los anuncios activos en Facebook e Instagram, el Google Ads Transparency Center para los anuncios de búsqueda y display, las palabras clave en las que pujan (usando SEMrush o SimilarWeb) y el ángulo creativo de sus anuncios (qué beneficio destacan, qué objeción atacan, qué CTA usan).

**SÍNTESIS Y OPORTUNIDADES:**

EL MAPA DE POSICIONAMIENTO COMPETITIVO
Una vez recogidos los datos, el siguiente paso es sintetizarlos en un mapa de posicionamiento que revele los espacios en blanco. Ayúdame a construir el mapa de posicionamiento competitivo: el eje de dos dimensiones que mejor captura las diferencias de posicionamiento en mi sector, la ubicación de cada competidor en el mapa y los espacios que están desatendidos o donde la competencia está convergiendo hacia el mismo mensaje.

IDENTIFICACIÓN DE LOS ESPACIOS EN BLANCO
Los espacios en blanco son los problemas del cliente que nadie está comunicando, los segmentos que nadie está atendiendo bien o los canales donde la competencia no está presente. Ayúdame a identificar los espacios en blanco de marketing que representan una oportunidad de diferenciación: los temas de contenido que la competencia no cubre, los segmentos de cliente que están subatendidos en el mensaje de la competencia y los canales donde podría posicionarme con menos competencia.

PLAN DE ACCIÓN
El análisis competitivo sin acción es un ejercicio académico. Ayúdame a convertir los insights del análisis en un plan de acción de marketing concreto: los cambios en el posicionamiento y el mensaje que incorporo, las apuestas de canales o contenidos donde veo una oportunidad clara y los elementos del marketing de la competencia que me inspiran sin copiar.

Dame el análisis competitivo de marketing completo y la hoja de ruta para posicionar mi marca de manera que se diferencie claramente de la competencia en los elementos que más importan a mi cliente ideal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Análisis competitivo de marketing y detección de oportunidades de diferenciación',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technology radar: mapear el ecosistema tecnológico',
                'description'       => 'Construye el mapa del ecosistema tecnológico de tu sector: las tecnologías emergentes, los proyectos a observar y el proceso que mantiene al equipo informado sin reuniones de análisis infinitas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CTO y arquitecto de software con experiencia construyendo y manteniendo technology radars para equipos de ingeniería de empresas de tecnología. Quiero construir un proceso de inteligencia tecnológica que mantenga al equipo informado sobre el ecosistema sin convertirse en una carga burocrática ni en una reunión de análisis infinita.

**Preguntas iniciales:**
1. ¿Cuál es el stack tecnológico principal del equipo y el sector en el que opera la empresa?
2. ¿Existe algún proceso actual de seguimiento de tendencias tecnológicas o es algo informal?
3. ¿El objetivo principal es adoptar tecnologías nuevas más rápido, evitar apostar por tecnologías que van a quedar obsoletas o ambos?
4. ¿Cuántos engineers tiene el equipo y cuánto tiempo pueden dedicar razonablemente a actividades de exploración tecnológica?

**EL TECHNOLOGY RADAR:**

QUÉ ES Y POR QUÉ FUNCIONA
El technology radar, popularizado por ThoughtWorks, es una representación visual del estado de las tecnologías, herramientas, técnicas y plataformas que el equipo de ingeniería observa, evalúa, adopta o descarta. Ayúdame a entender el framework: los cuatro cuadrantes (técnicas, herramientas, plataformas, lenguajes y frameworks), los cuatro anillos (adoptar, probar, evaluar, descartar) y los criterios que se usan para ubicar cada ítem en su posición.

CÓMO CONSTRUIR EL RADAR DEL EQUIPO
El valor del technology radar está en el proceso de construcción colectiva, no solo en el documento final. Ayúdame a diseñar el proceso de construcción del radar para mi equipo: la cadencia de actualización (trimestral o semestral), el proceso de nominación de nuevos ítems por cualquier miembro del equipo, el debate estructurado donde el equipo evalúa cada ítem y lo posiciona en el radar y el formato de sesión que es eficiente y no se convierte en un debate filosófico interminable.

**MONITORIZACIÓN DEL ECOSISTEMA TECNOLÓGICO:**

FUENTES DE INFORMACIÓN TECNOLÓGICA
El radar solo puede ser tan bueno como la información que lo alimenta. Dame el mapa de fuentes de información que uso para monitorizar el ecosistema tecnológico de mi sector: los papers de investigación relevantes (arXiv, ACM), los blogs técnicos de las empresas líderes (Engineering blogs de Netflix, Stripe, Airbnb, Cloudflare), los repositorios de GitHub a seguir (los proyectos con mayor actividad y crecimiento en mi área), las conferencias técnicas cuyas talks son fuente de señales tempranas y las newsletters técnicas que tienen mejor ratio señal-ruido.

GITHUB COMO FUENTE DE SEÑALES
GitHub es el mejor indicador del momentum de un proyecto de software. Ayúdame a construir el sistema de monitorización de proyectos en GitHub: los criterios para identificar proyectos prometedores (crecimiento de stars, velocidad de commits, calidad de la documentación, tamaño y actividad de la comunidad), cómo usar GitHub Trending y las Awesome Lists como fuentes de discovery y cómo diferenciar los proyectos con momentum real de los que tienen hype sin sustancia.

**EVALUACIÓN Y ADOPCIÓN:**

EL PROCESO DE EVALUACIÓN TÉCNICA
Antes de adoptar una tecnología, hay que evaluarla con rigor. Diseña conmigo el proceso de evaluación técnica que el equipo usa para las tecnologías en el anillo "evaluar": la spike de una semana donde un engineer construye un prototipo con la tecnología nueva, el formato del informe de evaluación que comparte los hallazgos con el equipo y los criterios de decisión para mover la tecnología al anillo "probar" o al de "descartar".

ADOPCIÓN GRADUAL
Las tecnologías nuevas deben adoptarse de manera gradual para aprender sin incurrir en riesgos innecesarios. Dame el proceso de adopción gradual: cómo usar el proyecto de menor riesgo del roadmap para probar la tecnología nueva en producción, cómo medir si la adopción está siendo exitosa y cuándo es el momento de escalar la adopción a todos los proyectos.

Dame el sistema completo de inteligencia tecnológica para que el equipo esté siempre un paso por delante de las tendencias sin que el proceso de seguimiento consuma tiempo productivo de los engineers.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construcción y mantenimiento de un technology radar para equipos de ingeniería',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX benchmarking: aprender de la competencia para diseñar mejor',
                'description'       => 'Analiza la experiencia de usuario de los competidores y los mejores productos del sector: el análisis heurístico, el competitive teardown y los insights que inspiran sin copiar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un UX researcher y diseñador de producto senior con experiencia realizando análisis de benchmarking competitivo de UX para informar las decisiones de diseño de productos digitales. Quiero aprender sistemáticamente de los mejores productos de mi sector para mejorar la experiencia de usuario de mi producto sin copiar y sin sesgarme por las soluciones existentes.

**Preguntas iniciales:**
1. ¿Cuál es el producto que diseñas y cuáles son los flujos o áreas que quieres mejorar?
2. ¿Quiénes son los competidores directos e indirectos más relevantes para el benchmarking?
3. ¿El objetivo es mejorar la usabilidad, encontrar inspiración para el rediseño de un flujo específico o entender el estado del arte para un producto nuevo?
4. ¿Hay algún flujo o pantalla concreta que sabes que tiene problemas de usabilidad o satisfacción?

**EL FRAMEWORK DE UX BENCHMARKING:**

ANÁLISIS HEURÍSTICO COMPARATIVO
El análisis heurístico es la técnica más eficiente para evaluar la usabilidad de la competencia sin necesidad de realizar tests con usuarios. Ayúdame a aplicar el análisis heurístico comparativo a los productos de la competencia: las 10 heurísticas de Nielsen como marco de evaluación, cómo registrar los hallazgos de manera estructurada para compararlos entre productos, cómo priorizar los hallazgos según su severidad e impacto y cómo traducir los problemas encontrados en los productos de la competencia en oportunidades de mejora para el producto propio.

COMPETITIVE TEARDOWN DE FLUJOS CLAVE
El teardown consiste en hacer la disección completa de un flujo de un producto competidor, pantalla por pantalla, para entender las decisiones de diseño y su impacto en la experiencia. Ayúdame a realizar el teardown de los flujos más críticos de los productos de la competencia: el proceso de onboarding (cómo llevan al usuario del registro al primer valor), el flujo de la tarea principal (el job-to-be-done central del producto) y el flujo de pago o conversión. Para cada pantalla, analizo qué funciona, qué no funciona y cuál es la hipótesis detrás de la decisión de diseño.

**ANÁLISIS DE PATRONES:**

DESIGN PATTERNS DE LA INDUSTRIA
Los patrones de diseño que los mejores productos del sector han convergido en usar son señales de lo que funciona para los usuarios de ese tipo de producto. Ayúdame a identificar los patrones de diseño que se repiten en los mejores productos de mi sector: los patrones de navegación, los patrones de presentación de información compleja, los patrones de onboarding y los patrones de feedback al usuario. La convergencia en un patrón es evidencia de que funciona; la divergencia es una señal de que hay espacio para la innovación.

BENCHMARKING DE MICROINTERACCIONES
Las microinteracciones son los detalles que diferencian los productos que los usuarios quieren usar de los que tienen que usar. Identifica conmigo las microinteracciones más destacables de los productos de la competencia: los estados de carga que no interrumpen el flujo, los mensajes de error que ayudan en lugar de frustrar, los gestos y animaciones que hacen la interfaz más fluida y los momentos de deleite que sorprenden positivamente al usuario.

**SÍNTESIS Y APLICACIÓN:**

DE LOS INSIGHTS A LAS DECISIONES DE DISEÑO
El benchmarking genera muchos insights pero el valor está en saber cuáles aplico a mi producto. Ayúdame a priorizar los insights del benchmarking según su potencial impacto en la experiencia de mi producto y su viabilidad de implementación: qué aprendo directamente de la competencia, qué mejoro adaptando las soluciones que he visto al contexto propio y dónde veo una oportunidad de ir más allá de lo que la competencia ofrece.

DOCUMENTACIÓN Y COMUNICACIÓN
Los insights del UX benchmarking deben estar disponibles para todo el equipo de producto. Ayúdame a diseñar el formato de documentación del benchmarking que es útil como referencia durante el proceso de diseño: cómo organizar los screenshots y los análisis, cómo presentar los hallazgos a los stakeholders de manera que generen decisiones y cómo mantener el benchmarking actualizado a medida que los productos evolucionan.

Dame el proceso completo de UX benchmarking que el equipo de diseño puede ejecutar de manera sistemática para mantenerse inspirado y fundamentado en las mejores prácticas del sector.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Análisis de benchmarking UX para informar decisiones de diseño de producto',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Win/loss analysis: aprender de las oportunidades ganadas y perdidas',
                'description'       => 'Implementa el proceso de análisis de deals ganados y perdidos que mejora la tasa de cierre: las entrevistas con clientes, los patrones y las acciones correctivas que convierten análisis en mejoras.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Sales y experto en Revenue Operations con experiencia implementando programas de win/loss analysis en equipos de ventas B2B. Quiero implementar un proceso sistemático de análisis de deals ganados y perdidos que genere insights accionables para mejorar la tasa de cierre del equipo.

**Preguntas iniciales:**
1. ¿Cuál es el ciclo de venta típico y el ACV del deal promedio?
2. ¿Se registran actualmente los motivos de pérdida de los deals en el CRM? ¿Con qué granularidad?
3. ¿Con qué frecuencia interactúa el equipo de ventas con el equipo de producto para compartir el feedback del mercado?
4. ¿El mayor problema es la tasa de cierre baja, el pipeline insuficiente o los ciclos de venta demasiado largos?

**EL PROGRAMA DE WIN/LOSS ANALYSIS:**

POR QUÉ EL ANÁLISIS DEL CRM NO ES SUFICIENTE
Los motivos de pérdida que los comerciales registran en el CRM son, en el mejor de los casos, una aproximación a la realidad. El comercial que perdió el deal raramente tiene la perspectiva completa de por qué perdió y, cuando la tiene, tiende a atribuir la pérdida a factores externos (el precio, la competencia) en lugar de factores propios (el proceso de venta, el descubrimiento de necesidades, la demostración). El único que sabe por qué el deal se perdió es el comprador. Ayúdame a diseñar el programa de entrevistas de win/loss que recoge la perspectiva real de los compradores.

LAS ENTREVISTAS DE WIN/LOSS
La entrevista de win/loss es una conversación de 30-45 minutos con el comprador donde se exploran las razones reales de la decisión. Diseña conmigo el proceso completo: quién hace las entrevistas (idealmente alguien de producto o marketing, no el comercial que estuvo en el deal), cómo se contacta al comprador de manera que acepta hablar (el framing correcto), las preguntas que revelan los factores reales de la decisión (el momento en que se formó la opinión sobre el producto, los criterios de evaluación que más pesaron, la percepción comparada con la competencia), cómo evitar las respuestas políticamente correctas y cómo documentar la entrevista para que sea útil.

**ANÁLISIS Y SÍNTESIS:**

PATRONES EN LOS DEALS GANADOS
Los deals ganados también tienen patrones que, una vez identificados, pueden reproducirse. Ayúdame a analizar los deals ganados: las características del cliente ideal que correlacionan con el cierre (tamaño, sector, momento de compra, trigger que inició el proceso de evaluación), las fases del proceso de venta que se ejecutaron mejor en los deals ganados y los factores diferenciadores que los compradores mencionan cuando explican por qué nos eligieron a nosotros.

PATRONES EN LOS DEALS PERDIDOS
Los deals perdidos son la fuente de aprendizaje más valiosa del equipo de ventas. Ayúdame a identificar los patrones de pérdida: los momentos del ciclo de venta donde se pierde el deal con mayor frecuencia, los perfiles de competidor que ganamos y a los que perdemos según el tipo de cliente, las objeciones que el equipo no responde bien y los factores del proceso de venta (descubrimiento superficial, demo genérica, propuesta poco personalizada) que contribuyen a las pérdidas.

**ACCIONES CORRECTIVAS:**

DE LOS INSIGHTS A LOS CAMBIOS EN EL PROCESO
El win/loss analysis sin cambios en el proceso es un ejercicio académico. Ayúdame a convertir los insights en acciones concretas: las modificaciones en el ICP y el proceso de cualificación para dejar de invertir tiempo en deals que el equipo no puede ganar, las mejoras en el pitch y la demo que responden a las objeciones más frecuentes, el entrenamiento específico del equipo en las fases del proceso donde los deals se caen con mayor frecuencia y el feedback al equipo de producto sobre las features que se mencionan en los análisis de pérdida como la razón de elegir a la competencia.

CADENCIA Y REPORTING
Para que el win/loss analysis tenga impacto, debe ser un proceso continuo con una cadencia clara de reporting. Dame el diseño del programa: la frecuencia de las entrevistas, el formato del informe mensual de win/loss que comparte los insights con ventas, producto y marketing y cómo medir si los cambios implementados están mejorando la tasa de cierre.

Dame el programa completo de win/loss analysis que convierte cada deal ganado y cada deal perdido en un aprendizaje que mejora los resultados del equipo de ventas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementación de un programa de win/loss analysis para mejorar la tasa de cierre',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Competitive intelligence para product managers',
                'description'       => 'Mantén el mapa competitivo actualizado sin que consuma todo tu tiempo: los recursos, la frecuencia y el formato del competitive intelligence que informa las decisiones de roadmap.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior con experiencia manteniendo programas de inteligencia competitiva en equipos de producto de empresas de tecnología B2B. Quiero construir un sistema de competitive intelligence que mantenga el mapa competitivo actualizado y que informe las decisiones de roadmap sin convertirse en un proyecto de investigación interminable.

**Preguntas iniciales:**
1. ¿Cuál es el producto y el mercado en el que compites?
2. ¿Cuántos competidores directos e indirectos tienes y cuáles son los más relevantes?
3. ¿Existe algún proceso de competitive intelligence actualmente o es ad hoc?
4. ¿El mayor reto es no tener tiempo para el competitive intelligence, no saber qué monitorizar o no saber cómo convertir los insights en decisiones de roadmap?

**EL SISTEMA DE COMPETITIVE INTELLIGENCE:**

LAS FUENTES DE INFORMACIÓN COMPETITIVA
La inteligencia competitiva de producto requiere monitorizar múltiples fuentes. Ayúdame a construir el mapa de fuentes por tipo de insight: las reseñas en G2, Capterra y Trustpilot (revelan los problemas de los usuarios con los productos de la competencia y las features que más valoran), las novedades de producto (changelogs públicos, release notes, blog posts de producto), los anuncios de funding y contrataciones de los competidores (señales de dónde van a invertir), los job postings (revelan las prioridades estratégicas antes de que se anuncien públicamente) y los comentarios en comunidades como Reddit, Hacker News o foros del sector.

EL SISTEMA DE MONITORIZACIÓN AUTOMATIZADA
La monitorización manual de la competencia no es sostenible. Ayúdame a construir el sistema de alertas que automatiza la captura de información competitiva: Google Alerts para las menciones de los competidores en medios, Feedly o similar para seguir los blogs de producto, las notificaciones de LinkedIn de los ejecutivos clave de los competidores y los repositorios de GitHub de los competidores con código abierto.

**ANÁLISIS DE LA COMPETENCIA:**

EL COMPETITIVE ANALYSIS TRIMESTRAL
Una vez al trimestre, el competitive intelligence debe sintetizarse en un análisis profundo. Dame el framework del competitive analysis trimestral: cómo comparar el posicionamiento y el ICP de los competidores con el propio, cómo analizar los cambios en el producto que lanzaron en el último trimestre y qué revelan sobre su estrategia, cómo evaluar si la brecha de funcionalidades con los competidores ha crecido o disminuido y cómo traducir el análisis en implicaciones concretas para el roadmap.

ANÁLISIS DE RESEÑAS DE LA COMPETENCIA
Las reseñas de los productos de la competencia son el user research más honesto que existe porque los usuarios no saben que los estás leyendo. Diseña conmigo el proceso de análisis de reseñas de la competencia: cómo leer las reseñas de G2 o Capterra para identificar los trabajos que los usuarios tratan de hacer con el producto (jobs-to-be-done), los problemas recurrentes que mencionan (oportunidades para diferenciarse en esas áreas) y los elogios más frecuentes (las fortalezas que debo tener en cuenta al competir).

**INTELIGENCIA COMPETITIVA COMO INSUMO DEL ROADMAP:**

CÓMO USAR EL COMPETITIVE INTELLIGENCE EN EL ROADMAP
El competitive intelligence no debe dictar el roadmap, pero sí debe informarlo. Ayúdame a establecer el proceso de integración del competitive intelligence en las decisiones de roadmap: cómo usar el mapa de features de la competencia para priorizar las decisiones de "construir vs. paridad vs. diferenciación", cómo comunicar la estrategia competitiva al equipo de producto y de ingeniería de manera que informa sin crear ansiedad y cómo evitar la trampa de construir el roadmap reactivamente a los movimientos de la competencia.

COMUNICACIÓN DE LA INTELIGENCIA COMPETITIVA
El competitive intelligence tiene valor solo si llega a las personas que pueden actuar sobre él. Dame el diseño del programa de distribución de la inteligencia competitiva: el canal donde publico las alertas inmediatas (Slack), el formato del resumen mensual para el equipo de producto y ventas y la presentación trimestral al liderazgo con las implicaciones estratégicas del análisis competitivo.

Dame el sistema completo de competitive intelligence para product managers que mantiene el equipo informado sobre el mercado sin consumir más de dos horas semanales de tiempo del PM.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de competitive intelligence para informar decisiones de roadmap de producto',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Benchmarking de compensación y beneficios',
                'description'       => 'Compara la propuesta de valor del empleado con el mercado: las fuentes de datos de compensación, la metodología del benchmarking y el proceso de revisar las bandas salariales para seguir siendo competitivos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en compensación y beneficios con experiencia diseñando e implementando procesos de benchmarking salarial en empresas de tecnología y servicios profesionales en mercados competitivos. Quiero implementar un proceso de benchmarking de compensación que asegure que la empresa sigue siendo competitiva en el mercado de talento sin incurrir en costes salariales insostenibles.

**Preguntas iniciales:**
1. ¿Cuál es el sector de la empresa, el tamaño y las geografías donde contrata talento?
2. ¿Existe actualmente una política de bandas salariales o las compensaciones se negocian de manera individual y ad hoc?
3. ¿Cuál es el mayor problema de compensación que experimenta la empresa: pérdida de talento por compensación por debajo del mercado, inconsistencias internas entre personas en roles similares o dificultad para contratar en ciertas posiciones?
4. ¿Cuál es el posicionamiento deseado de la empresa en el mercado: pagar en la mediana del mercado, en el percentil 75 o en el top 10%?

**LAS FUENTES DE DATOS DE COMPENSACIÓN:**

ENCUESTAS SALARIALES DE MERCADO
Las fuentes más fiables de datos de compensación son las encuestas salariales realizadas por terceros. Ayúdame a entender las principales fuentes de datos de compensación disponibles: las encuestas de consultoras especializadas (Mercer, Willis Towers Watson, Aon), las encuestas de asociaciones sectoriales, los datos de plataformas como Glassdoor, Levels.fyi (para perfiles tecnológicos) y LinkedIn Salary, y las encuestas internas de salary sharing de comunidades de profesionales. Para cada fuente, ayúdame a entender su fiabilidad, su coste, el tipo de roles que cubre mejor y cómo interpretar los datos correctamente.

DATOS DE COMPENSACIÓN PÚBLICOS
Hay fuentes de datos de compensación que son públicas y gratuitas pero que requieren saber usarlas. Dame la guía para usar los datos públicos de compensación: cómo extraer datos relevantes de LinkedIn Salary, cómo usar los datos de encuestas abiertas de la comunidad (como las encuestas anuales de Stack Overflow para perfiles técnicos) y cómo triangular entre múltiples fuentes para construir una referencia de mercado más robusta.

**LA METODOLOGÍA DEL BENCHMARKING:**

JOB MATCHING: EL PASO MÁS CRÍTICO
El mayor error en el benchmarking salarial es comparar mal los roles. El mismo título de "Senior Software Engineer" puede corresponder a bandas salariales muy diferentes en función del nivel de responsabilidad, el tamaño del equipo y la complejidad técnica. Ayúdame a diseñar el proceso de job matching correcto: cómo definir los factores de evaluación del rol (impacto, complejidad, autonomía, alcance) que permiten compararlo correctamente con los datos del mercado independientemente del título.

ANÁLISIS DE LOS DATOS Y PERCENTILES
Una vez recogidos los datos del mercado, hay que analizarlos correctamente. Ayúdame a interpretar los percentiles de compensación: qué significa ser competitivo en el P50 versus el P75, cómo afecta la geografía (salarios en Madrid vs. Barcelona vs. remoto con acceso a mercado global) y cómo ajustar los datos del mercado por el tamaño y el estadio de la empresa (una startup en early stage no compite en el mismo mercado que una empresa cotizada).

**DISEÑO DE BANDAS SALARIALES:**

ESTRUCTURA DE BANDAS SALARIALES
Una vez completado el benchmarking, el resultado es una estructura de bandas salariales. Ayúdame a diseñar la estructura de bandas: el número de niveles por familia de roles, el rango de cada banda (mínimo, midpoint, máximo), el solapamiento entre bandas consecutivas y cómo gestionar los casos en que un empleado está fuera de la banda (por encima o por debajo).

REVISIÓN ANUAL DEL BENCHMARKING
El mercado de compensación cambia cada año, especialmente en sectores con alta demanda de talento. Diseña el proceso de revisión anual del benchmarking: cuándo actualizar los datos, cómo gestionar los ajustes salariales que resultan de la revisión y cómo comunicar internamente los cambios en las bandas salariales de manera que refuerce la confianza del equipo en la equidad interna.

Dame el sistema completo de benchmarking de compensación que asegura que la empresa sigue siendo competitiva en el mercado de talento sin pagar más de lo necesario y con equidad interna que el equipo percibe como justa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño e implementación de un proceso de benchmarking de compensación y beneficios',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de comparables y valoración relativa',
                'description'       => 'Valora una empresa comparándola con sus pares: el análisis de múltiplos EV/EBITDA, P/E y EV/Revenue, la selección de comparables relevantes y las limitaciones que todo analista debe conocer.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista financiero senior con experiencia en valoración de empresas mediante análisis de comparables en banca de inversión, private equity y corporate finance. Quiero dominar el análisis de comparables como metodología de valoración y entender tanto su aplicación correcta como sus limitaciones.

**Preguntas iniciales:**
1. ¿Cuál es el contexto de la valoración: M&A, inversión, levantamiento de capital, planificación estratégica o análisis académico?
2. ¿La empresa a valorar es cotizada o privada?
3. ¿Cuál es el sector de la empresa y sus principales características financieras (rentable o en crecimiento, asset-light o capital-intensiva)?
4. ¿Cuál es el nivel de familiaridad con los conceptos financieros básicos: estados financieros, EBITDA, múltiplos?

**FUNDAMENTOS DEL ANÁLISIS DE COMPARABLES:**

QUÉ SON LOS MÚLTIPLOS Y POR QUÉ FUNCIONAN
La valoración relativa se basa en un principio simple: empresas similares deben valer cantidades similares. Los múltiplos de valoración son la expresión matemática de este principio: el precio que el mercado paga por cada unidad de beneficio, ingresos o flujo de caja de una empresa. Ayúdame a entender los múltiplos más usados en el análisis de comparables: el EV/EBITDA (el múltiplo más universal para empresas con beneficio operativo), el EV/Revenue (para empresas en crecimiento sin EBITDA positivo), el P/E o PER (precio sobre beneficio neto, para empresas maduras y rentables) y los múltiplos sectoriales específicos (EV/Beds para hoteles, EV/Suscriber para telecomunicaciones, ARR múltiple para SaaS).

ENTERPRISE VALUE VS EQUITY VALUE
La distinción entre Enterprise Value (EV) y Equity Value es crítica para no cometer errores en la valoración. Ayúdame a entender la diferencia: qué incluye el EV (capitalización de mercado más deuda neta), por qué los múltiplos de EV son más comparables entre empresas con diferente estructura de capital, cuándo se usan los múltiplos de Equity Value (P/E) y los errores más comunes que cometen los analistas al confundir los dos conceptos.

**SELECCIÓN DEL GRUPO DE COMPARABLES:**

CRITERIOS DE SELECCIÓN
La calidad del análisis de comparables depende en gran medida de la calidad del grupo de empresas comparables. Ayúdame a definir los criterios de selección de comparables: los criterios de sector (mismo negocio principal o negocios similares), los criterios de tamaño (un comparable diez veces mayor o menor tiene múltiplos muy diferentes), los criterios de geografía (los mercados tienen primas y descuentos de valoración propios), los criterios de crecimiento y rentabilidad (empresas con perfiles de crecimiento similares se valoran con múltiplos similares) y cómo gestionar el caso en que no hay comparables puros.

FUENTES PARA ENCONTRAR COMPARABLES
Dame las fuentes que uso para identificar el grupo de comparables: las búsquedas en plataformas de datos financieros (Bloomberg, Capital IQ, FactSet), las clasificaciones sectoriales (GICS, SIC codes), los análisis de peers que publican los brokers de bolsa y las Awesome Lists de SaaS o industrias específicas para empresas privadas.

**CONSTRUCCIÓN DEL ANÁLISIS:**

EL MODELO DE COMPARABLES
Dame la guía para construir el modelo de análisis de comparables en Excel: la estructura de la tabla con los comparables en filas y los múltiplos en columnas, cómo extraer las métricas financieras correctas (LTM vs NTM, ajustado vs reportado), el cálculo del EV a partir de la capitalización de mercado y la deuda neta y cómo calcular el rango de valoración implícito para la empresa objetivo aplicando los percentiles del grupo de comparables.

ANÁLISIS DE LA DISPERSIÓN
Cuando el grupo de comparables tiene múltiplos muy dispersos, la mediana no cuenta toda la historia. Ayúdame a analizar la dispersión: cuándo excluir outliers del análisis, cómo identificar qué factor explica la dispersión de múltiplos (crecimiento, rentabilidad, riesgo percibido) y cómo ajustar los múltiplos para que sean más comparables cuando las empresas tienen perfiles financieros diferentes (regresión múltiplos vs. crecimiento).

LIMITACIONES Y ERRORES COMUNES
El análisis de comparables tiene limitaciones importantes que todo analista debe conocer para no usarlo mecánicamente. Dame el análisis de las limitaciones: el problema del market timing (los múltiplos cambian con el ciclo de mercado), el problema de los comparables impuros, el riesgo de circular reasoning en mercados donde todas las empresas cotizan caras o baratas y los errores más comunes que cometen los analistas al presentar un análisis de comparables.

Dame el dominio completo del análisis de comparables para que pueda construir valoraciones relativas rigurosas y comunicarlas con confianza a los stakeholders.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Análisis de comparables y valoración relativa de empresas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Inteligencia regulatoria: anticipar los cambios normativos',
                'description'       => 'Monitoriza los cambios regulatorios que afectan al negocio antes de que sean obligatorios: las fuentes de información regulatoria, el análisis de impacto y el sistema de alerta temprana.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en regulatory affairs y compliance con experiencia implementando sistemas de inteligencia regulatoria para empresas en sectores regulados como fintech, healthtech, telecomunicaciones, energía y tecnología. Quiero construir un sistema que anticipe los cambios regulatorios que van a afectar al negocio con suficiente antelación para adaptarse sin sorpresas.

**Preguntas iniciales:**
1. ¿Cuál es el sector de la empresa y las geografías donde opera (España, UE, global)?
2. ¿Cuáles son los ámbitos regulatorios que más impacto tienen en el negocio actualmente (protección de datos, finanzas, laboral, medioambiental, sectorial)?
3. ¿Existe algún proceso de seguimiento regulatorio actualmente o los cambios normativos llegan como sorpresas?
4. ¿Cuál es el mayor riesgo regulatorio al que se enfrenta la empresa en los próximos doce meses?

**EL SISTEMA DE INTELIGENCIA REGULATORIA:**

MAPA DE EXPOSICIÓN REGULATORIA
Antes de monitorizar, hay que saber qué monitorizar. Ayúdame a construir el mapa de exposición regulatoria de la empresa: el inventario de las regulaciones vigentes que afectan al negocio (identificando las obligaciones clave de cada una), el mapa de las regulaciones en proceso de desarrollo o revisión que pueden afectar al negocio en los próximos doce a veinticuatro meses y la priorización de las regulaciones por su impacto potencial en el modelo de negocio y la probabilidad de que entren en vigor en el horizonte de planificación.

FUENTES DE INTELIGENCIA REGULATORIA
Las fuentes de inteligencia regulatoria son múltiples y requieren seguimiento sistemático. Dame el mapa de fuentes por tipo y geografía: los diarios oficiales (BOE, DOUE), los sitios web de los reguladores sectoriales (CNMC, CNMV, AEPD, EBA, ESMA), las consultas públicas y los procesos de elaboración normativa que publican las instituciones, los informes de posición de las asociaciones sectoriales y las publicaciones especializadas de despachos de abogados y consultoras de regulatory affairs.

**ANÁLISIS DE IMPACTO REGULATORIO:**

EL ANÁLISIS DE IMPACTO NORMATIVO
Cuando se identifica un cambio regulatorio relevante, el primer paso es el análisis de impacto. Ayúdame a diseñar el proceso de análisis de impacto regulatorio: cómo identificar qué partes del modelo de negocio, los procesos operativos y los sistemas tecnológicos afecta la nueva norma, cómo cuantificar el coste de adaptación (costes directos de cumplimiento y coste de oportunidad de los cambios requeridos) y cómo evaluar el riesgo de no cumplir (multas, reputación, continuidad del negocio).

PARTICIPACIÓN EN LOS PROCESOS DE ELABORACIÓN NORMATIVA
Las regulaciones se pueden anticipar y, en algunos casos, influir durante su elaboración. Diseña conmigo la estrategia de participación en los procesos de consulta pública: cómo identificar las consultas relevantes, cómo preparar las respuestas que articulan el impacto en el negocio y las propuestas alternativas, cómo trabajar con la asociación sectorial para presentar una posición común y cómo relacionarse con los reguladores de manera proactiva y constructiva.

**IMPLEMENTACIÓN Y SEGUIMIENTO:**

EL SISTEMA DE ALERTA TEMPRANA
La alerta temprana sobre cambios regulatorios permite al negocio planificar la adaptación en lugar de reaccionar en el último momento. Ayúdame a construir el sistema de alertas: los Google Alerts y las suscripciones a boletines de los reguladores, el proceso de revisión semanal de las novedades regulatorias por el equipo de legal y compliance, las reuniones trimestrales con los asesores externos que monitorizan el entorno regulatorio y el briefing mensual al management sobre el estado del entorno regulatorio.

PLAN DE ADAPTACIÓN REGULATORIA
Una vez identificado un cambio regulatorio con tiempo suficiente, hay que planificar la adaptación. Dame el framework del plan de adaptación: los hitos del proceso normativo que marcan los plazos de adaptación, la estructura del proyecto de adaptación (legal, tecnología, operaciones, comunicación), la gestión de los proyectos de adaptación en paralelo cuando hay múltiples normas en proceso y la documentación del cumplimiento que será necesaria para demostrar la conformidad ante el regulador.

Dame el sistema completo de inteligencia regulatoria que convierte la función de compliance en una ventaja competitiva para la empresa en lugar de un centro de coste reactivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de inteligencia regulatoria para anticipar cambios normativos',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Churn analysis: entender por qué se van los clientes',
                'description'       => 'Analiza el churn para atacar las causas raíz: las entrevistas de churn, el análisis de comportamiento previo al abandono y las conclusiones que informan tanto al equipo de CS como al de producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en Customer Success y análisis de retención con experiencia implementando programas de churn analysis en empresas SaaS B2B. Quiero entender profundamente por qué los clientes cancelan para atacar las causas raíz con acciones concretas que mejoren la retención tanto a corto como a largo plazo.

**Preguntas iniciales:**
1. ¿Cuál es la tasa de churn actual (mensual o anual) y cómo se compara con el benchmark del sector?
2. ¿El churn que más preocupa es el churn involuntario (fallo de pago), el downsell o la cancelación voluntaria?
3. ¿Hay datos de comportamiento del producto disponibles (eventos de uso, features usadas, frecuencia de acceso)?
4. ¿Se realizan actualmente entrevistas de churn o exit surveys cuando un cliente cancela?

**ANÁLISIS CUANTITATIVO DEL CHURN:**

SEGMENTACIÓN DEL CHURN
El churn no es homogéneo: diferentes segmentos de clientes churnan por diferentes razones y a diferentes tasas. Ayúdame a segmentar el churn para entenderlo mejor: el análisis de la tasa de churn por cohorte de inicio (qué meses de contratación tienen mayor churn y por qué), la segmentación por plan, por tamaño de empresa, por sector y por canal de adquisición (los clientes que vienen de trial tienen mayor churn que los que vienen de ventas) y el análisis de la antigüedad del cliente en el momento del churn (si el churn ocurre principalmente en los primeros 90 días, el problema es el onboarding; si ocurre en la renovación anual, el problema es el valor percibido a largo plazo).

ANÁLISIS DE COMPORTAMIENTO PREVIO AL CHURN
Los clientes que van a churnar dejan señales en los datos de comportamiento del producto mucho antes de que cancelen. Ayúdame a construir el análisis de comportamiento pre-churn: las métricas de engagement del producto que caen de manera estadísticamente significativa en los clientes que acaban churneando (frecuencia de login, features usadas, volumen de uso), el horizonte temporal en que estas señales aparecen antes del churn y la diferencia de comportamiento entre los clientes que retuvimos y los que churnearon para calibrar el health score.

**ANÁLISIS CUALITATIVO: LAS ENTREVISTAS DE CHURN:**

DISEÑO DEL PROGRAMA DE ENTREVISTAS
Las entrevistas de churn son la fuente de información más valiosa para entender las causas raíz de la cancelación. Ayúdame a diseñar el programa de entrevistas de churn: quién hace las entrevistas (idealmente alguien de CS, no el comercial de la cuenta), cómo se contacta al cliente que acaba de cancelar para que acepte hablar (el timing, el framing y el canal correcto), la guía de entrevista que explora los factores reales de la cancelación (cuándo se tomó la decisión, qué habría podido cambiarla, cuál fue el trigger final y qué van a usar en lugar del producto) y cómo documentar los hallazgos para que sean analizables en agregado.

EXIT SURVEYS
Para los clientes que no aceptan una entrevista, el exit survey es la alternativa. Dame el diseño del exit survey: las preguntas que capturan el motivo principal de cancelación con suficiente granularidad para ser accionables, el momento correcto para enviarlo (inmediatamente después de la cancelación o con unos días de distancia) y cómo combinar los datos cualitativos del survey con los datos cuantitativos de comportamiento para tener una visión completa.

**SÍNTESIS Y ACCIONES:**

TAXONOMÍA DE LOS MOTIVOS DE CHURN
La síntesis del análisis de churn requiere organizar los motivos en una taxonomía que el equipo puede priorizar. Ayúdame a construir la taxonomía de motivos de churn para mi producto: las categorías principales (falta de valor percibido, problemas de adopción, cambio de circunstancias del cliente, precio, competencia, falta de funcionalidad específica), la asignación de cada caso de churn a una categoría y la priorización de las categorías según su frecuencia y su potencial de reducción.

PLAN DE ACCIÓN POR CAUSA
Cada causa raíz de churn requiere un tipo diferente de acción correctiva. Dame el mapa de acciones por causa de churn: qué hace el equipo de CS cuando el churn es por adopción deficiente, qué hace el equipo de producto cuando el churn es por falta de funcionalidad, qué hace el equipo de marketing cuando el churn es por clientes mal adquiridos y cómo se comunican los insights del churn analysis a los equipos correspondientes de manera que generen acción.

Dame el programa completo de churn analysis que convierte las cancelaciones en el insumo más valioso para mejorar el producto, el proceso de ventas y la experiencia del cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Análisis de churn para identificar causas raíz y mejorar la retención de clientes',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Análisis de mercado para freelancers: entender tu nicho',
                'description'       => 'Analiza el mercado de tu servicio freelance: la demanda, la competencia, las tarifas de mercado y los nichos desatendidos que representan una oportunidad de posicionamiento diferencial.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de estrategia y marketing para freelancers y profesionales independientes con experiencia ayudando a consultores, diseñadores, developers, copywriters y otros freelancers a posicionarse en su mercado de manera que puedan cobrar lo que valen y trabajar con los clientes que quieren. Quiero analizar el mercado de mi servicio freelance para encontrar el nicho donde puedo diferenciarse y tener la posición más ventajosa.

**Preguntas iniciales:**
1. ¿Cuál es tu servicio freelance actual o el que quieres ofrecer?
2. ¿Llevas tiempo como freelance o estás empezando?
3. ¿Cuál es el mayor problema que tienes actualmente: encontrar clientes, cobrar tarifas más altas, diferenciarte de la competencia o saber en qué nicho especializarte?
4. ¿Tienes preferencia por un tipo de cliente (startup, pyme, enterprise, sector específico) o estás abierto a explorar?

**ANÁLISIS DE LA DEMANDA:**

DÓNDE BUSCAN FREELANCERS TUS CLIENTES POTENCIALES
Antes de analizar la competencia, hay que entender dónde está la demanda. Ayúdame a mapear los canales donde los clientes potenciales buscan freelancers de tu servicio: las plataformas de freelancing (Upwork, Toptal, Malt, Workana), LinkedIn y el perfil de los directores y managers que contratan ese servicio, las comunidades online donde los clientes hacen preguntas y piden recomendaciones (grupos de Slack, subreddits, foros del sector), los eventos y conferencias donde los clientes están presentes y la búsqueda orgánica (qué búsquedas hacen en Google cuando tienen el problema que tu servicio resuelve).

SEÑALES DE DEMANDA EN EL MERCADO
La demanda del mercado deja señales que se pueden leer. Ayúdame a analizar las señales de demanda para mi servicio: el volumen de proyectos publicados en las plataformas de freelancing en los últimos meses, el número de ofertas de empleo que buscan ese perfil (una alternativa al freelance que indica que hay demanda), el volumen de búsquedas en Google Trends para las palabras clave relacionadas con el servicio y el crecimiento o la contracción de las comunidades online de los clientes potenciales.

**ANÁLISIS DE LA COMPETENCIA:**

MAPA DE LA COMPETENCIA FREELANCE
Entender quién más ofrece tu servicio es el primer paso para diferenciarse. Ayúdame a construir el mapa de la competencia freelance: los perfiles de Upwork, Malt o LinkedIn de los freelancers que ofrecen el mismo servicio, el análisis de su posicionamiento (cómo se describen, a qué cliente dicen servir, qué resultados destacan), las tarifas que publican o que se pueden inferir y las reviews o testimoniales que indican qué valoran más sus clientes.

ANÁLISIS DE TARIFAS DE MERCADO
Conocer las tarifas del mercado es fundamental para posicionarse correctamente. Dame el análisis de las tarifas del mercado: cómo investigar las tarifas reales de los freelancers de tu nivel (perfiles de Upwork, preguntas en comunidades, conversaciones directas), el rango de tarifas por hora o por proyecto en tu servicio y mercado geográfico, los factores que justifican tarifas más altas (especialización, resultados demostrables, reputación, nicho) y por qué cobrar en la mediana del mercado es una estrategia perdedora a largo plazo.

**IDENTIFICACIÓN DE NICHOS:**

QUÉ ES UN NICHO Y POR QUÉ IMPORTA
El nicho es la intersección entre un servicio específico y un tipo de cliente específico. Un freelance generalista compite por precio; un especialista de nicho compite por valor. Ayúdame a entender por qué el nicho es la palanca más potente para el freelance: la psicología del cliente que prefiere contratar al especialista aunque cueste más, cómo un nicho claro hace más fácil el marketing y la captación de clientes y por qué los freelancers con nicho tienen mayor retención de clientes y más referencias.

CÓMO IDENTIFICAR TU NICHO
El nicho correcto es la intersección entre lo que se te da bien, lo que el mercado paga bien y donde hay demanda suficiente. Ayúdame a identificar los nichos potenciales para tu servicio: los sectores que son grandes consumidores de tu tipo de servicio y que están desatendidos por la competencia, los tipos de proyectos en los que tienes experiencia diferencial que otros freelancers no tienen, los problemas específicos que resuelves mejor que la mayoría y los tipos de cliente con los que has tenido los mejores resultados y referencias.

VALIDACIÓN DEL NICHO
Antes de comprometerse con un nicho, hay que validar que hay demanda real y que es rentable. Dame el proceso de validación del nicho: cómo hablar con diez clientes potenciales del nicho para entender si el problema es real y urgente, cómo estimar el tamaño del mercado accesible y si es suficiente para construir un negocio freelance rentable y cómo hacer una prueba piloto antes de pivotar todo el posicionamiento hacia el nuevo nicho.

Dame el análisis completo de mercado y el plan de posicionamiento en el nicho que me permite dejar de competir por precio y empezar a ser la opción obvia para un tipo específico de cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Análisis de mercado y posicionamiento en nicho para freelancers',
                'vote_score'        => 44,
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
