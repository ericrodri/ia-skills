<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills144Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing en salud',
                'description'      => 'Las restricciones y las oportunidades del marketing sanitario: compliance, claims, consent y las estrategias que generan confianza en un sector donde la credibilidad es todo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de marketing con experiencia en el sector salud, familiarizado con las restricciones regulatorias y las oportunidades de comunicación en un sector donde la confianza es el activo más valioso. Quiero diseñar la estrategia de marketing de mi empresa en el ámbito de la salud.

Mi empresa: [describe si eres un hospital, clínica, startup de healthtech, laboratorio, aseguradora, empresa de dispositivos médicos o suplementos, a quién te diriges —pacientes, médicos, hospitales, aseguradoras—, y cuál es el mayor desafío de marketing que tienes hoy].

**Lo que necesito:**

Primero, dame el mapa de las restricciones de marketing en el sector salud que debo conocer: las regulaciones sobre claims médicos (qué puedes decir que tu producto hace y qué no), las normas sobre testimoniales de pacientes y cómo usarlos legalmente, las restricciones en publicidad dirigida a profesionales médicos, y las diferencias entre el marco regulatorio en España, la UE y EEUU que debes tener en cuenta si tu audiencia es internacional.

Segundo, explícame el compliance de marketing sanitario en la práctica: cómo revisar el contenido antes de publicarlo para asegurar que los claims son defensibles, qué proceso de aprobación deben seguir los materiales de marketing en empresas reguladas, y qué departamentos necesitan estar en el flujo de aprobación (legal, médico, regulatory affairs) sin que se convierta en un cuello de botella.

Tercero, diseña la estrategia de contenidos para un sector regulado: cómo crear contenido educativo de valor que genere autoridad y confianza sin cruzar la línea de la promesa médica, la diferencia entre contenido educativo y publicidad encubierta, y los formatos que funcionan mejor para distintas audiencias sanitarias (pacientes, médicos de atención primaria, especialistas, gestores hospitalarios).

Cuarto, propón la estrategia de consent y gestión de datos de salud para el marketing digital: cómo construir una base de datos de email marketing que cumpla con GDPR cuando los datos involucran información de salud (datos especialmente protegidos), qué mecanismos de consent son válidos para comunicaciones comerciales en salud, y cómo gestionar las bajas y derechos de acceso de forma que no genere riesgo legal.

Quinto, ayúdame a diseñar la estrategia de marketing de confianza: el uso de evidencia clínica y estudios en las comunicaciones, el rol de los KOLs (Key Opinion Leaders) médicos y cómo trabajar con ellos de forma transparente, y las certificaciones y sellos que generan credibilidad con tu audiencia específica.

Sexto, explica cómo medir el marketing sanitario de forma que demuestre ROI: las métricas específicas del sector (coste por paciente adquirido, tasa de conversión de paciente potencial a primera consulta, lifetime value de un paciente), y cómo atribuir el marketing cuando el ciclo de decisión en salud puede ser de meses o años.

Séptimo, diseña el plan de marketing digital para el sector salud: las plataformas de paid que permiten anuncios relacionados con salud y cuáles los restringen (Google tiene políticas específicas para salud, Meta también), las oportunidades de SEO para búsquedas médicas, y el papel del email marketing y los webinars para audiencias profesionales sanitarias.

Termina con las 3 tendencias de marketing en salud que están ganando peso en este momento y cómo posicionarte para aprovecharlas antes que la competencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una estrategia de marketing para el sector salud respetando las restricciones regulatorias',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de software médico',
                'description'      => 'Los estándares específicos del software médico: HL7 FHIR, DICOM, interoperabilidad y los requisitos de calidad (FDA, MDR) que aplican a los productos digitales de salud.',
                'prompt_content'   => <<<'PROMPT'
Actúa como software architect especializado en sistemas de información sanitaria con experiencia en proyectos de interoperabilidad y cumplimiento regulatorio médico. Quiero entender qué necesito saber para desarrollar software en el sector salud correctamente.

Mi proyecto: [describe qué tipo de software estás desarrollando —app de salud para pacientes, sistema de gestión clínica, dispositivo médico con software, plataforma de telemedicina, sistema de diagnóstico asistido por IA—, en qué mercados va a operar y cuál es tu mayor incertidumbre técnica o regulatoria].

**Lo que necesito:**

Primero, dame el mapa de los estándares de interoperabilidad en salud que debo conocer: explica HL7 FHIR (Fast Healthcare Interoperability Resources), qué es y por qué es el estándar que está ganando la batalla, cómo se diferencia de HL7 v2 y de CDA, y qué recursos (librerías, servidores FHIR open source, APIs) puedo usar para implementarlo sin partir de cero.

Segundo, explícame DICOM: cuándo aplica (imágenes médicas — radiografías, TAC, resonancias), qué necesito implementar si mi software trabaja con imágenes médicas, las librerías open source disponibles por lenguaje, y los errores más comunes en implementaciones DICOM que generan problemas de interoperabilidad con los sistemas de los hospitales.

Tercero, diseña la arquitectura de una integración con un sistema HIS (Hospital Information System) o un EHR (Electronic Health Record): cómo funciona la arquitectura típica de integración, qué estándares de mensajería se usan en entornos hospitalarios reales (todavía hay mucho HL7 v2 en producción), y cómo gestionar la heterogeneidad de sistemas cuando cada hospital tiene una configuración diferente.

Cuarto, ayúdame a entender el marco regulatorio que aplica a mi software: cuándo un software se considera Dispositivo Médico Software (SaMD) según el MDR europeo o la clasificación FDA, qué implicaciones tiene esa clasificación en el proceso de desarrollo (QMS, documentación técnica, evidencia clínica), y cuáles son las certificaciones CE o FDA clearance que necesitaría obtener.

Quinto, diseña el sistema de gestión de calidad (QMS) mínimo viable para software médico: qué procesos de desarrollo son obligatorios según la norma IEC 62304 (gestión del ciclo de vida del software médico), qué documentación debes generar durante el desarrollo, y cómo implementar esto sin paralizar el equipo con burocracia innecesaria en fases tempranas.

Sexto, explica los requisitos de seguridad y privacidad específicos del software médico: por qué los datos de salud son especialmente sensibles bajo GDPR y cuáles son las medidas técnicas que se exigen, cómo implementar la trazabilidad de acceso a datos clínicos (audit log), y los estándares de seguridad específicos del sector (HIPAA para EEUU, ENS en España).

Séptimo, propón el stack tecnológico y las herramientas que recomendarías para mi tipo de proyecto: los servidores FHIR más usados (HAPI FHIR, Azure API for FHIR, Google Cloud Healthcare API), las librerías de cliente por lenguaje, las plataformas de telemedicina con APIs abiertas, y los proveedores de cloud que tienen BAA (Business Associate Agreement) para datos de salud.

Termina con las 5 decisiones técnicas tempranas que tienen mayor impacto a largo plazo en un proyecto de software médico y que son muy costosas de cambiar después.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Desarrollar software para el sector salud con los estándares de interoperabilidad y calidad correctos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para salud',
                'description'      => 'Diseña productos de salud centrados en el paciente: accesibilidad extrema, situaciones de estrés y las particularidades del diseño cuando el error puede tener consecuencias graves.',
                'prompt_content'   => <<<'PROMPT'
Actúa como UX designer especializado en productos de salud con experiencia diseñando para pacientes, cuidadores y profesionales sanitarios. Quiero entender las particularidades del diseño UX en el sector salud y aplicarlas a mi proyecto.

Mi proyecto: [describe qué tipo de producto de salud estás diseñando —app para pacientes, sistema clínico para médicos, plataforma de telemedicina, dispositivo médico con interfaz— y cuál es el mayor reto de diseño que tienes identificado].

**Lo que necesito:**

Primero, explícame las particularidades del diseño UX en salud que lo diferencian de otros dominios: por qué el contexto de uso es tan diferente (estrés, urgencia, condiciones físicas del usuario), por qué los errores de interfaz tienen consecuencias más graves, y cómo el perfil de usuario es más heterogéneo que en productos de consumo (rango de edad, alfabetización digital, condiciones cognitivas o motoras).

Segundo, diseña los principios de accesibilidad extrema para productos de salud: más allá del WCAG 2.1, qué consideraciones específicas aplican cuando los usuarios pueden tener visión reducida, temblor de manos, fatiga, medicación que afecta la cognición o estrés agudo. Dame las decisiones de diseño concretas que hacen un producto de salud realmente inclusivo.

Tercero, ayúdame a diseñar para situaciones de estrés y urgencia: cómo simplificar los flujos críticos para que funcionen cuando el usuario tiene miedo o no puede concentrarse, qué técnicas de diseño reducen la carga cognitiva en momentos críticos, y cómo el diseño de errores y mensajes de sistema tiene que ser diferente cuando la consecuencia de un error puede ser grave.

Cuarto, explícame el diseño de formularios médicos: cómo estructurar la captura de síntomas, historial y datos clínicos para minimizar los errores de entrada, el manejo correcto de campos de alta sensibilidad (alergias, medicación, dosis), y las convenciones de presentación de datos médicos que los profesionales sanitarios esperan encontrar.

Quinto, propón el framework de investigación con usuarios para productos de salud: cómo reclutar pacientes para investigación (los canales, el reclutamiento ético, los incentivos), qué adaptaciones necesitan los métodos de usabilidad estándar cuando el usuario tiene una condición de salud que afecta su capacidad de participar, y cómo trabajar con usuarios vulnerables de forma ética.

Sexto, diseña la estrategia de onboarding para pacientes digitalmente no nativos: cómo incorporar a usuarios mayores o con baja alfabetización digital, el papel de los cuidadores como usuarios intermediarios, y los mecanismos de soporte que reducen el abandono en los primeros usos cuando la configuración del perfil médico es compleja.

Séptimo, ayúdame a construir el design system para salud: qué componentes específicos necesitan un tratamiento especial (visualización de tendencias de salud, recordatorios de medicación, indicadores de urgencia), qué paleta de color y tipografía es más apropiada para un producto médico, y cómo balancear la identidad de marca con las convenciones visuales que los profesionales sanitarios reconocen como lenguaje médico estándar.

Termina con los 5 errores de UX en productos de salud que has visto repetirse y que tienen consecuencias desproporcionadas para la seguridad del paciente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar productos de salud centrados en el paciente con las particularidades del sector',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en el sector salud',
                'description'      => 'El ciclo de ventas en hospitales, clínicas y sistemas de salud: los múltiples stakeholders, las licitaciones y los tiempos que prueban la paciencia del vendedor más experimentado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de ventas con experiencia vendiendo soluciones tecnológicas y de equipamiento al sector salud, incluyendo hospitales públicos y privados, clínicas y aseguradoras. Quiero dominar el proceso de ventas en el sector sanitario.

Mi empresa: [describe qué vendes —software clínico, dispositivos médicos, servicios de salud digital, formación sanitaria—, a qué tipo de instituciones te diriges, el tamaño típico de los contratos y cuál es el mayor obstáculo en tu proceso de ventas actual].

**Lo que necesito:**

Primero, mapea los stakeholders del proceso de compra en una institución sanitaria: quiénes participan en la decisión de compra de una solución como la mía (clínicos usuarios, dirección médica, dirección de enfermería, dirección financiera, informática, comité de compras, comisión de farmacia si aplica), qué le importa a cada uno, y cómo priorizas con cuáles construyes relación primero.

Segundo, explícame el ciclo de ventas en el sector salud: por qué es más largo que en otros sectores B2B, cuáles son las fases típicas desde la detección de necesidad hasta la firma del contrato, qué eventos desencadenan las compras en salud (cambio de dirección, proyecto de digitalización, fondos específicos, fin de contrato con proveedor anterior) y cómo estar en el lugar correcto cuando ocurren.

Tercero, diseña la estrategia de navegación de una licitación pública sanitaria: cómo identificar las oportunidades antes de que se publiquen, cómo influir en los pliegos de condiciones (en los límites legales), los criterios de valoración que suelen incluir los pliegos de salud y cómo preparar una oferta que gane no solo en precio sino en puntuación técnica.

Cuarto, ayúdame a gestionar las pruebas piloto que el sector salud siempre requiere: cómo estructurar un piloto que demuestre el valor de tu solución, qué KPIs defines con el cliente para evaluarlo, cómo evitar que el piloto se extienda indefinidamente sin decisión de compra, y cómo convertir un piloto exitoso en un contrato marco.

Quinto, diseña la estrategia de venta consultiva para salud: cómo te conviertes en un asesor de confianza para los clínicos antes de venderles nada, el rol de los casos clínicos y la evidencia en las conversaciones de venta, y cómo construyes credibilidad cuando el interlocutor es un médico especialista que sabe más de su área que tú.

Sexto, explica cómo gestionar los comités y procesos de aprobación: qué documentación necesitas preparar para un comité técnico, cómo presentar ante un comité mixto (clínicos + administración + TI), y cómo mantener vivo el deal durante los meses que puede tardar el proceso de aprobación interna.

Séptimo, propón el modelo de account management post-venta en salud: cómo gestionas la relación con el hospital o la clínica después de la venta, cómo expandes el contrato a otras unidades o servicios, y cómo construyes referencias clínicas que abran puertas en otras instituciones.

Termina con las 3 diferencias más importantes entre vender al sector salud y vender a empresas de otros sectores, y qué mentalidad necesita adoptar un vendedor que viene de otro mercado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Dominar el proceso de ventas en hospitales, clínicas y sistemas de salud',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en healthtech',
                'description'      => 'Hacer producto en salud implica compliance, interoperabilidad y equilibrar las necesidades del paciente, el médico y el pagador: las particularidades del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product director con experiencia en startups de healthtech que han navegado la complejidad de hacer producto en un sector regulado. Quiero entender las particularidades del product management en salud y aplicarlas a mi empresa.

Mi producto: [describe qué problema de salud resuelve tu producto, para quién es el usuario principal —paciente, médico, enfermero, gestión clínica—, en qué fase está el producto —MVP, lanzado, con tracción— y cuál es la mayor fricción en tu proceso de product discovery o delivery].

**Lo que necesito:**

Primero, explícame el mapa de usuarios en healthtech: por qué en salud el usuario que usa el producto, el que paga y el que decide la compra son personas diferentes, y cómo esta complejidad cambia fundamentalmente el product discovery y el go-to-market. Dame un framework para mapear a todos los stakeholders y entender qué le importa a cada uno.

Segundo, diseña el proceso de discovery para un producto de salud: cómo accedes a médicos y pacientes para hacer investigación (son audiencias difíciles de reclutar), cómo navegas los comités de ética cuando quieres estudiar con pacientes, y qué adaptaciones necesitan los métodos de discovery estándar cuando el contexto clínico limita lo que puedes observar.

Tercero, ayúdame a gestionar el compliance en el roadmap: cómo incorporas los requisitos del MDR (si aplica), GDPR para datos de salud y las integraciones con HIS o EHR en el roadmap de producto, cómo priorizas este trabajo contra las features que generan tracción, y cómo convences a los inversores de que el compliance es parte del producto y no un impuesto.

Cuarto, diseña el modelo de feedback continuo con los usuarios clínicos: los médicos y enfermeros tienen tiempo muy limitado para darte feedback, los procesos de aprobación institucional ralentizan cualquier test con pacientes, y el comportamiento en producción real es muy diferente al del lab. ¿Cómo construyes el sistema de aprendizaje continuo que necesitas para iterar rápido en estas condiciones?

Quinto, explica cómo gestionar la evidencia clínica como parte del roadmap: cuándo un producto de healthtech necesita estudios clínicos, cómo planificar y financiar ese proceso, qué nivel de evidencia es suficiente para distintas audiencias (inversores, médicos adoptadores tempranos, pagadores institucionales), y cómo la evidencia clínica se convierte en un activo de producto y marketing.

Sexto, propón el modelo de pricing y packaging para healthtech: las diferencias entre cobrar al paciente, al médico, a la clínica, al hospital o a la aseguradora, los modelos de reembolso de seguros y cómo acceder a ellos, y la lógica detrás de los modelos value-based care que conectan el precio al resultado clínico.

Séptimo, diseña el proceso de onboarding institucional: cómo se implementa un producto de healthtech en un hospital o clínica (formación, integración con sistemas existentes, cambio de flujos de trabajo clínicos), por qué este proceso determina el éxito a largo plazo más que la funcionalidad del producto, y cómo escalar el onboarding sin que cada implementación sea un proyecto custom.

Termina con las 3 cosas que hacen que un producto de healthtech tenga éxito clínico pero fracase comercialmente, y cómo evitarlas desde la fase de diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Dominar las particularidades del product management en el sector healthtech',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH en el sector salud',
                'description'      => 'Gestiona el talento en un sector con escasez crónica, turnos difíciles y el impacto emocional del trabajo con personas enfermas: las políticas que retienen y cuidan al personal sanitario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como directora de RRHH con experiencia en organizaciones sanitarias —hospitales, clínicas y startups de healthtech— que enfrentan los retos específicos de gestionar talento en un sector con alta demanda, alta presión y alta carga emocional. Quiero mejorar la gestión del talento sanitario en mi organización.

Mi organización: [describe el tipo de institución —hospital público, clínica privada, startup de healthtech, residencia—, el tamaño del equipo sanitario, el mayor problema de talento que tienes hoy —rotación, burnout, dificultad para contratar— y si tienes turnicidad o no].

**Lo que necesito:**

Primero, dame el mapa de los retos específicos de RRHH en el sector salud: la escasez estructural de ciertos perfiles sanitarios y cómo gestionarla, el impacto de los turnos en la conciliación y la retención, la fatiga por compasión y el burnout como riesgos laborales específicos del sector, y las particularidades de los convenios colectivos sanitarios que limitan la flexibilidad de la gestión.

Segundo, diseña la estrategia de atracción de talento sanitario: cómo compites con los grandes hospitales o con el sector público cuando tienes menos presupuesto, qué canales funcionan para encontrar perfiles enfermeros, médicos o técnicos, el papel del employer branding en salud (qué valoran los profesionales sanitarios además del salario) y cómo construyes un pipeline de candidatos para los perfiles de mayor escasez.

Tercero, diseña el proceso de onboarding para profesionales sanitarios: qué es diferente cuando el empleado nuevo va a trabajar con pacientes desde el primer día, cómo gestionar la acreditación y la habilitación profesional en el proceso de incorporación, y cómo reduces el tiempo hasta que el nuevo empleado está funcionando con autonomía completa sin comprometer la seguridad del paciente.

Cuarto, propón el programa de bienestar y prevención del burnout para equipos sanitarios: las intervenciones que tienen evidencia de funcionamiento (no los programas de mindfulness que nadie hace), cómo mides el nivel de burnout del equipo de forma sistemática, y cómo diseñas las condiciones de trabajo (turnos, carga de trabajo, autonomía, soporte del equipo) para que el burnout no sea inevitable.

Quinto, diseña el modelo de desarrollo profesional para el personal sanitario: los itinerarios de formación que retienen a los mejores (especialización, gestión, investigación), cómo financias la formación continua que exige el sector, y cómo gestionas las expectativas de carrera de los profesionales sanitarios que quieren crecer pero no tienen una carrera directiva disponible.

Sexto, ayúdame a gestionar la comunicación y el clima laboral en organizaciones sanitarias: las particularidades de comunicar en entornos con múltiples turnos, la resistencia al cambio en equipos clínicos muy consolidados, y cómo gestionas los conflictos que surgen entre los valores profesionales de los clínicos y las decisiones de gestión de la organización.

Séptimo, propón el sistema de evaluación del desempeño para profesionales sanitarios: cómo evalúas el rendimiento de un médico o un enfermero de forma que sea rigurosa, percibida como justa y que no genere conflictos con los colegios profesionales, y qué indicadores conectan el rendimiento individual con los resultados de calidad asistencial de la organización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el talento sanitario en un entorno de escasez, burnout y alta presión asistencial',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas en healthtech',
                'description'      => 'Los modelos de negocio de la salud digital: pagadores vs. proveedores, reembolso de seguros, modelos value-based care y la complejidad financiera del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como CFO con experiencia en startups de healthtech que han navegado la complejidad de los modelos de negocio en salud digital. Quiero entender la dimensión financiera específica del sector salud y cómo estructurar el modelo de negocio de mi empresa.

Mi empresa: [describe qué tipo de solución de salud digital tienes, en qué mercado operas, cuál es tu modelo de ingresos actual y cuál es la principal fricción financiera que tienes —crecimiento lento, márgenes bajos, dependencia de un cliente grande, dificultad para levantar capital].

**Lo que necesito:**

Primero, dame el mapa de los modelos de negocio en healthtech: la diferencia fundamental entre vender a pagadores (aseguradoras, sistemas nacionales de salud), a proveedores (hospitales, clínicas, médicos), a empleadores (salud corporativa) y directamente al consumidor (B2C o D2C), y qué implica cada modelo en términos de ciclo de ventas, márgenes, riesgo de concentración y barreras de entrada.

Segundo, explícame el mundo del reembolso de seguros y su impacto en el modelo financiero: cómo funciona el proceso de inclusión en el catálogo de prestaciones de una aseguradora, los códigos CPT (EEUU) o los equivalentes de cada sistema de salud que determinan si se reembolsa tu producto, y cómo el reembolso cambia completamente el TAM accesible y la velocidad de crecimiento de un producto healthtech.

Tercero, ayúdame a entender los modelos value-based care: la diferencia entre el modelo fee-for-service tradicional y los contratos basados en resultados, los diferentes formatos de VBC (bundled payments, shared savings, capitation), y qué tipo de empresas healthtech pueden participar en contratos VBC y cómo se estructuran financieramente.

Cuarto, diseña el modelo financiero de una startup de healthtech en fase de crecimiento: qué métricas son las más relevantes según el modelo de negocio (ARR si es SaaS a clínicas, PMPM si vendes a aseguradoras, ARPU si es D2C), cómo construir el unit economics cuando el ciclo de ventas es muy largo y el CAC se amortiza en años, y qué nivel de gross margin es esperable según el tipo de producto.

Quinto, explica el ecosistema de inversión en healthtech: qué tipos de inversores invierten en el sector (venture, corporate venture de hospitales y aseguradoras, impact investors, family offices con tesis en salud), qué tesis de inversión son más comunes hoy, y qué diferencia la narrativa de fundraising de healthtech de la de una startup de software generalista.

Sexto, propón el modelo de partnership financiero con sistemas de salud: cómo estructuras un acuerdo comercial con un hospital o una aseguradora que incluya una fase de piloto, los milestone payments, las claúsulas de expansión y los mecanismos que protegen a ambas partes, y qué términos son comunes y cuáles debes negociar.

Séptimo, ayúdame a gestionar la complejidad de la facturación en salud: los ciclos de pago más largos del sector, la gestión de contratos con múltiples interlocutores en la misma organización cliente, y cómo estructuras la tesorería cuando tienes revenue que llega en forma de pagos institucionales irregulares mezclado con suscripciones recurrentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar y optimizar el modelo financiero de una empresa de salud digital',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Regulación sanitaria digital',
                'description'      => 'HIPAA (EEUU), LOPD en salud (España), MDR para software como dispositivo médico y los frameworks que permiten operar legalmente en el sector más regulado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor legal especializado en derecho sanitario y tecnología de la salud con experiencia en los marcos regulatorios de España, la UE y EEUU. Quiero entender el paisaje regulatorio completo que afecta a mi empresa de salud digital.

Mi empresa: [describe qué tipo de producto o servicio de salud digital tienes, en qué mercados operas, si manejas datos de pacientes, si tu software puede ser clasificado como dispositivo médico, y cuál es tu mayor duda o preocupación regulatoria].

**Lo que necesito:**

Primero, dame el mapa del RGPD (GDPR) aplicado a datos de salud: por qué los datos de salud son una categoría especial bajo el RGPD que exige mayor protección, qué bases legales son válidas para tratar datos de salud (consentimiento explícito, interés vital, prestación sanitaria, interés público), y qué obligaciones adicionales se derivan —DPIA obligatoria, limitación de conservación, medidas técnicas mínimas— cuando tu producto maneja datos clínicos de pacientes.

Segundo, explícame el marco regulatorio específico de salud en España: la LOPD-GDD aplicada a datos sanitarios, la Ley 41/2002 de autonomía del paciente y su impacto en los productos digitales, el papel de la Agencia Española de Protección de Datos (AEPD) y las sanciones reales que ha impuesto en el sector salud. Dame los casos recientes más relevantes para que entienda la magnitud real del riesgo.

Tercero, diseña el análisis de si mi software es un Dispositivo Médico Software (SaMD) bajo el MDR europeo: las reglas de clasificación del Anexo VIII del MDR que determinan si un software de salud es un producto sanitario, la diferencia entre un software de propósito médico (que sí es SaMD) y uno de bienestar general (que no lo es), y qué cambios debería hacer en el producto o en la comunicación de marketing para evitar la clasificación como DM si no quiero asumir esa carga regulatoria.

Cuarto, explícame el proceso de certificación CE para software médico: las clases de riesgo (I, IIa, IIb, III) y qué tipo de software cae en cada una, el papel del Organismo Notificado (ON) en la evaluación de conformidad, la documentación técnica que debes preparar, y el tiempo y coste realista de obtener el marcado CE para una startup sin recursos internos de regulatory affairs.

Quinto, dame una visión general de HIPAA para una empresa española que vende o tiene usuarios en EEUU: qué es un Business Associate Agreement y cuándo debes firmarlo, qué medidas técnicas y organizativas exige HIPAA para los datos PHI (Protected Health Information), y qué nivel de riesgo real supone operar en el mercado americano sin un programa de cumplimiento HIPAA si tu empresa no está constituida allí.

Sexto, diseña el programa de compliance mínimo viable para una startup de healthtech: qué documentos y políticas son imprescindibles desde el primer día (política de privacidad específica para datos de salud, procedimiento de brechas de seguridad, registro de actividades de tratamiento), qué se puede ir construyendo gradualmente, y cuándo necesitas contratar un DPO externo o dedicado.

Séptimo, explica los riesgos más comunes que no son obvios para un fundador de healthtech sin formación legal: el riesgo de hacer claims médicos sin evidencia (no es solo un riesgo reputacional, puede ser una infracción regulatoria), las restricciones sobre el acceso a la historia clínica electrónica, y las implicaciones de usar inteligencia artificial en decisiones clínicas desde el punto de vista regulatorio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Entender y cumplir el marco regulatorio de GDPR, MDR e HIPAA en salud digital',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en healthtech',
                'description'      => 'El onboarding de clínicas y hospitales tiene sus propias complejidades: formación a médicos, integración con HIS y los KPIs que importan cuando el cliente es un sistema de salud.',
                'prompt_content'   => <<<'PROMPT'
Actúa como VP de Customer Success especializado en empresas de software de salud con experiencia implementando soluciones en hospitales, clínicas y sistemas de salud. Quiero diseñar el proceso de CS de mi empresa de healthtech para clientes institucionales del sector.

Mi empresa: [describe qué tipo de software de salud tienes —SaaS para clínicas, plataforma de telemedicina, solución de gestión hospitalaria—, el tamaño de tus clientes institucionales, y cuál es el mayor reto en el proceso de implementación o retención que tienes hoy].

**Lo que necesito:**

Primero, explícame las particularidades del onboarding en instituciones sanitarias: por qué es más complejo que el onboarding de un SaaS B2B convencional (múltiples roles de usuario, flujos de trabajo clínicos arraigados, resistencia al cambio de los médicos, integración con sistemas HIS, formación en entorno regulado), y cómo planificar un proyecto de implementación realista en términos de tiempo y recursos.

Segundo, diseña el plan de implementación tipo para una clínica o un hospital: las fases del proyecto (kick-off, configuración, integración, formación, go-live, soporte post go-live), quiénes son los roles clave en el cliente que debes involucrar en cada fase (sponsor ejecutivo, referente clínico, informática, usuario final), y cómo gestionas los retrasos que inevitablemente aparecen cuando hay dependencias con los sistemas del hospital.

Tercero, ayúdame a diseñar la formación para usuarios clínicos: por qué la formación estándar de producto no funciona con médicos y enfermeros (tiempo limitado, diversidad de turnos, resistencia a cambiar flujos de trabajo, diversidad de perfil digital), qué formatos funcionan mejor (formación justo antes de usar, videos cortos, champions dentro del equipo clínico), y cómo mides que la formación ha funcionado realmente.

Cuarto, diseña el sistema de gestión del cambio en implementaciones sanitarias: cómo identificas y trabajas con los early adopters clínicos que van a arrastrar al resto, cómo gestionas la resistencia del médico que dice que el sistema anterior era mejor, y qué comunicación interna del cliente necesitas asegurar para que el go-live no sea un fracaso por falta de preparación organizativa.

Quinto, propón el modelo de integración con los sistemas del hospital: cómo gestionas las integraciones HL7 o FHIR con los HIS y EHR del cliente, qué documentas antes de empezar para evitar sorpresas, y cómo estructuras los acuerdos de SLA para que la integración no sea un punto de fricción crónico en la relación con el cliente.

Sexto, diseña los KPIs de éxito para clientes de healthtech: cómo defines el "value realization" para un cliente hospitalario (los KPIs clínicos y operativos que tu producto debe mover), cómo mides la adopción cuando los usuarios son clínicos con comportamientos muy heterogéneos, y cómo presentas los resultados al sponsor ejecutivo del cliente de forma que justifiquen la renovación y la expansión.

Séptimo, propón el modelo de expansión dentro de una institución sanitaria: cómo escalas de un servicio o unidad piloto al hospital completo, cómo identificas las oportunidades de upsell cuando tu producto ya está funcionando, y cómo construyes referencias clínicas internas (los casos de éxito publicables) que abran puertas en otras instituciones del sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar y retener clientes institucionales en el sector de la salud digital',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en healthtech',
                'description'      => 'El nicho con mayor demanda y mejores tarifas para los perfiles técnicos y de diseño: cómo entrar, las certificaciones que ayudan y dónde encontrar los proyectos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor independiente especializado en healthtech con experiencia tanto en proyectos de salud digital como en la orientación de otros freelancers que quieren entrar en el sector. Quiero posicionarme como freelance especializado en el nicho de healthtech para acceder a proyectos con tarifas más altas y mayor impacto.

Mi perfil actual: [describe tu especialidad actual —desarrollo, diseño, product management, marketing, consultoría de negocio—, tu experiencia previa en salud si la tienes, las tecnologías o habilidades que dominas, y por qué te interesa el sector salud].

**Lo que necesito:**

Primero, explícame por qué healthtech es uno de los nichos freelance con mejores tarifas y mayor demanda: el diferencial de precio que existe entre un desarrollador o diseñador generalista y uno especializado en salud, las razones estructurales que explican esa escasez (conocimiento de dominio + habilidades técnicas + sensibilidad regulatoria), y los tipos de proyectos donde ese diferencial es mayor.

Segundo, diseña el plan de transición desde mi especialidad actual hacia el nicho de healthtech: qué conocimiento de dominio necesito adquirir primero (no hace falta ser médico, pero sí entender el lenguaje clínico, los flujos de trabajo sanitarios y el marco regulatorio básico), cómo adquirirlo de forma eficiente, y qué tiempo es realista para estar listo para vender servicios en el sector.

Tercero, dame el mapa de certificaciones y formaciones que me harían más atractivo para clientes de healthtech: las certificaciones de HL7 FHIR, los cursos de digital health de instituciones reconocidas (Stanford, MIT, Johns Hopkins tienen buenos MOOCs), las certificaciones de seguridad para datos de salud (CIPP, HCISPP), y cuáles priorizarías según mi perfil y los clientes a los que me dirijo.

Cuarto, ayúdame a construir mi portfolio de healthtech sin haber trabajado antes en el sector: proyectos de práctica que puedo hacer (implementar un servidor FHIR, contribuir a un proyecto open source de salud, diseñar un prototipo de una app médica), las comunidades de salud digital donde ser visible, y cómo uso mi experiencia anterior en otros sectores como argumento a favor en healthtech.

Quinto, diseña la estrategia de prospección de clientes en healthtech: dónde encuentras los proyectos freelance de salud digital (plataformas especializadas, eventos del sector como la Health Innovation Summit, comunidades de founders de healthtech, los Slack o Discord de salud digital), y cómo te presentas a un cliente potencial que no te conoce cuando no tienes aún un portfolio del sector.

Sexto, propón el modelo de tarificación para freelance en healthtech: qué tarifas son razonables para distintos perfiles según la especialidad y el nivel de experiencia en el sector, cómo justificas una tarifa premium cuando empiezas en el nicho, y cuándo tiene sentido hacer un primer proyecto a un precio reducido para construir credibilidad vs. cuándo compromete el posicionamiento.

Séptimo, dame la guía de riesgos específicos del freelance en healthtech: las cláusulas de confidencialidad más estrictas que verás en los contratos de salud, las responsabilidades que puedes asumir (y las que no deberías asumir nunca) cuando tu trabajo puede afectar a la atención del paciente, y cómo gestionar los proyectos que se alargan porque la toma de decisiones en instituciones sanitarias es lenta.

Termina con los 3 perfiles freelance que tienen más oportunidades en healthtech ahora mismo y por qué, para que puedas evaluar si tu especialidad encaja en alguno de ellos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Posicionarse como freelance especializado en healthtech y acceder a proyectos con tarifas premium',
                'vote_score'       => 40,
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
