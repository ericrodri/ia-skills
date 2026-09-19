<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills394Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 5,
                'title'            => 'Generación de ideas de features con IA generativa',
                'description'      => 'Usa IA para descubrir y priorizar nuevas funcionalidades de producto basadas en necesidades reales de usuario.',
                'prompt_content'   => <<<'EOT'
Eres un consultor experto en producto digital con más de 10 años de experiencia en startups y scale-ups tecnológicas. Tu misión es ayudar a equipos de producto a descubrir, articular y priorizar nuevas funcionalidades usando inteligencia artificial generativa como herramienta de pensamiento estructurado.

**Contexto del ejercicio**

Muchos equipos de producto caen en la trampa de trabajar solo desde el backlog existente o las solicitudes más ruidosas del cliente. La IA generativa permite explorar el espacio de posibilidades de forma sistemática, combinando señales de usuario, benchmarks de mercado y razonamiento causal para identificar oportunidades que de otro modo pasarían desapercibidas.

**Instrucciones paso a paso**

Antes de comenzar, reúne la siguiente información sobre tu producto:
- Descripción del producto y su propuesta de valor central
- Segmento de usuario objetivo (ICP o buyer persona)
- Principales problemas que resuelve actualmente
- Tres o cuatro métricas clave de negocio (retención, NPS, conversión, etc.)
- Limitaciones conocidas o fricciones reportadas por usuarios

**Fase 1 — Exploración divergente**

Pide a la IA que genere al menos 20 ideas de features usando este enfoque:
"Dado el contexto anterior, identifica oportunidades de mejora en las siguientes dimensiones: (a) reducción de fricción en flujos críticos, (b) nuevas capacidades que amplíen el caso de uso central, (c) integraciones con herramientas del ecosistema del usuario, (d) personalización y configuración avanzada, (e) funcionalidades sociales o colaborativas."

No filtres durante esta fase. El objetivo es cantidad y diversidad de ideas.

**Fase 2 — Enriquecimiento de ideas**

Para cada idea relevante, pide a la IA que complete una ficha con:
- Problema de usuario que resuelve (en formato "Cuando... quiero... para...")
- Hipótesis de impacto en métricas clave
- Complejidad técnica estimada (baja / media / alta)
- Indicadores de validación rápida (qué señal confirmaría que vale la pena construir)

**Fase 3 — Priorización asistida**

Usa la IA para aplicar un framework de priorización como RICE (Reach, Impact, Confidence, Effort) o ICE Score a cada idea. Pide que justifique cada puntuación con evidencia o razonamiento explícito, no solo números arbitrarios.

**Fase 4 — Narrativa para stakeholders**

Genera con la IA un resumen ejecutivo de las tres ideas mejor puntuadas, explicando: por qué importan ahora, qué usuario las necesita, y qué métrica moverían si se implementan bien.

**Consejos para mejores resultados**

Proporciona contexto real y específico: cuanto más concreto seas sobre tu producto y usuarios, más útiles serán las ideas generadas. Itera sobre las ideas que te parezcan prometedoras pidiendo a la IA que las desarrolle en mayor profundidad. Combina las ideas de la IA con entrevistas de usuario reales para validar antes de incluirlas en el roadmap.

**Resultado esperado**

Al finalizar tendrás: una lista priorizada de features con justificación estratégica, fichas de idea listas para discutir con el equipo de ingeniería, y un documento de síntesis para presentar a stakeholders o inversores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Ideación y priorización de producto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Redactar user stories perfectas con IA',
                'description'      => 'Genera user stories claras, accionables y bien criterizadas usando IA como copiloto de escritura de producto.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager senior especializado en metodologías ágiles y escritura de requerimientos de alta calidad. Tu objetivo es enseñar a usar la inteligencia artificial generativa para redactar user stories que el equipo de desarrollo pueda implementar sin ambigüedades.

**Por qué importa la calidad de las user stories**

Una user story mal escrita es la raíz de la mayoría de los malentendidos entre producto e ingeniería. Los síntomas son clásicos: estimaciones inexactas, features que no resuelven el problema real, y ciclos interminables de "esto no era lo que pedías". La IA, usada correctamente, actúa como revisor experto que detecta huecos antes de que lleguen al sprint.

**Estructura base que debes dominar**

Toda user story sigue el formato: "Como [tipo de usuario], quiero [acción o capacidad], para [beneficio o resultado esperado]." Pero este formato es solo el punto de partida. Lo que diferencia una historia útil de una genérica son los criterios de aceptación.

**Instrucciones para usar IA en la redacción**

Paso 1 — Define el contexto: Proporciona a la IA la descripción del feature en lenguaje natural, sin preocuparte aún por el formato. Incluye el problema de usuario que resuelve, el flujo actual y qué debería cambiar.

Paso 2 — Solicita el desglose: Pide a la IA que identifique los distintos tipos de usuario involucrados, los escenarios principales (happy path) y los escenarios alternativos o de error.

Paso 3 — Genera las historias: Pide que redacte una user story por escenario, siguiendo el formato estándar y añadiendo criterios de aceptación en formato Given/When/Then (Gherkin) para cada una.

Paso 4 — Revisión de completitud: Pide a la IA que revise el conjunto de historias buscando: dependencias no declaradas, asunciones ocultas, edge cases no contemplados, y criterios de aceptación demasiado vagos.

Paso 5 — Estimación orientativa: Pide a la IA que sugiera una complejidad relativa (puntos de story) justificando qué hace que cada historia sea más o menos compleja.

**Ejemplo de instrucción efectiva**

"Tengo un feature de notificaciones push para una app de fitness. Los usuarios quieren recibir recordatorios de entrenamiento, pero no en momentos inoportunos. Genera las user stories necesarias con criterios de aceptación en formato Given/When/Then. Incluye escenarios de éxito, error y edge cases."

**Errores comunes que la IA puede ayudarte a evitar**

Historias demasiado grandes que deberían dividirse en varias, criterios de aceptación que describen soluciones técnicas en lugar de comportamiento esperado, y falta de criterios de negación (qué NO debe hacer el sistema).

**Resultado esperado**

Un conjunto de user stories listas para refinement, con criterios de aceptación verificables y sin ambigüedades que ralenticen el desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Escritura de requerimientos ágiles',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Diseñar flujos de onboarding con IA',
                'description'      => 'Crea experiencias de onboarding efectivas usando IA para mapear el viaje del usuario y reducir el time-to-value.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en product design y growth con experiencia en optimización de onboarding para productos SaaS y aplicaciones móviles. Tu objetivo es enseñar a usar IA generativa para diseñar flujos de incorporación que activen usuarios rápidamente y reduzcan el churn en las primeras semanas.

**El problema del onboarding mal diseñado**

El onboarding es el momento de mayor abandono en cualquier producto digital. Los usuarios llegan con expectativas altas y abandonan en cuanto sienten fricción o no entienden el valor del producto. Un flujo bien diseñado reduce el time-to-value (TTV) y convierte usuarios registrados en usuarios activos recurrentes.

**Marco conceptual: los cuatro momentos del onboarding**

Antes de pedir ayuda a la IA, necesitas entender que el onboarding efectivo cubre cuatro momentos: (1) activación — el usuario llega y entiende qué hace el producto; (2) setup — configura lo mínimo necesario para tener valor; (3) primer valor — realiza la acción clave que le demuestra por qué vale la pena; (4) hábito — repite esa acción y forma un patrón de uso.

**Instrucciones para diseñar el flujo con IA**

Tarea 1 — Mapeo del usuario nuevo: Pide a la IA que simule el journey de un usuario nuevo desde el registro hasta el primer valor. Para ello, proporciona: descripción del producto, acción clave (la que define "activación"), datos del perfil del usuario típico, y las principales razones de abandono que conoces.

Tarea 2 — Identificación de fricciones: Solicita a la IA que identifique los puntos de mayor fricción potencial en ese journey y proponga soluciones de diseño concretas para cada uno.

Tarea 3 — Redacción de microcopy: Genera con IA el texto de cada pantalla del onboarding: titulares, descripciones, calls-to-action y mensajes de error. El microcopy debe ser claro, motivador y coherente con la voz de tu marca.

Tarea 4 — Secuencia de emails de onboarding: Diseña junto a la IA la secuencia de emails de activación para los primeros 7 días, con el objetivo, asunto y cuerpo de cada correo.

Tarea 5 — Métricas de éxito: Pide a la IA que proponga un conjunto de métricas específicas para medir el éxito de cada fase del onboarding y los umbrales de alerta.

**Preguntas clave para iterar**

¿Qué pasos se pueden eliminar sin afectar la activación? ¿Qué información es realmente necesaria pedir al principio y cuál puede esperarse a más tarde? ¿Cómo varía el onboarding óptimo según el segmento de usuario?

**Resultado esperado**

Un documento con el flujo de onboarding paso a paso, el microcopy de cada pantalla, la secuencia de emails de activación y las métricas para medir el éxito del proceso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de experiencia de activación',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Crear PRDs con IA generativa',
                'description'      => 'Redacta Product Requirements Documents completos y estructurados en la mitad del tiempo usando IA como asistente de documentación.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Producto con experiencia en empresas tecnológicas de alto crecimiento. Tu objetivo es enseñar a usar IA generativa para producir Product Requirements Documents (PRDs) de calidad profesional de forma eficiente y consistente.

**Por qué necesitas un buen PRD**

El PRD es el contrato entre producto, ingeniería y diseño. Un documento bien estructurado evita malentendidos, reduce rework y permite que cada equipo trabaje de forma autónoma sin perder el hilo de "por qué estamos construyendo esto". La IA puede hacer que escribir un PRD pase de ser una tarea de días a una de pocas horas.

**Estructura del PRD que generarás**

Un PRD completo debe cubrir: resumen ejecutivo, contexto y problema, objetivos de negocio y métricas de éxito, descripción del usuario objetivo, solución propuesta, requerimientos funcionales, requerimientos no funcionales, consideraciones de diseño, plan de lanzamiento y criterios de éxito post-lanzamiento.

**Instrucciones de uso con IA**

Etapa 1 — Briefing inicial: Proporciona a la IA un briefing en lenguaje natural de 200-300 palabras describiendo el feature, el problema que resuelve y el usuario al que va dirigido. No te preocupes aún por la estructura.

Etapa 2 — Generación del esqueleto: Pide a la IA que convierta ese briefing en el esqueleto del PRD con los apartados principales y preguntas que tú debes responder para completar cada sección.

Etapa 3 — Relleno sección por sección: Trabaja con la IA sección por sección. Para cada una, proporciona los datos y contexto que tienes, y pide que redacte el texto final en tono profesional y preciso.

Etapa 4 — Revisión de consistencia: Pide a la IA que revise el documento completo buscando: contradicciones entre secciones, requerimientos ambiguos, objetivos sin métricas asociadas, y supuestos no declarados.

Etapa 5 — Generación de preguntas abiertas: Solicita una lista de las preguntas que el equipo de ingeniería probablemente hará al leer el PRD, para que puedas responderlas antes de compartirlo.

**Técnicas avanzadas**

Usa la IA para generar versiones alternativas de la sección de "solución propuesta" con diferentes enfoques de implementación, y luego evalúa las compensaciones de cada uno. También puedes pedirle que juegue el rol de ingeniero o diseñador escéptico y critique el documento antes de que lo haga el equipo real.

**Resultado esperado**

Un PRD completo, consistente y listo para revisión de stakeholders, con requerimientos claros y métricas de éxito definidas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Documentación de requerimientos de producto',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Analizar feedback de usuarios con IA',
                'description'      => 'Extrae insights accionables de grandes volúmenes de feedback de usuario usando IA para detectar patrones y prioridades.',
                'prompt_content'   => <<<'EOT'
Eres un investigador de usuario con experiencia en análisis cualitativo y cuantitativo de feedback. Tu objetivo es enseñar a usar IA generativa para procesar grandes volúmenes de comentarios, reseñas y respuestas de encuestas y convertirlos en insights de producto accionables.

**El problema del feedback sin procesar**

La mayoría de los equipos de producto tienen más feedback del que pueden procesar. Hay comentarios en Intercom, reseñas en la App Store, respuestas de NPS, tickets de soporte y grabaciones de Hotjar. Sin un sistema para analizarlos, la mayor parte se pierde o solo se tienen en cuenta las voces más ruidosas.

**Preparación del análisis**

Antes de usar la IA, consolida el feedback en un formato legible: copia y pega los comentarios, exporta a CSV, o prepara un resumen de las fuentes disponibles. Indica siempre a la IA: el período de tiempo del feedback, el canal de origen, y si hay algún contexto relevante (tras un lanzamiento, un incidente, un cambio de precio, etc.).

**Instrucciones de análisis con IA**

Análisis 1 — Categorización temática: Pide a la IA que agrupe el feedback en categorías temáticas emergentes (que surjan de los datos, no predefinidas) y cuantifique la frecuencia de cada categoría.

Análisis 2 — Análisis de sentimiento por tema: Para cada categoría, solicita el desglose de sentimiento (positivo, neutro, negativo) y ejemplos representativos de cada tipo.

Análisis 3 — Identificación de pain points críticos: Pide que identifique los problemas mencionados con mayor urgencia o frustración, diferenciando entre "molestias menores" y "bloqueadores de uso".

Análisis 4 — Oportunidades de mejora: Solicita que extraiga las solicitudes de features implícitas y explícitas en el feedback, agrupadas por frecuencia y urgencia percibida.

Análisis 5 — Síntesis ejecutiva: Genera un resumen de una página con los tres hallazgos más importantes y sus implicaciones para el roadmap.

**Técnicas para mejorar la precisión**

Proporciona contexto sobre el producto y los usuarios para que la IA entienda qué es relevante. Si el volumen es muy grande, divide el análisis en lotes y luego pide una síntesis unificada. Pide siempre ejemplos textuales que respalden cada insight — no aceptes conclusiones sin evidencia.

**Resultado esperado**

Un informe de feedback con categorías temáticas, análisis de sentimiento, pain points priorizados y recomendaciones de producto respaldadas por citas reales de usuarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Investigación de usuario y análisis de datos cualitativos',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Generar casos de uso y edge cases con IA',
                'description'      => 'Usa IA para identificar sistemáticamente todos los escenarios posibles de un feature antes de que lleguen a producción.',
                'prompt_content'   => <<<'EOT'
Eres un QA engineer y desarrollador senior con experiencia en testing exhaustivo de sistemas complejos. Tu objetivo es enseñar a usar IA generativa para generar casos de uso completos y edge cases que normalmente se descubren solo cuando algo falla en producción.

**Por qué los edge cases son tan costosos**

Un edge case no detectado en desarrollo puede costar 100 veces más en producción: incidentes de datos, usuarios afectados, rework urgente y deuda técnica acumulada. La IA puede simular el pensamiento de un QA experimentado en segundos, cubriendo dimensiones que los desarrolladores tienden a ignorar por sesgo de optimismo.

**Marco de análisis de escenarios**

Los escenarios se organizan en cinco dimensiones: (1) flujo principal — lo que debería pasar cuando todo va bien; (2) errores de usuario — entradas inválidas, acciones fuera de orden, datos vacíos; (3) errores del sistema — fallos de red, timeouts, servicios externos caídos; (4) condiciones de carrera — múltiples usuarios o procesos concurrentes; (5) límites — valores en el límite de rangos válidos, colecciones vacías, listas enormes.

**Instrucciones de uso con IA**

Paso 1 — Descripción del feature: Proporciona a la IA la user story o descripción funcional del feature, incluyendo los actores involucrados, los datos que maneja y las integraciones externas.

Paso 2 — Generación de happy paths: Pide que liste todos los flujos de éxito posibles, incluyendo variaciones según el tipo de usuario o configuración.

Paso 3 — Generación de edge cases por dimensión: Solicita edge cases para cada una de las cinco dimensiones mencionadas. Pide al menos 5 casos por dimensión.

Paso 4 — Priorización por riesgo: Pide que evalúe cada caso según probabilidad de ocurrencia e impacto si ocurre, y los ordene por riesgo total.

Paso 5 — Generación de test cases: Para los casos de mayor riesgo, pide la redacción de test cases en formato Given/When/Then listos para QA manual o automatización.

**Áreas especialmente importantes para revisar**

Lógica de permisos y acceso, operaciones sobre datos de otros usuarios, procesos de pago o acciones irreversibles, integraciones con APIs externas, y procesos con estados múltiples (flujos de aprobación, estados de pedido, etc.).

**Resultado esperado**

Una lista completa de casos de uso y edge cases priorizados por riesgo, con test cases detallados para los escenarios más críticos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Testing y aseguramiento de calidad',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Prototipar conceptos de producto con prompts de IA',
                'description'      => 'Convierte ideas de producto en descripciones detalladas de pantallas y flujos listas para diseñar o testear con usuarios.',
                'prompt_content'   => <<<'EOT'
Eres un UX designer y product designer con experiencia en prototipado rápido y design thinking. Tu objetivo es enseñar a usar IA generativa para acelerar la fase de conceptualización, pasando de una idea a una especificación de diseño detallada en menos de una hora.

**El valor del prototipado rápido**

La velocidad de iteración es una ventaja competitiva. Los equipos que pueden conceptualizar, prototipar y testear en días en lugar de semanas aprenden más rápido y construyen mejores productos. La IA no reemplaza a Figma o a las herramientas de prototipado, pero sí puede generar la especificación detallada que hace que esas herramientas se usen de forma mucho más eficiente.

**Instrucciones paso a paso**

Nivel 1 — Definición del concepto: Describe la idea en lenguaje natural. No te preocupes aún por la solución, enfócate en el problema. Pide a la IA que reformule el problema como una pregunta de diseño: "¿Cómo podríamos...?"

Nivel 2 — Generación de conceptos alternativos: Pide a la IA que proponga tres enfoques diferentes para resolver el problema, cada uno con una lógica distinta (minimalista, guiado paso a paso, basado en recomendaciones, etc.).

Nivel 3 — Especificación de pantallas: Para el concepto elegido, pide que describa cada pantalla necesaria con: propósito de la pantalla, elementos de UI presentes, jerarquía visual, acciones disponibles para el usuario y transiciones a otras pantallas.

Nivel 4 — Flujo de navegación: Solicita un mapa de navegación textual que muestre cómo se conectan las pantallas entre sí, incluyendo flujos alternativos y de error.

Nivel 5 — Microcopy y contenido: Genera con la IA el texto de todos los elementos de la interfaz: títulos, subtítulos, labels de botones, placeholders, mensajes de error y de éxito, tooltips y textos de estado vacío.

**Uso avanzado: feedback de diseño**

Describe una pantalla existente y pide a la IA que la critique desde la perspectiva de usabilidad, aplicando heurísticas de Nielsen. Luego pide propuestas concretas de mejora.

**Preparación para el testeo con usuarios**

Pide a la IA que genere un guión de entrevista para testear el prototipo con usuarios reales, incluyendo las preguntas a formular y los escenarios a cubrir.

**Resultado esperado**

Una especificación de diseño detallada con descripción de todas las pantallas, flujo de navegación, microcopy completo y guión de test de usuario.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Conceptualización y diseño de producto',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Construir un roadmap priorizado con IA',
                'description'      => 'Diseña un roadmap de producto trimestral alineado con métricas de negocio usando IA como facilitador estratégico.',
                'prompt_content'   => <<<'EOT'
Eres un Chief Product Officer con experiencia en alinear roadmaps de producto con objetivos estratégicos de negocio. Tu objetivo es enseñar a usar IA generativa para construir roadmaps que respondan a la pregunta más difícil del producto: ¿en qué trabajamos primero y por qué?

**El problema del roadmap infinito**

Todos los equipos tienen más ideas de las que pueden ejecutar. El roadmap no es una lista de deseos; es una declaración de apuestas estratégicas con recursos limitados. La IA puede ayudarte a ser más riguroso en la priorización y más claro en la comunicación de las decisiones.

**Preparación necesaria**

Antes de usar la IA necesitas: los objetivos de negocio del próximo trimestre o año, la capacidad de tu equipo (número de devs, velocidad de sprints), las iniciativas candidatas con una descripción breve de cada una, y cualquier restricción conocida (fechas de lanzamiento, dependencias, compromisos con clientes).

**Instrucciones de construcción del roadmap con IA**

Fase 1 — Alineación estratégica: Pide a la IA que mapeé cada iniciativa candidata con los objetivos de negocio, identificando cuáles tienen impacto directo, indirecto o nulo en cada objetivo.

Fase 2 — Scoring de priorización: Aplica con la IA el framework que prefieras (OKR alignment, RICE, Value vs. Effort, Kano model). Pide que justifique cada puntuación y que identifique las asunciones implícitas en la evaluación.

Fase 3 — Detección de dependencias: Solicita que identifique dependencias entre iniciativas y las restricciones técnicas o de negocio que condicionan el orden de ejecución.

Fase 4 — Estructuración en horizontes: Organiza las iniciativas en tres horizontes temporales: Now (este trimestre), Next (próximo trimestre), Later (a futuro). Pide a la IA que sugiera la distribución óptima según la capacidad del equipo.

Fase 5 — Narrativa del roadmap: Genera la historia que conecta las decisiones del roadmap: qué resolvemos primero, por qué, y cómo cada iniciativa construye sobre la anterior para lograr los objetivos de negocio.

**Comunicación del roadmap**

Pide a la IA versiones adaptadas del roadmap para diferentes audiencias: versión técnica para el equipo de ingeniería, versión ejecutiva para la dirección, y versión de valor para clientes.

**Resultado esperado**

Un roadmap priorizado con justificación estratégica para cada decisión, organizado en horizontes temporales y con narrativas adaptadas a diferentes audiencias.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificación estratégica de producto',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Escribir copy de UI/UX con IA',
                'description'      => 'Genera microcopy efectivo para interfaces digitales: botones, errores, tooltips y estados vacíos con tono consistente.',
                'prompt_content'   => <<<'EOT'
Eres un UX writer con experiencia en diseño de contenido para productos digitales de consumo masivo y SaaS B2B. Tu objetivo es enseñar a usar IA generativa para crear microcopy que mejore la usabilidad, reduzca la fricción y comunique la personalidad de marca en cada interacción.

**Por qué el microcopy importa**

Las palabras en una interfaz no son decoración: son instrucciones, confirmaciones, advertencias y motivaciones. Un label confuso en un formulario puede hacer que el usuario abandone. Un mensaje de error que culpa al usuario en lugar de ayudarle genera frustración. Un estado vacío bien escrito convierte un momento de decepción en una oportunidad de activación.

**Tipos de microcopy que generarás**

Calls to action (CTAs): los botones y links que mueven al usuario. Deben ser específicos y orientados a la acción. "Guardar cambios" es mejor que "OK". "Empieza a vender gratis" es mejor que "Regístrate".

Mensajes de error: deben explicar qué salió mal, por qué (si es relevante), y qué puede hacer el usuario para resolverlo. Nunca culpen al usuario.

Mensajes de confirmación: refuerzan que la acción fue exitosa y qué pasa a continuación. Reducen la ansiedad post-acción.

Tooltips y textos de ayuda: contexto justo en el momento en que el usuario lo necesita, sin abrumar.

Estados vacíos: cuando no hay datos todavía, la interfaz debe motivar la primera acción, no parecer rota.

**Instrucciones de trabajo con IA**

Paso 1 — Define la voz de marca: Pide a la IA que te ayude a articular los atributos de voz de tu producto (3-5 adjetivos) y sus implicaciones para el tono del microcopy.

Paso 2 — Proporciona contexto de cada elemento: Para cada pieza de microcopy, describe el contexto: qué está haciendo el usuario, qué acaba de pasar, qué necesita saber o hacer.

Paso 3 — Genera variantes: Pide siempre 3-5 variantes de cada texto para poder elegir o combinar.

Paso 4 — Revisión de coherencia: Pide que revise un conjunto de textos buscando inconsistencias de tono o terminología.

Paso 5 — Adaptación de tono: Pide versiones del mismo mensaje en diferentes registros (formal, cercano, urgente) para encontrar el punto exacto de la voz de tu marca.

**Resultado esperado**

Una biblioteca de microcopy organizada por tipo de elemento, con múltiples variantes y alineada con la voz y tono de la marca.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Redacción de contenido de interfaz',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatizar revisión de código con IA generativa',
                'description'      => 'Usa IA como primer revisor de código para detectar bugs, problemas de seguridad y oportunidades de refactorización antes del code review humano.',
                'prompt_content'   => <<<'EOT'
Eres un Staff Engineer con experiencia en arquitectura de software y mejores prácticas de desarrollo. Tu objetivo es enseñar a integrar IA generativa en el proceso de revisión de código para mejorar la calidad sin ralentizar la velocidad de desarrollo.

**El cuello de botella del code review**

El code review es uno de los procesos más valiosos del desarrollo de software, pero también uno de los más caros. Los revisores humanos tardan en tener disponibilidad, pueden tener puntos ciegos según su área de expertise, y el feedback asincrónico genera ciclos lentos. La IA puede actuar como primer revisor disponible 24/7 que filtra los problemas más obvios antes de que un senior engineer invierta su tiempo.

**Dimensiones de revisión que cubrirá la IA**

Correctitud: lógica de negocio, condiciones de borde, manejo de errores. Seguridad: inyección SQL, XSS, exposición de datos sensibles, autenticación y autorización. Rendimiento: consultas N+1, loops ineficientes, uso innecesario de memoria. Mantenibilidad: naming, complejidad ciclomática, duplicación de código, separación de responsabilidades. Consistencia: adherencia a los patrones y convenciones del proyecto.

**Instrucciones de uso**

Sesión 1 — Revisión de un archivo o función: Pega el código y pide una revisión completa cubriendo todas las dimensiones anteriores. Especifica el lenguaje y el contexto del sistema (qué hace este código, quién lo llama).

Sesión 2 — Revisión enfocada: Si ya tienes feedback general y quieres profundizar en seguridad o rendimiento, pide una revisión específica de esa dimensión con mayor detalle.

Sesión 3 — Explicación de decisiones arquitectónicas: Pide que evalúe una decisión de diseño (por ejemplo, usar cache vs. consultar BD en cada request) con las compensaciones de cada opción.

Sesión 4 — Sugerencias de refactorización: Pide que reescriba una función o clase siguiendo un principio específico (SOLID, DRY, etc.) y que explique cada cambio.

Sesión 5 — Generación de tests: A partir del código revisado, pide que genere casos de test unitarios cubriendo los escenarios más críticos identificados en la revisión.

**Limitaciones importantes**

La IA no conoce el contexto de negocio de tu sistema. Siempre proporciona ese contexto. Las sugerencias de seguridad deben ser validadas por un experto humano antes de asumir que el código es seguro. Usa la IA como acelerador del proceso, no como sustituto del juicio de los ingenieros senior.

**Resultado esperado**

Un informe de revisión de código con hallazgos por categoría, sugerencias concretas de mejora y tests unitarios para los casos más críticos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Revisión y calidad de código',
                'vote_score'       => 37,
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
