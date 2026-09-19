<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills617Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para análisis de propuesta de valor y posicionamiento en la cadena de valor',
                'description'      => 'Usa IA para analizar la posición de tu empresa en la cadena de valor del sector, identificar actividades diferenciadoras y comunicar tu propuesta de valor única frente a competidores y sustitutos.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing y posicionamiento competitivo con especialización en análisis de cadenas de valor y propuesta de valor diferenciada para empresas en sectores industriales y de servicios.

Tu objetivo es ayudarme a realizar un análisis profundo de la posición de mi empresa en la cadena de valor del sector, identificar las actividades que generan mayor valor para el cliente y construir una propuesta de valor comunicable y defendible.

Análisis de la cadena de valor del sector
Comienza con un mapeo completo del sector:
- Identificación de todos los eslabones de la cadena de valor: proveedores de materias primas, fabricantes, distribuidores, minoristas y consumidor final
- Análisis del poder de negociación en cada eslabón: quién captura más valor y por qué
- Identificación de los cuellos de botella y los puntos de mayor rentabilidad en la cadena
- Tendencias de integración vertical y horizontal en el sector: quién está comprando a quién y por qué
- Impacto de la digitalización en la estructura de la cadena: desintermediación y nuevos modelos de negocio

Posicionamiento de mi empresa en la cadena de valor
Analiza la posición actual y la deseada:
- Mapa de actividades de valor que realiza mi empresa: primarias (producción, logística, ventas, servicio) y de apoyo (infraestructura, RRHH, tecnología, aprovisionamiento)
- Análisis de las actividades que generan ventaja competitiva real frente a las que son parity o por debajo del mercado
- Evaluación del grado de integración vertical actual y comparación con competidores
- Identificación de las actividades candidatas a externalización sin pérdida de diferenciación
- Análisis de las actividades de valor donde mi empresa es genuinamente superior

Análisis make or buy desde la perspectiva de la propuesta de valor
Conecta las decisiones operativas con el posicionamiento:
- Framework para decidir qué actividades deben mantenerse internamente por su impacto en la diferenciación
- Cómo la externalización de actividades no diferenciadoras libera recursos para las que sí lo son
- Riesgo de externalizar actividades que parecen commodity pero son fuente oculta de ventaja
- Casos de empresas que perdieron diferenciación por externalizar en exceso
- Cómo comunicar las decisiones de externalización a clientes que valoran la integración

Construcción de la propuesta de valor diferenciada
Desarrolla la comunicación de valor:
- Identificación de los trabajos-por-hacer (jobs to be done) más importantes para tu cliente objetivo
- Cómo las actividades de valor de tu empresa resuelven esos trabajos mejor que la competencia
- Cuantificación del valor: cómo expresar el beneficio en términos económicos o de resultados para el cliente
- Propuesta de valor para diferentes segmentos de cliente en la misma cadena
- Materiales de comunicación: presentación comercial, casos de éxito, argumentarios de venta

Estrategia de posicionamiento en la cadena
Define la dirección estratégica:
- Análisis de los movimientos estratégicos posibles: integración hacia arriba, hacia abajo, o focalización
- Evaluación de alianzas estratégicas como alternativa a la integración o la externalización
- Desarrollo de plataformas que conecten múltiples eslabones de la cadena y capturen más valor
- Construcción de barreras de entrada en el posicionamiento elegido
- Métricas de seguimiento de la posición competitiva en la cadena

Genera un análisis de la cadena de valor para el sector de [INDICAR SECTOR], con identificación de las tres actividades donde mi empresa debería concentrar sus recursos de marketing y comunicación para maximizar la percepción de valor diferenciado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar la cadena de valor del sector para construir una propuesta de valor diferenciada y comunicable',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para decisiones make or buy en desarrollo de software y tecnología',
                'description'      => 'Aplica un framework riguroso de análisis make or buy para decisiones tecnológicas: desarrollar internamente vs. comprar soluciones SaaS vs. externalizar el desarrollo, con análisis de coste total, riesgo y alineación estratégica.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de soluciones y CTO fractional con amplia experiencia en decisiones estratégicas de tecnología para empresas en crecimiento, incluyendo análisis profundos de build vs. buy vs. partner en entornos de recursos limitados.

Tu objetivo es ayudarme a tomar decisiones fundamentadas sobre si construir capacidades tecnológicas internamente, comprar soluciones del mercado o externalizar el desarrollo, aplicando un análisis estructurado que va más allá del simple cálculo de costes.

Framework de decisión make or buy en tecnología
Establece el proceso de análisis:

Dimensión 1 — Diferenciación estratégica:
- ¿Es esta capacidad tecnológica fuente de ventaja competitiva real o es commodity en el sector?
- Si lo desarrollamos internamente, ¿crea una barrera de entrada que los competidores no pueden copiar fácilmente?
- ¿El tiempo y recursos invertidos en construir esta capacidad son mejores empleados en nuestra área de diferenciación?
- Ejemplos de tecnologías que parecen commodity pero son ventaja oculta vs. las que claramente son commodity

Dimensión 2 — Coste total de propiedad (TCO):
- Coste de desarrollo interno: ingeniería, producto, QA, infraestructura, tiempo de salida al mercado
- Coste de mantenimiento y evolución: deuda técnica, actualizaciones de seguridad, nuevas funcionalidades
- Coste de la solución comprada: licencias, implementación, personalización, formación, soporte
- Coste oculto del SaaS: lock-in, migraciones futuras, limitaciones de integración, dependencia del proveedor
- Coste del outsourcing: coordinación, transferencia de conocimiento, riesgo de calidad, dependencia externa

Dimensión 3 — Análisis de riesgo tecnológico:
- Riesgo de desarrollar internamente: retraso, costes adicionales, calidad insuficiente, rotación del equipo clave
- Riesgo del proveedor externo: discontinuidad del producto, cambios de precio, adquisición por competidor
- Riesgo del outsourcing: pérdida de conocimiento interno, dependencia de un solo proveedor
- Matriz de riesgo con probabilidad e impacto para cada opción

Dimensión 4 — Capacidades internas y cultura:
- ¿Tenemos o podemos contratar el talento necesario para desarrollar y mantener esto?
- ¿Nuestro proceso de desarrollo es maduro para asumir este tipo de proyecto?
- ¿La organización tiene la cultura y disciplina para mantener el software a largo plazo?
- ¿Queremos convertirnos en una empresa de software o usar el software como herramienta?

Casos de uso típicos en startups y scale-ups
Analiza decisiones frecuentes con el framework:
- Autenticación y gestión de usuarios: build vs. Auth0/Cognito/Clerk
- Pasarela de pagos: Stripe/Braintree vs. solución propia en sectores regulados
- Sistema de notificaciones: Sendgrid/Twilio vs. infraestructura propia
- Motor de búsqueda: Elasticsearch vs. Algolia vs. búsqueda del propio DB
- Infraestructura de datos y analytics: Snowflake/BigQuery vs. solución propia
- CRM y automatización de marketing: Salesforce/HubSpot vs. desarrollo a medida

Proceso de evaluación estructurado
Define los pasos para tomar la decisión:
- Cómo documentar los requisitos funcionales y no funcionales de forma que permita comparar opciones
- Proceso de evaluación de proveedores: RFI, demos, prueba de concepto, referencias
- Cómo involucrar a los stakeholders correctos en la decisión y gestionar sus sesgos
- Modelo de gobernanza para revisitar decisiones make or buy conforme evoluciona el negocio
- Criterios de salida: cuándo una decisión make or buy debe revisarse y potencialmente revertirse

Genera un análisis make or buy completo para [INDICAR CAPACIDAD TECNOLÓGICA ESPECÍFICA], con la empresa en etapa de [INDICAR ETAPA: MVP/crecimiento/escala] y un equipo de desarrollo de [INDICAR TAMAÑO] personas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Tomar decisiones fundamentadas sobre build vs. buy vs. outsource para capacidades tecnológicas',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para análisis de cadena de valor en procesos de diseño y producción creativa',
                'description'      => 'Optimiza la cadena de valor de un departamento o agencia de diseño identificando actividades que agregan valor real, eliminando desperdicios y decidiendo qué tareas externalizar sin perder el control creativo.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de operaciones creativas y director de diseño con amplia experiencia optimizando departamentos de diseño y agencias creativas, aplicando principios lean y de gestión de valor al proceso creativo.

Tu objetivo es ayudarme a mapear y optimizar la cadena de valor de mi proceso de diseño y producción creativa, identificando actividades que generan valor real para el cliente y aquellas que pueden eliminarse, automatizarse o externalizarse.

Mapeo del valor en el proceso de diseño
Analiza el flujo de trabajo desde la perspectiva del valor:

Actividades de alto valor (mantener y potenciar):
- Investigación y empatía con el usuario: entrevistas, tests de usabilidad, análisis de comportamiento
- Estrategia creativa y conceptualización: donde nace la diferenciación
- Dirección de arte y decisiones creativas clave
- Prototipado rápido e iteración con feedback del cliente
- Revisión de calidad creativa y coherencia de marca

Actividades de valor medio (optimizar o automatizar):
- Producción de assets a partir de diseños aprobados
- Adaptación de formatos a múltiples plataformas y resoluciones
- Documentación de sistemas de diseño y guías de estilo
- Gestión de archivos y organización del repositorio creativo

Actividades de bajo valor (candidatas a externalización o eliminación):
- Tareas de producción repetitivas y sin decisión creativa
- Transcripción y procesamiento de documentos de briefing
- Generación de variaciones simples con reglas predefinidas
- Exportación y preparación de archivos para entrega

Análisis make or buy en diseño
Aplica el framework a decisiones específicas del área:

Qué mantener internamente (make):
- Conceptualización y dirección creativa que define la identidad de marca
- Diseño de experiencia de usuario en los flujos críticos del producto
- Supervisión de la coherencia y calidad del sistema de diseño
- Relación directa con el cliente en los momentos de decisión clave

Qué comprar (buy — herramientas y recursos):
- Librerías de componentes UI: Figma, Material Design, Radix UI vs. construcción desde cero
- Fotografía e ilustración stock vs. producción propia para cada pieza
- Iconografía: Font Awesome, Phosphor vs. iconos personalizados
- Plantillas y sistemas de diseño existentes como punto de partida

Qué externalizar (outsource):
- Producción de piezas con briefing cerrado: banners, adaptaciones, presentaciones
- Animaciones y motion graphics para proyectos puntuales
- Ilustración especializada fuera del estilo habitual del equipo
- Fotografía y video cuando no es el core del negocio

Optimización del flujo creativo con IA
Integra herramientas de IA en la cadena de valor:
- IA para la exploración rápida de conceptos en la fase de ideación
- Generación de variaciones visuales para acelerar la validación con el cliente
- Automatización del redimensionado y adaptación de formatos con IA
- Análisis de rendimiento de creatividades para informar decisiones de diseño futuras
- Generación de copy y textos de ejemplo para acelerar el diseño de interfaces

Métricas de eficiencia del proceso creativo
Define indicadores de rendimiento:
- Tiempo de ciclo: desde el briefing hasta la entrega del diseño aprobado
- Tasa de revisión: número medio de rondas de cambios por proyecto
- Utilización del equipo: porcentaje de tiempo en actividades de alto valor vs. producción
- Satisfacción del cliente: NPS interno y calificación de los entregables
- Velocidad de entrega: capacidad de producción por diseñador y mes

Diseña un mapa de valor para un equipo de diseño de [INDICAR TAMAÑO] personas en una [INDICAR TIPO: agencia/departamento interno/estudio freelance] que trabaja principalmente en proyectos de [INDICAR TIPO: branding/UX/digital/impresión/motion].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar la cadena de valor de un proceso de diseño identificando qué hacer internamente y qué externalizar',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para análisis de valor percibido y estrategia de pricing en la cadena de valor',
                'description'      => 'Diseña una estrategia de pricing basada en el valor que captura la posición de tu empresa en la cadena de valor, con análisis de elasticidad, segmentación de clientes y gestión de negociaciones complejas.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de estrategia de ventas y pricing con especialización en modelos de valor percibido para empresas B2B y B2B2C que operan en cadenas de valor complejas con múltiples eslabones entre el productor y el consumidor final.

Tu objetivo es ayudarme a desarrollar una estrategia de pricing que refleje el valor real que mi empresa aporta en la cadena de valor, supere la presión hacia la comoditización y maximice el margen capturado en cada eslabón.

Comprensión del valor en la cadena
Analiza dónde y cómo se crea y captura valor:
- Mapeo de cómo mi producto o servicio crea valor en cada eslabón de la cadena
- Cuantificación del valor económico para el cliente directo (distribuidor, minorista, empresa)
- Estimación del valor para el cliente final aunque no sea mi cliente directo
- Análisis de qué parte del valor total generado captura actualmente mi empresa
- Benchmarking de la captura de valor de competidores directos e indirectos

Estrategia de pricing basada en valor
Desarrolla un modelo de precios orientado al valor:
- Cálculo del valor económico para el cliente (EVC): valor de referencia + valor diferencial
- Cómo cuantificar beneficios intangibles: reducción de riesgo, mejora de reputación, velocidad
- Construcción del business case para el cliente: ROI, payback period, TCO comparativo
- Estrategia de precio ancla: cómo usar el precio de la alternativa más cara como referencia
- Segmentación de precios por perfil de cliente según su capacidad de capturar el valor que aporto

Análisis de la cadena de valor para negociaciones
Prepara el argumentario de ventas para cada eslabón:
- Argumentos de valor para el distribuidor: márgenes, rotación, diferenciación de portfolio
- Argumentos de valor para el minorista o integrador: conversión, ticket medio, satisfacción del cliente final
- Argumentos de valor para la empresa cliente: eficiencia operativa, reducción de costes, crecimiento
- Cómo responder a la presión de precio sin abandonar el posicionamiento de valor
- Estrategia de trading down: alternativas más económicas que protegen la relación sin canibalizar

Estructura de precios para la cadena de valor
Diseña el modelo de precios multi-eslabón:
- Política de precios sugeridos de venta al público y márgenes para cada eslabón
- Estructura de descuentos: por volumen, por anticipación de pago, por exclusividad
- Programas de protección de precios y gestión de la guerra de precios en el canal
- Análisis de precios grises y paralelos: cómo detectarlos y gestionarlos
- Contratos de precio y condiciones de revisión para clientes de largo plazo

Herramientas de análisis y seguimiento de precios con IA
Implementa sistemas de inteligencia de precios:
- Monitorización de precios de competidores en tiempo real con herramientas de IA
- Análisis de la elasticidad precio-demanda por segmento de cliente
- Detección de oportunidades de subida de precio sin riesgo de pérdida de cuota
- Predicción de reacciones competitivas ante cambios de precio
- Dashboard de márgenes por línea de producto, canal y segmento de cliente

Genera una estrategia de pricing basada en valor para una empresa que vende [INDICAR PRODUCTO O SERVICIO] a través de [INDICAR CANAL: distribuidores/directamente a empresas/mixto] en el sector de [INDICAR SECTOR], con un precio actual de [INDICAR PRECIO ACTUAL] y un margen bruto de [INDICAR MARGEN].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollar una estrategia de pricing basada en valor que capture la posición diferenciada en la cadena de valor',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestión de cadena de valor en producto digital y decisiones build vs. buy',
                'description'      => 'Aplica el análisis de cadena de valor a la gestión de productos digitales para identificar capacidades core que deben desarrollarse internamente, funcionalidades que pueden comprarse y componentes candidatos a outsourcing.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product con amplia experiencia en la construcción de productos digitales, con especialización en decisiones estratégicas de build vs. buy vs. partner y en la optimización de la cadena de valor de productos digitales B2B y B2C.

Tu objetivo es ayudarme a aplicar un análisis de cadena de valor al desarrollo de mi producto digital, tomando decisiones fundamentadas sobre qué capacidades construir internamente, qué comprar en el mercado y qué delegar en socios tecnológicos o de negocio.

Análisis de la cadena de valor del producto digital
Mapea las capacidades de tu producto:

Nivel 1 — Actividades primarias del producto:
- Adquisición de usuarios: SEO, SEM, redes sociales, referencias, integrations marketplace
- Activación: onboarding, configuración inicial, primeros pasos del usuario
- Retención: notificaciones, contenido, hábitos de uso, actualizaciones de valor
- Monetización: suscripción, freemium, transaccional, publicidad, datos
- Referencia: mecanismos virales, affiliate, partnerships, marketplace de aplicaciones

Nivel 2 — Capacidades tecnológicas de soporte:
- Infraestructura y hosting: AWS/GCP/Azure vs. servidores propios
- Autenticación e identidad de usuarios
- Sistema de pagos y facturación
- Comunicaciones: email, push, SMS, in-app messaging
- Analytics y business intelligence
- Customer support y herramientas de atención

Clasificación de capacidades por diferenciación
Aplica el framework de decisión:

Capacidades core (siempre make):
- El motor de valor central del producto: el algoritmo, la lógica de negocio única, la experiencia diferenciadora
- Datos propietarios y modelos de IA entrenados sobre esos datos
- Flujos de usuario en los momentos de mayor impacto en retención y conversión
- Capacidades donde tu equipo tiene o puede construir ventaja competitiva

Capacidades importantes pero no diferenciadas (analizar caso a caso):
- Herramientas de productividad para el usuario: colaboración, exportación, integración con terceros
- Panel de administración y configuración
- Sistema de reportes y dashboards para el cliente
- Gestión de equipos y permisos

Capacidades commodity (generalmente buy o outsource):
- Infraestructura cloud: usar servicios gestionados en lugar de servidores propios
- Autenticación: delegarla a Auth0, Cognito o Supabase Auth
- Pagos: Stripe o Paddle en lugar de integración bancaria directa
- Email transaccional: Sendgrid, Postmark, Resend
- Análisis de producto: Mixpanel, Amplitude, PostHog

Proceso de evaluación de decisiones make or buy en producto
Define el método de análisis:
- Cómo documentar requisitos que permitan evaluar soluciones de mercado vs. desarrollo propio
- Criterios de evaluación de soluciones SaaS: cobertura funcional, precio, integración, vendor risk
- Cómo calcular el coste real de oportunidad de construir algo internamente
- El impacto en la velocidad de iteración del producto: ¿qué opción nos permite aprender más rápido?
- Gobernanza de las decisiones: quién decide y cómo se documenta para futuras revisiones

Gestión de dependencias y riesgo de vendor lock-in
Crea una estrategia de dependencias saludable:
- Cómo diseñar capas de abstracción que faciliten el cambio de proveedor en el futuro
- Criterios para aceptar mayor lock-in a cambio de mayor velocidad de desarrollo
- Análisis de la concentración de dependencias: qué pasa si un proveedor clave desaparece o sube precios
- Plan de contingencia para las dependencias críticas del producto
- Cuándo la multi-proveedor compensa el coste de complejidad adicional

Genera un análisis de la cadena de valor para un producto digital de tipo [INDICAR TIPO: SaaS B2B/marketplace/app de consumo/plataforma] en etapa de [INDICAR ETAPA: pre-product market fit/crecimiento/madurez] con [INDICAR RECURSOS DE DESARROLLO: tamaño del equipo o presupuesto disponible].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Aplicar análisis de cadena de valor para tomar mejores decisiones de build vs. buy en producto digital',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para decisiones make or buy en talento: insourcing vs. outsourcing de RRHH',
                'description'      => 'Analiza qué funciones de RRHH y gestión del talento deben mantenerse internamente y cuáles pueden externalizarse con un framework que considera coste, calidad, riesgo de confidencialidad y alineación cultural.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos estratégico y consultor de organizaciones con amplia experiencia en la transformación de modelos operativos de RRHH y en decisiones de externalización de servicios de gestión de personas.

Tu objetivo es ayudarme a construir un modelo de RRHH optimizado que mantenga internamente las funciones que generan ventaja competitiva en la gestión del talento y externalice de forma inteligente las que pueden realizarse con mayor calidad o eficiencia por proveedores especializados.

Análisis de la cadena de valor de RRHH
Mapea las funciones del área de gestión de personas:

Funciones de alto valor estratégico (candidatas a make/internalize):
- Cultura organizacional: definición, transmisión y gestión del fit cultural
- Planificación estratégica de plantilla y gestión de la fuerza laboral futura
- Desarrollo del liderazgo y planes de sucesión para posiciones clave
- Gestión del desempeño y sistemas de objetivos alineados con la estrategia
- Employer branding y gestión de la reputación como empleador
- Compensación ejecutiva y diseño de incentivos de largo plazo

Funciones de valor operativo (analizar caso a caso):
- Selección y reclutamiento: ¿recruiter interno vs. agencia vs. plataformas de selección?
- Formación y desarrollo: ¿equipo interno de L&D vs. proveedores externos vs. plataformas e-learning?
- Administración de nómina: ¿gestoría vs. software de nómina vs. outsourcing completo?
- Relaciones laborales y gestión de conflictos: ¿asesoría laboral interna vs. externa?
- Bienestar y beneficios: ¿gestión interna vs. plataforma de beneficios flexible?

Funciones de bajo valor diferencial (candidatas a buy/outsource):
- Administración de contratos y documentación laboral
- Gestión de Seguridad Social y obligaciones fiscales de nómina
- Prevención de riesgos laborales (en muchos casos)
- Gestión de IT y accesos para los nuevos incorporados

Framework de análisis make or buy en talento
Evalúa cada función con criterios específicos de RRHH:

Criterio 1 — Confidencialidad y sensibilidad de datos:
- ¿Qué información personal y estratégica se comparte con el proveedor?
- ¿Cuáles son los riesgos de una brecha de confidencialidad en esta función?
- ¿La función externalizada implica acceso a datos sobre retribución ejecutiva o planes de reorganización?

Criterio 2 — Impacto en la experiencia del empleado:
- ¿El empleado nota diferencia entre que esta función sea interna o externa?
- ¿La externalización puede generar percepción de deshumanización o burocracia?
- ¿La calidad del servicio externo es superior o inferior a lo que podemos ofrecer internamente?

Criterio 3 — Alineación cultural y valores:
- ¿La función externalizada requiere transmitir los valores y la cultura de la empresa?
- ¿Un proveedor externo puede representar adecuadamente nuestra forma de hacer las cosas?
- ¿Hay riesgo de dilución de cultura si esta función no está controlada internamente?

Criterio 4 — Economía de escala y coste:
- ¿El volumen de actividad justifica tener un especialista interno?
- ¿El proveedor externo tiene economías de escala que le permiten ofrecer mejor servicio a menor coste?
- Coste total de la función internalizada vs. externalizada (incluyendo coordinación y supervisión)

Modelos de externalización en RRHH
Evalúa las modalidades disponibles:
- Outsourcing total de RRHH (PEO - Professional Employer Organization): cuándo tiene sentido
- Outsourcing selectivo de procesos: nómina, selección, formación por separado
- Co-sourcing: equipo interno que gestiona proveedores especializados para tareas específicas
- Plataformas de HR Tech como sustituto del proveedor humano: análisis de las mejores soluciones
- Freelancers de RRHH: HR fractional, recruiter freelance, coach externo

Gestión de proveedores de RRHH externalizados
Define el modelo de gobierno:
- Criterios de selección de proveedor: especialización, referencias, metodología, precio
- Contrato de nivel de servicio (SLA): indicadores, penalizaciones y mecanismos de revisión
- Proceso de onboarding del proveedor: transmisión de cultura y valores de la empresa
- Modelo de supervisión sin microgestión: cómo mantener el control sin perder los beneficios de la externalización
- Plan de contingencia y transición si el proveedor no cumple las expectativas

Genera una recomendación de modelo operativo de RRHH para una empresa de [INDICAR SECTOR] con [INDICAR NÚMERO] empleados en fase de [INDICAR MOMENTO: arranque/crecimiento rápido/madurez/reestructuración].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Decidir qué funciones de RRHH mantener internamente y cuáles externalizar para optimizar coste y calidad',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para análisis financiero de decisiones make or buy y optimización de la cadena de valor',
                'description'      => 'Construye modelos financieros rigurosos para evaluar decisiones make or buy: análisis de coste total de propiedad, VAN de cada alternativa, análisis de sensibilidad y umbrales de rentabilidad que fundamenten la decisión.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero y analista de decisiones de inversión con especialización en la evaluación cuantitativa de decisiones estratégicas de make or buy y en la construcción de cadenas de valor eficientes desde la perspectiva financiera.

Tu objetivo es ayudarme a construir un modelo financiero completo que soporte decisiones de make or buy con rigor cuantitativo, análisis de sensibilidad y consideración de los riesgos financieros de cada alternativa.

Estructura del modelo financiero make or buy
Diseña el marco analítico completo:

Bloque 1 — Identificación y cuantificación de costes:

Costes de la opción "make" (desarrollar o producir internamente):
- Inversión inicial: CAPEX (equipamiento, instalaciones, tecnología, licencias)
- Costes operativos directos: materias primas, mano de obra directa, energía, mantenimiento
- Costes indirectos asignados: overhead de producción, gestión, control de calidad
- Costes de oportunidad: qué dejamos de hacer por dedicar recursos a esta actividad
- Costes de aprendizaje y curva de experiencia: ineficiencias en los primeros periodos
- Costes de salida si en el futuro decidimos externalizar: liquidación, formación del proveedor

Costes de la opción "buy" (externalizar o comprar):
- Precio del contrato o coste de la solución SaaS/producto
- Costes de integración y adaptación al contexto propio
- Costes de coordinación y gestión del proveedor: tiempo interno dedicado
- Escalado: cómo evoluciona el coste con el volumen
- Penalizaciones y costes de salida si el proveedor no cumple
- Prima por dependencia: el proveedor puede subir precios una vez que estamos bloqueados

Bloque 2 — Análisis de valor actual neto (VAN)
Compara las alternativas en valor presente:
- Proyección de flujos de caja para un horizonte de 3-7 años por cada alternativa
- Tasa de descuento apropiada: WACC de la empresa, ajustada por riesgo de cada opción
- VAN de cada alternativa y análisis de la diferencia
- Punto de equilibrio temporal: ¿en qué año el make supera al buy en valor acumulado?
- Valor terminal si la actividad continúa más allá del horizonte de análisis

Bloque 3 — Análisis de sensibilidad y escenarios
Evalúa la robustez de la decisión:
- Variables críticas: qué inputs, si cambian, cambian la recomendación
- Análisis de escenario optimista, base y pesimista para cada alternativa
- Análisis Monte Carlo simplificado: distribución de probabilidad del VAN de cada opción
- Tornado chart: qué variable tiene mayor impacto en el resultado
- Umbral de decisión: a partir de qué volumen el make es mejor que el buy

Bloque 4 — Análisis de riesgo financiero
Cuantifica los riesgos de cada alternativa:
- Riesgo operativo: probabilidad y coste de fallos en la cadena propia vs. en el proveedor
- Riesgo de demanda: cómo afectan las fluctuaciones de volumen a la rentabilidad de cada opción
- Riesgo de precio: exposición a inflación de costes en la opción make vs. revisiones de precio en buy
- Riesgo de obsolescencia tecnológica: quién carga con el riesgo de que la tecnología cambie
- Riesgo de concentración: dependencia de un solo proveedor o de un equipo interno clave

Bloque 5 — Impacto en los estados financieros
Analiza el efecto contable y fiscal:
- Impacto en balance: activos vs. gastos operativos (CAPEX vs. OPEX)
- Efecto en EBITDA y EBIT de cada alternativa
- Implicaciones fiscales: amortización del CAPEX vs. gasto corriente
- Impacto en métricas financieras clave: ROE, ROCE, márgenes, ratio de endeudamiento
- Presentación de cada alternativa a la junta y a inversores

Construye el modelo financiero para evaluar la decisión de [INDICAR ACTIVIDAD CONCRETA: producción interna vs. outsourcing / desarrollo propio vs. SaaS] para una empresa de [INDICAR SECTOR] con una facturación de [INDICAR FACTURACIÓN] y un volumen de actividad esperado de [INDICAR VOLUMEN].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir modelos financieros rigurosos con VAN, sensibilidad y análisis de riesgo para decisiones make or buy',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para contratos y marcos legales en decisiones de outsourcing y cadena de valor',
                'description'      => 'Diseña el marco contractual y de compliance para decisiones de outsourcing y gestión de la cadena de valor: contratos de servicio, SLAs, cláusulas de confidencialidad, propiedad intelectual y gestión de riesgos legales.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado de empresa y consultor de contratos mercantiles con especialización en acuerdos de outsourcing, contratos de suministro en cadenas de valor complejas y marcos legales para relaciones entre empresas en la economía digital.

Tu objetivo es ayudarme a construir el marco contractual y legal que proteja adecuadamente a mi empresa en las relaciones con proveedores, subcontratistas y socios de la cadena de valor, independientemente de si estoy externalizando o siendo el proveedor externalizado.

Marco legal de las decisiones de outsourcing
Establece los fundamentos jurídicos:
- Tipología de contratos aplicables: contrato de prestación de servicios, arrendamiento de obra, acuerdo de nivel de servicio, contrato de suministro
- Diferencia legal entre empleado, trabajador autónomo dependiente (TRADE) y proveedor independiente: riesgos de la relaboralización
- Responsabilidad solidaria en la cadena de subcontratación: artículo 42 del Estatuto de los Trabajadores
- Marco de la Ley de Cadena Alimentaria y legislación sectorial de abuso en la cadena de suministro
- Regulación europea de diligencia debida en la cadena de valor (Corporate Sustainability Due Diligence Directive)

Elementos esenciales del contrato de outsourcing
Diseña contratos completos y equilibrados:

Definición del alcance y los entregables:
- Descripción precisa de los servicios o productos objeto del contrato
- Cómo definir los estándares de calidad de forma objetiva y medible
- Gestión del alcance: procedimiento formal para solicitar cambios y aprobarlos
- Exclusividad territorial o funcional: cuándo incluirla y sus implicaciones

Acuerdo de nivel de servicio (SLA):
- Métricas de rendimiento: disponibilidad, tiempo de respuesta, tasa de error, calidad
- Penalizaciones económicas por incumplimiento de SLA (service credits)
- Mecanismos de escalado ante problemas graves o reiterados
- Revisión periódica del SLA y proceso de renegociación

Propiedad intelectual y datos:
- A quién pertenece la propiedad intelectual generada durante la prestación del servicio
- Cómo gestionar las mejoras y desarrollos sobre propiedad intelectual preexistente de cada parte
- Cesión de derechos de uso vs. licencia: cuándo usar cada figura
- Propiedad y uso de los datos generados durante la relación contractual
- Derechos del proveedor sobre el know-how adquirido durante la relación

Confidencialidad y no competencia:
- Alcance del deber de confidencialidad durante y después del contrato
- Duración razonable de la cláusula de confidencialidad post-contractual
- Cláusula de no solicitar empleados (non-solicitation): cuando procede
- Cláusula de no competencia post-contractual: requisitos de validez en España
- Medidas técnicas y organizativas para garantizar la confidencialidad

Continuidad del negocio y salida del contrato:
- Periodo de preaviso mínimo para la terminación del contrato
- Obligaciones del proveedor durante el periodo de transición a otro proveedor
- Cláusula de escrow para software o activos críticos
- Gestión de la devolución o destrucción de datos e información confidencial
- Condiciones y consecuencias de la terminación por incumplimiento

Responsabilidad y gestión de riesgos legales
Asigna responsabilidades de forma equilibrada:
- Limitación de responsabilidad: cómo fijar el tope máximo de indemnización
- Seguros obligatorios del proveedor: responsabilidad civil, ciberriesgo
- Indemnización por infracción de propiedad intelectual de terceros
- Responsabilidad por brechas de seguridad y protección de datos (RGPD)
- Gestión de subcontratistas del proveedor: flow-down de obligaciones

Compliance y due diligence en la cadena de valor
Extiende el cumplimiento normativo a los proveedores:
- Cláusulas de auditoría: el derecho a verificar el cumplimiento del proveedor
- Código de conducta de proveedores: qué exigencias éticas, laborales y medioambientales incluir
- Obligaciones de compliance anticorrupción (Ley 10/2010, FCPA si aplica)
- Requisitos de protección de datos para proveedores que acceden a datos personales (RGPD)

Nota: esta información tiene carácter orientativo y no sustituye al asesoramiento legal específico. Adapta siempre los contratos con la revisión de un abogado especializado en tu jurisdicción.

Genera un índice de cláusulas prioritarias para un contrato de [INDICAR TIPO DE OUTSOURCING: desarrollo de software/fabricación/servicios de RRHH/logística] entre una empresa de [INDICAR SECTOR] y un proveedor [INDICAR PERFIL: autónomo/empresa pequeña/gran corporación].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el marco contractual y legal para proteger a la empresa en relaciones de outsourcing y cadena de valor',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para analizar si externalizar el servicio de atención al cliente o gestionarlo internamente',
                'description'      => 'Evalúa con criterio estratégico y financiero si externalizar el servicio de atención al cliente, qué funciones pueden ir al outsourcing y cómo mantener la calidad y la satisfacción del cliente en cualquier modelo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Experience con amplia experiencia diseñando y optimizando modelos operativos de atención al cliente, incluyendo decisiones de insourcing y outsourcing de servicios de soporte en empresas de distintos tamaños y sectores.

Tu objetivo es ayudarme a analizar con rigor si externalizar mi servicio de atención al cliente es la decisión correcta, qué funciones podrían externalizarse sin dañar la experiencia del cliente y cómo estructurar el modelo mixto si es lo más adecuado.

Análisis de la posición estratégica del servicio al cliente
Comienza evaluando el rol del CS en tu negocio:
- ¿Es el servicio al cliente una ventaja competitiva diferenciadora o es un coste que hay que optimizar?
- ¿Qué porcentaje de la retención y el crecimiento depende directamente de la calidad del soporte?
- ¿Los clientes eligen tu empresa en parte por la calidad del servicio, o el producto es suficiente?
- ¿Cuánta información estratégica fluye a través del servicio al cliente que el negocio necesita escuchar?
- ¿Cómo posicionas el servicio en tu propuesta de valor: como commodity o como elemento premium?

Framework de decisión: qué externalizar y qué no
Clasifica las funciones de CS según su candidatura al outsourcing:

Funciones con alto riesgo de externalizar (mantener internamente):
- Gestión de cuentas estratégicas y clientes VIP que representan alto volumen de ingresos
- Reclamaciones y situaciones de crisis que pueden dañar la reputación de la marca
- Soporte técnico de nivel 3 que requiere conocimiento profundo del producto
- Feedback del cliente que alimenta el desarrollo del producto y la estrategia
- Decisiones de retención donde se ofrecen condiciones especiales o descuentos

Funciones con moderado riesgo (analizar con criterio):
- Soporte técnico de nivel 2: complejidad media, requiere formación profunda
- Gestión de devoluciones y compensaciones con cierta discrecionalidad
- Soporte en idiomas adicionales al principal

Funciones más seguras para externalizar:
- Atención de nivel 1: preguntas frecuentes, problemas estándar con soluciones documentadas
- Soporte en horarios de menor demanda o fuera del horario laboral
- Atención multicanal en canales de menor prioridad estratégica
- Procesamiento de tareas administrativas: cambios de datos, gestión de pedidos simples

Análisis financiero del modelo de CS
Cuantifica el coste de cada alternativa:
- Coste total del agente interno: salario, seguridad social, formación, equipamiento, espacio, management
- Coste del agente externalizado: precio por hora, minuto o contacto resuelto en BPO
- Coste de coordinación y calidad: tiempo interno dedicado a supervisar al proveedor
- Impacto en ingresos: ¿un peor NPS o mayor churn si externalizamos afecta a los ingresos?
- Cálculo del ROI de la calidad del servicio: cada punto de NPS cuánto vale en retención

Gestión de la calidad en el modelo externalizado
Define los mecanismos de control:
- Diseño del SLA de servicio: tiempos de respuesta, CSAT mínimo, tasa de resolución en primer contacto
- Sistema de formación y certificación del proveedor en el conocimiento del producto y la cultura de la empresa
- Proceso de monitorización de calidad: escucha de llamadas, revisión de tickets, mystery shopper
- Mecanismo de escalado para casos que superen la capacidad del agente externalizado
- Revisión periódica de rendimiento y proceso de mejora continua con el BPO

Gestión del conocimiento y cultura en el outsourcing de CS
Transmite lo que no puede documentarse:
- Cómo crear y mantener una base de conocimiento que habilite a agentes externos
- Transmisión del tono de voz y los valores de marca en la atención
- Formación continua del equipo externalizado en actualizaciones de producto y política de empresa
- Integración del agente externo en los flujos de feedback y mejora del producto

Genera una recomendación de modelo operativo de CS para una empresa de [INDICAR SECTOR] con [INDICAR VOLUMEN: número de contactos mensuales] y un NPS actual de [INDICAR NPS], analizando si el modelo actual de [INDICAR MODELO ACTUAL: 100% interno/mixto/100% externalizado] es el más adecuado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Evaluar con criterio estratégico y financiero si externalizar el servicio de atención al cliente',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para análisis make or buy en negocios freelance: qué externalizar para crecer',
                'description'      => 'Aplica el análisis make or buy a tu negocio freelance para identificar qué tareas puedes externalizar a otros freelancers o herramientas, liberando tiempo para las actividades de mayor valor y crecimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios para profesionales independientes y freelancers con amplia experiencia ayudando a profesionales autónomos a escalar sus negocios delegando de forma inteligente y construyendo redes de colaboradores especializados.

Tu objetivo es ayudarme a aplicar el análisis make or buy a mi negocio freelance, identificando qué actividades debo mantener bajo mi control directo (mi diferenciación) y cuáles puedo y debo externalizar a herramientas de IA, otros freelancers o servicios especializados para liberar tiempo y crecer.

Inventario de actividades de un negocio freelance
Mapea todo lo que haces en tu negocio:

Actividades de entrega de valor (tu trabajo principal):
- El servicio central que el cliente contrata y por el que te paga
- Consultoría y estrategia: el pensamiento diferenciado que aportas
- Supervisión de calidad del trabajo entregado bajo tu nombre

Actividades de gestión comercial:
- Captación de leads: networking, contenido, referidos
- Llamadas y reuniones de ventas
- Elaboración de propuestas y presupuestos
- Negociación y cierre de contratos

Actividades de entrega operativa:
- Producción del trabajo: redacción, diseño, código, análisis, etc.
- Revisión y control de calidad antes de la entrega
- Comunicación con el cliente durante el proyecto
- Gestión de cambios y ajustes post-entrega

Actividades de administración y gestión:
- Facturación, seguimiento de cobros y gestión de pagos
- Contabilidad y declaraciones fiscales
- Gestión del correo electrónico y agenda
- Gestión de contratos y documentación

Actividades de crecimiento y desarrollo:
- Creación de contenido para redes sociales y blog
- Formación y actualización de habilidades
- Gestión de la reputación online (reseñas, portfolio, LinkedIn)
- Construcción de red profesional y alianzas

Framework de decisión para el freelance
Aplica criterios adaptados a la realidad del trabajador independiente:

Criterio 1 — ¿Es esto lo que el cliente contrata?
Si el cliente te paga específicamente por hacer esto, hacerlo tú marca diferencia. Si al cliente no le importa quién lo hace realmente, es candidato a delegarse.

Criterio 2 — ¿Tienes ventaja comparativa?
¿Eres especialmente bueno en esto comparado con lo que puedes contratar? Si un especialista lo hace mejor y más barato, delega aunque sepas hacerlo.

Criterio 3 — ¿Cuánto tiempo consume vs. valor que genera?
Calcula el coste de oportunidad: si una tarea consume 5 horas y puedes delegarla por 50€, ¿qué puedes hacer con esas 5 horas que valga más de 50€?

Criterio 4 — ¿Qué riesgo implica delegar esto?
Evalúa el riesgo reputacional, de confidencialidad y de calidad de delegar cada actividad.

Herramientas y proveedores para la externalización freelance
Identifica las mejores opciones por categoría:

Administración y finanzas:
- Software de facturación automatizada: Holded, Quipu, Quaderno
- Gestorías especializadas en freelancers: coste vs. valor del tiempo ahorrado
- Asistentes virtuales para gestión de agenda y correo electrónico

Producción delegable:
- Plataformas de freelancers especializados: Workana, Fiverr, Toptal para tareas específicas
- Red de colaboradores de confianza para proyectos que superan tu capacidad
- Herramientas de IA para la producción inicial de contenido, código o análisis

Marketing y presencia online:
- Herramientas de IA para creación de contenido (posts, newsletters, propuestas)
- Programadores de redes sociales: Buffer, Hootsuite
- Gestores de comunidad para la interacción en redes cuando el volumen es alto

Plan de externalización progresiva
Construye el camino hacia un negocio más libre:
- Qué delegar primero: empieza por las tareas que más odias y más tiempo consumen
- Cómo encontrar y calificar colaboradores de confianza
- Proceso de onboarding de un colaborador: briefing, expectativas, sistema de revisión
- Gestión de la calidad sin microgestión: confianza y sistemas de verificación
- Cuándo pasar de colaboradores puntuales a acuerdos de colaboración estables

Métricas de éxito de la estrategia de externalización:
- Horas recuperadas para trabajo de alto valor o vida personal
- Ingresos por hora de trabajo directo antes y después de delegar
- Satisfacción personal: ¿disfruto más del trabajo que hago ahora?
- Crecimiento de ingresos: ¿la capacidad liberada se ha traducido en más clientes o proyectos mejores?

Crea un plan de externalización para los próximos 90 días para un freelance de [INDICAR ESPECIALIDAD] que actualmente factura [INDICAR FACTURACIÓN] trabajando [INDICAR HORAS] horas a la semana, con el objetivo de [INDICAR OBJETIVO: ganar más/trabajar menos/escalar].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Identificar qué externalizar en un negocio freelance para liberar tiempo y escalar los ingresos',
                'vote_score'       => 50,
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
