<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills397Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Prompt engineering avanzado para marketing: chain-of-thought y few-shot para copy persuasivo',
                'description'      => 'Domina las técnicas avanzadas de prompt engineering para generar copy de marketing de alta conversión. Las técnicas de chain-of-thought y few-shot transforman las respuestas genéricas de la IA en textos persuasivos adaptados a tu audiencia y canal.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en prompt engineering con especialización en marketing de contenidos y copywriting persuasivo. Tu misión es enseñarme a construir prompts avanzados que produzcan textos de marketing significativamente mejores que los que obtengo con instrucciones básicas.

Contexto de mi trabajo:
Soy un profesional de marketing que trabaja en [SECTOR] y necesito generar [TIPO DE CONTENIDO: emails, anuncios, landing pages, posts de redes sociales] para [AUDIENCIA: describe el perfil del cliente ideal, sus dolores principales y su nivel de sofisticación]. El tono de marca es [DESCRIBE: cercano/formal/provocador/técnico] y el objetivo de conversión es [DESCRIBE: venta directa, captación de lead, descarga, registro].

Bloque 1 — Por qué los prompts básicos generan copy mediocre:
Explica los cuatro errores más comunes cuando los marketers piden textos a Claude o ChatGPT con instrucciones simples: la instrucción sin contexto de audiencia produce textos genéricos que podrían ser de cualquier marca, la falta de especificidad sobre el beneficio genera textos sobre características en lugar de transformaciones, la ausencia de restricciones de formato produce textos que no encajan en ninguna plantilla real, y no especificar el nivel de sofisticación produce textos infantilizantes o demasiado técnicos según el modelo. Para cada error, muestra un ejemplo concreto de prompt básico y el output mediocre que produce vs. el prompt mejorado y el output resultante.

Bloque 2 — La técnica few-shot aplicada al copywriting:
Explica en qué consiste la técnica few-shot para copywriting: en lugar de describir lo que quieres, le muestras al modelo dos o tres ejemplos del estilo, tono y estructura exactos que buscas, y él infiere el patrón. Diseña una plantilla de prompt few-shot para los tres formatos de copy de marketing más comunes: email de ventas (muestra la estructura de asunto, apertura, desarrollo del problema, solución, prueba social y CTA), anuncio de Meta Ads (muestra el gancho visual en texto, el desarrollo del pain point, la propuesta de valor y el CTA en menos de 90 palabras), y post de LinkedIn de autoridad (muestra la primera línea que engancha, los tres puntos de contenido y el cierre con llamada a la reflexión o a la acción). Para cada formato, incluye dos ejemplos que el modelo usará como referencia y explica qué elementos del patrón debe detectar.

Bloque 3 — Chain-of-thought para construir el argumento persuasivo:
La técnica chain-of-thought (CoT) consiste en pedirle al modelo que razone paso a paso antes de generar el texto final. Explica cómo aplicar CoT al copywriting: primero el modelo analiza a la audiencia y sus objeciones principales, luego construye el argumento emocional y racional más persuasivo para superar cada objeción, y finalmente redacta el texto basándose en ese análisis explícito. Diseña tres prompts de CoT para marketing: uno para un email de recuperación de carritos abandonados, uno para una landing page de un producto de precio alto y uno para un anuncio de retargeting para usuarios que visitaron la web pero no compraron. Para cada prompt, muestra el razonamiento que el modelo debe completar antes de escribir el texto.

Bloque 4 — Prompts de refinamiento iterativo:
Explica el proceso de refinamiento iterativo: en lugar de esperar el texto perfecto en un solo prompt, defines una secuencia de prompts donde cada uno mejora un aspecto específico del texto anterior. Diseña una secuencia de cuatro prompts para refinar un email de ventas: primer prompt para generar un borrador estructurado, segundo para reforzar el gancho de apertura con una pregunta o afirmación provocadora, tercero para eliminar el lenguaje corporativo y hacerlo más conversacional, y cuarto para añadir prueba social y urgencia sin que parezca artificial. Para cada paso, incluye el prompt exacto y los criterios para evaluar si el resultado es lo suficientemente bueno antes de pasar al siguiente.

Bloque 5 — Construcción de tu sistema de prompts de marketing reutilizables:
Diseña un sistema personal de prompts de marketing que puedas reutilizar y mejorar con el tiempo. El sistema debe incluir: una plantilla maestra de contexto de marca que defines una vez y pegas al inicio de cada sesión (tono de voz, audiencia, propuesta de valor única, restricciones de marca), una biblioteca de prompts few-shot por formato de contenido (email, anuncio, post, landing) donde acumulas los mejores ejemplos de cada tipo, un prompt de auditoría de copy que evalúa cualquier texto según criterios de persuasión y señala exactamente qué mejorar, y un prompt de adaptación de canal que toma un texto base y lo reformatea para otros canales manteniendo el mensaje central.

Entregables:
- Diagnóstico de los cuatro errores de prompt básico con ejemplos comparativos
- Plantilla few-shot para email, anuncio de Meta y post de LinkedIn con dos ejemplos por formato
- Tres prompts de chain-of-thought para los formatos de copy más complejos
- Secuencia de cuatro prompts de refinamiento iterativo para email de ventas
- Sistema de prompts reutilizables con plantilla de contexto de marca y biblioteca por formato
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Generar copy de marketing de alta conversión usando técnicas avanzadas de prompt engineering',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Prompt engineering para developers: técnicas avanzadas para generar código limpio y tests automatizados',
                'description'      => 'Aprende a construir prompts de ingeniería de software que producen código limpio, bien estructurado y con cobertura de tests desde el primer intento. Las técnicas avanzadas de prompting reducen el tiempo de revisión y los bugs en el código generado por IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un senior software engineer y experto en prompt engineering con experiencia ayudando a equipos de desarrollo a integrar herramientas de IA en su flujo de trabajo de forma que aumenten la calidad del código y no solo la velocidad de producción.

Contexto del proyecto:
Trabajo en un proyecto de [TIPO: backend/frontend/full-stack/mobile] con el stack [DESCRIBE: lenguaje, frameworks, arquitectura]. El equipo tiene [TAMAÑO] y seguimos las convenciones de [ESTILO: Clean Code, DDD, TDD, etc.]. El mayor problema cuando usamos IA para generar código es [DESCRIBE: el código no sigue nuestras convenciones, genera funciones demasiado largas, no escribe tests, usa patrones que no queremos en este proyecto, etc.].

Sección 1 — El problema con los prompts básicos de código:
Explica por qué pedir simplemente "escribe una función que haga X" produce código que normalmente no es production-ready. Los cuatro problemas más frecuentes: el modelo asume un contexto diferente al del proyecto real (usa librerías que no están instaladas, asume una arquitectura diferente), genera código funcional pero no testeable (funciones con demasiadas responsabilidades, dependencias hardcodeadas), no sigue las convenciones de naming y estructura del equipo, y no añade manejo de errores ni casos edge. Para cada problema, muestra un ejemplo de prompt básico y su output problemático, y el prompt mejorado con su output correcto.

Sección 2 — El prompt de contexto de proyecto:
Diseña un prompt de contexto que defines una vez por proyecto y pegas al inicio de cada sesión de generación de código. El contexto debe incluir: el stack técnico completo con versiones, las convenciones de arquitectura (cómo se organizan las capas, dónde va la lógica de negocio, cómo se inyectan las dependencias), las reglas de naming para variables, funciones, clases y módulos, las librerías preferidas para operaciones comunes (HTTP, validación, logging, tests), y los anti-patrones prohibidos en el proyecto. Muestra cómo este contexto cambia radicalmente la calidad del código generado para el mismo pedido de funcionalidad.

Sección 3 — Técnica de especificación por contrato:
Explica la técnica de prompting por contrato para generación de código: en lugar de describir la implementación, defines la interfaz pública (inputs, outputs, precondiciones, postcondiciones y comportamiento de error) y el modelo implementa respetando ese contrato. Diseña prompts de contrato para tres tipos de componentes de software comunes: una función de transformación de datos (con tipos de entrada, tipos de salida, manejo de valores nulos y casos edge), un endpoint de API REST (con path, método, schema del body, respuestas de éxito y error, y validaciones), y un servicio de dominio con lógica de negocio compleja (con sus invariantes, los eventos que emite y las excepciones que puede lanzar).

Sección 4 — Generación de tests como primer paso:
Explica la técnica de TDD inverso con IA: primero le pides al modelo que genere los tests para una funcionalidad describiendo el comportamiento esperado, y luego le pides que implemente el código que haga pasar esos tests. Este enfoque produce código más testeable y fuerza al modelo a pensar en los casos edge antes de implementar. Diseña tres secuencias de prompts: una para una función de validación con múltiples reglas de negocio, una para un algoritmo de cálculo con casos edge numéricos, y una para un componente de integración con un servicio externo. Para cada secuencia, muestra cómo el prompt de tests define el comportamiento esperado y cómo el prompt de implementación hace referencia a esos tests.

Sección 5 — Prompts de revisión y refactoring de código existente:
Diseña un conjunto de prompts para usar la IA en la revisión y mejora de código existente sin romper la funcionalidad. Incluye: un prompt de revisión de código que analiza una función o módulo e identifica los problemas de calidad con severidad y justificación, un prompt de refactoring guiado que aplica un patrón específico (extracción de función, inversión de dependencias, reemplazo de condicional por polimorfismo) manteniendo el comportamiento observable, y un prompt de mejora de cobertura de tests que analiza el código existente e identifica los casos no cubiertos y genera los tests faltantes. Para cada prompt, incluye el criterio de aceptación para evaluar si el resultado es correcto.

Entregables:
- Diagnóstico de cuatro problemas del prompting básico de código con ejemplos comparativos
- Plantilla de contexto de proyecto reutilizable para el stack del equipo
- Tres prompts de especificación por contrato para función, endpoint y servicio de dominio
- Secuencias de prompts de TDD inverso para tres tipos de componentes
- Prompts de revisión, refactoring y mejora de cobertura de código existente
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Generar código limpio y bien testeado usando técnicas avanzadas de prompt engineering para desarrollo de software',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Prompt engineering para diseñadores: instrucciones estructuradas para briefs, moodboards y guías de estilo',
                'description'      => 'Construye prompts avanzados para que la IA genere briefs de diseño precisos, análisis de referencias visuales y guías de estilo coherentes. Las técnicas de prompting estructurado reducen las iteraciones con clientes y agilizan la fase de conceptualización.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte y experto en prompt engineering para herramientas de generación de contenido visual y textual aplicadas al diseño. Tu objetivo es enseñarme a construir prompts que transformen las instrucciones vagas de los clientes en documentos de diseño precisos y accionables.

Contexto de mi práctica de diseño:
Soy un diseñador que trabaja en [ESPECIALIDAD: branding/UX/UI/motion/ilustración] para [TIPO DE CLIENTE: startups/empresas medianas/agencias]. El problema más frecuente que tengo con la IA generativa en diseño es [DESCRIBE: los resultados son demasiado genéricos, no captura el tono correcto, no entiende el contexto de mercado, produce referencias que no son relevantes para la categoría del cliente].

Parte 1 — Prompts para transformar el briefing del cliente en un brief de diseño preciso:
Explica cómo usar la IA para convertir un briefing vago del cliente ("quiero algo moderno y profesional que transmita confianza") en un brief de diseño con parámetros concretos y medibles. Diseña un prompt de análisis de briefing que extrae de la descripción del cliente: los valores de marca en términos de dimensiones opuestas (sobrio/expresivo, clásico/contemporáneo, minimalista/recargado), las referencias culturales implícitas en el lenguaje que usa el cliente, las restricciones no dichas que se deducen del sector y el público objetivo, y las métricas de éxito que el cliente tiene en mente aunque no las haya verbalizado. Incluye el prompt completo y un ejemplo de transformación de un briefing vago a un brief estructurado.

Parte 2 — Prompts para análisis y síntesis de referencias visuales:
Diseña un prompt para que la IA analice un conjunto de referencias visuales que el cliente ha compartido y sintetice los patrones comunes. El prompt debe extraer de las referencias: la paleta de color con valores hexadecimales aproximados y la emoción que transmite cada color en el contexto de la categoría, la tipografía con clasificación (serif/sans-serif/display/monospace), el peso visual y el contexto de uso, las formas y texturas dominantes con su connotación semántica, y el estilo fotográfico o ilustrativo. Explica también cómo usar un prompt de contraste de referencias para identificar cuándo las referencias del cliente son contradictorias entre sí y cómo presentarle esa contradicción de forma constructiva.

Parte 3 — Prompts para generar guías de estilo de primer borrador:
Explica cómo usar la IA para generar el primer borrador de una guía de estilo a partir del brief y las referencias analizadas. Diseña una secuencia de tres prompts: el primero genera la arquitectura de la guía de estilo (qué secciones incluir y en qué orden según el tipo de proyecto: sistema de marca completo, guía de UI, identidad de campaña), el segundo desarrolla la sección de voz y tono de la marca con ejemplos de copy en el tono correcto e incorrecto para calibrar, y el tercero genera las reglas de uso de los elementos gráficos (cuándo usar la versión positiva vs. negativa del logo, reglas de espaciado mínimo, combinaciones de colores permitidas y prohibidas). Para cada prompt, incluye el input que necesita y el formato del output esperado.

Parte 4 — Técnica de role-playing para critique de diseño:
Explica la técnica de role-playing en prompting aplicada a la revisión de diseño: le asignas al modelo el rol de diferentes stakeholders (el usuario final, el director de marketing, el CEO, el competidor más fuerte) y le pides que critique el diseño desde esa perspectiva específica. Diseña cuatro prompts de critique con diferentes roles para un mismo brief de diseño: el usuario final que evalúa la usabilidad e intuición, el cliente que evalúa el alineamiento con la estrategia de negocio, el crítico de diseño que evalúa la calidad estética y la originalidad, y el stakeholder técnico que evalúa la viabilidad de implementación. Para cada rol, define las preguntas clave que ese stakeholder haría y el framework de evaluación desde su perspectiva.

Parte 5 — Sistema de prompts para la presentación al cliente:
Diseña un conjunto de prompts para preparar la presentación del diseño al cliente. Incluye: un prompt para generar la narrativa de presentación (cómo contar la historia del proceso creativo que llevó a esta propuesta, conectando cada decisión de diseño con un insight del brief o las referencias), un prompt para anticipar objeciones del cliente y preparar respuestas que defienden las decisiones de diseño con argumentos de negocio y no solo estéticos, y un prompt para generar variaciones dirigidas (cómo describir qué cambiaría en la propuesta si el cliente quiere ir en una dirección más conservadora, más arriesgada o más orientada a un segmento diferente). Para cada prompt, incluye el momento de la presentación en que se usa y el objetivo que cumple.

Entregables:
- Prompt de análisis de briefing que transforma instrucciones vagas en parámetros concretos
- Prompt de síntesis de referencias visuales con extracción de paleta, tipografía, formas y estilo
- Secuencia de tres prompts para generar el primer borrador de una guía de estilo
- Cuatro prompts de critique con roles de stakeholder para revisión multidimensional
- Conjunto de prompts para preparar la narrativa de presentación y anticipar objeciones
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Generar briefs de diseño precisos, análisis de referencias y guías de estilo usando prompt engineering avanzado',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Prompt engineering para ventas: construir prompts que generan propuestas y emails que convierten',
                'description'      => 'Domina las técnicas avanzadas de prompt engineering para generar propuestas comerciales persuasivas, emails de seguimiento que abren puertas y argumentarios de venta adaptados a cada tipo de cliente. Los prompts bien construidos multiplican la productividad del equipo comercial.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas consultivas y prompt engineering con experiencia entrenando a equipos comerciales para usar la IA como multiplicador de productividad sin perder la autenticidad en las comunicaciones con clientes.

Contexto de mi actividad comercial:
Trabajo en ventas [B2B/B2C] de [PRODUCTO O SERVICIO] con un ciclo de venta de [DURACIÓN] y un ticket medio de [VALOR]. Los interlocutores habituales son [DESCRIBE: roles y perfil de los decisores]. El problema más frecuente con el que me enfrento en el proceso de venta es [DESCRIBE: dificultad para personalizar las propuestas rápidamente, seguimientos que no generan respuesta, objeciones de precio recurrentes, ciclos que se alargan sin avanzar].

Módulo 1 — Prompts para personalizar propuestas en minutos:
Explica cómo usar la IA para generar propuestas comerciales altamente personalizadas sin partir de cero en cada oportunidad. Diseña un sistema de tres prompts: el primer prompt genera el diagnóstico de la situación del cliente a partir de la información que tienes (web, LinkedIn, notas de llamadas previas), extrayendo sus retos principales, su contexto de mercado y sus posibles objeciones; el segundo prompt toma ese diagnóstico y lo cruza con tu propuesta de valor para identificar los tres argumentos más relevantes para este cliente específico; y el tercer prompt genera la propuesta estructurada con el problema del cliente en sus propias palabras, la solución adaptada a su contexto y los indicadores de éxito que son relevantes para su negocio. Para cada prompt, incluye el input necesario y el formato del output.

Módulo 2 — Emails de seguimiento que generan respuesta:
La técnica few-shot aplicada a emails de ventas: en lugar de pedir al modelo un email genérico, le proporcionas dos o tres ejemplos de tus mejores emails históricos (los que sí generaron respuesta) y le pides que genere el nuevo email siguiendo el mismo patrón de estructura, tono y llamada a la acción. Diseña prompts few-shot para los cinco tipos de email comercial más frecuentes: email de primer contacto con un prospecto que no te conoce, email de seguimiento tras una reunión sin compromiso, email de reactivación de una oportunidad paralizada, email de propuesta de valor ante una objeción de precio, y email de cierre con sensación de urgencia genuina. Para cada tipo, incluye dos ejemplos de referencia y el prompt que genera la nueva versión personalizada.

Módulo 3 — Argumentarios adaptativos con chain-of-thought:
La técnica chain-of-thought aplicada a ventas: antes de generar el argumentario, el modelo razona explícitamente sobre el perfil del interlocutor, su posición en el proceso de decisión y las objeciones más probables, y luego construye el argumento. Diseña tres prompts de CoT para situaciones de venta complejas: presentación a un CEO que prioriza el ROI sobre las características del producto, reunión con un responsable técnico que prioriza la integración y la seguridad sobre el precio, y conversación con un responsable de compras que prioriza las condiciones contractuales y las referencias. Para cada perfil, define el razonamiento previo que el modelo debe completar y el argumentario resultante.

Módulo 4 — Manejo de objeciones con prompts de role-playing:
Explica cómo usar el role-playing en prompts para preparar el manejo de objeciones. El modelo adopta el rol del cliente más difícil de tu cartera y lanza las objeciones más comunes y complicadas; tú practicas las respuestas y luego le pides al modelo que evalúe la efectividad de tu respuesta y sugiera mejoras. Diseña tres sesiones de role-playing: una para la objeción de precio ("es demasiado caro, tengo alternativas más baratas"), una para la objeción de timing ("ahora no es el momento, volvamos a hablar en seis meses") y una para la objeción de riesgo ("no sé si podemos confiar en un proveedor nuevo para algo tan crítico"). Para cada objeción, incluye el prompt del role-playing y el criterio de evaluación de la respuesta.

Módulo 5 — Sistema de inteligencia de cuenta con IA:
Diseña un sistema de prompts para hacer investigación previa a cualquier reunión importante. El sistema debe incluir: un prompt de análisis de cuenta que, a partir de la web, LinkedIn y notas del CRM del cliente, genera un resumen ejecutivo de su situación actual, sus prioridades estratégicas y los cambios recientes que pueden ser relevantes para tu propuesta; un prompt de análisis del interlocutor que, a partir del perfil de LinkedIn y cualquier contenido que haya publicado, identifica sus prioridades profesionales, su estilo de comunicación y los temas que le importan; y un prompt de preparación de reunión que combina ambos análisis y genera la agenda sugerida, las tres preguntas más estratégicas para hacer durante la reunión y los dos o tres puntos de tu propuesta que serán más relevantes para este interlocutor en este momento.

Entregables:
- Sistema de tres prompts para generar propuestas personalizadas desde el diagnóstico del cliente
- Prompts few-shot para cinco tipos de email comercial con ejemplos de referencia
- Tres prompts de chain-of-thought para argumentarios adaptados por perfil de interlocutor
- Tres sesiones de role-playing para manejo de las objeciones más frecuentes
- Sistema de inteligencia de cuenta con prompts de análisis de empresa, interlocutor y preparación de reunión
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Generar propuestas comerciales personalizadas y emails de seguimiento que convierten usando prompt engineering avanzado',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Prompt engineering para product managers: técnicas avanzadas para PRDs, user stories y análisis de mercado',
                'description'      => 'Aplica técnicas avanzadas de prompt engineering para generar Product Requirements Documents completos, user stories bien estructuradas y análisis de mercado accionables. Los PMs que dominan el prompting avanzado multiplican su velocidad de investigación y documentación de producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en gestión de producto y prompt engineering con experiencia ayudando a equipos de producto a integrar herramientas de IA en sus flujos de trabajo de discovery, definición y priorización.

Contexto del producto:
Trabajo como PM en [TIPO DE EMPRESA: startup/scale-up/empresa establecida] en un producto de [CATEGORÍA: SaaS B2B/consumer app/marketplace/plataforma técnica]. Mi mayor desafío en este momento es [DESCRIBE: el discovery lleva demasiado tiempo, la documentación de requisitos es inconsistente entre el equipo, la priorización no está bien argumentada, el stakeholder management consume mucho tiempo sin resultados claros].

Bloque 1 — Prompts para acelerar el discovery de usuario:
Explica cómo usar la IA para acelerar la fase de discovery sin sustituir las entrevistas con usuarios reales. Diseña tres prompts de discovery: el primero genera las hipótesis de problema más probables a partir de la descripción de un segmento de usuario y el contexto del mercado, el segundo crea el guión de entrevista de usuario adaptado a las hipótesis que quieres validar con preguntas que evitan el sesgo de confirmación, y el tercero analiza las transcripciones de entrevistas o las notas de investigación y extrae los patrones de Jobs to be Done, las frustraciones recurrentes y las workarounds que los usuarios inventan. Para cada prompt, incluye el input necesario y cómo usar el output en las decisiones de producto.

Bloque 2 — El prompt de PRD completo con chain-of-thought:
La técnica chain-of-thought aplicada a la documentación de producto: antes de generar el PRD, el modelo razona explícitamente sobre el contexto estratégico, los trade-offs de alcance y los riesgos de implementación, y luego genera el documento. Diseña un prompt de PRD que sigue esta secuencia: análisis del problema y la oportunidad (por qué esto merece desarrollarse ahora, qué alternativa tiene el usuario si no lo construimos), definición del alcance con criterios explícitos de lo que está dentro y fuera, especificación de los criterios de éxito medibles, descripción de los flujos de usuario con casos edge y estados de error, y las preguntas abiertas que el equipo debe resolver antes de comenzar el desarrollo. Muestra el prompt completo y el formato del PRD resultante.

Bloque 3 — User stories con técnica de especificación por ejemplo:
Explica la técnica de Specification by Example aplicada a la generación de user stories con IA: en lugar de generar user stories abstractas, el modelo genera los ejemplos concretos de comportamiento del sistema (escenarios Given-When-Then) a partir de los cuales se derivan las user stories y los criterios de aceptación. Diseña un prompt que, para una funcionalidad descrita en lenguaje natural, genera: la user story en formato estándar, los tres a cinco escenarios de comportamiento en formato Given-When-Then cubriendo el happy path y los casos edge más críticos, las preguntas de clarificación que el equipo de desarrollo haría en el refinement, y las dependencias técnicas o de diseño que deben resolverse antes de comenzar. Incluye un ejemplo completo aplicado a una funcionalidad real de tu producto.

Bloque 4 — Análisis de mercado y competencia con prompts estructurados:
Diseña un sistema de prompts para hacer análisis de mercado y competencia eficientes. El sistema incluye: un prompt de análisis competitivo que, a partir de la descripción de un competidor, genera la evaluación de su propuesta de valor, su modelo de negocio aparente, sus fortalezas y debilidades desde la perspectiva del usuario y las brechas que deja abiertas; un prompt de análisis de categoría que identifica las tendencias del mercado, los cambios en el comportamiento del usuario y las tecnologías emergentes que pueden disrumpir la categoría en los próximos dos años; y un prompt de posicionamiento que, cruzando el análisis competitivo con las fortalezas del producto propio, genera una propuesta de posicionamiento diferenciado. Para cada prompt, incluye cómo validar que el output es correcto antes de usarlo en decisiones estratégicas.

Bloque 5 — Prompts para la comunicación con stakeholders:
Diseña un conjunto de prompts para preparar la comunicación con los principales stakeholders. Incluye: un prompt para generar el resumen ejecutivo del roadmap adaptado para el CEO (con foco en impacto de negocio y estrategia) vs. para el equipo de ingeniería (con foco en dependencias técnicas y secuenciación), un prompt para preparar la sesión de priorización con el equipo (que genera la estructura del debate, los criterios de priorización relevantes para el contexto actual y las preguntas que hay que resolver colectivamente), y un prompt para generar el update de sprint o release que comunica el progreso a todos los stakeholders de forma concisa y enfocada en el valor entregado, no en las funcionalidades técnicas.

Entregables:
- Tres prompts de discovery (hipótesis, guión de entrevista, análisis de transcripciones)
- Prompt de PRD completo con chain-of-thought y formato del documento resultante
- Prompt de user stories con Specification by Example con escenarios Given-When-Then
- Sistema de tres prompts de análisis de mercado con análisis competitivo, de categoría y posicionamiento
- Prompts de comunicación con stakeholders adaptados por audiencia y momento del ciclo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Acelerar el discovery, la documentación de producto y el análisis de mercado con prompt engineering avanzado',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Prompt engineering para RRHH: técnicas avanzadas para entrevistas, job descriptions y evaluaciones de desempeño',
                'description'      => 'Domina el prompt engineering aplicado a los procesos clave de recursos humanos: generar job descriptions que atraen al talento correcto, diseñar entrevistas estructuradas que predicen el rendimiento y construir evaluaciones de desempeño objetivas y accionables.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en gestión de talento y prompt engineering con experiencia integrando herramientas de IA en los procesos de selección, evaluación y desarrollo de personas en organizaciones de diferentes tamaños y sectores.

Contexto de mi rol en RRHH:
Trabajo en el área de [RRHH/People/Talent Acquisition] de una empresa de [TAMAÑO Y SECTOR]. Mis responsabilidades principales son [DESCRIBE: selección de talento, gestión del desempeño, aprendizaje y desarrollo, employee experience, etc.]. El proceso que más tiempo consume y donde la IA podría ayudar más es [DESCRIBE: redactar job descriptions, diseñar pruebas de selección, preparar entrevistas, redactar evaluaciones de desempeño, comunicar cambios organizativos].

Sección 1 — Job descriptions que atraen al talento correcto:
Explica por qué la mayoría de las job descriptions generadas con IA son genéricas y cómo construir prompts que generan descripciones de puesto que atraen al perfil específico que buscas. Diseña un prompt de job description que sigue este proceso: primero el modelo analiza el rol (responsabilidades reales, no las que deberían ser; el perfil de quien tiene éxito en el puesto actualmente; las razones por las que alguien dejaría un trabajo mejor pagado para venir a este), luego genera una descripción honesta y específica del puesto que habla al candidato ideal en lugar de listar requisitos genéricos, e incluye la propuesta de valor del empleado (por qué alguien querría este trabajo específicamente). Muestra cómo el mismo rol puede describirse de forma completamente diferente según el perfil que se busca.

Sección 2 — Entrevistas estructuradas con técnica de behavioral questions:
La técnica de few-shot aplicada al diseño de entrevistas: le muestras al modelo dos o tres ejemplos de buenas preguntas de entrevista comportamental (STAR: Situation, Task, Action, Result) para competencias específicas y le pides que genere el banco de preguntas completo para el perfil. Diseña un sistema de prompts para diseñar entrevistas estructuradas: el primer prompt define las tres o cuatro competencias críticas del puesto con sus indicadores observables positivos y negativos, el segundo genera cinco preguntas comportamentales para cada competencia con los indicadores de respuesta de alto y bajo desempeño, y el tercero crea la rúbrica de evaluación de cada pregunta con los criterios para puntuar del uno al cinco. Incluye el prompt completo y un ejemplo aplicado a un rol de ventas o de ingeniería.

Sección 3 — Evaluaciones de desempeño objetivas y accionables:
Explica el problema más frecuente con las evaluaciones de desempeño generadas con IA: tienden a ser vagas, positivas en exceso y sin acciones concretas de mejora. Diseña una secuencia de prompts para generar evaluaciones de desempeño equilibradas: el primer prompt analiza los datos de desempeño del período (objetivos conseguidos, feedback de 360 grados, incidentes críticos positivos y negativos) y genera un diagnóstico honesto del nivel de desempeño con evidencias específicas, el segundo genera el texto de la evaluación en el tono corporativo de la empresa distinguiendo fortalezas demostradas de áreas de mejora con ejemplos concretos, y el tercero genera el plan de desarrollo individual con acciones específicas, recursos asignados y criterios de éxito medibles. Para cada prompt, incluye cómo gestionar el caso de un empleado de bajo rendimiento sin que el texto sea hiriente pero sí honesto.

Sección 4 — Comunicaciones difíciles con prompts de role-playing:
Diseña un sistema de role-playing para preparar conversaciones difíciles de RRHH. El modelo adopta el rol del empleado en la situación y el profesional de RRHH practica la conversación antes de tenerla. Diseña cuatro sesiones de role-playing: comunicación de una evaluación de desempeño negativa, conversación de desvinculación, comunicación de un cambio organizativo que afecta negativamente al empleado, y gestión de un conflicto entre dos empleados. Para cada situación, incluye el prompt de setup del role-playing con el contexto, la personalidad y las posibles reacciones del empleado, y el criterio para evaluar si la conversación fue efectiva.

Sección 5 — Sistema de prompts para onboarding de nuevas incorporaciones:
Diseña un sistema de prompts para generar los materiales de onboarding adaptados a cada nuevo empleado. El sistema incluye: un prompt que genera el plan de onboarding de 90 días personalizado según el rol, el nivel de experiencia y el equipo al que se incorpora, un prompt que crea la guía de contexto cultural de la empresa (cómo se toman las decisiones, qué comportamientos son valorados y cuáles no, cómo es la comunicación interna) adaptada al perfil del nuevo empleado, y un prompt que genera las preguntas de check-in para las semanas dos, cuatro y ocho del onboarding para detectar señales de integración o desintegración tempranas.

Entregables:
- Prompt de job description honesta y específica que habla al candidato ideal
- Sistema de tres prompts para entrevistas estructuradas con competencias, preguntas y rúbrica
- Secuencia de tres prompts para evaluaciones de desempeño equilibradas con plan de desarrollo
- Cuatro sesiones de role-playing para conversaciones difíciles de RRHH
- Sistema de prompts de onboarding con plan de 90 días, guía cultural y check-ins
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Generar job descriptions efectivas, entrevistas estructuradas y evaluaciones de desempeño accionables con prompt engineering avanzado',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Prompt engineering para finanzas: instrucciones estructuradas para análisis financiero, modelos y reportes',
                'description'      => 'Aprende a construir prompts avanzados para análisis financiero, modelización y reporting. Las técnicas de prompting estructurado permiten a los profesionales de finanzas generar análisis más rigurosos y reportes más claros en menos tiempo, manteniendo el rigor analítico.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en finanzas corporativas y prompt engineering con experiencia ayudando a equipos financieros a integrar herramientas de IA en sus procesos de análisis, modelización y comunicación de resultados sin comprometer la precisión y el rigor.

Contexto de mi trabajo en finanzas:
Trabajo en el área de [FINANZAS CORPORATIVAS/CONTROLLING/FP&A/TESORERÍA/INVERSIONES] de una empresa de [TAMAÑO Y SECTOR]. Mis responsabilidades principales son [DESCRIBE: cierre mensual, forecasting, análisis de inversiones, reporting a dirección, gestión de presupuesto]. El proceso donde más tiempo perdería o donde más errores cometo es [DESCRIBE: construcción de modelos en Excel, redacción de comentarios del informe mensual, análisis de variaciones, preparación de presentaciones para el CFO o el Consejo].

Bloque 1 — Por qué los prompts básicos producen análisis financiero superficial:
Explica los cuatro errores de prompting más frecuentes cuando se usa IA para análisis financiero: pedir el análisis sin proporcionar el contexto de la industria (el modelo analiza los números sin entender qué es normal en el sector), no especificar el nivel de profundidad esperado (el modelo produce comentarios del tipo "las ventas aumentaron un 5%"), no indicar la audiencia (el análisis para el CFO es diferente del análisis para el equipo operativo), y no proporcionar el período de comparación y el contexto macroeconómico relevante. Para cada error, muestra un prompt básico y su output superficial vs. el prompt mejorado con su output riguroso.

Bloque 2 — Prompts de análisis de variaciones con chain-of-thought:
La técnica chain-of-thought aplicada al análisis financiero: el modelo razona explícitamente sobre las causas posibles de cada variación antes de redactar el comentario. Diseña un prompt de análisis de variaciones que sigue este proceso: primero categoriza las variaciones por tipo (precio/volumen/mix, estructura/eficiencia, timing, one-offs), luego identifica las causas probables de cada categoría cruzando los datos financieros con el contexto operativo que proporcionas, y finalmente redacta el comentario ejecutivo con la variación principal, la causa explicada en lenguaje de negocio y el impacto esperado en los próximos períodos. Incluye el prompt completo y un ejemplo aplicado al análisis de variación de margen bruto.

Bloque 3 — Prompts para construir la narrativa del informe mensual:
Explica cómo usar la IA para generar la narrativa ejecutiva del informe mensual que transforma los números en una historia coherente sobre la salud del negocio. Diseña una secuencia de tres prompts: el primero identifica los tres mensajes más importantes que quieres que el lector se lleve del informe (no los datos más llamativos, sino los que requieren atención o decisión), el segundo genera la estructura narrativa del informe (cuál es el titular principal, cuál es el contexto, cuáles son los detalles que soportan el titular), y el tercero redacta cada sección del informe en el tono y nivel de detalle apropiados para la audiencia (Consejo, CFO, equipo de negocio). Para cada nivel de audiencia, define las diferencias en profundidad, jerga y foco del análisis.

Bloque 4 — Prompts para el forecasting y el análisis de escenarios:
Diseña un sistema de prompts para construir y comunicar análisis de escenarios en el proceso de forecasting. El sistema incluye: un prompt para definir los drivers de los tres escenarios principales (base, optimista, pesimista) con las hipótesis explícitas de cada uno y la probabilidad asignada, un prompt para redactar la narrativa de cada escenario en lenguaje de negocio explicando qué tendría que pasar para que ese escenario se materialice, y un prompt para generar el análisis de sensibilidad que identifica cuáles son los dos o tres drivers que más impactan el resultado y cuánto movimiento en esos drivers cambia el forecast. Incluye cómo presentar este análisis a la dirección para que facilite la toma de decisiones en lugar de generar más preguntas.

Bloque 5 — Auditoría y documentación de modelos financieros:
Diseña prompts para documentar y auditar modelos financieros complejos. Incluye: un prompt de documentación que, a partir de la descripción de la lógica de un modelo, genera la documentación técnica con los inputs, las hipótesis, la lógica de cálculo y las limitaciones conocidas del modelo; un prompt de auditoría que analiza un modelo existente e identifica los riesgos de error más frecuentes en modelos de este tipo (circularidades, referencias rotas, hipótesis no documentadas, sensibilidad excesiva a un único input); y un prompt de checklist de revisión que genera la lista de verificación específica para el tipo de modelo (valoración DCF, presupuesto anual, modelo de pricing, modelo de caja) antes de presentarlo a dirección.

Entregables:
- Diagnóstico de cuatro errores de prompting en análisis financiero con ejemplos comparativos
- Prompt de análisis de variaciones con chain-of-thought para análisis de margen
- Secuencia de tres prompts para narrativa del informe mensual por nivel de audiencia
- Sistema de prompts para forecasting y análisis de escenarios con hipótesis y sensibilidad
- Prompts de documentación y auditoría de modelos financieros con checklist de revisión
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Generar análisis financieros rigurosos, narrativas de informes y documentación de modelos con prompt engineering avanzado',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Prompt engineering para legal: técnicas para revisar contratos, generar cláusulas y resumir jurisprudencia',
                'description'      => 'Construye prompts avanzados para acelerar la revisión de contratos, generar cláusulas adaptadas al contexto y resumir jurisprudencia de forma precisa. Los abogados que dominan el prompt engineering avanzado multiplican su capacidad de análisis documental sin comprometer la calidad jurídica.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado senior y experto en prompt engineering aplicado a la práctica jurídica con experiencia integrando herramientas de IA en despachos y departamentos legales de empresa de forma que aumenten la productividad sin reducir el rigor jurídico ni la responsabilidad profesional.

Contexto de mi práctica jurídica:
Soy abogado especializado en [ÁREA: derecho mercantil, laboral, contratos, propiedad intelectual, etc.] y trabajo en [DESPACHO/DEPARTAMENTO LEGAL DE EMPRESA]. El tipo de documentos que analizo más frecuentemente son [DESCRIBE: contratos de compraventa, acuerdos de confidencialidad, contratos laborales, licencias de software, contratos de distribución, etc.]. El proceso que más tiempo consume y donde la IA podría ayudar más sin comprometer mi responsabilidad profesional es [DESCRIBE: primera revisión de contratos, redacción de cláusulas estándar, resumen de jurisprudencia, preparación de informes de due diligence].

Sección 1 — Los límites y las posibilidades del prompting jurídico:
Explica claramente qué puede y qué no puede hacer la IA en la práctica jurídica, para establecer un marco de uso responsable. La IA puede: identificar cláusulas problemáticas o ausentes en un contrato estándar, generar borradores de cláusulas que el abogado revisa y adapta, resumir jurisprudencia con indicación de la fuente para verificación, y estructurar análisis jurídicos complejos. La IA no puede: dar consejo jurídico definitivo sin revisión del abogado, garantizar que las cláusulas son válidas en una jurisdicción específica sin verificación, ni reemplazar el juicio profesional en situaciones no estándar. Diseña el prompt de contexto que defines al inicio de cada sesión de trabajo jurídico con la IA para enmarcar estas limitaciones y maximizar la utilidad.

Sección 2 — Revisión de contratos con técnica de lista de verificación:
Diseña un sistema de prompts para la revisión sistemática de contratos. El sistema usa una lista de verificación personalizada por tipo de contrato: el primer prompt genera la checklist de revisión específica para el tipo de contrato que le indicas (con las cláusulas que deben estar presentes, las cláusulas problemáticas a buscar y los desequilibrios habituales en este tipo de contrato), el segundo analiza el texto del contrato contra esa checklist e identifica los puntos de atención con la cita literal del texto problemático y la explicación de por qué es problemático, y el tercero genera el informe de revisión estructurado que puedes compartir con el cliente o usar internamente. Para cada paso, incluye el prompt exacto y las limitaciones que el abogado debe conocer antes de compartir el resultado.

Sección 3 — Generación de cláusulas con few-shot y contexto de jurisdicción:
La técnica few-shot aplicada a la redacción de cláusulas: en lugar de pedir una cláusula genérica, le proporcionas al modelo dos o tres ejemplos de cláusulas de tu práctica habitual (que ya han sido revisadas y aprobadas) y le pides que genere la nueva cláusula siguiendo ese estilo y nivel de protección. Diseña prompts few-shot para las cinco cláusulas más frecuentes en tu práctica: limitación de responsabilidad, confidencialidad y no divulgación, resolución de disputas y jurisdicción, garantías y declaraciones (representations and warranties), y cláusula de fuerza mayor. Para cada cláusula, incluye los elementos que el abogado debe especificar en el prompt (jurisdicción, nivel de protección buscado para cada parte, restricciones del sector regulado si aplica) y cómo validar que la cláusula generada es apropiada antes de usarla.

Sección 4 — Resumen de jurisprudencia y análisis doctrinal:
Diseña un sistema de prompts para el análisis de jurisprudencia y doctrina. El sistema incluye: un prompt de resumen de sentencia que extrae los hechos relevantes, el razonamiento jurídico, el fallo y el voto particular si lo hay, en un formato estructurado y con las citas literales más importantes; un prompt de análisis de línea jurisprudencial que, a partir de varias sentencias sobre el mismo tema, identifica la evolución del criterio de los tribunales, los puntos de consenso y los puntos de divergencia; y un prompt de aplicación al caso concreto que cruza el análisis jurisprudencial con los hechos del caso del cliente e identifica los argumentos más sólidos y las debilidades de la posición. Para cada prompt, incluye la advertencia sobre la necesidad de verificar las citas en las bases de datos jurídicas oficiales.

Sección 5 — Due diligence asistida por IA:
Diseña un sistema de prompts para acelerar los procesos de due diligence legal. El sistema incluye: un prompt de diseño de la due diligence que, a partir del tipo de operación (compraventa de empresa, entrada de inversor, joint venture, etc.), genera el plan de due diligence con las áreas a revisar, los documentos a solicitar y los riesgos típicos de este tipo de operación; un prompt de análisis de documento individual que, para cada documento revisado, genera una ficha resumen con los datos relevantes, las alertas identificadas y las preguntas pendientes; y un prompt de consolidación de hallazgos que, a partir de las fichas individuales, genera el informe ejecutivo de due diligence con los riesgos ordenados por gravedad y las recomendaciones para la negociación del contrato.

Entregables:
- Marco de uso responsable de la IA en la práctica jurídica con prompt de contexto
- Sistema de tres prompts de revisión de contratos con checklist, análisis e informe
- Prompts few-shot para cinco cláusulas frecuentes con guía de validación
- Sistema de tres prompts de análisis jurisprudencial con resumen, línea y aplicación al caso
- Sistema de prompts de due diligence con plan, fichas de documento e informe ejecutivo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Acelerar la revisión de contratos, generación de cláusulas y análisis jurisprudencial con prompt engineering avanzado',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Prompt engineering para Customer Success: técnicas para respuestas de soporte, QBRs y planes de onboarding',
                'description'      => 'Domina el prompt engineering aplicado a Customer Success para generar respuestas de soporte empáticas y precisas, Quarterly Business Reviews que retienen clientes y planes de onboarding que aceleran el time-to-value. Los CSMs que dominan el prompting avanzado atienden más cuentas sin perder calidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Success y experto en prompt engineering con experiencia ayudando a equipos de CS a escalar su capacidad de atención sin perder la personalización y la calidad que diferencia al CS humano del soporte automatizado.

Contexto de mi rol en CS:
Soy Customer Success Manager en una empresa de [TIPO DE PRODUCTO: SaaS B2B/plataforma/herramienta técnica] con [NÚMERO] cuentas asignadas y un ticket medio de [VALOR]. El mayor desafío en mi día a día es [DESCRIBE: el tiempo que lleva personalizar las comunicaciones para cada cuenta, la preparación de los QBRs, el onboarding de nuevas cuentas que siempre parece que podría hacerse más rápido, gestionar los clientes que están en riesgo de churn].

Módulo 1 — Respuestas de soporte que combinan empatía y precisión:
Explica cómo el prompting avanzado puede generar respuestas de soporte que suenan humanas, empáticas y precisas en lugar de las respuestas genéricas que produce una instrucción básica. Diseña un sistema de prompts para cuatro tipos de ticket de soporte: el ticket técnico complejo donde el cliente está frustrado y necesita una solución rápida, el ticket de una funcionalidad que no existe y el cliente la esperaba, el ticket de un cliente de alto valor que escala un problema al que no hemos respondido a tiempo, y el ticket de un cliente de bajo uso que pregunta cómo sacar más partido al producto. Para cada tipo, el prompt debe especificar el tono emocional (reconocer primero la frustración), el nivel técnico de la respuesta (adaptar al perfil del cliente) y la acción concreta que se propone.

Módulo 2 — QBRs que retienen y expanden cuentas:
Diseña un sistema de prompts para preparar Quarterly Business Reviews efectivos. El sistema incluye: un prompt de análisis de cuenta preQBR que, a partir de los datos de uso del período, el historial de tickets, el NPS y las notas de interacciones anteriores, genera el diagnóstico del estado de salud de la cuenta e identifica los dos o tres puntos de conversación más importantes; un prompt de estructura de QBR que genera la agenda y el contenido de cada sección adaptado al perfil del cliente (cliente de alto crecimiento que quiere upsell, cliente estable que necesita reafirmación del valor, cliente en riesgo que necesita rescate); y un prompt de follow-up postQBR que, a partir de las notas de la reunión, genera el email de resumen con los compromisos acordados, los próximos pasos con fechas y los KPIs que se seguirán hasta el próximo QBR.

Módulo 3 — Planes de onboarding personalizados en minutos:
Explica cómo usar la IA para generar planes de onboarding personalizados por tipo de cuenta sin partir de cero cada vez. Diseña una secuencia de prompts: el primer prompt analiza el perfil de la cuenta nueva (sector, tamaño, caso de uso principal, nivel técnico del equipo) y genera las hipótesis sobre cuáles serán sus mayores obstáculos en el onboarding y cuál será su primera victoria rápida; el segundo genera el plan de onboarding de 60 días personalizado con los hitos semanales, los recursos recomendados y los criterios de avance; y el tercero genera los emails de check-in de las semanas dos, cuatro y ocho con las preguntas específicas para detectar si el onboarding está avanzando según lo previsto o si hay señales de riesgo que requieren intervención.

Módulo 4 — Gestión de clientes en riesgo con prompts de diagnóstico y rescate:
Diseña un sistema de prompts para identificar y gestionar clientes en riesgo de churn. El sistema incluye: un prompt de diagnóstico de riesgo que, a partir de las señales de uso (caída del login, reducción del número de usuarios activos, aumento de tickets de frustración, silencio prolongado), genera la hipótesis de causa raíz del riesgo y el nivel de urgencia de la intervención; un prompt de plan de rescate que genera la estrategia de intervención adaptada a la causa identificada (riesgo por falta de adopción, riesgo por problema técnico recurrente, riesgo por cambio de interlocutor en el cliente, riesgo por presión de precio de un competidor); y un prompt para el email o la llamada de apertura del proceso de rescate que reconoce el problema sin sonar defensivo y propone un plan de acción concreto.

Módulo 5 — Biblioteca de prompts de CS reutilizables por situación:
Diseña el sistema de organización de una biblioteca de prompts de CS que el equipo puede compartir y mejorar colectivamente. La biblioteca incluye: la plantilla de contexto de cliente que se completa para cada cuenta y se usa en todos los prompts relacionados con ese cliente (producto contratado, caso de uso, historial de problemas, tono de comunicación preferido), el catálogo de prompts por situación (onboarding, QBR, rescate, upsell, renovación, offboarding), y el proceso de mejora continua de los prompts (cómo documenta el equipo cuáles prompts produjeron los mejores resultados y cómo se actualiza la biblioteca con esos aprendizajes).

Entregables:
- Sistema de cuatro prompts de soporte por tipo de ticket con tono, nivel técnico y acción propuesta
- Sistema de tres prompts de QBR (análisis preQBR, estructura adaptada por perfil, follow-up)
- Secuencia de tres prompts de onboarding personalizado con diagnóstico, plan de 60 días y check-ins
- Sistema de tres prompts de gestión de riesgo con diagnóstico, plan de rescate y comunicación de apertura
- Estructura de biblioteca de prompts de CS compartida con plantilla de contexto y catálogo por situación
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Escalar la capacidad del equipo de CS con prompt engineering avanzado para soporte, QBRs y onboarding',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Prompt engineering para freelancers: construir un sistema de prompts reutilizables que multiplica la productividad',
                'description'      => 'Diseña tu sistema personal de prompt engineering que automatiza las partes repetitivas de tu trabajo de freelancer y te permite ofrecer más valor a los clientes en menos tiempo. Los freelancers que construyen una biblioteca de prompts propios compiten con ventaja estructural sobre los que improvisan cada sesión.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de productividad para profesionales independientes con experiencia ayudando a freelancers de diferentes especialidades a construir sistemas de trabajo con IA que aumentan su capacidad de producción sin sacrificar la calidad que sus clientes valoran.

Contexto de mi negocio freelance:
Me dedico a [DESCRIBE TU ESPECIALIDAD: copywriting, diseño, desarrollo, consultoría, traducción, etc.] y trabajo principalmente con [TIPO DE CLIENTE: startups, empresas medianas, agencias, particulares]. Mis entregables más frecuentes son [LISTA: los tres o cuatro tipos de trabajo que más repites]. El problema más frustrante en mi día a día con la IA es [DESCRIBE: las respuestas son muy genéricas, tengo que explicar el contexto de mi cliente en cada sesión, los prompts que funcionaron bien para un cliente no funcionan para otro, pierdo mucho tiempo afinando antes de tener algo usable].

Bloque 1 — Por qué los freelancers necesitan un sistema de prompts y no solo buenos prompts:
Explica la diferencia entre tener buenos prompts individuales y tener un sistema de prompts. Un prompt individual produce un resultado bueno en una situación específica; un sistema de prompts produce resultados buenos en todas las situaciones porque está diseñado para capturar el contexto relevante de forma sistemática. Los cuatro componentes de un sistema de prompts para freelancers: la plantilla de contexto de cliente (que defines una vez por cliente y reutilizas en todos los trabajos), la biblioteca de prompts por tipo de entregable (organizada por los trabajos que más repites), el proceso de calibración de calidad (cómo evalúas si el resultado es lo suficientemente bueno antes de entregarlo), y el proceso de mejora continua (cómo documentas qué funcionó para usarlo la próxima vez). Explica cuánto tiempo realista tarda en construirse este sistema y cuándo empieza a ahorrar tiempo.

Bloque 2 — Construir la plantilla de contexto de cliente:
Diseña la plantilla de contexto de cliente que defines una vez al inicio de cada proyecto y pegas al inicio de cada sesión de trabajo con ese cliente. La plantilla debe capturar: el negocio del cliente (sector, producto o servicio, propuesta de valor única, audiencia objetivo), la voz y el tono de la marca (con tres ejemplos de comunicación que representa el estilo que buscan y tres que no), las restricciones conocidas (temas a evitar, términos o expresiones que no usan, formatos prohibidos), el nivel de sofisticación de la audiencia (cómo de técnico o específico puede ser el lenguaje), y el historial de preferencias (qué te han pedido que cambies en entregas anteriores). Diseña la plantilla con instrucciones para completar cada campo y un ejemplo de plantilla completada para un cliente ficticio de tu especialidad.

Bloque 3 — Biblioteca de prompts por tipo de entregable:
Diseña la estructura de tu biblioteca de prompts organizada por los cinco tipos de entregable más frecuentes en tu especialidad. Para cada tipo, el prompt de biblioteca debe incluir: el contexto de cliente (que se completa con la plantilla del bloque anterior), la descripción específica del entregable (qué es exactamente lo que necesitas, con los parámetros variables marcados entre corchetes), las restricciones de formato y extensión, los criterios de calidad que el entregable debe cumplir para ser acceptable, y la instrucción de revisión (qué preguntas hacerse para evaluar el output antes de enviarlo al cliente). Diseña los cinco prompts de biblioteca para tu especialidad y explica cómo mantenerlos actualizados cuando aprendes algo nuevo sobre las preferencias del cliente.

Bloque 4 — Prompts de calibración de calidad antes de la entrega:
Diseña un conjunto de prompts de autocrítica que usas antes de entregar cualquier trabajo al cliente. Los prompts de calibración deben simular la perspectiva del cliente para detectar problemas que tú, como productor del contenido, no ves. Incluye: un prompt de revisión desde la perspectiva del cliente final (¿conseguiría este entregable el objetivo para el que fue diseñado?), un prompt de coherencia de marca (¿este entregable suena como debería sonar esta marca o como un texto genérico?), un prompt de detección de señales de IA (¿hay frases, estructuras o expresiones que suenen a texto generado automáticamente y que el cliente podría detectar?), y un prompt de checklist de entrega (¿cumple todos los requisitos del briefing original?). Para cada prompt, incluye el criterio para decidir si el resultado pasa o necesita otra ronda de mejora.

Bloque 5 — Proceso de mejora continua de tu sistema de prompts:
Diseña el proceso de mantenimiento y mejora de tu biblioteca de prompts a lo largo del tiempo. Incluye: el ritual de revisión mensual de los prompts (cómo identificar cuáles están produciendo los mejores resultados y cuáles necesitan actualización), el proceso de documentación cuando un cliente te da feedback que mejora un prompt (cómo incorporar ese aprendizaje para que beneficie todos los trabajos futuros con ese cliente y con clientes similares), y el sistema de versionado de prompts (cómo mantener las versiones anteriores que funcionaban para ciertos clientes mientras evolucionas el sistema para clientes nuevos). Diseña también el proceso de onboarding de un cliente nuevo al sistema: cómo completas la plantilla de contexto en la primera reunión y cómo la calibras en las primeras dos o tres entregas.

Entregables:
- Explicación del sistema de prompts vs. prompts individuales con los cuatro componentes
- Plantilla de contexto de cliente con instrucciones de completado y ejemplo aplicado
- Biblioteca de cinco prompts de entregable con estructura modular y parámetros variables
- Cuatro prompts de calibración de calidad con criterios de aceptación antes de la entrega
- Proceso de mejora continua con ritual mensual, documentación de feedback y versionado
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un sistema de prompts reutilizables que multiplica la productividad del freelancer y mejora la consistencia de los entregables',
                'vote_score'       => 43,
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
