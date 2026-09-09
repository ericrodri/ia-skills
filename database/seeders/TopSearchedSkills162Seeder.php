<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills162Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing turístico digital: SEO, metabuscadores y contenido de destino',
                'description'       => 'Atrae viajeros con SEO local, Google Hotels, metabuscadores y estrategias de contenido que posicionan un destino o alojamiento frente a los grandes portales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing digital especializado en el sector turístico con experiencia trabajando con hoteles independientes, cadenas boutique, destinos turísticos y plataformas de experiencias. Conoces en profundidad los canales de distribución turística, el SEO para alojamientos, las estrategias de metabuscadores y cómo competir contra Booking.com y TripAdvisor sin depender totalmente de ellos.

Necesito tu ayuda para desarrollar una estrategia de marketing digital turístico.

**CONTEXTO DE MI NEGOCIO TURÍSTICO**
Tipo de negocio: [hotel independiente / cadena / alojamiento rural / apartamentos turísticos / agencia de experiencias / destino turístico / plataforma travel tech]
Ubicación: [ciudad, región o país]
Tipo de viajero objetivo: [ocio familiar / parejas / negocios / mochileros / lujo / grupos / senior]
Canales actuales de reserva: [distribución directa web / Booking.com / Airbnb / Expedia / TTOO / agencias]
Principal reto de marketing: [visibilidad / reducir dependencia de OTAs / aumentar reservas directas / ocupación en temporada baja / posicionamiento en un segmento concreto]
Presupuesto de marketing disponible: [estimado mensual o anual]

**LO QUE NECESITO**

1. **Estrategia para aumentar las reservas directas**
La comisión de las OTAs (Booking, Expedia) se lleva entre el 15% y el 25% de cada reserva. Dame una estrategia para aumentar el porcentaje de reservas directas: la propuesta de valor de reservar en la web oficial (mejor precio garantizado, upgrades, desayuno incluido), optimización del motor de reservas (precio, velocidad, confianza), estrategia de email marketing para huéspedes previos, y el programa de fidelización para incentivar la reserva directa en la próxima visita.

2. **SEO para alojamientos y turismo**
¿Cómo posiciono mi web en Google cuando compito contra Booking.com que tiene un dominio de autoridad infinitamente superior? Dame una estrategia de SEO realista: las palabras clave que sí puedo ganar (long tail, búsquedas de marca, términos de nicho), la optimización de la ficha de Google Business Profile (con fotos, preguntas y respuestas, gestión de reviews), el contenido editorial que posiciona para búsquedas de destino y actividades, y el SEO técnico específico para webs hoteleras con motor de reservas.

3. **Google Hotels y metabuscadores**
Google Hotels, Trivago y TripAdvisor Metasearch son el campo de batalla de la reserva directa vs. OTAs. Dame una estrategia para los metabuscadores: cómo configurar la conectividad de Google Hotel Ads con el motor de reservas, estrategia de pujas (CPC vs. comisión por conversión), presupuesto mínimo recomendado para ver resultados, y cómo medir el ROAS en metasearch.

4. **Estrategia de contenido para el viajero en la fase de inspiración**
El viajero decide el destino meses antes de reservar. Dame una estrategia de contenido para estar presente en la fase de inspiración: blog de destino con contenido SEO (qué ver en X días, los mejores restaurantes, guías de actividades), presencia en Instagram y Pinterest con fotografía de viaje, y colaboraciones con travel bloggers e influencers de viaje adaptadas a mi presupuesto.

5. **Gestión de la reputación online**
Las reviews en Google, TripAdvisor y Booking son el mayor activo o el mayor pasivo de un alojamiento. Dame una estrategia de gestión de la reputación: cómo solicitar reviews de forma sistemática a los huéspedes satisfechos, cómo responder a las reviews negativas (plantilla y criterios), cómo gestionar una crisis de reputación viral, y la correlación entre puntuación online y RevPAR.

6. **Email marketing y CRM para el viajero**
El email marketing sigue siendo el canal de mayor ROI en el sector hotelero. Dame una estrategia de email marketing: la secuencia de emails antes de la llegada (bienvenida, upselling, servicios del destino), los emails durante la estancia (satisfacción intermedia), el email post-estancia (review, programa de fidelización) y la campaña de captación de reservas directas futuras.

7. **Medición y atribución en marketing turístico**
El viaje de compra del viajero tiene múltiples touchpoints antes de la reserva. ¿Cómo mido el impacto real de cada canal? Dame el modelo de atribución adecuado para un hotel y los KPIs que debo reportar al propietario o al director general: coste de adquisición por canal, porcentaje de reservas directas sobre el total, revenue atribuido a cada canal de marketing.

Sé específico y práctico para el sector turístico. Menciona las herramientas concretas cuando sea relevante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Estrategia de marketing digital para hoteles y alojamientos turísticos que quieren aumentar reservas directas y reducir dependencia de OTAs.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Travel tech: sistemas de reserva y sincronización de inventario',
                'description'       => 'Sistemas de reserva, channel managers, gestión de disponibilidad y los retos técnicos de sincronizar inventario en tiempo real con decenas de plataformas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software especializado en travel tech con experiencia en el desarrollo de sistemas de reserva hotelera, channel managers, motores de disponibilidad en tiempo real, y la integración con los principales GDS (Amadeus, Sabre, Travelport) y OTAs (Booking.com, Expedia, Airbnb).

Ayúdame a diseñar o mejorar una solución tecnológica para el sector turístico.

**CONTEXTO DEL PROYECTO**
Tipo de solución: [motor de reservas / channel manager / PMS / plataforma de experiencias / metabuscador / marketplace de alojamiento / API de distribución]
Segmento de cliente: [hoteles independientes / cadenas / apartamentos turísticos / casas rurales / experiencias y actividades]
Estado del proyecto: [idea / prototipo / MVP en producción / crecimiento / escala]
Integraciones existentes o necesarias: [GDS, OTAs, proveedores de pago, sistemas de facturación, PMS existentes]
Volumen esperado o actual: [reservas por día, alojamientos conectados]
Stack tecnológico preferido o existente: [si tienes preferencias o restricciones]

**LO QUE NECESITO**

1. **Arquitectura del sistema de reservas**
Diseña la arquitectura técnica de un sistema de reservas en tiempo real: el motor de disponibilidad y tarifas (el componente más crítico y complejo), el proceso de reserva con prevención de overbooking, la gestión del estado de la reserva (confirmada, pendiente de pago, cancelada, no-show), la integración con sistemas de pago (Stripe, Adyen, Braintree) y la generación de confirmaciones y vouchers. Justifica las decisiones de arquitectura.

2. **El problema del inventario en tiempo real**
La mayor dificultad técnica en travel tech es mantener la disponibilidad sincronizada en tiempo real en decenas de canales simultáneamente. Explícame las estrategias para resolver este problema: el modelo de inventario centralizado (single source of truth), la propagación de cambios de disponibilidad (push vs. pull), el manejo de las race conditions en reservas simultáneas del mismo habitación, y las estrategias para reducir el overbooking a cero.

3. **Integración con channel managers y OTAs**
¿Cómo me integro con los principales channel managers (SiteMinder, Cloudbeds, Lodgify) y directamente con las OTAs? Explica los protocolos de comunicación: XML/API de Booking.com (Connectivity Partner), Expedia Connectivity, el estándar OTA (HTNG/OpenTravel Alliance), y las particularidades de cada canal. ¿Cuándo tiene sentido desarrollar la integración directa vs. usar un hub de conectividad como Cloudbeds o Availpro?

4. **Modelo de datos para travel tech**
Dame el esquema de datos de un sistema hotelero: la jerarquía de entidades (propiedad, tipo de habitación, plan tarifario, restricción, disponibilidad, reserva, huésped), cómo modelar los planes tarifarios con restricciones complejas (estancia mínima, cerrado a la llegada, cerrado a la salida, stop sale), y la estructura de la reserva con todos sus estados y metadatos.

5. **Gestión de pagos y fraude en turismo**
Los pagos en turismo tienen particularidades: el cobro puede ser en el momento de la reserva, al check-in o al check-out, y las tasas de fraude son más altas que en otros sectores. Dame las mejores prácticas: gestión del virtual credit card de las OTAs, implementación del cobro garantizado, prevención de fraude (reglas de detección, 3DS2), y la gestión de los chargebacks en disputas de cancelación.

6. **Escalabilidad: black friday turístico y picos de demanda**
Los sistemas de reserva sufren picos extremos: el día que Ryanair anuncia vuelos a destino, el inicio de la temporada de esquí o la apertura de ventas de un festival. Dame la arquitectura de un sistema de reservas que aguante picos de 100x el tráfico normal: estrategia de caché para disponibilidad, cola de reservas bajo presión, escalado automático y la estrategia de testing de carga.

7. **APIs y ecosistema de travel tech**
¿Qué APIs externas son esenciales para un sistema de travel tech? Cubre: APIs de contenido de alojamiento (EAN de Expedia, Booking.com Affiliate Partner), APIs de vuelos y transporte (Amadeus Flight Offers Search, Skyscanner), APIs de actividades (Viator, GetYourGuide), APIs meteorológicas para recomendaciones, y APIs de mapas para la visualización de alojamientos.

Sé muy técnico y específico. Menciona las complejidades reales del sector que no son evidentes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de sistemas de reserva hotelera, channel managers y arquitecturas de distribución en tiempo real para el sector travel tech.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX para apps de viajes: búsqueda, resultados y checkout que convierte',
                'description'       => 'Diseña la experiencia de búsqueda y reserva que convierte: patrones de las apps más usadas, diseño de resultados y el checkout que reduce el abandono.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de UX/UI senior especializado en aplicaciones de viajes y reservas con experiencia en proyectos para plataformas de reserva de alojamiento, apps de aerolíneas, plataformas de experiencias y agencias de viajes online. Conoces los patrones de diseño que usan Booking.com, Airbnb, Skyscanner y Google Flights y por qué funcionan.

Ayúdame a diseñar o mejorar la experiencia de usuario de mi aplicación de viajes.

**CONTEXTO DEL PROYECTO**
Tipo de app o plataforma: [reserva de alojamiento / vuelos / experiencias y actividades / planificador de viajes / agencia online / plataforma de nómadas digitales]
Usuarios objetivo: [viajeros de ocio / negocios / familias / mochileros / viajeros de lujo]
Dispositivos principales: [mobile-first / desktop / ambos]
Estado del diseño: [desde cero / rediseño de flujo existente / mejora de conversión]
Principal reto de UX: [describe el problema concreto: abandono en el checkout, resultados confusos, búsqueda que no convierte, etc.]
Métricas actuales si las tienes: [tasa de conversión, punto de abandono, etc.]

**LO QUE NECESITO**

1. **El flujo de búsqueda: el primer momento de la verdad**
El buscador es el punto de entrada crítico. Dame las mejores prácticas para el diseño del buscador en apps de viajes: la controversia del formulario de búsqueda (tabs vs. step-by-step vs. conversacional), las fechas flexibles y la búsqueda "el fin de semana más barato", el autocompletado de destinos que sugiere antes de que el usuario termine de escribir, y cómo reducir la fricción en la búsqueda inicial.

2. **Diseño de la página de resultados**
La página de resultados es donde el usuario decide si confía en la plataforma o se va. Dame las decisiones de diseño que maximizan la conversión: la densidad de información ideal por card de resultado, qué mostrar en el card y qué guardar para la página de detalle, los filtros y el ordenamiento que realmente usa el viajero, el uso de mapas como capa de resultados, y cómo comunicar la escasez ("quedan 2 habitaciones") sin resultar manipulador.

3. **La página de detalle del alojamiento o experiencia**
El usuario llega a la página de detalle con intención de compra pero la abandona si no encuentra lo que busca rápido. Dame la estructura ideal de la página de detalle: la galería de fotos (el contenido más importante), la jerarquía de la información de precio y disponibilidad, las reviews y cómo presentarlas, el mapa de ubicación, y el CTA de reserva que debe ser siempre visible (sticky).

4. **El checkout que no mata la conversión**
El checkout de viajes tiene el abandono más alto del e-commerce. Dame las técnicas de diseño para reducirlo: el número óptimo de pasos, qué pedir en cada paso (nunca pidas registro antes del pago), la selección de habitación y extras sin confusion, el resumen del precio siempre visible con todos los impuestos incluidos (la letra pequeña en travel mata la conversión), y el diseño del formulario de pago que genera confianza.

5. **Diseño mobile-first para la reserva en movimiento**
Más del 60% de las búsquedas de viaje se hacen en mobile pero la mayoría de las reservas siguen haciéndose en desktop. ¿Por qué? Dame el diagnóstico y la solución: los problemas de UX del checkout en móvil (formularios, teclado, pago), el diseño de la fecha picker táctil para selección de rangos, y cómo diseñar para el usuario que empieza en mobile y termina en desktop.

6. **Personalización y recomendaciones**
Los grandes jugadores del travel tech usan personalización extensiva. ¿Cómo diseño la personalización sin tener los datos de Booking.com? Dame los patrones de personalización accesibles para una plataforma más pequeña: recientes y favoritos, recomendaciones basadas en el destino buscado, y el onboarding de preferencias que mejora las recomendaciones desde el primer uso.

7. **Testing y optimización de la conversión (CRO)**
¿Cómo mejoro la tasa de conversión de forma sistemática? Dame un plan de CRO para una app de viajes: qué elementos priorizar en los tests A/B (el botón de CTA, el precio total vs. precio por noche, las fotos del header), cómo diseñar los tests con tráfico limitado, y las métricas que debo medir para cada sección del funnel.

Sé muy específico con los patrones de diseño y menciona los benchmarks de las principales plataformas cuando sea relevante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño UX/UI para aplicaciones y plataformas de reservas de viajes: búsqueda, resultados, detalle y checkout de alta conversión.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Revenue management hotelero: precios dinámicos y maximización del RevPAR',
                'description'       => 'Optimiza la tarifa y la ocupación: estrategia de precios dinámicos, distribución entre canales y decisiones que maximizan el RevPAR.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Revenue Manager hotelero con doce años de experiencia en hoteles independientes y cadenas de tamaño medio, especializado en estrategias de precios dinámicos, gestión de la distribución entre canales y la maximización del RevPAR (Revenue Per Available Room).

Ayúdame a mejorar la estrategia de revenue management de mi hotel o alojamiento.

**CONTEXTO DE MI PROPIEDAD**
Tipo de alojamiento: [hotel urbano / resort / hotel boutique / alojamiento rural / apartamentos turísticos]
Número de habitaciones o unidades: [cantidad]
Mercados principales de clientes: [ocio nacional / ocio internacional / negocios / mixto]
Temporalidad: [alta temporada, temporada baja, eventos locales relevantes]
Sistema actual de gestión (PMS y RMS): [nombre del software o "manual"]
Principal reto de revenue: [describe el problema concreto: ocupación baja / tarifa media baja / demasiada dependencia de OTAs / temporada baja sin demanda, etc.]

**LO QUE NECESITO**

1. **Análisis de la segmentación y el mix de canales**
Antes de fijar precios, debo entender de dónde viene mi negocio. Dame un framework para analizar mi segmentación actual: el peso de cada canal de reserva (OTAs, reserva directa, agencias, corporativo, grupos), el ADR (tarifa diaria media) y el margen neto de cada canal, y cómo debería ser el mix óptimo para maximizar el beneficio operativo (no solo el RevPAR).

2. **Estrategia de precios dinámicos paso a paso**
¿Cómo implemento una estrategia de precios dinámicos si no tengo un Revenue Management System (RMS) caro? Dame el método manual: cómo monitorizar la demanda (pace de reservas, pick-up diario, comparación con el año anterior), las señales que deben activar una subida o bajada de tarifa, y la frecuencia de revisión de precios según el tipo de propiedad.

3. **Gestión de la restricciones de venta**
El revenue management no es solo el precio: son también las restricciones. Dame una guía para gestionar: la estancia mínima (minimum length of stay) para proteger los días de alta demanda, el closed to arrival (CTA) y closed to departure (CTD), el overbooking calculado como herramienta de revenue, y cuándo aplicar cada restricción.

4. **Estrategia para la temporada baja**
La temporada baja es donde se gana o se pierde el año. ¿Qué estrategias funcionan para generar demanda incremental en temporada baja? Cubre: paquetes que agregan valor sin destruir el precio (spa, experiencias locales, traslados), acuerdos con corporativo para llenar entre semana, grupos de grupos de ocio, y las campañas de email a los huéspedes previos con ofertas de temporada baja.

5. **Competitive benchmarking y pricing de la competencia**
¿Cómo monitorizo los precios de la competencia y los uso para tomar decisiones? Dame un proceso de benchmarking competitivo: qué herramientas usar (RateGain, OTA Insight, el propio Booking.com como fuente gratuita), cómo definir el competitive set correcto, y cuándo tiene sentido estar por encima del precio de la competencia y cuándo no.

6. **Revenue de los centros de beneficio no habitación**
El RevPAR solo mide las habitaciones, pero el hotel tiene otros ingresos: restaurante, spa, eventos, parking, extras. Dame estrategias para aumentar el TRevPAR (Total Revenue Per Available Room): upselling de habitaciones en el pre-check-in, venta de early check-in / late check-out, paquetes que incluyen servicios del hotel, y cómo gestionar la capacidad del restaurante como una segunda sala de revenue.

7. **Reporting de revenue management**
¿Qué informes debe revisar un revenue manager cada día, cada semana y cada mes? Dame el dashboard de revenue management: las métricas diarias (pick-up del día, pace vs. forecast, cambios en la competencia), el informe semanal (ocupación y ADR vs. presupuesto y año anterior) y el informe mensual para la dirección (GOPPAR, market share, análisis de segmentos).

Sé muy específico y práctico. Incluye fórmulas y cálculos cuando sea relevante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Estrategia de revenue management hotelero: precios dinámicos, gestión del mix de canales y maximización del RevPAR en hoteles y alojamientos.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto en travel tech: dos lados del mercado y personalización',
                'description'       => 'Decisiones de producto en plataformas de viajes: los dos lados del mercado (viajero y alojamiento), la personalización y los modelos de negocio del sector.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager senior con experiencia en plataformas de travel tech de dos lados de mercado, donde el producto debe satisfacer simultáneamente al viajero que reserva y al alojamiento o proveedor que recibe la reserva. Conoces los retos únicos de los marketplaces de viajes y los modelos de negocio del sector.

Ayúdame con el siguiente reto de producto en travel tech.

**CONTEXTO DE MI PRODUCTO**
Tipo de plataforma: [marketplace de alojamiento / plataforma de experiencias / agencia de viajes online / metabuscador / herramienta de gestión para alojamientos]
Usuarios del lado de la demanda: [viajeros: perfil, motivaciones, Jobs to be Done]
Usuarios del lado de la oferta: [alojamientos, hoteles, guías, operadoras: perfil y necesidades]
Estado del producto: [idea / prototipo / MVP / crecimiento / escala]
Principal reto de producto: [describe el problema concreto]
Métricas actuales si las tienes: [GMV, take rate, NPS de cada lado, retención]

**LO QUE NECESITO**

1. **Gestión del marketplace de dos lados**
Los marketplaces de viajes tienen el clásico problema del huevo y la gallina: sin alojamientos no vienen viajeros, sin viajeros no se apuntan alojamientos. Dame las estrategias para resolver el cold start en travel tech: cómo conseguir el primer inventario de calidad, cómo atraer los primeros viajeros sin presupuesto de marketing, y cómo gestionar el equilibrio entre los dos lados del mercado a medida que creces.

2. **Roadmap de producto en un marketplace de viajes**
¿Cómo priorizo el roadmap cuando cada mejora para el viajero puede empeorar la experiencia del alojamiento (y viceversa)? Dame un framework de priorización que tenga en cuenta los dos lados: cómo medir el impacto en cada lado, cómo gestionar las peticiones contrapuestas, y los principios de producto que guían las decisiones cuando hay conflicto.

3. **Personalización en travel tech**
La personalización es el santo grial del travel tech: mostrar al viajero los alojamientos más relevantes para él en cada búsqueda. ¿Cómo diseño la personalización de forma progresiva? Cubre: la personalización sin login (comportamiento de sesión), la personalización con cuenta (historial de búsquedas, reservas previas, favoritos), y los modelos de recomendación más usados en el sector (collaborative filtering, content-based).

4. **Calidad del inventario y gestión de la confianza**
En un marketplace de viajes, la calidad del inventario es crítica para la confianza del viajero. ¿Cómo garantizo que todos los alojamientos publicados cumplen unos mínimos de calidad? Dame estrategias: el proceso de onboarding del alojamiento (verificación, fotografías, información mínima), el sistema de reviews que desincentiva las falsas, y cómo gestionar a los alojamientos que bajan la calidad o incumplen las condiciones.

5. **Modelo de negocio y take rate en travel tech**
¿Cómo monetizo un marketplace de viajes? Compara los modelos: comisión por reserva (el estándar, con el debate de quién paga, el viajero o el alojamiento), suscripción del alojamiento (modelo Airbnb for Work / plataformas B2B), publicidad y posicionamiento patrocinado, y los modelos mixtos. ¿Cuál es el take rate sostenible según el tipo de plataforma?

6. **Métricas de un marketplace de viajes**
¿Qué métricas mide el PM de una plataforma de travel tech? Dame los KPIs específicos del sector: GMV (Gross Merchandise Value), take rate, número de noches o transacciones, ticket medio por reserva, NPS del viajero vs. NPS del alojamiento, tasa de cancelación (y el impacto en el modelo de negocio), y las métricas de salud del inventario (alojamientos activos, conversion rate de ficha de alojamiento, review score medio del inventario).

7. **Trucos de los grandes players que puedo replicar**
¿Qué han hecho Booking.com, Airbnb y GetYourGuide en materia de producto que ha marcado la diferencia y que una plataforma más pequeña puede adaptar? Dame tres o cuatro lecciones de producto de los grandes players del travel tech con la explicación de por qué funcionaron y cómo adaptarlas a una plataforma más pequeña.

Sé específico para el contexto del travel tech. Menciona casos reales de plataformas del sector cuando sean relevantes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión de producto para marketplaces y plataformas de travel tech de dos lados: viajero y alojamiento.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de equipos en hostelería: retención y turno rotativo',
                'description'       => 'Alta rotación, trabajo por turnos, temporada alta y baja: los programas de retención y la cultura que hace que el personal de un hotel quiera quedarse.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de RRHH especializado en el sector de la hostelería y el turismo, con experiencia en la gestión de equipos en hoteles, restaurantes y resorts, donde la alta rotación de personal es el mayor problema operativo y el trabajo por turnos, los horarios partidos y la estacionalidad hacen que la gestión de personas sea radicalmente diferente a la de otros sectores.

Ayúdame con el siguiente reto de gestión de equipos en hostelería.

**CONTEXTO DE MI NEGOCIO**
Tipo de establecimiento: [hotel / restaurante / cadena hotelera / resort estacional / catering / colectividades]
Tamaño del equipo: [número de empleados y departamentos principales]
Perfil del personal: [recepcionistas, camareros, cocineros, personal de pisos, técnicos de mantenimiento]
Principal reto de RRHH: [alta rotación, dificultad para reclutar, clima laboral, gestión de la temporada baja, conciliación, etc.]
Estacionalidad del negocio: [abierto todo el año / de temporada / con picos muy marcados]
Zona geográfica: [ciudad / destino turístico de sol y playa / rural / montaña]

**LO QUE NECESITO**

1. **Estrategia para reducir la rotación en hostelería**
La rotación en hostelería supera el 70% anual en algunos países. ¿Cuáles son las causas reales de que el personal se vaya (más allá del salario) y qué acciones tienen mayor impacto en la retención? Dame un diagnóstico de las causas de rotación por perfil (recepción, sala, cocina, pisos) y las intervenciones que generan mayor impacto: los primeros 90 días, el papel del responsable directo, y los beneficios no salariales que más valora el trabajador de hostelería.

2. **Gestión del turno rotativo y los horarios partidos**
Los turnos rotativos y los horarios partidos son el factor número uno de insatisfacción en hostelería. ¿Cómo diseño los cuadrantes de turno de forma que sean equitativos y predecibles para el trabajador? Dame las reglas de diseño de cuadrantes, cómo usar el software de gestión de turnos (Deputy, Planday, HotelTime), y los modelos que equilibran las necesidades del negocio con las de conciliación del trabajador.

3. **Reclutamiento en hostelería: cómo encontrar personal bueno**
Los portales de empleo generalistas no funcionan bien para la hostelería. ¿Qué canales funcionan para reclutar camareros, cocineros y recepcionistas? Dame la estrategia de reclutamiento por perfil: escuelas de hostelería y FP, plataformas especializadas (Turijobs, Infojobs hostelería), el papel de las ETTs en hostelería, el programa de referidos para que el equipo traiga candidatos, y cómo hacer el proceso de selección rápido (el candidato hostelero acepta la primera oferta que le dan).

4. **Onboarding y formación en hostelería**
El empleado nuevo en hostelería aprende sobre la marcha, muchas veces sin una formación estructurada. Dame un programa de onboarding para perfiles de hostelería: los primeros días (formación en los estándares del establecimiento, presentación al equipo, conocimiento de la carta o de los servicios), el acompañamiento durante el primer mes, y los módulos de formación continua que mejoran la calidad del servicio y la retención.

5. **Gestión de la temporada baja y los contratos fijos-discontinuos**
Los establecimientos estacionales necesitan reducir la plantilla en invierno y recuperarla en verano, pero con la reforma laboral de 2022, el contrato fijo-discontinuo cambió mucho. Dame una guía para gestionar la estacionalidad: las obligaciones del contrato fijo-discontinuo (llamamiento, orden de llamamiento, salario en período de inactividad), cómo mantener el vínculo con los trabajadores durante la temporada baja para que vuelvan, y las alternativas (pluriempleo, formación subvencionada en invierno).

6. **Clima laboral en hostelería: el rol del jefe de sala y el chef**
En hostelería, el clima laboral depende mucho del jefe directo. Dame estrategias para: el desarrollo del jefe de sala y del chef como líderes de equipo (no solo como técnicos), la gestión del conflicto entre departamentos (cocina vs. sala es el eterno problema), y cómo construir una cultura de equipo positiva en un entorno de alta presión y trabajo al límite en servicio.

7. **Bienestar del trabajador de hostelería**
El personal de hostelería sufre altas tasas de estrés, problemas físicos (columna, pies) y, en algunos casos, adicciones relacionadas con el entorno de trabajo. ¿Qué programas de bienestar tienen sentido en este sector y están al alcance de un establecimiento mediano? Dame opciones concretas: servicio de fisioterapia, apoyo psicológico, gestión del estrés en el servicio y los protocolos para gestionar situaciones de crisis personal del trabajador.

Adapta las respuestas a la realidad del sector hotelero y de restauración español.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Reducción de la rotación, reclutamiento y gestión de turnos en equipos de hoteles y restaurantes.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas hoteleras: RevPAR, GOP y valoración de activos turísticos',
                'description'       => 'RevPAR, GOP, EBITDA hotelero y los indicadores que usan los inversores para valorar propiedades hoteleras y portafolios de activos turísticos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con especialización en el sector hotelero y la inversión en activos turísticos, con experiencia en la gestión financiera de hoteles independientes, cadenas regionales y portafolios de activos para fondos de inversión hoteleros.

Ayúdame a entender y mejorar la situación financiera de mi negocio hotelero o de mi inversión turística.

**CONTEXTO DE MI NEGOCIO O INVERSIÓN**
Tipo de activo: [hotel en propiedad / hotel en gestión (arrendamiento) / apartamentos turísticos / resort / portafolio de varios activos]
Número de habitaciones y categoría: [habitaciones y estrellas o categoría]
Mercado y estacionalidad: [ciudad o destino, apertura anual o estacional]
Estado actual: [operativo y buscando mejorar / en proceso de compra-venta / proyección para inversión nueva]
Principal reto financiero: [rentabilidad insuficiente / necesidad de valoración / financiación de una reforma / reestructuración]

**LO QUE NECESITO**

1. **Las métricas financieras del sector hotelero**
El lenguaje financiero hotelero tiene sus propios indicadores. Explícame los KPIs clave y cómo calcularlos: Occupancy Rate, ADR (Average Daily Rate), RevPAR, RevPAC (Revenue Per Available Customer), GOPPAR (Gross Operating Profit Per Available Room), TRevPAR (Total Revenue PAR), GOP (Gross Operating Profit), y el EBITDA ajustado hotelero (diferencias respecto al EBITDA contable estándar). Dame también los benchmarks por tipo de hotel.

2. **La cuenta de resultados hotelera (P&L hotelero)**
La estructura de la cuenta de resultados hotelera sigue el modelo USALI (Uniform System of Accounts for the Lodging Industry). Explícame la estructura: departamentos de ingresos (rooms, F&B, otros), los departamentos de servicio (administración, marketing, mantenimiento, energía), el undistributed operating expenses, el GOP, los gastos de gestión, el EBITDA, el EBIT y el resultado neto. ¿Cuáles son los ratios de costes normales por categoría de hotel?

3. **Valoración de activos hoteleros**
¿Cómo se valora un hotel? Explícame los tres métodos principales: el método de capitalización de rentas (aplicado al GOP o al EBITDA con un cap rate de mercado), el método de Discounted Cash Flow (proyección de diez años de ingresos y gastos operativos con valor terminal), y el método comparativo de transacciones (precio por habitación en transacciones recientes comparables). ¿Cuáles son los cap rates actuales en España según la tipología y ubicación?

4. **Modelos de negocio hotelero: propiedad, arrendamiento y gestión**
Hay tres grandes modelos de relación entre el propietario del inmueble y el operador hotelero. Explícame las diferencias: hotel en propiedad directa (el propietario opera), hotel en arrendamiento (el operador paga una renta fija o variable al propietario), y hotel en contrato de gestión (el operador gestiona a cambio de una management fee). Analiza el riesgo y la rentabilidad esperada para el propietario y para el operador en cada modelo.

5. **CAPEX de reforma y renovación: el ciclo de la inversión hotelera**
Los hoteles necesitan inversión periódica para mantener la calidad y el RevPAR. ¿Cómo planifico y financio el CAPEX de renovación? Dame el ciclo de inversión típico de un hotel, cómo se financia la reforma (deuda vs. fondos propios vs. arrendamiento financiero), y cómo evaluar si la inversión en renovación se va a recuperar con el incremento de tarifa que permite.

6. **Financiación hotelera: deuda, equity y fondos europeos**
¿Cómo financia un proyecto hotelero nuevo o la compra de un hotel existente? Cubre: el préstamo hipotecario hotelero (LTV típico, plazo, covenants habituales), los fondos de inversión hoteleros y sus criterios de inversión, el sale & leaseback como forma de monetizar el activo manteniendo la operación, y los fondos europeos (Next Generation EU, fondos FEDER) aplicables a la modernización de alojamientos turísticos.

7. **Due diligence financiera en la compra de un hotel**
¿Qué debo revisar en la due diligence financiera antes de comprar un hotel? Dame el checklist: análisis de los tres últimos años de P&L, verificación de los ingresos con los datos del PMS, análisis del mix de canales y las obligaciones de comisión, los contratos de personal y las contingencias laborales, el CAPEX pendiente, y las licencias y obligaciones regulatorias.

Usa los estándares internacionales del sector hotelero (USALI, HAMA) en las respuestas y sé específico con los números.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Análisis financiero hotelero: cuenta de resultados USALI, valoración de activos turísticos y modelos de negocio hotelero para propietarios e inversores.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal del sector turístico: licencias, registro de viajeros y Airbnb',
                'description'       => 'Obligaciones del alojamiento turístico: licencias, registro de viajeros, responsabilidad y conflictos con plataformas en mercados regulados.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho turístico con experiencia en la regulación de los alojamientos turísticos en España, los conflictos con las plataformas de alquiler vacacional (Airbnb, Booking.com, Vrbo) y las obligaciones legales de los operadores del sector turístico.

Ayúdame con la siguiente consulta o situación legal en el sector turístico.

**CONTEXTO DE MI CONSULTA**
Tipo de negocio turístico: [hotel / apartamento turístico / vivienda de uso turístico (VUT) / alojamiento rural / agencia de viajes / empresa de actividades / restaurante, etc.]
Comunidad Autónoma donde opero: [es muy relevante porque la regulación es autonómica]
Situación o consulta concreta: [solicitud de licencia / problema con plataforma / reclamación de cliente / obligaciones de registro / cambio normativo, etc.]
¿Opero en plataformas como Airbnb, Booking o Vrbo? [sí/no, y en cuáles]

**LO QUE NECESITO**

1. **Licencias para alojamiento turístico en España**
La regulación del alojamiento turístico es competencia autonómica y hay diferencias enormes entre Comunidades. Dame el mapa general: qué tipos de licencias existen (declaración responsable, comunicación previa, licencia de actividad), qué requisitos son comunes en casi todas las CCAA (habitabilidad, accesibilidad, extinción de incendios, piscina si aplica), y las CCAA con regulación más restrictiva para las viviendas de uso turístico (Cataluña, Baleares, Madrid, Andalucía). Luego profundiza en la regulación de [mi CCAA].

2. **Registro de viajeros: obligaciones del alojamiento**
Los alojamientos turísticos están obligados a comunicar los datos de los viajeros. Explícame el sistema actual en España: la obligación de recabar el formulario de registro de cada huésped mayor de 16 años, la comunicación a las Fuerzas y Cuerpos de Seguridad del Estado (Guardia Civil o Policía Nacional según la zona), el sistema SES.HOSPEDAJES (el nuevo sistema digital implantado desde 2024), y las sanciones por incumplimiento. ¿Qué datos exactamente debo recabar?

3. **Regulación de las viviendas de uso turístico (VUT) y los conflictos con comunidades de propietarios**
Las VUT están en el centro del debate político en las grandes ciudades. Dame el estado actual de la regulación: las restricciones por zonas en Madrid, Barcelona y otras ciudades, el requisito de autorización de la comunidad de propietarios (la reforma de la LPH de 2019 que lo permite), y cómo gestionar el conflicto con la comunidad cuando esta quiere prohibir el alquiler turístico.

4. **Responsabilidad del alojamiento turístico frente al huésped**
¿Qué responsabilidad tiene el alojamiento cuando algo sale mal? Cubre: la responsabilidad por los daños en las instalaciones (piscina, ascensor, instalaciones deportivas), la responsabilidad por robos en la habitación, el overbooking y las obligaciones de reubicación, y la responsabilidad por intoxicaciones alimentarias en el restaurante del hotel.

5. **Plataformas digitales y obligaciones fiscales del anfitrión**
Airbnb, Booking y Vrbo están obligadas a informar a Hacienda de los ingresos de sus anfitriones. ¿Qué obligaciones fiscales tengo como propietario que alquila a través de estas plataformas? Explícame: la tributación en IRPF de los ingresos por alquiler turístico (rendimiento de actividad económica vs. rendimiento del capital inmobiliario), el IVA en el alquiler vacacional (cuándo aplica), la tasa turística en las CCAA y ciudades que la han implantado, y las declaraciones informativas.

6. **Cancelaciones, reembolsos y política de cancelación**
La pandemia dejó claro que la política de cancelación del alojamiento puede ser una fuente de conflictos. Dame el marco legal: ¿puede el alojamiento quedarse con el importe en caso de cancelación del cliente? ¿Qué dice la ley de viajeros (Real Decreto Legislativo 1/2007) sobre los contratos de alojamiento? ¿Cómo de vinculantes son las condiciones de cancelación publicadas en Booking o en la web del hotel?

7. **La Directiva europea de paquetes turísticos (PTD)**
Si ofrezco paquetes que combinan vuelo + hotel u otras combinaciones, entro en el ámbito de la Directiva de Paquetes Turísticos. ¿Cuándo se considera que una combinación es un paquete a efectos de la directiva, qué obligaciones tiene el organizador (garantía de insolvencia, información precontractual, derechos de desistimiento) y cómo se aplica en España (Real Decreto 672/2023)?

Cita la normativa específica (ley, artículo) cuando sea relevante y señala claramente cuando algo puede variar según la Comunidad Autónoma.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Marco legal del alojamiento turístico en España: licencias, registro de viajeros, VUT, responsabilidad y obligaciones fiscales del anfitrión.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Guest experience: convierte la estancia en una reseña de 5 estrellas',
                'description'       => 'El soporte al viajero que convierte una estancia en una reseña de 5 estrellas: protocolos, momentos de la verdad y gestión de quejas en TripAdvisor.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Experiencia del Huésped (Guest Experience) con experiencia en hoteles de cuatro y cinco estrellas, donde la diferencia entre una puntuación de 8,2 y un 9,1 en Booking.com representa miles de euros adicionales al año en RevPAR y en el acceso a categorías premium de visibilidad en los portales.

Ayúdame a diseñar o mejorar la experiencia del huésped de mi establecimiento.

**CONTEXTO DE MI ESTABLECIMIENTO**
Tipo de establecimiento: [hotel urbano / resort / hotel boutique / alojamiento rural / apartamentos turísticos]
Perfil del cliente habitual: [familias / parejas / viajeros de negocios / turistas internacionales / grupos]
Puntuación actual en plataformas: [nota en Booking, TripAdvisor, Google]
Principal área de mejora según las reviews: [describe las quejas más frecuentes]
Tamaño del equipo de guest experience o recepción: [número de personas]
Estacionalidad: [abierto todo el año / estacional]

**LO QUE NECESITO**

1. **Los momentos de la verdad del viajero**
La experiencia del huésped no es uniforme: hay cinco o seis momentos que determinan la puntuación final. Identifica los momentos de la verdad para mi tipo de establecimiento: la reserva y la comunicación pre-llegada, el check-in (los primeros diez minutos son críticos), el primer contacto con la habitación, el desayuno si lo hay, la atención durante la estancia cuando surge un problema, y el check-out y el seguimiento post-estancia. Para cada momento, dame el estándar de servicio y los errores más comunes.

2. **El check-in que crea una primera impresión excelente**
El check-in es el momento de mayor impacto en la experiencia global. Dame un protocolo de check-in que construya una experiencia memorable: el saludo y el reconocimiento del huésped (para los que repiten), la presentación de las instalaciones de forma relevante para ese huésped concreto, el upselling de habitación de forma que el cliente lo perciba como un beneficio y no como una venta, y la personalización del check-in para los momentos especiales (luna de miel, cumpleaños, aniversario).

3. **Gestión de quejas en el establecimiento: el servicio de recuperación**
El 95% de los clientes insatisfechos no se quejan: simplemente se van y dejan una reseña de 3 estrellas. Dame un protocolo de gestión de quejas in-situ: cómo entrenar al equipo para detectar la insatisfacción antes de que se convierta en queja, los pasos del Service Recovery (escuchar, disculparse, actuar, compensar, hacer seguimiento), y los niveles de compensación que el equipo puede ofrecer de forma autónoma sin escalar a dirección.

4. **Gestión de reviews en TripAdvisor, Booking y Google**
Las reviews online son la reputación del establecimiento. Dame una estrategia completa: cómo solicitar la review de forma sistemática en el momento justo (el check-out presencial y el email de seguimiento), la plantilla para responder a las reviews positivas (que también construye marca), el protocolo para responder a las reviews negativas (tono, estructura, lo que nunca debes decir), y cómo gestionar una review claramente injusta o falsa.

5. **Personalización de la estancia sin tecnología cara**
La personalización no requiere un CRM de un millón de euros. ¿Qué personalización puedo ofrecer con mis recursos actuales? Dame ideas concretas: el uso del nombre del huésped en todas las interacciones, los detalles de bienvenida para ocasiones especiales (sin coste o coste mínimo), las preferencias que puedo guardar de una visita a la siguiente, y cómo usar la información que el cliente ha dado en la reserva para anticipar sus necesidades.

6. **Guest experience digital: WhatsApp, app y chatbot hotelero**
Los viajeros quieren comunicarse con el hotel por WhatsApp. ¿Cómo implemento la atención al huésped a través de mensajería sin saturar al equipo de recepción? Dame estrategias: el uso de WhatsApp Business API para el hotel, la comunicación pre-llegada (confirmación, información de llegada, servicios adicionales), los mensajes durante la estancia (check de satisfacción, solicitudes de servicio), y cuándo tiene sentido un chatbot y cuándo no.

7. **Métricas de guest experience**
¿Qué indicadores debo medir para gestionar la experiencia del huésped de forma sistemática? Dame los KPIs: Review Score por plataforma y su evolución mensual, Net Promoter Score (NPS) propio, tasa de respuesta a las solicitudes de review, tiempo de respuesta a las quejas, porcentaje de quejas resueltas sin escalar y la correlación entre la puntuación de guest experience y el RevPAR.

Sé muy específico con los protocolos y los estándares. Los ejemplos concretos de qué decir y qué no decir son más útiles que los principios abstractos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño de la experiencia del huésped en hoteles y alojamientos turísticos: momentos de la verdad, gestión de quejas y estrategia de reviews.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultor de turismo digital freelance: hoteles y destinos como clientes',
                'description'       => 'El consultor independiente que ayuda a hoteles y destinos a mejorar su presencia digital: los servicios más demandados y el acceso a los clientes del sector.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un mentor de negocio con experiencia ayudando a profesionales del turismo y el marketing digital a construir una práctica consultora independiente en el sector turístico, con clientes que son hoteles independientes, cadenas boutique, empresas de turismo rural y destinos turísticos.

Quiero construir o hacer crecer mi negocio como consultor de turismo digital independiente. Dime lo que necesitas saber sobre mi situación.

**MI SITUACIÓN ACTUAL**
Experiencia y especialidad: [marketing digital / revenue management / SEO / redes sociales / fotografía de viajes / diseño web / guest experience, etc.]
Experiencia en el sector turístico: [años trabajando en hostelería, agencia de viajes, destino turístico, etc.]
Situación actual: [empleado pensando en el salto / ya freelance pero sin suficientes clientes / consolidado que quiere crecer]
Clientes o proyectos actuales: [si ya tienes alguno]
Red de contactos en el sector: [hoteles, asociaciones hoteleras, patronales de turismo, etc.]
Tarifa objetivo o actual: [euros por día o por proyecto]
Principal freno o duda: [¿qué te impide avanzar?]

**LO QUE NECESITO**

1. **Definición del nicho y posicionamiento como consultor de turismo digital**
El turismo digital es un término demasiado amplio. Dame ayuda para encontrar mi nicho específico: la especialidad técnica que domino + el tipo de cliente que mejor conozco + el resultado concreto que les ayudo a conseguir. Luego ayúdame a construir una propuesta de valor que el director de un hotel o el técnico de un destino turístico entienda en treinta segundos.

2. **Los servicios más demandados por los hoteles independientes**
¿Qué proyectos contratan los hoteles independientes a consultores externos de turismo digital? Dame un catálogo con los servicios más demandados y el rango de precio y duración típico: auditoría de presencia digital y reputación online, estrategia para aumentar reservas directas, gestión de metabuscadores (Google Hotel Ads), consultoría de revenue management, auditoría y mejora del posicionamiento en OTAs, formación al equipo de recepción en ventas digitales.

3. **Acceso al cliente hotelero: cómo llegar al director del hotel**
El director de hotel no busca consultores en Google. ¿Cómo le encuentro? Dame una estrategia de desarrollo de negocio adaptada al sector: las asociaciones hoteleras y patronales que agrupan a los hoteles independientes (Paradores, CEHAT, HOTREC, asociaciones regionales), las ferias del sector (FITUR, World Travel Market, ITB Berlin) donde los hoteleros buscan proveedores, y cómo usar LinkedIn para estar presente en las conversaciones del sector.

4. **El primer proyecto: cómo conseguir la primera referencia hotelera**
La primera referencia en el sector hotelero es la más difícil. Dame estrategias para conseguirla: el proyecto piloto a precio reducido o con parte de los honorarios condicionada a resultados, la colaboración con una agencia de marketing que ya tiene clientes hoteleros, el proyecto para el hotel del conocido que abre o que tiene problemas de visibilidad, y cómo convertir ese primer proyecto en un caso de éxito que atraiga al siguiente cliente.

5. **Estructura de precios para consultoría de turismo digital**
¿Cómo cobro mis servicios como consultor de turismo digital? Dame un marco de precios realista para el mercado español: tarifa día para consultoría estratégica, precio de proyecto para auditorías y planes de acción, retainer mensual para el hotel que quiere apoyo continuo. ¿Cuándo tiene sentido cobrar por resultados (success fee sobre el incremento de reservas directas)?

6. **Posicionamiento de autoridad en el sector turístico**
El hotelero contrata al consultor que demuestra que conoce su sector. ¿Cómo construyo autoridad como experto en turismo digital sin haber dirigido un Marriott? Dame estrategias: las publicaciones en medios del sector (Hosteltur, Tourinews, TravelDailyNews), las ponencias en eventos de turismo, el newsletter o podcast de nicho sobre turismo digital, y la producción de contenido en LinkedIn orientado a directores hoteleros.

7. **Gestión del negocio freelance en turismo: la estacionalidad también te afecta**
El turismo tiene estacionalidad y eso afecta también a la demanda de consultoría: los hoteles de playa no contratan proyectos en julio y agosto (están llenos), y los de montaña no tienen tiempo en diciembre y enero. ¿Cómo gestiono la estacionalidad de mi cartera de clientes? Dame estrategias para diversificar: distintos tipos de cliente (urbano + estacional), distintos tipos de proyecto (estratégicos en temporada baja, operativos en temporada alta) y el uso de la temporada baja del sector para generar contenido y prospectar.

Sé realista sobre los plazos de construcción de una cartera en el sector turístico y las particularidades de vender consultoría a hoteleros.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de una práctica consultora independiente de turismo digital con clientes hoteles y destinos turísticos.',
                'vote_score'        => 37,
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
