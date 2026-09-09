<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills154Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing predictivo con ML',
                'description'       => 'Modelos de propensión, scoring de leads y las predicciones que permiten al equipo de marketing actuar antes de que el cliente tome la decisión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en marketing predictivo con experiencia en machine learning aplicado a CRM y campañas de captación. Voy a darte información sobre mi empresa, mis datos disponibles y mis objetivos de marketing, y necesito que me ayudes a diseñar una estrategia de marketing predictivo basada en modelos de propensión y scoring de leads.

**Contexto que debes pedirme si no lo proporciono:**
- Sector e industria de la empresa
- Tamaño de la base de datos de clientes y prospectos
- Herramientas de CRM y automatización de marketing disponibles
- Objetivo principal: adquisición, retención, upsell o churn prevention
- Capacidad técnica del equipo (analistas, data scientists, marketers)

**Parte 1 — Diagnóstico de datos y madurez analítica**

Antes de diseñar cualquier modelo, evalúa conmigo el estado de nuestros datos:
- ¿Qué variables históricas tenemos disponibles? (comportamiento web, emails abiertos, transacciones, soporte, datos firmográficos)
- ¿Cuál es la calidad y completitud de esos datos? ¿Hay sesgo de supervivencia o variables con demasiados nulos?
- ¿Tenemos etiquetas claras para entrenar el modelo? (conversiones históricas, churns confirmados, upsells realizados)
- ¿Cuál es el balance entre clases positivas y negativas en nuestro dataset?

Identifica los tres principales riesgos de calidad de datos que podrían invalidar el modelo antes de entrenarlo.

**Parte 2 — Diseño del modelo de propensión**

Diseña el enfoque técnico del modelo adaptado a nuestra madurez:

Para equipos sin data scientist: explica cómo construir un modelo de propensión con herramientas no-code o low-code (HubSpot predictive scoring, Salesforce Einstein, Google Looker ML) y cuáles son sus limitaciones.

Para equipos con capacidad técnica: recomienda el algoritmo más adecuado según el caso de uso (logistic regression como baseline interpretable, gradient boosting para mayor precisión, redes neuronales solo si el volumen lo justifica). Explica por qué cada algoritmo encaja o no encaja con datos de CRM.

En ambos casos, define:
- Las features más predictivas habituales en modelos de propensión B2B y B2C
- Cómo construir features de comportamiento temporal (recencia, frecuencia, tendencia)
- Cómo evitar data leakage en el entrenamiento
- Métricas de evaluación del modelo: AUC-ROC, precision-recall, lift curve, y cuál priorizar según el objetivo

**Parte 3 — Lead scoring operativo**

Transforma el modelo en un sistema de scoring que el equipo de marketing pueda usar a diario:
- Define los umbrales de score para segmentar leads en: frío, tibio, caliente, ready-to-buy
- Diseña las acciones de marketing automatizadas para cada segmento (contenido, cadencia, canal)
- Explica cómo el score debe cambiar en tiempo real a medida que el lead interactúa con la marca
- Crea el protocolo de handoff entre marketing y ventas basado en el score: qué señal activa el traspaso y qué información debe acompañar al lead

**Parte 4 — Actuar antes que el cliente decida**

El verdadero valor del marketing predictivo está en intervenir en el momento correcto:
- Identifica los eventos de comportamiento que preceden a una conversión (leading indicators) y los que preceden a un churn
- Diseña ventanas de intervención: cuántos días antes de la decisión esperada debe activarse cada campaña
- Explica cómo calcular el valor esperado de cada intervención para priorizar presupuesto
- Propón un A/B test para validar que el modelo genera ROI real frente a campañas no segmentadas

**Parte 5 — Mantenimiento y evolución del modelo**

Un modelo que no se actualiza se degrada:
- Define la frecuencia de re-entrenamiento según la velocidad de cambio del negocio
- Explica cómo detectar que el modelo ha perdido precisión (concept drift, distribution shift)
- Diseña el dashboard de monitorización del modelo con las métricas que el equipo de marketing debe revisar semanalmente
- Propón el roadmap para evolucionar de un modelo único a modelos por segmento, canal o etapa del funnel

Termina con las tres acciones concretas que puedo ejecutar esta semana para empezar a implementar marketing predictivo con los recursos que ya tengo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar modelos de propensión y lead scoring para anticipar decisiones de compra',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'MLOps y deploy de modelos en producción',
                'description'       => 'Lleva modelos de ML desde Jupyter a producción: pipelines, monitorización, drift detection y las prácticas que separan los proyectos que funcionan de los que mueren en el notebook.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un ingeniero de MLOps con experiencia en llevar modelos de machine learning desde la fase de experimentación hasta sistemas en producción que generan valor real. Voy a compartirte información sobre mi modelo y mi infraestructura, y necesito que me guíes en el proceso completo de productivización.

**Información que debes pedirme si no la proporciono:**
- Tipo de modelo (clasificación, regresión, NLP, visión, recomendación)
- Framework de entrenamiento (scikit-learn, PyTorch, TensorFlow, XGBoost, Hugging Face)
- Infraestructura disponible (AWS, GCP, Azure, on-premise, Kubernetes)
- Volumen de predicciones esperado (batch vs. real-time)
- Latencia máxima aceptable en producción
- Tamaño y composición del equipo de datos

**Parte 1 — Evaluación de readiness para producción**

Antes de desplegar, diagnostica si el modelo está listo:
- ¿El código de entrenamiento es reproducible? (seeds fijados, entornos versionados, datos versionados con DVC o similar)
- ¿El modelo tiene documentación de sus limitaciones conocidas, sesgos identificados y casos de fallo documentados?
- ¿Existe un baseline de métricas offline contra el que comparar en producción?
- ¿El modelo ha sido evaluado en datos de producción reales o solo en test sets históricos?

Proporciona un checklist de readiness de 15 puntos que mi equipo debe revisar antes de cualquier despliegue.

**Parte 2 — Arquitectura del pipeline de ML**

Diseña la arquitectura de pipeline adaptada a mi caso de uso:
- Pipeline de feature engineering reproducible (no transformaciones en notebooks, sino código versionado)
- Cómo separar las features que se calculan en entrenamiento de las que se calculan en inferencia para evitar training-serving skew
- Formato de serialización del modelo: pickle vs. ONNX vs. TorchScript vs. SavedModel, y cuándo usar cada uno
- Estrategia de versionado de modelos: MLflow, Weights & Biases, o solución propia en S3/GCS

Para batch inference: arquitectura de job programado, manejo de errores y reintentos, logging de predicciones para auditabilidad.
Para real-time inference: API REST con FastAPI o Flask, contenedorización con Docker, estrategia de escalado.

**Parte 3 — Deploy y orquestación**

Guía el proceso de despliegue paso a paso:
- Construcción de imagen Docker reproducible: base image, dependencias fijas, entrypoint
- Estrategia de despliegue: blue-green, canary release, shadow mode
- Configuración del endpoint de inferencia: input validation, output schema, manejo de errores y timeouts
- Integración con el sistema que consume las predicciones: cómo evitar acoplamiento fuerte

Explica cuándo tiene sentido usar servicios gestionados (SageMaker, Vertex AI, Azure ML) versus infraestructura propia, y el coste oculto de cada opción.

**Parte 4 — Monitorización y drift detection**

Un modelo en producción sin monitorización es una bomba de tiempo:
- Define las métricas que monitorizarías: data drift, concept drift, degradación de métricas de negocio
- Explica la diferencia entre input drift (los datos de entrada cambian) y label drift (la relación entre features y target cambia)
- Diseña el sistema de alertas: umbrales, frecuencia de chequeo, responsables de cada alerta
- Propón herramientas concretas para monitorización: Evidently, Whylogs, Arize, Grafana con métricas custom

Diseña el dashboard de monitorización con las cinco métricas más importantes que el equipo debe revisar cada semana.

**Parte 5 — Retraining y mejora continua**

- Define la estrategia de retraining: disparado por degradación de métricas vs. programado periódicamente
- Diseña el pipeline de retraining automático y los gates de calidad antes de reemplazar el modelo en producción
- Explica cómo gestionar el dataset de entrenamiento creciente: full retrain vs. fine-tuning vs. continual learning
- Propón la estructura de un experiment tracking que permita comparar experimentos de forma reproducible

Termina con el plan de implementación en cuatro fases para los próximos tres meses, con los entregables concretos de cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar la arquitectura MLOps para llevar modelos de Jupyter a producción con monitorización',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de sistemas de IA explicables',
                'description'       => 'Cuando el producto usa IA, el diseñador debe comunicar la incertidumbre, el error y la confianza: los patrones de UI para hacer la IA transparente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de producto especializado en interfaces de inteligencia artificial explicable (XAI). Voy a compartirte información sobre un producto que incorpora IA, y necesito que me ayudes a diseñar los patrones de interfaz que comuniquen de forma honesta y útil cómo funciona la IA, cuándo se equivoca y cuánto se puede confiar en sus predicciones.

**Contexto que debes pedirme si no lo proporciono:**
- Qué hace la IA en el producto (clasifica, recomienda, predice, genera contenido, detecta anomalías)
- Quién es el usuario final (experto de dominio, usuario no técnico, operador, consumidor)
- Cuáles son las consecuencias de un error de la IA (bajo riesgo vs. alto riesgo: diagnóstico médico, decisión de crédito, moderación de contenido)
- Qué explicaciones puede generar el modelo técnico (feature importance, contrafactuales, ejemplos similares)
- En qué plataforma se usa el producto (web, móvil, herramienta interna)

**Parte 1 — Principios de diseño para IA transparente**

Define los principios que deben guiar el diseño de interfaces de IA explicable:
- Calibración de confianza: cómo mostrar el nivel de certeza del modelo sin generar ni exceso de confianza ni parálisis por incertidumbre
- Honestidad sobre los errores: cuándo y cómo comunicar que la IA puede equivocarse sin destruir la confianza del usuario
- Explicaciones adecuadas al contexto: una explicación para un médico es diferente de una para un paciente; diseña para la audiencia correcta
- Control del usuario: dónde dar al usuario la posibilidad de rechazar, corregir o sobreescribir la recomendación de la IA

**Parte 2 — Patrones de UI para comunicar incertidumbre**

Diseña los patrones visuales concretos para cada tipo de incertidumbre:

Incertidumbre cuantitativa: barras de confianza, rangos de predicción, intervalos de credibilidad. Cuándo usar porcentajes vs. descriptores cualitativos (alta/media/baja confianza). Los peligros de mostrar porcentajes de precisión que el usuario interpreta como probabilidad.

Incertidumbre cualitativa: cuando el modelo no sabe que no sabe (out-of-distribution inputs). Cómo detectar y mostrar cuando el modelo está operando fuera de su distribución de entrenamiento.

Comunicación de riesgo: semáforos, gradientes de color, iconografía de alerta. Cómo evitar el sesgo de automatización donde el usuario acepta la recomendación sin leerla.

**Parte 3 — Patrones de explicación**

Diseña los componentes de UI para cada tipo de explicación:
- Explicaciones por feature importance: cómo traducir un SHAP plot o un LIME output en una explicación legible para no técnicos
- Explicaciones contrafactuales: "si X hubiera sido diferente, el resultado habría cambiado". Cómo presentar contrafactuales de forma accionable
- Explicaciones por ejemplos similares: mostrar casos históricos parecidos para contextualizar la predicción actual
- Explicaciones globales vs. locales: cuándo mostrar cómo funciona el modelo en general vs. por qué tomó esta decisión concreta

Para cada tipo, proporciona la descripción del componente de UI, el caso de uso donde funciona mejor y las variantes para usuarios expertos vs. no expertos.

**Parte 4 — Diseño para sistemas de alto riesgo**

Cuando un error de la IA tiene consecuencias graves, el diseño debe ser especialmente cuidadoso:
- Human-in-the-loop: cómo diseñar flujos donde la IA propone y el humano aprueba, sin crear rubber-stamping
- Audit trail: qué información guardar y cómo presentarla para que sea auditable la decisión de la IA y la del humano
- Diseño para el rechazo: cómo hacer que rechazar una recomendación de la IA sea tan fácil como aceptarla
- Comunicación de limitaciones conocidas: los disclaimers que el usuario debe ver antes de usar la IA en contextos de alto riesgo

**Parte 5 — Testing y validación del diseño explicable**

Un diseño de XAI que no reduce el error del usuario no cumple su función:
- Diseña el protocolo de test de usuario para validar que las explicaciones mejoran las decisiones
- Métricas de efectividad del diseño explicable: ¿el usuario toma mejores decisiones? ¿Confía menos en predicciones incorrectas?
- Cómo iterar las explicaciones basándote en datos de uso real
- Propón tres tests A/B concretos para comparar variantes de diseño de explicaciones

Termina con las cinco decisiones de diseño más importantes que debo tomar antes de empezar a prototipar la interfaz de IA explicable para mi producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar patrones de UI para comunicar incertidumbre, confianza y explicabilidad de la IA',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Demos de productos de IA',
                'description'       => 'Presenta productos de IA a compradores no técnicos: cómo mostrar el valor, gestionar las expectativas y cerrar cuando el cliente tiene miedo al "efecto caja negra".',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en ventas de tecnología con experiencia en demos de productos de inteligencia artificial para compradores no técnicos. Voy a compartirte información sobre mi producto de IA y el perfil del comprador, y necesito que me ayudes a diseñar una demo que genere confianza, muestre valor real y supere las objeciones relacionadas con la caja negra y el miedo a la IA.

**Información que debes pedirme si no la proporciono:**
- Qué hace tu producto de IA (automatización, predicción, generación de contenido, clasificación, detección de anomalías)
- Perfil del comprador: rol, sector, nivel técnico, preocupaciones habituales
- Duración disponible para la demo (15 min, 30 min, 60 min)
- Si es una primera demo o una demo técnica de segundo paso
- Los competidores o alternativas que el comprador suele comparar

**Parte 1 — Estrategia de demo para productos de IA**

Los productos de IA tienen características únicas que hacen que las demos estándar fallen:
- El comprador no entiende cómo funciona la IA y eso genera desconfianza
- Las demos de IA suelen mostrar el mejor caso, creando expectativas que la realidad no cumple
- El miedo a "perder el control" o a que "la IA decida por nosotros" bloquea muchas ventas

Define el principio rector de la demo: mostrar valor de negocio tangible antes de explicar cómo funciona la tecnología. La secuencia correcta no es "esto es lo que hace nuestra IA" sino "este es el problema que tienes, y así lo resolvemos".

**Parte 2 — Estructura de la demo de 30 minutos**

Diseña la estructura completa de una demo de 30 minutos:

Minutos 1-5 — Anclaje en el dolor: empieza con el problema del comprador, no con tu producto. Usa datos del sector o de la empresa del comprador para hacer el dolor concreto y cuantificado.

Minutos 6-20 — Demo del producto: muestra el flujo de trabajo, no las funcionalidades. El comprador debe verse a sí mismo usando el producto. Incluye un momento "wow" que demuestre la capacidad diferencial de la IA.

Minutos 21-25 — Prueba de valor: muestra resultados reales de clientes similares. Conecta el output de la demo con una métrica de negocio que el comprador reconozca (tiempo ahorrado, ingresos generados, errores evitados).

Minutos 26-30 — Preguntas y cierre: guía las preguntas hacia el proceso de decisión, no hacia los detalles técnicos.

**Parte 3 — Superar el miedo a la caja negra**

Las objeciones más comunes en demos de IA y cómo responderlas:
- "¿Cómo sé que la IA no se equivoca?" — No digas que no se equivoca. Muestra cómo el sistema indica cuándo no está seguro y cómo el humano mantiene el control.
- "¿Cómo puedo explicar esto a mi jefe/consejo/regulador?" — Prepara el material que el comprador puede usar para hacer la venta interna.
- "¿Qué pasa con nuestros datos?" — Ten preparada la respuesta sobre privacidad, seguridad y dónde se procesan los datos antes de que pregunten.
- "Ya tenemos [solución manual/competidor]" — Cuantifica el coste de oportunidad de no cambiar, no el coste de tu solución.

Para cada objeción, proporciona: la respuesta verbal, el recurso visual que la apoya, y cómo redirigir la conversación hacia el valor.

**Parte 4 — Demo engineering**

El entorno técnico de la demo importa tanto como el guión:
- Usa datos del sector o de la empresa del comprador, no datos genéricos
- Ten preparados tres escenarios: el caso ideal, el caso con error gestionado correctamente, y el caso donde la IA expresa incertidumbre
- Nunca hagas una demo con datos de producción reales de otro cliente
- Prepara el fallback: qué dices si la demo falla en directo

**Parte 5 — Seguimiento post-demo**

La demo abre la puerta; el seguimiento la cierra:
- Diseña el email de seguimiento que llega en las dos horas siguientes a la demo
- Crea el one-pager que el comprador puede compartir internamente con el resumen del valor demostrado
- Define los siguientes pasos concretos que debes proponer al final de la demo para mantener el momentum

Termina con el guión completo de apertura de la demo (primeros 3 minutos) adaptado al perfil del comprador que me hayas describir.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar y ejecutar demos de productos de IA que generan confianza y superan objeciones',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Evaluación de LLMs para producto',
                'description'       => 'Cómo elegir el modelo correcto para tu caso de uso: benchmarks, latencia, coste, contexto y las dimensiones que importan para cada tipo de aplicación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager especializado en inteligencia artificial con experiencia evaluando y seleccionando Large Language Models para productos en producción. Voy a describirte mi caso de uso y mis restricciones, y necesito que me ayudes a tomar una decisión fundamentada sobre qué modelo utilizar.

**Información que debes pedirme si no la proporciono:**
- Caso de uso específico (generación de texto, Q&A, extracción de información, clasificación, código, razonamiento, conversación)
- Volumen de llamadas esperado (diario, mensual)
- Latencia máxima aceptable para el usuario final
- Presupuesto mensual disponible para el modelo
- Necesidades de privacidad y localización de datos
- Si se necesita fine-tuning o el modelo base es suficiente
- Contexto de ventana necesario (documentos cortos, largos, muy largos)

**Parte 1 — Framework de evaluación multidimensional**

No existe el modelo perfecto; existe el modelo más adecuado para cada caso. Define las dimensiones de evaluación en orden de prioridad para mi caso de uso:

Calidad del output: ¿Qué significa "bueno" para mi caso de uso? Define las métricas de calidad específicas: accuracy en extracción, coherencia en generación, seguimiento de instrucciones, capacidad de razonamiento. No uses benchmarks genéricos; diseña la evaluación sobre tus datos reales.

Coste total: calcula el coste por 1.000 llamadas considerando tokens de entrada, tokens de salida y el ratio habitual de tu caso de uso. Incluye el coste de las llamadas fallidas, los reintentos y el overhead de prompts del sistema. El coste que aparece en la documentación es el coste mínimo; el coste real siempre es mayor.

Latencia: p50, p95 y p99 importan más que la latencia media. Un modelo rápido en promedio pero con colas ocasionales de 10 segundos destruye la experiencia de usuario. Diseña el test de latencia bajo carga, no solo en condiciones ideales.

Contexto de ventana: cuántos tokens de contexto necesita tu caso de uso de verdad, y cómo degradan los modelos cuando se acercan al límite de contexto.

**Parte 2 — Comparativa práctica de modelos**

Diseña un framework de comparativa adaptado a mi caso de uso concreto:
- Cómo construir un golden dataset de evaluación: mínimo 50 casos representativos del problema real, incluyendo casos edge
- Cómo hacer la evaluación reproducible: prompts fijos, temperatura fija, versión de API fija
- Cómo evaluar outputs sin ground truth obvio: LLM-as-judge, evaluación humana, métricas híbridas
- Cómo comparar modelos de forma estadísticamente válida: intervalos de confianza, tamaño de muestra suficiente

Para mi caso de uso, propón los tres modelos más relevantes a comparar y el criterio de desempate si los resultados son similares.

**Parte 3 — Decisión de arquitectura**

La elección del modelo es solo una parte de la decisión arquitectónica:
- Modelo único vs. routing: cuándo tiene sentido usar un modelo barato para el 80% de casos y un modelo potente para el 20% más complejo
- Modelos especializados vs. modelos generales: cuándo el fine-tuning o un modelo especializado supera al modelo general más potente
- API vs. modelo propio: cuándo el volumen o las restricciones de privacidad justifican desplegar un modelo open-source (Llama, Mistral, Qwen) en infraestructura propia
- Modelos multimodales: cuándo incorporar capacidades de visión o audio aunque el caso de uso principal sea texto

**Parte 4 — Evaluación de factores no técnicos**

La decisión técnica nunca es solo técnica:
- Estabilidad del proveedor: dependencia de un proveedor único, riesgo de cambios de precio o deprecación de modelos
- Compliance y privacidad: dónde se procesan los datos, términos de uso del modelo para fine-tuning, retención de datos por el proveedor
- Velocidad de iteración: qué tan fácil es cambiar de modelo si el elegido no rinde como esperabas
- Ecosistema: disponibilidad de SDKs, integraciones, documentación y comunidad de soporte

**Parte 5 — Plan de evaluación en dos semanas**

Diseña el plan concreto para tomar la decisión en dos semanas:
- Semana 1: construcción del dataset de evaluación y primeras pruebas cualitativas
- Semana 2: evaluación cuantitativa, test de latencia bajo carga, cálculo de coste real

Termina con la matriz de decisión en formato tabla que puedo completar con los resultados de mi evaluación para tomar la decisión final con datos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Comparar y seleccionar el LLM más adecuado para un caso de uso de producto específico',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Upskilling de IA en la empresa',
                'description'       => 'Diseña el programa de formación en IA para empleados no técnicos: qué enseñar, en qué orden y cómo medir que la formación se traduce en cambios reales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en learning & development con experiencia en programas de transformación digital y upskilling en inteligencia artificial para organizaciones no tecnológicas. Voy a darte información sobre mi empresa y mi objetivo de formación, y necesito que me ayudes a diseñar un programa de upskilling en IA que genere cambios reales en el comportamiento de los empleados.

**Contexto que debes pedirme si no lo proporciono:**
- Sector y tamaño de la empresa
- Perfil de los empleados a formar (funciones, nivel de educación, relación previa con tecnología)
- Objetivo principal: productividad individual, adopción de herramientas corporativas de IA, innovación, o preparación para transformación digital
- Recursos disponibles: presupuesto, formadores internos, plataforma de LMS, tiempo liberado para formación
- Nivel de apoyo de la dirección y urgencia percibida

**Parte 1 — Diagnóstico de punto de partida**

Antes de diseñar el programa, necesito entender dónde está la organización:
- Diseña una encuesta de diagnóstico de 10 preguntas para medir el nivel actual de conocimiento y uso de IA de los empleados
- Define los perfiles de madurez: desde "nunca he usado una herramienta de IA" hasta "uso IA a diario en mi trabajo"
- Identifica las barreras más habituales para la adopción: miedo a perder el empleo, desconfianza en los resultados, falta de tiempo, no saber qué herramienta usar
- Propón cómo segmentar a los empleados para ofrecer formación diferenciada

**Parte 2 — Estructura del programa de formación**

Diseña el currículo en tres niveles progresivos:

Nivel 1 — Fundamentos (todos los empleados, 4 horas totales): qué es la IA y qué no es; los mitos más dañinos sobre la IA en el trabajo; cómo usar un asistente de IA para tareas básicas; los riesgos de privacidad y seguridad que deben conocer.

Nivel 2 — Aplicación práctica por función (segmentado por departamento, 8 horas): los casos de uso de IA más relevantes para cada función (marketing, finanzas, RRHH, operaciones); cómo evaluar la calidad del output de la IA; cuándo confiar en la IA y cuándo verificar manualmente; prompting básico para obtener mejores resultados.

Nivel 3 — Champions de IA (20% de los empleados más avanzados, 16 horas): prompting avanzado; flujos de trabajo de IA para automatizar tareas repetitivas; cómo evaluar nuevas herramientas de IA; rol del champion como referente interno.

**Parte 3 — Metodología de formación que genera cambio real**

La mayoría de programas de upskilling no cambian el comportamiento porque la formación no conecta con el trabajo real:
- Diseña cada módulo con el formato: concepto (20%) + demostración (30%) + práctica guiada con casos reales del trabajo del empleado (50%)
- Explica cómo usar el aprendizaje situado: el empleado aprende a usar la IA resolviendo un problema real de su semana, no un caso genérico
- Propón el sistema de seguimiento en las dos semanas siguientes a la formación: check-in, micro-retos, canal de dudas
- Define el rol del manager en el refuerzo del aprendizaje: qué debe hacer el manager antes, durante y después de la formación de su equipo

**Parte 4 — Métricas de impacto real**

Una formación en IA que no cambia el comportamiento es dinero perdido:
- Define las métricas de adopción: porcentaje de empleados que usan IA al menos una vez por semana después de la formación
- Define las métricas de productividad: tiempo ahorrado en tareas específicas, calidad del output en tareas que usan IA
- Diseña el proceso de medición: cómo recoger datos de uso sin ser invasivos, cómo hacer el before/after
- Propón los hitos de seguimiento a 30, 60 y 90 días post-formación

**Parte 5 — Plan de lanzamiento y comunicación**

El programa de formación más bien diseñado fracasa si el lanzamiento no genera ilusión:
- Diseña la campaña de comunicación interna para el lanzamiento del programa
- Explica cómo conseguir el apoyo visible de la dirección sin que parezca un decreto de arriba
- Propón los quick wins que permitan mostrar resultados en las primeras cuatro semanas
- Define cómo construir la comunidad interna de usuarios de IA que sostenga la adopción después de la formación

Termina con el calendario de implementación del programa para los primeros tres meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar programa de formación en IA para empleados no técnicos con métricas de impacto',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis financiero con IA',
                'description'       => 'Usa IA para análisis de estados financieros, detección de anomalías contables y los casos de uso donde la IA ya supera al analista humano.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista financiero senior con experiencia en aplicar inteligencia artificial al análisis de estados financieros, detección de anomalías y valoración de empresas. Voy a compartirte información sobre el análisis financiero que necesito realizar, y quiero que me guíes en cómo usar IA de forma efectiva para obtener insights que un análisis manual tardaría días en producir.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de análisis: valoración de empresa, due diligence financiera, análisis de competidores, auditoría interna, planificación financiera
- Tipo de empresa: startup, PYME, empresa cotizada, empresa privada
- Estados financieros disponibles: P&L, balance, flujo de caja, ¿cuántos años históricos?
- Objetivo del análisis: inversión, compra, venta, crédito, reestructuración
- Nivel de detalle necesario y plazo del análisis

**Parte 1 — Preparación de datos para análisis con IA**

Antes de usar IA para analizar estados financieros, la calidad de los datos de entrada determina la calidad del análisis:
- Cómo estructurar los estados financieros para que la IA los procese eficientemente: formato estandarizado, nomenclatura consistente, manejo de ajustes y partidas extraordinarias
- Cómo identificar y señalar las partidas que necesitan nota explicativa antes del análisis
- Qué información contextual proporcionar junto con los números (política contable, cambios de criterio, eventos extraordinarios)
- Los errores más comunes al pasar estados financieros a una IA y cómo evitarlos

**Parte 2 — Análisis de estados financieros con IA**

Diseña el flujo de análisis financiero asistido por IA:

Análisis de rentabilidad: cómo instruir a la IA para calcular y contextualizar márgenes bruto, EBITDA, EBIT y neto; evolución temporal y comparación sectorial; drivers de variación y preguntas de seguimiento.

Análisis de liquidez y solvencia: ratios de liquidez, cobertura de deuda, estructura de capital; señales de estrés financiero que la IA debe buscar en el balance; relación entre el P&L y el flujo de caja real.

Análisis de flujo de caja: diferencias entre beneficio contable y caja generada; calidad del flujo de caja operativo; capex de mantenimiento vs. crecimiento; libre flujo de caja ajustado.

Para cada área, proporciona el prompt específico para pedirle a la IA el análisis y las preguntas de seguimiento más útiles.

**Parte 3 — Detección de anomalías contables con IA**

Los casos donde la IA supera al analista humano en velocidad y cobertura:
- Inconsistencias entre partidas del P&L y del balance que sugieren ajustes contables agresivos
- Evolución de las cuentas de clientes y proveedores frente a las ventas y compras (señales de channel stuffing o aplazamiento de pagos)
- Variaciones inusuales en provisiones, amortizaciones o partidas diferidas
- Las señales del modelo Beneish M-Score y cómo interpretarlas con apoyo de IA
- Cómo documentar y comunicar una anomalía detectada sin hacer acusaciones prematuras

**Parte 4 — Benchmarking sectorial y comparables**

La IA puede procesar más comparables en menos tiempo que cualquier equipo:
- Cómo construir el conjunto de comparables relevantes para el análisis
- Qué métricas sectoriales son las más predictivas de valor para el sector específico
- Cómo normalizar las diferencias contables entre empresas del mismo sector para comparar de forma justa
- Cómo usar la IA para identificar outliers positivos y negativos en el peer group y entender por qué divergen

**Parte 5 — Comunicación de los resultados del análisis**

El análisis financiero solo tiene valor si se comunica con claridad:
- Cómo usar la IA para generar el executive summary del análisis en el tono apropiado para la audiencia (inversor, consejo, banco, directivo)
- Cómo estructurar las conclusiones en formato "dato → interpretación → implicación → recomendación"
- Los límites del análisis que siempre debes comunicar: qué supuestos has hecho, qué información no tenías, dónde la incertidumbre es mayor

Termina con los cinco casos de uso de IA en análisis financiero donde el retorno de tiempo es mayor, ordenados por impacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Análisis de estados financieros, detección de anomalías y benchmarking sectorial con IA',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Due diligence de IA',
                'description'       => 'Evalúa los riesgos legales de implementar IA: sesgos algorítmicos, responsabilidad, transparencia y las preguntas que el abogado debe hacer antes de firmar con el proveedor de IA.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en tecnología y regulación de inteligencia artificial con experiencia en due diligence legal de proyectos de IA y revisión de contratos con proveedores tecnológicos. Voy a describirte un proyecto de implementación de IA y necesito que me guíes en el proceso de due diligence legal para identificar y mitigar los riesgos antes de comprometer a mi organización.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de sistema de IA a implementar (automatización de decisiones, análisis predictivo, procesamiento de lenguaje, visión artificial, generación de contenido)
- Sector regulado o no regulado de la empresa
- Si el sistema de IA toma decisiones que afectan a personas (empleados, clientes, ciudadanos)
- País o jurisdicción principal de operación
- Si es desarrollo propio, uso de API de terceros o solución de software como servicio

**Parte 1 — Marco regulatorio aplicable**

Identifica el marco legal relevante para el proyecto:
- EU AI Act: clasificación del sistema de IA por nivel de riesgo (prohibido, alto riesgo, riesgo limitado, riesgo mínimo). Cómo determinar la categoría del sistema y las obligaciones que conlleva cada una.
- RGPD y procesamiento automatizado: cuándo aplica el artículo 22 sobre decisiones automatizadas, qué derechos tienen las personas afectadas y qué obligaciones tiene el responsable del tratamiento.
- Regulación sectorial específica: DORA en servicios financieros, MDR en dispositivos médicos, normas de igualdad y no discriminación en RRHH.
- Responsabilidad de producto: la directiva de responsabilidad por IA de la UE y su impacto en la cadena de responsabilidad entre desarrollador, integrador y desplegador.

Para mi caso de uso concreto, identifica las tres normas más relevantes y las obligaciones que generan.

**Parte 2 — Due diligence del proveedor de IA**

Las preguntas que debes hacer al proveedor antes de firmar:

Sobre los datos de entrenamiento: ¿Con qué datos fue entrenado el modelo? ¿Se obtuvo consentimiento para usarlos? ¿Existe riesgo de que el modelo reproduzca datos personales de terceros?

Sobre sesgos y equidad: ¿Ha sido el modelo evaluado para detectar sesgos discriminatorios? ¿Qué grupos de población podrían verse desproporcionadamente afectados? ¿Existe documentación de las evaluaciones de equidad realizadas?

Sobre explicabilidad: ¿Puede el proveedor explicar cómo el modelo llega a una decisión concreta? ¿Qué nivel de explicabilidad ofrece para cada caso de uso?

Sobre seguridad: ¿Ha sido el modelo sometido a red-teaming o evaluación de adversarial attacks? ¿Cómo gestiona el proveedor las vulnerabilidades descubiertas post-despliegue?

Diseña el cuestionario completo de due diligence técnico-legal con las 20 preguntas esenciales.

**Parte 3 — Revisión del contrato con el proveedor**

Las cláusulas que debes negociar y las que debes rechazar:
- Cláusulas de responsabilidad: cómo distribuir la responsabilidad entre proveedor e implementador cuando el sistema causa daños. Los límites de responsabilidad que son inaceptables en sistemas de alto riesgo.
- Transparencia y auditoría: el derecho de auditar el sistema, acceder a los logs de decisiones y solicitar explicaciones individuales.
- Cambios en el modelo: notificación obligatoria antes de cambios en el modelo que puedan afectar al rendimiento o a los sesgos. Derecho a rechazar actualizaciones que degraden el sistema.
- Subcontratación: control sobre qué terceros procesan los datos usados para entrenar o mejorar el modelo.
- Cesión de derechos: quién es dueño de los outputs generados por el sistema de IA.

**Parte 4 — Gestión del riesgo de sesgos algorítmicos**

El sesgo algorítmico es el riesgo legal más infravaluado en proyectos de IA:
- Cómo definir qué constituye un resultado discriminatorio en mi caso de uso específico
- Qué controles técnicos debo exigir al proveedor para monitorizar sesgos en producción
- El proceso de respuesta ante una denuncia de discriminación algorítmica: qué documentación necesitaré, quién es responsable, cómo se demuestra que se tomaron medidas razonables
- Cómo diseñar el proceso de revisión humana para los casos donde el sistema de IA afecta a derechos fundamentales

**Parte 5 — Documentación y gobernanza**

Los documentos que debo tener antes de poner en marcha el sistema:
- Evaluación de impacto relativa a la protección de datos (EIPD/DPIA) para sistemas de IA que procesan datos personales
- Registro de conformidad con el EU AI Act para sistemas de alto riesgo
- Política interna de uso de IA aprobada por el consejo o dirección
- Plan de respuesta ante incidentes con el sistema de IA: quién decide qué, en qué plazo y cómo se comunica a los afectados

Termina con el roadmap de due diligence legal en cuatro semanas para un proyecto de IA de mediano riesgo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Evaluar riesgos legales de implementar IA: contratos, sesgos, regulación y gobernanza',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Personalización de CS con IA',
                'description'       => 'Usa IA para personalizar la comunicación, predecir las necesidades y priorizar las acciones del CSM en función de las señales de comportamiento del cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en implementar sistemas de IA para personalizar la gestión de clientes a escala. Voy a darte información sobre mi equipo de CS y mi base de clientes, y necesito que me ayudes a diseñar cómo usar IA para que cada cliente reciba la atención correcta en el momento correcto sin que el CSM tenga que hacer todo de forma manual.

**Contexto que debes pedirme si no lo proporciono:**
- Modelo de negocio: SaaS, servicios profesionales, marketplace, ecommerce
- Tamaño de la base de clientes y ratio clientes/CSM actual
- Datos disponibles: uso del producto, soporte, facturación, NPS, interacciones comerciales
- Stack tecnológico: CRM, plataforma de CS (Gainsight, Totango, ChurnZero), herramientas de comunicación
- Segmentación actual de clientes: enterprise, mid-market, SMB

**Parte 1 — Señales de comportamiento que predicen el futuro del cliente**

Antes de personalizar la comunicación, necesito identificar las señales que importan:
- Señales de engagement: frecuencia de login, adopción de features clave, breadth de usuarios activos, profundidad de uso en los módulos más importantes
- Señales de riesgo: reducción del uso en las últimas semanas, tickets de soporte repetitivos, contactos con el equipo de facturación, cambios en el equipo del cliente
- Señales de expansión: uso cerca del límite del plan, adopción de features premium gratuitas, crecimiento del equipo del cliente, nuevos casos de uso no previstos en el contrato
- Cómo combinar señales de múltiples fuentes para construir una visión unificada del cliente

Define el score de salud del cliente para mi caso de uso: qué variables incluirías, qué peso darías a cada una y cómo interpretarías cada rango del score.

**Parte 2 — Personalización de la comunicación**

La comunicación genérica mata la relación con el cliente. Diseña el sistema de personalización:

Segmentación dinámica: cómo agrupar clientes no solo por tamaño o sector sino por patrón de comportamiento actual. Un enterprise que no usa el producto necesita una intervención diferente de un SMB que lo usa intensivamente.

Mensajes basados en contexto: cómo usar los datos de comportamiento para personalizar el contenido, el timing y el canal de cada comunicación. El QBR del cliente que acaba de lanzar en producción debe ser diferente del de uno que lleva seis meses sin abrir sesión.

Automatización con toque humano: qué comunicaciones pueden enviarse de forma automatizada con personalización de datos, cuáles necesitan revisión del CSM antes de enviarse, y cuáles deben venir siempre del CSM sin asistencia de IA.

**Parte 3 — Priorización de las acciones del CSM**

Con cien clientes, el CSM no puede dedicar el mismo tiempo a todos. Diseña el sistema de priorización:
- Cómo construir la queue diaria de acciones del CSM ordenada por impacto esperado en retención y expansión
- El sistema de alertas tempranas: qué señales deben interrumpir la rutina del CSM con urgencia
- Cómo balancear la atención entre clientes en riesgo (retención) y clientes con potencial de expansión (crecimiento)
- El protocolo de escalado: cuándo el CSM debe involucrar a ventas, soporte técnico, producto o dirección

**Parte 4 — Predicción de churn y expansión**

Usa IA para anticipar las decisiones del cliente:
- Diseña el modelo de predicción de churn: variables predictoras, ventana de predicción, threshold para activar intervención
- Diseña el modelo de propensión a expansión: señales que predicen que un cliente está listo para un upsell o para comprar un módulo adicional
- Cómo validar que el modelo predice correctamente en tu base de clientes específica
- Cómo integrar las predicciones en el flujo de trabajo diario del CSM sin que se conviertan en ruido

**Parte 5 — Casos de uso de IA generativa en CS**

Los prompts y automatizaciones de IA generativa que ahorran más tiempo al CSM:
- Generación de resúmenes ejecutivos de cuenta antes de una reunión con el cliente
- Borradores de emails personalizados basados en el historial de interacciones y el estado actual de la cuenta
- Preparación automática de la agenda del QBR con los datos más relevantes del período
- Análisis de llamadas de CS para extraer action items, riesgos mencionados y sentimiento del cliente

Para cada caso de uso, proporciona el prompt concreto y el workflow de integración con el stack de CS.

Termina con el plan de implementación en ocho semanas para un equipo de CS de cinco personas con 200 clientes activos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Personalizar gestión de clientes con IA: scoring de salud, priorización y predicción de churn',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Construir productos de IA como freelance',
                'description'       => 'El mercado de desarrollo de aplicaciones de IA para freelancers: los proyectos más demandados, las skills necesarias y las tarifas del nicho más caliente del mercado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior especializado en desarrollo de aplicaciones de IA con experiencia trabajando con startups, agencias y empresas medianas. Voy a compartirte mi perfil técnico y mis objetivos, y necesito que me ayudes a posicionarme y a construir un negocio freelance rentable en el nicho de desarrollo de productos de IA.

**Información que debes pedirme si no la proporciono:**
- Skills técnicas actuales (lenguajes, frameworks, experiencia previa con IA/ML)
- Años de experiencia como desarrollador y como freelance
- Objetivos de ingresos y carga de trabajo deseada
- Tipo de proyectos preferidos (duración, complejidad, tipo de cliente)
- Mercado objetivo (local, remoto, idioma de trabajo)

**Parte 1 — El mercado freelance de IA en 2025**

Describe el estado actual del mercado de desarrollo de aplicaciones de IA para freelancers:
- Los tipos de proyectos más demandados: integraciones con LLMs (Claude, GPT, Gemini), chatbots con RAG, automatizaciones de flujos de trabajo con IA, fine-tuning de modelos, dashboards de datos con IA, agentes de IA para tareas específicas
- Los sectores que más contratan freelancers de IA: legaltech, healthtech, edtech, ecommerce, marketing tech, SaaS
- La diferencia entre el mercado de proyectos pequeños (Upwork, Fiverr: 500-5.000€) y el mercado de proyectos medios (referidos, LinkedIn: 10.000-50.000€)
- Cómo está evolucionando la demanda: qué proyectos de IA que eran escasos hace dos años ahora son commodity, y qué proyectos nuevos están emergiendo

**Parte 2 — Stack técnico del freelance de IA en 2025**

Define el stack mínimo viable y el stack diferencial:

Stack base: Python, APIs de LLMs (Anthropic, OpenAI), LangChain o LlamaIndex para RAG, bases de datos vectoriales (Pinecone, Qdrant, pgvector), FastAPI o Flask para exponer servicios, despliegue básico en cloud.

Skills diferenciales que multiplican la tarifa: fine-tuning y evaluación de modelos, arquitecturas multi-agente, procesamiento de documentos complejos (PDFs, contratos, informes), integración con sistemas empresariales (CRMs, ERPs), seguridad y privacidad en sistemas de IA.

Habilidades no técnicas que determinan el éxito: gestión de expectativas sobre lo que la IA puede y no puede hacer, comunicación con stakeholders no técnicos, prototipado rápido, estimación de proyectos de IA (que son inherentemente inciertos).

**Parte 3 — Posicionamiento y nicho**

La trampa del freelance de IA generalista:
- Por qué "hago aplicaciones de IA" es el peor posicionamiento posible en un mercado saturado
- Cómo elegir el nicho: intersección entre lo que sabes hacer, lo que se paga bien y lo que puedes demostrar con casos de uso concretos
- Ejemplos de posicionamientos de nicho exitosos: "automatizo flujos de trabajo legales con IA", "construyo chatbots con RAG para documentación técnica", "integro IA en CRMs de equipos de ventas B2B"
- Cómo validar que tu nicho tiene demanda real antes de comprometer tu posicionamiento

**Parte 4 — Tarifas y estructura de proyectos**

El dinero que se puede ganar y cómo estructurar los proyectos para maximizarlo:
- Rangos de tarifas por hora según especialidad y mercado: desde los 60€/hora de generalist hasta los 200€/hora de especialistas en IA para sectores regulados
- Por qué los proyectos de precio fijo son más rentables que los de hora cuando sabes estimar bien
- Cómo estructurar los proyectos de IA en fases: discovery (pagada), MVP, iteración. La trampa del "scope creep" en proyectos de IA donde el cliente cambia lo que quiere al ver los primeros resultados.
- Cómo añadir ingresos recurrentes: mantenimiento del sistema, monitorización del modelo, mejoras incrementales mensuales

**Parte 5 — Conseguir los primeros clientes y crecer**

La estrategia de adquisición de clientes para freelancers de IA:
- Cómo construir el portfolio cuando no tienes proyectos de IA previos: proyectos propios, contribuciones open-source, proyectos pro-bono para casos de uso interesantes
- El canal más efectivo para el nicho de IA: LinkedIn con contenido técnico que demuestra expertise, comunidades de builders, newsletters especializadas
- Cómo convertir un primer proyecto pequeño en una relación de largo plazo con el cliente
- La red de referidos: cómo los mejores freelancers de IA consiguen el 80% de sus proyectos sin prospección activa

Termina con el plan de 90 días para pasar de developer generalista a freelance especializado en IA con los primeros dos clientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Posicionarse y construir negocio freelance en desarrollo de aplicaciones de IA',
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
