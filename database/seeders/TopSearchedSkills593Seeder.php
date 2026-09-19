<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills593Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de contenido científico para empresas de biotecnología',
                'description'      => 'Usa IA para crear estrategias de contenido que traduzcan investigación científica compleja en mensajes claros para inversores, clientes y el público general en el sector biotech.',
                'prompt_content'   => <<<'EOT'
Eres un director de marketing especializado en comunicación científica para el sector de biotecnología y ciencias de la vida. Tu expertise combina rigor científico con estrategia de comunicación clara y atractiva para distintas audiencias.

Contexto de la empresa:
- Nombre y descripción de la empresa biotech: [describe brevemente la empresa]
- Etapa de desarrollo: [investigación básica, preclínica, fase I/II/III, comercialización]
- Área terapéutica o aplicación: [oncología, genómica, diagnóstico, agro-biotech, bioproducción, etc.]
- Audiencias objetivo: [inversores, médicos/KOLs, pacientes, agencias reguladoras, medios, talento científico]
- Canal principal de comunicación: [web, LinkedIn, conferencias científicas, publicaciones, etc.]

Desarrolla una estrategia de contenido científico completa:

1. ARQUITECTURA DE MENSAJES POR AUDIENCIA
Para cada audiencia clave, define:
- Mensaje principal (value proposition en términos comprensibles para esa audiencia)
- 3 mensajes secundarios de soporte con evidencia científica accesible
- Tono y nivel de tecnicismo adecuado
- Call to action específico por audiencia

Ejemplo de adaptación: el mismo ensayo clínico descrito para un inversor de venture capital vs. un oncólogo vs. un paciente.

2. PLAN DE CONTENIDO PARA 3 MESES
Crea un calendario editorial con:
- 2 artículos de blog científico al mes (títulos y estructura de cada uno)
- 4 posts de LinkedIn por semana (temas, formato: artículo, carrusel, vídeo corto)
- 1 white paper trimestral para inversores o médicos (estructura y datos clave)
- Newsletter mensual para la comunidad científica (secciones y tono)

3. GUÍA DE COMUNICACIÓN DE DATOS CIENTÍFICOS
Explica cómo comunicar correctamente:
- Resultados de estudios preclínicos sin generar expectativas infundadas
- Tasas de éxito en ensayos clínicos en contexto con la industria
- Mecanismos de acción complejos mediante analogías y visualizaciones
- Incertidumbre científica de manera honesta sin asustar a inversores

4. SEO CIENTÍFICO
Define una estrategia de posicionamiento en buscadores para el nicho biotech:
- 20 keywords de alto valor por área terapéutica (mezcla de términos técnicos y divulgativos)
- Estructura de artículos que combine rigor científico con accesibilidad SEO
- Estrategia de enlaces con publicaciones científicas (PubMed, preprints, revistas especializadas)

5. GESTIÓN DE CRISIS DE COMUNICACIÓN CIENTÍFICA
Protocolo para gestionar:
- Resultados negativos en ensayos clínicos (comunicado a inversores, a medios, a la comunidad)
- Cuestionamiento de datos por parte de la comunidad científica
- Desinformación o cobertura mediática inexacta sobre la tecnología

6. MÉTRICAS DE ÉXITO
Define KPIs adaptados al sector:
- Número de citas en publicaciones científicas
- Autoridad de dominio en nichos científicos específicos
- Engagement de KOLs (Key Opinion Leaders)
- Leads calificados de inversores y socios tecnológicos

Entrega la estrategia en formato de documento ejecutivo con ejemplos concretos de copy y estructura de contenidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de contenido científico para empresas biotech dirigido a múltiples audiencias',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Diseñar software de gestión de datos para laboratorios de investigación',
                'description'      => 'Usa IA para especificar, diseñar y documentar sistemas de software para la gestión de datos experimentales, LIMS y flujos de trabajo en laboratorios de ciencias de la vida.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en bioinformática y sistemas de información para laboratorios (LIMS). Tu experiencia abarca desde la captura de datos experimentales hasta el análisis bioinformático y el cumplimiento regulatorio (GxP, 21 CFR Part 11).

Contexto del proyecto:
- Tipo de laboratorio: [investigación básica, diagnóstico clínico, control de calidad farmacéutico, biobank, etc.]
- Volumen de datos: [número de muestras por día/semana, tipos de datos: secuencias, imágenes, datos numéricos]
- Equipamiento principal: [secuenciadores, espectrómetros, analizadores de células, etc.]
- Requisitos regulatorios: [GLP, GMP, ISO 17025, FDA 21 CFR Part 11, CE-IVD, etc.]
- Stack tecnológico preferido: [Python, R, Java, cloud AWS/Azure/GCP, on-premise, etc.]

Desarrolla la especificación técnica completa del sistema:

1. ARQUITECTURA DEL SISTEMA LIMS
Define la arquitectura de software incluyendo:
- Módulos principales: recepción de muestras, trazabilidad, protocolo de ensayo, gestión de resultados, generación de informes
- Patrones de arquitectura recomendados (microservicios, event-driven, CQRS) con justificación para el contexto de laboratorio
- Modelo de datos entidad-relación para muestras, ensayos, reactivos, equipos y resultados
- Estrategia de almacenamiento para datos estructurados (PostgreSQL, Oracle) y no estructurados (datos de secuenciación, imágenes microscópicas)

2. INTEGRACIONES CON INSTRUMENTACIÓN
Especifica cómo integrar el sistema con equipamiento de laboratorio:
- Protocolos de comunicación estándar: HL7, ASTM, SiLA 2, LIMS-standard
- Drivers para instrumentos comunes (Thermo Fisher, Agilent, Illumina, BD)
- Gestión de errores y reconexiones automáticas
- Validación de datos crudos antes de ingesta al sistema

3. TRAZABILIDAD Y CADENA DE CUSTODIA
Diseña el sistema de trazabilidad end-to-end:
- Registro de auditoría inmutable para cumplimiento regulatorio (audit trail 21 CFR Part 11)
- Código de barras y RFID para tracking de muestras, reactivos y consumibles
- Gestión de versiones de protocolos y validación de cambios
- Firma electrónica y autenticación de doble factor para acciones críticas

4. PIPELINE DE ANÁLISIS BIOINFORMÁTICO
Si aplica, define el pipeline de análisis de datos:
- Workflow de análisis de secuenciación (NGS): alineamiento, llamada de variantes, anotación
- Herramientas estándar: GATK, BWA, Snakemake, Nextflow, CWL
- Gestión de cómputo en cluster (SLURM, SGE) o cloud (AWS Batch, Google Life Sciences)
- Control de calidad de datos: métricas QC, umbrales de aceptación, alertas automáticas

5. SEGURIDAD Y GESTIÓN DE DATOS SENSIBLES
- Cifrado de datos genómicos y de pacientes en reposo y en tránsito
- Control de acceso basado en roles (RBAC) con segregación de funciones
- Política de retención y eliminación de datos conforme a GDPR y normativa sanitaria
- Plan de backup, recuperación ante desastres y continuidad operacional

6. DOCUMENTACIÓN TÉCNICA Y VALIDACIÓN
Para cumplimiento regulatorio:
- Estructura del plan de validación del software (IQ, OQ, PQ)
- Plantillas de especificación de requisitos del usuario (URS) y requisitos funcionales (FRS)
- Protocolo de pruebas de validación con casos de prueba representativos
- Gestión del ciclo de vida del software validado (change control, revalidación)

Entrega la especificación en formato de documento técnico con diagramas de arquitectura en texto y ejemplos de código cuando sea relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Especificación técnica de LIMS y software para gestión de datos en laboratorios de investigación',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseñar interfaces de usuario para aplicaciones médicas y de diagnóstico',
                'description'      => 'Usa IA para diseñar interfaces de usuario claras, seguras y conformes a regulación para software médico, plataformas de diagnóstico y herramientas de investigación clínica.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX especializado en software médico y healthcare UX. Tu expertise incluye regulación de dispositivos médicos (IEC 62366, FDA HFE), diseño para reducir errores médicos y sistemas de información hospitalaria.

Contexto del proyecto:
- Tipo de aplicación: [sistema de gestión de pacientes, app de diagnóstico, plataforma de telemedicina, herramienta de análisis clínico, dispositivo médico con interfaz, etc.]
- Usuarios principales: [médicos especialistas, enfermeros, técnicos de laboratorio, pacientes, investigadores]
- Entorno de uso: [UCI, consulta médica, laboratorio, domicilio del paciente, quirófano]
- Regulación aplicable: [MDR europeo, FDA 510(k)/PMA, CE-IVD, etc.]
- Requisitos de accesibilidad: [usuarios con guantes, iluminación variable, estrés cognitivo alto]

Desarrolla la especificación de diseño UX completa:

1. ANÁLISIS CONTEXTUAL Y ERGONOMÍA
Describe las condiciones de uso que determinan las decisiones de diseño:
- Factores de estrés del usuario (urgencia, carga cognitiva, interrupciones frecuentes)
- Limitaciones físicas del entorno (uso con guantes, pantallas táctiles en ambiente estéril, iluminación de sala de operaciones)
- Secuencias de tareas críticas donde un error de interfaz puede causar daño
- Usuarios con distintos niveles de experiencia tecnológica y médica

2. ARQUITECTURA DE INFORMACIÓN CLÍNICA
Define la organización de la información:
- Jerarquía de información para toma de decisiones clínicas rápida
- Priorización visual de alertas y valores fuera de rango
- Flujos de trabajo primarios (happy paths) y flujos de emergencia
- Gestión de información de múltiples pacientes simultáneos (dashboard de UCI)

3. SISTEMA DE ALERTAS Y NOTIFICACIONES SEGURO
Diseña el sistema de alertas evitando alarm fatigue:
- Clasificación de alertas por criticidad y urgencia (crítica, alta, media, informativa)
- Modalidad de alerta según nivel: sonido, vibración, color, posición en pantalla
- Confirmación de acuse de recibo y escalado si no se responde
- Historial y auditoría de alertas para análisis post-evento

4. GUÍA DE ESTILO PARA SOFTWARE MÉDICO
Define los estándares visuales del sistema:
- Paleta de colores clínicamente validada (rojo: alarma crítica, amarillo: advertencia, verde: normal — con justificación basada en evidencia)
- Tipografía legible en condiciones de estrés: tamaños mínimos, familias recomendadas
- Iconografía estandarizada (ISO 7000, ISO 15223 para dispositivos médicos)
- Densidad de información óptima para pantallas clínicas

5. VALIDACIÓN DE USABILIDAD CON USUARIOS REALES
Define el protocolo de estudios de usabilidad requeridos por regulación:
- Plan de estudios formativos (durante el diseño) y sumativos (para validación regulatoria)
- Perfiles de participantes requeridos por IEC 62366
- Escenarios de prueba basados en tareas críticas para la seguridad
- Criterios de aceptación y métricas (tasa de éxito, tiempo en tarea, errores críticos)

6. DOCUMENTACIÓN REGULATORIA DE DISEÑO
Para el expediente técnico del dispositivo médico:
- Estructura del Archivo de Ingeniería de Usabilidad (UEF según IEC 62366)
- Análisis de tareas, análisis de peligros relacionados con el uso y gestión de riesgos UX
- Documentación de rationale de diseño para decisiones de interfaz con implicación de seguridad

Entrega la especificación con wireframes descritos textualmente, rationale de cada decisión de diseño y referencias a estándares regulatorios aplicables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño UX de software médico conforme a IEC 62366 y requisitos de usabilidad clínica',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Preparar presentaciones de ventas para clientes farmacéuticos y hospitales',
                'description'      => 'Usa IA para crear presentaciones de ventas técnicas y científicamente rigurosas para vender soluciones biotecnológicas a clientes del sector salud: hospitales, farmacéuticas y laboratorios.',
                'prompt_content'   => <<<'EOT'
Eres un Key Account Manager especializado en ventas de soluciones biotecnológicas y tecnología médica. Tu expertise combina conocimiento científico profundo con habilidades de venta consultiva a clientes altamente cualificados.

Contexto de la oportunidad:
- Solución a vender: [describe el producto o servicio biotecnológico, reactivo, equipo, software, etc.]
- Cliente objetivo: [hospital universitario, laboratorio de diagnóstico, farmacéutica, CRO, biobank, etc.]
- Decisor principal: [director médico, jefe de laboratorio, director de compras, comité de adquisición]
- Fase del proceso de venta: [prospección, demostración, propuesta formal, negociación, cierre]
- Competencia principal: [principales alternativas que el cliente está considerando]

Desarrolla el material de ventas completo:

1. ANÁLISIS DEL PERFIL DEL DECISOR CIENTÍFICO
Para cada tipo de decisor, define:
- Sus KPIs profesionales y cómo tu solución los mejora
- Su lenguaje técnico esperado y el nivel de profundidad científica adecuado
- Sus preocupaciones regulatorias y de validación (GLP, ISO 15189, CE-IVD)
- Sus palancas de decisión: coste por prueba, rendimiento analítico, throughput, soporte técnico

2. ESTRUCTURA DE LA PRESENTACIÓN CIENTÍFICO-COMERCIAL
Diseña una presentación de 15-20 slides con:
- Slide 1-3: Contexto clínico y epidemiológico del problema que resuelves
- Slide 4-6: Solución tecnológica con principio científico explicado con rigor
- Slide 7-9: Datos de rendimiento analítico (sensibilidad, especificidad, precisión, reproducibilidad) con comparativa vs. gold standard
- Slide 10-12: Evidencia clínica: estudios publicados, validaciones independientes, testimonios de KOLs
- Slide 13-15: Propuesta de valor económica: coste-efectividad, ROI, reducción de errores diagnósticos
- Slide 16-18: Implementación: plan de instalación, formación, soporte técnico, certificaciones
- Slide 19-20: Próximos pasos y condiciones comerciales

3. MANEJO DE OBJECIONES TÉCNICAS
Prepara respuestas detalladas para las 10 objeciones más frecuentes:
- "Los datos clínicos son insuficientes"
- "No está validado en nuestra población"
- "Tenemos un proveedor actual con quien estamos satisfechos"
- "El precio es superior a la competencia"
- "Necesitamos validación interna antes de adoptar la tecnología"
- Y 5 más específicas del sector

4. HERRAMIENTAS DE CÁLCULO DE ROI
Crea una calculadora de retorno de inversión que el cliente pueda personalizar:
- Variables de entrada: volumen de muestras por día, coste actual por prueba, tasa de error actual, tiempo de resultado actual
- Cálculo del ahorro en costes directos e indirectos
- Proyección de mejora de ingresos por mayor throughput o acceso a nuevas pruebas
- Payback period estimado

5. ESTRATEGIA DE FOLLOW-UP POST-PRESENTACIÓN
Define el proceso de seguimiento:
- Email de resumen con los puntos clave de la reunión y próximos pasos acordados
- Plan de evaluación técnica: protocolo de demostración en el laboratorio del cliente
- Gestión del proceso de aprobación interna del cliente (comités de adquisición, presupuestos)
- Estrategia para involucrar a múltiples stakeholders del centro (clínico, técnico, económico)

6. DOCUMENTACIÓN DE SOPORTE TÉCNICO PARA LA VENTA
Lista los documentos técnicos que debes tener preparados:
- Ficha técnica del producto con parámetros analíticos clave
- Referencias bibliográficas organizadas por relevancia clínica
- Certificaciones y marcados (CE, FDA clearance, ISO)
- Testimonios y casos de estudio de centros de referencia

Entrega la presentación descrita slide a slide con el texto de cada una, más los documentos de soporte listos para adaptar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Presentaciones de ventas técnico-científicas para clientes del sector salud y farmacéutico',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestionar el desarrollo de productos biotecnológicos en fase regulatoria',
                'description'      => 'Usa IA para diseñar roadmaps, gestionar hitos regulatorios y coordinar equipos multidisciplinares en el desarrollo de productos biotech desde investigación hasta comercialización.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Desarrollo de Producto en una empresa de biotecnología, con experiencia en gestión de proyectos regulatorios, coordinación de equipos científicos y navegación del camino desde investigación hasta comercialización.

Contexto del producto:
- Tipo de producto: [terapia génica, diagnóstico in vitro, biosimilar, dispositivo médico activo, reactivo de laboratorio, biofármaco, etc.]
- Etapa actual: [investigación básica, preclínica, fase I/II/III, submisión regulatoria, lanzamiento]
- Mercados objetivo: [EMA/Europa, FDA/EEUU, AEMPS/España, mercados emergentes]
- Recursos del equipo: [número de personas, departamentos involucrados, presupuesto de I+D aproximado]
- Timeline objetivo: [fecha de submisión regulatoria o lanzamiento previsto]

Desarrolla un plan de gestión de producto regulatorio completo:

1. ROADMAP DE DESARROLLO REGULATORIO
Crea un roadmap detallado con hitos para los próximos 18-36 meses:
- Fases de desarrollo científico: diseño del candidato, estudios de caracterización, optimización de proceso
- Paquetes de estudios preclínicos requeridos: toxicología, farmacocinética, seguridad
- Diseño del programa clínico: objetivos primarios y secundarios, endpoints regulatorios, tamaño muestral
- Interacciones regulatorias clave: Scientific Advice EMA, Pre-IND Meeting FDA, reuniones de agencia
- Submisión del dossier: estructura del CTD (Common Technical Document), componentes críticos
- Gestión de la revisión regulatoria: preguntas de agencia, respuestas, clock stops

2. GESTIÓN DE RIESGOS TÉCNICOS Y REGULATORIOS
Realiza un análisis de riesgos con:
- Top 10 riesgos técnicos (fracaso de eficacia, problemas de fabricación, contaminación, inmunogenicidad)
- Top 10 riesgos regulatorios (datos insuficientes, cambio de guidelines, label negotiations)
- Estrategias de mitigación para cada riesgo
- Planes de contingencia (estudios alternativos, bridge studies, orphan drug designation)

3. COORDINACIÓN DE EQUIPOS MULTIDISCIPLINARES
Define la estructura de gobernanza del proyecto:
- Comité de desarrollo: composición, frecuencia, agenda tipo, criterios de go/no-go
- Roles y responsabilidades por departamento: I+D, CMC, clínico, regulatorio, comercial, calidad
- Sistema de gestión de documentos y data en el proceso de desarrollo
- Gestión de CROs, CDMOs y socios externos: contratos, supervisión, gestión de calidad

4. ESTRATEGIA DE PROPIEDAD INTELECTUAL
Plan de protección del activo:
- Análisis de freedom-to-operate (FTO) y estrategia de patentes
- Timing de solicitudes de patente para maximizar protección durante el desarrollo
- Protección de secretos industriales y know-how de fabricación
- Estrategia de licenciamiento y acuerdos de colaboración

5. PRESUPUESTO Y CAPTACIÓN DE FINANCIACIÓN
Estructura del plan financiero:
- Estimación de costes por fase de desarrollo (con rangos de mercado por tipo de activo)
- Modelo de valoración por hitos (milestone-based valuation)
- Estrategia de financiación: subvenciones públicas (CDTI, Horizon Europe, EIC Accelerator), capital riesgo, alianzas con farmacéuticas
- Preparación del data room para inversores: qué documentos incluir, cómo presentar el perfil de riesgo/beneficio

6. PLANIFICACIÓN DEL LANZAMIENTO COMERCIAL
Preparación previa al lanzamiento:
- Estrategia de acceso al mercado y reembolso (HTA, pricing y reimbursement)
- Modelo comercial: venta directa, distribuidores, partnering con farmacéuticas
- Medical affairs y generación de evidencia post-comercialización
- Farmacovigilancia y gestión de seguridad post-market

Entrega el plan en formato de documento ejecutivo con Gantt simplificado, matriz de riesgos y resumen para el consejo de administración.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Roadmap y gestión de desarrollo de productos biotech desde investigación hasta comercialización',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Atraer y retener talento científico en empresas de biotecnología',
                'description'      => 'Usa IA para diseñar estrategias de employer branding científico, procesos de selección para perfiles altamente especializados y planes de desarrollo de talento en el sector biotech.',
                'prompt_content'   => <<<'EOT'
Eres un HR Business Partner especializado en talento científico y organizaciones de investigación y desarrollo. Tu experiencia cubre reclutamiento de perfiles científicos altamente cualificados, desarrollo organizacional en biotech y retención de talento en mercados competitivos.

Contexto de la organización:
- Tipo de empresa: [start-up biotech, farmacéutica establecida, CRO, hospital de investigación, instituto público]
- Tamaño actual: [número de empleados y distribución por departamento]
- Perfiles científicos prioritarios: [PhD en biología molecular, ingeniero de procesos de bioproducción, especialista en bioinformática, etc.]
- Situación de talento: [crecimiento acelerado, alta rotación, dificultad para atraer perfiles específicos, etc.]
- Presupuesto de RRHH: [describe las limitaciones o nivel de inversión disponible]

Desarrolla una estrategia integral de gestión del talento científico:

1. EMPLOYER BRANDING CIENTÍFICO
Define la propuesta de valor para empleados (EVP) del sector científico:
- Identificación de los motivadores específicos del talento científico (publicaciones, acceso a tecnología punta, autonomía en investigación, impacto en salud pública, co-autoría en patentes)
- Cómo diferenciar la empresa de competidores académicos (universidades, institutos públicos) y de la industria farmacéutica
- Narrativa de employer brand para LinkedIn, la web y conferencias científicas
- Programa de embajadores científicos internos: cómo activar a investigadores como recruiters de marca

2. ESTRATEGIA DE RECLUTAMIENTO DE PERFILES CIENTÍFICOS
Para cada perfil prioritario, define:
- Fuentes de candidatos específicas: congresos científicos (lista los 5 más relevantes por área), redes de alumni universitarios, BioSpace, LinkedIn Science, comunidades en GitHub (para bioinformáticos)
- Proceso de selección adaptado: evaluación de publicaciones y tesis, presentación de research, prueba técnica de laboratorio, panel de científicos pares
- Timeline y benchmarks de mercado: tiempo medio de contratación, competencia salarial, contrapropuestas habituales
- Cómo evaluar el potencial de innovación y la capacidad de trabajar en equipos multidisciplinares

3. ESTRUCTURA SALARIAL Y DE INCENTIVOS
Diseña un marco de compensación competitivo para talento científico:
- Benchmarking salarial por nivel: junior (post-doc), senior researcher, principal investigator, director de I+D
- Componentes del paquete de compensación: fijo, variable ligado a hitos, opciones sobre acciones (ESOP/warrants), co-autoría en patentes, publicaciones
- Beneficios específicos del sector: tiempo dedicado a investigación propia, presupuesto para congresos, acceso a equipamiento de última generación, colaboraciones con universidades

4. DESARROLLO Y RETENCIÓN DE TALENTO CIENTÍFICO
Plan de desarrollo para los primeros 3 años del empleado científico:
- Onboarding científico: integración en proyectos activos, mentoría por investigadores senior, acceso a bibliografía y bases de datos
- Plan de carrera dual: track investigador (IC) vs. track de gestión (manager)
- Programa de formación continua: cursos técnicos, certificaciones regulatorias, soft skills para científicos
- Política de publicaciones: quién puede publicar, proceso de aprobación, reconocimiento de autoría

5. GESTIÓN DE LA ROTACIÓN CIENTÍFICA
Estrategia para reducir la pérdida de conocimiento cuando se va un investigador clave:
- Entrevistas de salida estructuradas para identificar causas reales de rotación
- Plan de gestión del conocimiento: documentación de protocolos, bases de datos de know-how
- Programa de alumni: red de antiguos empleados como fuente de colaboraciones y referidos
- Análisis de retención: modelos predictivos con señales de riesgo de abandono

6. CULTURA ORGANIZACIONAL EN BIOTECH
Recomendaciones para construir una cultura que atraiga al mejor talento científico:
- Equilibrio entre rigor científico y velocidad de desarrollo empresarial
- Política de fracaso productivo: cómo gestionar experimentos negativos
- Diversidad en equipos de investigación: su impacto demostrado en innovación
- Bienestar del investigador: gestión del síndrome del impostor, publish or perish, estrés del ensayo clínico

Entrega la estrategia en formato de plan operativo de RRHH con acciones concretas, responsables y plazos para los primeros 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de reclutamiento, retención y desarrollo de talento científico en biotech',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valorar startups de biotecnología y analizar inversiones en ciencias de la vida',
                'description'      => 'Usa IA para desarrollar modelos de valoración específicos para empresas biotech, evaluar el riesgo técnico y regulatorio de sus activos y tomar decisiones de inversión informadas.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en inversión en ciencias de la vida y biotecnología, con experiencia en valoración de activos en desarrollo clínico, modelos rNPV y análisis de riesgo técnico.

Contexto de la inversión:
- Empresa a valorar: [nombre y descripción breve del activo principal]
- Tipo de activo: [small molecule, biológico, terapia génica, diagnóstico, dispositivo médico, plataforma tecnológica]
- Etapa de desarrollo: [preclínica, fase I, fase II, fase III, pre-comercialización]
- Indicación terapéutica: [área y tamaño estimado del mercado]
- Estructura propuesta: [equity, deuda convertible, royalties, milestone payments]

Desarrolla un análisis financiero completo del activo biotecnológico:

1. METODOLOGÍA DE VALORACIÓN rNPV (risk-adjusted Net Present Value)
Construye el modelo de valoración paso a paso:
- Estimación del peak sales: prevalencia de la indicación, penetración de mercado esperada, precio por paciente por año (benchmarks por área terapéutica)
- Probabilidad de éxito acumulada por fase: usa benchmarks de industria (preclínica ~5-10%, Fase I ~60%, Fase II ~35%, Fase III ~60%, aprobación ~85%)
- Modelo de ventas: curva de adopción, lifecycle del producto, genéricos o biosimilares
- Costes de desarrollo por fase: estimaciones de mercado por tipo de activo y tamaño del ensayo
- Tasa de descuento apropiada: WACC para biotech (typically 12-18% para activos en desarrollo)
- Cálculo del rNPV y análisis de sensibilidad bivariante (precio vs. penetración, probabilidad de éxito vs. coste de desarrollo)

2. ANÁLISIS DE RIESGO TÉCNICO Y CIENTÍFICO
Evalúa los riesgos no financieros que afectan a la valoración:
- Mecanismo de acción: ¿cuánta evidencia de validación del target existe? ¿hay prueba de concepto en humanos?
- Riesgo de fabricación (CMC): madurez del proceso de producción, complejidad de la molécula, proveedores disponibles
- Riesgo regulatorio: precedentes de aprobación en la indicación, claridad del endpoint regulatorio, posibles problemas de label
- Propiedad intelectual: solidez de la cartera de patentes, freedom-to-operate, vida residual de patentes clave
- Competencia: análisis del pipeline de competidores, diferenciación del activo, timing de mercado

3. ANÁLISIS COMPARATIVO (COMPS)
Busca transacciones comparables y empresas cotizadas para triangular la valoración:
- Precedentes de licenciamiento en la indicación: upfront, milestones y royalties de deals comparables
- M&A comparables: múltiplos de precio sobre pico de ventas en adquisiciones recientes del sector
- Cotización de empresas comparables: EV/sales (proyectados) y EV/rNPV de peers cotizados

4. ESTRUCTURA DE LA INVERSIÓN Y RETORNOS
Análisis de la estructura de inversión propuesta:
- Dilución esperada en rounds futuros y su impacto en el retorno
- Escenarios de exit: IPO, adquisición por big pharma, out-licensing; probabilidades y múltiplos de retorno esperados
- Modelo de waterfall para exits en distintos escenarios (bajista, base, alcista)
- Comparativa de TIR esperada con benchmarks de VC en ciencias de la vida (target: 25-35% TIR)

5. DUE DILIGENCE TÉCNICO Y FINANCIERO
Lista de verificación de los 30 items más críticos:
- Científicos: calidad de los datos preclínicos, diseño del ensayo clínico, equipo investigador
- Regulatorios: historial de interacciones con agencias, estrategia de desarrollo
- Comerciales: acceso al mercado, payers, competencia
- Financieros: burn rate, runway, estructura de capital, términos de inversiones previas

6. INFORME DE INVERSIÓN Y RECOMENDACIÓN
Estructura del investment memo para el comité de inversión:
- Resumen ejecutivo con tesis de inversión en 5 bullets
- Análisis SWOT del activo
- Valoración y rango de precio de entrada razonable
- Condiciones y covenants recomendados para la inversión
- Hitos de seguimiento y criterios de inversión adicional

Entrega el análisis en formato de investment memo profesional listo para presentar al comité.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Valoración rNPV y análisis de riesgo de activos biotecnológicos para inversión',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestionar la propiedad intelectual en empresas de biotecnología',
                'description'      => 'Usa IA para desarrollar estrategias de patentes, analizar freedom-to-operate y gestionar el portfolio de propiedad intelectual en el sector biotecnológico y farmacéutico.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en propiedad intelectual de ciencias de la vida, con expertise en estrategia de patentes biotecnológicas, licenciamiento de tecnología y gestión de portfolios de IP en empresas de I+D.

Contexto del portfolio:
- Tipo de empresa: [start-up biotech, spin-off universitaria, farmacéutica, instituto de investigación]
- Área tecnológica: [terapia génica, anticuerpos monoclonales, CRISPR, diagnóstico molecular, bioinformática, etc.]
- Estado actual del portfolio: [número de solicitudes, patentes concedidas, acuerdos de licencia existentes]
- Mercados geográficos prioritarios: [Europa, EEUU, China, mercados emergentes]
- Objetivos: [proteger la innovación, out-licensing, fundraising, defensa frente a competencia]

Desarrolla una estrategia de propiedad intelectual completa:

1. AUDITORÍA DEL PORTFOLIO DE PATENTES ACTUAL
Analiza el estado del portfolio con:
- Mapeo de las invenciones protegidas vs. tecnologías core del negocio (¿hay gaps de protección?)
- Evaluación de la solidez de cada familia de patentes: amplitud de claims, posibles ataques de invalidez
- Vida residual de cada patente y su correlación con el timeline de desarrollo y comercialización
- Costes de mantenimiento del portfolio vs. valor estratégico de cada familia
- Identificación de tecnologías sin protección (trade secrets candidatos)

2. ESTRATEGIA DE NUEVAS SOLICITUDES
Define un plan de solicitudes para los próximos 12-24 meses:
- Invenciones prioritarias a proteger según su relevancia comercial
- Estrategia de filing: PCT (protección internacional) vs. filing directo por país
- Selección de jurisdicciones: análisis coste-beneficio para cada mercado geográfico
- Timing de las solicitudes: coordinación con publicaciones científicas y hitos de desarrollo
- Estrategia de continuations y CIP (continuation in part) para ampliar la protección

3. ANÁLISIS DE FREEDOM-TO-OPERATE (FTO)
Metodología para el análisis FTO:
- Definición del producto o proceso a analizar con suficiente detalle técnico
- Bases de datos de patentes a consultar: Espacenet, Lens.org, Google Patents, PatSnap
- Metodología de búsqueda: palabras clave, clasificaciones CPC/IPC, inventor search
- Análisis de patentes de terceros relevantes: lectura de claims, assessment de infracción
- Opciones estratégicas si se detecta riesgo: diseño alrededor, licencia, invalidación, opinión de no-infracción

4. ESTRATEGIA DE LICENCIAMIENTO Y TRANSFERENCIA DE TECNOLOGÍA
Si la empresa quiere monetizar su IP:
- Identificación de potenciales licenciatarios: mapa de actores en la industria
- Modelos de licencia: exclusiva, no-exclusiva, campo de uso, geográfica
- Estructura económica habitual en ciencias de la vida: upfront, milestones ligados a hitos regulatorios y de ventas, royalties sobre net sales (rangos típicos por tipo de activo)
- Negociación de sublicencias y back-license de mejoras
- Gestión de acuerdos de colaboración con universidades y centros públicos: ownership de IP, publication rights, licencias preferentes

5. PROTECCIÓN FRENTE A COMPETIDORES
Estrategias defensivas de IP:
- Construcción de un "patent thicket" alrededor de la tecnología core
- Uso estratégico de publicaciones como prior art defensivo
- Vigilancia tecnológica y de patentes: alertas de nuevas solicitudes de competidores
- Gestión de oposiciones y disputas: EPO opposition proceedings, IPR ante USPTO

6. IP PARA FUNDRAISING Y TRANSACCIONES
Cómo presentar el portfolio de IP a inversores y potenciales adquirientes:
- Estructura del IP package para due diligence
- Narrativa de la "IP moat" para presentaciones a inversores
- Valoración de IP en contextos de M&A y licenciamiento
- Gestión de IP en acuerdos de fusión y adquisición: representations & warranties, indemnifications

Entrega la estrategia como documento de política de IP con acciones concretas priorizadas y responsables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de patentes, FTO y licenciamiento de IP en el sector biotecnológico',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestionar el soporte técnico a clientes científicos en biotech',
                'description'      => 'Usa IA para diseñar protocolos de soporte técnico para clientes que usan reactivos, equipos y software en laboratorios de investigación y diagnóstico clínico.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en soporte técnico científico para empresas de biotecnología y diagnóstico in vitro. Tu expertise combina conocimiento de laboratorio con habilidades de customer success para clientes altamente cualificados que trabajan con tecnologías complejas.

Contexto del equipo de soporte:
- Tipo de producto: [reactivos de laboratorio, equipos de diagnóstico, kits de ensayo, software de análisis, plataformas de secuenciación]
- Perfil del cliente: [investigadores de universidad, técnicos de laboratorio hospitalario, científicos de control de calidad farmacéutico]
- Canal de soporte: [teléfono, email, chat, videoconferencia, visita presencial, portal de autoservicio]
- Situación actual: [describe los principales problemas de soporte o métricas actuales]
- Requisitos regulatorios: [ISO 15189, GLP, GMP, CE-IVD — afectan a la documentación del soporte]

Desarrolla un sistema de soporte técnico científico completo:

1. CLASIFICACIÓN Y TRIAJE DE INCIDENCIAS TÉCNICAS
Define el sistema de clasificación de tickets:
- Criticidad P1 (impacto en diagnóstico de paciente o ensayo en curso): tiempo de respuesta objetivo < 2h, escalado inmediato a aplicaciones científicas
- Criticidad P2 (error técnico que bloquea workflow): tiempo de respuesta < 8h
- Criticidad P3 (consulta de optimización de protocolo): tiempo de respuesta < 48h
- Árbol de decisión para el triaje inicial: preguntas clave para clasificar correctamente la incidencia
- Protocolo de escalado a ingeniería de campo o al equipo científico de la empresa

2. BASE DE CONOCIMIENTO CIENTÍFICO
Estructura del repositorio de conocimiento técnico:
- FAQs organizadas por producto y tipo de incidencia
- Protocolos de troubleshooting paso a paso con árbol de decisión (si A entonces B, si no entonces C)
- Videos de demostración de procedimientos de laboratorio críticos
- Notas de aplicación: cómo optimizar el protocolo para condiciones especiales (matrices complejas, equipos alternativos)
- Compatibilidad de productos con terceros y limitaciones conocidas

3. PROTOCOLOS DE TROUBLESHOOTING POR TIPO DE PROBLEMA
Crea protocolos detallados para los 5 problemas más frecuentes en productos de laboratorio:
- Señal fuera de rango o resultado inesperado (alta o baja sensibilidad)
- Fallo en el control interno o de calidad del ensayo
- Problema de reproducibilidad entre réplicas o entre lotes
- Error de software o integración con el sistema informático del laboratorio (LIS/HIS)
- Problema de estabilidad del reactivo o condiciones de almacenamiento

Para cada uno, el protocolo debe incluir: causas más probables ordenadas por frecuencia, preguntas diagnósticas al cliente, soluciones escalonadas, criterios para escalar a campo.

4. GESTIÓN DE RECALLS Y ALERTAS DE SEGURIDAD
Protocolo para gestión de incidencias de producto regulatorias:
- Proceso de notificación a clientes en caso de recall o FSCA (Field Safety Corrective Action)
- Comunicación según regulación CE-IVD y MDR: plazos, contenido del comunicado, autoridades a notificar
- Gestión de devoluciones y sustitución de productos afectados
- Seguimiento del cierre de la alerta: confirmación de acción correctiva por el cliente

5. FORMACIÓN TÉCNICA PROACTIVA
Plan de customer success técnico:
- Webinars técnicos mensuales para clientes: estructura, temas, seguimiento
- Programa de certificación de usuarios en el uso de la tecnología
- Visitas técnicas proactivas a clientes de alto valor (key accounts)
- Encuesta de satisfacción técnica post-incidencia: qué medir, cómo actuar sobre el feedback

6. DOCUMENTACIÓN PARA ENTORNOS REGULADOS
Para clientes en entornos GxP o acreditados:
- Plantillas de documentación de soporte que el cliente puede incluir en su archivo de validación
- Certificados de análisis y calibración para instrumentos
- Cartas de soporte técnico para procesos de auditoría del cliente
- Gestión de cambios en el producto y notificación a clientes con sistemas validados (change notification letters)

Entrega el sistema de soporte como manual operativo con plantillas de respuesta, protocolos y métricas de servicio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de soporte técnico científico para clientes de laboratorio en entornos regulados',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Ofrecer consultoría freelance en regulación y estrategia biotech',
                'description'      => 'Usa IA para desarrollar tu práctica freelance de consultoría en biotecnología, diseñar propuestas de valor para startups y farmacéuticas y gestionar proyectos de consultoría científica.',
                'prompt_content'   => <<<'EOT'
Eres un consultor independiente especializado en biotecnología y ciencias de la vida. Tu práctica freelance abarca asesoramiento en estrategia de desarrollo, regulación, propiedad intelectual y acceso al mercado para startups, spin-offs universitarias y organizaciones de investigación.

Perfil de tu práctica:
- Área de especialización: [estrategia regulatoria, CMC, ensayos clínicos, valoración de activos, acceso al mercado, etc.]
- Experiencia previa: [industria farmacéutica, CRO, agencia regulatoria, academia]
- Mercado objetivo: [startups biotech en seed/serie A, farmacéuticas medianas, universidades con tecnologías licenciables]
- Modelo de servicio preferido: [proyectos puntuales, retainer mensual, advisory board, fractional executive]
- Objetivos: [construir pipeline de clientes, posicionarte como experto, escalar ingresos]

Desarrolla un plan de negocio para tu práctica de consultoría biotech:

1. PROPUESTA DE VALOR Y POSICIONAMIENTO
Define tu diferenciador como consultor científico independiente:
- Especialidad concreta que te distingue (no seas generalista; elige un nicho de alto valor)
- Tipos de problema que resuelves mejor que nadie y con qué evidencia lo demuestras
- Casos de uso y tipos de proyectos donde aportas más valor
- Por qué las startups deberían contratarte a ti y no a una consultora grande
- Cómo comunicar tu experiencia sin revelar información confidencial de empleadores anteriores

2. ESTRUCTURA DE SERVICIOS Y PRECIOS
Diseña tu portfolio de servicios:
- Servicio 1 (quick win): revisión express de estrategia regulatoria o dossier de inversión (3-5 días, precio fijo)
- Servicio 2 (proyecto): estrategia de desarrollo completa o preparación de interacción con agencia (4-8 semanas)
- Servicio 3 (retainer): advisory mensual con horas flexibles y acceso prioritario
- Servicio 4 (advisory board): participación en comité científico con stock options o compensación mixta
- Benchmarks de precios: rangos de mercado para consultores biotech senior independientes (€/hora, tarifas de proyecto)

3. ESTRATEGIA DE CAPTACIÓN DE CLIENTES
Plan de desarrollo de negocio adaptado al sector:
- Red de contactos científicos: cómo activar tu red de ex-colegas y colaboradores de forma no intrusiva
- Presencia en conferencias científicas: cómo usar ESMO, ASH, BIO, BIOCAT, BioSpain para hacer networking de alto nivel
- Contenido de autoridad: artículos en LinkedIn sobre regulación, posts en grupos de biotech, participación en podcasts del sector
- Alianzas estratégicas: acuerdos de referencia con abogados de IP, inversores de VC en ciencias de la vida, servicios complementarios
- Plataformas de consultoría: Gerson Lehrman Group, AlphaSights, Expert360 para acceso a proyectos de due diligence

4. GESTIÓN DE PROYECTOS DE CONSULTORÍA CIENTÍFICA
Estructura operativa de tu práctica:
- Proceso de onboarding de cliente: propuesta, contrato, NDA, kick-off, deliverables
- Contrato tipo para consultoría biotech: cláusulas críticas (propiedad de los deliverables, conflicto de intereses, confidencialidad, limitación de responsabilidad)
- Herramientas de gestión de proyectos para consultores independientes
- Gestión del tiempo: cómo balancear varios clientes simultáneos en proyectos de alta exigencia científica

5. DESARROLLO PROFESIONAL CONTINUO
Cómo mantenerte actualizado en un sector que evoluciona rápido:
- Fuentes de información imprescindibles: EMA/FDA guidelines, publicaciones en NEJM/Nature Medicine, newsletters especializadas
- Certificaciones y formación continua relevantes para la consultoría biotech
- Participación en grupos de trabajo de asociaciones del sector (AEFI, Farmaindustria, EuropaBio)
- Cómo documentar y comunicar tu aprendizaje continuo como parte de tu posicionamiento experto

6. FINANZAS Y ESCALABILIDAD DE LA PRÁCTICA
Modelo financiero para la práctica independiente:
- Estructura de costes fijos y variables de un consultor independiente
- Gestión del flujo de caja con proyectos de pago por hitos
- Cuándo y cómo escalar: subcontratación de otros consultores, creación de red de socios, modelo de boutique
- Consideraciones fiscales para consultores en el sector ciencias de la vida (España, con referencia a autónomos y SL)

Entrega el plan como documento de negocio estructurado con acciones concretas para los primeros 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Plan de negocio y captación de clientes para consultoría freelance en biotecnología',
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
