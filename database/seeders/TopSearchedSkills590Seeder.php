<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills590Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de eventos corporativos y MICE con IA',
                'description'      => 'Diseña una estrategia de marketing integral para posicionar una empresa de eventos MICE, atraer clientes corporativos y generar leads cualificados de forma sistemática.',
                'prompt_content'   => <<<'EOT'
Actúa como director de marketing especializado en el sector de eventos corporativos y MICE (Meetings, Incentives, Conferences & Exhibitions). Necesito desarrollar una estrategia de marketing completa para una empresa organizadora de eventos que quiere aumentar su cartera de clientes corporativos y consolidarse como referente en el mercado español de eventos de empresa.

Contexto de la empresa:
- Nombre de la empresa: [NOMBRE]
- Especialidad: [congresos / incentivos / lanzamientos de producto / team building / ferias corporativas / todos]
- Tamaño: [número de empleados, volumen de eventos al año]
- Mercado objetivo: [empresas de qué sectores, qué tamaño de empresa cliente]
- Presupuesto de marketing disponible: [IMPORTE]
- Diferenciador principal: [qué hace mejor que la competencia]
- Área geográfica: [nacional / internacional / mixto]

Objetivo: Desarrolla la estrategia de marketing con los siguientes componentes:

1. POSICIONAMIENTO Y PROPUESTA DE VALOR
- Define el posicionamiento diferencial de la empresa frente a la competencia: agencias generalistas, venues con servicio propio, plataformas tecnológicas de gestión de eventos
- Redacta la propuesta de valor en tres versiones: para el director de marketing del cliente, para el responsable de RRHH que organiza incentivos, para el director general que patrocina el congreso
- Identifica los 5 argumentos de venta más poderosos para cada tipo de evento MICE
- Diseña el mensaje central de la marca: qué emoción transmite, qué problema resuelve, qué garantía ofrece

2. ESTRATEGIA DE CONTENIDO Y THOUGHT LEADERSHIP
- Propón un plan de contenido anual con 52 piezas: artículos de blog sobre tendencias en eventos corporativos, casos de éxito anonimizados, guías prácticas para responsables de eventos, análisis del sector MICE en España
- Diseña una estrategia de LinkedIn para posicionar a los directivos de la empresa como expertos: qué publicar, con qué frecuencia, cómo generar interacción
- Crea un plan de webinars y eventos propios: cómo organizar un desayuno anual de networking para clientes, cómo participar en ferias del sector como IBTM World o Eventex
- Define la estrategia de cases studies: cómo documentar los mejores proyectos, con qué formato presentarlos, cómo distribuirlos

3. GENERACIÓN DE LEADS Y CAPTACIÓN B2B
- Diseña el funnel de captación de clientes corporativos: desde primer contacto (anuncio, artículo, referencia) hasta firma de contrato
- Propón una estrategia de Account-Based Marketing para las 50 empresas objetivo más relevantes: cómo identificarlas, cómo contactarlas, qué contenido personalizado crear
- Crea un plan de e-mail marketing para nurturing de leads: secuencia de 6 emails para convertir un contacto frío en reunión de presentación
- Define la estrategia de alianzas con venues, proveedores de AV, catering y travel management companies para generar referencias mutuas

4. PRESENCIA DIGITAL Y SEO
- Propón la arquitectura de la web: páginas de servicios por tipo de evento, landing pages para sectores clave (farmacéutico, tecnología, banca), portfolio visual, formulario de briefing interactivo
- Define las palabras clave prioritarias: "organización de congresos médicos Madrid", "agencia incentivos empresariales España", "team building experiencial Barcelona"
- Diseña la estrategia de Google Ads: campañas por tipo de evento, segmentación por cargo profesional, extensiones de anuncio con testimonios
- Propón el plan de presencia en directorios especializados: GuíaDeEventos, EventoPro, CIM (Convention Industry Manual), MICEboard

5. PROPUESTA COMERCIAL Y MATERIALES DE VENTA
- Diseña la estructura de una propuesta comercial ganadora para un congreso corporativo: portada impactante, comprensión del cliente, propuesta creativa, equipo, plan de trabajo, inversión
- Crea un dossier de presentación de la empresa de 10 páginas con los elementos clave: historia, equipo, servicios, portfolio, clientes de referencia, propuesta de valor
- Propón plantillas de brief para cada tipo de evento: qué información pedir al cliente desde el primer contacto para presentar una propuesta competitiva

6. MÉTRICAS Y ROI DE MARKETING
- Define los KPIs de marketing: leads generados, coste por lead, tasa de conversión lead a propuesta, tasa de conversión propuesta a contrato, valor medio del contrato
- Diseña el presupuesto de marketing detallado por canal con la distribución recomendada
- Propón un sistema de atribución para saber qué canal genera los leads más valiosos
- Crea el informe mensual de marketing que el equipo presentará a dirección

Entrega la estrategia completa con el calendario editorial del primer trimestre, el plan de captación de los primeros 10 clientes objetivo y los KPIs con valores de referencia realistas para el sector MICE en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de marketing B2B para empresas organizadoras de eventos MICE',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataforma digital de gestión de eventos con IA',
                'description'      => 'Diseña e implementa una plataforma tecnológica completa para la gestión de eventos corporativos, integrando registro de asistentes, agenda, networking y analítica en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como arquitecto de software especializado en plataformas de gestión de eventos y eventech. Necesito diseñar e implementar una plataforma digital completa para la gestión de eventos corporativos que cubra desde el registro de asistentes hasta la analítica post-evento, pasando por la gestión de agenda, el networking entre asistentes y la comunicación en tiempo real.

Contexto del proyecto:
- Tipo de eventos a gestionar: [congresos de 500+ personas / eventos de empresa 50-200 personas / webinars / eventos híbridos presencial+online]
- Clientes objetivo de la plataforma: [organizadores de eventos corporativos / departamentos de marketing / gestores de congresos médicos]
- Volumen esperado: [número de eventos al año, número de asistentes por evento]
- Integraciones necesarias: [CRM del cliente, herramientas de videoconferencia, sistemas de pago, plataformas de email marketing]
- Stack tecnológico preferido: [indicar preferencias si las hay]
- Modelo de negocio de la plataforma: [SaaS por evento / suscripción anual / white label para organizadores]

Objetivo: Diseña la arquitectura y los módulos principales de la plataforma:

1. ARQUITECTURA TÉCNICA
- Define la arquitectura general: microservicios vs monolito modular, frontend SPA vs SSR, tiempo real con WebSockets o Server-Sent Events
- Propón el stack tecnológico recomendado: backend (Node.js/Python/Go), frontend (React/Vue), base de datos (PostgreSQL, Redis para sesiones, Elasticsearch para búsquedas)
- Diseña el modelo de datos principal: Evento, Sesión, Ponente, Asistente, Registro, Ticket, Patrocinador, Sala
- Explica la estrategia de escalabilidad para manejar picos de tráfico durante el registro masivo o el inicio de sesiones populares

2. MÓDULO DE REGISTRO Y TICKETING
- Diseña el flujo de registro de asistentes: formulario de datos, selección de tipo de entrada (gratuita, de pago, por invitación), pago online, confirmación con QR
- Propón el sistema de tipos de tickets: acceso general, VIP, ponente, patrocinador, prensa; con lógica de cupos y precios por etapas (early bird, precio normal, last minute)
- Diseña el check-in en el evento: app de check-in por QR, check-in por reconocimiento facial (opcional), contadores en tiempo real de asistentes registrados
- Crea el sistema de gestión de listas de espera y upgrades de tipo de ticket

3. MÓDULO DE AGENDA Y CONTENIDO
- Diseña la vista de agenda del asistente: filtro por sala, por temática, por ponente; posibilidad de crear agenda personalizada con las sesiones de interés
- Propón el sistema de gestión de ponentes: perfil público, bio, foto, sesiones asignadas, enlace a materiales previos al evento
- Diseña el módulo de sesiones en directo: integración con Zoom/Teams/streaming propio, gestión de preguntas en vivo con votación, encuestas en tiempo real
- Crea el repositorio de contenido post-evento: grabaciones, presentaciones, resúmenes, certificados de asistencia con firma digital

4. MÓDULO DE NETWORKING
- Diseña el sistema de networking entre asistentes: perfil profesional del asistente visible para otros (opt-in), búsqueda por cargo y empresa, solicitud de reunión 1:1
- Propón el algoritmo de matchmaking inteligente: sugiere conexiones relevantes basadas en cargo, industria, intereses declarados y agenda seleccionada
- Diseña la agenda de reuniones 1:1: disponibilidad horaria, sala asignada automáticamente, recordatorio previo, feedback post-reunión
- Crea la funcionalidad de business card digital: intercambio de contactos con un clic durante el evento

5. MÓDULO DE PATROCINADORES Y EXPOSICIÓN VIRTUAL
- Diseña el espacio virtual de patrocinadores: stand con vídeo, materiales descargables, representantes disponibles para chat
- Propón el sistema de leads para patrocinadores: qué asistentes visitaron el stand, interacciones realizadas, leads cualificados
- Diseña el plan de visibilidad del patrocinador en la plataforma: banners, notificaciones push, sesiones patrocinadas destacadas
- Crea el informe de ROI para patrocinadores: alcance, interacciones, leads generados por tipo de patrocinador

6. ANALÍTICA Y REPORTING
- Define el dashboard en tiempo real para el organizador: asistentes registrados, check-ins realizados, asistencia por sesión, menciones en redes sociales
- Diseña el informe post-evento completo: datos de registro, perfil de asistentes, sesiones más populares, NPS del evento, leads generados por patrocinadores
- Propón la integración con Google Analytics y herramientas de BI del cliente
- Crea alertas automáticas: sesión a punto de llenarse, caída del streaming, cola de preguntas sin moderar

Incluye diagramas de flujo en texto para los procesos más críticos y una estimación de tiempos de desarrollo por módulo en sprints de 2 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseño e implementación de plataforma tecnológica para gestión de eventos corporativos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias visuales para eventos corporativos con IA',
                'description'      => 'Crea la identidad visual, el diseño de espacios y los materiales gráficos para eventos corporativos que transmitan los valores de la marca y generen una experiencia memorable.',
                'prompt_content'   => <<<'EOT'
Actúa como director creativo especializado en eventos corporativos, diseño de experiencias y branding de evento. Necesito desarrollar la identidad visual completa y el diseño de experiencia para un evento corporativo de gran formato, asegurando que cada elemento visual refuerce la marca del organizador y genere una experiencia coherente e impactante para los asistentes.

Contexto del evento:
- Tipo de evento: [congreso anual de empresa / lanzamiento de producto / convención de ventas / cumbre de liderazgo / gala de premios]
- Nombre del evento: [NOMBRE]
- Tema o concepto central: [CONCEPTO]
- Número de asistentes: [NÚMERO]
- Formato: [presencial / híbrido / virtual]
- Venue: [tipo de espacio: hotel de 5 estrellas / palacio de congresos / espacio industrial / al aire libre]
- Identidad de marca del organizador: [colores corporativos, tipografía, valores de marca]
- Presupuesto de producción audiovisual y diseño: [RANGO]

Desarrolla el plan creativo con los siguientes componentes:

1. CONCEPTO CREATIVO Y NAMING DEL EVENTO
- Desarrolla 3 conceptos creativos alternativos para el evento: nombre, claim, metáfora visual, paleta de colores propuesta
- Para cada concepto, describe la experiencia que genera en el asistente desde que recibe la invitación hasta que sale del evento
- Define el mood board de referencia: qué estética visual, qué referencias culturales o artísticas, qué sensación quiere transmitir
- Propón el claim del evento en 5 versiones: inspiracional, funcional, disruptiva, minimalista, emocional

2. IDENTIDAD VISUAL DEL EVENTO
- Diseña el sistema de identidad visual: logotipo del evento, paleta de colores con sus valores hexadecimales, tipografías principal y secundaria, patrón o textura característica
- Define las reglas de aplicación: cómo combinar la identidad del evento con la identidad corporativa del organizador sin que ninguna eclipse a la otra
- Propón los elementos gráficos modulares que se repetirán en todos los materiales: iconos de temáticas, separadores gráficos, marcos para fotografías
- Diseña el sistema de colores por temática o track del congreso si hay contenido segmentado

3. MATERIALES IMPRESOS Y DIGITALES
- Define el kit completo de materiales a diseñar: invitación física, web del evento, app, programa de mano, credenciales, señalética, rollups, photo call
- Diseña la estructura de la invitación: formato, información esencial, CTA para registro, tono del texto
- Propón el diseño de la credencial de asistente: información visible, materiales sostenibles si aplica, elemento de networking integrado (QR de perfil)
- Diseña el programa de mano: portada, distribución de la agenda, perfiles de ponentes, mapa del espacio, patrocinadores

4. DISEÑO DEL ESPACIO Y SEÑALÉTICA
- Diseña el plan de señalética del evento: qué señales son necesarias, en qué soportes, con qué sistema de iconografía e indicaciones visuales
- Propón el diseño de los elementos de decoración del espacio principal: escenografía de la sala plenaria, photocall de entrada, zona de networking, stands de patrocinadores
- Define el uso de elementos digitales en el espacio: pantallas de bienvenida, pantallas de agenda en corredores, muro de redes sociales en tiempo real
- Diseña la experiencia de entrada: cómo debe sentirse el asistente al cruzar la puerta del evento

5. CONTENIDO AUDIOVISUAL Y PRODUCCIÓN
- Define el plan de vídeo del evento: opening audiovisual (duración, estilo, contenido), vídeos de presentación de ponentes, vídeo resumen del evento para difusión post-evento
- Diseña las plantillas de PowerPoint o Keynote para ponentes: fondo, tipografías, colores, posición del logotipo, cómo guiar a los ponentes para que respeten el template
- Propón el plan de fotografía: momentos clave a capturar, tipo de fotografía (reportaje, corporativa, ambiente), uso previsto de las fotos
- Diseña el plan de redes sociales en tiempo real: qué publicar durante el evento, quién lo gestiona, hashtag oficial, cómo animar a los asistentes a compartir

6. SOSTENIBILIDAD Y EXPERIENCIA POST-EVENTO
- Propón elementos de diseño que refuercen la sostenibilidad del evento: materiales reciclados, versiones digitales como alternativa a impresos, compensación de huella de carbono comunicada visualmente
- Diseña el kit de recuerdo del evento: qué regalo o experiencia llevará el asistente a casa que refuerce el recuerdo de la marca
- Define el diseño del email de agradecimiento post-evento y del resumen visual del evento para difusión
- Propón cómo reutilizar los activos gráficos del evento en comunicaciones del año siguiente

Entrega el plan creativo completo con descripciones detalladas de cada elemento visual, briefings para los proveedores de producción e impresión, y un calendario de producción de materiales con fechas límite relativas al día del evento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de identidad visual y experiencia gráfica para eventos corporativos',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de paquetes MICE corporativos con IA',
                'description'      => 'Desarrolla un proceso de venta consultiva para paquetes MICE corporativos, con scripts de presentación, gestión de objeciones y técnicas de cierre adaptadas al comprador corporativo.',
                'prompt_content'   => <<<'EOT'
Actúa como director comercial con amplia experiencia en ventas B2B de servicios de eventos corporativos y MICE. Necesito desarrollar un proceso de venta consultiva completo para comercializar paquetes de organización de eventos a empresas de mediano y gran tamaño, desde la prospección inicial hasta el cierre del contrato y el upselling post-evento.

Contexto del equipo comercial:
- Empresa: [agencia de eventos / venue con servicios / hotel con departamento de grupos y convenciones]
- Servicios a vender: [organización completa / venue solamente / servicios de AV y producción / catering / incentivos]
- Tipo de cliente objetivo: [director de marketing / responsable de RRHH / responsable de compras / director general]
- Ticket medio de contrato: [RANGO DE IMPORTE]
- Ciclo de venta típico: [semanas o meses desde primer contacto hasta firma]
- Principal objeción que enfrenta el equipo: [precio / confianza en nuevo proveedor / comparación con proveedor actual / justificación del ROI interno]

Desarrolla el proceso de venta con los siguientes componentes:

1. PROSPECCIÓN Y CUALIFICACIÓN
- Define el perfil de cliente ideal (ICP) para cada tipo de servicio MICE: qué industria, qué tamaño de empresa, qué cargo del interlocutor, qué señales indican necesidad activa
- Propón las fuentes de prospección más efectivas: LinkedIn Sales Navigator, ferias del sector, bases de datos de empresas, referidos de clientes actuales
- Diseña el script de primer contacto por LinkedIn: mensaje de conexión, mensaje de seguimiento, propuesta de llamada de descubrimiento
- Crea el guión de la llamada de cualificación de 10 minutos: preguntas para detectar necesidad, presupuesto, plazo, proceso de decisión y competencia

2. REUNIÓN DE DESCUBRIMIENTO Y DIAGNÓSTICO
- Diseña la estructura de la reunión de descubrimiento de 45 minutos: agenda compartida con el cliente, preguntas para entender el objetivo del evento, cómo medir el éxito desde la perspectiva del cliente
- Propón las preguntas de diagnóstico por tipo de interlocutor: qué le preocupa al director de RRHH que organiza el incentivo anual (participación, motivación, logística), qué le preocupa al director de marketing que lanza un producto (impacto mediático, experiencia de asistentes, cobertura)
- Define cómo identificar el presupuesto real sin preguntar directamente: preguntas indirectas, referencia a proyectos anteriores, anclaje con ejemplos de mercado
- Crea el cuestionario de brief del evento que se entrega al cliente tras la reunión para recopilar toda la información necesaria para la propuesta

3. ELABORACIÓN Y PRESENTACIÓN DE LA PROPUESTA
- Diseña la estructura de una propuesta ganadora para un evento corporativo de 200 personas: portada con nombre del cliente, comprensión del reto, propuesta creativa, plan de trabajo, equipo asignado, inversión detallada por partidas, garantías
- Propón cómo personalizar la propuesta para el interlocutor: lenguaje más creativo para marketing, más operacional para RRHH, más financiero para dirección general
- Define la estrategia de presentación: presencial vs videoconferencia, quién presenta, cómo anticipar preguntas, cómo crear un momento de impacto visual
- Crea un follow-up de propuesta estándar: email de 48 horas, llamada de seguimiento a los 5 días, email de valor añadido a las 2 semanas

4. GESTIÓN DE OBJECIONES Y NEGOCIACIÓN
- Diseña respuestas para las 10 objeciones más frecuentes: "es caro", "tenemos proveedor de siempre", "necesito comparar con otras agencias", "el presupuesto es muy justo", "tenemos poco tiempo para organizarlo", "el CEO quiere cambiar el concepto"
- Propón la estrategia de negociación: qué concesiones hacer y en qué orden, cómo defender el precio con argumentos de valor, cuándo ofrecer descuento y cuándo no
- Define los límites no negociables y cómo comunicarlos de forma positiva
- Crea el protocolo de escalada: cuándo involucrar al director comercial o al CEO de la agencia en la negociación

5. CIERRE Y CONTRATACIÓN
- Diseña las técnicas de cierre más efectivas para servicios MICE: cierre por urgencia (disponibilidad de fecha), cierre por alternativa (opción A vs opción B), cierre por resumen (esto es lo que acordamos)
- Define el proceso de contratación: qué documentos firmar, cómo gestionar el anticipo, qué garantías ofrece la agencia al cliente
- Propón cómo gestionar el período entre firma y el evento: comunicación de progreso, gestión de cambios del cliente, prevención de conflictos por expectativas no alineadas
- Crea el protocolo de onboarding del nuevo cliente: reunión de kick-off, presentación del equipo operativo, calendario de hitos

6. FIDELIZACIÓN Y UPSELLING
- Diseña la estrategia de upselling durante la organización del evento: cómo proponer mejoras de última hora de forma que el cliente las perciba como valor añadido y no como incremento de coste
- Propón el proceso de fidelización post-evento: informe de resultados, encuesta de satisfacción, reunión de valoración, propuesta para el próximo evento antes de que el cliente empiece a buscar alternativas
- Define el plan de referidos: cómo pedir recomendaciones de forma natural al cliente satisfecho, qué incentivo ofrecer, cómo hacer seguimiento

Entrega todos los scripts, plantillas y guiones listos para usar por el equipo comercial, con variantes según el perfil del interlocutor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proceso de venta consultiva B2B para paquetes de eventos corporativos MICE',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto para plataformas de gestión de eventos',
                'description'      => 'Define la estrategia, roadmap y métricas para una plataforma SaaS de gestión de eventos corporativos, equilibrando necesidades de organizadores, asistentes y patrocinadores.',
                'prompt_content'   => <<<'EOT'
Actúa como product manager senior con experiencia en plataformas SaaS para el sector de eventos y eventech. Necesito desarrollar la estrategia de producto, el roadmap y el sistema de métricas para una plataforma digital de gestión de eventos corporativos que sirve simultáneamente a tres tipos de usuarios: organizadores de eventos, asistentes y patrocinadores.

Contexto del producto:
- Estado actual: [idea / MVP con primeros clientes / producto en crecimiento con N clientes]
- Usuarios activos: [organizadores: N / asistentes mensuales: N / patrocinadores: N]
- Principales funcionalidades actuales: [las que ya existen]
- Mayor pain point reportado por los organizadores: [DESCRIBIR]
- Mayor pain point reportado por los asistentes: [DESCRIBIR]
- Competencia principal: [Eventbrite, Hopin, Whova, Cvent, u otras]
- Modelo de negocio: [comisión por ticket / suscripción mensual por organizador / precio por evento / freemium]

Desarrolla la estrategia de producto completa:

1. COMPRENSIÓN DE USUARIOS Y NECESIDADES
- Define con detalle las 3 personas de usuario: Organizador (director de marketing o responsable de RRHH), Asistente (profesional corporativo que acude al evento), Patrocinador (responsable de marketing del patrocinador)
- Mapea los jobs-to-be-done de cada persona: qué tarea funcional, emocional y social intenta resolver con la plataforma
- Identifica los momentos de mayor fricción en el journey de cada usuario: desde el descubrimiento de la plataforma hasta el post-evento
- Prioriza las necesidades usando el framework de Kano: necesidades básicas (hygiene factors), de rendimiento y delighters

2. PROPUESTA DE VALOR Y DIFERENCIACIÓN
- Define la propuesta de valor para cada tipo de usuario en una frase
- Identifica las funcionalidades únicas que diferencian la plataforma de Eventbrite, Hopin y Cvent
- Propón la estrategia de océano azul: qué capacidades añadir que la competencia no tiene, qué capacidades eliminar porque no generan valor real
- Define la "killer feature": la funcionalidad que hace que los organizadores elijan esta plataforma sobre otras

3. PRIORIZACIÓN DE FUNCIONALIDADES Y ROADMAP
- Lista todas las funcionalidades posibles en la plataforma (al menos 30): gestión de agenda, ticketing, networking, streaming, app de evento, check-in, analítica, integración con CRM, gamificación, interpretación simultánea, accesibilidad
- Aplica el método RICE (Reach, Impact, Confidence, Effort) para priorizar las 10 funcionalidades del siguiente trimestre
- Diseña el roadmap a 12 meses dividido en trimestres: objetivos, funcionalidades a lanzar, métricas de éxito de cada trimestre
- Identifica las dependencias técnicas entre funcionalidades y los riesgos que podrían retrasar el roadmap

4. MÉTRICAS Y SISTEMA DE OKRs
- Define los OKRs de la plataforma para los próximos 12 meses: objetivos cualitativos y key results medibles
- Propón las métricas clave por tipo de usuario: para organizadores (eventos creados, asistentes registrados por evento, NPS del organizador), para asistentes (tasa de check-in, sesiones visitadas, conexiones de networking), para patrocinadores (leads generados, interacciones en el stand virtual)
- Diseña el dashboard de producto para seguimiento semanal del equipo: qué 10 métricas ver en una pantalla
- Define los umbrales de alerta que indicarían un problema grave de producto o negocio

5. ESTRATEGIA DE CRECIMIENTO Y MONETIZACIÓN
- Propón la estrategia de crecimiento de la plataforma: adquisición (cómo llegan nuevos organizadores), activación (cómo consiguen su primer evento exitoso), retención (por qué repiten), referencia (cómo recomiendan a otros), ingresos (cómo y cuándo monetizar)
- Define el modelo de precios óptimo: qué incluye el plan gratuito, el plan básico y el plan enterprise, con qué límites y precios sugeridos
- Diseña la estrategia de expansión internacional: qué mercados abordar primero, qué adaptaciones necesita la plataforma (idiomas, monedas, sistemas de pago locales)
- Propón alianzas estratégicas para acelerar el crecimiento: venues, agencias de eventos, asociaciones profesionales del sector

6. PROCESO DE DISCOVERY Y DELIVERY
- Define el proceso de discovery del equipo de producto: cómo se descubren necesidades de usuario, con qué frecuencia, qué técnicas usar (entrevistas, análisis de datos, encuestas)
- Propón el proceso de toma de decisiones de producto: quién decide qué funcionalidades se construyen, cómo se documentan las decisiones
- Diseña el proceso de delivery: sprint planning, definición de done, QA, release notes, comunicación de cambios a usuarios
- Crea el proceso de feedback post-lanzamiento: cómo medir el impacto de cada funcionalidad nueva y decidir si iterarla o descontinuarla

Entrega el roadmap en formato de tabla por trimestres, los OKRs en formato estándar y el dashboard de métricas con los umbrales de alerta definidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Estrategia de producto y roadmap para plataformas SaaS de gestión de eventos',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Coordinación de equipos en eventos corporativos con IA',
                'description'      => 'Gestiona la coordinación de equipos multidisciplinares en la producción de eventos corporativos: roles, comunicación, briefings y protocolos de contingencia.',
                'prompt_content'   => <<<'EOT'
Actúa como director de operaciones y recursos humanos especializado en la gestión de equipos para la producción de eventos corporativos. Necesito desarrollar un sistema completo de coordinación de equipos para la producción de un evento corporativo de gran formato, cubriendo desde la planificación de recursos humanos hasta los protocolos de gestión de imprevistos el día del evento.

Contexto del evento:
- Tipo de evento: [congreso anual / lanzamiento de producto / convención de ventas / team building / gala]
- Número de asistentes: [NÚMERO]
- Duración: [número de días]
- Venue: [descripción del espacio]
- Equipo interno disponible: [número de personas del equipo organizador]
- Proveedores externos: [catering, AV, seguridad, logística, fotografía, traducción simultánea, otros]
- Principal reto de coordinación del evento anterior: [DESCRIBIR]

Desarrolla el sistema de coordinación con los siguientes módulos:

1. ESTRUCTURA DE EQUIPO Y ROLES
- Define el organigrama del equipo del evento: director de evento, coordinador de logística, responsable de comunicación, coordinador de asistentes, responsable de proveedores, coordinador técnico de AV
- Elabora la descripción de funciones de cada rol: responsabilidades principales, toma de decisiones, a quién reporta, con quién coordina
- Propón un sistema de walkie-talkies o comunicación por canal durante el evento: quién tiene radio, qué canal usa cada área (logística, AV, catering, seguridad)
- Define la cadena de mando para decisiones de urgencia el día del evento: quién decide qué, cuándo escalar al director de evento

2. PLANIFICACIÓN DE RECURSOS HUMANOS
- Diseña el plan de necesidades de personal por fase: premontaje, montaje, día del evento (apertura, mañana, comida, tarde, cóctel, desmontaje)
- Propón el sistema de turnos: horarios de entrada y salida por rol, relevos, descansos garantizados para cumplir con normativa laboral
- Define los perfiles externos que necesitan contratarse: azafatas, controladores de acceso, personal de información, speakers bureau
- Crea el proceso de briefing del equipo externo: qué información deben recibir, cómo verificar que lo han entendido, a quién deben reportar

3. SISTEMA DE BRIEFINGS Y COMUNICACIÓN
- Diseña la cadena de briefings: briefing del equipo directivo (3 semanas antes), briefing del equipo completo (1 semana antes), briefing del día del evento (2 horas antes de apertura)
- Crea la plantilla del briefing maestro del evento: programa minuto a minuto, mapa del espacio con zonas asignadas, contactos clave, plan de contingencia
- Propón el sistema de documentación compartida durante la producción: qué herramientas usar (Google Drive, Notion, Asana, WhatsApp Business), cómo organizar los archivos para acceso rápido bajo presión
- Define el protocolo de comunicación con el cliente durante el evento: quién es el interlocutor, con qué frecuencia se actualizan, cómo gestionar peticiones de último momento

4. RUNBOOK DETALLADO Y TIMING
- Crea la estructura del runbook (guión de producción): columnas de hora, actividad, responsable, espacio, proveedor implicado, observaciones
- Define los hitos críticos del runbook: apertura de puertas, inicio de la primera sesión, comida, clausura, foto de grupo, cóctel, desmontaje
- Propón los chequeos previos obligatorios: test de AV 2 horas antes, prueba de micrófono de ponentes, revisión de señalética, confirmación de catering, ensayo del protocolo de seguridad
- Diseña los "stops" del runbook: momentos en los que el director de evento hace una revisión de estado con todos los responsables de área

5. PROTOCOLOS DE CONTINGENCIA
- Diseña protocolos para los 10 imprevistos más frecuentes: ponente que cancela 24 horas antes, fallo del sistema de AV en medio de una sesión, corte de luz, asistente con problema médico, conflicto entre asistentes, retraso del catering, overbooking del aforo, problema con el streaming online, inclemencias meteorológicas para eventos al aire libre, filtración de información confidencial
- Define el árbol de decisión para cada imprevisto: qué hacer en los primeros 5 minutos, quién lo gestiona, cómo se comunica a los asistentes si es necesario, cómo se documenta
- Propón el kit de emergencias del director de evento: qué materiales físicos tener siempre a mano (walkie-talkies de repuesto, tijeras, cinta adhesiva, medicación básica, listado de contactos de emergencia, tarjeta de crédito corporativa)

6. EVALUACIÓN POST-EVENTO Y MEJORA CONTINUA
- Diseña la reunión de debriefing del equipo: cuándo realizarla (48 horas después del evento), qué analizar (qué funcionó, qué falló, qué mejorar, propuestas del equipo), cómo documentar las conclusiones
- Propón el informe de gestión del equipo que se entrega al cliente: cómo se coordinó el equipo, incidencias gestionadas, valoración del desempeño de proveedores
- Crea el sistema de valoración del desempeño del personal externo: evaluación de azafatas, proveedores de AV, catering, seguridad, para decidir con quién repetir
- Define la base de conocimiento de producción: cómo acumular los aprendizajes de cada evento en un repositorio que mejore la siguiente producción

Entrega el runbook en formato tabla listo para usar, los protocolos de contingencia en fichas independientes y el plan de turnos de personal en formato visual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Coordinación de equipos y protocolos de producción para eventos corporativos',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuestación y control financiero de eventos MICE con IA',
                'description'      => 'Desarrolla un sistema completo de presupuestación, control de costes y análisis de rentabilidad para eventos corporativos MICE, con plantillas y alertas de desviación.',
                'prompt_content'   => <<<'EOT'
Actúa como controller financiero especializado en la gestión económica de eventos corporativos y MICE. Necesito desarrollar un sistema completo de presupuestación, control de costes y análisis de rentabilidad para una agencia de eventos o un departamento de eventos corporativos que gestiona múltiples proyectos simultáneamente con presupuestos variables.

Contexto financiero:
- Tipo de organización: [agencia de eventos / departamento de RRHH o marketing que organiza eventos internos / venue con gestión propia]
- Número de eventos gestionados simultáneamente: [NÚMERO]
- Rango de presupuesto por evento: [de X a Y euros]
- Principales partidas de coste: [venue, catering, AV, logística, personal, comunicación, regalos, otros]
- Margen objetivo de la agencia: [PORCENTAJE] o coste máximo por persona en eventos internos
- Principal problema financiero actual: [desviaciones de presupuesto / margen insuficiente / falta de visibilidad en tiempo real / pagos a proveedores fuera de plazo]

Desarrolla el sistema de gestión financiera con los siguientes componentes:

1. ESTRUCTURA PRESUPUESTARIA ESTÁNDAR
- Diseña la estructura de capítulos presupuestarios para un evento corporativo completo: venue, alojamiento y transporte, catering y restauración, producción audiovisual y técnica, decoración y ambientación, comunicación y diseño, personal y azafatas, entretenimiento y actividades, seguros y permisos, gastos de gestión y overhead, margen de contingencia
- Define los rangos de coste de referencia por partida y por tipo de evento (congreso 500 personas, incentivo 50 personas, lanzamiento de producto)
- Propón el porcentaje recomendado de cada partida sobre el presupuesto total según el tipo de evento
- Diseña la estructura de presupuesto para el cliente: cómo presentar el desglose de forma transparente sin revelar los márgenes de la agencia

2. SISTEMA DE COTIZACIÓN Y MÁRGENES
- Define el proceso de cotización: cómo pasar del brief del cliente a un presupuesto en 48 horas, qué proveedores consultar, cómo estimar sin consultar para respuestas rápidas
- Propón el modelo de márgenes por partida: qué margen aplicar a cada tipo de proveedor, dónde hay más y menos margen de maniobra
- Diseña el sistema de descuentos: cuándo y cuánto descuento conceder sin sacrificar rentabilidad, cómo compensar un descuento en una partida con mayor margen en otra
- Crea el calculador de punto de equilibrio por evento: a partir de qué presupuesto del cliente el evento es rentable para la agencia

3. CONTROL DE COSTES DURANTE LA PRODUCCIÓN
- Diseña la plantilla de control de costes en tiempo real: presupuestado vs comprometido vs facturado por partida, porcentaje de desviación, proyección de coste final
- Propón el proceso de aprobación de gastos: quién puede aprobar qué importe, cuándo se necesita autorización del director, cómo gestionar los urgentes
- Define las alertas de desviación: qué porcentaje de desviación en una partida activa una revisión, quién recibe la alerta, qué acciones tomar
- Crea el protocolo de gestión de peticiones de cambio del cliente: cómo presupuestar un cambio de alcance, cómo aprobar un gasto adicional formalmente

4. GESTIÓN DE PROVEEDORES Y PAGOS
- Diseña el proceso de gestión de pagos a proveedores: condiciones de pago estándar a negociar (30% anticipo, 40% a mitad de producción, 30% post-evento), sistema de seguimiento de facturas pendientes
- Propón el sistema de validación de facturas de proveedores: cómo verificar que lo facturado corresponde a lo contratado y ejecutado
- Define la gestión del cash flow del evento: cómo anticipar los pagos a proveedores, cómo sincronizarlos con los cobros al cliente, cuándo necesitar financiación puente
- Crea el análisis de rentabilidad por proveedor: qué proveedores generan más valor con mejor relación calidad-precio

5. INFORME FINANCIERO POST-EVENTO
- Diseña el informe de cierre financiero del evento: presupuesto inicial vs coste real, análisis de desviaciones por partida con explicación, margen real obtenido, lecciones aprendidas para futuros eventos similares
- Propón el formato del informe financiero para el cliente si el evento se gestiona a coste: cómo presentar los justificantes, cómo explicar las desviaciones
- Define el proceso de liquidación final: facturas pendientes de proveedores, retenciones, devoluciones al cliente si corresponde
- Crea la base de datos de costes históricos: cómo acumular los datos de costes reales de cada evento para mejorar las cotizaciones futuras

6. PLANIFICACIÓN FINANCIERA ANUAL DE LA AGENCIA
- Diseña el modelo de planificación de ingresos anuales: cómo proyectar la cartera de eventos, estacionalidad (cuándo se concentran los eventos), cómo garantizar ingresos en los meses de menor actividad
- Propón el cuadro de mando financiero mensual de la agencia: ingresos confirmados, propuestas pendientes (pipeline), margen acumulado, costes fijos cubiertos, proyección de cierre del año
- Define los indicadores de salud financiera de la agencia: margen medio por evento, días de cobro medio, porcentaje de propuestas convertidas, coste de adquisición de nuevo cliente
- Crea el plan de contingencia financiera: qué hacer si un cliente cancela un evento grande, cómo gestionar los compromisos con proveedores ya contratados

Entrega todas las plantillas en formato tabla lista para trasladar a Excel o Google Sheets, con fórmulas indicadas para los cálculos automáticos clave.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema de presupuestación y control financiero para eventos corporativos MICE',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y cumplimiento legal en eventos corporativos con IA',
                'description'      => 'Desarrolla los contratos, cláusulas de cancelación y protocolos de cumplimiento legal necesarios para organizar eventos corporativos con plenas garantías jurídicas.',
                'prompt_content'   => <<<'EOT'
Actúa como abogado especializado en derecho de los contratos, responsabilidad civil y normativa de eventos. Necesito desarrollar un sistema legal completo para una agencia de organización de eventos corporativos que incluya contratos con clientes, contratos con proveedores, gestión de riesgos legales y cumplimiento normativo en la celebración de eventos.

Contexto legal de la organización:
- Tipo de entidad: [agencia de eventos / promotora / venue / freelance organizador de eventos]
- Tipos de eventos organizados: [congresos / incentivos / galas / lanzamientos / eventos al aire libre]
- Países donde opera: [España / internacional]
- Volumen de eventos anuales: [NÚMERO]
- Principal riesgo legal experimentado: [cancelaciones imprevistas / responsabilidad por accidentes / incumplimiento de proveedores / protección de datos de asistentes / derechos de imagen]

Desarrolla el sistema legal con los siguientes componentes:

1. CONTRATO CON EL CLIENTE ORGANIZADOR
- Diseña las cláusulas esenciales del contrato entre la agencia y el cliente: objeto del servicio, precio y forma de pago, plazo de ejecución, obligaciones de cada parte, propiedad intelectual de los materiales creados
- Propón la cláusula de cancelación por parte del cliente: escalado de penalizaciones según tiempo de preaviso (100% si cancela con menos de 30 días, 50% entre 30 y 60 días, 20% entre 60 y 90 días), qué costes comprometidos son siempre facturables
- Diseña la cláusula de fuerza mayor adaptada a la realidad post-pandemia: qué eventos se consideran fuerza mayor, cómo se distribuyen los costes irrecuperables, el proceso de notificación y documentación requerida
- Define la cláusula de modificación de alcance: cómo se documentan y aprueban cambios al briefing original, cómo afectan al precio

2. CONTRATO CON PROVEEDORES DE SERVICIOS
- Diseña las cláusulas clave del contrato con el venue: uso exclusivo de instalaciones, horarios de montaje y desmontaje, capacidad máxima, restricciones de ruido o alcohol, condiciones del catering oficial del espacio, seguros exigidos al contratante
- Propón el contrato con proveedores de AV y producción: equipos incluidos, responsabilidad por fallos técnicos, personal incluido, derechos de autor del material audiovisual creado
- Crea las condiciones de contratación de personal externo (azafatas, seguridad, traductores): relación laboral o mercantil, cobertura de responsabilidad, formación mínima exigida
- Define la cláusula de subcontratación: cuándo puede el proveedor subcontratar, con qué requisitos, quién asume la responsabilidad

3. GESTIÓN DE RIESGOS Y SEGUROS
- Propón los seguros obligatorios y recomendados para la organización de eventos: responsabilidad civil del organizador, cancelación del evento, accidentes de participantes, robo o daños en equipos
- Define los importes mínimos de cobertura por tipo de evento y número de asistentes
- Diseña el protocolo de gestión de siniestros: quién notifica, a quién, en qué plazo, qué documentación recopilar, cómo comunicar al cliente
- Propón las cláusulas de responsabilidad y limitación de daños en el contrato con el cliente: qué daños asume la agencia, cuáles están excluidos, cuál es el límite máximo de responsabilidad

4. PROTECCIÓN DE DATOS Y PRIVACIDAD DE ASISTENTES
- Diseña el sistema de cumplimiento RGPD para la gestión de datos de asistentes: base legal para el tratamiento, qué datos se pueden recopilar, durante cuánto tiempo se conservan, con quién se comparten (ponentes, patrocinadores, plataformas tecnológicas)
- Propón el texto de la política de privacidad del evento: qué información incluir, en qué momento mostrarla al asistente (registro online, entrada al evento)
- Define el proceso de ejercicio de derechos: cómo el asistente puede acceder, rectificar o eliminar sus datos, quién gestiona estas solicitudes, en qué plazo
- Crea el acuerdo de procesamiento de datos (DPA) para proveedores que accedan a datos de asistentes: plataformas de ticketing, servicios de traducción, fotógrafos

5. DERECHOS DE IMAGEN Y PROPIEDAD INTELECTUAL
- Diseña el modelo de autorización de captación y uso de imagen para asistentes: consentimiento en el formulario de registro, señalización en el evento, proceso de opt-out
- Propón el contrato de derechos con fotógrafos y videógrafos: qué derechos cede el fotógrafo a la agencia, en qué soportes se pueden usar las imágenes, por cuánto tiempo, si el fotógrafo puede usar las imágenes en su portfolio
- Define los derechos sobre el contenido generado por ponentes: de quién son las diapositivas, quién puede grabar y difundir las ponencias, cómo gestionar las solicitudes de los medios de comunicación
- Crea el protocolo para gestionar grabaciones no autorizadas por asistentes y su publicación en redes sociales

6. NORMATIVA ESPECÍFICA DE EVENTOS
- Detalla los permisos y licencias necesarios para diferentes tipos de eventos en España: licencia de actividad del venue, permiso de ocupación de vía pública, comunicación a la Policía Local por volumen de asistentes, autorización de fuegos artificiales o efectos especiales
- Propón el protocolo de seguridad obligatorio: plan de evacuación, señalización de emergencias, coordinación con servicios sanitarios (obligatoriedad de ATS según aforo)
- Define las obligaciones en materia de prevención de riesgos laborales para el personal del evento
- Crea el checklist de cumplimiento legal previo al evento: qué verificar en las 72 horas anteriores

Entrega los modelos de contrato con cláusulas redactadas y listas para revisar con el abogado de la organización, e indica claramente qué partes deben adaptarse a cada situación específica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Marco contractual y cumplimiento legal para organización de eventos corporativos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención a asistentes y gestión de incidencias en eventos con IA',
                'description'      => 'Diseña los protocolos de atención al asistente, gestión de consultas y resolución de incidencias durante eventos corporativos para garantizar una experiencia de 5 estrellas.',
                'prompt_content'   => <<<'EOT'
Actúa como responsable de experiencia del cliente y coordinadora de atención al asistente en eventos corporativos de gran formato. Necesito diseñar un sistema completo de atención al asistente que garantice una experiencia de 5 estrellas desde la comunicación pre-evento hasta el seguimiento post-evento, incluyendo la gestión eficiente de incidencias durante el propio evento.

Contexto del evento:
- Tipo de evento: [congreso / convención de ventas / gala / incentivo / lanzamiento de producto]
- Número de asistentes esperados: [NÚMERO]
- Perfil del asistente: [directivos / equipo de ventas / clientes VIP / prensa / mezcla de perfiles]
- Canales de comunicación disponibles con el asistente: [app del evento / email / WhatsApp / web / call center]
- Principal queja en eventos anteriores: [problemas de registro / largas esperas / información insuficiente / acceso a contenido post-evento / otros]
- Equipo de atención disponible: [NÚMERO de personas para este rol]

Desarrolla el sistema de atención con los siguientes componentes:

1. COMUNICACIÓN Y PREPARACIÓN PRE-EVENTO
- Diseña la secuencia de comunicaciones al asistente confirmado: email de confirmación de registro, recordatorio 2 semanas antes con información práctica, email 48 horas antes con programa definitivo y accesos, mensaje de bienvenida el día del evento
- Propón el contenido de cada comunicación: qué información incluir, qué tono usar, qué llamadas a la acción incluir
- Crea la guía del asistente en versión digital: cómo llegar, dónde aparcar, dónde hacer el check-in, qué llevar, qué esperar, preguntas frecuentes
- Diseña el proceso de gestión de solicitudes especiales previas: necesidades dietéticas, accesibilidad, solicitudes de meeting 1:1, peticiones de asientos específicos

2. CHECK-IN Y ACREDITACIÓN
- Diseña el proceso de check-in para minimizar esperas: ratio de puntos de registro por número de asistentes, tecnología de check-in (QR, reconocimiento facial, nombre), gestión de no registrados online que acuden presencialmente
- Propón el protocolo de atención prioritaria: asistentes VIP, ponentes, prensa, personas con movilidad reducida
- Diseña el punto de información: ubicación óptima, señalética, materiales disponibles, formación del personal asignado
- Crea el protocolo de incidencia de registro: asistente sin confirmación, asistente duplicado, asistente que perdió el email de confirmación

3. ATENCIÓN DURANTE EL EVENTO
- Define los puntos de atención en el evento: localización, horarios, dotación de personal por momento del día
- Diseña el catálogo de servicios de atención: información de agenda, cambios de sala, problemas con el app del evento, solicitud de materiales, incidencias de catering, primeros auxilios básicos
- Propón el sistema de comunicación del equipo de atención durante el evento: walkie-talkie, app de mensajería, tablón de incidencias compartido en tiempo real
- Crea los scripts de atención para las 15 situaciones más frecuentes: preguntas sobre el programa, solicitudes de fotografía con el ponente, asistente que se siente mal, reclamaciones sobre el catering, problemas técnicos en sala

4. GESTIÓN DE INCIDENCIAS Y ESCALADA
- Define los niveles de incidencia: nivel 1 (el personal de atención resuelve), nivel 2 (se escala al coordinador de área), nivel 3 (se escala al director de evento), nivel emergencia (se activa el protocolo de seguridad)
- Diseña el proceso de gestión de incidencias: registro en tiempo real, asignación de responsable, resolución, cierre y aprendizaje
- Propón respuestas estándar para las quejas más frecuentes: temperatura del espacio, calidad del catering, cambio de ponente o sesión, problema con el streaming, ruido en sala contigua
- Crea el protocolo de gestión de asistentes problemáticos: cómo gestionar un asistente alterado, cómo proteger a otros asistentes, cuándo involucrar a seguridad o a la dirección del cliente

5. EXPERIENCIA VIP Y GESTIÓN DE INVITADOS ESPECIALES
- Diseña el protocolo de atención a asistentes VIP: acreditación diferenciada, welcomer personal, sala VIP o zona reservada, atenciones especiales, acompañamiento durante el evento
- Propón el protocolo de atención a ponentes: traslados, sala de ponentes, prueba técnica, asistente personal durante su intervención, gestión de preguntas del público, firma de libros o networking post-ponencia
- Crea el protocolo de atención a medios de comunicación: sala de prensa, credenciales específicas, acceso a zonas exclusivas para fotografía, entrevistas coordinadas con ponentes o dirección
- Define la gestión de invitados sorpresa o cambios de última hora en el listado de asistentes VIP

6. ENCUESTA DE SATISFACCIÓN Y SEGUIMIENTO POST-EVENTO
- Diseña la encuesta de satisfacción del asistente: 8 preguntas máximo, pregunta NPS, preguntas sobre aspectos operativos y de contenido, campo abierto de comentarios
- Propón el momento y canal de envío: en el acto al final del evento (mediante app), por email 24 horas después, o ambos
- Crea el proceso de análisis de resultados: cómo segmentar por perfil de asistente, cómo identificar los 3 principales puntos de mejora, cómo presentar los resultados al cliente
- Diseña el seguimiento de asistentes insatisfechos: identificar las valoraciones más bajas, contacto personalizado para entender el problema, propuesta de compensación si aplica

Entrega todos los scripts, plantillas de comunicación y protocolos de gestión de incidencias listos para usar por el equipo de atención, con variantes según el perfil del asistente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Protocolos de atención al asistente y gestión de incidencias en eventos corporativos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de eventos corporativos con IA',
                'description'      => 'Define una propuesta de servicios freelance de consultoría y organización de eventos corporativos, con modelo de tarifas, proceso de trabajo y estrategia de captación de clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de negocio especializado en el lanzamiento y escalado de servicios freelance en el sector de eventos corporativos. Necesito definir y estructurar una propuesta de servicios como freelance especializado en organización y consultoría de eventos corporativos MICE, estableciendo el modelo de negocio, las tarifas, el proceso de trabajo y la estrategia de captación de clientes.

Contexto del freelance:
- Experiencia previa: [años trabajando en agencia de eventos / gestión de eventos desde departamento de empresa]
- Especialidad: [eventos de incentivos / congresos y convenciones / lanzamientos de producto / team building / mixto]
- Capacidad de producción: [número de eventos que puedes gestionar simultáneamente]
- Red de contactos y proveedores: [qué red de proveedores de confianza tienes ya]
- Objetivo de facturación anual: [IMPORTE]
- Ubicación geográfica y área de operación: [ciudad / nacional / internacional]

Desarrolla la propuesta de negocio freelance con los siguientes apartados:

1. POSICIONAMIENTO Y NICHO DE MERCADO
- Define tu nicho de especialización: qué tipo de eventos haces mejor que nadie, para qué industria o tamaño de empresa, en qué geografía
- Redacta tu propuesta de valor en 3 versiones: para el director de marketing, para el responsable de RRHH, para la CEO de empresa mediana
- Identifica los 5 argumentos por los que un cliente debe contratar a un freelance especializado en lugar de a una agencia grande: personalización, precio, agilidad, acceso directo al experto, flexibilidad
- Diseña tu posicionamiento de precio: premium, precio medio o precio competitivo, y justificación en función de tu propuesta de valor

2. CATÁLOGO DE SERVICIOS Y TARIFAS
- Define el catálogo de servicios: consultoría de evento (revisión del concepto y briefing), dirección de producción completa, coordinación de día de evento sin producción, servicios puntuales (búsqueda de venue, negociación con proveedores, diseño de concepto creativo)
- Propón el modelo de tarifas para cada servicio: tarifa fija por proyecto, tarifa diaria, comisión sobre presupuesto de producción, retainer mensual para clientes con eventos recurrentes
- Diseña los paquetes de servicios: paquete básico (coordinación de día + gestión de proveedores), paquete estándar (dirección completa + comunicación con asistentes), paquete premium (consultoría estratégica + dirección + presencia completa + informe post-evento)
- Define los extras facturables: desplazamientos fuera de tu área base, eventos de fin de semana, urgencias con menos de 30 días de preaviso, idiomas adicionales

3. PROCESO DE TRABAJO Y ENTREGABLES
- Diseña el proceso de trabajo estándar por fases: briefing y diagnóstico, propuesta y aprobación, producción y coordinación, ejecución y día del evento, cierre y post-evento
- Define los entregables de cada fase: qué documento o producto entregas al cliente en cada momento
- Propón las herramientas de trabajo y comunicación con el cliente: qué usas para la gestión de proyecto (Notion, Asana, Trello), para la comunicación (email, WhatsApp Business, videollamada), para la documentación (Google Drive, Dropbox)
- Crea el protocolo de toma de decisiones con el cliente: qué decides tú como profesional, qué necesita aprobación del cliente, cómo gestionar cambios de alcance

4. MODELO CONTRACTUAL Y PROTECCIÓN PROFESIONAL
- Diseña el contrato estándar para tus servicios: objeto, precio, forma de pago (50% anticipo, 50% al finalizar), cancelación, propiedad intelectual, confidencialidad
- Propón la política de cancelación que proteja tus ingresos: qué porcentaje cobrar si el cliente cancela según el tiempo de preaviso
- Define los seguros que necesitas como freelance de eventos: responsabilidad civil profesional, importe de cobertura recomendado
- Crea tu política de cambios de alcance: cómo documentar y facturar cualquier petición que esté fuera del alcance inicial aprobado

5. CAPTACIÓN DE CLIENTES Y CRECIMIENTO
- Diseña tu estrategia de captación de los primeros 3 clientes: cómo aprovechar tu red de contactos anterior, cómo presentarte como freelance sin que parezca una bajada de categoría respecto a trabajar en agencia
- Propón el perfil de LinkedIn optimizado para freelance de eventos: titular, about, servicios, recomendaciones, contenido a publicar
- Define tu estrategia de contenido en redes sociales: qué compartir para atraer a responsables de RRHH y marketing como potenciales clientes (tips de organización, behind the scenes, tendencias del sector, casos de éxito)
- Crea tu plan de networking: eventos del sector a los que asistir, asociaciones profesionales a las que unirte, cómo convertir una conversación en una reunión de presentación

6. GESTIÓN FINANCIERA Y CRECIMIENTO DEL NEGOCIO FREELANCE
- Propón la estructura de costes del negocio freelance: gastos fijos (seguros, herramientas, formación), gastos variables (desplazamientos, subcontratación de apoyo puntual)
- Diseña el modelo de previsión de ingresos: cuántos eventos al año necesitas para alcanzar tu objetivo de facturación, qué mezcla de servicios es más rentable
- Define la estrategia de crecimiento a 3 años: mantenerse como freelance individual pero aumentando el ticket medio, asociarse con otro freelance complementario, o crear una microagencia
- Propón cómo escalar sin perder calidad: cuándo y cómo subcontratar apoyo de coordinación, cómo mantener el nivel de servicio personal que te diferencia de las agencias

Entrega la propuesta completa con el catálogo de servicios y tarifas en formato tabla, el modelo de contrato estándar resumido y el plan de captación de clientes para los primeros 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelo de negocio y captación de clientes para freelance de eventos corporativos',
                'vote_score'       => 28,
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
