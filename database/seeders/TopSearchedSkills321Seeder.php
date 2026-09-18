<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills321Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Cultura de experimentación en marketing: A/B testing y optimización continua',
                'description'      => 'Instala una cultura de experimentación continua en tu equipo de marketing para tomar decisiones basadas en datos y no en intuiciones. Aprende a diseñar experimentos A/B rigurosos, interpretar resultados con significancia estadística y construir un portfolio de aprendizajes que acelere el crecimiento. Deja de optimizar lo que ya funciona y empieza a descubrir lo que podría funcionar mejor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en growth marketing y experimentación con experiencia en diseñar programas de A/B testing y cultura de datos en equipos de marketing de alto rendimiento. Tu misión es ayudarme a construir una cultura de experimentación continua en mi equipo de marketing.

**POR QUÉ LA CULTURA DE EXPERIMENTACIÓN ES UNA VENTAJA COMPETITIVA**
Las empresas que experimentan más, aprenden más. Las que aprenden más, crecen más rápido. Empresas como Amazon, Booking.com y Netflix realizan miles de experimentos al año. La clave no es tener el presupuesto de Amazon: es tener el sistema y la mentalidad correcta para aprender de cada experimento, sea cual sea su resultado.

**FUNDAMENTOS DEL PENSAMIENTO EXPERIMENTAL EN MARKETING**
Explícame los conceptos clave que necesito dominar para experimentar de manera rigurosa:
- ¿Qué es una hipótesis falsificable y por qué el 80% de los experimentos de marketing fallan por hipótesis mal formuladas?
- ¿Cuál es la diferencia entre un experimento A/B y una prueba de concepto no controlada?
- ¿Qué es la significancia estadística y por qué importa (en términos simples, sin fórmulas intimidantes)?
- ¿Qué es el "tamaño de muestra mínimo" y cómo calculo cuánto tiempo necesito para que un experimento sea válido?
- ¿Qué es el "sesgo de confirmación" y cómo evito que contamine la interpretación de los resultados?

**DISEÑO DE EXPERIMENTOS DE MARKETING RIGUROSOS**
Dame un proceso paso a paso para diseñar un experimento de marketing:
1. Identificación de la oportunidad: ¿cómo identifico qué partes del funnel tienen mayor potencial de mejora?
2. Formulación de la hipótesis: "Creemos que [cambio] producirá [resultado medible] porque [razón]."
3. Definición de la métrica principal (OEC: Overall Evaluation Criterion): ¿qué mido para declarar el ganador?
4. Definición de métricas de guardia: ¿qué métricas no deben empeorar aunque mejore la principal?
5. Estimación del tamaño de muestra y duración del experimento.
6. Diseño del control y las variantes.
7. Proceso de análisis e interpretación de resultados.
8. Decisión: ¿cómo decido si escalo, itero o abandono la hipótesis?

**CATEGORÍAS DE EXPERIMENTOS EN MARKETING**
Para cada categoría, dame ejemplos de hipótesis concretas y métricas de éxito:
- Optimización de landing pages y páginas de conversión.
- Experimentos de email marketing (asunto, cuerpo, CTA, frecuencia).
- Experimentos de anuncios pagados (creatividad, audiencia, mensaje, oferta).
- Experimentos de precios y empaquetado de oferta.
- Experimentos de onboarding y activación de usuarios.

**CONSTRUIR EL PROGRAMA DE EXPERIMENTACIÓN**
- ¿Cómo priorizo qué experimentos correr primero cuando tengo más ideas que capacidad de testear?
- ¿Cómo organizo el backlog de experimentos y lo hago visible para todo el equipo?
- ¿Cómo documento los resultados de los experimentos para construir una base de conocimiento que dure más que las personas del equipo?
- ¿Qué cadencia de experimentos es realista para un equipo de marketing de 3-5 personas?

**FALLAR RÁPIDO Y BIEN: LA CULTURA DEL APRENDIZAJE**
- ¿Cómo celebro los experimentos que no funcionan como aprendizajes valiosos (no como fracasos)?
- ¿Cómo comunico los resultados negativos a la dirección de manera que refuercen la cultura de experimentación en lugar de frenarla?
- ¿Cómo evito los errores más comunes: parar el experimento demasiado pronto, correr demasiados cambios a la vez, ignorar la estacionalidad?

**EJERCICIO PRÁCTICO**
Dime cuál es el punto del funnel de marketing donde tienes el mayor margen de mejora y cuál es la métrica que más te importa mover, y diseñaremos juntos el primer experimento de tu programa de optimización continua.

Comienza preguntándome: ¿cuál es tu modelo de negocio, cuál es tu canal de adquisición principal y dónde pierdes más clientes potenciales en el funnel hoy?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programa de A/B testing y experimentación en marketing',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo de Software
            [
                'profession_id'    => 2,
                'title'            => 'Cultura de innovación en equipos de desarrollo: de la idea al experimento técnico en producción',
                'description'      => 'Aprende a construir una cultura de innovación técnica en equipos de desarrollo que va más allá del hackathon ocasional. Implementa sistemas de experimentación continua como feature flags, spike técnicos y ciclos de feedback cortos que permiten validar ideas técnicas sin bloquear el desarrollo productivo. Convierte la innovación en un hábito de equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager con experiencia construyendo culturas de innovación técnica en equipos de desarrollo de software de alto rendimiento. Tu misión es ayudarme a implementar sistemas y prácticas que conviertan la experimentación técnica en un hábito del equipo, no en un evento puntual.

**EL PROBLEMA DE LA INNOVACIÓN TÉCNICA EN LOS EQUIPOS DE DESARROLLO**
La mayoría de los equipos de ingeniería no tienen tiempo para innovar porque están perpetuamente en modo "apagando incendios" o entregando funcionalidades del roadmap. La innovación técnica ocurre en hackathons que terminan en demos que nadie implementa, o en side projects que nunca llegan a producción. La solución no es más tiempo: es un sistema que integra la experimentación en el flujo de trabajo normal.

**LOS PILARES DE UNA CULTURA DE EXPERIMENTACIÓN TÉCNICA**

1. El sistema de ideas: ¿cómo capturamos y priorizamos ideas técnicas?
   - ¿Cómo creo un backlog de innovación técnica separado del backlog de producto?
   - ¿Qué criterios uso para priorizar ideas técnicas: impacto en velocidad de entrega, reducción de deuda técnica, capacitación del equipo, reducción de coste de infraestructura?
   - ¿Cómo involucro a todo el equipo en la generación de ideas, no solo a los seniors?

2. El spike técnico: el artefacto de la experimentación técnica
   - ¿Qué es un spike técnico y cuándo es el artefacto correcto versus un POC o un prototipo?
   - ¿Cómo defino los criterios de éxito de un spike antes de empezar (pregunta que responde, tiempo límite, formato de entrega)?
   - ¿Cómo documento los resultados de un spike para que el conocimiento permanezca en el equipo?

3. Feature flags: la infraestructura de la experimentación continua
   - ¿Qué es un feature flag system y cómo lo uso para desacoplar el despliegue de la activación de funcionalidades?
   - ¿Cómo implemento feature flags de manera que permitan experimentos A/B técnicos en producción con usuarios reales?
   - ¿Cuáles son los errores más comunes en la gestión de feature flags (acumulación de flags muertos, complejidad condicional)?

4. El tiempo de innovación estructurado (20%, Ship It Days, etc.)
   - ¿Cuál es el modelo más efectivo para dar tiempo de innovación a un equipo de desarrollo sin comprometer los compromisos de entrega?
   - ¿Cómo estructuro un "Ship It Day" o hackathon interno para que los proyectos lleguen a producción?
   - ¿Cómo mido el ROI del tiempo de innovación para justificarlo ante la dirección de producto?

**HIPÓTESIS TÉCNICAS: LA DISCIPLINA DEL EXPERIMENTO**
- ¿Cómo formulo una hipótesis técnica falsificable: "Creemos que [cambio arquitectónico/tecnológico] reducirá [métrica técnica] en [porcentaje] porque [razón]"?
- ¿Qué métricas técnicas son las más relevantes para medir el éxito de una experimentación: latencia, throughput, coste de infraestructura, tiempo de despliegue, MTTR?
- ¿Cómo diseño el experimento técnico para que sea comparable (condiciones controladas, métricas antes/después)?

**FAIL FAST EN INGENIERÍA: LA CULTURA DEL APRENDIZAJE RÁPIDO**
- ¿Cómo construyo una cultura donde los experimentos fallidos son aprendizajes documentados, no errores que se esconden?
- ¿Cómo hago un postmortem de un experimento técnico fallido que genere aprendizaje colectivo?
- ¿Cómo comunico los resultados negativos al equipo de producto de manera que refuercen la confianza en el equipo de ingeniería?

**EJERCICIO PRÁCTICO**
Cuéntame sobre tu equipo y el área técnica donde tienes más oportunidades de mejora (rendimiento, arquitectura, developer experience, testing, infraestructura), y diseñaremos juntos el primer experimento técnico: hipótesis, métricas, método de validación y plan de comunicación de resultados.

Comienza preguntándome: ¿de cuántas personas es tu equipo, en qué stack tecnológico trabajan y cuál es el mayor problema técnico que nadie ha tenido tiempo de abordar correctamente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir cultura de experimentación técnica en equipos de desarrollo',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Experimentación en diseño de producto: valida conceptos antes de invertir en producción',
                'description'      => 'Aprende a instalar una mentalidad de experimentación en tu proceso de diseño para validar hipótesis de usabilidad y propuesta de valor antes de invertir en desarrollo. Domina las técnicas de testeo rápido con usuarios reales, desde guerrilla testing hasta prototipos interactivos. Diseña con evidencia, no con suposiciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un UX researcher y design lead con experiencia en design systems de experimentación y cultura de validación continua. Tu misión es enseñarme a integrar la experimentación como parte central de mi proceso de diseño, reduciendo el riesgo de construir algo que los usuarios no adoptan.

**POR QUÉ LOS DISEÑADORES NECESITAN UNA CULTURA DE EXPERIMENTACIÓN**
El mayor coste en el diseño de producto no es el tiempo de diseño: es el tiempo de desarrollo de algo que los usuarios no usan. Cada funcionalidad construida sin validar previa es una apuesta. Los diseñadores que experimentan reducen radicalmente este desperdicio y aumentan su impacto real en el producto.

**LOS FUNDAMENTOS DE LA HIPÓTESIS DE DISEÑO**
Enséñame a formular hipótesis de diseño testables:
- ¿Cuál es la diferencia entre una hipótesis de usabilidad ("los usuarios no encontrarán el botón de acción principal") y una hipótesis de valor ("los usuarios no completarán la tarea porque no ven el beneficio inmediato")?
- ¿Cómo escribo una hipótesis de diseño en formato: "Creemos que [cambio de diseño] producirá [comportamiento de usuario medible] porque [razón basada en insight de usuario]"?
- Dame 10 ejemplos de hipótesis de diseño bien formuladas para distintos tipos de interfaces.

**EL PORTAFOLIO DE TÉCNICAS DE TESTEO EN DISEÑO**
Para cada técnica, explícame cuándo usarla, cuánto tiempo requiere y qué tipo de insights produce:

1. Guerrilla testing: cómo testo un prototipo con 5 personas en una tarde con cero presupuesto.
2. Test de usabilidad moderado: cómo preparo y facilito una sesión de 30-45 minutos con usuarios representativos.
3. Test de cinco segundos: cómo evalúo la primera impresión y la comprensión inmediata de una interfaz.
4. Test de árbol (tree testing): cómo valido la arquitectura de información sin construir el diseño completo.
5. Test de primer clic (first click testing): cómo identifico si los usuarios encuentran intuitivamente el elemento de acción principal.
6. Encuesta de desirabilidad: cómo mido la respuesta emocional y las percepciones de marca de un diseño.
7. A/B test de diseño: cuándo es apropiado y cómo lo diseño con rigor estadístico mínimo.

**PROTOTIPADO COMO HERRAMIENTA DE EXPERIMENTACIÓN**
- ¿Qué nivel de fidelidad del prototipo es el adecuado para cada tipo de hipótesis?
- ¿Cómo prototipo en papel para testear flujos de usuario en menos de una hora?
- ¿Cómo uso Figma, Marvel o Framer para crear prototipos interactivos de alta fidelidad para testear propuesta de valor?
- ¿Cómo preparo el escenario y el guión del test para que el usuario no sea influenciado por la presencia del diseñador?

**ANÁLISIS E INTERPRETACIÓN DE LOS RESULTADOS DEL TESTEO**
- ¿Cuántos usuarios necesito para un test de usabilidad cualitativo (el principio de Nielsen de 5 usuarios)?
- ¿Cómo analizo los patrones en las sesiones de testeo sin caer en el confirmation bias?
- ¿Cómo priorizo los problemas encontrados usando criterios de severidad y frecuencia?
- ¿Cómo comunico los hallazgos del testeo al equipo de producto y a los stakeholders de manera que genere acción?

**ITERACIÓN RÁPIDA: DEL TESTEO A LA MEJORA**
- ¿Cómo integro los ciclos de testeo en el sprint de diseño sin ralentizar la entrega?
- ¿Cómo documento los insights de testeo en un repositorio de investigación que acumule conocimiento a lo largo del tiempo?
- ¿Cómo mido el impacto de mi proceso de experimentación en la calidad final del producto (reducción de revisiones de UX en desarrollo, mejora de métricas de adopción)?

**EJERCICIO PRÁCTICO**
Dime cuál es el diseño o funcionalidad que estás a punto de desarrollar o que ya existe y sospechas que no funciona bien, y diseñaremos juntos el plan de experimentación: hipótesis, técnica de testeo, guión del test y formato de análisis de resultados.

Comienza preguntándome: ¿qué estás diseñando ahora mismo y cuál es la principal incertidumbre de diseño que te preocupa?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Validar hipótesis de diseño con técnicas de testeo y experimentación',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Innovación en el proceso de ventas: experimenta, mide y optimiza cada fase del embudo',
                'description'      => 'Aplica la mentalidad de experimentación continua al proceso de ventas para identificar qué palancas mueven realmente la conversión y cuáles son pura intuición. Aprende a diseñar experimentos comerciales controlados, medir su impacto con rigor y escalar las mejoras que funcionan. Transforma tu proceso de ventas en una máquina de aprendizaje continuo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con formación en gestión científica de procesos comerciales y cultura de experimentación. Tu misión es ayudarme a aplicar una mentalidad de experimentación rigurosa al proceso de ventas para mejorar sistemáticamente las tasas de conversión en cada etapa del embudo.

**POR QUÉ EL PROCESO DE VENTAS NECESITA UNA CULTURA DE EXPERIMENTACIÓN**
La mayoría de los equipos de ventas operan en piloto automático: hacen lo que siempre han hecho porque "así funciona". Pero el mercado cambia, los compradores evolucionan y lo que funcionó ayer puede no funcionar mañana. Los equipos de ventas que experimentan de manera sistemática descubren palancas de mejora que sus competidores nunca encontrarán.

**LA HIPÓTESIS COMERCIAL: EL PUNTO DE PARTIDA DE CADA EXPERIMENTO**
Enséñame a formular hipótesis de ventas testables:
- ¿Cuál es la diferencia entre una intuición comercial y una hipótesis testable?
- ¿Cómo escribo una hipótesis de ventas en formato: "Creemos que [cambio en el proceso] aumentará [métrica de conversión] en [porcentaje] porque [razón basada en evidencia]"?
- Dame 10 ejemplos de hipótesis de ventas bien formuladas para las etapas de prospección, discovery, demostración y cierre.

**ÁREAS DE EXPERIMENTACIÓN EN EL PROCESO DE VENTAS**
Para cada área, dame ejemplos de experimentos concretos, métricas de éxito y duración recomendada:

1. Prospección y apertura de conversación:
   - Formatos de mensaje de primer contacto (email frío, LinkedIn, llamada, vídeo personalizado).
   - Propuestas de valor de apertura (pregunta de dolor, insight de industria, caso de éxito relevante).
   - Canales de prospección (email, teléfono, social selling, referidos).

2. Discovery call y calificación:
   - Estructura de la llamada (SPIN, MEDDIC, Challenger Sale).
   - Preguntas de discovery que descubren el dolor más rápido.
   - Criterios de calificación y puntuación de leads.

3. Presentación y demostración:
   - Orden de presentación (problema primero versus solución primero).
   - Duración óptima de la demo.
   - Personalización de la demo para el perfil del comprador.

4. Manejo de objeciones y propuesta:
   - Técnicas de respuesta a la objeción de precio.
   - Formato de la propuesta económica.
   - Timing del seguimiento post-propuesta.

**DISEÑO DE EXPERIMENTOS COMERCIALES CONTROLADOS**
- ¿Cómo divido a los prospectos entre el control y la variante de manera justa (aleatorización en ventas)?
- ¿Cuántos prospectos necesito para que un experimento de ventas sea estadísticamente válido?
- ¿Cómo evito el "contaminación de los grupos" cuando los vendedores saben en qué grupo está cada prospecto?
- ¿Cómo mido el impacto de manera aislada cuando hay múltiples variables en juego (el vendedor, el sector, el tamaño de empresa)?

**EL SISTEMA DE APRENDIZAJE COMERCIAL**
- ¿Cómo documento los experimentos de ventas para que el aprendizaje se acumule en el equipo?
- ¿Cómo comparto los resultados de los experimentos en las reuniones de equipo para inspirar nuevas hipótesis?
- ¿Cómo evito los sesgos más comunes en la interpretación de resultados de ventas (attribution bias, survivor bias)?

**EJERCICIO PRÁCTICO**
Dime cuál es el mayor cuello de botella en tu embudo de ventas hoy (tasa de respuesta a prospección, tasa de paso de discovery a demo, tasa de cierre) y diseñaremos juntos el primer experimento: hipótesis, diseño del control y la variante, métricas y duración.

Comienza preguntándome: ¿cuál es tu producto, cuál es tu proceso de ventas actual y en qué etapa del embudo tienes la mayor caída de conversión?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar el embudo de ventas con experimentación continua',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del portfolio de innovación de producto: equilibra explotación y exploración',
                'description'      => 'Aprende a gestionar el portfolio de iniciativas de producto balanceando las inversiones entre la optimización de lo que ya funciona y la exploración de nuevas oportunidades. Domina los frameworks de portfolio de innovación para asignar recursos con criterio estratégico. Construye el músculo organizativo para explorar sin descuidar el negocio principal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de producto con experiencia gestionando portfolios de innovación en empresas en crecimiento y grandes organizaciones. Tu misión es enseñarme a gestionar el portfolio de iniciativas de producto de manera que equilibre la explotación del negocio actual con la exploración de nuevas oportunidades.

**EL DILEMA DEL INNOVADOR EN PRODUCT MANAGEMENT**
Todo product manager enfrenta una tensión constante: dedicar recursos a mejorar el producto actual (exploración táctica, menor riesgo, ROI más predecible) versus explorar nuevas funcionalidades, segmentos o modelos de negocio (mayor riesgo, mayor potencial de crecimiento a largo plazo). Sin un sistema de gestión del portfolio, siempre gana la urgencia del corto plazo.

**EL MODELO DE LOS TRES HORIZONTES DE INNOVACIÓN**
Explícame en detalle el framework de McKinsey de los tres horizontes y cómo aplicarlo al portfolio de producto:
- Horizonte 1 (Core): optimización y defensa del negocio principal. ¿Qué tipo de iniciativas van aquí y qué porcentaje del presupuesto debe dedicarse?
- Horizonte 2 (Adjacent): expansión hacia mercados o segmentos adyacentes. ¿Qué define una oportunidad adyacente y cómo la evalúo?
- Horizonte 3 (Transformational): exploración de negocios completamente nuevos. ¿Cómo gestiono iniciativas con tan alta incertidumbre sin comprometer el core?

¿Cómo distribuyo el presupuesto y el equipo entre los tres horizontes en función de la etapa de mi empresa (early stage, crecimiento, madurez)?

**EL SISTEMA DE APUESTAS ESTRATÉGICAS**
- ¿Cómo convierto la visión estratégica de largo plazo en apuestas concretas con hipótesis falsificables?
- ¿Cómo defino el criterio de éxito de cada apuesta antes de asignar recursos: ¿qué resultado me indicaría que debo escalar, pivotar o abandonar?
- ¿Qué es una "apuesta pequeña pero real" (small bet) y cómo la uso para explorar con riesgo controlado?

**GESTIÓN DEL PORTFOLIO EN LA PRÁCTICA**
- ¿Cómo visualizo el portfolio de innovación de manera que sea comprensible para la dirección y el equipo?
- ¿Cómo tomo decisiones de reasignación de recursos entre horizontes cuando aparece evidencia nueva?
- ¿Cómo gestiono las iniciativas de H3 sin que mueran de inanición de recursos frente a las urgencias del H1?
- ¿Cómo creo "espacio protegido" para la exploración en organizaciones donde la presión operativa lo devora todo?

**MÉTRICAS DE INNOVACIÓN: MEDIR LO QUE IMPORTA EN CADA HORIZONTE**
- H1: ¿qué métricas de eficiencia, retención y satisfacción son las más relevantes?
- H2: ¿qué métricas de validación de mercado y tracción temprana usamos?
- H3: ¿cómo mido el progreso de una apuesta transformacional cuando aún no hay métricas de negocio claras (métricas de aprendizaje)?

**COMUNICAR EL PORTFOLIO A LOS STAKEHOLDERS**
- ¿Cómo presento el portfolio de innovación a la junta directiva de manera que justifique la inversión en H2 y H3 con argumentos estratégicos?
- ¿Cómo gestiono la presión de los stakeholders que solo quieren resultados de corto plazo?
- ¿Cómo comunico un "kill" de una iniciativa de innovación sin desmotivar al equipo y sin perder credibilidad en el proceso de exploración?

**FAIL FAST A ESCALA: EL PROCESO DE APRENDIZAJE RÁPIDO**
- ¿Cómo diseño el proceso de experimentación de H2 y H3 para aprender lo máximo posible con el mínimo de inversión?
- ¿Qué técnicas de product discovery (concierge, smoke test, presell) son las más efectivas para validar oportunidades de H2 y H3 sin construir el producto?
- ¿Cómo proceso las señales negativas del mercado para decidir cuándo pivotar versus cuándo perseverar?

**EJERCICIO PRÁCTICO**
Cuéntame sobre tu producto y el portfolio actual de iniciativas, y te ayudaré a: clasificarlas en los tres horizontes, identificar los desequilibrios del portfolio, y proponer un sistema de gestión y comunicación que funcione para tu organización.

Comienza preguntándome: ¿en qué etapa está tu empresa (early stage, crecimiento, madurez), cuál es tu producto principal y qué tipo de iniciativas de innovación tienes actualmente en curso?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el portfolio de innovación de producto con los tres horizontes',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Cultura de experimentación en RRHH: pilota iniciativas antes de implementarlas en toda la organización',
                'description'      => 'Aprende a aplicar la mentalidad de experimentación a la gestión de personas para validar nuevas políticas, programas y procesos de RRHH con grupos piloto antes de implementarlos a toda la organización. Reduce el riesgo de iniciativas de RRHH costosas que no generan el impacto esperado. Construye una función de RRHH más ágil y orientada a la evidencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia en people analytics y gestión ágil de recursos humanos. Tu misión es enseñarme a aplicar el pensamiento experimental a la función de RRHH para tomar decisiones de personas basadas en evidencia en lugar de en intuición o modas del sector.

**POR QUÉ EL RRHH NECESITA UNA CULTURA DE EXPERIMENTACIÓN**
Las iniciativas de RRHH se implementan frecuentemente en toda la organización simultáneamente, sin validación previa. El resultado: programas costosos con impacto mínimo o contraproducente, y una función de RRHH que pierde credibilidad ante la dirección. La experimentación con grupos piloto permite aprender antes de comprometer toda la organización.

**LOS FUNDAMENTOS DEL EXPERIMENTO EN RRHH**
Enséñame a diseñar experimentos de RRHH con rigor metodológico:
- ¿Qué es una hipótesis de RRHH testable: "Creemos que [iniciativa de personas] aumentará [métrica de empleados] en [porcentaje] porque [razón]"?
- ¿Cómo identifico el grupo de control y el grupo piloto de manera justa (sin crear percepción de injusticia entre empleados)?
- ¿Qué consideraciones éticas son específicas de los experimentos con personas en el contexto laboral?
- ¿Qué tamaño debe tener el grupo piloto para que los resultados sean representativos?

**ÁREAS DE EXPERIMENTACIÓN EN RRHH**
Para cada área, dame ejemplos de hipótesis, métricas de éxito y precauciones éticas:

1. Programas de incorporación (onboarding):
   - ¿Qué elementos del onboarding tienen mayor impacto en la retención a 12 meses?
   - ¿Cómo comparo el impacto de diferentes formatos de onboarding (presencial vs. asíncrono, mentorizado vs. autoguiado)?

2. Flexibilidad y modalidades de trabajo:
   - ¿Cómo mido el impacto real de la semana de 4 días en productividad, bienestar y retención?
   - ¿Cómo diseño un piloto de trabajo remoto o híbrido con criterios de evaluación claros?

3. Programas de desarrollo y formación:
   - ¿Cómo mido el ROI real de un programa de formación (no solo la satisfacción, sino el cambio de comportamiento)?
   - ¿Qué formatos de aprendizaje (presencial, e-learning, coaching, peer learning) tienen mayor transferencia al puesto de trabajo?

4. Reconocimiento y compensación variable:
   - ¿Cómo comparo el impacto de diferentes modelos de reconocimiento en el engagement?
   - ¿Cómo diseño un experimento de compensación variable que sea percibido como justo?

5. Bienestar y salud mental:
   - ¿Cómo mido el impacto de programas de bienestar en el absentismo, la productividad y la retención?
   - ¿Cómo diseño un piloto de mindfulness o de gestión del estrés con criterios de éxito medibles?

**EL PROCESO DE EXPERIMENTACIÓN EN RRHH**
- ¿Cómo comunico el piloto a los participantes para que no se sientan "conejillos de indias" y mantengan su compromiso?
- ¿Cómo recojo datos durante el piloto sin que la observación modifique el comportamiento (efecto Hawthorne)?
- ¿Cómo analizo los resultados del piloto controlando variables de confusión (departamento, antigüedad, manager)?
- ¿Cómo presento los resultados a la dirección con recomendación clara de escalar, ajustar o abandonar la iniciativa?

**CONSTRUIR UNA FUNCIÓN DE RRHH ORIENTADA A LA EVIDENCIA**
- ¿Cómo creo un repositorio de evidencia de RRHH que acumule los aprendizajes de los pilotos a lo largo del tiempo?
- ¿Cómo establezco una cadencia regular de revisión de iniciativas de RRHH basada en datos?
- ¿Cómo entreno al equipo de RRHH para pensar en hipótesis y experimentos en lugar de en programas y políticas?

**EJERCICIO PRÁCTICO**
Cuéntame sobre una iniciativa de RRHH que estás considerando implementar en tu organización y diseñaremos juntos el piloto: hipótesis, diseño del grupo de control y piloto, métricas, duración y plan de comunicación.

Comienza preguntándome: ¿qué iniciativa de RRHH estás planificando implementar y cuál es el problema de personas que intentas resolver?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Validar iniciativas de RRHH con pilotos y experimentación',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Innovación en modelos de negocio financiero: de la validación de hipótesis al nuevo modelo de ingresos',
                'description'      => 'Aprende a aplicar técnicas de innovación y experimentación para validar nuevos modelos de negocio en el sector financiero antes de comprometer grandes inversiones. Domina el proceso de descubrimiento de oportunidades, formulación de hipótesis de modelo de negocio y diseño de experimentos mínimos en un entorno regulado. Innova con rigor en finanzas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de innovación de una institución financiera con experiencia validando nuevos modelos de negocio en un entorno regulado. Tu misión es enseñarme a aplicar metodologías de innovación y experimentación para descubrir y validar nuevas fuentes de ingresos sin comprometer el negocio principal ni incumplir la normativa.

**EL RETO DE INNOVAR EN FINANZAS**
El sector financiero tiene barreras únicas para la innovación: regulación estricta, cultura de aversión al riesgo, legados tecnológicos complejos y clientes que priorizan la seguridad sobre la novedad. Pero también tiene ventajas únicas: acceso a datos de comportamiento financiero, relaciones de confianza con los clientes y una posición privilegiada para ofrecer servicios de valor añadido. La innovación en finanzas requiere un proceso adaptado a estas condiciones.

**EL MAPA DE MODELOS DE NEGOCIO FINANCIERO**
Explícame los principales modelos de innovación en el sector financiero y sus características:
- Modelos basados en datos (data monetization): ¿cómo una institución financiera puede crear valor a partir de sus datos de manera ética y regulatoriamente correcta?
- Modelos de plataforma (open banking, BaaS): ¿cómo las APIs y el open banking crean nuevas fuentes de ingresos mediante la distribución?
- Modelos de servicio ampliado (embedded finance): ¿cómo integrar servicios financieros en contextos no financieros?
- Modelos de comunidad (coopetición, alianzas fintech-banco): ¿cómo la colaboración con fintechs crea valor que ninguna parte puede crear sola?

**FORMULACIÓN DE HIPÓTESIS DE MODELO DE NEGOCIO**
Enséñame a formular hipótesis de innovación en finanzas:
- ¿Cómo adapto el Business Model Canvas a la exploración de nuevas fuentes de ingresos financieros?
- ¿Cómo escribo hipótesis falsificables de modelo de negocio: "Creemos que [segmento de cliente] pagará por [propuesta de valor] mediante [mecanismo de monetización] porque [razón basada en evidencia]"?
- ¿Cómo priorizo qué hipótesis testear primero usando la combinación de impacto potencial e incertidumbre?

**DISEÑO DE EXPERIMENTOS MÍNIMOS EN UN ENTORNO REGULADO**
- ¿Qué técnicas de validación son posibles en el sector financiero sin necesitar autorización regulatoria previa (entrevistas de cliente, smoke tests, landing pages, pilotos con empleados)?
- ¿Cuándo y cómo involucro al área de cumplimiento y legal desde el inicio del proceso de experimentación para evitar bloqueos tardíos?
- ¿Qué es un "sandbox regulatorio" y cómo puedo aprovechar los marcos de innovación regulada que ofrecen los supervisores financieros?
- ¿Cómo diseño un piloto de producto financiero con un grupo pequeño de clientes de manera controlada y cumplidora?

**EL PROCESO DE APRENDIZAJE RÁPIDO EN FINANZAS**
- ¿Cómo interpreto las señales de validación temprana: ¿qué me indica que la hipótesis merece más inversión?
- ¿Cómo gestiono la presión de la organización para "escalar rápido" cuando la evidencia todavía no es suficientemente sólida?
- ¿Cómo comunico los resultados negativos de un experimento de innovación sin que se cancele el programa de innovación completo?

**CONSTRUIR EL PORTFOLIO DE INNOVACIÓN FINANCIERA**
- ¿Cómo equilibro el portfolio de iniciativas de innovación entre mejoras incrementales al negocio actual y apuestas transformacionales?
- ¿Cómo calculo el retorno esperado ajustado al riesgo de cada tipo de iniciativa para justificar la inversión ante el comité de dirección?
- ¿Cómo creo una cultura de experimentación en una organización financiera con alta aversión al riesgo?

**EJERCICIO PRÁCTICO**
Cuéntame sobre tu organización financiera y el área de innovación que estás explorando (nuevo producto, nuevo segmento, nuevo canal, nuevo modelo de monetización), y diseñaremos juntos el proceso de validación: hipótesis, experimento mínimo, métricas de éxito y criterios de decisión de escalada.

Comienza preguntándome: ¿en qué tipo de institución financiera trabajas y cuál es la oportunidad de innovación que estás explorando o evaluando?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Validar modelos de negocio financiero con experimentación regulada',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Innovación en servicios jurídicos: de la eficiencia de procesos a la transformación del modelo de servicio',
                'description'      => 'Aprende a aplicar metodologías de innovación para identificar oportunidades de mejora radical en cómo prestas y cobras tus servicios jurídicos. Experimenta con nuevos modelos de precio, nuevos formatos de entrega y nuevas tecnologías antes de comprometer una transformación completa. Convierte la innovación jurídica en una ventaja competitiva real.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de innovación en servicios legales con experiencia en legal tech, nuevos modelos de negocio jurídico y transformación digital de despachos. Tu misión es enseñarme a identificar oportunidades de innovación en mi práctica jurídica y validarlas con experimentos antes de comprometer grandes inversiones de tiempo y recursos.

**EL ESTADO DE LA INNOVACIÓN EN EL SECTOR LEGAL**
El sector legal está en un punto de inflexión: la presión de costes de los clientes, la automatización de tareas repetitivas y la entrada de proveedores alternativos de servicios jurídicos (ALSPs) están redefiniendo lo que los clientes esperan de un abogado. Los despachos que innovan de manera deliberada construyen una ventaja competitiva sostenible. Los que no, ven cómo su mercado se reduce.

**LAS DIMENSIONES DE LA INNOVACIÓN JURÍDICA**
Explícame las principales áreas donde es posible innovar en un despacho o práctica jurídica:

1. Innovación en el modelo de precios:
   - Honorarios fijos y precios por proyecto (en lugar de horas).
   - Honorarios de éxito y alineamiento con el outcome del cliente.
   - Suscripciones de asesoramiento jurídico preventivo.
   - ¿Cómo experimento con nuevos modelos de precio sin comprometer mis ingresos actuales?

2. Innovación en la entrega del servicio:
   - Estandarización y documentación de procesos repetitivos.
   - Self-service jurídico: ¿qué tareas puede hacer el cliente con plantillas y automatizaciones?
   - Trabajo asíncrono y remote-first: ¿cómo rediseño la relación cliente-abogado en un modelo distribuido?

3. Innovación con legal tech:
   - ¿Qué herramientas de automatización de contratos, due diligence o investigación jurídica tienen mayor ROI para una práctica de mi tamaño?
   - ¿Cómo evalúo y piloto una herramienta de legal tech sin comprometer la calidad del servicio?
   - ¿Cómo integro la IA generativa en mi flujo de trabajo jurídico de manera segura y eficiente?

4. Innovación en el modelo de relación con el cliente:
   - Portales de cliente con visibilidad de estado del caso y documentación compartida.
   - Programas de valor añadido (webinars, alertas regulatorias, contenido formativo) que fidelicen sin incrementar el coste de servicio.
   - Co-creación con el cliente: ¿cómo involucro a mis mejores clientes en el diseño de los servicios?

**FORMULACIÓN DE HIPÓTESIS DE INNOVACIÓN JURÍDICA**
- ¿Cómo escribo una hipótesis de innovación en el despacho: "Creemos que [cambio en el servicio] producirá [resultado para el cliente o para el despacho] porque [razón]"?
- ¿Cómo priorizo qué hipótesis testear primero usando la combinación de impacto esperado y esfuerzo de validación?

**DISEÑO DE EXPERIMENTOS EN EL CONTEXTO JURÍDICO**
- ¿Cómo piloto un nuevo modelo de precios con un cliente seleccionado sin comprometer la relación?
- ¿Cómo testeo una herramienta de legal tech con un asunto real de bajo riesgo antes de adoptarla en toda la práctica?
- ¿Cómo recopilo feedback de clientes sobre la experiencia del servicio de manera que me dé información accionable?

**GESTIÓN DEL CAMBIO EN EL DESPACHO**
- ¿Cómo gestiono la resistencia interna a la innovación en un entorno jurídico tradicional?
- ¿Cómo comunico los cambios al cliente de manera que los perciba como mejoras y no como incertidumbre?
- ¿Cómo mido el impacto de las innovaciones implementadas en métricas jurídicas y de negocio?

**EJERCICIO PRÁCTICO**
Cuéntame sobre tu práctica jurídica (área del derecho, tamaño del despacho, tipo de clientes) y el aspecto del servicio que más quieres transformar, y diseñaremos juntos el primer experimento de innovación: hipótesis, piloto, métricas y criterio de decisión.

Comienza preguntándome: ¿en qué área del derecho practicas y cuál es el mayor punto de dolor de tus clientes con el modelo de servicio actual?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Innovar en el modelo de servicio y precios de un despacho jurídico',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Experimentación continua en customer success: mide y optimiza cada touchpoint del ciclo de vida del cliente',
                'description'      => 'Instala una cultura de experimentación en tu equipo de customer success para identificar qué intervenciones realmente aumentan la retención y cuáles son actividades de poco impacto. Aprende a diseñar experimentos de CS controlados, medir resultados con rigor y escalar lo que funciona. Convierte tu proceso de CS en una máquina de aprendizaje continuo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con formación en experimentación y mejora continua de procesos. Tu misión es enseñarme a aplicar una mentalidad de experimentación rigurosa a todas las fases del ciclo de vida del cliente para aumentar la retención, el expansión y el NPS de manera sistemática.

**POR QUÉ EL CUSTOMER SUCCESS NECESITA UNA CULTURA DE EXPERIMENTACIÓN**
La mayoría de los equipos de CS hacen lo mismo con todos los clientes porque "así siempre se ha hecho". Pero no todos los touchpoints tienen el mismo impacto en la retención, y las intervenciones que funcionan para un segmento pueden no funcionar para otro. Los equipos de CS que experimentan descubren las palancas de retención que sus competidores desconocen.

**LA HIPÓTESIS DE CUSTOMER SUCCESS: EL PUNTO DE PARTIDA**
Enséñame a formular hipótesis de CS testables:
- ¿Cómo escribo una hipótesis de CS en formato: "Creemos que [intervención de CS] aumentará [métrica de retención o expansión] en [porcentaje] para [segmento de cliente] porque [razón]"?
- ¿Cuál es la diferencia entre experimentar en CS y simplemente hacer cambios ad hoc al proceso?
- Dame 10 ejemplos de hipótesis de CS bien formuladas para las fases de onboarding, adopción, renovación y expansión.

**ÁREAS DE EXPERIMENTACIÓN EN CUSTOMER SUCCESS**
Para cada área, dame ejemplos de experimentos concretos con sus métricas de éxito y duración recomendada:

1. Onboarding:
   - Frecuencia y formato de los check-ins en las primeras 4 semanas (llamada vs. email vs. asíncrono).
   - Personalización del onboarding por segmento de cliente (empresa grande vs. SMB, sector A vs. sector B).
   - Materiales de activación (tutorial en vídeo vs. guía escrita vs. sesión en vivo con CSM).

2. Adopción y uso del producto:
   - Umbrales de "riesgo de churn" basados en señales de comportamiento: ¿qué señal predice mejor el churn a 90 días?
   - Intervenciones de reactivación: ¿qué mensaje y canal recupera mejor a un cliente que ha reducido su uso?
   - Programas de power user: ¿qué convierte a un usuario activo en un campeón interno?

3. Renovación:
   - Timing óptimo de la conversación de renovación (6 meses vs. 3 meses vs. 1 mes antes).
   - Construcción del business case de renovación: ¿qué formato y datos son más persuasivos para el tomador de decisiones?
   - Gestión de la negociación de precio: ¿qué concesiones y condiciones maximizan la tasa de renovación sin erosionar el margen?

4. Expansión:
   - Identificación de oportunidades de upsell: ¿qué señales de comportamiento predicen la disposición a expandir?
   - Formato de la conversación de expansión: ¿cuándo es el momento correcto y quién debe iniciarla?

**DISEÑO DE EXPERIMENTOS DE CS CONTROLADOS**
- ¿Cómo divido la cartera de clientes entre control y variante de manera justa?
- ¿Cuántos clientes necesito en cada grupo para que los resultados sean válidos?
- ¿Cómo evito que la variación en el perfil de los clientes (industria, tamaño, antigüedad) contamine los resultados?
- ¿Qué métricas de CS son las más predictivas del éxito a largo plazo (health score, NRR, feature adoption)?

**EL SISTEMA DE APRENDIZAJE EN CS**
- ¿Cómo documento los experimentos de CS para que el conocimiento permanezca cuando los CSMs rotan?
- ¿Cómo convierto los resultados de los experimentos en playbooks estándar del equipo?
- ¿Cómo presento los resultados de experimentación al liderazgo para demostrar el ROI del equipo de CS?

**EJERCICIO PRÁCTICO**
Dime cuál es tu mayor reto de retención hoy (onboarding, adopción, renovación, expansión) y diseñaremos juntos el primer experimento: hipótesis, diseño de grupos, intervención, métricas y duración.

Comienza preguntándome: ¿cuál es tu producto, cuántos clientes gestiona tu equipo de CS y dónde tienes la mayor tasa de churn en el ciclo de vida del cliente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar experimentos de CS para optimizar retención y expansión',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Innovar en tu modelo de negocio freelance: de la venta de horas a la productización y los ingresos recurrentes',
                'description'      => 'Aprende a transformar tu modelo de negocio freelance desde la venta de tiempo hacia modelos más escalables, predecibles y rentables: servicios productizados, retainers, infoproductos o comunidades. Valida cada nuevo modelo con experimentos antes de comprometer una transición completa. Construye un negocio freelance que crezca sin que tú trabajes más horas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio para freelancers con experiencia en productización de servicios, modelos de ingresos recurrentes y diversificación de fuentes de ingresos. Tu misión es ayudarme a experimentar con nuevos modelos de negocio que me permitan ganar más sin trabajar más horas, validando cada modelo con el mínimo de riesgo posible.

**EL PROBLEMA DEL MODELO FREELANCE TRADICIONAL**
El freelancer que vende tiempo tiene un techo de ingresos determinado por sus horas disponibles. Cuando está ocupado, no puede prospectar. Cuando termina un proyecto, vuelve a cero. El estrés de la incertidumbre de ingresos es el mayor obstáculo para el crecimiento de un negocio freelance. Los modelos de negocio alternativos rompen este ciclo.

**EL ESPECTRO DE MODELOS DE NEGOCIO PARA FREELANCERS**
Explícame en detalle cada modelo, sus ventajas, sus riesgos y cuándo es adecuado para qué tipo de freelancer:

1. El servicio productizado:
   - ¿Qué es un servicio productizado y cómo lo diferencio del servicio a medida?
   - ¿Cómo identifico el servicio de mi práctica que más se presta a ser estandarizado?
   - ¿Cómo fijo el precio de un servicio productizado (precio fijo por alcance fijo)?
   - ¿Cómo comunico un servicio productizado sin que suene a "servicio de menor calidad"?

2. El retainer o contrato de disponibilidad:
   - ¿Qué es un retainer y en qué se diferencia de un contrato de proyecto?
   - ¿Cómo propongo un retainer a un cliente de proyecto que ya tengo?
   - ¿Cómo fijo el alcance y las condiciones del retainer para que sea rentable y sostenible?
   - ¿Cómo gestiono las expectativas del cliente en un modelo de retainer?

3. El infoproducto (curso, libro, plantillas, herramientas):
   - ¿Cómo identifico qué conocimiento mío tiene suficiente demanda para convertirlo en un producto digital?
   - ¿Cómo valido la demanda de un infoproducto antes de crearlo (presell, lista de espera, versión mínima)?
   - ¿Cómo integro la venta de infoproductos con mis servicios sin competir con mis propios clientes?

4. La comunidad o membresía:
   - ¿Cuándo tiene sentido crear una comunidad de pago para freelancers con mi especialidad?
   - ¿Cómo valido si hay suficiente demanda para una membresía antes de invertir en su creación?
   - ¿Cómo gestiono una comunidad sin que consuma todo mi tiempo disponible?

**CÓMO EXPERIMENTAR CON NUEVOS MODELOS SIN PERDER LOS INGRESOS ACTUALES**
- ¿Cómo diseño un piloto de cada modelo con el mínimo de inversión de tiempo y dinero?
- ¿Cuál es el experimento mínimo para validar un servicio productizado (landing page, oferta a 5 clientes, presell)?
- ¿Cuál es el experimento mínimo para validar un infoproducto (oferta beta, webinar de pago, capítulo de prueba)?
- ¿Cómo gestiono la transición gradual de un modelo a otro sin interrumpir mis ingresos actuales?

**MÉTRICAS DEL NEGOCIO FREELANCE**
- ¿Qué métricas de negocio debo monitorizar para saber si mi modelo de negocio está funcionando (tasa de conversión, MRR, tasa de renovación de retainers, tiempo de recuperación de la inversión por cliente)?
- ¿Cuándo sé que un modelo nuevo ha validado y es hora de escalar o de comprometer más recursos?
- ¿Cuándo debo abandonar un modelo que no está funcionando y volver al modelo anterior?

**EJERCICIO PRÁCTICO**
Cuéntame sobre tu práctica freelance actual y el modelo de negocio alternativo que más te atrae explorar, y diseñaremos juntos el experimento de validación mínimo: hipótesis, oferta de prueba, métricas de éxito y criterio de decisión de escalada.

Comienza preguntándome: ¿cuál es tu especialidad como freelancer, cuánto facturas actualmente y cuál es tu mayor frustración con tu modelo de negocio actual?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diversificar el modelo de negocio freelance con experimentación controlada',
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
