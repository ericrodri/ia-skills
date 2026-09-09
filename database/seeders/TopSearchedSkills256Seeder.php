<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills256Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'IA generativa en marketing: de la idea al contenido en minutos',
                'description'       => 'Domina las herramientas de IA generativa para acelerar la producción de contenido, campañas y creatividades sin perder la voz de marca ni la calidad estratégica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en marketing digital con especialización en la aplicación práctica de inteligencia artificial generativa. Quiero integrar la IA generativa en el flujo de trabajo diario de marketing para acelerar la producción de contenido, mejorar la personalización y liberar tiempo para el trabajo estratégico. Ayúdame a diseñar ese sistema de trabajo desde cero.

**Preguntas iniciales:**
1. ¿Cuáles son los tipos de contenido que produces con mayor frecuencia (emails, posts, anuncios, blogs, copies de landing)?
2. ¿Cuántas personas forman el equipo de marketing y cuál es el mayor cuello de botella de producción?
3. ¿Ya usas alguna herramienta de IA o partes de cero?
4. ¿Tienes una guía de estilo o brand voice documentada?

**EL STACK DE IA GENERATIVA PARA MARKETING:**

HERRAMIENTAS POR TIPO DE CONTENIDO
El ecosistema de IA generativa para marketing se divide por tipo de output. Para texto: Claude, ChatGPT y Gemini son los más versátiles para long-form copy, emails y estrategia. Para imágenes: Midjourney para creatividades conceptuales de alta calidad, DALL-E para integración directa con flujos de trabajo en herramientas de Adobe y Canva, Stable Diffusion para quienes necesitan control y ejecución local. Para vídeo: Runway y Sora para clips cortos. Para voz y locución: ElevenLabs. Ayúdame a seleccionar el stack correcto para mi caso concreto según los tipos de contenido que produzco y el presupuesto disponible.

PROMPT_ENGINEERING PARA MARKETERS
La calidad del output de IA depende directamente de la calidad del prompt. Un marketer que sabe construir prompts eficaces produce con IA resultados que antes requerían horas de trabajo o un equipo creativo completo. Ayúdame a aprender los patrones de prompt engineering más útiles para marketing: el prompt de rol (a qué experto le pido que actúe), el contexto de marca (cómo incluir la brand voice y el tono en el prompt), las restricciones (qué debe evitar), el formato de output deseado y los ejemplos de referencia. Dame una plantilla de prompt maestra que pueda adaptar para mis casos de uso recurrentes.

**FLUJOS DE TRABAJO CONCRETOS:**

PRODUCCIÓN DE CONTENIDO PARA REDES SOCIALES
El calendario de contenido de redes sociales es uno de los mayores consumidores de tiempo en marketing. Diseña conmigo el flujo de trabajo con IA para producir un mes de contenido de redes en una sesión de trabajo: el prompt para generar ideas de contenido alineadas con los pilares de comunicación de la marca, el prompt para desarrollar cada idea en texto completo adaptado a cada plataforma, el proceso de revisión humana que garantiza la calidad y el sistema de aprobación que no crea cuellos de botella.

EMAILS DE MARKETING Y NURTURING
Las secuencias de email son un trabajo de alto valor pero muy intensivo en tiempo de redacción. Ayúdame a construir el flujo de trabajo de IA para producir emails: cómo describir el objetivo del email, el segmento de audiencia y el punto del funnel para que la IA genere un borrador útil, el proceso de personalización y revisión y cómo mantener la consistencia de tono a lo largo de secuencias largas.

ANUNCIOS Y COPIES DE PERFORMANCE MARKETING
El testing de variantes de copy es fundamental en performance marketing y la IA permite multiplicar las variantes a testear. Ayúdame a usar la IA para generar variantes de copy de anuncios: cómo estructurar el brief del anuncio (producto, audiencia, beneficio principal, objeción a superar), cómo pedir variantes con diferentes ángulos emocionales y racionales y cómo usar los resultados del A/B test para refinar los prompts siguientes.

**MANTENIMIENTO DE LA VOZ DE MARCA CON IA:**

El mayor riesgo de la IA generativa en marketing es la homogeneización: todo el mundo usa los mismos modelos y el contenido empieza a sonar igual. Ayúdame a construir el sistema que mantiene la voz de marca única incluso cuando uso IA intensivamente: la creación del brand voice document que funciona como contexto para los prompts, las palabras y frases propias de la marca que la IA debe incorporar y las señales de alerta que me dicen que el output suena "genérico de IA" y necesita revisión.

**MEDICIÓN DEL IMPACTO DE LA IA EN PRODUCTIVIDAD:**

Integrar IA en el equipo de marketing tiene que generar un retorno medible. Ayúdame a diseñar las métricas que demuestran el impacto de la IA en la productividad del equipo: el tiempo de producción antes y después por tipo de contenido, el volumen de output con el mismo equipo y el impacto en la calidad medido por las métricas de performance del contenido.

Dame el plan de implementación concreto para integrar la IA generativa en el flujo de trabajo de marketing de manera que sea sostenible, mantenga la calidad de marca y libere tiempo real para el trabajo estratégico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Integración de IA generativa en el flujo de trabajo diario del equipo de marketing',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Copilot y coding assistants: maximizar la productividad del developer',
                'description'       => 'Saca el máximo partido a GitHub Copilot, Cursor y otros asistentes de código con las técnicas, los flujos de trabajo y los hábitos que multiplican la velocidad sin comprometer la calidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un senior software engineer con experiencia profunda usando GitHub Copilot, Cursor, Codeium y otros asistentes de código con IA en proyectos reales de producción. Quiero maximizar el impacto de los coding assistants en mi productividad diaria como developer y necesito las técnicas concretas y los flujos de trabajo que lo hacen posible.

**Preguntas iniciales:**
1. ¿Qué herramienta de asistencia de código usas actualmente o estás considerando (Copilot, Cursor, Codeium, Tabnine, otro)?
2. ¿Cuál es tu stack principal (lenguajes, frameworks, tipo de proyecto)?
3. ¿Cuál es el mayor problema de productividad que intentas resolver: velocidad de escritura de código, reducción de errores, comprensión de código heredado o documentación?
4. ¿Trabajas principalmente en código nuevo o en bases de código existentes grandes?

**DOMINAR EL ASISTENTE DE CÓDIGO:**

CÓMO PIENSAN LOS CODING ASSISTANTS
Para sacar el máximo partido a un coding assistant hay que entender cómo funciona: usa el contexto visible en el editor (el archivo abierto, los archivos cercanos, los comentarios) para predecir el código más probable. Cuanto más contexto relevante le des, mejor será la sugerencia. Ayúdame a entender los principios básicos de funcionamiento de los principales asistentes y cómo ese conocimiento cambia la manera de escribir código y comentarios para obtener mejores sugerencias.

LAS TÉCNICAS DE PROMPTING PARA CÓDIGO
Con herramientas como Cursor que tienen chat integrado, la calidad del prompt determina la calidad del código generado. Las mejores técnicas incluyen: describir el comportamiento deseado en lugar de la implementación, especificar el contexto de uso (dónde se usa esta función, qué tipo de datos recibe), incluir las restricciones (compatibilidad, rendimiento, patrones del proyecto) y pedir variantes o alternativas cuando la primera solución no es óptima. Dame los patrones de prompt que uso para las tareas más comunes: escribir una función nueva, refactorizar código existente, escribir tests, debuggear un error y documentar.

**FLUJOS DE TRABAJO POR TIPO DE TAREA:**

ESCRITURA DE CÓDIGO NUEVO
El flujo de trabajo óptimo para escribir código nuevo con asistente IA: empezar con un comentario que describa el propósito de la función o clase, dejar que el asistente genere un primer borrador, revisar críticamente antes de aceptar, iterar con prompts de refinamiento y verificar que el código sigue los patrones y convenciones del proyecto. Ayúdame a desarrollar el hábito de revisar el código generado con la misma rigurosidad que revisar el código de un junior: comprender cada línea, verificar los edge cases y confirmar que el comportamiento es el esperado.

COMPRENSIÓN Y NAVEGACIÓN DE CÓDIGO EXISTENTE
Uno de los casos de uso más valiosos de los coding assistants es entender bases de código grandes o heredadas. Ayúdame a usar el asistente para: explicar qué hace un bloque de código complejo, entender el flujo de ejecución de una funcionalidad, identificar dónde se maneja un caso de uso específico y documentar código que no tiene comentarios.

REFACTORIZACIÓN Y MEJORA DE CÓDIGO
Los coding assistants son especialmente potentes para la refactorización. Dame los flujos de trabajo para usar el asistente en la refactorización: cómo pedirle que mejore la legibilidad sin cambiar el comportamiento, cómo solicitar la extracción de una función compleja en funciones más pequeñas, cómo pedir que aplique un patrón de diseño específico y cómo verificar que la refactorización no introduce regresiones.

GENERACIÓN Y MANTENIMIENTO DE TESTS
Escribir tests es una de las tareas más importantes y más postergadas en el desarrollo. Los coding assistants pueden acelerar enormemente la escritura de tests. Ayúdame a usar el asistente para generar tests unitarios y de integración: cómo proporcionar el contexto de la función a testear, cómo pedir que incluya edge cases y casos de error, cómo verificar que los tests son útiles (que fallarían si el código tiene un bug) y no solo que pasan.

**LIMITACIONES Y RIESGOS:**

CUÁNDO NO CONFIAR EN EL ASISTENTE
Los coding assistants cometen errores con regularidad, especialmente en: código de seguridad y criptografía, lógica de negocio compleja y específica del dominio, integraciones con APIs que han cambiado recientemente y código que requiere un profundo entendimiento del estado del sistema. Ayúdame a desarrollar el instinto para identificar cuándo el código generado necesita una revisión más cuidadosa y cuándo los riesgos del código sin verificar son inaceptables.

**EL IMPACTO EN EL APRENDIZAJE Y LAS HABILIDADES:**

El riesgo menos discutido de los coding assistants es el impacto en el desarrollo de habilidades. Un developer junior que acepta código sin entenderlo no aprende. Ayúdame a usar el asistente de manera que acelere mi aprendizaje: cuándo pedirle que explique el código que genera, cuándo es mejor escribir el código sin asistencia para desarrollar el músculo, y cómo usar el asistente para explorar nuevas tecnologías y patrones de manera activa.

Dame el sistema completo para integrar los coding assistants en mi flujo de trabajo de manera que multiplique mi productividad sin comprometer la calidad del código ni el desarrollo de mis habilidades técnicas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Maximizar la productividad del developer con GitHub Copilot, Cursor y otros coding assistants',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'IA generativa en diseño: Midjourney, DALL-E y Stable Diffusion como herramienta',
                'description'       => 'Integra la generación de imágenes con IA en tu flujo de trabajo de diseño para acelerar la ideación, generar referencias visuales y producir assets sin bloquear al equipo creativo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador gráfico y de producto senior con experiencia práctica integrando herramientas de generación de imágenes por IA (Midjourney, DALL-E, Stable Diffusion, Adobe Firefly) en flujos de trabajo profesionales de diseño. Quiero usar estas herramientas de manera efectiva en mi trabajo diario como diseñador y necesito entender no solo cómo funcionan, sino cuándo y cómo integrarlas en el proceso creativo sin comprometer la calidad ni la originalidad.

**Preguntas iniciales:**
1. ¿Qué tipo de diseño haces principalmente (branding, UI/UX, editorial, motion, publicidad)?
2. ¿Ya has usado alguna herramienta de generación de imágenes o partes de cero?
3. ¿Cuál es el caso de uso que más te interesa: ideación rápida, generación de referencias visuales, producción de assets o exploración de estilos?
4. ¿Trabajas solo o en equipo, y hay clientes o stakeholders que aprobarán el uso de IA?

**ENTENDER LAS HERRAMIENTAS:**

MIDJOURNEY: EL REY DE LA CALIDAD ESTÉTICA
Midjourney es la herramienta preferida para generar imágenes de alta calidad estética con un estilo consistente y un nivel de detalle difícil de igualar. Sus puntos fuertes son: la coherencia estilística entre generaciones cuando se usa el mismo estilo o seed, la calidad fotorrealista y pictórica de sus outputs y su capacidad para interpretar referencias de estilo artístico. Sus limitaciones: funciona a través de Discord (aunque tiene interfaz web), el control sobre la composición y los detalles específicos es limitado y la consistencia de personajes y elementos entre imágenes requiere técnicas avanzadas. Ayúdame a entender cuándo Midjourney es la herramienta correcta para mi caso de uso.

DALL-E Y LA INTEGRACIÓN CON EL ECOSISTEMA ADOBE
DALL-E, especialmente a través de Adobe Firefly y la integración en Adobe Photoshop (Generative Fill), tiene la ventaja de la integración directa en el flujo de trabajo de diseño profesional. Generative Fill permite extender imágenes, eliminar elementos y generar variaciones directamente en Photoshop. Adobe Firefly está entrenado solo con contenido con licencia, lo que lo hace más seguro para uso comercial. Ayúdame a identificar cómo usar estas herramientas directamente integradas en mi flujo de trabajo de Adobe.

STABLE DIFFUSION: CONTROL Y FLEXIBILIDAD
Stable Diffusion es la opción open source que ofrece el mayor control sobre el proceso de generación. Con herramientas como ComfyUI o Automatic1111, puedes usar ControlNet para controlar la composición, Img2Img para partir de un boceto o referencia visual, y fine-tuning con LoRA para entrenar el modelo con un estilo o personaje específico. Ayúdame a entender cuándo el mayor control de Stable Diffusion justifica su mayor complejidad técnica.

**PROMPT ENGINEERING PARA IMÁGENES:**

LA ANATOMÍA DEL PROMPT DE IMAGEN EFECTIVO
Un prompt de imagen efectivo tiene varias capas: el sujeto principal (qué se ve), el estilo visual (fotorrealista, ilustración, boceto, etc.), la referencia artística (en el estilo de...), la iluminación (luz natural, dramática, de estudio), la composición (primer plano, plano abierto, perspectiva aérea), el nivel de detalle y la plataforma técnica (ratio de aspecto, versión del modelo, parámetros de calidad). Dame la estructura de prompt que uso para los tipos de imagen que más produzco en mi trabajo.

CÓMO DESCRIBIR ESTILOS Y REFERENCIAS VISUALES
La capacidad de describir estilos visuales en lenguaje natural es una habilidad clave para el diseñador que usa IA. Ayúdame a construir un vocabulario de referencias de estilo: cómo describir estilos de fotografía, cómo referenciar movimientos artísticos, cómo describir paletas de color y texturas y cómo combinar referencias para crear un estilo nuevo.

**FLUJOS DE TRABAJO POR CASO DE USO:**

IDEACIÓN Y MOODBOARDS
La IA generativa es especialmente potente en la fase de ideación porque permite explorar muchas direcciones visuales en minutos. Diseña conmigo el flujo de trabajo de ideación con IA: cómo usar la generación de imágenes para crear un moodboard de referencias visuales que comunicar al cliente, cómo iterar rápidamente sobre una dirección estilística hasta encontrar la que encaja y cómo documentar los prompts que funcionan para reproducir el estilo.

GENERACIÓN DE ASSETS Y ELEMENTOS VISUALES
Para la producción de assets (fondos, texturas, elementos decorativos, ilustraciones de apoyo), la IA puede ahorrar horas de trabajo de búsqueda en bancos de imágenes o de creación manual. Ayúdame a identificar qué tipos de assets de mi flujo de trabajo son buenos candidatos para la generación con IA y los que debo seguir creando manualmente.

**CONSIDERACIONES ÉTICAS Y DE PROPIEDAD:**

USO COMERCIAL Y DERECHOS
El uso comercial de imágenes generadas con IA tiene implicaciones legales y éticas que el diseñador profesional debe conocer. Ayúdame a entender las políticas de uso comercial de cada herramienta, los riesgos de la similitud con obras existentes y las mejores prácticas para documentar el proceso creativo cuando se usa IA.

Dame el plan para integrar la IA generativa de imágenes en mi flujo de trabajo como diseñador de manera que acelere el proceso creativo, mantenga la calidad y sea éticamente responsable.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Integración de herramientas de generación de imágenes con IA en el flujo de trabajo de diseño',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IA en ventas: prospección, personalización y seguimiento automatizados',
                'description'       => 'Usa herramientas de IA para identificar prospectos de alta calidad, personalizar el outreach a escala y automatizar el seguimiento sin perder el toque humano que cierra los tratos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en ventas B2B y en la aplicación de herramientas de inteligencia artificial al proceso comercial. Quiero usar la IA para hacer mi trabajo de ventas más eficiente y efectivo: encontrar mejores prospectos más rápido, personalizar mi outreach de manera que genere respuestas reales y automatizar el seguimiento sin que parezca robótico. Ayúdame a construir ese sistema de ventas aumentado por IA.

**Preguntas iniciales:**
1. ¿Cuál es tu modelo de ventas (inbound, outbound o mixto) y tu ticket promedio?
2. ¿Cuál es el ciclo de venta típico y el número de touchpoints hasta el cierre?
3. ¿Qué herramientas de CRM y sales engagement usas actualmente?
4. ¿Cuál es el mayor problema del proceso actual: identificar los prospectos correctos, conseguir respuesta en el primer contacto o dar seguimiento de manera consistente?

**PROSPECCIÓN INTELIGENTE CON IA:**

IDENTIFICACIÓN DE ICP CON DATOS
El primer paso de la prospección inteligente es tener un ICP (Ideal Customer Profile) muy definido y basado en datos de los clientes que ya tienes. La IA puede ayudarte a analizar tu base de clientes actuales para identificar los patrones comunes de los que tienen mayor éxito: sector, tamaño de empresa, tecnologías que usan, señales de compra que mostraron antes de convertir y comportamientos en el proceso de venta. Ayúdame a usar Claude para analizar mis clientes actuales y refinar el ICP con más precisión que la intuición sola.

HERRAMIENTAS DE INTENT DATA Y SEÑALES DE COMPRA
Las herramientas de intent data (G2, Bombora, LinkedIn Sales Navigator con alertas, Apollo, Cognism) identifican empresas que están activamente buscando soluciones como la tuya. Ayúdame a entender cómo usar estas fuentes de datos para priorizar mis esfuerzos de prospección en las empresas con mayor probabilidad de compra en este momento, en lugar de prospectar a ciegas en una lista fría.

ENRIQUECIMIENTO AUTOMÁTICO DE PROSPECTOS
Antes de contactar a un prospecto, necesitas contexto suficiente para personalizar el outreach: la empresa, su modelo de negocio, los retos recientes (noticias, financiación, cambios de liderazgo), la persona de contacto y su trayectoria. Ayúdame a construir el flujo de enriquecimiento de datos de prospecto que use IA y herramientas como Clay, Apollo o LinkedIn para agregar ese contexto automáticamente antes de que llegue a mi bandeja de salida.

**PERSONALIZACIÓN A ESCALA:**

EL DILEMA DE LA PERSONALIZACIÓN
El outreach personalizado tiene tasas de respuesta mucho más altas que el outreach genérico, pero personalizar cada mensaje manualmente no escala. La IA permite resolver este dilema: personalización de alta calidad a volúmenes que antes eran imposibles. Ayúdame a construir el sistema de personalización a escala con IA: cómo estructurar las variables de personalización (trigger de actualidad, referencia al negocio del prospecto, conexión con el caso de uso específico), cómo usar Claude para redactar el cuerpo del mensaje alrededor de esas variables y cómo mantener un tono humano y genuino.

PLANTILLAS DINÁMICAS CON IA
Las plantillas de outreach estáticas producen emails que parecen plantillas. Las plantillas dinámicas con IA producen mensajes que parecen escritos a mano. Ayúdame a diseñar el sistema de plantillas dinámicas: los campos de personalización que se extraen de los datos del prospecto, el prompt que le doy a Claude para redactar el opening específico y cómo verificar la calidad de la personalización antes de enviar.

**SEGUIMIENTO AUTOMATIZADO SIN PERDER EL TOQUE HUMANO:**

EL SISTEMA DE SEGUIMIENTO INTELIGENTE
La mayoría de las ventas se cierran en el seguimiento, pero pocos vendedores dan seguimiento de manera consistente porque es tedioso y requiere mucha gestión mental. La IA puede automatizar la estructura del seguimiento mientras tú decides los touchpoints estratégicos. Diseña conmigo el sistema de secuencias de seguimiento: cuántos touchpoints, con qué intervalos, por qué canales (email, LinkedIn, teléfono, vídeo) y qué contenido añade valor en cada touchpoint para que el prospecto no sienta que le persigues sino que le ayudas.

RESPUESTAS A OBJECIONES CON IA
Cuando un prospecto responde con una objeción o una pregunta, el tiempo de respuesta y la calidad de la respuesta son críticos. Ayúdame a usar Claude para preparar un banco de respuestas a las objeciones más comunes de mi proceso de ventas y para generar respuestas personalizadas a objeciones específicas de cada prospecto, de manera que pueda responder rápido con calidad.

Dame el sistema completo de ventas aumentado por IA que me permita prospectar mejor, personalizar a escala y dar seguimiento consistente sin que el proceso se sienta automatizado para el prospecto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema de prospección, personalización y seguimiento de ventas B2B potenciado con IA',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'IA como copiloto del PM: de la discovery al roadmap más rápido',
                'description'       => 'Usa la IA para acelerar cada fase del trabajo de producto: síntesis de research, análisis de feedback, escritura de specs y priorización del roadmap con más evidencia y menos tiempo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior con experiencia profunda usando herramientas de inteligencia artificial para acelerar y mejorar el trabajo de producto. Quiero integrar la IA como copiloto en mi flujo de trabajo diario de PM para pasar más rápido de la evidencia a la decisión, de la idea al spec y del feedback al roadmap. Ayúdame a diseñar ese sistema de trabajo.

**Preguntas iniciales:**
1. ¿Cuál es tu etapa de producto (0 a 1, crecimiento, madurez) y el tipo de producto (B2B, B2C, plataforma)?
2. ¿Cuál es el mayor cuello de botella en tu trabajo: la síntesis de research, la escritura de documentación, la priorización o la comunicación con stakeholders?
3. ¿Usas ya alguna herramienta de IA en tu trabajo o partes de cero?
4. ¿Cuánto tiempo dedicas a tareas administrativas y de documentación versus al pensamiento estratégico?

**IA EN LA FASE DE DISCOVERY:**

SÍNTESIS DE RESEARCH CON IA
La fase de discovery genera grandes volúmenes de información: entrevistas de usuario, encuestas, análisis de competencia, datos de uso, feedback de soporte. La síntesis manual de toda esa información es lenta y propensa a los sesgos de confirmación. La IA puede ayudarte a procesar volúmenes mayores de información más rápido y con más consistencia. Diseña conmigo el flujo de síntesis de research con IA: cómo formatear las transcripciones de entrevistas para que Claude las analice, el prompt para identificar patrones de dolor comunes entre múltiples entrevistas, cómo pedir que agrupe los insights por tema y cómo verificar que la síntesis es fiel a los datos originales.

ANÁLISIS DE FEEDBACK DE USUARIOS A ESCALA
El feedback de usuarios llega por múltiples canales: tickets de soporte, reseñas en stores, NPS verbatim, comentarios en redes sociales, conversaciones en Discord o Slack. Analizar todo ese feedback manualmente no escala. Ayúdame a construir el sistema de análisis de feedback con IA: cómo exportar y limpiar los datos de feedback, el prompt para categorizar el feedback por tipo (bug, feature request, usabilidad, precio), cómo cuantificar los temas más frecuentes y cómo convertir ese análisis en inputs accionables para el roadmap.

ANÁLISIS DE COMPETENCIA
El análisis de competencia es un trabajo importante pero intensivo en tiempo. La IA puede acelerar la recopilación y síntesis de información competitiva. Ayúdame a usar Claude para analizar a la competencia: cómo estructurar el análisis de los features de un competidor a partir de su web y documentación, cómo identificar los gaps de posicionamiento y las oportunidades de diferenciación y cómo mantener el análisis actualizado sin que consuma demasiado tiempo.

**IA EN LA ESCRITURA DE DOCUMENTACIÓN DE PRODUCTO:**

PRODUCT REQUIREMENT DOCUMENTS (PRDs)
Los PRDs son uno de los outputs más importantes y más intensivos en tiempo del PM. La IA puede acelerar enormemente la escritura de PRDs sin reducir su calidad. Ayúdame a diseñar el flujo de trabajo de escritura de PRDs con IA: el prompt maestro que incluye el contexto del problema, la solución propuesta, los criterios de éxito y las restricciones técnicas para que Claude genere un primer borrador completo, el proceso de revisión y refinamiento y cómo adaptar el nivel de detalle al público del documento.

USER STORIES Y CRITERIOS DE ACEPTACIÓN
Escribir user stories y criterios de aceptación es un trabajo repetitivo que la IA hace bien. Ayúdame a usar Claude para: generar las user stories a partir de la descripción de un feature, identificar los edge cases que no había considerado, escribir los criterios de aceptación en formato Given-When-Then y verificar que las stories están bien granularizadas para un sprint.

**IA EN LA PRIORIZACIÓN DEL ROADMAP:**

FRAMEWORKS DE PRIORIZACIÓN ASISTIDOS POR IA
Los frameworks de priorización (RICE, ICE, MoSCoW, Value vs Effort) son herramientas útiles pero requieren mucho trabajo manual para aplicarlos de manera rigurosa. La IA puede ayudarte a aplicar estos frameworks más rápido y con más consistencia. Ayúdame a usar Claude para: estructurar una sesión de priorización con el framework adecuado a mi contexto, calcular los scores de priorización para una lista de features y identificar las dependencias y los riesgos que podrían cambiar la prioridad.

COMUNICACIÓN DEL ROADMAP A STAKEHOLDERS
Comunicar el roadmap de manera que genere alineación y no preguntas es una habilidad crítica del PM. La IA puede ayudarte a adaptar el mensaje a diferentes audiencias. Ayúdame a usar Claude para: adaptar el roadmap a la narrativa correcta para diferentes stakeholders (ingeniería, ventas, liderazgo, clientes), preparar las respuestas a las preguntas difíciles que sé que van a surgir y comunicar los cambios de prioridad de manera que mantenga la confianza.

Dame el sistema completo de PM copilotado por IA que me permita pasar más tiempo en el pensamiento estratégico y menos en las tareas de síntesis y documentación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Integración de IA en el flujo de trabajo diario del product manager para acelerar discovery, specs y roadmap',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'IA en RRHH: screening, onboarding y employee experience',
                'description'       => 'Aplica la inteligencia artificial en los procesos clave de RRHH para procesar más candidatos con más rigor, personalizar el onboarding y mejorar la experiencia del empleado a escala.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en People Operations y HR Tech con experiencia implementando soluciones de inteligencia artificial en los procesos de recursos humanos de empresas medianas y grandes. Quiero usar la IA para hacer más eficientes y de mayor calidad los procesos clave de RRHH: el screening de candidatos, el onboarding de nuevos empleados y la experiencia del empleado en general. Ayúdame a diseñar el plan de implementación.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de la organización y el volumen de contrataciones al año?
2. ¿Cuáles son los procesos de RRHH que más tiempo consumen al equipo actualmente?
3. ¿Existe ya alguna herramienta de ATS (Applicant Tracking System) o HRIS que se pueda integrar?
4. ¿Cuál es el mayor problema de calidad que quieres resolver: candidatos inadecuados que pasan el screening, onboarding inconsistente o baja satisfacción del empleado?

**IA EN EL PROCESO DE SELECCIÓN:**

SCREENING INTELIGENTE DE CVS
El screening manual de CVs es el mayor consumidor de tiempo en el proceso de selección y el más susceptible a los sesgos inconscientes. Las herramientas de IA pueden procesar grandes volúmenes de candidaturas con criterios consistentes y objetivos. Ayúdame a implementar un sistema de screening con IA: cómo definir los criterios de evaluación de manera que sean objetivos y no discriminatorios, cómo usar Claude para analizar los CVs de los candidatos preseleccionados e identificar los más relevantes para la posición, y cómo documentar el proceso para garantizar la transparencia y el cumplimiento legal.

GENERACIÓN DE PREGUNTAS DE ENTREVISTA PERSONALIZADAS
Las mejores entrevistas hacen preguntas adaptadas al perfil específico de cada candidato basadas en su experiencia y en los gaps que muestra el CV. La IA puede generar conjuntos de preguntas personalizadas para cada candidato en minutos. Ayúdame a usar Claude para: analizar el CV de un candidato y el job description de la posición para generar preguntas de entrevista que exploren los puntos de interés, los gaps de experiencia y las señales de alto potencial específicas de ese candidato.

ANÁLISIS DE CONSISTENCIA EN LAS EVALUACIONES
Un problema común en los procesos de selección es la inconsistencia en la evaluación de los candidatos por parte de diferentes entrevistadores. La IA puede ayudar a estructurar las evaluaciones de manera que sean más comparables. Diseña conmigo el sistema de evaluación estructurada con IA: las rúbricas de evaluación por competencia, cómo usar Claude para analizar los feedback de los entrevistadores e identificar inconsistencias y cómo facilitar el proceso de calibración entre entrevistadores.

**IA EN EL ONBOARDING:**

ONBOARDING PERSONALIZADO A ESCALA
El onboarding estándar trata a todos los nuevos empleados igual, independientemente de su perfil, experiencia previa o rol. Un onboarding personalizado produce una integración más rápida y una mayor satisfacción. La IA permite personalizar el onboarding sin multiplicar el esfuerzo del equipo de RRHH. Ayúdame a diseñar el sistema de onboarding personalizado con IA: cómo usar el perfil del nuevo empleado para generar un plan de onboarding adaptado a su rol y nivel de experiencia, cómo crear el contenido de onboarding que responde las preguntas más frecuentes de cada tipo de rol y cómo usar un chatbot de onboarding que responde las dudas del nuevo empleado en tiempo real.

SEGUIMIENTO DEL PROGRESO DE INTEGRACIÓN
La mayor causa de fracaso del onboarding es la falta de seguimiento. Ayúdame a usar la IA para monitorizar el progreso de integración de los nuevos empleados: los indicadores de integración exitosa (actividad en las herramientas, participación en reuniones, completación de los hitos del onboarding), las señales de alerta temprana que indican que el empleado puede estar teniendo dificultades y el sistema de check-ins automatizados que captura el feedback del nuevo empleado en cada fase.

**IA EN LA EXPERIENCIA DEL EMPLEADO:**

ANÁLISIS DE PULSO Y SENTIMIENTO
Las encuestas de clima laboral tradicionales son anuales y producen datos históricos cuando el problema ya se ha agravado. Las herramientas de pulse survey con análisis de sentimiento por IA permiten detectar problemas más rápido. Ayúdame a implementar el sistema de análisis de pulso: el diseño de micro-encuestas frecuentes (weekly o biweekly), el análisis de los resultados con IA para identificar tendencias y señales de alerta y el proceso de acción que convierte los insights en intervenciones antes de que el problema se agrave.

ASISTENTE DE RRHH PARA EMPLEADOS
Muchas preguntas de los empleados sobre políticas, beneficios, procesos y procedimientos son respondibles con la documentación existente. Un chatbot de RRHH entrenado sobre la documentación interna puede responder estas preguntas en tiempo real, liberando al equipo de RRHH para el trabajo de mayor valor añadido. Ayúdame a evaluar la viabilidad de implementar un asistente de RRHH con IA en mi organización.

Dame el roadmap de implementación de IA en RRHH con los casos de uso priorizados por impacto y facilidad de implementación, y los criterios éticos que debo tener en cuenta en cada uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementación de IA en los procesos clave de RRHH: selección, onboarding y experiencia del empleado',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA en finanzas: análisis, modelado y reporting aumentados',
                'description'       => 'Aplica la inteligencia artificial para acelerar el análisis financiero, mejorar la calidad de los modelos y producir reportings más claros y más rápidos sin sacrificar el rigor.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO y experto en finanzas corporativas con experiencia profunda en la aplicación de inteligencia artificial y herramientas avanzadas de análisis de datos en los procesos financieros. Quiero usar la IA para hacer mi trabajo financiero más eficiente y de mayor impacto: análisis más rápidos, modelos más robustos y reportings más claros. Ayúdame a identificar los casos de uso de mayor valor y a implementarlos.

**Preguntas iniciales:**
1. ¿Cuál es tu rol específico en finanzas (FP&A, controlling, auditoría, inversión, tesorería)?
2. ¿Cuáles son las tareas que más tiempo consumen en tu trabajo actual?
3. ¿Cuál es tu nivel de dominio de herramientas como Excel avanzado, Python, SQL o herramientas de BI?
4. ¿Cuál es el mayor problema de calidad que quieres resolver: velocidad de análisis, errores en los modelos, claridad de los reportings o capacidad para responder preguntas ad hoc rápidamente?

**IA EN EL ANÁLISIS FINANCIERO:**

ANÁLISIS DE ESTADOS FINANCIEROS CON IA
El análisis de estados financieros es un trabajo que combina la lectura de datos con la interpretación del contexto de negocio. La IA puede acelerar enormemente la fase de lectura y síntesis, dejando más tiempo para la interpretación. Ayúdame a usar Claude para: analizar un balance, una cuenta de resultados o un estado de flujos de caja e identificar las tendencias más relevantes, los ratios financieros clave y las señales de alerta o de fortaleza que requieren atención. Dame el prompt que uso para estructurar este análisis de manera que la IA me dé un análisis útil y no una descripción superficial de los números.

ANÁLISIS DE VARIACIONES DE PRESUPUESTO
El análisis de variaciones entre el presupuesto y el real es una de las tareas más recurrentes en FP&A. La IA puede acelerar la identificación de las variaciones más significativas y la generación de hipótesis sobre sus causas. Diseña conmigo el flujo de trabajo de análisis de variaciones con IA: cómo estructurar los datos para que Claude los analice, cómo pedir que identifique las variaciones más significativas por magnitud y por relevancia estratégica y cómo generar el texto explicativo de las variaciones para el reporte de gestión.

INVESTIGACIÓN FINANCIERA Y ANÁLISIS DE MERCADO
La investigación financiera de empresas, sectores y mercados consume mucho tiempo de lectura y síntesis. La IA puede acelerar este proceso de manera significativa. Ayúdame a usar Claude y herramientas de búsqueda aumentada por IA para: sintetizar los resultados trimestrales de un competidor o de una empresa objetivo, analizar las tendencias de un sector a partir de múltiples fuentes y comparar el posicionamiento financiero de varias empresas de manera sistemática.

**IA EN EL MODELADO FINANCIERO:**

ACELERACIÓN DE LA CONSTRUCCIÓN DE MODELOS
La construcción de modelos financieros desde cero es lenta y propensa a errores. La IA puede ayudar a acelerar la construcción de la estructura del modelo, generar las fórmulas para los cálculos estándar y documentar el modelo de manera que otros lo entiendan. Ayúdame a usar la IA en la construcción de modelos: cómo describir la lógica del modelo a Claude para que me ayude a estructurar las hojas, cómo usar GitHub Copilot o Claude para generar fórmulas de Excel o código de Python para cálculos específicos y cómo usar la IA para el debugging de errores en el modelo.

ANÁLISIS DE ESCENARIOS Y SENSIBILIDADES
Los mejores modelos financieros incluyen análisis de escenarios que muestran el impacto de diferentes hipótesis. La IA puede ayudar a diseñar los escenarios y a interpretar los resultados. Ayúdame a usar Claude para: diseñar los escenarios base, optimista y pesimista de un modelo con las hipótesis correctas para cada uno, interpretar los resultados del análisis de sensibilidad y comunicar los insights del análisis de escenarios de manera que sean accionables para el liderazgo.

**IA EN EL REPORTING:**

GENERACIÓN DE NARRATIVA FINANCIERA
El reporting financiero de calidad combina los números con una narrativa que los contextualiza e interpreta. Escribir esa narrativa es lento y requiere habilidades de escritura que no siempre van de la mano con las habilidades analíticas. Ayúdame a usar Claude para generar la narrativa del reporte de gestión: el prompt que proporciona los datos, las variaciones clave y el contexto del período para que Claude genere el texto explicativo, y el proceso de revisión para garantizar la exactitud y el tono apropiado.

DASHBOARDS Y VISUALIZACIÓN DE DATOS
Los dashboards financieros deben comunicar de manera clara y rápida el estado del negocio a audiencias con diferentes niveles de sofisticación financiera. Ayúdame a usar la IA para mejorar la comunicación visual de los datos: cómo usar Claude para identificar los KPIs más relevantes para cada audiencia, cómo estructurar el dashboard para guiar la lectura desde el resumen ejecutivo al detalle y cómo generar las visualizaciones más adecuadas para cada tipo de dato.

Dame el plan de implementación de IA en mi trabajo financiero con los casos de uso priorizados por impacto en mi productividad y calidad de output.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Aplicación de IA para acelerar el análisis financiero, el modelado y la producción de reportings',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'IA jurídica: de la revisión de contratos a la investigación legal',
                'description'       => 'Usa herramientas de IA para acelerar la revisión de contratos, la investigación jurídica y la redacción de documentos legales sin perder el rigor y la responsabilidad profesional.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado senior con experiencia en el uso de herramientas de inteligencia artificial en la práctica jurídica, incluyendo la revisión de contratos, la investigación legal y la redacción de documentos. Quiero integrar la IA en mi trabajo jurídico para ser más eficiente sin comprometer el rigor y la responsabilidad profesional. Ayúdame a identificar los casos de uso de mayor valor y a implementarlos de manera responsable.

**Preguntas iniciales:**
1. ¿Cuál es tu área de práctica (corporativo, laboral, propiedad intelectual, litigios, M&A, compliance)?
2. ¿Cuáles son las tareas que más tiempo consumen en tu trabajo actual?
3. ¿Usas ya alguna herramienta de legal tech o IA, o partes de cero?
4. ¿Trabajas en un despacho, en el departamento jurídico de una empresa o de manera independiente?

**IA EN LA REVISIÓN DE CONTRATOS:**

IDENTIFICACIÓN DE CLÁUSULAS DE RIESGO
La revisión de contratos es uno de los trabajos más intensivos en tiempo de la práctica jurídica y uno de los que más se beneficia de la asistencia de IA. Los modelos de IA entrenados en contratos legales pueden identificar cláusulas de riesgo, inconsistencias entre cláusulas y desviaciones de los estándares de mercado en minutos. Ayúdame a usar Claude para la revisión de contratos: cómo estructurar el prompt para que analice un contrato en busca de cláusulas problemáticas en áreas específicas (limitación de responsabilidad, resolución anticipada, protección de datos, propiedad intelectual), cómo comparar las cláusulas del contrato con la posición estándar de mi cliente y cómo generar un memo de revisión que sea útil para el cliente.

COMPARACIÓN DE VERSIONES Y NEGOCIACIÓN
Durante la negociación de contratos, comparar versiones y hacer seguimiento de los cambios entre borradores consume mucho tiempo. La IA puede acelerar este proceso. Ayúdame a usar Claude para: identificar las diferencias significativas entre dos versiones de un contrato y clasificarlas por su importancia, generar la tabla de issues pendientes de resolución en la negociación y redactar propuestas de contrapropuesta para las cláusulas más conflictivas.

EXTRACCIÓN DE INFORMACIÓN DE CONTRATOS
En muchas organizaciones, hay contratos activos de los que es difícil extraer información rápidamente (fechas de vencimiento, hitos de pago, obligaciones de las partes, limitaciones). La IA puede procesar grandes volúmenes de contratos para extraer esa información de manera sistemática. Diseña conmigo el flujo de trabajo de extracción de información contractual con IA para crear un repositorio de información estructurada de los contratos activos.

**IA EN LA INVESTIGACIÓN JURÍDICA:**

RESEARCH LEGAL ASISTIDO POR IA
La investigación jurídica es una de las tareas más intensivas en tiempo de la práctica legal. Las herramientas de IA especializadas en investigación legal (Westlaw AI, Lexis AI, CaseText, Harvey) pueden acelerar enormemente el proceso. Ayúdame a entender cómo usar estas herramientas para: identificar la jurisprudencia relevante para un caso, analizar la coherencia de la argumentación legal de la parte contraria e identificar los argumentos más sólidos disponibles para mi posición.

SÍNTESIS DE NORMATIVA Y REGULACIÓN
Entender el impacto de una nueva regulación o de un cambio normativo requiere leer y sintetizar volúmenes grandes de texto legal. La IA puede acelerar este proceso de manera significativa. Ayúdame a usar Claude para: analizar un texto normativo e identificar las obligaciones, prohibiciones y plazos aplicables a mi cliente, comparar la nueva normativa con la anterior para identificar los cambios más relevantes y generar el memo de impacto normativo que comunica las implicaciones al cliente en lenguaje comprensible.

**IA EN LA REDACCIÓN JURÍDICA:**

REDACCIÓN DE DOCUMENTOS LEGALES
La redacción de documentos jurídicos (contratos, escrituras, demandas, recursos, informes) es el core del trabajo del abogado. La IA puede actuar como asistente de redacción que genera primeros borradores, sugiere cláusulas alternativas y mejora la claridad del texto sin comprometer el rigor técnico. Ayúdame a usar Claude como asistente de redacción jurídica: cómo proporcionar el contexto necesario para que genere un borrador útil, cómo iterar sobre el borrador para ajustarlo al caso específico y cómo mantener la voz y el estilo propios mientras uso la IA como acelerador.

CONSIDERACIONES ÉTICAS Y DE CONFIDENCIALIDAD
El uso de IA en la práctica jurídica plantea preguntas importantes sobre la confidencialidad del cliente y la responsabilidad profesional. Ayúdame a establecer las políticas de uso de IA en mi práctica: qué información puede compartirse con herramientas de IA externas, cuándo es necesario anonimizar o generalizar los datos antes de usarlos en un prompt y cómo documentar el uso de IA en el proceso de trabajo para cumplir con las obligaciones de diligencia profesional.

Dame el mapa de casos de uso de IA en mi práctica jurídica con los que tienen mayor impacto en la eficiencia, las herramientas más adecuadas para cada uno y las salvaguardas éticas que debo aplicar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Integración responsable de IA en la práctica jurídica: contratos, investigación y redacción legal',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'IA en customer success: respuestas, análisis de sentimiento y predicciones',
                'description'       => 'Usa la IA para responder más rápido y mejor a los clientes, analizar el sentimiento a escala y predecir el riesgo de churn antes de que sea demasiado tarde para actuar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia profunda en la aplicación de herramientas de inteligencia artificial en los procesos de customer success y soporte al cliente en empresas SaaS B2B. Quiero usar la IA para mejorar la velocidad y calidad de las respuestas a clientes, analizar el sentimiento a escala y predecir el churn con suficiente antelación para actuar. Ayúdame a diseñar ese sistema.

**Preguntas iniciales:**
1. ¿Cuál es el modelo de CS (high touch, tech touch, mixto) y el volumen de interacciones con clientes al mes?
2. ¿Cuáles son los mayores problemas de calidad en las interacciones con clientes actuales?
3. ¿Qué herramientas de CRM, CS platform o soporte usas actualmente?
4. ¿Cuál es la tasa de churn actual y el principal driver de abandono identificado?

**IA EN LA GESTIÓN DE RESPUESTAS AL CLIENTE:**

ASISTENTE DE RESPUESTA PARA CS MANAGERS
Los CS Managers pasan una parte significativa de su tiempo redactando respuestas a emails, mensajes de Slack y tickets de soporte de sus cuentas. La IA puede actuar como asistente de redacción que genera borradores de respuesta de alta calidad en segundos, dejando al CS Manager el trabajo de personalización y verificación. Diseña conmigo el flujo de trabajo de respuesta asistida por IA: cómo proporcionar el contexto de la cuenta y el mensaje del cliente para que Claude genere un borrador de respuesta, cómo verificar y personalizar el borrador antes de enviarlo y cómo usar la IA para mantener la consistencia de tono y la calidad de la comunicación incluso en períodos de mucho volumen.

BASE DE CONOCIMIENTO CON IA
Una base de conocimiento bien construida y accesible con IA puede resolver las preguntas más frecuentes de los clientes sin intervención humana y puede ayudar a los CS Managers a encontrar la información correcta más rápido. Ayúdame a construir el sistema de base de conocimiento con IA: cómo estructurar el contenido para que sea recuperable por la IA, cómo implementar un chatbot de autoservicio para los clientes en segmentos de bajo contacto y cómo usar la IA para identificar los gaps de contenido en la base de conocimiento a partir de las preguntas que los clientes hacen y que no tienen una respuesta documentada.

**ANÁLISIS DE SENTIMIENTO A ESCALA:**

MONITORIZACIÓN DEL SENTIMIENTO EN TODAS LAS INTERACCIONES
El sentimiento del cliente se expresa en múltiples canales: emails, tickets, llamadas, NPS verbatim, comentarios en reuniones y reseñas en G2 o Capterra. Analizar el sentimiento de manera manual en todos esos canales es imposible a escala. La IA permite monitorizar el sentimiento de manera sistemática y en tiempo real. Ayúdame a construir el sistema de análisis de sentimiento: qué canales de interacción incluir en el análisis, cómo usar Claude para categorizar el sentimiento y la urgencia de cada interacción y cómo convertir el análisis de sentimiento en alertas accionables para el equipo de CS.

ANÁLISIS DE LLAMADAS Y REUNIONES
Las QBRs, las llamadas de renovación y las reuniones de onboarding contienen información valiosa sobre el estado de la relación con el cliente que raramente se captura de manera sistemática. La IA puede transcribir y analizar esas llamadas para extraer los compromisos adquiridos, las señales de riesgo y las oportunidades de expansión. Diseña conmigo el flujo de análisis de llamadas con IA: la transcripción, el análisis de los topics clave y el resumen de los action items para el sistema de CRM.

**PREDICCIÓN DE CHURN CON IA:**

CONSTRUCCIÓN DEL MODELO DE CHURN
El churn prediction es uno de los casos de uso de IA con mayor impacto en CS. Un modelo de churn bien construido permite identificar las cuentas en riesgo semanas o meses antes de que el cliente exprese su intención de no renovar, dando tiempo para intervenir. Ayúdame a entender cómo construir el modelo de predicción de churn para mi producto: qué variables de comportamiento del producto son más predictivas del churn (frecuencia de login, breadth de uso de features, número de usuarios activos, tickets de soporte recientes), cómo combinar esas señales en un health score y cómo calibrar el modelo para que las alertas sean precisas y no generen demasiados falsos positivos.

PLAYBOOKS DE INTERVENCIÓN BASADOS EN LA PREDICCIÓN
El modelo de churn solo tiene valor si genera intervenciones efectivas. Ayúdame a diseñar los playbooks de intervención para cada tipo de señal de riesgo: la intervención para el cliente que ha reducido el uso del producto, la para el cliente que ha tenido múltiples tickets sin resolver y la para el cliente cuyo ejecutivo principal ha cambiado. Para cada playbook, dame la secuencia de pasos, el mensaje clave y el objetivo de la intervención.

Dame el sistema completo de CS aumentado por IA que me permita responder mejor y más rápido, monitorizar el sentimiento a escala y predecir el churn con antelación suficiente para actuar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de customer success aumentado por IA para respuestas, sentimiento y predicción de churn',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IA como empleado del freelance: delegar tareas al asistente inteligente',
                'description'       => 'Convierte la IA en tu primer empleado virtual que gestiona las tareas administrativas, acelera la producción de entregables y te libera para el trabajo que solo tú puedes hacer.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de productividad especializado en freelancers y profesionales independientes con experiencia en la integración de herramientas de IA en el trabajo autónomo. Quiero usar la IA como si fuera mi primer empleado virtual: delegar las tareas que consumen tiempo y no requieren mi expertise exclusivo, acelerar la producción de los entregables que sí requieren mi conocimiento y usar la IA como sparring partner para tomar mejores decisiones de negocio. Ayúdame a diseñar ese sistema.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad como freelance y cuáles son los principales entregables que produces?
2. ¿Cuántas horas a la semana dedicas a tareas administrativas (propuestas, facturación, emails, gestión de proyectos)?
3. ¿Cuál es el mayor cuello de botella en tu producción de entregables?
4. ¿Ya usas alguna herramienta de IA en tu trabajo o partes de cero?

**LA IA COMO EMPLEADO VIRTUAL:**

EL MAPA DE TAREAS A DELEGAR
El primer paso es identificar qué tareas de tu trabajo como freelance pueden ser manejadas total o parcialmente por la IA. Hay tres categorías: tareas que la IA puede hacer sola (generar el primer borrador de un email de seguimiento, crear una plantilla de propuesta, investigar un tema), tareas en las que la IA puede acelerarlas significativamente (redactar la propuesta comercial con tu input, estructurar un informe con tus conclusiones, preparar el material de una reunión) y tareas que la IA no puede hacer bien sin tu guía experta (el diagnóstico del problema del cliente, la estrategia de alto nivel, la relación personal). Ayúdame a hacer ese mapa para mi caso concreto.

DELEGACIÓN EFECTIVA: EL ARTE DEL BRIEFING
Para que la IA produzca un output útil, necesitas darle un briefing claro de la misma manera que se lo darías a un empleado junior. Los mejores briefings incluyen: el objetivo del entregable (qué tiene que conseguir este documento o esta respuesta), el contexto (quién es el destinatario, cuál es la situación), las restricciones (tono, extensión, formato, qué no debe incluir), los ejemplos de referencia (cómo lo haría yo o cómo lo he hecho antes) y el criterio de calidad (cómo sabré que el output es bueno). Ayúdame a crear mis plantillas de briefing para las tareas que delego más frecuentemente a la IA.

**CASOS DE USO CONCRETOS PARA FREELANCERS:**

PROPUESTAS COMERCIALES
Las propuestas comerciales son uno de los entregables más críticos y más intensivos en tiempo del freelance. Una propuesta bien redactada puede tomar horas y la calidad varía enormemente con el nivel de energía que tengas ese día. La IA puede producir un primer borrador de propuesta de alta calidad en minutos. Diseña conmigo el flujo de trabajo de propuesta con IA: qué información necesito capturar de la reunión de discovery con el cliente (el problema, el objetivo, el contexto, las restricciones, el presupuesto orientativo) y cómo estructuro el prompt para que Claude genere una propuesta que suene a mí, no a una plantilla genérica.

COMUNICACIÓN CON CLIENTES
El volumen de comunicación con clientes (emails de seguimiento, actualizaciones de estado, respuestas a feedback, solicitudes de cambio) es uno de los mayores consumidores de tiempo mental del freelance. La IA puede gestionar gran parte de esta carga. Ayúdame a construir el sistema de comunicación asistida: cómo uso Claude para generar respuestas a los emails más comunes, cómo mantengo mi voz y tono personal en los drafts que genera la IA y cuándo debo escribir yo directamente sin asistencia.

INVESTIGACIÓN Y PREPARACIÓN DE PROYECTOS
Antes de empezar un nuevo proyecto, necesitas entender el contexto: el sector del cliente, sus competidores, las tendencias del mercado, la terminología específica. Esta investigación puede consumir días de trabajo. La IA puede acelerar esta fase enormemente. Ayúdame a usar Claude y herramientas de búsqueda aumentada por IA para comprimir la fase de investigación sin comprometer la calidad del entendimiento que necesito para hacer un buen trabajo.

CREACIÓN DE SISTEMAS Y PLANTILLAS
El freelance que trabaja de manera eficiente tiene sistemas y plantillas para todo lo que hace más de una vez. La IA puede ayudarte a construir y mejorar esos sistemas. Ayúdame a usar Claude para: crear plantillas para los entregables más frecuentes adaptadas a mi estilo, construir los procesos de trabajo documentados que me permiten delegar partes del proyecto a colaboradores en el futuro y desarrollar los checklists de calidad que garantizan que cada entregable cumple mis estándares.

**LA IA COMO SPARRING PARTNER:**

DECISIONES DE NEGOCIO FREELANCE
El freelance que trabaja solo no tiene colegas con quienes contrastar decisiones importantes: subir precios, aceptar o rechazar un proyecto, cambiar de especialidad, invertir en formación o herramientas. La IA puede actuar como sparring partner para estas decisiones. Ayúdame a usar Claude para: estructurar el análisis de una decisión de negocio importante, identificar los factores que no estoy considerando, explorar los escenarios posibles y clarificar qué valores y objetivos deben guiar la decisión.

Dame el sistema completo de IA como empleado virtual para mi negocio freelance: el mapa de delegación, los flujos de trabajo concretos y los hábitos que hacen que la IA se integre de manera natural en mi día a día.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema para usar la IA como empleado virtual que acelera el trabajo y libera tiempo al freelance',
                'vote_score'        => 48,
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
