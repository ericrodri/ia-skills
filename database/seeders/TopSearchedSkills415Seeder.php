<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills415Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Análisis de sentimiento de marca en redes sociales con IA',
                'description'       => 'Aprende a usar IA para monitorizar y analizar el sentimiento de los usuarios hacia tu marca en tiempo real, identificar tendencias y tomar decisiones de marketing basadas en datos emocionales.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en social listening y análisis de sentimiento de marca. Tu tarea es ayudarme a construir un sistema completo de monitorización de sentimiento con IA para mi marca en redes sociales.

**Contexto de trabajo:**
Gestiono la presencia digital de una marca y necesito entender en profundidad cómo perciben los usuarios nuestros productos, campañas y comunicaciones en Twitter/X, Instagram, LinkedIn y TikTok. El objetivo es pasar de una gestión reactiva a una estrategia proactiva basada en datos de sentimiento.

**Fase 1 — Configuración del sistema de análisis**

Define para mí el marco completo de análisis de sentimiento que debo implementar:

1. Categorías de sentimiento que debo rastrear (positivo, negativo, neutro, y subvariantes emocionales como entusiasmo, frustración, decepción, sorpresa).
2. Palabras clave, hashtags y menciones prioritarias que debo monitorizar.
3. Métricas clave: Net Sentiment Score, Share of Voice emocional, Sentiment Velocity (velocidad de cambio).
4. Frecuencia óptima de análisis: tiempo real, diario, semanal.

**Fase 2 — Análisis de menciones**

Cuando te proporcione un lote de menciones o comentarios de redes sociales (hasta 50 por sesión), analiza cada uno y devuelve:

- Sentimiento predominante y puntuación del -100 al +100.
- Emoción secundaria detectada.
- Intención del usuario: queja, elogio, pregunta, comparación con competencia, solicitud de ayuda.
- Urgencia de respuesta: alta, media, baja.
- Temas o aspectos de la marca mencionados (producto, precio, servicio, entrega, comunicación).
- Cita textual que justifica la clasificación.

Formato de salida: tabla estructurada con una fila por mención.

**Fase 3 — Síntesis de tendencias semanales**

A partir del análisis acumulado, genera un informe semanal de sentimiento que incluya:

- Evolución del sentimiento general vs. semana anterior.
- Top 3 temas que generan más sentimiento positivo.
- Top 3 temas que generan más sentimiento negativo.
- Alertas de crisis emergentes (picos negativos súbitos).
- Segmento de audiencia con mayor sentimiento negativo.
- Recomendaciones concretas de acción para el equipo de marketing.

**Fase 4 — Respuestas y gestión de comunidad**

Para los comentarios negativos que identifiques como urgentes, redacta borradores de respuesta que:

- Reconozcan el problema sin ceder responsabilidad injustificada.
- Ofrezcan una solución o siguiente paso claro.
- Mantengan el tono de voz de la marca (que definirás conmigo en la primera sesión).
- No superen 280 caracteres para Twitter o 150 palabras para otras plataformas.

**Fase 5 — Benchmarking competitivo**

Si te proporciono menciones de marcas competidoras, compara:

- Distribución de sentimiento de mi marca vs. competencia.
- Temas donde el competidor recibe mejor valoración.
- Oportunidades de diferenciación basadas en gaps de sentimiento.

**Instrucciones de uso:**
Empieza preguntándome el nombre de la marca, el sector, las 3 plataformas prioritarias y el tono de voz de la marca. Con esa información, configura el marco personalizado antes de proceder al análisis.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Monitorización de reputación de marca y gestión de comunidad basada en datos de sentimiento',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Análisis de feedback de usuarios en aplicaciones con IA',
                'description'       => 'Usa IA para procesar y categorizar automáticamente el feedback de usuarios de tu app, extraer insights accionables y priorizar mejoras del producto con base en señales emocionales y frecuencia de menciones.',
                'prompt_content'    => <<<'EOT'
Actúa como un analista de producto especializado en procesamiento de feedback de usuarios con técnicas de IA. Tu objetivo es ayudarme a transformar cientos de reseñas, tickets y comentarios en insights estructurados que guíen el desarrollo de mi aplicación.

**Contexto:**
Desarrollamos una aplicación y recibimos feedback de múltiples canales: App Store, Google Play, Intercom, encuestas NPS y comentarios en foros. El volumen es alto (decenas de respuestas por semana) y necesitamos un sistema para procesarlo eficientemente.

**Tarea principal — Clasificación y análisis de feedback**

Cuando te proporcione un bloque de feedback de usuarios (en texto plano, CSV o lista numerada), realiza el siguiente análisis para cada ítem:

1. **Sentimiento:** positivo / negativo / mixto / neutro, con puntuación del 1 al 10.
2. **Categoría de problema o elogio:** rendimiento, UI/UX, funcionalidad, precio, onboarding, soporte, seguridad, integraciones.
3. **Función o flujo específico afectado:** nombra la pantalla, función o flujo concreto si se menciona.
4. **Severidad del problema:** crítico (bloquea uso), importante (afecta experiencia), menor (nitpick).
5. **Solicitud implícita de feature:** extrae si el usuario pide algo nuevo aunque no lo diga explícitamente.
6. **Segmento de usuario probable:** técnico, no técnico, power user, usuario nuevo.

**Síntesis agregada**

Después de procesar el lote completo, genera:

- Distribución de sentimiento general del período.
- Top 5 problemas más mencionados, ordenados por frecuencia y severidad combinada.
- Top 3 funciones más elogiadas (proteger en próximas iteraciones).
- Lista priorizada de features solicitadas por los usuarios.
- Puntuación de Health Score del producto: métrica compuesta que combines sentimiento, severidad y volumen de quejas.

**Generación de tickets accionables**

Para los problemas más críticos identificados, crea automáticamente borradores de tickets en formato estándar:

- Título del problema (máx. 60 caracteres).
- Descripción del bug o mejora.
- Evidencia: citas textuales de usuarios que lo mencionan.
- Criterio de aceptación sugerido.
- Estimación de impacto en retención si se resuelve.

**Análisis de tendencias temporales**

Si te proporciono feedback de varios períodos, compara:

- Evolución del sentimiento semana a semana o sprint a sprint.
- Si los problemas recurrentes se están resolviendo o empeorando.
- Correlación entre releases y cambios de sentimiento.

**Modo de uso:**
Primero dime el nombre de tu app, el tipo de usuarios (B2B, B2C, técnico, no técnico) y los canales de feedback que usas. Luego pega el feedback en crudo y comenzaré el análisis.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Priorización de backlog y mejora de producto basada en feedback real de usuarios',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Análisis de sentimiento en pruebas de usabilidad con IA',
                'description'       => 'Aplica IA para interpretar las respuestas emocionales de participantes en tests de usabilidad, identificar friction points con carga emocional negativa y generar recomendaciones de diseño basadas en evidencia.',
                'prompt_content'    => <<<'EOT'
Actúa como un investigador de UX especializado en análisis de sentimiento aplicado a pruebas de usabilidad. Tu función es ayudarme a extraer insights emocionales y de usabilidad de las sesiones de testing que realizo con usuarios reales.

**Mi contexto:**
Realizo pruebas de usabilidad (entrevistas moderadas, tests en remoto con grabación, encuestas post-tarea) y necesito analizar no solo si los usuarios completan las tareas, sino cómo se sienten durante el proceso para identificar momentos de fricción emocional que los datos de conversión no capturan.

**Análisis de transcripciones de sesión**

Cuando te proporcione la transcripción de una sesión de usabilidad (texto o segmentos de audio transcritos), identifica:

1. **Momentos de fricción emocional:** frases que indiquen confusión, frustración, sorpresa negativa o abandono cognitivo.
2. **Momentos de deleite:** expresiones de satisfacción, eficiencia percibida o confirmación positiva.
3. **Verbalizaciones clave:** citas exactas del usuario que sinteticen el problema de diseño.
4. **Mapa de sentimiento por flujo:** asocia cada emoción detectada con el paso o pantalla específica del flujo de usuario.
5. **Carga cognitiva percibida:** evalúa si el usuario expresa esfuerzo mental excesivo en algún punto.

**Análisis de encuestas post-sesión**

Para respuestas abiertas de encuestas (SUS, UMUX, preguntas cualitativas), clasifica:

- Temas recurrentes de queja o elogio.
- Palabras más asociadas a experiencia negativa vs. positiva.
- Índice de sentimiento por sección o función del producto.

**Síntesis de múltiples sesiones**

Si te proporciono datos de 5 o más sesiones, genera:

- Patrón de sentimiento por pantalla o tarea (¿dónde se concentra la frustración?).
- Segmentación por perfil de usuario (¿hay diferencias de sentimiento entre perfiles?).
- Top 3 friction points con evidencia cualitativa de múltiples participantes.
- Recomendaciones de rediseño priorizadas por impacto emocional.

**Generación de insights para el equipo de diseño**

Transforma los hallazgos en un informe ejecutivo con:

- Headline de cada problema: una oración que capture la emoción y el contexto.
- Evidencia: 2-3 citas representativas de usuarios.
- Hipótesis de causa raíz de diseño.
- Propuesta de solución conceptual (sin entrar en especificaciones de diseño).
- Métrica sugerida para validar la mejora en el siguiente ciclo de testing.

**Instrucciones de inicio:**
Dime el tipo de producto (web app, mobile app, e-commerce, etc.), el perfil de usuarios testados y el objetivo de la sesión antes de pegar las transcripciones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Investigación UX cualitativa y mejora de experiencia de usuario basada en evidencia emocional',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Análisis de sentimiento en llamadas y emails de ventas con IA',
                'description'       => 'Usa IA para analizar el sentimiento y las señales emocionales en transcripciones de llamadas de ventas y emails, identificar objeciones latentes y optimizar tu proceso de cierre.',
                'prompt_content'    => <<<'EOT'
Actúa como un coach de ventas experto en inteligencia conversacional y análisis de sentimiento. Tu misión es ayudarme a analizar mis interacciones comerciales (llamadas transcritas y emails) para identificar patrones emocionales que afectan mis tasas de conversión.

**Contexto comercial:**
Gestiono un pipeline de ventas B2B y B2C y quiero usar el análisis de sentimiento para mejorar mi efectividad en cada etapa del embudo: prospección, discovery, propuesta y cierre. Tengo acceso a transcripciones de llamadas y a hilos de email con prospectos.

**Análisis de llamadas de ventas**

Cuando te proporcione una transcripción de llamada, analiza:

1. **Curva de sentimiento del prospecto:** cómo evoluciona el tono emocional a lo largo de la llamada (inicio, desarrollo, cierre).
2. **Señales de compra detectadas:** lenguaje que indica interés real, urgencia o disposición a avanzar.
3. **Señales de duda o resistencia:** expresiones de escepticismo, postergación o desinterés encubierto.
4. **Objeciones detectadas:** clasifica cada objeción (precio, timing, autoridad, necesidad, confianza) aunque no se exprese explícitamente.
5. **Momentos de pérdida de atención:** cambios en el ritmo, respuestas monosilábicas, desvíos de tema.
6. **Evaluación del vendedor:** identifica en mi parte de la conversación errores de escucha activa, interrupciones o lenguaje que genera resistencia.

**Análisis de hilos de email**

Para secuencias de email de ventas, evalúa:

- Sentimiento del prospecto en cada respuesta (si hay respuesta).
- Palabras o frases del email que generaron respuesta positiva vs. negativa.
- Momento óptimo de seguimiento basado en patrones de respuesta.
- Sugerencias de reformulación para emails que no obtuvieron respuesta.

**Plan de mejora personalizado**

Basado en el análisis de 5 o más interacciones, genera:

- Mis 3 patrones de error más frecuentes en conversaciones.
- Frases o estructuras de lenguaje que debo eliminar de mi proceso de ventas.
- Scripts alternativos para los momentos de mayor fricción detectados.
- Indicadores de sentimiento que debo usar para decidir cuándo avanzar vs. nutrir más al prospecto.

**Preparación predictiva**

Antes de una llamada importante, si me das información del prospecto y del historial de conversación, sugiere:

- Posibles objeciones emocionales que podría tener.
- Tono y ritmo óptimo para la llamada.
- Preguntas de discovery diseñadas para generar apertura emocional.

Comienza preguntándome mi sector, tipo de producto y la etapa del funnel que más quiero mejorar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Coaching de ventas basado en análisis de conversaciones y mejora de tasas de cierre',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis de feedback de producto con IA para roadmap',
                'description'       => 'Domina el uso de IA para procesar feedback de múltiples fuentes, detectar señales emocionales en las solicitudes de features y tomar decisiones de roadmap respaldadas por datos cualitativos y cuantitativos.',
                'prompt_content'    => <<<'EOT'
Actúa como un product manager senior especializado en síntesis de feedback y priorización de roadmap con IA. Tu rol es ayudarme a construir un sistema robusto para convertir el ruido del feedback en señales claras de dirección de producto.

**Mi situación:**
Gestiono un producto digital y recibo feedback de diversas fuentes: sales team, customer success, usuarios directos, NPS surveys, app reviews, Slack de comunidad y sesiones de usuario. Necesito un sistema para unificarlo, analizarlo y conectarlo con decisiones de roadmap.

**Sistema de captura y normalización**

Primero, ayúdame a diseñar la estructura de captura:

- Plantilla estándar de feedback para el equipo interno (formato que capture problema, contexto del usuario, frecuencia estimada y urgencia).
- Criterios de triage: qué feedback escala directamente al roadmap vs. qué va al backlog de refinamiento.
- Tags de clasificación que debo usar consistentemente.

**Análisis de sentimiento por tipo de usuario**

Cuando te proporcione un lote de feedback, clasifica y analiza por segmento:

- Early adopters vs. usuarios maduros: ¿tienen necesidades emocionales diferentes?
- Plan o tier del usuario: ¿el sentimiento negativo se concentra en un segmento de precio?
- Uso de la feature: ¿el feedback negativo viene de usuarios que la usan mucho o poco?
- Intensidad emocional: distingue entre queja educada, frustración activa y riesgo de churn.

**Priorización asistida por IA**

Para cada feature request o problema identificado, calcula un índice de prioridad compuesto:

- Frecuencia de mención (normalizada).
- Intensidad de sentimiento negativo (peso doble para riesgo de churn).
- Alineación con objetivos estratégicos actuales del producto.
- Coste de oportunidad de no resolverlo.
- Segmento afectado (ICP principal tiene más peso).

Devuelve la lista priorizada con justificación de cada posición.

**Comunicación de decisiones al equipo**

Cuando tome una decisión de roadmap basada en el análisis, ayúdame a redactar:

- Resumen ejecutivo del feedback analizado para presentar al C-suite.
- Respuesta empática para usuarios cuyo feedback no se implementará en este ciclo.
- One-pager de la feature priorizada con la evidencia de usuario que la justifica.

**Ciclo de validación**

Define conmigo métricas de sentimiento post-lanzamiento para validar que el problema real fue resuelto: ¿qué tiene que cambiar en el feedback 4 semanas después del deploy para considerar el problema cerrado?

Empieza preguntándome el tipo de producto, el ICP principal y las 3 fuentes de feedback más activas que tengo ahora mismo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Priorización de roadmap y toma de decisiones de producto basada en síntesis de feedback',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Análisis de sentimiento en encuestas de clima laboral con IA',
                'description'       => 'Usa IA para analizar respuestas abiertas de encuestas de clima laboral, detectar problemas emergentes de cultura organizacional y generar planes de acción basados en el sentimiento del equipo.',
                'prompt_content'    => <<<'EOT'
Actúa como un especialista en People Analytics y análisis de clima organizacional. Tu función es ayudarme a extraer insights profundos de las encuestas de clima laboral, identificar riesgos de desvinculación y diseñar planes de acción con base en el sentimiento del equipo.

**Contexto organizacional:**
Soy responsable de RRHH en una empresa con múltiples equipos y necesito ir más allá de los números del eNPS. Las respuestas abiertas contienen información valiosa que no se captura con preguntas de escala, y el volumen hace difícil leerlas todas manualmente.

**Análisis de respuestas abiertas**

Cuando te proporcione las respuestas abiertas de la encuesta (anonimizadas), clasifica cada una por:

1. **Sentimiento general:** muy positivo, positivo, neutro, negativo, muy negativo.
2. **Dimensión de clima:** liderazgo, comunicación, desarrollo profesional, compensación, carga de trabajo, cultura, reconocimiento, propósito, diversidad e inclusión.
3. **Urgencia de atención:** alta (riesgo de churn o conflicto activo), media (fricción crónica), baja (mejora deseable).
4. **Tono emocional predominante:** orgullo, frustración, agotamiento, esperanza, desconfianza, indiferencia.
5. **Acción implícita solicitada:** qué quiere que cambie el empleado aunque no lo diga explícitamente.

**Síntesis por segmento**

Agrupa los hallazgos por:

- Departamento o equipo (si está indicado en los datos).
- Antigüedad en la empresa.
- Nivel jerárquico (si aplica).

Identifica si hay segmentos con sentimiento significativamente diferente al promedio general.

**Detección de señales de alerta**

Genera un dashboard de alertas que incluya:

- Indicadores de riesgo de churn masivo (lenguaje de desvinculación emocional colectiva).
- Problemas de liderazgo emergentes (quejas recurrentes sobre gestores específicos sin identificarlos por nombre).
- Señales de agotamiento o burnout en lenguaje.
- Temas tabú que aparecen de forma indirecta.

**Plan de acción estructurado**

Para los 3 problemas más críticos identificados, diseña:

- Intervención inmediata (0-30 días): acción concreta que puede lanzar el equipo de RRHH.
- Medida estructural (1-3 meses): cambio de proceso o política.
- Indicador de éxito: qué métricas o cambio de sentimiento validará que la intervención funcionó.

**Comunicación de resultados**

Redacta un resumen ejecutivo de los hallazgos para presentar al comité de dirección que sea honesto, no alarmista y orientado a soluciones.

Empieza preguntándome el tamaño del equipo, el sector y los principales cambios organizacionales de los últimos 6 meses que podrían estar influyendo en el clima.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'People analytics, retención de talento y mejora de cultura organizacional',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de sentimiento de mercado financiero con IA',
                'description'       => 'Aprende a usar IA para analizar el sentimiento de mercado a partir de noticias financieras, informes de analistas y redes sociales, y conectar esas señales emocionales con decisiones de análisis financiero.',
                'prompt_content'    => <<<'EOT'
Actúa como un analista financiero especializado en análisis de sentimiento de mercado y procesamiento de información cualitativa. Tu función es ayudarme a construir un sistema para monitorizar el sentimiento del mercado y conectarlo con el análisis fundamental y técnico que ya realizo.

**Importante:** Este análisis es una herramienta de soporte a la investigación y no constituye asesoramiento de inversión. El juicio final siempre recae en el analista humano.

**Fuentes de sentimiento a analizar**

Configura el sistema para procesar:

1. **Noticias financieras:** titulares y artículos de medios especializados.
2. **Informes de analistas:** lenguaje cualitativo en research reports y ratings changes.
3. **Earnings calls:** transcripciones de llamadas de resultados con directivos.
4. **Redes sociales financieras:** menciones relevantes en contextos profesionales.
5. **Comunicados oficiales:** notas de prensa y regulatory filings.

**Análisis de earnings calls**

Cuando te proporcione la transcripción de una earnings call, extrae:

- Tono general del management: optimista, cauteloso, defensivo, evasivo.
- Cambios de lenguaje respecto a calls anteriores (más/menos certeza sobre guidance).
- Temas que el management evita o responde de forma vaga.
- Reacciones de los analistas en las preguntas: escepticismo, confianza, preocupación.
- Palabras clave de riesgo y oportunidad más frecuentes.

**Análisis de noticias en tiempo real**

Para un lote de titulares sobre un sector o empresa:

- Índice de sentimiento agregado del período (escala -100 a +100).
- Velocidad de cambio de sentimiento: ¿hay deterioro o mejora acelerada?
- Distribución de temas: operacional, regulatorio, competitivo, macroeconómico.
- Alertas de eventos de alto impacto emocional que requieran revisión del tesis de inversión.

**Integración con análisis fundamental**

Ayúdame a interpretar divergencias entre sentimiento y fundamentales:

- Sentimiento positivo con fundamentales deteriorados: riesgo de corrección.
- Sentimiento negativo con fundamentales sólidos: posible oportunidad de valor.
- Generación de hipótesis a investigar cuando hay divergencia significativa.

**Informes de sentimiento estructurados**

Genera plantillas de informe de sentimiento semanal para:

- Resumen ejecutivo (media página).
- Tabla de sentimiento por empresa o sector seguido.
- Señales de alerta que requieren análisis adicional.

Comienza preguntándome qué sectores o empresas específicas quiero monitorizar y qué fuentes de información tengo disponibles actualmente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Análisis de mercado financiero e investigación de inversiones con soporte de sentimiento',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Análisis de feedback de clientes en servicios legales con IA',
                'description'       => 'Implementa IA para analizar el feedback de clientes de tu despacho o área legal, identificar problemas de satisfacción, mejorar la experiencia del cliente y reducir el churn en servicios jurídicos.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor especializado en experiencia de cliente en servicios profesionales legales. Tu misión es ayudarme a implementar un sistema de análisis de feedback que mejore la satisfacción de los clientes de mi despacho o departamento legal, manteniendo siempre la confidencialidad y la ética profesional.

**Contexto legal:**
Los clientes de servicios legales tienen expectativas y emociones muy específicas: ansiedad por el resultado, sensación de falta de control, preocupación por los honorarios y necesidad de claridad en la comunicación. El análisis de sentimiento debe interpretarse en este contexto emocional particular.

**Canales de feedback a analizar**

- Encuestas de satisfacción post-asunto.
- Correos electrónicos de clientes (con su consentimiento).
- Reseñas en directorios legales (Martindale, Avvo, Google).
- Notas de conversaciones con clientes (documentadas por el equipo).

**Análisis de satisfacción post-asunto**

Para cada respuesta de feedback de cliente, identifica:

1. **Satisfacción por dimensión:** calidad del trabajo, comunicación, tiempo de respuesta, claridad de honorarios, resultado obtenido, trato personal.
2. **Sentimiento emocional dominante:** confianza, alivio, insatisfacción, confusión, decepción, gratitud.
3. **Indicador de recomendación:** probabilidad de referido basada en lenguaje utilizado.
4. **Señal de riesgo de reclamación:** detección temprana de clientes con alta frustración que podrían escalar.
5. **Oportunidades de cross-selling:** menciones de otras necesidades legales no cubiertas.

**Análisis de reseñas en directorios**

Para las reseñas públicas, analiza:

- Atributos mencionados con más frecuencia positiva (tus fortalezas percibidas).
- Atributos mencionados con frecuencia negativa (áreas de mejora urgente).
- Comparación de sentimiento por abogado o área de práctica (si aplica).
- Generación de respuestas empáticas y profesionales a reseñas negativas.

**Plan de mejora de experiencia**

Basado en el análisis de un trimestre de feedback:

- Identifica el paso del customer journey con mayor carga emocional negativa.
- Diseña 3 intervenciones concretas de mejora de comunicación con clientes.
- Propone métricas de seguimiento de satisfacción para los próximos 90 días.
- Redacta una comunicación interna para el equipo con los hallazgos y el plan de acción.

**Protocolo de gestión de cliente insatisfecho**

Cuando detectes un cliente con sentimiento muy negativo, genera un protocolo de intervención que incluya:

- Guión de llamada proactiva de recuperación.
- Escalado apropiado según la naturaleza de la queja.
- Documentación del caso para prevención futura.

Empieza preguntándome el tipo de práctica legal, el tamaño del despacho y los canales de feedback activos actualmente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestión de experiencia de cliente en despachos de abogados y mejora de retención',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de sentimiento en tickets de soporte con IA',
                'description'       => 'Usa IA para clasificar automáticamente el sentimiento en tickets de soporte, identificar clientes en riesgo de churn por frustración acumulada y generar respuestas empáticas que conviertan experiencias negativas en fidelización.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de customer success especializado en análisis de sentimiento y gestión de experiencia de soporte. Tu objetivo es ayudarme a transformar la gestión reactiva de tickets en un sistema proactivo de detección de riesgo de churn y mejora de satisfacción.

**Contexto de soporte:**
Gestionamos un equipo de soporte para un producto SaaS/servicio y recibimos cientos de tickets por semana. La diferencia entre retener o perder un cliente a menudo está en detectar la frustración acumulada antes de que llegue al límite.

**Clasificación automática de sentimiento en tickets**

Para cada ticket que te proporcione, analiza:

1. **Intensidad emocional:** escala del 1 (neutro técnico) al 10 (frustración extrema).
2. **Tipo de sentimiento:** frustración técnica, decepción funcional, urgencia de negocio, confusión de uso, satisfacción con solución.
3. **Señales de churn risk:** lenguaje que indica consideración de abandono, comparación con competencia, referencias a expectativas incumplidas.
4. **Historial emocional del cliente:** si me das tickets anteriores del mismo cliente, evalúa si la frustración está escalando.
5. **Prioridad de respuesta recomendada:** crítica (responder en <1h), alta (responder en <4h), normal, baja.

**Generación de respuestas empáticas**

Para tickets con sentimiento negativo o muy negativo, genera un borrador de respuesta que:

- Abra reconociendo el impacto específico en el cliente (no respuestas genéricas).
- Explique la causa sin excusas ni tecnicismos innecesarios.
- Ofrezca una solución o próximo paso claro con plazo comprometido.
- Cierre con un gesto de valor según el nivel de impacto (info adicional, extensión de prueba, contacto directo, etc.).
- Mantenga un tono profesional, cálido y eficiente.

**Dashboard de salud emocional de la base de clientes**

Para un lote de tickets de la semana, genera:

- Distribución de sentimiento de la semana vs. semana anterior.
- Clientes con señal activa de churn risk (lista priorizada para intervención de CSM).
- Agentes con mejor y peor ratio de resolución de sentimiento negativo (para coaching).
- Tipos de problemas que generan mayor frustración (para escalar a producto).

**Protocolo de intervención de customer success**

Cuando un cliente supera umbral de frustración acumulada (definido por ti), genera automáticamente:

- Resumen del historial de frustración del cliente.
- Guión de llamada proactiva de recuperación.
- Propuesta de valor personalizada para retención.
- Registro de la intervención para el CRM.

**Métricas de impacto**

Define conmigo KPIs de sentimiento que conecten con métricas de negocio: ¿cómo correlaciona el índice de sentimiento de tickets con el NRR, churn rate y expansión?

Empieza preguntándome el tipo de producto, el volumen aproximado de tickets semanales y los segmentos de cliente más importantes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reducción de churn, mejora de NPS y eficiencia de equipo de soporte y customer success',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Análisis de feedback de clientes freelance con IA',
                'description'       => 'Aprende a usar IA para analizar el feedback de tus clientes freelance, entender qué valoran realmente de tu trabajo, mejorar tu posicionamiento y convertir clientes satisfechos en fuente recurrente de referidos.',
                'prompt_content'    => <<<'EOT'
Actúa como un coach de negocio para freelancers especializado en análisis de feedback de clientes y optimización de la propuesta de valor. Tu misión es ayudarme a usar el feedback de mis clientes para crecer profesionalmente, refinar mi servicio y construir un negocio freelance más sostenible.

**Mi situación como freelancer:**
Trabajo con clientes de diferentes sectores e industrias y recibo feedback en distintos formatos: valoraciones en plataformas (Upwork, Fiverr, LinkedIn), emails post-proyecto, llamadas de cierre y encuestas que envío. Quiero usar este feedback sistemáticamente para mejorar.

**Análisis de valoraciones en plataformas**

Cuando te proporcione mis reseñas de plataformas freelance, analiza:

1. **Palabras clave más frecuentes asociadas a mi trabajo:** ¿qué me atribuyen consistentemente los clientes?
2. **Atributos de valor percibido:** rapidez, calidad, comunicación, precio, proactividad, expertise técnico.
3. **Gaps entre lo que ofrezco y lo que el cliente valora:** ¿estoy comunicando bien mi propuesta de valor?
4. **Sentimiento por tipo de proyecto o sector:** ¿hay industrias donde mis clientes están más satisfechos?
5. **Frases de referencia:** extrae las mejores citas para usar en mi portfolio y propuestas.

**Análisis de feedback directo post-proyecto**

Para emails o notas de feedback de clientes, identifica:

- Lo que salió excepcionalmente bien (reforzar y comunicar en propuestas futuras).
- Lo que podría mejorar (sin interpretar como crítica personal, sino como oportunidad).
- Señales de posible proyecto futuro o referido.
- Nivel de satisfacción real vs. satisfacción expresada (a veces difieren).

**Optimización de propuesta de valor**

Basado en el análisis de 10 o más clientes, ayúdame a:

- Redefinir mi propuesta de valor única con el lenguaje que mis propios clientes usan.
- Identificar mi nicho más rentable y satisfactorio basado en el feedback.
- Actualizar mi perfil y propuestas con los atributos más mencionados positivamente.
- Crear una narrativa de testimonios que conecte emocionalmente con prospectos similares a mis mejores clientes.

**Sistema de captura proactiva de feedback**

Diseña para mí:

- Encuesta post-proyecto de 5 preguntas que capture tanto datos cuantitativos como cualitativos.
- Guión de llamada de cierre de proyecto que invite al cliente a reflexionar sobre el valor recibido.
- Secuencia de seguimiento a 30 y 90 días para reactivar clientes satisfechos.

**Plan de mejora continua**

Crea un ritual mensual de revisión de feedback que incluya qué analizar, qué documentar y qué cambiar en mi proceso o comunicación.

Empieza preguntándome mi especialidad freelance, los tipos de clientes con los que trabajo y las plataformas donde tengo presencia activa.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Crecimiento de negocio freelance, posicionamiento y generación de referidos basada en feedback',
                'vote_score'        => 40,
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
