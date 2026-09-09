<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills111Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'SEO en la era de la IA generativa',
                'description'      => 'Cómo adaptar la estrategia de SEO cuando Google AI Overviews y los LLMs están cambiando el comportamiento de búsqueda.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de SEO con experiencia en la intersección entre búsqueda orgánica e inteligencia artificial generativa, que ha estado monitorizando y adaptando estrategias de contenido y búsqueda a medida que Google AI Overviews, ChatGPT Search, Perplexity y otros sistemas de IA han cambiado los patrones de comportamiento del buscador.

Necesito que me ayudes a redefinir mi estrategia de SEO para el entorno actual y futuro cercano. Proporciona el contexto de tu situación:

**Contexto del sitio y el negocio:**
- Tipo de sitio y negocio: [e-commerce / blog / SaaS / medio de comunicación / local business]
- Tráfico orgánico mensual actual: [visitas aproximadas]
- Impacto que ya has notado de AI Overviews: [pérdida de clics / sin cambio visible / incertidumbre]
- Tipo de contenido principal: [informacional / transaccional / navegacional / local]
- Principal preocupación de SEO hoy: [pérdida de tráfico / caída de rankings / cómo adaptarse]

Con este contexto, desarrolla una estrategia completa de SEO para la era de la IA:

**1. Cómo está cambiando la búsqueda con la IA**
Explica los cambios reales que los AI Overviews de Google y los chatbots de búsqueda (ChatGPT Search, Perplexity, Gemini) están produciendo en el comportamiento del buscador: qué tipos de queries están siendo absorbidas por las respuestas de IA (informacionales simples), qué tipos siguen generando clics (transaccionales, locales, de investigación profunda, de marca), y qué está pasando con el CTR en las posiciones que antes eran valiosas.

**2. Estrategia de contenido para el entorno post-AI Overviews**
Cómo redefinir la estrategia de contenido para seguir siendo visible y relevante: el contenido que la IA cita vs. el que la IA sustituye, por qué el contenido de experiencia real (EEAT) es más valioso que nunca, cómo estructurar el contenido para aparecer en los AI Overviews en lugar de perder tráfico por ellos, el papel del contenido de opinión, análisis propio y datos exclusivos que los modelos de IA no pueden generar.

**3. Keywords y búsqueda de intención en el nuevo entorno**
Cómo evoluciona la investigación de palabras clave cuando las queries informacionales simples van a la IA: el cambio hacia queries de cola larga y alta especificidad, las búsquedas que todavía generan clics consistentes, cómo identificar las oportunidades de keywords que los competidores están abandonando por el miedo a la IA y que en realidad siguen siendo valiosas.

**4. Autoridad de marca y búsquedas de marca**
Por qué construir autoridad de marca se ha vuelto más importante que nunca en el SEO de la era de la IA: las búsquedas de marca no van a la IA, cómo fortalecer el reconocimiento de marca para que los usuarios te busquen directamente, cómo la mención de tu marca en fuentes de autoridad afecta a tu visibilidad en los sistemas de IA generativa, el papel del PR digital en la estrategia de SEO actual.

**5. SEO técnico que sigue importando**
Qué aspectos del SEO técnico son más críticos en el entorno actual: velocidad y Core Web Vitals (el ranking factor que la IA no cambia), structured data para que los sistemas de IA puedan entender y citar el contenido correctamente, indexabilidad y crawlabilidad cuando los bots de los LLMs se añaden a los crawlers tradicionales. Lo que puedes ignorar porque ya no mueve la aguja.

**6. Medir el SEO en el nuevo entorno**
Cómo adaptar las métricas de SEO cuando el tráfico orgánico ya no es el único indicador de visibilidad: qué nuevas métricas seguir (apariciones en AI Overviews, menciones en chatbots, tráfico de marca vs. no marca), cómo entender si la pérdida de tráfico es una amenaza o una señal de que ese tráfico nunca iba a convertir de todas formas, cómo presentar el estado del SEO a la dirección en el nuevo contexto.

**7. Plan de acción para los próximos 6 meses**
Las acciones concretas ordenadas por prioridad para adaptar la estrategia de SEO: qué hacer primero (auditar qué contenido está siendo absorbido por AI Overviews), qué construir (autoridad, contenido de experiencia, datos propios), y qué abandonar (el contenido que nunca va a competir con la IA y que consume recursos sin retorno). Un plan de 6 meses realista con hitos medibles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Adaptar la estrategia de SEO al entorno de búsqueda con IA generativa: contenido que resiste, keywords que siguen convirtiendo y métricas para el nuevo ecosistema.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Agentes de IA: arquitectura y deployment en producción',
                'description'      => 'Construye agentes autónomos con LangChain, LlamaIndex o el SDK de Anthropic: arquitectura, tools, memoria y deployment.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un AI Engineer con experiencia en construcción y deployment de agentes de IA en producción que ha trabajado con los principales frameworks de agentes y que conoce la diferencia entre los demos que funcionan en un notebook y los sistemas que son fiables, seguros y mantenibles en producción.

Necesito tu ayuda para diseñar e implementar un agente de IA. Proporciona el contexto de tu caso de uso:

**Contexto del agente que quieres construir:**
- Descripción del agente y qué debe hacer: [describe la tarea que el agente debe completar de forma autónoma]
- Herramientas o sistemas con los que debe interactuar: [APIs, bases de datos, servicios externos]
- Nivel de autonomía requerido: [completamente autónomo / con supervisión humana en ciertos pasos / human-in-the-loop]
- Restricciones técnicas: [lenguaje de programación, infraestructura existente, presupuesto de tokens]
- Framework que prefieres o que ya usas: [LangChain / LlamaIndex / SDK de Anthropic / CrewAI / ninguno todavía]

Con este contexto, desarrolla una guía completa de arquitectura y deployment de agentes de IA:

**1. Qué es un agente de IA y cuándo usarlo**
La definición precisa de un agente de IA: un sistema que usa un LLM para razonar sobre una tarea, decide qué acciones tomar, ejecuta esas acciones a través de tools, observa los resultados y itera hasta completar la tarea. Cuándo un agente es la solución correcta (la tarea requiere múltiples pasos no deterministas, decisiones dependientes del contexto) y cuándo un pipeline determinista o una cadena simple es mejor (más predecible, más barato, más fácil de depurar).

**2. Componentes fundamentales de la arquitectura de un agente**
Los bloques de construcción de cualquier agente de IA: el LLM como motor de razonamiento, el system prompt que define el rol y las instrucciones del agente, las tools (funciones que el agente puede llamar), el ciclo de razonamiento-acción-observación (ReAct o similar), la memoria y el contexto. Para cada componente, las decisiones de diseño más importantes y cómo afectan al comportamiento del agente.

**3. Diseño de tools y function calling**
Cómo diseñar tools que el agente use de forma fiable: los principios de una buena tool (nombre descriptivo, descripción clara de cuándo usarla, parámetros bien tipados, manejo explícito de errores), cómo evitar que el agente llame tools de forma incorrecta o redundante, cómo diseñar el feedback de las tools para que el agente pueda corregir errores. Ejemplos concretos de tools bien y mal diseñadas.

**4. Memoria y gestión del contexto**
Las cuatro formas de memoria en agentes de IA: memoria en contexto (el historial de la conversación actual), memoria externa con búsqueda semántica (RAG sobre documentos o conversaciones anteriores), memoria estructurada (base de datos con información persistente del usuario o del estado), y memoria de procedimiento (el system prompt que define el comportamiento). Cuándo usar cada tipo y cómo combinarlos sin que el contexto se desborde.

**5. Evaluación y testing de agentes**
El mayor reto de los agentes: son no deterministas y difíciles de probar. Estrategias para evaluar la fiabilidad de un agente: suites de tests con casos representativos y métricas de éxito claras, evaluación con un LLM-as-judge, ejecución en shadow mode antes del despliegue en producción, monitorización de traces en producción. Cómo construir un dataset de evaluación que captura los casos edge más importantes.

**6. Seguridad y control de agentes en producción**
Los riesgos específicos de los agentes autónomos y cómo mitigarlos: prompt injection (usuarios o datos externos que intentan manipular el comportamiento del agente), tool misuse (el agente llama a tools que no debería en ese contexto), escalada de privilegios, acciones irreversibles ejecutadas por error. Patrones de diseño para limitar el radio de impacto: confirmación humana para acciones críticas, sandboxing, rate limits en tools destructivas.

**7. Deployment y observabilidad en producción**
Cómo llevar un agente de un prototipo a producción: infraestructura para agents de larga duración (gestión de estado, timeouts, reintentos), observabilidad con trazas de LangSmith, Langfuse o Helicone (loguear cada paso del razonamiento, cada tool call y cada resultado), gestión de costes (cómo controlar el consumo de tokens de un agente que puede hacer múltiples llamadas al LLM), y estrategias de actualización del agente sin interrumpir el servicio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar e implementar agentes de IA en producción: arquitectura, tools, memoria, evaluación y observabilidad para sistemas autónomos fiables.',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de UX para interfaces con IA generativa',
                'description'      => 'Cómo diseñar experiencias con IA generativa: expectativas, incertidumbre, feedback y los patrones UX específicos de la IA.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un UX Designer especializado en interfaces de IA con experiencia en diseñar productos que incorporan IA generativa de forma que los usuarios los entiendan, confíen en ellos y los usen de forma eficaz, sin caer en los patrones de diseño que generan frustración o desconfianza.

Necesito tu ayuda para diseñar la experiencia de usuario de un producto o funcionalidad que incorpora IA generativa. Proporciona el contexto de tu caso de uso:

**Contexto del producto:**
- Descripción del producto y la funcionalidad de IA: [describe qué hace la IA en tu producto]
- Tipo de usuario objetivo: [perfil, nivel técnico, familiaridad con la IA]
- El mayor reto de UX que anticipas: [expectativas no realistas / desconfianza / errores de la IA / transparencia]
- Plataforma: [web / app móvil / desktop / embedded en otro producto]

Con este contexto, desarrolla una guía completa de UX para interfaces con IA generativa:

**1. Los principios de UX específicos para IA**
La IA generativa requiere principios de diseño distintos a los de las interfaces tradicionales porque el output es probabilístico, no determinista. Los principios fundamentales: diseñar para la incertidumbre (el sistema puede estar equivocado), la transparencia sobre las capacidades y los límites (los usuarios no deberían descubrir los límites por accidente), el control del usuario (siempre debe poder corregir, editar o rechazar el output de la IA), y la confianza calibrada (ni sobreconfiar ni desconfiar en la IA).

**2. Gestión de expectativas antes y durante la interacción**
Cómo diseñar la experiencia para que los usuarios tengan expectativas correctas sobre lo que la IA puede y no puede hacer: el onboarding que muestra ejemplos reales (buenos y malos), la UI que indica cuándo la IA está generando (estados de loading que comunican que el sistema está "pensando"), las señales visuales que distinguen el contenido generado por IA del contenido verificado, y los mensajes de error cuando la IA falla que no destruyen la confianza en el sistema entero.

**3. Patrones de UI para contenido generado por IA**
Los patrones de interfaz que han demostrado funcionar bien para contenido generado por IA: la presentación de múltiples variantes para que el usuario elija (en lugar de una sola respuesta que puede estar equivocada), los controles de edición inline que permiten corregir el output sin salir del flujo, el historial de generaciones para volver a versiones anteriores, los controles de tono, longitud y estilo que dan al usuario control sobre el proceso. Para cada patrón, cuándo usarlo y cuándo no.

**4. Diseñar para el error de la IA**
Los errores de la IA son inevitables: cómo diseñar para que sean recuperables y no destruyan la confianza del usuario. Los tipos de errores más comunes en IA generativa (alucinaciones, malinterpretación de la intención, output irrelevante o de baja calidad) y los patrones de diseño que minimizan su impacto: feedback loops para que el usuario pueda indicar que el output no es útil sin frustrarse, recuperación graceful que ofrece alternativas en lugar de un mensaje de error genérico, y cómo usar los errores reportados para mejorar el sistema.

**5. Accesibilidad e inclusión en interfaces de IA**
Los retos específicos de accesibilidad que presentan las interfaces de IA: el contenido dinámico que cambia mientras se genera (cómo hacerlo compatible con lectores de pantalla), las interfaces de chat que no siempre son la modalidad más accesible, el diseño para usuarios con distintos niveles de alfabetización en IA. Cómo construir interfaces de IA que no excluyan a usuarios con discapacidades o con menor experiencia tecnológica.

**6. Ética y transparencia en el diseño de IA**
Las decisiones de diseño con implicaciones éticas en productos de IA: cuándo y cómo revelar que el contenido ha sido generado por IA, cómo diseñar para que los usuarios no confundan el output de la IA con hechos verificados, cómo manejar los sesgos del modelo en la interfaz, el diseño de los controles de privacidad cuando el sistema aprende del comportamiento del usuario. Los dark patterns específicos de IA que debes evitar activamente.

**7. Testing y validación de UX con IA**
Cómo testear interfaces de IA cuando el output es no determinista: los retos del test A/B con contenido que cambia en cada generación, cómo construir escenarios de test que cubren los casos edge más importantes (inputs ambiguos, inputs maliciosos, usuarios con expectativas extremas), cómo usar tests de usabilidad para identificar problemas de UX que los métricas cuantitativas no revelan, y cómo medir la confianza del usuario como KPI de diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar experiencias de usuario para productos con IA generativa: gestión de expectativas, patrones de UI, manejo de errores y ética del diseño de IA.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Vender cuando el comprador ya usó IA para investigarte',
                'description'      => 'Cómo cambia el proceso de ventas cuando el comprador llega a la primera llamada habiendo investigado con IA y ya tiene respuestas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Ventas con experiencia en ventas consultivas B2B que ha observado y adaptado el proceso de ventas al nuevo comportamiento del comprador que usa IA generativa para investigar, comparar soluciones y preparar preguntas antes de hablar con un comercial.

Necesito tu ayuda para adaptar mi proceso de ventas al nuevo comportamiento del comprador en la era de la IA. Proporciona el contexto de tu situación:

**Contexto del equipo de ventas:**
- Tipo de producto o servicio que vendes: [SaaS / servicios profesionales / hardware / otro]
- Ciclo de ventas medio: [días, semanas o meses]
- Perfil del comprador: [cargo, sector, nivel de sofisticación técnica]
- Cambios que ya has notado en el comportamiento del comprador: [llegan más informados / hacen preguntas más técnicas / comparan más alternativas / el ciclo se ha acortado o alargado]

Con este contexto, desarrolla una guía completa para vender en la era de la IA:

**1. Cómo ha cambiado el comportamiento del comprador B2B**
El comprador moderno usa la IA para hacer en minutos lo que antes requería horas de investigación: analizar alternativas, comparar características, leer reviews, generar preguntas para la demo, incluso redactar el business case interno. Esto significa que llega a la primera llamada con el rep más informado y con expectativas más altas de personalización. Explica qué ha cambiado en cada etapa del proceso de compra y qué implica para el proceso de ventas.

**2. La primera llamada cuando el comprador ya sabe más que antes**
Cómo adaptar la discovery call cuando el comprador ya ha hecho su investigación con IA: las preguntas de discovery que siguen siendo críticas (las que la IA no puede responder: el contexto específico de su organización, sus prioridades reales, las dinámicas internas de decisión), cómo manejar al comprador que viene con comparativas de alternativas generadas por IA, y cómo usar el conocimiento previo del comprador para acelerar el proceso en lugar de verlo como una amenaza.

**3. La demo en el mundo post-IA**
El comprador ya sabe qué hace el producto antes de la demo. Cómo rediseñar la demo para que añada valor: mostrar lo que la IA no puede mostrar (el producto funcionando en su contexto específico, los casos edge, las integraciones con sus sistemas), centrarse en el "cómo" y no en el "qué", personalización extrema basada en la investigación previa que hayas hecho del comprador y su empresa antes de la llamada.

**4. Diferenciación cuando la IA nivela la comparación de características**
Cuando el comprador puede pedirle a ChatGPT que compare tu producto con los cinco competidores principales en diez dimensiones, competir en características se vuelve más difícil. Cómo diferenciarse en dimensiones que la IA no puede evaluar bien: la calidad de la relación y el soporte post-venta, la alineación cultural y de valores, el track record en casos similares al del comprador, la visión de producto a largo plazo y el partnership estratégico.

**5. El contenido de ventas en la era de la IA**
Cómo adaptar los materiales de ventas cuando el comprador los procesará con IA o los comparará con información que obtuvo de la IA: los casos de estudio con datos específicos y verificables que la IA no puede fabricar, las propuestas personalizadas que demuestran comprensión profunda del negocio del cliente (que la IA genérica no tiene), y cómo posicionar el conocimiento del rep como el activo diferencial que la IA no puede sustituir.

**6. Usar la IA para vender mejor**
Si el comprador usa IA para investigar, el rep debería usar IA para preparar mejor. Cómo los equipos de ventas modernos usan la IA para personalizar la prospección a escala, investigar a los compradores y sus empresas antes de las llamadas, generar propuestas personalizadas más rápido, analizar las grabaciones de llamadas para identificar objeciones recurrentes, y entrenar a los reps con simulaciones de conversaciones difíciles.

**7. Adaptar el proceso de ventas: las acciones concretas**
Un plan de acción para actualizar el proceso de ventas en los próximos 90 días: qué cambiar en el proceso de discovery (nuevas preguntas, nuevo foco), qué cambiar en la demo (nueva estructura, mayor personalización), qué materiales actualizar (casos de estudio, propuestas), cómo entrenar al equipo en el nuevo comportamiento del comprador, y cómo medir si la adaptación está funcionando.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Adaptar el proceso de ventas B2B al nuevo comprador que usa IA para investigar: discovery, demo, diferenciación y los materiales de ventas que siguen siendo relevantes.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de IA para productos existentes',
                'description'      => 'Cómo añadir capacidades de IA a un producto ya establecido sin alienar usuarios actuales ni romper lo que funciona.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia en integrar capacidades de IA generativa en productos establecidos que ya tienen usuarios reales, y que conoce la diferencia entre añadir IA porque es la moda y añadir IA porque resuelve problemas reales de los usuarios de forma que genera valor de negocio.

Necesito tu ayuda para construir el roadmap de IA de mi producto. Proporciona el contexto de tu situación:

**Contexto del producto:**
- Descripción del producto y su estado actual: [qué hace, cuántos usuarios tiene, en qué fase está]
- Tipo de usuario y sus tareas principales: [quién lo usa y para qué]
- Capacidades de IA que ya tienes o que estás considerando: [si ya tienes algo o estás empezando desde cero]
- Principal miedo al añadir IA: [que los usuarios no lo usen / que dañe la experiencia actual / que sea demasiado caro / que los competidores ya lo tienen]

Con este contexto, desarrolla un roadmap de IA completo para el producto:

**1. Identificar dónde la IA añade valor real (y dónde no)**
El primer error es buscar dónde encajar la IA en el producto en lugar de buscar los problemas del usuario que la IA puede resolver mejor que la solución actual. El proceso de identificación: mapear las tareas que los usuarios hacen frecuentemente que son repetitivas, que requieren procesar texto o datos, o que producen outputs que varían mucho en calidad según el usuario. Para cada tarea candidata, evaluar si la IA puede hacerlo mejor que la solución actual de forma consistente y a un coste razonable.

**2. Priorización de iniciativas de IA**
Cómo priorizar qué capacidades de IA construir primero con un framework específico para IA: impacto en el usuario (cuánto mejora la experiencia o cuánto tiempo ahorra), factibilidad técnica (¿tenemos los datos y la infraestructura necesaria?), riesgo de experiencia (¿puede la IA cometer errores que dañen la confianza del usuario?), y coste de implementación y operación. Explica por qué las iniciativas de IA de bajo riesgo y alta visibilidad deberían ir primero.

**3. Diseño de la integración: IA como copiloto, no como piloto automático**
Para la mayoría de los productos, la IA funciona mejor cuando asiste al usuario en lugar de reemplazarlo: genera un borrador que el usuario edita, sugiere opciones que el usuario elige, analiza datos y propone conclusiones que el usuario valida. Explica cuándo tiene sentido la IA totalmente autónoma (tareas de bajo riesgo y alto volumen) y cuándo la IA asistida es la única opción viable (tareas con consecuencias importantes o con alta variabilidad en la definición de éxito).

**4. La estrategia de datos para IA**
Qué datos necesitas para construir las capacidades de IA que has priorizado: datos de comportamiento del usuario para personalización, datos de contenido para fine-tuning o RAG, datos de feedback para mejorar el modelo. Cómo recoger los datos de feedback de forma que sean útiles para mejorar el sistema (el pulgar arriba/abajo que nadie usa no te da información suficiente). La diferencia entre usar modelos de base (OpenAI, Anthropic, Google) y cuándo tiene sentido fine-tuning o construcción de modelos propios.

**5. Gestión del cambio: los usuarios actuales y la IA**
Cómo introducir capacidades de IA sin alienar a los usuarios que ya están satisfechos con el producto actual: la importancia del opt-in en lugar del opt-out para las primeras capacidades de IA, cómo comunicar las nuevas capacidades de forma que generen curiosidad en lugar de miedo, cómo gestionar los usuarios power que temen que la IA "simplifique" el producto y elimine las capacidades avanzadas que valoran.

**6. Métricas de éxito para las iniciativas de IA**
Las métricas específicas para evaluar si una capacidad de IA está creando valor: adoption rate (cuántos usuarios prueban la feature), retention rate de la feature (cuántos la siguen usando después de probarla), impacto en la tarea objetivo (¿los usuarios completan la tarea más rápido o con mejor resultado?), y el impacto en las métricas de negocio del producto (retención, expansión, NPS). Cómo separar el impacto de la novedad (la gente prueba todo lo nuevo) del impacto real en el valor percibido.

**7. El roadmap de IA en tres horizontes**
Construye el roadmap en tres horizontes temporales: Horizonte 1 (próximos 3 meses): las capacidades de IA de menor riesgo y mayor visibilidad que puedes lanzar rápido para aprender. Horizonte 2 (3-12 meses): las iniciativas de IA que requieren más inversión en datos o infraestructura pero que tienen mayor impacto potencial. Horizonte 3 (12+ meses): las apuestas de IA más transformadoras que podrían cambiar el modelo de negocio o la propuesta de valor del producto. Para cada horizonte, los criterios de éxito que justifican la inversión continua.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir el roadmap de IA para un producto existente: identificar oportunidades reales, priorizar iniciativas y gestionar la integración sin dañar la experiencia actual.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Preparar la organización para la automatización con IA',
                'description'      => 'Cómo gestionar la transición cuando la IA automatiza roles: qué cambia, cuáles desaparecen y cómo liderar el cambio con el equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia en transformación organizacional que ha ayudado a empresas a gestionar el impacto de la automatización y la IA en sus equipos de forma que minimiza el miedo, maximiza la adaptación y convierte la transición en una ventaja competitiva.

Necesito tu ayuda para preparar mi organización para el impacto de la IA en el trabajo. Proporciona el contexto de tu situación:

**Contexto de la organización:**
- Sector y tipo de empresa: [describe brevemente el negocio]
- Tamaño del equipo: [número de empleados y principales funciones]
- Nivel de adopción de IA actual: [ninguno / experimentando / algunos equipos lo usan / integrado en procesos]
- Principal miedo del equipo respecto a la IA: [pérdida de empleo / relevancia / dificultad para aprender / cambio de rol]
- Tu rol: [CEO / CHRO / Director de área / Manager de equipo]

Con este contexto, desarrolla una guía completa de gestión del cambio organizacional ante la IA:

**1. Diagnóstico del impacto de la IA en tu organización**
Cómo evaluar de forma honesta qué roles y tareas de tu organización serán más afectados por la automatización con IA en los próximos 2-3 años: el análisis de tareas por rol (qué porcentaje del tiempo de cada rol se dedica a tareas que la IA puede automatizar hoy vs. en 2 años), la diferencia entre automatización de tareas (el rol cambia) y automatización de roles (el rol desaparece), y los sectores y funciones con mayor y menor exposición según las evidencias actuales.

**2. Comunicar el impacto con honestidad y sin crear pánico**
El error más común de los líderes ante la IA: o negar el impacto para no generar miedo o magnificarlo para parecer visionarios. Cómo comunicar una visión honesta del impacto al equipo: qué sabemos con certeza, qué es incierto, cuál es el plan de la empresa para gestionar la transición, y qué puede hacer cada persona para prepararse. Los mensajes que generan confianza y los que generan ansiedad, con ejemplos de cada tipo.

**3. Estrategia de reskilling y upskilling**
El plan de desarrollo de competencias para la era de la IA: qué habilidades son más valiosas cuando la IA maneja las tareas rutinarias (pensamiento crítico, comunicación, gestión de relaciones, creatividad, juicio en situaciones complejas), cómo identificar qué parte del equipo tiene mayor capacidad de adaptación, cómo diseñar programas de formación que sean accesibles para personas con distintos niveles técnicos. Los errores más comunes en programas de reskilling y cómo evitarlos.

**4. Rediseño de roles y estructuras organizativas**
Cuando la IA toma partes de un rol, el rol no desaparece: evoluciona. Cómo rediseñar los roles del equipo para que las personas se centren en las partes de mayor valor y la IA maneje lo rutinario: el proceso de mapeo de tareas de alto vs. bajo valor en cada rol, cómo involucrar al equipo en el rediseño de sus propios roles (en lugar de imponerlo), y cómo gestionar la resistencia de personas cuya identidad profesional está muy ligada a las tareas que la IA puede automatizar.

**5. Gestión de la ansiedad y el bienestar del equipo**
El impacto psicológico de la incertidumbre sobre el futuro del empleo: cómo identificar las personas del equipo con mayor ansiedad (no siempre las más afectadas objetivamente, sino las más inciertas sobre su capacidad de adaptación), qué puede hacer un manager para reducir la ansiedad sin prometer cosas que no puede garantizar, el rol del reconocimiento y la visibilidad del progreso en la gestión del cambio.

**6. Cultura de experimentación con IA**
Cómo crear una cultura donde el equipo experimenta con IA de forma segura: los permisos y los límites que necesitas establecer (qué datos se pueden usar con herramientas de IA externas, qué procesos requieren supervisión humana siempre), cómo crear espacios seguros para el aprendizaje y el error, cómo celebrar los experimentos que no funcionaron tanto como los que sí. Los incentivos que promueven la adopción de IA y los que la frenan.

**7. Gobernanza y ética de la IA en la organización**
Las decisiones de gobernanza que toda organización que adopta IA debe tomar: quién puede usar qué herramientas de IA y para qué, cómo manejar los datos de clientes y empleados en sistemas de IA externos, qué decisiones nunca puede tomar la IA sin revisión humana, cómo asegurarse de que los sesgos de la IA no se amplificen en los procesos de RRHH (selección, evaluación, promoción). El marco de política de IA que necesitas aunque seas una empresa pequeña.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Preparar la organización para el impacto de la IA: diagnóstico de roles afectados, comunicación honesta, reskilling y construcción de cultura de adopción responsable.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA, valoraciones y decisiones de inversión',
                'description'      => 'El impacto de la IA en los modelos de negocio, la valoración de empresas y las decisiones de inversión en el sector tecnológico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de inversiones con especialización en tecnología y empresas de IA que ha analizado el impacto de la inteligencia artificial en la valoración de empresas, en los modelos de negocio y en los criterios de inversión en el sector tecnológico.

Necesito tu ayuda para entender mejor cómo la IA está afectando a las decisiones financieras y de inversión. Proporciona el contexto de tu situación:

**Contexto:**
- Tu rol: [CFO / analista financiero / inversor / fundador / gestor de patrimonio]
- Tipo de empresa o portfolio que analizas: [startups de IA / empresas tecnológicas establecidas / empresas en transformación digital / sector específico]
- Principal pregunta financiera que tienes sobre la IA: [valoración / riesgo de disrupción / oportunidades de inversión / impacto en márgenes]

Con este contexto, desarrolla un análisis completo del impacto financiero de la IA:

**1. Cómo la IA está cambiando los modelos de negocio y los márgenes**
La IA como herramienta de reducción de costes y como fuente de nuevos ingresos: el impacto diferencial en distintos sectores (servicios profesionales con alto componente de trabajo rutinario vs. manufactura vs. software), por qué las empresas de software puro tienen la mayor oportunidad de expansión de márgenes con IA, y qué sectores enfrentan el mayor riesgo de disrupción de su modelo de negocio actual.

**2. Valoración de empresas de IA: los retos específicos**
Por qué valuar empresas de IA es más difícil que valuar software tradicional: la compresión de ventajas competitivas (los modelos de base son commodities que cualquiera puede usar), el coste de los datos de entrenamiento y la infraestructura de computación como barreras de entrada, la incertidumbre sobre la sostenibilidad de los márgenes cuando la competencia entre proveedores de modelos es tan intensa. Los múltiplos que el mercado está usando para valorar empresas de IA pura en distintas fases y si están justificados.

**3. Due diligence de inversión en el sector IA**
Las preguntas que un inversor debería hacer al analizar una empresa de IA: ¿Cuál es la fuente de ventaja competitiva sostenible (datos propios, distribución, modelo fine-tuned, integración profunda con el workflow del cliente)? ¿Cuánto depende la empresa de un único proveedor de modelos (riesgo de concentración)? ¿Cómo evolúa el coste de inferencia y cómo afecta a los márgenes a largo plazo? ¿Cuál es el riesgo de que el modelo de base subyacente incorpore las capacidades que la empresa vende como diferenciación?

**4. Riesgo de disrupción para empresas establecidas**
Cómo evaluar el riesgo de disrupción por IA de una empresa del portfolio o del sector: el framework de análisis (porcentaje de ingresos expuesto a automatización, velocidad de adopción de la IA por los competidores, barreras de cambio de los clientes), los sectores con mayor riesgo en el horizonte de 2-5 años, y cómo las empresas establecidas pueden convertir el riesgo en oportunidad de transformación.

**5. El impacto de la IA en los DCF y los modelos financieros**
Cómo incorporar el impacto de la IA en los modelos de valoración por flujos de caja descontados: cómo modelar la mejora de márgenes por eficiencia de IA (con qué velocidad, en qué líneas de costes), cómo modelar el riesgo de disrupción de ingresos, qué tasa de descuento aplicar cuando la incertidumbre es mayor que en un negocio establecido, y cómo hacer análisis de sensibilidad para los supuestos más inciertos.

**6. Oportunidades de inversión en la cadena de valor de la IA**
Más allá de las empresas de modelos (que son pocas y ya muy caras), dónde están las oportunidades de inversión en la cadena de valor de la IA: infraestructura (semiconductores, centros de datos, energía), plataformas de desarrollo (herramientas para construir con IA), aplicaciones verticales (IA para sectores específicos con problemas de dominio que requieren especialización), y habilitadores (datos, observabilidad, seguridad de IA).

**7. Cómo presentar el análisis del impacto de la IA al board o a los inversores**
Cómo estructurar la conversación sobre IA con el consejo de administración o con los inversores: cómo cuantificar las oportunidades y los riesgos en términos financieros en lugar de tecnológicos, qué inversiones en IA justifican un business case sólido y cuáles son apuestas de opcionalidad, cómo hacer seguimiento del retorno de las iniciativas de IA con métricas financieras claras.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Analizar el impacto de la IA en valoraciones, modelos de negocio y decisiones de inversión con un framework financiero aplicable a empresas tecnológicas.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad intelectual y datos de entrenamiento de IA',
                'description'      => 'Quién es propietario del output de la IA, qué pasa con los datos usados para entrenar y la regulación emergente que debes conocer.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en propiedad intelectual y tecnología con experiencia en los retos legales emergentes de la inteligencia artificial: propiedad del output generado por IA, derechos sobre los datos de entrenamiento, responsabilidad por infracción de derechos de autor por sistemas de IA y cumplimiento regulatorio en distintas jurisdicciones.

Necesito que me ayudes a entender el estado actual del derecho en materia de IA y propiedad intelectual y sus implicaciones prácticas para mi empresa. Proporciona el contexto de tu situación:

**Contexto:**
- Tipo de empresa y uso de IA: [empresa que usa herramientas de IA para su trabajo / empresa que construye productos de IA / ambas]
- Tipo de output de IA que generas o usas: [texto / imágenes / código / audio / video / datos]
- Jurisdicción principal: [UE / EEUU / España / otra]
- Principal preocupación legal: [propiedad del output / riesgo de infracción de derechos de autor / datos de entrenamiento / regulación de IA]

Con este contexto, desarrolla un análisis legal completo sobre IA y propiedad intelectual:

**1. Propiedad del output generado por IA: el estado actual del derecho**
El estado actual de la jurisprudencia y la regulación sobre quién es propietario del contenido generado por IA: la posición del US Copyright Office (el output de IA puro sin aportación humana creativa no es protegible por copyright en EEUU), la posición del derecho europeo, los casos judiciales más relevantes y qué han decidido. Qué significa esto en la práctica para las empresas que usan IA para generar contenido comercial.

**2. El riesgo de infracción de derechos de autor en los outputs de IA**
El debate legal sobre si los modelos de IA reproducen o "memorizan" partes del contenido de entrenamiento en sus outputs. Los casos judiciales de Getty Images, The New York Times y otros contra los desarrolladores de IA. Qué riesgo real tienen las empresas que usan herramientas de IA para generar contenido: qué tipos de outputs tienen mayor riesgo (imágenes fotorrealistas, texto muy específico de obras conocidas), qué medidas de mitigación existen (las garantías de indemnización de algunos proveedores), y cuándo es razonable preocuparse y cuándo no.

**3. Los datos de entrenamiento y los derechos de los creadores**
El corazón del debate legal: ¿pueden los desarrolladores de IA entrenar sus modelos con obras protegidas por derechos de autor sin licencia? El argumento del fair use en EEUU y su aplicación a la IA (el análisis de los cuatro factores), la posición del derecho europeo (la excepción de minería de texto y datos del artículo 4 de la Directiva DSM), y las demandas en curso que definirán el futuro de este debate. Qué significa esto para las empresas que quieren desarrollar modelos propios.

**4. El AI Act europeo y sus implicaciones prácticas**
Las principales obligaciones del Reglamento de IA de la UE (AI Act) para las empresas que usan o desarrollan IA: la clasificación de sistemas de IA por riesgo (inaceptable, alto, limitado, mínimo), las obligaciones específicas para sistemas de IA de propósito general (GPAI) y para modelos fundacionales, los requisitos de transparencia y los registros de documentación técnica. Qué empresas están afectadas y qué deben hacer ahora mismo para prepararse.

**5. Secretos comerciales y datos propios en sistemas de IA**
Cuándo los datos propios que usa una empresa para entrenar o fine-tunear modelos de IA son susceptibles de protección como secretos comerciales, qué medidas hay que tomar para que esa protección sea efectiva (acuerdos de confidencialidad con los proveedores de IA, revisión de los términos de servicio de las herramientas que se usan), y cómo gestionar el riesgo de que los proveedores de IA usen los datos del cliente para mejorar sus propios modelos.

**6. Responsabilidad por el output de los sistemas de IA**
Quién responde cuando un sistema de IA genera contenido falso, difamatorio, discriminatorio o que infringe derechos de terceros: el desarrollador del modelo base, el integrador que construye el producto, el usuario final. El análisis de responsabilidad según el tipo de daño y la jurisdicción, y qué cláusulas contractuales son relevantes para distribuir o limitar la responsabilidad entre las partes.

**7. Checklist legal para empresas que usan o desarrollan IA**
Un checklist práctico con las acciones legales que toda empresa debería tomar hoy en materia de IA: revisar los términos de servicio de las herramientas de IA que usa (qué datos envías y qué derechos cedes), establecer una política interna de uso de IA (qué outputs se pueden usar comercialmente, qué información confidencial no se puede introducir), prepararse para el AI Act si opera en la UE, y cuándo consultar con un abogado especializado vs. cuándo el riesgo es suficientemente bajo para gestionarlo internamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Entender el marco legal de la IA: propiedad del output generado, riesgo de infracción de copyright, datos de entrenamiento y obligaciones del AI Act europeo.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'El futuro del agente de soporte cuando la IA resuelve el 70% de los tickets',
                'description'      => 'Cómo evoluciona el rol del agente de CS cuando la IA maneja la mayoría de los tickets: nuevas responsabilidades y habilidades requeridas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Experience con experiencia en la implementación de IA en equipos de soporte y que ha acompañado a equipos de agentes a través de la transición hacia un modelo donde la IA maneja la mayoría del volumen de soporte de primer nivel.

Necesito que me ayudes a entender cómo va a evolucionar el rol del agente de soporte en los próximos años y cómo preparar al equipo para esa transición. Proporciona el contexto de tu situación:

**Contexto del equipo de soporte:**
- Tamaño del equipo: [número de agentes y roles]
- Volumen de tickets mensual: [número aproximado]
- Nivel de automatización actual: [ninguno / chatbot básico / IA para sugerencias / IA resuelve algunos tickets]
- Principal preocupación del equipo sobre la IA: [pérdida de empleo / cambio de tareas / dificultad de adaptación]

Con este contexto, desarrolla una guía completa sobre el futuro del agente de soporte:

**1. Qué parte del trabajo del agente de soporte va a automatizar la IA**
Un análisis honesto de qué tipos de tickets y tareas puede manejar la IA hoy y en los próximos 2-3 años: las preguntas frecuentes con respuesta estándar (alta automatización), los problemas técnicos comunes con solución conocida (automatización media), los problemas complejos que requieren investigación (baja automatización en el corto plazo), los casos emocionalmente difíciles y las decisiones que requieren empatía genuina o juicio ético (difíciles de automatizar de forma satisfactoria). El 70% de automatización no significa el 70% menos de empleo: significa que el trabajo restante cambia.

**2. El nuevo rol del agente de soporte: de ejecutor a supervisor y especialista**
Cuando la IA maneja los tickets estándar, el agente pasa a centrarse en los casos donde la IA falla o no es suficiente: supervisión de la calidad de las respuestas de IA (detección de errores, casos edge, respuestas inapropiadas), gestión de escalaciones de los casos más complejos o emocionalmente sensibles, entrenamiento y mejora del sistema de IA (feedback sobre las respuestas, creación de new ejemplos de entrenamiento), y relaciones proactivas con clientes de alto valor que merecen atención humana.

**3. Las habilidades que el agente de soporte necesita desarrollar**
Las habilidades que serán más valiosas en un equipo de soporte con IA: pensamiento crítico para evaluar si la respuesta de la IA es correcta y suficiente, empatía avanzada y habilidades de comunicación para los casos difíciles que la IA no puede manejar, comprensión del sistema de IA (cómo funciona, cuáles son sus límites, cómo darle feedback útil), análisis de datos para identificar patrones en los errores de la IA y en el comportamiento de los clientes. Cuáles de estas habilidades se pueden desarrollar con formación y cuáles requieren cambios de perfil en la contratación.

**4. Cómo gestionar la transición con el equipo actual**
El plan de gestión del cambio para el equipo de soporte: cómo comunicar la transición con honestidad (qué cambia, qué permanece, qué ocurre con los roles que la IA reemplaza completamente), cómo involucrar al equipo en el proceso de implementación de la IA en lugar de imponérsela, cómo usar la transición para promover a los agentes más capaces a roles de mayor responsabilidad, y cómo gestionar el talento sobrante si el volumen de trabajo humano se reduce.

**5. Diseñar el nuevo modelo operativo del equipo de soporte**
Cómo rediseñar la estructura del equipo cuando la IA maneja el volumen: la proporción agente/tickets cambia, pero el tipo de agente que necesitas también cambia. El modelo de equipo híbrido: agentes de nivel 1 (supervisión y escalación de tickets de IA), agentes de nivel 2 (casos complejos que requieren investigación), especialistas (casos de alto impacto, relaciones con clientes enterprise, feedback al sistema de IA). Cómo calcular el tamaño del equipo que necesitas en el nuevo modelo.

**6. Métricas del equipo de soporte en la era de la IA**
Las métricas cambian cuando la IA maneja la mayoría del volumen: el CSAT de los tickets resueltos por IA vs. por humanos (¿la IA mantiene la calidad?), la tasa de escalación de IA a humano (¿la IA sabe cuándo necesita ayuda?), el tiempo de resolución de tickets complejos por los agentes humanos (¿están ganando capacidad al liberarse de los tickets rutinarios?), y la calidad del feedback que los agentes dan al sistema de IA (¿el sistema mejora con el tiempo?).

**7. El agente de soporte como fuente de inteligencia de negocio**
Cuando la IA maneja lo rutinario, el agente humano tiene más tiempo y contexto para ser una fuente de insights: identificar patrones en los casos que la IA no puede resolver (señales de producto), detectar cambios en el comportamiento de los clientes antes de que aparezcan en las métricas, construir relaciones con los clientes más valiosos que van más allá de la resolución de tickets, y participar en la mejora continua del producto con feedback cualitativamente rico. Cómo estructurar estos procesos para que el conocimiento del equipo se capture y distribuya en lugar de perderse.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Preparar al equipo de soporte para la transición a un modelo donde la IA resuelve la mayoría de tickets: nuevas habilidades, rediseño de roles y gestión del cambio.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Posicionarse como freelance en la economía de la IA',
                'description'      => 'Qué servicios serán más valiosos, cuáles automatizará la IA y cómo posicionarse para los próximos 5 años como profesional independiente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de carrera especializado en profesionales independientes que ha estudiado el impacto de la IA en las distintas especialidades freelance y que ayuda a autónomos a posicionarse de forma que la IA sea un amplificador de su valor en lugar de una amenaza a su negocio.

Necesito tu ayuda para entender cómo la IA va a afectar a mi negocio freelance y cómo posicionarme para los próximos 5 años. Proporciona el contexto de tu situación:

**Contexto:**
- Tu especialidad freelance actual: [describe qué servicio ofreces]
- Tipo de clientes que tienes: [tamaño de empresa, sector, perfil del decisor de compra]
- Nivel de exposición a la IA que ya sientes: [la IA ya está afectando a mi negocio / lo anticipo / no lo veo todavía]
- Tu mayor miedo respecto a la IA: [que los clientes dejen de necesitarme / que los precios bajen / que no pueda competir con freelancers que usen IA]

Con este contexto, desarrolla una guía completa de posicionamiento freelance para la era de la IA:

**1. Análisis honesto de la exposición de tu especialidad a la IA**
Una evaluación objetiva de qué partes de tu trabajo actual puede automatizar la IA hoy o en los próximos 2-3 años: las tareas de producción rutinaria con alta exposición (primer borrador de texto, imágenes de stock, código boilerplate, diseños templados), las tareas de estrategia y criterio con exposición media (la IA genera opciones, el experto elige y refina), y las tareas de relación y juicio contextual con baja exposición (entender el negocio del cliente, gestionar expectativas, tomar decisiones en contextos únicos). Sé específico para la especialidad del freelance.

**2. Los servicios que serán más valiosos en la economía de la IA**
Los servicios freelance que aumentan de valor cuando la IA se generaliza: la estrategia y el criterio experto (la IA genera opciones, el experto sabe cuál es la correcta para el contexto), la implementación compleja y personalizada (la IA genera piezas, el experto las ensambla de forma que funciona para el cliente específico), la auditoría y la revisión del trabajo de IA (los clientes que usan IA necesitan expertos que validen la calidad), y el conocimiento de dominio profundo que los modelos generales no tienen (regulación sectorial, contexto cultural, dinámicas específicas de un mercado).

**3. Usar la IA para ofrecer más valor a los mismos clientes**
La IA como amplificador del freelance que sabe usarla: cómo usar las herramientas de IA para entregar más calidad, más rápido y con menos esfuerzo rutinario, lo que permite cobrar más (entrega superior) o ampliar el alcance del servicio (hacer en dos días lo que antes tardaba una semana). Los errores más comunes al usar IA como freelance: usar la IA para bajar precios en lugar de para mejorar el producto, entregar outputs de IA sin revisión que dañan la reputación.

**4. Posicionamiento como experto en IA para tu sector**
La oportunidad de posicionarse como el especialista en tu área que mejor entiende cómo usar la IA para los problemas específicos de ese sector: los clientes no quieren un experto en IA genérico, quieren a alguien que entienda su negocio y que además sepa usar la IA. Cómo construir ese posicionamiento: qué aprender, cómo comunicarlo, cómo demostrarlo con casos de estudio y contenido de autoridad.

**5. Nuevos servicios y modelos de ingresos que habilita la IA**
Las oportunidades de negocio que la IA crea para freelancers con criterio experto: consultoría de implementación de IA para clientes del sector (les ayudas a implementar las herramientas que tú ya dominas), auditoría de outputs de IA (revisas y corriges el trabajo que sus equipos generan con IA), formación en uso de IA para profesionales de tu sector (enseñas lo que has aprendido), y productos digitales que aprovechan la IA para escalar (cursos, templates, herramientas propias).

**6. Precios en la era de la IA**
El impacto de la IA en los precios del mercado freelance: en algunos segmentos, la IA está comprimiendo los precios de la producción rutinaria. Cómo responder: no compitiendo en precio sino subiendo en la cadena de valor hacia servicios donde el precio no se decide por la hora sino por el resultado, construyendo reputación que justifique precios premium, y atendiendo a clientes que valoran la calidad y la confianza por encima del coste.

**7. Plan de adaptación para los próximos 12 meses**
Las acciones concretas para posicionarse bien en la economía de la IA como freelance en los próximos 12 meses: qué herramientas de IA aprender y dominar (con criterio, no todas), qué parte del portfolio de servicios actualizar o eliminar, qué nuevo servicio o posicionamiento desarrollar, cómo comunicar el cambio a los clientes actuales, y cómo atraer los nuevos clientes que valoran el posicionamiento actualizado. Un plan trimestral con hitos concretos y medibles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Posicionarse como freelance en la economía de la IA: qué servicios mantienen y aumentan su valor, cómo usar la IA como amplificador y qué nuevos modelos de negocio explorar.',
                'vote_score'       => 45,
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
