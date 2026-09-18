<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills379Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Negociación de contratos con agencias y proveedores de marketing',
                'description'      => 'Aprende a preparar y conducir negociaciones con agencias creativas, plataformas publicitarias y proveedores de herramientas de marketing. Esta habilidad cubre desde la definición del BATNA hasta las tácticas de concesión para obtener mejores tarifas y condiciones de servicio.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en negociación comercial con especialización en el sector marketing y publicidad. Voy a negociar un contrato con una agencia o proveedor de marketing y necesito tu ayuda para prepararme y ejecutar la negociación de manera efectiva.

CONTEXTO DEL EJERCICIO
Trabajas como responsable de marketing en una empresa y debes renovar o firmar un contrato con un proveedor clave (agencia creativa, plataforma de automatización, proveedor de datos, etc.). El presupuesto es ajustado y necesitas obtener el máximo valor por cada euro invertido.

FASE 1 — PREPARACIÓN ESTRATÉGICA
Antes de entrar a negociar, ayúdame a responder estas preguntas:
- ¿Cuál es mi objetivo ideal (best case scenario) en términos de precio, alcance y condiciones?
- ¿Cuál es mi punto de resistencia (el mínimo aceptable)?
- ¿Cuál es mi BATNA (mejor alternativa si no llegamos a acuerdo)? Enumera al menos tres alternativas reales y evalúa su valor comparativo.
- ¿Qué necesita el proveedor de esta relación? ¿Cuál es su BATNA probable?

FASE 2 — ANÁLISIS DE PODER Y PALANCAS
Identifica las palancas de negociación disponibles en contratos de marketing:
- Volumen de inversión y compromiso plurianual
- Referencias y casos de éxito para el proveedor
- Flexibilidad en los plazos de pago
- Exclusividad o cláusulas de primera opción
- Bundling de servicios adicionales
- Penalizaciones por incumplimiento de KPIs (cláusulas de performance)

Para cada palanca, sugiere cómo presentarla tácticamente en la conversación.

FASE 3 — TÁCTICAS DE APERTURA Y ANCLAJE
Explica cómo usar el anclaje inicial en mi favor:
- ¿Debo abrir yo primero o esperar a que el proveedor proponga?
- ¿Cuánto margen debo incluir en mi oferta inicial por encima/debajo de mi objetivo real?
- Qué señales verbales y no verbales debo observar en la respuesta del proveedor.

Proporciona tres guiones de apertura diferentes según el estilo de la negociación: colaborativa, competitiva y mixta.

FASE 4 — ESTRATEGIA DE CONCESIONES
Diseña un mapa de concesiones:
- Lista de puntos negociables ordenados de menor a mayor valor real para mí
- Regla de reciprocidad: cómo pedir algo a cambio de cada concesión
- Cómo evitar que el proveedor interprete las concesiones como señal de debilidad
- La técnica del "salami" aplicada a contratos de marketing

FASE 5 — GESTIÓN DE OBJECIONES COMUNES
Prepara respuestas para las objeciones más frecuentes de proveedores de marketing:
- "Nuestras tarifas ya son las mínimas del mercado"
- "Ese descuento requeriría aprobación de dirección"
- "No podemos comprometernos a métricas de resultados"
- "El alcance que describes requiere un equipo más amplio"

FASE 6 — CIERRE Y FORMALIZACIÓN
Indica cómo reconocer el momento óptimo para cerrar el acuerdo, qué cláusulas contractuales son críticas en servicios de marketing (SLAs, propiedad intelectual, confidencialidad, condiciones de salida) y cómo documentar los acuerdos verbales alcanzados durante la negociación.

FORMATO DE RESPUESTA
Estructura tu respuesta con encabezados claros para cada fase. Incluye ejemplos de diálogos reales y una tabla resumen con las variables negociables, el objetivo ideal, el punto de resistencia y el argumento clave para cada una.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar y ejecutar negociaciones con agencias y proveedores de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Negociación de contratos de software y acuerdos de nivel de servicio (SLA)',
                'description'      => 'Domina la negociación de contratos de desarrollo de software, licencias, outsourcing y acuerdos de SLA con proveedores tecnológicos. Aprende a proteger los intereses del equipo técnico y a establecer métricas de rendimiento exigibles.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor experto en negociación de contratos tecnológicos con amplia experiencia en acuerdos de desarrollo de software, SaaS, outsourcing y SLAs. Voy a negociar un contrato tecnológico y necesito guía completa para preparar y ejecutar la negociación.

CONTEXTO
Soy responsable técnico o CTO de una empresa y debo negociar un contrato con un proveedor tecnológico: puede ser un contrato de desarrollo a medida, una licencia de software empresarial, un acuerdo de outsourcing de equipo o un SLA de infraestructura cloud.

BLOQUE 1 — INVENTARIO DE REQUISITOS TÉCNICOS NO NEGOCIABLES
Ayúdame a identificar y documentar los requisitos que deben estar garantizados en cualquier contrato tecnológico:
- Disponibilidad mínima del servicio (uptime) y ventanas de mantenimiento aceptables
- Tiempos de respuesta ante incidencias por severidad (P1, P2, P3, P4)
- Acuerdos de nivel de recuperación: RTO (Recovery Time Objective) y RPO (Recovery Point Objective)
- Requisitos de seguridad: cifrado, acceso a datos, certificaciones (ISO 27001, SOC 2, etc.)
- Propiedad intelectual del código y condiciones de entrega del código fuente (escrow)
- Cláusulas de portabilidad y derecho de salida (exit clauses)

BLOQUE 2 — ESTRUCTURA DEL ACUERDO DE SLA
Diseña una plantilla de SLA negociable que incluya:
- Definición precisa de los indicadores de servicio y cómo se miden
- Mecanismos de penalización por incumplimiento (créditos de servicio, descuentos, resolución)
- Proceso de reporte y auditoría de métricas
- Procedimiento de escalado de incidencias y nombres de responsables
- Exclusiones y causas de fuerza mayor aceptables vs. inaceptables

BLOQUE 3 — TÁCTICAS DE NEGOCIACIÓN PARA CONTRATOS TÉCNICOS
Explica las tácticas específicas para negociar con proveedores tecnológicos:
- Cómo usar benchmarks de mercado (Gartner, IDC, cotizaciones competidoras) como palanca
- La importancia del "total cost of ownership" vs. precio de licencia inicial
- Negociación de cláusulas de escalado de precios en contratos plurianuales (índices de referencia, caps de incremento)
- Cómo negociar el alcance del soporte incluido: horas, canales, idioma, zona horaria
- Gestión de cambios de alcance (change requests): cómo evitar el scope creep en contratos de precio fijo

BLOQUE 4 — NEGOCIACIÓN DE CONTRATOS DE OUTSOURCING
Si el contrato es de outsourcing de desarrollo, aborda:
- Modelo de contratación: tiempo y materiales vs. precio fijo vs. modelo híbrido — ventajas y riesgos de cada uno
- Cómo negociar los perfiles del equipo, la rotación máxima permitida y los tiempos de sustitución
- Cláusulas de transferencia de conocimiento al finalizar el contrato
- Indicadores de calidad del código: cobertura de tests, deuda técnica, revisiones de código

BLOQUE 5 — GESTIÓN DE RIESGOS CONTRACTUALES
Identifica los cinco riesgos más frecuentes en contratos tecnológicos y cómo mitigarlos contractualmente:
- Dependencia excesiva del proveedor (vendor lock-in)
- Deriva del alcance sin control de costes
- Incumplimiento de plazos de entrega
- Brechas de seguridad y responsabilidad sobre datos
- Insolvencia o cambio de propiedad del proveedor

BLOQUE 6 — CIERRE Y REVISIÓN LEGAL
Indica qué debe revisar el equipo legal antes de firmar y cómo coordinar técnicos y abogados para que el contrato sea a la vez jurídicamente sólido y técnicamente preciso.

FORMATO DE RESPUESTA
Usa encabezados numerados para cada bloque. Incluye ejemplos de redacción de cláusulas contractuales específicas y una checklist final de 20 puntos para validar el contrato antes de la firma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Negociar contratos de software, SLAs y acuerdos de outsourcing tecnológico',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Negociación de tarifas y contratos creativos con clientes',
                'description'      => 'Aprende a defender el valor de tu trabajo creativo, negociar presupuestos y establecer contratos sólidos con clientes. Esta habilidad cubre desde la presentación de tarifas hasta la gestión de revisiones, derechos de uso y condiciones de pago.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach experto en negociación para profesionales creativos (diseñadores, ilustradores, directores de arte, fotógrafos y creativos en general). Voy a negociar un proyecto con un cliente y necesito estrategias específicas para el contexto creativo.

SITUACIÓN
Los profesionales creativos suelen encontrar dificultades para negociar porque su trabajo es subjetivo, el cliente puede presionar con "yo lo hago más barato" y existe la tentación de bajar precios para conseguir el proyecto. Este ejercicio te entrena para negociar desde el valor, no desde el coste.

MÓDULO 1 — CÁLCULO Y DEFENSA DE LA TARIFA
Ayúdame a estructurar mi propuesta económica:
- Cómo calcular mi tarifa hora o tarifa proyecto considerando: costes fijos, margen de beneficio, impuestos, tiempo de gestión y revisiones
- La diferencia entre tarifa de producción y tarifa de derechos de uso (licencia de la obra)
- Cómo presentar el presupuesto para que el cliente perciba valor antes que precio
- Scripts para responder a "me parece caro" sin ceder inmediatamente

MÓDULO 2 — ANCLAJE Y PRESENTACIÓN DE OPCIONES
Explica cómo usar la técnica del anclaje alto y la presentación de tres opciones (bueno / mejor / premium):
- Diseña tres niveles de servicio para un proyecto de identidad visual como ejemplo
- Cómo el efecto de contraste hace que el cliente elija el paquete intermedio o superior
- Cuándo y cómo ofrecer descuentos sin dañar la percepción de valor: descuento por volumen, por pago adelantado, por referencia

MÓDULO 3 — NEGOCIACIÓN DEL ALCANCE Y LAS REVISIONES
Uno de los puntos más conflictivos en proyectos creativos es la gestión del alcance:
- Cómo redactar en el contrato el número de rondas de revisión incluidas y qué constituye una revisión vs. un cambio de dirección
- Cómo cotizar revisiones adicionales sin que el cliente se sienta penalizado
- La cláusula de "aprobación por silencio": si el cliente no responde en X días, se considera aprobado
- Cómo gestionar al cliente que pide pequeños cambios continuos (death by a thousand cuts)

MÓDULO 4 — DERECHOS DE PROPIEDAD INTELECTUAL Y LICENCIAS
Explica los conceptos básicos de propiedad intelectual aplicados a proyectos creativos:
- Diferencia entre cesión total de derechos y licencia de uso limitada
- Variables que afectan el precio de la licencia: exclusividad, territorio, duración, medios de difusión
- Cómo incluir estas cláusulas en el contrato de manera clara para el cliente
- Qué ocurre si el cliente usa la obra más allá de lo acordado: cómo protegerse

MÓDULO 5 — CONDICIONES DE PAGO Y GESTIÓN DE IMPAGOS
- Cómo estructurar los hitos de pago: anticipo, entrega de borradores, entrega final
- Porcentaje de anticipo recomendado según el tamaño del proyecto
- Cláusulas de retención de derechos hasta el pago completo
- Proceso paso a paso para gestionar clientes morosos sin perder la relación

MÓDULO 6 — OBJECIONES FRECUENTES DE CLIENTES CREATIVOS
Prepara respuestas para estas situaciones reales:
- "Mi sobrino me lo hace gratis / más barato"
- "Necesito verlo terminado antes de decidir si lo pago"
- "¿No puedes hacerlo más rápido?"
- "El presupuesto es fijo, ¿qué puedes hacer por X euros?"
- "Firma primero y luego hablamos de las condiciones"

FORMATO DE RESPUESTA
Organiza la respuesta en los seis módulos. Para cada objeción incluye un script de respuesta completo, listo para usar en una conversación real. Al final, añade una lista de las cinco cláusulas más importantes que debe incluir cualquier contrato creativo básico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Defender tarifas, negociar alcance y formalizar contratos creativos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de cierre y negociación de acuerdos comerciales B2B',
                'description'      => 'Desarrolla habilidades avanzadas de negociación para cerrar acuerdos B2B de alto valor. Aprende a gestionar múltiples interlocutores, superar objeciones de precio y construir contratos comerciales que generen relaciones duraderas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con más de 15 años de experiencia en ventas B2B de ciclo largo y alto valor. Voy a preparar una negociación con un cliente corporativo y necesito una guía completa para maximizar las probabilidades de cierre en condiciones favorables.

CONTEXTO DE LA NEGOCIACIÓN B2B
Las negociaciones B2B son complejas porque intervienen múltiples decisores, los ciclos son largos, las condiciones comerciales son más elaboradas que en B2C y el riesgo de perder el acuerdo después de meses de trabajo es real. Este ejercicio te prepara para navegar toda esa complejidad.

ETAPA 1 — MAPEO DE STAKEHOLDERS
Antes de negociar, necesito entender con quién estoy tratando:
- Cómo identificar y clasificar a los decisores: el comprador económico, el usuario final, el influenciador técnico y el guardián (gatekeeper)
- Qué motiva a cada perfil y cómo adaptar el discurso de valor a cada uno
- Cómo gestionar a los stakeholders que no participan en la reunión pero tienen influencia
- Técnica de "mapping the power": cómo construir un mapa visual de influencia dentro del cliente

ETAPA 2 — PREPARACIÓN DEL BATNA Y ZONA DE POSIBLE ACUERDO (ZOPA)
- Define mi BATNA en este contexto: qué ocurre si no cierro este acuerdo y cómo eso afecta mi posición negociadora
- Cómo estimar el BATNA del cliente: ¿cuánto le cuesta no comprar? ¿Qué alternativas tiene?
- Define la ZOPA (Zone of Possible Agreement): el rango dentro del cual existe un acuerdo posible para ambas partes
- Herramientas para investigar el presupuesto disponible del cliente sin preguntarlo directamente

ETAPA 3 — ESTRUCTURA DE LA PROPUESTA COMERCIAL NEGOCIABLE
- Cómo presentar la propuesta para que facilite la negociación posterior en lugar de cerrarla
- La técnica del "precio de lista" y el descuento visible vs. el valor añadido invisible
- Bundling de servicios: cómo empaquetar la oferta para que el precio total sea difícil de comparar
- Cómo incluir opciones adicionales que el cliente no pida pero que amplíen el valor percibido

ETAPA 4 — TÁCTICAS PARA NEGOCIACIONES MULTIPARTE
Cuando hay varios interlocutores en la negociación:
- Cómo gestionar reuniones en las que el cliente trae a varios representantes con agendas distintas
- La táctica del "policía bueno / policía malo" del cliente: cómo reconocerla y neutralizarla
- Cómo evitar que el cliente use la ausencia del decisor final para aplazar el cierre indefinidamente
- Construcción de consenso interno: cómo ayudar al champion del cliente a vender internamente

ETAPA 5 — TÉCNICAS DE CIERRE
Las 7 técnicas de cierre más efectivas en ventas B2B con ejemplos de diálogo para cada una:
- Cierre de resumen
- Cierre de urgencia legítima
- Cierre de concesión final
- Cierre condicional ("si yo…, ¿tú…?")
- Cierre de prueba piloto
- Cierre de alternativa controlada
- Cierre de silencio

ETAPA 6 — NEGOCIACIÓN POST-PROPUESTA: GESTIÓN DE CONTRAOFERTAS
- Cómo responder a una contraoferta de precio sin ceder inmediatamente
- El tiempo como herramienta: cuándo es útil pedir tiempo para consultar con dirección
- Cómo hacer concesiones de manera que cada una extraiga algo del cliente
- Señales de que el cliente está listo para cerrar aunque diga que no

FORMATO DE RESPUESTA
Estructura la respuesta en las seis etapas. Para las técnicas de cierre, incluye diálogos completos de ejemplo. Termina con un checklist de 15 puntos para revisar antes de entrar a cualquier reunión de negociación B2B.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Preparar y cerrar negociaciones comerciales B2B de alto valor',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Negociación de acuerdos con socios tecnológicos y proveedores de producto',
                'description'      => 'Aprende a negociar integraciones, acuerdos de partnership, contratos de API y relaciones con proveedores tecnológicos estratégicos desde la perspectiva de Product Management. Cubre desde la due diligence hasta las cláusulas de contingencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Product con amplia experiencia en negociación de partnerships tecnológicos, integraciones de terceros y contratos de proveedor en empresas SaaS y de tecnología. Necesito preparar una negociación estratégica con un socio o proveedor tecnológico.

CONTEXTO DEL ROL DE PRODUCT EN NEGOCIACIONES
El Product Manager o VP of Product frecuentemente debe negociar sin tener plena autoridad sobre el presupuesto, lo que requiere habilidades especiales para coordinar con finanzas, legal y dirección, y para construir el caso de negocio que justifique las condiciones negociadas.

BLOQUE 1 — DUE DILIGENCE PREVIA A LA NEGOCIACIÓN
Antes de sentarse a negociar con un proveedor tecnológico o socio estratégico:
- Lista de verificación técnica: escalabilidad, fiabilidad histórica, roadmap público, política de deprecación de APIs
- Lista de verificación comercial: solidez financiera del proveedor, número de clientes, referencias verificables, condiciones estándar del sector
- Cómo evaluar el riesgo de dependencia tecnológica (vendor lock-in) y qué estrategias de mitigación incluir en el contrato
- Análisis de alternativas: build vs. buy vs. partner — cómo usar este análisis como palanca en la negociación

BLOQUE 2 — CONSTRUCCIÓN DEL CASO DE NEGOCIO INTERNO
Para que la negociación sea exitosa, primero debes alinear internamente:
- Cómo construir el business case para la inversión en el proveedor o partnership
- Qué métricas de ROI son más convincentes para cada audiencia interna (CTO, CFO, CEO)
- Cómo establecer el presupuesto máximo sin revelarlo al proveedor
- Proceso de aprobación y quién debe estar involucrado antes de comenzar a negociar externamente

BLOQUE 3 — VARIABLES CLAVE EN CONTRATOS DE PRODUCTO Y API
Identifica y explica cómo negociar estas variables específicas:
- Modelo de precios: por llamada, por usuario activo, por volumen de datos, tarifa plana — ventajas y riesgos de cada modelo para el crecimiento del producto
- Límites de uso (rate limits) y política de exceso de uso
- SLAs técnicos: uptime de la API, tiempos de respuesta, ventanas de mantenimiento
- Acceso a datos: quién es propietario de los datos generados, exportabilidad, políticas de retención
- Cláusulas de cambio de precios con preaviso suficiente para adaptar el modelo de negocio

BLOQUE 4 — NEGOCIACIÓN DE PARTNERSHIPS ESTRATÉGICOS
Cuando el acuerdo no es solo de proveedor sino de partnership bidireccional:
- Cómo estructurar acuerdos de co-marketing y co-selling
- Negociación de integraciones "featured": posición en marketplace, visibilidad en materiales del socio
- Cláusulas de exclusividad: cuándo pedirlas, cuándo aceptarlas y cuándo evitarlas
- Mecanismos de gobernanza del partnership: quién decide qué y cómo se resuelven discrepancias

BLOQUE 5 — GESTIÓN DE RIESGOS CONTRACTUALES EN PRODUCTOS DIGITALES
- Qué ocurre si el proveedor es adquirido por un competidor (cláusula de change of control)
- Condiciones de salida: migración de datos, tiempo de transición, continuidad del servicio
- Garantías de compatibilidad hacia atrás y política de versiones de la API
- Mecanismos de resolución de disputas técnicas

BLOQUE 6 — CONDUCCIÓN DE LA NEGOCIACIÓN COMO PM
- Cómo llevar a la negociación una perspectiva de usuario/cliente que refuerce la posición
- Tácticas para negociar cuando el proveedor tiene más poder de mercado (negociación asimétrica)
- Cómo construir una relación a largo plazo sin sacrificar condiciones en la negociación inicial

FORMATO DE RESPUESTA
Desarrolla cada bloque con subapartados. Incluye un template de agenda para una primera reunión de negociación con un proveedor tecnológico y una tabla comparativa de variables a negociar con niveles objetivo, aceptable y mínimo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Negociar partnerships, integraciones y contratos de proveedor tecnológico',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Negociación de contratos laborales y paquetes de compensación',
                'description'      => 'Desarrolla habilidades para negociar contratos de trabajo, paquetes salariales y beneficios tanto desde la perspectiva del empleador como del candidato. Aprende a estructurar compensaciones competitivas y a gestionar negociaciones con candidatos senior.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos con especialización en compensación y beneficios, y amplia experiencia en negociación de contratos laborales para perfiles desde operativos hasta directivos. Voy a negociar un contrato de trabajo y necesito guía completa para ambas perspectivas.

CONTEXTO DUAL
La negociación laboral es única porque ocurre en un contexto de relación futura: tanto el empleador como el candidato necesitan llegar a un acuerdo que sientan como justo para que la relación laboral comience con buen pie. A diferencia de una negociación comercial puntual, aquí el proceso de negociación en sí mismo da señales sobre la cultura de la empresa y las intenciones del candidato.

PARTE A — PERSPECTIVA DEL EMPLEADOR (RRHH)

Módulo 1: Preparación de la oferta
- Cómo construir la banda salarial del puesto usando datos de mercado (encuestas de compensación, portales de empleo, redes profesionales)
- Definición del "punto de referencia" (midpoint) y los rangos mínimo y máximo de la banda
- Variables de compensación total: salario fijo, variable, equity, beneficios en especie, formación, flexibilidad — cómo valorizarlas y presentarlas
- Cómo preparar la oferta inicial para dejar margen de negociación sin perder atractivo

Módulo 2: Conducción de la negociación con el candidato
- Cuándo hacer la primera oferta económica y cuándo esperar a que el candidato proponga
- Cómo responder a una contraoferta sin comprometerse inmediatamente
- Tácticas para retener a un candidato que tiene otra oferta: qué concesiones tienen más impacto con menor coste
- Cómo negociar con perfiles senior que tienen más poder en la negociación

PARTE B — PERSPECTIVA DEL CANDIDATO

Módulo 3: Investigación y preparación
- Fuentes para investigar el rango salarial del puesto y del sector
- Cómo calcular mi valor de mercado considerando experiencia, habilidades escasas y resultados previos cuantificables
- Definición de mi BATNA: ¿qué ocurre si rechazo esta oferta?
- Los tres números que debo conocer antes de negociar: objetivo ideal, punto de partida de la negociación y mínimo aceptable

Módulo 4: Tácticas de negociación para candidatos
- Cómo responder a "¿cuáles son tus expectativas salariales?" sin ser el primero en dar una cifra
- El poder del silencio después de recibir una oferta
- Cómo negociar más allá del salario: días de vacaciones adicionales, trabajo remoto, fecha de incorporación, revisión salarial a los 6 meses, presupuesto de formación
- Scripts para negociar una contraoferta de tu empleador actual sin cerrar la puerta a la nueva empresa

PARTE C — CLÁUSULAS CONTRACTUALES CLAVE

Módulo 5: Elementos críticos del contrato laboral
- Período de prueba: duración, condiciones y qué se negocia durante ese período
- Cláusulas de no competencia y no captación: cómo negociar su alcance y compensación
- Condiciones de terminación: preaviso, indemnizaciones, acuerdos de confidencialidad
- Cláusulas de propiedad intelectual sobre el trabajo realizado
- Revisión salarial: frecuencia, criterios y si deben constar en el contrato

FORMATO DE RESPUESTA
Estructura la respuesta en las tres partes y cinco módulos. Para los módulos de tácticas, incluye scripts de conversación listos para usar. Al final, añade una tabla comparativa de beneficios con su valor económico estimado para ayudar a construir ofertas de compensación total.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Negociar contratos laborales, salarios y paquetes de compensación total',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Negociación de términos financieros y condiciones de crédito con entidades bancarias',
                'description'      => 'Aprende a negociar líneas de crédito, tipos de interés, comisiones y condiciones de financiación con bancos e inversores. Esta habilidad cubre la preparación financiera, la presentación del caso de inversión y las cláusulas de protección críticas.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO experimentado con historial de éxito en la negociación de financiación bancaria, líneas de crédito, bonos corporativos y condiciones de inversión. Voy a negociar condiciones financieras con una entidad bancaria o financiadora y necesito guía estratégica completa.

CONTEXTO FINANCIERO
La negociación con entidades financieras tiene particularidades: el banco tiene más información sobre los riesgos del mercado, las condiciones estándar del sector y la situación del prestatario que lo que la empresa suele conocer sobre los criterios reales de decisión del banco. Negociar bien requiere entender ese desequilibrio informativo y compensarlo con preparación sólida.

CAPÍTULO 1 — PREPARACIÓN DEL EXPEDIENTE DE CRÉDITO
Antes de acudir a la negociación:
- Documentación financiera que maximiza la credibilidad: qué ratios deben estar saneados antes de presentar la solicitud (ratio de endeudamiento, EBITDA/deuda, ratio de cobertura de intereses)
- Cómo presentar las proyecciones financieras de manera que sean creíbles pero optimistas
- Estrategia multi-banco: por qué solicitar simultáneamente a varias entidades y cómo gestionar el proceso sin que parezca desesperación
- Uso de garantías reales vs. garantías personales: qué ofrecer y qué proteger

CAPÍTULO 2 — VARIABLES NEGOCIABLES EN PRODUCTOS FINANCIEROS
Identifica y prioriza qué se puede negociar en cada tipo de producto:

Línea de crédito revolving:
- Límite, plazo, tipo de interés (Euribor + spread), comisión de disponibilidad, comisión de apertura
- Condiciones de disponibilidad y renovación anual

Préstamo a largo plazo:
- Tipo fijo vs. variable, período de carencia de principal, calendario de amortización flexible
- Covenants financieros: qué ratios se monitorizan y qué márgenes de tolerancia son aceptables
- Condiciones de prepago anticipado y penalizaciones

CAPÍTULO 3 — TÁCTICAS DE NEGOCIACIÓN BANCARIA
- La importancia de la relación previa: cómo usar el historial de cliente para obtener mejores condiciones
- Cómo usar ofertas competidoras como palanca sin quemar la relación con el banco principal
- La táctica de "paquetización": negociar varios productos a la vez para obtener mejores condiciones en el conjunto
- Cuándo involucrar a un intermediario financiero (broker de deuda) y qué comisión es razonable
- Cómo negociar con el director de riesgos vs. el director comercial del banco — intereses diferentes

CAPÍTULO 4 — COVENANTS Y PROTECCIONES CONTRACTUALES
Los covenants son restricciones que el banco impone al prestatario:
- Tipos de covenants: financieros (ratios), operativos (restricciones de dividendos, nuevas deudas) e informativos (reporting periódico)
- Cómo negociar los umbrales de los covenants para que sean cumplibles incluso en escenarios adversos
- Qué ocurre al incumplir un covenant y cómo negociar cláusulas de cura (cure periods)
- Protecciones para el prestatario: pari passu, cross-default, change of control

CAPÍTULO 5 — NEGOCIACIÓN CON INVERSORES Y FONDOS
Cuando la financiación viene de capital riesgo o deuda privada:
- Diferencias clave entre negociar con bancos y con fondos de inversión
- Term sheets: las 10 cláusulas más importantes y cómo negociarlas (liquidation preference, anti-dilución, drag along, tag along, board seats)
- Valoración pre-money: tácticas para defender una valoración alta sin perder el acuerdo
- La due diligence como parte de la negociación: qué revelar y cómo gestionar los hallazgos

FORMATO DE RESPUESTA
Desarrolla cada capítulo con profundidad. Incluye una tabla de las variables más comunes en productos de deuda con rangos de mercado orientativos y el impacto económico de cada punto porcentual o punto básico de diferencia. Añade un glosario de los 20 términos financieros más importantes en negociaciones de crédito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Negociar condiciones de crédito, covenants y términos de financiación',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Estrategia BATNA y análisis de riesgos en negociación de contratos jurídicos',
                'description'      => 'Desarrolla habilidades avanzadas de negociación contractual desde la perspectiva jurídica: análisis de riesgos, BATNA estratégico, redacción de cláusulas favorables y gestión de negociaciones multipartes complejas.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado experto en negociación contractual y resolución de conflictos comerciales, con experiencia en M&A, contratos internacionales y litigación compleja. Voy a preparar una negociación contractual de alto riesgo y necesito un marco jurídico-estratégico completo.

ENFOQUE DUAL: DERECHO Y ESTRATEGIA
Un abogado negociador efectivo combina el análisis técnico-jurídico (qué dice la ley, qué es válido y exigible) con la estrategia de negociación (cómo maximizar la posición del cliente). Este ejercicio trabaja ambas dimensiones de manera integrada.

SECCIÓN 1 — ANÁLISIS JURÍDICO PREVIO A LA NEGOCIACIÓN
- Identificación de la ley aplicable y la jurisdicción competente: cómo esta elección afecta el poder de negociación
- Revisión de precedentes contractuales: qué cláusulas similares han sido declaradas nulas o interpretadas restrictivamente por los tribunales
- Análisis de riesgos legales del contrato desde la perspectiva del cliente: responsabilidad ilimitada, cláusulas abusivas, problemas de fuerza mayor
- Identificación de vacíos contractuales (gaps) que pueden ser fuente de conflicto futuro

SECCIÓN 2 — CONSTRUCCIÓN DEL BATNA JURÍDICO
El BATNA en negociaciones jurídicas tiene dimensiones específicas:
- ¿Cuál es la posición del cliente si no se llega a acuerdo? ¿Puede litigar, arbitrar, rescindirse el contrato anterior?
- Evaluación del coste del litigio vs. el coste de una concesión en la negociación
- Cómo el BATNA cambia según el fuero: negociar de manera diferente si el cliente tiene ventaja procesal en la jurisdicción aplicable
- La amenaza creíble de litigio como palanca: cuándo usarla y cuándo es contraproducente
- Evaluación del BATNA de la contraparte: ¿tiene recursos para litigar? ¿Le conviene?

SECCIÓN 3 — REDACCIÓN ESTRATÉGICA DE CLÁUSULAS
Las cláusulas no son solo técnicas, son instrumentos de negociación:
- Cláusulas de responsabilidad: topes de responsabilidad, exclusiones, distribución de riesgos — cómo negociar cada elemento
- Cláusulas de representaciones y garantías (reps & warranties): alcance, excepciones, período de supervivencia
- Cláusulas de indemnización: estándar de activación, proceso de reclamación, límites
- Resolución de disputas: negociación previa obligatoria, mediación, arbitraje, fuero — ventajas estratégicas de cada opción
- Cláusula de ley aplicable y jurisdicción: cómo influye en el poder relativo de las partes

SECCIÓN 4 — NEGOCIACIÓN MULTIPARTES Y ACUERDOS COMPLEJOS
- Cómo gestionar la negociación cuando hay más de dos partes con intereses divergentes
- La técnica de "negociación por bloques": agrupar a las partes según intereses comunes
- Redacción del término sheet o letter of intent: qué debe incluir y qué dejar para el contrato definitivo
- Gestión de la confidencialidad durante la negociación: NDAs y sus limitaciones prácticas
- Cómo evitar que las concesiones previas a la firma creen precedentes vinculantes

SECCIÓN 5 — TÁCTICAS Y ÉTICA EN LA NEGOCIACIÓN JURÍDICA
- Las tácticas agresivas más comunes en negociaciones legales y cómo contrarrestarlas (los "lowball", las fechas límite artificiales, la escalada de demandas)
- Límites éticos de la negociación: qué no puede hacer un abogado aunque la contraparte lo haga
- Cómo documentar la negociación para protegerse en caso de disputa posterior sobre lo acordado
- Gestión de clientes que quieren tácticas que comprometería la licencia profesional

FORMATO DE RESPUESTA
Estructura la respuesta en cinco secciones claramente diferenciadas. Incluye un modelo de memo interno de evaluación de riesgos contractuales que el abogado puede completar antes de cada negociación, y una lista de las 10 cláusulas que nunca deberían aceptarse sin negociación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Preparar estrategia jurídica para negociaciones contractuales complejas',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Negociación de renovaciones y ampliaciones de contratos con clientes',
                'description'      => 'Aprende a preparar y ejecutar negociaciones de renovación de contratos desde Customer Success, maximizando la retención, ampliando el alcance y construyendo acuerdos que refuercen la relación a largo plazo con el cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Customer Success con amplia experiencia en negociación de renovaciones, upselling contractual y retención de cuentas enterprise. Voy a preparar una negociación de renovación o ampliación de contrato con un cliente estratégico y necesito una guía completa.

CONTEXTO DE CS EN NEGOCIACIONES
Las negociaciones de renovación son fundamentalmente diferentes a las negociaciones de ventas iniciales: el cliente ya conoce el producto, ya tiene una opinión formada sobre el valor recibido y ha comparado esa percepción con el precio pagado. El rol de Customer Success en estas negociaciones es doble: demostrar el valor entregado y construir el caso para la continuidad o la expansión.

MÓDULO 1 — PREPARACIÓN BASADA EN DATOS
La negociación de renovación más poderosa se basa en evidencia:
- Métricas de uso: cómo presentar datos de adopción, frecuencia de uso y breadth of use de manera impactante
- Cálculo del ROI del cliente: cómo cuantificar el valor entregado en términos de ahorro de tiempo, incremento de ingresos o reducción de costes
- Health score del cliente: indicadores de riesgo de churn y cómo abordar cada uno antes de entrar a la negociación
- Hitos de éxito alcanzados: construcción de una narrativa de "business review" que justifique la renovación
- Comparativa con el estado inicial: cómo mostrar la evolución desde la firma del contrato original

MÓDULO 2 — SEÑALES DE RIESGO Y CONVERSACIONES DIFÍCILES
- Cómo iniciar la conversación cuando el cliente ha expresado insatisfacción o hay tickets de soporte abiertos
- La técnica de "descubrir antes de defender": hacer preguntas antes de presentar argumentos
- Cómo separar objeciones reales de palancas de negociación de precio
- Scripts para conversaciones difíciles: "estamos evaluando alternativas", "el presupuesto se ha reducido", "no estamos usando todo lo que pagamos"

MÓDULO 3 — ESTRATEGIA DE RENOVACIÓN Y AMPLIACIÓN
- Renovación plana vs. con incremento de precio: cuándo proponer cada opción
- Estrategia de upselling durante la renovación: cómo proponer módulos adicionales sin que el cliente sienta presión de venta
- Multi-year deals: cómo presentar el valor de un compromiso plurianual para ambas partes
- Descuentos por volumen o por multi-año: estructura y cómo presentarlos sin erosionar el margen
- La trampa del "descuento para cerrar": por qué los descuentos de renovación crean expectativas futuras y cómo evitarlos

MÓDULO 4 — NEGOCIACIÓN DE LAS CONDICIONES CONTRACTUALES
Más allá del precio, qué condiciones negociar en la renovación:
- Actualización del SLA según el uso real del cliente y las capacidades actuales del producto
- Inclusión de nuevas funcionalidades en el scope del contrato
- Condiciones de escalado de precios para años futuros
- Cláusulas de business review obligatorias (QBRs garantizados en el contrato)
- Derechos de referencia y caso de estudio: cómo incluirlos como contraprestación a mejores condiciones

MÓDULO 5 — GESTIÓN INTERNA Y COORDINACIÓN CON VENTAS
- Cómo coordinar la negociación de renovación entre CS y el equipo de ventas sin duplicar mensajes al cliente
- Cuándo escalar la negociación a un ejecutivo senior de la empresa proveedora
- Cómo manejar cuando el cliente quiere negociar solo con ventas, saltándose a CS
- Documentación post-negociación: qué registrar en el CRM y qué compartir internamente

FORMATO DE RESPUESTA
Organiza la respuesta en cinco módulos. Para los scripts de conversación, proporciona el diálogo completo en formato de ejemplo de conversación real. Termina con una plantilla de "Renewal Playbook" de una página que cualquier CSM pueda completar antes de una conversación de renovación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar y ejecutar negociaciones de renovación y expansión de contratos',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Negociación de tarifas y condiciones como profesional independiente',
                'description'      => 'Aprende a negociar tarifas, alcance y condiciones de contrato como freelancer sin perder proyectos ni devaluar tu trabajo. Desarrolla un sistema de negociación replicable que te permita conseguir mejores clientes y condiciones cada vez.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de carrera especializado en profesionales independientes (freelancers, consultores y autónomos) con experiencia asesorando a cientos de independientes en la negociación de sus servicios. Necesito un sistema completo para negociar de manera efectiva y sin estrés.

REALIDAD DEL FREELANCER EN NEGOCIACIONES
Los freelancers negocian en condiciones asimétricas: el cliente suele tener más opciones (puede esperar, puede contactar a otros proveedores, puede hacer el trabajo internamente) y el freelancer a veces siente urgencia por cerrar el proyecto. Este sistema está diseñado para igualar esa asimetría y negociar desde una posición más sólida.

PILAR 1 — POSICIONAMIENTO PREVIO A LA NEGOCIACIÓN
La mejor negociación es la que ocurre cuando el cliente ya quiere trabajar contigo:
- Cómo posicionar tu perfil para que los clientes te contacten ya convencidos de tu valor
- La importancia del "niche premium": por qué especializarse permite cobrar más y negociar menos
- Cómo construir un portafolio que justifique tus tarifas antes de que el cliente pregunte
- El rol de los testimonios y casos de estudio en el proceso de negociación

PILAR 2 — ESTRUCTURA DE TARIFAS Y OPCIONES
- Tarifa hora vs. tarifa proyecto vs. tarifa de retención mensual: ventajas para el freelancer en cada modelo
- Cómo calcular tu "tarifa mínima viable" considerando todos los costes: tiempo no facturable, impuestos, vacaciones, formación, herramientas
- La técnica de las tres opciones: cómo presentar tres paquetes para que el cliente elija en lugar de negociar hacia abajo
- Incrementos graduales de tarifa: cómo subir precios a clientes existentes sin perderlos

PILAR 3 — EL PROCESO DE DESCUBRIMIENTO COMO PALANCA
Antes de presentar cualquier precio, el proceso de descubrimiento del proyecto es tu mayor ventaja:
- Preguntas clave para entender el presupuesto del cliente sin preguntarlo directamente
- Cómo usar la fase de descubrimiento para construir valor antes de mencionar el precio
- Identificar señales de presupuesto alto: urgencia del proyecto, tamaño de la empresa, antecedentes de otros proveedores
- Cuándo cobrar por la consulta inicial y cómo presentarlo

PILAR 4 — TÁCTICAS DE NEGOCIACIÓN PARA INDEPENDIENTES
Scripts y tácticas específicas para la realidad del freelancer:
- Cómo responder a "¿cuánto cobras?" sin dar un precio inmediatamente
- La técnica de "anclaje + silencio": presentar el precio y esperar sin llenar el silencio
- Cómo decir no a un presupuesto bajo sin cerrar la conversación: la contraoferta de alcance reducido
- Gestión del cliente que compara con Fiverr o freelancers de países de bajo coste
- La "pausa estratégica": por qué es mejor pedir 24 horas para preparar una propuesta que responder al momento

PILAR 5 — CONTRATO BÁSICO DEL FREELANCER
Aunque negocies informalmente, necesitas protección contractual:
- Las cláusulas mínimas que debe tener cualquier contrato de freelancer: alcance, revisiones, pago, derechos de propiedad intelectual, confidencialidad
- Cómo usar un contrato simple sin que el cliente sienta que está firmando algo complejo
- La cláusula de "kill fee": compensación si el cliente cancela el proyecto a mitad
- Cómo gestionar el impago: proceso escalado desde recordatorio amistoso hasta acciones legales

PILAR 6 — GESTIÓN PSICOLÓGICA DE LA NEGOCIACIÓN
- Cómo superar el miedo a perder el proyecto por pedir demasiado
- El "efecto cartera llena": por qué los freelancers con otros proyectos negocian mejor y cómo simularlo
- Cómo mantener la posición cuando el cliente presiona con urgencia artificial
- La regla de las 24 horas: nunca aceptar condiciones que no te convenzan en el momento

FORMATO DE RESPUESTA
Estructura la respuesta en los seis pilares. Para cada táctica de negociación, incluye el script de conversación completo. Termina con una "Negociación en 10 pasos" que el freelancer pueda usar como cheatsheet en cualquier negociación de proyecto nuevo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negociar tarifas, alcance y condiciones de contratos como freelancer',
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
