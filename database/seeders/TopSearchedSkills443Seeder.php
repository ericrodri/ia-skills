<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills443Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Testing de mensajes y copy de marketing con IA antes del lanzamiento de campaña',
                'description'       => 'Usa IA para evaluar y optimizar textos publicitarios, asuntos de email y landing pages antes de invertir presupuesto, identificando debilidades de mensaje y oportunidades de mejora.',
                'prompt_content'    => <<<'EOT'
Eres un experto en copywriting, psicología del consumidor y optimización de conversión con experiencia en el análisis y mejora de mensajes de marketing antes de su lanzamiento. Tu objetivo es actuar como un sistema de QA de mensajes: revisar el copy de mis campañas, identificar debilidades, inconsistencias o fricciones, y proponer alternativas concretas que aumenten la relevancia, claridad y persuasión de cada pieza.

**Contexto de la campaña:**
[Describe el objetivo de la campaña, el producto o servicio que promocionas, el canal de distribución y el presupuesto estimado]

**Audiencia objetivo:**
[Describe el segmento al que te diriges: perfil demográfico, motivaciones principales, nivel de familiaridad con tu producto y etapa del funnel donde se encuentra]

**Copy que quiero revisar:**
[Pega aquí el texto completo: asunto de email, headline de landing page, texto de anuncio, descripción de producto, script de video, etc.]

---

Con este material, necesito que realices las siguientes evaluaciones:

**1. Análisis de claridad y comprensión:**
Evalúa si el mensaje comunica en menos de cinco segundos qué es el producto, para quién es y qué problema resuelve. Identifica términos ambiguos, jerga innecesaria, frases que requieren demasiado esfuerzo cognitivo y cualquier elemento que genere confusión en un lector que no conoce la marca. Proporciona una versión simplificada de cada sección problemática.

**2. Análisis de relevancia y resonancia:**
Evalúa si el copy habla el idioma de la audiencia objetivo. ¿Usa los términos y metáforas que esta audiencia usa? ¿El problema que describe es el que realmente le quita el sueño al lector? ¿El tono (formal, cercano, aspiracional, urgente) es el adecuado para el canal y el segmento? Proporciona dos variaciones de tono para el headline principal.

**3. Análisis de credibilidad y prueba social:**
¿El mensaje incluye suficientes elementos de confianza para reducir la fricción de conversión: testimonios, números, garantías, logos, certificaciones? ¿Las afirmaciones son específicas y verificables o son vagas y genéricas? Sugiere qué tipo de prueba social añadir y en qué posición del copy sería más efectiva.

**4. Análisis del CTA y fricción de conversión:**
Evalúa si el llamado a la acción es claro, específico y alineado con la etapa del funnel. ¿Pide demasiado compromiso demasiado pronto? ¿El CTA describe exactamente lo que ocurrirá al hacer clic? ¿Hay elementos de urgencia o escasez que sean creíbles? Proporciona tres versiones alternativas del CTA con diferente nivel de compromiso.

**5. Test de consistencia con la promesa de marca:**
¿El copy es consistente con el tono y los valores de la marca tal como los has descrito? ¿Hay afirmaciones que podrían generar expectativas que el producto no puede cumplir, creando riesgo de decepción y devoluciones? Señala cualquier promesa hiperbólica que deba moderarse.

**6. Versiones A/B para prueba:**
Genera dos variaciones del copy completo para una prueba A/B rigurosa: una que optimice para claridad y confianza (conservadora) y otra que optimice para emoción y urgencia (agresiva). Explica la hipótesis detrás de cada variación y qué métrica principal debería determinar el ganador.

**7. Checklist de lanzamiento:**
Proporciona una lista de verificación de 10 puntos que pueda usar antes de lanzar cualquier campaña futura para asegurar la calidad del copy sin necesitar una revisión completa cada vez.

Responde con un análisis estructurado por sección del copy, una puntuación de 1 a 10 por cada dimensión evaluada y las versiones alternativas con sus justificaciones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Evaluar y optimizar el copy de campañas de marketing antes del lanzamiento para identificar debilidades de mensaje y aumentar la tasa de conversión sin desperdiciar presupuesto.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plan de testing automatizado con IA para reducir bugs en producción y acelerar el CI/CD',
                'description'       => 'Diseña una estrategia completa de QA automatizado usando IA para generar casos de prueba, detectar regresiones y mejorar la cobertura de tests en proyectos de software.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de QA senior y especialista en arquitecturas de testing automatizado con amplio conocimiento en el uso de inteligencia artificial para mejorar la calidad del software, reducir el tiempo de ciclo y prevenir regresiones en producción. Tu objetivo es ayudarme a diseñar e implementar una estrategia de testing automatizado que sea práctica, escalable y que integre IA para maximizar la cobertura con el mínimo esfuerzo manual.

**Contexto del proyecto:**
[Describe tu aplicación: tipo de sistema (web app, API REST, microservicios, app móvil), stack tecnológico, tamaño del equipo, frecuencia de despliegues y principales áreas de riesgo]

**Estado actual del testing:**
[Describe qué tests tienes ahora: unitarios, de integración, end-to-end, cobertura aproximada, herramientas que ya usas como Jest, Pytest, Cypress, Playwright, etc.]

**Pipeline de CI/CD actual:**
[Describe tu pipeline: herramienta (GitHub Actions, GitLab CI, Jenkins, etc.), etapas actuales y tiempo de ejecución total]

**Problema principal de calidad:**
[Ejemplo: demasiados bugs en producción, tests frágiles que fallan sin motivo, cobertura baja en áreas críticas, el pipeline tarda demasiado, los desarrolladores no escriben tests, etc.]

---

Con este contexto, necesito que diseñes:

**1. Estrategia de testing en capas (pirámide de testing):**
Define la distribución óptima de tests para mi proyecto: cuántos unitarios, de integración y E2E debería tener, qué áreas del código deben tener mayor cobertura, y cómo priorizar la escritura de tests con el mayor ROI en términos de prevención de bugs. Incluye el umbral mínimo de cobertura por capa y cómo medirlo.

**2. Generación de casos de prueba con IA:**
Explica cómo usar Claude u otra IA para generar casos de prueba a partir del código fuente o de las especificaciones funcionales. Proporciona el proceso paso a paso: qué contexto proporcionar al modelo, qué tipo de casos generar (casos felices, casos límite, casos de error, casos de seguridad), cómo revisar y seleccionar los casos generados, y cómo integrarlos en el flujo de trabajo del equipo.

**3. Detección de regresiones con IA:**
Diseña un sistema de detección de regresiones que use IA para: analizar los diffs de código y predecir qué áreas tienen mayor riesgo de introducir bugs, priorizar qué tests ejecutar primero en el pipeline, y alertar al desarrollador sobre las funciones relacionadas con el cambio que podrían verse afectadas. Describe las herramientas o enfoques para implementar esto con tu stack.

**4. Tests de mutación para evaluar la calidad de los tests:**
Explica qué es el testing de mutación, cómo implementarlo con herramientas como Stryker o mutmut, cómo interpretar el mutation score y cómo usarlo para identificar las áreas donde los tests existentes no detectarían fallos reales. Proporciona un plan para incorporar el testing de mutación sin bloquear el pipeline.

**5. Optimización del pipeline de CI para velocidad y fiabilidad:**
Describe cómo reorganizar el pipeline para reducir el tiempo de ejecución sin sacrificar cobertura: paralelización de tests, ejecución selectiva basada en el código cambiado, estrategias de caché, y cómo identificar y eliminar tests lentos o inestables (flaky tests). Incluye configuración de ejemplo para mi herramienta de CI.

**6. Métricas de calidad y panel de QA:**
Define los KPIs del sistema de testing: cobertura de código por módulo, tasa de tests en rojo en CI, tiempo de detección de bugs (lead time desde introducción hasta detección), tasa de bugs escapados a producción, y tiempo de ejecución del pipeline. ¿Cómo crear un dashboard simple para monitorear estas métricas?

**7. Plan de adopción para el equipo:**
Diseña un plan de 12 semanas para mejorar la cultura de testing del equipo: qué hábitos implementar primero, cómo hacer code review de tests, cómo gamificar la mejora de cobertura, y cómo medir el impacto en la velocidad y calidad del equipo.

Incluye fragmentos de código de configuración, ejemplos de casos de prueba generados por IA y un roadmap de implementación con hitos medibles.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar una estrategia completa de testing automatizado con IA que reduzca los bugs en producción, acelere el pipeline de CI/CD y mejore la cultura de calidad del equipo.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'QA de sistemas de diseño y componentes UI con IA para garantizar consistencia visual',
                'description'       => 'Usa IA para auditar la consistencia visual de un sistema de diseño, detectar desviaciones entre el diseño y la implementación, y establecer un proceso de QA visual automatizado.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en sistemas de diseño y quality assurance visual con experiencia en el uso de inteligencia artificial para garantizar la consistencia y calidad de interfaces de usuario a escala. Tu objetivo es ayudarme a construir un proceso de QA visual que detecte automáticamente desviaciones entre el diseño especificado y la implementación real, y que garantice la coherencia del sistema de diseño a medida que el producto evoluciona.

**Mi sistema de diseño:**
[Describe el sistema de diseño: herramientas que usas (Figma, Storybook, Zeroheight), número de componentes, tamaño del equipo, stack de frontend y frecuencia de cambios en el sistema]

**Problema actual de consistencia:**
[Ejemplo: los desarrolladores implementan componentes que no respetan los tokens de diseño, hay variaciones no documentadas del mismo componente, el sistema de diseño y la implementación se desincronizaron, hay regresiones visuales frecuentes con cada deployment, etc.]

**Herramientas de testing actuales:**
[Indica si usas alguna herramienta de testing visual: Percy, Chromatic, BackstopJS, Playwright screenshots, o ninguna aún]

---

Con este contexto, necesito que:

**1. Defines el proceso de QA visual:**
Diseña un proceso completo de QA visual que cubra todas las etapas del ciclo de vida del componente: desde la especificación en Figma hasta la implementación en código y el deployment a producción. Define quién es responsable en cada etapa (diseñador, desarrollador, QA), qué herramientas se usan y qué criterios de aceptación deben cumplirse.

**2. Crees un checklist de revisión de componentes:**
Proporciona una lista de verificación que el diseñador y el desarrollador deben completar al entregar y recibir un nuevo componente o modificación. Incluye: revisión de tokens (colores, tipografía, espaciado, sombras), comportamiento en estados (hover, focus, disabled, error, loading), responsividad en breakpoints clave, accesibilidad (contraste, tamaño de target, roles ARIA) y documentación de variantes.

**3. Implementes testing visual automatizado con IA:**
Explica cómo usar herramientas de testing visual (como Chromatic o Percy) integradas con IA para detectar regresiones visuales automáticamente en el pipeline de CI. Describe la configuración inicial, cómo gestionar los false positives, cómo establecer snapshots de referencia y cómo integrar el proceso de aprobación de cambios visuales en el flujo de trabajo del equipo.

**4. Audites la implementación actual contra las especificaciones de diseño:**
Describe cómo usar IA (análisis de screenshots, revisión de código CSS/tokens) para hacer una auditoría inicial de la implementación existente y generar un informe de desviaciones. Proporciona el proceso para priorizar y corregir las desviaciones encontradas sin interrumpir el desarrollo en curso.

**5. Gobernanza del sistema de diseño:**
Define el proceso de gobierno para garantizar que el sistema de diseño se mantiene actualizado y coherente: cómo documentar cambios, cómo comunicarlos al equipo, cómo deprecar componentes sin romper la implementación, y cómo gestionar las solicitudes de nuevos componentes o variantes.

**6. Métricas de salud del sistema de diseño:**
Define los indicadores para medir la calidad y adopción del sistema de diseño: tasa de uso de componentes del sistema versus componentes ad-hoc, número de desviaciones detectadas por sprint, tiempo de implementación promedio de un componente nuevo, y satisfacción del equipo de desarrollo con el sistema. ¿Cómo crear un dashboard de salud del sistema en Notion o Confluence?

**7. Plan de formación del equipo:**
Diseña un programa de onboarding de dos semanas para nuevos diseñadores y desarrolladores en el sistema de diseño, incluyendo sesiones, recursos y ejercicios prácticos que garanticen que contribuyen al sistema de forma consistente desde el primer día.

Incluye ejemplos de configuración de herramientas, plantillas de checklist y ejemplos de reportes de QA visual.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir un proceso de QA visual automatizado que detecte regresiones y desviaciones en la implementación del sistema de diseño, garantizando la consistencia visual a escala.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Control de calidad del pipeline de ventas con IA para detectar oportunidades en riesgo',
                'description'       => 'Aplica IA para auditar la calidad del pipeline de ventas, identificar oportunidades estancadas o mal calificadas y diseñar acciones correctivas que aceleren el cierre.',
                'prompt_content'    => <<<'EOT'
Eres un director de ventas y especialista en optimización de pipelines comerciales con amplia experiencia en el uso de inteligencia artificial para mejorar la calidad de la gestión de oportunidades, detectar riesgos tempranos y aumentar la tasa de conversión. Tu objetivo es ayudarme a implementar un sistema de QA del pipeline de ventas que garantice que cada oportunidad está correctamente calificada, tiene el plan de acción correcto y avanza a la velocidad esperada.

**Mi contexto de ventas:**
[Describe tu equipo: número de vendedores, tipo de venta (B2B, B2C, enterprise, SMB), ciclo de venta promedio, ticket promedio y herramienta de CRM que usas]

**Estado actual del pipeline:**
[Número de oportunidades abiertas, distribución por etapa, tasa de conversión actual y principales razones de pérdida]

**Problema principal:**
[Ejemplo: el pipeline está lleno de oportunidades fantasma que nunca cierran, hay demasiada variabilidad entre vendedores, no sé cuáles oportunidades priorizar, el forecast es impreciso, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el sistema de scoring de calidad de oportunidades:**
Define los criterios para evaluar la calidad de cada oportunidad en el pipeline. Crea un modelo de scoring que combine: completitud de la información en el CRM (presupuesto definido, decisor identificado, caso de negocio documentado, próximo paso acordado con fecha), indicadores de compromiso del prospecto (últimas actividades, tiempo desde último contacto, engagement con contenido) y señales de riesgo (estancamiento en etapa, cambio de contacto, competencia identificada). Proporciona la fórmula de scoring y los umbrales de alerta.

**2. Protocolo de auditoría semanal del pipeline:**
Diseña el proceso de revisión semanal del pipeline usando IA: cómo exportar o consultar los datos del CRM, qué análisis realizar con Claude u otra IA para detectar oportunidades problemáticas, qué preguntas debe responder el vendedor para cada oportunidad en riesgo, y cómo estructurar la reunión de pipeline review para que sea productiva y accionable en 60 minutos.

**3. Alertas automáticas de oportunidades en riesgo:**
Define los triggers que deben generar alertas automáticas para cada etapa del pipeline: tiempo máximo en cada fase sin avance, ausencia de actividad registrada, próximo paso vencido, falta de información crítica para avanzar. Describe cómo configurar estas alertas en los CRMs más comunes (Salesforce, HubSpot, Pipedrive) y el protocolo de actuación para cada tipo de alerta.

**4. Calificación rigurosa de oportunidades con IA:**
Proporciona un framework de calificación (MEDDIC, BANT, SPICED o híbrido) adaptado a mi tipo de venta. Para cada criterio de calificación define: pregunta de discovery correspondiente, señales de que está bien calificado, señales de riesgo y acción correctiva. Explica cómo usar Claude para revisar las notas del CRM y evaluar automáticamente el nivel de calificación de cada oportunidad.

**5. Mejora de la precisión del forecast:**
Diseña un modelo de forecast que combine el scoring de calidad de las oportunidades con el historial de conversión del vendedor y el tiempo en pipeline para generar una predicción más precisa del cierre. ¿Cómo calibrar el modelo con datos históricos? ¿Con qué frecuencia revisarlo?

**6. Plan de coaching basado en datos de pipeline:**
Explica cómo usar el análisis del pipeline para identificar los patrones de éxito de los mejores vendedores y los puntos de fallo más frecuentes de los que tienen peores resultados. ¿Cómo usar estos insights para diseñar sesiones de coaching individualizadas? ¿Qué métricas de actividad correlacionan mejor con el éxito en mi tipo de venta?

Incluye plantillas de revisión de pipeline, dashboard de métricas y ejemplos de preguntas de coaching basadas en los datos de oportunidades.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar un sistema de QA del pipeline de ventas que detecte oportunidades en riesgo, mejore la precisión del forecast y acelere la tasa de cierre con acciones correctivas basadas en datos.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Framework de QA de producto y criterios de aceptación con IA para lanzamientos sin regresiones',
                'description'       => 'Diseña un proceso de control de calidad de producto que use IA para generar criterios de aceptación, detectar riesgos antes del lanzamiento y garantizar que cada release cumple los estándares de calidad definidos.',
                'prompt_content'    => <<<'EOT'
Eres un product manager senior con experiencia en la implementación de procesos de QA de producto y el uso de inteligencia artificial para mejorar la calidad de los lanzamientos de software. Tu objetivo es ayudarme a construir un framework de control de calidad de producto que cubra desde la definición de criterios de aceptación hasta la validación pre-lanzamiento, reduciendo la probabilidad de lanzar features con bugs, UX deficientes o impacto negativo en métricas clave.

**Mi contexto de producto:**
[Describe el producto: tipo, etapa de desarrollo, frecuencia de lanzamientos, tamaño del equipo (PM, diseño, desarrollo, QA) y stack de herramientas de gestión de producto]

**Proceso de lanzamiento actual:**
[Describe cómo es hoy el proceso: cómo defines las features, cómo las validan, quién decide si están listas para lanzar y con qué criterios]

**Problema principal de calidad:**
[Ejemplo: se lanzan features con bugs que solo se descubren en producción, los criterios de aceptación son vagos y generan discusiones, hay regresiones frecuentes, el equipo no sabe si una feature es un éxito o un fracaso hasta semanas después del lanzamiento, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el proceso de definición de criterios de aceptación con IA:**
Define la metodología para crear criterios de aceptación (AC) usando IA como asistente del PM. Proporciona el proceso paso a paso: cómo describir la feature al modelo, qué formato usar para los AC (Given-When-Then, lista de verificación, matriz de escenarios), cómo incluir casos de borde y escenarios de error, y cómo revisar los AC con el equipo de desarrollo y QA antes de comenzar la implementación.

**2. Crees la checklist de calidad de especificaciones:**
Proporciona una lista de verificación que cada user story o especificación debe superar antes de ser aceptada en el sprint: completitud funcional, manejo de errores, casos de borde, criterios de rendimiento, criterios de accesibilidad, casos de regresión en features existentes, e impacto en métricas de negocio definido. Incluye el rol responsable de cada punto.

**3. Diseñes el proceso de QA de experiencia de usuario:**
Define un protocolo de revisión de UX antes del lanzamiento que incluya: revisión heurística de los criterios de Nielsen, prueba de flujos críticos con usuarios reales o internos, validación de consistencia con el sistema de diseño, y revisión de textos y microcopy. ¿Cómo hacer este proceso eficiente en un equipo ágil con sprints de dos semanas?

**4. Implementes un proceso de feature flags y lanzamientos graduales:**
Explica cómo usar feature flags para lanzar nuevas funcionalidades de forma gradual y medir su impacto antes de activarlas para el 100% de los usuarios. Define el protocolo de rollout: porcentajes de activación, métricas de guardia que dispararían un rollback automático, tiempo mínimo de observación en cada fase y criterios para completar el lanzamiento.

**5. Estableces el protocolo de post-mortem de lanzamientos:**
Diseña el proceso de retrospectiva post-lanzamiento: qué métricas revisar en las primeras 24 horas, 7 días y 30 días después del lanzamiento, cómo documentar los aprendizajes, cómo actualizar los criterios de calidad basándote en los incidentes detectados, y cómo crear una base de conocimiento de patrones de fallo que ayude a prevenir los mismos errores en el futuro.

**6. Dashboard de calidad de producto:**
Define las métricas de un cuadro de mando de calidad de producto: tasa de bugs por feature lanzada, tasa de regresiones, tiempo de detección de problemas post-lanzamiento, porcentaje de features con criterios de aceptación completos, y satisfacción del equipo con el proceso de QA. ¿Cómo revisar estas métricas en la retrospectiva de sprint?

Proporciona plantillas de criterios de aceptación, checklist de lanzamiento y dashboard de métricas de calidad que pueda adoptar de inmediato.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir un framework de QA de producto que use IA para generar criterios de aceptación robustos, reducir regresiones y garantizar que cada lanzamiento cumple los estándares de calidad definidos.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Auditoría de calidad de procesos de RR.HH. con IA para detectar sesgos y fricciones en el ciclo de vida del empleado',
                'description'       => 'Usa IA para auditar los procesos clave del ciclo de vida del empleado, identificar sesgos sistémicos, fricciones de experiencia y oportunidades de mejora en reclutamiento, evaluación de desempeño y offboarding.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de recursos humanos y experiencia del empleado con especialización en auditoría de procesos de RR.HH. y el uso de inteligencia artificial para detectar sesgos sistémicos, ineficiencias y oportunidades de mejora en el ciclo de vida del empleado. Tu objetivo es ayudarme a realizar una auditoría completa de los procesos más críticos de mi área de personas para garantizar que son justos, eficientes y generan la experiencia de empleado que la empresa quiere ofrecer.

**Contexto de la empresa:**
[Describe la empresa: sector, tamaño, estructura, cultura organizacional declarada y principales desafíos de personas actuales]

**Procesos que quiero auditar:**
[Selecciona los más relevantes: reclutamiento y selección, onboarding, evaluación de desempeño, promociones y desarrollo de carrera, compensación, encuestas de clima, offboarding, etc.]

**Datos disponibles:**
[Indica qué datos tienes: tiempo de contratación por rol, tasa de rotación por departamento, resultados de encuestas de clima, datos demográficos del equipo, scores de desempeño históricos, etc.]

**Problema principal:**
[Ejemplo: alta rotación en los primeros 90 días, sospecha de sesgos en las evaluaciones de desempeño, proceso de selección demasiado largo, experiencia de onboarding inconsistente, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el framework de auditoría de procesos de RR.HH.:**
Define la metodología de auditoría para cada proceso seleccionado: qué dimensiones evaluar (eficiencia, equidad, experiencia del empleado, cumplimiento legal, alineación con la cultura), qué datos recopilar, cómo estructurar las entrevistas con stakeholders y cómo combinar datos cuantitativos y cualitativos para obtener una imagen completa.

**2. Identifiques sesgos sistémicos en los procesos:**
Explica cómo usar IA para analizar los datos de RR.HH. y detectar posibles sesgos: en la selección (sesgos de género, edad, origen en la tasa de avance entre etapas), en las evaluaciones de desempeño (distribución de scores por demografía, correlación entre acceso al manager y score), y en las promociones (tiempo promedio hasta promoción por segmento). Proporciona las queries o análisis específicos para detectar cada tipo de sesgo.

**3. Audites la experiencia del empleado en los momentos clave:**
Define los "momentos de la verdad" del ciclo de vida del empleado donde la experiencia tiene mayor impacto en la retención y el compromiso: primera semana, 90 días, evaluación anual, cambio de manager, proceso de promoción. Para cada momento diseña una mini-encuesta de experiencia de cinco preguntas y las métricas de referencia (benchmarks de industria si están disponibles).

**4. Evalúes la calidad de las descripciones de puesto y criterios de evaluación:**
Proporciona el proceso para analizar con IA las descripciones de puesto actuales y los formularios de evaluación de desempeño para detectar: lenguaje excluyente o sesgado, criterios subjetivos no operacionalizables, ausencia de criterios de progresión claros, y desalineación entre los valores declarados de la empresa y los comportamientos que realmente se evalúan y recompensan.

**5. Diseñes un plan de mejora priorizado:**
A partir de los hallazgos de la auditoría, define cómo priorizar las iniciativas de mejora usando una matriz de impacto (reducción de riesgo legal, mejora de retención, mejora de experiencia del empleado) versus esfuerzo de implementación. Para las tres mejoras más prioritarias proporciona un plan de acción con hitos, responsables y métricas de éxito.

**6. Sistema de monitoreo continuo de la calidad de los procesos:**
Diseña un dashboard de métricas de calidad de RR.HH. para monitoreo continuo: indicadores de eficiencia de cada proceso, indicadores de equidad, Net Promoter Score del empleado (eNPS) por cohorte, y alertas automáticas cuando una métrica cae por debajo del umbral aceptable. ¿Con qué frecuencia revisar el dashboard y quién debe ser el propietario?

Responde con plantillas de auditoría, ejemplos de preguntas de entrevista a stakeholders y formato de informe de hallazgos con recomendaciones priorizadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Realizar una auditoría sistemática de los procesos de RR.HH. usando IA para detectar sesgos, fricciones y oportunidades de mejora en el ciclo de vida del empleado.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Control de calidad de modelos financieros y análisis con IA para reducir errores en decisiones de inversión',
                'description'       => 'Usa IA para auditar modelos financieros, detectar errores de lógica, supuestos inconsistentes y vulnerabilidades antes de presentarlos a dirección o inversores.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero senior y especialista en auditoría de modelos financieros con profundo conocimiento en el uso de inteligencia artificial para detectar errores, inconsistencias y vulnerabilidades en modelos de valoración, proyecciones y análisis de inversión. Tu objetivo es ayudarme a implementar un proceso riguroso de control de calidad de modelos financieros que reduzca el riesgo de tomar decisiones basadas en análisis incorrectos.

**Contexto de mis modelos:**
[Describe el tipo de modelos que construyes: valoración DCF, proyecciones de P&L, modelos LBO, análisis de sensibilidad, dashboards de KPIs, modelos de crédito, etc., y la herramienta principal que usas: Excel, Python, Google Sheets, etc.]

**Audiencia de los modelos:**
[Para quién los preparas: dirección interna, inversores, consejo de administración, clientes, reguladores, etc.]

**Problema actual:**
[Ejemplo: se han detectado errores tras presentar el modelo, los supuestos no siempre están documentados, es difícil detectar errores de referencia circular, el modelo es difícil de auditar para terceros, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el protocolo de auditoría de modelos financieros:**
Define el proceso de revisión que debe seguir cualquier modelo financiero antes de ser presentado. Incluye las dimensiones a revisar: integridad estructural (fórmulas rotas, referencias circulares, rangos dinámicos incorrectos), coherencia de supuestos (todos los supuestos documentados, rango de variación definido, fuente citada), coherencia matemática (los totales cuadran, los ratios tienen sentido, los períodos están alineados), y coherencia económica (los resultados son plausibles dentro del contexto del mercado y del sector).

**2. Crees la checklist de QA financiero:**
Proporciona una checklist de 20 puntos que cualquier analista debe completar antes de enviar un modelo. Organízala por categorías: estructura del archivo, documentación de supuestos, validación de fórmulas, análisis de sensibilidad y stress testing, presentación y comunicación. Indica el tiempo estimado para completar cada verificación.

**3. Implementes análisis de sensibilidad y stress testing sistemático:**
Explica cómo diseñar el análisis de sensibilidad de un modelo financiero: qué variables incluir como sensibilidades, cómo construir escenarios base, optimista y pesimista de forma rigurosa, cómo identificar las variables con mayor impacto en el resultado (tornado chart) y cómo presentar la incertidumbre al tomador de decisiones de forma clara.

**4. Uses IA para revisar la lógica y los supuestos del modelo:**
Proporciona el proceso para usar Claude u otra IA para auditar la lógica de un modelo: cómo describir la estructura del modelo al modelo de IA, qué preguntas hacer para detectar supuestos poco razonables, cómo verificar que los drivers del modelo son consistentes con benchmarks de industria, y cómo documentar automáticamente los supuestos clave en un resumen ejecutivo.

**5. Establezcas un sistema de control de versiones de modelos:**
Diseña un protocolo de gestión de versiones para modelos financieros: nomenclatura de archivos, registro de cambios (changelog), proceso de aprobación antes de enviar una nueva versión, y cómo mantener un historial de modelos anteriores accesible para referencia futura. Incluye cómo usar Git o soluciones más simples según el nivel técnico del equipo.

**6. Crees un proceso de revisión por pares:**
Define un protocolo de peer review de modelos financieros: quién debe revisar qué tipo de modelos, qué debe verificar el revisor, cómo documentar los hallazgos, y cómo gestionar las discrepancias entre el autor y el revisor. ¿Cuándo es necesaria una revisión externa?

Incluye plantillas de checklist, formato de reporte de hallazgos y ejemplos de preguntas de auditoría adaptadas a modelos de valoración y proyecciones financieras.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementar un proceso de QA de modelos financieros que detecte errores de lógica, supuestos inconsistentes y vulnerabilidades antes de presentar el análisis a dirección o inversores.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Auditoría y control de calidad de documentos legales con IA para detectar riesgos y omisiones',
                'description'       => 'Usa IA para auditar contratos y documentos jurídicos en busca de cláusulas ambiguas, omisiones críticas, inconsistencias internas y riesgos legales antes de su firma o presentación.',
                'prompt_content'    => <<<'EOT'
Eres un abogado senior especializado en la revisión y auditoría de documentos jurídicos con amplia experiencia en el uso de inteligencia artificial como herramienta de apoyo para mejorar la calidad y la eficiencia de la revisión legal. Tu objetivo es ayudarme a construir un proceso sistemático de QA de documentos legales que reduzca el riesgo de omisiones, ambigüedades y cláusulas desfavorables en contratos y otros documentos jurídicos críticos.

**Contexto de mi práctica:**
[Describe el tipo de documentos que revisas con más frecuencia: contratos mercantiles, acuerdos de confidencialidad, contratos laborales, términos y condiciones, documentos de financiación, contratos de adquisición, etc.]

**Jurisdicción principal:**
[Indica la jurisdicción y el sistema legal aplicable: derecho español, inglés, estadounidense, etc.]

**Herramientas actuales:**
[Indica si usas alguna plataforma de revisión de contratos: Thomson Reuters, Kira, LegalSifter, o si la revisión es manual en Word]

**Problema principal:**
[Ejemplo: el proceso de revisión es lento, se escapan cláusulas problemáticas en contratos largos, no hay un proceso estándar de revisión en el equipo, hay dificultad para comparar versiones y detectar cambios entre borradores, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el protocolo de auditoría de documentos legales:**
Define el proceso de revisión paso a paso para el tipo de documento más frecuente en mi práctica. Incluye: estructura de la revisión (orden de las secciones a revisar), dimensiones de análisis (completitud, consistencia interna, equilibrio entre partes, cumplimiento normativo, riesgo operacional), y la distinción entre elementos críticos que bloquean la firma y observaciones que se pueden negociar.

**2. Crees una checklist de revisión por tipo de documento:**
Proporciona una checklist específica para el tipo de contrato más relevante en mi práctica. Para cada cláusula o sección clave incluye: qué verificar, qué señales de riesgo buscar, qué cláusulas suelen omitirse y son críticas, y qué redacción alternativa proponer cuando se detecta una cláusula desfavorable.

**3. Implementes el uso de IA para la revisión de contratos:**
Explica cómo usar Claude u otra IA de forma efectiva y responsable para revisar documentos legales: cómo proporcionar el contexto relevante (tipo de contrato, partes, jurisdicción, intereses del cliente), qué preguntas hacer para detectar riesgos específicos, cómo validar los hallazgos del modelo con criterio profesional, y cuáles son los límites que nunca debe cruzar la IA en la revisión legal.

**4. Establezcas un proceso de comparación de versiones y negociación:**
Diseña el flujo de trabajo para gestionar múltiples borradores durante una negociación: cómo comparar versiones de forma eficiente, cómo registrar los cambios aceptados y rechazados con su justificación, cómo mantener una posición negociadora coherente a lo largo de múltiples rondas, y cómo documentar el historial de negociación para referencia futura.

**5. Crees plantillas de cláusulas estándar:**
Proporciona una biblioteca de cláusulas estándar para los contratos más frecuentes en mi práctica: definiciones estándar, limitación de responsabilidad, confidencialidad, resolución de disputas, ley aplicable y jurisdicción, fuerza mayor, y protección de datos. Para cada cláusula incluye una versión equilibrada y una versión favorable a cada parte.

**6. Diseñes el proceso de QA del equipo legal:**
Define un protocolo de revisión por pares dentro del equipo: quién revisa qué tipo de documentos, cómo se documentan los hallazgos, qué nivel de aprobación requiere cada tipo de documento antes de enviarlo al cliente, y cómo crear una base de conocimiento de riesgos frecuentes que mejore la calidad de las revisiones futuras.

Incluye ejemplos de preguntas de auditoría específicas, plantillas de checklist y formato de informe de revisión para entregar al cliente o al equipo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementar un proceso sistemático de QA de documentos legales que detecte cláusulas problemáticas, omisiones y riesgos antes de la firma o presentación a terceros.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Sistema de QA proactivo para soporte al cliente con IA que mejora la consistencia y calidad de las respuestas',
                'description'       => 'Implementa un proceso de control de calidad de las respuestas del equipo de soporte usando IA para detectar inconsistencias, errores de información y oportunidades de mejora en la experiencia del cliente.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en operaciones de customer support y control de calidad con experiencia en el uso de inteligencia artificial para monitorear, evaluar y mejorar la calidad de las respuestas del equipo de soporte. Tu objetivo es ayudarme a construir un sistema de QA proactivo que garantice la consistencia, precisión y empatía de cada interacción con el cliente, independientemente del agente que responda.

**Contexto del equipo de soporte:**
[Describe el equipo: número de agentes, canales de atención (email, chat, teléfono, redes sociales), volumen mensual de tickets, herramienta de helpdesk y principales tipos de consultas]

**Producto o servicio que soportas:**
[Describe brevemente el producto o servicio y los tipos de problemas más frecuentes que atiende el equipo]

**Estado actual del QA:**
[Describe cómo evalúas hoy la calidad: revisión manual de tickets, escucha de llamadas, encuestas CSAT, sin proceso formal, etc.]

**Problema principal:**
[Ejemplo: las respuestas son inconsistentes entre agentes, hay errores de información frecuentes, el tono no siempre es empático, las respuestas son demasiado largas o cortas, el tiempo de resolución varía mucho sin causa clara, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el framework de evaluación de calidad de respuestas:**
Define las dimensiones de calidad que evaluará el sistema: precisión de la información (la respuesta es técnicamente correcta), completitud (responde todas las preguntas del cliente), tono y empatía (reconoce la frustración, es amable y profesional), claridad (fácil de entender para un usuario no técnico), eficiencia (resuelve el problema en el primer contacto sin pasos innecesarios) y cumplimiento de los protocolos de la empresa. Para cada dimensión define una escala de evaluación y ejemplos de respuestas de alta y baja calidad.

**2. Implementes el uso de IA para la evaluación automática de tickets:**
Explica cómo usar Claude u otra IA para evaluar tickets de soporte de forma automática o semi-automática: qué contexto proporcionar al modelo (protocolo de respuesta, información del producto, historial del cliente), cómo estructurar la evaluación, cómo gestionar los falsos positivos (tickets marcados como problemáticos que en realidad son correctos), y cómo integrar la evaluación automática en el flujo de trabajo del QA sin sobrecargar al equipo.

**3. Crees el proceso de calibración del equipo:**
Diseña sesiones de calibración regulares entre agentes para garantizar que la evaluación de calidad es consistente: cómo seleccionar los tickets para la calibración, cómo estructurar la sesión (evaluación individual seguida de discusión en grupo), cómo resolver discrepancias y cómo documentar los consensos como estándar del equipo. Proporciona el guión de una sesión de calibración de 60 minutos.

**4. Diseñes un sistema de coaching basado en QA:**
Explica cómo usar los datos de QA para coaching individualizado: cómo identificar los patrones de error de cada agente, cómo estructurar una sesión de feedback que sea motivadora y accionable (no solo crítica), cómo definir objetivos de mejora específicos y medibles, y cómo hacer seguimiento del progreso. Incluye un ejemplo de informe de QA individual mensual.

**5. Crees la base de conocimiento de respuestas de referencia:**
Diseña el proceso para construir y mantener una biblioteca de respuestas de alta calidad: cómo identificar y documentar las mejores respuestas a cada tipo de consulta frecuente, cómo hacer que la base de conocimiento sea fácilmente accesible durante la atención, cómo mantenerla actualizada cuando cambia el producto, y cómo medir el impacto de su uso en la calidad y la velocidad de respuesta.

**6. Dashboard de métricas de calidad:**
Define el panel de control de QA del equipo de soporte: tasa de primera resolución de contacto (FCR), CSAT y NPS por agente y por tipo de consulta, tasa de escalaciones, tiempo de resolución promedio, puntuación de calidad promedio por dimensión y evolución semanal. ¿Cómo usar este dashboard en la reunión semanal del equipo para impulsar la mejora continua?

Incluye plantillas de rúbricas de evaluación, guión de sesión de calibración y formato de informe de QA individual.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir un sistema de QA proactivo para equipos de soporte que use IA para evaluar la calidad de las respuestas, identificar patrones de error y mejorar la consistencia y empatía en cada interacción con el cliente.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Control de calidad de entregables freelance con IA para reducir revisiones y aumentar la satisfacción del cliente',
                'description'       => 'Implementa un proceso de QA propio antes de entregar tu trabajo como freelance, usando IA para detectar errores, inconsistencias y oportunidades de mejora que reduzcan las rondas de revisión con el cliente.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de productividad y calidad para profesionales independientes con experiencia en ayudar a freelancers a construir sistemas de control de calidad propios que les permitan entregar trabajo de mayor calidad, reducir las rondas de revisión con clientes y construir una reputación de excelencia que justifique tarifas premium. Tu objetivo es ayudarme a crear un proceso de QA personalizado para mi tipo de trabajo que sea ágil, sistemático y que use IA como asistente de revisión.

**Mi especialidad freelance:**
[Describe tu trabajo: tipo de servicio que ofreces, entregables típicos (documentos, código, diseños, estrategias, contenido, etc.), tipo de clientes y tamaño típico de proyectos]

**Proceso de entrega actual:**
[Describe cómo es tu proceso hoy: cómo revisas tu trabajo antes de enviarlo, con qué frecuencia el cliente pide revisiones y cuáles son las causas más frecuentes]

**Problema principal de calidad:**
[Ejemplo: los clientes siempre encuentran errores que yo no vi, hay inconsistencias entre secciones de un mismo entregable, el cliente dice que no era lo que esperaba aunque yo cumplo el brief, hay errores tipográficos o de formato que dañan mi imagen profesional, etc.]

---

Con este contexto, necesito que:

**1. Diseñes mi proceso de QA personalizado:**
Define un proceso de control de calidad adaptado a mi tipo de entregable. Incluye: cuánto tiempo reservar para la revisión antes de la entrega (regla del porcentaje del tiempo de producción), en qué orden revisar los elementos del entregable, cuántas pasadas de revisión hacer y con qué enfoque en cada una (estructural, contenido, formato, experiencia del receptor), y cómo separar mentalmente la fase de producción de la fase de revisión para detectar más errores.

**2. Crees la checklist de calidad específica para mis entregables:**
Proporciona una checklist de revisión detallada y específica para mi tipo de trabajo. Organízala en categorías relevantes para mi especialidad: por ejemplo, si escribo estrategias: claridad del objetivo, solidez de la argumentación, coherencia de las recomendaciones, consistencia de cifras y referencias, formato y presentación; si desarrollo código: funcionalidad, manejo de errores, legibilidad, documentación, seguridad. Cada ítem debe ser verificable de forma objetiva.

**3. Implementes IA como revisor antes de la entrega:**
Diseña el proceso para usar Claude u otra IA como revisor previo a la entrega: qué contexto proporcionar (brief del cliente, criterios de éxito acordados, versión anterior si aplica), qué preguntas hacer para que el modelo detecte debilidades desde la perspectiva del cliente, cómo evaluar los hallazgos del modelo con criterio propio, y cuándo ignorar las sugerencias de la IA porque no aplican a mi contexto específico.

**4. Gestionas las expectativas del cliente desde el inicio:**
Explica cómo establecer criterios de calidad claros con el cliente antes de empezar el proyecto para reducir la subjetividad en las revisiones: cómo documentar los criterios de aceptación en el brief o contrato, cómo hacer un checkpoint de alineación a mitad del proyecto antes de completar el entregable, y cómo presentar el entregable final de forma que el cliente reconozca inmediatamente que cumple lo acordado.

**5. Aprendes de las revisiones del cliente:**
Diseña un sistema para convertir cada ronda de revisión del cliente en aprendizaje que mejore tus checklists futuras: cómo categorizar el tipo de feedback recibido, cómo identificar si el problema fue de comunicación inicial, de proceso de producción o de QA, y cómo actualizar tu checklist de calidad después de cada proyecto para que ese tipo de error no vuelva a escaparse.

**6. Construyes tu reputación de calidad:**
Describe cómo usar tu proceso de QA como argumento de venta y elemento de diferenciación: cómo comunicar tu proceso de calidad a los clientes antes de contratarte, cómo solicitar testimonios que reflejen específicamente la calidad de tus entregables, y cómo usar la tasa de revisiones como métrica de tu mejora como profesional independiente.

Sé específico y práctico. Incluye ejemplos de checklists, plantillas de presentación de entregables y prompts de revisión con IA adaptados a mi tipo de trabajo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir un proceso propio de QA con IA que reduzca los errores antes de la entrega, minimice las rondas de revisión con el cliente y refuerce la reputación de calidad del freelance.',
                'vote_score'        => 43,
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
