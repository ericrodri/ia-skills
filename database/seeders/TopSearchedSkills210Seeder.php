<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills210Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Investigación de mercado con IA',
                'description'       => 'Usa la IA para acelerar la investigación de mercado: el desk research con LLMs, el análisis de reseñas de clientes a escala y la síntesis de tendencias que antes requería semanas de trabajo de un analista.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en investigación de mercado, inteligencia de negocio y en el uso de herramientas de IA para acelerar y profundizar el análisis de mercados. Quiero que me ayudes a diseñar el proceso de investigación de mercado potenciado por IA que me dará los insights que necesito en una fracción del tiempo que tardaba antes.

Mi contexto:
- Mercado o segmento que quiero investigar: [describe el mercado, sector o categoría]
- Objetivo de la investigación: [lanzamiento de producto, expansión geográfica, análisis competitivo, validación de hipótesis, etc.]
- Información que ya tengo: [qué sabes ya sobre el mercado]
- Recursos disponibles: [tiempo (días o semanas), presupuesto para herramientas o datos, acceso a clientes para entrevistas]
- Decisión que tomará con los resultados: [qué decisión de negocio depende de esta investigación]

Con esa información, quiero que me entregues un proceso completo en estas áreas:

**1. El framework de investigación de mercado con IA**
Diseña el proceso completo de investigación de mercado potenciado por IA en cinco fases: definición del problema de investigación, desk research con LLMs, análisis de datos de señal (reseñas, conversaciones, búsquedas), investigación primaria (entrevistas, encuestas) y síntesis e informe. Para cada fase: qué herramientas de IA usar, cómo usar el LLM de forma efectiva (qué prompts y qué limitaciones tener en cuenta) y qué output produce.

**2. Desk research con LLMs: qué puedes y qué no puedes pedir**
Explica en detalle cómo usar los LLMs para acelerar el desk research de mercado. Incluye: cómo usarlos para estructurar el conocimiento existente sobre un mercado (tendencias, actores, regulación, modelos de negocio), cómo verificar la información que producen (por qué siempre hay que contrastar con fuentes primarias), qué tipos de preguntas dan resultados fiables y cuáles no, y las herramientas con acceso a internet en tiempo real que complementan los LLMs estáticos para investigación de mercado.

**3. Análisis de reseñas y conversaciones de clientes a escala**
Diseña el proceso para analizar miles de reseñas de clientes, conversaciones en foros, Reddit, App Store, o comentarios de redes sociales usando IA. Incluye: cómo recopilar los datos a escala (herramientas de scraping, APIs, fuentes de datos), cómo estructurar el análisis con IA (clustering de temas, análisis de sentimiento, extracción de pain points y deseos), cómo interpretar los hallazgos y cómo usarlos para informar la estrategia de producto o comunicación.

**4. Análisis competitivo acelerado con IA**
Diseña el proceso de análisis competitivo que usa la IA para procesar información de la competencia a una velocidad imposible sin ella. Incluye: cómo usar la IA para analizar webs de competidores, reseñas de sus productos, menciones en medios y reportes anuales, cómo estructurar la información en una matriz comparativa, cómo identificar los gaps del mercado que los competidores no están cubriendo y cómo mantener el análisis competitivo actualizado de forma sistemática.

**5. Síntesis de tendencias: de datos a insights estratégicos**
Diseña el proceso para sintetizar grandes volúmenes de datos de mercado en insights estratégicos accionables usando IA. Incluye: cómo estructurar el proceso de síntesis (de lo general a lo específico), cómo usar la IA para identificar patrones y contradicciones en los datos, cómo formular insights que respondan directamente a las preguntas de negocio (no solo datos sino implicaciones), y cómo presentar los hallazgos en un informe que el equipo directivo pueda consumir y actuar.

**6. Investigación primaria potenciada por IA: entrevistas y encuestas más eficaces**
Diseña el proceso de investigación primaria (entrevistas y encuestas) potenciado por IA. Incluye: cómo usar la IA para diseñar el guión de entrevista o el cuestionario de encuesta (qué preguntas incluir, cómo secuenciarlas, cómo evitar los sesgos más comunes), cómo usar la IA para analizar las transcripciones de entrevistas y codificar los temas emergentes, y cómo triangular los hallazgos cualitativos con los datos cuantitativos para producir una visión completa del mercado.

**7. El informe de investigación de mercado que genera acción**
Diseña la estructura del informe de investigación de mercado que producirás al final del proceso. Incluye: la estructura del informe (resumen ejecutivo, metodología, hallazgos principales por área, implicaciones y recomendaciones), cómo presentar la incertidumbre y los límites de la investigación honestamente, cómo conectar cada hallazgo con una decisión de negocio concreta, y el formato más adecuado para la audiencia (slide deck para dirección, documento para producto, dashboard para marketing).

Responde en español. Sé concreto y práctico. Ten en cuenta que la IA es un multiplicador de la velocidad del investigador, no un sustituto del juicio crítico, y que los insights más valiosos siguen requiriendo interpretación humana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el proceso de investigación de mercado potenciado por IA para obtener insights en menos tiempo con mayor profundidad.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Research de tecnología: evaluar y adoptar nuevas herramientas',
                'description'       => 'El proceso de evaluar una nueva tecnología, framework o librería antes de adoptarla: el proof of concept, la comparativa y el informe de evaluación que convence al equipo de tomar la decisión correcta.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en arquitectura de software, evaluación de tecnologías y en los procesos de adopción de nuevas herramientas técnicas en equipos de ingeniería. Quiero que me ayudes a diseñar el proceso de evaluación y adopción de una nueva tecnología en mi equipo para tomar la decisión correcta con la evidencia adecuada.

Mi contexto:
- Tecnología que estoy evaluando: [nombre del framework, librería, herramienta, plataforma o servicio]
- Alternativas que estoy comparando: [menciona las opciones en consideración]
- Problema o necesidad que quiero resolver: [por qué buscas algo nuevo]
- Stack tecnológico actual: [lenguajes, frameworks, infraestructura que ya usas]
- Tamaño del equipo y nivel de seniority: [número de desarrolladores y perfil]
- Restricciones importantes: [tiempo, presupuesto, compatibilidad con sistemas existentes]

Con esa información, quiero que me entregues un proceso completo en estas áreas:

**1. Los criterios de evaluación correctos para mi contexto**
Diseña el conjunto de criterios de evaluación que usaré para comparar las opciones tecnológicas. Incluye: criterios técnicos (rendimiento, escalabilidad, madurez de la librería, frecuencia de actualizaciones, cobertura de tests, seguridad), criterios de ecosistema (comunidad, documentación, integraciones disponibles, soporte comercial), criterios organizativos (curva de aprendizaje para el equipo, costo de migración, fit con el stack actual) y criterios de negocio (coste de licencia, vendor lock-in, roadmap del proyecto). Pondera los criterios según el contexto que te he dado.

**2. El proof of concept: cómo aprenderás lo que necesitas**
Diseña el proof of concept que validará si la tecnología en evaluación resuelve el problema real en el contexto real. Incluye: qué caso de uso elegir para el POC (el más representativo del uso real, no el más fácil), el alcance exacto del POC (qué implementará y qué dejará fuera), la duración adecuada (ni tan corto que no aprendas nada, ni tan largo que se convierta en el proyecto real), quién lo desarrolla, y las preguntas concretas que el POC debe responder antes de terminar.

**3. La comparativa técnica rigurosa**
Diseña el proceso de comparativa técnica entre las opciones. Incluye: cómo diseñar benchmarks de rendimiento que sean representativos del caso de uso real y no cherry-picked, cómo evaluar la experiencia de desarrollo (tiempo hasta el primer resultado, claridad de los errores, herramientas de debug), cómo comparar la calidad de la documentación y los ejemplos disponibles, y cómo evaluar la seguridad de cada opción (historial de vulnerabilidades, proceso de disclosure, velocidad de parcheo).

**4. Evaluación de la comunidad y la sostenibilidad del proyecto**
Diseña el proceso para evaluar la salud y sostenibilidad a largo plazo de la tecnología que estás evaluando. Incluye: las métricas de GitHub que importan (contribuidores activos, velocidad de cierre de issues, frecuencia de releases, deuda técnica visible en los issues), cómo evaluar la dependencia de un solo mantenedor o empresa, cómo leer las señales de que un proyecto está siendo abandonado, y cómo evaluar el riesgo de vendor lock-in con herramientas SaaS o gestionadas.

**5. El análisis del costo de adopción y migración**
Diseña el proceso de cálculo del costo real de adoptar la nueva tecnología. Incluye: el costo de aprendizaje del equipo (horas de formación, baja productividad durante la curva de aprendizaje, contratación de perfiles con la skill), el costo de migración si hay que migrar sistemas existentes (reescritura, refactor, testing adicional), el costo de mantenimiento futuro (actualizaciones, gestión de breaking changes), y cómo comparar el costo total de adopción con el valor que la tecnología aporta.

**6. El informe de evaluación que convence al equipo**
Diseña la estructura del informe de evaluación tecnológica que presentaré al equipo para tomar la decisión colectiva. Incluye: el resumen ejecutivo con la recomendación y el razonamiento en tres párrafos, la comparativa en una tabla de criterios puntuados, los hallazgos del POC con evidencia concreta (código, benchmarks, demos), los riesgos y mitigaciones de la opción recomendada, y el plan de adopción propuesto. Proporciona el template completo del informe.

**7. El plan de adopción que minimiza el riesgo**
Diseña el plan de adopción de la tecnología elegida que minimiza el riesgo para el equipo y los sistemas en producción. Incluye: la estrategia de adopción gradual (strangler fig, feature flag, nuevo servicio primero), el plan de formación del equipo (quién aprende primero, cómo se transfiere el conocimiento), el proceso de documentación interna de las decisiones de arquitectura (ADRs), y los criterios de éxito y rollback que definirán si la adopción ha funcionado o hay que reconsiderar.

Responde en español. Sé riguroso y sistemático. Ten en cuenta que el costo más alto de una decisión tecnológica no es la decisión incorrecta sino la decisión tomada con insuficiente evidencia que se convierte en deuda técnica irreversible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el proceso de evaluación y adopción de una nueva tecnología con POC, comparativa rigurosa e informe de decisión.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX research: investigar para diseñar mejor',
                'description'       => 'Planifica y ejecuta investigación de usuario que informa las decisiones de diseño: las metodologías, el análisis de los hallazgos y la síntesis que transforma datos cualitativos en insights de diseño.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en UX research, metodología de investigación cualitativa y cuantitativa y en la síntesis de hallazgos de investigación en insights que informan decisiones de diseño. Quiero que me ayudes a planificar y ejecutar una investigación de usuario que mejore las decisiones de diseño de mi producto.

Mi contexto:
- Producto o experiencia que quiero investigar: [descripción del producto o flujo]
- Pregunta de investigación principal: [qué quieres aprender con esta investigación]
- Decisión de diseño que depende de los resultados: [qué diseñarás o rediseñarás con los hallazgos]
- Audiencia objetivo: [perfil del usuario que quieres investigar]
- Recursos disponibles: [tiempo, presupuesto, acceso a usuarios, herramientas de investigación]
- Investigación previa disponible: [qué ya sabes sobre los usuarios, qué datos tienes]

Con esa información, quiero que me entregues un plan completo de investigación en estas áreas:

**1. Selección de la metodología correcta**
Explica las metodologías de UX research disponibles y ayúdame a elegir la más adecuada para mi pregunta de investigación. Incluye: metodologías cualitativas (entrevistas en profundidad, tests de usabilidad moderados y no moderados, card sorting, tree testing, diary studies), metodologías cuantitativas (encuestas, análisis de datos de comportamiento, A/B testing), y metodologías mixtas. Para cada una: cuándo usarla, qué aprenderás y qué no aprenderás, y el esfuerzo que requiere. Recomienda la metodología o combinación más adecuada para mi contexto.

**2. Diseño del plan de investigación**
Diseña el plan de investigación completo. Incluye: las preguntas de investigación específicas derivadas de la pregunta principal, los criterios de selección de participantes (perfil, número mínimo, cómo recrutarlos), el cronograma de la investigación (cuántos días para el reclutamiento, la ejecución y el análisis), las herramientas que usaré para cada fase, y el plan de comunicación con los stakeholders (cómo los involucraré en el proceso para que los hallazgos tengan más impacto).

**3. Diseño de las entrevistas de usuario**
Si la metodología incluye entrevistas, diseña el guión completo. Incluye: la estructura de la entrevista (introducción y contexto, preguntas calentamiento, preguntas principales, ejercicios o prototipos si aplica, cierre), las preguntas abiertas para cada área de investigación, las técnicas de sondeo para profundizar en las respuestas (el porqué, el porqué detrás del porqué, la técnica del incidente crítico), y cómo gestionar los silencios, las respuestas evasivas y los participantes poco comunicativos.

**4. Diseño del test de usabilidad**
Si la metodología incluye tests de usabilidad, diseña el protocolo completo. Incluye: los escenarios de tarea (cómo redactar tareas que no sesguen al participante), el criterio de éxito para cada tarea, las métricas de usabilidad que medirás (tasa de éxito, tiempo en tarea, número de errores, SUS score), cómo moderar el test sin influir en el comportamiento del participante (qué decir y qué no decir), y cómo configurar el entorno de test para que la tecnología no interfiera con la investigación.

**5. Análisis y síntesis de hallazgos cualitativos**
Diseña el proceso de análisis y síntesis de los datos cualitativos. Incluye: cómo organizar las notas y transcripciones de las sesiones, el proceso de affinity mapping o thematic analysis para identificar patrones, cómo distinguir entre observaciones (lo que dijeron o hicieron), inferencias (lo que podría significar) e insights (la implicación de diseño), y cómo priorizar los insights según la frecuencia, la intensidad emocional y el impacto potencial en el diseño.

**6. Del insight a la decisión de diseño**
Diseña el proceso para traducir los insights de investigación en decisiones concretas de diseño. Incluye: cómo formular un insight de forma que apunte directamente a una oportunidad de diseño (formato: observación + implicación + oportunidad), cómo priorizar los insights con el equipo, cómo evitar que los insights queden en un informe que nadie lee (técnicas de activación: workshops, how might we, design sprints), y cómo documentar la trazabilidad entre insight y decisión de diseño para futuras referencias.

**7. El informe de investigación que genera acción**
Diseña la estructura del informe de UX research que compartirás con el equipo y los stakeholders. Incluye: el resumen ejecutivo con los tres o cinco insights más importantes y sus implicaciones inmediatas, la sección de metodología (quién participó, cómo se seleccionó, qué se hizo), la sección de hallazgos organizada por tema y no por participante, las citas y momentos destacados de las sesiones que ilustran cada hallazgo, las recomendaciones de diseño derivadas de los insights, y las limitaciones de la investigación. Proporciona el template del informe.

Responde en español. Sé riguroso y accionable. Ten en cuenta que la investigación de usuario vale lo que vale la calidad del análisis y la síntesis, no el número de sesiones o participantes, y que el mejor informe de investigación es el que genera debate y decisiones en el equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Planificar y ejecutar un proyecto de UX research que produce insights accionables para informar decisiones de diseño de producto.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Inteligencia competitiva para el equipo de ventas',
                'description'       => 'Investiga a la competencia para ganar más deals: los battlecards, el win/loss analysis y el proceso de mantener actualizada la inteligencia competitiva que el equipo usa en las conversaciones con clientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en inteligencia competitiva, estrategia de ventas y en el diseño de sistemas de competitive intelligence que ayudan a los equipos comerciales a ganar más deals. Quiero que me ayudes a construir el sistema de inteligencia competitiva que convierte el conocimiento de la competencia en victorias comerciales.

Mi contexto:
- Producto o servicio que vendo: [descripción breve]
- Principales competidores directos: [nombra los dos o tres más importantes]
- Tipo de venta: [B2B, ciclo largo, ciclo corto, enterprise, SMB]
- Situación actual de inteligencia competitiva: [inexistente, informal, algunos documentos desactualizados]
- Principal problema con la competencia en el proceso de ventas: [perdemos deals porque el cliente elige X, no sabemos cómo responder cuando mencionan a Y, etc.]
- Tamaño del equipo de ventas: [número de vendedores]

Con esa información, quiero que me entregues un sistema completo en estas áreas:

**1. El programa de inteligencia competitiva: fuentes y proceso de recopilación**
Diseña el sistema de recopilación de inteligencia competitiva. Incluye: las fuentes primarias (conversaciones de win/loss con clientes, entrevistas a competidores que cambiaron a tu empresa), las fuentes secundarias (webs de competidores, reseñas en G2/Capterra/Trustpilot, publicaciones de empleo, comunicados de prensa, informes anuales si cotizan), las herramientas de monitorización automatizada (Google Alerts, SimilarWeb, LinkedIn), y el proceso para que el equipo de ventas contribuya a la base de inteligencia con lo que aprenden en cada conversación de ventas.

**2. El análisis win/loss: aprender de cada deal**
Diseña el proceso de win/loss analysis que extraerá el máximo aprendizaje de cada oportunidad ganada y perdida. Incluye: el proceso de entrevista de win/loss (cuándo hacerla, quién la hace, las preguntas que revelan las razones reales de la decisión), cómo analizar los patrones a través de múltiples entrevistas para identificar tendencias, cómo distinguir entre las razones que el cliente declara y las razones reales, y cómo convertir los hallazgos en acciones concretas de mejora del proceso de ventas, del producto o del posicionamiento.

**3. El battlecard: la herramienta que el vendedor usa en la conversación**
Diseña el formato y el contenido del battlecard para cada competidor principal. Incluye para cada battlecard: el resumen de una página del competidor (quién es, a quién va, precio aproximado, fortalezas principales), el posicionamiento de mi empresa frente al competidor (cuándo gano yo y cuándo pierde, sin exageraciones), las objeciones más frecuentes que el cliente trae del competidor y la respuesta efectiva para cada una, las preguntas que debo hacer para descubrir qué valora el cliente más (y orientar la conversación hacia mis fortalezas), y las señales de que el cliente está evaluando a ese competidor seriamente. Proporciona el template del battlecard completo.

**4. El manejo de la objeción competitiva en la conversación de ventas**
Diseña el proceso de gestión de las objeciones competitivas más frecuentes. Incluye: el framework para responder a una comparación con la competencia (nunca atacar al competidor, siempre redirigir al valor propio), las respuestas específicas a las cinco objeciones competitivas más comunes en mi mercado, cómo gestionar la situación en la que el cliente ya usa al competidor y está evaluando cambiar, y cómo gestionar el caso en que el competidor ha prometido una feature que nosotros no tenemos.

**5. Posicionamiento diferencial: cómo articular la diferencia**
Diseña el mensaje de posicionamiento diferencial frente a cada competidor principal. Incluye: la declaración de posicionamiento diferencial (qué soy yo que el competidor no es), los tres argumentos de diferenciación con evidencia concreta (datos, casos de cliente, demostraciones), cómo adaptar el mensaje diferencial según el interlocutor (comprador técnico, comprador de negocio, usuario final), y cómo responder si el competidor copia la feature o el argumento de diferenciación que uso.

**6. Mantenimiento de la inteligencia competitiva**
Diseña el proceso para mantener la inteligencia competitiva actualizada sin que se convierta en una carga. Incluye: la cadencia de revisión de cada battlecard (mensual, trimestral, o triggered por eventos del competidor), el proceso de actualización cuando el competidor lanza algo importante (nuevo producto, cambio de precio, adquisición), cómo organizar la información para que el equipo de ventas la encuentre cuando la necesita, y cómo medir si el sistema de inteligencia competitiva está teniendo impacto en la win rate.

**7. Métricas del programa de inteligencia competitiva**
Define los indicadores que usaré para medir la efectividad del programa de inteligencia competitiva. Incluye: la win rate general y por competidor, el porcentaje de deals en los que la competencia es mencionada, el uso de los battlecards por el equipo de ventas, la calidad de los win/loss reports (porcentaje de deals analizados) y el impacto en la win rate de los deals donde se usó inteligencia competitiva versus los que no. Para cada métrica, el benchmark de referencia y la cadencia de revisión.

Responde en español. Sé concreto y orientado a que el vendedor gane la conversación con el cliente, no a que derrote al competidor en un debate académico. La inteligencia competitiva más valiosa es la que el vendedor puede usar en los próximos cinco minutos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir el sistema de inteligencia competitiva con battlecards, win/loss analysis y proceso de actualización que ayuda al equipo de ventas a ganar más deals.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Discovery research: encontrar los problemas que vale la pena resolver',
                'description'       => 'La investigación de producto que descubre oportunidades: las entrevistas de discovery, el análisis de datos de comportamiento y los métodos mixtos para encontrar los problemas que merecen ser resueltos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product discovery, investigación de usuario y en los procesos de identificación de oportunidades de producto que merecen ser resueltas. Quiero que me ayudes a diseñar el proceso de discovery research que mi equipo de producto usará para encontrar los problemas correctos antes de comprometerse a construir una solución.

Mi contexto:
- Producto o área de producto que estoy explorando: [descripción]
- Usuario o segmento que quiero investigar: [perfil del usuario]
- Hipótesis o ideas previas que quiero validar o refutar: [qué crees que puede ser una oportunidad]
- Datos de comportamiento disponibles: [analytics, datos de uso, logs de soporte que tienes]
- Acceso a usuarios para investigación: [fácil, difícil, requiere incentivos]
- Contexto de equipo: [PM solo, equipo de producto completo, startup con recursos limitados]

Con esa información, quiero que me entregues un proceso completo en estas áreas:

**1. El framework de discovery: oportunidades antes que soluciones**
Explica el framework de product discovery que separa la identificación del problema de la búsqueda de la solución. Incluye: el opportunity solution tree de Teresa Torres (cómo mapearlo para mi área de producto), la diferencia entre outcomes (qué queremos conseguir para el usuario y el negocio), opportunities (problemas o necesidades de los usuarios que podemos resolver) y solutions (las features o cambios que implementaremos), y por qué comprometerse con una solución antes de validar la oportunidad es el error más caro que comete un equipo de producto.

**2. Las entrevistas de discovery: el arte de encontrar problemas reales**
Diseña el protocolo de entrevistas de discovery para mi contexto. Incluye: el objetivo de las entrevistas de discovery (escuchar historias, no validar soluciones), el guión de entrevista que hace hablar al usuario de su vida real y no de lo que quiere en el producto, las técnicas de sondeo que descubren el problema real detrás de la solución que el usuario propone, cómo estructurar una sesión de cuarenta y cinco minutos, y las señales que indican que has encontrado un problema real con suficiente frecuencia, intensidad y dimensión de negocio para merecer atención.

**3. Análisis de datos de comportamiento para discovery**
Diseña el proceso de análisis de los datos de comportamiento existentes para identificar oportunidades de producto. Incluye: qué datos analizar (funnel dropoffs, features con baja adopción, patrones de uso no esperados, correlaciones entre uso y retención), cómo identificar las señales de fricción o valor no capturado en los datos, cómo usar el análisis de cohortes para detectar diferencias de comportamiento entre segmentos de usuarios, y cómo conectar los hallazgos cuantitativos con la investigación cualitativa para tener una imagen completa.

**4. El mapa de oportunidades: cómo priorizar qué investigar**
Diseña el proceso para mapear y priorizar las oportunidades identificadas. Incluye: cómo evaluar cada oportunidad en tres dimensiones (importancia para el usuario, satisfacción actual con las soluciones disponibles, y potencial de negocio), el modelo de oportunidad de Kano para entender qué tipo de mejora produce más valor percibido, cómo usar la matriz importancia-satisfacción para identificar las oportunidades con mayor brecha, y el proceso de priorización del equipo que convierte el mapa en una apuesta de discovery concreta.

**5. Validación rápida de oportunidades antes de construir**
Diseña el proceso de validación rápida de las oportunidades priorizadas antes de comprometer recursos de desarrollo. Incluye: las técnicas de prototipado de baja fidelidad para testear si la oportunidad merece ser resuelta (el concierge, el mago de oz, el prototipo en papel), cómo diseñar el experimento de validación más pequeño que produce la evidencia suficiente, los criterios de éxito que definen cuánda una oportunidad está suficientemente validada para pasar a solución, y cómo gestionar los experimentos fallidos para aprender y no solo para descubrir que algo no funciona.

**6. Continuous discovery: el ritmo de investigación semanal**
Diseña el sistema de continuous discovery que hará que la investigación de usuario no sea un proyecto puntual sino un ritmo semanal del equipo de producto. Incluye: la cadencia de entrevistas semanales (con quién, cuántas, cómo reclutar de forma automática), el proceso de síntesis rápida después de cada sesión, cómo compartir los hallazgos con el equipo sin crear documentos que nadie lee, y cómo integrar los hallazgos de discovery en el proceso de planificación del producto.

**7. El documento de oportunidad que alinea al equipo**
Diseña el template del documento de oportunidad que usaré para presentar una oportunidad al equipo y conseguir el compromiso para explorar soluciones. Incluye: el problema del usuario en sus propias palabras (con citas de entrevistas), la evidencia cuantitativa de la magnitud del problema (cuántos usuarios lo tienen, con qué frecuencia, qué impacto tiene en las métricas clave), el impacto de negocio si lo resolvemos, el territorio de soluciones posibles (sin comprometerse todavía con ninguna), y los supuestos clave que tenemos que validar antes de construir.

Responde en español. Sé riguroso y sistemático. Ten en cuenta que el discovery de calidad es la principal fuente de ventaja de los equipos de producto que consistentemente construyen cosas que los usuarios quieren, y que la investigación que no genera decisiones es solo un costo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar el proceso de product discovery research que identifica los problemas que merecen ser resueltos antes de comprometer recursos de desarrollo.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Research de employer branding: entender qué quiere el talento',
                'description'       => 'Investiga qué buscan los candidatos y qué piensan los empleados actuales: las encuestas de clima, el análisis de Glassdoor y las entrevistas de salida que revelan la verdad sobre la experiencia del empleado.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en employer branding, employee experience y en los métodos de investigación para entender qué valora el talento en un empleador. Quiero que me ayudes a diseñar el programa de investigación que me revelará la verdad sobre cómo nos perciben los candidatos y los empleados, para construir una propuesta de valor para el empleado basada en evidencia real.

Mi contexto:
- Tamaño de la empresa y sector: [número de empleados y sector de actividad]
- Perfiles de talento que quiero atraer y retener: [ingeniero, comercial, diseñador, ejecutivo, etc.]
- Percepción actual como empleador: [cómo crees que te ven, problemas de retención o atracción que tienes]
- Datos disponibles: [Glassdoor reviews, encuestas de clima previas, datos de rotación, datos de aceptación de ofertas]
- Principal problema de employer branding que sufres: [candidatos que rechazan ofertas, empleados que se van a la competencia, mala reputación en Glassdoor, etc.]

Con esa información, quiero que me entregues un programa completo de investigación en estas áreas:

**1. El framework de investigación de employee experience**
Diseña el programa de investigación de employee experience que cubre todo el ciclo de vida del empleado: candidato, nuevo incorporado, empleado en activo y empleado saliente. Para cada etapa: qué preguntas de investigación son relevantes, qué método de investigación es más adecuado y qué frecuencia tiene la investigación. Explica por qué es importante investigar en todas las etapas y no solo cuando hay un problema visible.

**2. La encuesta de clima: diseño y análisis**
Diseña la encuesta de clima laboral que revelaría la verdad sobre la experiencia del empleado en mi empresa. Incluye: las áreas que debe cubrir (satisfacción, engagement, relación con el manager, desarrollo profesional, cultura, reconocimiento, workload, propósito), las preguntas específicas para cada área con el formato correcto (escala Likert, NPS de empleado o eNPS, preguntas abiertas), la longitud óptima de la encuesta para maximizar la tasa de respuesta, y cómo crear un ambiente de seguridad psicológica para que las respuestas sean honestas.

**3. El análisis de Glassdoor y employer review sites**
Diseña el proceso para extraer inteligencia accionable de Glassdoor y otros sitios de reseñas de empleadores. Incluye: cómo analizar las reseñas de forma sistemática (codificación temática de las menciones positivas y negativas), cómo distinguir entre reseñas representativas y outliers, cómo comparar el perfil de reseñas con el de los competidores directos para identificar ventajas y desventajas de marca empleadora, cómo responder a las reseñas negativas de forma que construya credibilidad en lugar de defenderla, y cómo usar los hallazgos para mejorar la realidad que generó las reseñas.

**4. Las entrevistas de salida: la investigación más infrautilizada**
Diseña el proceso de entrevista de salida que revela las razones reales por las que los empleados se van. Incluye: por qué las entrevistas de salida estándar producen respuestas falsas (el miedo a las referencias) y cómo diseñar el proceso para obtener respuestas honestas (entrevistador externo, anonimato, timing correcto), las preguntas que revelan las razones reales (no las declaradas), cómo analizar el patrón de entrevistas de salida para identificar problemas sistémicos, y el proceso para que los hallazgos lleguen a quien puede actuar en ellos sin identificar a los empleados que salieron.

**5. Stay interviews: investigar antes de que se vayan**
Diseña el programa de stay interviews: las conversaciones con los empleados que se quedan para entender qué les retiene y qué les podría hacer irse. Incluye: quién hace las stay interviews (el manager directo o RRHH), el guión de preguntas que revela los motivadores reales de retención y los riesgos de fuga, la cadencia recomendada (anual para todos, más frecuente para el talento crítico), y cómo usar los hallazgos para hacer intervenciones de retención antes de que el empleado decida irse.

**6. Investigación de candidatos: por qué aceptan y por qué rechazan**
Diseña el proceso de investigación con candidatos que han aceptado o rechazado una oferta. Incluye: el proceso de entrevista de oferta aceptada (qué hizo que elegieras nuestra empresa), el proceso de entrevista de oferta rechazada (qué motivó la decisión de ir a otra empresa), cómo hacer que los candidatos que rechazaron la oferta compartan las razones reales, y cómo analizar los patrones para mejorar la propuesta de valor para los candidatos.

**7. De los datos a la EVP basada en evidencia**
Diseña el proceso para sintetizar todos los datos de investigación en una Employee Value Proposition basada en evidencia real. Incluye: cómo cruzar los hallazgos de las distintas fuentes de investigación para identificar los temas consistentes, cómo distinguir entre lo que los empleados valoran actualmente (fortalezas reales), lo que valoran pero que todavía no tenemos (oportunidades de mejora), y lo que comunicamos pero no cumplimos (promesas vacías que dañan la credibilidad). El resultado es la EVP que podemos comunicar con credibilidad porque está respaldada por la realidad.

Responde en español. Sé riguroso y honesto. Ten en cuenta que la investigación de employer branding más valiosa es la que revela verdades incómodas sobre la experiencia del empleado, porque son las únicas que puedes mejorar si las conoces.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el programa de investigación de employer branding que revela qué valora el talento y construye una EVP basada en evidencia real.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Research financiero y análisis de inversiones',
                'description'       => 'El proceso de investigación que precede a una decisión de inversión: el análisis del sector, el estudio de la competencia y la construcción del caso de inversión con las fuentes de información que usan los analistas más rigurosos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en análisis financiero, research de inversiones y en los procesos de due diligence que preceden a una decisión de inversión. Quiero que me ayudes a diseñar el proceso de research financiero que usaré para analizar una oportunidad de inversión con el rigor que merece.

Mi contexto:
- Tipo de inversión que estoy analizando: [equity cotizada, private equity, venture capital, renta fija, activo real]
- Empresa, sector o activo específico: [describe qué estás analizando]
- Objetivo de la inversión: [rendimiento, diversificación, cobertura, otro]
- Horizonte temporal: [corto plazo, medio plazo, largo plazo]
- Información a la que tienes acceso: [informes anuales, bases de datos financieras, acceso a management]
- Nivel de sofisticación financiera: [analista financiero profesional, inversor particular con experiencia, otro]

Con esa información, quiero que me entregues un proceso de research completo en estas áreas:

**1. El framework de análisis de inversiones**
Diseña el proceso completo de análisis de una inversión en cinco fases: comprensión del negocio, análisis del sector, análisis de la empresa, valoración y gestión del riesgo. Para cada fase: qué preguntas debo responder, qué fuentes de información usar y qué output produce. Explica por qué el orden importa (primero entender el negocio, luego valorar) y cuál es el error más común de los analistas que omiten alguna de estas fases.

**2. Análisis del sector: entender el ecosistema antes de la empresa**
Diseña el proceso de análisis sectorial. Incluye: el análisis de las cinco fuerzas de Porter (rivalidad, amenaza de nuevos entrantes, poder de negociación de proveedores y clientes, amenaza de sustitutos) aplicado al sector que analizo, cómo identificar los factores críticos de éxito del sector, cómo analizar el ciclo del sector (expansión, madurez, declive), cómo evaluar el impacto de la regulación en las perspectivas del sector, y las fuentes de información sectoriales más fiables (informes de analistas, asociaciones sectoriales, reguladores, publicaciones especializadas).

**3. Análisis de la empresa: más allá de los estados financieros**
Diseña el proceso de análisis de la empresa objetivo. Incluye: el análisis cualitativo (modelo de negocio, ventajas competitivas, calidad del management, cultura corporativa, gobierno corporativo), el análisis de los estados financieros (income statement, balance, cash flow statement y las ratios clave de cada uno), el análisis de la calidad del beneficio (accounting quality, diferencia entre beneficio contable y cash flow real), y las señales de alerta en los estados financieros que indican problemas que el management puede estar ocultando.

**4. Construcción del modelo de valoración**
Diseña el proceso de construcción del modelo de valoración para el activo que estoy analizando. Incluye: los métodos de valoración disponibles (DCF, múltiplos de mercado, valoración de activos, LBO para private equity) y cuándo usar cada uno, cómo construir los supuestos de proyección de ingresos y márgenes (qué drivers usar, cómo hacer el análisis de sensibilidad), cómo calcular la tasa de descuento (WACC para equity, yield para renta fija), y cómo construir los tres escenarios (base, alcista, bajista) con las probabilidades asociadas.

**5. Research de management y gobierno corporativo**
Diseña el proceso de investigación sobre la calidad del management y el gobierno corporativo. Incluye: cómo analizar el historial del equipo directivo (decisiones pasadas, exits, fracasos), cómo evaluar la estructura de incentivos (opciones, bonus, clawbacks), cómo analizar las transacciones entre partes relacionadas y las operaciones vinculadas, cómo evaluar el consejo de administración (independencia, expertise, implicación), y las señales de alerta en los comunicados, las earnings calls y la narrativa del management que indican falta de honestidad con los inversores.

**6. Análisis del riesgo: qué puede salir mal**
Diseña el análisis de riesgos de la inversión. Incluye: la identificación de los riesgos específicos del activo (operacional, financiero, regulatorio, competitivo, macroeconómico), la evaluación de la probabilidad e impacto de cada riesgo, cómo construir el mapa de riesgos y los escenarios de estrés, cómo pensar en los riesgos de cola (los improbables pero devastadores), y qué mecanismos de mitigación tiene el inversor disponibles (diversificación, coberturas, estructura del deal).

**7. El memorándum de inversión: sintetizar el análisis en una decisión**
Diseña la estructura del memorándum de inversión que sintetizará el análisis en una recomendación de inversión. Incluye: el resumen ejecutivo con la tesis de inversión en tres párrafos (por qué este activo, por qué ahora, a qué precio), la sección de análisis del negocio y el sector, la sección de análisis financiero y valoración, la sección de riesgos y mitigaciones, la recomendación final con el precio objetivo, el horizonte temporal y los criterios de salida (tanto si la tesis se cumple como si no). Proporciona el template completo del memorándum.

Responde en español. Sé riguroso y honesto sobre la incertidumbre. Ten en cuenta que el mejor análisis de inversión no es el que más promete sino el que mejor describe lo que podría salir mal y cuánto valdría el activo en ese escenario.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar el proceso completo de research financiero y análisis de inversiones para tomar decisiones de inversión con rigor y evidencia.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Research jurídico eficiente',
                'description'       => 'Encuentra la jurisprudencia y la doctrina relevante en el menor tiempo posible: las bases de datos jurídicas, las técnicas de búsqueda y el uso de IA para acelerar el research sin sacrificar la calidad del análisis.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en metodología jurídica, investigación legal y en el uso de herramientas digitales e IA para hacer research jurídico más rápido y preciso. Quiero que me ayudes a diseñar el proceso de investigación jurídica que me permita encontrar la jurisprudencia y la doctrina relevante con más eficiencia sin comprometer la calidad del análisis.

Mi contexto:
- Tipo de cuestión jurídica que investigo habitualmente: [civil, mercantil, penal, administrativo, laboral, fiscal, otro]
- Jurisdicción principal: [España, UE, otra]
- Bases de datos jurídicas a las que tengo acceso: [Westlaw, Aranzadi, La Ley, Vlex, CENDOJ, otras gratuitas]
- Nivel de experiencia en research jurídico: [estudiante, abogado junior, abogado senior, académico]
- Principal problema con el research actual: [tarda demasiado, no encuentro jurisprudencia relevante, no sé cómo estructurar el análisis, otro]

Con esa información, quiero que me entregues un proceso completo en estas áreas:

**1. El framework de research jurídico en cinco fases**
Diseña el proceso de investigación jurídica en cinco fases: identificación y delimitación del problema jurídico, identificación de las fuentes relevantes (ley, reglamento, jurisprudencia, doctrina), búsqueda sistemática en las fuentes, análisis y jerarquización de los resultados, y síntesis en una respuesta jurídica fundamentada. Para cada fase: las preguntas que debo responder, los posibles errores que cometen los juristas menos experimentados y el output que produce cada fase.

**2. Técnicas de búsqueda en bases de datos jurídicas**
Diseña el sistema de búsqueda en las bases de datos jurídicas que maximiza la relevancia de los resultados y minimiza el tiempo. Incluye: el uso de operadores booleanos (AND, OR, NOT) y de proximidad para refinar las búsquedas, la diferencia entre buscar por conceptos jurídicos y buscar por términos del lenguaje natural, cómo usar los descriptores y clasificaciones de la base de datos para acotar la búsqueda, cómo buscar por ponente, tribunal, fecha y resultado para encontrar jurisprudencia específica, y cómo saber cuándo has encontrado suficiente (el principio de saturación teórica aplicado al research jurídico).

**3. El uso de IA para research jurídico: qué funciona y qué no**
Explica cómo usar los LLMs y las herramientas de IA jurídica para acelerar el research sin sacrificar la precisión. Incluye: qué tareas de research jurídico puede hacer la IA de forma fiable (síntesis de documentos largos, identificación de temas en una colección de sentencias, extracción de información estructurada, primer borrador de un análisis), qué tareas son peligrosas sin verificación humana (citas de jurisprudencia específica, afirmaciones sobre la legislación vigente, análisis de casos no entrenados), y el protocolo de verificación que debes seguir para cualquier output de IA antes de incorporarlo a un trabajo jurídico.

**4. Análisis de jurisprudencia: de la sentencia al criterio**
Diseña el proceso para analizar y sintetizar un conjunto de sentencias en torno a una cuestión jurídica. Incluye: cómo leer una sentencia eficientemente (qué partes buscar primero, cuáles son prescindibles para el research), cómo identificar el holding (el criterio vinculante) frente a los obiter dicta (las reflexiones no vinculantes), cómo mapear la evolución de la jurisprudencia en el tiempo (cuándo cambió el criterio, por qué), cómo identificar las líneas jurisprudenciales contradictorias y cómo elegir la más favorable para el caso que defiendes.

**5. Research de doctrina y literatura jurídica**
Diseña el proceso de investigación de la doctrina jurídica relevante. Incluye: las fuentes de doctrina más relevantes para mi área (revistas especializadas, comentarios de ley, monografías, dictámenes de organismos), cómo evaluar la autoridad de un autor o una obra (referencias en sentencias, reputación académica, actualidad), cómo usar la doctrina como argumento cuando la jurisprudencia no es clara, y las bases de datos de acceso libre donde encontrar doctrina jurídica española y europea de calidad.

**6. La nota de investigación jurídica: estructurar el análisis**
Diseña la estructura de la nota de research jurídico que producirás al final del proceso. Incluye: el planteamiento de la cuestión jurídica (con precisión: qué se pregunta exactamente), el análisis del marco normativo aplicable (leyes, reglamentos, directivas europeas), el análisis de la jurisprudencia relevante (con citas exactas y referencias al ponente y a la sala), el análisis de la doctrina relevante, las conclusiones con el criterio jurídico aplicable y el grado de certeza o incertidumbre de la respuesta, y las recomendaciones prácticas derivadas del análisis.

**7. Gestión del conocimiento jurídico: no investigar dos veces lo mismo**
Diseña el sistema de gestión del conocimiento jurídico del despacho o del equipo legal para que el research realizado una vez esté disponible para todos y se reutilice. Incluye: cómo organizar la biblioteca interna de notas de research (clasificación por área, por tipo de cuestión, por actualidad), el proceso de actualización cuando la jurisprudencia o la legislación cambia, cómo compartir el conocimiento con los miembros más juniors del equipo, y las herramientas de gestión del conocimiento jurídico que son más eficaces para despachos de distintos tamaños.

Responde en español. Sé concreto y práctico. Ten en cuenta que la eficiencia en el research jurídico no consiste en hacer el trabajo más rápido sino en hacer el trabajo correcto: encontrar la respuesta más sólida y completa en el menor tiempo posible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el proceso de research jurídico eficiente que encuentra la jurisprudencia y la doctrina relevante usando bases de datos e IA sin sacrificar la calidad.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Voice of Customer (VoC) research',
                'description'       => 'Captura y sintetiza la voz del cliente para mejorar el producto y el servicio: los programas de VoC, el análisis de conversaciones de soporte y las encuestas que revelan los problemas que el cliente no te está contando.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Voice of Customer, customer experience research y en los sistemas que capturan y sintetizan la voz del cliente para mejorar el producto y el servicio de forma continua. Quiero que me ayudes a diseñar el programa de VoC de mi empresa para que la voz del cliente informe todas las decisiones importantes.

Mi contexto:
- Tipo de negocio y producto: [SaaS, e-commerce, servicio profesional, aplicación de consumo, otro]
- Canales de contacto con el cliente disponibles: [soporte, email, chat, teléfono, redes sociales, reseñas]
- Volumen de interacciones con clientes: [número aproximado de tickets, conversaciones o contactos al mes]
- Programa de VoC actual: [inexistente, encuestas puntuales, CSAT básico, programa estructurado]
- Principal problema que quiero resolver con el VoC: [no sé qué frustra a los clientes, no sé por qué se van, no sé qué valoran más, etc.]
- Herramientas de feedback disponibles: [Intercom, Zendesk, Medallia, Typeform, otras]

Con esa información, quiero que me entregues un programa completo en estas áreas:

**1. El framework de VoC: de la señal al insight accionable**
Diseña el framework de VoC de extremo a extremo: captura, análisis, distribución, acción y cierre del loop. Para cada fase: qué se hace, quién es responsable, qué herramientas se usan y qué output produce. Explica por qué la mayoría de los programas de VoC fallan en la fase de distribución y acción (los insights llegan a un informe que nadie lee) y cómo diseñar el programa para evitarlo desde el principio.

**2. Las encuestas de satisfacción: CSAT, NPS y CES bien diseñados**
Diseña el sistema de encuestas de satisfacción. Incluye: cuándo usar CSAT (Customer Satisfaction Score), NPS (Net Promoter Score) y CES (Customer Effort Score), cómo diseñar cada encuesta para maximizar la tasa de respuesta y la calidad de las respuestas (longitud, timing de envío, canal), cómo diseñar las preguntas abiertas de seguimiento que revelan el contexto detrás del número, y cómo analizar los resultados de las encuestas para identificar patrones y no solo promedios.

**3. Análisis de conversaciones de soporte: la mina de oro no explotada**
Diseña el proceso para extraer insights de las conversaciones de soporte al cliente. Incluye: cómo categorizar y etiquetar los tickets de soporte para identificar los temas más frecuentes, cómo usar la IA para analizar el sentimiento y los temas de miles de conversaciones a escala, cómo identificar los problemas sistémicos que el cliente resuelve contactando con soporte (que debería resolver el producto), cómo calcular el coste del mal diseño (cuánto cuesta cada contacto de soporte evitable) y cómo priorizar las mejoras de producto que reducirían el volumen de soporte.

**4. Research de churned customers: por qué se fueron los que se fueron**
Diseña el proceso de investigación con clientes que han cancelado. Incluye: el proceso de encuesta de cancelación (cuándo enviarla, las preguntas que revelan las razones reales), la entrevista de churn con clientes seleccionados (quién hace la entrevista, el guión, cómo conseguir que el cliente sea honesto), cómo analizar el patrón de cancelaciones para identificar los segmentos con mayor churn, y cómo convertir los hallazgos en cambios de producto, de precio o de proceso de onboarding que reduzcan el churn futuro.

**5. Monitoring de reseñas y conversaciones en canales externos**
Diseña el sistema de monitorización de la voz del cliente en los canales que no controlas: App Store, Google Play, reseñas en G2 o Capterra, menciones en Twitter/X o LinkedIn, foros de Reddit o comunidades de usuarios. Incluye: las herramientas de monitorización, la cadencia de revisión, cómo priorizar qué responder, cómo usar los hallazgos de los canales externos para complementar los datos de los canales propios, y cómo gestionar las crisis de reputación cuando aparece un patrón de feedback negativo en canales externos.

**6. Distribución de insights: del análisis a la decisión**
Diseña el sistema para que los insights de VoC lleguen a quien puede actuar en ellos en el momento correcto. Incluye: el proceso de síntesis mensual de VoC (un documento de una página con los cinco hallazgos más importantes), cómo distribuir los insights en tiempo real cuando surge algo urgente, cómo integrar la voz del cliente en el proceso de planificación de producto (PBI del cliente, voz en las reuniones de roadmap), y cómo medir si los insights están generando cambios (cuántas features o mejoras se han implementado como resultado del VoC en los últimos doce meses).

**7. Cierre del loop con el cliente: el paso que nadie hace**
Diseña el proceso de cierre del loop con el cliente que informó del feedback. Incluye: cuándo y cómo contactar al cliente para informarle de que su feedback ha tenido impacto (una feature que lanzaste gracias a su feedback, un problema que resolviste porque nos lo dijeron), qué formato usar para comunicarlo (email personalizado, nota en el producto, anuncio en el changelog), cómo medir el impacto del cierre del loop en la lealtad y el NPS de los clientes que han recibido esa comunicación, y por qué el cierre del loop es la forma más eficiente de convertir a un cliente que tuvo un problema en un promotor.

Responde en español. Sé concreto y accionable. Ten en cuenta que el programa de VoC más valioso no es el que más datos recopila sino el que más decisiones cambia, y que el cliente que te da feedback está haciendo un regalo que la mayoría de los clientes no te dan cuando simplemente se van sin decir nada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar el programa de Voice of Customer que captura, sintetiza y convierte la voz del cliente en decisiones de producto y servicio.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Research de nicho y posicionamiento freelance',
                'description'       => 'Investiga el mercado para encontrar el nicho más rentable donde posicionarte: el análisis de la demanda, el estudio de la competencia y la validación que confirma que hay mercado antes de comprometerte con un posicionamiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en posicionamiento de profesionales independientes, estrategia de nicho y en la investigación de mercado para freelancers que quieren dejar de competir por precio y empezar a competir por especialización. Quiero que me ayudes a investigar el mercado para encontrar el nicho más rentable y diferenciado donde posicionarme como freelance.

Mi contexto:
- Especialidad técnica actual: [describe qué sabes hacer mejor]
- Sectores o tipos de clientes con los que ya has trabajado: [menciona los más frecuentes]
- Tipo de proyectos que más disfrutas: [los que más te energizan]
- Tipo de proyectos que menos disfrutas: [los que te agotan o que haces solo por dinero]
- Rango de tarifas actual: [tarifa por hora o por proyecto actual]
- Principal frustración con tu posicionamiento actual: [demasiada competencia, clientes que comparan precios, trabajo poco interesante, falta de referidos, etc.]

Con esa información, quiero que me entregues un proceso completo de investigación y posicionamiento en estas áreas:

**1. El framework de elección de nicho**
Explica el proceso de elección de nicho en cuatro dimensiones: rentabilidad (los clientes del nicho pueden y están dispuestos a pagar tarifas premium), demanda (hay suficiente volumen de proyectos para sostener una práctica freelance), diferenciación (puedo ser uno de los mejores en este nicho y no solo uno más), y alineación personal (el trabajo del nicho me energiza y conecta con mis fortalezas). Diseña la matriz de evaluación de nichos y aplícala a mi contexto para identificar las opciones más prometedoras.

**2. Investigación de la demanda: ¿hay mercado?**
Diseña el proceso de investigación de la demanda para validar que el nicho que considero tiene suficiente mercado. Incluye: cómo analizar el volumen de búsqueda de palabras clave relacionadas con el nicho (herramientas gratuitas y de pago), cómo investigar la demanda en plataformas de trabajo freelance (Upwork, Toptal, LinkedIn Jobs, portales especializados del sector), cómo analizar cuántas empresas del nicho están contratando el tipo de trabajo que hago, y cómo hacer las primeras conversaciones de validación con potenciales clientes del nicho sin necesidad de tener un posicionamiento definido.

**3. Análisis de la competencia en el nicho**
Diseña el proceso de análisis de los freelancers y agencias que ya están en el nicho que evalúas. Incluye: cómo encontrar a los competidores directos (búsquedas en LinkedIn, Google, plataformas de freelancing), qué analizar en su posicionamiento (propuesta de valor, clientes que mencionan, casos de éxito, tarifas si son públicas), cómo identificar los gaps que los competidores actuales no están cubriendo bien, y cómo posicionarte de forma diferente incluso en un nicho donde ya hay players establecidos.

**4. Las conversaciones de validación: hablar con el mercado antes de comprometerte**
Diseña el proceso de validación del nicho a través de conversaciones con clientes potenciales. Incluye: cómo conseguir las primeras diez conversaciones con personas que serían tus clientes ideales en el nicho (sin frío total, usando la red existente y comunidades), el guión de la conversación de validación (qué preguntas hacerles sobre sus problemas, su presupuesto, cómo buscan proveedores del tipo que sería yo), las señales que confirman que el nicho tiene potencial real (disposición a pagar, problema reconocido como urgente, dificultad para encontrar buenos proveedores), y las señales de alerta que indican que el nicho no es tan bueno como parecía.

**5. El posicionamiento diferenciado: la declaración que abre puertas**
Diseña el posicionamiento diferenciado que articularé una vez validado el nicho. Incluye: la fórmula del posicionamiento (para [cliente específico] que tiene [problema específico] soy [categoría] que [diferenciador principal] a diferencia de [alternativa]), cómo testar el posicionamiento en conversaciones reales antes de publicarlo en la web, cómo elegir entre los posibles ángulos de diferenciación disponibles (resultado, proceso, especialización en un sector, especialización en un tipo de empresa, especialización en una tecnología), y cómo evolucionar el posicionamiento a medida que acumulo casos de éxito en el nicho.

**6. El plan de transición: de generalista a especialista**
Diseña el plan de transición desde el posicionamiento generalista actual hacia el nicho elegido sin sacrificar los ingresos del presente. Incluye: cómo gestionar los clientes actuales que no encajan con el nuevo nicho (cuándo y cómo hacer la transición), cómo conseguir los primeros tres casos de éxito en el nicho (puede ser a precio reducido o incluso gratis al principio para construir prueba social), cuánto tiempo esperar antes de publicar el nuevo posicionamiento, y los indicadores que confirmarán que la transición está funcionando.

**7. Los indicadores de que el nicho correcto**
Define los diez indicadores que confirmarán en los primeros seis meses que has elegido el nicho correcto. Incluye indicadores de demanda (número de contactos inbound sin publicidad activa, número de referidos dentro del nicho), indicadores de precio (tarifas que puedes cobrar sin negociación extensa), indicadores de disfrute (energía que tienes al terminar los proyectos, calidad de las conversaciones con los clientes), e indicadores de crecimiento (si los clientes del nicho te conectan con otros clientes del nicho de forma natural).

Responde en español. Sé directo y realista. Ten en cuenta que elegir el nicho incorrecto es caro pero no irreversible, y que el freelance que investiga el mercado antes de comprometerse con un posicionamiento tiene una ventaja enorme sobre el que simplemente declara que es especialista en algo que el mercado no necesita.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Investigar el mercado para encontrar y validar el nicho más rentable donde posicionarse como freelance antes de comprometer tiempo y reputación.',
                'vote_score'        => 43,
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
