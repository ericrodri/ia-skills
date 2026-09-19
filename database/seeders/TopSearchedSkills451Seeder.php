<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills451Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de salud digital: contenidos y campañas con IA',
                'description'      => 'Usa IA para crear campañas de salud responsables, redactar contenidos médicos divulgativos y segmentar audiencias en clínicas y servicios sanitarios.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing sanitario y comunicación en salud. Tu tarea es ayudarme a desarrollar una estrategia de contenidos y campañas digitales para una clínica, hospital o servicio de salud.

objetivo: crear un plan de marketing de salud ético, empático y eficaz que atraiga pacientes, eduque a la comunidad y posicione a la organización como referente en su especialidad.

tarea principal: diseña una campaña de marketing de salud digital siguiendo estos pasos:

1. ANÁLISIS DEL PÚBLICO OBJETIVO
Describe al paciente ideal considerando:
- Demografía: edad, género, ubicación geográfica, nivel socioeconómico
- Necesidades de salud: condición crónica, prevención, rehabilitación o urgencia
- Comportamiento digital: redes que usa, cómo busca información médica, nivel de alfabetización sanitaria
- Barreras: miedos, costes, distancia, desconfianza en el sistema de salud

2. PILARES DE CONTENIDO
Genera 5 pilares temáticos alineados con la especialidad médica. Para cada pilar proporciona:
- Nombre del pilar y descripción
- 3 ideas de contenido concretas (artículo de blog, vídeo explicativo, infografía, post en redes)
- Tono recomendado: divulgativo, empático, científico o preventivo
- Palabras clave de salud relevantes para SEO

3. CALENDARIO EDITORIAL (4 SEMANAS)
Planifica semana a semana:
- Lunes: contenido educativo o preventivo
- Miércoles: testimonio de paciente o caso de éxito (respetando privacidad)
- Viernes: consejo práctico o dato científico de fácil comprensión
- Weekend: contenido de comunidad o evento local

4. CAMPAÑA DE CAPTACIÓN
Diseña una campaña para captar nuevos pacientes:
- Propuesta de valor única de la clínica (qué la diferencia)
- Mensaje principal y llamada a la acción (reservar cita, descargar guía, llamar)
- Canales: Google Ads (búsqueda sintomática), Facebook/Instagram (prevención y bienestar), email (seguimiento)
- Presupuesto orientativo y distribución por canal

5. COMUNICACIÓN ÉTICA Y CUMPLIMIENTO
Asegúrate de incluir:
- Revisión por parte de profesional médico antes de publicar
- Evitar promesas de curación o resultados garantizados
- Citar fuentes científicas en contenidos informativos
- Protección de datos del paciente (RGPD / HIPAA según mercado)
- Uso de lenguaje inclusivo y no estigmatizante

6. MÉTRICAS Y KPIs DE SALUD DIGITAL
Define los indicadores clave:
- Alcance y engagement en redes sociales
- Tráfico orgánico al blog y tasa de conversión a cita
- Coste por lead cualificado (paciente potencial)
- Net Promoter Score (NPS) de pacientes existentes
- Tasa de reapertura de emails informativos

instrucción final: adapta todo el plan al contexto específico que te proporcione. Si no tengo datos concretos, trabaja con supuestos realistas para una clínica de medicina general en una ciudad de 200.000 habitantes. Sé específico, práctico y ten en cuenta siempre la sensibilidad del sector salud.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing digital para clínicas, hospitales y servicios de salud',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de APIs clínicas con IA: integración HL7 FHIR',
                'description'      => 'Diseña e implementa APIs de salud interoperables usando el estándar HL7 FHIR, con IA como copiloto para generar endpoints, validaciones y documentación técnica.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en tecnología sanitaria (HealthTech) con dominio del estándar HL7 FHIR (Fast Healthcare Interoperability Resources). Tu tarea es guiarme en el diseño e implementación de una API clínica robusta, segura e interoperable.

objetivo: construir una API RESTful basada en FHIR que permita el intercambio seguro de datos de salud entre sistemas (EHR, HIS, apps móviles, laboratorios) respetando normativas de privacidad como HIPAA y RGPD.

tarea 1 — DISEÑO DE RECURSOS FHIR
Para el caso de uso que especifique (historia clínica, citas, prescripciones, laboratorio), genera:
- Lista de recursos FHIR relevantes (Patient, Encounter, Observation, MedicationRequest, etc.)
- Estructura JSON de cada recurso con los campos obligatorios y opcionales más comunes
- Relaciones entre recursos y cómo referenciarlos (Reference vs. contained)
- Extensiones FHIR necesarias para requisitos locales no cubiertos por el estándar

tarea 2 — ENDPOINTS DE LA API
Diseña los endpoints RESTful siguiendo la especificación FHIR R4:
- CRUD completo: GET, POST, PUT, PATCH, DELETE para cada recurso
- Búsqueda avanzada: parámetros de búsqueda FHIR (_id, patient, date, status, code)
- Operaciones especiales: $everything, $validate, $match
- Bundle de transacciones para operaciones atómicas multi-recurso
- Paginación con parámetros _count y _offset

tarea 3 — SEGURIDAD Y AUTENTICACIÓN
Implementa las capas de seguridad necesarias:
- SMART on FHIR para autorización OAuth 2.0 con scopes clínicos
- Autenticación de sistemas backend con client credentials
- Cifrado TLS 1.3 en tránsito y AES-256 en reposo
- Auditoría con recurso AuditEvent de FHIR para trazabilidad
- Rate limiting y throttling por cliente y por recurso

tarea 4 — VALIDACIÓN Y CALIDAD DE DATOS
Genera código de validación para:
- Perfiles FHIR: validar recursos contra perfiles nacionales (US Core, IPS, etc.)
- Terminologías: SNOMED CT, LOINC, ICD-10/11, RxNorm
- Reglas de negocio clínicas: coherencia de fechas, rangos de valores de laboratorio
- Tests de conformidad con el servidor de validación oficial de HL7

tarea 5 — DOCUMENTACIÓN Y ONBOARDING
Crea la documentación técnica:
- OpenAPI 3.0 / Swagger basado en los endpoints diseñados
- Guía de inicio rápido con ejemplos de curl y Postman collection
- Casos de uso comunes con ejemplos de request/response completos
- Guía de manejo de errores con OperationOutcome FHIR

instrucción final: usa el lenguaje de programación que especifique (Node.js, Python, Java, .NET). Si no lo indico, usa Python con FastAPI. Genera código comentado, con manejo de excepciones y siguiendo principios SOLID. Incluye siempre consideraciones de cumplimiento normativo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollo de APIs de salud interoperables para sistemas hospitalarios y HealthTech',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces para apps médicas: UX accesible con IA',
                'description'      => 'Crea interfaces de usuario para aplicaciones médicas y de salud que cumplan estándares de accesibilidad, claridad clínica y confianza del paciente, usando IA como asistente de diseño.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI especializado en aplicaciones de salud digital, con experiencia en accesibilidad, psicología del paciente y sistemas de diseño médico. Tu tarea es ayudarme a crear interfaces eficaces para apps de salud que generen confianza y sean fáciles de usar para todo tipo de usuarios.

objetivo: diseñar una interfaz de usuario para una aplicación médica o de salud que sea accesible, intuitiva, clínicamente precisa y que cumpla con normativas de privacidad y usabilidad en entornos sanitarios.

tarea 1 — INVESTIGACIÓN DE USUARIO EN SALUD
Define los perfiles de usuario clave:
- Paciente: edad, condición de salud, nivel de alfabetización digital, posibles limitaciones visuales o motoras
- Profesional sanitario: médico, enfermero, administrativo (necesidades distintas de eficiencia)
- Cuidador: familiar que gestiona la salud de otro
Para cada perfil: escenario de uso principal, tareas críticas, frustraciones frecuentes en apps médicas y necesidades de accesibilidad

tarea 2 — ARQUITECTURA DE INFORMACIÓN CLÍNICA
Diseña la estructura de navegación:
- Mapa de pantallas y flujos principales (onboarding, perfil de salud, citas, resultados, medicación, mensajería con médico)
- Jerarquía de información crítica vs. secundaria (alertas de urgencia vs. historial)
- Patrones de navegación apropiados (tabs inferiores para pacientes, sidebar para clínicos)
- Diseño para estados de emergencia: acceso rápido a información vital

tarea 3 — SISTEMA DE DISEÑO PARA SALUD
Define los elementos visuales:
- Paleta de colores: uso de color en alertas (rojo/urgente, amarillo/atención, verde/normal), evitar combinaciones problemáticas para daltónicos
- Tipografía: fuentes legibles, tamaños mínimos para usuarios mayores (mínimo 16px para cuerpo)
- Iconografía médica: iconos claros y universales para síntomas, medicación, citas
- Formularios clínicos: diseño de campos para síntomas, dosis, fechas, escalas de dolor
- Feedback visual: estados de carga, confirmación de acciones críticas (tomar medicación, enviar resultado)

tarea 4 — ACCESIBILIDAD Y NORMATIVAS
Asegura el cumplimiento de:
- WCAG 2.1 nivel AA como mínimo (AA para apps médicas, AAA recomendado para usuarios mayores)
- Contraste de texto: ratio mínimo 4.5:1 para texto normal, 3:1 para texto grande
- Navegación por teclado y lector de pantalla (VoiceOver, TalkBack)
- Tamaños de área táctil: mínimo 44x44px para botones en móvil
- Modo de alto contraste y texto grande
- Soporte para tecnologías de asistencia específicas de salud

tarea 5 — CONFIANZA Y COMUNICACIÓN DEL RIESGO
Diseña elementos que generen confianza:
- Indicadores de seguridad y cifrado de datos visibles al usuario
- Comunicación clara de datos que se comparten y con quién
- Diseño de consentimiento informado digital: claro, sin jerga legal
- Visualización de datos clínicos: gráficas de evolución de síntomas, resultados de laboratorio
- Mensajes de error médicamente seguros: nunca alarmar innecesariamente, siempre ofrecer siguiente paso

instrucción final: presenta los diseños como wireframes textuales o especificaciones detalladas para Figma. Indica componentes de UI por pantalla, jerarquía visual y razones clínicas detrás de cada decisión de diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño UX/UI de aplicaciones médicas, portales de paciente y herramientas clínicas digitales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta consultiva de tecnología sanitaria con IA: del diagnóstico al cierre',
                'description'      => 'Estructura procesos de venta de soluciones HealthTech a hospitales, clínicas y aseguradoras usando IA para preparar propuestas, gestionar objeciones y acelerar ciclos de venta complejos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de ventas especializado en tecnología sanitaria (HealthTech, MedTech, SaaS clínico). Tu tarea es ayudarme a desarrollar un proceso de venta consultiva para cerrar acuerdos con hospitales, clínicas privadas, aseguradoras de salud y administraciones sanitarias.

objetivo: crear un playbook de ventas completo para el sector salud que me permita identificar oportunidades, preparar propuestas de valor clínicas, gestionar comités de compra complejos y cerrar acuerdos cumpliendo las normativas del sector.

tarea 1 — MAPA DE STAKEHOLDERS EN SALUD
Identifica los tomadores de decisión en una institución sanitaria:
- Director Médico / Chief Medical Officer: motivaciones clínicas y de resultados
- Director de Tecnología / CIO: integración, seguridad y infraestructura
- Director Financiero / CFO: ROI, coste total de propiedad, presupuesto
- Director de Enfermería: usabilidad, carga de trabajo del personal
- Compliance Officer: normativas, privacidad de datos, certificaciones
Para cada perfil: mensaje clave, objeción principal y cómo abordarla

tarea 2 — PROPUESTA DE VALOR CLÍNICA
Construye la propuesta de valor en términos sanitarios:
- Outcomes clínicos: reducción de errores médicos, mejora de adherencia, detección temprana
- Eficiencia operativa: tiempo ahorrado por profesional, reducción de carga administrativa
- Experiencia del paciente: NPS, satisfacción, reducción de esperas
- ROI financiero: coste por caso evitado, reducción de reingresos, optimización de camas
- Cumplimiento normativo: certificaciones CE, FDA, ISO 13485, RGPD/HIPAA

tarea 3 — CICLO DE VENTA EN INSTITUCIONES SANITARIAS
Gestiona el proceso de compra largo y complejo:
- Fase de descubrimiento: preguntas de diagnóstico para entender el problema clínico
- Fase de evaluación: piloto o prueba de concepto en un servicio o unidad
- Fase de validación: presentación a comité clínico, TI y dirección
- Gestión del proceso de licitación pública (si aplica): pliegos, criterios técnicos
- Negociación: modelo de licencia, implementación por fases, SLAs clínicos

tarea 4 — GESTIÓN DE OBJECIONES ESPECÍFICAS DEL SECTOR
Prepara respuestas para las objeciones más comunes:
- "Ya tenemos un HIS/EHR y no queremos más sistemas" → interoperabilidad FHIR
- "La privacidad de los pacientes es nuestra prioridad" → certificaciones y arquitectura
- "Nuestros médicos no adoptarán otro sistema" → gestión del cambio y formación
- "No tenemos presupuesto este año" → modelo de pago por uso, financiación
- "Necesitamos referencias del sector público" → casos de estudio y pilotos

tarea 5 — MATERIALES DE VENTA CLÍNICA
Genera los documentos clave:
- Executive Summary de 1 página para la dirección
- Business Case con calculadora de ROI específica para salud
- Ficha técnica de seguridad y cumplimiento normativo
- Guía de implementación en 90 días
- Plantilla de acuerdo de piloto

instrucción final: adapta el playbook al tipo de solución que vendo (diagnóstico por imagen, gestión de citas, telemedicina, IA clínica, etc.) y al mercado geográfico (España, Latinoamérica, EE.UU.). Dame scripts de llamada, emails de prospección y plantillas de propuesta listas para usar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Venta de soluciones HealthTech a hospitales, clínicas y aseguradoras sanitarias',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para herramientas de salud digital con IA',
                'description'      => 'Aplica metodologías de product management adaptadas al sector salud para priorizar funcionalidades clínicas, gestionar regulaciones y lanzar productos médicos digitales con éxito.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en salud digital con experiencia en productos regulados (SaMD - Software as a Medical Device), aplicaciones para pacientes y herramientas de apoyo clínico. Tu tarea es ayudarme a gestionar el ciclo de vida de un producto de salud digital de forma eficaz.

objetivo: desarrollar un marco de product management adaptado al sector sanitario que permita lanzar productos de salud seguros, regulados, adoptados por clínicos y que generen valor real para pacientes.

tarea 1 — DISCOVERY CLÍNICO Y VALIDACIÓN DEL PROBLEMA
Diseña el proceso de investigación de usuarios en salud:
- Entrevistas con médicos: cómo estructurar conversaciones para entender flujos clínicos reales
- Observación en campo (job shadowing): en consulta, urgencias o UCI
- Análisis de datos de salud existentes: historias clínicas, resultados, tiempos
- Validación del problema con evidencia clínica: revisión bibliográfica y estudios
- Comité asesor médico: cómo crear y gestionar un clinical advisory board

tarea 2 — REGULACIÓN COMO PARTE DEL PRODUCTO
Integra el cumplimiento normativo en la hoja de ruta:
- Clasificación del dispositivo médico software (SaMD): clase I, II o III según riesgo
- Ruta regulatoria: CE Mark (Europa), 510(k)/PMA (EE.UU.), COFEPRIS (México)
- Documentación técnica: DHF, risk management (ISO 14971), usability engineering (IEC 62366)
- RGPD/HIPAA: privacidad desde el diseño, consentimiento del paciente, gestión de datos sensibles
- Cuándo involucrar al equipo regulatorio en el proceso de producto

tarea 3 — PRIORIZACIÓN EN ENTORNOS CLÍNICOS
Adapta los frameworks de priorización al sector salud:
- RICE modificado para salud: seguridad del paciente como criterio no negociable
- Árbol de decisión: ¿es una funcionalidad crítica de seguridad o una mejora de UX?
- Gestión de deuda técnica vs. deuda regulatoria
- Cómo balancear las necesidades del médico (eficiencia) con las del paciente (experiencia)
- OKRs clínicos: outcomes de salud como métricas norte (readmisión, adherencia, diagnóstico precoz)

tarea 4 — HOJA DE RUTA Y LANZAMIENTO CLÍNICO
Planifica el go-to-market en salud:
- Estrategia de piloto clínico: selección del centro, métricas de éxito, duración
- Plan de formación para profesionales sanitarios
- Gestión del cambio: cómo superar la resistencia de médicos y enfermeros
- Rollout progresivo por servicio o especialidad
- Post-market surveillance: vigilancia continua de incidentes y reclamaciones

tarea 5 — MÉTRICAS DE ÉXITO EN SALUD DIGITAL
Define los KPIs del producto médico:
- Clínicos: mejora en outcomes, reducción de errores, tiempo de diagnóstico
- Engagement: DAU/MAU de profesionales y pacientes, tasa de abandono
- Seguridad: número de incidentes, tiempo de respuesta, uptime
- Regulatorios: número de reclamaciones, auditorías superadas
- Negocio: ARR, churn de instituciones, NPS de clínicos y pacientes

instrucción final: aplica este marco al tipo de producto de salud digital que estoy construyendo. Si no especifico el tipo, trabaja con una app de gestión de enfermedades crónicas para pacientes. Dame templates de PRD médico, criterios de aceptación con enfoque clínico y una hoja de ruta trimestral de ejemplo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestión de producto para aplicaciones médicas, dispositivos software y plataformas de salud digital',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento sanitario con IA: selección y bienestar del personal',
                'description'      => 'Usa IA para mejorar la selección de profesionales de la salud, diseñar programas de bienestar laboral en entornos de alta presión y reducir el burnout en equipos clínicos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Recursos Humanos con experiencia en el sector sanitario, donde la gestión del talento tiene características únicas: alto estrés, turnos nocturnos, responsabilidad vital y escasez de profesionales cualificados. Tu tarea es ayudarme a optimizar la gestión del personal en una institución de salud.

objetivo: desarrollar estrategias de RRHH específicas para el sector salud que mejoren la atracción, retención y bienestar del personal sanitario, reduciendo el burnout y aumentando la calidad asistencial.

tarea 1 — SELECCIÓN DE PERSONAL SANITARIO
Diseña el proceso de selección adaptado a roles clínicos:
- Perfil competencial por rol: médico, enfermero, auxiliar, técnico de laboratorio, gestor sanitario
- Entrevistas por competencias clínicas: manejo del estrés, comunicación con pacientes, trabajo en equipo en urgencias
- Pruebas técnicas y simulaciones clínicas: casos clínicos, triaje, comunicación de malas noticias
- Assessment centers para mandos intermedios: gestión de equipos en entornos de alta presión
- Verificación de titulaciones y colegación obligatoria

tarea 2 — ONBOARDING CLÍNICO EFECTIVO
Diseña un programa de incorporación de 90 días:
- Semana 1: protocolos de seguridad del paciente, sistemas informáticos, presentación del equipo
- Mes 1: buddy clínico asignado, rotaciones de familiarización, formación en procedimientos
- Mes 2-3: autonomía progresiva con supervisión, evaluación de competencias, feedback 360°
- Puntos críticos de riesgo de abandono temprano y cómo prevenirlos
- Mentoring clínico: emparejamiento con profesionales senior de la misma especialidad

tarea 3 — PREVENCIÓN DEL BURNOUT EN SANITARIOS
Implementa programas de bienestar específicos para salud:
- Factores de riesgo de burnout en cada rol clínico: identificación temprana
- Programa de mindfulness y resiliencia para equipos de urgencias y cuidados intensivos
- Rotación de turnos: diseño de calendarios que minimicen la disrupción del ritmo circadiano
- Grupos de apoyo entre pares: debriefing tras situaciones traumáticas (muertes, incidentes)
- Política de desconexión digital: respeto al descanso fuera del turno

tarea 4 — RETENCIÓN Y DESARROLLO PROFESIONAL
Diseña planes de carrera en el sector sanitario:
- Escalas profesionales: de especialista a experto, coordinador, supervisor y gestor clínico
- Formación continuada: acceso a congresos, cursos MIR/EIR, investigación
- Incentivos no monetarios: flexibilidad horaria para formación, reducción de jornada, teletrabajo en roles administrativos
- Reconocimiento del desempeño clínico: casos de excelencia, innovación en protocolos
- Retención de talento millennial en sanidad: valores, propósito y conciliación

tarea 5 — GESTIÓN DE EQUIPOS MULTIDISCIPLINARES
Mejora la colaboración entre especialidades:
- Comunicación entre guardias: sistemas de traspaso de información seguro (SBAR)
- Resolución de conflictos entre médicos y enfermería
- Gestión de diversidad: equipos con diferentes especialidades, culturas y generaciones
- Liderazgo clínico: formación de médicos y enfermeros como líderes de equipo
- Medición del clima laboral específica para entornos sanitarios

instrucción final: adapta las estrategias al tipo de institución (hospital público, clínica privada, centro de atención primaria, residencia de mayores). Dame plantillas de entrevista, planes de bienestar y métricas de RRHH específicas para el sector salud.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'RRHH en hospitales, clínicas y organizaciones sanitarias: selección, bienestar y retención',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del sector sanitario con IA: costes clínicos y rentabilidad',
                'description'      => 'Aplica IA para analizar la estructura de costes hospitalaria, calcular la rentabilidad por servicio o GRD, y optimizar la gestión económica de instituciones sanitarias.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en el sector sanitario, con conocimiento de la contabilidad analítica hospitalaria, los sistemas de clasificación de pacientes (GRDs/DRGs) y la financiación pública y privada de la salud. Tu tarea es ayudarme a analizar y mejorar la gestión económica de una institución sanitaria.

objetivo: desarrollar un análisis financiero completo del sector salud que permita identificar ineficiencias, optimizar costes clínicos sin comprometer la calidad asistencial y mejorar la sostenibilidad económica del centro.

tarea 1 — ESTRUCTURA DE COSTES HOSPITALARIA
Analiza y desglosa la contabilidad analítica del centro:
- Costes directos: personal sanitario, farmacia, material fungible, pruebas diagnósticas
- Costes indirectos: hostelería, limpieza, mantenimiento, administración
- Costes por unidad productiva: urgencias, quirófano, hospitalización, consultas externas, UCI
- Imputación de costes por proceso asistencial: coste real del episodio del paciente
- Comparativa con benchmarks del sector (costes medios por cama, por alta, por consulta)

tarea 2 — ANÁLISIS DE RENTABILIDAD POR SERVICIO Y GRD
Evalúa la contribución económica de cada área:
- Margen de contribución por especialidad médica
- Análisis GRD/DRG: servicios con mayor desviación entre coste real e ingreso financiado
- Procesos más rentables vs. deficitarios: decisiones estratégicas (ampliar, externalizar, cerrar)
- Actividad privada vs. actividad pública: diferencias en margen y volumen
- Coste de no calidad: reingresos, infecciones nosocomiales, eventos adversos

tarea 3 — PRESUPUESTACIÓN Y CONTROL DE GESTIÓN
Diseña el modelo presupuestario sanitario:
- Presupuesto por objetivos clínicos: actividad prevista, calidad, eficiencia
- Control presupuestario mensual: desviaciones y análisis de causas
- Indicadores de gestión económica: coste por alta ajustada, índice de ocupación, rotación de camas
- Cuadro de mando integral (CMI) para la dirección: perspectiva financiera, clínica, procesos y personas
- Proyecciones financieras a 3 años con escenarios de demanda

tarea 4 — FINANCIACIÓN Y FUENTES DE INGRESOS
Analiza las vías de financiación del centro:
- Contrato-programa con la administración: actividad financiada y tarifas
- Ingresos por actividad privada y mutuas: facturación y gestión de cobros
- Subvenciones y proyectos de investigación: I+D+i, ensayos clínicos
- Financiación de equipamiento médico: leasing, renting, fondo de reposición
- Optimización de la facturación: codificación correcta de GRDs, recuperación de impagados

tarea 5 — OPTIMIZACIÓN DE COSTES CON CALIDAD ASISTENCIAL
Identifica oportunidades de eficiencia sin comprometer la atención:
- Gestión farmacéutica: uso de genéricos, centralización de compras, gestión de stock
- Optimización quirúrgica: maximizar el uso del quirófano, reducir cancelaciones
- Hospitalización de día vs. ingreso convencional: coste-efectividad
- Digitalización de procesos administrativos: reducción de costes de gestión
- Compras centralizadas y acuerdos marco con proveedores

instrucción final: trabaja con los datos financieros del centro sanitario que te proporcione. Si no dispongo de datos, usa supuestos realistas para un hospital comarcal de 200 camas. Presenta los análisis con tablas, métricas clave y recomendaciones priorizadas por impacto económico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestión económica y análisis financiero de hospitales, clínicas y servicios de salud',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo en salud digital con IA: RGPD, HIPAA y SaMD',
                'description'      => 'Usa IA para analizar el marco regulatorio de la salud digital, evaluar el cumplimiento de tu organización y preparar la documentación necesaria para auditorías y certificaciones.',
                'prompt_content'   => <<<'EOT'
Eres un abogado y consultor especializado en derecho sanitario y regulación de tecnología médica, con experiencia en RGPD, HIPAA, marcado CE de dispositivos médicos software (SaMD) y marcos de ciberseguridad en salud. Tu tarea es ayudarme a navegar el complejo entorno regulatorio de la salud digital.

objetivo: evaluar el cumplimiento normativo de mi organización o producto de salud digital e identificar las acciones necesarias para obtener las certificaciones requeridas, proteger los datos de los pacientes y operar dentro de la legalidad en los mercados objetivo.

tarea 1 — MAPA REGULATORIO DE SALUD DIGITAL
Identifica las normativas aplicables según el contexto:
- Unión Europea: RGPD, Reglamento de Dispositivos Médicos (MDR 2017/745), Ley de IA, ENISA
- Estados Unidos: HIPAA/HITECH, FDA 21 CFR Part 11, FTC Health Breach Notification Rule
- España: Ley 41/2002 de autonomía del paciente, Ley Orgánica de Protección de Datos (LOPDGDD)
- Latinoamérica: marcos nacionales de protección de datos (LFPDPPP México, Lei Geral Brasil)
- Normas ISO aplicables: ISO 27001, ISO 13485, ISO 14971, IEC 62304, IEC 62366

tarea 2 — ANÁLISIS DE BRECHAS DE CUMPLIMIENTO
Evalúa el estado actual de la organización:
- Assessment de privacidad: inventario de datos de salud procesados y bases legales
- Evaluación de impacto de protección de datos (EIPD/DPIA): cuándo es obligatoria y cómo realizarla
- Brechas de seguridad: análisis de vulnerabilidades técnicas y organizativas
- Clasificación del software: ¿es un dispositivo médico? Análisis según MDR y guías MDCG
- Estado de certificaciones actuales y roadmap para obtener las faltantes

tarea 3 — DOCUMENTACIÓN REGULATORIA
Prepara los documentos obligatorios:
- Registro de actividades de tratamiento (RAT/ROPA) para datos de salud
- Política de privacidad y avisos de información a pacientes
- Acuerdos de procesamiento de datos (DPA) con proveedores y subcontratistas
- Documentación técnica de dispositivo médico software: DHF, IFU, risk management file
- Plan de respuesta a incidentes y notificación de brechas de seguridad

tarea 4 — CONSENTIMIENTO INFORMADO DIGITAL
Diseña el marco de consentimiento para datos de salud:
- Requisitos de validez del consentimiento en datos de salud (categoría especial)
- Consentimiento granular: separar finalidades (tratamiento, investigación, marketing)
- Gestión de revocación: cómo permitir al paciente retirar el consentimiento fácilmente
- Menores de edad: consentimiento parental y excepciones en salud
- Documentación y evidencia del consentimiento obtenido

tarea 5 — AUDITORÍA Y MANTENIMIENTO DEL CUMPLIMIENTO
Establece el programa de cumplimiento continuo:
- Auditorías internas periódicas de privacidad y seguridad
- Formación obligatoria del personal en protección de datos de salud
- Gestión de solicitudes de derechos de pacientes (acceso, rectificación, supresión, portabilidad)
- Notificación de brechas: plazos (72 horas RGPD) y procedimiento de comunicación
- Relación con autoridades de control: cómo colaborar con la AEPD u otras supervisoras

instrucción final: analiza el cumplimiento normativo de mi producto o servicio de salud digital específico. Si no tengo detalles, trabaja con el caso de una app de telemedicina que opera en España y procesa datos de salud de pacientes adultos. Dame listas de verificación, plantillas de documentos y un plan de acción priorizado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Cumplimiento normativo de productos y servicios de salud digital: RGPD, HIPAA, MDR y SaMD',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al paciente empática con IA: comunicación y soporte en salud',
                'description'      => 'Usa IA para mejorar la comunicación con pacientes, diseñar flujos de atención empáticos y gestionar situaciones difíciles en servicios de atención al cliente sanitario.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en experiencia del paciente y comunicación sanitaria, con formación en humanización de la asistencia y gestión de situaciones de alta carga emocional en salud. Tu tarea es ayudarme a mejorar la calidad de la atención y comunicación con pacientes en un entorno sanitario.

objetivo: desarrollar protocolos de comunicación empática, scripts para situaciones difíciles y estrategias de atención al paciente que mejoren la satisfacción, la adherencia al tratamiento y la confianza en el sistema de salud.

tarea 1 — COMUNICACIÓN EMPÁTICA EN SALUD
Diseña el marco de comunicación centrada en el paciente:
- Técnica SPIKES: protocolo para comunicar malas noticias (Setting, Perception, Invitation, Knowledge, Emotions, Strategy)
- Escucha activa en consulta: cómo hacer que el paciente se sienta escuchado en 15 minutos
- Lenguaje claro y accesible: cómo traducir términos médicos complejos
- Comunicación no verbal: postura, contacto visual, distancia apropiada en consulta
- Adaptación a diferentes perfiles: paciente ansioso, negacionista, sobreinformado, mayor con baja alfabetización

tarea 2 — GESTIÓN DE SITUACIONES DIFÍCILES
Prepara protocolos para escenarios de alta tensión:
- Paciente agresivo o en crisis emocional: desescalada verbal y técnicas de contención
- Comunicación de diagnósticos graves: cáncer, enfermedades crónicas, pronóstico limitado
- Gestión de la queja y reclamación: escuchar, empatizar, investigar, resolver y hacer seguimiento
- Acompañamiento en el duelo: cómo hablar con familiares tras el fallecimiento
- Pacientes con barreras lingüísticas o culturales: recursos y estrategias de comunicación

tarea 3 — ATENCIÓN MULTICANAL EN SALUD
Diseña la experiencia omnicanal del paciente:
- Recepción presencial: protocolo de acogida, reducción de tiempos de espera percibidos
- Call center sanitario: script de triaje telefónico, gestión de citas, información sobre resultados
- Chat y mensajería: respuestas asíncronas a consultas no urgentes, límites y derivación a urgencias
- App del paciente: notificaciones, recordatorios de medicación, seguimiento de síntomas
- Telemedicina: protocolo de videoconsulta, comprobación técnica previa, cierre de la consulta virtual

tarea 4 — SEGUIMIENTO POST-CONSULTA
Diseña el acompañamiento después de la visita:
- Resumen de la consulta: cómo enviar al paciente un resumen comprensible de lo tratado
- Recordatorios de medicación y citas de seguimiento
- Encuesta de satisfacción: preguntas clave del NPS sanitario y cómo actuar con los resultados
- Detección de pacientes en riesgo de abandono del tratamiento: señales de alerta y reactivación
- Programa de paciente crónico: contacto proactivo, check-ins periódicos, soporte continuado

tarea 5 — HUMANIZACIÓN DE LA ASISTENCIA
Implementa iniciativas de humanización en el centro:
- Proyecto de acogida humanizada: desde el ingreso hasta el alta hospitalaria
- Gestión de las preferencias del paciente: habitación, acompañante, alimentación, privacidad
- Arte y ambiente terapéutico: cómo el entorno físico impacta en la recuperación
- Voluntariado y apoyo comunitario: integración de voluntarios en la atención
- Medición de la humanización: indicadores PREMs (Patient Reported Experience Measures)

instrucción final: adapta los protocolos al tipo de servicio sanitario que gestiono (urgencias, consultas externas, hospitalización, atención primaria, call center de salud). Dame scripts de conversación reales, plantillas de comunicación escrita y un plan de formación del equipo de atención al paciente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejora de la experiencia y comunicación con pacientes en servicios sanitarios presenciales y digitales',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en salud digital con IA: posicionamiento y proyectos',
                'description'      => 'Define tu nicho como consultor independiente en salud digital, atrae clientes del sector sanitario y gestiona proyectos de transformación digital en clínicas y hospitales con IA.',
                'prompt_content'   => <<<'EOT'
Eres un consultor estratégico con experiencia en el ecosistema de salud digital y en el desarrollo de negocios de consultoría independiente. Tu tarea es ayudarme a construir y hacer crecer mi práctica freelance especializada en transformación digital del sector sanitario.

objetivo: diseñar una propuesta de valor diferenciada como consultor independiente de salud digital, atraer clientes del sector sanitario y gestionar proyectos de consultoría con éxito en un mercado altamente especializado y regulado.

tarea 1 — POSICIONAMIENTO Y NICHO EN SALUD DIGITAL
Define tu especialización dentro del ecosistema sanitario:
- Análisis de nichos rentables: telemedicina, IA clínica, interoperabilidad, experiencia del paciente, salud mental digital, wearables, genomics
- Intersecciones de valor: salud + IA, salud + regulación, salud + UX, salud + datos
- Propuesta de valor única: qué problema específico resuelves mejor que nadie
- Posicionamiento geográfico: mercado local, nacional o internacional (Latam, EE.UU., Europa)
- Credibilidad inicial: formación, certificaciones, experiencia previa en salud

tarea 2 — ATRACCIÓN DE CLIENTES SANITARIOS
Desarrolla tu estrategia de desarrollo de negocio:
- LinkedIn para salud digital: perfil optimizado, contenido de autoridad, red de contactos clave
- Conferencias y congresos: HIMSS, Health 2.0, eSalud, congreso de hospitales nacionales
- Publicaciones y thought leadership: artículos en revistas sanitarias, blog propio, podcast
- Red de referidos: alianzas con otros consultores, abogados sanitarios, empresas de HealthTech
- Propuestas no solicitadas: cómo acercarte a hospitales con problemas identificables

tarea 3 — ESTRUCTURA DE SERVICIOS Y PRECIOS
Define tu cartera de servicios freelance en salud:
- Auditoría de madurez digital: evaluación del estado de transformación digital del centro
- Consultoría estratégica: diseño de hoja de ruta de digitalización
- Acompañamiento en selección de proveedores: evaluación de HIS, EHR, telemedicina
- Formación y capacitación: talleres para equipos directivos y clínicos
- Gestión de proyectos: PMO para implementaciones de sistemas sanitarios
Tarifas de referencia: day rate, proyecto cerrado, retainer mensual

tarea 4 — GESTIÓN DE PROYECTOS SANITARIOS
Ejecuta proyectos de consultoría en entornos complejos:
- Fase de diagnóstico: cómo entrevistar a stakeholders clínicos y obtener datos reales
- Gestión de resistencias: médicos escépticos, dirección con presupuesto limitado, TI saturado
- Deliverables de calidad: informes ejecutivos, roadmaps, análisis de proveedores, business cases
- Gestión del tiempo en proyectos sanitarios: pilotos, comités de aprobación, procesos lentos
- Cierre y transferencia del conocimiento: cómo asegurarte de que el cliente pueda continuar sin ti

tarea 5 — ESCALABILIDAD Y SOSTENIBILIDAD DEL NEGOCIO
Construye un negocio freelance sostenible en salud:
- Productización de servicios: paquetes estandarizados que puedas vender repetidamente
- Equipo y subcontratación: cuándo y cómo incorporar otros especialistas
- Ingresos recurrentes: retainers de mantenimiento, formación continua, advisory roles
- Gestión financiera freelance: provisiones, impuestos, seguros de responsabilidad civil profesional
- Actualización continua: cómo mantenerse al día en un sector que cambia tan rápido

instrucción final: ayúdame a construir mi negocio de consultoría freelance en salud digital desde cero o a hacer crecer el que ya tengo. Si no especifico mi situación de partida, asume que soy un profesional con 5 años de experiencia en el sector sanitario que quiere dar el salto a la consultoría independiente. Dame un plan de acción concreto para los primeros 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construcción de práctica freelance de consultoría en transformación digital del sector sanitario',
                'vote_score'       => 32,
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
