<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills541Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de marketing para operadoras telco con IA',
                'description'       => 'Crea campañas de captación y retención de clientes para empresas de telecomunicaciones usando IA para segmentar audiencias, personalizar mensajes y predecir el churn antes de que ocurra.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en marketing para el sector de telecomunicaciones con más de 10 años de experiencia en operadoras líderes. Tu especialidad es combinar el análisis de datos de red y comportamiento de cliente con estrategias de marketing modernas impulsadas por inteligencia artificial.

instrucción: Ayúdame a diseñar una estrategia de marketing integral para una operadora de telecomunicaciones que quiere reducir su tasa de churn en un 20% en los próximos 6 meses y aumentar el ARPU (Average Revenue Per User) en un 15%.

Para lograrlo, necesito que me proporciones:

**1. Segmentación inteligente de clientes**
Desarrolla un modelo de segmentación basado en comportamiento de consumo, uso de datos, antigüedad, perfil socioeconómico y propensión al churn. Explica qué variables son más predictivas en el sector telco y cómo priorizar los segmentos de mayor riesgo y mayor valor.

**2. Sistema de alertas tempranas de churn**
Diseña un sistema de señales de alerta que combine: reducción del consumo de datos, llamadas al servicio de atención, visitas a páginas de competidores, ausencia de uso de servicios premium y bajadas en el NPS. Define los umbrales de intervención y las acciones automáticas recomendadas para cada nivel de riesgo.

**3. Personalización de ofertas de retención**
Crea un catálogo de ofertas personalizadas por segmento: upgrades de tarifa con descuento temporal, bonificaciones de datos extra, acceso a contenidos premium (streaming, música), dispositivos en condiciones especiales y programas de fidelización por puntos. Especifica el momento óptimo para presentar cada oferta en el ciclo de vida del cliente.

**4. Estrategia de upselling con IA**
Diseña un motor de recomendaciones que identifique el momento adecuado para ofrecer servicios adicionales: fibra a clientes de móvil, seguros de dispositivo, servicios cloud para pymes, soluciones IoT para hogares conectados. Incluye los mensajes clave y los canales más efectivos (app, SMS, email, agente).

**5. Campañas de captación para el mercado 5G**
Desarrolla una estrategia de comunicación para posicionar la red 5G como ventaja diferencial. Define los mensajes por segmento (gamers, teletrabajadores, familias, profesionales creativos), los canales de activación y los KPIs de campaña.

**6. Medición y optimización continua**
Propón un dashboard de marketing con los indicadores clave: tasa de churn mensual, CAC por canal, LTV por segmento, tasa de conversión de ofertas de retención y ROI de cada campaña. Define la cadencia de revisión y los mecanismos de test A/B para optimizar mensajes y ofertas.

Incluye ejemplos concretos de mensajes personalizados para cada segmento y recomendaciones sobre las herramientas de IA más adecuadas para automatizar este proceso en una operadora mediana. El objetivo final es crear un sistema de marketing predictivo que actúe antes de perder al cliente, no después.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Reducción de churn y aumento de ARPU en operadoras telco',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo de APIs para redes inteligentes 5G con IA',
                'description'       => 'Diseña y desarrolla APIs y microservicios que aprovechen las capacidades de las redes 5G y la IA para crear aplicaciones de ultra baja latencia, gestión de red en tiempo real y servicios edge computing.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en telecomunicaciones de nueva generación, con experiencia en el desarrollo de aplicaciones para redes 5G, edge computing y sistemas de gestión de red con inteligencia artificial.

instrucción: Ayúdame a diseñar la arquitectura y el plan de desarrollo de una plataforma de APIs para redes 5G inteligentes que permita a terceros construir aplicaciones de baja latencia aprovechando las capacidades de edge computing y network slicing.

Necesito que cubras los siguientes aspectos:

**1. Arquitectura de la plataforma API**
Define la arquitectura de microservicios para exponer capacidades de red 5G: APIs de network slicing para reservar segmentos de red con QoS garantizado, APIs de edge computing para desplegar funciones cerca del usuario, APIs de telemetría en tiempo real y APIs de autenticación y autorización basadas en SIM. Especifica los patrones de diseño más adecuados (API Gateway, Service Mesh, Event-Driven).

**2. Integración con sistemas de IA para optimización de red**
Diseña los módulos de IA que se integran con la plataforma: modelos de predicción de congestión de red para anticipar cuellos de botella y redistribuir tráfico, algoritmos de asignación dinámica de recursos de red basados en demanda en tiempo real, y sistemas de detección de anomalías para identificar ataques DDoS o fallos de infraestructura antes de que afecten al servicio.

**3. Edge Computing y procesamiento distribuido**
Explica cómo implementar una capa de edge computing que permita ejecutar funciones de negocio en los nodos de la red más cercanos al usuario. Incluye patrones de offloading de computación desde dispositivos IoT, estrategias de sincronización de estado entre edge y cloud central, y gestión del ciclo de vida de funciones edge.

**4. Gestión de calidad de servicio (QoS) programática**
Desarrolla una API que permita a las aplicaciones reservar y gestionar recursos de red con garantías de latencia, ancho de banda y disponibilidad. Incluye el diseño del modelo de datos, los endpoints REST y los mecanismos de enforcement en la red.

**5. Seguridad y autenticación en entornos telco**
Define la estrategia de seguridad: autenticación basada en identidad SIM (SIM-based authentication), cifrado extremo a extremo para slices de red privados, auditoría de accesos a APIs y gestión de credenciales en entornos multi-tenant.

**6. Observabilidad y monitorización**
Propón una estrategia de observabilidad con métricas de red en tiempo real, trazabilidad distribuida de peticiones a través de múltiples nodos de red y alertas automáticas basadas en umbrales de SLA.

Incluye ejemplos de código en Python o Go para los componentes más críticos y recomendaciones sobre el stack tecnológico más adecuado (Kubernetes en el edge, Kafka para streaming de eventos, bases de datos de series temporales). El objetivo es crear una plataforma que democratice el acceso a las capacidades avanzadas de las redes 5G para desarrolladores de aplicaciones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Plataforma de APIs para exponer capacidades de redes 5G a terceros',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencias digitales para clientes de telco con IA',
                'description'       => 'Diseña aplicaciones y portales de autogestión para clientes de telecomunicaciones que sean intuitivos, personalizados y que reduzcan la fricción en los procesos más comunes como facturación, soporte y cambio de tarifa.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador UX/UI especializado en aplicaciones para el sector de telecomunicaciones, con experiencia en el diseño de portales de autogestión y aplicaciones móviles para operadoras de telefonía e internet.

instrucción: Ayúdame a diseñar la experiencia de usuario de una aplicación móvil de autogestión para clientes de una operadora de telecomunicaciones, con el objetivo de reducir las llamadas al call center en un 40% y mejorar el NPS en 15 puntos.

Necesito que desarrolles los siguientes aspectos:

**1. Análisis de los journeys de cliente más críticos**
Identifica los 8 procesos más frecuentes que los clientes intentan realizar y que generan mayor frustración: consulta y pago de factura, cambio de tarifa, consulta del consumo de datos en tiempo real, reporte de avería, solicitud de portabilidad, gestión de líneas adicionales, activación de servicios adicionales y configuración del router. Para cada uno, define el flujo actual de fricción y el flujo optimizado con IA.

**2. Personalización inteligente de la interfaz**
Diseña un sistema de personalización que adapte la pantalla principal según el perfil y comportamiento del cliente: si es un cliente con alto consumo de datos, mostrar en primera pantalla el consumo en tiempo real; si tiene facturas pendientes, mostrar el acceso directo al pago; si acaba de tener una avería resuelta, mostrar la valoración del servicio. Define los patrones de UI que permiten esta personalización sin resultar invasivos.

**3. Asistente virtual integrado en la app**
Diseña la experiencia del asistente conversacional dentro de la aplicación: flujos de diálogo para las consultas más frecuentes, transiciones fluidas entre el chatbot y el agente humano cuando la consulta supera las capacidades del bot, y personalización del tono y lenguaje según el segmento del cliente (jóvenes, mayores, empresas).

**4. Gestión visual del consumo y la factura**
Crea los diseños de las pantallas de consumo: gráficos de uso de datos por día y aplicación, desglose de la factura en lenguaje claro (sin jerga técnica), comparación del consumo del mes actual vs. el mes anterior, y alertas proactivas cuando el cliente está cerca de agotar su bono de datos.

**5. Flujo de reporte y seguimiento de averías**
Diseña el proceso completo: diagnóstico automático guiado (¿es un problema de señal, de router, del servicio?), geolocalización de la avería para identificar si es una incidencia masiva en la zona, seguimiento en tiempo real del estado de resolución y notificaciones push en cada cambio de estado.

**6. Accesibilidad y diseño inclusivo**
Define las adaptaciones necesarias para clientes mayores o con discapacidades: tamaños de fuente ajustables, navegación simplificada, compatibilidad con lectores de pantalla y opción de contacto telefónico siempre visible. Incluye las métricas de accesibilidad que deberían cumplirse (WCAG 2.1 AA).

Proporciona wireframes en formato descripción detallada para las 5 pantallas más importantes y define los KPIs de diseño que medirían el éxito de cada mejora: tasa de abandono, tiempo de resolución y satisfacción post-interacción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño de app de autogestión para clientes de operadora telco',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta de soluciones de conectividad empresarial con IA',
                'description'       => 'Domina las técnicas de venta consultiva para soluciones telco B2B: SD-WAN, conectividad multi-sede, IoT corporativo y servicios cloud, usando IA para cualificar oportunidades y personalizar propuestas.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de ventas senior especializado en soluciones de telecomunicaciones B2B, con experiencia en la venta de servicios de conectividad empresarial a grandes cuentas y pymes en proceso de transformación digital.

instrucción: Ayúdame a preparar una estrategia de venta consultiva para cerrar un contrato de conectividad empresarial multi-sede con una empresa de distribución logística que tiene 15 almacenes en distintas ciudades y está considerando migrar su infraestructura de red a SD-WAN.

Necesito que desarrolles los siguientes elementos:

**1. Cualificación inteligente de la oportunidad**
Define las preguntas de discovery más efectivas para entender la situación actual del cliente: arquitectura de red existente, proveedores actuales y nivel de satisfacción, principales dolores operativos (cortes de conectividad, latencia, coste), planes de crecimiento (nuevas sedes, incorporación de IoT), presupuesto disponible y proceso de toma de decisiones. Explica cómo usar IA para analizar las respuestas y predecir la probabilidad de cierre.

**2. Mapeo de stakeholders y estrategia de influencia**
Identifica los roles clave en una empresa logística: el CIO o responsable IT (interesado en fiabilidad y seguridad), el director de operaciones (interesado en continuidad del negocio), el director financiero (interesado en TCO y ROI) y el CEO (interesado en ventaja competitiva). Para cada uno, define los mensajes clave, los miedos típicos y las pruebas de valor más efectivas.

**3. Propuesta de valor diferencial por solución**
Desarrolla los argumentos de venta para cada solución del portfolio: SD-WAN para simplificar la gestión de múltiples sedes y reducir costes de WAN en un 30-40%, conectividad 5G para almacenes como backup de alta disponibilidad, soluciones IoT para trazabilidad de mercancía en tiempo real, y ciberseguridad integrada como servicio gestionado. Incluye casos de éxito de empresas logísticas similares.

**4. Cálculo del ROI y business case**
Crea un modelo de business case que cuantifique: ahorro en costes de conectividad actuales, reducción de pérdidas por cortes de red (coste por hora de inactividad en logística), mejora de eficiencia operativa por IoT, y reducción del coste de gestión IT. Define las métricas y el periodo de retorno de inversión para presentar al director financiero.

**5. Gestión de objeciones telco más frecuentes**
Prepara respuestas para las objeciones más comunes: "estamos contentos con nuestro proveedor actual", "el cambio de proveedor es muy disruptivo", "el presupuesto está congelado", "necesitamos tiempo para evaluar otras alternativas" y "no entendemos bien la diferencia entre SD-WAN y lo que tenemos ahora". Para cada objeción, define la técnica de manejo y el mensaje de transición.

**6. Plan de cierre y siguiente paso**
Define la secuencia de pasos para cerrar el contrato: demostración técnica en una sede piloto, propuesta económica escalonada, periodo de prueba con SLA garantizado y plan de migración sin riesgo. Incluye las señales de compra que indican el momento óptimo para pedir el cierre.

Incluye ejemplos de emails de seguimiento post-reunión y plantillas de propuesta adaptadas para decisores técnicos y financieros.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Cierre de contratos de conectividad empresarial SD-WAN multi-sede',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management para servicios de conectividad con IA',
                'description'       => 'Define y gestiona el roadmap de productos de telecomunicaciones usando IA para analizar el uso de red, identificar oportunidades de nuevos servicios y tomar decisiones de producto basadas en datos de comportamiento de clientes.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager senior especializado en el sector de telecomunicaciones, con experiencia en el desarrollo y lanzamiento de productos de conectividad, servicios digitales y plataformas para operadoras de telefonía e internet.

instrucción: Ayúdame a definir el roadmap de producto para el próximo año de una operadora regional que quiere lanzar nuevos servicios de valor añadido sobre su infraestructura de fibra y 5G, aprovechando la inteligencia artificial para identificar las oportunidades de mayor impacto.

Necesito que desarrolles los siguientes aspectos:

**1. Análisis de oportunidades de producto con IA**
Define cómo usar los datos de red y comportamiento de cliente para identificar nuevos servicios con demanda real: análisis de patrones de consumo para detectar segmentos no atendidos, análisis de las búsquedas y consultas al servicio de atención para identificar necesidades no cubiertas, y benchmarking competitivo automatizado con IA para monitorizar los lanzamientos de la competencia. Incluye el proceso de priorización de oportunidades usando un framework adaptado al sector telco.

**2. Diseño del roadmap por horizonte temporal**
Estructura el roadmap en tres horizontes: Horizonte 1 (0-6 meses) con mejoras de los productos actuales basadas en feedback de clientes, Horizonte 2 (6-18 meses) con nuevos servicios sobre la red existente (seguridad como servicio, servicios de cloud para pymes, gaming de baja latencia), y Horizonte 3 (18-36 meses) con apuestas estratégicas en edge computing, plataformas de IoT sectorial y servicios de IA para empresas.

**3. Definición de métricas de éxito de producto**
Define los KPIs para cada tipo de producto telco: para servicios de conectividad (tasa de adopción, ARPU, churn por servicio), para servicios de valor añadido (tasa de activación, uso mensual activo, NPS del servicio), y para plataformas B2B (número de APIs integradas, volumen de transacciones, tasa de renovación de contratos). Explica cómo monitorizar estas métricas en tiempo real con dashboards de IA.

**4. Proceso de discovery y validación de nuevos servicios**
Diseña el proceso de investigación de usuario para el sector telco: cómo analizar los datos de comportamiento de red para validar hipótesis sin necesidad de encuestas, cómo diseñar experimentos piloto con grupos de clientes seleccionados, y cómo interpretar los resultados para decidir si escalar o descartar un servicio.

**5. Estrategia de monetización y pricing**
Desarrolla modelos de monetización para los nuevos servicios: suscripción mensual con niveles de uso, pago por consumo para servicios de cloud y API, modelo freemium para servicios de seguridad básica con upselling a planes avanzados, y precios diferenciados para segmentos residencial, pyme y gran empresa.

**6. Colaboración con ingeniería y operaciones de red**
Define el proceso de trabajo entre el equipo de producto y los equipos técnicos de la operadora: cómo traducir las necesidades del cliente en requisitos técnicos de red, cómo gestionar las limitaciones de infraestructura como restricciones del roadmap, y cómo coordinar los lanzamientos con los ciclos de actualización de red.

Proporciona una plantilla de roadmap trimestral y ejemplos de casos de éxito de operadoras que han lanzado servicios de valor añadido exitosos sobre su infraestructura de red.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Definición del roadmap de nuevos servicios para operadora telco',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del talento en empresas de telecomunicaciones con IA',
                'description'       => 'Atrae, desarrolla y retiene el talento técnico especializado que necesitan las empresas telco para su transformación digital: ingenieros de red, especialistas en 5G, expertos en IA y perfiles de datos.',
                'prompt_content'    => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en el sector de telecomunicaciones, con experiencia en la gestión del talento técnico en operadoras y empresas de infraestructura de red en proceso de transformación digital.

instrucción: Ayúdame a diseñar una estrategia integral de gestión del talento para una operadora de telecomunicaciones mediana que necesita captar y retener perfiles técnicos especializados en 5G, IA aplicada a redes y ciberseguridad, en un mercado con alta escasez de estos perfiles.

Desarrolla los siguientes componentes:

**1. Mapa de perfiles críticos y análisis de brecha de talento**
Identifica los roles técnicos más difíciles de cubrir en el sector telco actual: ingenieros de redes 5G y core network, especialistas en IA y machine learning aplicado a telecomunicaciones, expertos en ciberseguridad de infraestructuras críticas, arquitectos de cloud y edge computing, y analistas de datos de red. Para cada perfil, define las competencias clave, la escasez en el mercado y las alternativas de cobertura (contratación externa, formación interna, externalización).

**2. Estrategia de employer branding para perfiles técnicos**
Diseña una propuesta de valor como empleador orientada a ingenieros y especialistas técnicos: proyectos con tecnología de vanguardia (5G, edge computing, IA), planes de formación y certificación técnica (AWS, Azure, Cisco, Nokia), flexibilidad laboral, salarios competitivos y modelo de carrera con progresión clara. Define los canales de atracción más efectivos para cada perfil (LinkedIn, comunidades técnicas, universidades, hackatones).

**3. Proceso de selección técnica con apoyo de IA**
Diseña un proceso de selección eficiente que use IA para: cribado inteligente de CVs con foco en competencias técnicas específicas, análisis de perfiles en GitHub y redes profesionales para identificar candidatos pasivos, evaluaciones técnicas automáticas adaptadas al nivel de cada posición, y reducción del sesgo en las entrevistas mediante guías estructuradas. Define los tiempos objetivo para cada fase del proceso.

**4. Plan de formación y reskilling para la transformación digital**
Desarrolla un programa de formación para convertir ingenieros de redes tradicionales en especialistas en redes virtualizadas y 5G: itinerarios de aprendizaje por perfil, plataformas de e-learning técnico, certificaciones prioritarias, proyectos de aprendizaje en entornos de laboratorio y mentoring interno. Define el tiempo y la inversión necesarios para cada itinerario.

**5. Retención de talento técnico crítico**
Diseña mecanismos de retención específicos para perfiles técnicos de alto valor: planes de carrera técnica (no solo gestión), participación en proyectos estratégicos, compensación variable ligada a hitos técnicos, acceso a conferencias y publicaciones del sector, y reconocimiento de la expertise técnica dentro de la organización. Incluye señales de alerta tempranas de fuga de talento crítico.

**6. Medición del ROI de la gestión del talento**
Define las métricas clave: tiempo de cobertura por posición técnica, coste de contratación por perfil, tasa de retención a 2 años de perfiles técnicos, porcentaje de posiciones cubiertas internamente vs. externamente, y NPS del empleado técnico. Explica cómo usar IA para predecir la rotación y actuar proactivamente.

Incluye un plan de acción para los primeros 90 días y recomendaciones sobre herramientas de HR tech específicas para el sector telco.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Atracción y retención de talento técnico especializado en telco',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis financiero del sector telecomunicaciones con IA',
                'description'       => 'Realiza análisis financieros profundos de operadoras de telecomunicaciones: valoración de infraestructura de red, análisis de inversiones en espectro 5G, modelización de EBITDA y evaluación del retorno de la transformación digital.',
                'prompt_content'    => <<<'EOT'
Actúa como un analista financiero senior especializado en el sector de telecomunicaciones, con experiencia en la valoración de operadoras, análisis de inversiones en infraestructura de red y modelización financiera de los nuevos modelos de negocio del sector.

instrucción: Ayúdame a construir un modelo financiero completo para evaluar la rentabilidad de una inversión en infraestructura 5G para una operadora regional que está decidiendo si desplegar su propia red o compartir infraestructura con otro operador.

Necesito los siguientes componentes del análisis:

**1. Estructura del modelo financiero telco**
Define los componentes del modelo: ingresos (ARPU por segmento, base de clientes proyectada, mix de servicios residencial/empresarial/IoT), costes de red (CAPEX de despliegue de antenas y equipos, OPEX de mantenimiento, costes de espectro y licencias), costes de adquisición de clientes (CAC por canal, comisiones de distribución) y costes de estructura. Explica las palancas financieras específicas del sector telco.

**2. Análisis del retorno de la inversión en 5G**
Modela los escenarios de ROI de la inversión en 5G considerando: coste total de despliegue por municipio y cobertura de población, curva de adopción de clientes 5G en los primeros 5 años, premium de ARPU que los clientes están dispuestos a pagar por 5G vs. 4G, nuevos flujos de ingresos habilitados por 5G (servicios empresariales de baja latencia, IoT masivo, edge computing). Calcula el punto de equilibrio y el VAN del proyecto.

**3. Comparativa financiera: red propia vs. compartida**
Analiza las dos opciones de despliegue: inversión en infraestructura propia (mayor control, mayor CAPEX, ventaja competitiva a largo plazo) vs. acuerdo de red compartida con otro operador (menor CAPEX, menor diferenciación, risk sharing). Cuantifica el impacto en P&L, balance y flujo de caja libre de cada opción en un horizonte de 10 años.

**4. Valoración de la operadora con el nuevo activo de red**
Aplica los métodos de valoración estándar en el sector telco: múltiplo EV/EBITDA (comparación con peers del sector europeo y latinoamericano), DCF con las proyecciones de flujo de caja libre, y valoración por activos de red (valor de reemplazo de la infraestructura y del espectro). Incluye el análisis de sensibilidad a las variables clave.

**5. Análisis de riesgos financieros**
Identifica y cuantifica los principales riesgos: riesgo de adopción más lenta de lo proyectada (impacto en ARPU y en el plazo de retorno), riesgo regulatorio (cambios en las condiciones de las licencias de espectro), riesgo competitivo (entrada de nuevos operadores virtuales), y riesgo de obsolescencia tecnológica. Define los escenarios pesimista, base y optimista.

**6. Optimización del balance y la estructura de capital**
Propón una estrategia de financiación de la inversión: combinación óptima de deuda y equity, posibilidad de monetización de infraestructura de torres (venta a towerco), emisión de bonos verdes para financiar infraestructura energéticamente eficiente, y gestión del ratio de apalancamiento durante el periodo de máxima inversión.

Proporciona las fórmulas clave de cada cálculo y las fuentes de datos de referencia para calibrar los supuestos del modelo (informes sectoriales, datos regulatorios de subasta de espectro, resultados de operadoras comparables).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Modelización financiera de inversiones en infraestructura 5G',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Compliance regulatorio en telecomunicaciones con IA',
                'description'       => 'Gestiona el cumplimiento normativo en el sector telco: regulación de telecomunicaciones, protección de datos de clientes, obligaciones de interconexión, neutralidad de red y regulación de espectro radioeléctrico con apoyo de IA.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especializado en derecho de las telecomunicaciones y regulación digital, con experiencia en el asesoramiento a operadoras de telecomunicaciones en materia de compliance regulatorio ante los organismos supervisores nacionales y europeos.

instrucción: Ayúdame a diseñar un sistema integral de compliance regulatorio para una operadora de telecomunicaciones que opera en varios países de la Unión Europea, considerando la complejidad normativa del sector y el impacto de la inteligencia artificial en la gestión del cumplimiento.

Desarrolla los siguientes componentes:

**1. Mapa regulatorio del sector telco en la UE**
Identifica las principales normativas que debe cumplir una operadora: el Código Europeo de Comunicaciones Electrónicas (Directiva 2018/1972), el Reglamento GDPR para el tratamiento de datos de clientes y metadatos de tráfico, la Directiva de Privacidad Electrónica (ePrivacy) para las comunicaciones electrónicas, el Reglamento de Ciberseguridad (ENISA) para la notificación de incidentes, y la regulación de neutralidad de red (Reglamento 2015/2120). Para cada normativa, define las obligaciones principales y las sanciones por incumplimiento.

**2. Sistema de monitorización de compliance con IA**
Diseña un sistema automatizado que use IA para: monitorizar los cambios normativos en tiempo real y alertar al equipo legal, analizar si los contratos con clientes y proveedores cumplen con los requisitos actualizados, revisar las comunicaciones comerciales para detectar posibles incumplimientos del código de conducta del sector, y generar informes de compliance para los reguladores nacionales.

**3. Protección de datos en el contexto telco**
Define el framework de protección de datos específico para operadoras: gestión de los metadatos de tráfico (duración de llamadas, números marcados, localización), obligaciones de conservación de datos para fines de seguridad nacional, derechos de los usuarios sobre sus datos de comunicaciones, y procedimiento de notificación de brechas de seguridad al regulador y a los afectados. Incluye las medidas técnicas y organizativas requeridas.

**4. Obligaciones de interconexión y acceso a red**
Explica las obligaciones regulatorias en materia de interconexión: acceso a la red del operador con poder significativo de mercado (PSM), tarifas de interconexión reguladas, obligaciones de portabilidad numérica y los plazos legales, y resolución de disputas entre operadores. Define el proceso de gestión de las relaciones con el regulador en estas materias.

**5. Gestión de incidentes de seguridad y notificación regulatoria**
Diseña el procedimiento de gestión de incidentes que cumple con las obligaciones telco: clasificación de incidentes por impacto en número de usuarios afectados y duración de la interrupción, umbrales de notificación obligatoria al regulador (CNMC en España, ARCEP en Francia), comunicación a usuarios afectados, y elaboración del informe post-incidente. Define los plazos legales en cada fase.

**6. Preparación de auditorías regulatorias**
Desarrolla un plan de preparación para las inspecciones regulatorias: documentación que debe estar siempre disponible, procedimiento de respuesta a requerimientos de información del regulador, gestión de las visitas de inspección, y estrategia de defensa ante expedientes sancionadores. Incluye una checklist de compliance por área regulatoria.

Proporciona modelos de documentos tipo (política de privacidad para servicios telco, protocolo de notificación de incidentes, modelo de acuerdo de interconexión) y recomendaciones sobre herramientas de legal tech para automatizar el seguimiento del compliance regulatorio.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Framework de compliance regulatorio para operadoras telco en la UE',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al cliente de alta calidad en telco con IA',
                'description'       => 'Transforma el servicio de atención al cliente de una operadora de telecomunicaciones usando IA para resolver incidencias más rápido, personalizar el soporte y reducir el esfuerzo del cliente en cada interacción.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en Customer Experience y operaciones de atención al cliente para el sector de telecomunicaciones, con experiencia en la transformación de contact centers de operadoras usando inteligencia artificial y automatización.

instrucción: Ayúdame a diseñar un modelo de atención al cliente de nueva generación para una operadora de telecomunicaciones que quiere pasar de un modelo reactivo y basado en llamadas telefónicas a un modelo proactivo, omnicanal y apoyado en IA.

Desarrolla los siguientes componentes:

**1. Diagnóstico del modelo actual y definición de la visión objetivo**
Define las métricas actuales típicas de un contact center telco (FCR, AHT, CSAT, NPS, coste por contacto) y los benchmarks del sector. Establece la visión objetivo: qué porcentaje de contactos deben resolverse en autoservicio, qué canales deben estar disponibles, cuál debe ser el tiempo máximo de espera por canal y qué nivel de personalización debe recibir cada cliente.

**2. Arquitectura de la atención omnicanal con IA**
Diseña la arquitectura de canales: chatbot de primera línea en app, web y WhatsApp para las consultas más frecuentes, IVR inteligente que entiende el lenguaje natural para el canal de voz, portal de autoservicio para gestión de cuenta y averías, y agente humano como escalada para casos complejos. Define las reglas de routing entre canales y los criterios de escalada al agente.

**3. Resolución proactiva de incidencias de red**
Diseña el proceso de proactividad: detección automática de averías de red que afectan a un grupo de clientes, generación de comunicaciones personalizadas antes de que el cliente llame (SMS, notificación push), actualización en tiempo real del estado de resolución, y compensación automática por tiempo de servicio no disponible. Calcula el impacto en la reducción del volumen de llamadas entrantes.

**4. Personalización del soporte basada en el historial del cliente**
Define cómo usar el historial completo del cliente para personalizar cada interacción: mostrar al agente (humano o virtual) el historial de incidencias, el producto contratado, el perfil de consumo y las interacciones previas antes de responder, adaptar el tono y el nivel técnico de la respuesta al perfil del cliente, y anticipar necesidades basadas en el comportamiento reciente (próxima factura, caducidad del contrato, alertas de consumo).

**5. Gestión eficiente de los momentos de verdad telco**
Diseña los flujos de resolución para las situaciones más críticas: avería total de servicio (internet o móvil), error en la factura, solicitud de baja o portabilidad a la competencia, y dispositivo defectuoso en garantía. Para cada situación, define el flujo de resolución óptimo, el tiempo máximo aceptable y las acciones de recuperación del cliente.

**6. Formación y apoyo al agente con IA**
Diseña el sistema de apoyo al agente humano: asistente de IA que sugiere respuestas en tiempo real durante la conversación, acceso instantáneo a la base de conocimiento técnico de la red, alertas sobre clientes en riesgo de churn durante la interacción, y guías de retención con ofertas pre-aprobadas que el agente puede ofrecer sin necesidad de escalar.

Incluye un plan de implementación por fases, las métricas de éxito de cada fase y estimaciones del ahorro de costes operativos que puede generar cada mejora. Define también cómo medir el impacto en la satisfacción del cliente y en la retención.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformación del contact center de una operadora telco con IA',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultoría freelance de transformación digital telco con IA',
                'description'       => 'Posiciónate como consultor freelance especializado en transformación digital para el sector de telecomunicaciones: define tu propuesta de valor, consigue clientes y entrega proyectos de alto impacto con apoyo de IA.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocio para consultores freelance especializados en tecnología y telecomunicaciones, con experiencia en ayudar a profesionales independientes a construir una práctica de consultoría exitosa en el sector telco.

instrucción: Ayúdame a construir una práctica de consultoría freelance especializada en transformación digital para el sector de telecomunicaciones. Quiero posicionarme como el consultor de referencia para operadoras regionales y empresas de infraestructura de red que necesitan modernizar sus operaciones con IA y tecnologías de nueva generación.

Desarrolla los siguientes aspectos de mi negocio:

**1. Definición del nicho y la propuesta de valor**
Ayúdame a definir mi especialización específica dentro del ecosistema telco: ¿debería enfocarme en la optimización de operaciones de red con IA, en la transformación de la experiencia de cliente de operadoras, en la estrategia de nuevos servicios sobre 5G, o en el compliance regulatorio y ciberseguridad? Para cada nicho, analiza el tamaño del mercado, la competencia, el ticket medio de proyecto y las barreras de entrada. Incluye el proceso para validar cuál encaja mejor con mi experiencia actual.

**2. Posicionamiento y construcción de autoridad en el sector**
Define mi estrategia de posicionamiento como experto en transformación digital telco: qué contenido debo publicar en LinkedIn para generar visibilidad entre directivos de operadoras, cómo participar en eventos y conferencias del sector (MWC, Telecoms World, foros nacionales de regulación), cómo construir un repositorio de casos de éxito y metodologías propias, y cómo usar IA para producir contenido técnico de alta calidad de forma eficiente.

**3. Estrategia de captación de clientes telco**
Diseña el sistema de generación de negocio: identificación de las operadoras y empresas de infraestructura con mayor potencial de proyecto (por tamaño, situación competitiva y madurez digital), proceso de prospección mediante warm outreach a través de contactos del sector, estrategia de participación en licitaciones y concursos públicos de consultoría, y construcción de una red de alianzas con integradores tecnológicos y fabricantes de equipos de red (Ericsson, Nokia, Huawei, Cisco).

**4. Diseño de la oferta de servicios y pricing**
Crea el portfolio de servicios con precios de referencia: diagnóstico de madurez digital (proyecto de 4-6 semanas), diseño de estrategia de transformación (proyecto de 3-6 meses), acompañamiento en implementación de soluciones de IA para la red (proyecto de 6-18 meses), y formación y capacitación interna de equipos (talleres y programas de varios meses). Define el modelo de tarificación (por día, por proyecto, por resultados) más adecuado para cada tipo de servicio.

**5. Entrega de proyectos con apoyo de IA**
Define cómo usar IA para entregar proyectos de mayor calidad en menos tiempo: uso de IA para el análisis de grandes volúmenes de datos operativos de red, generación automatizada de informes ejecutivos y presentaciones, investigación rápida de benchmarks y casos de éxito del sector, y automatización de las tareas de gestión de proyecto (seguimiento de hitos, comunicaciones con el cliente, generación de actas).

**6. Gestión financiera y crecimiento del negocio**
Diseña el modelo financiero de tu consultoría: objetivo de ingresos anuales, número de proyectos simultáneos que puedes gestionar como freelance, estrategia para pasar de consultor individual a micro-firma con asociados, políticas de cobro y gestión de tesorería en proyectos de larga duración, y inversión en formación y certificaciones que aumenten tu valor de mercado.

Incluye una hoja de ruta de los primeros 12 meses con los hitos principales: primeros clientes, primeros casos de éxito documentados, primeras apariciones públicas como experto y primeros ingresos objetivo por trimestre.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de práctica de consultoría freelance especializada en telco',
                'vote_score'        => 28,
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
