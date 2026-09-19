<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills446Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing tech stack en la nube con IA para automatización de campañas',
                'description'      => 'Diseña y optimiza el stack tecnológico de marketing en la nube utilizando IA para automatizar campañas, personalizar experiencias y medir el impacto en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing technology (martech) y arquitectura de sistemas en la nube. Tu objetivo es ayudarme a diseñar y optimizar el stack tecnológico de marketing de mi empresa para aprovechar al máximo la inteligencia artificial y la infraestructura cloud.

objetivo: Crear un martech stack moderno y escalable en la nube que automatice las campañas de marketing, personalice las experiencias de clientes a escala y proporcione visibilidad completa sobre el rendimiento en tiempo real.

instrucción 1 — Auditoría del stack actual:
Evalúa las herramientas existentes:
- Inventario de todas las herramientas de marketing en uso (CRM, email, analytics, publicidad, contenido)
- Costes mensuales totales y utilizacion real de cada herramienta
- Gaps funcionales: qué necesidades no están cubiertas con el stack actual
- Solapamientos: herramientas que hacen lo mismo y se pueden consolidar
- Integraciones existentes y datos silos que impiden una visión unificada del cliente

instrucción 2 — Arquitectura del stack ideal:
Define las capas del martech stack:
- Capa de datos: CDP (Customer Data Platform) para unificar datos de clientes de todas las fuentes
- Capa de análisis: data warehouse en la nube (BigQuery, Snowflake, Redshift) + herramienta de BI
- Capa de activación: plataforma de marketing automation (HubSpot, Marketo, Braze)
- Capa de personalización: motor de recomendaciones con IA para web, email y publicidad
- Capa de medición: MMM (Marketing Mix Modeling) y atribución multi-touch con IA
- Capa de publicidad: DSP y gestión de campañas programáticas con IA para optimización de pujas

instrucción 3 — Integración y flujo de datos:
Diseña el pipeline de datos de marketing:
- Fuentes de datos: web analytics, CRM, plataformas publicitarias, email, eventos, punto de venta
- Ingesta en tiempo real: eventos de comportamiento del usuario con latencia inferior a 1 segundo
- Transformación: normalización y enriquecimiento de datos con modelos de ML
- Activación: triggers de automatización basados en comportamiento en tiempo real
- Retroalimentación: datos de conversión de vuelta a las plataformas publicitarias para optimizar

instrucción 4 — Casos de uso de IA en el martech stack:
Implementa inteligencia artificial en cada capa:
- Segmentación predictiva: audiencias basadas en comportamiento futuro probable, no solo histórico
- Personalización de contenido: versiones dinámicas de emails, web y anuncios por segmento
- Optimización de presupuesto: distribución automática del gasto entre canales según rendimiento
- Predicción de churn: identificación de clientes en riesgo para activar campañas de retención
- Next best action: recomendación de la siguiente comunicación óptima para cada cliente

instrucción 5 — Gobernanza y privacidad de datos:
Establece el marco de gestión de datos:
- Consentimiento: gestión centralizada del consent state de cada usuario en el CDP
- Privacidad por diseño: anonimización y pseudonimización de datos personales en el pipeline
- Data catalog: inventario de todos los datos disponibles y su propietario
- Calidad de datos: monitoreo automático de la integridad y completitud de los datos
- Retención: política de eliminación automática según los plazos legales

tarea final:
Genera el diseño completo del martech stack para mi empresa, incluyendo: diagrama de arquitectura por capas con herramientas específicas recomendadas, presupuesto estimado mensual para cada opción (básica, media y avanzada), plan de migración de 6 meses desde el stack actual al nuevo, y los 5 casos de uso de IA prioritarios ordenados por impacto en revenue y facilidad de implementación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar un martech stack cloud con IA para automatizar campañas, personalizar experiencias y medir el rendimiento en tiempo real.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Pipeline CI/CD inteligente con IA para automatización de despliegues',
                'description'      => 'Implementa un pipeline de integración y despliegue continuo potenciado con IA que detecte errores automáticamente, optimice los tiempos de build y garantice la calidad del código en producción.',
                'prompt_content'   => <<<'EOT'
Eres un experto en DevOps, cloud infrastructure y prácticas de ingeniería de software de alto rendimiento. Tu objetivo es ayudarme a diseñar e implementar un pipeline CI/CD moderno que utilice inteligencia artificial para mejorar la velocidad, seguridad y confiabilidad de los despliegues.

objetivo: Construir un sistema de integración y despliegue continuo que automatice todo el ciclo de vida del software, desde el commit hasta producción, utilizando IA para detectar problemas antes de que lleguen a los usuarios finales.

instrucción 1 — Arquitectura del pipeline CI/CD:
Define las etapas del pipeline:
- Source: control de versiones (Git), políticas de branching (GitFlow o trunk-based), pull request reviews
- Build: compilación, construcción de imágenes Docker, gestión de dependencias con cache inteligente
- Test: unit tests, integration tests, E2E tests, análisis de cobertura de código
- Security scan: análisis estático de código (SAST), análisis de dependencias (SCA), secrets detection
- Quality gate: umbrales mínimos de cobertura, complejidad ciclomática, deuda técnica
- Deploy: despliegue automatizado con estrategias blue-green, canary o rolling
- Monitor: health checks post-deploy, rollback automático si fallan las métricas

instrucción 2 — Integración de IA en el pipeline:
Implementa inteligencia artificial en cada etapa:
- Detección de fallos predictiva: modelo que predice qué commits tienen mayor probabilidad de romper el build basándose en el historial
- Revisión automática de código: análisis de pull requests con LLM para detectar bugs, code smells y violaciones de estilo
- Priorización de tests: ejecuta primero los tests con mayor probabilidad de fallar según los archivos modificados
- Análisis de impacto del cambio: mapeo automático de qué partes del sistema puede afectar un cambio
- Root cause analysis: cuando un deploy falla, la IA sugiere automáticamente la causa probable y cómo resolverla

instrucción 3 — Infraestructura como código (IaC) con IA:
Automatiza la gestión de infraestructura:
- Terraform o Pulumi para definir toda la infraestructura de forma declarativa
- Detección de drift: alertas cuando la infraestructura real difiere del estado definido en código
- Cost estimation: estimación automática del coste de un cambio de infraestructura antes de aplicarlo
- Security compliance: validación automática de que la IaC cumple con las políticas de seguridad (CIS Benchmarks)
- IA para generación de IaC: generación automática de módulos de Terraform a partir de descripciones en lenguaje natural

instrucción 4 — Observabilidad y monitoreo inteligente:
Implementa el stack de observabilidad:
- Métricas: Prometheus + Grafana para métricas de sistema y negocio
- Logs: stack ELK (Elasticsearch, Logstash, Kibana) o Loki para logs estructurados
- Trazas: OpenTelemetry para distributed tracing end-to-end
- Alertas: reglas de alerta inteligentes que distinguen anomalías reales del ruido
- AIOps: correlación automática de eventos para reducir el tiempo de detección (MTTD) y resolución (MTTR) de incidencias

instrucción 5 — Seguridad DevSecOps integrada:
Incorpora seguridad en cada fase del pipeline:
- Pre-commit hooks: linting de seguridad y detección de secrets antes del commit
- Container security: escaneo de imágenes Docker con Trivy o Snyk antes de publicar
- Runtime security: Falco o similar para detección de comportamiento anómalo en producción
- Gestión de secrets: Vault de HashiCorp o AWS Secrets Manager, nunca secrets en el código
- SBOM (Software Bill of Materials): generación automática del inventario de componentes para cumplimiento

tarea final:
Genera el diseño completo del pipeline CI/CD para mi proyecto, incluyendo: configuración YAML comentada para GitHub Actions o GitLab CI con todas las etapas definidas, diagrama del flujo de datos entre sistemas, lista de herramientas recomendadas con alternativas según el presupuesto (open source vs. SaaS), métricas clave del pipeline (DORA metrics: deployment frequency, lead time, MTTR, change failure rate), y un plan de implementación progresiva de 12 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar un pipeline CI/CD con IA que automatice los despliegues, detecte errores y garantice la calidad del código.',
                'vote_score'       => 54,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design system automatizado con despliegue en la nube e IA para consistencia visual',
                'description'      => 'Crea y mantén un design system vivo que se despliega automáticamente en la nube, con IA para detectar inconsistencias visuales y garantizar la coherencia de la marca en todos los productos.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de sistemas experto en design systems, design tokens y la intersección entre diseño e ingeniería. Tu objetivo es ayudarme a crear un design system moderno que se gestione como código, se despliegue automáticamente y use IA para mantener la consistencia visual a lo largo del tiempo.

objetivo: Construir un design system completo que sirva como fuente única de verdad para todos los productos de la empresa, con pipelines de actualización automatizados y herramientas de IA para detectar regresiones visuales y mantener la coherencia de marca.

instrucción 1 — Arquitectura del design system:
Define la estructura del sistema:
- Foundations: colores, tipografía, espaciado, sombras, bordes, movimiento (como design tokens en JSON/YAML)
- Componentes: átomos (botón, input, badge), moléculas (card, form group, dropdown), organismos (header, sidebar, modal)
- Patrones: layouts recurrentes, flujos de usuario comunes, páginas tipo
- Documentación: Storybook con ejemplos interactivos, guías de uso y do's & don'ts
- Guías de accesibilidad: contraste mínimo WCAG AA/AAA, navegación por teclado, ARIA labels

instrucción 2 — Design tokens como única fuente de verdad:
Implementa el sistema de tokens:
- Tokens primitivos: valores en bruto (colores HEX, tamaños en px, fuentes)
- Tokens semánticos: valores con contexto (color-brand-primary, spacing-section, font-heading)
- Tokens de componente: valores específicos de componentes (button-padding-horizontal, input-border-radius)
- Sincronización Figma-código: Style Dictionary o Theo para transformar tokens a CSS, JS, iOS, Android
- Versionado: semantic versioning del paquete npm del design system

instrucción 3 — Pipeline de despliegue automatizado:
Configura el proceso de publicación:
- Repositorio: monorepo con packages separados para tokens, componentes e iconos
- CI/CD: publicación automática del paquete npm en cada merge a main
- Documentación: despliegue automático de Storybook en Chromatic o Vercel
- Changelog automático: generación del registro de cambios a partir de conventional commits
- Notificaciones: alertas en Slack cuando se publica una nueva versión con los cambios relevantes

instrucción 4 — IA para consistencia visual y testing:
Implementa verificación automática con IA:
- Visual regression testing: Chromatic o Percy para detectar cambios visuales no intencionados entre versiones
- Análisis de accesibilidad automático: axe o Lighthouse en el pipeline para cada componente
- Detección de inconsistencias: IA que revisa las implementaciones en los productos y detecta desviaciones del design system
- Sugerencias de adopción: análisis del código base de los productos para sugerir qué componentes custom deberían migrarse al design system
- Análisis de uso: qué componentes se usan más, cuáles están abandonados, cuáles necesitan mejoras

instrucción 5 — Gobernanza y evolución del design system:
Establece el proceso de mantenimiento:
- Request process: cómo los equipos de producto proponen nuevos componentes
- Review committee: diseñadores y desarrolladores responsables de la aprobación de cambios
- Contribución: guía para que cualquier equipo pueda contribuir componentes al sistema
- Deprecation: proceso para marcar componentes como obsoletos y migrar a los nuevos
- Comunicación de cambios: notas de versión claras con ejemplos de migración para los cambios breaking

tarea final:
Genera el plan completo de creación del design system para mi empresa, incluyendo: estructura de directorios del repositorio, lista de tokens primitivos y semánticos de ejemplo, configuración del pipeline CI/CD en YAML, criterios de aceptación para nuevos componentes, plan de adopción progresiva por los equipos de producto (cómo migrar del código actual al design system en 6 meses), y las herramientas de IA más recomendadas para el testing visual y de accesibilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Crear un design system con despliegue automatizado en la nube e IA para mantener la consistencia visual en todos los productos.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales tech stack en la nube con IA para equipos comerciales de alto rendimiento',
                'description'      => 'Diseña el stack tecnológico de ventas en la nube que maximiza la productividad de los SDRs y AEs mediante automatización con IA, inteligencia de conversaciones y análisis predictivo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en revenue operations (RevOps) y tecnología de ventas con experiencia en implementar stacks tecnológicos que multiplican la productividad de los equipos comerciales. Tu objetivo es ayudarme a diseñar el sales tech stack ideal para mi equipo, integrando herramientas de IA que reduzcan el trabajo manual y aumenten el tiempo de venta activa.

objetivo: Construir un ecosistema tecnológico de ventas completamente integrado en la nube que permita a los SDRs y AEs trabajar con mayor eficacia, tome decisiones basadas en datos en tiempo real y escale sin añadir headcount proporcionalmente.

instrucción 1 — Auditoría y diseño del stack de ventas:
Evalúa y diseña las capas tecnológicas:
- CRM como núcleo: Salesforce, HubSpot o Pipedrive como fuente única de verdad de las oportunidades
- Inteligencia de datos: enriquecimiento automático de cuentas y contactos con Apollo, Clearbit o ZoomInfo
- Herramientas de engagement: Outreach o Salesloft para secuencias de email y llamadas
- Inteligencia de conversaciones: Gong o Chorus para grabar, transcribir y analizar llamadas de ventas
- Firma electrónica: DocuSign o PandaDoc integrado con el CRM para acelerar el cierre
- Business intelligence: dashboard en tiempo real del pipeline, forecast y actividad del equipo

instrucción 2 — IA en el proceso de ventas:
Implementa inteligencia artificial en cada etapa:
- Calificación de leads: scoring automático basado en comportamiento y datos firmográficos
- Priorización de cuentas: recomendación de qué cuentas trabajar hoy basada en señales de intención
- Análisis de llamadas: IA que identifica objeciones frecuentes, momentos clave y áreas de mejora por vendedor
- Generación de email personalizado: primer borrador de emails de prospección adaptado al contexto de cada cuenta
- Forecast inteligente: predicción del cierre de oportunidades con IA basada en el historial y señales de la cuenta
- Recomendación de siguiente acción: el CRM sugiere automáticamente el próximo paso para cada oportunidad

instrucción 3 — Integración del stack en el flujo de trabajo del vendedor:
Reduce la fricción tecnológica:
- Single sign-on (SSO): un solo login para todas las herramientas del stack
- Extensión de Chrome: acceso al CRM y a la información de la cuenta desde LinkedIn y el email
- Integración con el calendario: sincronización automática de reuniones con el CRM y notas post-call
- Notificaciones inteligentes: alertas solo de lo relevante (lead que visita la web, propuesta abierta, deal en riesgo)
- Mobile app: acceso completo al CRM y al pipeline desde el móvil para el equipo de campo

instrucción 4 — RevOps: datos, procesos y alineación:
Establece la operación de revenue:
- Definición compartida del pipeline: etapas, criterios de avance y criterios de cierre o pérdida
- Hygiene del CRM: reglas de validación automáticas para mantener la calidad de los datos
- Reporting semanal automatizado: pipeline review, actividad por vendedor, conversión por etapa
- Playbooks en el CRM: guías de ventas contextuales dentro de cada etapa del pipeline
- Alertas de deals en riesgo: IA que detecta oportunidades sin actividad reciente o con señales negativas

instrucción 5 — Seguridad y compliance del sales stack:
Protege los datos de clientes y prospectos:
- Permisos granulares en el CRM: los vendedores ven solo sus cuentas, los managers el territorio completo
- Grabación de llamadas: aviso legal al inicio de la grabación y gestión del consentimiento
- Retención de datos: política de limpieza de leads no convertidos según el GDPR
- Acceso VPN para herramientas sensibles: capa adicional de seguridad para el acceso remoto
- Auditoría de cambios: log de todas las modificaciones en el CRM con usuario y timestamp

tarea final:
Genera el plan completo del sales tech stack para mi equipo, incluyendo: diagrama del stack con las herramientas recomendadas en cada capa, coste mensual estimado por vendedor (opciones básica, media y premium), plan de implementación de 90 días con prioridades, lista de integraciones nativas disponibles entre las herramientas, y los 5 casos de uso de IA con mayor impacto en la productividad del equipo comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un sales tech stack en la nube con IA que multiplique la productividad de los equipos comerciales.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Infraestructura de datos para producto con IA: del evento al insight',
                'description'      => 'Construye la infraestructura de datos de producto que recopila eventos de usuario, los procesa con IA y genera insights accionables para el equipo de producto en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product analytics, data engineering y arquitectura de datos para empresas de producto digital. Tu objetivo es ayudarme a construir la infraestructura de datos que necesita un equipo de producto moderno para tomar decisiones basadas en evidencia y acelerar el aprendizaje.

objetivo: Diseñar e implementar un pipeline de datos de producto que capture cada interacción del usuario, la procese con modelos de IA y proporcione al equipo dashboards, experimentos y alertas en tiempo real para mejorar continuamente el producto.

instrucción 1 — Instrumentación del producto:
Define la estrategia de captura de datos:
- Taxonomía de eventos: nomenclatura consistente para eventos (noun_verb: button_clicked, form_submitted, page_viewed)
- Plan de tracking: inventario de todos los eventos a capturar con sus propiedades y contexto
- Client-side vs. server-side tracking: cuándo usar cada aproximación y sus trade-offs
- Herramienta de analytics: Segment, Amplitude, Mixpanel o sistema propio con Kafka
- Validación de datos: esquemas de eventos con validación en tiempo real para detectar errores de tracking

instrucción 2 — Pipeline de datos en la nube:
Arquitectura del sistema de datos de producto:
- Ingesta: Kafka o Kinesis para streaming de eventos en tiempo real
- Almacenamiento: data lake en S3/GCS para datos raw + data warehouse (BigQuery/Snowflake) para análisis
- Transformación: dbt para modelar los datos en tablas analíticas limpias y documentadas
- Feature store: almacén de features de ML para alimentar los modelos de personalización
- Reverse ETL: sincronización de segmentos y features de vuelta al CRM y las herramientas de producto

instrucción 3 — Modelos de IA para insights de producto:
Implementa inteligencia artificial sobre los datos:
- Predicción de retención: modelo que identifica usuarios en riesgo de abandono 7 días antes
- Análisis de cohortes automático: agrupación de usuarios por comportamiento (clustering con K-means)
- Análisis de funnel con IA: identificación automática del paso con mayor impacto en la conversión
- Detección de anomalías: alertas cuando una métrica de producto se desvía del comportamiento esperado
- Recomendaciones personalizadas: motor de recomendación de features o contenido basado en comportamiento

instrucción 4 — Experimentación y A/B testing:
Construye la plataforma de experimentación:
- Feature flags: sistema para activar funcionalidades de forma gradual y controlada
- Asignación aleatoria: garantizar una asignación estadísticamente válida en los experimentos
- Cálculo de significancia: automated statistical significance testing con correcciones de comparaciones múltiples
- Guardrail metrics: métricas de negocio que no deben empeorar aunque el experimento mejore la métrica principal
- Aprendizaje organizacional: repositorio de experimentos con resultados y learnings para evitar repetirlos

instrucción 5 — Democratización de datos en el equipo de producto:
Habilita el self-service analytics:
- Dashboards de producto: métricas clave para PMs (DAU, retención D1/D7/D30, conversión, NPS)
- Herramienta de exploración: Metabase, Looker o Redash para que los PMs hagan sus propias consultas sin SQL
- Documentación de datos: glosario de métricas con definición exacta, fuente y propietario
- Alertas automáticas: notificaciones cuando las métricas del producto cruzan umbrales críticos
- Data literacy: formación básica en análisis de datos para todo el equipo de producto

tarea final:
Genera el diseño completo de la infraestructura de datos de producto para mi empresa, incluyendo: taxonomía de eventos para los 20 eventos más importantes de mi producto tipo (adaptar a mi caso concreto), diagrama de arquitectura del pipeline de datos, ejemplo de modelo dbt para las métricas de retención, plantilla del dashboard de producto con las métricas imprescindibles, y un plan de implementación de 16 semanas dividido en cuatro fases (instrumentación, pipeline, análisis, experimentación).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir la infraestructura de datos de producto con IA para generar insights accionables en tiempo real.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR tech stack en la nube con IA para la gestión del ciclo de vida del empleado',
                'description'      => 'Diseña el ecosistema tecnológico de recursos humanos en la nube que automatiza procesos desde la selección hasta la offboarding, usando IA para mejorar la experiencia del empleado.',
                'prompt_content'   => <<<'EOT'
Eres un experto en People Operations y HR technology con experiencia en transformar digitalmente las funciones de recursos humanos en empresas de tamaño mediano y grande. Tu objetivo es ayudarme a diseñar un HR tech stack moderno en la nube que automatice los procesos clave del ciclo de vida del empleado y mejore la experiencia de las personas en la organización.

objetivo: Construir un ecosistema de HR tech completamente integrado que cubra desde la atracción de talento hasta la offboarding, con automatización de procesos administrativos y análisis predictivo para la toma de decisiones de people strategy.

instrucción 1 — Mapa del ciclo de vida del empleado y herramientas por etapa:
Define las necesidades tecnológicas en cada fase:
- Atracción: ATS (Applicant Tracking System) con IA para sourcing, screening y scoring de candidatos
- Selección: herramientas de evaluación (tests de habilidades, entrevistas por vídeo asíncronas con análisis de IA)
- Onboarding: plataforma de onboarding digital con checklist automatizado, buddy program y formación inicial
- Gestión del empleado: HRIS (Human Resources Information System) como núcleo del sistema
- Desempeño: herramientas de OKRs, feedback 360 y evaluaciones de rendimiento
- Desarrollo: LMS (Learning Management System) con recomendaciones personalizadas de aprendizaje
- Offboarding: automatización del proceso de salida, entrevista de salida digital y gestión del equipo

instrucción 2 — Automatización de procesos administrativos:
Elimina el trabajo manual repetitivo:
- Onboarding automatizado: provisión de accesos, firma de contratos digitales, alta en nómina
- Gestión de ausencias: solicitud, aprobación y registro automático de vacaciones y bajas
- Nómina: integración del HRIS con el sistema de nómina para eliminar la doble introducción de datos
- Documentación: generación automática de contratos, adendas y cartas con plantillas
- Reporting legal: informes automáticos para organismos reguladores (Seguridad Social, AEAT)

instrucción 3 — IA aplicada a la gestión de personas:
Implementa inteligencia artificial en RRHH:
- Predicción de fuga de talento: modelo que identifica empleados con riesgo de abandono 90 días antes
- Matching de candidatos: scoring automático de CVs basado en el perfil de éxito del puesto
- Análisis de clima laboral: procesamiento de lenguaje natural en encuestas de engagement para detectar tendencias
- Recomendaciones de desarrollo: planes de formación personalizados basados en las competencias del empleado y las necesidades de la empresa
- People analytics: correlación entre prácticas de gestión y métricas de rendimiento y retención

instrucción 4 — Experiencia del empleado (EX) digital:
Diseña los touchpoints digitales del empleado:
- Portal del empleado: autoservicio para nóminas, ausencias, beneficios y documentación
- Intranet o digital workplace: comunicación interna, noticias y cultura de empresa
- Chatbot de RRHH: respuestas automáticas a preguntas frecuentes de empleados (nómina, vacaciones, políticas)
- App móvil: acceso al portal desde cualquier dispositivo para empleados de campo o sin ordenador
- Encuestas de pulso: feedback continuo de empleados con análisis automático por departamento y manager

instrucción 5 — Seguridad y compliance de datos de empleados:
Gestiona la privacidad de los datos de personas:
- Permisos granulares: managers ven solo los datos de su equipo directo
- Cumplimiento LOPD/GDPR: bases legales para cada tipo de dato de empleado, plazos de retención
- Consentimiento para IA: información clara a los empleados sobre el uso de IA en decisiones de RRHH
- Seguridad de datos: cifrado en tránsito y en reposo, auditoría de accesos
- Derecho de acceso: proceso para que los empleados accedan a sus propios datos

tarea final:
Genera el diseño completo del HR tech stack para mi empresa (indicar tamaño: startup 50 personas, mediana empresa 200-500, gran empresa 500+), incluyendo: mapa de herramientas recomendadas por etapa del ciclo de vida, coste mensual estimado por empleado para cada opción, plan de implementación de 12 meses con prioridades, los 3 casos de uso de IA con mayor ROI en RRHH para mi contexto, y un ejemplo de dashboard de people analytics con las métricas más relevantes para el CEO.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un HR tech stack en la nube con IA que automatice el ciclo de vida del empleado y mejore la experiencia de las personas.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'FinOps y optimización del gasto cloud con inteligencia artificial',
                'description'      => 'Implementa una práctica de FinOps que controle y optimice el gasto en infraestructura cloud usando IA para detectar desperdicios, predecir costes y maximizar el valor de la inversión.',
                'prompt_content'   => <<<'EOT'
Eres un experto en FinOps, cloud cost management y optimización de infraestructura cloud. Tu objetivo es ayudarme a implementar una práctica de gestión financiera de la nube que controle el gasto, identifique ineficiencias y optimice la inversión en infraestructura mediante inteligencia artificial.

objetivo: Construir un programa de FinOps maduro que proporcione visibilidad completa sobre el gasto cloud, establezca responsabilidades claras por equipo o producto, y use IA para optimizar automáticamente los recursos y reducir la factura cloud sin impactar el rendimiento.

instrucción 1 — Visibilidad y atribución del gasto cloud:
Establece la base de datos financiera:
- Etiquetado (tagging): estrategia obligatoria de tags para todos los recursos (equipo, producto, entorno, centro de coste)
- Showback vs. chargeback: mostrar los costes a cada equipo (showback) o cargarlos internamente (chargeback)
- Herramientas de visibilidad: AWS Cost Explorer, Google Cloud Billing, Azure Cost Management, o third-party (CloudHealth, Apptio Cloudability)
- Reportes automáticos: dashboard semanal de gasto por equipo, servicio y entorno
- Anomaly detection: alertas cuando el gasto diario supera el umbral esperado

instrucción 2 — Identificación y eliminación de desperdicios:
Detecta recursos infrautilizados:
- Rightsizing: análisis del uso de CPU, memoria y disco para recomendar instancias más pequeñas
- Recursos huérfanos: identificar y eliminar volúmenes, IPs elásticas y snapshots no usados
- Instancias paradas: detectar recursos que se pueden apagar fuera del horario laboral
- Underutilized services: bases de datos, load balancers y NAT gateways con tráfico mínimo
- Análisis de data transfer: identificar tráfico entre regiones o zonas de disponibilidad evitable

instrucción 3 — Optimización de compra y compromisos:
Reduce el coste de los recursos utilizados:
- Reserved Instances / Savings Plans: análisis de uso estable para convertir on-demand a compromisos de 1-3 años
- Spot Instances: identificar workloads tolerantes a interrupciones (batch jobs, ML training) para Spot
- Committed Use Discounts (GCP): equivalente a Reserved Instances en Google Cloud
- Negociación de enterprise discount program (EDP): cuándo y cómo negociar descuentos por volumen
- Multi-cloud cost arbitrage: qué servicios son más baratos en cada proveedor cloud para cargas no críticas

instrucción 4 — IA para la optimización continua del gasto cloud:
Implementa inteligencia artificial para la gestión de costes:
- Predicción de gasto: modelo de forecasting para predecir la factura mensual con 95% de precisión
- Recomendaciones automáticas de rightsizing: IA que analiza el uso histórico y propone cambios de tipo de instancia
- Optimización de storage tiers: movimiento automático de datos entre tiers (hot/warm/cold/archive) según el patrón de acceso
- Auto-scaling inteligente: escalar basado en predicciones de carga en lugar de métricas reactivas
- Chatbot de costes: interfaz en lenguaje natural para que los ingenieros consulten el coste de sus recursos

instrucción 5 — Cultura y gobernanza FinOps:
Establece el programa de gestión financiera:
- Cloud Center of Excellence (CCoE): equipo responsable de FinOps, formado por finance, ingeniería y producto
- Presupuestos por equipo: asignación de budgets mensuales con alertas al 80% de consumo
- Revisiones mensuales: reunión de FinOps con los tech leads para revisar el gasto y las optimizaciones realizadas
- Métricas de eficiencia: unit economics de la nube (coste por transacción, coste por usuario activo)
- Gamificación: reconocimiento de los equipos que más optimizan su gasto cloud

tarea final:
Genera el plan completo de FinOps para mi empresa, incluyendo: estrategia de tagging con las etiquetas obligatorias para mi organización, checklist de desperdicio cloud priorizado por impacto económico, modelo de presupuesto mensual por equipo con alertas configuradas, herramientas recomendadas según mi proveedor cloud principal (AWS, GCP o Azure), y un roadmap de madurez FinOps de 12 meses desde el estado inicial hasta la optimización continua con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar FinOps con IA para controlar y optimizar el gasto cloud, reduciendo costes sin sacrificar rendimiento.',
                'vote_score'       => 51,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo en infraestructura cloud con IA: ENS, ISO 27001 y GDPR',
                'description'      => 'Implementa un framework de compliance en la nube que garantice el cumplimiento del Esquema Nacional de Seguridad, ISO 27001 y GDPR, automatizado con herramientas de IA.',
                'prompt_content'   => <<<'EOT'
Eres un abogado y auditor especializado en seguridad de la información, protección de datos y cumplimiento normativo en entornos cloud. Tu objetivo es ayudarme a construir un framework de compliance que garantice que nuestra infraestructura cloud cumple con las normativas aplicables, especialmente en el contexto empresarial español y europeo.

objetivo: Implementar un programa de compliance cloud que cubra los requisitos del Esquema Nacional de Seguridad (ENS), ISO/IEC 27001, GDPR/LOPDGDD y el AI Act europeo, con automatización mediante herramientas de IA para la monitorización continua del cumplimiento.

instrucción 1 — Inventario de activos y clasificación de datos:
Define la base del compliance:
- Inventario de activos cloud: todos los recursos (VMs, bases de datos, storage, redes) con su propietario, clasificación y criticidad
- Clasificación de datos: categorías de datos procesados (datos personales, datos especialmente protegidos, datos de negocio críticos)
- Localización de datos: dónde se almacenan y procesan los datos (región cloud, país, transferencias internacionales)
- Análisis de proveedores: evaluación de los subencargados de tratamiento (cloud providers, SaaS usados)
- Registro de actividades de tratamiento (RAT): documentación completa de todos los tratamientos de datos personales

instrucción 2 — Esquema Nacional de Seguridad (ENS):
Cumple con la normativa española para entidades públicas y sus proveedores:
- Categorización del sistema: básica, media o alta según el impacto de un incidente
- Medidas de seguridad por categoría: controles del Anexo II del ENS (org, operacional, protección)
- Política de seguridad: documento aprobado por dirección con los principios de seguridad
- Análisis de riesgos: metodología MAGERIT para identificar amenazas y vulnerabilidades
- Declaración de Aplicabilidad: justificación de los controles aplicados y excluidos
- Auditoría: proceso de certificación ENS con un organismo acreditado por ENAC

instrucción 3 — ISO/IEC 27001: Sistema de Gestión de Seguridad de la Información:
Implementa el estándar internacional:
- Alcance del SGSI: qué sistemas, procesos y ubicaciones cubre la certificación
- Evaluación de riesgos: identificación, análisis y tratamiento de riesgos de seguridad de la información
- Controles del Anexo A (ISO 27002): 93 controles organizados en 4 temas (organizacional, personas, físico, tecnológico)
- Plan de tratamiento de riesgos: acciones concretas para reducir los riesgos identificados
- Gestión de incidentes: proceso de detección, respuesta, registro y aprendizaje de incidentes de seguridad
- Mejora continua: auditorías internas, revisión por dirección y ciclo PDCA

instrucción 4 — Automatización del compliance con IA:
Implementa la monitorización continua:
- Cloud Security Posture Management (CSPM): herramientas como Prisma Cloud, Wiz o AWS Security Hub para detectar misconfiguraciones
- Policy as Code: reglas de compliance definidas en código (OPA, Sentinel) y validadas en el pipeline CI/CD
- Automated compliance reporting: generación automática de evidencias para auditorías (capturas, logs, configuraciones)
- Alertas de incumplimiento en tiempo real: notificación inmediata cuando un recurso cloud sale del estado conforme
- AI para análisis de logs: detección de comportamiento anómalo y amenazas internas con ML

instrucción 5 — Gestión de incidentes de seguridad y brechas de datos:
Prepara el plan de respuesta:
- Plan de respuesta a incidentes (IRP): roles, procedimientos y canales de comunicación ante un incidente
- Notificación de brechas: proceso para notificar a la AEPD en 72 horas según el GDPR
- Forensics digital: preservación de evidencias y análisis post-incidente
- Comunicación a afectados: criterios y plantillas para comunicar brechas a los titulares de los datos
- Pruebas de resiliencia: simulacros de incidente (tabletop exercises) y penetration testing periódico

tarea final:
Genera el framework de compliance cloud completo para mi organización, incluyendo: lista de verificación de controles por normativa (ENS, ISO 27001, GDPR) con el nivel de implementación recomendado, plantilla del registro de actividades de tratamiento, política de gestión de incidentes de seguridad, herramientas de automatización recomendadas con sus capacidades específicas, y un roadmap de 18 meses para alcanzar la certificación ISO 27001 y el cumplimiento ENS.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar compliance cloud automatizado con IA para cumplir ENS, ISO 27001 y GDPR en entornos de infraestructura cloud.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Plataforma de soporte omnicanal en la nube con IA para customer success',
                'description'      => 'Diseña una plataforma de atención al cliente en la nube que integra todos los canales de soporte con IA para deflexionar tickets, reducir el tiempo de resolución y mejorar la satisfacción del cliente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer experience (CX), operaciones de soporte y tecnología de servicio al cliente. Tu objetivo es ayudarme a diseñar una plataforma de atención al cliente en la nube que integre todos los canales de contacto con el cliente y use inteligencia artificial para mejorar la eficiencia del equipo y la satisfacción del cliente.

objetivo: Construir un ecosistema tecnológico de soporte omnicanal completamente integrado en la nube que permita al equipo de customer success responder más rápido, resolver más casos en el primer contacto y escalar la atención sin aumentar el headcount proporcionalmente.

instrucción 1 — Arquitectura omnicanal del soporte:
Define los canales y su integración:
- Canales de contacto: email, chat en vivo, teléfono, WhatsApp Business, redes sociales, portal de autoservicio
- Plataforma de helpdesk: Zendesk, Freshdesk o Intercom como hub central de todos los tickets
- CTI (Computer Telephony Integration): integración del teléfono con el CRM para mostrar datos del cliente al agente
- Unificación del historial: todos los contactos del cliente en una única vista, independientemente del canal
- SLA por canal: tiempos de respuesta diferenciados según el canal y la prioridad del ticket

instrucción 2 — IA para la deflexión y automatización de tickets:
Reduce el volumen de tickets con autoservicio inteligente:
- Chatbot de primer nivel: resolución automática de consultas frecuentes sin intervención humana
- Base de conocimiento con IA: búsqueda semántica que devuelve el artículo más relevante ante cada consulta
- IVR inteligente: menú telefónico con reconocimiento de voz que enruta al agente correcto
- Email automation: clasificación automática y respuesta a emails con preguntas estándar
- Proactive support: identificar usuarios que probablemente abrirán un ticket y contactarles antes

instrucción 3 — IA de asistencia al agente:
Multiplica la productividad del equipo de soporte:
- Respuestas sugeridas: la IA propone la respuesta al agente basándose en el historial y la base de conocimiento
- Resumen automático del ticket: si el ticket tiene muchos mensajes, la IA resume la situación al agente
- Detección de sentimiento: alerta al manager cuando un cliente muestra frustración alta en la conversación
- Next best action: sugerencia de la siguiente acción óptima para resolver el ticket más rápido
- Knowledge gap detection: identificación de preguntas frecuentes que no tienen artículo en la base de conocimiento

instrucción 4 — Routing inteligente y gestión de la cola:
Optimiza la distribución del trabajo:
- Skills-based routing: asignación de tickets al agente con las habilidades más adecuadas para resolverlo
- Priority scoring: priorización automática de tickets según el valor del cliente, la urgencia y el SLA
- Workload balancing: distribución equitativa de la carga de trabajo entre agentes disponibles
- Escalation automática: escalado al tier 2 si el ticket no se resuelve en el tiempo esperado
- After-hours automation: respuesta automática fuera del horario con tiempo estimado de respuesta

instrucción 5 — Métricas y mejora continua:
Monitorea y optimiza el rendimiento del soporte:
- KPIs de soporte: CSAT, NPS post-ticket, FCR (First Contact Resolution), AHT (Average Handling Time), TTFR (Time to First Response)
- Dashboard en tiempo real: vista del volumen de tickets, cola, SLA compliance y satisfacción
- Análisis de calidad (QA): revisión automática de conversaciones con criterios de calidad predefinidos
- Voice of Customer: análisis de sentiment y topics frecuentes en los tickets para informar al producto
- Benchmarking: comparación de métricas propias con el benchmark del sector

tarea final:
Genera el diseño completo de la plataforma de soporte para mi empresa, incluyendo: diagrama del flujo omnicanal con los canales y las integraciones, criterios de selección de helpdesk con comparativa de las 3 principales opciones, flujo de automatización del chatbot para los 5 casos de uso más frecuentes en mi sector, dashboard de métricas con definición exacta de cada KPI, y un plan de implementación de 12 semanas con quick wins en las primeras 4 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una plataforma de soporte omnicanal en la nube con IA para mejorar la eficiencia del equipo y la satisfacción del cliente.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'DevOps como servicio para freelancers: infraestructura cloud con IA para clientes',
                'description'      => 'Aprende a ofrecer servicios de DevOps e infraestructura cloud como freelancer, usando IA para automatizar la gestión, escalar sin esfuerzo y posicionarte como experto de alto valor.',
                'prompt_content'   => <<<'EOT'
Eres un consultor especializado en freelancing tecnológico y DevOps con experiencia en construir servicios de infraestructura cloud rentables y escalables. Tu objetivo es ayudarme a diseñar y posicionar un servicio de DevOps as a Service (DaaS) como freelancer, aprovechando la IA para diferenciarte de la competencia y trabajar con mayor eficiencia.

objetivo: Construir un modelo de negocio sostenible como freelancer especializado en DevOps e infraestructura cloud, con servicios productizados, automatización con IA para gestionar múltiples clientes simultáneamente y un posicionamiento que justifique tarifas premium.

instrucción 1 — Definición del servicio productizado de DevOps:
Empaqueta tu expertise en servicios concretos:
- Servicio de setup inicial: migración a la nube o configuración de infraestructura desde cero (entregable fijo, precio fijo)
- Retainer mensual de DevOps: mantenimiento, monitoreo y soporte de infraestructura (precio mensual recurrente)
- Auditoría de infraestructura: revisión del estado actual con recomendaciones priorizadas (entregable: informe PDF)
- Pipeline CI/CD: diseño e implementación de la integración y despliegue continuo para el equipo de desarrollo
- FinOps: análisis y optimización del gasto cloud (tarifa basada en el ahorro generado)

instrucción 2 — Stack tecnológico del freelancer DevOps:
Selecciona las herramientas para operar de forma eficiente:
- Terraform o Pulumi: infraestructura como código para todos los clientes, replicable y versionado
- Ansible: automatización de configuración de servidores
- Kubernetes con Helm: orquestación de contenedores para clientes que requieren alta disponibilidad
- Monitoring: stack Grafana + Prometheus o Datadog para monitorear múltiples clientes desde un único panel
- Gestión de secretos: Vault o AWS Secrets Manager para gestionar credenciales de forma segura
- Documentación: Notion o Confluence para la documentación de la infraestructura de cada cliente

instrucción 3 — IA para escalar el negocio de DevOps freelance:
Multiplica tu capacidad con inteligencia artificial:
- Generación de IaC: usa GitHub Copilot o Claude para generar módulos de Terraform a partir de descripciones
- Diagnóstico de incidencias: IA que analiza logs y sugiere la causa probable de un incidente en segundos
- Documentación automática: generación de documentación de la infraestructura a partir del código
- Reportes mensuales: IA que genera el informe mensual del cliente (disponibilidad, incidentes, optimizaciones) automáticamente
- Propuestas comerciales: generación de propuestas técnicas personalizadas a partir de un briefing del cliente

instrucción 4 — Posicionamiento y captación de clientes DevOps:
Construye tu marca como experto:
- Nicho vertical: especializarte en un sector (HealthTech, FinTech, e-commerce, SaaS B2B) que permita tarifas premium
- Nicho tecnológico: ser el experto en un proveedor cloud específico (AWS, GCP, Azure) o en Kubernetes
- Contenido técnico: artículos, tutoriales y case studies que demuestren expertise real
- Open source: contribuir a proyectos conocidos o publicar módulos de Terraform propios
- Certificaciones: AWS Solutions Architect, Google Professional Cloud Architect o CKA (Kubernetes)

instrucción 5 — Estructura financiera y legal del negocio:
Gestiona el negocio como empresa:
- Forma jurídica: ventajas del autónomo vs. SL para un freelancer de DevOps en España
- Estructura de precios: tarifa por hora vs. precio fijo vs. retainer (cuándo usar cada modelo)
- Contrato de servicios: cláusulas esenciales para proyectos de infraestructura (SLA, responsabilidad, propiedad del código)
- SLA realista: qué tiempos de respuesta y disponibilidad puedes garantizar como freelancer individual
- Seguros profesionales: responsabilidad civil profesional para errores en infraestructura crítica

tarea final:
Genera mi plan de negocio como freelancer DevOps, incluyendo: descripción de los 3 servicios productizados con precio, alcance y entregables; guión de la llamada de descubrimiento con clientes potenciales; plantilla de contrato de servicios de infraestructura; estructura de onboarding de nuevos clientes (primeras 2 semanas); y un plan de 6 meses para pasar de 0 a 3 clientes de retainer estables con ingresos recurrentes de al menos 6.000€/mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y escalar un negocio de DevOps as a Service como freelancer, usando IA para operar con mayor eficiencia.',
                'vote_score'       => 49,
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
