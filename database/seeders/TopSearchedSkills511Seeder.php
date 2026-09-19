<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills511Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Dashboard ejecutivo con IA para decisiones de marketing',
                'description'      => 'Aprende a construir dashboards estratégicos impulsados por IA que transforman datos de marketing en decisiones ejecutivas claras, con análisis what-if, escenarios de inversión y reporting automatizado para directivos.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior de inteligencia de negocio especializado en marketing estratégico. Tu objetivo es ayudarme a diseñar y construir un dashboard ejecutivo con IA que convierta los datos dispersos de mis campañas en decisiones estratégicas accionables.

**Contexto del proyecto:**
Soy director/a de marketing de una empresa con múltiples líneas de negocio. Manejo datos de Google Ads, Meta Ads, CRM, email marketing y analytics web. Necesito un sistema que me permita tomar decisiones de alto nivel con rapidez y confianza, sin perder horas interpretando tablas de datos.

**Instrucción principal:**
Diseña para mí un framework de dashboard ejecutivo con los siguientes módulos:

**Módulo 1 — Visión estratégica (nivel CEO/CMO):**
- KPIs de negocio: CAC, LTV, ROAS consolidado, revenue atribuible a marketing
- Semáforo de salud por canal (verde/amarillo/rojo con umbrales configurables)
- Tendencias de 30/60/90 días con proyección IA para los próximos 30 días
- Alertas automáticas cuando un canal cae más del 15% respecto a la media

**Módulo 2 — Análisis de escenarios what-if:**
Genera tres escenarios de inversión que yo pueda presentar al consejo directivo:
- Escenario conservador: mantener presupuesto actual con optimización de mix
- Escenario moderado: incremento del 20% redistribuido según ROI histórico
- Escenario agresivo: duplicar inversión en los 2 canales de mayor ROAS

Para cada escenario incluye: revenue esperado, CAC proyectado, payback period y riesgo estimado.

**Módulo 3 — Inteligencia de competencia aumentada:**
- Metodología para monitorizar con IA los movimientos de la competencia
- Señales de alerta que debo rastrear semanalmente
- Cómo interpretar estos datos para ajustar mi estrategia

**Módulo 4 — Reporting estratégico automatizado:**
Crea una plantilla de informe ejecutivo mensual que incluya:
- Narrativa de resultados (no solo números, sino interpretación de qué pasó y por qué)
- Decisiones tomadas este mes y su impacto medido
- Tres decisiones estratégicas para el próximo mes con justificación de datos
- Riesgos identificados y planes de contingencia

**Módulo 5 — Reuniones de decisión más efectivas:**
- Protocolo de reunión de 45 minutos para revisar el dashboard con el equipo directivo
- Las 5 preguntas estratégicas que debo responder en cada revisión mensual
- Cómo preparar la narrativa de datos para audiencias no técnicas

**Tarea adicional:**
Dame una lista de las 10 preguntas más importantes que un CMO debería poder responder mirando su dashboard en menos de 5 minutos, y cómo estructurar los datos para que cada respuesta sea inmediata.

Termina con una hoja de ruta de 90 días para implementar este sistema de decisión basada en datos desde cero, con recursos mínimos y máximo impacto estratégico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir dashboards ejecutivos con IA para presentar al consejo y tomar decisiones de marketing estratégicas con datos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para decisiones de arquitectura técnica basadas en datos',
                'description'      => 'Usa IA para analizar métricas de rendimiento, logs de producción y datos técnicos con el fin de tomar decisiones de arquitectura informadas, reducir la deuda técnica y priorizar refactorizaciones con impacto real.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior con experiencia en ingeniería de datos y toma de decisiones técnicas basadas en evidencia. Necesito tu ayuda para construir un sistema de decisión técnica apoyado en IA que me permita liderar con datos y no con intuición.

**Mi situación actual:**
Soy tech lead o arquitecto de un equipo de 6-15 desarrolladores. Tenemos una aplicación en producción con deuda técnica acumulada, decisiones de arquitectura pendientes y presión para entregar features. Necesito un marco para tomar mejores decisiones técnicas respaldadas por datos.

**Instrucción 1 — Framework de decisiones técnicas con datos:**
Diseña un proceso de 5 pasos para evaluar cualquier decisión técnica importante (migración de base de datos, cambio de arquitectura, adopción de nueva tecnología). Para cada paso indica: qué datos necesito, cómo recopilarlos con IA y cómo interpretarlos.

**Instrucción 2 — Dashboard técnico para liderazgo:**
Crea la estructura de un dashboard técnico ejecutivo que incluya:
- Salud del sistema: latencia p99, tasa de error, tiempo de despliegue, cobertura de tests
- Productividad del equipo: cycle time, lead time, DORA metrics interpretadas para negocio
- Deuda técnica cuantificada: horas estimadas para resolución, impacto en velocidad de entrega
- Incidentes: frecuencia, MTTR, causa raíz más común, costo estimado por hora de caída

**Instrucción 3 — Análisis what-if técnico:**
Para cada una de estas decisiones, dame una plantilla de análisis de impacto:
- Migrar de monolito a microservicios
- Cambiar de base de datos relacional a NoSQL (o viceversa)
- Adoptar una nueva librería o framework principal
- Escalar horizontalmente vs optimizar el código actual

Cada plantilla debe cubrir: impacto en rendimiento esperado, costo de migración en horas-ingeniero, riesgos técnicos, riesgos de negocio y criterios de éxito medibles.

**Instrucción 4 — Priorización de deuda técnica con IA:**
Dame un sistema de scoring para priorizar qué deuda técnica atacar primero, considerando:
- Frecuencia con que ese código se modifica (hot spots)
- Impacto en velocidad de entrega cuando falla
- Costo de oportunidad de no resolverlo
- Complejidad de resolución
Incluye una fórmula simple y cómo presentar los resultados al equipo de producto y al CTO.

**Instrucción 5 — Comunicación técnica para directivos:**
Crea una plantilla de informe mensual técnico para audiencia no técnica que transforme métricas de ingeniería en narrativa de negocio. Cada métrica debe tener: definición simple, estado actual, tendencia y decisión recomendada.

Termina con las 5 decisiones técnicas más comunes donde los equipos se equivocan por falta de datos, y cómo la IA puede ayudar a evitar cada una.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Tomar decisiones de arquitectura y liderazgo técnico respaldadas por datos de rendimiento y métricas de ingeniería.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para decisiones de diseño basadas en datos de usuario',
                'description'      => 'Aprende a usar IA para interpretar datos de research, heatmaps, tests A/B y métricas de UX, y convertirlos en decisiones de diseño estratégicas que alineen la experiencia de usuario con los objetivos de negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de diseño de producto con especialización en diseño basado en datos y experiencia de usuario cuantitativa. Quiero construir un sistema de toma de decisiones de diseño que sea riguroso, basado en evidencia y fácil de comunicar a stakeholders no diseñadores.

**Mi contexto:**
Soy diseñador/a senior o design lead en un producto digital. Tengo acceso a datos de Hotjar, Google Analytics, resultados de tests A/B, entrevistas de usuario y métricas de conversión. Mi reto es convertir toda esa información en decisiones de diseño claras y defenderlas ante producto y negocio.

**Instrucción 1 — Framework de decisiones de diseño con datos:**
Diseña un proceso de toma de decisiones de diseño en 4 etapas que combine datos cuantitativos y cualitativos. Para cada etapa indica: qué datos analizo, qué preguntas me hago y qué output produzco. El proceso debe terminar en una recomendación de diseño clara y defendible.

**Instrucción 2 — Análisis de datos de UX con IA:**
Para cada uno de estos tipos de datos, dame un protocolo de análisis con IA:
- Heatmaps y mapas de clics: cómo interpretar patrones, identificar fricciones y proponer soluciones
- Grabaciones de sesiones: cómo analizar 50+ sesiones eficientemente para extraer insights clave
- Resultados de tests A/B: cómo interpretar significancia estadística y tomar decisiones cuando los resultados son ambiguos
- Feedback cualitativo de usuarios: cómo sintetizar 100 comentarios en los 5 insights más accionables

**Instrucción 3 — Dashboard de salud de UX:**
Crea la estructura de un dashboard de diseño que muestre:
- Métricas de usabilidad: tasa de éxito de tarea, tiempo en tarea, tasa de error
- Métricas de experiencia: NPS, CSAT, CES (Customer Effort Score)
- Métricas de conversión por flujo crítico: onboarding, compra, activación
- Señales de alerta temprana de problemas de UX

**Instrucción 4 — Escenarios de decisión de diseño:**
Dame una plantilla de análisis what-if para las siguientes decisiones de diseño:
- Rediseñar el flujo de onboarding vs optimizarlo incrementalmente
- Simplificar la navegación vs añadir más funcionalidades visibles
- Cambiar el sistema de diseño vs adaptarlo gradualmente
Cada análisis debe incluir: impacto esperado en métricas, riesgo de regresión, costo de implementación y criterios para medir el éxito.

**Instrucción 5 — Presentación de decisiones de diseño:**
Crea una plantilla de documento de decisión de diseño (Design Decision Document) que incluya: contexto del problema, datos analizados, opciones consideradas, decisión tomada, métricas de éxito y plan de validación. Que sea convincente para audiencias de producto, tecnología y negocio.

Finaliza con los 7 sesgos cognitivos más comunes en las decisiones de diseño y cómo los datos y la IA pueden ayudar a superarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Tomar decisiones de diseño de producto respaldadas por datos de UX, tests A/B y métricas de experiencia de usuario.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para decisiones estratégicas de ventas con inteligencia de pipeline',
                'description'      => 'Usa IA para analizar tu pipeline de ventas, identificar patrones de cierre, predecir ingresos y tomar decisiones estratégicas sobre dónde invertir el tiempo de tu equipo para maximizar resultados.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con experiencia en sales analytics, revenue operations y gestión de equipos de alto rendimiento. Quiero construir un sistema de decisión de ventas basado en datos que me permita liderar con precisión y anticiparme a los problemas antes de que afecten al quarter.

**Mi situación:**
Soy director/a de ventas o sales manager de un equipo de 5-20 representantes. Usamos un CRM (Salesforce, HubSpot o similar) y tengo acceso a datos históricos de ventas, tasas de conversión por etapa, velocidad del pipeline y rendimiento individual. Necesito convertir esos datos en decisiones estratégicas claras.

**Instrucción 1 — Dashboard de inteligencia de pipeline:**
Diseña la estructura de un dashboard de ventas ejecutivo que incluya:
- Salud del pipeline: cobertura de cuota, pipeline por etapa, deals en riesgo
- Velocidad de ventas: días promedio por etapa, ciclo de venta por segmento y tamaño de deal
- Predicción de cierre: forecast del mes/quarter con nivel de confianza por categoría
- Señales de alerta: deals sin actividad, etapas estancadas, patrones de pérdida

**Instrucción 2 — Análisis what-if de inversión de tiempo:**
Para las siguientes decisiones estratégicas, dame un marco de análisis de datos:
- ¿Debo asignar más recursos a cuentas existentes (upsell) o a nuevas cuentas?
- ¿En qué segmento de mercado tiene mi equipo mayor probabilidad de cierre?
- ¿Conviene bajar el precio promedio para cerrar más volumen o mantenerlo para proteger margen?
- ¿Qué territorio o vertical tiene mayor potencial sin desarrollar?

Para cada decisión: qué datos analizo, qué IA me ayuda a interpretar y cómo presento la recomendación al equipo directivo.

**Instrucción 3 — Predicción de ingresos con IA:**
Crea una metodología para construir un forecast de ventas más preciso que la intuición del equipo, que incluya:
- Cómo ponderar oportunidades por probabilidad de cierre real (no la del CRM)
- Señales de comprador que indican alta probabilidad de cierre en los próximos 30 días
- Cómo construir tres escenarios: pesimista, base y optimista con sus supuestos
- Cómo actualizar el forecast semanalmente sin que consuma más de 2 horas

**Instrucción 4 — Diagnóstico de rendimiento del equipo:**
Dame un protocolo para analizar con IA el rendimiento individual de mi equipo, identificar:
- Qué hace diferente el top performer que el resto no hace
- En qué etapa del funnel cada rep tiene mayor tasa de pérdida
- Qué tipo de deals cierra mejor cada persona y cómo asignar oportunidades en consecuencia
- Cómo dar feedback basado en datos que sea constructivo y motivador

**Instrucción 5 — Reunión de pipeline review con IA:**
Diseña el protocolo de una reunión semanal de pipeline review de 60 minutos que use datos para tomar decisiones en tiempo real, con la agenda, las preguntas clave que el manager debe hacer y cómo usar IA para preparar la reunión en 20 minutos.

Termina con las 5 señales de datos que predicen con más fiabilidad el cierre de un deal en los próximos 14 días, basadas en patrones de ventas B2B.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar el pipeline de ventas con IA para tomar decisiones de asignación de recursos, forecast y estrategia comercial.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para decisiones de roadmap de producto con datos',
                'description'      => 'Aprende a usar IA para priorizar el roadmap de producto con datos de usuarios, métricas de negocio y análisis de impacto, y a comunicar decisiones difíciles de forma clara a stakeholders con distintos intereses.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Producto con experiencia en product strategy, OKRs y toma de decisiones en entornos de alta incertidumbre. Quiero construir un sistema de decisión de roadmap que sea riguroso, transparente y que reduzca los conflictos entre stakeholders al máximo.

**Mi contexto:**
Soy Product Manager o Head of Product de un producto digital con tracción. Recibo peticiones simultáneas de ventas, marketing, clientes y tecnología. Tengo datos de uso, métricas de retención, feedback de usuarios y presión para entregar resultados en el quarter. Necesito un sistema para tomar las mejores decisiones posibles con la información disponible.

**Instrucción 1 — Framework de priorización de roadmap con IA:**
Diseña un sistema de scoring para priorizar features e iniciativas de producto que combine:
- Impacto en métricas de negocio (revenue, retención, activación): peso 40%
- Valor percibido por el usuario (research, NPS, churn surveys): peso 30%
- Esfuerzo técnico estimado (story points, dependencias): peso 20%
- Alineación con la estrategia de largo plazo: peso 10%

Dame la fórmula, cómo recopilar cada input con IA y cómo presentar la matriz de priorización a stakeholders de manera que sea difícil de rebatir sin datos.

**Instrucción 2 — Análisis de decisiones de build vs buy vs partner:**
Para cualquier capacidad nueva que el producto podría necesitar, dame una plantilla de análisis que evalúe:
- Construirlo internamente: costo, tiempo, ventaja competitiva
- Comprarlo (SaaS/herramienta de terceros): costo, tiempo de integración, dependencia
- Hacerlo mediante partnership o integración de ecosistema
Incluye cómo usar IA para estimar cada opción y cómo documentar la decisión para que sea revisable en 12 meses.

**Instrucción 3 — Dashboard de salud de producto para directivos:**
Crea la estructura de un dashboard de producto ejecutivo mensual con:
- North Star Metric y las 3 métricas input que la mueven
- Embudo de activación: conversión por etapa con comparativa mensual
- Retención por cohorte: semana 1, 4, 12 con interpretación de tendencia
- Features más usadas vs features con mayor potencial sin explotar

**Instrucción 4 — Gestión de stakeholders con datos:**
Dame un protocolo para gestionar las siguientes situaciones difíciles con datos:
- Ventas pide una feature puntual para cerrar un deal grande; ¿cómo decidir?
- Tecnología dice que la feature solicitada es imposible en el tiempo pedido; ¿cómo mediar?
- El CEO quiere cambiar el roadmap por una idea nueva; ¿cómo evaluar y responder?
Para cada caso: qué datos recopilo, qué análisis hago con IA y cómo presento la recomendación.

**Instrucción 5 — Revisión de producto trimestral:**
Diseña la estructura de una revisión de producto trimestral (QBR de producto) que incluya: qué apostamos al inicio del quarter, qué resultados obtuvimos, qué aprendimos y cómo ajustamos la estrategia para el próximo trimestre.

Termina con los 6 errores más comunes al priorizar un roadmap de producto y cómo evitarlos con datos e IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Priorizar el roadmap de producto, gestionar stakeholders y tomar decisiones estratégicas de build/buy/partner con datos.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para decisiones estratégicas de talento y workforce planning',
                'description'      => 'Usa IA para analizar datos de personas, predecir rotación, optimizar la fuerza laboral y tomar decisiones de talento estratégicas que alineen al equipo humano con los objetivos de negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief People Officer con experiencia en people analytics, workforce planning y toma de decisiones estratégicas de talento basadas en datos. Quiero construir un sistema de decisión de RRHH que sea objetivo, basado en evidencia y que ayude a la organización a tener siempre el talento correcto en el lugar correcto.

**Mi contexto:**
Soy Director/a de RRHH o Head of People de una empresa de 50-500 personas. Tengo acceso a datos de desempeño, encuestas de clima, datos de nómina, métricas de reclutamiento y tasas de rotación. Necesito convertir esos datos en decisiones estratégicas que impacten al negocio.

**Instrucción 1 — Dashboard de people analytics ejecutivo:**
Diseña la estructura de un dashboard de personas para el comité directivo que incluya:
- Salud organizacional: engagement score, eNPS, tasa de rotación voluntaria e involuntaria
- Eficiencia de reclutamiento: time-to-hire, quality of hire, costo por contratación
- Desempeño y desarrollo: distribución de ratings, tasa de promoción interna, gap de habilidades críticas
- Predicción: empleados en riesgo de fuga, departamentos con riesgo de desabastecimiento de talento

**Instrucción 2 — Modelo predictivo de rotación:**
Crea una metodología para identificar con IA qué empleados tienen mayor riesgo de abandonar la empresa en los próximos 6 meses, analizando:
- Señales tempranas de desenganche (absentismo, participación en proyectos, feedback de managers)
- Factores de riesgo estructurales (tiempo sin promoción, brecha salarial con el mercado, falta de desarrollo)
- Cómo segmentar por nivel de riesgo e impacto para el negocio
- Intervenciones diferenciadas por segmento de riesgo

**Instrucción 3 — Análisis de workforce planning what-if:**
Para las siguientes decisiones estratégicas de personas, dame un marco de análisis:
- ¿Contratar vs desarrollar internamente para una capacidad crítica emergente?
- ¿Reorganizar equipos vs crear un nuevo equipo especializado?
- ¿Implementar trabajo remoto, híbrido o presencial total y cuál es el impacto en productividad y retención?
- ¿Ajustar la banda salarial de un rol crítico para ser más competitivos en el mercado?

**Instrucción 4 — Decisiones de desempeño basadas en datos:**
Diseña un proceso de evaluación de desempeño basado en datos que reduzca el sesgo del evaluador, incluya múltiples fuentes de evidencia y llegue a decisiones de compensación, promoción y desarrollo que el empleado perciba como justas y transparentes.

**Instrucción 5 — Reporting estratégico de personas para el CEO:**
Crea una plantilla de informe trimestral de personas para el CEO y el board que transforme métricas de RRHH en impacto de negocio: cuánto costó la rotación este trimestre, cuánto valor generó la inversión en desarrollo, y cuál es el ROI estimado de las iniciativas de personas.

Termina con los 5 datos de personas más predictivos del rendimiento financiero de una empresa, con estudios y evidencia que respalden cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Tomar decisiones de talento estratégicas con people analytics, predicción de rotación y workforce planning basado en datos.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para análisis financiero y decisiones de inversión estratégica',
                'description'      => 'Usa IA para construir modelos financieros dinámicos, analizar escenarios de inversión, generar reporting ejecutivo automatizado y tomar decisiones financieras estratégicas con mayor velocidad y precisión.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO o director financiero con experiencia en FP&A (Financial Planning & Analysis), modelado financiero avanzado y toma de decisiones de inversión estratégicas. Quiero construir un sistema de inteligencia financiera con IA que me permita analizar más rápido, reducir el margen de error y comunicar decisiones con mayor claridad al comité directivo.

**Mi contexto:**
Soy CFO, controller o director financiero de una empresa con ingresos entre 5M y 100M EUR. Tengo datos históricos de P&L, balance, flujo de caja, presupuesto vs real y pipeline de inversiones. Necesito convertir esa información en decisiones estratégicas de capital y operaciones.

**Instrucción 1 — Dashboard financiero ejecutivo con IA:**
Diseña la estructura de un dashboard financiero para el board que incluya:
- Estado de negocio: ingresos, EBITDA, flujo de caja libre, deuda neta con semáforo de alerta
- Presupuesto vs real: variaciones por línea de negocio con análisis de causa raíz automatizado
- Runway y liquidez: proyección de tesorería a 12 meses con tres escenarios
- Indicadores adelantados: pipeline de ventas, tasa de cobro, rotación de inventario

**Instrucción 2 — Modelado de escenarios financieros what-if:**
Para las siguientes decisiones estratégicas, dame plantillas de análisis financiero:
- Invertir en una nueva línea de negocio: TIR, VAN, payback period y análisis de sensibilidad
- Contratar 10 personas más vs subcontratar vs automatizar: costo total y ROI a 3 años
- Abrir un nuevo mercado o país: inversión requerida, breakeven y riesgo de tipo de cambio
- Realizar una adquisición vs crecer orgánicamente: múltiplos, sinergias y dilución esperada
Para cada caso: supuestos clave, variables de sensibilidad y criterios de go/no-go.

**Instrucción 3 — Automatización del ciclo de reporting:**
Crea un protocolo para usar IA y reducir el tiempo del ciclo de cierre mensual de 10 días a 5, incluyendo:
- Automatización de conciliaciones y validaciones de datos
- Generación automática de variaciones y narrativa de resultados
- Preparación del pack de board con datos y comentarios en borrador
- Control de calidad y revisión final eficiente

**Instrucción 4 — Gestión del riesgo financiero con IA:**
Diseña un sistema de identificación y monitorización de riesgos financieros que incluya:
- Riesgos de concentración de clientes, proveedores o divisas
- Señales de alerta temprana de problemas de liquidez
- Análisis de sensibilidad del EBITDA ante cambios en variables macro
- Planes de contingencia por escenario de riesgo

**Instrucción 5 — Comunicación financiera para audiencias no financieras:**
Crea una guía para traducir los datos financieros en lenguaje de negocio que entiendan los directores de marketing, ventas y operaciones, incluyendo qué métricas compartir con cada área y cómo conectar la salud financiera con las decisiones operativas del día a día.

Termina con los 7 ratios financieros que todo directivo no financiero debería entender y cómo interpretarlos para tomar mejores decisiones en su área.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir modelos financieros, analizar inversiones y generar reporting ejecutivo automatizado con IA para decisiones estratégicas.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para decisiones legales estratégicas y análisis de riesgo jurídico',
                'description'      => 'Aprende a usar IA para analizar riesgos legales, evaluar decisiones estratégicas con implicaciones jurídicas, construir dashboards de compliance y comunicar el riesgo legal al comité directivo de forma accionable.',
                'prompt_content'   => <<<'EOT'
Actúa como un General Counsel o director jurídico con experiencia en gestión de riesgo legal estratégico, compliance corporativo y asesoramiento al comité directivo. Quiero construir un sistema de inteligencia legal con IA que me permita pasar de ser un departamento reactivo a uno estratégico y preventivo.

**Mi contexto:**
Soy director jurídico, General Counsel o abogado senior de empresa (in-house) en una organización de 100-1000 personas. Gestiono contratos, compliance, litigios, regulación sectorial y asesoramiento a negocio. Necesito convertir el riesgo legal en información estratégica que el board pueda entender y usar para tomar mejores decisiones.

**Instrucción 1 — Dashboard de riesgo legal para el comité directivo:**
Diseña la estructura de un dashboard de riesgo legal que incluya:
- Mapa de riesgos regulatorios: normativas aplicables, estado de compliance, próximas fechas clave
- Cartera de litigios: número, exposición económica total, probabilidad de éxito, provisiones recomendadas
- Contratos críticos: vencimientos próximos, cláusulas de riesgo, renovaciones pendientes
- Alertas regulatorias: cambios normativos en los próximos 90 días que afecten al negocio

**Instrucción 2 — Análisis legal de decisiones estratégicas:**
Para las siguientes decisiones de negocio, dame un protocolo de análisis de riesgo legal con IA:
- Entrar en un nuevo mercado o país: riesgos regulatorios, licencias necesarias, barreras legales
- Firmar un contrato de partnership estratégico: cláusulas de riesgo, responsabilidad, salidas
- Lanzar un nuevo producto o servicio: compliance de datos (GDPR), regulación sectorial, propiedad intelectual
- Adquisición o fusión: due diligence legal prioritaria, riesgos ocultos, integraciones complejas
Para cada caso: lista de preguntas legales clave, documentación a revisar y señales de alerta.

**Instrucción 3 — Gestión de contratos con inteligencia aumentada:**
Crea un sistema de gestión de contratos asistido por IA que incluya:
- Extracción automática de cláusulas clave: precio, duración, penalizaciones, exclusividad, rescisión
- Scoring de riesgo contractual en una escala del 1 al 10 con justificación
- Resumen ejecutivo de cualquier contrato en menos de una página
- Alertas proactivas de vencimientos y hitos contractuales

**Instrucción 4 — Reporting de compliance al board:**
Diseña una plantilla de informe trimestral de compliance para el consejo de administración que incluya: estado regulatorio por área, incidentes de compliance del trimestre, inversión en gestión del riesgo legal y recomendaciones estratégicas. Que sea comprensible para consejeros sin formación jurídica.

**Instrucción 5 — Priorización del trabajo jurídico con datos:**
Dame un sistema para priorizar el trabajo del departamento jurídico según: impacto económico del riesgo, urgencia regulatoria, impacto estratégico en el negocio y costo de oportunidad de no actuar. Incluye cómo comunicar esas prioridades a la dirección cuando los recursos jurídicos son limitados.

Termina con los 5 riesgos legales estratégicos que más ignoran las empresas en crecimiento y cómo la IA puede ayudar a detectarlos y gestionarlos antes de que se conviertan en crisis.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir dashboards de riesgo legal, analizar decisiones estratégicas con IA y comunicar el riesgo jurídico al comité directivo.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para decisiones de retención de clientes con datos de experiencia',
                'description'      => 'Usa IA para analizar datos de soporte, encuestas de satisfacción y señales de comportamiento para predecir churn, identificar oportunidades de upsell y tomar decisiones estratégicas que maximicen la retención y el valor del cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success con experiencia en customer analytics, gestión del ciclo de vida del cliente y toma de decisiones basadas en datos de experiencia. Quiero construir un sistema de decisión de retención de clientes que sea proactivo, basado en evidencia y directamente conectado con los objetivos de negocio.

**Mi contexto:**
Soy director/a de Customer Success, Head of Support o responsable de retención en una empresa SaaS o de servicios con base de clientes recurrente. Tengo acceso a datos de tickets de soporte, NPS, encuestas de satisfacción, uso del producto y métricas de renovación. Necesito convertir esos datos en decisiones estratégicas que reduzcan el churn y aumenten el LTV.

**Instrucción 1 — Dashboard de salud de clientes con IA:**
Diseña la estructura de un dashboard de customer health que incluya:
- Health score por cliente: composición de la fórmula, variables que lo alimentan y umbrales de alerta
- Segmentación de riesgo: clientes en riesgo crítico, moderado y sano con número y revenue en cada categoría
- Señales de expansión: clientes con potencial de upsell/cross-sell identificados por comportamiento
- Métricas de éxito del equipo: tasa de renovación, NRR (Net Revenue Retention), tiempo de resolución de escalaciones

**Instrucción 2 — Modelo predictivo de churn:**
Crea una metodología para predecir con IA qué clientes tienen mayor probabilidad de no renovar en los próximos 90 días, analizando:
- Señales de desenganche en el producto: reducción de uso, acciones no realizadas, features ignoradas
- Señales relacionales: disminución de respuesta a comunicaciones, escalaciones recientes, cambio de interlocutor
- Señales contextuales: cambios en la empresa cliente, noticias negativas del sector, fusiones
Dame un protocolo de intervención diferenciado por nivel de riesgo y tamaño de cuenta.

**Instrucción 3 — Análisis what-if de estrategias de retención:**
Para las siguientes decisiones de retención, dame un marco de análisis de impacto:
- Ofrecer descuento preventivo vs invertir en servicio premium para clientes en riesgo
- Asignar un CSM dedicado vs atención digital escalable para segmentos medianos
- Lanzar un programa de onboarding mejorado vs optimizar el soporte reactivo
Para cada opción: costo, impacto esperado en retención, efecto en NRR y criterios de éxito.

**Instrucción 4 — Voice of Customer con IA:**
Diseña un sistema de análisis de feedback de clientes con IA que procese tickets de soporte, respuestas de NPS, entrevistas de churn y reseñas en G2/Capterra, para extraer: los 5 problemas más frecuentes, las 3 solicitudes de features más demandadas, el sentiment por segmento de cliente y las oportunidades de mejora con mayor impacto en retención.

**Instrucción 5 — QBR de clientes con inteligencia de datos:**
Crea la estructura de una revisión trimestral de negocio (QBR) con un cliente clave que use datos para demostrar valor entregado, identificar oportunidades de expansión y reforzar la relación estratégica. Incluye la narrativa, los datos que debo preparar y cómo manejar un QBR cuando los resultados del cliente no fueron los esperados.

Termina con las 7 métricas de customer success que tienen mayor correlación con la renovación de contratos y cómo interpretarlas para actuar antes de que sea tarde.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Predecir churn, analizar datos de satisfacción y tomar decisiones estratégicas de retención de clientes con IA.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para decisiones de negocio y pricing estratégico como freelancer',
                'description'      => 'Aprende a usar IA para analizar tus datos de negocio como freelancer, tomar decisiones de pricing informadas, identificar qué clientes y servicios son más rentables y construir una estrategia de crecimiento basada en evidencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en freelancers y solopreneurs con experiencia en pricing estratégico, análisis de rentabilidad y toma de decisiones basadas en datos. Quiero construir un sistema de inteligencia de negocio personal con IA que me permita tomar mejores decisiones sobre mis clientes, servicios y tarifas.

**Mi contexto:**
Soy freelancer con 2-8 años de experiencia. Tengo historial de proyectos, datos de ingresos por cliente y tipo de proyecto, tiempos reales vs estimados, y feedback de clientes. Necesito analizar esa información para tomar decisiones estratégicas que aumenten mi rentabilidad y bienestar sin trabajar más horas.

**Instrucción 1 — Dashboard de negocio personal con IA:**
Diseña la estructura de un dashboard de freelancer que incluya:
- Rentabilidad real: ingresos por hora efectiva trabajada por proyecto, cliente y tipo de servicio
- Concentración de riesgo: porcentaje de ingresos por cliente (alerta si un cliente supera el 30%)
- Utilización y capacidad: horas facturadas vs horas disponibles, proyección del mes
- Pipeline de trabajo: proyectos confirmados, en negociación y potenciales con revenue esperado

**Instrucción 2 — Análisis de pricing estratégico:**
Ayúdame a tomar las siguientes decisiones de pricing con datos:
- ¿Cuánto debería subir mi tarifa el próximo año y a qué ritmo?
- ¿Qué proyectos debería dejar de aceptar porque no son rentables?
- ¿Cuándo vale la pena hacer descuento y cuándo debo mantener el precio?
- ¿Cómo estructurar paquetes de servicios para aumentar el ticket promedio sin aumentar horas?
Para cada decisión: qué datos necesito, cómo analizarlos con IA y qué criterio usar para decidir.

**Instrucción 3 — Análisis de rentabilidad por tipo de cliente:**
Crea una metodología para segmentar a mis clientes actuales y pasados por: rentabilidad por hora, facilidad de trabajo y comunicación, potencial de proyectos recurrentes y referidos generados. El objetivo es identificar con cuál tipo de cliente debo enfocar mi marketing y cuáles debo dejar de aceptar gradualmente.

**Instrucción 4 — Decisiones de inversión en el negocio:**
Para las siguientes decisiones de inversión como freelancer, dame un marco de análisis de ROI:
- Comprar un curso o formación avanzada: cómo calcular el retorno esperado
- Invertir en herramientas de productividad o automatización: payback period y ahorro de horas
- Subcontratar parte del trabajo para escalar: cuándo tiene sentido y qué riesgos gestionar
- Crear un producto digital o curso propio: inversión de tiempo, revenue potencial y riesgo

**Instrucción 5 — Planificación estratégica anual del negocio:**
Diseña el proceso de planificación anual de un freelancer que incluya: revisión de resultados del año anterior, análisis de tendencias del mercado en mi nicho, definición de objetivos de ingresos y trabajo, estrategia de captación de clientes y plan de desarrollo de habilidades para mantener la relevancia y el precio.

Termina con los 8 datos que todo freelancer debería registrar en cada proyecto para poder tomar mejores decisiones de negocio en el futuro, y cómo organizarlos de forma simple con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar rentabilidad, tomar decisiones de pricing y construir una estrategia de negocio basada en datos como freelancer.',
                'vote_score'       => 37,
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
