<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills106Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para SaaS B2B',
                'description'      => 'Las métricas, canales y estrategias específicas del marketing de software empresarial: todo lo que lo diferencia del marketing de consumo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing de SaaS B2B con más de diez años de experiencia lanzando y escalando productos de software para empresas. Voy a compartirte información sobre mi producto, mi mercado objetivo y mi situación actual, y necesito que me ayudes a construir una estrategia de marketing completa y accionable.

**Información que necesito que analices:**
- Nombre del producto y propuesta de valor principal
- Segmento objetivo (tamaño de empresa, sector, rol del comprador)
- Precio por licencia o por seat y modelo de facturación (mensual, anual, por uso)
- Canales actuales y presupuesto mensual disponible
- Métricas actuales si las tengo: MRR, ARR, churn, CAC, LTV, NPS

**Lo que quiero que me entregues:**

1. **Análisis del ICP (Ideal Customer Profile):** Define el perfil de empresa y de comprador ideal para este producto, incluyendo firmografía (tamaño, sector, facturación, geografía) y psicografía (pain points, objetivos, métricas por las que se les evalúa internamente).

2. **Estrategia de contenidos B2B:** Propón un plan de contenidos a 90 días orientado a generar demanda calificada, no solo tráfico. Incluye tipos de contenido (thought leadership, casos de uso, comparativas, hojas de datos técnicos), formatos (blog, LinkedIn, webinars, whitepapers) y la frecuencia recomendada para cada uno.

3. **Funnel de conversión específico para SaaS B2B:** Explica las etapas del funnel adaptadas a ciclos de venta largos y múltiples stakeholders: awareness, consideración, evaluación, decisión y expansión. Para cada etapa indica qué tipo de contenido o acción de marketing es más efectiva.

4. **Métricas clave y cómo interpretarlas:** Define y explica las métricas más importantes para este tipo de negocio: MQL, SQL, oportunidades creadas, velocity del pipeline, win rate, CAC por canal, LTV/CAC ratio, tiempo hasta primer valor (TTV) y NRR (Net Revenue Retention). Indica qué valores son saludables y cuáles son señales de alerta.

5. **Product-Led Growth vs Sales-Led Growth:** Analiza cuál de los dos modelos —o una combinación— tiene más sentido para este producto según el precio, la complejidad y el segmento objetivo. Si hay un modelo freemium o trial, explica cómo convertirlo en un canal de adquisición.

6. **Estrategia de Account-Based Marketing (ABM):** Propón un enfoque ABM ligero (Tier 1, Tier 2, Tier 3) para atacar las cuentas de mayor valor, con tácticas de personalización por cuenta y métricas para medir el progreso.

7. **Canales de distribución y stack de herramientas:** Recomienda los canales más efectivos para este ICP (LinkedIn Ads, SEO, eventos sectoriales, partnerships con integradores, comunidades verticales) y el stack mínimo de herramientas de marketing necesario para operar con eficiencia.

8. **Plan de 30-60-90 días:** Entrega un roadmap de acciones prioritarias con responsables, recursos necesarios y métricas de éxito para cada hito.

Al responder, sé específico y evita los consejos genéricos que sirven para cualquier empresa. El marketing B2B SaaS tiene reglas propias: ciclos largos, múltiples decisores, renovaciones anuales y la importancia del éxito del cliente como palanca de crecimiento. Quiero una estrategia que refleje esa realidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una estrategia de marketing completa y accionable para un producto SaaS B2B.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo para el sector salud',
                'description'      => 'FHIR, HL7, interoperabilidad y los requisitos técnicos para construir software médico certificable en España y Europa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en sistemas de salud digital con experiencia en estándares de interoperabilidad clínica y en el marco regulatorio europeo (RGPD, MDR, ENS) y español (LOPD, Esquema Nacional de Seguridad). Voy a describirte el sistema de software médico que quiero construir y necesito orientación técnica completa.

**Descripción del sistema:**
[Describe aquí qué hace tu sistema: HIS, EHR, app de telemonitorización, plataforma de diagnóstico, herramienta de gestión clínica, etc.]

**Lo que necesito que me expliques:**

1. **Estándares de interoperabilidad que aplican:** Explica las diferencias entre HL7 v2, HL7 v3, CDA y FHIR R4/R5. Para mi tipo de sistema, indica cuál es el estándar prioritario, qué recursos FHIR necesito implementar (Patient, Observation, MedicationRequest, Encounter, etc.) y cómo estructurar un servidor FHIR (HAPI FHIR, Azure API for FHIR, Google Cloud Healthcare API).

2. **Arquitectura de integración con sistemas existentes:** Los hospitales y clínicas usan HIS/HCE propietarios (Selene, Millenium, SAP IS-H). Explícame cómo diseñar una capa de integración basada en HL7 v2 pipes & filters para comunicarme con ellos, incluyendo mensajes ADT (admisión, alta, traslado), ORM (órdenes) y ORU (resultados).

3. **Clasificación como producto sanitario digital (SaMD):** Explica cuándo mi software necesita certificación como producto sanitario bajo el Reglamento MDR 2017/745, cuáles son las clases de riesgo (I, IIa, IIb, III) y qué implica para el desarrollo: documentación técnica, evaluación clínica, sistema de gestión de calidad ISO 13485.

4. **Seguridad y protección de datos de salud:** Los datos clínicos son datos sensibles de categoría especial bajo el RGPD. Explica los controles técnicos mínimos requeridos: cifrado en reposo y en tránsito, pseudonimización, gestión de accesos basada en roles (RBAC), trazabilidad de accesos (audit log) y cumplimiento del Esquema Nacional de Seguridad.

5. **Gestión del consentimiento informado digital:** Cómo implementar un sistema de consentimiento que cumpla con la Ley 41/2002 de autonomía del paciente y con el RGPD, incluyendo granularidad del consentimiento para diferentes finalidades (asistencial, investigación, calidad).

6. **Testing y validación de sistemas médicos:** Qué estrategia de testing es apropiada: pruebas de integración con testbeds de HL7/FHIR, validadores de perfiles FHIR, tests de carga para entornos hospitalarios y documentación de validación para auditorías regulatorias.

7. **Infraestructura y disponibilidad:** Los sistemas clínicos deben estar disponibles 24/7. Explica los requisitos de alta disponibilidad, recuperación ante desastres (RPO/RTO) y los proveedores cloud con BAA/DPA adecuados para datos de salud en Europa.

8. **Hoja de ruta de certificación e integración hospitalaria:** Qué pasos debo seguir para que mi sistema sea homologable por los servicios autonómicos de salud y por hospitales privados, incluyendo certificaciones de interoperabilidad, pilotos y procesos de compra pública.

Sé técnico y específico. Este es un sector de alta regulación donde los errores tienen consecuencias clínicas y legales. Quiero entender qué tengo que construir, con qué estándares, y cómo demostrarlo ante los organismos competentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar la arquitectura técnica y regulatoria de software para el sector salud.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para plataformas educativas (edtech)',
                'description'      => 'UX para el aprendizaje online: engagement, retención del conocimiento y diseño de experiencias de curso que funcionan de verdad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX especializado en aprendizaje online (learning experience design) con formación en ciencias cognitivas y experiencia diseñando plataformas edtech. Voy a compartirte información sobre mi plataforma educativa y necesito que me ayudes a diseñar experiencias de aprendizaje que funcionen: que los usuarios aprendan, vuelvan y completen los cursos.

**Contexto de mi plataforma:**
[Describe aquí qué tipo de contenido ofrece tu plataforma, quién es el aprendiz (edad, nivel educativo, contexto), si es síncrona o asíncrona, si incluye evaluación y qué tecnología usa]

**Lo que necesito que me guíes:**

1. **Principios cognitivos aplicados al diseño:** Explica cómo aplicar la ciencia del aprendizaje al diseño UX: la curva del olvido de Ebbinghaus y la repetición espaciada, la carga cognitiva (cognitive load theory de Sweller) y cómo el diseño puede reducirla, el efecto de testing (retrieval practice) y cómo integrarlo sin que parezca un examen, y la teoría de codificación dual (multimedia learning de Mayer).

2. **Diseño de la experiencia de onboarding:** El primer curso o la primera lección es crítica. Diseña un flujo de onboarding que establezca el hábito de aprendizaje, ajuste las expectativas del estudiante y le dé una primera victoria rápida que le motive a continuar.

3. **Arquitectura de información para cursos:** Cómo estructurar un curso en módulos, lecciones y microcontenidos de forma que respete la curva de aprendizaje, incluya pausas y recapitulaciones, y permita al estudiante orientarse siempre (saber dónde está, qué le queda y qué ha conseguido).

4. **Patrones de engagement y retención:** Diseña los mecanismos que hacen que los estudiantes vuelvan: notificaciones basadas en la curva del olvido, streaks y hábitos diarios sin gamificación vacía, progreso visible y logros significativos, y comunidad y aprendizaje social integrados en la experiencia.

5. **Diseño de evaluaciones y feedback:** Las evaluaciones mal diseñadas destruyen la motivación. Explica cómo diseñar cuestionarios adaptados al nivel, feedback inmediato y explicativo (no solo "incorrecto"), proyectos prácticos como evidencia de aprendizaje y rubricas de evaluación entre pares.

6. **Accesibilidad en plataformas educativas:** El aprendizaje online debe ser accesible para todos. Explica los requisitos WCAG 2.1 AA específicos para vídeo (subtítulos, audiodescripción), documentos descargables, formularios de evaluación y navegación por teclado, con especial atención a los estudiantes con dislexia y déficit de atención.

7. **Diseño responsivo para aprendizaje móvil:** Muchos estudiantes aprenden en el móvil, a veces sin conexión. Diseña la experiencia para mobile-first: lecciones cortas, vídeos con subtítulos que funcionen en silencio, descarga offline de contenidos y continuidad entre dispositivos.

8. **Métricas de aprendizaje y diseño iterativo:** Qué métricas debo rastrear para saber si el diseño está funcionando: tasa de compleción, tiempo por lección, puntuaciones de evaluación, NPS del curso, churn por módulo y señales de confusión (dónde se atascan los estudiantes). Cómo usar esos datos para iterar.

Quiero un diseño que sirva al aprendizaje, no que lo simule. Hay muchas plataformas con diseño bonito que no consiguen que nadie aprenda nada. Ayúdame a evitar ese error.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar experiencias de aprendizaje online que maximicen la retención y la compleción.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en el sector público (B2G)',
                'description'      => 'Licitaciones, concursos públicos y el proceso de venta a administraciones y organismos públicos en España.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor experto en ventas al sector público (Business to Government) con amplia experiencia en licitaciones públicas en España. Conozco bien el mundo de las ventas privadas pero el sector público tiene reglas completamente distintas y necesito que me expliques cómo funciona y cómo puedo entrar en él con mi empresa.

**Información sobre mi empresa:**
[Describe tu producto o servicio, el tamaño de tu empresa, si tienes referencias previas con administraciones públicas y el presupuesto aproximado de los contratos a los que quieres optar]

**Lo que necesito que me expliques:**

1. **Marco legal básico de la contratación pública en España:** Explica la Ley 9/2017 de Contratos del Sector Público (LCSP), los umbrales que determinan el tipo de procedimiento (contrato menor, negociado sin publicidad, abierto, abierto simplificado), la Plataforma de Contratación del Sector Público (PLACE) y el perfil de contratante. Sin entender el marco legal, es imposible vender a la administración.

2. **Tipos de procedimientos y cuándo aplica cada uno:** Explica las diferencias prácticas entre el procedimiento abierto ordinario, el abierto simplificado, el negociado sin publicidad (y sus límites cuantitativos) y el contrato menor. Para una empresa que empieza, indica cuál es la puerta de entrada más accesible y cómo usarla estratégicamente.

3. **Cómo encontrar oportunidades antes de que se publiquen:** El contrato que se publica ya llega tarde: normalmente ya hay un proveedor favorito implícito. Explica cómo hacer inteligencia de mercado antes de la licitación: visitas técnicas, participación en mesas sectoriales, respuesta a consultas previas al mercado y seguimiento de los Presupuestos Generales del Estado y autonómicos para anticipar convocatorias.

4. **Construcción del solvencia técnica y económica:** La mayoría de licitaciones exigen acreditar solvencia. Explica qué es la clasificación empresarial (grupos y categorías), el ROLECE (Registro Oficial de Licitadores y Empresas Clasificadas del Estado), y cómo construir el expediente de solvencia con referencias, seguros y estados financieros para poder optar a contratos de mayor importe.

5. **Estrategia para redactar una oferta ganadora:** Muchas empresas pierden licitaciones no porque su producto sea peor, sino porque su oferta está mal redactada. Explica cómo leer los pliegos (PCAP y PPT), cómo puntuar cada criterio de adjudicación, la importancia de los criterios sujetos a juicio de valor frente a los automáticos, y cómo estructurar la memoria técnica para maximizar la puntuación.

6. **Uniones Temporales de Empresas (UTE) y subcontratación:** Para contratos grandes o en sectores donde no tienes toda la capacidad, explica cuándo y cómo formar una UTE, cómo repartir roles y responsabilidades entre los socios, y cuáles son las implicaciones legales y financieras.

7. **Plazos, pagos y gestión de contratos públicos:** La administración paga a 30 días por ley pero a veces tarda más. Explica la Ley de Morosidad aplicada al sector público, cómo gestionar las facturas mediante FACe, y cómo manejar las modificaciones de contrato, las prórrogas y los procedimientos de resolución.

8. **Errores más comunes al empezar en el B2G y cómo evitarlos:** Las empresas privadas cometen siempre los mismos errores al entrar en el sector público. Dime cuáles son, por qué suceden y qué debo hacer diferente desde el principio.

Quiero construir un canal de ventas sostenible en el sector público, no ganar un contrato por suerte. Ayúdame a entender el juego para poder jugarlo bien.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar una estrategia de venta a administraciones públicas y ganar licitaciones en España.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto en el sector financiero (fintech)',
                'description'      => 'Regulación PSD2, open banking, licencias e-money y cómo navegar la supervisión del Banco de España siendo Product Manager.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager especializado en fintech con experiencia trabajando en productos financieros regulados en España y la Unión Europea. Estoy construyendo (o gestionando) un producto financiero digital y necesito entender el marco regulatorio que afecta a mis decisiones de producto, porque en fintech la regulación no es un obstáculo externo: es una restricción de diseño que da forma al producto desde el primer día.

**Descripción de mi producto:**
[Describe aquí qué tipo de producto financiero es: cuenta de pago, tarjeta prepago, plataforma de inversión, agregador bancario, préstamos P2P, criptoactivos, seguro digital, etc.]

**Lo que necesito que me expliques:**

1. **Qué regulación aplica a mi tipo de producto:** Explica cuál de estos marcos regulatorios afecta directamente a lo que estoy construyendo: PSD2 (Directiva de Servicios de Pago), EMD2 (Directiva de Dinero Electrónico), MiFID II (mercados de instrumentos financieros), MICA (criptoactivos), Solvencia II (seguros) o alguna combinación. Para cada uno, explica qué requisitos impone al producto en términos de funcionalidades, flujos de usuario y datos.

2. **Licencias necesarias y cómo obtenerlas:** Según el tipo de producto, explica qué licencia necesito: Entidad de Pago, Entidad de Dinero Electrónico, Empresa de Servicios de Inversión, o si puedo operar bajo el paraguas regulatorio de un tercero licenciado (modelo BaaS, Banking as a Service). Explica el proceso de autorización ante el Banco de España o la CNMV, los tiempos estimados y los requisitos de capital.

3. **Open Banking y APIs PSD2:** Si mi producto consume o expone datos bancarios, explica cómo funciona el ecosistema de Open Banking en España: los TPPs (Third Party Providers), los roles AIS y PIS, la autenticación reforzada SCA (Strong Customer Authentication) con PSD2, y las APIs de los principales bancos españoles. Qué significa para el diseño del producto que el banco tiene que permitir el acceso pero puede poner fricciones en la SCA.

4. **Diseño de flujos de cumplimiento normativo en el producto:** Explica cómo integrar en la experiencia de usuario los procesos regulatorios sin destruir la conversión: el KYC (Know Your Customer) con verificación de identidad y PEP/sanciones, el proceso de onboarding con los controles AML (Anti Money Laundering), y los límites de operación según el nivel de verificación del usuario.

5. **Gestión del fraude como requisito regulatorio:** PSD2 exige a las entidades de pago gestionar activamente el fraude. Explica qué métricas de fraude debo rastrear, qué controles técnicos son obligatorios (SCA, análisis de riesgo de transacción TRA) y cómo reportar incidentes operativos graves al Banco de España.

6. **Privacy by design en productos financieros:** Los datos financieros son especialmente sensibles. Explica cómo integrar los requisitos del RGPD en el diseño del producto: minimización de datos, bases legales para el tratamiento (contrato, interés legítimo, consentimiento), el ejercicio de derechos del usuario y la portabilidad de datos financieros.

7. **Hoja de ruta regulatoria a 12 meses:** Qué cambios regulatorios vienen en el horizonte próximo que debo incorporar al roadmap de producto: PSD3, el Reglamento de Pagos Instantáneos, la identidad digital europea (eIDAS 2.0) y la evolución de MICA para criptoactivos.

8. **Cómo trabajar con el equipo legal y de compliance:** El PM de fintech necesita colaborar con compliance, legal y risk de forma continua. Explica cómo estructurar esa colaboración, cómo priorizar requisitos regulatorios frente a features de negocio y cómo construir una cultura de producto donde el compliance no es el enemigo de la velocidad.

Quiero tomar decisiones de producto informadas por la regulación, no descubrir restricciones cuando ya he construido algo que no puedo lanzar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Navegar la regulación fintech para tomar mejores decisiones de producto en servicios financieros digitales.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH en empresas de tecnología',
                'description'      => 'Las peculiaridades de gestionar talento tech: compensación con equity, flexibilidad radical y la cultura de las tech companies.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en People Operations de empresas tecnológicas con experiencia en startups y scaleups de entre 20 y 500 personas. El talento tech tiene características muy distintas al talento corporativo tradicional, y los profesionales de RRHH que no entienden esas diferencias pierden a sus mejores ingenieros, diseñadores y product managers. Necesito que me ayudes a construir una función de People que funcione en este contexto.

**Contexto de mi empresa:**
[Describe aquí el tamaño de tu empresa, la fase (seed, Serie A, scaleup), el porcentaje de empleados en roles técnicos, si es remoto/híbrido/presencial, y los principales retos de talento que tienes ahora mismo]

**Lo que necesito que me guíes:**

1. **Compensación total en tech: salary, equity y beneficios:** Explica cómo se estructura la compensación en las tech companies: el salario base y cómo compararlo con benchmarks (Glassdoor, Levels.fyi, Radford), los planes de equity (stock options, RSUs, phantom shares en España) con sus diferencias fiscales y contables, y los beneficios más valorados por el talento tech (flexibilidad horaria, trabajo remoto, presupuesto de formación, equipamiento).

2. **Equity para empleados en España: la guía práctica:** El equity es la herramienta de retención más poderosa pero también la más mal comunicada. Explica cómo funcionan las stock options en España (ejercicio, precio de ejercicio, ventana de ejercicio post-salida), los phantom shares como alternativa, las implicaciones fiscales en el momento del ejercicio y del evento de liquidez, y cómo explicarle el valor del equity a un candidato que viene de una empresa corporativa.

3. **Atracción de talento tech: sourcing y employer branding:** LinkedIn funciona peor para perfiles muy técnicos. Explica dónde están los desarrolladores, diseñadores y PMs que quiero contratar: comunidades de GitHub, Slack y Discord, meetups y conferencias técnicas, programas de referidos bien diseñados, y cómo construir un employer brand técnico auténtico (blog de ingeniería, open source, presencia en conferencias).

4. **Proceso de selección que no espanta al talento senior:** Los procesos de selección con cinco rondas y pruebas técnicas de ocho horas espantan a los mejores candidatos, que tienen múltiples ofertas. Diseña un proceso de selección eficiente (máximo tres semanas desde primer contacto hasta oferta), con una prueba técnica que respete el tiempo del candidato, y con feedback honesto en cada fase.

5. **Onboarding de ingenieros y product managers:** El onboarding técnico es diferente del onboarding corporativo. Diseña un programa de 30-60-90 días específico para roles tech que incluya acceso a sistemas, comprensión de la arquitectura, contribuciones tempranas al código o al producto, y integración en los rituales del equipo (standups, planning, retrospectivas).

6. **Rendimiento y feedback en equipos de ingeniería:** Las performance reviews anuales no funcionan en tech. Explica cómo diseñar un sistema de feedback continuo (1:1s semanales, OKRs trimestrales, revisiones de ciclo corto) y cómo evaluar el rendimiento técnico sin caer en métricas que miden lo fácil de medir pero no lo importante (líneas de código, tickets cerrados).

7. **Retención: por qué se van los buenos y qué hacer para que se queden:** Los ingenieros y PMs se van por razones muy concretas: mala gestión directa, falta de crecimiento técnico, deuda tecnológica que les frustra, falta de impacto y compensación no competitiva. Explica cómo detectar cada una de estas señales antes de que el empleado tenga otra oferta, y qué palancas de retención son más efectivas en cada caso.

8. **Cultura remota e híbrida en equipos técnicos:** El trabajo remoto en tech tiene sus propias reglas. Explica cómo mantener la cohesión del equipo, la colaboración efectiva y la cultura de empresa cuando la gente trabaja desde distintas ciudades o países, incluyendo rituales de equipo, herramientas y la gestión de los diferentes husos horarios.

El talento tech no se gestiona con políticas corporativas del siglo XX. Ayúdame a construir una función de People que entienda a las personas con las que trabaja.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar políticas y procesos de People Operations adaptados a las particularidades del talento tecnológico.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Contabilidad para startups SaaS',
                'description'      => 'Diferimiento de ingresos, ASC 606/IFRS 15, métricas SaaS y cómo debe tratar tu contable las suscripciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un controller financiero especializado en empresas SaaS con experiencia en startups que han pasado por rondas de financiación y procesos de due diligence. La contabilidad de una empresa SaaS tiene particularidades que la mayoría de contables generalistas no conocen, y esas lagunas se convierten en problemas cuando llega un inversor, una auditoría o una adquisición. Necesito que me expliques las reglas del juego contable específicas para mi empresa.

**Contexto de mi empresa:**
[Describe el modelo de negocio SaaS: suscripciones mensuales/anuales, si hay onboarding o implementación facturada, si hay contratos multianual, el volumen aproximado de MRR y el número de clientes]

**Lo que necesito que me expliques:**

1. **Reconocimiento de ingresos bajo IFRS 15 (ASC 606):** Esta norma cambió cómo los SaaS deben reconocer sus ingresos. Explica los cinco pasos del modelo de reconocimiento: identificar el contrato, identificar las obligaciones de desempeño, determinar el precio de la transacción, asignar el precio a cada obligación y reconocer el ingreso cuando se satisface la obligación. Para mi modelo específico, indica cuándo debo reconocer cada euro cobrado.

2. **Ingresos diferidos (deferred revenue): qué son y por qué importan:** Cuando cobro una suscripción anual por adelantado, no puedo reconocer todo el ingreso en enero. Explica cómo funciona el diferimiento: el asiento contable inicial, la liberación mensual, cómo aparece en el balance (pasivo corriente) y por qué los inversores y auditores miran esta partida con especial atención.

3. **Costes de adquisición de clientes y amortización:** El CAC no solo es una métrica operativa: tiene implicaciones contables. Explica cuándo los costes de comisiones de ventas deben activarse (capitalizarse) y amortizarse según IFRS 15, en lugar de reconocerse como gasto en el momento en que se incurren, y cómo esto afecta al P&L a corto y largo plazo.

4. **Métricas SaaS como complemento de los estados financieros:** Los estados financieros GAAP/IFRS solos no cuentan la historia de un SaaS. Explica cómo calcular correctamente MRR, ARR, churn (en clientes y en ingresos), NRR/NDR (Net Dollar Retention), LTV, CAC Payback Period y la regla del 40. Cuáles de estas métricas son importantes para un inversor de Serie A y cómo presentarlas en el reporting mensual.

5. **Plan de cuentas para un SaaS:** La mayoría de planes de cuentas estándar no están diseñados para los SaaS. Propón una estructura de cuentas adaptada que separe los ingresos por tipo (suscripción recurrente, onboarding, servicios profesionales, add-ons), los costes de COGS específicos de SaaS (infraestructura cloud, soporte, licencias de terceros incluidas en el producto) y los gastos operativos por departamento.

6. **Tratamiento contable de los descuentos y créditos:** Los SaaS ofrecen frecuentemente descuentos de lanzamiento, períodos de prueba gratuitos y créditos por fallos de servicio. Explica cómo tratar contablemente cada uno: si afectan al precio de la transacción, si deben reconocerse como reducción de ingresos o como gasto, y cómo documentarlos para una auditoría.

7. **Due diligence financiero: qué miran los inversores y adquirentes:** Cuando un fondo de VC o un comprador estratégico hace due diligence en un SaaS, la contabilidad es uno de los ejes principales. Explica qué buscan, qué red flags les alertan (ingresos reconocidos incorrectamente, churn ocultado en el diferimiento, costes capitalizados agresivamente) y cómo tener la contabilidad en orden antes de ese proceso.

8. **Qué le pido a mi contable o gestoría:** La mayoría de gestorerías generalistas no conocen estas especificidades. Explica qué debo pedirle a mi contable, qué preguntas hacerle para saber si entiende el modelo SaaS, y cuándo tiene sentido contratar un controller financiero interno o una firma especializada en tech.

Quiero que mi contabilidad sea correcta, que mis métricas sean creíbles y que cuando llegue el momento de hablar con inversores, los números cuenten la historia real de mi negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Aplicar correctamente las normas contables específicas de los modelos de negocio SaaS.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Regulación de plataformas digitales (DSA y DMA)',
                'description'      => 'Digital Services Act y Digital Markets Act: qué cambia para marketplaces, redes sociales y buscadores en Europa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho digital y regulación de plataformas tecnológicas en la Unión Europea. El Reglamento de Servicios Digitales (DSA) y el Reglamento de Mercados Digitales (DMA) han cambiado radicalmente las obligaciones de las plataformas online en Europa. Necesito entender qué implican para mi empresa y qué tengo que implementar para cumplir con ellos.

**Descripción de mi plataforma:**
[Describe aquí qué tipo de plataforma es: marketplace de productos, red social, motor de búsqueda, app store, plataforma de vídeo, servicio de mensajería, comparador de precios, etc. e indica el número aproximado de usuarios activos mensuales en la UE]

**Lo que necesito que me expliques:**

1. **Categorización de mi plataforma bajo el DSA:** El DSA establece distintas categorías con distintas obligaciones: servicios intermediarios, servicios de alojamiento, plataformas online y Very Large Online Platforms (VLOP, más de 45 millones de usuarios activos mensuales en la UE) o Very Large Online Search Engines (VLOSE). Determina en qué categoría entra mi plataforma y qué nivel de obligaciones me corresponde.

2. **Obligaciones de moderación de contenidos bajo el DSA:** Explica las nuevas exigencias del DSA respecto a contenidos ilegales: el sistema de notice and action (mecanismo de notificación y acción), los plazos de respuesta, la obligación de suspender a los usuarios que violan las normas repetidamente, el acceso de investigadores y las cuentas de confianza (Trusted Flaggers). Cómo debo documentar y reportar estas acciones a las autoridades.

3. **Transparencia algorítmica y sistemas de recomendación:** El DSA obliga a las plataformas a explicar cómo funcionan sus algoritmos de recomendación. Explica qué información debo proporcionar a los usuarios, la obligación de ofrecer alternativas no basadas en perfilado (para VLOPs), las auditorías de riesgo sistémico y los informes de transparencia anuales.

4. **Digital Markets Act: los Gatekeepers y sus obligaciones:** El DMA identifica a los "gatekeepers" (los grandes players como Google, Apple, Meta, Amazon) e impone sobre ellos obligaciones específicas que afectan también a las empresas que dependen de esas plataformas. Explica qué son las obligaciones de interoperabilidad, acceso a datos, no discriminación en los rankings y el auto-referenciamiento prohibido, y cómo estas reglas crean oportunidades o riesgos para mi negocio.

5. **Publicidad online y targeting bajo el DSA:** El DSA prohíbe el targeting publicitario basado en datos sensibles (ideología, orientación sexual, origen étnico) y prohíbe expresamente la publicidad dirigida a menores. Explica qué cambios técnicos y de proceso debo implementar en mi sistema de advertising si gestiono o sirvo publicidad en mi plataforma.

6. **Protección de menores online:** Tanto el DSA como otras normativas europeas específicas (como la futura Children's Online Protection Act europea) imponen obligaciones crecientes respecto a los usuarios menores de edad. Explica qué medidas debo implementar: verificación de edad, configuraciones de privacidad por defecto más restrictivas para menores, prohibición de ciertos tipos de contenido y diseño no manipulativo (sin dark patterns dirigidos a menores).

7. **Régimen sancionador y enforcement:** Las multas del DSA y el DMA son muy significativas. Explica la estructura de sanciones: porcentajes sobre el volumen de negocio global, la posibilidad de multas periódicas coercitivas, y quién supervisa el cumplimiento en España (el organismo competente designado) y a nivel europeo (la Comisión Europea para las VLOPs).

8. **Hoja de ruta de cumplimiento para mi plataforma:** Qué pasos concretos debo dar para cumplir con el DSA: designar un punto de contacto para las autoridades, publicar las condiciones del servicio de forma clara, implementar el mecanismo de reclamaciones internos, publicar informes de transparencia y (si soy VLOP) someterme a auditorías de riesgo independientes.

Quiero cumplir con estas normativas no solo para evitar sanciones, sino porque creo que plataformas mejor reguladas construyen más confianza con los usuarios. Ayúdame a entender qué tengo que hacer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Comprender y planificar el cumplimiento del DSA y el DMA para plataformas digitales europeas.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte para software empresarial (B2B SaaS)',
                'description'      => 'Gestión de tickets de empresas con múltiples usuarios, SLAs contractuales y la colaboración con el account manager.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Support especializado en empresas de software B2B SaaS con clientes corporativos. El soporte a clientes empresariales es radicalmente diferente al soporte a consumidores individuales: los SLAs están en el contrato, los errores tienen impacto en los negocios de tus clientes, y el contacto entre el agente de soporte y el account manager puede hacer o deshacer una renovación. Necesito ayuda para construir o mejorar mi función de soporte para este tipo de cliente.

**Contexto de mi empresa:**
[Describe el tipo de software, el número de clientes, el tamaño de esos clientes (SMB, mid-market, enterprise), el equipo de soporte actual y las principales quejas o problemas que recibes]

**Lo que necesito que me ayudes a diseñar:**

1. **Estructura del equipo de soporte B2B:** Explica cómo organizar el equipo para clientes enterprise: el modelo de capas (Tier 1, Tier 2, Tier 3 técnico), la figura del Technical Account Manager (TAM) para las cuentas más grandes, y cómo repartir la carga entre el soporte reactivo (tickets) y el soporte proactivo (health checks, onboarding de nuevos usuarios en la misma empresa).

2. **Gestión de SLAs contractuales:** En B2B, los SLAs no son una aspiración: están en el contrato y su incumplimiento puede generar penalizaciones o dar al cliente el derecho de resolución. Explica cómo categorizar la severidad de los incidentes (P1 crítico, P2 alto, P3 medio, P4 bajo), qué tiempos de respuesta y resolución son razonables para cada nivel, y cómo monitorizar el cumplimiento de SLA en tiempo real para no llegar tarde.

3. **El ticket empresarial: gestión de múltiples usuarios y stakeholders:** Cuando una empresa tiene 200 usuarios de tu software, los tickets vienen de muchas personas diferentes con diferentes niveles técnicos, urgencias percibidas y autoridad interna. Explica cómo manejar la multiplicidad de contactos: el usuario final que reporta el problema, el administrador técnico que tiene más contexto, y el responsable de la cuenta que quiere una actualización de estado para el CEO.

4. **Comunicación con el account manager:** El soporte y las ventas (en forma de CSM o AM) deben estar alineados en B2B. Explica cómo estructurar la comunicación interna: qué información debe fluir automáticamente del sistema de tickets al CRM del AM (volumen de tickets, tiempo de resolución, satisfacción del cliente, temas recurrentes), cuándo debe escalar el agente de soporte al AM, y cómo usar los datos de soporte para identificar señales de churn temprano.

5. **Escalaciones internas y gestión de incidentes críticos:** Cuando un cliente enterprise tiene un P1 (sistema caído, pérdida de datos, impacto en su negocio), el proceso debe ser rápido y tranquilizador. Diseña el playbook de gestión de incidentes críticos: quién se involucra internamente, con qué frecuencia se actualiza al cliente, cómo se hace el post-mortem y cómo se comunica al cliente la causa raíz y las medidas preventivas.

6. **Base de conocimiento y deflexión de tickets:** En B2B, los mismos problemas aparecen una y otra vez porque el software es complejo y los usuarios cambian. Explica cómo construir una base de conocimiento útil para clientes enterprise: artículos técnicos detallados, guías de administración, FAQs por caso de uso y vídeos de formación, y cómo medir su efectividad en términos de deflexión de tickets.

7. **Métricas de soporte B2B relevantes:** En B2B, el CSAT de un ticket individual importa menos que la salud global de la cuenta. Explica qué métricas rastrear: tiempo de primera respuesta y tiempo de resolución por severidad, ticket volume por cuenta, issues per active user, Customer Effort Score y, sobre todo, cómo correlacionar métricas de soporte con la tasa de renovación y expansión.

8. **El rol del soporte en la renovación y el upsell:** El equipo de soporte habla con los clientes más de lo que lo hace cualquier otro equipo. Explica cómo entrenar a los agentes para identificar señales de expansión (nuevos casos de uso, nuevos departamentos interesados) y señales de riesgo (frustración creciente, disminución del uso), y cómo pasar esa inteligencia al equipo de cuentas de forma sistemática.

En B2B SaaS, el soporte no es un centro de costes: es una palanca de retención y crecimiento. Ayúdame a construirlo como tal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una función de soporte para software empresarial B2B que proteja la retención de clientes.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Especializarse en el sector tech como freelance',
                'description'      => 'Diseñador, PM, marketer o consultor para startups y scaleups: el nicho con mejor relación demanda/oferta para el freelance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de posicionamiento para profesionales independientes con experiencia ayudando a freelancers a construir negocios sostenibles en el sector tecnológico. El mercado de freelancers que trabajan para startups y scaleups es uno de los más atractivos: los clientes están acostumbrados a trabajar con equipos distribuidos, valoran la autonomía y el expertise, y los presupuestos son más altos que en otros sectores. Pero también es competitivo. Necesito ayuda para posicionarme y conseguir proyectos de calidad en este mercado.

**Mi situación actual:**
[Describe tu especialidad (diseño UX, product management, marketing, desarrollo, consultoría), tus años de experiencia, el tipo de proyectos que has hecho hasta ahora y por qué quieres trabajar con empresas tech]

**Lo que necesito que me ayudes a construir:**

1. **Mi propuesta de valor diferenciada para el sector tech:** El sector tech no contrata a un freelance genérico: busca a alguien que entienda su mundo, su forma de trabajar y sus métricas. Ayúdame a articular una propuesta de valor que conecte mi especialidad con los problemas específicos de startups y scaleups: crecimiento rápido, equipos pequeños que necesitan expertise puntual, productos digitales que evolucionan constantemente.

2. **Posicionamiento por subsector o tipo de empresa:** Dentro de "tech" hay nichos muy diferentes: SaaS B2B, marketplaces de consumo, apps móviles, deeptech, fintech, edtech. Ayúdame a identificar el subsector donde mis habilidades tienen más valor, donde la competencia es menor y donde los presupuestos son más altos. ¿Debo especializarme aún más o mantener un posicionamiento más amplio dentro de tech?

3. **Tarifas para el mercado tech:** Las startups con financiación y las scaleups tienen presupuestos para freelancers muy superiores a los de otros sectores. Explica cómo investigar y fijar tarifas competitivas para mi especialidad en el mercado tech español e internacional: diferencias entre proyectos puntuales, retainers mensuales y contratos de larga duración, y cómo justificar tarifas altas con argumentos de ROI.

4. **Canales para encontrar clientes tech:** LinkedIn funciona para ciertas especialidades, pero el sector tech tiene sus propios canales. Explica cómo usar GitHub, Dribbble, Product Hunt, Indie Hackers, comunidades de Slack y Discord específicas de tech, eventos como la Spain Startup ecosystem (South Summit, 4YFN) y plataformas especializadas para encontrar proyectos de calidad. Para mi especialidad concreta, indica cuáles son más relevantes.

5. **Portfolio para clientes tech:** Las startups y VCs valoran el trabajo que puede demostrarse con métricas. Ayúdame a construir un portfolio orientado a clientes tech: casos de estudio con resultados cuantificados (aumenté la conversión un X%, reduje el time-to-market en Y semanas), proyectos de open source o side projects que demuestren expertise, y cómo presentar proyectos con NDA respetando la confidencialidad pero mostrando el proceso.

6. **El proceso de venta para proyectos tech:** Las startups deciden rápido pero también son exigentes. Explica cómo estructurar el proceso de ventas: la primera llamada de discovery, la propuesta adaptada al lenguaje de la startup (OKRs, sprints, métricas de producto), los términos del contrato que protegen al freelance (scope, propiedad intelectual, condiciones de pago) y cómo gestionar el regateo sin perder el proyecto.

7. **Integrarse en equipos tech como freelance externo:** Trabajar con equipos de ingeniería, diseño y producto como freelance externo requiere saber adaptarse a su forma de trabajar: sprints de Scrum o kanban, herramientas (Notion, Linear, Figma, Slack), code reviews si eres desarrollador o design critiques si eres diseñador. Explica cómo onboardearte rápido en un nuevo cliente tech y convertirte en alguien indispensable desde la primera semana.

8. **De los proyectos puntuales al retainer estable:** El freelance ideal para una startup no es el que aparece una vez y desaparece: es el que se convierte en el experto externo de confianza para esa función. Explica cómo transformar un proyecto puntual en un retainer mensual, qué proponer tras la entrega inicial, y cómo demostrar que merece la pena tenerme "en nómina" como externo mes a mes.

El sector tech es el mejor mercado para el freelance que quiera trabajar de forma interesante, con autonomía y con buenas tarifas. Ayúdame a posicionarme correctamente para acceder a él.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Posicionarse y conseguir proyectos freelance de calidad en startups y scaleups tecnológicas.',
                'vote_score'       => 43,
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
