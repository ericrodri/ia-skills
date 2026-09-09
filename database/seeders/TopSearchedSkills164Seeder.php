<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills164Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing farmacéutico',
                'description'      => 'Estrategias de marketing para medicamentos con restricciones legales estrictas, dirigidas a médicos, farmacéuticos y pacientes dentro del marco legal del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing farmacéutico con más de doce años de experiencia en laboratorios farmacéuticos multinacionales y nacionales, con conocimiento profundo de la regulación publicitaria de medicamentos en España y la Unión Europea.

Necesito desarrollar una estrategia de marketing para un medicamento de prescripción (EFP) y para un producto de venta libre (OTC) en el mercado español, entendiendo las restricciones legales que condicionan cada canal y mensaje.

Ayúdame a construir la estrategia completa:

1. **Marco legal de la publicidad farmacéutica en España**: explica el Real Decreto 1416/1994 sobre publicidad de medicamentos, las diferencias entre la publicidad dirigida a profesionales sanitarios y la publicidad de OTC al público general, qué está prohibido en cada caso, y el papel del Ministerio de Sanidad y la Agencia Española de Medicamentos y Productos Sanitarios (AEMPS) en la autorización de materiales.

2. **Marketing de medicamentos de prescripción (Rx)**: al no poder comunicar directamente al paciente, el marketing Rx se centra en los prescriptores. Define las estrategias de detailing médico (visita médica), los programas de formación médica continuada, los congresos y simposios científicos, y las publicaciones en revistas médicas indexadas como palancas de marketing dentro de los límites del código ético de la industria (código FARMAINDUSTRIA).

3. **Marketing OTC (medicamentos sin receta)**: los productos OTC sí pueden publicitarse al público. Define la estrategia de comunicación en medios masivos: TV, digital, punto de venta (farmacia), y las restricciones específicas que aplican (no se puede hacer referencia a una enfermedad grave, no se pueden usar prescriptores o testimonios de pacientes de forma engañosa). Los canales digitales más eficaces para OTC.

4. **Marketing en el punto de venta (farmacia)**: la farmacia es el canal de distribución clave para OTC y suplementos. Define la estrategia de sell-in (relación con el farmacéutico como prescriptor activo) y sell-out (merchandising en el lineal, materiales PLV, programas de fidelización con la farmacia), y cómo la relación con los delegados de farmacia difiere de la visita médica tradicional.

5. **Marketing digital en el sector farmacéutico**: las restricciones legales aplican también al entorno digital. Explica qué tipo de contenidos puede publicar un laboratorio en redes sociales, cómo gestionar los informes de seguridad (farmacovigilancia) que llegan a través de redes sociales, y las particularidades de la publicidad programática para productos farmacéuticos (las plataformas tienen restricciones adicionales).

6. **Patient support programs y engagement del paciente**: en enfermedades crónicas, los laboratorios pueden desarrollar programas de apoyo al paciente que no constituyen publicidad directa del medicamento: apps de adherencia, líneas de información a pacientes, programas de educación sobre la enfermedad. Cómo diseñar estos programas dentro del marco legal y ético.

7. **Medical Affairs y la relación con los líderes de opinión**: el departamento de Medical Affairs gestiona las relaciones con los Key Opinion Leaders (KOL), la investigación post-comercialización, y los programas de formación científica. Define la diferencia entre marketing y Medical Affairs, y cómo colaboran sin comprometer la independencia científica.

8. **Lanzamiento de un nuevo medicamento**: el lanzamiento de un producto farmacéutico es uno de los procesos de marketing más complejos. Define las fases: pre-lanzamiento (formación al equipo de ventas, posicionamiento, materiales), lanzamiento (estrategia de cascada desde especialistas hospitalarios a médicos de atención primaria), y post-lanzamiento (seguimiento de la adopción, ajuste de mensajes).

9. **Métricas del marketing farmacéutico**: los KPIs del sector son diferentes a los del marketing de consumo: share of voice frente a competidores, cuota de mercado por indicación, NRx (nuevas prescripciones) y TRx (total prescripciones), tasa de conversión de muestras a prescripción activa, y ROI de la visita médica frente a otros canales.

10. **Tendencias en el marketing farmacéutico post-COVID**: la pandemia aceleró la digitalización de la visita médica. Define las implicaciones del modelo híbrido (visita presencial + edetailing + webinars científicos), el papel de las plataformas especializadas en HCP (profesionales sanitarios) como Doximity o Medscape, y el futuro del detailing en un entorno donde los médicos tienen menos tiempo para atender delegados.

Responde con referencias a normativa española específica, ejemplos de estrategias reales del sector, y señala claramente las líneas rojas que nunca deben cruzarse en el marketing farmacéutico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing farmacéutico dentro del marco legal y ético del sector',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software para ensayos clínicos',
                'description'      => 'Sistemas de gestión de datos de ensayos clínicos (EDC, CTMS), validación bajo 21 CFR Part 11 y los requisitos de calidad del software médico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en tecnología para la investigación clínica, con experiencia en el desarrollo e implantación de sistemas EDC (Electronic Data Capture), CTMS (Clinical Trial Management Systems) y plataformas de randomización, en entornos regulados por FDA, EMA y las ICH Good Clinical Practice guidelines.

Estoy desarrollando o evaluando software para la gestión de datos de un ensayo clínico de fase III y necesito entender todos los requisitos técnicos, regulatorios y de calidad que aplican.

Guíame a través del ecosistema completo:

1. **Ecosistema de sistemas en un ensayo clínico**: mapea todos los sistemas de software que intervienen en un ensayo clínico moderno: EDC para la captura de datos del paciente, CTMS para la gestión operativa del ensayo, IVRS/IWRS para la randomización y gestión del fármaco en investigación, eTMF para el master file del ensayo, RTSM para el suministro de medicamento, y las integraciones entre ellos.

2. **Regulación 21 CFR Part 11 (FDA) y Annex 11 (EMA)**: estas son las normativas que rigen los registros electrónicos y las firmas electrónicas en la investigación clínica. Explica los requisitos concretos: audit trail completo e inalterable, firmas electrónicas con autenticación de dos factores, validación del sistema, controles de acceso basados en roles, y cómo se demuestra el cumplimiento ante un inspector regulatorio.

3. **Validación de sistemas informáticos (CSV)**: el Computer System Validation es el proceso que demuestra que el sistema hace lo que se supone que debe hacer de forma consistente y fiable. Describe el ciclo de vida de validación para un EDC: User Requirements Specification (URS), Functional Specification (FS), Design Qualification (DQ), Installation Qualification (IQ), Operational Qualification (OQ), Performance Qualification (PQ), y la documentación que genera cada fase.

4. **Diseño del CRF electrónico (eCRF)**: el cuaderno de recogida de datos es el corazón del EDC. Define las mejores prácticas para el diseño de formularios: estructura del formulario según visitas y procedimientos del protocolo, validaciones de rango y lógica (edit checks), gestión de datos faltantes y desviaciones del protocolo, y los estándares de datos CDISC (CDASH para la recogida, SDTM para el archivo).

5. **Gestión de queries y data cleaning**: la calidad de los datos del ensayo determina la credibilidad de los resultados. Define el proceso de identificación y resolución de queries (inconsistencias en los datos), los roles de data manager y monitor de ensayos clínicos en este proceso, las métricas de calidad de datos (query rate, resolution time), y cómo se realiza el database lock previo al análisis estadístico.

6. **Integración con datos de dispositivos y wearables**: los ensayos clínicos modernos integran datos de dispositivos médicos (ECG electrónico, glucómetros, wearables de actividad). Describe los estándares de integración (HL7 FHIR para datos clínicos), los retos de la integración de datos en tiempo real en entornos regulados, y cómo se garantiza la integridad y trazabilidad de estos datos.

7. **Seguridad y protección de datos en investigación clínica**: los datos de los pacientes en ensayos clínicos están protegidos por RGPD en Europa y por regulaciones específicas de investigación. Define la arquitectura de seguridad: pseudonimización de datos del paciente, controles de acceso por centro investigador, gestión del consentimiento informado electrónico (eConsent), y los requisitos de retención de datos (típicamente 15-25 años tras el fin del ensayo).

8. **Implantación de un EDC en un ensayo multicéntrico**: un ensayo con 50 centros en 10 países requiere un proceso de implantación muy estructurado. Describe las fases: configuración del sistema según el protocolo, formación a investigadores y coordinadores de cada centro, soporte durante el reclutamiento, y el proceso de desmantelamiento del sistema al cierre del ensayo.

9. **Tendencias tecnológicas en investigación clínica**: el sector está evolucionando hacia modelos descentralizados (DCT: Decentralized Clinical Trials). Explica cómo la telemedicina, las visitas domiciliarias y los datos recogidos por pacientes en sus dispositivos están cambiando la arquitectura de los sistemas de ensayos, y los retos regulatorios de este nuevo paradigma.

10. **Evaluación y selección de un EDC**: si una CRO o un laboratorio debe elegir entre Medidata Rave, Oracle Clinical One, Veeva Vault EDC o una solución de código abierto como OpenClinica, cuáles son los criterios de evaluación, cómo se estructura el proceso de RFP en el sector, y qué peso tienen el cumplimiento regulatorio, la facilidad de uso y el coste total de propiedad.

Responde con nivel técnico alto, referencias a estándares y normativas específicas, y experiencias concretas del proceso de validación y uso en entornos de investigación clínica real.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollo y validación de software para gestión de datos en ensayos clínicos regulados',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para apps de salud del paciente',
                'description'      => 'Diseño de apps para pacientes con enfermedades crónicas considerando accesibilidad, carga cognitiva y generación de adherencia terapéutica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX especializado en salud digital con experiencia en el diseño de aplicaciones para pacientes con enfermedades crónicas (diabetes, hipertensión, oncología, EPOC, salud mental), con conocimiento de los principios de diseño accesible y de los marcos regulatorios para software médico.

Necesito diseñar una aplicación móvil para pacientes con diabetes tipo 2 que les ayude a gestionar su tratamiento, monitorizar sus niveles de glucosa y mantener adherencia a las pautas de su médico.

Guíame a través del proceso de diseño completo con foco en las particularidades de la salud:

1. **Research con pacientes crónicos**: investigar con pacientes tiene complejidades éticas y prácticas específicas. Define el proceso de research: cómo reclutar participantes con condiciones de salud (con aprobación de comité ético cuando corresponda), los métodos adecuados (entrevistas en profundidad, diarios de paciente, observación contextual en el hogar), y cómo manejar la carga emocional de investigar con personas que conviven con una enfermedad grave.

2. **Perfil del paciente de diabetes tipo 2**: el paciente típico de diabetes tipo 2 tiene características muy concretas: edad media-alta, múltiples comorbilidades, posiblemente baja alfabetización digital, tratamiento con varios fármacos simultáneos, y una relación compleja con su enfermedad (negación, fatiga del paciente, dificultad para mantener hábitos). Cómo impactan estas características en las decisiones de diseño.

3. **Arquitectura de la app y jerarquía de funcionalidades**: define la estructura de navegación de la app priorizando las funcionalidades más críticas para la seguridad del paciente (registro de glucemia, dosis de insulina, hipoglucemias) frente a las funcionalidades de valor añadido (diario de alimentación, actividad física, comunicación con el equipo médico). Cómo balancear completitud con simplicidad.

4. **Diseño de los flujos de registro de datos**: registrar la glucemia, la dosis de insulina y la comida es una tarea que el paciente hace varias veces al día durante años. Diseña estos flujos con el objetivo de minimizar la fricción: cuántos taps son necesarios, cómo reducir los errores de entrada de datos (confundir unidades, registrar la hora incorrecta), y cuándo usar integración automática con el glucómetro o el medidor de glucosa continua (CGM).

5. **Visualización de datos de salud para no-expertos**: el paciente ve sus datos de glucemia durante semanas o meses y necesita entender tendencias, no solo valores puntuales. Define los principios de visualización para datos de salud: cuándo usar gráficos de línea vs. colores de semáforo, cómo mostrar el tiempo en rango (TIR) de forma comprensible, y cómo evitar la ansiedad que genera ver datos de salud sin contexto.

6. **Adherencia y motivación a largo plazo**: las apps de salud tienen tasas de abandono altísimas después de las primeras semanas. Define las estrategias de diseño para sostener el uso a largo plazo: notificaciones inteligentes que no agotan al paciente, momentos de celebración de logros (reducción de la HbA1c, días sin hipoglucemias), y el delicado equilibrio entre recordar y presionar.

7. **Comunicación médico-paciente dentro de la app**: la comunicación asíncrona entre el paciente y su equipo de diabetes (endocrinólogo, enfermera educadora) dentro de la app tiene un potencial enorme pero también riesgos. Define el diseño de este canal: qué tipo de mensajes son apropiados, cómo gestionar la expectativa de respuesta, y los casos en los que el sistema debe redirigir urgentemente al paciente a urgencias en lugar de al chat con su médico.

8. **Accesibilidad obligatoria en salud**: una app de salud que no es accesible puede ser discriminatoria y legalmente problemática. Define los requisitos mínimos de accesibilidad para una app de diabetes: soporte completo para VoiceOver/TalkBack para pacientes con retinopatía diabética (una complicación frecuente), tamaños de texto ajustables, contraste mínimo, y las pruebas de accesibilidad que deben realizarse antes del lanzamiento.

9. **Privacidad y consentimiento en apps de salud**: los datos de salud son datos sensibles con protección reforzada bajo el RGPD. Define el diseño del onboarding de consentimiento: cómo explicar de forma comprensible qué datos se recogen y para qué, el diseño de los controles de privacidad, y cómo gestionar la revocación del consentimiento sin perder el historial del paciente que él mismo quiere conservar.

10. **Evaluación clínica y marcado CE**: si la app tiene funcionalidades de ayuda a la decisión clínica (recomendar ajuste de dosis de insulina), puede ser un Software as a Medical Device (SaMD) que requiere marcado CE bajo el Reglamento MDR 2017/745. Explica cómo el diseño del producto debe adaptarse a este escenario: los estudios de usabilidad requeridos (IEC 62366), la evaluación del riesgo (ISO 14971), y el impacto en el proceso de diseño.

Responde con principios de diseño concretos, referencias a patrones de apps de salud reconocidas (mySugr, Dexcom, One Drop), y las decisiones de diseño que tienen mayor impacto en la adherencia terapéutica real.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño UX de apps de salud para pacientes con enfermedades crónicas con foco en adherencia',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Medical sales: el visitador médico moderno',
                'description'      => 'El rol del representante de ventas farmacéutico ha cambiado radicalmente con los nuevos canales digitales y el compliance en la interacción con profesionales sanitarios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas farmacéuticas con quince años de experiencia liderando equipos de visitadores médicos en laboratorios multinacionales en España, con experiencia en la transformación digital del modelo de ventas y en el cumplimiento del código ético de FARMAINDUSTRIA.

El rol del representante de ventas farmacéutico (visitador médico) está viviendo una transformación radical. Los médicos tienen menos tiempo, los canales digitales han ganado peso, y las regulaciones de compliance limitan las interacciones. Necesito entender el modelo de ventas moderno en este sector.

Desarrolla una guía completa del medical sales contemporáneo:

1. **La evolución del visitador médico**: describe cómo ha cambiado el rol desde el modelo clásico de detailing presencial hasta el modelo híbrido actual. Los factores que lo han transformado: reducción del tiempo de atención por parte de los médicos, restricciones de acceso en los centros hospitalarios post-COVID, digitalización de la información médica, y la mayor sofisticación del prescriptor que ya conoce el producto antes de recibir la visita.

2. **El modelo de ventas híbrido (presencial + digital)**: el representante moderno combina visitas presenciales con interacciones digitales (edetailing por videollamada, contenido científico digital, webinars con especialistas). Define cuándo usar cada canal, cómo segmentar a los médicos según su preferencia de canal, y cómo construir un plan de territorio que maximice el impacto con el tiempo disponible.

3. **Código ético de FARMAINDUSTRIA**: las interacciones con profesionales sanitarios están reguladas por el código deontológico de la industria. Explica las restricciones clave: límites en los obsequios y atenciones, regulación de la financiación de médicos a congresos, transparencia en las relaciones económicas con KOL, y las consecuencias del incumplimiento (sanciones internas y daño reputacional).

4. **Técnicas de detailing científico**: la visita médica moderna se basa en argumentos clínicos, no en relaciones personales. Define la estructura de una visita de alto impacto: la apertura con una pregunta de diagnóstico, la presentación de la evidencia clínica adaptada al perfil del médico, el manejo de objeciones científicas, y el cierre orientado al tipo de paciente en el que el médico debería pensar en prescribir el producto.

5. **Segmentación y targeting de prescriptores**: no todos los médicos tienen el mismo potencial de prescripción. Define el modelo de segmentación: por potencial de prescripción (basado en datos de auditorías de mercado como IQVIA), por actitud hacia el producto (adopter, neutro, reticente), y por canal preferido. Cómo usa el representante estos datos para priorizar su actividad.

6. **CRM y gestión de la información de territorio**: el representante moderno gestiona su territorio a través de un CRM farmacéutico (Veeva CRM es el estándar del sector). Define qué información debe registrarse en cada visita, cómo usar los datos de CRM para preparar la siguiente interacción, y las métricas de actividad que el manager sigue para evaluar el rendimiento del equipo.

7. **Hospital selling y el acceso al entorno hospitalario**: vender en el hospital es radicalmente diferente a la atención primaria. Explica el proceso de inclusión de un fármaco en la Guía Farmacoterapéutica del hospital, la negociación con las comisiones de farmacia, la relación con los farmacéuticos hospitalarios como actores clave, y los documentos de evaluación farmacoeconómica que el representante de hospitalaria debe manejar.

8. **Formación científica continua del representante**: el médico espera que el representante tenga un nivel científico alto. Define el programa de formación que un laboratorio debe proporcionar a su equipo comercial: conocimiento profundo de la patología y de la evidencia clínica del producto, formación en competidores y sus diferencias, y cómo el representante mantiene su actualización científica en un campo que evoluciona constantemente.

9. **Métricas de rendimiento del equipo comercial**: los KPIs del equipo de ventas farmacéutico van más allá de las visitas realizadas. Define el cuadro de mando: NRx y TRx por territorio, share of mind en las encuestas de posicionamiento, cobertura y frecuencia de visitas por segmento, y cómo se relacionan las métricas de actividad con los resultados de ventas en un entorno donde la prescripción tiene un lag de semanas o meses.

10. **El futuro del representante farmacéutico**: el rol va a seguir transformándose. Describe las tendencias que más impactarán en los próximos cinco años: la inteligencia artificial para personalizar el mensaje científico a cada médico, los medical science liaisons (MSL) como perfil más científico, el modelo omnicanal con el médico como orquestador de su propia experiencia de información, y las habilidades que el representante del futuro deberá desarrollar para seguir siendo relevante.

Responde con experiencias concretas del sector farmacéutico español, las mejores prácticas de los laboratorios que mejor han ejecutado la transformación del modelo comercial, y los errores que hay que evitar en la transición al modelo híbrido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Modelo de ventas médicas moderno combinando visita presencial, digital y compliance farmacéutico',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Digital therapeutics y SaMD',
                'description'      => 'Productos de software como dispositivo médico que redefinen el tratamiento: decisiones regulatorias, estudios clínicos y product management bajo FDA y MDR.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en digital therapeutics (DTx) y Software as a Medical Device (SaMD) con experiencia en llevar productos desde el concepto hasta la aprobación regulatoria bajo el Reglamento de Dispositivos Médicos europeo (MDR 2017/745) y el marco FDA para SaMD.

Estoy diseñando un digital therapeutic para el tratamiento de la depresión leve-moderada mediante terapia cognitivo-conductual digital (dCBT), y necesito entender el camino completo desde la idea hasta el mercado.

Guíame a través de todas las decisiones de producto en este entorno regulado:

1. **Taxonomía de DTx y SaMD**: ¿cuál es la diferencia entre una app de bienestar mental y un digital therapeutic? Explica la clasificación de SaMD según el nivel de riesgo (Clase I, IIa, IIb, III bajo MDR), cómo se determina la clase de riesgo de un DTx para depresión, y qué implica cada clase en términos de requisitos regulatorios y tiempo hasta el mercado.

2. **Marco regulatorio europeo (MDR 2017/745)**: el Reglamento de Dispositivos Médicos europeo ha aumentado significativamente las exigencias para los fabricantes. Describe los requisitos principales para un fabricante de SaMD: sistema de gestión de la calidad (ISO 13485), evaluación clínica, vigilancia post-comercialización, registro en EUDAMED, y la designación de un representante autorizado en Europa.

3. **Evidencia clínica requerida para un DTx**: a diferencia de las apps de wellness, un digital therapeutic debe demostrar eficacia y seguridad con evidencia clínica. Define los tipos de estudios que se requieren: estudios observacionales para establecer el perfil de seguridad, ensayos clínicos aleatorizados (RCT) para demostrar la eficacia frente a control activo o placebo, y cómo se dimensiona el ensayo (tamaño muestral, endpoints primarios y secundarios).

4. **Diseño del producto bajo restricciones regulatorias**: el producto de un DTx no puede iterar con la misma velocidad que una app de consumo, porque los cambios significativos requieren un nuevo proceso de evaluación. Define cómo estructurar el roadmap de producto: qué cambios son "cambios significativos" que requieren nueva evaluación regulatoria vs. mejoras menores, y cómo mantener la agilidad de desarrollo dentro de un ciclo de vida regulado.

5. **Gestión de riesgos según ISO 14971**: la norma ISO 14971 define el proceso de gestión de riesgos para dispositivos médicos. Aplícala al contexto de un DTx para depresión: identificación de los peligros (un algoritmo que detecta incorrectamente la mejoría del paciente cuando en realidad empeora, o que no detecta ideación suicida), estimación del riesgo, medidas de mitigación, y el nivel de riesgo residual aceptable.

6. **Usabilidad e IEC 62366**: la norma IEC 62366 establece los requisitos de ingeniería de usabilidad para dispositivos médicos, que van mucho más allá del UX design habitual. Describe el proceso de evaluación formativa y sumativa de usabilidad, los estudios con usuarios que deben documentarse, y cómo los hallazgos de usabilidad alimentan el análisis de riesgos.

7. **Modelo de negocio de los digital therapeutics**: los DTx tienen modelos de negocio complejos porque implican múltiples pagadores. Analiza las opciones: venta directa al paciente (bajo acceso, alta fricción), prescripción médica con reembolso público (el Santo Grial pero muy difícil de conseguir en España), venta a planes de salud y aseguradoras, y venta a empresas como beneficio de salud para empleados.

8. **Reembolso público de DTx en Europa**: Alemania es el país pionero con el modelo DiGA (Digitale Gesundheitsanwendungen), que permite el reembolso provisional de DTx mientras se genera evidencia. Compara este modelo con la situación en España (sin marco de reembolso específico todavía), el proceso de inclusión en prestación del SNS, y qué puede hacer un fabricante de DTx en España mientras el marco no existe.

9. **Farmacovigilancia y vigilancia post-comercialización para SaMD**: una vez el producto está en el mercado, las obligaciones de vigilancia continúan. Define el plan de vigilancia post-comercialización: recogida de eventos adversos, sistema de reporte a la autoridad competente (AEMPS en España), revisiones periódicas de seguridad (PSUR), y las actualizaciones del sistema de gestión de riesgos basadas en los datos post-market.

10. **El futuro del sector DTx**: el sector de los digital therapeutics tiene enormes promesas pero también muchos fracasos. Analiza las lecciones aprendidas de los primeros players (Pear Therapeutics entró en quiebra), los modelos que están demostrando viabilidad, y las condiciones necesarias para que un DTx sea comercialmente sostenible a largo plazo.

Responde con referencias a marcos regulatorios concretos, ejemplos de DTx que han conseguido aprobación y reembolso, y las decisiones de producto más críticas en el camino desde el concepto hasta el mercado en el sector de la salud digital.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Product management de digital therapeutics y software médico regulado bajo MDR y FDA',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento científico en pharma',
                'description'      => 'Retención de investigadores, científicos y perfiles regulatorios en un sector con alta competencia por talento especializado frente a la industria tech.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Recursos Humanos con doce años de experiencia en empresas del sector farmacéutico y biotecnología en España y Europa, especializado en la atracción, desarrollo y retención de perfiles científicos y regulatorios altamente especializados.

El sector farmacéutico tiene un problema de talento peculiar: necesita perfiles científicos de altísima especialización que compiten con la academia por los mejores investigadores y con la industria tech por los científicos de datos y los perfiles digitales. Al mismo tiempo, el conocimiento acumulado de cada persona es tan profundo y específico que la fuga de talento tiene costes extraordinarios.

Diseña una estrategia completa de gestión del talento científico:

1. **Mapa de perfiles críticos en pharma**: define los perfiles más difíciles de encontrar y retener en el sector: investigadores de I+D con especialización en áreas terapéuticas concretas (oncología, neurología, enfermedades raras), científicos regulatorios con experiencia en EMA y FDA, bioestadísticos para ensayos clínicos, data scientists para drug discovery, y los nuevos perfiles de bioinformática y modelización computacional. Cuál es el mercado de talento para cada uno.

2. **Employer branding para atraer científicos**: un laboratorio farmacéutico compite con la academia (donde los investigadores tienen más libertad científica), con startups de biotech (con más potencial de upside económico) y con la industria tech (con mejor cultura y condiciones de trabajo). Define la propuesta de valor empleadora diferenciada: el impacto en la salud de los pacientes, la solidez de los proyectos a largo plazo, los medios y recursos disponibles, y la posibilidad de ver los proyectos llegar a los pacientes.

3. **Captación de talento científico**: las fuentes de talento científico son diferentes a las del mercado general. Describe las estrategias de captación: colaboración con universidades y grupos de investigación, presencia en congresos científicos de referencia, programas de reclutamiento en doctorados industriales, relación con supervisores de tesis que recomiendan a sus mejores estudiantes, y el rol de LinkedIn para los perfiles regulatorios y los científicos más senior.

4. **Proceso de selección para perfiles técnico-científicos**: evaluar la competencia de un investigador de química medicinal o de un experto en regulatory affairs requiere un proceso muy diferente a la selección general. Define el proceso: quién participa en el panel (el responsable científico, el equipo técnico, RRHH), cómo se evalúa la profundidad técnica sin que el proceso sea excesivamente largo, y el papel de la publicación científica y las patentes en la evaluación del perfil.

5. **Onboarding de perfiles científicos**: un nuevo investigador tarda meses en ser productivo porque el conocimiento tácito acumulado en un laboratorio es enorme. Diseña un programa de onboarding científico: asignación de un mentor interno, acceso progresivo a proyectos, inmersión en las bases de datos y sistemas científicos internos, y los hitos que marcan la plena integración del nuevo científico en el equipo.

6. **Desarrollo de carrera científica vs. gestión**: el dilema del científico es inevitable: los mejores investigadores son promovidos a posiciones de gestión para las que no siempre tienen vocación ni aptitud. Define un modelo de doble trayectoria que permita a los científicos de alto rendimiento crecer económica y jerárquicamente sin forzarlos a abandonar el laboratorio: el rol del "Distinguished Scientist" o "Principal Scientist" como alternativa a la gestión.

7. **Retención a través de la autonomía científica**: los investigadores valoran la autonomía en sus proyectos más que casi cualquier otra cosa. Define cómo estructurar los proyectos para que el científico sienta propiedad sobre su área, el modelo de publicación de resultados (muchos laboratorios permiten publicar en revistas científicas), el tiempo dedicado a proyectos exploratorios propios, y la participación en decisiones científicas de alto nivel.

8. **Gestión del conocimiento y continuidad científica**: cuando un científico clave se va, se lleva consigo años de conocimiento tácito imposible de documentar. Define las estrategias para mitigar este riesgo: programas de mentoring inverso, documentación sistemática del proceso científico (no solo los resultados), solapamiento planificado en las transiciones, y la creación de comunidades de práctica internas.

9. **Compensación y beneficios para perfiles científicos**: los investigadores senior en pharma tienen estructuras de compensación complejas. Define el modelo: salario base competitivo con el mercado, bonus vinculado a hitos de los proyectos (IND filing, aprobación de fase 2), participación en beneficios generados por patentes, opciones sobre acciones en biotech, y los beneficios no económicos más valorados (tiempo para investigación propia, formación en congresos, acceso a bases de datos científicas premium).

10. **Diversidad e inclusión en el entorno científico**: el sesgo de género en las posiciones científicas de liderazgo es estadísticamente demostrable. Define las acciones concretas para mejorar la diversidad en equipos científicos: revisión de criterios de evaluación que favorecen la continuidad de carrera sin interrupciones (penaliza a quienes tomaron baja parental), mentoring específico para científicas en posiciones junior, métricas de seguimiento del pipeline de talento femenino, y los programas de referencia en la industria.

Responde con estrategias concretas, ejemplos de empresas del sector que han resuelto bien estos retos, y las métricas que permiten evaluar la salud del talento científico en una organización farmacéutica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de atracción, desarrollo y retención de talento científico en el sector farmacéutico',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas del desarrollo de medicamentos',
                'description'      => 'Coste de desarrollo de un fármaco, valoración de pipeline de I+D y mecanismos de financiación de la investigación clínica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero especializado en el sector farmacéutico y biotecnología, con experiencia en la valoración de activos de I+D, la estructuración de deals de licencia y colaboración, y la financiación de compañías de biotecnología desde la fase pre-clínica hasta la salida a bolsa o la adquisición.

Necesito comprender en profundidad la economía del desarrollo de medicamentos: por qué cuesta tanto, cómo se financia, y cómo se valoran los activos de una compañía farmacéutica o biotecnológica cuyo principal activo son candidatos en desarrollo clínico.

Desarrolla el análisis financiero completo:

1. **El coste real de desarrollar un medicamento**: el dato citado habitualmente es de 2.600 millones de dólares por nuevo fármaco aprobado (incluyendo el coste del capital y los fracasos). Explica de dónde viene esta cifra, cómo se distribuye entre las fases de desarrollo (pre-clínica, fase I, II y III), por qué el coste del capital tiene tanto peso, y la controversia académica sobre si esta cifra sobreestima el coste real.

2. **Tasas de éxito por fase de desarrollo**: la mayoría de los candidatos a medicamento fracasan. Define las probabilidades de éxito típicas por fase: el porcentaje de compuestos que pasan de pre-clínica a IND filing, de fase I a fase II, de fase II a fase III, y de fase III a aprobación regulatoria. Cómo varían estas tasas según el área terapéutica y cómo han evolucionado en los últimos veinte años.

3. **Valoración de pipeline farmacéutico**: el activo más valioso de una biotech es su pipeline de candidatos en desarrollo. Define el método de valoración risk-adjusted NPV (rNPV): cómo se proyectan los ingresos futuros del medicamento en caso de éxito, cómo se descuentan por las probabilidades de éxito de cada fase, y por qué la elección de la tasa de descuento tiene tanto impacto en la valoración final.

4. **Modelos de financiación de la I+D farmacéutica**: el desarrollo de un fármaco requiere cientos de millones de euros antes de generar ningún ingreso. Define los diferentes modelos de financiación según la etapa: capital riesgo en fases tempranas (venture capital especializado en life sciences), capital público (CDTI en España, EIC de la Comisión Europea, NIH grants), salida a bolsa (IPO en Nasdaq o en el Euronext Growth), y la financiación por deuda de royalties.

5. **Deals de licencia y colaboración (licensing deals)**: la mayoría de los medicamentos que comercializa un gran laboratorio farmacéutico fueron desarrollados inicialmente por una biotech pequeña. Explica la estructura típica de un deal de licencia: el upfront payment, los milestones de desarrollo (pagos ligados a los hitos de cada fase del ensayo), los milestones regulatorios (aprobación de FDA/EMA), los royalties sobre ventas, y cómo se negocia la asignación de los derechos por geografía.

6. **Deals de M&A farmacéutico**: los grandes laboratorios complementan su pipeline interno comprando biotechs. Define las características del M&A farmacéutico: la prima sobre el valor de mercado que se paga (habitualmente 40-80%), los mecanismos de contingent value rights (CVR) para alinear al vendedor con el éxito del desarrollo post-adquisición, y el proceso de due diligence científica y regulatoria que precede a la adquisición.

7. **Economía de los medicamentos huérfanos**: los medicamentos para enfermedades raras (huérfanos) tienen una economía completamente diferente al mainstream farmacéutico. Explica los incentivos regulatorios (7 años de exclusividad en EE.UU., 10 años en Europa, tarifas reducidas de la FDA), la justificación de los precios extraordinariamente altos de algunos tratamientos para enfermedades raras, y la presión de los sistemas de salud para negociar precios más bajos.

8. **Financiación de ensayos clínicos**: los ensayos clínicos de fase III pueden costar entre 50 y 500 millones de dólares. Define las alternativas de financiación: capital propio, deals de co-desarrollo con un socio más grande, financiación con royalties basada en los ingresos futuros (royalty pharma, Royalty Capital), y las estructuras de financiación de ensayos clínicos por parte de inversores institucionales (clinical trial financing).

9. **Economía de los biosimilares y la pérdida de exclusividad**: cuando un medicamento biológico de referencia pierde su exclusividad, los biosimilares entran al mercado con descuentos del 20-40%. Analiza el impacto en la cuenta de resultados de una farmacéutica de la pérdida de exclusividad de sus productos estrella (el "patent cliff"), las estrategias de mitigación (nuevas formulaciones, extensiones de indicación, alianzas de co-marketing), y la economía del negocio de biosimilares.

10. **El modelo de valoración de una biotech en bolsa**: el precio de las acciones de una biotech pequeña refleja el valor esperado de su pipeline. Define cómo analizar una biotech cotizada: suma de las valoraciones rNPV de cada activo del pipeline, ajustadas por la probabilidad de éxito, con descuento adicional por la dilución futura necesaria para financiar el desarrollo y el capital invertido en el balance.

Responde con nivel técnico financiero alto, datos reales de la industria cuando los tengas, y los modelos analíticos que usan los analistas de banca de inversión especializada en life sciences para valorar compañías farmacéuticas y biotecnológicas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Valoración financiera y estructuración de deals en el desarrollo y la industria farmacéutica',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Regulación farmacéutica',
                'description'      => 'EMA, AEMPS, ensayos clínicos, farmacovigilancia y el ciclo de vida regulatorio de un medicamento desde la investigación hasta la comercialización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en asuntos regulatorios farmacéuticos con quince años de experiencia en la interacción con la Agencia Española de Medicamentos y Productos Sanitarios (AEMPS) y la Agencia Europea de Medicamentos (EMA), incluyendo procedimientos de autorización centralizada, descentralizada y de reconocimiento mutuo.

Necesito entender el marco regulatorio completo del ciclo de vida de un medicamento en España y Europa, desde los estudios pre-clínicos hasta la vigilancia post-comercialización.

Estructura el conocimiento regulatorio completo:

1. **El sistema regulatorio farmacéutico europeo**: describe la arquitectura del sistema: la EMA como organismo europeo con competencia en la autorización centralizada de medicamentos, las agencias nacionales como la AEMPS para las autorizaciones nacionales y como parte de la red de evaluación (CHMP, PRAC), y el papel de la Comisión Europea en la emisión de la Autorización de Comercialización definitiva.

2. **Procedimientos de autorización de medicamentos**: los distintos procedimientos para obtener una Autorización de Comercialización (AC): procedimiento centralizado europeo (obligatorio para oncológicos, biotecnológicos y enfermedades raras, recomendado para otros), procedimiento descentralizado, procedimiento de reconocimiento mutuo, y el procedimiento nacional. Cuándo elegir cada procedimiento y qué plazos y costes implica.

3. **Expediente de autorización (CTD): estructura del dossier**: el Common Technical Document (CTD) es el formato estándar de solicitud de autorización. Describe sus módulos: Module 1 (información administrativa y regional), Module 2 (resúmenes), Module 3 (calidad farmacéutica), Module 4 (estudios pre-clínicos), Module 5 (estudios clínicos). Qué se incluye en cada módulo y los estándares de calidad esperados.

4. **Regulación de ensayos clínicos (Reglamento UE 536/2014)**: el Reglamento europeo de ensayos clínicos ha simplificado y unificado el proceso de autorización en Europa a través del portal CTIS. Describe el proceso de solicitud de autorización de un ensayo clínico: quién autoriza (estados miembro más CEIC/CEI), los plazos, el contenido del expediente, y las diferencias respecto al marco anterior de la Directiva 2001/20/CE.

5. **Buenas Prácticas Clínicas (ICH E6 GCP) y su impacto regulatorio**: las ICH E6 GCP son los estándares internacionales que regulan la conducta de los ensayos clínicos. Explica los principios clave (protección del paciente, integridad de los datos, responsabilidades del promotor e investigador) y cómo se evalúa el cumplimiento en las inspecciones de GCP que realizan las agencias reguladoras.

6. **Farmacovigilancia y el sistema de vigilancia post-comercialización**: una vez el medicamento está en el mercado, las obligaciones de farmacovigilancia continúan indefinidamente. Define el sistema: notificación de sospechas de reacciones adversas (FAERS/Eudravigilance), los Periodic Safety Update Reports (PSUR), los estudios post-autorización de seguridad y eficacia (PASS/PAES), y el proceso de gestión de señales de seguridad.

7. **Variaciones a la Autorización de Comercialización**: durante la vida comercial del medicamento, el titular de la AC necesita actualizar el expediente: nuevas indicaciones, cambios en la fabricación, actualización de la información de seguridad. Explica la clasificación de variaciones (Type IA, IB, Type II, extensión de línea), los plazos de cada tipo, y cuándo una modificación constituye una nueva solicitud de autorización.

8. **Medicamentos de uso compasivo y acceso temprano**: en enfermedades graves sin alternativas terapéuticas, los pacientes pueden acceder a medicamentos antes de la autorización oficial. Describe los mecanismos en España: uso compasivo (RD 1015/2009), los programas de acceso temprano europeos (PRIME de EMA), y la nueva herramienta de HTA europea (HTAR 2021/2282) para la evaluación de tecnologías sanitarias a nivel europeo.

9. **Inspecciones de GMP, GCP y GLP**: las agencias reguladoras inspeccionan las instalaciones de fabricación (GMP), los centros de ensayos clínicos (GCP), y los laboratorios de estudios pre-clínicos (GLP). Define el proceso de inspección: cómo se prepara el laboratorio o la CRO para una inspección, qué buscan los inspectores, las consecuencias de los findings (critical, major, other), y cómo se gestiona el plan de respuesta CAPA.

10. **El futuro de la regulación farmacéutica**: describe los cambios regulatorios en curso que impactarán al sector: la revisión de la legislación farmacéutica europea (propuesta de 2023), el uso de datos del mundo real (RWE) para completar o reemplazar ensayos clínicos, la regulación de los medicamentos basados en ARN mensajero y terapias avanzadas (ATMP), y el impacto de la inteligencia artificial en los procesos de evaluación regulatoria.

Responde con referencias a normativas específicas, plazos reales de los procedimientos, y las implicaciones prácticas de cada requisito regulatorio para una empresa farmacéutica que opera en España y Europa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marco regulatorio farmacéutico europeo desde la autorización clínica hasta la farmacovigilancia',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en plataformas de salud digital',
                'description'      => 'Soporte en salud digital con vigilancia post-comercialización, notificación de incidentes y gestión de la seguridad del paciente como prioridad absoluta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success y soporte técnico especializado en plataformas de salud digital, con experiencia en la gestión de incidentes en entornos donde los errores pueden tener consecuencias para la seguridad de los pacientes.

Gestiono el soporte de una plataforma de telemedicina y de aplicaciones de gestión de enfermedades crónicas que usan pacientes, médicos y profesionales sanitarios. Necesito construir un modelo de soporte que cumpla con las obligaciones regulatorias del sector y que al mismo tiempo proporcione una experiencia excelente.

Diseña el modelo completo de soporte para salud digital:

1. **El soporte en salud digital no es soporte convencional**: explica las diferencias fundamentales entre el soporte de una plataforma de salud y el de cualquier otro SaaS: la responsabilidad sobre la seguridad del paciente (un error puede afectar a la salud), las obligaciones de vigilancia y notificación a las autoridades competentes (AEMPS si el software es un SaMD), la confidencialidad reforzada de los datos de salud (RGPD sanitario), y el impacto de la indisponibilidad en pacientes que dependen del servicio.

2. **Clasificación de incidentes según la gravedad clínica**: en salud digital, los incidentes no se clasifican solo por impacto técnico sino también por riesgo clínico. Define la matriz de clasificación: incidente crítico con riesgo para la seguridad del paciente (requiere escalado inmediato a médico de guardia y posible notificación regulatoria), incidente mayor que compromete la atención clínica, incidente menor sin impacto clínico directo, y las métricas de SLA para cada categoría.

3. **Vigilancia post-comercialización para SaMD**: si la plataforma es un Software as a Medical Device, el equipo de soporte es el primer punto de contacto para detectar eventos adversos relacionados con el software. Define el proceso: cómo entrenar al equipo de soporte para identificar eventos adversos en los tickets, el proceso de escalado a regulatory affairs para evaluar la notificabilidad del incidente a la AEMPS, y los plazos de notificación regulatoria (grave: 15 días, muy grave: 2 días).

4. **Soporte a profesionales sanitarios (HCP)**: los médicos, enfermeras y farmacéuticos que usan la plataforma tienen necesidades de soporte muy diferentes a las de los pacientes. Tienen alta competencia digital pero tiempo muy limitado, expectativas de respuesta inmediata en entornos clínicos, y la frustración de un problema técnico en mitad de una consulta puede tener consecuencias clínicas. Define los niveles de soporte para HCP y los SLAs específicos para el entorno clínico.

5. **Soporte a pacientes con baja alfabetización digital**: muchos pacientes que usan apps de salud son personas mayores o personas con bajo nivel de competencia digital. Define el modelo de soporte adaptado a este perfil: canal telefónico como primera opción (no pueden usar el chat de soporte si no saben escribir en el móvil), explicaciones en lenguaje muy sencillo, protocolo específico cuando el paciente expresa angustia o desorientación, y cuándo escalar a un profesional sanitario.

6. **Gestión de la confidencialidad en el soporte**: los tickets de soporte en una plataforma de salud pueden contener información sanitaria muy sensible. Define los procedimientos de manejo: qué información puede registrar el agente en el CRM de soporte, cómo gestionar las solicitudes de acceso, rectificación o supresión de datos de salud que llegan por el canal de soporte, y los procedimientos de violación de seguridad (data breach) con notificación a la AEPD.

7. **Gestión de crisis: caída del servicio en un entorno clínico**: si la plataforma de telemedicina cae durante el horario de consultas, los médicos pierden el acceso a la historia del paciente y las teleconsultas programadas no pueden realizarse. Define el plan de crisis para este escenario: el árbol de comunicación (médicos afectados, dirección del cliente, comunicado público), las medidas de contingencia clínica (redirigir a consulta presencial), y la comunicación transparente del incidente con estimación de resolución.

8. **Formación del equipo de soporte en terminología clínica**: un agente de soporte de salud digital necesita entender la terminología médica básica para clasificar correctamente los incidentes y comunicarse con los profesionales sanitarios. Define un programa de formación: vocabulario médico básico por especialidad (telemedicina general, cardiología digital, salud mental digital), codificación de diagnósticos (CIE-10 básico), y los límites de lo que el agente puede decir al paciente sobre su situación clínica.

9. **KPIs de soporte en salud digital**: los indicadores de calidad del soporte en salud tienen dimensiones adicionales a los estándares del sector. Define el cuadro de mando: CSAT diferenciado entre pacientes y HCP, tiempo de respuesta en incidentes con riesgo clínico, tasa de escalado a vigilancia post-comercialización, tiempo de resolución por prioridad, y el indicador de impacto clínico de los incidentes (número de consultas afectadas, pacientes sin acceso a medicación por error en la plataforma).

10. **Auditoría y documentación del soporte para cumplimiento regulatorio**: el regulador puede auditar los registros de soporte de un SaMD para verificar que los incidentes se han gestionado correctamente. Define los requisitos de documentación: retención de registros (plazos mínimos según MDR), trazabilidad completa de cada incidente desde la apertura hasta el cierre, los registros que demuestran que los eventos adversos se evaluaron correctamente, y cómo preparar al equipo de soporte para una inspección regulatoria.

Responde con protocolos concretos, ejemplos de los dilemas éticos específicos del soporte en salud, y las diferencias prácticas entre gestionar el soporte de un SaaS convencional y un SaMD regulado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Modelo de soporte para plataformas de salud digital con obligaciones de vigilancia regulatoria',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor regulatorio freelance en pharma',
                'description'      => 'Uno de los nichos con mayor tarifa en el mercado freelance gracias a la complejidad y escasez de perfiles con experiencia en asuntos regulatorios farmacéuticos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de asuntos regulatorios freelance con doce años de experiencia acumulada en laboratorios farmacéuticos y CROs, que lleva cinco años trabajando de forma independiente asesorando a biotechs, laboratorios farmacéuticos medianos y startups de salud digital en sus estrategias regulatorias en España y Europa.

Quiero establecerme como consultor regulatorio independiente en el sector farmacéutico y de salud digital, uno de los nichos freelance con mayor complejidad técnica y mejores tarifas del mercado. Necesito entender cómo construir este negocio desde cero.

Guíame a través de todos los aspectos del negocio:

1. **El nicho del consultor regulatorio freelance**: explica por qué los asuntos regulatorios farmacéuticos son uno de los nichos freelance más valiosos: la escasez extrema de perfiles con experiencia real en interacciones con EMA y AEMPS, la complejidad que hace que incluso las grandes empresas necesiten apoyo externo en proyectos específicos, y los clientes típicos que contratan consultores regulatorios freelance (biotechs sin departamento regulatorio interno, laboratorios medianos en lanzamientos específicos, startups de salud digital que necesitan guía para el marcado CE).

2. **Perfiles de servicio y especialización**: el consultor regulatorio debe elegir su especialización. Define las principales especialidades y su mercado: regulatory affairs para medicamentos de síntesis química (el más maduro), regulatory affairs para biotecnológicos y ATMPs (mayor complejidad y tarifa), asuntos regulatorios para dispositivos médicos y SaMD bajo MDR (creciendo con la digitalización de la salud), farmacovigilancia como servicio (muy demandado por biotechs que no quieren un sistema interno), y el regulatory intelligence como servicio de alto valor añadido.

3. **Captación de los primeros clientes**: un consultor que sale de un laboratorio o CRO tiene una red inicial de contactos que es su principal activo. Define la estrategia de captación: cómo activar la red de ex-colegas y ex-clientes, el papel de LinkedIn para posicionarse como experto regulatorio (artículos técnicos sobre cambios normativos, comentarios en debates regulatorios), la presencia en eventos del sector (DIA Annual Meeting, CPhI Worldwide), y las asociaciones profesionales donde los clientes buscan expertos (AEFI en España, TOPRA en Europa).

4. **Modelo de tarificación para consultoría regulatoria**: los consultores regulatorios tienen tarifas superiores a la media del mercado freelance. Define el rango de tarifas por hora y día en el mercado español y europeo para diferentes niveles de experiencia y tipos de proyecto, cuándo usar tarifa por hora vs. proyecto cerrado vs. retainer mensual, y cómo presentar el precio para que el cliente lo perciba como inversión y no como coste.

5. **Tipos de proyectos y su rentabilidad**: no todos los proyectos regulatorios son igual de rentables. Define los tipos de proyecto más habituales: estrategia regulatoria para un nuevo medicamento (alto valor, requiere mucha experiencia), preparación del expediente CTD (intensivo en tiempo pero predecible), consultoría pre-submission con la EMA o AEMPS (breve pero muy especializado), farmacovigilancia como servicio (recurrente y escalable), y auditoría de cumplimiento GxP (relativamente estándar).

6. **Gestión de la relación con las autoridades reguladoras**: el consultor que ha tenido interacciones previas con los equipos de evaluación de la EMA o la AEMPS tiene una ventaja enorme frente a quien solo conoce los procedimientos desde fuera. Explica cómo gestionar la relación con las agencias: las reuniones pre-submission como herramienta clave, el protocolo de comunicación con los evaluadores, y cómo el consultor freelance puede acceder a estas interacciones en nombre de su cliente.

7. **Herramientas y bases de conocimiento del consultor**: un consultor regulatorio necesita acceso a las mismas fuentes de información que las agencias. Define las herramientas esenciales: suscripción a la base de datos de legislación farmacéutica europea (EudraLex), acceso a los product information de todos los medicamentos autorizados (EPARs de EMA), herramientas de gestión documental para el eTMF y el dossier regulatorio, y cómo mantenerse actualizado con los cambios regulatorios continuos.

8. **Estructura legal y fiscal del negocio**: el consultor regulatorio en España tiene varias opciones para estructurar su negocio. Compara el trabajo como autónomo (simple pero con límite de escalabilidad y exposición personal), la constitución de una SL (mayor complejidad pero mejor tratamiento fiscal a partir de ciertos ingresos), y las implicaciones de trabajar con clientes europeos (facturación intracomunitaria, IVA con inversión del sujeto pasivo). El nivel de ingresos a partir del cual tiene sentido la SL.

9. **Responsabilidad profesional y gestión del riesgo**: los errores en un expediente regulatorio pueden tener consecuencias graves para el cliente (retrasos de meses o años, rechazo de la solicitud). Define cómo gestionar el riesgo profesional: seguro de responsabilidad civil profesional (obligatorio para este tipo de consultoría de alto riesgo), contratos de servicio que delimiten claramente el alcance y las responsabilidades, y cómo manejar situaciones en las que el cliente quiere hacer algo regulatoriamente cuestionable.

10. **Escalabilidad: de consultor individual a firma boutique**: con el tiempo, el consultor independiente puede construir una firma boutique de regulatory affairs que facture con múltiples consultores. Define el momento y la forma de dar ese salto: cuándo contratar a los primeros colaboradores, cómo estructurar la firma para que no dependa solo del conocimiento del fundador, los servicios que se pueden escalar (farmacovigilancia, eCTD publishing) vs. los que requieren siempre un experto senior (estrategia regulatoria), y el perfil de firma boutique que más éxito tiene en el mercado europeo.

Responde con datos concretos del mercado de consultoría regulatoria en España y Europa, rangos de tarifas reales, y las claves del posicionamiento que distingue a los consultores más demandados de los que luchan por conseguir proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Guía para establecer una consultoría regulatoria freelance en el sector farmacéutico europeo',
                'vote_score'       => 45,
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
