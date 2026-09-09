<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills211Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Automatización del funnel de marketing',
                'description'       => 'Automatiza el journey del lead desde la captación hasta el cierre: los workflows de email, la nutrición automatizada y la puntuación de leads que asegura que el equipo de ventas solo recibe oportunidades cualificadas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing automation y generación de demanda. Necesito que me ayudes a diseñar e implementar la automatización completa del funnel de marketing de mi empresa, desde la captación del lead hasta el traspaso al equipo de ventas.

Mi contexto:
- Tipo de negocio y producto o servicio: [describe brevemente qué vendes y a quién]
- Herramientas de marketing automation disponibles: [HubSpot, ActiveCampaign, Marketo, Mailchimp, Klaviyo u otras]
- CRM que usa el equipo de ventas: [Salesforce, HubSpot CRM, Pipedrive, etc.]
- Canales de captación actuales: [SEM, SEO, redes sociales, eventos, outbound, etc.]
- Volumen mensual de leads aproximado: [número o rango]
- Problema principal que quiero resolver: [leads sin nurturar, ventas se queja de la calidad, sin visibilidad del recorrido, etc.]

Con esa información, dame:

1. ARQUITECTURA DEL FUNNEL AUTOMATIZADO
Diseña la arquitectura completa del funnel de marketing automatizado para mi caso: las etapas desde el primer contacto hasta el SQL (Sales Qualified Lead), los triggers que mueven al lead de una etapa a la siguiente y los criterios de salida de cada etapa. Incluye un diagrama textual del flujo con los puntos de decisión principales.

2. LEAD SCORING: EL MODELO DE PUNTUACIÓN
Diseña un modelo de lead scoring para mi caso que combine scoring demográfico (fit del perfil: empresa, cargo, sector, tamaño) y scoring conductual (acciones del lead: apertura de emails, visitas a páginas clave, descarga de contenidos, asistencia a webinars). Dame la tabla de criterios y puntuaciones recomendadas, el umbral de puntuación para considerar un lead como MQL y el umbral para traspasarlo a ventas como SQL.

3. SECUENCIAS DE NURTURING POR ETAPA
Para cada etapa del funnel, diseña la secuencia de nurturing correspondiente: el número de emails, la cadencia, el tipo de contenido de cada email (educativo, caso de éxito, comparativa, demo, oferta), el tono y el objetivo de conversión de la secuencia. Dame el asunto y la estructura del cuerpo para los dos primeros emails de cada etapa.

4. WORKFLOWS DE AUTOMATIZACIÓN PRIORITARIOS
Lista los cinco workflows de automatización que debo implementar primero por su impacto en el funnel, incluyendo: el workflow de bienvenida al nuevo lead, el workflow de re-engagement para leads fríos, el workflow de cualificación progresiva, el workflow de alerta al comercial cuando un lead alcanza el umbral de SQL y el workflow de feedback de ventas cuando rechazan un lead. Para cada uno dame el trigger, las acciones, las condiciones y el objetivo.

5. INTEGRACIÓN MARKETING-VENTAS
¿Cómo diseño el proceso de traspaso de leads de marketing a ventas para que funcione sin fricción? Dame el protocolo de handoff: qué información debe viajar con el lead al CRM de ventas, cuánto tiempo tiene el comercial para dar el primer toque, qué pasa si no actúa en ese plazo y cómo feedback de ventas vuelve a marketing para calibrar el modelo de scoring.

6. MÉTRICAS DEL FUNNEL AUTOMATIZADO
¿Qué métricas debo monitorizar para saber si el funnel automatizado está funcionando? Dame el dashboard mínimo viable con las métricas por etapa: tasas de conversión entre etapas, velocidad del funnel, coste por MQL y por SQL, tasa de aceptación de MQLs por ventas y ratio de SQLs que se convierten en oportunidad. Incluye los benchmarks típicos por sector si los conoces.

7. ERRORES MÁS COMUNES EN MARKETING AUTOMATION
Lista los siete errores que destruyen los resultados de un proyecto de marketing automation: la automatización del contenido malo, el nurturing genérico sin segmentación, el lead scoring sin revisión periódica, el traspaso a ventas sin contexto, la falta de feedback loop con el equipo comercial, el abuso de la frecuencia de envío y la ausencia de un proceso de limpieza de la base de datos. Para cada error dame la solución concreta.

Responde con ejemplos concretos adaptados a mi tipo de negocio. Cuando menciones herramientas específicas, indica si son nativas de la plataforma que uso o si requieren integraciones adicionales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar la automatización completa del funnel de marketing para nutrir leads y traspasar oportunidades cualificadas a ventas.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'CI/CD y automatización del ciclo de desarrollo',
                'description'       => 'Implementa pipelines de integración y despliegue continuo: las herramientas, los tests automatizados y el proceso que permite desplegar a producción múltiples veces al día con confianza.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en DevOps e ingeniería de plataforma con amplia experiencia diseñando pipelines de CI/CD para equipos de desarrollo de distintos tamaños. Necesito que me ayudes a diseñar o mejorar el pipeline de integración y despliegue continuo de mi proyecto.

Mi contexto:
- Tipo de aplicación: [web monolítica, microservicios, API, aplicación móvil, librería, etc.]
- Stack tecnológico principal: [lenguaje, frameworks, base de datos]
- Plataforma de CI/CD actual o disponible: [GitHub Actions, GitLab CI, Jenkins, CircleCI, Bitbucket Pipelines, Azure DevOps, etc.]
- Infraestructura de despliegue: [AWS, GCP, Azure, VPS, Kubernetes, serverless, etc.]
- Tamaño del equipo de desarrollo: [número de desarrolladores]
- Frecuencia de despliegue actual: [una vez a la semana, manual, etc.]
- Mayor dolor actual en el proceso de release: [despliegues manuales lentos, falta de tests, rollbacks traumáticos, entornos inconsistentes, etc.]

Con ese contexto, dame:

1. ARQUITECTURA DEL PIPELINE CI/CD
Diseña la arquitectura completa del pipeline para mi caso: las fases desde el commit hasta producción (lint, build, test unitario, test de integración, análisis estático, build de imagen, despliegue a staging, smoke tests, despliegue a producción), los gates de calidad que deben pasar antes de avanzar a la siguiente fase y el tiempo objetivo de cada fase para que el pipeline completo no supere los quince minutos.

2. ESTRATEGIA DE TESTING AUTOMATIZADO
¿Qué tests debo incluir en el pipeline y en qué orden? Dame la pirámide de tests recomendada para mi tipo de aplicación: el número y tipo de tests unitarios, de integración, end-to-end y de performance que necesito, las herramientas recomendadas para mi stack y la cobertura mínima que debe exigir el pipeline antes de permitir el merge a la rama principal.

3. GESTIÓN DE RAMAS Y ESTRATEGIA DE MERGE
¿Qué estrategia de branching me recomiendas para trabajar bien con CI/CD? Explícame las diferencias entre GitFlow, trunk-based development y GitHub Flow, y cuál encaja mejor con mi equipo y frecuencia de despliegue objetivo. Incluye las reglas de protección de ramas que debo configurar en mi repositorio y el proceso de code review antes del merge.

4. ENTORNOS Y GESTIÓN DE SECRETOS
¿Cómo gestiono los distintos entornos (development, staging, producción) en el pipeline? Dame las mejores prácticas para: la paridad entre entornos, la gestión segura de secretos y variables de entorno en el pipeline (sin hardcodear credenciales), el uso de feature flags para desplegar código sin activarlo y la sincronización de bases de datos entre entornos para los tests.

5. ESTRATEGIAS DE DESPLIEGUE SIN DOWNTIME
Explícame las estrategias de despliegue que permiten actualizar la aplicación en producción sin interrumpir el servicio: blue-green deployment, canary releases, rolling updates y feature flags. Para mi caso concreto, ¿cuál recomiendas y por qué? Dame el proceso paso a paso para implementarla con mi infraestructura.

6. ROLLBACK Y RECUPERACIÓN ANTE FALLOS
¿Cómo diseño el proceso de rollback para que recuperarme de un despliegue fallido en producción sea rápido y seguro? Dame el protocolo: cómo detectar un despliegue problemático (métricas de alerta, smoke tests post-despliegue), el proceso de rollback automático vs manual, cómo gestionar las migraciones de base de datos que no son reversibles y el runbook que debe seguir el equipo cuando algo va mal en producción.

7. MÉTRICAS DORA Y MADUREZ DEL PIPELINE
¿Cómo mido si mi pipeline de CI/CD está funcionando bien? Explícame las cuatro métricas DORA (Deployment Frequency, Lead Time for Changes, Change Failure Rate y Time to Restore Service) y cómo medirlas en mi contexto. Dame los valores de referencia de los equipos de alto rendimiento y el plan de mejora incremental para pasar de donde estoy ahora a deployar a producción con confianza múltiples veces al día.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar un pipeline de CI/CD completo que permita desplegar a producción con frecuencia y confianza.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Automatización en el flujo de diseño con IA',
                'description'       => 'Automatiza las tareas repetitivas del proceso de diseño: la generación de variantes, los exports automáticos y las integraciones con el equipo de desarrollo que liberan tiempo para el trabajo creativo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en flujos de trabajo de diseño y en la adopción de herramientas de inteligencia artificial para equipos creativos. Necesito que me ayudes a identificar y automatizar las partes repetitivas de mi proceso de diseño para recuperar tiempo para el trabajo de mayor valor.

Mi contexto:
- Tipo de trabajo de diseño que hago: [UX/UI, identidad visual, diseño web, motion, ilustración, diseño de producto, etc.]
- Herramientas principales que uso: [Figma, Adobe CC, Sketch, Canva, etc.]
- Tamaño del equipo: [solo / pequeño equipo / equipo en empresa]
- Tareas que siento más repetitivas o que más tiempo me roban: [describe las dos o tres que más te frustran]
- Nivel de comodidad con herramientas técnicas o de automatización: [básico / intermedio / avanzado]
- Principal cuello de botella en el flujo entre diseño y desarrollo: [handoff, assets, especificaciones, revisiones, etc.]

Con esa información, dame:

1. AUDITORÍA DEL FLUJO DE TRABAJO ACTUAL
Ayúdame a hacer una auditoría de mi flujo de trabajo de diseño para identificar las tareas que tienen mayor potencial de automatización. Dame un framework de clasificación de tareas en cuatro categorías: las que debo automatizar completamente, las que puedo acelerar con IA, las que debo delegar y las que debo proteger como trabajo puramente creativo. Aplícalo a las tareas que te he descrito.

2. AUTOMATIZACIÓN CON HERRAMIENTAS NATIVAS DE FIGMA
¿Qué funciones y plugins de Figma me permiten automatizar tareas repetitivas? Dame una guía de los plugins más útiles para: la generación de contenido de placeholder realista, la creación de variantes en masa, los exports automáticos con nomenclatura consistente, la generación de especificaciones para desarrollo y la sincronización de estilos entre proyectos. Para cada plugin indica el caso de uso concreto y si es gratuito o de pago.

3. IA GENERATIVA EN EL FLUJO DE DISEÑO
¿En qué momentos del proceso de diseño puedo usar herramientas de IA generativa para acelerar el trabajo sin comprometer la calidad? Dame casos de uso concretos para: la exploración de conceptos y moodboards, la generación de variantes de UI, la creación de assets de imagen, la redacción de copy de interfaz y la creación de prototipos de baja fidelidad. Para cada caso indica la herramienta recomendada y el nivel de intervención humana que sigue siendo necesario.

4. AUTOMATIZACIÓN DEL HANDOFF CON DESARROLLO
¿Cómo automatizo y estandarizo el proceso de entrega de diseños al equipo de desarrollo? Dame el sistema completo de handoff: la estructura de nomenclatura de capas y componentes, la documentación automática de tokens de diseño, la exportación de assets en los formatos correctos, la integración con herramientas como Storybook o el design system del equipo de desarrollo y cómo reducir las preguntas de aclaración post-entrega.

5. SISTEMA DE COMPONENTES Y BIBLIOTECA REUTILIZABLE
¿Cómo construyo y mantengo una biblioteca de componentes que me evite rediseñar los mismos elementos una y otra vez? Dame el proceso para: auditar los componentes existentes y eliminar duplicados, estructurar la biblioteca con la jerarquía correcta, documentar los estados y variantes de cada componente, compartirla con el equipo y mantenerla actualizada cuando el producto evoluciona.

6. AUTOMATIZACIÓN DE TAREAS ADMINISTRATIVAS DEL DISEÑADOR
Más allá del diseño en sí, ¿qué tareas administrativas del trabajo de diseñador puedo automatizar? Dame ideas concretas para automatizar: la generación de informes de progreso, la presentación de conceptos en formato de case study, la facturación y el seguimiento de proyectos (si trabajo como freelance), el archivo y organización de proyectos terminados y la actualización del portfolio.

7. PLAN DE IMPLEMENTACIÓN DE 30 DÍAS
Dame un plan de implementación de treinta días para adoptar las automatizaciones más impactantes sin interrumpir los proyectos en curso: qué implementar la primera semana, qué probar en la segunda, qué escalar en la tercera y qué evaluar y ajustar en la cuarta. Incluye una estimación del tiempo que debería recuperar al mes una vez que el sistema esté en marcha.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Identificar y automatizar las tareas repetitivas del proceso de diseño para liberar tiempo de trabajo creativo.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales automation: el proceso comercial que funciona solo',
                'description'       => 'Automatiza las tareas repetitivas del proceso de ventas: los follow-ups automáticos, la actualización del CRM y las secuencias de outreach que trabajan mientras el comercial está en otra reunión.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en sales operations y automatización de procesos comerciales. Necesito que me ayudes a diseñar el sistema de sales automation que libere al equipo de ventas de las tareas administrativas y repetitivas para que pueda dedicar más tiempo a las conversaciones de alto valor.

Mi contexto:
- Tipo de venta: [B2B / B2C / ciclo corto / ciclo largo / transaccional / consultiva]
- CRM que usa el equipo: [Salesforce, HubSpot, Pipedrive, etc.]
- Tamaño del equipo comercial: [número de comerciales]
- Canal principal de ventas: [outbound, inbound, canal, etc.]
- Tareas que más tiempo roban al equipo ahora mismo: [describe las dos o tres principales]
- Herramientas de sales engagement disponibles o que se podrían adoptar: [Salesloft, Outreach, Apollo, Lemlist, etc.]

Con esa información, dame:

1. AUDITORÍA DE LAS TAREAS AUTOMATIZABLES EN VENTAS
Clasifica las tareas típicas del proceso comercial en tres categorías: las que debo automatizar completamente (no aportan valor diferencial si las hace un humano), las que debo asistir con automatización pero requieren revisión humana y las que nunca debo automatizar porque la intervención personal es parte del valor. Dame ejemplos concretos para mi tipo de venta en cada categoría.

2. SECUENCIAS DE OUTREACH AUTOMATIZADO
Diseña una secuencia de outreach multicanal automatizada para el prospecting inicial de mi tipo de venta: el número de toques, los canales (email, LinkedIn, llamada, videomensaje), la cadencia de días entre toques, el contenido de cada toque y los criterios para salir de la secuencia (respuesta positiva, respuesta negativa, sin respuesta tras el último toque). Dame el asunto y el cuerpo de los tres primeros emails.

3. AUTOMATIZACIÓN DEL CRM: DATOS QUE SE ACTUALIZAN SOLOS
¿Qué datos del CRM puedo hacer que se actualicen automáticamente sin que el comercial tenga que introducirlos manualmente? Dame el mapa de automatizaciones del CRM: la creación automática de actividades tras cada llamada o email, la actualización del stage de la oportunidad basada en triggers de comportamiento, la asignación automática de leads por criterios de negocio y la generación de alertas cuando una oportunidad lleva demasiado tiempo sin actividad.

4. FOLLOW-UP AUTOMATIZADO POST-REUNIÓN
Diseña el flujo automatizado de seguimiento después de cada reunión comercial: el email de resumen automático con los próximos pasos, el recordatorio al comercial si no ha enviado la propuesta en el plazo acordado, el seguimiento automático al cliente si no ha respondido a la propuesta y la alerta al manager si la oportunidad supera el tiempo medio del ciclo de venta sin avanzar.

5. AUTOMATIZACIÓN DEL PROCESO DE PROPUESTA
¿Cómo automatizo la generación de propuestas comerciales para reducir el tiempo de elaboración sin perder personalización? Dame el proceso para: crear una plantilla de propuesta con campos dinámicos que se rellenan desde el CRM, los elementos que siempre deben personalizarse manualmente y los que pueden generarse automáticamente, y las herramientas de proposal automation (PandaDoc, Proposify, etc.) que encajan con mi stack.

6. REPORTING Y FORECAST AUTOMATIZADO
¿Cómo automatizo los informes de ventas para que el manager tenga visibilidad en tiempo real sin que el equipo pierda tiempo reportando? Dame el diseño del dashboard automático de ventas: las métricas por comercial y por equipo, el forecast automatizado basado en el pipeline actual y las tasas de conversión históricas, y las alertas automáticas que avisan cuando algún KPI se desvía del objetivo.

7. ERRORES DE IMPLEMENTACIÓN DE SALES AUTOMATION
Lista los seis errores más comunes cuando los equipos de ventas implementan automatización: la automatización del outreach sin personalización que destruye la tasa de respuesta, el CRM que nadie usa porque es difícil de mantener, las secuencias que no tienen lógica de salida cuando el lead responde, la automatización que sustituye la conversación en lugar de habilitarla, la falta de alineación con marketing y la ausencia de revisión periódica de las secuencias. Para cada error dame la solución.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema de sales automation que libera al equipo comercial de tareas repetitivas para enfocarse en las conversaciones de alto valor.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Automatización de operaciones de producto',
                'description'       => 'Automatiza los procesos operativos del equipo de producto: los dashboards de métricas automáticos, las alertas de anomalías y los informes que se generan solos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product operations y automatización de procesos para equipos de producto digital. Necesito que me ayudes a identificar y automatizar los procesos operativos de mi equipo para reducir el tiempo dedicado a tareas de bajo valor y mejorar la velocidad de toma de decisiones.

Mi contexto:
- Tipo de producto digital: [SaaS B2B, app de consumo, marketplace, plataforma, etc.]
- Tamaño del equipo de producto: [número de PMs, diseñadores e ingenieros]
- Herramientas de análisis disponibles: [Mixpanel, Amplitude, Google Analytics, Segment, Metabase, etc.]
- Procesos que actualmente se hacen de forma manual y consumen más tiempo: [describe los dos o tres principales]
- Madurez actual en datos: [sin tracking / tracking básico / buena cobertura de eventos / data warehouse con modelos]
- Principal problema que quiero resolver con la automatización: [visibilidad tardía de problemas, tiempo en reporting, falta de alertas, etc.]

Con ese contexto, dame:

1. MAPA DE PROCESOS AUTOMATIZABLES EN PRODUCT OPS
Dame un inventario de los procesos típicos de un equipo de producto que tienen alto potencial de automatización, clasificados por impacto y esfuerzo de implementación: el reporting de métricas, las alertas de anomalías, el seguimiento del roadmap, la recopilación de feedback de usuarios, la documentación de lanzamientos y el análisis de experimentos. Para cada uno indica el nivel de madurez técnica necesaria y las herramientas más adecuadas.

2. DASHBOARD DE MÉTRICAS DE PRODUCTO AUTOMÁTICO
¿Cómo diseño un sistema de métricas de producto que se actualice solo y esté disponible para todo el equipo sin intervención manual? Dame la arquitectura del sistema: las fuentes de datos, la capa de transformación, la herramienta de visualización y el protocolo de actualización. Incluye las métricas que deben estar en el dashboard de la capa ejecutiva frente a las del equipo de ingeniería y las del equipo de diseño.

3. ALERTAS DE ANOMALÍAS Y DEGRADACIÓN DEL PRODUCTO
¿Cómo configuro un sistema de alertas automáticas que avise cuando algo va mal antes de que los usuarios lo reporten? Dame el diseño del sistema de alertas: los indicadores que debo monitorizar (tasa de error, latencia, tasa de conversión de métricas clave, actividad de usuarios), los umbrales de alerta estático vs dinámico, el canal de notificación (Slack, PagerDuty, email) según la severidad y el protocolo de respuesta ante cada tipo de alerta.

4. AUTOMATIZACIÓN DEL ANÁLISIS DE EXPERIMENTOS
¿Cómo automatizo el proceso de análisis de los tests A/B para que el equipo tenga resultados sin necesidad de análisis estadístico manual? Dame el flujo de trabajo automatizado: la configuración del experimento, el cálculo automático del tamaño de muestra, el monitoreo de significancia estadística, la generación automática del informe de resultados y el proceso de documentación de la decisión tomada y el aprendizaje generado.

5. RECOPILACIÓN Y SÍNTESIS DE FEEDBACK DE USUARIOS
¿Cómo automatizo la recopilación de feedback de usuarios desde múltiples fuentes y su síntesis para que sea accionable? Dame el sistema de agregación de feedback: las fuentes a integrar (encuestas, reseñas de app stores, tickets de soporte, redes sociales, sesiones de usuario), las herramientas de centralización, el proceso de categorización automática por tema y sentimiento y cómo hacer que el resumen semanal de feedback llegue al equipo sin intervención manual.

6. AUTOMATIZACIÓN DE LA DOCUMENTACIÓN DE LANZAMIENTOS
¿Cómo automatizo la documentación del ciclo de lanzamiento de features para que el equipo no pierda tiempo actualizando wikis y changelogs? Dame el flujo automatizado de documentación: la sincronización entre el gestor de proyectos (Jira, Linear, etc.) y la wiki del equipo, la generación automática del changelog para el equipo de ventas y soporte, el email de lanzamiento interno y la actualización de la página de novedades del producto.

7. MÉTRICAS DE MADUREZ DE PRODUCT OPS
¿Cómo sé si mi equipo está progresando en la automatización de operaciones de producto? Dame el modelo de madurez de product ops en cuatro niveles: el equipo que opera de forma reactiva y manual, el que tiene procesos básicos documentados, el que ha automatizado los procesos principales y el que tiene un sistema de operaciones proactivo y predictivo. Para cada nivel dame los indicadores que permiten diagnosticar en qué nivel está el equipo y qué se necesita para pasar al siguiente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Automatizar los procesos operativos del equipo de producto para mejorar la visibilidad de métricas y la velocidad de decisión.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR automation: automatizar los procesos de personas',
                'description'       => 'Automatiza los procesos administrativos de RRHH: el onboarding digital, las solicitudes de vacaciones y los flujos de aprobación que hoy se hacen por email.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en HR operations y digitalización de procesos de recursos humanos. Necesito que me ayudes a identificar y automatizar los procesos administrativos del departamento de personas para que el equipo de RRHH pueda dedicar más tiempo al trabajo estratégico y menos al trabajo de bajo valor.

Mi contexto:
- Tamaño de la empresa: [número de empleados]
- Herramientas de RRHH disponibles: [Personio, BambooHR, Factorial, Workday, o herramientas básicas como Excel y email]
- Procesos de RRHH que más tiempo consumen actualmente: [describe los dos o tres principales]
- Mayor frustración de los empleados con los procesos de RRHH: [lentitud en aprobaciones, falta de información, procesos en papel, etc.]
- Nivel de digitalización actual: [sin sistema HR / sistema básico / sistema integrado]

Con ese contexto, dame:

1. AUDITORÍA DE PROCESOS DE RRHH AUTOMATIZABLES
Dame un inventario de los procesos típicos de RRHH clasificados por su potencial de automatización: los que se pueden automatizar completamente (no requieren juicio humano), los que se pueden digitalizar pero requieren aprobación humana y los que deben permanecer con alta intervención personal porque son conversaciones estratégicas. Incluye en cada categoría los procesos más habituales de un departamento de personas.

2. AUTOMATIZACIÓN DEL ONBOARDING
¿Cómo diseño un proceso de onboarding digital que garantice una experiencia consistente para cada nueva incorporación sin depender de que alguien del equipo de RRHH coordine cada paso manualmente? Dame el flujo completo de onboarding automatizado: los triggers de inicio, las tareas que se asignan automáticamente a RRHH, al manager y al nuevo empleado, los documentos que se envían y se firman digitalmente, las notificaciones de seguimiento y el checklist de verificación al finalizar el primer mes.

3. GESTIÓN DE VACACIONES Y AUSENCIAS
¿Cómo automatizo el proceso de solicitud, aprobación y registro de vacaciones, bajas y otros tipos de ausencia? Dame el flujo de trabajo completo: la solicitud del empleado, las reglas de aprobación automática vs manual según el tipo de ausencia y el cargo, la notificación al manager, la actualización automática del calendario del equipo y la integración con la nómina para el cómputo correcto de días.

4. FLUJOS DE APROBACIÓN INTERNOS
¿Qué flujos de aprobación interna de RRHH puedo automatizar? Dame el diseño de los flujos más habituales: la aprobación de contrataciones, los cambios salariales, las promociones, las solicitudes de formación, los gastos y las bajas voluntarias. Para cada flujo indica los aprobadores, el plazo máximo de respuesta, qué ocurre si no se responde en plazo y cómo se documenta la decisión.

5. COMUNICACIÓN INTERNA AUTOMATIZADA
¿Qué comunicaciones de RRHH puedo automatizar sin que pierdan el tono humano? Dame el catálogo de comunicaciones automáticas recomendadas: el email de bienvenida al nuevo empleado, los recordatorios de evaluación de desempeño, el cumpleaños y aniversario de empresa, las comunicaciones de cambios en la política de RRHH, los recordatorios de formaciones obligatorias y el seguimiento del período de prueba. Para cada una indica el canal, el momento de envío y cómo personalizar el mensaje automáticamente.

6. REPORTING DE PERSONAS AUTOMATIZADO
¿Cómo genero los informes de RRHH que la dirección necesita sin que el equipo de personas dedique tiempo a preparar datos? Dame el diseño del dashboard de people analytics automatizado: las métricas clave (headcount, rotación, tiempo de cobertura de vacantes, absentismo, coste de personal, NPS del empleado), la frecuencia de actualización y cómo hacer que los informes mensuales para el comité de dirección se generen solos.

7. ERRORES EN LA DIGITALIZACIÓN DE RRHH
Lista los seis errores más frecuentes cuando las empresas intentan automatizar sus procesos de RRHH: la automatización sin rediseño del proceso (que automatiza un proceso malo), la resistencia de los managers a usar herramientas nuevas, la falta de integración entre sistemas que obliga a introducir datos dos veces, la pérdida del toque humano en momentos críticos de la experiencia del empleado, la ausencia de formación al equipo y la falta de métricas para medir el impacto de la digitalización.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Automatizar los procesos administrativos de RRHH para liberar tiempo del equipo de personas para el trabajo estratégico.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Automatización contable y de procesos financieros',
                'description'       => 'Automatiza los procesos financieros repetitivos: la conciliación bancaria, la generación de informes recurrentes y las alertas de tesorería que antes requerían horas de trabajo manual cada semana.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas y automatización de procesos contables y financieros. Necesito que me ayudes a identificar y automatizar los procesos financieros más repetitivos de mi empresa para reducir el tiempo dedicado a tareas de bajo valor y minimizar los errores manuales.

Mi contexto:
- Tipo y tamaño de empresa: [startup, pyme, empresa mediana; número de empleados aproximado]
- Software de contabilidad y ERP disponible: [QuickBooks, Sage, SAP, Holded, A3, Excel, etc.]
- Volumen de transacciones mensual aproximado: [facturas emitidas, facturas recibidas, movimientos bancarios]
- Procesos financieros que más tiempo consumen actualmente: [describe los dos o tres principales]
- Nivel de digitalización actual: [todo en papel, digitalización básica, sistema integrado, etc.]
- Mayor fuente de errores en los procesos financieros actuales: [conciliaciones, datos introducidos a mano, facturas perdidas, etc.]

Con ese contexto, dame:

1. MAPA DE PROCESOS FINANCIEROS AUTOMATIZABLES
Dame un inventario de los procesos financieros típicos de una empresa de mi tamaño clasificados por su potencial de automatización y el impacto en tiempo y errores. Incluye al menos: la gestión del ciclo de facturación, la conciliación bancaria, la gestión de gastos, el cierre mensual, el reporting de gestión, la previsión de tesorería y el seguimiento de cobros. Para cada proceso indica el ahorro de tiempo estimado y las herramientas más adecuadas.

2. AUTOMATIZACIÓN DE LA CONCILIACIÓN BANCARIA
¿Cómo automatizo la conciliación bancaria para que deje de ser un proceso manual que consume horas cada semana? Dame el proceso completo: la importación automática de movimientos bancarios, el matching automático con las facturas y los asientos contables, el tratamiento de las partidas no conciliadas y la validación final que sí requiere revisión humana. Indica qué herramientas o integraciones necesito según mi software de contabilidad.

3. CICLO DE FACTURACIÓN AUTOMATIZADO
¿Cómo automatizo el ciclo completo de facturación desde la emisión hasta el cobro? Dame el flujo automatizado: la generación de facturas recurrentes según contratos o suscripciones, el envío automático al cliente, los recordatorios de pago escalonados según días de vencimiento, la alerta al equipo financiero cuando una factura supera el plazo de cobro y el cierre automático en el sistema cuando se recibe el pago.

4. GESTIÓN DE GASTOS Y NOTAS DE GASTO
¿Cómo elimino la gestión manual de notas de gasto y facturas de proveedores? Dame el proceso automatizado: la captura de tickets mediante fotografía con OCR, el flujo de aprobación según el importe y el tipo de gasto, la integración con el software de contabilidad para el registro automático y las reglas de categorización automática de gastos. Indica las herramientas de expense management más adecuadas para mi caso.

5. REPORTING FINANCIERO AUTOMÁTICO
¿Cómo hago que los informes financieros que necesita la dirección se generen solos sin que el equipo de finanzas dedique días cada mes a preparar datos? Dame el diseño del sistema de reporting automático: las fuentes de datos, las transformaciones necesarias, la herramienta de visualización, las métricas que deben estar en el dashboard del CEO y en el del CFO y la frecuencia de actualización. Incluye cómo automatizar el informe mensual de cierre con los estados financieros básicos.

6. ALERTAS DE TESORERÍA Y PREVISIÓN DE CASH FLOW
¿Cómo configuro un sistema de alertas de tesorería que avise antes de que haya un problema de liquidez? Dame el diseño del sistema: el modelo de previsión de cash flow basado en los cobros y pagos esperados, los umbrales de alerta según el colchón de liquidez mínimo, las alertas automáticas cuando la previsión supera o baja de los umbrales y el informe semanal de tesorería que se genera solo.

7. ERRORES EN LA AUTOMATIZACIÓN FINANCIERA
Lista los seis errores más comunes cuando las empresas intentan automatizar sus procesos financieros: la automatización sin estandarización previa de los datos que genera caos en los sistemas de destino, la falta de controles de auditoría en los procesos automatizados, la dependencia excesiva de la automatización sin revisión humana de las excepciones, la integración frágil entre sistemas que se rompe con cualquier actualización, la falta de segregación de funciones en los procesos automatizados y la ausencia de un plan de contingencia cuando la automatización falla.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Automatizar los procesos financieros repetitivos para reducir el tiempo de trabajo manual y los errores en la contabilidad.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Automatización de contratos y documentos legales',
                'description'       => 'Automatiza la generación de documentos legales estándar: los contratos tipo, las cláusulas reutilizables y los workflows de revisión y firma que reducen el tiempo del departamento jurídico en el trabajo de bajo valor.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en legaltech y automatización de procesos jurídicos. Necesito que me ayudes a diseñar un sistema de automatización de la generación y gestión de contratos y documentos legales estándar para reducir el tiempo del departamento jurídico en el trabajo repetitivo y de bajo valor.

Mi contexto:
- Tipo de organización: [despacho de abogados / departamento jurídico interno / empresa sin departamento jurídico]
- Tipos de documentos que más se repiten: [contratos de servicio, NDAs, contratos laborales, acuerdos de distribución, etc.]
- Volumen mensual de documentos generados: [número aproximado]
- Proceso actual de generación de documentos: [desde cero / plantillas en Word / sistema básico de gestión]
- Mayor problema en el proceso actual: [tiempo de elaboración, errores en los datos, versiones desactualizadas de cláusulas, proceso de firma manual, etc.]
- Herramientas disponibles: [Word, Google Docs, DocuSign, etc.]

Con ese contexto, dame:

1. CLASIFICACIÓN DE DOCUMENTOS POR POTENCIAL DE AUTOMATIZACIÓN
Dame un framework para clasificar los documentos legales de mi organización según su potencial de automatización: los documentos altamente estandarizables que se pueden automatizar casi completamente, los documentos con estructura fija pero con cláusulas variables que se pueden semi-automatizar con un cuestionario de intake y los documentos complejos y estratégicos que siempre requieren redacción y revisión por un abogado senior. Aplica esta clasificación a los tipos de documentos que te he mencionado.

2. SISTEMA DE PLANTILLAS INTELIGENTES
¿Cómo diseño un sistema de plantillas legales que genere documentos correctos automáticamente a partir de los datos del caso? Dame el proceso completo: cómo estructurar la plantilla con campos variables, cómo diseñar el cuestionario de intake que recoge los datos necesarios, cómo gestionar las cláusulas condicionales que se incluyen o se excluyen según las respuestas, cómo mantener actualizadas las plantillas cuando cambia la normativa y qué herramientas de document automation permiten hacer esto sin conocimientos de programación.

3. BIBLIOTECA DE CLÁUSULAS REUTILIZABLES
¿Cómo creo y mantengo una biblioteca de cláusulas estándar que el equipo jurídico pueda usar como bloques de construcción en cualquier contrato? Dame el proceso de diseño de la biblioteca: la clasificación de cláusulas por tipo y materia, la nomenclatura y el sistema de búsqueda, las cláusulas alternativas para distintos escenarios de negociación, el proceso de aprobación de nuevas cláusulas y el protocolo de actualización cuando hay cambios normativos o jurisprudenciales relevantes.

4. WORKFLOW DE REVISIÓN Y APROBACIÓN
¿Cómo diseño el proceso automatizado de revisión interna de documentos antes de enviarlos a la contraparte? Dame el flujo de trabajo: los roles en el proceso de revisión (quien redacta, quien revisa, quien aprueba y quien firma), los plazos máximos en cada etapa, las notificaciones automáticas de recordatorio, el proceso de gestión de comentarios y cambios entre versiones y cómo documentar el historial de revisiones para la auditoría.

5. FIRMA ELECTRÓNICA E INTEGRACIÓN CON EL PROCESO
¿Cómo integro la firma electrónica en el flujo de gestión de contratos para eliminar el proceso manual de impresión, firma y escaneo? Dame el proceso completo de firma electrónica: las herramientas disponibles y sus diferencias (simple, avanzada y cualificada), los casos en que cada tipo de firma es legalmente suficiente en España y la UE, cómo integrar la firma con el sistema de generación de contratos y cómo gestionar el archivo de los contratos firmados de forma que sean recuperables y auditables.

6. GESTIÓN DEL CICLO DE VIDA DEL CONTRATO
¿Cómo automatizo el seguimiento del contrato una vez firmado para que nadie se olvide de las fechas clave? Dame el sistema de gestión del ciclo de vida contractual: el registro de fechas de vencimiento y renovación automática, las alertas a los plazos acordados (noventa días antes, treinta días, siete días), el proceso de renegociación o renovación automática según las condiciones pactadas y el archivo organizado que permite encontrar cualquier contrato en segundos.

7. ERRORES EN LA AUTOMATIZACIÓN DE DOCUMENTOS LEGALES
Lista los seis errores más comunes cuando las organizaciones automatizan su gestión documental jurídica: las plantillas desactualizadas que generan contratos con cláusulas que han sido declaradas nulas, la automatización sin validación jurídica que genera documentos incorrectos, la falta de control de versiones que hace que distintos departamentos usen plantillas distintas, el uso de firma electrónica simple donde se requiere firma cualificada, la ausencia de un proceso de auditoría de los documentos generados automáticamente y la falta de formación de los usuarios no jurídicos que generan documentos sin entender su contenido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar un sistema de automatización de la generación y gestión de contratos para reducir el tiempo del equipo jurídico en trabajo repetitivo.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success automation',
                'description'       => 'Automatiza los touchpoints de bajo valor para que el equipo de CS se concentre en las conversaciones de alto impacto: los check-ins automáticos, los triggers de health score y los playbooks que se ejecutan solos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success operations y automatización de procesos de retención y expansión de clientes. Necesito que me ayudes a diseñar el sistema de CS automation que permita al equipo de Customer Success escalar sin crecer el headcount, concentrando su tiempo en las conversaciones de mayor impacto.

Mi contexto:
- Tipo de producto: [SaaS, plataforma, servicio recurrente, etc.]
- Modelo de CS actual: [high-touch / mid-touch / tech-touch / mix según segmento]
- Tamaño de la cartera de clientes: [número de cuentas por CSM aproximado]
- Herramientas de CS disponibles: [Gainsight, ChurnZero, Totango, HubSpot, Planhat, o sin herramienta específica de CS]
- Mayor problema del equipo de CS ahora mismo: [demasiadas cuentas por gestionar, sin visibilidad del health de los clientes, sin tiempo para las cuentas en riesgo, falta de proceso de expansión, etc.]

Con ese contexto, dame:

1. SEGMENTACIÓN DE LA CARTERA PARA LA AUTOMATIZACIÓN
¿Cómo segmento la cartera de clientes para decidir qué nivel de automatización aplicar a cada segmento? Dame el modelo de segmentación basado en ARR, potencial de expansión y complejidad del cliente, y para cada segmento la estrategia de CS correspondiente: el número de touchpoints humanos por trimestre, qué touchpoints se automatizan y qué se deja al criterio del CSM.

2. SISTEMA DE HEALTH SCORE AUTOMATIZADO
¿Cómo diseño un health score de cliente que se calcule automáticamente y alerte al equipo de CS cuando una cuenta está en riesgo? Dame el diseño del modelo: las señales de uso del producto que deben entrar en el health score, las señales externas (NPS, tickets de soporte, engagement en comunicaciones), los pesos de cada señal, los umbrales de alerta por color (verde, amarillo, rojo) y cómo hacer que el sistema alerte al CSM con el contexto suficiente para actuar sin necesidad de investigación adicional.

3. PLAYBOOKS AUTOMATIZADOS POR SITUACIÓN
¿Qué playbooks de CS puedo automatizar para que se ejecuten solos cuando el sistema detecta una señal? Dame el diseño de los cinco playbooks más impactantes: el playbook de bienvenida y onboarding del nuevo cliente, el playbook de activación del cliente que no ha adoptado una feature clave, el playbook de recuperación del cliente en riesgo (health score rojo), el playbook de expansión del cliente que ha alcanzado los límites de uso y el playbook de renovación preventiva noventa días antes del vencimiento. Para cada playbook indica el trigger, las acciones automáticas y el punto en que se requiere intervención humana.

4. COMUNICACIONES AUTOMÁTICAS DE ALTO VALOR
¿Qué comunicaciones de CS puedo automatizar sin que el cliente sienta que está hablando con un robot? Dame el catálogo de comunicaciones automáticas recomendadas para CS: los emails de milestone de adopción, los resúmenes mensuales de uso personalizados por cliente, las alertas proactivas cuando el cliente se acerca a un límite de uso, las comunicaciones de nuevas features relevantes para el perfil del cliente y los check-ins automáticos de satisfacción. Para cada comunicación indica el canal, el momento de envío y cómo personalizarla con datos del cliente.

5. AUTOMATIZACIÓN DEL PROCESO DE RENOVACIÓN
¿Cómo diseño el proceso de renovación automatizado para que el CSM no tenga que acordarse de iniciar la conversación de renovación? Dame el flujo automatizado de renovación: las fases del proceso desde noventa días antes del vencimiento, las tareas que se asignan automáticamente al CSM, los emails automáticos de preparación a la renovación, el escalado automático al manager cuando una renovación está en riesgo y cómo documentar en el CRM el resultado de la renovación para el análisis posterior.

6. MÉTRICAS DE CS AUTOMATION
¿Cómo mido si el sistema de CS automation está funcionando bien? Dame las métricas que debo monitorizar: la cobertura del health score (qué porcentaje de la cartera tiene health score actualizado), la tasa de detección temprana de clientes en riesgo, el tiempo de respuesta del equipo a las alertas del sistema, el impacto de los playbooks automáticos en el churn y en la expansión y el NPS antes y después de la implementación de la automatización.

7. ERRORES EN CS AUTOMATION
Lista los seis errores más comunes cuando los equipos de Customer Success implementan automatización: la automatización que el cliente percibe como falta de atención, el health score que no refleja el riesgo real porque usa las señales equivocadas, los playbooks que se disparan demasiado tarde cuando el cliente ya ha decidido cancelar, la falta de coordinación entre las acciones automáticas y las del CSM que genera mensajes duplicados o contradictorios, la automatización que sustituye conversaciones de alto valor que solo un humano puede tener y la ausencia de feedback loop para mejorar los modelos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el sistema de CS automation que permite escalar la cartera de clientes sin perder calidad en la relación.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Automatización del negocio freelance',
                'description'       => 'Automatiza las partes operativas del negocio freelance: la propuesta que se genera sola, la factura automática y los recordatorios de pago que convierten las tareas administrativas en procesos que funcionan sin tu atención.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en freelancers y profesionales independientes. Necesito que me ayudes a diseñar el sistema de automatización de las operaciones de mi negocio freelance para dejar de perder tiempo en las tareas administrativas y poder dedicar más horas al trabajo por el que me pagan.

Mi contexto:
- Tipo de servicio freelance: [copywriting, desarrollo, diseño, consultoría, marketing, fotografía, etc.]
- Volumen de proyectos mensual: [número de clientes o proyectos activos simultáneamente]
- Herramientas actuales: [lo que usas ahora para propuestas, facturas, comunicación, gestión de proyectos]
- Tareas administrativas que más tiempo te roban: [describe las dos o tres principales]
- Mayor frustración en las operaciones del negocio: [clientes que no pagan a tiempo, propuestas que tardas horas en preparar, emails de seguimiento que olvidas, etc.]
- Nivel de comodidad con herramientas digitales: [básico / intermedio / avanzado]

Con ese contexto, dame:

1. AUDITORÍA DE LAS OPERACIONES DEL FREELANCE
Dame un inventario de todas las operaciones típicas de un negocio freelance clasificadas por su potencial de automatización: las que se pueden automatizar completamente sin perder calidad, las que se pueden semi-automatizar con plantillas y flujos de aprobación rápida y las que deben permanecer con alta intervención personal porque son parte del valor diferencial. Aplica esta clasificación a las tareas que me has mencionado como más problemáticas.

2. SISTEMA DE PROPUESTAS AUTOMÁTICAS
¿Cómo diseño un sistema de propuestas que me permita generar una propuesta profesional y personalizada en menos de quince minutos? Dame el proceso completo: la plantilla de propuesta con secciones fijas y campos variables, el cuestionario de intake que rellena el cliente o que completo yo tras la llamada de discovery, las opciones de precio predefinidas para distintos alcances y cómo automatizar el envío, el seguimiento y la firma digital de la propuesta. Indica las herramientas más adecuadas para mi tipo de servicio.

3. FACTURACIÓN Y COBRO AUTOMATIZADO
¿Cómo diseño el sistema de facturación que genera y envía facturas automáticamente en los momentos correctos y hace el seguimiento del cobro sin que yo tenga que hacer nada? Dame el flujo completo: la generación automática de la factura cuando se aprueba la propuesta o se alcanza un hito del proyecto, el envío automático al cliente, los recordatorios escalonados cuando la factura no se paga (siete días, quince días, treinta días tras el vencimiento), la alerta cuando un cliente tiene facturas impagadas y el cierre automático cuando se recibe el pago. Indica las herramientas de invoicing que mejor encajan con mi caso.

4. GESTIÓN DE CLIENTES Y SEGUIMIENTO DE PROYECTOS
¿Cómo automatizo el seguimiento de los proyectos en curso para que no se me escape ninguna entrega ni ningún check-in con el cliente? Dame el sistema de gestión de proyectos automatizado: las plantillas de proyecto por tipo de servicio con todas las tareas y plazos, las notificaciones automáticas al cliente en los hitos clave, los recordatorios internos cuando una entrega se acerca, el email de cierre del proyecto que pide el testimonio del cliente y el proceso de archivo del proyecto con toda la documentación.

5. MARKETING Y CAPTACIÓN EN PILOTO AUTOMÁTICO
¿Cómo genero captación de clientes de forma sistemática sin depender de mi actividad manual diaria? Dame el sistema de marketing automatizado para freelance: el flujo de nurturing para los leads que no se convierten de inmediato, el email de seguimiento para los contactos fríos de la red que no han tenido noticias mías en mucho tiempo, el sistema de referidos que incentiva a los clientes actuales a recomendar mis servicios y el newsletter o contenido periódico que me mantiene presente en la mente de mi red sin que tenga que escribir desde cero cada vez.

6. ONBOARDING DE NUEVOS CLIENTES AUTOMATIZADO
¿Cómo doy una experiencia profesional y consistente a cada nuevo cliente desde el momento en que firma la propuesta sin tener que hacer todo manualmente cada vez? Dame el flujo de onboarding automatizado: el email de bienvenida con toda la información que necesita el cliente para empezar, el acceso a las herramientas colaborativas que usaremos, el calendario de check-ins programado para todo el proyecto, la solicitud de materiales e información que necesito del cliente y el recordatorio si no los entrega en el plazo acordado.

7. STACK DE HERRAMIENTAS PARA EL FREELANCE AUTOMATIZADO
Dame las recomendaciones de herramientas para construir el sistema de operaciones automatizado de un negocio freelance con un presupuesto razonable: la herramienta de propuestas y contratos, el sistema de facturación y cobro, el gestor de proyectos y tareas, la herramienta de comunicación con clientes, el CRM básico para el seguimiento de leads y la herramienta de automatización que conecta todo el stack. Para cada categoría indica la opción gratuita o de bajo coste y la opción premium con sus diferencias principales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el sistema de operaciones automatizado que permite al freelance dedicar más tiempo al trabajo facturable y menos a las tareas administrativas.',
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
