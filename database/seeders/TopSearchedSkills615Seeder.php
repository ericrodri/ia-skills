<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills615Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación y marketing de servicios de mediación con IA',
                'description'      => 'Diseña la estrategia de comunicación y captación de clientes para un despacho o plataforma de mediación y resolución de conflictos con IA.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de servicios jurídicos y legales, especializado en la comunicación de servicios alternativos de resolución de conflictos (mediación, arbitraje, conciliación) para públicos tanto B2C como B2B, con profundo conocimiento de las barreras culturales y de percepción que frenan la adopción de la mediación en España y Latinoamérica.

contexto del negocio de mediación:
Dirijo un centro de mediación [familiar/empresarial/laboral/internacional] y quiero aumentar mi visibilidad y captación de clientes. El gran reto es que la mediación sigue siendo desconocida para el gran público, que tiende a ir directamente a la vía judicial cuando surge un conflicto, sin considerar alternativas más rápidas, económicas y menos traumáticas.

objetivo de marketing de mediación:
Diseña la estrategia de comunicación y marketing completa:

1. POSICIONAMIENTO Y PROPUESTA DE VALOR
Ayúdame a definir el posicionamiento del servicio de mediación:
- Cómo comunicar las ventajas de la mediación frente a la vía judicial: tiempo (meses vs años), coste (cientos vs miles de euros), control del proceso y del resultado, confidencialidad, preservación de relaciones
- Mensajes clave adaptados a cada audiencia: parejas en proceso de separación, socios comerciales en conflicto, vecinos con disputas, empresas con conflictos laborales
- Cómo desmontar los mitos más frecuentes sobre la mediación: "es para casos sin importancia", "si no llego a un acuerdo habré perdido el tiempo", "el mediador toma partido"
- Diferenciación respecto a otros mediadores y despachos: especialización, experiencia, metodología, tecnología

2. ESTRATEGIA DE CONTENIDOS EDUCATIVOS
La mediación necesita educación del mercado antes que publicidad:
- Blog con artículos SEO que respondan a las búsquedas de personas en conflicto: "cómo evitar un juicio de divorcio", "cómo resolver un conflicto entre socios sin ir a juicio", "alternativas al despido legal"
- Canal de YouTube con vídeos explicativos sobre el proceso de mediación, casos de éxito anonimizados y entrevistas con expertos
- Newsletter mensual para abogados, empresas y RRHH: actualidad en mediación, casos prácticos, novedades legislativas
- Guías descargables gratuitas: "Guía de mediación familiar", "Kit de resolución de conflictos para empresas"
- Webinars gratuitos para empresas sobre gestión de conflictos laborales y mediación como alternativa al litigio

3. ESTRATEGIA DE CAPTACIÓN POR CANAL
Define las acciones específicas por canal:
- SEO local: posicionamiento en búsquedas como "mediador familiar en [ciudad]", "mediación empresarial Madrid", incluyendo Google My Business optimizado
- LinkedIn para el segmento B2B: artículos de liderazgo de pensamiento sobre resolución de conflictos empresariales, conexión con directores de RRHH y legal
- Google Ads: campañas de búsqueda para keywords de alta intención como "evitar juicio divorcio" o "mediador conflicto laboral"
- Red de derivaciones: alianzas con abogados de familia, notarios, psicólogos, coaches empresariales y asesores de RRHH que deriven casos donde la mediación es la mejor opción

4. COMUNICACIÓN B2B PARA EMPRESAS
Diseña la estrategia específica para el segmento corporativo:
- Presentación de los servicios de mediación preventiva para empresas: programas de gestión de conflictos, formación a managers, protocolos de resolución interna
- Argumentario de ventas para directores de RRHH y departamentos legales: ROI de la mediación vs coste del litigio, impacto en el clima laboral, velocidad de resolución
- Pack de servicios anuales: retainer de mediación empresarial con número de casos incluido
- Referencias y casos de éxito: testimoniales de empresas que han resuelto conflictos internos mediante mediación

5. PLAN DE COMUNICACIÓN DE CRISIS
Prepara la comunicación para situaciones de alta tensión:
- Cómo contactar con clientes potenciales en el momento exacto del conflicto (cuando buscan abogado)
- Mensajes de urgencia que transmitan disponibilidad y rapidez de inicio del proceso
- Proceso de respuesta a consultas en menos de 24h con primera sesión de orientación gratuita

tarea concreta:
Redacta la home page completa del sitio web de un centro de mediación familiar y empresarial, con todos los textos en orden: titular principal, subtítulo, propuesta de valor, beneficios, cómo funciona el proceso, para quién es, testimoniales de clientes, preguntas frecuentes y llamadas a la acción. El tono debe ser empático, cercano y transmitir profesionalidad y confianza.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de marketing y comunicación para servicios de mediación y resolución de conflictos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataforma digital de mediación en línea con IA',
                'description'      => 'Diseña la arquitectura técnica de una plataforma de mediación online que permita gestionar casos de resolución de conflictos de forma digital, segura y eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software con experiencia en plataformas legales y de justicia online, especializado en el diseño de sistemas de Online Dispute Resolution (ODR) que cumplen con los requisitos de confidencialidad, seguridad jurídica y accesibilidad propios del ámbito de la resolución de conflictos.

contexto del proyecto:
Quiero construir una plataforma digital de mediación en línea que permita a mediadores profesionales gestionar sus casos completamente de forma remota: comunicación con las partes, gestión documental, sesiones de mediación por videollamada, redacción del acuerdo y firma electrónica. El objetivo es hacer la mediación accesible a cualquier persona independientemente de su ubicación geográfica.

objetivo técnico:
Diseña la arquitectura completa de la plataforma de mediación online:

1. FUNCIONALIDADES CORE DEL SISTEMA
Define las características imprescindibles de la plataforma:
- Portal del mediador: gestión de casos, agenda de sesiones, repositorio de documentos, facturación y métricas de negocio
- Portal de las partes: acceso seguro para cada parte al expediente, documentos compartidos y próximas sesiones
- Sistema de mensajería asíncrona: comunicación entre mediador y cada parte, con posibilidad de mensajes privados y conjuntos
- Videollamada integrada: sala virtual de mediación con grabación opcional (con consentimiento de las partes), compartición de pantalla y sala de espera
- Gestión documental: subida, versionado y control de acceso a documentos del caso, con firma electrónica integrada

2. ARQUITECTURA TÉCNICA RECOMENDADA
Propone el stack tecnológico más adecuado:
- Backend: API REST con Laravel o Django, base de datos PostgreSQL con cifrado de datos sensibles en reposo
- Frontend: aplicación Next.js o Nuxt.js con autenticación multifactor para todas las partes
- Videollamadas: integración con Daily.co, Vonage o implementación propia con WebRTC
- Firma electrónica: integración con DocuSign, Signaturit o la plataforma europea eIDAS para validez jurídica
- Almacenamiento: AWS S3 con cifrado del lado del servidor para todos los documentos del caso
- Comunicaciones: cifrado end-to-end para todos los mensajes internos del caso

3. SEGURIDAD Y CONFIDENCIALIDAD
Diseña el sistema de seguridad específico para mediación:
- Autenticación: login con MFA obligatorio, tokens de sesión de corta duración, registro de accesos
- Cifrado: TLS 1.3 para tráfico, cifrado AES-256 para documentos almacenados, claves de cifrado por caso
- Control de acceso: cada parte solo ve los documentos y comunicaciones que le corresponden, separación estricta de información privada
- Confidencialidad del proceso: el acuerdo de mediación y sus comunicaciones no pueden ser usados en procesos judiciales posteriores (art. 9 Ley 5/2012 de mediación)
- Auditoría: log completo de todas las acciones en el sistema para resolver disputas sobre el proceso

4. INTEGRACIÓN CON SISTEMAS JURÍDICOS
Explica cómo conectar la plataforma con el ecosistema legal:
- Registro de mediadores: integración con el Registro de Mediadores del Ministerio de Justicia para verificación de habilitación
- Notificaciones a juzgados: si la mediación suspende un proceso judicial, generación automática de la documentación necesaria
- Exportación de acuerdos: formato PDF certificado con valor legal, preparado para elevación a escritura pública ante notario
- Integración con despachos de abogados: API para que los abogados de las partes puedan acceder al expediente con permisos limitados

5. MODELO DE NEGOCIO Y MONETIZACIÓN
Define la estrategia de negocio de la plataforma:
- SaaS para mediadores: suscripción mensual con diferentes tiers según número de casos activos
- Comisión por caso: porcentaje del honorario del mediador por casos gestionados en la plataforma
- Marketplace de mediadores: modelo de directorio donde los mediadores tienen perfiles públicos y las partes pueden contratar directamente
- White label: licencia de la plataforma para centros de mediación, colegios profesionales o empresas que quieren ofrecer mediación a sus empleados

tarea de implementación:
Escribe el modelo de datos completo en Laravel (migraciones y modelos Eloquent) para las entidades principales de la plataforma: Case (expediente de mediación), Party (partes del conflicto), Session (sesiones de mediación), Document (documentos del caso) y Agreement (acuerdo final), con todas las relaciones, atributos y restricciones necesarias para garantizar la integridad y confidencialidad de los datos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Arquitectura técnica de plataforma ODR de mediación en línea segura y con validez jurídica',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de comunicación visual para mediadores y árbitros con IA',
                'description'      => 'Crea la identidad visual y los materiales de comunicación para un despacho de mediación o centro de resolución de conflictos que transmita confianza, neutralidad y profesionalidad.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador gráfico especializado en branding para servicios jurídicos y profesiones de confianza, con experiencia en la creación de identidades visuales que equilibran la seriedad y profesionalidad con la accesibilidad y la empatía, cualidades esenciales en la práctica de la mediación.

contexto del proyecto de diseño:
Necesito crear la identidad visual completa para [un despacho de mediación / un centro de arbitraje / una plataforma de resolución de conflictos]. El nombre de la entidad es [nombre] y su enfoque es [mediación familiar / empresarial / internacional / laboral]. Quiero una identidad visual que transmita neutralidad, confianza, modernidad y accesibilidad, diferenciándose del enfoque más oscuro y rígido de los despachos de abogados tradicionales.

objetivo de diseño:
Guíame en el proceso de creación de la identidad visual completa:

1. ESTRATEGIA DE MARCA VISUAL PARA MEDIACIÓN
Define el territorio visual específico de los servicios de mediación:
- Valores visuales a comunicar: neutralidad, equilibrio, apertura, confianza, humanidad, movimiento hacia la solución
- Análisis de referentes visuales: cómo comunican visualmente las entidades de mediación más respetadas internacionalmente (CEDR, JAMS, ICC Court) y cómo podemos diferenciarnos
- Colores y emociones: los azules y verdes transmiten confianza y calma, los grises modernidad y neutralidad. ¿Cómo combinarlos para crear una paleta única y reconocible?
- Elementos visuales que representan el concepto de mediación: puente, balanza sin el palo de la justicia tradicional, dos manos que se acercan, círculo que conecta puntos, espacio de diálogo

2. SISTEMA DE IDENTIDAD VISUAL
Diseña los componentes del sistema:
- Logotipo: opciones de concepto con descripción detallada de la forma, el símbolo y su significado simbólico en el contexto de la mediación
- Paleta cromática: colores primarios con valores Pantone, CMYK, RGB y HEX para uso digital e impresión
- Tipografías: fuente principal humanista o geométrica que transmita accesibilidad sin perder seriedad, fuente secundaria para textos largos en documentos
- Elementos gráficos: patrones, texturas, iconografía, fotografía (estilo de imágenes: personas en diálogo, espacios de trabajo colaborativo, no juzgados ni tribunales)

3. MATERIALES PROFESIONALES
Define los entregables de diseño:
- Tarjeta de visita y papelería corporativa (membrete, sobre, carpeta de presentación)
- Presentación de servicios en PowerPoint/Keynote para presentaciones a empresas y despachos
- Dossier de servicios en PDF: diseño editorial con estructura clara, fotografías de calidad e infografías del proceso de mediación
- Sala de mediación virtual: fondo de videollamada branded para sesiones en línea
- Materiales de sala presencial: carteles, señalización, blocs de notas con logo

4. PRESENCIA DIGITAL
Diseña los elementos visuales para la presencia online:
- Diseño de la web: moodboard con colores, tipografías, estilo de fotografías y ejemplos de layouts para home, servicios, mediadores y contacto
- Redes sociales: templates de posts para LinkedIn, Instagram y Twitter que mantengan la coherencia visual
- Newsletter: diseño HTML del template de email con la identidad de la marca
- Firma de email corporativa: diseño profesional con logo, datos de contacto e información de certificaciones

5. GUÍA DE ESTILO
Documenta las normas de uso de la identidad visual:
- Manual de identidad visual con reglas de uso del logotipo (espacios mínimos, fondos permitidos y no permitidos, versiones cromáticas)
- Ejemplos de uso correcto e incorrecto de los elementos de la marca
- Paleta fotográfica: descripción del estilo de imágenes que deben usarse y cuáles se deben evitar
- Tono visual en documentos legales: cómo mantener la identidad incluso en acuerdos y actas de mediación

tarea práctica:
Redacta el briefing creativo completo de 600 palabras para contratar a un diseñador freelance que cree la identidad visual de un centro de mediación empresarial, con todos los elementos de personalidad de marca, referentes visuales, paleta de colores y emociones objetivo, requisitos técnicos de los entregables y criterios de evaluación de las propuestas creativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identidad visual y materiales de comunicación para despacho de mediación o centro de resolución de conflictos',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Captación de clientes para servicios de mediación con IA',
                'description'      => 'Diseña el proceso de ventas y captación de clientes para un servicio de mediación, tanto en el segmento B2C (particulares) como B2B (empresas e instituciones).',
                'prompt_content'   => <<<'EOT'
Eres un especialista en desarrollo de negocio para servicios profesionales y jurídicos, con experiencia en la comercialización de servicios de resolución alternativa de disputas (ADR) en mercados donde la mediación todavía no es la primera opción para la mayoría de personas y empresas en conflicto.

contexto comercial:
Ofrezco servicios de mediación [familiar/empresarial/laboral/internacional] y necesito estructurar mi proceso de captación de clientes. El gran reto es que la mayoría de mis clientes potenciales no saben que la mediación existe o no la consideran cuando tienen un conflicto. Necesito estar presente en el momento exacto en que deciden cómo abordar su problema.

objetivo de ventas en mediación:
Diseña el sistema de captación y ventas completo:

1. ANÁLISIS DE LOS MOMENTOS DE DECISIÓN DEL CLIENTE
Identifica cuándo el cliente potencial está dispuesto a escuchar:
- B2C familiar: separación reciente, conflicto entre herederos, disputa entre vecinos, desacuerdo entre copropietarios
- B2B empresarial: conflicto entre socios, disputa con proveedor o cliente, crisis laboral interna, reclamación de un cliente corporativo
- Laboral: despido polémico, acoso laboral, desacuerdo sobre condiciones de trabajo
- En cada caso: ¿qué alternativas están considerando primero? ¿cómo llegamos a ellos antes de que contraten un abogado?

2. ESTRATEGIA DE FUENTES DE DERIVACIÓN (RED DE PRESCRIPTORES)
La mediación se vende principalmente a través de prescriptores profesionales:
- Abogados de familia: muchos prefieren derivar divorcios consensuales a mediación para ahorrar tiempo y ofrecer mejor servicio a su cliente
- Notarios y registradores: intervienen en herencias y liquidaciones de bienes donde surgen conflictos
- Psicólogos y coaches: trabajan con personas en crisis personal o de pareja que pueden beneficiarse de la mediación
- Asesores de empresas (consultores, auditores, abogados mercantiles): conocen los conflictos internos de sus clientes empresariales
- RRHH y sindicatos: mediadores laborales son el primer recurso en conflictos de trabajo antes del juicio
- Diseña el programa de relaciones con prescriptores: cómo identificarlos, qué ofrecerles, cómo mantener la relación

3. PROCESO DE PRIMERA CONSULTA Y CONVERSIÓN
Define el proceso de ventas desde el primer contacto:
- Primer contacto: cómo responder en menos de 2h a cualquier consulta (formulario, email, teléfono, WhatsApp)
- Sesión de orientación gratuita de 30 minutos: objetivo es evaluar si la mediación es adecuada y presentar el proceso
- Propuesta personalizada: presupuesto de honorarios, duración estimada, proceso explicado paso a paso
- Gestión de las objeciones más frecuentes: "¿y si la otra parte no quiere?", "¿tiene validez legal?", "¿qué pasa si no llegamos a un acuerdo?", "¿no es mejor ir directamente al juez?"
- Firma del acuerdo de mediación: proceso, coste y qué incluye

4. CAPTACIÓN ONLINE Y SEO LOCAL
Define la estrategia digital de captación:
- Búsquedas de alta intención: "mediador divorcio [ciudad]", "resolver conflicto con socio sin juicio", "mediación laboral empresa"
- Google My Business: optimización completa con categoría, descripción, servicios, preguntas frecuentes y respuestas a reseñas
- Directorio del Ministerio de Justicia: presencia optimizada en el registro oficial de mediadores
- Directorios legales: Abogados.com, Legalitas, Economist & Jurist, con perfil completo y artículos de opinión

5. MÉTRICAS DE CAPTACIÓN Y CONVERSIÓN
Define el sistema de seguimiento:
- Fuentes de leads: ¿de dónde vienen las consultas? (derivaciones, web, RRSS, teléfono directo)
- Tasa de conversión de consulta inicial a expediente abierto
- Coste de adquisición de cliente por canal
- Valor del cliente en el tiempo: ¿repiten? ¿derivan a otros?
- Tasa de éxito de los procesos (acuerdos alcanzados vs total de casos)

tarea inmediata:
Diseña el script completo de la sesión de orientación gratuita de 30 minutos con un cliente potencial que está en proceso de separación, incluyendo preguntas para entender la situación, explicación del proceso de mediación familiar, gestión de las dudas más frecuentes y cierre de la propuesta de honorarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de captación y ventas de servicios de mediación para particulares y empresas',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en plataformas de resolución de conflictos con IA',
                'description'      => 'Aplica metodologías de product management al desarrollo de plataformas digitales de mediación y resolución de disputas, desde la visión del producto hasta la hoja de ruta.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en plataformas legales y de justicia digital (legal tech), especializado en el diseño de productos que democratizan el acceso a la resolución de conflictos y hacen la mediación más accesible, rápida y asequible que el sistema judicial tradicional.

contexto del producto:
Quiero lanzar o mejorar una plataforma digital de resolución de conflictos que conecte a personas con conflictos con mediadores certificados, permitiendo gestionar todo el proceso online. Necesito definir la visión del producto, priorizar las funcionalidades y diseñar la hoja de ruta de desarrollo.

objetivo de product management:
Diseña el framework completo de gestión del producto:

1. VISIÓN Y ESTRATEGIA DEL PRODUCTO
Define la dirección estratégica de la plataforma:
- Visión del producto: qué mundo queremos construir y cómo esta plataforma contribuye a él
- Misión del producto: qué problema concreto resolvemos, para quién y cómo
- Posicionamiento: ¿somos un marketplace de mediadores? ¿una herramienta SaaS para mediadores profesionales? ¿una plataforma B2B para empresas? ¿un servicio ODR para e-commerce?
- Modelo de negocio: comisión por caso, suscripción SaaS, white label, freemium con features premium
- Diferenciación: qué nos hace únicos respecto a Modria, Smartsettle, Immediation u otras plataformas internacionales

2. INVESTIGACIÓN DE USUARIO Y MERCADO
Diseña el proceso de discovery para validar la propuesta de valor:
- Mapa de stakeholders: partes en conflicto, mediadores profesionales, abogados derivadores, empresas, instituciones públicas
- Jobs to be done de cada stakeholder: ¿qué trabajo necesitan hacer? ¿qué frustraciones tienen? ¿qué ganancias buscan?
- Entrevistas de usuario: diseño de las preguntas para partes que han resuelto conflictos (o no) y para mediadores que gestionan casos
- Análisis del mercado: tamaño del mercado ODR global, regulaciones específicas por país, tendencias post-pandemia en justicia digital

3. DEFINICIÓN DEL MVP Y PRIORIZACIÓN
Ayúdame a definir el producto mínimo viable:
- Funcionalidades imprescindibles del MVP: qué debe tener la plataforma para que un mediador pueda gestionar un caso de principio a fin
- Framework de priorización: RICE score (Reach, Impact, Confidence, Effort) aplicado al backlog de funcionalidades
- Funcionalidades a diferir: qué puede esperar a una segunda fase sin comprometer la propuesta de valor del MVP
- Criterios de éxito del MVP: ¿qué métricas determinan que el MVP es un éxito antes de escalar?

4. HOJA DE RUTA DEL PRODUCTO (ROADMAP)
Diseña el roadmap a 12 meses:
- Trimestre 1: MVP con funcionalidades core para mediadores y partes, gestión de casos, videollamadas y firma electrónica
- Trimestre 2: marketplace de mediadores, perfiles públicos, sistema de búsqueda y filtros, sistema de valoraciones
- Trimestre 3: integración con sistemas judiciales, generación automática de documentación legal, API para despachos de abogados
- Trimestre 4: IA para análisis de conflictos, sugerencia de mediadores por tipo de caso, predicción de acuerdos
- Para cada trimestre: objetivo de negocio, principales iniciativas, métricas de éxito

5. MÉTRICAS DEL PRODUCTO
Define el sistema de métricas de la plataforma:
- Métricas de activación: casos creados, mediadores que gestionan al menos 3 casos al mes
- Métricas de engagement: sesiones por caso, documentos compartidos, tasa de respuesta de las partes
- Métricas de resultado: tasa de acuerdos alcanzados, tiempo medio de resolución, ahorro estimado vs juicio
- Métricas de negocio: MRR, churn de mediadores, coste de adquisición, LTV por tipo de cliente

tarea de PM:
Escribe el PRD completo (Product Requirements Document) de 800 palabras para la funcionalidad de "sala de mediación virtual", incluyendo el problema que resuelve, los usuarios afectados, los requisitos funcionales y no funcionales, los criterios de aceptación, las dependencias técnicas y las métricas de éxito de la funcionalidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Product management para plataformas digitales de mediación y resolución online de disputas',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Mediación en conflictos laborales internos con IA para RRHH',
                'description'      => 'Diseña e implementa un programa de mediación interna para resolver conflictos laborales en la empresa antes de que escalen a reclamaciones judiciales o deterioren el clima organizacional.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en relaciones laborales y mediación en el ámbito organizacional, con experiencia en el diseño e implementación de programas de resolución interna de conflictos en empresas, conocedor de las mejores prácticas para gestionar disputas entre compañeros, entre empleados y managers, y entre grupos o departamentos.

contexto organizacional:
Mi empresa tiene [número] empleados y estamos experimentando un aumento en los conflictos internos que generan un mal ambiente de trabajo, afectan la productividad y en algunos casos han llevado a reclamaciones formales o bajas por enfermedad. Quiero implementar un programa de mediación interna antes de que los problemas escalen.

objetivo del programa de mediación laboral:
Diseña el programa completo de mediación interna para empresas:

1. DIAGNÓSTICO DEL CLIMA ORGANIZACIONAL Y CONFLICTOS ACTUALES
Define el proceso de evaluación inicial:
- Encuesta de clima laboral con preguntas específicas sobre conflictos: frecuencia, tipos, forma de resolución actual, satisfacción con el proceso
- Análisis de datos de RRHH: absentismo, rotación voluntaria, quejas formales, sanciones, cambios de equipo solicitados
- Entrevistas con managers: identificación de los focos de conflicto más frecuentes y cómo los gestionan actualmente
- Mapa de conflictos: representación visual de los tipos de disputas más comunes, entre qué perfiles y en qué departamentos
- Coste actual de los conflictos no resueltos: horas de gestión de RRHH, baja productividad, rotación atribuida a conflictos

2. DISEÑO DEL PROGRAMA DE MEDIACIÓN INTERNA
Define la estructura del programa:
- Figura del mediador interno: ¿quién asume este rol? RRHH, un departamento neutral, colaboradores voluntarios formados, o un externo
- Proceso de mediación interna: cómo se activa (solicitud voluntaria, derivación del manager), cómo se gestiona (confidencialidad, neutralidad, voluntariedad) y cómo se cierra (acuerdo, desacuerdo, derivación a proceso formal)
- Protocolo de confidencialidad: qué información se comparte con RRHH y qué se mantiene estrictamente entre las partes y el mediador
- Integración con el protocolo de acoso: cómo se distingue un conflicto interpersonal de una situación de acoso y cómo se derivan los casos al proceso correspondiente
- Formatos de mediación: presencial, online, individual o conjunta según el tipo y nivel de conflicto

3. FORMACIÓN DE MEDIADORES INTERNOS
Diseña el programa de capacitación:
- Perfil ideal del mediador interno: neutralidad percibida, habilidades de escucha activa, gestión emocional, formación jurídico-laboral básica
- Contenidos de la formación: principios de mediación, técnicas de comunicación no violenta, gestión de emociones en el conflicto, redacción de acuerdos
- Duración y formato de la formación: presencial intensiva (2-3 días) complementada con supervisión externa durante los primeros casos
- Certificación y acreditación: reconocimiento de la empresa y acceso a formación continua

4. PROCESO DE MEDIACIÓN PASO A PASO
Define el procedimiento estandarizado:
- Recepción de la solicitud: formulario de solicitud, evaluación de idoneidad para mediación, comunicación a las partes
- Reuniones individuales (pre-mediación): encuentro con cada parte por separado para entender su visión y verificar la voluntariedad
- Sesión conjunta de mediación: apertura, exposición de las partes, identificación de intereses comunes, generación de opciones, acuerdo
- Documentación del acuerdo: redacción del acuerdo de mediación, firma de las partes, archivo confidencial
- Seguimiento: verificación del cumplimiento del acuerdo a las 2-4 semanas

5. MÉTRICAS Y EVALUACIÓN DEL PROGRAMA
Define el sistema de seguimiento del impacto:
- Casos atendidos por tipo de conflicto y departamento (datos anonimizados)
- Tasa de acuerdo en mediación y tipo de acuerdos alcanzados
- Satisfacción de las partes con el proceso de mediación (encuesta anónima)
- Evolución del clima organizacional: comparativa de encuestas de clima pre y post programa
- Reducción de conflictos formales: comparativa de quejas, sanciones y reclamaciones antes y después del programa

tarea práctica:
Diseña el formulario de solicitud de mediación interna que completaría un empleado cuando quiere iniciar un proceso de mediación, con todas las preguntas necesarias para que RRHH evalúe la idoneidad del caso, proteja la confidencialidad y asigne al mediador más adecuado, con instrucciones claras y un tono que no genere miedo ni estigmatización al solicitante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Programa de mediación interna para resolver conflictos laborales antes de que escalen',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del coste de litigación vs mediación con IA',
                'description'      => 'Construye modelos financieros que demuestren el impacto económico de resolver conflictos mediante mediación frente a la vía judicial para empresas y particulares.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en la cuantificación del coste de los conflictos legales para empresas, con experiencia en la construcción de modelos de comparación coste-beneficio entre diferentes métodos de resolución de disputas: negociación directa, mediación, arbitraje y litigación judicial.

contexto del análisis:
Quiero construir modelos financieros que demuestren de forma objetiva y convincente el impacto económico de resolver conflictos mediante mediación frente a la vía judicial, tanto para presentar a empresas como clientes potenciales como para ayudar a particulares a tomar una decisión informada sobre cómo abordar su conflicto.

objetivo del análisis:
Diseña los modelos financieros comparativos completos:

1. MODELO DE COSTES DE LA LITIGACIÓN JUDICIAL
Cuantifica todos los costes directos e indirectos de un proceso judicial:
- Costes directos: honorarios de abogado (estimación por horas o cuota fija), procurador, peritos, tasas judiciales, costas en caso de condena
- Costes de tiempo: horas de directivos o empleados dedicadas al proceso, tiempo de los testigos, preparación de documentación
- Costes de incertidumbre: duración media de un proceso por tipo (laboral: 12-18 meses, civil: 18-36 meses, mercantil: 24-48 meses)
- Costes indirectos: distracción del equipo directivo, deterioro de la relación con el cliente o socio, impacto reputacional
- Coste de la incertidumbre: provisiones que hay que contabilizar, impacto en la planificación financiera durante el proceso

2. MODELO DE COSTES DE LA MEDIACIÓN
Cuantifica los costes del proceso de mediación:
- Honorarios del mediador: tarifa por hora o tarifa fija por proceso, normalmente repartida entre las partes
- Duración del proceso: media de 2-6 sesiones en 4-12 semanas vs años en el juzgado
- Costes de asesoría legal: la mediación no requiere abogado obligatoriamente, pero es recomendable para revisar el acuerdo
- Costes de tiempo: la mediación requiere mucha menos dedicación de tiempo de las partes que un juicio
- Costes si la mediación fracasa: si no hay acuerdo, se puede ir al juicio sin que la mediación haya generado un coste inútil

3. ANÁLISIS COMPARATIVO POR TIPO DE CONFLICTO
Construye el modelo específico para cada tipo de disputa:
- Conflicto entre socios: comparativa de coste de un juicio mercantil de 3 años vs mediación empresarial de 3 meses
- Divorcio con bienes: coste de un divorcio contencioso (2 años, 2 abogados, perito, tasas) vs mediación familiar (3 meses, 1 mediador)
- Despido improcedente: coste del procedimiento laboral en el SMAC y juzgado vs acuerdo mediado en semanas
- Disputa con proveedor o cliente: coste de un juicio civil vs mediación comercial con preservación de la relación de negocio
- Conflicto de herencia: coste de un procedimiento de división de herencia en el juzgado vs mediación entre herederos

4. ANÁLISIS DE VALOR DEL ACUERDO MEDIADO
Cuantifica los beneficios no solo el ahorro en costes:
- Valor de preservar la relación: ¿cuánto vale mantener la relación con un cliente, socio o proveedor estratégico?
- Valor del control del resultado: en mediación las partes diseñan el acuerdo vs la incertidumbre del resultado judicial
- Valor de la confidencialidad: los acuerdos de mediación son privados, los juicios son públicos
- Valor de la velocidad: resolver en 3 meses vs 3 años tiene un valor financiero directo (flujo de caja, planificación)

5. PRESENTACIÓN DEL MODELO A CLIENTES Y EMPRESAS
Diseña el formato de presentación del análisis:
- Calculadora interactiva: herramienta web o Excel donde el cliente introduce sus datos y obtiene su comparativa personalizada
- Infografía de impacto: visualización del ahorro económico y de tiempo de forma clara y visual
- Casos de estudio: ejemplos reales anonimizados de empresas que han ahorrado con la mediación

tarea concreta:
Crea la plantilla completa de la calculadora de ahorro de la mediación vs juicio, con todos los campos de entrada (tipo de conflicto, importe en disputa, duración estimada del juicio, honorarios de abogado estimados) y todas las fórmulas para calcular el coste total de cada opción, el ahorro económico de la mediación y el ROI del proceso mediado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelo financiero comparativo del coste de litigación vs mediación para empresas y particulares',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Mediación jurídica y arbitraje con IA para abogados',
                'description'      => 'Aplica IA para mejorar la práctica de la mediación jurídica y el arbitraje: desde la preparación del caso hasta la redacción del acuerdo o laudo arbitral.',
                'prompt_content'   => <<<'EOT'
Eres un abogado y mediador certificado con amplia experiencia en mediación civil, mercantil y arbitraje comercial internacional, conocedor de las principales instituciones arbitrales (ICC, CCI, Corte de Arbitraje de Madrid) y de la legislación española e internacional en materia de mediación y arbitraje.

contexto de la práctica jurídica:
Soy un abogado que quiero incorporar la IA a mi práctica de mediación y arbitraje para mejorar la eficiencia de mi trabajo: análisis de casos, preparación de sesiones, redacción de acuerdos y laudos, y gestión de la documentación de los expedientes.

objetivo de uso de IA en mediación y arbitraje:
Diseña el flujo de trabajo completo con IA para la práctica de la mediación jurídica:

1. ANÁLISIS PREVIO DEL CASO
Usa IA para preparar mejor cada caso antes de las sesiones:
- Análisis de la documentación del conflicto: contratos incumplidos, correspondencia entre las partes, informes periciales, resoluciones judiciales anteriores
- Identificación de los intereses subyacentes de cada parte más allá de sus posiciones iniciales declaradas
- Análisis jurídico preliminar: cuáles son los derechos y obligaciones de cada parte según la normativa aplicable y la jurisprudencia relevante
- Valoración del BATNA (Best Alternative to Negotiated Agreement) de cada parte: ¿qué obtendría cada uno si va al juicio?
- Identificación de zonas de posible acuerdo y puntos de fricción que requerirán más trabajo en las sesiones

2. PREPARACIÓN DE SESIONES DE MEDIACIÓN
Genera los materiales de trabajo para cada sesión:
- Agenda de la sesión con tiempo asignado a cada punto y técnicas de mediación a aplicar
- Preguntas abiertas para explorar los intereses de cada parte sin generar confrontación
- Propuestas de opciones para el acuerdo que satisfagan los intereses fundamentales de ambas partes
- Argumentos de realidad para ayudar a las partes a evaluar objetivamente sus posibilidades en un juicio
- Resumen ejecutivo del estado del caso para compartir entre sesiones

3. GESTIÓN DE LA COMUNICACIÓN ENTRE SESIONES
Usa IA para mantener el impulso entre sesiones:
- Redacción de emails de seguimiento para cada parte con los puntos clave de la sesión anterior y los compromisos adquiridos
- Preparación de documentos de trabajo para que las partes reflexionen entre sesiones: propuestas de acuerdo parciales, tablas comparativas de opciones
- Respuesta a consultas de las partes entre sesiones con análisis jurídico y orientación sobre el proceso
- Recordatorios automáticos de compromisos y fechas límite acordados en las sesiones

4. REDACCIÓN DEL ACUERDO DE MEDIACIÓN
Genera borradores de acuerdos jurídicamente sólidos:
- Estructura del acuerdo de mediación: partes, objeto del conflicto, acuerdos alcanzados, obligaciones de cada parte, plazo de cumplimiento, consecuencias del incumplimiento
- Cláusulas específicas para cada tipo de conflicto: liquidación de sociedad, régimen de visitas en divorcio, resolución de contrato mercantil, indemnización por daños
- Revisión de la legalidad del acuerdo: verificación de que no vulnera la ley ni los derechos de terceros
- Redacción de la cláusula de confidencialidad y no divulgación del proceso de mediación
- Adaptación del acuerdo para su elevación a escritura pública ante notario si las partes lo desean

5. GESTIÓN DEL EXPEDIENTE DE ARBITRAJE
Usa IA en procedimientos arbitrales:
- Análisis del clausulado arbitral del contrato: alcance, institución arbitral, ley aplicable, idioma, sede del arbitraje
- Redacción del escrito de demanda arbitral: hechos, fundamentos de derecho, peticiones y documentación de soporte
- Análisis de la contestación de la parte demandada y preparación de la réplica
- Preparación de audiencias: orden de exposición de argumentos, preguntas a testigos y peritos, documentos a presentar
- Redacción del borrador de laudo para árbitros: estructura, consideraciones de hecho y de derecho, parte dispositiva

tarea jurídica:
Redacta un modelo de acuerdo de mediación familiar para la regulación de los efectos de una separación matrimonial, con todas las cláusulas necesarias: guarda y custodia de los hijos, régimen de visitas y comunicación, pensión de alimentos, uso de la vivienda familiar, liquidación de la sociedad de gananciales y pensión compensatoria, adaptable a las circunstancias específicas de cada caso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Integración de IA en la práctica profesional de mediación jurídica y arbitraje',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Resolución de conflictos con clientes con IA para equipos de soporte',
                'description'      => 'Diseña protocolos y técnicas de resolución de conflictos con clientes insatisfechos o en situaciones de alta tensión para equipos de customer support.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en gestión de clientes difíciles y resolución de conflictos en equipos de atención al cliente, con experiencia en el diseño de protocolos de desescalada, formación de agentes en técnicas de comunicación no violenta y en la creación de sistemas que convierten quejas en oportunidades de fidelización.

contexto del equipo de soporte:
Mi equipo de customer support se enfrenta frecuentemente a clientes muy enfadados, reclamaciones complejas y situaciones de conflicto que generan estrés en los agentes y riesgo de pérdida del cliente. Necesito dotar al equipo de herramientas y protocolos para gestionar estos casos de forma más efectiva y consistente.

objetivo de gestión de conflictos con clientes:
Diseña el sistema completo de resolución de conflictos para equipos de soporte:

1. TIPOLOGÍA DE CONFLICTOS CON CLIENTES
Clasifica los tipos de situaciones de conflicto más frecuentes:
- Cliente insatisfecho por problema de producto o servicio: bug, calidad inferior a lo esperado, funcionalidad que no funciona
- Cliente afectado por error de la empresa: cobro incorrecto, envío equivocado, promesa incumplida por comercial
- Cliente que tiene expectativas no realistas: malentendido sobre las funcionalidades contratadas, interpretación errónea del contrato
- Cliente en situación de urgencia: el problema le está causando pérdidas económicas o impide que pueda trabajar
- Cliente que amenaza con reclamación legal, publicación en redes o baja inmediata

2. TÉCNICAS DE DESESCALADA EMOCIONAL
Proporciona el toolkit de técnicas para reducir la tensión:
- Escucha activa: cómo hacer que el cliente se sienta escuchado antes de intentar resolver el problema
- Validación emocional: reconocer la frustración del cliente sin admitir culpa ni comprometerse con soluciones no autorizadas
- Reformulación positiva: cómo pasar de "no podemos hacer eso" a "lo que sí podemos hacer por usted es..."
- Control del ritmo: cómo bajar el tono y la velocidad de la comunicación cuando el cliente está muy alterado
- Técnica del silencio: cuándo y cómo usar el silencio deliberado en una llamada para dar espacio al cliente
- Petición de acción concreta: cómo redirigir la conversación de la queja al problema a resolver

3. PROTOCOLO DE RESOLUCIÓN POR NIVEL DE GRAVEDAD
Define el proceso de gestión según la criticidad del caso:
- Nivel 1 (queja estándar): el agente resuelve directamente con las herramientas y autorización que tiene
- Nivel 2 (caso complejo): el agente escala al supervisor con briefing completo del caso y propuesta de solución
- Nivel 3 (cliente VIP o amenaza de escalada): intervención inmediata del responsable de CS con plan de recuperación
- Nivel 4 (crisis mediática o legal): activación del protocolo de crisis con comunicación, legal y dirección
- Para cada nivel: tiempo máximo de respuesta, quién interviene, qué puede ofrecer y cómo se documenta

4. GESTIÓN DE RECLAMACIONES POR ESCRITO
Diseña el proceso de respuesta a reclamaciones formales:
- Email de respuesta a una queja seria: estructura en 4 partes (reconocimiento, investigación, solución, compensación)
- Tono y lenguaje: empático pero profesional, sin frases de cortesía vacías que irritan más al cliente
- Oferta de compensación: criterios para ofrecer descuento, crédito, devolución o gesto comercial según la gravedad
- Seguimiento: cuándo y cómo hacer el seguimiento para confirmar que el cliente está satisfecho con la resolución
- Gestión de reseñas negativas públicas: cómo responder en Google, Trustpilot o App Store de forma constructiva

5. BIENESTAR DEL EQUIPO EN SITUACIONES DE ALTA TENSIÓN
Protege a los agentes del impacto emocional de los conflictos:
- Protocolo post-llamada difícil: descanso breve, debriefing con supervisor, registro en el sistema
- Límites en el trato con el cliente: cuándo es aceptable terminar una llamada o conversación abusiva
- Formación en resiliencia emocional: técnicas para no personalizar los ataques verbales del cliente
- Supervisión del bienestar: identificación de agentes con signos de burnout por exceso de casos difíciles

tarea práctica:
Escribe las 10 respuestas modelo para las situaciones de conflicto más frecuentes en atención al cliente (cliente que amenaza con irse, error de facturación de la empresa, producto defectuoso, retraso en entrega, funcionalidad que no funciona como esperaba, cliente que insulta al agente, escalada a redes sociales, solicitud de devolución fuera del plazo, reclamación legal, y cliente VIP muy insatisfecho), con el tono y la estructura correcta para desescalar y recuperar la confianza del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Protocolos de resolución de conflictos con clientes difíciles para equipos de atención al cliente',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Servicios freelance de mediación y consultoría de conflictos con IA',
                'description'      => 'Estructura tu práctica freelance de mediación o consultoría en gestión de conflictos, desde la oferta de servicios hasta la captación de clientes y la gestión de proyectos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance con experiencia en mediación y gestión de conflictos organizacionales, conocedor del mercado de servicios de resolución alternativa de disputas en España y Latinoamérica, y de las oportunidades para profesionales independientes en este sector en crecimiento.

contexto del profesional freelance:
Soy un profesional formado en mediación [con titulación de mediador homologada / con formación en gestión de conflictos / con experiencia en RRHH y resolución de disputas laborales] que quiere ejercer de forma independiente como mediador freelance o consultor de gestión de conflictos para empresas y particulares.

objetivo de negocio freelance en mediación:
Diseña el modelo de negocio completo para mi práctica independiente:

1. DEFINICIÓN DE LA ESPECIALIZACIÓN Y SERVICIOS
Ayúdame a elegir y definir mi nicho:
- Análisis de los segmentos de mercado más rentables y accesibles para un mediador freelance: familiar, empresarial, laboral, comunitario, internacional
- Criterios para elegir la especialización: formación previa, red de contactos, mercado local, competencia en la zona
- Catálogo de servicios para una práctica freelance de mediación:
  * Mediación directa: gestión de casos individuales como mediador principal
  * Co-mediación: colaboración con otros mediadores en casos complejos
  * Mediación preventiva para empresas: programas de gestión de conflictos para evitar escaladas
  * Formación en mediación y gestión de conflictos para equipos de RRHH y managers
  * Consultoría de diseño de programas de mediación interna para empresas
  * Supervisión de mediadores en formación

2. ESTRUCTURA DE HONORARIOS Y MODELOS DE COBRO
Define la estrategia de precios adaptada a cada servicio:
- Mediación familiar: tarifa por sesión (80-200€/hora) vs tarifa cerrada por proceso (1.500-4.000€ todo incluido)
- Mediación empresarial: tarifa diaria (800-2.000€/día) o tarifa por proceso según complejidad
- Formación y talleres: tarifa por hora de formación (150-400€) o tarifa por grupo y duración
- Consultoría de diseño de programas: proyecto cerrado con fases y entregables definidos
- Retainer mensual: disponibilidad mensual para empresas con conflictos recurrentes (500-2.000€/mes)
- Política de reparto de honorarios entre partes y cláusula de revisión de precios

3. CAPTACIÓN Y DESARROLLO DE NEGOCIO
Define cómo conseguir tus primeros clientes como mediador freelance:
- Inscripción en el Registro de Mediadores del Ministerio de Justicia: proceso, requisitos y ventajas
- Colegiación profesional: colegios de abogados, psicólogos u otros que aceptan mediadores en su registro
- Red de prescriptores: abogados de familia, asesores de empresa, psicólogos de pareja, coaches ejecutivos, sindicatos
- Presencia online: web profesional con perfil, servicios, metodología y formulario de contacto; perfil en LinkedIn con artículos sobre mediación
- Directorios de mediadores: inscripción en directorios especializados y plataformas de ODR como mediador asociado
- Ponencias y formación: presencia en conferencias, charlas en colegios profesionales y webinars gratuitos para ganar visibilidad

4. GESTIÓN ADMINISTRATIVA Y LEGAL DE LA PRÁCTICA
Define la estructura administrativa del negocio freelance:
- Forma jurídica: autónomo vs SL, con análisis de ventajas e inconvenientes para un mediador independiente
- Obligaciones fiscales: IVA (¿exento? Los servicios de mediación pueden estar exentos según el tipo), IRPF, modelos trimestrales
- Seguro de responsabilidad civil profesional: imprescindible para ejercer como mediador, coberturas mínimas recomendadas
- Contrato de servicios de mediación: cláusulas esenciales, acuerdo de confidencialidad, condiciones de cancelación
- Gestión de la documentación del expediente: qué se guarda, durante cuánto tiempo, cómo se protege según el RGPD

5. CRECIMIENTO Y ESCALA DEL NEGOCIO
Diseña el camino de crecimiento a largo plazo:
- Formación continua y acreditaciones: qué formaciones añaden más valor a la práctica y al posicionamiento profesional
- Asociacionismo: participación activa en asociaciones de mediadores para ganar visibilidad y referencias
- Creación de una red de co-mediadores: cómo colaborar con otros mediadores en casos que superan la especialización individual
- Productos digitales: guías de autoresolución de conflictos, cursos online de habilidades de mediación para no mediadores

tarea de arranque:
Redacta el perfil profesional completo para LinkedIn de un mediador freelance especializado en conflictos empresariales y laborales, con un titular que llame la atención, un extracto de 500 palabras que explique su propuesta de valor, los servicios que ofrece y cómo contactarle, y las palabras clave SEO que deben aparecer para que le encuentren los potenciales clientes correctos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Modelo de negocio freelance para práctica independiente de mediación y consultoría de conflictos',
                'vote_score'       => 29,
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
