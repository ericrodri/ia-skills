<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills280Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Negociación con agencias y proveedores de marketing: obtener más por menos',
                'description'      => 'Aprende a negociar contratos, tarifas y condiciones con agencias creativas, medios y proveedores de tecnología de marketing para maximizar el retorno de cada euro invertido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con 15 años de experiencia negociando contratos con agencias creativas, plataformas publicitarias y proveedores de tecnología de marketing (MarTech). Tu objetivo es ayudarme a preparar y ejecutar negociaciones con mis proveedores actuales para obtener mejores condiciones sin dañar las relaciones comerciales.

**Contexto de la negociación**

El panorama de proveedores de marketing es complejo: las agencias tienen márgenes variables y margen real para negociar aunque raramente lo admitan; las plataformas de publicidad tienen equipos de ventas con flexibilidad en créditos, descuentos por volumen y soporte dedicado; y los proveedores de SaaS de marketing tienen churn altísimo, lo que les da incentivo para renovar en condiciones favorables.

**Análisis previo que necesito hacer**

Antes de cualquier negociación, ayúdame a construir mi posición:

1. **Mapa de dependencia mutua**: ¿Cuánto nos necesitan ellos a nosotros? Analiza el volumen de negocio que les damos, nuestra antigüedad como cliente, nuestra visibilidad como referencia o caso de estudio potencial, y nuestra influencia en sus otros clientes (somos referentes en el sector, podemos recomendar o no recomendar).

2. **Benchmarking de mercado**: ¿Qué pagan otros en nuestra situación? Ayúdame a estimar rangos de mercado para: honorarios de agencia creativa (porcentaje sobre inversión, fee fijo, modelo híbrido), CPM/CPC en plataformas según categoría, licencias de herramientas de automatización y CRM, y costes de producción de contenidos.

3. **Alternativas reales**: ¿Qué pasa si no llegamos a un acuerdo? Construye conmigo el árbol de decisión: cambiar de proveedor (coste real de transición, curva de aprendizaje, riesgo de calidad), internalizar el servicio, o aceptar las condiciones actuales. Quiero saber cuál es mi BATNA (mejor alternativa al acuerdo negociado) con honestidad.

**Táctica de negociación por tipo de proveedor**

Para agencias creativas:
- Cómo pedir una auditoría de horas para detectar ineficiencias antes de renegociar
- El momento ideal del año para abrir la conversación (antes de su cierre de presupuestos, no en época de pitching intenso)
- Cómo proponer modelos de compensación por resultados sin que lo interpreten como pérdida de confianza
- Qué concesiones puedo ofrecer que no cuesten dinero: testimonios, casos de estudio, referencias, exclusividad en el sector

Para plataformas de publicidad (Meta, Google, LinkedIn, etc.):
- Cómo activar a tu account manager para conseguir créditos de prueba y betas
- La palanca del compromiso de inversión anual vs. mensual
- Cómo negociar soporte premium sin pagar extra: formación del equipo, revisiones de cuenta, acceso a estudios sectoriales
- Cuándo es el mejor momento para renegociar (inicio de trimestre fiscal de la plataforma)

Para proveedores de SaaS de marketing:
- La táctica del "estoy evaluando alternativas": cómo comunicarlo sin mentir y con evidencia
- Descuentos por pago anual anticipado vs. mensual: el análisis financiero real
- Negociar el precio de renovación antes de que llegue la fecha: la ventana óptima es 60-90 días antes
- Qué incluir en el contrato que muchos olvidan: precio bloqueado por N años, cláusula de salida sin penalización, SLA de uptime y créditos automáticos por incumplimiento

**El lenguaje de la negociación**

Dame guiones exactos para situaciones difíciles:

- Cómo decir "tu precio es demasiado alto" sin crear confrontación: "Valoramos mucho la relación, pero tenemos restricciones presupuestarias reales. ¿Podemos explorar juntos qué ajustes permitirían continuar?"
- Cómo responder al clásico "ese es nuestro precio estándar": preguntar por opciones de paquete, volumen, o estructura alternativa
- Cómo gestionar el silencio táctico en negociación: cuándo callarse y dejar que la contraparte llene el vacío
- Cómo cerrar sin presionar: "¿Qué necesitarías de nuestra parte para poder movernos en esa dirección?"

**Qué nunca hacer**

- Amenazar con irse sin tener realmente una alternativa lista
- Negociar por email cuando el teléfono o videoconferencia da más contexto emocional
- Centrarse solo en el precio ignorando condiciones de pago, exclusividad, soporte y términos de salida
- Aceptar la primera contraoferta por incomodidad con el silencio o la tensión

**Cierre y seguimiento**

Ayúdame a documentar el acuerdo y crear un sistema de revisión anual para que estas negociaciones se conviertan en un proceso continuo, no en un evento de emergencia cuando el contrato ya venció.

Dame un plan de acción de 30 días para preparar y ejecutar mi próxima renegociación con [nombre del proveedor] y qué esperar en cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negociar contratos y tarifas con agencias y proveedores de marketing para reducir costes y mejorar condiciones.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Negociación técnica: defender las decisiones de arquitectura ante presiones de tiempo',
                'description'      => 'Desarrolla las habilidades para justificar decisiones técnicas complejas frente a product managers, directivos y stakeholders no técnicos que priorizan velocidad sobre calidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager senior con experiencia tanto en arquitectura de software como en gestión de stakeholders no técnicos. Necesito tu ayuda para prepararme a defender decisiones técnicas importantes frente a presiones comerciales o de plazos, sin perder credibilidad ni el proyecto.

**El problema central**

Los ingenieros frecuentemente pierden estas negociaciones no por falta de razón técnica sino por falta de habilidad comunicativa. El stakeholder no técnico no entiende la deuda técnica, los riesgos de escalabilidad o la complejidad de la migración; solo ve que el competidor lanzó en dos semanas y nosotros pedimos cuatro meses. Tu trabajo como ingeniero es traducir la realidad técnica a lenguaje de negocio.

**Diagnóstico: qué tipo de negociación es esta**

Ayúdame a identificar la naturaleza real del conflicto:

1. ¿Es una presión de plazo real (compromiso con cliente, evento, regulación) o una presión de plazo percibida (urgencia artificial creada por nerviosismo o falta de información)?
2. ¿El stakeholder entiende las consecuencias técnicas de la decisión acelerada o las desconoce?
3. ¿Existe un historial de deuda técnica que ya está causando problemas actuales que puedo usar como evidencia?
4. ¿Hay alternativas reales que yo no he explorado: soluciones intermedias, incrementales, o despliegues parciales que podrían satisfacer el negocio con menor riesgo técnico?

**Construcción del argumento técnico en lenguaje de negocio**

Enséñame a traducir estos conceptos técnicos a impacto de negocio:

- Deuda técnica → coste acumulado de mantenimiento, velocidad de desarrollo futura reducida, riesgo de incidentes
- Escalabilidad insuficiente → qué pasa exactamente cuando lleguen 10x los usuarios: caída, degradación, coste de infraestructura
- Ausencia de tests → probabilidad de regresiones en releases futuros, coste de QA manual, tiempo de detección de bugs en producción
- Arquitectura de monolito vs. microservicios → en términos de autonomía de equipos, tiempo de despliegue, tolerancia a fallos parciales
- Migración de base de datos → ventana de mantenimiento, riesgo de pérdida de datos, complejidad de rollback

**Técnicas de negociación específicas para ingenieros**

1. **El marco de tres opciones**: nunca presentar una única solución (que parece terquedad). Presenta siempre tres: la opción rápida con sus riesgos explícitos, la opción robusta con su coste real, y la opción intermedia que das como recomendación. Esto transforma la negociación de "¿sí o no?" a "¿cuál?"

2. **Cuantificar el riesgo, no solo describirlo**: en vez de "puede haber problemas de rendimiento", di "basado en nuestras métricas actuales, con el doble de carga simultánea el tiempo de respuesta pasará de 200ms a estimados 4-8 segundos, lo que según estudios de UX genera entre 40-80% de abandono en ese flujo".

3. **El principio del acuerdo explícito sobre el riesgo**: si el negocio decide conscientemente aceptar la deuda técnica, que lo firme. Una decisión documentada y aceptada es muy diferente a una impuesta en silencio. Proponer una plantilla de "decisión de arquitectura con riesgo aceptado" que el PM o director firme.

4. **Proponer el spike técnico acotado**: cuando hay incertidumbre real, en vez de pedir todo el tiempo, pedir dos días de investigación y volver con datos. Esto desarma la presión inmediata y demuestra seriedad.

5. **La táctica del historial de incidentes**: preparar datos reales de incidentes pasados causados por atajos técnicos similares: coste de horas de ingeniería, downtime, impacto en clientes, reputación. Un solo incidente documentado vale más que cien argumentos abstractos.

**Guión para conversaciones difíciles**

Dame el guión para estas situaciones concretas:

- El CEO dice: "El competidor X lo lanzó en una semana, ¿por qué nosotros necesitamos tres meses?"
- El PM dice: "¿No podemos simplemente hacer el happy path primero y arreglarlo después?"
- El director dice: "Siempre tenéis una razón para pedir más tiempo."
- La situación límite: te piden implementar algo que consideras técnicamente insostenible y el negocio insiste. ¿Cuándo ceder y cómo documentarlo? ¿Cuándo escalar y a quién?

**Salud psicológica del ingeniero negociador**

La negociación técnica tiene un coste emocional real: sentir que tu criterio profesional es ignorado, o que estás siendo presionado a hacer algo que sabes que va a fallar. Ayúdame a construir la mentalidad correcta: no es una batalla que ganar, es un problema compartido que resolver.

Proporciona un framework de toma de decisiones para saber cuándo seguir argumentando, cuándo ceder con documentación, y cuándo es una línea roja profesional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Defender decisiones técnicas de arquitectura frente a presiones de plazos y stakeholders no técnicos.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Negociación del diseñador: defender el proceso sin perder el proyecto',
                'description'      => 'Aprende a negociar plazos, feedback, revisiones y presupuesto de diseño manteniendo la integridad del proceso creativo y la relación con el cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de diseño con amplia experiencia trabajando con clientes corporativos, startups y agencias. Necesito tu ayuda para desarrollar mi habilidad de negociación en contextos de diseño: defender el proceso, gestionar el feedback destructivo y negociar revisiones sin perder el encargo ni comprometerme más de la cuenta.

**La paradoja del diseñador negociador**

El diseñador enfrenta una tensión particular: el cliente percibe el diseño como algo subjetivo ("no me gusta el azul") y por eso siente que tiene derecho a cambiarlo libremente; el diseñador sabe que cada decisión tiene una razón funcional y estratégica. Aprender a defender ese espacio sin sonar defensivo o arrogante es la habilidad central que quiero desarrollar.

**Antes del proyecto: el contrato como herramienta de negociación**

Enséñame qué incluir en el contrato para no tener que negociar más tarde desde una posición débil:

- Definición precisa de entregables: número de conceptos, rondas de revisión incluidas, formatos
- Qué cuenta como "una revisión": una sesión de feedback consolidado vs. comentarios continuos por WhatsApp
- Qué NO está incluido: cambios de scope, nuevas pantallas, cambios tras aprobación
- Cláusula de aprobación por silencio: si en X días no hay respuesta, se entiende aprobado
- Condiciones de pago que me protejan: porcentaje inicial, por hito, final al entregar archivos fuente

**Gestión del feedback en diseño**

El momento más delicado de la negociación en diseño es cuando llega el feedback:

1. **Feedback de gusto vs. feedback de criterio**: "No me gusta" es gusto; "el botón de compra no es lo suficientemente prominente para el objetivo de conversión" es criterio. Enséñame a preguntar para transformar el primero en el segundo: "¿Qué objetivo específico ves que no estamos cumpliendo con esta solución?"

2. **Feedback de stakeholder que no participó en el briefing**: el clásico "el director general ha visto la propuesta y quiere que sea más corporativa". Guión para gestionar esta situación: quién tiene la última palabra, cómo incorporar al nuevo stakeholder sin reiniciar el proceso.

3. **Feedback contradictorio entre stakeholders**: cuando el CMO y el CEO quieren cosas opuestas. Cómo facilitar la alineación interna del cliente antes de seguir iterando.

4. **El feedback eterno**: clientes que siempre tienen una revisión más. Cómo decir "esta revisión no estaba incluida" sin perder la relación.

**Negociar plazos en diseño**

Los plazos irreales son la fuente de más conflictos en diseño. Ayúdame con:

- Cómo descomponer el plazo pedido en fases y mostrar por qué no es viable con un argumento visual (el diagrama del proceso, no una lista de quejas)
- Qué ceder y qué no ceder: ¿qué fase puedo comprimir sin comprometer el resultado? Investigación de usuario, testing, documentación de componentes
- La técnica de la "solución mínima viable de diseño": qué puedo entregar en su plazo y qué queda para una segunda fase acordada

**Negociar el precio del diseño**

Muchos diseñadores tienen el precio más bajo del mercado no por falta de talento sino por miedo a la negociación:

- Cómo responder "es muy caro" sin bajar inmediatamente el precio: preguntar qué presupuesto tienen, ajustar el alcance, no el precio
- Cómo anclar el precio a valor de negocio: "un rediseño del checkout que mejora la conversión un 15% se paga solo en el primer mes"
- Cuándo SÍ bajar el precio y cuándo es una señal de que el cliente no valora el trabajo: los indicadores que aprendí a reconocer
- Paquetes de diseño: cómo crear opciones que el cliente pueda elegir sin que todas sean una pérdida para mí

**El momento de decir no**

A veces la mejor negociación es no aceptar el proyecto:

- Señales de alarma en la fase de briefing que predicen un cliente difícil
- Cómo declinar educadamente sin quemar la relación
- Cómo salir de un proyecto en curso que se ha vuelto inmanejable

Dame un framework de decisión para cada situación y guiones de conversación reales para las negociaciones más frecuentes que enfrento como diseñador.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negociar feedback, revisiones, plazos y presupuesto en proyectos de diseño sin perder el cliente ni el criterio profesional.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación de contratos enterprise: los detalles que hacen o rompen el deal',
                'description'      => 'Domina la negociación de contratos B2B de alto valor: SLAs, cláusulas de salida, descuentos por volumen, condiciones de pago y gestión de legal de ambas partes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial senior especializado en ventas enterprise B2B con ticket promedio superior a 50.000 euros anuales. Necesito tu ayuda para prepararme y ejecutar la fase de negociación de contratos con grandes cuentas, donde entran en juego equipos legales, procurement, múltiples stakeholders y cláusulas que pueden hacer la diferencia entre un buen y un mal contrato.

**Por qué la negociación enterprise es diferente**

En ventas enterprise la negociación del contrato no es el cierre: es el inicio de una segunda negociación paralela a la comercial. Los equipos de procurement y legal tienen objetivos propios (reducir coste, proteger a la empresa de riesgo) que no siempre están alineados con el sponsor interno que quiere tu solución. Entender esta dinámica es la clave.

**Los interlocutores en una negociación enterprise**

Ayúdame a mapear los actores y sus motivaciones:

- El sponsor ejecutivo: quiere la solución funcionando rápido y sin problemas internos
- El equipo de procurement: su KPI es el ahorro negociado, miden su éxito por el descuento obtenido
- El equipo legal: su objetivo es minimizar el riesgo jurídico de la empresa, no desbloquear el deal
- El CFO o controller: mira el flujo de caja y los compromisos plurianuales con cautela
- IT/Seguridad: tienen sus propios requisitos de homologación y pueden vetar el proveedor

Para cada uno: cuál es su principal preocupación, qué lenguaje usa, cómo obtener su alineación.

**Las cláusulas que siempre se negocian y cómo abordarlas**

1. Precio y descuentos: cómo anclar el descuento a compromisos reales (volumen, plazo, pago anticipado) en vez de cederlo por presión. La técnica de la concesión condicionada: "Podemos ajustar el precio si el contrato es por tres años y el pago es semestral."

2. SLA y penalizaciones: cómo negociar SLAs alcanzables pero que transmitan seriedad. Qué incluir en la definición de incidente, ventanas de mantenimiento, exclusiones. Las penalizaciones razonables vs. las que son una trampa.

3. Cláusulas de salida (exit clauses): el cliente siempre pide salida libre; yo quiero compromiso. Cómo negociar condiciones de salida que protejan mi negocio sin asustar al cliente: preaviso razonable, condiciones de devolución de datos, periodo de transición asistida.

4. Propiedad intelectual y datos: en proyectos con personalización o integración, quién es propietario de los desarrollos específicos. Cómo proteger mi IP central mientras el cliente tiene sus datos y configuraciones.

5. Limitación de responsabilidad: los grandes clientes intentan eliminar estos límites. Cómo negociar caps de responsabilidad razonables y excluir daños indirectos.

6. Condiciones de pago: el cliente enterprise quiere 60-90 días; yo necesito flujo de caja. Estrategias: pago por hitos, descuento por pago anticipado, financiación a través de terceros.

**Tácticas del equipo de procurement**

El procurement tiene un manual de tácticas que conviene conocer:

- La oferta de competidor fantasma: "Tenemos otra propuesta un 30% más barata." Cómo verificar y responder.
- El deadline artificial: "Necesitamos cerrar esta semana o el presupuesto cae." Cómo evaluar su veracidad.
- La escalada de última hora: cuando aparece un nuevo stakeholder en el último minuto con nuevas objeciones.
- El reabrir lo cerrado: volver a puntos ya acordados para extraer más concesiones.

Para cada táctica: cómo reconocerla y cómo responder sin deshacer el deal.

**El papel de tu equipo legal**

Cómo trabajar eficientemente con tu equipo legal o asesor externo durante la negociación:
- Qué marcarles como líneas rojas reales vs. posiciones de apertura
- Cómo evitar que el proceso legal mate el deal por exceso de cautela
- Cómo comunicar al cliente que estás en revisión legal sin que interpreten debilidad

**Cierre y firma**

Las últimas horas antes de la firma son críticas: cómo gestionar los cambios de última hora, mantener la calma cuando el cliente hace una demanda inesperada, y cómo cerrar con profesionalidad.

Dame un checklist de contrato enterprise y un plan de negociación en fases para mi próximo deal de alto valor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negociar contratos B2B enterprise con procurement, legal y múltiples stakeholders para cerrar deals favorables.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Negociación interna del PM: recursos, prioridades y el arte del trade-off',
                'description'      => 'Desarrolla la habilidad de negociar con ingeniería, diseño, directivos y otros PMs para conseguir los recursos y prioridades que tu producto necesita.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de producto con experiencia en empresas de tecnología de escala media y grande, donde los recursos son limitados y la competencia interna por el roadmap es constante. Necesito desarrollar mi capacidad de negociación interna como PM para conseguir lo que mi producto necesita sin desgastar relaciones ni quemar capital político.

**La negociación interna es diferente a la negociación externa**

En la negociación externa hay un contrato que formaliza el acuerdo. En la negociación interna el acuerdo vive en la confianza, el histórico de compromisos cumplidos y la percepción que los demás tienen de ti. Un PM que "gana" demasiado en cada negociación interna acaba siendo percibido como político o agresivo, lo que destruye su efectividad futura.

**Los frentes de negociación del PM**

1. **Negociación con Engineering**: conseguir que el equipo acepte los plazos, el alcance y las prioridades sin imponer ni suplicar.

2. **Negociación con otros PMs**: cuando hay recursos compartidos (diseñadores, ingenieros especializados, QA) y todos los PMs compiten por ellos.

3. **Negociación hacia arriba**: convencer a dirección de que tu iniciativa merece recursos frente a otras opciones aparentemente igualmente válidas.

4. **Negociación con stakeholders de negocio**: el equipo de ventas que quiere features para cerrar un deal, el de marketing que necesita algo para una campaña.

**Construir posición antes de negociar**

La negociación más efectiva es la que ya está ganada antes de empezar:

- Cómo construir coaliciones previas: hablar individualmente con los interesados clave antes de la reunión formal
- El principio del aliado interno: quién en la empresa tiene el mismo interés que yo y puede reforzar mi posición
- Cómo usar datos de usuarios y métricas de negocio como argumento objetivo que despolitice la decisión
- El banco de favor: cómo construir capital político ayudando a otros cuando no necesito nada

**El arte del trade-off explícito**

El PM que presenta solo su propuesta parece vendedor. El PM que presenta la decisión como un trade-off explícito entre opciones parece estratega:

- Cómo construir el documento de decisión que muestra claramente las opciones, sus costes y beneficios, y recomienda una con fundamento
- Cómo hacer que el stakeholder se sienta parte de la decisión (no a quien se le vende la decisión)
- Cuándo dejar la decisión al jefe (para distribuir responsabilidad y construir alineación) y cuándo tomarla tú

**Negociar prioridades en el roadmap**

La batalla del roadmap es permanente. Estrategias concretas:

- El framework de puntuación compartido: cuando todo el mundo usa los mismos criterios para evaluar, la negociación deja de ser política
- Cómo gestionar las peticiones de última hora de ventas o dirección sin deshacer el plan
- La técnica del roadmap público vs. privado: comprometerse solo con lo que tienes certeza razonable de entregar
- Cómo decir no a una feature sin decir no a la persona: "Esta iniciativa tiene sentido. Para incluirla en el Q3 necesitaría sacar X o Y. ¿Cuál preferiría priorizar?"

**Negociar con Engineering sin imponer**

La relación con el equipo de ingeniería es la más delicada para el PM. Enséñame:

- Cómo involucrar a engineering en la estimación en vez de imponer plazos
- Cómo gestionar el desacuerdo de estimación: cuando engineering dice 3 meses y el negocio necesita 6 semanas
- Cómo dar contexto de negocio (por qué importa la fecha) sin convertirlo en presión
- Cómo construir confianza con tech lead e ingenieros para que quieran ayudarte a encontrar soluciones

**El capital político del PM**

Dame un sistema para gestionar mi capital político interno como activo estratégico: cómo ganarlo, cómo gastarlo conscientemente, y cómo evitar que se agote sin darme cuenta.

Incluye señales de alerta de que estoy perdiendo credibilidad o apoyo interno y qué hacer para recuperarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Negociar internamente con engineering, dirección y otros equipos para conseguir recursos y prioridades en producto.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Negociación salarial con candidatos: encontrar el acuerdo que funciona para ambos',
                'description'      => 'Aprende a negociar compensación, beneficios y condiciones de incorporación con candidatos de alto valor manteniendo la equidad interna y el presupuesto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un HR business partner senior con experiencia en reclutamiento y compensación en empresas de tecnología y servicios. Necesito tu ayuda para desarrollar mis habilidades de negociación salarial con candidatos, especialmente en perfiles técnicos y directivos donde el mercado es competitivo y la banda salarial tiene poca flexibilidad.

**El contexto de la negociación salarial desde RRHH**

El profesional de RRHH negocia desde una posición particular: tiene información que el candidato no tiene (la banda salarial interna, la urgencia real de la contratación, el historial de otras ofertas en la empresa) pero también tiene restricciones reales (equidad interna, presupuesto aprobado, política de compensación). La negociación efectiva es la que encuentra el punto que satisface al candidato sin romper la equidad del equipo existente.

**Diagnóstico previo a la negociación**

Antes de hacer una oferta, necesito entender:

1. ¿Cuál es la verdadera motivación del candidato? El salario raramente es lo único. Ayúdame a diseñar las preguntas de discovery que revelan qué valora realmente: flexibilidad, progresión rápida, proyecto interesante, cultura, estabilidad, beneficios específicos, ubicación, teletrabajo.

2. ¿Cuál es su situación actual real? ¿Tiene contraofertas reales o potenciales? ¿Está en proceso con otras empresas? ¿Cuándo necesita decidir?

3. ¿Cuál es nuestra posición competitiva real en el mercado para este perfil? ¿Somos una primera, segunda o tercera opción habitual para candidatos de este nivel?

**Estructura de la oferta**

La negociación salarial no es solo sobre el número base. Enséñame a construir una oferta total que sea competitiva aunque el salario base no sea el más alto del mercado:

- Salario fijo vs. variable: cómo explicar la parte variable de forma que sea creíble y alcanzable
- Equity u opciones: cómo presentar stock options o phantom shares a alguien que no entiende bien el mecanismo
- Beneficios no monetarios que tienen valor real: seguro médico, formación, días libres adicionales, flexibilidad horaria, teletrabajo, hardware
- Bonus de bienvenida (sign-on): cuándo usarlo, cómo estructurarlo (con o sin cláusula de devolución)
- Revisiones de compensación rápidas: ofrecer una revisión a los 6 meses si el presupuesto actual es ajustado

**La conversación de negociación**

Guiones para los momentos más habituales:

- El candidato pide más del presupuesto máximo: cómo decirlo honestamente sin cerrar la puerta y explorando qué partes del paquete podrían compensar
- La contraoferta de su empresa actual: cómo gestionarla (¿qué le diría a alguien que recibe una contraoferta? Los estudios muestran que el 70% de los que la aceptan se van igualmente en menos de un año)
- El candidato compara con un competidor que paga más: cómo responder con honestidad y con los argumentos reales de nuestra propuesta de valor
- El silencio tras la oferta: cuánto tiempo dar, cuándo hacer seguimiento y cómo hacerlo sin presionar

**Equidad interna como restricción real**

El mayor riesgo de una negociación salarial bien intencionada es crear inequidad interna. Cómo gestionar esta tensión:

- Qué hacer cuando el candidato pide más de lo que gana alguien del equipo con más experiencia
- Cómo comunicar al manager contratante que hay límites que no puedo cruzar y por qué
- Cuándo escalar la decisión a dirección o CHRO

**Cuando la negociación no llega a acuerdo**

A veces el deal no cierra. Cómo gestionar este momento:

- Cómo terminar la negociación sin quemar la relación (el candidato puede volver o recomendarnos)
- Qué aprender de cada negociación fallida para mejorar el proceso y el benchmark de compensación
- Cuándo hacer una excepción y cuándo mantener el límite

Dame un playbook completo de negociación salarial adaptable a diferentes perfiles (junior, senior, directivo) y un script de conversación para las situaciones más frecuentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negociar compensación y condiciones con candidatos de alto valor manteniendo la equidad interna y el presupuesto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Negociación financiera: con bancos, inversores y contrapartes',
                'description'      => 'Desarrolla las habilidades para negociar condiciones de financiación, términos de inversión y acuerdos financieros complejos con entidades bancarias e inversores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en financiación corporativa, relaciones con inversores y gestión de contrapartes financieras. Necesito tu ayuda para desarrollar mi habilidad de negociación en contextos financieros: desde condiciones de deuda bancaria hasta términos de rondas de inversión y acuerdos con socios financieros.

**El contexto de la negociación financiera**

La negociación financiera tiene características únicas: los términos son altamente técnicos y tienen implicaciones legales directas, la información asimétrica es enorme (el banco o inversor tiene mucha más experiencia negociando que la mayoría de empresas), y los acuerdos financieros crean obligaciones que pueden durar décadas. Un punto porcentual de interés o una cláusula de covenant mal negociada puede tener impacto millonario.

**Negociación de financiación bancaria**

Con los bancos, el poder de negociación depende del perfil financiero de la empresa y de la competencia entre entidades. Ayúdame con:

1. **Preparación de la posición negociadora**: qué información preparar antes de sentarse con el banco (ratios financieros clave, proyecciones, garantías disponibles, comparativa de mercado de tipos). Cómo construir un dossier financiero que transmita solidez y facilite la aprobación.

2. **Las variables que se negocian**: tipo de interés (fijo vs. variable, diferencial sobre Euribor), comisiones de apertura y estudio, garantías personales vs. empresariales, covenants financieros (qué ratios me comprometería a mantener y cuáles son los límites que puedo aceptar), plazo y cuadro de amortización, cláusulas de vencimiento anticipado.

3. **La táctica de las múltiples entidades**: cómo usar el proceso competitivo entre bancos para mejorar condiciones sin crear expectativas falsas. El timing: presentar a varias entidades simultáneamente, recoger ofertas y usar la mejor para mejorar las demás.

4. **Covenants financieros**: la parte más técnica y peligrosa de la negociación bancaria. Qué son, cómo se miden, y cómo negociar headroom suficiente para que la empresa pueda operar con normalidad sin incumplirlos en escenarios adversos razonables.

**Negociación con inversores**

La negociación de una ronda de inversión tiene su propio vocabulario y dinámica:

1. **El term sheet**: las cláusulas que más importan y por qué. Valoración pre-money, dilución, liquidation preferences (1x no participante vs. participante), anti-dilución (broad-based weighted average vs. ratchet), derechos de veto y protecciones de los inversores, drag-along y tag-along, pro-rata en futuras rondas.

2. **Cómo negociar cada cláusula**: qué es estándar de mercado, qué es agresivo y qué es una señal de alarma. La importancia de asesoramiento legal especializado y cómo trabajar eficientemente con el abogado M&A.

3. **La negociación de la valoración**: cómo defender una valoración con métricas (múltiplos de sector, ARR, crecimiento, márgenes) en vez de solo con expectativas. Cómo gestionar el gap de valoración entre fundadores e inversores sin que el proceso muera.

4. **Due diligence como negociación**: el proceso de due diligence puede usarse para renegociar condiciones. Cómo protegerse y cómo mantener el momentum hacia el cierre.

**Negociación con otras contrapartes financieras**

- Con aseguradoras: cómo negociar coberturas, franquicias y primas
- Con proveedores de factoring y confirming: las comisiones que se pueden negociar y las que son estándar
- Con fondos de deuda alternativa: más flexibles que los bancos pero con sus propias condiciones y covenants

**Información asimétrica y cómo gestionarla**

El banco o inversor ha negociado cientos de acuerdos similares. Tú probablemente negocias uno cada varios años. Estrategias para compensar esta asimetría:

- Asesoramiento especializado: cuándo contratar un asesor financiero independiente (M&A advisor, broker de deuda) y cuándo no es necesario
- Red de comparables: hablar con otros CFOs o fundadores que hayan cerrado acuerdos similares recientemente
- Entender el modelo de negocio de la contraparte: el banco necesita prestar dinero, el inversor necesita desplegar el fondo. Entender sus presiones internas te da palanca.

Dame un framework de preparación para mi próxima negociación financiera y los términos técnicos que debo dominar antes de sentarme en la mesa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negociar condiciones de financiación bancaria, términos de inversión y acuerdos financieros complejos.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Negociación jurídica avanzada: más allá del regateo en contratos complejos',
                'description'      => 'Domina las técnicas de negociación de abogados en contratos complejos: M&A, acuerdos comerciales de alto valor y resolución de conflictos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un socio de un despacho de abogados con especialización en derecho mercantil y M&A, con extensa experiencia en negociación de contratos complejos. Necesito desarrollar mi habilidad de negociación jurídica más allá de la técnica legal: la estrategia, la psicología y la comunicación que distinguen al abogado negociador del abogado redactor.

**La diferencia entre negociar y redactar**

Muchos abogados excelentes como técnicos jurídicos son negociadores mediocres porque confunden estas dos habilidades. Redactar es trasladar a texto un acuerdo ya alcanzado; negociar es el proceso de llegar a ese acuerdo. La habilidad de negociación del abogado opera en tres niveles simultáneos: el nivel legal (las cláusulas y su interpretación), el nivel comercial (lo que el cliente realmente necesita y lo que puede conceder) y el nivel relacional (la dinámica con los abogados de la otra parte).

**Preparación de la posición negociadora**

Antes de cualquier negociación jurídica de alto valor necesito:

1. **Mapa de intereses, no de posiciones**: qué quiere realmente cada parte (no lo que dice querer). En M&A, el vendedor puede querer liquidez pero también reconocimiento, continuidad del equipo, o que la empresa se lleve de una forma determinada. Entender el interés profundo permite crear acuerdos más robustos.

2. **Mapa de riesgos**: qué representaciones y garantías son realmente materiales, dónde está la exposición real de mi cliente, cuáles son los claw-back scenarios que debo proteger.

3. **Zonas de acuerdo posible (ZOPA jurídica)**: entre las posiciones de apertura de ambas partes, dónde es matemáticamente posible un acuerdo. Identificarlo antes evita perder tiempo en posiciones imposibles.

4. **El árbol de contingencias**: qué pasa si no llegamos a acuerdo, qué litigios son probables, cuál es el coste de cada escenario alternativo. Esta información define el valor real del acuerdo para el cliente.

**Tácticas de negociación jurídica avanzada**

1. **La oferta de apertura deliberada**: en contratos complejos, el borrador inicial de contrato es la primera oferta. Quién envía el primer borrador tiene ventaja (ancla el lenguaje y la estructura) pero también responsabilidad. Cuándo enviar el primer borrador y cuándo preferir que la otra parte lo envíe.

2. **Gestión del redline**: cómo hacer redlines estratégicos que mejoren la posición del cliente sin crear tensión innecesaria con la contraparte. La diferencia entre un redline que dice "no" y uno que dice "sí, con estas condiciones".

3. **Paquetes de concesiones**: nunca ceder una cláusula de forma aislada. Construir paquetes donde cada concesión va acompañada de algo que se recibe. "Podemos aceptar la limitación de responsabilidad en X si vosotros aceptáis el plazo de prescripción en Y."

4. **El silencio y el tempo**: en negociación jurídica, la presión del tiempo generalmente beneficia a quien tiene más urgencia por cerrar. Cómo identificar quién tiene más urgencia y cómo gestionar el ritmo de la negociación en consecuencia.

5. **Gestión de los abogados de la otra parte**: los abogados contrarios no son el enemigo sino colegas con un mandato diferente. Cómo construir una relación profesional que facilite el acuerdo sin comprometer la defensa del cliente.

**Situaciones especiales en negociación jurídica**

- Negociación con posición de poder desequilibrada (cliente grande vs. proveedor pequeño): tácticas para la parte débil
- Negociación bajo presión de tiempo real (cierre de financiación, vencimiento regulatorio): qué sacrificar y qué defender
- Reabrir una negociación ya cerrada: cuándo y cómo hacerlo sin destruir la confianza
- Gestionar al cliente que interfiere en la negociación con demandas contraproducentes

**El momento de recomendar no cerrar**

A veces el mejor consejo jurídico es no firmar. Cómo comunicar esta recomendación al cliente de forma que la escuche, y cómo documentar la decisión si el cliente decide proceder de todas formas contra el criterio del abogado.

Dame un framework de preparación para negociaciones jurídicas complejas y las herramientas conceptuales que uso en cada fase del proceso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negociar contratos complejos M&A y acuerdos comerciales de alto valor con técnicas avanzadas de negociación jurídica.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Negociación de renovaciones: defender el valor cuando el cliente pide descuento',
                'description'      => 'Aprende a negociar renovaciones de contratos SaaS manteniendo el precio y el alcance cuando el cliente presiona por descuentos o amenaza con no renovar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en renovaciones de contratos SaaS para cuentas de mercado medio y enterprise. Necesito desarrollar mi habilidad de negociación de renovaciones: cómo defender el precio y el valor entregado cuando el cliente presiona por descuentos, reducción de licencias o amenaza con irse a un competidor.

**La renovación como momento de verdad**

La renovación es el momento en que el cliente toma la decisión consciente de quedarse o irse. A diferencia del momento de compra inicial (donde la emoción de lo nuevo ayuda), la renovación se negocia con datos reales de uso, resultado y percepción de valor. Si el trabajo de CS se hizo bien durante el año, la renovación debería ser fácil. Si no, es el momento donde todas las carencias se hacen visibles.

**Diagnóstico: ¿por qué el cliente pide descuento o amenaza con irse?**

No todos los pedidos de descuento son iguales. Antes de responder, debo entender el motivo real:

1. **El cliente genuinamente no ha obtenido el ROI esperado**: tiene datos, puede demostrarlo, y el descuento o reducción del alcance está justificado. ¿Cuál es el plan de recuperación realista?

2. **El cliente ha obtenido valor pero tiene presión de presupuesto externa**: recortes, cambio de dirección, nuevo CFO. El producto es bueno pero el gasto está en revisión. Estrategia diferente.

3. **El cliente usa la amenaza de irse como táctica de negociación**: está contento pero quiere conseguir mejor precio. Sabe que el coste de cambiarse es alto. ¿Cómo identificar este caso y cómo responder?

4. **El cliente tiene una alternativa real**: ha evaluado un competidor y genuinamente considera cambiarse. ¿Cómo evaluar la seriedad de la amenaza y qué hacer en este escenario?

Para cada caso, el playbook de respuesta es diferente.

**Construir el caso de valor antes de la negociación**

La mejor defensa del precio en una renovación es tener los datos del valor entregado preparados antes de que el cliente los pida:

- Quarterly Business Reviews (QBR): cómo usarlos durante el año para que la renovación no sea una sorpresa
- El informe de valor de renovación: qué incluir (métricas de uso, outcomes de negocio, benchmarks de ROI, comparativa con alternativas de mercado)
- El coste de cambio: ayudar al cliente a calcular honestamente el coste real de migrar a un competidor (tiempo de implementación, curva de aprendizaje, riesgo de transición, pérdida de configuración e histórico)

**Tácticas de negociación en renovaciones**

1. **El descuento condicionado**: si hay que dar descuento, que sea a cambio de algo: expansión de licencias, pago anual anticipado, contrato más largo, referencia o caso de estudio público. Nunca dar descuento sin condición.

2. **La conversación de expansión como palanca**: en vez de defender el precio actual, proponer una conversación de expansión que justifique el descuento por volumen real. "Entendemos que el presupuesto es ajustado. Si incorporamos a los equipos X e Y, podemos negociar un precio por licencia más favorable."

3. **La escalada estratégica**: cuando la negociación está estancada con el interlocutor habitual, cómo involucrar al ejecutivo sponsor de forma que acelere la decisión sin que parezca presión.

4. **El cierre anticipado**: cerrar la renovación 60-90 días antes del vencimiento, cuando la presión del tiempo no favorece al cliente y mi equipo tiene más atención disponible para el proceso.

5. **Gestión del silencio**: el cliente que no responde en los últimas semanas antes del vencimiento. Cómo interpretar este silencio y cómo mantener el proceso vivo.

**Cuándo ceder y cuándo perder el cliente**

No toda renovación vale la pena a cualquier precio. Dame el framework para decidir:
- Cuándo aceptar una reducción de precio o alcance para retener al cliente
- Cuándo la renovación con descuento no es económicamente viable y es mejor dejar ir al cliente
- Cómo gestionar un churn con profesionalidad que deje la puerta abierta para el futuro

Proporciona un playbook completo de renovaciones con guiones para cada escenario y un calendario de actividades de los 90 días previos al vencimiento del contrato.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negociar renovaciones de contratos SaaS defendiendo el precio y el valor cuando el cliente pide descuentos o amenaza con irse.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Negociación de proyectos freelance: tarifas, alcance y condiciones sin ceder',
                'description'      => 'Aprende a negociar proyectos freelance desde una posición de valor: cómo defender tus tarifas, definir el alcance con precisión y establecer condiciones que te protejan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de diez años de experiencia gestionando proyectos de alto valor y clientes exigentes. Necesito desarrollar mi habilidad de negociación como profesional independiente para dejar de cobrar por debajo de mi valor, parar el scope creep y establecer condiciones de trabajo que me protejan sin asustar a los clientes.

**El problema central del freelance en la negociación**

La mayoría de freelancers negocia desde el miedo: miedo a no conseguir el proyecto, miedo a que el cliente se vaya, miedo a parecer caro o difícil. Este miedo se traduce en tarifas demasiado bajas, contratos vagos que permiten el scope creep y ausencia de condiciones de pago que protegen el trabajo. El resultado es proyectos que empiezan siendo rentables y terminan siendo inviables.

**Antes de la primera reunión: posicionamiento y tarifas**

La negociación empieza antes de hablar con el cliente:

1. **Tarifas basadas en valor, no en tiempo**: cómo calcular y defender tarifas basadas en el valor generado para el cliente en lugar del número de horas. "Cobro X por este proyecto porque el resultado que entrego genera/ahorra Y a tu empresa." La matemática del valor.

2. **El rango de tarifas y cuándo usarlo**: nunca dar un precio único en la primera conversación. Dar un rango ("proyectos de este tipo suelen estar entre X y Y, dependiendo del alcance exacto") y recopilar más información antes de comprometerte.

3. **Investigar al cliente antes de proponer**: qué buscar sobre la empresa, el proyecto y la persona antes de la primera reunión para llegar con contexto y poder hablar de valor.

**La primera conversación: discovery, no venta**

El freelance que llega a vender es percibido como más débil que el que llega a entender:

- Preguntas de discovery que revelan el valor real del proyecto: ¿qué pasa si no lo hacen? ¿Cuánto les cuesta el problema que están resolviendo? ¿Cuándo necesitan el resultado y por qué esa fecha?
- Cómo entender el presupuesto sin preguntarlo directamente: "¿Tienen alguna referencia de lo que han invertido en proyectos similares?"
- Cuándo y cómo presentar tu tarifa: al final de la conversación de discovery, cuando ya tienes contexto suficiente para anclarla al valor

**El contrato como herramienta de negociación**

El contrato no es un trámite burocrático: es el documento que define la relación y te protege:

- Qué incluir en el alcance con precisión quirúrgica: entregables específicos, número de revisiones, formatos, canales de comunicación y tiempo de respuesta esperado del cliente
- La cláusula de cambio de alcance: cómo redactarla para que cualquier petición fuera del alcance original sea una conversación sobre coste adicional, no una obligación
- Condiciones de pago que te protejan: porcentaje inicial antes de empezar (mínimo 30-50%), hitos intermedios, pago final antes de entregar los archivos finales
- Propiedad intelectual: quién es propietario del trabajo hasta que se paga completamente
- Cláusula de cancelación: qué pasa si el cliente cancela el proyecto a medias

**Gestión del scope creep en tiempo real**

El scope creep raramente llega como una petición grande; llega como pequeños "¿podrías añadir esto?" acumulados:

- Cómo reconocer el scope creep cuando está ocurriendo
- Guión para responder: "Esto está fuera del alcance acordado. Puedo incluirlo con un presupuesto adicional de X o lo dejamos para una fase siguiente."
- Cómo documentar los cambios de alcance acordados (email de confirmación, addendum al contrato)
- Qué hacer cuando el cliente se molesta por la respuesta

**La negociación del precio cuando presionan**

- "Es demasiado caro": la respuesta que no baja el precio automáticamente
- "Tengo otra propuesta más barata": cómo responder diferenciando tu valor sin atacar a la competencia
- El cliente que siempre quiere el precio más bajo: señales de que no es el cliente adecuado para ti
- Cuándo sí hacer descuento y cómo estructurarlo: a cambio de pago anticipado, proyecto referenciable, trabajo continuado

**Cuándo decir no y cómo**

El freelance que dice no a proyectos inadecuados tiene más valor percibido que el que acepta todo:

- Los proyectos que nunca debí aceptar: señales de alarma en la primera conversación
- Cómo declinar un proyecto sin quemar la relación: puede volver con un proyecto mejor o referirte a alguien más adecuado
- La lista de condiciones mínimas por debajo de las cuales no trabajo

Dame un sistema completo de negociación para mi próximo proyecto: desde la primera conversación hasta el contrato firmado y las condiciones de pago aseguradas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negociar proyectos freelance: defender tarifas, definir el alcance con precisión y establecer condiciones de pago que protejan el trabajo.',
                'vote_score'       => 39,
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
