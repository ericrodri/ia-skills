<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills199Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para marketing: casos de uso reales en 2025',
                'description'      => 'Las aplicaciones de IA que ya están generando ROI en los equipos de marketing: generación de contenido a escala, personalización en tiempo real, optimización de pujas y análisis de sentimiento en redes sociales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing digital con experiencia directa implementando soluciones de IA en equipos de marketing de empresas medianas y grandes en 2024 y 2025. Voy a explorar contigo las aplicaciones de IA que ya están generando ROI real en los equipos de marketing, no las que están en el horizonte, sino las que funcionan hoy.

Mi contexto: [describe tu situación: eres el responsable de marketing de una empresa B2B o B2C, el tamaño de tu equipo, las herramientas que ya usas y el principal desafío que quieres resolver con IA]

Necesito que me guíes por los siguientes bloques con ejemplos concretos y métricas reales donde los tengas:

**1. Generación de contenido a escala sin perder la voz de marca**
Explícame cómo los equipos de marketing están usando la IA para producir contenido a un volumen imposible para equipos humanos: los flujos de trabajo que combinan IA con revisión humana, las herramientas que están usando (Jasper, Copy.ai, Claude, ChatGPT), los tipos de contenido donde la IA ya es competitiva (descripciones de producto, variaciones de anuncio, newsletters, posts de blog con SEO) y donde todavía no lo es.

Dame un flujo de trabajo tipo para producir 50 variaciones de copy de anuncio en una hora, con el proceso de revisión humana que garantiza que nada que salga tenga errores de marca o de tono.

**2. Personalización en tiempo real**
La promesa de la personalización a escala siempre ha existido pero raramente se cumplía. Explícame cómo la IA está haciendo realidad la personalización en tiempo real: los sistemas de recomendación de contenido, la personalización del email marketing (no solo el nombre: el mensaje, la oferta, el momento), la web personalizada para distintos segmentos y las herramientas que lo hacen posible sin un equipo de ingeniería grande.

Incluye casos concretos de empresas que han implementado personalización con IA y qué mejoras de métricas han conseguido (CTR, conversión, LTV).

**3. Optimización de pujas y paid media con IA**
Las plataformas de publicidad ya tienen IA integrada, pero la mayoría de los equipos la usan mal. Explícame cómo los equipos de marketing más avanzados están optimizando sus campañas de paid media con IA: el uso de Performance Max y Smart Bidding de Google, las Advantage+ de Meta, cuándo confiar en la IA de la plataforma y cuándo mantener el control manual.

Dame una estrategia de testing para evaluar si la IA de la plataforma está mejorando o empeorando tus resultados, y los parámetros que debes configurar para que funcione bien.

**4. Análisis de sentimiento y escucha social**
El volumen de conversaciones sobre tu marca en redes sociales es imposible de procesar manualmente. Explícame cómo las herramientas de IA están transformando la escucha social: el análisis de sentimiento en tiempo real, la detección de tendencias emergentes, la identificación de embajadores de marca y detractores, y la conexión entre el sentimiento social y los resultados de negocio.

Incluye qué herramientas están usando los equipos más avanzados (Brandwatch, Sprinklr, herramientas propias con APIs) y cómo integrar estos insights en la toma de decisiones de marketing.

**5. El stack de IA para marketing en 2025**
Dame una visión del stack de herramientas de IA que un equipo de marketing de 5-15 personas debería considerar en 2025: las que ya son imprescindibles, las que hay que evaluar y las que son hype sin sustancia. Organízalo por función (creación de contenido, análisis, paid media, CRM, automatización) y da tu criterio sobre cuándo vale la pena la inversión.

**6. Los riesgos y límites que nadie te cuenta**
La IA en marketing también tiene problemas reales. Explícame los riesgos más importantes: la homogeneización del contenido cuando todos usan las mismas herramientas, los errores de marca que se cuelan si la revisión humana no es buena, la dependencia de plataformas que pueden cambiar sus modelos de precio, y los problemas de privacidad con los datos de clientes que alimentan los sistemas de IA.

Dame un framework para evaluar el riesgo de cada aplicación de IA antes de implementarla.

Quiero ejemplos reales, métricas donde las tengas y honestidad sobre lo que funciona y lo que no. No necesito el discurso de que "la IA va a transformar el marketing": necesito saber qué hacer la próxima semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Identificar e implementar las aplicaciones de IA que ya generan ROI en marketing',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'LLMs en producción: arquitecturas y tradeoffs',
                'description'      => 'Despliega modelos de lenguaje en sistemas de producción: RAG vs fine-tuning, evaluación de modelos, latencia y costes, y los patrones de arquitectura que los equipos de ingeniería están usando en 2025.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineer senior con experiencia desplegando sistemas basados en LLMs en producción, con exposición real a los problemas de latencia, coste, fiabilidad y calidad que aparecen cuando se sale del prototipo y se empieza a servir tráfico real. Voy a explorar contigo las arquitecturas y decisiones técnicas que importan cuando llevas LLMs a producción.

Mi contexto: [describe tu situación: estás prototipando una feature con LLMs, llevando un prototipo a producción, o optimizando un sistema ya desplegado; qué tipo de aplicación es y a qué escala]

Trabaja conmigo en profundidad los siguientes bloques:

**1. RAG vs fine-tuning: cuándo usar cada uno**
Esta es la decisión más importante y la que más se malentiende. Explícame con rigor técnico cuándo tiene sentido RAG (Retrieval Augmented Generation), cuándo fine-tuning y cuándo ninguno de los dos: las variables que determinan la decisión (tamaño del corpus de conocimiento, frecuencia de actualización, tipo de tarea, volumen de ejemplos de entrenamiento disponibles, coste), los antipatrones más comunes (hacer fine-tuning cuando RAG sería suficiente, o usar RAG cuando el modelo necesita aprender un estilo o formato específico) y los casos híbridos donde se combinan las dos aproximaciones.

Dame un árbol de decisión concreto para elegir la aproximación correcta.

**2. Evaluación de modelos: cómo saber si tu sistema es bueno**
Evaluar un sistema de LLM es fundamentalmente diferente a evaluar software tradicional. Explícame cómo construir un sistema de evaluación robusto: los tipos de evaluación (evaluación automática con LLM-as-judge, benchmarks offline, evaluación humana, métricas de producción), cómo diseñar el test set que representa los casos de uso reales, los peligros del overfitting a los benchmarks y cómo detectar degradación de calidad en producción antes de que los usuarios se quejen.

Incluye cómo evaluar sistemas RAG específicamente: las métricas de retrieval (recall, precision, MRR) y las métricas de generación (faithfulness, relevance, completeness).

**3. Latencia y coste: el triángulo de hierro de los LLMs**
Calidad, latencia y coste son los tres vértices y siempre hay que ceder en algo. Explícame las palancas que tengo para optimizar cada uno: las técnicas de reducción de latencia (streaming, caching, modelos más pequeños para subtareas, batching), las estrategias de reducción de coste (prompt optimization, caching de respuestas, model routing según complejidad de la tarea) y cómo medir y monitorizar estos parámetros en producción.

Dame una estrategia de model routing que usa modelos pequeños para las tareas simples y el modelo más potente solo cuando es necesario, con el criterio de decisión entre uno y otro.

**4. Patrones de arquitectura para sistemas LLM en producción**
Hay patrones que aparecen repetidamente en los sistemas de LLMs que funcionan en producción. Explícame los más importantes: el patrón de orchestration (LangChain, LlamaIndex, frameworks custom), los sistemas multi-agente y cuándo tienen sentido, el patrón de verificación (un LLM que revisa la salida de otro), el manejo de contexto largo y sus limitaciones, y cómo estructurar los prompts de sistema para producción (versionado, testing, deployment).

**5. Fiabilidad y manejo de fallos**
Los LLMs fallan de formas que el software tradicional no falla: alucinaciones, respuestas inconsistentes, degradación silenciosa. Explícame cómo construir sistemas resilientes: las guardrails de entrada y salida (detección de contenido problemático, validación de formato), los mecanismos de retry y fallback, el circuit breaker para cuando el proveedor tiene problemas y el monitoring que te avisa cuando la calidad de las respuestas cae.

**6. Decisiones de infraestructura: API de proveedor vs. modelo propio**
La decisión de usar la API de un proveedor (OpenAI, Anthropic, Google) versus desplegar tu propio modelo (Llama, Mistral) tiene implicaciones enormes. Explícame el análisis de decisión: los factores económicos (cuándo el coste de la API supera el coste de infraestructura propia), los factores de privacidad y cumplimiento, los factores técnicos (latencia, control sobre el modelo) y el punto de inflexión en volumen donde cambia la decisión óptima.

Quiero respuestas técnicas concretas con números donde sea posible. Soy un engineer que necesita tomar decisiones con información real, no abstracciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Tomar decisiones arquitectónicas correctas al desplegar LLMs en producción',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA generativa en el flujo de diseño',
                'description'      => 'Integra las herramientas de IA generativa en tu proceso de diseño sin perder la dirección creativa: Midjourney, Stable Diffusion, Adobe Firefly y los prompts de diseño que producen resultados utilizables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de arte y diseñador de producto con experiencia integrando herramientas de IA generativa en flujos de trabajo de diseño profesional, tanto para proyectos de identidad de marca como de producto digital. Voy a explorar contigo cómo integrar la IA generativa en el proceso de diseño de forma que añada valor real sin comprometer la dirección creativa.

Mi contexto: [describe tu situación: eres un diseñador freelance, parte de un equipo de diseño, o director creativo; qué tipo de proyectos haces y cuál es tu nivel de experiencia actual con herramientas de IA generativa]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El mapa de herramientas: cuál usar para cada cosa**
El ecosistema de IA generativa para diseño es amplio y confuso. Explícame con criterio práctico qué herramienta usar para cada tipo de trabajo: Midjourney para exploración conceptual y moodboards, Stable Diffusion para cuando necesitas control total y uso comercial sin restricciones, Adobe Firefly cuando trabajas en el ecosistema Adobe y necesitas assets directamente utilizables, DALL-E cuando necesitas integración con flujos de trabajo existentes. Los puntos fuertes y débiles de cada una, y los casos donde definitivamente no usarías IA generativa.

**2. Prompts de diseño que producen resultados utilizables**
La diferencia entre un resultado mediocre y uno que se puede usar en producción está en el prompt. Explícame la anatomía de un prompt de diseño eficaz: la estructura (qué elementos incluir siempre, en qué orden), el vocabulario que funciona (referencias de estilo, artistas, movimientos, técnicas, iluminación, composición), y los iteradores que refinas cuando el resultado no es lo que buscabas.

Dame 10 ejemplos de prompts para casos de uso frecuentes en diseño: exploración de identidad visual, generación de ilustraciones para UI, creación de fondos y texturas, variaciones de packaging, moodboards fotorrealistas. Para cada uno explica por qué ese prompt funciona y qué cambiarías para variarlo.

**3. Mantener la dirección creativa cuando la IA genera**
El riesgo de la IA generativa en diseño es que homogeneiza: todos los resultados tienen la misma estética genérica. Explícame cómo mantener el control creativo: las estrategias para imprimir tu criterio en los outputs de IA (referencias específicas, prompts negativos, seed consistency), cómo usar la IA como punto de partida y no como resultado final, y el proceso de edición post-generación que convierte un output de IA en un asset de diseño profesional.

**4. Integración en el flujo de trabajo de diseño**
La IA generativa solo añade valor si se integra bien en el proceso existente. Explícame cómo integrarla en distintas fases del proyecto: en la fase de briefing y conceptualización (generación rápida de referencias visuales), en la exploración creativa (variar direcciones sin el coste de producción manual), en la presentación al cliente (mockups rápidos para validar antes de producir) y en la producción (generación de variaciones, assets secundarios, backgrounds).

Incluye los momentos donde la IA ahorra tiempo real y los donde la inversión en aprender el prompt no vale la pena.

**5. El uso comercial: derechos, atribución y ética**
Usar IA generativa en proyectos comerciales tiene implicaciones legales y éticas que muchos diseñadores ignoran. Explícame el estado actual de los derechos de los outputs de herramientas de IA generativa: qué puedes usar comercialmente y con qué condiciones según cada herramienta, el debate sobre los datos de entrenamiento y cómo afecta a la propiedad intelectual, y las preguntas que debes hacerle al cliente antes de comprometer IA generativa en su proyecto.

**6. Habilidades de diseño que la IA amplifica y las que reemplaza**
La IA no elimina al diseñador, pero sí cambia qué habilidades importan más. Explícame qué capacidades del diseñador se vuelven más valiosas en un entorno de IA generativa (el criterio estético, la dirección creativa, la comprensión del contexto del cliente, la narrativa de marca) y cuáles se vuelven menos diferenciadoras (la ejecución técnica repetitiva, la generación de variaciones).

Dame un plan de desarrollo profesional para el diseñador que quiere que la IA potencie su trabajo en lugar de amenazarlo.

Quiero respuestas concretas con ejemplos de prompts reales y flujos de trabajo que pueda aplicar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integrar herramientas de IA generativa en el proceso de diseño sin perder la dirección creativa',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para ventas: copiloto de CRM y automatización',
                'description'      => 'Las herramientas de IA que están cambiando el trabajo de ventas: el scoring de leads con IA, los email personalizados a escala y los call intelligence tools que analizan las conversaciones y sugieren los próximos pasos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de operaciones de ventas (Sales Ops) con experiencia implementando herramientas de IA en organizaciones comerciales B2B, desde startups hasta empresas con equipos de 50+ comerciales. Voy a explorar contigo cómo la IA está transformando el trabajo de ventas y cómo implementarlo de forma que el equipo lo adopte y genere resultados.

Mi contexto: [describe tu situación: eres un AE o SDR que quiere usar IA para ser más eficiente, un sales manager que quiere mejorar el rendimiento del equipo, o un sales ops que está evaluando la implementación de herramientas de IA]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Scoring de leads con IA: de la promesa a la realidad**
El lead scoring existe desde hace años pero la IA lo está transformando. Explícame la diferencia entre el scoring basado en reglas tradicional y el scoring predictivo con IA: cómo funcionan los modelos de scoring de plataformas como Salesforce Einstein, HubSpot AI o herramientas especializadas como MadKudu, qué datos necesitan para funcionar bien, cuánto tiempo lleva construir un modelo fiable y los errores más comunes en la implementación.

Dame un criterio para evaluar si el scoring de IA que tienes implementado está añadiendo valor real o si es un número que nadie mira.

**2. Email personalizado a escala: el límite entre personalización y spam**
La IA permite enviar emails que parecen escritos a mano a miles de prospects. Explícame cómo los mejores equipos de ventas están usando la IA para la prospección por email: las herramientas que están usando (Clay, Apollo, Outreach, herramientas custom), el proceso de research automatizado que personaliza cada mensaje con información real del prospect, la estructura del email que funciona y el límite ético y legal que separa la personalización legítima del spam.

Incluye las métricas de email de ventas que deberías estar midiendo y cómo saber si tu estrategia de personalización está funcionando.

**3. Call intelligence: aprende de cada conversación**
Las herramientas de call intelligence (Gong, Chorus, Salesloft) están cambiando cómo los equipos de ventas aprenden. Explícame qué hacen estas herramientas en detalle: el análisis de conversaciones en tiempo real y post-llamada, cómo identifican los momentos clave (cuando el competidor se menciona, cuando el precio genera fricción, cuando el timing del deal cambia), el coaching basado en datos de conversación y cómo usar estos insights para mejorar el playbook de ventas del equipo.

Dame ejemplos concretos de cómo los mejores equipos de ventas están usando los insights de call intelligence para mejorar su win rate.

**4. IA en el CRM: de cementerio de datos a herramienta de gestión**
El CRM solo tiene valor si los datos están actualizados, y los vendedores odian actualizarlo. Explícame cómo la IA está resolviendo este problema: el auto-logging de actividades (emails, llamadas, reuniones), la generación automática de notas de seguimiento, la actualización predictiva de etapas del pipeline y las alertas inteligentes que avisan cuando un deal tiene riesgo de estancarse.

Incluye cómo implementar estas capacidades en Salesforce o HubSpot y cuánto tiempo real ahorra al equipo.

**5. Automatización del proceso de ventas: qué automatizar y qué no**
No todo se debe automatizar. Explícame el marco para decidir qué partes del proceso de ventas se benefician de la automatización y cuáles requieren el toque humano: las tareas administrativas que la IA puede eliminar completamente (data entry, scheduling, follow-up de primer nivel), las tareas donde la IA asiste al humano (preparación de reuniones, investigación del prospect, generación de propuestas) y las donde el humano debe liderar sin IA (la construcción de confianza, la negociación, el cierre).

**6. Implementación y adopción: el mayor desafío no es técnico**
Las herramientas de IA para ventas fallan frecuentemente por falta de adopción, no por problemas técnicos. Explícame cómo conseguir que el equipo de ventas adopte las nuevas herramientas: el proceso de rollout gradual, la formación que conecta la herramienta con los incentivos del vendedor, la gestión del cambio cuando los comerciales sienten que la IA los va a reemplazar y las métricas de adopción que debes monitorizar.

Quiero recomendaciones concretas con nombres de herramientas, métricas específicas y ejemplos reales de implementaciones que han funcionado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Implementar herramientas de IA que aumenten la efectividad del equipo de ventas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA en el product management: de la idea al sprint',
                'description'      => 'Usa la IA en todo el ciclo de PM: análisis de feedback de usuarios, priorización asistida, redacción de PRDs y la generación de user stories que el equipo puede usar directamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en empresas SaaS B2B que ha integrado la IA en su flujo de trabajo diario y que ha reflexionado profundamente sobre dónde añade valor real y dónde no. Voy a explorar contigo cómo usar la IA en todo el ciclo de product management, desde el discovery hasta el sprint.

Mi contexto: [describe tu situación: eres un PM junior que quiere ser más eficiente, un senior PM que quiere explorar nuevas herramientas, o un head of product que quiere establecer las prácticas de IA para el equipo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Análisis de feedback de usuarios a escala**
El feedback de usuarios llega por múltiples canales (Intercom, reseñas de app stores, entrevistas, NPS surveys, soporte) y es imposible de procesar manualmente cuando el producto tiene miles de usuarios. Explícame cómo usar la IA para analizar grandes volúmenes de feedback: las herramientas que existen (Dovetail, Productboard con IA, soluciones custom con APIs de LLMs), el proceso de categorización y clustering de feedback, cómo detectar los temas emergentes antes de que se conviertan en problemas y cómo distinguir el feedback que refleja un problema real del que es ruido.

Dame un prompt o flujo de trabajo para analizar 500 respuestas de una survey de NPS y extraer los 5 temas principales con su frecuencia e impacto percibido.

**2. Priorización asistida: la IA como sparring de producto**
La priorización es una de las decisiones más difíciles del PM. Explícame cómo usar la IA como herramienta de priorización: no para que tome la decisión (el contexto del negocio siempre lo tiene el PM), sino para estructurar el análisis, identificar sesgos en el razonamiento y generar perspectivas alternativas. Incluye cómo usar la IA para hacer el análisis RICE o ICE más rigoroso, cómo simular el argumento contrario a una priorización que tienes en mente y cómo preparar la defensa de tu roadmap ante stakeholders con intereses distintos.

**3. Redacción de PRDs: de boceto a documento completo**
El Product Requirements Document es una de las tareas donde la IA puede multiplicar la productividad del PM sin comprometer la calidad. Explícame el flujo de trabajo para usar la IA en la redacción de PRDs: el proceso de brain dump inicial (qué darle a la IA para que el output sea bueno), cómo estructurar los prompts para que el resultado sea un PRD real y no texto genérico, las secciones donde la IA es más útil (background, user stories, acceptance criteria) y las donde el PM debe escribir directamente (visión, métricas de éxito, decisiones de diseño).

Dame un prompt para generar el primer borrador de un PRD a partir de una descripción de problema de 200 palabras, con el nivel de detalle que un equipo de ingeniería necesita para hacer las preguntas correctas.

**4. Generación de user stories que el equipo puede usar directamente**
Las user stories mal escritas son fuente de malentendidos y retrabajo. Explícame cómo usar la IA para generar user stories de calidad: el formato correcto (As a / I want / So that con criterios de aceptación claros), cómo descomponer una feature grande en historias de tamaño adecuado para un sprint, cómo generar los edge cases y los escenarios negativos que se olvidan en el proceso manual, y la revisión que el PM debe hacer antes de llevar las historias al equipo.

**5. Research de producto asistido por IA**
El PM que no tiene tiempo para research de usuarios usa la IA para complementar lo que sabe. Explícame cómo usar la IA para el research de producto: el análisis de competidores (qué puedes obtener de fuentes públicas y cómo estructurarlo), la síntesis de entrevistas de usuario (transcripciones a insights accionables), la identificación de patrones en los datos de uso del producto y la generación de hipótesis para el siguiente round de discovery.

**6. Los límites: qué no delegar a la IA en product management**
La IA no reemplaza el criterio de producto. Explícame con claridad qué decisiones y actividades de product management no deben delegarse a la IA: la definición de la visión de producto, la priorización final (aunque la IA ayude con el análisis), las entrevistas de usuario (la IA puede ayudar a sintetizar, no a hacer las preguntas), y el judgment sobre qué feedback merece acción y cuál no.

Incluye los riesgos de sobre-delegar en la IA y cómo el PM mantiene su criterio afilado mientras usa herramientas de IA.

Quiero flujos de trabajo concretos con prompts que pueda usar esta semana, no teoría sobre el futuro del product management.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integrar la IA en el ciclo de product management para multiplicar la productividad sin perder el criterio',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA en la gestión de personas',
                'description'      => 'Las aplicaciones de IA en RRHH que ya son realidad: el screening de CVs, el análisis de engagement, los chatbots de onboarding y las herramientas de people analytics que predicen el riesgo de fuga de talento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de personas con experiencia implementando soluciones de IA en la función de RRHH de empresas tech, con especial atención a los dilemas éticos y los límites de lo que la IA puede y debe hacer en la gestión de personas. Voy a explorar contigo las aplicaciones de IA en RRHH que ya funcionan en 2025 y las que todavía son promesas.

Mi contexto: [describe tu situación: eres un HRBP o responsable de RRHH de una empresa mediana, el tamaño de la organización y los principales desafíos que quieres resolver]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Screening de CVs con IA: eficiencia con responsabilidad**
El screening de CVs es una de las primeras aplicaciones de IA en RRHH y también una de las más controvertidas. Explícame cómo funcionan los sistemas de screening con IA (ATS con IA integrada como Greenhouse, Lever, Workday), qué pueden hacer bien (filtrar volumen, identificar palabras clave, priorizar según criterios predefinidos) y dónde están los riesgos reales (sesgos codificados en los datos de entrenamiento, eliminación de candidatos atípicos con potencial, problemas legales en distintas jurisdicciones).

Dame un protocolo para implementar screening con IA que minimice los sesgos y mantenga la responsabilidad humana donde importa.

**2. Análisis de engagement y señales de riesgo de fuga**
Detectar a tiempo que un empleado está pensando en irse puede ser la diferencia entre retenerlo y perderlo. Explícame cómo las herramientas de people analytics con IA están identificando señales de riesgo de fuga: qué datos analizan (encuestas de pulso, actividad en el sistema de RRHH, patrones de comunicación, cambios en el rendimiento), las herramientas que lo hacen (Visier, Workday People Analytics, Culture Amp), el nivel de privacidad que es aceptable y el que cruza una línea, y cómo actuar sobre los insights sin que los empleados sientan que están siendo vigilados.

**3. Chatbots de onboarding: el primer contacto con la empresa**
El onboarding determina si un nuevo empleado se integra bien o tarda seis meses en ser productivo. Explícame cómo los chatbots de IA están transformando el onboarding: las preguntas que responden (políticas, procesos, quién es quién, cómo funciona el sistema de nómina), las plataformas que lo permiten (ServiceNow, Workday, soluciones propias), cuándo el chatbot es suficiente y cuándo el nuevo empleado necesita hablar con una persona real, y cómo medir si el chatbot de onboarding está mejorando la experiencia y la velocidad de productividad.

**4. People analytics predictivo: decisiones basadas en datos de personas**
El people analytics va más allá de los cuadros de mando de RRHH. Explícame cómo los equipos de personas más avanzados están usando modelos predictivos: la predicción de rendimiento (quién tiene potencial de liderazgo), la predicción de riesgo de burnout, el análisis de equidad salarial con IA y la identificación de patrones en los datos de diversidad e inclusión. Incluye los límites éticos de cada aplicación y cómo presentar estos insights a los managers de negocio sin que se conviertan en etiquetas que limitan a las personas.

**5. IA en el proceso de selección: más allá del screening**
La IA está entrando en más fases del proceso de selección. Explícame el uso de IA en entrevistas (plataformas de entrevistas asíncronas con análisis de lenguaje, sistemas de scoring de entrevistas), los assessment de habilidades con IA, la verificación automatizada de referencias y los límites legales y éticos que existen en distintos países. Dame mi criterio sobre qué fases del proceso de selección deben mantenerse completamente humanas.

**6. El marco ético para la IA en RRHH**
La función de RRHH trabaja con los datos más sensibles de la organización: los de las personas. Explícame el marco ético que todo responsable de personas debe aplicar antes de implementar cualquier herramienta de IA: los principios de transparencia (¿saben los empleados qué datos se usan y cómo?), explicabilidad (¿pueden entender por qué la IA toma una recomendación?), supervisión humana (¿quién toma la decisión final?) y los derechos de los empleados según el GDPR y otras regulaciones.

Incluye las preguntas que debes hacer al proveedor de cualquier herramienta de IA para RRHH antes de firmar el contrato.

Quiero un equilibrio entre las posibilidades reales y los límites éticos. No busco el discurso de que la IA va a revolucionar RRHH, sino lo que funciona hoy con responsabilidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar aplicaciones de IA en RRHH con eficiencia y responsabilidad ética',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA en finanzas: automatización y análisis',
                'description'      => 'Las aplicaciones de IA que están transformando el trabajo financiero: la automatización de cuentas a pagar, la detección de fraude, los modelos predictivos de tesorería y el análisis automatizado de estados financieros.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia implementando soluciones de IA y automatización en la función financiera de empresas medianas, con conocimiento profundo tanto de la tecnología como de los procesos financieros que transforma. Voy a explorar contigo las aplicaciones de IA que ya están generando valor real en las finanzas corporativas.

Mi contexto: [describe tu situación: eres un controller, un FP&A manager, un CFO o un analista financiero; el tamaño de la empresa y los procesos financieros que te gustaría mejorar]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Automatización de cuentas a pagar y cobrar**
El procesamiento de facturas y los procesos de cuentas a pagar son uno de los mayores sumideros de tiempo en la función financiera. Explícame cómo la IA está automatizando estos procesos: el reconocimiento óptico de caracteres (OCR) con IA para la lectura de facturas, la extracción automática de datos (proveedor, importe, fecha, número de factura), el matching automático con pedidos y contratos, la detección de anomalías y duplicados, y la aprobación automatizada según reglas de negocio.

Dame nombres de herramientas concretas (Tipalti, Medius, Stampli, SAP con IA) y el ROI típico en términos de reducción de tiempo de procesamiento y error rate.

**2. Detección de fraude con IA**
El fraude financiero es más sofisticado que nunca y los sistemas basados en reglas ya no son suficientes. Explícame cómo los modelos de IA están mejorando la detección de fraude: los tipos de fraude que detectan mejor (transacciones anómalas, fraude en cuentas a pagar, fraude de empleados, lavado de dinero), cómo funcionan los modelos de anomalía detection, la tasa de falsos positivos y cómo calibrar el sistema para que no genere demasiadas alertas que el equipo ignora.

Incluye cómo las empresas medianas sin un equipo de data science pueden implementar capacidades de detección de fraude con IA usando herramientas existentes.

**3. Modelos predictivos de tesorería**
La gestión de tesorería siempre ha dependido de forecasts manuales con una precisión limitada. Explícame cómo la IA está mejorando la previsión de tesorería: los modelos de cash flow forecasting que aprenden de los patrones históricos de cobros y pagos, la integración con los datos del ERP y el banking, la detección automática de los factores estacionales y los eventos externos que afectan al flujo de caja, y la reducción de la necesidad de líneas de crédito cuando el forecast es más preciso.

Dame un caso de uso de cómo una empresa con 50M€ de revenue podría implementar un modelo predictivo de tesorería y qué precisión podría esperar.

**4. Análisis automatizado de estados financieros**
El análisis de estados financieros es una tarea repetitiva que consume horas de trabajo de analistas senior. Explícame cómo la IA está automatizando y mejorando este análisis: el parsing automático de estados financieros (10-Ks, informes anuales), el análisis de ratios y la comparación automática con benchmarks del sector, la detección de tendencias y cambios significativos, y la generación automática de comentarios narrativos sobre los resultados.

Incluye cómo los equipos de FP&A están usando modelos de lenguaje para hacer el análisis de varianza (actual vs. budget) más rápido y más completo.

**5. Cierre financiero acelerado con IA**
El cierre mensual es uno de los procesos más críticos y más estresantes de la función financiera. Explícame cómo la IA está acortando el ciclo de cierre: la automatización de las conciliaciones, la detección de partidas en suspense, la generación automática de asientos de ajuste recurrentes y la identificación de errores antes de que lleguen al balance final.

Dame un plan de implementación para pasar de un cierre en 10 días a un cierre en 5 días usando herramientas de automatización e IA disponibles hoy.

**6. El analista financiero aumentado: qué cambia en el trabajo**
La IA no elimina al analista financiero, pero cambia radicalmente qué hace. Explícame qué tareas va a automatizar completamente la IA en los próximos años (data gathering, formateo de informes, conciliaciones rutinarias) y qué capacidades del analista financiero se vuelven más valiosas (interpretación del contexto de negocio, juicio sobre qué métricas importan, comunicación de insights complejos a stakeholders no financieros).

Dame un plan de desarrollo profesional para el analista financiero que quiere ser relevante en un entorno donde la IA hace el trabajo de procesamiento.

Quiero aplicaciones concretas con herramientas reales y métricas de impacto. No necesito la teoría de la IA en finanzas, necesito lo que puedo implementar en los próximos seis meses.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Identificar e implementar las aplicaciones de IA que generan mayor impacto en la función financiera',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para abogados: revisión de contratos y due diligence',
                'description'      => 'Las herramientas de IA legal que ya están en uso en los despachos más avanzados: Contract Lifecycle Management con IA, due diligence asistido y los límites éticos del uso de IA en la práctica jurídica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado senior especializado en derecho corporativo y tecnología con experiencia directa usando herramientas de IA legal en un contexto de despacho de tamaño mediano y como in-house en una empresa tech. Voy a explorar contigo cómo la IA está transformando el trabajo jurídico y dónde están los límites reales de lo que puede hacer.

Mi contexto: [describe tu situación: eres un abogado in-house, un asociado de despacho, un socio que quiere implementar IA en el despacho, o un legal ops manager]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Revisión de contratos con IA: qué hace bien y qué no**
La revisión de contratos es la primera aplicación de IA legal que alcanzó madurez comercial. Explícame en detalle qué pueden hacer las herramientas actuales de revisión de contratos (Kira, Luminance, Spellbook, Harvey): la extracción de cláusulas y obligaciones clave, la identificación de desviaciones respecto a la plantilla estándar, la detección de cláusulas problemáticas y la comparación entre versiones. Y lo igualmente importante: qué no hacen bien todavía (la interpretación de cláusulas ambiguas en su contexto, el juicio sobre el riesgo según la contraparte, la negociación estratégica).

Dame un flujo de trabajo para usar IA en la revisión de un contrato de licencia de software de 50 páginas, con la división correcta entre lo que hace la IA y lo que revisa el abogado.

**2. Due diligence asistido por IA**
El due diligence legal en una transacción M&A puede requerir revisar miles de documentos. Explícame cómo la IA está transformando este proceso: el análisis automatizado de data rooms (contratos, litigios, propiedad intelectual, cumplimiento regulatorio), la generación automática de red flags y resúmenes de documentos, el tracking de los documentos revisados y pendientes, y la generación del informe de due diligence.

Incluye cómo las herramientas de IA están cambiando la economía del due diligence (tiempo, coste, tamaño del equipo) y qué significa para los asociados que tradicionalmente hacían este trabajo.

**3. Contract Lifecycle Management con IA**
El CLM va más allá de la revisión puntual: es la gestión de todo el ciclo de vida del contrato. Explícame cómo las plataformas de CLM con IA (Ironclad, Icertis, DocuSign CLM) están transformando la función contractual: la generación automatizada de contratos a partir de plantillas, las alertas automáticas de vencimientos y renovaciones, el análisis de la cartera de contratos para identificar riesgos, y la integración con los sistemas de negocio (CRM, ERP).

Dame los criterios para evaluar si una empresa necesita un CLM completo o si puede resolver sus necesidades con herramientas más simples.

**4. Research jurídico con IA**
El research jurídico es una de las tareas más intensivas en tiempo de los abogados. Explícame cómo las herramientas de IA están cambiando el research: las capacidades de Westlaw AI, Lexis+ AI y herramientas como Casetext o Compass de Thomson Reuters, la diferencia entre el search tradicional y el research conversacional con IA, y cómo verificar la precisión de los resultados cuando las alucinaciones de los LLMs son un riesgo real en un contexto donde citar jurisprudencia incorrecta tiene consecuencias.

Incluye el caso Mata v. Avianca y qué aprender de él.

**5. Los límites éticos: dónde no debe llegar la IA**
El uso de IA en la práctica jurídica tiene implicaciones éticas y deontológicas que no existen en otras industrias. Explícame los límites que el abogado debe respetar: el deber de competencia (el abogado es responsable del trabajo, aunque lo haya asistido la IA), la confidencialidad del cliente (qué datos puedes introducir en herramientas de terceros y cuáles no), el deber de supervisión y la prohibición de delegación indebida, y el estado actual de las guías de los colegios de abogados sobre IA en distintas jurisdicciones.

**6. El perfil del abogado que se adapta a la IA**
La IA no va a reemplazar a los abogados, pero los abogados que usan IA van a reemplazar a los que no. Explícame qué habilidades se vuelven más valiosas para el abogado en un entorno de IA: el juicio estratégico, la relación con el cliente, la negociación, la capacidad de formular las preguntas correctas a los sistemas de IA y la evaluación crítica de sus outputs.

Dame un plan de desarrollo de habilidades para el abogado de 5 años de experiencia que quiere posicionarse bien en el mercado jurídico de 2027.

Quiero respuestas con nombres de herramientas reales, ejemplos de casos de uso y honestidad sobre las limitaciones actuales de la IA legal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar herramientas de IA legal con criterio jurídico y responsabilidad ética',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA en customer success: automatización con toque humano',
                'description'      => 'Usa la IA para escalar el equipo de CS sin perder la calidad: los chatbots de primer nivel, el health scoring automatizado y la frontera entre la automatización y la intervención humana.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia implementando soluciones de IA en equipos de CS de empresas SaaS B2B, que ha aprendido de primera mano qué automatización añade valor y cuál destruye la relación con el cliente. Voy a explorar contigo cómo usar la IA para escalar el equipo de CS sin sacrificar la calidad de la relación.

Mi contexto: [describe tu situación: eres un CSM que quiere ser más eficiente, un CS manager que quiere escalar su equipo, o un VP de CS que está evaluando la estrategia de IA para su organización]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Chatbots y self-service de primer nivel: cuándo funcionan y cuándo frustran**
Los chatbots de primer nivel son la aplicación de IA más visible en CS. Explícame cuándo funcionan bien (preguntas frecuentes con respuesta clara, onboarding inicial, troubleshooting de problemas conocidos) y cuándo frustran al cliente (problemas complejos, situaciones emocionales, cuando el cliente ya ha intentado el self-service). Los factores que determinan si un chatbot añade valor o daña la experiencia: la calidad de la base de conocimiento, el diseño del flujo de escalación y la capacidad de detectar cuando el cliente necesita un humano.

Dame las métricas que debes monitorizar para saber si tu chatbot está ayudando o perjudicando la experiencia del cliente.

**2. Health scoring automatizado: predecir el churn antes de que ocurra**
El health score es el indicador más importante en CS y también el más difícil de construir bien. Explícame cómo la IA está mejorando los health scores: los modelos predictivos que van más allá de las señales de adopción (engagement, NPS, support tickets) e incorporan señales de comportamiento más sutiles, las plataformas que lo hacen (Gainsight, ChurnZero, Totango), cómo calibrar el modelo para que las alertas sean accionables y no sean tan frecuentes que el equipo las ignore.

Incluye cómo diseñar el flujo de respuesta cuando el health score cae: cuándo es una alerta automática, cuándo requiere intervención del CSM y cuándo escala al manager.

**3. Automatización del trabajo de alto volumen en CS**
Muchas tareas del CSM son repetitivas y de alto volumen. Explícame qué se puede automatizar con IA sin sacrificar calidad: los resúmenes automáticos de cuentas para preparar las reuniones de revisión, la generación de follow-ups post-reunión, las alertas automáticas cuando un cliente no ha completado un paso del onboarding, y los check-ins automáticos para cuentas de bajo coste que no pueden tener CSM dedicado.

Dame ejemplos de mensajes automatizados que se sienten personales y ejemplos de los que se sienten como spam, con el análisis de qué hace la diferencia.

**4. IA en los QBRs y business reviews**
El Quarterly Business Review es uno de los momentos de mayor valor en la relación con el cliente. Explícame cómo la IA está mejorando la preparación y ejecución de los QBRs: la generación automática del estado de la cuenta (métricas de uso, tickets resueltos, hitos alcanzados), las recomendaciones de next steps basadas en el historial de la cuenta, y la detección de las oportunidades de expansión que están listas para ser abiertas.

Incluye cómo usar la IA para personalizar la presentación según el perfil del interlocutor del cliente (CEO, operations, power user).

**5. La frontera entre automatización e intervención humana**
Esta es la decisión más importante en la estrategia de IA para CS. Explícame cómo establecer esa frontera de forma dinámica: los triggers que deben activar la intervención humana inmediata (cliente enfadado, riesgo de churn alto, oportunidad de expansión significativa, escalación de soporte sin resolver), el diseño del handoff de la IA al CSM que no genera fricción para el cliente, y cómo medir si la frontera está bien calibrada.

**6. El CSM en un equipo aumentado por IA: nuevo perfil y nuevas habilidades**
La IA va a cambiar el perfil del CSM. Explícame qué habilidades se vuelven más valiosas cuando la IA hace el trabajo de procesamiento: la gestión de relaciones complejas, la navegación de la política interna del cliente, el asesoramiento estratégico y la capacidad de convertir el valor generado en expansión de revenue. Y las habilidades técnicas que el CSM moderno necesita: cómo interpretar los datos de salud de la cuenta, cómo configurar las automatizaciones y cómo evaluar cuándo confiar en la IA y cuándo anular su recomendación.

Quiero recomendaciones concretas que pueda implementar de forma incremental, empezando por lo que más impacto tiene con el menor riesgo para la relación con el cliente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Escalar el equipo de customer success con IA sin perder la calidad de la relación con el cliente',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA como palanca de productividad del freelance',
                'description'      => 'El freelance que usa IA para hacer el trabajo de tres personas: las herramientas, los flujos de trabajo y la forma de posicionarlo ante el cliente como ventaja competitiva y no como sustitución.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de diez años de experiencia trabajando de forma independiente que ha integrado la IA en su flujo de trabajo hasta el punto de poder competir con equipos más grandes con la misma calidad y menor tiempo de entrega. Voy a explorar contigo cómo usar la IA como palanca de productividad real en el trabajo freelance.

Mi contexto: [describe tu situación: tu especialidad como freelance (diseño, desarrollo, marketing, consultoría, redacción), el tipo de clientes con los que trabajas y los principales cuellos de botella en tu trabajo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El stack de IA del freelance de alto rendimiento**
Hay cientos de herramientas de IA pero solo algunas merecen el tiempo de aprender. Explícame el stack de herramientas que un freelance debe dominar según su especialidad: las transversales que son útiles para cualquier freelance (Claude o ChatGPT para thinking y redacción, Perplexity para research, Notion AI para gestión del conocimiento) y las específicas por especialidad (V0 y Cursor para developers, Midjourney y Firefly para diseñadores, Jasper y Surfer para content creators, herramientas de análisis para consultores).

Para cada herramienta, dame el caso de uso específico donde aporta más valor y el tiempo de aprendizaje real para empezar a sacarle partido.

**2. Flujos de trabajo que multiplican la capacidad de entrega**
La IA no ahorra tiempo si no tienes flujos de trabajo diseñados para aprovecharla. Explícame los flujos de trabajo que han transformado la productividad de freelancers reales: el proceso de onboarding de cliente que usa IA para acelerar el research inicial, el flujo de producción de entregables donde la IA hace el primer borrador y el freelance añade el criterio y el refinamiento, y el proceso de revisión y entrega que usa IA para detectar errores y inconsistencias antes de enviar.

Dame un ejemplo concreto de flujo de trabajo para tu especialidad que reduce el tiempo de producción en un 50% sin reducir la calidad percibida por el cliente.

**3. Posicionarlo ante el cliente: ventaja competitiva, no sustitución**
Muchos freelancers tienen miedo de decirle al cliente que usan IA. Explícame cómo posicionar el uso de IA como una ventaja para el cliente: el argumento de que la IA te permite dedicar más tiempo a la parte de mayor valor (el criterio, la estrategia, la revisión) mientras reduces el tiempo en la producción mecánica, cómo comunicarlo en propuestas y conversaciones de venta, y cómo differenciarte de los freelancers que usan IA sin criterio y los que no la usan y son más lentos.

Dame el argumento concreto que usarías con un cliente que te pregunta directamente si usas IA en su proyecto.

**4. La economía del freelance con IA: precios y márgenes**
La IA cambia la economía del trabajo freelance de formas que no siempre son obvias. Explícame las implicaciones: si reduces el tiempo de producción a la mitad, ¿bajas el precio o produces más proyectos? La diferencia entre cobrar por tiempo (donde la eficiencia te penaliza) y cobrar por valor (donde la eficiencia te beneficia), cómo reposicionarte hacia el pricing por valor cuando la IA te hace más rápido, y cómo comunicar al cliente que tu tarifa refleja el resultado y no las horas.

Incluye cómo gestionar la expectativa de precio de los clientes que asumen que si usas IA debes ser más barato.

**5. La calidad que la IA no puede dar: tu diferencial**
El riesgo de depender demasiado de la IA es producir trabajo genérico. Explícame cómo mantener la calidad y el criterio propio mientras usas IA: los puntos del proceso donde el freelance no puede delegar en la IA (la comprensión del cliente y su contexto, el criterio estético o estratégico, la relación y la confianza), cómo cultivar la capacidad de reconocer cuando el output de la IA es bueno y cuando no lo es, y cómo evitar que la comodidad de la IA atrofie las habilidades que te diferencian.

**6. Expansión de capacidad: hacer el trabajo de un equipo**
La mayor oportunidad de la IA para el freelance no es hacer el mismo trabajo más rápido: es poder ofrecer más servicios y manejar proyectos más grandes. Explícame cómo los freelancers más avanzados están usando la IA para expandir su oferta: el freelance de diseño que ahora ofrece estrategia de marca porque la IA le permite hacer el research que antes no tenía tiempo, el developer que ofrece el producto completo porque la IA le ayuda con las partes fuera de su especialidad, y cómo posicionar esta expansión sin parecer que estás prometiendo más de lo que puedes entregar.

Quiero flujos de trabajo concretos, herramientas específicas y la honestidad sobre cuánto tiempo lleva integrar la IA de forma que realmente te haga más productivo, no solo más ocupado aprendiendo herramientas nuevas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Multiplicar la productividad y la capacidad de entrega del freelance usando IA como palanca',
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
