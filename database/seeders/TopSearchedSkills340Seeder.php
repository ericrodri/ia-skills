<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills340Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Migración del stack de marketing al cloud',
                'description'       => 'Guía práctica para trasladar las herramientas de marketing tradicionales a soluciones cloud modernas. Cubre selección de plataformas, integración de datos y optimización de costos para equipos de marketing digital.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor experto en transformación digital con especialización en arquitecturas cloud para equipos de marketing. Tu misión es ayudarme a planificar y ejecutar la migración de nuestro stack de marketing desde herramientas on-premise o soluciones legacy hacia plataformas cloud modernas.

**Contexto de la situación actual:**
Nuestro equipo de marketing utiliza una combinación de herramientas dispersas: bases de datos de contactos locales, hojas de cálculo para seguimiento de campañas, servidores propios para envío de email marketing y plataformas desconectadas entre sí. El resultado es silos de datos, dificultad para medir el ROI de forma consolidada y altos costos de mantenimiento de infraestructura.

**Fase 1 – Inventario y diagnóstico (semana 1-2):**
Ayúdame a crear un inventario completo de todas las herramientas actuales. Para cada herramienta necesito identificar: volumen de datos que gestiona, usuarios internos que la utilizan, integraciones existentes con otras plataformas, costo mensual actual y nivel de criticidad para el negocio. Con este inventario, genera una matriz de priorización que ordene las migraciones por impacto vs. complejidad.

**Fase 2 – Selección de plataformas cloud (semana 3-4):**
Evalúa las siguientes categorías de herramientas cloud y recomienda opciones concretas para cada una: CRM en la nube (HubSpot, Salesforce, Pipedrive), plataforma de email marketing y automatización (ActiveCampaign, Klaviyo, Marketo), herramienta de analítica unificada (Google Analytics 4 + BigQuery, Mixpanel, Amplitude), CDP (Customer Data Platform) para unificar datos de cliente, y plataforma de gestión de contenidos y activos digitales (DAM). Para cada recomendación incluye: criterios de selección, estimación de costos, tiempo de implementación y complejidad de migración de datos.

**Fase 3 – Plan de migración de datos:**
El mayor riesgo de una migración cloud es la pérdida o corrupción de datos históricos. Diseña un plan de migración que incluya: estrategia de extracción de datos desde sistemas legacy, limpieza y normalización de datos antes de la migración, validación de integridad post-migración, plan de rollback en caso de fallos y periodo de operación en paralelo (sistemas antiguo y nuevo funcionando simultáneamente). Define también la estrategia de backup incremental durante la transición.

**Fase 4 – Integración y automatización:**
Una de las principales ventajas del cloud es la capacidad de integración mediante APIs y webhooks. Diseña la arquitectura de integración entre las plataformas seleccionadas: qué datos fluyen de qué sistema a cuál, en qué dirección y con qué frecuencia. Identifica los flujos de automatización prioritarios: sincronización de contactos, actualización de scores de leads, disparo de campañas basadas en comportamiento y reporte consolidado de campañas.

**Fase 5 – Optimización de costos cloud:**
El modelo de costos cloud (pago por uso) puede generar sorpresas si no se gestiona correctamente. Establece: presupuesto mensual máximo por plataforma, alertas de consumo, revisión trimestral de licencias activas vs. utilizadas, y criterios para escalar o reducir el plan contratado según el crecimiento del equipo.

**Formato de entrega esperado:**
- Roadmap visual de migración con fases, hitos y responsables
- Matriz de selección de herramientas con puntuaciones comparativas
- Plan de comunicación interna para gestionar el cambio
- Métricas de éxito de la migración (tiempo de consolidación de datos, reducción de costos, adopción del equipo)
- Lista de riesgos identificados y planes de mitigación

Comienza con el diagnóstico de la situación actual y luego avanza fase por fase según mis respuestas.
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Planificación de migración de herramientas de marketing al cloud',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Diseño de arquitectura cloud-native para aplicaciones escalables',
                'description'       => 'Framework completo para diseñar aplicaciones cloud-native desde cero o migrar aplicaciones existentes. Cubre microservicios, contenedores, orquestación y patrones de escalabilidad automática para equipos de desarrollo.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un arquitecto de software senior especializado en sistemas cloud-native con experiencia en AWS, GCP y Azure. Necesito tu ayuda para diseñar (o rediseñar) nuestra aplicación siguiendo principios cloud-native modernos que nos permitan escalar de forma eficiente y mantener alta disponibilidad.

**Contexto del proyecto:**
Tenemos una aplicación web que actualmente corre como un monolito en servidores virtuales. El crecimiento de usuarios está generando problemas de rendimiento en momentos de pico y el tiempo de despliegue de nuevas funcionalidades es de 2-3 semanas debido a la falta de CI/CD automatizado. Queremos modernizar la arquitectura para mejorar la escalabilidad, reducir el time-to-market y optimizar los costos de infraestructura.

**Principios cloud-native que debes aplicar:**
Los doce factores (12-factor app methodology) deben guiar el diseño: código base único en repositorio de versiones, gestión de dependencias declarativa, configuración en variables de entorno, servicios de respaldo tratados como recursos adjuntos, separación estricta entre build, release y run, procesos sin estado, binding de puertos para exposición de servicios, escalado mediante procesos adicionales, disposabilidad con arranque rápido y apagado elegante, paridad entre entornos, logs como streams de eventos y gestión de tareas administrativas como procesos de única ejecución.

**Diseño de arquitectura de microservicios:**
Ayúdame a descomponer el monolito en microservicios usando el patrón de Domain-Driven Design (DDD). Para cada servicio define: bounded context y responsabilidades únicas, API contract (REST o gRPC), estrategia de base de datos (database-per-service), eventos de dominio que emite y consume, y dependencias con otros servicios. Diseña también el API Gateway que actuará como punto de entrada único y el mecanismo de service discovery.

**Estrategia de contenedores y orquestación:**
Define la estrategia de containerización con Docker: estructura del Dockerfile para cada servicio, imagen base optimizada, capas de caché, multi-stage builds para reducir tamaño de imagen final y escaneo de vulnerabilidades en la pipeline de CI. Para la orquestación con Kubernetes: estructura de namespaces por entorno, configuración de Deployments con rolling updates, Horizontal Pod Autoscaler (HPA) basado en métricas de CPU y custom metrics, PodDisruptionBudgets para mantenimiento sin downtime y Network Policies para segmentación de red entre servicios.

**Patrones de resiliencia y tolerancia a fallos:**
Implementa los siguientes patrones: Circuit Breaker para prevenir cascada de fallos entre servicios, Retry con backoff exponencial para llamadas fallidas, Bulkhead para aislar pools de recursos críticos, Timeout en todas las llamadas síncronas entre servicios, y Health checks (liveness y readiness probes) para que Kubernetes gestione el ciclo de vida de los pods correctamente. Define también la estrategia de observabilidad: logs estructurados en formato JSON, tracing distribuido con OpenTelemetry, métricas con Prometheus y dashboards en Grafana.

**Estrategia serverless para cargas variables:**
Identifica los componentes de la aplicación que se beneficiarían de una arquitectura serverless (Functions as a Service): procesamiento de eventos asíncronos, tareas scheduled (cron jobs), webhooks de terceros y generación de reportes bajo demanda. Evalúa cuándo usar serverless vs. contenedores según el patrón de uso y el costo.

**Formato de entrega:**
- Diagrama de arquitectura general del sistema
- Tabla de microservicios con responsabilidades, APIs y dependencias
- Pipeline de CI/CD recomendada con herramientas concretas
- Checklist de seguridad cloud-native (IAM, secrets management, network policies)
- Estimación de costos de infraestructura en cloud por escenario de carga
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño de arquitectura de microservicios y despliegue cloud-native',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Gestión de sistemas de diseño en entornos cloud colaborativos',
                'description'       => 'Estrategia para centralizar y gestionar sistemas de diseño en plataformas cloud, facilitando la colaboración entre diseñadores, desarrolladores y stakeholders de producto en equipos distribuidos.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un design system lead con experiencia en organizaciones de producto de escala media y grande. Necesito tu ayuda para diseñar la estrategia de gestión de nuestro sistema de diseño en un entorno cloud colaborativo que soporte equipos distribuidos geográficamente.

**Situación actual y problemas que resolver:**
Nuestro equipo de diseño trabaja con una combinación de archivos Figma locales, componentes duplicados en varios proyectos y una biblioteca de componentes de código desincronizada con los diseños. Los desarrolladores frecuentemente implementan componentes que no coinciden con los diseños aprobados, y los stakeholders tienen dificultades para revisar y aprobar diseños antes del desarrollo. Necesitamos un sistema centralizado y versionado.

**Arquitectura del sistema de diseño en cloud:**
Define la estructura organizacional del sistema de diseño en Figma o herramienta equivalente: biblioteca de foundations (colores, tipografía, espaciado, iconos, sombras), biblioteca de componentes base (átomos y moléculas de Atomic Design), biblioteca de patrones (organismos y templates), y biblioteca de pantallas y flujos completos. Para cada biblioteca establece: quién tiene permisos de edición, quién de visualización, el proceso de versionado semántico y la estrategia de deprecación de componentes obsoletos.

**Sincronización diseño-código:**
El principal dolor en equipos de producto es la divergencia entre diseños y código. Diseña el proceso de sincronización usando herramientas como Storybook para documentar componentes de código, tokens de diseño gestionados con Style Dictionary y exportados a CSS custom properties, JSON o variables de plataforma nativa, y GitHub como fuente de verdad para los tokens. Define el workflow: quién actualiza los tokens de diseño, cómo se propaga el cambio al código, cómo se valida que el componente de código coincide con el de Figma.

**Proceso de contribución y revisión:**
Para que el sistema de diseño escale, necesita un proceso claro de contribución: cómo un diseñador propone un nuevo componente, quién lo revisa (design review), cómo se valida su utilidad (¿resuelve un problema recurrente o es específico de un flujo?), cómo se documenta (uso correcto, variantes, estados, accesibilidad), y cómo se comunica su disponibilidad al equipo. Diseña también el proceso de auditoría periódica para detectar componentes no utilizados o duplicados.

**Documentación y onboarding:**
Un sistema de diseño sin documentación es una colección de componentes sin contexto. Crea la estructura de documentación necesaria: principios de diseño y criterios de decisión, guía de uso de cada componente con ejemplos de uso correcto e incorrecto, guía de accesibilidad (contrastes WCAG, navegación por teclado, lectores de pantalla), y guía de onboarding para nuevos miembros del equipo de diseño y desarrollo.

**Métricas de salud del sistema de diseño:**
Define las métricas que usarás para medir el éxito y la adopción del sistema: cobertura de componentes (porcentaje de pantallas de producto que usan componentes del sistema), consistencia (número de variaciones no estándar encontradas en auditorías), velocidad de diseño (tiempo promedio para diseñar una nueva pantalla usando el sistema vs. desde cero), y satisfacción del equipo (NPS interno del sistema de diseño).

**Formato de entrega esperado:**
- Estructura recomendada de bibliotecas en Figma con jerarquía de permisos
- Diagrama del workflow de contribución y revisión
- Plantilla de documentación de componente
- Dashboard de métricas de adopción del sistema de diseño
- Plan de migración de diseños existentes al nuevo sistema
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Centralización y gestión de sistemas de diseño en cloud para equipos distribuidos',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estrategia de adopción de CRM cloud para equipos de ventas',
                'description'       => 'Plan de implementación y adopción de un CRM cloud en un equipo de ventas. Incluye selección de herramienta, migración de datos, configuración de procesos y estrategia de cambio para maximizar la adopción por parte del equipo.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor de operaciones de ventas (Sales Ops) con experiencia en implementación de CRM cloud en equipos de distintos tamaños. Necesito tu ayuda para planificar y ejecutar la adopción de un CRM cloud en nuestro equipo comercial, pasando de hojas de cálculo y notas dispersas a una plataforma unificada.

**Contexto del equipo:**
Somos un equipo de ventas de 15 personas (8 ejecutivos de cuenta, 4 SDRs, 2 Account Managers y un Sales Manager). Actualmente gestionamos el pipeline en hojas de Google Sheets compartidas, los emails de prospección desde Gmail personal de cada vendedor y el seguimiento de clientes en notas individuales. Estamos perdiendo oportunidades por falta de visibilidad y contexto compartido.

**Fase 1 – Selección del CRM cloud:**
Evalúa las tres opciones más comunes para equipos de nuestro tamaño: HubSpot CRM (con Sales Hub), Salesforce Essentials y Pipedrive. Para cada uno proporciona: precio por usuario al mes en el nivel recomendado para nuestro caso, funcionalidades principales de gestión de pipeline, capacidades de automatización incluidas, integraciones nativas con Gmail/Outlook y herramientas de prospección, curva de aprendizaje estimada y tiempo de implementación. Genera una tabla comparativa y emite una recomendación justificada.

**Fase 2 – Configuración del CRM para nuestro proceso de ventas:**
Una vez seleccionado el CRM, ayúdame a configurarlo para reflejar nuestro proceso de ventas real. Define: las etapas del pipeline con criterios de entrada y salida para cada una, los campos personalizados necesarios para calificar oportunidades (tamaño de empresa, industria, presupuesto, autoridad de compra, necesidad y timing), las vistas y reportes que necesita el Sales Manager para el forecast semanal, y las automatizaciones de seguimiento (recordatorios, emails automáticos en determinadas etapas, alertas de deals sin actividad).

**Fase 3 – Migración de datos históricos:**
La migración de datos es crítica para no perder el historial comercial. Diseña el plan de migración: exportación de datos desde hojas de cálculo (leads, contactos, empresas, oportunidades históricas), limpieza y deduplicación de registros antes de importar, mapeo de campos entre la hoja de cálculo y el CRM, importación en etapas (primero cuentas, luego contactos, luego oportunidades) y validación post-migración con el equipo.

**Fase 4 – Estrategia de cambio y adopción:**
La mayor causa de fracaso en implementaciones de CRM es la resistencia del equipo. Diseña la estrategia de gestión del cambio: comunicación al equipo explicando el porqué del cambio y los beneficios concretos para cada rol, formación por roles (los SDRs necesitan aprender a registrar actividades de prospección; los AEs, a gestionar oportunidades; el Manager, a hacer forecast), gamificación de la adopción (métricas de uso visibles, reconocimiento público del uso correcto), y un periodo de transición de 30 días con soporte dedicado.

**Fase 5 – Métricas de adopción y ROI:**
Define cómo medirás el éxito de la implementación: porcentaje del equipo que registra actividades diariamente, cobertura de datos del pipeline (% de oportunidades con todos los campos obligatorios completos), velocidad del ciclo de ventas antes y después, y forecast accuracy comparado con el periodo anterior. Establece un dashboard de adopción visible para todo el equipo.

**Formato de entrega:**
- Tabla comparativa de CRMs con recomendación
- Configuración recomendada de pipeline y campos
- Cronograma de implementación de 8 semanas con hitos
- Plan de formación por roles
- Dashboard de métricas de adopción y ROI
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementación y adopción de CRM cloud en equipos comerciales',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de producto para plataformas multi-cloud',
                'description'       => 'Framework para Product Managers que gestionan productos SaaS en infraestructura multi-cloud. Cubre decisiones de arquitectura con impacto en producto, gestión de resiliencia, cumplimiento por región y estrategia de vendor lock-in.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un Product Manager senior con experiencia en productos SaaS de infraestructura crítica desplegados en entornos multi-cloud. Necesito tu ayuda para definir la estrategia de producto considerando las implicaciones de nuestra arquitectura multi-cloud actual.

**Contexto del producto:**
Somos una plataforma SaaS B2B con clientes en Europa, Norteamérica y Latinoamérica. Actualmente operamos principalmente en AWS, pero algunos clientes enterprise nos exigen poder desplegar en su propio cloud (GCP o Azure) por políticas internas de IT o por requisitos regulatorios de soberanía de datos. Además, queremos reducir el riesgo de dependencia de un único proveedor cloud.

**Parte 1 – Implicaciones de producto de la estrategia multi-cloud:**
Una estrategia multi-cloud no es solo una decisión de infraestructura: tiene implicaciones directas en el roadmap de producto. Ayúdame a identificar: qué funcionalidades del producto dependen de servicios propietarios de un cloud específico (por ejemplo, AWS Rekognition para visión artificial, o Azure OpenAI), cómo abstraer estas dependencias para facilitar la portabilidad, y cuál es el trade-off entre usar servicios managed del cloud (más rápidos de implementar, menor mantenimiento) vs. soluciones cloud-agnostic (mayor portabilidad, mayor complejidad operativa).

**Parte 2 – Estrategia de deployment por región y regulación:**
Los requisitos regulatorios varían significativamente por geografía. Diseña la matriz de deployment considerando: GDPR en Europa (datos de ciudadanos europeos deben permanecer en suelo europeo), LGPD en Brasil, CCPA en California y posibles requisitos de Data Residency de clientes enterprise. Define la arquitectura de múltiples regiones y cómo esto afecta la experiencia del usuario (latencia, consistencia de datos entre regiones, sincronización).

**Parte 3 – Resiliencia como feature de producto:**
La resiliencia de la infraestructura es un diferenciador competitivo en el segmento enterprise. Ayúdame a convertir las capacidades técnicas de resiliencia multi-cloud en propuestas de valor para el cliente: SLA garantizado por región, failover automático entre clouds en caso de outage de un proveedor, disaster recovery con RTO (Recovery Time Objective) y RPO (Recovery Point Objective) definidos, y transparencia de estado de servicio mediante status page en tiempo real.

**Parte 4 – Pricing y packaging considerando el modelo multi-cloud:**
El modelo de costos multi-cloud afecta directamente el pricing del producto. Define: cómo repercutir el sobrecosto de operar en múltiples clouds sin sacrificar márgenes, si el deployment en cloud específico del cliente debe ser un add-on premium o incluirse en determinados planes, y cómo comunicar la propuesta de valor de multi-cloud en la página de pricing y en las conversaciones comerciales con prospects enterprise.

**Parte 5 – Roadmap de capacidades multi-cloud:**
Prioriza las iniciativas de producto relacionadas con multi-cloud usando el framework RICE (Reach, Impact, Confidence, Effort): soporte oficial para GCP y Azure además de AWS, herramienta de auto-selección del cloud óptimo para cada carga de trabajo, panel de control de costos multi-cloud para el cliente, y certificaciones de cumplimiento por región (ISO 27001, SOC 2, ENS).

**Formato de entrega esperado:**
- Mapa de dependencias de servicios cloud propietarios vs. cloud-agnostic
- Matriz de deployment por región con requisitos regulatorios
- Propuesta de valor de resiliencia multi-cloud para ventas enterprise
- Estructura de pricing recomendada para deployment multi-cloud
- Roadmap priorizado de capacidades multi-cloud para los próximos 12 meses
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Estrategia de producto para plataformas SaaS en infraestructura multi-cloud',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Implementación de plataformas HR en la nube para equipos en crecimiento',
                'description'       => 'Plan de adopción de un HRIS cloud (Human Resources Information System) para centralizar la gestión del talento, la nómina, el desempeño y el desarrollo profesional en organizaciones que escalan rápidamente.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor de transformación digital en Recursos Humanos con experiencia en implementación de sistemas HRIS cloud en organizaciones de entre 50 y 500 empleados. Necesito tu ayuda para seleccionar e implementar una plataforma HR en la nube que centralice todos nuestros procesos de gestión del talento.

**Situación actual:**
Somos una empresa de 120 empleados en crecimiento acelerado. Actualmente gestionamos la nómina con un software local obsoleto, los contratos en papel almacenados físicamente, las vacaciones mediante emails y hojas de cálculo, y las evaluaciones de desempeño de forma manual cada año. La falta de un sistema centralizado genera errores frecuentes, consume tiempo del equipo de RRHH y dificulta la toma de decisiones basada en datos de personas.

**Fase 1 – Selección del HRIS cloud:**
Evalúa las siguientes plataformas para nuestro perfil (empresa mediana, sector tecnológico, presencia en España y Latinoamérica): BambooHR, Factorial HR, Personio, Workday (edición mediana empresa) y HiBob. Para cada una valora: módulos disponibles (nómina, control de presencia, gestión de talento, onboarding, formación), adaptación a la legislación laboral española y latinoamericana, precio por empleado al mes, facilidad de implementación y calidad del soporte. Emite una recomendación con justificación.

**Fase 2 – Módulos prioritarios de implementación:**
Define el orden de implementación de módulos según el impacto en la operación: primero los básicos (alta y baja de empleados, gestión de documentos, control de presencia y vacaciones), luego los de gestión del talento (evaluaciones de desempeño, OKRs individuales, planes de desarrollo profesional) y finalmente los avanzados (analítica de personas, gestión de formación, portal del empleado con autoservicio). Para cada módulo define el tiempo de configuración, los datos a migrar y los stakeholders internos responsables.

**Fase 3 – Migración de datos de empleados:**
La migración de datos es sensible porque implica información personal de los empleados. Diseña el plan respetando el RGPD: inventario de datos a migrar (datos personales, historial de empleo, documentos firmados, registros de formación), formato de exportación desde sistemas actuales, validación legal del tratamiento de datos en el nuevo sistema, consentimiento de empleados según sea necesario, y plan de auditoría de acceso a datos personales en el nuevo sistema.

**Fase 4 – Automatización de procesos de RRHH:**
Identifica los procesos más repetitivos del equipo de RRHH que pueden automatizarse en el nuevo sistema cloud: flujo automático de onboarding digital al contratar a un nuevo empleado (firma de documentos, acceso a sistemas, asignación de buddy), recordatorios automáticos de evaluaciones de desempeño, notificaciones de vencimiento de contratos temporales, alertas de aniversarios de empleados y gestión automática de solicitudes de vacaciones con cadena de aprobación.

**Fase 5 – People Analytics y toma de decisiones basada en datos:**
Una de las mayores ventajas del HRIS cloud es la analítica de personas. Diseña el dashboard de métricas que el equipo de RRHH y la dirección necesitan: tasa de rotación por departamento y por rango de antigüedad, tiempo promedio de cobertura de vacantes, NPS del empleado (eNPS) trimestral, evolución del absentismo, inversión en formación por empleado y cobertura de evaluaciones de desempeño. Define también el calendario de reportes regulares y los destinatarios de cada informe.

**Formato de entrega:**
- Tabla comparativa de HRIS con puntuación por criterio
- Roadmap de implementación por fases con duración estimada
- Checklist RGPD para la migración de datos de empleados
- Mapa de automatizaciones del ciclo de vida del empleado
- Dashboard de People Analytics con métricas clave
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Selección e implementación de HRIS cloud para gestión integral del talento',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Optimización de costos cloud con FinOps',
                'description'       => 'Metodología FinOps aplicada a la gestión financiera del gasto en cloud. Cubre visibilidad del gasto, imputación de costos por equipo, identificación de desperdicio y estrategias de ahorro sin sacrificar rendimiento ni disponibilidad.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un practicante certificado de FinOps (Cloud Financial Operations) con experiencia en reducción del gasto cloud en empresas de tecnología. Necesito tu ayuda para implementar una práctica FinOps en nuestra organización y reducir el gasto mensual en cloud sin impactar el rendimiento de nuestros sistemas.

**Situación actual:**
Nuestro gasto en AWS ha crecido un 180% en los últimos 18 meses, superando los presupuestos estimados cada trimestre. Los equipos de ingeniería desconocen el costo de los recursos que aprovisionan, y el equipo de finanzas no tiene visibilidad granular del gasto. Hay sospechas de recursos no utilizados, instancias sobredimensionadas y falta de automatización del ciclo de vida de recursos.

**Fase 1 – Establecer visibilidad del gasto cloud:**
El primer principio de FinOps es la visibilidad. Diseña la arquitectura de etiquetado (tagging) de recursos en AWS: qué tags son obligatorios (equipo propietario, entorno, producto, centro de coste, fecha de creación), cómo aplicarlos de forma retroactiva con AWS Tag Editor, y cómo usar AWS Cost Explorer y Cost and Usage Reports (CUR) para analizar el gasto con granularidad diaria por servicio, región y etiqueta. Define también las alertas de presupuesto por equipo y el reporte semanal de gasto que recibirá cada equipo técnico.

**Fase 2 – Identificación y eliminación de desperdicio:**
Según Flexera, las empresas desperdician en promedio el 28% de su gasto cloud. Diseña el proceso de detección y eliminación de desperdicio: instancias EC2 paradas pero pagando (stopped instances con volúmenes EBS adjuntos), volúmenes EBS no adjuntos a ninguna instancia, snapshots obsoletos de más de 90 días, Load Balancers sin tráfico, Elastic IPs no asignadas, lambdas con reserva de concurrencia excesiva y bases de datos RDS sobredimensionadas con menos del 20% de uso de CPU. Para cada categoría define el proceso de identificación, validación con el equipo propietario y eliminación segura.

**Fase 3 – Optimización de instancias y right-sizing:**
El right-sizing es la práctica de ajustar el tamaño de los recursos al uso real. Define el proceso de análisis usando AWS Compute Optimizer: recopilar métricas de CPU, memoria y red de las últimas 2 semanas para cada instancia EC2 y RDS, identificar instancias con menos del 40% de uso de CPU como candidatas a right-sizing, evaluar el tipo de instancia recomendado y calcular el ahorro potencial antes de aplicar el cambio. Diseña también el proceso de cambio de tipo de instancia con mínimo impacto: ventana de mantenimiento, comunicación al equipo y rollback plan.

**Fase 4 – Estrategias de ahorro con compromisos:**
Las mayores palancas de ahorro en cloud son los compromisos de uso. Analiza y recomienda la estrategia óptima considerando: Savings Plans (Compute Savings Plans vs. EC2 Instance Savings Plans), Reserved Instances (Standard vs. Convertible, 1 año vs. 3 años), Spot Instances para cargas de trabajo tolerantes a interrupciones (procesamiento batch, entornos de CI/CD, workers de procesamiento de imágenes). Calcula el ahorro estimado aplicando una combinación de estas herramientas sobre nuestro perfil de uso actual.

**Fase 5 – Cultura FinOps y responsabilidad distribuida:**
FinOps no es solo tecnología; es un cambio cultural. Define el modelo operativo: reunión semanal de FinOps con representantes técnicos y financieros, chargeback o showback de costos por equipo (imputación real vs. informativa), gamificación del ahorro (reconocimiento a equipos que reducen su gasto sin impactar KPIs), y formación básica en costos cloud para todos los ingenieros.

**Formato de entrega:**
- Política de etiquetado de recursos con campos obligatorios y opcionales
- Checklist de desperdicio cloud con priorización por impacto
- Calculadora de ahorro por estrategia de compromiso (Savings Plans vs. RIs)
- Dashboard de FinOps con métricas clave (Cloud Efficiency Rate, Unit Cost, Waste Rate)
- Calendario de actividades del equipo FinOps
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Reducción del gasto cloud mediante la metodología FinOps',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento normativo y soberanía de datos en entornos cloud',
                'description'       => 'Marco legal para evaluar y garantizar el cumplimiento normativo en infraestructuras cloud. Cubre RGPD, transferencias internacionales de datos, cláusulas contractuales con proveedores cloud y gestión de incidentes de seguridad.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un abogado especializado en derecho tecnológico y protección de datos con experiencia en cumplimiento normativo en entornos cloud para empresas europeas. Necesito tu ayuda para revisar y mejorar nuestro marco de cumplimiento para el uso de infraestructuras cloud públicas.

**Contexto legal:**
Somos una empresa española que procesa datos personales de clientes europeos. Utilizamos AWS con servidores en la región eu-west-1 (Irlanda), pero algunos servicios de AWS (como el soporte de nivel 3 y algunos servicios de IA) procesan datos en servidores ubicados fuera del EEE, principalmente en Estados Unidos. Además, usamos herramientas SaaS de terceros que también procesan datos de nuestros clientes.

**Bloque 1 – Análisis de la base legal para el tratamiento cloud:**
Identifica los tratamientos de datos que realizamos en cloud y la base legal que justifica cada uno según el RGPD: datos de clientes en el CRM (interés legítimo vs. contrato), datos de empleados en el HRIS (obligación legal y contrato), datos de logs de seguridad (interés legítimo) y datos de analítica de comportamiento de usuarios (consentimiento). Para cada tratamiento verifica que el Registro de Actividades de Tratamiento (RAT) esté actualizado y refleje el uso de infraestructura cloud como destinatario de los datos.

**Bloque 2 – Evaluación de transferencias internacionales de datos:**
El uso de servicios cloud de proveedores estadounidenses (AWS, Google Cloud, Microsoft Azure) implica potenciales transferencias internacionales de datos a EE.UU. Analiza el marco legal vigente tras la anulación del Privacy Shield: ¿En qué casos el Data Privacy Framework UE-EE.UU. de 2023 cubre estas transferencias? ¿Cuándo es necesario añadir Cláusulas Contractuales Tipo (SCCs) actualizadas de 2021? ¿Cómo documentar el análisis de impacto de la transferencia (Transfer Impact Assessment, TIA)? Proporciona un checklist de validación para cada proveedor cloud y SaaS.

**Bloque 3 – Revisión de contratos con proveedores cloud:**
Los contratos con proveedores cloud (Data Processing Agreements, DPAs) son fundamentales para el cumplimiento. Diseña la guía de revisión de DPAs: cláusulas mínimas exigidas por el RGPD (artículo 28), verificación de subprocesadores autorizados y notificación de cambios, garantías de seguridad exigidas (cifrado en tránsito y en reposo, gestión de accesos, auditorías de seguridad), y procedimientos de devolución o destrucción de datos al finalizar el contrato. Incluye una lista de preguntas que deberíamos hacer a cada proveedor cloud antes de contratar.

**Bloque 4 – Gestión de incidentes de seguridad en entornos cloud:**
El RGPD exige notificar las brechas de datos personales a la AEPD en 72 horas. Define el procedimiento interno de gestión de incidentes considerando el entorno cloud: cómo detectar un incidente de seguridad en la infraestructura cloud (alertas de AWS CloudTrail, anomalías de acceso), quién es el responsable interno de coordinar la respuesta, cómo recopilar evidencias del incidente en el entorno cloud, qué información debe incluir la notificación a la AEPD, y cómo comunicar el incidente a los afectados cuando sea obligatorio.

**Bloque 5 – Evaluación de Impacto en la Protección de Datos (EIPD) para nuevos servicios cloud:**
Cuando adoptamos un nuevo servicio cloud que implica tratamiento de datos a gran escala o datos especialmente sensibles, el RGPD puede exigir una EIPD previa. Define el proceso interno: criterios para determinar cuándo es obligatoria la EIPD, plantilla de EIPD adaptada a proyectos cloud, proceso de consulta al DPO (Delegado de Protección de Datos), y cómo documentar las medidas de mitigación de riesgos identificadas.

**Formato de entrega:**
- Checklist de cumplimiento RGPD para nuevas integraciones cloud
- Plantilla de Transfer Impact Assessment para proveedores en EE.UU.
- Guía de revisión de DPAs con cláusulas mínimas exigidas
- Procedimiento de gestión de incidentes de seguridad en cloud (con plazos)
- Plantilla de EIPD simplificada para proyectos cloud
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Marco de cumplimiento RGPD para infraestructuras y servicios cloud',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Centralización de datos de cliente en plataformas cloud para Customer Success',
                'description'       => 'Estrategia para unificar los datos de salud del cliente dispersos en múltiples herramientas cloud. Cubre la implementación de una vista 360° del cliente, alertas de riesgo de churn y automatización de playbooks de éxito del cliente.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un Director de Customer Success con experiencia en implementación de plataformas de Customer Success (CS) en empresas SaaS B2B. Necesito tu ayuda para centralizar todos los datos relevantes de mis clientes en una única plataforma cloud que permita a mi equipo actuar de forma proactiva y basada en datos.

**Situación actual:**
Mi equipo de CS gestiona 200 cuentas de clientes con datos dispersos en: el CRM (Salesforce) con información de contratos y contactos, la plataforma de producto con métricas de uso, el sistema de soporte (Zendesk) con tickets e incidencias, el email con comunicaciones del CSM asignado, y hojas de cálculo con el health score calculado manualmente. El resultado es que los CSMs tardan demasiado en preparar las revisiones de negocio y los clientes en riesgo de churn se detectan demasiado tarde.

**Parte 1 – Arquitectura de datos del cliente en cloud:**
Define la arquitectura de centralización de datos de cliente. Evalúa las opciones: implementar una plataforma de Customer Success dedicada (Gainsight, ChurnZero, Totango, Planhat), construir una vista unificada sobre nuestro data warehouse existente (BigQuery o Snowflake) con un dashboard en Looker o Metabase, o usar una combinación de ambas. Para cada opción analiza: datos que centraliza, nivel de automatización, costo mensual estimado, tiempo de implementación y curva de aprendizaje del equipo de CS.

**Parte 2 – Diseño del health score de cliente:**
El health score es el indicador más importante para un equipo de CS. Diseña un modelo de health score para nuestro producto SaaS que considere: métricas de uso del producto (frecuencia de login, funcionalidades adoptadas, usuarios activos vs. licencias contratadas), métricas de soporte (número de tickets críticos en los últimos 30 días, tiempo de resolución, CSAT de tickets), métricas de relación (respuesta a emails del CSM, asistencia a reuniones de revisión, participación en webinars), y métricas contractuales (días hasta la renovación, expansión o contracción de ARR, historial de pagos). Asigna pesos a cada categoría y define los umbrales de color (verde, amarillo, rojo).

**Parte 3 – Automatización de alertas y playbooks:**
La proactividad es la clave del Customer Success moderno. Diseña el sistema de alertas automáticas y los playbooks de respuesta: alerta de riesgo de churn cuando el health score cae por debajo de un umbral durante 2 semanas consecutivas (playbook: email de check-in + llamada de CSM en 48 horas), alerta de oportunidad de expansión cuando un cliente supera el 80% de su límite de uso durante 30 días (playbook: presentación de upgrade), alerta de abandono de funcionalidad clave (playbook: sesión de formación), y alerta pre-renovación 90 días antes del vencimiento (playbook: Business Review + propuesta de renovación).

**Parte 4 – Vista 360° del cliente para CSMs:**
Define el panel de información que cada CSM debe ver al abrir una cuenta: resumen ejecutivo (ARR, fecha de inicio, próxima renovación, health score actual), historial de uso de los últimos 6 meses con tendencia, lista de contactos con su nivel de engagement, tickets abiertos y tiempo de respuesta pendiente, historial de interacciones del CSM (emails, llamadas, reuniones), y próximos hitos comprometidos. Diseña también la plantilla de Business Review Trimestral que el CSM generará automáticamente a partir de estos datos.

**Parte 5 – Métricas de rendimiento del equipo de CS:**
Define el dashboard de métricas del equipo de CS que revisará el Director semanalmente: Net Revenue Retention (NRR) y Gross Revenue Retention (GRR), Churn Rate mensual y anual por segmento de cliente, tiempo promedio de respuesta a alertas de riesgo, cobertura de Business Reviews (% de cuentas con BQ realizada en los últimos 90 días) y workload por CSM (número de cuentas, ARR total y distribución de health scores).

**Formato de entrega:**
- Comparativa de plataformas CS con recomendación
- Modelo de health score con pesos y umbrales definidos
- Mapa de playbooks automáticos por tipo de alerta
- Plantilla de vista 360° de cliente para CSMs
- Dashboard de métricas de rendimiento del equipo de CS
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Centralización de datos de cliente y automatización de playbooks de Customer Success',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Stack cloud esencial para freelancers de alto rendimiento',
                'description'       => 'Selección y configuración del stack de herramientas cloud para freelancers que quieren trabajar de forma profesional, eficiente y escalable. Cubre gestión de clientes, proyectos, facturación, almacenamiento y productividad personal.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor de productividad especializado en freelancers y trabajadores independientes con experiencia en optimización de stacks de herramientas digitales. Necesito tu ayuda para construir un stack cloud completo y eficiente que me permita gestionar mi negocio freelance de forma profesional y escalable, sin gastar de más en herramientas que no necesito.

**Mi perfil como freelancer:**
Soy un profesional independiente (diseñador/desarrollador/consultor) con 5-8 clientes activos simultáneos. Trabajo de forma remota, principalmente desde casa pero también desde cafeterías y espacios de coworking. Necesito colaborar con clientes para revisiones de entregables y tengo algunos colaboradores ocasionales con los que trabajo en proyectos grandes. Mi presupuesto mensual para herramientas es de 80-150 euros.

**Categoría 1 – Gestión de clientes y proyectos:**
Evalúa las mejores opciones cloud para gestionar simultáneamente múltiples proyectos de clientes: Notion (para documentación y gestión de proyectos), ClickUp (para tareas y seguimiento de tiempo), Basecamp (para comunicación con clientes), o Asana/Monday (para project management colaborativo). Para cada opción indica el precio, las funcionalidades más útiles para freelancers y la curva de aprendizaje. Recomienda la combinación óptima para alguien con mi perfil y explica cómo configurarla para gestionar un proyecto tipo de principio a fin.

**Categoría 2 – Facturación y gestión financiera:**
La administración financiera es el punto débil de muchos freelancers. Diseña el stack para gestionar: facturación a clientes (Holded, Factura Directa, Billin, o equivalente europeo con soporte para IVA español), control de gastos e ingresos para la declaración trimestral, seguimiento de tiempo facturable por proyecto y cliente, y gestión del cobro (integración con Stripe o PayPal para cobro internacional, SEPA para clientes europeos). Define el flujo de trabajo mensual de administración que debería seguir un freelancer para no acumular trabajo administrativo.

**Categoría 3 – Almacenamiento, backup y colaboración en archivos:**
El almacenamiento en cloud es crítico para cualquier freelancer. Compara las opciones: Google Drive (incluido en Google Workspace), Dropbox Business, OneDrive for Business y Apple iCloud Drive. Para cada uno evalúa: precio por GB, capacidad de compartir con clientes para revisiones, historial de versiones, sincronización offline, y velocidad de subida/descarga. Define también la estrategia de backup 3-2-1 para proteger los archivos de trabajo contra pérdida de datos.

**Categoría 4 – Comunicación y videoconferencia:**
La comunicación profesional con clientes requiere herramientas adecuadas. Diseña la estrategia de comunicación: email profesional propio (Google Workspace o Microsoft 365 con dominio propio), videoconferencia (Zoom, Google Meet o Whereby), mensajería asíncrona para proyectos largos (Slack, Teams o Discord), y herramienta de grabación de pantalla para entregables asíncronos (Loom, Tella o equivalente). Explica cuándo usar cada canal y cómo establecer expectativas de comunicación con los clientes.

**Categoría 5 – Productividad personal y automatización:**
Un freelancer eficiente automatiza las tareas repetitivas. Identifica las automatizaciones más valiosas para mi flujo de trabajo: recordatorios automáticos de facturas vencidas, creación automática de tareas al recibir un briefing por email, backup automático de proyectos finalizados a almacenamiento de archivo, y seguimiento automático del tiempo en aplicaciones específicas. Recomienda herramientas de automatización (Zapier, Make/Integromat, n8n) según el nivel de complejidad y costo.

**Formato de entrega:**
- Stack cloud recomendado completo con precio mensual total
- Configuración paso a paso para gestionar un proyecto de cliente de principio a fin
- Flujo de trabajo mensual de administración financiera (2 horas/mes objetivo)
- Automatizaciones prioritarias con instrucciones de configuración básica
- Checklist de seguridad para proteger los datos de clientes en cloud
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Construcción de un stack cloud profesional para trabajadores independientes',
                'vote_score'        => 34,
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
