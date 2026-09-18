<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills347Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Modelos predictivos para optimizar campañas de marketing',
                'description'      => 'Aplica machine learning para predecir el comportamiento de tus clientes y optimizar el rendimiento de tus campañas. Este prompt te guía para diseñar modelos predictivos de conversión, churn y valor de cliente sin necesidad de ser data scientist.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing analytics y machine learning aplicado con experiencia en equipos de marketing de empresas de comercio electrónico, SaaS y retail. Sabes cómo traducir conceptos técnicos de ML en decisiones de negocio accionables para perfiles no técnicos.

Quiero aplicar modelos predictivos de machine learning para mejorar el rendimiento de mis campañas de marketing. Necesito que me guíes desde la identificación del caso de uso correcto hasta la interpretación de resultados y la toma de decisiones.

**CONTEXTO DE MI EQUIPO:**
[Describe tu tipo de empresa, sector, tamaño de la base de clientes, fuentes de datos disponibles (CRM, Google Analytics, plataforma de email, e-commerce, etc.) y nivel técnico del equipo de marketing.]

**LO QUE NECESITO:**

1. **Selección del caso de uso de ML para marketing**
   - Explica los 5 casos de uso de ML más impactantes en marketing: predicción de conversión, predicción de churn, segmentación de clientes (clustering), recomendación de productos y predicción de valor de cliente (LTV).
   - Para cada caso de uso, indica qué datos necesito, qué tipo de modelo aplica (clasificación, regresión, clustering) y qué decisión de negocio permite tomar.
   - Ayúdame a priorizar cuál debo abordar primero según el impacto esperado y los datos disponibles en mi empresa.

2. **Preparación de datos para el modelo**
   - Explica qué características (features) son más predictivas para el caso de uso que he priorizado.
   - Describe cómo exportar y limpiar los datos desde las herramientas más comunes (Google Analytics 4, HubSpot, Klaviyo, Shopify, Salesforce).
   - Indica cuántos registros mínimos necesito para que el modelo sea estadísticamente significativo.

3. **Construcción del modelo sin código (Low-code/No-code)**
   - Presenta las herramientas más accesibles para construir modelos predictivos sin ser data scientist: Google Looker Studio ML, BigML, Obviously AI, Pecan AI, DataRobot.
   - Para cada herramienta, indica el nivel de conocimiento técnico requerido, el coste aproximado y el tipo de output que genera.
   - Describe el flujo completo de trabajo: importar datos → entrenar el modelo → evaluar resultados → integrar en la decisión de marketing.

4. **Evaluación del modelo: métricas clave**
   - Explica en lenguaje accesible las métricas de evaluación más importantes: precisión, recall, F1, ROC-AUC para modelos de clasificación; RMSE y R² para regresión.
   - Indica qué valores son aceptables para cada métrica y cuándo el modelo no es suficientemente fiable para tomar decisiones.
   - Explica el concepto de overfitting y cómo detectarlo sin ser técnico.

5. **Aplicación de las predicciones en campañas**
   - Cómo usar un modelo de predicción de conversión para personalizar mensajes y ofertas por segmento de probabilidad.
   - Cómo usar un modelo de churn para diseñar una campaña de retención proactiva: a quién enviar, cuándo y con qué incentivo.
   - Cómo integrar las predicciones en herramientas de email marketing o paid media (audiencias personalizadas en Meta o Google Ads).

6. **Medición del impacto del ML en resultados de marketing**
   - Propón un diseño de experimento A/B para medir si el modelo mejora realmente los resultados frente a la segmentación tradicional.
   - Define los KPIs que deben mejorar: tasa de conversión, coste por adquisición, tasa de retención, ROAS, LTV por cohorte.
   - Explica cuánto tiempo se necesita para ver resultados estadísticamente significativos.

7. **Consideraciones éticas y de privacidad**
   - Explica qué implicaciones tiene el RGPD para el uso de ML con datos de clientes en la Unión Europea.
   - Indica qué datos nunca deben usarse como features (datos sensibles, inferencias discriminatorias) y por qué.

8. **Hoja de ruta para un equipo de marketing que empieza con ML**
   - Propón un plan de 90 días para implementar el primer modelo predictivo: semana a semana, con hitos claros y recursos necesarios.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Usa lenguaje accesible para perfiles de marketing, evitando jerga técnica innecesaria. Incluye ejemplos concretos con datos ficticios realistas para ilustrar cada concepto. El tono debe ser práctico y orientado a resultados de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar modelos predictivos de ML para optimizar campañas y segmentación',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo (Software)
            [
                'profession_id'    => 2,
                'title'            => 'MLOps: despliegue y mantenimiento de modelos de machine learning en producción',
                'description'      => 'Aprende a diseñar una pipeline de MLOps para llevar modelos de machine learning a producción y mantenerlos funcionando de forma fiable. El prompt cubre desde el versionado de modelos hasta el monitoreo de drift y la automatización del reentrenamiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de MLOps senior con experiencia en el diseño e implementación de pipelines de machine learning en entornos de producción usando herramientas como MLflow, Kubeflow, Vertex AI, SageMaker y plataformas cloud (AWS, GCP, Azure).

Necesito que me ayudes a diseñar e implementar una estrategia de MLOps para llevar nuestros modelos de ML a producción y mantenerlos operativos con calidad y eficiencia.

**CONTEXTO TÉCNICO:**
[Describe tu stack tecnológico actual (lenguaje, frameworks de ML, plataforma cloud, herramientas de CI/CD), el tipo de modelos que desplegáis (clasificación, regresión, NLP, computer vision), la frecuencia de actualización esperada y el tamaño del equipo de data science/ingeniería.]

**LO QUE NECESITO:**

1. **Arquitectura de la pipeline de MLOps**
   - Describe los componentes esenciales de una pipeline de MLOps production-ready: ingesta de datos, feature store, entrenamiento, evaluación, registro, despliegue, monitoreo y reentrenamiento.
   - Propón una arquitectura referencia para mi stack tecnológico, con las herramientas más adecuadas para cada componente.
   - Explica las diferencias entre despliegue en batch (inferencia periódica) y en tiempo real (REST API o streaming) y cuándo usar cada uno.

2. **Versionado de modelos y experimentos**
   - Explica cómo implementar el tracking de experimentos con MLflow u otras herramientas: qué loguear (parámetros, métricas, artefactos), cómo comparar experimentos.
   - Define un esquema de versionado semántico para modelos de ML y cuándo incrementar cada número de versión.
   - Propón cómo gestionar el model registry: quién puede aprobar un modelo para producción, qué criterios de calidad debe cumplir.

3. **CI/CD para modelos de ML**
   - Describe cómo adaptar un pipeline de CI/CD (GitHub Actions, GitLab CI, Jenkins) para el ciclo de vida de un modelo de ML.
   - Define los pasos del pipeline: lint de código, tests unitarios, tests de datos, entrenamiento de validación, evaluación de métricas, despliegue condicional.
   - Explica qué es el "shadow mode" o "canary deployment" para modelos y cuándo usarlo.

4. **Feature Store**
   - Explica qué es un feature store, cuándo es necesario y cuándo es sobre-ingeniería.
   - Compara las principales opciones: Feast, Tecton, Vertex AI Feature Store, SageMaker Feature Store.
   - Describe cómo evitar el "training-serving skew" (discrepancia entre las features usadas en entrenamiento y en producción).

5. **Monitoreo de modelos en producción**
   - Define los tipos de drift que deben monitorizarse: data drift (cambio en la distribución de inputs), concept drift (cambio en la relación input-output), model performance drift.
   - Propón las métricas y herramientas para detectar cada tipo de drift (Evidently AI, WhyLabs, Fiddler, Arize).
   - Explica cómo definir alertas y umbrales de degradación que activen el reentrenamiento automático o la intervención humana.

6. **Automatización del reentrenamiento**
   - Describe las estrategias de reentrenamiento: programado (time-based), basado en métricas (trigger-based) y continuo (online learning).
   - Propón cómo automatizar el ciclo completo: detección de degradación → reentrenamiento → evaluación → despliegue sin intervención humana.
   - Explica cómo garantizar que el nuevo modelo siempre es mejor que el actual antes de reemplazarlo.

7. **Gestión de datos de entrenamiento**
   - Define las mejores prácticas para el versionado de datasets: DVC, Delta Lake, LakeFS.
   - Explica cómo garantizar la reproducibilidad: mismo dataset + mismo código = mismo modelo.
   - Propón cómo gestionar los datos sensibles o regulados (RGPD) en pipelines de ML.

8. **Costes y optimización de la infraestructura de MLOps**
   - Explica cómo estimar y controlar los costes de entrenamiento e inferencia en cloud.
   - Propón estrategias de optimización: instancias spot para entrenamiento, cuantización de modelos, model pruning, caching de predicciones.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers técnicos. Incluye fragmentos de código o pseudocódigo donde sea relevante, comparativas de herramientas en formato tabla de texto, y diagramas de arquitectura en formato de lista anidada. El tono debe ser técnico y preciso, orientado a un equipo de ingeniería con experiencia en software pero que está construyendo su primera pipeline de MLOps.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar pipelines de MLOps para producción',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces para sistemas y herramientas de machine learning',
                'description'      => 'Aprende a diseñar experiencias de usuario para dashboards de ML, herramientas de etiquetado de datos y sistemas de recomendación. El prompt aborda los retos únicos de diseñar para la IA: incertidumbre, explicabilidad y confianza.',
                'prompt_content'   => <<<'EOT'
Actúa como un UX designer especializado en inteligencia artificial y machine learning, con experiencia en el diseño de dashboards de analítica, herramientas de etiquetado de datos, sistemas de recomendación y productos con IA explicable (XAI).

Necesito que me ayudes a diseñar la experiencia de usuario para un producto o herramienta que incorpora machine learning. Los retos de UX en estos sistemas son únicos: los usuarios deben confiar en predicciones inciertas, entender por qué el sistema recomienda algo y saber cuándo anular las decisiones del modelo.

**CONTEXTO DEL SISTEMA:**
[Describe el tipo de sistema de ML que vas a diseñar: clasificador con interfaz de revisión humana, sistema de recomendación, dashboard de predicciones, herramienta de etiquetado para entrenamiento, o cualquier otro. Incluye el perfil del usuario final y su nivel de conocimiento técnico.]

**LO QUE NECESITO:**

1. **Principios de UX para sistemas con IA**
   - Explica los 6 principios de diseño específicos para productos con IA: transparencia, controlabilidad, calibración de la confianza, reversibilidad, consistencia y accesibilidad cognitiva.
   - Para cada principio, proporciona un ejemplo de patrón de diseño concreto (cómo se aplica en la interfaz).
   - Explica la diferencia entre un sistema de IA que "actúa por el usuario" y uno que "asiste al usuario" y cómo afecta al diseño.

2. **Comunicación de la incertidumbre**
   - Describe cómo representar visualmente la confianza o incertidumbre de una predicción sin confundir al usuario (porcentajes, barras de confianza, colores, intervalos).
   - Explica cuándo mostrar la incertidumbre y cuándo es mejor omitirla para no generar ansiedad innecesaria.
   - Proporciona 3 ejemplos de cómo diferentes industrias comunican la incertidumbre al usuario: medicina, finanzas, logística.

3. **Explicabilidad de las decisiones del modelo (XAI Design)**
   - Describe los patrones de diseño para comunicar "por qué el sistema recomienda X": feature importance visual, ejemplos similares, contrafactuales ("si hubiera sido X, la predicción sería Y").
   - Explica cómo adaptar el nivel de explicación al perfil del usuario: usuario experto vs. usuario no técnico.
   - Propón cómo diseñar el flujo de "ver el razonamiento" sin interrumpir el flujo principal de trabajo.

4. **Control humano y anulación del modelo (Human-in-the-Loop)**
   - Diseña el patrón de UX para que el usuario pueda revisar, corregir o anular las predicciones del modelo de forma fácil.
   - Explica cómo registrar las correcciones del usuario para retroalimentar el reentrenamiento del modelo.
   - Define cuándo el sistema debe pedir confirmación humana obligatoria (decisiones de alto impacto) y cuándo puede actuar de forma autónoma.

5. **Diseño de herramientas de etiquetado de datos**
   - Si el producto incluye una herramienta para que humanos etiqueten datos de entrenamiento, describe los principios de diseño para maximizar la velocidad, precisión y consistencia del etiquetado.
   - Propón cómo diseñar el flujo de etiquetado: presentación de ejemplos, opciones de etiqueta, atajos de teclado, revisión de etiquetas anteriores.
   - Explica cómo mostrar el progreso y mantener la motivación en tareas de etiquetado repetitivas.

6. **Onboarding para sistemas de ML**
   - Propón cómo diseñar el onboarding de un usuario nuevo a un sistema de ML: qué necesita aprender primero, cómo calibrar su confianza en el modelo, cuándo presentar las funciones avanzadas.
   - Explica cómo gestionar el período "en frío" del modelo cuando aún no tiene suficientes datos del usuario para hacer buenas recomendaciones.

7. **Feedback loops y mejora continua del producto**
   - Diseña los mecanismos de feedback implícito y explícito que permitan al sistema aprender del comportamiento del usuario.
   - Explica cómo comunicar al usuario que sus acciones mejoran el sistema sin ser invasivo.

8. **Checklist de diseño de UX para sistemas de ML**
   Lista de 12 preguntas que todo diseñador debe responder antes de entregar el diseño de un sistema con IA.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Describe los patrones de diseño con suficiente detalle para que sean implementables, incluyendo ejemplos de copy de interfaz, descripciones de componentes y flujos. El tono debe ser práctico y orientado a un diseñador que trabaja en equipo con data scientists e ingenieros.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar experiencias de usuario para productos y herramientas con IA y ML',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Sistemas de recomendación para equipos de ventas: venta cruzada y upselling con ML',
                'description'      => 'Aprende a utilizar sistemas de recomendación basados en machine learning para identificar oportunidades de cross-selling y upselling en tu cartera de clientes. El prompt te guía desde la lógica del modelo hasta su aplicación en el proceso de ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en revenue intelligence y machine learning aplicado a ventas B2B y B2C, con experiencia en el diseño e implementación de sistemas de recomendación para equipos comerciales en sectores como SaaS, retail, servicios financieros y telecomunicaciones.

Quiero implementar un sistema de recomendación basado en machine learning para que mi equipo de ventas identifique las mejores oportunidades de cross-selling y upselling en su cartera de clientes.

**CONTEXTO DE MI EQUIPO COMERCIAL:**
[Describe el tipo de empresa y sector, el tamaño del catálogo de productos o servicios, el número de clientes activos, el CRM que usas, el perfil del equipo de ventas (técnico/no técnico) y los datos históricos disponibles (historial de compras, interacciones, tickets de soporte).]

**LO QUE NECESITO:**

1. **Fundamentos de los sistemas de recomendación para ventas**
   - Explica en lenguaje accesible los tres tipos de sistemas de recomendación: filtrado colaborativo (basado en comportamiento de clientes similares), filtrado basado en contenido (basado en características del producto) e híbrido.
   - Para cada tipo, indica cuándo es más apropiado en un contexto de ventas, qué datos necesita y cuáles son sus limitaciones.
   - Explica el "problema del arranque en frío" (cold start) cuando no hay suficientes datos de un cliente nuevo y cómo mitigarlo.

2. **Datos necesarios para construir el modelo**
   - Define qué datos históricos son más valiosos para un sistema de recomendación de ventas: historial de compras, productos vistos, tiempo de uso, tickets de renovación, segmento de cliente, sector e industria.
   - Explica cómo exportar y estructurar estos datos desde los CRMs más comunes (Salesforce, HubSpot, Pipedrive).
   - Indica la calidad mínima de datos necesaria: qué porcentaje de registros incompletos invalida el modelo.

3. **Herramientas y plataformas para implementar el sistema**
   - Presenta las opciones disponibles según el nivel técnico del equipo: soluciones nativas de CRM con IA (Salesforce Einstein, HubSpot AI), plataformas especializadas (Clari, Gong, People.ai) y soluciones custom (Python + Surprise library, AWS Personalize, Google Recommendations AI).
   - Para cada opción, indica el coste aproximado, el tiempo de implementación y los requisitos técnicos.

4. **Integración del sistema en el proceso de ventas**
   - Describe cómo presentar las recomendaciones al vendedor de forma que las use: en el CRM, en una app móvil, en el briefing semanal, en la preparación de llamadas.
   - Explica cómo equilibrar las recomendaciones del modelo con el criterio del vendedor: cuándo seguirlas y cuándo ignorarlas.
   - Propón cómo gamificar el uso del sistema para fomentar la adopción del equipo.

5. **Estrategia de cross-selling y upselling con ML**
   - Explica cómo usar las recomendaciones para diseñar campañas de cross-selling: a quién contactar, con qué producto, en qué momento del ciclo de vida y con qué argumento.
   - Define las señales de compra (buying signals) que el modelo puede detectar en el comportamiento del cliente y que indican el momento óptimo para una conversación de upselling.
   - Propón cómo personalizar el pitch de ventas basándose en las recomendaciones del modelo.

6. **Medición del impacto**
   - Define los KPIs para medir si el sistema de recomendación mejora los resultados comerciales: tasa de aceptación de recomendaciones, incremento en ARR por cross-sell/upsell, número de productos por cliente, cobertura de recomendaciones en la cartera.
   - Propón un diseño de experimento para demostrar el ROI del sistema a la dirección comercial.
   - Indica cada cuánto tiempo debe reentrenarse el modelo para mantener su precisión.

7. **Ética y privacidad en las recomendaciones comerciales**
   - Explica qué límites éticos deben respetarse en un sistema de recomendación: no aprovecharse de vulnerabilidades del cliente, transparencia sobre el uso de datos, cumplimiento del RGPD.
   - Define qué tipo de recomendaciones son inapropiadas desde el punto de vista ético aunque el modelo las genere.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Usa lenguaje accesible para perfiles comerciales no técnicos. Incluye ejemplos de recomendaciones concretas ("el modelo sugiere ofrecer el producto X al cliente Y porque..."), comparativas de herramientas y métricas de referencia. El tono debe ser práctico y orientado a resultados de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar sistemas de recomendación con ML para cross-selling y upselling',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de producto basada en machine learning: cuándo y cómo añadir IA a tu producto',
                'description'      => 'Aprende a evaluar, priorizar e implementar funcionalidades de machine learning en tu producto de forma estratégica. El prompt te ayuda a decidir qué problemas resuelve mejor la IA, cómo medir su impacto y cómo gestionar la complejidad añadida.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Producto con experiencia en productos de IA y machine learning, que ha liderado la incorporación de capacidades de ML en productos B2B y B2C en sectores como SaaS, fintech, salud digital y e-commerce.

Necesito que me ayudes a definir la estrategia de mi producto para incorporar machine learning de forma que añada valor real a los usuarios y sea técnicamente viable para mi equipo.

**CONTEXTO DEL PRODUCTO:**
[Describe tu producto actual, el problema principal que resuelve, el perfil del usuario, el stack tecnológico, el tamaño del equipo de producto e ingeniería y el nivel de madurez de los datos disponibles.]

**LO QUE NECESITO:**

1. **Cuándo tiene sentido añadir ML a un producto**
   - Define los criterios que indican que un problema es un buen candidato para ML: datos disponibles en cantidad y calidad suficiente, el problema es demasiado complejo para reglas heurísticas, el valor del aprendizaje continuo es alto, el coste de un error es asumible.
   - Explica cuándo ML NO es la respuesta: cuando hay pocos datos, cuando las reglas de negocio son suficientes, cuando el coste de mantenimiento es desproporcionado.
   - Propón un marco de decisión "¿ML o no ML?" que pueda aplicarse a cualquier feature del roadmap.

2. **Discovery de oportunidades de ML en el producto**
   - Describe cómo identificar los puntos de fricción del usuario que podrían resolverse con predicción, personalización, automatización o detección de anomalías.
   - Propón técnicas de research específicas para descubrir oportunidades de ML: análisis de logs de comportamiento, entrevistas enfocadas en tareas repetitivas, análisis de soporte al cliente.
   - Presenta el "ML opportunity canvas": un framework para evaluar oportunidades de ML con dimensiones de valor, viabilidad, datos y riesgo.

3. **Priorización de features de ML en el roadmap**
   - Adapta los frameworks de priorización habituales (RICE, ICE, Kano) para tener en cuenta las dimensiones específicas del ML: disponibilidad de datos de entrenamiento, tiempo hasta el primer modelo útil, riesgo de alucinación o error del modelo.
   - Explica cómo gestionar la incertidumbre técnica del ML (no sabes si el modelo funcionará hasta que lo construyes) en el proceso de planning.
   - Define cómo escribir user stories y criterios de aceptación para features de ML.

4. **Métricas de producto para features de ML**
   - Diferencia entre métricas del modelo (precisión, recall, AUC) y métricas de producto (engagement, retención, conversión, NPS) y explica por qué ambas son necesarias.
   - Propón cómo diseñar un experimento A/B para medir el impacto de una feature de ML en las métricas de producto.
   - Define el "North Star Metric" para una feature de ML: ¿qué comportamiento del usuario indica que el modelo está añadiendo valor real?

5. **Gestión de la complejidad añadida por el ML**
   - Explica los riesgos específicos de los productos con ML: degradación silenciosa del modelo, sesgos en las predicciones, dependencia de datos de terceros, explicabilidad reducida.
   - Propón cómo incorporar la deuda técnica de ML en la planificación del roadmap.
   - Define qué controles de calidad y revisiones periódicas son necesarios para un producto con componentes de ML.

6. **Construcción y comunicación del business case de ML**
   - Proporciona una plantilla para presentar el business case de una feature de ML al liderazgo: problema del usuario, solución propuesta, datos necesarios, tiempo y coste de desarrollo, impacto esperado en métricas de negocio, riesgos y mitigaciones.
   - Explica cómo comunicar la incertidumbre del ML (no podemos garantizar X% de precisión hasta que lo probamos) a stakeholders no técnicos.

7. **Estrategia de lanzamiento de features de ML**
   - Describe las fases de lanzamiento de una feature de ML: piloto interno, beta cerrada, rollout gradual, lanzamiento general.
   - Explica cómo recoger feedback de usuarios sobre predicciones o recomendaciones y usarlo para mejorar el modelo.
   - Define el plan de comunicación al usuario: cómo explicar que la feature usa IA y qué significa para su privacidad y experiencia.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Incluye frameworks visualizables como listas estructuradas, plantillas de documentos y ejemplos concretos de decisiones de producto. El tono debe ser estratégico y práctico, orientado a un PM que trabaja con data scientists e ingenieros y necesita alinear a stakeholders de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir la estrategia de producto para incorporar ML de forma efectiva',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Machine learning para selección y retención de talento en RRHH',
                'description'      => 'Aplica modelos de ML para mejorar los procesos de selección, predecir el riesgo de fuga de talento y personalizar el desarrollo de empleados. El prompt aborda tanto las posibilidades técnicas como las consideraciones éticas y legales.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en People Analytics y machine learning aplicado a recursos humanos, con experiencia en empresas que han implementado modelos predictivos para selección de talento, predicción de abandono y personalización del desarrollo profesional, con especial atención al cumplimiento normativo y la ética.

Quiero explorar cómo el machine learning puede mejorar los procesos de selección y retención de talento en mi organización. Necesito entender qué es posible, qué es ético y cómo implementarlo de forma responsable.

**CONTEXTO DE MI ORGANIZACIÓN:**
[Describe el tamaño de la plantilla, el sector, los procesos de selección actuales, las herramientas de RRHH disponibles (ATS, HRIS), los datos históricos disponibles sobre empleados y el marco regulatorio aplicable (UE, España).]

**LO QUE NECESITO:**

1. **Casos de uso de ML en selección de talento**
   - Screening y preselección de CVs: cómo funciona, qué modelos se usan, qué sesgos introduce y cómo mitigarlos.
   - Análisis de entrevistas en vídeo con IA: qué analizan estos sistemas, cuáles son sus limitaciones y los riesgos éticos y legales en la UE (Reglamento de IA de la UE).
   - Predicción de éxito en el puesto: qué variables son predictivas del rendimiento futuro y cuáles no deben usarse nunca (edad, género, origen étnico).
   - Para cada caso de uso, indica si es recomendable implementarlo hoy o si los riesgos superan los beneficios.

2. **Modelos predictivos de abandono (churn de empleados)**
   - Explica cómo construir un modelo de predicción de riesgo de fuga: qué variables incluir (antigüedad, evaluaciones, participación en formación, interacciones con RRHH, variaciones en productividad), qué tipo de modelo aplica y con qué frecuencia reentrenarlo.
   - Define cómo usar las predicciones de forma ética: el modelo debe ser una herramienta de apoyo para conversaciones de retención, nunca un sistema de vigilancia.
   - Propón cómo comunicar al equipo de managers los resultados del modelo sin crear discriminación o profecías autocumplidas.

3. **Personalización del desarrollo profesional con ML**
   - Explica cómo los sistemas de recomendación pueden personalizar los planes de desarrollo, las formaciones y las asignaciones de proyectos para cada empleado.
   - Presenta ejemplos de plataformas que ya implementan esto: Cornerstone, Eightfold AI, Beamery, Fuel50.
   - Define qué datos de empleados pueden usarse para personalizar el desarrollo y cuáles están fuera de límites.

4. **Cumplimiento normativo y ética del ML en RRHH**
   - Explica las implicaciones del Reglamento General de Protección de Datos (RGPD) para el uso de datos de empleados en modelos de ML.
   - Describe las restricciones del Reglamento de IA de la UE (AI Act) para los sistemas de IA en RRHH, especialmente los clasificados como "alto riesgo".
   - Define el principio de "human-in-the-loop" obligatorio para las decisiones de ML que afectan a empleados: ninguna decisión de selección, evaluación o despido puede basarse exclusivamente en un modelo automatizado.

5. **Sesgos en los modelos de ML de RRHH**
   - Explica los tipos de sesgo más comunes en los modelos de RRHH: sesgo histórico (el modelo aprende discriminación pasada), sesgo de confirmación, sesgo de representación.
   - Propón técnicas concretas para auditar y mitigar sesgos: análisis de equidad (fairness metrics), pruebas con grupos protegidos, revisión periódica por diversidad.
   - Define cuándo un modelo de selección debe ser descartado por razones éticas aunque sea técnicamente preciso.

6. **Implementación práctica paso a paso**
   - Propón un plan de implementación de 6 meses para introducir People Analytics con ML en una organización mediana: qué implementar primero, con qué herramientas, con qué equipo.
   - Define el proceso de comunicación interna con los empleados: cómo explicar que se usan modelos de ML en RRHH, qué derechos tienen y cómo ejercerlos.

7. **Métricas de impacto de ML en RRHH**
   - Define los KPIs que demuestran el valor de los modelos de ML en RRHH: reducción del tiempo de selección, mejora en la calidad de las contrataciones (medida a 6 y 12 meses), reducción del churn voluntario, mejora en la equidad del proceso de selección.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. El tono debe equilibrar la perspectiva técnica con la ética y el cumplimiento normativo. Incluye ejemplos concretos, comparativas de herramientas y marcos de decisión. Sé honesto sobre los riesgos y las limitaciones del ML en RRHH.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar ML de forma ética en selección, retención y desarrollo de talento',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Modelos predictivos de machine learning para análisis y decisiones financieras',
                'description'      => 'Aplica machine learning para mejorar la precisión de las previsiones financieras, detectar anomalías contables y evaluar el riesgo de crédito. El prompt te guía desde la selección del modelo hasta la interpretación de resultados para decisiones de negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en finanzas cuantitativas y machine learning aplicado a la gestión financiera empresarial, con experiencia en modelos de predicción financiera, detección de fraude, scoring de crédito y gestión de riesgos en empresas de distintos tamaños y sectores.

Quiero implementar modelos de machine learning para mejorar la calidad de mis análisis financieros y apoyar la toma de decisiones de negocio con predicciones más precisas.

**CONTEXTO FINANCIERO:**
[Describe el tipo de empresa, sector, tamaño (facturación, empleados), los procesos financieros actuales (previsión, reporting, control de riesgo), las herramientas disponibles (ERP, Excel, Power BI, Python) y el nivel técnico del equipo financiero.]

**LO QUE NECESITO:**

1. **Casos de uso de ML en finanzas empresariales**
   - Forecasting de ingresos y gastos: cómo los modelos de series temporales (ARIMA, Prophet, LSTM) superan a los modelos tradicionales en precisión.
   - Detección de anomalías contables y fraude: cómo los modelos de ML identifican transacciones sospechosas que escapan a los controles tradicionales.
   - Scoring de crédito de clientes y proveedores: predicción de probabilidad de impago basada en comportamiento histórico.
   - Optimización del capital de trabajo: modelos que predicen necesidades de liquidez y optimizan el ciclo de cobro-pago.
   - Para cada caso, indica el tipo de modelo más adecuado, los datos necesarios y el impacto esperado en la precisión.

2. **Forecasting financiero con ML**
   - Explica la diferencia entre los modelos estadísticos clásicos (ARIMA, Holt-Winters) y los modelos de ML (XGBoost, Random Forest, LSTM) para previsión financiera.
   - Define cuándo cada enfoque es más apropiado: series cortas vs. largas, datos estacionales, múltiples variables exógenas.
   - Propón cómo construir un modelo de forecasting de ingresos mensuales para los próximos 12 meses: qué datos usar (histórico de ventas, pipeline de CRM, variables macroeconómicas), cómo evaluar la precisión (MAPE, RMSE, intervalos de confianza).

3. **Detección de anomalías y control interno**
   - Describe cómo los modelos de detección de anomalías (Isolation Forest, Autoencoder) pueden mejorar el control interno y la auditoría financiera.
   - Explica cómo implementar un sistema de alerta temprana para transacciones inusuales: qué señales detectar, qué umbral de alerta usar, cómo gestionar los falsos positivos.
   - Indica qué datos del ERP o del sistema contable son necesarios y cómo prepararlos.

4. **Herramientas para el equipo financiero sin perfil técnico**
   - Presenta las herramientas de forecasting con ML más accesibles para equipos financieros: Anaplan, Workday Adaptive Planning, Prophix, Planful, DataRobot Finance.
   - Explica cómo integrar modelos de ML con Excel, Power BI o Google Sheets para que el equipo financiero pueda consumir las predicciones sin programar.

5. **Interpretabilidad de los modelos financieros**
   - Explica por qué la interpretabilidad es especialmente importante en finanzas: regulación, auditoría, responsabilidad de las decisiones.
   - Describe técnicas de explicabilidad: SHAP values, LIME, importancia de variables, para entender por qué el modelo predice lo que predice.
   - Indica qué modelos son inherentemente más interpretables (árboles de decisión, regresión logística) y cuándo sacrificar interpretabilidad por precisión.

6. **Gestión del riesgo del modelo financiero**
   - Define los riesgos específicos de usar ML en decisiones financieras: overfitting, cambios de régimen, dependencia de datos históricos que no reflejan el futuro.
   - Propón un protocolo de validación de modelos financieros antes de usarlos en decisiones reales: backtesting, stress testing, validación con expertos de negocio.
   - Explica cómo establecer límites de confianza y cuándo el modelo debe ceder ante el criterio del analista.

7. **Plan de implementación para el departamento financiero**
   - Propón una hoja de ruta de 6 meses para introducir ML en el departamento financiero: empezando por el caso de uso de mayor impacto y menor riesgo.
   - Define qué habilidades debe desarrollar el equipo financiero para trabajar con ML: no es necesario programar, pero sí entender cómo evaluar y usar los modelos.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Incluye comparativas de modelos, métricas de evaluación con valores de referencia, ejemplos de casos de uso concretos y herramientas con nivel de accesibilidad. El tono debe ser técnico pero comprensible para un CFO o director financiero con sólida base analítica pero sin experiencia en ML.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar modelos predictivos de ML para forecasting y control financiero',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y ético del machine learning en entornos empresariales',
                'description'      => 'Comprende las obligaciones legales derivadas del uso de machine learning en la empresa: Reglamento de IA de la UE, RGPD, responsabilidad por decisiones automatizadas y auditoría de algoritmos. Esencial para asesores legales y compliance.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho tecnológico, protección de datos e inteligencia artificial, con experiencia en el asesoramiento a empresas que implementan sistemas de ML en el contexto del marco regulatorio europeo, incluyendo el Reglamento de IA (AI Act), el RGPD y la Directiva de IA para responsabilidad civil.

Necesito que me ayudes a entender y gestionar el marco legal y de compliance que aplica al uso de machine learning en mi organización.

**CONTEXTO:**
[Describe el tipo de sistemas de ML que usa o planea usar la empresa, el sector de actividad, si los sistemas toman decisiones que afectan a personas (empleados, clientes, ciudadanos), la jurisdicción principal y si la empresa ya tiene un programa de compliance de IA.]

**LO QUE NECESITO:**

1. **Reglamento de IA de la UE (AI Act): aplicación práctica**
   - Explica la estructura de clasificación de riesgo del AI Act: riesgo inaceptable (prohibido), alto riesgo (obligaciones estrictas), riesgo limitado (transparencia) y riesgo mínimo (sin restricciones específicas).
   - Para los sistemas de ML más comunes en entornos empresariales (selección de personal, scoring de crédito, recomendaciones de producto, análisis de fraude, chatbots), indica en qué categoría de riesgo caen y qué obligaciones generan.
   - Define el calendario de aplicación del AI Act: qué está en vigor ya y qué entrará en vigor en los próximos años.

2. **Obligaciones para sistemas de IA de alto riesgo**
   - Lista las obligaciones técnicas y organizativas para sistemas de IA de alto riesgo: documentación del sistema, gestión de riesgos, datos de entrenamiento de calidad, supervisión humana, transparencia, registro en la base de datos de la UE.
   - Explica qué es la "evaluación de conformidad" y cuándo es obligatoria.
   - Define el rol del "proveedor" vs. el "desplegador" de un sistema de IA y cómo se distribuye la responsabilidad entre ambos.

3. **RGPD y machine learning**
   - Explica las implicaciones del RGPD para el ciclo de vida de un modelo de ML: recogida de datos de entrenamiento (base legal, minimización), entrenamiento (limitación de finalidad), inferencia (derechos del interesado) y eliminación del modelo.
   - Define el concepto de "decisión exclusivamente automatizada" del Art. 22 RGPD: cuándo aplica, cuáles son los derechos del ciudadano y qué obligaciones genera para la empresa.
   - Explica cómo gestionar el "derecho al olvido" cuando los datos de una persona se han usado para entrenar un modelo.

4. **Responsabilidad civil por daños causados por IA**
   - Describe el marco de responsabilidad civil por daños causados por sistemas de IA en la UE: Directiva de Responsabilidad por IA y Directiva de Responsabilidad por Productos actualizada.
   - Explica cuándo la empresa puede ser considerada responsable de los daños causados por las decisiones de un modelo de ML.
   - Define qué seguros y coberturas deben considerarse para sistemas de IA de alto riesgo.

5. **Auditoría y gobernanza de algoritmos**
   - Propón la estructura de un programa de gobernanza de IA para una empresa mediana: políticas, roles (AI Officer, comité de ética de IA), procesos de revisión y aprobación de nuevos modelos.
   - Explica qué es una auditoría algorítmica, cuándo es obligatoria y cómo prepararla.
   - Define los controles que deben implantarse para detectar y corregir sesgos discriminatorios en los modelos.

6. **Contratos con proveedores de IA**
   - Lista las cláusulas que deben incluirse en los contratos con proveedores de sistemas de IA: responsabilidad por fallos del modelo, propiedad de los datos de entrenamiento, auditoría del proveedor, cumplimiento del AI Act, obligaciones de información en caso de incidente.
   - Explica cómo auditar a un proveedor de IA antes de contratar sus servicios.

7. **Gestión de incidentes de IA**
   - Define qué constituye un "incidente grave" de un sistema de IA bajo el AI Act y las obligaciones de notificación.
   - Propón un protocolo de respuesta a incidentes de IA: detección, contención, investigación, notificación a autoridades, comunicación a afectados.

8. **Checklist de compliance de IA para la empresa**
   Lista de 15 preguntas que el equipo legal o de compliance debe responder para evaluar el estado de cumplimiento normativo de los sistemas de IA de la empresa.

**AVISO IMPORTANTE:**
Esta respuesta tiene carácter informativo y orientativo. Para decisiones legales concretas, siempre consulta con un abogado cualificado en la jurisdicción correspondiente.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye referencias específicas a artículos de regulación cuando sea relevante, checklists, y ejemplos de aplicación práctica. El tono debe ser técnico-jurídico pero comprensible para un director legal o responsable de compliance que necesita implementar el programa de gobernanza de IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el compliance legal del uso de ML bajo el AI Act y el RGPD',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'NLP y análisis de sentimiento para mejorar la experiencia del cliente',
                'description'      => 'Aprende a usar procesamiento del lenguaje natural (NLP) para analizar a escala el feedback de clientes: reseñas, tickets de soporte, encuestas y conversaciones. El prompt te ayuda a extraer insights accionables y mejorar la satisfacción del cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en Customer Intelligence y NLP (procesamiento del lenguaje natural) aplicado a la experiencia del cliente, con experiencia en la implementación de sistemas de análisis de texto para equipos de Customer Success, Producto y Marketing en empresas B2B y B2C.

Quiero implementar análisis de sentimiento y NLP para entender mejor a mis clientes a escala, extrayendo insights de sus conversaciones, tickets de soporte, reseñas y respuestas a encuestas.

**CONTEXTO:**
[Describe los canales de feedback de clientes que tienes disponibles (Zendesk, Intercom, G2, Trustpilot, encuestas NPS/CSAT, emails, transcripciones de llamadas), el volumen aproximado mensual, el idioma principal y el nivel técnico de tu equipo.]

**LO QUE NECESITO:**

1. **Fundamentos del NLP aplicado a Customer Success**
   - Explica en lenguaje accesible los casos de uso más valiosos de NLP para equipos de CS: análisis de sentimiento, clasificación de temas (topic modeling), extracción de entidades clave (productos, features, competidores mencionados), detección de urgencia y churn signals.
   - Para cada caso de uso, indica qué datos de entrada necesita, qué output produce y cómo se usa en decisiones de CS.

2. **Análisis de sentimiento: de la teoría a la práctica**
   - Explica los tres enfoques para el análisis de sentimiento: basado en léxico (diccionarios de palabras positivas/negativas), basado en modelos clásicos de ML (Naive Bayes, SVM) y basado en transformers (BERT, RoBERTa, GPT).
   - Indica cuándo cada enfoque es más apropiado según el volumen de datos, el presupuesto y el nivel técnico del equipo.
   - Presenta las herramientas y APIs más accesibles para análisis de sentimiento en español: MonkeyLearn, Google Natural Language API, AWS Comprehend, Hugging Face (modelos en español como BETO o DistilBERT).

3. **Topic modeling: identificar los temas más importantes para los clientes**
   - Explica cómo el topic modeling (LDA, BERTopic) permite identificar automáticamente los temas más frecuentes en el feedback de clientes sin leer cada mensaje.
   - Propón un flujo de trabajo completo: exportar datos de soporte → limpiar texto → entrenar el modelo → interpretar los temas → priorizar mejoras de producto o servicio.
   - Indica cómo actualizar el modelo periódicamente para detectar temas emergentes.

4. **Análisis de conversaciones de soporte con NLP**
   - Describe cómo analizar transcripciones de chats o llamadas de soporte para identificar: causas raíz de problemas frecuentes, momentos de fricción en el journey del cliente, oportunidades de deflexión con self-service.
   - Presenta herramientas especializadas en análisis de conversaciones: Gong, Chorus, Observe.ai, Tethr.
   - Explica cómo usar los insights de NLP para mejorar los guiones de los agentes de soporte y los recursos de self-service.

5. **Detección de señales de churn en el lenguaje del cliente**
   - Define qué patrones lingüísticos en tickets, emails o encuestas son señales predictivas de churn: vocabulario negativo sobre el producto, menciones de competidores, preguntas sobre cancelación, bajada de la longitud y frecuencia de respuestas.
   - Propón cómo integrar estas señales en un modelo de riesgo de churn junto con datos de uso del producto.
   - Explica cómo activar acciones automáticas de CS cuando se detecta una señal de churn en el lenguaje del cliente.

6. **Implementación práctica sin equipo de data science**
   - Propón un stack tecnológico para un equipo de CS sin ingenieros de ML: herramientas no-code o low-code para análisis de texto, integración con las plataformas de CS existentes.
   - Describe el proceso de setup inicial: qué datos recopilar, cómo etiquetarlos si se necesita fine-tuning, cómo evaluar la calidad del análisis.
   - Indica cuánto tiempo y presupuesto aproximado requiere una implementación básica funcional.

7. **Métricas de impacto del NLP en Customer Success**
   - Define los KPIs que demuestran el valor del NLP para el equipo de CS: reducción del tiempo de análisis de feedback, mejora en la velocidad de identificación de problemas sistémicos, incremento en el NPS atribuible a mejoras derivadas del análisis de texto.
   - Propón cómo presentar los insights de NLP al equipo de Producto para que se conviertan en cambios reales.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Usa lenguaje accesible para perfiles de CS no técnicos. Incluye ejemplos concretos de análisis de texto en español, comparativas de herramientas y flujos de trabajo paso a paso. El tono debe ser práctico y orientado a resultados de satisfacción del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar feedback de clientes a escala usando NLP y análisis de sentimiento',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Cómo los freelancers pueden ofrecer servicios de machine learning a sus clientes',
                'description'      => 'Aprende a posicionarte como freelance especializado en ML aplicado a negocios: cómo definir tu oferta de servicios, establecer tarifas, gestionar proyectos de ML y comunicar el valor a clientes no técnicos.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de carrera para freelancers tecnológicos, con experiencia específica en profesionales independientes que ofrecen servicios de data science, machine learning y analítica de negocio a empresas medianas y pequeñas.

Quiero desarrollar mi carrera freelance especializándome en machine learning aplicado a negocios. Necesito que me ayudes a definir mi oferta de servicios, posicionarme en el mercado, gestionar proyectos de ML con clientes no técnicos y establecer precios competitivos.

**MI PERFIL:**
[Describe tu experiencia técnica actual (lenguajes, frameworks, tipos de modelos con los que has trabajado), tu experiencia previa trabajando con clientes, el tipo de proyectos que te interesan (marketing, finanzas, RRHH, ventas) y tu objetivo de facturación mensual.]

**LO QUE NECESITO:**

1. **Definición de la oferta de servicios de ML para freelancers**
   - Explica qué tipos de servicios de ML son más demandados y rentables para un freelance: análisis exploratorio de datos, construcción de modelos predictivos, integración de APIs de IA, dashboards de analítica, consultoría estratégica de IA.
   - Ayúdame a elegir una especialización que combine mis habilidades técnicas con sectores donde hay demanda real de clientes que pueden pagar bien.
   - Propón cómo estructurar un portfolio de servicios en tres niveles: proyecto rápido (1-2 semanas), proyecto estándar (1-3 meses) y retainer mensual.

2. **Posicionamiento y propuesta de valor**
   - Explica cómo diferenciarse de otros freelancers de ML: especialización sectorial (ML para retail, ML para finanzas), especialización en herramientas (AWS SageMaker, Databricks), especialización en perfiles de cliente (PMEs sin equipo técnico).
   - Ayúdame a redactar un elevator pitch de 3 frases para mi perfil de LinkedIn, mi web y mis conversaciones con clientes potenciales.
   - Propón cómo demostrar credibilidad sin tener un portfolio extenso: proyectos de demostración, contribuciones a open source, artículos técnicos, casos de estudio anónimos.

3. **Comunicación con clientes no técnicos**
   - Explica cómo traducir conceptos de ML a lenguaje de negocio: en lugar de "modelo de clasificación con AUC 0.87", "el sistema identifica correctamente a los clientes que van a cancelar en el 87% de los casos".
   - Proporciona un guion para la primera llamada con un cliente potencial: cómo entender su problema, cómo evaluar si ML es la solución correcta, cómo proponer el siguiente paso.
   - Define cómo manejar las expectativas poco realistas sobre la IA: clientes que creen que ML resolverá todos sus problemas o que esperan resultados perfectos desde el primer día.

4. **Estructura y precios de proyectos de ML**
   - Propón cómo estructurar un proyecto de ML en fases facturables: descubrimiento y evaluación de datos, prototipo, modelo de producción, formación e integración.
   - Explica cómo fijar tarifas por hora o por proyecto para servicios de ML en España y Europa, con rangos realistas según el nivel de experiencia y la complejidad del proyecto.
   - Define cómo gestionar el riesgo de los proyectos de ML: qué pasa si los datos del cliente son insuficientes para construir un buen modelo, cómo protegerte contractualmente.

5. **Gestión del proyecto de ML con el cliente**
   - Propón cómo gestionar las expectativas durante el proyecto: cuándo compartir resultados intermedios, cómo comunicar que el modelo no ha alcanzado el rendimiento esperado, cómo gestionar los cambios de alcance.
   - Define la documentación mínima que debes entregar al final de un proyecto: informe de resultados, documentación del modelo, guía de uso y mantenimiento.
   - Explica cómo dejar al cliente en condiciones de mantener o actualizar el modelo sin dependencia perpetua del freelance, y cómo esto refuerza la confianza y genera referidos.

6. **Herramientas y stack recomendado para un freelance de ML**
   - Presenta el stack tecnológico óptimo para un freelance de ML: lenguaje (Python), frameworks (scikit-learn, XGBoost, LightGBM, Hugging Face), entorno cloud (AWS, GCP o Azure según el cliente), versionado (Git + DVC), presentación de resultados (Jupyter, Streamlit, Power BI).
   - Explica cómo gestionar la infraestructura cloud de los proyectos: quién paga, cómo dimensionarla, cómo traspasar la propiedad al cliente al finalizar.

7. **Crecimiento y escalabilidad del negocio freelance de ML**
   - Propón estrategias para escalar la facturación sin trabajar más horas: productización de servicios (auditorías de IA, cursos, plantillas de modelos), subcontratación de partes del proyecto, conversión de proyectos en retainers.
   - Explica cómo construir una red de referidos en el mundo del ML: dónde estar presente (comunidades, eventos, LinkedIn, newsletters), qué contenido crear.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Incluye ejemplos de textos de posicionamiento listos para adaptar, rangos de precios con justificación, guiones de conversación con clientes y una hoja de ruta de 90 días para lanzar o reposicionar el negocio freelance de ML. El tono debe ser directo, motivador y realista.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y posicionar un negocio freelance de servicios de machine learning',
                'vote_score'       => 36,
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
