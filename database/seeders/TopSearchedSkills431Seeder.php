<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills431Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Forecasting de demanda y predicción de tendencias de marketing con IA',
                'description'       => 'Anticipa la demanda de mercado y las tendencias de consumo con meses de antelación usando modelos predictivos de IA, para planificar campañas y presupuestos de marketing con mayor precisión.',
                'prompt_content'    => <<<'EOT'
Eres un analista de marketing con especialización en inteligencia de mercado y análisis predictivo. Tu objetivo es crear un sistema de forecasting de demanda que permita al equipo de marketing anticipar tendencias, planificar campañas con mayor eficacia y asignar presupuestos de forma óptima.

**Contexto del negocio:**
- Sector o industria: [describe el sector]
- Principales productos o servicios que ofreces: [lista]
- Mercado geográfico: [España / Europa / global]
- Temporadas o picos de demanda conocidos: [Black Friday / verano / Navidad / ninguno conocido]
- Fuentes de datos disponibles actualmente: [Google Analytics / CRM / datos de ventas históricas en Excel / herramientas de social listening / ninguna estructurada]
- Horizonte de planificación: [1 mes / 1 trimestre / 6 meses / 1 año]

**objetivo del análisis predictivo:**
Anticipar la demanda de productos o servicios y tendencias de búsqueda para:
1. Planificar el calendario de contenidos y campañas con antelación
2. Asignar presupuesto de publicidad según periodos de mayor conversión esperada
3. Detectar categorías emergentes antes que la competencia

**sistema de forecasting a construir:**

1. **Fuentes de señal temprana (leading indicators):**
   Identifica qué señales externas predicen la demanda en tu categoría con 4-8 semanas de antelación:
   - Tendencias de búsqueda en Google Trends (keywords específicas a monitorizar)
   - Indicadores socioeconómicos relevantes (IPC, índice de confianza del consumidor, etc.)
   - Señales en redes sociales (hashtags, menciones, volumen de conversación)
   - Comportamiento de la competencia (lanzamientos, ofertas, cambios de precio)
   - Señales estacionales y eventos del calendario
   Para cada fuente: cómo acceder a ella (gratuito o herramienta), frecuencia de actualización y cómo interpretar la señal.

2. **Modelo de predicción simplificado (sin código):**
   Explica paso a paso cómo construir una previsión de demanda usando solo Excel o Google Sheets:
   - Cómo estructurar los datos históricos de ventas o leads
   - Cómo calcular la media móvil y la tendencia lineal
   - Cómo ajustar por estacionalidad (índice de estacionalidad)
   - Cómo integrar las señales externas identificadas
   Proporciona las fórmulas de Excel necesarias y la estructura de la hoja de cálculo.

3. **Calendario de demanda prevista (próximos 12 meses):**
   Basándote en los datos proporcionados, crea un calendario mensual que indique:
   - Nivel de demanda esperada (alto / medio / bajo) con justificación
   - Ventanas óptimas para cada tipo de campaña (captación / reactivación / upselling)
   - Fechas clave del sector o calendario que activarán picos de demanda
   - Periodos de baja demanda donde invertir en brand awareness a menor coste

4. **Alertas de desviación de la previsión:**
   Define el proceso de seguimiento semanal:
   - Métricas a comparar contra la previsión (visitas, leads, ventas)
   - Umbrales de desviación que requieren ajuste del plan (±15%, ±30%)
   - Protocolo de respuesta rápida cuando la demanda supera o cae respecto a la previsión
   - Reunión mensual de revisión de forecast: agenda y participantes

5. **Integración del forecast en la planificación de campañas:**
   Crea una plantilla de briefing de campaña que incorpore la previsión de demanda:
   - Periodo de la campaña y justificación basada en el forecast
   - Objetivo de conversiones basado en la demanda esperada
   - Presupuesto calculado a partir del CPA objetivo y el volumen previsto
   - Segmentos de audiencia prioritarios según el perfil del comprador en ese periodo

6. **Métricas de precisión del modelo:**
   Define cómo medir si tu sistema de forecasting funciona bien:
   - MAPE (Mean Absolute Percentage Error): cómo calcularlo e interpretarlo
   - Objetivo de precisión realista para el primer año (±20% es aceptable al inicio)
   - Proceso de mejora iterativa del modelo cada trimestre
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Anticipar tendencias de demanda para planificar campañas de marketing con mayor precisión y optimizar la asignación del presupuesto publicitario.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Modelos predictivos de comportamiento de usuario en aplicaciones con IA',
                'description'       => 'Implementa modelos de machine learning que predicen comportamientos clave de usuarios en tu aplicación: churn, propensión a convertir, necesidad de soporte y detección de anomalías.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de datos y machine learning con experiencia en sistemas de predicción para aplicaciones web y móviles. Diseñarás e implementarás modelos predictivos que transformen los datos de comportamiento de usuarios en inteligencia accionable para el equipo de producto y negocio.

**Perfil técnico:**
- Lenguaje de programación principal: [Python / JavaScript / PHP / otro]
- Framework de ML disponible: [scikit-learn / TensorFlow / PyTorch / ninguno aún]
- Infraestructura de datos: [BigQuery / Redshift / PostgreSQL / MySQL / datos en CSVs]
- Volumen de eventos de usuario registrados por día: [número aproximado]
- Experiencia del equipo con ML: [ninguna / básica / intermedia / avanzada]

**casos de uso predictivos a implementar:**
Selecciona los que aplican a tu producto: [churn / conversión / uso de funcionalidad / detección de fraude / necesidad de soporte / segmentación automática]

**desarrollo de modelos predictivos:**

1. **Feature engineering — variables predictoras:**
   Para cada caso de uso seleccionado, define las variables de entrada (features) más predictivas:
   - Features de comportamiento: frecuencia de uso, últimas sesiones, acciones completadas, errores encontrados
   - Features de perfil: plan de suscripción, fecha de registro, canal de adquisición, características demográficas
   - Features temporales: días desde última acción, velocidad de adopción de funcionalidades
   - Features de engagement: NPS enviado, tickets de soporte creados, emails abiertos
   Explica cómo calcular cada feature desde los logs de eventos crudos con queries SQL.

2. **Pipeline de datos:**
   Diseña el pipeline que alimentará los modelos:
   - Extracción: frecuencia de actualización (batch diario / streaming) y fuente de datos
   - Transformación: normalización, codificación de variables categóricas, tratamiento de nulos y outliers
   - Almacenamiento: tabla de features precalculadas con esquema SQL
   - Monitorización: detección de drift en la distribución de datos de entrada
   Proporciona el código Python de las transformaciones principales.

3. **Entrenamiento y selección de modelo:**
   Para clasificación binaria (churn sí/no, conversión sí/no):
   - Comparativa de 3 algoritmos candidatos: Regresión Logística (baseline), Random Forest, XGBoost
   - Estrategia de validación: tiempo de corte para evitar data leakage en series temporales
   - Métricas de evaluación: AUC-ROC, precision, recall y F1; cuándo priorizar precision vs recall
   - Código de entrenamiento completo con scikit-learn incluyendo búsqueda de hiperparámetros

4. **Deployment y scoring en producción:**
   - Serialización del modelo (joblib / ONNX / MLflow)
   - Endpoint de predicción: API REST en Flask o FastAPI con manejo de errores
   - Scoring batch nocturno: script que recalcula probabilidades para todos los usuarios activos
   - Almacenamiento de predicciones en base de datos con timestamp y versión del modelo

5. **Integración con acciones de negocio:**
   Define qué acción automática se desencadena según el score predicho:
   - Score de churn > 0.7: notificación al CS para intervención proactiva
   - Score de conversión > 0.6: trigger de email de nurturing personalizado
   - Score de soporte > 0.8: chatbot proactivo o asignación automática de agente
   Proporciona el pseudocódigo del sistema de reglas de disparo de acciones.

6. **Monitorización del modelo en producción:**
   - Métricas a trackear: distribución de scores, tasa de acierto real vs predicha, concept drift
   - Cuándo reentrenar: criterios objetivos (degradación de AUC >5%, cambio en distribución de features)
   - Dashboard de monitorización: visualizaciones esenciales con herramientas gratuitas (Grafana, MLflow UI)
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Implementar modelos de ML que predigan comportamientos clave de usuarios (churn, conversión) y desencadenen acciones automáticas de negocio.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Predicción de tendencias de diseño y estética para proyectos futuros con IA',
                'description'       => 'Anticipa qué estilos, paletas, tipografías y recursos visuales dominarán los próximos 12-18 meses para posicionar tu trabajo de diseño en la vanguardia.',
                'prompt_content'    => <<<'EOT'
Eres un investigador de tendencias visuales y diseñador estratégico con experiencia en análisis de ciclos de moda, cultura visual digital y comportamiento del consumidor estético. Tu objetivo es crear un informe de tendencias de diseño para los próximos 12-18 meses que permita a diseñadores y estudios orientar su trabajo y sus propuestas de cliente.

**Perfil del diseñador:**
- Especialidad principal: [branding / UX/UI / motion / ilustración / packaging / editorial / generativa]
- Sectores de clientes habituales: [tecnología / moda / alimentación / salud / cultura / otro]
- Mercado objetivo: [España / Europa / global / nicho específico]
- Fuentes de inspiración actuales que consultas: [Behance / Dribbble / Pinterest / Are.na / Instagram / publications especializadas]
- Estilo propio más frecuente: [minimalista / expresionista / retro / futurista / orgánico / tipográfico]

**análisis predictivo de tendencias:**

1. **Marco de análisis de tendencias:**
   Explica el ciclo de vida de una tendencia de diseño (tipping point, mainstream, obsolescencia) y cómo identificar en qué fase está cada corriente actualmente. Incluye un ejemplo concreto para cada fase con una tendencia visual de los últimos 5 años.

2. **Tendencias emergentes para 2025-2026 por categoría:**

   **Tipografía:**
   - Tendencia ascendente: describe el estilo, ejemplos de marcas que lo adoptan, por qué ahora
   - Tendencia en declive: qué se está sobreexplotando y por qué evitarlo en proyectos premium
   - Fuente tipográfica a seguir: nombre de la tipografía, foundry, por qué es relevante

   **Color y paletas:**
   - Paleta del momento: colores hex con nombres descriptivos y el mood que comunican
   - Tendencia cromática emergente: influenciada por qué movimiento cultural o tecnológico
   - Color a evitar: qué tono está llegando a la saturación

   **Formas y composición:**
   - Principios compositivos que están ganando presencia
   - Recursos visuales (texturas, gradientes, glitch, grain, bento grid, etc.) que seguirán creciendo
   - Qué está reemplazando al flat design puro

   **Fotografía y tratamiento de imagen:**
   - Tendencia en fotografía de producto y lifestyle
   - Tendencia en retoque y tratamiento de color fotográfico
   - Integración de fotografía con elementos gráficos o ilustración

3. **Tendencias por sector del cliente:**
   Para cada sector indicado en el perfil, describe:
   - Dirección estética dominante en los próximos 18 meses
   - Referentes de vanguardia (marcas o estudios a estudiar)
   - Un brief hipotético de proyecto que encarne esa tendencia

4. **Cómo integrar tendencias sin perder autenticidad:**
   Metodología para adoptar elementos de tendencia en el estilo propio sin crear trabajo genérico:
   - Filtro de tendencias: criterios para decidir qué adoptar y qué ignorar
   - Cómo presentar el trabajo de tendencia a clientes conservadores
   - Cuándo liderar la tendencia vs. seguirla (según el cliente y el proyecto)

5. **Sistema de vigilancia de tendencias (30 min semanales):**
   Rutina de investigación eficiente:
   - Lista de 10 cuentas o publicaciones imprescindibles para monitorizar (con URLs)
   - Cómo organizar la inspiración en un archivo propio accionable
   - Señales de que una tendencia va a explotar (indicadores de adopción temprana)
   - Plantilla de informe de tendencias trimestral para compartir con clientes

6. **Propuesta de dirección creativa para los próximos proyectos:**
   Basándote en todo lo anterior, define una dirección creativa concreta para los próximos 6 meses de trabajo: estilo, paleta, recursos y valores estéticos que guiarán las propuestas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Anticipar tendencias de diseño para los próximos 12-18 meses y orientar el trabajo propio y las propuestas de cliente hacia la vanguardia.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Previsión de ventas y pipeline con IA para equipos comerciales',
                'description'       => 'Construye un sistema de forecasting de ventas preciso que prediga el cierre del pipeline, identifique oportunidades en riesgo y permita al equipo cumplir los objetivos trimestrales.',
                'prompt_content'    => <<<'EOT'
Eres un director de ventas con experiencia en metodologías de forecasting (MEDDIC, Sandler, Solution Selling) y uso de CRM para la gestión predictiva del pipeline. Crearás un sistema de previsión de ventas que reemplace la intuición subjetiva por un proceso estructurado y basado en datos.

**Contexto del equipo:**
- Tamaño del equipo de ventas: [número de comerciales]
- CRM en uso: [Salesforce / HubSpot / Pipedrive / Zoho / Excel / ninguno]
- Ciclo de venta promedio: [días o semanas]
- Ticket medio de contrato: [importe en €]
- Número de oportunidades activas en pipeline ahora mismo: [número]
- Objetivo de ventas trimestral: [importe en €]
- Las etapas del proceso de venta: [lista tus etapas actuales del pipeline]

**sistema de forecasting a construir:**

1. **Scoring de probabilidad de cierre por etapa:**
   Define la tasa de conversión histórica esperada para cada etapa del pipeline:
   - Cómo calcular la tasa de conversión real a partir del historial del CRM
   - Ponderación de probabilidad recomendada para cada etapa (ejemplo: Propuesta enviada = 40%, Negociación = 65%)
   - Factores que suben o bajan la probabilidad individual: velocidad de avance, número de interlocutores involucrados, presencia del decisor, tamaño del deal vs. ticket medio
   - Cómo registrar estos factores en el CRM sin sobrecargar al comercial

2. **Modelo de previsión de ventas (3 métodos):**
   Explica y proporciona la fórmula para cada método:
   - Método 1 — Por etapa ponderada: suma de (valor × probabilidad de etapa) para todas las oportunidades
   - Método 2 — Por velocidad de ventas: (número de deals × ticket medio × tasa de cierre) / ciclo de venta en días × días del periodo
   - Método 3 — Por commit del comercial: cada comercial clasifica sus deals en Best Case, Commit y Closed; el forecast es la suma de Closed + 70% de Commits
   Indica cuándo usar cada método y cómo combinarlos para mayor precisión.

3. **Identificación de oportunidades en riesgo:**
   Criterios objetivos para señalar un deal como "en riesgo":
   - Sin actividad registrada en el CRM en más de [X] días según la etapa
   - Estancado en la misma etapa durante más de [X] semanas
   - Contacto principal no disponible o con cambio de interlocutor
   - Competencia confirmada en proceso y sin diferenciación clara
   - Presupuesto del cliente no confirmado
   Para cada señal: protocolo de acción del comercial y del manager.

4. **Reunión semanal de pipeline review:**
   Agenda estructurada de 60 minutos para el equipo:
   - Deal by deal: qué preguntar para cada oportunidad (10 preguntas de calificación en 2 minutos por deal)
   - Decisiones accionables que deben salir de la reunión (quién hace qué antes del próximo viernes)
   - Cómo registrar los compromisos en el CRM para hacer seguimiento
   - Cómo hacer la reunión productiva y no una sesión de interrogatorio desmotivante

5. **Dashboard de ventas en tiempo real:**
   Define las visualizaciones esenciales para el manager de ventas:
   - Forecast vs. objetivo trimestral (con desglose por comercial)
   - Distribución del pipeline por etapa y por valor
   - Ratio de actividad: llamadas, demos, propuestas por comercial por semana
   - Velocidad media del ciclo de venta vs. histórico
   - Tasa de conversión por etapa y por fuente de lead
   Especifica qué herramienta usar para cada visualización (CRM nativo, Google Data Studio, Tableau, etc.).

6. **Plan de acción para cumplir el objetivo trimestral:**
   Basándote en la situación actual del pipeline, calcula:
   - El gap entre el forecast actual y el objetivo
   - Cuántas oportunidades nuevas se necesitan abrir en el mes actual para cubrir el gap
   - El número de actividades de prospección diarias necesarias por comercial
   - Las 3 acciones de mayor impacto para acelerar el cierre de los deals en etapas avanzadas
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir un sistema de previsión de ventas preciso que identifique oportunidades en riesgo y asegure el cumplimiento del objetivo trimestral.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis predictivo de comportamiento de usuario para decisiones de producto con IA',
                'description'       => 'Usa modelos de predicción para anticipar cómo se comportarán los usuarios ante nuevas funcionalidades, cambios de UX y experimentos de producto antes de lanzarlos.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager con profundo conocimiento en análisis de datos de usuario, diseño de experimentos y metodologías de decisión basada en evidencia (evidence-based product management). Crearás un sistema de análisis predictivo que reduzca la incertidumbre antes de lanzar nuevas funcionalidades o cambios de producto.

**Contexto del producto:**
- Tipo de producto: [SaaS B2B / app de consumo / marketplace / e-commerce / plataforma de contenidos]
- Número de usuarios activos mensuales (MAU): [número]
- Stack de analytics: [Mixpanel / Amplitude / Google Analytics 4 / Heap / ninguno estructurado]
- Capacidad de A/B testing: [sí, con herramienta / sí, manual / no existe aún]
- Principales métricas del producto (North Star + métricas de apoyo): [lista]
- Tipo de cambio que quieres predecir el impacto de: [nueva funcionalidad / rediseño de UX / cambio de precio / nuevo flujo de onboarding / otro]

**análisis predictivo de comportamiento:**

1. **Mapa de comportamiento actual del usuario:**
   Antes de predecir, necesitas entender el baseline. Define:
   - Los 5 eventos de comportamiento más importantes a medir (con su definición exacta)
   - El funnel principal del producto y las tasas de conversión en cada paso
   - Segmentos de usuarios por nivel de engagement (power users / usuarios regulares / usuarios en riesgo de churn / churned)
   - El "momento aha" del producto: qué acción temprana predice retención a 30 días
   Proporciona las queries SQL o eventos de analytics necesarios para calcular cada punto.

2. **Modelo de predicción de adopción de funcionalidades:**
   Para predecir si una nueva funcionalidad será adoptada antes de lanzarla:
   - Qué datos históricos de funcionalidades anteriores analizar (tasa de adopción, tiempo hasta primera activación, correlación con retención)
   - Características de usuario que predicen alta adopción (perfil del early adopter de tu producto)
   - Cálculo del TAM interno: qué % de tu base actual necesitaría usar la funcionalidad para que valga la pena construirla
   - Validación de la hipótesis antes del desarrollo: métodos cualitativos y cuantitativos rápidos (encuesta, fake door test, prototipo clicable)

3. **Diseño de experimento predictivo (A/B test):**
   Para el cambio específico que describes:
   - Hipótesis en formato "Si hacemos X, esperamos Y porque Z"
   - Métrica primaria y métricas de guardia (las que no deben empeorar)
   - Cálculo del tamaño muestral necesario para detectar un efecto mínimo relevante
   - Duración mínima del experimento (considerando ciclos semanales del comportamiento)
   - Criterios de parada temprana (cuándo detener el test por daño o por éxito abrumador)
   - Análisis estadístico: diferencia entre significancia estadística y relevancia de negocio

4. **Predicción de impacto en métricas de negocio:**
   Crea un modelo simple de impacto que conecte el cambio de comportamiento previsto con las métricas de negocio:
   - Árbol de métricas: cómo el cambio en la métrica de comportamiento afecta a retención → LTV → ingresos
   - Escenarios optimista / esperado / pesimista con los supuestos de cada uno
   - Sensibilidad: qué variable tiene mayor impacto en el resultado y cómo validarla pronto

5. **Sistema de alertas post-lanzamiento:**
   Una vez lanzado el cambio, define el proceso de seguimiento:
   - Métricas a revisar en las primeras 24 horas (señales de daño inmediato)
   - Métricas a revisar en la primera semana
   - Criterios de rollback: qué umbral de degradación activa la marcha atrás
   - Informe de resultados del experimento: plantilla para presentar al equipo y a stakeholders

6. **Biblioteca de patrones de comportamiento:**
   Crea un documento vivo de aprendizajes sobre cómo se comportan los usuarios de tu producto:
   - Plantilla para documentar cada experimento (hipótesis, resultado, aprendizaje clave)
   - Los 5 patrones de comportamiento más contraintuitivos que ya has observado
   - Cómo usar estos patrones para informar las próximas decisiones de producto
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Predecir el impacto de cambios de producto en el comportamiento de usuario antes de lanzarlos, reduciendo el riesgo de decisiones equivocadas.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Predicción de rotación de personal y retención con IA para RRHH',
                'description'       => 'Identifica con meses de antelación qué empleados tienen mayor probabilidad de abandonar la empresa y diseña intervenciones personalizadas para retener el talento crítico.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en People Analytics con experiencia en modelos predictivos de gestión del talento. Crearás un sistema que combine datos de RRHH con señales de comportamiento para predecir la rotación voluntaria y diseñar estrategias de retención proactivas.

**Contexto de la organización:**
- Número de empleados: [número]
- Sectores o áreas principales: [lista]
- Tasa de rotación voluntaria actual: [porcentaje anual]
- Coste estimado de reemplazar a un empleado: [multiplicador del salario anual, por ejemplo 1.5x]
- Datos disponibles en RRHH: [nómina / evaluaciones de desempeño / encuestas de clima / datos de formación / absentismo / historico de promociones / todos / ninguno estructurado]
- Herramienta de RRHH en uso: [SAP SuccessFactors / Workday / BambooHR / Factorial / Excel / otra]

**sistema predictivo de rotación:**

1. **Variables predictoras de la rotación (features de riesgo):**
   Lista las señales que más predicen la rotación voluntaria, ordenadas por poder predictivo:
   - Señales de desenganche: reducción en participación en reuniones, ausencias cortas frecuentes, descenso en calidad del trabajo
   - Señales de carrera estancada: tiempo sin promoción > promedio del rol, sin formación en últimos 6 meses, sin cambio de responsabilidades
   - Señales de mercado externo: actualización de perfil de LinkedIn, búsquedas de empleo detectables, participación en redes profesionales
   - Señales relacionales: cambio de manager, conflictos registrados en RRHH, pérdida de compañeros cercanos
   - Señales salariales: brecha entre salario propio y mercado, sin aumento en >18 meses
   Para cada señal: cómo medirla y cómo registrarla en el sistema.

2. **Modelo de scoring de riesgo de rotación:**
   Sin necesidad de ML complejo, crea un sistema de puntuación ponderada:
   - Tabla de puntuación: cada factor de riesgo vale entre 1 y 5 puntos según su peso predictivo
   - Umbrales de riesgo: bajo (0-10 puntos) / medio (11-20) / alto (21-30) / crítico (>30)
   - Fórmula de cálculo en Excel o Google Sheets lista para usar
   - Frecuencia de recalculación recomendada: mensual o trimestral
   - Cómo presentar el dashboard a managers sin violar la privacidad de los datos individuales

3. **Segmentación del talento crítico:**
   No todos los empleados valen igual retener. Crea una matriz de retención:
   - Eje X: nivel de desempeño (bajo / medio / alto)
   - Eje Y: nivel de riesgo de rotación (bajo / medio / alto)
   - Para cada cuadrante: estrategia de retención, nivel de inversión y urgencia de acción
   - Cómo identificar quiénes son "vuelo de águila" (alto desempeño + alto riesgo) y tratarlos de forma diferenciada

4. **Intervenciones de retención por perfil de riesgo:**
   Para cada nivel de riesgo, define un menú de intervenciones:
   - Riesgo bajo: comunicación regular, plan de desarrollo, reconocimiento
   - Riesgo medio: conversación de carrera con RRHH, ajuste de rol o responsabilidades, revisión salarial
   - Riesgo alto: entrevista de retención estructurada, oferta de retención personalizada, cambio de manager o equipo si es la causa
   - Riesgo crítico: protocolo de retención urgente con C-level involucrado, plan de contingencia de sustitución en paralelo
   Para el riesgo alto y crítico: guión de la conversación de retención con preguntas específicas y cómo manejar cada tipo de respuesta.

5. **Entrevista de retención (guión completo):**
   Conversación estructurada de 45 minutos para empleados de riesgo medio-alto:
   - Apertura: cómo crear el ambiente de confianza sin poner al empleado a la defensiva
   - Preguntas de diagnóstico: 10 preguntas abiertas para identificar las causas raíz reales
   - Preguntas de visión: qué necesita ver para quedarse otros 2-3 años
   - Cierre: cómo traducir la conversación en compromisos concretos con fecha
   - Seguimiento: cómo documentar la conversación y hacer seguimiento en 30, 60 y 90 días

6. **Métricas del programa de retención:**
   Define cómo medir el retorno de inversión del sistema predictivo:
   - Tasa de conversión de intervenciones (empleados de riesgo alto que siguen en la empresa 12 meses después)
   - Coste de retención vs. coste de sustitución
   - Mejora en la tasa de rotación general año a año
   - Informes trimestrales a dirección: qué incluir y cómo presentarlo
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Predecir qué empleados tienen mayor riesgo de abandonar la empresa para intervenir proactivamente y retener el talento crítico.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Forecasting financiero y modelización de escenarios con IA para CFOs',
                'description'       => 'Construye modelos de previsión financiera robustos con análisis de sensibilidad y escenarios Monte Carlo simplificados para mejorar la toma de decisiones en entornos de incertidumbre.',
                'prompt_content'    => <<<'EOT'
Eres un CFO con experiencia en financial modelling, FP&A (Financial Planning & Analysis) y presentación de resultados a Consejos de Administración. Crearás un modelo de forecasting financiero completo con análisis de sensibilidad y escenarios que permita a la organización navegar la incertidumbre con mayor confianza.

**Contexto financiero:**
- Tipo de empresa: [startup en crecimiento / pyme consolidada / filial de multinacional]
- Sector: [tecnología / industrial / servicios / retail / otro]
- Facturación anual actual: [rango en €]
- Número de líneas de negocio: [número]
- Horizonte de planificación: [1 año / 3 años / 5 años]
- Herramienta de modelización: [Excel / Google Sheets / Power BI / herramienta específica de FP&A]
- Principales drivers de ingresos: [lista los 3-5 factores que más mueven los ingresos]
- Principales drivers de coste: [lista los 3-5 factores de coste más importantes]

**modelo de forecasting financiero:**

1. **Estructura del modelo financiero (top-down + bottom-up):**
   Define la arquitectura del modelo con dos enfoques complementarios:
   - Top-down: proyección macroeconómica → cuota de mercado objetivo → ingresos esperados
   - Bottom-up: unidades vendidas × precio × tasa de conversión por canal → ingresos reales
   Describe cómo reconciliar ambos enfoques y usar la diferencia como señal de alerta.
   Proporciona la estructura de pestañas recomendada para el modelo en Excel/Sheets.

2. **Identificación y cuantificación de drivers:**
   Para cada driver de ingresos y costes identificado:
   - Definición precisa y unidad de medida
   - Fuente de datos histórica para calibrar el driver
   - Elasticidad respecto a variables externas (PIB, IPC, tipo de interés, etc.)
   - Rango de variación razonable para el análisis de sensibilidad (±10%, ±25%, ±50%)
   Proporciona la fórmula de modelización en lenguaje de hoja de cálculo.

3. **Análisis de sensibilidad (tornado chart):**
   Metodología para identificar qué variables tienen mayor impacto en el resultado:
   - Cómo construir la tabla de sensibilidad bidireccional en Excel
   - Cómo ordenar las variables por impacto absoluto en el EBITDA o el flujo de caja
   - Cómo presentar el tornado chart a no financieros de forma comprensible
   - Umbrales de alerta: qué variación en cada driver activaría una revisión del plan

4. **Escenarios (Base, Optimista, Pesimista):**
   Define los supuestos de cada escenario con rigor:
   - Escenario Base: continuación de tendencias actuales, sin disrupciones mayores
   - Escenario Optimista: catalizadores positivos específicos (nuevo contrato grande, expansión exitosa, etc.)
   - Escenario Pesimista: materialización de los principales riesgos identificados
   Para cada escenario: supuestos clave en una tabla, P&L proyectado a 12 meses, flujo de caja libre, ratio de deuda/EBITDA si aplica, y la probabilidad subjetiva asignada.

5. **Simulación Monte Carlo simplificada:**
   Sin software especializado, aproxima el análisis Monte Carlo con Excel:
   - Cómo usar la función RAND() o datos de análisis de escenarios para generar distribuciones
   - Número de iteraciones razonable (1.000) y cómo automatizarlo con macros básicas
   - Cómo interpretar los percentiles 10, 50 y 90 del EBITDA proyectado
   - Cómo presentar el rango de incertidumbre en una gráfica comprensible para el Consejo

6. **Reporting financiero y comunicación de la incertidumbre:**
   Plantilla de presentación ejecutiva mensual (6 diapositivas máximo):
   - Diapositiva 1: Real vs. Forecast del mes (varianza explicada en máximo 3 puntos)
   - Diapositiva 2: Estado del escenario base vs. escenarios alternativos
   - Diapositiva 3: Indicadores de alerta temprana (4-5 KPIs con semáforo)
   - Diapositiva 4: Revisión de supuestos materiales y cambios respecto al mes anterior
   - Diapositiva 5: Acciones correctivas propuestas con responsable y fecha
   - Diapositiva 6: Próximos hitos financieros críticos (vencimientos, inversiones, covenants)
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir modelos de forecasting financiero con análisis de escenarios y sensibilidad para mejorar la toma de decisiones estratégicas en entornos inciertos.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Análisis predictivo de riesgos legales y contractuales con IA',
                'description'       => 'Implementa un sistema de identificación y scoring de riesgos legales en contratos y operaciones, para anticipar litigios, incumplimientos y exposición regulatoria antes de que ocurran.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especialista en gestión de riesgos legales y compliance con experiencia en auditoría de contratos, análisis de disputas potenciales y construcción de sistemas de alerta temprana para departamentos jurídicos. Crearás un sistema de análisis predictivo de riesgos adaptado a las necesidades de la organización.

**Contexto jurídico:**
- Tipo de organización: [empresa privada / despacho de abogados / entidad pública]
- Áreas legales con mayor exposición: [contratos comerciales / laboral / regulatorio / protección de datos / propiedad intelectual / fusiones y adquisiciones]
- Volumen de contratos activos: [número aproximado]
- Importe total de contratos bajo gestión: [rango en €]
- ¿Existe un sistema de gestión de contratos (CLM)?: [sí, cuál / no]
- Historial de litigios o incumplimientos en los últimos 3 años: [ninguno / 1-5 / más de 5]
- Equipo jurídico: [1 persona / 2-5 / departamento completo / externalizado a despacho]

**sistema de gestión predictiva de riesgos legales:**

1. **Taxonomía de riesgos legales (mapa de riesgos):**
   Crea un mapa de los riesgos legales relevantes para la organización, clasificados por:
   - Categoría: contractual / regulatorio / laboral / fiscal / reputacional
   - Probabilidad de ocurrencia: alta / media / baja (con criterios para cada calificación)
   - Impacto potencial: crítico / significativo / menor (en términos de exposición económica y reputacional)
   - Posición en la matriz de riesgo (probabilidad × impacto)
   Proporciona la matriz en formato tabla lista para usar en reuniones de comité.

2. **Revisión predictiva de contratos (checklist de red flags):**
   Lista de 30 cláusulas o ausencias contractuales que aumentan el riesgo de disputa:
   - Para contratos de servicios o suministro
   - Para contratos laborales (alta dirección, comerciales con comisiones)
   - Para contratos con administraciones públicas
   Para cada red flag: descripción del problema, impacto habitual, cláusula correctora recomendada.

3. **Scoring de riesgo por contrato:**
   Sistema de puntuación para categorizar el riesgo de cada contrato activo:
   - 10 criterios de evaluación con peso ponderado (0-100 puntos total)
   - Criterios sugeridos: contraparte conocida, cuantía del contrato, jurisdicción, presencia de penalizaciones, fecha de renovación, historial de incumplimientos de la contraparte, etc.
   - Umbrales: bajo riesgo (0-30) / riesgo medio (31-60) / alto riesgo (61-100)
   - Frecuencia de revisión recomendada según el nivel de riesgo
   - Plantilla de Excel para calcular el score de toda la cartera de contratos

4. **Señales de alerta temprana de litigio inminente:**
   Define los indicadores que deben activar una revisión inmediata antes de que el conflicto se formalice:
   - Comportamiento de la contraparte: retrasos en pagos, cambios de interlocutor, solicitudes inusuales
   - Señales externas: noticias de dificultades financieras de la contraparte, cambios regulatorios que afecten el contrato
   - Señales internas: quejas del equipo operativo sobre la relación, incumplimientos menores no escalados
   Para cada señal: protocolo de escalado (quién actúa, en cuánto tiempo y qué hace)

5. **Calendario de riesgos regulatorios:**
   Para las áreas regulatorias identificadas, crea un calendario de los próximos 18 meses:
   - Fechas de transposición de directivas europeas relevantes
   - Fechas de vigencia de nuevas normativas españolas
   - Plazos de adaptación o notificación a reguladores
   - Para cada fecha: qué hay que tener listo, quién es el responsable interno y qué pasa si no se cumple

6. **Informe de riesgos para el Consejo (plantilla):**
   Estructura de informe trimestral de riesgos legales para presentar a dirección o consejo:
   - Resumen ejecutivo: estado general del riesgo legal (semáforo global)
   - Litigios activos: estado, exposición económica, probabilidad de resultado adverso
   - Riesgos contractuales de alto scoring
   - Novedades regulatorias y su impacto
   - Acciones preventivas completadas en el trimestre
   - Inversión en prevención vs. coste histórico de litigios
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir un sistema de scoring y alerta temprana de riesgos legales y contractuales para prevenir litigios antes de que se materialicen.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Predicción de volumen de tickets y planificación de capacidad en CS con IA',
                'description'       => 'Anticipa picos de solicitudes de soporte con semanas de antelación para dimensionar el equipo correctamente, reducir tiempos de respuesta y evitar la degradación del servicio.',
                'prompt_content'    => <<<'EOT'
Eres un director de Customer Success con experiencia en operaciones de soporte, workforce management y mejora continua de la experiencia del cliente. Crearás un sistema de forecasting de volumen de contactos que permita planificar la capacidad del equipo con antelación suficiente.

**Operación de soporte:**
- Canales de contacto: [email / chat en vivo / teléfono / WhatsApp / todos]
- Volumen mensual actual de tickets: [número]
- Distribución horaria: [24/7 / horario de oficina / con turno de tarde]
- Distribución por días de la semana: [uniforme / picos lunes / picos tras fin de semana]
- Número de agentes actuales: [número]
- Tiempo de atención promedio por ticket (AHT): [minutos]
- Tiempo de primera respuesta objetivo (FRT): [horas]
- Herramienta de soporte: [Zendesk / Freshdesk / Intercom / HubSpot / otra]
- ¿Tienes historial de al menos 6 meses de datos?: [sí/no]

**sistema de forecasting de volumen:**

1. **Análisis de patrones históricos:**
   Metodología para extraer los patrones de volumen de tus datos históricos:
   - Cómo exportar los datos de la herramienta de soporte (formato, columnas necesarias)
   - Análisis de estacionalidad semanal: qué días concentran más volumen y por qué
   - Análisis de estacionalidad anual: picos por temporada, eventos del calendario, lanzamientos de producto
   - Correlación entre eventos de negocio y picos de soporte: cómo mapear causa-efecto
   - Detección de anomalías: cómo identificar picos causados por incidencias vs. tendencia natural
   Proporciona las fórmulas de Excel y las queries SQL necesarias para este análisis.

2. **Modelo de previsión de volumen por canal (próximas 4 semanas):**
   Método de previsión adaptado al volumen y madurez de datos disponibles:
   - Modelo básico (sin histórico robusto): media móvil ajustada por índice de estacionalidad
   - Modelo intermedio (con 6-12 meses de histórico): suavización exponencial + factores externos
   - Factores externos a incorporar: lanzamientos de producto planificados, campañas de marketing, cambios de precio, actualizaciones que generan confusión en usuarios
   Proporciona la plantilla de previsión semanal lista para completar con los datos reales.

3. **Cálculo de capacidad necesaria (Erlang C simplificado):**
   Para convertir el volumen previsto en necesidades de personal:
   - Cómo aplicar la fórmula de Erlang C de forma simplificada con Excel
   - Variables de entrada: volumen de contactos por hora, AHT, target de nivel de servicio (ej. 80% de chats respondidos en <1 min)
   - Variables de ajuste: tasa de ausentismo, tiempo de formación de nuevos agentes, reuniones y actividades no productivas (shrinkage)
   - Resultado: número de agentes necesarios por franja horaria, día y semana
   Proporciona la hoja de cálculo de Erlang simplificado con explicación de cada celda.

4. **Planificación de turnos basada en el forecast:**
   Sistema de generación de horarios óptimos:
   - Cómo estructurar los turnos para cubrir los picos del forecast sin sobredimensionar en valles
   - Estrategias de flexibilización: turnos variables, banco de horas, agentes part-time para picos
   - Protocolo de activación de refuerzos externos cuando el forecast supera la capacidad en >20%
   - Cuándo y cómo contratar: lead time necesario (formación + curva de aprendizaje = X semanas)
   - Plan de contingencia para incidencias que generan picos imprevistos (+50% de volumen en <2 horas)

5. **Alertas en tiempo real y respuesta dinámica:**
   Sistema de monitorización intradía que detecta desviaciones respecto al forecast:
   - Métricas a revisar cada 30 minutos: volumen real vs. forecast, backlog acumulado, FRT actual
   - Umbrales de alerta: verde (desviación <15%) / ámbar (15-30%) / rojo (>30%)
   - Protocolo de respuesta por color: qué acciones inmediatas toma el supervisor en cada caso
   - Herramientas de monitorización en tiempo real disponibles en tu plataforma de soporte

6. **Métricas del sistema de forecasting:**
   Cómo medir la calidad de las previsiones y mejorar el modelo con el tiempo:
   - WMAPE (Weighted Mean Absolute Percentage Error) para volumen: cálculo e interpretación
   - Objetivo de precisión del primer año: ±15% en semana vista, ±25% en mes vista
   - Proceso de revisión mensual del modelo: cómo incorporar nuevos datos y ajustar supuestos
   - ROI del sistema de forecasting: cálculo del ahorro en costes de personal vs. coste de implementación
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Predecir el volumen de tickets de soporte para planificar la capacidad del equipo con antelación y mantener los niveles de servicio en picos de demanda.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Forecasting de ingresos y planificación financiera para freelancers con IA',
                'description'       => 'Construye un modelo de previsión de ingresos personalizado para tu actividad freelance que te permita planificar proyectos, gestionar la tesorería y tomar decisiones de inversión con seguridad.',
                'prompt_content'    => <<<'EOT'
Eres un asesor financiero especializado en la economía de los trabajadores independientes y autónomos. Crearás un sistema de forecasting de ingresos adaptado a la naturaleza irregular y estocástica del trabajo freelance, con herramientas prácticas de gestión de tesorería y planificación financiera personal.

**Perfil freelance:**
- Especialidad o servicio principal: [describe brevemente]
- Años de actividad como freelance: [número]
- Tarifa media por proyecto o por hora: [importe en €]
- Número aproximado de clientes activos: [número]
- Porcentaje de ingresos que viene de clientes recurrentes: [porcentaje]
- Ciclo de cobro habitual: [al contado / 30 días / 60 días / mixto]
- Ingresos brutos del último año: [rango en €]
- Gastos mensuales personales fijos: [importe en €]
- ¿Tienes colchón de emergencia?: [meses de gastos cubiertos]

**modelo de forecasting para freelance:**

1. **Análisis de tus patrones de ingresos históricos:**
   Metodología para entender la estructura real de tus ingresos:
   - Cómo categorizar los proyectos cerrados: recurrentes vs. nuevos clientes, pequeños vs. grandes, por sector
   - Distribución mensual de ingresos: identificación de meses fuertes, débiles y anomalías
   - Tasa de conversión de propuestas enviadas a proyectos ganados
   - Ticket medio por tipo de cliente y por tipo de proyecto
   - Tiempo medio entre primer contacto y primera factura
   Proporciona la plantilla de Excel con todas las métricas y cómo calcularlas.

2. **Modelo de previsión de ingresos a 6 meses:**
   Sistema de forecasting adaptado a la realidad freelance:
   - Ingresos garantizados: proyectos ya contratados con fecha de facturación conocida
   - Ingresos probables (70-90%): proyectos en negociación avanzada o propuestas enviadas
   - Ingresos posibles (30-50%): conversaciones iniciales y leads calientes en pipeline
   - Ingresos históricos base: ingresos mínimos esperados por recurrencia de clientes actuales
   Cómo actualizar esta previsión cada semana en 15 minutos.

3. **Gestión de la tesorería y flujo de caja:**
   El mayor riesgo del freelance no es la falta de ingresos sino la falta de liquidez. Define:
   - Colchón de emergencia óptimo: cuántos meses de gastos fijos tener siempre en cuenta corriente
   - Cuenta de retenciones: qué porcentaje de cada cobro reservar para IRPF y cotizaciones
   - Cómo gestionar los cobros irregulares: estrategia de inversión del exceso en meses buenos
   - Protocolo de cobros en mora: cuándo y cómo reclamar, qué hacer si el cliente no paga
   - Herramientas de gestión de facturación y cobros recomendadas para freelance

4. **Planificación de capacidad y pricing:**
   Optimiza cuántos proyectos puedes tomar y a qué precio:
   - Cálculo de tu tarifa mínima viable: (gastos fijos personales + gastos del negocio + margen de ahorro) / horas facturables reales al mes
   - Cuántas horas son realmente facturables (descuenta: gestión, formación, marketing, administración)
   - Modelo de previsión de carga de trabajo: cuándo estarás lleno y cuándo tendrás hueco
   - Cuándo subir tarifas: señales objetivas (lista de espera, rechazas proyectos, tasa de conversión >70%)

5. **Estrategia de diversificación de ingresos:**
   Para reducir la volatilidad del ingreso freelance:
   - Análisis de concentración de clientes: si un cliente representa >30% de ingresos, hay riesgo crítico
   - Plan de diversificación: cómo pasar de 1-2 clientes grandes a una cartera más equilibrada
   - Fuentes de ingresos pasivos o semi-pasivos complementarias (cursos, templates, SaaS, afiliación)
   - Cómo valorar si una propuesta de proyecto a largo plazo o contrato de retención compensa vs. la libertad de proyectos puntuales

6. **Dashboard financiero mensual del freelance:**
   Revisión mensual de 30 minutos que toda persona autónoma debería hacer:
   - Facturación real vs. previsión del mes
   - Cobros recibidos vs. pendientes (aging de facturas)
   - Gastos reales vs. presupuesto
   - Reserva fiscal actualizada (IRPF + IVA pendiente)
   - Ahorro del mes y progreso hacia objetivos financieros
   - Actualización del forecast para los próximos 3 meses
   Proporciona la plantilla completa con fórmulas lista para usar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir un sistema de previsión de ingresos y gestión de tesorería adaptado a la realidad del trabajo freelance para evitar crisis de liquidez.',
                'vote_score'        => 41,
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
