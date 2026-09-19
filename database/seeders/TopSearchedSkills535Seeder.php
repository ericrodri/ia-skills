<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills535Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de sentimiento en campañas de marketing con IA',
                'description'      => 'Usa IA para medir y clasificar el sentimiento de tu audiencia en redes sociales, reseñas y menciones de marca, optimizando tus campañas en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un experto en análisis de sentimiento y marketing digital. Tu objetivo es ayudarme a implementar un sistema de análisis de sentimiento para mis campañas de marketing usando procesamiento del lenguaje natural.

instrucción: Analiza el siguiente conjunto de comentarios de redes sociales, reseñas de producto y menciones de marca que te voy a proporcionar. Para cada texto, debes realizar las siguientes tareas:

1. Clasificación de sentimiento: determina si el tono general es positivo, negativo o neutro. Cuando corresponda, identifica sentimientos más granulares como frustración, entusiasmo, decepción o satisfacción.

2. Extracción de temas clave: identifica los principales temas que aparecen en el texto. Agrupa menciones similares bajo categorías como "precio", "calidad", "servicio al cliente", "experiencia de uso" o "entrega".

3. Identificación de emociones dominantes: además del sentimiento general, detecta emociones específicas que expresan los usuarios. Esto me ayudará a entender el estado emocional de mi audiencia más allá de lo positivo o negativo.

4. Detección de urgencia o intención: señala si el comentario implica una intención de compra, una queja que requiere atención inmediata, o una recomendación a otros usuarios.

5. Resumen ejecutivo: al final del análisis, genera un resumen de no más de cinco puntos con los hallazgos más relevantes. Incluye el porcentaje aproximado de comentarios positivos, negativos y neutros, los temas más recurrentes y las principales oportunidades de mejora detectadas.

Para el análisis, sigue estas pautas:
- Considera el contexto cultural y lingüístico en español, incluyendo modismos y expresiones coloquiales.
- Ten en cuenta el sarcasmo y la ironía, que frecuentemente distorsionan el análisis automático.
- Distingue entre críticas constructivas y quejas sin fundamento.
- Identifica los comentarios de mayor impacto potencial (muchos likes, compartidos o respuestas).

Una vez completado el análisis, ayúdame a generar recomendaciones accionables para ajustar mi estrategia de contenidos. Específicamente necesito saber:
- Qué mensajes están resonando más positivamente con mi audiencia.
- Qué aspectos de mi producto o servicio generan más insatisfacción.
- Qué tipo de contenido debo crear o evitar en las próximas semanas.
- Cómo puedo responder públicamente a los comentarios negativos de forma que mejore la percepción de marca.

Después del análisis completo, genera también una plantilla de respuesta adaptada para los tres tipos de comentarios más frecuentes que hayas identificado: uno positivo, uno negativo y uno con una pregunta o solicitud de información. Cada plantilla debe mantener el tono de la marca, ser empática y orientada a la acción.

Finalmente, sugiere un calendario de monitoreo: con qué frecuencia debería repetir este análisis, qué métricas debería rastrear semana a semana y cómo interpretar las variaciones de sentimiento en relación con mis acciones de marketing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Análisis de sentimiento en comentarios y menciones de marca para optimizar campañas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Construcción de chatbots con NLP usando IA como asistente de desarrollo',
                'description'      => 'Aprende a diseñar, desarrollar y optimizar chatbots inteligentes con procesamiento del lenguaje natural, usando IA para acelerar cada fase del proceso.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en procesamiento del lenguaje natural y sistemas conversacionales. Necesito tu ayuda para diseñar e implementar un chatbot inteligente para mi aplicación.

tarea principal: Ayúdame a construir un chatbot con capacidades de NLP que pueda entender intenciones del usuario, mantener contexto en la conversación y responder de forma coherente y útil.

Fase 1 - Diseño de la arquitectura conversacional:
Primero, ayúdame a definir el alcance del chatbot. Necesito que me hagas las siguientes preguntas clave para entender el caso de uso:
- ¿Cuáles son los principales flujos de conversación que debe soportar?
- ¿Qué intenciones (intents) debe reconocer el sistema?
- ¿Qué entidades (entities) son relevantes para extraer de los mensajes del usuario?
- ¿Necesita el chatbot acceder a datos externos o APIs?

Fase 2 - Diseño del esquema de intenciones y entidades:
Con base en mis respuestas, genera un esquema JSON completo que incluya:
- Lista de intenciones con ejemplos de utterances para cada una (mínimo 5 ejemplos por intención).
- Definición de entidades con sus posibles valores y sinónimos.
- Árbol de decisión para el manejo de ambigüedades cuando el usuario no es claro.
- Estrategia de fallback cuando no se reconoce ninguna intención.

Fase 3 - Generación de código:
Genera el código en Python (usando la librería que me recomiendas según el caso) para:
- El procesador principal de mensajes que identifica intención y extrae entidades.
- La capa de gestión del contexto conversacional (memoria de la sesión).
- Los handlers para cada intención principal.
- Un sistema de logging que permita analizar conversaciones y mejorar el modelo.

Fase 4 - Prompts de sistema para el modelo de lenguaje:
Si el chatbot usa un LLM como motor, ayúdame a escribir el system prompt que define su personalidad, límites y comportamiento. Incluye instrucciones para:
- Mantener coherencia en el tono y estilo de respuesta.
- Rechazar solicitudes fuera del alcance definido.
- Pedir aclaraciones cuando el mensaje es ambiguo.
- Transferir al agente humano cuando la conversación lo requiera.

Fase 5 - Plan de pruebas y mejora continua:
Define un conjunto de casos de prueba que cubra los flujos principales, los casos límite y los errores esperados. Incluye métricas clave para evaluar el rendimiento del chatbot como tasa de resolución en primer contacto, tasa de escalado a humanos y satisfacción del usuario.

Al final, dame recomendaciones sobre herramientas, plataformas y frameworks según el volumen esperado de conversaciones y el presupuesto disponible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseño e implementación de chatbots inteligentes con NLP para aplicaciones',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Análisis de feedback de usuarios con NLP para mejorar diseños',
                'description'      => 'Procesa y clasifica automáticamente el feedback cualitativo de usuarios para extraer insights de diseño accionables usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un investigador de experiencia de usuario con experiencia avanzada en análisis cualitativo y procesamiento del lenguaje natural. Necesito que me ayudes a extraer insights de diseño a partir de feedback textual de usuarios.

objetivo: Analizar un conjunto de respuestas de usuarios (encuestas, entrevistas transcritas, comentarios en app stores, tickets de soporte) y transformarlas en insights accionables para mejorar el diseño de mi producto.

instrucción detallada:

Paso 1 - Preparación y limpieza del corpus:
Antes de analizar, ayúdame a estructurar el feedback. Indica qué información mínima necesito recopilar junto con cada comentario (fuente, fecha, contexto del usuario, nivel de satisfacción previo) para que el análisis sea más rico.

Paso 2 - Categorización temática:
Clasifica cada fragmento de feedback en categorías de diseño relevantes. Las categorías base son: navegación e información arquitectónica, jerarquía visual, claridad del copy, accesibilidad, rendimiento percibido, consistencia visual, flujos de tarea y onboarding. Si detectas categorías adicionales en el texto, créalas.

Paso 3 - Análisis de frecuencia e impacto:
Para cada categoría, indica:
- Cuántos comentarios la mencionan (frecuencia).
- El sentimiento predominante en esos comentarios.
- El nivel de impacto estimado en la experiencia del usuario (alto, medio, bajo).
- Citas textuales representativas de usuarios reales.

Paso 4 - Identificación de patrones y contradicciones:
Detecta patrones recurrentes: ¿qué problemas aparecen repetidamente aunque estén descritos con palabras diferentes? También identifica contradicciones: ¿hay usuarios que valoran positivamente algo que otros critican? Esto es especialmente valioso para entender segmentos de usuarios distintos.

Paso 5 - Priorización de mejoras:
Genera una matriz de priorización con dos ejes: frecuencia del problema vs. impacto en la experiencia. Ubica cada hallazgo en uno de estos cuadrantes: resolver urgente, planificar, considerar, o monitorear.

Paso 6 - Generación de how might we:
Para los hallazgos de mayor prioridad, transforma cada insight en una pregunta "How Might We" (¿Cómo podríamos...?) que inspire soluciones de diseño. Estas preguntas serán el punto de partida para sesiones de ideación.

Paso 7 - Recomendaciones de diseño concretas:
Para cada pregunta HMW, sugiere al menos tres direcciones de solución de diseño. No tienes que ser prescriptivo, pero sí específico sobre qué patrones de diseño o micro-interacciones podrían funcionar.

Al final, genera un resumen ejecutivo de una página que pueda presentar al equipo de producto y stakeholders, destacando los tres hallazgos más críticos y las acciones inmediatas recomendadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Extracción de insights de diseño a partir de feedback cualitativo de usuarios',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Extracción de información clave de conversaciones de ventas con IA',
                'description'      => 'Analiza transcripciones de llamadas y reuniones de ventas con NLP para identificar objeciones, señales de compra y próximos pasos automáticamente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas y en análisis de conversaciones comerciales. Tu tarea es ayudarme a extraer información clave de transcripciones de llamadas y reuniones de ventas para mejorar mi proceso comercial.

objetivo: Analizar transcripciones de conversaciones de ventas y extraer automáticamente los elementos más relevantes para el seguimiento y la mejora del proceso.

tarea detallada:

Análisis de la conversación:
Para la transcripción que te proporcione, realiza las siguientes extracciones:

1. Perfil del prospecto detectado:
- Cargo e influencia en la decisión de compra.
- Principales responsabilidades mencionadas.
- Nivel de conocimiento del producto o solución.
- Señales de autoridad presupuestaria.

2. Necesidades y puntos de dolor explícitos e implícitos:
- Lista todas las necesidades expresadas directamente por el prospecto.
- Identifica también necesidades implícitas que se infieren del contexto pero que el prospecto no verbalizó.
- Clasifica cada necesidad como urgente, importante o latente.

3. Objeciones detectadas:
- Transcribe cada objeción literalmente.
- Clasifícala por tipo: precio, tiempo, prioridad, autoridad, necesidad o confianza.
- Indica si fue resuelta durante la llamada y cómo, o si quedó pendiente.

4. Señales de compra:
- Identifica frases que indican interés real: preguntas sobre implementación, plazos, referencias a situaciones concretas donde usarían el producto.
- Califica el nivel de intención de compra al cierre de la conversación: alta, media o baja.

5. Compromisos y próximos pasos:
- Extrae todos los compromisos adquiridos, tanto por el vendedor como por el prospecto.
- Genera una lista de tareas con responsable y fecha si se mencionó alguna.

6. Análisis de la técnica de venta:
- Evalúa si el vendedor usó preguntas abiertas para descubrir necesidades.
- Identifica si se presentaron beneficios o solo características.
- Detecta momentos donde el vendedor perdió el control de la conversación.
- Califica la gestión de objeciones del vendedor.

7. Resumen para el CRM:
Genera un resumen estructurado listo para pegar en el CRM con: empresa, contacto, necesidades principales, objeciones pendientes, nivel de interés, próximos pasos y fecha de seguimiento recomendada.

8. Coaching para el vendedor:
Al final del análisis, genera tres recomendaciones específicas para mejorar el desempeño del vendedor en la próxima conversación con este prospecto o con prospectos similares.

Este análisis debe realizarse de forma objetiva, basado únicamente en lo que aparece en la transcripción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Análisis automático de llamadas de ventas para extracción de insights y coaching',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Clasificación automática de feedback de producto con NLP',
                'description'      => 'Organiza y prioriza cientos de comentarios de usuarios usando IA para identificar patrones, bugs recurrentes y oportunidades de producto de forma sistemática.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con expertise en análisis de voz del cliente y priorización de producto. Necesito tu ayuda para procesar y clasificar grandes volúmenes de feedback de usuarios de forma sistemática.

objetivo principal: Transformar un volumen desordenado de feedback de usuarios (comentarios de app store, respuestas de encuestas NPS, tickets de soporte, menciones en redes) en un mapa estructurado de oportunidades y problemas priorizado para el roadmap.

instrucción de análisis:

Etapa 1 - Taxonomía de clasificación:
Antes de analizar el feedback, define conmigo la taxonomía adecuada para mi producto. Las dimensiones base son:
- Tipo de feedback: reporte de bug, solicitud de feature, queja de UX, elogio, pregunta, sugerencia.
- Área funcional: según los módulos o funcionalidades principales del producto.
- Segmento de usuario: si es posible inferirlo del contexto.
- Urgencia percibida: ¿el usuario expresa que algo bloquea su trabajo o es solo una mejora deseable?

Etapa 2 - Procesamiento del feedback:
Para cada fragmento de feedback que te proporcione, aplica la taxonomía y genera una fila con: texto original, tipo, área funcional, sentimiento, urgencia y una síntesis de una línea.

Etapa 3 - Agrupación por temas:
Agrupa los fragmentos clasificados en temas emergentes. Un tema puede abarcar múltiples tipos de feedback pero se refiere a la misma necesidad o problema subyacente. Por ejemplo, diferentes usuarios pueden reportar un bug, hacer una solicitud de feature y expresar frustración, todos relacionados con el mismo flujo de trabajo.

Etapa 4 - Cuantificación y priorización:
Para cada tema, calcula:
- Frecuencia: número de fragmentos relacionados.
- Impacto estimado: basado en el lenguaje de urgencia y el tipo de feedback.
- Alcance: ¿cuántos segmentos de usuarios distintos lo mencionan?
- Oportunidad de negocio: ¿hay señales de churn, reducción de uso o freno a la adopción?

Con estos datos, genera un ranking de temas por prioridad usando una fórmula ponderada que puedas explicar y ajustar.

Etapa 5 - Fichas de oportunidad:
Para los cinco temas de mayor prioridad, genera una ficha de oportunidad que incluya: descripción del problema, evidencia textual de usuarios reales, hipótesis de solución, métrica de éxito sugerida y nivel de esfuerzo estimado (alto/medio/bajo).

Etapa 6 - Informe ejecutivo:
Genera un informe de una página para presentar al equipo de liderazgo con los hallazgos más importantes, el estado de satisfacción del usuario y las tres acciones inmediatas recomendadas para el próximo sprint.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Procesamiento sistemático de feedback para informar el roadmap de producto',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Análisis de encuestas de clima laboral con procesamiento de lenguaje natural',
                'description'      => 'Extrae insights profundos de las respuestas abiertas de encuestas de clima y engagement usando IA, protegiendo el anonimato de los empleados.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en people analytics y experiencia del empleado. Necesito tu ayuda para analizar las respuestas abiertas de nuestra encuesta de clima laboral usando técnicas de procesamiento del lenguaje natural.

objetivo: Extraer insights accionables de las respuestas cualitativas de la encuesta manteniendo el anonimato de los empleados y evitando sesgos en el análisis.

instrucción para el análisis:

Consideraciones previas sobre privacidad:
Antes de analizar, recuérdame que debo anonimizar los datos eliminando nombres propios, departamentos muy pequeños (menos de 5 personas) y cualquier dato que permita identificar al respondente. Confirma que procesarás solo el texto ya anonimizado.

Análisis de temas y categorías:
Clasifica cada respuesta abierta en las siguientes dimensiones de clima laboral:
- Liderazgo y gestión directa.
- Comunicación organizacional.
- Desarrollo profesional y aprendizaje.
- Reconocimiento y compensación.
- Equilibrio vida-trabajo.
- Cultura e inclusión.
- Colaboración y trabajo en equipo.
- Recursos y herramientas de trabajo.
- Propósito y alineación con los valores de la empresa.

Si aparecen temas no contemplados en estas categorías, crea categorías adicionales y justifica su inclusión.

Análisis de sentimiento y urgencia:
Para cada categoría, determina el sentimiento predominante (positivo, negativo, mixto) y el nivel de urgencia basado en el lenguaje utilizado. Las señales de alta urgencia incluyen menciones de búsqueda activa de empleo, agotamiento extremo, conflictos interpersonales no resueltos o discriminación percibida.

Detección de señales de riesgo:
Identifica y marca como prioritarias las respuestas que contengan señales de riesgo de retención, bienestar comprometido o conflictos que requieran intervención de RRHH. Sin revelar identidades, genera alertas agregadas por departamento o nivel cuando sea posible.

Síntesis por segmentos:
Si tengo datos de segmentación (antigüedad, nivel jerárquico, modalidad de trabajo), ayúdame a comparar los resultados entre segmentos para detectar diferencias significativas.

Plan de acción:
Para los tres temas de mayor preocupación, genera un plan de acción con: descripción del problema, acciones inmediatas posibles (primeros 30 días), acciones estructurales (90 días) y métricas para medir la mejora en la siguiente encuesta.

Comunicación de resultados:
Ayúdame a redactar el mensaje que compartiremos con toda la empresa resumiendo los hallazgos y los compromisos de acción. El tono debe ser transparente, empático y orientado a la mejora continua.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Análisis de respuestas abiertas de encuestas de clima para planes de acción de RRHH',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Extracción automática de datos de documentos financieros con IA',
                'description'      => 'Usa IA para extraer, estructurar y validar información clave de estados financieros, contratos y reportes, reduciendo el tiempo de análisis documental.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero con experiencia en procesamiento documental y automatización. Necesito que me ayudes a extraer información estructurada de documentos financieros no estandarizados usando técnicas de NLP.

objetivo: Desarrollar un proceso sistemático para extraer datos clave de estados financieros, reportes de gestión, propuestas de crédito y contratos financieros, transformándolos en datos estructurados listos para análisis.

instrucción detallada:

Paso 1 - Identificación del tipo de documento:
Para cada documento que te proporcione, primero identifica su tipo (estado de resultados, balance general, flujo de caja, reporte de gestión, prospecto de inversión, contrato de crédito u otro) y la jurisdicción contable aplicable (NIIF, GAAP u otro estándar local).

Paso 2 - Extracción de datos financieros clave:
Según el tipo de documento, extrae las métricas relevantes. Para estados financieros incluye: ingresos, EBITDA, utilidad neta, activos totales, pasivos, patrimonio, flujo operativo, capex y deuda neta. Para contratos financieros incluye: partes, monto, tasa, plazo, garantías, covenants y condiciones de incumplimiento.

Paso 3 - Normalización y estandarización:
Convierte todos los valores al mismo formato: moneda (señala si hay conversión necesaria), período de tiempo (anual, trimestral), y nomenclatura estándar. Si el documento usa términos no estándar para referirse a una métrica conocida, mapéalo a la denominación estándar.

Paso 4 - Detección de inconsistencias y alertas:
Verifica la coherencia interna del documento. Señala inconsistencias matemáticas, períodos que no coinciden, métricas que cambian de definición entre secciones, notas al pie que modifican significativamente las cifras del cuerpo principal, o ausencia de información que debería estar presente.

Paso 5 - Generación de tabla estructurada:
Produce una tabla con las métricas extraídas, lista para importar en Excel o una base de datos. Incluye columnas para: nombre de la métrica, valor, unidad, período, fuente dentro del documento y nivel de confianza de la extracción (alto, medio, bajo según la claridad del documento).

Paso 6 - Resumen narrativo:
Genera un resumen en lenguaje natural de máximo tres párrafos describiendo la situación financiera reflejada en el documento, los aspectos más relevantes para la toma de decisiones y las áreas que requieren mayor investigación o documentación adicional.

Paso 7 - Preguntas de seguimiento:
Lista las cinco preguntas más importantes que deberían hacerse al emisor del documento para aclarar ambigüedades, completar información faltante o verificar supuestos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Extracción y estructuración automática de datos de documentos financieros complejos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Análisis y resumen de contratos legales con procesamiento de lenguaje natural',
                'description'      => 'Acelera la revisión de contratos usando IA para identificar cláusulas críticas, riesgos y obligaciones clave, reduciendo el tiempo de due diligence legal.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especialista en derecho contractual con experiencia en revisión masiva de documentos legales. Necesito que me ayudes a analizar contratos usando técnicas de procesamiento del lenguaje natural para acelerar el proceso de revisión.

objetivo: Revisar contratos legales de forma sistemática, extrayendo las cláusulas más relevantes, identificando riesgos potenciales y generando resúmenes ejecutivos para la toma de decisiones.

Advertencia importante: Este análisis es un apoyo al trabajo del abogado, no un sustituto del criterio jurídico profesional. Toda conclusión debe ser validada por un profesional licenciado.

instrucción de análisis:

Paso 1 - Identificación y contexto:
Para cada contrato, identifica: tipo de contrato, partes intervinientes y sus roles, jurisdicción aplicable, fecha de firma y vigencia, objeto del contrato en una línea, y si existe alguna ley o regulación específica que rija el acuerdo.

Paso 2 - Extracción de cláusulas críticas:
Localiza y transcribe las cláusulas relacionadas con: obligaciones de cada parte, plazos y condiciones de renovación o terminación, régimen de responsabilidad y limitaciones de liability, garantías y representaciones, causales de incumplimiento y sus consecuencias, cláusulas de confidencialidad y no competencia, mecanismos de resolución de disputas y jurisdicción, y cláusulas de fuerza mayor.

Paso 3 - Identificación de riesgos:
Para cada cláusula crítica, evalúa el riesgo potencial para mi cliente. Clasifica cada riesgo como: alto (puede generar pérdidas significativas o litigios), medio (requiere negociación o aclaración) o bajo (estándar de mercado, riesgo mínimo). Explica brevemente por qué cada cláusula representa el nivel de riesgo asignado.

Paso 4 - Comparación con estándares de mercado:
Señala qué cláusulas se desvían significativamente de lo que se considera estándar en este tipo de contratos. Indica si la desviación beneficia o perjudica a mi cliente.

Paso 5 - Resumen ejecutivo:
Genera un resumen de máximo una página con: objeto del contrato, principales obligaciones de mi cliente, principales obligaciones de la contraparte, los tres riesgos más relevantes y las cláusulas a negociar antes de firmar.

Paso 6 - Lista de puntos de negociación:
Genera una lista priorizada de los cambios que debería solicitar a la contraparte, con la justificación de cada uno y el lenguaje sugerido como alternativa.

Paso 7 - Preguntas para el cliente:
Lista las preguntas que debo hacer a mi cliente para entender mejor el contexto del negocio y poder asesorarlo correctamente sobre los riesgos identificados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Revisión sistemática de contratos para identificar riesgos y puntos de negociación',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Clasificación y enrutamiento automático de tickets de soporte con IA',
                'description'      => 'Implementa un sistema de clasificación inteligente de tickets que prioriza, categoriza y enruta automáticamente las solicitudes de soporte usando procesamiento del lenguaje natural.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en operaciones de servicio al cliente y sistemas de soporte técnico. Necesito tu ayuda para diseñar e implementar un sistema de clasificación automática de tickets de soporte usando NLP.

objetivo: Crear un proceso que tome el texto libre de cada ticket entrante y lo procese automáticamente para clasificarlo, priorizarlo y enrutarlo al equipo correcto, reduciendo el tiempo de respuesta y mejorando la eficiencia del equipo.

instrucción completa:

Diseño de la taxonomía de clasificación:
Ayúdame a definir la taxonomía de clasificación de tickets para mi contexto. Las dimensiones que necesito clasificar son:
- Categoría principal: tipo de problema (técnico, facturación, cuenta, información, retroalimentación).
- Subcategoría: área específica dentro de la categoría.
- Prioridad: crítica, alta, media o baja, basada en el impacto en el negocio del cliente.
- Equipo de destino: según las categorías anteriores y las competencias de cada equipo.
- Sentimiento del cliente: para identificar clientes en riesgo de abandono.

Criterios de priorización automática:
Define las reglas de priorización basadas en señales lingüísticas. Los criterios de prioridad crítica incluyen: menciones de pérdida de datos, impacto en producción, pérdida de acceso total, menciones de regulaciones o compliance, o clientes de alto valor (si tengo esa información en el contexto). Explica cómo detectar cada señal en el texto libre.

Generación de respuestas automáticas iniciales:
Para los tipos de tickets más frecuentes, genera plantillas de respuesta automática que: confirmen la recepción del ticket, establezcan expectativas de tiempo de respuesta según la prioridad, soliciten información adicional si es necesaria para resolver el problema, y tengan un tono empático y profesional.

Detección de duplicados y tickets relacionados:
Explica cómo identificar tickets que están reportando el mismo problema, para agruparlos y responder de forma masiva cuando se resuelva el problema raíz. ¿Qué similitudes textuales debo buscar?

Extracción de información estructurada:
Para cada ticket, extrae automáticamente: nombre del cliente si lo menciona, producto o servicio afectado, descripción técnica del problema en una línea, pasos ya intentados por el cliente, y urgencia percibida.

Métricas y mejora continua:
Define las métricas clave para evaluar la calidad de la clasificación automática. ¿Cómo mido la precisión del enrutamiento? ¿Cómo retroalimento el sistema con las correcciones manuales del equipo? ¿Qué umbrales de confianza debo usar para intervención humana?

Implementación práctica:
Genera el pseudocódigo o las instrucciones de configuración para implementar este sistema usando las herramientas de mi plataforma de ticketing (Zendesk, Freshdesk, Intercom u otra que me indiques según mi contexto).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Automatización del clasificación y enrutamiento de tickets para equipos de soporte',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Servicios de análisis de texto con IA para ofrecer a clientes como freelancer',
                'description'      => 'Diseña y monetiza servicios de análisis de texto y NLP que puedes ofrecer como freelancer, desde la propuesta hasta la entrega de resultados.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en inteligencia artificial aplicada y procesamiento del lenguaje natural. Necesito tu ayuda para diseñar un portafolio de servicios de análisis de texto que pueda ofrecer a empresas como freelancer.

objetivo: Crear un catálogo de servicios de análisis de texto con IA, con propuestas de valor claras, metodologías de entrega y estrategias de precio que me permitan posicionarme y captar clientes.

instrucción para desarrollar mi oferta:

Identificación de servicios de alto valor:
Ayúdame a identificar los servicios de análisis de texto con mayor demanda en el mercado actual. Para cada servicio, describe: el problema de negocio que resuelve, el tipo de cliente que más lo necesita, el valor cuantificable que genera (ahorro de tiempo, mejora de métricas, reducción de errores) y el nivel de complejidad técnica requerido.

Los servicios base a desarrollar son:
1. Análisis de sentimiento de marca en redes sociales y reseñas.
2. Extracción y estructuración de información de documentos no estandarizados.
3. Clasificación automática de contenido para sistemas de gestión.
4. Resumen automático de informes, actas y documentos extensos.
5. Análisis de voz del cliente a partir de encuestas y comentarios.

Diseño de la metodología de entrega:
Para cada servicio, define el proceso de entrega en fases: Discovery (entender el problema y los datos del cliente), Análisis (procesamiento y generación de resultados), Presentación (informe y recomendaciones) y Seguimiento (soporte post-entrega). Indica el tiempo estimado para cada fase.

Estrategia de precios:
Ayúdame a definir tres modelos de precio para cada servicio: por proyecto cerrado (precio fijo), por volumen (precio por documento o registro procesado), y retainer mensual (análisis continuo). Incluye rangos de precio orientativos para el mercado hispanohablante.

Propuestas de valor por industria:
Para los cinco sectores con mayor demanda (retail, finanzas, salud, tecnología y servicios profesionales), adapta el mensaje de venta de mis servicios de análisis de texto. ¿Cuáles son los KPIs que más les importan y cómo mis servicios los impactan directamente?

Plantilla de propuesta comercial:
Genera una plantilla de propuesta para un cliente tipo que incluya: descripción del problema, solución propuesta, metodología, entregables, cronograma, inversión requerida y próximos pasos. La propuesta debe estar en lenguaje de negocio, no técnico.

Gestión de objeciones comunes:
¿Qué objeciones frecuentes encuentro como freelancer al vender servicios de IA? Para cada objeción (precio, confianza en la IA, privacidad de datos, dependencia del proveedor), dame una respuesta estructurada que transmita confianza y profesionalismo.

Diferenciación y posicionamiento:
¿Cómo me diferencio en un mercado donde cada vez más herramientas ofrecen análisis automático? Ayúdame a construir mi propuesta única de valor que combine el poder de la IA con mi criterio profesional y conocimiento del sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de portafolio de servicios de análisis de texto con IA para freelancers',
                'vote_score'       => 35,
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
