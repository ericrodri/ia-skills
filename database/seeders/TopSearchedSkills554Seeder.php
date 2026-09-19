<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills554Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campaña de marketing para servicios de ciberseguridad con IA',
                'description'      => 'Diseña una estrategia de marketing digital para posicionar y vender servicios de ciberseguridad a empresas de distintos tamaños usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing B2B especializado en tecnología y ciberseguridad, con experiencia en campañas de demanda generada para soluciones de seguridad informática.

Contexto de la empresa:
- Empresa de ciberseguridad: [Nombre, tamaño, años de experiencia]
- Servicios principales: [Pentesting, SOC, consultoría, formación, respuesta a incidentes]
- Mercado objetivo: [Sectores: banca, salud, manufactura, retail; tamaño de empresa]
- Presupuesto de marketing: [Rango mensual disponible]
- Competencia directa: [Empresas con las que compite habitualmente]
- Equipo de marketing: [Número de personas y perfiles]

Objetivo: Crear una campaña de marketing integral que genere leads cualificados de empresas con necesidades reales de ciberseguridad y posicione a la empresa como referente en el sector.

Desarrolla la estrategia completa:

1. POSICIONAMIENTO Y MENSAJES CLAVE
- Propuesta de valor única para cada segmento de cliente objetivo
- Los cinco miedos más comunes de un CISO o Director de TI frente a los ciberataques
- Mensajes de marketing que conectan el miedo con la solución de forma ética
- Diferenciación frente a las grandes consultoras y frente a los proveedores de software únicamente
- Vocabulario técnico correcto vs. lenguaje accesible para decisores no técnicos

2. ESTRATEGIA DE CONTENIDOS DE AUTORIDAD
- Tipos de contenido que generan credibilidad en ciberseguridad (informes de amenazas, casos de incidente, whitepapers técnicos)
- Plan editorial mensual: temas por tipo de contenido y canal
- Webinars y eventos virtuales: estructura y temas de alta demanda
- Estrategia de relaciones públicas: notas de prensa, entrevistas en medios especializados
- Comunidad de CISOs y responsables de seguridad: cómo crearla y dinamizarla

3. CAMPAÑAS DE GENERACIÓN DE DEMANDA
Para cada canal, define la estrategia:
- LinkedIn Ads: segmentación por cargo, sector, tamaño de empresa; formatos más efectivos para ciberseguridad
- Google Ads: palabras clave de intención de compra, estrategia de búsqueda y display
- Email marketing: secuencias de nurturing para leads que descargaron un recurso
- Eventos de industria: cómo maximizar el retorno de participar como patrocinador o ponente
- Account-Based Marketing (ABM): enfoque para las 50 cuentas objetivo prioritarias

4. FUNNEL DE VENTAS Y MARKETING INTEGRADO
- Mapa completo del buyer journey del comprador de ciberseguridad
- Contenidos y acciones para cada etapa (Awareness → Consideration → Decision)
- Criterios de calificación de leads (MQL y SQL) específicos para ciberseguridad
- Proceso de handoff entre marketing y ventas
- SLAs de seguimiento de leads por nivel de madurez

5. PROGRAMA DE REFERIDOS Y PARTNERSHIPS
- Estrategia de canales: integradores, MSPs, consultoras de negocio
- Programa de referidos para clientes actuales
- Alianzas con fabricantes de soluciones de seguridad (resellers, partnerships tecnológicos)
- Co-marketing con asociaciones sectoriales y organismos reguladores

6. MÉTRICAS Y ATRIBUCIÓN
- KPIs del funnel completo desde impresión hasta contrato firmado
- Modelo de atribución para canales múltiples en ciclos de venta largos
- Costo por lead, costo por oportunidad y costo por cliente nuevo
- ROI por campaña y canal

7. PLAN DE ACCIÓN TRIMESTRAL
- Mes 1: auditoría de presencia digital y producción de contenidos ancla
- Mes 2: lanzamiento de campañas pagadas y primeros webinars
- Mes 3: optimización basada en datos y lanzamiento de programa ABM

Entrega la estrategia con ejemplos de anuncios, títulos de contenidos y correos de nurturing listos para usar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marketing B2B para empresas de ciberseguridad',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Auditoría de seguridad de código fuente con IA',
                'description'      => 'Realiza una revisión exhaustiva de seguridad en código fuente identificando vulnerabilidades críticas, vectores de ataque y recomendaciones de remediación.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en seguridad de aplicaciones (AppSec) con experiencia en revisión de código seguro, análisis de vulnerabilidades OWASP y aplicación de estándares de desarrollo seguro como SANS CWE Top 25.

Contexto del proyecto:
- Lenguaje de programación y framework: [Python/Django, Node.js/Express, PHP/Laravel, Java/Spring, etc.]
- Tipo de aplicación: [API REST, aplicación web, microservicios, aplicación móvil]
- Entorno de despliegue: [Cloud pública, on-premise, contenedores]
- Perfil de amenazas: [Aplicación pública, interna, manejo de datos regulados]
- Código a revisar: [Pega aquí el fragmento o describe el módulo]

Objetivo: Identificar y documentar todas las vulnerabilidades de seguridad presentes en el código, priorizarlas por impacto y proporcionar correcciones concretas.

Realiza la auditoría completa en el siguiente orden:

1. RECONOCIMIENTO DEL CÓDIGO
- Identifica el flujo de datos principal (entrada del usuario → procesamiento → almacenamiento → salida)
- Mapea los puntos de entrada de datos externos (parámetros HTTP, archivos, APIs externas, base de datos)
- Identifica dependencias externas y versiones (si son visibles)
- Detecta patrones arquitectónicos y tecnologías de seguridad ya implementadas

2. ANÁLISIS DE VULNERABILIDADES OWASP TOP 10
Para cada categoría, indica si aplica y el nivel de riesgo:
- A01 Control de Acceso Roto: verificación de permisos, referencias directas a objetos
- A02 Fallos Criptográficos: algoritmos obsoletos, transmisión de datos sensibles, almacenamiento de contraseñas
- A03 Inyección: SQL, LDAP, NoSQL, OS command, SSTI, XPath
- A04 Diseño Inseguro: ausencia de controles de negocio, lógica de flujo vulnerable
- A05 Configuración de Seguridad Incorrecta: cabeceras HTTP, exposición de errores, valores por defecto
- A06 Componentes Vulnerables y Desactualizados: librerías con CVEs conocidos
- A07 Fallos de Identificación y Autenticación: gestión de sesiones, contraseñas débiles, MFA ausente
- A08 Fallos de Integridad de Software y Datos: deserialización insegura, integridad de actualizaciones
- A09 Fallos de Registro y Monitoreo: ausencia de logs de seguridad, logs con datos sensibles
- A10 Falsificación de Solicitudes del Lado del Servidor (SSRF)

3. VULNERABILIDADES ADICIONALES (CWE TOP 25)
- Desbordamiento de buffer y problemas de gestión de memoria
- Path traversal y acceso a ficheros no autorizados
- XSS (Cross-Site Scripting): reflejado, almacenado y DOM-based
- CSRF: tokens de verificación ausentes o mal implementados
- Race conditions y problemas de concurrencia
- Exposición de información sensible en logs, errores o comentarios

4. INFORME DE VULNERABILIDADES PRIORIZADAS
Para cada vulnerabilidad encontrada, documenta:
- ID único de vulnerabilidad
- Categoría (OWASP/CWE)
- Severidad: Crítica / Alta / Media / Baja (con justificación CVSS conceptual)
- Descripción técnica del problema
- Línea(s) de código afectadas (si aplica)
- Impacto potencial en confidencialidad, integridad y disponibilidad
- Vector de ataque: cómo un atacante podría explotarlo
- Código vulnerable vs. código corregido (diff comentado)
- Esfuerzo de remediación estimado

5. RECOMENDACIONES ARQUITECTÓNICAS
- Controles de seguridad transversales ausentes en la aplicación
- Patrones de diseño seguro recomendados para este tipo de aplicación
- Herramientas de análisis estático (SAST) recomendadas para CI/CD
- Pruebas de seguridad dinámicas (DAST) sugeridas antes de producción

6. PLAN DE REMEDIACIÓN
- Lista ordenada de vulnerabilidades a corregir por prioridad
- Dependencias entre correcciones
- Quick wins (correcciones inmediatas de bajo esfuerzo y alto impacto)
- Recomendación de revisión de seguridad periódica

Presenta el informe en formato estructurado con tabla resumen ejecutivo al inicio, seguida del análisis detallado por vulnerabilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Revisión de seguridad de código para identificar y remediar vulnerabilidades',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces de seguridad y dashboards de ciberataques con IA',
                'description'      => 'Crea wireframes y especificaciones de diseño para paneles de control de ciberseguridad que comuniquen información crítica de forma clara y accionable.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX/UI especializado en interfaces de gestión de seguridad informática, con experiencia en dashboards de SOC (Security Operations Center), paneles SIEM y herramientas de visualización de amenazas.

Contexto del proyecto:
- Tipo de interfaz: [Dashboard de SOC / Panel de alertas / Consola de gestión de vulnerabilidades / Plataforma de threat intelligence]
- Usuarios principales: [Analistas de seguridad nivel 1-3, CISO, Directores de TI]
- Datos a mostrar: [Alertas en tiempo real, incidentes, vulnerabilidades, eventos de red, métricas de cumplimiento]
- Plataforma: [Aplicación web, SaaS, herramienta on-premise]
- Restricciones: [Acceso 24/7, entornos de pantalla múltiple, contexto de alta presión]

Objetivo: Diseñar una interfaz de ciberseguridad que permita a los analistas detectar, evaluar y responder a amenazas de forma rápida y eficiente, minimizando la fatiga de alertas.

Desarrolla el diseño completo:

1. INVESTIGACIÓN DE USUARIOS Y CONTEXTO DE USO
- Perfiles detallados de los tres tipos de usuario (analista L1, analista L2/L3, CISO)
- Tareas críticas que cada perfil debe completar en menos de 60 segundos
- Contexto ambiental del SOC: múltiples pantallas, trabajo por turnos, alta carga cognitiva
- Principales puntos de fricción en herramientas de seguridad actuales (según investigación de industria)
- Definición de "estado de flujo" para un analista de seguridad: qué necesita ver y cuándo

2. ARQUITECTURA DE INFORMACIÓN
- Jerarquía de información por urgencia y severidad
- Taxonomía de eventos de seguridad y cómo agruparlos visualmente
- Flujo de trabajo del analista: de alerta detectada a incidente cerrado
- Navegación entre vistas: global → específica → detalle de evento
- Sistema de filtros y búsqueda avanzada para volúmenes masivos de eventos

3. SISTEMA VISUAL DE SEVERIDAD Y ESTADOS
Define el sistema visual completo:
- Paleta de colores para severidades (crítica, alta, media, baja, informativa) accesible para personas con daltonismo
- Iconografía de tipos de amenaza y estados de incidente
- Tratamiento visual de alertas activas vs. reconocidas vs. cerradas
- Indicadores de tendencia y cambio (peor/mejor/estable)
- Sistema de badges, etiquetas y chips para metadatos de eventos

4. COMPONENTES DEL DASHBOARD PRINCIPAL
Especifica layout, datos y comportamiento de cada componente:
- Panel de resumen ejecutivo (métricas clave de las últimas 24h)
- Feed de alertas en tiempo real con filtros contextuales
- Mapa de amenazas geográfico interactivo
- Timeline de eventos e incidentes
- Indicadores de salud de sistemas monitorizados
- Widget de SLA e incidentes pendientes de respuesta
- Gráficos de tendencias de ataques (7 días, 30 días)

5. VISTA DE DETALLE DE INCIDENTE
- Layout para mostrar toda la información relevante de un incidente sin scroll excesivo
- Línea de tiempo del incidente con evidencias
- Panel de contexto: información del activo afectado, usuario, historial previo
- Área de notas colaborativas y asignación del incidente
- Acciones rápidas y playbooks de respuesta accesibles desde la vista

6. CONSIDERACIONES DE ACCESIBILIDAD Y RENDIMIENTO
- Diseño para pantallas de alta resolución y configuraciones multi-monitor
- Modo oscuro (estándar en SOC) y modo claro (para presentaciones ejecutivas)
- Comportamiento bajo carga: qué mostrar cuando hay cientos de alertas simultáneas
- Atajos de teclado para acciones críticas
- Diseño responsivo para acceso ocasional desde tablet o móvil

7. ESPECIFICACIONES PARA DESARROLLO
- Componentes de diseño reutilizables en formato especificación
- Estados de cada componente: vacío, cargando, con datos, con error
- Animaciones y microinteracciones para feedback de acciones críticas
- Guía de handoff para desarrolladores: espaciado, comportamientos, tokens de diseño

Entrega las especificaciones en formato estructurado con descripciones visuales detalladas, justificaciones de decisiones de UX y criterios de éxito medibles para validar el diseño con usuarios reales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño de dashboards y interfaces para centros de operaciones de seguridad',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas para soluciones de ciberseguridad empresarial',
                'description'      => 'Diseña un proceso de ventas consultivo completo para comercializar soluciones de ciberseguridad a medianas y grandes empresas con ciclos de venta complejos.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Ventas con más de diez años de experiencia en ventas enterprise de soluciones de ciberseguridad, con conocimiento profundo de los ciclos de compra en este sector y de las dinámicas de los equipos de TI y seguridad en grandes organizaciones.

Contexto:
- Empresa vendedora: [Tamaño, tipo de soluciones: software, servicios gestionados, consultoría]
- Solución principal: [Firewall de nueva generación, EDR, SIEM, SOC as a service, etc.]
- Target: [Empresa mediana 200-1000 empleados / Grande +1000 empleados]
- Ciclo de venta promedio actual: [Duración en meses]
- Equipo de ventas: [Número, roles: SDR, Account Executive, Solution Architect, CISO Advisor]
- Ticket promedio: [Rango en USD/EUR anuales]

Objetivo: Construir un proceso de ventas consultivo que acorte el ciclo de venta y aumente la tasa de cierre en oportunidades de ciberseguridad enterprise.

Desarrolla el proceso completo:

1. MAPA DE STAKEHOLDERS EN CIBERSEGURIDAD
Para una empresa objetivo típica, identifica:
- CISO / Director de Seguridad: motivaciones, miedos, criterios de decisión
- CTO / Director de TI: preocupaciones técnicas, restricciones operativas
- CFO: ROI esperado, presupuesto vs. compra reactiva post-incidente
- CEO / Consejo de Administración: riesgos regulatorios, reputación, continuidad de negocio
- Responsable de Compras / Legal: criterios de evaluación de proveedores, requisitos contractuales
- Cómo construir un mapa de aliados e influenciadores dentro del cliente

2. PROCESO DE DISCOVERY Y DIAGNÓSTICO
- Metodología para identificar el nivel de madurez de seguridad del cliente
- Las 15 preguntas de diagnóstico más efectivas para descubrir necesidades latentes y explícitas
- Cómo usar un framework de evaluación de riesgos (NIST, ISO 27001) como herramienta de venta
- Técnica del "día en la vida del CISO": empatizar con los desafíos del interlocutor
- Cómo convertir un incidente reciente del sector en una conversación de valor sin ser oportunista

3. PROPUESTA DE VALOR ADAPTADA POR PERFIL
- Argumentario técnico para el equipo de seguridad (funcionalidades, integraciones, rendimiento)
- Argumentario de negocio para el CFO (ROI, TCO, costo de un incidente vs. costo de la solución)
- Argumentario regulatorio para el área legal (cumplimiento GDPR, NIS2, ENS, PCI-DSS)
- Argumentario estratégico para el CEO (gestión de riesgos, continuidad, reputación)

4. GESTIÓN DE OBJECIONES ESPECÍFICAS DE CIBERSEGURIDAD
Respuestas desarrolladas para las 10 objeciones más frecuentes:
- "Ya tenemos suficiente con las soluciones actuales"
- "Es demasiado caro para nuestro presupuesto"
- "Prefiero trabajar con el fabricante directamente"
- "Necesitamos evaluarlo con el proveedor de servicios gestionados que ya tenemos"
- "No hemos tenido ningún incidente grave, no vemos la urgencia"
- "El proyecto está congelado hasta el próximo ejercicio fiscal"
- "Necesitamos un piloto gratuito de 6 meses antes de comprometernos"
- "Tu solución es demasiado compleja para nuestro equipo"
- "Tenemos dudas sobre la escalabilidad en nuestro entorno"
- "Prefiero una solución local, no en la nube"

5. PROCESO DE EVALUACIÓN TÉCNICA Y POC
- Cómo estructurar una prueba de concepto que demuestre valor en 30 días
- Criterios de éxito del POC acordados por escrito con el cliente
- Cómo evitar que el POC se convierta en un proyecto gratuito interminable
- Presentación de resultados del POC al comité de decisión

6. NEGOCIACIÓN Y CIERRE
- Estrategias de pricing para contratos anuales vs. plurianuales
- Construcción del business case final para el comité de aprobación
- Técnicas de cierre adaptadas a comités de decisión (no a un solo interlocutor)
- Manejo de la negociación final con compras sin perder margen innecesariamente

7. POST-VENTA Y EXPANSIÓN DE CUENTA
- Proceso de onboarding del nuevo cliente para maximizar adopción y satisfacción temprana
- Cadencia de revisiones de valor (QBR) con el cliente
- Identificación de oportunidades de upsell y cross-sell a los 6 y 12 meses
- Programa de referidos con clientes satisfechos

Incluye plantillas de correo para cada etapa del proceso y ejemplos concretos de preguntas de discovery y respuestas a objeciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Ventas consultivas de soluciones de ciberseguridad enterprise',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto para plataforma de gestión de vulnerabilidades',
                'description'      => 'Define la estrategia de producto y el plan de desarrollo para una plataforma SaaS de gestión de vulnerabilidades y cumplimiento de seguridad.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en productos de ciberseguridad B2B, específicamente en plataformas de gestión de vulnerabilidades, cumplimiento normativo y riesgo de seguridad.

Contexto del producto:
- Nombre del producto: [Nombre de la plataforma]
- Estado actual: [Pre-lanzamiento / Beta / En producción con N clientes]
- Funcionalidades existentes: [Escaneo de vulnerabilidades, inventario de activos, reporting]
- Competidores principales: [Tenable, Qualys, Rapid7, Wiz, Orca, etc.]
- Segmento objetivo: [PYME, mediana empresa, enterprise, sector específico]
- Equipo de desarrollo: [Número de ingenieros, squads, metodología]
- ARR actual y objetivo: [Cifras o crecimiento esperado]

Objetivo: Construir un roadmap estratégico de 18 meses que diferencie el producto en el mercado de seguridad y maximice la retención y expansión de clientes.

Desarrolla el plan:

1. ANÁLISIS COMPETITIVO Y POSICIONAMIENTO
- Matriz comparativa de funcionalidades vs. los tres principales competidores
- Identificación de gaps de mercado no cubiertos adecuadamente
- Segmento de cliente en el que el producto puede ser el líder absoluto
- Propuesta de valor única: por qué elegir este producto sobre las alternativas
- Estrategia de diferenciación: precio, experiencia de usuario, integraciones, cobertura

2. VOZ DEL CLIENTE (RESEARCH)
Diseña el programa de research de usuarios:
- Entrevistas con CISOs y responsables de seguridad: guía de preguntas para descubrir jobs-to-be-done
- Análisis de churn: por qué los clientes cancelan y qué les haría quedarse
- Feature requests más demandados por el Customer Success y el equipo de ventas
- Benchmark de NPS y CSAT por tipo de cliente y tamaño de empresa
- Síntesis de hallazgos en oportunidades de producto priorizadas

3. BACKLOG ESTRATÉGICO DE FUNCIONALIDADES
Define y documenta 25 funcionalidades potenciales organizadas por tema:
- Detección y escaneo (cobertura de activos, agentes, APIs, contenedores, cloud)
- Priorización de vulnerabilidades (scoring contextual, riesgo real vs. CVSS teórico)
- Remediación asistida (tickets automáticos en Jira/ServiceNow, playbooks, SLAs)
- Cumplimiento y reporting (CIS Benchmarks, ISO 27001, GDPR, NIS2, PCI-DSS)
- Inteligencia de amenazas (enriquecimiento con feeds externos, threat intel)
- Experiencia del usuario y reducción de fatiga de alertas

4. FRAMEWORK DE PRIORIZACIÓN
Aplica para las top 25 funcionalidades:
- Scoring RICE con los parámetros del negocio actual
- Análisis de impacto en retención vs. impacto en adquisición
- Dependencias técnicas entre funcionalidades
- Alineación con compromisos comerciales (feature requests de cuentas grandes)
- Resultado: lista ordenada con justificación de las 10 primeras posiciones

5. ROADMAP POR TRIMESTRES (18 MESES)
- Q1: fundamentos y corrección de deuda técnica crítica
- Q2: funcionalidades diferenciadas para el segmento objetivo
- Q3: expansión a nuevos casos de uso o segmentos adyacentes
- Q4: integraciones estratégicas y ecosystem
- Q5-Q6: innovación basada en IA y automatización avanzada

Para cada trimestre: objetivo de producto, funcionalidades incluidas, métrica de éxito y recursos necesarios.

6. GO-TO-MARKET POR LANZAMIENTO
Para cada funcionalidad mayor, define:
- Target de cliente y caso de uso primario
- Posicionamiento y mensajes de marketing
- Materiales de enablement para ventas
- Estrategia de beta testing y early adopters
- Criterios de lanzamiento general (GA) y métricas de adopción

7. MÉTRICAS DE PRODUCTO Y SALUD DEL NEGOCIO
- Árbol de métricas con North Star Metric y sus impulsores
- Métricas de activación, engagement y retención por cohorte
- Indicadores de expansión de cuenta (upsell y cross-sell)
- Health Score del cliente para predecir churn

Entrega el roadmap en formato visual (descrito en texto estructurado) con tabla resumen ejecutivo y justificación de las decisiones de priorización más relevantes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Estrategia de producto para plataformas SaaS de ciberseguridad',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Formación en cultura de ciberseguridad para empleados con IA',
                'description'      => 'Diseña un programa completo de concienciación y formación en ciberseguridad para empleados de una organización, reduciendo el riesgo humano.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en formación en ciberseguridad y gestión del factor humano del riesgo, con experiencia en programas de security awareness para empresas de distintos sectores y tamaños.

Contexto de la organización:
- Empresa: [Sector, número de empleados, distribución geográfica]
- Nivel actual de concienciación: [Ninguno / Formación anual básica / Programa activo]
- Incidentes recientes o preocupaciones: [Phishing, ingeniería social, robo de credenciales]
- Perfiles de empleados: [Directivos, empleados de oficina, trabajadores en campo, técnicos de TI]
- Herramientas disponibles: [LMS corporativo, email, intranet, aplicación móvil]
- Requisitos regulatorios: [GDPR, ISO 27001, ENS, sector financiero, salud]

Objetivo: Diseñar e implementar un programa de security awareness que cambie comportamientos reales y reduzca el riesgo humano de forma medible y sostenida.

Desarrolla el programa completo:

1. DIAGNÓSTICO DE CULTURA DE SEGURIDAD
- Metodología para evaluar el nivel actual de concienciación (encuesta de cultura de seguridad)
- Simulación de phishing inicial: cómo estructurarla sin dañar la confianza del empleado
- Identificación de los tres comportamientos de riesgo más comunes en la organización
- Análisis de incidentes anteriores: lecciones aprendidas y brechas de conocimiento
- Segmentación de empleados por perfil de riesgo

2. DISEÑO DEL PROGRAMA DE FORMACIÓN
Estructura un programa anual de 12 meses:
- Formación inicial de incorporación para nuevos empleados
- Módulos mensuales de microlearning (5-10 minutos por tema)
- Temario completo: phishing y spear phishing, contraseñas seguras y gestores, MFA, ingeniería social, uso seguro de dispositivos, teletrabajo seguro, protección de datos personales, incidentes: cómo reportarlos, redes Wi-Fi públicas y VPN, shadow IT y software no autorizado
- Formación especializada para perfiles de alto riesgo (directivos, RRHH, finanzas, TI)
- Ejercicios prácticos: simulaciones, quizzes, juegos de rol

3. ESTRATEGIA DE COMUNICACIÓN Y ENGAGEMENT
- Plan de comunicación interna para lanzar y mantener el programa
- Elementos de gamificación: puntos, badges, leaderboards por equipo
- Campañas temáticas mensuales con materiales visuales (posters, email, intranet)
- Embajadores de seguridad en cada departamento: selección, formación y rol
- Cómo hacer que hablar de ciberseguridad sea parte de la cultura y no una obligación

4. SIMULACIONES DE PHISHING
- Metodología de simulación ética: tipos de ataque a simular por trimestre
- Protocolo de actuación con empleados que caen: formación inmediata sin estigmatización
- Evolución de la complejidad de las simulaciones a lo largo del año
- Métricas de éxito: tasa de clic, reporte de sospecha, tiempo de detección
- Cómo comunicar los resultados a dirección sin crear ambiente de desconfianza

5. FORMACIÓN PARA DIRECTIVOS Y ALTA DIRECCIÓN
- Módulo específico: riesgos de spear phishing y Business Email Compromise (BEC)
- Protocolo de verificación de transferencias y cambios de datos bancarios
- Cómo hablar de ciberseguridad en el Consejo de Administración
- Gestión de crisis: rol del directivo durante un incidente de seguridad

6. MEDICIÓN Y MEJORA CONTINUA
- KPIs del programa: tasa de participación, resultados de simulaciones, incidentes reportados por empleados
- Encuesta de satisfacción y efectividad percibida del programa
- Revisión trimestral y ajuste de contenidos según nuevas amenazas
- Informe anual de cultura de seguridad para el Comité de Dirección

7. PLAN DE IMPLEMENTACIÓN
- Fase 1 (Mes 1): diagnóstico, diseño del programa y preparación de materiales
- Fase 2 (Mes 2-3): lanzamiento con comunicación interna y primera formación
- Fase 3 (Mes 4-12): programa mensual de microlearning y simulaciones trimestrales

Incluye ejemplos de módulos de formación, plantillas de comunicación interna y estructura del informe de métricas para la dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Programas de concienciación y formación en ciberseguridad para empleados',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Cuantificación financiera del riesgo de ciberseguridad con IA',
                'description'      => 'Construye un modelo de cuantificación financiera del ciberriesgo para apoyar decisiones de inversión en seguridad y justificar el presupuesto ante dirección.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista de riesgo cuantitativo especializado en ciberseguridad, con experiencia en metodologías FAIR (Factor Analysis of Information Risk), modelado de pérdidas esperadas y presentación de riesgo en términos financieros a consejos de administración.

Contexto de la organización:
- Sector y tamaño: [Industria, número de empleados, ingresos anuales]
- Activos de información críticos: [Bases de datos de clientes, propiedad intelectual, sistemas de control industrial, infraestructura financiera]
- Amenazas principales identificadas: [Ransomware, robo de datos, fraude interno, ataques a la cadena de suministro]
- Controles de seguridad actuales: [Lista de medidas implementadas]
- Presupuesto de seguridad actual: [Porcentaje sobre ingresos o cifra absoluta]
- Objetivo del análisis: [Justificar inversión / Priorizar controles / Cumplimiento regulatorio]

Objetivo: Construir un modelo de cuantificación financiera del ciberriesgo que permita tomar decisiones de inversión en seguridad basadas en datos económicos, no solo en percepciones técnicas.

Desarrolla el modelo completo:

1. IDENTIFICACIÓN Y VALORACIÓN DE ACTIVOS
- Metodología para identificar activos de información y sus propietarios
- Criterios de valoración de activos: impacto en operaciones, regulación, reputación
- Técnica para calcular el valor de la información (costo de recreación, valor de mercado, impacto regulatorio)
- Clasificación por criticidad: activos de misión crítica vs. importantes vs. secundarios
- Mapa de activos con valor económico estimado

2. ANÁLISIS DE AMENAZAS Y VULNERABILIDADES
- Taxonomía de amenazas relevantes para el sector
- Frecuencia de ocurrencia esperada por tipo de amenaza (fuentes: informes de industria, histórico de incidentes)
- Análisis de vulnerabilidades: cómo la postura de seguridad actual afecta la probabilidad de éxito de un ataque
- Modelado de escenarios de amenaza: los cinco escenarios de pérdida más probables y graves
- Uso de inteligencia de amenazas externa para calibrar probabilidades

3. MODELO DE PÉRDIDAS FAIR
Para cada escenario de amenaza principal, calcula:
- Frecuencia de Pérdida Probable (PLF): cuántas veces ocurrirá en un año
- Magnitud de Pérdida Probable (PLM): cuánto costará cada evento
- Componentes de la pérdida: respuesta al incidente, pérdida de productividad, multas regulatorias, daño reputacional, robo de IP, extorsión
- Rango de pérdida esperada anual (ALE) con intervalos de confianza
- Distribución de probabilidad de pérdidas (simulación Monte Carlo simplificada)

4. ANÁLISIS COSTO-BENEFICIO DE CONTROLES
Para cada inversión de seguridad considerada:
- Costo total de implementación y mantenimiento anual
- Reducción esperada en frecuencia de pérdida (efecto en PLF)
- Reducción esperada en magnitud de pérdida (efecto en PLM)
- Retorno de la inversión en seguridad (ROSI): ahorro en pérdidas esperadas vs. costo del control
- Priorización de inversiones por ROSI: qué comprar primero con presupuesto limitado

5. MODELO DE SEGURO CIBERNÉTICO
- Análisis de si el seguro cibernético complementa o sustituye controles de seguridad
- Factores que afectan la prima: postura de seguridad, sector, historial de incidentes
- Cobertura típica vs. exclusiones más comunes a verificar
- Cómo usar el modelo de cuantificación para negociar mejores condiciones con aseguradoras

6. REPORTE EJECUTIVO PARA CONSEJO DE ADMINISTRACIÓN
- Estructura del informe de riesgo cibernético cuantificado (máximo 5 páginas ejecutivas)
- Cómo presentar el riesgo en euros/dólares en lugar de semáforos de color
- Visualizaciones recomendadas: distribución de pérdidas, comparativa con inversión actual, mapa de calor financiero
- Lenguaje y nivel de detalle adecuado para audiencia no técnica
- Cómo ligar el riesgo cibernético al apetito de riesgo corporativo

7. ACTUALIZACIÓN Y GOBIERNO DEL MODELO
- Frecuencia de revisión del modelo (mínimo anual, tras cambios mayores)
- Cómo incorporar nuevos datos de incidentes del sector para recalibrar
- Roles y responsabilidades en el proceso de cuantificación
- Integración con el programa de gestión de riesgos empresariales (ERM)

Entrega el modelo con fórmulas conceptuales explicadas, rangos de referencia por sector y ejemplos numéricos ilustrativos para los cálculos más críticos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Cuantificación financiera del ciberriesgo para decisiones de inversión en seguridad',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Asesoría legal en respuesta a incidentes de ciberseguridad',
                'description'      => 'Diseña el protocolo legal completo para gestionar la respuesta a un incidente de ciberseguridad, cumplir obligaciones de notificación y minimizar la responsabilidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho de la ciberseguridad, protección de datos y respuesta a incidentes, con experiencia asistiendo a empresas durante brechas de datos y ataques de ransomware.

Contexto:
- Empresa afectada: [Sector, número de empleados, países donde opera]
- Tipo de incidente: [Ransomware / Brecha de datos / Acceso no autorizado / Ataque a infraestructura crítica]
- Datos afectados: [Datos personales de clientes/empleados, datos financieros, propiedad intelectual, datos de salud]
- Normativa aplicable: [GDPR / Ley Orgánica de Protección de Datos / NIS2 / sector financiero / salud]
- Estado actual del incidente: [Detectado en curso / Contenido / En investigación forense]

Objetivo: Guiar a la empresa a través del proceso legal de respuesta al incidente, cumpliendo todas las obligaciones legales y minimizando la exposición a sanciones y responsabilidad civil.

Desarrolla el protocolo legal completo:

1. EVALUACIÓN INICIAL Y ACTIVACIÓN DEL PROTOCOLO
- Lista de verificación de las primeras 4 horas tras detectar un incidente
- Criterios para determinar si el incidente es notificable a la autoridad de protección de datos
- Activación del equipo de respuesta: roles internos (DPO, Legal, TI, Comunicación, Dirección) y externos (abogados, forenses digitales, aseguradora)
- Instrucciones de preservación de evidencias digitales para el equipo técnico
- Establecimiento de privilegio abogado-cliente para proteger las comunicaciones internas de investigación

2. OBLIGACIONES DE NOTIFICACIÓN
Para cada marco regulatorio aplicable, determina:
- A quién notificar: autoridad de control, clientes afectados, socios comerciales, reguladores sectoriales
- Plazos legales: 72 horas para GDPR, otros marcos según normativa aplicable
- Contenido mínimo de cada notificación (qué debe incluir y qué NO incluir para no agravar la situación)
- Plantilla de notificación a la autoridad de control de protección de datos
- Plantilla de comunicación a los afectados: tono, canales, información de contacto
- Gestión de notificaciones cuando la investigación forense aún no ha concluido

3. INVESTIGACIÓN FORENSE Y CADENA DE CUSTODIA
- Requisitos legales para que la evidencia forense sea válida en procedimientos judiciales
- Rol del abogado en la supervisión de la investigación forense
- Contratación de peritos forenses externos: qué incluir en el contrato
- Documentación del incidente: registros que deben conservarse y durante cuánto tiempo
- Cuándo involucrar a las Fuerzas y Cuerpos de Seguridad del Estado y cómo hacerlo

4. GESTIÓN DE RESPONSABILIDAD CIVIL Y REGULATORIA
- Análisis de las posibles vías de responsabilidad: regulatoria, civil de terceros, penal
- Factores mitigantes que reducen las sanciones (cooperación, medidas previas, rapidez de respuesta)
- Cómo prepararse para la inspección de la autoridad de control
- Interlocución con la autoridad reguladora durante la investigación
- Estrategia de defensa ante un expediente sancionador post-incidente

5. GESTIÓN DE RECLAMACIONES DE AFECTADOS
- Protocolo de respuesta a reclamaciones individuales de clientes o empleados afectados
- Evaluación de la viabilidad de acuerdos extrajudiciales vs. litigación
- Gestión de demandas colectivas (class actions en jurisdicciones donde aplique)
- Rol de la aseguradora cibernética en la gestión de reclamaciones
- Comunicación con afectados durante el proceso de resolución

6. LECCIONES APRENDIDAS Y MEJORAS LEGALES
Post-incidente, revisar:
- Actualización de contratos con proveedores: cláusulas de ciberseguridad y notificación
- Revisión de la política de privacidad y el registro de actividades de tratamiento
- Evaluación del seguro cibernético: cobertura real durante el incidente vs. expectativas
- Formación del personal sobre obligaciones de notificación interna
- Actualización del plan de respuesta a incidentes con los aprendizajes jurídicos

7. PLANTILLAS Y DOCUMENTOS ESENCIALES
- Acuerdo de confidencialidad para el equipo de respuesta externo
- Registro del incidente (formato para documentar todo el proceso)
- Plantilla de notificación a la AEPD u autoridad equivalente
- Plantilla de comunicación a afectados (tono empático y legalmente correcto)
- Checklist legal de cierre del incidente

Entrega el protocolo con referencias normativas específicas, plazos concretos y plantillas de documentos listas para adaptar a la situación real.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Protocolo legal para gestión de incidentes de ciberseguridad y brechas de datos',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico de ciberseguridad para usuarios no técnicos con IA',
                'description'      => 'Diseña protocolos y scripts de atención para ayudar a usuarios no técnicos a responder ante incidentes de seguridad, phishing y amenazas digitales.',
                'prompt_content'   => <<<'EOT'
Actúa como un responsable de Soporte Técnico con especialización en seguridad informática, con experiencia en atender a usuarios no técnicos durante situaciones de crisis relacionadas con ciberseguridad, como phishing, malware, pérdida de acceso a cuentas y ransomware.

Contexto del equipo de soporte:
- Organización: [Empresa, sector, número de empleados a los que da soporte]
- Perfil de usuario típico: [Edad, nivel técnico, modalidad de trabajo: presencial/remoto/híbrido]
- Canales de soporte actuales: [Teléfono, ticketing, chat, presencial]
- Principales incidentes de seguridad reportados: [Phishing, pérdida de contraseña, acceso no autorizado, ransomware]
- Herramientas de seguridad disponibles: [Antivirus, EDR, gestor de contraseñas, MFA]

Objetivo: Crear un sistema de soporte en ciberseguridad que permita al equipo responder de forma rápida, correcta y comprensible a usuarios no técnicos, reduciendo el impacto de los incidentes de seguridad.

Desarrolla el sistema completo:

1. ÁRBOL DE DECISIÓN POR TIPO DE INCIDENTE
Para cada tipo de incidente, crea un árbol de decisión con preguntas y acciones:
- Usuario que sospecha haber recibido phishing (¿hizo clic? ¿ingresó credenciales? ¿descargó archivo?)
- Usuario que sospecha que su equipo tiene malware (síntomas: lentitud, pop-ups, comportamiento extraño)
- Usuario que recibió un correo de ransomware o nota de rescate en su pantalla
- Usuario que no puede acceder a su cuenta (contraseña incorrecta, MFA no funciona)
- Usuario que recibió un aviso de inicio de sesión no reconocido
- Usuario que compartió accidentalmente información confidencial

2. SCRIPTS DE ATENCIÓN POR CANAL
Para cada escenario, escribe el script completo:
- Apertura de llamada y recopilación rápida de información
- Preguntas diagnósticas en lenguaje no técnico
- Instrucciones paso a paso que el usuario puede seguir sin conocimientos técnicos
- Frases de tranquilización para usuarios en estado de pánico
- Cómo explicar los próximos pasos de forma clara y sin jerga
- Cierre de la interacción y seguimiento

3. GUÍA DE TRIAJE Y PRIORIZACIÓN
- Clasificación de incidentes por urgencia y potencial impacto
- Criterios para escalar al equipo de seguridad (SOC, CISO, DPO)
- Acciones de contención inmediata que el agente de soporte puede ordenar (desconectar red, bloquear cuenta)
- Qué información recopilar antes de escalar
- SLA de respuesta por nivel de severidad

4. MATERIALES DE AUTOAYUDA PARA USUARIOS
Crea el contenido para:
- FAQ de seguridad respondidas en lenguaje simple: las 20 preguntas más frecuentes
- Checklist del usuario para detectar phishing antes de hacer clic
- Guía de configuración de MFA paso a paso (para los servicios más usados en la empresa)
- Guía de contraseñas seguras y uso del gestor corporativo
- Qué hacer y qué NO hacer si crees que tu equipo tiene un virus

5. FORMACIÓN DEL EQUIPO DE SOPORTE
- Conocimientos mínimos de seguridad que todo agente de soporte debe tener
- Plan de formación mensual: un tema de seguridad por mes, 30 minutos
- Simulacros internos: cómo practicar la respuesta a incidentes en el equipo de soporte
- Glosario de términos de ciberseguridad en lenguaje accesible para el agente y para el usuario
- Recursos de actualización de conocimientos (boletines, podcasts, blogs)

6. MÉTRICAS DE CALIDAD EN SOPORTE DE SEGURIDAD
- KPIs específicos para incidentes de seguridad: tiempo de respuesta inicial, tiempo de contención, tasa de resolución en el primer contacto
- Calidad de la respuesta: cómo evaluar si el agente siguió el protocolo correctamente
- Registro de incidentes: qué documentar en el ticket para análisis posterior
- Reporte mensual de incidentes de seguridad para el equipo de ciberseguridad

7. COMUNICACIÓN DE CRISIS AL USUARIO
Cuando el incidente es grave (ransomware en marcha, brecha confirmada):
- Cómo comunicar la situación al usuario afectado sin generar pánico adicional
- Instrucciones de contención que el usuario debe seguir de inmediato
- Coordinación con el equipo de seguridad y comunicación interna
- Seguimiento post-incidente con el usuario: explicación de lo ocurrido y medidas adoptadas

Entrega el sistema con los scripts completos, árboles de decisión en formato texto estructurado y plantillas de tickets para cada tipo de incidente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Atención y soporte técnico en incidentes de ciberseguridad para usuarios no técnicos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer en consultoría de ciberseguridad para PYMES',
                'description'      => 'Construye tu negocio freelance como consultor de ciberseguridad para pequeñas y medianas empresas, desde la propuesta de servicios hasta la fidelización de clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio freelance especializado en ciberseguridad, con experiencia asesorando a consultores independientes que quieren construir una práctica rentable enfocada en pymes y organizaciones con recursos limitados de TI.

Contexto del consultor:
- Experiencia técnica: [Años de experiencia, certificaciones: CISSP, CISM, CEH, CompTIA Security+, ISO 27001 LA]
- Especialización: [Evaluaciones de riesgo, implementación de controles, cumplimiento regulatorio, formación, respuesta a incidentes]
- Mercado objetivo: [PYME de 20-200 empleados, sector específico o generalista]
- Situación actual: [Recién independizado / Con algunos clientes / Quiere escalar]
- Objetivo de facturación mensual: [Cifra o rango]
- Ubicación y mercado: [País, idioma de trabajo, trabajo remoto o presencial]

Objetivo: Construir un negocio freelance de consultoría de ciberseguridad sostenible, con ingresos predecibles y clientes recurrentes.

Desarrolla el plan completo:

1. POSICIONAMIENTO Y NICHO DE MERCADO
- Por qué especializarse en PYME es una ventaja competitiva frente a grandes consultoras
- Identificación de tu nicho específico: sector (salud, legal, manufacturing, e-commerce) o tipo de servicio
- Propuesta de valor diferenciada: qué ofreces que las grandes firmas no pueden o no quieren
- Cómo comunicar ciberseguridad en lenguaje de negocio para el empresario de PYME
- Tu historia de credibilidad: cómo construir autoridad sin el respaldo de una marca grande

2. CATÁLOGO DE SERVICIOS Y PRECIOS
Para cada servicio, define entregables, duración y precio:
- Evaluación de riesgo inicial (diagnóstico de seguridad en 5 días): metodología y entregable
- Plan de seguridad básico para PYME (priorización de controles según presupuesto)
- Implementación asistida de controles: gestión de contraseñas, MFA, backup, email seguro
- Auditoría de cumplimiento: GDPR, ISO 27001 básica, ENS categoría básica
- Formación en ciberseguridad para empleados: taller de medio día presencial o virtual
- Retainer mensual de CISO virtual: cuántas horas, qué incluye, precio por tamaño de empresa
- Respuesta urgente a incidentes: tarifa de emergencia y disponibilidad

3. GENERACIÓN DE CLIENTES
Estrategias específicas para conseguir clientes PYME como freelancer:
- Networking local: asociaciones empresariales, cámaras de comercio, eventos de sector
- LinkedIn para consultores de ciberseguridad: estrategia de contenido semanal y perfil optimizado
- Alianzas con gestorías, despachos de abogados y consultores de negocio que ya tienen la confianza del empresario
- Alianzas con proveedores de TI y MSPs: modelo de referidos y co-venta
- Contenido de autoridad: artículos, charlas, webinars para empresarios no técnicos
- Plataformas de freelance para ciberseguridad

4. PROCESO COMERCIAL Y PROPUESTA
- Reunión de diagnóstico gratuita: cómo estructurarla para que el cliente vea el valor inmediatamente
- Propuesta de servicios para PYME: estructura, longitud y elementos clave
- Cómo presentar el precio de ciberseguridad en términos de riesgo y no de costo
- Gestión de la objeción más frecuente: "somos muy pequeños para que nos ataquen"
- Técnica de diagnóstico exprés: cómo dar un valor previo a la propuesta que justifique el contrato

5. CONTRATOS Y PROTECCIÓN LEGAL
- Cláusulas esenciales en el contrato de consultoría de ciberseguridad
- Limitación de responsabilidad: cómo protegerte ante incidentes ocurridos tras tu trabajo
- Propiedad intelectual de las metodologías y herramientas que creas
- Política de confidencialidad y acuerdos de no divulgación (NDA)
- Seguro de responsabilidad civil profesional: cuándo y cuánto

6. OPERACIONES Y ESCALABILIDAD
- Herramientas para gestionar tu práctica freelance: CRM, facturación, gestión de proyectos
- Plantillas y metodologías propias que aceleran la entrega de servicios
- Cuándo y cómo subcontratar trabajo especializado (forense, pentesting, formación)
- Modelo de retainer mensual: cómo convertir proyectos puntuales en ingresos recurrentes
- Transición de consultor a agencia: cuándo tiene sentido y cómo hacerlo

7. PLAN FINANCIERO Y METAS
- Proyección de ingresos para los primeros 12 meses
- Número de clientes activos necesarios para alcanzar el objetivo financiero
- Mix de servicios recomendado: diagnósticos, proyectos e implementaciones, retainers
- Inversión en certificaciones, herramientas y marketing para los primeros 6 meses
- KPIs mensuales para medir la salud del negocio freelance

Entrega el plan con plantillas de propuesta, correos de prospección a dueños de PYME y estructura de la reunión de diagnóstico inicial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negocio freelance de consultoría de ciberseguridad para pequeñas y medianas empresas',
                'vote_score'       => 38,
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
