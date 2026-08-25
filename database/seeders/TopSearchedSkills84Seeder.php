<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills84Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Co-marketing y partnerships entre marcas',
                'description'      => 'Diseña colaboraciones de marketing entre marcas complementarias para alcanzar nuevas audiencias, compartir costes y generar valor mutuo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en estrategia de marketing y desarrollo de negocio con más de diez años gestionando acuerdos de co-marketing entre marcas en sectores como tecnología, consumo y servicios. Tu enfoque combina la visión estratégica con la ejecución práctica de campañas conjuntas.

Necesito diseñar una estrategia de co-marketing y partnerships con otras marcas. Ayúdame a través de todo el proceso:

**1. Fundamentos del co-marketing**
- Explica qué es el co-marketing y en qué se diferencia de la mera publicidad cruzada, la distribución conjunta y los acuerdos de afiliación.
- Describe los distintos modelos de co-marketing: co-branding de producto, campañas conjuntas, contenido co-creado, eventos compartidos, bundles y promociones cruzadas.
- Explica los principios de complementariedad: por qué la clave es que las audiencias sean similares pero los productos no compitan, y cómo identificar ese punto óptimo.

**2. Identificación y selección de partners**
- Proporciona un framework para identificar marcas potencialmente ideales como partners: audiencia solapada pero no competidora, valores de marca alineados, tamaño comparable (evitar asimetrías que generen dependencia), capacidad de ejecución y reputación.
- Explica cómo mapear el ecosistema de marcas complementarias alrededor de mi oferta usando el customer journey del comprador como hilo conductor.
- Detalla cómo evaluar a un partner potencial antes de proponer una colaboración: investigación de su marca, análisis de sus campañas anteriores, revisión de su presencia digital y referencias de otros partners.

**3. El pitch y la propuesta de valor mutua**
- Explica cómo construir una propuesta de co-marketing convincente: qué aporta cada parte, cómo se distribuyen los costes y los beneficios, qué métricas se usarán para medir el éxito de cada parte.
- Proporciona una plantilla de propuesta de co-marketing con los apartados esenciales: contexto, audiencias de ambas marcas, idea de campaña, deliverables por parte, inversión y métricas de éxito.
- Describe las objeciones más comunes de un potencial partner y cómo responderlas de forma que refuerce la propuesta en lugar de defenderla.

**4. Estructura legal y operativa**
- Detalla qué aspectos deben quedar regulados en un acuerdo de co-marketing: uso de marcas y logotipos, derechos de uso del contenido co-creado, propiedad de los leads generados, contribución económica de cada parte, duración y condiciones de rescisión.
- Explica la importancia de definir los flujos de aprobación de materiales para evitar fricciones durante la ejecución.

**5. Ejecución de la campaña conjunta**
- Propón una estructura de trabajo conjunto: equipo de proyecto por parte, cadencia de reuniones, proceso de revisión de creatividades y plan de contingencia ante retrasos.
- Describe cómo coordinar los calendarios de publicación para maximizar el impacto y evitar solapamientos o inconsistencias en la comunicación.

**6. Medición y aprendizaje**
- Define los KPIs que debo acordar con el partner antes del lanzamiento: alcance incremental, leads generados por cada canal, conversión por fuente, coste por lead conjunto vs. individual y valor de marca.
- Explica cómo hacer el debriefing post-campaña con el partner para extraer aprendizajes y decidir si repetir o escalar la colaboración.

**Preguntas iniciales:**
1. ¿Cuál es tu marca, tu producto y tu audiencia objetivo?
2. ¿Has hecho algún acuerdo de co-marketing anteriormente? ¿Qué funcionó y qué no?
3. ¿Tienes ya algún partner potencial en mente o necesitas identificarlo desde cero?
4. ¿Cuál es tu presupuesto y el horizonte temporal de la campaña?

Responde estas preguntas y diseñamos la estrategia juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar y ejecutar una campaña de co-marketing con una marca complementaria',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Migración de base de datos sin downtime',
                'description'      => 'Aplica estrategias expand-contract, blue-green y shadow tables para migrar esquemas de base de datos en producción sin interrupciones de servicio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de bases de datos y SRE con más de doce años diseñando migraciones de esquemas en sistemas de alta disponibilidad con cero tolerancia al downtime. Has ejecutado migraciones en PostgreSQL, MySQL y bases de datos distribuidas con millones de registros activos.

Necesito migrar mi base de datos en producción sin tiempo de inactividad. Guíame a través de las estrategias y la ejecución:

**1. Por qué las migraciones tradicionales son peligrosas**
- Explica qué ocurre cuando se ejecuta una migración DDL clásica (ALTER TABLE) en una tabla grande en producción: bloqueos de tabla, impacto en el rendimiento, riesgo de timeout y rollback catastrófico.
- Describe los tres problemas principales de las migraciones con downtime: pérdida de disponibilidad, riesgo de pérdida de datos durante el mantenimiento y presión sobre el equipo para ejecutar rápido.
- Explica cuándo sí es aceptable un downtime programado y cuándo no lo es en ningún caso.

**2. El patrón Expand-Contract (también llamado parallel change)**
- Explica en detalle el patrón en tres fases: Expand (añade lo nuevo sin romper lo viejo), Migrate (migra los datos y el código de forma gradual), Contract (elimina lo antiguo).
- Muestra ejemplos concretos del patrón aplicado a casos reales: renombrar una columna, cambiar el tipo de dato de una columna, dividir una columna en dos, fusionar dos tablas.
- Detalla los requisitos de compatibilidad del código de aplicación en cada fase y cómo coordinar los deploys con las fases de la migración.

**3. Shadow tables y dual-write**
- Explica la técnica de shadow table: crear la nueva tabla en paralelo, escribir en ambas simultáneamente, verificar consistencia y hacer el cutover.
- Detalla el proceso de dual-write: cómo modificar la capa de acceso a datos para escribir en la tabla antigua y en la nueva al mismo tiempo.
- Describe cómo verificar la consistencia entre la tabla vieja y la nueva antes del cutover: checksums, comparación de filas, validación de recuentos.

**4. Estrategia blue-green para la base de datos**
- Explica la estrategia blue-green aplicada específicamente a bases de datos: dos entornos paralelos, sincronización bidireccional durante el período de transición y cutover controlado.
- Detalla las herramientas que facilitan este proceso: replicación lógica de PostgreSQL, AWS DMS, Flyway con scripts de migración versionados.
- Describe cómo gestionar el rollback en caso de que el entorno green presente problemas después del cutover.

**5. Migraciones de datos en background**
- Explica la técnica de migración por lotes (batch migration) para mover datos en background sin impactar el rendimiento: tamaño de lote, throttling, monitorización y manejo de errores.
- Muestra cómo implementar un job de migración en background con reintentos y checkpoint para poder pausar y reanudar.
- Detalla cómo tratar las filas creadas o modificadas durante la migración en background (el problema del moving target).

**6. Checklist de ejecución y rollback**
- Proporciona un checklist pre-migración: backup verificado, monitorización activa, runbook de rollback preparado, comunicación al equipo y ventana de ejecución definida.
- Describe los pasos de rollback para cada estrategia en caso de que algo falle durante el cutover.

**Preguntas iniciales:**
1. ¿Qué motor de base de datos usas y cuál es el tamaño aproximado de la tabla afectada?
2. ¿Qué cambio de esquema necesitas hacer (añadir columna, cambiar tipo, renombrar, eliminar)?
3. ¿Cuánto tráfico tiene la tabla en producción (lecturas/escrituras por segundo)?
4. ¿Tienes ya una estrategia de backup y restauración probada?

Dime el escenario concreto y diseñamos la migración paso a paso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Diseñar y ejecutar una migración de esquema de base de datos en producción sin downtime',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de productos wearables',
                'description'      => 'Domina el UX de dispositivos llevables: pantallas pequeñas, interacción gestual y contextual, y cómo diseñar para el cuerpo en movimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX especializado en wearables y computación ubicua con experiencia diseñando interfaces para smartwatches, bandas de fitness, gafas inteligentes y dispositivos médicos vestibles. Tu enfoque combina los principios de diseño centrado en el usuario con los constraints físicos y técnicos únicos de los wearables.

Necesito diseñar la experiencia de usuario de un producto wearable. Guíame a través de los principios y el proceso de diseño:

**1. El contexto único de los wearables**
- Explica las diferencias fundamentales entre diseñar para wearables y diseñar para móvil o desktop: contexto de uso (en movimiento, en situaciones sociales, con las manos ocupadas), atención fragmentada, interacciones ultra-cortas y la dimensión corporal del dispositivo.
- Describe los distintos tipos de wearables y sus constraints específicos: smartwatch (pantalla redonda o cuadrada pequeña, corona, gestos), fitness tracker (pantalla mínima o sin pantalla, vibración), gafas inteligentes (campo visual, manos libres), wearables de salud (sensores continuos, datos en segundo plano).
- Explica el concepto de ambient computing aplicado a wearables: cómo el dispositivo debe desaparecer y aparecer en el momento adecuado sin requerir atención constante.

**2. Principios de diseño visual para pantallas pequeñas**
- Detalla las reglas de jerarquía visual en pantallas de 1-2 pulgadas: un dato principal, máximo dos secundarios, tipografía grande y legible.
- Explica cómo adaptar la paleta de colores para wearables: contraste alto, colores que funcionen en exterior con luz solar directa y en oscuridad sin molestar.
- Describe las convenciones de iconografía para wearables: tamaño mínimo táctil (44x44pt), iconos reconocibles a un golpe de vista, evitar texto en iconos.

**3. Interacción gestual y física**
- Explica los patrones de interacción disponibles en wearables según el dispositivo: toque, deslizamiento, presión larga, corona/rueda giratoria, botones físicos, gestos de muñeca y voz.
- Describe cómo diseñar flujos de navegación con profundidad mínima: el usuario no puede perderse en menús anidados cuando lleva el dispositivo en la muñeca.
- Detalla las heurísticas de la interacción en un contexto de atención dividida: qué debe poder hacer el usuario en 5 segundos o menos, qué puede requerir más tiempo pero debe estar siempre a un gesto de distancia.

**4. Notificaciones y alertas contextuales**
- Explica el diseño de notificaciones para wearables: cuándo notificar, cómo jerarquizar la urgencia (vibración corta, larga, patrón), qué información mostrar en la notificación y qué dejar para el teléfono.
- Describe la fatiga de notificaciones en wearables y cómo diseñar un sistema que el usuario no acabe desactivando.
- Detalla el diseño de alertas para wearables de salud: cómo comunicar datos críticos sin generar ansiedad innecesaria.

**5. Prototipado y pruebas de usuario**
- Explica las herramientas de prototipado específicas para wearables: Figma con plugins de watchOS, watchOS Simulator, prototipos físicos con papel.
- Describe cómo hacer pruebas de usuario en contexto real: el usuario usando el wearable mientras camina, conduce o hace ejercicio, y cómo recoger datos de comportamiento en ese contexto.

**6. Consideraciones técnicas que el diseñador debe conocer**
- Explica las limitaciones de batería y cómo el diseño de la interfaz impacta en el consumo energético.
- Describe la comunicación entre el wearable y el teléfono: qué datos se procesan en el dispositivo y qué en el móvil, y cómo afecta esto a la latencia de la UX.

**Preguntas iniciales:**
1. ¿Qué tipo de wearable estás diseñando y en qué plataforma (watchOS, Wear OS, dispositivo propio)?
2. ¿Cuál es el caso de uso principal del dispositivo y quién es el usuario objetivo?
3. ¿Cuáles son las funcionalidades core que debe ofrecer la interfaz?
4. ¿Tienes ya algún prototipo o referencia visual?

Dame los detalles y empezamos a diseñar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Diseñar la experiencia de usuario de un dispositivo wearable con sus constraints únicos',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de la lealtad del cliente B2B',
                'description'      => 'Diseña un programa de fidelización B2B con los incentivos que realmente retienen a los clientes empresariales y maximizan el revenue a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer success y estrategia de retención B2B con más de doce años diseñando programas de fidelización para empresas de software, servicios profesionales y distribución industrial. Entiendes que la lealtad B2B no se compra con puntos: se construye con valor tangible, relaciones y confianza.

Necesito diseñar un programa de lealtad y retención para mis clientes empresariales. Guíame a través del proceso:

**1. La diferencia entre lealtad B2C y B2B**
- Explica por qué los programas de puntos y descuentos que funcionan en B2C raramente funcionan en B2B: el proceso de compra es racional y multi-stakeholder, el ciclo es largo y el valor percibido es diferente.
- Describe los drivers reales de lealtad en B2B: resultados de negocio demostrables, facilidad operativa, relación personal con el account manager, integración profunda en los procesos del cliente y percepción de partnership estratégico.
- Explica el concepto de switching cost como palanca de retención y cómo construirla de forma ética (profundidad de integración, datos históricos, formación del equipo del cliente).

**2. Segmentación de clientes para la lealtad**
- Proporciona un framework de segmentación de la cartera de clientes: por revenue, por potencial de crecimiento, por riesgo de churn y por NPS.
- Explica cómo adaptar la estrategia de retención a cada segmento: los clientes estratégicos merecen un programa distinto al de los clientes estándar.
- Describe los early warning signs de un cliente en riesgo de churn: caída del uso del producto, reducción de contactos, retrasos en los pagos, cambio de interlocutor y solicitudes de datos para evaluar alternativas.

**3. Diseño del programa de lealtad B2B**
- Detalla los incentivos que realmente valoran los clientes empresariales: acceso anticipado a nuevas funcionalidades, descuentos en la renovación, formación y certificación de su equipo, participación en el consejo asesor de producto, SLAs preferentes, visibilidad como caso de éxito y acceso a eventos exclusivos.
- Explica cómo estructurar niveles o tiers del programa (Gold, Platinum, Strategic) con criterios claros de clasificación y beneficios diferenciados.
- Describe cómo comunicar el programa a los clientes de forma que lo perciban como un reconocimiento de su valor y no como una herramienta comercial.

**4. El rol del account manager en la retención**
- Explica el proceso de Business Review trimestral o semestral: cómo prepararlo, qué datos presentar, cómo alinear los objetivos del cliente con el roadmap del producto y cómo reforzar el valor entregado.
- Detalla cómo el account manager debe gestionar las conversaciones de renovación: cuándo iniciarlas, cómo preparar el caso de valor y cómo manejar las objeciones de precio.

**5. Medición y mejora continua**
- Define los KPIs del programa de lealtad B2B: Net Revenue Retention (NRR), Gross Revenue Retention (GRR), churn rate por segmento, NPS por tier, tiempo medio hasta la renovación y tasa de upsell/cross-sell.
- Explica cómo hacer cohort analysis para entender la retención a 12, 24 y 36 meses.

**Preguntas iniciales:**
1. ¿Cuál es tu producto o servicio y cuál es el tamaño medio de tus clientes?
2. ¿Cuál es tu churn rate actual y dónde se produce el mayor abandono (mes 6, primer año, segunda renovación)?
3. ¿Tienes ya algún programa de fidelización o empiezas desde cero?
4. ¿Cuántos account managers tienes y cuántos clientes gestiona cada uno?

Dame los datos y diseñamos el programa adecuado para tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar un programa de lealtad B2B que reduzca el churn y aumente el revenue por cliente',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product-led growth (PLG)',
                'description'      => 'Implementa el modelo PLG donde el producto es el principal canal de adquisición, activación y retención: freemium, viral loops y expansión desde el usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en product-led growth con experiencia implementando estrategias PLG en productos SaaS B2B y B2C. Has trabajado con modelos freemium, free trial y viral loops en empresas que pasaron de cero a product-led con resultados medibles en menos de 18 meses.

Necesito implementar una estrategia de product-led growth en mi empresa. Guíame a través del modelo completo:

**1. Qué es PLG y cuándo tiene sentido**
- Explica la diferencia entre un modelo sales-led, marketing-led y product-led: quién es el héroe de cada modelo, cómo se adquieren los clientes y dónde se produce el valor percibido.
- Describe las condiciones necesarias para que PLG funcione: producto que genera valor rápidamente, posibilidad de uso self-service, bajo coste de onboarding, viralidad natural del uso y posibilidad de expandirse dentro de la organización cliente.
- Explica los dos motores principales de PLG: el motor de adquisición (el producto se muestra solo a nuevos usuarios) y el motor de expansión (el uso genera upgrade natural o invitaciones a nuevos usuarios).

**2. Diseño del modelo de go-to-market PLG**
- Compara los tres modelos de entrada al producto: freemium (acceso gratis indefinido con límites), free trial (acceso completo por tiempo limitado) y sandbox (entorno de prueba sin datos reales). Explica cuándo elegir cada uno.
- Describe cómo definir los límites del plan gratuito para que aporten valor real pero creen la necesidad natural de upgrade: qué limitar (cantidad, funcionalidad, usuarios, almacenamiento) y qué no limitar nunca (la experiencia core que demuestra el valor del producto).
- Explica el concepto de PQL (Product Qualified Lead): cómo definirlo mediante señales de comportamiento dentro del producto y cómo usarlo para que el equipo de ventas intervenga en el momento exacto.

**3. Onboarding PLG: del registro al valor en minutos**
- Explica por qué el onboarding es el momento más crítico en PLG y cómo reducir el Time to Value (TTV) al mínimo posible.
- Propón los principios de diseño del onboarding PLG: flujo de activación guiado, primer hit de valor en menos de 5 minutos, personalización según el caso de uso declarado, y checkpoints de progreso visibles.
- Describe cómo usar product tours, tooltips contextuales, empty states y plantillas para eliminar la fricción del onboarding.

**4. Viral loops y viralidad de producto**
- Explica los distintos tipos de loops virales en productos: viralidad colaborativa (el producto requiere invitar a otros), viralidad de exposición (el producto se muestra a terceros al usarlo), viralidad de Word of Mouth y viralidad de integración.
- Describe cómo diseñar un loop viral nativo en el producto: dónde insertar el momento de invitación, qué incentivo ofrecer y cómo medir el coeficiente de viralidad (K-factor).

**5. Expansión dentro del cliente (land and expand)**
- Explica la estrategia de land and expand en PLG: cómo un usuario individual se convierte en el caballo de Troya que lleva el producto a toda la organización.
- Describe los triggers de expansión natural: el usuario quiere compartir su trabajo, necesita colaborar con un colega o el límite del plan gratuito aparece en el momento de mayor valor.

**6. Métricas PLG**
- Define el dashboard de métricas PLG: activation rate, Time to Value, free-to-paid conversion rate, expansion MRR, viral coefficient, PQL conversion rate y DAU/MAU ratio.

**Preguntas iniciales:**
1. ¿Cuál es tu producto y cuál es el valor principal que entrega al usuario?
2. ¿Tienes ya usuarios gratuitos o empiezas a implementar PLG desde un modelo de ventas?
3. ¿Cuánto tarda hoy un nuevo usuario en experimentar el valor core del producto?
4. ¿Cuál es tu modelo de negocio y cómo se produce el upgrade?

Cuéntame tu situación y diseñamos la estrategia PLG adaptada a tu producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Diseñar e implementar una estrategia product-led growth para un producto digital',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de la jubilación y transición de talento sénior',
                'description'      => 'Diseña un proceso de gestión del conocimiento y transición para empleados clave con décadas de experiencia que se acercan a la jubilación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión del talento y gestión del conocimiento con más de quince años ayudando a empresas a gestionar la salida de empleados sénior de forma planificada, preservando el know-how crítico y garantizando la continuidad operativa.

Necesito diseñar un proceso de transición para empleados sénior que se acercan a la jubilación. Guíame a través del proceso completo:

**1. El riesgo real de la fuga de conocimiento sénior**
- Explica los tres tipos de conocimiento que se pierde cuando se jubila un empleado clave: conocimiento explícito (documentado), conocimiento tácito (no documentado, aprendido con la experiencia) y conocimiento relacional (quién es quién, cómo funcionan realmente las cosas).
- Describe los impactos operativos y estratégicos de una jubilación no planificada: pérdida de relaciones con clientes clave, ruptura de procesos que solo esa persona ejecutaba, degradación de la calidad técnica y caída de la moral del equipo.
- Proporciona una herramienta de análisis de riesgo por empleado: qué preguntas hacerse para identificar a los empleados cuya salida representa un riesgo crítico.

**2. Planificación con antelación**
- Explica cuánto tiempo antes de la jubilación prevista debe iniciarse el proceso de transición: los plazos varían según la criticidad del rol, la complejidad del conocimiento y la disponibilidad de sucesor.
- Describe cómo iniciar la conversación con el empleado sénior sobre su jubilación: cómo plantearla de forma que se sienta valorado y no prescindible, y cómo alinear sus expectativas con las de la empresa.
- Detalla cómo diseñar un plan de salida que respete los tiempos y los deseos del empleado mientras protege los intereses de la organización.

**3. Captura y transferencia del conocimiento**
- Proporciona una metodología de captura del conocimiento tácito: entrevistas estructuradas de knowledge harvest, shadowing inverso (el sucesor trabaja junto al sénior), documentación de decisiones y criterios, mapas de proceso y cartografía de stakeholders.
- Explica cómo estructurar las sesiones de transferencia: frecuencia, duración, formato (grabación de video, wikis, casos reales) y cómo medir que el traspaso está siendo efectivo.
- Describe cómo identificar el conocimiento que no puede transferirse y debe ser reconstruido: relaciones personales con clientes, intuición del mercado, autoridad informal.

**4. Desarrollo del sucesor**
- Explica cómo seleccionar al sucesor adecuado: no siempre es el más senior del equipo, sino el que combina mejor las competencias técnicas con las relacionales.
- Describe el programa de desarrollo acelerado del sucesor: rotaciones, mentoring, exposición gradual a las responsabilidades del sénior y momentos de prueba supervisados.
- Detalla cómo gestionar la dinámica entre el empleado sénior saliente y el sucesor para evitar rivalidades, dependencias excesivas o resistencias al traspaso.

**5. Modelos de transición graduales**
- Describe las opciones de salida gradual: reducción progresiva de jornada, figura de consultor o asesor externo tras la jubilación, mentoring retribuido durante el período de transición.
- Explica los aspectos legales y laborales de las jubilaciones parciales y los contratos de consultoría post-jubilación en España.

**6. Comunicación interna**
- Proporciona guías para comunicar la jubilación al equipo y a los clientes de forma que transmita continuidad y no genere incertidumbre.

**Preguntas iniciales:**
1. ¿En qué área o función trabaja el empleado sénior y cuánto tiempo lleva en la empresa?
2. ¿Cuánto tiempo hay hasta la jubilación prevista?
3. ¿Existe ya un sucesor identificado o hay que buscarlo?
4. ¿Cuál es el conocimiento más crítico que está en riesgo?

Dame la información y diseñamos el plan de transición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar un plan de transición y transferencia de conocimiento para la jubilación de un empleado clave',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Crédito fiscal por I+D+i en España',
                'description'      => 'Maximiza las deducciones del 25-42% en el Impuesto de Sociedades por actividades de innovación: qué activa el beneficio, cómo documentarlo y cómo justificarlo ante Hacienda.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor fiscal especializado en innovación empresarial y en la aplicación del régimen de deducciones por I+D+i en España con más de doce años ayudando a empresas tecnológicas, industriales y de servicios a identificar y documentar sus actividades innovadoras para maximizar los beneficios fiscales.

Necesito entender y aplicar las deducciones fiscales por I+D+i en mi empresa. Guíame a través del proceso completo:

**1. Marco legal y tipos de actividad deducible**
- Explica el artículo 35 de la Ley del Impuesto de Sociedades: las tres categorías de actividad con sus porcentajes de deducción actuales (I+D: 25% base, 42% exceso sobre la media de los dos años anteriores; IT: 12%) y los gastos adicionales de personal investigador (17% adicional) y patentes (8% adicional).
- Describe en términos prácticos qué diferencia una actividad de Investigación (I), de Desarrollo (D) y de Innovación Tecnológica (IT) según los criterios de la OCDE y de la Agencia Tributaria.
- Proporciona ejemplos concretos de proyectos que califican como I+D y proyectos que califican como IT, y los que definitivamente no califican (mejoras operativas rutinarias, actualizaciones de software comercial sin novedad técnica).

**2. Identificación de actividades en tu empresa**
- Proporciona un cuestionario de autoevaluación para identificar si las actividades de mi empresa pueden calificar como I+D+i: ¿Existe incertidumbre técnica que hay que resolver? ¿Se genera conocimiento nuevo? ¿Hay avance respecto al estado del arte?
- Explica los sectores donde es más frecuente la aplicación: tecnología, farmacéutico, automoción, agroalimentario, manufactura avanzada y servicios digitales.
- Describe las actividades de software que califican como I+D+i: desarrollo de nuevos algoritmos, inteligencia artificial y machine learning, procesamiento de lenguaje natural, sistemas de visión artificial, nuevas arquitecturas de sistemas.

**3. Gastos computables**
- Detalla qué gastos son computables en la base de deducción: personal dedicado a I+D+i (incluyendo el tiempo del personal directivo involucrado), amortización de equipos e instalaciones usados en los proyectos, materiales consumidos, subcontratación de I+D a terceros (máximo 65% de la base) y patentes adquiridas.
- Explica cómo imputar correctamente el tiempo del personal: sistema de registro horario, criterios de asignación por proyecto y qué porcentaje de dedicación es razonable y defendible.

**4. Documentación y justificación**
- Describe la documentación que debe prepararse para justificar la deducción ante Hacienda: memoria técnica del proyecto, fichas de personal con horas imputadas, facturas de gastos asociados, evidencias de la novedad técnica y resultados del proyecto.
- Explica los dos mecanismos de seguridad jurídica disponibles: el Informe Motivado del Ministerio de Ciencia (vinculante para Hacienda) y los acuerdos previos de valoración (APV) con la Agencia Tributaria.
- Detalla cuándo vale la pena solicitar el Informe Motivado, qué organismos lo emiten (CDTI para I+D, ENAC-acreditadas para IT) y cuánto tiempo tarda el proceso.

**5. Aplicación y monetización de la deducción**
- Explica cómo aplicar la deducción en la declaración del Impuesto de Sociedades: límites de aplicación (25% de la cuota íntegra para IT, 50% para I+D), plazo de aplicación (18 años) y posibilidad de monetización (devolución en efectivo del 80% de la deducción si no hay cuota suficiente, con un límite de 3M€ anuales).
- Describe la opción de aplicar la deducción con descuento del 20% sobre el importe teórico a cambio de cobro inmediato en efectivo.

**Preguntas iniciales:**
1. ¿A qué sector pertenece tu empresa y cuál es su actividad principal?
2. ¿Qué proyectos o desarrollos has realizado en los últimos ejercicios que puedan ser innovadores?
3. ¿Tienes personal técnico en plantilla dedicado a estos proyectos?
4. ¿Has aplicado alguna vez deducciones por I+D+i anteriormente?

Dame los detalles y evaluamos el potencial de deducción de tu empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Identificar, documentar y aplicar las deducciones fiscales por I+D+i en el Impuesto de Sociedades',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de distribución exclusiva',
                'description'      => 'Negocia y redacta contratos de distribución exclusiva con ventajas reales, riesgos identificados y cláusulas de salida que protejan tu posición.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantilista especializado en contratos de distribución y agencia comercial con más de quince años asesorando tanto a fabricantes como a distribuidores en la negociación y redacción de contratos de distribución exclusiva en España y mercados internacionales.

Necesito negociar o redactar un contrato de distribución exclusiva. Guíame a través de todos los aspectos clave:

**1. El contrato de distribución exclusiva: naturaleza y tipos**
- Explica qué es un contrato de distribución exclusiva y en qué se diferencia de un contrato de agencia comercial, de franquicia y de concesión: las diferencias jurídicas son relevantes porque determinan los derechos y obligaciones de cada parte.
- Describe los distintos tipos de exclusividad: exclusividad de territorio (solo el distribuidor puede vender en esa zona), exclusividad de cliente (solo el distribuidor puede vender a ese tipo de cliente) y exclusividad de producto (el distribuidor no puede comercializar productos competidores).
- Explica el marco legal aplicable en España: ausencia de ley específica de distribución, aplicación del Código Civil y del Código de Comercio, jurisprudencia del Tribunal Supremo y normativa de competencia de la UE (Reglamento de Exención por Categorías 2022/720).

**2. Cláusulas esenciales desde la perspectiva del fabricante**
- Detalla las cláusulas que protegen al fabricante: objetivos mínimos de ventas vinculantes, derecho de auditoría de las ventas del distribuidor, restricciones a la venta activa fuera del territorio, obligaciones de reporte de mercado, prohibición de subcontratación sin autorización y limitaciones al stock mínimo.
- Explica cómo estructurar los objetivos de ventas mínimos para que sean exigibles y no sean declarados abusivos por los tribunales.
- Describe las cláusulas de resolución por incumplimiento de objetivos y los períodos de gracia razonables.

**3. Cláusulas esenciales desde la perspectiva del distribuidor**
- Detalla las cláusulas que protegen al distribuidor: garantía de exclusividad con consecuencias contractuales si el fabricante la viola, derecho de first refusal en caso de cambio de distribuidor, compensación por inversiones realizadas en el territorio, indemnización por clientela al finalizar el contrato y plazo mínimo de duración.
- Explica el derecho a indemnización por clientela del distribuidor: cuándo se aplica en España (por analogía con el contrato de agencia), cómo calcularlo y cómo pactarlo expresamente para evitar litigios.
- Describe las garantías que debe ofrecer el fabricante: suministro garantizado, precios estables durante el contrato, soporte técnico y de marketing.

**4. Cláusulas de terminación y salida**
- Explica las cláusulas de duración: contratos de duración determinada vs. indefinida, preaviso mínimo para la no renovación y consecuencias de la terminación anticipada injustificada.
- Detalla cómo regular el período post-contractual: obligaciones de confidencialidad, devolución de stocks, transferencia de la cartera de clientes y prohibición de competencia post-contractual (máximo dos años según normativa europea).
- Describe las cláusulas de resolución de disputas: mediación previa, arbitraje comercial o jurisdicción ordinaria, y el foro competente en contratos internacionales.

**5. Aspectos de derecho de la competencia**
- Explica qué cláusulas pueden ser nulas por infringir el derecho de la competencia de la UE: prohibición absoluta de ventas pasivas, fijación de precios de reventa y restricciones de territorio en ventas online.
- Detalla los umbrales del Reglamento de Exención por Categorías 2022/720: cuota de mercado inferior al 30% para fabricante y distribuidor.

**Preguntas iniciales:**
1. ¿Eres el fabricante o el distribuidor en este contrato?
2. ¿Cuál es el producto y el territorio de distribución?
3. ¿Es un contrato nuevo o una renovación de uno existente?
4. ¿Hay elementos del contrato que ya estén negociados o que sean innegociables?

Dame los detalles y te ayudo a negociar y redactar el contrato que proteja mejor tu posición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Negociar y redactar un contrato de distribución exclusiva con cláusulas de protección efectivas',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de feedback de producto desde CS',
                'description'      => 'Convierte los tickets de soporte en insights accionables para el equipo de producto: sistema de captura, priorización y comunicación del feedback.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con experiencia construyendo sistemas de feedback de producto en empresas SaaS de rápido crecimiento. Has conectado los equipos de CS y Producto de forma que los datos del soporte se convierten en una fuente de decisiones de desarrollo, no en ruido.

Necesito construir un sistema que convierta los tickets de soporte en insights de producto accionables. Guíame a través del proceso:

**1. El problema del feedback sin sistema**
- Explica por qué la mayoría de las empresas desperdician el feedback más valioso que tienen: el que llega a través del soporte. Sin sistema, los agentes lo resuelven y lo olvidan, el producto nunca lo ve y los mismos problemas se repiten.
- Describe los tres tipos de señal que llegan al soporte y su valor para producto: bugs (señal de calidad), feature requests (señal de necesidad) y friction points (señal de UX mejorable).
- Explica por qué el equipo de producto suele desconfiar del feedback de CS: sesgo de selección (solo los que tienen problemas contactan), imprecisión técnica en la descripción y falta de cuantificación del impacto.

**2. Sistema de captura y etiquetado**
- Proporciona una taxonomía de etiquetas para clasificar el feedback en los tickets: categoría del feedback (bug, feature request, UX issue, pricing, documentación), área del producto afectada, segmento del cliente (tamaño, plan, industria) y nivel de urgencia declarada por el cliente.
- Explica cómo entrenar al equipo de CS para capturar el contexto completo del feedback: qué está intentando hacer el usuario, qué esperaba que pasara, qué pasó en realidad y cuál es el impacto en su trabajo.
- Describe qué herramientas usar para gestionar el feedback: desde soluciones simples (Notion, Airtable) hasta plataformas especializadas (Productboard, Canny, Uservoice).

**3. Priorización y cuantificación del impacto**
- Explica cómo agregar el feedback individual en tendencias: frecuencia del problema por segmento, ARR en riesgo asociado a cada issue, impacto en la satisfacción (correlación con CSAT y churn) y coste de atención del problema en soporte.
- Proporciona un framework de priorización del feedback para presentar al equipo de producto: frecuencia × impacto × segmento estratégico.
- Describe cómo separar el ruido (un cliente muy ruidoso que pide algo muy específico) de la señal real (muchos clientes callados que tienen el mismo problema).

**4. Comunicación entre CS y Producto**
- Propón un proceso de sincronización entre CS y Producto: cadencia de reuniones, formato de presentación del feedback, cómo hacer las peticiones de forma que producto las tome en serio y cómo gestionar las expectativas cuando el feedback no se prioriza.
- Explica cómo estructurar un informe mensual de feedback de CS para el equipo de producto: datos cuantitativos, citas de clientes, análisis de impacto y recomendaciones priorizadas.
- Describe cómo cerrar el loop con el equipo de CS cuando producto implementa un cambio derivado del feedback: es clave para mantener la motivación del equipo de soporte.

**5. Cierre del loop con el cliente**
- Explica cómo gestionar las expectativas del cliente que ha reportado un problema o pedido una funcionalidad: cómo comunicar que se ha registrado, cómo actualizar cuando se prioriza y cómo notificar cuando se lanza.
- Describe el impacto positivo del loop cerrado en la retención: el cliente que ve que su feedback se ha implementado tiene una lealtad significativamente mayor.

**Preguntas iniciales:**
1. ¿Qué herramienta de soporte usas actualmente (Zendesk, Intercom, Freshdesk)?
2. ¿Cuántos tickets recibes al mes y cuántos agentes tiene tu equipo?
3. ¿Hay algún proceso de feedback hacia producto actualmente, aunque sea informal?
4. ¿Qué relación tiene hoy el equipo de CS con el equipo de Producto?

Dame los detalles y diseñamos el sistema adecuado para tu escala y herramientas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir un sistema para convertir el feedback de soporte en insights accionables para el equipo de producto',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Retención de clientes a largo plazo como freelance',
                'description'      => 'Las acciones concretas que hacen que tus clientes sigan eligiéndote año tras año: valor continuo, comunicación proactiva y posicionamiento como socio estratégico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en desarrollo de negocio para freelances y profesionales independientes con más de diez años ayudando a freelances a transformar relaciones transaccionales en asociaciones estratégicas a largo plazo que generan ingresos estables y predecibles.

Necesito mejorar mi retención de clientes a largo plazo como freelance. Ayúdame a construir un sistema de relaciones que haga que mis clientes me elijan año tras año:

**1. Por qué se van los clientes (aunque estén satisfechos)**
- Explica los motivos reales por los que un cliente satisfecho deja de contratar a un freelance: no por calidad del trabajo sino por falta de visibilidad, aparición de una alternativa más conveniente, cambio de interlocutor interno, sensación de que la relación es solo transaccional o simplemente olvido.
- Describe el ciclo de vida típico de un cliente freelance y en qué momentos el riesgo de pérdida es mayor: después de entregar un proyecto grande, cuando hay cambio de responsable en la empresa cliente, cuando el cliente crece y siente que necesita una agencia.
- Explica la diferencia entre un freelance que el cliente contrata cuando tiene un problema y un freelance que el cliente percibe como parte de su equipo extendido.

**2. Posicionamiento como socio estratégico**
- Describe cómo pasar de ser un proveedor de servicios a ser un asesor de confianza: qué comportamientos, conversaciones y entregas construyen esa percepción a lo largo del tiempo.
- Explica cómo expandir el scope natural de la relación: identificar problemas adyacentes que puedes resolver, proponer mejoras proactivamente y anticipar necesidades antes de que el cliente las exprese.
- Detalla la importancia del conocimiento del negocio del cliente: cuánto debes saber sobre su sector, sus competidores, sus objetivos anuales y sus problemas internos para ser percibido como estratégico.

**3. Sistema de comunicación proactiva**
- Proporciona un calendario de contacto proactivo con el cliente: check-ins periódicos aunque no haya proyecto activo, felicitaciones de hitos relevantes, envío de información útil del sector, y conversaciones de business review anuales.
- Explica cómo estructurar una business review anual con tu cliente: qué has conseguido juntos ese año, qué oportunidades ves para el próximo y cómo puedes ayudarle a conseguirlo.
- Describe cómo usar las newsletters, los artículos de blog o los informes de tendencias como herramientas de retención: te mantienen en la mente del cliente sin ser intrusivo.

**4. Gestión de la percepción de valor**
- Explica por qué los clientes olvidan el valor que has entregado si no se lo recuerdas y cómo hacer informes de impacto sin sonar egocéntrico.
- Detalla cómo documentar y comunicar los resultados de tu trabajo en términos de negocio: no "diseñé la web" sino "la nueva web aumentó la conversión un 18%".
- Describe cómo manejar el momento de la renovación o la nueva propuesta para que no sea una conversación de precio sino una conversación de valor.

**5. Programa de referidos y expansión de la relación**
- Explica cuándo y cómo pedir referencias a clientes satisfechos sin que resulte incómodo.
- Describe cómo usar la red del cliente para expandir tu cartera: quién más en su empresa o en su red podría beneficiarse de tus servicios.

**Preguntas iniciales:**
1. ¿En qué tipo de servicio freelance trabajas y cuál es el ticket medio de tus proyectos?
2. ¿Cuánto tiempo duran de media tus relaciones con los clientes actuales?
3. ¿Cuál es el principal motivo por el que crees que te han dejado de contratar clientes anteriores?
4. ¿Tienes algún sistema de seguimiento de clientes o lo gestionas de forma ad hoc?

Cuéntame tu situación y diseñamos el sistema de retención adecuado para tu tipo de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un sistema de retención de clientes a largo plazo como profesional independiente',
                'vote_score'       => 47,
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
