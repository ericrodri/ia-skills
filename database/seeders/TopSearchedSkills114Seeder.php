<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills114Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de crisis de reputación de marca en redes sociales',
                'description'      => 'Protocolo de respuesta cuando la marca está en el centro de una tormenta en redes: cómo actuar, qué decir y cómo minimizar el daño reputacional.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión de crisis de comunicación y reputación de marca con experiencia ayudando a empresas a navegar situaciones de crisis en redes sociales, desde errores virales hasta boicots organizados o noticias negativas de alto impacto.

Estoy gestionando o anticipando una crisis de reputación y necesito un protocolo de respuesta completo y accionable.

**Contexto de la situación:**
- Naturaleza de la crisis: [error de comunicación propio / producto defectuoso / comportamiento de empleado o directivo / campaña de boicot / noticia negativa de medio / crisis de un sector que nos salpica / otro]
- Escala actual: [confinada a un post viral / cubierta por medios / trending topic / demanda o acción legal / otro]
- Tiempo transcurrido desde el inicio: [horas, días]
- Canales afectados: [Twitter/X, Instagram, LinkedIn, TikTok, medios online, televisión...]
- Posición de la empresa: [somos responsables / hay responsabilidad parcial / somos víctimas de información falsa / situación ambigua]
- Acciones ya tomadas: [ninguna / comunicado inicial / eliminamos el contenido / otro]

Con esa información, desarrolla el protocolo completo:

**1. Evaluación inmediata de la crisis**
Cómo hacer una evaluación rápida en las primeras dos horas: alcance real vs percibido, velocidad de propagación, sentimiento dominante, si hay errores factuales en la narrativa viral, y quiénes son los principales amplificadores (influencers, medios, cuentas anónimas con muchos seguidores). Cómo decidir si la crisis requiere respuesta inmediata o si responder la amplificaría.

**2. El comité de crisis y quién decide**
Cómo estructurar el equipo de gestión de crisis: quién lidera la respuesta, quién aprueba los comunicados, cómo coordinar entre comunicación, legal, dirección y el equipo de redes sociales. Por qué las crisis se amplifican cuando no hay una cadena de decisión clara y rápida.

**3. Los tres escenarios de respuesta y cuándo usar cada uno**
- **Respuesta inmediata y pública**: cuándo la rapidez es más importante que la perfección del mensaje
- **Respuesta privada primero**: cuándo contactar directamente con las personas afectadas antes de hacer una declaración pública
- **Silencio estratégico**: cuándo no responder es la decisión correcta y cómo gestionar ese silencio sin que se interprete como indiferencia

**4. El comunicado de crisis: estructura y tono**
Cómo redactar un comunicado que reconozca el problema sin asumir responsabilidad legal innecesaria, demuestre empatía genuina, explique lo que se está haciendo y evite los cinco errores más comunes que convierten una crisis gestionable en un desastre mayor: defensividad, culpar a otros, prometer lo que no se puede cumplir, borrar comentarios y no actualizar.

**5. Gestión en tiempo real en redes sociales**
Cómo manejar el aluvión de comentarios, menciones y mensajes directos durante las primeras 48 horas: qué comentarios responder y cuáles no, cómo responder a críticas legítimas vs a trolls, cuándo y cómo cerrar la sección de comentarios, y cómo monitorizar la evolución en tiempo real.

**6. Coordinación con medios y periodistas**
Cómo gestionar las llamadas de periodistas durante la crisis: quién habla con los medios, qué decir y qué no decir, cómo preparar los mensajes clave y cómo usar los medios de forma proactiva para distribuir la versión correcta de los hechos.

**7. Post-crisis: reconstrucción de la reputación**
Qué hacer en las semanas y meses posteriores para reconstruir la confianza: acciones concretas que demuestren el cambio, comunicación de seguimiento, uso del error como narrativa de aprendizaje y mejora de los procesos internos para evitar recurrencias.

**8. Plan de acción para las próximas 24 horas**
Qué hacer ahora mismo, ordenado por prioridad y tiempo, con responsables para cada acción.

Quiero un protocolo aplicable a mi situación específica, no una guía genérica de comunicación de crisis.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 20,
                'use_case'         => 'Protocolo de respuesta ante crisis de reputación de marca',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Incident management: postmortems blameless y runbooks efectivos',
                'description'      => 'El proceso que transforma los fallos de producción en aprendizaje organizacional: postmortems sin culpa, runbooks y comunicación de incidentes.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en reliability engineering y gestión de incidentes con experiencia construyendo culturas de incident management efectivas en equipos de ingeniería de distintos tamaños.

Quiero mejorar o construir el proceso de gestión de incidentes de mi equipo y necesito una guía completa que vaya desde la detección hasta el postmortem.

**Contexto de mi equipo:**
- Tamaño del equipo de ingeniería: [número de personas]
- Tipo de sistema o producto: [API, aplicación web, microservicios, monolito, infraestructura, otro]
- Estado actual del incident management: [sin proceso definido / proceso básico / proceso maduro que queremos mejorar]
- Principal problema actual: [no detectamos los incidentes rápido / la comunicación durante el incidente es caótica / no aprendemos de los fallos / los postmortems se hacen mal o no se hacen]
- Severidades definidas: [sí/no, cuáles]
- On-call actual: [sin on-call / on-call informal / on-call estructurado con PagerDuty/OpsGenie/otro]

Con esa información, desarrolla el proceso completo:

**1. Detección y alertas**
Cómo construir un sistema de alertas que detecte problemas reales sin generar ruido que agote al equipo: la diferencia entre alertar sobre síntomas vs causas, qué métricas deberían generar alertas, cómo calibrar los umbrales y por qué el alert fatigue es uno de los mayores riesgos del on-call.

**2. Clasificación de severidades**
Define un sistema claro de severidades (SEV1 a SEV4 o equivalente) con criterios objetivos para cada nivel: impacto en usuarios, porcentaje de tráfico afectado, pérdida económica, compromiso de datos. Por qué la claridad en la clasificación acelera la respuesta y reduce la parálisis en el momento del incidente.

**3. El proceso de respuesta al incidente**
Paso a paso desde que se dispara la alerta hasta que el sistema está estable:
- Designación del incident commander y sus responsabilidades
- Canal de comunicación del incidente (Slack, Teams, War Room)
- Roles durante el incidente: quien diagnostica, quien comunica internamente, quien comunica externamente
- Cadencia de actualizaciones internas y hacia clientes
- Decisiones de mitigación vs remediación completa: cuándo un hotfix es suficiente y cuándo necesitas rodar back

**4. Comunicación externa durante el incidente**
Cómo comunicar a los clientes afectados: cuándo publicar en la status page, qué decir en cada actualización, cómo manejar las preguntas en redes sociales y en soporte, y qué nivel de detalle técnico es apropiado para la audiencia externa.

**5. El postmortem blameless**
La estructura completa de un postmortem efectivo que genera aprendizaje organizacional sin crear cultura del miedo:
- Cuándo hacerlo y quién debe asistir
- La sección de línea de tiempo: cómo reconstruirla fielmente
- Análisis de causa raíz con los cinco porqués y sus limitaciones
- Action items concretos: cómo escribirlos para que se ejecuten de verdad
- Por qué "blameless" no significa "sin responsabilidad" y cómo mantener el equilibrio
- Cómo distribuir el postmortem dentro y fuera del equipo

**6. Runbooks efectivos**
Cómo escribir runbooks que funcionen de madrugada cuando el oncall está medio dormido: estructura, nivel de detalle, cuándo usar texto vs comandos ejecutables, cómo mantenerlos actualizados y cómo organizarlos para que se encuentren rápido en el momento del incidente.

**7. Cultura de on-call sostenible**
Cómo diseñar el on-call para que no destruya la vida de las personas: rotaciones justas, compensación, definición de qué es urgente y qué puede esperar, límites de tiempo de respuesta según severidad y cómo tratar el burnout de las personas con alta carga de on-call.

**8. Métricas para mejorar con el tiempo**
MTTA (Mean Time to Acknowledge), MTTR (Mean Time to Resolve), frecuencia de incidentes por severidad, tasa de acción items de postmortems completados. Cómo usar estas métricas para mejorar sin convertirlas en arma de gestión.

Dame un proceso aplicable a mi contexto específico, con ejemplos concretos de plantillas y criterios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de proceso de incident management y cultura de postmortems',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para aplicaciones de emergencias y situaciones de crisis',
                'description'      => 'Los principios especiales de diseño que aplican en contextos de emergencia, crisis o salud mental donde los errores de UX tienen consecuencias reales.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en UX para contextos críticos y de alta presión con conocimiento profundo de los principios de diseño especiales que aplican cuando los usuarios están en situaciones de emergencia, estrés extremo, crisis de salud mental o tomando decisiones de alto impacto.

Estoy diseñando o auditando una aplicación que opera en un contexto de emergencia o crisis y necesito que me ayudes a aplicar los principios correctos.

**Contexto del proyecto:**
- Tipo de aplicación: [gestión de emergencias, salud mental y crisis, información en desastres naturales, aplicación médica, seguridad ciudadana, otro]
- Usuario principal: [ciudadanos en emergencia / profesionales de emergencias / personal sanitario / persona en crisis / otro]
- Estado de diseño: [desde cero / auditoría de lo existente / rediseño de flujo específico]
- Dispositivo principal: [móvil / desktop / ambos]
- Criticidad de los flujos: [la app salva vidas directamente / ayuda a coordinación / proporciona información crítica]
- Principal preocupación de diseño actual: [claridad bajo presión / accesibilidad / velocidad / confiabilidad / otro]

Con esa información, desarrolla la guía completa de diseño para contextos de crisis:

**1. Cómo cambia la cognición humana bajo estrés extremo**
Qué le pasa al cerebro humano cuando está en una situación de emergencia o crisis: reducción de la memoria de trabajo, pensamiento en túnel, deterioro de la capacidad de leer e interpretar información compleja, tendencia a errores de acción bajo presión. Cómo estos efectos cognitivos deben influir cada decisión de diseño.

**2. Principios fundamentales de UX para contextos críticos**
Los principios que dominan sobre todo lo demás en este tipo de aplicaciones:
- **Reducción radical de la carga cognitiva**: cuántas decisiones puede procesar un usuario en pánico y cómo diseñar para ese número
- **Error tolerance**: qué errores son recuperables y cuáles no, y cómo diseñar para que los errores irreversibles sean casi imposibles
- **Claridad extrema sobre elegancia**: cuándo el diseño minimalista estético puede matar y cuándo el contraste agresivo salva
- **Confianza y credibilidad visual**: por qué la apariencia de autoridad y profesionalismo es funcional, no solo estética, en estos contextos

**3. Arquitectura de información bajo presión**
Cómo organizar la información para que el usuario encuentre lo que necesita en menos de tres segundos: jerarquía visual extrema, etiquetas literales (nunca metáforas o iconos ambiguos), flujos lineales sin ramificaciones innecesarias. Cuándo y cómo usar el progressive disclosure en contextos de emergencia.

**4. Tipografía, color y contraste para contextos críticos**
Qué tamaño mínimo de fuente es seguro bajo las condiciones de uso (manos temblorosas, pantalla bajo luz solar, estrés visual), qué niveles de contraste son necesarios, cómo usar el color como señal sin depender de él (accesibilidad para daltonismo), y cuándo el color rojo genera pánico vs cuando guía la acción correctamente.

**5. Diseño de los flujos de mayor criticidad**
Cómo diseñar los flujos más importantes de la aplicación: llamada de emergencia en un tap, primer mensaje de ayuda en crisis de salud mental, checklist de evacuación, comunicación de estado de emergencia. Para cada flujo: número máximo de pasos, tipo de interacción, feedback visual y sonoro, y cómo manejar los errores sin interrumpir el flujo.

**6. Accesibilidad en contextos extremos**
Por qué la accesibilidad es especialmente crítica aquí: usuarios con discapacidad física que pueden estar usando la app con una sola mano o en condiciones físicas extremas, usuarios con deterioro cognitivo bajo estrés, condiciones de iluminación variables. Qué estándares WCAG son mínimos y cuáles son recomendados para este tipo de aplicaciones.

**7. Testing y validación con usuarios reales**
Por qué el testing estándar de usabilidad no es suficiente para aplicaciones de crisis: cómo simular condiciones de estrés en las pruebas (sin comprometer a los participantes), qué señales observar durante el testing que revelan problemas de UX bajo presión, y cómo involucrar a profesionales de emergencias o de salud mental en el proceso de diseño.

**8. Consideraciones éticas específicas**
Las responsabilidades éticas del diseñador en este contexto: qué pasa cuando el diseño falla, cómo manejar los datos sensibles, cuándo es necesario un disclaimer o una derivación a servicios profesionales, y cómo diseñar la experiencia de "no puedo ayudarte, pero sí puede este servicio".

Dame recomendaciones específicas y aplicables para mi proyecto concreto, con ejemplos de buenas y malas decisiones de diseño en este tipo de aplicaciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño UX para aplicaciones de emergencias y contextos de crisis',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en tiempos de crisis económica: adapta el pitch cuando los clientes congelan el presupuesto',
                'description'      => 'Adapta el pitch, el pricing y el proceso de ventas cuando los clientes recortan presupuesto y cada deal se vuelve más difícil de cerrar.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas B2B con experiencia liderando equipos comerciales en períodos de contracción económica y recesiones. Has visto cómo los ciclos de venta se alargan, los presupuestos se congelan y las personas que aprobaban deals de forma autónoma necesitan ahora cuatro niveles de aprobación.

Necesito adaptar mi proceso y estrategia de ventas a un entorno donde los clientes tienen el presupuesto bajo presión y cada deal cuesta mucho más cerrarlo.

**Contexto:**
- Tipo de producto o servicio que vendes: [descripción breve]
- Mercado objetivo: [tipo de empresa y tamaño]
- Ticket medio: [indicar]
- Ciclo de venta habitual: [días o semanas en condiciones normales]
- Principales cambios que estás observando: [ciclos más largos, más stakeholders, presupuestos congelados, pérdida de deals ya avanzados, otro]
- Tu rol: [SDR, AE, AM, director de ventas, fundador que vende...]

Con esa información, desarrolla la estrategia de adaptación completa:

**1. El nuevo comportamiento del comprador en crisis**
Cómo cambia el comportamiento de compra en una contracción económica: más stakeholders en la decisión, procesos de aprobación más largos, mayor aversión al riesgo, foco en reducción de costes sobre crecimiento, ciclos de renovación más disputados. Cómo ajustar las expectativas del equipo de ventas para que la frustración no destruya la motivación.

**2. Reposicionamiento del pitch**
Cómo adaptar el mensaje de ventas cuando el foco del cliente cambia de "crecer" a "sobrevivir y optimizar":
- De argumentos de crecimiento a argumentos de ahorro, eficiencia y reducción de riesgo
- Cómo cuantificar el ROI de forma que justifique la inversión ante un CFO escéptico
- Por qué el "business case" se convierte en el documento más importante del proceso de ventas

**3. Estrategia de pricing para entornos difíciles**
Cómo manejar la presión de precio sin destruir el margen: cuándo y cómo ofrecer flexibilidad (pagos trimestrales en lugar de anuales, menor compromiso inicial, prueba piloto de menor escala), cuándo mantenerse firme y cuándo perder el deal es la decisión correcta. Cómo proteger el precio base mientras ofreces valor adicional.

**4. Gestión de múltiples stakeholders**
En recesión, el número de personas que deben aprobar una compra se multiplica. Cómo mapear el comité de compra, identificar al campeón interno y a los bloqueadores, y crear materiales de venta que funcionen cuando tu campeón tiene que "vender internamente" sin ti en la sala.

**5. Deals que se enfrían: cómo reactivarlos**
El volumen de deals que se pausan o mueren sin decisión se multiplica en crisis. Estrategias para mantener el deal vivo durante una pausa de presupuesto, cómo hacer seguimiento sin ser pesado, y cómo detectar cuándo el deal está realmente muerto vs cuándo hay vida.

**6. Prospección en entorno difícil**
Cómo ajustar la estrategia de prospección cuando el outbound frío tiene tasas de respuesta más bajas: qué sectores o perfiles de empresa siguen invirtiendo en crisis (y por qué), cómo priorizar la cartera para maximizar el cierre en el corto plazo y cómo usar los clientes existentes como fuente de referencias.

**7. Gestión de la cartera de renovaciones**
Las renovaciones son el mayor riesgo en una recesión. Cómo adelantar las conversaciones de renovación, cómo defender el valor entregado con datos, y cómo manejar la negociación cuando el cliente pide un descuento agresivo como condición para renovar.

**8. Mentalidad y resiliencia del equipo de ventas**
Cómo mantener la motivación y la productividad del equipo cuando los resultados bajan, los ciclos se alargan y los NOs son más frecuentes. Qué métricas de actividad priorizar cuando los resultados de cierre no reflejan el esfuerzo real del equipo.

Dame estrategias concretas y aplicables a mi tipo de venta, no principios genéricos de "vende valor, no precio".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 20,
                'use_case'         => 'Adaptación del proceso de ventas en entornos de crisis económica',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto en modo supervivencia: decisiones cuando la empresa está en crisis',
                'description'      => 'Cómo tomar decisiones de producto cuando la empresa está en modo crisis: qué cortar, qué mantener y cómo comunicarlo al equipo y a los usuarios.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de producto en situaciones de alta presión con experiencia ayudando a equipos de producto a navegar reestructuraciones, recortes de presupuesto, cambios de dirección forzados y períodos de supervivencia empresarial.

Mi empresa está en modo crisis o supervivencia y necesito tomar decisiones difíciles de producto con información incompleta y bajo presión de tiempo.

**Contexto de la crisis:**
- Naturaleza de la crisis: [recorte de financiación / pérdida de cliente principal / cambio radical de mercado / presión competitiva extrema / otro]
- Estado del equipo de producto: [tamaño actual, si hay despidos previstos o ya realizados]
- Horizonte temporal de la crisis: [meses hasta necesitar resultados]
- Estado del producto: [qué existe, qué se estaba construyendo, qué se ha parado]
- Métricas actuales críticas: [retención, ingresos, churn, otro]
- Principal decisión pendiente: [qué cortar del roadmap / cómo pivotar / cómo comunicarlo / otro]

Con esa información, desarrolla la guía completa para gestionar el producto en modo crisis:

**1. El cambio de mentalidad: de construir a sobrevivir**
Qué significa pasar del modo de crecimiento al modo de supervivencia y cómo eso cambia cada decisión de producto: el horizonte temporal, las métricas prioritarias, la relación con los stakeholders, y la comunicación con el equipo. Por qué las heurísticas que funcionan en modo crecimiento pueden destruir valor en modo supervivencia.

**2. Auditoría de emergencia del portfolio**
Cómo hacer una evaluación rápida de todo lo que existe y está en construcción en menos de una semana: qué genera ingresos hoy, qué tiene potencial de generar ingresos en los próximos 3 meses, qué consume recursos sin retorno claro y qué se puede cortar sin dañar a los clientes que pagan. La matriz de supervivencia: valor a corto plazo vs coste de mantener.

**3. Qué cortar y cómo hacerlo**
El proceso para tomar decisiones de corte de funcionalidades, proyectos o líneas de producto:
- Cómo evaluar el impacto real de cortar algo que ya existe (usuarios afectados, contratos, dependencias técnicas)
- Cómo comunicar los cortes a los usuarios y clientes afectados de forma honesta sin destruir la confianza
- Qué hacer con los compromisos de roadmap que no se van a cumplir
- Cuándo es mejor cortar rápido y limpio vs hacer una retirada gradual

**4. Foco radical: qué mantener**
Con recursos limitados, cómo elegir el conjunto mínimo de funcionalidades y proyectos que maximizan la retención de clientes actuales y las posibilidades de conseguir nuevos ingresos. El concepto de "core value path": qué es lo mínimo que necesita funcionar perfectamente para que los clientes no se vayan.

**5. Toma de decisiones con información incompleta y bajo presión**
Cómo tomar decisiones de producto importantes cuando no tienes tiempo para investigar correctamente, los datos son ambiguos y el equipo está en shock. Frameworks simplificados para priorizar bajo incertidumbre y cómo documentar las decisiones aunque sean imperfectas para que el equipo las entienda y las ejecute.

**6. Comunicación interna: el equipo de producto en crisis**
Cómo comunicar la situación y las decisiones al equipo de producto sin destruir la moral más de lo necesario: cuánta información compartir, cómo gestionar la incertidumbre sobre los puestos de trabajo, cómo mantener la productividad cuando el equipo sabe que la empresa está en problemas.

**7. Comunicación externa: usuarios y clientes**
Cuándo y cómo comunicar cambios de producto, discontinuación de funcionalidades o cambios de dirección a los clientes y usuarios. Cómo hacerlo de forma que minimize el churn y preserve la confianza, incluso cuando las noticias son malas.

**8. Salir del modo supervivencia**
Cómo saber cuándo la crisis está bajo control y es momento de volver al modo de construcción y crecimiento. Qué señales buscar, cómo reiniciar la cultura de producto después de un período de recortes y cómo aprender del período de crisis para construir un equipo y un proceso más resiliente.

Dame orientación aplicable a mi situación específica, con decisiones concretas y no solo marcos teóricos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestión de decisiones de producto en situaciones de crisis empresarial',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicar malas noticias al equipo: despidos, reestructuraciones y cambios difíciles',
                'description'      => 'Cómo comunicar despidos, reestructuraciones y cambios de dirección con honestidad, empatía y sin destruir la confianza del equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en comunicación interna y gestión de personas en situaciones difíciles con amplia experiencia ayudando a líderes y directores de RRHH a comunicar noticias dolorosas de forma que preserve la dignidad de las personas afectadas y mantenga la confianza del equipo que continúa.

Tengo que comunicar una noticia difícil a mi equipo y necesito hacerlo bien, tanto por ética como por el impacto en la organización.

**Contexto de la situación:**
- Tipo de noticia: [despidos individuales o colectivos / reestructuración sin despidos / cambio de dirección estratégica / cierre de oficina o línea de negocio / cambio de liderazgo / recorte de beneficios / otro]
- Alcance: [número de personas afectadas, si hay afectados directos e indirectos]
- Momento: [la comunicación es inminente / tengo días para prepararla]
- Contexto regulatorio: [hay obligaciones legales de consulta o plazo, ej: ERE en España]
- Situación del equipo: [hay rumores ya circulando / es totalmente inesperado / se esperaba algo pero no la magnitud]
- Tu rol: [CEO / CHRO / Director de RRHH / Manager que ejecuta la decisión de arriba]

Con esa información, desarrolla el protocolo de comunicación completo:

**1. Antes de la comunicación: lo que no se puede improvisar**
Qué tienes que tener completamente claro antes de comunicar nada: las condiciones exactas para cada persona afectada, las respuestas a las preguntas más dolorosas que te van a hacer, el plan de soporte post-comunicación, y quién sabe qué y cuándo para evitar que la noticia llegue a los afectados por los pasillos antes que en la comunicación oficial.

**2. El orden correcto de la comunicación**
Cómo secuenciar la comunicación: primero los afectados directos de forma individual, luego el equipo más amplio. Por qué el orden importa éticamente y estratégicamente. Cómo gestionar el tiempo entre comunicaciones para evitar que la incertidumbre se convierta en pánico.

**3. La conversación individual con las personas afectadas**
Cómo estructurar la conversación de despido o de malas noticias individuales: qué decir al principio (sin rodeos pero con humanidad), qué información dar en esa primera conversación, qué no decir aunque te lo pregunten, cómo manejar las reacciones emocionales (desde el silencio hasta la rabia), y qué hacer cuando la persona pide justificaciones que no puedes dar.

**4. La comunicación al equipo que continúa**
Cómo comunicar la situación al equipo que no está directamente afectado pero que va a ver a compañeros marcharse o va a vivir una reestructuración: qué nivel de detalle compartir, cómo responder a las preguntas "¿mi puesto está seguro?", cómo honrar a las personas que se van sin dramatizar la situación del negocio, y cómo dar un mensaje creíble sobre el futuro cuando tú mismo tienes incertidumbre.

**5. Los errores que destruyen la confianza**
Los cinco errores más comunes en la comunicación de malas noticias que generan un daño reputacional y de confianza que tarda años en recuperarse: no dar la cara personalmente, usar lenguaje corporativo vacío, mentir sobre las razones reales, prometer lo que no se puede cumplir, y tratar la comunicación como un trámite legal en lugar de un momento humano.

**6. El período posterior: las semanas después de la comunicación**
Cómo gestionar las semanas posteriores a una reestructuración o despidos: el duelo colectivo del equipo que continúa, la productividad que baja inevitablemente, cómo detectar a los que están pensando en marcharse voluntariamente y cómo decidir a quién y cómo retener.

**7. Obligaciones legales y protocolos de RRHH**
Las obligaciones legales en España para despidos colectivos (ERE), individuales y reestructuraciones: períodos de preaviso, indemnizaciones mínimas, documentación requerida y el papel del comité de empresa. Cuándo es imprescindible contar con asesoramiento legal antes de la comunicación.

**8. Cuidado del líder que comunica**
Por qué comunicar malas noticias es emocionalmente agotador para quien las da y cómo gestionar eso: el peso de comunicar algo con lo que no estás de acuerdo pero que tienes que ejecutar, cómo mantener la presencia emocional necesaria durante el proceso y qué hacer cuando tú también estás afectado por la situación.

Dame una guía aplicable a mi situación específica, con el mensaje concreto que debería dar y cómo manejar las situaciones más difíciles que puedo encontrarme.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 20,
                'use_case'         => 'Comunicación de despidos y reestructuraciones con empatía y profesionalidad',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Plan de contingencia financiera para escenarios adversos',
                'description'      => 'Prepara a la empresa para recesión, pérdida de cliente clave, problemas de liquidez o crisis sectorial con un plan financiero de contingencia robusto.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en planificación financiera y gestión de riesgos con experiencia ayudando a empresas a prepararse para escenarios adversos antes de que ocurran y a navegar situaciones de crisis financiera cuando ya están dentro de ellas.

Necesito construir o revisar el plan de contingencia financiera de mi empresa.

**Contexto de la empresa:**
- Tamaño y tipo: [startup, pyme, empresa mediana, sector]
- Modelo de ingresos: [SaaS, servicios, producto físico, marketplace, otro]
- Situación financiera actual: [sólida con reservas / ajustada / con tensión de liquidez / en crisis activa]
- Principal riesgo financiero identificado: [dependencia de pocos clientes / estacionalidad / deuda / exposición a un sector concreto / otro]
- Horizonte de runway actual: [meses de caja disponibles]
- Principales palancas de coste: [personal, infraestructura, proveedores, marketing, otro]

Con esa información, desarrolla el plan de contingencia completo:

**1. Identificación y cuantificación de los riesgos financieros**
Cómo identificar sistemáticamente los principales escenarios de riesgo para tu empresa: pérdida de cliente principal, contracción del mercado, aumento de costes de financiación, problemas de cobro de clientes, disrupción de la cadena de suministro. Cómo cuantificar el impacto financiero de cada escenario y cuál es la probabilidad estimada de que ocurra.

**2. Los tres escenarios: base, adverso y extremo**
Cómo construir tres planes financieros paralelos:
- **Escenario base**: las proyecciones con las que gestionas normalmente
- **Escenario adverso**: qué pasa si los ingresos caen un 20-30%, cómo afecta al cash flow y qué ajustes son necesarios para mantener la viabilidad
- **Escenario extremo**: qué pasa en el peor caso razonable (no imposible) y cuál es el plan de supervivencia
Para cada escenario: qué palancas activas, en qué orden y con qué velocidad.

**3. Gestión del cash flow bajo presión**
Las acciones para maximizar el cash disponible cuando los ingresos caen o el cobro se retrasa: aceleración del cobro a clientes, renegociación de plazos con proveedores, identificación de gastos que se pueden diferir sin daño operativo, y las líneas de crédito que debes establecer antes de necesitarlas (no cuando ya las necesitas).

**4. El análisis de break-even y el runway**
Cómo calcular cuál es el nivel mínimo de ingresos necesario para no consumir caja, cuántos meses de runway tienes en cada escenario y en qué momento la empresa debería activar el plan de contingencia (no esperar a estar en crisis para hacerlo).

**5. Palancas de reducción de costes por prioridad**
Cómo estructurar los posibles recortes de costes de forma que preserves la capacidad de recuperación: qué recortar primero (costes variables y discrecionales), qué recortar solo si es necesario (inversiones de largo plazo), y qué no recortar aunque sea tentador (capacidad productiva core, talento diferencial, relaciones de cliente). El orden de las palancas importa tanto como la magnitud de los recortes.

**6. Gestión de la relación con bancos e inversores en crisis**
Cómo comunicar una situación difícil a los bancos, inversores o accionistas: cuándo comunicarlo, qué información dar, cómo presentar el plan de acción de forma que genere confianza en lugar de pánico. Por qué la comunicación proactiva y temprana tiene mejores resultados que esperar a que los números hablen solos.

**7. Protección de los activos críticos**
Qué activos o capacidades son imprescindibles para la recuperación y cómo protegerlos incluso en el escenario más adverso: el talento clave, los contratos de cliente más estratégicos, la propiedad intelectual y la infraestructura tecnológica crítica.

**8. Indicadores de alarma temprana**
Qué métricas financieras y operativas deberías monitorizar mensualmente para detectar que la empresa se está acercando a una situación de riesgo antes de que se convierta en crisis: ratio de cobro, evolución del runway, concentración de ingresos, márgenes por línea de negocio y liquidez disponible.

Dame un plan aplicable a mi situación específica con números concretos donde sea posible, no solo metodología abstracta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construcción de plan de contingencia financiera para escenarios adversos',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de litigios y reclamaciones: los primeros pasos cuando te demandan',
                'description'      => 'Qué hacer cuando recibes una demanda, una reclamación formal o una amenaza legal: los primeros pasos y cómo gestionar el proceso eficazmente.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado experto en litigación y resolución de conflictos empresariales con experiencia ayudando a empresas a navegar situaciones de reclamación o demanda de forma estratégica, minimizando el coste económico, el daño reputacional y el tiempo directivo consumido.

Mi empresa ha recibido o está anticipando una reclamación, demanda o conflicto legal y necesito orientación sobre cómo gestionarlo correctamente desde el primer momento.

**Contexto de la situación:**
- Tipo de reclamación o conflicto: [demanda laboral / reclamación de cliente / disputa contractual / reclamación de proveedor / infracción de propiedad intelectual / reclamación regulatoria / otro]
- Estado actual: [amenaza verbal o escrita / reclamación formal / demanda presentada / proceso en curso]
- Importe reclamado o en disputa: [indicar si aplica]
- Relación con la otra parte: [cliente activo / ex empleado / proveedor / competidor / particular]
- Existencia de documentación relevante: [contrato, emails, facturas, actas... describir brevemente]
- Tu posición: [creemos que tenemos razón / hay responsabilidad compartida / la reclamación puede tener fundamento]

Con ese contexto, desarrolla la guía de gestión completa:

**1. Los primeros 48 horas: qué hacer y qué no hacer**
Las acciones urgentes cuando llega una demanda o reclamación formal: a quién notificar internamente de forma inmediata, por qué no debes contactar con la otra parte antes de hablar con un abogado, cómo preservar toda la documentación relevante (y por qué borrar o modificar documentos puede convertir un problema manejable en uno grave), y los plazos procesales que no puedes perder en los primeros días.

**2. Evaluación estratégica de la situación**
Cómo hacer una evaluación honesta de la posición jurídica propia: qué evidencia tienes a tu favor, qué debilidades tiene tu posición, cuál es la probabilidad realista de ganar o perder, y cuál es el coste de ganar versus el coste de llegar a un acuerdo. Por qué la evaluación objetiva es difícil cuando el ego y el orgullo se mezclan con el análisis legal.

**3. Elección del abogado y la estrategia de defensa**
Cómo elegir al abogado o despacho correcto para tu tipo de disputa: especialización, experiencia en el sector, modelo de honorarios (cuota por horas, cuota fija, success fee) y cómo evaluar si el abogado está alineado con tus objetivos (resolver rápido y barato vs ganar a cualquier precio). Cuándo tiene sentido un despacho grande vs uno boutique especializado.

**4. La negociación y el acuerdo extrajudicial**
Por qué la mayoría de disputas empresariales se resuelven mejor fuera de los tribunales y cómo llegar a un acuerdo: cuándo y cómo iniciar la conversación de acuerdo, cómo evaluar si una oferta de la otra parte es razonable, cómo estructurar el acuerdo para que sea definitivo y no genere futuros conflictos. La diferencia entre ceder con dignidad y perder sin necesidad.

**5. El proceso judicial: qué esperar**
Si el caso llega a los tribunales, qué esperar en términos de plazos (en España los procesos pueden durar años), costes (honorarios de abogado, procurador, perito, costas si pierdes), esfuerzo directivo (tiempo de los directivos en el proceso) y exposición pública. Cómo evaluar en cada fase del proceso si sigue valiendo la pena continuar o si es mejor llegar a un acuerdo aunque sea tardío.

**6. Comunicación interna y externa durante el litigio**
Qué comunicar a los empleados, accionistas y al consejo sobre la situación. Cómo manejar las preguntas de clientes o de la prensa si el conflicto tiene visibilidad pública. Qué no decir en ningún canal escrito sobre el caso mientras está activo (especialmente en emails y mensajes internos que podrían ser descubiertos).

**7. Protección frente a futuras reclamaciones**
Qué aprender del conflicto actual para reducir la probabilidad de que se repita: revisión de contratos tipo, procesos de documentación de acuerdos verbales, política de gestión de reclamaciones de clientes y protocolos de resolución de conflictos laborales.

**8. Gestión del impacto en el negocio durante el proceso**
Cómo minimizar la distracción y el impacto operativo de un litigio activo: quién dentro de la empresa gestiona la relación con el abogado, cómo mantener la relación con los clientes si uno de ellos está en disputa, y cómo gestionar el impacto emocional en los directivos implicados.

Dame orientación aplicable a mi situación específica. Avísame si hay aspectos que requieran consulta directa con un abogado especializado antes de tomar cualquier decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Gestión estratégica de demandas y reclamaciones legales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de crisis de producto desde customer success',
                'description'      => 'Cuando el producto falla a gran escala: protocolo de comunicación con clientes, compensaciones y cómo reconstruir la confianza desde CS.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success y gestión de crisis de producto con experiencia liderando equipos de CS durante incidentes graves que afectaron a múltiples clientes simultáneamente.

Mi producto ha tenido o está teniendo un fallo grave que afecta a un número significativo de clientes y necesito un protocolo completo de gestión desde customer success.

**Contexto del incidente:**
- Naturaleza del fallo: [caída del servicio / pérdida o corrupción de datos / funcionalidad crítica rota / problema de seguridad / otro]
- Alcance: [número de clientes afectados, segmento: todos / enterprise / SMB / otro]
- Duración del impacto: [horas, si sigue activo]
- Estado del incidente técnico: [en resolución / resuelto / causa raíz desconocida]
- Tipo de clientes afectados: [enterprise con SLA / clientes mid-market / SMB / mix]
- Acciones ya tomadas: [ninguna / comunicado enviado / calls con clientes clave / compensación ofrecida]

Con esa información, desarrolla el protocolo completo de gestión desde CS:

**1. Las primeras horas: triage y priorización**
Cómo estructurar la respuesta de CS durante las primeras horas del incidente: cómo priorizar qué clientes contactar primero (por ARR, por impacto del fallo, por probabilidad de churn, por vencimiento próximo de renovación), cómo coordinar con el equipo técnico para tener información actualizada, y cómo evitar el caos cuando todo el equipo quiere hacer algo pero nadie sabe qué.

**2. Comunicación proactiva vs reactiva**
Por qué en una crisis de producto CS debe ir por delante de los clientes y no esperar a que llamen ellos: el impacto en la percepción de confianza cuando el cliente descubre el problema antes de que se lo hayas comunicado. Cómo estructurar la comunicación proactiva: qué canales usar (email, teléfono, Slack compartido), qué decir cuando todavía no tienes toda la información y cómo actualizar sin generar más ansiedad.

**3. El mensaje correcto en cada fase del incidente**
Cómo comunicar en cada momento del ciclo del incidente:
- **Incidente activo**: qué decir cuando el problema no está resuelto (honestidad sobre el estado, frecuencia de actualizaciones, quién tiene la responsabilidad de la resolución)
- **Resolución técnica**: cómo comunicar que el problema está resuelto y qué verificaciones debe hacer el cliente
- **Post-incidente**: cómo comunicar el análisis de causa raíz y las medidas preventivas de forma que genere confianza, no más desconfianza

**4. Gestión de los clientes enterprise y con SLA**
Los clientes enterprise con SLA firmado tienen derechos contractuales específicos cuando el servicio falla. Cómo gestionar estas conversaciones: qué créditos o compensaciones están acordados contractualmente, cómo gestionar la escalada a sus directivos, y cómo prevenir que un incidente se convierta en una amenaza de resolución de contrato.

**5. Compensaciones: cuándo, cómo y cuánto**
Cuándo ofrecer compensación (crédito de servicio, extensión de contrato, descuento en renovación, acceso a funcionalidades premium), cómo decidir el importe o el tipo, y cómo hacer la oferta de forma que se perciba como gesto genuino y no como intento de tapar el problema. Por qué en algunos casos ofrecer compensación demasiado rápido puede tener efectos contrarios.

**6. Reconstrucción de la confianza en las semanas siguientes**
La crisis técnica se puede resolver en horas, pero la crisis de confianza dura semanas o meses. Cómo estructurar el seguimiento post-incidente: calls de revisión, business reviews adelantadas, compartir el postmortem con los clientes más afectados, y acciones tangibles que demuestren que el problema no va a repetirse.

**7. Identificación del riesgo de churn post-incidente**
Cómo identificar qué clientes tienen más riesgo de cancelar después de un incidente grave: señales de NPS que bajan, reducción del uso del producto, silencios sospechosos, inactividad del campeón interno. Cómo priorizar la atención de retención en las semanas siguientes.

**8. Aprendizaje organizacional para CS**
Qué debería aprender el equipo de CS de cada incidente grave: mejoras en los protocolos de comunicación, actualización de los playbooks, entrenamiento en gestión de crisis emocional con clientes y cómo participar de forma más activa en la prevención de incidentes futuros.

Dame un protocolo aplicable a mi situación específica con mensajes concretos y decisiones claras.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Protocolo de gestión de crisis de producto desde customer success',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de crisis como freelance: clientes perdidos, conflictos y reputación en riesgo',
                'description'      => 'Qué hacer cuando pierdes tu cliente principal, tienes un conflicto grave con un cliente o tu reputación como freelance está en riesgo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión de negocio freelance y en resolución de situaciones críticas para profesionales independientes con experiencia ayudando a freelancers a superar crisis que amenazan su negocio, sus ingresos y su reputación.

Estoy viviendo o anticipando una crisis en mi negocio freelance y necesito orientación para gestionarla correctamente.

**Contexto de mi situación:**
- Tipo de crisis: [pérdida del cliente principal / conflicto grave con un cliente / reseña o comentario negativo público / impago / proyecto que salió mal / problema de reputación / otro]
- Impacto económico: [porcentaje de ingresos afectado o en riesgo]
- Tiempo en la profesión: [años como freelance]
- Tipo de trabajo: [diseño, desarrollo, marketing, consultoría, contenido, otro]
- Red de contactos actual: [amplia / moderada / escasa]
- Situación emocional: [puedo gestionar con relativa calma / estoy muy afectado / en pánico]

Con esa información, desarrolla la guía de gestión de crisis completa:

**1. Diagnóstico y evaluación de la gravedad real**
Cómo evaluar objetivamente la gravedad de la situación separando el impacto real del impacto emocional percibido: cuánto tiempo tienes antes de que la situación sea insostenible económicamente, qué activos (reputación, red de contactos, cartera de clientes) están en riesgo real vs en riesgo percibido, y cuál es el escenario realista más probable si no haces nada.

**2. Gestión de la pérdida de un cliente principal**
Si el cliente que representa la mayoría de tus ingresos se va:
- Las acciones inmediatas de los primeros 72 horas: qué comunicar, qué no comunicar, cómo gestionar la transición profesionalmente aunque estés afectado emocionalmente
- Cómo activar la red de contactos de forma estratégica sin parecer desesperado
- El plan de emergencia de ingresos: qué servicios se pueden ofrecer rápido, qué plataformas de trabajo freelance pueden generar ingresos puente mientras reconstruyes
- Por qué la diversificación de clientes es el seguro más importante para un freelance y cómo construirla después de la crisis

**3. Gestión de conflictos graves con clientes**
Cuando hay un conflicto serio sobre la calidad del trabajo, el alcance del proyecto o el pago:
- Cómo tener la conversación difícil de forma profesional y documentada
- Cuándo ceder y cuándo mantenerse firme
- Cómo llegar a un acuerdo que preserve la relación o la termine de forma limpia
- Cuándo involucrar a un abogado o usar mecanismos de resolución de conflictos (mediación, plataformas con arbitraje integrado)
- Cómo protegerse en el futuro con contratos mejor diseñados y procesos de aprobación claros

**4. Gestión de reseñas negativas o daño de reputación online**
Cómo responder a una reseña negativa o a un comentario público negativo: cuándo responder, cómo redactar la respuesta (sin defensividad, sin atacar al cliente, demostrando profesionalidad), y cuándo no responder. Cómo construir un muro de reputación positiva que amortigüe el impacto de comentarios negativos puntuales.

**5. Gestión de impagos**
Cuando un cliente no paga:
- El proceso de reclamación: desde el recordatorio amable hasta la reclamación formal
- Cuándo usar la vía judicial, cuándo no vale la pena económicamente y cuándo las plataformas de resolución de disputas son más eficaces
- Cómo minimizar el riesgo de impago en el futuro: contratos con adelantos, hitos de pago vinculados a entregables, cláusulas de propiedad intelectual condicional al pago

**6. Recuperación emocional y profesional**
Las crisis de negocio para un freelance son también crisis personales porque el negocio y la identidad profesional están íntimamente ligados. Cómo gestionar el impacto emocional, cómo mantener la productividad en momentos difíciles y dónde buscar apoyo (comunidades de freelancers, mentores, grupos de pares).

**7. Prevención de futuras crisis**
Qué sistemas y hábitos deberías tener para reducir la probabilidad y el impacto de las principales crisis del negocio freelance: diversificación de clientes, fondo de emergencia de 3-6 meses de gastos, contratos claros, procesos de onboarding documentados y relaciones de derivación con otros freelancers.

**8. El plan de los próximos 30 días**
Acciones concretas y priorizadas para los próximos 30 días según la crisis específica que estoy viviendo, con métricas para saber si estoy en el camino correcto de recuperación.

Dame orientación honesta y aplicable. Incluye lo que la mayoría de los freelancers no hace y debería hacer para salir de estas situaciones más rápido y con menos daño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Gestión de crisis de negocio para freelancers: pérdidas, conflictos y reputación',
                'vote_score'       => 44,
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
