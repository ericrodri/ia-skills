<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills124Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing en la nube: personalización y velocidad a escala',
                'description'      => 'Aprovecha AWS, GCP o Azure para personalizar campañas a escala, acelerar páginas con CDN y extraer insights de audiencia de millones de eventos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor senior de cloud marketing con experiencia en grandes plataformas de datos de audiencia. Voy a darte el contexto de mi empresa y necesito que me ayudes a diseñar una estrategia de marketing apoyada en infraestructura cloud.

Contexto de mi empresa:
- Sector: [indica tu sector]
- Volumen mensual de usuarios únicos: [número aproximado]
- Plataforma cloud principal: [AWS / GCP / Azure / multi-cloud]
- Servicios de datos actuales: [CDP, data warehouse, lake, etc.]
- Principales canales de marketing: [email, paid, SEO, redes sociales, etc.]
- Reto principal: [velocidad de campaña / personalización / análisis de audiencia / coste]

Con este contexto, por favor ayúdame en los siguientes bloques:

**1. Arquitectura de datos para marketing**
Diseña la arquitectura de datos mínima viable que necesito para hacer marketing personalizado a escala. Incluye qué servicios cloud concretos usar para ingestión de eventos (clics, compras, sesiones), almacenamiento en tiempo real versus batch, y las capas de activación hacia los canales. Explica el razonamiento detrás de cada elección de servicio.

**2. Personalización en tiempo real**
Describe cómo implementar personalización dinámica en la web y en email usando los datos del cloud. ¿Qué latencia es realista? ¿Qué segmentos mínimos necesito para que la personalización tenga impacto estadístico? Dame ejemplos de reglas de segmentación que puedo implementar en la primera semana.

**3. Aceleración de campañas con CDN**
Explica cómo configurar la entrega de assets de campaña (imágenes, landing pages, vídeos) a través de una CDN para que la velocidad de carga no lastre el Quality Score ni la tasa de conversión. Incluye reglas de caché recomendadas por tipo de activo y qué métricas debo medir antes y después.

**4. Análisis de audiencia a gran escala**
Dame una consulta SQL de ejemplo (adaptada a BigQuery, Redshift o Synapse según mi plataforma) que calcule los segmentos de audiencia de mayor valor: clientes con compra reciente pero baja frecuencia, usuarios activos en móvil pero nunca en desktop, y cualquier otro segmento que el análisis de mis datos sugiera. Explica qué acción de marketing lanzarías para cada segmento.

**5. Optimización del gasto de marketing con datos cloud**
¿Cómo puedo conectar los datos de coste de mis campañas (Google Ads, Meta, etc.) con los datos de conversión en mi data warehouse para calcular el ROAS real por canal y por segmento? Diseña el flujo de datos y el dashboard mínimo que necesito para tomar decisiones de presupuesto cada semana.

**6. Hoja de ruta en 90 días**
Devuelve un plan de 90 días dividido en sprints de dos semanas. Para cada sprint indica: el objetivo, las tareas técnicas del equipo de datos, las tareas de marketing, el entregable y la métrica que confirma el éxito.

Sé específico, evita generalidades. Si necesitas más información para ser más preciso, pregúntame antes de responder.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar una estrategia de marketing respaldada por infraestructura cloud con personalización a escala y análisis de audiencia.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Kubernetes en producción: operaciones del día 2',
                'description'      => 'Dominamos la teoría de Kubernetes, pero el día 2 —scaling, secrets, health checks, rollbacks— es donde los equipos se atascan. Este prompt cubre las operaciones reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un SRE senior con cinco o más años operando clústeres de Kubernetes en producción en entornos de alta disponibilidad. Necesito tu ayuda con las operaciones del día 2: todo lo que ocurre después del primer despliegue exitoso.

Mi contexto:
- Proveedor del clúster: [EKS / GKE / AKS / on-premises / otro]
- Número aproximado de nodos: [número]
- Carga de trabajo principal: [microservicios / batch jobs / ML workloads / mixto]
- Problema actual más urgente: [describe el problema o el área donde quieres empezar]
- Nivel del equipo: [junior / mixto / senior]

Ayúdame con los siguientes bloques. Adapta las respuestas a mi entorno específico:

**1. Estrategia de escalado**
Explica la diferencia práctica entre HPA (Horizontal Pod Autoscaler), VPA (Vertical Pod Autoscaler) y Cluster Autoscaler, y cuándo usar cada uno. Dame los manifiestos YAML de ejemplo para HPA basado en CPU y en métricas personalizadas (via KEDA o Prometheus Adapter). ¿Qué pasa cuando escalan simultáneamente y cómo evitar tormentas de escalado?

**2. Health checks de producción**
Diseña una estrategia de liveness, readiness y startup probes para una aplicación web típica con base de datos. Explica los valores de initialDelaySeconds, periodSeconds y failureThreshold recomendados y las consecuencias de configurarlos mal. Incluye el patrón para aplicaciones que tardan en arrancar (Java, por ejemplo).

**3. Gestión de secrets**
Compara las tres aproximaciones principales: Kubernetes Secrets nativos (base64), External Secrets Operator con AWS Secrets Manager/Vault, y CSI Secrets Store Driver. Para mi entorno cloud, ¿cuál recomiendas y por qué? Dame el manifiesto o la configuración mínima para implementarlo esta semana.

**4. Rollouts y rollbacks seguros**
Describe las estrategias de despliegue disponibles en Kubernetes (RollingUpdate, Recreate, Blue/Green con Services, Canary con Ingress) y el flujo de comandos exacto para hacer un rollback de emergencia cuando una release rompe producción. ¿Qué métricas debo monitorizar durante los primeros cinco minutos de un despliegue?

**5. Observabilidad mínima viable**
¿Qué stack de observabilidad recomiendas para un equipo que empieza? Describe cómo integrar Prometheus, Grafana y Loki (o el equivalente en mi proveedor cloud). Dame los tres dashboards más importantes que debo tener el primer día y las alertas que no pueden faltar.

**6. Las tres operaciones del día 2 que nadie te enseña**
Explica tres situaciones reales que todo equipo encuentra tarde o temprano: (a) un nodo que no drena porque tiene pods con PodDisruptionBudget mal configurado, (b) un namespace que no se borra porque tiene finalizers atascados, y (c) el comportamiento de los Jobs cuando el cluster se queda sin recursos. Para cada una: síntomas, diagnóstico y solución.

Incluye comandos kubectl exactos donde sea relevante. Sé directo y evita los errores comunes de documentación genérica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Resolver los retos operativos de Kubernetes en producción: scaling, secrets, health checks y rollbacks seguros.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de producto en sistemas distribuidos',
                'description'      => 'Cómo diseñar interfaces y flujos cuando el backend es distribuido: estados de error, latencia variable, consistencia eventual y escenarios offline-first.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de producto senior especializado en aplicaciones que dependen de sistemas distribuidos. Quiero mejorar el diseño de mi producto para que los usuarios no se vean afectados por las complejidades técnicas inherentes a la arquitectura distribuida.

Mi contexto:
- Tipo de producto: [app web / móvil / ambas]
- Usuarios principales: [consumidores / profesionales / equipos empresariales]
- El problema técnico más frecuente: [latencia alta / errores intermitentes / datos desincronizados / otro]
- Capacidad offline esperada: [ninguna / lectura offline / escritura offline completa]
- Equipo: [¿hay ingenieros backend que puedo consultar directamente?]

Con este contexto, dame orientación concreta en cada bloque:

**1. Diseño para la latencia**
El backend puede tardar entre 100 ms y 8 segundos en responder dependiendo de la carga. ¿Cómo diseño la interfaz para que el usuario no perciba esperas como errores? Explica los patrones de skeleton screens, optimistic updates y progressive disclosure aplicados a mi caso. Dame tres ejemplos de cómo otras apps conocidas resuelven este problema.

**2. Estados de error que no frustren**
Diseña una jerarquía de estados de error para mi producto: error de red, error del servidor (5xx), error de validación (4xx), timeout y degradación parcial del servicio. Para cada estado: qué mensaje ve el usuario, qué acción puede tomar, cuánto tiempo se muestra y cuándo se recupera automáticamente. Evita los mensajes de error técnicos y los que culpan al usuario.

**3. Consistencia eventual en la UI**
Cuando el usuario guarda un dato y puede tardarse un par de segundos en propagarse a todos los nodos, ¿cómo evito que el usuario piense que su acción no se registró? Explica el patrón de confirmación local optimista con reconciliación posterior. ¿Cómo muestro la diferencia entre "guardado localmente" y "sincronizado con el servidor"?

**4. Diseño offline-first**
Si mi producto necesita funcionar sin conexión (al menos en modo lectura), describe el flujo de experiencia completo: qué ve el usuario cuando pierde la conexión, qué puede hacer, qué queda bloqueado y cómo se sincroniza cuando vuelve la conexión. Incluye los patrones de UI para cola de acciones pendientes y conflictos de sincronización.

**5. Comunicación con el equipo de ingeniería**
Como diseñador, ¿cómo debo documentar los estados de error y los flujos de degradación para que los ingenieros los implementen correctamente? Dame una plantilla de especificación de estados para un componente de formulario con guardado asíncrono.

**6. Testing de estas situaciones**
¿Cómo puedo probar yo mismo los escenarios de latencia y error sin necesitar que el backend los simule? Describe las herramientas de browser DevTools y los trucos de throttling de red que me permiten validar mi diseño ante condiciones adversas.

Responde con ejemplos concretos, no principios abstractos. Si hay decisiones que dependen de mis respuestas, pregúntame.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar interfaces resilientes que manejen bien la latencia, los errores y la consistencia eventual en sistemas distribuidos.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de soluciones cloud al C-suite y al equipo técnico',
                'description'      => 'El proceso comercial de vender AWS, Azure, GCP o soluciones cloud: cómo alinear el mensaje técnico con el ejecutivo y cerrar con el equipo de IT.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas enterprise con diez años vendiendo soluciones de cloud computing a organizaciones medianas y grandes. Quiero mejorar mi proceso de venta de soluciones cloud y necesito tu ayuda para estructurar el discurso, gestionar los interlocutores y cerrar deals complejos.

Mi situación:
- Solución que vendo: [migración a cloud / plataforma SaaS sobre cloud / servicios gestionados de AWS-GCP-Azure / otro]
- Ticket medio de la oportunidad: [rango de € o $]
- Ciclo de venta habitual: [semanas / meses]
- Interlocutores típicos: [CTO / CIO / CFO / equipo técnico / compras / legal]
- Principal objeción que recibo: [coste / seguridad / complejidad de migración / lock-in / otro]

Ayúdame en los siguientes bloques:

**1. Mapa de stakeholders**
Describe los roles típicos en una oportunidad de cloud enterprise y el mensaje que resuena con cada uno: CTO (arquitectura y riesgo técnico), CIO (gobernanza y estrategia), CFO (TCO y ROI), equipo de operaciones (trabajo que les quitamos o añadimos), seguridad (compliance y surface de ataque) y compras (condiciones contractuales). Dame el elevator pitch de dos frases para cada perfil.

**2. Discovery técnico-comercial**
¿Qué preguntas debo hacer en la primera reunión para entender el estado técnico actual del cliente (infraestructura on-prem, deuda técnica, licensing existente) y conectarlo con el dolor de negocio? Dame una lista de diez preguntas de discovery ordenadas de menor a mayor sensibilidad.

**3. Business case que convence al CFO**
Crea un esquema de Business Case para una propuesta de migración o adopción cloud. Debe incluir: costes actuales (servidor, licencias, personal, incidentes), costes proyectados con cloud (compute, storage, soporte), ahorros operativos, beneficios de velocidad de lanzamiento y riesgos no monetizados que cloud reduce. ¿Cómo presento el payback period de forma visual?

**4. Manejo de la objeción de lock-in**
El cliente dice: "No queremos depender de un solo proveedor". Dame tres respuestas distintas según el perfil del interlocutor: la respuesta técnica para el arquitecto, la respuesta estratégica para el CTO y la respuesta contractual para el abogado o compras. Incluye datos o ejemplos reales que puedas citar.

**5. Gestión del proceso técnico de evaluación (PoC / RFP)**
Cuando el cliente pide una prueba de concepto o un proceso de RFP, ¿cómo puedo maximizar mis posibilidades sin perder semanas de ingeniería? Dame el proceso de calificación de la PoC, los criterios de éxito que debo negociar antes de empezar y las preguntas que revelan si el proceso está amañado para otro vendor.

**6. Cierre y negociación final**
¿Cuál es la táctica de cierre más efectiva cuando el deal lleva meses en curso y el cliente dice "lo vemos en el próximo trimestre"? Dame tres aproximaciones concretas para generar urgencia sin quemar la relación. ¿Qué descuentos son razonables ceder y cuáles debes defender?

Dame respuestas accionables para mi semana próxima, no teoría de ventas genérica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estructurar el proceso de venta de soluciones cloud desde el discovery hasta el cierre, gestionando múltiples interlocutores técnicos y ejecutivos.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Decisiones de producto cloud-native: multi-tenancy y SLAs',
                'description'      => 'Las decisiones de producto específicas de los productos que viven en la nube: multi-tenancy, compliance, SLAs, disaster recovery y cómo convertirlos en features que los clientes pagan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager senior con experiencia en productos SaaS B2B cloud-native. Necesito tu ayuda para tomar decisiones de producto en las dimensiones técnicas que son propias de los productos que viven en la nube.

Mi contexto:
- Tipo de producto: [SaaS B2B / plataforma / infraestructura como servicio / otro]
- Segmento de clientes: [SMB / mid-market / enterprise / mixto]
- Estado actual: [MVP / product-market fit / escalando / maduro]
- La decisión más urgente que tengo ahora mismo: [describe brevemente]
- Recursos de ingeniería disponibles: [equipo pequeño / mediano / grande]

Quiero tu ayuda en los siguientes bloques:

**1. Arquitectura multi-tenant: decisión de producto**
Explica las tres variantes principales de multi-tenancy (instancia compartida, esquema de base de datos por tenant, instancia por tenant) desde el punto de vista del producto, no solo del técnico. ¿Cómo afecta cada una al pricing, al sales process enterprise, al aislamiento de datos y a la capacidad de personalización? ¿Para qué etapa de la empresa es óptima cada opción?

**2. Compliance como diferenciador**
SOC 2, ISO 27001, GDPR, HIPAA: muchos clientes enterprise preguntan por ellos en el proceso de compra. ¿En qué orden debo obtenerlos según mi segmento de mercado? ¿Qué puedo hacer antes de tener las certificaciones para desbloquear deals sin perder meses en auditorías? ¿Cómo transformo el compliance en una feature de producto visible para el cliente?

**3. SLAs que venden y que puedes cumplir**
¿Cómo diseño una política de SLAs creíble para mi producto? Dame la estructura: uptime garantizado, ventanas de mantenimiento, definición de incidente, tiempo de respuesta de soporte y cómo calcular el crédito de servicio. ¿Qué SLA no debo prometer si mi arquitectura actual no lo soporta? ¿Cómo escalo los SLAs por plan de pricing?

**4. Disaster Recovery y Business Continuity como feature**
Los clientes enterprise preguntan por RPO (Recovery Point Objective) y RTO (Recovery Time Objective). ¿Cómo diseño la estrategia de DR de mi producto y cómo la presento en el sales process? Dame los valores de RPO y RTO típicos para cada tier de producto (basic, professional, enterprise) y la infraestructura que los respalda.

**5. Data residency y soberanía de datos**
Cada vez más clientes europeos y de sectores regulados preguntan dónde viven sus datos. ¿Cuándo es el momento de invertir en regiones cloud adicionales para data residency? ¿Qué implica arquitectónicamente y cuánto podría representar en uplift de precio? ¿Hay soluciones intermedias antes de la multi-región completa?

**6. Priorización: ¿cuándo es el momento correcto?**
Dame un framework para decidir cuándo priorizar las inversiones en multi-tenancy avanzado, compliance, SLAs enterprise y DR frente a las funcionalidades que el cliente final ve y paga. ¿Qué señales del mercado me dicen que he llegado al punto de inflexión donde no invertir empieza a costarme deals?

Quiero respuestas basadas en decisiones reales de producto, no en arquitectura técnica abstracta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Tomar decisiones de producto cloud-native: multi-tenancy, compliance, SLAs y disaster recovery como palancas de crecimiento.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos de SRE, DevOps y Sysadmins',
                'description'      => 'Las particularidades de liderar a los profesionales que mantienen la infraestructura encendida: on-call, burnout, métricas de rendimiento y desarrollo de carrera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Engineering Manager senior con experiencia liderando equipos de SRE, DevOps y operaciones de infraestructura. Necesito tu ayuda para gestionar mejor a este perfil de profesionales, que tiene dinámicas muy distintas a los equipos de desarrollo de producto.

Mi contexto:
- Tamaño del equipo: [número de personas]
- Composición: [SREs / DevOps engineers / Sysadmins / mixto]
- El problema más urgente: [burnout por on-call / contratación / rendimiento / retención / cultura / otro]
- Madurez del equipo: [recién formado / consolidado con problemas / equipo veterano]
- Contexto de empresa: [startup / scale-up / corporación]

Ayúdame a resolver los siguientes bloques:

**1. On-call sostenible**
El on-call es la fuente número uno de burnout en equipos de operaciones. Dame un framework para diseñar una rotación de guardia sostenible: número mínimo de personas para no sobrecargar a nadie, compensación justa (¿pay o tiempo libre?), definición de lo que es una alerta accionable versus ruido, y cómo medir y reducir la carga de on-call semana a semana. ¿Qué métricas de on-call debo reportar a dirección?

**2. Métricas de rendimiento para operaciones**
No puedo medir a mi equipo de SRE con velocidad de features. ¿Qué métricas de rendimiento son justas y útiles para este equipo? Explica el uso de las cuatro métricas DORA (deployment frequency, lead time, MTTR, change failure rate) para operaciones, más las que añadirías para SLOs y reducción de toil. ¿Cómo las presento en las performance reviews?

**3. Reducción del toil como objetivo de equipo**
El toil —trabajo operativo repetitivo que no escala— destruye la motivación y el tiempo. ¿Cómo ayudo a mi equipo a identificar el toil, cuantificarlo y priorizarlo para automatización? Dame una metodología simple para que el equipo mida el porcentaje de tiempo de toil cada sprint y lo reduzca progresivamente. ¿Qué porcentaje de toil es aceptable?

**4. Desarrollo de carrera en operaciones**
¿Qué path de carrera ofrezco a un SRE o DevOps engineer que quiere crecer? Muchos se sienten atrapados entre "seguir siendo técnico" y "convertirse en manager". Diseña una ladder de ingeniería para operaciones con tres niveles (junior, senior, staff) y describe las competencias clave de cada uno que van más allá de las certificaciones cloud.

**5. Cultura de postmortem sin culpas**
Los postmortems son la herramienta más poderosa de mejora en operaciones, pero muchos equipos los hacen mal o no los hacen. Dame una plantilla de postmortem sin culpas y el proceso para ejecutarlo en menos de 60 minutos. ¿Cómo consigo que el equipo los vea como aprendizaje y no como juicio?

**6. Retención del talento en infraestructura**
Los buenos SREs y DevOps son difíciles de encontrar y fáciles de perder ante ofertas del mercado. ¿Qué palancas de retención son más efectivas para este perfil más allá del salario? ¿Cómo creo un entorno en el que quieran quedarse incluso cuando reciben ofertas mejores?

Quiero consejos específicos para la realidad de los equipos de operaciones, no gestión genérica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Liderar equipos de SRE, DevOps y operaciones con sostenibilidad: on-call, métricas justas y desarrollo de carrera técnico.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'FinOps: reducir la factura cloud un 30-50%',
                'description'      => 'Gestión del gasto en AWS, GCP o Azure: identifica el despilfarro, optimiza las instancias, negocia los contratos y aplica la cultura FinOps en el equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un practicante certificado de FinOps con experiencia ayudando a empresas a reducir su gasto cloud entre un 30% y un 50% sin degradar el rendimiento ni incumplir los SLAs. Necesito tu ayuda para analizar y optimizar nuestra factura cloud.

Mi contexto:
- Proveedor cloud principal: [AWS / GCP / Azure / multi-cloud]
- Gasto mensual aproximado: [rango de €/$]
- Los servicios con mayor coste: [EC2/Compute, S3/Storage, RDS/Database, transferencia de datos, otro]
- Nivel de madurez FinOps actual: [no hacemos nada / tenemos Cost Explorer / tenemos un equipo FinOps / otro]
- Compromiso existente: [ninguno / Reserved Instances / Savings Plans / CUD / EDP]

Ayúdame en los siguientes bloques:

**1. Diagnóstico rápido del despilfarro**
Dame una checklist de las diez fuentes de despilfarro más comunes en [mi proveedor cloud] ordenadas por impacto potencial típico. Para cada una: cómo la detecto con las herramientas nativas del proveedor (Cost Explorer, Billing, BigQuery Billing Export, etc.) y el ahorro estimado que puedo esperar. ¿Cuáles puedo resolver esta semana sin riesgo?

**2. Rightsizing de instancias de cómputo**
Explica el proceso de rightsizing: cómo identifico instancias sobredimensionadas usando métricas de CPU, memoria y red durante las últimas cuatro semanas, cuál es el umbral de utilización que indica sobredimensionamiento y cómo hago la transición sin afectar al rendimiento. ¿Qué herramientas (AWS Compute Optimizer, GCP Recommender, Azure Advisor) me dan las mejores recomendaciones?

**3. Reserved Instances, Savings Plans y compromisos**
Explica la diferencia entre Reserved Instances, Savings Plans (en AWS) y sus equivalentes en GCP y Azure. ¿Cómo calculo el porcentaje de mi carga que es lo suficientemente predecible como para comprometerse? Dame la fórmula para decidir qué plazo (1 año vs. 3 años) y qué modalidad de pago (all upfront, partial, no upfront) maximizan el ahorro sin sobrecomprometerse.

**4. Optimización de almacenamiento y transferencia de datos**
El almacenamiento y la transferencia de datos suelen ser el gasto invisible que más crece. ¿Cómo identifico los buckets de S3/GCS/Azure Blob con datos obsoletos? ¿Qué políticas de lifecycle configurar? ¿Cómo reduzco los costes de transferencia de datos entre zonas, regiones y hacia Internet? Dame las configuraciones concretas que generan más ahorro.

**5. Cultura FinOps en el equipo de ingeniería**
El problema técnico es fácil; el cultural es difícil. ¿Cómo consigo que los ingenieros consideren el coste cloud en sus decisiones de arquitectura sin frenar la velocidad de desarrollo? Dame el proceso para implementar la atribución de costes por equipo o servicio, el dashboard mínimo que necesita cada equipo y cómo gamificar la reducción de costes.

**6. Plan de reducción en 90 días**
Con todo lo anterior, dame un plan de 90 días con hitos claros: semana 1 (diagnóstico y quick wins), mes 1 (acciones de rightsizing y storage), mes 2 (implementación de compromisos y automatización), mes 3 (cultura FinOps y revisión de arquitectura). ¿Qué porcentaje de ahorro puedo esperar en cada etapa?

Quiero cifras realistas y comandos o configuraciones concretas, no conceptos generales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reducir la factura cloud entre un 30% y un 50% con FinOps: diagnóstico de despilfarro, rightsizing, compromisos y cultura de coste.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos con hiperescaladores cloud: SLAs, DPAs y cláusulas clave',
                'description'      => 'Las cláusulas que protegen a tu empresa en los contratos con AWS, Azure y GCP: SLAs reales, responsabilidad por datos, DPAs y lo que los proveedores nunca te proponen por defecto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado tecnológico especializado en contratos con proveedores de infraestructura cloud. Quiero entender qué cláusulas debo revisar, negociar o rechazar en mis contratos con AWS, Azure o GCP, y cómo proteger a mi empresa de los riesgos más comunes.

Mi contexto:
- Proveedor cloud principal: [AWS / Azure / GCP / varios]
- Tipo de empresa: [startup / pyme / corporate]
- Datos que proceso: [datos de clientes / datos financieros / datos de salud / datos sensibles personales / todos los anteriores]
- Jurisdicción principal: [España / UE / LATAM / global]
- Gasto anual cloud estimado: [rango, relevante para saber si puedo negociar]

Ayúdame a entender y negociar los siguientes bloques:

**1. El SLA real de los hiperescaladores**
Los hiperescaladores ofrecen SLAs de hasta 99,99% de uptime, pero las exclusiones los vacían de contenido. Dame una lista de las exclusiones más relevantes de los SLAs de AWS/Azure/GCP y explica qué significa cada una en términos prácticos: qué eventos no están cubiertos, cómo se calcula el crédito de servicio y qué debería pedir en una negociación si tengo suficiente volumen de gasto.

**2. Data Processing Agreements (DPAs) bajo GDPR**
Los hiperescaladores tienen DPAs estándar. ¿Son suficientes para cumplir con el GDPR? Explica qué debes verificar en el DPA de tu proveedor: roles (responsable/encargado), subencargados, transferencias internacionales y las cláusulas contractuales tipo (SCCs). ¿Qué preguntas debes hacer al DPO del proveedor antes de firmar?

**3. Cláusulas de responsabilidad y limitación de daños**
Los contratos cloud limitan severamente la responsabilidad del proveedor. ¿Cuáles son los límites habituales? ¿Qué tipo de daños quedan siempre excluidos (lucro cesante, daños indirectos, pérdida de datos)? ¿Existe margen para negociar límites más altos si eres un cliente enterprise con un EDP (Enterprise Discount Program) o un EA (Enterprise Agreement)?

**4. Propiedad de los datos y portabilidad**
¿Quién es propietario de los datos que almaceno en el cloud? ¿El contrato me garantiza el derecho a exportarlos en cualquier momento y en formato estándar? Explica las cláusulas de portabilidad y las obligaciones del proveedor en caso de terminación del contrato. ¿Qué pasa con mis datos si no pago la factura?

**5. Cláusulas de cambio unilateral de términos**
Los hiperescaladores se reservan el derecho de cambiar los precios y los términos con poco preaviso. ¿Qué cláusulas de estabilidad de precio puedo negociar? ¿Existe protección contractual contra subidas de precio durante un compromiso plurianual? ¿Cómo me protejo ante el fin de soporte de un servicio que uso?

**6. Estrategia de negociación**
¿A partir de qué volumen de gasto tiene sentido intentar negociar con estos proveedores? ¿Qué argumentos son más efectivos? ¿Cuál es el proceso de negociación (account team, legal, procurement) y cuánto tiempo lleva? Dame tres cláusulas que pedirías siempre y otras tres que son difíciles de obtener pero vale la pena intentarlo.

Quiero respuestas específicas para el entorno europeo/GDPR, con lenguaje jurídico accesible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Revisar y negociar contratos con hiperescaladores cloud: SLAs reales, DPAs GDPR, responsabilidad limitada y portabilidad de datos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte de infraestructura: gestión de incidentes que afectan a clientes',
                'description'      => 'Cómo el equipo de CS gestiona los incidentes de infraestructura que afectan a clientes: comunicación de crisis, gestión de SLAs y postmortem orientado al cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia gestionando incidentes de infraestructura que afectan a clientes en productos SaaS B2B. Necesito tu ayuda para mejorar el proceso de gestión de incidentes desde el punto de vista del cliente, no solo el técnico.

Mi contexto:
- Tipo de producto: [SaaS B2B / plataforma / servicio gestionado]
- Segmento de clientes: [SMB / mid-market / enterprise / mixto]
- SLAs comprometidos: [uptime / tiempo de respuesta / tiempo de resolución]
- Canal de comunicación principal con clientes en incidentes: [email / Slack / teléfono / status page / todo lo anterior]
- El incidente más doloroso que he tenido: [describe brevemente si quieres orientar la respuesta]

Ayúdame con los siguientes bloques:

**1. Proceso de comunicación de crisis**
Dame un protocolo de comunicación para incidentes con tres niveles de severidad (P1: producción caída totalmente, P2: degradación parcial, P3: lentitud o error intermitente). Para cada nivel: quién notifica a los clientes, en qué plazo desde la detección del incidente, qué canales se usan, con qué frecuencia se actualiza y qué información incluye cada actualización. Incluye la plantilla de comunicación inicial para un P1.

**2. Gestión de SLAs durante el incidente**
¿Cómo calculo en tiempo real si un incidente está incumpliendo el SLA comprometido? ¿Quién tiene la autoridad para declarar un incidente como breach del SLA? ¿Cómo comunico proactivamente a los clientes afectados que van a recibir un crédito de servicio, sin esperar a que lo pidan? Dame el proceso de cálculo y comunicación del crédito.

**3. Priorización de clientes durante el incidente**
Cuando el incidente afecta a múltiples clientes, ¿cómo priorizo a quién actualizar primero? Dame un sistema de clasificación por impacto (tamaño de cuenta, uso en producción, sector sensible, cliente en proceso de renovación) y cómo el equipo de CS lo aplica sin sobrecargar el canal de comunicación.

**4. La conversación difícil: cliente furioso durante el incidente**
¿Qué hago cuando un cliente enterprise me llama en pleno incidente, furioso porque su presentación al board se ha visto afectada? Dame las frases concretas de apertura, las preguntas que calman, lo que no debo decir nunca y cómo cierro la llamada de forma que el cliente sienta que está siendo atendido aunque el incidente siga activo.

**5. Postmortem orientado al cliente**
El postmortem técnico existe, pero ¿cómo comunico el aprendizaje al cliente de forma que recupere la confianza en lugar de acentuar el daño? Dame la estructura del postmortem para clientes: qué pasó, cuánto duró el impacto real, qué hicimos para resolverlo, qué cambios hemos implementado y por qué no volverá a ocurrir. ¿Cuándo se envía y en qué formato?

**6. Indicadores de calidad de gestión de incidentes**
¿Qué métricas de CS debo seguir para medir la calidad de mi gestión de incidentes? Dame los cinco KPIs más relevantes: desde el tiempo de primera comunicación hasta la tasa de churn en los 90 días posteriores a un incidente grave. ¿Qué benchmark es razonable para cada métrica?

Responde con procesos accionables y plantillas de comunicación reales, no principios genéricos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar incidentes de infraestructura desde CS: protocolo de comunicación, gestión de SLAs y postmortem que recupera la confianza del cliente.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en cloud y DevOps: posicionamiento y primeros proyectos',
                'description'      => 'El nicho con mayor tarifa del mercado técnico freelance: cómo posicionarte como especialista cloud o DevOps, dónde encontrar proyectos y cómo vender tu valor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior en cloud y DevOps con más de cinco años trabajando de forma independiente en proyectos de migración, infraestructura y plataforma. Quiero construir o escalar mi práctica freelance en este nicho y necesito orientación estratégica y táctica.

Mi situación:
- Nivel técnico actual: [junior / intermedio / senior en cloud y DevOps]
- Certificaciones: [lista las que tienes o estás preparando]
- Experiencia en empresa: [años y tipo de empresa: startup / agencia / corporación]
- Estado actual como freelance: [empezando / en activo con pocos clientes / queriendo crecer]
- Especialización preferida: [AWS / GCP / Azure / multi-cloud / Kubernetes / CI/CD / FinOps / seguridad cloud / otro]
- Tarifa hora actual o objetivo: [€/$ por hora]

Ayúdame con los siguientes bloques:

**1. Posicionamiento de especialista**
El error más común del freelance técnico es posicionarse como "hago de todo". ¿Cómo defino mi nicho dentro del mundo cloud y DevOps para ser el primero en la mente del cliente cuando tiene ese problema específico? Dame tres ejemplos de posicionamiento concreto (no "experto en cloud", sino algo mucho más específico) con el tipo de cliente y proyecto que atraen.

**2. Dónde están los proyectos con mayor tarifa**
¿Cuáles son los canales más efectivos para encontrar proyectos de cloud y DevOps bien pagados en el mercado hispanohablante y en el mercado internacional? Compara: plataformas de freelance (Toptal, Upwork, Malt), reclutadores técnicos, LinkedIn, comunidades técnicas y el boca a boca. Para cada canal: esfuerzo de entrada, tarifa media que puedo esperar y la táctica de primer contacto más efectiva.

**3. El pitch técnico-comercial**
¿Cómo explico el valor de mi trabajo a un CTO o a un CEO que no entiende la diferencia entre Kubernetes y Docker? Dame una estructura de propuesta para un proyecto típico de cloud (migración, automatización de pipelines, reducción de costes) que conecte el trabajo técnico con el impacto de negocio en euros o en horas ahorradas.

**4. Pricing y estructura de proyectos**
¿Cómo decido si un proyecto debe ser por hora, por proyecto o retainer mensual? Para los proyectos de cloud y DevOps, ¿cuál es la estructura más común y la más rentable? Dame rangos de tarifa realistas por nivel de experiencia para el mercado español y el mercado europeo/americano en inglés. ¿Cómo justifica la tarifa alta un cliente conservador?

**5. Gestión de múltiples clientes y el problema del tiempo**
Los proyectos de infraestructura tienen picos de trabajo (migración, lanzamiento) y valles largos (mantenimiento). ¿Cómo diseño mi cartera de clientes para tener ingresos estables? ¿Cuántos clientes en paralelo es manejable sin sacrificar calidad? ¿Qué hago durante los meses de baja demanda para no quemar los ahorros?

**6. Hoja de ruta para los primeros seis meses**
Dame un plan concreto para los primeros seis meses si estoy empezando o quiero dar un salto de tarifa: qué certificaciones priorizar, qué proyectos de portfolio construir, qué comunidades unirse, cómo conseguir el primer cliente de calidad y cuánto puedo esperar ganar al final del primer año si ejecuto bien el plan.

Sé específico con tarifas, plataformas y tácticas reales del mercado actual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir una práctica freelance rentable en cloud y DevOps: posicionamiento, canales de captación, pricing y gestión de la cartera de clientes.',
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
