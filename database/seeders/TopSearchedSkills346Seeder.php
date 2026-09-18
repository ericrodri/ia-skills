<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills346Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación de crisis en redes sociales para marcas',
                'description'      => 'Aprende a gestionar la comunicación de tu marca en redes sociales durante una crisis reputacional. Este prompt te guía para redactar mensajes empáticos, transparentes y oportunos que preserven la confianza de tu audiencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación de crisis y gestión de reputación digital con más de 15 años de experiencia trabajando con marcas en situaciones de alto riesgo reputacional.

Voy a darte el contexto de una crisis de comunicación que está afectando a mi marca en redes sociales. Tu tarea es ayudarme a diseñar una estrategia de respuesta completa y ejecutable de inmediato.

**CONTEXTO DE LA CRISIS:**
[Describe aquí el incidente: qué ocurrió, cuándo, quiénes están involucrados, cuál es el alcance en redes sociales (menciones, hashtags, sentimiento general), y si hay cobertura mediática.]

**LO QUE NECESITO QUE HAGAS:**

1. **Diagnóstico inicial (primeros 30 minutos)**
   - Evalúa el nivel de gravedad de la crisis (escala 1-5) y explica tu razonamiento.
   - Identifica los grupos de stakeholders afectados y su nivel de urgencia.
   - Determina si la crisis requiere escalado interno inmediato (CEO, Legal, Comité de Crisis).

2. **Mensajes clave por plataforma**
   - Redacta un mensaje de respuesta inicial para Twitter/X (máx. 280 caracteres).
   - Redacta una declaración más extensa para Instagram o LinkedIn (máx. 400 palabras).
   - Propón el texto de un comunicado de prensa si la crisis lo requiere.
   - Sugiere respuestas tipo para los comentarios más frecuentes y críticos.

3. **Protocolo de las primeras 24 horas**
   - Define con qué frecuencia publicar actualizaciones y en qué tono.
   - Indica qué NO se debe decir o hacer (errores comunes que amplifican la crisis).
   - Recomienda si se deben pausar campañas de pago activas y por cuánto tiempo.
   - Establece quién debe ser el único portavoz autorizado y qué formación mínima necesita.

4. **Gestión de la comunidad en tiempo real**
   - Clasifica los tipos de comentarios que recibirás (trolls, afectados genuinos, periodistas, aliados) y cómo tratar cada uno.
   - Proporciona 5 respuestas modelo para las críticas más duras, con tono empático pero firme.
   - Explica cuándo y cómo bloquear o silenciar sin agravar la situación.

5. **Plan de recuperación post-crisis (semana 1 y semana 2-4)**
   - Diseña acciones concretas para recuperar la confianza: contenido, acciones de responsabilidad, seguimiento público de compromisos.
   - Define los KPIs que medirán si la reputación se está recuperando (sentimiento, reach positivo, menciones, NPS si aplica).
   - Propón una narrativa de "lo que aprendimos" para convertir la crisis en oportunidad de marca.

6. **Checklist de salida de crisis**
   Lista de 10 ítems que debo verificar antes de declarar que la crisis ha sido gestionada y podemos retomar la comunicación habitual.

**FORMATO DE RESPUESTA:**
Estructura tu respuesta en secciones claras con headers. Usa listas numeradas para pasos secuenciales y listas de puntos para opciones o ejemplos. Incluye ejemplos de texto listos para copiar y pegar. Sé directo y práctico: esta es una situación de alta presión y necesito respuestas accionables, no teoría.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar la reputación de marca en redes sociales durante una crisis',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo (Software)
            [
                'profession_id'    => 2,
                'title'            => 'Plan de continuidad del negocio ante fallos críticos de sistema',
                'description'      => 'Diseña un Business Continuity Plan (BCP) técnico para cuando un sistema crítico falla en producción. El prompt te ayuda a estructurar runbooks, definir RPO/RTO y organizar la respuesta del equipo de ingeniería.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de sistemas senior especializado en resiliencia de software, disaster recovery y gestión de incidentes en entornos de producción de alta disponibilidad.

Necesito que me ayudes a elaborar un Plan de Continuidad del Negocio (BCP) técnico para mi equipo de desarrollo ante un fallo crítico de uno de nuestros sistemas en producción.

**CONTEXTO DEL SISTEMA:**
[Describe tu arquitectura: tipo de aplicación (monolito, microservicios, serverless), stack tecnológico, proveedor cloud, número aproximado de usuarios activos, nivel de criticidad del negocio y dependencias externas clave.]

**OBJETIVOS DEL PLAN:**

1. **Clasificación del incidente**
   - Define una matriz de severidades (P0, P1, P2, P3) con criterios concretos: porcentaje de usuarios afectados, tiempo de degradación, impacto en ingresos.
   - Explica qué tipo de fallo activa cada nivel (caída total, degradación parcial, lentitud, fallo de integración externa).

2. **Runbook de respuesta inmediata (primeros 15 minutos)**
   - Pasos exactos para el ingeniero de guardia: qué verificar primero, qué comandos ejecutar para diagnosticar, cómo aislar el componente fallido.
   - Árbol de decisión: si el problema es X, hacer Y; si es Z, hacer W.
   - Lista de herramientas de observabilidad que deben consultarse y en qué orden (logs, métricas, trazas, alertas).

3. **Escalado y comunicación interna**
   - Define quién notificar según la severidad (on-call, tech lead, CTO, CEO).
   - Propón la cadencia de actualizaciones en el canal de incidentes (Slack, Teams o similar).
   - Redacta una plantilla de mensaje de incidente inicial y de actualización periódica.

4. **Estrategias de mitigación técnica**
   - Enumera las tácticas de mitigación más habituales según el tipo de fallo: rollback de despliegue, feature flags, circuit breakers, escalado horizontal, failover a región secundaria, modo mantenimiento.
   - Para cada táctica, indica el tiempo estimado de implementación y el riesgo asociado.

5. **Comunicación externa durante el incidente**
   - Plantilla de mensaje para la página de estado (statuspage.io o similar).
   - Plantilla de email o mensaje in-app para usuarios afectados.
   - Pautas sobre qué información técnica no debe compartirse públicamente.

6. **Post-mortem sin culpas (blameless post-mortem)**
   - Estructura el documento de post-mortem: timeline del incidente, causa raíz (5 Whys), impacto cuantificado, acciones de mejora con responsable y fecha.
   - Explica cómo facilitar la reunión de post-mortem para que sea constructiva y no defensiva.

7. **Métricas de resiliencia a monitorizar continuamente**
   - MTTR (Mean Time to Recovery), MTTD (Mean Time to Detect), frecuencia de incidentes por severidad, SLO/SLA cumplimiento.
   - Recomienda una cadencia de revisión de estos KPIs y con quién compartirlos.

8. **Ejercicios de preparación (Game Days y Chaos Engineering)**
   - Sugiere 3 escenarios de simulación de fallos que mi equipo debería practicar trimestralmente.
   - Explica cómo organizar un Game Day sin impactar producción.

**FORMATO DE RESPUESTA:**
Devuelve el plan estructurado en secciones con headers claros. Incluye plantillas de texto listas para adaptar, árboles de decisión en formato de lista anidada y comandos de ejemplo donde sea relevante. El tono debe ser técnico pero claro, pensado para ingenieros bajo presión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear runbooks y planes de respuesta a incidentes críticos en producción',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Guía de comunicación visual durante una crisis corporativa',
                'description'      => 'Define los principios visuales y de diseño que debe seguir tu marca cuando comunica en situaciones de crisis. Este prompt te ayuda a crear una guía de identidad visual de emergencia coherente con los valores de la empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte senior con especialización en branding corporativo y comunicación de crisis visual. Tienes experiencia diseñando sistemas de identidad para empresas que han atravesado situaciones críticas y necesitaban comunicar con urgencia sin perder coherencia de marca.

Necesito que me ayudes a crear una guía de comunicación visual de emergencia para mi organización. Esta guía definirá qué elementos visuales usar y cuáles evitar cuando la empresa atraviesa una crisis pública.

**CONTEXTO DE LA MARCA:**
[Describe tu identidad de marca actual: paleta de colores principal, tipografías, tono habitual, tipo de empresa, audiencia principal y valores de marca declarados.]

**LO QUE NECESITO:**

1. **Principios de diseño en crisis**
   - Explica por qué ciertos elementos visuales (colores brillantes, ilustraciones lúdicas, animaciones) son inapropiados durante una crisis y cómo afectan la percepción de la audiencia.
   - Define 5 principios de diseño de emergencia: sobriedad, claridad, accesibilidad, humanidad y coherencia.

2. **Paleta de colores de emergencia**
   - Propón una paleta reducida y sobria derivada de la identidad actual pero adaptada al contexto de crisis (máximo 3 colores: neutro principal, acento discreto, fondo).
   - Justifica cada elección desde la psicología del color en momentos de incertidumbre.
   - Indica qué colores de la paleta habitual deben evitarse temporalmente y por qué.

3. **Tipografía y jerarquía de información**
   - Recomienda el peso tipográfico y tamaño mínimo para garantizar legibilidad en comunicados urgentes.
   - Define la jerarquía: título del comunicado, cuerpo del mensaje, datos de contacto o próximos pasos.
   - Sugiere si se debe mantener la tipografía habitual o cambiar temporalmente a una más neutral.

4. **Plantillas de diseño por canal**
   - Describe los elementos que debe incluir una plantilla de post para Instagram en modo crisis (proporciones, área de texto, posición del logo).
   - Describe la maquetación de un comunicado en PDF o web: márgenes, espaciado, uso del logo, firma institucional.
   - Propón el diseño de una cabecera de email de crisis: sobria, reconocible, con espacio para un mensaje claro.

5. **Uso del logo y elementos de marca**
   - Indica si el logo debe aparecer en versión monocromática, reducida o con exclusión de zona de seguridad ampliada.
   - Especifica cuándo usar el isotipo solo versus el logotipo completo.
   - Explica cómo añadir un elemento de "modo crisis" sin destruir la identidad (por ejemplo, una banda de color neutral, un sello de comunicado oficial).

6. **Imágenes y fotografía**
   - Define qué tipo de imágenes son apropiadas durante una crisis (personas reales, contextos neutros, fotografía documental vs. stock ilustrativo).
   - Lista los tipos de imagen que deben evitarse absolutamente (humor, celebración, lifestyle aspiracional).
   - Sugiere cómo gestionar el banco de imágenes existente: qué archivar temporalmente, qué puede mantenerse.

7. **Accesibilidad en comunicaciones de emergencia**
   - Recuerda los mínimos de contraste (WCAG AA) y por qué son especialmente críticos cuando el público está bajo estrés.
   - Propón cómo garantizar que el mensaje sea legible en móvil con mala conexión.

8. **Checklist de revisión de diseño antes de publicar**
   Lista de 10 puntos que el diseñador debe verificar antes de aprobar cualquier pieza de comunicación de crisis.

**FORMATO DE RESPUESTA:**
Estructura tu respuesta en secciones con títulos claros. Incluye descripciones específicas con valores concretos (códigos de color, tamaños en puntos o píxeles, porcentajes de opacidad). Usa listas de verificación donde sea útil. El tono debe ser profesional y práctico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear guías de identidad visual de emergencia para comunicaciones de crisis',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de clientes y pipeline de ventas durante una crisis empresarial',
                'description'      => 'Aprende a mantener las relaciones comerciales y proteger el pipeline de ventas cuando tu empresa atraviesa una crisis. Este prompt te ayuda a priorizar cuentas, redactar comunicaciones y negociar en contextos de incertidumbre.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con amplia experiencia en ventas B2B y en gestión de cuentas estratégicas durante periodos de turbulencia empresarial, incluyendo reestructuraciones, problemas reputacionales o crisis de servicio.

Necesito tu ayuda para proteger mi pipeline de ventas y mantener las relaciones con mis clientes mientras mi empresa atraviesa una crisis.

**CONTEXTO DE LA SITUACIÓN:**
[Describe el tipo de crisis (reputacional, operativa, financiera, regulatoria), el tamaño de tu cartera de clientes, el ticket medio, la fase del ciclo de venta y el tiempo estimado de resolución de la crisis.]

**LO QUE NECESITO:**

1. **Segmentación y priorización de cuentas en crisis**
   - Explica cómo clasificar la cartera en tres categorías: cuentas en riesgo alto (propensas a cancelar o pausar), cuentas estables (relación sólida, bajo riesgo) y cuentas en oportunidad (la crisis puede acelerar el cierre si se gestiona bien).
   - Define los criterios para esta clasificación: antigüedad, ARR, nivel de relación personal, dependencia del producto/servicio.

2. **Comunicación proactiva con clientes**
   - Redacta una plantilla de email para contactar proactivamente a clientes de alto valor antes de que se enteren por terceros.
   - Proporciona una guía de conversación para la llamada de seguimiento: cómo abrir, qué decir, cómo responder a las preguntas difíciles, cómo cerrar con un compromiso claro.
   - Explica qué información compartir y qué no, dependiendo del estado de la crisis.

3. **Manejo de objeciones durante la crisis**
   - Lista las 7 objeciones más comunes que un cliente planteará durante una crisis empresarial del proveedor.
   - Para cada objeción, proporciona una respuesta honesta, empática y que redirija hacia la continuidad de la relación.
   - Indica cuándo es apropiado ofrecer compensaciones (descuentos, extensiones de contrato, mejoras de servicio) y cómo hacerlo sin deteriorar el margen.

4. **Protección del pipeline de nuevas ventas**
   - Explica cómo gestionar los prospectos en fase avanzada que pueden enterarse de la crisis durante el proceso de decisión.
   - Propón cómo reencuadrar la narrativa: convertir la transparencia sobre la crisis en una ventaja competitiva.
   - Indica qué oportunidades deben pausarse temporalmente y cuáles pueden acelerarse aprovechando el contexto.

5. **Negociación en contexto de crisis**
   - Describe las dinámicas de poder que cambian cuando tu empresa está en crisis y cómo compensarlas.
   - Proporciona tácticas para mantener el precio y las condiciones sin perder el contrato.
   - Explica cuándo y cómo conceder, y cómo hacerlo de forma que refuerce la relación en lugar de debilitarla.

6. **Coordinación con otros departamentos**
   - Define qué información necesitas de Legal, Comunicación, Producto y Operaciones para responder con rigor a las preguntas de los clientes.
   - Propón un protocolo de escalado interno cuando un cliente amenaza con cancelar o llevar el caso a sus superiores.

7. **Métricas de seguimiento durante la crisis**
   - KPIs que debo monitorizar semanalmente: churn rate, NRR (Net Revenue Retention), número de conversaciones de retención activas, win rate en pipeline vs. período anterior.
   - Umbral de alerta: qué niveles de cada métrica deben activar una reunión de emergencia con la dirección.

8. **Plan de recuperación comercial post-crisis**
   - Acciones de reactivación: cómo retomar relaciones con clientes que pausaron, cómo reconectar con prospectos que se cayeron del pipeline.
   - Propón una campaña de confianza para los 90 días posteriores a la resolución de la crisis.

**FORMATO DE RESPUESTA:**
Organiza tu respuesta en secciones numeradas con headers. Incluye plantillas de texto listas para adaptar, listas de objeciones y respuestas, y checklists donde apliquen. El tono debe ser directo y práctico, orientado a la acción comercial inmediata.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proteger el pipeline y las cuentas clave durante una crisis empresarial',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del roadmap de producto durante una crisis organizacional',
                'description'      => 'Aprende a adaptar el roadmap y las prioridades de producto cuando la empresa atraviesa una crisis. Este prompt te ayuda a tomar decisiones ágiles, comunicar cambios al equipo y mantener el foco en el valor para el usuario.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product con experiencia en startups y empresas de escala media que han navegado situaciones de crisis: recortes de presupuesto, pivotes estratégicos, problemas reputacionales o fallos críticos de producto.

Necesito que me ayudes a gestionar el roadmap y las prioridades de producto en el contexto de una crisis que está afectando a mi organización.

**CONTEXTO:**
[Describe el tipo de crisis (financiera, reputacional, técnica, regulatoria), el estado actual del roadmap, el tamaño del equipo de producto e ingeniería, y los OKRs del trimestre en curso.]

**LO QUE NECESITO:**

1. **Evaluación de impacto en el roadmap**
   - Explica cómo auditar el roadmap actual para identificar qué iniciativas deben acelerarse, pausarse o cancelarse en función del contexto de crisis.
   - Define un marco de priorización de emergencia con cuatro cuadrantes: impacto en retención / impacto en ingresos / esfuerzo de implementación / urgencia para la crisis.
   - Cómo decidir qué features ya lanzadas deben desactivarse temporalmente si están relacionadas con el origen de la crisis.

2. **Comunicación del cambio de prioridades**
   - Redacta una plantilla de mensaje para comunicar al equipo de producto e ingeniería que el roadmap cambia por causa de la crisis.
   - Explica cómo mantener la motivación del equipo cuando se cancelan proyectos en los que llevan semanas trabajando.
   - Define cómo comunicar el cambio de prioridades a stakeholders internos (CEO, inversores, ventas, customer success).

3. **Sprint de emergencia**
   - Define qué es un "sprint de crisis" y cuándo convocarlo.
   - Propón la estructura de un sprint de 1-2 semanas enfocado en la estabilización del producto durante la crisis: qué entra al backlog, qué sale, cómo se decide.
   - Explica cómo gestionar la deuda técnica que se genera por las decisiones rápidas tomadas durante la crisis.

4. **Métricas de producto en modo crisis**
   - Define qué métricas deben monitorizarse diariamente en lugar de semanalmente durante una crisis (engagement, churn, errores críticos, tickets de soporte, NPS transaccional).
   - Explica cómo crear un dashboard de crisis en 24 horas con las herramientas que ya tienes.
   - Define los umbrales que deben activar una reunión de emergencia con el equipo de liderazgo.

5. **Gestión de la voz del usuario durante la crisis**
   - Cómo priorizar el feedback de usuarios en tiempos de crisis: qué canales escuchar primero, cómo distinguir el ruido de la señal.
   - Propón cómo hacer investigación de usuario express (2-3 días) para validar si las decisiones tomadas están teniendo el efecto esperado.
   - Explica cuándo y cómo comunicar a los usuarios los cambios de producto derivados de la crisis.

6. **Toma de decisiones bajo incertidumbre**
   - Proporciona un marco de toma de decisiones para situaciones donde la información es incompleta y el tiempo es crítico.
   - Explica cómo documentar las decisiones tomadas en crisis para que el post-mortem sea productivo.
   - Define cuándo es apropiado tomar decisiones unilaterales como PM y cuándo es necesario el consenso.

7. **Recuperación del roadmap post-crisis**
   - Propón cómo hacer una retrospectiva de roadmap tras superar la crisis: qué se aprendió, qué cambiaría del proceso, qué iniciativas merecen retomarse.
   - Define el proceso para comunicar a los stakeholders la vuelta a la normalidad operativa.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Incluye marcos de decisión visualizables como listas anidadas o matrices en texto. Proporciona plantillas de comunicación listos para adaptar. El tono debe ser estratégico y práctico, orientado a un PM que tiene que actuar bajo presión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Adaptar el roadmap y gestionar prioridades de producto en situaciones de crisis',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personas y cultura organizacional durante una crisis',
                'description'      => 'Aprende a gestionar el impacto humano de una crisis empresarial: comunicación interna, contención del talento clave, gestión del cambio y reconstrucción de la cultura tras la tormenta.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Personas (CHRO) con experiencia en gestión del cambio, crisis organizacionales y cultura empresarial. Has acompañado a empresas en procesos de reestructuración, escándalos reputacionales, despidos masivos y cambios de liderazgo abrupto.

Necesito tu ayuda para gestionar el impacto humano y cultural de una crisis que está atravesando mi organización.

**CONTEXTO:**
[Describe el tipo de crisis y su origen, el tamaño de la plantilla, el estado del clima laboral previo a la crisis, y si hay procesos de selección o desvinculación en curso que se ven afectados.]

**LO QUE NECESITO:**

1. **Diagnóstico del impacto humano**
   - Explica cómo evaluar rápidamente el estado emocional y la percepción de seguridad de los equipos mediante pulsos cortos o conversaciones estructuradas.
   - Define qué señales de alerta indican que el talento clave está considerando marcharse.
   - Propón una segmentación de la plantilla por nivel de riesgo de fuga durante la crisis.

2. **Comunicación interna durante la crisis**
   - Redacta una plantilla de comunicado interno para el día 1 de la crisis: honesto, tranquilizador sin ser condescendiente, y orientado a la acción.
   - Define la cadencia de comunicación interna durante la crisis (frecuencia, formato, quién firma).
   - Explica qué información compartir con la plantilla, qué reservar para mandos intermedios y qué solo para el equipo directivo.

3. **Retención del talento crítico**
   - Identifica los roles que son irreemplazables a corto plazo y cuya salida en crisis sería catastrófica.
   - Propón medidas de retención de emergencia que no dependan exclusivamente de dinero: proyectos protagonistas, visibilidad, flexibilidad, comunicación directa con la dirección.
   - Redacta una guía para que los managers tengan conversaciones individuales con sus reportes más críticos durante la crisis.

4. **Gestión del bienestar y la salud mental**
   - Enumera las señales de burnout y deterioro emocional que los managers deben detectar en sus equipos.
   - Propón un protocolo de apoyo psicológico de emergencia: qué recursos activar, cómo comunicarlos sin estigmatizar.
   - Explica cómo proteger a los equipos de la sobrecarga de trabajo cuando la crisis genera demanda extraordinaria.

5. **Liderazgo en tiempos de crisis**
   - Define qué comportamientos de liderazgo son más efectivos durante una crisis (presencia, honestidad, escucha activa, decisiones rápidas) y cuáles son contraproducentes.
   - Propón cómo preparar a los mandos intermedios para que actúen como amortiguadores del impacto emocional hacia sus equipos.
   - Redacta una guía de conversaciones difíciles para managers: cómo hablar de incertidumbre sin amplificarla.

6. **Cultura y valores bajo presión**
   - Explica por qué las crisis son el momento de mayor presión para la cultura organizacional y cómo evitar que los valores declarados colapsen ante las decisiones de urgencia.
   - Propón acciones simbólicas y concretas que refuercen los valores durante la crisis.
   - Define cómo documentar las decisiones tomadas en crisis para el aprendizaje cultural futuro.

7. **Reconstrucción post-crisis**
   - Diseña un plan de 90 días para reconstruir el clima laboral y la confianza interna tras superar la crisis.
   - Propón cómo hacer una retrospectiva cultural: qué aprendió la organización de cómo trató a sus personas durante la crisis.
   - Indica cuándo y cómo retomar iniciativas de cultura, beneficios o desarrollo que se pausaron.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers claros. Incluye plantillas de comunicación, guías de conversación, checklists y marcos de decisión. El tono debe ser humano, empático y práctico, orientado a un profesional de RRHH que opera bajo presión y necesita herramientas accionables de inmediato.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el impacto humano y cultural de una crisis organizacional',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Planificación financiera de emergencia para la gestión de crisis empresariales',
                'description'      => 'Aprende a construir un plan financiero de emergencia cuando la empresa enfrenta una crisis. El prompt te guía en la revisión de liquidez, el recorte de costes y la comunicación con inversores y acreedores.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO con experiencia en gestión financiera de crisis, reestructuraciones corporativas y negociación con inversores y entidades financieras en situaciones de alta presión.

Necesito que me ayudes a construir un plan financiero de emergencia para mi empresa, que actualmente atraviesa una crisis que compromete su estabilidad financiera a corto o medio plazo.

**CONTEXTO FINANCIERO ACTUAL:**
[Describe el tipo de crisis y su origen financiero o impacto financiero, el runway actual (meses de caja disponibles), la estructura de deuda, los principales compromisos de pago próximos y si hay inversores o socios financieros involucrados.]

**LO QUE NECESITO:**

1. **Diagnóstico de liquidez urgente**
   - Explica cómo construir un cash flow forecast semanal para los próximos 13 semanas (el "13-week cash flow").
   - Define las partidas críticas que deben monitorizarse diariamente: cobros pendientes, pagos comprometidos, gastos variables eliminables.
   - Identifica cuáles son las palancas de liquidez inmediata: acelerar cobros, negociar aplazamientos, desinversión de activos no esenciales.

2. **Plan de reducción de costes de emergencia**
   - Presenta un marco de decisión para clasificar costes en tres categorías: esenciales (no tocar), optimizables (revisar en 72 horas) y eliminables (parar ahora).
   - Explica cómo priorizar los recortes para proteger las capacidades core del negocio.
   - Define el proceso para ejecutar reducciones de personal si fueran necesarias: qué analizar antes, cómo calcular el impacto en runway, qué alternativas explorar primero.

3. **Negociación con acreedores y proveedores**
   - Proporciona un guion de negociación para pedir aplazamiento de pagos a proveedores: cómo plantear la conversación, qué ofrecer a cambio, cómo documentar el acuerdo.
   - Explica cómo priorizar a qué acreedores pagar primero cuando la liquidez es limitada.
   - Indica cuándo y cómo involucrar a asesores legales o financieros externos en las negociaciones.

4. **Comunicación con inversores y accionistas**
   - Redacta una plantilla de actualización de inversores en situación de crisis: honesta, con datos, con el plan de acción claro.
   - Explica cómo gestionar la junta de accionistas o el board en un momento de crisis financiera.
   - Define qué información es obligatoria compartir (según el tipo de empresa y su estructura accionarial) y qué puede reservarse.

5. **Opciones de financiación de emergencia**
   - Enumera las fuentes de financiación de emergencia más comunes: líneas de crédito revolventes, factoring, anticipo de clientes, ampliación de capital, deuda convertible, ayudas públicas.
   - Para cada opción, indica el tiempo estimado para obtener los fondos, el coste aproximado y los requisitos mínimos.
   - Explica cómo evaluar cuál es la opción más adecuada según el estado de la empresa.

6. **Modelo financiero de escenarios**
   - Explica cómo construir un modelo de tres escenarios (pesimista, base, optimista) para la crisis: qué variables modificar, qué asumir en cada uno.
   - Define los hitos financieros que deben lograrse para pasar de un escenario al siguiente.
   - Indica cómo usar este modelo para tomar decisiones operativas y comunicar con claridad a stakeholders.

7. **Métricas de salud financiera durante la crisis**
   - Define los KPIs financieros que deben revisarse semanalmente: burn rate, runway, días de cobro (DSO), días de pago (DPO), ratio de liquidez corriente.
   - Propón un dashboard financiero de crisis con las métricas mínimas necesarias.
   - Establece los umbrales de alerta que deben activar decisiones drásticas.

8. **Plan de salida de la crisis financiera**
   - Define los hitos que marcan el fin de la emergencia financiera y el inicio de la normalización.
   - Propón cómo reconstruir reservas y estabilizar el balance en los 6-12 meses posteriores.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye plantillas, guiones de negociación, listas de KPIs con valores de referencia y marcos de decisión. El tono debe ser técnico y directo, orientado a un CFO o director financiero que necesita actuar con rapidez y precisión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir un plan financiero de emergencia y gestionar la liquidez en crisis',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para la gestión de crisis corporativas',
                'description'      => 'Identifica las obligaciones legales, riesgos de responsabilidad y pasos procesales que una empresa debe gestionar durante una crisis. El prompt te ayuda a estructurar la respuesta legal y proteger a la organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado corporativo senior con experiencia en gestión de crisis legales, responsabilidad empresarial, derecho societario y comunicación con autoridades reguladoras. Has asesorado a empresas en situaciones de crisis reputacional, incidentes de datos, litigios colectivos y fallos de producto.

Necesito que me ayudes a estructurar la respuesta legal de mi empresa ante una crisis corporativa en curso.

**CONTEXTO DE LA CRISIS:**
[Describe el tipo de crisis (incidente de datos, fallo de producto, denuncia regulatoria, litigio colectivo, escándalo de conducta, crisis reputacional), el sector de actividad, la jurisdicción principal y si hay reguladores, medios de comunicación o litigantes ya involucrados.]

**LO QUE NECESITO:**

1. **Evaluación inicial de exposición legal**
   - Explica cómo identificar rápidamente los tipos de responsabilidad que puede generar la crisis: civil, penal, administrativa, regulatoria.
   - Define qué información debe recopilarse en las primeras 24 horas para que los abogados puedan evaluar la exposición con precisión.
   - Indica cuándo es obligatorio notificar a autoridades reguladoras (y los plazos típicos en la UE y en España para los supuestos más comunes).

2. **Preservación de evidencias y privilegio legal**
   - Explica el concepto de "legal hold" y cómo implementarlo de urgencia: qué documentos y comunicaciones preservar, quién debe recibirlo, en qué formato.
   - Define cómo proteger las comunicaciones internas bajo el privilegio abogado-cliente durante la investigación interna.
   - Indica qué errores de preservación de evidencias pueden agravar la responsabilidad de la empresa.

3. **Investigación interna**
   - Propón la estructura de una investigación interna de crisis: quién la lidera (consejo independiente vs. abogados internos), qué entrevistar, qué documentar.
   - Explica cuándo es recomendable contratar un bufete externo independiente para garantizar la imparcialidad.
   - Define cómo gestionar las declaraciones de empleados durante la investigación sin incurrir en represalias.

4. **Gestión de reguladores y autoridades**
   - Proporciona una guía de comunicación con autoridades reguladoras: cuándo comunicar proactivamente, qué incluir, qué tono usar.
   - Explica la diferencia entre cooperación voluntaria y cumplimiento obligatorio, y las ventajas estratégicas de la primera.
   - Define cómo preparar a los directivos para una eventual comparecencia o requerimiento de información.

5. **Gestión de litigios y reclamaciones**
   - Explica cómo evaluar la exposición a demandas individuales y colectivas derivadas de la crisis.
   - Define cuándo es estratégicamente mejor llegar a un acuerdo extrajudicial y cómo estructurarlo.
   - Propón cómo gestionar la comunicación pública sin crear admisiones de responsabilidad tácitas.

6. **Protección de directivos y administradores**
   - Explica la responsabilidad personal de consejeros y directivos (D&O) en situaciones de crisis y cómo activar el seguro D&O.
   - Define qué decisiones de gestión de crisis pueden generar responsabilidad personal y cómo documentar el proceso de toma de decisiones para protegerse.

7. **Comunicación externa con restricciones legales**
   - Explica cómo coordinar el mensaje público de la empresa con las restricciones legales (no admitir responsabilidad, no prejuzgar investigaciones en curso).
   - Define qué puede decir el portavoz, qué debe decir Legal y qué no debe decirse en ningún caso.

8. **Checklist legal de los primeros 7 días de crisis**
   Lista de 15 acciones legales prioritarias ordenadas cronológicamente para los primeros 7 días de gestión de la crisis.

**AVISO IMPORTANTE:**
Esta respuesta tiene carácter informativo y orientativo. Para decisiones legales concretas, siempre consulta con un abogado cualificado en la jurisdicción correspondiente.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers claros. Incluye checklists, plazos de referencia y ejemplos de lenguaje legal apropiado. El tono debe ser técnico y preciso, orientado a un directivo legal o General Counsel que necesita estructurar la respuesta con urgencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estructurar la respuesta legal y proteger a la empresa durante una crisis corporativa',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Retención de clientes y gestión de cuentas durante una crisis empresarial',
                'description'      => 'Aprende a mantener y reforzar las relaciones con los clientes cuando tu empresa atraviesa una crisis. Este prompt te guía en la priorización de cuentas, la comunicación empática y las estrategias de retención de emergencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Customer Success con experiencia en SaaS B2B y en la gestión de crisis de servicio y reputación que afectan a la base de clientes. Has liderado equipos de CS en situaciones donde la confianza del cliente estaba en riesgo y la retención era la prioridad número uno.

Necesito tu ayuda para gestionar la relación con mis clientes durante una crisis que está afectando a mi empresa y puede comprometer la renovación de contratos y la confianza en el servicio.

**CONTEXTO:**
[Describe el tipo de crisis y cómo afecta directamente a los clientes (caída de servicio, incidente de datos, problema de calidad, cambio drástico de producto o precio), el número de clientes activos, el ARR bajo riesgo y el equipo de CS disponible.]

**LO QUE NECESITO:**

1. **Clasificación del riesgo de churn**
   - Explica cómo segmentar la base de clientes por nivel de riesgo durante la crisis: riesgo crítico (cancela en los próximos 30 días si no actuamos), riesgo moderado y bajo riesgo.
   - Define los criterios para esta clasificación: NPS reciente, uso del producto, antigüedad, interacciones de soporte recientes, tamaño de cuenta.
   - Propón cómo asignar los recursos del equipo de CS según la segmentación.

2. **Comunicación proactiva por segmento**
   - Redacta un email de contacto proactivo para cuentas de riesgo crítico: empático, honesto, orientado a la acción, firmado por un responsable senior.
   - Redacta una comunicación para el segmento de riesgo moderado: informativa, tranquilizadora, con enlace a recursos de ayuda.
   - Define cuándo la comunicación debe escalarse al CEO o al VP of Sales para una llamada personal.

3. **Guión de conversación para llamadas de retención**
   - Estructura una llamada de retención de 30 minutos: apertura empática, escucha activa, manejo de la frustración, presentación del plan de acción, cierre con compromiso.
   - Proporciona respuestas para las 5 preguntas más difíciles que un cliente hará durante la crisis.
   - Explica cuándo y cómo ofrecer compensaciones (créditos, extensiones, mejoras) sin deteriorar el valor percibido del servicio.

4. **Gestión de escalados y clientes muy enfadados**
   - Define el protocolo para gestionar a un cliente que amenaza con cancelar de inmediato o que ya ha iniciado el proceso de baja.
   - Proporciona técnicas de de-escalada emocional adaptadas al contexto B2B.
   - Indica cuándo es momento de aceptar la cancelación con gracia y cómo hacerlo de forma que preserve la posibilidad de retomar la relación en el futuro.

5. **Coordinación interna durante la crisis**
   - Define qué información necesita el equipo de CS de otros departamentos (Producto, Ingeniería, Legal, Comunicación) para responder con precisión a los clientes.
   - Propón un protocolo de actualización interna: con qué frecuencia y en qué formato informar al equipo de CS sobre el estado de la crisis.
   - Explica cómo proteger al equipo de CS del burnout cuando gestionan decenas de conversaciones difíciles en paralelo.

6. **Métricas de CS durante la crisis**
   - Define los KPIs que deben monitorizarse diariamente: número de conversaciones de retención activas, tasa de éxito de retención, tiempo de respuesta, NPS de crisis, ARR en riesgo vs. ARR salvado.
   - Propón un dashboard de crisis para el equipo de CS que permita ver en tiempo real el estado de las cuentas más críticas.

7. **Plan de recuperación de la relación post-crisis**
   - Diseña un plan de reactivación para los clientes que se quedaron pero cuya confianza se deterioró: qué acciones tomar en los 30, 60 y 90 días posteriores.
   - Propón cómo convertir los clientes que sobrevivieron la crisis en promotores activos de la marca.
   - Explica cómo documentar los aprendizajes de la crisis para mejorar el programa de CS a largo plazo.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Incluye plantillas de email y guiones de llamada listos para adaptar, checklists, marcos de priorización y ejemplos de respuestas a preguntas difíciles. El tono debe ser empático y práctico, orientado a un profesional de CS que necesita actuar con rapidez y mantener la calma bajo presión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Retener clientes y gestionar cuentas en riesgo durante una crisis empresarial',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de crisis en proyectos freelance: cuando algo sale muy mal',
                'description'      => 'Aprende a manejar las situaciones de crisis más habituales en el trabajo freelance: incumplimiento de plazos, conflictos con clientes, fallos técnicos o pérdidas de datos. Este prompt te da un plan de acción práctico y profesional.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de carrera freelance con más de 10 años de experiencia como profesional independiente y como consultor de otros freelancers que atraviesan dificultades en sus proyectos. Conoces de primera mano los errores más comunes y las estrategias más efectivas para salir de una crisis manteniendo la reputación y la relación con el cliente.

Necesito tu ayuda para gestionar una crisis en un proyecto freelance. Puede tratarse de un incumplimiento de plazo, un malentendido grave con el cliente, un fallo técnico, una entrega defectuosa o cualquier otra situación que haya puesto en riesgo el proyecto y la relación profesional.

**DESCRIPCIÓN DE LA CRISIS:**
[Describe qué ocurrió, en qué fase del proyecto, cuál es el impacto para el cliente, si ya hubo comunicación sobre el problema y cuál es el estado emocional de la relación en este momento.]

**LO QUE NECESITO:**

1. **Análisis honesto de la situación**
   - Ayúdame a evaluar la gravedad real de la crisis en una escala de 1 a 5 con criterios concretos.
   - Identifica quién tiene responsabilidad en el problema: solo yo, el cliente, o es compartida.
   - Define qué es recuperable y qué no, y cuál es el peor escenario realista si no actúo bien.

2. **Plan de acción inmediata (primeras 24 horas)**
   - Pasos concretos que debo dar hoy: qué revisar, qué preparar, con quién hablar primero.
   - Qué NO debo hacer bajo ningún concepto (errores que agravan la crisis: evitar al cliente, mentir, sobre-prometer, atacar).
   - Cómo gestionar mi propio estado emocional para poder comunicar con profesionalidad.

3. **Comunicación con el cliente**
   - Redacta un mensaje de contacto inicial: honesto, empático, que reconoce el problema sin excusas pero también sin auto-flagelación, y que propone un siguiente paso concreto.
   - Proporciona una guía para la conversación de crisis con el cliente: cómo abrir, cómo escuchar, cómo presentar el plan de recuperación, cómo cerrar con un acuerdo claro.
   - Explica qué hacer si el cliente no responde, si está muy enfadado o si amenaza con no pagar.

4. **Plan de recuperación del proyecto**
   - Propón cómo elaborar un plan de recuperación realista: nuevo calendario, entregables redefinidos, recursos adicionales si fueran necesarios.
   - Explica cómo presentar este plan al cliente de forma que recupere su confianza.
   - Define cómo gestionar los entregables parciales o defectuosos: corrección, sustitución, compensación.

5. **Gestión del impacto económico**
   - Analiza las opciones cuando el cliente amenaza con no pagar o pedir devolución: cuándo ceder, cuándo negociar, cuándo defender tus derechos.
   - Explica cómo protegerte contractualmente en el futuro para que esta situación no se repita.
   - Propón cómo registrar el acuerdo de resolución de la crisis por escrito, aunque sea de forma informal.

6. **Aprendizaje y prevención**
   - Una vez resuelta la crisis, ¿qué proceso o herramienta habría evitado este problema?
   - Propón 3 cambios concretos en la forma de trabajar para reducir el riesgo de que esto vuelva a ocurrir.
   - Explica cómo documentar lo aprendido para que la experiencia sirva de guía en el futuro.

7. **Reconstrucción de la reputación**
   - Si la crisis ha tenido visibilidad externa (reseñas negativas, comentarios en redes, referencias de otros clientes), propón cómo gestionarla.
   - Explica cuándo y cómo pedir una referencia o testimonio positivo una vez superada la crisis, si la relación se ha recuperado.
   - Define cómo comunicar en tu portfolio o perfiles profesionales si el proyecto quedó incompleto o fue cancelado.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones claras con headers. Incluye plantillas de mensaje listas para adaptar, guiones de conversación, listas de acciones ordenadas cronológicamente y ejemplos concretos. El tono debe ser directo, empático y sin condescendencia: sé el mentor que habla de igual a igual a alguien que está en una situación difícil y necesita orientación práctica, no sermones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar crisis en proyectos freelance y recuperar la relación con el cliente',
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
