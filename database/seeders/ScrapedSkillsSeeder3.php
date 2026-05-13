<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScrapedSkillsSeeder3 extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [

            // ── VENTAS ─────────────────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Generador de mensajes de outreach con trigger de evento empresarial',
                'description' => 'Convierte eventos públicos de una empresa (rondas de financiación, contrataciones, adquisiciones, expansión) en mensajes de outreach hiperpersonalizados que conectan el evento con un problema que tu producto resuelve. Elimina el outreach genérico que nadie responde.',
                'prompt_content' => "Actúa como un SDR de élite especializado en outreach basado en señales de mercado, con un ratio de respuesta superior al 30% en secuencias en frío.\n\nDatos del prospecto:\n- Nombre y cargo: [NOMBRE] — [CARGO]\n- Empresa: [EMPRESA]\n- Evento reciente detectado: [RONDA DE FINANCIACIÓN / EXPANSIÓN / NUEVA CONTRATACIÓN / ADQUISICIÓN / LANZAMIENTO DE PRODUCTO]\n- Detalles del evento: [DESCRIPCIÓN DEL EVENTO]\n- Tu producto/servicio en 1 frase: [QUÉ HACES]\n- Principal problema que resuelves: [PAIN POINT]\n- Canal de contacto: [EMAIL / LINKEDIN / WHATSAPP]\n\nGenera una secuencia de 3 mensajes basados en el evento:\n\n## MENSAJE 1 — APERTURA (día 1)\nConecta el evento con el problema que resuelves sin mencionar el producto.\n- Asunto (email) o primera línea (LinkedIn): referencia directa al evento\n- Body: ≤120 palabras. Felicita + observación inteligente sobre el reto que probablemente tienen ahora → pregunta que invita a responder\n- NO menciones el producto en este mensaje\n\n## MENSAJE 2 — VALOR (día 5)\nCompartir algo genuinamente útil relacionado con su situación.\n- Asunto / primera línea: diferente al primer mensaje\n- Body: ≤100 palabras. Recurso útil (caso de éxito, dato de mercado, insight) + conexión sutil con tu solución\n\n## MENSAJE 3 — PROPUESTA DIRECTA (día 12)\nSer directo con la propuesta de valor.\n- Asunto / primera línea: urgencia o curiosidad\n- Body: ≤80 palabras. Propuesta de valor concreta + CTA de baja fricción (15 minutos, no 'demo completa')\n\n## VARIANTE FALLBACK\nSi no hay evento reciente disponible, genera los 3 mensajes usando en su lugar una tendencia de la industria [INDUSTRIA DEL PROSPECTO] que sea relevante para el problema que resuelves.\n\n## ANÁLISIS POST-ENVÍO\nQué métricas monitorizar para cada mensaje y cuándo pivotar a otro canal si no hay respuesta.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Cuando detectas en LinkedIn, Crunchbase o Google Alerts que un prospecto acaba de hacer algo relevante (cerrar ronda, abrir oficina, contratar VP) y quieres convertirlo en una conversación real.',
                'vote_score' => 438,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Analizador de pipeline: identifica deals en riesgo y próximos pasos',
                'description' => 'Analiza tu pipeline de ventas completo, clasifica los deals por probabilidad real de cierre (no el stage del CRM), detecta los que están estancados y genera un plan de acción concreto para reactivar cada uno.',
                'prompt_content' => "Actúa como un director de ventas con 15 años de experiencia revisando pipelines B2B y que ha cerrado más de 50M€ en contratos enterprise.\n\nMi pipeline actual:\n---\n[PEGA AQUÍ TU PIPELINE: empresa, contacto, valor, stage actual, última actividad, próximo paso en CRM, notas]\n---\n\nContexto adicional:\n- Ciclo de venta medio: [DÍAS]\n- Tamaño medio de deal: [IMPORTE]\n- Quota del trimestre: [IMPORTE]\n- Días restantes en el trimestre: [DÍAS]\n\nRealiza el análisis completo:\n\n## SEMÁFORO DE DEALS\nPara cada deal:\n- 🟢 EN CARRIL: probabilidad real, por qué, qué hacer para acelerar\n- 🟡 EN RIESGO: señales de alerta detectadas, probabilidad ajustada\n- 🔴 ESTANCADO: último movimiento hace cuándo, qué pasó, probabilidad real vs. CRM\n\n## TOP 3 DEALS A PRIORIZAR ESTA SEMANA\nLos 3 con mayor probabilidad de cerrar × mayor valor. Para cada uno:\n- Próximo paso concreto (acción, quién, cuándo)\n- Posible obstáculo y cómo neutralizarlo\n- Mensaje de seguimiento listo para enviar\n\n## DEALS A RESCATAR\nLos 2-3 deals estancados con más valor. Para cada uno:\n- Diagnóstico: ¿por qué se paró?\n- Táctica de reactivación (cambio de stakeholder, nuevo ángulo, recurso de valor)\n- Mensaje de reactivación listo para enviar\n\n## FORECAST AJUSTADO\n- Probabilidad ponderada de llegar a quota este trimestre\n- Gap vs. quota y de dónde puede venir si lo hay\n- Recomendación: ¿hay que abrir más pipeline o cerrar el existente?\n\n## PLAN DE LA SEMANA\nCalendario de 5 días con las 2-3 acciones más importantes cada día, priorizadas por impacto en quota",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'En la revisión semanal de pipeline, antes de la reunión con el manager o cuando a mitad de trimestre sientes que el forecast no cuadra.',
                'vote_score' => 512,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Constructor de battle cards para vencer a competidores en demos',
                'description' => 'Genera battle cards detalladas para competidores específicos: sus fortalezas reales, tus ventajas objetivas, cómo manejar comparaciones en vivo y frases exactas para responder objeciones del tipo "pero [competidor] tiene X".',
                'prompt_content' => "Actúa como un product marketing manager especializado en competitive intelligence con experiencia en ventas B2B SaaS.\n\nContexto:\n- Tu producto: [NOMBRE Y DESCRIPCIÓN BREVE]\n- Competidor a analizar: [NOMBRE DEL COMPETIDOR]\n- Segmento objetivo (el tuyo): [ICP]\n- Deals recientes perdidos contra este competidor: [DESCRIBE 2-3 SITUACIONES SI LAS TIENES O ESCRIBE 'desconocido']\n- Tus principales diferenciadores: [LISTA]\n\nGenera la battle card completa:\n\n## PERFIL DEL COMPETIDOR\n- Quiénes son sus clientes típicos (ICP real vs. tu ICP)\n- Sus 3 fortalezas reales (sé honesto — esto es para uso interno)\n- Sus 3 debilidades estructurales\n- Su posicionamiento de precio: [más caro / similar / más barato] y por qué\n\n## CUÁNDO GANAMOS Y CUÁNDO PERDEMOS\n🏆 Escenarios donde SIEMPRE ganamos (3-4 situaciones concretas)\n⚠️ Escenarios donde es 50/50 y qué hace la diferencia\n🚫 Escenarios donde probablemente perdemos y cómo reconocerlos temprano\n\n## PREGUNTAS DE DISCOVERY PARA DESCALIFICARLOS\n5 preguntas que revelan si el prospecto está mirando al competidor y qué valoran más, para redirigir la conversación.\n\n## MANEJO DE OBJECIONES EN VIVO\nPara cada objeción típica, respuesta lista para usar:\n- \"[Competidor] tiene más integraciones\" → [RESPUESTA]\n- \"[Competidor] es más barato\" → [RESPUESTA]\n- \"[Competidor] lleva más años en el mercado\" → [RESPUESTA]\n- \"Ya usamos [competidor] y estamos contentos\" → [RESPUESTA]\n- \"[Competidor] tiene mejor [FEATURE ESPECÍFICO]\" → [RESPUESTA]\n\n## MINADO DE INSATISFACCIÓN\n3 preguntas para detectar si un cliente actual del competidor tiene fisuras de insatisfacción que no expresa abiertamente.\n\n## FRASES EXACTAS PARA LA DEMO\n5 frases para usar durante una demo cuando sabes que están comparando con este competidor, que refuerzan tus ventajas sin atacar.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Cuando pierdes deals repetidamente contra el mismo competidor, al incorporar a un nuevo vendedor o antes de una demo donde sabes que el prospecto también está evaluando a la competencia.',
                'vote_score' => 467,
            ],

            // ── PRODUCT MANAGEMENT ─────────────────────────────────────────
            [
                'profession' => 'product-management',
                'title' => 'Escritor de PRDs completos con criterios de aceptación y edge cases',
                'description' => 'Genera un Product Requirements Document completo y listo para desarrollo: desde el problema de negocio hasta los criterios de aceptación, edge cases, dependencias técnicas y métricas de éxito. Elimina la ambigüedad que genera retrabajo entre producto e ingeniería.',
                'prompt_content' => "Actúa como un senior Product Manager con 10+ años de experiencia escribiendo especificaciones funcionales para equipos de ingeniería de alto rendimiento en empresas como Stripe, Linear o Figma.\n\nFeature a documentar:\n- Nombre de la feature: [NOMBRE]\n- Problema de negocio que resuelve: [DESCRIPCIÓN DEL PROBLEMA]\n- Usuario objetivo: [PERSONA / SEGMENTO]\n- Contexto y origen: [REQUEST DE CLIENTE / DATO DE USO / INICIATIVA ESTRATÉGICA]\n- Restricciones conocidas: [TÉCNICAS, DE TIEMPO, DE NEGOCIO]\n- Qué NO incluye esta iteración (out of scope): [LISTA]\n\nGenera el PRD completo:\n\n## 1. EXECUTIVE SUMMARY (½ página)\n- Problema → Solución → Impacto esperado → Timeline\n\n## 2. CONTEXTO Y MOTIVACIÓN\n- ¿Por qué ahora? Datos o evidencias que justifican la priorización\n- Jobs to Be Done que cubre\n- Impacto en métricas de negocio (revenue, retención, activación, etc.)\n\n## 3. USER STORIES\nFormato: Como [usuario], quiero [acción], para [beneficio]\n- Historia principal (happy path)\n- Historias secundarias (variaciones del happy path)\n- Historias de error (qué pasa cuando falla)\n\n## 4. REQUISITOS FUNCIONALES\nTabla con: ID | Requisito | Prioridad (Must/Should/Could) | Notas\n\n## 5. CRITERIOS DE ACEPTACIÓN\nPara cada historia, criterios en formato Gherkin:\nDado [contexto] → Cuando [acción] → Entonces [resultado esperado]\n\n## 6. EDGE CASES Y ESTADOS ESPECIALES\nLista de situaciones no-estándar que el equipo de ingeniería debe manejar:\n- Estado vacío (empty state)\n- Límites del sistema (rate limits, max items, etc.)\n- Comportamiento offline / con mala conexión\n- Concurrencia (dos usuarios editando simultáneamente)\n- Migración de datos existentes (si aplica)\n\n## 7. DEPENDENCIAS\n- Equipos o features que deben completarse antes\n- APIs de terceros o cambios de backend requeridos\n- Cambios en el diseño de base de datos\n\n## 8. MÉTRICAS DE ÉXITO\n- Métrica primaria: [definición + cómo medirla + objetivo a 30/60/90 días]\n- Métricas secundarias (2-3)\n- Guardrail metrics (qué NO debe empeorar)\n\n## 9. PLAN DE LANZAMIENTO\n- Estrategia de rollout (feature flag, % de usuarios, qué segmento primero)\n- Plan de comunicación interna y externa\n- Cómo vamos a medir el éxito en las primeras 48h",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Al iniciar el desarrollo de una nueva feature, antes de la reunión de refinement con el equipo de ingeniería o cuando hay debate sobre el alcance de algo.',
                'vote_score' => 489,
            ],
            [
                'profession' => 'product-management',
                'title' => 'Priorización de roadmap con RICE + análisis de trade-offs para el board',
                'description' => 'Aplica el framework RICE a tu backlog de iniciativas, genera una puntuación objetiva y produce la narrativa de trade-offs que necesitas para defender las decisiones ante el board, los inversores o el equipo de ventas.',
                'prompt_content' => "Actúa como un VP of Product con experiencia tomando decisiones de priorización con recursos limitados en empresas de Series B/C donde cada sprint cuenta.\n\nMi backlog de iniciativas:\n---\n[PEGA AQUÍ TU LISTA DE FEATURES/PROYECTOS. Para cada uno incluye: nombre, descripción breve, quien lo solicita (cliente, ventas, estrategia), cualquier dato de impacto que tengas]\n---\n\nContexto adicional:\n- Capacidad del equipo este trimestre: [PUNTOS DE HISTORIA o NÚMERO DE INGENIEROS × SEMANAS]\n- Objetivo principal del trimestre: [OKR o MÉTRICA CLAVE]\n- Restricciones importantes: [DEUDA TÉCNICA / CONTRATOS CON FECHAS / REGULACIONES]\n- Features prometidas a clientes enterprise: [LISTA o 'ninguna']\n\nRealiza el análisis completo:\n\n## SCORING RICE\nTabla con todas las iniciativas:\n| Iniciativa | Reach | Impact | Confidence | Effort | RICE Score | Notas |\n\nDefiniciones usadas:\n- Reach: personas impactadas por trimestre\n- Impact: 0.25 (mínimo) / 0.5 / 1 / 2 / 3 (transformacional)\n- Confidence: % basado en evidencia disponible\n- Effort: semanas-persona\n\n## TOP 5 INICIATIVAS PRIORIZADAS\nPara cada una:\n- Por qué sube a arriba del ranking\n- Qué sacrificamos al priorizarla (trade-off explícito)\n- Riesgo principal y mitigación\n\n## LO QUE NO ENTRA ESTE TRIMESTRE\nPara cada iniciativa postergada: explicación de por qué y cuándo sería el momento correcto.\n\n## NARRATIVA PARA EL BOARD\nPárrafo de 150 palabras que explica la lógica de priorización en lenguaje de negocio (no técnico), conectando el roadmap con la estrategia y los objetivos de revenue/retención.\n\n## RESPUESTAS A OBJECIONES TÍPICAS\n- \"¿Por qué no hacemos [feature de ventas] primero?\" → [RESPUESTA]\n- \"Los competidores ya tienen [X]\" → [RESPUESTA]\n- \"Un cliente enterprise lo necesita\" → [RESPUESTA CON CRITERIO DE CUÁNDO SÍ ES VÁLIDO]\n\n## REVISIÓN EN 6 SEMANAS\nQué datos/eventos harían que cambiaras estas prioridades",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'En la planificación trimestral, antes de la reunión de roadmap con el CEO o cuando ventas y producto están en desacuerdo sobre qué construir.',
                'vote_score' => 523,
            ],

            // ── FINANZAS ──────────────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Analizador de desviaciones presupuestarias con narrativa para el comité',
                'description' => 'Analiza las desviaciones entre presupuesto y real de tu P&L, identifica las causas raíz (no solo las líneas que se desviaron), y genera la narrativa ejecutiva lista para presentar al comité directivo o al board.',
                'prompt_content' => "Actúa como un CFO con experiencia en FP&A para empresas tech de 50-500 empleados que ha presentado más de 40 board reviews.\n\nDatos financieros:\n---\n[PEGA AQUÍ TU P&L COMPARATIVO: columnas Budget vs. Actual vs. Varianza (€ y %) por línea de cuenta]\n---\n\nContexto:\n- Periodo: [MES / TRIMESTRE / AÑO]\n- Empresa/unidad de negocio: [NOMBRE]\n- Revenue model: [SaaS / Servicios / Marketplace / Mixto]\n- Eventos significativos del periodo: [LANZAMIENTOS, CONTRATACIONES CLAVE, PROBLEMAS OPERATIVOS, CAMBIOS DE ESTRATEGIA]\n- Umbral de materialidad para explicar: [PORCENTAJE O IMPORTE MÍNIMO]\n\nGenera el análisis completo:\n\n## SEMÁFORO DE DESVIACIONES\nTabla: Línea | Budget | Actual | Var € | Var % | Semáforo | Prioridad de explicación\n(🟢 dentro de umbral / 🟡 atención / 🔴 acción requerida)\n\n## ANÁLISIS DE CAUSA RAÍZ\nPara cada desviación material (🟡 y 🔴):\n- **Causa primaria**: qué pasó exactamente\n- **Causa subyacente**: por qué pasó (sistémica vs. puntual)\n- **¿Era evitable?**: sí/no y por qué\n- **¿Se repetirá?**: impacto en el forecast del resto del año\n\n## NARRATIVA EJECUTIVA (para el board)\nResumen de 200 palabras en lenguaje de negocio:\n- Resultado general del periodo en contexto estratégico\n- 3 factores principales de la desviación\n- Acciones correctoras en curso\n- Expectativa para el resto del año\n(Sin jerga contable — escribe para un CEO o inversor no financiero)\n\n## ACCIONES CORRECTORAS\nTabla: Acción | Responsable | Fecha límite | Impacto esperado (€) | Estado\n\n## FORECAST ACTUALIZADO\nImpacto de las desviaciones en el forecast anual:\n- Escenario base: [nuevo forecast con estas desviaciones]\n- Escenario conservador: si las desviaciones negativas continúan\n- Escenario optimista: si se ejecutan las acciones correctoras\n\n## PREGUNTAS QUE HARÁ EL BOARD\n5 preguntas difíciles que probablemente harán, con respuestas preparadas",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Al cierre mensual o trimestral, antes del board meeting o cuando el CEO pregunta "¿por qué no llegamos al EBITDA?".',
                'vote_score' => 534,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Constructor de modelo de cohortes para análisis de retención y LTV',
                'description' => 'Genera un análisis de cohortes completo a partir de datos de clientes: retención por cohorte, LTV por segmento, payback period y las palancas de negocio que más impactan la economía unitaria.',
                'prompt_content' => "Actúa como un analista de FP&A especializado en modelos de economía unitaria para empresas SaaS y subscription, con experiencia presentando análisis de cohortes a fondos de venture capital.\n\nDatos disponibles:\n---\n[PEGA AQUÍ TUS DATOS DE CLIENTES: fecha de adquisición, MRR o revenue, fecha de churn si aplica, segmento, canal de adquisición — puede ser CSV o tabla]\n---\n\nContexto:\n- Modelo de negocio: [SaaS mensual / anual / marketplace / ecommerce]\n- Periodo de datos: [FECHA INICIO — FECHA FIN]\n- Coste de adquisición (CAC) por canal si lo tienes: [CANAL: €X]\n- Segmentos de clientes: [LISTA O 'sin segmentación']\n\nGenera el análisis completo:\n\n## TABLA DE RETENCIÓN POR COHORTE\nMatriz mes/cohorte con % de clientes activos en cada periodo.\nIdentifica: cohortes con mejor y peor retención, en qué mes se produce el mayor churn.\n\n## ANÁLISIS DE LTV\nPor segmento/canal si hay datos suficientes:\n- LTV a 12 meses\n- LTV a 24 meses\n- LTV proyectado (extrapolado de la curva de retención)\n- Ratio LTV/CAC: ¿qué canales tienen economía sana (>3x)?\n\n## PAYBACK PERIOD\nMeses necesarios para recuperar el CAC por cohorte y canal.\nSemáforo: 🟢 <12 meses / 🟡 12-18 meses / 🔴 >18 meses\n\n## PALANCAS DE MEJORA\nPriorizadas por impacto en LTV:\n1. Reducción de churn en mes [X] (mayor oportunidad detectada)\n2. Expansión de revenue en clientes existentes\n3. Optimización de CAC por canal\nPara cada palanca: impacto estimado en LTV si mejoras 10%\n\n## NARRATIVA PARA INVERSORES\nPárrafo de 150 palabras explicando la salud de la economía unitaria y la tendencia de mejora.\n\n## SEÑALES DE ALARMA\nPatrones en los datos que indican riesgo: cohortes más recientes con peor retención, expansión negativa (contraction MRR), concentración de revenue en pocos clientes.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Al preparar un board deck con métricas de negocio, en due diligence de una ronda de inversión o cuando el CEO pregunta "¿cuánto vale un cliente?".',
                'vote_score' => 478,
            ],

            // ── DISEÑO ────────────────────────────────────────────────────
            [
                'profession' => 'diseno',
                'title' => 'Planificador de sesiones de user research con guía de entrevistas',
                'description' => 'Diseña un plan completo de investigación de usuarios: objetivos, criterios de reclutamiento, guía de entrevista semiestructurada y framework de síntesis para extraer insights accionables en menos tiempo.',
                'prompt_content' => "Actúa como un UX researcher senior con experiencia en research para productos digitales B2B y B2C, habiendo conducido más de 300 entrevistas en profundidad.\n\nContexto de la investigación:\n- Producto/feature a investigar: [DESCRIPCIÓN]\n- Pregunta de investigación principal: [QUÉ NECESITAS SABER]\n- Hipótesis a validar o refutar: [TUS SUPOSICIONES ACTUALES]\n- Tipo de usuarios objetivo: [DESCRIPCIÓN DEL PERFIL]\n- Decisión de producto que depende de este research: [QUÉ VAS A DECIDIR CON LOS RESULTADOS]\n- Tiempo disponible por sesión: [MINUTOS]\n- Número de participantes presupuestados: [Nº]\n\nGenera el plan completo de research:\n\n## OBJETIVOS DE INVESTIGACIÓN\n3 objetivos específicos y medibles en formato: \"Entender [X] para poder [Y]\"\n\n## CRITERIOS DE RECLUTAMIENTO\n- Perfil must-have (excluyente)\n- Perfil nice-to-have\n- Criterios de exclusión\n- Mix recomendado (experiencia, uso, segmento)\n- Screener de 5 preguntas para filtrar participantes\n\n## GUÍA DE ENTREVISTA SEMIESTRUCTURADA\n\n**Opening (5 min):** Presentación + acuerdo de grabación + contexto\n\n**Warm-up (5 min):** 3 preguntas para que el participante se sienta cómodo hablando de su trabajo y contexto\n\n**Core questions (30-40 min):**\nAgrupadas por tema, ordenadas de lo general a lo específico:\n\nTema 1: [COMPORTAMIENTO ACTUAL]\n- Pregunta principal\n- Sondas: \"¿Puedes contarme más sobre eso?\", \"¿Qué pasó después?\"\n\nTema 2: [NECESIDAD/PAIN POINT]\n- Pregunta principal + sondas\n\nTema 3: [EVALUACIÓN DE CONCEPTO O FEATURE]\n- Pregunta principal + sondas\n\n**Closing (5 min):** Pregunta abierta de cierre + siguiente paso\n\n## TÉCNICAS DE SONDEO\n5 técnicas para cuando el participante da respuestas superficiales, con ejemplo de frase para cada una.\n\n## FRAMEWORK DE SÍNTESIS\nCómo organizar los hallazgos:\n- Template de notas durante la sesión\n- Categorías de afinidad para el análisis\n- Formato del insight report: observación → evidencia → implicación para el producto\n\n## SEÑALES DE ALERTA\n3 sesgos comunes en entrevistas de usuario y cómo evitarlos durante la sesión.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Al iniciar el descubrimiento de una nueva feature, antes de un rediseño significativo o cuando el equipo tiene hipótesis contradictorias sobre lo que quieren los usuarios.',
                'vote_score' => 412,
            ],

            // ── RRHH ──────────────────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Diseñador de proceso de onboarding de 90 días para nuevas incorporaciones',
                'description' => 'Genera un plan de onboarding completo y estructurado para los primeros 90 días de un nuevo empleado: desde la preincoporación hasta la autonomía plena, con checkpoints, responsables y métricas de éxito.',
                'prompt_content' => "Actúa como una Head of People con experiencia diseñando programas de onboarding en empresas de crecimiento rápido (50-500 empleados) donde la velocidad hasta la productividad es crítica.\n\nContexto de la incorporación:\n- Cargo: [TÍTULO DEL PUESTO]\n- Departamento: [ÁREA]\n- Nivel: [JUNIOR / MID / SENIOR / MANAGER / DIRECTOR]\n- Modalidad de trabajo: [PRESENCIAL / REMOTO / HÍBRIDO]\n- Gestor directo: [CARGO DEL MANAGER]\n- Principales responsabilidades del rol: [LISTA]\n- Herramientas y sistemas que usará: [LISTA]\n- Mayor riesgo de fracaso en este rol: [QUÉ SUELE IR MAL EN LOS PRIMEROS MESES]\n\nGenera el plan de onboarding completo:\n\n## PRE-INCORPORACIÓN (días -7 a 0)\nQué debe pasar antes de que llegue:\n- Checklist de IT y accesos\n- Email de bienvenida (borrador incluido)\n- Documentación a preparar\n- Mensaje del buddy/manager el día anterior\n\n## DÍA 1 — PRIMERAS IMPRESIONES\nAgenda hora por hora del primer día:\n- Bienvenida y quién la da\n- Presentaciones clave\n- Quick wins: qué debe lograr el primer día para sentirse útil\n- Qué NO hacer el día 1 (errores comunes)\n\n## SEMANA 1 — ORIENTACIÓN (días 2-5)\n- Reuniones obligatorias y con quién\n- Documentos y recursos prioritarios a leer\n- Primera tarea concreta y de bajo riesgo\n- Check-in al final de la semana: 5 preguntas para el manager\n\n## MES 1 — COMPRENSIÓN (días 6-30)\n- Objetivos de aprendizaje específicos\n- Stakeholders clave a conocer (con contexto de cada relación)\n- Primera entrega esperada y con qué nivel de supervisión\n- Checkpoint de 30 días: qué debe ser capaz de hacer solo\n\n## MES 2 — CONTRIBUCIÓN (días 31-60)\n- Transición hacia mayor autonomía\n- Primer proyecto con ownership real\n- Feedback estructurado a mitad del periodo de prueba\n- Señales de que va bien / señales de alerta\n\n## MES 3 — AUTONOMÍA (días 61-90)\n- Criterios de éxito para superar el periodo de prueba\n- Evaluación de 90 días: template de preguntas\n- Plan de desarrollo para los próximos 6 meses\n\n## MÉTRICAS DE ONBOARDING\nCómo medir si el onboarding funciona: tiempo hasta primera entrega, NPS del nuevo empleado a los 30/60/90 días, retención a 6 meses.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Al preparar la incorporación de un nuevo empleado, al estandarizar el proceso de onboarding de un departamento o cuando la rotación en los primeros 6 meses es demasiado alta.',
                'vote_score' => 398,
            ],

            // ── LEGAL ────────────────────────────────────────────────────
            [
                'profession' => 'legal',
                'title' => 'Revisor de contratos comerciales: detecta riesgos y propone redacciones alternativas',
                'description' => 'Analiza contratos comerciales (SaaS, servicios, distribución) línea por línea, identifica las cláusulas más arriesgadas para tu posición, las compara con el estándar del mercado y propone redacciones alternativas listas para negociar.',
                'prompt_content' => "Actúa como un abogado mercantilista con 15 años de experiencia revisando contratos B2B en los sectores tech, SaaS y servicios profesionales, con especial experiencia en proteger los intereses de startups y empresas en crecimiento.\n\nContrato a revisar:\n---\n[PEGA AQUÍ EL CONTRATO COMPLETO O LAS CLÁUSULAS A REVISAR]\n---\n\nContexto:\n- Tu posición en el contrato: [PROVEEDOR / CLIENTE / DISTRIBUIDOR / SOCIO]\n- Tipo de contrato: [SaaS / SERVICIOS / DISTRIBUCIÓN / NDA / PARTNERSHIP / OTRO]\n- Importe o valor en juego: [IMPORTE ANUAL APROX.]\n- Duración del contrato: [MESES/AÑOS]\n- País/jurisdicción aplicable: [PAÍS]\n- Punto más crítico para ti: [LO QUE MÁS TE PREOCUPA O 'sin preferencia']\n\nGenera el análisis completo:\n\n## SEMÁFORO DE RIESGO\nPara cada cláusula significativa:\n| Cláusula | Página/Art. | Riesgo para ti | Semáforo | Prioridad |\n🟢 Estándar de mercado, sin cambios necesarios\n🟡 Mejorable, negociar si es posible\n🔴 Cláusula de riesgo alto, cambio necesario\n\n## ANÁLISIS DETALLADO DE CLÁUSULAS CRÍTICAS (🔴 y 🟡)\nPara cada una:\n- **Texto actual:** [cita literal]\n- **Problema:** qué riesgo concreto genera para ti\n- **Estándar de mercado:** cómo suele estar esta cláusula en contratos similares\n- **Redacción alternativa propuesta:** texto listo para enviar a la contraparte\n- **Posición de negociación:** qué puedes ceder y qué es innegociable\n\n## CLÁUSULAS AUSENTES\nCláusulas que normalmente deben estar y no aparecen en este contrato, con el riesgo que genera su ausencia:\n- Limitación de responsabilidad\n- Propiedad intelectual\n- Confidencialidad\n- SLA y penalizaciones\n- Resolución de disputas\n- Cambios en el servicio\n\n## RESUMEN EJECUTIVO PARA EL CEO\nPárrafo de 150 palabras explicando los 3 riesgos principales en lenguaje no legal, y si recomendarías firmar, negociar antes de firmar, o no firmar.\n\n## CHECKLIST DE FIRMA\n5 condiciones que deben cumplirse antes de firmar este contrato\n\n⚠️ *Este análisis es orientativo y no sustituye el asesoramiento jurídico de un abogado colegiado para decisiones finales.*",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Antes de firmar un contrato importante, para hacer una primera revisión rápida antes de enviarlo al abogado externo (ahorra horas de asesoría) o cuando recibes un contrato de un cliente enterprise y necesitas saber qué defender.',
                'vote_score' => 556,
            ],
        ];

        $count = 0;
        foreach ($skills as $data) {
            $profession = Profession::where('slug', $data['profession'])->first();
            if (! $profession) {
                $this->command->warn("Profesión no encontrada: {$data['profession']}");
                continue;
            }

            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->warn("Ya existe: {$slug}");
                continue;
            }

            Skill::create([
                'profession_id'     => $profession->id,
                'user_id'           => $admin->id,
                'title'             => $data['title'],
                'slug'              => $slug,
                'description'       => $data['description'],
                'prompt_content'    => $data['prompt_content'],
                'tool_name'         => $data['tool_name'],
                'difficulty'        => $data['difficulty'],
                'estimated_minutes' => $data['estimated_minutes'],
                'use_case'          => $data['use_case'],
                'status'            => 'published',
                'vote_score'        => $data['vote_score'],
                'views_count'       => rand(300, 4000),
                'saves_count'       => rand(30, 400),
                'version'           => 1,
            ]);
            $count++;
        }

        $this->command->info("✅ ScrapedSkillsSeeder3: {$count} skills importadas.");
    }
}
