<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills542Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gestión de riesgos reputacionales en marketing con IA',
                'description'       => 'Monitoriza y gestiona los riesgos de reputación de marca en tiempo real usando IA: detección temprana de crisis, análisis de sentimiento, gestión de incidentes virales y protocolos de respuesta en redes sociales.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en gestión de crisis y riesgos reputacionales para marcas, con experiencia en el uso de inteligencia artificial para la detección temprana de amenazas y la gestión de incidentes de comunicación en el entorno digital.

instrucción: Ayúdame a diseñar un sistema integral de gestión de riesgos reputacionales para una marca de consumo que opera en mercados hispanohablantes, que me permita detectar amenazas antes de que escalen, gestionar crisis de forma eficiente y medir el impacto de cada incidente en la percepción de marca.

Desarrolla los siguientes componentes:

**1. Sistema de escucha y detección temprana con IA**
Diseña un sistema de monitorización que use IA para: rastrear en tiempo real las menciones de la marca en redes sociales, foros, medios digitales y reseñas de clientes; detectar cambios anómalos en el sentimiento general que puedan indicar el inicio de una crisis; identificar influencers y cuentas con alto alcance que estén difundiendo contenido negativo; y alertar al equipo de comunicación con suficiente antelación para intervenir antes de que el problema escale.

**2. Clasificación y evaluación del nivel de riesgo**
Define una taxonomía de riesgos reputacionales específica para marcas de consumo: riesgos de producto (retirada de producto, problema de seguridad), riesgos de conducta (comportamiento inapropiado de empleados o directivos), riesgos de comunicación (mensaje mal interpretado, campaña polémica), riesgos de terceros (proveedores o colaboradores con problemas éticos), y riesgos de contexto (asociación no deseada con eventos negativos). Para cada categoría, define el nivel de urgencia y el protocolo de activación.

**3. Protocolo de respuesta según el tipo de incidente**
Diseña los flujos de decisión para los escenarios más frecuentes: cómo responder a un hashtag negativo viral, cómo gestionar una campaña de boicot organizado, cómo manejar una crítica de un creador de contenido con millones de seguidores, y cómo actuar ante una noticia negativa en medios de comunicación. Para cada escenario, define los roles del equipo, los tiempos de respuesta objetivo y los mensajes tipo.

**4. Generación de contenido de respuesta con IA**
Explica cómo usar IA para generar borradores de respuesta adaptados a cada canal y tono: declaraciones oficiales para medios, respuestas individuales a comentarios críticos en redes, comunicados internos para empleados, y mensajes para clientes afectados. Define las guías de revisión humana antes de publicar y los criterios para adaptar el tono (empático, informativo, disculpa, defensa).

**5. Análisis post-crisis y aprendizaje**
Define el proceso de revisión después de cada incidente: medición del impacto en el share of voice y el sentimiento neto, análisis de la cobertura mediática y el alcance del contenido negativo, evaluación de la efectividad de la respuesta (tiempo de reacción, tono elegido, canales utilizados), y documentación de las lecciones aprendidas para mejorar el protocolo.

**6. Prevención proactiva y blindaje de reputación**
Diseña la estrategia preventiva: construcción de un colchón de reputación positiva antes de que lleguen las crisis, identificación y gestión de los grupos de interés más influyentes, programa de escucha activa a empleados para detectar riesgos internos, y auditoría periódica de los activos de comunicación de la marca para identificar vulnerabilidades.

Incluye una plantilla de manual de crisis adaptable a diferentes tipos de marca, ejemplos de respuestas efectivas a crisis reales del sector (anonimizadas) y recomendaciones sobre las herramientas de social listening con IA más adecuadas para cada presupuesto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Detección y gestión de crisis reputacionales de marca con IA',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo de sistemas de compliance y auditoría con IA',
                'description'       => 'Construye plataformas de compliance automatizado que usen IA para monitorizar el cumplimiento normativo, generar evidencias de auditoría y detectar desviaciones en los procesos de negocio antes de que se conviertan en incumplimientos.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de compliance y auditoría, con experiencia en el diseño de plataformas que usan inteligencia artificial para automatizar el control del cumplimiento normativo en sectores regulados como financiero, sanitario, telco y gran consumo.

instrucción: Ayúdame a diseñar la arquitectura y el plan de desarrollo de una plataforma de compliance automatizado que use IA para monitorizar el cumplimiento de normativas en tiempo real, generar evidencias para auditorías y alertar sobre desviaciones antes de que se conviertan en incumplimientos.

Desarrolla los siguientes aspectos técnicos:

**1. Arquitectura de la plataforma de compliance**
Define la arquitectura de microservicios: módulo de ingestión de datos de negocio (transacciones, contratos, comunicaciones, logs de sistemas), motor de reglas de compliance que mapea las normativas aplicables a eventos de negocio concretos, módulo de detección de anomalías con IA para identificar patrones que indican potencial incumplimiento, y repositorio de evidencias inmutable para auditorías. Especifica los patrones de diseño más adecuados (Event Sourcing, CQRS) y las tecnologías recomendadas.

**2. Motor de reglas normativas con IA**
Diseña el sistema que convierte las normativas escritas en lenguaje natural en reglas ejecutables: uso de LLMs para interpretar nuevas regulaciones y extraer las obligaciones concretas, mapeo de cada obligación a los eventos de negocio que la activan, definición de los controles que verifican el cumplimiento y las evidencias requeridas, y sistema de versionado de reglas cuando las normativas cambian. Incluye el proceso de validación jurídica de las reglas generadas por IA.

**3. Detección de incumplimientos en tiempo real**
Desarrolla los algoritmos de detección: modelos de clasificación que analizan transacciones para detectar patrones de fraude o lavado de dinero, análisis de comunicaciones para identificar prácticas comerciales irregulares, monitorización de contratos para detectar cláusulas no conformes con la normativa vigente, y alertas basadas en umbrales estadísticos que detectan comportamientos anómalos respecto al histórico.

**4. Generación automática de evidencias para auditorías**
Define el sistema de evidencias: captura automática de las trazas de cumplimiento en cada transacción o proceso de negocio, generación de informes de auditoría estructurados con las evidencias requeridas por cada normativa, firma digital y sellado temporal de las evidencias para garantizar su integridad, y acceso controlado para auditores externos con permisos granulares por normativa y periodo.

**5. Dashboard de compliance y reporting regulatorio**
Diseña la interfaz de gestión: panel de control con el estado de cumplimiento en tiempo real por área normativa y unidad de negocio, sistema de gestión de hallazgos con asignación de responsables y plazos de remediación, generación automática de los informes periódicos que exige el regulador, y trending histórico del nivel de cumplimiento para identificar áreas de mejora estructural.

**6. Integración con sistemas de negocio existentes**
Define la estrategia de integración: conectores para los sistemas ERP, CRM y core banking más habituales, APIs para integrar el compliance en los flujos de trabajo de las aplicaciones de negocio, y framework de datos que normaliza la información de múltiples fuentes en un modelo unificado compatible con el motor de reglas.

Proporciona ejemplos de código para los componentes más críticos (motor de reglas, conector de ingestión, generador de evidencias) e incluye recomendaciones sobre las normativas con mayor potencial de automatización (GDPR, PCI-DSS, SOX, AML/KYC) y las herramientas de IA más adecuadas para cada caso de uso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Plataforma automatizada de compliance y generación de evidencias de auditoría',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de dashboards de riesgos empresariales con IA',
                'description'       => 'Crea interfaces visuales de gestión de riesgos que comuniquen de forma clara el estado del compliance, los riesgos activos y los indicadores de alerta a distintos niveles de la organización, desde el equipo operativo hasta el consejo de administración.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador UX/UI especializado en interfaces de datos complejos y sistemas de gestión de riesgos, con experiencia en el diseño de dashboards para equipos de compliance, auditoría interna y dirección general de empresas en sectores regulados.

instrucción: Ayúdame a diseñar un sistema de dashboards de gestión de riesgos y compliance que sea intuitivo para distintos tipos de usuario dentro de una organización: desde el responsable de compliance que necesita el detalle operativo hasta el consejo de administración que necesita una visión ejecutiva del riesgo global.

Desarrolla los siguientes aspectos del diseño:

**1. Arquitectura de información por nivel de usuario**
Define los diferentes perfiles de usuario y sus necesidades de información: el analista de compliance (necesita ver los hallazgos individuales, las evidencias y los plazos de remediación), el responsable de riesgos (necesita ver el estado por área normativa y los riesgos emergentes), el director financiero (necesita ver el impacto económico del riesgo y las provisiones requeridas), y el consejo de administración (necesita una visión sintética del perfil de riesgo global). Para cada perfil, define la profundidad de información y las acciones disponibles.

**2. Diseño del mapa de calor de riesgos**
Crea el diseño del elemento visual central: una matriz de riesgos (probabilidad × impacto) que muestre de un vistazo los riesgos más críticos, codificados por colores (rojo, naranja, amarillo, verde), con la posibilidad de filtrar por categoría de riesgo, unidad de negocio y horizonte temporal. Define la interacción: qué información muestra al hacer clic en cada riesgo, cómo se navega al detalle sin perder el contexto global.

**3. Indicadores de alerta y notificaciones**
Diseña el sistema de alertas visuales: indicadores de semáforo para los KRIs (Key Risk Indicators) más importantes, tendencias de evolución de los indicadores (flecha de mejora/empeoramiento), contador de hallazgos abiertos por nivel de gravedad y antigüedad, y alertas proactivas para vencimientos de plazos de remediación. Define cómo las alertas se integran en el flujo de trabajo diario del usuario.

**4. Visualización de la evolución temporal del riesgo**
Crea los diseños de los gráficos de tendencia: evolución mensual del número de incumplimientos por categoría normativa, comparativa del perfil de riesgo actual vs. el mismo periodo del año anterior, progresión de la tasa de remediación de hallazgos de auditoría, y proyección de riesgos futuros basada en patrones históricos y cambios normativos previstos.

**5. Flujo de trabajo de gestión de hallazgos**
Diseña la interfaz de gestión de hallazgos de auditoría: vista tipo kanban con los hallazgos en distintas fases (identificado, asignado, en remediación, validado, cerrado), detalle de cada hallazgo con descripción, evidencia, responsable, plan de acción y fechas, y sistema de comentarios y aprobaciones para el flujo de validación. Define cómo el responsable de auditoría y el responsable del área afectada interactúan en el mismo hallazgo.

**6. Exportación y reporting para reguladores**
Define los formatos de exportación: informe ejecutivo para el consejo en PDF con los principales indicadores y narrativa de los riesgos clave, informe de auditoría estructurado para el regulador con todas las evidencias requeridas, y exportación de datos en formato estructurado (CSV, Excel) para análisis externos. Incluye las plantillas de informe más comunes en los sectores más regulados.

Proporciona mockups en descripción detallada de las cinco pantallas más importantes y define las guías de estilo: paleta de colores para la escala de riesgo, tipografía para datos numéricos densos, y principios de accesibilidad para interfaces de datos complejos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño de interfaces de gestión de riesgos para distintos perfiles de usuario',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Evaluación de riesgos en procesos de ventas B2B con IA',
                'description'       => 'Incorpora el risk assessment al proceso de ventas B2B: evalúa la solvencia y el perfil de riesgo de nuevos clientes, anticipa impagos, gestiona contratos con cláusulas de protección y prioriza oportunidades de menor riesgo.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en ventas B2B y gestión de riesgos comerciales, con experiencia en la implementación de sistemas de evaluación de riesgo de cliente en equipos de ventas de empresas que trabajan con crédito comercial, contratos de largo plazo o servicios de suscripción.

instrucción: Ayúdame a diseñar un proceso de evaluación de riesgos integrado en el ciclo de ventas B2B que me permita identificar clientes de alto riesgo antes de firmar el contrato, establecer condiciones comerciales adaptadas al perfil de riesgo y minimizar los impagos y las cancelaciones anticipadas.

Desarrolla los siguientes componentes:

**1. Perfil de riesgo del cliente potencial**
Define el proceso de due diligence comercial: qué información recopilar sobre el cliente potencial antes de avanzar en el proceso de venta (situación financiera pública, referencias comerciales, historial de pagos con otros proveedores, antigüedad de la empresa, estructura societaria y concentración de cliente), cómo usar IA para automatizar la recopilación y el análisis de esta información, y cómo traducir el análisis en un score de riesgo con recomendaciones concretas sobre las condiciones a ofrecer.

**2. Matriz de condiciones comerciales por perfil de riesgo**
Diseña una matriz que adapte las condiciones comerciales al perfil de riesgo del cliente: para clientes de bajo riesgo (empresas consolidadas, buen historial de pagos), condiciones estándar con plazo de pago de 60 días y descuento por volumen; para clientes de riesgo medio, cobro anticipado de un porcentaje o aval bancario; para clientes de alto riesgo, pago por adelantado o contrato con garantías adicionales. Define los umbrales de cada categoría y las condiciones mínimas no negociables.

**3. Señales de alerta durante el proceso de ventas**
Identifica los indicadores de riesgo que deben activar una revisión antes de cerrar: cambios en la información de la empresa durante el proceso de negociación (noticias negativas, cambio de directivos, reducción de plantilla), resistencia a proporcionar referencias o información financiera, solicitud de condiciones de pago inusualmente largas, contacto simultáneo con múltiples proveedores del mismo servicio, y señales de urgencia extrema sin justificación clara.

**4. Cláusulas de protección en contratos con IA**
Define las cláusulas contractuales que protegen al proveedor: cláusula de revisión de precios vinculada al índice de precios, garantías y avales para contratos de alto valor, condiciones de resolución anticipada con penalizaciones proporcionadas, limitación de la responsabilidad máxima del proveedor, y mecanismos de resolución de disputas. Explica cómo usar IA para revisar los contratos del cliente y detectar cláusulas potencialmente problemáticas.

**5. Monitorización del riesgo durante la relación comercial**
Diseña el sistema de seguimiento post-contrato: alertas automáticas sobre retrasos en los pagos con escalada progresiva, monitorización de señales externas de deterioro financiero del cliente (noticias, cambios en registros mercantiles, variaciones en el scoring de crédito), protocolo de renegociación de condiciones cuando el perfil de riesgo del cliente empeora, y proceso de recuperación de deuda con apoyo de IA para priorizar las actuaciones.

**6. Impacto en la estrategia de pipeline y forecast**
Explica cómo integrar el risk assessment en la gestión del pipeline: ponderación de oportunidades por riesgo del cliente en el forecast, segmentación de la cartera de clientes por perfil de riesgo para identificar concentraciones peligrosas, y definición del mix óptimo de clientes por perfil de riesgo para maximizar el ingreso recurrente ajustado por riesgo.

Incluye una plantilla de scoring de riesgo de cliente con las variables y pesos recomendados, y ejemplos de cómo presentar el análisis de riesgo al equipo directivo en el proceso de aprobación de grandes contratos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Due diligence comercial y gestión de riesgo de cliente en ventas B2B',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de riesgos en el desarrollo de producto con IA',
                'description'       => 'Incorpora la gestión de riesgos al ciclo de desarrollo de producto: identifica los riesgos técnicos, de mercado y regulatorios de forma temprana, define planes de mitigación y toma decisiones de producto basadas en el perfil de riesgo de cada iniciativa.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager senior con experiencia en la gestión de riesgos en el desarrollo de productos digitales, con especial enfoque en productos de sectores regulados o con alta exposición a riesgos técnicos, de privacidad o de mercado.

instrucción: Ayúdame a diseñar un framework de gestión de riesgos integrado en el proceso de desarrollo de producto que me permita identificar y mitigar los riesgos más relevantes en cada fase del ciclo de vida del producto, desde el discovery hasta el lanzamiento y el crecimiento post-lanzamiento.

Desarrolla los siguientes aspectos del framework:

**1. Taxonomía de riesgos en product management**
Define las categorías de riesgo más relevantes para un equipo de producto: riesgos de valor (el producto no resuelve el problema del cliente de forma suficiente), riesgos de usabilidad (el cliente no entiende cómo usar el producto), riesgos de viabilidad técnica (el equipo de ingeniería no puede construir lo que el equipo de producto ha diseñado), riesgos regulatorios (el producto incumple normativas de privacidad, seguridad o sectoriales), y riesgos de mercado (un competidor lanza una funcionalidad similar antes de nuestra ventana de oportunidad). Para cada categoría, define los indicadores de alerta más habituales.

**2. Risk assessment en la fase de discovery**
Define el proceso de evaluación de riesgos durante el discovery de nuevas iniciativas: cómo cuantificar la incertidumbre de las hipótesis de valor (¿sabemos que el cliente tiene este problema?), cómo evaluar los riesgos regulatorios de forma temprana antes de invertir en el diseño (checklist de GDPR, accesibilidad, compliance sectorial), y cómo usar IA para analizar el mercado competitivo e identificar los riesgos de que la iniciativa quede obsoleta antes del lanzamiento.

**3. Gestión de riesgos técnicos en la planificación**
Diseña el proceso de identificación de riesgos técnicos en la fase de refinamiento: cómo facilitar sesiones de risk storming con el equipo de ingeniería para identificar los componentes técnicos con mayor incertidumbre, cómo decidir si invertir en spikes técnicos para reducir la incertidumbre antes de comprometerse con un roadmap, y cómo representar los riesgos técnicos en el roadmap para que sean visibles a los stakeholders.

**4. Mitigación y planes de contingencia**
Para los riesgos más críticos, define cómo diseñar planes de mitigación concretos: estrategia de MVP que valide la hipótesis de mayor riesgo antes de construir el producto completo, feature flags para poder desactivar funcionalidades problemáticas sin afectar al producto global, planes de rollback para lanzamientos con riesgo técnico elevado, y estrategias de comunicación a los usuarios en caso de incidente mayor.

**5. Monitorización de riesgos en producción**
Define el sistema de monitorización post-lanzamiento: KPIs de salud del producto que actúan como indicadores de riesgo (tasa de error, tiempo de respuesta, tasa de abandono, NPS), alertas automáticas cuando los indicadores superan los umbrales definidos, proceso de triage y priorización de incidentes según su impacto en el riesgo del producto, y definición de los criterios que activan un rollback o una comunicación de crisis.

**6. Integración del risk management en el proceso ágil**
Explica cómo integrar la gestión de riesgos en las ceremonias ágiles sin añadir burocracia: revisión de riesgos en la planificación del sprint, actualización del registro de riesgos en la retrospectiva, y cómo comunicar el perfil de riesgo del roadmap a los stakeholders en las reviews trimestrales. Proporciona plantillas de registro de riesgos adaptadas al contexto de un equipo ágil de producto.

Incluye ejemplos de casos reales (anonimizados) de riesgos de producto que se materializaron por no haberse detectado a tiempo, y las lecciones que se pueden extraer para mejorar el proceso de identificación temprana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Framework de risk management integrado en el ciclo de desarrollo de producto',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Compliance laboral y auditorías de RRHH con IA',
                'description'       => 'Asegura el cumplimiento de la normativa laboral usando IA: auditorías de igualdad salarial, compliance en contratación y despidos, monitorización de condiciones de trabajo y gestión de los riesgos legales más habituales en la gestión de personas.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en derecho laboral y gestión de recursos humanos, con especialización en compliance laboral y auditorías de RRHH en empresas medianas y grandes que operan en España y otros países de la Unión Europea.

instrucción: Ayúdame a diseñar un sistema de compliance laboral con apoyo de IA que me permita identificar y gestionar los principales riesgos legales en la gestión de personas, asegurar el cumplimiento de la normativa laboral vigente y preparar a la empresa para superar con éxito las inspecciones de trabajo y las auditorías salariales.

Desarrolla los siguientes componentes:

**1. Mapa de riesgos laborales por área de RRHH**
Identifica los principales riesgos legales en cada proceso de RRHH: en la selección (discriminación en el proceso de selección, incumplimiento de cuotas de reserva para personas con discapacidad, uso inapropiado de datos personales de candidatos), en la contratación (tipos de contrato inapropiados para la naturaleza del trabajo, incumplimiento de los requisitos de la reforma laboral 2022), en la gestión del tiempo (control horario incompleto, gestión del trabajo a distancia, registro de las horas extra), en la retribución (brecha salarial no justificada, incumplimiento del convenio colectivo), y en los procesos de salida (despidos con riesgo de impugnación, gestión de EREs y ERTEs).

**2. Plan de igualdad y auditoría salarial con IA**
Diseña el proceso de diagnóstico de igualdad: análisis de la brecha salarial por género ajustada a puesto, categoría profesional y antigüedad usando IA para identificar diferencias no justificables, revisión de las condiciones de trabajo y los criterios de promoción para detectar sesgos, diseño del plan de igualdad con medidas concretas y plazos, y sistema de seguimiento periódico de los indicadores de igualdad. Incluye las obligaciones legales según el tamaño de la empresa.

**3. Sistema de control del tiempo de trabajo con IA**
Define el sistema de registro horario que cumple con las obligaciones legales: automatización de la detección de horas extra no compensadas, alertas sobre empleados que superan las jornadas máximas legales, gestión del trabajo a distancia con los registros requeridos por el convenio colectivo de teletrabajo, y generación de informes de cumplimiento del registro horario para la Inspección de Trabajo.

**4. Protocolo de prevención del acoso y gestión de denuncias**
Diseña el sistema de gestión de denuncias internas: canal de denuncia confidencial que cumple con los requisitos de la Ley Orgánica 2/2023 (ley whistleblowing), protocolo de investigación con plazos y garantías para todas las partes, medidas cautelares durante la investigación, y comunicación de resoluciones. Define cómo usar IA para analizar patrones de conducta que puedan indicar situaciones de acoso antes de que se formalice una denuncia.

**5. Gestión de riesgos en los procesos de extinción de contratos**
Define el proceso de análisis de riesgo antes de ejecutar un despido: verificación de que concurren las causas alegadas con suficiente evidencia, cálculo correcto de la indemnización según el tipo de contrato y el convenio aplicable, revisión de las protecciones especiales del trabajador (embarazo, reducción de jornada, representante sindical), y preparación de la documentación para minimizar el riesgo de impugnación.

**6. Preparación para la Inspección de Trabajo**
Define el plan de preparación para una visita de la Inspección de Trabajo: documentación que debe estar siempre disponible y actualizada (registro horario, nóminas, contratos, plan de igualdad, protocolo de acoso, evaluación de riesgos laborales), proceso de respuesta a requerimientos, y protocolo de actuación durante la visita. Incluye los errores más frecuentes que cometen las empresas durante una inspección y cómo evitarlos.

Proporciona una checklist de compliance laboral por área y plantillas de los documentos más frecuentemente requeridos en auditorías e inspecciones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de compliance laboral y preparación para inspecciones de trabajo',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Risk management financiero y modelización de escenarios con IA',
                'description'       => 'Diseña y gestiona el framework de riesgos financieros de una empresa: riesgo de crédito, de liquidez, de mercado y operacional, con modelos de stress testing, simulación de escenarios y reporting para el comité de riesgos y el consejo.',
                'prompt_content'    => <<<'EOT'
Actúa como un Director de Riesgos (CRO) con experiencia en la gestión del riesgo financiero en empresas no financieras de mediano y gran tamaño, con especial expertise en la implementación de frameworks de Enterprise Risk Management (ERM) y el uso de inteligencia artificial para la modelización y predicción de riesgos.

instrucción: Ayúdame a diseñar un framework integral de gestión de riesgos financieros para una empresa industrial mediana con operaciones internacionales, que le permita identificar, cuantificar y gestionar sus principales exposiciones financieras, y reportar de forma efectiva al consejo de administración y a los inversores.

Desarrolla los siguientes componentes del framework:

**1. Inventario y clasificación de riesgos financieros**
Define el mapa de riesgos financieros de una empresa industrial con operaciones internacionales: riesgo de tipo de cambio (ventas en divisas, costes de materias primas en dólares), riesgo de tipo de interés (deuda a tipo variable, inversiones financieras), riesgo de crédito (exposición a clientes con pago diferido, riesgo de contraparte en instrumentos derivados), riesgo de liquidez (gestión del capital circulante, acceso a líneas de crédito), y riesgo de precio de materias primas. Para cada categoría, define las métricas de exposición y los umbrales de gestión.

**2. Modelización cuantitativa con IA**
Define los modelos de cuantificación del riesgo: Value at Risk (VaR) y Expected Shortfall para la cartera de exposiciones financieras, modelos de simulación Monte Carlo para evaluar el impacto de combinaciones de factores de riesgo, análisis de escenarios históricos (crisis financiera 2008, pandemia 2020, crisis energética 2022) para calibrar los modelos, y uso de machine learning para identificar correlaciones no lineales entre factores de riesgo que los modelos tradicionales no capturan.

**3. Stress testing y análisis de escenarios**
Diseña el proceso de stress testing: definición de escenarios adversos específicos para el sector industrial (caída del 30% del precio de venta del producto principal, depreciación del 20% del euro frente al dólar, aumento del 50% en el coste de las materias primas, corte del acceso al crédito bancario), cuantificación del impacto de cada escenario en el P&L, el balance y la liquidez, y definición de los planes de contingencia que se activarían en cada escenario.

**4. Estrategia de cobertura financiera**
Desarrolla la política de cobertura de riesgos: qué porcentaje de cada exposición financiera debe cubrirse con instrumentos derivados (forwards de divisas, swaps de tipos de interés, futuros de materias primas), horizonte temporal de las coberturas, criterios para ajustar dinámicamente la ratio de cobertura según las condiciones de mercado, y evaluación del coste de la cobertura vs. el beneficio en términos de reducción de volatilidad de los resultados.

**5. Gestión del riesgo de crédito de clientes**
Define el sistema de gestión del riesgo de crédito comercial: modelo de scoring de clientes que combina información financiera pública, historial de pagos propio y señales externas de deterioro, política de límites de crédito por cliente y segmento, sistema de seguimiento de la concentración de riesgo por cliente y sector, y protocolo de gestión de clientes en dificultades financieras (renegociación, garantías adicionales, cobertura con seguro de crédito).

**6. Reporting de riesgos al consejo y a los inversores**
Diseña los informes de riesgo: informe mensual al comité de riesgos con la evolución de los principales indicadores y las posiciones de cobertura, informe trimestral al consejo de administración con el perfil de riesgo global y los escenarios de stress, y comunicación a inversores y analistas sobre la gestión de riesgos financieros en el marco del reporting de resultados. Define cómo usar IA para generar estos informes de forma automática y consistente.

Incluye las métricas clave de cada categoría de riesgo, las plantillas de los principales informes y recomendaciones sobre los sistemas de gestión de riesgos (TMS, ERM platforms) más adecuados para una empresa industrial mediana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Framework ERM con modelización cuantitativa de riesgos financieros',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Automatización del compliance legal empresarial con IA',
                'description'       => 'Diseña e implementa programas de compliance legal que usen IA para monitorizar el cumplimiento normativo, detectar riesgos legales de forma temprana, gestionar las obligaciones regulatorias y preparar a la empresa para investigaciones y auditorías.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especializado en derecho corporativo y programas de compliance, con experiencia en el diseño e implementación de programas de cumplimiento normativo en empresas multinacionales de distintos sectores, y en el uso de tecnología jurídica (legal tech) para automatizar el seguimiento regulatorio.

instrucción: Ayúdame a diseñar un programa de compliance legal integral para una empresa mediana que opera en varios países, que use IA para automatizar la mayor parte del seguimiento normativo, la detección de riesgos y la generación de evidencias, reduciendo la dependencia de procesos manuales y minimizando el riesgo de incumplimiento.

Desarrolla los siguientes componentes del programa:

**1. Diseño del programa de compliance basado en riesgos**
Define la metodología de diseño del programa: cómo identificar las normativas aplicables según la actividad, los países de operación y la estructura corporativa de la empresa, cómo priorizar las obligaciones normativas según el riesgo de incumplimiento (probabilidad × impacto), cómo diseñar los controles preventivos y detectivos para cada obligación, y cómo documentar el programa para demostrar la diligencia debida ante los reguladores.

**2. Mapa normativo y seguimiento de cambios regulatorios con IA**
Diseña el sistema de seguimiento normativo: uso de IA para monitorizar las publicaciones del regulador, los boletines oficiales y las sentencias relevantes en cada país de operación, alertas automáticas cuando se detecta un cambio normativo que afecta a alguna obligación del programa, proceso de análisis del impacto del cambio y actualización de los controles afectados, y trazabilidad de todas las actualizaciones del programa a lo largo del tiempo.

**3. Canal de denuncias y gestión de investigaciones internas**
Define el sistema de gestión de denuncias: diseño del canal de denuncia que cumple con los requisitos de la Directiva Whistleblowing (2019/1937) y la Ley 2/2023, procedimiento de triaje y asignación de investigaciones, protocolo de investigación interna con las garantías procesales requeridas, criterios para decidir cuándo comunicar al regulador y cuándo contratar a investigadores externos, y gestión de la confidencialidad y la protección del denunciante.

**4. Prevención de la corrupción y del soborno**
Diseña los controles anticorrupción: política de regalos y hospitalidad con límites cuantitativos y proceso de aprobación para casos excepcionales, due diligence de terceros (proveedores, agentes, intermediarios) con análisis de riesgo basado en países de operación y estructura de comisiones, aprobación reforzada para pagos a partes relacionadas y en países de alto riesgo, y formación periódica obligatoria con test de comprensión y registro de completitud.

**5. Protección de datos como parte del compliance**
Integra la protección de datos en el programa de compliance: registro de actividades de tratamiento actualizado y gestionado con IA, proceso de evaluación de impacto para nuevos tratamientos (DPIA), gestión de los derechos de los interesados con plazos de respuesta controlados, procedimiento de notificación de brechas de seguridad al regulador y a los afectados, y auditoría periódica de la base legal de cada tratamiento.

**6. Métricas y reporting del programa de compliance**
Define el cuadro de mando del compliance: indicadores de resultado (número de incumplimientos detectados, tiempo de remediación, número de denuncias gestionadas), indicadores de proceso (porcentaje de formaciones completadas, ratio de actualización del programa tras cambios normativos, cobertura de la due diligence de terceros), y indicadores de cultura (resultados de encuestas de ética, participación en formaciones voluntarias). Define cómo presentar estos datos al comité de cumplimiento y al consejo de administración.

Proporciona plantillas de los documentos más críticos del programa (política anticorrupción, protocolo de investigaciones, registro de actividades de tratamiento) y recomendaciones sobre plataformas de GRC (Governance, Risk and Compliance) que integran capacidades de IA para automatizar el seguimiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño de programa de compliance legal con automatización por IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de incidentes y riesgos en atención al cliente con IA',
                'description'       => 'Diseña un sistema de gestión de incidentes para equipos de customer success que detecte situaciones de riesgo antes de que afecten a la satisfacción del cliente, gestione las reclamaciones graves de forma eficiente y proteja los ingresos en riesgo.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en Customer Success y operaciones de atención al cliente, con experiencia en el diseño de sistemas de gestión de incidentes y riesgo de churn en empresas SaaS y de servicios con base de clientes de suscripción.

instrucción: Ayúdame a diseñar un sistema de gestión de incidentes y riesgos de cliente que permita a mi equipo de Customer Success detectar situaciones problemáticas antes de que el cliente lo comunique, gestionar las reclamaciones graves de forma estructurada y proteger el ingreso recurrente de los clientes en riesgo de cancelación.

Desarrolla los siguientes componentes del sistema:

**1. Modelo de detección temprana del riesgo de churn**
Define el sistema de señales de alerta que combina datos de uso del producto (caída en el uso activo, reducción del número de usuarios que acceden, funcionalidades clave sin usar), señales de comportamiento del cliente (reducción en la frecuencia de las interacciones con el equipo de CS, ausencia en las reuniones de seguimiento programadas, retrasos en los pagos), y señales externas (noticias sobre dificultades financieras del cliente, cambio de decisor, proceso de fusión o adquisición). Para cada señal, define el peso en el score de riesgo y la acción recomendada.

**2. Clasificación y protocolo de gestión de incidentes graves**
Define la taxonomía de incidentes por gravedad: incidente crítico (el problema impide al cliente usar el producto o afecta a su negocio de forma directa, requiere respuesta en menos de 2 horas y escalada al director de CS), incidente mayor (degradación significativa del servicio, respuesta en menos de 4 horas), incidente menor (problema puntual sin impacto en el negocio, respuesta en el mismo día). Para cada nivel, define el equipo responsable, el protocolo de comunicación al cliente y los hitos de resolución.

**3. Gestión de la reclamación formal y la recuperación del cliente**
Diseña el proceso de gestión de reclamaciones: cómo recibir y registrar la reclamación de forma que el cliente se sienta escuchado, cómo investigar la causa raíz del problema de forma rápida con apoyo de IA (análisis de logs, revisión de interacciones previas, consulta a ingeniería), cómo comunicar la resolución con una explicación clara de lo que ocurrió y las medidas adoptadas para que no vuelva a ocurrir, y cómo diseñar el gesto de compensación o recuperación adecuado a la gravedad del incidente y al valor del cliente.

**4. Plan de intervención para clientes en riesgo**
Define el playbook de salvamento de clientes en riesgo de churn: cómo identificar el detonante real del riesgo más allá de los síntomas superficiales (insatisfacción con el producto, cambio de decisor, presión presupuestaria, aparición de un competidor), cómo diseñar un plan de acción personalizado para cada causa raíz, cómo involucrar al equipo directivo del proveedor cuando la situación lo requiere, y cómo hacer seguimiento del plan de recuperación con hitos medibles.

**5. Análisis de incidentes y mejora continua**
Define el proceso de aprendizaje de los incidentes: revisión post-mortem de los incidentes más graves para identificar la causa raíz y las oportunidades de mejora del producto o del proceso, análisis de patrones en los incidentes recurrentes que indican problemas sistémicos, comunicación de los hallazgos al equipo de producto para priorizar las mejoras de mayor impacto en la experiencia de cliente, y seguimiento de la evolución de los indicadores de calidad de servicio tras implementar las mejoras.

**6. Métricas de salud del cliente y reporting del equipo de CS**
Define el dashboard de gestión del riesgo de clientes: health score por cliente con evolución temporal, mapa de calor de la cartera de clientes por riesgo y ARR en riesgo, indicadores del equipo de CS (tiempo de respuesta a incidentes, tasa de resolución en primer contacto, NPS post-incidente), y previsión de churn por cohorte y segmento. Define la cadencia de revisión y las decisiones que se toman en función de los datos.

Incluye plantillas de los playbooks de intervención más frecuentes y ejemplos de comunicaciones de crisis al cliente que equilibran la transparencia con la protección de la imagen de la empresa.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de detección y gestión de riesgo de churn en Customer Success',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Auditorías de riesgos empresariales para consultores freelance con IA',
                'description'       => 'Ofrece servicios de auditoría de riesgos como freelance: metodología para identificar y evaluar los principales riesgos de negocio de tus clientes, herramientas de IA para acelerar el análisis y entrega de informes de alto valor que justifican tu tarifa.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor independiente especializado en gestión de riesgos empresariales y auditoría, con experiencia en la oferta de servicios de risk assessment a empresas medianas como consultor freelance, combinando metodologías probadas con herramientas de IA para entregar proyectos de alto valor de forma eficiente.

instrucción: Ayúdame a construir un servicio de auditoría de riesgos empresariales que pueda ofrecer como consultor freelance, con una metodología clara, herramientas de IA para acelerar el análisis, y un formato de entregables que justifique una tarifa premium y genere negocio recurrente con mis clientes.

Desarrolla los siguientes componentes del servicio:

**1. Definición y posicionamiento del servicio**
Ayúdame a definir mi propuesta de valor como auditor de riesgos freelance: qué tipo de empresa es mi cliente ideal (por sector, tamaño, situación de madurez en gestión de riesgos), qué problema resuelvo específicamente (la dirección no tiene visibilidad de sus riesgos más críticos, la empresa ha tenido un incidente grave y necesita una revisión externa, está preparándose para una ronda de financiación o una due diligence), y cómo me diferencio de las grandes consultoras (velocidad, precio, relación directa con la dirección, sin burocracia). Define los mensajes clave para atraer a este cliente.

**2. Metodología de la auditoría de riesgos en 4 fases**
Define el proceso de trabajo: fase de arranque (reunión de kick-off con la dirección para alinear el alcance, recopilación de documentación clave, entrevistas con los responsables de cada área), fase de diagnóstico (análisis de los procesos de negocio para identificar riesgos, evaluación de los controles existentes, benchmarking con empresas del sector), fase de evaluación (cuantificación de cada riesgo por probabilidad e impacto, mapeo en la matriz de riesgos, identificación de los riesgos críticos que requieren acción inmediata), y fase de recomendaciones (plan de acción priorizado, roadmap de implementación, propuesta de seguimiento). Define las tareas de IA que aceleran cada fase.

**3. Uso de IA para acelerar el análisis**
Define cómo usar IA en cada parte del proyecto: análisis automatizado de la documentación del cliente (contratos, políticas, procedimientos) para identificar brechas de control, investigación rápida del contexto sectorial y los riesgos más comunes en el sector del cliente, generación de la matriz de riesgos a partir de las notas de las entrevistas, redacción del informe final a partir del análisis estructurado, y preparación de la presentación ejecutiva para la dirección. Incluye los prompts más efectivos para cada tarea.

**4. Formato de entregables de alto impacto**
Define los entregables que justifican una tarifa premium: informe ejecutivo (máximo 20 páginas con los 10 riesgos más críticos, su impacto cuantificado y las recomendaciones priorizadas), mapa de calor de riesgos visual para la presentación al consejo, plan de acción detallado con responsables y plazos, y dashboard de seguimiento para los 6 meses post-auditoría. Define cómo usar IA para generar estos entregables de forma eficiente sin perder la calidad.

**5. Modelo de negocio y pricing del servicio**
Define la estructura de precios: precio del proyecto de auditoría estándar (2-4 semanas de trabajo) para empresas de distintos tamaños, servicios adicionales que pueden añadirse (formación al equipo directivo en gestión de riesgos, implementación de herramientas de risk management, seguimiento trimestral del plan de acción), y modelo de retainer para clientes que quieren una revisión periódica de sus riesgos. Explica cómo anclar el precio al valor generado (reducción de pérdidas potenciales, tranquilidad para la dirección, preparación para financiación o due diligence).

**6. Captación de clientes y construcción de reputación como auditor**
Define la estrategia de desarrollo de negocio: cómo identificar las empresas que más necesitan una auditoría de riesgos en este momento (las que han tenido un incidente reciente, las que están creciendo rápidamente sin haber reforzado sus controles, las que se preparan para una ronda de inversión), cómo llegar a ellas a través de tu red de contactos y de asesores que las acompañan (abogados, asesores financieros, inversores), y cómo construir una reputación como experto en riesgos a través de contenido especializado y casos de éxito documentados.

Incluye una propuesta comercial tipo para el primer contacto con un cliente potencial y un plan de las primeras 4 semanas de un proyecto de auditoría.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Servicio de auditoría de riesgos empresariales para freelancers con metodología y IA',
                'vote_score'        => 30,
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
