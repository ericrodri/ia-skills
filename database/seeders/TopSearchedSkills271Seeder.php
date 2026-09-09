<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills271Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Win/loss analysis: entender por qué ganas y por qué pierdes',
                'description'       => 'Construye un sistema de análisis de competencia basado en victorias y derrotas reales para mejorar el posicionamiento, el mensaje y la estrategia go-to-market de tu equipo de marketing.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un estratega de marketing con experiencia en inteligencia competitiva y análisis de ciclos de venta. El win/loss analysis es una de las herramientas más potentes para mejorar el posicionamiento de mercado, pero la mayoría de las empresas lo hacen mal o directamente no lo hacen. Necesito construir un sistema de análisis de victorias y derrotas que sea accionable para el equipo de marketing.

**Preguntas para personalizar el análisis:**
1. ¿Cuál es tu modelo de negocio principal: B2B SaaS, servicios profesionales, e-commerce, producto físico u otro?
2. ¿Tienes acceso a datos de ventas perdidas con información sobre el competidor ganador, o partes de cero?
3. ¿El equipo de ventas documenta actualmente por qué pierde los deals, aunque sea informalmente?
4. ¿Cuántos competidores directos identificas como relevantes en tu mercado?

**POR QUÉ EL WIN/LOSS ANALYSIS ES UNA PRIORIDAD ESTRATÉGICA:**

La mayoría de las empresas analiza su mercado desde afuera hacia adentro: estudian a la competencia mirando sus webs, sus precios y sus anuncios. El win/loss analysis invierte ese proceso: aprende desde las decisiones reales de los clientes. Un cliente que eligió a tu competidor sobre ti te dice más sobre el mercado que diez estudios de analyst. Un cliente que te eligió a ti, con sus palabras exactas, es oro para tu copywriting y tu posicionamiento.

**DISEÑO DEL SISTEMA DE CAPTURA DE DATOS:**

Cómo estructurar la captura de información en cada deal cerrado o perdido: qué campos debe registrar el equipo de ventas, qué preguntas hacer en las entrevistas post-decision a los prospectos (tanto los que compraron como los que eligieron otra opción), y cómo incentivar al equipo de ventas para que complete esta información de manera sistemática sin que lo perciban como burocracia.

El diseño de la encuesta post-decision: las preguntas correctas para entender si la decisión fue por precio, por producto, por relación, por percepción de marca, por características específicas o por el proceso de ventas en sí. Cómo hacer las preguntas para obtener respuestas honestas y no respuestas diplomáticas.

**ANÁLISIS E INTERPRETACIÓN DE PATRONES:**

Cómo agregar los datos para identificar patrones: ¿contra qué competidores pierdes más? ¿En qué segmentos de cliente? ¿En qué rango de precio? ¿En qué momento del ciclo de ventas se decide el resultado? Los patrones son más valiosos que los casos individuales, y la mayoría de las organizaciones no llegan a verlos porque no sistematizan la captura.

Cómo distinguir entre pérdidas evitables (donde el producto o el mensaje fallaron) y pérdidas inevitables (donde el cliente tenía una necesidad que genuinamente no cubres). No todas las pérdidas son problemas a resolver; algunas son señales de que estás bien posicionado para un segmento específico.

**TRADUCCIÓN EN ACCIONES DE MARKETING:**

Cómo convertir los hallazgos del win/loss analysis en cambios concretos: actualización de mensajes y claims, nuevas páginas de comparativa, ajustes en el posicionamiento de precios, identificación de segmentos donde tienes ventaja competitiva clara, y detección de características del producto que el equipo de marketing debe comunicar mejor.

La creación de perfiles de cliente ideal actualizados basados en los patrones de victorias: qué características tienen los clientes donde más ganas, para que marketing pueda focalizarse en atraer más de ese perfil y menos del perfil donde sistemáticamente pierdes.

**MONITORIZACIÓN CONTINUA:**

Cómo convertir este análisis en un proceso continuo y no en un proyecto puntual. La frecuencia ideal de revisión, quién debe ser propietario del proceso dentro de la organización, y cómo socializar los hallazgos con producto, ventas y liderazgo para que tengan impacto real.

Ayúdame a construir este sistema paso a paso, comenzando por la estructura de captura de datos y terminando en la integración de los hallazgos en la estrategia de marketing.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de análisis de victorias y derrotas para mejorar posicionamiento competitivo',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Tech landscape analysis: entender el ecosistema tecnológico de tu sector',
                'description'       => 'Aprende a mapear y analizar el ecosistema tecnológico de tu industria para tomar mejores decisiones sobre stack, arquitectura, librerías y posicionamiento técnico de tu producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software y analista de tecnología con experiencia en múltiples industrias y ecosistemas. El análisis del ecosistema tecnológico es una habilidad crítica para cualquier desarrollador que quiera tomar decisiones informadas sobre qué tecnologías adoptar, a cuáles apostar y de cuáles alejarse antes de que se conviertan en deuda técnica. Necesito entender mejor el ecosistema tecnológico de mi sector para tomar decisiones más estratégicas.

**Preguntas para personalizar el análisis:**
1. ¿En qué dominio trabajas principalmente: web, mobile, backend, datos e IA, DevOps, o embedded systems?
2. ¿Estás evaluando el ecosistema para un proyecto nuevo, para modernizar un sistema existente, o para mantenerte actualizado profesionalmente?
3. ¿Cuál es el horizonte temporal de tus decisiones: decisiones inmediatas (próximos 6 meses) o estratégicas (2-5 años)?
4. ¿Trabajas en startup, empresa mediana, gran corporación o como freelance independiente?

**CÓMO LEER EL ECOSISTEMA TECNOLÓGICO:**

El ecosistema tecnológico no es solo una lista de frameworks y librerías. Es un sistema vivo con ciclos de adopción, dinámicas de comunidad, fuerzas económicas detrás del desarrollo, y dependencias ocultas entre proyectos. Para leerlo bien necesitas entender varias dimensiones: la madurez de cada tecnología, la velocidad de cambio, el modelo de gobernanza (empresa única vs. comunidad open source vs. fundación), y la tracción real medida por adoptantes, no por hype en redes sociales.

El ciclo de Hype de Gartner aplicado al software: cómo identificar si una tecnología está en el pico de expectativas infladas, en el valle de la desilusión, o en la meseta de productividad. Las tecnologías en el pico suenan emocionantes pero tienen un ratio de fracaso en producción altísimo. Las que están en el valle son las que más se infravaloran y donde a menudo están las mejores oportunidades.

**FUENTES DE SEÑAL PARA EL ANÁLISIS:**

Las métricas cuantitativas que importan: estrellas en GitHub como proxy de interés (no de uso real), npm/PyPI downloads como proxy de adopción real, Stack Overflow trends para ver el volumen de preguntas (señal de base de adoptantes), ThoughtWorks Technology Radar para ver qué evalúan los equipos de ingeniería sofisticados, y las encuestas de desarrolladores de Stack Overflow y JetBrains como fuente de datos primarios sobre adopción.

Las señales cualitativas: quién está detrás del proyecto y qué incentivos tienen para mantenerlo, la frecuencia y calidad de los releases, la respuesta de los maintainers a los issues de la comunidad, y si hay empresas importantes usando la tecnología en producción (no solo en demos).

**EVALUACIÓN DE OPCIONES COMPETIDORAS:**

Cómo comparar tecnologías que resuelven el mismo problema: el análisis no debe ser solo de características (eso lo hacen todos los blogposts de comparativa) sino de trade-offs reales en producción. Qué problemas escala trae cada opción, cuál tiene mejor experiencia de debugging, cuál tiene mejor ecosistema de herramientas alrededor, y cuál tiene una comunidad más saludable para resolver problemas cuando los tengas.

**TOMAR LA DECISIÓN DE ADOPCIÓN:**

El framework para decidir cuándo adoptar una tecnología nueva vs. quedarse con lo que funciona. La regla de la tecnología aburrida: en producción, la tecnología aburrida y bien entendida supera casi siempre a la tecnología emocionante y nueva. Cuándo tiene sentido ser early adopter y cuándo es una apuesta que pone en riesgo el proyecto.

**MANTENERSE ACTUALIZADO SIN AGOTARSE:**

Cómo construir un sistema personal de monitorización del ecosistema que consuma el tiempo justo: qué fuentes seguir, con qué frecuencia revisar el paisaje, y cómo distinguir el ruido del cambio real que importa para tu trabajo.

Ayúdame a construir un análisis del ecosistema tecnológico de mi dominio con un framework aplicable a mis decisiones actuales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Análisis del ecosistema tecnológico para tomar mejores decisiones de stack y arquitectura',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Competitive design audit: analizar la UX de la competencia con criterio',
                'description'       => 'Desarrolla un método riguroso para auditar la experiencia de usuario de los competidores y extraer aprendizajes accionables para mejorar tu propio producto o propuesta de diseño.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un investigador de UX y diseñador de producto con experiencia en benchmarking competitivo y análisis heurístico. El análisis de la competencia desde el punto de vista del diseño es una habilidad diferencial: la mayoría de los diseñadores hacen screenshots y listas de features, pero pocos tienen un método para extraer aprendizajes de diseño realmente útiles. Necesito construir una práctica de auditoría de diseño competitivo que sea rigurosa y accionable.

**Preguntas para personalizar la auditoría:**
1. ¿Qué tipo de producto o plataforma estás auditando: aplicación web, app móvil, e-commerce, SaaS o producto de consumo?
2. ¿El objetivo de la auditoría es inspiración para diseño nuevo, validar decisiones actuales, identificar gaps en tu producto, o preparar una presentación para stakeholders?
3. ¿Tienes un conjunto de competidores definido o necesitas también identificar quiénes son los referentes de diseño en tu categoría?
4. ¿El análisis debe centrarse en una funcionalidad específica o en la experiencia global del producto?

**EL ERROR HABITUAL EN EL ANÁLISIS COMPETITIVO DE DISEÑO:**

La mayoría de los competitive design reviews terminan siendo colecciones de pantallas con comentarios como "ellos tienen esto, nosotros no" o "su onboarding es mejor". Este tipo de análisis no es útil porque mezcla observación con juicio, no distingue entre lo que el competidor hace bien de lo que hace diferente, y no genera hipótesis sobre por qué tomaron esas decisiones de diseño. Un buen análisis competitivo de diseño es analítico, no comparativo superficialmente.

**LA ESTRUCTURA DE UNA AUDITORÍA RIGUROSA:**

La selección del corpus: cómo elegir qué competidores incluir y qué flujos auditar para que el análisis sea representativo y útil. No todos los competidores son igual de relevantes para aprender; algunos tienen mejores prácticas en onboarding, otros en retención, otros en el flujo de compra. Elegir bien qué auditar es la mitad del trabajo.

Las dimensiones de análisis: cómo evaluar la UX en ejes concretos: arquitectura de información (cómo organizan el contenido y las funcionalidades), flujos clave (cómo llevan al usuario desde la intención hasta el objetivo), carga cognitiva (qué tan compleja es la experiencia en cada paso), microcopy y tono de voz, y estados de error y vacío. Cada dimensión da un tipo diferente de aprendizaje.

**ANÁLISIS HEURÍSTICO COMPARATIVO:**

Cómo usar las heurísticas de Nielsen como framework de evaluación y no como lista de checkboxes. La diferencia entre aplicar una heurística para identificar un problema y aplicarla para entender por qué una solución funciona bien. El análisis competitivo más valioso no busca fallos en la competencia sino que intenta entender las decisiones de diseño que resuelven bien un problema.

**EXTRAER PATRONES E HIPÓTESIS:**

Después de la observación viene la síntesis. Cómo agrupar los hallazgos en patrones que te digan algo sobre cómo piensa el mercado sobre la experiencia, qué convenciones han emergido en tu categoría (y cuándo romperlas tiene sentido), y qué oportunidades de diferenciación de diseño existen donde nadie está resolviendo bien el problema.

**CONVERTIR EL ANÁLISIS EN DECISIONES DE DISEÑO:**

Cómo presentar los hallazgos de la auditoría competitiva para que influyan en las decisiones del equipo: qué formato usar, cómo evitar que se interprete como "copiar a la competencia" y cómo enmarcar los aprendizajes como hipótesis a validar en tu propio contexto de usuario.

Ayúdame a diseñar el método de auditoría y a aplicarlo a los competidores de mi producto con un nivel de rigor que genere aprendizajes de diseño realmente útiles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Método de auditoría de UX competitiva para extraer aprendizajes de diseño accionables',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Competitive battlecards: herramientas para ganar cuando el cliente compara',
                'description'       => 'Crea battlecards competitivas efectivas que equipen a tu equipo de ventas con los argumentos precisos para ganar cuando el cliente está comparando tu solución con la de la competencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un enablement de ventas y estratega competitivo con experiencia en mercados B2B con múltiples competidores. Las battlecards son una de las herramientas de sales enablement de mayor impacto cuando están bien construidas, pero la mayoría son inútiles porque son demasiado largas, demasiado sesgadas o demasiado desactualizadas. Necesito crear battlecards que el equipo de ventas realmente use y que mejoren la tasa de victorias en deals competitivos.

**Preguntas para personalizar las battlecards:**
1. ¿Contra qué competidor o competidores necesitas las battlecards con más urgencia?
2. ¿En qué momento del ciclo de ventas aparece más frecuentemente la comparación con la competencia: en la primera llamada de discovery, en la demo, en la propuesta o en las negociaciones finales?
3. ¿El equipo de ventas tiene acceso a los materiales actuales de la competencia (web, pricing, demos) o necesitas partir de información más fragmentada?
4. ¿Qué formato consume mejor el equipo de ventas: documentos de referencia, tarjetas flash de respuesta rápida, scripts de conversación, o los tres?

**POR QUÉ LA MAYORÍA DE LAS BATTLECARDS NO FUNCIONAN:**

Las battlecards típicas fracasan por tres razones. Primero, son documentos de marketing escrito para convencer internamente, no herramientas de conversación para usar en tiempo real con un cliente. Segundo, intentan hacer quedar mal a la competencia en lugar de hacer quedar bien al vendedor, y los clientes detectan y penalizan el negativismo. Tercero, se quedan obsoletas en semanas y nadie las actualiza porque el proceso de mantenimiento es tedioso.

Una buena battlecard responde una pregunta diferente: no "¿cómo somos mejores?" sino "¿cómo respondo cuando el cliente me dice X sobre el competidor Y sin sonar defensivo ni deshonesto?"

**ESTRUCTURA DE UNA BATTLECARD EFECTIVA:**

El perfil del competidor en tres líneas: a quién le vende bien (su cliente ideal), cuál es su argumento central de venta, y cuál es su principal debilidad estructural (no operacional). Estas tres líneas son el contexto que el vendedor necesita para orientarse.

Las objeciones más frecuentes y las respuestas calibradas: las cinco o seis frases que el cliente dice cuando está comparando con este competidor, con las respuestas exactas que funcionan. Las respuestas no deben atacar al competidor sino reencuadrar la conversación hacia los criterios donde tienes ventaja. La diferencia entre "nosotros somos mejores en X" y "el criterio que importa realmente para tu caso es Y" es enorme en términos de cómo lo recibe el cliente.

Los mensajes de diferenciación por perfil de comprador: el argumento que convence al director técnico no es el mismo que convence al director financiero. Cómo adaptar el mensaje competitivo según quién está tomando la decisión o influyendo en ella.

**MANEJO DE LAS FORTALEZAS REALES DEL COMPETIDOR:**

Las battlecards honestas también reconocen dónde el competidor es mejor. Esto no es debilidad, es inteligencia de negocio. Saber en qué segmentos o casos de uso pierdes sistemáticamente te permite calificar mejor los deals desde el principio y no invertir tiempo en oportunidades donde la competencia tiene una ventaja estructural que no puedes superar.

**SISTEMA DE MANTENIMIENTO:**

Cómo estructurar el proceso de actualización: quién es responsable de la actualidad de cada battlecard, con qué frecuencia se revisa, y cómo el equipo de ventas puede contribuir con inteligencia reciente de sus conversaciones con clientes.

Ayúdame a construir las battlecards de mis principales competidores con el nivel de detalle y el formato correcto para que el equipo de ventas las use en conversaciones reales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Creación de battlecards competitivas para equipar al equipo de ventas en deals comparativos',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Competitive intelligence para PM: monitorizar y reaccionar sin distraerse',
                'description'       => 'Construye un sistema de inteligencia competitiva para Product Managers que aporte contexto estratégico real sin convertirse en una fuente de distracción o de decisiones reactivas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior con experiencia en mercados competitivos y en construcción de sistemas de inteligencia de producto. La inteligencia competitiva es una de las áreas donde los product managers más tiempo pierden sin obtener valor real: se pasan horas mirando lo que hace la competencia y luego toman decisiones reactivas que desvían el roadmap de la estrategia. Necesito construir un sistema de competitive intelligence que aporte contexto sin generar ruido.

**Preguntas para personalizar el sistema:**
1. ¿En qué tipo de mercado operas: muy competitivo con muchos actores, oligopolio con dos o tres grandes jugadores, o mercado emergente donde aún se está definiendo quién gana?
2. ¿Cuál es el principal riesgo actual con la competencia: que lancen una feature que te quite ventaja, que cambien su pricing, que entren en tu segmento, o que capturen a tus mejores clientes?
3. ¿Tienes ya un proceso de competitive monitoring o estás partiendo de cero?
4. ¿Qué equipo tiene acceso a inteligencia competitiva actualmente: solo el equipo de producto, también ventas y marketing, o la organización entera?

**EL DILEMA CENTRAL DE LA COMPETITIVE INTELLIGENCE PARA PM:**

El problema de seguir de cerca a la competencia es que genera una presión constante hacia la reactividad. Cada feature que lanza un competidor se convierte en una conversación sobre si la debes copiar. Cada cambio de precio genera una reunión de urgencia. Cada nuevo caso de cliente que pierdes ante ellos activa una crisis interna. Este modo reactivo es uno de los principales destructores de la estrategia de producto porque hace que el roadmap lo escriba la competencia en lugar de escribirlo tus clientes.

Al mismo tiempo, ignorar completamente a la competencia es peligroso. Los movimientos estratégicos de los competidores (nuevas categorías de producto, adquisiciones, cambios de modelo de negocio, nuevas alianzas) pueden cambiar el contexto del mercado de manera que afecte fundamentalmente a tu estrategia.

**QUÉ MONITORIZAR Y CON QUÉ FRECUENCIA:**

La distinción entre señales de corto plazo (features lanzadas, cambios de pricing, nuevas integraciones) y señales de largo plazo (cambios de posicionamiento, nuevas apuestas de categoría, patrones de contratación que señalan hacia dónde van). Las señales de corto plazo raramente deben impactar el roadmap inmediato; las de largo plazo deben alimentar las revisiones trimestrales de estrategia.

**LAS FUENTES DE INTELIGENCIA MÁS ÚTILES:**

Lo que los clientes dicen sobre la competencia en las entrevistas de usuario y en las llamadas de churn. Los perfiles de LinkedIn de los ingenieros del competidor y sus movimientos de contratación. Las reseñas en G2, Capterra y plataformas similares. Los changelogs y release notes. Las presentaciones en conferencias y los artículos técnicos. Cómo agregar y priorizar estas fuentes sin invertir horas a la semana en monitorización manual.

**CONVERTIR LA INTELIGENCIA EN DECISIONES DE PRODUCTO:**

El framework para decidir cuándo una acción del competidor requiere respuesta y cuándo es ruido: ¿afecta a nuestros usuarios actuales? ¿cambia las expectativas de los clientes que estamos intentando adquirir? ¿señala un movimiento estratégico que cambia el mercado? Solo las acciones que pasan este filtro merecen una conversación sobre el roadmap.

Ayúdame a diseñar un sistema de competitive intelligence que me dé el contexto estratégico que necesito sin convertirse en una distracción para el equipo de producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de competitive intelligence para PM que informa estrategia sin generar reactividad',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Talent competitive analysis: entender el mercado de talento en tu sector',
                'description'       => 'Aprende a analizar el mercado de talento de tu sector para tomar mejores decisiones sobre atracción, retención, employer branding y compensación competitiva.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de recursos humanos con experiencia en análisis de mercado de talento y en estrategia de employer branding. Entender el mercado de talento no es solo mirar qué salarios paga la competencia: es comprender por qué la gente elige trabajar en ciertas empresas, cómo se mueve el talento dentro del sector, y dónde están las tensiones que puedes convertir en ventajas competitivas para atraer y retener. Necesito construir una capacidad de análisis del mercado de talento que informe mi estrategia de personas.

**Preguntas para personalizar el análisis:**
1. ¿En qué sector o subsector operas y qué perfiles de talento son más críticos para tu organización?
2. ¿Cuál es tu principal desafío actual: atraer talento que prefiere ir a la competencia, retener talento que la competencia roba, o entender qué employer brand construir para diferenciarte?
3. ¿Tienes datos de encuestas de salida o de razones de rechazo de ofertas que puedas usar como punto de partida?
4. ¿Tu empresa compite por el mismo talento que las startups, las grandes corporaciones o ambas?

**LAS DIMENSIONES DEL MERCADO DE TALENTO:**

La compensación total es el punto de partida más obvio pero no el más importante. Los profesionales de hoy evalúan las oportunidades laborales en múltiples ejes: salario base, variable y equity, desarrollo profesional y velocidad de crecimiento, cultura y autonomía, propósito y misión del negocio, flexibilidad y modelo de trabajo, y la calidad de los compañeros y managers. Dependiendo del perfil y del momento de carrera, el peso de estos factores varía enormemente. Un análisis superficial que solo mira los salarios tiene una visión muy incompleta del mercado competitivo de talento.

**FUENTES DE INTELIGENCIA DE MERCADO DE TALENTO:**

Glassdoor y LinkedIn como fuentes de señal salarial y de satisfacción. Los perfiles de LinkedIn de los empleados de la competencia para entender la antigüedad media, los patrones de movimiento y los perfiles que están atrayendo. Las ofertas de empleo publicadas como señal de hacia dónde están creciendo. Las entrevistas de salida bien estructuradas como fuente de inteligencia sobre por qué el talento se va y a dónde. Las conversaciones con candidatos rechazados sobre por qué eligieron otra empresa. Cada una de estas fuentes da un ángulo diferente del mercado.

**BENCHMARKING DE COMPENSACIÓN:**

Cómo hacer un benchmarking de compensación que sea útil: qué datos comparar (percentiles, no solo medias), cómo controlar por variables como tamaño de empresa, ubicación y madurez del rol, y cómo usar los datos para definir una política de compensación que sea competitiva sin comprometer la sostenibilidad financiera. La diferencia entre seguir el mercado y liderar el mercado en compensación, y en qué perfiles tiene sentido cada estrategia.

**EMPLOYER BRAND COMPETITIVO:**

Cómo analizar el employer brand de los competidores para identificar el espacio donde puedes diferenciarte. Si todos los competidores hablan de "impacto" y "flexibilidad", repetir los mismos mensajes no diferencia. Dónde están las promesas no cumplidas que puedes detectar en las reseñas de empleados y convertir en ventajas reales de tu propuesta de valor como empleador.

Ayúdame a construir un análisis del mercado de talento de mi sector que informe decisiones concretas de atracción, retención y employer branding.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Análisis del mercado de talento para mejorar atracción, retención y employer branding',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Competitor financial analysis: leer los estados financieros del competidor',
                'description'       => 'Aprende a leer e interpretar los estados financieros públicos de los competidores para extraer inteligencia estratégica sobre su salud financiera, sus apuestas de inversión y su posición competitiva.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista financiero con experiencia en análisis competitivo y valoración de empresas. Leer los estados financieros de los competidores es una habilidad de inteligencia competitiva que la mayoría de las empresas infrautiliza. Las empresas públicas tienen la obligación de publicar información financiera detallada que, bien leída, revela sus prioridades estratégicas, sus vulnerabilidades financieras y sus apuestas de futuro. Incluso para las empresas privadas hay señales financieras accesibles. Necesito aprender a extraer inteligencia estratégica de la información financiera pública de mis competidores.

**Preguntas para personalizar el análisis:**
1. ¿Tus competidores principales son empresas públicas cotizadas, empresas privadas con información limitada, o una mezcla de ambas?
2. ¿Qué aspecto de la posición financiera del competidor te interesa más: su rentabilidad, su velocidad de crecimiento, su estructura de costes, su capacidad de inversión en producto, o su solidez para aguantar una guerra de precios?
3. ¿Tienes experiencia leyendo estados financieros o necesitas empezar desde los conceptos básicos aplicados al análisis competitivo?
4. ¿En qué sector operas: tecnología, retail, manufactura, servicios financieros u otro?

**QUÉ REVELAN LOS ESTADOS FINANCIEROS DE LA COMPETENCIA:**

La cuenta de resultados dice dónde están creciendo y dónde están perdiendo. La estructura de ingresos (segmentos, geografías, productos) revela en qué apuestas están concentrando sus recursos. El margen bruto dice qué tan diferenciado es su modelo de negocio: márgenes altos indican poder de fijación de precios, márgenes bajos indican competencia por precio o estructura de costes variable alta. El gasto en I+D y en ventas y marketing como porcentaje de ingresos revela si están en modo de construcción o en modo de extracción de valor.

**EL BALANCE COMO SEÑAL DE POSICIÓN ESTRATÉGICA:**

El nivel de caja y deuda del competidor revela su capacidad de aguantar una guerra de precios o de realizar una adquisición estratégica. Una empresa con mucha caja neta puede permitirse meses de pérdidas para ganar cuota de mercado; una con mucha deuda está en posición defensiva. Los activos intangibles y el goodwill revelan el historial de adquisiciones. El working capital revela la eficiencia operativa del negocio.

**LOS RATIOS QUE MÁS IMPORTAN PARA EL ANÁLISIS COMPETITIVO:**

El rule of 40 para empresas SaaS (crecimiento + margen EBITDA debe superar el 40%). La eficiencia de ventas (LTV/CAC en empresas de suscripción). La rotación de activos para medir la eficiencia operativa en negocios de capital intensivo. El retorno sobre el capital invertido como medida del foso competitivo real. Cómo calcularlos con los datos disponibles y qué te dicen sobre la posición relativa de cada competidor.

**FUENTES DE INFORMACIÓN PARA EMPRESAS PRIVADAS:**

Cuando el competidor es privado, cómo triangular su posición financiera usando: la información de Crunchbase o PitchBook sobre rondas de financiación, los registros de cuentas anuales en el Registro Mercantil, las menciones en prensa sobre contratos o clientes ganados, y las señales indirectas de los perfiles de empleo y los datos de tráfico web.

**COMUNICAR LOS HALLAZGOS:**

Cómo convertir el análisis financiero en narrativa estratégica que sea útil para las decisiones de la dirección: qué es lo que realmente importa de los números, qué señales son urgentes y cuáles son de largo plazo, y cómo presentar la incertidumbre sin paralizar la toma de decisiones.

Ayúdame a construir un análisis financiero de mis principales competidores con el nivel de profundidad adecuado para el contexto de mi empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Análisis financiero de competidores para extraer inteligencia estratégica de sus cuentas públicas',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal competitive intelligence: vigilar los movimientos jurídicos de la competencia',
                'description'       => 'Aprende a usar fuentes públicas para monitorizar los movimientos jurídicos y regulatorios de los competidores y convertir esa información en ventaja estratégica para tu despacho o tu empresa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado con experiencia en estrategia competitiva y en uso de fuentes jurídicas públicas para inteligencia de mercado. Los movimientos jurídicos de la competencia son una fuente de inteligencia estratégica que pocos profesionales del derecho explotan sistemáticamente. Los litigios, las solicitudes de patentes, los registros de marcas, los cambios regulatorios que afectan a un competidor y los movimientos corporativos (fusiones, escisiones, cambios de estructura) son todos señales que están disponibles en fuentes públicas y que, bien interpretadas, revelan la estrategia del competidor antes de que llegue al mercado. Necesito construir un sistema de vigilancia jurídica competitiva.

**Preguntas para personalizar la estrategia:**
1. ¿Eres abogado en un despacho (y la competencia son otros despachos) o asesor jurídico in-house (y los competidores son los de la empresa cliente)?
2. ¿En qué área del derecho o sector te especializas: mercantil, propiedad intelectual, laboral, regulatorio, tecnología u otro?
3. ¿Qué tipo de movimientos jurídicos de la competencia te preocupan más: registros de propiedad intelectual que puedan bloquearte, litigios donde apareces como afectado potencial, o movimientos corporativos que cambian la dinámica del mercado?
4. ¿Operas principalmente en España, en la UE, o tienes exposición internacional?

**FUENTES DE INTELIGENCIA JURÍDICA PÚBLICA:**

Las bases de datos de propiedad intelectual como la OEPM, la EUIPO y la WIPO son un mapa de las apuestas de innovación de los competidores. Las solicitudes de patentes revelan en qué tecnologías están invirtiendo, a veces con meses o años de antelación respecto al lanzamiento al mercado. Los registros de marcas revelan expansiones geográficas planeadas o nuevas líneas de producto. Este tipo de vigilancia requiere configurar alertas y revisarlas con una cadencia regular.

Los registros mercantiles: los cambios en el Registro Mercantil (nuevos administradores, cambios de razón social, modificaciones estatutarias, aumento de capital, constitución de filiales) son señales de movimientos corporativos que pueden afectar a tu posición competitiva. Un aumento de capital puede señalar un plan de expansión; la constitución de una filial en otro país puede indicar expansión geográfica.

**LOS LITIGIOS COMO SEÑAL ESTRATÉGICA:**

Los expedientes judiciales públicos (CENDOJ en España, PACER en EEUU) revelan los litigios en los que están involucrados los competidores: quién les está demandando, por qué razones, y cómo están respondiendo. Los litigios con clientes revelan problemas sistemáticos de servicio. Los litigios laborales revelan tensiones internas. Los litigios de propiedad intelectual revelan las batallas por el territorio de innovación.

**MOVIMIENTOS REGULATORIOS:**

Las consultas públicas a la administración y las solicitudes de autorización ante organismos reguladores (CNMV, CNMC, autoridades de protección de datos) son fuentes de información sobre los planes estratégicos de los competidores que a menudo se ignoran porque requieren un seguimiento activo de organismos reguladores.

**SISTEMA DE ALERTAS Y MONITORIZACIÓN:**

Cómo configurar un sistema de alertas que cubra estas fuentes sin requerir demasiado tiempo: herramientas de alertas gratuitas y de pago, frecuencia de revisión, y cómo priorizar las señales para dedicar tiempo de análisis solo a lo que realmente importa estratégicamente.

Ayúdame a construir un sistema de vigilancia jurídica competitiva adaptado a mi área de práctica y a las fuentes más relevantes para mi contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de vigilancia jurídica competitiva usando fuentes públicas para inteligencia estratégica',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Competitive churn analysis: por qué los clientes se van a la competencia',
                'description'       => 'Aprende a analizar el churn competitivo en customer success para identificar patrones, mejorar la retención y convertir los datos de pérdida de clientes en mejoras del producto y del servicio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer success con experiencia en análisis de churn y en estrategias de retención en mercados competitivos. El churn hacia la competencia es diferente al churn por insatisfacción con el producto: el cliente no se va porque algo esté roto, sino porque cree que otra opción le da más valor. Entender exactamente por qué y hacia dónde se va el cliente es uno de los inputs más valiosos para mejorar tanto el producto como la estrategia de retención. Necesito construir un sistema de análisis de churn competitivo que genere insights accionables.

**Preguntas para personalizar el análisis:**
1. ¿Cuál es tu modelo de negocio: SaaS B2B con contratos anuales, SaaS B2C con suscripción mensual, o servicios profesionales con proyectos recurrentes?
2. ¿Tienes datos actuales sobre hacia dónde se van los clientes cuando hacen churn, o ese dato raramente se captura?
3. ¿La razón de churn que reportan los clientes en las conversaciones de cancelación es coherente con lo que crees que es la razón real, o hay una discrepancia?
4. ¿Hay uno o dos competidores que aparezcan de forma recurrente como destino del churn, o el churn está disperso entre muchas opciones?

**POR QUÉ EL CHURN COMPETITIVO ES UNA FUENTE DE INTELIGENCIA ÚNICA:**

Cuando un cliente elige irse a la competencia, ya ha tomado una decisión activa de comparación. Ha evaluado ambas opciones y ha llegado a una conclusión. Esa conclusión, si puedes capturarla, es mucho más valiosa que cualquier encuesta de satisfacción o cualquier análisis de producto externo, porque refleja la realidad de la decisión de compra en condiciones reales. El problema es que la mayoría de las organizaciones de CS no tienen un proceso para capturar esa inteligencia de manera sistemática durante las conversaciones de churn.

**EL PROCESO DE ENTREVISTA DE CHURN COMPETITIVO:**

Cómo estructurar la conversación de cancelación para extraer inteligencia de calidad: el momento correcto para hacerla (no en el momento de mayor tensión emocional), las preguntas que generan respuestas honestas vs. las que generan respuestas diplomáticas, y cómo conseguir que el cliente explique la decisión en sus propios términos sin sesgarle hacia una respuesta determinada.

Las preguntas específicas para el churn competitivo: ¿cuándo empezó a evaluar alternativas y qué lo desencadenó? ¿qué features o capacidades del competidor inclinaron la balanza? ¿hubo algún momento en el proceso de ventas del competidor que fue particularmente efectivo? ¿qué hubiera necesitado ver en nuestro producto para quedarse?

**ANÁLISIS DE PATRONES Y SEGMENTACIÓN:**

Cómo agregar los datos de múltiples entrevistas de churn para identificar patrones: ¿hay segmentos de cliente con churn competitivo más alto? ¿hay features específicas que se mencionan de forma recurrente? ¿hay momentos del ciclo de vida del cliente donde el riesgo competitivo es más alto? Los patrones son la clave, no los casos individuales.

**CONVERTIR LOS HALLAZGOS EN ACCIONES:**

Cómo priorizar los findings del análisis de churn competitivo para que impacten en el roadmap del producto, en los procesos de customer success y en los mensajes de retención preventiva. La diferencia entre información que lleva a conversaciones y información que lleva a cambios reales en el sistema.

Ayúdame a construir un sistema de análisis de churn competitivo que convierta la pérdida de clientes en inteligencia accionable para mejorar la retención y el producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de análisis de churn competitivo para mejorar retención y retroalimentar el producto',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Inteligencia de mercado del freelance: conocer a la competencia y diferenciarse',
                'description'       => 'Aprende a analizar el mercado freelance de tu especialidad para posicionarte estratégicamente, identificar nichos de menor competencia y construir una propuesta de valor diferencial que justifique precios más altos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de negocio para profesionales independientes con experiencia en estrategia de posicionamiento y diferenciación en mercados freelance. La inteligencia de mercado para un freelance es diferente a la inteligencia competitiva corporativa: los recursos son más limitados, el mercado es más fragmentado, y el objetivo no es superar a cientos de competidores sino encontrar el posicionamiento donde unos pocos clientes ideales te elijan de manera consistente. Necesito entender mejor mi mercado y construir una estrategia de diferenciación que funcione.

**Preguntas para personalizar el análisis:**
1. ¿Cuál es tu especialidad: diseño, desarrollo, marketing, consultoría, redacción, traducción, fotografía u otra?
2. ¿Trabajas principalmente con clientes directos (empresas que te contratan sin intermediario) o a través de plataformas de freelance (Upwork, Fiverr, Freelancer)?
3. ¿Cuál es tu principal problema competitivo actual: hay muchos competidores a precios más bajos, no sabes cómo diferenciarte más allá del precio, o no tienes claridad sobre qué tipo de cliente debo atraer?
4. ¿Tienes ya una especialización clara o todavía eres generalista en tu área?

**EL MERCADO FREELANCE Y CÓMO LEERLO:**

El mercado freelance de casi cualquier especialidad tiene una estructura parecida: una gran masa de profesionales generalistas compitiendo por precio en el segmento bajo, una capa intermedia de especialistas con algo de diferenciación, y un segmento premium de expertos reconocidos que compiten en un mercado mucho más pequeño pero mucho más rentable. La inteligencia de mercado para un freelance debe empezar por entender en qué capa está y hacia cuál quiere moverse, porque las estrategias son radicalmente diferentes.

**ANÁLISIS DE LOS FREELANCES EN TU NICHO:**

Cómo analizar a los freelances de tu especialidad sin caer en la trampa de la comparación desmoralizante. El análisis correcto busca entender los patrones de posicionamiento que funcionan: qué nichos verticales están más ocupados, qué tipos de especialización generan precios más altos, qué elementos de la propuesta de valor de los freelances premium son imitables y cuáles son resultado de un historial que lleva años construyendo.

Las plataformas como Upwork, LinkedIn y las páginas web de freelances son un repositorio de inteligencia de mercado: cómo leer los perfiles de los freelances más exitosos para entender su posicionamiento, su propuesta de valor y sus precios, y qué puedes aprender de ellos sin copiarlos.

**IDENTIFICAR GAPS Y OPORTUNIDADES DE NICHO:**

Los mercados freelance tienen siempre nichos mal atendidos donde la demanda existe pero la oferta de calidad escasea. Cómo identificar esos nichos: la intersección de tu especialidad con una industria vertical poco atendida, la combinación de dos habilidades complementarias que pocos tienen juntas, o la especialización en un tipo de cliente que el mercado general ignora (por ejemplo, empresas de una región específica, o empresas en una fase de crecimiento determinada).

**CONSTRUIR UNA PROPUESTA DE VALOR DIFERENCIAL:**

Por qué "soy mejor que la competencia" no es diferenciación: los clientes no pueden verificar esa afirmación antes de contratarte. La diferenciación real viene de la especialización, de la credibilidad verificable (casos de éxito específicos, testimonios de clientes en el mismo nicho), y de la claridad sobre a quién sirves y a quién no. Cómo articular una propuesta de valor que haga que el cliente ideal sienta que eres la única opción lógica.

**ESTRATEGIA DE PRECIOS EN RELACIÓN AL MERCADO:**

Cómo posicionar el precio de manera que refuerce la percepción de valor en lugar de invitar a la comparación de precios. La trampa del precio de mercado y por qué seguirlo es una estrategia de largo plazo hacia el fondo. Cuándo y cómo subir los precios para salir del segmento de competencia por precio.

Ayúdame a construir un análisis de mi mercado freelance y una estrategia de diferenciación que justifique trabajar con menos clientes pero a precios significativamente más altos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Análisis del mercado freelance y estrategia de diferenciación para justificar precios más altos',
                'vote_score'        => 45,
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
