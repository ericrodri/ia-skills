<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills521Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de servicios legaltech con IA para captar clientes digitales',
                'description'      => 'Diseña estrategias de marketing digital para plataformas legaltech y despachos de abogados que usan IA, captando clientes online con contenido de valor y posicionamiento de autoridad.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing digital para el sector legal y legaltech, con experiencia en posicionamiento de autoridad, captación de leads cualificados y comunicación de servicios jurídicos online.

contexto: El sector legal es históricamente conservador en comunicación, pero las plataformas legaltech y los despachos digitales están cambiando las reglas: los usuarios buscan ayuda jurídica online antes de llamar a un abogado, las soluciones automatizadas de documentos legales reducen costes, y la IA permite ofrecer orientación jurídica preliminar de forma escalable. El marketing de estos servicios requiere equilibrar autoridad experta, accesibilidad y confianza.

tarea: Diseña la estrategia de marketing digital completa para [NOMBRE DE PLATAFORMA LEGALTECH O DESPACHO DIGITAL] especializada en [ÁREA JURÍDICA: derecho laboral / derecho de familia / protección de datos / derecho inmobiliario / derecho mercantil para pymes].

ÁREA 1 — Posicionamiento y propuesta de valor
- Define el posicionamiento diferencial frente a: despachos tradicionales, otras plataformas legaltech (Legálitas, Rocket Lawyer) y el recurso a buscar en Google. ¿Por qué elegirte a ti?
- Crea el mensaje central de la marca en 3 formatos: tagline de 5 palabras, propuesta de valor de 25 palabras, y descripción completa de 100 palabras para la home.
- Describe el tono de comunicación para el sector legal: serio pero accesible, experto pero humano, con ejemplos de qué decir y qué evitar en los textos.

ÁREA 2 — Estrategia de contenido y SEO jurídico
- Diseña un plan de contenido de 6 meses orientado a captar usuarios en búsqueda de información jurídica: artículos de blog explicando derechos en lenguaje claro, guías descargables de trámites frecuentes, vídeos de 60 segundos respondiendo dudas legales comunes.
- Propón una estrategia de SEO para palabras clave jurídicas de alta intención: "qué hacer si mi casero no me devuelve la fianza", "cómo reclamar a mi empresa horas extra", "cómo hacer un contrato de alquiler". ¿Cómo competir con los grandes despachos en estas búsquedas?
- Describe cómo usar IA para escalar la producción de contenido jurídico: qué se puede automatizar (estructura, borradores, actualizaciones normativas) y qué debe revisar siempre un abogado.

ÁREA 3 — Captación de leads y conversión
- Diseña el embudo de conversión: desde que el usuario busca información jurídica hasta que contrata el servicio o suscripción. ¿Cuáles son los pasos y qué fricción hay que eliminar en cada uno?
- Propón 3 lead magnets jurídicos de alto valor: "Test: ¿Tu contrato de trabajo es legal?", "Guía completa para reclamar una deuda", "Checklist de protección de datos para autónomos".
- Diseña la secuencia de email marketing de bienvenida: 5 emails en 10 días que demuestren el valor del servicio, resuelvan dudas frecuentes y conviertan al lead en cliente.

ÁREA 4 — Confianza y autoridad en el sector legal
- Diseña la estrategia de social proof específica para el sector legal: cómo presentar casos de éxito respetando la confidencialidad, cómo mostrar valoraciones de clientes, y cómo usar certificaciones y membresías profesionales como elementos de confianza.
- Propón una estrategia de relaciones públicas digitales: en qué medios posicionarse como experto (podcasts de finanzas personales, medios de consumidores, secciones jurídicas de periódicos digitales), y cómo preparar a los abogados del equipo para aparecer en medios.
- Describe cómo comunicar el uso de IA en los servicios legales de forma que genere confianza y no miedo en el cliente: ¿qué hace la IA, qué revisa siempre el abogado?

entregable: Un plan de marketing de 12 meses con acciones mensuales, KPIs y presupuesto estimado por canal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear estrategias de marketing digital para plataformas legaltech y despachos jurídicos digitales',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataforma legaltech con automatización de documentos jurídicos e IA',
                'description'      => 'Diseña la arquitectura técnica de una plataforma legaltech que automatiza la generación de documentos legales, contratos y formularios jurídicos usando IA y flujos de trabajo guiados.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en el desarrollo de plataformas legaltech, con conocimiento en automatización de documentos jurídicos, integración de IA en flujos de trabajo legales, y cumplimiento normativo en el tratamiento de datos legales sensibles.

contexto: La automatización de documentos jurídicos es uno de los mercados legaltech de mayor crecimiento: contratos de arrendamiento, contratos de trabajo, estatutos de sociedades, cartas de reclamación, y formularios de divorcio pueden generarse en minutos con la información del usuario y revisión de un abogado. Las plataformas que combinan automatización de documentos con IA conversacional y revisión humana están capturando mercado rápidamente.

tarea: Diseña la arquitectura técnica completa de [NOMBRE DE PLATAFORMA LEGALTECH] orientada a [TIPO DE DOCUMENTOS: contratos mercantiles para pymes / documentos de derecho de familia / contratos laborales / documentos de protección de datos GDPR].

MÓDULO 1 — Motor de generación de documentos jurídicos
- Diseña el sistema de plantillas de documentos jurídicos: cómo modelar un contrato con cláusulas condicionales (si el alquiler es de temporada, añadir cláusula X; si hay fianza, incluir sección Y), campos variables, y lógica de negocio jurídica.
- Especifica el lenguaje de definición de plantillas: ¿sistema propio, lenguaje basado en JSON/YAML, o integración con herramientas como Docassemble o HotDocs?
- Describe el pipeline de generación: recogida de datos del usuario vía formulario o conversación, validación de datos, aplicación de lógica condicional, y generación del documento en PDF, Word y formato editable online.

MÓDULO 2 — Chatbot jurídico de recogida de información
- Diseña el flujo conversacional del asistente jurídico que guía al usuario a través de las preguntas necesarias para generar el documento: cómo manejar respuestas ambiguas, cómo explicar términos jurídicos en lenguaje simple, y cómo detectar casos que requieren intervención humana.
- Especifica el prompt de sistema del LLM que actuará como asistente jurídico: tono, restricciones (nunca dar asesoramiento legal definitivo), y forma de escalar a un abogado cuando la situación lo requiera.
- Propón cómo el chatbot recuerda el contexto dentro de una sesión (estado del formulario, respuestas previas) y entre sesiones (para usuarios registrados que retoman el proceso).

MÓDULO 3 — Flujo de revisión humana y firma electrónica
- Diseña el sistema de cola de revisión de documentos generados por IA: cómo un abogado de la plataforma revisa el documento, añade comentarios, solicita aclaraciones al cliente, y aprueba para firma.
- Especifica la integración con plataformas de firma electrónica: DocuSign, Signaturit, o Adobe Sign. ¿Qué datos se envían, cómo se gestiona el estado del proceso de firma, y cómo se almacena el documento firmado?
- Describe el sistema de notificaciones al cliente: alertas de progreso, recordatorios de firma pendiente, y confirmación de documento firmado con copia certificada.

MÓDULO 4 — Seguridad, privacidad y cumplimiento GDPR
- Diseña la arquitectura de seguridad para datos jurídicos altamente sensibles: cifrado en reposo y en tránsito, control de acceso granular (cliente solo ve sus documentos, abogado solo ve los asignados), y auditoría de accesos.
- Describe el modelo de consentimiento GDPR para el tratamiento de datos jurídicos: qué consentimientos recoger, cómo documentarlos, y cómo gestionar solicitudes de eliminación de datos de usuarios que ya tienen documentos firmados.
- Propón la arquitectura de retención de documentos: cuánto tiempo conservar cada tipo de documento, cómo gestionar la eliminación automática al expirar el período de retención, y cómo garantizar la disponibilidad legal de documentos históricos.

MÓDULO 5 — Stack tecnológico y escalabilidad
- Recomienda el stack para: backend (API de generación de documentos, queue de revisión), frontend (formulario guiado, editor de documentos online), almacenamiento de documentos (cifrado, versionado), y LLM para el asistente conversacional.
- Estima los recursos de infraestructura para los primeros 5.000 documentos mensuales y propón cómo escalar a 50.000.
- Diseña la estrategia de testing específica para documentos jurídicos: validación legal de plantillas, tests de regresión cuando cambia la normativa, y revisión periódica por abogados.

entregable: Un documento de arquitectura técnica con diagramas describiendo el sistema de plantillas, el flujo de generación y revisión, y el modelo de seguridad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar plataformas legaltech con automatización de documentos jurídicos y asistentes conversacionales de IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Legal design con IA: hacer el derecho comprensible y accesible',
                'description'      => 'Aplica los principios del legal design para transformar documentos jurídicos complejos en experiencias visuales y comunicativas que cualquier ciudadano pueda entender, usando IA como herramienta de apoyo.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en legal design con experiencia en diseño centrado en el usuario aplicado al sector jurídico, visualización de información legal, y uso de IA para mejorar la accesibilidad de documentos y procesos legales.

contexto: El legal design es la disciplina que aplica el diseño centrado en el usuario al derecho para hacer los documentos, procesos y sistemas jurídicos más comprensibles y accesibles. El 80% de las personas no entiende los contratos que firma, el 60% de los usuarios abandona un proceso legal por su complejidad, y los documentos jurídicos están escritos para otros abogados, no para los ciudadanos. La IA puede acelerar enormemente la aplicación del legal design.

objetivo: Aplica el legal design con apoyo de IA a [TIPO DE DOCUMENTO O PROCESO: contrato de arrendamiento / política de privacidad / contrato de trabajo / términos y condiciones de e-commerce / proceso de reclamación al banco].

FASE 1 — Diagnóstico y análisis del documento actual
- Analiza el documento o proceso legal en cuestión desde la perspectiva del usuario no experto: qué partes son incomprensibles por vocabulario técnico, qué partes están ocultas en letra pequeña que el usuario debería conocer, y qué partes son relevantes para el usuario pero están enterradas en párrafos largos.
- Identifica los 5 puntos de fricción críticos: dónde el usuario se pierde, se asusta, o toma decisiones desinformadas.
- Diseña un mapa de journey del usuario firmando este documento: desde que lo recibe hasta que lo firma, con sus pensamientos, emociones y dudas en cada paso.

FASE 2 — Rediseño del lenguaje jurídico
- Reescribe las 3 cláusulas más complejas del documento en lenguaje claro sin perder la validez jurídica: usa frases cortas, voz activa, vocabulario cotidiano, y ejemplos concretos para ilustrar situaciones abstractas.
- Diseña un resumen ejecutivo del documento de no más de 200 palabras que responda: ¿qué estoy firmando?, ¿cuáles son mis obligaciones?, ¿cuáles son mis derechos?, ¿qué pasa si algo va mal?
- Crea un glosario visual de términos jurídicos del documento: cada término técnico con su explicación en lenguaje cotidiano, ilustrada con un ejemplo de la vida real.

FASE 3 — Diseño visual y estructura
- Propón una estructura visual del documento rediseñado: uso de encabezados claros, secciones numeradas con títulos descriptivos, destacados visuales para derechos del usuario, y señales de alerta para obligaciones importantes o cláusulas desfavorables.
- Diseña el sistema de iconografía para el documento: qué iconos usar para categorías de cláusulas (dinero, plazos, cancelación, privacidad, disputas) y cómo representar niveles de importancia (qué debo saber sí o sí vs. qué es información adicional).
- Propón cómo usar infografías para representar procesos jurídicos secuenciales: el proceso de reclamación, los plazos legales, o el flujo de resolución de disputas.

FASE 4 — Versión interactiva y digital
- Diseña la versión digital e interactiva del documento: cómo presentarlo en pantalla en lugar de como PDF, con tooltips explicativos al pasar el ratón sobre términos técnicos, secciones expandibles para más detalle, y preguntas frecuentes contextuales.
- Propón un asistente conversacional de IA que guíe al usuario a través del documento antes de firmar: explicando cláusulas a demanda, respondiendo preguntas sobre las consecuencias de distintas situaciones, y alertando sobre cláusulas que el usuario debería negociar.
- Describe cómo medir si el rediseño funciona: test de comprensión con usuarios reales antes y después, tiempo de lectura hasta la firma, tasa de preguntas post-firma reducida.

FASE 5 — Aplicación de IA al legal design
- Describe el flujo de trabajo con IA para rediseñar documentos jurídicos a escala: cómo usar LLMs para generar la primera versión del lenguaje claro, qué debe revisar siempre un abogado, y cómo iterar con feedback de usuarios reales.
- Propón cómo crear una biblioteca de componentes de legal design: plantillas de documentos ya rediseñados, iconografía estándar, y guías de estilo para diferentes tipos de documentos jurídicos.

entregable: La versión rediseñada del documento o proceso asignado, con justificación de cada decisión de diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar legal design con IA para hacer documentos y procesos jurídicos comprensibles y accesibles',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones legaltech a despachos y empresas con IA',
                'description'      => 'Diseña estrategias y argumentarios de venta para comercializar plataformas legaltech, software de automatización jurídica y servicios de IA legal a despachos de abogados y departamentos jurídicos de empresas.',
                'prompt_content'   => <<<'EOT'
Actúa como un comercial B2B especializado en la venta de soluciones tecnológicas legaltech y herramientas de automatización jurídica basadas en IA para despachos de abogados, departamentos legales de grandes empresas y pymes con necesidades jurídicas frecuentes.

contexto: Los despachos de abogados y los departamentos legales internos son compradores sofisticados pero lentos: tienen altas exigencias de seguridad y confidencialidad, procesos de decisión largos con múltiples validadores (socio director, IT, compliance), y una cultura profesional que históricamente ha desconfiado de la tecnología que podría "sustituir" al abogado. La clave es posicionar la IA como multiplicadora del trabajo del abogado, no como su reemplazante.

tarea: Diseña la estrategia de ventas B2B para [NOMBRE DE SOLUCIÓN LEGALTECH] orientada a [TIPO DE CLIENTE: despacho de abogados de 10-50 personas / departamento legal de empresa mediana / pyme con necesidades jurídicas recurrentes / plataforma de justicia online].

BLOQUE 1 — Perfil de cliente ideal y mapa de stakeholders
- Define el perfil de cliente ideal: tamaño del despacho o departamento, áreas de práctica jurídica más relevantes para el producto, nivel de digitalización actual (¿usan software de gestión?, ¿tienen herramientas de e-signature?), y perfil del decisor principal.
- Mapea los stakeholders del proceso de compra en un despacho: el socio director (foco en rentabilidad y productividad), el abogado senior (foco en calidad y eficiencia), el responsable IT si existe (foco en seguridad y integración), y el responsable de administración (foco en coste y facturación).
- Diseña un mensaje personalizado para cada stakeholder que hable su lenguaje: cuánto tiempo se ahorra por semana, cuánto se reduce el riesgo de error en documentos, cuántos euros representa la mejora de productividad al año.

BLOQUE 2 — Argumentario de venta y demostración de valor
- Crea los 5 argumentos de valor principales de la solución legaltech, con datos del sector: reducción del tiempo de redacción de documentos estándar en X%, disminución de errores en contratos rutinarios, mejora de la experiencia del cliente final, y diferenciación competitiva frente a despachos que no usan IA.
- Diseña la demostración ideal del producto para un despacho de abogados: qué mostrar en los primeros 5 minutos (el problema resuelto de forma impactante), qué personalizar para el área de práctica del cliente, y cómo involucrar al abogado interlocutor en la demo con un caso real suyo.
- Diseña respuestas a las objeciones típicas del sector legal: "la IA comete errores jurídicos", "tenemos miedo por la confidencialidad de los datos de clientes", "nuestros abogados no adoptarán nueva tecnología", "ya tenemos suficiente personal", y "el precio no encaja con nuestra estructura de costes".

BLOQUE 3 — Estructura de la propuesta comercial
- Diseña la propuesta comercial tipo para un despacho de abogados: diagnóstico del tiempo dedicado a tareas automatizables, cálculo del coste actual vs. coste con la solución, ROI proyectado a 12 meses, plan de implementación y formación, y SLA de soporte y seguridad.
- Propón 3 modelos de pricing para el sector legal: por usuario/mes, por volumen de documentos generados, o por ahorro de horas con tarifa compartida.
- Describe cómo manejar la negociación con socios directores de despacho: quiénes tienen autoridad final, cuáles son sus principales palancas de decisión, y cómo acortar el ciclo de venta sin presionar.

BLOQUE 4 — Estrategia de captación y prospección
- Define los canales de prospección para el sector legal: asociaciones de abogados, conferencias jurídicas (Congreso Nacional de Abogados), publicaciones del sector, y LinkedIn de socios directores y responsables de innovación en despachos.
- Diseña una secuencia de outreach de 6 pasos para contactar a un socio director que no te conoce: contenido de valor sobre IA en el sector legal, estudio de caso de un despacho similar, invitación a una demo sin compromiso, y seguimiento con resultado del piloto.
- Propón un programa de partners: qué asociaciones de abogados, consultoras de transformación digital o proveedores de software de gestión de despachos pueden ser canales de distribución.

entregable: Un playbook de ventas para el sector legaltech con scripts de llamada, plantillas de email, y guía de demostración.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Vender soluciones legaltech y automatización jurídica con IA a despachos de abogados y departamentos legales',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product Manager de plataforma legaltech: acceso a la justicia digital',
                'description'      => 'Define la visión, roadmap y métricas de producto para una plataforma legaltech orientada a democratizar el acceso a la justicia mediante automatización jurídica e IA conversacional.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en plataformas legaltech, diseño de servicios jurídicos digitales, y en la aplicación de IA para democratizar el acceso a la justicia.

contexto: El acceso a la justicia es uno de los grandes problemas sin resolver de las democracias modernas: el 70% de los conflictos legales de ciudadanos y pymes no llega nunca a un abogado por coste, desconocimiento o complejidad percibida. Las plataformas legaltech que combinan automatización de documentos, IA conversacional y orientación jurídica accesible tienen el potencial de transformar este acceso, pero deben equilibrar la calidad jurídica con la escalabilidad digital.

tarea: Actúa como PM de [NOMBRE DE PLATAFORMA LEGALTECH] y desarrolla los siguientes entregables de producto:

ENTREGABLE 1 — Visión de producto y problema a resolver
- Define la visión de producto a 3 años: a quién sirves (ciudadanos que no pueden permitirse un abogado, autónomos sin asesoría jurídica, pymes que necesitan contratos frecuentes), qué problema específico resuelves mejor que nadie, y cómo sabes que lo estás consiguiendo.
- Describe el insight de usuario central: cuál es el momento exacto en que una persona necesita ayuda jurídica, qué busca en ese momento, qué opciones considera y por qué la mayoría de esas opciones le decepcionan hoy.
- Analiza el panorama competitivo legaltech en España y Europa: Legalitas, Rocket Lawyer, LegalZoom, Lawgeex. ¿Dónde está el espacio en blanco que justifica una nueva plataforma?

ENTREGABLE 2 — Investigación de usuario y jobs to be done
- Diseña un plan de investigación de usuario para el sector legaltech: qué preguntar en entrevistas a usuarios que han tenido un conflicto laboral, inmobiliario o mercantil, cómo mapear el journey de búsqueda de ayuda jurídica, y qué señales indican que el usuario percibió el valor de la plataforma.
- Aplica el framework Jobs to be Done al usuario de una plataforma legaltech: ¿cuál es el trabajo funcional (resolver mi problema legal), emocional (sentirme protegido y tranquilo) y social (no parecer ingenuo ante un contrato)?
- Identifica los momentos de mayor frustración en el journey jurídico actual que la plataforma debe resolver prioritariamente.

ENTREGABLE 3 — Roadmap de producto por fases
- Diseña el roadmap de los próximos 4 trimestres: Q1 (MVP con 5 documentos más demandados y chatbot de orientación), Q2 (personalización con historial del usuario y área jurídica), Q3 (conexión con abogados reales para casos complejos), Q4 (B2B para pymes con contratos recurrentes y dashboard de gestión legal).
- Para cada trimestre, define: hipótesis que se valida, métrica de éxito, y criterio de salida para pasar a la siguiente fase.
- Describe las decisiones de build vs. buy más relevantes del roadmap: ¿construir el motor de generación de documentos o licenciar una solución existente?, ¿desarrollar firma electrónica propia o integrar con Signaturit?

ENTREGABLE 4 — Métricas de producto para legaltech
- Define la North Star Metric de la plataforma: ¿número de conflictos legales resueltos por mes?, ¿tasa de usuarios que completaron un documento y lo firmaron?, ¿porcentaje de usuarios que volvieron para un segundo trámite?
- Diseña el árbol de métricas: adquisición (coste de adquisición de usuario, tráfico orgánico de búsquedas jurídicas), activación (tasa de completación del primer documento), retención (recurrencia en el año), y monetización (conversión a plan de pago, LTV).
- Propón alertas de producto que requieren acción inmediata del PM: caída en tasa de completación de documentos, aumento de abandonos en el chatbot, o incremento de errores jurídicos reportados por usuarios.

ENTREGABLE 5 — Consideraciones éticas y regulatorias del producto
- Describe las limitaciones legales de una plataforma legaltech en España: qué puede hacer la IA (generar documentos, orientar sobre opciones) y qué solo puede hacer un abogado (asesoramiento personalizado, representación legal).
- Diseña el sistema de disclaimers y derivación a abogado: cuándo la plataforma debe decir "este caso requiere un abogado" y cómo hacerlo sin perder al usuario.
- Propón el modelo de responsabilidad: si un documento generado por la plataforma contiene un error que perjudica al usuario, ¿qué cubre la plataforma, qué cubre el seguro de responsabilidad civil profesional, y cómo se comunica esto al usuario?

entregable: Un documento de visión de producto de 10 páginas, el roadmap del año en formato tabla, y el árbol de métricas en formato visual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir visión, roadmap y métricas de producto para plataformas legaltech de acceso a la justicia',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH y cumplimiento legal en empresas: automatización de procesos con IA',
                'description'      => 'Usa IA para automatizar y mejorar los procesos de RRHH con implicación legal: contratos de trabajo, políticas internas, compliance laboral, y gestión de incidencias disciplinarias.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos con especialización en derecho laboral español y en la implementación de sistemas de automatización de procesos de RRHH con implicación jurídica.

contexto: Los departamentos de RRHH gestionan documentación con alto contenido legal: contratos de trabajo, modificaciones contractuales, cartas de amonestación, acuerdos de confidencialidad, políticas de empresa, procedimientos disciplinarios, y documentación de desvinculación. La IA puede automatizar la generación y revisión de estos documentos, reducir el riesgo de errores jurídicos, y liberar tiempo del equipo de RRHH para tareas estratégicas.

tarea: Diseña el sistema de automatización jurídica de RRHH para [NOMBRE DE EMPRESA] de [TAMAÑO: 50-200 empleados / 200-1000 empleados], con los siguientes componentes:

COMPONENTE 1 — Automatización de contratos laborales
- Diseña el flujo de generación de contratos de trabajo con IA: desde que se aprueba una nueva incorporación hasta que el contrato está listo para firma, con los datos que el sistema necesita (tipo de contrato, categoría profesional, salario, jornada, beneficios específicos).
- Crea plantillas de contratos para los tipos más frecuentes: contrato indefinido a tiempo completo, contrato por obra o servicio, contrato de prácticas, contrato a tiempo parcial, y contrato de alta dirección.
- Propón cómo el sistema detecta automáticamente si un nuevo contrato requiere revisión por el asesor laboral externo: casos de categorías no estándar, cláusulas de no competencia, retribuciones variables complejas, o contratación de perfiles directivos.

COMPONENTE 2 — Gestión de modificaciones contractuales y documentación laboral
- Diseña el proceso de generación automática de comunicaciones de modificación sustancial de condiciones de trabajo (artículo 41 ET): qué datos requiere el sistema, qué plazos legales debe respetar, y qué documentación debe archivarse.
- Crea el sistema de gestión de licencias, excedencias y reducciones de jornada: generación del documento de solicitud, seguimiento del plazo de respuesta legal, y generación del acuerdo de modificación temporal.
- Propón cómo automatizar la documentación de la desvinculación: carta de despido (con validación de que incluye los elementos legalmente requeridos), liquidación y finiquito, y comunicación al SEPE.

COMPONENTE 3 — Compliance laboral y prevención de riesgos legales
- Diseña un sistema de alertas de compliance laboral con IA: detección automática de contratos temporales próximos a convertirse en indefinidos, trabajadores a punto de alcanzar los límites de horas extra, y empleados con periodos de prueba vencidos.
- Crea un checklist de auditoría interna de cumplimiento laboral que el sistema ejecuta mensualmente: revisión de registros de jornada, verificación de categorías profesionales según convenio, y análisis de brechas salariales por género.
- Propón cómo usar IA para mantenerse actualizado sobre cambios normativos en derecho laboral: monitorización del BOE, alertas sobre sentencias relevantes del Tribunal Supremo, y actualización automática de plantillas documentales.

COMPONENTE 4 — Gestión de incidencias disciplinarias
- Diseña el protocolo de gestión de incidencias disciplinarias asistido por IA: desde la detección de la incidencia hasta la resolución, con generación automática de los documentos requeridos (apertura de expediente, audiencia previa, carta de amonestación o sanción).
- Crea un sistema de clasificación de faltas (leves, graves, muy graves) basado en el convenio colectivo aplicable, con recomendación automática de la sanción proporcional y su rango de aplicación.
- Propón cómo documentar el historial disciplinario del empleado de forma que sea jurídicamente sólido en caso de despido por causas disciplinarias posterior.

COMPONENTE 5 — Protección de datos en RRHH y cumplimiento GDPR
- Diseña el sistema de gestión del ciclo de vida de los datos personales de los empleados: recogida con base jurídica apropiada, períodos de retención por tipo de dato, y eliminación segura al término de la relación laboral y el período de conservación obligatorio.
- Propón cómo gestionar solicitudes de acceso, rectificación y eliminación de datos de ex-empleados, con un flujo que respete los plazos GDPR y las obligaciones de conservación laboral.

entregable: Un manual de RRHH legal automatizado con los procesos, plantillas, y workflows listos para implementar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar procesos de RRHH con implicación legal usando IA para reducir riesgo y mejorar eficiencia',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas y legaltech: automatización del análisis de contratos financieros con IA',
                'description'      => 'Usa IA para analizar, revisar y negociar contratos financieros: préstamos, derivados, contratos de inversión, acuerdos de financiación, y documentación regulatoria del sector financiero.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista jurídico-financiero especializado en el análisis de contratos del sector financiero, con expertise en revisión de documentación de préstamos, productos derivados, contratos de financiación estructurada, y cumplimiento regulatorio en entidades financieras.

contexto: El sector financiero genera enormes volúmenes de documentación contractual: contratos de préstamo, acuerdos de crédito sindicado, contratos marco ISDA para derivados, contratos de gestión de activos, y documentación regulatoria para cumplimiento con MiFID II, EMIR y Basel III. La revisión manual de estos documentos es lenta, costosa y propensa a errores. La IA puede acelerar la revisión, identificar cláusulas de riesgo y extraer datos clave de cientos de contratos en minutos.

tarea: Diseña el sistema de análisis automatizado de contratos financieros con IA para [TIPO DE ENTIDAD: banco mediano / fondo de inversión / empresa de factoring / fintech de préstamos].

MÓDULO 1 — Extracción automática de datos contractuales
- Diseña el pipeline de extracción de información de contratos financieros con IA: qué datos extraer de un contrato de préstamo (partes, importe, tipo de interés fijo/variable, plazo, garantías, covenants, eventos de incumplimiento), y cómo estructurarlos en una base de datos consultable.
- Propón el sistema de clasificación automática de contratos: por tipo de producto, por moneda, por jurisdicción, por estado (vigente, vencido, en litigio), y por nivel de riesgo estimado.
- Describe cómo el sistema maneja la variabilidad de formatos: contratos escaneados en PDF, documentos Word sin estructura uniforme, contratos en múltiples idiomas.

MÓDULO 2 — Identificación de cláusulas de riesgo
- Define las categorías de cláusulas de riesgo en contratos financieros que el sistema debe identificar: cláusulas de aceleración automática, cross-default, change of control, covenants financieros (ratio de apalancamiento, cobertura de intereses), y cláusulas de arbitraje vs. jurisdicción judicial.
- Diseña el sistema de alertas de riesgo contractual: cuándo escalar a revisión humana, cómo presentar el riesgo identificado (texto de la cláusula, riesgo implicado, cláusula alternativa recomendada), y cómo priorizar la revisión de un portfolio de contratos.
- Propón cómo el sistema aprende de las revisiones humanas para mejorar la identificación de riesgo: feedback loop con los abogados revisores, calibración periódica del modelo, y registro de falsos positivos y negativos.

MÓDULO 3 — Revisión de covenants financieros y monitoring
- Diseña el sistema de monitorización continua de covenants financieros: cómo conectar los datos financieros de las empresas prestatarias con los covenants del contrato, calcular automáticamente si se cumplen los ratios requeridos, y alertar ante riesgo de breach en los próximos 30-90 días.
- Propón el dashboard de covenant monitoring para una cartera de préstamos: vista de semáforo por contrato, tendencia histórica de los ratios clave, y proyección basada en el plan de negocio del prestatario.
- Describe cómo documentar automáticamente el historial de cumplimiento de covenants para la auditoría regulatoria y la gestión de waiver requests.

MÓDULO 4 — Cumplimiento regulatorio y documentación
- Diseña el sistema de verificación de cumplimiento regulatorio en nuevos contratos: checklist de requisitos MiFID II para contratos de inversión, requisitos EMIR para contratos de derivados, y requisitos de la Circular del Banco de España para contratos de préstamo hipotecario.
- Propón cómo automatizar la generación de la documentación regulatoria: ficha de información normalizada (FEIN), propuesta de préstamo hipotecario, y advertencias obligatorias para productos de riesgo.
- Describe el sistema de auditoría interna de contratos: muestreo automatizado de contratos para verificar que cumplen con los estándares actuales, y detección de contratos con cláusulas que la regulación posterior ha invalidado.

entregable: Un informe de viabilidad del sistema de análisis de contratos con IA, incluyendo estimación de tiempo de implementación, ROI esperado y riesgos técnicos y regulatorios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatizar el análisis, revisión y monitoring de contratos financieros con IA para entidades del sector financiero',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Abogado con IA: automatización de documentos jurídicos y investigación legal',
                'description'      => 'Domina el uso de IA para automatizar la redacción de documentos jurídicos, investigar jurisprudencia, preparar argumentarios y mejorar la productividad del despacho sin comprometer la calidad legal.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado senior con experiencia práctica en el uso de inteligencia artificial para mejorar la productividad jurídica, desde la investigación de jurisprudencia hasta la automatización de documentos, pasando por la preparación de argumentarios y la comunicación con clientes.

advertencia: La IA es una herramienta de apoyo al trabajo jurídico. Toda la documentación generada con IA debe ser revisada y validada por un abogado colegiado antes de su uso profesional. La IA no sustituye el criterio jurídico del abogado.

contexto: El abogado del siglo XXI que no usa IA está en desventaja competitiva. Las tareas que antes requerían horas (investigar jurisprudencia, redactar escritos de primera instancia, preparar contratos estándar, resumir documentación de un expediente voluminoso) ahora pueden completarse en minutos con las herramientas adecuadas. El reto es hacerlo bien: sin alucinaciones jurídicas, sin cláusulas inventadas, y con la supervisión necesaria.

objetivo: Aprende a usar IA de forma productiva y segura en [ÁREA DE PRÁCTICA JURÍDICA: derecho civil / derecho laboral / derecho penal / derecho mercantil / derecho administrativo].

ÁREA 1 — Investigación jurídica con IA
- Diseña el flujo de investigación jurídica asistida por IA: cómo usar el modelo para identificar las normas aplicables a un caso, encontrar jurisprudencia relevante, y sintetizar la doctrina de los tribunales sobre una cuestión concreta.
- Describe las limitaciones críticas que debes conocer: los LLMs tienen fecha de corte de conocimiento y pueden citar sentencias incorrectamente. Diseña un protocolo de verificación de toda jurisprudencia citada por la IA antes de incluirla en un escrito.
- Propón cómo combinar IA con bases de datos jurídicas verificadas (CENDOJ, Westlaw, La Ley) para obtener lo mejor de ambas: velocidad de síntesis de la IA y precisión de las bases de datos comerciales.

ÁREA 2 — Redacción de documentos jurídicos con IA
- Diseña el flujo de redacción de una demanda civil de primera instancia: cómo dar a la IA el contexto del caso (hechos, partes, pretensiones, documentación disponible), qué pedir exactamente, y cómo revisar el borrador generado para asegurar la corrección jurídica.
- Crea una biblioteca de instrucciones de IA para los documentos más frecuentes del despacho: demanda, contestación a la demanda, recurso de apelación, contrato de prestación de servicios, carta de reclamación extrajudicial, y escrito de acusación particular.
- Propón el protocolo de revisión de documentos generados por IA: qué verificar siempre (fundamentos jurídicos citados, coherencia de las pretensiones, adecuación al órgano judicial destinatario), y cómo documentar la revisión para el expediente del cliente.

ÁREA 3 — Análisis de contratos y due diligence con IA
- Diseña el flujo de análisis de contratos con IA: cómo subir el contrato, qué preguntas hacer al modelo (identifica cláusulas abusivas, señala las condiciones de resolución, extrae las obligaciones principales de cada parte), y cómo presentar el análisis al cliente.
- Propón cómo usar IA para agilizar la due diligence legal en operaciones mercantiles: análisis de estatutos sociales, contratos vigentes, expedientes laborales, y documentación registral de la sociedad target.
- Describe cómo crear plantillas de análisis de contratos en IA que el equipo del despacho pueda usar de forma estandarizada.

ÁREA 4 — Comunicación con clientes y gestión del despacho
- Diseña cómo usar IA para mejorar la comunicación con el cliente: redacción de informes jurídicos en lenguaje accesible, respuesta a preguntas frecuentes de forma consistente, y resúmenes de estado del caso para actualizaciones periódicas.
- Propón cómo automatizar la generación de presupuestos y cartas de encargo adaptadas al tipo de asunto, con las menciones legales obligatorias y las condiciones generales del despacho.
- Describe el sistema de gestión de conocimiento del despacho con IA: cómo documentar el trabajo realizado en cada asunto para que el equipo pueda aprender de los casos anteriores y la IA pueda usar ese conocimiento en futuros asuntos similares.

entregable: Un manual de uso de IA para abogados, con instrucciones concretas para cada tipo de tarea y los protocolos de verificación correspondientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Usar IA de forma segura y productiva para automatizar investigación jurídica, redacción de documentos y gestión del despacho',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer Success en plataformas legaltech: guiar al usuario en procesos jurídicos digitales',
                'description'      => 'Diseña estrategias de customer success para plataformas legaltech, ayudando a los usuarios a completar procesos jurídicos digitales con éxito, reducir el abandono y generar confianza en el servicio.',
                'prompt_content'   => <<<'EOT'
Actúa como un Customer Success Manager especializado en plataformas legaltech y servicios jurídicos digitales, con experiencia en el acompañamiento de usuarios a través de procesos legales complejos en entornos digitales.

contexto: Las plataformas legaltech tienen un reto de customer success único: los usuarios llegan con alta ansiedad (tienen un problema legal que les preocupa), baja confianza en la tecnología para resolverlo (¿puede una plataforma digital resolver mi problema jurídico?), y expectativas de resultado inmediato que la realidad jurídica raramente cumple. El customer success en este sector no es solo evitar el churn sino guiar al usuario a través de un proceso que puede durar semanas o meses.

objetivo: Diseña el sistema completo de Customer Success para [NOMBRE DE PLATAFORMA LEGALTECH] especializada en [ÁREA JURÍDICA: reclamaciones laborales / trámites inmobiliarios / contratos para pymes / resolución de deudas].

MÓDULO 1 — Onboarding para un usuario con problema jurídico
- Diseña el onboarding para un nuevo usuario que llega con un problema legal concreto: cómo recoger el contexto de su situación de forma empática y eficiente, cómo establecer expectativas realistas sobre plazos y resultados, y cómo explicar el proceso jurídico que va a seguir en términos que entienda.
- Define el "momento aha" de la plataforma en el contexto legal: ¿es cuando el usuario ve que su caso tiene solución?, ¿cuando recibe el primer documento listo?, ¿cuando un abogado le confirma la viabilidad de su reclamación?
- Propón el flujo de onboarding de los primeros 24 horas: qué comunica la plataforma, qué acciones espera del usuario, y qué hace el equipo CS para asegurar que el usuario no abandona antes de dar el primer paso.

MÓDULO 2 — Gestión de la ansiedad y expectativas del usuario legal
- Diseña el sistema de comunicación proactiva durante el proceso jurídico: qué actualizaciones enviar, con qué frecuencia, cómo comunicar la espera sin que el usuario piense que su caso está olvidado.
- Crea plantillas de comunicación para los momentos más críticos del journey jurídico del usuario: "tu caso está siendo revisado por el abogado", "necesitamos este documento adicional", "hemos enviado la reclamación, ahora toca esperar la respuesta", "hemos recibido respuesta de la otra parte, esto es lo que significa para tu caso".
- Propón cómo gestionar el momento en que el usuario recibe una respuesta negativa o el caso no progresa como esperaba: cómo comunicarlo con empatía, qué alternativas ofrecer, y cómo retener al usuario para otros trámites futuros.

MÓDULO 3 — Detección y prevención del abandono en procesos jurídicos largos
- Define las señales de abandono específicas de plataformas legaltech: usuario que no completa la documentación requerida en 72 horas, usuario que deja de responder a comunicaciones del abogado asignado, usuario que hace múltiples consultas sin avanzar en el proceso.
- Diseña los playbooks de intervención por tipo de abandono: usuario bloqueado por documentación (ayuda proactiva para obtener los documentos), usuario con dudas sobre el proceso (sesión de explicación con el abogado), usuario desanimado por la duración (celebración de hitos intermedios alcanzados).
- Propón cómo usar IA para personalizar la comunicación de seguimiento según el perfil del usuario: nivel de ansiedad detectado, tipo de problema jurídico, y grado de familiaridad con procesos legales.

MÓDULO 4 — Éxito del cliente y testimonios
- Diseña el proceso de cierre del caso y documentación del éxito: cómo celebrar un resultado positivo con el usuario, solicitar su testimonio en el momento de máxima satisfacción, y convertir el caso en un referido activo.
- Propón cómo recoger el NPS en plataformas legaltech de forma que sea significativo: ¿cuándo preguntar (tras el cierre del caso, no durante el proceso), qué preguntar además del NPS (qué generó más confianza, qué mejorarías), y cómo usar el feedback para mejorar el servicio?
- Describe el programa de referidos adaptado al sector legal: cómo incentivar al usuario satisfecho a recomendar la plataforma a personas con problemas similares, respetando la sensibilidad del contexto jurídico.

MÓDULO 5 — Métricas de CS para plataformas legaltech
- Define los KPIs específicos: tasa de completación de procesos jurídicos iniciados, tiempo medio desde registro hasta primer documento listo, tasa de éxito en reclamaciones procesadas, NPS post-cierre, y tasa de recurrencia (usuarios que vuelven para un segundo trámite).
- Propón cómo diferenciar en las métricas entre abandonos por baja calidad de servicio (solucionables) y abandonos porque el caso no tenía solución jurídica viable (inevitables).

entregable: Un manual de Customer Success para plataformas legaltech, con playbooks, plantillas de comunicación y dashboard de métricas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Acompañar a usuarios de plataformas legaltech en procesos jurídicos digitales con estrategias de CS especializadas',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer legaltech: servicios de automatización jurídica para despachos y empresas',
                'description'      => 'Define tu propuesta de valor y modelo de negocio como freelancer especializado en automatización jurídica con IA: qué servicios ofrecer a despachos y empresas, cómo posicionarte y cómo conseguir tus primeros clientes del sector legal.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio especializado en el desarrollo de servicios freelance en el cruce entre inteligencia artificial y el sector legal, con conocimiento en legaltech, automatización de procesos jurídicos y modelos de negocio para consultores independientes.

contexto: Los despachos de abogados y los departamentos jurídicos de empresas necesitan implementar IA y automatización jurídica pero raramente tienen el perfil interno para hacerlo: los abogados entienden el derecho pero no la tecnología, y los técnicos entienden la IA pero no el derecho. Esto crea un nicho enorme para freelancers que hablen ambos idiomas y puedan implementar soluciones concretas sin que el cliente necesite contratar un equipo permanente.

objetivo: Diseña el negocio freelance de automatización jurídica con IA de [TU NOMBRE O MARCA], orientado a [TIPO DE CLIENTE: despachos de abogados de 5-30 personas / departamentos legales de empresas medianas / startups legaltech en fase inicial].

BLOQUE 1 — Definición del nicho y servicios concretos
- Define tu nicho específico dentro del cruce IA-legal: ¿automatización de contratos para despachos de derecho mercantil?, ¿chatbots de orientación jurídica para pymes?, ¿sistemas de análisis de documentación para due diligence?, ¿formación en IA para equipos jurídicos?
- Diseña 3-5 servicios concretos con entregables claros, tiempo de ejecución estimado y rango de precio:
  1. Auditoría de procesos jurídicos automatizables (análisis + informe de oportunidades)
  2. Implementación de sistema de generación de contratos estándar con IA
  3. Diseño y desarrollo de chatbot de orientación jurídica para la web del despacho
  4. Taller de formación en uso de IA para equipos de abogados (presencial o remoto)
  5. Consultoría mensual de adopción de IA jurídica (retainer)
- Para cada servicio, define: quién es el cliente exacto (socio director, responsable de innovación, director jurídico), qué resultado concreto y medible obtiene, y por qué te pagaría a ti en lugar de a una gran consultora.

BLOQUE 2 — Posicionamiento y autoridad en el sector
- Diseña tu propuesta de posicionamiento como el freelancer que une el mundo legal y el mundo de la IA: qué experiencia y credenciales tienes en cada lado, cómo comunicarlo de forma que el cliente confíe en ti desde el primer contacto.
- Propón tu estrategia de contenido para posicionarte como referente en legaltech freelance: artículos en LinkedIn sobre casos de uso concretos de IA en despachos, participación en eventos del sector legal, y colaboraciones con asociaciones de abogados.
- Describe cómo construir tu caso de uso inicial si no tienes clientes: proyecto pro bono con un despacho pequeño a cambio de testimonio y caso de éxito documentado, o implementación de tu propio sistema de automatización jurídica como demostración pública de capacidades.

BLOQUE 3 — Captación de primeros clientes del sector legal
- Diseña un plan de 60 días para conseguir tu primer cliente de pago en el sector legal: qué comunidades de abogados frecuentar (Linkedin de socios directores, grupos de la Abogacía Española, foros de gestión de despachos), qué contenido publicar, y cómo pasar de la conversación online al primer encargo.
- Crea tu oferta de diagnóstico inicial: una sesión de 90 minutos para identificar los 3 procesos jurídicos del despacho que más tiempo consumen y que son más automatizables, con un informe posterior de oportunidades. Precio: gratuita para los primeros 3 clientes, 300€ a partir del cuarto.
- Propón cómo presentarte en ferias de legal management y eventos de la Abogacía: qué llevar, qué decir en 60 segundos, y cómo hacer seguimiento efectivo sin ser invasivo.

BLOQUE 4 — Precio, contratos y modelo de trabajo
- Diseña tu estructura de tarifas: precio por proyecto para implementaciones puntuales (2.000-8.000€), precio mensual de retainer para consultoría continua (500-1.500€/mes), y precio por resultado para proyectos de ahorro de tiempo medible (porcentaje del ahorro generado en el primer año).
- Crea un contrato tipo para servicios de automatización jurídica: scope de trabajo, entregables, plazos, propiedad intelectual de los sistemas creados (¿se queda el cliente con todo el código y los prompts, o solo con el acceso?), garantía de funcionamiento, y cláusula de confidencialidad reforzada para datos jurídicos.
- Propón cómo gestionar la responsabilidad: si el sistema de generación de contratos produce un error que perjudica al cliente del despacho, ¿cuál es tu responsabilidad como implementador y cuál es la del abogado que usó el sistema sin revisarlo?

entregable: Tu pitch de 60 segundos listo para usar con un socio director de despacho, tu oferta de diagnóstico inicial descrita en una página, y tu plan de acción de los primeros 30 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar y lanzar servicios freelance de automatización jurídica con IA para despachos y departamentos legales',
                'vote_score'       => 26,
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
