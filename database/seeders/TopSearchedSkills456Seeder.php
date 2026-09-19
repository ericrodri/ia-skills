<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills456Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de proyectos de marketing basados en IA y datos',
                'description'      => 'Lidera proyectos de marketing digital impulsados por IA y análisis de datos usando metodologías ágiles adaptadas al entorno de marketing moderno.',
                'prompt_content'   => <<<'EOT'
Eres un Project Manager con especialización en proyectos de marketing digital e implementaciones de IA para equipos de marketing. Necesito tu ayuda para diseñar la metodología y el sistema de gestión para proyectos de marketing basados en inteligencia artificial.

Contexto del proyecto:
- Equipo de marketing de 8-15 personas con perfiles de data analyst, content manager, performance marketer y diseñador
- Proyectos típicos: implementación de modelos de atribución con ML, sistema de personalización de contenido con IA, automatización de campañas inteligentes
- Retos: los proyectos de IA tienen mayor incertidumbre técnica que los de marketing tradicional, y los equipos de marketing no siempre entienden los ciclos de desarrollo de modelos

Gestión de proyectos de IA en marketing:

1. FRAMEWORK DE GESTIÓN ADAPTADO A IA
Define la metodología de gestión para proyectos de marketing con IA:
- Por qué los frameworks tradicionales de marketing (cascada) no funcionan bien con proyectos de ML: incertidumbre del modelo, necesidad de iteración, dependencia de datos
- Adaptación de Scrum para proyectos de IA en marketing: sprints de dos semanas, definición de done para un modelo de ML, cómo gestionar la deuda técnica de datos
- Roles específicos: cómo definir la responsabilidad entre el equipo de marketing (que define el objetivo de negocio) y el equipo de data (que construye el modelo)
- Gestión de la incertidumbre: cómo comunicar al stakeholder de marketing que un modelo puede necesitar tres iteraciones antes de funcionar bien

2. DEFINICIÓN DEL ALCANCE Y REQUISITOS
Estructura el proceso de discovery para proyectos de marketing con IA:
- Business problem statement: antes de hablar de algoritmos, definir el problema de marketing en términos de KPI y umbral de éxito
- Inventario de datos disponibles: qué datos existen, en qué calidad, con qué latencia, y cuáles necesitan ser recolectados
- Casos de uso vs. pipe de sueños: cómo priorizar casos de uso de IA según viabilidad técnica, impacto en el negocio y urgencia
- Validación temprana: minimum viable model para demostrar valor antes de invertir en el proyecto completo

3. PLANIFICACIÓN Y ESTIMACIÓN
Define cómo planificar proyectos con alta incertidumbre:
- Estimación por rangos: no fecha concreta sino intervalo de confianza según el nivel de madurez de los datos y del caso de uso
- Milestones de go/no-go: puntos de decisión donde el proyecto se evalúa antes de continuar la inversión
- Gestión del roadmap: cómo presentar el plan a marketing leadership cuando hay tanta incertidumbre técnica
- Buffer para experimentación: reservar un porcentaje del sprint para exploración que no genera entregable directo

4. COORDINACIÓN ENTRE MARKETING Y DATA SCIENCE
Diseña los rituales de coordinación entre equipos:
- Reunión de alineación semanal: marketing presenta los resultados de negocio, data presenta el estado del modelo
- Cómo traducir métricas técnicas de ML (precisión, recall, AUC-ROC) a métricas de negocio que el marketing director entienda
- Gestión de expectativas: cuándo decirle al equipo de marketing que el modelo no va a alcanzar el rendimiento esperado y cuáles son las alternativas
- Handover de modelo a producción: qué documentación debe entregar el equipo de data para que marketing pueda operar el sistema

5. GESTIÓN DE STAKEHOLDERS Y COMUNICACIÓN
Diseña la estrategia de comunicación del proyecto:
- Mapa de stakeholders: marketing director, CMO, equipo de data, IT/ingeniería, proveedor de tecnología
- Reporting ejecutivo: cómo presentar el avance de un proyecto de IA a un CMO que no tiene background técnico
- Gestión del cambio: cómo preparar al equipo de marketing para trabajar con sistemas de IA que cambian las formas de trabajo habituales
- Gestión de éxitos y fracasos: cómo comunicar cuando un modelo no funciona como esperado sin dañar la confianza del equipo

6. MÉTRICAS Y CIERRE DEL PROYECTO
Define cómo medir el éxito y cerrar el proyecto:
- KPIs de proyecto: ¿Se entregó en plazo y presupuesto? ¿El modelo alcanzó el rendimiento objetivo?
- KPIs de negocio: impacto real en las métricas de marketing comprometidas (conversión, CPL, ROAS, churn)
- Retrospectiva específica para proyectos de IA: qué aprendizajes documentar para el siguiente proyecto
- Transferencia de conocimiento: cómo asegurar que el equipo puede mantener y mejorar el sistema sin depender siempre del equipo de data

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Liderar proyectos de marketing con IA desde la gestión de proyecto',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Liderazgo técnico de proyectos de machine learning en producción',
                'description'      => 'Domina las prácticas de MLOps y gestión técnica para llevar modelos de machine learning desde el experimento hasta producción de forma robusta y escalable.',
                'prompt_content'   => <<<'EOT'
Eres un Tech Lead con especialización en proyectos de machine learning y MLOps. Necesito tu ayuda para diseñar las prácticas técnicas y el sistema de gestión que permitan llevar modelos de ML desde el notebook de investigación hasta un sistema en producción robusto, monitoreado y mantenible.

Contexto técnico:
- Equipo: 2-4 data scientists y 2-3 ingenieros de ML
- Stack habitual: Python, scikit-learn, XGBoost, PyTorch o TensorFlow, MLflow, Docker, Kubernetes o servicios cloud (AWS SageMaker, GCP Vertex AI, Azure ML)
- Reto principal: los modelos se quedan en la fase de experimentación o tardan meses en llegar a producción de forma fiable

Liderazgo técnico en proyectos de ML:

1. ARQUITECTURA DE UN PROYECTO DE ML BIEN ESTRUCTURADO
Define la estructura técnica de un proyecto de ML de calidad:
- Separación de concerns: código de ingesta de datos, feature engineering, entrenamiento del modelo, evaluación y serving como módulos independientes
- Estructura de directorios estándar: cookiecutter-data-science o equivalente adaptado al stack del equipo
- Gestión de dependencias: entornos virtuales, Docker para reproducibilidad, lockfiles para versiones exactas
- Gestión de configuración: hiperparámetros, rutas de datos y configuración del modelo en archivos YAML, nunca hardcodeados
- Control de versiones de datos con DVC o Delta Lake: cómo versionar los datasets de entrenamiento y evaluación junto con el código

2. CICLO DE VIDA DEL MODELO (MLOPS)
Diseña el pipeline de MLOps completo:
- Ingesta y validación de datos: checks automáticos de calidad de datos (Great Expectations), alertas cuando los datos de entrada cambian de distribución
- Experimentación rastreable: uso de MLflow o Weights & Biases para registrar cada experimento con hiperparámetros, métricas y artefactos
- Model registry: cómo gestionar las versiones del modelo, los stages (staging, production, archived) y las transiciones con aprobación
- Pipeline de CI/CD para modelos: tests automáticos de calidad del modelo (métricas mínimas, tests de comportamiento), despliegue automatizado a staging y producción
- Rollback: cómo volver a la versión anterior del modelo de forma rápida cuando se detecta una degradación en producción

3. SERVING Y DEPLOYMENT
Define las estrategias de despliegue de modelos:
- Online serving (real-time): FastAPI o Flask con el modelo cargado, latencia objetivo, SLA de disponibilidad, autoscaling
- Batch prediction: cuándo es preferible el scoring por lotes, cómo orquestar con Airflow o Prefect, frecuencia y almacenamiento de predicciones
- Feature store: cuándo necesitas un feature store (Feast, Tecton) para compartir features entre modelos y equipos
- A/B testing de modelos en producción: cómo comparar el nuevo modelo contra el anterior con tráfico real usando shadow mode o canary deployment
- Edge deployment: cuándo desplegar el modelo en el dispositivo del usuario (móvil, IoT) en lugar de en el servidor, y las implicaciones técnicas

4. MONITOREO DE MODELOS EN PRODUCCIÓN
Diseña el sistema de observabilidad del modelo:
- Data drift detection: cómo detectar que los datos de entrada han cambiado respecto al entrenamiento (evidently AI, Alibi Detect)
- Concept drift detection: cómo detectar que la relación entre features y target ha cambiado (model performance degradation)
- Métricas de negocio vs. métricas de modelo: monitorizar ambas y definir umbrales de alerta y de retrain automático
- Dashboard de salud del modelo: latencia de predicción, throughput, tasa de errores, distribución de las predicciones
- Alertas y on-call: quién es responsable de responder cuando el modelo empieza a degradarse

5. GESTIÓN TÉCNICA DEL EQUIPO DE ML
Define las prácticas de ingeniería para equipos de ML:
- Code review para data science: por qué es diferente al code review de software, qué revisar (reproducibilidad, correctitud estadística, eficiencia, tests)
- Testing en ML: tests de datos (esquema, distribución), tests de modelo (smoke test, tests de comportamiento invariante), tests de integración del pipeline
- Documentación técnica del modelo: model card con descripción del problema, datos de entrenamiento, métricas, limitaciones conocidas, decisiones de diseño
- Deuda técnica en proyectos de ML: cómo identificarla, priorizarla y comunicarla a los stakeholders de negocio

6. COMUNICACIÓN CON STAKEHOLDERS NO TÉCNICOS
Define cómo el Tech Lead comunica el estado técnico del proyecto:
- Cómo traducir "el modelo tiene un AUC de 0.87" a impacto de negocio comprensible para el product manager
- Gestión de expectativas sobre los tiempos de entrenamiento, los datos necesarios y la mejora incremental del modelo
- Informe ejecutivo mensual del estado de los sistemas de ML en producción: salud, incidentes, mejoras planificadas
- Cómo justificar la inversión en MLOps e infraestructura ante un liderazgo que quiere resultados rápidos

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el ciclo de vida de modelos de ML desde experimento a producción',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Coordinación de diseño UX en proyectos de productos de IA',
                'description'      => 'Gestiona el proceso de diseño UX en proyectos donde el producto incorpora inteligencia artificial, abordando los retos únicos de diseñar para sistemas no deterministas.',
                'prompt_content'   => <<<'EOT'
Eres un UX Lead con experiencia en el diseño de productos que incorporan inteligencia artificial y machine learning. Necesito tu ayuda para gestionar el proceso de diseño UX en proyectos de IA, abordando los retos únicos que presenta diseñar interfaces para sistemas que son probabilísticos, que cometen errores y que aprenden con el tiempo.

Contexto del proyecto:
- Producto: aplicación o feature con componentes de IA (recomendaciones, clasificación automática, predicción, generación de contenido, procesamiento de lenguaje natural)
- Equipo: 2-4 diseñadores UX/UI trabajando con data scientists e ingenieros de ML
- Reto principal: los diseñadores están acostumbrados a sistemas deterministas, y diseñar para la incertidumbre del output de un modelo de IA requiere nuevos patrones

Gestión del diseño UX en proyectos de IA:

1. FUNDAMENTOS DEL DISEÑO PARA IA
Entiende los principios de diseño específicos para productos con IA:
- La incertidumbre como elemento de diseño: cómo comunicar la confianza del modelo al usuario sin que resulte confuso o alarmante
- Error graceful: cómo diseñar la experiencia cuando el modelo se equivoca (que el sistema lo reconozca, explique y ofrezca alternativa)
- Explicabilidad: cuándo y cómo mostrar al usuario por qué el sistema tomó esa decisión o hizo esa recomendación
- Control del usuario: en sistemas de IA, el usuario debe poder sobreescribir o corregir al sistema, y el sistema debe aprender de esas correcciones
- Onboarding para IA: cómo explicar al usuario nuevo cómo funciona el sistema de IA para que tenga expectativas realistas

2. PROCESO DE DISEÑO ADAPTADO A PROYECTOS DE IA
Define el proceso de diseño específico para productos con IA:
- Discovery conjunto con data science: cómo el diseñador participa desde el principio del proyecto de IA, no solo al final para "hacer bonita" la interfaz
- Prototipado de la incertidumbre: cómo prototipar con Wizard of Oz (humano simulando el modelo) para testear conceptos antes de que el modelo esté listo
- Iterar con el modelo en paralelo: diseño en ciclos cortos donde las decisiones de diseño informan al modelo y viceversa
- States design: mapear todos los estados posibles del sistema de IA (cargando, sin datos suficientes, alta confianza, baja confianza, error, modo manual)

3. PATRONES DE DISEÑO PARA SISTEMAS DE IA
Define los patrones de UX más útiles para productos de IA:
- Recomendaciones con justificación: "Te recomendamos X porque tú hiciste Y y Z en el pasado"
- Feedback loop: cómo diseñar el mecanismo para que el usuario le diga al sistema si la predicción fue correcta o no
- Progresive disclosure de la IA: mostrar el resultado primero, la explicación solo si el usuario la pide
- Override amigable: botón de "no estoy de acuerdo" que lleva al usuario a una alternativa manual sin penalizar la experiencia
- Calibración de confianza visual: barras de porcentaje, colores, etiquetas como "alta confianza" o "sugerencia especulativa"

4. INVESTIGACIÓN Y TESTING DE USUARIO PARA IA
Adapta los métodos de research al contexto de IA:
- Cómo testear la comprensión del usuario sobre qué hace el sistema de IA y qué limitaciones tiene
- Mental models de IA: qué creen los usuarios que hace el sistema vs. qué hace realmente, y cómo reducir esa brecha mediante el diseño
- Tests de confianza: cómo medir si el usuario confía demasiado (automation bias) o demasiado poco en el sistema de IA
- Evaluación de la explicabilidad: ¿Entiende el usuario la explicación que le damos del output del modelo? ¿Le ayuda a tomar mejores decisiones?
- Evaluación longitudinal: cómo medir el cambio en el comportamiento del usuario con el tiempo a medida que aprende a usar el sistema de IA

5. COLABORACIÓN ENTRE DISEÑO Y DATA SCIENCE
Define los protocolos de colaboración entre equipos:
- Vocabulario compartido: glosario de términos de ML traducidos a conceptos de diseño y de negocio que todos entienden
- Revisión de diseño conjunta: cómo el data scientist evalúa si el diseño es técnicamente viable (¿el modelo puede producir el output que el diseño necesita?)
- Revisión de modelo conjunta: cómo el diseñador evalúa si el output del modelo es usable en la interfaz (¿cómo se muestra una predicción con 0.51 de confianza?)
- Protocolo de errores del modelo: acordar con data science qué nivel de error es aceptable para el usuario y qué debe ocurrir cuando el modelo está por debajo de ese umbral

6. ENTREGABLES Y DOCUMENTACIÓN
Define los artefactos de diseño específicos para proyectos de IA:
- AI UX specification: documento que describe todos los estados del sistema de IA, los mensajes al usuario, los fallbacks y el comportamiento esperado en cada escenario
- Componentes de UI para IA: librería de componentes de Figma reutilizables para estados de carga de IA, mensajes de confianza, botones de feedback y corrección
- Guía de escritura para IA: tono y vocabulario para hablar de la IA en la interfaz de forma honesta, accesible y que genere confianza

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar diseño UX en productos y features con inteligencia artificial',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de proyectos de ventas impulsados por IA y CRM inteligente',
                'description'      => 'Implementa y gestiona proyectos de transformación del proceso de ventas con IA, desde la selección del CRM inteligente hasta la adopción por el equipo comercial.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Ventas y experto en Revenue Operations con experiencia en implementación de CRM y herramientas de IA para equipos comerciales. Necesito tu ayuda para gestionar un proyecto de transformación del proceso de ventas basado en IA.

Contexto del proyecto:
- Empresa B2B con un equipo de 15-30 comerciales
- Situación actual: CRM básico subutilizado, proceso de ventas inconsistente, sin visibilidad del pipeline, forecasting manual poco fiable
- Objetivo: implementar un proceso de ventas basado en datos y IA que incremente el win rate en un 20% y mejore la precisión del forecast al 80%+

Gestión del proyecto de transformación comercial con IA:

1. DIAGNÓSTICO Y DISEÑO DEL PROCESO
Define la fase de diagnóstico del proceso comercial actual:
- Mapa del proceso actual (as-is): entrevistas con comerciales, shadow sessions, análisis del histórico de CRM
- Identificación de pérdidas de oportunidad: en qué etapas del funnel se pierden más deals y por qué
- Quick wins vs. transformación: qué se puede mejorar en 30 días sin tecnología nueva y qué requiere el proyecto largo
- Diseño del proceso objetivo (to-be): etapas del pipeline, criterios de avance entre etapas, actividades estándar por etapa, materiales de ventas
- Definición del stack tecnológico: qué CRM con IA (Salesforce Einstein, HubSpot AI, Pipedrive, Clari) se ajusta mejor a las necesidades y al presupuesto

2. IMPLEMENTACIÓN DEL CRM CON IA
Diseña el plan de implementación del CRM inteligente:
- Migración de datos: limpieza del histórico, mapeo de campos, estrategia de migración sin pérdida de datos
- Configuración del pipeline: etapas, probabilidades de conversión por etapa, campos obligatorios, automatizaciones
- Integración de IA: configuración del scoring de oportunidades (predictive lead scoring), alertas de deals en riesgo, sugerencias de siguiente acción
- Integración con herramientas existentes: email (Gmail, Outlook), calendario, herramientas de prospección (Apollo, Sales Navigator), herramientas de comunicación
- Datos de calidad: definición de los campos que deben estar siempre rellenos para que la IA funcione bien

3. ADOPCIÓN POR EL EQUIPO COMERCIAL
Diseña la estrategia de change management:
- Por qué los comerciales rechazan los CRM: miedo a la vigilancia, tiempo extra percibido, falta de valor inmediato para ellos
- Plan de comunicación: cómo vender el proyecto internamente antes de lanzarlo, con beneficios concretos para los vendedores
- Formación: programa de capacitación por roles (comercial, sales manager, director), formato micro-learning en lugar de jornada de formación larga
- Champions internos: cómo identificar a los vendedores early adopters que pueden influir en los escépticos
- Incentivos de adopción: cómo vincular el uso del CRM a métricas de reconocimiento sin crear un ambiente de vigilancia

4. FORECASTING Y REPORTING CON IA
Implementa el sistema de previsión de ventas:
- Modelo de forecasting: bottom-up (suma de las oportunidades del pipeline) vs. top-down (basado en modelo de ML histórico), cuándo usar cada uno
- Dashboard de pipeline: visibilidad en tiempo real del estado del funnel para el sales manager y el director
- Alertas de deals en riesgo: cómo configurar la IA para que detecte deals que llevan demasiado tiempo sin actividad o cuyo score ha bajado
- Reunión de forecast semanal: estructura de la reunión, qué preparar, cómo usar el CRM como base de la conversación
- Accuracy del forecast: cómo medir y mejorar la precisión de la previsión a lo largo del tiempo

5. COACHING COMERCIAL BASADO EN DATOS
Define cómo usar la IA para mejorar el rendimiento individual:
- Análisis de llamadas con IA: herramientas como Gong, Chorus o Salesloft que transcriben y analizan las llamadas de ventas
- Identificación de patrones de éxito: qué hacen los mejores comerciales diferente en sus conversaciones y cómo replicarlo
- Coaching personalizado: a partir del análisis de llamadas, generar planes de mejora individuales para cada comercial
- Benchmarking de actividad: ratios de actividad (llamadas, emails, reuniones) por etapa y su correlación con el cierre

6. MÉTRICAS Y GOBIERNO DEL PROYECTO
Define el sistema de medición del éxito del proyecto:
- KPIs de adopción del CRM: completitud de datos, frecuencia de actualización, tiempo desde la actividad hasta el registro
- KPIs de rendimiento comercial: win rate, velocidad del ciclo de venta, ACV (Annual Contract Value) promedio, pipeline coverage
- Reunión de steering mensual con el sponsor del proyecto: cómo presentar el avance y tomar decisiones de ajuste
- Hitos del proyecto: definir los go/no-go de cada fase para gestionar el riesgo de una implementación compleja

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar proyecto de transformación comercial con CRM inteligente y IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para proyectos de ML en producción',
                'description'      => 'Domina las competencias de un PM que gestiona productos con componentes de machine learning, desde la definición del problema hasta el monitoreo del modelo en producción.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en productos de inteligencia artificial y machine learning. Necesito tu ayuda para desarrollar las competencias y procesos que necesita un PM para gestionar efectivamente productos con componentes de ML.

Contexto del rol:
- PM con experiencia en productos digitales que está pasando a gestionar productos con IA/ML
- Trabaja con equipos de data science, ingeniería de ML y stakeholders de negocio
- Reto principal: los frameworks de PM tradicionales no cubren las particularidades de definir, priorizar y medir productos basados en modelos de ML

Product Management en proyectos de ML:

1. COMPETENCIAS TÉCNICAS MÍNIMAS DEL PM DE IA
Define qué debe entender un PM sobre ML sin necesitar ser un experto técnico:
- Tipos de problemas de ML: clasificación, regresión, clustering, ranking, generación, y para qué casos de uso de producto sirve cada uno
- Métricas de evaluación de modelos: precisión, recall, F1, AUC-ROC, RMSE. Cómo elegir cuál optimizar según el objetivo de negocio
- Trade-offs técnicos con implicaciones de producto: precisión vs. velocidad de inferencia, modelo simple vs. complejo, actualización en tiempo real vs. batch
- Concepto de datos de entrenamiento: por qué la calidad y cantidad de datos importa, qué es el data labeling y cuándo el PM debe involucrarse
- Limitaciones de los modelos: por qué un modelo no es bueno en todos los contextos, qué es el sesgo algorítmico y cómo el PM puede mitigarlo desde la definición del problema

2. DEFINICIÓN DEL PROBLEMA Y CASO DE USO DE ML
Estructura el proceso de definición del problema de ML:
- Pregunta de negocio → pregunta de ML: cómo transformar "quiero reducir el churn" en una especificación técnica de problema de ML
- Baseline y éxito: definir qué hace el sistema actualmente sin ML (reglas manuales, intuición del experto) y qué mejora mínima justifica el proyecto
- Datos disponibles: inventario de datos, su calidad, su latencia y las restricciones legales sobre su uso (GDPR, datos de menores)
- Diseño del feedback loop: cómo va a aprender el sistema de sus errores, quién etiqueta los datos incorrectos y con qué frecuencia se reentrena
- Bias y fairness: identificación de sesgos potenciales en los datos y en el modelo, y cómo el PM debe incorporar la equidad como requisito

3. PRIORIZACIÓN DE PROYECTOS DE ML
Define el framework de priorización específico para proyectos de ML:
- Matriz de viabilidad técnica × impacto de negocio: cómo evaluar ambas dimensiones con el equipo técnico y con stakeholders
- Costo del proyecto de ML: no solo el tiempo de desarrollo, sino el costo de datos, infraestructura, monitoreo continuo y reentrenamiento
- Tiempo hasta el valor: los proyectos de ML tienen una curva de valor diferente (muchas semanas de inversión antes del primer resultado útil)
- Criterios de cancelación: cuándo es el momento de detener un proyecto de ML que no está convergiendo en el resultado esperado

4. GESTIÓN DE LA INCERTIDUMBRE Y EXPECTATIVAS
Desarrolla las habilidades de comunicación del PM de IA:
- Cómo comunicar la incertidumbre del desarrollo de ML a stakeholders de negocio que quieren fechas concretas
- Hitos de evidencia: cómo estructurar el proyecto en milestones donde el equipo demuestra evidencia de progreso (exploración de datos, baseline del modelo, modelo mejorado, producción)
- Cuándo pivotar: señales de que el enfoque de ML no está funcionando y alternativas (modelo más simple, más datos, redefinición del problema)
- Gestión del hype: cómo evitar que las expectativas sobre la IA sean irreales en tu organización, tanto las excesivamente optimistas como las excesivamente pesimistas

5. MÉTRICAS Y MONITOREO DE PRODUCTO CON IA
Define el sistema de medición post-lanzamiento:
- Métricas de modelo: cómo el PM debe vigilar la salud del modelo en producción (data drift, degradación de performance)
- Métricas de producto: qué métricas de UX y negocio mejoró el feature de ML (adopción, tasa de conversión, CSAT)
- Atribución del impacto del ML: cómo separar el impacto del modelo de IA del impacto de otros cambios simultáneos en el producto
- Decisión de reentrenamiento: cuándo el PM debe impulsar un reentrenamiento del modelo y con qué datos nuevos

6. ÉTICA Y RESPONSABILIDAD EN PRODUCTOS DE IA
Incorpora la responsabilidad en la gestión del producto:
- AI ethics en el proceso de PM: cuándo y cómo evaluar el impacto ético de una feature de IA antes de lanzarla
- Transparencia con el usuario: qué debe saber el usuario sobre el sistema de IA que está usando y cómo comunicarlo en la interfaz
- Auditorías de sesgo: cómo diseñar auditorías periódicas del modelo para detectar discriminación o resultados injustos
- Regulación emergente: cómo el EU AI Act y otras regulaciones afectan las decisiones de producto y qué debe documentar el PM

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollar competencias de PM para gestionar productos con ML',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del cambio organizacional en implementaciones de IA',
                'description'      => 'Diseña y ejecuta programas de gestión del cambio para implementaciones de IA en empresas, abordando la resistencia, la formación y la cultura de adopción.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en gestión del cambio y transformación organizacional con experiencia en implementaciones de IA en empresas. Necesito tu ayuda para diseñar un programa de change management que asegure la adopción exitosa de sistemas de IA por parte de los empleados.

Contexto de la implementación:
- Empresa con 200-500 empleados en proceso de implementar herramientas de IA en varios departamentos
- Tipos de implementación: automatización de procesos repetitivos, asistentes de IA para el trabajo diario, sistemas de predicción para la toma de decisiones
- Retos: miedo al reemplazo laboral, resistencia cultural a "dejar que la máquina decida", brechas de habilidades digitales

Programa de gestión del cambio para IA:

1. DIAGNÓSTICO DE LA CULTURA ORGANIZACIONAL
Define el proceso de diagnóstico previo a la implementación:
- Evaluación de la cultura digital actual: nivel de adopción de herramientas digitales, actitud hacia la innovación, histórico de proyectos de transformación
- Identificación de resistencias: encuesta de actitud hacia la IA, focus groups por departamento, entrevistas con mandos intermedios
- Mapa de stakeholders: quiénes son los sponsors, los neutrales y los resistentes en cada nivel de la organización
- Análisis del impacto por rol: qué roles se ven más afectados, qué tareas cambian y cuáles desaparecen o se crean
- Baseline de habilidades digitales: evaluación del nivel actual para diseñar la formación más adecuada a cada grupo

2. DISEÑO DEL PROGRAMA DE CAMBIO
Estructura el programa de change management:
- Modelo de Kotter adaptado a IA: crear urgencia (datos del mercado), coalición guía (champions de IA), visión clara, comunicación masiva, empoderar la acción, lograr victorias rápidas, no soltar el pie del acelerador, anclar en la cultura
- Fases del programa: sensibilización → formación → piloto → roll-out → consolidación, con plazos realistas para cada una
- Plan de comunicación: mensajes por audiencia (directivos, mandos, empleados de base), canales, frecuencia y tone of voice
- Gestión del miedo al reemplazo: comunicación honesta sobre qué cambia, qué permanece y qué oportunidades nuevas genera la IA para las personas

3. FORMACIÓN Y UPSKILLING CON IA
Diseña el programa de formación para empleados:
- Niveles de formación: alfabetización en IA (para todos), uso de herramientas de IA (para el trabajo diario), prompt engineering avanzado (para power users), gestión de proyectos de IA (para managers)
- Formatos adaptativos: microlearning de 5-10 minutos en móvil para operativos, talleres prácticos de 2 horas para equipos, coaching individual para managers
- Aprender haciendo: cómo diseñar ejercicios donde el empleado usa IA para resolver un problema real de su trabajo diario
- Certificaciones internas: sistema de badges o certificados de competencia que reconozcan y visibilicen el progreso individual
- Cómo usar IA para personalizar el plan de formación de cada empleado según sus brechas específicas

4. NETWORK DE CHAMPIONS Y EMBAJADORES
Construye la red interna de adopción:
- Perfil del champion de IA: quién es el candidato ideal (influencia informal, curiosidad tecnológica, respeto del equipo)
- Rol del champion: no es el experto en IA sino el puente entre la herramienta y el equipo, resuelve dudas básicas, recoge feedback, celebra los éxitos
- Formación específica del champion: un día de capacitación adicional sobre la herramienta y sobre cómo gestionar la resistencia de sus compañeros
- Comunidad de champions: reunión quincenal entre todos los champions para compartir aprendizajes y resolver problemas comunes
- Incentivos para champions: visibilidad, reconocimiento, acceso anticipado a nuevas herramientas, participación en decisiones de producto

5. MEDICIÓN DE LA ADOPCIÓN
Define el sistema de seguimiento del cambio:
- Métricas de adopción: porcentaje de empleados que usan activamente la herramienta, frecuencia de uso, tareas completadas con IA vs. sin IA
- Métricas de actitud: encuesta de pulso mensual sobre confort con la IA, percepción de impacto positivo en el trabajo diario, nivel de confianza en la herramienta
- Métricas de negocio: eficiencia operativa, calidad del output, tiempo ahorrado en tareas repetitivas, satisfacción del empleado (eNPS)
- Detección de resistencias activas: cómo identificar a los grupos que no están adoptando la herramienta y cuál es la causa raíz

6. CONSOLIDACIÓN Y CULTURA DE IA
Ancla el cambio en la cultura organizacional:
- Integración en los procesos de evaluación del desempeño: cómo incluir el uso efectivo de la IA como competencia valorada
- Historias de éxito: cómo documentar y difundir internamente los casos de uso donde la IA generó un resultado tangible para el empleado o el cliente
- Comunidad de práctica continua: más allá del proyecto de implementación, cómo mantener viva la cultura de experimentación con IA
- Pipeline de nuevos casos de uso: cómo hacer que los propios empleados propongan nuevos usos de la IA en su trabajo, creando un ciclo de innovación bottom-up

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el cambio organizacional en implementaciones de IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control financiero y presupuesto de proyectos de IA en empresas',
                'description'      => 'Diseña el marco de control financiero, presupuesto y análisis de ROI para proyectos de inteligencia artificial en entornos corporativos.',
                'prompt_content'   => <<<'EOT'
Eres un Controller Financiero y CFO con experiencia en el análisis de inversiones en tecnología e IA. Necesito tu ayuda para diseñar el marco financiero completo para gestionar proyectos de IA: presupuesto, control de costes, análisis de ROI y reporte a la dirección.

Contexto financiero:
- Empresa mediana con facturación de 20-100M€ que está invirtiendo en IA por primera vez
- Proyectos en cartera: automatización de procesos con RPA+IA, implementación de CRM con IA, desarrollo de modelos predictivos internos
- Reto principal: los proyectos de IA tienen una estructura de costes diferente a los proyectos IT tradicionales, y la dirección pide justificación financiera clara

Control financiero de proyectos de IA:

1. ESTRUCTURA DE COSTES DE UN PROYECTO DE IA
Define los componentes del coste total de un proyecto de IA:
- Costes de personal: horas de data scientists, ingenieros de ML, PMs, analistas de negocio, equipo de gestión del cambio
- Costes de infraestructura: cómputo en cloud (instancias GPU para entrenamiento, instancias CPU para serving), almacenamiento de datos, herramientas de orquestación
- Costes de datos: adquisición de datos externos, herramientas de data labeling, plataformas de datos (Databricks, Snowflake)
- Costes de herramientas y licencias: plataformas de MLOps, herramientas de BI, APIs de modelos de IA generativa (OpenAI, Anthropic), software de observabilidad
- Costes ocultos: formación del equipo, gestión del cambio, tiempo del equipo de negocio dedicado al proyecto, deuda técnica acumulada
- Costes operativos post-lanzamiento: monitoreo, reentrenamiento periódico, mantenimiento de la infraestructura, soporte

2. PRESUPUESTO Y ESTIMACIÓN
Diseña el proceso de presupuestación para proyectos de IA:
- Por qué los proyectos de IA son más difíciles de estimar que los proyectos IT tradicionales: dependencia de los datos, incertidumbre del modelo, iteración necesaria
- Técnicas de estimación: analogía con proyectos similares, estimación por componentes, rango de confianza (optimista / base / pesimista)
- Contingencia recomendada: entre el 20% y el 30% para proyectos de ML experimentales vs. el 10% habitual en IT
- Modelo de costes variables: cómo presupuestar el cómputo de cloud cuando el uso es impredecible en la fase de experimentación
- Presupuesto por fases: cómo estructurar el presupuesto en tramos vinculados a milestones para reducir el riesgo de inversión

3. ANÁLISIS DE ROI DE PROYECTOS DE IA
Construye el modelo de análisis de retorno:
- Marco de cuantificación del beneficio: categorías de beneficio (reducción de costes operativos, incremento de ingresos, reducción de riesgos, mejora de la experiencia del cliente)
- Beneficios tangibles vs. intangibles: cómo monetizar beneficios difíciles de cuantificar (velocidad de decisión, calidad del trabajo, satisfacción del empleado)
- Período de retorno: los proyectos de IA tienen una curva de inversión alta al principio y beneficio creciente, el payback suele ser a 12-24 meses
- NPV y TIR para proyectos de IA: cómo calcular el valor presente neto considerando los costes recurrentes de operación del modelo
- Análisis de sensibilidad: qué pasa con el ROI si el modelo tiene un rendimiento inferior al esperado o si los costes de infraestructura suben

4. CONTROL DE COSTES DURANTE EL PROYECTO
Implementa el sistema de control financiero durante la ejecución:
- Dashboard de costes en tiempo real: cómo monitorizar el gasto de cómputo en cloud, que puede dispararse durante la fase de entrenamiento
- FinOps para proyectos de ML: uso de instancias spot en AWS o preemptibles en GCP para reducir el coste de entrenamiento hasta un 70%
- Alertas de desviación: umbral de alerta cuando el gasto mensual supera el presupuesto previsto
- Proceso de change request: cómo gestionar las peticiones de ampliación de presupuesto cuando surgen necesidades no previstas
- Revisión mensual del earned value: cómo usar el método del valor ganado para medir si el proyecto avanza al ritmo financiero esperado

5. REPORTING A LA DIRECCIÓN
Diseña el reporting financiero para el comité de dirección:
- Cuadro de mando mensual del portfolio de proyectos de IA: inversión acumulada, proyección a cierre, ROI esperado vs. KPIs de negocio actuales
- Cómo presentar la incertidumbre financiera a una dirección acostumbrada a proyecciones exactas
- Punto de inflexión: cómo identificar y comunicar el momento en que un proyecto de IA debe cancelarse o redirigirse
- Business case actualizado: revisar el business case a los 6 meses con datos reales de rendimiento del modelo y ajustar las proyecciones de ROI

6. GOBERNANZA FINANCIERA Y COMPLIANCE
Define el marco de gobernanza financiera:
- Aprobación de inversiones en IA: umbral por debajo del cual el departamento puede aprobar el proyecto solo, y umbral que requiere aprobación del comité de inversión
- Capitalización vs. gasto corriente: cuándo los costes de desarrollo del modelo se capitalizan como activo intangible (según NIIF y PGC)
- Gestión de proveedores: evaluación financiera de proveedores de IA, negociación de contratos con componente variable según uso
- Auditoría de proyectos de IA: qué debe documentar el equipo financiero para que el proyecto de IA supere una auditoría interna o externa

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el presupuesto y ROI de proyectos de IA en entornos corporativos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión del riesgo legal en proyectos de inteligencia artificial',
                'description'      => 'Identifica, evalúa y mitiga los riesgos legales en proyectos de IA: propiedad intelectual, datos personales, responsabilidad civil y regulación emergente.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho digital, propiedad intelectual y regulación de inteligencia artificial. Necesito tu ayuda para diseñar un marco de gestión del riesgo legal en proyectos de IA para empresas que están desarrollando o implementando sistemas de inteligencia artificial.

Contexto:
- Empresa que está desarrollando o implementando sistemas de IA: modelos predictivos, sistemas de toma de decisiones automatizada, herramientas de IA generativa
- Ámbito geográfico: principalmente España y la Unión Europea, con potencial expansión internacional
- Riesgos identificados: protección de datos, propiedad intelectual del output de la IA, responsabilidad por decisiones automáticas, cumplimiento del EU AI Act

Marco de gestión del riesgo legal en IA:

1. EU AI ACT: ANÁLISIS Y CLASIFICACIÓN DEL SISTEMA
Evalúa el sistema de IA bajo el EU AI Act:
- Clasificación por nivel de riesgo: prohibido (reconocimiento facial masivo, manipulación subliminal), alto riesgo (sistemas de selección de empleo, scoring de crédito, infraestructura crítica), limitado riesgo (chatbots con obligación de información), mínimo riesgo (filtros de spam, recomendaciones de contenido)
- Qué obligaciones impone cada nivel: evaluación de conformidad, registro en base de datos de la UE, transparencia, supervisión humana, trazabilidad de datos de entrenamiento
- Fechas clave de aplicación del Reglamento: qué está en vigor ya, qué entra en vigor en 2025 y qué en 2026
- Plan de cumplimiento: qué debe hacer una empresa para cumplir según el nivel de riesgo de su sistema de IA

2. PROTECCIÓN DE DATOS EN PROYECTOS DE IA
Analiza las implicaciones del RGPD en el ciclo de vida del modelo:
- Base legal para el tratamiento de datos de entrenamiento: consentimiento, interés legítimo, ejecución de contrato, cuándo aplica cada una
- Minimización de datos: principio de usar solo los datos estrictamente necesarios para entrenar el modelo
- Derechos de los interesados frente a decisiones automatizadas: derecho a explicación (artículo 22 RGPD), derecho de oposición, derecho de revisión humana
- Evaluación de Impacto (EIPD / DPIA): cuándo es obligatoria, cómo realizarla para un proyecto de IA, qué debe incluir
- Transferencias internacionales de datos: implicaciones cuando el modelo se entrena o se despliega en servidores fuera de la UE

3. PROPIEDAD INTELECTUAL EN IA
Resuelve las cuestiones de PI en proyectos de IA:
- Datos de entrenamiento: derechos sobre los datos usados para entrenar, licencias de datasets, uso de datos de acceso público (web scraping y sus límites legales)
- Autoría del output generado por IA: quién es el titular de los derechos sobre el texto, imagen o código generado por una IA, posición actual en España y la UE
- Propiedad del modelo entrenado: cuando el modelo se desarrolla con recursos del cliente, del proveedor o de forma conjunta, cómo se reparten los derechos
- Contratos con proveedores de IA: qué cláusulas son críticas en los contratos con OpenAI, Anthropic, Google o Microsoft sobre el uso de sus APIs (propiedad del output, confidencialidad, limitaciones de uso)

4. RESPONSABILIDAD CIVIL POR DAÑOS DE LA IA
Analiza el marco de responsabilidad cuando el sistema de IA causa un daño:
- Propuesta de Directiva de IA de la UE sobre responsabilidad: cómo facilita la carga de la prueba para el perjudicado
- Responsabilidad del desarrollador vs. responsabilidad del desplegador: cuándo responde quien construyó el sistema y cuándo quien lo pone en operación
- Cómo documentar el proceso de desarrollo para limitar la responsabilidad: registros de validación, umbrales de rendimiento acordados, supervisión humana
- Seguros de responsabilidad civil para sistemas de IA: qué cubren los seguros existentes y qué gaps deja sin cubrir
- Cláusulas contractuales de limitación de responsabilidad: qué se puede limitar y qué no frente a consumidores y frente a empresas

5. GESTIÓN CONTRACTUAL EN PROYECTOS DE IA
Define los contratos clave en el ecosistema de IA:
- Contrato de desarrollo de IA con tercero: especificaciones técnicas, propiedad del modelo, garantías de rendimiento, proceso de aceptación, mantenimiento
- Acuerdos de uso de APIs de IA: lectura y negociación de los términos de uso de los grandes modelos, qué datos envías y qué retienen
- Acuerdos de datos: con proveedores de datos de entrenamiento, con clientes cuyos datos se usan, con socios de investigación
- NDA reforzado para proyectos de IA: qué proteger como secreto empresarial (arquitectura del modelo, datos de entrenamiento propietarios, estrategia de IA)

6. COMPLIANCE Y AUDITORÍA CONTINUA
Implementa el sistema de cumplimiento continuo:
- Comité de ética de la IA: composición recomendada, frecuencia de reunión, qué decisiones requieren su aprobación
- Auditorías de sesgo y equidad: frecuencia, metodología, qué umbrales de sesgo son inaceptables
- Registro de sistemas de IA: inventario de todos los sistemas en uso, su nivel de riesgo, su base legal y su responsable
- Plan de respuesta a incidentes de IA: qué hacer cuando el sistema produce un output discriminatorio, ilegal o dañino, cómo notificarlo a la autoridad de control

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar riesgos legales en proyectos de IA bajo la regulación europea',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Implementación de proyectos de IA en equipos de Customer Success',
                'description'      => 'Diseña y ejecuta proyectos de IA en Customer Success: desde la predicción de churn hasta la automatización de la gestión de cuentas con IA.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Customer Success con experiencia en implementación de IA para mejorar la retención y la expansión de clientes. Necesito tu ayuda para diseñar proyectos de IA que transformen el equipo de Customer Success, mejorando la proactividad, la escalabilidad y los resultados de retención.

Contexto del equipo:
- Equipo de CS de 8-20 CSMs gestionando una cartera de 200-500 cuentas en un SaaS B2B
- Retos actuales: reactivos ante el churn, sin tiempo para ser proactivos con todas las cuentas, decisiones basadas en intuición más que en datos
- Objetivo: pasar de gestión reactiva a predictiva, permitir que cada CSM gestione más cuentas con mayor calidad

Proyectos de IA en Customer Success:

1. MODELO DE PREDICCIÓN DE CHURN
Diseña el proyecto de churn prediction de principio a fin:
- Definición del problema: qué es un "cliente en riesgo" en tu negocio, qué señales predictivas existen, cuánto tiempo antes del churn debe alertar el modelo
- Features relevantes para el modelo: frecuencia de login, uso de features clave, número de tickets de soporte, NPS score, cambios de contacto, actividad en el onboarding, tamaño del equipo del cliente
- Proceso de etiquetado: cómo clasificar el histórico de clientes que churnearon vs. los que renovaron para entrenar el modelo
- Integración en el flujo de trabajo del CSM: cómo presentar el health score de cada cuenta en el CRM, qué acción se espera del CSM cuando una cuenta entra en zona roja
- Validación del modelo: cómo medir si el modelo realmente mejora la retención, no solo si predice bien en el test set

2. AUTOMATIZACIÓN DE LA GESTIÓN DE CUENTAS
Implementa automatizaciones que multipliquen la capacidad del CSM:
- Segmentación automática de la cartera: high-touch, mid-touch, tech-touch según el valor y el riesgo de la cuenta
- Playbooks automatizados: triggers basados en comportamiento del cliente que lanzan acciones automáticas (email de check-in, invitación a webinar, alerta al CSM)
- Generación de QBR con IA: cómo preparar el material de la revisión trimestral de negocio automáticamente con los datos de uso del cliente
- Resumen de cuenta bajo demanda: el CSM pide a la IA un briefing del cliente antes de una llamada y recibe en segundos el contexto relevante
- Detección de oportunidades de upsell: cómo el modelo identifica clientes con alto potencial de expansión basándose en el comportamiento en la plataforma

3. IA EN LA COMUNICACIÓN CON EL CLIENTE
Integra IA en las interacciones con el cliente:
- Redacción de emails de CS con IA: cómo usar IA para redactar emails de seguimiento, check-ins y comunicaciones de renovación personalizados al contexto de cada cuenta
- Análisis de llamadas con IA: transcripción y análisis automático de las reuniones de CS para extraer compromisos, riesgos y oportunidades
- Chatbot de autoservicio para clientes: diseño de un bot que resuelve las preguntas frecuentes de clientes sin escalar al CSM
- Personalización del portal de cliente: cómo usar datos de comportamiento para mostrar a cada cliente los recursos y guías más relevantes para su caso de uso

4. GESTIÓN DEL PROYECTO DE IMPLEMENTACIÓN
Estructura el proyecto de implementación de IA en CS:
- Fases del proyecto: diagnóstico de datos disponibles (4 semanas), desarrollo del modelo (8-12 semanas), piloto con un segmento de la cartera (6 semanas), roll-out completo y formación (4 semanas)
- Métricas de éxito del piloto: definir antes del piloto qué resultados demostrarán que el proyecto merece escalar
- Formación del equipo de CS: cómo preparar a los CSMs para usar los nuevos sistemas de IA sin perder el toque humano en las relaciones con los clientes
- Gestión de la resistencia interna: los CSMs pueden sentir que la IA va a reemplazarlos o a vigilarlos, cómo comunicar el proyecto de forma que lo vean como un aliado

5. MÉTRICAS DE ÉXITO
Define los KPIs del proyecto de IA en CS:
- Tasa de churn: evolución antes y después del modelo de predicción, con análisis de causalidad
- Net Revenue Retention (NRR): indicador compuesto de retención y expansión, cómo el proyecto de IA contribuye a mejorarlo
- Eficiencia del CSM: número de cuentas por CSM, tiempo por cuenta, ratio de proactividad vs. reactividad
- Cobertura de la cartera: qué porcentaje de cuentas recibe una interacción proactiva al mes, y cómo mejora con la automatización
- Precisión del modelo de churn: tasa de verdaderos positivos (clientes en riesgo correctamente identificados) y su evolución con el tiempo

6. ESCALABILIDAD Y EVOLUCIÓN
Planifica el crecimiento del sistema de IA en CS:
- De predictivo a prescriptivo: una vez el modelo predice el riesgo, el siguiente paso es que recomiende la acción más efectiva
- Expansión del modelo: incorporar nuevas señales de datos (uso del producto en tiempo real, datos de integración con terceros, señales externas como noticias de la empresa del cliente)
- CS generativo: cómo los modelos de lenguaje grande permiten nuevas capacidades en CS (generación de propuestas de expansión, análisis de contratos, personalización masiva de comunicaciones)
- Medición del ROI del proyecto: cómo presentar el retorno financiero del proyecto de IA en CS ante el CFO, con datos de retención, expansión y eficiencia operativa

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar proyectos de IA para mejorar retención y eficiencia en CS',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de proyectos de IA como consultor freelance independiente',
                'description'      => 'Diseña tu metodología y modelo de negocio como project manager freelance especializado en proyectos de IA y machine learning para clientes empresariales.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en gestión de proyectos de IA y transformación digital. Necesito tu ayuda para estructurar mi práctica independiente como PM freelance de proyectos de IA, definiendo la metodología, el modelo de negocio y las competencias diferenciales que me permitan competir con éxito.

Contexto del freelance:
- Perfil: Project Manager con 5-10 años de experiencia en IT que quiere especializarse en proyectos de IA
- Mercado objetivo: empresas medianas que están iniciando proyectos de IA sin un PM interno especializado
- Objetivo: construir una práctica freelance que facture entre 80.000 y 120.000€ al año con proyectos de 3-6 meses

Práctica de consultoría freelance en gestión de proyectos de IA:

1. PROPUESTA DE VALOR DIFERENCIADA
Define tu nicho y ventaja competitiva:
- Por qué las empresas necesitan un PM freelance especializado en IA: los PMs generalistas no entienden los riesgos específicos de los proyectos de ML, y los data scientists no siempre tienen habilidades de gestión
- Tu nicho dentro de la IA: ¿proyectos de IA generativa? ¿ML en producción? ¿automatización de procesos con RPA+IA? Elegir uno para posicionarte como especialista
- Elevator pitch de 30 segundos: cómo explicar qué haces a un director de operaciones o a un CTO en una conversación casual
- Diferenciación vs. grandes consultoras: velocidad de arranque, coste, conocimiento operativo profundo, flexibilidad, compromiso personal con el resultado

2. METODOLOGÍA PROPIETARIA
Diseña tu metodología de gestión de proyectos de IA:
- Framework propio con nombre: adapta Scrum, PMI o PRINCE2 al contexto específico de IA con fases propias y entregables definidos
- Fase de diagnóstico (semanas 1-2): qué analizar, qué preguntar, qué entregable produce, precio fijo para esta fase
- Fase de planificación (semanas 3-4): architecture decision records, plan de proyecto, identificación de riesgos técnicos y de adopción, roadmap de datos
- Fase de ejecución ágil (meses 2-4): sprints de dos semanas, reuniones de sincronización, gestión de dependencias con data science e ingeniería
- Fase de cierre y transferencia (semana final): documentación, formación del equipo del cliente, métricas de éxito, plan de mantenimiento
- Entregables estándar: plantillas reutilizables para cada fase que ahorran tiempo y demuestran profesionalidad

3. MODELO DE NEGOCIO Y PRICING
Define cómo estructurar y precio tus servicios:
- Tarifa por proyecto vs. tarifa diaria: cuándo cada modelo es más favorable para ti y para el cliente
- Rango de tarifa diaria para un PM freelance senior de IA en el mercado español: 600-1.200€/día según experiencia y especialización
- Proyecto de diagnóstico como puerta de entrada: precio fijo de 3.000-5.000€ por un diagnóstico de 2 semanas que genera el plan del proyecto completo
- Retainer mensual post-proyecto: para clientes que necesitan supervisión continua del sistema en producción, 1.500-3.000€ al mes
- Paquetes productizados: "Lanzamiento de MVP de IA en 90 días" con precio fijo, scope cerrado y entregables definidos

4. CAPTACIÓN DE CLIENTES Y MARKETING
Diseña tu estrategia de desarrollo de negocio:
- LinkedIn como canal principal: optimización del perfil, contenido regular (casos de uso, lecciones aprendidas, opinión sobre tendencias de IA), participación en grupos del sector
- Casos de estudio anonimizados: cómo documentar y publicar tus proyectos pasados para demostrar track record
- Red de referidos: alianzas con consultoras de strategy que no tienen capacidad de PM técnico, con recruiters de tecnología, con proveedores de plataformas de ML
- Propuestas de alto valor: cómo redactar una propuesta que venda el resultado de negocio en lugar de las horas de consultoría
- Uso de IA para el marketing propio: generación de contenido para LinkedIn, preparación de propuestas, análisis del sector

5. GESTIÓN OPERATIVA DEL NEGOCIO FREELANCE
Organiza la operativa de tu práctica independiente:
- Herramientas esenciales: CRM para pipeline de proyectos, gestión de proyectos (Notion, Linear), facturación, contabilidad, contrato estándar revisado por abogado
- Gestión del tiempo: equilibrio entre ejecución del proyecto actual y desarrollo de negocio para el siguiente (dedicar al menos el 20% del tiempo a BD incluso cuando estás ocupado)
- Subcontratación: cuándo colaborar con otros freelances (diseñadores, data scientists, ingenieros) para ganar proyectos más grandes
- Gestión de la incertidumbre de ingresos: colchón financiero recomendado, diversificación de clientes, contratos con retención mensual para ingresos recurrentes

6. CRECIMIENTO Y POSICIONAMIENTO A LARGO PLAZO
Planifica la evolución de tu práctica:
- De freelance a práctica: cuándo tiene sentido asociarse con otros consultores complementarios o crear una micro-consultora
- Productización: de consultoría por horas a frameworks, cursos online o herramientas propias que generan ingresos pasivos
- Thought leadership: publicaciones en LinkedIn, ponencias en conferencias de IA o gestión de proyectos, participación en comunidades del sector
- Indicadores de salud del negocio freelance: pipeline a 90 días, tasa de repetición de clientes, ingreso medio por proyecto, margen después de impuestos

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar práctica freelance de gestión de proyectos de IA',
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
