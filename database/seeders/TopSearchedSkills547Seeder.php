<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills547Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing digital para hoteles y destinos turísticos con IA',
                'description'       => 'Domina las estrategias de marketing digital para el sector hotelero y turístico usando IA: captación de viajeros en Google y metabuscadores, gestión de la reputación online, campañas de retargeting y personalización de la comunicación según el tipo de viajero.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en marketing digital para el sector turístico y hotelero, con más de 10 años de experiencia trabajando con hoteles independientes, cadenas hoteleras y destinos turísticos en España y Latinoamérica, especializado en el uso de inteligencia artificial para captar viajeros en un entorno de alta competencia en canales digitales.

instrucción: Ayúdame a diseñar una estrategia de marketing digital integral para un hotel boutique de 4 estrellas situado en una ciudad media española con oferta turística cultural, que quiere reducir su dependencia de las OTAs (Booking.com, Expedia) y aumentar el porcentaje de reservas directas en su web usando IA para personalizar la captación y la conversión.

Desarrolla los siguientes componentes de la estrategia:

**1. Estrategia de visibilidad en Google y metabuscadores**
Define la presencia en los canales de búsqueda de intención turística: optimización del perfil de Google Business Profile para búsquedas locales y de destino, estrategia de Google Hotel Ads con puja inteligente por tipo de viajero y temporada, presencia en metabuscadores (Trivago, TripAdvisor, Kayak) con tarifas competitivas y paridad de precio, y uso de IA para optimizar automáticamente las pujas según la demanda y la ocupación actual del hotel. Define el presupuesto mínimo recomendado para cada canal y el ROAS objetivo.

**2. Marketing de contenidos para captar viajeros en fase de inspiración**
Diseña la estrategia de contenidos que captura al viajero antes de que elija destino: blog del hotel con contenidos de experiencias locales (gastronomía, cultura, rutas) optimizados para SEO long-tail, canal de YouTube e Instagram con contenido visual inmersivo del destino y del hotel, colaboración con creadores de contenido de viaje (travel bloggers, instagramers) que tienen audiencias de viajeros culturales, y uso de IA para identificar los temas de mayor volumen de búsqueda relacionados con el destino y generar el calendario editorial. Define los formatos de contenido con mayor ratio de conversión de inspiración a reserva.

**3. Personalización de la experiencia de reserva directa**
Define las herramientas y técnicas para convertir más visitantes a la web en reservas directas: motor de reservas con precio mejor garantizado y ventajas exclusivas (desayuno incluido, upgrade de habitación, late check-out), chatbot con IA en la web que responde preguntas frecuentes y ofrece asistencia durante el proceso de reserva, personalización del contenido de la web según el origen del viajero (vacacional, business, pareja, familia), y campañas de retargeting segmentadas por fase del embudo (visitantes que abandonaron el motor de reservas, visitantes de páginas de habitaciones concretas). Define la propuesta de valor del canal directo vs. OTAs y cómo comunicarla.

**4. Gestión de la reputación online y su impacto en la conversión**
Define la estrategia de gestión de reseñas: proceso sistemático de solicitud de reseña a los huéspedes tras el check-out (email automatizado, WhatsApp, código QR en la habitación), respuesta personalizada con IA a todas las reseñas en TripAdvisor, Google y Booking (positivas y negativas) en el tono adecuado para cada plataforma y situación, y monitorización del Review Score del hotel con alertas cuando cae por debajo del objetivo y análisis automático de los temas más frecuentes en las reseñas negativas. Define cómo mejorar la puntuación media en un punto en 12 meses y el impacto esperado en la tasa de conversión.

**5. Email marketing y fidelización de huéspedes anteriores**
Diseña el programa de comunicación con ex-huéspedes: secuencia de emails post-estancia (agradecimiento, solicitud de reseña, oferta de reserva anticipada para la próxima visita), newsletter mensual con novedades del hotel y del destino segmentada por tipo de viajero (parejas, familias, business), campaña de temporada baja con ofertas especiales para los segmentos con mayor probabilidad de repetición, y uso de IA para predecir qué ex-huéspedes tienen mayor probabilidad de repetir y personalizar la oferta para cada uno. Define los indicadores de éxito del programa de fidelización (tasa de repetición, revenue por ex-huésped, NPS).

**6. Medición del retorno de la inversión en marketing**
Define el sistema de atribución y medición: configuración del tracking de conversiones en Google Analytics 4 para atribuir correctamente las reservas directas a cada canal y campaña, dashboard de marketing con los indicadores clave (coste por reserva por canal, ROAS de campañas pagadas, tasa de conversión de la web), análisis mensual del mix de canales de captación y recomendaciones de reasignación del presupuesto, y comparativa del coste de adquisición del canal directo vs. comisión de OTAs para demostrar el ROI de la inversión en marketing propio.

Proporciona un plan de acción de los primeros 90 días con los hitos más importantes y las inversiones mínimas recomendadas para un hotel independiente con presupuesto de marketing limitado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de marketing digital para hotel boutique con foco en reserva directa',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plataformas de reservas y revenue management hotelero con IA',
                'description'       => 'Diseña y optimiza sistemas tecnológicos para el sector hotelero usando IA: motores de reservas, channel managers, sistemas de revenue management dinámico y plataformas de experiencia del huésped que maximizan la ocupación y el RevPAR.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en tecnología hotelera (hospitality tech), con experiencia en el diseño e integración de sistemas de gestión hotelera (PMS), motores de reservas, channel managers y plataformas de revenue management para hoteles independientes y cadenas hoteleras medianas.

instrucción: Ayúdame a diseñar la arquitectura tecnológica completa de un hotel independiente de 80 habitaciones que quiere modernizar su stack tecnológico para automatizar la gestión de la distribución, optimizar el revenue con precios dinámicos y mejorar la experiencia digital del huésped antes, durante y después de la estancia.

Desarrolla los siguientes componentes del stack tecnológico:

**1. Sistema de gestión hotelera (PMS) y su núcleo de datos**
Define la arquitectura del PMS central: módulos imprescindibles (gestión de reservas, check-in/check-out, asignación de habitaciones, facturación y cargos al cliente, housekeeping), criterios para elegir entre un PMS en la nube vs. on-premise, integraciones obligatorias con el motor de reservas, el channel manager y el sistema de punto de venta del restaurante y el spa, y diseño del modelo de datos del huésped para construir un perfil completo con el historial de estancias, preferencias y valor de vida.

**2. Motor de reservas y channel manager**
Diseña el sistema de distribución: motor de reservas directo en la web del hotel con soporte para múltiples idiomas, monedas y métodos de pago, channel manager que sincroniza disponibilidad y tarifas en tiempo real entre el motor directo y las OTAs (Booking.com, Expedia, Airbnb para hoteles), conectividad con los metabuscadores de viajes (Google Hotel Ads, Trivago, TripAdvisor), y gestión de la paridad de precios para garantizar que el canal directo siempre ofrece la mejor tarifa o ventajas adicionales equivalentes.

**3. Sistema de revenue management con precios dinámicos**
Define el motor de optimización de revenue: algoritmos de pricing dinámico que ajustan automáticamente las tarifas en función de la ocupación actual, la demanda histórica para esas fechas, los eventos locales y los precios de la competencia en tiempo real, definición de las restricciones de estancia mínima y cierre de ventas para maximizar el ingreso por habitación disponible (RevPAR), sistema de alertas que notifica al revenue manager cuando el algoritmo toma decisiones que se desvían de la estrategia definida, y reporting del RevPAR, ADR (Average Daily Rate) y ocupación vs. el año anterior y vs. el compset.

**4. Plataforma de experiencia digital del huésped**
Diseña el sistema de comunicación con el huésped: pre-stay emails automáticos con información de la estancia, upselling de habitaciones superiores y servicios adicionales (spa, restaurante, parking), app o web de check-in online con entrega de llave digital al móvil, sistema de mensajería con el huésped durante la estancia (WhatsApp o chat en la app) para solicitar servicios o reportar incidencias, y post-stay automatizado con solicitud de reseña y oferta de fidelización.

**5. Integración con sistemas de terceros y API architecture**
Define la estrategia de integración: diseño de la capa de APIs para conectar el PMS con los sistemas periféricos (punto de venta, sistema de gestión de eventos, SPA management), integración con plataformas de CRM y email marketing para gestionar la comunicación con el huésped, conectividad con las principales plataformas de gestión de reputación online (ReviewPro, TrustYou), y arquitectura de eventos para propagar los cambios de estado de las reservas a todos los sistemas en tiempo real.

**6. Analítica y reporting del negocio hotelero**
Define el sistema de reporting: dashboard operativo diario con la situación de ocupación, llegadas y salidas del día, ingresos y disponibilidad, reporting mensual de los indicadores clave del negocio hotelero (RevPAR, TRevPAR, GOPPAR, coste por reserva por canal), análisis de la segmentación de la demanda (leisure vs. business, nacional vs. internacional, reserva anticipada vs. last-minute) para guiar las decisiones de estrategia comercial, y alertas automáticas sobre desviaciones relevantes en los indicadores clave.

Proporciona una comparativa de los principales PMS del mercado (Mews, Cloudbeds, Protel, Opera) con criterios de selección para un hotel independiente de 80 habitaciones, y el modelo de datos de la reserva con los campos imprescindibles para el revenue management y la personalización de la experiencia del huésped.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Stack tecnológico completo para hotel independiente con revenue management dinámico',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencias para huéspedes y espacios hoteleros con IA',
                'description'       => 'Crea experiencias de huésped memorables y diseña espacios hoteleros diferenciados usando IA: desde el journey map del viajero hasta el diseño de amenities, la identidad visual del hotel y los materiales de comunicación que refuerzan el posicionamiento.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador de experiencias especializado en el sector hotelero y turístico, con experiencia en el diseño del guest journey, la identidad visual de hoteles boutique y la creación de experiencias memorables para los distintos tipos de viajero, usando inteligencia artificial para acelerar el proceso creativo y personalizar la comunicación.

instrucción: Ayúdame a diseñar la experiencia completa del huésped para un nuevo hotel boutique de 4 estrellas en una ciudad patrimonio de la humanidad, que quiere posicionarse como el hotel de referencia para el viajero cultural curioso que busca una conexión auténtica con el destino. El hotel tiene 40 habitaciones, un restaurante de cocina local contemporánea y una sala de eventos para grupos de hasta 50 personas.

Desarrolla los siguientes aspectos del diseño de la experiencia:

**1. Diseño del guest journey completo**
Define todas las fases de la experiencia del huésped: pre-estancia (descubrimiento del hotel online, proceso de reserva y comunicación previa, anticipación de la llegada), llegada y check-in (primer impacto visual, bienvenida, proceso de check-in), estancia (experiencia en la habitación, uso de los servicios del hotel, actividades organizadas, relación con el personal), salida y post-estancia (check-out, recuerdo de la experiencia, reconexión con el hotel). Para cada fase, define los momentos de la verdad (puntos de mayor impacto emocional) y cómo el diseño puede maximizar el deleite del huésped.

**2. Identidad visual e interior design del hotel**
Define el sistema de diseño del hotel: concepto de diseño que conecta la arquitectura y la decoración con la historia y la cultura del destino sin caer en los tópicos del turismo de masas, paleta de colores, materiales y texturas que crean una atmósfera coherente con el posicionamiento boutique y cultural, diseño de la señalética y los materiales de comunicación impresos (tarjetas de habitación, menú del minibar, guía del hotel) como extensión de la identidad del hotel, y use de arte local (fotografía, ilustración, artesanía) en los espacios comunes y las habitaciones para crear una experiencia de destino auténtica.

**3. Diseño de amenities y tocadores diferenciados**
Diseña los elementos de contacto físico de la estancia: selección y packaging de los productos de aseo con una marca local o elaborados específicamente para el hotel, detalle de bienvenida que refleja la gastronomía o la cultura local (producto artesanal de la región, libro o guía del destino), carta de almohada o de aromas de la habitación que permite al huésped personalizar su experiencia de descanso, y sistema de regalo de despedida que deja un recuerdo tangible de la estancia relacionado con el destino.

**4. Diseño del programa de experiencias locales**
Define el portfolio de experiencias que el hotel ofrece para conectar al viajero con el destino: visitas guiadas privadas al patrimonio de la ciudad con historiadores o guías especializados, talleres de gastronomía local con productores artesanos de la región, experiencias de participación en la vida cultural del destino (asistencia a festivales locales, visitas a talleres de artesanos, encuentros con creadores locales), y rutas de descubrimiento diseñadas por el equipo del hotel para los distintos tipos de viajero (fotógrafo, gastronómico, histórico-artístico).

**5. Comunicación visual para canales digitales y materiales impresos**
Define el sistema de comunicación del hotel: guía de estilo para las redes sociales (Instagram, Pinterest) con los formatos visuales que mejor representan la experiencia del hotel, fotografía y vídeo de las habitaciones y espacios comunes para la web y las OTAs con criterios de composición y luz que transmiten el ambiente del hotel, diseño del menú del restaurante como pieza de diseño editorial que comunica la filosofía culinaria del hotel, y materiales para la sala de eventos (dosier de grupos, propuestas de menú) que refuerzan el posicionamiento premium del hotel.

**6. Personalización de la experiencia con datos del huésped**
Define cómo usar los datos del histórico del huésped para personalizar cada estancia: tipo de habitación y planta preferida según el perfil del viajero, adaptación de los amenities según las alergias o preferencias declaradas en estancias anteriores, personalización del programa de experiencias recomendadas según los intereses del huésped, y mensaje de bienvenida personalizado del director del hotel para los huéspedes repetidores. Define cómo el equipo de recepción y housekeeping usa los datos del PMS para anticiparse a las necesidades de cada huésped sin ser intrusivos.

Proporciona un moodboard conceptual del diseño (describiendo colores, texturas, referencias visuales y ejemplos de hoteles de referencia) y un protocolo de formación del equipo para garantizar que la experiencia diseñada se entrega de forma consistente en cada estancia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de experiencia de huésped y posicionamiento para hotel boutique cultural',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas de grupos y MICE en el sector hotelero con IA',
                'description'       => 'Gestiona las ventas de grupos, congresos y eventos corporativos (MICE) en hoteles usando IA: prospección de clientes potenciales, diseño de propuestas personalizadas, negociación de tarifas de grupo y seguimiento del pipeline de ventas.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de ventas de grupos y eventos especializado en el sector hotelero, con experiencia en la captación y gestión de cuentas corporativas, agencias de eventos y organizadores de congresos para hoteles de 4 y 5 estrellas con espacios para eventos de hasta 500 personas.

instrucción: Ayúdame a diseñar un sistema de ventas de grupos y eventos MICE (Meetings, Incentives, Conferences and Exhibitions) para un hotel de 4 estrellas con capacidad para 200 personas en sala plenaria y 15 salas de reuniones modulares, que quiere aumentar sus ingresos por grupos en un 30% en los próximos 12 meses usando IA para acelerar la prospección y la elaboración de propuestas.

Desarrolla los siguientes componentes del sistema de ventas:

**1. Estrategia de prospección y captación de nuevas cuentas**
Define el proceso de identificación y captación de clientes potenciales: segmentación de los tipos de cliente con mayor potencial (empresas de la zona con actividad de formación y reuniones, asociaciones profesionales con congresos anuales, agencias de eventos especialistas en incentivos corporativos, consultoras de organización de eventos), uso de IA para identificar en LinkedIn y en directorios del sector empresas que han organizado eventos similares en la zona y que aún no tienen relación con el hotel, y diseño de las acciones de primer contacto (email de prospección, invitación a fam trip, participación en ferias del sector MICE).

**2. Diseño de propuestas comerciales personalizadas**
Define el proceso de elaboración de propuestas: estructura de la propuesta de grupos (sala, alojamiento, restauración, servicios audiovisuales, experiencias de teambuilding o networking), uso de IA para generar propuestas personalizadas en menos de 2 horas a partir de un briefing del cliente, herramientas de visualización de los espacios (planos en 2D y 3D, tour virtual de las salas) que reducen la necesidad de visitas presenciales, y estrategia de diferenciación de la propuesta frente a los hoteles competidores de la zona (qué elementos únicos puede ofrecer el hotel que no tiene la competencia).

**3. Negociación de tarifas de grupo y política de contratos**
Define el proceso de negociación y contratación: estructura de las tarifas de grupo (habitación, sala y coffee breaks, menús de grupo, servicios adicionales), política de descuentos por volumen de habitaciones o de comensales, condiciones de contrato estándar (política de cancelación, bloqueo de habitaciones, cupos mínimos garantizados), y uso de IA para simular el impacto en el revenue del hotel de aceptar cada propuesta de grupo según la temporada, la ocupación prevista y el mix de cliente del hotel en esas fechas.

**4. Coordinación operativa de eventos y gestión de la cuenta**
Define el proceso de entrega del evento: proceso de handover entre el equipo de ventas y el equipo de operaciones (banquetes, recepción, audiovisuales) con el dossier completo del evento, reunión de coordinación con el cliente una semana antes del evento para confirmar todos los detalles, rol del evento coordinator durante el desarrollo del evento (punto de contacto único para el cliente, coordinación de todos los servicios del hotel), y proceso de evaluación post-evento con el cliente para identificar puntos de mejora y iniciar el proceso de reserva del próximo evento.

**5. Gestión del pipeline de ventas con CRM**
Define el sistema de seguimiento de oportunidades: configuración del CRM (Salesforce, HubSpot o equivalente hotelero) para la gestión del pipeline de grupos, proceso de seguimiento de los presupuestos en espera con recordatorios automáticos y acciones de nurturing para cada fase del pipeline, análisis del ratio de conversión por tipo de cliente, tamaño de grupo y temporada para identificar en qué segmentos el hotel tiene mayor efectividad comercial, y previsión de ingresos por grupos para los próximos 12 meses con alertas sobre meses con bajo volumen de grupos confirmados.

**6. Medición del rendimiento de las ventas de grupos**
Define los indicadores de éxito: revenue por grupo (habitaciones + banquetes + servicios), ratio de conversión de presupuestos en contratos, tiempo medio de cierre de cada tipo de venta, coste de adquisición del cliente de grupos (incluyendo comisiones a agencias y gastos de prospección), y valor de vida del cliente de grupos (número de eventos repetidos, crecimiento del gasto entre eventos). Define las metas anuales y el proceso de revisión mensual del rendimiento comercial del equipo de ventas de grupos.

Proporciona una plantilla de propuesta comercial para un evento de 100 personas (50 habitaciones + 1 sala plenaria + 2 coffee breaks + cena de gala) y el script de la primera llamada de cualificación del cliente de grupos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de ventas MICE para hotel con salas de eventos',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management para apps de viajes y turismo con IA',
                'description'       => 'Diseña y gestiona productos digitales para el sector turístico usando IA: apps de reservas, plataformas de experiencias, guías de viaje inteligentes y herramientas de planificación de viajes que resuelven necesidades reales del viajero moderno.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager especializado en aplicaciones móviles y plataformas digitales para el sector turístico y de viajes, con experiencia en el diseño de productos para startups de travel tech y en la integración de inteligencia artificial para personalizar la experiencia del viajero.

instrucción: Ayúdame a diseñar y lanzar una aplicación móvil de planificación de viajes que usa IA para crear itinerarios personalizados basados en los intereses del viajero, su presupuesto y su estilo de viaje, y que integra la reserva de alojamiento, transporte y actividades en una experiencia unificada. El producto se dirige al viajero independiente de 25-45 años que planifica viajes por Europa.

Desarrolla los siguientes aspectos del producto:

**1. Definición del problema y validación de la oportunidad**
Define el proceso de validación del mercado: investigación de las principales frustraciones del viajero independiente al planificar un viaje (tiempo invertido en comparar opciones, dificultad de coordinación entre alojamiento, transporte y actividades, falta de personalización en las recomendaciones), análisis del ecosistema de competidores actuales (TripAdvisor, Google Travel, Roadtrippers, Sygic Travel) para identificar los gaps de producto no cubiertos, y diseño de las entrevistas de usuario para validar el problema con 20 viajeros representativos del público objetivo antes de desarrollar el primer prototipo.

**2. Arquitectura del producto y flujos clave del usuario**
Define los flujos principales de la aplicación: onboarding de un nuevo usuario (perfil de viajero, destinos visitados, estilo de viaje, presupuesto habitual), creación de un nuevo itinerario (selección de destino y fechas, generación del itinerario personalizado con IA, ajuste manual de las sugerencias), reserva integrada desde la app (búsqueda y reserva de alojamiento con Booking API, reserva de trenes y vuelos, compra de entradas para actividades y museos), y gestión del itinerario durante el viaje (notificaciones de cambios en el transporte, sugerencias de planes alternativos según el tiempo meteorológico).

**3. Motor de recomendaciones con IA**
Define el sistema de personalización: modelo de perfil del viajero basado en los intereses declarados (arte, gastronomía, naturaleza, arquitectura, vida nocturna), historial de viajes anteriores y valoraciones de lugares visitados, algoritmo de generación de itinerarios que tiene en cuenta las preferencias del usuario, el tiempo disponible en cada destino, la distancia entre puntos de interés y los horarios de apertura, y sistema de aprendizaje continuo que mejora las recomendaciones con cada viaje registrado en la app. Define las métricas de calidad del motor de recomendaciones (ratio de aceptación de sugerencias, satisfacción post-viaje).

**4. Estrategia de monetización**
Define el modelo de negocio: comisión por reserva de alojamiento y actividades integradas en la app (modelo de afiliación con Booking.com, GetYourGuide, Viator), modelo freemium con funcionalidades premium (itinerarios ilimitados, descarga offline de guías, acceso a experiencias exclusivas), alianzas con destinos turísticos y oficinas de turismo para featured content patrocinado, y análisis del LTV del usuario y del payback period de la inversión en adquisición. Define el precio del plan premium y el porcentaje de conversión necesario para alcanzar la rentabilidad.

**5. Roadmap del producto para los primeros 18 meses**
Define las fases de desarrollo: MVP (itinerario personalizado con IA para un destino + reserva de alojamiento integrada), versión 1.0 (añadir reserva de transporte y actividades + funcionalidad de viaje en grupo), versión 2.0 (guía de destino offline + integración con redes sociales para compartir el itinerario + modo de viaje con sugerencias en tiempo real). Para cada fase, define las funcionalidades incluidas, las métricas de éxito y los criterios para avanzar a la siguiente fase.

**6. Métricas del producto y sistema de aprendizaje continuo**
Define el framework de métricas: indicadores de activación (% de usuarios que completan el primer itinerario), retención (% de usuarios que crean un segundo itinerario en los 90 días siguientes), engagement (número de itinerarios creados por usuario y mes), monetización (revenue por usuario activo mensual) y satisfacción (NPS, valoración en los app stores). Define el proceso de análisis mensual del funnel de conversión y el protocolo de decision making para priorizar mejoras del producto basadas en datos.

Proporciona el user story map del MVP y las métricas de éxito del lanzamiento beta con 1.000 usuarios durante los primeros 60 días.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'App de planificación de viajes con IA e itinerarios personalizados',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del talento en el sector hotelero y turístico con IA',
                'description'       => 'Atrae, forma y retiene al personal hotelero usando IA: desde el reclutamiento de perfiles operativos hasta la formación en habilidades de servicio, la gestión del rendimiento por turno y las estrategias para reducir la alta rotación característica del sector.',
                'prompt_content'    => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en el sector hotelero y turístico, con experiencia en la gestión de equipos operativos (recepción, housekeeping, restaurante, mantenimiento) y de mandos intermedios en hoteles de 3 a 5 estrellas, y en el uso de herramientas de RRHH y de inteligencia artificial para reducir la rotación y mejorar el compromiso del equipo.

instrucción: Ayúdame a diseñar un sistema integral de gestión del talento para un hotel de 4 estrellas con 120 empleados que enfrenta una rotación anual del 45% en los departamentos operativos (recepción, housekeeping y restaurante), una dificultad creciente para captar perfiles de calidad en temporada alta y una brecha de habilidades en el equipo en lenguas extranjeras y uso de herramientas digitales.

Desarrolla los siguientes componentes del sistema:

**1. Estrategia de employer branding y captación de talento**
Define cómo posicionar el hotel como empleador atractivo: propuesta de valor al empleado diferenciada de la competencia (plan de carrera claro, horarios, beneficios no económicos, cultura de equipo), estrategia de presencia en plataformas de empleo del sector turístico (InfoJobs, TurijobS, Indeed), alianzas con escuelas de hostelería y ciclos formativos de turismo para captación de talento joven, y uso de IA para el cribado eficiente de CVs con foco en las competencias de servicio más predictivas del éxito en cada rol. Define el proceso de selección completo para cada categoría de puesto con los tiempos objetivo.

**2. Onboarding acelerado para personal de temporada**
Define el programa de incorporación para las contrataciones de temporada alta: proceso de documentación y alta administrativa en menos de 48 horas, semana 1 de formación intensiva en estándares de servicio del hotel, conocimiento del producto (habitaciones, servicios, destino) y herramientas digitales del puesto, sistema de buddy (compañero tutor) para el acompañamiento durante las primeras dos semanas, y evaluación al final del primer mes para identificar a los empleados con mayor potencial de repetir en la siguiente temporada o de pasar a contrato fijo. Incluye el módulo de formación en lenguas extranjeras de forma autónoma con IA.

**3. Sistema de formación continua en habilidades de servicio**
Diseña el programa de formación permanente del equipo: módulos de habilidades de servicio (comunicación con el huésped, manejo de quejas, técnicas de upselling en recepción y restaurante), formación en los estándares del hotel (check-in y check-out, protocolo de housekeeping, mise en place del restaurante), microlearning semanal de 5 minutos a través de una app de formación accesible desde el móvil del empleado, y sistema de certificación interna que reconoce el progreso del empleado y lo vincula con la progresión salarial.

**4. Gestión del rendimiento por turno y por departamento**
Define el sistema de evaluación del rendimiento operativo: KPIs por departamento (tiempo de check-in, puntuación de satisfacción del huésped por departamento, tasa de rooms cleaned per hour, tickets medios del restaurante por tipo de turno), proceso de feedback semanal del responsable de departamento con cada empleado usando datos objetivos del sistema, evaluación trimestral del desempeño con foco en el desarrollo de competencias y el plan de carrera, y sistema de reconocimiento del equipo del mes en cada departamento para impulsar la motivación.

**5. Estrategias para reducir la rotación del personal operativo**
Define las iniciativas de retención: análisis de las causas reales de la rotación en el hotel (encuesta de salida, análisis de patrones de abandono por departamento y por temporada), acciones de mejora de la experiencia del empleado en los primeros 90 días (período de mayor riesgo de abandono), programa de beneficios no económicos adaptados al perfil del equipo (flexibilidad de horario para estudiantes, descuentos en hoteles del grupo para empleados y familia, acceso a instalaciones del hotel), y programa de progresión profesional para los mejores empleados operativos hacia roles de supervisión o especialización.

**6. Planificación de turnos y gestión de la flexibilidad laboral**
Define el sistema de planificación de la fuerza laboral: algoritmo de previsión de la demanda de personal por departamento basado en la ocupación prevista, los grupos de eventos y la estacionalidad, herramienta de gestión de turnos que optimiza la cobertura de servicio minimizando el coste laboral, proceso de gestión de la flexibilidad (bolsa de horas extra, sistema de disponibilidad del personal para cubrir ausencias de última hora), y cumplimiento de la normativa laboral del sector hotelero (ERTE de temporada, contratos fijos discontinuos, límites de jornada).

Proporciona un calendario de acciones para los primeros 6 meses con el objetivo de reducir la rotación al 30% y mejora el NPS del empleado en 15 puntos, con las inversiones estimadas y el retorno esperado en reducción de costes de reclutamiento y formación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reducción de rotación y mejora del talento en hotel con alta estacionalidad',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Revenue management y optimización financiera hotelera con IA',
                'description'       => 'Maximiza el RevPAR y la rentabilidad de un hotel usando IA: modelos de previsión de demanda, optimización de la tarifa media, gestión de la mezcla de canales de distribución y análisis del coste de adquisición de cada reserva.',
                'prompt_content'    => <<<'EOT'
Actúa como un Revenue Manager especializado en hoteles independientes y pequeñas cadenas, con experiencia en el desarrollo de estrategias de optimización de ingresos usando datos históricos, análisis de la competencia y algoritmos de pricing dinámico, y en la presentación de resultados financieros a la propiedad y a la dirección del hotel.

instrucción: Ayúdame a diseñar un sistema completo de revenue management para un hotel de 4 estrellas con 100 habitaciones que actualmente tiene un RevPAR de 65€, una tarifa media (ADR) de 95€ y una ocupación del 68%, y que quiere mejorar su RevPAR en un 15% en los próximos 12 meses sin aumentar el número de habitaciones ni el personal.

Desarrolla los siguientes componentes del sistema:

**1. Análisis del posicionamiento actual y benchmark vs. compset**
Define el proceso de diagnóstico: construcción del compset (conjunto de hoteles competidores directos con los que comparar el rendimiento) con criterios de selección (categoría, ubicación, tipo de cliente, capacidad), obtención de datos de STR o benchmarking sectorial para comparar el ADR, la ocupación y el RevPAR del hotel vs. el compset, análisis de la distribución del revenue por segmento de mercado (ocio, corporativo, grupos, OTAs) y su margen neto, y diagnóstico de las principales oportunidades de mejora del revenue.

**2. Modelo de previsión de demanda con IA**
Define el sistema de forecasting: modelo predictivo de la demanda que integra la ocupación histórica del hotel, los eventos locales del destino (festivales, congresos, puentes festivos), los patrones de booking window (con cuánta antelación reservan los distintos segmentos), los indicadores adelantados de la demanda (búsquedas en Google, ritmo de reservas en las OTAs) y las condiciones macroeconómicas del mercado emisor principal. Define la frecuencia de actualización del forecast y el proceso de revisión semanal entre el revenue manager y la dirección del hotel.

**3. Estrategia de pricing dinámico por segmento y canal**
Define el sistema de tarifas: estructura de la tarifa rack y su relación con las tarifas de los diferentes canales (canal directo, OTAs, canal corporativo, tour operadores), estrategia de open pricing (tarifa diferenciada para cada canal y cada fecha según la demanda prevista) vs. BAR (Best Available Rate), gestión de las restricciones de estancia mínima para temporadas de alta demanda, y protocolo de revisión y ajuste diario de las tarifas publicadas en todos los canales. Define el calendario de precios para los próximos 12 meses con los eventos y festivos que justifican tarifas especiales.

**4. Optimización de la mezcla de canales de distribución**
Define la estrategia de distribución: análisis del coste neto de adquisición por canal (comisiones de OTAs, coste de las campañas de Google Hotel Ads, coste de los acuerdos con agencias de viajes), objetivo de mix de canales que maximiza el ingreso neto por habitación (NetRevPAR), estrategia de incremento del canal directo (paridad de precios, beneficios exclusivos del canal directo, inversión en SEM directo), y gestión de la cuota de disponibilidad asignada a cada canal según el contexto de demanda.

**5. Optimización del total revenue del hotel**
Define el sistema de TRevPAR management: estrategia de upselling de habitaciones superiores (oferta de upgrade en el pre-stay email y en el check-in) y su impacto en el ADR, optimización del revenue del restaurante durante los desayunos del buffet (precio, oferta, venta de desayunos a huéspedes de OTAs que han reservado solo habitación), estrategia de revenue en el spa y en los servicios adicionales del hotel, y análisis del impacto de la satisfacción del huésped (Review Score) en el precio que el mercado está dispuesto a pagar.

**6. Reporting financiero y cuadro de mando del revenue**
Define el sistema de reporting: dashboard diario de revenue con los indicadores clave (rooms sold, ADR, RevPAR, on-the-books vs. mismo período del año anterior), reporte semanal de ritmo de reservas por segmento y canal para las próximas 8 semanas, análisis mensual del resultado del revenue management (RevPAR realizado vs. presupuesto y vs. compset), y presentación trimestral a la propiedad del hotel con el análisis del P&L hotelero y las recomendaciones estratégicas para el siguiente trimestre.

Proporciona un modelo de Excel o Google Sheets para el seguimiento semanal del revenue con las fórmulas de cálculo de los principales KPIs hoteleros y un ejemplo de la presentación mensual de resultados para la propiedad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sistema de revenue management para hotel independiente con objetivo de RevPAR +15%',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Compliance regulatorio en turismo y hostelería con IA',
                'description'       => 'Navega el complejo marco regulatorio del sector turístico español usando IA: licencias turísticas, normativa de accesibilidad, protección de datos de huéspedes, regulación de viviendas de uso turístico y cumplimiento de la normativa de seguridad alimentaria en restauración.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especializado en derecho turístico y hostelero, con experiencia en el asesoramiento a hoteles, apartamentos turísticos, restaurantes y agencias de viajes sobre el cumplimiento de la normativa autonómica y estatal que regula el sector turístico en España, y en el uso de herramientas de legaltech para automatizar el seguimiento normativo.

instrucción: Ayúdame a diseñar un sistema de gestión del compliance regulatorio para un grupo hotelero independiente con tres hoteles en diferentes comunidades autónomas de España (Madrid, Cataluña y Andalucía), que quiere garantizar el cumplimiento de toda la normativa aplicable, minimizar el riesgo de sanciones y estar preparado para los cambios regulatorios del sector.

Desarrolla los siguientes componentes del sistema:

**1. Marco normativo del sector turístico en España**
Define las fuentes normativas que debe conocer el grupo hotelero: legislación estatal (Ley General de Turismo, normativa de accesibilidad universal, protección del consumidor turístico), legislación autonómica de ordenación turística de las tres comunidades donde opera el grupo (clasificación hotelera, requisitos mínimos por categoría, normativa de precios, libro de reclamaciones turísticas), normativa municipal (licencias de actividad, normativa de ruidos, restricciones de terrazas), y normativa sectorial específica (normativa de seguridad alimentaria APPCC, normativa de piscinas, normativa de incendios). Define las diferencias más relevantes entre las normativas autonómicas que afectan a la operación diaria del hotel.

**2. Licencias y permisos de actividad**
Define el proceso de gestión de licencias: inventario de todas las licencias y permisos vigentes en cada establecimiento (licencia de apertura y actividad, declaración responsable turística, inscripción en el Registro de Empresas Turísticas, autorización sanitaria), sistema de seguimiento de las fechas de renovación y de los cambios normativos que pueden requerir la actualización de las condiciones de la licencia, y proceso de gestión de las inspecciones turísticas y sanitarias (protocolo de recepción del inspector, documentación a tener preparada, gestión de los requerimientos de subsanación).

**3. Protección de datos de huéspedes y obligaciones de comunicación a las autoridades**
Define las obligaciones de privacidad y seguridad: obligaciones del hotel en materia de protección de datos de los huéspedes según el RGPD y la LOPDGDD (registro de tratamientos, base legal del tratamiento de datos, conservación del historial de huéspedes), obligación legal de comunicación de los datos de los huéspedes a las Fuerzas y Cuerpos de Seguridad (partes de viajeros) y los sistemas tecnológicos disponibles para cumplirla de forma eficiente, y gestión de las solicitudes de los huéspedes de acceso, rectificación y supresión de sus datos.

**4. Normativa de accesibilidad universal en establecimientos turísticos**
Define las obligaciones de accesibilidad: requisitos de accesibilidad física del establecimiento según el Real Decreto 1/2013 y la normativa autonómica aplicable (rampas, ascensores, habitaciones adaptadas, señalización braille), obligaciones de accesibilidad digital (web del hotel accesible según WCAG 2.1, motor de reservas accesible), y proceso de auditoría de accesibilidad para identificar las barreras existentes en cada establecimiento y el plan de adaptación priorizado por coste y por riesgo legal.

**5. Normativa de viviendas de uso turístico y la competencia desleal**
Define el marco legal de las VUT y su impacto en el sector hotelero: panorama actual de la regulación de las viviendas de uso turístico en las tres comunidades autónomas del grupo, mecanismos legales disponibles para la industria hotelera para denunciar la actividad turística ilegal o no declarada en su zona de influencia, y cómo el marco europeo (Reglamento de plataformas de alquiler a corto plazo de la UE) va a cambiar el ecosistema regulatorio en los próximos años.

**6. Sistema de monitorización y gestión continua del compliance**
Define el sistema de seguimiento normativo: servicio de alertas de novedades normativas del sector turístico en cada comunidad autónoma (publicaciones en el BOE y en los boletines autonómicos), calendario anual de obligaciones periódicas de compliance (renovaciones de licencias, declaraciones fiscales del sector, formaciones obligatorias del personal), y proceso de gestión de las reclamaciones de huéspedes en el libro oficial de reclamaciones turísticas con los plazos y la documentación requerida por cada comunidad autónoma.

Proporciona un checklist de compliance inicial para cada establecimiento del grupo y una comparativa de los requisitos más relevantes entre las normativas turísticas de Madrid, Cataluña y Andalucía.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de compliance turístico para grupo hotelero multi-autonómico',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al huésped y gestión de la reputación online con IA',
                'description'       => 'Diseña un servicio de atención al huésped que convierte cada interacción en una oportunidad de fidelización usando IA: gestión de quejas en tiempo real, respuesta a reseñas online, chatbot de asistencia al viajero y análisis de la satisfacción.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en guest experience y gestión de la reputación online para el sector hotelero, con experiencia en el diseño de sistemas de atención al huésped que maximizan la satisfacción, minimizan las quejas y transforman las reseñas online en una ventaja competitiva del hotel frente a su compset.

instrucción: Ayúdame a diseñar un sistema completo de atención al huésped y gestión de la reputación online para un hotel boutique de 4 estrellas que actualmente tiene una puntuación media de 8,1 en Booking.com y un TripAdvisor Ranking entre los 20 primeros de su destino, y que quiere alcanzar el 8,6 de media y entrar en el top 10 de su ciudad en los próximos 12 meses.

Desarrolla los siguientes componentes del sistema:

**1. Diseño del servicio de atención al huésped por canal y momento del viaje**
Define el sistema de contacto y asistencia al huésped: pre-estancia (email de bienvenida con información práctica del hotel y del destino, chatbot en la web del hotel que resuelve dudas sobre el transporte, el parking y los servicios del hotel), llegada (protocolo de check-in para detectar las expectativas y necesidades especiales del huésped, proceso de recogida de información sobre el motivo del viaje para personalizar la estancia), durante la estancia (canal de mensajería directa con el huésped para solicitar servicios o reportar incidencias, encuesta de mid-stay en estancias de más de 3 noches), y salida (protocolo de check-out para verificar la satisfacción antes de que el huésped abandone el hotel, solicitud de reseña y orientación sobre cómo dejarla).

**2. Gestión de quejas y resolución de incidencias en tiempo real**
Define el protocolo de gestión de quejas: sistema de registro de todas las incidencias durante la estancia con el departamento responsable y el tiempo de resolución comprometido, protocolo de respuesta inmediata del personal de recepción para las quejas de bajo impacto (cambio de habitación, reparación de una avería), proceso de escalada para las quejas de alto impacto (malos olores en la habitación, ruidos persistentes, error en la reserva) con intervención del director del hotel, y sistema de compensación estandarizado para cada tipo de incidencia que equilibra la satisfacción del huésped con el coste para el hotel.

**3. Sistema de solicitud y gestión de reseñas online**
Define el proceso de generación de reseñas: email de post-estancia enviado 24 horas después del check-out con un mensaje personalizado de agradecimiento y un enlace directo a la plataforma de reseñas donde el hotel necesita más volumen (TripAdvisor, Google o Booking según el momento), seguimiento por WhatsApp a los huéspedes que no han respondido al email (con el consentimiento previo obtenido durante el check-in), código QR en la tarjeta de agradecimiento de la habitación que lleva directamente a la plataforma de reseñas, y análisis del correlación entre las características de la estancia (tipo de habitación, duración, segmento de cliente) y la probabilidad de dejar una reseña y la puntuación media.

**4. Respuesta a reseñas con IA**
Define el proceso de gestión de las reseñas recibidas: monitorización centralizada de todas las reseñas en las principales plataformas (Booking.com, TripAdvisor, Google, Expedia) con un sistema de alertas para las reseñas negativas que requieren respuesta urgente, uso de IA para generar borradores de respuesta personalizados para cada reseña (positiva y negativa) que reflejan el tono de la marca del hotel y responden específicamente a los comentarios del huésped, proceso de revisión y publicación por el director del hotel o el responsable de calidad, y análisis mensual de los temas más frecuentes en las reseñas para identificar áreas de mejora operativa.

**5. Análisis de la satisfacción del huésped y feedback operativo**
Define el sistema de captura y análisis de la voz del cliente: encuesta de satisfacción post-estancia con IA para categorizar automáticamente las respuestas abiertas por departamento y tipo de comentario, análisis de tendencias en los temas más frecuentes en las reseñas y las encuestas (los 5 atributos más valorados y los 5 con mayor margen de mejora), proceso mensual de revisión del feedback con los responsables de cada departamento (recepción, housekeeping, restaurante) y definición de acciones de mejora, y seguimiento del impacto de las acciones de mejora en la puntuación de satisfacción.

**6. Estrategia de fidelización del huésped repetidor**
Define el programa de fidelización: identificación de los huéspedes con mayor potencial de repetición basada en el historial de estancias, el feedback positivo y el valor económico generado, programa de reconocimiento del huésped repetidor (upgrades de bienvenida, detalle personalizado en la habitación, acceso preferente al restaurante), comunicación personalizada entre estancias (email de cumpleaños, notificación de ofertas especiales en fechas relevantes) y sistema de seguimiento del valor de vida del huésped fiel vs. el nuevo huésped captado por OTAs.

Proporciona ejemplos de respuestas tipo a las reseñas más frecuentes en un hotel de 4 estrellas (queja por ruido, habitación pequeña, problema con el desayuno, elogio al personal) y el protocolo de check-in de 5 minutos que maximiza la satisfacción desde el primer momento de la estancia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de guest experience y reputación online para hotel boutique',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultoría freelance de turismo digital y revenue hotelero con IA',
                'description'       => 'Construye una práctica de consultoría independiente en turismo digital y revenue management hotelero: define tu especialización, el portfolio de servicios, la propuesta de valor y el modelo de negocio para posicionarte como el referente que los hoteles independientes necesitan.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocio para consultores freelance del sector turístico y hotelero, con experiencia en ayudar a profesionales del revenue management, el marketing hotelero y la distribución digital a construir una práctica de consultoría independiente rentable y diferenciada en el ecosistema de los hoteles independientes y las pequeñas cadenas.

instrucción: Ayúdame a construir una práctica de consultoría freelance especializada en turismo digital y revenue management para hoteles independientes en España. Tengo 8 años de experiencia trabajando en revenue management y distribución digital para una cadena hotelera de 15 hoteles, y quiero usar ese expertise para asesorar a los hoteles independientes que no pueden permitirse contratar un revenue manager a tiempo completo pero necesitan el mismo nivel de optimización que las cadenas.

Desarrolla los siguientes aspectos de mi negocio:

**1. Definición del nicho y la propuesta de valor**
Ayúdame a definir mi especialización específica dentro del ecosistema del consulting hotelero: ¿debería enfocarme en el revenue management as a service para hoteles de 3 y 4 estrellas sin RM propio, en la estrategia de distribución digital y reducción de dependencia de OTAs, en la implementación y optimización del channel manager y el PMS para hoteles que están digitalizando su gestión, o en el marketing digital especializado en captación de reservas directas? Para cada nicho, analiza el tamaño del mercado potencial en España, el ticket medio de un proyecto o retainer, y la competencia directa de otros consultores y agencias del sector.

**2. Portfolio de servicios y metodología diferencial**
Define los servicios que puedo ofrecer con un proceso de entrega diferenciado: auditoría inicial de revenue (análisis del RevPAR del hotel vs. compset, diagnóstico de la estrategia de precios y del mix de canales, recomendaciones priorizadas de mejora), servicio de revenue management mensual en modalidad de outsourcing (gestión diaria de las tarifas, forecast mensual, reporting para la propiedad), consultoría de distribución digital (auditoría del channel manager, estrategia de paridad, optimización del listing en OTAs y metabuscadores), y taller de formación para el equipo del hotel en revenue management y uso de las herramientas de distribución. Define el precio de referencia para cada servicio y el número de clientes simultáneos que puedo gestionar.

**3. Uso de IA para escalar la capacidad de análisis**
Define cómo usar IA para multiplicar mi capacidad de trabajo: automatización del análisis de benchmarking vs. compset usando datos de STR o de las propias OTAs, generación de informes de revenue mensual a partir de los datos exportados del PMS del hotel con narrativa e interpretación automática, alertas automáticas sobre cambios relevantes en los precios de la competencia o en el ritmo de reservas del hotel, y uso de IA para preparar las presentaciones mensuales de resultados para la dirección y la propiedad del hotel. Define el stack tecnológico que me permite gestionar hasta 10 hoteles en modalidad de outsourcing de RM con la calidad de un RM interno.

**4. Estrategia de captación de clientes hoteleros**
Define cómo llegar a los hoteles independientes que necesitan mis servicios: presencia en asociaciones hoteleras (CEHAT, Hotrec, asociaciones autonómicas) como ponente o colaborador, alianzas con proveedores tecnológicos del sector (Mews, Cloudbeds, SiteMinder) que me refieran como consultor a sus nuevos clientes hoteleros, publicación de contenido de revenue management en LinkedIn y en medios del sector hotelero (Hosteltur, Tecnohotel) que demuestre mi expertise, y modelo de prueba gratuita (auditoría inicial de revenue sin coste) que permite al hotel evaluar el valor de mi trabajo antes de contratar el servicio continuo.

**5. Modelo de negocio y estructura de honorarios**
Define el modelo financiero de mi consultoría: estructura de tarifas por tipo de servicio (auditoría por proyecto, retainer mensual de RM, formación por sesión), política de contratos y condiciones (duración mínima del retainer, indicadores de éxito vinculados a la renovación, cláusulas de confidencialidad y no competencia), modelo de comisión de éxito vinculado al incremento de RevPAR del hotel (cómo medirlo de forma objetiva y acordarlo con el cliente), y plan financiero para los primeros 18 meses con el número de clientes necesario para alcanzar la rentabilidad y los hitos de crecimiento.

**6. Posicionamiento como experto y construcción de la marca personal**
Define la estrategia de visibilidad como referente del sector: perfil de LinkedIn optimizado como consultor de revenue hotelero con casos de éxito cuantificados, artículos de opinión sobre las tendencias de distribución y revenue del sector publicados en medios especializados, participación como ponente en los congresos del sector (Fitur, HIP, World Travel Market) para ganar visibilidad ante la dirección hotelera, y creación de un newsletter semanal de revenue management hotelero que consolide una audiencia de directores y propietarios hoteleros.

Incluye una propuesta comercial tipo para el primer contacto con un hotel independiente de 60 habitaciones y el modelo de contrato de retainer de revenue management con los indicadores de éxito y las condiciones de renovación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Práctica de consultoría freelance de revenue management y turismo digital',
                'vote_score'        => 32,
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
