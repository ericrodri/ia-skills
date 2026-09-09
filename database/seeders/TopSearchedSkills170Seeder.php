<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills170Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para seguros',
                'description'      => 'Estrategias de marketing en el sector asegurador donde el producto es invisible hasta el siniestro: mensajes que generan confianza y adquieren asegurados con alto LTV.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing del sector asegurador con experiencia en campañas de adquisición y retención para compañías de seguros, corredurías y plataformas insurtech. Conoces la peculiaridad de vender un producto que el cliente espera no necesitar nunca, y has desarrollado estrategias que convierten la confianza en el principal argumento de venta.

Necesito que me ayudes a desarrollar una estrategia de marketing para mi empresa del sector asegurador.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de empresa (aseguradora directa, correduría, comparador, insurtech, agente exclusivo), líneas de negocio (auto, hogar, vida, salud, empresa), mercado objetivo y el principal problema de marketing que quieres resolver]

**Lo que necesito que desarrolles:**

1. **El reto fundamental del marketing de seguros**
   - Por qué los seguros son el producto más difícil de vender desde el marketing: la paradoja de desear que el producto no se use
   - Cómo construir deseo por un producto cuya promesa es abstracta: las emociones que funcionan (protección, tranquilidad, responsabilidad) y las que generan rechazo (miedo excesivo)
   - El rol de la confianza en la decisión de compra: por qué el asegurado compra a quien le da menos miedo, no a quien le ofrece más

2. **Posicionamiento y diferenciación**
   - Las estrategias de diferenciación en un mercado donde los productos son muy similares: servicio, especialización, precio, canal, experiencia
   - Cómo comunicar coberturas complejas de forma simple sin perder precisión: el copy de seguros que convierte
   - El papel de la marca personal en la venta de seguros: cuándo el corredor o agente ES la marca
   - Los segmentos donde la especialización paga: seguros para autónomos, colectivos profesionales, expatriados, segunda vivienda

3. **Adquisición de clientes**
   - SEO para seguros: las keywords de alta conversión, la guerra de precios en Google Ads y cuándo tiene sentido competir
   - Los comparadores como canal: sus ventajas e inconvenientes para cada tipo de empresa aseguradora
   - Marketing de contenidos para seguros: los temas que posicionan y generan leads cualificados sin ser aburridos
   - Lead generation B2B: cómo conseguir acuerdos con empresas para seguros colectivos y de empleados
   - Redes sociales en seguros: por qué casi nadie lo hace bien y qué tipo de contenido sí funciona en este sector

4. **El momento del siniestro como herramienta de marketing**
   - La gestión del siniestro como mayor oportunidad de fidelización: cómo comunicar proactivamente para convertir una mala experiencia en lealtad
   - Los testimoniales de siniestro: el contenido más poderoso del sector y cómo obtenerlos éticamente
   - El NPS en seguros: cuándo medir, cómo actuar sobre los detractores y cómo convertir promotores en referidos activos

5. **Retención y reducción del churn**
   - Las señales de riesgo de baja que se pueden detectar antes de la renovación: cómo usarlas para activar retención proactiva
   - La comunicación de subida de prima: el momento más delicado del año y cómo abordarlo sin perder el cliente
   - Los programas de fidelización en seguros: qué funciona y qué no, y por qué los descuentos por lealtad tienen un efecto perverso
   - Cross-selling y up-selling: cómo vender más al cliente existente sin parecer agresivo

6. **Marketing digital específico**
   - Landing pages para seguros: los elementos que generan conversión y los que la destruyen
   - Email marketing post-cotización: la secuencia que recupera el lead que no contrató
   - WhatsApp Business en seguros: el canal que está funcionando para renovaciones y atención
   - Los chatbots en seguros: qué funciones tienen sentido y dónde el cliente necesita un humano

7. **Cumplimiento normativo y marketing**
   - Los límites de la publicidad de seguros: qué no puedes decir aunque sea verdad
   - LOPD y GDPR en las campañas de seguros: la gestión del consentimiento y las listas de prospección
   - La DGS y las normas de conducta en la distribución de seguros (IDD): las obligaciones de información que afectan al marketing

Dame una estrategia accionable con ejemplos concretos del sector, benchmarks de conversión cuando los tengas disponibles y las acciones de mayor impacto según el tipo y tamaño de mi empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de marketing para aseguradoras, corredurías e insurtech con enfoque en confianza y retención',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Insurtech: software para seguros',
                'description'      => 'Sistemas que digitalizan el seguro: cotización online, suscripción automatizada, gestión de siniestros y cómo la IA transforma el sector asegurador.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en plataformas insurtech con experiencia en sistemas de cotización, suscripción automatizada, gestión de siniestros y los core systems que moderniza las aseguradoras. Has trabajado tanto en startups insurtech como en proyectos de transformación digital de aseguradoras tradicionales.

Necesito orientación técnica para desarrollar o modernizar software del sector asegurador.

**Mi contexto:**
[DESCRIBE TU PROYECTO: tipo de sistema (motor de cotización, plataforma de suscripción, gestión de siniestros, portal de agente/corredor, API de integración, sistema de detección de fraude), si es un nuevo desarrollo o modernización de un legacy, las integraciones que necesitas y el principal reto técnico que quieres resolver]

**Áreas que necesito que cubras:**

1. **Arquitectura de un sistema de seguros moderno**
   - Los componentes core de un insurance system: PMS (Policy Management), CMS (Claims Management), Billing y sus integraciones
   - La decisión de build vs buy en cada componente: dónde tiene sentido desarrollar a medida y dónde usar plataformas SaaS como Guidewire, Duck Creek o los players europeos
   - El modelo de microservicios para seguros: cómo descomponer el monolito legacy manteniendo la consistencia transaccional de los contratos de seguro
   - Event-driven architecture en seguros: los eventos del ciclo de vida de la póliza y cómo modelarlos

2. **Motor de cotización y suscripción**
   - Cómo diseñar un motor de reglas de suscripción flexible que el equipo actuarial pueda mantener sin deploys
   - Rule engines: Drools, Easy Rules, sistemas propios y cuándo usar cada uno
   - La integración con fuentes de datos externas en tiempo real: registros de la DGT, catastro, historial crediticio, APIs meteorológicas para seguros de cosecha
   - El cálculo de primas: cómo modelar la tarificación actuarial en código mantenible
   - A/B testing de precios y coberturas: cómo instrumentar el motor para experimentar con la suscripción

3. **Gestión de siniestros digital**
   - El flujo de notificación de siniestro: desde el FNOL (First Notice of Loss) hasta el cierre, los estados y las transiciones
   - Automatización de siniestros simples: los criterios para el straight-through processing y los triggers que requieren revisión humana
   - Integración con peritos y talleres: las APIs y los formatos de intercambio (XML-based, REST) que usa el sector en España
   - El sistema de reservas técnicas: cómo el sistema de siniestros alimenta la contabilidad de reservas de la aseguradora

4. **IA y ML en seguros**
   - Detección de fraude: los modelos que funcionan para fraude de siniestro, el fraude en la suscripción y los datos que necesitas para entrenarlos
   - Pricing con ML: las ventajas del pricing actuarial clásico vs modelos de ML y cuándo la complejidad del modelo ML vale la pena
   - NLP en siniestros: extracción de información de partes de accidente, clasificación automática y triage
   - Computer vision: valoración de daños a partir de fotos (taller virtual) y los proveedores que ofrecen APIs de valoración
   - Chatbots de siniestros: qué funciones automatizar y dónde la IA genera más fricción que valor

5. **Integraciones del ecosistema asegurador**
   - ICEA y el intercambio de datos entre aseguradoras: los estándares y los protocolos de comunicación del sector en España
   - Fichero Histórico de Vehículos Asegurados (FHVA) y la Base de Datos de Siniestros (BDS): cómo integrarlos
   - Comparadores (Acierto, Rastreator, Kelisto): la API de cotización y los requisitos técnicos de cada plataforma
   - Plataformas de distribución B2B: las integraciones con corredurías y mediadores a través de APIs REST o SOAP legacy

6. **Regulación técnica aplicada al software**
   - SOLVENCIA II y sus implicaciones en el sistema de gestión de datos y reporting
   - IDD (Insurance Distribution Directive): los requisitos de trazabilidad en el proceso de venta que el software debe soportar
   - GDPR en seguros: la gestión del consentimiento, el derecho al olvido y cómo implementarlo en sistemas de siniestros con obligaciones de retención
   - Requisitos de la DGSFP para los sistemas de información de las aseguradoras

7. **Mi reto técnico específico**
   - Analiza el problema o proyecto que he descrito y dame un plan de arquitectura
   - Las decisiones técnicas críticas que tomaría y por qué
   - Los riesgos del proyecto y cómo mitigarlos desde el diseño

Responde con profundidad técnica, incluye ejemplos de modelado de datos, diagramas de flujo en texto y referencias a herramientas y estándares del sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Arquitectura de software para sistemas de cotización, suscripción y siniestros en seguros',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para seguros',
                'description'      => 'Diseño de contratación y gestión de seguros online: simplificación de formularios, comunicación de coberturas complejas y experiencia que evita llamadas al call center.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX senior especializado en el sector asegurador con experiencia en el rediseño de flujos de contratación, portales de cliente y apps de seguros. Has reducido abandonos en procesos de cotización, aumentado la tasa de contratación online y conseguido que los clientes gestionen sus seguros sin necesitar el call center.

Necesito que me ayudes a diseñar o mejorar la experiencia de usuario de mi plataforma de seguros.

**Mi contexto:**
[DESCRIBE TU PROYECTO: tipo de interfaz (web de contratación, app de cliente, portal de mediador, proceso de declaración de siniestro online, renovación), el problema concreto de UX que quieres resolver y los datos de conversión o satisfacción actuales si los tienes]

**Lo que necesito que desarrolles:**

1. **El reto de diseño en seguros**
   - Por qué el seguro es uno de los productos más difíciles de diseñar: la abstracción del producto, el lenguaje técnico-legal y la baja motivación del usuario
   - Los principios de diseño específicos para seguros: transparencia radical, lenguaje humano y la progresión de complejidad (no mostrar todo a la vez)
   - Cómo diseñar para los tres momentos del seguro: contratación, gestión de la póliza y siniestro (cada uno tiene necesidades completamente distintas)

2. **Diseño del proceso de cotización**
   - La progresión de preguntas: cómo ordenar los campos para que el usuario llegue al precio sin abandonar
   - El diseño de formularios de seguro: campos complejos (VIN, NIF, profesiones, actividades), validación en tiempo real y mensajes de error que ayudan
   - La estimación de tiempo: por qué mostrar un indicador de progreso reduce el abandono y cómo hacerlo honestamente
   - El precio revelado: el momento de mostrar el precio, cómo presentar los rangos y cómo gestionar el impacto emocional negativo
   - Las comparativas de cobertura: cómo diseñar tablas de coberturas que el usuario entienda sin necesitar un asesor

3. **Comunicar coberturas complejas**
   - Plain language en seguros: la transformación de las condiciones generales en comunicación comprensible sin perder precisión legal
   - Los iconos y visualizaciones que ayudan a entender qué cubre y qué no
   - La gestión de las exclusiones: cómo comunicarlas sin asustar al usuario pero sin ocultarlas
   - Los ejemplos situacionales: cómo usar escenarios cotidianos para explicar coberturas abstractas
   - La franquicia y las coberturas opcionales: el diseño que ayuda a decidir sin abrumar

4. **Diseño del portal de cliente**
   - La arquitectura de información del área privada: qué quiere ver el asegurado cuando entra y cómo priorizarlo
   - La visualización de la póliza: documentos descargables vs información interactiva y cuándo usar cada uno
   - Gestión de datos personales y vencimientos: los recordatorios que reducen las bajas por olvido de renovación
   - La comunicación de la subida de prima: el diseño que minimiza el impacto negativo y retiene al cliente

5. **El proceso de declaración de siniestro online**
   - El diseño del FNOL digital: cómo guiar al usuario en un momento de estrés para recopilar la información necesaria
   - Subida de documentación y fotos: los flujos que funcionan en mobile y los que generan abandono
   - El seguimiento del siniestro: cómo diseñar el tracking que reduce las llamadas al call center
   - La comunicación de resoluciones negativas: el diseño que comunica el rechazo sin generar reclamación

6. **Diseño para la reducción del call center**
   - Los top 10 motivos de llamada que se pueden resolver con buen diseño: cuáles son y qué diseño los elimina
   - El autoservicio de cambios de póliza: cómo diseñar modificaciones de datos, vehículos y coberturas sin intermediario
   - Los patrones de diseño de aseguradoras que lo hacen bien: Lemonade, Cuvva, Alan y qué podemos aprender de ellas

7. **Investigación de usuario en seguros**
   - Los métodos de investigación que funcionan para un producto de baja implicación: cuándo hacer entrevistas, tests de usabilidad y encuestas
   - Las métricas de UX que importan en seguros: ratio de cotización completada, tiempo en proceso de contratación, tasa de autogestion vs llamada
   - Cómo testear el diseño de seguros sin tener acceso a usuarios reales que estén comprando

Dame recomendaciones con ejemplos concretos, wireframes descritos en texto para los flujos más críticos y los errores de diseño más frecuentes que cometen los equipos cuando diseñan seguros sin experiencia en el sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseño UX de flujos de contratación, gestión de pólizas y declaración de siniestros online',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de seguros corporativos',
                'description'      => 'Los seguros de empresa (RC, D&O, cyber) son productos complejos: venta consultiva, análisis de riesgos del cliente y propuesta técnica que diferencia al corredor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un corredor de seguros corporativos senior con experiencia en la venta de programas de seguro para empresas medianas y grandes: responsabilidad civil, D&O, cyber, crédito comercial, transporte y grandes riesgos. Conoces el proceso de venta consultiva que exige este tipo de seguros y la negociación con las aseguradoras para colocar riesgos complejos.

Necesito que me ayudes a mejorar mi proceso de venta de seguros corporativos.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de seguros corporativos en los que te especializas, perfil de empresa cliente (tamaño, sector), el principal obstáculo en tu proceso de venta y si hay una propuesta o tipo de cliente concreto en el que quieres trabajar]

**Lo que necesito que desarrolles:**

1. **El proceso de venta consultiva de seguros corporativos**
   - Por qué los seguros corporativos no se venden, se asesoran: la diferencia entre el mediador transaccional y el consultor de riesgos
   - La primera reunión con el director financiero o el risk manager: qué preguntas hacen los mejores corredores para descubrir el riesgo real del cliente
   - El análisis de la póliza actual del cliente: cómo auditar la cobertura existente e identificar gaps que el cliente no sabía que tenía
   - El informe de análisis de riesgos: la herramienta que convierte al corredor en asesor y justifica el cambio de mediador

2. **Los productos más complejos y cómo venderlos**
   - Responsabilidad Civil de Empresa y RC General: cómo explicar las coberturas, los sublímites y las exclusiones a un director financiero sin formación aseguradora
   - D&O (Directors & Officers): el seguro que los consejeros no saben que necesitan hasta que lo necesitan urgentemente, y cómo presentarlo al consejo
   - Cyber seguro: el producto más demandado y más mal vendido del mercado, las coberturas reales, las exclusiones habituales y cómo hacer el análisis de exposición del cliente
   - Crédito comercial: cuándo tiene sentido, cómo se integra con la política de crédito de la empresa y la propuesta de valor para el director financiero
   - Transporte y mercancías: los contratos de compraventa, los incoterms y cómo la cobertura depende de quién asume el riesgo en cada tramo

3. **La propuesta técnica que diferencia**
   - Estructura de una propuesta técnica de seguros corporativos que gana: qué incluye y en qué orden
   - Cómo presentar varias opciones de aseguradoras sin que el cliente elija solo por precio
   - El cuadro comparativo de coberturas: cómo construir la comparativa que muestra el valor real de cada opción
   - La propuesta de valor del corredor: qué servicios adicionales (gestión de siniestros, revisión anual, reportes) incluir para justificar la tarifa

4. **Negociación con aseguradoras**
   - Cómo presentar el riesgo a la aseguradora para obtener la mejor tarifa: el submission que abre puertas en mercados difíciles
   - Lloyd's y mercados alternativos: cuándo acudir al mercado de Londres y cómo trabajar con los brokers de Lloyd's
   - La negociación de condiciones vs precio: cuándo pedir más cobertura en vez de menos precio
   - El co-seguro y el reaseguro explicado al cliente: cuándo es necesario y qué significa para la gestión de siniestros

5. **Gestión del cliente corporativo**
   - El ciclo de renovación: cuándo empezar, qué información pedir al cliente y el calendario que evita las prisas de último momento
   - Las revisiones intermedias: cómo convertir la revisión de midterm en una oportunidad de venta adicional
   - La gestión de siniestros corporativos: por qué el corredor que gestiona bien un siniestro complejo fideliza para siempre
   - El comité de seguros del cliente: cómo presentar el programa anual al comité de dirección y cómo defender la cobertura contratada

6. **Desarrollo de negocio en seguros corporativos**
   - Cómo acceder a empresas medianas que no tienen corredor especializado: los canales y los mensajes que funcionan
   - Las alianzas estratégicas: con quién colaborar para llegar a clientes corporativos (asesores fiscales, abogados, bancos de empresa)
   - La especialización sectorial como ventaja competitiva: los sectores donde un corredor con conocimiento del sector gana siempre
   - El pitch de cambio de corredor: cómo presentar la propuesta cuando el cliente ya tiene mediador y no está insatisfecho

Dame un proceso de venta paso a paso, con guiones para los momentos más críticos de la conversación y los argumentos específicos para cada tipo de producto y perfil de decisor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Proceso de venta consultiva de seguros corporativos RC, D&O y cyber para corredores',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto de seguros embedded',
                'description'      => 'Seguros integrados en otros productos: el coche que viene con seguro, el ecommerce que ofrece garantía extendida y decisiones de producto cuando el seguro es un feature.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior especializado en seguros embedded (integrados), con experiencia en proyectos donde el seguro se convierte en un feature de otro producto: plataformas de ecommerce, fabricantes de productos, plataformas de viaje, marketplaces y aplicaciones fintech. Conoces tanto el negocio del seguro como las decisiones de producto de las plataformas que los integran.

Necesito orientación para diseñar o mejorar un producto de seguro embedded en mi plataforma.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de plataforma o producto donde quieres integrar el seguro, el tipo de seguro que quieres ofrecer, si ya tienes una aseguradora partner o estás evaluando opciones, y el principal problema de producto que quieres resolver]

**Lo que necesito que analices:**

1. **La oportunidad del seguro embedded**
   - Por qué el seguro embedded convierte mejor que el seguro tradicional: el contexto de compra, la relevancia y la eliminación de fricción
   - Los casos de uso donde el embedded tiene más sentido: garantías, seguros de viaje, seguro de dispositivo, protección de compra, RC de plataformas de servicios
   - Los casos donde el embedded NO funciona: cuándo el seguro necesita asesoramiento y cuándo integrarlo crea confusión

2. **Decisiones de producto en el seguro embedded**
   - Opt-in vs opt-out: las implicaciones de cada modelo en conversión, satisfacción del cliente y regulación
   - El momento de la oferta en el flujo de compra: cuándo ofrecerlo para maximizar conversión sin crear fricción
   - El precio del seguro embedded: precio por unidad, suscripción incluida, precio fijo vs dinámico y cómo afecta a los márgenes de la plataforma
   - La transparencia de coberturas en el contexto del producto: cuánto detalle necesita el usuario para tomar la decisión y dónde ponerlo sin interrumpir el flujo

3. **Arquitectura del producto embedded**
   - Las capas del producto de seguro embedded: la plataforma de distribución, el MGA (Managing General Agent), el reasegurador y cómo cada capa añade coste y complejidad
   - Cómo elegir al partner asegurador: los criterios de evaluación técnica (APIs, velocidad de integración, capacidad de personalización) y comercial (comisiones, capital regulatorio, apetito por el riesgo)
   - La API del seguro embedded: qué endpoints son críticos (cotización, emisión, cancelación, siniestro) y los SLAs que debes exigir al partner
   - Las plataformas de insurance-as-a-service: Qover, Companjon, Wakam, Cover Genius y cómo se comparan para distintos casos de uso

4. **Regulación aplicada al embedded**
   - La IDD (Insurance Distribution Directive) y el embedded: cuándo la plataforma se convierte en distribuidor de seguros y qué obligaciones lleva
   - Los registros regulatorios que necesitas: agente de seguros inscrito en la DGSFP, las condiciones para actuar como auxiliar externo
   - La información precontractual obligatoria: cómo cumplir con el DIP (Documento de Información sobre el Producto de Seguro) en un flujo de compra de 30 segundos
   - El consentimiento en embedded: las obligaciones de opt-in informado y cómo implementarlas sin destruir la conversión

5. **Métricas del producto embedded**
   - Las métricas de éxito que importan: attach rate, loss ratio, claims satisfaction, impact on main product NPS
   - El attach rate por segmento: cómo segmentar para entender qué usuarios valoran más el seguro y optimizar la oferta
   - El impacto del seguro en la retención del producto principal: los datos que justifican el embedded ante el CEO
   - Cómo medir si el seguro embedded está añadiendo o restando valor a la experiencia del usuario

6. **Gestión de siniestros en el contexto embedded**
   - La experiencia de siniestro es tu responsabilidad aunque no seas la aseguradora: cómo garantizar que el partner resuelve bien
   - El proceso de reclamación desde la plataforma: cómo integrarlo en la app sin redirigir al usuario a un tercero
   - El SLA de siniestros que debes negociar con el partner y los mecanismos de penalización si no se cumple
   - Cómo comunicar las exclusiones antes del siniestro para evitar la frustración que destruye la confianza en tu plataforma

7. **Roadmap del producto embedded**
   - La secuencia de lanzamiento: qué versión del producto embedded tiene sentido como MVP y cómo evolucionar
   - Las expansiones naturales del producto: de un seguro a una suite de protección completa
   - Cuándo tiene sentido construir capacidad aseguradora propia vs seguir con el modelo de distribución

Dame un análisis específico para mi caso, con los criterios de decisión para los puntos más críticos y benchmarks de attach rate y conversión cuando los tengas disponibles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de producto de seguro embedded integrado en plataformas ecommerce, travel y fintech',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de riesgos de personas',
                'description'      => 'Riesgos laborales, seguros de empleados y el programa de gestión de riesgos que protege a la empresa y cumple con las obligaciones de seguridad laboral.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con especialización en gestión de riesgos de personas y seguridad laboral, con experiencia en el diseño de programas de prevención de riesgos laborales, seguros de empleados y planes de respuesta a emergencias de personas. Has trabajado en empresas de distintos sectores y conoces las obligaciones legales y las mejores prácticas en España.

Necesito diseñar o auditar el programa de gestión de riesgos de personas de mi empresa.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: sector de actividad, tamaño de plantilla, tipos de puestos de trabajo (oficina, trabajo en campo, industria, teletrabajo), si tienes ya un programa de PRL implantado y el principal riesgo o problema que quieres abordar]

**Lo que necesito que desarrolles:**

1. **Marco de gestión de riesgos de personas**
   - La diferencia entre prevención de riesgos laborales (PRL) y gestión de riesgos de personas: cómo el enfoque de RRHH amplía la visión más allá del accidente de trabajo
   - Los riesgos de personas que más impactan al negocio: accidentes laborales, baja por enfermedad, absentismo, desvinculación inesperada de personas clave y burnout
   - El mapa de riesgos de personas: cómo construirlo por tipo de puesto y departamento
   - La integración entre PRL, RRHH y dirección: quién es responsable de qué y cómo coordinar sin duplicar

2. **Obligaciones legales en seguridad laboral en España**
   - La Ley 31/1995 de Prevención de Riesgos Laborales: las obligaciones del empresario que hay que conocer sí o sí
   - El plan de prevención, la evaluación de riesgos y la planificación de la actividad preventiva: qué debe contener cada documento y con qué periodicidad revisarlo
   - Las modalidades de organización preventiva: servicio de prevención propio, ajeno, mancomunado y cuándo aplica cada uno según el tamaño y sector
   - La vigilancia de la salud: los reconocimientos médicos obligatorios vs voluntarios y cuándo son obligatorios
   - Las responsabilidades del empresario en materia de PRL: administrativa, civil y penal, y los casos que más litigiosidad generan

3. **Seguros de empleados**
   - El mapa de coberturas de seguros de personas para empresas: accidentes, vida, salud, dependencia e incapacidad
   - El seguro de accidentes de trabajo obligatorio (Mutua de AT y EP): qué cubre la mutua y qué no cubre
   - El seguro de vida colectivo de empresa: cuándo tiene sentido, las coberturas estándar y cómo negociar con la aseguradora
   - El seguro médico de empresa: el beneficio más valorado por los empleados, cómo elegir la póliza y los criterios de acceso
   - La retribución flexible y los seguros: cómo los seguros de salud y vida pueden ser parte del plan de retribución flexible con eficiencia fiscal

4. **Gestión del absentismo y la incapacidad temporal**
   - El coste real del absentismo para la empresa: cómo calcularlo y cuánto suele ser invisible en la contabilidad
   - Los protocolos de seguimiento de bajas de larga duración: el equilibrio entre el cuidado del empleado y la gestión de la capacidad del equipo
   - La reincorporación tras una baja larga: los programas de retorno progresivo que funcionan y los que generan recaída
   - La gestión de la incapacidad permanente: el proceso y las obligaciones del empleador cuando el trabajador no puede reincorporarse

5. **Riesgos psicosociales**
   - El estrés laboral y el burnout como riesgos laborales: la obligación de evaluarlos desde la reforma del RSST y las NTP del INSST
   - El protocolo de prevención del acoso laboral y sexual: los elementos que debe contener y los pasos en la gestión de una denuncia
   - El trabajo en remoto y los nuevos riesgos psicosociales: la desconexión digital, el aislamiento y los riesgos ergonómicos del teletrabajo
   - Cómo medir el bienestar de la plantilla: encuestas de clima, indicadores de absentismo y las señales tempranas de riesgo psicosocial

6. **Planes de continuidad de negocio desde la perspectiva de personas**
   - La gestión de la pérdida de personas clave: el plan de sucesión como herramienta de gestión de riesgos
   - Los planes de emergencia y evacuación: los requisitos legales y cómo integrarlos en la cultura de la empresa
   - La gestión de crisis de personas: pandemias, accidentes graves, fallecimiento de un empleado y el protocolo de actuación de RRHH

7. **Auditoría y mejora continua**
   - Cómo auditar el programa de PRL actual: los indicadores que señalan que el sistema tiene lagunas
   - Los KPIs de seguridad laboral que importan: índice de frecuencia, índice de gravedad, tasa de absentismo y cómo compararlos con el sector
   - El plan de mejora: cómo priorizar las acciones preventivas con criterio de coste-beneficio

Dame un diagnóstico y plan de acción concreto para mi situación, con las acciones de cumplimiento mínimo que son obligatorias y las mejoras que aportan más valor con menor inversión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Programa de gestión de riesgos de personas: PRL, seguros de empleados y absentismo',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de riesgos financieros',
                'description'      => 'Identificación, medición y gestión de riesgos financieros: tipos de interés, divisas, crédito y liquidez, y los instrumentos que los cubren.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con especialización en gestión de riesgos de mercado, con experiencia en el diseño e implementación de programas de cobertura de riesgos financieros para empresas industriales, exportadoras y del sector servicios. Conoces tanto la teoría del risk management como la práctica de negociar coberturas con bancos y contrapartidas.

Necesito que me ayudes a diseñar o mejorar el programa de gestión de riesgos financieros de mi empresa.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: sector de actividad, volumen de facturación aproximado, principales exposiciones financieras (divisas en las que operas, deuda a tipo variable, plazo medio de cobro de clientes, dependencia de materias primas), y el riesgo financiero que más preocupa a tu dirección]

**Lo que necesito que analices:**

1. **Identificación y cuantificación de riesgos financieros**
   - El mapa de riesgos financieros de una empresa no financiera: riesgo de tipo de interés, riesgo de tipo de cambio, riesgo de crédito y riesgo de liquidez
   - Cómo cuantificar la exposición real: la diferencia entre exposición contable, económica y de flujo de caja
   - El VaR (Value at Risk) aplicado a empresa no financiera: cuándo tiene sentido calcularlo y cuándo es complejidad sin utilidad
   - El análisis de sensibilidad: cómo calcular el impacto en el EBIT de movimientos en los tipos de cambio o de interés

2. **Riesgo de tipo de cambio**
   - Los tipos de exposición al cambio: transaccional (facturación en divisas), traslación (consolidación de filiales) y económica (competidores con costes en otra divisa)
   - La política de cobertura de divisas: cuándo cubrir, cuánto cubrir y hasta qué horizonte temporal
   - Los instrumentos de cobertura de divisas: forward de divisa, opciones, opciones con barrera y cuándo usar cada uno
   - El natural hedging: cómo estructurar las operaciones para reducir la exposición neta antes de usar derivados
   - La contabilidad de coberturas (hedge accounting): qué requisitos tiene y cuándo vale la pena implementarla

3. **Riesgo de tipo de interés**
   - La exposición al tipo de interés en empresas con deuda variable: cómo calcular el impacto de una subida de tipos en la cuenta de resultados
   - Los instrumentos de cobertura de tipos: IRS (Interest Rate Swap), cap de tipos, collar y cuándo usar cada uno
   - La decisión fijo vs variable: el análisis que debería preceder a cada operación de financiación
   - La renegociación de coberturas cuando cambia la estructura de deuda: las trampas y los costes que no se anticipan

4. **Riesgo de crédito de clientes**
   - El análisis de la cartera de clientes desde la perspectiva del riesgo: concentración, días de cobro y señales de deterioro
   - El seguro de crédito comercial: cuándo tiene sentido, qué cubre realmente y qué no cubre
   - El factoring y el confirming como instrumentos de gestión de riesgo de crédito y liquidez a la vez
   - Las garantías bancarias y los avales: cuándo exigirlos y cómo estructurarlos para que sean ejecutables

5. **Riesgo de liquidez**
   - El cash flow forecast: cómo construir la previsión de tesorería a 13 semanas que evita las sorpresas
   - Las líneas de crédito como seguro de liquidez: cuánto tener disponible y qué condiciones negociar
   - El capital circulante como fuente de riesgo: el impacto del alargamiento de plazos de cobro y el acortamiento de plazos de pago
   - La gestión de la tesorería excedentaria: los instrumentos de inversión a corto plazo con los que las empresas no financieras no deberían tomar riesgos

6. **Diseño de la política de gestión de riesgos financieros**
   - Los componentes de una política de riesgos financieros que el consejo pueda aprobar: objetivos, límites, instrumentos permitidos y gobernanza
   - La segregación de funciones: quién propone la cobertura, quién la aprueba y quién la ejecuta
   - El reporting de riesgos financieros: qué frecuencia, qué indicadores y cómo presentarlo al consejo
   - La relación con los bancos: cómo negociar las líneas de derivados y los ISDA/CMOF que los soportan

7. **Mi riesgo específico**
   - Analiza la exposición que he descrito y dame la estrategia de cobertura que implementarías
   - Los instrumentos concretos, los horizontes de cobertura y los costes aproximados que debería anticipar
   - Las preguntas que hacerle a mi banco antes de contratar cualquier instrumento de cobertura

Sé concreto con los costes y los mecanismos de funcionamiento de cada instrumento, y señala claramente cuándo la cobertura crea riesgos nuevos que hay que gestionar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Programa de cobertura de riesgos financieros: divisas, tipos de interés, crédito y liquidez',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Seguros y cobertura de riesgos legales',
                'description'      => 'Seguros de RC profesional, D&O, cyber y las pólizas que el departamento legal debe entender para proteger a la empresa ante reclamaciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado corporativo con especialización en seguros y gestión de riesgos legales, con experiencia en el asesoramiento a departamentos jurídicos sobre la contratación de seguros de responsabilidad, la gestión de siniestros con cobertura aseguradora y la interacción entre el sistema de seguros y el derecho de daños. Conoces las pólizas desde dentro y sabes cómo usarlas cuando se necesitan.

Necesito que me ayudes a entender y mejorar la cobertura de seguros de riesgos legales de mi empresa.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de empresa (sector, tamaño, si cotiza o no), las pólizas que ya tienes, el riesgo legal que más te preocupa y si hay un evento concreto (reclamación, auditoría, expansión) que ha motivado esta revisión]

**Lo que necesito que analices:**

1. **El mapa de riesgos legales asegurables**
   - Qué riesgos legales de la empresa son asegurables y cuáles no lo son (dolo, multas administrativas, obligaciones contractuales incumplidas deliberadamente)
   - Los seguros que cubre el perímetro legal: RC Profesional, D&O, Cyber, RC General, RC de Producto, Environmental Liability
   - Cómo hacer el mapa de riesgos legales de la empresa: el método que permite priorizar qué seguros contratar primero

2. **RC Profesional (E&O / Professional Liability)**
   - Qué cubre exactamente la RC profesional: el error u omisión en la prestación del servicio profesional y las reclamaciones de terceros
   - Las exclusiones más importantes que el abogado debe conocer: dolo, conocimiento de circunstancias anteriores, reclamaciones entre partes relacionadas
   - La cláusula claims-made: por qué la RC profesional funciona diferente a otros seguros y qué pasa cuando se cambia de aseguradora
   - El extended reporting period (cola): qué es, cuándo contratarlo y cuánto cuesta habitualmente

3. **D&O (Directors & Officers / Responsabilidad de Administradores)**
   - El riesgo personal de los administradores que cubre el D&O: responsabilidad frente a accionistas, acreedores, reguladores y terceros
   - Las coberturas Side A, Side B y Side C: qué cubre cada una y por qué es importante distinguirlas
   - Las exclusiones críticas del D&O: el fraude, el beneficio ilícito, las reclamaciones entre directivos y las reclamaciones de la propia empresa
   - El D&O en procesos concursales: la cobertura que más se necesita cuando la empresa tiene dificultades financieras y las restricciones que impone el concurso
   - El D&O para empresas no cotizadas: cuándo tiene sentido para una pyme o empresa familiar

4. **Seguro Cyber**
   - Las coberturas del seguro cyber que el departamento legal debe verificar: RC por brecha de datos, defensa ante reguladores (AEPD), costes de gestión del incidente, cyber extorsión y pérdida de beneficio
   - Las exclusiones habituales que dejan sin cobertura los siniestros más frecuentes: sistemas sin parchar, guerra cibernética, empleados deshonestos
   - El proceso de notificación del siniestro cyber: los plazos que hay que cumplir para no perder la cobertura
   - La relación entre el seguro cyber y el RGPD: cómo la póliza cubre los costes de la notificación a la AEPD y a los afectados

5. **Gestión del siniestro con cobertura aseguradora**
   - Los errores del departamento legal en la gestión de siniestros con seguro: no notificar a tiempo, no coordinar con la aseguradora antes de asumir responsabilidad
   - El control de la defensa: cuándo la aseguradora elige al abogado y cuándo tienes derecho a elegir el tuyo
   - El conflicto de intereses entre el abogado de la aseguradora y los intereses del asegurado: cómo detectarlo y qué hacer
   - La reserva de derechos (reservation of rights): qué significa cuando la aseguradora la emite y cuáles son tus opciones

6. **Revisión y negociación de pólizas**
   - Las cláusulas que el abogado corporativo debe revisar en cualquier póliza de responsabilidad: jurisdicción, elección de ley, mecanismo de arbitraje, sublímites y coagregado
   - La negociación de endorsements: las mejoras de cobertura que se pueden añadir y cómo pedirlas al corredor
   - Los programas internacionales de seguros: la cobertura DIC/DIL y cómo funciona para una empresa con operaciones en varios países
   - El warranty and indemnity insurance en M&A: cuándo tiene sentido en una adquisición y qué cubre

7. **Mi riesgo legal específico**
   - Analiza el riesgo o situación que he descrito y dame la evaluación de cobertura actual
   - Las lagunas que deberías cubrir urgentemente y las que son menos prioritarias
   - Las preguntas que hacerle a tu corredor en la próxima renovación

Dame análisis precisos, señala los tecnicismos del sector asegurador que afectan a los derechos del asegurado y explica las cláusulas problemáticas con ejemplos de cómo se aplican en la práctica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Revisión de coberturas de RC Profesional, D&O y Cyber desde el departamento legal',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de reclamaciones y siniestros',
                'description'      => 'El proceso de reclamación es el momento de la verdad del seguro: protocolos que resuelven rápido, criterios de escalado y comunicación que convierte un siniestro en fidelización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de operaciones de siniestros con experiencia en la gestión de reclamaciones en aseguradoras y corredurías, tanto en seguros de masa (auto, hogar, salud) como en seguros corporativos. Has diseñado los procesos que hacen que un siniestro se resuelva rápido, justa y de forma que el asegurado quede satisfecho incluso cuando la resolución no es la que esperaba.

Necesito orientación para gestionar siniestros específicos o para diseñar los procesos de reclamaciones de mi organización.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de organización (aseguradora, correduría, empresa de asistencia, plataforma insurtech), los ramos o tipos de siniestros más frecuentes, y si buscas resolver un caso concreto o diseñar los procesos generales]

**Lo que necesito que desarrolles:**

1. **El proceso de gestión de siniestros de extremo a extremo**
   - El FNOL (First Notice of Loss): cómo capturar la información necesaria en el primer contacto y por qué lo que se obtiene aquí determina el tiempo de resolución
   - La asignación y triaje: cómo priorizar los siniestros por urgencia, complejidad y riesgo de insatisfacción del cliente
   - La investigación del siniestro: el estándar de diligencia que evita el fraude sin generar sospecha en el asegurado honesto
   - La valoración del daño: cuándo usar la valoración interna, cuándo el perito externo y cuándo la valoración automática
   - La resolución y el pago: los procesos que reducen el tiempo entre la decisión y el ingreso en la cuenta del asegurado

2. **Comunicación con el asegurado durante el siniestro**
   - Los momentos de comunicación que definen la satisfacción: el acuse de recibo, las actualizaciones proactivas y la comunicación de la resolución
   - Cómo comunicar la resolución favorable: el mensaje que confirma la cobertura sin crear expectativas incorrectas sobre el importe final
   - Cómo comunicar la resolución desfavorable: la comunicación del rechazo que explica el motivo, abre la vía de reclamación y no genera hostilidad
   - Las franquicias y descuentos: cómo explicar que el asegurado recibe menos de lo que esperaba sin que se sienta engañado

3. **Gestión del fraude sin dañar al asegurado honesto**
   - Las señales de alerta en el FNOL que indican revisión adicional: cómo documentarlas sin hacer sentir al asegurado un sospechoso
   - El protocolo de investigación de fraude: la secuencia de pasos que cumple con la legislación y obtiene la información necesaria
   - La gestión de la suspensión: cómo comunicar que el siniestro está en revisión ampliada sin cerrar la puerta a la cobertura
   - Las redes de fraude: los indicadores que sugieren un patrón organizado y cuándo involucrar al área de fraude o a las autoridades

4. **Tipos de siniestro y sus particularidades**
   - Siniestros de automóvil: la gestión de la peritación, la tramitación con talleres y la gestión de la responsabilidad de terceros
   - Siniestros de hogar: los siniestros de agua como caso más frecuente, la coordinación con servicios de asistencia y la valoración de daños propios y a terceros
   - Siniestros de salud: la autorización de prestaciones, la gestión de la red de proveedores y las reclamaciones de reembolso
   - Siniestros corporativos: la gestión de siniestros de RC, D&O y Cyber con asegurados que tienen asesoramiento jurídico propio

5. **Escalado y reclamaciones internas**
   - Los criterios objetivos para escalar un siniestro: importes, sensibilidad mediática, asegurado estratégico, ambigüedad de cobertura
   - El proceso interno de reclamación: la segunda revisión que el asegurado puede solicitar y cómo gestionarla imparcialmente
   - La mediación y el CIMA: el proceso de queja ante el Servicio de Atención al Cliente y ante la DGSFP, y cómo resolverla antes de que llegue al regulador
   - La gestión del asegurado que amenaza con acciones legales: el protocolo que intenta resolver y documenta para el litigio si no es posible

6. **Métricas de operaciones de siniestros**
   - Los KPIs que importan: tiempo de resolución, coste de siniestro medio, ratio de satisfacción (NPS de siniestro), tasa de reapertura
   - El loss ratio y el combined ratio: cómo las decisiones de tramitación afectan a la rentabilidad de la aseguradora
   - La productividad del tramitador: cuántos siniestros por tramitador es razonable y qué herramientas mejoran la eficiencia

7. **Automatización de siniestros**
   - Los siniestros que se pueden resolver sin intervención humana: los criterios del straight-through processing
   - La valoración automática de daños: las herramientas de computer vision para daños de automóvil y hogar y sus limitaciones actuales
   - Los chatbots de siniestros: qué funciones tienen sentido y cuándo la automatización genera más fricción que agilidad

Dame protocolos concretos con scripts de comunicación, criterios de decisión documentados y los indicadores que uso para medir si el proceso está funcionando bien.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Protocolos de gestión de siniestros que resuelven rápido y fidelizan al asegurado',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Seguros para freelancers',
                'description'      => 'Los seguros que el autónomo necesita: RC profesional, seguro de salud, mutua de accidentes y los que no necesita: la guía práctica de protección del freelance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de seguros especializado en autónomos y trabajadores independientes, con experiencia ayudando a freelancers a construir su cobertura de protección personal y profesional de forma eficiente: los seguros que son imprescindibles, los que son convenientes y los que son un gasto innecesario.

Necesito que me ayudes a diseñar mi programa de seguros como profesional autónomo.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de actividad profesional (diseñador, programador, consultor, formador, periodista, asesor, otro), si tienes empleados o trabajas solo, si prestas servicios a empresas o a particulares, en qué países operas y cuáles son tus ingresos anuales aproximados]

**Lo que necesito que desarrolles:**

1. **Los seguros imprescindibles del autónomo**
   - La mutua de accidentes de trabajo y enfermedades profesionales: qué cubre, qué diferencia hay con la mutua de la Seguridad Social y cómo elegir bien
   - La RC Profesional (Responsabilidad Civil Profesional): por qué es el seguro más importante para un freelance, qué cubre exactamente y cuándo te salva
   - El seguro de salud privado: cuándo tiene sentido complementar o sustituir la sanidad pública y cómo comparar pólizas sin perderse
   - El seguro de vida con coberturas de incapacidad: la protección que el autónomo necesita porque no tiene prestación de baja garantizada indefinidamente

2. **RC Profesional: el seguro que más importa**
   - Qué situaciones cubre la RC Profesional para un freelance: el error en el servicio que causa un perjuicio económico al cliente
   - Las exclusiones que hay que conocer antes de contratar: el dolo, los trabajos previos a la póliza, las reclamaciones entre profesionales del mismo sector
   - Cuánto límite de cobertura necesitas según tu actividad: los criterios para elegir entre 150.000€ y 1.000.000€ de cobertura
   - Las profesiones que exigen RC Profesional por contrato o por colegio profesional: arquitectos, médicos, abogados, ingenieros, auditores
   - Las profesiones donde la RC Profesional es opcional pero casi obligatoria en la práctica: consultores, diseñadores, programadores, formadores
   - El coste real de la RC Profesional para distintos tipos de freelance: rangos de precio según actividad y límite

3. **Protección por incapacidad: el mayor riesgo del autónomo**
   - La prestación de la Seguridad Social por IT (Incapacidad Temporal): cuándo se cobra, cuánto y el problema del primer mes sin ingresos
   - El seguro de accidentes que cubre los primeros días sin cobertura de la mutua: por qué es especialmente importante para el autónomo
   - La incapacidad permanente para autónomos: lo que cubre la Seguridad Social vs lo que necesitas para mantener tu nivel de vida
   - El seguro de vida con cobertura de IPA (Incapacidad Permanente Absoluta): cómo dimensionarlo para tu situación personal

4. **Seguro de salud: cuándo tiene sentido**
   - Los argumentos para contratar seguro de salud siendo autónomo: las listas de espera, la medicina preventiva y la deducción fiscal
   - La deducción del seguro de salud para autónomos: hasta 500€ por asegurado (tú y tu familia) como gasto deducible en la base imponible del IRPF
   - Cómo comparar seguros de salud: las diferencias que importan (cuadro médico, copago, límite de hospitalización, tiempos de espera para especialistas)
   - Los seguros de salud para autónomos jóvenes vs mayores de 40: cuándo el precio cambia drásticamente y qué hacer

5. **Los seguros que el freelance NO necesita (o que necesita en casos específicos)**
   - El seguro de hogar de oficina vs el seguro de hogar normal: cuándo el seguro de hogar normal no cubre el material profesional y qué hacer
   - El seguro de desempleo para autónomos: qué cubre la cuota de cese de actividad y para quién tiene sentido el seguro complementario
   - El seguro de equipo informático: cuándo tiene sentido vs cuando es más caro que la reposición directa
   - El seguro de defensa jurídica: para qué casos sirve y cuándo la RC Profesional ya lo incluye

6. **Optimización fiscal de los seguros del autónomo**
   - Los seguros que son deducibles para el autónomo: cuáles y bajo qué condiciones según el IRPF
   - El seguro de vida como fórmula de ahorro-previsión: los planes de previsión y sus ventajas fiscales para el autónomo sin plan de pensiones de empresa
   - La mutualidad de previsión social alternativa al RETA: para profesionales colegiados que pueden elegir, las implicaciones fiscales de cada opción

7. **El programa de seguros para mi situación**
   - Los seguros que necesitas urgentemente según tu actividad y contexto
   - Los seguros que puedes esperar a contratar cuando mejore tu situación económica
   - El presupuesto razonable de seguros para un freelance de tu perfil: cuánto deberías invertir anualmente en protección
   - Las plataformas y corredores especializados en freelancers donde encontrar precios competitivos

Dame recomendaciones concretas, con rangos de precios actuales en el mercado español y los criterios de selección para que pueda comparar pólizas por mi cuenta sin necesitar intermediario para cada decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 15,
                'use_case'         => 'Guía completa de seguros para autónomos: RC profesional, salud, incapacidad y optimización fiscal',
                'vote_score'       => 34,
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
