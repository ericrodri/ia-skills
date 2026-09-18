<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills290Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Machine learning en marketing: personalización, predicción y segmentación avanzada',
                'description'       => 'Aplica técnicas de machine learning para personalizar experiencias, predecir comportamientos y crear segmentaciones de clientes que superan la demografía tradicional.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en marketing data science con experiencia implementando machine learning en empresas de e-commerce, SaaS y medios digitales. Necesito entender cómo aplicar técnicas de machine learning en mi estrategia de marketing para ir más allá de la segmentación demográfica básica y construir experiencias verdaderamente personalizadas.

**Mi contexto de marketing:**
- Tipo de negocio: [e-commerce, SaaS B2B, B2C, medios, retail]
- Datos disponibles: [comportamiento en web, histórico de compras, datos CRM, interacciones con emails]
- Herramientas actuales: [Google Analytics, CRM específico, plataforma de email marketing]
- Nivel técnico del equipo: [sin equipo técnico, analista de datos, data scientist dedicado]
- Objetivo principal: [reducir churn, aumentar conversión, mejorar LTV, reducir CAC]

**Aplicaciones de machine learning en marketing que necesito entender:**

1. **Segmentación predictiva vs. segmentación tradicional**
Explica la diferencia entre segmentar por demografía o comportamiento histórico simple y usar clustering no supervisado (K-means, DBSCAN) para descubrir grupos de clientes que nadie había definido manualmente. Qué tipo de datos se usan en cada técnica, qué insights genera cada una, y cuándo tiene sentido invertir en segmentación predictiva vs. mantener la segmentación tradicional.

2. **Modelos de predicción de churn**
El churn no sucede de repente: hay señales semanas antes. Explica cómo construir un modelo de predicción de churn: qué variables son predictoras habituales (frecuencia de uso, engagement con emails, recencia de la última compra, cambios en el comportamiento), qué algoritmos funcionan bien (regresión logística, random forest, gradient boosting), cómo interpretar las probabilidades de churn para actuar sobre ellas, y cómo diseñar campañas de retención diferenciadas según el riesgo.

3. **Personalización de contenido y recomendaciones**
Los sistemas de recomendación son la aplicación más visible del ML en marketing. Explica los tipos de filtrado colaborativo (basado en usuarios similares, basado en ítems similares), el filtrado basado en contenido y los sistemas híbridos. Qué necesito para implementar un sistema de recomendaciones básico, qué plataformas lo ofrecen sin construirlo desde cero (Segment, Dynamic Yield, Bloomreach), y cómo medir si las recomendaciones mejoran las métricas de negocio.

4. **Modelos de propensión: scoring de leads y clientes**
Un modelo de propensión asigna a cada cliente o lead una puntuación de probabilidad de realizar una acción (comprar, convertir, hacer upsell). Explica cómo construir un modelo de propensión: datos de entrenamiento necesarios, selección de variables, validación del modelo, e integración del scoring en el CRM o la plataforma de marketing. Cómo usar estos scores para priorizar el trabajo del equipo de ventas o marketing.

5. **Optimización de campañas con ML**
Más allá de los test A/B clásicos, el ML permite optimizar campañas de forma más sofisticada. Explica el concepto de bandits (multi-armed bandits) para optimizar en tiempo real sin esperar a que termine un test, cómo funcionan los algoritmos de optimización de puja en Google Ads o Meta, y cómo usar ML para personalizar el asunto de un email o el momento de envío de forma automática.

6. **Atribución de marketing con ML**
Los modelos de atribución tradicionales (último clic, primer clic) son insuficientes. Explica los modelos de atribución basados en ML (atribución basada en datos de Google, modelos de Shapley values), cuándo tiene sentido usarlos, qué datos necesito para implementarlos, y cómo cambian las decisiones de inversión en canales cuando se usa atribución avanzada.

7. **Implementación práctica sin equipo de data science**
La mayoría de los equipos de marketing no tienen un data scientist. Explica qué se puede conseguir con herramientas no-code o low-code: plataformas de marketing que incorporan ML (HubSpot, Salesforce Einstein, Klaviyo, etc.), herramientas de análisis con ML integrado, y cuándo tiene sentido contratar a un consultor o data scientist externo para un proyecto concreto.

8. **Ética y privacidad en el ML de marketing**
El ML en marketing levanta preguntas importantes: sesgos en los modelos, privacidad de los datos (GDPR, cookies de terceros), transparencia con los clientes sobre la personalización, y riesgos reputacionales. Cuáles son las líneas que no se deben cruzar, cómo asegurarse de que los modelos no amplifican sesgos existentes, y cómo comunicar a los clientes el uso de personalización.

**Entregable:**
Un plan de implementación de ML en marketing ordenado por complejidad creciente, empezando por lo que puedo hacer hoy con mis datos actuales y terminando por dónde podría estar en dos años con inversión en capacidades técnicas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Aplicar machine learning en campañas de marketing para personalización y predicción',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'MLOps: llevar modelos de machine learning a producción de forma sostenible',
                'description'       => 'Domina las prácticas de MLOps para desplegar, monitorizar y mantener modelos de machine learning en producción con confianza y eficiencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un ingeniero de MLOps senior con experiencia llevando modelos de machine learning a producción en entornos de alta disponibilidad. Necesito entender y aplicar las prácticas de MLOps para que los modelos que desarrollamos pasen de experimentos en notebooks a sistemas productivos confiables, mantenibles y escalables.

**Mi contexto técnico:**
- Tipo de modelos que desarrollo: [clasificación, regresión, NLP, visión por computadora, series temporales]
- Infraestructura actual: [AWS, GCP, Azure, on-premise, sin infraestructura cloud definida]
- Stack de ML: [Python, scikit-learn, TensorFlow, PyTorch, XGBoost]
- Equipo: [data scientists solos que también hacen deploy, equipo mixto data science + engineering]
- Mayor problema actual: [los modelos funcionan en el notebook pero no en producción, no sabemos cuándo un modelo se degrada, el proceso de reentrenamiento es manual]

**Fundamentos y prácticas de MLOps:**

1. **El ciclo de vida completo de un modelo de ML**
Explica las fases del ciclo de vida de un modelo: definición del problema y datos, experimentación y entrenamiento, evaluación y validación, despliegue a producción, monitorización y mantenimiento, y reentrenamiento. En qué consiste cada fase, quién es responsable, y cuáles son los puntos de fallo más comunes en organizaciones sin MLOps maduro.

2. **Reproducibilidad de experimentos**
El primer problema del ML en producción es la reproducibilidad: el modelo que funcionó ayer no funciona hoy porque algo cambió. Explica cómo gestionar: versioning de datos (DVC, Delta Lake), versioning de código (Git), versioning de modelos (MLflow, Weights & Biases), y gestión de dependencias (entornos virtuales, Docker). Cuál es el stack mínimo viable para garantizar reproducibilidad.

3. **Pipelines de ML automatizados**
Un pipeline de ML automatizado es la base del MLOps. Explica cómo construir un pipeline end-to-end: ingesta de datos, preprocesamiento, entrenamiento, evaluación, y registro del modelo. Qué herramientas usar (Kubeflow, MLflow, Airflow, Prefect, Metaflow), cuándo usar cada una, y cómo diseñar el pipeline para que sea testeable y reproducible.

4. **Despliegue de modelos: estrategias y herramientas**
Hay múltiples formas de desplegar un modelo a producción. Explica las principales estrategias: serving de modelo como API REST (FastAPI, Flask, BentoML), despliegue en batch (inferencia offline sobre lotes de datos), despliegue en streaming (Kafka, Kinesis), y despliegue en edge o en el dispositivo. Cuándo usar cada estrategia, cómo gestionar el escalado, y qué herramientas de serving como Triton, TorchServe o TensorFlow Serving usar para modelos de alta demanda.

5. **Monitorización de modelos en producción**
Los modelos se degradan con el tiempo porque los datos del mundo real cambian (concept drift, data drift). Explica cómo monitorizar un modelo en producción: qué métricas seguir (performance metrics, data drift, distribución de predicciones), qué herramientas usar (Evidently, Arize, Whylogs, Grafana personalizado), cómo definir alertas cuando el modelo se degrada, y cuándo lanzar un reentrenamiento.

6. **CI/CD para modelos de ML**
La integración continua y el despliegue continuo (CI/CD) deben adaptarse al mundo del ML. Explica cómo construir un pipeline de CI/CD para modelos: tests automáticos (tests unitarios de componentes, tests de integración del pipeline, tests de performance del modelo en datos de validación), gates de calidad antes del despliegue, estrategias de despliegue gradual (canary, blue-green, shadow mode), y rollback automático si el modelo nuevo es peor.

7. **Feature store: gestión centralizada de features**
Una de las mayores fuentes de inconsistencia es que el mismo feature se calcula de forma diferente en el entrenamiento y en la inferencia. Explica qué es un feature store, qué problemas resuelve, cómo diferenciar entre features online (baja latencia) y offline (batch), y qué herramientas existen (Feast, Tecton, Databricks Feature Store). Cuándo tiene sentido invertir en un feature store y cuándo es over-engineering.

8. **Organización y cultura MLOps**
El MLOps no es solo tecnología: es también organización y cultura. Explica cómo estructurar un equipo de MLOps (roles: ML engineer, data scientist, platform engineer), cómo crear una plataforma de ML interna que empodere a los data scientists sin que se preocupen por la infraestructura, y cómo madurar la organización desde el nivel 0 (todo manual) hasta el nivel 3 (automatización completa del ciclo de vida).

**Entregable:**
Hoja de ruta de madurez de MLOps en tres niveles para mi organización: qué implementar primero para salir del caos, qué viene después para industrializar, y cuál es la visión a largo plazo de una organización con MLOps maduro.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Implementar prácticas MLOps para llevar modelos de ML a producción de forma sostenible',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de interfaces con IA: cuando el producto aprende del usuario',
                'description'       => 'Aprende a diseñar interfaces de productos con inteligencia artificial integrada que se adaptan, aprenden y mejoran la experiencia del usuario de forma ética.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de producto senior especializado en experiencia de usuario para productos con inteligencia artificial integrada. Necesito entender cómo diseñar interfaces y experiencias de usuario cuando el producto incorpora IA: no solo cómo diseñar chatbots o asistentes, sino cómo diseñar productos que aprenden del comportamiento del usuario, se adaptan y toman decisiones de forma automatizada.

**Mi contexto de diseño:**
- Tipo de producto que diseño: [aplicación de productividad, plataforma de e-learning, herramienta SaaS, app de salud, marketplace]
- Funcionalidades de IA que quiero o tengo: [recomendaciones, predicciones, automatización de tareas, personalización, generación de contenido]
- Nivel de sofisticación de los usuarios del producto: [usuarios técnicos, consumidores generales, profesionales de un sector específico]
- Mayor preocupación de diseño: [confianza del usuario en la IA, transparencia, errores de la IA, control del usuario]

**Principios y patrones de diseño para productos con IA:**

1. **Los retos únicos del diseño de productos con IA**
El diseño de productos con IA tiene retos que no existen en el software tradicional: la salida del sistema no es determinista (la misma entrada puede dar resultados diferentes), el sistema puede equivocarse de formas inesperadas, el usuario no entiende cómo funciona, y la confianza se construye lentamente pero se pierde rápido. Explica estos retos y cómo afectan a las decisiones de diseño.

2. **Transparencia y explicabilidad: cuánto mostrar y cuánto ocultar**
¿Cuánto debe el producto explicar por qué la IA tomó una decisión? Explica el principio de transparencia calibrada: en qué situaciones es imprescindible explicar (decisiones que afectan mucho al usuario, contextos de alto riesgo), en qué situaciones basta con mostrar el resultado, y cuáles son los patrones de diseño para comunicar la incertidumbre o la confianza del sistema (indicadores de confianza, explicaciones on demand, "por qué veo esto").

3. **Diseño del error en sistemas de IA**
Los errores en sistemas de IA son cualitativamente diferentes a los errores en software clásico. Explica cómo diseñar para el fallo: qué hacer cuando la IA da una respuesta incorrecta o inadecuada, cómo diseñar mecanismos de corrección que el usuario pueda usar, cómo aprovechar las correcciones para mejorar el sistema, y cómo comunicar los límites del sistema sin destruir la confianza.

4. **Control del usuario vs. automatización**
Hay una tensión fundamental en el diseño de productos con IA: cuánto decidir automáticamente y cuánto dejar al usuario. Explica el espectro desde la automatización total hasta la asistencia pura, cómo decidir dónde ubicarse en ese espectro para cada funcionalidad, y los patrones de diseño para dar control al usuario sin abrumarlo (confirmación antes de actuar, modo de revisión, deshacer acciones de IA, ajustes de preferencias).

5. **Onboarding en productos con IA**
El onboarding de un producto con IA es especialmente difícil: el sistema necesita datos del usuario para ser útil, pero el usuario no verá valor hasta que el sistema tenga suficientes datos (cold start problem). Explica estrategias de onboarding para productos con IA: cómo recopilar preferencias explícitas iniciales, cómo mostrar valor desde el primer día aunque el sistema no esté personalizado aún, y cómo comunicar que el producto mejorará con el uso.

6. **Diseño conversacional: más allá del chatbot**
Las interfaces conversacionales (chatbots, asistentes, comandos en lenguaje natural) son uno de los patrones de UI más comunes en productos con IA. Diseña la anatomía de una buena interfaz conversacional: cómo gestionar la expectativa del usuario sobre las capacidades del asistente, cómo diseñar el estado de carga o pensamiento del sistema, cómo manejar los malentendidos y las reformulaciones, y cuándo una interfaz conversacional NO es la mejor solución.

7. **Personalización visible y privacidad**
El producto aprende del usuario, pero el usuario debe saber que lo hace y poder controlarlo. Explica cómo diseñar la privacidad y el control de datos en productos con IA: qué datos se usan y cómo comunicarlo de forma comprensible (no en términos legales), cómo dar control al usuario sobre su perfil de personalización, y cómo diseñar la opción de borrar el historial o resetear las preferencias sin penalizar al usuario.

8. **Métricas de calidad del diseño en productos con IA**
¿Cómo sé si el diseño del producto con IA está funcionando? Propón métricas específicas para productos con IA: tasa de aceptación de las sugerencias de la IA, tasa de corrección de errores, tiempo hasta la primera acción de valor (time to first aha moment), confianza declarada en el sistema (surveys), y métricas de abuso o uso inadecuado.

**Entregable:**
Diseña un framework de evaluación de diseño para productos con IA: una checklist de veinte preguntas que debo hacerme antes de lanzar cualquier funcionalidad de IA en mi producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar interfaces de productos con IA centradas en confianza y transparencia',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Predictive sales: usar machine learning para identificar oportunidades de cierre',
                'description'       => 'Implementa modelos predictivos en tu proceso de ventas para priorizar oportunidades, predecir el cierre y enfocar al equipo donde hay más probabilidad de éxito.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en la implementación de herramientas de inteligencia artificial y analítica predictiva en procesos comerciales B2B. Necesito entender cómo usar el machine learning y los modelos predictivos para que mi equipo de ventas deje de tratar todas las oportunidades igual y enfoque su energía donde realmente hay posibilidades de cerrar.

**Mi contexto de ventas:**
- Tipo de ventas: [B2B enterprise, B2B midmarket, canal, inside sales]
- Volumen de oportunidades activas: [número aproximado de deals en el pipeline]
- CRM actual: [Salesforce, HubSpot, Pipedrive, otro]
- Calidad de los datos en el CRM: [muy completos, algunos campos vacíos, datos muy inconsistentes]
- Mayor problema de productividad del equipo: [demasiadas oportunidades para gestionar bien, no sabemos qué oportunidades priorizar, el pipeline tiene mucho "wishful thinking"]

**Aplicaciones de analítica predictiva en el proceso de ventas:**

1. **Lead scoring predictivo: más allá de las reglas manuales**
La mayoría de los equipos tienen algún sistema de lead scoring, pero está basado en reglas manuales que alguien definió hace tiempo. Explica cómo funciona el lead scoring predictivo basado en ML: qué variables de comportamiento y firmografía son más predictoras del cierre (actividad en el sitio web, engagement con emails, tamaño de empresa, sector, cargo del contacto), cómo se entrena el modelo con el histórico de oportunidades cerradas y perdidas, y cómo se integra el scoring en el CRM.

2. **Win probability: la probabilidad de cierre de cada oportunidad**
Más allá del scoring de leads, los modelos de win probability asignan a cada oportunidad activa una probabilidad de cierre en tiempo real. Explica cómo funciona: qué señales de la oportunidad son predictoras (etapa del ciclo, tiempo en cada etapa, engagement del campeón, número de stakeholders involucrados, tamaño del deal vs. deal size promedio del equipo), cómo usar estos scores para identificar deals en riesgo antes de que se pierdan, y qué acciones tomar según el nivel de riesgo.

3. **Forecast de ventas basado en IA**
El forecast comercial es uno de los procesos más frustrantes de ventas: el equipo es optimista, el manager hace sus ajustes subjetivos, y el resultado sigue siendo poco confiable. Explica cómo los modelos predictivos mejoran el forecast: qué metodología utiliza el forecast de IA (regresión sobre señales de la oportunidad, patrones históricos de ciclo de ventas, comparación con deals similares cerrados), cómo combinar el forecast de IA con el juicio del equipo, y qué herramientas lo ofrecen (Clari, Gong, Salesforce Einstein, HubSpot AI).

4. **Detección de oportunidades de expansión y upsell**
La IA no solo predice qué leads convertir: también puede identificar qué clientes existentes están listos para comprar más. Explica cómo construir un modelo de propensión al upsell: qué señales de uso del producto son predictoras (aumento de uso, funcionalidades que se quedan pequeñas, patrones de búsqueda en el help center), cómo priorizar la cartera de clientes para el equipo de account management, y cómo integrar estas señales con el CRM.

5. **Conversation intelligence: IA en las llamadas de ventas**
Las herramientas de conversation intelligence (Gong, Chorus, Salesloft) graban, transcriben y analizan las llamadas de ventas con IA. Explica qué insights generan: identificación de temas clave en la conversación (precio, competencia, objeciones), análisis del ratio de escucha vs. habla, detección de preguntas de descubrimiento vs. monólogos de producto, y cómo usar estos insights para el coaching del equipo y la mejora del proceso de ventas.

6. **Automatización inteligente de tareas administrativas**
Los comerciales pasan demasiado tiempo en tareas administrativas en lugar de vender. Explica cómo la IA puede automatizar: logging automático de actividades en el CRM (desde emails y llamadas), redacción de emails de seguimiento personalizados, actualización de la etapa del deal basada en señales del CRM, y generación de resúmenes de reuniones. ¿Qué herramientas están más avanzadas en esto?

7. **Identificación de patrones en deals perdidos**
Uno de los mayores tesoros de los datos de ventas es el análisis de por qué se pierden los deals. Explica cómo usar ML para identificar patrones en las oportunidades perdidas: qué variables distinguen los deals perdidos de los ganados, cómo crear un sistema de alerta temprana cuando una oportunidad empieza a mostrar señales de pérdida, y cómo usar estos análisis para mejorar el proceso y el entrenamiento del equipo.

8. **Implementación y gestión del cambio**
Implementar analítica predictiva en ventas no es solo un problema técnico: es también un problema de adopción. Explica cómo conseguir que el equipo de ventas use realmente las herramientas de IA: cómo presentar el scoring sin que parezca que la máquina dice al comercial qué hacer, cómo involucrar al equipo en la validación del modelo, y cómo iterar el modelo cuando el equipo detecta casos donde el scoring falla.

**Entregable:**
Plan de implementación de analítica predictiva en ventas en seis meses, con las herramientas recomendadas según el presupuesto disponible (low budget, mid budget, enterprise budget) y los criterios de éxito para cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar analítica predictiva para priorizar oportunidades de ventas con IA',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'AI product strategy: construir productos con inteligencia artificial en el núcleo',
                'description'       => 'Define la estrategia de un producto con IA en el núcleo: desde la identificación del problema hasta el diseño del moat competitivo basado en datos y modelos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager o CPO con experiencia construyendo productos de IA en startups y empresas en escala. Necesito desarrollar la estrategia de un producto que tiene la inteligencia artificial como componente central, no como funcionalidad añadida. Ayúdame a pensar en las dimensiones estratégicas, técnicas y de negocio específicas de construir un AI-native product.

**Mi contexto de producto:**
- Tipo de problema que resuelve el producto: [automatización de tarea específica, asistencia a decisiones, generación de contenido, análisis de datos, personalización]
- Audiencia objetivo: [profesionales de un sector, consumidores, desarrolladores, empresas]
- Fase actual del producto: [idea, MVP, producto con usuarios iniciales, en escala]
- Modelo de IA que estoy usando o planeando: [LLMs de terceros como GPT o Claude, modelos propios, modelos open source fine-tuneados, ML clásico]
- Moat o ventaja competitiva principal esperada: [datos propietarios, modelo especializado, experiencia de usuario, distribución, red de efectos]

**Estrategia de producto para un AI-native product:**

1. **Definición del problema que la IA resuelve mejor que las alternativas**
No todos los problemas se resuelven mejor con IA. Explica cómo identificar los problemas donde la IA ofrece una ventaja real: tareas que requieren procesar grandes volúmenes de datos, que son repetitivas pero requieren juicio, que se benefician de personalización a escala, o que tienen patrones ocultos en los datos. Cómo validar que el problema es suficientemente grande, que la IA puede resolverlo con un nivel de calidad aceptable, y que los usuarios pagarán por ello.

2. **El moat de datos: por qué los datos son la ventaja competitiva**
En los productos de IA, los datos son el foso defensivo. Explica el concepto de data flywheel (o bucle de datos): más usuarios generan más datos, mejores datos mejoran el modelo, un mejor modelo atrae más usuarios. Cómo diseñar el producto para capturar datos de calidad de forma natural, qué tipos de datos generan ventaja competitiva sostenible, y cómo diferenciar entre datos que cualquiera puede tener y datos propietarios difíciles de replicar.

3. **Decisiones de build vs. buy en modelos de IA**
Una de las decisiones estratégicas más importantes en un AI product es si construir modelos propios o usar modelos de terceros. Explica el framework de decisión: cuándo tiene sentido usar la API de un LLM general (OpenAI, Anthropic, Google), cuándo hacer fine-tuning sobre un modelo base, y cuándo invertir en entrenamiento de modelos propios. Qué factores afectan a esta decisión (coste, privacidad de datos, calidad necesaria, velocidad de iteración, riesgo de dependencia del proveedor).

4. **Diseño de la experiencia de usuario en torno a la IA**
Los productos con IA requieren patrones de UX específicos. Explica cómo diseñar la experiencia alrededor del núcleo de IA: cómo gestionar la latencia (la IA es más lenta que el software clásico), cómo mostrar resultados parciales o progresivos, cómo diseñar para la incertidumbre (la IA puede equivocarse), y cómo construir confianza del usuario en el sistema de forma progresiva.

5. **Métricas de producto para AI products**
Las métricas habituales de producto (DAU, retention, conversion) son necesarias pero insuficientes para un AI product. Explica las métricas específicas de productos de IA: calidad del output del modelo (precisión, recall, F1, métricas específicas del dominio), tasa de aceptación de las sugerencias de la IA, feedback implícito (el usuario usa el resultado o lo ignora), y cómo conectar las métricas técnicas del modelo con las métricas de negocio del producto.

6. **Roadmap de un producto de IA: iteración rápida en dos dimensiones**
Un AI product tiene que iterar en dos dimensiones simultáneamente: el producto y el modelo. Explica cómo gestionar este roadmap dual: cuándo priorizar mejoras de producto vs. mejoras de modelo, cómo hacer experiments en el modelo sin afectar a todos los usuarios (A/B testing de modelos), y cómo comunicar la hoja de ruta de IA a los stakeholders que no tienen contexto técnico.

7. **Riesgos y responsabilidad en productos de IA**
Los productos de IA tienen riesgos específicos: alucinaciones, sesgos, mal uso, dependencia excesiva del usuario en el sistema, y responsabilidad legal cuando la IA toma decisiones que afectan a personas. Explica cómo identificar y mitigar estos riesgos en el diseño del producto: dónde poner humans in the loop, cómo diseñar mecanismos de corrección, y qué considerar desde el punto de vista legal y ético antes de lanzar.

8. **Estrategia de precios para productos de IA**
Los productos de IA tienen una estructura de costes diferente: el coste de inferencia (llamadas a la API o compute del modelo) escala con el uso. Explica los modelos de precios más comunes en AI products (freemium con límites de uso, subscripción por nivel de uso, precio por resultado generado), cómo calcular el margen unitario teniendo en cuenta el coste de la IA, y cómo escalar el negocio sin que el coste de la IA destruya la rentabilidad.

**Entregable:**
Un canvas de estrategia de AI product para mi producto: las preguntas clave que debo ser capaz de responder en cada dimensión estratégica (problema, datos, modelo, experiencia, negocio) antes de escalar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Definir la estrategia de un producto con IA en el núcleo desde el problema hasta el moat',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'AI en selección: algoritmos, sesgos y el equilibrio entre automatización y humanidad',
                'description'       => 'Implementa herramientas de IA en el proceso de selección de forma ética, reduciendo sesgos y acelerando el proceso sin perder el juicio humano donde más importa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de talento adquisición con experiencia implementando herramientas de inteligencia artificial en procesos de selección, con especial sensibilidad hacia los riesgos éticos y legales. Necesito entender cómo usar la IA para hacer mi proceso de selección más eficiente y justo, sin caer en los peligros del sesgo algorítmico ni perder la dimensión humana que hace que la selección sea buena.

**Mi contexto de selección:**
- Volumen de contratación: [número de posiciones abiertas simultáneamente y candidatos por posición]
- Tipos de perfiles que selecciono: [técnicos, comerciales, directivos, perfiles de alta demanda]
- Herramientas actuales de selección: [ATS específico, LinkedIn Recruiter, entrevistas no estructuradas]
- Mayor problema del proceso actual: [demasiado tiempo en la criba inicial, evaluaciones inconsistentes entre entrevistadores, candidatos sin respuesta, sesgos inconscientes]
- Marco regulatorio relevante: [GDPR, regulación de IA en RRHH en tu país, directivas de no discriminación]

**IA en selección: oportunidades y riesgos:**

1. **Mapa de aplicaciones de IA en el proceso de selección**
Define dónde se puede aplicar IA en cada fase del proceso de selección: sourcing de candidatos (búsqueda proactiva en LinkedIn y bases de datos), screening de CVs (criba inicial automatizada), evaluación de candidatos (tests cognitivos adaptativos, análisis de respuestas a preguntas situacionales), programación de entrevistas, y comunicación con candidatos (emails automatizados, chatbots). Para cada fase, explica qué hace la IA, qué ventajas aporta y qué riesgos tiene.

2. **Sesgo algorítmico en selección: cómo funciona y cómo detectarlo**
El caso de Amazon que abandonó su herramienta de IA de selección porque discriminaba a mujeres es el ejemplo más famoso del sesgo en algoritmos de RRHH. Explica cómo se introduce el sesgo en los modelos de selección (datos de entrenamiento sesgados, variables proxy de características protegidas), cómo detectarlo (auditorías de impacto por grupo demográfico), y qué obligaciones legales existen en Europa respecto al uso de IA en RRHH (Reglamento de IA de la UE, GDPR).

3. **Cribado de CVs con IA: qué funciona y qué evitar**
El cribado automático de CVs puede ahorrar mucho tiempo pero también puede descartar buenos candidatos o perpetuar sesgos. Explica las mejores prácticas para usar IA en el cribado: qué variables usar (competencias demostrables, experiencia relevante) y cuáles evitar (nombre, foto, institución educativa como proxy de clase social), cómo diseñar la intervención humana en el proceso, y cómo auditar regularmente los resultados del cribado automático.

4. **Entrevistas por vídeo con análisis de IA**
Las herramientas de análisis de entrevistas por vídeo que evalúan lenguaje corporal, tono de voz y microexpresiones faciales son las más controvertidas. Explica el estado actual de la ciencia sobre si estas evaluaciones son válidas y justas, qué dicen los organismos reguladores europeos sobre su uso, y si hay formas éticamente aceptables de usar IA en entrevistas por vídeo (análisis de contenido de las respuestas en lugar de análisis facial o de voz).

5. **Chatbots y automatización de la comunicación con candidatos**
La experiencia del candidato es uno de los factores más críticos del employer branding. Explica cómo usar IA para mejorar la comunicación con candidatos: chatbots para responder preguntas frecuentes (¿cuándo sabré algo?), automatización de actualizaciones de estado, personalización de mensajes de rechazo que son útiles en lugar de genéricos, y cómo mantener la calidez humana en comunicaciones automatizadas.

6. **Assessment y evaluación objetiva de competencias**
Las evaluaciones estructuradas basadas en IA pueden ser más justas que las entrevistas no estructuradas donde los sesgos del entrevistador tienen más peso. Explica los tipos de assessment con IA: tests cognitivos adaptativos, simulaciones de trabajo (work sample tests), evaluaciones situacionales (¿qué harías si...?), y análisis semántico de respuestas a preguntas abiertas. Cuáles tienen mejor evidencia científica de validez predictiva.

7. **Marcos éticos para el uso de IA en selección**
Propón un marco de gobernanza para el uso ético de IA en selección: principios de diseño (transparencia con los candidatos, derecho a revisión humana, auditoría regular de sesgos, proporcionalidad en el uso de automatización), qué decisiones nunca debe tomar la IA sola (la contratación final siempre debe ser humana), y cómo comunicar a los candidatos que se usa IA en el proceso.

8. **Métricas de calidad y sesgo del proceso de selección con IA**
¿Cómo mido si el uso de IA en selección está funcionando bien y de forma justa? Propón métricas de eficiencia (tiempo hasta el cierre, coste por contratación, tasa de pass-through en cada etapa), métricas de calidad (retención a 12 meses de los contratados, performance rating), y métricas de equidad (tasa de selección por grupo demográfico en cada etapa, disparate impact ratio).

**Entregable:**
Una política de uso responsable de IA en selección para mi organización, adaptada a mi contexto y volumen de contratación, con los límites claros de lo que la IA puede y no puede decidir.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar IA en selección de personal de forma ética reduciendo sesgos',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Machine learning en finanzas: detección de fraude, scoring y trading algorítmico',
                'description'       => 'Comprende las aplicaciones más importantes del machine learning en el sector financiero: detección de anomalías, modelos de riesgo de crédito y estrategias cuantitativas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un quant o científico de datos especializado en aplicaciones de machine learning en el sector financiero, con experiencia en banca, fintech y gestión de activos. Necesito entender las principales aplicaciones del ML en finanzas: no solo los conceptos teóricos, sino cómo se implementan en la práctica, qué datos se necesitan, qué algoritmos funcionan y cuáles son los riesgos específicos de cada aplicación.

**Mi contexto financiero:**
- Área de trabajo: [banca retail, banca corporativa, gestión de activos, fintech de pagos, fintech de crédito, seguros]
- Rol: [analista de riesgos, gestor de carteras, director de operaciones, científico de datos en finanzas]
- Nivel técnico: [sin programación, manejo básico de Python, experiencia en ML]
- Objetivo principal: [entender cómo funciona la IA en mi sector, evaluar herramientas de terceros, construir modelos propios]

**Aplicaciones de machine learning en finanzas:**

1. **Detección de fraude: el caso de uso más maduro del ML en finanzas**
La detección de fraude en transacciones con tarjeta o en pagos online es una de las aplicaciones más maduras y exitosas del ML en finanzas. Explica cómo funcionan estos sistemas: qué features se usan (velocidad de transacciones, localización, comportamiento histórico del usuario, red de relaciones entre cuentas), por qué el problema es difícil (datos muy desbalanceados, el fraude evoluciona constantemente), qué algoritmos se usan (isolation forest, autoencoders, graph neural networks para fraude de red), y cómo se gestiona el tradeoff entre falsos positivos (bloquear transacciones legítimas) y falsos negativos (dejar pasar fraude).

2. **Scoring crediticio: modelos tradicionales vs. modelos de ML**
El scoring crediticio ha usado durante décadas modelos estadísticos tradicionales (logistic regression, scorecard). Explica cómo el ML está cambiando esto: qué nuevas fuentes de datos se usan (comportamiento en app, datos de open banking, datos alternativos como historial de pagos de servicios), qué algoritmos mejoran la predicción de impago (gradient boosting, redes neuronales), cómo se mantiene la interpretabilidad necesaria para cumplir con la regulación (explicación de la decisión al consumidor, SHAP values), y qué riesgos de discriminación hay que gestionar.

3. **Gestión de riesgos de mercado con ML**
Los modelos de riesgo de mercado tradicionales (VaR, simulaciones de Montecarlo) tienen limitaciones conocidas. Explica cómo el ML mejora la medición del riesgo de mercado: predicción de volatilidad (modelos GARCH vs. LSTM), estimación de correlaciones en condiciones de stress (cuando las correlaciones cambian), detección de regímenes de mercado (clustering de estados de mercado), y cómo estos modelos se integran en los sistemas de gestión de riesgo de las instituciones financieras.

4. **Trading algorítmico y estrategias cuantitativas**
El trading algorítmico es un campo donde el ML ha transformado las estrategias. Explica los principales enfoques: estrategias de mean reversion y momentum con ML, predicción de series temporales financieras (con todas sus dificultades: ruido, no-estacionariedad, cambios de régimen), reinforcement learning para optimización de estrategias de trading, y los límites del ML en trading (por qué no existe el modelo perfecto que siempre gana). Incluye los riesgos específicos del trading con ML y los casos de colapso de fondos cuantitativos.

5. **NLP en finanzas: análisis de sentimiento y análisis de documentos**
El texto es una fuente de alpha no explotada en finanzas. Explica las aplicaciones de NLP en el sector financiero: análisis de sentimiento de noticias y redes sociales para predecir movimientos de mercado, análisis automático de informes anuales (10-K, 20-F) para extraer señales financieras, procesamiento de actas de bancos centrales para anticipar decisiones de política monetaria, y extracción de información de contratos financieros (due diligence automatizada). Qué herramientas y modelos pre-entrenados existen específicamente para finanzas (FinBERT, BloombergGPT).

6. **Robo-advisors y personalización de carteras**
Los robo-advisors son el ejemplo más visible de IA al servicio del inversor retail. Explica cómo funcionan: perfil de riesgo del inversor (cuestionario inicial y ajuste dinámico), optimización de carteras con ML (más allá de Markowitz clásico), rebalanceo automático y eficiencia fiscal, y personalización según objetivos del inversor. Cuáles son sus limitaciones y por qué el modelo híbrido (IA + asesor humano) suele funcionar mejor para clientes de mayor patrimonio.

7. **Regulación y explicabilidad en ML financiero**
El ML en finanzas está fuertemente regulado. Explica los principales requisitos regulatorios: el derecho a la explicación en decisiones crediticias automatizadas (GDPR artículo 22, Consumer Credit Directive), los requisitos de model risk management (SR 11-7 en EEUU, directrices del BCE en Europa), cómo documentar y validar modelos de ML para el regulador, y qué es el model risk y cómo se gestiona en instituciones financieras.

8. **El futuro del ML en finanzas: qué está llegando**
¿Qué aplicaciones de ML están emergiendo en el sector financiero? Explica las tendencias: modelos de lenguaje para asesoramiento financiero personalizado, ML en la gestión de riesgos ESG (datos alternativos sobre factores ambientales y sociales), detección de lavado de dinero con graph neural networks, y el impacto de la computación cuántica en la optimización financiera. ¿Cuáles son las aplicaciones más prometedoras en los próximos tres a cinco años?

**Entregable:**
Un mapa de madurez del ML en mi área financiera: qué aplicaciones son maduras y están probadas, cuáles están emergiendo y cuáles son todavía experimentales, con recomendaciones de dónde empezar a invertir.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Entender y aplicar machine learning en casos de uso financieros clave',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'AI jurídica: oportunidades, riesgos y el marco regulatorio que está llegando',
                'description'       => 'Entiende las aplicaciones reales de la IA en el sector legal, sus limitaciones, los riesgos de responsabilidad profesional y cómo navegar el marco regulatorio emergente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en tecnología y derecho digital con experiencia asesorando a despachos y departamentos jurídicos en la adopción de inteligencia artificial. Necesito entender el panorama completo de la IA aplicada al derecho: qué funciona de verdad, qué es hype, cuáles son los riesgos de responsabilidad profesional para el abogado, y cómo está evolucionando el marco regulatorio.

**Mi contexto jurídico:**
- Tipo de práctica: [despacho de abogados, departamento jurídico de empresa, asesoría, academia]
- Área de especialización: [mercantil, laboral, penal, contencioso-administrativo, propiedad intelectual, privacidad]
- Nivel de adopción de IA actual: [ninguno, herramientas básicas como Copilot, herramientas jurídicas específicas]
- Principal preocupación: [responsabilidad profesional, confidencialidad de datos de clientes, competencia de la IA, regulación]

**IA en el sector jurídico: una guía completa:**

1. **Mapa de aplicaciones de IA en la práctica jurídica**
Define las aplicaciones reales de IA en el derecho: investigación jurídica (búsqueda y síntesis de jurisprudencia, legislación y doctrina), revisión y análisis de contratos (identificación de cláusulas de riesgo, comparación con estándar del mercado), due diligence (revisión masiva de documentos en operaciones corporativas), redacción asistida de documentos (borradores de contratos, escritos procesales, dictámenes), y e-discovery (revisión de documentos en litigios con grandes volúmenes). Para cada aplicación, explica el estado de madurez actual y qué herramientas existen.

2. **Herramientas de IA jurídica: el ecosistema actual**
El mercado de legaltech con IA ha crecido enormemente. Explica las principales categorías de herramientas y ejemplos concretos: plataformas de contract review y analysis (Kira, Luminance, Evisort), herramientas de investigación jurídica (Westlaw AI, Lexis+ AI, vLex Justis en España), plataformas de e-discovery (Relativity, Everlaw), y herramientas de redacción asistida (Harvey, CoCounsel). Cómo evaluar una herramienta de IA jurídica: criterios de calidad, privacidad de datos, integración con el flujo de trabajo existente.

3. **Riesgos de responsabilidad profesional del abogado que usa IA**
El caso de los abogados de Nueva York que presentaron un escrito con jurisprudencia inventada por ChatGPT fue una llamada de atención para toda la profesión. Explica los principales riesgos de responsabilidad: alucinaciones de los modelos (citar casos que no existen, inventar números de artículos), confianza excesiva en el output sin verificación, revelación de información confidencial del cliente a servicios de IA en la nube, y cómo articular la responsabilidad cuando la IA comete un error que perjudica al cliente. ¿Qué debería hacer siempre el abogado antes de usar el output de una IA?

4. **Confidencialidad y privacidad de datos de clientes**
La obligación de confidencialidad del abogado choca directamente con el uso de herramientas de IA en la nube que pueden usar los datos para entrenar sus modelos. Explica cómo gestionar este riesgo: qué tipo de datos pueden compartirse con herramientas de IA externas, qué garantías contractuales hay que exigir a los proveedores (data processing agreements, cláusulas de no entrenamiento con datos de clientes), cuándo es necesario informar al cliente del uso de IA, y cuándo es obligatorio usar solo herramientas desplegadas on-premise o en entorno privado.

5. **El Reglamento de IA de la Unión Europea y sus implicaciones para el sector jurídico**
El AI Act europeo tiene implicaciones directas para el uso de IA en el derecho. Explica las categorías de riesgo relevantes para el sector jurídico: los sistemas de IA de alto riesgo (administración de justicia, puntuación de crédito, recursos humanos), los requisitos de transparencia y supervisión humana para estos sistemas, las obligaciones de los despachos que despliegan sistemas de IA, y cómo el AI Act interactúa con el GDPR en el contexto del tratamiento de datos personales con IA.

6. **IA en la administración de justicia: tribunales, fiscalías y LAJ**
La IA no solo entra en el despacho del abogado: también entra en los tribunales y en las fiscalías. Explica los usos actuales y controvertidos: sistemas de predicción de reincidencia (COMPAS y sus problemas de sesgo racial), sistemas de apoyo a decisiones judiciales en Europa (el caso de los tribunales estonios), automatización de resoluciones en procedimientos masivos (multas de tráfico, notificaciones electrónicas), y los límites éticos y constitucionales de la IA en la administración de justicia.

7. **Impacto en el mercado de trabajo jurídico y nuevos modelos de negocio**
¿La IA va a reemplazar a los abogados? Explica el impacto diferencial según el tipo de trabajo jurídico: qué tareas se van a automatizar (revisión rutinaria de documentos, investigación básica, redacción de documentos estándar), qué tareas seguirán siendo difíciles de automatizar (juicio estratégico, gestión de relaciones, litigación compleja, asesoramiento en situaciones novedosas), y qué nuevos modelos de negocio jurídico emergen gracias a la IA (legal tech companies, despachos de alto volumen con IA, asesoramiento jurídico democratizado).

8. **Plan de adopción de IA para un despacho o departamento jurídico**
¿Cómo implementar IA en mi práctica jurídica de forma responsable? Explica el proceso: evaluación de necesidades y casos de uso prioritarios, selección y evaluación de herramientas (con criterios de privacidad, calidad y precio), formación del equipo (tanto en el uso de las herramientas como en los riesgos), definición de protocolos de verificación del output de la IA, y cómo medir si la adopción de IA está mejorando la eficiencia sin comprometer la calidad.

**Entregable:**
Una política de uso de IA para mi despacho o departamento jurídico, que cubra qué herramientas están permitidas, en qué circunstancias, con qué obligaciones de verificación, y cómo gestionar la confidencialidad de los datos de clientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Entender y adoptar IA jurídica de forma responsable en la práctica legal',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'AI-powered CS: cuando la IA gestiona la primera línea de atención al cliente',
                'description'       => 'Implementa IA en tu operación de customer success para escalar la atención sin escalar el equipo, manteniendo la calidad y la conexión humana donde más importa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia implementando herramientas de inteligencia artificial en operaciones de atención al cliente en empresas SaaS B2B en crecimiento. Necesito entender cómo implementar IA en mi operación de CS de forma estratégica: qué automatizar, qué mantener humano, cómo seleccionar las herramientas adecuadas, y cómo gestionar el cambio en el equipo.

**Mi contexto de CS:**
- Tipo de producto y empresa: [SaaS B2B, plataforma, herramienta de productividad]
- Volumen de tickets o interacciones mensuales: [número aproximado]
- Canales de atención actuales: [email, chat en vivo, teléfono, comunidad, help center]
- Tamaño del equipo de CS: [número de personas y roles]
- Mayor reto operativo actual: [no podemos escalar sin contratar, tiempo de respuesta demasiado largo, los CSMs están en tareas rutinarias en lugar de trabajo estratégico]

**Implementación de IA en customer success:**

1. **Mapa de oportunidades de IA en CS: qué automatizar y qué no**
Define dónde la IA aporta más valor en el ciclo de atención al cliente: clasificación y enrutamiento automático de tickets (sin leerlos, la IA los clasifica por tipo e intención), respuestas automáticas a consultas frecuentes (las respuestas que el equipo da cien veces al mes), resúmenes automáticos de conversaciones largas para el CSM antes de una reunión, detección de señales de churn en tickets de soporte, y sugerencias de respuesta en tiempo real para los agentes (AI co-pilot). Para cada aplicación, explica qué KPI mejora y qué riesgos tiene.

2. **Chatbots y asistentes de primera línea: cuándo funcionan y cuándo frustran**
Los chatbots tienen mala reputación porque muchos se implementaron mal. Explica la diferencia entre un chatbot de reglas (árbol de decisión rígido) y un agente de IA con LLM (que entiende lenguaje natural y puede manejar conversaciones abiertas), cuándo tiene sentido implementar cada tipo, cómo diseñar una experiencia de chatbot que no frustre al cliente (qué preguntas puede resolver, cómo escalar a humano cuando es necesario, cómo comunicar al cliente que habla con una IA), y cuáles son los criterios de éxito de un chatbot de CS.

3. **Deflexión de tickets: el KPI central de la automatización en CS**
La deflexión es el porcentaje de consultas que se resuelven sin intervención humana. Explica cómo medir la deflexión de forma honesta (distinguir entre deflexión verdadera donde el problema se resolvió y deflexión falsa donde el cliente se rindió), cómo aumentar la deflexión de forma progresiva sin degradar la satisfacción del cliente, y cuál es un ratio de deflexión razonable según el tipo de producto y cliente.

4. **AI co-pilot para agentes de CS: el modelo más seguro de implementación**
En lugar de reemplazar al agente humano, la IA puede ser su co-piloto. Explica cómo funciona el modelo de AI-assisted support: sugerencias de respuesta que el agente puede editar o rechazar, acceso instantáneo a todo el historial del cliente y el contexto del ticket, búsqueda semántica en la base de conocimiento para encontrar la respuesta correcta, y detección de sentimiento del cliente en tiempo real para alertar al agente. Qué herramientas implementan este modelo (Intercom Fin, Zendesk AI, Freshdesk).

5. **Detección proactiva de churn con IA**
La mejor intervención de CS es la que evita que el cliente se queje o cancele. Explica cómo usar señales de los tickets de soporte, el uso del producto y el comportamiento del cliente para predecir el churn antes de que ocurra: qué señales son más predictoras en el contexto de soporte (tickets repetidos sobre el mismo problema, sentimiento negativo en las interacciones, uso decreciente post-incidente), cómo configurar alertas automáticas para el CSM responsable, y cómo diseñar la intervención proactiva.

6. **Personalización de la experiencia de cliente con IA**
La IA permite personalizar la experiencia de atención a una escala imposible con recursos humanos. Explica cómo usar IA para personalizar: contenido de onboarding según el perfil y el comportamiento del cliente, recomendaciones de funcionalidades basadas en el uso actual, mensajes proactivos en el momento de mayor riesgo o mayor oportunidad, y cómo hacer que la personalización se sienta genuina y útil en lugar de invasiva.

7. **Gestión del cambio y formación del equipo de CS**
La implementación de IA en CS crea ansiedad en el equipo: ¿me va a reemplazar la IA? Explica cómo gestionar el cambio: cómo comunicar la visión de IA como herramienta de apoyo (no de sustitución), cómo redefinir el rol del CSM cuando la IA gestiona lo rutinario (más tiempo para relaciones estratégicas, QBRs, expansión), cómo formar al equipo para trabajar con herramientas de IA, y cómo medir si la IA está liberando tiempo del equipo para trabajo de mayor valor.

8. **Métricas de éxito de la IA en CS**
¿Cómo sé si la implementación de IA en CS está funcionando? Propón un cuadro de mando completo: métricas de eficiencia (tasa de deflexión, tiempo de primera respuesta, tiempo de resolución, tickets por agente), métricas de calidad (CSAT en interacciones con IA vs. humanas, tasa de escalaciones, tasa de reapertura de tickets), y métricas de impacto en negocio (retención, churn, NRR).

**Entregable:**
Una hoja de ruta de implementación de IA en CS en doce meses, con las fases de implementación, las herramientas a evaluar en cada fase, el presupuesto aproximado, y los criterios de éxito para decidir cuándo pasar a la siguiente fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar IA en customer success para escalar la atención sin degradar la calidad',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance en IA: cómo especializarse y trabajar en proyectos de inteligencia artificial',
                'description'       => 'Descubre cómo posicionarte como freelance especialista en IA: qué habilidades desarrollar, cómo encontrar proyectos y cómo construir una práctica sostenible en el sector más demandado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de carrera especializado en el mercado de trabajo de la inteligencia artificial, con experiencia asesorando a profesionales que quieren hacer la transición al sector de IA como freelancers o consultores independientes. Necesito un plan completo para posicionarme como freelance en el ecosistema de la inteligencia artificial: qué especialidades son más demandadas, qué habilidades desarrollar, cómo conseguir los primeros proyectos, y cómo construir una práctica sostenible.

**Mi situación de partida:**
- Perfil profesional actual: [desarrollador, diseñador, consultor de negocio, marketing, RRHH, sin perfil técnico]
- Habilidades actuales relacionadas con IA: [usuario de herramientas de IA, experiencia básica con APIs, sin experiencia, algo de Python]
- Objetivo: [aumentar ingresos actuales con proyectos de IA, transición completa al sector IA, complementar trabajo por cuenta ajena]
- Disponibilidad para formación: [número de horas semanales que puedo dedicar]
- Mercado objetivo: [local, hispanohablante internacional, global en inglés]

**Plan completo para ser freelance en IA:**

1. **El mapa de especialidades freelance en IA más demandadas**
El ecosistema de IA tiene nichos muy diversos con distintos niveles de competencia y remuneración. Explica las principales especialidades para freelancers: prompt engineering y optimización de LLMs (accesible con background no técnico), implementación de soluciones con APIs de IA (requiere programación básica), fine-tuning de modelos para casos de uso específicos (requiere ML), consultoría de adopción de IA en empresas (requiere conocimiento de negocio y IA), formación en IA para equipos corporativos, creación de contenido y comunicación sobre IA, evaluación y red-teaming de sistemas de IA, y construcción de agentes y flujos de trabajo con IA. Para cada especialidad, explica el nivel de entrada, la demanda actual, y el rango de tarifas.

2. **Evaluación honesta de tu punto de partida y gaps de habilidades**
Antes de lanzarse, hay que saber dónde uno está. Diseña un framework de autoevaluación: habilidades técnicas (programación, estadística básica, manejo de APIs, uso de herramientas de IA), habilidades de dominio (conocimiento de un sector o función donde aplicar la IA), habilidades de negocio (gestión de proyectos, comunicación con clientes, ventas), y habilidades de producción de contenido (si quiero posicionarme a través de contenido). Para cada gap identificado, propón el recurso de formación más eficiente.

3. **Ruta de formación según tu perfil y objetivo**
El camino de formación depende mucho del punto de partida. Diseña tres rutas de formación según perfil: ruta para el profesional de negocio sin base técnica (empieza por prompt engineering, automatización no-code con Zapier/Make, y consultoría de adopción), ruta para el desarrollador que quiere especializarse en IA (APIs de LLMs, LangChain, RAG, fine-tuning, MLOps básico), y ruta para el perfil mixto técnico-negocio (arquitectura de soluciones de IA, gestión de proyectos de IA, diseño de evaluaciones de sistemas). Para cada ruta, explica los recursos recomendados y el tiempo estimado hasta el primer proyecto.

4. **Construcción del portafolio: los proyectos que impresionan a los clientes**
En IA, el portafolio habla más que el CV. Explica cómo construir un portafolio de IA cuando no tienes proyectos de clientes: qué proyectos personales demuestran competencia real (un chatbot sobre tus propios documentos, un sistema RAG para un caso de uso concreto, una herramienta de automatización útil, una evaluación publicada de herramientas de IA), cómo documentar y presentar los proyectos (GitHub con README claro, post en LinkedIn, demo en vídeo), y cómo hacer los primeros proyectos para clientes a tarifa reducida o gratis para construir el portafolio inicial.

5. **Posicionamiento y propuesta de valor diferencial**
En un mercado donde todos dicen ser expertos en IA, el posicionamiento es crítico. Explica cómo diferenciarse: la combinación de IA más conocimiento de dominio (IA para legal, IA para marketing, IA para salud) es más valiosa que IA genérica, cómo articular el valor de negocio de lo que haces (no "implemento LLMs" sino "reduzco el tiempo de análisis de documentos en un setenta por ciento"), y cómo construir autoridad en un nicho específico a través de contenido, casos de éxito y comunidad.

6. **Cómo conseguir los primeros proyectos de IA**
Los primeros proyectos son los más difíciles. Diseña una estrategia de captación para las primeras doce semanas: empieza por tu red cercana (quién en tu red tiene un problema que la IA puede resolver), activa canales de freelance (Upwork, Toptal, Malt, plataformas de nicho en IA), genera presencia en comunidades donde están los clientes potenciales (LinkedIn, Slack communities de startups, comunidades de tu sector de especialización), y cómo usar contenido de demostración para atraer consultas inbound.

7. **Modelo de negocio y tarificación**
¿Cómo cobrar por trabajo de IA? Explica los modelos de tarificación más comunes para freelancers de IA: tarifa por hora (cuánto cobrar según especialidad y mercado), precio por proyecto (cómo calcular para no perder dinero), retainer mensual (para clientes con trabajo continuo), y precio basado en valor (cuando puedes cuantificar el ROI del proyecto). Cómo evitar proyectos que empiezan bien y derivan en scope creep, y cómo subir las tarifas a medida que ganas experiencia y reputación.

8. **Sostenibilidad y crecimiento a largo plazo**
El freelance en IA tiene riesgos específicos: el sector evoluciona muy rápido y lo que sabes hoy puede quedar obsoleto. Explica cómo construir una práctica sostenible a largo plazo: cuánto tiempo dedicar a formación continua, cómo monitorizar las tendencias del sector para anticipar demanda futura, cuándo tiene sentido pasar de freelance a fundar un producto o una agencia, y cómo diversificar los ingresos (proyectos de clientes, cursos, contenido, advisory) para reducir la dependencia de un único tipo de ingreso.

**Entregable:**
Un plan de acción personalizado para los próximos seis meses, con hitos mensuales, los recursos de formación prioritarios para mi perfil específico, y los canales de captación de clientes donde debo estar activo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Posicionarse como freelance especialista en IA con un plan claro de entrada al sector',
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
