<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills142Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Dashboard de marketing',
                'description'      => 'Diseña el cuadro de mando de marketing que muestra lo que importa: métricas por canal, por etapa de funnel y los indicadores que predicen el resultado antes de que llegue.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de marketing data-driven con experiencia diseñando cuadros de mando para equipos de 5 a 50 personas. Voy a describirte mi empresa y quiero que me ayudes a construir el dashboard de marketing definitivo.

Mi empresa: [describe sector, tamaño de equipo, canales principales que usáis, herramientas actuales de analytics y CRM, y cuál es el mayor problema que tenéis hoy con los datos].

**Lo que necesito que hagas:**

Primero, ayúdame a identificar los 5-7 KPIs principales que deberían estar en la portada del dashboard. No me des una lista genérica: quiero que justifiques cada métrica explicando qué decisión me permite tomar y qué acción dispara cuando sube o baja.

Segundo, diseña la arquitectura del dashboard en capas:
- Capa 1 (vista ejecutiva): las métricas de negocio que ve el CEO, actualizadas semanalmente
- Capa 2 (vista de rendimiento): el rendimiento por canal con comparativa período anterior y YoY
- Capa 3 (vista operativa): los datos diarios que necesita el equipo para optimizar campañas

Tercero, para cada canal que uso [especifica: paid search, paid social, email, SEO, afiliados, etc.], dame los 3 indicadores clave, el benchmark de industria razonable para mi tipo de empresa, y la señal de alerta que me dice que algo va mal.

Cuarto, ayúdame a diseñar las métricas de funnel end-to-end: desde el primer contacto hasta el cliente recurrente. Quiero ver dónde se rompe el funnel, no solo el volumen que entra por arriba.

Quinto, propón 2-3 métricas predictivas o leading indicators que me permitan anticipar los resultados del mes antes de que termine. Explica la lógica causal detrás de cada una.

Sexto, dame una plantilla de reunión semanal de 45 minutos donde el equipo revisa el dashboard: qué secciones se cubren en qué orden, quién presenta qué, y cómo se toman decisiones de optimización basadas en los datos.

Séptimo, identifica las 3 métricas trampa más comunes en marketing (las que parecen importantes pero llevan a malas decisiones) y explica por qué no deberían estar en mi dashboard principal.

Finalmente, si actualmente trabajo con [herramienta de analytics], dame las queries o segmentaciones específicas que necesito configurar para extraer estos datos correctamente. Señala las limitaciones técnicas conocidas de esa herramienta y cómo compensarlas.

Estructura tu respuesta con secciones claras y, cuando sea útil, usa tablas para los benchmarks y las alertas. El objetivo es que cuando termine esta conversación tenga un blueprint completo del dashboard que puedo llevar a mi equipo de datos o construir yo mismo en Looker / Tableau / Google Data Studio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un cuadro de mando de marketing con KPIs por canal y etapa de funnel',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Métricas de ingeniería',
                'description'      => 'DORA metrics, velocity, deuda técnica y los indicadores que muestran la salud de un equipo de desarrollo más allá del número de tickets cerrados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como engineering manager con experiencia en organizaciones que han escalado de 5 a 100+ ingenieros. Quiero construir un sistema de métricas para mi equipo de desarrollo que sea útil y no se convierta en un sistema de vigilancia.

Mi contexto: [describe el tamaño del equipo, la metodología que usáis —Scrum, Kanban, Shape Up—, el tipo de producto —SaaS, apps móviles, sistemas internos—, y cuál es la mayor fricción que tienes hoy como EM o como equipo].

**Lo que necesito:**

Primero, explícame las DORA metrics (Deployment Frequency, Lead Time for Changes, Change Failure Rate y Mean Time to Recovery) en términos prácticos: cómo medirlas sin un sistema de telemetría sofisticado, qué nivel es razonable para un equipo de mi tamaño, y cuál de las cuatro tiene mayor impacto para mejorar primero.

Segundo, ayúdame a diseñar métricas de velocity que no destruyan la cultura del equipo. Quiero saber cómo usar los puntos de historia (o lo que sea que usemos) para planificar, no para juzgar. Dame el modelo de capacity planning que usarías tú.

Tercero, propón un sistema para hacer visible la deuda técnica: cómo cuantificarla, cómo comunicarla a producto y negocio, y cómo reservar capacidad para pagarla sin que se convierta en una batalla política cada sprint.

Cuarto, dame indicadores de salud del equipo que van más allá del código: distribución del conocimiento (bus factor), tiempo invertido en interrupciones vs. trabajo profundo, y señales tempranas de burnout técnico que se ven en los datos antes de que alguien dimita.

Quinto, diseña un ciclo de revisión de métricas: qué se mira en la retrospectiva de sprint, qué se revisa mensualmente con producto, y qué se presenta trimestralmente a dirección. Para cada nivel, dame el formato recomendado y las preguntas que deben guiar la conversación.

Sexto, advierte sobre las métricas que parecen razonables pero generan comportamientos no deseados: por qué medir líneas de código es dañino, qué pasa cuando incentivas el cierre de tickets sobre la calidad, y cómo evitar que las métricas sustituyan al criterio de ingeniería.

Séptimo, propón las 3-5 herramientas o integraciones que te darían el 80% de la visibilidad con el 20% del esfuerzo de configuración, dado que trabajamos con [GitHub / GitLab / Jira / Linear / otro].

Termina con un plan de implementación de 30-60-90 días para pasar de cero métricas a un sistema maduro sin distraer al equipo de entregar producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar DORA metrics y un sistema de indicadores de salud para equipos de desarrollo',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Métricas de diseño',
                'description'      => 'Cómo medir el impacto del diseño: conversion rate, task success rate, SUS score y los indicadores que demuestran el ROI del equipo de diseño a dirección.',
                'prompt_content'   => <<<'PROMPT'
Actúa como design lead con experiencia demostrando el valor del diseño en organizaciones donde los diseñadores históricamente han luchado por justificar su presupuesto. Quiero construir un sistema de métricas que haga visible el impacto de mi equipo de diseño.

Mi situación: [describe el tamaño del equipo de diseño, el tipo de producto, a quién reportas —producto, CEO, CTO—, y cuál es el principal escepticismo que recibes sobre el valor del diseño en tu empresa].

**Lo que necesito que desarrolles:**

Primero, dame un mapa de las métricas de diseño organizadas en tres categorías: métricas de usabilidad (task success rate, time on task, error rate), métricas de experiencia (NPS, CSAT, SUS score, CES) y métricas de negocio atribuibles al diseño (conversion rate, churn, revenue per user). Para cada una, explica cómo medirla, con qué frecuencia y qué nivel es considerado bueno.

Segundo, enséñame a calcular el SUS (System Usability Scale) desde cero: el cuestionario de 10 preguntas, la fórmula de puntuación, cómo interpretarlo y cuándo tiene sentido aplicarlo versus otras métricas de usabilidad.

Tercero, ayúdame a conectar las métricas de diseño con los resultados de negocio. Quiero poder decir "la mejora de diseño X generó Y puntos de conversión, que equivalen a Z€ de ingreso adicional". Dame el framework para construir ese argumento de forma rigurosa.

Cuarto, diseña un plan de medición para un rediseño: qué métricas estableces como baseline antes de empezar, cómo diseñas los tests A/B o el lanzamiento gradual, y cómo atribuyes los cambios en métricas al trabajo de diseño y no a otros factores.

Quinto, propón métricas de proceso del equipo de diseño: tiempo de ciclo de un brief a entrega, tasa de rework, cobertura de testing con usuarios y los indicadores que muestran si el proceso de diseño es eficiente o está creando cuellos de botella.

Sexto, dame la estructura de un informe trimestral de impacto del diseño que puedas presentar a dirección en 10 minutos: qué incluyes, en qué orden, qué visualizaciones funcionan mejor y cómo narras la historia de los datos sin que parezca un set de slides de Excel.

Séptimo, explica las métricas trampa del diseño: por qué el número de screens entregadas o de comentarios resueltos no dice nada sobre el impacto, y qué medir en su lugar.

Termina con un plan de 90 días para implementar este sistema de métricas partiendo de cero, con las herramientas específicas (Hotjar, Maze, Lookback, analytics de producto) que recomendarías para mi tipo de empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de métricas para demostrar el ROI del equipo de diseño',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales metrics que importan',
                'description'      => 'Más allá del revenue: pipeline coverage, win rate por segmento, cycle length y los leading indicators que permiten predecir el trimestre antes de que termine.',
                'prompt_content'   => <<<'PROMPT'
Actúa como VP de ventas con experiencia construyendo organizaciones comerciales en empresas B2B SaaS. Quiero rediseñar el sistema de métricas de mi equipo de ventas para pasar de medir lo que ya pasó a poder predecir y actuar antes.

Mi contexto: [describe el tipo de ventas —inbound, outbound, channel—, el ACV aproximado, la longitud actual del ciclo de ventas, el tamaño del equipo y cuál es el mayor problema de visibilidad que tienes hoy].

**Lo que necesito:**

Primero, ayúdame a diseñar el conjunto de leading indicators que me permitan predecir el cierre del trimestre con 4-6 semanas de antelación. Quiero saber qué señales en el pipeline de hoy predicen el revenue de dentro de 45 días, con una explicación de la lógica causal detrás de cada relación.

Segundo, explícame el pipeline coverage ratio: cómo calcularlo correctamente (no todos los deals valen igual en el pipeline), qué ratio es saludable según la metodología de ventas, y cómo varía según la etapa del ciclo económico o la madurez del equipo.

Tercero, dame un framework para calcular el win rate por segmento: por tamaño de empresa, por sector, por canal de adquisición, por representante y por competidor. Quiero entender dónde ganamos por qué y dónde perdemos por qué.

Cuarto, diseña el sistema de métricas de actividad de ventas que vas más allá de "número de llamadas": las actividades que tienen correlación demostrable con el cierre, el modelo de cobertura por segmento y cómo establecer expectativas de actividad que sean motivadoras en lugar de sofocantes.

Quinto, ayúdame a calcular el sales cycle length de forma honesta: cómo definir el inicio (¿primer contacto? ¿oportunidad creada? ¿demo completada?), cómo segmentarlo por tipo de deal, y cómo usarlo para crear un forecast más fiable que el que hace el equipo en el CRM.

Sexto, propón un sistema de métricas de calidad del pipeline: cómo detectar los deals fantasma que nunca cierran, las oportunidades estancadas que inflan el pipeline, y los patrones que predicen el abandono del deal semanas antes de que el rep lo marque como perdido.

Séptimo, diseña la cadencia de revisión de métricas de ventas: qué se mira en el 1:1 semanal con cada rep, qué se cubre en el pipeline review de equipo, y qué se reporta al board. Para cada nivel, dame el formato, las preguntas y el tiempo recomendado.

Termina con las 3-5 métricas que, en tu experiencia, tienen mayor impacto para mejorar el rendimiento de un equipo de ventas B2B, y por qué las priorizarías sobre las demás.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un sistema de leading indicators para predecir el trimestre de ventas',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'North Star Metric',
                'description'      => 'Cómo encontrar la métrica única que captura el valor que el producto entrega y que todo el equipo puede maximizar sin efectos secundarios negativos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product strategist con experiencia ayudando a equipos de producto a encontrar y operar con una North Star Metric efectiva. Quiero encontrar la NSM de mi producto y construir el árbol de métricas alrededor de ella.

Mi producto: [describe qué hace el producto, para quién, cuál es el momento "aha" en el que el usuario entiende el valor, cuál es el modelo de negocio y cuál es la principal tensión que existe hoy entre las métricas que el equipo persigue].

**Lo que necesito:**

Primero, explícame los criterios que debe cumplir una buena North Star Metric: por qué tiene que medir valor entregado al usuario (no solo actividad o revenue), cómo distinguir una NSM de un vanity metric, y cuáles son los errores más comunes al elegirla.

Segundo, guíame por el proceso de identificación: empieza con una serie de preguntas que me ayuden a entender qué es el "éxito del usuario" en mi producto, luego propón 3-5 candidatas a NSM con los pros y contras de cada una, y finalmente ayúdame a seleccionar la mejor según mis respuestas.

Tercero, una vez que tengamos la NSM elegida, ayúdame a construir el árbol de métricas completo: los input metrics (las palancas que mueve el equipo para influir en la NSM), las guardrail metrics (los indicadores que no deben degradarse mientras optimizamos la NSM) y las métricas de negocio que la NSM debería predecir.

Cuarto, analiza los posibles efectos secundarios negativos de optimizar mi NSM: ¿qué comportamiento no deseado podría generar en usuarios o en el equipo si se persigue ciegamente? ¿Cómo diseño el sistema de métricas para detectarlo?

Quinto, dame el proceso para comunicar la NSM a toda la organización: cómo la explicas a ingeniería, diseño, marketing, ventas y dirección de forma que cada área entienda cómo su trabajo impacta en ella. Incluye la plantilla del documento de alineación que usarías.

Sexto, diseña la cadencia de revisión: con qué frecuencia se revisa la NSM, cuándo tiene sentido cuestionarla (cambio de estrategia, pivot, nueva fase de crecimiento) y cómo se toma la decisión de cambiarla sin perder la continuidad del equipo.

Séptimo, dame ejemplos reales de NSM de productos conocidos —Airbnb, Spotify, Slack, Duolingo— y explica por qué cada una funciona para ese producto específico, para que pueda usarlos como referencia al diseñar la mía.

Termina con las señales de que la NSM está funcionando bien como sistema de alineación y las señales de que ha dejado de ser útil y necesita revisarse.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identificar y construir el sistema de métricas alrededor de la North Star Metric',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People analytics',
                'description'      => 'Más allá de la rotación: las métricas que predicen el compromiso, el riesgo de salida y el impacto de las iniciativas de RRHH en el rendimiento del negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como CHRO con experiencia implementando people analytics en empresas de 100 a 2.000 empleados. Quiero construir un sistema de métricas de RRHH que vaya más allá de los indicadores reactivos y me permita anticipar problemas y demostrar el impacto de las iniciativas de personas en el negocio.

Mi contexto: [describe el tamaño de la empresa, el sector, el perfil del talento que gestionas —técnico, comercial, operativo—, las herramientas de HRIS que tienes y cuál es la mayor preocupación que tiene hoy la dirección sobre el talento].

**Lo que necesito:**

Primero, dame el mapa completo de métricas de RRHH organizadas por categoría: métricas de adquisición de talento (time to fill, cost per hire, calidad de contratación), métricas de retención (rotación voluntaria e involuntaria, rotación por antigüedad y por performance), métricas de desarrollo (tasa de promoción interna, cobertura de puestos clave con talento interno) y métricas de compromiso. Para cada una, explica cómo calcularla correctamente.

Segundo, ayúdame a construir un modelo predictivo de riesgo de salida sin necesitar un data scientist: qué señales observables en los datos de HRIS correlacionan con la intención de salida (tiempo desde última promoción, cambios en participación en encuestas, patrones de ausencias, diferencia salarial con mercado), y cómo combinarlas en un índice de riesgo accionable.

Tercero, diseña un sistema de medición del compromiso que complemente o sustituya la encuesta anual: la cadencia de pulso que recomendarías, las 5-7 preguntas que capturan las dimensiones más predictivas del compromiso (manager quality, growth opportunity, clarity, autonomy, belonging) y cómo analizar los resultados por segmento sin perder la confidencialidad.

Cuarto, ayúdame a calcular el ROI de las principales iniciativas de RRHH: cómo medir el impacto de un programa de formación, el retorno de una inversión en employer branding, o el efecto de cambiar el proceso de onboarding en la retención a 12 meses. Dame el modelo de atribución que usarías para cada caso.

Quinto, propón las métricas que conectan people analytics con rendimiento del negocio: cómo correlacionar el compromiso de los equipos con los resultados de ventas, la calidad del manager con la productividad, o el time to productivity de los nuevos ingresos con el output del equipo.

Sexto, diseña el dashboard de RRHH para dirección: qué 5-7 métricas aparecen en la portada, con qué frecuencia se actualiza, y cómo narras la historia de los datos para que el CEO y el CFO entiendan el estado del capital humano sin necesitar ser expertos en RRHH.

Séptimo, advierte sobre las métricas de RRHH que generan comportamientos no deseados o crean problemas de privacidad y confianza, y dame las salvaguardas para implementar people analytics de forma ética.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un sistema de people analytics que prediga rotación e impacto de iniciativas de RRHH',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial KPIs para startups',
                'description'      => 'Las métricas que los inversores miran: ARR, MRR, burn rate, runway, CAC, LTV y los ratios que diferencian los negocios que escalan de los que no.',
                'prompt_content'   => <<<'PROMPT'
Actúa como CFO de startup con experiencia en Series A y B, y como asesor de varios fondos de venture capital. Quiero construir el modelo de métricas financieras que necesito para gestionar bien el negocio y para hablar con propiedad con inversores.

Mi empresa: [describe el modelo de negocio —SaaS, marketplace, transaccional—, la etapa actual —pre-seed, seed, Serie A—, el MRR aproximado o el estado de ingresos, y cuál es la principal pregunta financiera que tienes sin respuesta hoy].

**Lo que necesito:**

Primero, explícame cómo calcular correctamente las métricas de revenue: la diferencia entre ARR y MRR (y cuándo usar cada una), cómo tratar los contratos anuales prepagados, los descuentos, los contratos multianual y los ingresos por servicios profesionales que no son recurrentes. Dame las definiciones exactas que usan los inversores.

Segundo, diseña el modelo de cohort analysis de revenue: cómo segmentar la base de clientes por cohorte de entrada, cómo calcular el NRR (Net Revenue Retention) y el GRR (Gross Revenue Retention) por cohorte, y qué te dice cada ratio sobre la salud del negocio.

Tercero, ayúdame a calcular el CAC de forma rigurosa: qué costes incluir (solo marketing, o también salarios de ventas, comisiones, herramientas), cómo segmentarlo por canal, y cómo calcular el payback period de forma que sea comparable con benchmarks de la industria.

Cuarto, explica el LTV de forma que sea honesta y útil: por qué el LTV calculado como ARPU / churn puede ser engañoso, cómo construir un modelo de LTV más conservador usando cohortes reales, y cómo comunicarlo a inversores sin inflar las expectativas.

Quinto, ayúdame a gestionar el burn rate y el runway: cómo calcular el burn neto vs. bruto, qué escenarios de runway preparar (base, optimista, pesimista), cuándo tienes que empezar a recaudar en función del runway actual, y cómo presentar el plan de reducción de burn si fuera necesario.

Sexto, dame los ratios que los inversores usan para evaluar la eficiencia del negocio: el Rule of 40, el Magic Number de ventas, el Burn Multiple, el ratio de eficiencia de go-to-market. Para cada uno, explica la fórmula, qué valores son buenos en cada etapa y cómo lo usa el inversor en su tesis.

Séptimo, diseña el modelo financiero mensual que presentarías al board: la estructura del P&L de startup, las métricas que van arriba del todo, las palancas que más impactan en el forecast y el formato de presentación que genera conversaciones de valor en lugar de revisiones de números.

Termina con las 3 señales financieras que, en tu experiencia, predicen con más antelación que un negocio SaaS está en problemas, y cómo detectarlas antes de que sean una crisis.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Dominar las métricas financieras SaaS que usan CFOs e inversores para evaluar startups',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'KPIs del departamento legal',
                'description'      => 'Cómo medir la eficiencia y el impacto del equipo legal: tiempo de respuesta, cost per matter, riesgo mitigado y los indicadores que justifican el presupuesto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como General Counsel con experiencia transformando departamentos legales de centros de coste a funciones estratégicas que demuestran su valor con datos. Quiero construir un sistema de métricas para el departamento legal de mi empresa.

Mi contexto: [describe el tamaño de la empresa, el sector, el tamaño del equipo legal —interno y externo—, el volumen aproximado de asuntos que gestionáis y cuál es la mayor fricción que tienes con el negocio o con la dirección en relación al departamento legal].

**Lo que necesito:**

Primero, dame el mapa completo de métricas legales organizadas en categorías: métricas de eficiencia operativa (tiempo de respuesta, ciclo de vida de contratos, time to close de asuntos), métricas de coste (cost per matter, ratio interno vs. externo, presupuesto vs. real), métricas de riesgo (número de asuntos litigiosos, sanciones regulatorias, compliance issues) y métricas de satisfacción del cliente interno. Explica cómo medir cada una.

Segundo, ayúdame a implementar un sistema de matter management: cómo categorizar los asuntos legales para poder analizar dónde se va el tiempo y el dinero, cómo distinguir trabajo estratégico de trabajo repetitivo automatizable, y cómo usar esa información para tomar decisiones de staffing y de externalización.

Tercero, diseña el modelo de cost per matter: qué costes incluir (horas internas, honorarios externos, costes de herramientas legales), cómo segmentarlo por tipo de asunto y por área de negocio, y cómo usarlo para negociar con despachos externos y para justificar inversión en tecnología legal.

Cuarto, ayúdame a cuantificar el valor de la prevención: cómo medir el riesgo que el equipo legal evita (contratos mejorados, litigios prevenidos, sanciones regulatorias evitadas) y cómo convertirlo en un número que el CFO y el CEO puedan entender, aunque la causalidad sea difícil de probar.

Quinto, diseña métricas de eficiencia del proceso de contratos: tiempo promedio desde solicitud hasta firma por tipo de contrato, tasa de contratos que necesitan renegociación, volumen gestionado por abogado y el impacto de templates y playbooks en la reducción del ciclo. Dame benchmarks de industria para equipos in-house.

Sexto, propón un sistema de medición de la satisfacción del cliente interno: cómo recoger feedback de las áreas de negocio que trabajan con legal, qué preguntas hacen las mejores encuestas de satisfacción interna, y cómo usar ese feedback para mejorar el servicio sin crear precedentes problemáticos.

Séptimo, diseña el informe trimestral del departamento legal para el comité de dirección: qué métricas presentas, cómo narras el impacto del trabajo legal en los objetivos estratégicos de la empresa, y cómo posicionas el departamento como función que habilita el negocio en lugar de función que lo frena.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar KPIs en el departamento legal para demostrar su valor estratégico',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS metrics completo',
                'description'      => 'NPS, CSAT, CES, churn, NRR, time to value y el cuadro de mando que muestra la salud de toda la cartera de clientes de un vistazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como VP de Customer Success con experiencia construyendo organizaciones de CS en empresas SaaS B2B de 10M a 100M de ARR. Quiero diseñar el sistema de métricas completo para mi equipo de CS.

Mi contexto: [describe el tipo de producto SaaS, el segmento de clientes —enterprise, mid-market, SMB—, el tamaño del equipo de CS, el modelo de cobertura —high touch, tech touch, digital—, y cuál es la principal métrica que hoy no estás midiendo bien].

**Lo que necesito:**

Primero, explícame las diferencias entre NPS, CSAT y CES: qué mide cada uno, en qué momento del customer journey aplicar cada encuesta, qué preguntas funcionan mejor, y cuál usarías como métrica principal para mi tipo de negocio y por qué. Incluye la metodología correcta de cálculo para cada uno.

Segundo, ayúdame a calcular el churn de forma rigurosa: la diferencia entre logo churn y revenue churn, cómo tratar los downgrades, los contratos que no renuevan pero mantienen una versión básica, y los clientes que pausan. Dame las definiciones que usan los inversores SaaS en la due diligence.

Tercero, diseña el modelo de NRR (Net Revenue Retention) y GRR: cómo calcularlo, qué nivel es considerado best-in-class en B2B SaaS según el segmento de mercado, y qué palancas tiene el equipo de CS para moverlo (expansión, upsell, reducción de contraction, mejora de la tasa de renovación).

Cuarto, explica el time to value: cómo definir el "primer valor" para mi tipo de producto, cómo medirlo desde la firma hasta ese momento, y cómo el time to value predice la retención a 12 meses. Dame el proceso para reducirlo a través del onboarding.

Quinto, propón un Customer Health Score: qué señales de producto (login frequency, breadth of feature usage, data input, integrations activas), señales de relación (respuesta a emails, asistencia a reviews, promotor NPS) y señales de riesgo (tickets de soporte, escalaciones, shadow usage caído) debes combinar, y cómo ponderarlas en un score único accionable.

Sexto, diseña el cuadro de mando completo del equipo de CS: las métricas que aparecen en el dashboard diario del CSM, las que se revisan en el pipeline de renovaciones semanal, y las que se presentan al board trimestralmente. Para cada nivel, dame el formato y las preguntas que deben guiar la conversación.

Séptimo, ayúdame a calcular la productividad del equipo de CS: el ARR por CSM que es sostenible según el modelo de cobertura, cómo segmentar la cartera para maximizar impacto con recursos limitados, y cuándo tiene sentido invertir en digital CS vs. añadir headcount.

Termina con las 3 señales de alerta temprana que, en tu experiencia, predicen la pérdida de un cliente enterprise con más de 60 días de antelación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el sistema completo de métricas de Customer Success en SaaS B2B',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Métricas del negocio freelance',
                'description'      => 'Facturación por hora efectiva, tasa de conversión de propuestas, concentración de clientes y los números que revelan si el negocio freelance es sostenible.',
                'prompt_content'   => <<<'PROMPT'
Actúa como coach de negocios especializado en freelancers y consultores independientes con más de 10 años de experiencia. Quiero construir el cuadro de mando financiero y operativo de mi negocio freelance para dejar de gestionarlo por intuición.

Mi negocio: [describe tu especialidad, el tipo de clientes que tienes, el rango de tarifas que cobras, cuántos proyectos gestionas en paralelo aproximadamente, y cuál es la mayor incertidumbre financiera que tienes hoy].

**Lo que necesito:**

Primero, ayúdame a calcular mi tarifa por hora efectiva real: no la tarifa nominal que cobro, sino el ingreso real dividido entre todas las horas que trabajo (incluyendo prospección, administración, formación, propuestas no ganadas). Este número suele ser una sorpresa. Explícame cómo calcularlo y qué implica.

Segundo, diseña el modelo de pipeline de negocio para un freelancer: cómo gestionar el ciclo de oportunidades desde el primer contacto hasta el cobro, qué métricas de pipeline necesito (número de oportunidades activas, valor del pipeline, tasa de conversión de propuestas, tiempo promedio de decisión del cliente), y cómo mantenerlo sin un CRM complejo.

Tercero, ayúdame a calcular y reducir el riesgo de concentración de clientes: qué porcentaje del revenue puede venir de un solo cliente antes de que sea un riesgo real, cómo diversificar sin comprometer la calidad del servicio, y cómo detectar a tiempo que un cliente grande está a punto de irse.

Cuarto, propón las métricas de rentabilidad por proyecto: cómo calcular si un proyecto fue rentable más allá del revenue (horas reales invertidas, scope creep, retrasos en el cobro, coste de oportunidad), y cómo usar esa información para mejorar los presupuestos futuros y seleccionar mejores clientes.

Quinto, diseña el modelo de previsión de ingresos para un freelancer: cómo construir un forecast a 3 meses dado que los proyectos tienen duraciones variables, cómo planificar la carga de trabajo para evitar los ciclos de fiesta y hambre, y cuánto colchón financiero necesitas en función de tu perfil de negocio.

Sexto, dame las métricas de capacidad y sostenibilidad: cuántas horas facturables son sostenibles a largo plazo sin burnout (no la respuesta optimista, la honesta), cómo calcular tu tasa de utilización real, y cuándo los números te dicen que tienes que subir tarifas aunque te dé miedo.

Séptimo, diseña el cierre mensual financiero que haría un freelancer bien gestionado en menos de 2 horas: qué registra, qué calcula, qué compara con el mes anterior, y qué decisiones toma como resultado de esa revisión.

Termina con las 5 señales numéricas que indican que un negocio freelance es sólido y las 5 señales que indican que hay un problema estructural aunque los ingresos parezcan buenos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir el cuadro de mando financiero y operativo del negocio freelance',
                'vote_score'       => 40,
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
