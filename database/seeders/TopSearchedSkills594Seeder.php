<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills594Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de espacios de oficinas y activos comerciales con IA',
                'description'      => 'Usa IA para crear estrategias de marketing inmobiliario comercial que atraigan a empresas arrendatarias, inversores y compradores de oficinas, locales y superficies comerciales.',
                'prompt_content'   => <<<'EOT'
Eres un director de marketing especializado en inmobiliario comercial y corporate real estate. Tu experiencia abarca la comercialización de edificios de oficinas, parques empresariales, locales comerciales y superficies logísticas para propietarios, fondos de inversión e inversores privados.

Contexto del activo a comercializar:
- Tipo de activo: [edificio de oficinas, local comercial, centro comercial, parque logístico, coworking, edificio mixto]
- Ubicación: [ciudad, distrito, zona, accesibilidad y transportes]
- Superficie total y distribución: [m², plantas, usos]
- Ocupación actual: [vacío, parcialmente ocupado, reforma reciente]
- Target de arrendatario o comprador: [empresa tecnológica, oficina corporativa, retail, operador logístico, inversor institucional]
- Diferencial del activo: [certificaciones sostenibles LEED/BREEAM, flexibilidad de planta, tecnología del edificio, servicios]

Desarrolla una estrategia de marketing inmobiliario completa:

1. POSICIONAMIENTO Y PROPUESTA DE VALOR DEL ACTIVO
Define el mensaje central del activo y sus diferenciadores:
- Nombre comercial del proyecto (si aplica) y su narrativa de marca
- Top 5 argumentos de valor para arrendatarios o compradores objetivo
- Posicionamiento vs. competencia directa en la zona (comparativa de calidades, precios, servicios)
- Cómo comunicar la sostenibilidad y las certificaciones como ventaja económica real (ahorro energético, productividad de empleados, ESG compliance para empresas cotizadas)

2. PLAN DE COMERCIALIZACIÓN MULTICANAL
Define la estrategia de presencia en los canales del mercado:
- Portales especializados: Idealista Empresas, CBRE Listings, JLL Find a Space, CoStar, LoopNet
- Colaboración con agencias inmobiliarias comerciales: condiciones de co-comercialización, exclusividades, comisiones
- Marketing directo: base de datos de empresas en expansión, responsables de real estate corporativo, directores de operaciones
- LinkedIn y comunicación B2B: cómo llegar a directores de expansión, CFOs y responsables de facilities
- Events and networking: foros inmobiliarios (SIMAPRO, SIMA, MIPIM) y asociaciones empresariales sectoriales

3. MATERIALES DE COMERCIALIZACIÓN
Especifica el contenido y estructura de cada pieza:
- Dossier del activo (PDF interactivo de 12-16 páginas): portada, ubicación, especificaciones técnicas, planos, fotos, contacto
- Vídeo de presentación del activo: estructura narrativa de 2-3 minutos (apertura, exterior, interior, entorno, CTA)
- Visita virtual 360º: qué espacios incluir, cómo integrarla en la web y en comunicaciones
- One-pager ejecutivo para envío por email: qué datos son imprescindibles en una sola página
- Renders y visualizaciones 3D: qué mostrar para activos en reforma o vacios (ambientación de espacios)

4. ESTRATEGIA DE CONTENIDO PARA INVERSORES INSTITUCIONALES
Si el objetivo incluye atraer inversores o compradores de activos:
- Informe de inversión: estructura con resumen ejecutivo, análisis de mercado, descripción del activo, financieros (NOI, yield, WAULT, ITZA)
- Deck de presentación para fondos: qué métricas de retorno presentar (TIR, TRM, cap rate, reversión)
- Data room para due diligence: listado de documentos que preparar y cómo organizarlos

5. ESTRATEGIA DIGITAL Y SEO LOCAL
Optimización de la presencia online:
- Landing page dedicada al activo: estructura, contenido SEO, formulario de contacto y CTA
- Palabras clave para posicionamiento local: "oficinas en alquiler [ciudad]", "espacio coworking [zona]", etc.
- Campañas de Google Ads geográficas para captación de empresas en búsqueda activa
- Retargeting de visitantes de la web del activo

6. MÉTRICAS Y GESTIÓN DEL PIPELINE DE LEADS
Define el sistema de seguimiento de la comercialización:
- CRM para gestión de contactos interesados: campos clave, etapas del pipeline de arrendamiento
- KPIs semanales: visitas presenciales realizadas, leads cualificados, propuestas enviadas, tiempo medio hasta firma
- Reporting mensual al propietario: ocupación, actividad de comercialización, feedback del mercado

Entrega la estrategia en formato de plan de marketing listo para presentar al propietario del activo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de comercialización de oficinas y activos comerciales para propietarios e inversores',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollar plataformas PropTech para la gestión de activos inmobiliarios',
                'description'      => 'Usa IA para especificar, diseñar y construir software PropTech para la gestión de activos inmobiliarios comerciales: arrendamientos, ocupación, mantenimiento y reporting financiero.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en PropTech y plataformas digitales para la industria del real estate comercial. Tu experiencia abarca desde sistemas de gestión de arrendamientos hasta plataformas de building management integradas con IoT.

Contexto del proyecto:
- Tipo de plataforma: [gestión de arrendamientos, building management system, plataforma de inversión inmobiliaria, marketplace de espacios, herramienta de valoración, etc.]
- Usuario principal: [property manager, inversor institucional, arrendatario corporativo, facility manager, broker inmobiliario]
- Escala: [edificio individual, portfolio de activos, plataforma multi-propietario]
- Integraciones requeridas: [ERP financiero, sistemas de control de acceso, IoT/BMS, portales inmobiliarios, firma digital]
- Stack tecnológico preferido: [indica tus preferencias o restricciones]

Desarrolla la especificación técnica completa:

1. ARQUITECTURA DE LA PLATAFORMA PROPTECH
Define la arquitectura de software para real estate comercial:
- Módulos principales: gestión de activos, contratos de arrendamiento, facturación y rentas, mantenimiento y CAFM, reporting financiero, portal del arrendatario
- Modelo de datos: entidades clave (activo, planta, unidad arrendable, contrato, arrendatario, factura, incidencia de mantenimiento)
- Arquitectura multi-tenant si aplica: segregación de datos por propietario, roles y permisos
- APIs externas a integrar: Catastro, registros públicos, portales de valoración (CBRE, JLL APIs), banca para domiciliación de rentas

2. MÓDULO DE GESTIÓN DE ARRENDAMIENTOS
Especifica las funcionalidades del core del sistema:
- Contrato de arrendamiento digital: estructura de datos (renta base, indexación IPC, revisiones, carencias, garantías, opciones de renovación)
- Automatización de facturación: generación de recibos de renta, repercusión de gastos comunes, actualización automática por indexación
- Alertas y vencimientos: notificaciones automáticas de vencimiento de contrato, revisiones de renta, revisiones de garantías
- Gestión de carencias y franquicias: modelización de períodos de renta reducida en la incorporación de nuevos arrendatarios
- Dashboards de ocupación: tasa de ocupación por activo y portfolio, WAULT (Weighted Average Unexpired Lease Term), cliff charts de vencimientos

3. INTEGRACIÓN CON SISTEMAS DE BUILDING MANAGEMENT
Conectividad con la tecnología del edificio:
- Integración con BMS (Building Management System): lectura de consumos energéticos, temperatura, ocupación real por planta
- IoT para smart building: sensores de ocupación, calidad del aire, consumo por unidad arrendable
- Control de acceso: gestión de tarjetas y accesos por arrendatario, registro de personas en el edificio
- Parking management: gestión de plazas asignadas a arrendatarios, control de acceso al garaje

4. MÓDULO FINANCIERO Y DE REPORTING
Para propietarios e inversores institucionales:
- NOI (Net Operating Income) en tiempo real: ingresos de renta, gastos operativos, resultado neto
- Dashboard de KPIs inmobiliarios: yield, cap rate, ROE, cash-on-cash return por activo y portfolio
- Reporting para inversores: generación automática de informe mensual/trimestral con formato exportable a PDF y Excel
- Integración contable: exportación a SAP, Dynamics, Sage o el ERP financiero del cliente
- Modelo de previsión de rentas: proyección de ingresos futuros según contratos en vigor y tasa de ocupación estimada

5. PORTAL DEL ARRENDATARIO
Aplicación self-service para empresas que ocupan los espacios:
- Acceso a documentación: contrato, facturas, certificados de garantía
- Reporte de incidencias: solicitud de mantenimiento con seguimiento del estado
- Reserva de espacios comunes: salas de reuniones, zonas de carga, plazas de parking adicionales
- Comunicación con la propiedad: mensajería integrada y notificaciones
- Consumos: acceso a sus datos de consumo energético para reporting de sostenibilidad

6. SEGURIDAD, ESCALABILIDAD Y CUMPLIMIENTO
Para una plataforma que gestiona activos de alto valor y datos sensibles:
- Arquitectura cloud escalable: multi-región para carteras internacionales, auto-scaling por demanda
- Seguridad de datos: cifrado, autenticación MFA, gestión de sesiones, logs de auditoría
- Cumplimiento GDPR: gestión de datos de personas físicas (empleados de arrendatarios, visitantes)
- Disaster recovery y SLA: plan de continuidad para plataformas críticas de gestión de activos

Entrega la especificación como documento técnico con diagramas de arquitectura, modelo de datos y priorización de funcionalidades por MVP vs. roadmap.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Especificación técnica de plataforma PropTech para gestión de activos inmobiliarios comerciales',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseñar espacios de oficina flexibles y experiencias de workplace',
                'description'      => 'Usa IA para diseñar conceptos de espacios de trabajo que combinen productividad, bienestar, flexibilidad y sostenibilidad para empresas que redefinen su uso de la oficina.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de interiores y estratega de workplace especializado en espacios corporativos, hybrid work y experiencia del empleado en la oficina. Tu expertise combina diseño de espacios, comportamiento organizacional y certificaciones de edificios saludables.

Contexto del proyecto:
- Empresa cliente: [tipo de empresa, sector, cultura organizacional, número de empleados]
- Superficie disponible: [m² totales, número de plantas, forma de la planta, limitaciones estructurales]
- Modelo de trabajo: [presencial, híbrido con ratio de ocupación, 100% remoto con oficina para eventos]
- Objetivos del proyecto: [atraer talento, reducir superficie, aumentar colaboración, mejorar bienestar, reforzar cultura de empresa]
- Presupuesto orientativo: [indica el rango por m² o total]
- Certificaciones objetivo: [WELL Building Standard, LEED, BREEAM, Fitwel, etc.]

Desarrolla el concepto de diseño de workplace completo:

1. ESTRATEGIA DE WORKPLACE Y ANÁLISIS DE NECESIDADES
Define el modelo de espacio basado en las necesidades del negocio:
- Análisis de patrones de uso actual: ¿qué tipo de trabajo se hace en la oficina? (concentración, colaboración, socialización, aprendizaje)
- Ratio de puestos por empleado recomendado según el modelo de trabajo (1:0.7 para híbrido con 70% de ocupación)
- Activity-Based Working (ABW): definición de tipos de espacios por actividad y proporciones recomendadas
- Zonas de silencio, colaboración, descanso, socialización, teléfono y videoconferencia
- Necesidades especiales: salas de lactancia, espacio multiconfesional, zonas de descompresión

2. CONCEPTO DE DISEÑO Y NARRATIVA
Define la identidad visual y experiencial del espacio:
- Concepto central del diseño: metáfora o inspiración que guíe todas las decisiones (ej. "bosque urbano", "cuartel general creativo", "plaza pública")
- Paleta de materiales y colores: identificación de materiales sostenibles, acústicos y duraderos
- Iluminación: estrategia de luz natural, iluminación artificial adaptable (circadiana), niveles de ilux por zona de actividad
- Acústica: tratamiento por zonas, STI (Speech Transmission Index) objetivo, materiales absorbentes y difusores
- Biofilia: integración de vegetación, materiales naturales y vistas al exterior

3. PROGRAMA DE ESPACIOS DETALLADO
Para cada tipo de espacio, define:
- Puestos de trabajo abiertos (open plan): densidad, tipo de mobiliario, paneles de privacidad, gestión de cableado
- Salas de reuniones: tipologías (huddle room, sala media, sala grande, boardroom), equipamiento AV, capacidades
- Espacios de concentración: focus rooms, cabinas telefónicas, zonas de silencio con normas claras
- Áreas sociales y de descanso: kitchen/comedor, zonas lounge, terraza o roof si aplica
- Espacios de aprendizaje y creatividad: zonas para formación, ideación, presentaciones internas

4. TECNOLOGÍA DEL ESPACIO DE TRABAJO
Especificaciones tecnológicas integradas en el diseño:
- Sistema de reserva de puestos y salas: opciones de software (Condeco, Skedda, Microsoft Places) e integración con sensores de ocupación
- Infraestructura AV en salas: pantallas, cámaras de videoconferencia, micrófonos de techo, Zoom/Teams Rooms
- Conectividad y redes: cobertura WiFi total, zonas de carga inalámbrica, puntos de conexión por zona
- Domótica e IoT: control de iluminación y climatización por zona, sensores de CO2 y calidad del aire

5. SOSTENIBILIDAD Y BIENESTAR
Plan de diseño conforme a certificaciones de edificio saludable:
- Requisitos WELL Building Standard: aire, agua, nutrición, luz, movimiento, confort térmico y acústico, mente, comunidad
- Selección de materiales: criterios de VOC (Compuestos Orgánicos Volátiles), durabilidad, reciclabilidad, proximidad
- Economía circular en el proyecto: reutilización de mobiliario existente, sistemas de desmontaje, gestión de residuos de obra
- Indicadores de sostenibilidad del uso: consumo energético por m², huella de carbono del espacio

6. GESTIÓN DEL PROYECTO Y PRESUPUESTO
Plan de ejecución del proyecto de interiorismo:
- Fases del proyecto: análisis, concepto, diseño básico, proyecto ejecutivo, obra, mudanza y puesta en marcha
- Desglose de presupuesto por partidas: mobiliario, obra civil, climatización y ventilación, tecnología AV, iluminación, decoración
- Gestión del cambio con los empleados: comunicación, participación en el diseño, plan de gestión del cambio
- KPIs de éxito post-ocupación: encuesta de satisfacción, tasa de utilización medida con sensores, productividad percibida

Entrega el concepto en formato de propuesta de diseño con programa de espacios, lista de materiales y plan de proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de concepto de espacio de trabajo corporativo flexible con enfoque de bienestar y sostenibilidad',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Vender espacios de oficina y superficies comerciales a empresas',
                'description'      => 'Usa IA para preparar presentaciones, gestionar el proceso de venta consultiva y cerrar operaciones de arrendamiento o venta de inmuebles comerciales con decisores empresariales.',
                'prompt_content'   => <<<'EOT'
Eres un agente y asesor inmobiliario comercial especializado en la comercialización de oficinas, locales comerciales y activos terciarios. Tu proceso de venta es consultivo, largo y complejo, involucrando múltiples decisores dentro de las empresas arrendatarias.

Contexto de la operación:
- Activo a comercializar: [tipo, superficie, ubicación, condiciones económicas principales]
- Empresa cliente objetivo: [sector, tamaño, situación actual de arrendamiento, necesidades detectadas]
- Decisores identificados: [CEO, CFO, Director de Operaciones, Real Estate Manager, RRHH]
- Fase del proceso: [primer contacto, visita realizada, negociando condiciones, pendiente de aprobación interna]
- Competencia: [otros inmuebles que el cliente está evaluando]

Desarrolla el proceso de venta consultiva completo:

1. ANÁLISIS DE LA NECESIDAD DEL CLIENTE EMPRESARIAL
Cuestionario de discovery para entender la necesidad real:
- ¿Cuándo vence su contrato actual y en qué condiciones?
- ¿Cuántos empleados tienen y cuál es el ratio de ocupación habitual?
- ¿Qué porcentaje del equipo trabaja en modo híbrido?
- ¿Qué problemas tiene con su espacio actual? (accesibilidad, imagen, superficie, servicios)
- ¿Qué presupuesto anual de arrendamiento tiene autorizado?
- ¿Quién toma la decisión final y cuál es el proceso interno de aprobación?
- ¿Tienen restricciones de ubicación geográfica? (radio desde donde viven sus empleados)
- ¿Hay algún requerimiento especial? (sala de servidores, espacios especiales, parking, certificaciones)

2. PRESENTACIÓN PERSONALIZADA DEL ACTIVO
Estructura de la presentación adaptada al perfil del cliente:
- Para el CEO/decisor estratégico: narrativa de imagen, atracción de talento, ubicación premium, flexibilidad de crecimiento
- Para el CFO: análisis económico comparativo con la situación actual, coste total de ocupación (renta + gastos de comunidad + parking + OPEX), ahorro vs. alternativas
- Para el Director de Operaciones/Facilities: especificaciones técnicas, eficiencia de planta, sistemas del edificio, servicios, accesibilidad logística
- Para RRHH: bienestar del empleado, accesibilidad en transporte público, servicios del entorno, espacios de descanso

3. ANÁLISIS COMPARATIVO Y ARGUMENTARIO
Cómo posicionar el activo frente a la competencia:
- Tabla comparativa de activos en evaluación: columnas con los criterios más valorados por el cliente
- Argumentario para las 10 objeciones más frecuentes en la venta de oficinas:
  "El precio por m² es superior a otros que hemos visto"
  "La ubicación está más alejada del metro de lo que queremos"
  "Necesitamos más plazas de parking de las disponibles"
  "La planta no se adapta bien a nuestra distribución"
  "Necesitamos ver cómo evoluciona el mercado antes de comprometernos"
  "Nuestro contrato actual aún tiene 18 meses y no tenemos urgencia"
  Y 4 más específicas del tipo de activo

4. NEGOCIACIÓN DE CONDICIONES DEL ARRENDAMIENTO
Guía para la negociación de una operación de arrendamiento comercial:
- Elementos negociables típicos: renta base, período de carencia, actualización de renta, garantías, obras de adecuación a cargo del propietario, opción de renovación, break clause
- Estrategia de ancla y concesiones: en qué ceder y en qué no según el interés del propietario
- Cómo gestionar la contraoferta cuando el cliente hace una primera propuesta agresiva
- Documentación de la operación: HOT (Heads of Terms), due diligence previo a contrato, protocolo de firma

5. GESTIÓN DEL PROCESO INTERNO DEL CLIENTE
Cómo ayudar al cliente a conseguir la aprobación interna:
- Plantilla de informe interno para que el cliente presente la operación a su dirección
- Argumentario financiero: cómo calcular y presentar el coste total de ocupación a largo plazo
- Cronograma de la operación: hitos desde la oferta hasta el inicio del arrendamiento
- Gestión de los tiempos de decisión: cómo mantener el interés sin presionar y evitar que el cliente postergue

6. SEGUIMIENTO Y CIERRE
Proceso de seguimiento post-visita:
- Email de resumen de la visita con los puntos de valor más relevantes para ese cliente
- Plan de visitas de acompañamiento: arquitecto, director de IT, facility manager del cliente
- Cómo solicitar y gestionar referencias de otros arrendatarios del edificio
- Protocolo de cierre: señales de compra, momento para hacer la propuesta formal, cómo pedir el compromiso

Entrega el proceso en formato de playbook de ventas listo para usar con el equipo de comercialización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proceso de venta consultiva de oficinas y superficies comerciales a empresas arrendatarias',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Desarrollar productos digitales para el sector inmobiliario comercial',
                'description'      => 'Usa IA para diseñar roadmaps y estrategias de producto para plataformas digitales dirigidas a inversores, gestores y arrendatarios del mercado inmobiliario comercial.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en PropTech y plataformas digitales para el mercado inmobiliario comercial (oficinas, retail, logístico). Tu experiencia combina el conocimiento del mercado real estate con la metodología de desarrollo de producto digital.

Contexto del producto:
- Tipo de plataforma: [marketplace de espacios, gestión de portfolio inmobiliario, plataforma de inversión, software de valoración, herramienta de broker, smart building app]
- Usuarios principales: [property managers, inversores institucionales, brokers, empresas arrendatarias, facility managers]
- Etapa del producto: [idea, MVP, product-market fit, escalado]
- Tamaño del equipo: [número de personas, composición]
- Competidores principales: [nombra los más relevantes en tu mercado]

Desarrolla la estrategia de producto completa:

1. ANÁLISIS DEL MERCADO Y OPORTUNIDAD DE PRODUCTO
Define la oportunidad de mercado en el sector:
- Tamaño del mercado inmobiliario comercial en el territorio objetivo y penetración digital actual
- Principales pain points no resueltos de los usuarios objetivo: entrevistas tipo y síntesis de hallazgos
- Análisis de la competencia: tabla comparativa de funcionalidades clave vs. competidores
- Identificación del nicho desatendido: ¿qué hace tu producto mejor o diferente?
- Modelo de negocio: SaaS, comisión por transacción, marketplace, licencia enterprise, freemium

2. ESTRATEGIA DE PRODUCTO Y VISIÓN
Define la dirección del producto a 18-36 meses:
- Visión del producto: qué problema resuelves para quién y por qué tu solución es la mejor
- Propuesta de valor diferencial para cada segmento de usuario
- Estrategia de plataforma: ¿ecosistema cerrado o API-first para integraciones?
- Decisiones de make vs. buy: qué funcionalidades construir y qué integrar con terceros (firma digital, sistemas GIS, datos de mercado de CBRE/JLL, valoraciones automatizadas AVM)

3. ROADMAP DE PRODUCTO PARA 12 MESES
Diseña el roadmap con trimestres y temas:
- Q1: Fundamentos (describe las funcionalidades core del MVP o de la siguiente versión mayor)
- Q2: Eficiencia operativa (automatizaciones que ahorran tiempo a los usuarios)
- Q3: Inteligencia de datos (analytics, benchmarking de mercado, insights automáticos)
- Q4: Escala y ecosistema (integraciones, API pública, expansión de mercado)

Para cada trimestre, incluye:
- Iniciativas principales con objetivo de negocio
- Métricas de éxito asociadas
- Dependencias críticas (datos, regulación, terceros)

4. DISEÑO DE LA EXPERIENCIA PARA USUARIOS INMOBILIARIOS
Los usuarios del mercado real estate tienen características específicas:
- Perfil de usuario: no son nativos digitales, alta exigencia en precisión de datos, trabajan con muchas variables numéricas
- Flujos críticos que deben ser perfectos: búsqueda y filtrado de activos, análisis de operación, generación de informes para inversores
- Integración con herramientas de trabajo existentes: Excel (fundamental), ERP financiero, firma digital, correo
- Mobile first vs. desktop first: análisis de en qué momentos usa el producto cada perfil de usuario

5. DATOS INMOBILIARIOS COMO ACTIVO ESTRATÉGICO
La ventaja competitiva en PropTech es a menudo el dato:
- Estrategia de datos: qué datos propios generas, qué datos de mercado necesitas, cuáles compras vs. produces
- Partnerships de datos: fuentes institucionales (registros, catastro, ayuntamientos) y comerciales (CBRE, Savills, JLL, Idealista Data)
- Modelo de datos: cómo estructurar activos, transacciones, valoraciones, arrendamientos para análisis temporal
- Productos de datos: cómo monetizar los datos que generas (índices de rentas, tasas de desocupación, tendencias de mercado)

6. MÉTRICAS DE PRODUCTO Y CRECIMIENTO
Define los KPIs de producto específicos para PropTech:
- Activation: tiempo hasta la primera operación o primer activo publicado
- Engagement: frecuencia de uso por tipo de usuario, funcionalidades más usadas
- Retención: churn mensual, Net Revenue Retention para clientes SaaS
- Crecimiento: activos en la plataforma, volumen de operaciones intermediadas, m² gestionados
- NPS por segmento de usuario

Entrega la estrategia en formato de documento de product strategy con roadmap visual descrito, lista de métricas y próximos pasos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de producto y roadmap para plataformas PropTech en el mercado inmobiliario comercial',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestionar el talento y la cultura en empresas inmobiliarias con IA',
                'description'      => 'Usa IA para diseñar estrategias de gestión de personas en empresas del sector inmobiliario comercial: atracción de talento comercial, formación de equipos de ventas y cultura de alto rendimiento.',
                'prompt_content'   => <<<'EOT'
Eres un HR Business Partner especializado en empresas del sector inmobiliario comercial. Tu experiencia abarca la gestión de talento comercial altamente competitivo, estructuras de incentivos para brokers, y la construcción de cultura en empresas de real estate.

Contexto de la organización:
- Tipo de empresa: [agencia inmobiliaria comercial, consultora de real estate, property management, fondo inmobiliario, promotora]
- Tamaño y composición del equipo: [número de personas, perfiles: brokers, property managers, analistas, soporte]
- Situación actual: [crecimiento acelerado, reestructuración, alta rotación de comerciales, expansión geográfica]
- Mercado de talento: [España, Latam, específica la ciudad principal]
- Retos principales: [dificultad para atraer brokers senior, cultura de silos entre equipos, falta de formación estructurada]

Desarrolla una estrategia integral de gestión del talento inmobiliario:

1. PERFIL Y ATRACCIÓN DEL TALENTO COMERCIAL INMOBILIARIO
Para los perfiles clave del sector:
- Broker comercial senior: fuentes de captación (competidores directos, sector financiero, consultoría), perfil competencial, proceso de selección (simulación de negociación, business plan de cartera)
- Property manager: perfil técnico y de gestión, fuentes (facilities management, administración de fincas), prueba técnica de valoración de incidencias
- Analista inmobiliario: perfil cuantitativo, fuentes (escuelas de negocios, universidades con máster en real estate), prueba de modelización financiera
- Perfil de dirección: uso de headhunters especializados en real estate, proceso de selección de 3 fases

2. ESTRUCTURA DE COMPENSACIÓN PARA BROKERS
Diseña el modelo de incentivos del equipo comercial:
- Mix de compensación: fijo vs. variable, benchmarks de mercado por nivel (junior, mid, senior, director)
- Estructura de comisiones: modelos habituales en el sector (porcentaje sobre honorarios cerrados, escala progresiva por volumen, comisión en equipo)
- Acuerdos de exclusividad de cartera: cómo proteger las relaciones con clientes sin desmotivar al broker
- Beneficios específicos del sector: gastos de representación, vehículo, acceso a bases de datos premium, membresías en clubs de networking
- Gestión del ramp-up para nuevos brokers: estructura de soporte y rampa de comisiones en los primeros 6-12 meses

3. FORMACIÓN Y DESARROLLO DEL EQUIPO
Plan de formación para equipos de real estate comercial:
- Programa de onboarding (primeras 8 semanas): conocimiento del producto y el mercado, proceso de venta de la empresa, herramientas y sistemas, shadowing con broker senior
- Formación técnica continua: valoración de activos, análisis financiero de operaciones, tendencias del mercado (oficinas, retail, logístico), regulación y fiscalidad inmobiliaria
- Formación comercial: técnicas de negociación avanzada, prospección efectiva, gestión de objeciones, presentaciones a inversores institucionales
- Liderazgo y gestión para mandos intermedios: cómo pasar de broker a team leader sin perder producción personal

4. CULTURA Y RETENCIÓN EN UN SECTOR DE ALTA ROTACIÓN
El sector inmobiliario tiene estructuralmente alta rotación de talento comercial:
- Diagnóstico de causas de rotación: salida a la competencia, a la independencia (agencia propia), al cliente (in-house)
- Plan de retención de top performers: acuerdos de largo plazo, co-inversión en activos, participación en el negocio (phantom shares, profit sharing)
- Cultura de equipo en un negocio de alta competencia individual: cómo fomentar la colaboración sin matar el instinto competitivo
- Gestión de la salida: offboarding de brokers con cartera de clientes, protección de información confidencial, cláusulas de no competencia

5. GESTIÓN DEL RENDIMIENTO
Sistema de evaluación adaptado al sector:
- KPIs por perfil: número de operaciones cerradas, volumen de honorarios, cartera de activos en comercialización, satisfacción del cliente (CSAT), nuevas relaciones generadas
- Ciclo de evaluación: revisión mensual de pipeline + evaluación trimestral de rendimiento + evaluación anual de competencias
- Gestión de bajo rendimiento: proceso claro, soporte antes de la acción disciplinaria, decisión rápida para no afectar al equipo
- Reconocimiento y visibilidad interna: cómo celebrar los éxitos en un equipo con alta competencia individual

6. DIVERSIDAD E INCLUSIÓN EN EL SECTOR INMOBILIARIO
El real estate comercial es históricamente homogéneo en género y origen:
- Objetivos de diversidad realistas para el equipo comercial y de liderazgo
- Iniciativas para atraer y retener mujeres en roles de broker y dirección
- Alianzas con asociaciones del sector para promover la diversidad (ULI, RICS, FIABCI)
- Inclusión en eventos y networking del sector: cómo hacer que todos los perfiles tengan acceso a las mismas redes

Entrega la estrategia como plan operativo de RRHH con acciones concretas y métricas de seguimiento por trimestre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de talento, compensación y cultura para empresas del sector inmobiliario comercial',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelizar y analizar inversiones en inmuebles comerciales con IA',
                'description'      => 'Usa IA para construir modelos financieros de inversión en activos inmobiliarios comerciales, calcular retornos ajustados al riesgo y preparar análisis para inversores institucionales.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en inversión inmobiliaria comercial. Tu expertise abarca la modelización financiera de activos en arrendamiento, la valoración de carteras, el análisis de retorno ajustado al riesgo y la preparación de material para inversores institucionales.

Contexto de la inversión:
- Tipo de activo: [edificio de oficinas, local comercial, centro logístico, cartera mixta, cartera de oficinas]
- Ubicación: [ciudad o mercado inmobiliario específico]
- Datos del activo: [superficie arrendable, rentas actuales, tasa de desocupación, WAULT, gastos operativos anuales]
- Precio de adquisición o valoración inicial: [indica el precio o pide estimación de mercado]
- Estructura de financiación: [equity puro, LTV objetivo, tipo de interés de la deuda]
- Horizonte de inversión y estrategia de salida: [3, 5 o 7 años; venta, refinanciación, dividendos]

Desarrolla el análisis financiero completo de la inversión:

1. MODELO DE FLUJO DE CAJA DESCONTADO (DCF)
Construye el modelo financiero año a año con:
- Ingresos de renta proyectados: renta actual por unidad, actualización por IPC o revisión de mercado, incorporación de vacantes con período de carencia estimado, probabilidad de renovación vs. renegociación
- Gastos operativos: seguro, impuestos (IBI, tasas), mantenimiento y reparaciones, gestión de la propiedad (%), gastos de comunidad no repercutidos, vacante estructural estimada
- NOI (Net Operating Income): cálculo año a año y crecimiento proyectado
- CapEx: inversiones de mantenimiento previstas y su impacto en el valor del activo
- Flujo de caja libre al equity (FCFE) después del servicio de la deuda si hay financiación

2. MÉTRICAS DE RETORNO Y VALORACIÓN
Calcula los indicadores clave de la inversión:
- Yield inicial (Initial Yield): NOI año 1 / precio de adquisición
- Yield neto: NOI neto de gastos no recuperables / precio
- Cap Rate de salida: estimación del yield al que se venderá el activo según ciclo inmobiliario previsto
- Valor de salida: NOI año N+1 / Cap Rate de salida
- Equity Multiple: valor de salida + dividendos recibidos / equity invertido
- TIR del proyecto (Project IRR): sin apalancamiento
- TIR del equity (Equity IRR): con apalancamiento
- Cash-on-Cash Return: dividendo anual / equity invertido en año base

3. ANÁLISIS DE SENSIBILIDAD Y ESCENARIOS
Construye un análisis de robustez de la inversión:
- Sensibilidad bivariante: TIR del equity en función de Cap Rate de salida (eje Y: 4%, 4.5%, 5%, 5.5%, 6%) y tasa de ocupación media (eje X: 80%, 85%, 90%, 95%, 100%)
- Tres escenarios de inversión:
  Escenario base: supuestos centrales razonados con datos de mercado
  Escenario alcista: mejora de rentas, baja vacante, compresión de yield en la salida
  Escenario bajista: deterioro de ocupación, rentas estancadas, expansión de yield en salida
- Análisis de break-even: precio máximo de compra para lograr TIR objetivo del 8/10/12%

4. ANÁLISIS DE FINANCIACIÓN
Modelización del impacto del apalancamiento:
- Estructura de deuda: LTV, tipo de interés (fijo vs. variable + hedge), plazo, amortización
- Cobertura del servicio de la deuda: DSCR mínimo requerido por el banco y margen de seguridad en el modelo
- Impacto del apalancamiento en la TIR del equity: cuantificación del efecto multiplicador
- Riesgo de refinanciación: ¿qué ocurre si al vencimiento de la deuda el mercado se ha deteriorado?

5. ANÁLISIS DE MERCADO Y COMPARABLES
Contextualización del activo en el mercado:
- Rentas de mercado comparables: ¿las rentas actuales son de mercado, por debajo o por encima?
- Transacciones comparables recientes: yields a los que se han vendido activos similares en la zona
- Tendencias del mercado: evolución de la demanda de arrendatarios en el segmento (ej. oficinas prime en Madrid, logístico de última milla en Barcelona)
- Factores de riesgo específicos del mercado local: sobreoferta, obsolescencia del activo, transformación del uso

6. INFORME DE INVERSIÓN PARA COMITÉ
Estructura del Investment Committee Memo:
- Resumen ejecutivo: activo, precio, estructura, retorno esperado y recomendación en 1 página
- Tesis de inversión: 3-5 razones por las que esta inversión tiene sentido ahora
- Análisis de riesgos: tabla de riesgos con probabilidad, impacto y mitigante
- Propuesta de condiciones de la operación: estructura de cierre, due diligence pendiente, condiciones suspensivas
- Próximos pasos y cronograma de cierre

Entrega el análisis como informe financiero profesional con las tablas del modelo descritas textualmente y el Investment Memo completo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Modelo DCF y análisis de retorno para inversión en activos inmobiliarios comerciales',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Redactar y revisar contratos de arrendamiento comercial con IA',
                'description'      => 'Usa IA para redactar, revisar y negociar contratos de arrendamiento de locales, oficinas y activos comerciales con protección de los intereses de propietarios o arrendatarios.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho inmobiliario comercial con experiencia en la redacción y negociación de contratos de arrendamiento de locales de negocio, oficinas y superficies comerciales en el marco de la Ley de Arrendamientos Urbanos española y sus matices.

Contexto del contrato:
- Tipo de contrato: [arrendamiento de local de negocio, arrendamiento de oficina, arrendamiento de nave logística, subarrendamiento, cesión de uso]
- Parte que representas: [propietario/arrendador o empresa arrendataria]
- Tipo de activo: [local en calle comercial, oficina en edificio corporativo, nave logística, espacio en centro comercial]
- Duración prevista: [años de duración inicial y posibles prórrogas]
- Condiciones económicas acordadas: [renta mensual, actualización, carencias, garantías]
- Jurisdicción: [España, comunidad autónoma específica si es relevante]

Desarrolla la revisión y redacción del contrato de arrendamiento comercial:

1. ESTRUCTURA BÁSICA DEL CONTRATO DE ARRENDAMIENTO COMERCIAL
Para un contrato conforme a la LAU y el Código Civil español:
- Partes: identificación completa del arrendador y arrendatario, representación legal y poderes
- Objeto del arrendamiento: descripción del inmueble (referencia catastral, superficie, anejo de garajes/trasteros), destinación pactada, usos prohibidos
- Duración: plazo inicial, prórrogas voluntarias y tácitas, causas de resolución anticipada
- Renta: importe, periodicidad, forma de pago, cuenta bancaria, recibos y justificantes
- Actualización de renta: índice de referencia (IPC, IPRIM, índice pactado), primera actualización, procedimiento de notificación
- Gastos y suministros: qué paga el arrendador (IBI, comunidad de propietarios, seguro del continente) y qué paga el arrendatario (suministros, seguro del contenido y responsabilidad civil)

2. CLÁUSULAS ECONÓMICAS CRÍTICAS
Análisis y redacción de las cláusulas con mayor impacto económico:
- Carencia de renta inicial: redacción para que el período de obras no compute como incumplimiento, cómo garantizar la devolución si el arrendatario incumple antes del fin de la carencia
- Renta variable o turnover rent en retail: cómo redactar la cláusula de renta variable sobre ventas, mínimos garantizados, auditoría de ventas del arrendatario
- Cláusula de revisión de renta a valor de mercado: mecanismo de valoración por tercero independiente, tasador, períodos de ejercicio
- Break clause o cláusula de resolución anticipada: a favor de cuál de las partes, penalización, preaviso mínimo
- Cláusula de estabilización: protección del arrendador ante caída drástica del IPC (deflación)

3. GARANTÍAS DEL ARRENDAMIENTO
Tipos de garantía y su redacción:
- Fianza legal obligatoria (2 meses para locales de negocio según LAU): depósito en organismo autonómico, devolución y actualización
- Garantías adicionales: aval bancario a primer requerimiento (duración, renovación, beneficiario), depósito adicional en cuenta bloqueada, aval personal de socios
- Garantías corporativas: obligación de garante matriz para arrendatarios en grupo empresarial, mantenimiento mínimo de solvencia (covenant financiero)
- Reposición de garantías: qué ocurre si se ejecuta el aval y cómo se recompone

4. CLÁUSULAS DE PROTECCIÓN SEGÚN PARTE REPRESENTADA
Si representas al arrendador:
- Cláusula de destino y uso exclusivo (no cambiar la actividad sin consentimiento escrito)
- Prohibición de subarrendamiento y cesión sin consentimiento
- Derecho de inspección del inmueble con preaviso razonable
- Cláusula de reposición del inmueble al estado original al finalizar el arrendamiento
- Derecho de tanteo y retracto si el arrendatario vende su negocio

Si representas al arrendatario:
- Derecho preferente de renovación al vencimiento
- Limitación de las causas de resolución por parte del arrendador
- Derecho a realizar obras de adecuación (con consentimiento) y a dejar las mejoras sin indemnización o con indemnización pactada
- Restricción del derecho de visita y de puesta en venta durante el arrendamiento
- Cláusula de subrogación en caso de compraventa del inmueble

5. ASPECTOS REGULATORIOS Y FISCALES
- IVA en arrendamientos comerciales: cuándo aplica, base imponible, repercusión al arrendatario, gestión en la facturación
- Retención de IRPF: cuándo corresponde, porcentaje, gestión y certificación
- Inscripción en el Registro de la Propiedad: ventajas para el arrendatario (oponibilidad frente a terceros adquirentes)
- Licencias de actividad y apertura: quién es responsable de obtenerlas y quién asume el riesgo si se deniegan

6. PRINCIPALES RIESGOS Y CÓMO PROTEGERSE
Lista los 10 riesgos jurídicos más frecuentes en arrendamientos comerciales y la cláusula que los mitiga:
- Insolvencia del arrendatario
- Incendio o siniestro grave en el local
- Cambio de normativa urbanística que impide el uso pactado
- Obras de la Administración que afectan al acceso al local
- Ruina del edificio o defectos estructurales sobrevenidos
- Y 5 más

Entrega el análisis como memo jurídico con redacción de las cláusulas críticas lista para incorporar al contrato.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Redacción y revisión de contratos de arrendamiento comercial con protección de intereses del cliente',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestionar las relaciones con arrendatarios e incidencias de edificios con IA',
                'description'      => 'Usa IA para diseñar sistemas de atención y soporte a arrendatarios de edificios de oficinas y espacios comerciales, gestionando incidencias, solicitudes y comunicación con propietarios.',
                'prompt_content'   => <<<'EOT'
Eres un property manager y especialista en gestión de relaciones con arrendatarios (tenant relations) para edificios de oficinas y activos comerciales. Tu trabajo es garantizar la satisfacción de los ocupantes, la gestión eficiente de las incidencias del edificio y la comunicación fluida entre arrendatarios y propietario.

Contexto de la gestión:
- Tipo de activo: [edificio de oficinas multi-arrendatario, local comercial, parque empresarial, coworking, centro logístico]
- Número de arrendatarios y empleados en el edificio: [indica la escala]
- Canales de comunicación actuales: [email, portal de arrendatarios, app, atención presencial]
- Principales problemas actuales: [lentitud en la resolución de incidencias, comunicación reactiva, quejas de temperatura/ruido/limpieza]
- Herramientas de gestión: [CAFM, CMMS, Excel, herramienta de ticketing]

Desarrolla un sistema de tenant relations de alta calidad:

1. PROTOCOLO DE BIENVENIDA Y ONBOARDING DE NUEVOS ARRENDATARIOS
Define el proceso de incorporación de una nueva empresa al edificio:
- Semanas 1-2 (antes de la mudanza): visita técnica con el facilities manager, entrega del manual del arrendatario, configuración de accesos y tarjetas, provisión de suministros
- Día 1 (primer día): recepción presencial, presentación del equipo de gestión, tour por instalaciones comunes, entrega de información de contacto de emergencia
- Semanas 2-4: seguimiento proactivo, resolución de los primeros ajustes de temperatura/iluminación, reunión de check-in al mes
- Manual del arrendatario: contenido y estructura (normas del edificio, servicios disponibles, canales de comunicación, emergencias, directorio)

2. SISTEMA DE GESTIÓN DE INCIDENCIAS
Diseña el proceso de ticketing para incidencias del edificio:
- Categorías de incidencias con SLA (Service Level Agreement) por tipo:
  Incidencia crítica (ascensor parado, corte de electricidad, inundación): respuesta en 30 min, resolución en 4h
  Incidencia mayor (climatización inadecuada, problema de accesos, fallo de instalaciones): respuesta en 2h, resolución en 24h
  Incidencia menor (limpieza, solicitud de material, pequeñas averías): respuesta en 8h, resolución en 72h
  Solicitud de servicio (reserva de sala, solicitud de plazas adicionales): resolución en 24h
- Flujo de una incidencia: apertura del ticket, asignación, comunicación al arrendatario, seguimiento, cierre y encuesta de satisfacción
- Escalado a propietario: qué incidencias requieren comunicación al propietario y en qué plazo

3. COMUNICACIÓN PROACTIVA CON ARRENDATARIOS
Calendario de comunicaciones regulares:
- Boletín mensual del edificio: obras planificadas, novedades en servicios, información de interés del entorno, contacto de gestión
- Comunicaciones de emergencia: protocolo de aviso ante incidencias graves (quién avisa, a través de qué canal, en cuánto tiempo)
- Programa de satisfacción anual: encuesta a los arrendatarios, análisis de resultados, plan de acción
- Eventos de comunidad: cómo organizar eventos que fomenten la comunidad en el edificio (encuentros de networking, charlas sobre bienestar, etc.)

4. GESTIÓN DE RENOVACIONES Y VENCIMIENTOS
Proceso para maximizar la retención de arrendatarios:
- Alertas de vencimiento: activar el proceso de renovación con 18-12 meses de antelación
- Visita de satisfacción previa: detectar problemas o necesidades que podrían llevar a la no renovación
- Propuesta de renovación: cómo negociar condiciones actualizadas (renta de mercado, mejoras en el espacio, nuevos servicios)
- Gestión de arrendatarios salientes: preaviso, estado del espacio a la entrega, devolución de garantías, referencias para el próximo arrendatario

5. GESTIÓN DE SERVICIOS DEL EDIFICIO
Supervisión de los proveedores de servicios:
- Proveedores clave y su gestión: limpieza, seguridad y control de accesos, mantenimiento de instalaciones, jardinería, gestión de residuos
- Contratos de mantenimiento preventivo: qué incluir, frecuencias mínimas, KPIs de los proveedores
- Certificaciones del edificio: mantenimiento de ISO, BREEAM in-Use, WELL, certificados de eficiencia energética
- Sostenibilidad operativa: cómo reportar consumos a los arrendatarios para sus informes ESG, iniciativas de reducción de emisiones del edificio

6. REPORTING AL PROPIETARIO
Informe mensual del property manager al propietario:
- Estado de ocupación: tasa de ocupación, vencimientos próximos, incidencias de impago
- Resumen de incidencias: número de tickets por categoría, SLA cumplido, incidencias recurrentes que requieren inversión
- Estado financiero de la propiedad: rentas recibidas, gastos operativos del mes, presupuesto de mantenimiento
- Satisfacción de arrendatarios: NPS o CSAT del período, quejas formales recibidas, acciones tomadas
- Alertas y recomendaciones: qué decisiones requiere el propietario en el próximo período

Entrega el sistema como manual operativo de property management con plantillas de comunicación, protocolo de incidencias y plantilla del informe mensual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de gestión de relaciones con arrendatarios e incidencias en edificios comerciales',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Ofrecer servicios de consultoría inmobiliaria comercial como freelancer',
                'description'      => 'Usa IA para desarrollar tu práctica freelance en el sector del real estate comercial: desde la búsqueda de mandatos hasta la gestión de operaciones de arrendamiento e inversión como agente independiente.',
                'prompt_content'   => <<<'EOT'
Eres un consultor y agente inmobiliario comercial independiente que opera como freelancer en el sector del real estate terciario (oficinas, retail, logístico, industrial). Tu práctica incluye tanto la intermediación de operaciones de arrendamiento como el asesoramiento a inversores en adquisiciones y desinversiones.

Perfil de tu práctica:
- Especialización: [segmento de activos en el que eres experto: oficinas CBD, retail de alta calle, logístico de última milla, etc.]
- Mercado principal: [ciudad o región donde operas principalmente]
- Tipo de cliente habitual: [propietarios privados, fondos de inversión, family offices, empresas arrendatarias en expansión, promotores]
- Modelo de negocio: [intermediación de arrendamiento, asesoría de inversión, mandatos de venta, due diligence, valoraciones]
- Situación actual: [inicio de la actividad, crecimiento del pipeline, diversificación de servicios]

Desarrolla un plan de negocio para tu práctica freelance de real estate comercial:

1. POSICIONAMIENTO Y PROPUESTA DE VALOR
Define tu nicho y diferenciador como agente independiente:
- Por qué los clientes deberían trabajar contigo vs. una consultora grande (CBRE, JLL, Savills, Colliers)
- Tu ventaja competitiva: conocimiento local profundo, acceso a mandatos off-market, agilidad, relación directa y personalizada
- Especialización como palanca de negocio: en qué tipo de activo o perfil de cliente eres la referencia
- Mensaje de posicionamiento para tu web, LinkedIn y tarjeta de presentación

2. DESARROLLO DE NEGOCIO Y PIPELINE DE MANDATOS
Estrategia de captación de mandatos y clientes:
- Red de propietarios: cómo construir relaciones con propietarios privados, family offices y fondos que no trabajan habitualmente con las grandes consultoras
- Red de empresas arrendatarias: cómo posicionarte como el agente de referencia para empresas en expansión en tu mercado
- Fuentes de mandatos off-market: contactos en banca (préstamos inmobiliarios vencidos), administradores de fincas, notarías, liquidaciones de herencias
- LinkedIn y contenido de autoridad en real estate: tipo de contenidos que generan mandatos (análisis de mercado, cierres de operaciones propias, tendencias del sector)
- Colaboración con otros agentes: acuerdos de co-exclusiva, red de agentes complementarios, referencias cruzadas

3. GESTIÓN DE MANDATOS DE ARRENDAMIENTO
Proceso operativo para la comercialización de un activo:
- Acuerdo de mandato: exclusivo vs. no exclusivo, duración, condiciones de honorarios, cláusula de protección de contactos
- Due diligence del activo antes de iniciar la comercialización: documentación legal, urbanística y técnica que debes tener
- Estrategia de comercialización: portales, red de contactos directa, mailing a empresas objetivo, colaboración con otros agentes
- Gestión del proceso de negociación: cómo organizar visitas, manejar varias ofertas simultáneas, coordinar la negociación entre las partes
- Cierre: coordinación con abogados, firma del contrato de arrendamiento, gestión de honorarios

4. ESTRUCTURA DE HONORARIOS Y GESTIÓN FINANCIERA
Modelo económico de tu práctica freelance:
- Honorarios estándar en el mercado por tipo de operación:
  Arrendamiento: X meses de renta bruta (varía por mercado y tipo de activo)
  Venta de activo: porcentaje sobre precio de venta
  Advisory de inversión: retainer más success fee sobre la operación cerrada
- Cuándo y cómo facturar: hitos de pago, gestión de impagos de honorarios
- Gestión del flujo de caja: operaciones que tardan 6-12 meses en cerrarse, necesidad de reserva de liquidez
- Estructura fiscal: régimen de autónomo, IVA en operaciones inmobiliarias, consideraciones para operar en varios mercados

5. HERRAMIENTAS Y OPERATIVA DIARIA
Stack de herramientas para operar eficientemente como agente independiente:
- CRM para la gestión de contactos y pipeline: opciones adaptadas a real estate individual (Pipedrive, HubSpot free, Notion)
- Acceso a bases de datos de mercado: Idealista Data, CoStar (si aplica), datos del Colegio de Agentes de la Propiedad Inmobiliaria
- Herramientas de presentación y marketing: Canva para dossiers, Matterport para visitas virtuales, LinkedIn para contenido
- Gestión documental: almacenamiento seguro de documentos de activos y contratos, firma digital (Docusign, Signaturit)
- Gestoría y administración: cómo externalizar la parte administrativa para focalizarte en la venta

6. CRECIMIENTO Y ESCALABILIDAD
Cómo crecer como agente independiente sin perder la ventaja de ser independiente:
- Cuándo y cómo incorporar un asociado o junior a tu práctica
- Especialización adicional: certificaciones RICS, CCIM, cursos de valoración RICS Red Book
- Transición de intermediación pura a advisory de inversión (mayor margen, relaciones más largas)
- Posibilidad de crear un vehículo de inversión propio: co-inversión con clientes en activos que tú identificas y gestionas

Entrega el plan como documento de negocio con las acciones prioritarias de los primeros 90 días y las métricas de seguimiento de la práctica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Plan de negocio y captación de mandatos para agente inmobiliario comercial freelance',
                'vote_score'       => 35,
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
