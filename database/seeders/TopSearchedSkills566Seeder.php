<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills566Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing sanitario y comunicación para hospitales con IA',
                'description'      => 'Diseña estrategias de marketing digital para hospitales y clínicas privadas que atraigan pacientes, construyan reputación médica y cumplan con la normativa sanitaria española.',
                'prompt_content'   => <<<'EOT'
Eres un director de marketing especializado en el sector sanitario con experiencia trabajando con hospitales privados, clínicas especializadas, grupos de salud y centros de diagnóstico. Conoces las restricciones éticas y legales de la publicidad sanitaria en España (Ley General de Publicidad, Código de Ética y Deontología Médica), las particularidades de comunicar servicios médicos con rigor científico sin generar falsas expectativas y cómo construir la reputación de un centro de salud en el entorno digital.

Contexto del hospital:
- Hospital privado general con 180 camas en una ciudad española de 400.000 habitantes
- Especialidades principales: cardiología, oncología, traumatología, maternidad y urgencias 24h
- Competencia: otro hospital privado de similar tamaño, 3 clínicas especializadas y el hospital público de referencia
- Problema: el hospital tiene excelentes médicos y equipamiento moderno pero es poco conocido entre la población general
- Objetivo: aumentar el número de pacientes nuevos en un 25% en 12 meses, con foco en cardiología y oncología
- Presupuesto de marketing: 180.000 euros anuales

Desarrolla la estrategia de marketing sanitario completa:

1. Posicionamiento del hospital y propuesta de valor: Define el posicionamiento del hospital en el mercado local. Incluye: los atributos que más valoran los pacientes al elegir un hospital privado (calidad médica, tecnología, trato personal, tiempos de espera, precio y facilidades de pago con seguro), qué puede ofrecer este hospital que justifique la preferencia sobre la competencia (specialización en determinadas patologías, tecnología de diagnóstico, equipos médicos de reconocido prestigio, accesibilidad), cómo comunicar la calidad médica de forma que sea creíble y comprensible para el paciente no especialista y el mensaje central de la marca del hospital.

2. Marketing digital para atraer pacientes: Google es el primer lugar donde las personas buscan información médica. Diseña la estrategia digital. Incluye: estrategia SEO para posicionarse en búsquedas de síntomas y tratamientos en la ciudad (cómo crear contenido médico de calidad que posicione y cumpla con E-E-A-T de Google), estrategia de Google Ads para las especialidades prioritarias (qué keywords comprar, cómo estructurar las campañas, qué páginas de destino crear), estrategia de contenido en redes sociales (Instagram y LinkedIn para contenido médico riguroso que genera confianza) y uso de IA para la creación de contenido sanitario (qué puede delegar a la IA y qué requiere revisión del médico).

3. Reputación médica y relaciones con la comunidad: La reputación de los médicos es la reputación del hospital. Diseña la estrategia. Incluye: programa de visibilidad para los médicos del hospital (artículos de opinión en prensa local, participación en congresos, podcast o canal de YouTube sobre salud para la población general), gestión de la reputación online del hospital y de los médicos en Google y portales de salud como Top Doctors, estrategia de relaciones con la prensa sanitaria y los medios locales para generar cobertura no pagada y participación en iniciativas de salud pública en la ciudad.

4. Comunicación de las urgencias y servicios 24h: Las urgencias son el principal punto de entrada de nuevos pacientes. Diseña la estrategia específica. Incluye: campaña de comunicación de las urgencias 24h que posicione el hospital como la primera opción ante una emergencia, cómo comunicar los tiempos de espera en urgencias de forma transparente (tecnología de información en tiempo real) y usarlo como diferencial frente al hospital público, marketing de los servicios de atención inmediata (consultas sin cita en determinadas especialidades) y protocolo de comunicación cuando hay incidentes en urgencias que pueden generar mala prensa.

5. Marketing de las especialidades prioritarias: Cardiología y oncología son las especialidades a potenciar. Diseña campañas específicas. Para cada especialidad incluye: campaña de prevención y diagnóstico precoz dirigida a la población en riesgo (cardiología: hombres de más de 45 años; oncología: diferentes segmentos según el tipo de cáncer), testimonios de pacientes y cómo gestionarlos respetando la confidencialidad y obteniendo los consentimientos necesarios, contenido educativo sobre los avances en diagnóstico y tratamiento disponibles en el hospital y cómo comunicar los resultados clínicos de forma que generen confianza sin prometer resultados que no se pueden garantizar.

6. Experiencia del paciente como herramienta de marketing: El mejor marketing es un paciente satisfecho que recomienda. Diseña el sistema. Incluye: encuesta de satisfacción del paciente post-consulta y post-ingreso (NPS hospitalario, qué preguntar), sistema de gestión de las reseñas en Google y portales de salud (cómo responder a las negativas, cómo solicitar reseñas a los pacientes satisfechos), programa de paciente VIP para los grandes asegurados y los pacientes de alto valor, sistema de comunicación post-consulta para el seguimiento del paciente y cómo convertir la experiencia positiva del paciente en contenido de marketing.

7. Marketing con aseguradoras y empresas: Parte importante del negocio de un hospital privado viene de seguros de salud y de acuerdos con empresas. Diseña la estrategia B2B. Incluye: marketing hacia las aseguradoras (cómo posicionarse como hospital preferente en los cuadros médicos de las principales aseguradoras), propuesta de salud corporativa para empresas de la zona (revisiones médicas, programas de salud laboral, acceso preferente para empleados), eventos de networking médico-empresarial para directivos de empresa y protocolo de captación de grandes cuentas corporativas.

Incluye ejemplos de mensajes de comunicación sanitaria que cumplen con la normativa, plantillas de contenido digital para hospitales y métricas de seguimiento. Todo adaptado al marco legal de la publicidad sanitaria en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Captación de pacientes y construcción de reputación médica para hospitales privados',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de software médico e historia clínica electrónica con IA',
                'description'      => 'Diseña y desarrolla sistemas de historia clínica electrónica, aplicaciones de telemedicina y software de gestión hospitalaria cumpliendo con la normativa RGPD y de seguridad sanitaria.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en tecnología sanitaria (Health IT) con experiencia en el desarrollo de sistemas de Historia Clínica Electrónica (HCE), plataformas de telemedicina, sistemas de gestión hospitalaria y la integración de IA clínica en los flujos de trabajo médico. Conoces los estándares de interoperabilidad sanitaria (HL7, FHIR), la normativa de seguridad de datos de salud en España y Europa (RGPD, ENS) y los requisitos de certificación de software médico (MDR, CE).

Contexto del proyecto de desarrollo:
- Red de 5 clínicas especializadas en diferentes ciudades españolas que quiere unificar su sistema de información clínica
- Situación actual: cada clínica usa un software diferente, los datos de los pacientes no son accesibles entre clínicas y hay mucha duplicación de pruebas
- Objetivo: plataforma unificada de HCE con acceso desde cualquiera de las 5 clínicas, telemedicina integrada y asistente IA para los médicos
- Usuarios: 45 médicos especialistas, 30 enfermeras, 20 administrativos y los propios pacientes a través de una app
- Restricciones: máxima seguridad de los datos de salud, cumplimiento estricto con el RGPD y las guías de la AEPD

Desarrolla la arquitectura completa del sistema de información clínica:

1. Arquitectura del sistema de Historia Clínica Electrónica: Diseña la arquitectura técnica del sistema. Incluye: stack tecnológico recomendado (frontend, backend, base de datos, infraestructura cloud) con justificación, modelo de datos para la Historia Clínica Electrónica siguiendo el estándar FHIR R4 (recursos principales: Patient, Practitioner, Encounter, Observation, Condition, MedicationRequest, DiagnosticReport), arquitectura multi-tenant segura para las 5 clínicas con aislamiento estricto de los datos de cada paciente, diseño de la capa de API RESTful o GraphQL para la integración entre módulos y con sistemas externos y arquitectura de microservicios o monolito modular según el tamaño del sistema.

2. Módulo de gestión de pacientes y agenda: Diseña el módulo de gestión de citas y pacientes. Incluye: proceso de registro de paciente nuevo (datos administrativos, consentimientos informados digitales, asignación de historia clínica) y cómo garantizar que un mismo paciente que acude a dos clínicas diferentes se identifica como el mismo (master patient index), sistema de agenda inteligente para médicos especialistas (gestión de la disponibilidad, tipos de visita con duración diferente, lista de espera) con integración de IA para sugerir huecos óptimos según la urgencia del caso, sistema de recordatorios automáticos a los pacientes (SMS, email, app) y reducción de no-shows y proceso de alta, ingreso y traslado de pacientes entre clínicas de la red.

3. Módulo clínico y soporte a la decisión médica: El corazón del sistema es el soporte al trabajo del médico. Diseña el módulo clínico. Incluye: interfaz del médico para la consulta (cómo organizar la vista de la HCE para que el médico encuentre lo que necesita en segundos), sistema de dictado médico con transcripción automática por IA y estructuración de la nota clínica, alertas clínicas automáticas (alergias, interacciones medicamentosas, valores de laboratorio fuera de rango), integración del asistente IA para el médico (análisis de la historia clínica del paciente, sugerencias de diagnóstico diferencial, revisión de evidencia científica reciente para el caso), visualización de la evolución temporal de los parámetros clínicos del paciente y prescripción electrónica con validación de interacciones y dosis.

4. Plataforma de telemedicina integrada: Diseña el módulo de consulta remota. Incluye: flujo de la videoconsulta (acceso del paciente por link sin app, sala de espera virtual, consulta con el médico, generación automática de la nota de telemedicina en la HCE), integración de dispositivos de monitorización remota del paciente (tensiómetro conectado, glucómetro, pulsioxímetro) con volcado automático de los datos en la HCE, proceso de consentimiento informado para la telemedicina cumpliendo con la normativa española, facturación de las teleconsultas a las aseguradoras y gestión de las recetas electrónicas emanadas de consultas de telemedicina.

5. Seguridad y cumplimiento RGPD en datos de salud: Los datos de salud son datos sensibles de categoría especial. Diseña el modelo de seguridad. Incluye: arquitectura de seguridad del sistema (cifrado en tránsito y en reposo, autenticación multifactor para todos los usuarios médicos, control de acceso basado en roles con el principio de mínimo privilegio), modelo de auditoría completa (log de quién ha accedido a qué historia clínica, cuándo y desde qué dispositivo) para cumplir con el RGPD, proceso de gestión del consentimiento del paciente (qué datos se recopilan, para qué, con qué base legal, cómo gestionar la revocación del consentimiento), protocolo de respuesta ante brecha de seguridad de datos de salud (plazos de notificación a la AEPD) y política de retención y borrado de datos de salud.

6. Interoperabilidad con el sistema sanitario público: Las clínicas necesitan intercambiar información con la sanidad pública. Diseña la integración. Incluye: integración con la Historia Clínica Digital del Sistema Nacional de Salud (HCI-SNS) mediante los estándares establecidos por el Ministerio de Sanidad, acceso a las historias clínicas de los pacientes en el sistema público cuando el paciente autoriza la consulta, envío de informes de alta y resultados de pruebas a los médicos de atención primaria del paciente, integración con los laboratorios de análisis clínicos y centros de diagnóstico por imagen externos y participación en las redes de intercambio de datos sanitarios autonómicas.

7. App del paciente y portal web: El paciente necesita acceso a su información y a los servicios de la red. Diseña la app. Incluye: funcionalidades de la app del paciente (acceso a su HCE, resultados de pruebas, informes médicos, agenda de citas, acceso a la videoconsulta, mensajería segura con el médico), proceso de verificación de identidad del paciente para el acceso digital a su historia clínica (para cumplir con la normativa de protección de datos), configuración de los permisos del paciente sobre sus datos (qué datos comparte con qué médico), diseño UX de la app para pacientes de todas las edades (incluyendo personas mayores) y notificaciones push para recordatorios de cita, resultados disponibles y mensajes del médico.

Incluye diagramas de arquitectura en texto, fragmentos de código en Python para la integración con FHIR y referencias a los estándares y normativas aplicables en España. Todo con consideraciones de escalabilidad para una red que puede crecer a 15-20 clínicas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 80,
                'use_case'         => 'Sistema unificado de HCE con telemedicina y IA clínica para red de clínicas privadas',
                'vote_score'       => 55,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia de paciente y señalética hospitalaria con IA',
                'description'      => 'Crea entornos hospitalarios que reduzcan la ansiedad del paciente, mejoren la orientación y comuniquen confianza mediante un diseño centrado en el ser humano.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario y arquitecto de espacios de salud con especialización en el diseño de entornos hospitalarios, señalética sanitaria y la aplicación del diseño centrado en el paciente para mejorar los resultados clínicos y la percepción de calidad. Conoces la evidencia científica sobre cómo el entorno físico y la comunicación visual afectan a la ansiedad del paciente, la eficiencia del personal sanitario y la seguridad clínica.

Contexto del proyecto de diseño:
- Hospital privado de nueva apertura en España con 150 camas en un edificio moderno de 8 plantas
- Especialidades: urgencias, hospitalización, consultas externas, diagnóstico por imagen, cirugía ambulatoria y maternidad
- Público: pacientes adultos de todas las edades, acompañantes y personal sanitario de 3 perfiles distintos
- Problema actual (en el edificio en construcción): el arquitecto ha diseñado el espacio sin considerar la experiencia del paciente, la señalética está por definir y hay zonas de conflicto de circulación entre pacientes y personal
- Objetivo: diseñar la experiencia completa desde que el paciente llega al hospital hasta que se va

Desarrolla el sistema completo de diseño de experiencia hospitalaria:

1. Mapa de la experiencia del paciente: Antes de diseñar, hay que entender el recorrido del paciente. Diseña el customer journey map hospitalario. Incluye: los diferentes tipos de paciente y sus recorridos (urgencias, consulta programada, ingreso planificado, diagnóstico por imagen, cirugía ambulatoria, maternidad), los touchpoints en cada recorrido (cómo llega a saber que el hospital existe, cómo pide cita, cómo llega al hospital, cómo se orienta, cómo espera, cómo es la consulta, cómo se va, cómo recibe los resultados), los momentos de mayor ansiedad en el recorrido del paciente y cómo el diseño puede reducirla y las emociones que queremos que el paciente sienta en cada fase (tranquilidad, confianza, sensación de cuidado, respeto por su privacidad).

2. Sistema de señalética hospitalaria: La señalética es el principal sistema de orientación del paciente. Diseña el sistema completo. Incluye: arquitectura de la información (jerarquía de señales: orientación general del edificio, orientación por planta, identificación de consultas y servicios, señales de seguridad), sistema de colores para identificar zonas del hospital (un color por especialidad o por tipo de servicio) coherente con la identidad visual del hospital, tipografía accesible para personas mayores o con dificultades visuales (tamaño mínimo, fuente sans-serif de alta legibilidad, contraste mínimo), señalética digital vs. estática (dónde usar pantallas dinámicas y dónde es mejor la señalética física fija) y señalética en el suelo para guiar recorridos en plantas de alta complejidad.

3. Diseño del área de recepción y admisión: La recepción es el primer contacto físico con el hospital. Diseña la experiencia. Incluye: layout del área de admisión que reduzca la sensación de cola y espera (distribución de los mostradores, zona de check-in digital, asientos accesibles), guión de la conversación de admisión del personal administrativo para generar confianza desde los primeros segundos, comunicación visual en la zona de espera (qué información mostrar en las pantallas, arte y elementos naturales que reducen la ansiedad), sistema de llamada al paciente que respete su privacidad (sin usar el nombre en voz alta en sala de espera) y protocolo de atención a pacientes con necesidades especiales (movilidad reducida, diversidad funcional, barreras idiomáticas).

4. Diseño de las salas de espera: La espera es uno de los momentos de mayor estrés para el paciente. Diseña el entorno de espera. Incluye: evidencia científica sobre el impacto del diseño en la percepción del tiempo de espera (luz natural, vista al exterior, plantas, arte, temperatura), sistema de información en tiempo real del tiempo de espera estimado para reducir la ansiedad de la incertidumbre, disposición del mobiliario para respetar la privacidad y permitir que los acompañantes estén juntos, diferenciación de zonas de espera según el estado de ánimo esperado (urgencias vs. maternidad vs. oncología requieren ambientes muy diferentes) y zonas específicas para niños pequeños en las áreas de pediatría y maternidad.

5. Diseño de las consultas y habitaciones: El espacio de la consulta médica y la habitación de hospitalización son los espacios más íntimos. Diseña la experiencia. Incluye: layout de la consulta que permita al médico mantener contacto visual con el paciente mientras usa el ordenador (el problema de la pantalla que genera distancia), iluminación y temperatura de la consulta para la exploración física y para la conversación médica, diseño de la habitación de hospitalización que maximice la comodidad del paciente y la eficiencia del personal de enfermería (posición de la cabecera, sistema de llamada, luz de lectura, privacidad del acompañante), sistema de comunicación entre habitación y enfermería y cómo hacer que la habitación se sienta menos clínica y más humana.

6. Identidad visual del hospital y comunicación interna: El hospital necesita una identidad visual coherente en todos los puntos de contacto. Diseña el sistema. Incluye: logotipo y aplicaciones de la marca (uniformes del personal, fachada, material de papelería, señalética, web y app), paleta de colores y tipografía que transmita confianza, modernidad y calidez al mismo tiempo, sistema de iconografía para la señalética (pictogramas accesibles para todas las edades y culturas), plantillas de comunicación interna (informes médicos, consentimientos, documentación de alta) con diseño que mejore la legibilidad y la comprensión del paciente y guía de tono de voz en la comunicación escrita del hospital (cómo hablarle al paciente: claro, humano, sin tecnicismos).

7. Diseño del entorno digital del paciente: La experiencia no termina en el hospital físico. Diseña la experiencia digital. Incluye: diseño de la app del paciente (UX/UI accesible para todas las edades, flujo de petición de cita, acceso a resultados, videoconsulta) con criterios de accesibilidad WCAG AA, diseño del email de confirmación de cita y los recordatorios automáticos (tono, información incluida, diseño visual), diseño de la página web del hospital (arquitectura de la información, diseño de las páginas de cada especialidad, formulario de solicitud de cita online) y diseño de los materiales físicos que el paciente recibe (folleto de instrucciones pre-intervención, informe de alta, tarjeta de seguimiento).

Incluye referencias a proyectos de diseño hospitalario de referencia en Europa, evidencia científica sobre el impacto del entorno en los resultados clínicos y una guía de implementación por fases adaptada al presupuesto de un hospital privado mediano.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño de la experiencia del paciente en hospital privado de nueva apertura',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de equipamiento médico y soluciones sanitarias con IA',
                'description'      => 'Domina el proceso de venta de equipamiento médico y tecnología sanitaria a hospitales y clínicas con ciclos de decisión complejos, múltiples stakeholders y licitaciones públicas.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial especializado en la venta de equipamiento médico y tecnología sanitaria de alta complejidad. Tu experiencia abarca desde equipos de diagnóstico por imagen (resonancias magnéticas, TAC, PET), equipamiento quirúrgico, sistemas de laboratorio hasta soluciones de software hospitalario. Conoces el proceso de decisión en hospitales públicos y privados, la mecánica de las licitaciones del SNS y cómo construir relaciones con los diferentes stakeholders del proceso de compra sanitario.

Contexto del equipo de ventas:
- Filial española de un fabricante europeo de equipamiento de diagnóstico por imagen
- Cartera de productos: resonancias magnéticas de 1.5T y 3T, tomógrafos de última generación y sistemas de gestión de imagen PACS
- Mercado objetivo: hospitales públicos y privados en España, con foco en la zona centro y sur
- Ciclo de venta: 12 a 36 meses desde el primer contacto hasta la instalación
- Ticket medio: 800.000 euros por sistema, proyectos que pueden llegar a 3 millones con instalación e integración
- Equipo: 4 key account managers y 2 especialistas de aplicaciones clínicas

Desarrolla el sistema completo de ventas para equipamiento médico:

1. Mapeo de los stakeholders en la venta hospitalaria: La venta hospitalaria involucra a múltiples decisores. Diseña el mapa de influencia. Incluye: roles en el proceso de compra de un hospital público (jefe de servicio médico solicitante, dirección médica, gerencia, departamento de compras, comisión técnica, interventor), roles en un hospital privado (médico especialista, director médico, dirección general, CFO, comité de inversiones), cómo influye cada stakeholder en la decisión final (iniciador, evaluador técnico, evaluador económico, decisor final, usuario), estrategia de relación con cada perfil (qué le importa, qué argumentos le convencen, cómo accedes a él) y cómo navegar los conflictos de interés entre el médico que quiere el mejor equipo y el CFO que quiere el más barato.

2. Proceso de venta técnico-comercial: La venta de equipamiento médico combina argumentos técnicos y comerciales. Diseña el proceso. Incluye: cualificación de la oportunidad (señales de que un hospital va a renovar su equipamiento de imagen: equipos con más de 10 años, crecimiento de la lista de espera, ampliación del servicio), proceso de discovery con el jefe de servicio de radiología (qué preguntas hacerle para entender sus necesidades clínicas y sus frustraciones con el equipo actual), demostración del equipo en el propio hospital (preparación de la demo, pacientes de demostración, parámetros que destacar para cada perfil), elaboración de la propuesta técnica y económica y negociación final cuando hay varios competidores en el proceso.

3. Proceso de licitaciones públicas (SNS): Gran parte del mercado de equipamiento médico es licitación pública. Diseña la estrategia. Incluye: calendario del proceso de licitación en hospitales públicos del SNS (cómo enterarte de que va a salir una licitación antes de que se publique en el BOE, cómo influir en el pliego de condiciones técnicas en la fase previa a la licitación), análisis del pliego de condiciones cuando se publica (cómo leer e interpretar las especificaciones técnicas para entender si el pliego favorece a tu producto o al competidor), elaboración de la oferta técnica y económica que maximiza la puntuación según los criterios de adjudicación, gestión de las reclamaciones si el proceso no fue transparente y construcción de relaciones con los técnicos de los hospitales públicos antes de que salga la licitación.

4. Demostraciones clínicas y pruebas de equipamiento: La demostración del equipo es el momento más crítico del proceso de venta. Diseña el protocolo de demo. Incluye: preparación de la demo técnica (casos clínicos a mostrar según la especialidad del jefe de servicio, configuración del equipo para maximizar la calidad de imagen en los casos clave, preparación del equipo de aplicaciones clínicas para responder preguntas técnicas muy específicas), cómo gestionar el período de prueba del equipo en el hospital (4-8 semanas de prueba en condiciones reales), análisis comparativo con el equipo competidor si el hospital está evaluando varias opciones y cómo convertir a los médicos que han probado el equipo en prescriptores internos de tu solución.

5. Financiación y modelos de acceso al equipamiento: El precio de 800.000 euros es una barrera para muchos hospitales. Diseña las alternativas de financiación. Incluye: modelo de venta tradicional vs. leasing financiero vs. renting operativo (cuotas mensuales incluyendo mantenimiento y actualización), modelo pay-per-scan (el hospital paga por cada estudio realizado, sin inversión inicial), acuerdos de renovación tecnológica (el hospital se compromete a 10 años de contrato a cambio de la tecnología más avanzada y las actualizaciones incluidas), financiación con fondos europeos para hospitalización pública (programas FEDER, fondos de recuperación para digitalización sanitaria) y cómo estructurar la propuesta económica para que el CFO vea el retorno de la inversión.

6. Servicio posventa y contratos de mantenimiento: En equipamiento médico, el servicio posventa es parte de la venta. Diseña la estrategia. Incluye: propuesta de contrato de mantenimiento (coberturas disponibles: básico, full service, premium con actualizaciones de software incluidas), argumentario del valor del contrato de mantenimiento (tiempo de respuesta garantizado, disponibilidad del equipo superior al 95%, actualizaciones de software que mantienen el equipo al día), gestión de las averías (protocolo de respuesta urgente cuando el equipo falla en un hospital que tiene pacientes en lista de espera), programa de fidelización del cliente durante los años del contrato de mantenimiento y cómo usar el contrato de mantenimiento como palanca para la siguiente venta de renovación del equipo.

7. Gestión del equipo de ventas y métricas: Define el sistema de gestión comercial del equipo. Incluye: KPIs del equipo de ventas de equipamiento médico (pipeline por valor, número de demos realizadas, tiempo de ciclo de venta, tasa de conversión de demo a propuesta, tasa de conversión de propuesta a pedido, cuota de mercado por tipo de equipo y por región), proceso de forecast trimestral en un negocio con ciclos de venta de 12 a 36 meses (cómo calcular la probabilidad de cierre), gestión del CRM para equipamiento médico (qué información registrar, cómo hacer el seguimiento de los stakeholders durante el largo ciclo de venta) y plan de formación técnica continua para el equipo de ventas (actualización en nuevas aplicaciones clínicas, formación en normativa de producto sanitario).

Incluye scripts de presentación ejecutiva para diferentes perfiles, plantillas de análisis de ROI del equipamiento y guía de navegación del proceso de licitación pública sanitaria en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Gestión del ciclo de venta complejo de equipamiento médico de alta tecnología a hospitales',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en empresas de tecnología sanitaria con IA',
                'description'      => 'Define y desarrolla productos de tecnología sanitaria que cumplan con los requisitos regulatorios, aporten valor clínico real y tengan éxito comercial en el mercado de la salud.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en tecnología sanitaria (MedTech y HealthTech) con experiencia en el desarrollo de productos médicos y soluciones digitales para el sistema de salud. Conoces el proceso de desarrollo de producto en entornos altamente regulados (MDR, FDA), la validación clínica de los productos sanitarios, las particularidades de los clientes en el sector salud y los modelos de reembolso que determinan si un producto tiene futuro comercial.

Contexto de la empresa:
- Startup de tecnología médica fundada hace 3 años en España
- Producto: plataforma de IA para la detección precoz del cáncer de mama mediante análisis de mamografías
- Estado: el algoritmo de IA está validado clínicamente en un estudio con 15.000 mamografías, con sensibilidad del 94% y especificidad del 91%
- Regulatorio: certificación CE como producto sanitario clase IIa obtenida hace 6 meses
- Comercialización: 8 hospitales piloto en España, 2 en Portugal, objetivo de llegar a 50 hospitales en 2 años
- Reto: escalar la comercialización manteniendo la seguridad del producto y cumpliendo con la regulación

Desarrolla el sistema completo de gestión de producto para la startup MedTech:

1. Estrategia de producto y hoja de ruta: Diseña la estrategia de producto para los próximos 2 años. Incluye: análisis del feedback de los 8 hospitales piloto (qué funciona bien, qué mejorar, qué nuevas funcionalidades piden los radiólogos) y cómo priorizarlo en el roadmap, decisión sobre los mercados geográficos a priorizar (España, Portugal, expansión a Francia o Italia) y qué implicaciones regulatorias tiene cada mercado, nuevas indicaciones clínicas que el algoritmo podría cubrir en el futuro (otros tipos de cáncer, otras modalidades de imagen) y cómo evaluar su viabilidad, roadmap de producto de 18 meses con features priorizadas por impacto clínico y potencial comercial y cómo comunicar el roadmap a los hospitales piloto para mantener su compromiso.

2. Gestión del ciclo de desarrollo en entornos regulados: Desarrollar software médico requiere seguir procesos muy estrictos. Diseña el proceso. Incluye: sistema de gestión de la calidad (QMS) para el desarrollo de software médico (IEC 62304, ISO 13485), proceso de control de versiones y gestión del ciclo de vida del software médico (SaMD lifecycle), documentación técnica requerida para mantener la certificación CE cuando se actualiza el algoritmo (cómo gestionar los cambios significativos vs. los no significativos), proceso de pruebas de regresión y validación antes de desplegar cada nueva versión y gestión de incidentes y reportes de seguridad (post-market surveillance).

3. Integración en el flujo de trabajo clínico: Un producto médico solo tiene valor si se integra en el flujo de trabajo de los clínicos. Diseña la estrategia. Incluye: análisis del flujo de trabajo del radiólogo en el proceso de lectura de mamografías (en qué momento del flujo se inserta el algoritmo, cómo se presenta el resultado, cómo afecta al tiempo de lectura), integración técnica con los PACS de los hospitales (protocolos de comunicación DICOM, HL7, APIs de integración), proceso de onboarding de nuevos hospitales (instalación, validación local del algoritmo, formación del equipo de radiología, período de supervisión intensiva inicial) y gestión de los falsos positivos y falsos negativos (cómo comunicar al radiólogo las limitaciones del sistema para que lo use de forma apropiada).

4. Reembolso y modelo económico: En el sector salud, el reembolso determina la adopción. Diseña la estrategia. Incluye: análisis del sistema de financiación de la tecnología sanitaria en España (DRG, CCAA, concursos públicos) y cómo posicionarte para el reembolso, modelo de pricing para los hospitales públicos (precio por estudio analizado, licencia anual por número de mamografías, modelo de acceso compartido entre hospitales) y para los hospitales privados (modelo diferente con más flexibilidad), construcción del caso económico para el hospital (ROI del sistema: reducción de biopsias innecesarias, reducción de casos avanzados, aumento de la productividad del radiólogo) y cómo las aseguradoras pueden incluir tu tecnología en su cobertura.

5. Validación clínica continua y evidencia: En MedTech, la evidencia clínica es el activo más valioso. Diseña el programa. Incluye: programa de estudios post-comercialización (post-market clinical follow-up) requerido por el MDR, diseño de los estudios de vida real que generan evidencia adicional en las condiciones de uso real, proceso de publicación de resultados clínicos en revistas médicas de impacto (qué revistas, cómo estructurar los estudios, cómo involucrar a los radiológos de los hospitales piloto como co-autores), participación en congresos médicos de radiología para presentar los resultados (ECR, RSNA, SERAM) y cómo convertir la evidencia clínica acumulada en argumentos comerciales diferenciadores.

6. Gestión de los clientes hospitalarios: Los hospitales son clientes muy particulares. Diseña el sistema de customer success. Incluye: modelo de customer success para hospitales (qué métricas de uso y de resultado clínico seguir en cada hospital, frecuencia de revisiones, responsable en la empresa para cada hospital), programa de formación continua para los radiólogos (actualizaciones del sistema, nuevas funcionalidades, gestión de casos edge), gestión de los comités de radiología cuando hay debate interno sobre la adopción del sistema, proceso de gestión de incidentes clínicos (cuando el sistema ha cometido un error en un caso real) y cómo convertir los hospitales con mejores resultados en referencias para nuevos clientes.

7. Internacionalización del producto MedTech: Diseña la estrategia de expansión a nuevos mercados europeos. Incluye: análisis regulatorio de los mercados objetivo (la certificación CE sirve en todos los mercados de la UE pero hay requisitos adicionales en algunos países), modelo de go-to-market en cada mercado (distribuidores locales vs. equipo propio, relación con las sociedades de radiología locales, proceso de reembolso en cada país), adaptación del producto a los requisitos locales (idioma de la interfaz, integración con los PACS más usados en cada mercado, adaptaciones al flujo de trabajo local), gestión de la propiedad intelectual del algoritmo en los mercados internacionales y priorización de mercados basada en el tamaño del mercado, el entorno regulatorio y la madurez digital del sistema de salud.

Incluye plantillas de documentación técnica MDR simplificada, framework de priorización del roadmap para MedTech y referencias al ecosistema de startups de healthtech en España y Europa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Escala comercial de una plataforma de IA diagnóstica certificada CE para detección del cáncer',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personal sanitario y equipos médicos con IA',
                'description'      => 'Lidera equipos de profesionales sanitarios en entornos hospitalarios, gestiona turnos, previene el burnout y desarrolla el talento en un sector con escasez estructural de profesionales.',
                'prompt_content'   => <<<'EOT'
Eres un director de Recursos Humanos con especialización en el sector sanitario, con experiencia en la gestión de plantillas de hospitales públicos y privados, incluyendo médicos, personal de enfermería, técnicos sanitarios y personal administrativo. Conoces el marco laboral específico del sector sanitario en España (Estatuto Marco del Personal Estatutario, convenios colectivos de la sanidad privada), la escasez estructural de determinados perfiles (enfermería, médicos especialistas) y los retos de bienestar y burnout en los equipos sanitarios.

Contexto del hospital:
- Hospital privado de tamaño mediano con 180 camas y 420 trabajadores
- Plantilla: 85 médicos (50 en plantilla + 35 guardias y colaboradores externos), 140 enfermeras, 60 técnicos auxiliares, 80 personal administrativo y de servicios
- Problema principal: alta tasa de rotación en enfermería (32% anual, la mitad se va a hospitales públicos o al extranjero) y dificultad para cubrir guardias de urgencias
- Segundo problema: 4 médicos especialistas clave están en edad de jubilación en los próximos 3 años
- Coste estimado de la rotación de enfermería: 18.000 euros por enfermera (selección, formación, pérdida de productividad)

Desarrolla la estrategia completa de gestión de personas para el hospital:

1. Diagnóstico de la rotación de enfermería: Diseña el proceso de diagnóstico. Incluye: análisis de las entrevistas de salida de las enfermeras que se han ido en el último año (qué dicen, qué no dicen, patrones), encuesta de clima laboral específica para personal de enfermería (qué factores medir: carga de trabajo, autonomía, relación con los médicos, reconocimiento, compensación, conciliación, plan de carrera), benchmarking de las condiciones laborales del hospital frente a otros hospitales privados y frente al sistema público (salario, jornada, turnos, beneficios, estabilidad) y mapa de los momentos del ciclo de vida de la enfermera en el hospital donde se pierden más (primeros 6 meses, al año de antigüedad, tras el nacimiento de un hijo, cuando se abre una convocatoria pública).

2. Propuesta de valor al profesional sanitario: ¿Por qué una enfermera brillante debería trabajar en este hospital en lugar del hospital público o de Irlanda? Diseña la Employee Value Proposition sanitaria. Incluye: los elementos de la propuesta de valor que el hospital privado puede ofrecer y el sistema público no puede (flexibilidad de turno, menor burocracia, mejor equipamiento, relación más directa con el paciente, mayor autonomía profesional), cómo comunicar la propuesta de valor en la web de empleo, en LinkedIn y en las escuelas de enfermería, plan de experiencia del profesional sanitario en los primeros 90 días (onboarding, mentoría, integración en el equipo) y beneficios específicos para perfiles sanitarios (guardería en el hospital, parking gratuito, flexibilidad para compatibilizar con guardia en el sistema público, formación continuada pagada).

3. Planificación y gestión de turnos: La gestión de los turnos en un hospital 24x7 es uno de los mayores retos. Diseña el sistema. Incluye: metodología de planificación de turnos de enfermería que maximiza la continuidad de cuidados (el mismo equipo de noche siempre que sea posible), modelo de turno optimizado para reducir la fatiga (turnos de 12 horas vs. 8 horas: ventajas e inconvenientes en enfermería hospitalaria), uso de IA para la generación automática de turnos que cumplen con los requisitos del convenio colectivo (descanso mínimo entre turnos, vacaciones, festivos), sistema de gestión de las bolsas de empleo para cubrir ausencias de urgencia sin depender siempre de las mismas personas y política de guardias voluntarias vs. obligatorias para cubrir las noches y los festivos.

4. Plan de carrera y desarrollo para enfermería y personal técnico: La falta de perspectivas de carrera es la segunda causa de abandono del hospital privado. Diseña el sistema. Incluye: mapa de carrera para la enfermería en el hospital privado (enfermera junior → enfermera senior → enfermera especialista → supervisora → directora de unidad), programa de especialización interna (UCI, quirófano, urgencias, oncología) con formación y reconocimiento salarial, acceso a formación continuada con presupuesto por profesional, programa de becas para la especialidad de enfermería (EIR), sistema de evaluación del desempeño específico para el entorno sanitario (competencias técnicas, relación con el paciente, trabajo en equipo, capacidad de formación de otros) y cómo gestionar las ambiciones de los mejores profesionales que quieren crecer más allá de lo que el hospital puede ofrecerles.

5. Prevención del burnout y bienestar del equipo sanitario: El burnout es una crisis de salud pública en los equipos sanitarios. Diseña el programa de bienestar. Incluye: factores de riesgo de burnout específicos del sector sanitario (carga emocional del cuidado, muerte de pacientes, conflictos con familiares, falta de autonomía, trabajo a turnos), programa de detección temprana del burnout (escala de Maslach adaptada, señales de alarma que los supervisores deben detectar), programa de apoyo psicológico para el personal sanitario (acceso a psicólogo del trabajo, grupos de soporte entre compañeros, sesiones de debriefing tras casos críticos), política de gestión de los conflictos entre el personal (entre médicos y enfermeras, entre compañeros de turno) y protocolo de actuación ante la violencia de pacientes o familiares hacia el personal sanitario.

6. Sucesión y relevo generacional en los equipos médicos: 4 especialistas clave se jubilan en los próximos 3 años. Diseña el plan. Incluye: mapa de riesgos de la jubilación (qué conocimiento único tienen estos 4 médicos, qué ocurre si se van sin plan de sucesión), proceso de transferencia de conocimiento y pacientes a los médicos que les suceden (programa de mentoría médica de 2 años antes de la jubilación), estrategia de captación de los especialistas que sucederán a los que se jubilan (cuándo iniciar el proceso, dónde buscar, cómo atraerlos al hospital privado frente al sistema público), modelo de transición gradual (reducción de carga asistencial en los últimos 2 años, programa de emeritaje o colaboración post-jubilación) y cómo gestionar la comunicación con los pacientes habituales de los médicos que se jubilan.

7. Relaciones laborales y negociación colectiva en el sector sanitario: Las relaciones laborales en sanidad son complejas y sensibles. Diseña el sistema. Incluye: marco legal específico de la sanidad privada (convenio colectivo de hospitales, Estatuto de los Trabajadores en las partes que aplican, normativa de prevención de riesgos en el sector sanitario), gestión de la relación con el comité de empresa o los delegados sindicales en un hospital (cómo construir una relación de confianza, cómo gestionar los conflictos antes de que lleguen a huelga), protocolo de servicios mínimos en caso de huelga en un hospital (qué servicios son esenciales, cómo establecer los mínimos con la autoridad laboral), gestión de las peticiones individuales de los médicos (reducción de jornada, cambios de turno, excedencias) y cumplimiento de la normativa de prevención de riesgos laborales específica para el sector sanitario (riesgo biológico, carga emocional, turnicidad).

Incluye plantillas de evaluación del desempeño para entornos sanitarios, protocolo de onboarding de nuevos profesionales y guía de aplicación del convenio colectivo de la sanidad privada. Todo adaptado a la realidad de un hospital privado de tamaño mediano en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Reducción de la rotación de enfermería y prevención del burnout en hospitales privados',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera y control de costes en hospitales privados con IA',
                'description'      => 'Optimiza la gestión económica de un hospital privado, controla los costes clínicos y mejora la rentabilidad por servicio usando inteligencia artificial como apoyo al análisis financiero.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero especializado en el sector sanitario privado con experiencia en la gestión económica de hospitales, clínicas especializadas y grupos de salud. Tu especialidad es el análisis de la rentabilidad por proceso clínico, la gestión del reembolso con aseguradoras y la optimización de los costes operativos en entornos donde la calidad asistencial no puede comprometerse por razones económicas.

Contexto financiero del hospital:
- Hospital privado con 180 camas y facturación de 28 millones de euros
- Mix de ingresos: 60% aseguradoras privadas, 25% pago directo del paciente, 15% conciertos con la sanidad pública
- EBITDA actual: 8% sobre facturación, objetivo: llegar al 12% en 2 años
- Problema principal: los costes de personal representan el 58% de la facturación (el benchmark del sector es 50-52%)
- Segundo problema: la rentabilidad varía enormemente entre servicios (urgencias pierde dinero, traumatología es muy rentable, oncología está en equilibrio)
- Sistema de información: SAP básico con información financiera pero sin análisis de rentabilidad por proceso clínico

Desarrolla el sistema completo de control financiero hospitalario:

1. Análisis de rentabilidad por proceso clínico y por servicio: El hospital necesita saber qué servicios ganan y cuáles pierden dinero. Diseña el sistema de análisis. Incluye: metodología de cálculo del coste por proceso clínico (Grupo de Diagnóstico Relacionado: GDR/DRG) que asigna todos los costes directos e indirectos a cada proceso (personal médico y de enfermería, medicamentos, fungibles, quirófano, pruebas diagnósticas, hostelería, overhead), sistema de comparación del coste del proceso con el ingreso que genera ese proceso (tarifa de aseguradora o precio directo), identificación de los procesos clínicos más y menos rentables del hospital y análisis de benchmarking del coste por GDR frente a hospitales de referencia.

2. Gestión de contratos con aseguradoras: Las aseguradoras son el principal pagador del hospital y la negociación de tarifas determina la rentabilidad. Diseña el sistema de gestión. Incluye: análisis de la rentabilidad por aseguradora (qué aseguradoras pagan mejor, cuáles pagan más tarde, cuáles generan más rechazos), proceso de renegociación anual de tarifas con las aseguradoras (argumentos a usar, datos de coste propio para justificar subidas, cuándo aceptar y cuándo no), gestión de las autorizaciones previas que las aseguradoras exigen antes de ciertos procedimientos (cómo agilizar el proceso para no retrasar la atención al paciente ni perder facturación), proceso de gestión de los rechazos de facturas por las aseguradoras (recurso, documentación adicional, escalación) y impacto de los conciertos con la sanidad pública en la rentabilidad global.

3. Optimización de la estructura de costes: El 58% de la facturación en personal es el principal problema. Diseña el plan de optimización. Incluye: análisis de productividad del personal médico (número de consultas, procedimientos e ingresos por médico y por hora trabajada), análisis de la ratio de personal de enfermería por cama y por unidad (comparativa con benchmarks del sector), identificación de ineficiencias en la gestión de turnos que generan costes de horas extra innecesarias, análisis del coste de los médicos colaboradores externos vs. médicos en plantilla (cuándo es más rentable cada modelo), optimización del coste de los suministros y fungibles (gestión del inventario, estandarización de materiales donde no se compromete la calidad) y benchmark de los costes de hostelería y servicios generales.

4. Gestión del capital circulante y la tesorería: Un hospital tiene un ciclo de cobro largo. Diseña el sistema de gestión. Incluye: análisis del período medio de cobro por aseguradora (cuántos días tarda en pagar cada aseguradora, cómo reducirlo), proceso de facturación médica eficiente para reducir los errores que retrasan el cobro (codificación correcta de procedimientos, documentación clínica completa que soporte la factura), gestión de los pacientes de pago directo (anticipo, fraccionamiento del pago, gestión del impago), política de provisión de insolvencias por aseguradora y por tipo de paciente y modelo de cash flow mensual proyectado para anticipar los momentos de tensión de liquidez.

5. Planificación presupuestaria del hospital: El presupuesto anual del hospital es un proceso complejo. Diseña la metodología. Incluye: proceso de presupuestación bottom-up por servicio y unidad (cada jefe de servicio contribuye al presupuesto de su área), metodología de presupuestación de los ingresos (mix de aseguradoras, volumen por proceso, tarifas negociadas), presupuesto de personal (plantilla fija + guardias + colaboraciones externas) por categoría y por unidad, presupuesto de inversiones (equipamiento, tecnología, reformas) con criterios de ROI para priorizar, proceso de revisión y aprobación del presupuesto por la dirección y el consejo y sistema de seguimiento mensual de la ejecución presupuestaria con alertas de desviación.

6. Inversiones en tecnología y equipamiento médico: Un hospital necesita renovar constantemente su equipamiento. Diseña el modelo de decisión de inversiones. Incluye: metodología de evaluación de inversiones en tecnología médica (ROI clínico y económico, análisis de coste-efectividad frente a las alternativas, financiación óptima: compra vs. leasing vs. renting operativo), proceso de priorización de las inversiones en el comité de dirección (quién propone, quién evalúa técnicamente, quién decide), modelo de análisis del impacto en la cuenta de resultados de adquirir una nueva RM o un nuevo TAC (ingresos adicionales que genera el nuevo equipo, costes operativos, amortización), gestión de los fondos europeos disponibles para la modernización de infraestructuras sanitarias y política de mantenimiento de los equipos actuales para maximizar su vida útil.

7. KPIs financieros del sector sanitario privado: Define los 15 indicadores financieros más relevantes para un hospital privado. Para cada indicador: fórmula, benchmark del sector sanitario español, frecuencia de seguimiento y acción a tomar si está fuera de rango. Indicadores específicos del sector: tasa de ocupación de camas, estancia media por GDR, coste por proceso clínico, ratio de rechazos de aseguradoras, margen de contribución por servicio, coste de personal por cama ocupada, período medio de cobro de aseguradoras y porcentaje de ingresos por proceso ambulatorio vs. hospitalización.

Proporciona modelos de análisis de rentabilidad por GDR en tabla, plantillas de seguimiento del cash flow hospitalario y referencias al sector sanitario privado en España (benchmarks de la Unión Española de Entidades Aseguradoras UNESPA y de la Asociación para la Defensa de la Sanidad Pública).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Mejora del margen hospitalario mediante análisis de rentabilidad por proceso clínico y optimización de costes',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance legal y protección de datos sanitarios con IA',
                'description'      => 'Navega el marco legal de la protección de datos de salud, el cumplimiento regulatorio MDR y la responsabilidad médica con IA como asistente jurídico especializado en derecho sanitario.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho sanitario y compliance en el sector salud con experiencia en la aplicación del RGPD a los datos de salud, la normativa de producto sanitario (MDR/IVDR), la responsabilidad médica civil y penal, la regulación de los servicios de telemedicina y el cumplimiento normativo en hospitales privados y empresas de tecnología médica en España.

Contexto de la consulta legal:
- Hospital privado que ha implementado un sistema de IA para el apoyo al diagnóstico médico y está digitalizando toda su historia clínica
- Situación: el hospital usa IA en radiología (detección de hallazgos en pruebas de imagen) y en urgencias (triaje asistido por IA)
- Incidente reciente: un paciente ha presentado una reclamación alegando que la IA no detectó su patología y el retraso en el diagnóstico causó un agravamiento de su situación
- Necesidad legal: revisar el marco de responsabilidad del hospital al usar IA clínica, actualizar el sistema de consentimiento informado y asegurar el cumplimiento del RGPD en el tratamiento de datos de salud

Desarrolla el asesoramiento legal completo:

1. Marco de responsabilidad médica con IA clínica: La responsabilidad médica cuando se usa IA es un territorio legal en evolución. Explica: cómo se distribuye la responsabilidad entre el hospital, el médico que usa la IA y el fabricante del sistema de IA cuando ocurre un error diagnóstico asistido por IA (teoría de la culpa concurrente en el derecho sanitario español), qué estándar de diligencia debe aplicar el médico cuando usa un sistema de IA de apoyo al diagnóstico (obligación de supervisar activamente la recomendación de la IA, no delegar la decisión médica en el sistema), cómo afecta al análisis de responsabilidad el hecho de que el sistema de IA esté certificado como producto sanitario CE y sea un "AI Act high-risk system", análisis del caso concreto del incidente y las posibles defensas del hospital y cómo el Reglamento de IA de la UE (AI Act) cambiará el marco de responsabilidad para los sistemas de IA médica.

2. Consentimiento informado para tratamientos con apoyo de IA: El consentimiento informado debe adaptarse al uso de IA. Diseña el sistema. Incluye: análisis de qué información debe recibir el paciente sobre el uso de IA en su diagnóstico o tratamiento (tipo de sistema, qué hace, qué no hace, limitaciones conocidas, quién supervisa), revisión del modelo de consentimiento informado actual del hospital para incorporar la información sobre los sistemas de IA utilizados, proceso de consentimiento específico para la telemedicina (requisitos legales adicionales que establece el Real Decreto 13/2022 y la jurisprudencia del TS), gestión de los pacientes que no quieren ser atendidos con apoyo de IA (derecho a negarse, alternativas que debe ofrecer el hospital) y documentación del consentimiento en la historia clínica digital.

3. RGPD y protección de datos de salud en el hospital: Los datos de salud son datos de categoría especial que requieren máxima protección. Diseña el sistema de cumplimiento. Incluye: bases legales para el tratamiento de datos de salud en el contexto hospitalario (asistencia sanitaria como base legal principal, investigación médica, gestión administrativa), Evaluación de Impacto en Protección de Datos (EIPD) obligatoria para el sistema de IA clínica y para la historia clínica electrónica, registro de actividades de tratamiento del hospital (qué datos, para qué, quién los trata, cuánto tiempo se conservan, con quién se comparten), protocolo de respuesta ante los derechos de los pacientes (acceso, rectificación, supresión, portabilidad de la historia clínica, limitación del tratamiento) y gestión de los proveedores tecnológicos que tratan datos de salud (contratos de encargo del tratamiento con el proveedor del HCE, del sistema de IA, del laboratorio externo).

4. Regulación MDR de los sistemas de IA como producto sanitario: El sistema de IA diagnóstica del hospital es un producto sanitario regulado. Explica: clasificación del sistema de IA diagnóstica del hospital según el MDR (clase de riesgo según el Anexo VIII del MDR, organismos notificados en España) y obligaciones del fabricante vs. del hospital usuario, obligaciones del hospital como operador de un producto sanitario de IA (formación de los usuarios, mantenimiento del equipo, reporte de incidentes al fabricante y a la AEMPS), proceso de reporte de incidentes graves relacionados con el sistema de IA a la Agencia Española de Medicamentos y Productos Sanitarios (AEMPS), el Reglamento de IA de la UE (AI Act) y su clasificación de los sistemas de IA médica como sistemas de alto riesgo (obligaciones adicionales para el hospital y para el fabricante) y cómo gestionar una auditoría de la AEMPS sobre el uso del sistema de IA.

5. Responsabilidad penal en el ámbito sanitario: Además de la responsabilidad civil, el error médico puede tener consecuencias penales. Explica: tipos penales relevantes en el ámbito sanitario en España (imprudencia médica del artículo 152 CP, omisión del deber de socorro, delitos contra la intimidad por vulneración de datos de salud), análisis de la responsabilidad penal de las personas jurídicas en el sector sanitario (artículo 31bis CP: cómo puede ser penalmente responsable el hospital como empresa), diferencia entre error médico excusable y la imprudencia penal (el estándar de la lex artis), programa de compliance penal para hospitales (código ético, canal de denuncias, formación de los profesionales sanitarios) y protocolo de actuación del hospital ante una denuncia penal de un paciente o sus familiares.

6. Contratos y responsabilidad en la cadena de telemedicina: La telemedicina crea nuevas relaciones contractuales. Diseña el marco contractual. Incluye: contrato entre el hospital y el médico que realiza consultas de telemedicina (médico en plantilla vs. médico colaborador externo, responsabilidad en caso de error en la teleconsulta), contrato con la plataforma tecnológica de telemedicina (quién es responsable si la plataforma falla durante una consulta urgente, SLAs mínimos, responsabilidad por brecha de seguridad de los datos), obligaciones de información previa al paciente antes de la teleconsulta (derechos del paciente, limitaciones de la telemedicina, cuándo debe acudir a urgencias presenciales), jurisdicción aplicable cuando el médico está en una comunidad autónoma diferente al paciente y registro de la actividad de telemedicina en el registro de prestaciones del hospital.

7. Gestión de reclamaciones y procedimientos de responsabilidad: Diseña el protocolo de gestión cuando un paciente presenta una reclamación. Incluye: proceso de gestión interna de la reclamación (quién la recibe, quién investiga, plazos de respuesta, documentación que hay que preservar), comunicación con el paciente durante el proceso de reclamación (qué decir, qué no decir, cómo evitar que se convierta en una reclamación judicial), relación con la compañía de seguros de responsabilidad civil del hospital (cuándo notificar, qué información facilitar, qué decisiones tomar conjuntamente), proceso de mediación como alternativa a la vía judicial (Ley de Mediación 5/2012) y preparación del expediente de defensa si la reclamación llega a los tribunales o a la vía administrativa de la consejería de salud.

Incluye modelos de cláusulas de consentimiento informado para IA, plantillas de registro de actividades RGPD para hospitales y referencias a la normativa aplicable (LOPDGDD, RGPD, MDR, AI Act, Ley de Cohesión y Calidad del SNS). Todo comprensible para el equipo directivo del hospital sin formación jurídica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Marco legal de responsabilidad, RGPD y MDR para hospitales que usan IA clínica',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al paciente y soporte en servicios de salud con IA',
                'description'      => 'Diseña sistemas de atención al paciente que combinen empatía humana e inteligencia artificial para gestionar consultas, reducir tiempos de espera y mejorar la experiencia sanitaria.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia del paciente y atención al cliente en el sector sanitario con profundo conocimiento de las particularidades de comunicarse con personas enfermas, angustiadas o en situaciones de vulnerabilidad. Conoces los protocolos de comunicación empática en salud, el marco legal de la atención al paciente en España (Ley 41/2002 de Autonomía del Paciente), y cómo equilibrar la eficiencia operativa con el trato humano que merecen los pacientes.

Contexto del hospital:
- Hospital privado con 180 camas y 35.000 visitas ambulatorias anuales
- Canales actuales de atención al paciente: teléfono (2 operadoras, tiempos de espera de 8 minutos de media), email con respuesta en 48 horas y atención presencial en admisión
- Principales motivos de contacto: solicitud de cita (45%), información sobre el proceso de admisión (20%), consultas sobre facturas y seguros (15%), seguimiento de resultados (12%), reclamaciones (8%)
- NPS actual: 32, objetivo superar 55
- Problema: los pacientes se quejan de la dificultad para contactar con el hospital y la falta de información durante el proceso asistencial

Desarrolla el sistema completo de atención al paciente:

1. Diseño del chatbot médico-administrativo: El chatbot puede resolver el 60% de las consultas sin intervención humana. Diseña el sistema. Incluye: árbol de conversación para los 10 flujos más frecuentes (solicitud de cita online, información sobre precios y seguros, preparación para procedimientos ambulatorios, dónde ir para cada tipo de visita, información sobre especialistas, resultados de análisis disponibles, instrucciones post-consulta, gestión de anulaciones y cambios de cita, información sobre ingresos y altas y canal de reclamaciones), cómo manejar las situaciones de urgencia o angustia en el chatbot (detección de palabras clave que indican emergencia médica y derivación inmediata a urgencias o al 112), cómo personalizar las respuestas usando el historial de visitas del paciente registrado y protocolo de escalación al agente humano cuando la situación lo requiere.

2. Protocolo de comunicación empática en salud: Comunicarse con pacientes enfermos requiere habilidades específicas. Diseña el protocolo. Incluye: los 5 principios de la comunicación empática en salud (escucha activa, validación emocional, información clara sin tecnicismos, respeto por la autonomía del paciente, cierre con próximos pasos claros), guión tipo para las llamadas de admisión (cómo recibir al paciente, qué preguntar, cómo explicar los pasos siguientes), protocolo de comunicación de malas noticias administrativas (retraso en la cita, test no cubierto por el seguro, precio superior al esperado), cómo manejar al paciente angustiado o agresivo en el teléfono y qué hacer cuando el paciente pregunta sobre su diagnóstico a la persona de atención al cliente (quién puede responder preguntas clínicas y quién no).

3. Gestión del proceso de admisión y alta: La admisión y el alta son los momentos más críticos de la experiencia del paciente. Diseña el proceso completo. Incluye: admisión anticipada digital (el paciente completa sus datos, firma los consentimientos y proporciona los datos de su seguro antes de llegar al hospital), proceso de recepción en el hospital (tiempo máximo en el mostrador de admisión: 3 minutos), comunicación al paciente sobre los pasos de su proceso asistencial (cuánto esperará, quién le atenderá, dónde tiene que ir en cada momento), proceso de alta (instrucciones post-consulta o post-intervención en papel y digital, cómo recoger los resultados, cuándo y cómo contactar si hay complicaciones) y seguimiento post-alta mediante SMS o email para comprobar la evolución del paciente.

4. Gestión de las reclamaciones sanitarias: Las reclamaciones en salud tienen una carga emocional muy alta. Diseña el protocolo. Incluye: proceso de recepción y registro de la reclamación (todos los canales: buzón físico, email, teléfono, app, hoja de reclamaciones oficial), clasificación de la reclamación según su naturaleza (asistencial, administrativa, de trato, de instalaciones) y su urgencia, proceso de investigación de la reclamación (quién la investiga, en qué plazo, qué documentación se revisa), respuesta al paciente (en qué plazo, en qué formato, qué información incluir, cómo disculparse sin admitir negligencia) y cómo usar los datos de reclamaciones para mejorar los procesos del hospital y reducir las causas que las generan.

5. Sistema de información al paciente durante su proceso asistencial: El paciente angustiado necesita información constante. Diseña el sistema. Incluye: comunicaciones automáticas durante el proceso asistencial (confirmación de cita, recordatorio 48 horas antes con instrucciones de preparación, notificación de que los resultados están disponibles, encuesta de satisfacción post-visita), sistema de información en tiempo real en las salas de espera (tiempo estimado de espera actualizado cada 5 minutos, información sobre el médico que le atenderá, instrucciones específicas para su tipo de visita), mensajería segura entre el paciente y el equipo médico-administrativo dentro de la app del hospital (para preguntas no urgentes) y protocolo de comunicación cuando hay retrasos imprevistos que afectan a la agenda del paciente.

6. Formación del equipo de atención al paciente: La calidad de la atención depende de las personas. Diseña el programa de formación. Incluye: competencias clave del personal de atención al paciente en un hospital privado (comunicación empática, conocimiento de los servicios del hospital, conocimiento básico de los seguros más habituales, gestión del estrés propio en un entorno emocionalmente exigente), programa de formación inicial de 5 días para nuevos incorporados, formación continua trimestral (casos difíciles de los últimos meses, novedades en los procesos del hospital, feedback de las encuestas de satisfacción), sistema de supervisión y coaching para el equipo (escucha de llamadas, role-playing de situaciones difíciles) y gestión del bienestar del equipo de atención al paciente (el burnout empático en personas que atienden a personas enfermas).

7. Métricas de experiencia del paciente en el sector sanitario: Define el sistema de medición completo. Incluye: NPS transaccional post-consulta y NPS relacional post-alta, CSAT del proceso de admisión y del proceso de atención telefónica, tiempo medio de respuesta por canal (teléfono: tiempo de espera hasta respuesta; email: tiempo de primera respuesta; app: tiempo de respuesta al mensaje del paciente), tasa de resolución en el primer contacto (cuántas consultas se resuelven sin necesidad de volver a llamar o escribir), número de reclamaciones por tipo y tendencia mensual y benchmark de estos indicadores con el sector sanitario privado español y europeo. Para cada métrica: la frecuencia de seguimiento y la acción a tomar si se deteriora.

Proporciona scripts de comunicación empática, plantillas de emails transaccionales para el sector salud y guión de formación para el equipo de atención al paciente. Todo cumpliendo con la Ley de Autonomía del Paciente y el RGPD.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Mejora de la experiencia y satisfacción del paciente en hospital privado con IA y comunicación empática',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor freelance de salud digital y telemedicina con IA',
                'description'      => 'Construye una práctica independiente de consultoría en transformación digital sanitaria, telemedicina y healthtech usando IA para entregar proyectos de alto valor a hospitales y startups de salud.',
                'prompt_content'   => <<<'EOT'
Eres un consultor independiente especializado en la transformación digital del sector sanitario con experiencia trabajando con hospitales, clínicas, startups de healthtech y administraciones públicas de salud. Tu trabajo abarca la consultoría de estrategia digital para organizaciones sanitarias, el asesoramiento a startups de tecnología médica y la formación de equipos clínicos en el uso de herramientas digitales.

Situación de tu práctica freelance:
- Consultor independiente con 6 años de experiencia tras salir de una consultora de salud digital
- Clientes actuales: 3 hospitales privados, 2 startups de healthtech y 1 consejería de salud autonómica
- Ingresos: 95.000 euros anuales, objetivo de 160.000 en 18 meses
- Servicios actuales: proyectos de transformación digital (HCE, telemedicina), due diligence de inversión en healthtech y formación de directivos sanitarios
- Limitación principal: solo puedes llevar 3-4 proyectos simultáneos de forma individual
- Mayor oportunidad: el mercado de startups de healthtech en busca de asesoramiento estratégico y regulatorio

Desarrolla el sistema completo para escalar tu práctica de consultoría en salud digital:

1. Posicionamiento y especialización de la práctica: Para llegar a 160.000 euros necesitas posicionarte como el referente en un nicho muy concreto. Diseña tu estrategia. Incluye: los 3 segmentos de servicio más rentables y escalables en salud digital (asesoramiento a startups de healthtech vs. transformación digital de hospitales vs. política sanitaria digital) y cuál priorizar según tus competencias y el potencial del mercado, el nicho específico donde tienes una ventaja insuperable (regulación MDR + estrategia comercial para MedTech, o implementación de IA clínica en hospitales, o digitalización de la atención primaria), cómo comunicar ese posicionamiento ultra-específico en LinkedIn y en las comunidades del ecosistema healthtech español y por qué una especialización más estrecha genera más negocio, no menos.

2. IA como multiplicador de tu capacidad: La IA te permite hacer el trabajo de un equipo siendo solo. Diseña tu stack de herramientas. Incluye: uso de Claude para el análisis de la documentación regulatoria (MDR, AI Act, normativa autonómica de telemedicina) y síntesis de los aspectos relevantes para cada proyecto, automatización del análisis comparativo de plataformas de telemedicina o HCE (generación de tablas de comparativa con IA a partir de las webs y documentación de los proveedores), generación del primer borrador de los informes de due diligence de startups healthtech a partir de la documentación pública de la empresa y de las respuestas al cuestionario, uso de IA para mantenerte actualizado en la regulación y en las tendencias del sector healthtech (resúmenes semanales de las novedades regulatorias, análisis de los últimos informes del sector) y cómo mantener la confidencialidad de los datos de tus clientes cuando usas herramientas de IA en la nube.

3. Diseño de servicios para el mercado healthtech: El mercado de startups de healthtech tiene mucha demanda de asesoramiento especializado. Diseña el portfolio de servicios. Incluye: servicio de advisory regulatorio para startups MedTech (estrategia de certificación CE MDR, clasificación del producto, relación con organismos notificados, precio: 3.000-5.000 euros/mes en retainer), due diligence de salud digital para fondos de venture capital que invierten en healthtech (análisis regulatorio, validación clínica, estrategia de reembolso, precio: 8.000-15.000 euros por proceso), formación intensiva para equipos directivos de hospitales en transformación digital sanitaria (taller de 2 días, precio: 6.000-10.000 euros) y informe de mercado healthtech para inversores o empresas farmacéuticas que quieren entrar en el sector digital (precio: 12.000-20.000 euros).

4. Captación de clientes en el ecosistema healthtech: El sector healthtech tiene canales de captación muy específicos. Diseña la estrategia. Incluye: presencia activa en el ecosistema healthtech español (South Summit Health, 4YFN Health, Barcelona Health Hub, HiT, comunidades de Salud Digital de las CCAA), estrategia de LinkedIn específica para el sector healthtech (qué contenido resonates con los CTOs de startups MedTech y con los directores médicos de hospitales), cómo construir tu reputación como experto regulatorio MDR en el ecosistema (webinars gratuitos sobre novedades del MDR, artículos en publicaciones del sector como HIMSS Europe), programa de referidos con otros asesores del ecosistema (asesores de inversión en healthtech, despachos de abogados sanitarios, sociedades médicas) y cómo aparecer en los rankings de asesores de healthtech en España.

5. Modelo de advisory para startups: El retainer mensual con startups es el modelo de mayor recurrencia. Diseña el servicio. Incluye: estructura del retainer mensual de advisory (qué incluye: horas de disponibilidad, revisión de documentación regulatoria, participación en reuniones clave, intro a tu red de inversores y clínicos), cómo escalar a 6-8 startups en retainer simultáneamente sin perder calidad (protocolo de gestión del tiempo, reuniones quincenales estructuradas, canal de mensajería para preguntas urgentes), cómo seleccionar a qué startups aceptar como clientes (criterios de calidad del equipo, potencial del producto, disponibilidad de financiación para el advisory), modelo de éxito compartido (equity simbólico como complemento al retainer en startups early-stage) y proceso de offboarding cuando una startup ha madurado y ya no necesita tu asesoramiento intensivo.

6. Due diligence de salud digital para inversores: El asesoramiento a fondos de inversión tiene tickets altos y proyectos más cortos. Diseña el servicio. Incluye: estructura del informe de due diligence técnico-regulatoria para una startup healthtech (análisis del producto, validación clínica existente, situación regulatoria, estrategia de reembolso, riesgos regulatorios, equipo técnico, análisis de la competencia), proceso de trabajo con el fondo (quién te contrata, qué acceso te dan a la startup investigada, en qué plazo entregas, qué formato tiene el informe), cómo posicionarte ante los principales fondos de venture capital especializados en healthtech en España y Europa (K Fund, Seaya, Balderton, Sofinnova, Heal Capital) y cómo gestionar los conflictos de interés cuando ya eres advisor de la startup que el fondo quiere analizar.

7. Gestión administrativa y financiera de la práctica: Con ingresos de 95.000 euros escalando a 160.000 euros, la gestión de la práctica requiere más estructura. Diseña el sistema. Incluye: estructura fiscal óptima para un consultor independiente de este nivel de ingresos (autónomo regular vs. autónomo societario vs. sociedad limitada, con análisis del ahorro fiscal de cada opción), modelo de facturación para los diferentes tipos de servicio (retainer mensual: factura el 1 del mes; proyecto: anticipo del 30% al inicio y el 70% a la entrega; formación: pago anticipado), política de precios y revisión anual de tarifas (cuándo y cómo subir los precios a los clientes actuales), gestión del tiempo entre proyectos, desarrollo de negocio, producción de contenido y formación continua y cuándo tiene sentido construir un equipo (primer colaborador a contratar, cómo gestionarlo, qué proyectos le delegar).

Proporciona plantillas de propuesta para los distintos servicios, system prompt para Claude como asistente de análisis regulatorio MDR y plan de acción para los primeros 90 días de la nueva estrategia. Todo adaptado al ecosistema healthtech en España y Europa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Escalar una práctica freelance de consultoría en salud digital y healthtech con IA',
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
