<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills369Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1. Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Diseñar una infraestructura de marketing technology escalable',
                'description'      => 'Un stack de herramientas de marketing que funciona con 10.000 usuarios puede colapsar con 500.000. Aprende a evaluar y diseñar una arquitectura de martech escalable que soporte el crecimiento sin crear deuda técnica ni silos de datos. Toma decisiones informadas sobre qué construir, qué comprar y cómo integrar las herramientas para que el equipo pueda escalar sus operaciones.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de marketing technology con experiencia en diseño de stacks de martech para empresas en crecimiento. Ayúdame a evaluar y diseñar una infraestructura de marketing technology que escale con el negocio.

**El contexto**
La empresa ha crecido de 5.000 a 80.000 usuarios en los últimos 18 meses. El stack de marketing actual (un CRM básico, una herramienta de email marketing desconectada, Google Analytics y varias integraciones hechas a mano) ya no aguanta la carga ni permite tomar decisiones basadas en datos con agilidad. Necesito replantear la arquitectura.

**Entregables que necesito**

1. **Auditoría del stack actual**: diseña una metodología para auditar el stack de martech existente. Incluye preguntas para evaluar cada herramienta en términos de: cobertura funcional, integración con el resto del stack, calidad de los datos que genera, coste vs. valor, y limitaciones de escalabilidad. Propón un formato de inventario con semáforo de salud por herramienta.

2. **Arquitectura de martech escalable**: diseña una arquitectura de referencia para un stack de marketing que escale. Organízala en capas: capa de recolección de datos (tracking, eventos), capa de almacenamiento (Customer Data Platform o data warehouse), capa de activación (herramientas de marketing automation, email, paid, personalización), y capa de análisis y reporting. Para cada capa explica qué tipo de herramientas encajan y qué criterios usar para elegir entre opciones.

3. **Estrategia de datos de cliente unificados**: explica cómo centralizar los datos de cliente dispersos en distintas herramientas. Define qué es una Customer Data Platform (CDP) y cuándo tiene sentido vs. un data warehouse clásico. Explica cómo construir un perfil unificado de cliente y qué datos capturar en cada touchpoint del funnel.

4. **Priorización de inversiones en martech**: propón un framework para decidir qué herramientas incorporar o reemplazar primero. Define criterios de priorización: impacto en revenue, coste de no tenerlo, esfuerzo de implementación, y dependencias técnicas. Aplica el framework al escenario descrito y da una recomendación de 3 pasos concretos.

5. **Gestión del cambio al escalar el stack**: explica cómo migrar de un stack obsoleto a uno nuevo sin interrumpir las operaciones de marketing. Incluye: cómo hacer la migración por fases, cómo mantener la continuidad de los datos históricos, cómo formar al equipo en las nuevas herramientas, y cómo medir si la nueva arquitectura está funcionando mejor.

6. **Indicadores de salud del stack de martech**: define 5-7 KPIs para monitorizar si la infraestructura de martech está funcionando correctamente. Incluye métricas de calidad de datos, tiempo de latencia en la activación de audiencias, cobertura del tracking, y costo por dato activado.

**Formato de salida**
Encabezados claros por sección. La arquitectura de referencia explicada en capas con ejemplos de herramientas en cada capa. El framework de priorización en formato tabla. Los KPIs con definición y forma de cálculo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Rediseñar el stack de martech para soportar el crecimiento de usuarios',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 2. Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Diseñar una arquitectura de microservicios escalable desde cero',
                'description'      => 'Migrar de un monolito a microservicios es uno de los retos técnicos más complejos de las organizaciones en crecimiento. Aprende a diseñar una arquitectura de microservicios que sea genuinamente escalable: desde la descomposición del dominio hasta la comunicación entre servicios, el despliegue y la observabilidad. Evita los errores que hacen que los microservicios sean más problemáticos que el monolito que reemplazaron.',
                'prompt_content'   => <<<'EOT'
Actúa como arquitecto de software senior con experiencia en diseño y migración a arquitecturas de microservicios en entornos de producción de alta escala. Ayúdame a diseñar una arquitectura de microservicios que sea escalable, mantenible y operacionalmente manejable.

**El contexto**
Tenemos un monolito en PHP (Laravel) que procesa aproximadamente 500.000 peticiones diarias. El equipo ha crecido a 30 ingenieros y los despliegues se han vuelto lentos y arriesgados: un cambio en cualquier módulo requiere desplegar todo. Los cuellos de botella más claros están en el módulo de procesamiento de pagos y en el motor de recomendaciones, que a veces ralentiza toda la aplicación.

**Entregables que necesito**

1. **Estrategia de descomposición del dominio**: explica cómo identificar los bounded contexts del sistema y qué criterios usar para decidir qué partes del monolito extraer primero como microservicios. Incluye el patrón Strangler Fig, cómo extraer servicios de forma incremental sin big bang rewrite, y cómo decidir los límites entre servicios.

2. **Patrones de comunicación entre servicios**: diseña la estrategia de comunicación entre los microservicios. Explica cuándo usar comunicación síncrona (REST, gRPC) vs. asíncrona (mensajería con Kafka, RabbitMQ, SQS), cómo manejar la consistencia eventual, el patrón saga para transacciones distribuidas, y cómo evitar el acoplamiento excesivo entre servicios.

3. **Diseño del API Gateway y gestión de la autenticación**: explica el rol del API Gateway en la arquitectura. Define qué responsabilidades tiene (routing, autenticación, rate limiting, logging centralizado), qué herramientas usar (Kong, AWS API Gateway, Nginx), y cómo manejar la autenticación y autorización de forma centralizada con JWT o OAuth en un entorno de microservicios.

4. **Estrategia de escalado horizontal**: diseña cómo escalar cada microservicio de forma independiente. Incluye: cómo usar Kubernetes para orquestar los servicios, estrategias de auto-scaling basadas en métricas de carga, cómo manejar el estado en servicios stateless, y cómo diseñar servicios que puedan escalarse a cero.

5. **Observabilidad y trazabilidad distribuida**: diseña el stack de observabilidad para una arquitectura de microservicios. Incluye: logging centralizado (ELK Stack, Loki), métricas de servicio (Prometheus, Grafana), trazabilidad distribuida (Jaeger, Zipkin), alertas y SLOs. Explica cómo implementar distributed tracing para seguir una petición a través de múltiples servicios.

6. **Gestión de errores y resiliencia**: explica los patrones clave para construir microservicios resilientes. Incluye: circuit breaker, retry con backoff exponencial, timeout, bulkhead, y fallback. Da ejemplos concretos de implementación en PHP o el lenguaje de tu elección.

7. **Plan de migración desde el monolito**: propón un plan de migración en fases para extraer los dos módulos más críticos (pagos y recomendaciones) del monolito. Define las fases, las dependencias entre ellas, cómo hacer las pruebas de cada fase, y los criterios de rollback si algo falla.

**Formato de salida**
Encabezados claros por sección. Diagramas de arquitectura en ASCII donde ayuden. Bloques de código para patrones de implementación. El plan de migración en formato de fases con hitos y criterios de éxito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Migrar de monolito a microservicios escalables de forma incremental',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            // 3. Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseñar un design system escalable para productos digitales en crecimiento',
                'description'      => 'Un design system que funciona para un producto pequeño puede convertirse en una carga cuando el equipo crece y el producto se diversifica. Aprende a diseñar un design system que escale: con una arquitectura de tokens sólida, componentes que soporten variaciones y temas, y procesos de gobernanza que permitan que múltiples equipos contribuyan sin romper la coherencia.',
                'prompt_content'   => <<<'EOT'
Actúa como design systems architect con experiencia en el diseño y escalado de sistemas de diseño para empresas tecnológicas en crecimiento. Ayúdame a construir un design system que pueda escalar con el producto y el equipo.

**El contexto**
La empresa tiene una app web y una app móvil con una base de componentes inconsistente. El equipo de diseño ha crecido a 8 personas y el de desarrollo a 40. Hay inconsistencias visuales entre productos, los desarrolladores toman decisiones de diseño ad-hoc, y cada nuevo feature reutiliza componentes de forma diferente. Necesito un design system que funcione como capa de abstracción compartida.

**Entregables que necesito**

1. **Arquitectura de tokens de diseño**: explica cómo diseñar un sistema de tokens de diseño escalable. Define los niveles de tokens (primitivos, semánticos, específicos de componente), cómo nombrarlos de forma consistente, cómo gestionarlos con herramientas como Figma Variables o Style Dictionary, y cómo sincronizarlos entre diseño y código.

2. **Taxonomía de componentes**: diseña la arquitectura de componentes del design system. Usa el modelo atómico (átomos, moléculas, organismos) u otro que prefieras, pero explica la lógica de clasificación. Define criterios para decidir qué pertenece al design system y qué es específico de un producto, y cómo manejar variaciones y estados de los componentes.

3. **Estrategia de multi-tema y dark mode**: explica cómo diseñar un sistema de componentes que soporte múltiples temas (incluyendo dark mode y potencialmente white-label para partners) desde el primer día. Incluye cómo estructurar los tokens semánticos para que el cambio de tema sea automático, y cómo testear que todos los componentes funcionan en todos los temas.

4. **Modelo de gobernanza del design system**: diseña el modelo de gobierno para que el design system escale con múltiples equipos contribuyendo. Incluye: quién es responsable del núcleo del sistema, cómo proponer y aprobar nuevos componentes, cómo manejar contribuciones de equipos de producto, cómo versionar y deprecar componentes, y cómo comunicar cambios a todos los equipos.

5. **Documentación del design system**: explica qué documentación debe tener cada componente para que sea realmente útil. Incluye: cuándo usar el componente, cuándo no usarlo, variaciones disponibles, comportamiento en responsive y accesibilidad, ejemplos de uso correcto e incorrecto, y cómo mantener la documentación actualizada.

6. **Métricas de adopción y salud**: define cómo medir si el design system está siendo adoptado y si mejora la eficiencia del equipo. Incluye métricas de cobertura (qué porcentaje de la UI usa componentes del sistema), velocidad de desarrollo, consistencia visual medida por auditorías periódicas, y satisfacción del equipo de desarrollo.

**Formato de salida**
Encabezados claros por sección. La arquitectura de tokens con ejemplos de nombres. La taxonomía de componentes con ejemplos concretos. El modelo de gobernanza en formato de proceso con pasos definidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un design system que soporte múltiples equipos y productos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 4. Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Escalar el stack tecnológico de ventas sin perder eficiencia del equipo comercial',
                'description'      => 'Añadir herramientas de ventas sin un diseño coherente genera silos de datos, flujos duplicados y comerciales que dedican más tiempo a actualizar sistemas que a vender. Aprende a diseñar un stack de sales technology escalable donde el CRM, las herramientas de engagement, el CPQ y el reporting trabajen como un sistema integrado. Consigue más ventas con el mismo equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como Revenue Operations (RevOps) expert con experiencia en diseño e implementación de stacks tecnológicos de ventas para equipos comerciales en crecimiento. Ayúdame a diseñar un stack de sales technology que escale con el equipo sin generar fricciones operativas.

**El contexto**
El equipo de ventas tiene 15 comerciales y usamos Salesforce como CRM, pero hay datos dispersos en hojas de Excel, los comerciales usan herramientas de prospección distintas entre ellos, y el proceso de generación de propuestas es manual y lento. El equipo va a crecer a 40 comerciales en 12 meses y el proceso actual no aguantará ese crecimiento.

**Entregables que necesito**

1. **Auditoría del proceso de ventas actual**: diseña una metodología para auditar el proceso de ventas e identificar los cuellos de botella y los puntos donde la tecnología puede ayudar más. Incluye las preguntas clave para entrevistar a los comerciales, cómo mapear el proceso actual en un diagrama de flujo, y cómo priorizar los problemas por impacto en el revenue.

2. **Arquitectura de un sales tech stack escalable**: propón una arquitectura de referencia para un stack de ventas que soporte el crecimiento de 15 a 40 comerciales. Organízalo en capas: generación y enriquecimiento de leads, prospección y outreach, gestión de pipeline (CRM), habilitación de ventas (sales enablement), generación de propuestas (CPQ), y reporting y analytics. Para cada capa indica qué tipo de herramientas encajan y qué criterios de selección aplicar.

3. **Diseño del proceso de datos en el CRM**: explica cómo estructurar el CRM para que los datos fluyan limpiamente a través del proceso de ventas. Incluye: diseño del modelo de datos (campos obligatorios por etapa, criterios de avance de stage), automatizaciones de limpieza de datos, integración bidireccional con herramientas de outreach, y cómo garantizar la higiene de datos con un equipo de 40 personas.

4. **Proceso de generación de propuestas escalable**: diseña un proceso para generar propuestas comerciales de forma rápida y consistente. Incluye: estructura de la propuesta, cómo usar plantillas dinámicas que se personalizan con datos del CRM, herramientas de CPQ recomendadas, y cómo medir el impacto del tiempo de respuesta de la propuesta en la tasa de cierre.

5. **Dashboard de ventas en tiempo real**: diseña el dashboard que necesita un director comercial para gestionar un equipo de 40 personas. Define qué métricas mostrar (pipeline por etapa, forecast de cierre, actividad de los comerciales, ratio de conversión por etapa, ciclo de venta), con qué granularidad, y cómo construirlo a partir de los datos del CRM.

6. **Plan de implementación en fases**: propón un plan de implementación del nuevo stack tecnológico en tres fases de 3 meses cada una. Para cada fase define qué se implementa, qué resultados se esperan, y cómo medir el éxito antes de pasar a la siguiente fase.

**Formato de salida**
Encabezados claros por sección. La arquitectura del stack en capas con ejemplos de herramientas. El diseño del dashboard con la lista de métricas y cómo calcularlas. El plan de implementación en formato de fases con hitos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar sales tech stack que soporte el crecimiento de 15 a 40 comerciales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 5. Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Definir el roadmap técnico de escalabilidad del producto',
                'description'      => 'Cuando un producto escala, los problemas técnicos que antes eran menores se vuelven bloqueos de negocio. El PM que entiende la escalabilidad puede comunicar el impacto de la deuda técnica en términos de negocio y priorizarla en el roadmap. Aprende a identificar los cuellos de botella de escalabilidad, comunicarlos a stakeholders no técnicos, y construir un roadmap técnico que equilibre velocidad de features y salud del sistema.',
                'prompt_content'   => <<<'EOT'
Actúa como Product Manager senior con experiencia en productos de alto tráfico y en la gestión del balance entre features de negocio y trabajo técnico de escalabilidad. Ayúdame a construir un roadmap técnico de escalabilidad que pueda presentar y defender ante stakeholders de negocio.

**El contexto**
El producto ha pasado de 10.000 a 200.000 usuarios activos en 18 meses. El equipo de ingeniería alerta sobre problemas de rendimiento y escalabilidad que aún no son visibles para los usuarios pero que podrían ser catastróficos si seguimos creciendo al mismo ritmo. El CEO quiere nuevas features para crecer más rápido, pero el CTO dice que necesitamos invertir en infraestructura antes. Soy el PM en medio de ese debate.

**Entregables que necesito**

1. **Framework para identificar y priorizar deuda técnica de escalabilidad**: diseña un proceso para trabajar con el equipo de ingeniería e identificar los principales riesgos de escalabilidad del sistema. Incluye: cómo hacer una sesión de technical risk mapping, cómo evaluar cada riesgo por probabilidad de ocurrencia e impacto en el negocio, y cómo traducir riesgos técnicos a términos de negocio que los stakeholders puedan entender.

2. **Cómo comunicar la escalabilidad a stakeholders no técnicos**: diseña una guía para presentar los problemas de escalabilidad al CEO, CFO o board. Incluye: cómo cuantificar el impacto económico de un problema de escalabilidad (tiempo de inactividad, coste de clientes perdidos, coste de emergencias técnicas), cómo usar analogías efectivas, y qué nivel de detalle técnico incluir y cuál omitir.

3. **Modelo de priorización de features vs. trabajo técnico**: propón un framework para decidir cuánto de la capacidad del equipo dedicar a features de negocio vs. mejoras técnicas de escalabilidad. Considera modelos como el 70/20/10 de Google, cómo ajustarlo según el estado de salud del sistema, y cómo comunicar esa distribución al equipo y a los stakeholders.

4. **Construcción del roadmap técnico de escalabilidad**: explica cómo construir un roadmap de iniciativas técnicas de escalabilidad para los próximos 12 meses. Define cómo agrupar las iniciativas por impacto (rendimiento, disponibilidad, costes de infraestructura), cómo secuenciarlas respetando dependencias técnicas, y cómo presentarlo al lado del roadmap de features sin que parezca que compiten.

5. **Métricas de salud técnica del producto**: define los indicadores de salud técnica que el PM debe monitorizar regularmente. Incluye: latencia de API (p50, p95, p99), tasa de errores, disponibilidad (SLO/SLA), coste de infraestructura por usuario activo, tiempo de despliegue, y frecuencia de incidentes. Explica cómo llevar estas métricas a las revisiones de producto.

6. **Cómo gestionar una crisis de escalabilidad**: diseña un protocolo de gestión de crisis cuando se produce un problema grave de escalabilidad en producción. Define los roles, la comunicación interna y externa, el proceso de triage técnico, cómo priorizar el trabajo de emergencia, y el postmortem que sigue a la resolución.

**Formato de salida**
Encabezados claros por sección. El framework de priorización en formato tabla con criterios de puntuación. El roadmap técnico en formato de tabla por trimestre. Las métricas con umbrales de alerta sugeridos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir y defender un roadmap técnico de escalabilidad ante el negocio',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 6. RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Escalar los sistemas de RRHH para organizaciones en rápido crecimiento',
                'description'      => 'Los procesos de RRHH diseñados para 20 personas no funcionan con 200. Aprende a diseñar sistemas y procesos de recursos humanos que escalen: desde el reclutamiento y onboarding hasta la evaluación de desempeño y la gestión de cultura. Evita los problemas más comunes que destruyen la cultura cuando una startup crece rápido.',
                'prompt_content'   => <<<'EOT'
Actúa como Chief People Officer con experiencia en el escalado de operaciones de recursos humanos en startups de alto crecimiento. Ayúdame a diseñar los sistemas y procesos de RRHH que permitan pasar de 50 a 200 empleados sin perder la cultura ni la eficiencia operativa.

**El contexto**
La empresa tiene 55 empleados y va a contratar 150 personas en los próximos 18 meses. Actualmente el proceso de selección es informal (el fundador entrevista a todos), no hay un proceso de onboarding estructurado, la evaluación de desempeño se hace una vez al año de forma subjetiva, y la cultura está bien pero es frágil porque depende de la pequeñez del equipo.

**Entregables que necesito**

1. **Sistema de reclutamiento escalable**: diseña un proceso de selección que pueda manejar 10-15 contrataciones simultáneas sin colapsar. Incluye: estructura del proceso de selección por perfil (técnico, comercial, operaciones), cómo estructurar las entrevistas para reducir el sesgo, cómo usar herramientas de ATS de forma efectiva, cómo mantener una candidate experience excelente a escala, y cómo medir la eficiencia del proceso (time-to-hire, costo por contratación, calidad del hire).

2. **Programa de onboarding estructurado**: diseña un programa de onboarding de 90 días que escale a múltiples contrataciones simultáneas. Incluye: onboarding general de empresa (cultura, valores, procesos) y onboarding específico de área. Define qué sucede en el día 1, semana 1, mes 1 y mes 3. Incluye cómo medir si el onboarding fue exitoso (tiempo para ser productivo, satisfacción del nuevo empleado).

3. **Sistema de evaluación de desempeño escalable**: diseña un proceso de evaluación de desempeño que sea justo, consistente y que pueda aplicarse a 200 personas sin consumir meses del equipo directivo. Incluye: frecuencia de revisiones, qué evaluar (competencias, OKRs, valores), cómo calibrar las evaluaciones entre managers, y cómo vincular el desempeño con la compensación de forma transparente.

4. **Preservación de la cultura en el crecimiento**: explica los principales riesgos para la cultura cuando una empresa crece rápido y cómo mitigarlos. Incluye: cómo codificar los valores sin que se vuelvan posters vacíos, cómo involucrar a los empleados más antiguos como embajadores de cultura, cómo diseñar rituales de equipo que escalen, y cómo hacer que los nuevos managers preserven la cultura.

5. **Estructura de RRHH para 200 personas**: propón cómo debe estar estructurada el área de RRHH cuando la empresa tenga 200 empleados. Define los roles necesarios (HR Business Partners, talent acquisition, people operations, L&D), cuándo contratar cada perfil, y qué herramientas de HRIS implementar en qué momento del crecimiento.

6. **Dashboard de people analytics**: diseña el dashboard de métricas de RRHH que el CPO debe revisar mensualmente. Incluye: tasa de rotación (voluntaria e involuntaria), time-to-fill por área, eNPS, coste por contratación, cobertura de posiciones críticas, y diversidad del equipo. Para cada métrica define cómo calcularla y qué benchmarks considerar.

**Formato de salida**
Encabezados claros por sección. El programa de onboarding en formato de timeline de 90 días. El sistema de evaluación con la estructura del proceso. Las métricas en tabla con definición y periodicidad de revisión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar sistemas de RRHH que soporten el crecimiento de 50 a 200 empleados',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 7. Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Diseñar sistemas financieros escalables para empresas en crecimiento',
                'description'      => 'Los sistemas y procesos financieros de una startup de 10 personas no sirven para una empresa de 200. Aprende a diseñar una arquitectura financiera escalable: desde la automatización de procesos contables hasta la implementación de controles internos y la construcción de un stack tecnológico que soporte la complejidad creciente. Prepara el área de finanzas para el crecimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como CFO con experiencia en el escalado de operaciones financieras en empresas de tecnología en crecimiento. Ayúdame a diseñar los sistemas, procesos y tecnología financiera que permitan escalar el área de finanzas de una startup a una empresa mediana sin perder control ni precisión.

**El contexto**
La empresa tiene 3 años, 4M€ de ARR y 80 empleados. El equipo financiero es de dos personas (un controller y un analista) que hacen todo manualmente en hojas de cálculo y un ERP básico. El negocio va a crecer rápido (objetivo de 15M€ de ARR en 2 años) y el modelo de negocio se está volviendo más complejo: nuevas líneas de producto, expansión internacional y una ronda de inversión planificada.

**Entregables que necesito**

1. **Arquitectura financiera escalable**: diseña la estructura de sistemas financieros que la empresa necesita para escalar. Organízalo en capas: contabilidad y ERP, facturación y cobros (especialmente para modelos SaaS con suscripciones), tesorería y pagos, planificación financiera (FP&A), reporting y BI. Para cada capa indica qué tipo de herramienta se necesita en qué etapa de crecimiento.

2. **Automatización del proceso de cierre mensual**: diseña un proceso de cierre mensual que pueda ejecutarse en 3-5 días en vez de 2-3 semanas. Incluye: qué tareas automatizar (conciliaciones, accruals recurrentes, generación de reportes), qué herramientas usar, cómo estructurar el proceso para que sea paralelo en vez de secuencial, y cómo garantizar la calidad con controles automáticos.

3. **Sistema de control interno escalable**: diseña un framework de controles internos que proteja a la empresa a medida que crece. Incluye: controles preventivos y detectivos clave para el ciclo de ingresos, el ciclo de gastos y la tesorería, cómo implementar la segregación de funciones sin bloquear la agilidad operativa, y cómo preparar la empresa para una auditoría externa.

4. **Stack tecnológico financiero para una scaleup**: propón un stack de herramientas financieras para una empresa en esta etapa. Para cada herramienta (ERP, facturación, gestión de gastos, FP&A, reporting) da opciones con sus pros y contras, y una recomendación según el tamaño y modelo de negocio. Incluye cómo integrar las herramientas entre sí para evitar reconciliaciones manuales.

5. **Modelo de FP&A escalable**: diseña un proceso de planificación financiera (FP&A) que funcione a escala. Incluye: estructura del modelo financiero, proceso de presupuestación (cuándo, con quién, cómo), ciclo de forecasting mensual, cómo conectar el modelo financiero con los datos operativos del negocio en tiempo real, y cómo presentar los resultados a la junta directiva.

6. **Plan de estructuración del equipo de finanzas**: propón cómo debe crecer el equipo financiero a medida que la empresa escala de 4M€ a 15M€ de ARR. Define qué perfiles contratar en qué momento, cómo organizar el área entre operaciones financieras, FP&A y contabilidad, y cuándo tiene sentido externalizar vs. internalizar.

**Formato de salida**
Encabezados claros por sección. La arquitectura financiera en formato de capas con herramientas recomendadas. El proceso de cierre mensual en formato de checklist con responsables. El plan de crecimiento del equipo en formato de tabla por etapa de ARR.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Escalar sistemas financieros y operaciones de finanzas para el crecimiento',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 8. Legal
            [
                'profession_id'    => 8,
                'title'            => 'Diseñar frameworks legales escalables para empresas en fase de crecimiento',
                'description'      => 'Las estructuras legales que funcionan para una startup de 10 personas crean cuellos de botella en una empresa de 100. Aprende a diseñar frameworks legales escalables: desde la estandarización de contratos hasta la gestión del riesgo legal en múltiples jurisdicciones. Reduce el tiempo que el negocio espera aprobación legal sin incrementar el riesgo.',
                'prompt_content'   => <<<'EOT'
Actúa como General Counsel con experiencia en el escalado de operaciones legales en empresas tecnológicas de rápido crecimiento. Ayúdame a diseñar un framework legal escalable que permita al negocio crecer más rápido sin asumir riesgos legales innecesarios.

**El contexto**
La empresa tiene un abogado interno (yo) que cubre toda la función legal: contratos comerciales, propiedad intelectual, privacidad, laboral, y soporte a nuevas iniciativas de negocio. El equipo va a crecer de 80 a 250 personas en 2 años, hay planes de expansión a 3 países nuevos, y el número de contratos que el negocio firma mensualmente ya es imposible de revisar uno a uno. Necesito escalar la función legal.

**Entregables que necesito**

1. **Estandarización del portfolio de contratos**: diseña un proceso para estandarizar los contratos más frecuentes de la empresa. Incluye: cómo hacer el inventario de contratos actuales, criterios para decidir qué contratos estandarizar primero (por frecuencia y valor en riesgo), cómo diseñar contratos que el equipo comercial pueda usar sin revisión legal para casos estándar, y cómo definir los umbrales que sí requieren revisión legal.

2. **Sistema de self-service legal para el negocio**: diseña un portal interno de self-service legal. Incluye: qué tipos de solicitudes puede resolver el negocio solo (firma de NDAs estándar, contratos menores de cierto importe, consultas de privacidad básicas), cómo presentar la información para que sea comprensible para no abogados, y cómo gestionar excepciones que sí requieren revisión legal.

3. **Proceso de gestión de riesgos legales a escala**: diseña un framework para identificar, evaluar y gestionar los riesgos legales de una empresa en crecimiento. Incluye: cómo hacer un mapa de riesgos legales por área (comercial, laboral, privacidad, PI, regulatorio), cómo priorizar la gestión de cada riesgo, y cómo reportar los riesgos legales al consejo de forma efectiva.

4. **Expansión internacional: framework legal**: diseña un framework para gestionar la expansión a nuevos países desde una perspectiva legal. Incluye: qué aspectos legales evaluar antes de entrar a un nuevo mercado (estructura societaria, privacidad, laboral, regulaciones sectoriales), cómo decidir entre abogados locales externos vs. contratar in-house, y cómo mantener consistencia en los estándares legales de la empresa globalmente.

5. **Estructura del equipo legal escalable**: propón cómo debe crecer el equipo legal a medida que la empresa escala. Define qué perfiles contratar en qué momento (segundo abogado in-house, paralegals, especialistas por área), cuándo usar firmas externas vs. generalistas in-house, y cómo organizar el equipo para cubrir las distintas áreas legales.

6. **Métricas de la función legal**: define los KPIs para medir la eficiencia y el impacto de la función legal. Incluye: tiempo de respuesta a solicitudes internas, porcentaje de contratos resueltos sin revisión legal, coste legal por empleado, número de litigios activos, y satisfacción del cliente interno (el negocio). Explica cómo medir cada métrica.

**Formato de salida**
Encabezados claros por sección. El framework de gestión de riesgos en formato tabla con criterios de priorización. El proceso de self-service legal con ejemplos de qué solicitudes resuelve cada nivel. El plan de crecimiento del equipo en formato de fases.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Escalar la función legal para acompañar el crecimiento de la empresa',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            // 9. Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Escalar el soporte y customer success de 100 a 10.000 clientes',
                'description'      => 'El modelo de customer success que funciona con 100 clientes se rompe con 1.000. Aprende a diseñar un modelo escalable de CS que combine atención personalizada para cuentas estratégicas con soporte digital y self-service para el segmento de menor valor. Construye una operación que crezca sin que los costes de soporte crezcan de forma lineal.',
                'prompt_content'   => <<<'EOT'
Actúa como VP of Customer Success con experiencia en el diseño y escalado de operaciones de CS en empresas SaaS de alto crecimiento. Ayúdame a diseñar un modelo de customer success que escale de 100 a 10.000 clientes sin que los costes de operación crezcan de forma lineal.

**El contexto**
Tenemos 400 clientes, un equipo de CS de 6 personas y un ratio de 67 clientes por CSM. El modelo actual es high-touch para todos los clientes, lo que empieza a ser insostenible. El ARR por cliente varía enormemente: el 20 % de los clientes genera el 80 % del ARR. Necesito un modelo diferenciado que sea sostenible a escala.

**Entregables que necesito**

1. **Modelo de segmentación de clientes para CS**: diseña un modelo para segmentar la cartera de clientes según el nivel de atención que necesitan y pueden justificar económicamente. Define los segmentos (enterprise, mid-market, SMB, long-tail) con criterios de clasificación (ARR, potencial de expansión, complejidad de uso), el modelo de atención para cada segmento (ratio de clientes por CSM, canales de comunicación, frecuencia de revisiones) y cómo migrar clientes entre segmentos.

2. **Modelo de CS tech-touch y digital-touch**: diseña los programas de customer success digitales para los segmentos de menor valor que no justifican atención personalizada. Incluye: secuencias de emails automáticos de onboarding y adopción por comportamiento del cliente en el producto (product-led CS), webinars grupales de formación, comunidad de usuarios, y programas de health score que alertan cuando un cliente de self-service necesita intervención humana.

3. **Sistema de customer health score**: diseña un modelo de health score para predecir el riesgo de churn de cada cliente. Define qué variables incluir (uso del producto, NPS, número de usuarios activos, progreso en el onboarding, tickets de soporte, interacciones con el equipo de CS), cómo ponderarlas, cómo automatizar la generación del score, y cómo usarlo para priorizar el trabajo del equipo de CS.

4. **Proceso de onboarding escalable**: diseña un proceso de onboarding de clientes que escale a 200 nuevos clientes por mes. Incluye: qué parte del onboarding puede ser automatizada (emails, in-app guidance, videos), qué parte requiere atención humana, cómo estructurar el onboarding por segmento de cliente, y cómo medir el éxito del onboarding (time-to-value, activación en los primeros 30 días).

5. **Estructura del equipo de CS escalable**: propón cómo debe crecer el equipo de CS a medida que la cartera escala. Define qué roles añadir en qué momento (CS managers especializados por segmento, equipo de soporte, operations manager, CS engineer para automatización), y cómo organizar el equipo para que los ratios de atención sean sostenibles.

6. **Métricas de eficiencia del equipo de CS**: define los KPIs que miden tanto la calidad como la eficiencia de las operaciones de CS. Incluye: gross revenue retention, net revenue retention, churn por segmento, NPS por segmento, time-to-value, coste de CS por cliente, y ratio de clientes por CSM. Define los benchmarks de referencia para SaaS.

**Formato de salida**
Encabezados claros por sección. El modelo de segmentación en formato tabla. El health score con las variables, ponderación y escala de riesgo. Las métricas con definición, fórmula de cálculo y benchmarks de referencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar modelo de CS escalable con segmentación y automatización por tier de cliente',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 10. Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Escalar un negocio freelance de servicios sin trabajar más horas',
                'description'      => 'La trampa del freelancer es que el crecimiento significa más horas de trabajo, no más ingresos por hora. Aprende a diseñar sistemas y procesos que te permitan escalar tu negocio sin escalar tu tiempo: productizando tus servicios, delegando, automatizando y creando fuentes de ingresos que no dependan de tu presencia directa. Pasa de intercambiar horas por dinero a construir un negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como mentor de negocios especializado en el escalado de negocios de servicios profesionales. Ayúdame a diseñar un plan para escalar mi negocio freelance de forma que los ingresos crezcan sin que mis horas de trabajo crezcan de forma proporcional.

**El contexto**
Llevo 4 años como consultor de marketing digital freelance. Tengo ingresos estables de 5.000€/mes trabajando unas 50 horas semanales. He llegado al límite: no puedo aceptar más clientes sin trabajar más horas, y no quiero trabajar más horas. Quiero llegar a 10.000€/mes en los próximos 18 meses sin duplicar mi carga de trabajo.

**Entregables que necesito**

1. **Diagnóstico del negocio actual**: diseña un ejercicio de diagnóstico para entender dónde va el tiempo actualmente y dónde está el potencial de mejora. Incluye: cómo hacer un análisis de uso del tiempo por tipo de actividad (cliente directo, administración, ventas, formación, descanso), cómo calcular la tarifa efectiva por hora de cada cliente, cómo identificar qué clientes y servicios son más rentables, y cuáles consumen más tiempo de lo que generan.

2. **Productización de servicios**: explica cómo convertir servicios de consultoría a medida en paquetes de servicios estandarizados con precio fijo. Define qué servicios son buenos candidatos para productizar, cómo estructurar un paquete (qué incluye, qué no incluye, qué entregables, en qué plazo), cómo fijar el precio basándote en el valor para el cliente en vez del tiempo empleado, y cómo comunicar el paquete en el mercado.

3. **Sistemas y automatización de operaciones**: diseña un sistema para automatizar las tareas administrativas y operativas que no generan valor directo. Incluye: gestión de propuestas y contratos (herramientas para firmar digitalmente y cobrar automáticamente), facturación y cobros automáticos, seguimiento de proyectos, y onboarding de nuevos clientes con material estándar. El objetivo es liberar 10 horas semanales de tareas administrativas.

4. **Estrategia de delegación y subcontratación**: diseña un plan para delegar parte del trabajo a otros profesionales. Incluye: qué tipos de trabajo se pueden delegar (ejecución de tareas repetibles, investigación, producción de contenido), cómo encontrar y vetter a los subcontratistas adecuados, cómo gestionar la calidad del trabajo delegado, y cómo fijar precios que cubran el coste de la delegación y mantengan margen.

5. **Diversificación de ingresos hacia modelos escalables**: propón 3-4 fuentes de ingresos adicionales que no dependan de tu tiempo de forma directa. Por ejemplo: cursos o formaciones grabadas, plantillas o herramientas vendidas digitalmente, retainers de asesoría de bajo esfuerzo, o un modelo de agencia con equipo. Para cada una explica el esfuerzo de implementación, el potencial de ingresos, y cómo encaja con el perfil de consultor de marketing digital.

6. **Plan de 18 meses hacia los 10.000€/mes**: construye un plan concreto mes a mes (o por trimestre) para alcanzar el objetivo de ingresos. Define qué cambios implementar en qué orden, qué resultados esperar en cada fase, y cómo saber si estás en el camino correcto. Incluye hitos de decisión: puntos donde evaluar si seguir con la misma estrategia o ajustar.

**Formato de salida**
Encabezados claros por sección. El diagnóstico con las preguntas o el ejercicio específico. Los paquetes de servicios con un ejemplo concreto de estructura. El plan de 18 meses en formato de tabla por trimestre con objetivos de ingresos y acciones clave.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar sistema para escalar ingresos freelance sin aumentar horas de trabajo',
                'vote_score'       => 50,
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
